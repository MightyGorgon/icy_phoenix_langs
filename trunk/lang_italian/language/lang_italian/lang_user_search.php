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

$lang['Search_invalid_username'] = 'Immesso uno Username non valido per la ricerca';
$lang['Search_invalid_email'] = 'Immessa una Email non valida per la ricerca';
$lang['Search_invalid_ip'] = 'Immesso un indirizzo IP non valido per la ricerca';
$lang['Search_invalid_group'] = 'Immesso un Gruppo non valido per la ricerca';
$lang['Search_invalid_date'] = 'Immessa una Data non valida per la ricerca';
$lang['Search_invalid_postcount'] = 'Immesso un Post Count non valido per la ricerca';
$lang['Search_invalid_userfield'] = 'Immesso Campo User non valido';
$lang['Search_invalid_lastvisited'] = 'Immesso dato non valido per la ricerca delle Ultime Visite';
$lang['Search_invalid_language'] = 'Linguaggio Selezionato non valido';
$lang['Search_invalid_style'] = 'Stile Selezionato non valido';
$lang['Search_invalid_timezone'] = 'Orario Selezionato non valido';
$lang['Search_invalid_moderators'] = 'Forum Selezionato non valido';
$lang['Search_invalid'] = 'Ricerca non valida';
$lang['Search_invalid_day'] = 'Il giorno che hai immesso non era valido';
$lang['Search_invalid_month'] = 'Il mese che hai immesso non era valido';
$lang['Search_invalid_year'] = 'L\'anno che hai immesso non era valido';
$lang['Search_no_regexp'] = 'Il tuo database non supporta la ricerca Regular Expression.';
$lang['Search_for_username'] = 'Ricerca usernames corrispondenti %s';
$lang['Search_for_email'] = 'Ricerca indirizzi email corrispondenti %s';
$lang['Search_for_ip'] = 'Ricerca indirizzi IP corrispondenti %s';
$lang['Search_for_date'] = 'Ricerca utenti che si sono registrati %s %d/%d/%d';
$lang['Search_for_group'] = 'Ricerca membri del gruppo di %s';
$lang['Search_for_banned'] = 'Ricerca utenti bannati';
$lang['Search_for_admins'] = 'Ricerca Amministratori';
$lang['Search_for_mods'] = 'Ricerca Moderatori';
$lang['Search_for_disabled'] = 'Ricerca utenti disabilitati';
$lang['Search_for_disabled_pms'] = 'Ricerca utenti con Messaggi Privati disabilitati';
$lang['Search_for_postcount_greater'] = 'Ricerca di utenti con un conteggio di post maggiore di %d';
$lang['Search_for_postcount_lesser'] = 'Ricerca di utenti con un conteggio di post minore di %d';
$lang['Search_for_postcount_range'] = 'Ricerca di utenti con un conteggio di post tra %d e %d';
$lang['Search_for_postcount_equals'] = 'Ricerca di utenti con un conteggio di post del valore di %d';
$lang['Search_for_userfield_icq'] = 'Ricerca di utenti con un indirizzo ICQ corrispondente a %s';
$lang['Search_for_userfield_yahoo'] = 'Ricerca di utenti con un indirizzo Yahoo IM corrispondente a %s';
$lang['Search_for_userfield_aim'] = 'Ricerca di utenti con un indirizzo AIM corrispondente a %s';
$lang['Search_for_userfield_msn'] = 'Ricerca di utenti con un indirizzo MSN Messenger corrispondente a %s';
$lang['Search_for_userfield_website'] = 'Ricerca di utenti con un sito Web corrispondente a %s';
$lang['Search_for_userfield_location'] = 'Ricerca di utenti con una Localit&agrave; corrispondente a %s';
$lang['Search_for_userfield_interests'] = 'Ricerca di utenti con un campo interessi corrispondente a %s';
$lang['Search_for_userfield_occupation'] = 'Ricerca di utenti con un campo Occupazione corrispondente a %s';
$lang['Search_for_lastvisited_inthelast'] = 'Ricerca di utenti che hanno fatto visita negli ultimi %s %s';
$lang['Search_for_lastvisited_afterthelast'] = 'Ricerca di utenti che hanno fatto visita dopo gli ultimi %s %s';
$lang['Search_for_language'] = 'Ricerca di utenti che hanno scelto %s come loro lingua';
$lang['Search_for_timezone'] = 'Ricerca di utenti che hanno scelto GMT %s come loro orario';
$lang['Search_for_style'] = 'Ricerca di utenti che hanno scelto %s come loro stile';
$lang['Search_for_moderators'] = 'Ricerca di Moderatori del Forum -> %s';
$lang['Search_users_advanced'] = 'Ricerca Utenti Avanzata';
$lang['Search_users_explain'] = 'Questo Modulo ti permette di eseguire le ricerche avanzate di utenti su un vasto intervallo di criteri. Per favore leggi le descrizioni sotto ogni campo per capire completamente ogni opzione di ricerca.';
$lang['Search_username_explain'] = 'qui puoi effettuare una ricerca case insensitive degli usernames. Se tu volessi abbinare una parte di username, utilizza * (un asterisco) come carattere generale. Il controllo del box delle Espressioni Regolari ti permetter&agrave; una ricerca basata su un tuo modello di espressioni regolari. <strong>Nota:</strong> Espressioni Regolari non funzioner&agrave; in MySQL, PostgreSQL e Oracle 10g+.';
$lang['Search_email_explain'] = 'Immetti una espressione per accertare la corrispondenza dell\'indirizzo email dell\'utente. Questo  &egrave; case insensitive. Se vuoi fare una corrispondenza parziale, utilizza * (un asterisco) come carattere generale. Il controllo del box delle Espressioni Regolari ti permetter&agrave; una ricerca basata su un tuo modello di espressioni regolari. <strong>Nota:</strong> Espressioni Regolari funzioner&agrave; solo in MySQL, PostgreSQL e Oracle 10g+.';
$lang['Search_ip_explain'] = 'Ricerca di utenti che hanno inviato messaggi da uno specifico indirizzo IP (xxx.xxx.xxx.xxx), carattere generale (xxx.xxx.xxx.*) oppure range (xxx.xxx.xxx.xxx-yyy.yyy.yyy.yyy). Nota: l\'ultima quaderna .255 &egrave; considerata il range di tutti gli IP in quella quaterna. Se tu immetti 10.0.0.255, &egrave; come immettere 10.0.0.* (Nessun IP &egrave; assegnato .255 per quell\'occasione, &egrave; riservata). Dove ti imbatti in range, 10.0.0.5-10.0.0.255 &egrave; lo stesso di "10.0.0.*" . Potresti veramente immettere 10.0.0.5-10.0.0.254 .';
$lang['Search_users_joined'] = 'Utenti che si sono registrati';
$lang['Search_users_lastvisited'] = 'Utenti che hanno fatto visita';
$lang['in_the_last'] = 'negli ultimi';
$lang['after_the_last'] = 'dopo gli ultimi';
$lang['Before'] = 'Prima';
$lang['After'] = 'Dopo';
$lang['Search_users_joined_explain'] = 'Ricerca di utenti registrati Prima e Dopo (e durante)una specifica data. Il formato della data &egrave; YYYY/MM/DD.';
$lang['Search_users_groups_explain'] = 'Vedi tutti i membri del gruppo selezionato.';
$lang['Administrators'] = 'Amministratori';
$lang['Banned_users'] = 'Utenti Espulsi';
$lang['Disabled_users'] = 'Utenti Disattivati';
$lang['Users_disabled_pms'] = 'Utenti con PMs disabilitati';
$lang['Search_users_misc_explain'] = 'Amministratori - Tutti gli utenti con permessi Amministratore; Moderatori - Tutti i Moderatori dei forum; Utenti Bannati - Tutti gli accounts che sono stati bannati su questi forum; Utenti Disabilitati - Tutti gli Utenti con accounts disabilitati (ciascuno disabilitato manualmente o con indirizzo email mai verificato); Utenti con PMs disabilitati - Selezione degli utenti che hanno i privilegi per i Messaggi Privati rimossi (Fatto via Amministrazione Utenti)';
$lang['Postcount'] = 'Contatore Messaggi';
$lang['Equals'] = 'Uguale';
$lang['Greater_than'] = 'Maggiore di';
$lang['Less_than'] = 'Minore di';
$lang['Search_users_postcount_explain'] = 'Puoi fare una ricerca di utenti sul valore del contatore di messaggi. Inoltre puoi fare una ricerca di un valore specifico, maggiore o minore di un valore o compreso tra due valori. Per fare una ricerca in un range, seleziona "Uguale" e poi immetti i valori iniziale e finale separati da un trattino (-), per esempio 10-15';
$lang['Userfield'] = 'Campo Utente';
$lang['Search_users_userfield_explain'] = 'Ricerca di utenti basata sui vari campi del profilo. Caratteri generali sono supportati usando l\'asterisco (*). Il controllo del box delle Espressioni Regolari ti permetter&agrave; di fare una ricerca basata sul tuo modello di espressioni regolari. <strong>Nota:</strong> Le Espressioni Regolari funzioneranno solo in MySQL, PostgreSQL e Oracle 10g+.';
$lang['Search_users_lastvisited_explain'] = 'Puoi fare una ricerca degli basata sulla data del loro ultimo accesso usando questa opzione di ricerca';
$lang['Search_users_language_explain'] = 'Questo mostrer&agrave; gli utenti che hanno selezionato una lingua specifica nel loro profilo';
$lang['Search_users_timezone_explain'] = 'Utenti che hanno selezionato uno specifico timezone nel loro profilo';
$lang['Search_users_style_explain'] = 'Mostra gli utenti che hanno selezionato uno stile specifico.';
$lang['Moderators_of'] = 'Moderatori di';
$lang['Search_users_moderators_explain'] = 'Cerca Utenti con i permessi di Moderazione di un forum Specifico. I permessi di Moderazione vengono riconosciuti sia tramite i Permessi Utenti, sia se l\'utente appartiene ad un gruppo con i Permessi di Moderazione.';
$lang['Regular_expression'] = 'Espressioni Regolari?';

$lang['Manage'] = 'Gestione';
$lang['Search_users_new'] = '%s ha portato %d risultato . Esegui <a href="%s">una nuova ricerca</a>.';
$lang['Banned'] = 'Bannato';
$lang['Not_banned'] = 'Non Bannato';
$lang['Search_no_results'] = 'Nessun utente corrisponde ai tuoi criteri di selezione. Per cortesia prova con una nuova ricerca. Se stai facendo una ricerca per username o email, per ricerche parziali puoi usare * (asterisco).';
$lang['Account_status'] = 'Status Account';
$lang['Sort_options'] = 'Opzione Ordinamento';
$lang['Last_visit'] = 'Ultima Visita';
$lang['Day'] = 'Giorno';

?>
