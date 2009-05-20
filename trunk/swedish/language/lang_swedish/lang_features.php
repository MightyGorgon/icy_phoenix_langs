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
	'PHPBB_FEATURES_PAGE' => 'Funktioner f�r phpBB har h�mtats fr�n officiella phpBB webbplatsen [ <a href="http://www.phpbb.com/about/features/">L�NK</a> ]',

/*********/
	'cat_general' => 'Allm�nt',

	'item_license' => 'Licens',
	'bb2_license' => 'GPL',
	'ip_license' => 'GPL',
	'bb3_license' => 'GPL',

	'item_price' => 'Licens Pris',
	'bb2_price' => 'Gratis',
	'ip_price' => 'Gratis',
	'bb3_price' => 'Gratis',

	'item_programming' => 'Programmerings Spr�k',
	'bb2_programming' => 'PHP',
	'ip_programming' => 'PHP',
	'bb3_programming' => 'PHP',

	'item_latest' => 'Senaste Version',
	'bb2_latest' => '2.0.22',
	'ip_latest' => '1.2.0.27',
	'bb3_latest' => '3.0.2',

	'item_release' => 'Offentligg�rande Datum',
	'bb2_release' => '2008/02/17',
	'ip_release' => '2008/03/03',
	'bb3_release' => '2008/07/10',

/*********/
	'cat_basic_features' => 'Grundl�ggande Funktioner',

	'item_utf8' => 'UTF-8 Support',
	'item_user_preferences' => 'Anv�ndarinst�llningar',
	'item_mod' => 'Moderation',
	'item_admin' => 'Administration',
	'item_search_engine' => 'S�krobotar Handling',
	'item_un_mess_track' => 'Ol�sta meddelande sp�rning',
	'item_pms' => 'Privata Meddelande System',
	'item_stat' => 'Statistik',

/*********/
	'cat_security' => 'S�kerhet',

	'item_perm_ban' => 'Permanent Bannlysning',
	'item_temp_ban' => 'Tillf�llig Bannlysning (Uppskov)',
	'item_permission' => 'Beh�righeter',
	'item_paid_sec' => 'Betald S�kerhetskod Audit',
	'item_form_hand' => 'Form Handling',
	'item_t_a_p_h' => 'Typ Medveten Parameter Handling',
	'item_t_a_d_l' => 'Typ Medveten Databas Niv�',
	'item_p_h' => 'L�senord Hashing',

/*********/
	'cat_antispam' => 'Anti-Spam',

	'item_c_v_c' => 'CAPTCHA Visuell Bekr�ftelse',
	'item_f_c' => 'Flood Kontroll',
	'item_groups' => 'Grupper',
	'item_acls' => 'ACLs',
	'item_b_l' => 'Svartlista',
	'item_banning' => 'Bannlysning',
	'item_suspension' => 'Uppskov',
	'item_warn' => 'Varningar',
	'item_u_l' => 'Anv�ndar Loggning',
	'item_u_p_ip_l' => 'Anv�ndar Inl�gg IP Loggning',
	'item_r_p' => 'Rapportera Inl�gg',
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
	'item_db_restore' => 'Databas (DBMS) �terst�llning',
	'item_p_t_pruning' => 'Inl�gg / �mnes Besk�rning',

/*********/
	'cat_registration' => 'Registrering',

	'item_coppa' => 'COPPA Registrering',
	'item_l_r_a' => 'Begr�nsade Registrerings F�rs�k',
	'item_username_lenght' => 'S�tt min / max Anv�ndarnamn L�ngd',
	'item_pass_lenght' => 'S�tt min / max L�senords L�ngd',
	'item_l_u_c' => 'Begr�nsade Anv�ndarnamn Tecken',
	'item_s_p_c_r' => 'S�tt L�senords Komplexitets Krav',
	'item_f_p_c' => 'Tvinga L�senords �ndring',
	'item_e_mail_address_reusage' => 'Till�t / Till�t Ej e-post Adress  �ter-anv�ndning',

/*********/
	'cat_posting' => 'Postning',

	'item_t_d_m' => '�mnes Visnings Metod',
	'bb2_t_d_m' => 'Platt',
	'ip_t_d_m' => 'Platt',
	'bb3_t_d_m' => 'Platt',

	'item_bbcode' => 'BBKod',
	'item_bbcode_custom' => 'Anpassade BBKod Knappar',
	'item_html_in_post' => 'HTML i poster',
	'item_emoticon' => 'Smilies / Emotikoner',
	'item_quoting' => 'Citat',
	'item_q_m_p' => 'Citera Flera Inl�gg',
	'item_f_t' => 'Formatering Verktygsf�lt',
	'item_w_c' => 'Ord Censurer',
	'item_s_h' => 'Syntax Highlighting',
	'item_attachments' => 'Bilagor',
	'item_p_d' => 'Post Utkast',
	'item_polls' => 'Unders�kningar',
	'item_m_p_o_v' => 'Flera Unders�kningar Alternativ R�stning',
	'item_u_b_p_t' => 'Anv�ndar Baserd Unders�knings Tracking',
	'item_all_dis_v_c' => 'Till�t / Till�t Ej Omr�stnings �ndring',
	'item_beaten_p_review' => 'Piskad Till Postnings Granskning',
	'item_p_p' => 'Postnings F�rhandsgranskning',
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

	'item_c_p_f' => 'Anpassat Profil F�lt',
	'item_u_p_s' => 'Anv�ndare Postnings Stats',
	'item_u_i_m' => 'Anv�ndare Instant Messengers',
	'item_u_p_d' => 'Anv�ndar Profil Detaljer',
	'item_m_list_search' => 'Medlemslista S�kning',
	'item_u_m_v' => 'Hindra Icke-Registrerad Anv�ndare Memdlemslista Visning',

/*********/
	'cat_search_system' => 'S�k System',

	'item_ft_n' => 'Fulltext Native',
	'item_c_t_s' => 'Vanligt �mnes S�k',
	'item_c_f_s' => 'Vanligt Forum S�k',
	'item_my_sql_text' => 'MySQL fulltext',
	'item_a_s' => 'F�rfattare S�kning',
	'item_a_search' => 'Avancerad S�kning',
	'item_v_a_post' => 'Visa obesvarade inl�gg',
	'item_a_n_t' => 'Aktiv / Nya �mnen',
	'item_p_s_l_v' => 'Inl�gg Sedan Senaste Bes�k',
	'item_s_f_l' => 'S�k Flood Kontroll',

/*********/
	'cat_forums' => 'Forum',

	'item_categories' => 'Kategorier',
	'item_p_p_f' => 'L�senords Skyddat Forum',
	'item_f_s_s' => 'Forum S�rskilda Stilar',
	'item_url_l_r_f' => 'URL L�nk Omdirigera Forum',
	'item_f_rules' => 'Forum Regler',
	'item_subforum' => 'Underforum',
	'item_last_post' => 'Senaste Post',
	'item_forum_pruning' => 'Forum Besk�rning',
	'item_d_a_t' => 'Visa Aktiva �mnen',
	'item_s_t_forums' => 'Prenumerera p� Forum',
	'item_s_t_topics' => 'Prenumerera p� �mnen',
	'item_b_t' => 'Bokm�rk �mnen',
	'item_t_s' => '�mnes Sortering',
	'item_p_s' => 'Inl�ggs Sortering',
	'item_t_p_t' => '�mne Deltagande Tracking',
	'item_print_t' => 'Skriv ut �mnen',
	'item_e_mail_t' => 'E-post �mnen',

/*********/
	'cat_ucp' => 'Anv�ndar Kontroll Panel',

	'item_u_s' => 'Anv�ndar Signaturer',
	'item_u_a' => 'Anv�ndar Avatars',
	'item_u_ranks' => 'Anv�ndar Rank',
	'item_u_o_l' => 'Anv�ndares Online Lista',
	'item_user_p' => 'Anv�ndar Inst�llningar',
	'item_u_p_s' => 'Anv�ndar Profil Inst�llning',
	'item_m_s_pm_post_d' => 'Hantera Sparade PM / Post Utkast',
	'item_m_book' => 'Hantera Bokm�rken',
	'item_m_attach' => 'Hantera Bilagor',
	'item_m_s_t' => 'Hantera Tecknade �mnen',
	'item_c_p_f' => 'Anpassat Profil F�lt',
	'item_friend_foe_list' => 'V�nner / Foe Lista',

/*********/
	'cat_priv_messaging' => 'Privata Meddelanden',

	'item_add_pm_folder' => 'Ytterligare PM Mappar',
	'item_custom_pm_filter' => 'Anpassningsbar PM Filtrerings Regler',
	'item_send_multiple_reci' => 'Skicka till Flera Mottagare',
	'item_send_blind_carbon' => 'S�nd Hemliga Exemplar',
	'item_send_to_group' => 'Skicka till Grupper',
	'item_f_message' => 'Vidarebefordra Meddelanden',
	'item_a_book' => 'Adress Bok',
	'item_message_d' => 'Meddelande Utkast',
	'item_exp_mess' => 'Exportera Meddelanden',
	'item_attach_message' => 'Bilagor f�r Meddelanden',
	'item_convers_view' => 'Konversations Visning',
	'item_c_m_h_r' => 'Anpassad Meddelande Hanterings Regler',

/*********/
	'cat_usergroups' => 'Anv�ndar Grupper',

	'item_g_t' => 'Grupp Typer',
	'item_ucp_group_manage' => 'UCP Grupp Management',
	'item_ucp_group_manage_membership' => 'UCP Hantera Grupp Medlemskap',
	'item_m_g_l' => 'Flera Grupp Ledare',
	'item_c_g_c' => 'Anpassad Grupp F�rger',
	'item_group_ranks' => 'Grupp V�rderingar',
	'item_group_avatar' => 'Grupp Avatars',
	'item_group_based_memberlist' => 'Grupp Baserad Medlemslista Visning',

/*********/
	'cat_mcp' => 'Moderation Kontroll Panel',

	'item_global_moder' => 'Globala Moderatorer',
	'item_forum_moder' => 'Forum Moderatorer',
	'item_t_post_m_q' => '�mnen / Inl�gg Moderations K� ',
	'item_m_r_t_p' => 'Hantera Rapporterade �mnen / Inl�gg',
	'item_t_h' => '�mne Historia',
	'item_f_t_logs' => 'Forum / �mne Logg',
	'item_l_m_l' => 'Lokal Moderator Logg',
	'item_p_e' => 'Post Redigering',
	'item_p_l' => 'Post L�sning',
	'item_post_details' => 'Post Detaljer',
	'item_c_p_author' => '�ndra Post F�rfattare',
	'item_quick_mod_tools' => 'Quick_Mod Tools',
	'item_moving_t' => 'Flytta �mnen',
	'item_m_m_t' => 'Flytta Flera �mnen',
	'item_merging_t' => 'Samg�ende �mne',
	'item_merging_p' => 'Samg�ende Inl�gg',
	'item_merging_multiple_t' => 'Samg�ende Flera �mnen',
	'item_split_t' => 'Delade �mnen',
	'item_locking_t' => 'L�sta �mnen',
	'item_deleting_t' => 'Raderade �mnen',
	'item_copying_t' => 'Kopierade �mnen',
	'item_global_topics' => 'Globala �mnen',
	'item_announcement_t' => 'Meddelande �mnen',
	'item_s_topics' => 'Sticky �mnen',
	'item_mange_bans' => 'Hantera Bannlysningar',
	'item_m_u_w' => 'Hantera Anv�ndar Varningar',
	'item_banning_by_username' => 'Bannlyst genom Anv�ndarnamn',
	'item_banning_by_email' => 'Bannlyst genom E-post Adress',
	'item_banning_by_ip' => 'Bannlyst genom IP Adress',
	'item_user_notes' => 'Anv�ndar Notering',

/*********/
	'cat_acp' => 'Administration Kontroll Panel',

	'item_f_s_b_c' => 'Grundare Status / Forum Skapare',
	'item_l_s' => 'Ladda Inst�llningar',
	'item_p_i_u' => 'Reducera Inaktiva Anv�ndare',
	'item_m_r' => 'Hantera V�rderingar',
	'item_m_groups' => 'Hantera Grupper',
	'item_m_group_membership' => 'Hantera Grupp Medlemskap',
	'item_manage_attach_setting' => 'Hantera Bilagor och Inst�llningar',
	'item_manage_user_attachment' => 'Hantera User Attachments',
	'item_user_editing' => 'Anv�ndare Redigering',
	'item_list_group_index' => 'Lista Grupper p� Index',
	'item_topic_icons' => '�mne Ikoner',
	'item_mass_e_mail' => 'Mass e-post',
	'item_manage_report_reasons' => 'Hantera Rapport / Denial Orsaker',
	'item_module_manage' => 'Modul Management',
	'item_custom_bbcode' => 'Anpassade BBKoder',
	'item_custom_profile_field' => 'Anpassat Profil F�lt',
	'item_custom_profile_field_placement' => 'Anpassad Profil F�lts Placerings Alternativ',
	'item_custom_profile_data_types' => 'Anpassad Profil F�lts Data Typer',
	'item_manage_bans' => 'Hantera Bannlysningar',
	'item_ban_by_username' => 'Bannlyst genom Anv�ndarnamn',
	'item_ban_by_email' => 'Bannlyst genom E-post Adress',
	'item_ban_by_ip' => 'Bannlyst genom IP Adress',

/*********/
	'cat_styles' => 'Stilar',

	'item_s_style' => 'Valbara Stilar',
	'item_install_style' => 'Installera / Hantera Anpassade Stilar',
	'item_custom_style' => 'Anpassa / Redigera Mallar',
	'item_custom_themes' => 'Anpassa / Redigera Teman',
	'item_custom_imageset' => 'Anpassa / Redigera Bildinst�llningar',

/*********/
	'cat_permission' => 'R�ttigheter',

	'item_g_b_g_p' => 'Grupp Baserade Globala R�ttigheter',
	'item_g_b_m_p' => 'Grupp Baserade Moderator R�ttigheter',
	'item_g_b_a_p' => 'Grupp Baserade Administrations R�ttigheter',
	'item_g_b_f_p' => 'Grupp Baserade Forum R�ttigheter',
	'item_u_b_g_p' => 'Anv�ndar Baserade Globala R�ttigheter',
	'item_u_b_m_p' => 'Anv�ndar Baserade Moderator R�ttigheter',
	'item_u_b_a_p' => 'Anv�ndar Baserade Administrations R�ttigheter',
	'item_u_b_f_p' => 'Anv�ndar Baserade Forum R�ttigheter',
	'item_admin_perm_roles' => 'Admin R�ttigheters Roller',
	'item_user_perm_roles' => 'Anv�ndar R�ttigheters Roller',
	'item_mod_perm_roles' => 'Moderator R�ttigheters Roller',
	'item_forum_perm_roles' => 'Forum R�ttigheters Roller',
	'item_mask_perm_multi' => 'M�ng-niv� R�ttigheter Masks',

/*********/
	'cat_notifications' => 'Notifieringar',

	'item_e_mail_true' => 'E-post',
	'item_instant_mess' => 'Snabbt Meddelande',
	'item_book_m' => 'Bokm�rken',

/*********/
	'cat_localisations' => 'Lokalisering',

	'item_s_m_l_p' => 'Support f�r Flera Spr�k Paket',
	'item_language' => 'Spr�k',
	'bb2_language' => '50+',
	'ip_language' => '6',
	'bb3_language' => '61',
	'item_right_t_left' => 'H�ger till V�nster Support',
	'item_l_p_w_edit' => 'Spr�k Paket Web-Editor',

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
	'item_feat_links' => 'L�nk System',
	'item_feat_news' => 'Nyhets Kategorier',
	'item_feat_stats' => 'Statistik Moduler',
	'item_feat_contact_us' => 'Kontakta Oss Formul�r',
	'item_feat_lofi' => 'LoFi Visa',
	'item_feat_ajax_shoutbox' => 'AJAX Shoutbox',
	'item_feat_shoutbox' => 'Standard Shoutbox',
	'item_feat_calendar' => 'Kalender och Evenemangs System',
	'item_feat_pm_notifications' => 'PM Vid Nya Registreringar och F�delsedag',

/*********/
	'cat_features_acp' => 'Extra Funktioner ACP',

	'item_feat_info' => 'Server Information I ACP',
	'item_feat_db_mntnc' => 'Databas Maintenance',
	'item_feat_mysqladmin' => 'MySQL Admin',
	'item_feat_editable_f_r' => 'M�ngfaldsspr�k Redigerbara FAQs och Regler',
	'item_feat_multiple_ranks' => 'M�ngfaldiga V�rderingar',

/*********/
	'cat_features_ucp' => 'Extra Funktioner UCP',

	'item_feat_ajax_checks' => 'AJAX Kontroll av Registrering',
	'item_feat_upi2db' => 'Ol�st Post I DB',
	'item_feat_custom_avatar' => 'Anpassad Avatar Skapande',
	'item_feat_profile_stats' => 'Profil Statistik och Extra Anv�ndar Info',
	'item_feat_user_self_deactivation' => 'Anv�ndar Sj�lv Deaktivering',
	'item_feat_login_archive' => 'Inloggnings Historia',

/*********/
	'cat_features_bbcodes' => 'Extra Funktioner BBKoder',

	'item_feat_random_quotes' => 'Slumpm�ssiga Citat',
	'item_feat_bbcodes' => 'Integrerad BBKoders Box',
	'item_feat_acronyms' => 'F�rkortningar',
	'item_feat_autolinks' => 'Autol�nkar',
	'item_feat_smiley_creator' => 'Smiley Skapare',

/*********/
	'cat_features_seo' => 'Extra Funktioner SEO',

	'item_feat_url_rewrite' => 'SEO Optimering och URL �terskrivning',
	'item_feat_rss' => 'RSS Feed',
	'item_feat_referrers' => 'Referrers Tracking',
	'item_feat_referrers' => 'Bots Tracking',
	'item_feat_referrers' => 'Webbl�sare och OS Uppt�ckt ',
	'item_feat_banners' => 'Banners och Annons Management',

/*********/
	'cat_features_forum' => 'Extra Funktioner Forum och Postning',

	'item_feat_bin' => '�mnes Trash',
	'item_feat_forum_icons' => 'Forum Ikoner',
	'item_feat_link_this_topic' => 'L�nka Detta �mne',
	'item_feat_edit_notes' => 'Redigera Noteringar',
	'item_feat_topic_prefixes' => '�mnes Prefix',
	'item_feat_topic_description' => '�mnes Beskrivning',
	'item_feat_rating' => '�mnes V�rdering',
	'item_feat_thanks' => '�mnes Tack',
	'item_feat_topic_views' => '�mnes Visningar',
	'item_feat_digests' => '�mnes Sammandrag',
	'item_feat_upload_images' => 'Bild Uppladdning Medan Du Postar',
	'item_feat_quick_reply' => 'Snabb Svar',
	'item_feat_social_bookmars' => 'Social Bokm�rken',
	'item_feat_ftr' => 'Tvinga �mnes L�sning',
	'item_feat_detailed_notifications' => 'Detaljerad Notifieringar Med Meddelanden',

//	'item_feat_' => '',
	)
);

?>