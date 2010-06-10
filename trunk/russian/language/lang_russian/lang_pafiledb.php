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
// Toplist
	'Toplist' => '������',
'Select_list' => '�������� ��� ����������� ������',
'Latest_downloads' => '����� �����',
'Most_downloads' => '�������� ���������� �����',
'Rated_downloads' => '������ �����',
'Total_new_files' => '����� downloads',
'Show' => '��������',
'One_week' => '1 ������',
'Two_week' => '2 ������',
'30_days' => '30 ����',
'New_Files' => '����� ����� ������ �� ��������� %d ����',
'Last_week' =>'��������� ������',
'Last_30_days' => '��������� 30 ����',
'Show_top' => '�������� ������',
'Or_top' => '��� ������',
'Popular_num' => '������ %d �� %d ������ � ����',
'Popular_per' => '������ %d %% �� %d ������ � ����',
'General_Info' => '����� ����������',
'Downloads_stats' => '���������� ����������',
'Rating_stats' => '���������� ������',
'Os' => '������������ �������',
'Browsers' => '��������',

// Main
	'Files' => '�����',
'Viewall' => '�������� ��� �����',
'Vainfo' => '�������� ��� ����� � ����',
'Jump' => '�������� ���������',
'Sub_category' => '������������',
'Last_file' => '��������� ����',

// Sort
	'Sort' => '�����������',
'Name' => '���',
'Update_time' => '��������� ����������',


// Category
	'No_files' => '����� �� �������',
'No_files_cat' => '��� ������ � ���� ���������.',
'Cat_not_exist' => '��������� ��������� �� ����������.',
'File_not_exist' => '��������� ���� �� ����������.',
'License_not_exist' => '��������� �������� �� ����������.',

// File
	'File' => '����',
'Desc' => '��������',
'Creator' => '�����',
'Version' => '������',
'Scrsht' => '��������',
'Docs' => '����',
'Lastdl' => '��������� ����������',
'Never' => '�������',
'Votes' => ' �������',
'Date' => '����',
'Update_time' => '��������� ����������',
'DlRating' => '������',
'Dls' => ' ����������',
'Downloadfile' => '������� ����',
'File_size' => '������ �����',
'Not_available' => '����������!',
'Bytes' => '����',
'KB' => '��������',
'MB' => '��������',

'Mirrors' => '�������',
'Mirrors_explain' => '����� �� ������ �������� ��� ��������������� ������, ��������� ��� ���������� �����������!',
'Click_here_mirrors' => '������� ����� ��� ���������� �������',
'Mirror_location' => '�������',
'Add_new_mirror' => '��������',

//User Upload
	'User_upload' => '�������',

// License
	'License' => '������������ ����������',
'Licensewarn' => '�� ������ ������� ������������ ���������� ����� �����������',
'Iagree' => '� ��������',
'Dontagree' => '� �� ��������',

// Search
	'Search' => '������',
'Search_for' => '������',
'Results' => '���������� ���',
'No_matches' => '��������, ��� ������������ ���',
'Matches' => '������������ ������� ���',
'All' => '��� ���������',
'Choose_cat' => '�������� ���������:',
'Include_comments' => '�������� �����������',
'Submiter' => '���������',

// Statistics
'Statistics' => '����������',
'Select_chart_type' => '�������� ��� �������',
'Bars' => '��������',
'Lines' => '�����',
'Area' => '�������',
'Linepoints' => '����� �����',
'Points' => '�����',
'Chart_header' => '���������� ������ - ����������� � ���� ������ �����',
'Chart_legend' => '�����',
'X_label' => '������',
'Y_label' => '�����',

// Rate
	'Rate' => '������� ����',
'Rerror' => '��������, �� ��� ���������� �� ���� ����.',
'Rateinfo' => '�� ������ ������� ���� <i>{filename}</i>.<br>����������, �������� ������ ����. 1 - ����� ������, 10 - ����� ������.',
'Rconf' => '�� ���� ����� <i>{filename}</i> {rate} ������.<br>����� ������� ����� {newrating}.',
'R1' => '1',
'R2' => '2',
'R3' => '3',
'R4' => '4',
'R5' => '5',
'R6' => '6',
'R7' => '7',
'R8' => '8',
'R9' => '9',
'R10' => '10',
'Not_rated' => '��� ������',

// Email
	'Emailfile' => '��������� �� E-mail',
'Emailinfo' => '���� �� ������ ���������� ����� �� ���� �����, �� �� ������ ��������� � ��������� ��� ����� � e-mail, ���������� ���������� � ����� ����� ��������� �����!<br>����, ���������� * ����������� ��� ����������',
'Yname' => '���� ���',
'Yemail' => '��� E-mail �����',
'Fname' => '��� �����',
'Femail' => 'E-mail �����',
'Esub' => '���� E-mail',
'Etext' => '����� E-mail',
'Defaultmail' => '� �����, ��� �� ������ ���� �������������� �',
'Semail' => '��������� E-mail',
'Econf' => '��� e-mail ������� ���������.',

// Comments
	'Comments' => '�����������',
'Comments_title' => '��������� �����������',
'Comment_subject' => '���� �����������',
'Comment' => '�����������',
'Comment_explain' => '������� ����� � ����� � ���� ����!',
'Comment_add' => '�������� �����������',
'Comment_delete' => '�������',
'Comment_posted' => '��� ����������� ������� ��������',
'Comment_deleted' => '����������� ������� ������',
'Comment_desc' => '��������',
'No_comments' => '��� ������������.',
'Links_are_ON' => '������ <u>��������</u>',
'Links_are_OFF' => '������ <u>���������</u>',
'Images_are_ON' => '����������� <u>��������</u>',
'Images_are_OFF' => '����������� <u>���������</u>',
'Check_message_length' => '��������� ����� ���������',
'Msg_length_1' => '���� ��������� ������� �� ',
'Msg_length_2' => ' ��������.',
'Msg_length_3' => '� ��� ���� ',
'Msg_length_4' => ' ��������.',
'Msg_length_5' => '� ��� �������� ',
'Msg_length_6' => ' ��������.',


// Download
	'Directly_linked' => '�� �� ������ ������� ���� ���� � ������� ����� ��������!',

//Permission
	'Sorry_auth_view' => '��������, �� ������ %s ����� ������������� ��� ���������.',
'Sorry_auth_file_view' => '��������, �� ������ %s ����� ������������� ���� ����.',
'Sorry_auth_upload' => '��������, �� ������ %s ����� ���������� ����� � ��� ���������.',
'Sorry_auth_download' => '��������, �� ������ %s ����� ��������� ����� � ���� ���������.',
'Sorry_auth_rate' => '��������, �� ������ %s ����� ��������� ����� � ���� ���������.',
'Sorry_auth_view_comments' => '��������, �� ������ %s ����� ������������� ����������� � ���� ���������.',
'Sorry_auth_post_comments' => '��������, �� ������ %s ����� ��������� ����������� � ���� ���������.',
'Sorry_auth_edit_comments' => '��������, �� ������ %s ����� ������������� ����������� � ���� ���������.',
'Sorry_auth_delete_comments' => '��������, �� ������ %s ����� ������� ����������� � ���� ���������.',
// MX
	'Sorry_auth_edit' => '��������, �� �� �� ������ ������������� ����� � ���� ���������.',
'Sorry_auth_delete' => '��������, �� �� �� ������ ������� ����� � ���� ���������.',
'Sorry_auth_mcp' => '��������, �� �� �� ������ ������������ ��� ���������.',
'Sorry_auth_approve' => '��������, �� �� �� ������ ��������� ����� � ���� ���������.',


// General
	'Category' => '���������',
'Error_no_download' => '��������� ���� ����� �� ����������',
'Options' => '�����',
'Click_return' => '������� %s�����%s ��� �������� � ���������� ��������',
'Click_here' => '������� �����',
'never' => '���',
'pafiledb_disable' => '���� ���������� ���������',
'jump' => '�������� ���������',
'viewall_disabled' => '��� ������� ��������� ���������������.',
'New_file' => '����� ����',
'No_new_file' => '��� ����� ������',
'None' => '���',
'No_file' => '��� ������',
'View_latest_file' => '�������� ��������� ����',

// Toplists mx blocks
	'Recent_Public_Files' => 'Latest dls',
'Random_Public_Files' => 'Random dls',
'Toprated_Public_Files' => 'Toprated dls',
'Most_Public_Files' => '����� �����������',
'File_Title' => '��������',
'File_Desc' => '��������',
'Rating' => '������',
'Dls' => '������',

// MX Addon
	'Deletefile' => '������� ����',
'Editfile' => '������������� ����',
'pa_MCP' => '[���������]',
'Click_return_not_validated' => '������� %s�����%s ��� �������� � ���������� ��������',
	)
);

$lang['Stats_text'] = "����  {total_files} �����  {total_categories} ��������� <br />";
$lang['Stats_text'] .= "��� ����  {total_downloads} �������� ����� <br /><br />";
$lang['Stats_text'] .= "�������� ����  <a href={u_newest_file}>{newest_file}</a><br />";
$lang['Stats_text'] .= "������ ����  <a href={u_oldest_file}>{oldest_file}</a><br /><br />";
$lang['Stats_text'] .= "������� ������� �����  {average}/10<br />";
$lang['Stats_text'] .= "����� ���������� ���� �� ������ ���������  <a href={u_popular}>{popular}</a> � ���������  {most}/10<br />";
$lang['Stats_text'] .= "�������� ���������� ���� �� ������ ���������  <a href={u_lpopular}>{lpopular}</a> � ���������  {least}/10<br /><br />";
$lang['Stats_text'] .= "������� ���������� ���������� ������� ����� ���� ���  {avg_dls}<br />";
$lang['Stats_text'] .= "����� ���������� ���� �� ������ �������� ��������  <a href={u_most_dl}>{most_dl}</a> with {most_no} �������� <br />";
$lang['Stats_text'] .= "�������� ���������� ���� �� ������ �������� ��������  <a href={u_least_dl}>{least_dl}</a> with {least_no} �������� <br />";

?>