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
'Rules_attach_can' => 'Tukaj <b>lahko</b> priložite datoteke',
	'Rules_attach_cannot' => 'Tukaj <b>nemorete</b> priložiti datotek',
	'Rules_download_can' => 'Tukaj <b>lahko</b> prenesete datoteke',
	'Rules_download_cannot' => 'Tukaj <b>nemorete</b> prenesti datotek',
	'Sorry_auth_view_attach' => 'Oprostite, nimate dovoljenja za ogled ali prenos datoteke',

// Viewtopic -> Display of Attachments
	'Description' => 'Opis', // uporabljeno tudi v meniju skrbnika...
	'Downloaded' => 'Preneseno',
	'Download' => 'Prenos', // Sprememba jezika je spremenljivka ki je tudi definirana v lang_admin.php, vendar nimamo dostopa z glavne jezikovne datoteke
	'Filesize' => 'Velikost datoteke',
	'Viewed' => 'Ogledano',
	'Download_number' => '%d krat', // zamenjaj %d s številom
	'Extension_disabled_after_posting' => 'Razširjanje \'%s\' je bilo onemogočeno z menija skrbnika, zato ta priloga ni prikazana.', // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
	'Attach_posting_cp' => 'Priponka za objavo nadzorne plošče',
	'Attach_posting_cp_explain' => 'Če kliknemo \'Add an Attachment\', boste videli polje za dodajanje prilog.<br />Če kliknete na \'Posted Attachments\',boste videli seznam že priloženih datotekah in jih boste lahko urejali.<br />Če želite zamenjati (Naložiti novo različico) priloge, morate klikniti obe povezavi. Dodajte prilogo kot bi jo ponavadi, potem ne kliknite Dodaj datoteko, rajše kliknite na Dodaj novo prilogo v vnosnem polju za priloge če nameravate posodoviti.',

// Posting/PM -> Posting Attachments
	'Add_attachment' => 'Dodaj prilogo',
	'Add_attachment_title' => 'Dodaj prilogo',
	'Add_attachment_explain' => 'Če ne želite dodati priloge k objavi, prosimo pustite polje prazno',
	'File_name' => 'Ime datoteke',
	'File_comment' => 'Opis datoteke',

// Posting/PM -> Posted Attachments
	'Posted_attachments' => 'Objavljene priloge',
	'Options' => 'Nastavitve',
	'Update_comment' => 'Posodobite opis',
	'Delete_attachments' => 'Izbris prilog',
	'Delete_attachment' => 'Izbris priloge',
	'Delete_thumbnail' => 'Izbris oznake',
	'Upload_new_version' => 'Naloži novo različico',

// Errors -> Posting Attachments
	'Invalid_filename' => '%s je napačno ime datoteke', // replace %s with given filename
	'Attachment_php_size_na' => 'Velikost priložene datoteke je prevelika.<br />Dosežena je bila največja velikost definirana v PHP.<br />Način prilaganja datotek nemore ugotoviti največje velikosti datoteke definirane v php.ini.',
	'Attachment_php_size_overrun' => 'Velikost priložene datoteke je prevelika.<br />Največja velikost priložene datoteke: %d MB.<br />Prosimo, upoštevajte, da je ta velikost opredeljen v php.ini, to pomeni da je določeno z PHP in način dodajanja prilog nemore prepisati te vrednosti', // replace %d with ini_get('upload_max_filesize')
	'FileType_Mismatch' => 'Neusklajen format datoteke',
	'Disallowed_extension' => 'Razširjanje %s ni dovoljeno', // replace %s with extension (e.g. .php)
	'Disallowed_extension_within_forum' => 'Nimate dovoljenja za objavo datotek z razširitvijo %s v sklopu tega foruma', // replace %s with the Extension
	'Attachment_too_big' => 'Velikost priloge je prevelika.<br />Največja dovoljena velikost: %d %s', // replace %d with maximum file size, %s with size var
	'Attach_quota_reached' => 'Oprostite, ampak največja dovoljena velikost prilog je bila dosežena. Prosimo kontaktirajte skrbnika teme če imate nadaljna vprašanja.',
	'Too_many_attachments' => 'Priloga nemore biti dodana, ker je bilo največje število %d prilog doseženo', // replace %d with maximum number of attachments
	'Error_imagesize' => 'Priloga/Slika mora biti ožja kot kot %d točk in nižja od %d točk',
	'General_upload_error' => 'Napaka nalaganja: Priloge ni bilo možno naložiti %s.', // replace %s with local path

	'Error_empty_add_attachbox' => 'Morate vnesti vrednosti v \'Dodaj prilogo\' polje',
	'Error_missing_old_entry' => 'Ne morem posodobiti prilogo, prejšne priloge ni bilo mogoče najti',

// Errors -> PM Related
	'Attach_quota_sender_pm_reached' => 'Oprostite, dosežena največja velikost datotek za vse priloge v vaši zasebni mape sporočil je dosežena. Prosimo, izbrišite nekatere od vaših prejetih / poslanih prilog.',
	'Attach_quota_receiver_pm_reached' => 'Oprostite, največja velikost datotek za vse priloge v mapi za zasebna sporočila <b>%s</b> je dosežena. Prosimo, obvestite ga, ali počakajte, da on / ona izbriše nekatere od njegovih prilog.',

// Errors -> Download
	'No_attachment_selected' => 'Niste izbrali priloge za ogled ali prenos.',
	'Error_no_attachment' => 'Izbrana priloga ne obstaja',

// Delete Attachments
	'Confirm_delete_attachments' => 'Ali ste prepričani, da želite izbrisati priloge?',
	'Deleted_attachments' => 'Izbrana priloga je bila izbrisana.',
	'Error_deleted_attachments' => 'Priloge ni mogoče izbrisati.',
	'Confirm_delete_pm_attachments' => 'Ali ste prepričani, da želite izbrisati vse priloge objavnjene v tem ZS',

// General Error Messages
	'Attachment_feature_disabled' => 'Funkcija prilog je onemogočena.',

	'Directory_does_not_exist' => 'Tema \'%s\' ne obstaja ali je ni bilo mogoče najti.', 
	'Directory_is_not_a_dir' => 'Prosimo preverite če je \'%s\' tema.', 
	'Directory_not_writeable' => 'Tema \'%s\' je namenjena samo za branje. Morali boste ustvariti pot nalaganja in spremeniti pot na 777 (ali dobiti upravljalne pravice httpd-servers serverja) za nalaganje datotek.<br />Če imate samo navaden FTP-dostop spremenite \'Attribute\' teme v rwxrwxrwx.', // replace %s with directory

	'Ftp_error_connect' => 'Ne morem se povezati na FTP strežnik: \'%s\'. Preverite svoje FTP-Nastavitve.',
	'Ftp_error_login' => 'Ne morem se prijaviti na FTP strežnik.Uporabniško ime \'%s\' ali geslo je napačno. Preverite svoje FTP-nastavitve.',
	'Ftp_error_upload' => 'Nalaganje na FTP strežnik ni bilo mogoče: \'%s\'. Preverite svoje FTP-nastavitve.',
	'Ftp_error_delete' => 'Datotek s FTP strežnika ni bilo mogoče izbrisati: \'%s\'. Preverite svoje FTP-nastavitve.<br />Drug razlog za to napako je lahko, da priloga ne obstaja, prosimo prvo preverite skrite priloge.',
	'Ftp_error_pasv_mode' => 'Ni bilo mogoče aktivirati/deaktivirati FTP pasivni način',

// Attach Rules Window
	'Rules_page' => 'Pravila za dodajanje prilog',
	'Attach_rules_title' => 'Dovoljene razširitvene skupine in njihove velikosti',
	'Group_rule_header' => '%s -> Največja dovoljena velikost naložene datoteke: %s', // Replace first %s with Extension Group, second one with the Size STRING
	'Allowed_extensions_and_sizes' => 'Dovoljene priloge in velikosti',
	'Note_user_empty_group_permissions' => 'OPOMBA:<br />Lahko pripneš datoteek v tem forumu, <br />ker pa ni razširitvena skupina <br />nemoreš priložiti datoteke. V primeru da poizkušaš, <br />boš prejel poročilo o napaki.<br />',

// Quota Variables
	'Upload_quota' => 'kvota naloženih datotek',
	'Pm_quota' => 'kvota ZS',
	'User_upload_quota_reached' => 'Oprostite, dosegli ste največjo kvoto nalaganja, od %d %s', // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
	'User_acp_title' => 'Ime nadzorne plošča uporabnikovih prilog',
	'UACP' => 'Nadzorna plošča uporabnikovih prilog',
	'User_uploaded_profile' => 'Naloženo: %s',
	'User_quota_profile' => 'Kvota: %s',
	'Upload_percent_profile' => '%d%% od skupno',

// Common Variables
	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',
	'Attach_search_query' => 'Išči priloge',
	'Test_settings' => 'Preveri nastavitve',
	'Not_assigned' => 'Ni določeno',
	'No_file_comment_available' => 'Nobenega komentarja datoteke ni na voljo',
	'Attachbox_limit' => 'Mapa s prilogami [%d%% polna]',
	'No_quota_limit' => 'Ni limit kvote',
	'Unlimited' => 'Neomejeno',

	)
);

?>