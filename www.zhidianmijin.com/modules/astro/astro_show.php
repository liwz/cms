<?php
$smarty->assign('includePage', 'astro/astro_show.php');
if ( isset($_REQUEST['flag'])) {
    $flag=$_REQUEST['flag'];
    if ($flag==1) {
        $astro_m=$_REQUEST['astro_m'];
        $astro_f=$_REQUEST['astro_f'];
        $title = "������ " . $astro_m . " .vs." . $astro_f;
    } elseif ($flag==2) {
        $astro_m=$_REQUEST['astro_m'];
        $astro_f=$_REQUEST['astro_f'];
        $title = $astro_m . "--" . $astro_f;
    } elseif ($flag==3) {
        $xiao_m=$_REQUEST['xiao_m'];
        $xiao_f=$_REQUEST['xiao_f'];
        $title = $xiao_m . "+" . $xiao_f;
    } elseif ($flag==4) {
        $title=$_REQUEST['astro'];
    } elseif ($flag==5) {
        $title = "��" . $_REQUEST['xiao'] . "�˵��Ը�";
    } elseif ($flag==6) {
        $title = $_REQUEST['xuexing'] . "��Ѫ�˵��Ը�����";
    } elseif ($flag==7) {
        $title = $_REQUEST['blood'] . "��" . $_REQUEST['astro'];
    } elseif ($flag==8) {
        $title = $_REQUEST['m'] . "��" . $_REQUEST['d'] . "��" . $_REQUEST['flag1'];
    } elseif ($flag==9) {
        $title = $_REQUEST['11-1'] . "����" . $_REQUEST['11-2'];
    } elseif ($flag==10) {
        $title = $_REQUEST['12-1'] . "����" . $_REQUEST['12-2'];
    } elseif ($flag==11) {
        $title = $_REQUEST['star1'] . "��" . $_REQUEST['star2'] . "��" . $_REQUEST['13-3'];
    } elseif ($flag==12) {
        if ((int)date('Y', time()+30*24*60*60) > $thisYear) {
            $thisYear = date('Y', time()+30*24*60*60);
            $smarty->assign('_thisYear', $thisYear);
        }
        $title = $thisYear . "��ʮ����Ф����--" . $_REQUEST['sx'];
    }
    $sql="select * from astro where title=?";
    $db->query($sql, array($title));
    if($rs = $db->fetchArray()) {
        $smarty->assign('content', $rs['content']);
    }
    $smarty->assign('title', $title);
    $smarty->assign('includePage', 'astro/astro_show.php');
}
?>
