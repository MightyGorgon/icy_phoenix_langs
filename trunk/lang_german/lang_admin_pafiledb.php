<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin_pafiledb.php 24 2008-09-15 20:00:00Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* TheSteffen, KugeLSichA, Tom
*
*/

// Categories
$lang['Cat_manage_title'] = 'Kategorie Verwaltung';
$lang['File_manage_title'] = 'Datei Verwaltung';
$lang['All_files'] = 'Alle Dateien';
$lang['Approved_files'] = 'Ungeprüfte Dateien';
$lang['Broken_files'] = 'Defekte Dateien';
$lang['File_cat'] = 'Datei in Kategorie';
$lang['Maintenance'] = 'Dateipflege';
$lang['Approve'] = 'Erlaubt';
$lang['Unapprove'] = 'Nicht erlaubt';
$lang['File_mode'] = 'Anzeige';
$lang['Approve_selected'] = 'Erlaube ausgewählte';
$lang['Unapprove_selected'] = 'Verbiete ausgewählte';
$lang['Delete_selected'] = 'Lösche ausgewählte';
$lang['No_file'] = 'Es gibt keine Dateien';
$lang['Acat'] = 'Kategorie: Hinzufügen';
$lang['Ecat'] = 'Kategorie: Bearbeiten';
$lang['Dcat'] = 'Kategorie: Löschen';
$lang['Rcat'] = 'Kategorie: Umstellen';
$lang['Cat_Permissions'] = 'Kategorie Befugnisse';
$lang['User_Permissions'] = 'Benutzer Befugnisse';
$lang['Group_Permissions'] = 'Gruppen Befugnisse';
$lang['User_Global_Permissions'] = 'Globale Benutzer Befugnisse';
$lang['Group_Global_Permissions'] = 'Globale Gruppen Befugnisse';
$lang['Acattitle'] = 'Kategorie hinzufügen'; 
$lang['Ecattitle'] = 'Kategorie bearbeiten'; 
$lang['Dcattitle'] = 'Kategorie löschen'; 
$lang['Rcattitle'] = 'Kategorien reorganisieren'; 
$lang['Catexplain'] = 'In der Kategorie-Verwaltung kannst Du Kategorien hinzufügen, bearbeiten, löschen und auch neu sortieren. Um Dateien zur Datenbank hinzufügen zu können, muss mindestens eine Kategorie erstellt worden sein. Du kannst einen unteren Link auswählen, und die Kategorien zu verwalten.'; 
$lang['Rcatexplain'] = 'Du kannst die Kategorien umstellen, um die Position zu ändern, an der sie in der Hauptseite dargestellt werden. Um die Darstellung der Kategorien zu ändern, ändere einfach die Nummern in die gewünschte Reihenfolge. 1 wird als erstes angezeigt, 2 als zweites, usw. Das bezieht sich nicht auf Unterkategorien.';
$lang['Catadded'] = 'Die neue Kategorie wurde erfolgreich hinzugefügt';
$lang['Catname'] = 'Name der Kategorie';
$lang['Catnameinfo'] = 'Hier wird der Name der Kategorie angegeben.';
$lang['Catdesc'] = 'Kategorie-Beschreibung';
$lang['Catdescinfo'] = 'Dies ist eine Beschreibung der Dateien in der Kategorie';
$lang['Catparent'] = 'Übergeordnete Kategorie';
$lang['Catparentinfo'] = 'Wenn Sie wollen, dass diese Kategorie eine Unterkategorie wird, wählen Sie die Kategorie, von der es eine Unterkategorie sein soll.';
$lang['Allow_file'] = 'Dateien hinzufügen erlauben';
$lang['Allow_file_info'] = 'If you not allow adding file to this category it will be higher level category and you can add category as a sub for this category, like in the forum.';
$lang['None'] = 'Keine';
$lang['Catedited'] = 'Die ausgewählte Kategorie wurde erfolgreich bearbeitet';
$lang['Delfiles'] = 'Was möchtest Du mit den Dateien in dieser Kategorie tun ?';
$lang['Do_cat'] = 'Was möchtest Du mit den Unterkategorien in dieser Kategorie tun ?';
$lang['Move_to'] = 'Verschieben nach';
$lang['Catsdeleted'] = 'Die ausgewählten Kategorien wurden erfolgreich gelöscht';
$lang['Cdelerror'] = 'Du hast keine zu löschende(n) Kategorie(n) ausgewählt';
$lang['Rcatdone'] = 'Die Kategorie wurden erfolgreich sortiert';

//Catgories Permission
$lang['View'] = 'Anzeige'; 
$lang['Read'] = 'Lesen'; 
$lang['View_file'] = 'Datei anzeigen';
// MX Addon
$lang['Delete_file'] = 'Datei löschen';
$lang['Edit_file'] = 'Datei bearbeiten';
// End
$lang['Upload'] = 'Datei hochladen'; 
$lang['Download_file'] = 'Datei downloaden'; 
$lang['Rate'] = 'Bewertung'; 
$lang['View_comment'] = 'Kommentare zeigen'; 
$lang['Post_comment'] = 'Kommentare senden'; 
$lang['Edit_comment'] = 'Kommentare ändern'; 
$lang['Delete_comment'] = 'Kommentare löschen'; 
$lang['Category_auth_updated'] = 'Kategorie Befugnisse aktualisiert';
$lang['Click_return_catauth'] = 'Klicke %shier%s um zu den Kategorie Befugnissen zurückzukehren';
$lang['Auth_Control_Category'] = 'Kategorie Befugnis Kontrolle'; 
$lang['Category_auth_explain'] = 'Hier kannst Du die Zugriffslevel jeder Kategorie bearbeiten. Bedenke das Änderungen des Zugriffslevels der Kategorien bestimmen, welche Benutzer verschiedene Dinge ausführen können.';
$lang['Select_a_Category'] = 'Wähle eine Kategorie';
$lang['Look_up_Category'] = 'Kategorie anzeigen';
$lang['Category'] = 'Kategorie';
$lang['Auth_Control_Category'] = 'Kategorie Befugnis Kontrolle';

$lang['Category_ALL'] = 'ALL';
$lang['Category_REG'] = 'REG';
$lang['Category_PRIVATE'] = 'PRIVATE';
$lang['Category_MOD'] = 'MOD';
$lang['Category_ADMIN'] = 'ADMIN';

// Configuration
$lang['Settings'] = 'Konfiguration'; 
$lang['Settingstitle'] = 'Download Konfiguration'; 
$lang['Settingsexplain'] = 'Auf dieser Seite können alle Allgemeinen Download Einstellungen geändert werden.';
$lang['Dbname'] = 'Name der Datenbank';
$lang['Dbnameinfo'] = 'Das ist der Name der Datenbank, z.B. \'Download Index\'';
$lang['Sitename'] = 'Name der Seite';
$lang['Sitenameinfo'] = 'Das ist der Name der Seite, der in der Navigation dargestellt wird, wie z.B. \'Home\'';
$lang['Dburl'] = 'Datenbank URL';
$lang['Dburlinfo'] = 'Das ist die URL zum Verzeichnis, in dem das hier installiert ist';
$lang['Hpurl'] = 'Homepage URL';
$lang['Hpurlinfo'] = 'Das ist die URL zu Deinem Portal oder Deiner Homepage';
$lang['Topnum'] = 'Anzahl Topfiles';
$lang['Topnuminfo'] = 'Hier wird eingestellt, wieviele Dateien in den Top X Downloaded Files dargestellt werden sollen';
$lang['Nfdays'] = 'Anzahl Tage für Neue Datei';
$lang['Nfdaysinfo'] = 'Hier wird eingestellt, wie viele Tage eine Datei mit dem \'New File\' Icon dargestellt werden soll. Wird hier 5 eingestellt, haben alle Dateien, die in den letzten 5 Tagen hinzugefügt wurden das \'New File\' Icon';
$lang['Showva'] = 'Zeige \'Alle Dateien anzeigen\'';
$lang['Showvainfo'] = 'Wähle, ob die Kategorie \'Alle Dateien anzeigen\' zusammen mit den Kategorien auf der Hauptseite angezeigt werden soll oder nicht';
$lang['Php_template'] = 'PHP in Templates';
$lang['Php_template_info'] = 'Das erlaubt die direkte Verwendung von PHP in den Template Dateien';
$lang['Dbdl'] = 'Downloads deaktivieren';
$lang['Dbdlinfo'] = 'Das macht die Download-Datenbank für Benutzer unzugänglich. Diese Option sollte gewählt werden, wenn man Veränderungen an der Datenbank vornimmt. Nur Admins können die Datenbank sehen';
$lang['Isdisabled'] = 'Die Download Datenbak ist momentan geschlossen, bitte versuche es später noch einmal.';
$lang['Com_settings'] = 'Kommentar Einstellungen';
$lang['Com_allowh'] = 'Erlaube HTML';
$lang['Com_allowb'] = 'Erlaube BBCode';
$lang['Com_allows'] = 'Erlaube Smilies';
$lang['Com_allowl'] = 'Erlaube Links';
$lang['Com_messagel'] = 'Default \'Keine Links\' Nachricht';
$lang['Com_messagel_info'] = 'Wenn keine Links erlaubt sind, wird stattdessen diese Nachricht angezeigt';
$lang['Com_allowi'] = 'Erlaube Bilder';
$lang['Com_messagei'] = 'Default \'Keine Bilder\' Nachricht';
$lang['Com_messagei_info'] = 'Wenn keine Bilder erlaubt sind, wird stattdessen diese Nachricht angezeigt';
$lang['Max_char'] = 'Maximale Anzahl Zeichen';
$lang['Max_char_info'] = 'Sollte jemand einen Kommentar schreiben, der mehr als die eingestellte Anzahl Zeichen enthält, wird eine Fehlermeldung dargestellt (Kommentar einschränken).';
$lang['Settings_changed'] = 'Deine Einstellungen wurden erfolgreich aktualisiert';
$lang['File_per_page'] = 'Anzahl Dateien pro Seite';
$lang['File_per_page_info'] = 'Hier kannst Du die Anzahl der Dateien pro Seite einstellen, wenn Du hier keine Angabe machst, werden 20 Dateien pro Seite angezeigt.';
$lang['Hotlink_prevent'] = 'Schutz vor Hotlinking';
$lang['Hotlinl_prevent_info'] = 'Stelle hier ja ein, wenn Du keine Hotlinks auf die Dateien erlaubst';
$lang['Hotlink_allowed'] = 'Erlaubte Domains für Hotlinks';
$lang['Hotlink_allowed_info'] = 'Erlaubte Domains für Hotlinks (durch Komma getrennt), z.B. www.phpbb2.de, www.forumimages.com';
$lang['Default_sort_method'] = 'Standard Sortier Methode';
$lang['Default_sort_order'] = 'Standard Sortier Richtung';
$lang['Max_filesize'] = 'Maximale Dateigrösse';
$lang['Max_filesize_explain'] = 'Maximale Grösse der Dateien. Ein Wert von 0 bedeutet \'kein Limit\'. Diese Einstellung ist durch die Server Konfiguration beschränkt. Wenn also z.B. in der PHP-Konfiguration ein Maximum von 2 MB erlaubt ist, kann das Limit durch diesen Eintrag nicht erhöht werden.';
$lang['Upload_directory'] = 'Upload Verzeichnis';
$lang['Upload_directory_explain'] = 'Gib hier den relativen Pfad aus Sicht des phpBB2 Verzeichnisses zum Upload Verzeichnis an. Gib z.B. \'pafiledb/uploads/\' an, wenn Dein phpBB2 Verzeichnis http://www.yourdomain.com/phpBB2 ist und das Verzeichnis für Uploads sich unter http://www.yourdomain.com/phpBB2/pafiledb/uploads befindet.';
$lang['Screenshots_directory'] = 'Screenshots Verzeichnis';
$lang['Screenshots_directory_explain'] = 'Gib hier den relativen Pfad aus Sicht des phpBB2 Verzeichnisses zum Screenshots Upload Verzeichnis an. Gib z.B. \'pafiledb/images/screenshots/\' an, wenn Dein phpBB2 Verzeichnis http://www.yourdomain.com/phpBB2 ist und das Verzeichnis für Screenshots Uploads sich unter http://www.yourdomain.com/phpBB2/pafiledb/images/screenshots befindet.';
$lang['Forbidden_extensions'] = 'Verbotene Erweiterungen';
$lang['Forbidden_extensions_explain'] = 'Hier kannst Du die verbotenen Erweiterungen hinzufügen oder löschen. Trenne jede Erweiterung durch ein Komma.';
$lang['Permission_settings'] = 'Befugniss Einstellungen';
$lang['Auth_search'] = 'Such Befugnisse';
$lang['Auth_search_explain'] = 'Erlaube die Suche für spezifische Benutzer';
$lang['Auth_stats'] = 'Statistik Befugnisse';
$lang['Auth_stats_explain'] = 'Erlaube die Statistik für spezifische Benutzer';
$lang['Auth_toplist'] = 'Topliste Befugnisse';
$lang['Auth_toplist_explain'] = 'Erlaube die Topliste für spezifische Benutzer';
$lang['Auth_viewall'] = 'Viewall Befugnisse';
$lang['Auth_viewall_explain'] = 'Erlaube die Viewall-Funktion für spezifische Benutzer';
$lang['Bytes'] = 'Bytes';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';


// Custom Field
$lang['Afield'] = 'Eigenes Feld: Einfügen'; 
$lang['Efield'] = 'Eigenes Feld: Ändern'; 
$lang['Dfield'] = 'Eigenes Feld: Löschen'; 
$lang['Mfieldtitle'] = 'Eigene Felder';
$lang['Afieldtitle'] = 'Feld einfügen'; 
$lang['Efieldtitle'] = 'Feld ändern'; 
$lang['Dfieldtitle'] = 'Feld löschen'; 
$lang['Fieldexplain'] = 'Du kannst das Eigene Feld Management verwenden, um eigene Felder hinzuzufügen, zu löschen und zu bearbeiten. Du kannst eigene Felder verwenden, um mehr Informationen zu den Dateien hinzuzufügen. Wenn Du also Beispielsweise ein Feld haben möchtest, in dem die Dateigrösse dargestellt werden soll, dall lege es hier an und dann kannst Du später in der Dateiverwaltung diesen Wert eingeben.';
$lang['Fieldname'] = 'Feld Name';
$lang['Fieldnameinfo'] = 'Das ist der Name des Feldes, z.B. \'Dateigrösse\'';
$lang['Fielddesc'] = 'Feld Beschreibung';
$lang['Fielddescinfo'] = 'Das ist eine Beschreibung des Feldes, z.B. \'Dateigrösse in Megabyte\'';
$lang['Fieldadded'] = 'Das eigene Feld wurde erfolgreich hinzugefügt';
$lang['Fieldedited'] = 'Das ausgewählte eigene Feld wurde erfolgreich bearbeitet';
$lang['Dfielderror'] = 'Du hast keine zu löschenden Felder ausgewählt';
$lang['Fieldsdel'] = 'Die ausgewählten eigenen Felder wurden erfolgreich gelöscht';

$lang['Field_data'] = 'Optionen';
$lang['Field_data_info'] = 'Gib die Optionen an, aus denen der Benutzer wählen kann. Trenne jede Option durch eine neue Zeile (carriage return).';
$lang['Field_regex'] = 'Regulärer Ausdruck';
$lang['Field_regex_info'] = 'Du könntest das Eingabe-Feld verwenden, um einen Regulären Ausdruck zu bestimmen %s(PCRE)%s.';
$lang['Field_order'] = 'Anzeige Ausrichtung';

// File
$lang['Afile'] = 'Datei: hinzufügen';
$lang['Efile'] = 'Datei: bearbeiten';
$lang['Dfile'] = 'Datei: löschen';
$lang['Afiletitle'] = 'Datei hinzufügen';
$lang['Efiletitle'] = 'Datei bearbeiten';
$lang['Dfiletitle'] = 'Datei löschen';
$lang['Fileexplain'] = 'Du kannst in der Dateiverwaltung Dateien hinzufügen, Bearbeiten oder Löschen.';
$lang['Upload'] = 'Datei uploaden';
$lang['Uploadinfo'] = 'Diese Datei uploaden';
$lang['Uploaderror'] = 'Diese Datei existiert bereits. Bitte benenne die Datei um und versuche es noch einmal.';
$lang['Uploaddone'] = 'Diese Datei wurde erfolgreich upgeloadet. Die URL zur Datei lautet';
$lang['Uploaddone2'] = 'Klicke hier um diese URL in das Download URL Feld zu platzieren.';
$lang['Upload_do_done'] = 'Upload Erfolgreich';
$lang['Upload_do_not'] = 'nicht hochgeladen';
$lang['Upload_do_exist'] = 'Datei existiert';
$lang['Filename'] = 'Dateiname';
$lang['Filenameinfo'] = 'Das ist der Name der Datei, die hinzugefügt wird, wie z.B. \'Mein Photo.\'';
$lang['Filesd'] = 'Kurze Beschreibung';
$lang['Filesdinfo'] = 'Das ist die kurze Beschreibung der Datei. Diese wird auf der Seite innerhalb der Kategorie angezeigt, auf denen alle Dateien abgebildet sind, daher sollte die Beschreibung kurz sein';
$lang['Fileld'] = 'Lange Beschreibung';
$lang['Fileldinfo'] = 'Das ist die längere Beschreibung der Datei. Diese wird auf der Beschreibungsseite der Datei angezeigt, deshalb kann die Beschreibung länger sein';
$lang['Filecreator'] = 'Ersteller/Autor';
$lang['Filecreatorinfo'] = 'Das ist der Name des Autors der Datei.';
$lang['Fileversion'] = 'Datei Version';
$lang['Fileversioninfo'] = 'Das ist die Datei-Version, wie z.B. 3.0 oder 1.3 Beta';
$lang['Filess'] = 'Screenshot URL';
$lang['Filessinfo'] = 'Das ist die URL zum einem Screenshot der Datei. Wenn Du beispielsweise einen Winamp Skin hinzufügst, würde das eine URL auf einen Screenshot des Skins sein. Du kannst hier manuell eine URL eintragen oder Du kannst das Feld leer lassen und über den Screenshot Upload Knopf oben direkt den Screenshot hochladen.';
$lang['Filess_upload'] = 'Upload Screenshot';
$lang['Filessinfo_upload'] = 'Du kannst einen Screenshot hochladen, indem Du auf Durchsuchen klickst';
$lang['Filess_link'] = 'Screenshot als Link';
$lang['Filess_link_info'] = 'Wenn Du den Screenshot als Link darstellen möchtest, stelle hier Ja ein.';
$lang['Filedocs'] = 'Dokumentation/Handbuch URL';
$lang['Filedocsinfo'] = 'Das ist die URL zur Dokumentation oder zum Handbuch der Datei';
$lang['Fileurl'] = 'Datei URL';
$lang['Fileurlinfo'] = 'Das ist die URL zur Datei die heruntergeladen wird. Du kannst hier manuell eine URL eintragen oder Du kannst das Feld leer lassen und über den File Upload oben direkt die Datei hochladen.';
$lang['File_upload'] = 'Datei Upload';
$lang['Fileinfo_upload'] = 'Du kannst eine Datei hochladen, indem Du auf Durchsuchen klickst';
$lang['Uploaded_file'] = 'Datei hochgeladen';
$lang['Filepi'] = 'Post Icon';
$lang['Filepiinfo'] = 'Du kannst hier ein Post Icon für die Datei auswählen. Das Post Icon wird in der Liste der Dateien neben der Datei angezeigt.';
$lang['Filecat'] = 'Kategorie';
$lang['Filecatinfo'] = 'Das ist die Kategorie, zu der die Datei gehört.';
$lang['Filelicense'] = 'Lizenz';
$lang['Filelicenseinfo'] = 'Das sind die Lizenzbestimmungen, denen der Benutzer zustimmen muss, bevor er die Datei herunterladen kann.';
$lang['Filepin'] = 'Datei anpinnen';
$lang['Filepininfo'] = 'Wähle ob die Datei angepinnt werden soll oder nicht. Angepinnte Dateien werden immer oben in der Dateiliste angezeigt.';
$lang['Fileadded'] = 'Die neue Datei wurde erfolgreich hinzugefügt';
// MX Addon
$lang['Filedeleted'] = 'Die Datei wurde erfolgreich gelöscht';
// End
$lang['Fileedited'] = 'Die ausgewählte Datei wurde erfolgreich bearbeitet';
$lang['Fderror'] = 'Es wurden keine zu löschenden Dateien ausgewählt';
$lang['Filesdeleted'] = 'Die ausgewählten Dateien wurden erfolgreich gelöscht';
$lang['Filetoobig'] = 'Diese Datei ist zu gross!';
$lang['Approved'] = 'Geprüft';
$lang['Not_approved'] = '(Nicht Geprüft)';
$lang['Approved_info'] = 'Wähle diese Option, um die Datei für Benutzer verfügbar zu machen, und ebenfalls um eine Datei freizugeben, die durch einen Benutzer hochgeladen wurde.';
$lang['Fchecker'] = 'Datei: Wartung';
$lang['File_checker'] = 'Datei Wartung';
$lang['File_checker_explain'] = 'Hier kannst Du eine Überprüfung aller Dateien in der Download Datenbank und der Dateien im Download Verzeichnis durchführen.';
$lang['File_saftey'] = 'Die Datei Überprüfung wird versuchen, alle Dateien und Screenshots die momentan nicht gebraucht werden zu entfernen. Ebenfalls werden alle Datei-Einträge gelöscht, zu denen die Datei nicht mehr vorhanden ist und alle Screenshots, die nicht mehr gefunden werden.<br /><br />Wenn die Dateien nicht mit <FONT COLOR="#FF0000">{html_path}</FONT> beginnen werden sie aus Sicherheitsgründen übersprungen.<br /><br />Bitte stelle sicher, dass <FONT COLOR="#FF0000">{html_path}</FONT> der Pfad ist, den Du für Deine Dateien verwendest.<br /><br /><b>Achtung:</b> Es wird strengstens empfohlen, dass Du ein <b><a href="' . append_sid("admin_db_utilities.php?perform=backup") . '" class="genmed">Backup der Datenbank</a></b> durchführst.';
$lang['File_checker_perform'] = 'Starte Überprüfung';
$lang['Checker_saved'] = 'Speicherplatz freigegeben';
$lang['Checker_sp1'] = 'Prüfe auf Einträge mit fehlenden Dateien...';
$lang['Checker_sp2'] = 'Prüfe auf Einträge mit fehlenden Screenshots...';
$lang['Checker_sp3'] = 'Lösche nicht benötigte Dateien...'; 
$lang['Filedls'] = 'Download Insgesamt';
$lang['Addtional_field'] = 'Zusätzliches Feld';
$lang['File_not_found'] = 'Die von Dir genannte Datei konnte nicht gefunden werden';
$lang['SS_not_found'] = 'Der von Dir genannte Screenshot konnte nicht gefunden werden';
// License
$lang['Alicense'] = 'Lizenz: Hinzufügen';
$lang['Elicense'] = 'Lizenz: Bearbeiten';
$lang['Dlicense'] = 'Lizenz: Löschen';
$lang['Alicensetitle'] = 'Lizenz hinzufügen';
$lang['Elicensetitle'] = 'Lizenz bearbeiten';
$lang['Dlicensetitle'] = 'Lizenz löschen';
$lang['Licenseexplain'] = 'Du kannst das Lizenz Management verwenden, um Lizenzbestimmungen hinzuzufügen, zu bearbeiten oder zu löschen. Du kannst die Lizenz für eine Datei auf der Datei hinzufügen Seite auswählen. Wenn eine Datei eine Lizenzbestimmung hat, muss der Benutzer dieser erst zustimmen, bevor er die Datei herunterladen kann.';
$lang['Lname'] = 'Lizenz Name';
$lang['Ltext'] = 'Lizenz Text';
$lang['Licenseadded'] = 'Die neue Lizenzbestimmung wurde erfolgreich hinzugefügt';
$lang['Licenseedited'] = 'Die gewählte Lizenzbestimmung wurde erfolgreich bearbeitet';
$lang['Lderror'] = 'Es wurden keine zu löschenden Lizenzen ausgewählt';
$lang['Ldeleted'] = 'Die gewählten Lizenzbestimmungen wurden erfolgreich gelöscht';
// MX
$lang['License_title'] = 'Lizenz';
// ENd
$lang['Click_return'] = 'Klicke %shier%s um zur vorherigen Seite zurückzukehren';
$lang['Click_edit_permissions'] = 'Klicke %shier%s um die Befugnisse für diese Kategorie zu bearbeiten';

//Java script messages and php errors
$lang['Cat_name_missing'] = 'Bitte fülle das Feld \'Kategorie\' Name aus';
$lang['Cat_conflict'] = 'Du kannst keine Kategorie ohne Datei in einer Kategorie die keine Dateien erlaubt haben';
$lang['Cat_id_missing'] = 'Bitte wähle eine Kategorie';
$lang['Missing_field'] = 'Bitte fülle alle benötigten Felder aus';


//Fields Types

$lang['Input'] = 'Einzeilige Text Box';
$lang['Textarea'] = 'Mehrzeilige Text Box';
$lang['Radio'] = 'Einfach-Auswahl Radio Buttons';
$lang['Select'] = 'Einfach-Auswahl Menu';
$lang['Select_multiple'] = 'Mehrfach-Auswahl Menu';
$lang['Checkbox'] = 'Mehrfach-Auswahl Checkbox';

// MX Addon
$lang['Validation_settings'] = 'Überprüfung von Uploads';
$lang['Need_validate'] = 'Uploads überprüfen?';
$lang['Validator'] = 'Prüfer';
$lang['PM_notify'] = 'PN Benachrichtigung an den/die Prüfer (n/a)';
$lang['Validator_admin_option'] = 'Admin';
$lang['Validator_mod_option'] = 'Admin und Kat-Moderator';

$lang['Allow_comments'] = 'Kommentare aktivieren (n/a)';
$lang['Allow_comments_info'] = 'Erlaube/Verbiete Kommentare in dieser Kategorie.';
$lang['Allow_ratings'] = 'Erlaube Bewertungen (n/a)';
$lang['Allow_ratings_info'] = 'Erlaube/Verbiete Bewertungen in dieser Kategorie.';

$lang['MCP_title'] = 'Moderator Einstellungsmenu';
$lang['MCP_title_explain'] = 'Hier können Moderatoren Dateien überprüfen und verwalten';

$lang['Fileadded_not_validated'] = 'Die neue Datei wurde erfolgreich hinzugefügt, jedoch muss jetzt noch ein Moderator (Admin) die Datei prüfen und freigeben.';

?>