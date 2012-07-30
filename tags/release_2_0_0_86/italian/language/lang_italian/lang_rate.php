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
	'Already_Rated' => 'Hai gi&agrave; valutato questo argomento con un voto di <b>%d</b>', //%d = their rate
	'Rate_Stats' => '<b>%.2f</b>', //%.2f = average, %d = min, %d = max, %d # of ratings
	'Rate' => 'Vota',
	'Choose_Rating' => 'Valuta questo argomento',
	'Topic_Rated' => 'Hai valutato questo argomento.',
	'Anon_Rate_Disabled' => 'Agli utenti non registrati non &egrave; permesso valutare argomenti',
	'Not_Authorized_To_Rate' => 'Non hai il permesso di valutare questo argomento',
	'Change_Rating' => 'Cambia la tua valutazione',
	'View_Details' => '<a href="%s" title="Visualizza dettagli">Visualizza informazioni dettagliate</a>', //%s = detailed URL
	'View_Details_2' => '<a href="%s" title="Visualizza dettagli">Visualizza informazioni dettagliate</a>', //%s = detailed URL
	'Username_Gave_Rate_of_Max' => '<b>%s</b> ha dato una valutazione di <b>%d</b> su un massimo di <b>%d</b> il %s.', //%s = username, %d = user rate, %d = max rate, %s = date with create_date()
	'Detailed_Rating' => 'Dettagli Valutazione',
	'Details_For_Topic' => 'Dettagli Valutazione&nbsp;&raquo;&nbsp;<b>%s</b>', //%s = topic title
	'Or_Someone_From_IP' => '(ip logged)', // makes it smaller for smaller res screens
	'Disable_Rating_ON' => 'Disabilita valutazione per questo argomento',
	'Summary' => 'Riepologo Voti',
	'Topic_Rating_Details' => 'Dettagli valutazione argomento',

	'Anonymous' => 'Anonimo',
	'All_Forums' => 'di Tutti i Forums',

	'Max_Rate' => 'Valutazione Massima',
	'User_Rate' => 'Valutazione Utente',
	'Rate_Date' => 'Data',
	'Rate_Time' => 'Ora',
	'Rate_Order' => 'Numero Valutazioni',

	'No_Topics_Rated' => 'Nessuna discussione &egrave; stata valutata',
	'Top_Topics' => '%d discussioni pi&ugrave; valutate', //%d = number of topics
	'Top_Topics_For_Forum' => 'discussioni pi&ugrave; valutate nel Forum %s', //%d = number of topics, %s is forum name
	'For_Forum' => 'Solo del forum: %s', //%s = forum name
	'Last_Rated' => 'Ultima Valutazione',
	'Rating' => 'Valutazione Media',
	'Min' => 'Minimo',
	'Max' => 'Massimo',
	'Number_of_Rates' => 'Numero Valutazioni',
	'Min_Rating' => 'Valutazione Minima',
	'rate_average' => 'Valutazione Media',
	'rate_minimum' => 'Valutazione Minima',
	'rate_maximum' => 'Valutazione Massima',
	'Rank2' => '#',
	'By_Forum' => 'Ordina per Forum',
	'Details_For_Topic' => '<b>%s</b>', //%s = topic title

	//admin
	'Status' => 'Status',
	'Auth_Description' => 'Descrizioni',
	'NONE' => 'Il Sistema di valutazione &egrave; disabilitato non apparir&agrave; la barra di voto nelle Discussioni',
	'ALL' => 'Tutti gli Utenti (anonimi e registrati) possono valutare e vedere la barra di valutazione.',
	'REG' => 'Solo gli Utenti registrati possono valutare, ma tutti possono vedere la barra di valutazione',
	'PRIVATE' => 'Solo gli Utenti registrati possono valutare e vedere la barra di valutazione',
	'MOD' => 'Solo i moderatori e gli amministratori possono valutare ma tutti possono vedere la barra di valutazione',
	'ADMIN' => 'Solo gli amministratori possono valutare ma tutti possono vedere la barra di valutazione',
	'Allow_Poster_To_Disable_Rating' => 'Permetti a chi scrive il messaggio di disattivare la valutazione',
	'Allow_Detailed_Ratings_Page' => 'Permetti agli utenti di visualizzare il dettaglio delle valutazioni',
	'Max_Rating' => 'Valutazione Massima (da 1 al massimo)',
	'Allow_Users_To_ReRate' => 'Permetti agli utenti di cambiare la loro valutazione',
	'Check_Anon_IP' => 'Controlla l\'IP degli utenti anonimi per vedere se hanno gi&agrave; valutato',
	'Anon_Rate_ID' => 'Prossimo IP Utente Anonimo.<br />Non cambiarlo se non sai quello che stai facendo o se non ne hai veramente la necessit&agrave;.<br />Impostarlo ad un valore pi&ugrave; alto di quello che gi&agrave; c\'&egrave; &egrave; una pessima idea.',
	'Big_Page_Number' => 'Numero di argomenti da visualizzare nella pagina separata delle valutazioni (se si sceglie di usarla)',
	'Main_Page_Number' => 'Numero di argomenti da visualizzare nella pagina principale (se si sceglie di usarla)',
	'Header_Page_Number' => 'Numero di argomenti da visualizzare nell\'intestazione pagina (se si sceglie di usarlo)',
	'Mass_Update' => 'Aggiornamento Totale',
	'Purge_Old_Ratings' => 'Cancella le vecchie valutazioni',
	'Min_Rates' => 'Numero minimo di valutazioni affinch&eacute; l\'argomento possa essere visualizzato tra gli argomenti pi&ugrave; valutati',
	'Purge' => 'Elimina',
	'Purged' => 'Eliminati',
	'Purge_Desc' => 'Cancella le valutazioni dagli argomenti cancellati che potrebbero in qualche modo non essere stati cancellati.',
	'Clear' => 'Pulisci',
	'Clear_Desc' => 'Cancella <b>TUTTE</b> le valutazioni. Usa questa funzione solo se hai gravi problemi o vuoi <b>cancellare tutti</b> i dati riguardanti le valutazioni. Clicca sul box ed immetti YES nel box sottostante.',
	'Complete' => 'Completato',
	'Authorization' => 'Autorizzazione',

	//Error Messages
	'Database_Error' => 'Database Error',
	'Error_Dbase_Config' => 'Errore nel recupero o nell\'aggiornamento dei dati di configurazione.',
	'Error_Dbase_Ratings' => 'Errore nel recupero o nell\'aggiornamento dei dati riguardanti le valutazioni.',
	'Error_Dbase_Auth' => 'Errore nel recupero o nell\'aggiornamento dei dati riguardanti le autorizzazioni delle valutazioni.',
	'No_Topic_ID' => 'Non &egrave; stata specificata nessun argomento per il quale ottenere i dettagli.',
	)
);

?>