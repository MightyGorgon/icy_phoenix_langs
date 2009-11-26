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

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Generale';
$lang['Users'] = 'Utenti';
$lang['Groups'] = 'Gruppi';
$lang['Forums'] = 'Forum';
$lang['Styles'] = 'Stili';

$lang['Configuration'] = 'Impostazioni';
$lang['Various_Configuration'] = 'Impostazioni Varie';
$lang['Permissions'] = 'Permessi';
$lang['Manage'] = 'Gestione';
$lang['manage'] = 'Gestione';
$lang['Disallow'] = 'Disabilita Nomi';
$lang['Prune'] = 'Pruning';
$lang['Mass_Email'] = 'Email Generali';
$lang['Ranks'] = 'Livelli';
$lang['Smilies'] = 'Smileys';
$lang['Ban_Management'] = 'Ban Control';
$lang['Word_Censor'] = 'Censura Parole';
$lang['Export'] = 'Esporta';
$lang['Create_new'] = 'Crea';
$lang['Add_new'] = 'Aggiungi';
$lang['Backup_DB'] = 'Backup Database';
$lang['Restore_DB'] = 'Ripristina Database';
$lang['DB_Maintenance'] = 'Database';
$lang['Ban_Management'] = 'Gestione Ban';
$lang['News Admin'] = 'News';
$lang['Security'] = 'Sicurezza';
$lang['Member Tries'] = 'Tenatativi Membri';
$lang['quick Search'] = 'Ricerca Rapida';
$lang['Special'] = 'Speciale';
$lang['Styles_Management'] = 'Gestione Stili';
$lang['Manage_Bots'] = 'Gestione Bots';
$lang['Admin Notepad'] = 'Blocco Note';


// Index
$lang['Admin'] = 'Amministrazione';
$lang['Not_admin'] = 'Non sei autorizzato ad Amministrare questo Forum';
$lang['Welcome_phpBB'] = 'Benvenuto in Icy Phoenix';
$lang['Admin_intro'] = 'Grazie per aver scelto Icy Phoenix come Forum. Questa schermata mostra alcune Statistiche del tuo Forum. Puoi tornare a questa pagina cliccando sul link <u>ACP</u> in cima alla pagina. Per tornare all\'indice del tuo forum, clicca sul link <u>Forum</u> in cima alla pagina. Gli altri collegamenti nella parte sinistra dello schermo ti permettono di controllare ogni aspetto del tuo Forum, in tutte le schermata avrai le informazioni su come usare al meglio le varie funzioni. Per maggiori info e supporto visita <a href="http://www.icyphoenix.com" target="_blank"><strong>icyphoenix.com</strong></a>.';
$lang['PayPalInfo'] = 'Icy Phoenix &egrave; un progetto open source, se vuoi contribuire allo sviluppo puoi usare il link sottostante.';
$lang['Main_index'] = 'Forum';
$lang['Site_Index'] = 'Home Page';
$lang['Forum_stats'] = 'Statistiche Sito';
$lang['Admin_Index'] = 'ACP';
$lang['Preview_forum'] = 'Anteprima Forum';
$lang['Portal'] = 'Home Page';
$lang['Preview_Portal'] = 'Anteprima Home Page';

$lang['Click_return_admin_index'] = 'Clicca %sQUI%s per tornare alla pagina principale ACP';

$lang['Statistic'] = 'Statistiche';
$lang['Value'] = 'Valore';
$lang['Number_posts'] = 'Numero di messaggi';
$lang['Posts_per_day'] = 'Messaggi per giorno';
$lang['Number_topics'] = 'Numero di argomenti';
$lang['Topics_per_day'] = 'Argomenti per giorno';
$lang['Number_users'] = 'Numero di utenti';
$lang['Users_per_day'] = 'Utenti per giorno';
$lang['Board_started'] = 'Forum attivato il';
$lang['Avatar_dir_size'] = 'Dimensione directory Avatar';
$lang['Database_size'] = 'Dimensione Database';
$lang['Gzip_compression'] ='Compressione Gzip';
$lang['Not_available'] = 'Non disponibile';

$lang['ON'] = 'ON'; // This is for GZip compression
$lang['OFF'] = 'OFF';


// DB Utils
$lang['Database_Utilities'] = 'Utilit&agrave; Database';
$lang['Restore'] = 'Ripristina';
$lang['Backup'] = 'Backup';
$lang['Restore_explain'] = 'Questa funzione ripristiner&agrave; tutte le tabelle da un file salvato. Se il tuo server lo supporta puoi caricare un file di testo con compressione Gzip e verr&agrave; automaticamente decompresso. <b>ATTENZIONE</b> Questa operazione sovrascriver&agrave; tutti i dati esistenti. L\'operazione di ripristino potrebbe impiegare molto tempo per essere completata. Non muoverti da questa pagina finch&eacute; l\'operazione non sar&agrave; completata.';
$lang['Backup_explain'] = 'qui puoi fare il backup di tutti i dati del forum. Se hai delle tabelle personalizzate nello stesso database di cui vorresti fare il backup inserisci i nomi separati da virgole nel campo Tabelle Addizionali. Se il tuo server lo supporta puoi comprimere i files utilizzando Gzip per ridurre le loro dimensioni prima del download.';

// Start Optimize Database
$lang['Optimize'] = 'Ottimizza';
$lang['Optimize_explain'] = 'Da qui si possono ottimizzare i dati contenuti nelle tabelle del database. In questo modo puoi eliminare parte di dati che contengono spazi vuoti.<br />Questa operazione dovrebbe essere compiuta regolarmente in modo da rendere il tuo database affidabile e veloce nell\'esecuzione.';
$lang['Optimize_DB'] = 'Ottimizza Database';
$lang['Optimize_Enable_cron'] = 'Abilita Cron';
$lang['Optimize_Cron_every'] = 'Cron Ogni';
$lang['Optimize_Cron_every_explain'] = 'Per poter utilizzare questa funzione, ricorda che devi abilitare <b>PHP Cron [Global Switch]</b> in <b>Configurazione &raquo; Icy Phoenix &raquo; Cron</b>';
$lang['Optimize_month'] = 'Mese';
$lang['Optimize_2weeks'] = '2 Settimane';
$lang['Optimize_week'] = 'Settimana';
$lang['Optimize_3days'] = '3 Giorni';
$lang['Optimize_day'] = 'Giorno';
$lang['Optimize_6hours'] = '6 Ore';
$lang['Optimize_hour'] = 'ora';
$lang['Optimize_30minutes'] = '30 minuti';
$lang['Optimize_20seconds'] = '20 secondi (solo per test)';
$lang['Optimize_Current_time'] = 'Ora Attuale';
$lang['Optimize_Next_cron_action'] = 'Prossima Azione del Cron';
$lang['Optimize_Performed_Cron'] = 'Cron Eseguito';
$lang['Optimize_Show_not_optimized'] = 'Mostra solo tabelle non ottimizzate';
$lang['Optimize_Show_begin_for'] = 'Mostra solo tabelle che iniziano per';
$lang['Optimize_Configure'] = 'Configura';
$lang['Optimize_Table'] = 'Tabella';
$lang['Optimize_Record'] = 'Record';
$lang['Optimize_Type'] = 'Tipo';
$lang['Optimize_Size'] = 'Dimensione';
$lang['Optimize_Status'] = 'Stato';
$lang['Optimize_CheckAll'] = 'Seleziona Tutte';
$lang['Optimize_UncheckAll'] = 'Deseleziona Tutte';
$lang['Optimize_InvertChecked'] = 'Inverti Selezione';
$lang['Optimize_return'] = 'Clicca %sQUI%s per tornare a Ottimizza Database';
$lang['Optimize_success'] = 'Il Database &egrave; stato Ottimizzato con Successo';
$lang['Optimize_NoTableChecked'] = '<b>Nessuna</b> Tabella Selezionata';
//End Optimize Database

$lang['Backup_options'] = 'Opzioni Backup';
$lang['Start_backup'] = 'Inizia Backup';
$lang['Full_backup'] = 'Backup Completo';
$lang['Structure_backup'] = 'Backup solo Struttura';
$lang['Data_backup'] = 'Backup solo Dati';
$lang['Additional_tables'] = 'Tabelle Addizionali';
$lang['phpBB_only'] = 'Solo tabelle relative a Icy Phoenix';
$lang['Gzip_compress'] = 'File di compressione Gzip';
$lang['Select_file'] = 'Seleziona un file';
$lang['Start_Restore'] = 'Inizia Ripristino';

$lang['Restore_success'] = 'Il Database &egrave; stato ripristinato con successo.<br /><br />Il tuo Forum dovrebbe tornare allo stato che era al momento del backup.';
$lang['Backup_download'] = 'Il tuo Download comincer&agrave; presto. Attendi...';
$lang['Backups_not_supported'] = 'Spiacenti, il backup del database non pu&ograve; essere concluso, a causa della mancanza di permessi. Contatta il tuo WebHost.';

$lang['Restore_Error_uploading'] = 'Errore nel caricamento del file di backup';
$lang['Restore_Error_filename'] = 'Problema con il nome del file, provane uno alternativo.';
$lang['Restore_Error_decompress'] = 'Non &egrave; possibile decomprimere un file Gzip, carica il file di testo.';
$lang['Restore_Error_no_file'] = 'Nessun file &egrave; stato caricato';


// Auth pages
$lang['Select_a_User'] = 'Seleziona un Utente';
$lang['Select_a_Group'] = 'Seleziona un Gruppo';
$lang['Select_a_Forum'] = 'Seleziona un Forum';
$lang['Auth_Control_User'] = 'Controllo Permessi Utente';
$lang['Auth_Control_Group'] = 'Controllo Permessi Gruppo';
$lang['Auth_Control_Forum'] = 'Controllo Permessi Forum';
$lang['Auth_list_Control_Forum'] = 'Controllo Permessi dei Forums';
$lang['Look_up_User'] = 'Cerca Utente';
$lang['Look_up_Group'] = 'Cerca Gruppo';
$lang['Look_up_Forum'] = 'Cerca Forum';

$lang['Group_auth_explain'] = 'In questa sezione puoi modificare i permessi e lo stato dei moderatori assegnati ad ogni gruppo. Non dimenticare che quando cambi i permessi di un gruppo, l\'utente potrebbe accedere comunque ai forum. Grazie ai suoi permessi individuali. In questo caso sarai avvisato.';
$lang['User_auth_explain'] = 'In questa sezione puoi modificare i permessi e lo stato dei moderatori assegnati ad ogni utente individuale. Non dimenticare quando cambi i permessi di un utente i permessi del gruppo gli potrebbero permettere di accedere comunque ai forum. In questo caso sarai avvisato.';
$lang['Forum_auth_explain'] = 'In questa sezione puoi modificare i livelli di autorizzazione per ogni forum. Puoi fare questo utilizzando una modalit&agrave; semplice e una modalit&agrave; avanzata. La modalit&agrave; avanzata offre maggior controllo per ogni operazione sui forum. Ricorda che cambiare i permessi dei forum mostrer&agrave; gli utenti che possono eseguire le varie operazioni nei forum.';
$lang['Forum_auth_list_explain'] = 'In questa sezione puoi modificare i livelli di autorizzazione per ogni forum. Ricorda che modificare i permessi dei forum incider&agrave; su quali utenti possono eseguire le varie operazioni nei forum.';

$lang['Simple_mode'] = 'Modalit&agrave; Semplice';
$lang['Advanced_mode'] = 'Modalit&agrave; Avanzata';
$lang['Moderator_status'] = 'Stato dei moderatori';

$lang['Allowed_Access'] = 'Accessi Ammessi';
$lang['Disallowed_Access'] = 'Accessi non Ammessi';
$lang['Is_Moderator'] = 'E\' Moderatore';
$lang['Not_Moderator'] = 'Non &egrave; Moderatore';

$lang['Conflict_warning'] = 'Attenzione Conflitto di Autorizzazione';
$lang['Conflict_access_userauth'] = 'Questo utente ha ancora diritti di accesso a questo forum per il suo gruppo di appartenenza. Potresti voler cambiare i permessi del gruppo o rimuovere questo utente dal gruppo per togliere completamente i suoi diritti di accesso. I diritti del gruppo (e i forum coinvolti) sono elencati qui sotto.';
$lang['Conflict_mod_userauth'] = 'Questo utente ha ancora i diritti di moderatore a questo forum per il suo gruppo di appartenenza. Potresti voler cambiare i permessi del gruppo o rimuovere questo utente dal gruppo per togliere completamente i suoi diritti di moderatore. I diritti del gruppo (e i forum coinvolti) sono elencati qui sotto.';

$lang['Conflict_access_groupauth'] = 'I seguenti utenti hanno ancora diritti di accesso a questo forum per le impostazioni dei permessi utenti. Potresti voler cambiare i permessi del gruppo o rimuovere questo utente dal gruppo per togliere completamente i suoi diritti di accesso. I diritti del gruppo (e i forum coinvolti) sono elencati qui sotto.';
$lang['Conflict_mod_groupauth'] = 'I seguenti utenti hanno ancora i diritti di moderatore a questo forum per le impostazioni dei permessi utenti. Potresti voler cambiare i permessi del gruppo o rimuovere questo utente dal gruppo per togliere completamente i suoi diritti di moderatore. I diritti del gruppo (e i forum coinvolti) sono elencati qui sotto.';

$lang['Public'] = 'Pubblico';
$lang['Private'] = 'Privato';
$lang['Registered'] = 'Registrato';
$lang['Self'] = 'Propri';
$lang['Administrators'] = 'Amministratori';
$lang['Hidden'] = 'Nascosto';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_NONE'] = 'NESSUNO';
$lang['Forum_ALL'] = 'TUTTI';
$lang['Forum_REG'] = 'REG';
$lang['Forum_SELF'] = 'PROPRI';
$lang['Forum_PRIVATE'] = 'PRIVATO';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_JADMIN'] = 'J ADMIN';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Guarda';
$lang['Read'] = 'Leggi';
$lang['Post'] = 'Invia';
$lang['Reply'] = 'Rispondi';
$lang['Edit'] = 'Modifica';
$lang['Delete'] = 'Elimina';
$lang['Sticky'] = 'Importante';
$lang['Announce'] = 'Annuncio';
$lang['Vote'] = 'Vota';
$lang['Pollcreate'] = 'Crea Sondaggio';

$lang['Simple_Permission'] = 'Permesso Semplice';

$lang['User_Level'] = 'Livello Utente';
$lang['Auth_User'] = 'Utente';
$lang['Auth_Junior_Admin'] = 'Amministratore Junior';
$lang['Auth_Admin'] = 'Amministratore';
$lang['Group_memberships'] = 'Membri gruppo utenti (in totale: %d)';
$lang['Usergroup_members'] = 'Questo gruppo ha i seguenti membri (in totale: %d)';

$lang['Forum_auth_updated'] = 'Permessi Forum Aggiornati';
$lang['User_auth_updated'] = 'Permessi Utente Aggiornati';
$lang['Group_auth_updated'] = 'Permessi Gruppo Aggiornati';

$lang['Auth_updated'] = 'I permessi sono stati aggiornati';
$lang['Click_return_userauth'] = 'Clicca %sQUI%s per tornare a Permessi Utenti';
$lang['Click_return_groupauth'] = 'Clicca %sQUI%s per tornare a Permessi Gruppo';
$lang['Click_return_forumauth'] = 'Clicca %sQUI%s per tornare a Permessi Forum';


// Banning
$lang['Ban_control'] = 'Controllo Disabilitazione';
$lang['Ban_explain'] = 'qui puoi controllare la disabilitazione degli utenti. Puoi disabilitare per utente specifico o un individuole, per intervallo di indirizzi IP o hostnames. Questi metodi impediscono all\'utente di raggiungere anche l\'indice del tuo forum. Per impedire ad un utente di registrarsi con uno username diverso puoi anche disabilitare un indirizzo email specifico. Nota che disabilitare solo un indirizzo email non eviter&agrave; che quell\'utente possa essere in grado di entrare o di inviare messaggi al tuo forum. Per questo devi usare uno dei primi due metodi.';
$lang['Ban_explain_warn'] = 'Nota che inserendo un intervallo di indirizzi IP, nella disabilitazione verranno inclusi tutti gli indirizzi tra l\'inizio e la fine degli indirizzi. Verranno fatti dei tentativi per minimalizzare il numero degli indirizzi aggiunti al database introducendo abbreviazioni generate automaticamente in modo apprpopriato. Se davvero devi inserire un intervallo di indirizzi, prova a mantenerlo piccolo o meglio specifica un singolo indirizzo.';

$lang['Select_username'] = 'Seleziona uno Username';
$lang['Select_ip'] = 'Seleziona un indirizzo IP';
$lang['Select_email'] = 'Seleziona un indirizzo Email';

$lang['Ban_username'] = 'Disabilita uno o pi&ugrave; Utenti specifici';
$lang['Ban_username_explain'] = 'Puoi disabilitare pi&ugrave; utenti con una sola operazione utilizzando l\'appropriata combinazione di mouse e tastiera per il tuo computer e browser';

$lang['Ban_IP'] = 'Disabilita uno o pi&ugrave; indirizzi IP o hostname';
$lang['IP_hostname'] = 'Indirizzo IP o hostname';
$lang['Ban_IP_explain'] = 'Per specificare diversi indirizzi IP o hostname separali con virgole (,). Per specificare un intervallo di indirizzi IP separa l\'inizio dalla fine con un trattino (-), per specificare un\'abbreviazione usa (*)';

$lang['Ban_email'] = 'Disabilita uno o pi&ugrave; indirizzi email';
$lang['Ban_email_explain'] = 'Per specificare diversi indirizzi email separali con virgole (,). Per specificare una abbreviazione per gli username usa *, per esempio *@hotmail.com';

$lang['Unban_username'] = 'Riabilita uno o pi&ugrave; utenti specifici';
$lang['Unban_username_explain'] = 'Puoi riabilitare pi&ugrave; utenti con un unica operazione utilizzando l\'appropriata combinazione di mouse e tastiera per il tuo computer e browser';

$lang['Unban_IP'] = 'Riabilita uno o pi&ugrave; indirizzi IP';
$lang['Unban_IP_explain'] = 'Puoi riabilitare pi&ugrave; indirizzi IP con un unica operazione utilizzando l\'appropriata combinazione di mouse e tastiera per il tuo computer e browser';

$lang['Unban_email'] = 'Riabilita uno o pi&ugrave; indirizzi email';
$lang['Unban_email_explain'] = 'Puoi riabilitare pi&ugrave; indirizzi email con un unica operazione utilizzando l\'appropriata combinazione di mouse e tastiera per il tuo computer e browser';

$lang['No_banned_users'] = 'Non ci sono username disabilitati';
$lang['No_banned_ip'] = 'Non ci sono indirizzi IP disabilitati';
$lang['No_banned_email'] = 'Non ci sono indirizzi email disabilitati';

$lang['Ban_update_sucessful'] = 'La lista degli utenti disabilitati &egrave; stata aggiornata con successo';
$lang['Click_return_banadmin'] = 'Clicca %sQUI%s per tornare a Controllo Disabilitazione';


// Configuration
$lang['General_Config'] = 'Configurazione Generale';
$lang['Config_explain'] = 'Il modulo qui sotto ti permette di personalizzare tutte le opzioni generali del Forum. Per la configurazione dei Forum e degli Utenti utilizza i collegamenti appropriati nel pannello di sinistra.';

$lang['Click_return_config'] = 'Clicca %sQUI%s per tornare a Configurazione Generale';

$lang['General_settings'] = 'Impostazioni Generali Forum';
$lang['Server_name'] = 'Nome Dominio';
$lang['Server_name_explain'] = 'Il nome del dominio da cui lanci il forum';
$lang['Script_path'] = 'Percorso Cartella Icy Phoenix';
$lang['Script_path_explain'] = 'Il percorso dove &egrave; situato Icy Phoenix relativo al nome di dominio';
$lang['Server_port'] = 'Porta del Server';
$lang['Server_port_explain'] = 'La porta del tuo server, di solito 80, cambia solo se &egrave; diversa';
$lang['Site_name'] = 'Nome del Sito';
$lang['Site_desc'] = 'Descrizione del Sito';
$lang['Board_disable'] = 'Disabilita il Sito';
$lang['Board_disable_explain'] = 'Questo render&agrave; il sito non disponibile per gli utenti. Non uscire dopo aver disabilitato il forum, altrimenti non sarai pi&ugrave; in grado di entrare di nuovo!';
$lang['Acct_activation'] = 'Abilita l\'attivazione degli account';
$lang['Acc_None'] = 'Nessuno'; // These three entries are the type of activation
$lang['Acc_User'] = 'Utente';
$lang['Acc_Admin'] = 'Amministratore';

$lang['Abilities_settings'] = 'Impostazioni base per Utenti e Forum';
$lang['Max_poll_options'] = 'Numero massimo di opzioni per sondaggio';
$lang['Flood_Interval'] = 'Intervallo del Flood';
$lang['Flood_Interval_explain'] = 'Numero di secondi di attesa tra ogni messaggio';
$lang['Board_email_form'] = 'Messaggistica email attraverso il forum';
$lang['Board_email_form_explain'] = 'Gli utenti possono inviarsi email utilizzando il forum';
$lang['Topics_per_page'] = 'Argomenti per Pagina';
$lang['Posts_per_page'] = 'Messaggi per Pagina';
$lang['Hot_threshold'] = 'Numero di Messaggi per essere Popolare';
$lang['Default_style'] = 'Stile di Default';
$lang['Override_style'] = 'Annulla il tema dell\'utente';
$lang['Override_style_explain'] = 'Sostituisce lo stile dell\'utente con quello di Default';
$lang['Default_language'] = 'Linguaggio di Default';
$lang['Date_format'] = 'Formato Data';
$lang['System_timezone'] = 'Fuso Orario del Sistema';
$lang['Enable_gzip'] = 'Abilita la Compressione GZip';
// Start Gzip Compression Level MOD
$lang['Gzip_level'] = 'Livello di Compressione Gzip';
$lang['Gzip_level_explain'] = 'Da qui puoi cambiare il livello di compressione (un numero tra 0-9). 0 &egrave; equivalente a disabilitato, 1 &egrave; molto basso, e 9 &egrave; il massimo. Si raccomanda 9.';
// End Gzip Compression Level MOD

$lang['Enable_prune'] = 'Abilita il Pruning del Forum';
$lang['Allow_HTML'] = 'Permetti HTML';
$lang['Allow_BBCode'] = 'Permetti BBCode';
$lang['Allowed_tags'] = 'Tags HTML Permessi';
$lang['Allowed_tags_explain'] = 'Separa i tags con virgole';
$lang['Allow_smilies'] = 'Permetti Smilies';
$lang['Smilies_path'] = 'Percorso Salvataggio Smilies';
$lang['Smilies_path_explain'] = 'Percorso principale directory Icy Phoenix, es. images/smilies';
$lang['Allow_sig'] = 'Permetti Firma';
$lang['Max_sig_length'] = 'Lunghezza massima firma';
$lang['Max_sig_length_explain'] = 'Numero massimo di caratteri per la firma degli utenti';
$lang['Allow_name_change'] = 'Permetti cambio Username';

$lang['Avatar_settings'] = 'Impostazioni Avatar';
$lang['Allow_local'] = 'Abilita Galleria Avatar';
$lang['Allow_remote'] = 'Abilita Avatar remoti';
$lang['Allow_remote_explain'] = 'Avatar linkati da un altro sito web';
$lang['Allow_upload'] = 'Abilita il caricamento degli Avatar';
$lang['Max_filesize'] = 'Dimensione massima File Avatar';
$lang['Max_filesize_explain'] = 'Per i file Avatar caricati';
$lang['Max_avatar_size'] = 'Dimensioni Massime Avatar';
$lang['Max_avatar_size_explain'] = '(Altezza x Larghezza in pixels)';
$lang['Avatar_storage_path'] = 'Percorso Salvataggio Avatar';
$lang['Avatar_storage_path_explain'] = 'Percorso principale directory Icy Phoenix, es. images/avatars';
$lang['Avatar_gallery_path'] = 'Percorso Galleria Avatar';
$lang['Avatar_gallery_path_explain'] = 'Percorso principale directory Icy Phoenix per il per-caricamento delle immagini, es. images/avatars/gallery';

$lang['COPPA_settings'] = 'Impostazioni Reg. Minore';
$lang['COPPA_fax'] = 'Numero di Fax per Reg. Minore';
$lang['COPPA_mail'] = 'Indirizzo per Reg. Minore';
$lang['COPPA_mail_explain'] = 'Questo &egrave; l\'indirizzo al quale i genitori manderanno il modulo di registrazione Minore';

$lang['Email_settings'] = 'Impostazioni Email';
$lang['Admin_email'] = 'Indirizzo Email Amministratore';
$lang['Email_sig'] = 'Firma Email';
$lang['Email_sig_explain'] = 'Questo testo verr&agrave; allegato ad ogni email spedita dal Forum';
$lang['Use_SMTP'] = 'Usa un Server SMTP per le email';
$lang['Use_SMTP_explain'] = 'Rispondi s&igrave; se vuoi o devi inviare email attraverso un server specifico invece della funzione mail locale';
$lang['SMTP_server'] = 'Indirizzo Server SMTP';
$lang['SMTP_username'] = 'Username SMTP';
$lang['SMTP_username_explain'] = 'Compila il campo username soltanto se il server lo richiede';
$lang['SMTP_password'] = 'Password SMTP';
$lang['SMTP_password_explain'] = 'Compila il campo password soltanto se il server lo richiede';

$lang['Disable_privmsg'] = 'Messaggi Privati';
$lang['Inbox_limits'] = 'Numero massimo di messaggi per Posta in Arrivo';
$lang['Sentbox_limits'] = 'Numero massimo di messaggi per Posta Inviata';
$lang['Savebox_limits'] = 'Numero massimo di messaggi per Posta Salvata';

$lang['Cookie_settings'] = 'Impostazioni Cookie';
$lang['Cookie_settings_explain'] = 'Questo modulo controlla come vengono definiti i cookie inviati ai browser. In molti casi l\'impostazione di default &egrave; sufficiente. Se devi cambiare queste impostazioni fallo con attenzione, le impostazioni non corrette possono impedire agli utenti di entrare.';
$lang['Cookie_domain'] = 'Dominio Cookie';
$lang['Cookie_name'] = 'Nome Cookie';
$lang['Cookie_path'] = 'Percorso Cookie';
$lang['Cookie_secure'] = 'Cookie Sicuri';
$lang['Cookie_secure_explain'] = 'Se il server funziona via SSL abilita questo altrimenti lascia disabilitato';
$lang['Session_length'] = 'Lunghezza Sessione [ secondi ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Abilita Conferma Visuale';
$lang['Visual_confirm_explain'] = 'Richiede agli utenti di scrivere un codice definito da un\'immagine al momento della registrazione.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Abilita login automatico';
$lang['Allow_autologin_explain'] = 'Determina se gli utenti sono abilitati a selezionare login automatico';
$lang['Autologin_time'] = 'Scadenza login automatico';
$lang['Autologin_time_explain'] = 'Durata del login automatico espresso in giorni, se l\'utente non visita il sito. Impostando il valore a zero viene disabilitata la scadenza.';

// Forum Management
$lang['Forum_admin'] = 'Amministrazione Forum';
$lang['Forum_admin_explain'] = 'Da questo pannello puoi aggiungere, modificare, cancellare, riordinare e ri-sincronizzare le categorie e i forum';
$lang['Edit_forum'] = 'Modifica forum';
$lang['Create_forum'] = 'Crea un nuovo forum';
$lang['Create_category'] = 'Crea una nuova categoria';
$lang['Remove'] = 'Rimuovi';
$lang['Action'] = 'Azione';
$lang['Update_order'] = 'Aggiorna Ordine';
$lang['Config_updated'] = 'Configurazione Forum Aggiornata con Successo';
$lang['Move_up'] = 'Sposta su';
$lang['Move_down'] = 'Sposta gi&ugrave;';
$lang['Resync'] = 'Sincronizza';
$lang['No_mode'] = 'Nessun mode impostato';
$lang['Forum_edit_delete_explain'] = 'Il modulo qui sotto ti permette di personalizzare tutte le opzioni generali del Forum. Per la Configurazione degli Utenti e dei Forum usa i collegamenti appropriati nel pannello di sinistra';
$lang['Forum_Expand'] = 'Espandi';
$lang['Forum_Collapse'] = 'Comprimi';
$lang['Forum_Expand_all'] = 'Espandi Tutti';
$lang['Forum_Collapse_all'] = 'Comprimi Tutti';

$lang['Move_contents'] = 'Sposta tutti i contenuti';
$lang['Forum_delete'] = 'Cancella Forum';
$lang['Forum_delete_explain'] = 'Il modulo qui sotto ti permette di cancellare un forum (o una categoria) e decidere dove mettere tutti gli argomenti (o forum) in esso/a contenuti';

$lang['Status_locked'] = 'Chiuso';
$lang['Status_unlocked'] = 'Aperto';
$lang['Forum_settings'] = 'Impostazioni Generali Forum';
$lang['Forum_name'] = 'Nome Forum';
$lang['Forum_desc'] = 'Descrizione';
$lang['Forum_status'] = 'Stato del Forum';
$lang['Forum_pruning'] = 'Eliminazione Automatica';

$lang['prune_freq'] = 'Verifica l\'et&agrave; degli argomenti ogni';
$lang['prune_days'] = 'Rimuovi gli argomenti che non hanno avuto risposte per';
$lang['Set_prune_data'] = 'Hai attivato l\'eliminazione automatica per questo forum ma non hai impostato la frequenza o il numero di giorni per l\'autoeliminazione. Torna indietro e attivalo';

$lang['FORUM_SIMILAR_TOPICS'] = 'Argomenti Simili';
$lang['FORUM_SIMILAR_TOPICS_EXPLAIN'] = 'Attivando questa opzione verr&agrave; mostrata una tabella con gli argomenti simili nella visualizzazione degli argomenti in questo forum (ricorda che devi anche attivare l\'opzione globale per questa funzionalit&agrave; nella Configurazione Icy Phoenix => SEO)';
$lang['FORUM_TOPIC_VIEWS'] = 'Visualizzazione Argomenti';
$lang['FORUM_TOPIC_VIEWS_EXPLAIN'] = 'Attivando questa opzione verranno memorizzati nel db tutti gli utenti che visualizzeranno gli argomenti di questo forum (ricorda che devi anche attivare l\'opzione globale per questa funzionalit&agrave; nella Configurazione Icy Phoenix => SQL)';
$lang['FORUM_TAGS'] = 'Forum Tags';
$lang['FORUM_TAGS_EXPLAIN'] = 'Attivando questa opzione verr&agrave; mostrata una tabella con le parole pi&ugrave; ricorrenti in questo forum (ricorda che devi anche attivare l\'opzione globale per questa funzionalit&agrave; nella Configurazione Icy Phoenix => SEO)';
$lang['FORUM_SORT_BOX'] = 'Casella Ordinamento';
$lang['FORUM_SORT_BOX_EXPLAIN'] = 'Attivando questa opzione verr&agrave; mostrata la casella per ordinare alfabeticamente gli argomenti in questo forum (ricorda che devi anche attivare l\'opzione globale per questa funzionalit&agrave; nella Configurazione Icy Phoenix)';
$lang['FORUM_KB_MODE'] = 'Modalit&agrave; KB';
$lang['FORUM_KB_MODE_EXPLAIN'] = 'Attivando questa opzione il forum verr&agrave; visualizzato usando la modalit&agrave; Knowledge Base';
$lang['FORUM_INDEX_ICONS'] = 'Icone RSS E Nuovo Argomento';
$lang['FORUM_INDEX_ICONS_EXPLAIN'] = 'Attivando questa opzione verranno mostrate le icone per il feed RSS e Nuovo Argomento nell\'indice del forum (ricorda che devi anche attivare l\'opzione globale per questa funzionalit&agrave; nella Configurazione Icy Phoenix)';

$lang['Move_and_Delete'] = 'Sposta e Cancella';

$lang['Delete_all_posts'] = 'Cancella tutti i messaggi';
$lang['Nowhere_to_move'] = 'Nessun posto dove spostare';

$lang['Edit_Category'] = 'Modifica Categoria';
$lang['Edit_Category_explain'] = 'Utilizza questo forum per modificare un nome di categorie';

$lang['Forums_updated'] = 'Le informazioni dei Forum e delle Categorie sono state aggiornate con successo';

$lang['Must_delete_forums'] = 'Devi cancellare tutti i forum per cancellare questa categoria';

$lang['Click_return_forumadmin'] = 'Clicca %sQUI%s per tornare a Amministrazione Forum';


// Smiley Management
$lang['smiley_title'] = 'Utility Modifica Smiley';
$lang['smile_desc'] = 'Da questa pagina puoi aggiungere, togliere e modificare le emoticons o gli smiley che i tuoi utenti possono utilizzare nei loro messaggi.';

$lang['smiley_config'] = 'Configurazione Smiley';
$lang['smiley_code'] = 'Codice Smiley';
$lang['smiley_url'] = 'File Immagine Smiley';
$lang['smiley_emot'] = 'Emozione Smiley';
$lang['smile_add'] = 'Aggiungi un nuovo Smiley';
$lang['Smile'] = 'Smile';
$lang['Emotion'] = 'Emotion';

$lang['Select_pak'] = 'Seleziona Pacchetto (.pak) File';
$lang['replace_existing'] = 'Sovrascrivi gli Smiley Esistenti';
$lang['keep_existing'] = 'Mantieni gli Smiley Esistenti';
$lang['smiley_import_inst'] = 'Devi decomprimere il pacchetto di smiley caricare i file nella cartella appropriata per l\'installazione. Poi seleziona le informazioni corrette da questo modulo per importare il pacchetto di smiley.';
$lang['smiley_import'] = 'Importazione Pacchetto Smiley';
$lang['choose_smile_pak'] = 'Seleziona un pacchetto di Smiley, estensione .pak';
$lang['import'] = 'Importa gli Smiley';
$lang['smile_conflicts'] = 'Cosa devi fare in caso di conflitti';
$lang['del_existing_smileys'] = 'Cancella gli smiley esistenti prima di importare';
$lang['import_smile_pack'] = 'Importa Pacchetto Smiley';
$lang['export_smile_pack'] = 'Crea Pacchetto Smiley';
$lang['export_smiles'] = 'Per creare un pacchetto di smiley dagli smiley installati, clicca %sQUI%s per scaricare il file di estensione .pak degli smiley. Nomina questo file in modo appropriato mantenendo l\'estensione .pak. Crea un file zip che contenga tutti i file immagine degli smiley e questo file .pak di configurazione.';

$lang['smiley_add_success'] = 'Gli Smiley sono stati aggiunti con successo.';
$lang['smiley_edit_success'] = 'Gli Smiley sono stati aggiornati con successo.';
$lang['smiley_import_success'] = 'Il pacchetto di Smiley &egrave; stato importato con successo!';
$lang['smiley_del_success'] = 'Gli Smiley sono stati rimossi con successo.';
$lang['Click_return_smileadmin'] = 'Clicca %sQUI%s per tornare a Amministrazione Smiley';


// User Management
$lang['User_admin'] = 'Administrazione Utenti';
$lang['User_admin_explain'] = 'qui puoi cambiare le informazioni degli utenti e alcune opzioni specifiche. Per modificare il permessi degli utenti, utilizza il modulo di Amministrazione dei Permessi per Utenti e Gruppi.';

$lang['Look_up_user'] = 'Cerca Utente';

$lang['Admin_user_fail'] = 'Non &egrave; stato possibile aggiornare il profilo utente.';
$lang['Admin_user_updated'] = 'Il profilo utente &egrave; stato aggiornato con successo.';
$lang['Click_return_useradmin'] = 'Clicca %sQUI%s per tornare a Amministrazione Utenti';
//Start quick Administrator User Options and Information MOD
$lang['Click_return_userprofile'] = 'Click %sQUI%s per tornare al profilo dell\'Utente';
//End quick Administrator User Options and Information MOD
$lang['User_delete'] = 'Cancella questo utente';
$lang['User_delete_explain'] = 'Clicca qui per cancellare questo utente. Questa operazione non pu&ograve; essere annullata.';
$lang['User_deleted'] = 'L\'utente &egrave; stato cancellato con successo.';

$lang['User_status'] = 'L\'utente &egrave; attivo';
$lang['User_allowpm'] = 'Pu&ograve; inviare Messaggi Privati';
$lang['User_allowavatar'] = 'Pu&ograve; mostrare gli Avatar';

$lang['Admin_avatar_explain'] = 'In questa sezione puoi vedere e cancellare l\'avatar attuale dell\'utente.';

$lang['User_special'] = 'Campi speciali solo per l\'amministratore';
$lang['User_special_explain'] = 'Questi campi non possono essere modificati dagli utenti. qui puoi impostare il loro stato e altre opzioni che non vengono date agli utenti.';


// Group Management
$lang['Group_administration'] = 'Amministrazione Gruppi';
$lang['Group_admin_explain'] = 'Da questo pannello puoi amministrare tutti i Gruppi Utenti. Puoi cancellare, creare e modificare i gruppi esistenti. Puoi scegliere i moderatori, modificare lo stato del gruppo (aperto/chiuso) e impostare il nome del gruppo e la descrizione.';
$lang['Error_updating_groups'] = 'C\'&egrave; stato un errore durante l\'aggiornamento dei gruppi';
$lang['Updated_group'] = 'Il gruppo &egrave; stato aggiornato con successo';
$lang['Added_new_group'] = 'Il nuovo gruppo &egrave; stato creato con successo';
$lang['Deleted_group'] = 'Il gruppo &egrave; stato cancellato con successo';
$lang['New_group'] = 'Crea nuovo gruppo';
$lang['Edit_group'] = 'Modifica gruppo';
$lang['group_name'] = 'Nome Gruppo';
$lang['group_description'] = 'Descrizione Gruppo';
$lang['group_moderator'] = 'Moderatore Gruppo';
$lang['group_status'] = 'Stato Gruppo';
$lang['group_open'] = 'Gruppo Aperto';
$lang['group_closed'] = 'Gruppo Chiuso';
$lang['group_hidden'] = 'Gruppo Nascosto';
$lang['group_delete'] = 'Cancella Gruppo';
$lang['group_delete_check'] = 'Cancella questo gruppo';
$lang['submit_group_changes'] = 'Invia Modifiche';
$lang['reset_group_changes'] = 'Annulla Modifiche';
$lang['No_group_name'] = 'Devi specificare un nome per questo gruppo';
$lang['No_group_moderator'] = 'Devi specificare un moderatore per questo gruppo';
$lang['No_group_mode'] = 'Devi specificare uno stato per questo gruppo, aperto o chiuso';
$lang['No_group_action'] = 'Nessuna azione specificata';
$lang['delete_group_moderator'] = 'Vuoi cancellare il vecchio moderatore del gruppo?';
$lang['delete_moderator_explain'] = 'Se cambi il moderatore del gruppo, seleziona questo box per rimuovere il vecchio moderatore. In caso contrario, non selezionarlo e l\'utente diverr&agrave; un normale membro del gruppo.';
$lang['Click_return_groupsadmin'] = 'Clicca %sQUI%s per tornare a Amministrazione Gruppi';
$lang['Select_group'] = 'Seleziona un gruppo';
$lang['Look_up_group'] = 'Controlla gruppo';


// Prune Administration
$lang['Forum_Prune'] = 'Eliminazione Forum';
$lang['Forum_Prune_explain'] = 'Questo canceller&agrave; tutti gli argomenti a cui non &egrave; stata inviata una risposta nel numero di giorni che hai selezionato. Se non inserisci un numero TUTTI gli argomenti saranno cancellati. Non verranno cancellati gli argomenti con sondaggi ancora attivi e neppure gli Annunci. Devi cancellare questi argomenti manualmente.';
$lang['Do_Prune'] = 'Elimina';
$lang['All_Forums'] = 'Tutti i Forum';
$lang['Prune_topics_not_posted'] = 'Elimina gli argomenti senza risposte da giorni';
$lang['Topics_pruned'] = 'Argomenti eliminati';
$lang['Posts_pruned'] = 'Messaggi eliminati';
$lang['Prune_success'] = 'L\'eliminazione dei forum &egrave; avvenuta con successo';


// Word censor
$lang['Words_title'] = 'Censura Parole';
$lang['Words_explain'] = 'Da questo pannello puoi aggiungere, modificare e rimuovere parole che saranno censurate automaticamente da tutto il forum. Inoltre non sar&agrave; possibile registrarsi con gli username che contengono queste parole. Le abbreviazioni (*) sono accettate nel campo parola , eg. *tra* comprender&agrave; attraverso, tra* comprender&agrave; trave, *tra comprender&agrave; finestra.';
$lang['Word'] = 'Parola';
$lang['Edit_word_censor'] = 'Modifica Lista';
$lang['Replacement'] = 'Sostituto';
$lang['Add_new_word'] = 'Aggiungi una nuova parola';
$lang['Update_word'] = 'Aggiorna Lista';

$lang['Must_enter_word'] = 'Devi inserire una parola e il suo sostituto';
$lang['No_word_selected'] = 'Nessuna parola selezionata per la modifica';

$lang['Word_updated'] = 'La parola selezionata &egrave; stat aggiornata con successo';
$lang['Word_added'] = 'La parola &egrave; stata aggiunta con successo';
$lang['Word_removed'] = 'La Parola selezionata &egrave; stata rimossa con successo';

$lang['Click_return_wordadmin'] = 'Clicca %sQUI%s per tornare a Censure Parole';


// Mass Email
$lang['Mass_email_explain'] = 'qui puoi inviare un messaggio a tutti i tuoi utenti o agli utenti di un gruppo specifico. Per fare questo, verr&agrave; inviato un messaggio all\'indirizzo email dell\'amministratore che hai fornito, ed una BCC (Blind Carbon Copy) verr&agrave; inviata ai destinatari. Se stai inviando una mail ad un grosso gruppo di utenti per favore si paziente dopo aver inviato e non interrompere il caricamento della pagina. Un tempo lungo &egrave; normale per una mass-email. quando il processo sar&agrave; finito, sarai avvisato.';
$lang['Compose'] = 'Componi';

$lang['Recipients'] = 'Destinatari';
$lang['All_users'] = 'Tutti gli Utenti';

$lang['Email_successfull'] = 'Il tuo messaggio &egrave; stato inviato';
$lang['Click_return_massemail'] = 'Clicca %sQUI%s per tornare a Email Generali';


// Ranks admin
$lang['Ranks_title'] = 'Amministrazione Livelli';
$lang['Ranks_explain'] = 'Con questo modulo puoi aggiungere, cancellare, modificare e guardare il livello degli utenti. Puoi anche creare dei livelli personali che possono essere applicati ad un utente attraverso la Gestione Utenti';

$lang['Add_new_rank'] = 'Aggiungi un nuovo livello';

$lang['Rank_title'] = 'Titolo Livello';
$lang['Rank_special'] = 'Imposta un Livello Speciale';
$lang['Rank_minimum'] = 'Messaggi Minimi';
$lang['Rank_maximum'] = 'Messaggi Massimi';
$lang['Rank_image'] = 'Immagine Livello (Relativo al percorso del forum)';
$lang['Rank_image_explain'] = 'Utilizza questo per definire una piccola immagine associata con il livello';

$lang['Must_select_rank'] = 'Devi selezionare un livello';
$lang['No_assigned_rank'] = 'Nessun livello speciale assegnato';

$lang['Rank_updated'] = 'Il livello &egrave; stato aggiornato con successo';
$lang['Rank_added'] = 'Il livello &egrave; stato aggiunto con successo';
$lang['Rank_removed'] = 'Il livello &egrave; stato cancellato con successo';
$lang['No_update_ranks'] = 'Il livello &egrave; stato cancellato con successo, in ogni caso gli utenti che utilizzavano questo livello non sono stati aggiornati. Dovrai impostare manualmente il nuovo livello a questi utenti';

$lang['Click_return_rankadmin'] = 'Clicca %sQUI%s per tornare a Amministrazione Livelli';


// Disallow Username Admin
$lang['Disallow_control'] = 'Controllo Disabilitazione Utenti';
$lang['Disallow_explain'] = 'qui puoi controllare gli username che non si possono utilizzare. Gli username disabilitati possono contenere una abbreviazione (*). Per favore nota che non puoi specificare nessuno username che &egrave; gi&agrave; stato registrato, devi prima cancellare il nome e poi disabilitarlo';

$lang['Delete_disallow'] = 'Cancella';
$lang['Delete_disallow_title'] = 'Rimuovi uno Username Disabilitato';
$lang['Delete_disallow_explain'] = 'Puoi rimuovere uno username disabilitato selezionando lo username da questa lista e cliccando su Cancella';

$lang['Add_disallow'] = 'Aggiungi';
$lang['Add_disallow_title'] = 'Aggiungi uno username disabilitato';
$lang['Add_disallow_explain'] = 'Puoi disabilitare uno username utilizzando l\'abbreviazione * per comprendere ogni carattere';

$lang['No_disallowed'] = 'Nessuno Username Disabilitato';

$lang['Disallowed_deleted'] = 'Lo username disabilitato &egrave; stato rimosso con successo';
$lang['Disallow_successful'] = 'Lo username disabilitato &egrave; stato aggiunto con successo';
$lang['Disallowed_already'] = 'Il nome che hai inserito non pu&ograve; essere disabilitato. Esiste gi&agrave; nella lista delle parole censurate o esiste uno username con questo nome';

$lang['Click_return_disallowadmin'] = 'Clicca %sQUI%s per tornare a Disabilitazione Utenti';


// Styles Admin
$lang['Styles_admin'] = 'Amministrazione Stili';
$lang['Styles_explain'] = 'Utilizzando queste opzioni puoi aggiungere, rimuovere e gestire gli stili (modelli e temi) del tuo forum';
$lang['Styles_addnew_explain'] = 'La lista seguente contiene tutti i temi che sono disponibili per i modelli che hai al momento. I temi nella lista non sono ancora stati caricati nel database del forum. Per installarli semplicemente clicca sul link installa di fianco ad ogni stile.';

$lang['Select_template'] = 'Seleziona un Modello';

$lang['Style'] = 'Stile';
$lang['Template'] = 'Tema';
$lang['Download'] = 'Scarica';

$lang['Edit_theme'] = 'Modifica Tema';
$lang['Edit_theme_explain'] = 'Nel modulo qui sotto puoi modificare le impostazioni per il tema selezionato';

$lang['Create_theme'] = 'Crea Tema';
$lang['Create_theme_explain'] = 'Utilizza il modulo qui sotto per creare un nuovo tema per il modello selezionato. Quando inserisci i colori (devi usare la notazione esadecimale) non  devi includere all\'inizio #, es. CCCCCC &egrave; valido, #CCCCCC non valido.';

$lang['Export_themes'] = 'Esporta Temi';
$lang['Export_explain'] = 'In questo pannello puoi esportare i dati del tema per il modello selezionato. Seleziona un modello dalla lista qui sotto e lo script creer&agrave; il file di configurazione del tema e tenter&agrave; di salvarlo nella directory dei modelli (template). Se non pu&ograve; salvare il file, il programma ti dar&agrave; la possibilit&agrave; di scaricarlo. Per permettere allo script di salvare il file devi dare il permesso di scrittura alla directory dei modelli sul server. Per ulteriori informazioni consulta il sito di supporto di Icy Phoenix.';

$lang['Theme_installed'] = 'Il tema selezionato &egrave; stato installato con successo';
$lang['Style_removed'] = 'Lo stile selezionato &egrave; stato rimosso dal database. Per rimuovere completamente questo stile dal tuo sistema, devi cancellare lo stile dalla directory dei modelli (template).';
$lang['Theme_info_saved'] = 'Le informazioni dl tema per il modello selezionato sono state salvate. Adesso devi reimpostare i permessi del file theme_info.cfg (e se possibile anche nella directory dei modelli) su sola lettura';
$lang['Theme_updated'] = 'Il tema selezionato &egrave; stato aggiornato. Adesso devi esportare le impostazioni del nuovo tema';
$lang['Theme_created'] = 'Tema creato. Adesso devi esportare il tema nel file di configurazione del tema per utilizzarlo da un\'altra parte';

$lang['Confirm_delete_style'] = 'Sei sicuro di voler cancellare questo stile?';

$lang['Download_theme_cfg'] = 'Il processo di esportazione non riesce a scrivere il file di configurazione del tema. Clicca il bottone qui sotto per scaricare questo file con il tuo browser. Dopo averlo scaricato puoi trasferirlo nella directory che contiene i file dei modelli. Dopo puoi compattare i file per distribuirli o per riutilizzarli';
$lang['No_themes'] = 'Il modello che hai selezionato non ha temi allegati. Per creare un nuovo tema clicca sul link Crea Tema nel pannello di sinistra';
$lang['No_template_dir'] = 'Non &egrave; possibile aprire la directory dei modelli. Potrebbe essere non leggibile dal server o potrebbe non esistere';
$lang['Cannot_remove_style'] = 'You cannot remove the style selected since it is currently the forum default. Please change the default style and try again.';
$lang['Style_exists'] = 'Non puoi rimuovere lo stile selezionato perch&egrave; &egrave; quello di default nel forum. Cambia lo stile di default e poi riprova';

$lang['Click_return_styleadmin'] = 'Clicca %sQUI%s per tornare a Amministrazione Stili';

$lang['Theme_settings'] = 'Impostazioni del Tema';
$lang['Theme_element'] = 'Elemento del Tema';
$lang['Simple_name'] = 'Nome Semplice';
$lang['Save_Settings'] = 'Salva Impostazioni';

$lang['Stylesheet'] = 'Foglio Di Stile CSS';
$lang['Stylesheet_explain'] = 'Nome del file per il foglio di stile CSS usato da questo tema.';
$lang['Background_image'] = 'Immagine Di Sfondo';
$lang['Background_color'] = 'Colore Di Sfondo';
$lang['Theme_name'] = 'Nome Tema';
$lang['Link_color'] = 'Colore Link';
$lang['Text_color'] = 'Colore Testo';
$lang['VLink_color'] = 'Colore Link Visitato';
$lang['ALink_color'] = 'Colore Link Attivo';
$lang['HLink_color'] = 'Colore Link Hover';
$lang['Tr_color1'] = 'Tabella Colonna Colore 1';
$lang['Tr_color2'] = 'Tabella Colonna Colore 2';
$lang['Tr_color3'] = 'Tabella Colonna Colore 3';
$lang['Tr_class1'] = 'Tabella Colonna Classe 1';
$lang['Tr_class2'] = 'Tabella Colonna Classe 2';
$lang['Tr_class3'] = 'Tabella Colonna Classe 3';
$lang['Th_color1'] = 'Tabella Intestazione Colore 1';
$lang['Th_color2'] = 'Tabella Intestazione Colore 2';
$lang['Th_color3'] = 'Tabella Intestazione Colore 3';
$lang['Th_class1'] = 'Tabella Intestazione Colore 1';
$lang['Th_class2'] = 'Tabella Intestazione Colore 2';
$lang['Th_class3'] = 'Tabella Intestazione Colore 3';
$lang['Td_color1'] = 'Tabella Cella Colore 1';
$lang['Td_color2'] = 'Tabella Cella Colore 2';
$lang['Td_color3'] = 'Tabella Cella Colore 3';
$lang['Td_class1'] = 'Tabella Cella Colore 1';
$lang['Td_class2'] = 'Tabella Cella Colore 2';
$lang['Td_class3'] = 'Tabella Cella Colore 3';

// Admin Userlist Start
$lang['Userlist'] = 'Lista Utenti';
$lang['Userlist_description'] = 'Visualizza una lista completa dei tuoi utenti su cui potrai compiere varie azioni';

$lang['Add_group'] = 'Aggiungi ad un Gruppo';
$lang['Add_group_explain'] = 'Seleziona a quale gruppo aggiungere gli utenti selezionati';

$lang['Open_close'] = 'Apri/Chiudi';
$lang['Active'] = 'Attivo';
$lang['Group'] = 'Gruppo(i)';
$lang['Rank'] = 'Livello';
$lang['Last_activity'] = 'Ultima Attivit&agrave;';
$lang['Never'] = 'Mai';
$lang['User_manage'] = 'Gestisci';
$lang['Find_all_posts'] = 'Trova tutti i Posts';

$lang['Select_one'] = 'Selezionane Uno';
$lang['Ban'] = 'Interdizione [Ban]';
$lang['Activate_deactivate'] = 'Attiva/Disattiva';

$lang['User_id'] = 'User id';
$lang['User_level'] = 'Livello Utente';
$lang['Ascending'] = 'Crescente';
$lang['Descending'] = 'Decrescente';
$lang['Show'] = 'Mostra';
$lang['All'] = 'Tutti';

$lang['Member'] = 'Membro';
$lang['Pending'] = 'In Attesa';

$lang['Confirm_user_ban'] = 'Sicuro di voler bannare gli utenti selezionati?';
$lang['Confirm_user_deleted'] = 'Sicuro di voler cancellare gli utenti selezionati?';

$lang['User_status_updated'] = 'Lo stato degli utenti &egrave; stato aggiornato con successo!';
$lang['User_banned_successfully'] = 'Utente(i) bannato(i) con successo!';
$lang['User_deleted_successfully'] = 'Utente(i) cancellato(i) con successo!';
$lang['User_add_group_successfully'] = 'Utente(i) aggiunto(i) al gruppo con successo!';

$lang['Click_return_userlist'] = 'Clica %sQUI%s to per ritornare alla Lista Utenti';
// Admin Userlist End

// Version Check
$lang['Version_up_to_date'] = 'Nessun aggiornamento disponibile per la versione in uso di phpBB.';
$lang['Version_up_to_date_ip'] = 'Nessun aggiornamento disponibile per la versione in uso di Icy Phoenix.';
$lang['Version_not_up_to_date'] = 'La versione in uso <il b>non </ b>&egrave; recente. Per gli aggiornamenti disponibili visita <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> per vedere l\'ultima versione.';
$lang['Version_not_up_to_date_ip'] = 'Aggiornamenti disbponibili per la tua versione di Icy Phoenix, per cortesia visita <a href="http://www.icyphoenix.com/" target="_new">Icy Phoenix</a> per ottenere l\'ultima versione.';
$lang['Latest_version_info'] = 'L\'ultima versione disponibile &egrave; <b>phpBB %s</b>.';
$lang['Current_version_info'] = 'La tua Versione &egrave; <b>phpBB %s</b>.';
$lang['Connect_socket_error'] = 'Impossibile il collegamento a phpBB. Rapporto errore:<br />%s';
$lang['Connect_socket_error_ip'] = 'Impossibile il collegamento ad Icy Phoenix. Rapporto errore: %s';
$lang['Socket_functions_disabled'] = 'Impossibile utilizzare la funzione socket.';
$lang['Mailing_list_subscribe_reminder'] = 'Per le ultime informazioni su aggiornamenti a phpBB <a href="http://www.phpbb.com/support/" target="_new">iscriviti alla mailing list</a>.';
$lang['Version_information'] = 'Informazione Versione';
$lang['Version_not_checked'] = 'La verifica della versione &egrave; disabilitata, visita il sito di Icy Phoenix per informazioni su nuove versioni.';

// Start add - Birthday MOD
$lang['Birthday_required'] = 'Imponi agli utenti di selezionare la data di nascita';
$lang['Enable_birthday_greeting'] = 'Abilita auguri di compleanno';
$lang['Birthday_greeting_expain'] = 'Agli utenti che hanno indicato la loro data di nascita, in occasione del loro compleanno il forum invier&agrave; gli auguri';
$lang['Next_birthday_greeting'] = 'Anno del prossimo compleanno';
$lang['Next_birthday_greeting_expain'] = 'Questo campo memorizza l\'anno in cui l\'utente avr&agrave; il prossimo compleanno';
$lang['Wrong_next_birthday_greeting'] = 'Anno del prossimo compleanno non valido! Riprovare grazie';
$lang['Max_user_age'] = 'Et&agrave; massima utente';
$lang['Min_user_age'] = 'Et&agrave; minima utente';
$lang['Birthday_lookforward'] = 'Compleanno nei giorni successivi';
$lang['Birthday_lookforward_explain'] = 'Quanti giorni avanti lo script dovr&agrave; cercare i compleanni';
// End add - Birthday MOD

$lang['Main_Admin_Undeleted'] = 'L\'amministratore principale non pu&ograve; essere cancellato!';
$lang['Main_Admin_Unchanged_Profile'] = 'Non puoi modificare il profilo dell\'amministratore principale!';
$lang['Main_Admin_Unchanged_Level'] = 'L\'amministratore principale non pu&ograve; diventare un semplice utente!';

// Default avatar MOD, By Manipe (Begin)
$lang['Default_avatar'] = 'Imposta l\'avatar di default';
$lang['Default_avatar_explain'] = 'Questo sar&agrave;  l\'avatar per gli utenti che non ne hanno selezionato uno. Imposta l\'avatar di default per gli ospiti e per gli utenti e seleziona se vuoi che sia visualizzato per gli utenti registrati, per gli ospiti, per entrambi, o per nessuno.';
$lang['Default_avatar_guests'] = 'Ospiti';
$lang['Default_avatar_users'] = 'Utenti';
$lang['Default_avatar_both'] = 'Entrambi';
$lang['Default_avatar_none'] = 'Nessuno';
// Default avatar MOD, By Manipe (End)

// Start add - Global announcement MOD
$lang['Globalannounce'] ='Annuncio Globale';
// End add - Global announcement MOD

// Disallow other admins to delete or edit the first admin MOD
$lang['L_LISTOFADMINEDIT'] = 'Accessi bloccati all\'account dell\'Amministratore principale';
$lang['L_LISTOFADMINEDITEXP'] = 'In questa lista ci sono gli accessi bloccati all\'account dell\'Amministratore principale. Gli Amministratori hanno cercato di cambiare il profilo dell\'Amministratore principale, di cancellarlo o di impostarlo a normale utente. Modifiche dei dati o dei permesssi dell\'Amministratore principale non hanno avuto luogo e sono state bloccate. Questa lista pu&ograve; essere cancellata dall\'Amministratore principale.';
$lang['L_LISTOFADMINEDITUSERS'] = 'Lista Accessi bloccati all\'account dell\'Amministratore principale';
$lang['L_LISTOFADMINTEXT'] = 'Accessi bloccati a causa di';
$lang['L_DELETEMSG'] = 'Cancella elementi';
$lang['L_DELETESUCMSG'] = 'Gli elementi sono stati cancellati con successo';
$lang['L_ADMINEDITMSG'] = 'Non hai il permesso di modificare i dati del profilo o i permessi dell\'Amministratore principale.<br /><br />Questo accesso &egrave; stato annotato e bloccato con successo!';

// Advanced Signature Divider Control
$lang['sig_title'] = 'Controllo Avanzato Separatore della Firma';
$lang['sig_divider'] = 'Separatore della Firma attuale';
$lang['sig_explain'] = 'Da qui puoi controllare che Separatore utilizzare per dividere la firma degli utenti dai loro post.';

//
// Start add - Yellow card admin MOD
$lang['Max_user_bancard'] = 'Numero massimo di ammonizioni';
$lang['Max_user_bancard_explain'] = 'Se un utente riceve un numero di cartellini gialli che eccede questo limite verra\' sospeso';
$lang['ban_card'] = 'Cartellino giallo';
$lang['ban_card_explain'] = 'Utente sospeso quando i cartellini gialli supereranno il numero di: %d ';
$lang['Greencard'] = 'Riattiva';
$lang['Bluecard'] = 'Segnala messaggio';
$lang['Bluecard_limit'] = 'Intervallo Blue Cards';
$lang['Bluecard_limit_explain'] = 'Notifica il moderatore ogni x blue card attribuite ad un messaggio';
$lang['Bluecard_limit_2'] = 'Notifica Blue Card ';
$lang['Bluecard_limit_2_explain'] = 'Invia la prima notifica al moderatore quando un messaggio raggiunge un numero di blue cards pari a ';
$lang['Report_forum']= 'Forum segnalazioni';
$lang['Report_forum_explain'] = 'Selezionare il forum in cui verranno inseriti i report degli utenti. Gli utenti <b> devono avere almeno</b> il permesso di scrittura e risposta in questo forum';

// Start add - Last visit MOD
$lang['Hidde_last_logon'] = 'Nascondi ultima connessione';
$lang['Hidde_last_logon_expain'] = 'Se impostato a S&igrave; solo l\'amministratore del forum potr&agrave; visualizzare la data dell\'ultimo collegamento';
// End add - Last visit MOD

$lang['Postcounts_Configuration'] = 'Numero Post';
$lang['Rebuild Search'] = 'Ricostruisci Cerca';

// Start add - Online/Offline/Hidden Mod
$lang['Online_setting'] = 'Online Status Setting';
$lang['Online_color'] = 'Online text color';
$lang['Offline_color'] = 'Offline text color';
$lang['Hidden_color'] = 'Hidden text color';
// End add - Online/Offline/Hidden Mod

// XS News
$lang['xs_news_settings'] = 'Impostazioni XS News';
$lang['xs_news_show'] = 'Visualizza Banner News?';
$lang['xs_news_show_ticker'] = 'Visualizza News Ticker?';
$lang['xs_news_show_ticker_explain'] = 'Questa &egrave; un\'impostazione dominante settandola su \'No\'non verr&agrave; visualizzato nessun ticker. I tickers sono controllabili individualmente dalle loro impostazioni.';
$lang['xs_news_show_ticker_subtitle'] = 'Visualizza sottotitolo ticker?';
$lang['xs_news_show_ticker_subtitle_explain'] = 'Impostandola su Si verr&agrave; visualizzato \'News Tickers\' sopra i tickers delle news.';
$lang['xs_news_show_news_subtitle'] = 'Visualizza sottotitolo News?';
$lang['xs_news_show_news_subtitle_explain'] = 'Impostandolo su Si verr&agrave; visualizzato \'News\' sopra le news.';
$lang['xs_news_dateformat'] = 'Formato Data';
$lang['xs_news_dateformat_helper'] = 'Usa questo formato: %s';

// Begin Thanks Mod
$lang['use_thank'] = 'Abilita Ringraziamenti';
// End Thanks Mod

// Start add - Online/Offline/Hidden Mod
$lang['Online_time'] = 'Durata stato Online';
$lang['Online_time_explain'] = 'Numero di secondi minimo per il quale un utente apparir&agrave; online dopo la sua inattivit&agrave; (non usare valori inferiori a 60).';
$lang['Online_setting'] = 'Configurazione Stato Online';
$lang['Online_color'] = 'Colore testo Online';
$lang['Offline_color'] = 'Colore testo Offline';
$lang['Hidden_color'] = 'Colore testo Utente Nascosto';
// End add - Online/Offline/Hidden Mod

// google bot detector by pukapuka
$lang['Detector'] = 'Google Bot Detector';
$lang['Detector_Explain'] = 'In questa pagina &egrave; possibile analizzare le visite del Bot di Google';
$lang['Detector_ID'] = '#';
$lang['Detector_Time'] = 'Tempo';
$lang['Detector_Url'] = 'Url';
$lang['Detector_Clear'] = 'Elimina Tutti';
$lang['Detector_No_Bot'] = 'Non &egrave; stato Rilevato nessun Bot';
$lang['Detector_Cleared'] = 'Informazioni Rilevate Eliminate con Successo';
$lang['Click_Return_Detector'] = 'Clicca %sQUI%s per tornare al Detector';

// addded to Auto group mod
$lang['group_count'] = 'Numero di Post Richiesti';
$lang['group_count_max'] = 'Numero massimo di posts';
$lang['group_count_updated'] = '%d membri sono stati rimossi, %d membri sono stati aggiunti a questo gruppo';
$lang['Group_count_enable'] = 'Utenti aggiunti automaticamente quando postano';
$lang['Group_count_update'] = 'Aggiungi/Aggiorna nuovi membri';
$lang['Group_count_delete'] = 'Elimina/Aggiorna vecchi utenti';
$lang['User_allow_ag'] = 'Attiva AutoGroup';
$lang['group_count_explain'] = 'Quando gli utenti supereranno con i loro post questo valore <i>(in qualsiasi forum)</i> saranno aggiunti automaticamente a questo gruppo<br /> Questo si applica solo se "Utenti aggiunti automaticamente quando postano" &egrave; abilitato';
// Start add - Bin Mod
$lang['Bin_forum'] = 'Cestino';
$lang['Bin_forum_explain'] = 'Seleziona il forum che vuoi utilizzare come Cestino. Dovresti inoltre modificare i permessi di questo forum per consentire o meno l\'accesso agli utenti.';
// End add - Bin Mod

// Begin quick Title Edition Mod 1.0.0 by Xavier Olive.
$lang['Title_infos'] = 'Gestione Quick Title';
$lang['Must_select_title'] = 'Devi selezionare un quick Title';
$lang['Title_updated'] = 'Quick Title Aggiornato';
$lang['Title_added'] = 'Quick Title Aggiunto';
$lang['Click_return_titleadmin'] = 'Clicca %sQUI%s per ritornare alla Gestione Quick Title';
$lang['Title_removed'] = 'Quick Title Rimosso';
$lang['quick_title_explain'] = 'Puoi creare dei piccoli pezzi di testo che sarai in grado di aggiungere al titolo di una Discussione premendo un solo bottone.<br />Se vuoi che venga visualizzato il nome di chi ha fatto l\'operazione, inserisci %mod% dove vuoi che sia visualizzato. Per Esempio: [Link OK | controllato da %mod%] verr&agrave; visualizzato come [Link OK |controllato NomeModeratore]. Allo stesso modo puoi inserire anche la data %date% dove vuoi.';
$lang['Title_head'] = 'Quick Title';
$lang['Title_auth'] = 'Permessi';
$lang['Administrator'] = 'Amministratore';
$lang['Topic_poster'] = 'Chi ha iniziato la Discussione';
$lang['Add_new_title_info'] = 'Aggiungi un Quick Title';
$lang['Title_perm_info'] = 'Permessi';
$lang['Title_perm_info_explain'] = 'Gli Utenti con questo livello saranno in grado di utilizzare Quick Title';
$lang['Title_info'] = 'Quick Title';
// End quick Title Edition Mod 1.0.0 by Xavier Olive.

// Limit Image Width MOD
$lang['Available'] = 'Disponibile';
$lang['Unavailable'] = 'Non Disponibile';
$lang['LIW_title'] = 'Limite Larghezza Immagine';
$lang['LIW_admin_explain'] = 'Questa pagina ti permette di settare le impostazioni della Mod Limit Image Width (Limite Larghezza Immagine), potrai abilitarla e disabilitarla, inoltre potrai anche impostare la larghezza massima delle immagini postate nel forum. Se ti sembra che la tabella SQL che contiene la dimensione dellle immagini in cache sia troppo grande la puoi svuotare cliccando su \'Svuota tabella cache\'.<br /><br />Puoi anche vedere se sia possibile o no far girare la MOD sul tuo web server tramite il box\'Verifica Compatibilit&agrave;\' che trovi qui sotto';
$lang['LIW_compatibility_checks'] = 'Verifica Compatibilit&agrave;';
$lang['LIW_mod_config'] = 'Configurazione MOD';

$lang['LIW_config_updated'] = 'La configurazione &egrave; stata aggiornata con successo';
$lang['LIW_cache_emptied'] = 'La tabella della cache &egrave; stata svuotata con successo';
$lang['LIW_click_return_config'] = 'Clicca %sQUI%s per ritotnare alla Configurazione di Limit Image Width';

$lang['LIW_getimagesize'] = 'Supporto getimagesize()';
$lang['LIW_getimagesize_explain'] = 'Disponibile in PHP 4.0.5';
$lang['LIW_getimagesize_available'] = 'La MOD &egrave; in grado di verificare la dimensione dell\'immagine';
$lang['LIW_getimagesize_unavailable'] = 'La MOD non pu&ograve; verificare la dimensione delle immagini, per cui ridimensioner&agrave; <i>tutte</i> le immagini postate';

$lang['LIW_urlaware'] = 'URL-aware fopen wrappers';
$lang['LIW_urlaware_explain'] = 'Imposta allow_url_fopen su Si nel tuo php.ini';
$lang['LIW_urlaware_available'] = 'La MOD &egrave; in grado di generare un\'impronta digitale per le immagini, cos&igrave; pu&ograve; mettere in cache la dimensione delle immagini';
$lang['LIW_urlaware_unavailable'] = 'La MOD NON &egrave; in grado di generare un\'impronta digitale per le immagini, cos&igrave; NON pu&ograve; mettere in cache la dimensione delle immagini';

$lang['LIW_openssl'] = 'Estensione openSSL caricata';
$lang['LIW_openssl_explain'] = 'Carica estensione openssl.dll nel tuo php.ini';
$lang['LIW_openssl_available'] = 'La MOD &egrave; in grado di recuperare la dimensione dell\'immagine da https:// cos&igrave; le pu&ograve; mettere in cache';
$lang['LIW_openssl_unavailable'] = 'La MOD NON &egrave; in grado di recuperare la dimensione dell\'immagine da https:// cos&igrave; NON le pu&ograve; mettere in cache';

$lang['LIW_enable'] = 'Ridimensiona immagini nei messaggi';
$lang['LIW_enable_explain'] = 'Imposta su %s per permettere alla MOD di ridimensionare le immagini nei posts'; // Set to $lang['Yes'] to ....
$lang['LIW_sig_enable'] = 'Ridimensiona immagini nelle firme';
$lang['LIW_sig_enable_explain'] = 'Imposta su %s per permettere alla MOD di ridimensionare le immagini nelle firme';
$lang['LIW_attach_enable'] = 'Ridimensiona immagini allegate';
$lang['LIW_attach_enable_explain'] = 'Imposta su %s per permettere alla MOD di ridimensionare le immagini allegate tramite l\'Attachment MOD';
$lang['LIW_max_width'] = 'Larghezza Massima Immagine';
$lang['LIW_max_width_explain'] = 'Specifica la larghezza massima (in pixels) delle immagini postate tramite il tag [img]';
$lang['LIW_empty_cache'] = 'Svuota cache immagini';
$lang['LIW_empty_cache_explain'] = 'La tabella della cache contiene <b>%s</b> records'; // Your cache table currently contains <b>312</b> records
$lang['LIW_empty_cache_note'] = 'Nota che svuotando la tabella della cache la MOD dovr&agrave; rimettere in cache tutte le dimensioni delle immagini, fatto che potrebbe appesantire momentanemente il caricamento delle discussioni';
$lang['LIW_empty_cache_button'] = 'Svuota tabella cache';

// Bantron Mod : Begin
$lang['Bantron'] = 'Bantron';
$lang['BM_Title'] = 'Bantron';
$lang['BM_Explain'] = 'Da questa pagina puoi aggiungere, modificare, vedere e rimuovere i ban applicati su questa board.';

$lang['BM_Show_bans_by'] = 'Mostra bans per';
$lang['BM_All'] = 'Tutti';
$lang['BM_Show'] = 'Mostra';

$lang['BM_IP'] = 'IP';
$lang['BM_Last_visit'] = 'Utlima Visita';
$lang['BM_Banned'] = 'Bannato';
$lang['BM_Expires'] = 'Termine';
$lang['BM_By'] = 'Da';
$lang['BM_Reasons'] = 'Ragioni';

$lang['BM_Add_a_new_ban'] = 'Aggiungi un nuovo Ban';
$lang['BM_Delete_selected_bans'] = 'Elimina i bans selezionati';

$lang['BM_Private_reason'] = 'Ragione Privata';
$lang['BM_Private_reason_explain'] = 'La ragione del ban dell\'utente, delle e-mails, e/o dell\'indirizzo IP viene mantenuto come nota per l\'Amminstrazione.';

$lang['BM_Public_reason'] = 'Ragione Pubblica';
$lang['BM_Public_reason_explain'] = 'La ragione del ban dell\'utente, delle e-mails, e/o dell\'indirizzo IP verr&agrave; visualizzato dagli utenti bannati quando tenteranno di accedere al forum.';
$lang['BM_Generic_reason'] = 'Ragione Generica';
$lang['BM_Mirror_private_reason'] = 'Mirror ragione privata';
$lang['BM_Other'] = 'Altro';

$lang['BM_Expire_time'] = 'Tempo di scadenza';
$lang['BM_Expire_time_explain'] = 'Specificando una data, sia relata alla data corrente sia una data assoluta, il ban diventer&agrave; inattivo dopo questo punto nel tempo.';
$lang['BM_Never'] = 'Mai';
$lang['BM_After_specified_length_of_time'] = 'Dopo la durata di tempo specificata';
$lang['BM_Minutes'] = 'Minuto(i)';
$lang['BM_Hours'] = 'Ora(e)';
$lang['BM_Days'] = 'Giorno(i)';
$lang['BM_Weeks'] = 'Settimana(e)';
$lang['BM_Months'] = 'Mese(i)';
$lang['BM_Years'] = 'Anno(i)';
$lang['BM_After_specified_date'] = 'Dopo la data specificata';
$lang['BM_AM'] = 'AM';
$lang['BM_PM'] = 'PM';
$lang['BM_24_hour'] = '24-Ore';

$lang['BM_Ban_reasons'] = 'Ragioni Ban';
// Bantron Mod : End

// Start Edit Notes MOD
$lang['Edit_notes_settings'] = 'Configurazione Note di Modifica';
$lang['Edit_notes_enable'] = 'Abilita Note di Modifica';
$lang['Edit_notes_enable_explain'] = 'Abilita/Disabilita le Note di Modifica';
$lang['Max_edit_notes'] = 'Numero Massimo di Note di Modifica';
$lang['Max_edit_notes_explain'] = 'Imposta il numero massimo di Note di Modifica per messaggio.';
$lang['Edit_notes_permissions'] = 'Permessi per le Note di Modifica';
$lang['Edit_notes_permissions_explain'] = 'Imposta che tipi di utenti possono utilizzare le Note di Modifica.';
$lang['Edit_notes_admin'] = 'Solo Gli Amministratori';
$lang['Edit_notes_staff'] = 'Staff (Amministratori e Moderatori)';
$lang['Edit_notes_reg'] = 'Gli Utenti Registrati (Compresi anche Amministratori e Moderatori)';
$lang['Edit_notes_all'] = 'Tutti gli Utenti (Ospiti, Utenti Registrati, Amministratori e Moderatori)';
// End Edit Notes MOD

// Disable Board Message Mod
$lang['board_disable_message'] = 'Visualizza un messaggio quando il sito &egrave; disabilitato';
$lang['board_disable_message_texte'] = 'Questo testo verr&agrave; visualizzato quando il sito viene disattivato.';

// BEGIN Disable Registration MOD
$lang['registration_status'] = 'Disabilita Registrazione';
$lang['registration_status_explain'] = 'In questo modo verranno disabilitato le registrazioni al tuo forum.';
$lang['registration_closed'] = 'Motivo Chiusura delle Registrazioni';
$lang['registration_closed_explain'] = 'Testo che d&agrave; una spiegazione sulla Chiusura delle registrazioni, apparir&agrave; se un utente cerca di registrarsi. Lascia in bianco se vuoi che appaia il messaggio predefinito.';
// END Disable Registration MOD
// Start add - Gender Mod
$lang['Gender_required'] = 'Imponi agli utenti di specificare il proprio sesso';
// End add - Gender Mod

//admin user list mail
$lang['Usersname'] = 'Utenti';
$lang['Admin_Users_List_Mail_Title'] = 'Elenco Email Utenti';
$lang['Admin_Users_List_Mail_Explain'] = 'Questa &egrave; una lista delle email degli utenti';

// Start add - Forum notification MOD
$lang['Forum_notify'] = 'Notifica Forum';
$lang['Forum_notify_enabled'] = 'Permessa';
$lang['Forum_notify_disabled'] = 'Non Permessa';
// End add - Forum notification MOD

$lang['Smilie_table_columns'] = 'Colonne Tabella Smileys';
$lang['Smilie_table_rows'] = 'Righe Tabella Smileys';
$lang['Smilie_window_columns'] = 'Colonne Finestra Smileys';
$lang['Smilie_window_rows'] = 'Righe Finestra Smileys';
$lang['Smilie_single_row'] = 'Numero Smileys Singola Riga (ES.: numero smileys in Quick Reply)';

$lang['Auth_Rating'] = 'Valutazioni';

// Gravatars
$lang['Enable_gravatars'] = 'Abilita gravatars';
$lang['Gravatar_rating'] = 'Votazione massima Gravatar';
$lang['Gravatar_rating_explain'] = '<a href="http://www.gravatar.com/rating.php" target="_blank">Leggi la guida</a> per maggiori informazioni. Imposta su \'None\' per nessuna restrizione.';
$lang['Gravatar_default_image'] = 'Immagine Gravatar predefinita';
$lang['Gravatar_default_image_explain'] = 'Se non viene trovato nessun gravatar, il server ritorner&agrave; questa immagine. Lascia vuoto se non intendi utilizzare nessuna immagine.';

// Admin Account Actions
$lang['Account_actions'] = 'Azioni Accounts';
$lang['Account_inactive_explain'] = 'Da qui puoi vedere tutti gli Utenti che non sono attivi e che aspettano di essere attivati. Puoi attivare o eliminare i loro accounts.<br />Inoltre potrai impostare i loro permessi o modificare il loro profilo.';
$lang['Account_active_explain'] = 'Da qui puoi vedere tutti gli utenti che sono membri attivi. Puoi disattivare o eliminare i loro accounts.<br />Inoltre potrai impostare i loro permessi o modificare il loro profilo.';
$lang['Account_active'] = 'Utenti Attivi';
$lang['Account_inactive'] = 'Utenti Inattivi';
$lang['Account_activate'] = 'Attiva Selezionati';
$lang['Account_deactivate'] = 'Disattiva Selezionati';
$lang['Account_none'] = 'Non ci sono utenti in attesa di essere attivati.';
$lang['Account_total_user'] = 'Ammontare utenti: <b>%d</b> utente';
$lang['Account_total_users'] = 'Ammontare utenti: <b>%d</b> utenti';
$lang['Account_activation'] = 'Metodo di Attivazione';
$lang['Account_awaits'] = 'In attesa d\'attivazione da:';
$lang['Account_registered'] = 'Registrato da';
$lang['Account_delete_users'] = 'Sei sicuro di voler eliminare questi utenti?';
$lang['Account_delete_user'] = 'Sei sicuro di voler eliminare questo utente?';
$lang['Account_sort_letter'] = 'Visualizza solo accounts che iniziano per';
$lang['Account_others'] = 'altri';
$lang['Account_all'] = 'tutti';
$lang['Account_year'] = 'anno';
$lang['Account_years'] = 'anni';
$lang['Account_week'] = 'settimana';
$lang['Account_weeks'] = 'settimane';
$lang['Account_day'] = 'giorno';
$lang['Account_days'] = 'giorni';
$lang['Account_hour'] = 'ora';
$lang['Account_hours'] = 'ore';
$lang['Account_user_activated'] = 'L\'Utente &egrave; stato attivato';
$lang['Account_users_activated'] = 'Gli Utenti sono stati attivati.';
$lang['Account_user_deactivated'] = 'L\'Utente &egrave; stato disattivato.';
$lang['Account_users_deactivated'] = 'Gli Utenti sono stati disattivati.';
$lang['Account_user_deleted'] = 'L\'Utente &egrave; stato eliminato.';
$lang['Account_users_deleted'] = 'Gli Utenti sono stati eliminati.';
$lang['Account_activated'] = 'Attivazione Account';
$lang['Account_activated_text'] = 'Il tuo account è stato attivato';
$lang['Account_deactivated'] = 'Disattivazione Account';
$lang['Account_deactivated_text'] = 'Il tuo account è stato disattivato';
$lang['Account_deleted'] = 'Eliminazione Account';
$lang['Account_deleted_text'] = 'Il tuo account è stato eliminato';
$lang['Account_notification'] = 'E-mail di notifica spedita.';

// Acronyms
$lang['Acronyms_title'] = 'Amministrazione Acronimi';
$lang['Acronyms_explain'] = 'Da questo pannello di controllo puoi aggiungere, modificare e rimuovere gli acronimi che verranno aggiunti automaticamente ai messaggi del forum.';
$lang['Acronym'] = 'Acronimo';
$lang['Acronyms'] = 'Acronimi';
$lang['Edit_acronym'] = 'Modifica Acronimo';
$lang['Description'] = 'Descrizione';
$lang['Add_new_acronym'] = 'Aggiungi un nuovo Acronimo';
$lang['Update_acronym'] = 'Aggiorna Acronimo';
$lang['Must_enter_acronym'] = 'Devi inserire un acronimo e la sua descrizione';
$lang['No_acronym_selected'] = 'Nessun Acronimo';
$lang['Acronym_updated'] = 'L\'Acronimo selezionato &egrave; stato aggiornato';
$lang['Acronym_added'] = 'L\'Acronimo &egrave; stato aggiunto';
$lang['Acronym_removed'] = 'L\'Acronimo selezionato &egrave; stato rimosso';
$lang['Click_return_acronymadmin'] = 'Clicca %sQUI%s per ritornare all\'Amministrazione Acronimi';

// Start add - Fully integrated shoutbox MOD
$lang['Prune_shouts'] = 'Eliminazione Automatica Shouts';
$lang['Prune_shouts_explain'] = 'Numero di giorni necessari per l\'eliminazione automatica degli shouts (se si imposta pari a zero, l\'eliminazione automatica viene disabilitata)';
// End add - Fully integrated shoutbox MOD

// inserted MOD-Code: ['Olympus-Style' Forum Rules] starts here ...
$lang['MOD_OS_ForumRules'] = 'Regole del Forum';
$lang['Forum_rules'] = 'Regole del Forum';
$lang['Rules_display_title'] = 'Visualizza il titolo nel Box delle Regole del Forum?';
$lang['Rules_custom_title'] = 'Titolo Personalizzato';
$lang['Rules_appear_in'] = 'Queste regole appariranno...';
$lang['Rules_in_viewforum'] = 'Visualizzando questo Forum';
$lang['Rules_in_viewtopic'] = 'Visualizzando le discussioni in questo Forum';
$lang['Rules_in_posting'] = 'Rispondendo o Inviando un messaggio in questo Forum';
// ... inserted MOD-Code: ['Olympus-Style' Forum Rules] ends here!

$lang['db_update generator'] = 'Conversione SQL/PHP';
$lang['FTR: Config'] = 'FTR: Configurazione';
$lang['FTR: Users'] = 'FTR: Utenti';
$lang['Blocks Management'] = 'Gestione Blocchi';
$lang['Blocks_Position_Tag'] = 'Tag Posizione Blocchi';
$lang['Blocks Variables'] = 'Variabili Blocchi';
$lang['Delete_Cache_Files'] = 'Elimina Cache';
$lang['Page_Management'] = 'Gestione Pagina';
$lang['Portal_Configuration'] = 'Impostazioni Home Page';
$lang['Custom Field'] = 'Campi Opzionali';
$lang['Optimize tables'] = 'Ottimizza Tabelle';
$lang['XS_News_Config'] = 'Configurazione XS News';
$lang['Email_List'] = 'Lista Email';
$lang['Poll Results'] = 'Risultati Sondaggi';

$lang['Php_Info_Explain'] = 'In questa pagina sono elencate le informazioni sulla versione di PHP installata sul server. Sono inclusi in modo dettagliato i moduli caricati, le variabili disponibili, e le impostazioni predefinite. Queste informazioni potrebbero rivelarsi utili per la diagnosi dei problemi. Fatte attenzione, perchè alcuni hosting limitano le informazioni visualizzabili per ragioni di sicurezza. Si raccomanda di non fornire i dettagli di questa pagina tranne quando si richiede aiuto nel forum di Supporto.';


//XS2 Forum Header
$lang['IcyPhoenix_Main'] = 'Icy Phoenix Home';
$lang['IcyPhoenix_Download'] = 'Icy Phoenix Download';
$lang['IcyPhoenix_Code_Changes'] = 'Code Changes Mod';
$lang['IcyPhoenix_Updates'] = 'Icy Phoenix Updates';
$lang['PhpBB_Upgrade'] = 'phpBB Upgrade';
$lang['Header_Welcome'] = 'Benvenuto nel Pannello di Amministrazione di Icy Phoenix';

$lang['Prune_users'] = 'Rimozione Utenti';

$lang['Prune_Overview'] = 'Pruning Globale';
$lang['Prune_title_explain'] = 'Da qui puoi modificare le impostazioni di pruning di ogni Forum.';
$lang['Prune_forum'] = 'Forum';
$lang['Prune_active'] = 'Pruning attivo';
$lang['Prune_freq'] = 'Rmuovi tutti';
$lang['Prune_check'] = 'Seleziona tutti';
$lang['Prune_days'] = 'Giorni';
$lang['Prune_days_explain'] = '* Rimuove le discussioni in cui non ci sono state risposte.';
$lang['Click_return_admin_po'] = 'Clicca %sQUI%s, per ritornare a Pruning Globale';
$lang['Prune_update'] = 'Le impostazioni di Pruning sono state salvate senza problemi';

$lang['Admin_notepad_title'] = 'Notepad';
$lang['Admin_notepad_explain'] = 'Da questa pagina gli Amministratori possono lasciare delle note per se stessi e per gli altri amministratori.';

// Start Autolinks Mod
$lang['Autolink_first'] = 'Linka Automaticamente la parola chiave una volta in ogni messaggio';

$lang['Autolinks_title'] = 'Autolinks';
$lang['Autolinks_explain'] = 'Da questo pannello di controllo puoi aggiungere, modificare ed eliminare le parole chiave che saranno automaticamente rimpiazzate nei messaggi. Se l\'url a cui fa riferimento la parola chiave &egrave; un link interno al sito mettendo un segno di spunta sar&agrave; aggiunto anche l\'ID Sessione (SID).<br /><br />eg. Se viene trovata, la <b>Parola Chiave</b> nel messaggio sar&agrave; rimpiazzata con<br /><br />&lt;a href="<b>Url</b>" title="<b>Commento</b>" style="<b>Stile</b>"&gt;<b>Testo</b>&lt;/a&gt;';
$lang['links_keyword'] = 'Parola Chiave';
$lang['links_title'] = 'Testo';
$lang['links_url'] = 'Url';
$lang['links_comment'] = 'Commento';
$lang['links_style'] = 'Stile';
$lang['links_forum'] = 'Forum for Autolink';
$lang['links_forum2'] = 'Forum';
$lang['links_internal'] = 'Interno';
$lang['Autolinks_add'] = 'Aggiungi un Autolink';
$lang['Add_keyword'] = 'Aggiungi un Autolink';
$lang['Autolinks_edit'] = 'Modifica un Autolink';
$lang['Edit_keyword'] = 'Modifica un Autolink';
//$lang['Delete_link'] = 'Metti un segno di spunta nel box per eliminare l\'autolink.';

$lang['Select_all_forums'] = 'Tutti I Forums';
$lang['Autolink_added'] = 'Autolink aggiunto senza problemi.';
$lang['Autolink_updated'] = 'Autolink aggiornato senza problemi.';
$lang['Autolink_removed'] = 'Autolink rimosso senza problemi.';
$lang['No_autolink_selected'] = 'Non &egrave; stato selezionato nessun autolink per la rimozione.';
$lang['No_autolinks'] = 'Non ci sono Autolinks nel database.';
$lang['Must_enter_autolink'] = 'Devi inserire una Parola Chiave, un link, del testo, e un url.';
$lang['Click_return_autolinkadmin'] = 'Clicca %sQUI%s per ritornare all\'Amministrazione Autolink';
// End Autolinks Mod

//030
$lang['Max_login_attempts'] = 'Tentativi di login permessi';
$lang['Max_login_attempts_explain'] = 'Il numero di tentativi di login consentiti.';
$lang['Login_reset_time'] = 'Tempo di blocco login';
$lang['Login_reset_time_explain'] = 'Determina il tempo in minuti che l\'utente deve aspettare prima di fare di nuovo il login dopo avere ecceduto il numero di tentativi di login consentiti.';

// XS BUILD 035
// Smilies Order
$lang['position_new_smilies'] = 'I nuovi smilies debbono essere aggiunti prima o dopo gli smileys esistenti?';
$lang['smiley_change_position'] = 'Cambia Punto Di Inserimento';
$lang['before'] = 'Prima';
$lang['after'] = 'Dopo';
$lang['Move_top'] = 'Inserisci all\'inizio';
$lang['Move_end'] = 'Inserisci alla fine';

// XS BUILD 037
// Pages Auth
$lang['auth_view_title'] = 'Permessi Visualizzazione Pagine';
$lang['auth_view_portal'] = 'Home Page';
$lang['auth_view_forum'] = 'Forum';
$lang['auth_view_viewforum'] = 'Visualizzazione Forum';
$lang['auth_view_viewtopic'] = 'Visualizzazione Topic';
$lang['auth_view_faq'] = 'FAQ';
$lang['auth_view_memberlist'] = 'Lista Utenti';
$lang['auth_view_groupcp'] = 'Gruppi Utenti';
$lang['auth_view_profile'] = 'Profilo';
$lang['auth_view_search'] = 'Ricerca';
$lang['auth_view_album'] = 'Album';
$lang['auth_view_links'] = 'Links';
$lang['auth_view_calendar'] = 'Calendario';
$lang['auth_view_attachments'] = 'Allegati';
$lang['auth_view_download'] = 'Downloads';
$lang['auth_view_pic_upload'] = 'Caricamento Immagini (Post Icy Images)';
$lang['auth_view_kb'] = 'Knowledge Base';
$lang['auth_view_ranks'] = 'Livelli';
$lang['auth_view_statistics'] = 'Statistiche';
$lang['auth_view_recent'] = 'Argomenti Recenti';
$lang['auth_view_referrers'] = 'Referrers';
$lang['auth_view_rules'] = 'Regolamento';
$lang['auth_view_site_hist'] = 'Cronologia Sito';
$lang['auth_view_shoutbox'] = 'Shoutbox';
$lang['auth_view_viewonline'] = 'Utenti Online';
$lang['auth_view_contact_us'] = 'Contattaci';
$lang['auth_view_ajax_chat'] = 'Chat';
$lang['auth_view_ajax_chat_archive'] = 'Archivio Chat';
$lang['auth_view_custom_pages'] = 'Pagine Personalizzate';

// XS BUILD 041
// Begin Yahoo Submit Your Site MOD by www.pentapenguin.com
$lang['Yahoo_search'] = 'Ricerca Yahoo';
$lang['Yahoo_search_settings'] = 'Impostazioni Ricerca Yahoo';
$lang['Yahoo_search_settings_explain'] = 'Da qui puoi configurare le impostazioni per la Sottoscrizione Sito Yahoo. Per maggiori informazioni vedi <a href="http://submit.search.yahoo.com/free/request" target="_blank">Sottoscrizione Sito  Yahoo</a>.';
$lang['Yahoo_search_select_forums'] = 'Seleziona Forum';
$lang['Yahoo_search_select_forums_explain'] = 'Seleziona quali forum includere in questa lista. Puoi selezionare quanti forum desideri cliccando sul nome di ogni forum e tenendo premuto il tasto Ctrl (Windows) o il tasto Command (Macintosh). Tutti i forum che sono pubblicamente visionabili sono selezionati in modo predefinito.';
$lang['Yahoo_search_savepath'] = 'Percorso salvataggio lista URL';
$lang['Yahoo_search_savepath_explain'] = 'Immetti un percorso in cui sar&agrave; salvato il file con la lista delle URL. Immetti il percorso relativo al percorso di Icy Phoenix -- es: se salvi il file nella cartella cache <b>www.yoursite.com/cache/</b>, allora immetti <b>cache</b>. Ricordati di dare CHMOD 777 a questa cartella.';
$lang['Yahoo_search_additional_urls'] = 'Immetti URL aggiuntive';
$lang['Yahoo_search_additional_urls_explain'] = 'Immetti URL aggiuntive che vuoi vengano ispezionate da Yahoo, una per ogni riga. Devi inserire l\'URL completa -- es <b>http://www.yoursite.com/yourpage.html</b>.';
$lang['Yahoo_search_compress_file'] = 'Comprimi la lista delle URL';
$lang['Yahoo_search_compress_file_explain'] = 'Selezionando Si, la lista delle URL verr&agrave; compressa utilizzando Gzip, che garantir&agrave; un file di dimensioni minori e quindi un minor spreco di banda per il bot di Yahoo. Questa impostazione non funzioner&agrave; sui server che non supportano la compressione Gzip.';
$lang['Yahoo_search_compression_level'] = 'Livello di compressione del File';
$lang['Yahoo_search_compression_level_explain'] = 'Seleziona il livello di compressione del file. 9 &egrave; il valore raccomandato se non incontri problemi, altrimenti abbassa tale valore.';
$lang['Yahoo_search_generate_file'] = 'Genera File';
$lang['Yahoo_search_error_no_forums'] = 'Errore: non sono stati selezionati forum. Torna Indietro e selezionane almeno uno.';
$lang['Yahoo_search_error_no_gzip'] = 'Errore: o stai utilizzando una vecchia versione di PHP o il tuo server non supporta Gzip. Per Cortesia torna indietro e seleziona <b>No</b> in <b>Comprimi Lista URL</b>.';
$lang['Yahoo_search_error_unopenable_file'] = 'Errore: Impossibile Aprire il file %s.';
$lang['Yahoo_search_error_unwritable_file'] = 'Errore: Impossibile Scrivere il file %s.';
$lang['Yahoo_search_error_unclosable_file'] = 'Errore: Impossibile Chiudere il file %s.';
$lang['Yahoo_search_error_update_sql'] = 'Errore: Impossibile Aggiornare il Campo %s.';
$lang['Yahoo_search_error_unknown_file_error'] = 'Errore: il file non &egrave; stato salvato per un errore sconosciuto.';
$lang['Yahoo_search_file_done'] = 'La Lista delle URL &egrave; terminata. Per cortesia compia l\'URL riportata qui sotto, nel campo apposito di Yahoo:<br /><b>%s</b>';
// Finish Yahoo Submit Your Site MOD by www.pentapenguin.com

// XS BUILD 044
$lang['Max_bookmarks_links'] = 'Numero massimo di invii di bookmark nel link-tag';
$lang['Max_bookmarks_links_explain'] = 'Numero massimo di invii di bookmark nel link-tag all\'inizio del documento. Questa informazione viene usata p.e. da Mozilla. Impostare 0 per disabilitare la funzione.';

$lang['Faq_manager'] = 'Amministrazione FAQ';
$lang['Faq_Rules_manager'] = 'Faq &amp; Regolamento';
$lang['board_rules'] = 'Regolamento Forum';
$lang['board_faq'] = 'Faq Forum';
$lang['bbcode_faq'] = 'Faq BBcode';
$lang['attachment_faq'] = 'Faq Allegati';
$lang['prillian_faq'] = 'FAQ Prillian';
$lang['bid_faq'] = 'Faq Buddy List';

$lang['Account_active2'] = 'Utenti Attivi';
$lang['Account_inactive2'] = 'Utenti Inattivi';

$lang['Search_Flood_Interval'] = 'Intervallo Flood per la Ricerca';
$lang['Search_Flood_Interval_explain'] = 'Numero di secondi che un utente deve attendere tra le richieste della pagina di ricerca';
$lang['Confirm_delete_smiley'] = 'Sei sicuro di voler eliminare questo Smiley?';
$lang['Confirm_delete_word'] = 'Sei sicuro di voler eliminare questa Parola Censurata?';
$lang['Confirm_delete_rank'] = 'Sei sicuro di voler eliminare questo Livello?';

// Custom Profile Fields MOD
$lang['custom_field_notice_admin'] = 'Questi campi sono stati creati da un amministratore del sito. Per avere delle informazioni aggiuntive, verifica cosa viene indicato nella sezione Campo Profilo. Gli elementi contrassegnati con * sono campi obbligatori. Gli elementi contrassegnati con &dagger; verranno visualizzati solo dagli amministratori.';

$lang['field_deleted'] = 'Il campo selezionato &egrave; stato eliminato';
$lang['double_check_delete'] = 'Sei sicuro di voler eliminare definitivamente il campo "%s" dal database?';

$lang['here'] = 'QUI';
$lang['new_field_link'] = '<a href="' . append_sid($filename . '?mode=add&pfid=x') . '">%s</a>';
$lang['edit_field_link'] = '<a href="' . append_sid($filename . '?mode=edit&pfid=x') . '">%s</a>';
$lang['index_link'] = '<a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&pfid=x') . '">%s</a>';
$lang['field_exists'] = 'Questo campo esiste gi&agrave;.<br /><br />Puoi provare a creare un ' . sprintf($lang['new_field_link'], 'new') . ' campo,<br /><br />Oppure provare a ' . sprintf($lang['edit_field_link'], 'editing') . ' quello gi&agrave; esistente.';
$lang['click_here_here'] = 'Clicca ' . sprintf($lang['new_field_link'], $lang['here']) . ' per aggiungere un nuovo campo nel profilo,<br /><br />O clicca ' . sprintf($lang['index_link'], $lang['here']) . ' per tornare all\'Indice Del Pannello Di Amministrazione.';
$lang['field_success'] = 'Campo aggiunto correttamente!<br /><br />' . $lang['click_here_here'];
$lang['Custom_Profile'] = 'Campi Profilo';
$lang['profile_field_created'] = 'Campo Profilo Creato';
$lang['profile_field_updated'] = 'Campo Profilo Aggiornato';

$lang['add_field_title'] = 'Aggiungi Campo Profilo';
$lang['edit_field_title'] = 'Modifica Campi Profilo';
$lang['add_field_explain'] = 'In questa sezione puoi creare nuovi campi nel profilo degli utenti.';
$lang['edit_field_explain'] = 'In questa sezione puoi modificare i campi del profilo che hai gi&agrave; creato.';

$lang['add_field_general'] = 'Impostazioni Generali';
$lang['add_field_admin'] = 'Impostazioni Amministrazione';
$lang['add_field_view'] = 'Impostazioni Visualizzazione';
$lang['add_field_text_field'] = 'Campo Testo';
$lang['add_field_text_area'] = 'Area Di Testo';
$lang['add_field_radio_button'] = 'Pulsante Radio';
$lang['add_field_checkbox'] = 'Casella Di Selezione';

$lang['default_value'] = 'Valore Predefinito';
$lang['default_value_explain'] = 'Questo &egrave; il valore predefinito per questo campo. Se un nuovo utente non imposta questo campo, verr&agrave; utilizzato questo valore predefinito. Se questo &egrave; un campo obbligatorio, a tutti gli utenti esistenti verr&agrave; assegnato questo valore predefinito.';
$lang['default_value_radio_explain'] = 'Inserisci un nome identico a quello inserito come valore del campo.';
$lang['default_value_checkbox_explain'] = 'Inserisci i valori che debbono essere selezionati come predefiniti. Questi valori debbono coincidere con i valori indicati nelle specifiche del campo.';
$lang['max_length'] = 'Lunghezza Massima';
$lang['max_length_explain'] = 'Questa &egrave; la lunghezza massima consentita per questo campo.';
$lang['max_length_value'] = ' Deve essere un numero tra %d e %d.';
$lang['available_values'] = 'Valori Disponibili';
$lang['available_values_explain'] = 'Inserisci ciascun valore sulla propria riga';

$lang['add_field_view_disclaimer'] = 'Tutte queste impostazioni verranno considerate come "NO" se gli utenti non sono abilitati alla visualizzazione di questo campo.';

$lang['add_field_name'] = 'Nome Campo';
$lang['add_field_name_explain'] = 'Inserisci il nome che vuoi associare a questo campo';
$lang['add_field_description'] = 'Descrizione Campo';
$lang['add_field_description_explain'] = 'Inserisci una descrizione che vuoi associare a questo campo. La descrizione verr&agrave; visualizzata in piccolo sotto il nome del campo.';
$lang['add_field_type'] = 'Tipo Campo';
$lang['add_field_type_explain'] = 'Seleziona il tipo di campo che vuoi aggiungere. Sulla destra trovi alcuni esempi per ciascun tipo di campo.';
$lang['edit_field_type_explain'] = 'Seleziona la nuova tipologia che vuoi assegnare a questo campo. Sulla destra trovi alcuni esempi per ciascun tipo di campo..';
$lang['add_field_required'] = 'Imposta come Campo Obbligatorio';
$lang['add_field_required_explain'] = 'Se il campo viene impostato come "Obbligatorio", ciascun nuovo utente verr&agrave; obbligato a compilarlo, mentre agli utenti esistenti verr&agrave; assegnato il valore predefinito.';
$lang['add_field_user_can_view'] = 'Consenti Visualizzazione';
$lang['add_field_user_can_view_explain'] = 'Se questa opzione viene attivata, l\'utente potr&agrave; visualizzare e modificare questo campo. Se l\'opzione viene disattivata, soltanto gli amministratori potranno visualizzare o modificare questo campo. Se l\'opzione viene disattivata, il campo non potr&agrave; essere obbligatorio.';
$lang['view_in_profile'] = 'Visualizzazione Profilo';
$lang['profile_locations_explain'] = 'Queste opzioni servono per impostare dove deve essere visualizzato il campo nel profilo.';
$lang['contacts_column'] = 'Sezione Profilo/Contatti';
$lang['about_column'] = 'Sezione Profilo/Descrizione';
$lang['view_in_memberlist'] = 'Lista Utenti';
$lang['view_in_topic'] = 'Messaggi';
$lang['topic_locations_explain'] = 'Queste opzioni servono per impostare dove deve essere visualizzato il campo nei messaggi.';
$lang['author_column'] = 'Autore';
$lang['above'] = 'Sopra ';
$lang['below'] = 'Sotto ';

$lang['textarea'] = 'Area Di Testo';
$lang['textarea_example'] = "Questo &egrave; un esempio\n   di Area Di Testo.";
$lang['text_field'] = 'Campo Testo';
$lang['text_field_example'] = 'Questo &egrave; un esempio di Campo Testo';
$lang['radio'] = 'Pulsante Radio';
$lang['radio_example'] = 'Questo &egrave; un esempio di due Pulsanti Radio';
$lang['checkbox'] = 'Casella Di Selezione';
$lang['checkbox_example'] = 'Questo &egrave; un esempio di due Caselle Di Selezione';

$lang['profile_field_list'] = 'Campi Personalizzati';
$lang['profile_field_list_explain'] = 'Questi sono tutti campi personalizzati che sono stati creati, con i rispettivi links per modificarli o eliminarli.';
$lang['profile_field_id'] = 'ID #';
$lang['profile_field_name'] = 'Nome Campo';
$lang['profile_field_action'] = 'Azione';
$lang['no_profile_fields_exist'] = 'Non esistono Campi Personalizzati.';

$lang['enter_a_name'] = '<strong>Devi</strong> inserire il nome del campo<br /><br />Torna indietro e riprova';
// END Custom Profile Fields MOD

// XS BUILD 045
$lang['Add'] = 'Aggiungi';
$lang['split_global_announce'] = 'Dividi Annunci Globali';
$lang['split_announce'] = 'Dividi Annunci';
$lang['split_sticky'] = 'Dividi Importanti';
$lang['split_topic_split'] = 'Dividi Argomenti';
$lang['Announce_settings'] = 'Impostazioni Annunci';
$lang['Split_settings'] = 'Impostazioni Divisioni';
$lang['Allow_generator'] = 'Abilita Avatar Generator';
$lang['Avatar_generator_template_path'] = 'Percorso Template Avatar Generator';
$lang['Avatar_generator_template_path_explain'] = 'Percorso principale directory Icy Phoenix per i templates di Avatar Generator, es. images/avatars/generator_templates';

$lang['Server_Cookies'] = 'Server &amp; Cookies';

// BUILD 050
$lang['Disable_Registration_IP_Check'] = 'Disabilita blacklist IP pubbliche in fase di registrazione';
$lang['Disable_Registration_IP_Check_Explain'] = 'Normalmente viene verificato l\'indirizzo IP dell\'utente in fase di registrazione se la funzione non viene disabilitata. Il controllo &egrave; piuttosto stringente, e potrebbero venire bloccati anche degli indirizzi IP che si trovano nelle black list per errore.';
$lang['Config_explain2'] = 'Il form sottostante permette la personalizzazione del calendario e dei subforum.';
$lang['Forum_postcount'] = 'Incrementa contatore messaggi degli utenti';

// XS BUILD 057
$lang['Use_Captcha'] = 'Usa CAPTCHA';
$lang['Use_Captcha_Explain'] = 'Se impostato su SI, verr&agrave; generato un codice di conferma visuale in modalit&agrave; avanzata. Se impostato su NO, verr&agrave; generato il codice di attivazione basandosi sulla funzione standard di Icy Phoenix.';
$lang['Sync_Pics_Count'] = 'Cliccando su <b>SI</b> verranno sincronizzati i contatori di immagini nelle gallerie personali.';
$lang['Pics_Count_Synchronized'] = 'Contatori sincronizzati correttamente';
$lang['Pics_Count_Not_Synchronized'] = 'Contatori non sincronizzati';

// Icy Phoenix - BUILD 001
$lang['Enable_Digests'] = 'Attiva Digests';
$lang['Enable_Digests_PHPCron'] = 'Attiva Digests PHP Cron';
$lang['Enable_Digests_PHPCron_Explain'] = 'Questa funzione consente di abilitare un\'emulazione del CRON per l\'invio dei digests. E\' consigliabile attivarla solo se non si ha accesso al CRON sul proprio server, perch&eacute; questa funzione potrebbe non andare a buon fine in alcuni casi.';


// Ajax Shoutbox - BEGIN
$lang['Shoutbox_config'] = 'AJAX Shoutbox';
$lang['Shout_read_only'] = 'Sola Lettura';
$lang['Displayed_shouts'] = 'Messaggi Visualizzati';
$lang['Displayed_shouts_explain'] = 'Numero di messaggi che verranno visualizzati nella Shoutbox.<br /><i>Inserire <b>0</b> per visualizzare tutti i messaggi.</i>';
$lang['Stored_shouts'] = 'Messaggi Memorizzati';
$lang['Stored_shouts_explain'] = 'Numero di messaggi memorizzati nel DB.<br />Questo valore dovrebbe essere uguale o maggiore al numero di messaggi visualizzati.<br /><i>Inserire <b>0</b> per memorizzare tutti i messaggi.</i>';
$lang['Shout_guest_allowed'] = 'Consenti l\'uso agli ospiti';
$lang['Shoutbox_flood'] = 'Intervallo Flood';
$lang['Shoutbox_flood_explain'] = 'Numero di secondi minimo necessario tra l\'invio di un messaggio ed il successivo.';
$lang['Shoutbox_refreshtime'] = 'Tempo Di Aggiornamento';
$lang['Shoutbox_refresh_explain'] = 'Tempo espresso in millisecondi per l\'aggiornamento della Shoutbox.<br /><i>Questo valore dovrebbe essere almeno 1000 millisecondi.</i>';
// Ajax Shoutbox - END

// ####################### [ Icy Phoenix Options BEGIN ] #####################
$lang['MG_Configuration'] = 'Impostazioni Icy Phoenix';
$lang['MG_Configuration_Explain'] = 'In questa sezione &egrave; possibile configurare alcune impostazioni avanzate di Icy Phoenix';

$lang['MG_Configuration_Headers_Banners'] = 'Headers &amp; Banners';
$lang['MG_Configuration_Queries'] = 'Ottimizzazione SQL';
$lang['MG_Configuration_Permissions'] = 'Permessi Pagine';
$lang['MG_Configuration_Posting'] = 'Invio Messaggi';
$lang['MG_SW_Precompiled_Posts_Title'] = 'Messaggi Precompilati';
$lang['MG_SW_Logins_Title'] = 'Registrazione Logins';
$lang['MG_SW_Edit_Notes_Title'] = 'Note di Modifica';
$lang['MG_Configuration_IMG_Posting'] = 'Immagini nei messaggi';

$lang['MG_SW_Header_Footer'] = 'Messaggi Header';
$lang['MG_SW_Header_Table'] = 'Tabella Intestazione Pagina';
$lang['MG_SW_Header_Table_Explain'] = 'Attivando questa opzione verr&agrave; visualizzata una tabella in cima ad ogni pagina con un messaggio personalizzato.';
$lang['MG_SW_Header_Table_Text'] = 'Inserisci qui il tuo testo personalizzato';

$lang['MG_SW_Empty_Precompiled_Posts'] = 'Svuota messaggi precompilati';
$lang['MG_SW_Empty_Precompiled_Posts_Explain'] = 'Con questa funzione, tutti i messaggi precompilati verranno svuotati.';
$lang['MG_SW_Empty_Precompiled_Posts_Success'] = 'I messaggi precompilati sono stati eliminati.';
$lang['MG_SW_Empty_Precompiled_Posts_Fail'] = 'Errore nell\'eliminazione dei messaggi precompilati.';
$lang['MG_SW_Empty_Precompiled_Posts_InProgress'] = 'Svuotamento cache in corso';
$lang['MG_SW_Empty_Precompiled_Posts_InProgress_Redirect'] = 'Verrai automaticamente reindirizzato al passo successivo in tre secondi';
$lang['MG_SW_Empty_Precompiled_Posts_InProgress_Redirect_Click'] = 'Se il reindirizzamento automatico non dovesse funzionare, puoi cliccare %sQUI%s';
$lang['MG_SW_Empty_Precompiled_Posts_Redirect_Click'] = 'Clicca %sQUI%s per tornare alla Gestione Cache';

$lang['MG_FNF_Header'] = 'Impostazioni Veloci';
$lang['MG_FNF_Header_Explain'] = 'In questa pagina puoi impostare con un solo click alcune delle opzioni di configurazioni del sito. Queste configurazioni sono state pensate per chi vuole testare la velocit&agrave; del proprio server senza dover cercare e selezionare le opzioni una ad una nel pannello di controllo. Qualcuna di queste configurazioni possono essere utilizzate anche come base per delle personalizzazioni: ad esempio si pu&ograve; scegliere una delle opzioni proposte e poi modificare a mano le singole opzioni una ad una in seguito in base ai propri gusti.<br /><br /><span class="text_red"><b>Fate attenzione che scegliendo una di queste configurazioni le vostre opzioni saranno modificate senza possibilit&agrave; di annullare l\'operazione e ripristinare le vecchie impostazioni.</b></span>';
$lang['MG_FNF_Options_Set'] = 'Impostazioni';
$lang['MG_FNF_FNF'] = 'Fast And Furious';
$lang['MG_FNF_FNF_Explain'] = 'Questa opzione riduce al minimo tutte le funzionalit&agrave; che eseguono richieste verso il database o che richiedono tempo per essere elaborate. In questo modo il sito sar&agrave; molto veloce, a costo per&ograve; di alcune funzionalit&agrave; disattivate.';
$lang['MG_FNF_MGS'] = 'Suggeriti Da Mighty Gorgon';
$lang['MG_FNF_MGS_Explain'] = 'Questa opzione abilita alcune delle funzioni di Icy Phoenix cercando per&ograve; un buon compromesso con la velocit&agrave;. Le funzioni abilitate dovrebbero essere compatibili con la maggior parte dei server.';
$lang['MG_FNF_Full_Features'] = 'All Inclusive';
$lang['MG_FNF_Full_Features_Explain'] = 'Questa opzione abilita la quasi totalit&agrave; delle funzionalit&agrave; di Icy Phoenix. Molto probailmente il sito risulter&agrave; pi&ugrave; lento e consumer&agrave; pi&ugrave; risorse, ma avrete tutte le funzionalit&agrave; attive. C\'&egrave; da tenere presente che alcuni server potrebbero non supportare alcune funzionalit&agrave;.';

$lang['MG_SW_ACRONYMS'] = 'Disattiva acronimi';
$lang['MG_SW_ACRONYMS_Explain'] = 'Questa opzione consente di disattivare la processazione degli acronimi';
$lang['MG_SW_AUTOLINKS'] = 'Disattiva autolinks';
$lang['MG_SW_AUTOLINKS_Explain'] = 'Questa opzione consente di disattivare la processazione degli autolinks';
$lang['MG_SW_CENSOR'] = 'Disattiva censura';
$lang['MG_SW_CENSOR_Explain'] = 'Questa opzione consente di disattivare la censura';

$lang['MG_SW_No_Right_Click'] = 'Blocca il pulsante destro';

$lang['Click_return_config_mg'] = 'Clicca %sQUI%s per tornare alla configurazione di Icy Phoenix';

/*
$lang['MG_SW_'] = '';
*/
// ####################### [ Icy Phoenix Options END ] #######################

/* lang_postcount.php - BEGIN */
$lang['Postcounts'] = 'Gestione Numero Messaggi';
$lang['Post_count_explain'] = 'Da qui puoi modificare il numero di messaggi di un certo utente.';
$lang['Modify_post_counts'] = 'Modifica Numero Messaggi';
$lang['Post_count_changed'] = 'Hai modificato il numero di messaggi di un utente senza problemi!';
$lang['Click_return_posts_config'] = 'Clicca %sQUI%s per ritornare alla gestione numero messaggi';
$lang['Modify_post_count'] = 'Modifica Numero Messaggi';
$lang['Edit_post_count'] = 'Modifica Numero Messaggi per <b>%s</b>';
$lang['Post_count'] = 'Numero Messaggi';
/* lang_postcount.php - END */

/* lang_megamail.php - BEGIN */
$lang['Megamail_Explain'] = 'Da questa pagina puoi inviare un messaggio privato o email a tutti gli utenti o agli utenti di un gruppo specifico. Per fare questo, verr&agrave; inviato un messaggio all\'indirizzo email dell\'amministratore che hai fornito, ed una BCC (Blind Carbon Copy) verr&agrave; inviata ai destinatari.<br />
Le email verranno inviate in numerosi blocchi: in questo modo si dovrebbero aggirare le problematiche derivanti da timeout e da sovraccarico del server. Lo stato d\'invio delle email generali sar&agrave; salvato nel database. Puoi chiudere la finestra quando vuoi interrompere momentaneamente l\'invio delle email generali (il blocco attuale sar&agrave; comunque spedito). Puoi continuare in seguito da dove eri rimasto.<br />
<b>Se sono abilitate email in formato HTML allora l\'email verr&agrave; inviata in formato HTML, per cui dovrai fare attenzione che le interruzioni di linea avvengano tramite &lt;br /&gt;.</b><br /><b>Se scegli di inviare l\'email usando HTML Integrale, ricorda che non verr&agrave; usato nessun template o css, e dovrai inserire un codice HTML completo con tanto di tag HEAD e BODY.</b><br /><b>Ricorda anche che se decidi di inviare un PM di massa, l\'unico formato supportato &egrave; il BBCode, se usi codice HTML non verr&agrave; processato, ma mostrato cos&igrave; com\'&egrave;.</b>';
$lang['megamail_inactive_users'] = 'Utenti non entrati negli ultimi {DAYS} giorni';
$lang['megamail_header'] = 'Sessione Email';
$lang['megamail_id'] = 'ID Email';
$lang['megamail_batchstart'] = 'Elaborate';
$lang['megamail_batchsize'] = 'Blocchi';
$lang['megamail_batchwait'] = 'Pausa';
$lang['megamail_created_message'] = 'Le email generali sono state salvate nel database.<br /><br />Per iniziare a spedire clicca %sQUI%s o attendi finch&egrave; il Meta-Aggiornamento ti riporter&agrave; qui...';
$lang['megamail_send_message'] = 'Il blocco Corrente (%s - %s) &egrave stato spedito.<br /><br />Per riprendere a spedire clicca %sQUI%s o attendi finch&egrave; il Meta-Aggiornamento ti riporter&agrave; qui...';
$lang['megamail_status'] = 'Status';
$lang['megamail_proceed'] = '%sProcedi ora%s';
$lang['megamail_done'] = 'FATTO';
$lang['megamail_none'] = 'Non sono stati trovati records.';
$lang['megamail_delete_confirm'] = 'Vuoi davvero eliminare questa email?';
$lang['megamail_deleted'] = 'Email eliminata correttamente';
$lang['megamail_click_return'] = 'Clicca %sQUI%s per ritornare alla gestione Email / PM';
/* lang_megamail.php - END */

/* lang_admin_voting.php - BEGIN */
// Admin Voting MOD
$lang['Admin_Vote_Explain'] = 'Risultati Sondaggi (chi e come ha votato).';
$lang['Admin_Vote_Title'] = 'Amministrazione Sondaggi';
$lang['Vote_id'] = '#';
$lang['Poll_topic'] = 'Discussione';
$lang['Vote_username'] = 'Votante(i)';
$lang['Vote_end_date'] = 'Durata Votazione';
$lang['Sort_vote_id'] = 'Numero Sondaggio';
$lang['Sort_poll_topic'] = 'Discussione';
$lang['Sort_vote_start'] = 'Data';
$lang['Submit'] = 'Invia';
$lang['Select_sort_field'] = 'Selezione campo Ordine';
$lang['Sort_ascending'] = 'Crescente';
$lang['Sort_descending'] = 'Decrescente';
/* lang_admin_voting.php - END */

/* lang_admin_gd_info.php - BEGIN */
$lang['GD_Title'] = 'GD Info';
$lang['NO_GD'] = 'No GD';
$lang['GD_Description'] = 'Da qui puoi ottenere le informazioni riguardanti la libreria GD Installata';
$lang['GD_Freetype_Support'] = 'Supporto Freetype Fonts:';
$lang['GD_Freetype_Linkage'] = 'Tipo di Link Freetype:';
$lang['GD_T1lib_Support'] = 'Supporto T1lib';
$lang['GD_Gif_Read_Support'] = 'Supporto Lettura Gif:';
$lang['GD_Gif_Create_Support'] = 'Supporto Creazione Gif:';
$lang['GD_Jpg_Support'] = 'Supporto Jpg/Jpeg:';
$lang['GD_Png_Support'] = 'Supporto Png:';
$lang['GD_Wbmp_Support'] = 'Supporto WBMP:';
$lang['GD_XBM_Support'] = 'Supporto XBM:';
$lang['GD_Jis_Mapped_Support'] = 'Supporto Fonts Giapponesi:';
$lang['GD_True'] = 'Si';
$lang['GD_False'] = 'No';
/* lang_admin_gd_info.php - END */

/* lang_admin_captcha.php - BEGIN */
$lang['VC_Captcha_Config'] = 'CAPTCHA';
$lang['captcha_config_explain'] = 'Da qui puoi modificare l\'aspetto dell\'immagine che indica il codice di conferma quando la conferma visuale &egrave; attivata.';
$lang['VC_active'] = 'La Conferma visuale &egrave; attiva!';
$lang['VC_inactive'] = 'La Conferma visuale non &egrave; attiva!';
$lang['background_configs'] = 'Sfondo';
$lang['Click_return_captcha_config'] = 'Clicca %sQUI%s per tornare alla Configurazione CAPTCHA';

$lang['CAPTCHA_width'] = 'Larghezza CAPTCHA';
$lang['CAPTCHA_height'] = 'Altezza CAPTCHA';
$lang['background_color'] = 'Colore di Sfondo';
$lang['background_color_explain'] = 'Da Inserire il codice esadecimale (es. #0000FF per il blu).';
$lang['pre_letters'] = 'Numero di lettere con ombra';
$lang['pre_letters_explain'] = '';
$lang['great_pre_letters'] = 'Ombra ingrandita per le lettere';
$lang['great_pre_letters_explain'] = '';
$lang['Random'] = 'Casuale';
$lang['random_font_per_letter'] = 'Font Casuale per ogni lettera';
$lang['random_font_per_letter_explain'] = 'Tutte le lettere useranno un font casuale.';

$lang['back_chess'] = 'Sfondo a Scacchiera';
$lang['back_chess_explain'] = 'Riempie lo sfondo con 16 rettangoli colorati.';
$lang['back_ellipses'] = 'Ellissi';
$lang['back_arcs'] = 'Linee Curve';
$lang['back_lines'] = 'Linee';
$lang['back_image'] = 'Immagine di Sfondo';
$lang['back_image_explain'] = 'Questa Funzione non è ancora supportata';

$lang['foreground_lattice'] = 'Griglia di Sfondo';
$lang['foreground_lattice_explain'] = '(larghezza x altezza)<br />Genera una griglia sul CAPTCHA';
$lang['foreground_lattice_color'] = 'Colore Griglia';
$lang['foreground_lattice_color_explain'] = $lang['background_color_explain'];
$lang['gammacorrect'] = 'Correzione Contrasto';
$lang['gammacorrect_explain'] = '(0 = off)<br />NOTA!!! Cambi di questo valore hanno un effetto diretto sulla leggibilit&agrave; del CAPTCHA!';
$lang['generate_jpeg'] = 'Tipo Immaigine';
$lang['generate_jpeg_explain'] = 'Il formato JPEG ha una maggiore compressione rispetto al PNG: la modifica della qualit&agrave;, (max 95%), avr&agrave; un\'influenza diretta sulla leggibilit&agrave; del CAPTCHA.';
$lang['generate_jpeg_quality'] = 'Qualit&agrave;';
/* lang_admin_captcha.php - END */

/* lang_admin_topic_shadow.php - BEGIN */
/* General */
$lang['Del_Before_Date'] = 'Elimina tutte le Tracce degli Argomenti prima del %s<br />'; // %s = insertion of date
$lang['Deleted_Topic'] = 'Elimina Traccia Argomento %s<br />'; // %s = topic name
$lang['Affected_Rows'] = '%d elementi sono stati modificati<br />'; // %d = affected rows (not avail with all databases!)
$lang['Delete_From_Date'] = 'Tutte le Tracce degli Argomenti creati prima della data immessa verranno eliminati.';
$lang['Delete_Before_Date_Button'] = 'Elimina tutti prima della data';
$lang['No_Shadow_Topics'] = 'Non &egrave; stata trovata Tracccia degli Argomenti.';
$lang['Topic_Shadow'] = 'Traccia Argomenti';
$lang['TS_Desc'] = 'Permette la rimozione della Traccia degli Argomenti senza l\'eliminazione del messaggio attuale. Le tracce degli Argomenti vengono create nel momento in cui sposti una discussione da un forum ad un altro e scegli di lasciare un link nel forum originario alla nuova Discussione.';
$lang['Month'] = 'Mese';
$lang['Day'] = 'Giorno';
$lang['Year'] = 'Anno';
$lang['Clear'] = 'Ripulisci';
$lang['Resync_Ran_On'] = 'Risincronizza %s<br />'; // %s = insertion of forum name
$lang['Version'] = 'Versione';

$lang['Title'] = 'Titolo';
$lang['Moved_To'] = 'Spostato in';
$lang['Moved_From'] = 'Spostato da';

/* Modes */
$lang['topic_time'] = 'Orario Discussione';
$lang['topic_title'] = 'Titolo Discussione';

/* Errors */
$lang['Error_Month'] = 'Devi immettere i mesi tra 1 e 12';
$lang['Error_Day'] = 'Devi immettere i giorni tra 1 e 31';
$lang['Error_Year'] = 'Devi immettere gli anni tra 1970 e 2038';
$lang['Error_Topics_Table'] = 'Errore nell\'accedere alla tabella delle Discussioni';

//Special Cases, Do not change for another language
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
/* lang_admin_topic_shadow.php - END */

/* lang_admin_rebuild_search.php - BEGIN */
$lang['Rebuild_search'] = 'Ricostruisci Ricerca';
$lang['Rebuild_search_desc'] = 'Questo strumento indicizzer&agrave; tutti i post della tua Knowledge Base, ricostruendo la tabella di Ricerca. Potrebbe metterci molto, per&ograve; tu non muoverti da questa pagina, finch&eacute; non &egrave; terminato.';
$lang['Post_limit'] = 'Limite Post';
$lang['Time_limit'] = 'Limite di Tempo';
$lang['Refresh_rate'] = 'Frequenza di aggiornamento';

$lang['Next'] = 'Successivo';
$lang['Finished'] = 'Finito';
/* lang_admin_rebuild_search.php - END */

/* lang_admin_faq_editor.php - BEGIN */
$lang['faq_editor'] = 'Modifica Faq';
$lang['faq_editor_explain'] = 'Questo modulo vi permette di aggiungere e modificare le vostre FAQ, FAQ su BBCode o Regolamento. Voi <u>non dovete</u> rimuovere o modificare la sezione <b>Informazioni su phpBB 2</b> o <b>Informazioni su Icy Phoenix</b>.';

$lang['faq_select_language'] = 'Scegli la lingua delle faq che vuoi modificare';
$lang['faq_retrieve'] = 'Apri File';

$lang['faq_block_delete'] = 'Sei sicuro di voler cancellare questo blocco?';
$lang['faq_quest_delete'] = 'Sei sicuro di voler cancellare questa domanda (e la sua risposta)?';

$lang['faq_quest_edit'] = 'Modifica Domande & Risposte';
$lang['faq_quest_create'] = 'Crea Nuove Domande & Risposte';

$lang['faq_quest_edit_explain'] = 'Modifica Domanda e risposta, può anche cambiare il Blocco se volete';
$lang['faq_quest_create_explain'] = 'Digitate la nuova Domanda e Risposta e premete Invia.';

$lang['faq_block'] = 'Blocco';
$lang['faq_quest'] = 'Domanda';
$lang['faq_answer'] = 'Risposta';

$lang['faq_block_name'] = 'Nome Blocco';
$lang['faq_block_rename'] = 'Rinomina Blocco';
$lang['faq_block_rename_explain'] = 'Cambia il nome del blocco nel file';

$lang['faq_block_add'] = 'Aggiungi Blocco';
$lang['faq_quest_add'] = 'Aggiungi Domanda';

$lang['faq_no_quests'] = 'Nessuna domanda in qusto blocco. Questo impedirà ai blocchi dopo questo di essere visualizzati. Cancellate il blocco o aggiungetvi Domande.';
$lang['faq_no_blocks'] = 'Nessun Blocco definito, per aggiungere nuove domande e risposte dovete creare almeno un Blocco.';

$lang['faq_write_file'] = 'Impossibile Scrivere sul file!';
$lang['faq_write_file_explain'] = 'Assicurati che i file in language/lang_italian/ o equivalenti siano <i>scrivibili</i> (chmod 666 o superiore) per usare questo pannello di controllo.';
/* lang_admin_faq_editor.php - END */

/* lang_admin_rules_editor.php - BEGIN */
$lang['rules_editor'] = 'Modifica rules';
$lang['rules_editor_explain'] = 'Questo modulo vi permette di aggiungere e modificare il Regolamento della Board.';

$lang['rules_select_language'] = 'Scegli la lingua del Regolamento che vuoi modificare';
$lang['rules_retrieve'] = 'Apri File';

$lang['rules_block_delete'] = 'Sei sicuro di voler cancellare questo blocco?';
$lang['rules_quest_delete'] = 'Sei sicuro di voler cancellare questa domanda (e la sua risposta)?';

$lang['rules_quest_edit'] = 'Modifica Domande & Risposte';
$lang['rules_quest_create'] = 'Crea Nuove Domande & Risposte';

$lang['rules_quest_edit_explain'] = 'Modifica Domanda e risposta, può anche cambiare il Blocco se volete';
$lang['rules_quest_create_explain'] = 'Digitate la nuova Domanda e Risposta e premete Invia.';

$lang['rules_block'] = 'Blocco';
$lang['rules_quest'] = 'Domanda';
$lang['rules_answer'] = 'Risposta';

$lang['rules_block_name'] = 'Nome Blocco';
$lang['rules_block_rename'] = 'Rinomina Blocco';
$lang['rules_block_rename_explain'] = 'Cambia il nome del blocco nel file';

$lang['rules_block_add'] = 'Aggiungi Blocco';
$lang['rules_quest_add'] = 'Aggiungi Domanda';

$lang['rules_no_quests'] = 'Nessuna domanda in qusto blocco. Questo impedirà ai blocchi dopo questo di essere visualizzati. Cancellate il blocco o aggiungetvi Domande.';
$lang['rules_no_blocks'] = 'Nessun Blocco definito, per aggiungere nuove domande e risposte dovete creare almeno un Blocco.';

$lang['rules_write_file'] = 'Impossibile Scrivere sul file!';
$lang['rules_write_file_explain'] = 'Assicurati che i file in language/lang_italian/ o equivalenti siano <i>scrivibili</i> (chmod 666 o superiore) per usare questo pannello di controllo.';
/* lang_admin_rules_editor.php - END */

/* lang_admin_priv_msgs.php - BEGIN */
/* Added in 1.6.0 */
$lang['PM_View_Type'] = 'Vedi Tipo di PM';
$lang['Show_IP'] = 'Visualizza indirizzo IP';
$lang['Rows_Per_Page'] = 'Righe per Pagina';
$lang['Archive_Feature'] = 'Caratteristica Archivio';
$lang['Inline'] = 'Nella stessa pagina';
$lang['Pop_up'] = 'Pop-up';
$lang['Current'] = 'Attuale';
$lang['Rows_Plus_5'] = 'Aggiungi 5 Righe';
$lang['Rows_Minus_5'] = 'Rimuovi 5 Righe';
$lang['Enable'] = 'Abilita';
$lang['Disable'] = 'Disabilita';
$lang['Inserted_Default_Value'] = 'La Configuraziones di %s non esiste, inserito il valore predefinito<br />'; // %s = config name
$lang['Updated_Config'] = 'Configurazione di %s Aggiornata<br />'; // %s = config item
$lang['Archive_Table_Inserted'] = 'La Tabella Archivio non esite, creala<br />';
$lang['Switch_Normal'] = 'Modo Normale';
$lang['Switch_Archive'] = 'Modo Archivio';

/* General */
$lang['Deleted_Message'] = 'Messaggio Privato Eliminato - %s <br />'; // %s = PM title
$lang['Archived_Message'] = 'Messaggio Privato Archiviato - %s <br />'; // %s = PM title
$lang['Archived_Message_No_Delete'] = 'Non &egrave; possibile eliminare %s, perch&egrave; &egrave; stato contrassegnato per essere Archiviato <br />'; // %s = PM title
$lang['Private_Messages'] = 'Messaggi Privati';
$lang['Private_Messages_Archive'] = 'Archivio Messaggi Privati';
$lang['Archive'] = 'Archivia';
$lang['To'] = 'A';
$lang['Subject'] = 'Oggetto';
$lang['Sent_Date'] = 'Data Spedizione';
$lang['From'] = 'Da';
$lang['Sort'] = 'Ordina';
$lang['Filter_By'] = 'Filtra Per';
$lang['PM_Type'] = 'Tipo di PM';
$lang['Status'] = 'Stato';
$lang['No_PMS'] = 'Non ci sono Messaggi Privati che corrispondono ai tuoi criteri di ordinamento';
$lang['Archive_Desc'] = 'Questa &egrave; una lista dei Messaggi Privati che hai deciso di Archiviare. Gli Utenti non avranno pi&ugrave; accesso a questi PM, ma tu li puoi vedere ed eliminare in ogni momento.';
$lang['Normal_Desc'] = 'Tutti i Messaggi privati del tuo Forum possono essere gestiti da qui. Puoi decidere di leggerli e scegliere, eventualmente, di eliminarli o di archiviarli (i Pm vengono mantenuti, ma gli Utenti non possono pi&ugrave; leggerli).';
$lang['Remove_Old'] = 'PM Orfani:</a> <span class="gensmall">Gli Utenti che non esistono pi&ugrave; potrebbero aver lasciato alcuni PM, con questo strumento verranno rimossi.</span>';
$lang['Remove_Sent'] = 'Cassetta PM Spediti:</a> <span class="gensmall">I PM nella cassetta Spediti sono delle copie esatte dei messaggi che sono stati spediti, tranne per il fatto che sono assegnati al mittente dopo che l\'altro utente ha letto il PM. In realt&agrave; questi PM non sono necessari.</span>';
$lang['Removed_Old'] = 'Sono stati rimossi tutti i PM Orfani<br />';
$lang['Removed_Sent'] = 'Sono stati rimossi tutti i PM Spediti<br />';
$lang['Utilities'] = 'Utilit&agrave; di Eliminazione di Massa';
$lang['Nivisec_Com'] = 'Nivisec.com';

/* PM Types */
$lang['PM_-1'] = 'Tutti i Tipi'; //PRIVMSGS_ALL_MAIL = -1
$lang['PM_0'] = 'PM Letti'; //PRIVMSGS_READ_MAIL = 0
$lang['PM_1'] = 'PM Nuovi'; //PRIVMSGS_NEW_MAIL = 1
$lang['PM_2'] = 'PM Spediti'; //PRIVMSGS_SENT_MAIL = 2
$lang['PM_3'] = 'PM Salvati (In)'; //PRIVMSGS_SAVED_IN_MAIL = 3
$lang['PM_4'] = 'PM Salvati (Out)'; //PRIVMSGS_SAVED_OUT_MAIL = 4
$lang['PM_5'] = 'PM Non-Letti'; //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
$lang['Error_Other_Table'] = 'Errore nell\'interrogazione di una tabella richiesta.';
$lang['Error_PM_Text_Table'] = 'Errore nell\'interrogazione della tabella Private Messages Text.';
$lang['Error_PM_Table'] = 'Errore nell\'interrogazione della tabella Private Messages.';
$lang['Error_PM_Archive_Table'] = 'Errore nell\'interrogazione della tabella Private Messages Archive.';
$lang['No_Message_ID'] = 'Non &egrave; stato specificato nessun ID messaggio.';

/*Special Cases, Do not bother to change for another language */
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
$lang['privmsgs_date'] = $lang['Sent_Date'];
$lang['privmsgs_subject'] = $lang['Subject'];
$lang['privmsgs_from_userid'] = $lang['From'];
$lang['privmsgs_to_userid'] = $lang['To'];
$lang['privmsgs_type'] = $lang['PM_Type'];
/* lang_admin_priv_msgs.php - END */

/* lang_admin_link.php - BEGIN */
$lang['Link_Categories_Title'] = 'Gestione Categorie Link';
$lang['Link_Categories_Explain'] = 'In questa schermata potete gestire le categorie dei link: crearle, modificarle, cancellarle, ordinarle, etc. .';
$lang['Category_Permissions'] = 'Permessi categoria"';
$lang['Category_Title'] = 'Titolo categoria';
$lang['Category_Desc'] = 'Descrizione categoria';
$lang['View_level'] = 'Livello visualizzazione';
$lang['Upload_level'] = 'Livello di invio';
$lang['Rate_level'] = 'Livello di valutazione';
$lang['Comment_level'] = 'Livello di commento';
$lang['Edit_level'] = ' Livello modifica';
$lang['Delete_level'] = 'Livello cancellazione';
$lang['New_category_created'] = 'Creazione categoria completata.';
$lang['Click_return_link_category'] = 'Clicca %sQUI%s per ritorna alla gestione Categorie dei Link';
$lang['Category_updated'] = 'Categoria aggiornata.';
$lang['Delete_Category'] = 'Cancella categoria';
$lang['Delete_Category_Explain'] = 'Il form seguente vi permetter&agrave;di eliminare una categoria';
$lang['Category_deleted'] = 'Cancellazione categoria completata.';
$lang['Category_changed_order'] = 'Ordine della categoria modificato.';

//Config
$lang['Link_Config'] = 'Configurazione link';
$lang['Link_config_explain'] = 'Questa pagina vi permetter&agrave;  di cambiare i parametri generali dei vostri links';
$lang['lock_submit_site'] = 'Blocca immissione sito utente';
$lang['allow_guest_submit_site'] = 'Permetti ai visitatori di inserire un sito';
$lang['allow_no_logo'] = 'Permetti l\'inserimento di siti senza banner';
$lang['site_logo'] = 'L\'URL in cui si trova il vostro logo (URL completo)';
$lang['site_url'] = 'L\'Url del vostro sito';
$lang['width'] = 'Larghezza massima dei banners';
$lang['height'] = 'Altezza massima dei banners';
$lang['linkspp'] = 'Numero massimo di link per pagina';
$lang['interval'] = 'Quanto velocemente i banners sono visualizzati';
$lang['display_logo'] = 'Quanti banners vengono mostrati contemporaneamente';
$lang['Link_display_links_logo'] = 'Mostra i banner';
$lang['Link_email_notify'] = 'Avvisa l\'admin via email per l\'immissione di un link';
$lang['Link_pm_notify'] = 'Avvisa l\'admin via messaggio privato per l\'immissione di un link';
$lang['Link_config_updated'] = 'Aggiornamento Configurazione Link completata.';
$lang['Click_return_link_config'] = 'Clicca %sQUI%s per  ritornare alla configurazione link';

// Link_MOD
$lang['Links'] = 'Gestione Link';
$lang['Links_explain'] = 'Da questo pannello di controllo, potete visualizzare in anteprima lo stato di tutti i link, modificare o rimuovere il link selezionato.';
$lang['Add_link'] = 'Aggiungi Link';
$lang['Add_link_explain'] = 'Il form seguente vi permette di aggiungere un link direttamente alla vostra pagina dei link';
$lang['Edit_link'] = 'Modifica Link';
$lang['Edit_link_explain'] = 'Il form seguente vi permette di modificare i dettagli di un link e inoltre potete selezionarlo ';
$lang['Delete_link'] = 'Elimina Link';
$lang['Delete_link_explain'] = 'Il form seguente vi permette di cancellare un link, inoltre potere anche ';
$lang['Link_update'] = 'Aggiorna i dettagli del link';
$lang['Link_delete'] = 'Elimina questo link';
$lang['Link_title'] = 'Nome del sito';
$lang['Link_url'] = ' URL del sito';
$lang['Link_logo_src'] = 'Logo del sito (88x31 pixels, Max 10K)';
$lang['Link_category'] = 'Categoria del sito';
$lang['Link_desc'] = 'Descrizione sito';
$lang['link_hits'] = 'Visite';
$lang['Link_basic_setting'] = 'Descrizione rapida Link';
$lang['Link_adv_setting'] = 'Impostazioni avanzate';
$lang['Link_active'] = 'Stato';

$lang['Link_admin_add_success'] = 'Inserimento Link completato.';
$lang['Link_admin_add_fail'] = 'Impossibile inserire il link, riprovare pi&ugrave; tardi';
$lang['Link_admin_update_success'] = 'Aggiornamento Link completato.';
$lang['Link_admin_update_fail'] = 'Impossibile aggiornare il link, riprovare pi&ugrave; tardi';
$lang['Link_admin_delete_success'] = 'Rimozione link completata.';
$lang['Link_admin_delete_fail'] = 'Impossibile rimuovere il link, riprovare pi&ugrave; tardi';
$lang['Click_return_lastpage'] = 'Clicca %sQUI%s per tornare alla pagina precedente';
$lang['Click_return_admin_links'] = 'Clicca %sQUI%s per tornare alla gestione link';
$lang['Preview'] = 'Anteprima';
$lang['Search_site'] = 'Cerca sito';
$lang['Search_site_title'] = 'Cerca sito per nome/descrizione:';
/* lang_admin_link.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

// Icy Phoenix - BUILD 009
$lang['Replace_title'] = 'Sostituzione Testo In Posts';
$lang['Replace_text'] = 'In questa pagina puoi sostituire del testo in tutti i messaggi del forum. Questa operazione non pu&ograve; essere annullata.';
$lang['Link'] = 'Link';
$lang['Str_old'] = 'Testo da cercare';
$lang['Str_new'] = 'Testo con cui sostituire';
$lang['No_results'] = 'Nessuna modifica';
$lang['Replaced_count'] = 'Totale messaggi aggiornati: %s';

// Icy Phoenix - BUILD 016
$lang['group_rank'] = 'Livello';
$lang['group_color'] = 'Colore';
$lang['group_legend'] = 'Mostra nella legenda';
$lang['group_legend_short'] = 'Legenda';
$lang['group_main'] = 'Gruppo principale';
$lang['group_members'] = 'Membri';
$lang['group_update'] = 'Applica Cambiamenti';

/* lang_color_groups.php - BEGIN */
$lang['Color_Groups'] = 'Gruppi cromatici';
$lang['Manage_Color_Groups'] = 'Gestione gruppi cromatici';
$lang['Add_New_Group'] = 'Aggiungi un nuovo gruppo';
$lang['Color'] = 'Colore';
$lang['User_Count'] = 'Utenti';
$lang['Color_List'] = 'Lista Colori:';
$lang['Group_Name'] = 'Nome gruppo';
$lang['Define_Users'] = 'Definizione utenti';
$lang['Color_Group_User_List'] = 'Utenti del gruppo cromatico';
$lang['Options'] = 'Opzioni';
$lang['Example'] = 'Esempio';
$lang['User_List'] = 'Elenco utenti completo';
$lang['Unassigned_User_List'] = 'Utenti senza gruppo';
$lang['Assigned_User_List'] = 'Utenti con un gruppo';
$lang['Add_Arrow'] = 'Aggiungi all\'elenco';
$lang['Update'] = 'Aggiorna';
$lang['Updated_Group'] = 'Elenco utenti del gruppo cromatico aggiornato<br />';
$lang['Deleted_Group'] = 'Rimuovi il gruppo specificato. Tutti gli utenti iscritti verranno impostati come utenti non iscritti a gruppi<br />';
$lang['Hide'] = 'Nascondi';
$lang['Un-hide'] = 'Svela';
$lang['Move_Up'] = 'Sposta in alto';
$lang['Move_Down'] = 'Sposta in basso';
$lang['Group_Hidden'] = 'Gruppo nascosto<br />';
$lang['Group_Unhidden'] = 'Gruppo visibile<br />';
$lang['Groups_Updated'] = 'Modifiche gruppi aggiornate<br />';
$lang['Moved_Group'] = 'Modifica ordine gruppo<br />';

//Descriptions
$lang['Manage_Color_Groups_Desc'] = 'Aggiorna gruppi, aggiungi un nuovo gruppo o gestisci gli utenti assegnati ad un gruppo cromatico particolare.<br /> I gruppi che decidete di nascondere non verranno mostrati nella lista principale.';
$lang['Color_Group_User_List_Desc'] = 'Aggiungi o rimuovi utenti dal gruppo cromatico specificato.';

//Errors
$lang['Error_Group_Table'] = 'Errore durante l\'interrogazione della tabella di gruppo cromatico.';
$lang['Error_Font_Color'] = '<b><u>Attenzione:</b></u> Il colore del font specificato non &egrave; valido!';
$lang['Color_Ok'] = 'Il colore del font specificato risulta valido.';
$lang['No_Groups_Exist'] = 'Nessun gruppo esistente.';
$lang['Error_Users_Table'] = 'Errore durante l\'interrogazione delle tabelle utente.';
$lang['Invalid_Group_Add'] = 'Nome non valido o gruppo duplicato per %s.<br />';

//Dynamic
$lang['Group_Updated'] = 'Il gruppo cromatico %s &egrave; stato aggiornato<br />';
$lang['Editing_Group'] = 'Stai modificando l\'elenco utenti di %s.';
$lang['Invalid_User'] = '%s non &egrave; un nome valido, passo al successivo<br />';
$lang['Invalid_Order_Num'] = '%s conteneva un numero di ordinamento non valido, ma &egrave; stato modificato. Riprovate ad ordinare nuovamente.';

//New for 1.2.0
$lang['Users_List'] = 'Elenco utenti';
$lang['Groups_List'] = 'Elenco gruppo utenti';
$lang['List_Info'] = '<b>N.B.</b>: <ul><li>Tenete premuto il tasto CTRL quando selezionate un elenco multiplo. <li>Se un utente che fa parte di un gruppo, viene aggiunto ad un gruppo cromatico, verr&agrave; visualizzato il colore del gruppo in cui l\'utente &egrave; iscritto.<li> I nomi della lista sono formattati come Nome (Gruppo cromatico in uso). Non ci sar&agrave; nessun (Gruppo cromatico in uso) se la voce non riporta a nessuno.<li>Se un utente &egrave; iscritto a due o pi&ugrave; gruppi verr&agrave; visualizzato il colore del gruppo pi&ugrave; elevato (impostate questo valore nella pagina principale).</ul>';
/* lang_color_groups.php - END */

// Icy Phoenix - BUILD 023
$lang['Empty_Cache_Main_Question'] = 'Scegliendo SI, la cartella principale della cache verr&agrave; svuotata e non sar&agrave; possibile ripristinarne il contenuto.<br /><br />Sei sicuro di voler procedere?';
$lang['Empty_Cache_Posts_Question'] = 'Scegliendo SI, la sezione del DB che contiene i post precompilati verr&agrave; svuotata e non sar&agrave; possibile ripristinarne il contenuto.<br /><br />Sei sicuro di voler procedere?';
$lang['Empty_Cache_Thumbs_Question'] = 'Scegliendo SI, la cartella delle miniature dei messaggi verr&agrave; svuotata e non sar&agrave; possibile ripristinarne il contenuto.<br /><br />Sei sicuro di voler procedere?';
$lang['Empty_Cache_Success'] = 'Cartella Cache svuotata correttamente.';

$lang['Copy_Auth'] = 'Copia permessi da';
$lang['Copy_Auth_Explain'] = 'Ricorda che puoi copiare permessi solo da forum, non da categorie!!!';

// Icy Phoenix - BUILD 027
/* lang_admin_db_backup.php - BEGIN */
$lang['SELECT_ALL'] = 'Seleziona tutti';
$lang['SELECT_FILE'] = 'Seleziona un file';
$lang['START_BACKUP'] = 'Inizia backup';
$lang['START_RESTORE'] = 'Inizia ripristino';
$lang['STORE_AND_DOWNLOAD'] = 'Salva e scarica';
$lang['STORE_LOCAL'] = 'Salva il file sul server';
$lang['STRUCTURE_ONLY'] = 'Solo Struttura';

// Backup
$lang['ACP_BACKUP'] = 'Backup Database';
$lang['ACP_BACKUP_EXPLAIN'] = 'In questa sezione puoi effettuare il backup del database del tuo sito. L\'archivio viene salvato nella cartella <b><samp>backup/</samp></b> (assicurati che questa cartella abbia i permessi di scrittura) e puoi decidere se scaricarlo o reimportarlo dalla pagina di <b>Ripristino</b>. A seconda della configurazione del server puoi comprimere il file in formato GZIP.<br /><br /><span class="text_red">La procedura di backup viene effettuata in diversi passi: lo script dovrebbe procedere automaticamente, per cui tutto quello che devi fare &egrave; attendere il messaggio di completamento.</span><br /><br />';

$lang['BACKUP_OPTIONS'] = 'Opzioni Backup';
$lang['BACKUP_TYPE'] = 'Tipo backup';

$lang['DATABASE'] = 'Utilit&agrave; database';
$lang['DATA_ONLY'] = 'Solo dati';
$lang['DELETE_BACKUP'] = 'Elimina backup';
$lang['DELETE_SELECTED_BACKUP'] = 'Sei sicuro di voler eliminare i backup selezionati??';
$lang['DESELECT_ALL'] = 'Deseleziona tutti';
$lang['DOWNLOAD_BACKUP'] = 'Scarica backup';

$lang['FILE_TYPE'] = 'Tipo file';
$lang['FULL_BACKUP'] = 'Completo';

$lang['BACKUP_TYPE_COMPLETE'] = 'Completo';
$lang['BACKUP_TYPE_EXTENDED'] = 'Esteso';
$lang['BACKUP_TYPE_COMPACT'] = 'Compatta Interruzioni Di Riga';

$lang['BACKUP_SUCCESS'] = 'Il backup &egrave; stato creato correttamente.';
$lang['BACKUP_DELETED'] = 'Il backup &egrave; stato eliminato correttamente.';

$lang['TABLE_SELECT'] = 'Seleziona tabelle';

$lang['BACKUP_IN_PROGRESS'] = 'Backup in corso';
$lang['BACKUP_IN_PROGRESS_TABLE'] = 'Backup tabella: <b>%s</b>';
$lang['BACKUP_IN_PROGRESS_REDIRECT'] = 'Verrai automaticamente reindirizzato al passo successivo in pochi secondi';
$lang['BACKUP_IN_PROGRESS_REDIRECT_CLICK'] = 'Se il reindirizzamento automatico non dovesse funzionare, puoi cliccare %sQUI%s';
$lang['BACKUP_OPTIONS_RETURN'] = 'Clicca %sQUI%s per tornare alla Gestione Backup';

// Errors
$lang['Table_Select_Error'] = 'Devi selezionare almeno una tabella.';

// Restore
$lang['ACP_RESTORE'] = 'Ripristina Database';
$lang['ACP_RESTORE_EXPLAIN'] = 'Effettua un ripristino completo di tutte le tabelle del tuo sito da un file salvato precedentemente. Se il tuo server lo supporta puoi utilizzare la compressione gzip o bzip2, i file verranno decompressi automaticamente. <strong>ATTENZIONE</strong> Verranno sovrascritti tutti i dati attuali. Il ripristino può impiegare molto tempo dipende dalla grandezza del database, non uscire questa pagina fino al completamento del ripristino. I backup sono memorizzati nella cartella <b><samp>backup/</samp></b> e sono generati dalla funzione backup di questo sistema. Il ripristino di backup non generati da questo stesso sistema potrebbe non funzionare correttamente.<br /><br /><strong class="text_red">Importante: se il backup da ripristinare &egrave; troppo grande, potrebbe essere possibile che il timeout impedisca il corretto ripristino ed il sito non funzioni piì&ugrave; correttamente. In questo caso potrebbe essere necessario scaricare il file di backup direttamente dal server ed utilizzre un\'applicazione diversa per ripristinarlo (phpMyAdmin o MySQLDumper ad esempio).</strong><br /><br />';
$lang['RESTORE_OPTIONS'] = 'Opzioni Ripristino';

$lang['Restore_Success'] = 'Il database &egrave; stato ripristinato correttamente.';

// Errors
$lang['No_Backup_Selected'] = 'Non hai selezionato nessun backup da ripristinare.';
$lang['Backup_Invalid'] = 'Il file selezionato potrebbe essere corrotto.';
$lang['RESTORE_FAILURE'] = 'Il file di backup potrebbe essere corrotto.';
/* lang_admin_db_backup.php - END */

/* Logs - BEGIN */
$lang['LOGS_ACTIONS_FILTER'] = 'Filtro azioni';
$lang['LOGS_TITLE'] = 'Logs';
$lang['LOGS_EXPLAIN'] = 'Da qui puoi ottenere informazioni utili sull\'attivit&agrave; dello staff sul tuo sito';
$lang['LOGS_TARGET'] = 'Target';
$lang['LOGS_DELETE'] = 'Elimina Selezionati';
$lang['LOGS_DELETE_ALL'] = 'Svuota Tabella Logs';
$lang['LOGS_DENY'] = 'Non autorizzato!';
$lang['LOGS_POST_EDIT'] = 'ha modificato un messaggio di';
$lang['LOGS_POST_DELETE'] = 'ha eliminato un messaggio di';
$lang['LOGS_GROUP_JOIN'] = 'ha richiesto di aderire al gruppo';
$lang['LOGS_GROUP_EDIT'] = 'ha effettuato modifiche all\'utente %s del gruppo';
$lang['LOGS_GROUP_ADD'] = 'ha aggiunto l\'utente %s al gruppo';
$lang['LOGS_GROUP_TYPE'] = 'ha modificato lo stato del gruppo %s, ora &egrave; un gruppo %s';
$lang['LOGS_GROUP_TYPE_0'] = 'aperto';
$lang['LOGS_GROUP_TYPE_1'] = 'chiuso';
$lang['LOGS_GROUP_TYPE_2'] = 'nascosto';
$lang['LOGS_MESSAGE'] = 'messaggio all\'utente, codice <b>%s</b>';
$lang['LOGS_MODCP_DELETE'] = 'ha eliminato dei messaggi di %s tramite il pannello di controllo moderatori';
$lang['LOGS_MODCP_RECYCLE'] = 'ha cestinato dei messaggi di %s tramite il pannello di controllo moderatori';
$lang['LOGS_MODCP_LOCK'] = 'ha bloccato dei messaggi di %s tramite il pannello di controllo moderatori';
$lang['LOGS_MODCP_UNLOCK'] = 'ha sbloccato dei messaggi di %s tramite il pannello di controllo moderatori';
$lang['LOGS_MODCP_MOVE'] = 'ha spostato dei messaggi di %s tramite il pannello di controllo moderatori';
$lang['LOGS_MODCP_MERGE'] = 'ha unito dei messaggi di %s tramite il pannello di controllo moderatori';
$lang['LOGS_MODCP_SPLIT'] = 'ha diviso dei messaggi di %s tramite il pannello di controllo moderatori';
$lang['LOGS_TOPIC_BIN'] = 'ha cestinato un messaggio di';
$lang['LOGS_TOPIC_ATTACK'] = 'c\'&egrave; stato un attacco esterno ad un messaggio di';
$lang['LOGS_CARD_BAN'] = 'ha bannato';
$lang['LOGS_CARD_WARN'] = 'ha ammonito';
$lang['LOGS_CARD_UNBAN'] = 'ha riabilitato';
$lang['LOGS_ADMIN_CAT_ADD'] = 'ha aggiunto un forum';
$lang['LOGS_ADMIN_DB_UTILITIES_BACKUP'] = 'ha effettuato un backup %s del DB';
$lang['LOGS_ADMIN_DB_UTILITIES_BACKUP_full'] = 'completo';
$lang['LOGS_ADMIN_DB_UTILITIES_BACKUP_structure'] = 'della struttura';
$lang['LOGS_ADMIN_DB_UTILITIES_BACKUP_data'] = 'dei dati';
$lang['LOGS_ADMIN_DB_UTILITIES_BACKUP_store_and_download'] = ', scaricandolo e salvandolo sul server';
$lang['LOGS_ADMIN_DB_UTILITIES_BACKUP_store'] = ', salvandolo sul server';
$lang['LOGS_ADMIN_DB_UTILITIES_BACKUP_download'] = ', scaricandolo';
$lang['LOGS_ADMIN_DB_UTILITIES_RESTORE'] = 'ha effettuato un ripristino del DB da';
$lang['LOGS_ADMIN_BOARD_CONFIG'] = 'ha effettuato delle modifiche alla configurazione';
$lang['LOGS_ADMIN_BOARD_IP_CONFIG'] = 'ha effettuato delle modifiche alla configurazione di Icy Phoenix';
$lang['LOGS_ADMIN_GROUP_NEW'] = 'ha creato il gruppo';
$lang['LOGS_ADMIN_GROUP_DELETE'] = 'ha cancellato il gruppo';
$lang['LOGS_ADMIN_GROUP_EDIT'] = 'ha modificato il gruppo';
$lang['LOGS_ADMIN_USER_AUTH'] = 'ha modificato i permessi di';
$lang['LOGS_ADMIN_GROUP_AUTH'] = 'ha modificato i permessi del gruppo';
$lang['LOGS_ADMIN_USER_BAN'] = 'ha eseguito delle espulsioni da ACP';
$lang['LOGS_ADMIN_USER_UNBAN'] = 'ha eseguito delle riabilitazioni da ACP';
$lang['LOGS_ADMIN_USER_DELETE'] = 'ha eliminato l\'utente';
$lang['LOGS_ADMIN_USER_EDIT'] = 'ha modificato il profilo dell\'utente';
$lang['LOGS_CMS_LAYOUT_EDIT'] = 'ha modificato %sQUESTA%s pagina';
$lang['LOGS_CMS_LAYOUT_DELETE'] = 'ha cancellato una pagina [ID = %s]';
$lang['LOGS_CMS_BLOCK_EDIT'] = 'ha modificato un blocco [ID = %s] di %sQUESTA%s pagina';
$lang['LOGS_CMS_BLOCK_EDIT_LS'] = 'ha modificato un blocco [ID = %s] di una pagina standard [%s]';
$lang['LOGS_CMS_BLOCK_DELETE'] = 'ha cancellato un blocco [ID = %s] di %sQUESTA%s pagina';
$lang['LOGS_CMS_BLOCK_DELETE_LS'] = 'ha cancellato un blocco [ID = %s] di una pagina standard [%s]';
//$lang['LOGS_'] = '';
/* Logs - END */

$lang['SMILEYS_UPDATED'] = 'Smileys Aggiornati';

/* ADS - BEGIN */
$lang['ADS_TITLE'] = 'Banner &amp; Sponsors';
$lang['ADS_TITLE_EXPLAIN'] = 'In questa sezione &egrave; possibile aggiungere dei banner da visualizzare nel sito. Si possono aggiungere diversi tipi di banner e decidere dove questi banner devono essere visualizzati e da chi. E\' anche possibile impostare pi&ugrave; di un banner per la stessa posizione: in questo caso il banner da mostrare verr&agrave; scelto casualmente tra quelli disponibili.';
$lang['AD_DES'] = 'Descrizione';
$lang['AD_TEXT'] = 'Contenuto';
$lang['AD_ENABLED'] = 'Abilitato';
$lang['AD_STATUS'] = 'Stato';
$lang['AD_STATUS_EXPLAIN'] = 'Seleziona SI se vuoi abilitare questo banner, oppure NO per disattivarlo';
$lang['AD_POSITION'] = 'Posizione';
$lang['AD_AUTH'] = 'Permessi';
$lang['AD_AUTH_EXPLAIN'] = 'Scegli il livello di utenza a cui verr&agrave; mostrato il banner';
$lang['AD_AUTH_GUESTS'] = 'Solo Ospiti';
$lang['AD_AUTH_REG'] = 'Ospiti e Registrati (non ADMINS e MODS)';
$lang['AD_AUTH_MOD'] = 'Tutti tranne Amministratori';
$lang['AD_AUTH_ADMIN'] = 'Tutti';
$lang['AD_FORMAT'] = 'Formato';
$lang['AD_POS_GLT'] = 'Globale Inizio Pagina';
$lang['AD_POS_GLB'] = 'Globale Fine Pagina';
$lang['AD_POS_GLH'] = 'Globale Intestazione';
$lang['AD_POS_GLF'] = 'Globale Fondo Pagina';
$lang['AD_POS_FIX'] = 'Indice Forum: Elemento';
$lang['AD_POS_FIT'] = 'Indice Forum: Inizio';
$lang['AD_POS_FIB'] = 'Indice Forum: Fine';
$lang['AD_POS_VFX'] = 'Visualizzazione Forum: Elemento';
$lang['AD_POS_VFT'] = 'Visualizzazione Forum: Inizio';
$lang['AD_POS_VFB'] = 'Visualizzazione Forum: Fine';
$lang['AD_POS_VTX'] = 'Visualizzazione Argomento: Elemento';
$lang['AD_POS_VTT'] = 'Visualizzazione Argomento: Inizio';
$lang['AD_POS_VTB'] = 'Visualizzazione Argomento: Fine';
$lang['AD_POS_NMT'] = 'Menu Navigazione: Inizio';
$lang['AD_POS_NMB'] = 'Menu Navigazione: Fine';
$lang['AD_ADD'] = 'Aggiungi Banner';
$lang['AD_EDIT'] = 'Modifica Banner';
$lang['AD_ADDED'] = 'Banner aggiunto correttamente';
$lang['ADS_UPDATE'] = 'Aggiorna Banner';
$lang['AD_UPDATED'] = 'Banner aggiornato correttamente';
$lang['AD_DELETED'] = 'Banner eliminato correttamente';
$lang['CLICK_RETURN_ADS'] = 'Clicca %sQUI%s per tornare alla Gestione dei Banner';
$lang['AD_NO_ADS'] = 'Nessun banner creato';
$lang['ERR_AD_ADD'] = 'Si prega di compilare tutti i campi richiesti';
/* ADS - END */

$lang['FULL_HTML'] = 'HTML Integrale';
$lang['ACTIONS'] = 'Azioni';
$lang['EDIT'] = 'Modifica';
$lang['DELETE'] = 'Elimina';

// Tickets Submission - BEGIN
$lang['TICKETS_EMAILS'] = 'Tickets';
$lang['TICKETS_EMAILS_EXPLAIN'] = 'In questa sezione puoi creare delle categorie che verranno utilizzate nella pagina "Contattaci" come argomenti per l\'invio di email. A ciascuna categoria possono essere assegnati uno o pi&ugrave; indirizzi email di modo che l\'email venga inviata a tutti.';
$lang['TICKET_CAT'] = 'Categoria';
$lang['TICKET_CAT_TITLE'] = 'Titolo';
$lang['TICKET_CAT_DES'] = 'Descrizione';
$lang['TICKET_CAT_EMAILS'] = 'Indirizzi Email';
$lang['TICKET_CAT_EMAILS_EXPLAIN'] = 'Inserisci tutti gli indirizzi destinatari dell\'email.<br />Separa i diversi indirizzi con punto e virgola (a@a.com;b@b.com;c@c.com).';
$lang['TICKETS_NO_TICKETS'] = 'Nessun Elemento';
$lang['TICKETS_NO_TICKET_SEL'] = 'Nessun elemento selezionato';
$lang['TICKETS_NO_TICKET_TITLE'] = 'Devi inserire almeno il titolo';
$lang['TICKETS_DB_ADD'] = 'Aggiungi Categoria';
$lang['TICKETS_DB_ADDED'] = 'Categoria aggiunta correttamente';
$lang['TICKETS_DB_UPDATED'] = 'Categoria aggiornata correttamente';
$lang['TICKETS_DB_DELETED'] = 'Categoria rimossa correttamente';
$lang['TICKETS_DB_CLICK'] = 'Clicca %sQUI%s per tornare alle Categorie Email';
// Tickets Submission - END

$lang['FORUM_LIMIT_EDIT_TIME'] = 'Limitazione Temporale Modifica Messaggi';
$lang['FORUM_LIMIT_EDIT_TIME_EXPLAIN'] = 'Abilitando questa opzione gli utenti potranno modificare i propri messaggi solo entro il numero di minuti stabilito nella configurazione messaggi di Icy Phoenix (ACP &raquo; Configurazione &raquo; Icy Phoenix &raquo; Messaggi)';

$lang['BACK_TO_TOP'] = 'Torna Su';
$lang['BACK_TO_PREV'] = 'Torna alla pagina precedente';

// Custom BBCodes - BEGIN
$lang['BBCODES_CUSTOM_BBCODES' = 'BBCode Personalizzati';
$lang['BBCODES_CUSTOM_BBCODES_EXPLAIN' = 'In questa sezione puoi creare dei BBCodes personalizzati. Per poter utilizzare questi BBCode devi attivare <b>Abilita i BBCode personalizzati</b> in <b>Configurazione &raquo; Icy Phoenix &raquo; Messaggi</b>.';
$lang['BBCODES_NO_BBCODES' = 'Nessun BBCode';
$lang['BBCODES_NO_BBCODES_SEL' = 'Nessun BBCode selezionato';
$lang['BBCODES_NO_BBCODES_INPUT' = 'Devi compilare almeno il Tag BBCode';
$lang['BBCODES_DB_ADD' = 'Aggiungi BBCode';
$lang['BBCODES_DB_ADDED' = 'BBCode aggiunto correttamente';
$lang['BBCODES_DB_UPDATED' = 'BBCode aggiornato correttamente';
$lang['BBCODES_DB_DELETED' = 'BBCode eliminato correttamente';
$lang['BBCODES_DB_CLICK'] = 'Clicca %sQUI%s per tornare ai BBCode Personalizzati';

$lang['BBCODE_ADDED'] = 'BBCode aggiunto correttamente.';
$lang['BBCODE_EDITED'] = 'BBCode aggiornato correttamente.';
$lang['BBCODE_NOT_EXIST'] = 'Il BBCode selezionato non esiste.';
$lang['BBCODE_HELPLINE'] = 'Suggerimento';
$lang['BBCODE_HELPLINE_EXPLAIN'] = 'Questo campo contiene il suggerimento che si attiva quando si punta il mouse sul pulsante.';
$lang['BBCODE_HELPLINE_TEXT'] = 'Testo suggerimento';
$lang['BBCODE_HELPLINE_TOO_LONG'] = 'Il testo del suggerimento &egrave; troppo lungo.';

$lang['BBCODE_INVALID_TAG_NAME'] = 'Il nome utilizzato per il BBCode esiste gi&agrave;.';
$lang['BBCODE_INVALID'] = 'Il BBCode &egrave; stato costruito in maniera non valida.';
$lang['BBCODE_OPEN_ENDED_TAG'] = 'Il BBCode deve contenere sia il tag di apertura che di chiusura.';
$lang['BBCODE_TAG'] = 'Tag';
$lang['BBCODE_TAG_TOO_LONG'] = 'Il nome scelto per il tag &egrave; troppo lungo.';
$lang['BBCODE_TAG_DEF_TOO_LONG'] = 'La definizione del tag &egrave; troppo lunga, per favore utilizzare un numero inferiore di caratteri.';
$lang['BBCODE_USAGE'] = 'Utilizzo BBCode';
$lang['BBCODE_USAGE_EXAMPLE'] = '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]';
$lang['BBCODE_USAGE_EXPLAIN'] = 'Utilizzo BBCode. Sostituisci le variabili di input con il token corrispondente (%sleggi sotto%s).';

$lang['EXAMPLE'] = 'Esempio:';
$lang['EXAMPLES'] = 'Esempi:';

$lang['HTML_REPLACEMENT'] = 'Sostituzione HTML';
$lang['HTML_REPLACEMENT_EXAMPLE'] = '&lt;span style=&quot;background-color: {COLOR};&quot;&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style=&quot;font-family: {SIMPLETEXT1};&quot;&gt;{SIMPLETEXT2}&lt;/span&gt;';
$lang['HTML_REPLACEMENT_EXPLAIN'] = 'Sostituzione HTML. Non dimenticare di reinserire tutti i token specificati in alto!';

$lang['TOKEN'] = 'Token';
$lang['TOKENS'] = 'Tokens';
$lang['TOKENS_EXPLAIN'] = 'I Token sono dei segnaposto per le variabili di input. L\'input verr&agrave; convalidato con le definizioni corrispondenti. Se necessario, puoi inserire un numero per identificare diversi token dello stesso tipo, esempio {TEXT1}, {TEXT2}.<br /><br />Puoi anche utilizzare le variabili di lingua come token: {L_<em>&lt;STRINGA&gt;</em>} dove <em>&lt;STRINGA&gt;</em> &egrave; il nome della variabile di lingua che vuoi aggiungere. Per esempio, {L_WROTE} verr&agrave; visualizzato come &quot;ha scritto&quot; o verr&agrave; tradotto in base alla lingua dell\'utente.<br /><br /><strong>Soltanto i token indicati qui in basso possono essere utilizzati all\'interno dei BBCode personalizzati.</strong>';
$lang['TOKEN_DEFINITION'] = 'Definizione token';
$lang['TOO_MANY_BBCODES'] = 'Non puoi creare altri BBCode. Per favore rimuovi uno o pi&ugrave; BBCode e riprova.';

$lang['BBCODES_TOKENS_DESCRIPTION'] = '
<b>TEXT</b> &raquo; Qualunque carattere di testo. Non &egrave; consigliato utilizzare questo token in tag HTML (utilizza IDENTIFIER o SIMPLETEXT piuttosto)<br />
<b>SIMPLETEXT</b> &raquo; Caratteri (A-Z), numeri, spazio, virgola, punto, segno meno, segno pi&ugrave;, trattino ed underscore<br />
<b>IDENTIFIER</b> &raquo; Caratteri (A-Z), numeri, trattino ed underscore<br />
<b>NUMBER</b> &raquo; Numeri<br />
<b>EMAIL</b> &raquo; Un valido indirizzo e-mail<br />
<b>URL</b> &raquo; Un URL valido (http, ftp, etc... non pu&ograve; essere utilizzato per exploits javascript): se non viene specificato il protocollo verr&agrave; inserito in automatico &quot;http://&quot;<br />
<b>LOCAL_URL</b> &raquo; Un URL locale: l\'URL deve essere relativo al percorso principale del sito e non pu&ograve; contenere nome server o protocollo<br />
<b>COLOR</b> &raquo; Colore in codice HTML, si pu&ograve; utlizzare sia la forma numerica <samp>#ff1234</samp> che <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">parola chiave dei colori CSS</a> (ad esempio <samp>fuchsia</samp> o <samp>InactiveBorder</samp>)';
// Custom BBCodes - END

/*
$lang['MG_SW_'] = '';
*/

// ####################### [ ACP Navigation BEGIN ] #######################
// Use numbers to sort the ACP Navigation menu
// Numbers have to be changed in all /adm/*.php files too

// Configuration
$lang['1000_Configuration'] = 'Configurazione';														// admin_board.php, admin_board_extend.php, admin_board_headers_banners.php, admin_board_main.php, admin_board_permissions.php, admin_board_server.php, admin_board_posting.php, admin_board_queries.php, admin_bots.php, admin_captcha_config.php, admin_google_bot_detector.php, admin_lang_user_created.php, admin_upi2db.php
$lang['100_Server_Configuration'] = 'Server';															// admin_board_server.php
$lang['110_Various_Configuration'] = 'Sito';															// admin_board.php
$lang['120_MG_Configuration'] = 'Icy Phoenix';														// admin_board.php
$lang['125_Language'] = 'Variabili Lingua';																// admin_lang_user_created.php
$lang['127_Clear_Cache'] = 'Svuotamento Cache';														// admin_board_clearcache.php
$lang['130_UPI2DB_Mod'] = 'Messaggi Non Letti';														// admin_upi2db.php
$lang['140_MG_Configuration_Headers_Banners'] = 'Headers &amp; Banners';	// admin_board_headers_banners.php
$lang['145_Captcha_Config'] = 'Conferma Visuale';													// admin_captcha_config.php
$lang['150_Similar_topics'] = 'Argomenti Simili';													// admin_similar_topics.php
$lang['160_Title_infos'] = 'Gestione Titoli Veloci';											// admin_quick_title.php
$lang['170_LIW'] = 'Larghezza Immagini';																	// admin_liw.php
$lang['180_MG_Configuration_Permissions'] = 'Permessi Visualizzazione';		// admin_board_permissions.php
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

// IM Portal
$lang['1500_IM_Portal'] = 'Home Page';														// admin_blocks.php, admin_blocks_pos.php, admin_blocks_var.php, admin_clear_cache.php, admin_layout.php, admin_portal.php
$lang['100_Portal_Configuration'] = 'Configurazione';							// admin_portal.php
$lang['110_Page_Management'] = 'Gestione Pagine';									// admin_layout.php
$lang['115_Page_Management'] = 'Gestione Pagine Personalizzate';	// admin_layout_cp.php
$lang['120_Blocks_Management'] = 'Gestione Blocchi';							// admin_blocks.php
$lang['130_Blocks_Position_Tag'] = 'Tag Posizione Blocchi';				// admin_blocks_pos.php
$lang['140_Blocks_Variables'] = 'Variabili Blocchi';							// admin_blocks_var.php
$lang['150_Delete_Cache_Files'] = 'Elimina Cache';								// admin_clear_cache.php

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

// Activity
$lang['3000_ACTIVITY'] = 'Activity / Giochi';								// admin_activity.php, admin_ina_ban.php, admin_ina_bulk_add.php, admin_ina_category.php, admin_ina_disable.php, admin_ina_in_un.php, admin_ina_mass.php, admin_ina_xtras.php
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

// Cash
$lang['3100_CASH'] = 'Cash / Punti'; // admin_cash.php
$lang['110_Cash_Admin'] = 'Gestione Divise'; // admin_cash.php
$lang['120_Cash_Help'] = 'Aiuto'; // admin_cash.php

// ####################### [ ACP Navigation END ] #######################

?>