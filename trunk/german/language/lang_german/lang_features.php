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
	'FEATURES' => 'Funktionen',
	'PHPBB2' => 'phpBB2',
	'ICYPHOENIX' => 'Icy Phoenix',
	'PHPBB3' => 'phpBB3',
	'PHPBB_FEATURES_PAGE' => 'Funktionen von phpBB stammen von der offiziellen phpBB Website [ <a href="http://www.phpbb.com/about/features/">LINK</a> ]',

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
	'item_user_preferences' => 'Einstellungen f�r Benutzer',
	'item_mod' => 'Moderation',
	'item_admin' => 'Administration',
	'item_search_engine' => 'Handhabung von Suchmaschinen',
	'item_un_mess_track' => 'Markierung von ungelesenen Beitr�gen',
	'item_pms' => 'System f�r private Nachrichten',
	'item_stat' => 'Statistiken',

/*********/
	'cat_security' => 'Sicherheit',

	'item_perm_ban' => 'Dauerhafte Sperren',
	'item_temp_ban' => 'Vorr�bergehende Sperren',
	'item_permission' => 'Berechtigungen',
	'item_paid_sec' => 'Kommerzieller Sicherheitsaudit des Codes',
	'item_form_hand' => 'Formular-Verarbeitung',
	'item_t_a_p_h' => 'Datentyp-spezifisches Parameterhandling',
	'item_t_a_d_l' => 'Datentyp-spezifische Datenbankschicht',
	'item_p_h' => 'Passwortverschl�sselung',

/*********/
	'cat_antispam' => 'Anti-Spam',

	'item_c_v_c' => 'CAPTCHA Visuelle Best�tigung',
	'item_f_c' => 'Flood Kontrolle',
	'item_groups' => 'Gruppen',
	'item_acls' => 'Zugriffssteuerung',
	'item_b_l' => 'Blacklist',
	'item_banning' => 'Sperr-Verwaltung',
	'item_suspension' => 'Tempor�re Sperren',
	'item_warn' => 'Verwarnung',
	'item_u_l' => 'Benutzer-Protokoll',
	'item_u_p_ip_l' => 'IP-Protokollierung bei Beitr�gen',
	'item_r_p' => 'Melden von Beitr�gen',
	'item_post_m' => 'Beitragsmoderation',

/*********/
	'cat_datamanagement' => 'Datenbank Verwaltung',

	'item_mysql' => 'MySQL',
	'item_mssql' => 'MSSQL Server',
	'item_mssql_odbc' => 'MSSQL ODBC',
	'item_postgre' => 'PostgreSQL',
	'item_ms_access' => 'MS Access',
	'item_oracle' => 'Oracle',
	'item_firebird' => 'Firebird',
	'item_sql_lite' => 'SQL_Lite',
	'item_db_back' => 'Datenbank-Sicherung',
	'item_db_restore' => 'Datenbank-Wiederherstellung',
	'item_p_t_pruning' => 'Automatisches L�schen von Beitr�gen / Themen',

/*********/
	'cat_registration' => 'Registrierung',

	'item_coppa' => 'COPPA-Registrierung',
	'item_l_r_a' => 'Begrenzung f�r Registrierungsversuche',
	'item_username_lenght' => 'Bestimme min / max Benutzernamenl�nge',
	'item_pass_lenght' => 'Bestimme min / max Passwortl�nge',
	'item_l_u_c' => 'Begrenze Benutzernamenzeichen',
	'item_s_p_c_r' => 'Bestimme die Passwortkomplexit�t',
	'item_f_p_c' => 'Erzwingung von Passwort-Wechsel',
	'item_e_mail_address_reusage' => 'Erlaube / Verbiete das E-Mail Adressen mehrmals genutzt werden',

/*********/
	'cat_posting' => 'Beitr�ge',

	'item_t_d_m' => 'Themen Ansicht',
	'bb2_t_d_m' => 'Komplett',
	'ip_t_d_m' => 'Komplett',
	'bb3_t_d_m' => 'Komplett',

	'item_bbcode' => 'BBCode',
	'item_bbcode_custom' => 'Benutzerspezifische BBCode Buttons',
	'item_html_in_post' => 'HTML in Beitr�gen',
	'item_emoticon' => 'Smilies / Emoticons',
	'item_quoting' => 'Zitate',
	'item_q_m_p' => 'Zitieren mehrerer Beitr�ge',
	'item_f_t' => 'Formatierungs-Toolbar',
	'item_w_c' => 'W�rter-Zensur',
	'item_s_h' => 'Syntax-Hervorhebung',
	'item_attachments' => 'Dateianh�nge',
	'item_p_d' => 'Beitrags-Entw�rfe',
	'item_polls' => 'Umfragen',
	'item_m_p_o_v' => 'Mehrere Antworten pro Umfrage',
	'item_u_b_p_t' => 'Benutzerbasierende Umfrage-Kontrolle',
	'item_all_dis_v_c' => 'Erlaube / Verbiete Abstimmungs�nderung',
	'item_beaten_p_review' => 'Vor neuen Antworten-Warn-System',
	'item_p_p' => 'Beitrags-Vorschau',
	'item_flood_control' => 'Flood Kontrolle',

/*********/
	'cat_attachments' => 'Dateianh�nge',

	'item_a_i_t' => 'Automatische Bild-Thumbnails',
	'item_a_t' => 'Dateitypen',
	'item_m_a' => 'Mehrere Dateianh�nge',
	'item_a_p' => 'Anpassbare Platzierung von Anh�ngen',

/*********/
	'cat_caching' => 'Cache',

	'item_db_q_c' => 'Datenbankabfragen Cache',
	'item_t_c' => 'Template Cache',
	'item_a_d' => 'Beliebige Daten',
	'item_m_c_r' => 'Manuelle Cache-Aktualisierung',

/*********/
	'cat_profile' => 'Profile / Mitgliederliste',

	'item_c_p_f' => 'Benutzerspezifische Profilfelder',
	'item_u_p_s' => 'Benutzer Beitrags-Statistik',
	'item_u_i_m' => 'Benutzer Instant Messenger',
	'item_u_p_d' => 'Benutzer Profil Details',
	'item_m_list_search' => 'Mitgliederliste Suche',
	'item_u_m_v' => 'G�sten die Ansicht der Mitgliederliste erlauben/verbieten',

/*********/
	'cat_search_system' => 'Suchfunktion',

	'item_ft_n' => 'Volltext-Suche',
	'item_c_t_s' => 'Themenspezifische Suche',
	'item_c_f_s' => 'Forenspezifische Suche',
	'item_my_sql_text' => 'MySQL Volltext',
	'item_a_s' => 'Suche nach Autor',
	'item_a_search' => 'Erweiterte Suche',
	'item_v_a_post' => 'Zeige unbeantwortete Beitr�ge',
	'item_a_n_t' => 'Aktive / Neue Themen',
	'item_p_s_l_v' => 'Beitr�ge seit dem letzten Besuch',
	'item_s_f_l' => 'Suchen Flood-Kontrolle',

/*********/
	'cat_forums' => 'Forum',

	'item_categories' => 'Kategorien',
	'item_p_p_f' => 'Foren durch ein Passwort sch�tzen',
	'item_f_s_s' => 'Style f�r jedes einzelne Forum w�hlbar',
	'item_url_l_r_f' => 'Foren als Link',
	'item_f_rules' => 'Forenregeln',
	'item_subforum' => 'Unterforen',
	'item_last_post' => 'Letzter Beitrag',
	'item_forum_pruning' => 'Automatisches L�schen inaktiver Themen',
	'item_d_a_t' => 'Hervorhebung aktiver Themen',
	'item_s_t_forums' => 'Foren abonnieren',
	'item_s_t_topics' => 'Themen abonnieren',
	'item_b_t' => 'Lesezeichen',
	'item_t_s' => 'Themensortierung',
	'item_p_s' => 'Beitragssortierung',
	'item_t_p_t' => 'Kennzeichnung der eigenen Beitr�ge',
	'item_print_t' => 'Thema drucken',
	'item_e_mail_t' => 'Thema als E-Mail versenden',

/*********/
	'cat_ucp' => 'Benutzerkontrollzentrum',

	'item_u_s' => 'Signaturen',
	'item_u_a' => 'Avatare',
	'item_u_ranks' => 'Benutzerr�nge',
	'item_u_o_l' => '\'Wer ist online\' Liste',
	'item_user_p' => 'Pers�nliche Einstellungen',
	'item_u_p_s' => 'Pers�nliche Profildaten',
	'item_m_s_pm_post_d' => 'Verwalte gespeicherte PN / Beitrags-Entw�rfe',
	'item_m_book' => 'Verwalte Lesezeichen',
	'item_m_attach' => 'Verwalte Dateianh�nge',
	'item_m_s_t' => 'Verwalte abonierte Themen',
	'item_c_p_f' => 'Benutzerspezifische Profil Felder',
	'item_friend_foe_list' => 'Freund / Feind Liste',

/*********/
	'cat_priv_messaging' => 'Private Nachrichten',

	'item_add_pm_folder' => 'Zus�tzliche PN Ordner',
	'item_custom_pm_filter' => 'Einstellbare PN Filter Regeln',
	'item_send_multiple_reci' => 'Senden an mehrere Empf�nger',
	'item_send_blind_carbon' => 'Senden von BCC (Blind Carbon Copies)',
	'item_send_to_group' => 'Senden an Gruppen',
	'item_f_message' => 'Mitteilungen weiterleiten',
	'item_a_book' => 'Adressbuch',
	'item_message_d' => 'Mitteilungs-Entw�rfe',
	'item_exp_mess' => 'Mitteilungen exportieren',
	'item_attach_message' => 'Dateianh�nge f�r Mitteilungen',
	'item_convers_view' => 'Verlaufs-Anzeige',
	'item_c_m_h_r' => 'Benutzerdefinierte Regeln zur PN-Verarbeitung',

/*********/
	'cat_usergroups' => 'Benutzergruppen',

	'item_g_t' => 'Gruppen-Arten',
	'item_ucp_group_manage' => 'UCP Gruppen Verwaltung',
	'item_ucp_group_manage_membership' => 'UCP Gruppen Mitgliedschafts-Verwaltung',
	'item_m_g_l' => 'Mehrere Gruppenleiter',
	'item_c_g_c' => 'Benutzerspezifische Gruppenfarben',
	'item_group_ranks' => 'Gruppen-R�nge',
	'item_group_avatar' => 'Gruppen-Avatare',
	'item_group_based_memberlist' => 'Mitgliederlisten-Ansicht anhand der Gruppen',

/*********/
	'cat_mcp' => 'Moderation Kontroll Panel',

	'item_global_moder' => 'Foren�bergreifende Moderatoren',
	'item_forum_moder' => 'Forenspezifische Moderatoren',
	'item_t_post_m_q' => 'Warteschlange f�r zu moderierende Beitr�ge',
	'item_m_r_t_p' => 'Verwaltung gemeldeter Themen / Beitr�ge',
	'item_t_h' => 'Themen-Verlauf',
	'item_f_t_logs' => 'Forum / Themen Logs',
	'item_l_m_l' => 'Lokalisierte Moderator Logs',
	'item_p_e' => 'Bearbeiten von Beitr�gen',
	'item_p_l' => 'Sperren von Beitr�gen',
	'item_post_details' => 'Beitrags-Details',
	'item_c_p_author' => 'Bearbeiten des Beitrags-Autors',
	'item_quick_mod_tools' => 'Schnell-Moderation Werkzeuge',
	'item_moving_t' => 'Verschieben von Themen',
	'item_m_m_t' => 'Verschieben mehrerer Themen',
	'item_merging_t' => 'Zusammenf�hren von Themen',
	'item_merging_p' => 'Zusammenf�hren von Beitr�gen',
	'item_merging_multiple_t' => 'Zusammenf�hren mehrerer Themen',
	'item_split_t' => 'Aufspalten von Themen',
	'item_locking_t' => 'Sperren von Themen',
	'item_deleting_t' => 'L�schen von Themen',
	'item_copying_t' => 'Kopieren von Themen',
	'item_global_topics' => 'Foren�bergreifende Themen',
	'item_announcement_t' => 'Ank�ndigungs-Themen',
	'item_s_topics' => 'Wichtige Themen',
	'item_mange_bans' => 'Verwalten von Sperrungen',
	'item_m_u_w' => 'Verwalten von Verwarnungen',
	'item_banning_by_username' => 'Sperren anhand des Benutzernamens',
	'item_banning_by_email' => 'Sperren anhand der E-Mail Adresse',
	'item_banning_by_ip' => 'Sperren anhand der IP Adresse',
	'item_user_notes' => 'Benutzer-Notizen',

/*********/
	'cat_acp' => 'Administrations-Bereich (ACP)',

	'item_f_s_b_c' => 'Gr�nder-Status / Forum-Ersteller',
	'item_l_s' => 'Serverlast-Einstellungen',
	'item_p_i_u' => 'L�schen inaktiver Benutzer',
	'item_m_r' => 'Rang-Verwaltung',
	'item_m_groups' => 'Gruppen-Verwaltung',
	'item_m_group_membership' => 'Verwalten der Gruppen-Mitgliedschaften',
	'item_manage_attach_setting' => 'Verwalten der Dateianh�nge und Einstellungen',
	'item_manage_user_attachment' => 'Verwalten der Benutzer-Dateianh�nge',
	'item_user_editing' => 'Bearbeiten der Benutzer',
	'item_list_group_index' => 'Anzeige der Gruppen im Index',
	'item_topic_icons' => 'Themen-Symbole',
	'item_mass_e_mail' => 'Massen-E-Mail',
	'item_manage_report_reasons' => 'Verwalten der Meldungs-/Ablehnungs-Gr�nde',
	'item_module_manage' => 'Module-Verwaltung',
	'item_custom_bbcode' => 'Benutzerdefinierte BBCodes',
	'item_custom_profile_field' => 'Benutzerdefinierte Profilfelder',
	'item_custom_profile_field_placement' => 'Anzeige-Optionen f�r Benutzerdefinierte Profilfelder',
	'item_custom_profile_data_types' => 'Dateitypen f�r Benutzerdefinierte Profilfelder',
	'item_manage_bans' => 'Verwalten von Sperrungen',
	'item_ban_by_username' => 'Sperren anhand des Benutzernamens',
	'item_ban_by_email' => 'Sperren anhand der E-Mail Adresse',
	'item_ban_by_ip' => 'Sperren anhand der IP Adresse',

/*********/
	'cat_styles' => 'Styles',

	'item_s_style' => 'Styles-Auswahl',
	'item_install_style' => 'Installieren / Verwalten eigener Styles',
	'item_custom_style' => 'Anpassen / Bearbeiten Templates',
	'item_custom_themes' => 'Anpassen / Bearbeiten Themes',
	'item_custom_imageset' => 'Anpassen / Bearbeiten Grafiksammlungen',

/*********/
	'cat_permission' => 'Berechtigungen',

	'item_g_b_g_p' => 'Gruppenbasierte globale Berechtigungen',
	'item_g_b_m_p' => 'Gruppenbasierte Moderations-Berechtigungen',
	'item_g_b_a_p' => 'Gruppenbasierte Administrations-Berechtigungen',
	'item_g_b_f_p' => 'Gruppenbasierte Foren-Berechtigungen',
	'item_u_b_g_p' => 'Benutzerbasierte globale Berechtigungen',
	'item_u_b_m_p' => 'Benutzerbasierte Moderator-Berechtigungen',
	'item_u_b_a_p' => 'Benutzerbasierte Administrator-Berechtigungen',
	'item_u_b_f_p' => 'Benutzerbasierte Foren-Berechtigungen',
	'item_admin_perm_roles' => 'Rollen f�r Administrations-Berechtigungen',
	'item_user_perm_roles' => 'Rollen f�r Benutzer-Berechtigungen',
	'item_mod_perm_roles' => 'Rollen f�r Moderator-Berechtigungen',
	'item_forum_perm_roles' => 'Rollen f�r Foren-Berechtigungen',
	'item_mask_perm_multi' => 'Mehrstufige Berechtigungsmasken',

/*********/
	'cat_notifications' => 'Benachrichtigungen',

	'item_e_mail_true' => 'E-Mail',
	'item_instant_mess' => 'Instant Messenger',
	'item_book_m' => 'Lesezeichen',

/*********/
	'cat_localisations' => 'Lokalisierung',

	'item_s_m_l_p' => 'Unterst�tzung f�r mehrere Sprachpakete',
	'item_language' => 'Sprachen',
	'bb2_language' => '50+',
	'ip_language' => '6',
	'bb3_language' => '61',
	'item_right_t_left' => 'Rechts nach Links Unterst�tzung',
	'item_l_p_w_edit' => 'Webbasierter Editor f�r Sprachpakete',

/*********/
	'cat_install' => 'Installation / Upgrade',

	'item_install_wizard' => 'Installations-Assistent',
	'item_update_wizard' => 'Update-Assistent',
	'item_converter_wizard' => 'Konvertierungs-Assistent',
	'item_file_merge_diff_engine' => '�nderungsbasierte Update-Funktion (Merge/Diff)',

/*********/
	'cat_technical' => 'Technische Merkmale',

	'item_cms_integra' => 'CMS Software Einbindung',
	'item_xhtml_compliant' => 'XHTML Kompatibilit�t',

/*********/
	'cat_plugins' => 'Plugins',

	'item_auth_plug' => 'Berechtigungs-Plugins',
	'item_search_plug' => 'Such-Plugins',
	'item_cache_plug' => 'Cache-Plugins',
	'item_captcha_plug' => 'CAPTCHA-Plugins',
	'item_hooks_sys' => 'Hooks-System',
	'item_expand_module' => 'Erweiterbare Module',

/*********/
	'cat_features' => 'Extra Funktionen',

	'item_feat_cms' => 'CMS',
	'item_feat_album' => 'Foto-Galerie',
	'item_feat_downloads' => 'Download-System',
	'item_feat_kb' => 'Wissensdatenbank',
	'item_feat_links' => 'Link-System',
	'item_feat_news' => 'News-Kategorien',
	'item_feat_stats' => 'Statistik-Modul',
	'item_feat_contact_us' => 'Kontakt-Formular',
	'item_feat_lofi' => 'LoFi-Ansicht',
	'item_feat_ajax_shoutbox' => 'AJAX Shoutbox',
	'item_feat_shoutbox' => 'Standard Shoutbox',
	'item_feat_calendar' => 'Kalender und Event System',
	'item_feat_pm_notifications' => 'PN bei Neuregistrierung und Geburtstag',

/*********/
	'cat_features_acp' => 'Extra Funktionen ACP',

	'item_feat_info' => 'Server Information im ACP',
	'item_feat_db_mntnc' => 'Datenbank-Wartung',
	'item_feat_mysqladmin' => 'MySQL Admin',
	'item_feat_editable_f_r' => 'Mehrsprachige editierbare FAQs und Regeln',
	'item_feat_multiple_ranks' => 'Mehrere R�nge',

/*********/
	'cat_features_ucp' => 'Extra Funktionen UCP',

	'item_feat_ajax_checks' => 'AJAX �berpr�fung bei Registrierung',
	'item_feat_upi2db' => 'Ungelesene Beitr�ge in Datenbank (UPI2DB Mod)',
	'item_feat_custom_avatar' => 'Benutzerspezifische Avatar Erstellung',
	'item_feat_profile_stats' => 'Profil Statistiken und Extra Benutzer Info',
	'item_feat_user_self_deactivation' => 'Deaktivierung des Kontos durch den Benutzer',
	'item_feat_login_archive' => 'Login Historie',

/*********/
	'cat_features_bbcodes' => 'Extra Funktionen BBCodes',

	'item_feat_random_quotes' => 'Zuf�llige Zitate',
	'item_feat_bbcodes' => 'Integrierte BBCodes Box',
	'item_feat_acronyms' => 'Akronyme',
	'item_feat_autolinks' => 'Autolinks',
	'item_feat_smiley_creator' => 'Smiley Erstellung',

/*********/
	'cat_features_seo' => 'Extra Funktionen SEO',

	'item_feat_url_rewrite' => 'SEO Optimierung und URL Rewrite',
	'item_feat_rss' => 'RSS-Feed',
	'item_feat_referrers' => 'Referrers-Verfolgung',
	'item_feat_referrers' => 'Bots-Verfolgung',
	'item_feat_referrers' => 'Browser und OS Erkennung',
	'item_feat_banners' => 'Banner und Ad Verwaltung',

/*********/
	'cat_features_forum' => 'Extra Funktionen Forum und Beitr�ge',

	'item_feat_bin' => 'Papierkorb',
	'item_feat_forum_icons' => 'Forum Symbole',
	'item_feat_link_this_topic' => 'Verlinke dieses Thema',
	'item_feat_edit_notes' => 'Bearbeitungs-Notizen',
	'item_feat_topic_prefixes' => 'Themen-Pr�fixe',
	'item_feat_topic_description' => 'Themen-Beschreibung',
	'item_feat_rating' => 'Themen-Bewertung',
	'item_feat_thanks' => 'Danke-Funktion f�r Themen',
	'item_feat_topic_views' => 'Themen-Ansichten',
	'item_feat_digests' => 'Themen-Digests',
	'item_feat_upload_images' => 'Bilderupload w�hrend der Beitragserstellung',
	'item_feat_quick_reply' => 'Schnellantwort',
	'item_feat_social_bookmars' => 'Social Bookmarks',
	'item_feat_ftr' => 'Force Topic Read',
	'item_feat_detailed_notifications' => 'Detailierte Benachrichtigungen mit Mitteilungen',

//	'item_feat_' => '',
	)
);

?>