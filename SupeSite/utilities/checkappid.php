<?php

require dirname(__FILE__).'/data/config.inc.php';
require dirname(__FILE__).'/lib/db.class.php';

$db = new db();
$db->connect(UC_DBHOST, UC_DBUSER, UC_DBPW, UC_DBNAME, UC_DBCHARSET, UC_DBCONNECT, UC_DBTABLEPRE);

$nomatch = true;

$applist = $db->fetch_all("SELECT appid, name FROM ".UC_DBTABLEPRE."applications");
$table_columns = loadtable('notelist');
foreach($applist as $app) {
	$appid = $app['appid'];
	if(empty($appid)) continue;
	if(!isset($table_columns['app'.$appid])) {
		$nomatch = false;
		if($db->query("ALTER TABLE ".UC_DBTABLEPRE."notelist ADD COLUMN app$appid tinyint NOT NULL")) {
			echo "����notelist���ֶγɹ�: $appid <br />";
		} else {
			echo "����notelist���ֶ�ʧ�ܣ���ˢ������<br />";
		}
		
	}
}

if($nomatch) {
	echo 'û����Ҫ������ֶ�<br />';
}

if(!unlink(__FILE__)) {
	echo '��������½������ɾ�����ļ�<br />';
}

function loadtable($table, $force = 0) {
	global $db;
	static $tables = array();
	if(!isset($tables[$table]) || $force) {
		if($db->version() > '4.1') {
			$query = $db->query("SHOW FULL COLUMNS FROM ".UC_DBTABLEPRE."$table", 'SILENT');
		} else {
			$query = $db->query("SHOW COLUMNS FROM ".UC_DBTABLEPRE."$table", 'SILENT');
		}
		while($field = @$db->fetch_array($query)) {
			$tables[$table][$field['Field']] = $field;
		}
	}
	return $tables[$table];
}



