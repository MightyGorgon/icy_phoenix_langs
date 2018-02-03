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
* (c) 2002 Meik Sievertsen (Acyd Burn)
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
// Auth Related Entries
/*
	'Rules_attach_can' => 'You <b>can</b> attach files in this forum',
	'Rules_attach_cannot' => 'You <b>cannot</b> attach files in this forum',
	'Rules_download_can' => 'You <b>can</b> download files in this forum',
	'Rules_download_cannot' => 'You <b>cannot</b> download files in this forum',
*/
	'Rules_attach_can' => 'Du <b>kannst</b> Dateien anhängen.',
	'Rules_attach_cannot' => 'Du <b>kannst keine</b> anhängen.',
	'Rules_download_can' => 'Du <b>kannst</b> Dateien herunterladen.',
	'Rules_download_cannot' => 'Du <b>kannst keine</b> herunterladen.',
	'Sorry_auth_view_attach' => 'Du bist leider nicht autorisiert, diesen Anhang anzusehen oder herunterzuladen.',

// Viewtopic -> Display of Attachments
	'Description' => 'Beschreibung', // wird im ACP auch verwendet...
	'Downloaded' => 'Heruntergeladen',
	'Download' => 'Download', // diese Sprach-Variable ist auch in der lang_admin.php definiert, aber wir können sie nicht von der Haupt Sprach Datei erreichen
	'Filesize' => 'Dateigröße',
	'Viewed' => 'Angesehen',
	'Download_number' => '%d mal', // ersetzt %d mit Zählung
	'Extension_disabled_after_posting' => 'Die Erweiterung <b>%s</b> wurde vom Administrator deaktiviert. Aus diesem Grund wird der Anhang nicht angezeigt.', // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
	'Attach_posting_cp' => 'Anhänge hinzufügen Kontrollzentrum',
	'Attach_posting_cp_explain' => 'Wenn du auf &quot;Einen Anhang hinzufügen&quot; klickst, kannst du in der erscheinenden Box Anhänge hinzufügen.<br /> Wenn du auf &quot;Bereits angehängte Dateien&quot; klickst, siehst du eine Liste der bereits angehängten Dateien und kannst diese bearbeiten.<br />Wenn du einen Anhang ersetzen möchtest (neuere Version hochladen), musst du beide Links anklicken. Füge den Anhang wie immer ein, aber klicke nicht auf &quot;Anhang hinzufügen&quot; sondern klicke bei dem zu aktualisierenden Anhang auf &quot;<b>Neue Version hochladen</b>&quot;',

// Posting/PM -> Posting Attachments
	'Add_attachment' => 'Anhang hinzufügen',
	'Add_attachment_title' => 'Einen Anhang hinzufügen',
	'Add_attachment_explain' => 'Wenn du keinen Anhang in deinen Beitrag einfügen möchtest, lasse diese Felder bitte leer.',
	'File_name' => 'Dateiname',
	'File_comment' => 'Datei-Kommentar',

// Posting/PM -> Posted Attachments
	'Posted_attachments' => 'Bereits angehängte Dateien',
	'Options' => 'Optionen',
	'Update_comment' => 'Kommentar aktualisieren',
	'Delete_attachments' => 'Anhänge löschen',
	'Delete_attachment' => 'Anhang löschen',
	'Delete_thumbnail' => 'Vorschaubild löschen',
	'Upload_new_version' => 'Neue Version hochladen',

// Errors -> Posting Attachments
	'Invalid_filename' => '%s ist ein ungültiger Dateiname.', // replace %s with given filename
	'Attachment_php_size_na' => 'Der Anhang ist zu groß.<br />Die maximale in PHP definierte Dateigröße konnte nicht erkannt werden.<br />Der Attachment Mod ist nicht in der Lage, die in <i>php.ini</i> definierte maximale Upload-Größe zu erkennen.',
	'Attachment_php_size_overrun' => 'Der Anhang ist zu groß.<br />Maximale Upload-Größe: %d MB.<br />Bitte beachte, dass diese Größe in der Datei <i>php.ini</i> definiert ist. Das bedeutet, dass der Wert von PHP gesetzt ist und vom Attachment Mod nicht überschrieben werden kann.', // replace %d with ini_get('upload_max_filesize')
	'FileType_Mismatch' => 'Datei-Typ Fehleranpassung',
	'Disallowed_extension' => 'Die Erweiterung %s ist nicht erlaubt', // replace %s with extension (e.g. .php)
	'Disallowed_extension_within_forum' => 'Du darfst keine Dateien mit der Erweiterung <b>%s</b> in diesem Forum hochladen.', // replace %s with the Extension
	'Attachment_too_big' => 'Der Anhang ist zu groß.<br />Maximale Größe: %d %s', // replace %d with maximum file size, %s with size var
	'Attach_quota_reached' => 'Die maximale Größe für alle Anhänge wurde erreicht. Du kannst keine weiteren Dateien mehr hochladen. Bitte kontaktiere den Administrator, wenn du Fragen hast.',
	'Too_many_attachments' => 'Der Anhang konnte nicht hinzugefügt werden, da die maximale Anzahl von %d Anhängen für diesen Beitrag erreicht ist.', // replace %d with maximum number of attachments
	'Error_imagesize' => 'Das angehängte Bild muss in der Breite kleiner als %d Pixel und in der Höhe kleiner als %d Pixel sein.',
	'General_upload_error' => 'Upload Fehler: Der Anhang konnte nicht nach <b>%s</b> hochgeladen werden.', // replace %s with local path

	'Error_empty_add_attachbox' => 'Du musst Werte in die \'Einen Anhang hinzufügen\' Box eingeben.',
	'Error_missing_old_entry' => 'Anhang konnte nicht aktualisiert werden, Eintrag für den Anhang nicht gefunden',

// Errors -> PM Related
	'Attach_quota_sender_pm_reached' => 'Die maximale Größe für alle Anhänge in deinem Ordner für Private Nachrichten wurde erreicht. Bitte lösche einige deiner empfangenen/gesendeten Anhänge.',
	'Attach_quota_receiver_pm_reached' => 'Die maximale Größe für alle Anhänge im Ordner für Private Nachrichten von <b>%s</b> wurde erreicht. Bitte informiere ihn/sie darüber, oder warte, bis er/sie einige Anhänge gelöscht hat.',

// Errors -> Download
	'No_attachment_selected' => 'Du hast keinen Anhang zum Herunterladen oder Ansehen ausgewählt.',
	'Error_no_attachment' => 'Der ausgewählte Anhang existiert nicht mehr.',

// Delete Attachments
	'Confirm_delete_attachments' => 'Bist du sicher, dass du die ausgewählten Anhänge löschen möchtest?',
	'Deleted_attachments' => 'Die ausgewählten Anhänge wurden gelöscht.',
	'Error_deleted_attachments' => 'Die Anhänge konnten nicht gelöscht werden.',
	'Confirm_delete_pm_attachments' => 'Bist du sicher, dass du alle Anhänge in dieser PN löschen möchtest?',

// General Error Messages
	'Attachment_feature_disabled' => 'Datei-Anhänge sind deaktiviert.',

	'Directory_does_not_exist' => 'Das Verzeichnis \'%s\' existiert nicht oder konnte nicht gefunden werden.', // replace %s with directory
	'Directory_is_not_a_dir' => 'Bitte überprüfe, ob \'%s\' ein Verzeichnis ist.', // replace %s with directory
	'Directory_not_writeable' => 'In das Verzeichnis \'%s\' kann nicht geschrieben werden. Du musst das Verzeichnis erstellen und die Rechte mit <i>chmod</i> auf 777 setzen (oder den owner in deinen httpd-server owner ändern) um Dateien hochzuladen.<br />Wenn du nur einfachen ftp-Zugang hast, ändere die \'Attribute\' des Verzeichnisses in <b>rwxrwxrwx</b>.', // replace %s with directory

	'Ftp_error_connect' => 'Keine Verbindung zum FTP-Server: \'%s\'. Bitte überprüfe deine FTP-Einstellungen.',
	'Ftp_error_login' => 'Anmeldung an FTP-Server fehlgeschlagen. Der Benutzername \'%s\' oder das Passwort ist falsch. Bitte überprüfe deine FTP-Einstellungen.',
	'Ftp_error_path' => 'Kein Zugriff auf das FTP-Verzeichnis \'%s\'. Bitte überprüfe deine FTP-Einstellungen.',
	'Ftp_error_upload' => 'Hochladen von Dateien in das FTP-Verzeichnis \'%s\' fehlgeschlagen. Bitte überprüfe deine FTP-Einstellungen.',
	'Ftp_error_delete' => 'Das Löschen von Dateien im FTP-Verzeichnis \'%s\' ist fehlgeschlagen. Bitte überprüfe deine FTP-Einstellungen.<br />Ein anderer Grund für diesen Fehler könnte sein, dass es keinen Anhang gibt. Bitte prüfe das zuerst unter &quot;Versteckte Anhänge&quot;.',
	'Ftp_error_pasv_mode' => 'Aktivieren/Deaktivieren des FTP Passive Mode fehlgeschlagen',

// Attach Rules Window
	'Rules_page' => 'Dateianhänge-Regeln',
	'Attach_rules_title' => 'Erlaubte Erweiterungsgruppen und deren Größen',
	'Group_rule_header' => '%s -> Maximale Upload Größe: %s', // Replace first %s with Extension Group, second one with the Size STRING
	'Allowed_extensions_and_sizes' => 'Erlaubte Erweiterungen und Größen',
	'Note_user_empty_group_permissions' => 'Hinweis:<br />Dir ist es normalerweise gestattet, Dateien in diesem Forum anzuhängen, <br />da es aber keiner Extension Group gestattet ist, hier angehängt zu werden,<br />kannst du nichts anhängen. Wenn du es versuchst, <br />wirst du eine Fehlermeldung erhalten.<br />',

// Quota Variables
	'Upload_quota' => 'Upload Kontingent',
	'Pm_quota' => 'PN Kontingent',
	'User_upload_quota_reached' => 'Du hast das maximale Upload Kontingent Limit von %d %s erreicht.', // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
	'User_acp_title' => 'Benutzer ACP',
	'UACP' => 'Benutzer-Anhang-Kontrollzentrum',
	'User_uploaded_profile' => 'Hochgeladen: %s',
	'User_quota_profile' => 'Kontingent: %s',
	'Upload_percent_profile' => '%d%% vom Gesamten',

// Common Variables
	'Attach_search_query' => 'Suche Anhänge',
	'Test_settings' => 'Einstellungen Testen',
	'Not_assigned' => 'Nicht zugewiesen',
	'No_file_comment_available' => 'Kein Dateikommentar verfügbar',
	'Attachbox_limit' => 'Deine Anhang-Box ist zu %d%% voll',
	'No_quota_limit' => 'kein Kontingent-Limit',
	'Unlimited' => 'Unbegrenzt',
	)
);

?>