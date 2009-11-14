<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 110 2009-07-14 08:09:47Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
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

$lang = array_merge($lang, array (
  'Cmcat_main' => 'Main',
  'Cmcat_addons' => 'Add-ons',
  'Cmcat_other' => 'Other',
  'Cmcat_help' => 'Help',
  'Cash_Configuration' => 'Cash&nbsp;Configuration',
  'Cash_Currencies' => 'Cash&nbsp;Currencies',
  'Cash_Exchange' => 'Cash&nbsp;Exchange',
  'Cash_Events' => 'Cash&nbsp;Events',
  'Cash_Forums' => 'Cash&nbsp;Forums',
  'Cash_Groups' => 'Cash&nbsp;Groups',
  'Cash_Help' => 'Cash&nbsp;Help',
  'Cash_Logs' => 'Cash&nbsp;Logs',
  'Cash_Settings' => 'Cash&nbsp;Settings',
  'Cmenu_cash_config' => 'Global Cash Mod Settings that affect all Currencies',
  'Cmenu_cash_currencies' => 'Add, Remove, or reorder Currencies',
  'Cmenu_cash_settings' => 'Specific settings for each Currency',
  'Cmenu_cash_events' => 'Cash Amounts to give out on user events',
  'Cmenu_cash_reset' => 'Reset or Recount Cash amounts',
  'Cmenu_cash_exchange' => 'Enable/Disable Currency exchange, exchange rates',
  'Cmenu_cash_forums' => 'Turn Currencies on or off for each forum',
  'Cmenu_cash_groups' => 'Custom Settings for specific usergroups, ranks, and levels',
  'Cmenu_cash_log' => 'View/Delete Logged Cash Mod actions',
  'Cmenu_cash_help' => 'Cash Mod help',
  'Cash_config' => 'Cash Mod Configuration',
  'Cash_config_explain' => 'The form below will allow you to set your Cash Mod configuration.',
  'Cash_admincp' => 'Cash Mod AdminCP Mode',
  'Cash_adminnavbar' => 'Cash Mod Navbar',
  'Sidebar' => 'Sidebar',
  'Menu' => 'Menu',
  'Messages' => 'Messages',
  'Spam' => 'Spam',
  'Click_return_cash_config' => 'Kattints %side%s to return to Cash Mod Configuration',
  'Cash_config_updated' => 'Cash Mod Configuration Updated Successfully',
  'Cash_disabled' => 'Disable Cash Mod',
  'Cash_message' => 'Show Earnings in Post/Reply confirmation screen',
  'Cash_display_message' => 'Message to display user earnings',
  'Cash_display_message_explain' => 'Must have exactly one "%s" in it',
  'Cash_spam_disable_num' => 'Number of posts to disable earnings after (spam prevention)',
  'Cash_spam_disable_time' => 'Time period over which these posts must exceed (hours)',
  'Cash_spam_disable_message' => 'Spam announcement for null earnings',
  'Cash_currencies' => 'Cash Mod Currencies',
  'Cash_currencies_explain' => 'The form below will allow you to manage your currencies.',
  'Click_return_cash_currencies' => 'Kattints %side%s to return to Cash Mod Currencies',
  'Cash_currencies_updated' => 'Cash Mod Currencies Updated Successfully',
  'Cash_field' => 'Field',
  'Cash_currency' => 'Currency',
  'Name_of_currency' => 'Name of Currency',
  'Default' => 'Default',
  'Cash_order' => 'Order',
  'Cash_set_all' => 'Set for all users',
  'Cash_delete' => 'Delete Currency',
  'Decimals' => 'Decimals',
  'Cash_confirm_copy' => 'Copy all user\'s %s data to %s?<br />This cannot be undone',
  'Cash_confirm_delete' => 'Delete %s?<br />This cannot be undone',
  'Cash_copy_currency' => 'Copy Currency Data',
  'Cash_new_currency' => 'Create new Currency',
  'Cash_currency_dbfield' => 'Database field for currency',
  'Cash_currency_decimals' => 'Number of decimals for currency',
  'Cash_currency_default' => 'Default value for currency',
  'Bad_dbfield' => 'Bad field name, must be in the form \'user_word\'<br /><br />%s<br /><br/>Examples:<br />user_points<br />user_cash<br />user_money<br />user_warnings<br /><br />',
  'Insufficient_currencies' => 'You need to create Currencies before you can alter settings',
  'Cash_events' => 'Cash Mod Events',
  'Cash_events_explain' => 'The form below will allow you to set cash amounts to be given for custom events.',
  'No_events' => 'No events listed',
  'Existing_events' => 'Existing Events',
  'Add_an_event' => 'Add an event',
  'Cash_events_updated' => 'Cash Events Updated Successfully',
  'Click_return_cash_events' => 'Kattints %side%s to return to Cash Events',
  'Cash_reset_title' => 'Cash Mod Reset',
  'Cash_reset_explain' => 'The form below will allow you to activate a global reset of all users\' Cash amounts',
  'Cash_resetting' => 'Cash Resetting',
  'User_of' => 'User %s of %s',
  'Set_checked' => 'Set checked currencies',
  'Recount_checked' => 'Recount checked currencies',
  'Cash_confirm_reset' => 'Confirm resetting of selected currencies?<br />This cannot be undone',
  'Cash_confirm_recount' => 'Confirm recounting of selected currencies?<br />This cannot be undone.<br /><br />This action is not recommended for boards with large amounts of user and/or topics.<br /><br />It is recommended that you disable your board while this action is occurring. <br />You can disable your board via %sConfiguration%s',
  'Update_successful' => 'Update successful!',
  'Click_return_cash_reset' => 'Kattints %side%s to return to Cash Reset',
  'User_updated' => '%s updated<br />',
  'Cash_exchange' => 'Cash Mod Exchange',
  'Cash_exchange_explain' => 'The form below will allow you to set the relative value of your currencies, and enable users to exchange.',
  'Exchange_insufficient_currencies' => 'You don\'t have enough Currencies created to create exchange rates<br />At least 2 are required',
  'Forum_cm_settings' => 'Cash Mod Forum Settings',
  'Forum_cm_settings_explain' => 'From this panel you can set which forums have Cash Mod enabled',
  'Cash_groups' => 'Cash Mod Groups',
  'Cash_groups_explain' => 'From this panel you can set special privileges on ranks, usergroups, administrators and moderators',
  'Click_return_cash_groups' => 'Kattints %side%s to return to Cash Groups',
  'Cash_groups_updated' => 'Cash Groups Updated Successfully',
  'Set' => 'Set',
  'Up' => 'Up',
  'Down' => 'Down',
  'Cmh_support' => 'Cash Mod Support',
  'Cmh_troubleshooting' => 'Troubleshooting',
  'Cmh_upgrading' => 'Upgrading',
  'Cmh_addons' => 'Add-Ons',
  'Cmh_demo_boards' => 'Demo Boards',
  'Cmh_translations' => 'Translations',
  'Cmh_features' => 'Features',
  'Cmhe_support' => 'General Information',
  'Cmhe_troubleshooting' => 'If you\'re having problems with Cash Mod, check here for fixes',
  'Cmhe_upgrading' => 'You currently have version %s, upgrades will be posted here to the latest version',
  'Cmhe_addons' => 'A list of MODs that take advantage of Cash Mod\'s features',
  'Cmhe_demo_boards' => 'A list of some demo boards that use Cash Mod',
  'Cmhe_translations' => 'A list of translations for Cash Mod',
  'Cmhe_features' => 'A list of Cash Mod\'s features, and development on future versions',
  'Logs' => 'Cash Mod Logs',
  'Logs_explain' => 'From this panel you can see logged Cash Mod events',
  'Cash_settings' => 'Cash Mod Settings',
  'Cash_settings_explain' => 'The form below will allow you to customize all the Currency Settings.',
  'Display' => 'Display',
  'Implementation' => 'Implementation',
  'Allowances' => 'Allowances',
  'Allowances_explain' => 'Allowances requires the Cash Mod Allowances plug-in',
  'Click_return_cash_settings' => 'Kattints %side%s to return to Cash Mod Settings',
  'Cash_settings_updated' => 'Cash Mod Settings Updated Successfully',
  'Cash_enabled' => 'Enable Currency',
  'Cash_custom_currency' => 'Custom Currency for Cash Mod',
  'Cash_image' => 'Display the currency as an image',
  'Cash_imageurl' => 'Image (Relative to phpBB2 root path):',
  'Cash_imageurl_explain' => 'Use this to define a small image associated with the currency',
  'Prefix' => 'Prefix',
  'Postfix' => 'Postfix',
  'Cash_currency_style' => 'Currency style for Cash Mod',
  'Cash_currency_style_explain' => 'Currency symbol as Prefix or Postfix',
  'Cash_display_usercp' => 'Show earnings in UserCp',
  'Cash_display_userpost' => 'Show earnings in Post Profile',
  'Cash_display_memberlist' => 'Show earnings in the Memberlist',
  'Cash_amount_per_post' => 'Amount of cash earned per new topic',
  'Cash_amount_post_bonus' => 'Amount of bonus cash earned per reply for topic author',
  'Cash_amount_per_reply' => 'Amount of cash earned per reply',
  'Cash_amount_per_character' => 'Amount of cash earned per character',
  'Cash_amount_per_thanks' => 'Amount of cash earned per thanks received',
  'Cash_maxearn' => 'Maximum amount of cash earned for posting',
  'Cash_amount_per_pm' => 'Amount of cash earned per private message',
  'Cash_include_quotes' => 'Include quotes when calculating cash per character',
  'Cash_exchangeable' => 'Allow users to exchange this currency',
  'Cash_allow_donate' => 'Allow users to donate their cash to other users',
  'Cash_allow_mod_edit' => 'Allow moderators to edit user\'s cash',
  'Cash_allow_negative' => 'Allow users to have negative cash amounts',
  'Cash_allowance_enabled' => 'Enable allowances',
  'Cash_allowance_amount' => 'Amount of cash earned as allowances',
  'Cash_allownace_frequency' => 'How often allowances are given',
  'Cash_allownace_frequencies' => 
  array (
    'CASH_ALLOW_DAY' => 'Day',
    'CASH_ALLOW_WEEK' => 'Week',
    'CASH_ALLOW_MONTH' => 'Month',
    'CASH_ALLOW_YEAR' => 'Year',
  ),
  'Cash_allowance_next' => 'Time until next allowance',
  'Cash_status_type' => 
  array (
    'CASH_GROUPS_DEFAULT' => 'Default',
    'CASH_GROUPS_CUSTOM' => 'Custom',
    'CASH_GROUPS_OFF' => 'Off',
  ),
  'Cash_status' => 'Status',
  'Cash_clause' => 
  array (
    'CASH_LOG_DONATE' => '<a href="PROFILE_MG?mode=viewprofile&amp;POST_USERS_URL=%s" target="_new"><b>%s</b></a> donated <b>%s</b> to <a href="PROFILE_MG?mode=viewprofile&amp;POST_USERS_URL=%s" target="_new"><b>%s</b></a>',
    'CASH_LOG_ADMIN_MODEDIT' => '<a href="PROFILE_MG?mode=viewprofile&amp;POST_USERS_URL=%s" target="_new">%s</a> edited <a href="PROFILE_MG?mode=viewprofile&amp;POST_USERS_URL=%s" target="_new"><b>%s</b></a>\'s Cash:<br />Added <b>%s</b><br />Removed <b>%s</b><br />Set to <b>%s</b>',
    'CASH_LOG_ADMIN_CREATE_CURRENCY' => '<a href="PROFILE_MG?mode=viewprofile&amp;POST_USERS_URL=%s" target="_new"><b>%s</b></a> created <b>%s</b>',
    'CASH_LOG_ADMIN_DELETE_CURRENCY' => '<a href="PROFILE_MG?mode=viewprofile&amp;POST_USERS_URL=%s" target="_new"><b>%s</b></a> deleted <b>%s</b>',
    'CASH_LOG_ADMIN_RENAME_CURRENCY' => '<a href="PROFILE_MG?mode=viewprofile&amp;POST_USERS_URL=%s" target="_new"><b>%s</b></a> renamed <b>%s</b> to <b>%s</b>',
    'CASH_LOG_ADMIN_COPY_CURRENCY' => '<a href="PROFILE_MG?mode=viewprofile&amp;POST_USERS_URL=%s" target="_new"><b>%s</b></a> copied users\' <b>%s</b> to <b>%s</b>',
  ),
  'Log' => 'Log',
  'Action' => 'Action',
  'Type' => 'Type',
  'Cash_all' => 'All',
  'Cash_admin' => 'Admin',
  'Cash_user' => 'User',
  'Delete_all_logs' => 'Delete all logs',
  'Delete_admin_logs' => 'Delete admin logs',
  'Delete_user_logs' => 'Delete user logs',
  'All' => 'All',
  'Day' => 'Day',
  'Week' => 'Week',
  'Month' => 'Month',
  'Year' => 'Year',
  'Page' => 'Page',
  'Per_page' => 'per page',
  'Donate' => 'Donate',
  'Mod_usercash' => 'Modify %s\'s Cash',
  'Exchange' => 'Exchange',
  'Convert' => 'Convert',
  'Select_one' => 'Select One',
  'Exchange_lack_of_currencies' => 'There aren\'t enough Currencies for you to be able to exchange<br />To enable this feature, your admin needs to create at least 2 currencies',
  'You_have' => 'You have',
  'One_worth' => 'One %s is worth:',
  'Cannot_exchange' => 'You cannot exchange %s, currently',
  'Amount' => 'Amount',
  'Donate_to' => 'Donate to %s',
  'Donation_recieved' => 'You have received a donation from %s',
  'Has_donated' => '%s has donated [b]%s[/b] to you.

%s wrote: 
',
  'Add' => 'Add',
  'Remove' => 'Remove',
  'Omit' => 'Omit',
  'Has_moderated' => '%s has edited the balance of your %s',
  'Has_added' => '[*]Added: [b]%s[/b]
',
  'Has_removed' => '[*]Removed: [b]%s[/b]
',
  'Has_set' => '[*]Set to: [b]%s[/b]
',
))
?>