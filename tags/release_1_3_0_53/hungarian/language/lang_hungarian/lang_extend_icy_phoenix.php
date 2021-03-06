<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_extend_icy_phoenix.php 110 2009-07-14 08:09:47Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'10_Main_Settings_Icy_Phoenix' => 'Icy Phoenix',
	'20_SQL_Charge' => 'SQL Optimaliz�ci�',
	'30_Posting' => 'Hozz�sz�l�sok �s �zenetek',
	'40_IMG_Posting' => 'K�pek a hozz�sz�l�sokban',
	'50_Hierarchy_setting' => 'F�rum',
	'60_Calendar_settings' => 'Napt�r',
	'70_SEO' => 'SEO',
	'80_Security' => 'Logs And Security',
	'90_Cron' => 'Cron',
	)
);

// admin part
if ($lang_extend_admin)
{
	$lang = array_merge($lang, array(
		'Lang_extend_icy_phoenix' => 'Icy Phoenix',

// TAB - Icy Phoenix
		'IP_enable_xs_version_check' => 'Icy Phoenix verzi�ellen�rz�s enged�lyez�se',
		'IP_enable_xs_version_check_explain' => 'Enable this option to check if a newer Icy Phoenix version is available to download each time you enter the ACP. Disabling this option may speed up ACP loading a bit. <br /><b>Note:</b> This check is done just once per day and then cached.',

		'IP_disable_email_error' => 'Disable errors on email sending',

		'IP_html_email' => 'HTML Email',
		'IP_html_email_explain' => 'Enabling this option will enable HTML emails, otherwise they will be simple text mail',

		'IP_enable_digests' => 'Enable Digests',

		'IP_digests_php_cron' => 'Enable Digests PHP Cron',
		'IP_digests_php_cron_explain' => 'This feature will enable a PHP emulation of the CRON trying to send the emails once per hour, but since it is based on a PHP emulation it may not be correctly executed every time. This means that sometimes emails may not be sent. If you can enable CRON on your server, use CRON instead of this feature. Please note that you need also to enable <b>PHP Cron [Global Switch]</b> in <b>Configuration &raquo; Icy Phoenix &raquo; Cron</b>',

		'IP_emails_only_to_admins' => 'Emails Only To Admins',
		'IP_emails_only_to_admins_explain' => 'Allow email system only for sending emails to admins',

		'IP_ajax_features' => 'Enable AJAX Features',
		'IP_ajax_features_explain' => 'Some AJAX features integrated into the site',

		'IP_ajax_checks_register' => 'AJAX Check While Registering',
		'IP_ajax_checks_register_explain' => 'By enabling this option some real time checks are performed while filling some fields in the register form (Warning: this option may slow down the register page).',

		'IP_inactive_users_memberlists' => 'Inactive Users In Memberlist And Birthdays\' Block',
		'IP_inactive_users_memberlists_explain' => 'By enabling this option inactive users will be shown in the memberlist and birthdays\' block.',

		'IP_page_gen' => 'Show Page Generation Time on Footer',

		'IP_switch_header_dropdown' => 'Activate Dropdown Menu in Header',
		'IP_switch_header_dropdown_explain' => 'This will activate a dropdown menu in the forum header for search and for posts.',

		'IP_show_alpha_bar' => 'Show Alphabetical Sort Bar In View Forum (Global Switch)',
		'IP_show_alpha_bar_explain' => 'This option will show an alphabetical sort bar on top of viewforum page. You will need also to enable single forums in Forums Management section.',

		'IP_show_rss_forum_icon' => 'Forum Index Icons (Global Switch)',
		'IP_show_rss_forum_icon_explain' => 'This option will show icons on the right of every forum title (on Forum Index): RSS, New Topic. You will need also to enable single forums in Forums Management section.',

		'IP_allow_mods_view_self' => 'Allow ALL Moderators to View Self Auth Topics',
		'IP_allow_mods_view_self_explain' => 'If a forum has been set to SELF AUTH access only admins and forum moderators can access those topics through viewforum and viewtopic. However there are many features that may show contents of these kind of posts even if not authed: Recent Topics, Search, Recent Messages Blocks, Random Topics Blocks, etc. To prevent this, an extra feature has been coded which doesn\'t allow non authed people to access these topics via secondary ways. Anyway you can allow ALL moderators (not only admins) to view these messages through these secondary ways. If you set this to YES then ALL moderators will be allowed to see the content of these messages through: Recent, Search, Topics related blocks... Unfortunately if you switch this OFF then neither AUTHED moderators may access SELF AUTHED topics through secondary ways. The feature has been coded in this way to save extra SQL charge. If you don\'t use SELF AUTHED forums, then you don\'t need this function as well.',

		'IP_xmas_fx' => 'Christmas Snow',
		'IP_xmas_fx_explain' => 'This option enables Snow Effect.',

		'IP_xmas_gfx' => 'Christmas Graphics',
		'IP_xmas_gfx_explain' => 'By enabling this option Christmas Graphics will be applied.',

		'IP_select_theme' => 'Change Style',
		'IP_select_theme_explain' => 'By enabling this option a select box with all the available styles will be added for fast style switching.',

		'IP_select_lang' => 'Change Lang',
		'IP_select_lang_explain' => 'By enabling this option a link to each available language will be created on forum index, for quick language switching.',

		'IP_cms_dock' => 'Show Apple style Dock in CMS',

		'IP_cms_style' => 'CMS Modern Style',
		'IP_cms_style_explain' => 'Modern Style for CMS consists in a modern layout with top transparent menu, while classic style has side menu',

		'IP_split_ga_ann_sticky' => 'Split Topic by Type',
		'IP_split_ga_ann_sticky_explain' => 'Here you can choose a way to split Topics by Type on the viewforum page',
		'IP_split_topic_0' => '<p>All Topic Types Together (no Split)</p>',
		'IP_split_topic_1' => '<p>Global Announcements, Announcements and Stickies together, Normal Topics split</p>',
		'IP_split_topic_2' => '<p>Global Announcements split, Announcements and Stickies joined together, Normal Topics split</p>',
		'IP_split_topic_3' => '<p>All Topic Types Split</p>',

// TAB - SQL Charge
		'IP_fast_n_furious' => 'Fast And Furious',
		'IP_fast_n_furious_explain' => 'Enabling this option some heavy SQL functions will be disabled, to hopefully speed up your site!',

		/*
		'IP_db_cron' => 'Database Optimize',
		'IP_db_cron_explain' => 'Enabling this option will enable Database Optimization.',
		*/

		'IP_site_history' => 'Site History',
		'IP_site_history_explain' => 'Enabling this option will enable Site History.',

		'IP_global_disable_upi2db' => 'Disable UPI2DB globally',
		'IP_global_disable_upi2db_explain' => 'This option lets you disable UPI2DB globally thus saving extra memory.',

		'IP_enable_own_icons' => 'Own Messages Icons',
		'IP_enable_own_icons_explain' => 'By enabling this option icons for topics which contain own messages will be marked.',

		'IP_show_forums_online_users' => 'Show Users Online In Forums',
		'IP_show_forums_online_users_explain' => 'This will enable online users counter for each forum on the index.',

		'IP_google_bot_detector' => 'Enable GoogleBot Detector',

		'IP_gsearch_guests' => 'Force Google Search for guests',

		'IP_visit_counter_switch' => 'Enable Visit Counter',

		'IP_enable_new_messages_number' => 'Show the number of new messages since last visit',

		'IP_disable_thanks_topics' => 'Disable Thanks (Global Switch)',

		'IP_show_thanks_profile' => 'Show Thanks received when viewing profile',

		'IP_show_thanks_viewtopic' => 'Show Thanks received when viewing topics',

		'IP_disable_topic_view' => 'Disable "Who read this topic" (Global Switch)',
		'IP_disable_topic_view_explain' => 'This option allows you to disable "Who read this topic" feature (this saves SQL space).',

		'IP_disable_referrers' => 'Disable Referrers',
		'IP_disable_referrers_explain' => 'This option allows you to disable Referrers feature (this saves SQL space).',

		'IP_disable_logins' => 'Disable Logins Recording',
		'IP_disable_logins_explain' => 'By enabling this option User\'s Logins will no longer be recorded.',

		'IP_last_logins_n' => 'Number of Logins to Record',

		'IP_index_top_posters' => 'Top Posters :: Forum Index',
		'IP_index_top_posters_explain' => 'Enable this option to show top posters on <b>Forum Index</b>.',

		'IP_index_last_msgs' => 'Last Messages :: Forum Index',
		'IP_index_last_msgs_explain' => 'Enable this option to show the last messages on <b>Forum Index</b>.',

		'IP_online_last_msgs' => 'Last Messages :: Who Is Online',
		'IP_online_last_msgs_explain' => 'Enable this option to show the last messages on <b>Who Is Online</b>.',

		'IP_last_msgs_n' => 'Number of last messages to be shown.',

		'IP_last_msgs_x' => 'Forum To Exclude',
		'IP_last_msgs_x_explain' => 'Please, insert the IDs of the forums to be excluded in Last Messages Box (you can separate each forum ID with a comma).',

		'IP_show_chat_online' => 'AJAX Chat Online :: Forum Index',
		'IP_show_chat_online_explain' => 'Enabling this option will show on <b>Forum Index</b> users online in AJAX Chat.',

		'IP_index_shoutbox' => 'Shoutbox :: Forum Index',
		'IP_index_shoutbox_explain' => 'Enabling this option will enable Shoutbox on <b>Forum Index</b>.',

		'IP_online_shoutbox' => 'Shoutbox :: Who Is Online',
		'IP_online_shoutbox_explain' => 'Enabling this option will enable Shoutbox on <b>Who Is Online</b>.',

		'IP_img_shoutbox' => 'Disable [img][/img] bbcode on Shoutbox',
		'IP_img_shoutbox_explain' => 'Enabling this option will disable [img][/img] bbcode on Shoutbox.',

		'IP_index_links' => 'Links :: Forum Index',
		'IP_index_links_explain' => 'Enabling this option will enable Links on <b>Forum Index</b>.',

		'IP_index_birthday' => 'Birthday :: Forum Index',
		'IP_index_birthday_explain' => 'Enabling this option will enable Birthdays on <b>Forum Index</b>.',

		'IP_show_random_quote' => 'Random Quotes :: Forum Index',
		'IP_show_random_quote_explain' => 'Enabling this option will enable random quotes to be shown on <b>Forum Index</b>',

// TAB - Posting
		'IP_posts_precompiled' => 'Disable precompiled posts',
		'IP_posts_precompiled_explain' => 'By enabling this option viewtopic will always compile posts text without using the precompiled text, (this is slower, but it can be useful in some cases).',

		'IP_read_only_forum' => 'Disable posting in all forums (Read Only Mode)',
		'IP_read_only_forum_explain' => 'This options allows to lock posting in all forums without having to change permissions. This may be useful for limited periods of time when admins would like to disallow users posting without having to lock the site or change all forum authorizations. Admins will still be able to post.',

		'IP_allow_drafts' => 'Allow Drafts',
		'IP_allow_drafts_explain' => 'Allow users to save posts as drafts',

		'IP_allow_mods_edit_admin_posts' => 'Can Moderators edit Admin posts?',
		'IP_allow_mods_edit_admin_posts_explain' => 'Allow moderators to edit admin posts',

		'IP_force_large_caps_mods' => 'ProperCase subjects',
		'IP_force_large_caps_mods_explain' => 'Topic subjects will be converted to proper case for all users except admins',

		'IP_show_new_reply_posting' => 'Warn For New Replies',
		'IP_show_new_reply_posting_explain' => 'If you enable this, a warning will be shown when there are new replies while you are replying a topic',

		'IP_no_bump' => 'Forbid bumping within 24 hours',
		'IP_no_bump_explain' => 'Enabling this option last posters won\'t be able to post within 24 hours from their last post unless someone else has posted a reply (never applies to admins)',
		'MODS_ALLOWED' => 'Moderators Can Posts',

		'IP_show_topic_description' => 'Enable Topic Description',
		'IP_show_topic_description_explain' => 'Enabling this option will enable Topic Description while posting and browsing forums',

		'IP_edit_notes' => 'Enable Edit Notes',
		'IP_edit_notes_explain' => 'Enabling this option will enable Edit Notes',

		'IP_edit_notes_n' => 'Maximum Edit Notes',

		'IP_always_show_edit_by' => 'Always Show Posts Edit',
		'IP_always_show_edit_by_explain' => 'Enabling this option will always show "Last edit by..." on the message footer when someone modifies it. Admins edits are not shown by default',

		'IP_show_social_bookmarks' => 'Social Bookmarks',
		'IP_show_social_bookmarks_explain' => 'Show Social Bookmarks section when viewing topics',

		'IP_link_this_topic' => 'Link this topic',
		'IP_link_this_topic_explain' => 'Show "Link this topic" box when viewing topics',

		'IP_smilies_topic_title' => 'Smileys for Topic Title and Description',
		'IP_smilies_topic_title_explain' => 'Enabling this option will enable smileys for Topic Title and Topic Description',

		'IP_enable_colorpicker' => 'Enable ColorPicker in posting',

		'IP_quote_iterations' => 'Max number of nested quotes',

		'IP_disable_ftr' => 'Completely disable Force Topic Read',
		'IP_disable_ftr_explain' => 'By enabling this option Force Topic Read will be completely disabled',

		'IP_disable_html_guests' => 'Disable HTML links for guests',

		'IP_birthday_viewtopic' => 'Show poster\'s Age on Topics',

		'IP_switch_poster_info_topic' => 'Show poster\'s Info on Topics (Lang, Style, etc.)',

		'IP_enable_quick_quote' => 'Enable Quick Quote and Off Topic',
		'IP_enable_quick_quote_explain' => 'Quick Quote allows users to quote any post in a topic with a simple click. This feature uses JavaScript, and enabling it can result in large pages if there are a lot of posts with a lot of text in a topic.',

		'IP_allow_all_bbcode' => 'Enable all BBCodes',
		'IP_allow_all_bbcode_explain' => 'Enabling this option will allow all BBCodes in signatures and other places where usually they are not active. BBCodes which are usually disabled in signature are: IMG, ALBUMIMG and some intensive formatting BBCodes. If you enable this option, some signatures may result in consuming both space and resources.',

		'IP_switch_bbcb_active_content' => 'Allow BBCode for Active Content in posts',
		'IP_switch_bbcb_active_content_explain' => 'Activates BBCode for Flash, Video, Audio Streams, RealMedia and Quicktime.',

// TAB - Images In Posts
		'IP_auth_view_pic_upload' => 'Pics Upload Permissions (Post Icy Images)',

		'IP_enable_postimage_org' => 'Enable PostImage button in post form',

		'IP_gd_version' => 'GD Version:',
		'GD_0' => 'No GD',
		'GD_1' => 'GD1',
		'GD_2' => 'GD2',

		'IP_show_img_no_gd' => 'Show GIF thumbnails without using GD libraries (full images are loaded and then just shown resized).',

		'IP_thumbnail_posts' => 'Thumbnails in posts',
		'IP_thumbnail_posts_explain' => 'With this option a thumbnail will be shown instead of a full picture when an image is posted using IMG BBCode',

		'IP_show_pic_size_on_thumb' => 'Show the pic size on thumbnail',

		'IP_thumbnail_highslide' => 'Use HighSlide to show images if thumbnails are enabled',
		'IP_thumbnail_highslide_explain' => 'Opens the image in front of the current page instead of opening it in a new window. More about <a href="http://www.highslide.com/" target="_blank">HighSlide JS...</a><br />Make sure you empty the precompiled posts after changing this setting!',

		'IP_thumbnail_lightbox' => 'Use Lightbox JavaScript if thumbnails are enabled',
		'IP_thumbnail_lightbox_explain' => 'Opens the image in front of the current page instead of opening it in a new window. More about <a href="http://www.huddletogether.com/projects/lightbox/" target="_blank">Lightbox JS...</a><br />Make sure you empty the precompiled posts after changing this setting!<br />If you have enabled HighSlide, then this setting will be ignored.',

		'IP_thumbnail_cache' => 'Thumbnails cache',

		'IP_thumbnail_quality' => 'Thumbnails quality (1-100)',

		'IP_thumbnail_size' => 'Thumbnails size (in pixels)',

// TAB - Forum
		'Lang_extend_categories_hierarchy' => 'Categories Hierarchy',

		'Category_attachment' => 'Attached to',
		'Category_desc' => 'Description',
		'Category_config_error_fixed' => 'An error in the category setup has been fixed',
		'Attach_forum_wrong' => 'You can\'t attach a forum to a forum',
		'Attach_root_wrong' => 'You can\'t attach a forum to the forum index',
		'Forum_name_missing' => 'You can\'t create a forum without a name',
		'Category_name_missing' => 'You can\'t create a category without a name',
		'Only_forum_for_topics' => 'Topics can only be found in forums',
		'Delete_forum_with_attachment_denied' => 'You can\'t delete forums having sub-levels',

		'Category_delete' => 'Delete Category',
		'Category_delete_explain' => 'The form below will allow you to delete a category and decide where you want to put all forums and categories it contained.',

// forum links type
		'Forum_link_url' => 'Link URL',
		'Forum_link_url_explain' => 'Set a URI to an Icy Phoenix file or a full URL to an external server',
		'Forum_link_internal' => 'Icy Phoenix File',
		'Forum_link_internal_explain' => 'Choose yes if you invoke a program that stands in the Icy Phoenix dirs',
		'Forum_link_hit_count' => 'Hit count',
		'Forum_link_hit_count_explain' => 'Choose yes if you want the board to count and display the number of hits using this link',
		'Forum_link_with_attachment_deny' => 'You can\'t set a forum as a link if it has existing sub-levels',
		'Forum_link_with_topics_deny' => 'You can\'t set a forum as a link if it has existing topics in it',
		'Forum_attached_to_link_denied' => 'You can\'t attach a forum or a category to a forum link',

		'Manage_extend' => 'Management +',
		'No_subforums' => 'No sub-forums',
		'Forum_type' => 'Choose the kind of forum you want',
		'Presets' => 'Presets',
		'Refresh' => 'Refresh',
		'Position_after' => 'Position this forum after',
		'Link_missing' => 'The link is missing',
		'Category_with_topics_deny' => 'Topics remain in this forum. You can\'t change it into a category.',
		'Recursive_attachment' => 'You can\'t attach a forum to a lowest level of its own branch (recursive attachment)',
		'Forum_with_attachment_denied' => 'You can\'t change a category with forums attached to it into a forum',
		'icon' => 'Icon',
		'icon_explain' => 'This icon will be displayed in front of the forum title. You can set a direct URI or a $image[] key entry (see <i>your_template</i>/<i>your_template</i>.cfg).',

// TAB - Calendar
		'Lang_extend_topic_calendar' => 'Napt�r t�ma',

// TAB - SEO
		'IP_url_rw' => 'URL Rewrite',
		'IP_url_rw_explain' => 'By enabling this option URL Rewrite will be enabled (HTML links instead of PHP, for better bot spidering) for everybody.',

		'IP_url_rw_guests' => 'URL Rewrite For Guests',
		'IP_url_rw_guests_explain' => 'By enabling this option URL Rewrite will be enabled only for guests and bots.',

		'IP_bots_reg_auth' => 'Bots REG Permission Level',
		'IP_bots_reg_auth_explain' => 'By enabling this option Bots will be given the same access level of registered users.',

		'IP_lofi_bots' => 'LoFi For Bots',
		'IP_lofi_bots_explain' => 'By enabling this option LoFi will be enabled for bots.',

		'IP_adsense_code' => 'Google AdSense Publisher Code',
		'IP_adsense_code_explain' => 'Insert here your Google AdSense Publisher Code and it will be inserted in the Google Search page. If you don\'t want to use it, just leave this field blank.',

		'IP_google_analytics' => 'Google Analytics Code',
		'IP_google_analytics_explain' => 'Insert here your Google Analytics Code (the Javascript provided by Google site) and it will be automatically inserted at the bottom of every page.',

//Sitemap
		'Sitemap_settings' => 'Sitemap Settings',

		'IP_sitemap_topic_limit' => 'Google Sitemap :: Topic Limit',
		'IP_sitemap_topic_limit_explain' => 'Maximum number of topics to fetch with a single database query',

		'IP_sitemap_announce_priority' => 'Google Sitemap :: Announcement Priority',
		'IP_sitemap_announce_priority_explain' => 'Priority for announcements (must be a number between 0.0 &amp; 1.0 inclusive)',

		'IP_sitemap_sticky_priority' => 'Google Sitemap :: Sticky Priority',
		'IP_sitemap_sticky_priority_explain' => 'Priority for sticky topics (must be a number between 0.0 &amp; 1.0 inclusive)',

		'IP_sitemap_default_priority' => 'Google Sitemap :: Default Priority',
		'IP_sitemap_default_priority_explain' => 'Priority for regular topics (must be a number between 0.0 &amp; 1.0 inclusive)',

		'IP_sitemap_sort' => 'Google Sitemap :: Sort Order',
		'IP_sitemap_new_first' => 'New posts first',
		'IP_sitemap_old_first' => 'Old posts first',

		'Word_graph' => 'TAGS',

		'IP_word_graph_max_words' => 'TAGS :: Maximum Words',
		'IP_word_graph_max_words_explain' => 'Select the maximum number of words to display. A higher number could affect server load. The recommended number is 250.',

		'IP_word_graph_word_counts' => 'TAGS :: Enable Word Counts',
		'IP_word_graph_word_counts_explain' => 'Display the total number of words next to each word?<br />Example: <b>Icy Phoenix (365)</b>?',

		'IP_forum_wordgraph' => 'TAGS :: Forum Tags (Global Switch)',
		'IP_forum_wordgraph_explain' => 'This feature will enable a forum based tags table at the bottom of each forum. You will need also to enable single forums in Forums Management section.',

		'Similar_topics' => 'Similar Topics',
		'Similar_topics_explain' => 'Configure search of similar topics.',

		'IP_similar_topics' => 'Similar Topics :: Similar Topics (Global Switch)',
		'IP_similar_topics_explain' => 'This is the global switch for Similar Topics. If you want to switch on this feature you will need also to enable single forums in Forums Management section.',

		'IP_similar_topics_desc' => 'Similar Topics :: Take into account the description of a topics',

		'IP_similar_stopwords' => 'Similar Topics :: Exclude stop-words',

		'IP_similar_max_topics' => 'Similar Topics :: Maximum number of topics to show',

		'IP_similar_sort_type' => 'Similar Topics :: Sort by',
		'IP_similar_sort_type_explain' => 'Select sort method for the similar topics',
		'IP_similar_sort_type_time' => 'Post Time',
		'IP_similar_sort_type_relev' => 'Relevance',

		'IP_similar_ignore_forums_ids' => 'Similar Topics :: Ignored forums',
		'IP_similar_ignore_forums_ids_explain' => 'Enter the ID\'s of forums, in which the similar topics will be ignored (for example test forum, forum for talk, etc.). One ID per line.',

// TAB - Logging And Security
		'IP_admin_protect' => 'Protect Main Admin Account',
		'IP_admin_protect_explain' => 'Enabling this option will add more security to Main Admin: it can\'t be demoted by others administrators or users.',

		'IP_db_log_actions' => 'Enable DB Actions Log',
		'IP_db_log_actions_explain' => 'By enabling this option any action that modifies the DB will be stored in a the DB. If this option has been set as true in constants.php, then cannot be disabled in ACP. If you select to have the reports, then extra files will be stored with all errors logged.',

		'IP_mg_log_actions' => 'Enable TXT Actions Log',
		'IP_mg_log_actions_explain' => 'By enabling this option any action that modifies the DB will be stored in a text file on the server (file will be stored in the LOGS folder). This file is not easy to read, but it may be useful under certain conditions. Enable it only if you know what your doing (site may slow down if you enable it).',

		'IP_write_errors_log' => 'Enable Site Errors Log',
		'IP_write_errors_log_explain' => 'By enabling this option all site errors (i.e. 404 file missing, bad requests, etc) will be logged into a daily TXT file. Remember that you need to enable errors redirecting to errors.php in .htaccess to use this feature (an example is included in .htaccess, just insert your domain and decomment the lines).',

		'IP_write_digests_log' => 'Enable Digests Log',
		'IP_write_digests_log_explain' => 'By enabling this option all digests sent will be logged into a daily TXT file.',

		'IP_logs_path' => 'Path for Logs (remember to CHMOD this folder to 0755 or 0777 as required)',
		'IP_logs_path_explain' => 'Insert the path for the errors and other logs relative to your root and without ending slash. Example: <b>logs</b>.',

// TAB - Cron
		'IP_cron_global_switch' => 'Enable PHP Cron [Global Switch]',
		'IP_cron_global_switch_explain' => 'By enabling this option a PHP based cron will be activated: some automatic operations will be executed at fixed time intervals. The optimal time range for each cron feature depends on your site traffic and preferences: if you don\'t know what these settings may impact, please leave this feature disabled, you probably don\'t need it.',

		'IP_cron_files_interval' => 'Files Executions Cron Interval',
		'IP_cron_files_interval_explain' => 'This kind of cron may be used to automatically run certain files every fixed interval you decide. The files to be executed must be added in <b>constants.php</b> &raquo; <b>define(\'CRON_FILES\', \'\');</b>. Multiple files must be separated by comma.<br /><br /><b>Last run: ' . (($board_config['cron_files_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_files_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_database_interval' => 'DB Optimization Cron Interval',
		'IP_cron_database_interval_explain' => 'This feature will optimize the database of the site every chosen interval.<br /><br /><b>Last run: ' . (($board_config['cron_database_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_database_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_cache_interval' => 'Tidy Templates Cache Cron Interval',
		'IP_cron_cache_interval_explain' => 'Templates cache is cleaned every chosen interval.<br /><br /><b>Last run: ' . (($board_config['cron_cache_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_cache_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_sql_interval' => 'Tidy SQL Cache Cron Interval',
		'IP_cron_sql_interval_explain' => 'SQL cache is cleaned every chosen interval.<br /><br /><b>Last run: ' . (($board_config['cron_sql_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_sql_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_users_interval' => 'Tidy Users Cache Cron Interval',
		'IP_cron_users_interval_explain' => 'Users cache is cleaned every chosen interval.<br /><br /><b>Last run: ' . (($board_config['cron_users_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_users_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_topics_interval' => 'Tidy Topics Cache Cron Interval',
		'IP_cron_topics_interval_explain' => 'Topics cache is cleaned every chosen interval.<br /><br /><b>Last run: ' . (($board_config['cron_topics_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_topics_last_run']), $board_config['board_timezone'])) . '</b>',

		'Cron_Disabled' => 'Disabled',
		'15M' => '15 Minutes',
		'30M' => '30 Minutes',
		'1H' => '1 Hour',
		'2H' => '2 Hours',
		'3H' => '3 Hours',
		'6H' => '6 Hours',
		'12H' => '12 Hours',
		'1D' => '1 Day',
		'3D' => '3 Days',
		'7D' => '1 Week',
		'14D' => '2 Weeks',
		'30D' => '1 Month',


// lang_extend_mods_settings.php
		'Lang_extend_mods_settings' => 'Icy Phoenix Settings',
		'Configuration_extend' => 'Icy Phoenix',
		'Override_user_choices' => 'Override user choices',
		)
	);
}

$lang = array_merge($lang, array(
	'CFG_NONE' => 'NONE',
	'CFG_ALL' => 'ALL',
	'CFG_REG' => 'REG',
	'CFG_SELF' => 'SELF',
	'CFG_PRIVATE' => 'PRIVATE',
	'CFG_MOD' => 'MOD',
	'CFG_ADMIN' => 'ADMIN',

// lang_extend_categories_hierarchy.php - BEGIN
	'Hierarchy_setting' => 'F�rum',
	'Forum_link' => 'Link �tir�ny�t�s',
	'Forum_link_visited' => 'Ezt a linket %d-szer l�tt�k',

	'Use_sub_forum' => 'Index felsorol�sa',
	'Index_packing_explain' => 'Choose the level of packing you want for the index',
	'Medium' => 'K�zepes',
	'Full' => 'Teljes',
	'Split_categories' => 'Split categories on index',
	'Use_last_topic_title' => 'Show the last topic titles on index',
	'Last_topic_title_length' => 'Title length of the last topic on index',
	'Sub_level_links' => 'Sub-level links on index',
	'Sub_level_links_explain' => 'Add the links to the sub-levels in the forum or category description',
	'With_pics' => 'With icons',
	'Display_viewonline' => 'Display viewonline information box on index',
	'Never' => 'Soha',
	'Root_index_only' => 'Csak a root indexeit',
	'Always' => 'Mindig',
	'Subforums' => 'Alf�rumok',
// lang_extend_categories_hierarchy.php - END

// lang_extend_topic_calendar.php - BEGIN
	'Calendar_settings' => 'Napt�r',
	'Calendar' => 'Napt�r',
	'Calendar_scheduler' => '�temez�',
	'Calendar_event' => 'Napt�ri esem�ny',
	'Calendar_from_to' => '%s-t�l %s-ig',
	'Calendar_time' => '%s',
	'Calendar_duration' => 'Id�tartam',

	'Calendar_week_start' => 'A h�t els� napja',
	'Calendar_header_cells' => 'A f�rum fejl�c�ben megjelen� cell�k sz�ma (a 0 letiltja a megjelen�st)',
	'Calendar_title_length' => 'Length of the title displayed in the calendar cells',
	'Calendar_text_length' => 'Length of the text displayed in the overview windows',
	'Calendar_block_display' => 'A f�rum fejl�c�ben megjelen� sorok sz�ma',
	'Calendar_display_open' => 'Display the calendar row on the board header opened (if calendar row enabled)',
	'Calendar_nb_row' => 'A f�rum fejl�c�ben megjelen� egy napra es� sorok sz�ma',
	'Calendar_birthday' => 'Sz�let�snapok megjelen�t�se a napt�rban',
	'Calendar_forum' => 'A napt�rban jelenjen meg a f�rum neve alatt a t�ma c�me is',

	'Sorry_auth_cal' => 'Bocsi, de csak %s hozhat l�tre napt�ri bejegyz�st ebben a f�rumban.',
	'Date_error' => 'Nem �rv�nyes d�tum: nap: %d, h�nap: %d, �v: %d',

	'Event_time' => 'Az esem�ny ideje',
	'Minutes' => 'Perc',
	'Today' => 'Ma',
	'Yesterday' => 'Tegnap',
	'All_events' => 'Minden esem�ny',

/*
	'Rules_calendar_can' => 'You <b>can</b> post calendar events in this forum',
	'Rules_calendar_cannot' => 'You <b>cannot</b> post calendar events in this forum',
*/
	'Rules_calendar_can' => '<b>Tudsz</b> bek�ldeni napt�ri esem�nyt',
	'Rules_calendar_cannot' => '<b>Nem tudsz</b> bek�ldeni napt�ri esem�nyt',

	'birthday_header' => 'Happy Birthday!',
	'birthday' => '<b>%s</b> has a birthday today!',
// lang_extend_topic_calendar.php - END

	'DB_LOG_ALL' => 'Igen, hibajelent�ssel',
	)
);

?>
