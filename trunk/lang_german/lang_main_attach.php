<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main_attach.php 24 2008-09-15 20:00:00Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* (c) 2002 Meik Sievertsen (Acyd Burn)
* TheSteffen, KugeLSichA, Tom
*
*/

/**
* DO NOT CHANGE
*/
if (!isset($lang) || !is_array($lang))
{
	$lang = array();
}

// Attachment Mod Main Language Variables

// Auth Related Entries






$lang['Rules_attach_can'] = 'Du <b>kannst</b> Dateien in diesem Forum anhängen.';
$lang['Rules_attach_cannot'] = 'Du <b>kannst keine</b> Dateien in diesem Forum anhängen.';
$lang['Rules_download_can'] = 'Du <b>kannst</b> Dateien in diesem Forum herunterladen.';
$lang['Rules_download_cannot'] = 'Du <b>kannst keine</b> Dateien in diesem Forum herunterladen.';
$lang['Sorry_auth_view_attach'] = 'Du bist leider nicht autorisiert, diesen Anhang anzuzeigen oder herunterzuladen.';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Beschreibung'; // wird im ACP auch verwendet...
$lang['Downloaded'] = 'Heruntergeladen';
$lang['Download'] = 'Download'; // diese Sprach-Variable ist auch in der lang_admin.php definiert, aber wir können sie nicht von der Haupt Sprach Datei erreichen
$lang['Filesize'] = 'Dateigröße';
$lang['Viewed'] = 'Angesehen';
$lang['Download_number'] = '%d mal'; // ersetzt %d mit Zählung
$lang['Extension_disabled_after_posting'] = 'Die Erweiterung <b>%s</b> wurde vom Administrator deaktiviert. Aus diesem Grund wird der Anhang nicht angezeigt.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Attachment Posting Kontrollzentrum';
$lang['Attach_posting_cp_explain'] = 'Wenn du auf &quot;Anhang hinzufügen&quot; klickst, kannst du in der erscheinenden Box Anhänge hinzufügen.<br /> Wenn du auf &quot;Bereits angehängte Dateien&qout; klickst, siehst du eine Liste mit bereits angehängte Dateien und kannst diese bearbeiten.<br />Wenn du einen Anhang ersetzen möchtes (neuere Version hochladen), musst du beide Links anklicken. Füge den Anhang wie immer ein, aber klicke nicht auf &quot;Anhang hinzufügen&quot; sondern klicke bei dem zu aktualisierenden Anhang auf &quot;<b>Neue Version hochladen</b>&quot;';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Anhang hinzufügen';
$lang['Add_attachment_title'] = 'Einen Anhang hinzufügen';
$lang['Add_attachment_explain'] = 'Wenn du keinen Anhang in deinen Beitrag einfügen möchtest, lasse diese Felder bitte leer.';
$lang['File_name'] = 'Dateiname';
$lang['File_comment'] = 'Datei-Kommentar';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Bereits angehängte Dateien';
$lang['Options'] = 'Optionen';
$lang['Update_comment'] = 'Kommentar aktualisieren';
$lang['Delete_attachments'] = 'Anhänge löschen';
$lang['Delete_attachment'] = 'Anhang löschen';
$lang['Delete_thumbnail'] = 'Vorschaubild löschen';
$lang['Upload_new_version'] = 'Neue Version hochladen';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s ist ein ungültiger Dateiname.'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'Der Anhang ist zu groß.<br />Die maximale in PHP definierte Dateigröße konnte nicht erkannt werden.<br />Der Attachment Mod ist nicht in der Lage, die in <i>php.ini</i> definierte maximale Upload-Größe zu erkennen.';
$lang['Attachment_php_size_overrun'] = 'Der Anhang ist zu groß.<br />Maximale Upload-Größe: %d MB.<br />Bitte beachte, dass diese Größe in der Datei <i>php.ini</i> definiert ist. Das bedeutet, dass der Wert von PHP gesetzt ist und vom Attachment Mod nicht überschireben werden kann.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'Die Erweiterung %s ist nicht erlaubt'; // replace %s with extension (e.g. .php)
$lang['Disallowed_extension_within_forum'] = 'Du darfst keine Dateien mit der Erweiterung <b>%s</b> in diesem Forum hochladen.'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'Der Anhang ist zu groß.<br />Maximale Größe: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Die maximale Größe für alle Anhänge wurde erreicht. Du kannst keine weiteren Dateien mehr hochladen. Bitte kontaktiere den Administrator, wenn du Fragen hast.';
$lang['Too_many_attachments'] = 'Der Anhang konnte nicht hinzugefügt werden, da die maximale Anzahl von %d Anhängen für diesen Beitrag erreicht ist.'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'Das angehängte Bild muss in der Breite kleiner als %d Pixel und in der Höhe kleiner als %d Pixel sein.';
$lang['General_upload_error'] = 'Upload Fehler: Der Anhang konnte nicht nach <b>%s</b> hochgeladen werden.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Du musst Werte in die \'Einen Anhang hinzufügen\' Box eingeben.';
$lang['Error_missing_old_entry'] = 'Anhang konnte nicht aktualisiert werden, Eintrag für den Anhang nicht gefunden';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Die maximale Größe für alle Anhänge in deinem Ordner für Private Nachrichten wurde erreicht. Bitte lösche einige deiner empfangenen/gesendeten Anhänge.';
$lang['Attach_quota_receiver_pm_reached'] = 'Die maximale Größe für alle Anhänge im Ordner für Private Nachrichten von <b>%s</b> wurde erreicht. Bitte informiere ihn/sie darüber, oder warte, bis er/sie einige Anhänge gelöscht hat.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Du hast keinen Anhang zum herunterladen oder ansehen ausgewählt.';
$lang['Error_no_attachment'] = 'Der ausgewählte Anhang existiert nicht mehr.';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Bist du sicher, dass du die ausgewählten Anhänge löschen möchtest?';
$lang['Deleted_attachments'] = 'Die ausgewählten Anhänge wurden gelöscht.';
$lang['Error_deleted_attachments'] = 'Die Anhänge konnten nicht gelöscht werden.';
$lang['Confirm_delete_pm_attachments'] = 'Bist du sicher, dass du alle Anhänge in dieser PN löschen möchtest?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'Datei-Anhänge sind deaktiviert.';

$lang['Directory_does_not_exist'] = 'Das Verzeichnis \'%s\' existiert nicht oder konnte nicht gefunden werden.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Bitte überprüfe, ob \'%s\' ein Verzeichnis ist.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'In das Verzeichnis \'%s\' kann nicht geschrieben werden. Du musst das Verzeichnis erstellen und die Rechte mit <i>chmod</i> auf 777 setzen (oder den owner in deinen httpd-server owner ändern) um Dateien hochzuladen.<br />Wenn du nur einfachen ftp-Zugang hast, ändere die \'Attribute\' des Verzeichnisses in <b>rwxrwxrwx</b>.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Keine Verbindung zum FTP-Server: \'%s\'. Bitte überprüfe deine FTP-Einstellungen.';
$lang['Ftp_error_login'] = 'Anmeldung an FTP-Server fehlgeschlagen. Der Benutzername \'%s\' oder das Passwort ist falsch. Bitte überprüfe deine FTP-Einstellungen.';
$lang['Ftp_error_path'] = 'Kein Zugriff auf das FTP-Verzeichnis \'%s\'. Bitte überprüfe deine FTP-Einstellungen.';
$lang['Ftp_error_upload'] = 'Hochladen von Dateien in das FTP-Verzeichnis \'%s\' fehlgeschlagen. Bitte überprüfe deine FTP-Einstellungen.';
$lang['Ftp_error_delete'] = 'Löschen von Dateien im FTP-Verzeichnis \'%s\' fehlgeschlagen. Bitte überprüfe deine FTP-Einstellungen.<br />Another reason for this error could be the non-existence of the Attachment, please check this first in Shadow Attachments.';
$lang['Ftp_error_pasv_mode'] = 'Aktivieren/Deaktivieren des FTP Passive Mode fehlgeschlagen';

// Attach Rules Window
$lang['Rules_page'] = 'Dateianhänge-Regeln';
$lang['Attach_rules_title'] = 'Erlaubte Erweiterungsgruppen und deren Größen';
$lang['Group_rule_header'] = '%s -> Maximale Upload Größe: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Erlaubte Erweiterungen und Größen';
$lang['Note_user_empty_group_permissions'] = 'Hinweis:<br />Dir ist es normalerweise gestattet, Dateien in diesem Forum anzuhängen, <br />da es aber keiner Extension Group gestattet ist, hier angehängt zu werden,<br />kannst du nichts anhängen. Wenn du es versuchst, <br />wirst du eine Fehlermeldung erhalten.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Upload Quota';
$lang['Pm_quota'] = 'PN Quota';
$lang['User_upload_quota_reached'] = 'Du hast das maximale Upload Quota Limit von %d %s erreicht.'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Benutzer ACP';
$lang['UACP'] = 'Benutzer-Anhang-Kontrollzentrum';
$lang['User_uploaded_profile'] = 'Hochgeladen: %s';
$lang['User_quota_profile'] = 'Quota: %s';
$lang['Upload_percent_profile'] = '%d%% vom Gesamten';

// Common Variables
$lang['Bytes'] = 'Bytes';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Suche Anhänge';
$lang['Test_settings'] = 'Einstellungen Testen';
$lang['Not_assigned'] = 'Nicht zugewiesen';
$lang['No_file_comment_available'] = 'Kein Dateikommentar verfügbar';
$lang['Attachbox_limit'] = 'Deine Anhang-Box ist zu %d%% voll';
$lang['No_quota_limit'] = 'kein Quota Limit';
$lang['Unlimited'] = 'Unbegrenzt';

?>