<?php

/*
	[SupeSite] (C) 2007-2009 Comsenz Inc.
	$Id: feed.lang.php 11565 2009-03-10 07:21:08Z zhaofei $
*/

if(!defined('IN_SUPESITE')) exit('Access Denied');

$flang = array
(
	'feed_model_title' =>			'{actor} �� {modelname} ����������Ϣ</b>',
	'feed_model_message' =>			'<b>{subject}</b><br />{message}',
	'feed_model_comment_title' =>	'{actor} �� {modelname} ������ {author} ����Ϣ {modelpost}',
	
	'feed_news_title' =>			'{actor} ��������'.$channels['menus']['news']['name'],
	'feed_news_message' =>			'<b>{subject}</b><br />{message}',
	'feed_news_comment_title' =>	'{actor} ������ {author} ��'.$channels['menus']['news']['name'].' {mommentpost}'
);


?>