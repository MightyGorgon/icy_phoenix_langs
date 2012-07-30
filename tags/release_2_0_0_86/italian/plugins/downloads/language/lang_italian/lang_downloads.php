<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Antonio Mercurio (roland@phpbbplus.it) www.phpbbplus.it
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

/*
* mod version string
*/
$lang['Dl_mod_version'] = 'Download MOD v%s&nbsp;&copy; 2002 - 2007 by Hotschi, Demolition Fabi, OXPUS';

/*
* general messages after successful data managements
*/
$lang['Click_return_categoryadmin'] = 'Clicca %sQUI%s per ritornare all\'amministrazione delle categorie';
$lang['Click_return_dl_config'] = 'Clicca %sQUI%s per ritornare alla configurazione della sezione download';
$lang['Click_return_downloadadmin'] = 'Clicca %sQUI%s per ritornare all\'amministrazione della sezione download';
$lang['Click_return_downloads'] = 'Clicca %sQUI%s per ritornare alle categorie della sezione download';
$lang['Click_return_download_details'] = 'Clicca %sQUI%s per ritornare alla sezione download';
$lang['Click_return_file_management'] = 'Clicca %sQUI%s per ritornare alla gestione dei file';
$lang['Click_return_modcp_approve'] = 'Clicca %sQUI%s per ritornare alla gestione dei download non approvati';
$lang['Click_return_modcp_manage'] = 'Clicca %sQUI%s per ritornare al pannello di controllo di moderazione';
$lang['Click_return_user_traffic_admin'] = 'Clicca %sQUI%s per modificare il traffico di un altro utente';
$lang['Click_return_usergroup_traffic_admin'] = 'Clicca %sQUI%s per modificare il traffico di un altro gruppo utenti';

/*
* message strings
*/
$lang['Dl_category_added'] = 'Categoria aggiunta';
$lang['Dl_category_updated'] = 'Categoria aggiornata';
$lang['Dl_category_removed'] = 'Categoria rimossa correttamente';
$lang['DL_upload_error'] = 'Errore durante l\'upload del file. Per favore riprova.<br />Se il problema continua a verificarsi contatta l\'amministratore.';
$lang['Dl_approve_overview'] = 'Ci sono %s download da approvare. Clicca qui per procedere.';
$lang['Dl_approve_overview_one'] = 'C\'&egrave; un download da approvare. Clicca qui per procedere.';
$lang['Dl_config_updated'] = 'Configurazione download memorizzata correttamente';
$lang['Dl_confirm_cat_delete'] = 'Vuoi veramente rimuovere la categoria <strong>%s</strong>?';
$lang['Dl_confirm_delete_multiple_files'] = 'Vuoi veramente cancellare  <strong>%d download</strong>?';
$lang['Dl_confirm_delete_single_file'] = 'Vuoi veramente cancellare il file <strong>%s</strong>?';
$lang['Dl_delete_cat_and_files'] = 'Cancellazione della categoria e dei file in essa contenuti';
$lang['Dl_delete_cat_confirm'] = 'Seleziona una categoria di destinazione per questi file o scegli un\'altra operazione';
$lang['Dl_delete_cat_only'] = 'Cancella soltanto questa categoria';
$lang['Dl_delete_file_confirm'] = 'Cancella anche eventuali file presenti';
$lang['Dl_empty_category'] = 'Questa categoria non contiene file';
$lang['Dl_no_access'] = '<strong>Accesso Negato</strong><br /><br />Diritti insufficienti per effettuare il download di questo file!';
$lang['Dl_no_category'] = 'Nessuna categoria presente. Aggiungi una nuova categoria prima di impostare qualsiasi permesso.';
$lang['Dl_no_category_index'] = 'Questa sezione download non ha categorie';
$lang['Dl_no_external_url'] = 'Devi specificare un url valido se vuoi inserire un download esterno!';
$lang['Dl_no_filename_entered'] = 'Devi selezionare un file da inviare se vuoi effettuare un upload!';
$lang['Dl_no_groups_for_traffic'] = '<strong>Gruppo utente non trovato</strong>!<br /><br />Aggiungi un gruppo utente prima di impostarne i limiti di traffico per il download';
$lang['Dl_no_more_remain_traffic'] = 'Il traffico destinato ai download  di %s, relativo al mese in corso, &egrave; esaurito. Aspetta al prossimo mese o contatta un amministratore.';
$lang['Dl_no_permission'] = '<strong>Accesso Negato</strong>!<br /><br />Livello di autorizzazione insufficiente per eseguire l\'operazione!';
$lang['Dl_no_upload_traffic'] = 'Spiace ma il traffico destinato all\'upload &egrave; esaurito. Contatta l\'amministratore se vuoi inviare questo file';
$lang['Dl_path_not_exist'] = 'Il percorso relativo alla categoria <strong>%s</strong> non esiste!<br />Torna indietro e specifica un altro percorso oppure <br />crealo tramite la gestione file.';
$lang['Dl_permission_updated'] = 'Permessi download memorizzati correttamente';
$lang['Dl_user_config_saved'] = 'Configurazione utente per i download aggiornata correttamente.<br /><br />Clicca %sQUI%s per ritornare ai download';
$lang['Download_added'] = 'Download inserito';
$lang['Download_removed'] = 'Download cancellato';
$lang['Download_updated'] = 'Informazione aggiornata';
$lang['New_download'] = '&Egrave; stato inserito o aggiornato un download.<br />Clicca %sQUI%s per visualizzarlo.';
$lang['Dl_confirm_cat_stats_delete'] = 'Sei sicuro di voler cancellare i dati statistici relativi alla categoria <strong>%s</strong>?';
$lang['Dl_confirm_all_stats_delete'] = 'Sei sicuro di voler cancellare tutti i dati statistici?';
$lang['Dl_confirm_cat_comments_delete'] = 'Sei sicuro di voler cancellare i commenti dalla categoria <strong>%s</strong>?';
$lang['Dl_confirm_all_comments_delete'] = 'Sei sicuro di voler cancellare tutti i commenti?';
$lang['Dl_file_not_found'] = '<strong>Impossibile trovare il file %s !</strong><br /><br />Assicurati che il file sia presente nella cartella %s!';
$lang['Dl_no_change_edit_time'] = 'Non inserire nel log questo aggiornamento';
$lang['Dl_thumb_upload'] = 'Miniatura inviata correttamente';
$lang['Dl_thumb_del'] = 'Miniatura cancellata correttamente';
$lang['Dl_thumb_to_big'] = '<strong>Miniatura troppo grande</strong>!<br />Utilizza un file pi&ugrave; piccolo o un\'immagine con dimensioni inferiori.<br />Clicca sul tasto <em>indietro</em> del tuo browser per ritentare l\'upload.';

$lang['Dl_hotlink_permission'] = 'Il download diretto di questo file non &egrave; permesso!';
$lang['Dl_vc_permission'] = 'Il codice di conferma per questo download &egrave; errato. Torna indietro e riprova.';
$lang['Dl_report_broken_vc_mismatch'] = 'Il codice di conferma per questo report &egrave; errato. Torna indietro e riprova.';
$lang['Dl_vc_not_found'] = 'Il codice di conferma non &egrave; stato trovato. Torna indietro e riprova.';

/*
* page descriptions
*/
$lang['Dl_page_dl_hackslist'] = 'Modifiche';
$lang['Dl_page_downloads'] = 'Download';

/*
* commands
*/
$lang['Add_new_download'] = 'Inserisci nuovo download';
$lang['Dl_add'] = 'Inserisci';
$lang['Dl_add_category'] = 'Inserisci Categoria';
$lang['Dl_approve'] = 'Approva';
$lang['Dl_check_file_sizes'] = 'Controllo dimensioni';
$lang['Dl_check_thumbnails'] = 'Controllo miniature';
$lang['Dl_delete'] = 'Elimina';
$lang['Dl_down'] = 'In basso';
$lang['Dl_edit'] = 'Modifica';
$lang['Dl_go'] = 'Vai';
$lang['Dl_klick_to_rate'] = 'Valuta';
$lang['Dl_lock'] = 'Blocca';
$lang['Dl_mark_all'] = 'Seleziona tutto';
$lang['Dl_move'] = 'Sposta ';
$lang['Dl_set'] = 'Imposta';
$lang['Dl_unmark'] = 'Annulla selezione';
$lang['Dl_up'] = 'In alto';
$lang['Dl_delete_cat'] = 'Elimina categoria';

$lang['Dl_stats_delete'] = 'Cancella statistiche';
$lang['Dl_stats_delete_all'] = 'Cancella tutte le statistiche';
$lang['Dl_comments_delete'] = 'Cancella commenti';
$lang['Dl_comments_delete_all'] = 'Cancella tutti i commenti';

$lang['Dl_sub_sort_asc'] = 'Ordina tutte le voci di questa categoria in modo ascendente';
$lang['Dl_sub_sort_asc_zero'] = 'Ordinamento categorie principali: Ascendente';

/*
* categories related
*/
$lang['Dl_cat_description'] = 'Descrizione';
$lang['Dl_cat_files'] = 'File';
$lang['Dl_cat_index'] = 'Livello superiore';
$lang['Dl_cat_name'] = 'Categoria';
$lang['Dl_cat_parent'] = 'Categoria nidificata';
$lang['Dl_cat_path'] = 'Percorso';
$lang['Dl_cat_title'] = 'Download - Categorie';
$lang['Dl_choose_category'] = 'Seleziona una categoria';
$lang['Dl_mod_desc_allow'] = 'Permetti descrizione mod in upload';
$lang['Dl_must_approve'] = 'Gli upload in questa categoria devono essere approvati';
$lang['Dl_statistics'] = 'Abilita statistiche dettagliate';
$lang['Dl_stats_prune'] = 'Limita dati statistici';
$lang['Dl_stats_delete'] = 'Cancella statistiche';
$lang['Dl_stats_delete_all'] = 'Cancella tutte le statistiche';
$lang['Dl_comments_delete'] = 'Cancella commenti';
$lang['Dl_comments_delete_all'] = 'Cancella tutti i commenti';
$lang['Dl_cat_traffic'] = 'Quota traffico (attualmente disponibile: %s)';
$lang['Dl_cat_traffic_off'] = 'Quota traffico (attualmente non attiva)';
$lang['Dl_cat_traffic_main'] = 'Attualmente il traffico disponibile in questa categoria &egrave; %s ';
$lang['Dl_thumb_cat'] = 'Permetti miniature';
$lang['Dl_approve_comments'] = 'Approvazione automatica nuovi commenti';
$lang['Dl_approve_comments_explain'] = 'Disabilitando questa opzione qualsiasi nuovo commento deve essere approvato da un moderatore prima che lo stesso sia visualizzato.';
$lang['Dl_auth_cread'] = 'Leggi commenti';
$lang['Dl_auth_cpost'] = 'Commenta';
$lang['Dl_cat_rules'] = 'Regolamento';

/*
* traffic related
*/
$lang['Dl_auto_traffic'] = 'Traffico Download automatico';
$lang['Dl_enable_post_traffic'] = 'Abilita Incremento quota traffico per scrittura messaggi';
$lang['Dl_group_auto_traffic'] = 'Traffico per gruppo utenti';
$lang['Dl_newtopic_traffic'] = 'Incremento quota traffico per nuovo messaggio';
$lang['Dl_overall_traffic'] = 'Traffico globale mensile';
$lang['Dl_remain_overall_traffic'] = 'Traffico globale mensile rimanente: ';
$lang['Dl_reply_traffic'] = 'Incremento quota traffico per ogni messaggio, risposta o citazione';
$lang['Dl_traffic'] = 'Traffico massimo';
$lang['Dl_user_auto_traffic'] = 'Traffico globale utenti';
$lang['Single_user_traffic_title'] = 'Traffico per utente singolo';
$lang['Traffic'] = 'Traffico';
$lang['Traffic_now'] = 'Attualmente sull\'account ';
$lang['Usergroup_traffic_title'] = 'Traffico per iscritti al gruppo';
$lang['Users_traffic_title'] = 'Traffico per tutti gli utenti';
$lang['Dl_user_traffic_once'] = 'Decrementa il traffico utente una sola volta per singolo download';
$lang['Dl_can_download_traffic'] = 'Hai gi&agrave; effettuato il download di questo file.<br />Puoi effettuare nuovamente il download senza che il tuo limite di download mensile venga modificato.';
$lang['Dl_can_download_traffic_footer'] = '<strong>Il sistema &egrave; stato impostato in modo che tu possa scaricare nuovamente un file che hai gi&agrave; scaricato senza che il traffico per il download venga decrementato dal tuo limite.</strong><br /><br />';

$lang['Traffic_all_users_admin_explain'] = 'Imposta i limiti di traffico mensile per tutti gli utenti.';
$lang['Traffic_single_user_admin_explain'] = 'Imposta i limiti di traffico mensile per un utente specifico.';
$lang['Traffic_usergroup_admin_explain'] = 'Imposta i limiti di traffico mensile per gli iscritti ad un gruppo.';
$lang['Dl_auto_traffic_explain'] = 'In questa sezione &egrave; possibile impostare i limiti di traffico mensile per tutti gli utenti o per tutti gli iscritti ad un gruppo.<br>Il traffico &egrave; relativo al download dei file.';

/*
* auth values
*/
$lang['Dl_permissions_all'] = 'Imposta permessi per tutti gli utenti';
$lang['Dl_auth_dl'] = 'Download';
$lang['Dl_auth_mod'] = 'Modera';
$lang['Dl_auth_up'] = 'Upload';
$lang['Dl_auth_view'] = 'Visualizza';
$lang['Dl_permissions'] = 'Permessi per gli iscritti ai seguenti gruppi';
$lang['Dl_stop_uploads'] = 'Disabilita upload';
$lang['Dl_stat_perm'] = 'Livello di accesso per consultazione statistiche';
$lang['Dl_stat_perm_all'] = 'Tutti';
$lang['Dl_stat_perm_user'] = 'Utenti registrati';
$lang['Dl_stat_perm_mod'] = 'Moderatori Download';
$lang['Dl_stat_perm_admin'] = 'Amministratori';
$lang['Dl_auth_cread'] = 'Leggi commenti';
$lang['Dl_auth_cpost'] = 'Commenta';
$lang['Dl_perm_all'] = 'Tutti';
$lang['Dl_perm_reg'] = 'Utenti Registrati';
$lang['Dl_perm_grg'] = 'Gruppi';


/*
* hacks and mods related
*/
$lang['Dl_hack_autor'] = 'Autore';
$lang['Dl_hack_autor_email'] = 'Autore: Email';
$lang['Dl_hack_autor_website'] = 'Autore: Sito';
$lang['Dl_hack_dl_url'] = 'Download Alternativo';
$lang['Dl_hack_version'] = 'Versione';
$lang['Dl_hacklist'] = 'Elenca Hacklist';
$lang['Dl_hacks_list'] = 'Hacklist';
$lang['Dl_mod_desc'] = 'Come funziona il Mod';
$lang['Dl_mod_list'] = 'Mostra informazioni aggiuntive';
$lang['Dl_mod_require'] = 'Richiesto';
$lang['Dl_mod_test'] = 'Mod provato su/con';
$lang['Dl_mod_todo'] = 'Da fare';
$lang['Dl_mod_warning'] = 'Avvisi';

/*
* moderator panel
*/
$lang['Dl_modcp_approve'] = 'Moderazione : approva download';
$lang['Dl_modcp_edit'] = 'Moderazione : modifica download';
$lang['Dl_modcp_manage'] = 'Moderazione : gestione download';
$lang['Dl_modcp_mod_auth'] = '<strong>Puoi</strong> %smoderare questa categoria%s';

/*
* ACP file management
*/
$lang['Dl_check_filesizes_result'] = 'Tutti i file sono aggiornati e non sono stati rilevati errori';
$lang['Dl_check_filesizes_result_error'] = 'Non &egrave; stato possibile controllare i seguenti file:';
$lang['Dl_manage'] = 'File toolbox';
$lang['Dl_manage_content_count'] = '%s voci';
$lang['Dl_manage_create_dir'] = 'Crea cartella';
$lang['Dl_manage_empty_folder'] = 'Cartella vuota...';
$lang['Dl_manage_explain'] = 'In questa sezione puoi gestire i file associati ai download. Puoi utilizzare le seguenti funzioni:<br /><br />- Cancellare o spostare file senza associazione<br />- Spostare file senza categoria in una esistente<br />- Consultare l\'elenco dei file (<i>operazione predefinita all\'apertura della sezione</i>)<br />- Creare una cartella<br />- Cancellare cartelle vuote<br />- Verificare la dimensione dei file che non siano residenti in server esterno<br /><br /><strong>Attenzione:</strong><br />Questo tool non rimpiazza un client FTP!<br />Operazioni di Upload, spostamento e sostituzione file non sono possibili con questo tool!';
$lang['Dl_physical_quota'] = 'Quota fisica di tutti i file';
$lang['Dl_unassigned_files'] = 'Verifica per file non associati';

/*
* statistics
*/
$lang['Dl_latest_downloads'] = 'Ultimi Download';
$lang['Dl_latest_uploads'] = 'Ultimi Upload';
$lang['Dl_downloads_cur_month'] = 'Download Mese';
$lang['Dl_downloads_overall'] = 'Download Totali';
$lang['Dl_downloads_count'] = 'Numero Download';
$lang['Dl_downloads_traffic'] = 'Traffico Download Tot';
$lang['Dl_uploads_count'] = 'Numero Upload';
$lang['Dl_uploads_traffic'] = 'Traffico Upload Tot';
$lang['Dl_pos'] = 'Pos.';
$lang['Dl_time'] = 'Orario';
$lang['Dl_stats'] = 'Statistiche Download';
$lang['Dl_direction'] = 'Direzione';
$lang['Dl_browser'] = 'Web browser';
$lang['Dl_ip'] = 'Indirizzo IP ';
$lang['Dl_traffic_cur_month'] = 'Traffico Mese';
$lang['Dl_traffic_overall'] = 'Traffico Totale';
$lang['Dl_guest_stat_delete'] = 'Rimuovi dati relativi ai visitatori';
$lang['Dl_no_filter'] = '- nessun filtro -';
$lang['Dl_total_entries'] = 'Risultato';
$lang['Dl_filter'] = 'Filtro';
$lang['Dl_filter_string'] = 'Puoi usare * o % come carattere jolly';
$lang['Dl_guest_stats_admin'] = 'Mostra anche i dati dei visitatori';
$lang['Dl_stat_edit'] = 'modificato';

/*
* comments
*/
$lang['Dl_comment'] = 'Commento';
$lang['Dl_comments'] = 'Commenti';
$lang['Dl_last_comment'] = 'Ultimo commento';
$lang['Dl_post_comment'] = 'Scrivi';
$lang['Dl_view_comments'] = 'Mostra';
$lang['Dl_comment_edited'] = 'Commento modificato in dato %s';
$lang['Dl_comment_write'] = 'Commenta';
$lang['Dl_comment_show'] = 'Mostra tutti i commenti per questo download';
$lang['Dl_comment_delete'] = 'Elimina';
$lang['Dl_comment_edit'] = 'Modifica';
$lang['Dl_comment_added'] = 'Commento aggiunto correttamente';
$lang['Dl_comment_updated'] = 'Commento aggiornato correttamente';
$lang['Dl_must_be_approve_comment'] = 'Questo commento deve essere visualizzato da un moderatore prima della pubblicazione!';
$lang['Dl_approve_overview_one_comment'] = '&Egrave; presente un commento da moderare. Clicca sul testo per procedere.';
$lang['Dl_approve_overview_comments'] = 'Sono presenti %s commenti da moderare. Clicca sul testo per procedere.';

/*
* ACP management main page
*/
$lang['Dl_acp_traffic_management'] = 'Gestione quota traffico e preset automatici';
$lang['Dl_acp_categories_management'] = 'Gestione categorie e relativi permessi';
$lang['Dl_acp_config_management'] = 'Impostazione configurazione generale';
$lang['Dl_acp_files_management'] = 'Gestione download';
$lang['Dl_acp_stats_management'] = 'Statistiche';
$lang['Dl_acp_managemant_page'] = 'Amministrazione Download';
$lang['Dl_acp_managemant_page_explain'] = 'In questa sezione puoi gestire tutte le impostazioni relative al MOD Download.<br />Scegli una voce tra quelle visualizzate per poter gestire le impostazioni associate.';

/*
* global strings
*/
$lang['Dl_account'] = 'Traffico restante per questo mese:  <b>%s</b> .';
$lang['Dl_add_user'] = 'File inserito in data <b>%s</b> da <b>%s</b>';
$lang['Dl_all'] = 'Tutti';
$lang['Dl_Bytes'] = 'B';
$lang['Dl_Bytes_long'] = 'Bytes';
$lang['Dl_change_user'] = ' e modificato in data <b>%s</b> da <b>%s</b>';
$lang['Dl_config'] = 'Configurazione Download';
$lang['Dl_days'] = 'Giorni';
$lang['Dl_default_sort'] = 'Ordinamento predefinito';
$lang['Dl_delay_auto_traffic'] = 'Ritardo "auto traffic" per nuovi iscritti';
$lang['Dl_delay_post_traffic'] = 'Ritardo "traffico per messaggi" per nuovi utenti';
$lang['Dl_direct_download'] = 'diretto';
$lang['Dl_detail'] = 'Dettagli';
$lang['Dl_disable_email'] = 'Disattiva la notifica via email';
$lang['Dl_disable_popup'] = 'Disattiva la notifica per popup/messaggio privato';
$lang['Dl_disable_email_files'] = 'Disattiva la notifica via email';
$lang['Dl_disable_popup_files'] = 'Disattiva la notifica per popup/messaggio privato';
$lang['Dl_download'] = 'Download';
$lang['DL_edit'] = 'Download aggiornato';
$lang['DL_edit_time'] = 'Numero di giorni in il flag <strong>aggiornato</strong> sar&agrave; attivo per il download ';
$lang['Dl_extern'] = 'Esterno';
$lang['Dl_extern_up'] = 'Esterno';
$lang['Dl_file_description'] = 'Descrizione';
$lang['Dl_file_name'] = 'File';
$lang['Dl_file_size'] = 'Dimensione';
$lang['Dl_files_title'] = 'File';
$lang['Dl_files_url'] = 'URL';
$lang['Dl_free'] = 'Download libero';
$lang['Dl_function'] = 'Funzione';
$lang['Dl_GB'] = 'GB';
$lang['Dl_group_name'] = 'Nomi gruppo';
$lang['Dl_guest_stats_show'] = 'Mostra i visitatori nelle statistiche dettagliate';
$lang['Dl_hotlink_action'] = 'Azione per link diretti al file';
$lang['Dl_hotlink_action_one'] = 'reindirizza verso i dettagli';
$lang['Dl_hotlink_action_two'] = 'mostra dettagli';
$lang['Dl_info'] = 'Info';
$lang['Dl_is_free'] = 'Download Libero';
$lang['Dl_is_free_reg'] = 'Libero per utenti registrati';
$lang['Dl_KB'] = 'KB';
$lang['Dl_klicks'] = 'Click Mese';
$lang['Dl_klicks_total'] = 'Click Mese / Totali';
$lang['Dl_last_time'] = ' Ultimo download in data <b>%s</b>';
$lang['Dl_last_time_extern'] = ' Ultimo download da URL esterno in data <b>%s</b>';
$lang['Dl_limit_desc_on_index'] = 'Limita la descrizione del download nell\'indice';
$lang['Dl_Links_per_page'] = 'Downloads per pagina';
$lang['Dl_MB'] = 'MB';
$lang['Dl_method'] = 'Metodo Download';
$lang['Dl_method_new'] = 'Nuovo';
$lang['Dl_method_old'] = 'Vecchio';
$lang['Dl_method_quota'] = 'Quota per il metodo "chunked file"';
$lang['Dl_modcp_capprove'] = 'Approva commenti';
$lang['Dl_must_be_approved'] = 'Questo download deve essere approvato da un amministratore o dal moderatore della categoria.';
$lang['Dl_name'] = 'Nome';
$lang['DL_new'] = 'Nuovo Download';
$lang['DL_new_time'] = 'Numero di giorni in cui il flag <strong>nuovo</strong> sar&agrave; attivo per il download';
$lang['Dl_no'] = 'N&deg; ';
$lang['Dl_no_config'] = 'Configurazione utente bloccata';
$lang['Dl_no_last_time'] = ' Nessun download conteggiato...';
$lang['Dl_no_mod_todo'] = 'Nessun Mod ToDo';
$lang['Dl_not_availible'] = 'Non disponibile';
$lang['Dl_order'] = 'Ordinamento';
$lang['Dl_overall_klicks'] = 'Click Totali';
$lang['Dl_overview'] = 'Riassunto di tutti i download';
$lang['DL_posts'] = 'Numero di messaggi necessari per accedere al download';
$lang['Dl_prevent_hotlink'] = 'Prevenzione download diretto del file';
$lang['Dl_rating'] = 'Valutazione';
$lang['Dl_real_filetime'] = 'Ultima modifica del file';
$lang['Dl_search_author'] = 'Per gli utenti che hanno inserito o aggiornato file';
$lang['Dl_show_footer_legend'] = 'Mostra la legenda nel pi&egrave; di pagina';
$lang['Dl_show_footer_stat'] = 'Mostra statistiche nel pi&egrave; di pagina';
$lang['Dl_show_real_filetime'] = 'Mostra la data dell\'ultima modifica nei dettagli';
$lang['Dl_sort_preform'] = 'Ordinamento';
$lang['Dl_sort_acp'] = 'Preset';
$lang['Dl_sort_user'] = 'Utente';
$lang['Dl_sort_user_opt'] = 'Ordina download per';
$lang['Dl_sort_user_ext'] = 'con altri criteri';
$lang['Dl_thumb'] = 'Miniatura';
$lang['Dl_thumb_dim_size'] = 'La miniatura deve avere una dimensione massima di %s x %s pixel e la dimensione del file deve inferiore a %s.';
$lang['Dl_thumb_max_dim'] = 'Massima dimensione in pixel X * Y';
$lang['Dl_thumb_max_size'] = 'Massima dimensione del file';
$lang['Dl_total_stat'] = 'Ci sono %s file per una dimensione di %s / %s comprendendo %s download esterni.';
$lang['Dl_unapproved'] = '<br /><span class="gensmall">[ non approvato ]</span>';
$lang['Dl_upload'] = 'Upload di un file';
$lang['Dl_upload_file'] = 'Upload';
$lang['Dl_upload_max_filesize'] = 'La dimensione massima per gli upload &egrave;: %s';
$lang['Dl_upload_traffic'] = 'La dimensione del file inviato verr&agrave; decrementata dal traffico globale. Ricorda questo limite quando scegli la dimensione del file!';
$lang['Dl_upload_traffic_count'] = 'inoltre verr&agrave; decrementato il traffico globale per gli upload';
$lang['Dl_use_hacklist'] = 'Attiva hackslist';
$lang['Dl_users_without_group'] = 'Utenti non iscritti ad un gruppo';
$lang['Dl_white_explain'] = 'Download libero senza decremento del traffico per utenti registrati';
$lang['Dl_yes'] = 'Si';
$lang['Dl_yes_reg'] = 'Si per<br />utenti registrati';
$lang['Download_path'] = 'Cartella download (ad esempio <b>downloads/</b>)';
$lang['Downloads'] = 'Downloads';
$lang['Must_select_download'] = 'Seleziona un download.';
$lang['Number_recent_dl_on_portal'] = 'Numero di nuovi download mostrati nel portale';
$lang['Recent_downloads'] = 'Nuovi file';
$lang['User_allow_fav_download_email'] = 'Abilita invio email per modifiche nei download preferiti';
$lang['User_allow_fav_download_popup'] = 'Abilita messaggio/popup per modifiche nei download preferiti';
$lang['User_allow_new_download_email'] = 'Abilita invio email per nuovi file';
$lang['User_allow_new_download_popup'] = 'Abilita messaggio/popup per nuovi file';
$lang['User_download_email'] = 'Notifica<br />Email';
$lang['User_download_popup'] = 'Messaggio<br />Popup';
$lang['User_download_notify_type'] = 'Tipo di avviso';
$lang['User_download_notify_type_popup'] = 'Popup';
$lang['User_download_notify_type_message'] = 'Messaggio nell\'intestazione';
$lang['Dl_edit_own_downloads'] = 'L\'utente pu&ograve; modificare i propri file';
$lang['Dl_report_confirm_code'] = 'Inserire il codice di conferma per avvisare che il download non funziona:';
$lang['Dl_shorten_extern_links'] = 'Visione ridotta dei link esterni';
$lang['Dl_physical_quota_explain'] = 'Se viene raggiunto il limite (al momento %s in uso) non sar&agrave; possibile effettuare ulteriori upload';
$lang['Dl_blue_explain'] = 'Il traffico globale mensile ha raggiunto il limite!';
$lang['Dl_blue_explain_file'] = 'Il traffico per i download mensile ha raggiunto il limite!';
$lang['Dl_blue_explain_foot'] = 'Il traffico globale o per file/categoria mensile ha raggiunto il limite!';
$lang['Dl_green_explain'] = 'Download! Traffico non scalato dall\'account.';
$lang['Dl_grey_explain'] = 'Download! File esterno. Traffico non scalato dall\'account.';
$lang['Dl_red_explain'] = 'Traffico insufficiente o numero di messaggi necessari non raggiunto.<br />(%s messaggi richiesti)';
//$lang['Dl_red_explain'] = 'Traffico insufficiente o numero di messaggi necessari non raggiunto<br />(%s messaggi richiesti). I messaggi inseriti per raggiungere questo limite saranno controllati. In caso di violazione la vostra utenza verr&agrave; disattivata!';
$lang['Dl_red_explain_alt'] = 'Traffico insufficiente o numero di messaggi necessari non raggiunto<br />(%s messaggi richiesti). I messaggi inseriti per raggiungere questo limite saranno controllati. In caso di violazione la vostra utenza verr&agrave; disattivata!';
$lang['Dl_red_explain_perm'] = 'Diritti insufficienti per effettuare il download!';
$lang['Dl_yellow_explain'] = 'Download! Il traffico verr&agrave; scalato dall\'account utente.';
$lang['Dl_config_explain'] = 'In questa sezione potrai abilitare o disabilitare diverse funzioni del Mod e modificare alcune impostazioni.';
$lang['Dl_cat_edit_explain'] = 'In questa sezione puoi gestire le categorie relativa al Download MOD.';
$lang['DL_posts'] = 'Numero di messaggi che l\'utente deve scrivere prima di accedere al download';
$lang['Dl_Links_per_page'] = 'Download per pagina';
$lang['Dl_account'] = 'Traffico mensile restante: <strong>%s</strong> .';
$lang['Dl_add_user'] = 'Download inserito il <strong>%s</strong> da <strong>%s</strong>';
$lang['Dl_all'] = 'Tutto';
$lang['Dl_change_user'] = ' e modificato il <strong>%s</strong> da <strong>%s</strong>';
$lang['Dl_config'] = 'Configurazione download';
$lang['Dl_days'] = 'Giorni';
$lang['Dl_default_sort'] = 'Ordinamento predefinito';
$lang['Dl_delay_auto_traffic'] = 'Ritardo assegnazione traffico nuovo utente';
$lang['Dl_delay_post_traffic'] = 'Ritardo assegnazione traffico per messaggi nuovo utente';
$lang['Dl_detail'] = 'Dettagli';
$lang['Dl_download'] = 'Download';
$lang['Dl_extern'] = 'Esterno';
$lang['Dl_file_description'] = 'Descrizione';
$lang['Dl_file_name'] = 'File';
$lang['Dl_file_size'] = 'Dimensione';
$lang['Dl_files_title'] = 'File';
$lang['Dl_files_url'] = 'URL';
$lang['Dl_free'] = 'Download <strong>libero</strong>';
$lang['Dl_function'] = 'Funzione';
$lang['Dl_group_name'] = 'Gruppi';
$lang['Dl_last_time'] = ' Ultimo download: <strong>%s</strong>';
$lang['Dl_last_time_extern'] = ' Ultimo download per url esterno: <strong>%s</strong>';
$lang['Dl_name'] = 'Nome';

/*
* build in add on cash to traffic
*/
$lang['Dl_cash_to_traffic'] = 'Scambia crediti con traffico';
$lang['Dl_cash_to_traffic_explain'] = 'In questa sezione puoi impostare il tasso di scambio tra crediti e traffico. Lo scambio fornir&agrave; il valore stabilito di traffico per un\'unit&agrave; di valuta.';
$lang['Dl_cash_currency'] = 'Valuta crediti';
$lang['Dl_cash_exchange'] = 'Scambio: 1 %s in %s traffico';
$lang['Dl_cash_current_amount'] = 'Possiedi %s %s';

/*
* new on Download MOD 5.0.10: Blacklist for filetypes
*/
$lang['Dl_ext_blacklist'] = 'Blacklist Tipologia File';
$lang['Dl_use_ext_blacklist'] = 'Abilita la blacklist per tipologia file';
$lang['Dl_extention'] = 'Nuova estensione file proibita';
$lang['Dl_extentions'] = 'Estensioni file proibite';
$lang['Dl_add_extention'] = 'Aggiungi una nuova estensione';
$lang['Dl_confirm_delete_extention'] = 'Sei sicuro di voler rimuovere l\'estensione <b>%s</b>?';
$lang['Dl_confirm_delete_extentions'] = 'Sei sicuro di voler rimuovere le estensioni <b>%s</b>?';
$lang['Dl_delete_extention_confirm'] = 'Rimuovi estensione dalla blacklist';
$lang['Dl_delete_extentions_confirm'] = 'Rimuovi estensioni dalla blacklist';
$lang['Extention_removed'] = 'Estensione file rimossa dalla blacklist.';
$lang['Extentions_removed'] = 'Estensioni file rimosse dalla blacklist.';
$lang['Click_return_extblacklistadmin'] = 'Clicca %sQUI%s per ritornare alla gestione delle estensioni nella blacklist';
$lang['Dl_forbidden_extention'] = 'Questa estensione non &egrave; permessa!<br />Per favore ritorna indietro e cambia estensione.';
$lang['Dl_forbidden_ext_explain'] = 'Estensioni file vietate: %s';
$lang['Dl_ext_blacklist_explain'] = 'Tutte le estensioni elencate sono disabilitate ( non &egrave; possibile inviare file con questa estensione).<br />Queste estensioni verranno limitate anche nel pannello di controllo amministrativo.<br />Non fanno riferimento a download esistenti.';

$lang['Dl_use_ext_blacklist_explain'] = 'Se abiliti la blacklist i file specificati saranno bloccati durante le fasi di upload e modifica.';
/*
* new on Download MOD 5.0.12: Disable popup notify for current add/edit download
*/
$lang['Dl_disable_popup_notify'] = 'Permetti la disattivazione della notifica a mezzo popup su modifica o inserimento download';

/*
* new on Download MOD 5.0.15: Banlist and report broken downloads
*/
$lang['Dl_acp_banlist'] = 'Banlist';
$lang['Dl_user_id'] = 'User ID';
$lang['Dl_confirm_delete_ban_values'] = 'Sei sicuro di rimuovere queste voci dalla banlist?';
$lang['Dl_banlist_updated'] = 'Banlist aggiornata correttamente';
$lang['Dl_banned'] = 'Sei stato bannato e non puoi scaricare file!';
$lang['Click_return_banlistadmin'] = 'Clicca %sQUI%s per ritornare alla banlist';
$lang['Dl_broken'] = 'Avviso download non funzionante';
$lang['Dl_broken_mod'] = 'Resetta stato di download non funzionante';
$lang['Dl_broken_cur'] = 'Questo download &egrave; stato segnalato come non funzionante';
$lang['Dl_report_broken'] = 'Permetti l\'avviso per download non funzionanti';
$lang['Dl_a_guest'] = 'un visitatore';
$lang['Dl_favorite_add'] = 'Avvisami delle modifiche relative a questo file';
$lang['Dl_favorite_drop'] = 'Annulla notifiche relative a questo file';
$lang['Dl_favorite'] = 'File preferiti';
$lang['Dl_acp_banlist_explain'] = 'In questa sezione puoi modificare le inibizioni [ban] di accesso ai download.<br />';

/*
* new on Download MOD 5.1.0
*/
$lang['Dl_report_broken_lock'] = 'Disattiva il download se il file &egrave; stato segnalato come non funzionante';
$lang['Dl_report_broken_message'] = 'Mostra le informazioni relative al download non funzionante solo se il download &egrave; stato disabilitato';
$lang['Dl_report_broken_vc'] = 'Abilita la  conferma visuale per la segnalazione di download non funzionanti';
$lang['Dl_visual_confirmation'] = 'Abilita la conferma visuale per il download del file';
$lang['Dl_off_guests'] = 'Non per i visitatori';

/*
* new on Download MOD 5.1.1
*/
$lang['Dl_icon_free_for_reg'] = 'Mostra l\'icona bianca del download ai visitatori';

/*
* new on Download MOD 5.1.3
*/
$lang['Dl_latest_comments'] = 'Mostra gli ultimi X commenti nel dettaglio del download';

/*
* new on Download MOD 5.2.0 - The Bug Tracker !!!!!!!!!!!! -------------  * :-(((((
*/
$lang['Dl_bug_tracker'] = 'Bug Tracker';
$lang['Dl_bug_tracker_file'] = 'per questo download';
$lang['Dl_bug_tracker_cat'] = 'Abilita Bug Tracker';

$lang['Confirm_delete_bug_report'] = 'Sei sicuro di volere rimuovere questo bug report?';
$lang['Dl_bug_report_id'] = 'Report ID';
$lang['Dl_bug_report_title'] = 'Titolo Report ';
$lang['Dl_bug_report_title_details'] = 'Report';
$lang['Dl_bug_report_text'] = 'Descrizione';
$lang['Dl_bug_report_date'] = 'Data';
$lang['Dl_bug_report_php'] = 'PHP';
$lang['Dl_bug_report_db'] = 'DB';
$lang['Dl_bug_report_forum'] = 'Forum';
$lang['Dl_bug_report_file'] = 'Download';
$lang['Dl_bug_report_author'] = 'Report da';
$lang['Dl_bug_report_assigned'] = 'Assegnato a';
$lang['Dl_bug_report_assign_date'] = 'Assegnato il';
$lang['Dl_bug_report_status'] = 'Stato';
$lang['Dl_bug_report_status_date'] = 'Data aggiornamento stato';
$lang['Dl_bug_report_detail'] = 'Dettagli';
$lang['Dl_bug_report_history'] = 'Storico';
$lang['Dl_report_status'][0] = 'nuovo';
$lang['Dl_report_status'][1] = 'visualizzato';
$lang['Dl_report_status'][2] = 'in corso';
$lang['Dl_report_status'][3] = 'in attesa';
$lang['Dl_report_status'][4] = 'completato';
$lang['Dl_report_status'][5] = 'abbandonato';
$lang['Dl_bug_report_reassign'] = 'riassegna';
$lang['Dl_bug_report_assign'] = 'assegna';
$lang['Dl_bug_report_unassigned'] = 'non assegnato';
$lang['Dl_no_bug_tracker'] = 'Nessun report trovato';
$lang['Dl_bug_report_no_title'] = 'Non hai dato un titolo a questo bug report!';
$lang['Dl_bug_report_no_text'] = 'Non hai inserito una descrizione per questo bug report!';
$lang['Dl_bug_report_added'] = 'Bug report inserito correttamente';
$lang['Click_return_bug_tracker'] = 'Clicca %sQUI%s per ritornare al bug tracker.';
$lang['Dl_bug_report_status_text'] = 'Qualche parola relativa al nuovo stato (verr&agrave; inviato per email all\'autore del bug report)';
$lang['Dl_bug_report_status_update'] = 'aggiornamento';
$lang['Dl_bug_report_email_status'] = 'Questo messaggio &egrave; stato inserito durante il cambio di stato:
--------------------
%s
--------------------';
$lang['Dl_filter_bt_own'] = 'Mostra i miei report';
$lang['Dl_filter_bt_assign'] = 'Mostra i bug a me assegnati';

$lang['Dl_user_download_limit_flag'] = 'Abilita controllo numero di downloads mensili';
$lang['Dl_user_download_limit'] = 'Numero massimo downloads mensili';

?>