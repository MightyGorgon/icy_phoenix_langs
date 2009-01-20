<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/*
Example for categories
$lang['cat_YOUR_CAT_NAME'] = 'YOUR_CAT_DESCRIPTION';

Example for items
$lang['item_YOUR_ITEM_NAME'] = 'YOUR_ITEM_DESCRIPTION';
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
    'FEATURES' => 'Features',
    'PHPBB2' => 'phpBB2',
    'ICYPHOENIX' => 'Icy Phoenix',
    'PHPBB3' => 'phpBB3',
    'PHPBB_FEATURES_PAGE' => 'Features von phpBB stammen von der offizielen phpBB Website [ <a href="http://www.phpbb.com/about/features/">LINK</a> ]',

/*********/
    'cat_general' => 'Allgemein',

    'item_license' => 'Lizenz',
    'bb2_license' => 'GPL',
    'ip_license' => 'GPL',
    'bb3_license' => 'GPL',

    'item_price' => 'Preis f�r eine Lizenz',
    'bb2_price' => 'kostenlos',
    'ip_price' => 'kostenlos',
    'bb3_price' => 'kostenlos',

    'item_programming' => 'Programmiersprache',
    'bb2_programming' => 'PHP',
    'ip_programming' => 'PHP',
    'bb3_programming' => 'PHP',

    'item_latest' => 'letzte Version',
    'bb2_latest' => '2.0.22',
    'ip_latest' => '1.2.0.27',
    'bb3_latest' => '3.0.2',

    'item_release' => 'Erscheinungsdatum',
    'bb2_release' => '2008/02/17',
    'ip_release' => '2008/03/03',
    'bb3_release' => '2008/07/10',

/*********/
    'cat_basic_features' => 'Grundfunktionen',

    'item_utf8' => 'UTF-8 Unterst�tzung',
    'item_user_preferences' => 'Benutzer-Einstellungen',
    'item_mod' => 'Moderation',
    'item_admin' => 'Administration',
    'item_search_engine' => 'Search Engine spider Handling',
    'item_un_mess_track' => 'Unread message tracking',
    'item_pms' => 'Private Nachrichten',
    'item_stat' => 'Statistiken',

/*********/
    'cat_security' => 'Sicherheit',

    'item_perm_ban' => 'Dauerhafte Bann\'s',
    'item_temp_ban' => 'tempor�re Bann\'s (Suspension)',
    'item_permission' => 'Berechtigungssystem',
    'item_paid_sec' => 'Paid Security Code Audit',
    'item_form_hand' => 'Form Handling',
    'item_t_a_p_h' => 'Type Aware Parameter Handling',
    'item_t_a_d_l' => 'Type Aware Database Layer',
    'item_p_h' => 'Passwortverschl�sselung',

/*********/
    'cat_antispam' => 'Anti-Spam',

    'item_c_v_c' => 'CAPTCHA Visual Confirmation',
    'item_f_c' => 'Flood Kontrolle',
    'item_groups' => 'Gruppen',
    'item_acls' => 'ACLs',
    'item_b_l' => 'Blacklist',
    'item_banning' => 'Banning',
    'item_suspension' => 'Suspensions',
    'item_warn' => 'Verwarnung',
    'item_u_l' => 'User Logging',
    'item_u_p_ip_l' => 'User Post IP Logging',
    'item_r_p' => 'Beitr�ge melden',
    'item_post_m' => 'Beitragsmoderation',

/*********/
    'cat_datamanagement' => 'Datenbank Management',

    'item_mysql' => 'MySQL',
    'item_mssql' => 'MSSQL Server',
    'item_mssql_odbc' => 'MSSQL ODBC',
    'item_postgre' => 'PostgreSQL',
    'item_ms_access' => 'MS Access',
    'item_oracle' => 'Oracle',
    'item_firebird' => 'Firebird',
    'item_sql_lite' => 'SQL_Lite',
    'item_db_back' => 'Database (DBMS) Backups',
    'item_db_restore' => 'Database (DBMS) Restore',
    'item_p_t_pruning' => 'Post / Topic Pruning',

/*********/
    'cat_registration' => 'Registrierung',

    'item_coppa' => 'COPPA Registrierung',
    'item_l_r_a' => 'Begrenzung f�r Registrierungsversuche',
    'item_username_lenght' => 'Bestimme min / max Benutzernamenl�nge',
    'item_pass_lenght' => 'Bestimme min / max Passwortl�nge',
    'item_l_u_c' => 'Begrenze Benutzernamenzeichen',
    'item_s_p_c_r' => 'Bestimme die Passwortkomplexit�t',
    'item_f_p_c' => 'Force Password Change',
    'item_e_mail_address_reusage' => 'Erlaube / Verbiete das E-Mail Adressen mehrmals genutzt werden',

/*********/
    'cat_posting' => 'Posting',

    'item_t_d_m' => 'Topic Display Method',
    'bb2_t_d_m' => 'Flat',
    'ip_t_d_m' => 'Flat',
    'bb3_t_d_m' => 'Flat',

    'item_bbcode' => 'BBCode',
    'item_bbcode_custom' => 'Custom BBCode Buttons',
    'item_html_in_post' => 'HTML in posts',
    'item_emoticon' => 'Smilies / Emoticons',
    'item_quoting' => 'Quoting',
    'item_q_m_p' => 'Quote Multiple Posts',
    'item_f_t' => 'Formatting Toolbar',
    'item_w_c' => 'Word Censors',
    'item_s_h' => 'Syntax Highlighting',
    'item_attachments' => 'Attachments',
    'item_p_d' => 'Post Drafts',
    'item_polls' => 'Polls',
    'item_m_p_o_v' => 'Multiple Poll Option Voting',
    'item_u_b_p_t' => 'User based Poll Tracking',
    'item_all_dis_v_c' => 'Allow / Disallow Vote Change',
    'item_beaten_p_review' => 'Beaten-to-Posting Review',
    'item_p_p' => 'Posting Preview',
    'item_flood_control' => 'Flood Control',

/*********/
    'cat_attachments' => 'Attachments',

    'item_a_i_t' => 'Automatic Image Thumbnails',
    'item_a_t' => 'Attachment Types',
    'item_m_a' => 'Multiple Attachments',
    'item_a_p' => 'Attachment Placement',

/*********/
    'cat_caching' => 'Caching',

    'item_db_q_c' => 'Datenbankabfragen Cache',
    'item_t_c' => 'Template Cache',
    'item_a_d' => 'beliebige Daten',
    'item_m_c_r' => 'manuelle Cacheaktualisierung',

/*********/
    'cat_profile' => 'Profile / Memberlist',

    'item_c_p_f' => 'Custom Profile Fields',
    'item_u_p_s' => 'User Posting Stats',
    'item_u_i_m' => 'User Instant Messengers',
    'item_u_p_d' => 'User Profile details',
    'item_m_list_search' => 'Memberlist Searching',
    'item_u_m_v' => 'Disallow Non-Registered User Memberlist Viewing',

/*********/
    'cat_search_system' => 'Suchfunktion',

    'item_ft_n' => 'Fulltext Native',
    'item_c_t_s' => 'Customised Topic Search',
    'item_c_f_s' => 'Customised Forum Search',
    'item_my_sql_text' => 'MySQL fulltext',
    'item_a_s' => 'Author Search',
    'item_a_search' => 'Erweiterte Suche',
    'item_v_a_post' => 'View unanswered posts',
    'item_a_n_t' => 'Active / New Topics',
    'item_p_s_l_v' => 'Posts Since Last Visit',
    'item_s_f_l' => 'Search Flood Control',

/*********/
    'cat_forums' => 'Forum',

    'item_categories' => 'Kategorien',
    'item_p_p_f' => 'Foren durch ein Passwort sch�tzen',
    'item_f_s_s' => 'Style f�r jedes einzelne Forum w�hlbar',
    'item_url_l_r_f' => 'Foren als Link',
    'item_f_rules' => 'Forenregeln',
    'item_subforum' => 'Subforen',
    'item_last_post' => 'Letzter Beitrag',
    'item_forum_pruning' => 'Automatisches L�schen',
    'item_d_a_t' => 'Hervorhebung aktiver Themen',
    'item_s_t_forums' => 'Foren abonnieren',
    'item_s_t_topics' => 'Themen abonnieren',
    'item_b_t' => 'Lesezeichen',
    'item_t_s' => 'Themensortierung',
    'item_p_s' => 'Beitragssortierung',
    'item_t_p_t' => 'Topic Participation Tracking',
    'item_print_t' => 'Thema drucken',
    'item_e_mail_t' => 'Thema als E-Mail versenden',

/*********/
    'cat_ucp' => 'Benutzerkontrollzentrum',

    'item_u_s' => 'Signaturen',
    'item_u_a' => 'Avatars',
    'item_u_ranks' => 'Benutzerr�nge',
    'item_u_o_l' => '\'Wer ist online\' Liste',
    'item_user_p' => 'User Preferences',
    'item_u_p_s' => 'Benutzerprofil Einstellungen',
    'item_m_s_pm_post_d' => 'Manage Saved PM / Post Drafts',
    'item_m_book' => 'Manage Bookmarks',
    'item_m_attach' => 'Manage Attachments',
    'item_m_s_t' => 'Manage Subscribed Topics',
    'item_c_p_f' => 'Custom Profile Fields',
    'item_friend_foe_list' => 'Freund / Feind Liste',

/*********/
    'cat_priv_messaging' => 'Private Nachrichten',

    'item_add_pm_folder' => 'Additional PM Folders',
    'item_custom_pm_filter' => 'Customisable PM Filter Rules',
    'item_send_multiple_reci' => 'Send to Multiple Recipients',
    'item_send_blind_carbon' => 'Send Blind Carbon Copies',
    'item_send_to_group' => 'Send to Groups',
    'item_f_message' => 'Forward Messages',
    'item_a_book' => 'Address Book',
    'item_message_d' => 'Message Drafts',
    'item_exp_mess' => 'Export Messages',
    'item_attach_message' => 'Attachments for Messages',
    'item_convers_view' => 'Conversation View',
    'item_c_m_h_r' => 'Custom Message Handling Rules',

/*********/
    'cat_usergroups' => 'User Groups',

    'item_g_t' => 'Group Types',
    'item_ucp_group_manage' => 'UCP Group Management',
    'item_ucp_group_manage_membership' => 'UCP Manage Group Memberships',
    'item_m_g_l' => 'Multiple Group Leaders',
    'item_c_g_c' => 'Custom Group Colours',
    'item_group_ranks' => 'Group Ranks',
    'item_group_avatar' => 'Group Avatars',
    'item_group_based_memberlist' => 'Group based Memberlist Display',

/*********/
    'cat_mcp' => 'Moderation Control Panel',

    'item_global_moder' => 'Global Moderators',
    'item_forum_moder' => 'Forum Moderators',
    'item_t_post_m_q' => 'Topics / Posts Moderation Queue',
    'item_m_r_t_p' => 'Manage Reported Topics / Posts',
    'item_t_h' => 'Topic History',
    'item_f_t_logs' => 'Forum / Topic Logs',
    'item_l_m_l' => 'Localised Moderator Logs',
    'item_p_e' => 'Post Editing',
    'item_p_l' => 'Post Locking',
    'item_post_details' => 'Post Details',
    'item_c_p_author' => 'Change Post Author',
    'item_quick_mod_tools' => 'Quick_Mod Tools',
    'item_moving_t' => 'Moving Topics',
    'item_m_m_t' => 'Move Multiple Topics',
    'item_merging_t' => 'Merging Topic',
    'item_merging_p' => 'Merging Posts',
    'item_merging_multiple_t' => 'Merging Multiple Topics',
    'item_split_t' => 'Split Topics',
    'item_locking_t' => 'Locking Topics',
    'item_deleting_t' => 'Deleting Topics',
    'item_copying_t' => 'Copying Topics',
    'item_global_topics' => 'Global Topics',
    'item_announcement_t' => 'Announcement Topics',
    'item_s_topics' => 'Sticky Topics',
    'item_mange_bans' => 'Manage Bans',
    'item_m_u_w' => 'Manage User Warnings',
    'item_banning_by_username' => 'Banning by Username',
    'item_banning_by_email' => 'Banning by E-mail Address',
    'item_banning_by_ip' => 'Banning by IP Address',
    'item_user_notes' => 'User Notes',

/*********/
    'cat_acp' => 'Administration Control Panel',

    'item_f_s_b_c' => 'Founder Status / Board Creator',
    'item_l_s' => 'Load Settings',
    'item_p_i_u' => 'Prune Inactive Users',
    'item_m_r' => 'Manage Ranks',
    'item_m_groups' => 'Manage Groups',
    'item_m_group_membership' => 'Manage Group Memberships',
    'item_manage_attach_setting' => 'Manage Attachments and Settings',
    'item_manage_user_attachment' => 'Manage User Attachments',
    'item_user_editing' => 'User Editing',
    'item_list_group_index' => 'List Groups on Index',
    'item_topic_icons' => 'Topic Icons',
    'item_mass_e_mail' => 'Mass e-mail',
    'item_manage_report_reasons' => 'Manage Report / Denial Reasons',
    'item_module_manage' => 'Module Management',
    'item_custom_bbcode' => 'Custom BBCodes',
    'item_custom_profile_field' => 'Custom Profile Fields',
    'item_custom_profile_field_placement' => 'Custom Profile Fields Placement Options',
    'item_custom_profile_data_types' => 'Custom Profile Fields Data Types',
    'item_manage_bans' => 'Manage Bans',
    'item_ban_by_username' => 'Banning by Username',
    'item_ban_by_email' => 'Banning by E-mail Address',
    'item_ban_by_ip' => 'Banning by IP Address',

/*********/
    'cat_styles' => 'Styles',

    'item_s_style' => 'Selectable Styles',
    'item_install_style' => 'Install / Manage Custom Styles',
    'item_custom_style' => 'Customise / Edit Templates',
    'item_custom_themes' => 'Customise / Edit Themes',
    'item_custom_imageset' => 'Customise / Edit Imagesets',

/*********/
    'cat_permission' => 'Permission',

    'item_g_b_g_p' => 'Group Based Global Permissions',
    'item_g_b_m_p' => 'Group Based Moderator Permissions',
    'item_g_b_a_p' => 'Group Based Administration Permissions',
    'item_g_b_f_p' => 'Group Based Forum Permissions',
    'item_u_b_g_p' => 'User Based Global Permissions',
    'item_u_b_m_p' => 'User Based Moderator Permissions',
    'item_u_b_a_p' => 'User Based Administration Permissions',
    'item_u_b_f_p' => 'User Based Forum Permissions',
    'item_admin_perm_roles' => 'Admin Permission Roles',
    'item_user_perm_roles' => 'User Permission Roles',
    'item_mod_perm_roles' => 'Moderator Permission Roles',
    'item_forum_perm_roles' => 'Forum Permission Roles',
    'item_mask_perm_multi' => 'Multi-level Permission Masks',

/*********/
    'cat_notifications' => 'Notifications',

    'item_e_mail_true' => 'E-Mail',
    'item_instant_mess' => 'Instant Messaging',
    'item_book_m' => 'Bookmarks',

/*********/
    'cat_localisations' => 'Localisations',

    'item_s_m_l_p' => 'Support for Multiple Language Packs',
    'item_language' => 'Sprachen',
    'bb2_language' => '50+',
    'ip_language' => '6',
    'bb3_language' => '61',
    'item_right_t_left' => 'Right to Left Support',
    'item_l_p_w_edit' => 'Language Pack Web-Editor',

/*********/
    'cat_install' => 'Installations / Upgrades',

    'item_install_wizard' => 'Installation Wizard',
    'item_update_wizard' => 'Update Wizard',
    'item_converter_wizard' => 'Converter Wizard',
    'item_file_merge_diff_engine' => 'File Merge Diff Update Engine',

/*********/
    'cat_technical' => 'Technical Features',

    'item_cms_integra' => 'CMS Software Integration',
    'item_xhtml_compliant' => 'XHTML Compliant',

/*********/
    'cat_plugins' => 'Plugins',

    'item_auth_plug' => 'Auth Plugins',
    'item_search_plug' => 'Search Plugins',
    'item_cache_plug' => 'Cache Plugins',
    'item_hooks_sys' => 'Hooks System',
    'item_expand_module' => 'Expandable Modules',

/*********/
    'cat_features' => 'Extra Features',

    'item_feat_cms' => 'CMS',
    'item_feat_album' => 'Photo Gallery',
    'item_feat_downloads' => 'Downloads System',
    'item_feat_kb' => 'Knowledge Base',
    'item_feat_links' => 'Links System',
    'item_feat_news' => 'News Categories',
    'item_feat_stats' => 'Statistics Modules',
    'item_feat_contact_us' => 'Contact Us Form',
    'item_feat_lofi' => 'LoFi View',
    'item_feat_ajax_shoutbox' => 'AJAX Shoutbox',
    'item_feat_shoutbox' => 'Standard Shoutbox',
    'item_feat_calendar' => 'Calendar and Events System',
    'item_feat_pm_notifications' => 'PM On New Registration And Birthday',

/*********/
    'cat_features_acp' => 'Extra Features ACP',

    'item_feat_info' => 'Server Information In ACP',
    'item_feat_db_mntnc' => 'Database Maintenance',
    'item_feat_mysqladmin' => 'MySQL Admin',
    'item_feat_editable_f_r' => 'Multilanguage Editable FAQs and Rules',
    'item_feat_multiple_ranks' => 'Multiple Ranks',

/*********/
    'cat_features_ucp' => 'Extra Features UCP',

    'item_feat_ajax_checks' => 'AJAX Checks On Registration',
    'item_feat_upi2db' => 'Unread Posts In DB',
    'item_feat_custom_avatar' => 'Custom Avatar Creation',
    'item_feat_profile_stats' => 'Profile Statistics and Extra Users Info',
    'item_feat_user_self_deactivation' => 'User Self Deactivation',
    'item_feat_login_archive' => 'Login History',

/*********/
    'cat_features_bbcodes' => 'Extra Features BBCodes',

    'item_feat_random_quotes' => 'Random Quotes',
    'item_feat_bbcodes' => 'Integrated BBCodes Box',
    'item_feat_acronyms' => 'Acronyms',
    'item_feat_autolinks' => 'Autolinks',
    'item_feat_smiley_creator' => 'Smiley Creator',

/*********/
    'cat_features_seo' => 'Extra Features SEO',

    'item_feat_url_rewrite' => 'SEO Optimization and URL Rewrite',
    'item_feat_rss' => 'RSS-Feed',
    'item_feat_referrers' => 'Referrers Tracking',
    'item_feat_referrers' => 'Bots Tracking',
    'item_feat_referrers' => 'Browsers and OS Detection',
    'item_feat_banners' => 'Banners and Ads Management',

/*********/
    'cat_features_forum' => 'Extra Features Forum and Posting',

    'item_feat_bin' => 'Topics Trash',
    'item_feat_forum_icons' => 'Forum Icons',
    'item_feat_link_this_topic' => 'Link This Topic',
    'item_feat_edit_notes' => 'Edit Notes',
    'item_feat_topic_prefixes' => 'Topic Prefixes',
    'item_feat_topic_description' => 'Topic Description',
    'item_feat_rating' => 'Topic Rating',
    'item_feat_thanks' => 'Topic Thanking',
    'item_feat_topic_views' => 'Topic Views',
    'item_feat_digests' => 'Topics Digests',
    'item_feat_upload_images' => 'Images Upload While Posting',
    'item_feat_quick_reply' => 'Quick Reply',
    'item_feat_social_bookmars' => 'Social Bookmarks',
    'item_feat_ftr' => 'Force Topic Read',
    'item_feat_detailed_notifications' => 'Detailed Notifications With Messages',

//	'item_feat_' => '',
	)
);

?>