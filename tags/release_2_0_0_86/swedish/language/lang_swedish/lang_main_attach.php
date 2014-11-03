<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main_attach.php 55 2009-08-07 09:20:40Z Mighty Gorgon $
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
	'Sorry_auth_view_attach' => 'Tyvärr, men du har inte behörighet att visa eller hämta detta Tillbehör',

// Viewtopic -> Display of Attachments
	'Description' => 'Beskrivning', // used in Administration Panel too...
	'Downloaded' => 'Nerladdad',
	'Download' => 'Ladda ner', // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
	'Filesize' => 'Filstorlek',
	'Viewed' => 'Granskad',
	'Download_number' => '%d Gånger', // replace %d with count
	'Extension_disabled_after_posting' => 'Tillägget \'%s\' var inaktiverad av en forums admin därför kan detta Tillbehör inte visas.', // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
	'Attach_posting_cp' => 'Bilaga Postnings Kontroll Panel',
	'Attach_posting_cp_explain' => 'Om du klickar på \'Lägg till en bilaga\', ser du rutan för att lägga till Bilagor.<br />Om du klickar på \'Postade Bilagor\', kommer du att se en lista över redan bifogade filer och du kan även redigera dem.<br />Om du vill ersätta (Ladda upp ny version) en bilaga, måste du klicka på båda länkarna. Lägg till bilaga som du normalt skulle göra, därefter klicka inte å Lägg till bilaga utan klicka på Ladda upp ny version på den bilage post du tänker uppdatera.',

// Posting/PM -> Posting Attachments
	'Add_attachment' => 'Lägg till bilaga',
	'Add_attachment_title' => 'Lägg till en bilaga',
	'Add_attachment_explain' => 'Om du inte vill lägga till en bilaga till ditt inlägg kan du lämna fälten tomma',
	'File_name' => 'Filnamn',
	'File_comment' => 'Fil kommentar',

// Posting/PM -> Posted Attachments
	'Posted_attachments' => 'Postade bilagor',
	'Options' => 'Alternativ',
	'Update_comment' => 'Uppdatera kommentar',
	'Delete_attachments' => 'Radera bilagor',
	'Delete_attachment' => 'Radera bilaga',
	'Delete_thumbnail' => 'Radera miniatyrbild',
	'Upload_new_version' => 'Ladda upp ny version',

// Errors -> Posting Attachments
	'Invalid_filename' => '%s Är ett ogiltigt filnamn', // replace %s with given filename
	'Attachment_php_size_na' => 'Bilagan är för stor.<br />Kunde inte få den maximala stoleken definierad i PHP.<br />Bilage modet kan inte fastställa den högsta uppladdnings storleken som definieras i php.ini.',
	'Attachment_php_size_overrun' => 'Bilagan är för stor.<br />Maximal uppladdnings storlek är: %d MB.<br />Vänligen notera att denna storlek definieras i php.ini, vilket menas att den är satt av PHP och bilage modet kan inte överskriva detta värde.', // replace %d with ini_get('upload_max_filesize')
	'FileType_Mismatch' => 'Fil typ matchar dåligt ',
	'Disallowed_extension' => 'Tillägget %s är inte tillåtet', // replace %s with extension (e.g. .php)
	'Disallowed_extension_within_forum' => 'Du har inte rättigheter att posta filer med tillägget %s innom detta Forum', // replace %s with the Extension
	'Attachment_too_big' => 'Bilagan är för stor.<br />Max Storlek: %d %s', // replace %d with maximum file size, %s with size var
	'Attach_quota_reached' => 'Tyvärr, men den maximala filstorleken för alla bilagor är nådd. Vänligen kontakta forumets administratör om du har frågor.',
	'Too_many_attachments' => 'Bilagor kan inte läggas till, eftersom det maximala antal av %d bilagor i denna post har uppnåtts', // replace %d with maximum number of attachments
	'Error_imagesize' => 'Bilaga/Bild måste vara mindre än %d pixlar bred och %d pixlar hög',
	'General_upload_error' => 'Uppladdnings Error: Kunde inte ladda upp Bilaga till %s.', // replace %s with local path

	'Error_empty_add_attachbox' => 'Du måste ange ett värde i  \'Lägg till bilaga\' Rutan',
	'Error_missing_old_entry' => 'Omöjligt att uppdatera bilagor, kunde inte hitta gamla bilage poster',

// Errors -> PM Related
	'Attach_quota_sender_pm_reached' => 'Tyvärr, men den maximala filstorleken på alla bifogade filer i din Privata Meddelande Mappen har uppnåtts. Vänligen ta bort några av dina mottagna/skickade bilagor.',
	'Attach_quota_receiver_pm_reached' => 'Tyvärr, men den maximala filstorleken på alla bifogade filer i din Privata Meddelande Mappen av \'%s\' har uppnåtts. Vänligen låt han/hon veta, eller vänta tills han/hon har raderat några av hans/hennes bilagor.',

// Errors -> Download
	'No_attachment_selected' => 'Du har inte valt ut en bilaga att hämta eller visa.',
	'Error_no_attachment' => 'Den valda bilagan finns inte längre',

// Delete Attachments
	'Confirm_delete_attachments' => 'Är du säker på att du vill radera den valda bilagan?',
	'Deleted_attachments' => 'Den valda bilagan har raderats.',
	'Error_deleted_attachments' => 'Kunde inte ta bort bilagor.',
	'Confirm_delete_pm_attachments' => 'Är du säker på att du vill radera alla bilagor inlagda i detta PM?',

// General Error Messages
	'Attachment_feature_disabled' => 'Bilage funktionen är inaktiverad.',

	'Directory_does_not_exist' => 'Katalogen \'%s\' finns inte eller kunde inte hittas.', // replace %s with directory
	'Directory_is_not_a_dir' => 'Vänligen kontrollera om \'%s\' är en katalog.', // replace %s with directory
	'Directory_not_writeable' => 'Katalogen \'%s\' är inte skrivbar. Du behöver skapa uppladdnings sökvägen och chmod den till 777 (eller ändra ägaren till din httpd-servers ägare) för att ladda upp filer.<br />Om du bara har vanlig FTP-tillgång ändra \'Attribute\' på katalogen till rwxrwxrwx.', // replace %s with directory

	'Ftp_error_connect' => 'Kunde inte ansluta till FTP Servern: \'%s\'. Vänligen kontrollera dina FTP-Inställningar.',
	'Ftp_error_login' => 'Kunde inte logga in till FTP Servern. Användarnamnet \'%s\' eller är Lösenordet fel. Vänligen kontrollera dina FTP-Inställningar.',
	'Ftp_error_path' => 'Kunde inte accessa ftp katalogen: \'%s\'. VÃ¤nligen kontrollera dina FTP InstÃ¤llningar.',
	'Ftp_error_upload' => 'Kunde inte ladda upp filer till ftp katalogen: \'%s\'. Vänligen kontrollera dina FTP Inställningar.',
	'Ftp_error_delete' => 'Kunde inte radera filer i ftp katalogen: \'%s\'. Vänligen kontrollera dina FTP Inställningar.<br />En annan orsak till detta fel kan vara den icke-existensen av Bilagan, vänligen kontrollera detta först i Shadow Attachments.',
	'Ftp_error_pasv_mode' => 'Det går inte att aktivera eller inaktivera FTP Passive Mode',

// Attach Rules Window
	'Rules_page' => 'Bilagor Regler',
	'Attach_rules_title' => 'Tillåtna tilläggs grupper och deras storlek',
	'Group_rule_header' => '%s -> Maximal uppladdnings storlek: %s', // Replace first %s with Extension Group, second one with the Size STRING
	'Allowed_extensions_and_sizes' => 'Tillåtna tillägg och storlekar',
	'Note_user_empty_group_permissions' => 'NOTERA:<br />Du är normalt tillåten att bifoga filer i detta Forum, <br />men eftersom ingen tilläggs grupp tillåts bifoga här, <br />kan du inte bifoga något. Om du försöker, <br />kommer Du att få ett Error Meddelande.<br />',

// Quota Variables
	'Upload_quota' => 'Uppladda kvot',
	'Pm_quota' => 'PM kvot',
	'User_upload_quota_reached' => 'Tyvärr, Du har nått din högsta uppladdnings kvotgräns av %d %s', // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
	'User_acp_title' => 'Användare ACP',
	'UACP' => 'Användare bilagor kontroll pPanel',
	'User_uploaded_profile' => 'Uppladdad: %s',
	'User_quota_profile' => 'Kvot: %s',
	'Upload_percent_profile' => '%d%% av den totala',

// Common Variables
	'Attach_search_query' => 'Sök bilagor',
	'Test_settings' => 'Testa inställningar',
	'Not_assigned' => 'Inte tilldelat',
	'No_file_comment_available' => 'Ingen fil kommentar tillgänglig',
	'Attachbox_limit' => 'Din bilagebox är [%d%% full]',
	'No_quota_limit' => 'Ingen kvot begränsning',
	'Unlimited' => 'Obegränsad',
	)
);

?>