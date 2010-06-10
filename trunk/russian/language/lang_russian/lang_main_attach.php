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
* (c) 2002 Meik Sievertsen (Acyd Burn)
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
// Auth Related Entries
/*
	'Rules_attach_can' => 'You <b>can</b> attach files in this forum',
	'Rules_attach_cannot' => 'You <b>cannot</b> attach files in this forum',
	'Rules_download_can' => 'You <b>can</b> download files in this forum',
	'Rules_download_cannot' => 'You <b>cannot</b> download files in this forum',
*/
	'Rules_attach_can' => '�� <b>������</b> ����������� ����� � ���� ������',
'Rules_attach_cannot' => '�� <b>�� ������</b> ����������� ����� � ���� ������',
'Rules_download_can' => '�� <b>������</b> ��������� ����� � ���� ������',
'Rules_download_cannot' => '�� <b>�� ������</b> ��������� ����� � ���� ������',
'Sorry_auth_view_attach' => '��������, �� ��� �� ��������� ������������� ��� ��������� ��������',

// Viewtopic -> Display of Attachments
	'Description' => '��������',// used in Administration Panel too...
'Downloaded' => '������',
'Download' => '�������', // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
'Filesize' => '������ �����',
'Viewed' => '�����������',
'Download_number' => '%d ���', // replace %d with count
'Extension_disabled_after_posting' => '���������� \'%s\' ��������� ���������������, ������� ���� ���� �� ����� ���� ����������.', // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
	'Attach_posting_cp' => '������ ���������� ����������',
'Attach_posting_cp_explain' => '���� �� ������� �� ���������� ����, �� �� ������� ���������� ��� ������������ ������.<br />���� �� ������� �� ������������� �����, �� �� ������� ������ ��� ������������� ������ � ������� �� ���������������.<br />���� �� ������ �������� (�������� ����� ������) ��������, �� ��� ���� �������� �� ���� �������. �������� ��������, �����, �� ������� ������ �������, ������� �� ������ �������� �������� ��� ���������� �����.',

// Posting/PM -> Posting Attachments
	'Add_attachment' => '���������� ����',
'Add_attachment_title' => '���������� ����',
'Add_attachment_explain' => '���� �� �� ������ ����������� ����, �� �������� ���� �������',
'File_name' => '��� �����',
'File_comment' => '�����������',

// Posting/PM -> Posted Attachments
	'Posted_attachments' => '������������� �����',
'Options' => '�����',
'Update_comment' => '�������� �����������',
'Delete_attachments' => '������� ��������',
'Delete_attachment' => '������� ��������',
'Delete_thumbnail' => '������� �����������',
'Upload_new_version' => '�������� ����',


// Errors -> Posting Attachments
	'Invalid_filename' => '%s - ������������ ��� �����', // replace %s with given filename
'Attachment_php_size_na' => '���� ������� �������.<br />�� ������ �������� ����. ������ � PHP.<br />������ �������� �� ����� ���������� ������ � php.ini.',
'Attachment_php_size_overrun' => '�������� ������� �������.<br />������������ ������: %d ��.<br />��������, ��� ������ ������ � php.ini, ��� �������� ����������� PHP � ������ �������� �� ����� ������ ��� ��������.', // replace %d with ini_get('upload_max_filesize')
'Disallowed_extension' => '���������� %s �� ���������', // replace %s with extension (e.g. .php)
'Disallowed_extension_within_forum' => '��� �� ��������� ��������� ����� � ����������� %s � ���� ������', // replace %s with the Extension
'Attachment_too_big' => '�������� ������� �������.<br />����. ������: %d %s', // replace %d with maximum file size, %s with size var
'Attach_quota_reached' => '��������, ������������ ������ ���� �������� ��������. ��������� � ��������������� ������� ��� ���������.',
'Too_many_attachments' => '�������� �� ����� ���� ���������, �.�. ������������ ���-�� �������� ( %d ) � ���� ��������� ����������', // replace %d with maximum number of attachments
'Error_imagesize' => '��������/����������� ������ ���� ������ %d ������ �� %d ������',
'General_upload_error' => '������ �������: �� ������� �������� �������� � %s.',// replace %s with local path

'Error_empty_add_attachbox' => '��� ���� ������ ������ � \'���������� ����\'',
'Error_missing_old_entry' => '�� ������� �������� ��������, �� ������� ����� ������ ��������',

// Errors -> PM Related
	'Attach_quota_sender_pm_reached' => '��������, �� ������������ ������ �������� � ����� ����� �� ��������. ����������, ������� ��������� ���������.',
'Attach_quota_receiver_pm_reached' => '��������, �� ������������ ������ �������� � ����� �� \'%s\' ��������. ����������, ��������� ��� ��� ��������� �������� �������������.',

// Errors -> Download
	'No_attachment_selected' => '�� �� ������� �������� ��� ��������� ��� ����������.',
'Error_no_attachment' => '��������� �������� �� ����������',

// Delete Attachments
	'Confirm_delete_attachments' => '�� ������������� ������ ������� ��������� ��������?',
'Deleted_attachments' => '��������� �������� ���� �������.',
'Error_deleted_attachments' => '�� ������� ������� ��������.',
'Confirm_delete_pm_attachments' => '�� ������ ������� ��� �������� � ���� ��?',

// General Error Messages
	'Attachment_feature_disabled' => '�������� ���������.',

'Directory_does_not_exist' => '����� \'%s\' �� ���������� ��� �� ����� ���� �������.', // replace %s with directory
'Directory_is_not_a_dir' => '����������, ���������, ��� \'%s\' - ��� �����.', // replace %s with directory
'Directory_not_writeable' => '����� \'%s\' ������ ��� ������. ��� ���� ������� ����� � ������� chmod �� 777 (��� ������� ������������ �� ��������� httpd) ��� ������� ������.<br />���� � ��� ���� ������ FTP ������, �� ������� \'�������\' ����� �� rwxrwxrwx.', // replace %s with directory

'Ftp_error_connect' => '�� ������� ����������� � FTP-��������: \'%s\'. Please check your FTP-Settings.',
'Ftp_error_login' => '�� ������� ����� �� FTP-������. ��� ������������ \'%s\' ��� ������ �������. ����������, ��������� ���������.',
'Ftp_error_path' => '�� ������� �������� ������ �: \'%s\'. ��������� ���� ���������.',
'Ftp_error_upload' => '�� ������� �������� ����� �: \'%s\'. ��������� ���� ���������.',
'Ftp_error_delete' => '�� ������� ������� ����� �: \'%s\'. ��������� ���� ���������.<br />������ �������� ����� ���� ��������������� ��������.',
'Ftp_error_pasv_mode' => '�� ������� ��������/��������� ��������� ����� FTP',

// Attach Rules Window
	'Rules_page' => '������� ��������',
'Attach_rules_title' => '����������� �������� � �� �������',
'Group_rule_header' => '%s -> ������������ ������: %s', // Replace first %s with Extension Group, second one with the Size STRING
'Allowed_extensions_and_sizes' => '����������� ���������� � �������',
'Note_user_empty_group_permissions' => '����������:<br />�� ��������� ��� ��������� ����������� ����� � ������, <br />�� ���� ���������� ����� �� �������, <br />�� �� �� ������� ������ ����������. ���� �� ����������, <br />�� �� �������� ��������� �� ������.<br />',

// Quota Variables
'Upload_quota' => '����� �������',
'Pm_quota' => '����� ��',
'User_upload_quota_reached' => '��������, �� ��������� ��� ����� ����� %d %s', // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
'User_acp_title' => '������ ������������',
'UACP' => '������ ���������� ������������',
'User_uploaded_profile' => '��������: %s',
'User_quota_profile' => '�����: %s',
'Upload_percent_profile' => '%d%% �����',

// Common Variables
'Bytes' => '����',
'KB' => 'K�',
'MB' => 'M�',
'Attach_search_query' => '����� ��������',
'Test_settings' => '�������� ��������',
'Not_assigned' => '�� �������',
'No_file_comment_available' => '��� �����������',
'Attachbox_limit' => '��� ���� �������� �������� �� %d%%',
'No_quota_limit' => '��� �����������',
'Unlimited' => '��������������',
	)
);

?>