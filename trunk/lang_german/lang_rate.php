<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_rate.php 24 2008-09-15 20:00:00Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Nivisec.com (support@nivisec.com)
* TheSteffen, KugeLSichA, Tom
*
*/

/* NOTES */
/* This was just thrown together from the old version, some of these might
** not be used anymore, but I don't have the time to go through it. */

/* If you are translating this, please send me the translation */

$lang['Already_Rated'] = 'Deine Wertung: <b>%d</b>'; //%d = their rate
$lang['Rate_Stats'] = '<b>%.2f</b>'; //%.2f = average, %d = min, %d = max, %d # of ratings
$lang['Rate'] = 'Bewerten';
$lang['Choose_Rating'] = 'Wertung auswählen';
$lang['Topic_Rated'] = 'Das Thema wurde bewertet.';
$lang['Anon_Rate_Disabled'] = 'Gästen ist es nicht erlaubt, Themen zu bewerten.';
$lang['Not_Authorized_To_Rate'] = 'Du bist nicht berechtigt, dieses Thema zu bewerten.';
$lang['Change_Rating'] = 'Bewertung ändern';
$lang['View_Details'] = '<a href="%s" title="Details anzeigen">Detalierte Informationen anzeigen</a>'; //%s = detailed URL
$lang['View_Details_2'] = '<a href="%s" title="Details anzeigen">Detalierte Informationen anzeigen</a>'; //%s = detailed URL
$lang['Username_Gave_Rate_of_Max'] = '<b>%s</b> bewertete dieses Thema <b>%d</b> von möglichen <b>%d</b> am %s.'; //%s = username, %d = user rate, %d = max rate, %s = date with create_date()
$lang['Detailed_Rating'] = 'Detailierte Bewertung';
$lang['Details_For_Topic'] = 'Bewertungsdetails für&nbsp;&raquo;&nbsp;<b>%s</b>'; //%s = topic title
$lang['Or_Someone_From_IP'] = '(IP gespeichert)'; // makes it smaller for smaller res screens
$lang['Disable_Rating_ON'] = 'Bewertungen in diesem Beitrag deaktivieren';
$lang['Summary'] = 'Bewertungen des Themas: ';
$lang['Topic_Rating_Details'] = 'Themenbewertunsgdetails';

$lang['Anonymous'] = 'Gast';
$lang['All_Forums'] = 'Alle Foren';

$lang['Max_Rate'] = 'Max Bewertung';
$lang['User_Rate'] = 'Benutzerwertung';
$lang['Rate_Date'] = 'Bewertungsdatum';
$lang['Rate_Time'] = 'Bewertungszeit';
$lang['Rate_Order']	= 'Bewertungsnummer';

$lang['No_Topics_Rated'] = 'Es wurden noch keine Themen bewertet';
$lang['Top_Topics'] = 'Die %d besten Themen'; //%d = number of topics
$lang['Top_Topics_For_Forum'] = 'Top %d Bewerteten Themen für %s'; //%d = number of topics, %s is forum name
$lang['For_Forum'] = 'Nur %s'; //%s = forum name
$lang['Last_Rated'] = 'Zuletzte bewertet';
$lang['Number_of_Rates'] = '# Bewertungen';
$lang['Rating'] = 'Bewertung';
$lang['Min'] = 'Min';
$lang['Max'] = 'Max';
$lang['Min_Rating'] = 'Min Bewertung';
$lang['By_Forum'] = 'Auslistung nach Forum';
$lang['Details_For_Topic'] = '<b>%s</b>'; //%s = topic title

//admin
$lang['Status'] = 'Status';
$lang['Auth_Description'] = 'Berechtigungserklärung';
$lang['NONE'] = 'Bewertungen sind vollständig deaktiviert und es werden keine Bewertungsbalken zum Thema angezeigt.';
$lang['ALL'] = 'Alle Benutzer können bewerten und sich die Bewertungen ansehen.';
$lang['REG'] = 'Nur registrierte Benutzer können bewerten, aber jeder kann die Bewertungen sehen.';
$lang['PRIVATE'] = 'Nur registrierte Benutzer können bewerten und sich die Bewertungen sehen.';
$lang['MOD'] = 'Nur Moderatoren und Administratoren können bewerten, aber jeder kann die Bewertungen sehen.';
$lang['ADMIN'] = 'Nur Administratoren können bewerten, aber jeder kann die Bewertungen sehen.';
$lang['Allow_Poster_To_Disable_Rating'] = 'Erlaube dem Beitragserfasser die Bewertungsmöglichkeit zu deaktivieren';
$lang['Allow_Detailed_Ratings_Page'] = 'Erlaube Benutzern, die detailierte Bewertungsseite anzuzeigen';
$lang['Max_Rating'] = 'Maximale erlaubte Bewertung (1 bis MAX)';
$lang['Allow_Users_To_ReRate'] = 'Erlaube Benutzern ihre Bewertung zu ändern';
$lang['Check_Anon_IP'] = 'Überprüfe die IP von Gästen beim Bewerten, um zu prüfen, ob sie bereits abgestimmt haben';
$lang['Anon_Rate_ID'] = 'Nächste Anonymer Benutzer Bewertungs IP.<br />Bitte ändere dies nicht, es sei denn du weiste genau was du tust und tuen musst.<br />Einen höheren Wert als gelistet zu setzen ist keine gute Idee';
$lang['Big_Page_Number'] = 'Anzahl der Themen auf der separaten Bewertungsseite (wenn du sie verwendest)';
$lang['Main_Page_Number'] = 'Anzahl der Themen die auf der Hauptseite angezeigt werden sollen (wenn du sie verwendest)';
$lang['Header_Page_Number'] = 'Anzahl der Themen die im Header angezeigt werden sollen (wenn du sie verwendest)';
$lang['Mass_Update'] = 'Massenupdate';
$lang['Purge_Old_Ratings'] = 'Bereinigung alter Bewertungen';
$lang['Min_Rates'] = 'Minimale Anzahl von Bewertungen, die ein Beitrag haben muss, um in der Bestenliste angezeigt zu werden';
$lang['Purge'] = 'Säubern';
$lang['Purged'] = 'Gesäubert';
$lang['Purge_Desc'] = 'Entfernt Bewertungen von gelöschten Themen, die irgendwie nicht mit dem Thema gelöscht wurden.';
$lang['Clear'] = 'Entfernen';
$lang['Clear_Desc'] = 'Entfernt <b>ALLE</b> Bewertungen. Nutze diese Funktion nur, wenn du ungewöhnlichen Ärger mit den Bewertungen hast oder <b>sämtliche Bewertungen löschen</b> möchtest. Setze das Häckchen und gib <b>YES</b> im Feld daneben ein.';
$lang['Complete'] = 'abgeschlossen';
$lang['Authorization'] = 'Berechtigung';
$lang['rate_average'] = 'Durchschnittliche Bewertung';
$lang['rate_minimum'] = 'Schlechteste Bewertung';
$lang['rate_maximum'] = 'Beste Bewertung';
$lang['Number_of_Rates'] = 'Anzahl der Bewertungen';
$lang['Rank2'] = '#';
$lang['Rating'] = 'Bewertung';

//Error Messages
$lang['Database_Error'] = 'Datenbank Fehler';
$lang['Error_Dbase_Config'] = 'Fehler beim Lesen oder Aktualisieren der Konfigurationsdaten.';
$lang['Error_Dbase_Ratings'] = 'Fehler beim Lesen oder Aktualisieren der Bewertungsdaten.';
$lang['Error_Dbase_Auth'] = 'Fehler beim Lesen oder Aktualisieren der Berechtigungsdaten.';
$lang['No_Topic_ID'] = 'Es wurde kein Thema angegeben, zu welchem Details eingeholt werden sollen.';

?>