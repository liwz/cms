# $Id: upgrade45_109to451.sql,v 1.33 2004/09/27 15:25:57 stingrey Exp $

# Mambo 4.5 (1.0.9) to Mambo 4.5.1

DROP TABLE IF EXISTS mos_newsfeedscache;
DROP TABLE IF EXISTS mos_newsflash;
DROP TABLE IF EXISTS mos_templates;

ALTER TABLE `mos_users` ADD `activation` varchar(100) NOT NULL default '' AFTER `lastvisitDate`;
ALTER TABLE `mos_users` ADD `params` TEXT NOT NULL;

ALTER TABLE `mos_contact_details` ADD `params` TEXT NOT NULL;
ALTER TABLE `mos_contact_details` ADD `user_id` int(11) NOT NULL default '0';
ALTER TABLE `mos_contact_details` ADD `catid` int(11) NOT NULL default '0';
ALTER TABLE `mos_contact_details` ADD `access` tinyint(3) unsigned NOT NULL default '0';

ALTER TABLE `mos_categories` ADD `params` TEXT NOT NULL;
ALTER TABLE `mos_categories` ADD `parent_id` int(11) NOT NULL default 0 AFTER `id`;
ALTER TABLE `mos_categories` CHANGE `section` `section` varchar(50) NOT NULL default '';
ALTER TABLE `mos_sections` ADD `params` TEXT NOT NULL;
ALTER TABLE `mos_weblinks` ADD `params` TEXT NOT NULL;

ALTER TABLE `mos_components` CHANGE `ordering` `ordering` int(11) NOT NULL default '0';
ALTER TABLE `mos_components` ADD `params` TEXT NOT NULL;
ALTER TABLE `mos_content` CHANGE `ordering` `ordering` int(11) NOT NULL default '0';
ALTER TABLE `mos_content_frontpage` CHANGE `ordering` `ordering` int(11) NOT NULL default '0';
ALTER TABLE `mos_modules` CHANGE `ordering` `ordering` int(11) NOT NULL default '0';
ALTER TABLE `mos_modules` ADD `client_id` tinyint(4) NOT NULL default '0';
ALTER TABLE `mos_newsfeeds` CHANGE `ordering` `ordering` int(11) NOT NULL default '0';

INSERT INTO `mos_modules` VALUES ('', 'վ������', '', 7, 'right', 0, '0000-00-00 00:00:00', 1, 'mod_search', 0, 0, 1, '', 1, 0);
INSERT INTO `mos_modules` VALUES ('', '���ͼƬ', '', 2, 'user1', 0, '0000-00-00 00:00:00', 1, 'mod_random_image', 0, 0, 1, '', 1, 0);
INSERT INTO `mos_modules` VALUES ('', '������', '', 1, 'banner', 0, '0000-00-00 00:00:00', 1, 'mod_banners', 0, 0, 0, 'banner_cids=\nmoduleclass_sfx=\n', 1, 0);

DELETE FROM `mos_modules` WHERE `module` = 'mod_counter';
DELETE FROM `mos_modules` WHERE `module` = 'mod_online';

DELETE FROM `mos_components` WHERE name='Media Manager';
DELETE FROM `mos_components` WHERE `option`='com_newsflash';

CREATE TABLE `mos_templates_menu` (
  `template` varchar(50) NOT NULL default '',
  `menuid` int(11) NOT NULL default '0',
  `client_id` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`template`,`menuid`)
) TYPE=MyISAM;

CREATE TABLE `mos_template_positions` (
  `id` int(11) NOT NULL auto_increment,
  `position` varchar(10) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

CREATE TABLE `mos_mambots` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `element` varchar(100) NOT NULL default '',
  `folder` varchar(100) NOT NULL default '',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `published` tinyint(3) NOT NULL default '0',
  `iscore` tinyint(3) NOT NULL default '0',
  `client_id` tinyint(3) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idx_folder` (`published`,`client_id`,`access`,`folder`)
) TYPE=MyISAM;


INSERT INTO `mos_modules` VALUES (0,'���','',2,'cpanel',0,'0000-00-00 00:00:00',1,'mod_components',0,99,1,'',1, 1);
INSERT INTO `mos_modules` VALUES (0,'��������','',3,'cpanel',0,'0000-00-00 00:00:00',1,'mod_popular',0,99,1,'',0, 1);
INSERT INTO `mos_modules` VALUES (0,'��������','',4,'cpanel',0,'0000-00-00 00:00:00',1,'mod_latest',0,99,1,'',0, 1);
INSERT INTO `mos_modules` VALUES (0,'ͳ����Ϣ','',5,'cpanel',0,'0000-00-00 00:00:00',1,'mod_stats',0,99,1,'',0, 1);
INSERT INTO `mos_modules` VALUES (0,'δ������','',1,'header',0,'0000-00-00 00:00:00',1,'mod_unread',0,99,1,'',1, 1);
INSERT INTO `mos_modules` VALUES (0,'�����û�','',2,'header',0,'0000-00-00 00:00:00',1,'mod_online',0,99,1,'',1, 1);
INSERT INTO `mos_modules` VALUES (0,'���в˵�','',1,'top',0,'0000-00-00 00:00:00',1,'mod_fullmenu',0,99,1,'',1, 1);
INSERT INTO `mos_modules` VALUES (0,'������','',1,'pathway',0,'0000-00-00 00:00:00',1,'mod_pathway',0,99,1,'',1, 1);
INSERT INTO `mos_modules` VALUES (0,'������','',1,'toolbar',0,'0000-00-00 00:00:00',1,'mod_toolbar',0,99,1,'',1, 1);
INSERT INTO `mos_modules` VALUES (0,'վ�ڶ���','',1,'inset',0,'0000-00-00 00:00:00',1,'mod_mosmsg',0,99,1,'',1, 1);
INSERT INTO `mos_modules` VALUES (0,'���ͼ��','',1,'icon',0,'0000-00-00 00:00:00',1,'mod_quickicon',0,99,1,'',1,1);
INSERT INTO `mos_modules` VALUES (0, 'Mamboforge','',1,'cpanel',0,'0000-00-00 00:00:00',0,'',0,99,1,'rssurl=http://mamboforge.net/export/rss_sfnews.php\nrssitems=5\nrssdesc=1\ncache=0\nmoduleclass_sfx=',0,1);
INSERT INTO `mos_modules` VALUES (0, '�����˵�', '', 1, 'user3', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 0, 'menutype=topmenu\nmenu_style=list_flat\nmenu_images=n\nmenu_images_align=left\nexpand_menu=n\nclass_sfx=-nav\nmoduleclass_sfx=\nindent_image1=0\nindent_image2=0\nindent_image3=0\nindent_image4=0\nindent_image5=0\nindent_image6=0', 1, 0);
INSERT INTO `mos_modules` VALUES (0, '�����˵�', '', 2, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 0, 'menutype=othermenu\nmenu_style=vert_indent\ncache=0\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nclass_sfx=\nmoduleclass_sfx=\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=', 0, 0);


INSERT INTO `mos_templates_menu` VALUES ('rhuk_solarflare', '0', '0');
INSERT INTO `mos_templates_menu` VALUES ('mambo_admin_blue', '0', '1');


INSERT INTO `mos_template_positions` VALUES (0, 'left', 'Left Column');
INSERT INTO `mos_template_positions` VALUES (0, 'right', 'Right Column');
INSERT INTO `mos_template_positions` VALUES (0, 'top', '');
INSERT INTO `mos_template_positions` VALUES (0, 'bottom', '');
INSERT INTO `mos_template_positions` VALUES (0, 'inset', '');
INSERT INTO `mos_template_positions` VALUES (0, 'banner', '');
INSERT INTO `mos_template_positions` VALUES (0, 'header', '');
INSERT INTO `mos_template_positions` VALUES (0, 'footer', '');
INSERT INTO `mos_template_positions` VALUES (0, 'newsflash', '');
INSERT INTO `mos_template_positions` VALUES (0, 'legals', '');
INSERT INTO `mos_template_positions` VALUES (0, 'pathway', '');
INSERT INTO `mos_template_positions` VALUES (0, 'toolbar', '');
INSERT INTO `mos_template_positions` VALUES (0, 'cpanel', '');
INSERT INTO `mos_template_positions` VALUES (0, 'user1', '');
INSERT INTO `mos_template_positions` VALUES (0, 'user2', '');
INSERT INTO `mos_template_positions` VALUES (0, 'user3', '');
INSERT INTO `mos_template_positions` VALUES (0, 'user4', '');
INSERT INTO `mos_template_positions` VALUES (0, 'user5', '');
INSERT INTO `mos_template_positions` VALUES (0, 'user6', '');
INSERT INTO `mos_template_positions` VALUES (0, 'user7', '');
INSERT INTO `mos_template_positions` VALUES (0, 'user8', '');
INSERT INTO `mos_template_positions` VALUES (0, 'user9', '');
INSERT INTO `mos_template_positions` VALUES (0, 'advert1', '');
INSERT INTO `mos_template_positions` VALUES (0, 'advert2', '');
INSERT INTO `mos_template_positions` VALUES (0, 'advert3', '');
INSERT INTO `mos_template_positions` VALUES (0, 'icon', '');
INSERT INTO `mos_template_positions` VALUES (0, 'debug', '');

UPDATE `mos_components` SET `link` = '', `admin_menu_link` = '' WHERE `id` = '6' LIMIT 1;
INSERT INTO `mos_components` VALUES ('', '��ϵ�˷���', '', 0, 6, 'option=categories&section=com_contact_details', '������ϵ�˷���', '', 2, 'js/ThemeOffice/categories.png', 1, '');
INSERT INTO `mos_components` VALUES ('', '��ϵ��', 'option=com_contact', 0, 6, 'option=com_contact', '�༭��ϵ������', 'com_contact', 0, 'js/ThemeOffice/component.png', 1, '');
INSERT INTO `mos_components` VALUES ('', '��������', '', 0, 0, 'option=com_syndicate', '������վ��������', 'com_syndicate', 0, 'js/ThemeOffice/component.png', 0, '');

INSERT INTO mos_mambots VALUES (1,'MamboͼƬ','mosimage','content',0,-10000,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO mos_mambots VALUES (2,'Mambo��ҳ','mospaging','content',0,10000,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO mos_mambots VALUES (3,'ԭ��Mambot����','legacybots','content',0,1,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO mos_mambots VALUES (4,'���������Ż�����','mossef','content',0,3,1,0,0,0,'0000-00-00 00:00:00','');
INSERT INTO mos_mambots VALUES (5,'Mambo��������','mosvote','content',0,4,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO mos_mambots VALUES (6,'��������','content.searchbot','search',0,1,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO mos_mambots VALUES (7,'������վ����','weblinks.searchbot','search',0,2,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO mos_mambots VALUES (8,'����֧��','moscode','content',0,2,1,0,0,0,'0000-00-00 00:00:00','');
INSERT INTO mos_mambots VALUES (9,'�����������ñ༭��','none','editors',0,0,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO mos_mambots VALUES (10,'TinyMCE���������ñ༭��','tinymce','editors',0,0,0,0,0,0,'0000-00-00 00:00:00','theme=default');
INSERT INTO mos_mambots VALUES (11,'MamboͼƬ�༭����ť','mosimage.btn','editors-xtd',0,0,1,0,0,0,'0000-00-00 00:00:00','');
INSERT INTO mos_mambots VALUES (12,'Mambo��ҳ�༭����ť','mospage.btn','editors-xtd',0,0,1,0,0,0,'0000-00-00 00:00:00','');
INSERT INTO mos_mambots VALUES (13,'������ϵ��','contacts.searchbot','search',0,3,1,1,0,0,'0000-00-00 00:00:00','');

ALTER TABLE `mos_banner` CHANGE `checked_out_time` `checked_out_time` DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL;
