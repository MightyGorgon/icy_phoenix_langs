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
// Categories
	'Cat_manage_title' => 'Kategorie Verwaltung',
	'File_manage_title' => 'Datei Verwaltung',
	'All_files' => 'Alle Dateien',
	'Approved_files' => 'Ungepr�fte Dateien',
	'Broken_files' => 'Defekte Dateien',
	'File_cat' => 'Datei in Kategorie',
	'Maintenance' => 'Dateipflege',
	'Approve' => 'Erlaubt',
	'Unapprove' => 'Nicht erlaubt',
	'File_mode' => 'Anzeige',
	'Approve_selected' => 'Erlaube ausgew�hlte',
	'Unapprove_selected' => 'Verbiete ausgew�hlte',
	'Delete_selected' => 'L�sche ausgew�hlte',
	'No_file' => 'Es gibt keine Dateien',
	'Acat' => 'Kategorie: Hinzuf�gen',
	'Ecat' => 'Kategorie: Bearbeiten',
	'Dcat' => 'Kategorie: L�schen',
	'Rcat' => 'Kategorie: Umstellen',
	'Cat_Permissions' => 'Kategorie Befugnisse',
	'User_Permissions' => 'Benutzer Befugnisse',
	'Group_Permissions' => 'Gruppen Befugnisse',
	'User_Global_Permissions' => 'Globale Benutzer Befugnisse',
	'Group_Global_Permissions' => 'Globale Gruppen Befugnisse',
	'Acattitle' => 'Kategorie hinzuf�gen', 
	'Ecattitle' => 'Kategorie bearbeiten', 
	'Dcattitle' => 'Kategorie l�schen', 
	'Rcattitle' => 'Kategorien reorganisieren', 
	'Catexplain' => 'In der Kategorie-Verwaltung kannst du Kategorien hinzuf�gen, bearbeiten, l�schen und auch neu sortieren. Um Dateien zur Datenbank hinzuf�gen zu k�nnen, muss mindestens eine Kategorie erstellt worden sein. Du kannst einen unteren Link ausw�hlen, und die Kategorien zu verwalten.', 
	'Rcatexplain' => 'Du kannst die Kategorien umstellen, um die Position zu �ndern, an der sie in der Hauptseite dargestellt werden. Um die Darstellung der Kategorien zu �ndern, �ndere einfach die Nummern in die gew�nschte Reihenfolge. 1 wird als erstes angezeigt, 2 als zweites, usw. Das bezieht sich nicht auf Unterkategorien.',
	'Catadded' => 'Die neue Kategorie wurde erfolgreich hinzugef�gt',
	'Catname' => 'Name der Kategorie',
	'Catnameinfo' => 'Hier wird der Name der Kategorie angegeben.',
	'Catdesc' => 'Kategorie-Beschreibung',
	'Catdescinfo' => 'Dies ist eine Beschreibung der Dateien in der Kategorie',
	'Catparent' => '�bergeordnete Kategorie',
	'Catparentinfo' => 'Wenn Sie wollen, dass diese Kategorie eine Unterkategorie wird, w�hlen Sie die Kategorie, von der es eine Unterkategorie sein soll.',
	'Allow_file' => 'Dateien hinzuf�gen erlauben',
	'Allow_file_info' => 'Wenn du nicht erlaubst das in dieser Kategorie Dateien hinzugef�gt werden k�nnen, wird diese Kategorie zu einer �bergeordneten Kategorie und du kannst Unterkategorien f�r diese Kategorie, genau so wie im Forum, erstellen.',
	'None' => 'Keine',
	'Catedited' => 'Die ausgew�hlte Kategorie wurde erfolgreich bearbeitet',
	'Delfiles' => 'Was m�chtest du mit den Dateien in dieser Kategorie tun ?',
	'Do_cat' => 'Was m�chtest du mit den Unterkategorien in dieser Kategorie tun ?',
	'Move_to' => 'Verschieben nach',
	'Catsdeleted' => 'Die ausgew�hlten Kategorien wurden erfolgreich gel�scht',
	'Cdelerror' => 'Du hast keine zu l�schende(n) Kategorie(n) ausgew�hlt',
	'Rcatdone' => 'Die Kategorie wurden erfolgreich sortiert',

//Catgories Permission
	'View' => 'Anzeige', 
	'Read' => 'Lesen', 
	'View_file' => 'Datei anzeigen',
// MX Addon
	'Delete_file' => 'Datei l�schen',
	'Edit_file' => 'Datei bearbeiten',
// End
	'Upload' => 'Datei hochladen', 
	'Download_file' => 'Datei downloaden', 
	'Rate' => 'Bewertung', 
	'View_comment' => 'Kommentare zeigen', 
	'Post_comment' => 'Kommentare senden', 
	'Edit_comment' => 'Kommentare �ndern', 
	'Delete_comment' => 'Kommentare l�schen', 
	'Category_auth_updated' => 'Kategorie Befugnisse aktualisiert',
	'Click_return_catauth' => 'Klicke %shier%s, um zu den Kategorie Befugnissen zur�ckzukehren.',
	'Auth_Control_Category' => 'Kategorie Befugnis Kontrolle', 
	'Category_auth_explain' => 'Hier kannst du die Zugriffslevel jeder Kategorie bearbeiten. Bedenke das �nderungen des Zugriffslevels der Kategorien bestimmen, welche Benutzer verschiedene Dinge ausf�hren k�nnen.',
	'Select_a_Category' => 'W�hle eine Kategorie',
	'Look_up_Category' => 'Kategorie anzeigen',
	'Category' => 'Kategorie',
	'Auth_Control_Category' => 'Kategorie Befugnis Kontrolle',

	'Category_ALL' => 'ALL',
	'Category_REG' => 'REG',
	'Category_PRIVATE' => 'PRIVATE',
	'Category_MOD' => 'MOD',
	'Category_ADMIN' => 'ADMIN',

// Configuration
	'Settings' => 'Konfiguration', 
	'Settingstitle' => 'Download Konfiguration', 
	'Settingsexplain' => 'Auf dieser Seite k�nnen alle Allgemeinen Download Einstellungen ge�ndert werden.',
	'Dbname' => 'Name der Datenbank',
	'Dbnameinfo' => 'Das ist der Name der Datenbank, z.B. \'Download Index\'',
	'Sitename' => 'Name der Seite',
	'Sitenameinfo' => 'Das ist der Name der Seite, der in der Navigation dargestellt wird, wie z.B. \'Home\'',
	'Dburl' => 'Datenbank URL',
	'Dburlinfo' => 'Das ist die URL zum Verzeichnis, in dem das hier installiert ist',
	'Hpurl' => 'Homepage URL',
	'Hpurlinfo' => 'Das ist die URL zu deinem Portal oder Deiner Homepage',
	'Topnum' => 'Anzahl Topfiles',
	'Topnuminfo' => 'Hier wird eingestellt, wieviele Dateien in den Top X Downloaded Files dargestellt werden sollen',
	'Nfdays' => 'Anzahl Tage f�r Neue Datei',
	'Nfdaysinfo' => 'Hier wird eingestellt, wie viele Tage eine Datei mit dem \'New File\' Icon dargestellt werden soll. Wird hier 5 eingestellt, haben alle Dateien, die in den letzten 5 Tagen hinzugef�gt wurden das \'New File\' Icon',
	'Showva' => 'Zeige \'Alle Dateien anzeigen\'',
	'Showvainfo' => 'W�hle, ob die Kategorie \'Alle Dateien anzeigen\' zusammen mit den Kategorien auf der Hauptseite angezeigt werden soll oder nicht',
	'Php_template' => 'PHP in Templates',
	'Php_template_info' => 'Das erlaubt die direkte Verwendung von PHP in den Template Dateien',
	'Dbdl' => 'Downloads deaktivieren',
	'Dbdlinfo' => 'Das macht die Download-Datenbank f�r Benutzer unzug�nglich. Diese Option sollte gew�hlt werden, wenn man Ver�nderungen an der Datenbank vornimmt. Nur Admins k�nnen die Datenbank sehen',
	'Isdisabled' => 'Die Download Datenbak ist momentan geschlossen, bitte versuche es sp�ter noch einmal.',
	'Com_settings' => 'Kommentar Einstellungen',
	'Com_allowh' => 'Erlaube HTML',
	'Com_allowb' => 'Erlaube BBCode',
	'Com_allows' => 'Erlaube Smilies',
	'Com_allowl' => 'Erlaube Links',
	'Com_messagel' => 'Default \'Keine Links\' Nachricht',
	'Com_messagel_info' => 'Wenn keine Links erlaubt sind, wird stattdessen diese Nachricht angezeigt',
	'Com_allowi' => 'Erlaube Bilder',
	'Com_messagei' => 'Default \'Keine Bilder\' Nachricht',
	'Com_messagei_info' => 'Wenn keine Bilder erlaubt sind, wird stattdessen diese Nachricht angezeigt',
	'Max_char' => 'Maximale Anzahl Zeichen',
	'Max_char_info' => 'Sollte jemand einen Kommentar schreiben, der mehr als die eingestellte Anzahl Zeichen enth�lt, wird eine Fehlermeldung dargestellt (Kommentar einschr�nken).',
	'Settings_changed' => 'Deine Einstellungen wurden erfolgreich aktualisiert',
	'File_per_page' => 'Anzahl Dateien pro Seite',
	'File_per_page_info' => 'Hier kannst du die Anzahl der Dateien pro Seite einstellen, wenn du hier keine Angabe machst, werden 20 Dateien pro Seite angezeigt.',
	'Hotlink_prevent' => 'Schutz vor Hotlinking',
	'Hotlinl_prevent_info' => 'Stelle hier ja ein, wenn du keine Hotlinks auf die Dateien erlaubst',
	'Hotlink_allowed' => 'Erlaubte Domains f�r Hotlinks',
	'Hotlink_allowed_info' => 'Erlaubte Domains f�r Hotlinks (durch Komma getrennt), z.B. www.phpbb.com, www.icyphoenix.com',
	'Default_sort_method' => 'Standard Sortier Methode',
	'Default_sort_order' => 'Standard Sortier Richtung',
	'Max_filesize' => 'Maximale Dateigr��e',
	'Max_filesize_explain' => 'Maximale Gr��e der Dateien. Ein Wert von 0 bedeutet \'kein Limit\'. Diese Einstellung ist durch die Server Konfiguration beschr�nkt. Wenn also z.B. in der PHP-Konfiguration ein Maximum von 2 MB erlaubt ist, kann das Limit durch diesen Eintrag nicht erh�ht werden.',
	'Upload_directory' => 'Upload Verzeichnis',
	'Upload_directory_explain' => 'Gib hier den relativen Pfad aus Sicht des Icy Phoenix Verzeichnisses zum Upload Verzeichnis an. Gib z.B. \'downloads/\' an, wenn dein Icy Phoenix Verzeichnis http://www.yourdomain.com/icyphoenix ist und das Verzeichnis f�r Uploads sich unter http://www.yourdomain.com/icyphoenix/downloads befindet.',
	'Screenshots_directory' => 'Screenshots Verzeichnis',
	'Screenshots_directory_explain' => 'Gib hier den relativen Pfad aus Sicht des Icy Phoenix Verzeichnisses zum Screenshots Upload Verzeichnis an. Gib z.B. \'files/screenshots/\' an, wenn dein Icy Phoenix Verzeichnis http://www.yourdomain.com/icyphoenix ist und das Verzeichnis f�r Screenshots Uploads sich unter http://www.yourdomain.com/icyphoenix/files/screenshots befindet.',
	'Forbidden_extensions' => 'Verbotene Erweiterungen',
	'Forbidden_extensions_explain' => 'Hier kannst du die verbotenen Erweiterungen hinzuf�gen oder l�schen. Trenne jede Erweiterung durch ein Komma.',
	'Permission_settings' => 'Befugniss Einstellungen',
	'Auth_search' => 'Such Befugnisse',
	'Auth_search_explain' => 'Erlaube die Suche f�r spezifische Benutzer',
	'Auth_stats' => 'Statistik Befugnisse',
	'Auth_stats_explain' => 'Erlaube die Statistik f�r spezifische Benutzer',
	'Auth_toplist' => 'Topliste Befugnisse',
	'Auth_toplist_explain' => 'Erlaube die Topliste f�r spezifische Benutzer',
	'Auth_viewall' => 'Viewall Befugnisse',
	'Auth_viewall_explain' => 'Erlaube die Viewall-Funktion f�r spezifische Benutzer',
	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',


// Custom Field
	'Afield' => 'Eigenes Feld: Einf�gen', 
	'Efield' => 'Eigenes Feld: �ndern', 
	'Dfield' => 'Eigenes Feld: L�schen', 
	'Mfieldtitle' => 'Eigene Felder',
	'Afieldtitle' => 'Feld einf�gen', 
	'Efieldtitle' => 'Feld �ndern', 
	'Dfieldtitle' => 'Feld l�schen', 
	'Fieldexplain' => 'Du kannst das Eigene Feld Management verwenden, um eigene Felder hinzuzuf�gen, zu l�schen und zu bearbeiten. Du kannst eigene Felder verwenden, um mehr Informationen zu den Dateien hinzuzuf�gen. Wenn du also Beispielsweise ein Feld haben m�chtest, in dem die Dateigr��e dargestellt werden soll, dall lege es hier an und dann kannst du sp�ter in der Dateiverwaltung diesen Wert eingeben.',
	'Fieldname' => 'Feld Name',
	'Fieldnameinfo' => 'Das ist der Name des Feldes, z.B. \'Dateigr��e\'',
	'Fielddesc' => 'Feld Beschreibung',
	'Fielddescinfo' => 'Das ist eine Beschreibung des Feldes, z.B. \'Dateigr��e in Megabyte\'',
	'Fieldadded' => 'Das eigene Feld wurde erfolgreich hinzugef�gt',
	'Fieldedited' => 'Das ausgew�hlte eigene Feld wurde erfolgreich bearbeitet',
	'Dfielderror' => 'Du hast keine zu l�schenden Felder ausgew�hlt',
	'Fieldsdel' => 'Die ausgew�hlten eigenen Felder wurden erfolgreich gel�scht',

	'Field_data' => 'Optionen',
	'Field_data_info' => 'Gib die Optionen an, aus denen der Benutzer w�hlen kann. Trenne jede Option durch eine neue Zeile (carriage return).',
	'Field_regex' => 'Regul�rer Ausdruck',
	'Field_regex_info' => 'Du k�nntest das Eingabe-Feld verwenden, um einen Regul�ren Ausdruck zu bestimmen %s(PCRE)%s.',
	'Field_order' => 'Anzeige Ausrichtung',

// File
	'Afile' => 'Datei: hinzuf�gen',
	'Efile' => 'Datei: bearbeiten',
	'Dfile' => 'Datei: l�schen',
	'Afiletitle' => 'Datei hinzuf�gen',
	'Efiletitle' => 'Datei bearbeiten',
	'Dfiletitle' => 'Datei l�schen',
	'Fileexplain' => 'Du kannst in der Dateiverwaltung Dateien hinzuf�gen, Bearbeiten oder L�schen.',
	'Upload' => 'Datei uploaden',
	'Uploadinfo' => 'Diese Datei uploaden',
	'Uploaderror' => 'Diese Datei existiert bereits. Bitte benenne die Datei um und versuche es noch einmal.',
	'Uploaddone' => 'Diese Datei wurde erfolgreich upgeloadet. Die URL zur Datei lautet',
	'Uploaddone2' => 'Klicke hier um diese URL in das Download URL Feld zu platzieren.',
	'Upload_do_done' => 'Upload Erfolgreich',
	'Upload_do_not' => 'nicht hochgeladen',
	'Upload_do_exist' => 'Datei existiert',
	'Filename' => 'Dateiname',
	'Filenameinfo' => 'Das ist der Name der Datei, die hinzugef�gt wird, wie z.B. \'Mein Photo.\'',
	'Filesd' => 'Kurze Beschreibung',
	'Filesdinfo' => 'Das ist die kurze Beschreibung der Datei. Diese wird auf der Seite innerhalb der Kategorie angezeigt, auf denen alle Dateien abgebildet sind, daher sollte die Beschreibung kurz sein',
	'Fileld' => 'Lange Beschreibung',
	'Fileldinfo' => 'Das ist die l�ngere Beschreibung der Datei. Diese wird auf der Beschreibungsseite der Datei angezeigt, deshalb kann die Beschreibung l�nger sein',
	'Filecreator' => 'Ersteller/Autor',
	'Filecreatorinfo' => 'Das ist der Name des Autors der Datei.',
	'Fileversion' => 'Datei Version',
	'Fileversioninfo' => 'Das ist die Datei-Version, wie z.B. 3.0 oder 1.3 Beta',
	'Filess' => 'Screenshot URL',
	'Filessinfo' => 'Das ist die URL zum einem Screenshot der Datei. Wenn du beispielsweise einen Winamp Skin hinzuf�gst, w�rde das eine URL auf einen Screenshot des Skins sein. Du kannst hier manuell eine URL eintragen oder du kannst das Feld leer lassen und �ber den Screenshot Upload Knopf oben direkt den Screenshot hochladen.',
	'Filess_upload' => 'Upload Screenshot',
	'Filessinfo_upload' => 'Du kannst einen Screenshot hochladen, indem du auf Durchsuchen klickst',
	'Filess_link' => 'Screenshot als Link',
	'Filess_link_info' => 'Wenn du den Screenshot als Link darstellen m�chtest, stelle hier Ja ein.',
	'Filedocs' => 'Dokumentation/Handbuch URL',
	'Filedocsinfo' => 'Das ist die URL zur Dokumentation oder zum Handbuch der Datei',
	'Fileurl' => 'Datei URL',
	'Fileurlinfo' => 'Das ist die URL zur Datei die heruntergeladen wird. Du kannst hier manuell eine URL eintragen oder du kannst das Feld leer lassen und �ber den File Upload oben direkt die Datei hochladen.',
	'File_upload' => 'Datei Upload',
	'Fileinfo_upload' => 'Du kannst eine Datei hochladen, indem du auf Durchsuchen klickst',
	'Uploaded_file' => 'Datei hochgeladen',
	'Filepi' => 'Post Icon',
	'Filepiinfo' => 'Du kannst hier ein Post Icon f�r die Datei ausw�hlen. Das Post Icon wird in der Liste der Dateien neben der Datei angezeigt.',
	'Filecat' => 'Kategorie',
	'Filecatinfo' => 'Das ist die Kategorie, zu der die Datei geh�rt.',
	'Filelicense' => 'Lizenz',
	'Filelicenseinfo' => 'Das sind die Lizenzbestimmungen, denen der Benutzer zustimmen muss, bevor er die Datei herunterladen kann.',
	'Filepin' => 'Datei anpinnen',
	'Filepininfo' => 'W�hle ob die Datei angepinnt werden soll oder nicht. Angepinnte Dateien werden immer oben in der Dateiliste angezeigt.',
	'Fileadded' => 'Die neue Datei wurde erfolgreich hinzugef�gt',
// MX Addon
	'Filedeleted' => 'Die Datei wurde erfolgreich gel�scht',
// End
	'Fileedited' => 'Die ausgew�hlte Datei wurde erfolgreich bearbeitet',
	'Fderror' => 'Es wurden keine zu l�schenden Dateien ausgew�hlt',
	'Filesdeleted' => 'Die ausgew�hlten Dateien wurden erfolgreich gel�scht',
	'Filetoobig' => 'Diese Datei ist zu gross!',
	'Approved' => 'Gepr�ft',
	'Not_approved' => '(Nicht Gepr�ft)',
	'Approved_info' => 'W�hle diese Option, um die Datei f�r Benutzer verf�gbar zu machen, und ebenfalls um eine Datei freizugeben, die durch einen Benutzer hochgeladen wurde.',
	'Fchecker' => 'Datei: Wartung',
	'File_checker' => 'Datei Wartung',
	'File_checker_explain' => 'Hier kannst du eine �berpr�fung aller Dateien in der Download Datenbank und der Dateien im Download Verzeichnis durchf�hren.',
	'File_saftey' => 'Die Datei �berpr�fung wird versuchen, alle Dateien und Screenshots die momentan nicht gebraucht werden zu entfernen. Ebenfalls werden alle Datei-Eintr�ge gel�scht, zu denen die Datei nicht mehr vorhanden ist und alle Screenshots, die nicht mehr gefunden werden.<br /><br />Wenn die Dateien nicht mit <FONT COLOR="#FF0000">{html_path}</FONT> beginnen werden sie aus Sicherheitsgr�nden �bersprungen.<br /><br />Bitte stelle sicher, dass <FONT COLOR="#FF0000">{html_path}</FONT> der Pfad ist, den du f�r deine Dateien verwendest.<br /><br /><b>Achtung:</b> Es wird strengstens empfohlen, dass du ein <b><a href="' . append_sid('admin_db_utilities.' . PHP_EXT . '?perform=backup') . '" class="genmed">Backup der Datenbank</a></b> durchf�hrst.',
	'File_checker_perform' => 'Starte �berpr�fung',
	'Checker_saved' => 'Speicherplatz freigegeben',
	'Checker_sp1' => 'Pr�fe auf Eintr�ge mit fehlenden Dateien...',
	'Checker_sp2' => 'Pr�fe auf Eintr�ge mit fehlenden Screenshots...',
	'Checker_sp3' => 'L�sche nicht ben�tigte Dateien...', 
	'Filedls' => 'Download Insgesamt',
	'Addtional_field' => 'Zus�tzliches Feld',
	'File_not_found' => 'Die von Dir genannte Datei konnte nicht gefunden werden',
	'SS_not_found' => 'Der von Dir genannte Screenshot konnte nicht gefunden werden',
// License
	'Alicense' => 'Lizenz: Hinzuf�gen',
	'Elicense' => 'Lizenz: Bearbeiten',
	'Dlicense' => 'Lizenz: L�schen',
	'Alicensetitle' => 'Lizenz hinzuf�gen',
	'Elicensetitle' => 'Lizenz bearbeiten',
	'Dlicensetitle' => 'Lizenz l�schen',
	'Licenseexplain' => 'Du kannst das Lizenz Management verwenden, um Lizenzbestimmungen hinzuzuf�gen, zu bearbeiten oder zu l�schen. Du kannst die Lizenz f�r eine Datei auf der Datei hinzuf�gen Seite ausw�hlen. Wenn eine Datei eine Lizenzbestimmung hat, muss der Benutzer dieser erst zustimmen, bevor er die Datei herunterladen kann.',
	'Lname' => 'Lizenz Name',
	'Ltext' => 'Lizenz Text',
	'Licenseadded' => 'Die neue Lizenzbestimmung wurde erfolgreich hinzugef�gt.',
	'Licenseedited' => 'Die gew�hlte Lizenzbestimmung wurde erfolgreich bearbeitet.',
	'Lderror' => 'Es wurden keine zu l�schenden Lizenzen ausgew�hlt.',
	'Ldeleted' => 'Die gew�hlten Lizenzbestimmungen wurden erfolgreich gel�scht.',
// MX
	'License_title' => 'Lizenz',
// ENd
	'Click_return' => 'Klicke %shier%s, um zur vorherigen Seite zur�ckzukehren.',
	'Click_return_upload' => 'Klicke %shier%s, um zur Upload-Seite zur�ckzukehren.',
	'Click_edit_permissions' => 'Klicke %shier%s, um die Befugnisse f�r diese Kategorie zu bearbeiten.',

//Java script messages and php errors
	'Cat_name_missing' => 'Bitte f�lle das Feld \'Kategorie\' Name aus',
	'Cat_conflict' => 'Du kannst keine Kategorie ohne Datei in einer Kategorie die keine Dateien erlaubt haben.',
	'Cat_id_missing' => 'Bitte w�hle eine Kategorie',
	'Missing_field' => 'Bitte f�lle alle ben�tigten Felder aus',


//Fields Types

	'Input' => 'Einzeilige Text Box',
	'Textarea' => 'Mehrzeilige Text Box',
	'Radio' => 'Einfach-Auswahl Radio Buttons',
	'Select' => 'Einfach-Auswahl Menu',
	'Select_multiple' => 'Mehrfach-Auswahl Menu',
	'Checkbox' => 'Mehrfach-Auswahl Checkbox',

// MX Addon
	'Validation_settings' => '�berpr�fung von Uploads',
	'Need_validate' => 'Uploads �berpr�fen?',
	'Validator' => 'Pr�fer',
	'PM_notify' => 'PN Benachrichtigung an den/die Pr�fer (n/a)',
	'Validator_admin_option' => 'Admin',
	'Validator_mod_option' => 'Admin und Kat-Moderator',

	'Allow_comments' => 'Kommentare aktivieren (n/a)',
	'Allow_comments_info' => 'Erlaube/Verbiete Kommentare in dieser Kategorie.',
	'Allow_ratings' => 'Erlaube Bewertungen (n/a)',
	'Allow_ratings_info' => 'Erlaube/Verbiete Bewertungen in dieser Kategorie.',

	'MCP_title' => 'Moderator Einstellungsmenu',
	'MCP_title_explain' => 'Hier k�nnen Moderatoren Dateien �berpr�fen und verwalten',

	'Fileadded_not_validated' => 'Die neue Datei wurde erfolgreich hinzugef�gt, jedoch muss jetzt noch ein Moderator (Admin) die Datei pr�fen und freigeben.',
	)
);

?>