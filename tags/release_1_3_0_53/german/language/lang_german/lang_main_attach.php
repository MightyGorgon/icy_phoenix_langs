<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main_attach.php 33 2009-05-02 16:34:07Z TheSteffen $
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
	'Rules_attach_can' => 'Du <b>kannst</b> Dateien anh�ngen.',
	'Rules_attach_cannot' => 'Du <b>kannst keine</b> anh�ngen.',
	'Rules_download_can' => 'Du <b>kannst</b> Dateien herunterladen.',
	'Rules_download_cannot' => 'Du <b>kannst keine</b> herunterladen.',
	'Sorry_auth_view_attach' => 'Du bist leider nicht autorisiert, diesen Anhang anzusehen oder herunterzuladen.',

// Viewtopic -> Display of Attachments
	'Description' => 'Beschreibung', // wird im ACP auch verwendet...
	'Downloaded' => 'Heruntergeladen',
	'Download' => 'Download', // diese Sprach-Variable ist auch in der lang_admin.php definiert, aber wir k�nnen sie nicht von der Haupt Sprach Datei erreichen
	'Filesize' => 'Dateigr��e',
	'Viewed' => 'Angesehen',
	'Download_number' => '%d mal', // ersetzt %d mit Z�hlung
	'Extension_disabled_after_posting' => 'Die Erweiterung <b>%s</b> wurde vom Administrator deaktiviert. Aus diesem Grund wird der Anhang nicht angezeigt.', // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
	'Attach_posting_cp' => 'Attachment Posting Kontrollzentrum',
	'Attach_posting_cp_explain' => 'Wenn du auf &quot;Anhang hinzuf�gen&quot; klickst, kannst du in der erscheinenden Box Anh�nge hinzuf�gen.<br /> Wenn du auf &quot;Bereits angeh�ngte Dateien&qout; klickst, siehst du eine Liste mit bereits angeh�ngte Dateien und kannst diese bearbeiten.<br />Wenn du einen Anhang ersetzen m�chtes (neuere Version hochladen), musst du beide Links anklicken. F�ge den Anhang wie immer ein, aber klicke nicht auf &quot;Anhang hinzuf�gen&quot; sondern klicke bei dem zu aktualisierenden Anhang auf &quot;<b>Neue Version hochladen</b>&quot;',

// Posting/PM -> Posting Attachments
	'Add_attachment' => 'Anhang hinzuf�gen',
	'Add_attachment_title' => 'Einen Anhang hinzuf�gen',
	'Add_attachment_explain' => 'Wenn du keinen Anhang in deinen Beitrag einf�gen m�chtest, lasse diese Felder bitte leer.',
	'File_name' => 'Dateiname',
	'File_comment' => 'Datei-Kommentar',

// Posting/PM -> Posted Attachments
	'Posted_attachments' => 'Bereits angeh�ngte Dateien',
	'Options' => 'Optionen',
	'Update_comment' => 'Kommentar aktualisieren',
	'Delete_attachments' => 'Anh�nge l�schen',
	'Delete_attachment' => 'Anhang l�schen',
	'Delete_thumbnail' => 'Vorschaubild l�schen',
	'Upload_new_version' => 'Neue Version hochladen',

// Errors -> Posting Attachments
	'Invalid_filename' => '%s ist ein ung�ltiger Dateiname.', // replace %s with given filename
	'Attachment_php_size_na' => 'Der Anhang ist zu gro�.<br />Die maximale in PHP definierte Dateigr��e konnte nicht erkannt werden.<br />Der Attachment Mod ist nicht in der Lage, die in <i>php.ini</i> definierte maximale Upload-Gr��e zu erkennen.',
	'Attachment_php_size_overrun' => 'Der Anhang ist zu gro�.<br />Maximale Upload-Gr��e: %d MB.<br />Bitte beachte, dass diese Gr��e in der Datei <i>php.ini</i> definiert ist. Das bedeutet, dass der Wert von PHP gesetzt ist und vom Attachment Mod nicht �berschireben werden kann.', // replace %d with ini_get('upload_max_filesize')
	'FileType_Mismatch' => 'Datei-Typ Fehleranpassung',
	'Disallowed_extension' => 'Die Erweiterung %s ist nicht erlaubt', // replace %s with extension (e.g. .php)
	'Disallowed_extension_within_forum' => 'Du darfst keine Dateien mit der Erweiterung <b>%s</b> in diesem Forum hochladen.', // replace %s with the Extension
	'Attachment_too_big' => 'Der Anhang ist zu gro�.<br />Maximale Gr��e: %d %s', // replace %d with maximum file size, %s with size var
	'Attach_quota_reached' => 'Die maximale Gr��e f�r alle Anh�nge wurde erreicht. Du kannst keine weiteren Dateien mehr hochladen. Bitte kontaktiere den Administrator, wenn du Fragen hast.',
	'Too_many_attachments' => 'Der Anhang konnte nicht hinzugef�gt werden, da die maximale Anzahl von %d Anh�ngen f�r diesen Beitrag erreicht ist.', // replace %d with maximum number of attachments
	'Error_imagesize' => 'Das angeh�ngte Bild muss in der Breite kleiner als %d Pixel und in der H�he kleiner als %d Pixel sein.',
	'General_upload_error' => 'Upload Fehler: Der Anhang konnte nicht nach <b>%s</b> hochgeladen werden.', // replace %s with local path

	'Error_empty_add_attachbox' => 'Du musst Werte in die \'Einen Anhang hinzuf�gen\' Box eingeben.',
	'Error_missing_old_entry' => 'Anhang konnte nicht aktualisiert werden, Eintrag f�r den Anhang nicht gefunden',

// Errors -> PM Related
	'Attach_quota_sender_pm_reached' => 'Die maximale Gr��e f�r alle Anh�nge in deinem Ordner f�r Private Nachrichten wurde erreicht. Bitte l�sche einige deiner empfangenen/gesendeten Anh�nge.',
	'Attach_quota_receiver_pm_reached' => 'Die maximale Gr��e f�r alle Anh�nge im Ordner f�r Private Nachrichten von <b>%s</b> wurde erreicht. Bitte informiere ihn/sie dar�ber, oder warte, bis er/sie einige Anh�nge gel�scht hat.',

// Errors -> Download
	'No_attachment_selected' => 'Du hast keinen Anhang zum herunterladen oder ansehen ausgew�hlt.',
	'Error_no_attachment' => 'Der ausgew�hlte Anhang existiert nicht mehr.',

// Delete Attachments
	'Confirm_delete_attachments' => 'Bist du sicher, dass du die ausgew�hlten Anh�nge l�schen m�chtest?',
	'Deleted_attachments' => 'Die ausgew�hlten Anh�nge wurden gel�scht.',
	'Error_deleted_attachments' => 'Die Anh�nge konnten nicht gel�scht werden.',
	'Confirm_delete_pm_attachments' => 'Bist du sicher, dass du alle Anh�nge in dieser PN l�schen m�chtest?',

// General Error Messages
	'Attachment_feature_disabled' => 'Datei-Anh�nge sind deaktiviert.',

	'Directory_does_not_exist' => 'Das Verzeichnis \'%s\' existiert nicht oder konnte nicht gefunden werden.', // replace %s with directory
	'Directory_is_not_a_dir' => 'Bitte �berpr�fe, ob \'%s\' ein Verzeichnis ist.', // replace %s with directory
	'Directory_not_writeable' => 'In das Verzeichnis \'%s\' kann nicht geschrieben werden. Du musst das Verzeichnis erstellen und die Rechte mit <i>chmod</i> auf 777 setzen (oder den owner in deinen httpd-server owner �ndern) um Dateien hochzuladen.<br />Wenn du nur einfachen ftp-Zugang hast, �ndere die \'Attribute\' des Verzeichnisses in <b>rwxrwxrwx</b>.', // replace %s with directory

	'Ftp_error_connect' => 'Keine Verbindung zum FTP-Server: \'%s\'. Bitte �berpr�fe deine FTP-Einstellungen.',
	'Ftp_error_login' => 'Anmeldung an FTP-Server fehlgeschlagen. Der Benutzername \'%s\' oder das Passwort ist falsch. Bitte �berpr�fe deine FTP-Einstellungen.',
	'Ftp_error_path' => 'Kein Zugriff auf das FTP-Verzeichnis \'%s\'. Bitte �berpr�fe deine FTP-Einstellungen.',
	'Ftp_error_upload' => 'Hochladen von Dateien in das FTP-Verzeichnis \'%s\' fehlgeschlagen. Bitte �berpr�fe deine FTP-Einstellungen.',
	'Ftp_error_delete' => 'L�schen von Dateien im FTP-Verzeichnis \'%s\' fehlgeschlagen. Bitte �berpr�fe deine FTP-Einstellungen.<br />Another reason for this error could be the non-existence of the Attachment, please check this first in Shadow Attachments.',
	'Ftp_error_pasv_mode' => 'Aktivieren/Deaktivieren des FTP Passive Mode fehlgeschlagen',

// Attach Rules Window
	'Rules_page' => 'Dateianh�nge-Regeln',
	'Attach_rules_title' => 'Erlaubte Erweiterungsgruppen und deren Gr��en',
	'Group_rule_header' => '%s -> Maximale Upload Gr��e: %s', // Replace first %s with Extension Group, second one with the Size STRING
	'Allowed_extensions_and_sizes' => 'Erlaubte Erweiterungen und Gr��en',
	'Note_user_empty_group_permissions' => 'Hinweis:<br />Dir ist es normalerweise gestattet, Dateien in diesem Forum anzuh�ngen, <br />da es aber keiner Extension Group gestattet ist, hier angeh�ngt zu werden,<br />kannst du nichts anh�ngen. Wenn du es versuchst, <br />wirst du eine Fehlermeldung erhalten.<br />',

// Quota Variables
	'Upload_quota' => 'Upload Kontingent',
	'Pm_quota' => 'PN Kontingent',
	'User_upload_quota_reached' => 'Du hast das maximale Upload Kontingent Limit von %d %s erreicht.', // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
	'User_acp_title' => 'Benutzer ACP',
	'UACP' => 'Benutzer-Anhang-Kontrollzentrum',
	'User_uploaded_profile' => 'Hochgeladen: %s',
	'User_quota_profile' => 'Quota: %s',
	'Upload_percent_profile' => '%d%% vom Gesamten',

// Common Variables
	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',
	'Attach_search_query' => 'Suche Anh�nge',
	'Test_settings' => 'Einstellungen Testen',
	'Not_assigned' => 'Nicht zugewiesen',
	'No_file_comment_available' => 'Kein Dateikommentar verf�gbar',
	'Attachbox_limit' => 'Deine Anhang-Box ist zu %d%% voll',
	'No_quota_limit' => 'kein Quota Limit',
	'Unlimited' => 'Unbegrenzt',
	)
);

?>