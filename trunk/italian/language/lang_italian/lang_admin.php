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
	'General' => 'Generale',
	'Users' => 'Utenti',
	'Groups' => 'Gruppi',
	'Forums' => 'Forum',
	'Styles' => 'Stili',

	'Configuration' => 'Impostazioni',
	'Various_Configuration' => 'Impostazioni Varie',
	'Permissions' => 'Permessi',
	'Manage' => 'Gestione',
	'manage' => 'Gestione',
	'Disallow' => 'Disabilita Nomi',
	'Prune' => 'Pruning',
	'Mass_Email' => 'Email Generali',
	'Ranks' => 'Livelli',
	'Smilies' => 'Smileys',
	'Ban_Management' => 'Ban Control',
	'Word_Censor' => 'Censura Parole',
	'Export' => 'Esporta',
	'Create_new' => 'Crea',
	'Add_new' => 'Aggiungi',
	'Backup_DB' => 'Backup Database',
	'Restore_DB' => 'Ripristina Database',
	'DB_Maintenance' => 'Database',
	'Ban_Management' => 'Gestione Ban',
	'News Admin' => 'News',
	'Security' => 'Sicurezza',
	'Member Tries' => 'Tenatativi Membri',
	'quick Search' => 'Ricerca Rapida',
	'Special' => 'Speciale',
	'Styles_Management' => 'Gestione Stili',
	'Manage_Bots' => 'Gestione Bots',
	'Admin Notepad' => 'Blocco Note',


// Index
	'Admin' => 'Amministrazione',
	'Not_admin' => 'Non sei autorizzato ad Amministrare questo Forum',
	'Welcome_IP' => 'Benvenuto in Icy Phoenix',
	'Admin_intro' => 'Grazie per aver scelto Icy Phoenix come CMS. Questa schermata mostra alcune Statistiche del tuo Sito. Puoi tornare a questa pagina cliccando sul link <u>ACP</u> in cima alla pagina. Per tornare all\'indice del tuo forum, clicca sul link <u>Forum</u> in cima alla pagina. Gli altri collegamenti nella parte sinistra dello schermo ti permettono di controllare diversi aspetti del tuo Sito, in tutte le schermate avrai le informazioni su come usare al meglio le varie funzioni. Per maggiori info e supporto visita <a href="http://www.icyphoenix.com" target="_blank"><strong>icyphoenix.com</strong></a>.',
	'PayPalInfo' => 'Icy Phoenix &egrave; un progetto open source, se vuoi contribuire allo sviluppo puoi usare il link sottostante.',
	'Main_index' => 'Forum',
	'Site_Index' => 'Home Page',
	'Forum_stats' => 'Statistiche Sito',
	'Admin_Index' => 'ACP',
	'Preview_forum' => 'Anteprima Forum',
	'Portal' => 'Home Page',
	'Preview_Portal' => 'Anteprima Home Page',

	'Click_return_admin_index' => 'Clicca %sQUI%s per tornare alla pagina principale ACP',

	'Statistic' => 'Statistiche',
	'Value' => 'Valore',
	'Number_posts' => 'Numero di messaggi',
	'Posts_per_day' => 'Messaggi per giorno',
	'Number_topics' => 'Numero di argomenti',
	'Topics_per_day' => 'Argomenti per giorno',
	'Number_users' => 'Numero di utenti',
	'Users_per_day' => 'Utenti per giorno',
	'Board_started' => 'Forum attivato il',
	'Avatar_dir_size' => 'Dimensione directory Avatar',
	'Database_size' => 'Dimensione Database',
	'Gzip_compression' => 'Compressione Gzip',
	'Not_available' => 'Non disponibile',

	'ON' => 'ON', // This is for GZip compression
	'OFF' => 'OFF',


// DB Utils
	'Database_Utilities' => 'Utilit&agrave; Database',
	'Restore' => 'Ripristina',
	'Backup' => 'Backup',
	'Restore_explain' => 'Questa funzione ripristiner&agrave; tutte le tabelle da un file salvato. Se il tuo server lo supporta puoi caricare un file di testo con compressione Gzip e verr&agrave; automaticamente decompresso. <b>ATTENZIONE</b> Questa operazione sovrascriver&agrave; tutti i dati esistenti. L\'operazione di ripristino potrebbe impiegare molto tempo per essere completata. Non muoverti da questa pagina finch&eacute; l\'operazione non sar&agrave; completata.',
	'Backup_explain' => 'qui puoi fare il backup di tutti i dati del forum. Se hai delle tabelle personalizzate nello stesso database di cui vorresti fare il backup inserisci i nomi separati da virgole nel campo Tabelle Addizionali. Se il tuo server lo supporta puoi comprimere i files utilizzando Gzip per ridurre le loro dimensioni prima del download.',

// Start Optimize Database
	'Optimize' => 'Ottimizza',
	'Optimize_explain' => 'Da qui si possono ottimizzare i dati contenuti nelle tabelle del database. In questo modo puoi eliminare parte di dati che contengono spazi vuoti.<br />Questa operazione dovrebbe essere compiuta regolarmente in modo da rendere il tuo database affidabile e veloce nell\'esecuzione.',
	'Optimize_DB' => 'Ottimizza Database',
	'Optimize_Enable_cron' => 'Abilita Cron',
	'Optimize_Cron_every' => 'Cron Ogni',
	'Optimize_Cron_every_explain' => 'Per poter utilizzare questa funzione, ricorda che devi abilitare <b>PHP Cron [Global Switch]</b> in <b>ACP &raquo; Configurazione &raquo; Cron</b>',
	'Optimize_month' => 'Mese',
	'Optimize_2weeks' => '2 Settimane',
	'Optimize_week' => 'Settimana',
	'Optimize_3days' => '3 Giorni',
	'Optimize_day' => 'Giorno',
	'Optimize_6hours' => '6 Ore',
	'Optimize_hour' => 'ora',
	'Optimize_30minutes' => '30 minuti',
	'Optimize_20seconds' => '20 secondi (solo per test)',
	'Optimize_Current_time' => 'Ora Attuale',
	'Optimize_Next_cron_action' => 'Prossima Azione del Cron',
	'Optimize_Performed_Cron' => 'Cron Eseguito',
	'Optimize_Show_not_optimized' => 'Mostra solo tabelle non ottimizzate',
	'Optimize_Show_begin_for' => 'Mostra solo tabelle che iniziano per',
	'Optimize_Configure' => 'Configura',
	'Optimize_Table' => 'Tabella',
	'Optimize_Record' => 'Record',
	'Optimize_Type' => 'Tipo',
	'Optimize_Size' => 'Dimensione',
	'Optimize_Status' => 'Stato',
	'Optimize_CheckAll' => 'Seleziona Tutte',
	'Optimize_UncheckAll' => 'Deseleziona Tutte',
	'Optimize_InvertChecked' => 'Inverti Selezione',
	'Optimize_return' => 'Clicca %sQUI%s per tornare a Ottimizza Database',
	'Optimize_success' => 'Il Database &egrave; stato Ottimizzato con Successo',
	'Optimize_NoTableChecked' => '<b>Nessuna</b> Tabella Selezionata',
//End Optimize Database

	'Backup_options' => 'Opzioni Backup',
	'Start_backup' => 'Inizia Backup',
	'Full_backup' => 'Backup Completo',
	'Structure_backup' => 'Backup solo Struttura',
	'Data_backup' => 'Backup solo Dati',
	'Additional_tables' => 'Tabelle Addizionali',
	'phpBB_only' => 'Solo tabelle relative a Icy Phoenix',
	'Gzip_compress' => 'File di compressione Gzip',
	'Select_file' => 'Seleziona un file',
	'Start_Restore' => 'Inizia Ripristino',

	'Restore_success' => 'Il Database &egrave; stato ripristinato con successo.<br /><br />Il tuo Forum dovrebbe tornare allo stato che era al momento del backup.',
	'Backup_download' => 'Il tuo Download comincer&agrave; presto. Attendi...',
	'Backups_not_supported' => 'Spiacenti, il backup del database non pu&ograve; essere concluso, a causa della mancanza di permessi. Contatta il tuo WebHost.',

	'Restore_Error_uploading' => 'Errore nel caricamento del file di backup',
	'Restore_Error_filename' => 'Problema con il nome del file, provane uno alternativo.',
	'Restore_Error_decompress' => 'Non &egrave; possibile decomprimere un file Gzip, carica il file di testo.',
	'Restore_Error_no_file' => 'Nessun file &egrave; stato caricato',


// Auth pages
	'Select_a_User' => 'Seleziona un Utente',
	'Select_a_Group' => 'Seleziona un Gruppo',
	'Select_a_Forum' => 'Seleziona un Forum',
	'Auth_Control_User' => 'Controllo Permessi Utente',
	'Auth_Control_Group' => 'Controllo Permessi Gruppo',
	'Auth_Control_Forum' => 'Controllo Permessi Forum',
	'Auth_list_Control_Forum' => 'Controllo Permessi dei Forums',
	'Look_up_User' => 'Cerca Utente',
	'Look_up_Group' => 'Cerca Gruppo',
	'Look_up_Forum' => 'Cerca Forum',

	'Group_auth_explain' => 'In questa sezione puoi modificare i permessi e lo stato dei moderatori assegnati ad ogni gruppo. Non dimenticare che quando cambi i permessi di un gruppo, l\'utente potrebbe accedere comunque ai forum. Grazie ai suoi permessi individuali. In questo caso sarai avvisato.',
	'User_auth_explain' => 'In questa sezione puoi modificare i permessi e lo stato dei moderatori assegnati ad ogni utente individuale. Non dimenticare quando cambi i permessi di un utente i permessi del gruppo gli potrebbero permettere di accedere comunque ai forum. In questo caso sarai avvisato.',
	'Forum_auth_explain' => 'In questa sezione puoi modificare i livelli di autorizzazione per ogni forum. Puoi fare questo utilizzando una modalit&agrave; semplice e una modalit&agrave; avanzata. La modalit&agrave; avanzata offre maggior controllo per ogni operazione sui forum. Ricorda che cambiare i permessi dei forum mostrer&agrave; gli utenti che possono eseguire le varie operazioni nei forum.',
	'Forum_auth_list_explain' => 'In questa sezione puoi modificare i livelli di autorizzazione per ogni forum. Ricorda che modificare i permessi dei forum incider&agrave; su quali utenti possono eseguire le varie operazioni nei forum.',

	'Simple_mode' => 'Modalit&agrave; Semplice',
	'Advanced_mode' => 'Modalit&agrave; Avanzata',
	'Moderator_status' => 'Stato dei moderatori',

	'Allowed_Access' => 'Accessi Ammessi',
	'Disallowed_Access' => 'Accessi non Ammessi',
	'Is_Moderator' => 'E\' Moderatore',
	'Not_Moderator' => 'Non &egrave; Moderatore',

	'Conflict_warning' => 'Attenzione Conflitto di Autorizzazione',
	'Conflict_access_userauth' => 'Questo utente ha ancora diritti di accesso a questo forum per il suo gruppo di appartenenza. Potresti voler cambiare i permessi del gruppo o rimuovere questo utente dal gruppo per togliere completamente i suoi diritti di accesso. I diritti del gruppo (e i forum coinvolti) sono elencati qui sotto.',
	'Conflict_mod_userauth' => 'Questo utente ha ancora i diritti di moderatore a questo forum per il suo gruppo di appartenenza. Potresti voler cambiare i permessi del gruppo o rimuovere questo utente dal gruppo per togliere completamente i suoi diritti di moderatore. I diritti del gruppo (e i forum coinvolti) sono elencati qui sotto.',

	'Conflict_access_groupauth' => 'I seguenti utenti hanno ancora diritti di accesso a questo forum per le impostazioni dei permessi utenti. Potresti voler cambiare i permessi del gruppo o rimuovere questo utente dal gruppo per togliere completamente i suoi diritti di accesso. I diritti del gruppo (e i forum coinvolti) sono elencati qui sotto.',
	'Conflict_mod_groupauth' => 'I seguenti utenti hanno ancora i diritti di moderatore a questo forum per le impostazioni dei permessi utenti. Potresti voler cambiare i permessi del gruppo o rimuovere questo utente dal gruppo per togliere completamente i suoi diritti di moderatore. I diritti del gruppo (e i forum coinvolti) sono elencati qui sotto.',

	'Public' => 'Pubblico',
	'Private' => 'Privato',
	'Registered' => 'Registrato',
	'Self' => 'Propri',
	'Administrators' => 'Amministratori',
	'Hidden' => 'Nascosto',

// These are displayed in the drop down boxes for advanced mode forum auth, try and keep them short!
	'Forum_NONE' => 'NESSUNO',
	'Forum_ALL' => 'TUTTI',
	'Forum_REG' => 'REG',
	'Forum_SELF' => 'PROPRI',
	'Forum_PRIVATE' => 'PRIVATO',
	'Forum_MOD' => 'MOD',
	'Forum_JADMIN' => 'J ADMIN',
	'Forum_ADMIN' => 'ADMIN',

	'View' => 'Guarda',
	'Read' => 'Leggi',
	'Post' => 'Invia',
	'Reply' => 'Rispondi',
	'Edit' => 'Modifica',
	'Delete' => 'Elimina',
	'Sticky' => 'Importante',
	'Announce' => 'Annuncio',
	'Vote' => 'Vota',
	'Pollcreate' => 'Crea Sondaggio',

	'Simple_Permission' => 'Permesso Semplice',

	'User_Level' => 'Livello Utente',
	'Auth_User' => 'Utente',
	'Auth_Junior_Admin' => 'Amministratore Junior',
	'Auth_Admin' => 'Amministratore',
	'Group_memberships' => 'Membri gruppo utenti (in totale: %d)',
	'Usergroup_members' => 'Questo gruppo ha i seguenti membri (in totale: %d)',

	'Forum_auth_updated' => 'Permessi Forum Aggiornati',
	'User_auth_updated' => 'Permessi Utente Aggiornati',
	'Group_auth_updated' => 'Permessi Gruppo Aggiornati',

	'Auth_updated' => 'I permessi sono stati aggiornati',
	'Click_return_userauth' => 'Clicca %sQUI%s per tornare a Permessi Utenti',
	'Click_return_groupauth' => 'Clicca %sQUI%s per tornare a Permessi Gruppo',
	'Click_return_forumauth' => 'Clicca %sQUI%s per tornare a Permessi Forum',


// Banning
	'Ban_control' => 'Controllo Disabilitazione',
	'Ban_explain' => 'qui puoi controllare la disabilitazione degli utenti. Puoi disabilitare per utente specifico o un individuole, per intervallo di indirizzi IP o hostnames. Questi metodi impediscono all\'utente di raggiungere anche l\'indice del tuo forum. Per impedire ad un utente di registrarsi con uno username diverso puoi anche disabilitare un indirizzo email specifico. Nota che disabilitare solo un indirizzo email non eviter&agrave; che quell\'utente possa essere in grado di entrare o di inviare messaggi al tuo forum. Per questo devi usare uno dei primi due metodi.',
	'Ban_explain_warn' => 'Nota che inserendo un intervallo di indirizzi IP, nella disabilitazione verranno inclusi tutti gli indirizzi tra l\'inizio e la fine degli indirizzi. Verranno fatti dei tentativi per minimalizzare il numero degli indirizzi aggiunti al database introducendo abbreviazioni generate automaticamente in modo apprpopriato. Se davvero devi inserire un intervallo di indirizzi, prova a mantenerlo piccolo o meglio specifica un singolo indirizzo.',

	'Select_username' => 'Seleziona uno Username',
	'Select_ip' => 'Seleziona un indirizzo IP',
	'Select_email' => 'Seleziona un indirizzo Email',

	'Ban_username' => 'Disabilita uno o pi&ugrave; Utenti specifici',
	'Ban_username_explain' => 'Puoi disabilitare pi&ugrave; utenti con una sola operazione utilizzando l\'appropriata combinazione di mouse e tastiera per il tuo computer e browser',

	'Ban_IP' => 'Disabilita uno o pi&ugrave; indirizzi IP o hostname',
	'IP_hostname' => 'Indirizzo IP o hostname',
	'Ban_IP_explain' => 'Per specificare diversi indirizzi IP o hostname separali con virgole (,). Per specificare un intervallo di indirizzi IP separa l\'inizio dalla fine con un trattino (-), per specificare un\'abbreviazione usa (*)',

	'Ban_email' => 'Disabilita uno o pi&ugrave; indirizzi email',
	'Ban_email_explain' => 'Per specificare diversi indirizzi email separali con virgole (,). Per specificare una abbreviazione per gli username usa *, per esempio *@hotmail.com',

	'Unban_username' => 'Riabilita uno o pi&ugrave; utenti specifici',
	'Unban_username_explain' => 'Puoi riabilitare pi&ugrave; utenti con un unica operazione utilizzando l\'appropriata combinazione di mouse e tastiera per il tuo computer e browser',

	'Unban_IP' => 'Riabilita uno o pi&ugrave; indirizzi IP',
	'Unban_IP_explain' => 'Puoi riabilitare pi&ugrave; indirizzi IP con un unica operazione utilizzando l\'appropriata combinazione di mouse e tastiera per il tuo computer e browser',

	'Unban_email' => 'Riabilita uno o pi&ugrave; indirizzi email',
	'Unban_email_explain' => 'Puoi riabilitare pi&ugrave; indirizzi email con un unica operazione utilizzando l\'appropriata combinazione di mouse e tastiera per il tuo computer e browser',

	'No_banned_users' => 'Non ci sono username disabilitati',
	'No_banned_ip' => 'Non ci sono indirizzi IP disabilitati',
	'No_banned_email' => 'Non ci sono indirizzi email disabilitati',

	'Ban_update_sucessful' => 'La lista degli utenti disabilitati &egrave; stata aggiornata con successo',
	'Click_return_banadmin' => 'Clicca %sQUI%s per tornare a Controllo Disabilitazione',


// Configuration
	'General_Config' => 'Configurazione Generale',
	'Config_explain' => 'Il modulo qui sotto ti permette di personalizzare tutte le opzioni generali del Sito. Per la configurazione dei Forum e degli Utenti utilizza i collegamenti appropriati nel pannello di sinistra.',

	'Click_return_config' => 'Clicca %sQUI%s per tornare a Configurazione Generale',

	'General_settings' => 'Impostazioni Generali Sito',
	'Server_name' => 'Nome Dominio',
	'Server_name_explain' => 'Il nome del dominio in cui si trova il sito',
	'Script_path' => 'Percorso Cartella Icy Phoenix',
	'Script_path_explain' => 'Il percorso dove &egrave; situato Icy Phoenix relativo al nome di dominio',
	'Server_port' => 'Porta del Server',
	'Server_port_explain' => 'La porta del tuo server, di solito 80, cambia solo se &egrave; diversa',
	'Site_name' => 'Nome del Sito',
	'Site_desc' => 'Descrizione del Sito',
	'Board_disable' => 'Disabilita il Sito',
	'Board_disable_explain' => 'Questo render&agrave; il sito non disponibile per gli utenti. Non uscire dopo aver disabilitato il forum, altrimenti non sarai pi&ugrave; in grado di entrare di nuovo!',
	'Acct_activation' => 'Abilita l\'attivazione degli account',
	'Acc_None' => 'Nessuno', // These three entries are the type of activation
	'Acc_User' => 'Utente',
	'Acc_Admin' => 'Amministratore',

	'Abilities_settings' => 'Impostazioni base per Utenti e Sito',
	'Max_poll_options' => 'Numero massimo di opzioni per sondaggio',
	'Flood_Interval' => 'Intervallo del Flood',
	'Flood_Interval_explain' => 'Numero di secondi di attesa tra ogni messaggio',
	'Board_email_form' => 'Messaggistica email attraverso il sito',
	'Board_email_form_explain' => 'Gli utenti possono inviarsi email utilizzando il sito',
	'Topics_per_page' => 'Argomenti per pagina',
	'Posts_per_page' => 'Messaggi per pagina',
	'Hot_threshold' => 'Numero messaggi argomento popolare',
	'Default_style' => 'Stile di Default',
	'Override_style' => 'Annulla il tema dell\'utente',
	'Override_style_explain' => 'Sostituisce lo stile dell\'utente con quello di Default',
	'Default_language' => 'Linguaggio di Default',
	'Date_format' => 'Formato Data',
	'System_timezone' => 'Fuso Orario del Sistema',
	'Enable_gzip' => 'Abilita la Compressione GZip',
// Start Gzip Compression Level MOD
	'Gzip_level' => 'Livello di Compressione Gzip',
	'Gzip_level_explain' => 'Da qui puoi cambiare il livello di compressione (un numero tra 0-9). 0 &egrave; equivalente a disabilitato, 1 &egrave; molto basso, e 9 &egrave; il massimo. Si raccomanda 9.',
// End Gzip Compression Level MOD

	'Enable_prune' => 'Abilita il Pruning del Forum',
	'Allow_HTML' => 'Permetti HTML',
	'Allow_BBCode' => 'Permetti BBCode',
	'Allowed_tags' => 'Tags HTML Permessi',
	'Allowed_tags_explain' => 'Separa i tags con virgole',
	'Allow_smilies' => 'Permetti Smilies',
	'Smilies_path' => 'Percorso Salvataggio Smilies',
	'Smilies_path_explain' => 'Percorso principale directory Icy Phoenix, es. images/smilies',
	'Allow_sig' => 'Permetti Firma',
	'Max_sig_length' => 'Lunghezza massima firma',
	'Max_sig_length_explain' => 'Numero massimo di caratteri per la firma degli utenti',
	'Allow_name_change' => 'Permetti cambio Username',

	'Avatar_settings' => 'Impostazioni Avatar',
	'Allow_local' => 'Abilita Galleria Avatar',
	'Allow_remote' => 'Abilita Avatar remoti',
	'Allow_remote_explain' => 'Avatar linkati da un altro sito web',
	'Allow_upload' => 'Abilita il caricamento degli Avatar',
	'Max_avatar_filesize' => 'Dimensione massima File Avatar',
	'Max_avatar_filesize_explain' => 'Per i file Avatar caricati (in bytes)',
	'Max_avatar_size' => 'Dimensioni Massime Avatar',
	'Max_avatar_size_width' => 'Larghezza Massima Avatar',
	'Max_avatar_size_height' => 'Altezza Massima Avatar',
	'Max_avatar_size_explain' => 'Dimensioni in pixels',
	'Max_avatar_size_explain' => '(Altezza x Larghezza in pixels)',
	'Avatar_storage_path' => 'Percorso Salvataggio Avatar',
	'Avatar_storage_path_explain' => 'Percorso principale directory Icy Phoenix, es. images/avatars',
	'Avatar_gallery_path' => 'Percorso Galleria Avatar',
	'Avatar_gallery_path_explain' => 'Percorso principale directory Icy Phoenix per il per-caricamento delle immagini, es. images/avatars/gallery',

	'COPPA_settings' => 'Impostazioni Reg. Minore',
	'COPPA_fax' => 'Numero di Fax per Reg. Minore',
	'COPPA_mail' => 'Indirizzo per Reg. Minore',
	'COPPA_mail_explain' => 'Questo &egrave; l\'indirizzo al quale i genitori manderanno il modulo di registrazione Minore',

	'Email_settings' => 'Impostazioni Email',
	'Admin_email' => 'Indirizzo Email Amministratore',
	'Email_sig' => 'Firma Email',
	'Email_sig_explain' => 'Questo testo verr&agrave; allegato ad ogni email spedita dal Forum',
	'Use_SMTP' => 'Usa un Server SMTP per le email',
	'Use_SMTP_explain' => 'Rispondi s&igrave; se vuoi o devi inviare email attraverso un server specifico invece della funzione mail locale',
	'SMTP_server' => 'Indirizzo Server SMTP',
	'SMTP_port' => 'Porta SMTP',
	'SMTP_username' => 'Username SMTP',
	'SMTP_username_explain' => 'Compila il campo username soltanto se il server lo richiede',
	'SMTP_password' => 'Password SMTP',
	'SMTP_password_explain' => 'Compila il campo password soltanto se il server lo richiede',

	'Disable_privmsg' => 'Messaggi Privati',
	'Inbox_limits' => 'Numero massimo di messaggi per Posta in Arrivo',
	'Sentbox_limits' => 'Numero massimo di messaggi per Posta Inviata',
	'Savebox_limits' => 'Numero massimo di messaggi per Posta Salvata',

	'Cookie_settings' => 'Impostazioni Cookie',
	'Cookie_settings_explain' => 'Questo modulo controlla come vengono definiti i cookie inviati ai browser. In molti casi l\'impostazione di default &egrave; sufficiente. Se devi cambiare queste impostazioni fallo con attenzione, le impostazioni non corrette possono impedire agli utenti di entrare.',
	'Cookie_domain' => 'Dominio Cookie',
	'Cookie_name' => 'Nome Cookie',
	'Cookie_path' => 'Percorso Cookie',
	'Cookie_secure' => 'Cookie Sicuri',
	'Cookie_secure_explain' => 'Se il server funziona via SSL abilita questo altrimenti lascia disabilitato',
	'Session_length' => 'Lunghezza Sessione [ secondi ]',

// Visual Confirmation
	'Visual_confirm' => 'Abilita Conferma Visuale',
	'Visual_confirm_explain' => 'Richiede agli utenti di scrivere un codice definito da un\'immagine al momento della registrazione.',

// Autologin Keys - added 2.0.18
	'Allow_autologin' => 'Abilita login automatico',
	'Allow_autologin_explain' => 'Determina se gli utenti sono abilitati a selezionare login automatico',
	'Autologin_time' => 'Scadenza login automatico',
	'Autologin_time_explain' => 'Durata del login automatico espresso in giorni, se l\'utente non visita il sito. Impostando il valore a zero viene disabilitata la scadenza.',

// Forum Management
	'Forum_admin' => 'Amministrazione Forum',
	'Forum_admin_explain' => 'Da questo pannello puoi aggiungere, modificare, cancellare, riordinare e ri-sincronizzare le categorie e i forum',
	'Edit_forum' => 'Modifica forum',
	'Create_forum' => 'Crea un nuovo forum',
	'Create_category' => 'Crea una nuova categoria',
	'Remove' => 'Rimuovi',
	'Action' => 'Azione',
	'Update_order' => 'Aggiorna Ordine',
	'Config_updated' => 'Configurazione Aggiornata Correttamente',
	'MOVE_UP' => 'Sposta su',
	'MOVE_DOWN' => 'Sposta gi&ugrave;',
	'RESYNC' => 'Sincronizza',
	'No_mode' => 'Nessun mode impostato',
	'Forum_edit_delete_explain' => 'Il modulo qui sotto ti permette di personalizzare tutte le opzioni generali del Forum. Per la Configurazione degli Utenti e dei Forum usa i collegamenti appropriati nel pannello di sinistra',
	'Forum_Expand' => 'Espandi',
	'Forum_Collapse' => 'Comprimi',
	'Forum_Expand_all' => 'Espandi Tutti',
	'Forum_Collapse_all' => 'Comprimi Tutti',

	'Move_contents' => 'Sposta tutti i contenuti',
	'Forum_delete' => 'Cancella Forum',
	'Forum_delete_explain' => 'Il modulo qui sotto ti permette di cancellare un forum (o una categoria) e decidere dove mettere tutti gli argomenti (o forum) in esso/a contenuti',

	'Status_locked' => 'Chiuso',
	'Status_unlocked' => 'Aperto',
	'Forum_settings' => 'Impostazioni Generali Forum',
	'Forum_name' => 'Nome Forum',
	'Forum_desc' => 'Descrizione',
	'Forum_status' => 'Stato del Forum',
	'Forum_pruning' => 'Eliminazione Automatica',

	'prune_freq' => 'Verifica l\'et&agrave; degli argomenti ogni',
	'prune_days' => 'Rimuovi gli argomenti che non hanno avuto risposte per',
	'Set_prune_data' => 'Hai attivato l\'eliminazione automatica per questo forum ma non hai impostato la frequenza o il numero di giorni per l\'autoeliminazione. Torna indietro e attivalo',

	'FORUM_SIMILAR_TOPICS' => 'Argomenti Simili',
	'FORUM_SIMILAR_TOPICS_EXPLAIN' => 'Attivando questa opzione verr&agrave; mostrata una tabella con gli argomenti simili nella visualizzazione degli argomenti in questo forum (ricorda che devi anche attivare l\'opzione globale per questa funzionalit&agrave; nella Configurazione Icy Phoenix => SEO)',
	'FORUM_TOPIC_VIEWS' => 'Visualizzazione Argomenti',
	'FORUM_TOPIC_VIEWS_EXPLAIN' => 'Attivando questa opzione verranno memorizzati nel db tutti gli utenti che visualizzeranno gli argomenti di questo forum (ricorda che devi anche attivare l\'opzione globale per questa funzionalit&agrave; nella Configurazione Icy Phoenix => SQL)',
	'FORUM_TAGS' => 'Forum Tags',
	'FORUM_TAGS_EXPLAIN' => 'Attivando questa opzione verr&agrave; mostrata una tabella con le parole pi&ugrave; ricorrenti in questo forum (ricorda che devi anche attivare l\'opzione globale per questa funzionalit&agrave; nella Configurazione Icy Phoenix => SEO)',
	'FORUM_SORT_BOX' => 'Casella Ordinamento',
	'FORUM_SORT_BOX_EXPLAIN' => 'Attivando questa opzione verr&agrave; mostrata la casella per ordinare alfabeticamente gli argomenti in questo forum (ricorda che devi anche attivare l\'opzione globale per questa funzionalit&agrave; nella Configurazione Icy Phoenix)',
	'FORUM_KB_MODE' => 'Modalit&agrave; KB',
	'FORUM_KB_MODE_EXPLAIN' => 'Attivando questa opzione il forum verr&agrave; visualizzato usando la modalit&agrave; Knowledge Base',
	'FORUM_INDEX_ICONS' => 'Icone RSS E Nuovo Argomento',
	'FORUM_INDEX_ICONS_EXPLAIN' => 'Attivando questa opzione verranno mostrate le icone per il feed RSS e Nuovo Argomento nell\'indice del forum (ricorda che devi anche attivare l\'opzione globale per questa funzionalit&agrave; nella Configurazione Icy Phoenix)',

	'Move_and_Delete' => 'Sposta e Cancella',

	'Delete_all_posts' => 'Cancella tutti i messaggi',
	'Nowhere_to_move' => 'Nessun posto dove spostare',

	'Edit_Category' => 'Modifica Categoria',
	'Edit_Category_explain' => 'Utilizza questo forum per modificare un nome di categorie',

	'Forums_updated' => 'Le informazioni dei Forum e delle Categorie sono state aggiornate con successo',

	'Must_delete_forums' => 'Devi cancellare tutti i forum per cancellare questa categoria',

	'Click_return_forumadmin' => 'Clicca %sQUI%s per tornare a Amministrazione Forum',

// Smiley Management
	'smiley_title' => 'Utility Modifica Smiley',
	'smile_desc' => 'Da questa pagina puoi aggiungere, togliere e modificare le emoticons o gli smiley che i tuoi utenti possono utilizzare nei loro messaggi. Se il tuo browser lo supporta, puoi anche utilizzare il Drag and Drop per l\'ordinamento.',

	'smiley_config' => 'Configurazione Smiley',
	'smiley_code' => 'Codice Smiley',
	'smiley_url' => 'File Immagine Smiley',
	'smiley_emot' => 'Emozione Smiley',
	'smile_add' => 'Aggiungi un nuovo Smiley',
	'Smile' => 'Smile',
	'Emotion' => 'Emotion',

	'Select_pak' => 'Seleziona Pacchetto (.pak) File',
	'replace_existing' => 'Sovrascrivi gli Smiley Esistenti',
	'keep_existing' => 'Mantieni gli Smiley Esistenti',
	'smiley_import_inst' => 'Devi decomprimere il pacchetto di smiley caricare i file nella cartella appropriata per l\'installazione. Poi seleziona le informazioni corrette da questo modulo per importare il pacchetto di smiley.',
	'smiley_import' => 'Importazione Pacchetto Smiley',
	'choose_smile_pak' => 'Seleziona un pacchetto di Smiley, estensione .pak',
	'import' => 'Importa gli Smiley',
	'smile_conflicts' => 'Cosa devi fare in caso di conflitti',
	'del_existing_smileys' => 'Cancella gli smiley esistenti prima di importare',
	'import_smile_pack' => 'Importa Pacchetto Smiley',
	'export_smile_pack' => 'Crea Pacchetto Smiley',
	'export_smiles' => 'Per creare un pacchetto di smiley dagli smiley installati, clicca %sQUI%s per scaricare il file di estensione .pak degli smiley. Nomina questo file in modo appropriato mantenendo l\'estensione .pak. Crea un file zip che contenga tutti i file immagine degli smiley e questo file .pak di configurazione.',

	'smiley_add_success' => 'Gli Smiley sono stati aggiunti con successo.',
	'smiley_edit_success' => 'Gli Smiley sono stati aggiornati con successo.',
	'smiley_import_success' => 'Il pacchetto di Smiley &egrave; stato importato con successo!',
	'smiley_del_success' => 'Gli Smiley sono stati rimossi con successo.',
	'Click_return_smileadmin' => 'Clicca %sQUI%s per tornare a Amministrazione Smiley',


// User Management
	'User_admin' => 'Administrazione Utenti',
	'User_admin_explain' => 'qui puoi cambiare le informazioni degli utenti e alcune opzioni specifiche. Per modificare il permessi degli utenti, utilizza il modulo di Amministrazione dei Permessi per Utenti e Gruppi.',

	'Look_up_user' => 'Cerca Utente',

	'Admin_user_fail' => 'Non &egrave; stato possibile aggiornare il profilo utente.',
	'Admin_user_updated' => 'Il profilo utente &egrave; stato aggiornato con successo.',
	'Click_return_useradmin' => 'Clicca %sQUI%s per tornare a Amministrazione Utenti',
//Start quick Administrator User Options and Information MOD
	'Click_return_userprofile' => 'Click %sQUI%s per tornare al profilo dell\'Utente',
//End quick Administrator User Options and Information MOD
	'User_delete' => 'Cancella questo utente',
	'User_delete_explain' => 'Clicca qui per cancellare questo utente. Questa operazione non pu&ograve; essere annullata.',
	'User_deleted' => 'L\'utente &egrave; stato cancellato con successo.',

	'User_status' => 'L\'utente &egrave; attivo',
	'User_allowpm' => 'Pu&ograve; inviare Messaggi Privati',
	'User_allowavatar' => 'Pu&ograve; mostrare gli Avatar',

	'Admin_avatar_explain' => 'In questa sezione puoi vedere e cancellare l\'avatar attuale dell\'utente.',

	'User_special' => 'Campi speciali solo per l\'amministratore',
	'User_special_explain' => 'Questi campi non possono essere modificati dagli utenti. qui puoi impostare il loro stato e altre opzioni che non vengono date agli utenti.',

// Group Management
	'Group_administration' => 'Amministrazione Gruppi',
	'Group_admin_explain' => 'Da questo pannello puoi amministrare tutti i Gruppi Utenti. Puoi cancellare, creare e modificare i gruppi esistenti. Puoi scegliere i moderatori, modificare lo stato del gruppo (aperto/chiuso) e impostare il nome del gruppo e la descrizione.',
	'Error_updating_groups' => 'C\'&egrave; stato un errore durante l\'aggiornamento dei gruppi',
	'Updated_group' => 'Il gruppo &egrave; stato aggiornato con successo',
	'Added_new_group' => 'Il nuovo gruppo &egrave; stato creato con successo',
	'Deleted_group' => 'Il gruppo &egrave; stato cancellato con successo',
	'New_group' => 'Crea nuovo gruppo',
	'Edit_group' => 'Modifica gruppo',
	'group_name' => 'Nome Gruppo',
	'group_description' => 'Descrizione Gruppo',
	'group_moderator' => 'Moderatore Gruppo',
	'group_status' => 'Stato Gruppo',
	'group_open' => 'Gruppo Aperto',
	'group_closed' => 'Gruppo Chiuso',
	'group_hidden' => 'Gruppo Nascosto',
	'group_delete' => 'Cancella Gruppo',
	'group_delete_check' => 'Cancella questo gruppo',
	'submit_group_changes' => 'Invia Modifiche',
	'reset_group_changes' => 'Annulla Modifiche',
	'No_group_name' => 'Devi specificare un nome per questo gruppo',
	'No_group_moderator' => 'Devi specificare un moderatore per questo gruppo',
	'No_group_mode' => 'Devi specificare uno stato per questo gruppo, aperto o chiuso',
	'No_group_action' => 'Nessuna azione specificata',
	'delete_group_moderator' => 'Vuoi cancellare il vecchio moderatore del gruppo?',
	'delete_moderator_explain' => 'Se cambi il moderatore del gruppo, seleziona questo box per rimuovere il vecchio moderatore. In caso contrario, non selezionarlo e l\'utente diverr&agrave; un normale membro del gruppo.',
	'Click_return_groupsadmin' => 'Clicca %sQUI%s per tornare a Amministrazione Gruppi',
	'Select_group' => 'Seleziona un gruppo',
	'Look_up_group' => 'Controlla gruppo',

// Prune Administration
	'Forum_Prune' => 'Eliminazione Forum',
	'Forum_Prune_explain' => 'Questo canceller&agrave; tutti gli argomenti a cui non &egrave; stata inviata una risposta nel numero di giorni che hai selezionato. Se non inserisci un numero TUTTI gli argomenti saranno cancellati. Non verranno cancellati gli argomenti con sondaggi ancora attivi e neppure gli Annunci. Devi cancellare questi argomenti manualmente.',
	'Do_Prune' => 'Elimina',
	'All_Forums' => 'Tutti i Forum',
	'Prune_topics_not_posted' => 'Elimina gli argomenti senza risposte da giorni',
	'Topics_pruned' => 'Argomenti eliminati',
	'Posts_pruned' => 'Messaggi eliminati',
	'Prune_success' => 'L\'eliminazione dei forum &egrave; avvenuta con successo',

// Word censor
	'Words_title' => 'Censura Parole',
	'Words_explain' => 'Da questo pannello puoi aggiungere, modificare e rimuovere parole che saranno censurate automaticamente da tutto il forum. Inoltre non sar&agrave; possibile registrarsi con gli username che contengono queste parole. Le abbreviazioni (*) sono accettate nel campo parola , eg. *tra* comprender&agrave; attraverso, tra* comprender&agrave; trave, *tra comprender&agrave; finestra.',
	'Word' => 'Parola',
	'Edit_word_censor' => 'Modifica Lista',
	'Replacement' => 'Sostituto',
	'Add_new_word' => 'Aggiungi una nuova parola',
	'Update_word' => 'Aggiorna Lista',

	'Must_enter_word' => 'Devi inserire una parola e il suo sostituto',
	'No_word_selected' => 'Nessuna parola selezionata per la modifica',

	'Word_updated' => 'La parola selezionata &egrave; stat aggiornata con successo',
	'Word_added' => 'La parola &egrave; stata aggiunta con successo',
	'Word_removed' => 'La Parola selezionata &egrave; stata rimossa con successo',

	'Click_return_wordadmin' => 'Clicca %sQUI%s per tornare a Censure Parole',

// Mass Email
	'Mass_email_explain' => 'qui puoi inviare un messaggio a tutti i tuoi utenti o agli utenti di un gruppo specifico. Per fare questo, verr&agrave; inviato un messaggio all\'indirizzo email dell\'amministratore che hai fornito, ed una BCC (Blind Carbon Copy) verr&agrave; inviata ai destinatari. Se stai inviando una mail ad un grosso gruppo di utenti per favore si paziente dopo aver inviato e non interrompere il caricamento della pagina. Un tempo lungo &egrave; normale per una mass-email. quando il processo sar&agrave; finito, sarai avvisato.',
	'Compose' => 'Componi',

	'Recipients' => 'Destinatari',
	'All_users' => 'Tutti gli Utenti',

	'Email_successfull' => 'Il tuo messaggio &egrave; stato inviato',
	'Click_return_massemail' => 'Clicca %sQUI%s per tornare a Email Generali',

// Ranks admin
	'Ranks_title' => 'Amministrazione Livelli',
	'Ranks_explain' => 'Con questo modulo puoi aggiungere, cancellare, modificare e guardare il livello degli utenti. Puoi anche creare dei livelli personali che possono essere applicati ad un utente attraverso la Gestione Utenti',

	'Add_new_rank' => 'Aggiungi un nuovo livello',

	'Rank_title' => 'Titolo Livello',
	'Rank_special' => 'Imposta un Livello Speciale',
	'Rank_minimum' => 'Messaggi Minimi',
	'Rank_maximum' => 'Messaggi Massimi',
	'Rank_image' => 'Immagine Livello (Relativo al percorso del forum)',
	'Rank_image_explain' => 'Utilizza questo per definire una piccola immagine associata con il livello',

	'Must_select_rank' => 'Devi selezionare un livello',
	'No_assigned_rank' => 'Nessun livello speciale assegnato',

	'Rank_updated' => 'Il livello &egrave; stato aggiornato con successo',
	'Rank_added' => 'Il livello &egrave; stato aggiunto con successo',
	'Rank_removed' => 'Il livello &egrave; stato cancellato con successo',
	'No_update_ranks' => 'Il livello &egrave; stato cancellato con successo, in ogni caso gli utenti che utilizzavano questo livello non sono stati aggiornati. Dovrai impostare manualmente il nuovo livello a questi utenti',

	'Click_return_rankadmin' => 'Clicca %sQUI%s per tornare a Amministrazione Livelli',

// Disallow Username Admin
	'Disallow_control' => 'Controllo Disabilitazione Utenti',
	'Disallow_explain' => 'qui puoi controllare gli username che non si possono utilizzare. Gli username disabilitati possono contenere una abbreviazione (*). Per favore nota che non puoi specificare nessuno username che &egrave; gi&agrave; stato registrato, devi prima cancellare il nome e poi disabilitarlo',

	'Delete_disallow' => 'Cancella',
	'Delete_disallow_title' => 'Rimuovi uno Username Disabilitato',
	'Delete_disallow_explain' => 'Puoi rimuovere uno username disabilitato selezionando lo username da questa lista e cliccando su Cancella',

	'Add_disallow' => 'Aggiungi',
	'Add_disallow_title' => 'Aggiungi uno username disabilitato',
	'Add_disallow_explain' => 'Puoi disabilitare uno username utilizzando l\'abbreviazione * per comprendere ogni carattere',

	'No_disallowed' => 'Nessuno Username Disabilitato',

	'Disallowed_deleted' => 'Lo username disabilitato &egrave; stato rimosso con successo',
	'Disallow_successful' => 'Lo username disabilitato &egrave; stato aggiunto con successo',
	'Disallowed_already' => 'Il nome che hai inserito non pu&ograve; essere disabilitato. Esiste gi&agrave; nella lista delle parole censurate o esiste uno username con questo nome',

	'Click_return_disallowadmin' => 'Clicca %sQUI%s per tornare a Disabilitazione Utenti',

// Styles Admin
	'Styles_admin' => 'Amministrazione Stili',
	'Styles_explain' => 'Utilizzando queste opzioni puoi aggiungere, rimuovere e gestire gli stili (modelli e temi) del tuo forum',
	'Styles_addnew_explain' => 'La lista seguente contiene tutti i temi che sono disponibili per i modelli che hai al momento. I temi nella lista non sono ancora stati caricati nel database del forum. Per installarli semplicemente clicca sul link installa di fianco ad ogni stile.',

	'Select_template' => 'Seleziona un Modello',

	'Style' => 'Stile',
	'Template' => 'Tema',
	'Download' => 'Scarica',

	'Edit_theme' => 'Modifica Tema',
	'Edit_theme_explain' => 'Nel modulo qui sotto puoi modificare le impostazioni per il tema selezionato',

	'Create_theme' => 'Crea Tema',
	'Create_theme_explain' => 'Utilizza il modulo qui sotto per creare un nuovo tema per il modello selezionato. Quando inserisci i colori (devi usare la notazione esadecimale) non  devi includere all\'inizio #, es. CCCCCC &egrave; valido, #CCCCCC non valido.',

	'Export_themes' => 'Esporta Temi',
	'Export_explain' => 'In questo pannello puoi esportare i dati del tema per il modello selezionato. Seleziona un modello dalla lista qui sotto e lo script creer&agrave; il file di configurazione del tema e tenter&agrave; di salvarlo nella directory dei modelli (template). Se non pu&ograve; salvare il file, il programma ti dar&agrave; la possibilit&agrave; di scaricarlo. Per permettere allo script di salvare il file devi dare il permesso di scrittura alla directory dei modelli sul server. Per ulteriori informazioni consulta il sito di supporto di Icy Phoenix.',

	'Theme_installed' => 'Il tema selezionato &egrave; stato installato con successo',
	'Style_removed' => 'Lo stile selezionato &egrave; stato rimosso dal database. Per rimuovere completamente questo stile dal tuo sistema, devi cancellare lo stile dalla directory dei modelli (template).',
	'Theme_info_saved' => 'Le informazioni dl tema per il modello selezionato sono state salvate. Adesso devi reimpostare i permessi del file theme_info.cfg (e se possibile anche nella directory dei modelli) su sola lettura',
	'Theme_updated' => 'Il tema selezionato &egrave; stato aggiornato. Adesso devi esportare le impostazioni del nuovo tema',
	'Theme_created' => 'Tema creato. Adesso devi esportare il tema nel file di configurazione del tema per utilizzarlo da un\'altra parte',

	'Confirm_delete_style' => 'Sei sicuro di voler cancellare questo stile?',

	'Download_theme_cfg' => 'Il processo di esportazione non riesce a scrivere il file di configurazione del tema. Clicca il bottone qui sotto per scaricare questo file con il tuo browser. Dopo averlo scaricato puoi trasferirlo nella directory che contiene i file dei modelli. Dopo puoi compattare i file per distribuirli o per riutilizzarli',
	'No_themes' => 'Il modello che hai selezionato non ha temi allegati. Per creare un nuovo tema clicca sul link Crea Tema nel pannello di sinistra',
	'No_template_dir' => 'Non &egrave; possibile aprire la directory dei modelli. Potrebbe essere non leggibile dal server o potrebbe non esistere',
	'Cannot_remove_style' => 'You cannot remove the style selected since it is currently the forum default. Please change the default style and try again.',
	'Style_exists' => 'Non puoi rimuovere lo stile selezionato perch&egrave; &egrave; quello di default nel forum. Cambia lo stile di default e poi riprova',

	'Click_return_styleadmin' => 'Clicca %sQUI%s per tornare a Amministrazione Stili',

	'Theme_settings' => 'Impostazioni del Tema',
	'Theme_element' => 'Elemento del Tema',
	'Simple_name' => 'Nome Semplice',
	'Save_Settings' => 'Salva Impostazioni',

	'Stylesheet' => 'Foglio Di Stile CSS',
	'Stylesheet_explain' => 'Nome del file per il foglio di stile CSS usato da questo tema.',
	'Background_image' => 'Immagine Di Sfondo',
	'Background_color' => 'Colore Di Sfondo',
	'Theme_name' => 'Nome Tema',
	'Link_color' => 'Colore Link',
	'Text_color' => 'Colore Testo',
	'VLink_color' => 'Colore Link Visitato',
	'ALink_color' => 'Colore Link Attivo',
	'HLink_color' => 'Colore Link Hover',
	'Tr_color1' => 'Tabella Colonna Colore 1',
	'Tr_color2' => 'Tabella Colonna Colore 2',
	'Tr_color3' => 'Tabella Colonna Colore 3',
	'Tr_class1' => 'Tabella Colonna Classe 1',
	'Tr_class2' => 'Tabella Colonna Classe 2',
	'Tr_class3' => 'Tabella Colonna Classe 3',
	'Th_color1' => 'Tabella Intestazione Colore 1',
	'Th_color2' => 'Tabella Intestazione Colore 2',
	'Th_color3' => 'Tabella Intestazione Colore 3',
	'Th_class1' => 'Tabella Intestazione Colore 1',
	'Th_class2' => 'Tabella Intestazione Colore 2',
	'Th_class3' => 'Tabella Intestazione Colore 3',
	'Td_color1' => 'Tabella Cella Colore 1',
	'Td_color2' => 'Tabella Cella Colore 2',
	'Td_color3' => 'Tabella Cella Colore 3',
	'Td_class1' => 'Tabella Cella Colore 1',
	'Td_class2' => 'Tabella Cella Colore 2',
	'Td_class3' => 'Tabella Cella Colore 3',

// Admin Userlist Start
	'Userlist' => 'Lista Utenti',
	'Userlist_description' => 'Visualizza una lista completa dei tuoi utenti su cui potrai compiere varie azioni',

	'Add_group' => 'Aggiungi ad un Gruppo',
	'Add_group_explain' => 'Seleziona a quale gruppo aggiungere gli utenti selezionati',

	'Open_close' => 'Apri/Chiudi',
	'Active' => 'Attivo',
	'Group' => 'Gruppo(i)',
	'Rank' => 'Livello',
	'Last_activity' => 'Ultima Attivit&agrave;',
	'Never' => 'Mai',
	'User_manage' => 'Gestisci',
	'Find_all_posts' => 'Trova tutti i Posts',

	'Select_one' => 'Selezionane Uno',
	'Ban' => 'Interdizione [Ban]',
	'Activate_deactivate' => 'Attiva/Disattiva',

	'User_id' => 'User id',
	'User_level' => 'Livello Utente',
	'Ascending' => 'Crescente',
	'Descending' => 'Decrescente',
	'Show' => 'Mostra',
	'All' => 'Tutti',

	'Member' => 'Membro',
	'Pending' => 'In Attesa',

	'Confirm_user_ban' => 'Sicuro di voler bannare gli utenti selezionati?',
	'Confirm_user_deleted' => 'Sicuro di voler cancellare gli utenti selezionati?',

	'User_status_updated' => 'Lo stato degli utenti &egrave; stato aggiornato con successo!',
	'User_banned_successfully' => 'Utente(i) bannato(i) con successo!',
	'User_deleted_successfully' => 'Utente(i) cancellato(i) con successo!',
	'User_add_group_successfully' => 'Utente(i) aggiunto(i) al gruppo con successo!',

	'Click_return_userlist' => 'Clica %sQUI%s to per ritornare alla Lista Utenti',
// Admin Userlist End

// Version Check
	'Version_up_to_date' => 'Nessun aggiornamento disponibile per la versione in uso di phpBB.',
	'Version_up_to_date_ip' => 'Nessun aggiornamento disponibile per la versione in uso di Icy Phoenix.',
	'Version_not_up_to_date' => 'La versione in uso <il b>non </ b>&egrave; recente. Per gli aggiornamenti disponibili visita <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> per vedere l\'ultima versione.',
	'Version_not_up_to_date_ip' => 'Aggiornamenti disbponibili per la tua versione di Icy Phoenix, per cortesia visita <a href="http://www.icyphoenix.com/" target="_new">Icy Phoenix</a> per ottenere l\'ultima versione.',
	'Latest_version_info' => 'L\'ultima versione disponibile &egrave; <b>phpBB %s</b>.',
	'Current_version_info' => 'La tua Versione &egrave; <b>phpBB %s</b>.',
	'Connect_socket_error' => 'Impossibile il collegamento a phpBB. Rapporto errore:<br />%s',
	'Connect_socket_error_ip' => 'Impossibile il collegamento ad Icy Phoenix. Rapporto errore: %s',
	'Socket_functions_disabled' => 'Impossibile utilizzare la funzione socket.',
	'Mailing_list_subscribe_reminder' => 'Per le ultime informazioni su aggiornamenti a phpBB <a href="http://www.phpbb.com/support/" target="_new">iscriviti alla mailing list</a>.',
	'Version_information' => 'Informazione Versione',
	'Version_not_checked' => 'La verifica della versione &egrave; disabilitata, visita il sito di Icy Phoenix per informazioni su nuove versioni.',

// BIRTHDAY - BEGIN
	'Birthday_required' => 'Imponi agli utenti di selezionare la data di nascita',
	'Enable_birthday_greeting' => 'Abilita auguri di compleanno',
	'Birthday_greeting_explain' => 'Agli utenti che hanno indicato la loro data di nascita, in occasione del loro compleanno il forum invier&agrave; gli auguri via MP. Per il controllo dell\'invio auguri via email si rimanda alla sezione <b>Cron</b>.',
	'Next_birthday_greeting' => 'Anno del prossimo compleanno',
	'Next_birthday_greeting_explain' => 'Questo campo memorizza l\'anno in cui l\'utente avr&agrave; il prossimo compleanno',
	'Wrong_next_birthday_greeting' => 'Anno del prossimo compleanno non valido! Riprovare grazie',
	'Max_user_age' => 'Et&agrave; massima utente',
	'Min_user_age' => 'Et&agrave; minima utente',
	'Birthday_lookforward' => 'Compleanno nei giorni successivi',
	'Birthday_lookforward_explain' => 'Quanti giorni avanti lo script dovr&agrave; cercare i compleanni',
// BIRTHDAY - END

	'Main_Admin_Undeleted' => 'L\'amministratore principale non pu&ograve; essere cancellato!',
	'Main_Admin_Unchanged_Profile' => 'Non puoi modificare il profilo dell\'amministratore principale!',
	'Main_Admin_Unchanged_Level' => 'L\'amministratore principale non pu&ograve; diventare un semplice utente!',

// Default avatar MOD, By Manipe (Begin)
	'Default_avatar' => 'Imposta l\'avatar di default',
	'Default_avatar_explain' => 'Questo sar&agrave;  l\'avatar per gli utenti che non ne hanno selezionato uno. Imposta l\'avatar di default per gli ospiti e per gli utenti e seleziona se vuoi che sia visualizzato per gli utenti registrati, per gli ospiti, per entrambi, o per nessuno.',
	'Default_avatar_guests' => 'Ospiti',
	'Default_avatar_users' => 'Utenti',
	'Default_avatar_both' => 'Entrambi',
	'Default_avatar_none' => 'Nessuno',
	'Default_avatar_guests_url' => 'Percorso per l\'avatar predefinito per gli ospiti',
	'Default_avatar_users_url' => 'Percorso per l\'avatar predefinito per gli utenti',
// Default avatar MOD, By Manipe (End)

// Start add - Global announcement MOD
	'Globalannounce' => 'Annuncio Globale',
// End add - Global announcement MOD

// Disallow other admins to delete or edit the first admin MOD
	'L_LISTOFADMINEDIT' => 'Accessi bloccati all\'account dell\'Amministratore principale',
	'L_LISTOFADMINEDITEXP' => 'In questa lista ci sono gli accessi bloccati all\'account dell\'Amministratore principale. Gli Amministratori hanno cercato di cambiare il profilo dell\'Amministratore principale, di cancellarlo o di impostarlo a normale utente. Modifiche dei dati o dei permesssi dell\'Amministratore principale non hanno avuto luogo e sono state bloccate. Questa lista pu&ograve; essere cancellata dall\'Amministratore principale.',
	'L_LISTOFADMINEDITUSERS' => 'Lista Accessi bloccati all\'account dell\'Amministratore principale',
	'L_LISTOFADMINTEXT' => 'Accessi bloccati a causa di',
	'L_DELETEMSG' => 'Cancella elementi',
	'L_DELETESUCMSG' => 'Gli elementi sono stati cancellati con successo',
	'L_ADMINEDITMSG' => 'Non hai il permesso di modificare i dati del profilo o i permessi dell\'Amministratore principale.<br /><br />Questo accesso &egrave; stato annotato e bloccato con successo!',

// Advanced Signature Divider Control
	'sig_title' => 'Separatore Firma',
	'sig_divider' => 'SeparatoreFirma',
	'sig_explain' => 'Da qui puoi controllare che Separatore utilizzare per dividere la firma degli utenti dai loro post.',

// Start add - Yellow card admin MOD
	'Max_user_bancard' => 'Numero massimo di ammonizioni',
	'Max_user_bancard_explain' => 'Se un utente riceve un numero di cartellini gialli che eccede questo limite verra\' sospeso',
	'ban_card' => 'Cartellino giallo',
	'ban_card_explain' => 'Utente sospeso quando i cartellini gialli supereranno il numero di: %d ',
	'Greencard' => 'Riattiva',
	'Bluecard' => 'Segnala messaggio',
	'Bluecard_limit' => 'Intervallo Blue Cards',
	'Bluecard_limit_explain' => 'Notifica il moderatore ogni x blue card attribuite ad un messaggio',
	'Bluecard_limit_2' => 'Notifica Blue Card ',
	'Bluecard_limit_2_explain' => 'Invia la prima notifica al moderatore quando un messaggio raggiunge un numero di blue cards pari a ',
	'Report_forum' => 'Forum segnalazioni',
	'Report_forum_explain' => 'Selezionare il forum in cui verranno inseriti i report degli utenti. Gli utenti <b> devono avere almeno</b> il permesso di scrittura e risposta in questo forum',

// Start add - Last visit MOD
	'Hidde_last_logon' => 'Nascondi ultima connessione',
	'Hidde_last_logon_explain' => 'Se impostato a S&igrave; solo l\'amministratore del forum potr&agrave; visualizzare la data dell\'ultimo collegamento',
// End add - Last visit MOD

	'Postcounts_Configuration' => 'Numero Post',
	'Rebuild Search' => 'Ricostruisci Cerca',

// Start add - Online/Offline/Hidden Mod
	'Online_setting' => 'Online Status Setting',
	'Online_color' => 'Online text color',
	'Offline_color' => 'Offline text color',
	'Hidden_color' => 'Hidden text color',
// End add - Online/Offline/Hidden Mod

// XS News
	'xs_news_settings' => 'Impostazioni XS News',
	'xs_news_show' => 'Visualizza Banner News?',
	'xs_news_show_ticker' => 'Visualizza News Ticker?',
	'xs_news_show_ticker_explain' => 'Questa &egrave; un\'impostazione dominante settandola su \'No\'non verr&agrave; visualizzato nessun ticker. I tickers sono controllabili individualmente dalle loro impostazioni.',
	'xs_news_show_ticker_subtitle' => 'Visualizza sottotitolo ticker?',
	'xs_news_show_ticker_subtitle_explain' => 'Impostandola su Si verr&agrave; visualizzato \'News Tickers\' sopra i tickers delle news.',
	'xs_news_show_news_subtitle' => 'Visualizza sottotitolo News?',
	'xs_news_show_news_subtitle_explain' => 'Impostandolo su Si verr&agrave; visualizzato \'News\' sopra le news.',
	'xs_news_dateformat' => 'Formato Data',
	'xs_news_dateformat_helper' => 'Usa questo formato: %s',

// Begin Thanks Mod
	'use_thank' => 'Abilita Ringraziamenti',
// End Thanks Mod

// Start add - Online/Offline/Hidden Mod
	'Online_time' => 'Durata stato Online',
	'Online_time_explain' => 'Numero di secondi minimo per il quale un utente apparir&agrave; online dopo la sua inattivit&agrave; (non usare valori inferiori a 60).',
	'Online_setting' => 'Configurazione Stato Online',
	'Online_color' => 'Colore testo Online',
	'Offline_color' => 'Colore testo Offline',
	'Hidden_color' => 'Colore testo Utente Nascosto',
// End add - Online/Offline/Hidden Mod

// google bot detector by pukapuka
	'Detector' => 'Google Bot Detector',
	'Detector_Explain' => 'In questa pagina &egrave; possibile analizzare le visite del Bot di Google',
	'Detector_ID' => '#',
	'Detector_Time' => 'Tempo',
	'Detector_Url' => 'Url',
	'Detector_Clear' => 'Elimina Tutti',
	'Detector_No_Bot' => 'Non &egrave; stato Rilevato nessun Bot',
	'Detector_Cleared' => 'Informazioni Rilevate Eliminate con Successo',
	'Click_Return_Detector' => 'Clicca %sQUI%s per tornare al Detector',

// addded to Auto group mod
	'group_count' => 'Numero di Post Richiesti',
	'group_count_max' => 'Numero massimo di posts',
	'group_count_updated' => '%d membri sono stati rimossi, %d membri sono stati aggiunti a questo gruppo',
	'Group_count_enable' => 'Utenti aggiunti automaticamente quando postano',
	'Group_count_update' => 'Aggiungi/Aggiorna nuovi membri',
	'Group_count_delete' => 'Elimina/Aggiorna vecchi utenti',
	'User_allow_ag' => 'Attiva AutoGroup',
	'group_count_explain' => 'Quando gli utenti supereranno con i loro post questo valore <i>(in qualsiasi forum)</i> saranno aggiunti automaticamente a questo gruppo<br /> Questo si applica solo se "Utenti aggiunti automaticamente quando postano" &egrave; abilitato',
// Start add - Bin Mod
	'Bin_forum' => 'Cestino',
	'Bin_forum_explain' => 'Seleziona il forum che vuoi utilizzare come Cestino. Dovresti inoltre modificare i permessi di questo forum per consentire o meno l\'accesso agli utenti.',
// End add - Bin Mod

// Begin quick Title Edition Mod 1.0.0 by Xavier Olive.
	'Title_infos' => 'Gestione Quick Title',
	'Must_select_title' => 'Devi selezionare un quick Title',
	'Title_updated' => 'Quick Title Aggiornato',
	'Title_added' => 'Quick Title Aggiunto',
	'Click_return_titleadmin' => 'Clicca %sQUI%s per ritornare alla Gestione Quick Title',
	'Title_removed' => 'Quick Title Rimosso',
	'quick_title_explain' => 'Puoi creare dei piccoli pezzi di testo che sarai in grado di aggiungere al titolo di una Discussione premendo un solo bottone.<br />Se vuoi che venga visualizzato il nome di chi ha fatto l\'operazione, inserisci %mod% dove vuoi che sia visualizzato. Per Esempio: [Link OK | controllato da %mod%] verr&agrave; visualizzato come [Link OK |controllato NomeModeratore]. Allo stesso modo puoi inserire anche la data %date% dove vuoi.',
	'Title_head' => 'Quick Title',
	'Title_auth' => 'Permessi',
	'Administrator' => 'Amministratore',
	'Topic_poster' => 'Chi ha iniziato la Discussione',
	'Add_new_title_info' => 'Aggiungi un Quick Title',
	'Title_perm_info' => 'Permessi',
	'Title_perm_info_explain' => 'Gli Utenti con questo livello saranno in grado di utilizzare Quick Title',
	'Title_info' => 'Quick Title',
// End quick Title Edition Mod 1.0.0 by Xavier Olive.

// Limit Image Width MOD
	'Available' => 'Disponibile',
	'Unavailable' => 'Non Disponibile',
	'LIW_title' => 'Limite Larghezza Immagine',
	'LIW_admin_explain' => 'Questa pagina ti permette di settare le impostazioni della Mod Limit Image Width (Limite Larghezza Immagine), potrai abilitarla e disabilitarla, inoltre potrai anche impostare la larghezza massima delle immagini postate nel forum. Se ti sembra che la tabella SQL che contiene la dimensione dellle immagini in cache sia troppo grande la puoi svuotare cliccando su \'Svuota tabella cache\'.<br /><br />Puoi anche vedere se sia possibile o no far girare la MOD sul tuo web server tramite il box\'Verifica Compatibilit&agrave;\' che trovi qui sotto',
	'LIW_compatibility_checks' => 'Verifica Compatibilit&agrave;',
	'LIW_mod_config' => 'Configurazione MOD',

	'LIW_config_updated' => 'La configurazione &egrave; stata aggiornata con successo',
	'LIW_cache_emptied' => 'La tabella della cache &egrave; stata svuotata con successo',
	'LIW_click_return_config' => 'Clicca %sQUI%s per ritotnare alla Configurazione di Limit Image Width',

	'LIW_getimagesize' => 'Supporto getimagesize()',
	'LIW_getimagesize_explain' => 'Disponibile in PHP 4.0.5',
	'LIW_getimagesize_available' => 'La MOD &egrave; in grado di verificare la dimensione dell\'immagine',
	'LIW_getimagesize_unavailable' => 'La MOD non pu&ograve; verificare la dimensione delle immagini, per cui ridimensioner&agrave; <i>tutte</i> le immagini postate',

	'LIW_urlaware' => 'URL-aware fopen wrappers',
	'LIW_urlaware_explain' => 'Imposta allow_url_fopen su Si nel tuo php.ini',
	'LIW_urlaware_available' => 'La MOD &egrave; in grado di generare un\'impronta digitale per le immagini, cos&igrave; pu&ograve; mettere in cache la dimensione delle immagini',
	'LIW_urlaware_unavailable' => 'La MOD NON &egrave; in grado di generare un\'impronta digitale per le immagini, cos&igrave; NON pu&ograve; mettere in cache la dimensione delle immagini',

	'LIW_openssl' => 'Estensione openSSL caricata',
	'LIW_openssl_explain' => 'Carica estensione openssl.dll nel tuo php.ini',
	'LIW_openssl_available' => 'La MOD &egrave; in grado di recuperare la dimensione dell\'immagine da https:// cos&igrave; le pu&ograve; mettere in cache',
	'LIW_openssl_unavailable' => 'La MOD NON &egrave; in grado di recuperare la dimensione dell\'immagine da https:// cos&igrave; NON le pu&ograve; mettere in cache',

	'LIW_enable' => 'Ridimensiona immagini nei messaggi',
	'LIW_enable_explain' => 'Imposta su %s per permettere alla MOD di ridimensionare le immagini nei posts', // Set to $lang['Yes'] to ....
	'LIW_sig_enable' => 'Ridimensiona immagini nelle firme',
	'LIW_sig_enable_explain' => 'Imposta su %s per permettere alla MOD di ridimensionare le immagini nelle firme',
	'LIW_attach_enable' => 'Ridimensiona immagini allegate',
	'LIW_attach_enable_explain' => 'Imposta su %s per permettere alla MOD di ridimensionare le immagini allegate tramite l\'Attachment MOD',
	'LIW_max_width' => 'Larghezza Massima Immagine',
	'LIW_max_width_explain' => 'Specifica la larghezza massima (in pixels) delle immagini postate tramite il tag [img]',
	'LIW_empty_cache' => 'Svuota cache immagini',
	'LIW_empty_cache_explain' => 'La tabella della cache contiene <b>%s</b> records', // Your cache table currently contains <b>312</b> records
	'LIW_empty_cache_note' => 'Nota che svuotando la tabella della cache la MOD dovr&agrave; rimettere in cache tutte le dimensioni delle immagini, fatto che potrebbe appesantire momentanemente il caricamento delle discussioni',
	'LIW_empty_cache_button' => 'Svuota tabella cache',

// Bantron Mod : Begin
	'Bantron' => 'Bantron',
	'BM_Title' => 'Bantron',
	'BM_Explain' => 'Da questa pagina puoi aggiungere, modificare, vedere e rimuovere i ban applicati su questa board.',

	'BM_Show_bans_by' => 'Mostra bans per',
	'BM_All' => 'Tutti',
	'BM_Show' => 'Mostra',

	'BM_IP' => 'IP',
	'BM_Last_visit' => 'Utlima Visita',
	'BM_Banned' => 'Bannato',
	'BM_Expires' => 'Termine',
	'BM_By' => 'Da',
	'BM_Reasons' => 'Ragioni',

	'BM_Add_a_new_ban' => 'Aggiungi un nuovo Ban',
	'BM_Delete_selected_bans' => 'Elimina i bans selezionati',

	'BM_Private_reason' => 'Ragione Privata',
	'BM_Private_reason_explain' => 'La ragione del ban dell\'utente, delle e-mails, e/o dell\'indirizzo IP viene mantenuto come nota per l\'Amminstrazione.',

	'BM_Public_reason' => 'Ragione Pubblica',
	'BM_Public_reason_explain' => 'La ragione del ban dell\'utente, delle e-mails, e/o dell\'indirizzo IP verr&agrave; visualizzato dagli utenti bannati quando tenteranno di accedere al forum.',
	'BM_Generic_reason' => 'Ragione Generica',
	'BM_Mirror_private_reason' => 'Mirror ragione privata',
	'BM_Other' => 'Altro',

	'BM_Expire_time' => 'Tempo di scadenza',
	'BM_Expire_time_explain' => 'Specificando una data, sia relata alla data corrente sia una data assoluta, il ban diventer&agrave; inattivo dopo questo punto nel tempo.',
	'BM_Never' => 'Mai',
	'BM_After_specified_length_of_time' => 'Dopo la durata di tempo specificata',
	'BM_Minutes' => 'Minuto(i)',
	'BM_Hours' => 'Ora(e)',
	'BM_Days' => 'Giorno(i)',
	'BM_Weeks' => 'Settimana(e)',
	'BM_Months' => 'Mese(i)',
	'BM_Years' => 'Anno(i)',
	'BM_After_specified_date' => 'Dopo la data specificata',
	'BM_AM' => 'AM',
	'BM_PM' => 'PM',
	'BM_24_hour' => '24-Ore',

	'BM_Ban_reasons' => 'Ragioni Ban',
// Bantron Mod : End

// Start Edit Notes MOD
	'Edit_notes_settings' => 'Configurazione Note di Modifica',
	'Edit_notes_enable' => 'Abilita Note di Modifica',
	'Edit_notes_enable_explain' => 'Abilita/Disabilita le Note di Modifica',
	'Max_edit_notes' => 'Numero Massimo di Note di Modifica',
	'Max_edit_notes_explain' => 'Imposta il numero massimo di Note di Modifica per messaggio.',
	'Edit_notes_permissions' => 'Permessi per le Note di Modifica',
	'Edit_notes_permissions_explain' => 'Imposta che tipi di utenti possono utilizzare le Note di Modifica.',
	'Edit_notes_admin' => 'Solo Gli Amministratori',
	'Edit_notes_staff' => 'Staff (Amministratori e Moderatori)',
	'Edit_notes_reg' => 'Gli Utenti Registrati (Compresi anche Amministratori e Moderatori)',
	'Edit_notes_all' => 'Tutti gli Utenti (Ospiti, Utenti Registrati, Amministratori e Moderatori)',
// End Edit Notes MOD

// Disable Board Message Mod
	'board_disable_message' => 'Visualizza un messaggio quando il sito &egrave; disabilitato',
	'board_disable_message_texte' => 'Questo testo verr&agrave; visualizzato quando il sito viene disattivato.',

// BEGIN Disable Registration MOD
	'registration_status' => 'Disabilita Registrazione',
	'registration_status_explain' => 'In questo modo verranno disabilitato le registrazioni al tuo forum.',
	'registration_closed' => 'Motivo Chiusura delle Registrazioni',
	'registration_closed_explain' => 'Testo che d&agrave; una spiegazione sulla Chiusura delle registrazioni, apparir&agrave; se un utente cerca di registrarsi. Lascia in bianco se vuoi che appaia il messaggio predefinito.',
// END Disable Registration MOD
// Start add - Gender Mod
	'Gender_required' => 'Imponi agli utenti di specificare il proprio sesso',
// End add - Gender Mod

//admin user list mail
	'Usersname' => 'Utenti',
	'Admin_Users_List_Mail_Title' => 'Elenco Email Utenti',
	'Admin_Users_List_Mail_Explain' => 'Questa &egrave; una lista delle email degli utenti',

// Start add - Forum notification MOD
	'Forum_notify' => 'Notifica Forum',
	'Forum_notify_enabled' => 'Permessa',
	'Forum_notify_disabled' => 'Non Permessa',
// End add - Forum notification MOD

	'Smilie_table_columns' => 'Colonne Tabella Smileys',
	'Smilie_table_rows' => 'Righe Tabella Smileys',
	'Smilie_window_columns' => 'Colonne Finestra Smileys',
	'Smilie_window_rows' => 'Righe Finestra Smileys',
	'Smilie_single_row' => 'Numero Smileys Singola Riga',
	'Smilie_single_row_explain' => 'ES.: numero smileys in Quick Reply',

	'Auth_Rating' => 'Valutazioni',

// Gravatars
	'Enable_gravatars' => 'Abilita gravatars',
	'Gravatar_rating' => 'Votazione massima Gravatar',
	'Gravatar_rating_explain' => '<a href="http://www.gravatar.com/rating.php" target="_blank">Leggi la guida</a> per maggiori informazioni. Imposta su \'None\' per nessuna restrizione.',
	'Gravatar_default_image' => 'Immagine Gravatar predefinita',
	'Gravatar_default_image_explain' => 'Se non viene trovato nessun gravatar, il server ritorner&agrave; questa immagine. Lascia vuoto se non intendi utilizzare nessuna immagine.',

// Admin Account Actions
	'Account_actions' => 'Azioni Accounts',
	'Account_inactive_explain' => 'Da qui puoi vedere tutti gli Utenti che non sono attivi e che aspettano di essere attivati. Puoi attivare o eliminare i loro accounts.<br />Inoltre potrai impostare i loro permessi o modificare il loro profilo.',
	'Account_active_explain' => 'Da qui puoi vedere tutti gli utenti che sono membri attivi. Puoi disattivare o eliminare i loro accounts.<br />Inoltre potrai impostare i loro permessi o modificare il loro profilo.',
	'Account_active' => 'Utenti Attivi',
	'Account_inactive' => 'Utenti Inattivi',
	'Account_activate' => 'Attiva Selezionati',
	'Account_deactivate' => 'Disattiva Selezionati',
	'Account_none' => 'Non ci sono utenti in attesa di essere attivati.',
	'Account_total_user' => 'Ammontare utenti: <b>%d</b> utente',
	'Account_total_users' => 'Ammontare utenti: <b>%d</b> utenti',
	'Account_activation' => 'Metodo di Attivazione',
	'Account_awaits' => 'In attesa d\'attivazione da:',
	'Account_registered' => 'Registrato da',
	'Account_delete_users' => 'Sei sicuro di voler eliminare questi utenti?',
	'Account_delete_user' => 'Sei sicuro di voler eliminare questo utente?',
	'Account_sort_letter' => 'Visualizza solo accounts che iniziano per',
	'Account_others' => 'altri',
	'Account_all' => 'tutti',
	'Account_year' => 'anno',
	'Account_years' => 'anni',
	'Account_week' => 'settimana',
	'Account_weeks' => 'settimane',
	'Account_day' => 'giorno',
	'Account_days' => 'giorni',
	'Account_hour' => 'ora',
	'Account_hours' => 'ore',
	'Account_user_activated' => 'L\'Utente &egrave; stato attivato',
	'Account_users_activated' => 'Gli Utenti sono stati attivati.',
	'Account_user_deactivated' => 'L\'Utente &egrave; stato disattivato.',
	'Account_users_deactivated' => 'Gli Utenti sono stati disattivati.',
	'Account_user_deleted' => 'L\'Utente &egrave; stato eliminato.',
	'Account_users_deleted' => 'Gli Utenti sono stati eliminati.',
	'Account_activated' => 'Attivazione Account',
	'Account_activated_text' => 'Il tuo account è stato attivato',
	'Account_deactivated' => 'Disattivazione Account',
	'Account_deactivated_text' => 'Il tuo account è stato disattivato',
	'Account_deleted' => 'Eliminazione Account',
	'Account_deleted_text' => 'Il tuo account è stato eliminato',
	'Account_notification' => 'E-mail di notifica spedita.',

// Acronyms
	'Acronyms_title' => 'Amministrazione Acronimi',
	'Acronyms_explain' => 'Da questo pannello di controllo puoi aggiungere, modificare e rimuovere gli acronimi che verranno aggiunti automaticamente ai messaggi del forum.',
	'Acronym' => 'Acronimo',
	'Acronyms' => 'Acronimi',
	'Edit_acronym' => 'Modifica Acronimo',
	'Description' => 'Descrizione',
	'Add_new_acronym' => 'Aggiungi un nuovo Acronimo',
	'Update_acronym' => 'Aggiorna Acronimo',
	'Must_enter_acronym' => 'Devi inserire un acronimo e la sua descrizione',
	'No_acronym_selected' => 'Nessun Acronimo',
	'Acronym_updated' => 'L\'Acronimo selezionato &egrave; stato aggiornato',
	'Acronym_added' => 'L\'Acronimo &egrave; stato aggiunto',
	'Acronym_removed' => 'L\'Acronimo selezionato &egrave; stato rimosso',
	'Click_return_acronymadmin' => 'Clicca %sQUI%s per ritornare all\'Amministrazione Acronimi',

// Start add - Fully integrated shoutbox MOD
	'Prune_shouts' => 'Eliminazione Automatica Shouts',
	'Prune_shouts_explain' => 'Numero di giorni necessari per l\'eliminazione automatica degli shouts (se si imposta pari a zero, l\'eliminazione automatica viene disabilitata)',
// End add - Fully integrated shoutbox MOD

// inserted MOD-Code: ['Olympus-Style' Forum Rules] starts here ...
	'MOD_OS_ForumRules' => 'Regole del Forum',
	'Forum_rules' => 'Regole del Forum',
	'Rules_display_title' => 'Visualizza il titolo nel Box delle Regole del Forum?',
	'Rules_custom_title' => 'Titolo Personalizzato',
	'Rules_appear_in' => 'Queste regole appariranno...',
	'Rules_in_viewforum' => 'Visualizzando questo Forum',
	'Rules_in_viewtopic' => 'Visualizzando le discussioni in questo Forum',
	'Rules_in_posting' => 'Rispondendo o Inviando un messaggio in questo Forum',
// ... inserted MOD-Code: ['Olympus-Style' Forum Rules] ends here!

	'db_update generator' => 'Conversione SQL/PHP',
	'FTR: Config' => 'FTR: Configurazione',
	'FTR: Users' => 'FTR: Utenti',
	'Blocks Management' => 'Gestione Blocchi',
	'Blocks_Position_Tag' => 'Tag Posizione Blocchi',
	'Blocks Variables' => 'Variabili Blocchi',
	'Delete_Cache_Files' => 'Elimina Cache',
	'Page_Management' => 'Gestione Pagina',
	'Portal_Configuration' => 'Impostazioni Home Page',
	'Custom Field' => 'Campi Opzionali',
	'Optimize tables' => 'Ottimizza Tabelle',
	'XS_News_Config' => 'Configurazione XS News',
	'Email_List' => 'Lista Email',
	'Poll Results' => 'Risultati Sondaggi',

	'Php_Info_Explain' => 'In questa pagina sono elencate le informazioni sulla versione di PHP installata sul server. Sono inclusi in modo dettagliato i moduli caricati, le variabili disponibili, e le impostazioni predefinite. Queste informazioni potrebbero rivelarsi utili per la diagnosi dei problemi. Fatte attenzione, perchè alcuni hosting limitano le informazioni visualizzabili per ragioni di sicurezza. Si raccomanda di non fornire i dettagli di questa pagina tranne quando si richiede aiuto nel forum di Supporto.',


//XS2 Forum Header
	'IcyPhoenix_Main' => 'Icy Phoenix Home',
	'IcyPhoenix_Download' => 'Icy Phoenix Download',
	'IcyPhoenix_Code_Changes' => 'Code Changes Mod',
	'IcyPhoenix_Updates' => 'Icy Phoenix Updates',
	'PhpBB_Upgrade' => 'phpBB Upgrade',
	'Header_Welcome' => 'Benvenuto nel Pannello di Amministrazione di Icy Phoenix',

	'Prune_users' => 'Rimozione Utenti',

	'Prune_Overview' => 'Pruning Globale',
	'Prune_title_explain' => 'Da qui puoi modificare le impostazioni di pruning di ogni Forum.',
	'Prune_forum' => 'Forum',
	'Prune_active' => 'Pruning attivo',
	'Prune_freq' => 'Rmuovi tutti',
	'Prune_check' => 'Seleziona tutti',
	'Prune_days' => 'Giorni',
	'Prune_days_explain' => '* Rimuove le discussioni in cui non ci sono state risposte.',
	'Click_return_admin_po' => 'Clicca %sQUI%s, per ritornare a Pruning Globale',
	'Prune_update' => 'Le impostazioni di Pruning sono state salvate senza problemi',

	'Admin_notepad_title' => 'Notepad',
	'Admin_notepad_explain' => 'Da questa pagina gli Amministratori possono lasciare delle note per se stessi e per gli altri amministratori.',

// Start Autolinks Mod
	'Autolink_first' => 'Linka Automaticamente la parola chiave una volta in ogni messaggio',

	'Autolinks_title' => 'Autolinks',
	'Autolinks_explain' => 'Da questo pannello di controllo puoi aggiungere, modificare ed eliminare le parole chiave che saranno automaticamente rimpiazzate nei messaggi. Se l\'url a cui fa riferimento la parola chiave &egrave; un link interno al sito mettendo un segno di spunta sar&agrave; aggiunto anche l\'ID Sessione (SID).<br /><br />eg. Se viene trovata, la <b>Parola Chiave</b> nel messaggio sar&agrave; rimpiazzata con<br /><br />&lt;a href="<b>Url</b>" title="<b>Commento</b>" style="<b>Stile</b>"&gt;<b>Testo</b>&lt;/a&gt;',
	'links_keyword' => 'Parola Chiave',
	'links_title' => 'Testo',
	'links_url' => 'Url',
	'links_comment' => 'Commento',
	'links_style' => 'Stile',
	'links_forum' => 'Forum for Autolink',
	'links_forum2' => 'Forum',
	'links_internal' => 'Interno',
	'Autolinks_add' => 'Aggiungi un Autolink',
	'Add_keyword' => 'Aggiungi un Autolink',
	'Autolinks_edit' => 'Modifica un Autolink',
	'Edit_keyword' => 'Modifica un Autolink',
//$lang['Delete_link' => 'Metti un segno di spunta nel box per eliminare l\'autolink.',

	'Select_all_forums' => 'Tutti I Forums',
	'Autolink_added' => 'Autolink aggiunto senza problemi.',
	'Autolink_updated' => 'Autolink aggiornato senza problemi.',
	'Autolink_removed' => 'Autolink rimosso senza problemi.',
	'No_autolink_selected' => 'Non &egrave; stato selezionato nessun autolink per la rimozione.',
	'No_autolinks' => 'Non ci sono Autolinks nel database.',
	'Must_enter_autolink' => 'Devi inserire una Parola Chiave, un link, del testo, e un url.',
	'Click_return_autolinkadmin' => 'Clicca %sQUI%s per ritornare all\'Amministrazione Autolink',
// End Autolinks Mod

//030
	'Max_login_attempts' => 'Tentativi di login permessi',
	'Max_login_attempts_explain' => 'Il numero di tentativi di login consentiti.',
	'Login_reset_time' => 'Tempo di blocco login',
	'Login_reset_time_explain' => 'Determina il tempo in minuti che l\'utente deve aspettare prima di fare di nuovo il login dopo avere ecceduto il numero di tentativi di login consentiti.',

// XS BUILD 035
// Smilies Order
	'position_new_smilies' => 'I nuovi smilies debbono essere aggiunti prima o dopo gli smileys esistenti?',
	'smiley_change_position' => 'Cambia Punto Di Inserimento',
	'before' => 'Prima',
	'after' => 'Dopo',
	'Move_top' => 'Inserisci all\'inizio',
	'Move_end' => 'Inserisci alla fine',

// XS BUILD 037
// Pages Auth
	'auth_view_title' => 'Permessi Visualizzazione Pagine',
	'auth_view_portal' => 'Home Page',
	'auth_view_forum' => 'Forum',
	'auth_view_viewforum' => 'Visualizzazione Forum',
	'auth_view_viewtopic' => 'Visualizzazione Topic',
	'auth_view_faq' => 'FAQ',
	'auth_view_memberlist' => 'Lista Utenti',
	'auth_view_groupcp' => 'Gruppi Utenti',
	'auth_view_profile' => 'Profilo',
	'auth_view_search' => 'Ricerca',
	'auth_view_album' => 'Album',
	'auth_view_links' => 'Links',
	'auth_view_calendar' => 'Calendario',
	'auth_view_attachments' => 'Allegati',
	'auth_view_download' => 'Downloads',
	'auth_view_pic_upload' => 'Caricamento Immagini (Post Icy Images)',
	'auth_view_kb' => 'Knowledge Base',
	'auth_view_ranks' => 'Livelli',
	'auth_view_statistics' => 'Statistiche',
	'auth_view_recent' => 'Argomenti Recenti',
	'auth_view_referrers' => 'Referrers',
	'auth_view_rules' => 'Regolamento',
	'auth_view_site_hist' => 'Cronologia Sito',
	'auth_view_shoutbox' => 'Shoutbox',
	'auth_view_viewonline' => 'Utenti Online',
	'auth_view_contact_us' => 'Contattaci',
	'auth_view_ajax_chat' => 'Chat',
	'auth_view_ajax_chat_archive' => 'Archivio Chat',
	'auth_view_custom_pages' => 'Pagine Personalizzate',

// XS BUILD 041
// Begin Yahoo Submit Your Site MOD by www.pentapenguin.com
	'Yahoo_search' => 'Ricerca Yahoo',
	'Yahoo_search_settings' => 'Impostazioni Ricerca Yahoo',
	'Yahoo_search_settings_explain' => 'Da qui puoi configurare le impostazioni per la Sottoscrizione Sito Yahoo. Per maggiori informazioni vedi <a href="http://submit.search.yahoo.com/free/request" target="_blank">Sottoscrizione Sito  Yahoo</a>.',
	'Yahoo_search_select_forums' => 'Seleziona Forum',
	'Yahoo_search_select_forums_explain' => 'Seleziona quali forum includere in questa lista. Puoi selezionare quanti forum desideri cliccando sul nome di ogni forum e tenendo premuto il tasto Ctrl (Windows) o il tasto Command (Macintosh). Tutti i forum che sono pubblicamente visionabili sono selezionati in modo predefinito.',
	'Yahoo_search_savepath' => 'Percorso salvataggio lista URL',
	'Yahoo_search_savepath_explain' => 'Immetti un percorso in cui sar&agrave; salvato il file con la lista delle URL. Immetti il percorso relativo al percorso di Icy Phoenix -- es: se salvi il file nella cartella cache <b>www.yoursite.com/cache/</b>, allora immetti <b>cache</b>. Ricordati di dare CHMOD 777 a questa cartella.',
	'Yahoo_search_additional_urls' => 'Immetti URL aggiuntive',
	'Yahoo_search_additional_urls_explain' => 'Immetti URL aggiuntive che vuoi vengano ispezionate da Yahoo, una per ogni riga. Devi inserire l\'URL completa -- es <b>http://www.yoursite.com/yourpage.html</b>.',
	'Yahoo_search_compress_file' => 'Comprimi la lista delle URL',
	'Yahoo_search_compress_file_explain' => 'Selezionando Si, la lista delle URL verr&agrave; compressa utilizzando Gzip, che garantir&agrave; un file di dimensioni minori e quindi un minor spreco di banda per il bot di Yahoo. Questa impostazione non funzioner&agrave; sui server che non supportano la compressione Gzip.',
	'Yahoo_search_compression_level' => 'Livello di compressione del File',
	'Yahoo_search_compression_level_explain' => 'Seleziona il livello di compressione del file. 9 &egrave; il valore raccomandato se non incontri problemi, altrimenti abbassa tale valore.',
	'Yahoo_search_generate_file' => 'Genera File',
	'Yahoo_search_error_no_forums' => 'Errore: non sono stati selezionati forum. Torna Indietro e selezionane almeno uno.',
	'Yahoo_search_error_no_gzip' => 'Errore: o stai utilizzando una vecchia versione di PHP o il tuo server non supporta Gzip. Per Cortesia torna indietro e seleziona <b>No</b> in <b>Comprimi Lista URL</b>.',
	'Yahoo_search_error_unopenable_file' => 'Errore: Impossibile Aprire il file %s.',
	'Yahoo_search_error_unwritable_file' => 'Errore: Impossibile Scrivere il file %s.',
	'Yahoo_search_error_unclosable_file' => 'Errore: Impossibile Chiudere il file %s.',
	'Yahoo_search_error_update_sql' => 'Errore: Impossibile Aggiornare il Campo %s.',
	'Yahoo_search_error_unknown_file_error' => 'Errore: il file non &egrave; stato salvato per un errore sconosciuto.',
	'Yahoo_search_file_done' => 'La Lista delle URL &egrave; terminata. Per cortesia compia l\'URL riportata qui sotto, nel campo apposito di Yahoo:<br /><b>%s</b>',
// Finish Yahoo Submit Your Site MOD by www.pentapenguin.com

// XS BUILD 044
	'Max_bookmarks_links' => 'Numero massimo di invii di bookmark nel link-tag',
	'Max_bookmarks_links_explain' => 'Numero massimo di invii di bookmark nel link-tag all\'inizio del documento. Questa informazione viene usata p.e. da Mozilla. Impostare 0 per disabilitare la funzione.',

	'Faq_manager' => 'Amministrazione FAQ',
	'Faq_Rules_manager' => 'Faq &amp; Regolamento',
	'board_rules' => 'Regolamento Forum',
	'board_faq' => 'Faq Forum',
	'bbcode_faq' => 'Faq BBcode',
	'attachment_faq' => 'Faq Allegati',
	'prillian_faq' => 'FAQ Prillian',
	'bid_faq' => 'Faq Buddy List',

	'Account_active2' => 'Utenti Attivi',
	'Account_inactive2' => 'Utenti Inattivi',

	'Search_Flood_Interval' => 'Intervallo Flood per la Ricerca',
	'Search_Flood_Interval_explain' => 'Numero di secondi che un utente deve attendere tra le richieste della pagina di ricerca',
	'Confirm_delete_smiley' => 'Sei sicuro di voler eliminare questo Smiley?',
	'Confirm_delete_word' => 'Sei sicuro di voler eliminare questa Parola Censurata?',
	'Confirm_delete_rank' => 'Sei sicuro di voler eliminare questo Livello?',

// Custom Profile Fields MOD
	'custom_field_notice_admin' => 'Questi campi sono stati creati da un amministratore del sito. Per avere delle informazioni aggiuntive, verifica cosa viene indicato nella sezione Campo Profilo. Gli elementi contrassegnati con * sono campi obbligatori. Gli elementi contrassegnati con &dagger; verranno visualizzati solo dagli amministratori.',

	'field_deleted' => 'Il campo selezionato &egrave; stato eliminato',
	'double_check_delete' => 'Sei sicuro di voler eliminare definitivamente il campo "%s" dal database?',

	'here' => 'QUI',
	'new_field_link' => '<a href="' . append_sid($filename . '?mode=add&pfid=x') . '">%s</a>',
	'edit_field_link' => '<a href="' . append_sid($filename . '?mode=edit&pfid=x') . '">%s</a>',
	'index_link' => '<a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&pfid=x') . '">%s</a>',
	'field_exists' => 'Questo campo esiste gi&agrave;.<br /><br />Puoi provare a creare un <a href="' . append_sid($filename . '?mode=add&pfid=x') . '">nuovo</a> campo,<br /><br />Oppure provare a <a href="' . append_sid($filename . '?mode=edit&pfid=x') . '">modificare</a> quello gi&agrave; esistente.',
	'click_here_here' => 'Clicca <a href="' . append_sid($filename . '?mode=add&pfid=x') . '">QUI</a> per aggiungere un nuovo campo nel profilo,<br /><br />O clicca <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&pfid=x') . '">QUI</a> per tornare all\'Indice Del Pannello Di Amministrazione.',
	'field_success' => 'Campo aggiunto correttamente!<br /><br />Clicca <a href="' . append_sid($filename . '?mode=add&pfid=x') . '">QUI</a> per aggiungere un nuovo campo nel profilo,<br /><br />O clicca <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&pfid=x') . '">QUI</a> per tornare all\'Indice Del Pannello Di Amministrazione.',
	'Custom_Profile' => 'Campi Profilo',
	'profile_field_created' => 'Campo Profilo Creato',
	'profile_field_updated' => 'Campo Profilo Aggiornato',

	'add_field_title' => 'Aggiungi Campo Profilo',
	'edit_field_title' => 'Modifica Campi Profilo',
	'add_field_explain' => 'In questa sezione puoi creare nuovi campi nel profilo degli utenti.',
	'edit_field_explain' => 'In questa sezione puoi modificare i campi del profilo che hai gi&agrave; creato.',

	'add_field_general' => 'Impostazioni Generali',
	'add_field_admin' => 'Impostazioni Amministrazione',
	'add_field_view' => 'Impostazioni Visualizzazione',
	'add_field_text_field' => 'Campo Testo',
	'add_field_text_area' => 'Area Di Testo',
	'add_field_radio_button' => 'Pulsante Radio',
	'add_field_checkbox' => 'Casella Di Selezione',

	'default_value' => 'Valore Predefinito',
	'default_value_explain' => 'Questo &egrave; il valore predefinito per questo campo. Se un nuovo utente non imposta questo campo, verr&agrave; utilizzato questo valore predefinito. Se questo &egrave; un campo obbligatorio, a tutti gli utenti esistenti verr&agrave; assegnato questo valore predefinito.',
	'default_value_radio_explain' => 'Inserisci un nome identico a quello inserito come valore del campo.',
	'default_value_checkbox_explain' => 'Inserisci i valori che debbono essere selezionati come predefiniti. Questi valori debbono coincidere con i valori indicati nelle specifiche del campo.',
	'max_length' => 'Lunghezza Massima',
	'max_length_explain' => 'Questa &egrave; la lunghezza massima consentita per questo campo.',
	'max_length_value' => ' Deve essere un numero tra %d e %d.',
	'available_values' => 'Valori Disponibili',
	'available_values_explain' => 'Inserisci ciascun valore sulla propria riga',

	'add_field_view_disclaimer' => 'Tutte queste impostazioni verranno considerate come "NO" se gli utenti non sono abilitati alla visualizzazione di questo campo.',

	'add_field_name' => 'Nome Campo',
	'add_field_name_explain' => 'Inserisci il nome che vuoi associare a questo campo',
	'add_field_description' => 'Descrizione Campo',
	'add_field_description_explain' => 'Inserisci una descrizione che vuoi associare a questo campo. La descrizione verr&agrave; visualizzata in piccolo sotto il nome del campo.',
	'add_field_type' => 'Tipo Campo',
	'add_field_type_explain' => 'Seleziona il tipo di campo che vuoi aggiungere. Sulla destra trovi alcuni esempi per ciascun tipo di campo.',
	'edit_field_type_explain' => 'Seleziona la nuova tipologia che vuoi assegnare a questo campo. Sulla destra trovi alcuni esempi per ciascun tipo di campo..',
	'add_field_required' => 'Imposta come Campo Obbligatorio',
	'add_field_required_explain' => 'Se il campo viene impostato come "Obbligatorio", ciascun nuovo utente verr&agrave; obbligato a compilarlo, mentre agli utenti esistenti verr&agrave; assegnato il valore predefinito.',
	'add_field_user_can_view' => 'Consenti Visualizzazione',
	'add_field_user_can_view_explain' => 'Se questa opzione viene attivata, l\'utente potr&agrave; visualizzare e modificare questo campo. Se l\'opzione viene disattivata, soltanto gli amministratori potranno visualizzare o modificare questo campo. Se l\'opzione viene disattivata, il campo non potr&agrave; essere obbligatorio.',
	'view_in_profile' => 'Visualizzazione Profilo',
	'profile_locations_explain' => 'Queste opzioni servono per impostare dove deve essere visualizzato il campo nel profilo.',
	'contacts_column' => 'Sezione Profilo/Contatti',
	'about_column' => 'Sezione Profilo/Descrizione',
	'view_in_memberlist' => 'Lista Utenti',
	'view_in_topic' => 'Messaggi',
	'topic_locations_explain' => 'Queste opzioni servono per impostare dove deve essere visualizzato il campo nei messaggi.',
	'author_column' => 'Autore',
	'above' => 'Sopra ',
	'below' => 'Sotto ',

	'textarea' => 'Area Di Testo',
	'textarea_example' => "Questo &egrave; un esempio\n   di Area Di Testo.",
	'text_field' => 'Campo Testo',
	'text_field_example' => 'Questo &egrave; un esempio di Campo Testo',
	'radio' => 'Pulsante Radio',
	'radio_example' => 'Questo &egrave; un esempio di due Pulsanti Radio',
	'checkbox' => 'Casella Di Selezione',
	'checkbox_example' => 'Questo &egrave; un esempio di due Caselle Di Selezione',

	'profile_field_list' => 'Campi Personalizzati',
	'profile_field_list_explain' => 'Questi sono tutti campi personalizzati che sono stati creati, con i rispettivi links per modificarli o eliminarli.',
	'profile_field_id' => 'ID #',
	'profile_field_name' => 'Nome Campo',
	'profile_field_action' => 'Azione',
	'no_profile_fields_exist' => 'Non esistono Campi Personalizzati.',

	'enter_a_name' => '<strong>Devi</strong> inserire il nome del campo<br /><br />Torna indietro e riprova',
// END Custom Profile Fields MOD

// XS BUILD 045
	'Add' => 'Aggiungi',
	'split_global_announce' => 'Dividi Annunci Globali',
	'split_announce' => 'Dividi Annunci',
	'split_sticky' => 'Dividi Importanti',
	'split_topic_split' => 'Dividi Argomenti',
	'Announce_settings' => 'Impostazioni Annunci',
	'Split_settings' => 'Impostazioni Divisioni',
	'Allow_generator' => 'Abilita Avatar Generator',
	'Avatar_generator_template_path' => 'Percorso Template Avatar Generator',
	'Avatar_generator_template_path_explain' => 'Percorso principale directory Icy Phoenix per i templates di Avatar Generator, es. images/avatars/generator_templates',

	'Server_Cookies' => 'Server &amp; Cookies',

// BUILD 050
	'Disable_Registration_IP_Check' => 'Disabilita blacklist IP pubbliche in fase di registrazione',
	'Disable_Registration_IP_Check_Explain' => 'Normalmente viene verificato l\'indirizzo IP dell\'utente in fase di registrazione se la funzione non viene disabilitata. Il controllo &egrave; piuttosto stringente, e potrebbero venire bloccati anche degli indirizzi IP che si trovano nelle black list per errore.',
	'Config_explain2' => 'Il form sottostante permette la personalizzazione del calendario e dei subforum.',
	'Forum_postcount' => 'Incrementa contatore messaggi degli utenti',

// XS BUILD 057
	'Use_Captcha' => 'Usa CAPTCHA',
	'Use_Captcha_Explain' => 'Se impostato su SI, verr&agrave; generato un codice di conferma visuale in modalit&agrave; avanzata. Se impostato su NO, verr&agrave; generato il codice di attivazione basandosi sulla funzione standard di Icy Phoenix.',
	'Sync_Pics_Count' => 'Cliccando su <b>SI</b> verranno sincronizzati i contatori di immagini nelle gallerie personali.',
	'Pics_Count_Synchronized' => 'Contatori sincronizzati correttamente',
	'Pics_Count_Not_Synchronized' => 'Contatori non sincronizzati',

// Icy Phoenix - BUILD 001
// Ajax Shoutbox - BEGIN
	'Shoutbox_config' => 'AJAX Shoutbox',
	'Shout_read_only' => 'Sola Lettura',
	'Displayed_shouts' => 'Messaggi Visualizzati',
	'Displayed_shouts_explain' => 'Numero di messaggi che verranno visualizzati nella Shoutbox.<br /><i>Inserire <b>0</b> per visualizzare tutti i messaggi.</i>',
	'Stored_shouts' => 'Messaggi Memorizzati',
	'Stored_shouts_explain' => 'Numero di messaggi memorizzati nel DB.<br />Questo valore dovrebbe essere uguale o maggiore al numero di messaggi visualizzati.<br /><i>Inserire <b>0</b> per memorizzare tutti i messaggi.</i>',
	'Shout_guest_allowed' => 'Consenti l\'uso agli ospiti',
	'Shoutbox_flood' => 'Intervallo Flood',
	'Shoutbox_flood_explain' => 'Numero di secondi minimo necessario tra l\'invio di un messaggio ed il successivo.',
	'Shoutbox_refreshtime' => 'Tempo Di Aggiornamento',
	'Shoutbox_refresh_explain' => 'Tempo espresso in millisecondi per l\'aggiornamento della Shoutbox.<br /><i>Questo valore dovrebbe essere almeno 1000 millisecondi.</i>',
// Ajax Shoutbox - END

/* lang_postcount.php - BEGIN */
	'Postcounts' => 'Gestione Numero Messaggi',
	'Post_count_explain' => 'Da qui puoi modificare il numero di messaggi di un certo utente.',
	'Modify_post_counts' => 'Modifica Numero Messaggi',
	'Post_count_changed' => 'Hai modificato il numero di messaggi di un utente senza problemi!',
	'Click_return_posts_config' => 'Clicca %sQUI%s per ritornare alla gestione numero messaggi',
	'Modify_post_count' => 'Modifica Numero Messaggi',
	'Edit_post_count' => 'Modifica Numero Messaggi per <b>%s</b>',
	'Post_count' => 'Numero Messaggi',
/* lang_postcount.php - END */

/* lang_megamail.php - BEGIN */
	'Megamail_Explain' => 'Da questa pagina puoi inviare un messaggio privato o email a tutti gli utenti o agli utenti di un gruppo specifico. Per fare questo, verr&agrave; inviato un messaggio all\'indirizzo email dell\'amministratore che hai fornito, ed una BCC (Blind Carbon Copy) verr&agrave; inviata ai destinatari.<br />Le email verranno inviate in numerosi blocchi: in questo modo si dovrebbero aggirare le problematiche derivanti da timeout e da sovraccarico del server. Lo stato d\'invio delle email generali sar&agrave; salvato nel database. Puoi chiudere la finestra quando vuoi interrompere momentaneamente l\'invio delle email generali (il blocco attuale sar&agrave; comunque spedito). Puoi continuare in seguito da dove eri rimasto.<br /><b>Se sono abilitate email in formato HTML allora l\'email verr&agrave; inviata in formato HTML, per cui dovrai fare attenzione che le interruzioni di linea avvengano tramite &lt;br /&gt;.</b><br /><b>Se scegli di inviare l\'email usando HTML Integrale, ricorda che non verr&agrave; usato nessun template o css, e dovrai inserire un codice HTML completo con tanto di tag HEAD e BODY.</b><br /><b>Ricorda anche che se decidi di inviare un PM di massa, l\'unico formato supportato &egrave; il BBCode, se usi codice HTML non verr&agrave; processato, ma mostrato cos&igrave; com\'&egrave;.</b>',
	'megamail_inactive_users' => 'Utenti non entrati negli ultimi {DAYS} giorni',
	'megamail_header' => 'Sessione Email',
	'megamail_id' => 'ID Email',
	'megamail_batchstart' => 'Elaborate',
	'megamail_batchsize' => 'Blocchi',
	'megamail_batchwait' => 'Pausa',
	'megamail_created_message' => 'Le email generali sono state salvate nel database.<br /><br />Per iniziare a spedire clicca %sQUI%s o attendi finch&egrave; il Meta-Aggiornamento ti riporter&agrave; qui...',
	'megamail_send_message' => 'Il blocco Corrente (%s - %s) &egrave stato spedito.<br /><br />Per riprendere a spedire clicca %sQUI%s o attendi finch&egrave; il Meta-Aggiornamento ti riporter&agrave; qui...',
	'megamail_status' => 'Status',
	'megamail_proceed' => '%sProcedi ora%s',
	'megamail_done' => 'FATTO',
	'megamail_none' => 'Non sono stati trovati records.',
	'megamail_delete_confirm' => 'Vuoi davvero eliminare questa email?',
	'megamail_deleted' => 'Email eliminata correttamente',
	'megamail_click_return' => 'Clicca %sQUI%s per ritornare alla gestione Email / PM',
/* lang_megamail.php - END */

/* lang_admin_voting.php - BEGIN */
// Admin Voting MOD
	'Admin_Vote_Explain' => 'Risultati Sondaggi (chi e come ha votato).',
	'Admin_Vote_Title' => 'Amministrazione Sondaggi',
	'Vote_id' => '#',
	'Poll_topic' => 'Discussione',
	'Vote_username' => 'Votante(i)',
	'Vote_end_date' => 'Durata Votazione',
	'Sort_vote_id' => 'Numero Sondaggio',
	'Sort_poll_topic' => 'Discussione',
	'Sort_poll_title' => 'Titolo Sondaggio',
	'Sort_poll_start' => 'Data Inizio',
	'Sort_poll_end' => 'Data Fine',
	'Submit' => 'Invia',
	'Select_sort_field' => 'Selezione campo Ordine',
	'Sort_ascending' => 'Crescente',
	'Sort_descending' => 'Decrescente',
/* lang_admin_voting.php - END */

/* lang_admin_gd_info.php - BEGIN */
	'GD_Title' => 'GD Info',
	'NO_GD' => 'No GD',
	'GD_Description' => 'Da qui puoi ottenere le informazioni riguardanti la libreria GD Installata',
	'GD_Freetype_Support' => 'Supporto Freetype Fonts:',
	'GD_Freetype_Linkage' => 'Tipo di Link Freetype:',
	'GD_T1lib_Support' => 'Supporto T1lib',
	'GD_Gif_Read_Support' => 'Supporto Lettura Gif:',
	'GD_Gif_Create_Support' => 'Supporto Creazione Gif:',
	'GD_Jpg_Support' => 'Supporto Jpg/Jpeg:',
	'GD_Png_Support' => 'Supporto Png:',
	'GD_Wbmp_Support' => 'Supporto WBMP:',
	'GD_XBM_Support' => 'Supporto XBM:',
	'GD_Jis_Mapped_Support' => 'Supporto Fonts Giapponesi:',
	'GD_True' => 'Si',
	'GD_False' => 'No',
/* lang_admin_gd_info.php - END */

/* lang_admin_captcha.php - BEGIN */
	'VC_Captcha_Config' => 'CAPTCHA',
	'captcha_config_explain' => 'Da qui puoi modificare l\'aspetto dell\'immagine che indica il codice di conferma quando la conferma visuale &egrave; attivata.',
	'VC_active' => 'La Conferma visuale &egrave; attiva!',
	'VC_inactive' => 'La Conferma visuale non &egrave; attiva!',
	'background_configs' => 'Sfondo',
	'Click_return_captcha_config' => 'Clicca %sQUI%s per tornare alla Configurazione CAPTCHA',

	'CAPTCHA_width' => 'Larghezza CAPTCHA',
	'CAPTCHA_height' => 'Altezza CAPTCHA',
	'background_color' => 'Colore di Sfondo',
	'background_color_explain' => 'Da Inserire il codice esadecimale (es. #0000FF per il blu).',
	'pre_letters' => 'Numero di lettere con ombra',
	'pre_letters_explain' => '',
	'great_pre_letters' => 'Ombra ingrandita per le lettere',
	'great_pre_letters_explain' => '',
	'Random' => 'Casuale',
	'random_font_per_letter' => 'Font Casuale per ogni lettera',
	'random_font_per_letter_explain' => 'Tutte le lettere useranno un font casuale.',

	'back_chess' => 'Sfondo a Scacchiera',
	'back_chess_explain' => 'Riempie lo sfondo con 16 rettangoli colorati.',
	'back_ellipses' => 'Ellissi',
	'back_arcs' => 'Linee Curve',
	'back_lines' => 'Linee',
	'back_image' => 'Immagine di Sfondo',
	'back_image_explain' => 'Questa Funzione non è ancora supportata',

	'foreground_lattice' => 'Griglia di Sfondo',
	'foreground_lattice_explain' => '(larghezza x altezza)<br />Genera una griglia sul CAPTCHA',
	'foreground_lattice_color' => 'Colore Griglia',
	'foreground_lattice_color_explain' => 'Da Inserire il codice esadecimale (es. #0000FF per il blu).',
	'gammacorrect' => 'Correzione Contrasto',
	'gammacorrect_explain' => '(0 = off)<br />NOTA!!! Cambi di questo valore hanno un effetto diretto sulla leggibilit&agrave; del CAPTCHA!',
	'generate_jpeg' => 'Tipo Immaigine',
	'generate_jpeg_explain' => 'Il formato JPEG ha una maggiore compressione rispetto al PNG: la modifica della qualit&agrave;, (max 95%), avr&agrave; un\'influenza diretta sulla leggibilit&agrave; del CAPTCHA.',
	'generate_jpeg_quality' => 'Qualit&agrave;',
/* lang_admin_captcha.php - END */

/* lang_admin_topic_shadow.php - BEGIN */
/* General */
	'Del_Before_Date' => 'Elimina tutte le Tracce degli Argomenti prima del %s<br />', // %s = insertion of date
	'Deleted_Topic' => 'Elimina Traccia Argomento %s<br />', // %s = topic name
	'Affected_Rows' => '%d elementi sono stati modificati<br />', // %d = affected rows (not avail with all databases!)
	'Delete_From_Date' => 'Tutte le Tracce degli Argomenti creati prima della data immessa verranno eliminati.',
	'Delete_Before_Date_Button' => 'Elimina tutti prima della data',
	'No_Shadow_Topics' => 'Non &egrave; stata trovata Tracccia degli Argomenti.',
	'Topic_Shadow' => 'Traccia Argomenti',
	'TS_Desc' => 'Permette la rimozione della Traccia degli Argomenti senza l\'eliminazione del messaggio attuale. Le tracce degli Argomenti vengono create nel momento in cui sposti una discussione da un forum ad un altro e scegli di lasciare un link nel forum originario alla nuova Discussione.',
	'Month' => 'Mese',
	'Day' => 'Giorno',
	'Year' => 'Anno',
	'Clear' => 'Ripulisci',
	'Resync_Ran_On' => 'Risincronizza %s<br />', // %s = insertion of forum name
	'Version' => 'Versione',

	'Title' => 'Titolo',
	'Moved_To' => 'Spostato in',
	'Moved_From' => 'Spostato da',

/* Modes */
	'topic_time' => 'Orario Discussione',
	'topic_title' => 'Titolo Discussione',

/* Errors */
	'Error_Month' => 'Devi immettere i mesi tra 1 e 12',
	'Error_Day' => 'Devi immettere i giorni tra 1 e 31',
	'Error_Year' => 'Devi immettere gli anni tra 1970 e 2038',
	'Error_Topics_Table' => 'Errore nell\'accedere alla tabella delle Discussioni',
/* lang_admin_topic_shadow.php - END */

/* lang_admin_rebuild_search.php - BEGIN */
	'Rebuild_search' => 'Ricostruisci Ricerca',
	'Rebuild_search_desc' => 'Questo strumento indicizzer&agrave; tutti i post della tua Knowledge Base, ricostruendo la tabella di Ricerca. Potrebbe metterci molto, per&ograve; tu non muoverti da questa pagina, finch&eacute; non &egrave; terminato.',
	'Post_limit' => 'Limite Post',
	'Time_limit' => 'Limite di Tempo',
	'Refresh_rate' => 'Frequenza di aggiornamento',

	'Next' => 'Successivo',
	'Finished' => 'Finito',
/* lang_admin_rebuild_search.php - END */

/* lang_admin_faq_editor.php - BEGIN */
	'faq_editor' => 'Modifica Faq',
	'faq_editor_explain' => 'Questo modulo vi permette di aggiungere e modificare le vostre FAQ, FAQ su BBCode o Regolamento. Voi <u>non dovete</u> rimuovere o modificare la sezione <b>Informazioni su phpBB 2</b> o <b>Informazioni su Icy Phoenix</b>.',

	'faq_select_language' => 'Scegli la lingua delle faq che vuoi modificare',
	'faq_retrieve' => 'Apri File',

	'faq_block_delete' => 'Sei sicuro di voler cancellare questo blocco?',
	'faq_quest_delete' => 'Sei sicuro di voler cancellare questa domanda (e la sua risposta)?',

	'faq_quest_edit' => 'Modifica Domande & Risposte',
	'faq_quest_create' => 'Crea Nuove Domande & Risposte',

	'faq_quest_edit_explain' => 'Modifica Domanda e risposta, può anche cambiare il Blocco se volete',
	'faq_quest_create_explain' => 'Digitate la nuova Domanda e Risposta e premete Invia.',

	'faq_block' => 'Blocco',
	'faq_quest' => 'Domanda',
	'faq_answer' => 'Risposta',

	'faq_block_name' => 'Nome Blocco',
	'faq_block_rename' => 'Rinomina Blocco',
	'faq_block_rename_explain' => 'Cambia il nome del blocco nel file',

	'faq_block_add' => 'Aggiungi Blocco',
	'faq_quest_add' => 'Aggiungi Domanda',

	'faq_no_quests' => 'Nessuna domanda in qusto blocco. Questo impedirà ai blocchi dopo questo di essere visualizzati. Cancellate il blocco o aggiungetvi Domande.',
	'faq_no_blocks' => 'Nessun Blocco definito, per aggiungere nuove domande e risposte dovete creare almeno un Blocco.',

	'faq_write_file' => 'Impossibile Scrivere sul file!',
	'faq_write_file_explain' => 'Assicurati che i file in language/lang_italian/ o equivalenti siano <i>scrivibili</i> (chmod 666 o superiore) per usare questo pannello di controllo.',
/* lang_admin_faq_editor.php - END */

/* lang_admin_rules_editor.php - BEGIN */
	'rules_editor' => 'Modifica rules',
	'rules_editor_explain' => 'Questo modulo vi permette di aggiungere e modificare il Regolamento della Board.',

	'rules_select_language' => 'Scegli la lingua del Regolamento che vuoi modificare',
	'rules_retrieve' => 'Apri File',

	'rules_block_delete' => 'Sei sicuro di voler cancellare questo blocco?',
	'rules_quest_delete' => 'Sei sicuro di voler cancellare questa domanda (e la sua risposta)?',

	'rules_quest_edit' => 'Modifica Domande & Risposte',
	'rules_quest_create' => 'Crea Nuove Domande & Risposte',

	'rules_quest_edit_explain' => 'Modifica Domanda e risposta, può anche cambiare il Blocco se volete',
	'rules_quest_create_explain' => 'Digitate la nuova Domanda e Risposta e premete Invia.',

	'rules_block' => 'Blocco',
	'rules_quest' => 'Domanda',
	'rules_answer' => 'Risposta',

	'rules_block_name' => 'Nome Blocco',
	'rules_block_rename' => 'Rinomina Blocco',
	'rules_block_rename_explain' => 'Cambia il nome del blocco nel file',

	'rules_block_add' => 'Aggiungi Blocco',
	'rules_quest_add' => 'Aggiungi Domanda',

	'rules_no_quests' => 'Nessuna domanda in qusto blocco. Questo impedirà ai blocchi dopo questo di essere visualizzati. Cancellate il blocco o aggiungetvi Domande.',
	'rules_no_blocks' => 'Nessun Blocco definito, per aggiungere nuove domande e risposte dovete creare almeno un Blocco.',

	'rules_write_file' => 'Impossibile Scrivere sul file!',
	'rules_write_file_explain' => 'Assicurati che i file in language/lang_italian/ o equivalenti siano <i>scrivibili</i> (chmod 666 o superiore) per usare questo pannello di controllo.',
/* lang_admin_rules_editor.php - END */

/* lang_admin_priv_msgs.php - BEGIN */
/* Added in 1.6.0 */
	'PM_View_Type' => 'Vedi Tipo di PM',
	'Show_IP' => 'Visualizza indirizzo IP',
	'Rows_Per_Page' => 'Righe per Pagina',
	'Archive_Feature' => 'Caratteristica Archivio',
	'Inline' => 'Nella stessa pagina',
	'Pop_up' => 'Pop-up',
	'Current' => 'Attuale',
	'Rows_Plus_5' => 'Aggiungi 5 Righe',
	'Rows_Minus_5' => 'Rimuovi 5 Righe',
	'Enable' => 'Abilita',
	'Disable' => 'Disabilita',
	'Inserted_Default_Value' => 'La Configuraziones di %s non esiste, inserito il valore predefinito<br />', // %s = config name
	'Updated_Config' => 'Configurazione di %s Aggiornata<br />', // %s = config item
	'Archive_Table_Inserted' => 'La Tabella Archivio non esite, creala<br />',
	'Switch_Normal' => 'Modo Normale',
	'Switch_Archive' => 'Modo Archivio',

/* General */
	'Deleted_Message' => 'Messaggio Privato Eliminato - %s <br />', // %s = PM title
	'Archived_Message' => 'Messaggio Privato Archiviato - %s <br />', // %s = PM title
	'Archived_Message_No_Delete' => 'Non &egrave; possibile eliminare %s, perch&egrave; &egrave; stato contrassegnato per essere Archiviato <br />', // %s = PM title
	'Private_Messages' => 'Messaggi Privati',
	'Private_Messages_Archive' => 'Archivio Messaggi Privati',
	'Archive' => 'Archivia',
	'To' => 'A',
	'Subject' => 'Oggetto',
	'Sent_Date' => 'Data Spedizione',
	'From' => 'Da',
	'Sort' => 'Ordina',
	'Filter_By' => 'Filtra Per',
	'PM_Type' => 'Tipo di PM',
	'Status' => 'Stato',
	'No_PMS' => 'Non ci sono Messaggi Privati che corrispondono ai tuoi criteri di ordinamento',
	'Archive_Desc' => 'Questa &egrave; una lista dei Messaggi Privati che hai deciso di Archiviare. Gli Utenti non avranno pi&ugrave; accesso a questi PM, ma tu li puoi vedere ed eliminare in ogni momento.',
	'Normal_Desc' => 'Tutti i Messaggi privati del tuo Forum possono essere gestiti da qui. Puoi decidere di leggerli e scegliere, eventualmente, di eliminarli o di archiviarli (i Pm vengono mantenuti, ma gli Utenti non possono pi&ugrave; leggerli).',
	'Remove_Old' => 'PM Orfani:</a> <span class="gensmall">Gli Utenti che non esistono pi&ugrave; potrebbero aver lasciato alcuni PM, con questo strumento verranno rimossi.</span>',
	'Remove_Sent' => 'Cassetta PM Spediti:</a> <span class="gensmall">I PM nella cassetta Spediti sono delle copie esatte dei messaggi che sono stati spediti, tranne per il fatto che sono assegnati al mittente dopo che l\'altro utente ha letto il PM. In realt&agrave; questi PM non sono necessari.</span>',
	'Removed_Old' => 'Sono stati rimossi tutti i PM Orfani<br />',
	'Removed_Sent' => 'Sono stati rimossi tutti i PM Spediti<br />',
	'Utilities' => 'Utilit&agrave; di Eliminazione di Massa',
	'Nivisec_Com' => 'Nivisec.com',

/* PM Types */
	'PM_-1' => 'Tutti i Tipi', //PRIVMSGS_ALL_MAIL = -1
	'PM_0' => 'PM Letti', //PRIVMSGS_READ_MAIL = 0
	'PM_1' => 'PM Nuovi', //PRIVMSGS_NEW_MAIL = 1
	'PM_2' => 'PM Spediti', //PRIVMSGS_SENT_MAIL = 2
	'PM_3' => 'PM Salvati (In)', //PRIVMSGS_SAVED_IN_MAIL = 3
	'PM_4' => 'PM Salvati (Out)', //PRIVMSGS_SAVED_OUT_MAIL = 4
	'PM_5' => 'PM Non-Letti', //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
	'Error_Other_Table' => 'Errore nell\'interrogazione di una tabella richiesta.',
	'Error_PM_Text_Table' => 'Errore nell\'interrogazione della tabella Private Messages Text.',
	'Error_PM_Table' => 'Errore nell\'interrogazione della tabella Private Messages.',
	'Error_PM_Archive_Table' => 'Errore nell\'interrogazione della tabella Private Messages Archive.',
	'No_Message_ID' => 'Non &egrave; stato specificato nessun ID messaggio.',

/* lang_admin_link.php - BEGIN */
	'Link_Categories_Title' => 'Gestione Categorie Link',
	'Link_Categories_Explain' => 'In questa schermata potete gestire le categorie dei link: crearle, modificarle, cancellarle, ordinarle, etc. .',
	'Category_Permissions' => 'Permessi categoria"',
	'Category_Title' => 'Titolo categoria',
	'Category_Desc' => 'Descrizione categoria',
	'View_level' => 'Livello visualizzazione',
	'Upload_level' => 'Livello di invio',
	'Rate_level' => 'Livello di valutazione',
	'Comment_level' => 'Livello di commento',
	'Edit_level' => ' Livello modifica',
	'Delete_level' => 'Livello cancellazione',
	'New_category_created' => 'Creazione categoria completata.',
	'Click_return_link_category' => 'Clicca %sQUI%s per ritorna alla gestione Categorie dei Link',
	'Category_updated' => 'Categoria aggiornata.',
	'Delete_Category' => 'Cancella categoria',
	'Delete_Category_Explain' => 'Il form seguente vi permetter&agrave;di eliminare una categoria',
	'Category_deleted' => 'Cancellazione categoria completata.',
	'Category_changed_order' => 'Ordine della categoria modificato.',

//Config
	'Link_Config' => 'Configurazione link',
	'Link_config_explain' => 'Questa pagina vi permetter&agrave;  di cambiare i parametri generali dei vostri links',
	'lock_submit_site' => 'Blocca immissione sito utente',
	'allow_guest_submit_site' => 'Permetti ai visitatori di inserire un sito',
	'allow_no_logo' => 'Permetti l\'inserimento di siti senza banner',
	'site_logo' => 'L\'URL in cui si trova il vostro logo (URL completo)',
	'site_url' => 'L\'Url del vostro sito',
	'width' => 'Larghezza massima dei banners',
	'height' => 'Altezza massima dei banners',
	'linkspp' => 'Numero massimo di link per pagina',
	'interval' => 'Quanto velocemente i banners sono visualizzati',
	'display_logo' => 'Quanti banners vengono mostrati contemporaneamente',
	'Link_display_links_logo' => 'Mostra i banner',
	'Link_email_notify' => 'Avvisa l\'admin via email per l\'immissione di un link',
	'Link_pm_notify' => 'Avvisa l\'admin via messaggio privato per l\'immissione di un link',
	'Link_config_updated' => 'Aggiornamento Configurazione Link completata.',
	'Click_return_link_config' => 'Clicca %sQUI%s per  ritornare alla configurazione link',

// Link_MOD
	'Links' => 'Gestione Link',
	'Links_explain' => 'Da questo pannello di controllo, potete visualizzare in anteprima lo stato di tutti i link, modificare o rimuovere il link selezionato.',
	'Add_link' => 'Aggiungi Link',
	'Add_link_explain' => 'Il form seguente vi permette di aggiungere un link direttamente alla vostra pagina dei link',
	'Edit_link' => 'Modifica Link',
	'Edit_link_explain' => 'Il form seguente vi permette di modificare i dettagli di un link e inoltre potete selezionarlo ',
	'Delete_link' => 'Elimina Link',
	'Delete_link_explain' => 'Il form seguente vi permette di cancellare un link, inoltre potere anche ',
	'Link_update' => 'Aggiorna i dettagli del link',
	'Link_delete' => 'Elimina questo link',
	'Link_title' => 'Nome del sito',
	'Link_url' => ' URL del sito',
	'Link_logo_src' => 'Logo del sito (88x31 pixels, Max 10K)',
	'Link_category' => 'Categoria del sito',
	'Link_desc' => 'Descrizione sito',
	'link_hits' => 'Visite',
	'Link_basic_setting' => 'Descrizione rapida Link',
	'Link_adv_setting' => 'Impostazioni avanzate',
	'Link_active' => 'Stato',

	'Link_admin_add_success' => 'Inserimento Link completato.',
	'Link_admin_add_fail' => 'Impossibile inserire il link, riprovare pi&ugrave; tardi',
	'Link_admin_update_success' => 'Aggiornamento Link completato.',
	'Link_admin_update_fail' => 'Impossibile aggiornare il link, riprovare pi&ugrave; tardi',
	'Link_admin_delete_success' => 'Rimozione link completata.',
	'Link_admin_delete_fail' => 'Impossibile rimuovere il link, riprovare pi&ugrave; tardi',
	'Click_return_lastpage' => 'Clicca %sQUI%s per tornare alla pagina precedente',
	'Click_return_admin_links' => 'Clicca %sQUI%s per tornare alla gestione link',
	'Preview' => 'Anteprima',
	'Search_site' => 'Cerca sito',
	'Search_site_title' => 'Cerca sito per nome/descrizione:',
/* lang_admin_link.php - END */

// Icy Phoenix - BUILD 009
	'Replace_title' => 'Sostituzione Testo In Posts',
	'Replace_text' => 'In questa pagina puoi sostituire del testo in tutti i messaggi del forum. Questa operazione non pu&ograve; essere annullata.',
	'Link' => 'Link',
	'Str_old' => 'Testo da cercare',
	'Str_new' => 'Testo con cui sostituire',
	'No_results' => 'Nessuna modifica',
	'Replaced_count' => 'Totale messaggi aggiornati: %s',

// Icy Phoenix - BUILD 016
	'group_rank' => 'Livello',
	'group_color' => 'Colore',
	'group_legend' => 'Mostra nella legenda',
	'group_legend_short' => 'Legenda',
	'group_main' => 'Gruppo principale',
	'group_members' => 'Membri',
	'group_update' => 'Applica Cambiamenti',

/* lang_color_groups.php - BEGIN */
	'Color_Groups' => 'Gruppi cromatici',
	'Manage_Color_Groups' => 'Gestione gruppi cromatici',
	'Add_New_Group' => 'Aggiungi un nuovo gruppo',
	'Color' => 'Colore',
	'User_Count' => 'Utenti',
	'Color_List' => 'Lista Colori:',
	'Group_Name' => 'Nome gruppo',
	'Define_Users' => 'Definizione utenti',
	'Color_Group_User_List' => 'Utenti del gruppo cromatico',
	'Options' => 'Opzioni',
	'Example' => 'Esempio',
	'User_List' => 'Elenco utenti completo',
	'Unassigned_User_List' => 'Utenti senza gruppo',
	'Assigned_User_List' => 'Utenti con un gruppo',
	'Add_Arrow' => 'Aggiungi all\'elenco',
	'Update' => 'Aggiorna',
	'Updated_Group' => 'Elenco utenti del gruppo cromatico aggiornato<br />',
	'Deleted_Group' => 'Rimuovi il gruppo specificato. Tutti gli utenti iscritti verranno impostati come utenti non iscritti a gruppi<br />',
	'Hide' => 'Nascondi',
	'Un-hide' => 'Svela',
	'Group_Hidden' => 'Gruppo nascosto<br />',
	'Group_Unhidden' => 'Gruppo visibile<br />',
	'Groups_Updated' => 'Modifiche gruppi aggiornate<br />',
	'Moved_Group' => 'Modifica ordine gruppo<br />',

//Descriptions
	'Manage_Color_Groups_Desc' => 'Aggiorna gruppi, aggiungi un nuovo gruppo o gestisci gli utenti assegnati ad un gruppo cromatico particolare.<br /> I gruppi che decidete di nascondere non verranno mostrati nella lista principale.',
	'Color_Group_User_List_Desc' => 'Aggiungi o rimuovi utenti dal gruppo cromatico specificato.',

//Errors
	'Error_Group_Table' => 'Errore durante l\'interrogazione della tabella di gruppo cromatico.',
	'Error_Font_Color' => '<b><u>Attenzione:</b></u> Il colore del font specificato non &egrave; valido!',
	'Color_Ok' => 'Il colore del font specificato risulta valido.',
	'No_Groups_Exist' => 'Nessun gruppo esistente.',
	'Error_Users_Table' => 'Errore durante l\'interrogazione delle tabelle utente.',
	'Invalid_Group_Add' => 'Nome non valido o gruppo duplicato per %s.<br />',

//Dynamic
	'Group_Updated' => 'Il gruppo cromatico %s &egrave; stato aggiornato<br />',
	'Editing_Group' => 'Stai modificando l\'elenco utenti di %s.',
	'Invalid_User' => '%s non &egrave; un nome valido, passo al successivo<br />',
	'Invalid_Order_Num' => '%s conteneva un numero di ordinamento non valido, ma &egrave; stato modificato. Riprovate ad ordinare nuovamente.',

//New for 1.2.0
	'Users_List' => 'Elenco utenti',
	'Groups_List' => 'Elenco gruppo utenti',
	'List_Info' => '<b>N.B.</b>: <ul><li>Tenete premuto il tasto CTRL quando selezionate un elenco multiplo. <li>Se un utente che fa parte di un gruppo, viene aggiunto ad un gruppo cromatico, verr&agrave; visualizzato il colore del gruppo in cui l\'utente &egrave; iscritto.<li> I nomi della lista sono formattati come Nome (Gruppo cromatico in uso). Non ci sar&agrave; nessun (Gruppo cromatico in uso) se la voce non riporta a nessuno.<li>Se un utente &egrave; iscritto a due o pi&ugrave; gruppi verr&agrave; visualizzato il colore del gruppo pi&ugrave; elevato (impostate questo valore nella pagina principale).</ul>',
/* lang_color_groups.php - END */

// Icy Phoenix - BUILD 023
	'Empty_Cache_Main_Question' => 'Scegliendo SI, la cartella principale della cache verr&agrave; svuotata e non sar&agrave; possibile ripristinarne il contenuto.<br /><br />Sei sicuro di voler procedere?',
	'Empty_Cache_Posts_Question' => 'Scegliendo SI, la sezione del DB che contiene i post precompilati verr&agrave; svuotata e non sar&agrave; possibile ripristinarne il contenuto.<br /><br />Sei sicuro di voler procedere?',
	'Empty_Cache_Thumbs_Question' => 'Scegliendo SI, la cartella delle miniature dei messaggi verr&agrave; svuotata e non sar&agrave; possibile ripristinarne il contenuto.<br /><br />Sei sicuro di voler procedere?',
	'Empty_Cache_Success' => 'Cartella Cache svuotata correttamente.',

	'Copy_Auth' => 'Copia permessi da',
	'Copy_Auth_Explain' => 'Ricorda che puoi copiare permessi solo da forum, non da categorie!!!',

// Icy Phoenix - BUILD 027
/* lang_admin_db_backup.php - BEGIN */
	'SELECT_ALL' => 'Seleziona tutti',
	'SELECT_FILE' => 'Seleziona un file',
	'START_BACKUP' => 'Inizia backup',
	'START_RESTORE' => 'Inizia ripristino',
	'STORE_AND_DOWNLOAD' => 'Salva e scarica',
	'STORE_LOCAL' => 'Salva il file sul server',
	'STRUCTURE_ONLY' => 'Solo Struttura',

// Backup
	'ACP_BACKUP' => 'Backup Database',
	'ACP_BACKUP_EXPLAIN' => 'In questa sezione puoi effettuare il backup del database del tuo sito. L\'archivio viene salvato nella cartella <b><samp>backup/</samp></b> (assicurati che questa cartella abbia i permessi di scrittura) e puoi decidere se scaricarlo o reimportarlo dalla pagina di <b>Ripristino</b>. A seconda della configurazione del server puoi comprimere il file in formato GZIP.<br /><br /><span class="text_red">La procedura di backup viene effettuata in diversi passi: lo script dovrebbe procedere automaticamente, per cui tutto quello che devi fare &egrave; attendere il messaggio di completamento.</span><br /><br />',

	'BACKUP_OPTIONS' => 'Opzioni Backup',
	'BACKUP_TYPE' => 'Tipo backup',

	'DATABASE' => 'Utilit&agrave; database',
	'DATA_ONLY' => 'Solo dati',
	'DELETE_BACKUP' => 'Elimina backup',
	'DELETE_SELECTED_BACKUP' => 'Sei sicuro di voler eliminare i backup selezionati??',
	'DESELECT_ALL' => 'Deseleziona tutti',
	'DOWNLOAD_BACKUP' => 'Scarica backup',

	'FILE_TYPE' => 'Tipo file',
	'FULL_BACKUP' => 'Completo',

	'BACKUP_TYPE_COMPLETE' => 'Completo',
	'BACKUP_TYPE_EXTENDED' => 'Esteso',
	'BACKUP_TYPE_COMPACT' => 'Compatta Interruzioni Di Riga',

	'BACKUP_SUCCESS' => 'Il backup &egrave; stato creato correttamente.',
	'BACKUP_DELETED' => 'Il backup &egrave; stato eliminato correttamente.',

	'TABLE_SELECT' => 'Seleziona tabelle',

	'BACKUP_IN_PROGRESS' => 'Backup in corso',
	'BACKUP_IN_PROGRESS_TABLE' => 'Backup tabella: <b>%s</b>',
	'BACKUP_IN_PROGRESS_REDIRECT' => 'Verrai automaticamente reindirizzato al passo successivo in pochi secondi',
	'BACKUP_IN_PROGRESS_REDIRECT_CLICK' => 'Se il reindirizzamento automatico non dovesse funzionare, puoi cliccare %sQUI%s',
	'BACKUP_OPTIONS_RETURN' => 'Clicca %sQUI%s per tornare alla Gestione Backup',

// Errors
	'Table_Select_Error' => 'Devi selezionare almeno una tabella.',

// Restore
	'ACP_RESTORE' => 'Ripristina Database',
	'ACP_RESTORE_EXPLAIN' => 'Effettua un ripristino completo di tutte le tabelle del tuo sito da un file salvato precedentemente. Se il tuo server lo supporta puoi utilizzare la compressione gzip o bzip2, i file verranno decompressi automaticamente. <strong>ATTENZIONE</strong> Verranno sovrascritti tutti i dati attuali. Il ripristino può impiegare molto tempo dipende dalla grandezza del database, non uscire questa pagina fino al completamento del ripristino. I backup sono memorizzati nella cartella <b><samp>backup/</samp></b> e sono generati dalla funzione backup di questo sistema. Il ripristino di backup non generati da questo stesso sistema potrebbe non funzionare correttamente.<br /><br /><strong class="text_red">Importante: se il backup da ripristinare &egrave; troppo grande, potrebbe essere possibile che il timeout impedisca il corretto ripristino ed il sito non funzioni piì&ugrave; correttamente. In questo caso potrebbe essere necessario scaricare il file di backup direttamente dal server ed utilizzre un\'applicazione diversa per ripristinarlo (phpMyAdmin o MySQLDumper ad esempio).</strong><br /><br />',
	'RESTORE_OPTIONS' => 'Opzioni Ripristino',

	'Restore_Success' => 'Il database &egrave; stato ripristinato correttamente.',

// Errors
	'No_Backup_Selected' => 'Non hai selezionato nessun backup da ripristinare.',
	'Backup_Invalid' => 'Il file selezionato potrebbe essere corrotto.',
	'RESTORE_FAILURE' => 'Il file di backup potrebbe essere corrotto.',
/* lang_admin_db_backup.php - END */

/* Logs - BEGIN */
	'LOGS_ACTIONS_FILTER' => 'Filtro azioni',
	'LOGS_TITLE' => 'Logs',
	'LOGS_EXPLAIN' => 'Da qui puoi ottenere informazioni utili sull\'attivit&agrave; dello staff sul tuo sito',
	'LOGS_TARGET' => 'Target',
	'LOGS_DELETE' => 'Elimina Selezionati',
	'LOGS_DELETE_ALL' => 'Svuota Tabella Logs',
	'LOGS_DENY' => 'Non autorizzato!',
	'LOGS_POST_EDIT' => 'ha modificato un messaggio di',
	'LOGS_POST_DELETE' => 'ha eliminato un messaggio di',
	'LOGS_GROUP_JOIN' => 'ha richiesto di aderire al gruppo',
	'LOGS_GROUP_EDIT' => 'ha effettuato modifiche all\'utente %s del gruppo',
	'LOGS_GROUP_ADD' => 'ha aggiunto l\'utente %s al gruppo',
	'LOGS_GROUP_TYPE' => 'ha modificato lo stato del gruppo %s, ora &egrave; un gruppo %s',
	'LOGS_GROUP_TYPE_0' => 'aperto',
	'LOGS_GROUP_TYPE_1' => 'chiuso',
	'LOGS_GROUP_TYPE_2' => 'nascosto',
	'LOGS_MESSAGE' => 'messaggio all\'utente, codice <b>%s</b>',
	'LOGS_MODCP_DELETE' => 'ha eliminato dei messaggi di %s tramite il pannello di controllo moderatori',
	'LOGS_MODCP_RECYCLE' => 'ha cestinato dei messaggi di %s tramite il pannello di controllo moderatori',
	'LOGS_MODCP_LOCK' => 'ha bloccato dei messaggi di %s tramite il pannello di controllo moderatori',
	'LOGS_MODCP_UNLOCK' => 'ha sbloccato dei messaggi di %s tramite il pannello di controllo moderatori',
	'LOGS_MODCP_MOVE' => 'ha spostato dei messaggi di %s tramite il pannello di controllo moderatori',
	'LOGS_MODCP_MERGE' => 'ha unito dei messaggi di %s tramite il pannello di controllo moderatori',
	'LOGS_MODCP_SPLIT' => 'ha diviso dei messaggi di %s tramite il pannello di controllo moderatori',
	'LOGS_TOPIC_BIN' => 'ha cestinato un messaggio di',
	'LOGS_TOPIC_ATTACK' => 'c\'&egrave; stato un attacco esterno ad un messaggio di',
	'LOGS_CARD_BAN' => 'ha bannato',
	'LOGS_CARD_WARN' => 'ha ammonito',
	'LOGS_CARD_UNBAN' => 'ha riabilitato',
	'LOGS_ADMIN_CAT_ADD' => 'ha aggiunto un forum',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP' => 'ha effettuato un backup %s del DB',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_full' => 'completo',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_structure' => 'della struttura',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_data' => 'dei dati',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store_and_download' => ', scaricandolo e salvandolo sul server',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store' => ', salvandolo sul server',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_download' => ', scaricandolo',
	'LOGS_ADMIN_DB_UTILITIES_RESTORE' => 'ha effettuato un ripristino del DB da',
	'LOGS_ADMIN_BOARD_CONFIG' => 'ha effettuato delle modifiche alla configurazione',
	'LOGS_ADMIN_BOARD_IP_CONFIG' => 'ha effettuato delle modifiche alla configurazione di Icy Phoenix',
	'LOGS_ADMIN_GROUP_NEW' => 'ha creato il gruppo',
	'LOGS_ADMIN_GROUP_DELETE' => 'ha cancellato il gruppo',
	'LOGS_ADMIN_GROUP_EDIT' => 'ha modificato il gruppo',
	'LOGS_ADMIN_USER_AUTH' => 'ha modificato i permessi di',
	'LOGS_ADMIN_GROUP_AUTH' => 'ha modificato i permessi del gruppo',
	'LOGS_ADMIN_USER_BAN' => 'ha eseguito delle espulsioni da ACP',
	'LOGS_ADMIN_USER_UNBAN' => 'ha eseguito delle riabilitazioni da ACP',
	'LOGS_ADMIN_USER_DELETE' => 'ha eliminato l\'utente',
	'LOGS_ADMIN_USER_EDIT' => 'ha modificato il profilo dell\'utente',
	'LOGS_CMS_LAYOUT_EDIT' => 'ha modificato %sQUESTA%s pagina',
	'LOGS_CMS_LAYOUT_DELETE' => 'ha cancellato una pagina [ID = %s]',
	'LOGS_CMS_BLOCK_EDIT' => 'ha modificato un blocco [ID = %s] di %sQUESTA%s pagina',
	'LOGS_CMS_BLOCK_EDIT_LS' => 'ha modificato un blocco [ID = %s] di una pagina standard [%s]',
	'LOGS_CMS_BLOCK_DELETE' => 'ha cancellato un blocco [ID = %s] di %sQUESTA%s pagina',
	'LOGS_CMS_BLOCK_DELETE_LS' => 'ha cancellato un blocco [ID = %s] di una pagina standard [%s]',
//$lang['LOGS_' => '',
/* Logs - END */

	'SMILEYS_UPDATED' => 'Smileys Aggiornati',

/* ADS - BEGIN */
	'ADS_TITLE' => 'Banner &amp; Sponsors',
	'ADS_TITLE_EXPLAIN' => 'In questa sezione &egrave; possibile aggiungere dei banner da visualizzare nel sito. Si possono aggiungere diversi tipi di banner e decidere dove questi banner devono essere visualizzati e da chi. E\' anche possibile impostare pi&ugrave; di un banner per la stessa posizione: in questo caso il banner da mostrare verr&agrave; scelto casualmente tra quelli disponibili.',
	'AD_DES' => 'Descrizione',
	'AD_TEXT' => 'Contenuto',
	'AD_ENABLED' => 'Abilitato',
	'AD_STATUS' => 'Stato',
	'AD_STATUS_EXPLAIN' => 'Seleziona SI se vuoi abilitare questo banner, oppure NO per disattivarlo',
	'AD_POSITION' => 'Posizione',
	'AD_AUTH' => 'Permessi',
	'AD_AUTH_EXPLAIN' => 'Scegli il livello di utenza a cui verr&agrave; mostrato il banner',
	'AD_AUTH_GUESTS' => 'Solo Ospiti',
	'AD_AUTH_REG' => 'Ospiti e Registrati (non ADMINS e MODS)',
	'AD_AUTH_MOD' => 'Tutti tranne Amministratori',
	'AD_AUTH_ADMIN' => 'Tutti',
	'AD_FORMAT' => 'Formato',
	'AD_POS_GLT' => 'Globale Inizio Pagina',
	'AD_POS_GLB' => 'Globale Fine Pagina',
	'AD_POS_GLH' => 'Globale Intestazione',
	'AD_POS_GLF' => 'Globale Fondo Pagina',
	'AD_POS_FIX' => 'Indice Forum: Elemento',
	'AD_POS_FIT' => 'Indice Forum: Inizio',
	'AD_POS_FIB' => 'Indice Forum: Fine',
	'AD_POS_VFX' => 'Visualizzazione Forum: Elemento',
	'AD_POS_VFT' => 'Visualizzazione Forum: Inizio',
	'AD_POS_VFB' => 'Visualizzazione Forum: Fine',
	'AD_POS_VTX' => 'Visualizzazione Argomento: Elemento',
	'AD_POS_VTT' => 'Visualizzazione Argomento: Inizio',
	'AD_POS_VTB' => 'Visualizzazione Argomento: Fine',
	'AD_POS_NMT' => 'Menu Navigazione: Inizio',
	'AD_POS_NMB' => 'Menu Navigazione: Fine',
	'AD_ADD' => 'Aggiungi Banner',
	'AD_EDIT' => 'Modifica Banner',
	'AD_ADDED' => 'Banner aggiunto correttamente',
	'ADS_UPDATE' => 'Aggiorna Banner',
	'AD_UPDATED' => 'Banner aggiornato correttamente',
	'AD_DELETED' => 'Banner eliminato correttamente',
	'CLICK_RETURN_ADS' => 'Clicca %sQUI%s per tornare alla Gestione dei Banner',
	'AD_NO_ADS' => 'Nessun banner creato',
	'ERR_AD_ADD' => 'Si prega di compilare tutti i campi richiesti',
/* ADS - END */

	'FULL_HTML' => 'HTML Integrale',
	'ACTIONS' => 'Azioni',
	'EDIT' => 'Modifica',
	'DELETE' => 'Elimina',

// Tickets Submission - BEGIN
	'TICKETS_EMAILS' => 'Tickets',
	'TICKETS_EMAILS_EXPLAIN' => 'In questa sezione puoi creare delle categorie che verranno utilizzate nella pagina "Contattaci" come argomenti per l\'invio di email. A ciascuna categoria possono essere assegnati uno o pi&ugrave; indirizzi email di modo che l\'email venga inviata a tutti.',
	'TICKET_CAT' => 'Categoria',
	'TICKET_CAT_TITLE' => 'Titolo',
	'TICKET_CAT_DES' => 'Descrizione',
	'TICKET_CAT_EMAILS' => 'Indirizzi Email',
	'TICKET_CAT_EMAILS_EXPLAIN' => 'Inserisci tutti gli indirizzi destinatari dell\'email.<br />Separa i diversi indirizzi con punto e virgola (a@a.com;b@b.com;c@c.com).',
	'TICKETS_NO_TICKETS' => 'Nessun Elemento',
	'TICKETS_NO_TICKET_SEL' => 'Nessun elemento selezionato',
	'TICKETS_NO_TICKET_TITLE' => 'Devi inserire almeno il titolo',
	'TICKETS_DB_ADD' => 'Aggiungi Categoria',
	'TICKETS_DB_ADDED' => 'Categoria aggiunta correttamente',
	'TICKETS_DB_UPDATED' => 'Categoria aggiornata correttamente',
	'TICKETS_DB_DELETED' => 'Categoria rimossa correttamente',
	'TICKETS_DB_CLICK' => 'Clicca %sQUI%s per tornare alle Categorie Email',
// Tickets Submission - END

	'FORUM_LIMIT_EDIT_TIME' => 'Limitazione Temporale Modifica Messaggi',
	'FORUM_LIMIT_EDIT_TIME_EXPLAIN' => 'Abilitando questa opzione gli utenti potranno modificare i propri messaggi solo entro il numero di minuti stabilito nella configurazione messaggi di Icy Phoenix (ACP &raquo; Configurazione &raquo; Messaggi)',

// Custom BBCodes - BEGIN
	'BBCODES_CUSTOM_BBCODES' => 'BBCode Personalizzati',
	'BBCODES_CUSTOM_BBCODES_EXPLAIN' => 'In questa sezione puoi creare dei BBCodes personalizzati. Per poter utilizzare questi BBCode devi attivare <b>Abilita i BBCode personalizzati</b> in <b>ACP &raquo; Configurazione &raquo; Messaggi</b>.',
	'BBCODES_NO_BBCODES' => 'Nessun BBCode',
	'BBCODES_NO_BBCODES_SEL' => 'Nessun BBCode selezionato',
	'BBCODES_NO_BBCODES_INPUT' => 'Devi compilare almeno il Tag BBCode',
	'BBCODES_DB_ADD' => 'Aggiungi BBCode',
	'BBCODES_DB_ADDED' => 'BBCode aggiunto correttamente',
	'BBCODES_DB_UPDATED' => 'BBCode aggiornato correttamente',
	'BBCODES_DB_DELETED' => 'BBCode eliminato correttamente',
	'BBCODES_DB_CLICK' => 'Clicca %sQUI%s per tornare ai BBCode Personalizzati',

	'BBCODE_ADDED' => 'BBCode aggiunto correttamente.',
	'BBCODE_EDITED' => 'BBCode aggiornato correttamente.',
	'BBCODE_NOT_EXIST' => 'Il BBCode selezionato non esiste.',
	'BBCODE_HELPLINE' => 'Suggerimento',
	'BBCODE_HELPLINE_EXPLAIN' => 'Questo campo contiene il suggerimento che si attiva quando si punta il mouse sul pulsante.',
	'BBCODE_HELPLINE_TEXT' => 'Testo suggerimento',
	'BBCODE_HELPLINE_TOO_LONG' => 'Il testo del suggerimento &egrave; troppo lungo.',

	'BBCODE_INVALID_TAG_NAME' => 'Il nome utilizzato per il BBCode esiste gi&agrave;.',
	'BBCODE_INVALID' => 'Il BBCode &egrave; stato costruito in maniera non valida.',
	'BBCODE_OPEN_ENDED_TAG' => 'Il BBCode deve contenere sia il tag di apertura che di chiusura.',
	'BBCODE_TAG' => 'Tag',
	'BBCODE_TAG_TOO_LONG' => 'Il nome scelto per il tag &egrave; troppo lungo.',
	'BBCODE_TAG_DEF_TOO_LONG' => 'La definizione del tag &egrave; troppo lunga, per favore utilizzare un numero inferiore di caratteri.',
	'BBCODE_USAGE' => 'Utilizzo BBCode',
	'BBCODE_USAGE_EXAMPLE' => '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN' => 'Utilizzo BBCode. Sostituisci le variabili di input con il token corrispondente (%sleggi sotto%s).',

	'EXAMPLE' => 'Esempio:',
	'EXAMPLES' => 'Esempi:',

	'HTML_REPLACEMENT' => 'Sostituzione HTML',
	'HTML_REPLACEMENT_EXAMPLE' => '&lt;span style=&quot;background-color: {COLOR};&quot;&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style=&quot;font-family: {SIMPLETEXT1};&quot;&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN' => 'Sostituzione HTML. Non dimenticare di reinserire tutti i token specificati in alto!',

	'TOKEN' => 'Token',
	'TOKENS' => 'Tokens',
	'TOKENS_EXPLAIN' => 'I Token sono dei segnaposto per le variabili di input. L\'input verr&agrave; convalidato con le definizioni corrispondenti. Se necessario, puoi inserire un numero per identificare diversi token dello stesso tipo, esempio {TEXT1}, {TEXT2}.<br /><br />Puoi anche utilizzare le variabili di lingua come token: {L_<em>&lt;STRINGA&gt;</em>} dove <em>&lt;STRINGA&gt;</em> &egrave; il nome della variabile di lingua che vuoi aggiungere. Per esempio, {L_WROTE} verr&agrave; visualizzato come &quot;ha scritto&quot; o verr&agrave; tradotto in base alla lingua dell\'utente.<br /><br /><strong>Soltanto i token indicati qui in basso possono essere utilizzati all\'interno dei BBCode personalizzati.</strong>',
	'TOKEN_DEFINITION' => 'Definizione token',
	'TOO_MANY_BBCODES' => 'Non puoi creare altri BBCode. Per favore rimuovi uno o pi&ugrave; BBCode e riprova.',

	'BBCODES_TOKENS_DESCRIPTION' => '
<b>TEXT</b> &raquo; Qualunque carattere di testo. Non &egrave; consigliato utilizzare questo token in tag HTML (utilizza IDENTIFIER o SIMPLETEXT piuttosto)<br />
<b>SIMPLETEXT</b> &raquo; Caratteri (A-Z), numeri, spazio, virgola, punto, segno meno, segno pi&ugrave;, trattino ed underscore<br />
<b>IDENTIFIER</b> &raquo; Caratteri (A-Z), numeri, trattino ed underscore<br />
<b>NUMBER</b> &raquo; Numeri<br />
<b>EMAIL</b> &raquo; Un valido indirizzo e-mail<br />
<b>URL</b> &raquo; Un URL valido (http, ftp, etc... non pu&ograve; essere utilizzato per exploits javascript): se non viene specificato il protocollo verr&agrave; inserito in automatico &quot;http://&quot;<br />
<b>LOCAL_URL</b> &raquo; Un URL locale: l\'URL deve essere relativo al percorso principale del sito e non pu&ograve; contenere nome server o protocollo<br />
<b>COLOR</b> &raquo; Colore in codice HTML, si pu&ograve; utlizzare sia la forma numerica <samp>#ff1234</samp> che <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">parola chiave dei colori CSS</a> (ad esempio <samp>fuchsia</samp> o <samp>InactiveBorder</samp>)',
// Custom BBCodes - END

	// PLUGINS - BEGIN
	'PLUGINS' => 'Plugins',
	'PLUGINS_EXPLAIN' => 'In questa sezione &egrave; possibile attivare o disattivare plugin',
	'PLUGINS_FOLDER' => 'Directory',
	'PLUGINS_NAME' => 'Nome',
	'PLUGINS_DESCRIPTION' => 'Descrizione',
	'PLUGINS_VERSION' => 'Versione',
	'PLUGINS_CURRENT_VERSION' => 'Versione installata',
	'PLUGINS_LAST_VERSION' => 'Versione disponibile',
	'PLUGINS_INSTALL' => 'Installa',
	'PLUGINS_UPGRADE' => 'Aggiorna',
	'PLUGINS_UNINSTALL' => 'Disinstalla',
	'PLUGINS_UP_TO_DATE' => 'Aggiornata',
	'PLUGINS_NOT_INSTALLED' => 'Non installata',
	'PLUGINS_OUTDATED' => 'Non aggiornata',
	'PLUGINS_UPDATE_CONFIG' => 'Aggiorna Configurazione',
	'PLUGINS_CONFIG_UPDATED' => 'Configurazione plugins aggiornata correttamente. E\' necessario ricaricare l\'ACP (F5) per aggiornare i moduli.',
	'PLUGINS_RETURN_CLICK' => 'Clicca %sQUI%s per tornare alla configurazione plugin',
	'PLUGINS_NO_PLUGINS' => 'Nessun plugin da configurare',
	// PLUGINS - END

	'BBCODE_SETTINGS' => 'Impostazioni BBCode, HTML E Smileys',
	'POSTING_SETTINGS' => 'Impostazioni Invio Messaggi',

	'POLL_INFINITE' => 'Infinito...',
	'POLL_ONGOING' => ' (in corso)',
	'POLL_COMPLETED' => ' (completato)',

	'FORUM_LIKES' => 'Apprezzamento Messaggi (Like)',
	'FORUM_LIKES_EXPLAIN' => 'Consente agli utenti di esprimere l\'apprezzamento ai singoli messaggi (per utilizzare questa funzione &egrave; necessario averl attivata globalmente tra le Impostazioni di Icy Phoenix [Carico SQL])',

	'POSTS_PICS' => 'Posts / Pics',

	'INACTIVE_USER_FEATURE' => 'Maschera utente',
	'INACTIVE_USER_FEATURE_EXPLAIN' => 'Attivando questa funzione i dati dell\'utente verranno mascherati nei forums e nei messaggi. Il mascheramento avviene solamente se l\'utente non &egrave; attivo.',

	'RANK_SHOW_TITLE' => 'Mostra il titolo del rank',
	'RANK_SHOW_TITLE_EXPLAIN' => 'Disattivando questa opzione verr&agrave; mostrata soltanto l\'immagine',

// ####################### [ Icy Phoenix Options BEGIN ] #####################
	'IP_CONFIGURATION' => 'Impostazioni Icy Phoenix',
	'IP_CONFIGURATION_EXPLAIN' => 'In questa sezione &egrave; possibile configurare alcune impostazioni avanzate di Icy Phoenix',

	'MG_SW_Precompiled_Posts_Title' => 'Messaggi Precompilati',
	'MG_SW_Logins_Title' => 'Registrazione Logins',
	'MG_SW_Edit_Notes_Title' => 'Note di Modifica',

	'MG_SW_Header_Footer' => 'Messaggi Header',
	'MG_SW_Header_Table' => 'Tabella Intestazione Pagina',
	'MG_SW_Header_Table_Explain' => 'Attivando questa opzione verr&agrave; visualizzata una tabella in cima ad ogni pagina con un messaggio personalizzato.',
	'MG_SW_Header_Table_Text' => 'Inserisci qui il tuo testo personalizzato',

	'MG_SW_Empty_Precompiled_Posts' => 'Svuota messaggi precompilati',
	'MG_SW_Empty_Precompiled_Posts_Explain' => 'Con questa funzione, tutti i messaggi precompilati verranno svuotati.',
	'MG_SW_Empty_Precompiled_Posts_Success' => 'I messaggi precompilati sono stati eliminati.',
	'MG_SW_Empty_Precompiled_Posts_Fail' => 'Errore nell\'eliminazione dei messaggi precompilati.',
	'MG_SW_Empty_Precompiled_Posts_InProgress' => 'Svuotamento cache in corso',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect' => 'Verrai automaticamente reindirizzato al passo successivo in tre secondi',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect_Click' => 'Se il reindirizzamento automatico non dovesse funzionare, puoi cliccare %sQUI%s',
	'MG_SW_Empty_Precompiled_Posts_Redirect_Click' => 'Clicca %sQUI%s per tornare alla Gestione Cache',

	'MG_FNF_Header' => 'Impostazioni Veloci',
	'MG_FNF_Header_Explain' => 'In questa pagina puoi impostare con un solo click alcune delle opzioni di configurazioni del sito. Queste configurazioni sono state pensate per chi vuole testare la velocit&agrave; del proprio server senza dover cercare e selezionare le opzioni una ad una nel pannello di controllo. Qualcuna di queste configurazioni possono essere utilizzate anche come base per delle personalizzazioni: ad esempio si pu&ograve; scegliere una delle opzioni proposte e poi modificare a mano le singole opzioni una ad una in seguito in base ai propri gusti.<br /><br /><span class="text_red"><b>Fate attenzione che scegliendo una di queste configurazioni le vostre opzioni saranno modificate senza possibilit&agrave; di annullare l\'operazione e ripristinare le vecchie impostazioni.</b></span>',
	'MG_FNF_Options_Set' => 'Impostazioni',
	'MG_FNF_FNF' => 'Fast And Furious',
	'MG_FNF_FNF_Explain' => 'Questa opzione riduce al minimo tutte le funzionalit&agrave; che eseguono richieste verso il database o che richiedono tempo per essere elaborate. In questo modo il sito sar&agrave; molto veloce, a costo per&ograve; di alcune funzionalit&agrave; disattivate.',
	'MG_FNF_MGS' => 'Suggeriti Da Mighty Gorgon',
	'MG_FNF_MGS_Explain' => 'Questa opzione abilita alcune delle funzioni di Icy Phoenix cercando per&ograve; un buon compromesso con la velocit&agrave;. Le funzioni abilitate dovrebbero essere compatibili con la maggior parte dei server.',
	'MG_FNF_Full_Features' => 'All Inclusive',
	'MG_FNF_Full_Features_Explain' => 'Questa opzione abilita la quasi totalit&agrave; delle funzionalit&agrave; di Icy Phoenix. Molto probailmente il sito risulter&agrave; pi&ugrave; lento e consumer&agrave; pi&ugrave; risorse, ma avrete tutte le funzionalit&agrave; attive. C\'&egrave; da tenere presente che alcuni server potrebbero non supportare alcune funzionalit&agrave;.',

	'MG_SW_ACRONYMS' => 'Disattiva acronimi',
	'MG_SW_ACRONYMS_Explain' => 'Questa opzione consente di disattivare la processazione degli acronimi',
	'MG_SW_AUTOLINKS' => 'Disattiva autolinks',
	'MG_SW_AUTOLINKS_Explain' => 'Questa opzione consente di disattivare la processazione degli autolinks',
	'MG_SW_CENSOR' => 'Disattiva censura',
	'MG_SW_CENSOR_Explain' => 'Questa opzione consente di disattivare la censura',

	'MG_SW_No_Right_Click' => 'Blocca il pulsante destro',

	'Click_return_config_mg' => 'Clicca %sQUI%s per tornare alla configurazione di Icy Phoenix',

// ####################### [ Icy Phoenix Options END ] #######################
	)
);

/* Special Cases, Do not bother to change for another language */
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
$lang['privmsgs_date'] = $lang['Sent_Date'];
$lang['privmsgs_subject'] = $lang['Subject'];
$lang['privmsgs_from_userid'] = $lang['From'];
$lang['privmsgs_to_userid'] = $lang['To'];
$lang['privmsgs_type'] = $lang['PM_Type'];

// ####################### [ ACP Navigation BEGIN ] #######################
// Use numbers to sort the ACP Navigation menu
// Numbers have to be changed in all /adm/*.php files too

// Configuration
$lang['1000_Configuration'] = 'Configurazione';														// admin_board.php, admin_config_settings.php, admin_bots.php, admin_captcha_config.php, admin_google_bot_detector.php, admin_lang_user_created.php, admin_upi2db.php
$lang['100_Main_Settings'] = 'Configurazione';										// admin_config_settings.php
$lang['110_Various_Configuration'] = 'Impostazioni Varie';								// admin_board.php
$lang['125_Language'] = 'Variabili Lingua';																// admin_lang_user_created.php
$lang['127_Clear_Cache'] = 'Svuotamento Cache';														// admin_board_clearcache.php
$lang['130_UPI2DB_Mod'] = 'Messaggi Non Letti';														// admin_upi2db.php
$lang['140_CAPTCHA'] = 'CAPTCHA';																					// admin_captcha.php
$lang['145_Captcha_Config'] = 'Conferma Visuale';													// admin_captcha_config.php
$lang['150_Similar_topics'] = 'Argomenti Simili';													// admin_similar_topics.php
$lang['160_Title_infos'] = 'Gestione Titoli Veloci';											// admin_quick_title.php
$lang['170_LIW'] = 'Larghezza Immagini';																	// admin_liw.php
$lang['190_Spider_Bots'] = 'Spider / Bots';																// admin_bots.php
$lang['192_Google_BOT'] = 'Google Bot';																		// admin_google_bot_detector.php
$lang['195_Yahoo_search'] = 'Yahoo Search';																// admin_yahoo_search.php
$lang['200_Language'] = 'Gestione Lingue';																// admin_lang_extend.php
$lang['210_MG_Quick_Settings'] = 'Impostazioni Veloci';										// admin_board_quick_settings.php

// General
$lang['1100_General'] = 'Generale'; 													// admin_acronyms.php, admin_autolinks.php, admin_force_read.php, admin_helpdesk.php, admin_liw.php, admin_force_read.php, admin_mass_email.php, admin_megamail.php, admin_notepad.php, admin_quick_title.php, admin_smilies.php, admin_words.php, admin_yahoo_search.php
$lang['100_Acronyms'] = 'Acronimi';														// admin_acronyms.php
$lang['110_Autolinks'] = 'Autolinks';													// admin_autolinks.php
$lang['120_Ads'] = 'Sponsor &amp; Pubblicit&agrave;';					// admin_ads.php
$lang['130_Mass_Email'] = 'Email Di Gruppo';									// admin_mass_email.php
$lang['140_Mega_Mail'] = 'Email / PM Di Gruppo';							// admin_megamail.php
$lang['150_FTR_Config'] = 'Obbligo Lettura (FTR)';						// admin_force_read.php
$lang['160_FTR_Users'] = 'Utenti FTR';												// admin_force_read.php
$lang['170_Smilies'] = 'Smileys';															// admin_smilies.php
$lang['180_Word_Censor'] = 'Censura';													// admin_words.php
$lang['200_Notepad'] = 'Blocco Note';													// admin_notepad.php
$lang['210_Help_Desk'] = 'Help Desk';													// admin_helpdesk.php
$lang['220_Tickets_Emails'] = 'Categorie Email';							// admin_tickets.php
$lang['230_Custom_BBCodes'] = 'BBCodes Personalizzati';				// admin_bbcodes.php
$lang['240_Replace_title'] = 'Sostituisci In Posts';					// admin_replace.php

// Forum
$lang['1200_Forums'] = 'Forum';																// admin_forum_prune.php, admin_forumauth_list.php, admin_forums.php, admin_forums_extend.php, admin_prune_overview.php, admin_topic_shadow.php
$lang['100_Manage'] = 'Gestione';															// admin_forums.php
$lang['110_Manage_extend'] = 'Gestione Avanzata';							// admin_forums_extend.php
$lang['120_Permissions_List'] = 'Lista Permessi';							// admin_forumauth_list.php
$lang['122_Permissions_Adv'] = 'Permessi Multipli';						// admin_forumauth_adv.php
$lang['125_Permissions_Forum'] = 'Permessi';									// admin_forumauth.php
$lang['130_Prune'] = 'Eliminazione';													// admin_forum_prune.php
$lang['140_Prune_Overview'] = 'Gestione Eliminazione';				// admin_prune_overview.php
$lang['150_Topic_Shadow'] = 'Argomenti Ombra';								// admin_topic_shadow.php

// eXtreme Styles
$lang['1300_Extreme_Styles'] = 'Stile &amp; Templates';				// xs_include.php -> $module_name

// DB Maintenance & Security
$lang['1400_DB_Maintenance'] = 'DB E Sicurezza';							// admin_bb_db.php, admin_db_generator.php, admin_db_maintenance.php, admin_db_utilities.php, admin_logs.php
$lang['100_Actions_LOG'] = 'Log Azioni';											// admin_logs.php
$lang['110_DB_Admin'] = 'IP MySQLAdmin';											// admin_bb_db.php
$lang['120_Backup_DB'] = 'Backup DB';													// admin_db_utilities.php, admin_db_backup
$lang['130_Restore_DB'] = 'Ripristina DB';										// admin_db_utilities.php, admin_db_backup
$lang['135_Restore_DB'] = 'Ripristina DB Da File';						// admin_db_utilities.php
$lang['140_Optimize_DB'] = 'Ottimizzazione DB';								// admin_db_utilities.php
$lang['150_DB_Maintenance'] = 'Manutenzione DB';							// admin_db_maintenance.php
$lang['170_db_update_generator'] = 'Generatore DB PHP';				// admin_db_generator.php
$lang['180_msqd'] = 'MySQLDumper';														// admin_msqd.php

// Plugins
$lang['3000_Plugins'] = 'Plugins';														// admin_plugins.php
$lang['100_Plugins_Modules'] = 'Moduli Plugins';							// admin_plugins.php

// News
$lang['1600_News_Admin'] = 'News';													// admin_news.php, admin_news_cats.php, admin_xs_news.php, admin_xs_news_xml.php
$lang['100_News_Config'] = 'Configurazione News';						// admin_news.php
$lang['110_News_Cats'] = 'Categorie News';									// admin_news_cats.php
$lang['120_XS_News_Config'] = 'Configurazione Ticker News';	// admin_xs_news.php
$lang['130_XS_News'] = 'Articoli Ticker News';							// admin_xs_news.php
$lang['140_XS_News_Tickers'] = 'Ticker News';								// admin_xs_news_xml.php

// Users
$lang['1610_Users'] = 'Utenti';															// admin_account.php, admin_disallow.php, admin_email_list.php, admin_jr_admin.php, admin_postcount.php, admin_priv_msgs.php, admin_profile_fields.php, admin_ranks.php, admin_ug_auth.php, admin_user_ban.php, admin_user_bantron.php, admin_user_register.php, admin_user_search.php, admin_userlist.php, admin_users.php, admin_voting.php
$lang['100_Jr_Admin'] = 'Junior Admin';											// admin_jr_admin.php
$lang['110_Manage'] = 'Gestione';														// admin_users.php
$lang['113_Permissions_Users'] = 'Permessi';								// admin_ug_auth.php
$lang['116_CMS_Permissions_Users'] = 'Permessi CMS';				// admin_cms_auth.php
$lang['120_Ranks'] = 'Livelli';															// admin_ranks.php
$lang['130_Userlist'] = 'Lista Utenti';											// admin_userlist.php
$lang['140_Email_List'] = 'Lista Email';										// admin_email_list.php
$lang['150_Private_Messages'] = 'Messaggi Privati';					// admin_priv_msgs.php
$lang['160_Account_active'] = 'Account Attivi';							// admin_account.php
$lang['170_Account_inactive'] = 'Account Inattivi';					// admin_account.php
$lang['180_Add_New_User'] = 'Aggiunta Utente';							// admin_user_register.php
$lang['190_Prune_users'] = 'Eliminazione Utenti';						// admin_prune_users.php
$lang['200_Disallow'] = 'Disabilita Nomi';									// admin_disallow.php
$lang['210_Ban_Management'] = 'Espelli Utenti';							// admin_user_ban.php
$lang['220_Bantron'] = 'Bantron';														// admin_user_bantron.php
$lang['250_Postcount_Config'] = 'Modifica Contatori';				// admin_postcount.php
$lang['260_CPF_Add'] = 'Aggiungi Campi Profilo';						// admin_profile_fields.php
$lang['270_CPF_Edit'] = 'Modifica Campi Profilo';						// admin_profile_fields.php
$lang['280_User_Search'] = 'Ricerca Utenti';								// admin_user_search.php
$lang['290_Poll_Results'] = 'Risultati Sondaggi';						// admin_voting.php
$lang['300_Picscount_Config'] = 'Sinc Contatori Immagini';	// admin_postcount.php

// Groups
$lang['1620_Groups'] = 'Gruppi';														// admin_color_groups.php, admin_groups.php, admin_ug_auth.php
$lang['110_Manage_Groups'] = 'Gestione';										// admin_groups.php
$lang['120_Color_Groups'] = 'Colori';												// admin_color_groups.php
$lang['130_Permissions_Group'] = 'Permessi';								// admin_ug_auth.php

// Topic Rating
$lang['1700_Topic_Rating'] = 'Valutazioni';									// admin_rate.php

// Knowledge Base
$lang['1800_KB_title'] = 'Knowledge Base';									// admin_kb_art.php, admin_kb_auth.php, admin_kb_cat.php, admin_kb_config.php, admin_kb_custom.php, admin_kb_rebuild_search.php, admin_kb_types.php
$lang['100_KB_Configuration'] = 'Configurazione';						// admin_kb_config.php
$lang['110_Art_man'] = 'Gestione Articoli';									// admin_kb_art.php
$lang['120_Cat_man'] = 'Gestione Categorie';								// admin_kb_cat.php
$lang['130_Types_man'] = 'Tipi Articoli';										// admin_kb_types.php
$lang['140_Custom_Field'] = 'Campi Personalizzati';					// admin_kb_custom.php
$lang['150_Permissions'] = 'Permessi';											// admin_kb_auth.php
$lang['160_Optimize_tables'] = 'Ottimizza Tabelle';					// admin_kb_rebuild_search.php

// Attachments
$lang['1900_Attachments'] = 'Allegati';											// admin_attach_cp.php, admin_attachments.php, admin_extensions.php
$lang['100_Control_Panel'] = 'Pannello Di Controllo';				// admin_attach_cp.php
$lang['110_Att_Manage'] = 'Gestione';												// admin_attachments.php
$lang['120_Quota_limits'] = 'Gestione Quote';								// admin_attachments.php
$lang['130_Shadow_attachments'] = 'Allegati Ombra';					// admin_attachments.php
$lang['140_Sync_attachments'] = 'Sincronizza Allegati';			// admin_attachments.php
$lang['150_Extension_control'] = 'Estensioni';							// admin_extensions.php
$lang['160_Extension_group_manage'] = 'Gruppi Estensioni';	// admin_extensions.php
$lang['170_Forbidden_extensions'] = 'Estensioni Proibite';	// admin_extensions.php
$lang['180_Special_categories'] = 'Categorie Speciali';			// admin_attachments.php

// Downloads
$lang['2000_Downloads'] = 'Downloads';											// admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_Settings'] = 'Configurazione';										// admin_pa_settings.php
$lang['110_Cat_manage_title'] = 'Gestione Categorie';				// admin_pa_category.php
$lang['120_File_manage_title'] = 'Gestione Files';					// admin_pa_file.php
$lang['130_Fchecker'] = 'Controllo Files';									// admin_pa_fchecker.php
$lang['140_Mfieldtitle'] = 'Campi Personalizzati';					// admin_pa_custom.php
$lang['150_License_title'] = 'Gestione Licenze';						// admin_pa_license.php
$lang['160_Permissions'] = 'Permessi';											// admin_pa_catauth.php

// Downloads
$lang['2050_Downloads'] = 'Downloads ADV';									// admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_DL_Settings'] = 'Configurazione';								// admin_pa_settings.php

// Links
$lang['2100_Links'] = 'Links';															// admin_links.php, admin_links_cat.php, admin_links_config.php
$lang['100_Configuration'] = 'Configurazione';							// admin_links_config.php
$lang['110_Category'] = 'Gestione Categorie';								// admin_links_cat.php
$lang['120_Add_new'] = 'Aggiungi Links';										// admin_links.php
$lang['130_Link_Manage'] = 'Gestione Links';								// admin_links.php

// Album
$lang['2200_Photo_Album'] = 'Album Fotografico';						// admin_album_auth.php, admin_album_cat.php, admin_album_config_extended.php
$lang['110_Album_Config'] = 'Configurazione';								// admin_album_config_extended.php
$lang['120_Album_Categories'] = 'Gestione Categorie';				// admin_album_cat.php
$lang['130_Album_Permissions'] = 'Permessi';								// admin_album_auth.php
$lang['140_Personal_Galleries'] = 'Gallerie Personali';			// admin_album_personal.php

// FAQ
$lang['2300_FAQ'] = 'FAQ & Regolamento';										// admin_faq_editor.php
$lang['110_FAQ_BBCode'] = 'FAQ BBCode';											// admin_faq_editor.php
$lang['120_FAQ_Board'] = 'FAQ Sito';												// admin_faq_editor.php
$lang['130_FAQ_Rules'] = 'Regolamento';											// admin_faq_editor.php

// INFO
$lang['2400_INFO'] = 'Info';																// admin_logs.php, admin_phpinfo.php, admin_gd_info.php, admin_referrers.php, admin_google_bot_detector.php
$lang['110_Actions_LOG'] = 'Log Azioni';										// admin_logs.php
$lang['120_PHP_INFO'] = 'PHP Info';													// admin_phpinfo.php
$lang['130_GD_Info'] = 'GD Info';														// admin_gd_info.php
$lang['140_HTTP_REF'] = 'HTTP Referrers';										// admin_referrers.php
$lang['150_Google_BOT'] = 'Google Bot';											// admin_google_bot_detector.php

// STATS
$lang['2500_STATS'] = 'Statistiche';												// admin_statistics.php

// CRACKER/TRACKER
$lang['2600_CRACKERTRACKER'] = 'Cracker Tracker';						// admin_cracker_tracker.php

// Plugins
$lang['3000_Plugins'] = 'Plugins';														// admin_plugins.php
$lang['100_Plugins_Modules'] = 'Moduli Plugins';							// admin_plugins.php

// Cash
$lang['3100_CASH'] = 'Cash / Punti'; // admin_cash.php
$lang['110_Cash_Admin'] = 'Gestione Divise'; // admin_cash.php
$lang['120_Cash_Help'] = 'Aiuto'; // admin_cash.php

// Activity
$lang['3200_ACTIVITY'] = 'Activity / Giochi';								// admin_activity.php, admin_ina_ban.php, admin_ina_bulk_add.php, admin_ina_category.php, admin_ina_disable.php, admin_ina_in_un.php, admin_ina_mass.php, admin_ina_xtras.php
$lang['110_Configuration'] = 'Configurazione';							// admin_activity.php
$lang['120_Add_Game'] = 'Aggiunta Gioco';										// admin_activity.php
$lang['130_Edit_Games'] = 'Modifica Giochi';								// admin_activity.php
$lang['140_User_Ban'] = 'Espelli Utenti';										// admin_ina_ban.php
$lang['150_Bulk_Add_Games'] = 'Aggiunta Giochi Di Massa';		// admin_ina_bulk_add.php
$lang['160_Category'] = 'Gestione Categorie';								// admin_ina_category.php
$lang['170_Char_Settings'] = 'Impostazioni Personaggi';			// admin_ina_char.php
$lang['180_Hide_Show_Games'] = 'Visualizzazione Giochi';		// admin_ina_disable.php
$lang['190_DB_Adjustments'] = 'Manutenzione DB';						// admin_ina_in_un.php
$lang['200_Mass_Change'] = 'Configurazioni Di Massa';				// admin_ina_mass.php
$lang['210_Scores_Editor'] = 'Modifica Records';						// admin_ina_scores.php
$lang['220_Xtras'] = 'Impostazioni Extra';									// admin_ina_xtras.php
$lang['230_Check_Games'] = 'Lista Giochi';									// admin_ina_xtras.php

// ####################### [ ACP Navigation END ] #######################

?>