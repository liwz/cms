<?php if(!defined('IN_SUPESITE')) exit('Access Denied'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?=$_SC['charset']?>" />
<title>SupeSite Control Panel</title>
<link id="mastercss" rel="stylesheet" href="admin/images/style.css" type="text/css" media="screen" />
<script>var siteUrl='<?=$_SC['siteurl']?>';</script>
<script language="javascript" type="text/javascript" src="include/js/common.js"></script>
<script language="javascript" type="text/javascript" src="images/edit/edit.js"></script>
<script language="javascript" type="text/javascript" src="include/js/admin.js"></script>
<script language="javascript" type="text/javascript" src="include/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="include/js/selectdate.js"></script>
<link href="images/edit/edit.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrap"
<?php if(submitcheck('debug')) { ?>
 style="width: 99%;"
<?php } ?>
>
<?php if(!submitcheck('debug')) { ?>
<div id="header">
<h2><a href="index.php" title="<?=$_SCONFIG['sitename']?>"><img src="images/logo.gif" alt="<?=$_SCONFIG['sitename']?>" /></a></h2>

<div id="topmenu" class="gray">
欢迎您，<a href="space.php?uid=<?=$_SGLOBAL['supe_uid']?>"><?=$_SGLOBAL['member']['username']?></a> | 
<a href="index.php" target="_blank">站点首页</a> | 
<a href="batch.login.php?action=logout">退出</a>
</div>

<ul id="menu">
<li id="li_-1"><a href="<?=CPURL?>">首页</a></li>
<?php if($allowlogin) { ?>
<li id="li_0"><a href="javascript:;" onclick="cpmenus(0)">个人中心</a></li>
<?php } ?>

<?php if($menus['1']) { ?>
<li id="li_1"><a href="javascript:;" onclick="cpmenus(1)">系统管理</a></li>
<?php } ?>

<?php if($menus['2']) { ?>
<li id="li_2"><a href="javascript:;" onclick="cpmenus(2)">信息管理</a></li>
<?php } ?>

<?php if($menus['3']) { ?>
<li id="li_3"><a href="javascript:;" onclick="cpmenus(3)">用户管理</a></li>
<?php } ?>

<?php if($menus['4']) { ?>
<li id="li_4"><a href="javascript:;" onclick="cpmenus(4)">模块管理</a></li>
<?php } ?>

<?php if($menus['5']) { ?>
<li id="li_5"><a href="javascript:;" onclick="cpmenus(5)">批量维护</a></li>
<?php } ?>

<?php if($menus['6']) { ?>
<li id="li_6"><a href="javascript:;" onclick="cpmenus(6)">采集管理</a></li>
<?php } ?>

<?php if($menus['7']) { ?>
<li id="li_7"><a href="javascript:;" onclick="cpmenus(7)">模型管理</a></li>
<?php } ?>

<?php if($menus['8']) { ?>
<li id="li_8"><a href="javascript:;" onclick="cpmenus(8)">聚合设置</a></li>
<?php } ?>

<?php if($menus['1']['settings']) { ?>
<li><a href="<?=UC_API?>" target="_blank">UCenter</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<div id="content">
<div class="mainarea">
<div class="maininner"
<?php if(submitcheck('debug')) { ?>
  style="margin-left: 0px;"
<?php } ?>
>