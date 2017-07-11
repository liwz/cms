# $Id: mambo.sql,v 1.96 2004/09/24 18:08:09 rcastley Exp $

#
# Table structure for table `#__banner`
#

CREATE TABLE `#__banner` (
  `bid` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL default '0',
  `type` varchar(10) NOT NULL default 'banner',
  `name` varchar(50) NOT NULL default '',
  `imptotal` int(11) NOT NULL default '0',
  `impmade` int(11) NOT NULL default '0',
  `clicks` int(11) NOT NULL default '0',
  `imageurl` varchar(100) NOT NULL default '',
  `clickurl` varchar(200) NOT NULL default '',
  `date` datetime default NULL,
  `showBanner` tinyint(1) NOT NULL default '0',
  `checked_out` tinyint(1) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `editor` varchar(50) default NULL,
  `custombannercode` text,
  PRIMARY KEY  (`bid`),
  KEY `viewbanner` (`showBanner`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

#
# Dumping data for table `#__banner`
#

# --------------------------------------------------------

#
# Table structure for table `#__bannerclient`
#

CREATE TABLE `#__bannerclient` (
  `cid` int(11) NOT NULL auto_increment,
  `name` varchar(60) NOT NULL default '',
  `contact` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `extrainfo` text NOT NULL,
  `checked_out` tinyint(1) NOT NULL default '0',
  `checked_out_time` time default NULL,
  `editor` varchar(50) default NULL,
  PRIMARY KEY  (`cid`)
) TYPE=MyISAM;

#
# Dumping data for table `#__bannerclient`
#

# --------------------------------------------------------

#
# Table structure for table `#__bannerfinish`
#

CREATE TABLE `#__bannerfinish` (
  `bid` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL default '0',
  `type` varchar(10) NOT NULL default '',
  `name` varchar(50) NOT NULL default '',
  `impressions` int(11) NOT NULL default '0',
  `clicks` int(11) NOT NULL default '0',
  `imageurl` varchar(50) NOT NULL default '',
  `datestart` datetime default NULL,
  `dateend` datetime default NULL,
  PRIMARY KEY  (`bid`)
) TYPE=MyISAM;

#
# Dumping data for table `#__bannerfinish`
#

# --------------------------------------------------------

#
# Table structure for table `#__categories`
#

CREATE TABLE `#__categories` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default 0,
  `title` varchar(50) NOT NULL default '',
  `name` varchar(255) NOT NULL default '',
  `image` varchar(100) NOT NULL default '',
  `section` varchar(50) NOT NULL default '',
  `image_position` varchar(10) NOT NULL default '',
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `editor` varchar(50) default NULL,
  `ordering` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `count` int(11) NOT NULL default '0',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `cat_idx` (`section`,`published`,`access`),
  KEY `idx_section` (`section`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`)
) TYPE=MyISAM;

#
# Dumping data for table `#__categories`
#
INSERT INTO `#__categories` VALUES (1, 0, '������Ϣ', '������Ϣ', 'taking_notes.jpg', '1', 'left', '��վ���¶�̬', 1, 0, '0000-00-00 00:00:00', '', 0, 0, 1, '');
INSERT INTO `#__categories` VALUES (2, 0, 'Mambo���վ��', 'Mambo���վ��', 'clock.jpg', 'com_weblinks', 'left', 'Mambo���վ��', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, '');
INSERT INTO `#__categories` VALUES (3, 0, '�ȵ�����', '�ȵ�����', '', '2', 'left', '', 1, 0, '0000-00-00 00:00:00', '', 0, 0, 0, '');
INSERT INTO `#__categories` VALUES (4, 0, '��ϵ��ʽ', '��ϵ��ʽ', '', 'com_contact_details', 'left', '��վ�����ϵ��ʽ', 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, '');
INSERT INTO `#__categories` VALUES (66, 0, 'Mambo', 'Mambo', '', 'com_newsfeeds', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 2, 0, 0, '');
# --------------------------------------------------------

#
# Table structure for table `#__components`
#

CREATE TABLE `#__components` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `link` varchar(255) NOT NULL default '',
  `menuid` int(11) unsigned NOT NULL default '0',
  `parent` int(11) unsigned NOT NULL default '0',
  `admin_menu_link` varchar(255) NOT NULL default '',
  `admin_menu_alt` varchar(255) NOT NULL default '',
  `option` varchar(50) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `admin_menu_img` varchar(255) NOT NULL default '',
  `iscore` tinyint(4) NOT NULL default '0',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

#
# Dumping data for table `#__components`
#

INSERT INTO `#__components` VALUES (1, '������', '', 0, 0, '', '���������', 'com_banners', 0, 'js/ThemeOffice/component.png', 0, '');
INSERT INTO `#__components` VALUES (2, '���������', '', 0, 1, 'option=com_banners', '��·�ĺ�����', 'com_banners', 1, 'js/ThemeOffice/edit.png', 0, '');
INSERT INTO `#__components` VALUES (3, '������ͻ�', '', 0, 1, 'option=com_banners&task=listclients', '������ͻ�', 'com_banners', 2, 'js/ThemeOffice/categories.png', 0, '');
INSERT INTO `#__components` VALUES (4, '��վ����', 'option=com_weblinks', 0, 0, '', '������վ����', 'com_weblinks', 0, 'js/ThemeOffice/component.png', 0, '');
INSERT INTO `#__components` VALUES (5, '��վ������Ŀ', '', 0, 4, 'option=com_weblinks', '�鿴��������', 'com_weblinks', 1, 'js/ThemeOffice/edit.png', 0, '');
INSERT INTO `#__components` VALUES (6, '��վ���ӷ���', '', 0, 4, 'option=categories&section=com_weblinks', '������վ���ӷ���', '', 2, 'js/ThemeOffice/categories.png', 0, '');
INSERT INTO `#__components` VALUES (7, '��ϵ��', 'option=com_contact', 0, 0, '', '�༭��ϵ������', 'com_contact', 0, 'js/ThemeOffice/component.png', 1, '');
INSERT INTO `#__components` VALUES (8, '������ϵ��', '', 0, 7, 'option=com_contact', '�༭��ϵ������', 'com_contact', 0, 'js/ThemeOffice/component.png', 1, '');
INSERT INTO `#__components` VALUES (9, '��ϵ�˷���', '', 0, 7, 'option=categories&section=com_contact_details', '������ϵ�˷���', '', 2, 'js/ThemeOffice/categories.png', 1, '');
INSERT INTO `#__components` VALUES (10, '��ҳ', 'option=com_frontpage', 0, 0, '', '������ҳ��ʾ��Ŀ', 'com_frontpage', 0, 'js/ThemeOffice/component.png', 1, '');
INSERT INTO `#__components` VALUES (11, '���ߵ���', 'option=com_poll', 0, 0, 'option=com_poll', '�������ߵ���', 'com_poll', 0, 'js/ThemeOffice/component.png', 0, '');
INSERT INTO `#__components` VALUES (12, '���ŵ���', 'option=com_newsfeeds', 0, 0, '', '���ŵ������', 'com_newsfeeds', 0, 'js/ThemeOffice/component.png', 0, '');
INSERT INTO `#__components` VALUES (13, '�������ŵ���', '', 0, 12, 'option=com_newsfeeds', '�������ŵ���', 'com_newsfeeds', 1, 'js/ThemeOffice/edit.png', 0, '');
INSERT INTO `#__components` VALUES (14, '�������ŵ������', '', 0, 12, 'option=com_categories&section=com_newsfeeds', '�������ŵ������', '', 2, 'js/ThemeOffice/categories.png', 0, '');
INSERT INTO `#__components` VALUES (15, '��¼', 'option=com_login', 0, 0, '', '', 'com_login', 0, '', 1, '');
INSERT INTO `#__components` VALUES (16, 'վ������', 'option=com_search', 0, 0, '', '', 'com_search', 0, '', 1, '');
INSERT INTO `#__components` VALUES (17, '��������','',0,0,'option=com_syndicate','������վ��������','com_syndicate',0,'js/ThemeOffice/component.png',0,'');
# --------------------------------------------------------

#
# Table structure for table `#__contact_details`
#

CREATE TABLE `#__contact_details` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `con_position` varchar(50) default NULL,
  `address` text,
  `suburb` varchar(50) default NULL,
  `state` varchar(20) default NULL,
  `country` varchar(50) default NULL,
  `postcode` varchar(10) default NULL,
  `telephone` varchar(25) default NULL,
  `fax` varchar(25) default NULL,
  `misc` mediumtext,
  `image` varchar(100) default NULL,
  `imagepos` varchar(20) default NULL,
  `email_to` varchar(100) default NULL,
  `default_con` tinyint(1) unsigned NOT NULL default '0',
  `published` tinyint(1) unsigned NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `params` text NOT NULL,
  `user_id` int(11) NOT NULL default '0',
  `catid` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

#
# Dumping data for table `#__contact_details`
#

INSERT INTO `#__contact_details` VALUES (1, '����', 'ְλ', '��ַ', '����', 'ʡ��', '����', '�ʱ�', '�绰', '����', '������Ϣ', 'asterisk.png', 'top', 'email@email.com', 1, 1, 0, '0000-00-00 00:00:00', 1, '', 0, 4, 0);# --------------------------------------------------------

#
# Table structure for table `#__content`
#

CREATE TABLE `#__content` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `title_alias` varchar(100) NOT NULL default '',
  `introtext` mediumtext NOT NULL,
  `fulltext` mediumtext NOT NULL,
  `state` tinyint(3) NOT NULL default '0',
  `sectionid` int(11) unsigned NOT NULL default '0',
  `mask` int(11) unsigned NOT NULL default '0',
  `catid` int(11) unsigned NOT NULL default '0',
  `created` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) unsigned NOT NULL default '0',
  `created_by_alias` varchar(100) NOT NULL default '',
  `modified` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified_by` int(11) unsigned NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_up` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL default '0000-00-00 00:00:00',
  `images` text NOT NULL,
  `urls` text NOT NULL,
  `attribs` text NOT NULL,
  `version` int(11) unsigned NOT NULL default '1',
  `parentid` int(11) unsigned NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `access` int(11) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `idx_section` (`sectionid`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_catid` (`catid`),
  KEY `idx_mask` (`mask`)
) TYPE=MyISAM;


#
# Dumping data for table `#__content`
#
INSERT INTO `#__content` VALUES (1, 'ʲô��Mambo���ܽ�վϵͳ(CMS)��', 'Mambo���', '��ӭת�أ�ת����ע��������Mambo�й�http://www.mambochina.net<br /><br />Mambo��������˼Ϊ��������(Դ�ڹŰͺ�������)������������Ϲ�����ǿ��Ŀ���Դ������ܽ�վϵͳ֮һ����2004��4��20���׶ؾ��е�Linux�û��Ϳ���Ա����ϣ�Mambo���ڶ�����Ŀ���Դ��ϵͳ����ӱ���������2004������Linux����Դ��ϵͳ�������ͬ����������KDE��Firebird SQL�Լ�eGroupware�ȣ���Щ����֪���Ⱥܸߣ����㷺ʹ�õ�ϵͳ������ȴ��ΪMambo�����°ܽ��������֪��Mambo��ħ���ж��<br /><br />Mambo�ǹ��ܷǳ�ǿ������ܽ�վϵͳ��Ŀǰ�û��쳬����Phpnuke,��������phpnuke,xoops�ĺܶ��ŵ㣬������ǿ����������Ĳ����Ƥ�����أ�<br /><br />���Ľ�����һ���ϺõĽ��ͣ�Mambo������ʺ���վ����͹���ġ�', 'Mambo������ʲô������<br /><br />����Ҳ������Ҫ�ģ�Mambo��һ����վ���ܽ�վϵͳ(CMS)��������վ�ĺ�̨���棬ʹ��վ���ݵĴ���������͹�����Ӽ��ס�<br /><br />��Ҫ�ص㣺<br /><br />ǿ��Դ�Լ��ף�����Mambo�Ŀں� power in simplicity!<br />Դ����ȫ���ź���ѡ�<br />��һ�������ȫ���û��Ϳ���Ա������ <br />�ṩ������������˻��ƣ������ע���û���������ݡ�<br />�ṩҳ�滺����ƣ���ߴ��������վ�����ܡ�<br />����վ��������<br />������ (���磺���Ĺ��)��<br />��ý�� (ͼƬ���ļ�) �ϴ��͹��� ��<br />������ʾ�����Զ�������<br />����������ʾ (RSS)��<br />���������Ѻ� (SEF) ��ַģʽ���Ѷ�̬��ַ��ʾ�ɾ�̬ģʽ��������֩�������ץȡ��վ���ݡ�<br />���ʻ� (���淭��)��<br />����֧�ֺ����ԡ�<br />�Ƚ��ҷ����ϵͳ�����̨�� <br />�Ƚ��� �����/ģ��/����ģ�桱��װ������ơ�<br />����ǿ��Ľ���ģ����� (�󲿷ֶ��� HTML ��д��û�и��ӵ��﷨��ֻ���ü��� PHP ������include)�� <br />���ȼ������û���Ȩ�޿���<br />�����ķÿ�ͳ�ƹ��ܡ� <br />֧�ֶ��� WYSIWYG ���������õ����ݱ༭����<br />�򵥵ĵ���ϵͳ��<br />����ͶƱ/����ϵͳ�� <br />���⻹�кܶ�ʵ�õĲ����Mambo��������http://www.mamboforge.net�У���Ҫ�У�<br /><br />LDAP ��֤ <br />��չ���û����Ϲ��� <br />��̳ <br />ͼ�� <br />�ļ����ع��� <br />����ģ�� <br />����<br />... ... ���кܶ�<br /><br />Mambo����ʲô������<br /><br />Mambo���Ǵ��͵ġ��Ż�����վ���������<br /><br />��Ȼͨ����Mambo�����޸ĺ���չ��Ҳ����������������Ż���վ�����������Mambo��Ŀ�����ڡ�Mambo��Ҫ����˾��վ����С��������վ����ͥ�͸�����վ��<br /><br />Mambo�����Ŷ������ڹ���һ���ɿ���Ӧ�ÿ�ܣ������ǹ���Ӧ�ò����������ںܶ��Ż���վ�����кܳ���������ԭ��ʹ��Mambo���ķǳ����ɺ͸�Ч���������õ�������Mambo�Ļ����϶��������ģ�飬ֱ���������ǵ���Ҫ��', 1, 1, 0, 1, '2004-09-25 11:54:06', 62, 'Web Master', '2004-09-25 21:05:15', 62, 0, '0000-00-00 00:00:00', '2004-09-25 00:00:00', '0000-00-00 00:00:00', 'asterisk.png|left|Another logo|0', '', 'pageclass_sfx=\nback_button=\nitem_title=1\nlink_titles=\nintrotext=1\nsection=0\nsection_link=0\ncategory=0\ncategory_link=0\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=', 2, 0, 1, '', '', 0, 1);
INSERT INTO `#__content` VALUES (2, 'Mambo�ʺ�����', '', '�������룺zhous��Mambo�й�<br />����ԭ�ģ�Is Mambo for me? ����Mambo�ٷ���վ<br /><br />�������������ṩһЩ���̵������Ϊ������Mamboǰ�Ĳο�����������ѡ�����ʺ����������ݹ���ϵͳ��CMS����<br />��������������ƪ����ʱ��Ҳ����Ϊ���ҵ���õ����ݹ���ϵͳ��CMS�����Ѿ�������Ѱ���˼���Сʱ�������졣�������������ô����ʵ���ܻ������Ǹտ�ʼ���ľ�֮�á�', '��������ƾʲô��ȷ�ж�һ��CMS�����������õ�CMS�أ������ǰ������ش���һ����Ĳο������<br />����1��http://mamboforge.net/demo����Mambo����ʾ��վ��<br />����2��www.cmsmatrix.org�������վ�����Զ������еĻ��߲�Ϊ��֪���ڶ����ݹ���ϵͳ����ƽ�бȽϡ�<br />����3��www.opensourcecms.com����һ���ռ��˺ܶ��ڶ����ݹ�������ʾ��������վ<br /><br />���������ۿ�һ����ʾ����ĳһ�����ݹ���ϵͳ�����Ϻõ�ӡ���ǲ��Ǿ͹��ˣ�<br />����������Ϊ��ԶԶ�����ġ���Ӧ�����˽�����������֮���پ����������ʺ����������ݹ���ϵͳ��<br />����1�������ݹ���ϵͳ�Ƿ���һ����ȫ�Ŀ����Ŷ��ṩ���ļ���֧�֣�<br />����2�������ݹ���ϵͳ�Ƿ���һ����ȫ�Ŀ�������Ϊ�û��ṩ�ḻ�Ĳ����ģ��ȵȣ�������������ָ���Ŀ�����Ա�����־Ը�Կ�����֯����ˣ�<br />����3�������ݹ���ϵͳ�Ƿ���һ����ȫ�Ŀ���Ϊϵͳ�ĳ�����չ�ṩ������������֧�ֵ��û�Ⱥ�壿<br />�������Ǻܸ��˵���Mambo�����ؼ�����������Ҫ�ء�<br /><br />��������Ľ�����Խ�һ���������Ƚϲ�ͬ�����ݹ���ϵͳ��<br />����1��������֮ǰ������һ�����ǲ���һ���ܹ���ʱ���µ�ϵͳ�����ǲ������µİ汾������Mambo������ȥ���￴����http://mamboforge.net/projects/mambo/����<br />����2�����һ���Ƿ����ṩ�������ͻ�֧�ֺ����ŵĽ�����վ������Mambo������ȥhttp://mamboforge.net ������������Ҳ����ֱ��������������ͨ���ؼ��ʡ�Mambo CMS��������������<br />����3�����һ���Ƿ��й��û�Ѱ������ͽ����ĵ�������̳����������ý�飨����Mambo������ȥhttp://forum.mamboserver.com��<br /><br />������������ϣ�����ܹ�˳���ҵ�������Ҫ�����ݹ���ϵͳ���ոջ��2004������Linux����Դ��ϵͳ����Mambo����������һ���˲�������ݹ���ϵͳ�����Ǿ�������˵������������������һ���������õ����ϵ���ߡ�', 1, 1, 0, 3, '2004-09-25 08:30:34', 62, '', '2004-09-25 21:06:28', 62, 0, '0000-00-00 00:00:00', '2004-09-25 00:00:00', '0000-00-00 00:00:00', '', '', 'pageclass_sfx=\nback_button=\nitem_title=1\nlink_titles=\nintrotext=1\nsection=0\nsection_link=0\ncategory=0\ncategory_link=0\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=', 2, 0, 1, '', '', 0, 1);
INSERT INTO `#__content` VALUES (3, 'Mambo 4.5.1��ʽ�淢���ˣ�', '', '����һ���ر�������ܵ���Ϣ���ڴ��Ѿõ�Mambo 4.5.1�ȶ��棬�ھ�������Beta���԰��4��RC��ѡ�����������֮�󣬽��죬2004��9��24�գ����ڷ����ˣ�<br /><br />����Mambo 4.5.1�ȶ���������Beta���RC��ѡ���з��ֵ�����Bugs����������๦�ܣ�ʹMambo�����ܺ��ȶ��Դ����ߣ���ȫ����ʤ�ζ������͵�������վ��������վ��Ӧ�á�<br /><br />����Ŀǰ�ٷ�������Mambo 4.5.1�ȶ���ΪӢ�Ľ��棬ǰ̨����ĺ�����������Mambo�й���ɣ���ӭ����ʹ�ã���̨����ĺ����������ڽ����ܹĵĽ��е��У������ע��', '', 1, 2, 0, 3, '2004-09-25 08:30:34', 62, '', '2004-09-25 21:07:29', 62, 0, '0000-00-00 00:00:00', '2004-09-25 00:00:00', '0000-00-00 00:00:00', '', '', 'pageclass_sfx=\nback_button=\nitem_title=1\nlink_titles=\nintrotext=1\nsection=0\nsection_link=0\ncategory=0\ncategory_link=0\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=', 2, 0, 2, '', '', 0, 0);
INSERT INTO `#__content` VALUES (4, 'Newsflash 3', '', 'Aoccdrnig to a rscheearch at an Elingsh uinervtisy, it deosn\'t mttaer in waht oredr the ltteers in a wrod are, the olny iprmoetnt tihng is taht frist and lsat ltteer is at the rghit pclae. The rset can be a toatl mses and you can sitll raed it wouthit porbelm. Tihs is bcuseae we do not raed ervey lteter by itslef but the wrod as a wlohe.', '', -2, 2, 1, 3, '2004-08-09 08:30:34', 62, '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '2004-08-09 00:00:00', '0000-00-00 00:00:00', '', '', '', 1, 0, 0, '', '', 0, 0);
INSERT INTO `#__content` VALUES (11, 'Mamboʹ�����Э��', '', '<font size="2"> <br />GNUͨ�ù������֤(<B style=\'color:black;background-color:#ffff66\'>GPL</B>)</font><br /><p><font size="2">GNUͨ�ù������֤<br /><br />1991.6 �ڶ���</font><br /><p><font size="2">��Ȩ���У�C��1989��1991 Free Software foundation, Inc.<br /><br />675 Mass Ave, Cambridge, MA02139, USA<br /><br />����ÿ���˸��ƺͷ�����һ���֤ԭʼ�ĵ��ĸ����������Բ�������������κ��޸ġ�</font><br /><p><font size="2">����</font><br /><p><font size="2"> <br />�����������֤���������Ĺ�����޸���������ɡ��Ա�֮�£�GNUͨ�ù������֤��ͼ��֤��Ĺ�����޸�������������ɡ�������֤��������������û������ɵġ�<B style=\'color:black;background-color:#ffff66\'>GPL</B>�����ڴ�����������������������Լ���ʹ����Щ������е������������������������������������������һЩ�����GNU��ͨ�����֤�ı���������Ҳ���Խ����õ���ĳ����С�������̸�����������free <br />software��ʱ������ָ�������ɶ����Ǽ۸�<br /><br /> ���ǵ�GNUͨ�ù������֤���Ᵽ֤���з���������������ɣ������Ը�⣬����ԶԴ��������ȡһ���ķ��ã�����֤�����յ�Դ�������������Ҫʱ�ܵõ�������֤�����޸����������һ���������µ�������������һ���֤��֪����������Щ���顣<br /><br /> <br />Ϊ�˱������Ȩ����������Ҫ�����涨����ֹ�κ��˲��������Ȩ��������Ҫ���������ЩȨ����������޸�������������߷���������ĸ�������Щ�涨��ת��Ϊ������Ρ�<br /><br /> <br />���磬����㷢������һ������ĸ������������շѵĻ�����ѵģ�����뽫����е�һ��Ȩ��������Ľ����ߣ�����뱣֤�������յ���õ�Դ���򣻲��ҽ���Щ��������ǿ���ʹ����֪��������������Ȩ����<br /><br /> ���ǲ�ȡ�����ʩ���������Ȩ����<br /><br />��1��������԰�Ȩ������<br /><br />��2�������ṩ���֤�������㸴�ƣ��������޸���Щ����ķ�����ɡ�<br /><br /> <br />ͬ����Ϊ�˱���ÿ�����ߺ������Լ���������Ҫ�������ÿ�������ף��������û�е�����no <br />warranty���������������ĳ�����޸�����������������Դ�����������Ҫ���Ľ��������ף��������õ��Ĳ�����ԭ���������������������������κ����⣬��Ӧ��ԭ���ߵ�������<br /><br /> <br />����κ�������������ܵ����ר������в������ϣ�����������ķ��գ�����������ٷ������Ը���������ר�����֤����ʵ�ϣ��������Ϊ˽�С�Ϊ��ֹ��һ�㣬���Ǳ�����ȷ���κ�ר������������ÿ��������ʹ��Ϊǰ�ᣬ����Ͳ�׼����ר����<br /><br /> <br />�������йظ��ƣ��������޸ĵ�ȷ�е������������</font><br /><p><font size="2"><br /><br />GNUͨ�ù������֤<br /><br />�йظ��ƣ��������޸ĵ����������</font><br /><p><font size="2">0. <br />�����֤�������κΰ�����Ȩ�����������ĳ����������Ʒ����Ȩ����������������ȷ˵���������Ʒ������<B style=\'color:black;background-color:#ffff66\'>GPL</B>�����Լ���·����������ᵽ�ġ�����ָ�����κ������ĳ������Ʒ���������ڳ������Ʒ��ָ���ǳ�������κ��ܰ�Ȩ��Լ����������Ʒ��Ҳ����˵�������������һ���ֵ���Ʒ��������ԭ�ⲻ���ģ��򾭹��޸ĵĺͣ�������������Եģ����򣩡��������У�����������޸ĵ������С�ÿ�����֤�����ˣ�licensee���������ƺ������֤��������ڸ��ƣ��������޸�����Ļ����Щ�������Щ����ķ�Χ�����г���Ļ�����������ֹ�����������������ɻ��ڳ�����Ʒ������ʱ����һ��������ã����ֻ���г�����޹أ����Ƿ��ձ�����ȡ���ڳ������������ʲô��</font><br /><p><font size="2">1. <br />ֻҪ����ÿһ���������Ժ�ǡ���س����Ȩ�����Ͳ� <br />е������ <br />���������ִ����֤��������û�е����������������𣬲��ͳ���һ���ÿ�������ĳ��������һ�����֤�ĸ�������Ϳ������κ�ý�帴�ƺͷ������յ���ԭʼ�ĳ����Դ���롣�����Ϊת�ø�����ʵ���ж���ȡһ�����á���Ҳ��Ȩѡ���ṩ�����Ի�ȡһ���ķ��á�</font><br /><p><font size="2">2. <br />������޸ĳ����һ���򼸸������������κβ��֣��Դ��γɻ��ڳ������Ʒ��ֻҪ��ͬʱ���������������������Ϳ��԰�ǰ���һ���Ҫ���ƺͷ�����һ�����޸ĵĳ������Ʒ��<br /><br />a�� <br />��������޸ĵ��ļ��и�����ȷ��˵�������޸�����һ�ļ���������޸����ڡ�<br /><br />b�� <br />�����ʹ�㷢����������Ʒ�������������ȫ����һ���֣�������ɳ����ȫ���򲿷���������Ʒ�������������Ϊ���尴���֤�������ʹ�á�<br /><br />c�� <br />����޸ĵĳ���������ʱ�Խ�����ʽ��ȡ��������ʹ���ڿ�ʼ���볣��Ľ���ʹ�÷�ʽʱ��ӡ����ʾ�����������ʵ��İ�Ȩ������û�е������������������ṩ���������������û����԰������֤�������·��������˵�����������û���ο�����һ���֤�ĸ��������������������ԭʼ�����Խ�����ʽ��������������ӡ��������������Ļ��ڳ������ƷҲ�Ͳ��ô�ӡ��������<br /><br /> <br />��ЩҪ���������޸��˵���Ʒ�����塣����ܹ�ȷ����Ʒ��һ���ֲ��ǳ����������Ʒ�����Ժ������Ϊ�ⲿ���Ƕ����ģ��ǲ�ͬ����Ʒ�����㽫����Ϊ������Ʒ����ʱ�������ܴ����֤�����������Լ�������ǵ��㽫�ⲿ����Ϊ���ڳ������Ʒ��һ���ַ���ʱ����Ϊ���������ܵ����֤����Լ����׼���������֤�����˵�ʹ�÷�Χ����������Ʒ��Ҳ����ÿ�����֣���������˭д�ġ���ˣ����������ͼ��������ȡȨ���������ȫ������д�ɵ���Ʒ��Ȩ������������Ȩ�������ƻ��ڳ���ļ�����Ʒ��������Ʒ�ķ��������⣬��������޹ص���Ʒ�͸ó������ڳ������Ʒһ����ڴ�����򷢲�ý���ͬһ���ϣ��������½�������Ʒ���ڴ����֤��Լ����Χ֮�ڡ�</font><br /><p><font size="2">3. <br />�������Ŀ������ִ����ʽ���ƻ򷢲����򣨻���ϵ�2��Ļ��ڳ������Ʒ)��ֻҪ������ǰ��ĵ�1��2���ͬʱ��������3���е�1����<br /><br />a����ͨ���������������ý���ϣ���Ŀ����һ���л����ɶ���������Դ�롣��ЩԴ��ķ���Ӧ���������1��2���Ҫ�󡣻���<br /><br />b����ͨ���������������ý���ϣ���Ŀ����һ�𣬸��и��������ṩ��Ӧ�Ļ����ɶ���Դ������汨�ۡ���Ч�ڲ�����3�꣬���ò�����ʵ�����Դ���򷢲���ʵ�ʳɱ���Դ��ķ���Ӧ��������ĵ�1��2���Ҫ�󡣻���<br /><br />c����Ŀ����һ�𣬸������յ��ķ���Դ��ı�����Ϣ������һ����ֻ�����ڷ���ҵ�Է�����������ֻ�յ������Ŀ������ִ�д���Ͱ�b����Ҫ���ṩ�ı��ۣ�����Ʒ��Դ��ָ���Ƕ���Ʒ�����޸���������ȡ����ʽ���Կ�ִ�е���Ʒ����������Դ�����������ģ�������Դ���򣬼����йصĽӿڵĶ��壬���Ͽ��ƿ�ִ����Ʒ�İ�װ�ͱ����script����Ϊ�������⣬������Դ�벻�ذ����κγ��淢���Ĺ���ִ�д������������еĲ���ϵͳ����Ҫ��ɲ��֣����������ں˵ȣ���������Щ��ɲ��ֺͿ�ִ����Ʒ�����һ����������ṩ��ָ���ص�ķ��ʺ͸��Ƶķ�ʽ������ִ�����Ŀ���룬��ô���ṩ��ͬһ�ص�ķ��ʺ͸���Դ���������Դ��ķ�������ʹ��������ǿ����Ŀ����һ����Դ�롣</font><br /><p><font size="2">4. <br />��������ȷ�����֤�����Ҫ��ȥ���������㲻�ܸ��ƣ��޸ģ�ת�����֤�ͷ��������κ���ͼ��������ʽ���ƣ��޸ģ�ת�����֤�ͷ�����������Ч�ġ����ҽ��Զ��������֤�������Ȩ����Ȼ��������Щ�������ﰴ���֤����õ�������Ȩ�������ǣ�ֻҪ���Ǽ���ȫ������������֤�������ǵ�Ȩ����Ȼ��Ч��</font><br /><p><font size="2">5. <br />��û�������֤��ǩ�֣������û�б�Ҫһ��������һ���֤��Ȼ����û���κ����������������޸ĺͷ���������������Ʒ��Ȩ��������㲻�������֤����Щ��Ϊ�Ƿ��ɽ�ֹ�ġ���ˣ�������޸Ļ򷢲����򣨻��κλ��ڳ������Ʒ������ͱ����������һ���֤�Լ����������йظ��ƣ��������޸ĳ�����<br /><br />�ڳ������Ʒ�������������</font><br /><p><font size="2">6. <br />ÿ�������·������򣨻��κλ��ڳ������Ʒ��ʱ���������Զ���ԭʼ���֤�䷢������ӵ�����Щ���������֧��ĸ��ƣ��������޸ĳ�������֤���㲻���ԶԽ������������︳�����ǵ�Ȩ��ǿ���������ơ���Ҳû��ǿ��������������֤���������</font><br /><p><font size="2">7. <br />������ڷ�Ժ�о���Υ��ר����ָ�ػ��κ�����ԭ�򣨲�����ר�����⣩�Ľ����ǿ������������������Ƿ�Ժ�о���<a name=1></a><B style=\'color:black;background-color:#A0FFFF\'>Э��</B>�������������֤�������г�ͻ������Ҳ���������֤����Ϊ�㿪�ѡ����㲻��ͬʱ���㱾���֤�涨������������ص�����ʱ����Ϊ���������Ը����������������磬���ĳһר�����֤������������Щֱ�ӻ��Ӵ���������ܸ����������ڲ���ר���ѵ���������·�������Ψһ��ͬʱ����������Ҫ��İ취��ֹͣ��������<br /><br /> <br />�����������κβ������ض��Ļ�������Ч���޷�ʵʩ����ʹ����������ಿ�֡�����������Ϊ�������������������������Ŀ�Ĳ������������ַ�ר���������Ʋ�Ȩ��Ҫ�󣬻���������Ҫ�����Ч�ԡ����������ҪĿ�����ڱ��������������ϵͳ�������ԡ�����ͨ��ͨ�ù������֤��Ӧ����ʵ�ֵġ�����˼��Ӧ����һϵͳ���Ѿ�Ϊͨ����һϵͳ������������������������Ĺ��ס����ߣ���������Ȩ�����������Ƿ�ͨ���κ�����ϵͳ������������֤�����˲���ǿ������ѡ��</font><br /><p><font size="2">���ڵ�Ŀ��������ȷ˵�����֤���ಿ�ֿ��ܲ����Ľ����</font><br />{mospagebreak}<p><font size="2">8. <br />�������ר�����������а�Ȩ�Ľӿ�����ʹ������ĳЩ���ҵķ�����ʹ���ܵ���ֹ�����˳����������֤Լ���µ�ԭʼ��Ȩӵ���߿���������ֹ�����������������Щ������ȷ�ų����⡣������Щ��������ĵ���������������������£����֤��������ֹ��������֤����һ����Ч��</font><br /><p><font size="2">9. <br />�����������������ʱ����ͨ�ù������֤���޸İ���°档�°�͵�ǰ�İ汾��ԭ���ϱ���һ�£������ᵽ������ʱ���й�����ʱ����ϸ���Ͽ��ܳ��ֲ��<br /><br />ÿһ�汾���в�ͬ�İ汾�š��������ָ���������������֤�汾���Լ����κθ��µİ汾��������Ȩѡ����ѭָ���İ汾���������������Ժ������°汾���������δָ�����֤�汾�����ѡ���������������Ѿ�������κΰ汾��</font><br /><p><font size="2">10. <br />�����Ը�⽫�����һ���ֽ�ϵ��������ɳ����У������ǵķ���������ͬ��д�Ÿ����ߣ�Ҫ��׼��ʹ�á��������������������԰�Ȩ�����������д�Ÿ������������ᡣ������ʱ����Ϊ���������������ǵľ�����������ҪĿ���ָ������������ҪĿ���ǣ����ǵ����������������Ʒ������������״̬���Լ��������ϴٽ�����Ĺ�����ظ����á�</font><br /><p><font size="2"><br /><br />û�е���</font><br /><p><font size="2">11. <br />���ڳ���׼�����ʹ�ã������÷�׼��ķ�Χ�ڣ��Գ���û�е�����������������˵������Ȩ�����ߺͣ��������ṩ��������ǡ�һ�������ṩ�κ����͵ĵ�������������ȷ�ģ����������ġ��������������������������ʺ��ض���;�ı�֤��ȫ���ķ��գ��������������������ⶼ�������е�������������ȱ�ݣ���е����б�Ҫ�ķ����޸��͸����ķ��á�</font><br /><p><font size="2">12. <br />�������÷�������<B style=\'color:black;background-color:#A0FFFF\'>Э��</B>��Ҫ�����κ�����£��κΰ�Ȩ�����߻��κΰ����֤�����޸ĺͷ�����������Ƕ����������ʧ�����κ����Ρ���������ʹ�û���ʹ�ó���������κ�һ��ģ�����ģ�żȻ�����Ļ��ش����ʧ�����������������ݵ���ʧ���������ݱ�ò���ȷ���������������ĳ�������ʧ�����߳����ܺ���������Э�����еȣ�����ʹ��Ȩ�����ߺ��������ᵽ������ʧ�Ŀ�����Ҳ�����⡣</font><br /><p><font size="2"><br /><br />�������������<br /><br />��ν���Щ�����õ�����³���</font><br /><p><font size="2">����㿪�����³��򣬶�������Ҫ���õ���������޶ȵ����á�Ҫ������һ�����ð취�ǽ�����Ϊ���������ʹ��ÿ���˶�������������Ļ����϶��������޸ĺ����·�����<br /><br />Ϊ��������һ�㣬�������������������ȫ�ķ�ʽ�ǽ�������ÿ��Դ����Ŀ�ͷ���Ա�����Ч�ش��ݾܾ���������Ϣ��ÿ���ļ�����Ӧ�С���Ȩ���С����Լ���ʲô�ط��ܿ�������ȫ�ĵ�˵����</font><br /><p><font size="2"><��һ�пռ������������ƺ���������ʲô�ļ�˵��><br /><br />��Ȩ���У�C�� 19XX <��������><br /><br />��һ����������������������������������������GNUͨ�ù������֤�������޸ĺ����·�����һ���򡣻��������֤�ĵڶ��棬���ߣ��������ѡ�����κθ��µİ汾��<br /><br />������һ�����Ŀ����ϣ�������ã���û���κε���������û���ʺ��ض�Ŀ�ĵ������ĵ���������ϸ����������GNUͨ�ù������֤��<br /><br />��Ӧ���Ѿ��ͳ���һ���յ�һ��GNUͨ�ù������֤�ĸ����������û�У�<br /><br />д�Ÿ���<br /><br />The Free Software Foundation, Inc., 675 Mass Ave, Cambridge,<br /><br />MA02139, USA<br /><br />��Ӧ������κ��㱣����ϵ����Ϣ��</font><br /><p><font size="2">��������Խ�����ʽ���й�����������ʼ���뽻����ʽ����ʱ��ʹ�������������ļ��������<br /><br />Gnomovision ��69�棬 ��Ȩ���У�C�� 19XX�� ����������<br /><br />Gnomovision����û�е����� Ҫ֪����ϸ����������롮show w����<br /><br />���������������ӭ������һ�����������·�������Ҫ֪����ϸ�����<br /><br />�����롮show c����<br /><br />��������show w���͡�show c��Ӧ��ʾͨ�ù������֤����Ӧ�����Ȼ����ʹ�õ��������ƿ��Բ�ͬ�ڡ�show <br />w���͡�show c����������ĳ���ľ��������Ҳ�����ò˵������ѡ������ʾ��Щ���</font><br /><p><font size="2">�����Ҫ����Ӧ��ȡ�������˾��������ǳ���Ա�������ѧУǩ����������Ȩ������������ֻ��һ�����ӣ���Ӧ�øı���Ӧ�����ƣ�<br /><br />Yoyodyne��˾�Դ˷�ʽ����James Harker<br /><br />��д�� Gnomovision�����ȫ����Ȩ���档<br /><br /><Ty coonǩ��>��1989.4.1<br /><br />Ty coon���ܲ�</font><br /><p><font size="2">��һ���֤�������㽫������ר�ó��������ĳ�����һ���ӳ���⡣</font><br /><p><font size="2">����ܻ���Ϊ�ÿ�ķ�ʽ��ר��Ӧ�ó������Ӹ����á�����������������£�ʹ��GNU��ͨ�ù������֤���汾���֤��</font></p>', '', 1, 0, 0, 0, '2004-08-19 20:11:07', 62, '', '2004-09-25 22:10:05', 62, 0, '0000-00-00 00:00:00', '2004-08-19 00:00:00', '0000-00-00 00:00:00', '', '', 'menu_image=-1\nitem_title=1\npageclass_sfx=\nback_button=\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=', 1, 0, 11, '																				', '																				', 0, 16);

# --------------------------------------------------------

#
# Table structure for table `#__content_frontpage`
#

CREATE TABLE `#__content_frontpage` (
  `content_id` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`content_id`)
) TYPE=MyISAM;

#
# Dumping data for table `#__content_frontpage`
#

INSERT INTO `#__content_frontpage` VALUES (1, 1);
# --------------------------------------------------------



#
# Table structure for table `#__content_rating`
#

CREATE TABLE `#__content_rating` (
  `content_id` int(11) NOT NULL default '0',
  `rating_sum` int(11) unsigned NOT NULL default '0',
  `rating_count` int(11) unsigned NOT NULL default '0',
  `lastip` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`content_id`)
) TYPE=MyISAM;

# --------------------------------------------------------

# Table structure for table `#__core_log_items`
#
# To be implemented in Version 4.6

CREATE TABLE `#__core_log_items` (
  `time_stamp` date NOT NULL default '0000-00-00',
  `item_table` varchar(50) NOT NULL default '',
  `item_id` int(11) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '0'
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `#__core_log_searches`
#
# To be implemented in Version 4.6

CREATE TABLE `#__core_log_searches` (
  `search_term` varchar(128) NOT NULL default '',
  `hits` int(11) unsigned NOT NULL default '0'
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `#__groups`
#

CREATE TABLE `#__groups` (
  `id` tinyint(3) unsigned NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

#
# Dumping data for table `#__groups`
#

INSERT INTO `#__groups` VALUES (0, 'Public');
INSERT INTO `#__groups` VALUES (1, 'Registered');
INSERT INTO `#__groups` VALUES (2, 'Special');
# --------------------------------------------------------

#
# Table structure for table `#__mambots`
#

CREATE TABLE `#__mambots` (
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

INSERT INTO #__mambots VALUES (1,'MamboͼƬ','mosimage','content',0,-10000,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO #__mambots VALUES (2,'Mambo��ҳ','mospaging','content',0,10000,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO #__mambots VALUES (3,'ԭ��Mambot����','legacybots','content',0,1,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO #__mambots VALUES (4,'���������Ż�����','mossef','content',0,3,1,0,0,0,'0000-00-00 00:00:00','');
INSERT INTO #__mambots VALUES (5,'Mambo��������','mosvote','content',0,4,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO #__mambots VALUES (6,'��������','content.searchbot','search',0,1,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO #__mambots VALUES (7,'������վ����','weblinks.searchbot','search',0,2,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO #__mambots VALUES (8,'����֧��','moscode','content',0,2,1,0,0,0,'0000-00-00 00:00:00','');
INSERT INTO #__mambots VALUES (9,'�����������ñ༭��','none','editors',0,0,1,1,0,0,'0000-00-00 00:00:00','');
INSERT INTO #__mambots VALUES (10,'TinyMCE���������ñ༭��','tinymce','editors',0,0,0,0,0,0,'0000-00-00 00:00:00','theme=default');
INSERT INTO #__mambots VALUES (11,'MamboͼƬ�༭����ť','mosimage.btn','editors-xtd',0,0,1,0,0,0,'0000-00-00 00:00:00','');
INSERT INTO #__mambots VALUES (12,'Mambo��ҳ�༭����ť','mospage.btn','editors-xtd',0,0,1,0,0,0,'0000-00-00 00:00:00','');
INSERT INTO #__mambots VALUES (13,'������ϵ��','contacts.searchbot','search',0,3,1,1,0,0,'0000-00-00 00:00:00','');

# --------------------------------------------------------

#
# Table structure for table `#__menu`
#

CREATE TABLE `#__menu` (
  `id` int(11) NOT NULL auto_increment,
  `menutype` varchar(25) default NULL,
  `name` varchar(100) default NULL,
  `link` text,
  `type` varchar(50) NOT NULL default '',
  `published` tinyint(1) NOT NULL default '0',
  `parent` int(11) unsigned NOT NULL default '0',
  `componentid` int(11) unsigned NOT NULL default '0',
  `sublevel` int(11) default '0',
  `ordering` int(11) default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `pollid` int(11) NOT NULL default '0',
  `browserNav` tinyint(4) default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `utaccess` tinyint(3) unsigned NOT NULL default '0',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `componentid` (`componentid`,`menutype`,`published`,`access`),
  KEY `menutype` (`menutype`)
) TYPE=MyISAM;

#
# Dumping data for table `#__menu`
#

INSERT INTO `#__menu` VALUES (1, 'mainmenu', '��ҳ', 'index.php?option=com_frontpage', 'components', 1, 0, 10, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'leading=1\r\nintro=2\r\nlink=1\r\nimage=1\r\npage_title=0\r\nheader=��ӭ����Mambo\r\norderby_sec=front\r\nprint=0\r\npdf=0\r\nemail=0');
INSERT INTO `#__menu` VALUES (2, 'mainmenu', '����', 'index.php?option=com_content&task=section&id=1', 'content_section', 1, 0, 1, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, '');
INSERT INTO `#__menu` VALUES (3, 'mainmenu', '��ϵ����', 'index.php?option=com_contact', 'components', 1, 0, 7, 0, 7, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, '');
INSERT INTO `#__menu` VALUES (4, 'mainmenu', '��վ����', 'index.php?option=com_weblinks', 'components', 1, 0, 4, 0, 6, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'image=web_links.jpg\r\nimage_align=right');
INSERT INTO `#__menu` VALUES (5, 'othermenu', 'Mambo�й�', 'http://www.mambochina.net', 'url', 1, 0, 0, 0, 1, 0, '0000-00-00 00:00:00', 0, 1, 0, 3, '');
INSERT INTO `#__menu` VALUES (6, 'othermenu', 'Mambo��վ', 'http://www.mamboserver.com', 'url', 1, 0, 0, 0, 2, 0, '0000-00-00 00:00:00', 0, 1, 0, 3, '');
INSERT INTO `#__menu` VALUES (7, 'othermenu', '��̨����', 'administrator/', 'url', 1, 0, 0, 0, 4, 0, '0000-00-00 00:00:00', 0, 1, 0, 3, 'menu_image=-1');
INSERT INTO `#__menu` VALUES (8, 'othermenu', 'Mambo��������', 'http://www.mamboforge.net', 'url', 1, 0, 0, 0, 3, 0, '0000-00-00 00:00:00', 0, 1, 0, 3, '');
INSERT INTO `#__menu` VALUES (21, 'usermenu', '��������', 'index.php?option=com_user&task=UserDetails', 'url', 1, 0, 0, 0, 1, 0, '2000-00-00 00:00:00', 0, 0, 1, 3, '');
INSERT INTO `#__menu` VALUES (22, 'usermenu', '�ύ����', 'index.php?option=com_content&task=new&sectionid=1&Itemid=0', 'url', 1, 0, 0, 0, 2, 0, '2000-00-00 00:00:00', 0, 0, 1, 2, '');
INSERT INTO `#__menu` VALUES (23, 'usermenu', '��������', 'index.php?option=com_weblinks&task=new', 'url', 1, 0, 0, 0, 4, 0, '2000-00-00 00:00:00', 0, 0, 1, 2, '');
INSERT INTO `#__menu` VALUES (24, 'usermenu', '�Ż���Ŀ', 'index.php?option=com_user&task=CheckIn', 'url', 1, 0, 0, 0, 5, 0, '0000-00-00 00:00:00', 0, 0, 1, 2, '');
INSERT INTO `#__menu` VALUES (11, 'topmenu', '��ҳ', 'index.php', 'url', 1, 0, 0, 0, 7, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, '');
INSERT INTO `#__menu` VALUES (27, 'mainmenu', 'վ������', 'index.php?option=com_search', 'components', 1, 0, 16, 0, 7, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, '');
INSERT INTO `#__menu` VALUES (28, 'topmenu', '��ϵ����', 'index.php?option=com_contact&Itemid=3', 'url', 1, 0, 0, 0, 5, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, '');
INSERT INTO `#__menu` VALUES (29, 'topmenu', '����', 'index.php?option=com_content&task=section&id=1&Itemid=2', 'url', 1, 0, 0, 0, 6, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, '');
INSERT INTO `#__menu` VALUES (30, 'topmenu', '��վ����', 'index.php?option=com_weblinks&Itemid=4', 'url', 1, 0, 0, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, '');
INSERT INTO `#__menu` VALUES (33, 'mainmenu', 'Mambo���Э��', 'index.php?option=com_content&task=view&id=11', 'content_typed', 1, 0, 11, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '');
INSERT INTO `#__menu` VALUES (34, 'usermenu', '�˳���¼', 'index.php?option=com_login', 'components', 1, 0, 15, 0, 5, 0, '0000-00-00 00:00:00', 0, 0, 1, 3, '');
INSERT INTO `#__menu` VALUES (37, 'mainmenu', '���ŵ���', 'index.php?option=com_newsfeeds', 'components', 1, 0, 12, 0, 9, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'menu_image=-1\r\npageclass_sfx=\r\nback_button=\r\npage_title=1\r\nheader=');
INSERT INTO `#__menu` VALUES (38, 'mainmenu', 'Ƕ��ҳ��', 'index.php?option=com_wrapper', 'wrapper', 1, 0, 0, 0, 10, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'menu_image=-1\r\npageclass_sfx=\r\nback_button=\r\npage_title=1\r\nheader=\r\nscrolling=auto\r\nwidth=100%\r\nheight=600\r\nheight_auto=1\r\nurl=www.mamboserver.com');
INSERT INTO `#__menu` VALUES (39, 'mainmenu', 'Blog���', 'index.php?option=com_content&task=blogsection&id=0', 'content_blog_section', 1, 0, 0, 0, 5, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'count=8\r\nintro=3\r\nimage=0\r\norderby=date asc\r\nheader=A blog of all section with no images\r\nempty=');
# --------------------------------------------------------

#
# Dumping data for table `#__messages`
#

CREATE TABLE `#__messages` (
  `message_id` int(10) unsigned NOT NULL auto_increment,
  `user_id_from` int(10) unsigned NOT NULL default '0',
  `user_id_to` int(10) unsigned NOT NULL default '0',
  `folder_id` int(10) unsigned NOT NULL default '0',
  `date_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `state` int(11) NOT NULL default '0',
  `priority` int(1) unsigned NOT NULL default '0',
  `subject` varchar(230) NOT NULL default '',
  `message` text NOT NULL,
  PRIMARY KEY  (`message_id`)
) TYPE=MyISAM;
# --------------------------------------------------------

#
# Dumping data for table `#__messages_cfg`
#

CREATE TABLE `#__messages_cfg` (
  `user_id` int(10) unsigned NOT NULL default '0',
  `cfg_name` varchar(100) NOT NULL default '',
  `cfg_value` varchar(255) NOT NULL default '',
  UNIQUE `idx_user_var_name` (`user_id`,`cfg_name`)
) TYPE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `#__modules`
#

CREATE TABLE `#__modules` (
  `id` int(11) NOT NULL auto_increment,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `ordering` int(11) NOT NULL default '0',
  `position` varchar(10) default NULL,
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL default '0',
  `module` varchar(50) default NULL,
  `numnews` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `showtitle` tinyint(3) unsigned NOT NULL default '1',
  `params` text NOT NULL,
  `iscore` tinyint(4) NOT NULL default '0',
  `client_id` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `published` (`published`,`access`),
  KEY `newsfeeds` (`module`,`published`)
) TYPE=MyISAM;

#
# Dumping data for table `#__modules`
#

INSERT INTO `#__modules` VALUES (1, '���ߵ���', '', 1, 'right', 0, '0000-00-00 00:00:00', 1, 'mod_poll', 0, 0, 1, '', 0, 0);
INSERT INTO `#__modules` VALUES (2, '�û��˵�', '', 2, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 1, 1, 'menutype=usermenu', 1, 0);
INSERT INTO `#__modules` VALUES (3, '���˵�', '', 1, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 1, 'menutype=mainmenu', 1, 0);
INSERT INTO `#__modules` VALUES (4, '�û���¼', '', 3, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_login', 0, 0, 1, '', 1, 0);
INSERT INTO `#__modules` VALUES (5, '��������', '', 4, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_rssfeed', 0, 0, 1, '', 1, 0);
INSERT INTO `#__modules` VALUES (6, '��������', '', 4, 'user1', 0, '0000-00-00 00:00:00', 1, 'mod_latestnews', 0, 0, 1, '', 1, 0);
INSERT INTO `#__modules` VALUES (7, 'վ��ͳ��', '', 4, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_stats', 0, 0, 1, 'serverinfo=1\nsiteinfo=1\ncounter=1\nincrease=0\nmoduleclass_sfx=', 0, 0);
INSERT INTO `#__modules` VALUES (8, '�������', '', 1, 'right', 0, '0000-00-00 00:00:00', 1, 'mod_whosonline', 0, 0, 1, 'online=1\nusers=1\nmoduleclass_sfx=', 0, 0);
INSERT INTO `#__modules` VALUES (9, '��������', '', 6, 'user2', 0, '0000-00-00 00:00:00', 1, 'mod_mostread', 0, 0, 1, '', 0, 0);
INSERT INTO `#__modules` VALUES (10, 'ģ��ѡ����','',6,'left',0,'0000-00-00 00:00:00',0,'mod_templatechooser', 0, 0, 1, 'show_preview=1', 0, 0);
INSERT INTO `#__modules` VALUES (11, '���´浵', '', 7, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_archive', 0, 0, 1, '', 1, 0);
INSERT INTO `#__modules` VALUES (12, '���µ�Ԫ', '', 8, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_sections', 0, 0, 1, '', 1, 0);
INSERT INTO `#__modules` VALUES (13, '���ſ�Ѷ', '', 1, 'top', 0, '0000-00-00 00:00:00', 1, 'mod_newsflash', 0, 0, 1, 'catid=3\r\nstyle=random\r\nitems=\r\nmoduleclass_sfx=', 0, 0);
INSERT INTO `#__modules` VALUES (14, '�������', '', 9, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_related_items', 0, 0, 1, '', 0, 0);
INSERT INTO `#__modules` VALUES (15, 'վ������', '', 1, 'user4', 0, '0000-00-00 00:00:00', 1, 'mod_search', 0, 0, 0, '', 0, 0);
INSERT INTO `#__modules` VALUES (16, '���ͼƬ', '', 9, 'right', 0, '0000-00-00 00:00:00', 1, 'mod_random_image', 0, 0, 1, '', 0, 0);
INSERT INTO `#__modules` VALUES (17, '�����˵�', '', 1, 'user3', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 0, 'menutype=topmenu\nmenu_style=list_flat\nmenu_images=n\nmenu_images_align=left\nexpand_menu=n\nclass_sfx=-nav\nmoduleclass_sfx=\nindent_image1=0\nindent_image2=0\nindent_image3=0\nindent_image4=0\nindent_image5=0\nindent_image6=0', 1, 0);
INSERT INTO `#__modules` VALUES (18, '������', '', 1, 'banner', 0, '0000-00-00 00:00:00', 1, 'mod_banners', 0, 0, 0, 'banner_cids=\nmoduleclass_sfx=\n', 1, 0);
INSERT INTO `#__modules` VALUES (0,'���','',2,'cpanel',0,'0000-00-00 00:00:00',1,'mod_components',0,99,1,'',1, 1);
INSERT INTO `#__modules` VALUES (0,'��������','',3,'cpanel',0,'0000-00-00 00:00:00',1,'mod_popular',0,99,1,'',0, 1);
INSERT INTO `#__modules` VALUES (0,'��������','',4,'cpanel',0,'0000-00-00 00:00:00',1,'mod_latest',0,99,1,'',0, 1);
INSERT INTO `#__modules` VALUES (0,'ͳ����Ϣ','',5,'cpanel',0,'0000-00-00 00:00:00',1,'mod_stats',0,99,1,'',0, 1);
INSERT INTO `#__modules` VALUES (0,'δ������','',1,'header',0,'0000-00-00 00:00:00',1,'mod_unread',0,99,1,'',1, 1);
INSERT INTO `#__modules` VALUES (0,'�����û�','',2,'header',0,'0000-00-00 00:00:00',1,'mod_online',0,99,1,'',1, 1);
INSERT INTO `#__modules` VALUES (0,'���в˵�','',1,'top',0,'0000-00-00 00:00:00',1,'mod_fullmenu',0,99,1,'',1, 1);
INSERT INTO `#__modules` VALUES (0,'������','',1,'pathway',0,'0000-00-00 00:00:00',1,'mod_pathway',0,99,1,'',1, 1);
INSERT INTO `#__modules` VALUES (0,'������','',1,'toolbar',0,'0000-00-00 00:00:00',1,'mod_toolbar',0,99,1,'',1, 1);
INSERT INTO `#__modules` VALUES (0,'վ�ڶ���','',1,'inset',0,'0000-00-00 00:00:00',1,'mod_mosmsg',0,99,1,'',1, 1);
INSERT INTO `#__modules` VALUES (0,'���ͼ��','',1,'icon',0,'0000-00-00 00:00:00',1,'mod_quickicon',0,99,1,'',1,1);
INSERT INTO `#__modules` VALUES (0, 'Mamboforge','',1,'cpanel',0,'0000-00-00 00:00:00',0,'',0,99,1,'rssurl=http://mamboforge.net/export/rss_sfnews.php\nrssitems=5\nrssdesc=1\ncache=0\nmoduleclass_sfx=',0,1);
INSERT INTO `#__modules` VALUES (31, '�����˵�', '', 2, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 0, 'menutype=othermenu\nmenu_style=vert_indent\ncache=0\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nclass_sfx=\nmoduleclass_sfx=\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=', 0, 0);

# --------------------------------------------------------

#
# Table structure for table `#__modules_menu`
#

CREATE TABLE `#__modules_menu` (
  `moduleid` int(11) NOT NULL default '0',
  `menuid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`moduleid`,`menuid`)
) TYPE=MyISAM;

#
# Dumping data for table `#__modules_menu`
#

INSERT INTO `#__modules_menu` VALUES (1,1);
INSERT INTO `#__modules_menu` VALUES (2,0);
INSERT INTO `#__modules_menu` VALUES (3,0);
INSERT INTO `#__modules_menu` VALUES (4,1);
INSERT INTO `#__modules_menu` VALUES (5,1);
INSERT INTO `#__modules_menu` VALUES (6,1);
INSERT INTO `#__modules_menu` VALUES (6,2);
INSERT INTO `#__modules_menu` VALUES (6,4);
INSERT INTO `#__modules_menu` VALUES (6,27);
INSERT INTO `#__modules_menu` VALUES (6,36);
INSERT INTO `#__modules_menu` VALUES (8,1);
INSERT INTO `#__modules_menu` VALUES (9,1);
INSERT INTO `#__modules_menu` VALUES (9,2);
INSERT INTO `#__modules_menu` VALUES (9,4);
INSERT INTO `#__modules_menu` VALUES (9,27);
INSERT INTO `#__modules_menu` VALUES (9,36);
INSERT INTO `#__modules_menu` VALUES (10,1);
INSERT INTO `#__modules_menu` VALUES (13,0);
INSERT INTO `#__modules_menu` VALUES (15,0);
INSERT INTO `#__modules_menu` VALUES (17,0);
INSERT INTO `#__modules_menu` VALUES (18,0);
INSERT INTO `#__modules_menu` VALUES (31, 0);

# --------------------------------------------------------

#
# Table structure for table `#__newsfeeds`
#

CREATE TABLE `#__newsfeeds` (
  `catid` int(11) NOT NULL default '0',
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `filename` varchar(200) default NULL,
  `published` tinyint(1) NOT NULL default '0',
  `numarticles` int(11) unsigned NOT NULL default '1',
  `cache_time` int(11) unsigned NOT NULL default '3600',
  `checked_out` tinyint(3) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `published` (`published`)
) TYPE=MyISAM;

#
# Dumping data for table `#__newsfeeds`
#

INSERT INTO `#__newsfeeds` VALUES (66, 16, 'Mamboforge.net', 'http://mamboforge.net/export/rss_sfnews.php', '', 1, 5, 3600, 0, '0000-00-00 00:00:00', 16);
INSERT INTO `#__newsfeeds` VALUES (66, 17, 'Mamboportal', 'http://www.mamboportal.com/index2.php?option=com_rss&no_html=1', '', 1, 5, 3600, 0, '0000-00-00 00:00:00', 17);
INSERT INTO `#__newsfeeds` VALUES (66, 18, 'Mambohut', 'http://www.mambohut.com/index2.php?option=com_rss&no_html=1', '', 1, 5, 3600, 0, '0000-00-00 00:00:00', 18);

# --------------------------------------------------------

#
# Table structure for table `#__poll_data`
#

CREATE TABLE `#__poll_data` (
  `id` int(11) NOT NULL auto_increment,
  `pollid` int(4) NOT NULL default '0',
  `text` text NOT NULL default '',
  `hits` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pollid` (`pollid`,`text`(1))
) TYPE=MyISAM;

#
# Dumping data for table `#__poll_data`
#

# --------------------------------------------------------

#
# Table structure for table `#__poll_date`
#

CREATE TABLE `#__poll_date` (
  `id` bigint(20) NOT NULL auto_increment,
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `vote_id` int(11) NOT NULL default '0',
  `poll_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `poll_id` (`poll_id`)
) TYPE=MyISAM;

#
# Dumping data for table `#__poll_date`
#

# --------------------------------------------------------

#
# Table structure for table `#__polls`
#

CREATE TABLE `#__polls` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `voters` int(9) NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL default '0',
  `access` int(11) NOT NULL default '0',
  `lag` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

#
# Table structure for table `#__poll_menu`
#

CREATE TABLE `#__poll_menu` (
  `pollid` int(11) NOT NULL default '0',
  `menuid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`pollid`,`menuid`)
) TYPE=MyISAM;

#
# Dumping data for table `#__poll_menu`
#

# --------------------------------------------------------

#
# Table structure for table `#__sections`
#

CREATE TABLE `#__sections` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL default '',
  `name` varchar(255) NOT NULL default '',
  `image` varchar(100) NOT NULL default '',
  `scope` varchar(50) NOT NULL default '',
  `image_position` varchar(10) NOT NULL default '',
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `count` int(11) NOT NULL default '0',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idx_scope` (`scope`)
) TYPE=MyISAM;

#
# Dumping data for table `#__sections`
#

INSERT INTO `#__sections` VALUES (1, '����', '����', 'articles.jpg', 'content', 'right', '�������б�ѡ��һ�����࣬Ȼ��ѡ��һƪ�����Ķ���', 1, 0, '0000-00-00 00:00:00', 1, 0, 1, '');
INSERT INTO `#__sections` VALUES (2, '���ſ�Ѷ','���ſ�Ѷ','','content','left','�������ݷ����Ժ���ʾ�ڶ���λ��',1,0,'0000-00-00 00:00:00',2,0,1, '');

#
# Table structure for table `#__session`
#

CREATE TABLE `#__session` (
  `username` varchar(50) default '',
  `time` varchar(14) default '',
  `session_id` varchar(200) NOT NULL default '0',
  `guest` tinyint(4) default '1',
  `userid` int(11) default '0',
  `usertype` varchar(50) default '',
  `gid` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`session_id`),
  KEY `whosonline` (`guest`,`usertype`)
) TYPE=MyISAM;

#
# Table structure for table `#__stats_agents`
#

CREATE TABLE `#__stats_agents` (
  `agent` varchar(255) NOT NULL default '',
  `type` tinyint(1) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '1'
) TYPE=MyISAM;

#
# Dumping data for table `#__stats_agents`
#

# --------------------------------------------------------

#
# Table structure for table `#__templates_menu`
#

CREATE TABLE `#__templates_menu` (
  `template` varchar(50) NOT NULL default '',
  `menuid` int(11) NOT NULL default '0',
  `client_id` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`template`,`menuid`)
) TYPE=MyISAM;

# Dumping data for table `#__templates_menu`

INSERT INTO `#__templates_menu` VALUES ('rhuk_solarflare', '0', '0');
INSERT INTO `#__templates_menu` VALUES ('mambo_admin_blue', '0', '1');

# --------------------------------------------------------

#
# Table structure for table `#__template_positions`
#

CREATE TABLE `#__template_positions` (
  `id` int(11) NOT NULL auto_increment,
  `position` varchar(10) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

#
# Dumping data for table `#__template_positions`
#

INSERT INTO `#__template_positions` VALUES (0, 'left', '');
INSERT INTO `#__template_positions` VALUES (0, 'right', '');
INSERT INTO `#__template_positions` VALUES (0, 'top', '');
INSERT INTO `#__template_positions` VALUES (0, 'bottom', '');
INSERT INTO `#__template_positions` VALUES (0, 'inset', '');
INSERT INTO `#__template_positions` VALUES (0, 'banner', '');
INSERT INTO `#__template_positions` VALUES (0, 'header', '');
INSERT INTO `#__template_positions` VALUES (0, 'footer', '');
INSERT INTO `#__template_positions` VALUES (0, 'newsflash', '');
INSERT INTO `#__template_positions` VALUES (0, 'legals', '');
INSERT INTO `#__template_positions` VALUES (0, 'pathway', '');
INSERT INTO `#__template_positions` VALUES (0, 'toolbar', '');
INSERT INTO `#__template_positions` VALUES (0, 'cpanel', '');
INSERT INTO `#__template_positions` VALUES (0, 'user1', '');
INSERT INTO `#__template_positions` VALUES (0, 'user2', '');
INSERT INTO `#__template_positions` VALUES (0, 'user3', '');
INSERT INTO `#__template_positions` VALUES (0, 'user4', '');
INSERT INTO `#__template_positions` VALUES (0, 'user5', '');
INSERT INTO `#__template_positions` VALUES (0, 'user6', '');
INSERT INTO `#__template_positions` VALUES (0, 'user7', '');
INSERT INTO `#__template_positions` VALUES (0, 'user8', '');
INSERT INTO `#__template_positions` VALUES (0, 'user9', '');
INSERT INTO `#__template_positions` VALUES (0, 'advert1', '');
INSERT INTO `#__template_positions` VALUES (0, 'advert2', '');
INSERT INTO `#__template_positions` VALUES (0, 'advert3', '');
INSERT INTO `#__template_positions` VALUES (0, 'icon', '');
INSERT INTO `#__template_positions` VALUES (0, 'debug', '');
# --------------------------------------------------------

#
# Table structure for table `#__users`
#

CREATE TABLE `#__users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `username` varchar(25) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `password` varchar(100) NOT NULL default '',
  `usertype` varchar(25) NOT NULL default '',
  `block` tinyint(4) NOT NULL default '0',
  `sendEmail` tinyint(4) default '0',
  `gid` tinyint(3) unsigned NOT NULL default '1',
  `registerDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `lastvisitDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `activation` varchar(100) NOT NULL default '',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `usertype` (`usertype`),
  KEY `idx_name` (`name`)
) TYPE=MyISAM;

#
# Table structure for table `#__usertypes`
#

CREATE TABLE `#__usertypes` (
  `id` tinyint(3) unsigned NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `mask` varchar(11) NOT NULL default '',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

#
# Dumping data for table `#__usertypes`
#

INSERT INTO `#__usertypes` VALUES (0, 'superadministrator', '');
INSERT INTO `#__usertypes` VALUES (1, 'administrator', '');
INSERT INTO `#__usertypes` VALUES (2, 'editor', '');
INSERT INTO `#__usertypes` VALUES (3, 'user', '');
INSERT INTO `#__usertypes` VALUES (4, 'author', '');
INSERT INTO `#__usertypes` VALUES (5, 'publisher', '');
INSERT INTO `#__usertypes` VALUES (6, 'manager', '');
# --------------------------------------------------------

#
# Table structure for table `#__weblinks`
#

CREATE TABLE `#__weblinks` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `catid` int(11) NOT NULL default '0',
  `sid` int(11) NOT NULL default '0',
  `title` varchar(250) NOT NULL default '',
  `url` varchar(250) NOT NULL default '',
  `description` varchar(250) NOT NULL default '',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `hits` int(11) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `archived` tinyint(1) NOT NULL default '0',
  `approved` tinyint(1) NOT NULL default '1',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `catid` (`catid`,`published`,`archived`)
) TYPE=MyISAM;

#
# Dumping data for table `#__weblinks`
#

INSERT INTO `#__weblinks` VALUES (1, 2, 0, 'Mambo�й�', 'http://www.mambochina.net', '���š���������������Mambo����', '2004-10-05 10:18:31', 0, 1, 0, '0000-00-00 00:00:00', 1, 0, 1, '');

#
# Table structure for table `#__core_acl_aro`
#

CREATE TABLE `#__core_acl_aro` (
  `aro_id` int(11) NOT NULL auto_increment,
  `section_value` varchar(240) NOT NULL default '0',
  `value` varchar(240) NOT NULL default '',
  `order_value` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `hidden` int(11) NOT NULL default '0',
  PRIMARY KEY  (`aro_id`),
  UNIQUE KEY `section_value_value_aro` (`section_value`,`value`),
  UNIQUE KEY `#__gacl_section_value_value_aro` (`section_value`,`value`),
  KEY `hidden_aro` (`hidden`),
  KEY `#__gacl_hidden_aro` (`hidden`)
) TYPE=MyISAM;

#
# Table structure for table `#__core_acl_aro_groups`
#
CREATE TABLE `#__core_acl_aro_groups` (
  `group_id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `lft` int(11) NOT NULL default '0',
  `rgt` int(11) NOT NULL default '0',
  PRIMARY KEY  (`group_id`),
  KEY `parent_id_aro_groups` (`parent_id`),
  KEY `#__gacl_parent_id_aro_groups` (`parent_id`),
  KEY `#__gacl_lft_rgt_aro_groups` (`lft`,`rgt`)
) TYPE=MyISAM;

#
# Dumping data for table `#__core_acl_aro_groups`
#
INSERT INTO `#__core_acl_aro_groups` VALUES (17,0,'ROOT',1,22);
INSERT INTO `#__core_acl_aro_groups` VALUES (28,17,'USERS',2,21);
INSERT INTO `#__core_acl_aro_groups` VALUES (29,28,'Public Frontend',3,12);
INSERT INTO `#__core_acl_aro_groups` VALUES (18,29,'Registered',4,11);
INSERT INTO `#__core_acl_aro_groups` VALUES (19,18,'Author',5,10);
INSERT INTO `#__core_acl_aro_groups` VALUES (20,19,'Editor',6,9);
INSERT INTO `#__core_acl_aro_groups` VALUES (21,20,'Publisher',7,8);
INSERT INTO `#__core_acl_aro_groups` VALUES (30,28,'Public Backend',13,20);
INSERT INTO `#__core_acl_aro_groups` VALUES (23,30,'Manager',14,19);
INSERT INTO `#__core_acl_aro_groups` VALUES (24,23,'Administrator',15,18);
INSERT INTO `#__core_acl_aro_groups` VALUES (25,24,'Super Administrator',16,17);

#
# Table structure for table `#__core_acl_groups_aro_map`
#
CREATE TABLE `#__core_acl_groups_aro_map` (
  `group_id` int(11) NOT NULL default '0',
  `section_value` varchar(240) NOT NULL default '',
  `aro_id` int(11) NOT NULL default '0',
  UNIQUE KEY `group_id_aro_id_groups_aro_map` (`group_id`,`section_value`,`aro_id`)
) TYPE=MyISAM;

#
# Table structure for table `#__core_acl_aro_sections`
#
CREATE TABLE `#__core_acl_aro_sections` (
  `section_id` int(11) NOT NULL auto_increment,
  `value` varchar(230) NOT NULL default '',
  `order_value` int(11) NOT NULL default '0',
  `name` varchar(230) NOT NULL default '',
  `hidden` int(11) NOT NULL default '0',
  PRIMARY KEY  (`section_id`),
  UNIQUE KEY `value_aro_sections` (`value`),
  UNIQUE KEY `#__gacl_value_aro_sections` (`value`),
  KEY `hidden_aro_sections` (`hidden`),
  KEY `#__gacl_hidden_aro_sections` (`hidden`)
) TYPE=MyISAM;

INSERT INTO `#__core_acl_aro_sections` VALUES (10,'users',1,'Users',0);



# Dumping data for table `#__users`


# TEST

# INSERT INTO `#__users` VALUES (62, 'Administrator', 'admin', 'admin@wherever', '21232f297a57a5a743894a0e4a801fc3', 'superadministrator', 0, 1, 25, '2004-06-06 00:00:00', '0000-00-00 00:00:00', '', '');

# INSERT INTO `#__core_acl_aro` VALUES (62,'users','62',0,'Administrator',0);

# INSERT INTO `#__core_acl_groups_aro_map` VALUES (25,'',62);

# INSERT INTO `#__users` VALUES (63, 'Editor', 'editor', 'editor@wherever', '5aee9dbd2a188839105073571bee1b1f', 'editor', 0, 0, 20, '2004-06-06 00:00:00', '0000-00-00 00:00:00', '', '');

# INSERT INTO `#__core_acl_aro` VALUES (63,'users','63',0,'Editor',0);

# INSERT INTO `#__core_acl_groups_aro_map` VALUES (20,'',63);

#
