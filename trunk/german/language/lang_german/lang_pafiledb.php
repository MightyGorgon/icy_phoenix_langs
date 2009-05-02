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
// Toplist
	'Toplist' => 'Top-Liste',
	'Select_list' => 'W�hle die Art der Liste aus, die angezeigt werden soll',
	'Latest_downloads' => 'Die neusten Dateien',
	'Most_downloads' => 'Popul�reste Dateien',
	'Rated_downloads' => 'Dateien mit bester Bewertung',
	'Total_new_files' => 'Alle neuen Downloads',
	'Show' => 'Zeigen',
	'One_week' => 'Eine Woche',
	'Two_week' => 'Zwei Wochen',
	'30_days' => '30 Tage',
	'New_Files' => 'Alle neuen Dateien der letzten %d Tage',
	'Last_week' => 'Letzte Woche',
	'Last_30_days' => 'Letzten 30 Tage',
	'Show_top' => 'Zeige Top',
	'Or_top' => 'oder Top',
	'Popular_num' => 'Top %d von %d Dateien in der Datenbank',
	'Popular_per' => 'Top %d %% von allen %d Dateien in der Datenbank',
	'General_Info' => 'Allgemeine Information',
	'Downloads_stats' => 'Download-Statistik',
	'Rating_stats' => 'Bewertungs-Statistik',
	'Os' => 'Betriebssystem',
	'Browsers' => 'Browser',

// Main
	'Files' => 'Dateien',
	'Viewall' => 'Zeige alle Dateien',
	'Vainfo' => 'Zeige alle Dateien in der Datenbank',
	'Jump' => 'W�hle eine Kategorie',
	'Sub_category' => 'Unterkategorie',
	'Last_file' => 'Letzte Datei',

// Sort
	'Sort' => 'Sortieren',
	'Name' => 'Name',
	'Update_time' => 'Zuletzt aktualisiert',

// Category
	'No_files' => 'Keine Dateien gefunden',
	'No_files_cat' => 'Es sind keine Dateien in dieser Kategorie.',
	'Cat_not_exist' => 'Die ausgew�hlte Kategorie existiert nicht.',
	'File_not_exist' => 'Die ausgew�hlte Datei existiert nicht.',
	'License_not_exist' => 'Die ausgew�hlte Lizenz existiert nicht.',

// File
	'File' => 'Datei',
	'Desc' => 'Beschreibung',
	'Creator' => 'Ersteller',
	'Version' => 'Version',
	'Scrsht' => 'Screenshot',
	'Docs' => 'Website',
	'Lastdl' => 'Letzter Download',
	'Never' => 'Niemals',
	'Votes' => ' Stimmen',
	'Date' => 'Datum',
	'Update_time' => 'Zuletzt aktualisiert',
	'DlRating' => 'Bewertung',
	'Dls' => ' Downloads',
	'Downloadfile' => 'Datei herunterladen',
	'File_size' => 'Dateigr��e',
	'Not_available' => 'Nicht verf�gbar',
	'Bytes' => 'Bytes',
	'KB' => 'Kilo Byte',
	'MB' => 'Mega Byte',

	'Mirrors' => 'Mirrors',
	'Mirrors_explain' => 'Hier kannst du Mirror f�r die Datei hinzuf�hen oder bearbeiten. Stelle sicher, dass du alle Informationen gepr�ft hast, denn die Datei wird zu unserer Datenbank hinzugef�gt.',
	'Click_here_mirrors' => 'Mirror hinzuf�gen',
	'Mirror_location' => 'Mirror Location',
	'Add_new_mirror' => 'Neuen Mirror hinzuf�gen',

//User Upload
	'User_upload' => 'Datei hochladen',

// License
	'License' => 'Lizenzvereinbarung',
	'Licensewarn' => 'Du musst der Lizenz zustimmen, um die Datei herunterladen zu k�nnen.',
	'Iagree' => 'Ich stimme zu',
	'Dontagree' => 'Ich stimme <i>nicht</i> zu',

// Search
	'Search' => 'Suche',
	'Search_for' => 'Suche nach',
	'Results' => 'Ergebnisse f�r',
	'No_matches' => 'Es w�rden keine �bereinstimmungen gefunden',
	'Matches' => '�hnliche wurden gefunden f�r',
	'All' => 'Alle Kategorien',
	'Choose_cat' => 'Kategorie ausw�hlen:',
	'Include_comments' => 'Kommentare einbeziehen',
	'Submiter' => 'Hochgeladen von',

// Statistics
	'Statistics' => 'Statistik',
	'Select_chart_type' => 'W�hle den Tabellentyp',
	'Bars' => 'Balken',
	'Lines' => 'Linien',
	'Area' => 'Fl�che',
	'Linepoints' => 'Punktlinie',
	'Points' => 'Punkte',
	'Chart_header' => 'Datei-Statistik - Monatlich zur Datenbank hinzugef�gte Dateien',
	'Chart_legend' => 'Dateien',
	'X_label' => 'Monate',
	'Y_label' => 'Anzahl von Dateien',

// Rate
	'Rate' => 'Datei bewerten',
	'Rerror' => 'Du hast diese Datei bereits bewertet.',
	'Rateinfo' => 'Du bist dabei die Datei <b>{filename}</b> zu bewerten.<br />Bitte w�hle eine Bewertung aus: 1 ist die schlechteste, 10 die beste Bewertung.',
	'Rconf' => 'Du hast die Datei <b>{filename}</b> mit {rate} bewertet.<br />Dies ergibt eine neue Gesamtbewertung von {newrating} f�r diese Datei.',
	'R1' => '1',
	'R2' => '2',
	'R3' => '3',
	'R4' => '4',
	'R5' => '5',
	'R6' => '6',
	'R7' => '7',
	'R8' => '8',
	'R9' => '9',
	'R10' => '10',
	'Not_rated' => 'Nicht bewertet',

// Email
	'Emailfile' => 'Datei an einen Freund schicken',
	'Emailinfo' => 'Wenn du einen Freund auf diese Datei aufmerksam machen m�chtest, kannst du das Formular ausf�llen und ihm eine E-Mail mit Informationen �ber die Datei senden.<br />Mit * markierte Felder m�ssen ausgef�llt werden, wenn nicht anders angegeben.',
	'Yname' => 'Dein Name',
	'Yemail' => 'Deine E-Mail Adresse',
	'Fname' => 'Name deines Freundes',
	'Femail' => 'E-Mail Adresse deines Freundes',
	'Esub' => 'E-Mail Betreff',
	'Etext' => 'E-Mail Text',
	'Defaultmail' => 'Ich habe gerade diese Datei gefunden und dachte, du w�rdest sie gern herunterladen. Klicke auf den Link, um zur Datei zu gelangen:',
	'Semail' => 'E-Mail senden',
	'Econf' => 'Deine E-Mail wurde erfolgreich gesendet.',

// Comments
	'Comments' => 'Kommentare', 
	'Comments_title' => 'Kommentar-Titel', 
	'Comment_subject' => 'Kommentar Betreff', 
	'Comment' => 'Kommentar', 
	'Comment_explain' => 'Verwende die Textbox oben, um uns deine Meinung �ber dieser Datei mitzuteilen.<br />', 
	'Comment_add' => 'Kommentar hinzuf�gen', 
	'Comment_delete' => 'L�schen', 
	'Comment_posted' => 'Dein Kommentar wurde erfolgreich eingetragen.', 
	'Comment_deleted' => 'Der ausgew�hlte Kommentar wurde erfolgreich gel�scht.', 
	'Comment_desc' => 'Titel', 
	'No_comments' => 'Es wurden noch keine Kommentare geschrieben.',
	'Links_are_ON' => 'Links sind <u>an</u>',
	'Links_are_OFF' => 'Links sind <u>aus</u>',
	'Images_are_ON' => 'Bilder sind <u>an</u>',
	'Images_are_OFF' => 'Bilder sind <u>aus</u>',
	'Check_message_length' => 'Kommentarl�nge pr�fen',
	'Msg_length_1' => 'Dein Kommentar ist ', 
	'Msg_length_2' => ' Zeichen lang.', 
	'Msg_length_3' => 'Du hast ', 
	'Msg_length_4' => ' Zeichen zur Verf�gung.', 
	'Msg_length_5' => 'Es sind noch ', 
	'Msg_length_6' => ' Zeichen �brig.', 


// Download
	'Directly_linked' => 'Du kannst die Datei nicht direkt von einer anderen Seite herunterladen!',

//Permission
	'Sorry_auth_view' => 'Nur %s k�nnen Dateien und Unterkategorien in dieser Kategorie sehen.',
	'Sorry_auth_file_view' => 'Nur %s k�nnen sich diese Datei in dieser Kategorie ansehen.',
	'Sorry_auth_upload' => 'Nur %s k�nnen Dateien in dieser Kategorie hochladen.',
	'Sorry_auth_download' => 'Nur %s k�nnen Dateien in dieser Kategorie herunterladen.',
	'Sorry_auth_rate' => 'Nur %s k�nnen Dateien in dieser Kategorie bewerten.',
	'Sorry_auth_view_comments' => 'Nur %s k�nnen sich Kommentare in dieser Kategorie ansehen.',
	'Sorry_auth_post_comments' => 'Nur %s k�nnen Kommentare in dieser Kategorie schreiben.',
	'Sorry_auth_edit_comments' => 'Nur %s k�nnen Kommentare in dieser Kategorie bearbeiten.',
	'Sorry_auth_delete_comments' => 'Nur %s k�nnen Kommentare in dieser Kategorie l�schen.',
// MX
	'Sorry_auth_edit' => 'Du bist nicht berechtigt, Dateien in dieser Kategorie zu bearbeiten.',
	'Sorry_auth_delete' => 'Du bist nicht berechtigt, Dateien in dieser Kategorie zu l�schen.',
	'Sorry_auth_mcp' => 'Du bist nicht berechtigt, diese Kategorie zu moderieren.',
	'Sorry_auth_approve' => 'Du bist nicht berechtigt, Dateien in dieser Kategorie freizugeben.',


// General
	'Category' => 'Kategorie',
	'Error_no_download' => 'Die ausgew�hlte Datei existiert nicht mehr.',
	'Options' => 'Optionen',
	'Click_return' => 'Klicke %shier%s, um zur vorhergehenden Seite zur�ckzukehren.',
	'Click_here' => 'Klicke hier',
	'never' => 'Keine',
	'pafiledb_disable' => 'Die Download Datenbank ist deaktiviert.',
	'jump' => 'Kategorie ausw�hlen',
	'viewall_disabled' => 'Diese Funktion wurde vom Administrator deaktiviert.',
	'New_file' => 'Neue Datei',
	'No_new_file' => 'Keine neue Datei',
	'None' => 'Keine',
	'No_file' => 'Keine Dateien',
	'View_latest_file' => 'Zeige neuste Datei',

// Toplists mx blocks
	'Recent_Public_Files' => 'Neuste Downloads',
	'Random_Public_Files' => 'Zuf�llige Downloads',
	'Toprated_Public_Files' => 'Bestbewertetste Downloads',
	'Most_Public_Files' => 'Die meisten Downloads',
	'File_Title' => 'Titel',
	'File_Desc' => 'Beschreibung',
	'Rating' => 'Bewerten',
	'Dls' => 'Heruntergeladen',

// MX Addon
	'Deletefile' => 'Datei l�schen',
	'Editfile' => 'Datei bearbeiten',
	'pa_MCP' => 'ModeratorCP',
	'Click_return_not_validated' => 'Klicke %shier%s, um zur vorhergehenden Seite zur�ckzukehren.',
	)
);

$lang['Stats_text'] = "Es sind {total_files} Dateien in {total_categories} Kategorien.<br />";
$lang['Stats_text'] .= "Es gab insgesamt {total_downloads} Downloads.<br /><br />";
$lang['Stats_text'] .= "Die neuste Datei ist <a href={u_newest_file}>{newest_file}</a>.<br />";
$lang['Stats_text'] .= "Die �lteste Datei ist <a href={u_oldest_file}>{oldest_file}</a>.<br /><br />";
$lang['Stats_text'] .= "Die durchschnittliche Datei-Bewertung liegt bei {average}/10.<br />";
$lang['Stats_text'] .= "Die Datei mit der besten Bewertung ist <a href={u_popular}>{popular}</a>, mit einer Bewertung von {most}/10.<br />";
$lang['Stats_text'] .= "Die Datei mit der schlechtesten Bewertung ist <a href={u_lpopular}>{lpopular}</a>, mit einer Bewertung von {least}/10.<br /><br />";
$lang['Stats_text'] .= "Die durchschnittliche Anzahl von Downloads pro Datei liegt bei {avg_dls}.<br />";
$lang['Stats_text'] .= "Die am meisten heruntergeladene Datei ist <a href={u_most_dl}>{most_dl}</a> mit {most_no} Downloads.<br />";
$lang['Stats_text'] .= "Die am wenigsten heruntergeladene Datei ist <a href={u_least_dl}>{least_dl}</a> mit {least_no} Downloads.<br /><br />";

?>