<?php
$smarty->assign('includePage', 'yuce/snsn.php');

if (isset($_REQUEST['act']) && $_REQUEST['act']=="ok") {
$mqname=$_REQUEST['mqname'];
if ($mqname=="") {
$mqname="�װ�������";
}
$smarty->assign('mqname', $mqname);
$cs=$_REQUEST['cs'];


if ($_REQUEST['cs']==1) {
    $yue=$_REQUEST['yue'];
$nn=$_REQUEST['nn'];
$sql="select * from snsn where nn=? ";
$db->query($sql, array($nn));
if ($rs = $db->fetchArray()) {
$baby=$rs["$yue"];
}
if ($baby=="��") {
$baby="С����";
}elseif ($baby=="Ů") {
$baby="С����";
}
$smarty->assign('baby', $baby);
} else { 
$snsn=$_REQUEST['snsn'];
$sql="select * from snsn where nn=? ";
$db->query($sql, array($nn));
$rs = $db->fetchArray();
$yuef='';
if ($rs['1'] == $snsn) {
$yuef=$yuef . "һ��&nbsp;";
}
if ($rs['2'] == $snsn) {
$yuef=$yuef . "����&nbsp;";
}
if ($rs['3'] == $snsn) {
$yuef=$yuef . "����&nbsp;";
}
if ($rs['4'] == $snsn) {
$yuef=$yuef . "����&nbsp;";
}
if ($rs['5'] == $snsn) {
$yuef=$yuef . "����&nbsp;";
}
if ($rs['6'] == $snsn) {
$yuef=$yuef . "����&nbsp;";
}
if ($rs['7'] == $snsn) {
$yuef=$yuef . "����&nbsp;";
}
if ($rs['8'] == $snsn) {
$yuef=$yuef . "����&nbsp;";
}
if ($rs['9'] == $snsn) {
$yuef=$yuef . "����&nbsp;";
}
if ($rs['10'] == $snsn) {
$yuef=$yuef . "ʮ��&nbsp;";
}
if ($rs['11'] == $snsn) {
$yuef=$yuef . "ʮһ��&nbsp;";
}
if ($rs['12'] == $snsn) {
$yuef=$yuef . "ʮ����&nbsp;";
}
$sql="select * from snsn where nn='" .($nn+1) ."' ";
$result = mysql_query($sql);
$rs = mysql_fetch_array($result);
$nyuef='';
if ($rs['1'] == $snsn) {
$nyuef=$nyuef."һ��&nbsp;";
}
if ($rs['2'] == $snsn) {
$nyuef=$nyuef."����&nbsp;";
}
if ($rs['3'] == $snsn) {
$nyuef=$nyuef."����&nbsp;";
}
if ($rs['4'] == $snsn) {
$nyuef=$nyuef."����&nbsp;";
}
if ($rs['5'] == $snsn) {
$nyuef=$nyuef."����&nbsp;";
}
if ($rs['6'] == $snsn) {
$nyuef=$nyuef."����&nbsp;";
}
if ($rs['7'] == $snsn) {
$nyuef=$nyuef."����&nbsp;";
}
if ($rs['8'] == $snsn) {
$nyuef=$nyuef."����&nbsp;";
}
if ($rs['9'] == $snsn) {
$nyuef=$nyuef."����&nbsp;";
}
if ($rs['10'] == $snsn) {
$nyuef=$nyuef."ʮ��&nbsp;";
}
if ($rs['11'] == $snsn) {
$nyuef=$nyuef."ʮһ��&nbsp;";
}
if ($rs['12'] == $snsn) {
$nyuef=$nyuef."ʮ����&nbsp;";
}
if ($snsn=="��") {
$baby="С����";
}elseif ($snsn=="Ů") {
$baby="С����";
}

$smarty->assign('baby', $baby);
$smarty->assign('yuef', $yuef);
$smarty->assign('nyuef', $nyuef);
}
}
?>
