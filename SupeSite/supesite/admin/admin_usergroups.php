<?php

/*
	[SupeSite] (C) 2007-2009 Comsenz Inc.
	$Id: admin_usergroups.php 11220 2009-02-26 02:56:05Z zhaolei $
*/

if(!defined('IN_SUPESITE_ADMINCP')) {
	exit('Access Denied');
}

//Ȩ��
if(!checkperm('manageusergroups')) {
	showmessage('no_authority_management_operation');
}

//ȡ�õ�������
$thevalue = $list = array();
$_GET['groupid'] = empty($_GET['groupid'])?0:intval($_GET['groupid']);
if($_GET['groupid']) {
	$query = $_SGLOBAL['db']->query("SELECT * FROM ".tname('usergroups')." WHERE groupid='$_GET[groupid]'");
	if(!$thevalue = $_SGLOBAL['db']->fetch_array($query)) {
		showmessage('user_group_does_not_exist');
	}
}

if(submitcheck('thevaluesubmit')) {

	//�û�����
	$_POST['set']['grouptitle'] = shtmlspecialchars($_POST['set']['grouptitle']);
	if(empty($_POST['set']['grouptitle'])) showmessage('user_group_were_not_empty');
	$setarr = array('grouptitle' => $_POST['set']['grouptitle']);
	
	//��ϸȨ��
	$perms = array_keys($_POST['set']);
	$nones = array('groupid', 'grouptitle', 'system');
	foreach ($perms as $value) {
		if(!in_array($value, $nones)) {
			$_POST['set'][$value] = intval($_POST['set'][$value]);
			if($thevalue[$value] != $_POST['set'][$value]) {
				$setarr[$value] = $_POST['set'][$value];
			}
		}
	}

	if(empty($thevalue['groupid'])) {
		//���
		inserttable('usergroups', $setarr);
	} else {
		//����
		updatetable('usergroups', $setarr, array('groupid'=>$thevalue['groupid']));
	}
	
	//���»���
	include_once(S_ROOT.'./function/cache.func.php');
	updategroupcache();

	showmessage('do_success', S_URL.'/admincp.php?action=usergroups');
	
} elseif(submitcheck('copysubmit')) {
	
	//�Ƴ�����Ҫ���Ƶı���
	unset($thevalue['grouptitle']);
	unset($thevalue['groupid']);
	unset($thevalue['creditlower']);
	unset($thevalue['system']);
	$copyvalue = saddslashes($thevalue);
	foreach($_POST['aimgroup'] as $key => $value) {
		$groupid = intval($value);
		updatetable('usergroups', $copyvalue, array('groupid'=>$groupid));
	}
	
	//���»���
	include_once(S_ROOT.'./function/cache.func.php');
	updategroupcache();

	showmessage('do_success', S_URL.'/admincp.php?action=usergroups');
	
}

if(empty($_GET['op'])) {
	
	//����б�
	$query = $_SGLOBAL['db']->query("SELECT * FROM ".tname('usergroups'));
	while ($value = $_SGLOBAL['db']->fetch_array($query)) {
		$list[$value['system']][] = $value;
	}
	
} elseif ($_GET['op'] == 'add') {

	//���
	$thevalue = array('groupid' => 0);

} elseif ($_GET['op'] == 'copy') {
	
	//����
	$from = $thevalue['grouptitle'];
	$groupid = $thevalue['groupid'];
	$thevalue = array();
	$query = $_SGLOBAL['db']->query("SELECT * FROM ".tname('usergroups')." WHERE groupid!='$groupid'");
	while ($value = $_SGLOBAL['db']->fetch_array($query)) {
		$grouparr[] = $value;
	}

} elseif ($_GET['op'] == 'delete' && $thevalue) {

	//ɾ��
	if($thevalue['system'] != '1') {
		//ɾ��
		$_SGLOBAL['db']->query("DELETE FROM ".tname('usergroups')." WHERE groupid='$_GET[groupid]'");
	} else {
		showmessage('system_user_group_could_not_be_deleted');
	}

	//���»���
	include_once(S_ROOT.'./function/cache.func.php');
	updategroupcache();

	showmessage('do_success', S_URL.'/admincp.php?action=usergroups');
}

$output = '';
$s_url = S_URL;
if($_GET[op]=='copy') {
	$groupstr = '';
	if($grouparr) {
		foreach($grouparr as $key => $value) {
			$groupstr .= "<option value=\"$value[groupid]\">$value[grouptitle]</option>";
		}
	}

} elseif($_GET['op']=='add' || $_GET['op']=='edit') {

	foreach($thevalue as $key => $value) {
		if(strlen($value) == 1 && !in_array($key, array('groupid'))) $thevalue[$key] = empty($value) ? array(' checked','') : array('',' checked');
	}

}
include template('admin/tpl/usergroups.htm', 1);

?>