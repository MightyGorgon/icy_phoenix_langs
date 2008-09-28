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
	die('Hacking attempt');
}

$lang['10_Main_Settings_Icy_Phoenix'] = 'Icy Phoenix';
$lang['20_SQL_Charge'] = 'Ottimizzazione SQL';
$lang['30_Posting'] = 'Messaggi';
$lang['40_IMG_Posting'] = 'Invio Immagini';
$lang['50_Hierarchy_setting'] = 'Forum';
$lang['60_Calendar_settings'] = 'Calendario';
$lang['70_SEO'] = 'SEO';
$lang['80_Security'] = 'Logs E Sicurezza';

// admin part
if ($lang_extend_admin)
{
	$lang['Lang_extend_icy_phoenix'] = 'Icy Phoenix';

	// TAB - Icy Phoenix
	$lang['IP_enable_xs_version_check'] = 'Verifica Versione Icy Phoenix';
	$lang['IP_enable_xs_version_check_explain'] = 'Abilitando questa opzione ogni volta che si entra in ACP viene verificato che la versione in uso di Icy Phoenix sia la pi&ugrave; aggiornata. Disabilitando questa opzione l\'ACP potrebbe caricarsi pi&ugrave; velocemente. In ogni caso la verifica viene fatta solo una volta al giorno, per cui il rallentamento si dovrebbe riscontrare solo la prima volta che si entra in ACP per ogni giorno.';

	$lang['IP_disable_email_error'] = 'Disabilita errori in invio email';

	$lang['IP_html_email'] = 'HTML Email';
	$lang['IP_html_email_explain'] = 'Attivando questa opzione verranno abilitate le emails in HTML, altrimenti verranno spedite le email come semplice testo.';

	$lang['IP_enable_digests'] = 'Attiva Digests';

	$lang['IP_digests_php_cron'] = 'Attiva Digests PHP Cron';
	$lang['IP_digests_php_cron_explain'] = 'Questa funzione consente di abilitare un\'emulazione del CRON per l\'invio dei digests. E\' consigliabile attivarla solo se non si ha accesso al CRON sul proprio server, perch&eacute; questa funzione potrebbe non andare a buon fine in alcuni casi.';

	$lang['IP_emails_only_to_admins'] = 'Emails Solo Agli Amministratori';
	$lang['IP_emails_only_to_admins_explain'] = 'Consenti di utilizzare il sistema di emails solo per inviare emails agli amministratori.';

	$lang['IP_ajax_features'] = 'Abilita AJAX';
	$lang['IP_ajax_features_explain'] = 'Alcune funzionalit&agrave; AJAX integrate nel sito.';

	$lang['IP_ajax_checks_register'] = 'Verifiche AJAX';
	$lang['IP_ajax_checks_register_explain'] = 'Attivando questa opzione alcune verifiche verranno effettuate in tempo reale durante la compilazione del modulo di registrazione (attenzione: questa funzione pu&ograve; rallentare la pagina di registrazione).';

	$lang['IP_inactive_users_memberlists'] = 'Utenti Non Attivi Nella Lista Utenti E Compleanni';
	$lang['IP_inactive_users_memberlists_explain'] = 'Attivando questa opzione gli utenti non attivi verranno mostrati nella lista utenti e compleanni.';

	$lang['IP_page_gen'] = 'Visualizza le statistiche di generazione pagina nel Footer';

	$lang['IP_switch_header_dropdown'] = 'Attiva menu a discesa in header';
	$lang['IP_switch_header_dropdown_explain'] = 'Questa opzione consente di attivare il menu a discesa nell\'intestazione di ogni pagina per la ricerca dei messaggi.';

	$lang['IP_show_alpha_bar'] = 'Mostra Barra Ordinamento Alfabetico Argomenti';
	$lang['IP_show_alpha_bar_explain'] = 'Attivando questa opzione verr&agrave; mostrata in cima alla visualizzazione dei forum una barra per l\'ordinamento alfabetico degli argomenti.';

	$lang['IP_show_rss_forum_icon'] = 'Icone Indice Forum';
	$lang['IP_show_rss_forum_icon_explain'] = 'Questa opzione mostra delle icone accanto il titolo di ogni forum: RSS, Nuovo Argomento...';

	$lang['IP_allow_mods_view_self'] = 'Consenti accesso ad argomenti con permessi SELF AUTH a TUTTI i Moderatori';
	$lang['IP_allow_mods_view_self_explain'] = 'Se un forum ha permessi di accesso solo per i PROPRI messaggi (SELF AUTH) soltanto gli amministratori ed i moderatori di quel forum possono visualizzare tutti i messaggi, altrimenti ciascun utente potr&agrave; visualizzare soltanto i propri messaggi. Purtroppo ci sono vie secondarie che in qualche modo consentono l\'accesso a questi messaggi "riservati", e per questo &egrave; stata programmata una funzione di controllo che consente soltanto agli amministratori di accedere a tutti i messaggi in sezioni come: Argomenti Recenti, Ricerca, Blocchi relativi a messaggi... Se vuoi consentirne l\'accesso secondario anche a TUTTI i moderatori (dunque non soltanto agli amministratori) allora abilita questa opzione. Ricorda che l\'accesso secondario non pu&ograve; essere riservato ai soli moderatori delle sezioni con SELF AUTH, perch&eacute; questo richiederebbe molto carico SQL in pi&ugrave;. Se non usi forum con permessi SELF AUTH allora non hai bisogno di questa funzione.';

	$lang['IP_xmas_fx'] = 'Effetto Neve';
	$lang['IP_xmas_fx_explain'] = 'Questa opzione abilita un JavaScript che simula l\'effetto neve.';

	$lang['IP_xmas_gfx'] = 'Decorazioni Natalizie';
	$lang['IP_xmas_gfx_explain'] = 'Attivando questa opzione verranno applicate le decorazioni natalizie sul sito.';

	$lang['IP_select_theme'] = 'Cambio Stile';
	$lang['IP_select_theme_explain'] = 'Abilitando questa opzione viene aggiunta una casella a discesa per cambiare velocemente stile.';

	$lang['IP_select_lang'] = 'Cambio Lingua';
	$lang['IP_select_lang_explain'] = 'Abilitando questa opzione vengono aggiunti sull\'indice dei link per poter cambiare velocemente lingua.';

	$lang['IP_cms_dock'] = 'Mostra barra icone stile Apple Dock nel CMS';

	$lang['IP_cms_style'] = 'CMS Stile Moderno';
	$lang['IP_cms_style_explain'] = 'Lo stile moderno del CMS prevede dei menu in trasparenza in alto, mentre quello classico dei menu laterali';

	$lang['IP_split_ga_ann_sticky'] = 'Divisione Discussioni per Tipo';
	$lang['IP_split_ga_ann_sticky_explain'] = 'Da qui puoi scegliere come Dividere le Discussioni per tipo nella pagina viewforum';
	$lang['IP_split_topic_0'] = 'Tutti i Tipi di Discussioni insieme (nessuna Divisione)';
	$lang['IP_split_topic_1'] = 'Annunci Globali, Annunci e Discussioni Importanti insieme, Discussioni Normali divise';
	$lang['IP_split_topic_2'] = 'Annunci Globali divisi, Annunci e Discussioni Importanti insieme, Discussioni Normali divise';
	$lang['IP_split_topic_3'] = 'Tutte le Discussioni divise per tipo';

	// TAB - SQL Charge
	$lang['IP_fast_n_furious'] = 'Fast And Furious';
	$lang['IP_fast_n_furious_explain'] = 'Attivando questa opzione verranno disattivate alcune funzionalit&agrave; che richiedono un\'uso intensivo di SQL, accelerando cos&igrave; il caricamento delle pagine!';

	$lang['IP_db_cron'] = 'Ottimizzazione Database';
	$lang['IP_db_cron_explain'] = 'Attivando questa opzione verr&agrave; attivata l\'ottimizzazione automatica del Database';

	$lang['IP_site_history'] = 'Storico Sito';
	$lang['IP_site_history_explain'] = 'Attivando questa opzione verr&agrave; attivato lo Storico Sito';

	$lang['IP_site_history'] = 'Storico Sito';
	$lang['IP_site_history_explain'] = 'Attivando questa opzione verr&agrave; attivato lo Storico Sito';

	$lang['IP_global_disable_upi2db'] = 'Disabilita completamente UPI2DB';
	$lang['IP_global_disable_upi2db_explain'] = 'Questa opzione consente di disattivare completamente il sistema UPI2DB permettendo di risparmiare in termini di memoria.';

	$lang['IP_enable_own_icons'] = 'Icone Propri Messaggi';
	$lang['IP_enable_own_icons_explain'] = 'Attivando questa opzione gli argomenti contenenti propri messaggi avranno un\'icona differenziata per permettere di riconoscere immediatamente gli argomenti in cui un utente ha gi&agrave; partecipato.';

	$lang['IP_show_forums_online_users'] = 'Mostra Utenti Online Nei Forum';
	$lang['IP_show_forums_online_users_explain'] = 'Inserisce un contatore di utenti online per ciascun forum sull\'indice';

	$lang['IP_google_bot_detector'] = 'Abilita GoogleBot Detector';

	$lang['IP_visit_counter_switch'] = 'Abilita il contatore visite';

	$lang['IP_enable_new_messages_number'] = 'Visualizza il numero di nuovi messaggi dall\'ultima visita';

	$lang['IP_disable_thanks_topics'] = 'Disattiva i ringraziamenti';

	$lang['IP_show_thanks_profile'] = 'Mostra i ringraziamenti ricevuti nel profilo';

	$lang['IP_show_thanks_viewtopic'] = 'Mostra i ringraziamenti ricevuti nella visualizzazione dei messaggi';

	$lang['IP_disable_topic_view'] = 'Disattiva "Chi ha letto questo argomento"';
	$lang['IP_disable_topic_view_explain'] = 'Questa opzione consente di disattivare la funzione "Chi ha letto questo argomento" (consente di risparmiare spazio nel DB).';

	$lang['IP_disable_referrers'] = 'Disattiva la memorizzazione dei Referrers';
	$lang['IP_disable_referrers_explain'] = 'Questa opzione consente di disattivare la memorizzazione dei Referrers nel DB (consente di risparmiare spazio nel DB).';

	$lang['IP_disable_logins'] = 'Disabilita Registrazione Logins';
	$lang['IP_disable_logins_explain'] = 'Attivando questa opzione verr&agrave; disabilitata la registrazione dei Logins';

	$lang['IP_last_logins_n'] = 'Numero di Logins da Registrare';

	$lang['IP_index_top_posters'] = 'Utenti Migliori :: Indice Del Forum';
	$lang['IP_index_top_posters_explain'] = 'Attivando questa opzione verranno visualizzati gli utenti migliori nell\'<b>Indice Del Forum</b>.';

	$lang['IP_index_last_msgs'] = 'Ultimi Messaggi :: Indice Del Forum';
	$lang['IP_index_last_msgs_explain'] = 'Attivando questa opzione verranno visualizzati gli ultimi messaggi nell\'<b>Indice Del Forum</b>.';

	$lang['IP_online_last_msgs'] = 'Ultimi Messaggi :: Chi E\' In Linea';
	$lang['IP_online_last_msgs_explain'] = 'Attivando questa opzione verranno visualizzati gli ultimi messaggi nella pagina <b>Chi E\' In Linea</b>.';

	$lang['IP_last_msgs_n'] = 'Numero di ultimi messaggi da visualizzare';

	$lang['IP_last_msgs_x'] = 'Forum da escludere';
	$lang['IP_last_msgs_x_explain'] = 'Inserire i forum da escludere nella visualizzazione degli ultimi messaggi (inserire gli ID dei forums separati da virgole).';

	$lang['IP_show_chat_online'] = 'Online AJAX Chat :: Indice Del Forum';
	$lang['IP_show_chat_online_explain'] = 'Attivando questa opzione verranno visualizzati (nell\'<b>Indice Del Forum</b>) gli utenti che stanno usando la AJAX Chat.';

	$lang['IP_index_shoutbox'] = 'Shoutbox :: Indice Del Forum';
	$lang['IP_index_shoutbox_explain'] = 'Attivando questa opzione verr&agrave; visualizzata la Shoutbox nell\'<b>Indice Del Forum</b>.';

	$lang['IP_online_shoutbox'] = 'Shoutbox :: Chi E\' In Linea';
	$lang['IP_online_shoutbox_explain'] = 'Attivando questa opzione verr&agrave; visualizzata la Shoutbox nella pagina <b>Chi E\' In Linea</b>.';

	$lang['IP_img_shoutbox'] = 'Disabilita il bbcode [img][/img] nello Shoutbox';
	$lang['IP_img_shoutbox_explain'] = 'Attivando questa opzione verr&agrave; disabilitato il bbcode [img][/img] nello Shoutbox.';

	$lang['IP_index_links'] = 'Links :: Indice Del Forum';
	$lang['IP_index_links_explain'] = 'Attivando questa opzione verranno visualizzati i Links nell\'<b>Indice Del Forum</b>.';

	$lang['IP_index_birthday'] = 'Compleanni :: Indice Del Forum';
	$lang['IP_index_birthday_explain'] = 'Attivando questa opzione verranno visualizzati i Compleanni nell\'<b>Indice Del Forum</b>.';

	$lang['IP_show_random_quote'] = 'Citazioni Casuali :: Indice Del Forum';
	$lang['IP_show_random_quote_explain'] = 'Attivando questa opzione verrano visualizzate le citazioni casuali nell\'<b>Indice Del Forum</b>.';

	// TAB - Posting
	$lang['IP_posts_precompiled'] = 'Disattiva messaggi precompilati';
	$lang['IP_posts_precompiled_explain'] = 'Attivando questa opzione non verranno pi&ugrave; caricati i messaggi precompilati, per cui il caricamento sar&agrave; pi&ugrave; lento, ma rispetter&agrave; sempre le preferenze degli utenti su BBCode ed HTML (pu&ograve; essere utile in alcuni casi).';

	$lang['IP_allow_drafts'] = 'Abilita Bozze';
	$lang['IP_allow_drafts_explain'] = 'Consenti agli utenti di salvare i messaggi come bozze';

	$lang['IP_allow_mods_edit_admin_posts'] = 'Consenti Modifica Messaggi Admin';
	$lang['IP_allow_mods_edit_admin_posts_explain'] = 'Consenti ai moderatori di modificare i messaggi degli amministratori';

	$lang['IP_force_large_caps_mods'] = 'Forza Iniziali Maiuscole';
	$lang['IP_force_large_caps_mods_explain'] = 'Forza iniziali maiuscole nei titoli degli argomenti anche ai moderatori (gli amministratori non hanno comunque vincoli)';

	$lang['IP_show_new_reply_posting'] = 'Avvisa Per Nuove Risposte';
	$lang['IP_show_new_reply_posting_explain'] = 'Attivando questa opzione verr&agrave; mostrato un avviso che indica che ci sono nuove risposte quando si risponde ad un argomento';

	$lang['IP_no_bump'] = 'Blocca "Bump" per 24 ore';
	$lang['IP_no_bump_explain'] = 'Abilitando questa opzione gli utenti che hanno inviato l\'ultimo messaggio in un argomento non saranno in grado di inviare nuovi messaggi a meno che non siano passate 24 ore dal loro ultimo messaggio o finch&eacute; qualcun altro non risponda';

	$lang['IP_show_topic_description'] = 'Mostra Descrizione Argomento';
	$lang['IP_show_topic_description_explain'] = 'Attivando questa opzione sar&agrave; possibile inserire e visualizzare la descrizione degli argomenti';

	$lang['IP_edit_notes'] = 'Abilita Note di Modifica';
	$lang['IP_edit_notes_explain'] = 'Attivando questa opzione verranno abiltate le Note di Modifica';

	$lang['IP_edit_notes_n'] = 'Numero massimo Note di Modifica';

	$lang['IP_always_show_edit_by'] = 'Mostra Sempre Modifiche Ai Messaggi';
	$lang['IP_always_show_edit_by_explain'] = 'Attivando questa opzione verr&agrave; sempre mostrata la dicitura "Ultima modifica di..." in fondo ai messaggi quando un utente applicher&agrave; qualche modifica. Le modifiche degli amministatori non vengono mostrate';

	$lang['IP_show_social_bookmarks'] = 'Social Bookmarks';
	$lang['IP_show_social_bookmarks_explain'] = 'Mostra la sezione "Condivisione Argomento" quando si visualizza un argomento';

	$lang['IP_link_this_topic'] = 'Inserisci un link per questo argomento';
	$lang['IP_link_this_topic_explain'] = 'Mostra la sezione "Inserisci un link per questo argomento" quando si visualizza un argomento';

	$lang['IP_smilies_topic_title'] = 'Smileys nel Titolo e nella Descrizione delle Discussioni';
	$lang['IP_smilies_topic_title_explain'] = 'Attivando questa opzione verranno abilitati gli Smileys nel Titolo e nella Descrizione delle Discussioni';

	$lang['IP_enable_colorpicker'] = 'Abilita ColorPicker nell\'Editor Messaggi';

	$lang['IP_quote_iterations'] = 'Numero massimo di citazioni concatenate';

	$lang['IP_disable_ftr'] = 'Disabilita Force Topic Read';
	$lang['IP_disable_ftr_explain'] = 'Attivando questa opzione Force Topic Read sar&agrave; disabilitato completamente';

	$lang['IP_disable_html_guests'] = 'Disabilita i link HTML per gli ospiti';

	$lang['IP_birthday_viewtopic'] = 'Visualizza Et&agrave; Autori nelle Discussioni';

	$lang['IP_switch_poster_info_topic'] = 'Visualizza informazioni aggiuntive utenti nelle Discussioni (Lingua, Stile, ecc.)';

	$lang['IP_enable_quick_quote'] = 'Abilita Quick Quote e Off Topic';
	$lang['IP_enable_quick_quote_explain'] = 'Quick Quote consente agli utenti di citare qualunque messaggio con un semplice click. Questa funzione utilizza JavaScript, per cui abilitandola, la dimensione delle pagine potrebbe crescere a dismisura.';

	$lang['IP_allow_all_bbcode'] = 'Abilita tutti i BBCode';
	$lang['IP_allow_all_bbcode_explain'] = 'Abilitando questa opzione verranno processati tutti i BBCode nelle firme ed in altre pagine in cui normalmente alcuni BBCode sono disattivati. I BBCode che normalmente rientrano in questa categoria sono quelli relativi alle immagini e alle formattazioni che possono gravare maggiormente sul server. Ricorda che abilitando questa opzione alcune firme potrebbero risultare eccessivamente grandi.';

	$lang['IP_switch_bbcb_active_content'] = 'Consenti BBCodes con contenuto attivo';
	$lang['IP_switch_bbcb_active_content_explain'] = 'Attiva BBCodes Flash, Video, Audio Streams, RealMedia e Quicktime.';

	// TAB - Images In Posts
	$lang['IP_auth_view_pic_upload'] = 'Permessi Caricamento Immagini (Post Icy Images)';

	$lang['IP_enable_postimage_org'] = 'Abilita il pulsante PostImage';

	$lang['IP_gd_version'] = 'Versione GD:';
	$lang['GD_0'] = 'No GD';
	$lang['GD_1'] = 'GD1';
	$lang['GD_2'] = 'GD2';

	$lang['IP_show_img_no_gd'] = 'Mostra le miniature delle immagini GIF senza ricorrere alle librerie GD (in questo modo le immagini vengono caricate integralmente e poi mostrate in versione ridotta).';

	$lang['IP_thumbnail_posts'] = 'Miniature nei messaggi';
	$lang['IP_thumbnail_posts_explain'] = 'Abilitando questa opzione nei messaggi verr&agrave; mostrata una miniature quando le immagini vengono inserite tramite il BBCode IMG';

	$lang['IP_show_pic_size_on_thumb'] = 'Mostra le dimensioni dell\'immagine in basso sulla miniatura';

	$lang['IP_thumbnail_lightbox'] = 'Attiva Lightbox se le miniature nei post sono abilitate';
	$lang['IP_thumbnail_lightbox_explain'] = 'Apri l\'immagine in una finestra Java invece che in una nuova finestra.<br />Bisogna svuotare i messaggi precompilati dopo aver cambiato questa impostazione.';

	$lang['IP_thumbnail_cache'] = 'Cache miniature';

	$lang['IP_thumbnail_quality'] = 'Qualit&agrave; delle miniature (1-100)';

	$lang['IP_thumbnail_size'] = 'Dimensione miniature (in pixels)';

	// TAB - Forum
	$lang['Lang_extend_categories_hierarchy'] = 'SubCategorie';

	$lang['Category_attachment'] = 'Contenuto in';
	$lang['Category_desc'] = 'Descrizione';
	$lang['Category_config_error_fixed'] = 'Un\'errore nell\'impostazioni delle categorie &egrave; stato corretto';
	$lang['Attach_forum_wrong'] = 'Non potete inserire un forum all\'interno di un forum';
	$lang['Attach_root_wrong'] = 'Non potete inserire un forum nell\'indice';
	$lang['Forum_name_missing'] = 'Non potete creare un forum senza dargli un nome';
	$lang['Category_name_missing'] = 'Non potete creare una categoria senza dargli un nome';
	$lang['Only_forum_for_topics'] = 'Gli argomenti possono essere solo all\'interno di un forum';
	$lang['Delete_forum_with_attachment_denied'] = 'Non &egrave; possibile rimuovere un forum con sub categorie';

	$lang['Category_delete'] = 'Elimina categoria';
	$lang['Category_delete_explain'] = 'In questa sezione potete rimuovere una categoria e decidere dove collocare tutti i forum e categorie in essa contenute.';

	// forum links type
	$lang['Forum_link_url'] = 'Link URL';
	$lang['Forum_link_url_explain'] = 'Potete impostare un URI verso un programma phpBB, o un URL completo verso un server esterno';
	$lang['Forum_link_internal'] = 'Icy Phoenix File';
	$lang['Forum_link_internal_explain'] = 'Selezionate si se state richiamando un file interno ad Icy Phoenix';
	$lang['Forum_link_hit_count'] = 'Visite';
	$lang['Forum_link_hit_count_explain'] = 'Selezionate si se volete che il sistema conteggi il numero di hit a questo link';
	$lang['Forum_link_with_attachment_deny'] = 'Non potete impostare un forum come link se sono presenti al suo interno dei sub forum';
	$lang['Forum_link_with_topics_deny'] = 'Non potete impostare un forum come link se sono presenti degli argomenti al suo interno';
	$lang['Forum_attached_to_link_denied'] = 'Non potetete inserire un forum o una categoria in un forum di tipo link';

	$lang['Manage_extend'] = 'Gestione +';
	$lang['Manage'] = 'Gestione';
	$lang['No_subforums'] = 'Nessun sub-forum';
	$lang['Forum_type'] = 'Selezionate la tipologia di forum';
	$lang['Presets'] = 'Presets';
	$lang['Refresh'] = 'Aggiorna';
	$lang['Position_after'] = 'Inserire il forum dopo';
	$lang['Link_missing'] = 'Link inesistente';
	$lang['Category_with_topics_deny'] = 'Ci sono degli argomenti in questo forum. Non potete modificarlo in categoria.';
	$lang['Recursive_attachment'] = 'Non potete aggiungere un forum al livello inferiore dello stesso ( (recursive attachment)';
	$lang['Forum_with_attachment_denied'] = 'Non potete modificare una categoria con forum inclusi in un forum semplice';
	$lang['icon'] = 'Icona';
	$lang['icon_explain'] = 'Quest\'icona verr&agrave; visualizzata vicina al nome del forum. Potete impostare un link diretto o una chiave $image[] (vedi <i>tuo_template</i>/<i>tuo_template</i>.cfg).';

	// TAB - Calendar
	$lang['Lang_extend_topic_calendar'] = 'Calendario';

	// TAB - SEO
	$lang['IP_url_rw'] = 'URL Rewrite';
	$lang['IP_url_rw_explain'] = 'Attivando questa opzione verr&agrave; attivata per tutti gli utenti la funzione URL Rewrite (indirizzi in formato HTML anzich&eacute; in formato PHP per una migliore indicizzazione delle pagine).';

	$lang['IP_url_rw_guests'] = 'URL Rewrite Ospiti';
	$lang['IP_url_rw_guests_explain'] = 'Attivando questa opzione verr&agrave; attivata la funzione URL Rewrite solo per gli ospiti ed i bots.';

	$lang['IP_lofi_bots'] = 'LoFi Per Bots';
	$lang['IP_lofi_bots_explain'] = 'Attivando questa opzione LoFi verr&agrave; abilitato per i bots.';

	//Sitemap
	$lang['Sitemap_settings'] = 'Impostazioni Google Sitemap';

	$lang['IP_sitemap_topic_limit'] = 'Google Sitemap :: Limite Discussioni';
	$lang['IP_sitemap_topic_limit_explain'] = 'Numero massimo di discussioni da rilevare con una singola query del datbase';

	$lang['IP_sitemap_announce_priority'] = 'Google Sitemap :: Priorit&agrave; Annunci';
	$lang['IP_sitemap_announce_priority_explain'] = 'Priorit&agrave; Annunci (deve essere un numero compreso tra 0.0 e 1.0 incluso)';

	$lang['IP_sitemap_sticky_priority'] = 'Google Sitemap :: Priorit&agrave; Discussioni Importanti ';
	$lang['IP_sitemap_sticky_priority_explain'] = 'Priorit&agrave; Discussioni Importanti (deve essere un numero compreso tra 0.0 e 1.0 incluso)';

	$lang['IP_sitemap_default_priority'] = 'Google Sitemap :: Priorit&agrave; Predefinita';
	$lang['IP_sitemap_default_priority_explain'] = 'Priorit&agrave; Discussioni Normali (deve essere un numero compreso tra 0.0 e 1.0 incluso)';

	$lang['IP_sitemap_sort'] = 'Google Sitemap :: Ordine';
	$lang['IP_sitemap_new_first'] = 'Prima le Nuove Discussioni';
	$lang['IP_sitemap_old_first'] = 'Prima le Vecchie Discussioni';

	$lang['Word_graph'] = 'TAGS';

	$lang['IP_word_graph_max_words'] = 'TAGS :: Numero Parole';
	$lang['IP_word_graph_max_words_explain'] = 'Seleziona il numero massimo di parole da visualizzare. Un numero troppo alto potrebbe sovraccaricare il server. L\'impostazione raccomandata &egrave; 250.';

	$lang['IP_word_graph_word_counts'] = 'TAGS :: Abilita Conteggio Parole';
	$lang['IP_word_graph_word_counts_explain'] = 'Visualizza il numero di ricorrenze a fianco di ogni parola. Es: <b>Icy Phoenix (365)</b>?';

	$lang['IP_forum_wordgraph'] = 'TAGS :: Forum Tags';
	$lang['IP_forum_wordgraph_explain'] = 'Questa funzione abilita la visualizzazione dei tags pi&ugrave; usati per ogni forum';

	$lang['Similar_topics'] = 'Argomenti Simili';
	$lang['Similar_topics_explain'] = 'In questa pagina puoi configurare la ricerca di argomenti simili.';

	$lang['IP_similar_topics'] = 'Argomenti Simili :: Attiva Argomenti Simili';

	$lang['IP_similar_topics_desc'] = 'Argomenti Simili :: Prendi in considerazione anche la descrizione degli argomenti';

	$lang['IP_similar_stopwords'] = 'Argomenti Simili :: Escludi stop-words';

	$lang['IP_similar_max_topics'] = 'Argomenti Simili :: Numero massimo di argomenti da visualizzare';

	$lang['IP_similar_sort_type'] = 'Argomenti Simili :: Ordina per';
	$lang['IP_similar_sort_type_explain'] = 'Seleziona il metodo di ordinamento per gli argomenti simili';
	$lang['IP_similar_sort_type_time'] = 'Orario';
	$lang['IP_similar_sort_type_relev'] = 'Rilevanza';

	$lang['IP_similar_ignore_forums_ids'] = 'Argomenti Simili :: Forums Ignorati';
	$lang['IP_similar_ignore_forums_ids_explain'] = 'Inserisci l\'ID dei forum che vuoi vengano ignorati dalla ricerca (ad esempio forum di test o off topics). Inserire un ID per ciascuna riga.';

	// TAB - Logging And Security
	$lang['IP_admin_protect'] = 'Proteggi Account Amministratore Principale';
	$lang['IP_admin_protect_explain'] = 'Attivando questa opzione l\'account dell\'Amministratore Principale godr&agrave; di maggior sicurezza: nessun utente potr&agrave; modificare i suoi permessi.';

	$lang['IP_db_log_actions'] = 'Attiva Log su DB';
	$lang['IP_db_log_actions_explain'] = 'Questa funzionalit&agrave; consente di memorizzare su DB tutte quelle azioni che in qualche modo interessano le tabelle fondamentali del DB (posts, forum, ecc.). Se questa opzione &egrave; stata impostata anche nel constants.php non pu&ograve; essere disattivata da ACP. Se si attivano anche i rapporti, tutti gli errori riscontrati verranno memorizzati in un file che si potr&agrave; controllare in seguito.';

	$lang['IP_mg_log_actions'] = 'Attiva Log su file di testo';
	$lang['IP_mg_log_actions_explain'] = 'Questa funzionalit&agrave; consente di memorizzare in un file di testo tutte quelle azioni che in qualche modo interessano le tabelle fondamentali del DB (posts, forum, ecc.). Il file di testo viene memorizzato nella cartella LOGS, ma non &egrave; di lettura molto semplice, anche se potrebbe essere utile in alcune circostanze. Su siti molto grandi questa opzione potrebbe rallentare l\'esecuzione di alcune operazioni, per cui si consiglia di attivare questa opzione solo quando se ne ha realmente bisogno e si &egrave; in grado di consultare il file.';

	$lang['IP_write_errors_log'] = 'Attiva Log Errori su file di testo giornaliero';
	$lang['IP_write_errors_log_explain'] = 'Attivando questa opzione tutti gli errori rilevati sul sito (es.: pagina inesistente, richiesta non corretta, ecc.) verranno memorizzati in un file di log giornaliero. Ricorda che per usare questa funzione &egrave; necessario attivare in .htaccess il reindirizzamento degli errori su errors.php (basta decommentare le linee apposite aggiustando l\'indirizzo del proprio sito).';

	$lang['IP_write_digests_log'] = 'Attiva Log Digest su file di testo giornaliero';
	$lang['IP_write_digests_log_explain'] = 'Attivando questa opzione tutti i Digest inviati verranno memorizzati in un file di log giornaliero.';

	$lang['IP_logs_path'] = 'Percorso Logs (ricorda di attribuire i permessi CHMOD a 0777 a questa cartella)';
	$lang['IP_logs_path_explain'] = 'Inserisci il percorso per la memorizzazione dei logs degli errori e di altri eventuali logs. Il percorso deve essere relativo al percorso dove &egrave; installato il sito e senza slash finale. Esempio: <b>logs</b>.';


	// lang_extend_mods_settings.php
	$lang['Lang_extend_mods_settings'] = 'Impostazioni Icy Phoenix';
	$lang['Configuration_extend'] = 'Icy Phoenix';
	$lang['Override_user_choices'] = 'Sovrascrivi le scelte dell\'utente';
}

$lang['CFG_NONE'] = 'NESSUNO';
$lang['CFG_ALL'] = 'TUTTI';
$lang['CFG_REG'] = 'REG';
$lang['CFG_SELF'] = 'PROPRI';
$lang['CFG_PRIVATE'] = 'PRIVATO';
$lang['CFG_MOD'] = 'MOD';
$lang['CFG_ADMIN'] = 'ADMIN';

// lang_extend_categories_hierarchy.php - BEGIN
$lang['Hierarchy_setting'] = 'Forum';
$lang['Forum_link'] = 'Link esterno';
$lang['Forum_link_visited'] = 'Link visitato %d volte';

$lang['Use_sub_forum'] = 'Compressione Indice';
$lang['Index_packing_explain'] = 'Seleziona il livello di compressione dell\'indice';
$lang['Medium'] = 'Medio';
$lang['Full'] = 'Completo';
$lang['Split_categories'] = 'Dividi le categorie nell\'indice';
$lang['Use_last_topic_title'] = 'Mostra il titolo dell\'ultimo argomento nell\'indice';
$lang['Last_topic_title_length'] = 'Lunghezza dell\'ultimo argomento nell\'indice';
$lang['Sub_level_links'] = 'Link ai sottolivelli nell\'indice';
$lang['Sub_level_links_explain'] = 'Aggiungi il link ai sottolivelli nelle descrizione di forum o categoria';
$lang['With_pics'] = 'Con icone';
$lang['Display_viewonline'] = 'Mostra il box "info online" nell\'indice';
$lang['Never'] = 'Mai';
$lang['Root_index_only'] = 'Solo nell\'indice principale';
$lang['Always'] = 'Sempre';
$lang['Subforums'] = 'Subforums';
// lang_extend_categories_hierarchy.php - END

// lang_extend_topic_calendar.php - BEGIN
$lang['Calendar_settings'] = 'Calendario';
$lang['Calendar'] = 'Calendario';
$lang['Calendar_scheduler'] = 'Agenda';
$lang['Calendar_event'] = 'Evento';
$lang['Calendar_from_to'] = 'Dal %s al %s (inclusi)';
$lang['Calendar_time'] = '%s';
$lang['Calendar_duration'] = 'Durata';

$lang['Calendar_week_start'] = 'Primo giorno della settimana';
$lang['Calendar_header_cells'] = 'Numero di celle da visualizzare nell\'header del forum (0 per nessuna visualizzazione)';
$lang['Calendar_title_length'] = 'Lunghezza del titolo visualizzato nelle celle del calendario';
$lang['Calendar_text_length'] = 'Lunghezza del testo visualizzato nella finestra riassuntiva';
$lang['Calendar_block_display'] = 'Visualizza il blocco del calendario nell\'intestazione del forum';
$lang['Calendar_display_open'] = 'Visualizza il blocco del calendario aperto nell\'intestazione del forum (se il blocco &egrave; attivato)';
$lang['Calendar_nb_row'] = 'Numero di colonne per giorno nell\'intestazione del forum';
$lang['Calendar_birthday'] = 'Mostra i compleanni nel calendario';
$lang['Calendar_forum'] = 'Mostra il nome del forum sotto il titolo dell\'argomento nell\'agenda';

$lang['Sorry_auth_cal'] = 'Spiacenti, ma solo %s possono inserire eventi in questo forum.';
$lang['Date_error'] = 'giorno %d, mese %d, anno %d non costituiscono una data valida';

$lang['Event_time'] = 'Orario evento';
$lang['Minutes'] = 'Minuti';
$lang['Today'] = 'Oggi';
$lang['Yesterday'] = 'Ieri';
$lang['All_events'] = 'Tutti gli eventi';

/*
$lang['Rules_calendar_can'] = '<b>Puoi</b> inserire eventi calendario in questo forum';
$lang['Rules_calendar_cannot'] = '<b>Non puoi</b> inserire eventi calendario in questo forum';
*/
$lang['Rules_calendar_can'] = '<b>Puoi</b> inserire eventi calendario';
$lang['Rules_calendar_cannot'] = '<b>Non puoi</b> inserire eventi calendario';
$lang['birthday_header'] = 'Buon Compleanno!';
$lang['birthday'] = '<b>%s</b> festeggia il compleanno oggi!';
// lang_extend_topic_calendar.php - END

$lang['DB_LOG_ALL'] = 'Si con rapporti errori';

//$lang[''] = '';

?>