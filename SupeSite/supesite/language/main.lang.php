<?

/*
	[SupeSite] (C) 2007-2009 Comsenz Inc.
	$Id: main.lang.php 11588 2009-03-11 03:03:23Z zhaofei $
*/

if(!defined('IN_SUPESITE')) {
	exit('Access Denied');
}

$lang = array (
	'index' => '��ҳ',
	'news' => '��Ѷ',
	'uchblog' => 'uch��־',
	'bloglist' => '��־�б�',
	'blogdetail' => '��־�鿴ҳ',
	'bbs' => '��̳',
	'uchimage' => 'uch���',
	'imagelist' => '����б�',
	'imagedetail' => 'ͼƬ�鿴',
	'tobbs' => '������̳',
	'favorite' => '�ղ�',
	'site_map' => 'վ���ͼ',
	'site_link' => '��������',
	'pushed_to_the_feed' => '�����¼�',
	'user_info' => '�û���Ϣ',
	'yes'=>'��',
	'no'=>'��',
	'list' => '�б�',
	'category' => '��Ϣ�б�',
	'year' => '��',
	'month' => '��',
	'edit' => '�༭',
	'delete' => 'ɾ��',
	'insert' => '�����ͼ',
	'insertsmall' => '��������ͼ',
	'slice' => '��������ͼ',
	'insert_attachments' => '���븽��',
	'login' => '��¼վ��',
	'announcement' => 'վ�㹫��',
	'site_reg' => 'ע��',
	'poll'=>'ͶƱ',
	'new'=>'ȫ��',
	'subject'=>'����',
	'dateline'=>'����ʱ��',
	'location'=>'���ڵ�',
	'file_size' => '�ļ���С',
	'link_url'=>'��ַ',
	'tag' => '��ǩ',
	'email' => '����E-Mail',
	'document_type_error'=>'�ļ����ʹ��������ͼƬ�ļ���׺��',
	'next_page' => '��һҳ',
	'pre_page' => '��һҳ',
	'pannel_contribution' =>'Ͷ��',

	//function/item.func.php
	'not_allowed_to_belong_to_the_following_tag' => '�Բ��𣬱�վ������ʹ������TAG',
	//function/common.func.php
	'the_page_can_be_updated_immediately_hits' => '��������������±�ҳ��',
	'close' => '�ر�',

	//include/space_nospace.inc.php
	'user_group' => '�û���',
	'see_more' => '�鿴����',
	'view' => '�鿴',
	'reply' => '����',

	//include/space_template.inc.php
	'score' => '����',
	'search' => '����',
	'more' => '����',
	'manage' => '����',
	'photo_upload' => '�ϴ�ͼƬ',
	'last_reply' => '�������',
	'thread' => '����',
	
	//include/bbsimport.inc.php
	'bbsimport_self' => '��ֻ��ָ���Լ�����̳������е���',
	'block_image'=>'(ͼ)',

	//spacelist.php
	'visitors' => '�ÿ�',

	//common.func.php
	'quote' => '����',
	'rate_pre' => '��',
	'fen' => '��',
	'admin_login' => '����Ա����˴���¼',
	'site_close' => 'վ����ʱ�رգ����Ժ��ٷ���',
	'tag_match' => '��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��| | |\~|\.|\!|\@|\#|\\\$|\%|\^|\&|\*|\(|\)|\+|\=|\{|\}|\||\[|\]|\\|\:|\;|\"|\'|\<|\,|\>|\?|\/|\s',

	//modelview.php
	'details' => '��ϸ��Ϣ',
	
	//modelpost.php
	'photo_title' => '����ͼƬ',
	'check_username' => '������',
	'online_contribution' => '����Ͷ��',
	'system_catid' => 'ϵͳ����',
	'content' => '����',
	'common_reset' => '����',	
	'common_submit' => '�ύ����',
	'verification_code' => '��֤��',
	'changge_verification_code' => '��һ��',

	//m.php
	'check_order' => 'ѡ������ʽ',
	'model_dateline_desc' => '������ʱ�� ������',
	'model_dateline_asc' => '������ʱ�� ���絽��',
	'model_viewnum_desc' => '���鿴�� �Ӷൽ��',
	'model_viewnum_asc' => '���鿴�� ���ٵ���',
	'model_rates_desc' => '������ �Ӹߵ���',
	'model_rates_asc' => '������ �ӵ͵���',
	'model_grade_desc' => '����˵ȼ� �Ӹߵ���',
	'model_grade_asc' => '����˵ȼ� �ӵ͵���',
	'classification' => '����',
	'fromdate_0' => '����ʱ��: ��',
	'fromdate_1' => '��',
	'login_succeed' => '������ɣ����Ѿ��ɹ���¼վ��ϵͳ��',
	'logout_succeed' => '������ɣ����Ѿ��ɹ��˳�վ��ϵͳ��',

	//source/do_lostpasswd.php
	'get_passwd_subject' => 'ȡ�������ʼ�',
	'get_passwd_message' => '��ֻ�����ύ����������֮�ڣ�ͨ�������������������������룺<br />\\1<br />(������治��������ʽ���뽫��ַ�ֹ�ճ�����������ַ���ٷ���)<br />�����ҳ��򿪺������µ�������ύ��֮��������ʹ���µ������¼�ˡ�',
	
	//viewthread.php
	'view_thread' => '�鿴����'

);

?>