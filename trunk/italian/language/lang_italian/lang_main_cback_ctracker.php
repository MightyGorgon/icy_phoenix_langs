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
 * Language Strings used at multiple places
 */
$lang['ctracker_settings_on'] = 'ATTIVATA';
$lang['ctracker_settings_off'] = 'DISATTIVATA';
$lang['ctracker_ma_on'] = 'ON';
$lang['ctracker_ma_off'] = 'OFF';
$lang['ctracker_blockmode_0'] = 'Disattivata';
$lang['ctracker_blockmode_1'] = 'Banna Utente';
$lang['ctracker_blockmode_2'] = 'Blocca Utente';
$lang['ctracker_complex_1'] = '[0-9]';
$lang['ctracker_complex_2'] = '[a-z]';
$lang['ctracker_complex_3'] = '[A-Z]';
$lang['ctracker_complex_4'] = '[0-9][a-z]';
$lang['ctracker_complex_5'] = '[0-9][A-Z]';
$lang['ctracker_complex_6'] = '[0-9][a-z][A-Z]';
$lang['ctracker_complex_7'] = '[0-9][*]';
$lang['ctracker_complex_8'] = '[0-9][a-z][*]';
$lang['ctracker_complex_9'] = '[0-9][a-z][A-Z][*]';
$lang['ctracker_ipb_new_entry'] = 'Nuova voce';
$lang['ctracker_ipb_added'] = 'Voce inserita correttamente!';
$lang['ctracker_ipb_deleted'] = 'Voce rimossa correttamente!';
$lang['ctracker_ipb_add_now'] = 'Aggiungi voce';
$lang['ctracker_mu_success'] = 'Utente Indesiderato: i suoi messaggi non vengono visualizzati.';
$lang['ctracker_mu_success_bbc'] = '[cell class="text_orange"]' . $lang['ctracker_mu_success'] . '[/cell]';
$lang['ctracker_mu_success_html'] = '<span class="text_orange">' . $lang['ctracker_mu_success'] . '</span>';
$lang['ctracker_mu_error_admin'] = 'ADMIN o MOD non possono essere impostati come <strong>Utente indesiderato</strong>!';
$lang['ctracker_mu_deleted'] = 'Gli utenti selezionati sono stati rimossi correttamente dall\'elenco degli "Utenti indesiderato".';
$lang['ctracker_mu_head'] = 'Utente Indesiderato';
$lang['ctracker_error_updating_userdata'] = 'CBACK CrackerTracker non pu&ograve; eseguire le operazioni del database nella tabella utente.';
$lang['ctracker_error_database_op'] = 'CBACK CrackerTracker non pu&ograve; eseguire correttamente le operazioni sul database.';
$lang['ctracker_message_dialog_title'] = 'CBACK CrackerTracker Professional';


/*
 * Language Strings used for the footer itself
 */
$lang['ctracker_fdisplay_imgdesc'] = 'Sicurezza forum';
$lang['ctracker_fdisplay_n'] = '<a href="http://www.cback.de" target="_blank">Sicurezza</a> con <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a>.';
$lang['ctracker_fdisplay_c'] = 'Forum protetto da  <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a><br /><strong>%s</strong> Tentativi di intrusione bloccati.';
$lang['ctracker_fdisplay_g'] = '<strong>%s</strong> Tentativi di intrusione bloccati';


/*
 * Language Strings for the class_ct_database.php
 */
$lang['ctracker_error_loading_config'] = 'La configurazione del CBACK CrackerTracker non pu&ograve; essere recuperata dal database. Sei sicuro di aver eseguito lo script di installazione e modificato correttamente il file "includes/constants.php" ?';
$lang['ctracker_error_updating_config'] = 'La configurazione del CBACK CrackerTracker non pu&ograve; essere aggiornata. Sei sicuro di aver eseguito lo script di installazione e modificato correttamente il file "includes/constants.php" ?';
$lang['ctracker_error_loading_blocklist'] = 'La configurazione del CBACK CrackerTracker non pu&ograve; essere caricata dal Database. Sei sicuro di aver eseguito lo script di installazione e modificato correttamente il file "includes/constants.php" ?';
$lang['ctracker_error_insert_blocklist'] = 'Non &egrave; possibile aggiungere dati alla blocklist del CrackerTracker Sei sicuro di aver eseguito lo script di installazione e modificato correttamente il file "includes/constants.php" ?';
$lang['ctracker_error_delete_blocklist'] = 'Non &egrave; possibile rimuovere dati alla blocklist del CrackerTracker. Sei sicuro di aver eseguito lo script di installazione e modificato correttamente il file "includes/constants.php" ?';
$lang['ctracker_error_login_history'] = 'Si &egrave; verificato un errore con il database relativo alla tabella CBACK CrackerTracker Login History. Sei sicuro di aver eseguito lo script di installazione e modificato correttamente il file "includes/constants.php" ?';
$lang['ctracker_error_del_login_history'] = 'La tabella relativa allo storico delle connessioni di CBACK CrackerTracker non pu&ograve; essere svuotata.';

/*
 * Language Strings used in class_ct_userfunctions.php
 */
$lang['ctracker_info_search_time'] = "Per motivi di sicurezza &egrave; possibile effettuare %s ricerche nell'intervallo di %s secondi. Se si supera questo limite dovrai aspettare  <span id=\"waittime\">%s</span> secondi, prima di poter effettuare una nuova ricerca.. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>";
$lang['ctracker_info_regist_time'] = "Per motivi di sicurezza &egrave; possibile effettuare una registrazione ogni %s secondi. Se questo numero viene superato dovrai aspettare  <span id=\"waittime\">%s</span> secondi prima di poter effettuare la registrazione. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>";
$lang['ctracker_info_regip_double'] = 'Risulta che questo indirizzo IP sia gi&agrave; stato utilizzato per una registrazione. Per motivi di sicurezza &egrave; possibile effettuare una sola registrazione per singolo indirizzo IP.';
$lang['ctracker_info_profile_spammer'] = 'Questa registrazione &egrave; stata identificata come account associato a spammer. Se ritieni che ci sia un errore contatta l\'amministrazione del forum in modo che questi controlli il tuo account.';
$lang['ctracker_info_password_minlng'] = 'L\'amministratore ha richiesto che la password debba essere lunga almeno <strong>%s</strong> caratteri. La password che hai inserito contiene solo  <strong>%s</strong> caratteri. Ritorna indietro ed inserisci una nuova password.';
$lang['ctracker_info_password_cmplx'] = 'L\'amministrazione ha richiesto che la password contenga almeno i seguenti tipi di carattere: %s';
$lang['ctracker_info_password_cmplx_1'] = 'Numeri';
$lang['ctracker_info_password_cmplx_2'] = 'Minuscole';
$lang['ctracker_info_password_cmplx_3'] = 'Maiuscole';
$lang['ctracker_info_password_cmplx_4'] = 'Caratteri speciali';
$lang['ctracker_info_pw_expired'] = 'La durata della password &egrave; stata imposta per durare al massimo <strong>%s giorni</strong>. Ti raccomandiamo di cambiare la password tramite il tuo profilo. (<a href="' . PROFILE_MG . '?mode=editprofile&amp;' . POST_USERS_URL . '=%d">Profilo</a>)';


/*
 * Language Strings used in ct_visual_confirm.php
 */
$lang['ctracker_login_wrong'] = 'Il codice di conferma visuale inserito non &egrave; corretto!';
$lang['ctracker_code_dbconn'] = 'Non &egrave; possibile recuperare la conferma visuale dal database! Se stai utilizzando phpBB Plus devi installare il modulo di phpBB per la conferma visuale che verr&agrave; inserito negli addon di Cracker Tracker!';
$lang['ctracker_login_success'] = 'Il tuo account &egrave; stato riattivato.<br /><br />Clicca <a href="%s">QUI</a> per ritornare al Login.';
$lang['ctracker_code_count'] = 'Il numero di tentavi per la conferma visuale ha superato il limite per questa sessione.';


/*
 * Language Strings used in ctracker_login.php
 */
$lang['ctracker_login_title'] = 'CrackerTracker: Attivazione account';
$lang['ctracker_login_logged'] = 'Account bloccato. Rieffettuare il login per sbloccarlo.';
$lang['ctracker_login_confim'] = 'Il numero di tentativi errati di accesso per il tuo account &egrave; stato superato. Il tuo account &egrave; stato bloccato. Per poterlo riattivare devi utilizzare la conferma visuale.<br /><br />Inserisci il codice seguente e clicca su <strong>Sblocca</strong> per sbloccare il tuo account. Una volta completata l\'operazione e potrai effettuare la procedura di accesso.';
$lang['ctracker_login_button'] = 'Attiva';


/*
 * Language Strings for IP Warning Engine
 */
$lang['ctracker_ipwarn_info'] = 'La scansione intervallo IP  per questo account &egrave; <strong>%s</strong>';
$lang['ctracker_ipwarn_prof'] = 'Scansione intervallo IP';
$lang['ctracker_ipwarn_pdes'] = 'La scansione intervallo IP, se attivata, memorizza il range IP utilizzato per la connessione da parte dell\'utente. Qualora qualcuno effettui una connessione da un altro IP ti verr&agrave; mostrato un breve messaggio (lo stesso messaggio verr&agrave; visualizzato anche se effettui la connessione da un\'altra localit&agrave;). Controlla a fondo pagina per verificare se l\'opzione &egrave; attiva perch&egrave; eventuali utenti (che utilizzino il tuo account) che si siano connessi da altre localit&agrave; potrebbero averla disattivata. La login rimane comunque attivata e hai la possibilit&agrave; di effettuare modifiche dopo l\'attivazione.';
$lang['ctracker_ipwarn_chng'] = '<strong>&raquo; AVVISO &laquo;</strong><br />L\'intervallo IP associato a questo account &egrave; stato modificato. Attualmente sei connesso da  <strong>%s</strong>, mentre la precedente connessione risulta da <strong>%s</strong>. Se non hai effettuato la connessione da un\'altra localit&agrave; qualcuno potrebbe aver utilizzato il tuo account senza autorizzazione.!';
$lang['ctracker_ipwarn_welc'] = '<strong>&raquo; AVVISO &laquo;</strong><br />La scansione dell\'intervallo IP non &egrave; stata inizializzata. Questa operazione viene compiuta dopo due login corretti. Se vuoi inizializzarlo adesso disconnettiti dal forum e rieffettua la connessione per due volte.';
$lang['ctracker_ipwarn_send'] = 'accetta impostazioni';


/*
 * Language Strings for Login History
 */
$lang['ctracker_lhistory_h'] = 'Storico login';
$lang['ctracker_lhistory_i'] = 'In questa sezione puoi visualizzare gli indirizzi IP che hai utilizzato e le date dei tuoi ultimi <strong>%s</strong> Login. <br />In questo modo potrai visualizzare se qualcuno ha utilizzato il tuo account a tua insaputa.<br /> Se nel log appaiono orari e\o indirizzi IP che non ti risulta di aver utilizzato &egrave; possibile che qualcuno abbia utilizzato il tuo account.<br />In questo caso ti consigliamo di modificare il la password e, inoltre, anche una verifica all\'account email.';
$lang['ctracker_lhistory_h1'] = 'Data ed ora del Login';
$lang['ctracker_lhistory_h2'] = 'Indirizzo IP utilizzato';
$lang['ctracker_lhistory_nav'] = 'CrackerTracker Storico Login ';
$lang['ctracker_lhistory_err'] = 'Devi essere connesso per poter utilizzare le funzionalit&agrave; di  CrackerTracker.';
$lang['ctracker_lhistory_off'] = 'Lo storico dei Login &egrave; stato disattivato dall\'admin.';


/*
 * Other Language Strings used in the Board itself
 */
$lang['ctracker_gmb_link'] = 'L\admin ha scritto un avviso importante a tutti gli utenti. Questo annuncio &egrave; consultabile qui:<br /><br /><a href="%s">%s</a><br />';
$lang['ctracker_gmb_mark'] = 'Imposta messaggio come letto';
$lang['ctracker_gmb_markip'] = 'Rimuovi suggerimento';
$lang['ctracker_gmb_loginlink'] = 'Traccia Login';
$lang['ctracker_gmb_1stadmin'] = 'Le impostazioni del primo amministratore non pu&ograve; essere modificato.';
$lang['ctracker_gmb_pu_1'] = '<strong>CBACK CrackerTracker - Errore di configurazione</strong><br /><br />La porta 21 &egrave; utilizzato per i server FTP. Se il forum viene impostato su questa porta il forum non potrebbe pi&ugrave; funzionare perch&egrave; la porta punterebbe ad un server FTP.';
$lang['ctracker_gmb_pu_2'] = '<strong>CBACK CrackerTracker - Errore di configurazione</strong><br /><br />La lunghezza della sessione &egrave; troppo corta! Se si imposta questo valore sarai disconnesso dal forum prima di poter compiere qualsiasi azione.';
$lang['ctracker_gmb_pu_3'] = '<strong>CBACK CrackerTracker - Errore di configurazione</strong><br /><br />Il percorso del forum non inizia e/o termina con <strong>/</strong> (p.e. /www/) o non &egrave; composto solo dal carattere <strong>/</strong>!';
$lang['ctracker_gmb_pu_4'] = '<strong>CBACK CrackerTracker - Errore di configurazione</strong><br /><br />Il nome del server non termina con un <strong>//</strong> !';
$lang['ctracker_binf_spammer'] = 'Il sistema di controllo AntiSpam ti sta controllando. Hai raggiunto il numero massimo di messaggi permesso in %s secondi.Se tenti di scrivere un altro messaggio nei prossimi  <strong>%s</strong> il tuo account sar&agrave; <strong>bloccato</strong><br /><br />Attendi. Spiacente per l\'attesa ma questo controllo &egrave; per ragioni di sicurezza.';
$lang['ctracker_binf_sban'] = 'Il sistema di controllo AntiSpam ha bloccato il tuo account perch&egrave; sei stato identificato come spammer.';
$lang['ctracker_sendmail_info'] = 'Per motivi di sicurezza puoi inviare un\'email ogni %s minuti.';
$lang['ctracker_pwreset_info'] = 'Per motivi di sicurezza puoi richiedere l\'invio di una nuova password ogni %s minuti. Contatta l\'amministratore in caso di problemi!';
$lang['ctracker_vc_guest_post'] = 'Conferma visuale per visitatori';
$lang['ctracker_vc_guest_expl'] = 'Prima di poter inviare questo messaggio devi inserire il codice seguente. Questa impostazione &egrave; attiva per tutti gli utenti non registrati.';
$lang['ctracker_dbg_mode'] = '<b>CrackerTracker in modalit&agrave; DEBUG. Questa opzione non dovrebbe restare attivata in maniera permanente.<br />Per favore, scegli di tornare alla modalit&agrave; il pi&ugrave; presto possibile.<br /><br /><u>Questo messaggio non pu&ograve; essere eliminato!</u></b>';

?>