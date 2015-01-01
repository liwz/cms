<?php
/**
* @version $Id: legacybots.php,v 1.5 2004/08/26 05:20:59 rcastley Exp $
* @package Mambo_4.5.1
* @copyright (C) 2000 - 2004 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

$_MAMBOTS->registerFunction( 'onPrepareContent', 'botLegacyBots' );

/**
* Process any legacy bots in the /mambots directory
*
* THIS FILE CAN BE **SAFELY REMOVED** IF YOU HAVE NO LEGACY MAMBOTS
* @param object A content object
* @param int A bit-wise mask of options
* @param int The page number
*/
function botLegacyBots( $published, &$row, &$params, $page=0 ) {
	global $mosConfig_absolute_path;

	// process any legacy bots
	$bots = mosReadDirectory( "$mosConfig_absolute_path/mambots", "\.php$" );
	sort( $bots );
	foreach ($bots as $bot) {
		require "mambots/$bot";
	}
}
?>
