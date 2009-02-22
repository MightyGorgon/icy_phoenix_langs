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

$lang['ctracker_module_category'] = 'CrackerTracker';
$lang['ctracker_module_1'] = 'Checksum Scanner';
$lang['ctracker_module_2'] = 'Crediti';
$lang['ctracker_module_3'] = 'Scansione File';
$lang['ctracker_module_4'] = 'News Globali';
$lang['ctracker_module_5'] = 'Filtro IP &amp; Agent';
$lang['ctracker_module_6'] = 'Gestione Log';
$lang['ctracker_module_7'] = 'Manutenzione E Test';
$lang['ctracker_module_8'] = 'Utente Indesiderato';
$lang['ctracker_module_9'] = 'Impostazioni';
$lang['ctracker_module_10'] = 'Recupero';
$lang['ctracker_module_11'] = 'Footer';


/*
 * Language Strings used in ACP Modules itself
 */
$lang['ctracker_wrong_module'] = 'Numero modulo sconosciuto';
$lang['ctracker_img_descriptions'] = 'Immagine';
$lang['ctracker_set_catname1'] = 'Blocco IP, Proxy & UserAgent';
$lang['ctracker_set_catname2'] = 'Sistema di Protezione Ricerca';
$lang['ctracker_set_catname3'] = 'Sistema di Protezione Connessioni';
$lang['ctracker_set_catname4'] = 'Rilevamento automatico SPAM';
$lang['ctracker_set_catname5'] = 'Sistema di Protezione Registrazioni';
$lang['ctracker_set_catname6'] = 'Verifica Password	';
$lang['ctracker_set_catname7'] = 'Opzioni generali di sicurezza';
$lang['ctracker_set_catname8'] = 'Altre impostazioni';
$lang['ctracker_settings_head'] = 'Impostazioni CrackerTracker';
$lang['ctracker_settings_expl'] = 'In questa sezione puoi modificare tutte le impostazioni del MOD  CBACK CrackerTracker Safety System.';
$lang['ctracker_button_submit'] = 'Salva impostazioni';
$lang['ctracker_button_reset'] = 'Ripristina';

$lang['ctracker_settings_m1'] = 'Attiva blocco per IP';
$lang['ctracker_settings_e1'] = 'In questa sezione puoi attivare o meno  il blocco per IP, Proxy ed UserAgent.';
$lang['ctracker_settings_m2'] = 'Dimensione del file di Log IP Bloccati';
$lang['ctracker_settings_e2'] = 'In questa sezione puoi impostare il numero di voci memorizzate nel file di log relativo al blocco per IP. Quando il numero di voci superer&agrave; questo limite il file di log verr&agrave; cancellato per non occupare spazio Web.';
$lang['ctracker_settings_m3'] = 'Attiva la protezione per  Ricerca';
$lang['ctracker_settings_e3'] = 'In questa sezione puoi attivare o meno  la protezione sulle ricerche nel forum.';
$lang['ctracker_settings_m4'] = 'Intervallo di tempo per utenti registrati';
$lang['ctracker_settings_e4'] = 'Indica un intervallo di tempo (in secondi) di attesa per utenti registrati, prima di poter effettuare una nuova ricerca. Opzione valida per protezione per Ricerca attivata.';
$lang['ctracker_settings_m5'] = 'Numero di ricerche per utenti registrati';
$lang['ctracker_settings_e5'] = 'Indica il numero di interrogazioni al motore di ricerca che possono essere effettuate nell\'intervallo impostato alla voce precedente da parte degli utenti registrati. Se questo valore viene superato non potranno essere effettuate ricerche sino a che non trascorra il tempo di attesa precedentemente impostato. Queste limitazioni servono a ridurre il carico del server in cui il forum &egrave; ospitato.';
$lang['ctracker_settings_m6'] = 'Intervallo di tempo per visitatori';
$lang['ctracker_settings_e6'] = 'Indica un intervallo di tempo (in secondi) di attesa per i visitatori prima che possano effettuare una ricerca. Opzione valida per protezione per Ricerca attivata.';
$lang['ctracker_settings_m7'] = 'Numero di ricerche per visitatori';
$lang['ctracker_settings_e7'] = 'Indica il numero di interrogazioni al motore di ricerca che possono essere effettuate nell\'intervallo impostato alla voce precedente da parte dei visitatori. Se questo valore viene superato non potranno essere effettuate ricerche sino a che non trascorra il tempo di attesa precedentemente impostato. Queste limitazioni servono a ridurre il carico del server in cui il forum &egrave; ospitato.';
$lang['ctracker_settings_m8'] = 'Attiva la protezione per Login';
$lang['ctracker_settings_e8'] = 'In questa sezione puoi attivare o meno  la protezione per i Login di CrackerTracker.';
$lang['ctracker_settings_m9'] = 'Dimensione file di log per tentativi errati di accesso';
$lang['ctracker_settings_e9'] = 'Questa voce ti permette di impostare il numero di voci relativi a tentativi errati di accesso che possono essere memorizzate in questo log. Se questo limite viene raggiunto allora il file di log sar&agrave; cancellato per ridurre l\'occupazione dello spazio Web.';
$lang['ctracker_settings_m10'] = 'Numero di connessioni errate prima di attivare la conferma visuale';
$lang['ctracker_settings_e10'] = 'Dopo quanti tentativi di connessione errati da parte dell\'utente viene attivata la conferma visuale..';
$lang['ctracker_settings_m11'] = 'Storico accessi';
$lang['ctracker_settings_e11'] = 'In questa sezione puoi attivare o meno lo storico degli accessi utente.';
$lang['ctracker_settings_m12'] = 'Voci nello storico per singolo utente';
$lang['ctracker_settings_e12'] = 'In questa sezione puoi impostare il numero di accessi, per ciascun utente, da memorizzare nel file di log associato. &Egrave; possibile impostare per ciascun utente la possibilit&agrave; di verificare gli orari e gli indirizzi IP per le loro connessioni.';
$lang['ctracker_settings_m13'] = 'Login IP ';
$lang['ctracker_settings_e13'] = 'Attiva o disattiva il controllo IP per il Login. Ciascun utente ha la possibilit&agrave; di attivare questa opzione nel profilo. Il sistema di protezione a mezzo IP verifica le variazioni dell\'indirizzo IP per l\'utente. In caso di modifica di questo parametro (intervallo IP) l\'utente verr&agrave; avvisato. Questa opzione, in pratica, permette di verificare se qualche altra persona ha utilizzato l\'account specifico.';
$lang['ctracker_settings_m14'] = 'Rilevazione Spammer';
$lang['ctracker_settings_e14'] = 'In questa sezione puoi impostare la modalit&agrave; di Rilevazione Spammer.<br /><em>Lo spammer &egrave; un utente che inserisce messaggi inutili per vari scopi tra cui pubblicit&agrave; ed incremento contatori</em>.';
$lang['ctracker_settings_m15'] = 'Intervallo di verifica per spammer';
$lang['ctracker_settings_e15'] = 'Intervallo di tempo in cui i messaggi degli utenti verranno conteggiati dal Rilevatore di Spam. (in secondi)';
$lang['ctracker_settings_m16'] = 'Numero di messaggi Spammer';
$lang['ctracker_settings_e16'] = 'Il numero di messaggi che possono essere inseriti nell\'intervallo di tempo impostato. Se questo numero viene superato, l\'utente verr&agrave; considerato come Spammer.';
$lang['ctracker_settings_m17'] = 'Dimensione file di Log Spammer';
$lang['ctracker_settings_e17'] = 'Dimensione del file in cui vengono memorizzati gli utenti identificati come Spammer.';
$lang['ctracker_settings_m18'] = 'Protezione registrazione';
$lang['ctracker_settings_e18'] = 'In questa sezione puoi attivare o meno la protezione per il processo di Registrazione.';
$lang['ctracker_settings_m19'] = 'Intervallo Blocco Registrazioni';
$lang['ctracker_settings_e19'] = 'Periodo di tempo in secondi che deve trascorrere tra due registrazioni';

$lang['ctracker_settings_m21'] = 'Verifica IP ';
$lang['ctracker_settings_e21'] = 'Se si attiva questa opzione un utente con un indirizzo IP identico potr&agrave; effettuare una sola registrazione. Se l\'utente modificher&agrave; il suo indirizzo IP questo blocco sar&agrave; rimosso.';
$lang['ctracker_settings_m22'] = 'Scadenza Password';
$lang['ctracker_settings_e22'] = 'Attiva controllo di validit&agrave; della Password per tutti gli utenti.';
$lang['ctracker_settings_m23'] = 'Validit&agrave; della password (Giorni)';
$lang['ctracker_settings_e23'] = 'Indica il periodo di tempo di validit&agrave; della password. Quando questo valore verr&agrave; raggiunto o superato verr&agrave; visualizzata una nota che invita l\'utente a modificare la password.';
$lang['ctracker_settings_m24'] = 'Controllo complessit&agrave; Password';
$lang['ctracker_settings_e24'] = 'Questa opzione permette di verificare la complessit&agrave; della password.';
$lang['ctracker_settings_m25'] = 'Complessit&agrave; Password';
$lang['ctracker_settings_e25'] = 'Imposta se rendere obbligatorio la presenza di simboli nella password.';
$lang['ctracker_settings_m26'] = 'Lunghezza minima password';
$lang['ctracker_settings_e26'] = 'Questa opzione stabilisce il numero minimo di caratteri che devono comporre la password.';
$lang['ctracker_settings_m27'] = 'Verifica Reset Password';
$lang['ctracker_settings_e27'] = 'Impostazione del periodo di tempo in cui &egrave; possibile effettuare un reset della password. Questa opzione impedisce che l\'utente venga riempito di email che comunicano il reset della password.';
$lang['ctracker_settings_m28'] = 'Intervallo reset password';
$lang['ctracker_settings_e28'] = 'Intervallo di tempo tra un reset della password ed il successivo (in minuti)';
$lang['ctracker_settings_m29'] = 'Monitor E-mail';
$lang['ctracker_settings_e29'] = 'Questa opzione imposta un intervallo di tempo all\'interno del quale un utente potr&agrave; inviare una singola email. Questa voce impedisce l\'uso del sistema di mail del forum per spamming.';
$lang['ctracker_settings_m30'] = 'E-mail Spam - Intervallo di tempo';
$lang['ctracker_settings_e30'] = 'Intervallo di tempo tra l\'invio di una email ed il successivo (in minuti)';
$lang['ctracker_settings_m31'] = 'Ripristino automatico';
$lang['ctracker_settings_e31'] = 'Questa opzione permette di memorizzare, automaticamente, le impostazioni del forum, Se questa opzione non funzionasse &egrave; sempre possibile utilizzare l\'ultima configurazione sicuramente funzionante.';
$lang['ctracker_settings_m32'] = 'Conferma visuale per i visitatori';
$lang['ctracker_settings_e32'] = 'Se si attiva questa opzione gli utenti non registrati saranno obbligati ad inserire un codice di conferma visuale per poter inserire un messaggio nelle aree in cui il livello di autorizzazione lo permette. Attivando questa opzione si impedisce l\'inserimento di messaggi da parte di procedure automatizzate meglio note come SpamBot.';
$lang['ctracker_settings_m33'] = 'Protezione Mail Server <em>Liste Nere</em>';
$lang['ctracker_settings_e33'] = 'CrackerTracker utilizza un elenco relativo a servizi email inseriti in <em>Liste Nere</em>. Se si attiva questa protezione gli utenti con indirizzi email relativi a questi mail server non potranno registrarsi.';
$lang['ctracker_settings_m34'] = 'Controllo configurazione errata';
$lang['ctracker_settings_e34'] = 'Se attivi questa voce  CrackerTracker verificher&agrave; la corretta impostazione del forum impedendo il blocco dello stesso a causa di configurazioni errata!';
$lang['ctracker_settings_m35'] = 'Rilevatore automatico Spammer ';
$lang['ctracker_settings_e35'] = 'Quando si attiva questa opzione CrackerTracker effettuer&agrave; un controllo sugli Spammer (siano essi umani o procedure automatiche) bloccandone una buona parte.';
$lang['ctracker_settings_m36'] = 'Controllo parole chiave spammer';
$lang['ctracker_settings_e36'] = 'Se si attiva il <em>rilevatore automatico di Spammer</em> verr&agrave; effettuata una scansione del Profilo e dei Messaggi per rilevare la presenza di parole chiave che permettono di identificare uno spammer.<br /><br /><strong>ATTENZIONE</strong> il numero di rilevazione errate &egrave; fortemente elevato soprattutto per nuovi utenti. &Egrave; necessario verificare il Log Spammer.';


/*
 * Credits page in ACP
 */
$lang['ctracker_credits_head'] = 'Crediti';
$lang['ctracker_credits_subhead'] = 'Questi sono i crediti relativi al mod di CBACK CrackerTracker. Qui vengono fornite informazioni relative alla sicurezza del forum ed inoltre avrete un modo di poterci ringraziare.';
$lang['ctracker_credits_donate'] = 'Supporta';
$lang['ctracker_credits_donate_expl'] = 'Ritieni <strong>CBACK CrackerTracker Professional</strong> Utile? Allora potresti effettuare una donazione al progetto tramite PayPal. Queste donazioni permetteranno ulteriori sviluppi permettendo di pagare le spese del server senza dover imporre un pagamento in futuro. <br /><br />Grazie per il supporto.';
$lang['ctracker_credits_credits'] = 'Crediti';
$lang['ctracker_credits_credits_1'] = 'Idea & Implementazione';
$lang['ctracker_credits_credits_2'] = 'Autore e supporto';
$lang['ctracker_credits_credits_3'] = 'Icone';
$lang['ctracker_credits_credits_4'] = 'Distribuzione ufficiale';
$lang['ctracker_credits_moddownload'] = 'CrackerTracker MOD Download';
$lang['ctracker_credits_thanks'] = 'Grazie...';
$lang['ctracker_credits_thanks_text'] = 'Un grazie alle seguenti persone:';
$lang['ctracker_credits_thanks_to'] = '<strong>Idee, test di sicurezza e correzioni</strong><br />Tekin Bird&uuml;zen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><strong>Idee:</strong><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><strong>Traduttore (Inglese)</strong><br />Marc Renninger<br /><i>(mc-dragon)</i><br /><br /><br /><br /><strong>Correttore (Inglese)</strong><br />George <br />Sommerset<br /><i>(<a href="http://www.englisch-hilfen.de" target="_blank">www.englisch-hilfen.de</a>)</i><br /><br /><strong>Traduttore (Italiano)</strong><br />Antonio Mercurio<br /><i>(<a href="http://www.phpbbplus.it" target="_blank">phpBB Plus Italia</a>)<br /><br /><br /><strong>Beta Tester</strong><br />Grazie a tutti i partecipanti al Beta-Tests<br />ai  CBACK Premium users e, naturalmente, a<br />tutti i nostri colleghi della  "Mod-Scene" che ci hanno aiutato nei test e nella correzione delle bozze.</i>';
$lang['ctracker_credits_info'] = 'Pi&ugrave; Sicurezza?';
$lang['ctracker_credits_info_text'] = 'L\'addon ideale per Icy Phoenix &egrave; CrackerTracker: Per ottimizzare la sicurezza vi raccomandiamo l\'uso del  Mod <strong>Advanced Visual Confirmation</strong> by AmigaLink. Questo MOD espande le funzione di riconoscimento di processi automatici di registrazione. Una volta installato il vostro sistema risulter&agrave; ulteriormente protetto dalle azioni di Bot finalizzati a violare la sicurezza. &Egrave; possibile effettuare il download su <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a>.<br /><br /><br /><br />.';


/*
 * File Hash Check in ACP
 */
$lang['ctracker_fchk_head'] = 'CrackerTracker Checksum Scanner';
$lang['ctracker_fchk_subhead'] = 'Questa opzione generer&agrave; un checksum per ciascun file PHP presente nel forum cliccando su "Crea o Aggiorna Checksum". &Egrave comunque possibile con l\'opzione "Verifica modifica file" per determinare se i file siano stati modificati dopo l\'ultima generazione del checksum. In questo modo potrai determinare quali file siano stati modificati senza il tuo intervento. Queste modifiche avvengono in genere qualora qualche malintenzionato sia riuscito ad ottenere un accesso ai dati del forum sia web che mysql o entrambi. &Egrave; inoltre suggerita la verifica della data di generazione dell\'ultimo checksum totale.<br /><br /><br /><strong>Attenzione:</strong> Questa opzione potrebbe non essere attiva sul server che ospita il tuo forum. In alcuni casi lo script verr&agrave; interrotto per timeout qualora trascorresse molto tempo per la generazione dell\'elenco dei file. Altri server potrebbero interrompere la procedura a causa di un eccessivo consumo di risorse da parte della procedura.<br /><br /><br />&raquo; Ultima generazione del checksum di tutti i file: <strong>%s</strong>.';
$lang['ctracker_fchk_funcheader'] = 'Opzioni';
$lang['ctracker_fchk_tableheader'] = 'Output di sistema';
$lang['ctracker_fchk_option1'] = 'Crea o Aggiorna Checksum';
$lang['ctracker_fchk_option2'] = 'Verifica modifiche file';
$lang['ctracker_fchk_select_action'] = 'Seleziona un\'operazione!';
$lang['ctracker_fchk_update_action'] = 'Checksum Aggiornati!';
$lang['ctracker_fchk_tablehead1'] = 'Percorso file';
$lang['ctracker_fchk_tablehead2'] = 'Stato';
$lang['ctracker_file_unchanged'] = 'NON MODIFICATO';
$lang['ctracker_file_changed'] = 'MODIFICATO';
$lang['ctracker_file_deleted'] = 'ELIMINATO';


/*
 * File Safety Scanner in ACP
 */
$lang['ctracker_fscan_complete'] = 'La scansione dei file &egrave; stata completata correttamente. Clicca su <strong>Mostra risultati</strong> per visualizzarne il rapporto. Potrai correggere i file.<br /><br /><br /><br /><em>SUGGERIMENTO:</em><br /><br />Qualche volta il CrackerTracker potrebbe indicare un file come <em>non sicuro</em>. Questo potrebbe avvenire anche quando un file PHP &egrave; notevolmente diverso e, talvolta, uno sviluppatore permette l\'inserimento di codice dal\'esterno. In questo caso e <em>solo in caso di assoluta sicurezza</em> puoi segnalare a  CRACKERTRACKER che il file esaminato &egrave; sicuro. Per fare questo &egrave; sufficiente scrivere all\'inizio del file il seguente codice: <br /><br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br /><br />Se necessiti di ulteriori informazioni consulta <a href="http://www.community.cback.de" target="_blank">CBACK Community</a>.';
$lang['ctracker_fscan_unchecked'] = 'NON VERIFICATO';
$lang['ctracker_fscan_ok'] = 'SICURO';
$lang['ctracker_fscan_prob_1'] = 'extension.inc non incluso o incluso in posizione errata';
$lang['ctracker_fscan_prob_2'] = 'IP_ROOT_PATH potrebbe non essere inizializzato correttamente';
$lang['ctracker_fscan_prob_3'] = 'common.php / pagestart.php non incluso o incluso in posizione errata';
$lang['ctracker_fscan_prob_4'] = 'Il codice di questo file potrebbe essere eseguito esternamente da Icy Phoenix';
$lang['ctracker_fscan_prob_5'] = 'extension.inc mancante e/p IP_ROOT_PATH e/o constant non trovati';
$lang['ctracker_fscan_prob_def'] = 'Errore indefinito durante la scansione';
$lang['ctracker_fscan_important'] = '<strong>A T T E N Z I O N E</strong>!';
$lang['ctracker_fscan_sel_action'] = 'Per iniziare il controllo di tutti i file clicca su <strong>Avvio controllo file</strong>. Quando l\'operazione sar&agrave; completata clicca su <strong>Mostra risultati</strong> per visualizzare il report del controllo file. Questo elenco pu&ograve; essere visualizzato a richiesta tramite l\'ACP sino a quando non si effettuer&agrave; una nuova scansione.<br /><br /><br />Per motivi tecnici non &egrave; possibile stabilire l\'assoluta sicurezza ad relativamente ad uno script PHP. Non considerate come assolutamente sicuri (o insicuri) i risultati forniti dalla procedura: pu&ograve; accadere che lo scanner classifichi un file insicuro come sicuro e viceversa. PHP, ed il codice prodotto, &egrave; molto complesso quindi non esiste la sicurezza al 100 per cento. Questo scanner &egrave; in grado di rilevare problemi di sicurezza per file inclusi permettendo la scoperta di questi rischi e, di conseguenza, permettendoti di porvi rimedio..<br /><br /><br />Per ulteriori informazioni  CBACK Community!<br /><br /><br />';
$lang['ctracker_fscan_head'] = 'CBACK CrackerTracker Security Scanner';
$lang['ctracker_fscan_subhead'] = 'Il processo di scansione di sicurezza controlla tutti i file PHP del forum alla ricerca di eventuali problemi di sicurezza che possono essere utilizzati da processi automatici per danneggiare il tuo forum. Questi problemi permetto un inclusione da parte di processi esterni non monitorabili dal CrackerTracker System. Per mezzo di questo modulo potrai effettuare una scansione ed eventualmente porre rimedio ai problemi.<br /><br /><br /><strong>Attenzione:</strong> Questa opzione potrebbe non essere attiva sul server che ospita il tuo forum. In alcuni casi lo script verr&agrave; interrotto per timeout qualora trascorresse molto tempo per la generazione dell\'elenco dei file. Altri server potrebbero interrompere la procedura a causa di un eccessivo consumo di risorse da parte della procedura. Nel caso di forum di grandi dimensioni pu&ograve; accadere che il processo superi il limite impostato da PHP Execution Time. L\'algoritmo di controllo dello scanner &egrave; stato ottimizzato in modo da non superare questi limiti ma in alcuni ambienti questo script potrebbe avere problemi nella sua esecuzione. Tienilo presente.<br /><br /><br />&raquo; Ultimo controllo effettuato: <strong>%s</strong>.';
$lang['ctracker_fscan_option1'] = 'Avvia controllo file';
$lang['ctracker_fscan_option2'] = 'Mostra risultati';


/*
 * Global message in ACP
 */
$lang['ctracker_glob_msg_head'] = 'Messaggio Globale';
$lang['ctracker_glob_msg_subhead'] = 'In questa sezione puoi lasciare un messaggio globale per tutti gli utenti. Questo messaggio verr&agrave; visualizzato dall\'utente alla prima connessione. Puoi scrivere direttamente del testo (255 caratteri) o fare riferimento ad un messaggio. ;)';
$lang['ctracker_glob_msg_entry'] = 'Imposta messaggio globale ';
$lang['ctracker_glob_msg_submit'] = 'Inserisci';
$lang['ctracker_glob_msg_reset'] = 'Cancella Messaggio';
$lang['ctracker_glob_msg_type'] = 'Tipo messaggio globale';
$lang['ctracker_glob_type_1'] = 'Testo';
$lang['ctracker_glob_type_2'] = 'Link';
$lang['ctracker_glob_msg_txt'] = 'Testo da visualizzare nel messaggio globale';
$lang['ctracker_glob_msg_link'] = 'Destinazione del link contenuto nel messaggio';
$lang['ctracker_glob_msg_reset'] = 'Cancella messaggio attivo';
$lang['ctracker_glob_res_txt'] = 'Quando si clicca su <strong>Cancella messaggio attivo</strong> il messaggio memorizzato verr&agrave; cancellato.';
$lang['ctracker_glob_msg_saved'] = 'Il messaggio globale &egrave; stato memorizzato correttamente.<br /><br />Clicca <a href="%s">QUI</a> per ritornare alla gestione di CrackerTracker.';
$lang['ctracker_glob_msg_reset_ok'] = 'Il messaggio globale &egrave; stato rimosso dalla tabella utente. Il messaggio inserito non verr&agrave; pi&ugrave; visualizzato.<br /><br />Clicca <a href="%s">QUI</a> per ritornare alla gestione di CrackerTracker.';
$lang['ctracker_dbg_mode'] = '<b>CrackerTracker in modalit&agrave; DEBUG. Questa opzione non dovrebbe restare attivata in maniera permanente.<br />Per favore, scegli di tornare alla modalit&agrave; il pi&ugrave; presto possibile.<br /><br /><u>Questo messaggio non pu&ograve; essere eliminato!</u></b>';


/*
 * IP&Agent Blocker
 */
$lang['ctracker_ipb_delete'] = 'Cancella voce';
$lang['ctracker_ipb_blocklist'] = 'Blocca voci dell\'elenco';
$lang['ctracker_ipb_head'] = 'Blocco Proxy, IP & UserAgent';
$lang['ctracker_ipb_description'] = 'In questa sezione puoi gestire la Blocklist relativa al Blocco Proxy, IP ed UserAgent Blocker per CrackerTracker. Puoi cancellare le voci esistenti o aggiungerne delle nuove. Inserendo una nuova voce puoi usare l\'asterisco (<strong>*</strong>) per inserire qualsiasi configurazione nel filtro. P.E. lwp* bloccher&agrave; tutte quelle connessioni che iniziano per lwp o 100.*.*.*. bloccher&agrave; tutti gli indirizzi IP che iniziato per 100.<br /><strong>A T T E N Z I O N E</strong> evitate di bloccare il vostro indirizzo IP o il vostro Browser perch&egrave; non potrete pi&ugrave; accedere al vostro forum!';


/*
 * Log Manager
 */
$lang['ctracker_log_manager_title'] = 'Gestione file di log';
$lang['ctracker_log_manager_subtitle'] = 'In questa sezione puoi visualizzare o cancellare tutti i file di log generati da CrackerTracker.';
$lang['ctracker_log_manager_overview'] = 'Riepilogo File di Log';
$lang['ctracker_log_manager_blocked'] = 'CrackerTracker ha bloccato <strong>%s</strong> tentativi di intrusione.';
$lang['ctracker_log_manager_overview'] = 'Riepilogo file di log';
$lang['ctracker_log_manager_head1'] = 'Nome Log';
$lang['ctracker_log_manager_head2'] = 'Numero di voci';
$lang['ctracker_log_manager_head3'] = 'Opzioni';
$lang['ctracker_log_manager_name2'] = 'Protezione da Worm & Exploit ';
$lang['ctracker_log_manager_name3'] = 'Blocco per IP, Proxy & UserAgent ';
$lang['ctracker_log_manager_name4'] = 'Connessioni errate';
$lang['ctracker_log_manager_name5'] = 'Spammer bloccati';
$lang['ctracker_log_manager_name6'] = 'Informazioni Debug';
$lang['ctracker_log_manager_view'] = 'VISUALIZZA';
$lang['ctracker_log_manager_delete'] = 'ELIMINA';
$lang['ctracker_log_manager_delete_all'] = 'Cancella tutti i file di log';
$lang['ctracker_log_manager_deleted'] = 'Il file di log &egrave; stato cancellato correttamente!';
$lang['ctracker_log_manager_all_deleted'] = 'Tutti i file di log sono stati cancellati correttamente!';
$lang['ctracker_log_manager_showheader1'] = 'C\'&egrave; <strong>una</strong> voce in questo file di log. Clicca <strong><a href="%s">QUI</a></strong> per ritornare al riepilogo dei file di log.';
$lang['ctracker_log_manager_showheader'] = 'Ci sono <strong>%s</strong> voci n questo file di log. Clicca <strong><a href="%s">QUI</a></strong> per ritornare al riepilogo dei file di log.';
$lang['ctracker_log_manager_showlog'] = 'Mostra file di log';
$lang['ctracker_log_manager_cell_1'] = 'Data / Ora';
$lang['ctracker_log_manager_cell_2a'] = 'Appeal';
$lang['ctracker_log_manager_cell_2b'] = 'Nome utente';
$lang['ctracker_log_manager_cell_3'] = 'Referente';
$lang['ctracker_log_manager_cell_4'] = 'UserAgent';
$lang['ctracker_log_manager_cell_5'] = 'Indirizzo IP';
$lang['ctracker_log_manager_cell_6'] = 'Host Remoto';
$lang['ctracker_log_manager_sysmsg'] = 'Ultimo reset file di log: <strong>%s</strong>.';


/*
 * Footer configuration
 */
$lang['ctracker_footer_head'] = 'Gestione Footer ';
$lang['ctracker_footer_subhead'] = 'In questa sezione puoi selezionare in che modo i crediti di CrackerTracker vengono visualizzati nel footer (pi&egrave; di pagina). Non rimuovere le informazioni di copyright e non modificare il link verso www.cback.de!';
$lang['ctracker_select_footer'] = 'Seleziona Footer';
$lang['ctracker_footer_saveit'] = 'Accetta il Layout del Footer';
$lang['ctracker_footer_done'] = 'Le modifiche al footer sono state memorizzate correttamente!';


/*
 * Maintenance Module in ACP
 */
$lang['ctracker_ma_unknown'] = '<span class="text_orange">SCONOSCIUTO</span>';
$lang['ctracker_ma_secure'] = '<span class="text_green">SICURO</span>';
$lang['ctracker_ma_warning'] = '<span class="text_red">ATTENZIONE</span>';
$lang['ctracker_ma_active'] = '<span class="text_green">ATTIVO</span>';
$lang['ctracker_ma_inactive'] = '<span class="text_red">INATTIVO</span>';
$lang['ctracker_ma_ca'] = '<span class="text_green">OK</span>';
$lang['ctracker_ma_ci'] = '<span class="text_red">NON IMPOSTATO</span>';
$lang['ctracker_ma_head'] = 'Manutenzione e verifica del sistema';
$lang['ctracker_ma_subhead'] = 'Questo sistema effettua i moduli di CrackerTracker in modo automatico. Il processo verifica lo stato di sicurezza dei moduli e le loro funzioni oltre a visualizzare dei suggerimenti per l\'ottimizzazione del sistema.';
$lang['ctracker_ma_systest'] = 'Test automatico di sistema';
$lang['ctracker_ma_sectest'] = 'Test di sicurezza';
$lang['ctracker_ma_maint'] = 'Funzioni di sicurezza';
$lang['ctracker_ma_name_1'] = 'Sistema di protezione da Worm- & Exploit';
$lang['ctracker_ma_name_2'] = 'Modulo di controllo variabili';
$lang['ctracker_ma_name_3'] = 'Modulo di protezione per IP, Proxy & UserAgent ';
$lang['ctracker_ma_name_4'] = 'Batch per definizione euristica dei Worm - numero di definizioni: <strong>%s</strong>';
$lang['ctracker_ma_syshead_1'] = 'Modulo di sicurezza';
$lang['ctracker_ma_syshead_2'] = 'Stato';
$lang['ctracker_ma_seccheck_1'] = 'Punto di controllo';
$lang['ctracker_ma_seccheck_2'] = 'Versione / Stato';
$lang['ctracker_ma_seccheck_3'] = 'Preferenza';
$lang['ctracker_ma_seccheck_4'] = 'Stato';
$lang['ctracker_ma_scheck_1'] = 'Versione PHP (<a href="http://www.php.net" target="_blank">Sito di supporto</a>)';
$lang['ctracker_ma_scheck_2'] = '&raquo; PHP SAFE MODE';
$lang['ctracker_ma_scheck_3'] = '&raquo; PHP GLOBALS';
$lang['ctracker_ma_scheck_4'] = 'Versione Icy Phoenix (<a href="http://www.icyphoenix.com" target="_blank">Sito di Supporto</a>)';
$lang['ctracker_ma_scheck_4a'] = '&raquo; Conferma visuale';
$lang['ctracker_ma_scheck_4b'] = '&raquo; Attivazione account';
$lang['ctracker_ma_scheck_5'] = 'CBACK CrackerTracker (<a href="http://www.cback.de" target="_blank">Sito di supporto</a>)';
$lang['ctracker_ma_chmod'] = '<strong>Stato CHMOD777 :</strong> ';
$lang['ctracker_ma_desc_link'] = 'ESECUZIONE IMMEDIATA';
$lang['ctracker_ma_desc1'] = '<strong>Resetta tabella IP, Proxy & UserAgent </strong><br />In questa sezione puoi cancellare <strong>tutte</strong> le voci dalla tabella IP, Proxy & UserAgent .';
$lang['ctracker_ma_desc2'] = '<strong>Impostazioni predefinite: Blocco IP, Proxy & UserAgent </strong><br />In questa sezione puoi ripristinare i valori predefiniti per la tabella relativa al blocco di  IP, Proxy & user agent. I filtri da te impostati andranno persi!';
$lang['ctracker_ma_desc3'] = '<strong>Cancella storico connessioni</strong><br />In questa sezione puoi cancellare tutte le voci relative allo storico delle connessioni senza tener conto delle impostazioni relative a questo log.';
$lang['ctracker_ma_desc4'] = '<strong>Svuota tabella File-Hashcheck </strong><br />Cancella tutte le voci dalla tabella  File-Hashcheck.';
$lang['ctracker_ma_desc5'] = '<strong>Svuota tabella Securitscanner </strong><br /> Elimina tutti i risultati memorizzati nella tabella, durante il controllo di sicurezza..';
$lang['ctracker_ma_succ_main'] = 'Processo completato correttamente!';
$lang['ctracker_ma_err_main'] = 'Errori durante il completamento del processo!';


/*
 * Miserable User Module in ACP...
 */
$lang['ctracker_mu_subhead'] = 'Quando un utente non si attiene al regolamento, si comporta male e, dopo essere stato bannato, si reiscrive con un altro account l\'opzione <strong>utente indesiderato</strong> evita che questi tipi di utente inneschino un ciclo continuo di iscrizioni e ban successivi. Un utente di questo tipo pu&ograve; essere gestito assegnandogli il flag nascosto <strong>Utente Indesiderato</strong>. Una volta associato questo flag l\'utente potr&agrave; scrivere nel forum ma i suoi interventi saranno visibili esclusivamente dagli amministratori. Gli altri utenti non visualizzeranno alcun intervento di questa persone che probabilmente si stufer&agrave; abbandonando il forum.<br /><b>Nota: <u>questa funzione vanifica l\'invio di messaggi all\'interno di un argomento. Utilizzando "Cita" o "Cerca" vengono mostrati i messaggi degli "Utenti Miserabili"!';
$lang['ctracker_mu_select'] = 'Marca utente come <strong>Utente Indesiderato</strong>';
$lang['ctracker_mu_find'] = 'Ricerca nomi utente';
$lang['ctracker_mu_send'] = 'Inserisci nomi utente';
$lang['ctracker_mu_entr'] = 'Nomi utente selezionati';
$lang['ctracker_mu_uname'] = 'Inserisci Nome Utente';
$lang['ctracker_mu_remove'] = 'Elimina voci';
$lang['ctracker_mu_no_defined'] = 'Attualmente non sono presenti utenti contrassegnati come <strong>Utente Indesiderato</strong>.';


/*
 * Recovery feature in ACP
 */
$lang['ctracker_rec_head'] = 'Ripristino Sistema';
$lang['ctracker_rec_subhead'] = 'In questa sezione puoi effettuare il backup della tabella di configurazione o puoi riattivare l\'ultima configurazione sicuramente funzionante. Se hai attivato questa funzione nelle impostazioni generale di CrackerTracker la tabella di configurazione verr&agrave; memorizzata come backup ogni volta che modifichi le impostazioni generali. (<strong>ATTENZIONE</strong> non &egrave; il backup completo del database!<br /><br />Se il problema di configurazione si presenta quando non sei in ACP &egrave; possibile ripristinare l\'ultima configurazione sicuramente funzionante, utilizzando la consolle di emergenza di CrackerTraker. Leggi i commenti contenuti nel file <em>ctracker/emergency.php</em> per ulteriori informazioni su come gestire la configurazione del forum nella consolle di emergenza. Tieni presente che questo file deve essere abilitato prima dell\'uso.<br /><br /><strong>ATTENZIONE</strong> questa funzione deve essere utilizzata solo in presenza di problemi seri non altrimenti risolvibili!';
$lang['ctracker_rec_last_saved'] = 'Ultimo backup della tabella di configurazione: <strong>%s</strong>';
$lang['ctracker_rec_never_saved'] = 'Non &egrave; mai stato fatto il backup della tabella di configurazione!';
$lang['ctracker_rec_backup'] = 'Backup della tabella di configurazione';
$lang['ctracker_rec_restore'] = 'Ripristino dell\'ultima configurazione sicuramente funzionante';
$lang['ctracker_rec_succ'] = 'Il processo del database &egrave; stato completato correttamente.';
$lang['ctracker_rec_pab'] = 'Non  &egrave; possibile effettuare il ripristino in assenza di un backup completato correttamente!';

?>