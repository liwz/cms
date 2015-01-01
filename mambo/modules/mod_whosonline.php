<?php
/**
* @version $Id: mod_whosonline.php,v 1.14 2004/09/21 14:28:24 rcastley Exp $
* @package Mambo_4.5.1
* @copyright (C) 2000 - 2004 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

$online = $params->get( 'online' );
$users = $params->get( 'users' );
$moduleclass_sfx = $params->get( 'moduleclass_sfx' );

$content="";

if ($online) {
	$query1 = "SELECT count(session_id) as guest_online FROM #__session WHERE guest=1 AND (usertype is NULL OR usertype='')";
	$database->setQuery($query1);
	$guest_array = $database->loadResult();

	$query2 = "SELECT DISTINCT count(username) as user_online FROM #__session WHERE guest=0 AND usertype <> 'administrator' AND usertype <> 'superadministrator'";
	$database->setQuery($query2);
	$user_array = $database->loadResult();

	if ($guest_array<>0 && $user_array==0) {
		if ($guest_array==1) {
			$content.=_WE_HAVE;
			$content.=_GUEST_COUNT;
			$content.=_ONLINE;
			eval ("\$content = \"$content\";");
		} else {
			$content.=_WE_HAVE;
			$content.=_GUESTS_COUNT;
			$content.=_ONLINE;
			eval ("\$content = \"$content\";");
		}
	}

	if ($guest_array==0 && $user_array<>0) {
		if ($user_array==1) {
			$content.=_WE_HAVE;
			$content.=_MEMBER_COUNT;
			$content.=_ONLINE;
			eval ("\$content = \"$content\";");
		} else {
			$content.=_WE_HAVE;
			$content.=_MEMBERS_COUNT;
			$content.=_ONLINE;
			eval ("\$content = \"$content\";");
		}
	}

	if ($guest_array<>0 && $user_array<>0) {
		if ($guest_array==1) {
			$content.=_WE_HAVE;
			$content.=_GUEST_COUNT;
			$content.=_AND;
			eval ("\$content = \"$content\";");
		} else {
			$content.=_WE_HAVE;
			$content.=_GUESTS_COUNT;
			$content.=_ONLINE;
			$content.=_AND;
			eval ("\$content = \"$content\";");
		}

		if ($user_array==1) {
			$content.=_MEMBER_COUNT;
			$content.=_ONLINE;
			eval ("\$content = \"$content\";");
		} else {
			$content.=_MEMBERS_COUNT;
			$content.=_ONLINE;
			eval ("\$content = \"$content\";");
		}

	}
}

if ($users) {
	$query = "SELECT DISTINCT a.username"
	."\n FROM #__session AS a"
	."\n WHERE (a.guest=0)";
	$database->setQuery($query);
	$rows = $database->loadObjectList();
	foreach($rows as $row) {
		$content .= "<ul>\n";
		$content .= "<li><strong>" . $row->username . "</strong></li>\n";
		$content .= "</ul>\n";
	}

	if ($content == "") {
		echo _NONE ."\n";
	}
}
?>