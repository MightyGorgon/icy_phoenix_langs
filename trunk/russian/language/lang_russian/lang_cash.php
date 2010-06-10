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
* Xore (mods@xore.ca)
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

// Admin menu
$lang ['Cmcat_main'] = '�������';
$lang ['Cmcat_addons'] = '����������';
$lang ['Cmcat_other'] = '������';
$lang ['Cmcat_help'] = '������';

$lang ['Cash_Configuration'] = 'Cash&nbsp; ������������';
$lang ['Cash_Currencies'] = 'Cash&nbsp; ������';
$lang ['Cash_Exchange'] = 'Cash&nbsp; �����';
$lang ['Cash_Events'] = 'Cash&nbsp; �������';
$lang ['Cash_Forums'] = 'Cash&nbsp; ������';
$lang ['Cash_Groups'] = 'Cash&nbsp; ������';
$lang ['Cash_Help'] = 'Cash&nbsp; ������';
$lang ['Cash_Logs'] = 'Cash&nbsp; ����� �����������';
$lang ['Cash_Settings'] = 'Cash&nbsp; ��������� ���������';

$lang ['Cmenu_cash_config'] = '���������� �������� ����������������� ��������� ���������, ������� ����������� ��� ������';
$lang ['Cmenu_cash_currencies'] = '���������, ������� ��� ��������������� ������';
$lang ['Cmenu_cash_settings'] = '������������ ��������� ��������� ��� ������ ������';
$lang ['Cmenu_cash_events'] = '�������� ����������, ����� �������� �� ���������������� ��������';
$lang ['Cmenu_cash_reset'] = '����� ��� ���������� �������� ����� ���������';
$lang ['Cmenu_cash_exchange'] = '���������/��������� ������ ������, �������� �����';
$lang ['Cmenu_cash_forums'] = '������ �������� ���. ��� ����. ��� ������� ������';
$lang ['Cmenu_cash_groups'] = '�������� ��������� ��������� ��� ������������� usergroups, ������ � ������';
$lang ['Cmenu_cash_log'] = '�������������/������� ������������������ �������� ����������������� ��������';
$lang ['Cmenu_cash_help'] = '��������  ��������';

// Config
$lang ['Cash_config'] = '�������� ����������������� ������������';
$lang ['Cash_config_explain'] = '����� ���� �������� ����������������� ������������.';

$lang ['Cash_admincp'] = '�������� ����� ������� ��������';
$lang ['Cash_adminnavbar'] = '�������� ������ ������';
$lang ['Sidebar'] = '������';
$lang ['Menu'] = '����';

$lang ['Messages'] = '���������';
$lang ['Spam'] = '����';
$lang ['Click_return_cash_config'] = '������� %s�����%s, ����� ������������ � �������� ����������������� ������������';
$lang ['Cash_config_updated'] = '�������� ����������������� ������������, ����������� �������';
$lang ['Cash_disabled'] = '��������� ��������� �������';
$lang ['Cash_message'] = '����� ������ � ������������� �����/������ ���������� �� ������';
$lang ['Cash_display_message'] = '���������, ����� ���������� ���������������� ������';
$lang ['Cash_display_message_explain'] = '������ ����� ����� ����" %s" � ���';
$lang ['Cash_spam_disable_num'] = '���������� ���������, ����� ��������� ����� ����� (�������������� �����)';
$lang ['Cash_spam_disable_time'] = '������ �������, �� �������� ��� ����� ������ ��������� (����)';
$lang ['Cash_spam_disable_message'] = '���������� ����� �� ������� ������';

// Currencies
$lang ['Cash_currencies'] = '�������� ����������������� ������';
$lang ['Cash_currencies_explain'] = '��������� ������ ��������.';

$lang ['Click_return_cash_currencies'] = '������� %s�����%s, ����� ������������ � �������� ����������������� �������';
$lang ['Cash_currencies_updated'] = '�������� ����������������� ������, ����������� �������';
$lang ['Cash_field'] = '����';
$lang ['Cash_currency'] = '������';
$lang ['Name_of_currency'] = '�������� ������';
$lang ['Default'] = '�� ���������';
$lang ['Cash_order'] = '�����';
$lang ['Cash_set_all'] = '����� ��� ���� �������������';
$lang ['Cash_delete'] = '������� ������';
$lang ['Decimals'] = '���������� �����';

$lang ['Cash_confirm_copy'] = '�������� ����� ������������ \%s ������ � %s? <br/> ��� �� ����� ���� ����������';
$lang ['Cash_confirm_delete'] = '������� %s? <br/> ��� �� ����� ���� ����������';

$lang ['Cash_copy_currency'] = '������ ������ �����';

$lang ['Cash_new_currency'] = '������� ����� ������';
$lang ['Cash_currency_dbfield'] = '���� Database ��� ������';
$lang ['Cash_currency_decimals'] = '����� ���������� ����� ��� ������';
$lang ['Cash_currency_default'] = '�������� �� ��������� ��� ������';

$lang ['Bad_dbfield'] = '������ ��� ����, ������ ���� � ����� \'user_word \' <br/> <br/> %s <br/> <br/> �������: <br/> user_points <br/> user_cash <br/> user_money <br/> user_warnings <br/> <br/> ';
// 0 currencies (most admin panels won't work... )
$lang['Insufficient_currencies'] = '�� ������ ������� ������ ������, ��� �� ������� �������� ��������� ���������';

// Add-ons ?

// Events
$lang ['Cash_events'] = '�������� ����������������� �������';
$lang ['Cash_events_explain'] = '�������� ������ ������ ����������, ����� ���� ������ ��� �������� �������.';

$lang ['No_events'] = '������� �������, �������������';
$lang ['Existing_events'] = '������������ �������';
$lang ['Add_an_event'] = '��������� ������';
$lang ['Cash_events_updated'] = '�������� �������, ����������� �������';
$lang ['Click_return_cash_events'] = '������� %s�����%s, ����� ������������ � �������� ��������';

//Reset
$lang ['Cash_reset_title'] = '�������� ����������������� �����';
$lang ['Cash_reset_explain'] = '������������ ���������� ����� ���� ������������� \' �������� ����������';

$lang ['Cash_resetting'] = '����� �������� �����';
$lang ['User_of'] = '������������ %s %s';

$lang ['Set_checked'] = '����� �������� ������';
$lang ['Recount_checked'] = '�������� �������� ������';

$lang ['Cash_confirm_reset'] = '������������ ����� ��������� �����? <br/> ��� �� ����� ���� ����������';
$lang ['Cash_confirm_recount'] = '������������ �������� ��������� �����? <br/> ��� �� ����� ���� ����������. <br/> <br/> ��� �������� �� ������������� ��� ���� � ������� ������� ���������� ������������� �/��� ���. <br/> <br/> �������������, ����� �� ��������� ���� �����, � �� ����� ��� ��� �������� ����������. <br/> �� ������ ��������� ���� ����� ����� %sConfiguration%s';

$lang ['Update_successful'] = '�������� ����������!';
$lang ['Click_return_cash_reset'] = '������� %s�����%s, ����� ������������ � ��������� ������';
$lang ['User_updated'] = '%s ����������� <br/>';

// Others

// Exchange
$lang ['Cash_exchange'] = '�������� ����������������� �����';
$lang ['Cash_exchange_explain'] = '����� ������������� �������� ����� �����, � ���� ����������� ������������� ��������.';

$lang ['Exchange_insufficient_currencies'] = '�� ��������� \'t, ����� ���������� ������ ������, ���������, ����� ������� �������� ����� <br/>, �� ������� ���� 2 ���������';
// Forums
$lang ['Forum_cm_settings'] = '�������� ����������������� ��������� ��������� ������';
$lang ['Forum_cm_settings_explain'] = '�����, � ����� ������� ���� �������� ������, ����������';
// Groups
$lang ['Cash_groups'] = '�������� ����������������� ������';
$lang ['Cash_groups_explain'] = '����� ����������� ���������� �� ������, usergroups, ��������������� � ����������';

$lang ['Click_return_cash_groups'] = '������� %s�����%s, ����� ������������ � �������� �������';
$lang ['Cash_groups_updated'] = '�������� ������, ����������� �������';

$lang ['Set'] = '�����';
$lang ['Up'] ='';
$lang ['Down'] = '����';

// Help
$lang ['Cmh_support'] = '�������� ����������������� ���������';
$lang ['Cmh_troubleshooting'] = '�����������';
$lang ['Cmh_upgrading'] = '����������';
$lang ['Cmh_addons'] = '����������';
$lang ['Cmh_demo_boards'] = '���������������� ������';
$lang ['Cmh_translations'] = '����������';
$lang ['Cmh_features'] = '�����������';

$lang ['Cmhe_support'] = '����� ����������';
$lang ['Cmhe_troubleshooting'] = '���� �� \'re, ������� �������� � �������� ��������, ��������� ����� ��� ��������������';
$lang ['Cmhe_upgrading'] = '� ��� � ��������� ����� ���� ������ %s, ���������� ����� ���������������� ����� � ��������� ������';
$lang ['Cmhe_addons'] = '������ ��������, ������� ���������� � ����� ��������� �������� ����������������� \'s �����������';
$lang ['Cmhe_demo_boards'] = '������ ��������� ���������������� ����, ������� ���������� ��������� �������';
$lang ['Cmhe_translations'] = '������ ���������� ��� ��������� �������';
$lang ['Cmhe_features'] = '������ �������� ����������������� ������������ \'s, � ���������� �� ������� �������';

// Logs
$lang['Logs'] = '�������� ����� �����������';
$lang['Logs_explain'] = '������������������ �������� ����������������� �������';

// Settings
$lang ['Cash_settings'] = '�������� ����������������� ��������� ���������';
$lang ['Cash_settings_explain'] = '����������� ��� ��������� ��������� ������.';


$lang ['Display'] = '�������';
$lang ['Implementation'] = '����������';
$lang ['Allowances'] = '�������';
$lang ['Allowances_explain'] = '������� ������� ��������� ������������������ ���������� � ��������� �������';
$lang ['Click_return_cash_settings'] = '�������� %sHere%s, ����� ������������ � �������� ����������������� ���������� ���������';
$lang ['Cash_settings_updated'] = '�������� ����������������� ��������� ���������, ����������� �������';

$lang ['Cash_enabled'] = '��������� ������';
$lang ['Cash_custom_currency'] = '�������� ������ ��� ��������� �������';
$lang ['Cash_image'] = '���������� ������ ��� �����������';
$lang ['Cash_imageurl'] = '����������� (������������ �������� ������� �������� ����):';
$lang ['Cash_imageurl_explain'] = '���������� ���, ����� ���������� ��������� �����������, ��������� � �������';
$lang ['Prefix'] = '�������';
$lang ['Postfix'] = '��������';
$lang ['Cash_currency_style'] = '����� ������ ��� ��������� �������';
$lang ['Cash_currency_style_explain'] = '����������� �������� ������� ���'. $lang ['Prefix']. '���'. $lang ['Postfix'];
$lang ['Cash_display_usercp'] = '����� ������ � UserCp';
$lang ['Cash_display_userpost'] = '����� ������ � �������� ������������';
$lang ['Cash_display_memberlist'] = '����� ������ � Memberlist';

$lang ['Cash_amount_per_post'] = '����� ���������, ������������ �� ����� ����';
$lang ['Cash_amount_post_bonus'] = '���������� �������� ����� ������, ������������ �� ����� ��� ����, �������';
$lang ['Cash_amount_per_reply'] = '����� ���������, ������������ �� �����';
$lang ['Cash_amount_per_character'] = '����� ���������, ������������ �� ������';
$lang ['Cash_amount_per_thanks'] = '����� ���������, ������������ �� �������, ����������';
$lang ['Cash_maxearn'] = '������������ ����� ���������, ������������ ��� ����, ����� ���������';
$lang ['Cash_amount_per_pm'] = '����� ���������, ������������ ��� ���������� �������� ���������';
$lang ['Cash_include_quotes'] = '�������� �������, �������� �������� ������ �� ������';
$lang ['Cash_exchangeable'] = '��������� ������������� ���������� ��� ������';
$lang ['Cash_allow_donate'] = '��������� ������������� ���������� ���� �������� ������ ������ �������������';
$lang ['Cash_allow_mod_edit'] = '��������� ����������� ������������� ������������ \�������� ������';
$lang ['Cash_allow_negative'] = '��������� ������������� ����� ������������� �������� ����������';

$lang ['Cash_allowance_enabled'] = '��������� ��������';
$lang ['Cash_allowance_amount'] = '����� ���������, ������������ ��� �������';
$lang ['Cash_allownace_frequency'] = '��� ����� ������� ����';
$lang ['Cash_allownace_frequencies'] [CASH_ALLOW_DAY] = '����';
$lang ['Cash_allownace_frequencies'] [CASH_ALLOW_WEEK] = '������';
$lang ['Cash_allownace_frequencies'] [CASH_ALLOW_MONTH] = '�����';
$lang ['Cash_allownace_frequencies'] [CASH_ALLOW_YEAR] = '���';
$lang ['Cash_allowance_next'] = '����� �� ���������� �������';

// Groups
$lang['Cash_status_type'][CASH_GROUPS_DEFAULT] = '�� ���������';
$lang['Cash_status_type'][CASH_GROUPS_CUSTOM] = '�������';
$lang['Cash_status_type'][CASH_GROUPS_OFF] = 'Off';
$lang['Cash_status'] = '������';

// Cash Mod Log Text
// Note: there isn't really a whole lot i can do about it, if languages use a
// grammar that requires these arguments (%s) to be in a different order, it's stuck in
// this order. The up side is that this is about 10x more comprehensive than the
// last way i did it.
//

/* argument order: [donater id][donater name][currency list][receiver id][receiver name]

eg.
Joe donated 14 gold, $10, 3 points to Peter
*/
$lang['Cash_clause'][CASH_LOG_DONATE] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> donated <b>%s</b> to <a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>';

/* argument order: [admin/mod id][admin/mod name][editee id][editee name][Added list][removed list][Set list]

eg.
Joe modified Peter's Cash:
Added 14 gold
Removed $10
Set 3 points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_MODEDIT] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new">%s</a> edited <a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>\'s Cash:<br />Added <b>%s</b><br />Removed <b>%s</b><br />Set to <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe created points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_CREATE_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> created <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe deleted $
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_DELETE_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> deleted <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][old currency name][new currency name]

eg.
Joe renamed silver to gold
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_RENAME_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> renamed <b>%s</b> to <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][copied currency name][copied over currency name]

eg.
Joe copied users' gold to points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_COPY_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> copied users\' <b>%s</b> to <b>%s</b>';

$lang['Log'] = '����';
$lang['Action'] = '��������';
$lang['Type'] = '���';
$lang['Cash_all'] = '���';
$lang['Cash_admin'] = '�������������';
$lang['Cash_user'] = '������������';
$lang['Delete_all_logs'] = '������� ��� �������';
$lang['Delete_admin_logs'] = '������� ������� ������';
$lang['Delete_user_logs'] = '������� ������� ������������';
$lang['All'] = '���';
$lang['Day'] = '����';
$lang['Week'] = '������';
$lang['Month'] = '�����';
$lang['Year'] = '���';
$lang['Page'] = '��������';
$lang['Per_page'] = '�� ��������';

// Now for some regular stuff...

// User CP
$lang['Donate'] = '�������������';
$lang['Mod_usercash'] = '�������� %s\'s ��������';
$lang['Exchange'] = 'Exchange';

// Exchange
$lang['Convert'] = '��������������';
$lang['Select_one'] = '������� ����';
$lang['Exchange_lack_of_currencies'] = '��� ���� \' � ���������� ������ ��� ���, ����� ����� ����������� ������ <br /> ����� ������������ ��� �������, ��� ������������� ������ ������� �� ������� ���� ��� ������';
$lang['You_have'] = '��';
$lang['One_worth'] = '���� %s is worth:';
$lang['Cannot_exchange'] = '�� �� ������ �������� %s, � ��������� �����';

// Donate
$lang['Amount'] = '�����';
$lang['Donate_to'] = '������������� � %s';
$lang['Donation_recieved'] = '�� �������� ������������� %s';
$lang['Has_donated'] = '%s ���� ������������ [b]%s[/b] ���.' . "\n\n" . '%s wrote: ' . "\n";

// Mod Edit
$lang['Add'] = '��������';
$lang['Remove'] = '�������';
$lang['Omit'] = '��������';
$lang['Amount'] = '�����';
$lang['Donate_to'] = '������������� %s';
$lang['Has_moderated'] = '%s �������������� ������� �� ����� %s';
$lang['Has_added'] = '[*]����������: [b]%s[/b]' . "\n";
$lang['Has_removed'] = '[*]��������: [b]%s[/b]' . "\n";
$lang['Has_set'] = '[*]��������: [b]%s[/b]' . "\n";

// That's all folks!

?>