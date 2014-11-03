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

	'item_price' => 'Licens pris',
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

	'item_perm_ban' => 'Permanent bannlysning',
	'item_temp_ban' => 'Tillfällig bannlysning (Uppskov)',
	'item_permission' => 'Behörigheter',
	'item_paid_sec' => 'Betald säkerhetskod audit',
	'item_form_hand' => 'Form handling',
	'item_t_a_p_h' => 'Typ medveten parameter handling',
	'item_t_a_d_l' => 'Typ medveten databas nivå',
	'item_p_h' => 'Lösenord hashing',

/*********/
	'cat_antispam' => 'Anti-Spam',

	'item_c_v_c' => 'CAPTCHA visuell bekräftelse',
	'item_f_c' => 'Flood kontroll',
	'item_groups' => 'Grupper',
	'item_acls' => 'ACLs',
	'item_b_l' => 'Svartlista',
	'item_banning' => 'Bannlysning',
	'item_suspension' => 'Uppskov',
	'item_warn' => 'Varningar',
	'item_u_l' => 'Användar loggning',
	'item_u_p_ip_l' => 'Användar inlägg IP loggning',
	'item_r_p' => 'Rapportera inlägg',
	'item_post_m' => 'Post moderation',

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
	'item_db_restore' => 'Databas (DBMS) återställning',
	'item_p_t_pruning' => 'Inlägg / Ämnes beskärning',

/*********/
	'cat_registration' => 'Registrering',

	'item_coppa' => 'COPPA Registrering',
	'item_l_r_a' => 'Begränsade registrerings försök',
	'item_username_lenght' => 'Sätt min / max användarnamns längd',
	'item_pass_lenght' => 'Sätt min / max lösenords längd',
	'item_l_u_c' => 'Begränsade användarnamns Tecken',
	'item_s_p_c_r' => 'Sätt lösenords komplexitets krav',
	'item_f_p_c' => 'Tvinga lösenords ändring',
	'item_e_mail_address_reusage' => 'Tillåt / Tillåt ej e-postadress  åter-användning',

/*********/
	'cat_posting' => 'Postning',

	'item_t_d_m' => 'Ämnes visnings metod',
	'bb2_t_d_m' => 'Platt',
	'ip_t_d_m' => 'Platt',
	'bb3_t_d_m' => 'Platt',

	'item_bbcode' => 'BBKod',
	'item_bbcode_custom' => 'Anpassade BBKod knappar',
	'item_html_in_post' => 'HTML i poster',
	'item_emoticon' => 'Smilies / Emotikoner',
	'item_quoting' => 'Citat',
	'item_q_m_p' => 'Citera flera inlägg',
	'item_f_t' => 'Formatering verktygsfält',
	'item_w_c' => 'Ord censurer',
	'item_s_h' => 'Syntax highlighting',
	'item_attachments' => 'Bilagor',
	'item_p_d' => 'Post utkast',
	'item_polls' => 'Undersökningar',
	'item_m_p_o_v' => 'Flera undersökningars alternativ röstning',
	'item_u_b_p_t' => 'Användar baserad undersöknings tracking',
	'item_all_dis_v_c' => 'Tillåt / Tillåt ej omröstnings ändring',
	'item_beaten_p_review' => 'Piskad till postnings granskning',
	'item_p_p' => 'Postnings Förhandsgranskning',
	'item_flood_control' => 'Flood kontroll',

/*********/
	'cat_attachments' => 'Bilagor',

	'item_a_i_t' => 'Automatisk bild miniatyrbilder',
	'item_a_t' => 'Bilage typer',
	'item_m_a' => 'Flerfaldiga bilagor',
	'item_a_p' => 'Bilagor blacering',

/*********/
	'cat_caching' => 'Caching',

	'item_db_q_c' => 'Databas query caching',
	'item_t_c' => 'Mall caching',
	'item_a_d' => 'Godtycklig data',
	'item_m_c_r' => 'Manuell cache uppdatering',

/*********/
	'cat_profile' => 'Profil / Medlemslista',

	'item_c_p_f' => 'Anpassat profil fält',
	'item_u_p_s' => 'Användare postnings Stats',
	'item_u_i_m' => 'Användare instant Messengers',
	'item_u_p_d' => 'Användar profil Detaljer',
	'item_m_list_search' => 'Medlemslista sökning',
	'item_u_m_v' => 'Hindra icke-registrerad användare memdlemslista visning',

/*********/
	'cat_search_system' => 'Sök System',

	'item_ft_n' => 'Fulltext native',
	'item_c_t_s' => 'Vanligt ämnes sök',
	'item_c_f_s' => 'Vanligt forum sök',
	'item_my_sql_text' => 'MySQL fulltext',
	'item_a_s' => 'Författare sökning',
	'item_a_search' => 'Avancerad sökning',
	'item_v_a_post' => 'Visa obesvarade inlägg',
	'item_a_n_t' => 'Aktiv / Nya ämnen',
	'item_p_s_l_v' => 'Inlägg sedan senaste besök',
	'item_s_f_l' => 'Sök flood kontroll',

/*********/
	'cat_forums' => 'Forum',

	'item_categories' => 'Kategorier',
	'item_p_p_f' => 'Lösenords skyddat forum',
	'item_f_s_s' => 'Forum särskilda stilar',
	'item_url_l_r_f' => 'URL Länk omdirigera forum',
	'item_f_rules' => 'Forum regler',
	'item_subforum' => 'Underforum',
	'item_last_post' => 'Senaste post',
	'item_forum_pruning' => 'Forum beskärning',
	'item_d_a_t' => 'Visa aktiva ämnen',
	'item_s_t_forums' => 'Prenumerera på forum',
	'item_s_t_topics' => 'Prenumerera på ämnen',
	'item_b_t' => 'Bokmärk ämnen',
	'item_t_s' => 'Ämnes sortering',
	'item_p_s' => 'Inläggs sortering',
	'item_t_p_t' => 'Ämnes deltagande tracking',
	'item_print_t' => 'Skriv ut ämnen',
	'item_e_mail_t' => 'E-posta ämnen',

/*********/
	'cat_ucp' => 'Användar Kontroll Panel',

	'item_u_s' => 'Användar signaturer',
	'item_u_a' => 'Användar avatars',
	'item_u_ranks' => 'Användar rank',
	'item_u_o_l' => 'Användares online lista',
	'item_user_p' => 'Användar inställningar',
	'item_u_p_s' => 'Användar profil inställning',
	'item_m_s_pm_post_d' => 'Hantera sparade PM / Post Utkast',
	'item_m_book' => 'Hantera bokmärken',
	'item_m_attach' => 'Hantera bilagor',
	'item_m_s_t' => 'Hantera tecknade ämnen',
	'item_c_p_f' => 'Anpassat profil fält',
	'item_friend_foe_list' => 'Vänner / Foe Lista',

/*********/
	'cat_priv_messaging' => 'Privata Meddelanden',

	'item_add_pm_folder' => 'Ytterligare PM Mappar',
	'item_custom_pm_filter' => 'Anpassningsbar PM filtrerings regler',
	'item_send_multiple_reci' => 'Skicka till flera mottagare',
	'item_send_blind_carbon' => 'Sänd hemliga exemplar',
	'item_send_to_group' => 'Skicka till grupper',
	'item_f_message' => 'Vidarebefordra meddelanden',
	'item_a_book' => 'Adressbok',
	'item_message_d' => 'Meddelande utkast',
	'item_exp_mess' => 'Exportera meddelanden',
	'item_attach_message' => 'Bilagor för meddelanden',
	'item_convers_view' => 'Konversations visning',
	'item_c_m_h_r' => 'Anpassad meddelande hanterings regler',

/*********/
	'cat_usergroups' => 'Användar Grupper',

	'item_g_t' => 'Grupp typer',
	'item_ucp_group_manage' => 'UCP grupp hantering',
	'item_ucp_group_manage_membership' => 'UCP hantera grupp medlemskap',
	'item_m_g_l' => 'Flera grupp ledare',
	'item_c_g_c' => 'Anpassad grupp färger',
	'item_group_ranks' => 'Grupp värderingar',
	'item_group_avatar' => 'Grupp avatars',
	'item_group_based_memberlist' => 'Grupp baserad medlemslista visning',

/*********/
	'cat_mcp' => 'Moderation Kontroll Panel',

	'item_global_moder' => 'Globala moderatorer',
	'item_forum_moder' => 'Forum moderatorer',
	'item_t_post_m_q' => 'Ämnen / Inlägg moderations kö ',
	'item_m_r_t_p' => 'Hantera rapporterade ämnen / inlägg',
	'item_t_h' => 'Ämnes historia',
	'item_f_t_logs' => 'Forum / Ämnes logg',
	'item_l_m_l' => 'Lokal moderator logg',
	'item_p_e' => 'Post redigering',
	'item_p_l' => 'Post läsning',
	'item_post_details' => 'Post detaljer',
	'item_c_p_author' => 'Ändra post författare',
	'item_quick_mod_tools' => 'Snabb mod verktyg',
	'item_moving_t' => 'Flytta ämnen',
	'item_m_m_t' => 'Flytta flera ämnen',
	'item_merging_t' => 'Samgående ämne',
	'item_merging_p' => 'Samgående inlägg',
	'item_merging_multiple_t' => 'Samgående flera ämnen',
	'item_split_t' => 'Delade ämnen',
	'item_locking_t' => 'Lästa ämnen',
	'item_deleting_t' => 'Raderade ämnen',
	'item_copying_t' => 'Kopierade ämnen',
	'item_global_topics' => 'Globala ämnen',
	'item_announcement_t' => 'Meddelande ämnen',
	'item_s_topics' => 'Sticky ämnen',
	'item_mange_bans' => 'Hantera bannlysningar',
	'item_m_u_w' => 'Hantera Användar varningar',
	'item_banning_by_username' => 'Bannlyst genom användarnamn',
	'item_banning_by_email' => 'Bannlyst genom e-postadress',
	'item_banning_by_ip' => 'Bannlyst genom IP Adress',
	'item_user_notes' => 'Användar notering',

/*********/
	'cat_acp' => 'Administration Kontroll Panel',

	'item_f_s_b_c' => 'Grundare Status / Forum Skapare',
	'item_l_s' => 'Ladda inställningar',
	'item_p_i_u' => 'Reducera inaktiva användare',
	'item_m_r' => 'Hantera värderingar',
	'item_m_groups' => 'Hantera grupper',
	'item_m_group_membership' => 'Hantera grupp medlemskap',
	'item_manage_attach_setting' => 'Hantera bilagor och inställningar',
	'item_manage_user_attachment' => 'Hantera användar bilagor',
	'item_user_editing' => 'Användare redigering',
	'item_list_group_index' => 'Lista grupper på index',
	'item_topic_icons' => 'Ämnes ikoner',
	'item_mass_e_mail' => 'Mass e-post',
	'item_manage_report_reasons' => 'Hantera Rapport / Denial Orsaker',
	'item_module_manage' => 'Modul hantering',
	'item_custom_bbcode' => 'Anpassade BBKoder',
	'item_custom_profile_field' => 'Anpassat profil fält',
	'item_custom_profile_field_placement' => 'Anpassad profil fälts placerings alternativ',
	'item_custom_profile_data_types' => 'Anpassad profil fälts data typer',
	'item_manage_bans' => 'Hantera bannlysningar',
	'item_ban_by_username' => 'Bannlyst genom användarnamn',
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

	'item_g_b_g_p' => 'Grupp baserade globala rättigheter',
	'item_g_b_m_p' => 'Grupp baserade moderator rättigheter',
	'item_g_b_a_p' => 'Grupp baserade administrations rättigheter',
	'item_g_b_f_p' => 'Grupp baserade forum rättigheter',
	'item_u_b_g_p' => 'Användar baserade globala rättigheter',
	'item_u_b_m_p' => 'Användar baserade moderator rättigheter',
	'item_u_b_a_p' => 'Användar baserade administrations rättigheter',
	'item_u_b_f_p' => 'Användar baserade forum rättigheter',
	'item_admin_perm_roles' => 'Admin rättigheters roller',
	'item_user_perm_roles' => 'Användar rättigheters roller',
	'item_mod_perm_roles' => 'Moderator rättigheters roller',
	'item_forum_perm_roles' => 'Forum rättigheters roller',
	'item_mask_perm_multi' => 'Mång-nivås rättigheter mask',

/*********/
	'cat_notifications' => 'Notifieringar',

	'item_e_mail_true' => 'E-post',
	'item_instant_mess' => 'Snabbt Meddelande',
	'item_book_m' => 'Bokmärken',

/*********/
	'cat_localisations' => 'Lokalisering',

	'item_s_m_l_p' => 'Support för flera språk paket',
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
	'item_file_merge_diff_engine' => 'Fil sammanslagning diff uppdatera motor',

/*********/
	'cat_technical' => 'Tekniska Funktioner',

	'item_cms_integra' => 'CMS Software Integration',
	'item_xhtml_compliant' => 'XHTML Compliant',

/*********/
	'cat_plugins' => 'Plugins',

	'item_auth_plug' => 'Auth Plugin',
	'item_search_plug' => 'Sök Plugin',
	'item_cache_plug' => 'Cache Plugin',
	'item_captcha_plug' => 'CAPTCHA Plugin',
	'item_hooks_sys' => 'Hooks System',
	'item_expand_module' => 'Expanderbara Moduler',

/*********/
	'cat_features' => 'Extra Funktioner',

	'item_feat_cms' => 'CMS',
	'item_feat_album' => 'Foto galleri',
	'item_feat_downloads' => 'Nerladdnings system',
	'item_feat_kb' => 'Kunskapsbas',
	'item_feat_links' => 'Länk system',
	'item_feat_news' => 'Nyhets kategorier',
	'item_feat_stats' => 'Statistik moduler',
	'item_feat_contact_us' => 'Kontakta oss formulär',
	'item_feat_lofi' => 'LoFi Visa',
	'item_feat_ajax_shoutbox' => 'AJAX Shoutbox',
	'item_feat_shoutbox' => 'Standard Shoutbox',
	'item_feat_calendar' => 'Kalender och Evenemangs System',
	'item_feat_pm_notifications' => 'PM Vid nya registreringar och födelsedag',

/*********/
	'cat_features_acp' => 'Extra Funktioner ACP',

	'item_feat_info' => 'Server Information I ACP',
	'item_feat_db_mntnc' => 'Databas Hantering',
	'item_feat_mysqladmin' => 'MySQL Admin',
	'item_feat_editable_f_r' => 'Mångfaldsspråk redigerbara FAQs och Regler',
	'item_feat_multiple_ranks' => 'Mångfaldiga värderingar',

/*********/
	'cat_features_ucp' => 'Extra Funktioner UCP',

	'item_feat_ajax_checks' => 'AJAX Kontroll av Registrering',
	'item_feat_upi2db' => 'Olöst Post I DB',
	'item_feat_custom_avatar' => 'Anpassad avatar skapande',
	'item_feat_profile_stats' => 'Profil statistik och extra användar info',
	'item_feat_user_self_deactivation' => 'Användar själv deaktivering',
	'item_feat_login_archive' => 'Inloggnings historia',

/*********/
	'cat_features_bbcodes' => 'Extra Funktioner BBKoder',

	'item_feat_random_quotes' => 'Slumpmässiga citat',
	'item_feat_bbcodes' => 'Integrerad BBKoders Box',
	'item_feat_acronyms' => 'Förkortningar',
	'item_feat_autolinks' => 'Autolänkar',
	'item_feat_smiley_creator' => 'Smiley Skapare',

/*********/
	'cat_features_seo' => 'Extra Funktioner SEO',

	'item_feat_url_rewrite' => 'SEO Optimering och URL återskrivning',
	'item_feat_rss' => 'RSS Feed',
	'item_feat_referrers' => 'Referrers Tracking',
	'item_feat_referrers' => 'Bots Tracking',
	'item_feat_referrers' => 'Webbläsare och OS Upptäckt ',
	'item_feat_banners' => 'Banners och Annons Management',

/*********/
	'cat_features_forum' => 'Extra Funktioner Forum och Postning',

	'item_feat_bin' => 'Ämnes trash',
	'item_feat_forum_icons' => 'Forum ikoner',
	'item_feat_link_this_topic' => 'Länka detta ämne',
	'item_feat_edit_notes' => 'Redigera noteringar',
	'item_feat_topic_prefixes' => 'Ämnes prefix',
	'item_feat_topic_description' => 'Ämnes beskrivning',
	'item_feat_rating' => 'Ämnes värdering',
	'item_feat_thanks' => 'Ämnes tack',
	'item_feat_topic_views' => 'Ämnes visningar',
	'item_feat_digests' => 'Ämnes sammandrag',
	'item_feat_upload_images' => 'Bild uppladdning medan du postar',
	'item_feat_quick_reply' => 'Snabb svar',
	'item_feat_social_bookmars' => 'Sociala bokmärken',
	'item_feat_ftr' => 'Tvinga ämnes läsning',
	'item_feat_detailed_notifications' => 'Detaljerad notifieringar med meddelanden',

//	'item_feat_' => '',
	)
);

?>