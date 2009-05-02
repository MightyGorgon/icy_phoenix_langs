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
* Nivisec.com (support@nivisec.com)
* TheSteffen, KugeLSichA, Tom, Carsten
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
	'Already_Rated' => 'Deine Bewertung: <b>%d</b>', //%d = their rate
	'Rate_Stats' => '<b>%.2f</b>', //%.2f = average, %d = min, %d = max, %d # of ratings
	'Rate' => 'Bewerten',
	'Choose_Rating' => 'Wertung ausw�hlen',
	'Topic_Rated' => 'Das Thema wurde bewertet.',
	'Anon_Rate_Disabled' => 'G�sten ist es nicht erlaubt, Themen zu bewerten.',
	'Not_Authorized_To_Rate' => 'Du bist nicht berechtigt, dieses Thema zu bewerten.',
	'Change_Rating' => 'Bewertung �ndern',
	'View_Details' => '<a href="%s" title="Details anzeigen">Detalierte Informationen anzeigen</a>', //%s = detailed URL
	'View_Details_2' => '<a href="%s" title="Details anzeigen">Detalierte Informationen anzeigen</a>', //%s = detailed URL
	'Username_Gave_Rate_of_Max' => '<b>%s</b> bewertete dieses Thema <b>%d</b> von m�glichen <b>%d</b> am %s.', //%s = username, %d = user rate, %d = max rate, %s = date with create_date()
	'Detailed_Rating' => 'Detailierte Bewertung',
	'Details_For_Topic' => 'Bewertungsdetails f�r&nbsp;&raquo;&nbsp;<b>%s</b>', //%s = topic title
	'Or_Someone_From_IP' => '(IP gespeichert)', // makes it smaller for smaller res screens
	'Disable_Rating_ON' => 'Bewertungen in diesem Beitrag deaktivieren',
	'Summary' => 'Bewertungen des Themas: ',
	'Topic_Rating_Details' => 'Themenbewertunsgdetails',

	'Anonymous' => 'Gast',
	'All_Forums' => 'Alle Foren',

	'Max_Rate' => 'Max Bewertung',
	'User_Rate' => 'Benutzerwertung',
	'Rate_Date' => 'Bewertungsdatum',
	'Rate_Time' => 'Bewertungszeit',
	'Rate_Order' => 'Bewertungsnummer',

	'No_Topics_Rated' => 'Es wurden noch keine Themen bewertet',
	'Top_Topics' => 'Die %d besten Themen', //%d = number of topics
	'Top_Topics_For_Forum' => 'Top %d Bewerteten Themen f�r %s', //%d = number of topics, %s is forum name
	'For_Forum' => 'Nur %s', //%s = forum name
	'Last_Rated' => 'Zuletzte bewertet',
	'Number_of_Rates' => '# Bewertungen',
	'Rating' => 'Bewertung',
	'Min' => 'Min',
	'Max' => 'Max',
	'Min_Rating' => 'Min Bewertung',
	'By_Forum' => 'Auslistung nach Forum',
	'Details_For_Topic' => '<b>%s</b>', //%s = topic title

//admin
	'Status' => 'Status',
	'Auth_Description' => 'Berechtigungserkl�rung',
	'NONE' => 'Bewertungen sind vollst�ndig deaktiviert und es werden keine Bewertungsbalken zum Thema angezeigt.',
	'ALL' => 'Alle Benutzer k�nnen bewerten und sich die Bewertungen ansehen.',
	'REG' => 'Nur registrierte Benutzer k�nnen bewerten, aber jeder kann die Bewertungen sehen.',
	'PRIVATE' => 'Nur registrierte Benutzer k�nnen bewerten und sich die Bewertungen sehen.',
	'MOD' => 'Nur Moderatoren und Administratoren k�nnen bewerten, aber jeder kann die Bewertungen sehen.',
	'ADMIN' => 'Nur Administratoren k�nnen bewerten, aber jeder kann die Bewertungen sehen.',
	'Allow_Poster_To_Disable_Rating' => 'Erlaube dem Beitragserfasser die Bewertungsm�glichkeit zu deaktivieren',
	'Allow_Detailed_Ratings_Page' => 'Erlaube Benutzern, die detailierte Bewertungsseite anzuzeigen',
	'Max_Rating' => 'Maximale erlaubte Bewertung (1 bis MAX)',
	'Allow_Users_To_ReRate' => 'Erlaube Benutzern ihre Bewertung zu �ndern',
	'Check_Anon_IP' => '�berpr�fe die IP von G�sten beim Bewerten, um zu pr�fen, ob sie bereits abgestimmt haben',
	'Anon_Rate_ID' => 'N�chste Anonymer Benutzer Bewertungs IP.<br />Bitte �ndere dies nicht, es sei denn du weiste genau was du tust und tuen musst.<br />Einen h�heren Wert als gelistet zu setzen ist keine gute Idee',
	'Big_Page_Number' => 'Anzahl der Themen auf der separaten Bewertungsseite (wenn du sie verwendest)',
	'Main_Page_Number' => 'Anzahl der Themen die auf der Hauptseite angezeigt werden sollen (wenn du sie verwendest)',
	'Header_Page_Number' => 'Anzahl der Themen die im Header angezeigt werden sollen (wenn du sie verwendest)',
	'Mass_Update' => 'Massenupdate',
	'Purge_Old_Ratings' => 'Bereinigung alter Bewertungen',
	'Min_Rates' => 'Minimale Anzahl von Bewertungen, die ein Beitrag haben muss, um in der Bestenliste angezeigt zu werden',
	'Purge' => 'S�ubern',
	'Purged' => 'Ges�ubert',
	'Purge_Desc' => 'Entfernt Bewertungen von gel�schten Themen, die irgendwie nicht mit dem Thema gel�scht wurden.',
	'Clear' => 'Entfernen',
	'Clear_Desc' => 'Entfernt <b>ALLE</b> Bewertungen. Nutze diese Funktion nur, wenn du ungew�hnlichen �rger mit den Bewertungen hast oder <b>s�mtliche Bewertungen l�schen</b> m�chtest. Setze das H�ckchen und gib <b>YES</b> im Feld daneben ein.',
	'Complete' => 'abgeschlossen',
	'Authorization' => 'Berechtigung',
	'rate_average' => 'Durchschnittliche Bewertung',
	'rate_minimum' => 'Schlechteste Bewertung',
	'rate_maximum' => 'Beste Bewertung',
	'Number_of_Rates' => 'Anzahl der Bewertungen',
	'Rank2' => '#',
	'Rating' => 'Bewertung',

//Error Messages
	'Database_Error' => 'Datenbank Fehler',
	'Error_Dbase_Config' => 'Fehler beim Lesen oder Aktualisieren der Konfigurationsdaten.',
	'Error_Dbase_Ratings' => 'Fehler beim Lesen oder Aktualisieren der Bewertungsdaten.',
	'Error_Dbase_Auth' => 'Fehler beim Lesen oder Aktualisieren der Berechtigungsdaten.',
	'No_Topic_ID' => 'Es wurde kein Thema angegeben, zu welchem Details eingeholt werden sollen.',
	)
);

?>