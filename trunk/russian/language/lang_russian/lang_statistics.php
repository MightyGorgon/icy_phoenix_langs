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
* Nivisec.com (support@nivisec.com)
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

// Original Statistics Mod (c) 2002 Nivisec - http://nivisec.com/mods

$lang = array_merge($lang, array(
// If you want to credit the Author on the Statistics Page, uncomment the second line.
// 'Version_info' => '<br />Statistics Mod Version %s', //%s = number
	'Version_info' => '<br />Statistics recoded by <a href="http://www.icyphoenix.com/">Mighty Gorgon</a> based on Statistics Mod Version %s &copy; 2002 <a href="http://www.opentools.de/board">Acyd Burn</a>',

// These Language Variables are available for all installed Modules
	'Rank' => '������',
'Percent' => '�������',
'Graph' => '������',
'Uses' => '����������',
'How_many' => '�������',

// Main Language

// Page Header/Footer
	'Install_info' => '����������� %s', //%s = date
'Viewed_info' => '�������� ���������� ��������� %d ���', //%d = number
'Statistics_title' => '���������� ������',


// Admin Language
	'Statistics_management' => '������ ����������',
'Statistics_config' => '������������ ����������',

// Statistics Config
	'Statistics_config_title' => '������������ ����������',

'Return_limit' => '����� �������',
'Return_limit_desc' => '���������� �������, ���������� � ������ ������. �������� ����� ������������� ��������� ��������, ���� ������� �����.',
'Clear_cache' => '�������� ��� �������',
'Clear_cache_desc' => '�������� ���� ��� �������',
'Modules_directory' => '����� �������',
'Modules_directory_desc' => '����� phpBB, ��� ����������� ��� ������. ��������, ��� / ��� \ �� ������ ���� �����������!',

// Status Messages
	'Messages' => '��������� ��������������',
'Updated' => '���������',
'Active' => '�������',
'Activate' => '������������',
'Activated' => '������������',
'Not_active' => '���������',
'Deactivate' => '��������������',
'Deactivated' => '��������������',
'Install' => '����������',
'Installed' => '�����������',
'Uninstall' => '�������',
'Uninstalled' => '�������',
'Move_up' => '�����',
'Move_down' => '����',
'Update_time' => '����� ����������',
'Auth_settings_updated' => '��������� ����������� - [��������� ���������]',

// Modules Management
	'Back_to_management' => '��������� � �������� ���������� ��������',
'Statistics_modules_title' => '������ ����������',

'Module_name' => '���',
'Directory_name' => '��� �����',
'Status' => '���������',
'Update_time_minutes' => '����� ���������� � �������',
'Update_time_desc' => '�������� (� �������) �� ���������� ������.',
'Auto_set_update_time' => '���������� � ���������� ������������� �������� ��� ������� ��������� � �������������� ������. ��������, ��� ��� ����� ������ �������.',
'Uninstall_module' => '������� ������',
'Uninstall_module_desc' => '�������� ������ ��� "�� ����������", ��� ��� �� ������ ���������� ��� ������. ������ �� ��������� �� ����� �������, ���� �������� ������� ������� ������ ��� ������� ��������.',
'Active_desc' => '�����, ���� ������ �������, �� �� ����� ������� � ����������� �� ����������.',
'Go' => '������',
'Update_Modules' => '���������� �������',

'Not_allowed_to_install' => '�� �� ������ ���������� ���� ������. ���� ����� ��� ����������, ���� �� ���������� ������, �� �������� ������� ���� ������. ����������, ��������� � ������� ����� ������, ���� � ��� ���� ������� � ���� ��� ���������� �� �������� ���.',
'Wrong_stats_mod_version' => '�� �� ������ ���������� ���� ������, ������ ��� ������ ������ ������ ���������� �� ������������� ������, ����������� ������. ��� ��������� ������ ��� ����� ������ %s ��� ����.', // replace %s with Version (2.1.3 for example)
'Module_install_error' => '��������� ������ ��� ��������� ������� ������. ������ ����� ��������� ������� SQL �� ����� ���� ���������, ��������� ������ ����.',

'Preview_debug_info' => '���� ������ ��� ������������ �� %f ������: %d �������� ���������.', // Replace %f with seconds and %d with queries
'Update_time_recommend' => '������ ���������� (� ����������� �� ��������) ����� ����� ����������: <b>%d</b> �����.', // Replace %d with Minutes

// Modules

	'module_name __ stats_overview_section' => '������� ����� ����������',

 'module_name_admin_statistics' => '���������������� ����������',
 'Statistic' => '����������',
 'Value' => '��������',
 'Number_posts' => '����������� ��������',
 'Posts_per_day' => '��������� � ����',
 'Number_topics' => '����������� ���',
 'Topics_per_day' => '���� � ����',
 'Number_users' => '����������� �������������',
 'Users_per_day' => '������������� � ����',
 'Board_started' => '����� �������',
 'Avatar_dir_size' => '������ �������� Avatar',
 'Database_size' => '������ ���� ������',
 'Gzip_compression' => '������ Gzip',
 'Not_available' => '�� ���������',
 'Board_Up_Days' => '����� ���',
 'Latest_Reg_User' => '��������� ������������������ ������������',
 'Latest_Reg_User_Date' => '���� ����������� ���������� ������������',
 'Most_Ever_Online' => '����������� ������������� �����-���� ������',
 'Most_Ever_Online_Date' => '����������� ������������� �����-���� ������� ����',
 'Disk_usage' => '�������� �������������',
 'Title' => '������� ����������� ��������� ������������',
 'Average_Posts' => '������� ����������� ��������� ������������:',

 'module_name_average_posts_per_user' => '������� ����� �� ������������',

 'module_name_age_clusters' => '�������� ��������',
 'AGE' => '�������',
 'LESS_THAN' => '������ ���',
 'MORE_THAN' => '������ ���',

 'module_name_fastest_users' => '����� ������ ������������',
 'time_on_forum' => '���� �� ������',
 'posts_day' => '��������� � ����',
 'Statistics' => '����������',

 'module_name_interesting_topics' => '����������� ���������� ���',
 'Rate' => '����� (���������/���������)',
 'Topic' => '����',

 'module_name_latest_topics' => '��������� ����',
 'Rank' => '����',
 'Latest_Topics' => '��������� ����',
 'Post_time' => '�������� �����',

 'module_name_month_stat' => '���������� �� �����',
 'New_users' => '����� �������������',
 'New_replies' => '����� �������',
 'New_topics' => '����� ���',
 'Avg_Table' => '������� ����� �������',
 'Sum_Table' => '����� �������',

 'module_name_most_active_topics' => '����������� �������� ���',

 'module_name_most_active_topicstarter' => '����� �������� ������������ � �����',

 'module_name_most_logged_on_users' => '�������� �������� ������������',
 'Time2' => '����� �����',

 'module_name_most_used_languages' => '�����',
 '����' => '����',

 'module_name_most_used_styles' => '�����',
 'Style' => '�����',

 'module_name_most_viewed_topics' => '�������� ��������������� ����',
 'Month_jan' => '������',
 'Month_feb' => '�������',
 'Month_mar' => '����',
 'Month_apr' => '������',
 'Month_may' => '���',
 'Month_jun' => '����',
 'Month_jul' => '����',
 'Month_aug' => '������',
 'Month_sep' => '��������',
 'Month_oct' => '�������',
 'Month_nov' => '������',
 'Month_dec' => '�������',
 'Year' => '���',
 'Month' => '�����',
 'Number' => '�����',

	'module_name_new_posts_by_month' => '����� ��������� �� �����',
 'Posts_month' => '����������� ����� ��������� �� ������',

 'module_name_new_topics_by_month' => '����� ��� �� �����',
 'Topics_month' => '����������� ����� ��� �� �����',

 'module_name_new_users_by_month' => '����� ������������� �� �����',
 'Signup_month' => '���������� ����� ������������� �� �����',

 'module_name_posting_by_day_of_week' => '������ �� ������: ���������',
 'Traffic_posts' => '������ �� ������: �������� �����������',
 'Dow' => '����',

 'module_name_registrations_by_day_of_week' => '������ �� ������: �����������',
 'Traffic_reg' => '������ �� ������: �����������',
 'New_users' => '����� ������������',

 'module_name_site_hist_daily_stats_current_week' => '���������� ���������� �� ������',

 'module_name_site_hist_hours_stats_current_day' => '���������� �� ������� ����',

 'module_name_site_hist_month_top_posters' => '�������� ����������� ������������� �� �����',
 'Month_Var' => '[%s]',// %s will be replaced by the current Month

 'module_name_site_hist_monthly_stats_current_year' => '����������� ���������� �� ���',

 'module_name_site_hist_week_top_posters' => '�������� ����������� ������������� �� ������',
 'Week_Var' => '[%s]',// %s will be replaced by the current Week

 'module_name_top_attachments' => '�������� ����������� �����',
 'File_name' => '��� �����',
 'File_comment' => '����������� �����',

 'module_name_top_posters' => '��������� �������',

 'module_name_top_smilies' => '�������� ������������ ��������',
 'smiley_url' => '�����������',
 'smiley_code' => '���',

 'module_name_top_words' => '�������� ������������ �����',
 'Word' => '�����',
 'Uses2' => '�������������',

 'module_name_topics_by_day_of_week' => '������ �� ������: ����',
 'Traffic_topics' => '������ �� ������: ����',
 'Dow' => '����',

 'module_name_users_from_where' => '�������������� ������������',
 'From_where_title' => '��� ������������',
 'From_where' => '���',

 'module_name_users_gender' => '���',
 '������������' => '������������',

 'module_name_users_ranks' => '������',
 'Rank_image' => '����������� ������',
 'Rank_range' => '��������� ���������',
 'Rank_special' => '�������������� ������',
	)
);

?>