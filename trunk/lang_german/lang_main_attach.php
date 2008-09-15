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






$lang['Rules_attach_can'] = 'Du <b>kannst</b> Dateien in diesem Forum anh�ngen.';
$lang['Rules_attach_cannot'] = 'Du <b>kannst keine</b> Dateien in diesem Forum anh�ngen.';
$lang['Rules_download_can'] = 'Du <b>kannst</b> Dateien in diesem Forum herunterladen.';
$lang['Rules_download_cannot'] = 'Du <b>kannst keine</b> Dateien in diesem Forum herunterladen.';
$lang['Sorry_auth_view_attach'] = 'Du bist leider nicht autorisiert, diesen Anhang anzuzeigen oder herunterzuladen.';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Beschreibung'; // wird im ACP auch verwendet...
$lang['Downloaded'] = 'Heruntergeladen';
$lang['Download'] = 'Download'; // diese Sprach-Variable ist auch in der lang_admin.php definiert, aber wir k�nnen sie nicht von der Haupt Sprach Datei erreichen
$lang['Filesize'] = 'Dateigr��e';
$lang['Viewed'] = 'Angesehen';
$lang['Download_number'] = '%d mal'; // ersetzt %d mit Z�hlung
$lang['Extension_disabled_after_posting'] = 'Die Erweiterung <b>%s</b> wurde vom Administrator deaktiviert. Aus diesem Grund wird der Anhang nicht angezeigt.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Attachment Posting Kontrollzentrum';
$lang['Attach_posting_cp_explain'] = 'Wenn du auf &quot;Anhang hinzuf�gen&quot; klickst, kannst du in der erscheinenden Box Anh�nge hinzuf�gen.<br /> Wenn du auf &quot;Bereits angeh�ngte Dateien&qout; klickst, siehst du eine Liste mit bereits angeh�ngte Dateien und kannst diese bearbeiten.<br />Wenn du einen Anhang ersetzen m�chtes (neuere Version hochladen), musst du beide Links anklicken. F�ge den Anhang wie immer ein, aber klicke nicht auf &quot;Anhang hinzuf�gen&quot; sondern klicke bei dem zu aktualisierenden Anhang auf &quot;<b>Neue Version hochladen</b>&quot;';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Anhang hinzuf�gen';
$lang['Add_attachment_title'] = 'Einen Anhang hinzuf�gen';
$lang['Add_attachment_explain'] = 'Wenn du keinen Anhang in deinen Beitrag einf�gen m�chtest, lasse diese Felder bitte leer.';
$lang['File_name'] = 'Dateiname';
$lang['File_comment'] = 'Datei-Kommentar';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Bereits angeh�ngte Dateien';
$lang['Options'] = 'Optionen';
$lang['Update_comment'] = 'Kommentar aktualisieren';
$lang['Delete_attachments'] = 'Anh�nge l�schen';
$lang['Delete_attachment'] = 'Anhang l�schen';
$lang['Delete_thumbnail'] = 'Vorschaubild l�schen';
$lang['Upload_new_version'] = 'Neue Version hochladen';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s ist ein ung�ltiger Dateiname.'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'Der Anhang ist zu gro�.<br />Die maximale in PHP definierte Dateigr��e konnte nicht erkannt werden.<br />Der Attachment Mod ist nicht in der Lage, die in <i>php.ini</i> definierte maximale Upload-Gr��e zu erkennen.';
$lang['Attachment_php_size_overrun'] = 'Der Anhang ist zu gro�.<br />Maximale Upload-Gr��e: %d MB.<br />Bitte beachte, dass diese Gr��e in der Datei <i>php.ini</i> definiert ist. Das bedeutet, dass der Wert von PHP gesetzt ist und vom Attachment Mod nicht �berschireben werden kann.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'Die Erweiterung %s ist nicht erlaubt'; // replace %s with extension (e.g. .php)
$lang['Disallowed_extension_within_forum'] = 'Du darfst keine Dateien mit der Erweiterung <b>%s</b> in diesem Forum hochladen.'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'Der Anhang ist zu gro�.<br />Maximale Gr��e: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Die maximale Gr��e f�r alle Anh�nge wurde erreicht. Du kannst keine weiteren Dateien mehr hochladen. Bitte kontaktiere den Administrator, wenn du Fragen hast.';
$lang['Too_many_attachments'] = 'Der Anhang konnte nicht hinzugef�gt werden, da die maximale Anzahl von %d Anh�ngen f�r diesen Beitrag erreicht ist.'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'Das angeh�ngte Bild muss in der Breite kleiner als %d Pixel und in der H�he kleiner als %d Pixel sein.';
$lang['General_upload_error'] = 'Upload Fehler: Der Anhang konnte nicht nach <b>%s</b> hochgeladen werden.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Du musst Werte in die \'Einen Anhang hinzuf�gen\' Box eingeben.';
$lang['Error_missing_old_entry'] = 'Anhang konnte nicht aktualisiert werden, Eintrag f�r den Anhang nicht gefunden';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Die maximale Gr��e f�r alle Anh�nge in deinem Ordner f�r Private Nachrichten wurde erreicht. Bitte l�sche einige deiner empfangenen/gesendeten Anh�nge.';
$lang['Attach_quota_receiver_pm_reached'] = 'Die maximale Gr��e f�r alle Anh�nge im Ordner f�r Private Nachrichten von <b>%s</b> wurde erreicht. Bitte informiere ihn/sie dar�ber, oder warte, bis er/sie einige Anh�nge gel�scht hat.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Du hast keinen Anhang zum herunterladen oder ansehen ausgew�hlt.';
$lang['Error_no_attachment'] = 'Der ausgew�hlte Anhang existiert nicht mehr.';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Bist du sicher, dass du die ausgew�hlten Anh�nge l�schen m�chtest?';
$lang['Deleted_attachments'] = 'Die ausgew�hlten Anh�nge wurden gel�scht.';
$lang['Error_deleted_attachments'] = 'Die Anh�nge konnten nicht gel�scht werden.';
$lang['Confirm_delete_pm_attachments'] = 'Bist du sicher, dass du alle Anh�nge in dieser PN l�schen m�chtest?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'Datei-Anh�nge sind deaktiviert.';

$lang['Directory_does_not_exist'] = 'Das Verzeichnis \'%s\' existiert nicht oder konnte nicht gefunden werden.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Bitte �berpr�fe, ob \'%s\' ein Verzeichnis ist.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'In das Verzeichnis \'%s\' kann nicht geschrieben werden. Du musst das Verzeichnis erstellen und die Rechte mit <i>chmod</i> auf 777 setzen (oder den owner in deinen httpd-server owner �ndern) um Dateien hochzuladen.<br />Wenn du nur einfachen ftp-Zugang hast, �ndere die \'Attribute\' des Verzeichnisses in <b>rwxrwxrwx</b>.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Keine Verbindung zum FTP-Server: \'%s\'. Bitte �berpr�fe deine FTP-Einstellungen.';
$lang['Ftp_error_login'] = 'Anmeldung an FTP-Server fehlgeschlagen. Der Benutzername \'%s\' oder das Passwort ist falsch. Bitte �berpr�fe deine FTP-Einstellungen.';
$lang['Ftp_error_path'] = 'Kein Zugriff auf das FTP-Verzeichnis \'%s\'. Bitte �berpr�fe deine FTP-Einstellungen.';
$lang['Ftp_error_upload'] = 'Hochladen von Dateien in das FTP-Verzeichnis \'%s\' fehlgeschlagen. Bitte �berpr�fe deine FTP-Einstellungen.';
$lang['Ftp_error_delete'] = 'L�schen von Dateien im FTP-Verzeichnis \'%s\' fehlgeschlagen. Bitte �berpr�fe deine FTP-Einstellungen.<br />Another reason for this error could be the non-existence of the Attachment, please check this first in Shadow Attachments.';
$lang['Ftp_error_pasv_mode'] = 'Aktivieren/Deaktivieren des FTP Passive Mode fehlgeschlagen';

// Attach Rules Window
$lang['Rules_page'] = 'Dateianh�nge-Regeln';
$lang['Attach_rules_title'] = 'Erlaubte Erweiterungsgruppen und deren Gr��en';
$lang['Group_rule_header'] = '%s -> Maximale Upload Gr��e: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Erlaubte Erweiterungen und Gr��en';
$lang['Note_user_empty_group_permissions'] = 'Hinweis:<br />Dir ist es normalerweise gestattet, Dateien in diesem Forum anzuh�ngen, <br />da es aber keiner Extension Group gestattet ist, hier angeh�ngt zu werden,<br />kannst du nichts anh�ngen. Wenn du es versuchst, <br />wirst du eine Fehlermeldung erhalten.<br />';

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
$lang['Attach_search_query'] = 'Suche Anh�nge';
$lang['Test_settings'] = 'Einstellungen Testen';
$lang['Not_assigned'] = 'Nicht zugewiesen';
$lang['No_file_comment_available'] = 'Kein Dateikommentar verf�gbar';
$lang['Attachbox_limit'] = 'Deine Anhang-Box ist zu %d%% voll';
$lang['No_quota_limit'] = 'kein Quota Limit';
$lang['Unlimited'] = 'Unbegrenzt';

?>