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
	'PHPBB_FEATURES_PAGE' => '����������� ��� PHPBB ���� ����� �� ������������ ����� PHPBB [ <a href="http://www.phpbb.com/about/features/">LINK</a> ]',

/*********/
	'cat_general' => '����� ',

	'item_license' => '��������',
	'bb2_license' => 'GPL',
	'ip_license' => 'GPL',
	'bb3_license' => 'GPL',

	'item_price' => '���� �������� ',
	'bb2_price' => '��������� ',
	'ip_price' => '��������� ',
	'bb3_price' => '��������� ',

	'item_programming' => '���� ���������������� ',
	'bb2_programming' => 'PHP',
	'ip_programming' => 'PHP',
	'bb3_programming' => 'PHP',

	'item_latest' => 'Latest Version',
	'bb2_latest' => '2.0.22',
	'ip_latest' => '1.3.0.53',
	'bb3_latest' => '3.0.2',

	'item_release' => 'Release Date',
	'bb2_release' => '2008/02/17',
	'ip_release' => '2009/07/18',
	'bb3_release' => '2008/07/10',

/*********/
	'cat_basic_features' => '�������� ��������������',

 'item_utf8' => '��������� UTF-8',
 'item_user_preferences' => '������������ ���������',
 'item_mod' => '����������',
 'item_admin' => '�����������������',
 'item_search_engine' => '��������� ����� ���������� ���������',
 'item_un_mess_track' => '������������� ������� ���������',
 'item_pms' => '������� ������� ������ �����������',
 'item_stat' => '����������',

/*********/
	'cat_security' => '������������',

 'item_perm_ban' => '���������� �������',
 'item_temp_ban' => '��������� ������� (������������)',
 'item_permission' => '����������',
 'item_paid_sec' => '����������� �������� ������������ ��������� ������������� ������������',
 'item_form_hand' => '��������� �����',
 'item_t_a_p_h' => '�������� ������������� ��������� ���������',
 'item_t_a_d_l' => '�������� ������������� ������� ���� ������',
 'item_p_h' => '����������� ������',

/*********/
	'cat_antispam' => '������ �����',

 'item_c_v_c' => 'CAPTCHA ���������� �������������',
 'item_f_c' => '������ � ������������',
 'item_groups' => '������',
 'item_acls' => 'ACLs',
 'item_b_l' => '������ ������',
 'item_banning' => '������',
 'item_suspension' => '������������',
 'item_warn' => '��������������',
 'item_u_l' => '������������, ��������������',
 'item_u_p_ip_l' => '���������������� ����������� IP �����',
 'item_r_p' => '�������� �����',
 'item_post_m' => '�������� ����������',

/*********/
	'cat_datamanagement' => '���������� �������',

 'item_mysql' => 'MySQL',
 'item_mssql' => '������ MSSQL',
 'item_mssql_odbc' => 'MSSQL ODBC',
 'item_postgre' => 'PostgreSQL',
 'item_ms_access' => '������ MS',
 'item_oracle' => '������',
 'item_firebird' => 'Firebird',
 'item_sql_lite' => 'SQL_Lite',
 'item_db_back' => '���� ������ (������� ���������� ����� ������) ��������� �����',
 'item_db_restore' => '���� ������ (������� ���������� ����� ������) ��������������',
 'item_p_t_pruning' => '���� / ��������� ��������� ������� ����',

/*********/
	'cat_registration' => '�����������',

 'item_coppa' => '����������� COPPA',
 'item_l_r_a' => '��������������� ������� �������',
 'item_username_lenght' => '������� ������ / ������������ ����� ����� ������������',
 'item_pass_lenght' => '������� ������ / ������������ ����� ������',
 'item_l_u_c' => '������� ����� ������������ �������',
 'item_s_p_c_r' => '���������� ��������� ������ ������',
 'item_f_p_c' => '��������� ������ ����',
 'item_e_mail_address_reusage' => '��������� / ��������� �������� ����������������� ������',

/*********/
	'cat_posting' => '�������� �����������',

 'item_t_d_m' => '����� ������� ����',
 'bb2_t_d_m' => '��������',
 'ip_t_d_m' => '��������',
 'bb3_t_d_m' => '��������',

 'item_bbcode' => 'BBCode',
 'item_bbcode_custom' => '�������� ������ BBCode',
 'item_html_in_post' => 'HTML � ������',
 'item_emoticon' => 'Smilies / ���������',
 'item_quoting' => '�����������',
 'item_q_m_p' => '�������� ������������� �����',
 'item_f_t' => '������ ��������������',
 'item_w_c' => '������� Word',
 'item_s_h' => '��������� ����������',
 'item_attachments' => '��������',
 'item_p_d' => '��������� �������',
 'item_polls' => '������',
 'item_m_p_o_v' => '������� ��� ����, ����������',
 'item_u_b_p_t' => '������������ ��������� ������� ������',
 'item_all_dis_v_c' => '��������� / ��������� ��������� �����������',
 'item_beaten_p_review' => '������� � ��������� ����������� �����',
 'item_p_p' => '����������� ��������������� ��������',
 'item_flood_control' => '������ � ������������',

/*********/
	'cat_attachments' => '��������',

 'item_a_i_t' => '�������������� ������ �����������',
 'item_a_t' => '���� ��������',
 'item_m_a' => '������������� ��������',
 'item_a_p' => '���������� ��������',

/*********/
	'cat_caching' => '�����������',

 'item_db_q_c' => '����������� ������� ���� ������',
 'item_t_c' => '����������� �������',
 'item_a_d' => '������������ ������',
 'item_m_c_r' => '������ ����������� ����',

/*********/
	'cat_profile' => '������������ / Memberlist',

 'item_c_p_f' => '�������� ���� ������������',
 'item_u_p_s' => '������������, ����������� ������',
 'item_u_i_m' => '���������������� ����������� �������',
 'item_u_p_d' => '����������� ��������� ������������',
 'item_m_list_search' => '����� Memberlist',
 'item_u_m_v' => '��������� ������������������� ������������ �����������, ����������������',

/*********/
	'cat_search_system' => '��������� ������� ',

	'item_ft_n' => '�������� Fulltext',
 'item_c_t_s' => '����������� ����� ����',
 'item_c_f_s' => '����������� ����� ������',
 'item_my_sql_text' => 'MySQL fulltext',
 'item_a_s' => '����� ������',
 'item_a_search' => '����������� ������',
 'item_v_a_post' => '���������� ���������� ��� ������ ��������� ',
 'item_a_n_t' => '�������� / ����� ����',
 'item_p_s_l_v' => '��������� ������� � ���������� ���������',
 'item_s_f_l' => '������ � ������������ ������',

/*********/
	'cat_forums' => '������',

	'item_categories' => '���������',
'item_p_p_f' => '���������� ������� ������',
 'item_f_s_s' => '����� ������������ �����',
 'item_url_l_r_f' => '������ URL ���������������� ������',
 'item_f_rules' => '������� ������',
 'item_subforum' => '���������',
 'item_last_post' => '������ �����',
 'item_forum_pruning' => '��������� ��������� ������� ������',
 'item_d_a_t' => '���������� �������� ����',
 'item_s_t_forums' => '����������� �� ������',
 'item_s_t_topics' => '����������� �� ����',
 'item_b_t' => '�������� ����',
 'item_t_s' => '����������� ����',
 'item_p_s' => '����������� ���������',
 'item_t_p_t' => '������� ������� ����',
 'item_print_t' => '�������� ����',
 'item_e_mail_t' => '�������� �� ����������� ����� ����',

/*********/
	'cat_ucp' => '������ ���������� ',

	'item_u_s' => '������������ ���',
 'item_u_a' => '������ ������������',
 'item_u_ranks' => '���� ������������ ',
 'item_u_o_l' => '������������ ������ �����������',
 'item_user_p' => '������������ ���������',
 'item_u_p_s' => '��������� ��������� ��������� ������������',
 'item_m_s_pm_post_d' => '����������� ����������� pm / ��������� �������',
 'item_m_book' => '��������� ����������',
 'item_m_attach' => '��������� ����������',
 'item_m_s_t' => '��������� ������������ ������',
 'item_c_p_f' => '�������� ���� ������������',
 'item_friend_foe_list' => '������ / ������ ����������',

/*********/
	'cat_priv_messaging' => '������ ��������� ',

	'item_add_pm_folder' => '�������������� �����',
	'item_custom_pm_filter' => '������������� ������� ����������',
	'item_send_multiple_reci' => '��������� ���������� ��������� ',
	'item_send_blind_carbon' => '��������� ������� ����� �������� ',
	'item_send_to_group' => '��������� ������ ',
	'item_f_message' => '���������� ��������� ',
	'item_a_book' => '�������� ����� ',
	'item_message_d' => '��������� ��������� ',
	'item_exp_mess' => '�������������� ��������� ',
	'item_attach_message' => '�������� ��� ��������� ',
	'item_convers_view' => '�������� ������� ',
	'item_c_m_h_r' => '����� ��������� ������ ��������� � ',

/*********/
	'cat_usergroups' => '������ ������������� ',

	'item_g_t' => '���� ������',
 'item_ucp_group_manage' => '���������� ������ UCP',
 'item_ucp_group_manage_membership' => 'UCP ��������� ���������� ������',
 'item_m_g_l' => '������������� ������ ������',
 'item_c_g_c' => '�������� ����� ������',
 'item_group_ranks' => '����� ������',
 'item_group_avatar' => '������� ������',
 'item_group_based_memberlist' => '������ ��������� ������� Memberlist',

/*********/
	'cat_mcp' => '������ ���������� ����������',

 'item_global_moder' => '���������� ����������',
 'item_forum_moder' => '���������� ������',
 'item_t_post_m_q' => '���� / ��������� ������� ����������',
 'item_m_r_t_p' => '�����������, �������� ���� / �����',
 'item_t_h' => '���������� ����',
 'item_f_t_logs' => '����� / ����� ����������� ����',
 'item_l_m_l' => '������������ ����� ����������� ����������',
 'item_p_e' => '�������������� �����',
 'item_p_l' => '���������� �����',
 'item_post_details' => '��������� �����������',
 'item_c_p_author' => '����� ����� ���������',
 'item_quick_mod_tools' => '���������������� �������� Quick_Mod',
 'item_moving_t' => '����������� ����',
 'item_m_m_t' => '���������� ������������� ����',
 'item_merging_t' => '����������� ����',
 'item_merging_p' => '����������� ���������',
 'item_merging_multiple_t' => '������������ ������������� ����',
 'item_split_t' => '���� ���������',
 'item_locking_t' => '���������� ���',
 'item_deleting_t' => '�������� ���',
 'item_copying_t' => '����������� ���',
 'item_global_topics' => '���������� ����',
 'item_announcement_t' => '���� ����������',
 'item_s_topics' => '������ ����',
 'item_mange_bans' => '��������� ���������',
 'item_m_u_w' => '��������� ������������� ���������',
 'item_banning_by_username' => '������ ������ ������������',
 'item_banning_by_email' => '������ �������� �������',
 'item_banning_by_ip' => '������ ������� IP',
 'item_user_notes' => '������������ ����',

/*********/
	'cat_acp' => '������������� ������ ���������� ',
'item_f_s_b_c' => '��������� ���������� / ��������� ������',
 'item_l_s' => '��������� ��������� ���������',
 'item_p_i_u' => '��������� ���������� �������������',
 'item_m_r' => '��������� �������',
 'item_m_groups' => '��������� ��������',
 'item_m_group_membership' => '��������� ���������� ������',
 'item_manage_attach_setting' => '��������� ���������� � ��������� ���������',
 'item_manage_user_attachment' => '��������� ������������� �����������',
 'item_user_editing' => '������������, �������������',
 'item_list_group_index' => '������ ������ �� �������',
 'item_topic_icons' => '������ ����',
 'item_mass_e_mail' => '����� �������� �� ����������� �����',
 'item_manage_report_reasons' => '��������� ������� / ������� ���������',
 'item_module_manage' => '���������� �������',
 'item_custom_bbcode' => '�������� BBCodes',
 'item_custom_profile_field' => '�������� ���� ������������',
 'item_custom_profile_field_placement' => '�������� ����� ���������� ����� ������������',
 'item_custom_profile_data_types' => '�������� ���� ������ ����� ������������',
 'item_manage_bans' => '��������� ���������',
 'item_ban_by_username' => '������ ������ ������������',
 'item_ban_by_email' => '������ �������� �������',
 'item_ban_by_ip' => '������ ������� IP',

/*********/
'cat_styles' => '�����',

 'item_s_style' => '������� �����',
 'item_install_style' => '���������� / ��������� ��������� �������',
 'item_custom_style' => '��������� / ������������� �������',
 'item_custom_themes' => '��������� / ������������� ����',
 'item_custom_imageset' => '��������� / ������������� �����������',

/*********/
	'cat_permission' => '���������� ',

	'item_g_b_g_p' => '������, ���������� ���������� ����������',
 'item_g_b_m_p' => '������, ���������� ���������� ����������',
 'item_g_b_a_p' => '������, ���������� ���������� �����������������',
 'item_g_b_f_p' => '������, ���������� ���������� ������',
 'item_u_b_g_p' => '������������, ���������� ���������� ����������',
 'item_u_b_m_p' => '������������, ���������� ���������� ����������',
 'item_u_b_a_p' => '������������, ���������� ���������� �����������������',
 'item_u_b_f_p' => '������������, ���������� ���������� ������',
 'item_admin_perm_roles' => '���� ���������� �������������',
 'item_user_perm_roles' => '���������������� ���� ����������',
 'item_mod_perm_roles' => '���� ���������� ����������',
 'item_forum_perm_roles' => '���� ���������� ������',
 'item_mask_perm_multi' => '�������������� ����� ����������',

/*********/
	'cat_notifications' => '����������� ',

	'item_e_mail_true' => 'E-mail',
	'item_instant_mess' => '���������� ����� ����������� ',
	'item_book_m' => '�������� ',

/*********/
	'cat_localisations' => '����������� ',

	'item_s_m_l_p' => '��������� ���������� ������ ����������� ',
	'item_language' => '����� ',
	'bb2_language' => '50+',
	'ip_language' => '6',
	'bb3_language' => '61',
	'item_right_t_left' => '������ ������ ��������� ',
	'item_l_p_w_edit' => '����������� Web-�������� ',

/*********/
'cat_install' => '����������� / ����������',

 'item_install_wizard' => '��������������� ������',
 'item_update_wizard' => '��������� �������',
 'item_converter_wizard' => '������ ����������',
 'item_file_merge_diff_engine' => '�������� ������� ����� ��������� ��������',

/*********/
	'cat_technical' => '����������� �������������� ',

	'item_cms_integra' => 'CMS ���������� ������������ ����������� ',
	'item_xhtml_compliant' => 'XHTML ������������� ',

/*********/
	'cat_plugins' => '������� ',

	'item_auth_plug' => 'Auth ������� ',
	'item_search_plug' => '����� �������� ',
	'item_cache_plug' => '��� ������� ',
	'item_hooks_sys' => '������ ������� ',
	'item_expand_module' => '����������� ������ ',

/*********/
	'cat_features' => '�������������� �����������',

 'item_feat_cms' => 'CMS',
 'item_feat_album' => '�����������',
 'item_feat_downloads' => '��������� �������',
 'item_feat_kb' => '���� ������',
 'item_feat_links' => '��������� �������',
 'item_feat_news' => '��������� ��������',
 'item_feat_stats' => '������ ����������',
 'item_feat_contact_us' => '����� ���������',
 'item_feat_lofi' => '������������� LoFi',
 'item_feat_ajax_shoutbox' => '���',
 'item_feat_shoutbox' => '����������� Shoutbox',
 'item_feat_calendar' => '��������� � ������� �������',
 'item_feat_pm_notifications' => 'pm �� ����� ����������� � ���� ��������',

/*********/
	'cat_features_acp' => '�������������� ������������ ���������� ��������������� ����������� ���������',

 'item_feat_info' => '���������� ������� �� ��������������� ����������� ����������',
 'item_feat_db_mntnc' => '������������ ���� ������',
 'item_feat_mysqladmin' => '������������� MySQL',
 'item_feat_editable_f_r' => '������������ ��������� ��� �������������� ����� ���������� ������� � �������',
 'item_feat_multiple_ranks' => '������������� �����',

/*********/
 'cat_features_ucp' => '�������������� ������������ ���������� UCP',

 'item_feat_ajax_checks' => '���� ���� �� �����������',
 'item_feat_upi2db' => '������������� ��������� � ��',
 'item_feat_custom_avatar' => '�������� �������� �������',
 'item_feat_profile_stats' => '���������� ������������ � �������������� ���������������� ����������',
 'item_feat_user_self_deactivation' => '������������ ��� ������������',
 'item_feat_login_archive' => '���������� ����� � �������',

/*********/
 'cat_features_bbcodes' => '�������������� ������������ ���������� BBCodes',

 'item_feat_random_quotes' => '��������� �������',
 'item_feat_bbcodes' => '��������������� ���� BBCodes',
 'item_feat_acronyms' => '��������',
 'item_feat_autolinks' => '����������',
 'item_feat_smiley_creator' => '��������� ��������',

/*********/
 'cat_features_seo' => '�������������� ������������ ���������� SEO',

 'item_feat_url_rewrite' => '����������� SEO � ���������� URL',
 'item_feat_rss' => '������ RSS',
 'item_feat_referrers' => '������� Referrers',
 'item_feat_referrers' => '������� �����',
 'item_feat_referrers' => '�������� � ����������� OS',
 'item_feat_banners' => '��������� � ���������� ���������',

/*********/
 'cat_features_forum' => '�������������� ������������ ���������� ����� � �������� �����������',

 'item_feat_bin' => '���� ���',
 'item_feat_forum_icons' => '������ ������',
 'item_feat_link_this_topic' => '��������� ��� ����',
 'item_feat_edit_notes' => '����������� ����������',
 'item_feat_topic_prefixes' => '�������� ����',
 'item_feat_topic_description' => '�������� ����',
 'item_feat_rating' => '������ ����',
 'item_feat_thanks' => '������������� ����',
 'item_feat_topic_views' => '��������� ����',
 'item_feat_digests' => '������ ���',
 'item_feat_upload_images' => '�������� �����������, ��������',
 'item_feat_quick_reply' => '������� �����',
 'item_feat_social_bookmars' => '���������� ��������',
 'item_feat_ftr' => '������ ���� ����',
 'item_feat_detailed_notifications' => '��������� ����������� � �����������',

//	'item_feat_' => '',
	)
);

?>