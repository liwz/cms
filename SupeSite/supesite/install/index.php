<?php
/*
	[SupeSite] (C) 2007-2009 Comsenz Inc.
	$Id: index.php 11778 2009-03-25 02:20:19Z zhaofei $
*/

@define('IN_SUPESITE', TRUE);

error_reporting(0);
$_SGLOBAL = $_SCONFIG = array();

//����Ŀ¼
define('S_ROOT', substr(dirname(__FILE__), 0, -7));

include_once(S_ROOT.'./function/common.func.php');

//��ȡʱ��
$_SGLOBAL['timestamp'] = time();

if(!@include_once(S_ROOT.'./config.php')) {
	@include_once(S_ROOT.'./config.new.php');
	show_msg('����Ҫ���Ƚ������Ŀ¼����� "config.new.php" �ļ�������Ϊ "config.php"', 999);
}

extract($_SC);

//GPC����
if(!(get_magic_quotes_gpc())) {
	$_GET = saddslashes($_GET);
	$_POST = saddslashes($_POST);
}

ob_start();

$theurl = 'index.php';
$sqlfile = S_ROOT.'./data/install.sql';
if(!file_exists($sqlfile)) {
	show_msg('���ϴ����µ� install.sql ���ݿ�ṹ�ļ�������� ./data Ŀ¼���棬���������б�����', 999);
}
$configfile = S_ROOT.'./config.php';

//����
$step = empty($_GET['step'])?0:intval($_GET['step']);
$action = empty($_GET['action'])?'':trim($_GET['action']);
$nowarr = array('','','','','','','');
$formhash = formhash();

$lockfile = S_ROOT.'./data/install.lock';
if(file_exists($lockfile)) {
	show_msg('����!���Ѿ���װ��SupeSite<br>
		Ϊ�˱�֤���ݰ�ȫ���������ֶ�ɾ�� install/index.php �ļ�<br>
		����������°�װSupeSite����ɾ�� data/install.lock �ļ����ٴ����а�װ�ļ�');
}

//���config�Ƿ��д
if(!@$fp = fopen($configfile, 'a')) {
	show_msg("�ļ� $configfile ��дȨ�����ô���������Ϊ��д����ִ�а�װ����");
} else {
	@fclose($fp);
}

//�ύ����
if (submitcheck('ucsubmit')) {

	//��װUC����
	$step = 1;

	//�ж������Ƿ����
	$ucapi = preg_replace("/\/$/", '', trim($_POST['ucapi']));
	$ucip = trim($_POST['ucip']);

	if(empty($ucapi) || !preg_match("/^(http:\/\/)/i", $ucapi)) {
		show_msg('UCenter��URL��ַ����ȷ');
	} else {
		//�������� dns �����Ƿ�����, dns ������������Ҫ���û�����ucenter��ip��ַ
		if(!$ucip) {
			$temp = @parse_url($ucapi);
			$ucip = gethostbyname($temp['host']);
			if(ip2long($ucip) == -1 || ip2long($ucip) === FALSE) {
				$ucip = '';
			}
		}
	}

	//��֤supesite�Ƿ�װ
	if(!@include_once S_ROOT.'./uc_client/client.php') {
		show_msg('uc_clientĿ¼������');
	}
	$ucinfo = sfopen($ucapi.'/index.php?m=app&a=ucinfo&release='.UC_CLIENT_RELEASE, 500, '', '', 1, $ucip);
	list($status, $ucversion, $ucrelease, $uccharset, $ucdbcharset, $apptypes) = explode('|', $ucinfo);
	$dbcharset = strtolower(trim($_SC['dbcharset'] ? str_replace('-', '', $_SC['dbcharset']) : $_SC['dbcharset']));
	$ucdbcharset = strtolower(trim($ucdbcharset ? str_replace('-', '', $ucdbcharset) : $ucdbcharset));
	$apptypes = strtolower(trim($apptypes));
	if($status != 'UC_STATUS_OK') {
		show_header();
		print<<<END
		<form id="theform" method="post" action="$theurl">
		<table class="datatable">
		<tr><td><strong>UCenter�޷��������ӣ����ش��� ( $status )����ȷ��UCenter��IP��ַ�Ƿ���ȷ</strong><br><br></td></tr>
		<tr><td>UCenter��������IP��ַ: <input type="text" name="ucip" value="$ucip"> ���磺192.168.0.1</td></tr>
		</table>
		<table class=button>
		<tr><td>
		<input type="hidden" name="ucapi" value="$ucapi">
		<input type="hidden" name="ucfounderpw" value="$_POST[ucfounderpw]">
		<input type="submit" id="ucsubmit" name="ucsubmit" value="ȷ��IP��ַ"></td></tr>
		</table>
		<input type="hidden" name="formhash" value="$formhash">
		</form>
END;
		show_footer();
		exit();
	} elseif($dbcharset && $ucdbcharset && $ucdbcharset != $dbcharset) {
		show_msg('UCenter ������ַ����뵱ǰӦ�õ��ַ�����ͬ�������� '.$ucdbcharset.' ����� SupeSite ���а�װ�����ص�ַ��http://download.comsenz.com/');
	}
	$tagtemplates = 'apptagtemplates[template]='.urlencode('<a href="{url}" target="_blank">{subject}</a>').'&'.
		'apptagtemplates[fields][subject]='.urlencode('��Ѷ����').'&'.
		'apptagtemplates[fields][url]='.urlencode('��Ѷ��ַ');
	$uri = $_SERVER['REQUEST_URI']?$_SERVER['REQUEST_URI']:($_SERVER['PHP_SELF']?$_SERVER['PHP_SELF']:$_SERVER['SCRIPT_NAME']);
	$app_url = strtolower(substr($_SERVER['SERVER_PROTOCOL'], 0, strpos($_SERVER['SERVER_PROTOCOL'], '/'))).'://'.$_SERVER['HTTP_HOST'].substr($uri, 0, strrpos($uri, '/install/'));
	$app_name = trim($_POST['sitename']);
	$postdata = "m=app&a=add&ucfounder=&ucfounderpw=".urlencode($_POST['ucfounderpw'])."&apptype=".urlencode('SUPESITE')."&appname=".urlencode($app_name)."&appurl=".urlencode($app_url)."&appip=&appcharset=".$_SC['charset'].'&appdbcharset='.$_SC['dbcharset'].'&release='.UC_CLIENT_RELEASE.'&'.$tagtemplates;
	$s = sfopen($ucapi.'/index.php', 500, $postdata, '', 1, $ucip);
	if(empty($s)) {
		show_msg('UCenter�û������޷�����');
	} elseif($s == '-1') {
		show_msg('UCenter����Ա�ʺ����벻��ȷ');
	} else {
		$ucs = explode('|', $s);
		if(empty($ucs[0]) || empty($ucs[1])) {
			show_msg('UCenter���ص����ݳ������⣬��ο�:<br />'.shtmlspecialchars($s));
		} else {

			//����ɹ�
			$apphidden = '';
			//��֤�Ƿ����ֱ������MySQL
			$link = mysql_connect($ucs[2], $ucs[4], $ucs[5], 1);
			$connect = $link && mysql_select_db($ucs[3], $link) ? 'mysql' : '';
			//����
			foreach (array('key', 'appid', 'dbhost', 'dbname', 'dbuser', 'dbpw', 'dbcharset', 'dbtablepre', 'charset') as $key => $value) {
				if($value == 'dbtablepre') {
					$ucs[$key] = '`'.$ucs[3].'`.'.$ucs[$key];
				}
				$apphidden .= "<input type=\"hidden\" name=\"uc[$value]\" value=\"".$ucs[$key]."\" />";
			}
			//����
			$apphidden .= "<input type=\"hidden\" name=\"uc[connect]\" value=\"$connect\" />";
			$apphidden .= "<input type=\"hidden\" name=\"uc[api]\" value=\"$_POST[ucapi]\" />";
			$apphidden .= "<input type=\"hidden\" name=\"uc[ip]\" value=\"$ucip\" />";

			show_header();
			print<<<END
			<form id="theform" method="post" action="$theurl">
			<table>
			<tr><td>UCenterע��ɹ�����ǰ����ID��ʶΪ: $ucs[1]</td></tr>
			</table>

			<table class=button>
			<tr><td>$apphidden
			<input type="submit" id="uc2submit" name="uc2submit" value="������һ��"></td></tr>
			</table>
			<input type="hidden" name="formhash" value="$formhash">
			</form>
END;
			show_footer();
			exit();
		}
	}

} elseif (submitcheck('uc2submit')) {

	//����congfig����
	$step = 2;

	//д��config�ļ�
	$configcontent = sreadfile($configfile);
	$keys = array_keys($_POST['uc']);
	foreach ($keys as $value) {
		$upkey = strtoupper($value);
		$configcontent = preg_replace("/define\('UC_".$upkey."'\s*,\s*'.*?'\)/i", "define('UC_".$upkey."', '".$_POST['uc'][$value]."')", $configcontent);
	}
	if(!$fp = fopen($configfile, 'w')) {
		show_msg("�ļ� $configfile ��дȨ�����ô���������Ϊ��д����ִ�а�װ����");
	}
	fwrite($fp, trim($configcontent));
	fclose($fp);

} elseif(!empty($_POST['sqlsubmit'])) {

	$step = 2;

	//��д��config�ļ�
	$configcontent = sreadfile($configfile);
	$keys = array_keys($_POST['db']);
	foreach ($keys as $value) {
		$configcontent = preg_replace("/[$]\_SC\[\'".$value."\'\](\s*)\=\s*[\"'].*?[\"']/is", "\$_SC['".$value."']\\1= '".$_POST['db'][$value]."'", $configcontent);
	}
	if(trim($_POST['siteurl']) != $siteurl){
		$configcontent = preg_replace("/[$]\_SC\[\'siteurl\'\](\s*)\=\s*[\"'].*?[\"']/is", "\$_SC['siteurl']\\1= '".$_POST['siteurl']."'", $configcontent);
	}
	if(!$fp = fopen($configfile, 'w')) {
		show_msg("�ļ� $configfile ��дȨ�����ô���������Ϊ��д����ִ�а�װ����");
	}
	fwrite($fp, trim($configcontent));
	fclose($fp);

	//�ж�SupeSite���ݿ�
	$havedata = false;
	if(!@mysql_connect($_POST['db']['dbhost'], $_POST['db']['dbuser'], $_POST['db']['dbpw'])) {
		show_msg('�������SupeSite���ݿ��ʺŲ���ȷ');
	}
	if(mysql_select_db($_POST['db']['dbname'])) {
		if(mysql_query("SELECT COUNT(*) FROM {$_POST['db']['tablepre']}members")) {
			$havedata = true;
		}
	} else {
		if(!mysql_query("CREATE DATABASE `".$_POST['db']['dbname']."`")) {
			show_msg('�趨��SupeSite���ݿ���Ȩ�޲����������ֹ���������ִ�а�װ����');
		}
	}

	if($havedata) {
		show_msg('Σ��!ָ����SupeSite���ݿ��������ݣ���������������ԭ������!', ($step+1));
	} else {
		show_msg('���ݿ����óɹ���������һ������', ($step+1), 1);
	}

} elseif (submitcheck('opensubmit')) {

	//����û����
	$step = 5;

	include_once(S_ROOT.'./common.php');

	//UCע���û�
	if(!@include_once S_ROOT.'./uc_client/client.php') {
		showmessage('system_error');
	}
	$uid = uc_user_register($_POST['username'], $_POST['password'], 'webmastor@yourdomain.com');
	if($uid == -3) {
		//�Ѵ��ڣ���¼
		if(!$passport = getpassport($_POST['username'], $_POST['password'])) {
			show_msg('������û������벻��ȷ����ȷ��');
		}
		$setarr = array(
			'uid' => $passport['uid'],
			'username' => addslashes($passport['username'])
		);
	} elseif($uid > 0) {
		$setarr = array(
			'uid' => $uid,
			'username' => $_POST['username']
		);
	} else {
		show_msg('������û����޷�ע�ᣬ������ȷ��');
	}
	$setarr['dateline'] = $_SGLOBAL['timestamp'];
	$setarr['updatetime'] = $_SGLOBAL['timestamp'];
	$setarr['lastlogin'] = $_SGLOBAL['timestamp'];
	$setarr['ip'] = $_SGLOBAL['onlineip'];
	$setarr['password'] = md5("$setarr[uid]|$_SGLOBAL[timestamp]");//���������������
	$setarr['groupid'] = 1;//����Ա

	//���±����û���
	inserttable('members', $setarr, 0, true);

	//�����ܱ���
	$result = uc_user_addprotected($_POST['username'], $_POST['username']);

	//����cookie
	ssetcookie('auth', authcode("$setarr[password]\t$setarr[uid]", 'ENCODE'), 2592000);

	//дlog
	if(@$fp = fopen($lockfile, 'w')) {
		fwrite($fp, 'SupeSite');
		fclose($fp);
	}

	show_msg('<font color="red">��ϲ! SupeSite��װȫ�����!</font>
		<br>Ϊ���������ݰ�ȫ�����¼ftp��ɾ������װ�ļ�<br><br>
		���Ĺ���Ա����Ѿ��ɹ�ȷ�ϡ��������������ԣ�<br>
		<br><a href="../admincp.php" target="_blank">����վ�����ƽ̨</a>
		<br>�Թ���Ա��ݶ�վ�������������
		<br><a href="../index.php" target="_blank">����վ����ҳ</a>
		<br>���������Լ���վ����ҳ', 999);

}

if(empty($step)) {

	show_header();

	//���Ȩ������
	$checkok = true;
	$perms = array();
	if(!checkfdperm(S_ROOT.'./config.php', 1)) {
		$perms['config'] = 'ʧ��';
		$checkok = false;
	} else {
		$perms['config'] = 'OK';
	}
	if(!checkfdperm(S_ROOT.'./attachments/')) {
		$perms['attachments'] = 'ʧ��';
		$checkok = false;
	} else {
		$perms['attachments'] = 'OK';
	}
	if(!checkfdperm(S_ROOT.'./cache/')) {
		$perms['cache'] = 'ʧ��';
		$checkok = false;
	} else {
		$perms['cache'] = 'OK';
	}
	if(!checkfdperm(S_ROOT.'./channel/')) {
		$perms['channel'] = 'ʧ��';
		$checkok = false;
	} else {
		$perms['channel'] = 'OK';
	}
	if(!checkfdperm(S_ROOT.'./html/')) {
		$perms['html'] = 'ʧ��';
		$checkok = false;
	} else {
		$perms['html'] = 'OK';
	}
	if(!checkfdperm(S_ROOT.'./log/')) {
		$perms['log'] = 'ʧ��';
		$checkok = false;
	} else {
		$perms['log'] = 'OK';
	}
	if(!checkfdperm(S_ROOT.'./styles/')) {
		$perms['styles'] = 'ʧ��';
		$checkok = false;
	} else {
		$perms['styles'] = 'OK';
	}
	if(!checkfdperm(S_ROOT.'./model/')) {
		$perms['model'] = 'ʧ��';
		$checkok = false;
	} else {
		$perms['model'] = 'OK';
	}
	if(!checkfdperm(S_ROOT.'./data/')) {
		$perms['data'] = 'ʧ��';
		$checkok = false;
	} else {
		$perms['data'] = 'OK';
	}
	if(!checkfdperm(S_ROOT.'./uc_client/data/')) {
		$perms['uc_data'] = 'ʧ��';
		$checkok = false;
	} else {
		$perms['uc_data'] = 'OK';
	}

	//��װ�Ķ�
	print<<<END
	<script type="text/javascript">
	function readme() {
		var tbl_readme = document.getElementById('tbl_readme');
		if(tbl_readme.style.display == '') {
			tbl_readme.style.display = 'none';
		} else {
			tbl_readme.style.display = '';
		}
	}
	</script>
	<table class="showtable">
	<tr><td>
	<strong>��ӭ��ʹ��SupeSite �����Ż���Ʒ</strong><br>
	ϣ�����ǵ�Ŭ����Ϊ���ṩһ����Ч���ٵ������Ż����������
	<br><a href="javascript:;" onclick="readme()"><strong>���������Ķ����ǵ����ʹ����ȨЭ��</strong></a>
	</td></tr>
	</table>

	<table>
	</td></tr>
	<tr><td>
	<strong>�ļ�/Ŀ¼Ȩ������</strong><br>
	����ִ�а�װ�ļ����а�װ֮ǰ����Ҫ������ص�Ŀ¼���ԣ��Ա������ļ����Ա�������ȷ��/д/ɾ/������Ŀ¼��<br>
	�Ƽ�����������<br>ʹ�� FTP �����¼���ķ���������������������Ŀ¼���Լ���Ŀ¼����������ļ�����������Ϊ777��win����������internet�����ʻ��ɶ�д����<br>
	<table class="datatable">
	<tr style="font-weight:bold;"><td>����</td><td>����Ȩ������</td><td>˵��</td><td>�����</td></tr>
	<tr><td><strong>./config.php</strong></td><td>��/д</td><td>ϵͳ�����ļ�</td><td>$perms[config]</td></tr>
	<tr><td><strong>./attachments/</strong> (������Ŀ¼����Ŀ¼���ļ�)</td><td>��/д/ɾ</td><td>����Ŀ¼</td><td>$perms[attachments]</td></tr>
	<tr><td><strong>./cache/</strong> (������Ŀ¼����Ŀ¼���ļ�)</td><td>��/д/ɾ</td><td>����Ŀ¼</td><td>$perms[cache]</td></tr>
	<tr><td><strong>./channel/</strong> (������Ŀ¼����Ŀ¼���ļ�)</td><td>��/д/ɾ</td><td>Ƶ��Ŀ¼</td><td>$perms[channel]</td></tr>
	<tr><td><strong>./html/</strong> (������Ŀ¼����Ŀ¼���ļ�)</td><td>��/д/ɾ</td><td>htmlĿ¼</td><td>$perms[html]</td></tr>
	<tr><td><strong>./log/</strong> (������Ŀ¼����Ŀ¼���ļ�)</td><td>��/д/ɾ</td><td>logĿ¼</td><td>$perms[log]</td></tr>
	<tr><td><strong>./styles/</strong> (������Ŀ¼����Ŀ¼���ļ�)</td><td>��/д/ɾ</td><td>ģ����Ŀ¼</td><td>$perms[styles]</td></tr>
	<tr><td><strong>./model/</strong> (������Ŀ¼����Ŀ¼���ļ�)</td><td>��/д/ɾ</td><td>ģ��Ŀ¼</td><td>$perms[model]</td></tr>
	<tr><td><strong>./data/</strong> (������Ŀ¼����Ŀ¼���ļ�)</td><td>��/д/ɾ</td><td>վ������Ŀ¼</td><td>$perms[data]</td></tr>
	<tr><td><strong>./uc_client/data/</strong> (������Ŀ¼����Ŀ¼���ļ�)</td><td>��/д/ɾ</td><td>uc_client����Ŀ¼</td><td>$perms[uc_data]</td></tr>
	</table>
	</td></tr>
	</table>
END;

	if(!$checkok) {
		echo "<table><tr><td><b>��������</b>:<br>ϵͳ��⵽����Ŀ¼���ļ�Ȩ��û����ȷ����<br>ǿ�ҽ�����������Ȩ�޺���ˢ�±�ҳ���Ա������װ<br>����ϵͳ���ܻ�����޷�Ԥ�ϵ����� [<a href=\"$theurl?step=1\">ǿ�Ƽ���</a>]</td></tr></table>";
	} else {
		$ucapi = empty($_POST['ucapi'])?'/':$_POST['ucapi'];
		$ucfounderpw = empty($_POST['ucfounderpw'])?'':$_POST['ucfounderpw'];
		print <<<END
		<form id="theform" method="post" action="$theurl?step=1">
			<table class=button>
				<tr>
					<td><input type="submit" id="startsubmit" name="startsubmit" value="������ȨЭ�飬��ʼ��װSupeSite"></td>
				</tr>
			</table>
			<input type="hidden" name="ucapi" value="$ucapi" />
			<input type="hidden" name="ucfounderpw" value="$ucfounderpw" />
			<input type="hidden" name="formhash" value="$formhash">
		</form>
END;
	}

	print<<<END
	<table id="tbl_readme" style="display:none;" class="showtable">
	<tr>
	<td><strong>���������ϸ�Ķ���������Э��:</strong> </td></tr>
	<tr>
	<td>
	<div>���İ���ȨЭ�� �����������û�
	<p>��Ȩ���� (C) 2001-2009����ʢ���루�������Ƽ����޹�˾<br>��������Ȩ����
	</p><p>��л��ѡ�� SupeSite �����Ż���Ʒ��ϣ�����ǵ�Ŭ����Ϊ���ṩһ����Ч���ٵ������Ż����������
	</p><p>��ʢ���루�������Ƽ����޹�˾Ϊ SupeSite ��Ʒ�Ŀ����̣���������ӵ�� SupeSite ��Ʒ����Ȩ���й����Ұ�Ȩ�� ����Ȩ�ǼǺ� 2006SR12090������ʢ���루�������Ƽ����޹�˾��ַΪ
	http://www.comsenz.com��SupeSite �ٷ���վ��ַΪ http://www.supesite.com��
	</p><p>SupeSite ����Ȩ�����л����񹲺͹����Ұ�Ȩ��ע�ᣬ����Ȩ�ܵ����ɺ͹��ʹ�Լ������ʹ���ߣ����۸��˻���֯��ӯ�������;���
	��������ѧϰ���о�ΪĿ�ģ���������ϸ�Ķ���Э�飬����⡢ͬ�⡢�����ر�Э���ȫ������󣬷��ɿ�ʼʹ�� SupeSite �����
	</p><p>��ʢ���루�������Ƽ����޹�˾ӵ�жԱ���ȨЭ������ս���Ȩ��
	<ul type=i>
	<p>
	<li><b>Э����ɵ�Ȩ��</b>
	<ul type=1>
	<li>����������ȫ���ر������û���ȨЭ��Ļ����ϣ��������Ӧ���ڷ���ҵ��;��������֧�������Ȩ��Ȩ���á�
	<li>��������Э��涨��Լ�������Ʒ�Χ���޸� SupeSite Դ����(������ṩ�Ļ�)�����������Ӧ������վҪ��
	<li>��ӵ��ʹ�ñ����������վ����ȫ����Ա���ϡ����¼������Ϣ������Ȩ���������е����������ݵ���ط�������
	<li>�����ҵ��Ȩ֮�������Խ������Ӧ������ҵ��;��ͬʱ�������������Ȩ������ȷ���ļ���֧�����ޡ�����֧�ַ�ʽ�ͼ���֧�����ݣ�
	�Թ���ʱ�����ڼ���֧��������ӵ��ͨ��ָ���ķ�ʽ���ָ����Χ�ڵļ���֧�ַ�����ҵ��Ȩ�û����з�ӳ����������Ȩ����������
	������Ϊ��Ҫ���ǣ���û��һ�������ɵĳ�ŵ��֤�� </li></ul>
	<p></p>
	<li><b>Э��涨��Լ��������</b>
	<ul type=1>
	<li>δ����ҵ��Ȩ֮ǰ�����ý������������ҵ��;����������������ҵ��վ����Ӫ����վ����Ӫ��ΪĿ��ʵ��ӯ������վ����������ҵ��Ȩ���¼http://www.discuz.com�ο����˵����Ҳ�����µ�8610-51657885�˽����顣
	<li>���öԱ��������֮��������ҵ��Ȩ���г��⡢���ۡ���Ѻ�򷢷������֤��
	<li>������Σ���������;��Ρ��Ƿ񾭹��޸Ļ��������޸ĳ̶���Σ�ֻҪʹ�� SupeSite ��������κβ��֣�δ��������ɣ�����ҳ��ҳ�Ŵ�
	�� SupeSite ���ƺͿ�ʢ���루�������Ƽ����޹�˾������վ��http://www.comsenz.com��http://www.supesite.com�� �� ���Ӷ����뱣����������������޸ġ�
	<li>��ֹ�� SupeSite ��������κβ��ֻ������Է�չ�κ������汾���޸İ汾��������汾�������·ַ���
	<li>�����δ�����ر�Э������������Ȩ������ֹ��������ɵ�Ȩ�������ջأ����е���Ӧ�������Ρ� </li></ul>
	<p></p>
	<li><b>���޵�������������</b>
	<ul type=1>
	<li>����������������ļ�����Ϊ���ṩ�κ���ȷ�Ļ��������⳥�򵣱�����ʽ�ṩ�ġ�
	<li>�û�������Ը��ʹ�ñ�������������˽�ʹ�ñ�����ķ��գ�����δ�����Ʒ��������֮ǰ�����ǲ���ŵ�ṩ�κ���ʽ�ļ���֧�֡�ʹ�õ�����
	Ҳ���е��κ���ʹ�ñ���������������������Ρ�
	<li>��ʢ���루�������Ƽ����޹�˾����ʹ�ñ����������վ���е����»���Ϣ�е����Ρ� </li></ul></li></ul>
	<p>�й� SupeSite �����û���ȨЭ�顢��ҵ��Ȩ�뼼���������ϸ���ݣ����� SupeSite �ٷ���վ�����ṩ����ʢ���루�������Ƽ����޹�˾ӵ���ڲ� ����֪ͨ������£��޸���ȨЭ��ͷ����Ŀ���Ȩ�����޸ĺ��Э����Ŀ����Ըı�֮���������Ȩ�û���Ч��
	<p>�����ı���ʽ����ȨЭ����ͬ˫������ǩ���Э��һ����������ȫ�ĺ͵�ͬ�ķ���Ч������һ����ʼ��װ SupeSite��������Ϊ��ȫ��Ⲣ���ܱ�Э��ĸ�������������������������Ȩ����ͬʱ���ܵ���ص�Լ�������ơ�Э����ɷ�Χ�������Ϊ����ֱ��Υ������ȨЭ�鲢������Ȩ��������Ȩ��ʱ��ֹ��Ȩ������ֹͣ�𺦣�������׷��������ε�Ȩ���� </p></div>
	</td></tr>
	</table>
END;

	show_footer();

} elseif($step == 1) {

	show_header();
	$ucapi = "http://";
	$ucfounderpw = '';
	$showdiv = 0;
	if($_POST['ucfounderpw']) {
		$showdiv = 1;
		$ucapi = trim($_POST['ucapi']);
		$ucfounderpw = trim($_POST['ucfounderpw']);
	}

	if($showdiv) {
		print<<<END
		<form id="theform" method="post" action="$theurl">
		<div>
			<table class="showtable">
				<tr><td><strong># UCenter �����Զ���ȡ</strong></td></tr>
				<tr><td id="msg2">UCenter�������Ϣ�ѳɹ���ȡ����ֱ������İ�ť�ύ����</td></tr>
			</table>
			<br/>
		</div>
		<div>
END;
	} else {
		$plus = '';
		if(!$ucfounderpw) {
			$plus = '<tr><td id="msg2">
					ʹ��SupeSite��������Ҫ����վ�㰲װ��ͳһ�洢�û��ʺ���Ϣ��UCenter�û�����ϵͳ��<br>
					�������վ�㻹û�а�װ��UCenter��������������<br>
					1. <a href="http://download.comsenz.com/UCenter/" target="_blank"><b>���������������°汾��UCenter</b></a>�����Ķ�������е�˵������UCenter�İ�װ��<br>
					2. ��װ��� UCenter ������������UCenter�������Ϣ���ɼ�������SupeSite �İ�װ��<br>
				</td></tr>';
		}
		print<<<END
		<form id="theform" method="post" action="$theurl">
		<div>
			<table class="showtable">
				<tr><td><strong># ����д UCenter ����ز���</strong></td></tr>
				$plus
			</table>
			<br>
			<p style="font-weight:bold;">�������Ѱ�װUCenter����Ϣ:</p>
END;
	}
	print<<<END
		<table class=datatable>
			<tbody>
				<tr>
					<td>UCenter ��URL:</td>
					<td><input type="text" id="ucapi" name="ucapi" size="60" value="$ucapi"><br>���磺http://www.discuz.net/ucenter</td>
				</tr>
				<tr>
					<td>UCenter �Ĵ�ʼ������:</td>
					<td><input type="password" id="ucfounderpw" name="ucfounderpw" size="20" value="$ucfounderpw"></td>
				</tr>
			</tbody>
		</table>
		<p style="font-weight:bold;">����дվ����Ϣ:</p>
		<table class="datatable">
			<tbody>
				<tr>
					<td width="26%"> վ������:</td>
					<td><input type="text" class="txt" size="20" value="SupeSite" name="sitename"/></td>
				</tr>
			</tbody>
		</table>
	</div>

	<table class=button>
	<tr><td><input type="submit" id="ucsubmit" name="ucsubmit" value="�ύUCenter������Ϣ"></td></tr>
	</table>
	<input type="hidden" id="ucfounder" name="ucfounder" size="20" value="">
	<input type="hidden" name="formhash" value="$formhash">
	</form>
END;
	show_footer();

} elseif ($step == 2) {

	//���Ŀ¼����
	show_header();
	//�������ݿ�����
	print<<<END
	<form id="theform" method="post" action="$theurl">

	<table class="showtable">
	<tr><td><strong># ����SupeSite���ݿ���Ϣ</strong></td></tr>
	<tr><td id="msg1">��������SupeSite�����ݿ���Ϣ</td></tr>
	</table>
	<table class=datatable>
	<tr>
	<td width="25%">���ݿ���������ص�ַ:</td>
	<td><input type="text" name="db[dbhost]" size="20" value="localhost"></td>
	<td width="30%">һ��Ϊlocalhost</td>
	</tr>
	<tr>
	<td>���ݿ��û���:</td>
	<td><input type="text" name="db[dbuser]" size="20" value=""></td>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td>���ݿ�����:</td>
	<td><input type="password" name="db[dbpw]" size="20" value=""></td>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td>���ݿ��ַ���:</td>
	<td>
	<select name="db[dbcharset]" onchange="addoption(this)">
	<option value="$dbcharset">$dbcharset</option>
	<option value="gbk">gbk</option>
	<option value="utf8">utf8</option>
	<option value="big5">big5</option>
	<option value="latin1">latin1</option>
	<option value="addoption" class="addoption">+�Զ���</option>
	</select>
	</td>
	<td>MySQL�汾>4.1����Ч</td>
	</tr>
	<tr>
	<td>���ݿ���:</td>
	<td><input type="text" name="db[dbname]" size="20" value=""></td>
	<td>��������ڣ���᳢���Զ�����</td>
	</tr>
	<tr>
	<td>����ǰ׺:</td>
	<td><input type="text" name="db[tablepre]" size="20" value="supe_"></td>
	<td>Ĭ��Ϊsupe_</td>
	</tr>
	<tr><td><strong style="color:red;">SupeSiteվ��URL��ַ</strong><br>�����д׼ȷ</td>
		<td><input type="text" name="siteurl" value="$siteurl" size="25"></td><td style="color:red;">������д��http://��ͷ������URL��Ҳ������д��"/"��ͷ�����URL(�������վ��Ŀ¼��������дΪ��)��ĩβ��Ҫ�� /</td>
		</tr>
	</table>

	<table class=button>
	<tr><td>
	<input type="hidden" name="formhash" value="$formhash">
	<input type="submit" id="sqlsubmit" name="sqlsubmit" value="�������,����ҵ����ݿ�����"></td></tr>
	</table>
	</form>
END;
	show_footer();

} elseif ($step == 3) {

	//�������ݿ�
	dbconnect();

	//��װ���ݿ�
	//��ȡ���µ�sql��
	$newsql = sreadfile($sqlfile);

	if($_SC['tablepre'] != 'supe_') $newsql = str_replace('supe_', $_SC['tablepre'], $newsql);//�滻����ǰ׺

	//��ȡҪ�����ı�
	$tables = $sqls = array();
	if($newsql) {
		preg_match_all("/(CREATE TABLE ([a-z0-9\_\-`]+).+?\s*)(TYPE|ENGINE)+\=/is", $newsql, $mathes);
		$sqls = $mathes[1];
		$tables = $mathes[2];
	}
	if(empty($tables)) {
		show_msg("��װSQL����ȡʧ�ܣ���ȷ��SQL�ļ� $sqlfile �Ƿ����");
	}

	$heaptype = $_SGLOBAL['db']->version()>'4.1'?" ENGINE=MEMORY".(empty($_SC['dbcharset'])?'':" DEFAULT CHARSET=$_SC[dbcharset]" ):" TYPE=HEAP";
	$myisamtype = $_SGLOBAL['db']->version()>'4.1'?" ENGINE=MYISAM".(empty($_SC['dbcharset'])?'':" DEFAULT CHARSET=$_SC[dbcharset]" ):" TYPE=MYISAM";
	$installok = true;
	foreach ($tables as $key => $tablename) {
		if(strpos($tablename, 'session')) {
			$sqltype = $heaptype;
		} else {
			$sqltype = $myisamtype;
		}
		$_SGLOBAL['db']->query("DROP TABLE IF EXISTS $tablename");
		if(!$query = $_SGLOBAL['db']->query($sqls[$key].$sqltype, 'SILENT')) {
			$installok = false;
			break;
		}
	}
	if(!$installok) {
		show_msg("<font color=\"blue\">���ݱ� ($tablename) �Զ���װʧ��</font><br />����: ".mysql_error()."<br /><br />����� $sqlfile �ļ��е�SQL�ģ��Լ��ֹ���װ���ݿ���ټ������а�װ����<br /><br /><a href=\"?step=$step\">����</a>");
	} else {
		show_msg('���ݱ��Ѿ�ȫ����װ��ɣ�������һ������', ($step+1), 1);
	}

} elseif ($step == 4) {

	dbconnect();

	//config
	$sitekey = mksitekey();
	$datas = array(
		"'allowcache', '1'",
		"'allowguest', '0'",
		"'attachmentdir', './attachments'",
		"'attachmentdirtype', 'month'",
		"'allowregister', '1'",
		"'attachmenturl', ''",
		"'bbsurltype', 'site'",
		"'checkgrade', ''",
		"'debug', '0'",
		"'gzipcompress', '0'",
		"'htmldir', './html'",
		"'htmlurl', ''",
		"'htmlcategory', '0'",
		"'htmlcategorytime', '300'",
		"'htmlindex', '0'",
		"'htmlindextime', '300'",
		"'htmlviewnews', '0'",
		"'htmlviewnewstime', '300'",
		"'language', 'chinese.php'",
		"'needcheck', '0'",
		"'pagepostfix', ''",
		"'searchinterval', '30'",
		"'sitename', 'SupeSite�����Ż�'",
		"'template', 'default'",
		"'thumbbgcolor', '#C0C0C0'",
		"'thumbcutmode', '2'",
		"'thumbcutstartx', '0'",
		"'thumbcutstarty', '0'",
		"'thumboption', '4'",
		"'timeoffset', '8'",
		"'urltype', '4'",
		"'watermark', '0'",
		"'watermarkfile', 'images/base/watermark.gif'",
		"'watermarkjpgquality', '85'",
		"'watermarkstatus', '9'",
		"'watermarktrans', '30'",
		"'seotitle', ''",
		"'seokeywords', ''",
		"'seodescription', ''",
		"'seohead', ''",
		"'noseccode', '1'",
		"'showindex', '0'",
		"'newsjammer', '0'",
		"'updateview', '1'",
		"'allowguestsearch', '0'",
		"'commenttime', '30'",
		"'customaddfeed', '1'",
		"'allowfeed', '1'",
		"'sitekey', '$sitekey'"
	);
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('settings'));
	$_SGLOBAL['db']->query("INSERT INTO ".tname('settings')." (`variable`, `value`) VALUES (".implode('),(', $datas).")");

	//attachmenttypes
	$datas = array(
		"'jpg', 2097152",
		"'jpeg', 2097152",
		"'png', 2097152",
		"'gif', 2097152",
		"'rar', 2097152",
		"'txt', 2097152",
		"'zip', 2097152"
	);
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('attachmenttypes'));
	$_SGLOBAL['db']->query("INSERT INTO ".tname('attachmenttypes')." (fileext, maxsize) VALUES (".implode('),(', $datas).")");

	//categories
	$datas = array(
		//��Ѷ
		"'�Ƽ�����', 'news'",
		"'��������', 'news'",
		"'�ƾ�����', 'news'",
		"'������Ѷ', 'news'",
		"'��������', 'news'",
		"'������Ѷ', 'news'",
		"'��վ����', 'news'",
		"'��̬����', 'news'",
		"'�ر��ע', 'news'"
	);
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('categories'));
	$_SGLOBAL['db']->query("INSERT INTO ".tname('categories')." (`name`, `type`) VALUES (".implode('),(', $datas).")");
	$_SGLOBAL['db']->query("UPDATE ".tname('categories')." SET subcatid=catid");

	$datas = array(
		"'news', 'type', '1'",
	);
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('channels'));
	$_SGLOBAL['db']->query("INSERT INTO ".tname('channels')." (`nameid`, `type`, `status`) VALUES (".implode('),(', $datas).")");

	$datas = array(
		"1, 'system', '��������TAG', 'tagcontent.php', $_SGLOBAL[timestamp], $_SGLOBAL[timestamp], -1, -1, -1, '0'",
		"1, 'system', '�������ø���', 'cleanattachment.php', $_SGLOBAL[timestamp], $_SGLOBAL[timestamp], -1, -1, 4, '0'",
		"1, 'system', '������ʱ�ļ�', 'cleanimporttemp.php', $_SGLOBAL[timestamp], $_SGLOBAL[timestamp], -1, -1, 4, '15'",
		"1, 'system', '������̳����', 'updatebbscache.php', $_SGLOBAL[timestamp], $_SGLOBAL[timestamp], -1, -1, 2, '0'",
		"1, 'system', '������Ϣ�鿴��', 'updateviewnum.php', $_SGLOBAL[timestamp], $_SGLOBAL[timestamp], -1, -1, 3, '5	15	25	35	45	55'"
	);
	$datas[] = "1, 'system', '������̳������¼','updatebbsforums.php', $_SGLOBAL[timestamp], $_SGLOBAL[timestamp], -1, -1, -1,'0	5	10	15	20	25	30	35	40	45	50	55' ";
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('crons'));
	$_SGLOBAL['db']->query("INSERT INTO ".tname('crons')." (available, type, name, filename, lastrun, nextrun, weekday, day, hour, minute) VALUES (".implode('),(', $datas).")");

	//styles
	$datas = array(
		"'ϵͳ���������б�', '��ʾ����: ϵͳ������\r\n��ʾ��ʽ: �� &lt;li&gt;����&lt;/li&gt; �ķ�ʽѭ����ʾ', 'category', 'name_li'",
		"'��Ѷ�����б�', '��ʾ����: ��Ѷ����\r\n��ʾ��ʽ: �� &lt;li&gt;����&lt;/li&gt; �ķ�ʽѭ����ʾ', 'spacenews', 'subject_li'",
		"'ģ�����±����б�', '��ʾ����: ģ�ͱ���\r\n��ʾ��ʽ: �� &lt;li&gt;����&lt;/li&gt; �ķ�ʽѭ����ʾ', 'model', 'subject_li'",
		"'ͶƱ��', '��ʾ����: ͶƱ��\r\n��ʾ��ʽ: �� &lt;form&gt;ͶƱ����ѡ��&lt;/form&gt; �ķ�ʽѭ����ʾ', 'poll', 'poll_form'",
		"'TAG���б�', '��ʾ����: TAG��\r\n��ʾ��ʽ: �� &lt;li&gt;TAG��&lt;/li&gt; �ķ�ʽѭ����ʾ', 'tag', 'tagname_li'",
		"'���±����б�', '��ʾ����: ��Ϣ���⡢����\r\n��ʾ��ʽ: �� &lt;li&gt;����(����)&lt;/li&gt; �ķ�ʽѭ����ʾ', 'spacetag', 'subject_username_li'",
		"'�ظ������б�', '��ʾ����: ���⡢����\r\n��ʾ��ʽ: �� &lt;li&gt;&lt;p&gt;����&lt;/p&gt;&lt;p&gt;����&lt;/p&gt;&lt;/li&gt; �ķ�ʽѭ����ʾ', 'spacecomment', 'subject_message_li'",
		"'��������б�', '��ʾ����: ����\r\n��ʾ��ʽ: �� &lt;li&gt;����&lt;/li&gt; �ķ�ʽѭ����ʾ', 'announcement', 'subject_li'",
		"'�����������б�', '��ʾ����: ����\r\n��ʾ��ʽ: �� &lt;li&gt;����&lt;/li&gt; �ķ�ʽѭ����ʾ', 'friendlink', 'name_li'",
		"'�����б�', '��ʾ����: ����\r\n��ʾ��ʽ: �� &lt;li&gt;����&lt;/li&gt; �ķ�ʽѭ����ʾ', 'bbsthread', 'subject_li'",
		"'��̳�����б�', '��ʾ����: ����\r\n��ʾ��ʽ: �� &lt;li&gt;����&lt;/li&gt; �ķ�ʽѭ����ʾ', 'bbsannouncement', 'subject_li'",
		"'��̳������б�', '��ʾ����: �����\r\n��ʾ��ʽ: �� &lt;li&gt;�����&lt;/li&gt; �ķ�ʽѭ����ʾ', 'bbsforum', 'name_li'",
		"'�����������б�', '��ʾ����: ������\r\n��ʾ��ʽ: �� &lt;li&gt;������&lt;/li&gt; �ķ�ʽѭ����ʾ', 'bbslink', 'name_li'",
		"'��Ա���б�', '��ʾ����: ��Ա��\r\n��ʾ��ʽ: �� &lt;li&gt;��Ա��&lt;/li&gt; �ķ�ʽѭ����ʾ', 'bbsmember', 'username_li'",
		"'�������б�', '��ʾ����: ������\r\n��ʾ��ʽ: �� &lt;li&gt;������&lt;/li&gt; �ķ�ʽѭ����ʾ', 'bbsattachment', 'filename_li'",
		"'���������б�', '��ʾ����: ���⡢����(��������)\r\n��ʾ��ʽ: �� &lt;li&gt;&lt;p&gt;����&lt;/p&gt;&lt;p&gt;����&lt;/p&gt;&lt;/li&gt; �ķ�ʽѭ����ʾ', 'bbspost', 'post_subject_message_li'"
	);
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('styles'));
	$_SGLOBAL['db']->query("INSERT INTO ".tname('styles')." (tplname, tplnote, tpltype, tplfilepath) VALUES (".implode('),(', $datas).")");

	//usergroups
	$datas = array(
		"'1', '����Ա', '0', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', '1'",
		"'2', '��ͨ�û���', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0'"
	);
	$_SGLOBAL['db']->query("TRUNCATE TABLE ".tname('usergroups'));
	$_SGLOBAL['db']->query("INSERT INTO ".tname('usergroups').
							" (groupid, grouptitle, system, managespacenews, needcheck, managerobots, managerobotmessages, managecategories, managesettings, manageusergroups, manageannouncements, managead, manageblocks, managebbs, managebbsforums, managethreads, manageuchome, managemodels, managechannel, managemember, managedelmembers, managehtml, managecache, managewords, manageattachmenttypes, managedatabase, managetpl, managecrons, managecheck, managecss, managefriendlinks, manageprefields, managesitemap, manageitems, managecomments, manageattachments, managetags, managereports, managepolls, managecustomfields, managestyles, managestyletpl, managemodelmanages, managemodelfolders, managemodelcategories, allowundelete, modelneedcheck, allowmodelundelete, closeignore) ".
							" VALUES (".implode('),(', $datas).")");

	show_msg('ϵͳĬ�����������ϣ�������һ������', ($step+1), 1);

} elseif ($step == 5) {

	//���»���
	dbconnect();
	include_once(S_ROOT.'./function/cache.func.php');

	updatesettingcache();
	//�û��黺��
	updategroupcache();
	//��滺��
	updateadcache();
	//crons�б�
	updatecronscache();
	//�ƻ�����
	updatecroncache();
	//����
	updatecategorycache();
	//������������
	updatecensorcache();

	$msg = <<<EOF
	<form method="post" action="$theurl">
	<table>
	<tr><td colspan="2">�������ݰ�װ���!<br><br>
	��������������û�����UCenter���û���������<br>ϵͳ���Զ��ѽ�����Ϊվ�����Ա!
	</td></tr>
	<tr><td>�����û���</td><td><input type="text" name="username" value="" size="30"></td></tr>
	<tr><td>��������</td><td><input type="password" name="password" value="" size="30"></td></tr>
	<tr><td></td><td><input type="submit" name="opensubmit" value="���ù���Ա"></td></tr>
	</table>
	<input type="hidden" name="formhash" value="$formhash">
	</form>
    <iframe id="phpframe" name="phpframe" width="0" height="0" marginwidth="0" frameborder="0" src="..\"></iframe>
EOF;

	show_msg($msg, 999);
}

//ҳ��ͷ��
function show_header() {
	global $_SGLOBAL, $nowarr, $step, $theurl, $_SC;

	$nowarr[$step] = ' class="current"';
	print<<<END
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=$_SC[charset]" />
	<title> SupeSite ����װ </title>
	<style type="text/css">
	* {font-size:12px; font-family: Verdana, Arial, Helvetica, sans-serif; line-height: 1.5em; word-break: break-all; }
	body { text-align:center; margin: 0; padding: 0; background: #F5FBFF; }
	.bodydiv { margin: 40px auto 0; width:720px; text-align:left; border: solid #86B9D6; border-width: 5px 1px 1px; background: #FFF; }
	h1 { font-size: 18px; margin: 1px 0 0; line-height: 50px; height: 50px; background: #E8F7FC; color: #5086A5; padding-left: 10px; }
	#menu {width: 100%; margin: 10px auto; text-align: center; }
	#menu td { height: 30px; line-height: 30px; color: #999; border-bottom: 3px solid #EEE; }
	.current { font-weight: bold; color: #090 !important; border-bottom-color: #F90 !important; }
	.showtable { width:100%; border: solid; border-color:#86B9D6 #B2C9D3 #B2C9D3; border-width: 3px 1px 1px; margin: 10px auto; background: #F5FCFF; }
	.showtable td { padding: 3px; }
	.showtable strong { color: #5086A5; }
	.datatable { width: 100%; margin: 10px auto 25px; }
	.datatable td { padding: 5px 0; border-bottom: 1px solid #EEE; }
	input { border: 1px solid #B2C9D3; padding: 5px; background: #F5FCFF; }
	.button { margin: 10px auto 20px; width: 100%; }
	.button td { text-align: center; }
	.button input, .button button { border: solid; border-color:#F90; border-width: 1px 1px 3px; padding: 5px 10px; color: #090; background: #FFFAF0; cursor: pointer; }
	#footer { font-size: 10px; line-height: 40px; background: #E8F7FC; text-align: center; height: 38px; overflow: hidden; color: #5086A5; margin-top: 20px; }
	</style>
	<script type="text/javascript">
	function $(id) {
		return document.getElementById(id);
	}
	//���Selectѡ��
	function addoption(obj) {
		if (obj.value=='addoption') {
			var newOption=prompt('������:','');
			if (newOption!=null && newOption!='') {
				var newOptionTag=document.createElement('option');
				newOptionTag.text=newOption;
				newOptionTag.value=newOption;
				try {
					obj.add(newOptionTag, obj.options[0]); // doesn't work in IE
				}
				catch(ex) {
					obj.add(newOptionTag, obj.selecedIndex); // IE only
				}
				obj.value=newOption;
			} else {
				obj.value=obj.options[0].value;
			}
		}
	}
	</script>
	</head>
	<body id="append_parent">
	<div class="bodydiv">
	<h1>SupeSite����װ</h1>
	<div style="width:90%;margin:0 auto;">
	<table id="menu">
	<tr>
	<td{$nowarr[0]}>1.��װ��ʼ</td>
	<td{$nowarr[1]}>2.����UCenter��Ϣ</td>
	<td{$nowarr[2]}>3.�������ݿ�������Ϣ</td>
	<td{$nowarr[3]}>4.�������ݿ�ṹ</td>
	<td{$nowarr[4]}>5.���Ĭ������</td>
	<td{$nowarr[5]}>6.��װ���</td>
	</tr>
	</table>
END;
}

//ҳ�涥��
function show_footer() {
	print<<<END
	</div>
	<iframe id="phpframe" name="phpframe" width="0" height="0" marginwidth="0" frameborder="0" src="about:blank"></iframe>
	<div id="footer">&copy; Comsenz Inc. 2001-2009 www.supesite.com</div>
	</div>
	<br>
	</body>
	</html>
END;
}


//��ʾ
function show_msg($message, $next=0, $jump=0) {
	global $theurl;

	$nextstr = '';
	$backstr = '';

	obclean();
	if(empty($next)) {
		$backstr = "<a href=\"javascript:history.go(-1);\">������һ��</a>";
	} elseif ($next == 999) {
	} else {
		$url_forward = "$theurl?step=$next";
		$nextstr = "<a href=\"$url_forward\">������һ��</a>";
		if($jump) {
			$nextstr .= "<script>setTimeout(\"window.location.href ='$url_forward';\", 1000);</script>";
		}
		$backstr = "<a href=\"javascript:history.go(-1);\">������һ��</a>";
	}

	show_header();
	print<<<END
	<table>
	<tr><td>$message</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>$backstr $nextstr</td></tr>
	</table>
END;
	show_footer();
	exit();
}

//���Ȩ��
function checkfdperm($path, $isfile=0) {
	if($isfile) {
		$file = $path;
		$mod = 'a';
	} else {
		$file = $path.'./install_tmptest.data';
		$mod = 'w';
	}
	if(!@$fp = fopen($file, $mod)) {
		return false;
	}
	if(!$isfile) {
		//�Ƿ����ɾ��
		fwrite($fp, ' ');
		fclose($fp);
		if(!@unlink($file)) {
			return false;
		}
		//����Ƿ���Դ�����Ŀ¼
		if(is_dir($path.'./install_tmpdir')) {
			if(!@rmdir($path.'./install_tmpdir')) {
				return false;
			}
		}
		if(!@mkdir($path.'./install_tmpdir')) {
			return false;
		}
		//�Ƿ����ɾ��
		if(!@rmdir($path.'./install_tmpdir')) {
			return false;
		}
	} else {
		fclose($fp);
	}
	return true;
}

//��Զ�̵�ַ
function sfopen($url, $limit = 500000, $post = '', $cookie = '', $bysocket = FALSE, $ip = '', $timeout = 15, $block = TRUE) {
	$return = '';
	$matches = parse_url($url);
	$host = $matches['host'];
	$path = $matches['path'] ? $matches['path'].'?'.$matches['query'].(empty($matches['fragment'])?'':'#'.$matches['fragment']) : '/';
	$port = !empty($matches['port']) ? $matches['port'] : 80;

	if($post) {
		$out = "POST $path HTTP/1.0\r\n";
		$out .= "Accept: */*\r\n";
		$out .= "Accept-Language: zh-cn\r\n";
		$out .= "Content-Type: application/x-www-form-urlencoded\r\n";
		$out .= "Host: $host\r\n";
		$out .= 'Content-Length: '.strlen($post)."\r\n";
		$out .= "Connection: Close\r\n";
		$out .= "Cache-Control: no-cache\r\n";
		$out .= "Cookie: $cookie\r\n\r\n";
		$out .= $post;
	} else {
		$out = "GET $path HTTP/1.0\r\n";
		$out .= "Accept: */*\r\n";
		$out .= "Accept-Language: zh-cn\r\n";
		$out .= "Host: $host\r\n";
		$out .= "Connection: Close\r\n";
		$out .= "Cookie: $cookie\r\n\r\n";
	}
	$fp = @fsockopen(($ip ? $ip : $host), $port, $errno, $errstr, $timeout);
	if(!$fp) {
		return '';//note $errstr : $errno \r\n
	} else {
		stream_set_blocking($fp, $block);
		stream_set_timeout($fp, $timeout);
		@fwrite($fp, $out);
		$status = stream_get_meta_data($fp);
		if($status['timed_out']) {
			return '';
		}
		$return = fread($fp, 524);
		$limit -= strlen($return);
		while(!feof($fp) && $limit > -1) {
			$limit -= 100524;
			$return .= @fread($fp, 100524);
		}
		@fclose($fp);
		$return = preg_replace("/\r\n\r\n/", "\n\n", $return, 1);
		$strpos = strpos($return, "\n\n");
		$strpos = $strpos !== FALSE ? $strpos + 2 : 0;
		$return = substr($return, $strpos);
		return $return;
	}
}

?>