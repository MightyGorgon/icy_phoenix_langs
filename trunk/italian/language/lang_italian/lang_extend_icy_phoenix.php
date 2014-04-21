<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'05_Server_Settings' => 'Server',
	'10_Site_Settings' => 'Sito',
	'15_Various_Settings' => 'Impostazioni Varie',
	'20_SQL_Charge' => 'Ottimizzazione SQL',
	'25_Users' => 'Utenti',
	'27_Social_Networks' => 'Social Networks',
	'30_Posting' => 'Messaggi',
	'40_IMG_Posting' => 'Invio Immagini',
	'50_Hierarchy_setting' => 'Forum',
	'60_Calendar_settings' => 'Calendario',
	'70_SEO' => 'SEO',
	'80_Security' => 'Logs E Sicurezza',
	'90_Cron' => 'Cron',
	)
);

// admin part
if ($lang_extend_admin)
{
	$lang = array_merge($lang, array(
		'Lang_extend_icy_phoenix' => 'Icy Phoenix',

// TAB - SERVER
		'SITE_META_KEYWORDS' => 'Meta Keywords',
		'SITE_META_KEYWORDS_SWITCH' => 'Attiva Meta Keywords Da DB',
		'SITE_META_KEYWORDS_SWITCH_EXPLAIN' => 'Se attivi questa funzione, nelle pagine del sito verranno mostrate le keywords definite qui sopra invece di quelle presenti nel file <i>lang_main_settings.php</i>.',
		'SITE_META_DESCRIPTION' => 'Meta Description',
		'SITE_META_DESCRIPTION_SWITCH' => 'Attiva Meta Description Da DB',
		'SITE_META_DESCRIPTION_SWITCH_EXPLAIN' => 'Se attivi questa funzione, nelle pagine del sito verr&agrave; mostrata la descrizione definita qui sopra invece di quella presente nel file <i>lang_main_settings.php</i>.',
		'SITE_META_AUTHOR' => 'Meta Author',
		'SITE_META_AUTHOR_SWITCH' => 'Attiva Meta Author Da DB',
		'SITE_META_AUTHOR_SWITCH_EXPLAIN' => 'Se attivi questa funzione, nelle pagine del sito invece verr&agrave; mostrato l\'autore definito qui sopra invece di quello presente nel file <i>lang_main_settings.php</i>.',
		'SITE_META_COPYRIGHT' => 'Meta Copyright',
		'SITE_META_COPYRIGHT_SWITCH' => 'Attiva Meta Copyright Da DB',
		'SITE_META_COPYRIGHT_SWITCH_EXPLAIN' => 'Se attivi questa funzione, nelle pagine del sito verr&agrave; mostrato il copyright definito qui sopra invece di quello presente nel file <i>lang_main_settings.php</i>.',

// TAB - SITE
		'IP_mobile_style_disable' => 'Disattiva Rilevazione Periferiche Mobili',
		'IP_mobile_style_disable_explain' => 'Attivando questa opzione lo stile per le periferiche mobili non verr&agrave; attivato in automatico. Lasciando questa opzione disattivata, il template <b>Mobile</b> verr&agrave; attivata in automatico per tutte le periferiche mobili.',

// TAB - Icy Phoenix
		'IP_enable_xs_version_check' => 'Verifica Versione Icy Phoenix',
		'IP_enable_xs_version_check_explain' => 'Abilitando questa opzione ogni volta che si entra in ACP viene verificato che la versione in uso di Icy Phoenix sia la pi&ugrave; aggiornata. Disabilitando questa opzione l\'ACP potrebbe caricarsi pi&ugrave; velocemente. In ogni caso la verifica viene fatta solo una volta al giorno, per cui il rallentamento si dovrebbe riscontrare solo la prima volta che si entra in ACP per ogni giorno.',

		'IP_disable_email_error' => 'Disabilita errori in invio email',

		'IP_html_email' => 'HTML Email',
		'IP_html_email_explain' => 'Attivando questa opzione verranno abilitate le emails in HTML, altrimenti verranno spedite le email come semplice testo.',

		'IP_emails_only_to_admins' => 'Emails Solo Agli Amministratori',
		'IP_emails_only_to_admins_explain' => 'Consenti di utilizzare il sistema di emails solo per inviare emails agli amministratori.',

		'IP_ajax_features_title' => 'Funzionalit&agrave; AJAX',

		'IP_ajax_features' => 'Abilita AJAX',
		'IP_ajax_features_explain' => 'Alcune funzionalit&agrave; AJAX integrate nel sito.',

		'IP_ajax_checks_register' => 'Verifiche AJAX',
		'IP_ajax_checks_register_explain' => 'Attivando questa opzione alcune verifiche verranno effettuate in tempo reale durante la compilazione del modulo di registrazione (attenzione: questa funzione pu&ograve; rallentare la pagina di registrazione).',

		'IP_inactive_users_memberlists' => 'Utenti Non Attivi Nella Lista Utenti E Compleanni',
		'IP_inactive_users_memberlists_explain' => 'Attivando questa opzione gli utenti non attivi verranno mostrati nella lista utenti e compleanni.',

		'IP_page_gen' => 'Visualizza le statistiche di generazione pagina nel Footer',

		'IP_switch_header_dropdown' => 'Attiva menu a discesa in header',
		'IP_switch_header_dropdown_explain' => 'Questa opzione consente di attivare il menu a discesa nell\'intestazione di ogni pagina per la ricerca dei messaggi.',

		'IP_show_alpha_bar' => 'Blocco Ordinamento Alfabetico Argomenti (Globale)',
		'IP_show_alpha_bar_explain' => 'Attivando questa opzione verr&agrave; mostrata in cima alla visualizzazione dei forum una barra per l\'ordinamento alfabetico degli argomenti. La visualizzazione deve comunque essere impostata per ciascun forum nella gestione dei forum.',

		'IP_show_rss_forum_icon' => 'Icone Indice Forum (Globale)',
		'IP_show_rss_forum_icon_explain' => 'Questa opzione mostra delle icone accanto il titolo di ogni forum: RSS, Nuovo Argomento. La visualizzazione deve comunque essere impostata per ciascun forum nella gestione dei forum.',

		'IP_allow_mods_view_self' => 'Consenti accesso ad argomenti con permessi SELF AUTH a TUTTI i Moderatori',
		'IP_allow_mods_view_self_explain' => 'Se un forum ha permessi di accesso solo per i PROPRI messaggi (SELF AUTH) soltanto gli amministratori ed i moderatori di quel forum possono visualizzare tutti i messaggi, altrimenti ciascun utente potr&agrave; visualizzare soltanto i propri messaggi. Purtroppo ci sono vie secondarie che in qualche modo consentono l\'accesso a questi messaggi "riservati", e per questo &egrave; stata programmata una funzione di controllo che consente soltanto agli amministratori di accedere a tutti i messaggi in sezioni come: Argomenti Recenti, Ricerca, Blocchi relativi a messaggi... Se vuoi consentirne l\'accesso secondario anche a TUTTI i moderatori (dunque non soltanto agli amministratori) allora abilita questa opzione. Ricorda che l\'accesso secondario non pu&ograve; essere riservato ai soli moderatori delle sezioni con SELF AUTH, perch&eacute; questo richiederebbe molto carico SQL in pi&ugrave;. Se non usi forum con permessi SELF AUTH allora non hai bisogno di questa funzione.',

		'IP_xmas_fx' => 'Effetto Neve',
		'IP_xmas_fx_explain' => 'Questa opzione abilita un JavaScript che simula l\'effetto neve.',

		'IP_xmas_gfx' => 'Decorazioni Natalizie',
		'IP_xmas_gfx_explain' => 'Attivando questa opzione verranno applicate le decorazioni natalizie sul sito (solo alcuni template supportano questa caratteristica).',

		'IP_select_theme' => 'Cambio Stile',
		'IP_select_theme_explain' => 'Abilitando questa opzione viene aggiunta una casella a discesa per cambiare velocemente stile.',

		'IP_select_lang' => 'Cambio Lingua',
		'IP_select_lang_explain' => 'Abilitando questa opzione vengono aggiunti sull\'indice dei link per poter cambiare velocemente lingua.',

		'IP_cms_dock' => 'Mostra barra icone stile Apple Dock nel CMS',

		'IP_cms_style' => 'Abilita AJAX nel CMS',
		'IP_cms_style_explain' => 'Attivando questa opzione verranno attivate funzionalit&agrave; AJAX nel CMS',

		'IP_split_ga_ann_sticky' => 'Divisione Discussioni per Tipo',
		'IP_split_ga_ann_sticky_explain' => 'Da qui puoi scegliere come Dividere le Discussioni per tipo nella pagina viewforum',
		'IP_split_topic_0' => 'Tutti i Tipi di Discussioni insieme (nessuna Divisione)',
		'IP_split_topic_1' => 'Annunci Globali, Annunci e Discussioni Importanti insieme, Discussioni Normali divise',
		'IP_split_topic_2' => 'Annunci Globali divisi, Annunci e Discussioni Importanti insieme, Discussioni Normali divise',
		'IP_split_topic_3' => 'Tutte le Discussioni divise per tipo',

// TAB - SQL Charge
		'IP_fast_n_furious' => 'Fast And Furious',
		'IP_fast_n_furious_explain' => 'Attivando questa opzione verranno disattivate alcune funzionalit&agrave; che richiedono un\'uso intensivo di SQL, accelerando cos&igrave; il caricamento delle pagine!',

	/*
		'IP_db_cron' => 'Ottimizzazione Database',
		'IP_db_cron_explain' => 'Attivando questa opzione verr&agrave; attivata l\'ottimizzazione automatica del Database',
	*/

		'IP_site_history' => 'Statistiche Visite Sito',
		'IP_site_history_explain' => 'Attivando questa opzione verranno memorizzate delle statistiche sulle visite del sito',

		'IP_active_sessions' => 'Limite Numero Sessioni',
		'IP_active_sessions_explain' => '<b>ATTENZIONE</b>: questo &egrave; il numero massimo di sessioni possibili, se il limite viene raggiunto, il sito risulter&agrave; non accessibile. Lasciare questo valore impostato a 0 (ZERO) se non si ha la consapevolezza di come modificarlo opportunamente.',

		'IP_global_disable_upi2db' => 'Disabilita completamente UPI2DB',
		'IP_global_disable_upi2db_explain' => 'Questa opzione consente di disattivare completamente il sistema UPI2DB permettendo di risparmiare in termini di memoria.',

		'IP_enable_own_icons' => 'Icone Propri Messaggi',
		'IP_enable_own_icons_explain' => 'Attivando questa opzione gli argomenti contenenti propri messaggi avranno un\'icona differenziata per permettere di riconoscere immediatamente gli argomenti in cui un utente ha gi&agrave; partecipato.',

		'IP_show_forums_online_users' => 'Mostra Utenti Online Nei Forum',
		'IP_show_forums_online_users_explain' => 'Inserisce un contatore di utenti online per ciascun forum sull\'indice',

		'IP_google_bot_detector' => 'Abilita GoogleBot Detector',

		'IP_gsearch_guests' => 'Forza gli ospiti ad usare la Ricerca Google',

		'IP_visit_counter_switch' => 'Abilita il contatore visite',

		'IP_enable_new_messages_number' => 'Visualizza il numero di nuovi messaggi dall\'ultima visita',

		'IP_disable_likes_posts' => 'Disattiva apprezzamento messaggi [LIKE] (Globale)',
		'IP_disable_likes_posts_explain' => 'Questa opzione consente di disattivare completamente la possibilit&agrave; di apprezzare i singoli messaggi',

		'IP_show_thanks_profile' => 'Mostra i apprezzamenti (Mi Piace) ricevuti nel profilo',

		'IP_show_thanks_viewtopic' => 'Mostra i apprezzamenti (Mi Piace) ricevuti nella visualizzazione dei messaggi',

		'IP_disable_topic_view' => 'Disattiva "Chi ha letto questo argomento" (Globale)',
		'IP_disable_topic_view_explain' => 'Questa opzione consente di disattivare la funzione "Chi ha letto questo argomento" (consente di risparmiare spazio nel DB).',

		'IP_disable_referers' => 'Disattiva la memorizzazione dei Referers',
		'IP_disable_referers_explain' => 'Questa opzione consente di disattivare la memorizzazione dei Referers nel DB (consente di risparmiare spazio nel DB).',

		'IP_disable_logins' => 'Disabilita Registrazione Logins',
		'IP_disable_logins_explain' => 'Attivando questa opzione verr&agrave; disabilitata la registrazione dei Logins',

		'IP_last_logins_n' => 'Numero di Logins da Registrare',

		'IP_index_top_posters' => 'Utenti Migliori :: Indice Del Forum',
		'IP_index_top_posters_explain' => 'Attivando questa opzione verranno visualizzati gli utenti migliori nell\'<b>Indice Del Forum</b>.',

		'IP_index_last_msgs' => 'Ultimi Messaggi :: Indice Del Forum',
		'IP_index_last_msgs_explain' => 'Attivando questa opzione verranno visualizzati gli ultimi messaggi nell\'<b>Indice Del Forum</b>.',

		'IP_online_last_msgs' => 'Ultimi Messaggi :: Chi E\' In Linea',
		'IP_online_last_msgs_explain' => 'Attivando questa opzione verranno visualizzati gli ultimi messaggi nella pagina <b>Chi E\' In Linea</b>.',

		'IP_last_msgs_n' => 'Numero di ultimi messaggi da visualizzare',

		'IP_last_msgs_x' => 'Forum da escludere',
		'IP_last_msgs_x_explain' => 'Inserire i forum da escludere nella visualizzazione degli ultimi messaggi (inserire gli ID dei forums separati da virgole).',

		'IP_show_chat_online' => 'Online AJAX Chat :: Indice Del Forum',
		'IP_show_chat_online_explain' => 'Attivando questa opzione verranno visualizzati (nell\'<b>Indice Del Forum</b>) gli utenti che stanno usando la AJAX Chat.',

		'IP_index_shoutbox' => 'Shoutbox :: Indice Del Forum',
		'IP_index_shoutbox_explain' => 'Attivando questa opzione verr&agrave; visualizzata la Shoutbox nell\'<b>Indice Del Forum</b>.',

		'IP_online_shoutbox' => 'Shoutbox :: Chi E\' In Linea',
		'IP_online_shoutbox_explain' => 'Attivando questa opzione verr&agrave; visualizzata la Shoutbox nella pagina <b>Chi E\' In Linea</b>.',

		'IP_img_shoutbox' => 'Disabilita il bbcode [img][/img] nello Shoutbox',
		'IP_img_shoutbox_explain' => 'Attivando questa opzione verr&agrave; disabilitato il bbcode [img][/img] nello Shoutbox.',

		'IP_index_birthday' => 'Compleanni :: Indice Del Forum',
		'IP_index_birthday_explain' => 'Attivando questa opzione verranno visualizzati i Compleanni nell\'<b>Indice Del Forum</b>.',

		'IP_show_random_quote' => 'Citazioni Casuali :: Indice Del Forum',
		'IP_show_random_quote_explain' => 'Attivando questa opzione verrano visualizzate le citazioni casuali nell\'<b>Indice Del Forum</b>.',

// TAB - Users
		'IP_user_allow_pm_register' => 'Abilita i MP (Messaggi Privati) per i nuovi iscritti',
		'IP_user_allow_pm_register_explain' => 'Attivando questa opzione i nuovi iscritti potranno utilizzare i Messaggi Privati. Se questa opzione viene disattivata, i nuovi utenti non potranno utilizzare i Messaggi Privati se un amministratore non li attiva individualmente.',

// Spam Section
		'IP_spam_measures_header' => 'Misure Antispam',

		'IP_spam_posts_number' => 'SPAM - Numero Minimo Di Messaggi Per Disattivare Le Misure Antispam',
		'IP_spam_posts_number_explain' => 'Fino a che l\'utente non ha raggiunto il numero minimo di messaggi specificato qui sotto, le misure antispam resteranno attive per tutte le funzionalit&agrave; con prefisso SPAM elencate qui sotto',
		'IP_spam_p_0' => 'Disattivato',
		'IP_spam_p_3' => '3',
		'IP_spam_p_5' => '5',
		'IP_spam_p_10' => '10',
		'IP_spam_p_20' => '20',

		'IP_spam_disable_url' => 'SPAM - Disattiva URL Nei Messaggi',
		'IP_spam_disable_url_explain' => 'Attivando questa opzione tutte le URL verranno disattivate ed i prefissi HTTP verranno rimpiazzati con H**P per tutti gli utenti che non hanno raggiunto il numero di messaggi minimo specificato qui sopra. Gli amministratori vedranno comunque il contenuto originale.',

		'IP_spam_hide_signature' => 'SPAM - Disattiva Firme E Sito Nei Messaggi',
		'IP_spam_hide_signature_explain' => 'Attivando questa opzione le firme e le informazioni riguardo il sito personale verranno disattivate dai messaggi nel forum per tutti gli utenti che non hanno raggiunto il numero di messaggi minimo specificato qui sopra. Gli amministratori vedranno comunque la firma.',

		'IP_spam_post_edit_interval' => 'SPAM - Disattiva Modifica Messaggi',
		'IP_spam_post_edit_interval_explain' => 'Attivando questa opzione gli utenti che non hanno raggiunto il numero di messaggi minimo specificato qui sopra non saranno in grado di modificare i propri messaggi superato il periodo specificato',
		'IP_time_15m' => '15 Minutes',
		'IP_time_30m' => '30 Minutes',
		'IP_time_1h' => '1 Hour',
		'IP_time_2h' => '2 Hours',
		'IP_time_6h' => '6 Hours',
		'IP_time_12h' => '12 Hours',
		'IP_time_24h' => '24 Hours',

// TAB - Social networks
		'Enable_Social_Networks_Login' => 'Abilita Login Tramite Social Networks (Globale)',
		'Enable_Social_Networks_Login_Explain' => 'Consenti agli utenti di fare il login e di registrarsi tramite il loro account sui Social Networks.',
		'Facebook_Login_Settings' => 'Impostazioni Facebook Login',
		'Facebook_Login_Settings_explain' => 'Per favore segui le istruzioni per ottenere il tuo App ID e App Secret:<br />- Visita questa pagina: <a href="https://developers.facebook.com/" target="_blank">Facebook Developers Website</a>.<br />- Fai Login con il tuo account Facebook.<br />- Crea una nuova applicazione.<br />- Disattiva "Sandbox Mode".<br />- Aggiungi il tuo dominio (App Domain), senza utilizzare il prefisso http/https neanche www (esempio: icyphoenix.com).<br />- Attiva l\'opzione "Website with Facebook Login", e inserisci l\'indirizzo del tuo sito, questa volta anche utilizzando il prefisso with http/https E www (esempio: http://www.icyphoenix.com).<br />- Salva i cambiamenti.<br />- Inserisci la tua App ID e App Secret nelle caselle sottostanti.',
		'Enable_Facebook_Login' => 'Abilita Facebook Login',
		'Enable_Facebook_Login_explain' => 'Consente agli utenti di effettuare il login e registrarsi utilizzando il loro account Facebook. Per far funzionare questa opzione ricorda di aggiungere i dati nelle caselle sottostanti.',
		'Facebook_App_ID' => 'App ID',
		'Facebook_App_Secret' => 'App Secret',

// TAB - Posting
		'IP_posts_precompiled' => 'Disattiva Messaggi Precompilati Per Gli Ospiti',
		'IP_posts_precompiled_explain' => 'Attivando questa opzione non verranno pi&ugrave; utilizzati i messaggi precompilati per gli ospiti (il caricamento sar&agrave; pi&ugrave; lento).',

		'IP_read_only_forum' => 'Blocco scrittura nei forum (Modalit&agrave; Sola Lettura)',
		'IP_read_only_forum_explain' => 'Questa opzione consente di disattivare temporaneamente la scrittura nei forum senza dover intervenire nei permessi. Potrebbe risultare utile in alcuni casi in cui si voglia impedire che gli utenti scrivano senza dover bloccare il sito o modificare i permessi in tutti i forum. Gli amministratori potranno continuare a scrivere.',

		'IP_allow_drafts' => 'Abilita Bozze',
		'IP_allow_drafts_explain' => 'Consenti agli utenti di salvare i messaggi come bozze',

		'IP_allow_mods_edit_admin_posts' => 'Consenti Modifica Messaggi Admin',
		'IP_allow_mods_edit_admin_posts_explain' => 'Consenti ai moderatori di modificare i messaggi degli amministratori',

		'IP_forum_limit_edit_time_interval' => 'Intervallo Modifica Messaggi',
		'IP_forum_limit_edit_time_interval_explain' => 'Questa impostazione consente di fissare un intervallo massimo in cui gli utenti possono modificare i propri messaggi. Impostando a zero nessun limite verr&agrave;  impostato. Questa impostazione va abilitata a livello di singolo forum dalla Gestione Forum. A differenza della impostazione antispam elencata pi&ugrave; su, questa opzione si applica a tutti gli utenti (non solo a quelli che non hanno ancora raggiunto il numero minimo di messaggi).',

		'IP_force_large_caps_mods' => 'Forza Iniziali Maiuscole',
		'IP_force_large_caps_mods_explain' => 'Forza iniziali maiuscole nei titoli degli argomenti anche ai moderatori (gli amministratori non hanno comunque vincoli)',

		'IP_show_new_reply_posting' => 'Avvisa Per Nuove Risposte',
		'IP_show_new_reply_posting_explain' => 'Attivando questa opzione verr&agrave; mostrato un avviso che indica che ci sono nuove risposte quando si risponde ad un argomento',

		'IP_no_bump' => 'Blocca "Bump" per 24 ore',
		'IP_no_bump_explain' => 'Abilitando questa opzione gli utenti che hanno inviato l\'ultimo messaggio in un argomento non saranno in grado di inviare nuovi messaggi a meno che non siano passate 24 ore dal loro ultimo messaggio o finch&eacute; qualcun altro non risponda (non si applica agli amministratori)',
		'MODS_ALLOWED' => 'Consenti Moderatori',

		'IP_robots_index_topics_no_replies' => 'Attiva Indicizzazione Argomenti Senza Risposte',
		'IP_robots_index_topics_no_replies_explain' => 'Attivando questa opzione gli argomenti senza risposte verranno indicizzati, altrimenti sar&agrave; inserito un meta tag per evitare che vengano indicizzati',

		'IP_use_jquery_tags' => 'TAGS :: Abilita jQuery Tags',
		'IP_use_jquery_tags_explain' => 'Attivando questa opzione sar&agrave; possibile utilizzare jQuery nell\'inserimento dei tags nei argomenti (rendendo pi&ugrave; semplice ed efficace l\'inserimento)',

		'IP_display_tags_box' => 'TAGS :: Abilita Tags Per Gli Argomenti',
		'IP_display_tags_box_explain' => 'Attivando questa opzione sar&agrave; possibile inserire e visualizzare Tags per gli argomenti del forum. I Tags possono essere molto utili per l\'indicizzazione, ma possono essere anche molto dannosi se non utilizzati correttamente: per questo l\'immissione dei Tags &egrave; riservata agli amministratori o ai moderatori (se viene attivatata l\'opzione sottostante).',

		'IP_allow_moderators_edit_tags' => 'TAGS :: Consenti Inserimento / Modifica Tags Ai Moderatori',
		'IP_allow_moderators_edit_tags_explain' => 'Attivando questa opzione anche i moderatori saranno in grado di inserire / modificare i Tags per gli argomenti',

		'IP_show_topic_description' => 'Mostra Descrizione Argomento',
		'IP_show_topic_description_explain' => 'Attivando questa opzione sar&agrave; possibile inserire e visualizzare la descrizione degli argomenti',

		'IP_edit_notes' => 'Abilita Note di Modifica',
		'IP_edit_notes_explain' => 'Attivando questa opzione verranno abiltate le Note di Modifica',

		'IP_edit_notes_n' => 'Numero massimo Note di Modifica',

		'IP_always_show_edit_by' => 'Mostra Sempre Modifiche Ai Messaggi',
		'IP_always_show_edit_by_explain' => 'Attivando questa opzione verr&agrave; sempre mostrata la dicitura "Ultima modifica di..." in fondo ai messaggi quando un utente applicher&agrave; qualche modifica (le modifiche degli amministatori non vengono mai mostrate, a meno che non inseriscano una nota)',

		'IP_enable_featured_image' => 'Abilita Immagine Argomento',
		'IP_enable_featured_image_explain' => 'Attivando questa opzione sar&agrave; possibile associare un\'immagine per ogni argomento',

		'IP_show_social_bookmarks' => 'Social Bookmarks',
		'IP_show_social_bookmarks_explain' => 'Mostra la sezione "Condivisione Argomento" quando si visualizza un argomento',

		'IP_link_this_topic' => 'Inserisci un link per questo argomento',
		'IP_link_this_topic_explain' => 'Mostra la sezione "Inserisci un link per questo argomento" quando si visualizza un argomento',

		'IP_smilies_topic_title' => 'Smileys nel Titolo e nella Descrizione delle Discussioni',
		'IP_smilies_topic_title_explain' => 'Attivando questa opzione verranno abilitati gli Smileys nel Titolo e nella Descrizione delle Discussioni',

		'IP_enable_colorpicker' => 'Abilita ColorPicker nell\'Editor Messaggi',

		'IP_quote_iterations' => 'Numero massimo di citazioni concatenate',

		'IP_ftr_disable' => 'Disabilita Force Topic Read',
		'IP_ftr_disable_explain' => 'Attivando questa opzione Force Topic Read sar&agrave; disabilitato',

		'IP_disable_html_guests' => 'Disabilita i link HTML per gli ospiti',

		'IP_birthday_viewtopic' => 'Visualizza Et&agrave; Autori nelle Discussioni',

		'IP_switch_poster_info_topic' => 'Visualizza informazioni aggiuntive utenti nelle Discussioni (Lingua, Stile, ecc.)',

		'IP_enable_quick_quote' => 'Abilita Quick Quote e Off Topic',
		'IP_enable_quick_quote_explain' => 'Quick Quote consente agli utenti di citare qualunque messaggio con un semplice click. Questa funzione utilizza JavaScript, per cui abilitandola, la dimensione delle pagine potrebbe crescere a dismisura.',

		'IP_allow_html_only_for_admins' => 'Abilita codici HTML per gli Amministratori',
		'IP_allow_html_only_for_admins_explain' => 'Abilitando questa opzione gli amministratori saranno in grado di utilizzare codici HTML nei messaggi del forum. <b>Attenzione</b>: questa funzione (ove non utilizzata correttamente) pu&ograve; causare problemi di sicurezza o errata visualizzazione di pagine.',

		'IP_enable_custom_bbcodes' => 'Abilita i BBCode personalizzati',
		'IP_enable_custom_bbcodes_explain' => 'Abilitando questa opzione verranno processati anche i BBCode personalizzati creati in ACP.',

		'IP_allow_all_bbcode' => 'Abilita tutti i BBCode',
		'IP_allow_all_bbcode_explain' => 'Abilitando questa opzione verranno processati tutti i BBCode nelle firme ed in altre pagine in cui normalmente alcuni BBCode sono disattivati. I BBCode che normalmente rientrano in questa categoria sono quelli relativi alle immagini e alle formattazioni che possono gravare maggiormente sul server. Ricorda che abilitando questa opzione alcune firme potrebbero risultare eccessivamente grandi.',

		'IP_switch_bbcb_active_content' => 'Consenti BBCodes con contenuto attivo',
		'IP_switch_bbcb_active_content_explain' => 'Attiva BBCodes Flash, Video, Audio Streams, RealMedia e Quicktime.',

// TAB - Images In Posts
		'IP_auth_view_pic_upload' => 'Permessi Caricamento Immagini (Post Icy Images)',

		'IP_enable_postimage_org' => 'Abilita il pulsante PostImage',

		'IP_gd_version' => 'Versione GD:',
		'GD_0' => 'No GD',
		'GD_1' => 'GD1',
		'GD_2' => 'GD2',

		'IP_show_img_no_gd' => 'Mostra le miniature delle immagini GIF senza ricorrere alle librerie GD (in questo modo le immagini vengono caricate integralmente e poi mostrate in versione ridotta).',

		'IP_thumbnail_posts' => 'Miniature nei messaggi',
		'IP_thumbnail_posts_explain' => 'Abilitando questa opzione nei messaggi verr&agrave; mostrata una miniature quando le immagini vengono inserite tramite il BBCode IMG',

		'IP_show_pic_size_on_thumb' => 'Mostra le dimensioni dell\'immagine in basso sulla miniatura',

		'IP_thumbnail_highslide' => 'Attiva HighSlide se le miniature nei post sono abilitate',
		'IP_thumbnail_highslide_explain' => 'Apri l\'immagine in una finestra Java invece che in una nuova finestra.<br />E\' necessario svuotare i messaggi precompilati dopo aver cambiato questa impostazione.',

		'IP_thumbnail_cache' => 'Cache miniature',

		'IP_thumbnail_quality' => 'Qualit&agrave; delle miniature (1-100)',

		'IP_thumbnail_size' => 'Dimensione miniature (in pixels)',

// TAB - Forum
		'Lang_extend_categories_hierarchy' => 'SubCategorie',

		'Category_attachment' => 'Contenuto in',
		'Category_desc' => 'Descrizione',
		'Category_config_error_fixed' => 'Un\'errore nell\'impostazioni delle categorie &egrave; stato corretto',
		'Attach_forum_wrong' => 'Non potete inserire un forum all\'interno di un forum',
		'Attach_root_wrong' => 'Non potete inserire un forum nell\'indice',
		'Forum_name_missing' => 'Non potete creare un forum senza dargli un nome',
		'Category_name_missing' => 'Non potete creare una categoria senza dargli un nome',
		'Only_forum_for_topics' => 'Gli argomenti possono essere solo all\'interno di un forum',
		'Delete_forum_with_attachment_denied' => 'Non &egrave; possibile rimuovere un forum con sub categorie',

		'Category_delete' => 'Elimina categoria',
		'Category_delete_explain' => 'In questa sezione potete rimuovere una categoria e decidere dove collocare tutti i forum e categorie in essa contenute.',

// forum links type
		'Forum_link_url' => 'Link URL',
		'Forum_link_url_explain' => 'Potete impostare un URI verso un programma phpBB, o un URL completo verso un server esterno',
		'Forum_link_internal' => 'Icy Phoenix File',
		'Forum_link_internal_explain' => 'Selezionate si se state richiamando un file interno ad Icy Phoenix',
		'Forum_link_hit_count' => 'Visite',
		'Forum_link_hit_count_explain' => 'Selezionate si se volete che il sistema conteggi il numero di hit a questo link',
		'Forum_link_with_attachment_deny' => 'Non potete impostare un forum come link se sono presenti al suo interno dei sub forum',
		'Forum_link_with_topics_deny' => 'Non potete impostare un forum come link se sono presenti degli argomenti al suo interno',
		'Forum_attached_to_link_denied' => 'Non potetete inserire un forum o una categoria in un forum di tipo link',

		'Manage_extend' => 'Gestione +',
		'Manage' => 'Gestione',
		'No_subforums' => 'Nessun sub-forum',
		'Forum_type' => 'Selezionate la tipologia di forum',
		'Presets' => 'Presets',
		'Refresh' => 'Aggiorna',
		'Position_after' => 'Inserire il forum dopo',
		'Link_missing' => 'Link inesistente',
		'Category_with_topics_deny' => 'Ci sono degli argomenti in questo forum. Non potete modificarlo in categoria.',
		'Recursive_attachment' => 'Non potete aggiungere un forum al livello inferiore dello stesso ( (recursive attachment)',
		'Forum_with_attachment_denied' => 'Non potete modificare una categoria con forum inclusi in un forum semplice',
		'icon' => 'Icona',
		'icon_explain' => 'Quest\'icona verr&agrave; visualizzata vicina al nome del forum. Potete impostare un link diretto o una chiave $image[] (vedi <i>tuo_template</i>/<i>tuo_template</i>.cfg).',

// TAB - Calendar
		'Lang_extend_topic_calendar' => 'Calendario',

// TAB - SEO
		'IP_url_rw' => 'URL Rewrite',
		'IP_url_rw_explain' => 'Attivando questa opzione verr&agrave; attivata per tutti gli utenti la funzione URL Rewrite (indirizzi in formato HTML anzich&eacute; in formato PHP per una migliore indicizzazione delle pagine).',

		'IP_url_rw_guests' => 'URL Rewrite Ospiti',
		'IP_url_rw_guests_explain' => 'Attivando questa opzione verr&agrave; attivata la funzione URL Rewrite solo per gli ospiti ed i bots.',

		'IP_bots_reg_auth' => 'Permessi Accesso Bots REG',
		'IP_bots_reg_auth_explain' => 'Attivando questa opzione ai Bots verranno attribuiti gli stessi permessi degli utenti registrati per l\'accesso ai forum e alle pagine CMS.',

		'IP_lofi_bots' => 'LoFi Per Bots',
		'IP_lofi_bots_explain' => 'Attivando questa opzione LoFi verr&agrave; abilitato per i bots.',

		'IP_seo_cyrillic' => 'Conversione Caratteri Cirillici',
		'IP_seo_cyrillic_explain' => 'Attivando questa opzione alcuni caratteri cirillici verranno convertiti in caratteri dell\'alfabeto latino (non nei messaggi, ma nelle keywords, tags e dove viene usata la funzione di pulizia delle stringhe).',

		'IP_adsense_code' => 'Codice Publisher Google AdSense',
		'IP_adsense_code_explain' => 'Inserisci qui il tuo Codice Publisher di Google AdSense e verr&agrave; automaticamente inserito nella pagina ricerca di Google. Se non vuoi utilizzare il tuo codice, lascia questo campo vuoto.',

		'IP_google_analytics' => 'Codice Google Analytics',
		'IP_google_analytics_explain' => 'Inserisci qui il codice per inserire Google Analytics nel tuo sito e verr&agrave; automaticamente inserito in fondo ad ogni pagina.',

		'IP_google_custom_search' => 'Codice Google Custom Search',
		'IP_google_custom_search_explain' => 'Inserisci qui il codice per Google Custom Search per poter utilizzare gsearch.php (consente di risparmiare carico SQL per le ricerche degli ospiti).',

//Sitemap
		'Sitemap_settings' => 'Impostazioni Google Sitemap',

		'IP_sitemap_topic_limit' => 'Google Sitemap :: Limite Discussioni',
		'IP_sitemap_topic_limit_explain' => 'Numero massimo di discussioni da rilevare con una singola query del datbase',

		'IP_sitemap_announce_priority' => 'Google Sitemap :: Priorit&agrave; Annunci',
		'IP_sitemap_announce_priority_explain' => 'Priorit&agrave; Annunci (deve essere un numero compreso tra 0.0 e 1.0 incluso)',

		'IP_sitemap_sticky_priority' => 'Google Sitemap :: Priorit&agrave; Discussioni Importanti ',
		'IP_sitemap_sticky_priority_explain' => 'Priorit&agrave; Discussioni Importanti (deve essere un numero compreso tra 0.0 e 1.0 incluso)',

		'IP_sitemap_default_priority' => 'Google Sitemap :: Priorit&agrave; Predefinita',
		'IP_sitemap_default_priority_explain' => 'Priorit&agrave; Discussioni Normali (deve essere un numero compreso tra 0.0 e 1.0 incluso)',

		'IP_sitemap_sort' => 'Google Sitemap :: Ordine',
		'IP_sitemap_new_first' => 'Prima le Nuove Discussioni',
		'IP_sitemap_old_first' => 'Prima le Vecchie Discussioni',

//Tags
		'IP_word_graph_max_words' => 'TAGS :: Numero Parole',
		'IP_word_graph_max_words_explain' => 'Seleziona il numero massimo di parole da visualizzare. Un numero troppo alto potrebbe sovraccaricare il server. L\'impostazione raccomandata &egrave; 250.',

		'IP_word_graph_word_counts' => 'TAGS :: Abilita Conteggio Parole',
		'IP_word_graph_word_counts_explain' => 'Visualizza il numero di ricorrenze a fianco di ogni parola. Es: <b>Icy Phoenix (365)</b>?',

		'IP_forum_wordgraph' => 'TAGS :: Forum Tags (Globale)',
		'IP_forum_wordgraph_explain' => 'Questa funzione abilita la visualizzazione dei tags pi&ugrave; usati per ogni forum. La visualizzazione deve comunque essere impostata per ciascun forum nella gestione dei forum.',

		'IP_forum_tags_type' => 'TAGS :: Tipologia Forum Tags',
		'IP_forum_tags_type_explain' => 'Scegli se visualizzare il Wordgraph (parole prese automaticamente dalle tabelle di ricerca) o i Tags (tags specificati nei topics)',
		'IP_forum_tags_type_tags' => 'Tags',
		'IP_forum_tags_type_wordgraph' => 'Wordgraph',

		'Similar_topics' => 'Argomenti Simili',
		'Similar_topics_explain' => 'In questa pagina puoi configurare la ricerca di argomenti simili.',

		'IP_similar_topics' => 'Argomenti Simili :: Attiva Argomenti Simili (Globale)',
		'IP_similar_topics_explain' => 'Per poter visualizzare gli argomenti simili &egrave; necessario attivare questa opzione. La visualizzazione deve comunque essere impostata per ciascun forum nella gestione dei forum.',

		'IP_similar_topics_desc' => 'Argomenti Simili :: Prendi in considerazione anche la descrizione degli argomenti',

		'IP_similar_stopwords' => 'Argomenti Simili :: Escludi stop-words',

		'IP_similar_max_topics' => 'Argomenti Simili :: Numero massimo di argomenti da visualizzare',

		'IP_similar_sort_type' => 'Argomenti Simili :: Ordina per',
		'IP_similar_sort_type_explain' => 'Seleziona il metodo di ordinamento per gli argomenti simili',
		'IP_similar_sort_type_time' => 'Orario',
		'IP_similar_sort_type_relev' => 'Rilevanza',

		'IP_similar_ignore_forums_ids' => 'Argomenti Simili :: Forums Ignorati',
		'IP_similar_ignore_forums_ids_explain' => 'Inserisci l\'ID dei forum che vuoi vengano ignorati dalla ricerca (ad esempio forum di test o off topics). Inserire un ID per ciascuna riga.',

// TAB - Logging And Security
		'IP_ip_admins_only' => 'Mostra indirizzi IP solo agli Amministratori',
		'IP_ip_admins_only_explain' => 'Attivando questa opzione solo gli amministratori saranno in grado di vedere gli indirizzi IP (se l\'opzione viene disattivata, anche i moderatori riusciranno a vederli).',

		'IP_db_log_actions' => 'Attiva LOG su DB',
		'IP_db_log_actions_explain' => 'Questa funzionalit&agrave; consente di memorizzare su DB tutte quelle azioni che in qualche modo interessano le tabelle fondamentali del DB (posts, forum, ecc.). Se questa opzione &egrave; stata impostata anche nel constants.php non pu&ograve; essere disattivata da ACP. Se si attivano anche i rapporti, tutti gli errori riscontrati verranno memorizzati in un file che si potr&agrave; controllare in seguito.',

		'IP_mg_log_actions' => 'Attiva LOG su file di testo',
		'IP_mg_log_actions_explain' => 'Questa funzionalit&agrave; consente di memorizzare in un file di testo tutte quelle azioni che in qualche modo interessano le tabelle fondamentali del DB (posts, forum, ecc.). Il file di testo viene memorizzato nella cartella LOGS, ma non &egrave; di lettura molto semplice, anche se potrebbe essere utile in alcune circostanze. Su siti molto grandi questa opzione potrebbe rallentare l\'esecuzione di alcune operazioni, per cui si consiglia di attivare questa opzione solo quando se ne ha realmente bisogno e si &egrave; in grado di consultare il file.',

		'IP_write_errors_log' => 'Attiva LOG Errori su file di testo giornaliero',
		'IP_write_errors_log_explain' => 'Attivando questa opzione tutti gli errori rilevati sul sito (es.: pagina inesistente, richiesta non corretta, ecc.) verranno memorizzati in un file di log giornaliero. Ricorda che per usare questa funzione &egrave; necessario attivare in .htaccess il reindirizzamento degli errori su errors.php (basta decommentare le linee apposite aggiustando l\'indirizzo del proprio sito).',

		'IP_write_digests_log' => 'Attiva LOG Digest su file di testo giornaliero',
		'IP_write_digests_log_explain' => 'Attivando questa opzione tutti i Digest inviati verranno memorizzati in un file di log giornaliero.',

		'IP_logs_path' => 'Percorso LOGS (ricorda di attribuire i permessi CHMOD a 0777 a questa cartella)',
		'IP_logs_path_explain' => 'Inserisci il percorso per la memorizzazione dei logs degli errori e di altri eventuali logs. Il percorso deve essere relativo al percorso dove &egrave; installato il sito e senza slash finale. Esempio: <b>logs</b>.',

// TAB - Cron
		'IP_cron_global_switch' => 'PHP Cron [Global Switch]',
		'IP_cron_global_switch_explain' => 'Attivando questa opzione verr&agrave; abilitato un CRON basato su PHP: il CRON consente l\'esecuzione automatica (ad intervalli regolari) di particolari operazioni sul sito. L\'intervallo ottimale per ciascuna operazione dipende dal traffico del sito e dalle tue preferenze: se non comprendi bene l\'impatto di tali funzioni &egrave; consigliabile lasciare questa funzione disattivata, perch&eacute; probabilmente non ne hai bisogno.',

		'IP_cron_digests_interval' => 'Digests PHP Cron',
		'IP_cron_digests_interval_explain' => 'Questa funzione consente di abilitare un\'emulazione del CRON per l\'invio dei digests. E\' consigliabile attivarla solo se non si ha accesso al CRON sul proprio server, perch&eacute; questa funzione potrebbe non andare a buon fine in alcuni casi.<br /><br /><b>Ultima esecuzione: ' . (($config['cron_digests_last_run'] == 0) ? 'NEVER' : create_date('d M Y  - H.i.s', ($config['cron_digests_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_birthdays_interval' => 'Digests PHP Cron',
		'IP_cron_birthdays_interval_explain' => 'Questa funzione consente di abilitare un\'emulazione del CRON per l\'invio degli auguri di compleanno ogni ora. Questa funzione potrebbe non andare a buon fine in alcuni casi perch&eacute; non &egrave; un vero e proprio CRON.<br /><br /><b>Ultima esecuzione: ' . (($config['cron_birthdays_last_run'] == 0) ? 'NEVER' : create_date('d M Y  - H.i.s', ($config['cron_birthdays_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_files_interval' => 'Intervallo Esecuzione Automatica Di Files',
		'IP_cron_files_interval_explain' => 'Attivando questa opzione potrai eseguire ad intervalli regolari dei files. Per selezionare i files da eseguire devi modificare manualmente il file <b>constants.php</b> &raquo; <b>define(\'CRON_FILES\'; \'\');</b>. Puoi aggiungere anche pi&ugrave; files separati da virgola.<br /><br /><b>Ultima esecuzione: ' . (($config['cron_files_last_run'] == 0) ? 'NEVER' : create_date('d M Y  - H.i.s', ($config['cron_files_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_database_interval' => 'Intervallo Ottimizzazione DB',
		'IP_cron_database_interval_explain' => 'Ottimizzazione del DB ad intervalli regolari.<br /><br /><b>Ultima esecuzione: ' . (($config['cron_database_last_run'] == 0) ? 'NEVER' : create_date('d M Y  - H.i.s', ($config['cron_database_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_cache_interval' => 'Intervallo Pulizia Cache Templates',
		'IP_cron_cache_interval_explain' => 'Pulizia della cache dei templates.<br /><br /><b>Ultima esecuzione: ' . (($config['cron_cache_last_run'] == 0) ? 'NEVER' : create_date('d M Y  - H.i.s', ($config['cron_cache_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_sql_interval' => 'Intervallo Pulizia Cache SQL',
		'IP_cron_sql_interval_explain' => 'Pulizia della cache SQL.<br /><br /><b>Ultima esecuzione: ' . (($config['cron_sql_last_run'] == 0) ? 'NEVER' : create_date('d M Y  - H.i.s', ($config['cron_sql_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_users_interval' => 'Intervallo Pulizia Cache Utenti',
		'IP_cron_users_interval_explain' => 'Pulizia della cache utenti.<br /><br /><b>Ultima esecuzione: ' . (($config['cron_users_last_run'] == 0) ? 'NEVER' : create_date('d M Y  - H.i.s', ($config['cron_users_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_topics_interval' => 'Intervallo Pulizia Cache Argomenti',
		'IP_cron_topics_interval_explain' => 'Pulizia della cache argomenti.<br /><br /><b>Ultima esecuzione: ' . (($config['cron_topics_last_run'] == 0) ? 'NEVER' : create_date('d M Y  - H.i.s', ($config['cron_topics_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_sessions_interval' => 'Intervallo Pulizia Sessioni',
		'IP_cron_sessions_interval_explain' => 'Pulizia delle tabelle sessioni.<br /><br /><b>Ultima esecuzione: ' . (($config['cron_sessions_last_run'] == 0) ? 'NEVER' : create_date('d M Y  - H.i.s', ($config['cron_sessions_last_run']), $config['board_timezone'])) . '</b>',

		'Cron_Disabled' => 'Disabled',
		'Cron_Server' => 'Server Cron',
		'15M' => '15 Minuti',
		'30M' => '30 Minuti',
		'1H' => '1 Ora',
		'2H' => '2 Ore',
		'3H' => '3 Ore',
		'6H' => '6 Ore',
		'12H' => '12 Ore',
		'1D' => '1 Giorno',
		'3D' => '3 Giorni',
		'7D' => '1 Settimana',
		'14D' => '2 Settimane',
		'30D' => '1 Mese',


// lang_extend_settings.php
		'Lang_extend_settings' => 'Impostazioni Icy Phoenix',
		'Configuration_extend' => 'Icy Phoenix',
		'Override_user_choices' => 'Sovrascrivi le scelte dell\'utente',
		)
	);
}

$lang = array_merge($lang, array(
	'CFG_NONE' => 'NESSUNO',
	'CFG_ALL' => 'TUTTI',
	'CFG_REG' => 'REG',
	'CFG_SELF' => 'PROPRI',
	'CFG_PRIVATE' => 'PRIVATO',
	'CFG_MOD' => 'MOD',
	'CFG_ADMIN' => 'ADMIN',

// lang_extend_categories_hierarchy.php - BEGIN
	'Hierarchy_setting' => 'Forum',
	'Forum_link' => 'Link esterno',
	'Forum_link_visited' => 'Link visitato %d volte',

	'Use_sub_forum' => 'Compressione Indice',
	'Index_packing_explain' => 'Seleziona il livello di compressione dell\'indice',
	'List' => 'Elenco',
	'Medium' => 'Medio',
	'Full' => 'Completo',
	'Split_categories' => 'Dividi le categorie nell\'indice',
	'Use_last_topic_title' => 'Mostra il titolo dell\'ultimo argomento nell\'indice',
	'Last_topic_title_length' => 'Lunghezza dell\'ultimo argomento nell\'indice',
	'Sub_level_links' => 'Link ai sottolivelli nell\'indice',
	'Sub_level_links_explain' => 'Aggiungi il link ai sottolivelli nelle descrizione di forum o categoria',
	'With_pics' => 'Con icone',
	'Display_viewonline' => 'Mostra il box "info online" nell\'indice',
	'Never' => 'Mai',
	'Root_index_only' => 'Solo nell\'indice principale',
	'Always' => 'Sempre',
	'Subforums' => 'Subforums',
// lang_extend_categories_hierarchy.php - END

// lang_extend_topic_calendar.php - BEGIN
	'Calendar_settings' => 'Calendario',
	'Calendar' => 'Calendario',
	'Calendar_scheduler' => 'Agenda',
	'Calendar_event' => 'Evento',
	'Calendar_from_to' => 'Dal %s al %s (inclusi)',
	'Calendar_time' => '%s',
	'Calendar_duration' => 'Durata',

	'Calendar_week_start' => 'Primo giorno della settimana',
	'Calendar_header_cells' => 'Numero di celle da visualizzare nell\'header del forum (0 per nessuna visualizzazione)',
	'Calendar_title_length' => 'Lunghezza del titolo visualizzato nelle celle del calendario',
	'Calendar_text_length' => 'Lunghezza del testo visualizzato nella finestra riassuntiva',
	'Calendar_block_display' => 'Visualizza il blocco del calendario nell\'intestazione del forum',
	'Calendar_display_open' => 'Visualizza il blocco del calendario aperto nell\'intestazione del forum (se il blocco &egrave; attivato)',
	'Calendar_nb_row' => 'Numero di colonne per giorno nell\'intestazione del forum',
	'Calendar_birthday' => 'Mostra i compleanni nel calendario',
	'Calendar_forum' => 'Mostra il nome del forum sotto il titolo dell\'argomento nell\'agenda',

	'Sorry_auth_cal' => 'Spiacenti, ma solo %s possono inserire eventi in questo forum.',
	'Date_error' => 'giorno %d, mese %d, anno %d non costituiscono una data valida',

	'Event_time' => 'Orario evento',
	'Minutes' => 'Minuti',
	'Today' => 'Oggi',
	'Yesterday' => 'Ieri',
	'All_events' => 'Tutti gli eventi',

/*
	'Rules_calendar_can' => '<b>Puoi</b> inserire eventi calendario in questo forum',
	'Rules_calendar_cannot' => '<b>Non puoi</b> inserire eventi calendario in questo forum',
*/
	'Rules_calendar_can' => '<b>Puoi</b> inserire eventi calendario',
	'Rules_calendar_cannot' => '<b>Non puoi</b> inserire eventi calendario',
	'birthday_header' => 'Buon Compleanno!',
	'birthday' => '<b>%s</b> festeggia il compleanno oggi!',
// lang_extend_topic_calendar.php - END

	'DB_LOG_ALL' => 'Si con rapporti errori',
	)
);

?>