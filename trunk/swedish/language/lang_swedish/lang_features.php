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
	'FEATURES' => 'Funktioner',
	'PHPBB2' => 'phpBB2',
	'ICYPHOENIX' => 'Icy Phoenix',
	'PHPBB3' => 'phpBB3',
	'PHPBB_FEATURES_PAGE' => 'Funktioner för phpBB har hämtats från officiella phpBB webbplatsen [ <a href="http://www.phpbb.com/about/features/">LÄNK</a> ]',

/*********/
	'cat_general' => 'Allmänt',

	'item_license' => 'Licens',
	'bb2_license' => 'GPL',
	'ip_license' => 'GPL',
	'bb3_license' => 'GPL',

	'item_price' => 'Licens Pris',
	'bb2_price' => 'Gratis',
	'ip_price' => 'Gratis',
	'bb3_price' => 'Gratis',

	'item_programming' => 'Programmerings Språk',
	'bb2_programming' => 'PHP',
	'ip_programming' => 'PHP',
	'bb3_programming' => 'PHP',

	'item_latest' => 'Senaste Version',
	'bb2_latest' => '2.0.22',
	'ip_latest' => '1.2.0.27',
	'bb3_latest' => '3.0.2',

	'item_release' => 'Offentliggörande Datum',
	'bb2_release' => '2008/02/17',
	'ip_release' => '2008/03/03',
	'bb3_release' => '2008/07/10',

/*********/
	'cat_basic_features' => 'Grundläggande Funktioner',

	'item_utf8' => 'UTF-8 Support',
	'item_user_preferences' => 'Användarinställningar',
	'item_mod' => 'Moderation',
	'item_admin' => 'Administration',
	'item_search_engine' => 'Sökrobotar Handling',
	'item_un_mess_track' => 'Olästa meddelande spårning',
	'item_pms' => 'Privata Meddelande System',
	'item_stat' => 'Statistik',

/*********/
	'cat_security' => 'Säkerhet',

	'item_perm_ban' => 'Permanent Bannlysning',
	'item_temp_ban' => 'Tillfällig Bannlysning (Uppskov)',
	'item_permission' => 'Behörigheter',
	'item_paid_sec' => 'Betald Säkerhetskod Audit',
	'item_form_hand' => 'Form Handling',
	'item_t_a_p_h' => 'Typ Medveten Parameter Handling',
	'item_t_a_d_l' => 'Typ Medveten Databas Nivå',
	'item_p_h' => 'Lösenord Hashing',

/*********/
	'cat_antispam' => 'Anti-Spam',

	'item_c_v_c' => 'CAPTCHA Visuell Bekräftelse',
	'item_f_c' => 'Flood Kontroll',
	'item_groups' => 'Grupper',
	'item_acls' => 'ACLs',
	'item_b_l' => 'Svartlista',
	'item_banning' => 'Bannlysning',
	'item_suspension' => 'Uppskov',
	'item_warn' => 'Varningar',
	'item_u_l' => 'Användar Loggning',
	'item_u_p_ip_l' => 'Användar Inlägg IP Loggning',
	'item_r_p' => 'Rapportera Inlägg',
	'item_post_m' => 'Post Moderation',

/*********/
	'cat_datamanagement' => 'Data Hantering',

	'item_mysql' => 'MySQL',
	'item_mssql' => 'MSSQL Server',
	'item_mssql_odbc' => 'MSSQL ODBC',
	'item_postgre' => 'PostgreSQL',
	'item_ms_access' => 'MS Access',
	'item_oracle' => 'Oracle',
	'item_firebird' => 'Firebird',
	'item_sql_lite' => 'SQL_Lite',
	'item_db_back' => 'Databas (DBMS) Backups',
	'item_db_restore' => 'Databas (DBMS) Återställning',
	'item_p_t_pruning' => 'Inlägg / Ämnes Beskärning',

/*********/
	'cat_registration' => 'Registrering',

	'item_coppa' => 'COPPA Registrering',
	'item_l_r_a' => 'Begränsade Registrerings Försök',
	'item_username_lenght' => 'Sätt min / max Användarnamn Längd',
	'item_pass_lenght' => 'Sätt min / max Lösenords Längd',
	'item_l_u_c' => 'Begränsade Användarnamn Tecken',
	'item_s_p_c_r' => 'Sätt Lösenords Komplexitets Krav',
	'item_f_p_c' => 'Tvinga Lösenords Ändring',
	'item_e_mail_address_reusage' => 'Tillåt / Tillåt Ej e-post Adress  Åter-användning',

/*********/
	'cat_posting' => 'Postning',

	'item_t_d_m' => 'Ämnes Visnings Metod',
	'bb2_t_d_m' => 'Platt',
	'ip_t_d_m' => 'Platt',
	'bb3_t_d_m' => 'Platt',

	'item_bbcode' => 'BBKod',
	'item_bbcode_custom' => 'Anpassade BBKod Knappar',
	'item_html_in_post' => 'HTML i poster',
	'item_emoticon' => 'Smilies / Emotikoner',
	'item_quoting' => 'Citat',
	'item_q_m_p' => 'Citera Flera Inlägg',
	'item_f_t' => 'Formatering Verktygsfält',
	'item_w_c' => 'Ord Censurer',
	'item_s_h' => 'Syntax Highlighting',
	'item_attachments' => 'Bilagor',
	'item_p_d' => 'Post Utkast',
	'item_polls' => 'Undersökningar',
	'item_m_p_o_v' => 'Flera Undersökningar Alternativ Röstning',
	'item_u_b_p_t' => 'Användar Baserd Undersöknings Tracking',
	'item_all_dis_v_c' => 'Tillåt / Tillåt Ej Omröstnings Ändring',
	'item_beaten_p_review' => 'Piskad Till Postnings Granskning',
	'item_p_p' => 'Postnings Förhandsgranskning',
	'item_flood_control' => 'Flood Kontroll',

/*********/
	'cat_attachments' => 'Bilagor',

	'item_a_i_t' => 'Automatisk Bild Miniatyrbilder',
	'item_a_t' => 'Bilage Typer',
	'item_m_a' => 'Flerfaldiga Bilagor',
	'item_a_p' => 'Bilagor Placering',

/*********/
	'cat_caching' => 'Caching',

	'item_db_q_c' => 'Databas Query Caching',
	'item_t_c' => 'Mall Caching',
	'item_a_d' => 'Godtycklig Data',
	'item_m_c_r' => 'Manuell Cache Uppdatering',

/*********/
	'cat_profile' => 'Profil / Medlemslista',

	'item_c_p_f' => 'Anpassat Profil Fält',
	'item_u_p_s' => 'Användare Postnings Stats',
	'item_u_i_m' => 'Användare Instant Messengers',
	'item_u_p_d' => 'Användar Profil Detaljer',
	'item_m_list_search' => 'Medlemslista Sökning',
	'item_u_m_v' => 'Hindra Icke-Registrerad Användare Memdlemslista Visning',

/*********/
	'cat_search_system' => 'Sök System',

	'item_ft_n' => 'Fulltext Native',
	'item_c_t_s' => 'Vanligt Ämnes Sök',
	'item_c_f_s' => 'Vanligt Forum Sök',
	'item_my_sql_text' => 'MySQL fulltext',
	'item_a_s' => 'Författare Sökning',
	'item_a_search' => 'Avancerad Sökning',
	'item_v_a_post' => 'Visa obesvarade inlägg',
	'item_a_n_t' => 'Aktiv / Nya Ämnen',
	'item_p_s_l_v' => 'Inlägg Sedan Senaste Besök',
	'item_s_f_l' => 'Sök Flood Kontroll',

/*********/
	'cat_forums' => 'Forum',

	'item_categories' => 'Kategorier',
	'item_p_p_f' => 'Lösenords Skyddat Forum',
	'item_f_s_s' => 'Forum Särskilda Stilar',
	'item_url_l_r_f' => 'URL Länk Omdirigera Forum',
	'item_f_rules' => 'Forum Regler',
	'item_subforum' => 'Underforum',
	'item_last_post' => 'Senaste Post',
	'item_forum_pruning' => 'Forum Beskärning',
	'item_d_a_t' => 'Visa Aktiva Ämnen',
	'item_s_t_forums' => 'Prenumerera på Forum',
	'item_s_t_topics' => 'Prenumerera på Ämnen',
	'item_b_t' => 'Bokmärk Ämnen',
	'item_t_s' => 'Ämnes Sortering',
	'item_p_s' => 'Inläggs Sortering',
	'item_t_p_t' => 'Ämne Deltagande Tracking',
	'item_print_t' => 'Skriv ut Ämnen',
	'item_e_mail_t' => 'E-post Ämnen',

/*********/
	'cat_ucp' => 'Användar Kontroll Panel',

	'item_u_s' => 'Användar Signaturer',
	'item_u_a' => 'Användar Avatars',
	'item_u_ranks' => 'Användar Rank',
	'item_u_o_l' => 'Användares Online Lista',
	'item_user_p' => 'Användar Inställningar',
	'item_u_p_s' => 'Användar Profil Inställning',
	'item_m_s_pm_post_d' => 'Hantera Sparade PM / Post Utkast',
	'item_m_book' => 'Hantera Bokmärken',
	'item_m_attach' => 'Hantera Bilagor',
	'item_m_s_t' => 'Hantera Tecknade Ämnen',
	'item_c_p_f' => 'Anpassat Profil Fält',
	'item_friend_foe_list' => 'Vänner / Foe Lista',

/*********/
	'cat_priv_messaging' => 'Privata Meddelanden',

	'item_add_pm_folder' => 'Ytterligare PM Mappar',
	'item_custom_pm_filter' => 'Anpassningsbar PM Filtrerings Regler',
	'item_send_multiple_reci' => 'Skicka till Flera Mottagare',
	'item_send_blind_carbon' => 'Sänd Hemliga Exemplar',
	'item_send_to_group' => 'Skicka till Grupper',
	'item_f_message' => 'Vidarebefordra Meddelanden',
	'item_a_book' => 'Adress Bok',
	'item_message_d' => 'Meddelande Utkast',
	'item_exp_mess' => 'Exportera Meddelanden',
	'item_attach_message' => 'Bilagor för Meddelanden',
	'item_convers_view' => 'Konversations Visning',
	'item_c_m_h_r' => 'Anpassad Meddelande Hanterings Regler',

/*********/
	'cat_usergroups' => 'Användar Grupper',

	'item_g_t' => 'Grupp Typer',
	'item_ucp_group_manage' => 'UCP Grupp Management',
	'item_ucp_group_manage_membership' => 'UCP Hantera Grupp Medlemskap',
	'item_m_g_l' => 'Flera Grupp Ledare',
	'item_c_g_c' => 'Anpassad Grupp Färger',
	'item_group_ranks' => 'Grupp Värderingar',
	'item_group_avatar' => 'Grupp Avatars',
	'item_group_based_memberlist' => 'Grupp Baserad Medlemslista Visning',

/*********/
	'cat_mcp' => 'Moderation Kontroll Panel',

	'item_global_moder' => 'Globala Moderatorer',
	'item_forum_moder' => 'Forum Moderatorer',
	'item_t_post_m_q' => 'Ämnen / Inlägg Moderations Kö ',
	'item_m_r_t_p' => 'Hantera Rapporterade Ämnen / Inlägg',
	'item_t_h' => 'Ämne Historia',
	'item_f_t_logs' => 'Forum / Ämne Logg',
	'item_l_m_l' => 'Lokal Moderator Logg',
	'item_p_e' => 'Post Redigering',
	'item_p_l' => 'Post Låsning',
	'item_post_details' => 'Post Detaljer',
	'item_c_p_author' => 'Ändra Post Författare',
	'item_quick_mod_tools' => 'Quick_Mod Tools',
	'item_moving_t' => 'Flytta Ämnen',
	'item_m_m_t' => 'Flytta Flera Ämnen',
	'item_merging_t' => 'Samgående Ämne',
	'item_merging_p' => 'Samgående Inlägg',
	'item_merging_multiple_t' => 'Samgående Flera Ämnen',
	'item_split_t' => 'Delade Ämnen',
	'item_locking_t' => 'Låsta Ämnen',
	'item_deleting_t' => 'Raderade Ämnen',
	'item_copying_t' => 'Kopierade Ämnen',
	'item_global_topics' => 'Globala Ämnen',
	'item_announcement_t' => 'Meddelande Ämnen',
	'item_s_topics' => 'Sticky Ämnen',
	'item_mange_bans' => 'Hantera Bannlysningar',
	'item_m_u_w' => 'Hantera Användar Varningar',
	'item_banning_by_username' => 'Bannlyst genom Användarnamn',
	'item_banning_by_email' => 'Bannlyst genom E-post Adress',
	'item_banning_by_ip' => 'Bannlyst genom IP Adress',
	'item_user_notes' => 'Användar Notering',

/*********/
	'cat_acp' => 'Administration Kontroll Panel',

	'item_f_s_b_c' => 'Grundare Status / Forum Skapare',
	'item_l_s' => 'Ladda Inställningar',
	'item_p_i_u' => 'Reducera Inaktiva Användare',
	'item_m_r' => 'Hantera Värderingar',
	'item_m_groups' => 'Hantera Grupper',
	'item_m_group_membership' => 'Hantera Grupp Medlemskap',
	'item_manage_attach_setting' => 'Hantera Bilagor och Inställningar',
	'item_manage_user_attachment' => 'Hantera User Attachments',
	'item_user_editing' => 'Användare Redigering',
	'item_list_group_index' => 'Lista Grupper på Index',
	'item_topic_icons' => 'Ämne Ikoner',
	'item_mass_e_mail' => 'Mass e-post',
	'item_manage_report_reasons' => 'Hantera Rapport / Denial Orsaker',
	'item_module_manage' => 'Modul Management',
	'item_custom_bbcode' => 'Anpassade BBKoder',
	'item_custom_profile_field' => 'Anpassat Profil Fält',
	'item_custom_profile_field_placement' => 'Anpassad Profil Fälts Placerings Alternativ',
	'item_custom_profile_data_types' => 'Anpassad Profil Fälts Data Typer',
	'item_manage_bans' => 'Hantera Bannlysningar',
	'item_ban_by_username' => 'Bannlyst genom Användarnamn',
	'item_ban_by_email' => 'Bannlyst genom E-post Adress',
	'item_ban_by_ip' => 'Bannlyst genom IP Adress',

/*********/
	'cat_styles' => 'Stilar',

	'item_s_style' => 'Valbara Stilar',
	'item_install_style' => 'Installera / Hantera Anpassade Stilar',
	'item_custom_style' => 'Anpassa / Redigera Mallar',
	'item_custom_themes' => 'Anpassa / Redigera Teman',
	'item_custom_imageset' => 'Anpassa / Redigera Bildinställningar',

/*********/
	'cat_permission' => 'Rättigheter',

	'item_g_b_g_p' => 'Grupp Baserade Globala Rättigheter',
	'item_g_b_m_p' => 'Grupp Baserade Moderator Rättigheter',
	'item_g_b_a_p' => 'Grupp Baserade Administrations Rättigheter',
	'item_g_b_f_p' => 'Grupp Baserade Forum Rättigheter',
	'item_u_b_g_p' => 'Användar Baserade Globala Rättigheter',
	'item_u_b_m_p' => 'Användar Baserade Moderator Rättigheter',
	'item_u_b_a_p' => 'Användar Baserade Administrations Rättigheter',
	'item_u_b_f_p' => 'Användar Baserade Forum Rättigheter',
	'item_admin_perm_roles' => 'Admin Rättigheters Roller',
	'item_user_perm_roles' => 'Användar Rättigheters Roller',
	'item_mod_perm_roles' => 'Moderator Rättigheters Roller',
	'item_forum_perm_roles' => 'Forum Rättigheters Roller',
	'item_mask_perm_multi' => 'Mång-nivå Rättigheter Masks',

/*********/
	'cat_notifications' => 'Notifieringar',

	'item_e_mail_true' => 'E-post',
	'item_instant_mess' => 'Snabbt Meddelande',
	'item_book_m' => 'Bokmärken',

/*********/
	'cat_localisations' => 'Lokalisering',

	'item_s_m_l_p' => 'Support för Flera Språk Paket',
	'item_language' => 'Språk',
	'bb2_language' => '50+',
	'ip_language' => '6',
	'bb3_language' => '61',
	'item_right_t_left' => 'Höger till Vänster Support',
	'item_l_p_w_edit' => 'Språk Paket Web-Editor',

/*********/
	'cat_install' => 'Installation / Uppgraderingar',

	'item_install_wizard' => 'Installations Guiden',
	'item_update_wizard' => 'Uppdaterings Guiden',
	'item_converter_wizard' => 'Konverterings Guiden',
	'item_file_merge_diff_engine' => 'File Merge Diff Update Engine',

/*********/
	'cat_technical' => 'Tekniska Funktioner',

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
	'cat_features' => 'Extra Funktioner',

	'item_feat_cms' => 'CMS',
	'item_feat_album' => 'Foto Galleri',
	'item_feat_downloads' => 'Nerladdnings System',
	'item_feat_kb' => 'Kunskaps Bas',
	'item_feat_links' => 'Länk System',
	'item_feat_news' => 'Nyhets Kategorier',
	'item_feat_stats' => 'Statistik Moduler',
	'item_feat_contact_us' => 'Kontakta Oss Formulär',
	'item_feat_lofi' => 'LoFi Visa',
	'item_feat_ajax_shoutbox' => 'AJAX Shoutbox',
	'item_feat_shoutbox' => 'Standard Shoutbox',
	'item_feat_calendar' => 'Kalender och Evenemangs System',
	'item_feat_pm_notifications' => 'PM Vid Nya Registreringar och Födelsedag',

/*********/
	'cat_features_acp' => 'Extra Funktioner ACP',

	'item_feat_info' => 'Server Information I ACP',
	'item_feat_db_mntnc' => 'Databas Maintenance',
	'item_feat_mysqladmin' => 'MySQL Admin',
	'item_feat_editable_f_r' => 'Mångfaldsspråk Redigerbara FAQs och Regler',
	'item_feat_multiple_ranks' => 'Mångfaldiga Värderingar',

/*********/
	'cat_features_ucp' => 'Extra Funktioner UCP',

	'item_feat_ajax_checks' => 'AJAX Kontroll av Registrering',
	'item_feat_upi2db' => 'Oläst Post I DB',
	'item_feat_custom_avatar' => 'Anpassad Avatar Skapande',
	'item_feat_profile_stats' => 'Profil Statistik och Extra Användar Info',
	'item_feat_user_self_deactivation' => 'Användar Själv Deaktivering',
	'item_feat_login_archive' => 'Inloggnings Historia',

/*********/
	'cat_features_bbcodes' => 'Extra Funktioner BBKoder',

	'item_feat_random_quotes' => 'Slumpmässiga Citat',
	'item_feat_bbcodes' => 'Integrerad BBKoders Box',
	'item_feat_acronyms' => 'Förkortningar',
	'item_feat_autolinks' => 'Autolänkar',
	'item_feat_smiley_creator' => 'Smiley Skapare',

/*********/
	'cat_features_seo' => 'Extra Funktioner SEO',

	'item_feat_url_rewrite' => 'SEO Optimering och URL Återskrivning',
	'item_feat_rss' => 'RSS Feed',
	'item_feat_referrers' => 'Referrers Tracking',
	'item_feat_referrers' => 'Bots Tracking',
	'item_feat_referrers' => 'Webbläsare och OS Upptäckt ',
	'item_feat_banners' => 'Banners och Annons Management',

/*********/
	'cat_features_forum' => 'Extra Funktioner Forum och Postning',

	'item_feat_bin' => 'Ämnes Trash',
	'item_feat_forum_icons' => 'Forum Ikoner',
	'item_feat_link_this_topic' => 'Länka Detta Ämne',
	'item_feat_edit_notes' => 'Redigera Noteringar',
	'item_feat_topic_prefixes' => 'Ämnes Prefix',
	'item_feat_topic_description' => 'Ämnes Beskrivning',
	'item_feat_rating' => 'Ämnes Värdering',
	'item_feat_thanks' => 'Ämnes Tack',
	'item_feat_topic_views' => 'Ämnes Visningar',
	'item_feat_digests' => 'Ämnes Sammandrag',
	'item_feat_upload_images' => 'Bild Uppladdning Medan Du Postar',
	'item_feat_quick_reply' => 'Snabb Svar',
	'item_feat_social_bookmars' => 'Social Bokmärken',
	'item_feat_ftr' => 'Tvinga Ämnes Läsning',
	'item_feat_detailed_notifications' => 'Detaljerad Notifieringar Med Meddelanden',

//	'item_feat_' => '',
	)
);

?>