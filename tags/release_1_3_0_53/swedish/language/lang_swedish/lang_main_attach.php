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
* Lopalong
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
	'Rules_attach_can' => 'Du <b>kan</b> bifoga filer i detta forum',
	'Rules_attach_cannot' => 'Du <b>kan ej</b> bifoga filer i detta forum',
	'Rules_download_can' => 'Du <b>kan</b> ladda ner filer i detta forum',
	'Rules_download_cannot' => 'Du <b>kan ej</b> ladda ner filer i detta forum',
*/
	'Rules_attach_can' => 'Du <b>kan</b> bifoga filer',
	'Rules_attach_cannot' => 'Du <b>kan ej</b> bifoga filer',
	'Rules_download_can' => 'Du <b>kan</b> ladda ner filer',
	'Rules_download_cannot' => 'Du <b>kan ej</b> ladda ner filer',
	'Sorry_auth_view_attach' => 'Tyv�rr, men du har inte beh�righet att visa eller h�mta detta Tillbeh�r',

// Viewtopic -> Display of Attachments
	'Description' => 'Beskrivning', // used in Administration Panel too...
	'Downloaded' => 'Nerladdad',
	'Download' => 'Ladda ner', // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
	'Filesize' => 'Filstorlek',
	'Viewed' => 'Granskad',
	'Download_number' => '%d G�nger', // replace %d with count
	'Extension_disabled_after_posting' => 'Till�gget \'%s\' var inaktiverad av en forums admin d�rf�r kan detta Tillbeh�r inte visas.', // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
	'Attach_posting_cp' => 'Bilaga Postnings Kontroll Panel',
	'Attach_posting_cp_explain' => 'Om du klickar p� \'L�gg till en Bilaga\', ser du rutan f�r att l�gga till Bilagor.<br />Om du klickar p� \'Postade Bilagor\', kommer du att se en lista �ver redan bifogade filer och du kan �ven redigera dem.<br />Om du vill Ers�tta (Ladda upp ny version) en Bilaga, m�ste du klicka p� b�da l�nkarna. L�gg till Bilaga som du normalt skulle g�ra, d�refter klicka inte p� L�gg till Bilaga utan klicka p� Ladda upp ny version p� den Bilage Post du t�nker uppdatera.',

// Posting/PM -> Posting Attachments
	'Add_attachment' => 'L�gg Till Bilaga',
	'Add_attachment_title' => 'L�gg Till En Bilaga',
	'Add_attachment_explain' => 'Om du inte vill l�gga till en Bilaga till ditt Inl�gg kan du l�mna F�lten tomma',
	'File_name' => 'Filnamn',
	'File_comment' => 'Fil Kommentar',

// Posting/PM -> Posted Attachments
	'Posted_attachments' => 'Postade Bilagor',
	'Options' => 'Alternativ',
	'Update_comment' => 'Uppdatera Kommentar',
	'Delete_attachments' => 'Radera Bilagor',
	'Delete_attachment' => 'Radera Bilaga',
	'Delete_thumbnail' => 'Radera Miniatyrbild',
	'Upload_new_version' => 'Ladda upp Ny Version',

// Errors -> Posting Attachments
	'Invalid_filename' => '%s �r ett ogiltigt filnamn', // replace %s with given filename
	'Attachment_php_size_na' => 'Bilagan �r f�r stor.<br />Kunde inte f� den maximala stoleken definierad i PHP.<br />Bilage Modet kan inte fastst�lla det h�gsta Uppladdnings Storleken som definieras i php.ini.',
	'Attachment_php_size_overrun' => 'Bilagan �r f�r stor.<br />Maximal Uppladdnings Storlek �r: %d MB.<br />V�nligen notera att denna Storlek definieras i php.ini, vilket menas att den �r satt av PHP och Bilage Modet kan inte �verskriva detta v�rde.', // replace %d with ini_get('upload_max_filesize')
	'FileType_Mismatch' => 'Fil typ matchar d�ligt ',
	'Disallowed_extension' => 'Till�gget %s �r inte till�tet', // replace %s with extension (e.g. .php)
	'Disallowed_extension_within_forum' => 'Du har inte r�ttigheter att posta Filer med Till�gget %s innom detta Forum', // replace %s with the Extension
	'Attachment_too_big' => 'Bilagan �r f�r stor.<br />Max Storlek: %d %s', // replace %d with maximum file size, %s with size var
	'Attach_quota_reached' => 'Tyv�rr, men den maximala filstorleken f�r alla Bilagor �r n�dd. V�nligen kontakta forumets administrat�r om du har fr�gor.',
	'Too_many_attachments' => 'Bilagor kan inte l�ggas till, eftersom det maximala antal av %d Bilagor i denna post har uppn�tts', // replace %d with maximum number of attachments
	'Error_imagesize' => 'Bilaga/Bild m�ste vara mindre �n %d pixlar bred och %d pixlar h�g',
	'General_upload_error' => 'Uppladdnings Error: Kunde inte ladda upp Bilaga till %s.', // replace %s with local path

	'Error_empty_add_attachbox' => 'Du m�ste ange ett v�rde i  \'L�gg till Bilaga\' Rutan',
	'Error_missing_old_entry' => 'Om�jligt att Uppdatera Bilagor, kunde inte hitta gamla Bilage Poster',

// Errors -> PM Related
	'Attach_quota_sender_pm_reached' => 'Tyv�rr, men den maximala filstorleken p� alla bifogade filer i din Privata Meddelande Mappen har uppn�tts. V�nligen ta bort n�gra av dina mottagna/skickade Bilagor.',
	'Attach_quota_receiver_pm_reached' => 'Tyv�rr, men den maximala filstorleken p� alla bifogade filer i din Privata Meddelande Mappen av \'%s\' har uppn�tts. V�nligen l�t han/hon veta, eller v�nta tills han/hon har raderat n�gra av hans/hennes Bilagor.',

// Errors -> Download
	'No_attachment_selected' => 'Du har inte valt ut en bilaga att h�mta eller visa.',
	'Error_no_attachment' => 'Den valda bilagan finns inte l�ngre',

// Delete Attachments
	'Confirm_delete_attachments' => '�r du s�ker p� att du vill radera den valda Bilagan?',
	'Deleted_attachments' => 'Den valda Bilagan har raderats.',
	'Error_deleted_attachments' => 'Kunde inte ta bort Bilagor.',
	'Confirm_delete_pm_attachments' => '�r du s�ker p� att du vill radera alla bilagor inlagda i detta PM?',

// General Error Messages
	'Attachment_feature_disabled' => 'Bilage Funktionen �r inaktiverat.',

	'Directory_does_not_exist' => 'Katalogen \'%s\' finns inte eller kunde inte hittas.', // replace %s with directory
	'Directory_is_not_a_dir' => 'V�nligen kontrollera om \'%s\' �r en katalog.', // replace %s with directory
	'Directory_not_writeable' => 'Katalogen \'%s\' �r inte skrivbar. Du beh�ver skapa uppladdnings s�kv�gen och chmod den till 777 (eller �ndra �garen till din httpd-servers �gare) f�r att ladda upp filer.<br />Om du bara har vanlig FTP-tillg�ng �ndra \'Attribute\' p� katalogen till rwxrwxrwx.', // replace %s with directory

	'Ftp_error_connect' => 'Kunde inte ansluta till FTP Servern: \'%s\'. V�nligen kontrollera dina FTP-Inst�llningar.',
	'Ftp_error_login' => 'Kunde inte logga in till FTP Servern. Anv�ndarnamnet \'%s\' eller �r L�senordet fel. V�nligen kontrollera dina FTP-Inst�llningar.',
	'Ftp_error_path' => 'Kunde inte accessa ftp katalogen: \'%s\'. V�nligen kontrollera dina FTP Inst�llningar.',
	'Ftp_error_upload' => 'Kunde inte ladda upp filer till ftp katalogen: \'%s\'. V�nligen kontrollera dina FTP Inst�llningar.',
	'Ftp_error_delete' => 'Kunde inte radera filer i ftp katalogen: \'%s\'. V�nligen kontrollera dina FTP Inst�llningar.<br />En annan orsak till detta fel kan vara den icke-existensen av Bilagan, v�nligen kontrollera detta f�rst i Shadow Attachments.',
	'Ftp_error_pasv_mode' => 'Det g�r inte att aktivera eller inaktivera FTP Passive Mode',

// Attach Rules Window
	'Rules_page' => 'Bilagor Regler',
	'Attach_rules_title' => 'Till�tna Till�ggs Grupper och deras Storlek',
	'Group_rule_header' => '%s -> Maximal Uppladdnings Storlek: %s', // Replace first %s with Extension Group, second one with the Size STRING
	'Allowed_extensions_and_sizes' => 'Till�tna Till�gg och Storlekar',
	'Note_user_empty_group_permissions' => 'NOTERA:<br />Du �r normalt till�ten att bifoga filer i detta Forum, <br />men eftersom ingen Till�ggs Grupp till�ts bifoga h�r, <br />kan du inte bifoga n�got. Om du f�rs�ker, <br />kommer Du att f� ett Error Meddelande.<br />',

// Quota Variables
	'Upload_quota' => 'Uppladda Kvot',
	'Pm_quota' => 'PM Kvot',
	'User_upload_quota_reached' => 'Tyv�rr, Du har n�tt din h�gsta Uppladdnings Kvotgr�ns av %d %s', // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
	'User_acp_title' => 'Anv�ndare ACP',
	'UACP' => 'Anv�ndare Bilagor Kontroll Panel',
	'User_uploaded_profile' => 'Uppladdad: %s',
	'User_quota_profile' => 'Kvot: %s',
	'Upload_percent_profile' => '%d%% av den totala',

// Common Variables
	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',
	'Attach_search_query' => 'S�k Bilagor',
	'Test_settings' => 'Testa Inst�llningar',
	'Not_assigned' => 'Inte Tilldelat',
	'No_file_comment_available' => 'Inga Fil kommentar tillg�nglig',
	'Attachbox_limit' => 'Din Bilagebox �r [%d%% full]',
	'No_quota_limit' => 'Ingen Kvot Begr�nsning',
	'Unlimited' => 'Obegr�nsad',
	)
);

?>