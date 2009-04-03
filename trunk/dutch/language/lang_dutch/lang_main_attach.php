<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main_attach.php 76 2009-01-31 21:11:24Z Mighty Gorgon $
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
	'Rules_attach_can' => 'You <b>can</b> attach files in this forum',
	'Rules_attach_cannot' => 'You <b>cannot</b> attach files in this forum',
	'Rules_download_can' => 'You <b>can</b> download files in this forum',
	'Rules_download_cannot' => 'You <b>cannot</b> download files in this forum',
*/
	'Rules_attach_can' => 'Je <b>mag</b> bijlagen toevoegen',
	'Rules_attach_cannot' => 'Je <b>mag geen</b> bijlagen toevoegen',
	'Rules_download_can' => 'Je <b>mag</b> bijlagen downloaden',
	'Rules_download_cannot' => 'Je <b>mag geen</b> bijlagen downloaden',
	'Sorry_auth_view_attach' => 'Sorry maar je bent niet bevoegd om deze bijlage te bekijken of te downloaden',

// Viewtopic -> Display of Attachments
	'Description' => 'Omschrijving', // used in Administration Panel too...
	'Downloaded' => 'Gedownload',
	'Download' => 'Download', // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
	'Filesize' => 'Bestandsgrootte',
	'Viewed' => 'Bekeken',
	'Download_number' => '%d keer', // replace %d with count
	'Extension_disabled_after_posting' => 'De extensie \'%s\' is gedeactiveerd door een beheerder, daarom kan deze bijlage niet worden weergegeven.', // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
	'Attach_posting_cp' => 'Bijlage Toevoegen',
	'Attach_posting_cp_explain' => 'Als je klikt op \'Voeg bijlage toe\', je ziet dan een box om bijlagen toe te kunnen voegen.<br />Als je klikt op \'Toegevoegde bijlagen\', je ziet dan een lijst van al toegevoegde bijlagen en je bent dan in de gelegenheid om het te bewerken.<br />Als je een bijlage wilt vervangen (Upload nieuwe versie), je moet dan op beide links klikken. Voeg een bijlage toe zoals je normaal doet, maar klik niet op de Voeg bijlage toe, maar op de Upload nieuwe versie onderaan de bijlage welke je wil vervangen of wilt bijwerken.',

// Posting/PM -> Posting Attachments
	'Add_attachment' => 'Voeg bijlage toe',
	'Add_attachment_title' => 'Voeg een bijlage toe',
	'Add_attachment_explain' => 'Als je geen bijlage wilt toevoegen aan je bericht, laat dan de velden leeg',
	'File_name' => 'Bestandsnaam',
	'File_comment' => 'Bestandsbeschrijving',

// Posting/PM -> Posted Attachments
	'Posted_attachments' => 'Toegevoegde bijlagen',
	'Options' => 'Opties',
	'Update_comment' => 'Beschrijving bijwerken',
	'Delete_attachments' => 'Verwijder bijlagen',
	'Delete_attachment' => 'Verwijder bijlage',
	'Delete_thumbnail' => 'Verwijder Thumbnail',
	'Upload_new_version' => 'Upload nieuwe versie',

// Errors -> Posting Attachments
	'Invalid_filename' => '%s is een ongeldige bestandsnaam', // replace %s with given filename
	'Attachment_php_size_na' => 'De bijlage is te groot.<br />De maximum in PHP gedefinieerde bestandsgrootte kan niet bepaald worden.<br />De bijlage mod is niet in staat, de in <i>php.ini</i> gedefinieerde maximum uploadgrootte te bepalen.',
	'Attachment_php_size_overrun' => 'De bijlage is te groot.<br />Maximum uploadgrootte: %d MB.<br />Merk op dat deze grootte is gedefinieerd in php.ini. Dat betekent, dat de waarde door PHP gezet is en niet kan worden overschreven door de bijlage mod.', // replace %d with ini_get('upload_max_filesize')
	'FileType_Mismatch' => 'Bestandstype komt niet overeen',
	'Disallowed_extension' => 'De extensie %s is niet toegestaan', // replace %s with extension (e.g. .php) 
	'Disallowed_extension_within_forum' => 'Je mag geen bijlagen met de extensie %s in dit forum uploaden', // replace %s with the Extension
	'Attachment_too_big' => 'De bijlage is te groot.<br />Maximum grootte is: %d %s', // replace %d with maximum file size, %s with size var
	'Attach_quota_reached' => 'De maximum grootte voor alle bijlagen is bereikt. Je kan niet meerdere bijlagen uploaden. Neem contact op met de beheerder als je vragen hebt.',
	'Too_many_attachments' => 'De bijlage kan niet toegevoegd worden, omdat de maximum aantal van %s bijlagen voor dit bericht bereikt is.', // replace %d with maximum number of attachments
	'Error_imagesize' => 'De toegevoegde afbeelding moet in de breedte kleiner zijn dan %d en de hoogte kleiner dan %d pixels.', 
	'General_upload_error' => 'Uploadfout: De bijlage kan niet naar %s worden geupload.', // replace %s with local path

	'Error_empty_add_attachbox' => 'Je moet waarden ingeven in de \'Voeg bijlage toe\' velden',
	'Error_missing_old_entry' => 'Bijlage kan niet worden bijgewerkt, ingang voor de bijlage niet gevonden',

// Errors -> PM Related
	'Attach_quota_sender_pm_reached' => 'De maximum grootte voor alle bijlagen in jouw privéberichtenmap is bereikt. Verwijder enkele toegevoegde/ verstuurde bijlagen.',
	'Attach_quota_receiver_pm_reached' => 'De maximum grootte voor alle bijlagen in jouw privéberichtenmap van <b>%s</b> is bereikt. Informeer hem/haar daarover, of wacht, totdat hij/zij enkele bijlagen verwijderd heeft.',

// Errors -> Download
	'No_attachment_selected' => 'Je hebt geen bijlage om te downloaden of om te bekijken geselecteerd.',
	'Error_no_attachment' => 'De geselecteerde bijlage bestaat niet meer',

// Delete Attachments
	'Confirm_delete_attachments' => 'Weet je het zeker dat je de geselecteerde bijlagen wilt verwijderen?',
	'Deleted_attachments' => 'De geselecteerde bijlagen zijn verwijderd.',
	'Error_deleted_attachments' => 'De bijlage kan niet worden verwijderd.',
	'Confirm_delete_pm_attachments' => 'Weet je zeker dat je alle bijlagen die toegevoegd zijn in deze PB wilt verwijderen?',

// General Error Messages
	'Attachment_feature_disabled' => 'De bijlagemogelijkheid is uitgeschakeld.',
	
	'Directory_does_not_exist' => 'De map \'%s\' bestaat niet meer of kan niet worden gevonden.', // replace %s with directory
	'Directory_is_not_a_dir' => 'Controleer of \'%s\' een map is.', // replace %s with directory
	'Directory_not_writeable' => 'Map \'%s\' is niet schrijfbaar. Je moet een map openzetten en de rechten met <i>chmod</i> op 777 zetten (of de eigenaar in jouw httpd-server eigenaar veranderen) om bijlagen te kunnen uploaden.<br />Wanneer je alleen eenvoudige FTP-toegang hebt, verander dan de \'attribuut\' in je map in <b>rwxrwxrwx</b>.', // replace %s with directory
	
	'Ftp_error_connect' => 'Verbinding maken met de FTP-server is mislukt: \'%s\'. Controleer jouw FTP-instellingen.',
	'Ftp_error_login' => 'Het inloggen op de FTP-server is mislukt. De gebruikersnaam \'%s\' of wachtwoord is niet correct. Controleer jouw FTP-instellingen.',
	'Ftp_error_path' => 'Geen toegang tot de FTP-map: \'%s\'. Controleer jouw FTP-instellingen.',
	'Ftp_error_upload' => 'Het uploaden van bestanden in de FTP-map is mislukt: \'%s\'. Controleer jouw FTP-instellingen.',
	'Ftp_error_delete' => 'Het verwijderen van bestanden in de FTP-map is mislukt: \'%s\'. Controleer jouw FTP-instellingen.<br />Andere reden voor deze fout zou het niet bestaan van de bijlage kunnen zijn, controleer dat eerst in de schaduwbijlagen.',
	'Ftp_error_pasv_mode' => 'Activeren/Deactiveren van de FTP passieve modus is mislukt',

// Attach Rules Window
	'Rules_page' => 'Bijlageregels',
	'Attach_rules_title' => 'Toegestaande extensiegroepen en hun grootte',
	'Group_rule_header' => '%s -> Maximum uploadgrootte: %s', // Replace first %s with Extension Group, second one with the Size STRING
	'Allowed_extensions_and_sizes' => 'Toegestaande extensies en grootte',
	'Note_user_empty_group_permissions' => 'NB:<br />Je hebt normalerwijs toestemming om bestanden toe te voegen in dit forum, maar aangezien er hier geen extensiegroep is toegestaan, <br />mag je niets toevoegen. Als je het probeert, <br />zal je een fout krijgen.<br />',

// Quota Variables
	'Upload_quota' => 'Upload quota',
	'Pm_quota' => 'PB quota',
	'User_upload_quota_reached' => 'Je hebt de maximum uploadquotalimiet van %d %s bereikt', // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
	'User_acp_title' => 'Gebruiker ACP',
	'UACP' => 'Gebruiker bijlagenpaneel',
	'User_uploaded_profile' => 'Geupload: %s',
	'User_quota_profile' => 'Quota: %s',
	'Upload_percent_profile' => '%d%% van het totaal',

// Common Variables
	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',
	'Attach_search_query' => 'Zoek bijlagen',
	'Test_settings' => 'Instellingen testen',
	'Not_assigned' => 'Niet toegewezen',
	'No_file_comment_available' => 'Er is geen bestandsbeschrijving beschikbaar',
	'Attachbox_limit' => 'Jouw bijlagebox is voor %d%% gevuld',
	'No_quota_limit' => 'Geen quotalimiet',
	'Unlimited' => 'Ongelimiteerd',
	)
);

?>