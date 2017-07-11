<?php

define("IN_UC", TRUE);
define('UC_ROOT', './');

@set_magic_quotes_runtime(0);
@set_time_limit(0);

if(!file_exists(UC_ROOT.'./data/config.inc.php')) {
	echo '�뽫�������Ƶ� UCenter Ŀ¼����ִ�С�';
	exit;
}

require UC_ROOT.'./data/config.inc.php';
require UC_ROOT.'./lib/db.class.php';

$limit = 5000;

$db = new db;
$db->connect(UC_DBHOST, UC_DBUSER, UC_DBPW, UC_DBNAME, UC_DBCHARSET);

$step = isset($_GET['step']) ? $_GET['step'] : '';
if($step === '') {

	if($db->query("SELECT * FROM ".UC_DBTABLEPRE."pms_old", 'SILENT')) {
		echo '���ϴ�ִ�й������򣬵�δѡ��ת�����������Զ���Ϣ�����Ƿ���������ѡ�������ѡ�';
		echo '<hr size=1>';
		echo '<br /><br /><a href="pmconvert.php?step=4">������ɾ�������ݱ���</a> <a href="pmconvert.php?step=5">���������ָ�����Ϊת��ǰ״̬</a>';
	} else {
		$pmcount = $db->result_first("SELECT count(*) FROM ".UC_DBTABLEPRE."pms");
		echo '<b>UCenter 1.5 ����Ϣ���ݸ�ʽת������</b><br />
		> ������������������ UCenter 1.5 �����Ϣ������ʾ�쳣����վ��<br />
		> ��ת�������п��ܻ��ʱ�ܳ������ҷǳ�����ϵͳ��Դ������ʱ���������Ϣ���ݵ���Ŀ��������<br />
		> �����ȷ��Ҫ����ת�����������ȹر�ȫվ��<br />
		> ��ת�������Ե�ǰ����Ϣ���ݽ��б��ݣ������ʹ�á�';
		echo '<hr size=1>';
		echo '��ǰ UCenter ����Ϣ������Ŀ��: '.$pmcount.'<br /><br /><a href="pmconvert.php?step=0">������￪ʼת��</a>';
	}

} elseif($step == 0) {

	echo '���ڽ���ת��ǰ��׼������ ......';
	redirect('pmconvert.php?step=1');

} elseif($step == 1) {

	$db->query("DROP TABLE IF EXISTS ".UC_DBTABLEPRE."pms_tmp");
	$db->query(createtable("CREATE TABLE ".UC_DBTABLEPRE."pms_tmp (
		  pmid int(10) unsigned NOT NULL auto_increment,
		  msgfrom varchar(15) NOT NULL default '',
		  msgfromid mediumint(8) unsigned NOT NULL default '0',
		  msgtoid mediumint(8) unsigned NOT NULL default '0',
		  folder enum('inbox','outbox') NOT NULL default 'inbox',
		  new tinyint(1) NOT NULL default '0',
		  subject varchar(75) NOT NULL default '',
		  dateline int(10) unsigned NOT NULL default '0',
		  message text NOT NULL,
		  delstatus tinyint(1) unsigned NOT NULL default '0',
		  related int(10) unsigned NOT NULL default '0',
		  fromappid SMALLINT(6) UNSIGNED NOT NULL DEFAULT '0',
		  PRIMARY KEY(pmid),
		  KEY msgtoid(msgtoid,folder,dateline),
		  KEY msgfromid(msgfromid,folder,dateline),
		  KEY related (related),
		  KEY getnum (msgtoid,folder,delstatus)
		) TYPE=MyISAM", UC_DBCHARSET));
	$totalcount = $db->result_first("SELECT count(*) FROM ".UC_DBTABLEPRE."pms");

	echo '����ת���û��Ķ���Ϣ 0.0000% ......';
	redirect('pmconvert.php?step=2&totalcount='.$totalcount);

} elseif($step == 2) {

	$totalcount = isset($_GET['totalcount']) ? intval($_GET['totalcount']) : 0;
	$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
	$msgfromid = isset($_GET['msgfromid']) ? intval($_GET['msgfromid']) : 0;
	$msgtoid = isset($_GET['msgtoid']) ? intval($_GET['msgtoid']) : 0;

	$query = $db->query("SELECT * FROM ".UC_DBTABLEPRE."pms ORDER BY msgfromid, msgtoid, dateline DESC LIMIT $start, $limit");

	if(!$db->num_rows($query)) {
		echo '�û��Ķ���Ϣת����� ......';
		redirect('pmconvert.php?step=3&totalcount='.$totalcount);
	} else {
		$last = $db->fetch_first("SELECT * FROM ".UC_DBTABLEPRE."pms_tmp ORDER BY pmid DESC LIMIT 1");
		while($pm = $db->fetch_array($query)) {
			if($pm['folder'] == 'inbox' && $pm['msgfromid'] > 0 && $pm['msgtoid'] > 0) {
				if($msgfromid != $pm['msgfromid'] || $msgtoid != $pm['msgtoid']) {
					insertrow($pm, 0);
				}
				if($last['subject'] != $pm['subject'] || $last['message'] != $pm['message'] || $last['dateline'] != $pm['dateline'] || $last['msgtoid'] != $pm['msgtoid']) {
					insertrow($pm, 1);
				}
				$msgfromid = $pm['msgfromid'];
				$msgtoid = $pm['msgtoid'];
				$last = $pm;
			} else {
				insertrow($pm, 0);
			}
		}
		$start += $limit;
		$percent = sprintf('%1.4f', $start / $totalcount * 100);
		$percent = $percent <= 100 ? $percent : 100;
		echo '����ת���û��Ķ���Ϣ '.$percent.'% ......';
		redirect('pmconvert.php?step=2&start='.$start.'&totalcount='.$totalcount.'&msgtoid='.$msgtoid.'&msgfromid='.$msgfromid, 100);
	}

} elseif($step == 3) {

	$totalcount = isset($_GET['totalcount']) ? intval($_GET['totalcount']) : 0;

	$query = $db->query("RENAME TABLE ".UC_DBTABLEPRE."pms TO ".UC_DBTABLEPRE."pms_old");
	$query = $db->query("RENAME TABLE ".UC_DBTABLEPRE."pms_tmp TO ".UC_DBTABLEPRE."pms");
	$pmcount = $db->result_first("SELECT count(*) FROM ".UC_DBTABLEPRE."pms");
	echo '����Ϣת����ϡ�����Զ���Ϣ�����Ƿ���������ѡ�������ѡ�';
	echo '<hr size=1>';
	echo 'ת��ǰ UCenter ����Ϣ������Ŀ��: '.$totalcount.'<br />ת���� UCenter ����Ϣ������Ŀ��: '.$pmcount.'<br /><br /><a href="pmconvert.php?step=4">������ɾ�������ݱ���</a> <a href="pmconvert.php?step=5">���������ָ�����Ϊת��ǰ״̬</a>';

} elseif($step == 4) {

	$query = $db->query("DROP TABLE IF EXISTS ".UC_DBTABLEPRE."pms_old");
	echo '����������ɾ������л��ʹ�ñ�ת������';
	echo '<hr size=1>';
	echo '<br /><br /><a href="pmconvert.php">������ʼҳ</a>';

} elseif($step == 5) {

	$query = $db->query("DROP TABLE IF EXISTS ".UC_DBTABLEPRE."pms");
	$query = $db->query("RENAME TABLE ".UC_DBTABLEPRE."pms_old TO ".UC_DBTABLEPRE."pms");
	echo '�����ѻָ���ת��ǰ״̬��';
	echo '<hr size=1>';
	echo '<br /><br /><a href="pmconvert.php">������ʼҳ</a>';

}

function redirect($url, $timeout = 1000) {
	$url = $url.(strstr($url, '&') ? '&' : '?').'t='.time();
	echo <<< EOT
<hr size=1>
<script language="JavaScript">
	function redirect() {
		window.location.replace('$url');
	}
	setTimeout('redirect();', $timeout);
</script>
<br /><br />
<a href="$url">��������Զ���תҳ�棬�����˹���Ԥ</a>
EOT;
}

function insertrow($pm, $related) {
	global $db;
	$pm = daddslashes($pm, 1);
	$db->query("REPLACE INTO ".UC_DBTABLEPRE."pms_tmp (msgfrom, msgfromid, msgtoid, folder, new, subject, dateline, message, delstatus, related, fromappid)
		VALUES ('$pm[msgfrom]', '$pm[msgfromid]', '$pm[msgtoid]', '$pm[folder]', '$pm[new]', '$pm[subject]', '$pm[dateline]', '$pm[message]', '$pm[delstatus]', '$related', '$pm[fromappid]')");
}

function createtable($sql, $dbcharset) {
	$type = strtoupper(preg_replace("/^\s*CREATE TABLE\s+.+\s+\(.+?\).*(ENGINE|TYPE)\s*=\s*([a-z]+?).*$/isU", "\\2", $sql));
	$type = in_array($type, array('MYISAM', 'HEAP')) ? $type : 'MYISAM';
	return preg_replace("/^\s*(CREATE TABLE\s+.+\s+\(.+?\)).*$/isU", "\\1", $sql).
		(mysql_get_server_info() > '4.1' ? " ENGINE=$type DEFAULT CHARSET=$dbcharset" : " TYPE=$type");
}

function daddslashes($string, $force = 0) {
	!defined('MAGIC_QUOTES_GPC') && define('MAGIC_QUOTES_GPC', get_magic_quotes_gpc());
	if(!MAGIC_QUOTES_GPC || $force) {
		if(is_array($string)) {
			foreach($string as $key => $val) {
				$string[$key] = daddslashes($val, $force);
			}
		} else {
			$string = addslashes($string);
		}
	}
	return $string;
}

?>