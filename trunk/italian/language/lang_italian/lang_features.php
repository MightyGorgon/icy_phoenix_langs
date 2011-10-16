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
	'PHPBB_FEATURES_PAGE' => 'Le caratteristiche di phpBB sono state prese dal sito ufficiale di phpBB [ <a href="http://www.phpbb.com/about/features/">LINK</a> ]',

/*********/
	'cat_general' => 'Generale',

	'item_license' => 'Licenza',
	'bb2_license' => 'GPL',
	'ip_license' => 'GPL',
	'bb3_license' => 'GPL',

	'item_price' => 'Prezzo',
	'bb2_price' => 'Gratuito',
	'ip_price' => 'Gratuito',
	'bb3_price' => 'Gratuito',

	'item_programming' => 'Linguaggio Programmazione',
	'bb2_programming' => 'PHP',
	'ip_programming' => 'PHP',
	'bb3_programming' => 'PHP',

	'item_latest' => 'Ultima Versione',
	'bb2_latest' => '2.0.22',
	'ip_latest' => '1.3.0.53a',
	'bb3_latest' => '3.0.6',

	'item_release' => 'Data Rilascio',
	'bb2_release' => '2008/02/17',
	'ip_release' => '2010/01/17',
	'bb3_release' => '2009/11/17',

/*********/
	'cat_basic_features' => 'Funzionalit&agrave; Base',

	'item_utf8' => 'Supporto UTF-8',
	'item_user_preferences' => 'Preferenze utenti',
	'item_mod' => 'Moderazione',
	'item_admin' => 'Amministrazione',
	'item_search_engine' => 'Gestione motori di ricerca',
	'item_un_mess_track' => 'Memorizzazione messaggi non letti',
	'item_pms' => 'Messaggi privati',
	'item_stat' => 'Statistiche',

/*********/
	'cat_security' => 'Sicurezza',

	'item_perm_ban' => 'Espulsione permanente',
	'item_temp_ban' => 'Espulsione temporanea (Sospensione)',
	'item_permission' => 'Permessi',
	'item_paid_sec' => 'Revisione codice a pagamento',
	'item_form_hand' => 'Gestione FORM',
	'item_t_a_p_h' => 'Gestione automatica parametri in base al tipo',
	'item_t_a_d_l' => 'Gestione automatica DB in base al tipo',
	'item_p_h' => 'Criptatura password',

/*********/
	'cat_antispam' => 'Anti-Spam',

	'item_c_v_c' => 'Conferma visuale CAPTCHA',
	'item_f_c' => 'Controllo Flood',
	'item_groups' => 'Gruppi',
	'item_acls' => 'ACLs',
	'item_b_l' => 'Blacklist',
	'item_banning' => 'Espulsione',
	'item_suspension' => 'Sospensione',
	'item_warn' => 'Ammonizioni',
	'item_u_l' => 'Log azioni',
	'item_u_p_ip_l' => 'Log IP',
	'item_r_p' => 'Segnalazione messaggi',
	'item_post_m' => 'Moderazione messaggi',

/*********/
	'cat_datamanagement' => 'Gestione Dati',

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
	'item_p_t_pruning' => 'Eliminazione automatica Post / Topic',

/*********/
	'cat_registration' => 'Registrazione',

	'item_coppa' => 'Registrazioni COPPA',
	'item_l_r_a' => 'Limite tentativi registrazione',
	'item_username_length' => 'Impostazione lunghezza min/max usename',
	'item_pass_length' => 'Impostazione lunghezza min/max password',
	'item_l_u_c' => 'Proibizione caratteri in nome utente',
	'item_s_p_c_r' => 'Complessit&agrave; password',
	'item_f_p_c' => 'Forzatura variazione password',
	'item_e_mail_address_reusage' => 'Consenti il riutilizzo dell\'email',

/*********/
	'cat_posting' => 'Invio Messaggi',

	'item_t_d_m' => 'Visualizzazione messaggi',
	'bb2_t_d_m' => 'Piatta',
	'ip_t_d_m' => 'Piatta',
	'bb3_t_d_m' => 'Piatta',

	'item_bbcode' => 'BBCode',
	'item_bbcode_custom' => 'BBCode personalizzati',
	'item_html_in_post' => 'HTML nei messaggi',
	'item_emoticon' => 'Smileys',
	'item_quoting' => 'Citazione',
	'item_q_m_p' => 'Citazione multipla',
	'item_f_t' => 'Barre formattazione',
	'item_w_c' => 'Censura',
	'item_s_h' => 'Evidenziazione sintassi',
	'item_attachments' => 'Allegati',
	'item_p_d' => 'Bozze',
	'item_polls' => 'Sondaggi',
	'item_m_p_o_v' => 'Sondatti a risposta multipla',
	'item_u_b_p_t' => 'Monitoraggio votazioni',
	'item_all_dis_v_c' => 'Possibilit&agrave; variazione voto',
	'item_beaten_p_review' => 'Notifica nuovo messaggio in risposta',
	'item_p_p' => 'Anteprima',
	'item_flood_control' => 'Controllo Flood',

/*********/
	'cat_attachments' => 'Allegati',

	'item_a_i_t' => 'Miniature automatiche',
	'item_a_t' => 'Tipologia allegati',
	'item_m_a' => 'Allegati multipli',
	'item_a_p' => 'Posizionamento allegati',

/*********/
	'cat_caching' => 'Caching',

	'item_db_q_c' => 'Cache database query',
	'item_t_c' => 'Cache template',
	'item_a_d' => 'Dati arbitrari',
	'item_m_c_r' => 'Svuotamento manuale cache',

/*********/
	'cat_profile' => 'Profilo / Lista Utenti',

	'item_c_p_f' => 'Campi profilo personalizzati',
	'item_u_p_s' => 'Statistiche invio messaggi',
	'item_u_i_m' => 'Messaggistica istantanea',
	'item_u_p_d' => 'Profilo dettagliato',
	'item_m_list_search' => 'Ricerca in lista utenti',
	'item_u_m_v' => 'Gestione permessi per visualizzazione lista e profili',

/*********/
	'cat_search_system' => 'Ricerca',

	'item_ft_n' => 'Nativa Fulltext',
	'item_c_t_s' => 'Ricerca topic personalizzata',
	'item_c_f_s' => 'Ricerca forum personalizzata',
	'item_my_sql_text' => 'MySQL fulltext',
	'item_a_s' => 'Ricerca per autore',
	'item_a_search' => 'Ricerca avanzata',
	'item_v_a_post' => 'Messaggi non letti',
	'item_a_n_t' => 'Messaggi recenti',
	'item_p_s_l_v' => 'Messaggi dall\'ultima visita',
	'item_s_f_l' => 'Flood in ricerca',

/*********/
	'cat_forums' => 'Forums',

	'item_categories' => 'Categorie',
	'item_p_p_f' => 'Forum protetti da password',
	'item_f_s_s' => 'Forum con stile specifico',
	'item_url_l_r_f' => 'Forum con reindirizzamento su link',
	'item_f_rules' => 'Regole forum',
	'item_subforum' => 'Sottocategorie forum',
	'item_last_post' => 'Ultimo messaggio',
	'item_forum_pruning' => 'Pulizia forum',
	'item_d_a_t' => 'Messaggi recenti per forum',
	'item_s_t_forums' => 'Notifiche per forum',
	'item_s_t_topics' => 'Notifiche per argomenti',
	'item_b_t' => 'Segnalibri',
	'item_t_s' => 'Ordinamento argomenti',
	'item_p_s' => 'Ordinamento messaggi',
	'item_t_p_t' => 'Monitoraggio partecipazione',
	'item_print_t' => 'Versione stampabile',
	'item_e_mail_t' => 'Invio per email',

/*********/
	'cat_ucp' => 'Pannello Di Controllo Utente (UCP)',

	'item_u_s' => 'Gestione firma',
	'item_u_a' => 'Gestione avatar',
	'item_u_ranks' => 'Livelli utente',
	'item_u_o_l' => 'Lista utenti online',
	'item_user_p' => 'Preferenze',
	'item_u_p_s' => 'Impostazioni profilo',
	'item_m_s_pm_post_d' => 'Gestione messaggi privati',
	'item_m_book' => 'Segnalibri',
	'item_m_attach' => 'Allegati',
	'item_m_s_t' => 'Argomenti sottoscritti',
	'item_c_p_f' => 'Campi profilo personalizzati',
	'item_friend_foe_list' => 'Lista amici',

/*********/
	'cat_priv_messaging' => 'Messaggi Privati',

	'item_add_pm_folder' => 'Cartelle aggiuntive',
	'item_custom_pm_filter' => 'Regole personalizzabili',
	'item_send_multiple_reci' => 'Invio multiplo',
	'item_send_blind_carbon' => 'Copia nascosta',
	'item_send_to_group' => 'Invio a gruppi',
	'item_f_message' => 'Inoltro messaggi',
	'item_a_book' => 'Rubrica',
	'item_message_d' => 'Bozze',
	'item_exp_mess' => 'Esportazione messaggi',
	'item_attach_message' => 'Allegati',
	'item_convers_view' => 'Visualizzazione intera conversazione',
	'item_c_m_h_r' => 'Gestione regole personalizzabile',

/*********/
	'cat_usergroups' => 'Gruppi',

	'item_g_t' => 'Tipologia gruppi',
	'item_ucp_group_manage' => 'Gestione gruppi',
	'item_ucp_group_manage_membership' => 'Gestione adesioni',
	'item_m_g_l' => 'Leader multipli',
	'item_c_g_c' => 'Colore personalizzato',
	'item_group_ranks' => 'Livello di gruppo',
	'item_group_avatar' => 'Avatar di gruppo',
	'item_group_based_memberlist' => 'Visualizzazione utenti in base al gruppo',

/*********/
	'cat_mcp' => 'Pannello Di Moderazione (MCP)',

	'item_global_moder' => 'Moderatori globali',
	'item_forum_moder' => 'Moderatori per forum',
	'item_t_post_m_q' => 'Coda di moderazione',
	'item_m_r_t_p' => 'Gestione segnalazione argomenti',
	'item_t_h' => 'Storia argomenti',
	'item_f_t_logs' => 'Log Forum / Topic',
	'item_l_m_l' => 'Log moderatori',
	'item_p_e' => 'Modifica messaggi',
	'item_p_l' => 'Blocco messaggi',
	'item_post_details' => 'Dettagli argomento',
	'item_c_p_author' => 'Modifica autore',
	'item_quick_mod_tools' => 'Moderazione veloce',
	'item_moving_t' => 'Spostamento argomenti',
	'item_m_m_t' => 'Spostamento multiplo argomenti',
	'item_merging_t' => 'Fusione argomenti',
	'item_merging_p' => 'Fusione messaggi',
	'item_merging_multiple_t' => 'Fusione multipla',
	'item_split_t' => 'Divisione argomenti',
	'item_locking_t' => 'Blocco argomenti',
	'item_deleting_t' => 'Eliminazione argomenti',
	'item_copying_t' => 'Copia argomenti',
	'item_global_topics' => 'Argomenti globali',
	'item_announcement_t' => 'Annunci',
	'item_s_topics' => 'Importanti',
	'item_mange_bans' => 'Gestione espulsioni',
	'item_m_u_w' => 'Gestione ammonizioni',
	'item_banning_by_username' => 'Espulsione per nome utente',
	'item_banning_by_email' => 'Espulsione per email',
	'item_banning_by_ip' => 'Espulsione per indirizzo IP',
	'item_user_notes' => 'Note utente',

/*********/
	'cat_acp' => 'Pannello Di Amministrazione (ACP)',

	'item_f_s_b_c' => 'Fondatore',
	'item_l_s' => 'Impostazioni carico server',
	'item_p_i_u' => 'Eliminazione utenti inattivi',
	'item_m_r' => 'Gestione livelli',
	'item_m_groups' => 'Gestione gruppi',
	'item_m_group_membership' => 'Gestione adesione gruppi',
	'item_manage_attach_setting' => 'Gestione allegati',
	'item_manage_user_attachment' => 'Gestione allegati utenti',
	'item_user_editing' => 'Modifica profili',
	'item_list_group_index' => 'Visualizzazione gruppi nel forum',
	'item_topic_icons' => 'Icone argomenti',
	'item_mass_e_mail' => 'Email di gruppo',
	'item_manage_report_reasons' => 'Gestione rapporti',
	'item_module_manage' => 'Gestione moduli',
	'item_custom_bbcode' => 'BBCodes personalizzati',
	'item_custom_profile_field' => 'Campi profilo personalizzabili',
	'item_custom_profile_field_placement' => 'Posizionamento campi profilo',
	'item_custom_profile_data_types' => 'Tipologia campi profilo',
	'item_manage_bans' => 'Gestione espulsioni',
	'item_ban_by_username' => 'Espulsione per nome utente',
	'item_ban_by_email' => 'Espulsione per indirizzo email',
	'item_ban_by_ip' => 'Espulsione per indirizzo IP',

/*********/
	'cat_styles' => 'Stili',

	'item_s_style' => 'Selezione stili',
	'item_install_style' => 'Gestione stili',
	'item_custom_style' => 'Personalizzazione template',
	'item_custom_themes' => 'Personalizzazione temi',
	'item_custom_imageset' => 'Personalizzazione immagini',

/*********/
	'cat_permission' => 'Permessi',

	'item_g_b_g_p' => 'Permessi globali',
	'item_g_b_m_p' => 'Permessi moderazione',
	'item_g_b_a_p' => 'Permessi amministrazione',
	'item_g_b_f_p' => 'Permessi forum basati su gruppi',
	'item_u_b_g_p' => 'Permessi utenti personalizzabili',
	'item_u_b_m_p' => 'Permessi moderazione personalizzabili',
	'item_u_b_a_p' => 'Permessi amministrazione personalizzabili',
	'item_u_b_f_p' => 'Oermessi forum personalizzabili',
	'item_admin_perm_roles' => 'Ruoli amministrazione',
	'item_user_perm_roles' => 'Ruoli utenti',
	'item_mod_perm_roles' => 'Ruoli moderazione',
	'item_forum_perm_roles' => 'Ruoli forum',
	'item_mask_perm_multi' => 'Impostazione multipla permessi',

/*********/
	'cat_notifications' => 'Notifiche',

	'item_e_mail_true' => 'Email',
	'item_instant_mess' => 'Messagistica istantanea',
	'item_book_m' => 'Segnalibri',

/*********/
	'cat_localisations' => 'Localizzazione',

	'item_s_m_l_p' => 'Supporto multilingua',
	'item_language' => 'Lingue',
	'bb2_language' => '50+',
	'ip_language' => '8',
	'bb3_language' => '61',
	'item_right_t_left' => 'Supporto testo da destra a sinistra',
	'item_l_p_w_edit' => 'Modifica online file di lingua',

/*********/
	'cat_install' => 'Installazione / Aggiornamento',

	'item_install_wizard' => 'Installazione guidata',
	'item_update_wizard' => 'Aggiornamento guidato',
	'item_converter_wizard' => 'Conversione guidata',
	'item_file_merge_diff_engine' => 'Generazione automatica differenze',

/*********/
	'cat_technical' => 'Funzionalit&agrave; tecniche',

	'item_cms_integra' => 'Integrazione CMS',
	'item_xhtml_compliant' => 'Compatibilit&agrave; XHTML',

/*********/
	'cat_plugins' => 'Plugins',

	'item_auth_plug' => 'Plugin permessi',
	'item_search_plug' => 'Plugin ricerca',
	'item_cache_plug' => 'Plugin cache',
	'item_captcha_plug' => 'Plugin CAPTCHA',
	'item_hooks_sys' => 'Sistema Hooks',
	'item_expand_module' => 'Moduli espandibili',

/*********/
	'cat_features' => 'Funzionalit&agrave; Extra',

	'item_feat_cms' => 'CMS',
	'item_feat_album' => 'Galleria fotografica',
	'item_feat_downloads' => 'Downloads',
	'item_feat_kb' => 'Knowledge base',
	'item_feat_links' => 'Gestione links',
	'item_feat_news' => 'Gestione news',
	'item_feat_stats' => 'Moduli statistiche',
	'item_feat_contact_us' => 'Modulo contattaci',
	'item_feat_lofi' => 'Visualizzazione LoFi',
	'item_feat_ajax_shoutbox' => 'AJAX chat',
	'item_feat_shoutbox' => 'Shoutbox standard',
	'item_feat_calendar' => 'Calendario e gestione eventi',
	'item_feat_pm_notifications' => 'Messaggi privati automatici su eventi',

/*********/
	'cat_features_acp' => 'Funzionalit&agrave; Extra ACP',

	'item_feat_info' => 'Informazioni server',
	'item_feat_db_mntnc' => 'Manutenzione database',
	'item_feat_mysqladmin' => 'MySQL admin',
	'item_feat_editable_f_r' => 'Modifica FAQs e regolamento',
	'item_feat_multiple_ranks' => 'Livelli multipli',

/*********/
	'cat_features_ucp' => 'Funzionalit&agrave; Extra UCP',

	'item_feat_ajax_checks' => 'Verifiche AJAX in fase di registrazione',
	'item_feat_upi2db' => 'Memorizzazione messaggi non letti nel DB',
	'item_feat_custom_avatar' => 'Creazione avatar personalizzato',
	'item_feat_profile_stats' => 'Statistiche extra nel profilo',
	'item_feat_user_self_deactivation' => 'Disabilitazione account',
	'item_feat_login_archive' => 'Memorizzazione login',

/*********/
	'cat_features_bbcodes' => 'BBCodes',

	'item_feat_random_quotes' => 'Citazioni casuali',
	'item_feat_bbcodes' => 'Blocco formattazione',
	'item_feat_acronyms' => 'Acronimi',
	'item_feat_autolinks' => 'Link automatici',
	'item_feat_smiley_creator' => 'Creazione smileys',

/*********/
	'cat_features_seo' => 'SEO',

	'item_feat_url_rewrite' => 'Ottimizzazione SEO e URL Rewrite',
	'item_feat_rss' => 'Feed RSS',
	'item_feat_referrers' => 'Referrers',
	'item_feat_referrers' => 'Monitoraggio Bots',
	'item_feat_referrers' => 'Rilevamento browsers e sistema operativo',
	'item_feat_banners' => 'Gestione banner',

/*********/
	'cat_features_forum' => 'Funzionalit&agrave; Extra Forum E Messaggi',

	'item_feat_bin' => 'Cestino',
	'item_feat_forum_icons' => 'Icone forum',
	'item_feat_link_this_topic' => 'Link per topic',
	'item_feat_edit_notes' => 'Note di modifica',
	'item_feat_topic_prefixes' => 'Prefissi per argomenti',
	'item_feat_topic_description' => 'Descrizione argomenti',
	'item_feat_rating' => 'Valutazione argomenti',
	'item_feat_thanks' => 'Ringraziamenti',
	'item_feat_topic_views' => 'Memorizzazione visualizzazioni',
	'item_feat_digests' => 'Digests',
	'item_feat_upload_images' => 'Caricamento immagini',
	'item_feat_quick_reply' => 'Risposta veloce',
	'item_feat_social_bookmars' => 'Social Bookmarks',
	'item_feat_ftr' => 'Forza lettura argomenti',
	'item_feat_detailed_notifications' => 'Notifiche dettagliate',
	)
);

?>