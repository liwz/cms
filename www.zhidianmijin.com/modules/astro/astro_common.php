<?php
if ($myxz) {
    $smarty->assign('myxz', $myxz);
    switch ((int)$_REQUEST['sm']) {
     case 2://baojian
         $sql="select * from baojian where title=?";
         $infoTitle = '���屣��';
         break;
     case 3://eq
         $sql="select * from ndeq where title=?";
         $infoTitle = 'EQ����';
         break;
     case 4://iq
         $sql="select * from xlcz where title=?";
         $infoTitle = 'IQ����';
         break;
     case 5://mingren
         $sql="select * from mingren where title=?";
         $infoTitle = '��������';
         break;
     case 6://shibai
         $sql="select * from shiye where title=?";
         $infoTitle = 'ʧ������';
         break;
     case 7://shili
         $sql="select * from aiqing where title=?";
         $infoTitle = '����ʵ��';
         break;
     case 8://wu
         $sql="select * from qingxv where title=?";
         $infoTitle = '�����';
         break;
    }

    $db->query($sql, array($myxz));
    $rs = $db->fetchArray();
    $smarty->assign('content', $rs['content']);
    $smarty->assign('infoTitle', $infoTitle);
}
$smarty->assign('includePage', 'astro/astro_common.php');
?>
