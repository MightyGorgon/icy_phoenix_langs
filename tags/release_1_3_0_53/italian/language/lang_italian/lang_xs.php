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

$lang['Extreme_Styles'] = 'eXtreme style ';
$lang['xs_title'] = 'eXtreme style mod';

$lang['xs_file'] = 'File';
$lang['xs_template'] = 'Template';
$lang['xs_id'] = 'ID';
$lang['xs_style'] = ' Stile ';
$lang['xs_styles'] = 'Stili';
$lang['xs_users'] = 'Utenti';
$lang['xs_options'] = 'Opzione';
$lang['xs_comment'] = 'Commento';
$lang['xs_upload_time'] = 'Data Upload';
$lang['xs_select'] = 'Seleziona';

$lang['xs_continue'] = 'Continua';	// button

$lang['xs_click_here_lc'] = 'Clicca qui';
$lang['xs_edit_lc'] = 'Modifica';

/*
* navigation
*/
$lang['xs_config_shownav'] = array(
	'Configurazione',
	'Installa Stili',
	'Disinstalla Stili',
	'Stile Predefinito',
	'Gestione Cache',
	'Importa Stili',
	'Esporta Stili',
	'Clona Stile',
	'Download Stili',
	'Modifica Template',
	'Modifica Stili',
	'Esporta Database',
	'Controlla Aggiornamenti',
	);

/*
* frame_top.tpl
*/
$lang['xs_menu_lc'] = 'eXtreme style mod menu';
$lang['xs_support_forum_lc'] = 'forum di supporto';
$lang['xs_download_styles_lc'] = 'download stili';
$lang['xs_install_styles_lc'] = 'installa stili';

/*
* index.tpl
*/

$lang['xs_main_comment1'] = 'Questo &egrave; il men&ugrave; principale di eXtreme style. Ci sono alcune funzioni disponibili in questa interfaccia, quindi questa pagina pu&ograve; essere considerata come una guida. &Egrave; presente una breve descrizione per ciascuna funzione sotto il nome della funzione stessa. <br /><br />Questo MOD sostituisce le funzioni della gestione temi che comunque trovi in questo elenco, con miglioramenti ed opzioni aggiuntive. <br /><br />Se hai qualche domanda, per favore visita <a href="http://www.stsoftware.biz/forum" target="_blank">il forum di supporto</a> in cui potrai ottenere assistenza per questo mod.';
$lang['xs_main_comment2'] = 'Il mod eXtreme style permette ad un amministratore di immagazzinare l\'intero Stile in un file .style. Gli stili sono memorizzati in un file compresso diminuendo le problematiche di upload e download di diversi files. I file di stile sono compressi e quindi rendono efficiente l\'inserimento di nuovi temi rispetto al modo classico.';
$lang['xs_main_comment3'] = 'Tutte le funzioni della gestione stili di Icy Phoenix sono svolte dal mod eXtreme style.<br /><br /><a href="{URL}">Clicca qui</a> per accedere al men&ugrave;.';
$lang['xs_main_title'] = 'eXtreme style [men&ugrave; di navigazione]';
$lang['xs_menu'] = 'eXtreme style [Men&ugrave;]';

$lang['xs_manage_styles'] = 'Gestione Stili';
$lang['xs_import_export_styles'] = 'Importa/Esporta Stili';
$lang['xs_install_uninstall_styles'] = 'Installa/Rimuovi stili';
$lang['xs_edit_templates'] = 'Modifica Template';
$lang['xs_other_functions'] = 'Altre funzioni';

$lang['xs_configuration'] = 'Configurazione';
$lang['xs_configuration_explain'] = 'Questa opzione ti permette di modificare la configurazione di eXtreme style.';
$lang['xs_default_style'] = ' Stile predefinito';
$lang['xs_default_style_explain'] = 'Questa opzione ti permette di modificare lo Stile predefinito del forum e impostare o modificare il tema utilizzato dagli utenti.';
$lang['xs_manage_cache'] = 'Gestione Cache';
$lang['xs_manage_cache_explain'] = 'Questa opzione ti permette di gestire i file nella cache.';
$lang['xs_import_styles'] = 'Importa Stili';
$lang['xs_import_styles_explain'] = 'Questa opzione ti permette di effettuare il download e l\'installazione di file. Stile.';
$lang['xs_export_styles'] = 'Esporta Stili';
$lang['xs_export_styles_explain'] = 'Questa opzione ti permette di salvare uno Stile dal tuo forum in unico file. Stile e trasferirlo facilmente da un forum ad un altro o in un altro sito web.';
$lang['xs_clone_styles'] = 'Clona stile';
$lang['xs_clone_styles_explain'] = 'Questa opzione ti permette di clonare un Stile o un template.';
$lang['xs_download_styles'] = 'Download Stile ';
$lang['xs_download_styles_explain'] = 'Questa opzione ti permette di effettuare il download di uno Stile da un sito. Puoi eventualmente configurare un elenco di siti da cui scaricare eventuali stili.';
$lang['xs_install_styles'] = 'Installa Stili';
$lang['xs_install_styles_explain'] = 'Questa opzione ti permette di installare gli stili di cui hai effettuato l\'upload.';
$lang['xs_uninstall_styles'] = 'Rimuovi Stili';
$lang['xs_uninstall_styles_explain'] = 'Questa opzione ti permette di rimuovere gli stili attualmente installati nel tuo forum.';
$lang['xs_edit_templates_explain'] = 'Questa opzione ti permette di modificare i file tpl online.';
$lang['xs_edit_styles_data'] = 'Modifica dati per gli stili';
$lang['xs_edit_styles_data_explain'] = 'Questa opzione ti permette di modificare le variabili dello Stile. Opzione utilizzata da alcuni stili dato che la maggior parte utilizza un file.css per gestire queste variabili.';
$lang['xs_export_styles_data'] = 'Esporta dati per gli stili';
$lang['xs_export_styles_data_explain'] = 'Questa opzione ti permette di salvare le impostazioni nel file theme_info.cfg.';
$lang['xs_check_for_updates'] = 'Controlla aggiornamenti';
$lang['xs_check_for_updates_explain'] = 'Questa opzione ti permette di verificare gli aggiornamenti di stili e mod installati nel tuo forum.';

$lang['xs_set_configuration_lc'] = 'configura';
$lang['xs_set_default_style_lc'] = 'imposta default Stile ';
$lang['xs_manage_cache_lc'] = 'gestione cache';
$lang['xs_import_styles_lc'] = 'importa stili';
$lang['xs_export_styles_lc'] = 'esporta stili';
$lang['xs_clone_styles_lc'] = 'clona stili';
$lang['xs_uninstall_styles_lc'] = 'rimuovi stili';
$lang['xs_edit_templates_lc'] = 'modifica template';
$lang['xs_edit_styles_data_lc'] = 'modifica dati stili';
$lang['xs_export_styles_data_lc'] = 'esporta dati stili';
$lang['xs_check_for_updates_lc'] = 'controlla aggiornamenti';

/*
* ftp.tpl, ftp functions
*/

$lang['xs_ftp_comment1'] = 'Per poter utilizzare questa opzione devi specifica il metodo di upload. Se selezioni FTP, allora la password non verr&agrave; memorizzata e eXtreme style ti richieder&agrave; la password quando selezioneraie una funzione che richiede l\'accesso FTP. Se selezioni "file system locale" assicurati che tutte le cartelle selezionate abbiano l\'accesso in scrittura.';
$lang['xs_ftp_comment2'] = 'Per poter utilizzare questa opzione devi impostare le opzioni FTP. la password non verr&agrave; memorizzata ed eXtreme style ti richieder&agrave; la password quando selezionerai una funzione che richiede l\'accesso FTP.';
$lang['xs_ftp_comment3'] = 'ATTENZIONE!! Le funzioni FTP non risultano attive in questo server. Non puoi utilizzare le funzioni di eXtreme style che richiedono l\'accesso FTP.';

$lang['xs_ftp_title'] = 'Configurazione FTP ';

$lang['xs_ftp_explain'] = 'L\'accesso FTP viene utilizzato per effettuare l\'upload di nuovi stili. Se vuoi utilizzare la funzione "importa Stile " allora devi configurare le impostazioni FTP. Il Mod eXtreme style prover&agrave; ad auto configurare le opzioni quando possibile.';

$lang['xs_ftp_error_fatal'] = 'Le funzioni FTP non sono attive in questo server. Impossibile continuare.';
$lang['xs_ftp_error_connect'] = 'Errore FTP: impossibile connettersi a {HOST}';
$lang['xs_ftp_error_login'] = 'Errore FTP: impossibile effettuare il login';
$lang['xs_ftp_error_chdir'] = 'Errore FTP: impossibile spostarsi nella cartella {DIR}';
$lang['xs_ftp_error_nonphpbbdir'] = 'Errore FTP: hai specificato una cartella non valida: nessuna installazione di Icy Phoenix presente';
$lang['xs_ftp_error_noconnect'] = 'Impossibile connettersi al server FTP';
$lang['xs_ftp_error_login2'] = 'Dati di accesso FTP non validi';

$lang['xs_ftp_log_disabled'] = 'le funzioni ftp sono disattivate in questo server. lo script verr&agrave; interrotto.';
$lang['xs_ftp_log_connecting'] = 'connessione in corso a {HOST}';
$lang['xs_ftp_log_noconnect'] = 'impossibile connettersi a {HOST}';
$lang['xs_ftp_log_connected'] = 'connesso. login in corso...';
$lang['xs_ftp_log_nologin'] = 'impossibile effettuare la login come {USER}';
$lang['xs_ftp_log_loggedin'] = 'connesso';
$lang['xs_ftp_log_end'] = 'esecuzione script completata';
$lang['xs_ftp_log_nopwd'] = 'errore: impossibile accedere alla directory';
$lang['xs_ftp_log_nomkdir'] = 'errore: impossibile creare la cartella {DIR}';
$lang['xs_ftp_log_mkdir'] = 'directory {DIR} creata';
$lang['xs_ftp_log_nochdir'] = 'errore: impossibile cambiare la cartella corrente in {DIR}';
$lang['xs_ftp_log_normdir'] = 'errore: impossibile rimuovere la cartella {DIR}';
$lang['xs_ftp_log_rmdir'] = 'directory rimossa {DIR}';
$lang['xs_ftp_log_chdir'] = 'directory corrente cambiata in {DIR}';
$lang['xs_ftp_log_noupload'] = 'errore: impossibile effettuare l\'upload del file {FILE}';
$lang['xs_ftp_log_upload'] = 'file uploadato {FILE}';
$lang['xs_ftp_log_nochmod'] = 'Attenzione: impossibile effettuare il chmod su file {FILE}';
$lang['xs_ftp_log_chmod'] = 'chmod file {FILE} : {MODE}';
$lang['xs_ftp_log_invalidcommand'] = 'errore: comando sconosciuto: {COMMAND}';
$lang['xs_ftp_log_chdir2'] = 'ritorno alla cartella {DIR}';
$lang['xs_ftp_log_nochdir2'] = 'impossibile spostarsi nella cartella {DIR}';

$lang['xs_ftp_config'] = 'Configurazione FTP';
$lang['xs_ftp_select_method'] = 'specifica il metodo di upload';
$lang['xs_ftp_select_local'] = 'File sistem locale (nessuna configurazione necessaria)';
$lang['xs_ftp_select_ftp'] = 'FTP (impostazione parametri da specificare di seguito)';

$lang['xs_ftp_settings'] = 'Impostazioni FTP ';
$lang['xs_ftp_host'] = 'Host FTP ';
$lang['xs_ftp_login'] = 'Login FTP ';
$lang['xs_ftp_path'] = 'FTP : percorso Icy Phoenix';
$lang['xs_ftp_pass'] = 'FTP: Password';
$lang['xs_ftp_remotedir'] = 'Directory Remota';

$lang['xs_ftp_host_guess'] = ' (probabilmente "{HOST}" [<a href="javascript: void(0)" onclick="{CLICK}">imposta host</a>])';
$lang['xs_ftp_login_guess'] = ' (probabilmente "{LOGIN}" [<a href="javascript: void(0)" onclick="{CLICK}">imposta host</a>])';
$lang['xs_ftp_path_guess'] = ' (probabilmente "{PATH}" [<a href="javascript: void(0)" onclick="{CLICK}">imposta percorso</a>])';


/*
* config.tpl
*/

$lang['xs_config_updated'] = 'Configurazione aggiornata.';
$lang['xs_config_updated_explain'] = 'Devi aggiornare questa pagina prima che le variazioni alla configurazione siano attive. <a href="{URL}">Clicca qui</a> per aggiornare la pagina.';
$lang['xs_config_warning'] = 'Attenzione: impossibile scrivere nella cache.';
$lang['xs_config_warning_explain'] = 'La cartella della cache non ha i diritti di scrittura. Il mod eXtreme style prover&agrave; a risolvere il problema.<br /><a href="{URL}">Clicca qui</a> per provare a modificare i diritti di scrittura della directory.<br /><br />Se per qualche motivo la cache non dovesse funzionare nel tuo server, per qualsiasi ragione, non preoccuparti : eXtreme style <br />aumenta la velocit&agrave; del forum anche senza la cache.';

$lang['xs_config_maintitle'] = 'Configurazione eXtreme style mod';
$lang['xs_config_subtitle'] = 'Questa &egrave; la configurazione di eXtreme style. Se non conosci la funzione di determinate variabili non modificarle.';
$lang['xs_config_title'] = 'Impostazione eXtreme style mod v{VERSION} ';
$lang['xs_config_cache'] = 'Configurazione Cache';

$lang['xs_config_navbar'] = 'Mostra le opzioni a sinistra:';
$lang['xs_config_navbar_explain'] = 'Scegli quali funzioni vuoi che siano accessibili nel frame a sinistra <br />(riferito al pannello di controllo di amministrazione di Icy Phoenix).';

$lang['xs_config_def_template'] = 'Cartella template predefinita';
$lang['xs_config_def_template_explain'] = 'Se un template (file.tpl) non &egrave; disponibile nella cartella corrente (p.e. per una incorretta impostazione di un mod) allora il sistema del template cercher&agrave; lo stesso file in questa cartella. Se non vuoi che questa opzione sia attiva lasciate vuota la casella.';

$lang['xs_config_check_switches'] = 'Parametri di controllo durante la compilazione';
$lang['xs_config_check_switches_explain'] = 'Questa opzione controlla gli errori nei template. Se impostata su Off, la compilazione si velocizzer&agrave; ma il compilatore potrebbe saltare degli errori nel template.<br /><br />L\'opzione "Smart Check" controller&agrave; i template per gli errori e corregger&agrave; automaticamente gli errori (presenza di typos in mods diversi). La velocit&agrave; di compilazione sar&agrave; inferiore all\'opzione "Simple Check".<br /><br />Qualche volta il template verr&agrave; visualizzato correttamente quando il controllo errori &egrave; disattivato. Questo avviene a causa di errori nella codifica html (la soluzione &egrave; quella di contattare l\'autore del template per risolvere il problema). Se l\'opzione cache non &egrave; attiva, allora impostala ad off per una compilazione pi&ugrave; veloce.';
$lang['xs_config_check_switches_0'] = 'Off';
$lang['xs_config_check_switches_1'] = 'Smart check';
$lang['xs_config_check_switches_2'] = 'Simple check';

$lang['xs_config_show_errors'] = 'Mostra gli errori quando i file sono inseriti non correttamente nei files tpl';
$lang['xs_config_show_error_explain'] = 'Questa opzione abilita/disabilita la visualizzazione di errori nei files.tpl quando l\'utente utilizza incorrettamente la funzione &lt;!-- INCLUDE filename --&gt;';

$lang['xs_config_tpl_comments'] = 'Mostra il nome del file tpl in html';
$lang['xs_config_tpl_comments_explain'] = 'Questa funzione aggiunge un commento al codice html che permette agli sviluppatori dei temi di individuare quale file tpl &egrave; visualizzato.';

$lang['xs_config_use_cache'] = 'Usa cache';
$lang['xs_config_use_cache_explain'] = 'La cache &egrave; memorizzata nel disco e render&agrave; pi&ugrave; veloce il sistema dei template non rendendo necessaria la compilazione del template stesso ogni volta che questo viene richiamato.';

$lang['xs_config_auto_compile'] = 'Salvataggio automatico cache';
$lang['xs_config_auto_compile_explain'] = 'Questa opzione permetter&agrave; la compilazione di quei template che non sono presenti nella cache.';

$lang['xs_config_auto_recompile'] = 'Ricompilazione automatica cache';
$lang['xs_config_auto_recompile_explain'] = 'Questa opzione forzer&agrave; l\'aggiornamento dei files nella cache quando un template viene modificato.';

$lang['xs_config_php'] = 'Estensione dei file nella cache';
$lang['xs_config_php_explain'] = 'Questa &egrave; l\'estensione dei file memorizzati nella cache. I file sono memorizzati in formato php da cui l\'estensione predefinita sar&agrave; "php". Non includere i punti';

$lang['xs_config_back'] = '<a href="{URL}">cliccare qui</a> per ritornare alla configurazione.';
$lang['xs_config_sql_error'] = 'Non &egrave; stato possibile aggiornare la configurazione di {VAR}';

// Debug info
$lang['xs_debug_header'] = 'Debug info';
$lang['xs_debug_explain'] = 'Queste sono le informazioni di debug. Esse vengono utilizza per trovare e risolvere problemi durante la configurazione della cache.';
$lang['xs_debug_vars'] = 'Variabili template';
$lang['xs_debug_tpl_name'] = 'Nome file Template:';
$lang['xs_debug_cache_filename'] = 'Nome file Cache:';
$lang['xs_debug_data'] = 'Debug data:';

$lang['xs_check_hdr'] = 'Controllo cache %s';
$lang['xs_check_filename'] = 'errore: nome file non valido';
$lang['xs_check_openfile1'] = 'errore: impossibile aprire il file "%s". Tentativo di creazione cartella in corso...';
$lang['xs_check_openfile2'] = 'errore: impossibile aprire il file "%s" per la seconda volta. Annullamento operazione...';
$lang['xs_check_nodir'] = 'Verifica "%s" - cartella inesistente.';
$lang['xs_check_nodir2'] = 'errore: impossibile creare la cartella "%s" - verifica i permessi.';
$lang['xs_check_createddir'] = 'Directory "%s" creata';
$lang['xs_check_dir'] = 'Verifica "%s" - la cartella esiste.';
$lang['xs_check_ok'] = 'Il file "%s" &egrave; accessibile in scrittura. Nessun problema rilevato.';
$lang['xs_error_demo_edit'] = 'non puoi modicare i file in modalit&agrave; demo';
$lang['xs_error_not_installed'] = 'Il mod eXtreme Styles non &egrave; installato. Hai dimenticato di effettuare l\'upload del file includes/template.php';


/*
* chmod
*/

$lang['xs_chmod'] = 'CHMOD';
$lang['xs_chmod_return'] = '<br /><br /><a href="{URL}">Clicca qui</a> per ritornare alla configurazione.';
$lang['xs_chmod_message1'] = 'Configurazione modificata.';
$lang['xs_chmod_error1'] = 'Impossibile modificare i diritti di accesso alla cartella';


/*
* default Stile
*/

$lang['xs_def_title'] = 'Imposta Stile predefinito';
$lang['xs_def_explain'] = 'Questa opzione ti permette di modificare velocemente lo stile predefinito ed inoltre permette di modificare lo stile utilizzato dagli utenti.';

$lang['xs_styles_set_default'] = 'imposta predefinito';
$lang['xs_styles_no_override'] = 'non annullare opzioni utente';
$lang['xs_styles_do_override'] = 'annulla opzioni utente';
$lang['xs_styles_switch_all'] = 'imposta questo Stile per tutti gli utenti';
$lang['xs_styles_switch_all2'] = 'imposta tutti gli utenti su:';
$lang['xs_styles_defstyle'] = ' Stile predefinito';
$lang['xs_styles_available'] = 'Stili disponibili';
$lang['xs_styles_make_public'] = 'Imposta Stile come pubblico';
$lang['xs_styles_make_admin'] = 'Imposta Stile come riservato ad admin';
$lang['xs_styles_users'] = 'Lista utenti';


/*
* cache management
*/

$lang['xs_manage_cache_explain2'] = 'Questa opzione ti permette di compilare o rimuovere i files dalla cache degli stili.';
$lang['xs_clear_all_lc'] = 'svuota tutti';
$lang['xs_compile_all_lc'] = 'compila tutti';
$lang['xs_clear_cache_lc'] = 'svuota cache';
$lang['xs_compile_cache_lc'] = 'compila cache';
$lang['xs_cache_confirm'] = 'Se il numero degli stili installati &egrave; elevato l\'operazione potrebbe causare un carico eccessivo sul server. Sei sicuro di voler continuare?';

$lang['xs_cache_nowrite'] = 'errore: impossibile accedere alla cartella della cache ';
$lang['xs_cache_log_deleted'] = '{FILE} cancellato';
$lang['xs_cache_log_nodelete'] = 'errore: impossibile cancellare il file {FILE}';
$lang['xs_cache_log_nothing'] = 'Nulla da cancellare per il template {TPL}';
$lang['xs_cache_log_nothing2'] = 'Nulla da cancellare nella cache directory';
$lang['xs_cache_log_count'] = '{NUM} file cancellati';
$lang['xs_cache_log_count2'] = 'Errore durante la cancellazione di {NUM} file';
$lang['xs_cache_log_compiled'] = '{NUM} file compilati';
$lang['xs_cache_log_errors'] = 'Errori: {NUM}';
$lang['xs_cache_log_noaccess'] = 'errore: impossibile accedere alla cartella {DIR}';
$lang['xs_cache_log_compiled2'] = 'Compilato: {FILE}';
$lang['xs_cache_log_nocompile'] = 'Errore durante la compilazione : {FILE}';

/*
* export/import/download/clone
*/

$lang['xs_import_explain'] = 'Tramite questa opzione puoi importare gli stili. Puoi inoltre installare e/o aggiornare gli stili.<br /><br />N.B. Se hai inserito dei mod (con esclusione di eXtreme style mod ) devi fare attenzione quando importai degli stili perch&egrave; potrebbero risultare incompatibili con il forum. Puoi installare solo stili che abbiano le stesse modifiche che hai apportato al tuo forum.';

$lang['xs_import_lc'] = 'importa';
$lang['xs_list_files_lc'] = 'lista file';
$lang['xs_delete_file_lc'] = 'cancella file';
$lang['xs_export_style_lc'] = 'esporta Stile ';

$lang['xs_import_no_cached'] = 'Nessuno Stile &egrave; presente nella cache. Impossibile importare';
$lang['xs_add_styles'] = 'Aggiungi stili';
$lang['xs_add_styles_web'] = 'Scarica da web';
$lang['xs_add_styles_web_get'] = 'Carica';
$lang['xs_add_styles_copy'] = 'Copia da file locale';
$lang['xs_add_styles_copy_get'] = 'Copia';
$lang['xs_add_styles_upload'] = 'Upload dal computer';
$lang['xs_add_styles_upload_get'] = 'Upload';

$lang['xs_export_style'] = 'Esporta Stile ';
$lang['xs_export_style_explain'] = 'Questa opzione ti permette di esportare uno Stile in un singolo file. Questo file &egrave; di piccole dimensione - inferiore ad un file.zip (il file &egrave; compresso con gzip e tutti gli stili sono inclusi in un singolo file. In questo modo &egrave; molto pi&ugrave; facile trasferire stili da un forum ad un altro <br /><br />Questa opzione ti permette di effettuare l\'upload degli stili utilizzando un server ftp senza copiare manualmente tutti i file.';

$lang['xs_export_style_title'] = 'Esporta template "{TPL}"';
$lang['xs_export_tpl_name'] = 'Esporta come (template name)';
$lang['xs_export_style_names'] = 'Seleziona Stile (i) da esportare';
$lang['xs_export_style_name'] = ' Stile da esportare (nome Stile )';
$lang['xs_export_style_comment'] = 'Commento';
$lang['xs_export_where'] = 'Dove esportare';
$lang['xs_export_where_download'] = 'Scarica come file';
$lang['xs_export_where_store'] = 'Memorizza come file nel server';
$lang['xs_export_where_store_dir'] = 'Directory';
$lang['xs_export_where_ftp'] = 'Upload via FTP';
$lang['xs_export_filename'] = 'Esporta nome file';

$lang['xs_download_explain2'] = 'Questa opzione ti permette di effettuare il download (e l\'installazione) di Stili da siti web esterni. Clicca sul link accanto al nome del sito web e sarai reindirizzato alla gestione del download degli stili.<br /><br />Puoi inoltre gestire l\'elenco dei siti web che contengono stili.';

$lang['xs_download_locations'] = 'Posizione Download ';
$lang['xs_edit_link'] = 'Modifica Link';
$lang['xs_add_link'] = 'Aggiungi Link';
$lang['xs_link_title'] = 'Titolo Link';
$lang['xs_link_url'] = 'URL Link';
$lang['xs_delete'] = 'Cancella';

$lang['xs_style_header_error_file'] = 'Impossibile aprire il file locale';
$lang['xs_style_header_error_server'] = 'Errore nel server: ';
$lang['xs_style_header_error_invalid'] = 'File header non valido';
$lang['xs_style_header_error_reason'] = 'Errore durante la lettura del file header: ';
$lang['xs_style_header_error_incomplete'] = 'Il File &egrave; incompleto';
$lang['xs_style_header_error_incomplete2'] = 'Dimensione file non corretta. Probabilmente il file non &egrave; completo.';
$lang['xs_style_header_error_invalid2'] = 'File non valido. Probabilmente il file non &egrave; compatibile con eXtreme style o la versione non &egrave; valida.';
$lang['xs_error_cannot_open'] = ' impossibile aprire il file.';
$lang['xs_error_decompress_style'] = 'Errore decompressione file. Probabilmente il file &egrave; corrotto.';
$lang['xs_error_cannot_create_file'] = 'Impossibile creare il file "{FILE}"';
$lang['xs_error_cannot_create_tmp'] = 'Impossibile creare il file temporaneo "{FILE}"';
$lang['xs_import_invalid_file'] = 'File non valido ';
$lang['xs_import_incomplete_file'] = 'File incompleto';
$lang['xs_import_uploaded'] = ' Stile uploadato.';
$lang['xs_import_installed'] = ' Stile uploadato ed installato.';
$lang['xs_import_notinstall'] = ' Stile uploadato , ma sono stati rilevati errori durante l\'installazione dello Stile (errore sql).';
$lang['xs_import_notinstall2'] = ' Stile uploadato , ma sono stati rilevati errori durante l\'installazione dello Stile : nessuno Stile presente in theme_info.cfg';
$lang['xs_import_notinstall3'] = ' Stile uploadato , ma sono stati rilevati errori durante l\'installazione dello Stile : nessuna voce relativa a "{STYLE}" nel file theme_info.cfg';
$lang['xs_import_notinstall4'] = ' Stile uploadato , ma sono stati rilevati errori durante l\'installazione dello Stile : impossibile ottenere informazioni sui temi in themes_id';
$lang['xs_import_notinstall5'] = ' Stile uploadato , ma sono stati rilevati errori durante l\'installazione dello Stile : impossibile aggiornare la tabella stili';
$lang['xs_import_nodownload'] = 'Impossibile effettuare il download da {URL}';
$lang['xs_import_nodownload2'] = 'Impossibile copiare lo Stile da {URL}';
$lang['xs_import_nodownload3'] = 'Il file non &egrave; stato uploadato.';
$lang['xs_import_uploaded2'] = ' Stile downloadato. Ora Puoi importarlo.<br /><br /><a href="{URL}">Clicca qui</a> per importare lo Stile.';
$lang['xs_import_uploaded3'] = ' Stile copiato. Ora Puoi importarlo.<br /><br /><a href="{URL}">Clicca qui</a> per importare lo Stile.';
$lang['xs_import_uploaded4'] = ' Stile uploadato. Ora Puoi importarlo.<br /><br /><a href="{URL}">Clicca qui</a> per importare lo Stile.';
$lang['xs_export_no_open_dir'] = 'Impossibile aprire la cartella {DIR}';
$lang['xs_export_no_open_file'] = 'Impossibile aprire il file {FILE}';
$lang['xs_export_no_read_file'] = 'Impossibile aprire il {FILE}';
$lang['xs_no_theme_data'] = 'Impossibile ottenere informazioni di Stile dal template selezionato';
$lang['xs_no_style_info'] = 'Impossibile ottenere informazioni sullo Stile ';
$lang['xs_export_noselect_themes'] = 'Devi selezionare almeno un Stile ';
$lang['xs_export_error'] = 'Impossibile esportare il template "{TPL}": ';
$lang['xs_export_error2'] = 'Impossibile esportare il template "{TPL}": Stile vuoto';
$lang['xs_export_saved'] = ' Stile memorizzato come "{FILE}"';
$lang['xs_export_error_uploading'] = 'Errore durante l\'upload del file';
$lang['xs_export_uploaded'] = 'File uploadato.';
$lang['xs_clone_taken'] = 'Il nome dello Stile &egrave; gi&agrave; in uso.';
$lang['xs_error_new_row'] = 'Non puoi inserire una colonna nella tabella.';
$lang['xs_theme_cloned'] = ' Stile clonato.';
$lang['xs_invalid_style_name'] = 'Nome Stile non valido.';
$lang['xs_clone_style_exists'] = 'Il template esiste gi&agrave;';
$lang['xs_clone_no_select'] = 'Devi selezionare almeno uno Stile da clonare.';
$lang['xs_no_themes'] = ' Stile non trovato nel database.';

$lang['xs_import_back'] = '<a href="{URL}">Clicca qui</a> per ritornare alla pagina di importazione stili.';
$lang['xs_import_back_download'] = '<a href="{URL}" target="main">Clicca qui</a> per ritornare ai download.';
$lang['xs_export_back'] = '<a href="{URL}">Clicca qui</a> per ritornare alla pagina di esportazione stili.';
$lang['xs_clone_back'] = '<a href="{URL}">Clicca qui</a> per ritornare alla pagina "clona Stile ".';
$lang['xs_download_back'] = '<a href="{URL}">Clicca qui</a> per ritornare alla pagina dei download.';

$lang['xs_import_tpl'] = 'Importa Template "{TPL}"';
$lang['xs_import_tpl_comment'] = 'Questa opzione effettuer&agrave; l\'upload nel tuo forum. Se il template &egrave; gi&agrave; esistente questa opzione sovrascriver&agrave; automaticamente i file esistenti in modo da poter utilizzare la funzione anche per l\'aggiornamento degli stili.<br /><br />Questa opzione installer&agrave; automaticamente anche gli stili. Se vuoi installare uno Stile dopo l\'importazione seleziona uno o pi&ugrave; stili di seguito.';
$lang['xs_import_tpl_filename'] = 'Nome file:';
$lang['xs_import_tpl_tplname'] = 'Nome Template :';
$lang['xs_import_tpl_comment2'] = 'Commento:';
$lang['xs_import_select_styles'] = 'Seleziona Stile (i) da installare:';
$lang['xs_import_install_def_lc'] = 'imposta come Stile predefinito';
$lang['xs_import_install_style'] = 'Installa Stile :';
$lang['xs_import'] = 'Importa';

$lang['xs_import_list_contents'] = 'Contenuto del file ';
$lang['xs_import_list_filename'] = 'Nome del file: ';
$lang['xs_import_list_template'] = 'Template: ';
$lang['xs_import_list_comment'] = 'Commento: ';
$lang['xs_import_list_styles'] = ' Stile (i): ';
$lang['xs_import_list_files'] = 'File ({NUM}):';
$lang['xs_import_download_lc'] = 'download file';
$lang['xs_import_view_lc'] = 'visualizza file';
$lang['xs_import_file_size'] = '({NUM} bytes)';

$lang['xs_import_nogzip'] = 'Questa funzione richiede la compressione gzip che sembra non attiva in questo server.';
$lang['xs_import_nowrite_cache'] = 'Impossibile scrivere nella cache. Questa funzione richiede che la cartella sia accessibile in scrittura. verifica la configurazione del mod.<br /><br /><a href="{URL1}">Clicca qui</a> per impostare l\'accesso in scrittura.<br /><br /><a href="{URL2}">Clicca qui</a> per ritornare alla pagina di importazione.';

$lang['xs_import_download_warning'] = 'Verrai indirizzato verso un sito esterno in cui potrai effettuare il download degli Stile in pochi click, grazie alla funzione importa di eXtreme style.';

$lang['xs_clone_style'] = 'Clona Stile ';
$lang['xs_clone_style_explain'] = 'Questa opzione ti permette di clonare velocemente lo stile o l\'intero template.<br /><br />Attenzione. Se stai copiando un template assicurati che l\'autore del template originale ti permetta di fare ci&ograve; (se il template non &egrave; subSilver). Generalmente l\'autore permette la modifica del template ma non la distribuzione.';
$lang['xs_clone_style_explain2'] = 'Questa opzione ti permette di creare un nuovo stile per un template. Questa opzione non copier&agrave; nessun file - aggiunger&agrave; delle voci nel database per il tuo nuovo stile. Entrambi gli stili (vecchio e nuovo) condivideranno lo stesso template.';
$lang['xs_clone_style_explain3'] = 'Imposta il nome del nuovo Stile che vuoi creare e clicca su "clona".';
$lang['xs_clone_style_explain4'] = 'Questa opzione ti permette di clonare un template. Puoi inoltre copiare tutti gli stili associati con il template. In seguito Potrai modificare i files tpl per il nuovo template senza modificare il vecchio.';

$lang['xs_clone_style_lc'] = 'Clona Stile ';
$lang['xs_clone_style2'] = 'Clona Stile "{STYLE}":';
$lang['xs_clone_style3'] = 'Clona Template "{STYLE}"';
$lang['xs_clone_newdir_name'] = 'Nome nuovo template (directory):';
$lang['xs_clone_select'] = 'Seleziona Stile(i) da clonare:';
$lang['xs_clone_select_explain'] = 'Devi selezionare almeno uno stile.';
$lang['xs_clone_newname'] = 'Nome per il nuovo Stile:';


/*
* install/uninstall
*/
$lang['xs_install_styles_explain2'] = 'Quello che segue &egrave; un elenco di stili che sono stati uploadati nel tuo forum ma non sono installati. Clicca sul link "installa" associato allo stile che vuoi installare, o seleziona diversi stili e clicca sul pulsante invia.';
$lang['xs_uninstall_styles_explain2'] = 'Quello che segue &egrave; un elenco di stili installati nel tuo forum. Clicca sul link "disinstalla" per rimuovere qualche stile dal forum. La disinstallazione non dovrebbe creare danni - tutti gli utenti che utilizzano questo stile avranno assegnato lo stile predefinito del forum. Inoltre la disinstallazione canceller&agrave; automaticamente la cache dello stile.';

$lang['xs_install'] = 'Installa';
$lang['xs_install_lc'] = 'installa';
$lang['xs_uninstall'] = 'Disinstalla';
$lang['xs_remove_files'] = 'Rimuovi file';
$lang['xs_style_removed'] = ' Stile rimosso.';
$lang['xs_uninstall_lc'] = 'disinstalla';
$lang['xs_uninstall2_lc'] = 'disinstalla e cancella file';

$lang['xs_install_back'] = '<a href="{URL}">Clicca qui</a> per ritornare all\'installazione stili.';
$lang['xs_uninstall_back'] = '<a href="{URL}">Clicca qui</a> per ritornare alla disinstallazione stili.';
$lang['xs_goto_default'] = '<a href="{URL}">Clicca qui</a> per modificare lo stile predefinito.';

$lang['xs_install_installed'] = 'Stile(i) installati.';
$lang['xs_install_error'] = 'Errore durante l\'installazione dello Stile.';
$lang['xs_install_none'] = 'Non ci sono nuovi stili da installare. Tutti gli stili disponibili sono installati.';

$lang['xs_uninstall_default'] = 'Non puoi rimuovere lo stile predefinito. Per modificare lo stile predefinito <a href="{URL}">Clicca qui</a>.';

/*
* export theme_info.cfg
*/
$lang['xs_export_styles_data_explain2'] = 'Questa opzione memorizza i dati dello Stile nel file theme_info.cfg. Ci&ograve; pu&ograve; essere utile prima di trasferire uno stile da un forum ad un altro. <br /><br />N. B. Puoi continuare ad utilizzare la funzione di esportazione stili di eXtreme style per copiare uno stile in un altro forum e, in tale caso, il salvataggio delle informazioni verr&agrave; fatto automaticamente.';
$lang['xs_export_styles_data_explain3'] = 'seleziona lo stile che vuoi esportare.';

$lang['xs_export_data_back'] = '<a href="{URL}">Clicca qui</a> per ritornare alla pagina di esportazione stili.';
$lang['xs_export_style_data_lc'] = 'Esporta dati Stile ';

$lang['xs_export_data_saved'] = 'Dati esportati.';

/*
* edit templates (file manager)
*/
$lang['xs_edit_template_comment1'] = 'Questa opzione ti permette di modificare i template. Il file browser mostra solo i file modificabili.';
$lang['xs_edit_template_comment2'] = 'Questa opzione ti permette la modifica dei template.';
$lang['xs_edit_file_saved'] = 'File memorizzato.';
$lang['xs_edit_not_found'] = 'File non trovato.';
$lang['xs_edittpl_back_dir'] = '<a href="{URL}">Clicca qui</a> per ritornare alla gestione file.';

$lang['xs_fileman_browser'] = 'File Browser';
$lang['xs_fileman_directory'] = 'Directory:';
$lang['xs_fileman_dircount'] = 'Directory ({COUNT}):';
$lang['xs_fileman_filter'] = 'Filtro';
$lang['xs_fileman_filter_ext'] = 'Mostra i file con estensione:';
$lang['xs_fileman_filter_content'] = 'Mostra i file contenenti:';
$lang['xs_fileman_filter_clear'] = 'Cancella filtro';
$lang['xs_fileman_filename'] = 'Nome file';
$lang['xs_fileman_filesize'] = 'Dimensione';
$lang['xs_fileman_filetime'] = 'Modifiche';
$lang['xs_fileman_options'] = 'Opzioni';
$lang['xs_fileman_time_today'] = '(oggi)';
$lang['xs_fileman_edit_lc'] = 'modifica';

$lang['xs_fileedit_search_nomatch'] = 'nessun risultato';
$lang['xs_fileedit_search_match1'] = 'Sostituita un occorrenza';
$lang['xs_fileedit_search_matches'] = "Sostituite ' + count + ' occorrenze";
$lang['xs_fileedit_noundo'] = 'Nessuna operazione da annullare';
$lang['xs_fileedit_undo_complete'] = 'Ripristinati i vecchi valori';
$lang['xs_fileedit_edit_name'] = 'Modifica file:';
$lang['xs_fileedit_location'] = 'Posizione:';
$lang['xs_fileedit_reload_lc'] = 'ricarica file';
$lang['xs_fileedit_download_lc'] = 'scarica file';
$lang['xs_fileedit_trim'] = 'Rimuovi automaticamente gli spazi all\'inizio e alla fine del file.';
$lang['xs_fileedit_functions'] = 'Modifica funzioni';
$lang['xs_fileedit_replace1'] = 'Sostituisci ';
$lang['xs_fileedit_replace2'] = ' con ';
$lang['xs_fileedit_replace_first_lc'] = 'Sostituisci la prima occorrenza';
$lang['xs_fileedit_replace_all_lc'] = 'Sostituisci tutto';
$lang['xs_fileedit_replace_undo_lc'] = 'annulla sostituzione';
$lang['xs_fileedit_backups'] = 'Backups';
$lang['xs_fileedit_backups_save_lc'] = 'salva backup';
$lang['xs_fileedit_backups_show_lc'] = 'mostra contenuti';
$lang['xs_fileedit_backups_restore_lc'] = 'ripristina';
$lang['xs_fileedit_backups_download_lc'] = 'download';
$lang['xs_fileedit_backups_delete_lc'] = 'cancella';
$lang['xs_fileedit_upload'] = 'Upload';
$lang['xs_fileedit_upload_file'] = 'Upload file:';

/*
* edit style data (theme_info)
*/
$lang['xs_data_head_stylesheet'] = 'Foglio di stile CSS ';
$lang['xs_data_body_background'] = 'Immagine di sfondo';
$lang['xs_data_body_bgcolor'] = 'Colore di sfondo';
$lang['xs_data_style_name'] = 'Nome stile';
$lang['xs_data_body_link'] = 'Colore Link';
$lang['xs_data_body_text'] = 'Colore testo';
$lang['xs_data_body_vlink'] = 'Colore link visitato';
$lang['xs_data_body_alink'] = 'Colore link attivo';
$lang['xs_data_body_hlink'] = 'Colore Hover Link';
$lang['xs_data_tr_color'] = 'Colore riga tabella %s';
$lang['xs_data_tr_class'] = 'Classe riga tabella %s';
$lang['xs_data_th_color'] = 'Colore intestazione tabella %s';
$lang['xs_data_th_class'] = 'Classe intestazione tabella %s';
$lang['xs_data_td_color'] = 'Colore cella tabella %s';
$lang['xs_data_td_class'] = 'Classe cella tabella %s';
$lang['xs_data_fontface'] = 'Font Face %s';
$lang['xs_data_fontsize'] = 'Dimensione font %s';
$lang['xs_data_fontcolor'] = 'Colore font %s';
$lang['xs_data_span_class'] = 'Span Class %s';
$lang['xs_data_img_size_poll'] = 'Dimensione immagine sondaggio [px]';
$lang['xs_data_img_size_privmsg'] = 'Dimensione Status Messaggio Privato[px]';
$lang['xs_data_theme_public'] = 'Stile pubblico (1 or 0)';
$lang['xs_data_unknown'] = 'Descrizione non disponibile (%s)';

$lang['xs_edittpl_error_updating'] = 'Errore durante l\'aggiornamento dello Stile.';
$lang['xs_edittpl_style_updated'] = ' Stile aggiornato.';
$lang['xs_invalid_style_id'] = 'Stile id. non valido';

$lang['xs_edittpl_back_edit'] = '<a href="{URL}">Clicca qui</a> per ritornare alla modifica.';
$lang['xs_edittpl_back_list'] = '<a href="{URL}">Clicca qui</a> per ritornare all\'elenco degli stili.';

$lang['xs_editdata_explain'] = 'Questa opzione ti permette di modificare il database per gli stili installati. Alcuni stili ignorano le variabili del database ed utilizzano invece un file css ed altri utilizzando alcuni valori del database.';
$lang['xs_editdata_var'] = 'Variabile';
$lang['xs_editdata_value'] = 'Valore';
$lang['xs_editdata_comment'] = 'Commenti';

/*
* updates
*/

$lang['xs_updates'] = 'Aggiornamenti';
$lang['xs_updates_comment'] = 'Questa opzione verifica eventuali aggiornamenti per qualche stile o mod. Funziona solo con sezioni che presentano un\'opzione di aggiornamento rilevante.';
$lang['xs_updates_comment2'] = 'Questo &egrave; il risultato del check sulla versione.';
$lang['xs_update_total1'] = 'Totale: {NUM} voci';
$lang['xs_update_info1'] = 'Questa opzione amministrativa controller&agrave; per aggiornamenti disponibili di phpBB, di alcuni mod e di alcuni stili installati nel tuo forum. Se fossero presenti aggiornamenti verr&agrave; visualizzato il link tramite il quale sar&agrave; possibile scaricare l\'aggiornamento.<br /><br />Questa opzione richiede che i sockets siano attiio, cosa che potrebbe non avvenire in spazi web free (come lycos) rendendo indisponibile l\'aggiornamento.<br /><br />Quando cliccherai su  "continua", lo script controller&agrave; tutto il software installato nel forum. Se il tuo server &egrave; lento, potrebbe essere necessario molto tempo. Abbi pazienza e non Clicca "stop" nel tuo browser se il processo tarda. Se il server &egrave; lento (o lo &egrave; il sito da cui stai scaricando l\'aggiornamento) lo script potrebbe andare in timeout. Per evitare ci&ograve; aumenta il valore nell\'apposito campo.';
$lang['xs_update_name'] = 'Nome';
$lang['xs_update_type'] = 'Tipo';
$lang['xs_update_current_version'] = 'La tua versione';
$lang['xs_update_latest_version'] = 'Ultima versione';
$lang['xs_update_downloadinfo'] = 'Download URL';
$lang['xs_update_timeout'] = 'Timeout script di aggiornamento(secondi):';
$lang['xs_update_continue'] = 'Continua';


$lang['xs_update_total2'] = 'Errori: {NUM}';
$lang['xs_update_total3'] = 'Aggiornamenti disponibili: {NUM}';
$lang['xs_update_select1'] = 'seleziona la voce da aggiornare';
$lang['xs_update_types'] = array(
		0 => 'Sconosciuto',
		1 => 'Stile',
		2 => 'Mod',
		3 => 'phpBB',
		4 => 'Icy Phoenix'
		);
$lang['xs_update_fileinfo'] = 'Ulteriori informazioni';
$lang['xs_update_nothing'] = 'Non c\'&egrave; nulla da aggiornare.';
$lang['xs_update_noupdate'] = 'Ultima versione gi&agrave; in uso.';

$lang['xs_update_error_url'] = 'errore: impossibile recuperare l\'Url %s';
$lang['xs_update_error_noitem'] = 'errore: nessuna informazione di aggiornamento disponibile';
$lang['xs_update_error_noconnect'] = 'errore: impossibile connettersi al server per l\'aggiornamento';

$lang['xs_update_download'] = 'download';
$lang['xs_update_downloadinfo2'] = 'download/info';
$lang['xs_update_info'] = 'sito web';

$lang['xs_permission_denied'] = 'Permesso negato';

$lang['xs_download_lc'] = 'download';
$lang['xs_info_lc'] = 'info';

/*
* style configuration
*/
$lang['Template_Config'] = 'Configurazione template';
$lang['xs_style_configuration'] = 'Configurazione template';


?>
