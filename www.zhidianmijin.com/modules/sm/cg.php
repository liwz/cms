<?php
//'�����û���Ϣ
//'��

$sql="select * from chenggu1 where year=?";
$result = $db->query($sql, array($nian1));
if ($rs = $db->fetchArray()) {
    $weight1=$rs["weight"];
}
//'��
$sql="select * from chenggu2 where month=?";
$result = $db->query($sql, array($yue2));
if ($rs = $db->fetchArray()) {
    $weight2=$rs["weight"];
}
//'��
$sql="select * from chenggu3 where day=?";
$result = $db->query($sql, array($ri2));
if ($rs = $db->fetchArray()) {
    $weight3=$rs["weight"];
}
//'ʱ��
$sql="select * from chenggu4 where time=?";
$result = $db->query($sql, array($hh2));
if ($rs = $db->fetchArray()) {
    $weight4=$rs["weight"];
}
//'����������

$weight=$weight1+$weight2+$weight3+$weight4;
$smarty->assign('weight', $weight);

//'�ƹ�����
$tempweight=intval($weight*10);
$sql="select * from chenggu where weight=?";

$result = $db->query($sql, array($tempweight));
if ($rs = $db->fetchArray()) {
    $smarty->assign('chenggucontent', $rs["content"]);
    $smarty->assign('intro', $rs["intro"]);
}

//'�����û���Ϣ
//$userbirthday=$nian1 ."-" . $yue1 . "-" . $ri1;
$userll=date("Y", $nowTime) - $nian1;;
if ($userll<=12) {
    $cf="�ɰ���";
}elseif ($userll>12 and $userll<=50) {
    $cf="�װ���";
}elseif ($userll>50) {
    $cf="�𾴵�";
}
$smarty->assign('cf', $cf);

$smarty->assign('includePage', 'sm/cg.php');
?>
