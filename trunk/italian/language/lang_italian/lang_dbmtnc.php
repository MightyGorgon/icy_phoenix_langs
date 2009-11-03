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

$lang['DB_Maintenance'] = 'Database Tools';
$lang['DB_Maintenance_Description'] = 'Da qui puoi verificare se il tuo database ha delle incosistenze e degli errori.<br />
	<b>Attenzione:</b> Alcune operazioni potrebbero richiedere un tempo piuttosto lungo. Il sito sar&agrave; <b>disabilitato</b> durante le operazioni.<br />
	<br />
	<b>Si raccomanda di avere sempre un backup del proprio database prima di usare una delle funzioni di questa lista!</b>';
$lang['Function'] = 'Funzione';
$lang['Function_Description'] = 'Descrizione';

$lang['Incomplete_configuration'] = 'Un\'impostazione per <b>%s</b> non &egrave; stata trovata nella configurazione della board. Manutenzione DB non pu&ograve; girare senza questa impostazione.<br />
	Potresti esserti dimenticato di eseguire i comandi SQL come descritto nell\'installazione.';
$lang['dbtype_not_supported'] = 'Spiacente, questa funzione non &egrave; supportata dal tuo database';
$lang['no_function_specified'] = 'Non &egrave; stata specificata nessuna funzione';
$lang['function_unknown'] = 'La funzione specificata &egrave; sconosciuta';
$lang['Old_MySQL_Version'] = 'Spiacenti, la tua versione di MySQL non supporta questa funzione. Per cortesia usa una verione 3.23.17 o superiore.';

$lang['Back_to_DB_Maintenance'] = 'Ritorna a Manutenzione Database';
$lang['Processing_time'] = 'Manutenzione DB ha impiegato %f secondi per le operazioni.';

$lang['Lock_db'] = 'Disabilitazione board in corso';
$lang['Unlock_db'] = 'Attivazione board in corso';
$lang['Already_locked'] = 'Il sito era gi&agrave; disabilitato';
$lang['Ignore_unlock_command'] = 'Il sito era disabilitato quando &egrave; iniziato il comando. Il sito non sar&agrave; riattivato';
$lang['Delay_info'] = 'Ritardo di tre secondi per permettere all\'azione sul database di terminare...';

$lang['Affected_row'] = 'Un dataset interessato';
$lang['Affected_rows'] = '%d datasets interessati';
$lang['Done'] = 'Fatto';
// The following variable is used when nothing hat to be fixed in the database. It needs the complete paragraph-tag.
// If you do not want a message to be displayed in these cases, just leave the variable empty.
$lang['Nothing_to_do'] = '<p class="gen"><i>Non c\'&egrave; niente da fare :-)</i></p><br />' . "\n";

// Names for new records in several tables
$lang['New_cat_name'] = 'Forums Ripristinati';
$lang['New_forum_name'] = 'Discussioni Ripristinate';
$lang['New_topic_name'] = 'Messaggi Ripristinati';
$lang['Restored_topic_name'] = 'Discussioni Ripristinate';
$lang['New_poster_name'] = 'Messaggi Ripristinati'; // Name for Poster of a restored post

// Functions available
// Usage: $mtnc[] = array(internal Name, Name of Function, Description of Function, Warning Message (leef empty to avoid), Number of Check function (Integer))
// Use $mtnc[] = array('--', '', '', '', 0) for a space row (you can us a different check function)
//
$mtnc[] = array('statistic',
	'Statistiche',
	'Visualizza delle informazioni sulla board e sul database.',
	'',
	0);
$mtnc[] = array('config',
	'Configurazione',
	'Permette la configurazione di Manutenzione Database.',
	'',
	5);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_user',
	'Verifica tabelle user e group',
	'Verr&agrave; fatta una verifica delle tabelle degli utenti e ripristiner&agrave; anche i gruppi con un solo utente.',
	'Perderai tutti i gruppi senza utenti. Procedi?',
	0);
$mtnc[] = array('check_post',
	'Verifica tabelle post e topics',
	'Verr&agrave; fatta una verifica delle tabelle dei post e delle discussioni.',
	'Perderai tutte le discussioni senza testo. Procedi?',
	0);
$mtnc[] = array('check_vote',
	'Verifica tabella votes',
	'Verr&agrave; fatta una verifica della tabella voti.',
	'Perderai tutte i voti che non hanno una corrispondenza. Procedi?',
	0);
$mtnc[] = array('check_pm',
	'Verifica tabella messaggi privati',
	'Verr&agrave; fatta una verifica della tabella messaggi privati.',
	'I messaggi non letti che hanno un mittente o un destinatario inesistente veranno eliminati. Procedi?',
	0);
$mtnc[] = array('check_config',
	'Verifica tabella configurazione',
	'Verr&agrave; fatta una verifica della tabella configurazione.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_search_wordmatch',
	'Verifica tabella di ricerca word match',
	'Verr&agrave; fatta una verifica della tabella di ricerca word match. Questa tabella &egrave; usata per la funzione di ricerca.',
	'',
	0);
$mtnc[] = array('check_search_wordlist',
	'Verifica tabella di ricerca word list',
	'Questa operazione permette di rimuovere le parole non neccessarie nella tabella word list usata per la funzione di ricerca.',
	'Questa funzione potrebbe richiedere un certo tempo per terminare. Non &egrave; necessario eseguire questa verifica, ma facendolo si potrebbe ridurre la dimensione del database. Procedi?',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('synchronize_post',
	'Sincronizza forum e discussioni',
	'Questa operazione permette di sincronizzare il contatore dei post nelle discussioni e nei forum.',
	'Questa funzione potrebbe richiedere un certo tempo per terminare. Se il tuo server non permette l\'uso del comando the set_time_limit(), questa operazione potrebbe essere interrotta dal PHP. Non verr&agrave; perso nessun dato, ma non tutti i dati potrebbero essere aggiornati. Procedi?',
	0);
$mtnc[] = array('synchronize_user',
	'Sincronizza contatore post utenti',
	'Questa operazione permette di sincronizzare il contatore dei post  per gli utenti.',
	'<b>Attenzione:</b> solitamente i post pruned non sono sottratti dal contatore dei post. Utilizzando questo comando i post pruned verranno sottratti dal contatore e non potranno pi&ugrave; essere ripristinati. Procedi?',
	6);
$mtnc[] = array('synchronize_mod_state',
	'Sincronizza lo status di moderatore',
	'Questa operazione permette di sincronizzare lo status di moderatore nella tabella utenti.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_date',
	'Reimposta data ultimo post',
	'Questa operazione permette di reimpostare la data dell\'ultimo post se fosse impostata nel futuro. In questo modo si risolvono i problemi per cui gli utenti ricevono il messaggio che non &egrave; possibile postare nuovamente dopo l\'ultimo post.',
	'Tutti gli orari dei post che sono impostati nel futuro verrano impostati all\'ora corrente. Procedi?',
	0);
$mtnc[] = array('reset_sessions',
	'Reimposta tutte le sessioni',
	'Questa operazione permette di reimpostare tutte le sessioni, svuotando la tabella sessioni.',
	'Tutti gli utenti attivi correntemente perderanno la loro sessione e i risultati delle loro ricerche. Procedi?',
	0);
$mtnc[] = array('--', '', '', '', 8);
$mtnc[] = array('sync_topics_subjects',
	'Sincronizzazione titoli discussioni',
	'Questa operazione permette di sincronizzare i titoli dei primi messaggi di ogni argomento con il titolo dell\'argomento. Non dovresti aver bisogno di usare questa funzione in condizioni d\'uso normali.',
	'Questa operazione permette di sincronizzare i titoli dei primi messaggi di ogni argomento con il titolo dell\'argomento. Il sito non sar&agrave; accessibile durante questo periodo di tempo. Procedi?',
	0);
$mtnc[] = array('rebuild_search_index',
	'Ricostruisci l\'indice di ricerca',
	'Questa operazione permette di ricostruire l\'indice usato per le ricerche. Non dovresti aver bisogno di usare questa funzione in condizioni d\'uso normali.',
	'Questa operazione eliminer&agrave; l\'indice di ricerca e lo ricostruir&agrave;. Potrebbero volerci molte ore per completare quest\'operazione. Il sito non sar&agrave; accessibile durante questo periodo di tempo. Procedi?',
	7);
$mtnc[] = array('proceed_rebuilding',
	'Riprendi Ricostruzione',
	'Usa questa funzione se la ricostruzione dell\'indice di ricerca fosse stata interrotta.',
	'',
	4);
$mtnc[] = array('--', '', '', '', 1);
$mtnc[] = array('check_db',
	'Verifica Database',
	'Questa operazione verifica che nel database non ci siano errori.',
	'',
	1);
$mtnc[] = array('optimize_db',
	'Ottimizza Database',
	'Questa operazione permette di ottimizzare le tabelle. Verr&agrave; ridotta la dimensione del database dopo che sono stati eliminati molti records.',
	'',
	1);
$mtnc[] = array('repair_db',
	'Ripara Database',
	'Questa operazione permette di riparare il database qualora venisse trovato un errore.',
	'Dovresti eseguire questa operazione nel caso in cui venisse trovato un errore nel database. Procedi?',
	1);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_auto_increment',
	'Reimposta il valore di auto increment',
	'Questa operazione permette di reimpostare il valore di auto increment. Questa operazione deve essere eseguita solo nel caso ci siano problemi nell\'inserimento di nuovi dati nelle tabelle.',
	'Vuoi davvero reimpostare il valore di auto increment? Non verr&agrave; perso alcun dato, ma questa operazione dovrebbe essere esguita solo nel caso sia davvero necessaria.',
	0);
$mtnc[] = array('heap_convert',
	'Converti Tabella Sessioni',
	'Questa operazione permette di convertire la tabella sessioni nel tipo HEAP. Solitamente questa operazione viene eseguito durante l\' installazione per permettere una maggior velocit&agrave; ad Icy Phoenix. Dovresti usare questa funzione solo se la tua tabella sessioni non fosse di tipo HEAP.',
	'Vuoi davvero convertire la tabella?',
	2);
$mtnc[] = array('--', '', '', '', 3);
$mtnc[] = array('unlock_db',
	'Sblocca Sito',
	'Usa questa funzione nel caso si sia verificato un errore in una delle precedenti operazioni e la board risultasse ancora disabilitata.',
	'',
	3);

// Function specific vars

// statistic
$lang['Statistic_title'] = 'Statistiche Sito e database';
$lang['Database_table_info'] = 'Le statistiche del Database daranno tre differenti valori: quelli per tutte le tabelle del databae, quelle di tutte le tabelle di default di Icy Phoenix (tabelle principali) e quelle che iniziano con il prefisso delle tabelle del sito (tabelle avanzate).';
$lang['Board_statistic'] = 'Statistiche Sito';
$lang['Database_statistic'] = 'Statistiche Database';
$lang['Version_info'] = 'Versione';
$lang['Thereof_deactivated_users'] = 'dei quali disattivati';
$lang['Thereof_Moderators'] = 'dei quali moderatori';
$lang['Thereof_Administrators'] = 'dei quali amministratori';
$lang['Users_with_Admin_Privileges'] = 'Utenti con privilegi d\'amministratore';
$lang['Number_tables'] = 'Numero di tabelle';
$lang['Number_records'] = 'Numero di records';
$lang['DB_size'] = 'Dimensione del Database';
$lang['Thereof_phpbb_core'] = 'delle quali tabelle principali di Icy Phoenix';
$lang['Thereof_phpbb_advanced'] = 'delle quali tabelle avanzate di Icy Phoenix';
$lang['Version_of_board'] = 'Versione di Icy Phoenix';
$lang['Version_of_mod'] = 'Versione di Manutenzione DB';
$lang['Version_of_PHP'] = 'Versione di PHP';
$lang['Version_of_MySQL'] = 'Versione di MySQL';
// config
$lang['Config_title'] = 'Configurazione Manutenzione DB';
$lang['Config_info'] = 'Le impostazioni seguenti ti permettono di configurare il comportamento di Manutenzione Database. Per cortesia ricorda che una cattiva configurazione potrebbe portare a risultati inattesi.';
$lang['General_Config'] = 'Configurazione Generale';
$lang['Rebuild_Config'] = 'Configurazione di Ricostruzione indice di ricerca';
$lang['Current_Rebuild_Config'] = 'Configurazione attuale ricostruzione';
$lang['Rebuild_Settings_Explain'] = 'Le impostazioni seguenti pemettono di adattare il comportamento della ricostruzione dell\'indice di ricerca.';
$lang['Current_Rebuild_Settings_Explain'] = 'Queste impostazioni sono usate da Manutenzione DB per registrare la posizione corrente della ricostruzione. Non c\'&egrave; bisogno di cambiare quest\'impostazione in condizioni d\'uso normali.';
$lang['Disallow_postcounter'] = 'Disabilita la sincronizzazione del contatore post degli utenti';
$lang['Disallow_postcounter_Explain'] = 'Questa impostazione disabiliter&agrave; la funzione di sincronizzazione dei contatori post degli Utenti. Puoi disabilitare questa funzione se non vuoi che i posts pruned vengano sottratti dal conteggio posts degli utenti.';
$lang['Disallow_rebuild'] = 'Disabilita ricostruzione dell\'Indice di Ricerca';
$lang['Disallow_rebuild_Explain'] = 'Questa impostazione disabiliter&agrave; la funzione di ricostruzione dell\'Indice di Ricerca. Una ricostruzione interrotta potr&agrave; comunque essere ripresa.';
$lang['Rebuildcfg_Timelimit'] = 'Tempo massimo di esecuzione ricostruzione (in secondi)';
$lang['Rebuildcfg_Timelimit_Explain'] = 'Tempo massimo usato per uno step durante la ricostruzione (default: 240). Questo valore limita l\'esecuzione della funzione anche se fosse richiesto un tempo maggiore.';
$lang['Rebuildcfg_Timeoverwrite'] = 'Ammontare fisso del tempo disponibile per esecuzione (in secondi)';
$lang['Rebuildcfg_Timeoverwrite_Explain'] = 'Tempo stimato disponibile per esecuzione (default: 0). Se impostato a 0 il risultato del calcolo &egrave; usato come tempo d\'esecuzione, qualsiasi altro valore specificato sovrascriver&agrave; il valore calcolato.';
$lang['Rebuildcfg_Maxmemory'] = 'Dimensione massima dei post per la ricostruzione (in kByte)';
$lang['Rebuildcfg_Maxmemory_Explain'] = 'Dimensione massima dei post indicizzati in uno step (default: 500). Quando la somma delle dimensioni dei post supera questo valore, non verranno indicizzati altri post nello step corrente.';
$lang['Rebuildcfg_Minposts'] = 'Numero minimo di post da indicizzare per step';
$lang['Rebuildcfg_Minposts_Explain'] = 'Numero minimo di post da indicizzare per step (default: 3). Definisce il numero minimo di post da indicizzare per pagina.';
$lang['Rebuildcfg_PHP3Only'] = 'Usa esclusivamente lo standard compatibile con PHP 3 per l\'indicizzazione';
$lang['Rebuildcfg_PHP3Only_Explain'] = 'Manutenzione DB utilizza un metodo avanzato per l\'indicizzazione quando sia disponibile una versione di PHP 4.0.5 o superiore. Puoi fare a meno del metodo avanzato in modo che Manutenzione DB utilizzi il metodo standard della board.';
$lang['Rebuildcfg_PHP4PPS'] = 'Numero di messaggi indicizzati per secondo con il metodo avanzato';
$lang['Rebuildcfg_PHP4PPS_Explain'] = 'Valore stimato di messaggi che possono essere indicizzati per secondo utilizzando il metodo avanzato (default: 8).';
$lang['Rebuildcfg_PHP3PPS'] = 'Numero di messaggi indicizzati per secondo con il metodo standard ';
$lang['Rebuildcfg_PHP3PPS_Explain'] = 'Valore stimato di messaggi che possono essere indicizzati per secondo utilizzando il metodo standard (default: 1).';
$lang['Rebuild_Pos'] = 'Ultimo messaggio indicizzato';
$lang['Rebuild_Pos_Explain'] = 'ID dell\'ultimo post indicizzato con successo. E\' -1 quando la ricostruzione &egrave; terminata.';
$lang['Rebuild_End'] = 'Ultimo messaggio da Indicizzare';
$lang['Rebuild_End_Explain'] = 'ID dell\'ultimo messaggio da indicizzare. E\' 0 quando la ricostruzione &egrave; terminata.';
$lang['Dbmtnc_config_updated'] = 'Configurazione aggiornata correttamente';
$lang['Click_return_dbmtnc_config'] = 'Clicca %sQUI%s per ritornare alla Configurazione';
// check_user
$lang['Checking_user_tables'] = 'Verifica in corso per le tabelle user e group';
$lang['Checking_missing_anonymous'] = 'Verifica in corso per la mancanza dell\'account Anonimo';
$lang['Anonymous_recreated'] = 'Account Anonimo Ricreato';
$lang['Checking_incorrect_pending_information'] = 'Verifica in corso per informazioni in attesa';
$lang['Updating_invalid_pendig_user'] = 'Informazioni in attesa di un utente aggiornate';
$lang['Updating_invalid_pendig_users'] = 'Informazioni in attesa di %d utenti aggiornate';
$lang['Updating_pending_information'] = 'Aggiornamento informazioni in attesa dei gruppi di singoli utenti ';
$lang['Checking_missing_user_groups'] = 'Verifica in corso per gli utenti appartenenti a molteplici  gruppi di singoli utenti';
$lang['Found_multiple_SUG'] = 'Trovati utenti appartenenti a molteplici  gruppi di singoli utenti';
$lang['Resolving_user_id'] = 'Risoluzione in corso';
$lang['Removing_groups'] = 'Rimozione Gruppi in corso';
$lang['Removing_user_groups'] = 'Rimozione dell\'utente dal gruppo';
$lang['Recreating_SUG'] = 'Nuova creazione di singolo gruppo utente';
$lang['Checking_for_invalid_moderators'] = 'Verifica in corso per impostazioni non valide del moderatore del gruppo';
$lang['Updating_Moderator'] = 'Impostazione dell\'utente attuale come moderatore del gruppo';
$lang['Checking_moderator_membership'] = 'Verifica in corso appartenenza al gruppo dei moderatori';
$lang['Updating_mod_membership'] = 'Aggiornamento in corso dell\'appartenenza al gruppo dei moderatori';
$lang['Moderator_added'] = 'Moderatore aggiunto al gruppo';
$lang['Moderator_changed_pending'] = 'Cambiato lo stato d\'attesa per il moderatore';
$lang['Remove_invalid_user_data'] = 'Rimozione in corso di dati utente non validi dalle tabelle user e group';
$lang['Remove_empty_groups'] = 'Rimozione in corso gruppi vuoti';
$lang['Remove_invalid_group_data'] = 'Rimozione in corso di dati utente non validi dalle tabelle user e group';
$lang['Checking_ranks'] = 'Verifica in corso per Livelli non validi';
$lang['Invalid_ranks_found'] = 'Trovati utenti con Livelli non validi';
$lang['Removing_invalid_ranks'] = 'Rimozione in corso di Livelli non validi';
$lang['Checking_themes'] = 'Verifica in corso per impostazioni dei temi non validi';
$lang['Updating_users_without_style'] = 'Aggiornamento in corso per utenti che non hanno un tema valido impostato';
$lang['Default_theme_invalid'] = '<b>Attenzione:</b> Lo stile di default non &egrave; valido. Per cortesia verifica la configurazione.';
$lang['Updating_themes'] = 'Aggiornamento in corso da tema non valido a tema %d';
$lang['Checking_theme_names'] = 'Verifica in corso per temi con nome non valido';
$lang['Removing_invalid_theme_names'] = 'Rimozione in corso per temi con nome non valido';
$lang['Checking_languages'] = 'Verifiva in corso per impostazioni lingua non valide';
$lang['Invalid_languages_found'] = 'Trovati utenti con impostazioni lingua non valide';
$lang['Default_language_invalid'] = '<b>Attenzione:</b> Il linguaggio di default non &egrave; valido.  Per cortesia verifica la configurazione.';
$lang['English_language_invalid'] = '<b>Attenzione:</b> Il linguaggio di default non &egrave; valido e il file del linguaggio inglese non esiste. Devi Ripristinare la cartella <b>lang_english</b>.';
$lang['Changing_language'] = 'Cambiamento della lingua da \'%s\' a \'%s\' in corso';
$lang['Remove_invalid_ban_data'] = 'Rimozione dati non validi per il Ban';
$lang['Remove_invalid_session_keys'] = 'Rimozioni session keys non validi';

// check_post
$lang['Checking_post_tables'] = 'Verifica in corso per le tabelle post e topic';
$lang['Checking_invalid_forums'] = 'Verifica in corso per Forum con categoria non valida';
$lang['Invalid_forums_found'] = 'Trovati forums con categoria non valida';
$lang['Setting_category'] = 'Trasferimento dei forums alla categoria \'%s\' in corso';
$lang['Checking_posts_wo_text'] = 'Verifica in corso per posts senza testo';
$lang['Posts_wo_text_found'] = 'Trovati posts senza testo';
$lang['Deleting_post_wo_text'] = '%d (Discussione: %s (%d); Utente: %s (%d))';
$lang['Deleting_Posts'] = 'Eliminazione dei dati dei post';
$lang['Checking_topics_wo_post'] = 'Verifica in corso per le Discussioni senza un post';
$lang['Topics_wo_post_found'] = 'Trovate  Discussioni senza un post';
$lang['Deleting_topics'] = 'Eliminazione dei dati delle Discussioni in corso';
$lang['Checking_invalid_topics'] = 'Verifica in corso per le Discussioni in forum non validi';
$lang['Invalid_topics_found'] = 'Trovate  Discussioni in forum non validi';
$lang['Setting_forum'] = 'Trasferimento Discussioni al forum \'%s\' in corso';
$lang['Checking_invalid_posts'] = 'Verifica in corso per i post appartenenti a discussioni non valide';
$lang['Invalid_posts_found'] = 'Trovati  post appartenenti a discussioni non valide';
$lang['Setting_topic'] = 'Trasferimento posts %s alla discussione \'%s\' (%d) nel forum \'%s\'';
$lang['Checking_invalid_forums_posts'] = 'Verifica in corso per i post appartenenti a forum non validi';
$lang['Invalid_forum_posts_found'] = 'Trovati post appartenenti a forum non validi';
$lang['Setting_post_forum'] = '%d: Trasferimento post dal Forum \'%s\' (%d) al Forum \'%s\' (%d)';
$lang['Checking_texts_wo_post'] = 'Verifica in corso per testo non appartenente a nessun post';
$lang['Invalid_texts_found'] = 'Trovato testo non appartenente a nessun post';
$lang['Recreating_post'] = 'Ripristino in corso del post %d e trasferimento al topic \'%s\' nel forum \'%s\'<br />Estrazione: %s';
$lang['Checking_invalid_topic_posters'] = 'Verifica in corso per discussioni con posters non validi';
$lang['Invalid_topic_poster_found'] = 'Trovate discussioni con posters non validi';
$lang['Updating_topic'] = 'Aggiornamento in corso Discussione %d (Poster: %d -&gt; %d)';
$lang['Checking_invalid_posters'] = 'Verifica in corso per posts con posters non validi';
$lang['Invalid_poster_found'] = 'Trovati posts con posters non validi';
$lang['Updating_posts'] = 'Aggiornamento in corso posts';
$lang['Checking_moved_topics'] = 'Verifica in corso Discussione trasferite';
$lang['Deleting_invalid_moved_topics'] = 'Eliminazione in corso di Discussione spostate non valide';
$lang['Updating_invalid_moved_topic'] = 'Aggiornamento in corso per informazioni di una Discussione spostata';
$lang['Updating_invalid_moved_topics'] = 'Aggiornamento in corso per informazioni %d Discussioni spostate';
$lang['Checking_prune_settings'] = 'Verifica in corso per dati pruned non validi';
$lang['Removing_invalid_prune_settings'] = 'Rimozione in corso impostazione non valide di prune';
$lang['Updating_invalid_prune_setting'] = 'Aggiornamento in corso impostazione non valide di prunei per un forum';
$lang['Updating_invalid_prune_settings'] = 'Aggiornamento in corso impostazione non valide di prunei per %d forums';
$lang['Checking_topic_watch_data'] = 'Verifica in corso per Discussioni lette';
$lang['Checking_auth_access_data'] = 'Verifica in corso per autorizzazioni gruppi non valide';
$lang['Must_synchronize'] = 'Devi sincronizzare i dati dei post prima di usare la board. Clicca per procedere.';
// rebuild last poster details
$lang['Rebuild_Last_Poster_Details'] = 'Ricostruzione mittenti messaggi';
// check_vote
$lang['Checking_vote_tables'] = 'Verifica tabella vote';
$lang['Checking_votes_wo_topic'] = 'Verifica in corso per voti non appartenenti ad una discussione';
$lang['Votes_wo_topic_found'] = 'Trovati voti senza Discussione';
$lang['Invalid_vote'] = '%s (%d) - Data inizio: %s - Data Fine: %s';
$lang['Deleting_votes'] = 'Eliminazione voti in corso';
$lang['Checking_votes_wo_result'] = 'Verifica in corso per voti senza nessun risultato';
$lang['Votes_wo_result_found'] = 'Trovati voti senza risultato';
$lang['Checking_topics_vote_data'] = 'Verifica in corso dai voti nella tabella Topic';
$lang['Updating_topics_wo_vote'] = 'Aggiornamento in corso per discussione segnate con voto ma che non hanno un voto corrispondente';
$lang['Updating_topics_w_vote'] = 'Aggiornamento in corso per discussione segnate senza voto ma che hanno un voto corrispondente';
$lang['Checking_results_wo_vote'] = 'Verifica in corso per risultati che non hanno un voto corrispondente';
$lang['Results_wo_vote_found'] = 'Trovati risultati senza voto';
$lang['Invalid_result'] = 'Eliminazione risultato: %s (Voti: %d)';
$lang['Checking_voters_data'] = 'Verifica in corso per dati di voto non validi';
// check_pm
$lang['Checking_pm_tables'] = 'Verifica in corso per la tabella private messages';
$lang['Checking_pms_wo_text'] = 'Verifica in corso per messaggi privati senza testo';
$lang['Pms_wo_text_found'] = 'Trovati messaggi privati senza testo';
$lang['Deleting_pn_wo_text'] = '%d (Oggetto: %s; Mittente: %s (%d); Destinatario: %s (%d))';
$lang['Deleting_Pms'] = 'Eliminazione in corso dati messaggi privati';
$lang['Checking_texts_wo_pm'] = 'Verifica in corso per testo senza un messaggio';
$lang['Deleting_pm_texts'] = 'Eliminazione in corso per testo senza un messaggio';
$lang['Checking_invalid_pm_senders'] = 'Verifica in corso per messaggi con mittente non valido';
$lang['Invalid_pm_senders_found'] = 'Trovati messaggi con mittente non valido';
$lang['Updating_pms'] = 'Aggiornamento in corso messaggi privati';
$lang['Checking_invalid_pm_recipients'] = 'Verifica in corso per messaggi con destinatario non valido';
$lang['Invalid_pm_recipients_found'] = 'Trovati messaggi con destinatario non valido';
$lang['Checking_pm_deleted_users'] = 'Verifica in corso per messaggi con mittente o destinatario eliminati';
$lang['Invalid_pm_users_found'] = 'Trovati messaggi con mittente o destinatario eliminati';
$lang['Deleting_pms'] = 'Eliminazione in corso Messaggi Privati';
$lang['Synchronize_new_pm_data'] = 'Sincronizzazione in corso del nuovo contatore di messaggi privati';
$lang['Synchronizing_users'] = 'Aggiornamento utenti in corso';
$lang['Synchronizing_user'] = 'Aggiornamento utente %s (%d)';
$lang['Synchronize_unread_pm_data'] = 'Sincronizzazione in corso del nuovo contatore di messaggi privati non letti';
// check_config
$lang['Checking_config_table'] = 'Verifica in corso tabella configurazione';
$lang['Checking_config_entries'] = 'Verifica in corso elementi della tabella configurazione';
$lang['Restoring_config'] = 'Ripristino elementi in corso';
// check_search_wordmatch
$lang['Checking_search_wordmatch_tables'] = 'Verifica in corso tabella word match';
$lang['Checking_search_data'] = 'Verifica in corso per dati di ricerca non validi';
// check_search_wordlist
$lang['Checking_search_wordlist_tables'] = 'Verifica in corso tabella word match';
$lang['Checking_search_words'] = 'Verifica in corso per parole di ricerca superflue';
$lang['Removing_part_invalid_words'] = 'Rimozione parziale di parole di ricerca superflue in corso';
$lang['Removing_invalid_words'] = 'Rimozione parole di ricerca superflue in corso';
// synchronize topics subjects
$lang['Sync_topics_subjects'] = 'Sincronizzazione titoli discussioni';
$lang['Sync_topics_subjects_progress'] = 'Sincronizzazione in corso';
// rebuild_search_index
$lang['Rebuilding_search_index'] = 'Ricostruzione indice di ricerca in corso';
$lang['Deleting_search_tables'] = 'Svuotamento tabella indice di ricerca in corso';
$lang['Reset_search_autoincrement'] = 'Azzeramento contatore tabella di ricerca in corso';
$lang['Preparing_config_data'] = 'Impostazione dati di configurazione';
$lang['Can_start_rebuilding'] = 'Adesso puoi iniziare la ricostruzione dell\'indice di ricerca';
$lang['Click_once_warning'] = '<b>Clicca una sola volta sul Link</b> - potrebbe volerci parecchio tempo prima che venga visualizzata una nuova pagina.';
// proceed_rebuilding
$lang['Preparing_to_proceed'] = 'Preparazione delle tabelle per permettere il processo';
$lang['Preparing_search_tables'] = 'Preparazione delle tabelle di ricerca per permettere il processo';
// perform_rebuild
$lang['Click_or_wait_to_proceed'] = 'Clicca qui per procedere o aspetta qualche secondo';
$lang['Indexing_progress'] = '%d di %d posts (%01.1f%%) sono stati indicizzati. Ultimo post indicizzato: %d';
$lang['Indexing_finished'] = 'La ricostruzione dell\'indice &egrave; terminata correttamente';
// synchronize_post
$lang['Synchronize_posts'] = 'Sincronizzazione dati dei post in corso';
$lang['Synchronize_topic_data'] = 'Sincronizzazione Discussioni in corso';
$lang['Synchronizing_topics'] = 'Aggiornamento discussioni in corso';
$lang['Synchronizing_topic'] = 'Aggiornamento discussione %d (%s)';
$lang['Synchronize_moved_topic_data'] = 'Sincronizzazione discussioni spostate';
$lang['Inconsistencies_found'] = 'Sono stati trovati dei dati incosistenti nel tuo database. Per cortesia %scontrolla le tabelle post e topic%s';
$lang['Synchronizing_moved_topics'] = 'Aggiornamento discussioni spostate';
$lang['Synchronizing_moved_topic'] = 'Aggiornamento discussione %d -&gt; %d (%s)';
$lang['Synchronize_forum_topic_data'] = 'Sincronizzazione discussioni del forum in corso';
$lang['Synchronizing_forums'] = 'Aggiornamento forums in corso';
$lang['Synchronizing_forum'] = 'Aggiornamento forum %d (%s)';
$lang['Synchronize_forum_data_wo_topic'] = 'Sincronizzazione forums senza discussioni in corso';
$lang['Synchronize_forum_post_data'] = 'Sincronizzazione dati post dei forums in corso';
$lang['Synchronize_forum_data_wo_post'] = 'Sincronizzazione forums senza posts in corso';
// synchronize_user
$lang['Synchronize_post_counters'] = 'Sincronizzazione contatore post';
$lang['Synchronize_user_post_counter'] = 'Sincronizzazione  contatore post per gli utenti in corso';
$lang['Synchronizing_user_counter'] = 'Aggiornamento utente %s (%d): %d -&gt; %d';
// synchronize_mod_state
$lang['Synchronize_moderators'] = 'Sincronizzazione stato di moderatore nella tabella user';
$lang['Getting_moderators'] = 'Acquisizione moderatori in corso';
$lang['Checking_non_moderators'] = 'Verifica in corso per gli utenti che hanno lo status di moderatore, ma non moderano nessun forum';
$lang['Updating_mod_state'] = 'Aggiornamento in corso status di moderatore';
$lang['Changing_moderator_status'] = 'Cambiamento in corso per lo status di moderatore dell\'utente %s (%d)';
$lang['Checking_moderators'] = 'Verifica in corso  per gli utenti che non hanno lo status di moderatore, ma moderano un forum';
// reset_date
$lang['Resetting_future_post_dates'] = 'Azzeramento data ultimo post nel futuro';
$lang['Checking_post_dates'] = 'Verifica in corso date posts';
$lang['Checking_pm_dates'] = 'Verifica in corso date messaggi privati';
$lang['Checking_email_dates'] = 'Verifica in corso data ultima e-mail';
// reset_sessions
$lang['Resetting_sessions'] = 'Azzeramento sessioni';
$lang['Deleting_session_tables'] = 'Svuotamento tabella sessioni e risultati di ricerca in corso';
$lang['Restoring_session'] = 'Ripristino sessione utente attico in corso';
// check_db
$lang['Checking_db'] = 'Verifica database in corso ';
$lang['Checking_tables'] = 'Verifica tabelle in corso';
$lang['Table_OK'] = 'OK';
$lang['Table_HEAP_info'] = 'Comando non disponibile per le tabelle HEAP';
// repair_db
$lang['Repairing_db'] = 'Riparazione database in corso';
$lang['Repairing_tables'] = 'Riparazione tabelle in corso';
// optimize_db
$lang['Optimizing_db'] = 'Ottimizzazione database in corso';
$lang['Optimizing_tables'] = 'Ottimizzazione tabelle in corso';
$lang['Optimization_statistic'] = 'L\'ottimizzazione ha ridotto la dimensione delle tabelle da %s a %s. Questa &egrave; una riduzione di %s ovvero del %01.2f%%.';
// reset_auto_increment
$lang['Reset_ai'] = 'Reimposazionr valore di auto increment in corso';
$lang['Ai_message_update_table'] = 'tabelle aggiornate';
$lang['Ai_message_no_update'] = 'nessun aggiornamento necessarrio';
$lang['Ai_message_update_table_old_mysql'] = 'tabella aggiornata'; // Used if an old version of MySQL is used which does not allow a table check before updating the table
// heap_convert
$lang['Converting_heap'] = 'Converione della tabella Session a tipo HEAP';
// unlock_db
$lang['Unlocking_db'] = 'Sblocco database in corso';

// Emergency Recovery Console
$lang['Forum_Home'] = 'Forum Home';
$lang['ERC'] = 'Console d\'Emergenza e Recupero';
$lang['Submit_text'] = 'Invia';
$lang['Select_Language'] = 'Seleziona una lingua';
$lang['No_selectable_language'] = 'Non esistono linguaggi selezionabili';
$lang['Select_Option'] = 'Seleziona un\'opzione';
$lang['Option_Help'] = 'Suggerimenti per le opzioni';
$lang['Authenticate_methods'] = 'Ci sono due modi per autenticarsi';
$lang['Authenticate_methods_help_text'] = 'Devi essere autenticato per fare qualsiasi cambiamento alla configurazione della board. Ci sono due modi per farlo:
	Primo, ti puoi autenticare immettendo nome utente e password di un amministratore attivo sulla board (metodo consigliato). Secondo, ti puoi autenticare
	immetendo nome utente e password del database utilizzato dalla board.';
$lang['Authenticate_user_only'] = 'Ti deiv autenticare come amministratore attivo';
$lang['Authenticate_user_only_help_text'] = 'Devi essere autenticato per fare qualsiasi cambiamento alla configurazione della board. Ti puoi autenticare solo
	immettendo nome utente e password di un amministratore attivo sulla board.';
$lang['Admin_Account'] = 'Account Admin della board';
$lang['Database_Login'] = 'utente Database';
$lang['Username'] = 'Nome Utente';
$lang['Password'] = 'Password';
$lang['Auth_failed'] = 'Autenticazione Fallita!';
$lang['Return_ERC'] = 'Ritorna alla Console d\'Emergenza e Recupero';
$lang['cur_setting'] = 'Impostazione attuale';
$lang['rec_setting'] = 'Impostazione raccomandata';
$lang['secure'] = 'Sicuro';
$lang['secure_yes'] = 'Si (https)';
$lang['secure_no'] = 'No (http)';
$lang['domain'] = 'Dominio';
$lang['port'] = 'Porta';
$lang['path'] = 'Percorso';
$lang['Cookie_domain'] = 'Dominio Cookie';
$lang['Cookie_name'] = 'Nome Cookie';
$lang['Cookie_path'] = 'Percorso Cookie';
$lang['select_language'] = 'Seleziona nuova lingua';
$lang['select_theme'] = 'Seleziona nuovo tema';
$lang['reset_thmeme'] = 'Ricrea tema di default';
$lang['new_admin_user'] = 'Utente a cui garantire i privilegi d\'aaministratore';
$lang['dbms'] = 'Tipo di Database';
$lang['DB_Host'] = 'Server Hostname / DSN del Database ';
$lang['DB_Name'] = 'Nome Database';
$lang['DB_Username'] = 'Nome Utente Database';
$lang['DB_Password'] = 'Password Database Password';
$lang['Table_Prefix'] = 'Prefisso delle tabelle nel database';
$lang['New_config_php'] = 'Questa &egrave; la tua nuova configurazione: config.' . PHP_EXT;
// Options
$lang['cls'] = 'Elimina tutte le sessioni';
$lang['ecf'] = 'Svuota la cache';
$lang['rdb'] = 'Ripara tabelle del database';
$lang['cct'] = 'Verifica tabella di configurazione';
$lang['rpd'] = 'Risistema dati relativi al percorso del forum';
$lang['rcd'] = 'Risistema dati relativi al cookie';
$lang['rld'] = 'Risistema dati relativi alla lingua' ;
$lang['rtd'] = 'Risistema dati relativi al template';
$lang['dgc'] = 'Disabilita compressione GZip';
$lang['cbl'] = 'Elimina elenco ban';
$lang['raa'] = 'Rimuovi tutti gli amministratori';
$lang['mua'] = 'Garantisci privilegi amministrativi';
$lang['rcp'] = 'Ricrea config.php';
// Info for options
$lang['cls_info'] = 'Procedendo tutte le sessioni verranno eliminate.';
$lang['ecf_info'] = 'Procedendo la cache verr&agrave; svuotata.';
$lang['rdb_info'] = 'Procedendo le tabelle del database verranno riaparate.';
$lang['cct_info'] = 'Procedendo la tabella di configurazione verr&agrave; verificata e gli elementi mancanti ripristinati.';
$lang['rpd_info'] = 'Procedendo i dati di configurazione saranno aggiornati se vengono selezionate le impostazioni raccomandate.';
$lang['rcd_info'] = 'Procedendo i dati del cooki verr&agrave; aggiornato. L\'opzione sull\'impostazione del cookie sicuro si troba sotto \'Ripristino dati percorso del forum\'.';
$lang['rld_info'] = 'Procedendo il linguaggio selezionato sar&agrave; usato per la board e per gli utenti.';
$lang['rtd_info'] = 'Procedendo il template selezionato sar&agrave; impostato per la board e per gli utenti oppure il template di default (Icy Phoenix) sar&agrave; ricreato e impostato di default per la board e per gli utenti.';
$lang['rtd_info_no_theme'] = 'Procedendo il template di default (Icy Phoenix) sar&agrave; ricreato e impostato di default per la board e per gli utenti.';
$lang['dgc_info'] = 'Procedendo la compressione GZip sar&agrave; disabilitata.';
$lang['cbl_info'] = 'Procedendo sia l\'elenco degli utenti bannnati sia di quelli non ammessi sar&agrave; eliminato.';
$lang['raa_info'] = 'Procedendo tutti gli amministratori verranno impostati a livello normale di utente. Se ti sei autenticato come admin, questo accoutn manterr&agrave; i privilegi
	di amministrazione.';
$lang['mua_info'] = 'Procedendo all\'utente selezionato saranno garantiti i privilegi di amministratore. L\'utente verr&agrave; anche attivato.';
$lang['rcp_info'] = 'Procedendo verr&agrave; creato un nuovo file config.php con i dati immessi.';
// Success messages for options
$lang['cls_success'] = 'Tutte le ssessioni sono state eliminate correttamente.';
$lang['ecf_success'] = 'Cache svuotata correttamente.';
$lang['rdb_success'] = 'Le tabelle del database sono state riparate correttamente.';
$lang['rpd_success'] = 'Configurazione della board aggiornata correttamente.';
$lang['cct_success'] = 'Tabella di configurazione verificata correttamente.';
$lang['rcd_success'] = 'Dati dei cookie aggiornati correttamente.';
$lang['rld_success'] = 'Dati della lingua aggiornati correttamente.';
$lang['rld_failed'] = 'I files della lingua richiesti (lang_main.' . PHP_EXT . ' and lang_admin.' . PHP_EXT . ') non esistono.';
$lang['rtd_restore_success'] = 'Il template di default &egrave; stato ripristinato correttamente.';
$lang['rtd_success'] = 'I dati del template sono stati aggiornati correttamente';
$lang['dgc_success'] = 'La compressione GZip &egrave; stata disabilitata correttamente.';
$lang['cbl_success'] = 'L\'elenco degli utenti bannnati e di quelli non ammessi &egrave; stato eliminato correttamente.';
$lang['cbl_success_anonymous'] = 'L\'elenco degli utenti bannnati e di quelli non ammessi &egrave; stato eliminato correttamente. L\'account anonimo &egrave; stato ricreato. Potrebbero mancare i dati riguardanti il gruppo dell\'utente anonimo, si raccomanda di usare la funzione &quot;Verifica tabelle user e group&quot; nel pannello principale di Manutenzione DB.';
$lang['raa_success'] = 'Tutti gli admins sono stati rimossi correttamente.';
$lang['mua_success'] = 'L\'utente selezionato ha i privilegi amministrativi.';
$lang['mua_failed'] = '<b>Errore:</b> L\'utente selezionato o non esiste o ha gi&agrave; i privilegi amministrativi.';
$lang['rcp_success'] = 'Copia il testo in un file vuoto e rinominalo <b>config.' . PHP_EXT . '</b> fanne l\'upload nella cartella principale del forum. Per cortesia assicurati che non ci siano caratteri (inclusi gli spazi e demarcatori di linea) prima del <b>&lt;?php</b> e dopo <b>?&gt;</b>.<br /> Puoi anche fare il %sdownload%s del file.';
// Text for success messages
$lang['Removing_admins'] = 'Rimozione Amministratori';
// Help Text
$lang['Option_Help_Text'] = '<p>Se ti &egrave; stato comunicato che c\'&egrave; un errore nella creazione delle sessioni, puoi eliminare i dati riguardanti le sessioni selezionando <b>Elimina tutte le sessioni</b>. Se hai problemi ad accedere alle tabelle del database tables, puoi ripararle selezionando <b>Ripara tabelle del database</b>. <b>Verifica tabella di configurazione</b> verificher&agrave; la tabella configurazione e gli elementi mancanti ripristinati, potrebbe essere utile per molti tipi di errore.</p>
<p>Se non sei in grado di fare il login oppure di accedere al pannello d\'amministrazione, potrebbe esserci un problema con il percorso o con le impostazioni del cookie. Puoi risistemarli con <b>Risistema dati relativi al percorso del forum</b> o con <b>Risistema dati relativi al cookie</b>. Puoi anche risistemare i dati releativi alla lingua con <b>Risistema dati relativi alla lingua </b> o al template con <b>Risistema dati relativi al template</b>.</p>
<p>Se hai avuto problemi dopo l\'attivazione della compressione GZip, la puoi disabilitare selezionando <b>Disabilita compressione GZip</b>.</p>
<p>Se hai perso la password per il tuo account puoi garantire ad un utente i privilegi di amministratore selezionando <b>Garantisci privilegi amministrativi</b>. In questo modo si attiver&agrave; anche l\'utente, cosicch&eacute; potrsti usare un utente che hai creato in precedenza. Se non sei in grado di aggiungere un nuovo utente, puoi eliminare la lista dei ban selezionando <b>Elimina elenco ban</b> (sar&agrave; anche ripristinato l\'utente anonimo).</p>
<p>Se la tua board &egrave; stata presa di mira da un hacker, &egrave; consigliato rimuovere tutti gli amministratori selezionando <b>Rimuovi tutti gli amministratori</b>. (L\'account di per s&egrave; non sar&agrave; eliminato, ma i privilegi saranno rimossi.)</p>
<p>Se hai bisogno di ripristinare il file config.php lo puoi fare selezionando <b>Ricrea config.php</b>.</p>';

$lang['dbmntc_Invalid_Option'] = 'Opzione Non Valida';

?>