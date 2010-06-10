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
* Vjacheslav Trushkin (http://www.stsoftware.biz)
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
	'Extreme_Styles' => 'eXtreme �����',
'xs_title' => '��� eXtreme ������',

'xs_file' => '����',
'xs_template' => '������',
'xs_id' => 'ID',
'xs_style' => '�����',
'xs_styles' => '�����',
'xs_users' => '������������',
'xs_options' => '�����',
'xs_comment' => '����������',
'xs_upload_time' => '����� ��������',
'xs_select' => '�������',

'xs_continue' => '����������',       // ������

'xs_click_here_lc' => '������',
'xs_edit_lc' =>'�������������',


/*
* navigation
*/
	'xs_config_shownav' => array(
		 '������������',
        '���������� �����',
        '������� �����',
        '����� �� ���������',
        '������� ���',
        '������ ������',
        '�������������� �����',
        '����������� �����',
        '������� �����',
        '������������� �������',
        '������������� �����',
        '�������������� ����',
        '�������� ����������',
	),

/*
* frame_top.tpl
*/
	'xs_menu_lc' => '���� ���� extreme ������ ',
'xs_support_forum_lc' => '����� ���������',
'xs_download_styles_lc' => '��������� �����',
'xs_install_styles_lc' => '���������� �����',

/*
* index.tpl
*/

	'xs_main_comment1' => '��� ���� ���� eXtreme ������. ���� �������� ����� ������� � �������� ����� ����������, ��� ��� ��� �������� - ����� ��� ������.<br /><br />�������� ��������: ���� ��� �������� phpBB ���������� ������. �� ������� �� �� ������� ��� � �� ��������� � phpBB , �� ��� ������� ������ �������������� � ����� �������������� �����������.<br /><br />���� � ��� ���� ����� �������, ���������� �������� <a href="http://www.phpbbstyles.com" target="_blank">����� ���������</a> ��� �� ������ �������� ������ ��� ����� ����.',
'xs_main_comment2' => '��� eXtreme ������ ��������� admin ������� ������ ����� � .style files. ����� ��������� � ��������� ������ �����, ��� �������� ����� ����������/�������� �������� ���������� ������. ����� ����� ����� ��� ��� ����������/��������, ������� ����� ������������ ��� ����������/�������� ������� ������ �����.',
'xs_main_comment3' => '��� ������� phpBB ���������� ������� �������� ����� eXtreme �����.<br /><br /><a href="{URL}">������</a> ��� ��������� ����.',
'xs_main_title' => '���� ���������� eXtreme �������',
'xs_menu' => '���� eXtreme ������',

'xs_manage_styles' => '���������� �������',
'xs_import_export_styles' => '������/������� ������',
'xs_install_uninstall_styles' => '�������������/��������������� �����',
'xs_edit_templates' => '������������� �������',
'xs_other_functions' => '������ �������',

'xs_configuration' => '������������',
'xs_configuration_explain' => '����� �� ������ �������� ������������ eXtreme ������.',
'xs_default_style' => '����� �� ���������',
'xs_default_style_explain' => '����� �� ������ �������� ����� ������ �� ��������� � ����������� ������������� � ������ ����� �� ������.',
'xs_manage_cache' => '���������� �����',
'xs_manage_cache_explain' => '����� �� ������ ��������� ������������� �������.',
'xs_import_styles' => '������������� �����',
'xs_import_styles_explain' => '����� �� ������ ������� � ������������� .style files.',
'xs_export_styles' => '�������������� �����',
'xs_export_styles_explain' => '����� �� ������ ��������� ����� ��� ������ ������ ��� .style file � ��� ����� ���������� ������� ������ ��� ��������.',
'xs_clone_styles' => '���������� �����',
'xs_clone_styles_explain' => '����� �� ������ ������ ����������� ����� ��� ����� ������.',
'xs_download_styles' => '������� �����',
'xs_download_styles_explain' => '����� �� ������ ������ ��������� � ���������� ����� � ���������. �� ������ ����������� ������ ��������� ��������������.',
'xs_install_styles' => '���������� �����',
'xs_install_styles_explain' => '����� �� ������ ���������� �����, ������� ��� ��������� �� ��� �����.',
'xs_uninstall_styles' => '������� �����',
'xs_uninstall_styles_explain' => '����� �� ������ ������� ����� ��� ������ ������.',
'xs_edit_templates_explain' => '����� �� ������ ������������� tpl ����� ������.',
'xs_edit_styles_data' => '�������������� ������ ������',
'xs_edit_styles_data_explain' => '����� �� ������ ������������� ��������� �����. ��� �������� �������� ���������� ������, �� �������� ������ � ������ ���������� �� css ������.',
'xs_export_styles_data' => '������ ������ ������',
'xs_export_styles_data_explain' => '����� �� ������ �������� � �������� theme_info.cfg �����.',
'xs_check_for_updates' => '�������� ��� ����������',
'xs_check_for_updates_explain' => '����� �� ������ ��������� ���������� ������ ������ � �����, ������������� �� ����� ������.',

'xs_set_configuration_lc' => '����� ������������',
'xs_set_default_style_lc' => '����� ����� �� ���������',
'xs_manage_cache_lc' => '���������� �����',
'xs_import_styles_lc' => '������������� �����',
'xs_export_styles_lc' => '�������������� �����',
'xs_clone_styles_lc' =>'���������� �����',
'xs_uninstall_styles_lc' => '������� �����',
'xs_edit_templates_lc' => '������������� �������',
'xs_edit_styles_data_lc' => '������������� ������ ������',
'xs_export_styles_data_lc' => '�������������� ������ ������',
'xs_check_for_updates_lc' => '��������� ��� ����������',

/*
* ftp.tpl, ftp functions
*/

'xs_ftp_comment1' => '����� ������������ ��� �������, �� ������ ������� ����� �������� �����. ���� �� ��������� FTP, �� ������ �� ����� �������� � eXtreme ����� ����� ������� � ��� ������ ������ ���, ����� �� ��������� �������, ������� ������� FTP �������. ���� �� ��������� ��������� �������� �������, �������������, ��� ��������� ���������� ��������.',
'xs_ftp_comment2' => '����� ������������ ��� �������, �� ������ ���������� FTP ������. ������ �� ����� ��������, � eXtreme ����� ����� ������� � ��� ������ ������ ���, ����� �� ��������� �������, ������� ��������� ��� ������� �� FTP .',
'xs_ftp_comment3' => '��������������: FTP ������ ����������� �� ���� �������. �� �� ������� ������������ eXtreme �����, ������� ������� FTP �������.',

'xs_ftp_title' => 'FTP ������������',

'xs_ftp_explain' => 'FTP ������������ ��� �������� ����� ������. ���� �� ������ ������������ ������������  ������� ������, ����� �� ������ ������� ��������������� FTP. �������� ������� ����-����������� ������.',

'xs_ftp_error_fatal' => 'FTP ������� ����������� �� ���� �������. �� ���� ����������.',
'xs_ftp_error_connect' => 'FTP ������: �� ����� ���������� � {HOST}',
'xs_ftp_error_login' => 'FTP ������: �� ����� �����',
'xs_ftp_error_chdir' => 'FTP ������: �� ����� �������� ���������� �� {DIR}',
'xs_ftp_error_nonphpbbdir' => 'FTP ������: ������������ ����������. ��� ������ phpBB � ���� ����������',
'xs_ftp_error_noconnect' => '�� ����� ���������� � ftp ��������',
'xs_ftp_error_login2' =>'�������� ftp ����� � (���) ������',

'xs_ftp_log_disabled' => 'ftp ������� ����������� �� ���� �������. ������ �� ����� �������� ������.',
'xs_ftp_log_connecting' => '���������� � {HOST}',
'xs_ftp_log_noconnect' => '��� ���������� � {HOST}',
'xs_ftp_log_connected' => '����������. ���� �...',
'xs_ftp_log_nologin' => '�� ������ ��� {USER}',
'xs_ftp_log_loggedin' => '������ �',
'xs_ftp_log_end' => '��������� ������ �������',
'xs_ftp_log_nopwd' => '������: �� ����� ������������ ������� ����������',
'xs_ftp_log_nomkdir' => '������: �� ����� ������� ����������� {DIR}',
'xs_ftp_log_mkdir' => '������� ����������� {DIR}',
'xs_ftp_log_nochdir' => '������: �� ����� �������� ���������� � {DIR}',
'xs_ftp_log_normdir' => '������: �� ����� ������� ���������� {DIR}',
'xs_ftp_log_rmdir' => '�������� ���������� {DIR}',
'xs_ftp_log_chdir' => '��������� ���������� � {DIR}',
'xs_ftp_log_noupload' => '������: �� ����� ��������� ���� {FILE}',
'xs_ftp_log_upload' => '����������� ���� {FILE}',
'xs_ftp_log_nochmod' => '��������������: �� ��� chmod ����� {FILE}',
'xs_ftp_log_chmod' => 'chmod ����� {FILE}  {MODE}',
'xs_ftp_log_invalidcommand' => '������: ����������� �������: {COMMAND}',
'xs_ftp_log_chdir2' => '��������� ������� ���������� ����� � {DIR}',
'xs_ftp_log_nochdir2' => '�� ���������� ���������� � {DIR}',

'xs_ftp_config' => '������������ FTP',
'xs_ftp_select_method' => '������� ����� ��������',
'xs_ftp_select_local' => '������� ��������� �������� ������� (�� ������� ������������)',
'xs_ftp_select_ftp' => '������� FTP (��������� ftp ���������� ����)',

'xs_ftp_settings' => 'FTP ���������',
'xs_ftp_host' => 'FTP ����',
'xs_ftp_login' => 'FTP ����',
'xs_ftp_path' => 'FTP ���� ��� phpBB',
'xs_ftp_pass' => 'FTP ������',
'xs_ftp_remotedir' => '������� ����������',

'xs_ftp_host_guess' => ' (������ "{HOST}" [<a href="javascript: void(0)" onclick="{CLICK}">����</a>])',
'xs_ftp_login_guess' => ' (������ "{LOGIN}" [<a href="javascript: void(0)" onclick="{CLICK}">����</a>])',
'xs_ftp_path_guess' => ' (������ "{PATH}" [<a href="javascript: void(0)" onclick="{CLICK}">����</a>])',


/*
* config.tpl
*/
	'xs_config_updated' => '������������ ���������.',
'xs_config_updated_explain' => '�� ������ �������� ��� �������� ������, ��� ����� ������������ ������� � ����. <a href="{URL}">������</a> ��� ���������� ��������.',
'xs_config_warning' => '��������������: ��� �� ����� ����������.',
'xs_config_warning_explain' => '��� �� �������. eXtreme ����� ����� ���������� ��������� ��� ���������.<br /><a href="{URL}">������</a> ����� �������� ������ �� ��� ����������.<br /><br />���� ��� �� �������� �� ����� ������� �� ��������� �������� �� ���������� - eXtreme �����<br />������ �������� ���������� ������ � ��� ���.',

'xs_config_maintitle' => '������������ ���� eXtreme ������',
'xs_config_subtitle' => '��� ������������ ��� eXtreme ������. ���� �� �� ���������, �� ��������� ��.',
'xs_config_title' => '��������� eXtreme ��� ����� v{VERSION}',
'xs_config_cache' => '��� ������������',

'xs_config_navbar' => '����� �� ����� �����:',
'xs_config_navbar_explain' => '�� ������ ������� ����� ������ �������� �� ����� ����� � admin �������.',

'xs_config_def_template' => '���������� ������� �� ���������',
'xs_config_def_template_explain' => '���� ��������� tpl ���� �� ������ � ������� ���������� ������� (���� ������������ ������������ ���� phpBB) ����� ������� ������� ���� ����� �� ���� � ��������� ����������� (������� ����, ��� ���� �� ������� ������ - "myTemplate" ������� ���� "myTemplate/myfile.tpl" � ����� ����� ���, ���� ����� �������� � "subSilver/myfile.tpl"). ����� �������� ���.',

'xs_config_check_switches' => '��������� ��������� ��� ��������������',
'xs_config_check_switches_explain' => '����� ����������� ������ � ��������. ���������� ����� ������� ����������, �� ���������� ����� ���������� ��������� ������ � ��������, ���� ��� ����.<br /><br />������� �������� �������� ������� �� ������ � ������������� �������� �� (���� ������� ��������� �������� � ��������� �����). �������� ��������� ��� ������� ��������.<br /><br />�� ������ ������ �������� ����������� ������, ����� �������� �� ������ �� ��������; ��� ��������� ��-�� ������� ����������� html ������, ��� �� �� ������� tpl ����, ���� �� ������ ��������� ������.<br /><br />���� ��� ���������, �� ��������� ��� ��� ����� ������� ����������.',
'xs_config_check_switches_0' => '����.',
'xs_config_check_switches_1' => '��������� ��������',
'xs_config_check_switches_2' => '������� ��������',

'xs_config_show_errors' => '����� ������, ����� ����� ����������� �������� � tpl �����',
'xs_config_show_error_explain' => '����� ����������/����������� ������ � tpl ������ ��������� ������������� &lt;!-- INCLUDE filename --&gt;',

'xs_config_tpl_comments' => '�������� tpl ��� ����� � html',
'xs_config_tpl_comments_explain' => '����� ���������� ����������� � ���� html, ������� ��������� ��������������� ����� ������������, ����� tpl ���� ������������.',

'xs_config_use_cache' => '������������ ���',
'xs_config_use_cache_explain' => '��� ����������� �� ����  � ��� �������� ������������ ��������, ������ ��� �� ���� �������� ������ ������ ��� ��� ������������.',

'xs_config_auto_compile' => '�������������� ������ ���',
'xs_config_auto_compile_explain' => '����� ������������� ��������� �������, ������� - �� ���������� � ��������� � ���������� ����������.',

'xs_config_auto_recompile' => '������������� ��������� ���',
'xs_config_auto_recompile_explain' => ' ����� ������������� ��������� �������, ���� ������ ��� �������.',

'xs_config_php' => '���������� ���� ����� ���',
'xs_config_php_explain' => '��� - ���������� ���������� ������. ����� ����������� � ������� php, ��� ��� ���������� �� ��������� - "php". �� ������� ��� ����� :-)))',

'xs_config_back' => '<a href="{URL}">������</a> ����� ������� ������������.',
'xs_config_sql_error' => '��������� ���������� �������� ������������ {VAR}',
// Debug info
	'xs_debug_header' => '���������� �������',
'xs_debug_explain' => '���������� ������� ������������, ����� ����� �������� ��� ���������������� ���.',
'xs_debug_vars' => '�������� �������',
'xs_debug_tpl_name' => '��� ����� �������:',
'xs_debug_cache_filename' => '��� ����� ���:',
'xs_debug_data' => '������ �������:',

'xs_check_hdr' => '�������� ��� ��� %s',
'xs_check_filename' => '������: ������������ ��� �����',
'xs_check_openfile1' => '������: �� ���� ������� ���� "%s". ���� ��������� ������� ����������...',
'xs_check_openfile2' => '������: �� ���� ������� ���� "%s" � ������� ������� ����. �����...',
'xs_check_nodir' => '�������� "%s" - ��� ����������.',
'xs_check_nodir2' => '������: �� ���� ������� ���������� "%s" - ��, ��������, ������ ��������� ����������.',
'xs_check_createddir' => '��������� ���������� "%s"',
'xs_check_dir' => '�������� "%s" - ���������� ����������.',
'xs_check_ok' => '���� "%s" ������ ��� ������. ������� ��� � �������.',

	'xs_error_demo_edit' => '�� �� ������ ������������� ���� � ���������������� ������',
	'xs_error_not_installed' => '����������� ������ ������ �� ����������. �� ������ ��������� � includes/template.php',

/*
* chmod
*/
'xs_chmod' => 'CHMOD',
'xs_chmod_return' => '<br /><br /><a href="{URL}">�������</a> ����� ������� ������������.',
'xs_chmod_message1' => '������������ ��������.',
'xs_chmod_error1' => '�� ���� �������� ������ ��� �����������',


/*
* default style
*/
	'xs_def_title' => '����� ����� �� ���������',
'xs_def_explain' => '����� �� ������ ������ �������� ����� ������ �� ��������� � ����� ����������� ������������� �� ������ ����� � �������.',

'xs_styles_set_default' => '����� �� ���������',
'xs_styles_no_override' => '��������� ���������������� ���������',
'xs_styles_do_override' => '�������� ���������������� ���������',
'xs_styles_switch_all' => '����������� ���� ������������� � ����� �����',
'xs_styles_switch_all2' => '���������� ���� �������������:',
'xs_styles_defstyle' => '����� �� ���������',
'xs_styles_available' => '��������� �����',
'xs_styles_make_public' => '������� ����� ���������',
'xs_styles_make_admin' => '������� ����� ������ ��� ��������������',
'xs_styles_users' => '������ �������������',

/*
* cache management
*/
	'xs_manage_cache_explain2' => '����� �� ������ �������� ��� ������� ������������ ����� ��� ������.',
'xs_clear_all_lc' => '�������� ��',
'xs_compile_all_lc' => '������������� ��',
'xs_clear_cache_lc' => '�������� ���',
'xs_compile_cache_lc' => '���������� ���',
'xs_cache_confirm' => '���� �� ������ ����� ������, ��� ����� ��������� ������. �� �������, ��� ������ ����������?',

'xs_cache_nowrite' => '������: �� ������� ��� ����������',
'xs_cache_log_deleted' => '������ {FILE}',
'xs_cache_log_nodelete' => '������: ���� �� ��������� {FILE}',
'xs_cache_log_nothing' => '��� ������ ��� �������� ������� {TPL}',
'xs_cache_log_nothing2' => '��� ������ ��� �������� � ��� ����������',
'xs_cache_log_count' => '������� {NUM} ������',
'xs_cache_log_count2' => '������ �������� {NUM} ������',
'xs_cache_log_compiled' => '����������: {NUM} ������',
'xs_cache_log_errors' => '������: {NUM}',
'xs_cache_log_noaccess' => '������: �� ������� ���������� {DIR}',
'xs_cache_log_compiled2' => '����������: {FILE}',
'xs_cache_log_nocompile' => '������ ��������������: {FILE}',

/*
* export/import/download/clone
*/
	'xs_import_explain' => '����� �� ������ ������������� �����.����� �� ������ ����� ������������� ���������� � ��������������� �����.<br /><br />��������������: If you have added any mods (except for eXtreme Styles mod) on this forum then you should be careful when importing styles because styles might not be compatible with your forum. You can only install styles that have the same modifications as the other styles that you\'ve configured on your forums.',

'xs_import_lc' => '������',
'xs_list_files_lc' => '������ ������',
'xs_delete_file_lc' => '������� ����',
'xs_export_style_lc' => '�������������� �����',

'xs_import_no_cached' => '��� ������������ ������ ��� �������',
'xs_add_styles' => '�������� �����',
'xs_add_styles_web' => '��������� � ��������',
'xs_add_styles_web_get' => '���������',
'xs_add_styles_copy' => '���������� � ���������� �����',
'xs_add_styles_copy_get' => '����������',
'xs_add_styles_upload' => '�������� �� ��������',
'xs_add_styles_upload_get' => '��������',

'xs_export_style' => '�������������� �����',
'xs_export_style_explain' => '����� �� ������ �������������� ����� ��� ��������� ����. ��������� ���� �������� ����� ��������� - smaller than a .zip file (because it is compressed with gzip, which works better than zip) and all styles inside is a single file. In turn, it is very easy to transfer styles from one forum to another.<br /><br />This feature also allows you to upload exported styles using ftp to a server. This system allows you to transfer a style to another forum quickly without manually copying it.',

'xs_export_style_title' => '�������������� ������ "{TPL}"',
'xs_export_tpl_name' => '�������������� ��� (��� �������)',
'xs_export_style_names' => '������� �����(�) ��� ��������',
'xs_export_style_name' => '�������������� ����� (��� �����)',
'xs_export_style_comment' => '����������',
'xs_export_where' => '��� ��������������',
'xs_export_where_download' => '��������� ��� ����',
'xs_export_where_store' => 'Store ��� ���� �� �������',
'xs_export_where_store_dir' => '����������',
'xs_export_where_ftp' => '�������� ����� FTP',
'xs_export_filename' => '�������������� ��� �����',

'xs_download_explain2' => '����� �� ������ ������ ���������� � ������������� ����� ��������������� � ��������� ���������. �������� �� �������� ����� � �� ������ �������������� � �������� �������� ������.<br /><br />�� ������ ����� ��������� ������� ���������.',

'xs_download_locations' => '����� �������',
'xs_edit_link' => '������������� ������',
'xs_add_link' => '�������� ������',
'xs_link_title' => '�������� ����������',
'xs_link_url' => '����� URL',
'xs_delete' => '�������',

'xs_style_header_error_file' => '�� ����������� ��������� ����',
'xs_style_header_error_server' => '������ �� �������: ',
'xs_style_header_error_invalid' => '������������ ��������� �����',
'xs_style_header_error_reason' => '������ ������ ��������� �����: ',
'xs_style_header_error_incomplete' => '���� �� ������',
'xs_style_header_error_incomplete2' => '�������� ������ �����. �������� ���� �������.',
'xs_style_header_error_invalid2' => '���������� ����. ����������������, ���� �� ��������� � ����� eXtreme ������ ��� ������������ ������.',
'xs_error_cannot_open' => '���� �� �����������.',
'xs_error_decompress_style' => '������, ��������������� �����. �������� ���� �������.',
'xs_error_cannot_create_file' => '�� ���� ������� ���� "{FILE}"',
'xs_error_cannot_create_tmp' => '�� ���� ������� ��������� ���� "{FILE}"',
'xs_import_invalid_file' => '����������� ����',
'xs_import_incomplete_file' => '�������� ����',
'xs_import_uploaded' => '����� ��������.',
'xs_import_installed' => '����� �������� � ������������.',
'xs_import_notinstall' => '����� ��������, �� ������ ���������� ����� (sql error).',
'xs_import_notinstall2' => '����� ��������, �� ������ ���������� �����: �� ������ ����� � theme_info.cfg',
'xs_import_notinstall3' => '����� ��������, �� ������ ���������� �����: �� ������ "{STYLE}" � theme_info.cfg',
'xs_import_notinstall4' => '����� ��������, �� ������ ���������� �����: �� ���� �������� ����� themes_id ����������',
'xs_import_notinstall5' => '����� ��������, �� ������ ���������� �����: �� ���� ��������������� ������� ������',
'xs_import_nodownload' => '�� ���� ��������� ����� � {URL}',
'xs_import_nodownload2' => '�� ���� ����������� ����� � {URL}',
'xs_import_nodownload3' => '���� �� ��������.',
'xs_import_uploaded2' => '����� ��������. �� ������ ������ ������������� ���.<br /><br /><a href="{URL}">������</a> ��� ������� �����.',
'xs_import_uploaded3' => '����� ����������. �� ������ ������ ������������� ���.<br /><br /><a href="{URL}">������</a> ��� ������� �����.',
'xs_import_uploaded4' => '����� ��������. �� ������ ������ ������������� ���.<br /><br /><a href="{URL}">������</a> ��� ������� �����.',
'xs_export_no_open_dir' => '�� ���� ������� ���������� {DIR}',
'xs_export_no_open_file' => '�� ���� ������� ���� {FILE}',
'xs_export_no_read_file' => '������ ������ ����� {FILE}',
'xs_no_theme_data' => '�� ���� �������� ������ ����� ��� ����������� �������',
'xs_no_style_info' => '�� ���� �������� ���������� �����',
'xs_export_noselect_themes' => '�� ������ ������� �� ������� ���� ���� �����',
'xs_export_error' => '�� ���� �������������� ������ "{TPL}": ',
'xs_export_error2' => '�� ���� �������������� ������ "{TPL}": ����� ����',
'xs_export_saved' => '����� ������� ��� "{FILE}"',
'xs_export_error_uploading' => '������ �������� �����',
'xs_export_uploaded' => '���� ��������.',
'xs_clone_taken' => '��� �������� ����� ��� ������������.',
'xs_error_new_row' => '�� ���� �������� ����� ��� � �������.',
'xs_theme_cloned' => '���������� �����.',
'xs_invalid_style_name' => '������������ ��� �����.',
'xs_clone_style_exists' => '���� ������ ��� ����������',
'xs_clone_no_select' => '�� ������ ������� �� ������� ���� ���� �����, ����� ����������.',
'xs_no_themes' => '����� �� ���������� � ����.',

'xs_import_back' => '<a href="{URL}">������</a> ����� ��������� �� �������� ������� ������.',
'xs_import_back_download' => '<a href="{URL}" target="main">������� �����</a> ����� ������� �������.',
'xs_export_back' => '<a href="{URL}">������</a> ����� ��������� �� �������� �������� ������.',
'xs_clone_back' => '<a href="{URL}">������</a> ����� ��������� �� �������� ����������� ������.',
'xs_download_back' => '<a href="{URL}">������</a> ����� ��������� �� �������� ��������.',

'xs_import_tpl' => '������ ������� "{TPL}"',
'xs_import_tpl_comment' => '����� �� ������ ��������� ������ �� ��� �����. ���� ������ � ���� ��������� ��� ���������� �� ����� ������, �� ������������� ���������� ������ �����, ��� ��� ��� ����� ����� ��������������, ����� ��������������� �����.<br /><br />����� ������ ������������� ���������� �����. ���� �� ������ ���������� ����� ����� ��������������, ��� ����� �������� ���� ��� ����� ������ ����.',
'xs_import_tpl_filename' => '��� �����:',
'xs_import_tpl_tplname' => '��� �������:',
'xs_import_tpl_comment2' => '����������:',
'xs_import_select_styles' => '������� �����(�) ��� ����������:',
'xs_import_install_def_lc' => '������� ����� ������ �� ���������',
'xs_import_install_style' => '���������� �����:',
'xs_import' => '�������������',

'xs_import_list_contents' => '���������� �����: ',
'xs_import_list_filename' => '��� �����: ',
'xs_import_list_template' => '������: ',
'xs_import_list_comment' => '�����������: ',
'xs_import_list_styles' => '�����(�): ',
'xs_import_list_files' => '����� ({NUM}):',
'xs_import_download_lc' => '��������� ����',
'xs_import_view_lc' => '����������� ����',
'xs_import_file_size' => '({NUM} bytes)',

'xs_import_nogzip' => '��� ������� ������� gz ������, � �������� ��� �� �������������� �� ���� �������.',
'xs_import_nowrite_cache' => '�� ����� �������� ���. ��� ������� �������, ����� ��� ��� ����������������. ��������� ������������ ����.<br /><br /><a href="{URL1}">������</a> ����� ������� ��� ����������������.<br /><br /><a href="{URL2}">������</a> ����� ��������� �� �������� �������.',

'xs_import_download_warning' => '����� �� ������ � ������ ��� ������ ������ ��������� ����� ��������� ����������� �������� ������',

'xs_clone_style' => '���������� �����',
'xs_clone_style_explain' => '����� �� ������ ������ ���������� ����� ��� ����� ������.<br /><br />���������: ���� �� ��������� ������, ��������������, ��� ����� ������������� ������� ��������� ��� ������� ��� (���� ��� �� �������� subSilver - �� ������ ������� ��, ��� �� ������ � subSilver). ������ ������ ��������� �������� �� �����, �� ���������� ����� �� ����������� ���.',
'xs_clone_style_explain2' => '����� �� ������ ������� ����� ����� �� �������. ����� �� ����� ������������ ����� - ������ ��������� ���� � ���� ���� ������. � ������ � ����� ����� �������� �� �� ����� �������.',
'xs_clone_style_explain3' => '������� ��� ����� ������� ����������� ������� � ������� ������ "�����������".',
'xs_clone_style_explain4' => '����� �� ������ ���������� ������. �� ������ ����� ���������� ��� �����, ��������� � ��� ��������. ����� ����� �� ������ ������������ ������������� tpl ����� ��� ������ ������� �� ���������� ������.',

'xs_clone_style_lc' => '���������� �����',
'xs_clone_style2' => '���������� ����� "{STYLE}":',
'xs_clone_style3' => '���������� ������ "{STYLE}"',
'xs_clone_newdir_name' => '����� ������ (�����������) ��������:',
'xs_clone_select' => '�������� ����� (�), ����� ����������:',
'xs_clone_select_explain' => '�� ������ ������� �� ������� ���� ���� �����.',
'xs_clone_newname' => '��� ������ �����:',


/*
* install/uninstall
*/
	'xs_install_styles_explain2' => '��� ������ ������ ������ ������, ������� �� �����������. ������� "�������������", ����� ������� ����� ������� �� ������ ����������, �������� ���� ��� ��������� � ������� �� ������.',
'xs_uninstall_styles_explain2' => '��� ���� ������ ��������������� �� ��� �����. ������� "���������������" ����� ������� ����� ������ ��� ��������. ���������������� �������� ���������� - ��� ������������ ��� ���������� ����������������� ����� ����� ����������� � ����� ������ �� ���������. �����, ������������ ������������� ������ ��� ��� �����.',

'xs_install' => '���������',
'xs_install_lc' => '���������',
'xs_uninstall' => '��������',
'xs_remove_files' => '�������� ������',
'xs_style_removed' => '����� ������.',
'xs_uninstall_lc' => '��������',
'xs_uninstall2_lc' => ' �������� ������',

'xs_install_back' => '<a href="{URL}">������</a> ����� ��������� � ���������� ������.',
'xs_uninstall_back' => '<a href="{URL}">������</a> ����� ��������� � ������������ �����.',
'xs_goto_default' => '<a href="{URL}">������</a> ����� �������� ����� �� ���������.',

'xs_install_installed' => '�����(�) �����������.',
'xs_install_error' => '������ ��� ��������� �����.',
'xs_install_none' => '��� ����� ������, ��� ���������. ��� ��������� ����� ��� �����������.',

'xs_uninstall_default' => '�� �� ������ ������� ����� �� ���������. �������� ����� �� ���������: <a href="{URL}">������� ����</a>.',

/*
* export theme_info.cfg
*/
	'xs_export_styles_data_explain2' => '��������� ��� �������� ����� � theme_info.cfg. ��� ����� ��� ���� ����� ���������� ���� ������ �� ������ ������ � �������.<br /><br />Note: If you are using the eXtreme Styles export feature to move a style to another forum you don\'t need to save theme_info.cfg - it is done automatically by the style export feature.',
'xs_export_styles_data_explain3' => '�������� �����, ������� �� ������ ��������������.',

'xs_export_data_back' => '<a href="{URL}">������</a> ����� ��������� �� �������� �������� ������.',
'xs_export_style_data_lc' => '���� ������� �����',

'xs_export_data_saved' => '���� ��������.',


/*
* edit templates (file manager)
*/
	'xs_edit_template_comment1' => '��������� ��� ������������� �������. ������� ���������� ������ ����� �������� ������',
'xs_edit_template_comment2' => '��������� ��� ������������� �������.',
'xs_edit_file_saved' => '���� �������.',
'xs_edit_not_found' => '���� �� ����������.',
'xs_edittpl_back_dir' => '<a href="{URL}">������</a> ����� �������� � ���������� ������.',

'xs_fileman_browser' => '������� ����',
'xs_fileman_directory' => '����������:',
'xs_fileman_dircount' => '���������� ({COUNT}):',
'xs_fileman_filter' => '������',
'xs_fileman_filter_ext' => '�������� ������ ����� � �����������:',
'xs_fileman_filter_content' => '�������� ������ ����� ������� ��������:',
'xs_fileman_filter_clear' => '�������� ������',
'xs_fileman_filename' => '��� �����',
'xs_fileman_filesize' => '������',
'xs_fileman_filetime' => '�����������',
'xs_fileman_options' => '�����',
'xs_fileman_time_today' => '(�������)',
'xs_fileman_edit_lc' => '��������������',

'xs_fileedit_search_nomatch' => '��������� �� �������',
'xs_fileedit_search_match1' => '�������� 1 ���������',
'xs_fileedit_search_matches' => "Replaced ' + count + ' matches",
'xs_fileedit_noundo' => '�� �������� �������',
'xs_fileedit_undo_complete' => '������������ ����������� ����������',
'xs_fileedit_edit_name' => '������������� ����:',
'xs_fileedit_location' => '������������:',
'xs_fileedit_reload_lc' =>'���������� �����',
'xs_fileedit_download_lc' => '��������� ����',
'xs_fileedit_trim' => '������������� ����������� ������� � ������ � ����� �����.',
'xs_fileedit_functions' => '�������������� �������',
'xs_fileedit_replace1' => '�������� ',
'xs_fileedit_replace2' => ' � ',
'xs_fileedit_replace_first_lc' => '�������� ������ match',
'xs_fileedit_replace_all_lc' =>'�������� ��� matches',
'xs_fileedit_replace_undo_lc' => '�������� ���������',
'xs_fileedit_backups' =>'��������� �����',
'xs_fileedit_backups_save_lc' =>'�������� �������� �����',
'xs_fileedit_backups_show_lc' => '�������� ����������',
'xs_fileedit_backups_restore_lc' => '������������',
'xs_fileedit_backups_download_lc' => '���������',
'xs_fileedit_backups_delete_lc' => '�������',
'xs_fileedit_upload' => '���������',
'xs_fileedit_upload_file' => '��������� ����:',

/*
* edit styles data (theme_info)
*/
	'xs_data_head_stylesheet' => 'CSS ������ ������',
'xs_data_body_background' => '������� ��������',
'xs_data_body_bgcolor' => '���� ����',
'xs_data_style_name' => '�������� �����',
'xs_data_body_link' => '���� ����������',
'xs_data_body_text' => '���� ������',
'xs_data_body_vlink' => '���� ���������� ������',
'xs_data_body_alink' => '���� �������� ������',
'xs_data_body_hlink' => '���� ������ ��� ��������� ����',
'xs_data_tr_color' => '���� ������� ������� %s',
'xs_data_tr_class' => '����� ������� ������� %s',
'xs_data_th_color' => '���� ��������� ������� %s',
'xs_data_th_class' => '����� ��������� ������� %s',
'xs_data_td_color' => '���� ������ ������� %s',
'xs_data_td_class' => '����� ������ ������� %s',
'xs_data_fontface' => '��� ������ %s',
'xs_data_fontsize' => '������ ������ %s',
'xs_data_fontcolor' => '���� ������ %s',
'xs_data_span_class' => '������ ������� %s',
'xs_data_img_size_poll' => 'Polling ������ �������� [px]',
'xs_data_img_size_privmsg' => '������ ������� ���������� ��������� [px]',
'xs_data_theme_public' => '����� ����� (1 or 0)',
'xs_data_unknown' => '�������� �� �������� (%s)',

'xs_edittpl_error_updating' => '������ ���������� �����.',
'xs_edittpl_style_updated' => '����������� �����.',
'xs_invalid_style_id' => '��������� id �����.',

'xs_edittpl_back_edit' => '<a href="{URL}">������� �����</a> ����� ��������� � ��������������.',
'xs_edittpl_back_list' => '<a href="{URL}">������� �����</a> ����� ������� ���� ������.',

'xs_editdata_explain' => '����� �� ������ ������������� ���� ������������� ������. ��������� ����� �� ���������� ���� ������, � ���������� css ����� ������ ����� ��� ��������� ���� �� ���������.',
'xs_editdata_var' => '����������',
'xs_editdata_value' => '��������',
'xs_editdata_comment' => '����������',

/*
* updates
*/

	'xs_updates' => '����������',
'xs_updates_comment' => '����� ����������� ���������� ������ � �����. ��� �������� ������ � ������, ������� ����� ����������� ���������� ������������.',
'xs_updates_comment2' => '��������� �������� ������.',
'xs_update_total1' => '�����: {NUM} ���',
'xs_update_info1' => '����� ������������� �������� ��������� ���������� phpBB, ����� � ������, ������������� �� ����� ������. ����� ��� ������� ��������� ����������, ���������� ��� �����, ��� �� ������ �������� ����������� ����.<br /><br />��� ������� �������, ����� socket� ���� ���������. ����������� ���������� �������� �� ����� �����, ���� ���� ����� ��������� �� ���������� �������� (������� lycos), ����� �� �� ������ ������������ ����������� ����������, �� ���� ���� ����� ��������� �� ���������� �������, ����� ��� ������ ��������.<br /><br />����� �� ��������� "����������", ������ ��������� ����������� ����������� ������������� �� ��� �����. ���� ��� ������� �� �������, ��� ����� ������ ��������� �����. ������ ���������, � ��� \'t ������� "����������" � ����� ��������, ���� ������� ��������. ���� ���� ������  ��� ������� ���������� �� �������, ����� ������ ����� ���������� ���������� ���������� - ���� ��� ���������, ��� �� ������ ��������� ����� timeout.',
'xs_update_name' => '���',
'xs_update_type' => '���',
'xs_update_current_version' => '���� ������',
'xs_update_latest_version' => '��������� ������',
'xs_update_downloadinfo' => '��������� URL',
'xs_update_timeout' => '������ ���������� timeout (���.):',
'xs_update_continue' => '����������',


	'xs_update_total2' => '������: {NUM}',
'xs_update_total3' => '��������� ����������: {NUM} items',
'xs_update_select1' => '�������� ����� ��� ������������',
'xs_update_types' => array(
                0 => '�����������',
                1 => '�����',
                2 => '���',
                3 => 'phpBB',
		4 => 'Icy Phoenix'
	),
	'xs_update_fileinfo' => '������ ����������',
'xs_update_nothing' => '������ ���������.',
'xs_update_noupdate' => '�� ����������� ��������� ������.',

'xs_update_error_url' => '������: �� ����� ������������ url %s',
'xs_update_error_noitem' => '������: ��� ���������� ��� ����������',
'xs_update_error_noconnect' => '������: �� ����� ���������� � �������� ����������',

'xs_update_download' => '���������',
'xs_update_downloadinfo2' => '���������/����',
'xs_update_info' => '����',

'xs_permission_denied' => '������ ��������',

'xs_download_lc' => '���������',
'xs_info_lc' => '����',

/*
* style configuration
*/
	'Template_Config' => '������������ �������',
'xs_style_configuration' => '������������ �������',
	)
);

?>