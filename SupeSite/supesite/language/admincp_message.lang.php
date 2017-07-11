<?php

/*
	[SupeSite] (C) 2007-2009 Comsenz Inc.
	$Id: admincp_message.lang.php 11758 2009-03-24 03:53:18Z zhanglijun $
*/

if(!defined('IN_SUPESITE')) exit('Access Denied');

$amlang = array(
	'do_success' => '���еĲ��������',
	
	//admincp.php
	'admincp_no_popedom' => '��û��Ȩ�޽��б��������뷵��',
	'admincp_no_founder_popedom' => '�Բ�����û�д�ʼ��Ȩ�ޣ�����config.php����Ӵ�ʼ��',
	'admincp_login' => '��û�е�¼վ��ϵͳ�����ȵ�¼',
	'incorrect_code' => '�������֤�벻����������ȷ��',
	'submit_invalid' => '����������·����ȷ�����֤���������޷��ύ���볢��ʹ�ñ�׼��web��������в�����',
	'enter_the_password_is_incorrect' => '��������벻��ȷ�������³���',
	'excessive_number_of_attempts_to_sign' => '��30�����ڳ��Ե�¼����ƽ̨�Ĵ���������3�Σ�Ϊ�����ݰ�ȫ�����Ժ�����',
	'start_listcount_error' => '�����ˣ���Ҫ�鿴ҳ��������',
	
	//admin/admin_ad.php,
	'no_authority_management_operation' => '�Բ���,��û��Ȩ�޽��б��������',
	'ad_op_success' => '���Ѿ��ɹ������˹������',
	'ad_check_subject' => '������Ĺ�����ĳ��Ȳ�����Ҫ���뷵�ؼ��',
	'ad_check_page' => 'Ͷ��ҳ�治��Ϊ�գ���ѡ��',
	'ad_check_type' => 'Ͷ��Ƶ������Ϊ�գ���ѡ��',
	'ad_add_check_textsize' => '�ı���СΪ0',
	'ad_check_adcontent' => '������ݲ���Ϊ�գ�����д',
	'ad_add_success' => '���Ѿ��ɹ�����˹��',
	'ad_add_check_must' => '��������Ƿ���д����',
	'ad_imageurl_error' => 'ͼƬ���ӵ�ַ����ȷ',
	'ad_update_success' => '���Ѿ��ɹ������˹������',
	'ad_no_ads' => '��ָ���Ĺ�治����',
	'ad_out_error' => '�������Ĵ�С����С�ڵ���0',

	//admin_attachments.php
	'please_choose_search_terms' => '�Բ�������ȷѡ����Ҹ���������',
	'not_found_with_the_annex' => '�Բ���û���ҵ����������ĸ���',
	'you_have_no_choice_operation_annex' => '�Բ�����û��ѡ��Ҫ�����ĸ���',
	'annex_success_of_the_operation' => '��ϲ�����Ը����Ĺ�������ɹ���',

    //admin/admin_bbs.php
	'bbs_db_setting' => '��������̳���ݿ�',
	'bbs_db_error' => '��̳���ݿ����ô���',
	'bbs_dbname_error' => '��̳���ݿⲻ���ڻ����ݱ�����',
	'bbs_url_error' => '��̳·�����ô���',
	'bbs_setting_success' => '��̳��¼���óɹ�',
	'bbsver_error' => '��̳�汾�Ų���Ϊ��',
	'bbs_deldata_success' => 'ɾ����̳�ۺ���Ϣ�ɹ�',

	//admin_comments.php
	'identify_conditions_choice_comments' => '�Բ�������ȷѡ��������۵�����',
	'not_found_qualified_to_comment' => '�Բ���û���ҵ���������������',
	'you_have_no_choice_information' => '�Բ�����û��ѡ��Ҫ��������Ϣ',
	'successful_management_of_the_theme' => '��ϲ��������Ϣ����Ĺ�������ɹ���',

	//admin/admin_usergroups.php
	'user_group_does_not_exist' => 'ָ���������û��鲻����',
	'user_group_were_not_empty' => 'ָ�����û���������Ϊ��',
	'system_user_group_could_not_be_deleted' => 'ϵͳ�û��鲻��ɾ��',

	//admin_database.php
	'database_export_dest_invalid' => 'Ŀ¼�����ڻ��޷����ʣ����� ./data/ Ŀ¼��',
	'database_export_del' => '�����ļ�ɾ���ɹ�',
	'database_export_filename_error' => '�Բ���,��������ļ����ĳ��Ȳ�����Ҫ��,�뷵�ؼ��',
	'database_export_succeed' => '���ݳɹ����ݲ�ѹ���������� ',
	'database_export_tables_error' => '�Բ���,��������Ҫѡ��һ�����ݱ���б��ݣ��뷵���޸�',
	'database_export_write_error' => 'д���ļ�ʧ��,�����ļ�Ȩ��',
	'database_export_zip_error' => '�Բ��𣬱��������ļ�ѹ��ʧ�ܣ�����Ŀ¼Ȩ��',
	'database_export_zip_succeed' => '���ݳɹ����ݲ�ѹ���������� ',
	'database_import_file_illegal' => '�Բ���, �����ļ�������,����',
	'database_import_format_illegal' => '�����ļ��� SupeSite ��ʽ���޷����롣',
	'database_import_multivol_succeed' => '�־����ݳɹ�����SupeSite���ݿ⡣',
	'database_import_successd' => '���ݳɹ�����SupeSite���ݿ⡣',
	'database_import_start' => '���ݻָ���ʼ',
	'database_shell_fail' => 'Shell Ȩ�ޱ���ֹ���������֧�֣��޷�ʹ�� MySQL Dump ��ʽ���ݻ�ָ����ݣ��뷵�ء�',

	//admin_items.php
	'chosen_search_terms' => '�Բ�������ȷѡ�������Ϣ������',
	'not_find_qualified_information' => '�Բ���û���ҵ�������������Ϣ',
	'please_choose_type_operation' => '�Բ�����ѡ���������',

	//admin/admin_spacenews.php,
	'spacenews_no_popedom_check' => '�Բ��������ڵ��û���Ŀǰû��������Ѷ��Ȩ�ޣ��뷵��',
	'space_suject_length_error' => '������ı��ⳤ�Ȳ�����Ҫ���뷵������',
	'admin_func_catid_error' => '��û����ȷָ�����࣬�뷵��ȷ��',
	'spacenews_no_popedom_add' => '�Բ��������ڵ��û���Ŀǰû�������Ѷ��Ȩ�ޣ��뷵��',
	'bbsimport_imported' => '��ָ�������������Ѿ�������������ظ�����',
	'spacenews_page_need_submit' => '����Ҫ�Ƚ���ǰ��ҳ��Ϣ�ύ����󣬷��ܼ���������ӷ�ҳ����',
	'you_no_authority_to_operate' => '�Բ�����û��Ȩ�޶�ָ������Ϣ���в���',
	'you_had_no_competence_to_examine' => '�Բ���������û��Ȩ�޽��еȼ����',

	//admin_userprofile.php
	'prefield_delete_success' => '�ɹ�ɾ��',
	'add_success' => '��ӳɹ�',
	'edit_success' => '�༭�ɹ�',

	//admin/admin_announcements.php,
	'announcements_list_update' => '�����б����������ɹ���',
	'announcements_time_error' => '��ʼʱ��Ϊ�ջ��߽���ʱ�䲻��С�ڿ�ʼʱ��!',
	'announcements_no_message' => '���ݲ���Ϊ��!',
	'announcements_add_succeed' => '�ɹ�����������Ϣ��',
	'announcements_update_succeed' => '������Ϣ�޸ĳɹ���',
	'announcements_no_id' => 'ѡ��Ĺ��治����!',

	//admin/admin_attachmenttypes.php,
	'attachmenttype_check_fileext' => '��ָ�����ļ���׺�����Ȳ�����Ҫ���뷵������',
	'attachmenttype_add_success' => '���Ѿ��ɹ�����ļ���׺����',
	'attachmenttype_update_success' => '���Ѿ��ɹ������ļ���׺����',
	'attachmenttype_delete_success' => '���Ѿ��ɹ�ɾ��ָ�����ļ���׺����',

	//admin/admin_bbsforums.php,
	'bbsforums_update_success' => '��̳������óɹ�����',

	//admin/admin_blocks.php,
	'block_op_success' => '���Ѿ��ɹ�ɾ��ָ����ģ������',
	'block_add_success' => '���Ѿ��ɹ����ģ������',
	'block_update_success' => '���Ѿ��ɹ�����ģ������',

	//admin/admin_categories.php,
	'common_error_type' => '����������ָ����ȷ��ϵͳ����',
	'category_update_success' => '���·�������ɹ����',
	'category_size_error' => '������ķ������Ƴ��Ȳ�����Ҫ��(2~50��)���뷵�ؼ��',
	'category_add_success' => '��ӷ�������ɹ����',
	'category_bbs_update_success' => '���Ѿ��ɹ��趨�������̳��ȡ����',
	'category_del_catid_error' => '��ѡ����·��಻����ԭ�з�����ӷ��࣬�����ִ��Ҫ�����������Ŀ����������µķ�����',
	'category_delete_success' => '���Ѿ��ɹ�ɾ���ϲ�ָ���ķ���',
	'category_copy_succeed' => '�������óɹ����ơ�',
	'category_catid_no_exists' => '��ָ���ķ��಻���ڣ��뷵������',
	'category_sub_cat_exists' => '��Ҫɾ���ϲ��ķ�������ӷ��࣬���ܼ�������',
	'category_copy_target_invalid' => '��û��ѡ��Ҫ���Ƶ�Ŀ����࣬�뷵���޸ġ�',
	'category_copy_source_invalid' => '��û��ѡ��Ҫ���Ƶ�Դ��飬�뷵���޸ġ�',
	'category_copy_options_invalid' => '��û��ѡ��Ҫ���Ƶ���Ŀ���뷵���޸ġ�',

	//admin/admin_channel.php,
	'channel_update_ok' => '����Ƶ�����ò������',
	'channel_action_exist' => 'ָ����Ƶ��Ӣ��ID�Ѿ����ڣ��뷵�ؼ��',
	'channel_action_error' => 'ָ����Ƶ��Ӣ��ID������Ӣ����ĸ���뷵�ؼ��',
	'channel_php_src_error' => '��־Ƶ�������ļ�(channel_sample.php)�����ڣ������ļ��Ƿ��ϴ�����',
	'channel_tpl_src_error' => '��׼Ƶ��ģ���ļ�(channel_sample.html.php)�����ڣ���������Ƿ��ϴ�����',
	'channel_add_ok' => '�����Ƶ���������',
	'channel_no_exists' => '�Բ���,ָ����Ƶ��������',
	'channel_is_model' => 'ģ������Ƶ����ͨ��FTP��ʽ�޸�ָ����ģ���ļ�',
    'channel_action_protect' => 'ָ����Ƶ��Ӣ��ID����ϵͳ����ID���뷵��������д',

	//admin/admin_check.php,
	'space_no_item' => '��û��ѡ��Ҫ��������Ϣ���뷵���޸�',
	'check_op_ok' => '���Ĳ����Ѿ���ɣ����ڽ���ת������ǰ��ҳ��',

	//admin/admin_crons.php,
	'cron_update_success' => '���Ѿ��ɹ����¼ƻ�����',
	'cron_error_no_filename' => '��ָ��������ű��ļ������ڻ�����﷨�����뷵���޸�',
	'cron_error_no_time' => '��û��ָ���ƻ�����ִ�е�ʱ����������뷵���޸�',
	'cron_add_success' => '���Ѿ��ɹ���Ӽƻ�����',
	'cron_delete_success' => '���Ѿ��ɹ�ɾ���ƻ�����',
	'cron_run_success' => '��ָ���ļƻ������Ѿ��ɹ�ִ��',

	//admin/admin_css.php,
	'tpl_edit_invalid' => '��ָ�����ļ����ܱ���д�������ļ����������û��Ƿ����',
	'tpl_filename_error' => '��ָ�����ļ�������ȷ���뷵�ؼ��',
	'tpl_edit_success' => '���༭���ļ����ݳɹ�����',
	'tpl_delete_ok' => '��ָ�����ļ��Ѿ��ɹ�ɾ��',
	'tpl_delete_error' => '��ָ�����ļ����ܱ�ɾ���������ļ�����������',

	//admin/admin_customfields.php,
	'spaceblog_no_popedom' => '�Բ�����Ŀǰ���ڵ��û���û��Ȩ�޽��д˲������뷵��',
	'usetype_no_open' => '�Բ���ϵͳ��ʱû�����øù��ܣ��뷵��ȷ��',
	'customfield_list_update_success' => '�Ѿ��ɹ����¸���������Ϣ�б�',
	'customfield_add_success' => '�Ѿ��ɹ����Ӹ���������Ϣ',
	'customfield_edit_success' => '�����Զ���������Ϣ�ɹ��޸�',
	'customfield_customfieldid_no_exists' => '�Բ�����Ҫ�༭���Զ�����Ϣ������',

	//admin/admin_html.php,
	'html_update_error' => '��ָ�����������޲���ȷ��������ȷ��',
	'html_update_success' => '���Ѿ��ɹ�������html���ֹ�����',
	'html_deletefile_filename_error' => '��û����ȷָ��Ҫɾ����html�ļ�����Ҫ�������ַ����뷵��ȷ��',
	'html_allocation_preservation_success' => '��ϲ��,ָ����html���ñ���ɹ���',
	'html_page_not_found_with_generation' => '�Բ���û���ҵ�����Ҫ���ҳ��������html',

	//admin/admin_polls.php,
	'poll_op_success' => '���Ĳ����Ѿ��ɹ�ִ��',
	'poll_check_subject' => '������ı�������̫�٣��뷵�ؼ��',
	'poll_check_summary' => '������Ľ�������̫�٣��뷵�ؼ��',
	'poll_check_option' => '��û��������Ч��ͶƱѡ��뷵�ؼ��',
	'poll_add_success' => '���Ѿ��ɹ�����µ�ͶƱ',
	'poll_update_success' => '���Ѿ��ɹ�����ͶƱ����',

	//admin/admin_prefields.php,
	'prefield_none_exists' => 'ָ����Ϣ������',

	//admin/admin_robotmessages.php,
	'robotmessage_op_success' => '�����ɹ����',
	'robotmessage_none_exists' => 'ָ���Ĳɼ�������Ϣ������',

	//admin/admin_robots.php,
	'robot_import_data_invalid' => '������������Ϣ����ȷ',
	'robot_import_version_invalid' => '������������Ϣ�İ汾��ϵͳ�汾����',
	'robot_import_success' => '�����˳ɹ�����',
	'robot_add_success' => '�ɼ������˳ɹ����',
	'robot_edit_success' => 'ָ���Ĳɼ������˳ɹ�����',
	'robot_robotid_no_exists' => 'ָ���Ĳɼ������˲�����',
	'robot_delete_success' => 'ָ���Ĳɼ������˳ɹ�ɾ��',
	'robot_clearcache_success' => 'ָ������������ɹ�ɾ��',
	'robot_clear_success' => '�ɼ�������ȫ�����',
	'robot_exportmessage_fopen_error' => 'д���ļ���������robot����Ŀ¼(data/robot)�Ƿ���ڲ���д',

	//admin/admin_settings.php,
	'setting_update_success' => '���Ѿ��ɹ�����������ϵͳ������Ϣ',

	//admin/admin_sitemap.php
	'sitemap_name_error' => 'sitemap����ֻ��������,��ĸ,�»�����ɣ����Ȳ�����50',
	'sitemap_config_update' => 'sitemap�����ɹ�',
	'sitemap_name_exists' => 'sitemap�����Ѿ�����',
	'sitemap_config_add' => '������ӳɹ�',
	'sitemap_perm_error' => '���Ŀ¼�Ƿ���ڻ����Ƿ��д',
	
	//admin/admin_spacecache.php,
	'spacecache_delete_success' => '���Ѿ��ɹ����ָ���Ļ���',

	//admin/admin_styles.php,
	'style_tpl_file_not_exists' => '��û����ȷѡ��һ������ļ����뷵������',
	'style_add_success' => '���Ѿ��ɹ���ӷ��',
	'style_edit_success' => 'ָ���ķ��ɹ��༭',
	'style_none_exists' => 'ָ���ķ�񲻴���',
	'style_delete_success' => 'ָ���ķ��ɹ�ɾ��',

	//admin/admin_tags.php,
	'tag_no_item' => '��Ӧ������ѡ��һ��Ҫ������TAG���뷵������',
	'tag_tagname_error' => '�������TAG���Ʋ�����Ҫ���뷵��ȷ��',
	'tag_batch_op_success' => '���Ѿ��ɹ�����ѡ���TAG',
	'tag_update_success' => '���Ѿ��ɹ�����TAG��Ϣ',
	'tag_no_tagid' => '��ָ����TAG��Ϣ�����ڣ��뷵������',

	//admin/admin_words.php
	'censor_keywords_tooshort' => '�Բ�������ӵĹؼ��ʳ��ȹ��̣��뷵���޸�.',
	'censor_update_succeed' => '������˸��³ɹ�',
	'censor_add_words' => '�������������ϡ��ܹ���������    ',
	'censor_update_words' => '���´���',
	'censor_ignore_words' => '���Դ���',
	'censor_keywords_exists' => '�ؼ������Ѿ�����',

	//admin/admin_model.php
	'select_model_tpl' => '��ѡ��ģ��ģ��.',
	'model_export_suc' => 'ģ�͵������,���뱸�ݹ�������������.',
	'create_model_tpl_error' => 'ģ�ͽ���ʧ�ܣ����Ժ�����.',
	'fieldname_error' => '�ֶ������Ϸ����ֶ���������ĸ��ͷ��������Ը���ĸ���ֺ��»��ߣ�����2-30���ַ�',
	'field_is_system_key' => '�ֶ���Ϊϵͳ�ֶ�',
	'field_is_exists' => '�ֶ����Ѿ�����',
	'fieldcomment_error' => '�ֶ�˵�����Ϸ����ֶ�˵������2-60���ַ�',
	'fieldtype_error' => '���ݱ��ֶ����Ͳ��Ϸ�',
	'formtype_error' => '���ֶ����Ͳ��Ϸ�',
	'edit_field_not_exists' => '�����༭���ֶβ�����',
	'upload_fileext_error' => '�޸�ǰ���޸ĺ�ı��ֶ�����Ϊimg��flash��file����ʱ���������޸ı��ֶ�����',
	'edit_fieldtype_error' => '�޸�ǰ���ֶδ��ڶ������У���˲�������ֱ䳤�ֶ�(VARCHAR|TEXT|MEDIUMTEXT|LONGTEXT)',
	'edit_isfixed_error' => '�ֶν����������޸Ķ����벻����',
	'edit_isfixed_char_error' => '�޸�ǰ���ֶδ��ڲ��������У��뽫���ݱ��ֶ�����CHAR�޸ĳ�VARCHAR',
	'edit_char_to_isfixed_error' => '��Ϊ��������ʱ���뽫���ݱ��ֶ�����CHAR�޸�ΪVARCHAR',
	'tinyint_length_error' => '�����ݱ��ֶ�����ΪTINYINTʱ���ֶγ��Ȳ��ܴ���3',
	'tinyint_default_length' => '�����ݱ��ֶ�����ΪTINYINTʱ����ʼ��ֵ�ķ�Χ��-128��127',
	'smallint_length_error' => '�����ݱ��ֶ�����ΪSMALLINTʱ���ֶγ��Ȳ��ܴ���5',
	'smallint_default_length' => '�����ݱ��ֶ�����ΪSMALLINTʱ����ʼ��ֵ�ķ�Χ��-32768��32767',
	'mediumint_length_error' => '�����ݱ��ֶ�����ΪMEDIUMINTʱ���ֶγ��Ȳ��ܴ���7',
	'mediumint_default_length' => '�����ݱ��ֶ�����ΪMEDIUMINTʱ���ֶγ��Ȳ��ܴ���7',
	'int_length_error' => '�����ݱ��ֶ�����ΪINTʱ���ֶγ��Ȳ��ܴ���10',
	'int_default_length' => '�����ݱ��ֶ�����ΪINTʱ����ʼ��ֵ�ķ�Χ��-2147483648��2147483647',
	'bigint_length_error' => '�����ݱ��ֶ�����ΪBIGINTʱ���ֶγ��Ȳ��ܴ���19',
	'bigint_default_length' => '�����ݱ��ֶ�����ΪBIGINTʱ����ʼ��ֵ�ķ�Χ��-9223372036854775808��9223372036854775807',
	'default_length_error' => '��ʼ��ֵΪ����ʱ���Ȳ�Ӧ�����ֶγ���ֵ+1',
	'fieldlength_ng_fielddefault' => '��ʼ��ֵ���Ȳ�Ӧ�����ֶγ���ֵ',
	'table_type_int' => '�����ݱ��ֶ�����Ϊ������ֵ����ʱ������ʾԪ��Ҳ����Ϊ������ֵ��',
	'table_type_float' => '�����ݱ��ֶ�����Ϊ��������ʱ������ʾԪ��Ҳ����Ϊ������',
	'formtype_linkage_no_key' => '��Ϊ����������ʱ,��Ϊÿ��Ԫ����������.',
	'formtype_linkage_error' => '��Ϊ����������ʱ,Ԫ����������ȷ.',
	'required_allowsearch' => '����������ʱ,����ѡ��������ʾ.',
	'required_field' => '���ֶα���ʱ������ѡ������Ͷ��.',
	'required_allowshow' => '���ֶ������б���ʾʱ,����ѡ��������ʾ.',
	'fielddata_repeat' => '����ʾԪ�ش����ظ�����.',
	'field_sql_error' => '�ֶ�ʧ�ܣ����ݿ����.</p><div align="left"><p>SQL ��ѯ: <br />',
	'create_field_error' => '�ֶν���ʧ�ܣ����Ժ�����',
	'field_not_exists' => '�ֶβ�����',
	'field_del_suc' => '�ֶ�ɾ���ɹ�',
	'delete_success' => 'ɾ���ɹ�',
	'not_designated_backup_del' => 'û��ָ��ɾ������',
	'not_designated_op' => 'û��ָ������',
	'model_name_existed' => 'ģ�ͱ�ʶ�Ѵ���',
	'vars_error_return_try' => '���������뷵������',
	'import_type_error' => '����ʧ�ܣ�ģ���ļ���ʽ����ȷ',
	'import_sql_error' => '����ʧ�ܣ����ݿⷵ���쳣ֵ',
	'file_write_error' => '�ļ�д��ʧ�ܣ�����Ȩ��',
	'import_model_error' => '����ʧ�ܣ�ģ���ļ�������',
	'import_model_charset_error' => '����ʧ��,�����ģ�ͱ�������վ���벻һ��.',
	'fieldlistsubmit_success' => '�����ֶβ����ɹ����',
	'writing_success_online_please_wait_for_audit' => '�ύ�ɹ�,��ȴ����ͨ��.',
	'online_contributions_success' => '����Ͷ��ɹ�.',
	'document_types_can_only_upload_pictures' => '����ͼƬֻ���ϴ�ͼƬ�����ļ�(.jpg .jpeg .gif .png).',
	'admin_func_catid_error' => '��û����ȷָ�����࣬�뷵��ȷ��',
	'space_suject_length_error' => '������ı��ⳤ�Ȳ�����Ҫ��(2~80���ַ�)',
	'parameter_error' => '�����ˣ���������,�뷵��',
	'no_item_or_no_prem' => 'û�����ݻ�û��Ȩ��',

	//admin/admin_modelcategories.php
	'not_exist_module' => 'ģ�Ͳ�����',
	'exists_module_error' => '�����ʵ�ģ�Ͳ����ڣ��뷵����ҳ',
	'through_the_completion_of_audit' => '���ͨ�����',
	'information_reduction_success' => '��Ϣ��ԭ�ɹ�',
	'info_remove_waste_suc' => '��Ϣ�����ϼ���ɹ�',
	'info_del_suc' => '��Ϣɾ���ɹ�',
	'no_select_op' => 'δѡ���κβ���',

	//admin/admin_model.php
	'model_name_error' => 'ģ�ͱ�ʶ���Ϸ�������ֻ����������ĸ�����֣�����2-20���ַ�.',
	'model_exists_error' => 'ģ�����Ѿ����ڣ����޸�ģ�ͱ�ʶ.',
	'model_system_exisis_error' => 'ģ����Ϊϵͳ�����������޸�ģ�ͱ�ʶ.',
	'model_other_name_error' => 'ģ�����Ʋ��Ϸ�������ֻ�����������ġ���ĸ�����֡��»��ߣ�����2-60���ַ�.',
	'model_key_name_error' => 'ģ�͹ؼ��ʳ��Ȳ��Ϸ������Ȳ��ô���200���ַ�.',
	'model_subject_pic_width_error' => '����ͼƬ����ͼ��Ȳ��Ϸ������Ȳ��ô���9999.',
	'model_subject_pic_height_error' => '����ͼƬ����ͼ�߶Ȳ��Ϸ������Ȳ��ô���9999.',

	//admin/include/admin_blocks_announcement_code.inc.php,
	'block_thread_code_sql' => '��û��ָ����ѯ��SQL�ģ��뷵������',
	'block_announcement_code_aid' => '��û��ָ������ID(s)���뷵������',
	'block_thread_code_limit' => '��û��ָ�����ݵ���ʾ��Ŀ���뷵������',
	'block_thread_code_cachename' => '��ѡ����ֻ��ȡ����չʾ��񣬱���������Ϊ�գ��뷵������',
	'block_thread_code_tpl' => '��ָ����ģ�����ļ������ڣ��뷵������',

	//admin/include/admin_blocks_bbsattachment_code.inc.php,
	'block_attachment_code_aid' => '��û��ָ��������aid(s)���뷵������',

	//admin/include/admin_blocks_bbsforum_code.inc.php,
	'block_forum_code_fid' => '��û��ָ������fid(s)���뷵���޸�',

	//admin/include/admin_blocks_bbslink_code.inc.php,
	'block_link_code_tid' => '��û��ָ�����ӵ�ID(s)���뷵������',

	//admin/include/admin_blocks_bbsmember_code.inc.php,
	'block_member_code_uid' => '��û��ָ���û���uid(s)���뷵������',

	//admin/include/admin_blocks_bbspost_code.inc.php,
	'block_post_code_pid' => '��û��ָ�����ӵ�pid(s)���뷵������',

	//admin/include/admin_blocks_bbsthread_code.inc.php,
	'block_thread_code_tid' => '��û��ָ�������tid(s)���뷵������',

	//admin/include/admin_blocks_category_code.inc.php,
	'block_cat_code_catid' => '��û��ָ�������id(s)���뷵������',

	//admin/include/admin_blocks_group_code.inc.php,
	'block_userspace_code_uid' => '��û��ָ���û���UID���뷵������',

	//admin/include/admin_blocks_poll_code.inc.php,
	'block_poll_code_pollid' => '��û��ָ��ͶƱ��id(s)���뷵������',

	//admin/include/admin_blocks_spacecomment_code.inc.php,
	'block_spacecomment_code_cid' => '��û��ָ�����۵�id(s)���뷵������',

	//admin/include/admin_blocks_spaceitem.inc.php,
	'block_type_error' => '��û����ȷָ��Ҫ������ϵͳ���ͣ������������',

	//admin/include/admin_blocks_spaceitem_code.inc.php,
	'block_spaceitem_code_itemid' => '��û����ȷָ����Ϣ��itemid(s)���뷵������',

	//admin/include/admin_blocks_spacetag_code.inc.php,
	'block_spacetag_code_tagid' => '��û��ָ��TAG id(s)���뷵������',

	//admin/include/admin_blocks_uchblog_code.inc.php,
	'block_uchblog_code_blogid' => '��û����ȷָ����Ϣ��blogid(s)���뷵������',

	//admin/include/admin_blocks_uchspace_code.inc.php,
	'block_uchblog_code_uid' => '��û����ȷָ����Ϣ��uid(s)���뷵������',

	//admin/include/admin_blocks_uchphoto_code.inc.php,
	'block_uchphoto_code_albumid' => '��û����ȷָ����Ϣ��albumid(s)���뷵������',

	//admin/include/admin_blocks_tag_code.inc.php,
	'block_tag_code_tagid' => 'δָ��TAG ID',

	//admin/admincp_reports.php	
	'report_op_ok' => '�ٱ���Ϣ����ɹ�',
	'space_does_not_exist' => 'ָ�����û��ռ䲻����',
	'error_lock_self' => '���������Լ�',

	//admin/admin_friendlinks.php
	'links_op_success' =>'���Ѿ��ɹ���������������',
	'link_check_name' => '�������վ���ǳƳ��Ȳ�����,�뷵�ؼ��',
	'link_check_url' => 'վ��URL��ַ����Ϊ�ջ�����д��ʽ����,�뷵����д',
	'link_add_success' => '���Ѿ��ɹ��������������',
	'link_update_success' => '���Ѿ��ɹ���������������',

	//function/common.func.php
	'message_no_permission' => '�Բ�����û��Ȩ�޽��б�����',

    //admin/admin_threads.php
	'threads_set' => '�����������óɹ�',

    //admin/admin_uchome.php
	'uch_db_error' => 'UCenter Home���ݿ�����ʧ��',
	'uch_dbname_error' => 'UCenter Home���ݿⲻ���ڻ����ݱ�����',
	'uch_url_error' => 'UCenter Home·�����ô���',
	'uch_setting_success' => 'UCenter Home�ۺ����óɹ�',
	'uch_deldata_success' => 'ɾ��UCenter Home�ۺ���Ϣ�ɹ�',
	
	//admin/admin_profile.php
	'password_inconsistency' => '������������벻һ��',
	'email_error' => '��д�������ʽ����,��������д',
	'password_is_not_passed' => '����ĵ�¼���벻��ȷ,�뷵������ȷ��',
	'profile_passwd_illegal' => '����ջ�����Ƿ��ַ����뷵��������д��',
	'old_password_invalid' => '��û���������������������뷵��������д��',
	'email_format_is_wrong' => 'Email ��ʽ����',
	'email_not_registered' => 'Email ������ע��',
	'email_has_been_registered' => 'Email �Ѿ���ע��',
	'no_change' => 'û�����κ��޸�',
	'protection_of_users' => '�ܱ������û���û��Ȩ���޸�',
	'getpasswd_succeed' => '�����������������ã���ʹ���������¼��',
	'email_change_success' => '�������޸ĳɹ�',
	
	//admin/admin_member.php
	'choose_to_delete_the_space' => '��ѡ��Ҫɾ�����û�',
	'designated_users_do_not_exist' => 'ָ�����û�������',
	
	//admin/admin_delusers.php
	'no_uid_select' => '��ѡ����Ҫ�ָ���uid'
);
?>
