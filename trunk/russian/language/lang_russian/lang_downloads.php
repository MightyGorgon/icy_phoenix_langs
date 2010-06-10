<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/* translation
                           
   ���������� �� �������: ��������� �������(zver) zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
It is translated into Russian: Mel'nikov Nikolay(zver)   zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
                    
   */
/**
*
* @Extra credits for this file
* (c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* (c) hotschi / demolition fabi / oxpus
* Lopalong
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
/*
* mod version string
*/
	'Dl_mod_version' => 'Download MOD v%s&nbsp;&copy;(c) 2002 - 2007 by Hotschi, Demolition Fabi, OXPUS',

/*
* general messages after successfull data managements
*/
	'Click_return_categoryadmin' => '������� %s�����%  ����� ��������� � ��������� ������������� ',
	'Click_return_dl_config' => '������� %s�����%  ����� ��������� � ������������ �������� ',
	'Click_return_downloadadmin' => '������� %s�����%  ����� ��������� � ������������� �������� ',
	'Click_return_downloads' => '������� %s�����%  ����� ��������� � �������� ��������� ',
	'Click_return_download_details' => '������� %s�����%  ����� ��������� � �������� ',
	'Click_return_file_management' => '������� %s�����%  ����� ��������� � �������� �������� ',
	'Click_return_modcp_approve' => '������� %s�����%  ����� ��������� � ������������������� �������� ',
	'Click_return_modcp_manage' => '������� %s�����%  ����� ��������� � ������ ����������  ',
	'Click_return_user_traffic_admin' => '������� %s�����% ��� ��������� ������� ������ ������������� ',
	'Click_return_usergroup_traffic_admin' => '������� %s�����% ��� ��������� �������� ������� ������, ',

/*
* message strings
*/
	'Dl_category_added' => '���������, �����������',
 'Dl_category_updated' => '��������� ����������',
 'Dl_category_removed' => '��������� �������� �������',
 'DL_upload_error' => '������, ��������� ���� ����. ���������� ������������ � ���������. <br/> ������� �������������, ���� ��� ������ ��� ��� ����������.',
 'Dl_approve_overview' => '���� %s �������������� ��������. ������� � ���� �����, ����� �������� ��.',
 'Dl_approve_overview_one' => '���� %s �������������� ��������. ������� � ���� �����, ����� �������� ���.',
 'Dl_config_updated' => '������������ ��������, ����������� �������',
 'Dl_confirm_cat_delete' => '�� ������������� ������ ������� ��������� <b> %s </b>?',
 'Dl_confirm_delete_multiple_files' => '�� ������������� ������ ������� �� <b> %d �������� </b>?',
 'Dl_confirm_delete_single_file' => '�� ������������� ������ ������� �������� <b> %s </b>?',
 'Dl_delete_cat_and_files' => '������� ��� ��������� � ��� ����� � ���',
 'Dl_delete_cat_confirm' => '�������� ���������, ��� ������� ������ �������� ����� ����������, ��� ������������ ������ �����',
 'Dl_delete_cat_only' => '������� ������ ��� ���������',
 'Dl_delete_file_confirm' => '����� ������� ���� (�)',
 'Dl_empty_category' => '��� ��������� �� �������� ��������',
 'Dl_no_access' => '��� �������! <br/> <br/> �� �� ������ ������� ���� ��������� ���� ����!',
 'Dl_no_category' => '��� ������� ���������. �������� ����� ��������� ������, ��� �� ���������� ����� ����������.',
  'Dl_no_category_index' => '���� ������ �������� �� �������� ���������',
 'Dl_no_external_url' => '�� ������ ������ ���������� url, ���� �� ������ ����������� ������� ��������!',
 'Dl_no_filename_entered' => '�� ������ ������� ����, ���� �� ������ �������� ���!',
 'Dl_no_groups_for_traffic' => '������ ������������� �� �������!!! <br/> <br/> ������� ������ ������������� ������, ��� �� ���������� ������ �������� ��� �����',
 'Dl_no_more_remain_traffic' => '����� ������� ��� �������� � %s ��� ��������� � ������� ����� ������. �� ������ ����� �� ���������� ������ ��� �������� ��������������.',
 'Dl_no_permission' => '��� �������! <br/> <br/> �� �� ������ ������� ���� ������� ���!',
 'Dl_no_upload_traffic' => '����, �� �������� ������������ ������� ��������. ���������� ������� � ������� � ��������������, ���� �� ������ �������� ���� ����',
 'Dl_path_not_exist' => '���� ��������� <b> %s </b> �� ����������! <br/> ������� ����� � ������ ������ ��� ���� <br/> ��� ������� ��� ����� � ����������� �������.',
 'Dl_permission_updated' => '���������� ��������, ����������� �������',
 'Dl_user_config_saved' => '���������������� ������������ ��� ��������, ����������� ������� <br/> <br/> ������� %s�����%s, ����� ������������ � ���������',
 'Download_added' => '�������� ���� ���������',
 'Download_removed' => '�������� ���� �������',
 'Download_updated' => '���������� ���� ���������',
 'New_download' => '����� �������� ���� �������� ��� ���������. <br/> ������� %s�����%s, ����� ����� ��������������� � ��������.',
 'Dl_confirm_cat_stats_delete' => '������������� �� �� �������, ��� �� ������ ������� ���������� �� ��������� <b> %s </b>?',
 'Dl_confirm_all_stats_delete' => '������������� �� �� �������, ��� �� ������ ������� ��� ����������?',
 'Dl_confirm_cat_comments_delete' => '������������� �� �� �������, ��� �� ������ ������� ����������� �� ��������� <b> %s </b>?',
 'Dl_confirm_all_comments_delete' => '������������� �� �� �������, ��� �� ������ ������� ��� �����������?',
 'Dl_file_not_found' => '<b> ���� %s �� ��� ������! </b> <br/> <br/> �������������, ��� ���� ���� ���������� � ����� %s!',
 'Dl_no_change_edit_time' => '�� ������������ ��� ����������',
 'Dl_thumb_upload' => '����������� ��������� �������',
 'Dl_thumb_del' => '����������� ������� �������',
 'Dl_thumb_to_big' => '����������� �������� ������� �������! <br/> ���������� ����������� ������� ���� ��� ����������� � �������� �������������. <br/> ������������� �������� ������ ������ ��������, ����� ��������� ��������.',
 'Dl_hotlink_permission' => '��� �� ��������� ��������� ���� ����, ���������� � ��������������!',
 'Dl_vc_permission' => '��� ������������� ��� ���� �������� ��� ������������. ���������� ������������ � ���������.',
 'Dl_report_broken_vc_mismatch' => '��� ������������� ��� ����� ������ ��� ������������. ���������� ������������ � ���������.',
 'Dl_vc_not_found' => '��� ������������� �� ��� ���� ������. ���������� ������������ � ���������.',
/*
* page descriptions
*/
	'Dl_page_dl_hackslist' => '������ �����',
	'Dl_page_downloads' => '��������',

/*
* commands
*/
	'Add_new_download' => '�������� ����� ��������',
 'Dl_add' => '��������',
 'Dl_add_category' => '�������� ���������',
 'Dl_approve' => '��������',
 'Dl_check_file_sizes' => '��������� ������� �����',
 'Dl_check_thumbnails' => '��������� ������',
 'Dl_delete' => '�������',
 'Dl_down' => '����',
 'Dl_edit' => '��������������',
 'Dl_go' => '������',
 'Dl_klick_to_rate' => '�����',
 'Dl_lock' => '����������',
 'Dl_mark_all' => '�������� ���',
 'Dl_move' => '������� �',
 'Dl_set' => '�����',
 'Dl_unmark' => '����� ��� ���������',
 'Dl_up' => 'UP',
 'Dl_delete_cat' => '������� ���������',
 'Dl_stats_delete' => '������� ����������',
 'Dl_stats_delete_all' => '������� ��� ����������',
 'Dl_comments_delete' => '������� �����������',
 'Dl_comments_delete_all' => '������� ��� �����������',
 'Dl_sub_sort_asc' => '��� ��� ����� ����� ����������� ���������',
 'Dl_sub_sort_asc_zero' => '����������� ��������� �������� ����',

/*
* categories related
*/
	'Dl_cat_description' => '��������',
 'Dl_cat_files' => '�����',
 'Dl_cat_index' => '������ �������',
 'Dl_cat_name' => '���������',
 'Dl_cat_parent' => '������������ ���������',
 'Dl_cat_path' => '����',
 'Dl_cat_title' => '�������� - ���������',
 'Dl_choose_category' => '�������� ���������',
 'Dl_mod_desc_allow' => '��������� ������������� ��������',
 'Dl_must_approve' => '�������� � ���� ��������� ������� ���� ��������',
 'Dl_statistics' => '��������� ������������� ����������',
 'Dl_stats_prune' => '��������� ����������',
 'Dl_stats_delete' => '������� ����������',
 'Dl_stats_delete_all' => '������� ��� ����������',
 'Dl_comments_delete' => '������� �����������',
 'Dl_comments_delete_all' => '������� ��� �����������',
 'Dl_cat_traffic' => '����� ������� (� ��������� ����� aviable: %s)',
 'Dl_cat_traffic_off' => '����� ������� (� ��������� ����� �����)',
 'Dl_cat_traffic_main' => '%s ������ ����� � ��� ���������',
 'Dl_thumb_cat' => '��������� ������',
 'Dl_approve_comments' => '������������� �������� ������ ����� �����������',
 'Dl_cat_rules' => '�������',

/*
* traffic related
*/
	'Dl_auto_traffic' => '�������������� ������ ��������',
 'Dl_enable_post_traffic' => '��������� ������������ ������� ��� ����, ����� ���������',
 'Dl_group_auto_traffic' => '������ ��� usergroups',
 'Dl_newtopic_traffic' => '������ �������� ��� ������ ������� ��������� ����',
 'Dl_overall_traffic' => '������ ��� ���� ������ � �����',
 'Dl_remain_overall_traffic' => '���������� ������ �������� � ������� ����� ������:',
 'Dl_reply_traffic' => '������ �������� ��� ������� �����, ������ ��� �������',
 'Dl_traffic' => '������������ ������',
 'Dl_user_auto_traffic' => '������ ��� �������������',
 'Single_user_traffic_title' => '������ ��� ���������� ������������',
 '������' => '������',
 'Traffic_now' => '� ��������� ����� �� ������� ������',
 'Usergroup_traffic_title' => '������ ��� ������ usergroup',
 'Users_traffic_title' => '������ ��� ���� �������������',
 'Dl_user_traffic_once' => '��������� ���������������� ������ ������ ������� �� ��������',
 'Dl_can_download_traffic' => '�� ��� ��������� ���� ����. <br/> ������������� �������� ��� ��������� �����, �� ����� ������ �� ���.',
 'Dl_can_download_traffic_footer' => '<b> ������������� �������� ���  ��������� ����������� ����� �����, �� ����� ������ �� ���. </b> <br/> <br/>',
 'Traffic_all_users_admin_explain' => '��������� ��� ������������� ������ ��� ���� �������������.',
 'Traffic_single_user_admin_explain' => '��������� ��� ������������� ������ ��� ���������� ������������.',
 'Traffic_usergroup_admin_explain' => '��������� ��� ������������� ������ ��� ���� ������ usergroup.',
 'Dl_auto_traffic_explain' => '����� ������, ������� ��� ������������ ��� ��� ����� usergroup ����� �������� ������ ����� ��� ��������.',
/*
* auth values
*/
	'Dl_permissions_all' => '���������� ������ ��� ���� �������������',
 'Dl_auth_dl' => '��������',
 'Dl_auth_mod' => '���������',
 'Dl_auth_up' => '��������',
 'Dl_auth_view' => '�������������',
 'Dl_permissions' => '���������� ��� ������ ��������� usergroups',
 'Dl_stop_uploads' => '��������� ��������',
 'Dl_stat_perm' => '���������� � �������� ���������� �� userlevel',
 'Dl_stat_perm_all' => '���',
 'Dl_stat_perm_user' => '���������������� ������������',
 'Dl_stat_perm_mod' => '��������� ����������',
 'Dl_stat_perm_admin' => '�������������� ������',
 'Dl_auth_cread' => '����������� ������',
 'Dl_auth_cpost' => '����� �����������',
 'Dl_perm_all' => '���',
 'Dl_perm_reg' => '���������������� ������������',
 'Dl_perm_grg' => '������ �������������',

/*
* hacks and mods related
*/
	'Dl_hack_autor' => '�����',
 'Dl_hack_autor_email' => '����� �������� �� ����������� �����',
 'Dl_hack_autor_website' => '������� ������',
 'Dl_hack_dl_url' => '�������������� ��������',
 'Dl_hack_version' => '������ ������ ������',
 'Dl_hacklist' => '������ � Hacklist',
 'Dl_hacks_list' => 'Hacklist',
 'Dl_mod_desc' => '��� ����������������� ������',
 'Dl_mod_list' => '���������� �������������� ����������',
 'Dl_mod_require' => '�������',
 'Dl_mod_test' => '��� �������� ��/�',
 'Dl_mod_todo' => 'Todo',
 'Dl_mod_warning' => '��������������',

/*
* moderator panel
*/
	'Dl_modcp_approve' => '������ ���������� - �������� ��������',
 'Dl_modcp_edit' => '������ ���������� - �������� ��������������',
 'Dl_modcp_manage' => '������ ���������� - ��������� ����������',
 'Dl_modcp_mod_auth' => '�� <b> ������ </b> %s������������ ��� ���������%s',

/*
* ACP file management
*/
	'Dl_check_filesizes_result' => '��� ����� ����������, � ������� ������ �� ���� �������',
 'Dl_check_filesizes_result_error' => '��������� ����� �� ����� ���� ���������:',
 'Dl_manage' => '���������� �����',
 'Dl_manage_content_count' => '%s �����',
 'Dl_manage_create_dir' => '������� ��� �����',
 'Dl_manage_empty_folder' => '��� ����� �����...',
 'Dl_manage_explain' => '��������� ������� ��������. �� ������ ������������ ��������� �������: <br/> <br/> - �������, ��� ����������� �������� ����� <br/> - ����������� ����������� ����� ��� ������������ ��������� � ������������� <br/> - �����, ����� (<i> �������� �� ��������� ����� �������� ���������� </i>) <br/> - ������� ����� ����� <br/> - ������� ������ ����� <br/> - �������� ������ ����� ��� ������� �� ������� �������� <br/> <br/> <b> ��������: </b> <br/> ���� ���������� �� ����� �������� ������� FTP! <br/> ������� ��� ��������, ����������� ������� ����� ��� ������ ������ �� �������� � ���� ������������!',
 'Dl_physical_quota' => '���������� ����� ������ �����',
 'Dl_unassigned_files' => '��������� ���������� ��������',

/*
* statistics
*/
	'Dl_latest_downloads' => '��������� ��������',
 'Dl_latest_uploads' => '��������� ��������',
 'Dl_downloads_cur_month' => '�������� �� ������� �����',
 'Dl_downloads_overall' => '�������� �������',
 'Dl_downloads_count' => '��������',
 'Dl_downloads_traffic' => '������� ��������� ������',
 'Dl_uploads_count' => '��������',
 'Dl_uploads_traffic' => '������� �������� ������',
 'Dl_pos' => '�� ����� �������',
 'Dl_time' => '�����',
 'Dl_stats' => '��������� ����������',
 'Dl_direction' => '��������',
 'Dl_browser' => 'Web-�������',
 'Dl_ip' => '����� IP',
 'Dl_traffic_cur_month' => '������ � ���� ������',
 'Dl_traffic_overall' => '������ �������',
 'Dl_guest_stat_delete' => '������� ��� ������ ��� ������',
 'Dl_no_filter' => '-������� ������ - ',
 'Dl_total_entries' => '��������� �����',
 'Dl_filter' => '������',
 'Dl_filter_string' => '������������� * ��� % ��� ��������� ����� ����������',
 'Dl_guest_stats_admin' => '���������� ������ ������ �����',
 'Dl_stat_edit' => '�����������������',

/*
* comments
*/
	'Dl_comment' => '�����������',
 'Dl_comments' => '�����������',
 'Dl_last_comment' => '��������� �����������',
 'Dl_post_comment' => '��������',
 'Dl_view_comments' => '�����',
 'Dl_comment_edited' => '�����������, ��������� ����������������� �� %s',
 'Dl_comment_write' => '������ �����������',
 'Dl_comment_show' => '���������� ���� ������������ ��� ���� ��������',
 'Dl_comment_delete' => '�������',
 'Dl_comment_edit' => '��������������',
 'Dl_comment_added' => '����������� ������� �������',
 'Dl_comment_updated' => '�����������, ������� ����������',
 'Dl_must_be_approve_comment' => '���� ����������� ������ ���� ������� ����������� ��� ���������������!',
 'Dl_approve_overview_one_comment' => '���� ���� �������������� �����������. ������� �����, ����� ���������.',
 'Dl_approve_overview_comments' => '���� %s �������������� �����������. ������� �����, ����� ��������� ��.',

/*
* ACP management main page
*/
	'Dl_acp_traffic_management' => '���������� ������� ������� � ���� ��������������� ������',
 'Dl_acp_categories_management' => '���������� ����������� � �� ����������',
 'Dl_acp_config_management' => '����� ����� ������������',
 'Dl_acp_files_management' => '���������� ����������',
 'Dl_acp_stats_management' => '������������� � ���������� ��������',
 'Dl_acp_managemant_page' => '��������� ��� �����������������',
 'Dl_acp_managemant_page_explain' => '��������� ��������� ����������������� � ������� ��� ���� ��������. <br/> �������� ���� �� ������� ����, ����� �������� �� ��������� ���������.',
/*
* global strings
*/
	'Dl_account' => '� ��� ���� <b> %s </b> ������, ����������� � ���� ������.',
 'Dl_add_user' => '��� �������� ���������� <b> %s </b> <b> %s </b>',
 'Dl_all' => '���',
 'Dl_Bytes' => 'B',
 'Dl_Bytes_long' => '�����',
 'Dl_change_user' => '� ��������� ����������������� �� <b> %s </b> <b> %s </b>',
 'Dl_config' => '������������ ��������',
 'Dl_days' => '���',
 'Dl_default_sort' => '���������� �������� �� ���������',
 'Dl_delay_auto_traffic' => '���� ������ �������� ��� ������ ������������',
 'Dl_delay_post_traffic' => '������ �������� ��� ������ ��� ������ ������������',
 'Dl_direct_download' => '������',
 'Dl_detail' => '�����������',
 'Dl_disable_email' => '���������, ������������ �� ����������� �����',
 'Dl_disable_popup' => '���������, ������������ ��� ���������� ������������ ��������� / ��������� �����',
 'Dl_disable_email_files' => '���������, ������������ �� ����������� �����',
 'Dl_disable_popup_files' => '���������, ������������ ��� ���������� ������������ ��������� / ��������� �����',
 'Dl_download' => '��������',
 'DL_edit' => '����������� ��������',
 'DL_edit_time' => '����� ���� ����������������� �������� ����� �������',
 'Dl_extern' => '�������',
 'Dl_extern_up' => '�������',
 'Dl_file_description' => '��������',
 'Dl_file_name' => '����',
 'Dl_file_size' => '������',
 'Dl_files_title' => '�����',
 'Dl_files_url' => 'URL',
 'Dl_free' => '���������� �������',
 'Dl_function' => '�������',
 'Dl_GB' => '��',
 'Dl_group_name' => '�������� ������',
 'Dl_guest_stats_show' => '���������� ������ � ��������� ���������� ���������',
 'Dl_hotlink_action' => '�������� ������ ��� ������ ������ ��������',
 'Dl_hotlink_action_one' => '���������������� � ������������',
 'Dl_hotlink_action_two' => '���������� ���������',
 'Dl_info' => '����������',
 'Dl_is_free' => '���������� �������',
 'Dl_is_free_reg' => '���������� ��� ���������������� �������������',
 'Dl_KB' => '��',
 'Dl_klicks' => '�������� �� �����',
 'Dl_last_time' => '��������� �������� �� <b> %s </b>',
 'Dl_last_time_extern' => '��������� �������� �� �������� URL �� <b> %s </b>',
 'Dl_limit_desc_on_index' => '������������ �������� �������� �� �������',
 'Dl_Links_per_page' => '�������� �� ��������',
 'Dl_MB' => '��',
 'Dl_method' => '����� ��������',
 'Dl_method_new' => '�����',
 'Dl_method_old' => '������',
 'Dl_method_quota' => '����� ��� chunked ����� ������ �����',
 'Dl_modcp_capprove' => '�������� �����������',
 'Dl_must_be_approved' => '��� �������� ������ ���� ������� ��������������� ��� ����������� ���� ���������.',
 'Dl_name' => '��������',
 'DL_new' => '����� ��������',
 'DL_new_time' => '���������� ���� ����� �������� ����� �������',
 'Dl_no' => '���',
 'Dl_no_config' => '���������������� ������������� ������������',
 'Dl_no_last_time' => '��� �������� ����������� �� ��� ���...',
 'Dl_no_mod_todo' => '��� ��� ���� \����',
 'Dl_not_availible' => '�� availible',
 'Dl_order' => '���',
 'Dl_overall_klicks' => '������ �������',
 'Dl_klicks_total' => '������� � ����� / ����� ����������',
 'Dl_overview' => '������ Overview ��� ���� ��������',
 'DL_posts' => '����� ������ ������������ ������ �������� ������ ��������',
 'Dl_prevent_hotlink' => '������������� ������ �� ������ ��������',
 'Dl_rating' => '������',
 'Dl_real_filetime' => '��������� ����������� �����',
 'Dl_search_author' => '��� �������������, ������� �������� ��� �������� ��������',
 'Dl_show_footer_legend' => '������� ������ �� ������ ����������� ��������',
 'Dl_show_footer_stat' => '���������� ������ �� ������� ����������� ��������',
 'Dl_show_real_filetime' => '���������� ������� ��������� ����������� ����� �� ������������ ��������',
 'Dl_sort_preform' => '��������� ����������',
 'Dl_sort_acp' => '�������������� �������������',
 'Dl_sort_user' => '������������',
 'Dl_sort_user_opt' => '��� ��������� ���',
 'Dl_sort_user_ext' => '� ������� ����������',
 'Dl_thumb' => '�����������',
 'Dl_thumb_dim_size' => '����������� ������������ ������ %s x %s �������, � ������ ����� ������ ���� ������� ��� %s.',
 'Dl_thumb_max_dim' => '������������ ������ � �������� X * Y',
 'Dl_thumb_max_size' => '������������ ������ ����� �����������',
 'Dl_total_stat' => '���� ������ �������� %s � �������� %s / %s ������� %s ������� ��������.',
 'Dl_unapproved' => '<br/> <span = "gensmall"> [��������������] </span>',
 'Dl_upload' => '�������� ����',
 'Dl_upload_file' => '��������',
 'Dl_upload_max_filesize' => '������������ ������ �����, ������� �������� ��� ��������: %s',
 'Dl_upload_traffic' => '������ ����� �������� �������� ������ ������. ��������� ��� ��� ������ ������� �����!',
 'Dl_upload_traffic_count' => '����� ��������� ������ ������ ��� ��������',
 'Dl_use_hacklist' => '������������ hacklist',
 'Dl_users_without_group' => '������������ ��� �������� � usergroup',
 'Dl_white_explain' => '���������� ������� ��� ������� ������ ���������������� �������������',
 'Dl_yes' => '��',
 'Dl_yes_reg' => '�� ��� <br/> reg. ������������',
 'Download_path' => '���� � ����� ���������, ��������, <b> ��������� / </b>',
 '��������' => '��������',
 'Must_select_download' => '�������� ��������.',
 'Number_recent_dl_on_portal' => '����� �������� ��������, ������� ���������� �� �������',
 'Recent_downloads' => '�������� ��������',
 'User_allow_fav_download_email' => '��������� ����������� ������ ��� ��������� � ������� ���������',
 'User_allow_fav_download_popup' => '��������� ����� messag ��� ��������� � ������� ���������',
 'User_allow_new_download_email' => '��������� ����������� ������ ��� ����� ��������',
 'User_allow_new_download_popup' => '��������� ��������� ����� ��� ����� ��������',
 'User_download_email' => '����������� ����� <br/> �����������',
 'User_download_popup' => '����� <br/> ���������',
 'User_download_notify_type' => '��� ��������� �����',
 'User_download_notify_type_popup' => '�����������',
 'User_download_notify_type_message' => '��������� �� ����� ���������',
 'Dl_edit_own_downloads' => '������������ ����� ������������� ����������� �����',
 'Dl_report_confirm_code' => '���������� ������� ��� ������������� �����, ����� �������� �� ���� �������� ��� ����������:',
 'Dl_shorten_extern_links' => '��������� ������������ ������� ������ ��������',
 'Dl_physical_quota_explain' => '���� ��� ����� (� ��������� ����� %s � �������������) ����������, ������ ��������, ����� ��������',
'Dl_blue_explain' => '������ ������� ������� �����!',
  'Dl_blue_explain_file' => '������ ������� ����� �����!',
  'Dl_blue_explain_foot' => '������ ������� ������� ��� ������� �����/��������� �����!',
 'Dl_green_explain' => '��������! ������� �������� �� ������� ������ ������������.',
 'Dl_grey_explain' => '��������! ������� ��������. ������� �������� �� ������� ������ ������������.',
 'Dl_red_explain' => '������������ ������� ��� ������ <br/> (%s ��������� �����). �� ���������� ����! �������� ����� ������������� �����������!',
 'Dl_red_explain_alt' => '������������ ������� ��� ������ (%s ��������� �����). �� ���������� ����! �������� ����� ������������� �����������!',
 'Dl_red_explain_perm' => '������� ����� ���������!',
 'Dl_yellow_explain' => '��������! ������ ����� ���������� �� ������� ������ ������������.',
 'Dl_config_explain' => '�������� ��� ��������� ��������� ������� �/��� ��������� ���������.',
 'Dl_cat_edit_explain' => '��������� ����������� ��� ���� ��������.',

/*
* build in add on cash to traffic
*/
	'Dl_cash_to_traffic' => '�������� �������� ������ � �������',
 'Dl_cash_to_traffic_explain' => '����� ����� ����� ��������� �������� � �������� ��������. ����� ������� ���� ������ ��������� ������ � ���������� ���������� �������.',
 'Dl_cash_currency' => '�������� ������',
 'Dl_cash_exchange' => '�����: 1 %s � %s ������',
 'Dl_cash_current_amount' => '� ��� ���� %s %s',

/*
* new on Download MOD 5.0.10: Blacklist for filetypes
*/
	'Dl_ext_blacklist' => '��������� � ������ ������ �������������� ���� �����',
 'Dl_use_ext_blacklist' => '�������� ������ ������ ��� ��������������� ���� �����',
 'Dl_extention' => '����� ����������� ���� extention',
 'Dl_extentions' => '����������� extentions �����' ,
 'Dl_add_extention' => '��������� ���� extention',
 'Dl_confirm_delete_extention' => '������������� �� �� �������, ��� �� ������ �������� extention <b> %s </b>?',
 'Dl_confirm_delete_extentions' => '������������� �� �� �������, ��� �� ������ �������� extentions <b> %s </b>?',
 'Dl_delete_extention_confirm' => '���� �������� extention �� ������� ������',
 'Dl_delete_extentions_confirm' => '���� �������� extentions �� ������� ������',
 'Extention_removed' => '���� extention ������� ���������� �� ������� ������.',
 'Extentions_removed' => '���� extentions ������� ���������� �� ������� ������.',
 'Click_return_extblacklistadmin' => '������� %s�����%s, ����� ���������� ����� extention ������ ������',
 'Dl_forbidden_extention' => '���� ���� extention � ��������� ����� �� �����������! <br/> ���������� ������������ � ����������� ������ ��� �����.',
 'Dl_forbidden_ext_explain' => '����������� ���� extentions: %s',
 'Dl_ext_blacklist_explain' => '������ ���� extentions, ������� ������ ���� �� ������ � �������� � ���� �����. <br/> ����������� ���� extentions ����������� � ������� ��������������� ����������� ���������� ������� ����� ����� ��������������. <br/> ��� doesn \'t �������� ������������ ��������.',
/*
* new on Download MOD 5.0.12: Disable time edit informations
*/
	'Dl_disable_popup_notify' => '��������� ���������� ����������� ���������� ������� ������',

/*
* new on Download MOD 5.0.15: Banlist and report broken downloads
*/
	'Dl_acp_banlist' => '��� ����',
 'Dl_user_id' => '���������������� ID',
 'Dl_confirm_delete_ban_values' => '������������� �� �� �������, ��� �� ������ ������� ��� banlist �����?',
 'Dl_banlist_updated' => 'Banlist, ������� �����������',
 'Dl_banned' => '�� ��������� � ���������� ��������� ����� ����!',
 'Click_return_banlistadmin' => '������� %s�����%s, ����� ������������ � banlist',
 'Dl_broken' => '�������� � ������ ��������',
 'Dl_broken_mod' => '����� ��������� ��������� ��������',
 'Dl_broken_cur' => '��� �������� � ��������� ����� �������� ��� ����������',
 'Dl_report_broken' => '��������� �������� ��������� ��������',
 'Dl_a_guest' => '�����',
 'Dl_favorite_add' => '���������� ���� �� ���������� � ���� ��������',
 'Dl_favorite_drop' => '������� ����������� �� ���� ��������',
 'Dl_favorite' => '��������� ���������',
 'Dl_acp_banlist_explain' => '������ ��������� ��������, ����� ��������� ������ � ���������. <br/> ������ �������� ����� �������������� ������������, ���� ���� ��� ����� ������� ��� ���� ����� ������.',
/*
* new on Download MOD 5.1.0
*/
	'Dl_report_broken_lock' => '��������� ��������, � �� ����� ��� � ��� �������� ��� ����������',
 'Dl_report_broken_message' => '���������� ����������� � ��������� ��������, ������ ���� ��� ����� �������������',
 'Dl_report_broken_vc' => '���� ����������� ����������� ������������� �������� � ��������� ��������',
 'Dl_visual_confirmation' => '���� ����������� ����������� ������������� ��������� ����',
 'Dl_off_guests' => '�� ��� ������',

/*
* new on Download MOD 5.1.1
*/
	'Dl_icon_free_for_reg' => 'Display the white download icon for guests',

/*
* new on Download MOD 5.1.3
*/
	'Dl_latest_comments' => 'Displays the latest X comments on download details',

/*
* new on Download MOD 5.2.0 - The Bug Tracker !!!!!!!!!!!! -------------  * :-(((((
*/
	'Dl_bug_tracker' => '������ �������',
 'Dl_bug_tracker_file' => '��� ���� ��������',
 'Dl_bug_tracker_cat' => '��������� ������� ������',

 'Confirm_delete_bug_report' => '������������� �� �� �������, ��� �� ������ ������� ��� ��������� �� �������?',
 'Dl_bug_report_id' => '������������� ������',
 'Dl_bug_report_title' => '��������� ������',
 'Dl_bug_report_title_details' => '�����',
 'Dl_bug_report_text' => '��������',
 'Dl_bug_report_date' => '������',
 'Dl_bug_report_php' => 'PHP',
 'Dl_bug_report_db' => '��',
 'Dl_bug_report_forum' => '�����',
 'Dl_bug_report_file' => '��������',
 'Dl_bug_report_author' => '����������',
 'Dl_bug_report_assigned' => '����������� ��',
 'Dl_bug_report_assign_date' => '����������� �',
 'Dl_bug_report_status' => '���������',
 'Dl_bug_report_status_date' => '� ������� ��� ���������',
 'Dl_bug_report_detail' => '�����������',
 'Dl_bug_report_history' => '����������',
 'Dl_bug_report_reassign' => '�������������',
 'Dl_bug_report_assign' => '���������',
 'Dl_bug_report_unassigned' => '����������',
 'Dl_no_bug_tracker' => '������� ��������� ������',
 'Dl_bug_report_no_title' => '�� �� ����� ��������� ��� ����� ��������� �� �������!',
 'Dl_bug_report_no_text' => '�� �� ����� �������� ��� ����� ��������� �� �������!',
 'Dl_bug_report_added' => '��������� �� ������� ������� �������',
 'Click_return_bug_tracker' => '���vbnt %sPltcm%s, ����� ������������ � ������� ������.',
 'Dl_bug_report_status_text' => '����� Some ��� ������ ��������� (����� ������ �� ����������� ����� ������ ����� ��������� �� �������)',
 'Dl_bug_report_status_update' => '��������� ���������',
 'Dl_filter_bt_own' => '���������� ���� �������',
 'Dl_filter_bt_assign' => '���������� ����� assigns',

 'Dl_user_download_limit_flag' => '����� ������� �������� � �����',
 'Dl_user_download_limit' => '������������ ����� �������� � �����',
	)
);

$lang['Dl_report_status'][0] = '����� ';
$lang['Dl_report_status'][1] = '������������� ';
$lang['Dl_report_status'][2] = '� ���� ';
$lang['Dl_report_status'][3] = '� �������� ';
$lang['Dl_report_status'][4] = '����� ';
$lang['Dl_report_status'][5] = '���� ';
$lang['Dl_bug_report_email_status'] = '��� ��������� ��� ������ ������� :
--------------------
%s
--------------------';

?>