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

$lang = array_merge($lang, array (
// Auth Related Entries
/*
	'Rules_attach_can' => 'You <b>can</b> attach files in this forum',
	'Rules_attach_cannot' => 'You <b>cannot</b> attach files in this forum',
	'Rules_download_can' => 'You <b>can</b> download files in this forum',
	'Rules_download_cannot' => 'You <b>cannot</b> download files in this forum',
*/
  'Rules_attach_can' => '<b>Tudsz</b> fájlokat csatolni',
  'Rules_attach_cannot' => '<b>Nem tudsz</b> fájlokat csatolni',
  'Rules_download_can' => 'Le <b>tudod</b> tölteni a fájlokat',
  'Rules_download_cannot' => '<b>Nem tudod</b> letölteni a fájlokat',
  'Sorry_auth_view_attach' => 'Bocsi, de nincs jogod letölteni vagy megnézni ezt a csatolmányt',

// Viewtopic -> Display of Attachments
  'Description' => 'Meghatározás', // used in Administration Panel too...
  'Downloaded' => 'Letöltve',
  'Download' => 'Letöltés', // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
  'Filesize' => 'Fájlméret',
  'Viewed' => 'Megnézve',
  'Download_number' => '%d-szor', // replace %d with count
  'Extension_disabled_after_posting' => 'A \'%s\' kiterjesztést deaktiválta a fórum adminisztrátora, ezért ez a csatolmány nem jelenik meg.', // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
  'Attach_posting_cp' => 'Csatolmány beküldõ vezérlõpanel',
  'Attach_posting_cp_explain' => 'Ha a Csatolmány hozzáadására klikkelsz, akkor meg fog jelenni a csatolmány felküldéséhez szükséges doboz.<br />Ha a Beküldött csatolmányokra kattintasz, akkor a már beküldött csatolmányokat fogod látni, és azokat akár módosíthatod is.<br />Ha az Új verzió feltöltése linkre kattintasz, akkor mindkét link megjelenik. Add meg az új csatolmányt, viszont ne kattints a Csatolmány hozzáadására. Az Új verzió feltöltésére kattintva tudod a csatolmányt frissíteni.',

// Posting/PM -> Posting Attachments
  'Add_attachment' => 'Csatolmány hozzáadása',
  'Add_attachment_title' => 'Egy csatolmány hozzáadása',
  'Add_attachment_explain' => 'Ha nem akarsz a hozzászóláshoz csatolmányt adni, akkor ezt a mezõt hagyd üresen',
  'File_name' => 'Fájlnév',
  'File_comment' => 'Fájl kommentálása',

// Posting/PM -> Posted Attachments
  'Posted_attachments' => 'Beküldött csatolmányok',
  'Options' => 'Opciók',
  'Update_comment' => 'Kommentár frissítése',
  'Delete_attachments' => 'Csatolmányok törlése',
  'Delete_attachment' => 'Csatolmány törlése',
  'Delete_thumbnail' => 'Bélyegkép törlése',
  'Upload_new_version' => 'Új verzió feltöltése',

// Errors -> Posting Attachments
  'Invalid_filename' => 'A(z) %s érvénytelen fájlnév', // replace %s with given filename
  'Attachment_php_size_na' => 'A csatolmány túl nagy.<br />Nem lehet nagyobb a fájlméret, mint amit a PHP megenged.<br />A csatolmány modul nem tudja felülbírálni a php.ini-ben meghatározott maximális feltölthetõ fájlméretet.',
  'Attachment_php_size_overrun' => 'A csatolmány túl nagy.<br />A maximális feltölthetõ fájlméret: %d MB.<br />Kérlek vedd figyelembe, hogy ezt az értéket a php.ini-ben deklarálták, sem a PHP-nek sem a csatolmánymodulnak nincs joga ezt felülbírálni.', // replace %d with ini_get('upload_max_filesize')
  'FileType_Mismatch' => 'File type mismatch',
  'Disallowed_extension' => 'A %s kiterjesztés nincs engedélyezve', // replace %s with extension (e.g. .php)
  'Disallowed_extension_within_forum' => 'Ebben a fórumban nincs engedélyezve a %s kiterjesztésû fájlok feltöltése', // replace %s with the Extension
  'Attachment_too_big' => 'A csatolmány túl nagy.<br />Maximális méret: %d %s', // replace %d with maximum file size, %s with size var
  'Attach_quota_reached' => 'Bocsi, de a csatolmányok átlépték a maximális fájlméretet. Kérlek lépj kapcsolatba az adminisztrátorokkal, ha bármi kérdésed van.',
  'Too_many_attachments' => 'A csatolmány nem adható hozzá, mert elérted az egy hozzászóláshoz csatolható maximális csatolmányok számát', // replace %d with maximum number of attachments
  'Error_imagesize' => 'A képcsatolmánynak muszáj %d pixelnél keskenyebbnek és %d pixelnél alacsonyabbnak lennie',
  'General_upload_error' => 'Feltöltési hiba: nem lehetett a %s csatolmányt feltölteni.', // replace %s with local path

  'Error_empty_add_attachbox' => 'Meg kell adnod minden értéket az \'Egy csatolmány hozzáadása\' dobozban',
  'Error_missing_old_entry' => 'Nem frissíthetõ a csatolmány, mert nem található a régi csatolmány bejegyzése',

// Errors -> PM Related
  'Attach_quota_sender_pm_reached' => 'Bocsi, de az összes csatolmány maximális fájlméretét elérte a Privát üzenetekkel kapott/küldött csatolmányok mérete a Privát üzenetek könyvtárában. Kérlek törölj néhányat a kapott/küldött csatolmányok közül.',
  'Attach_quota_receiver_pm_reached' => 'Sorry, but the maximum filesize for all Attachments in the Private Message Folder of \'%s\' has been reached. Please let him know, or wait until he/she has deleted some of his/her Attachments.',

// Errors -> Download
  'No_attachment_selected' => 'Nincs letöltésre vagy megnézésre kijelölt csatolmány.',
  'Error_no_attachment' => 'A kiválasztott csatolmány már nem létezik',

// Delete Attachments
  'Confirm_delete_attachments' => 'Tényleg törölni szeretn éd a kiválasztott csatolmányt?',
  'Deleted_attachments' => 'A kiválasztott csatolmány törölve lett.',
  'Error_deleted_attachments' => 'A csatolmány nem törölhetõ.',
  'Confirm_delete_pm_attachments' => 'Tényleg minden beküldött csatolmányt törölni szeretnél a PU könyvtárából??',

// General Error Messages
  'Attachment_feature_disabled' => 'A csatolási lehetõség ki van kapcsolva.',
  
  'Directory_does_not_exist' => 'A \'%s\' könyvtár nem létezik, vagy nem elérhetõ.', // replace %s with directory
  'Directory_is_not_a_dir' => 'Kérlek ellenõrizd le, hogy a \'%s\' könyvtár-e.', // replace %s with directory
  'Directory_not_writeable' => 'A \'%s\' könyvtár nem írható. Létre kell hoznod egy könyvtárat a feltöltéshez, és chmod-dal 777-es jogot kell adnod neki (vagy a tulajdonosát írd át a httpd tulajdonosává) hogy feltölthess fájlokat a könyvtárba.<br />Ha csak ftp hozzáférésed van akkor az \'Attribute\'-okat kell rwxrwxrwx-re állítanod.', // replace %s with directory
  
  'Ftp_error_connect' => 'Nem lehet az FTP szerverhez csatlakozni: \'%s\'. Kérlek ellenõrizd le az FTP beállításokat.',
  'Ftp_error_login' => 'Nem lehet az FTP szerverre bejelentkezni. A \'%s\' felhasználónév vagy a jelszó hibás. Kérlek ellenõrizd le az FTP beállításokat.',
  'Ftp_error_path' => 'Nincs hozzáférésed a \'%s\' ftp könyvtárhoz. Kérlek ellenõrizd le az FTP beállításokat.',
  'Ftp_error_upload' => 'Nem lehet feltölteni a \'%s\' ftp könyvtárba. Kérlek ellenõrizd le az FTP beállításokat.',
  'Ftp_error_delete' => 'Nem lehet fájlokat törölni az \'%s\' ftp könyvtárban. Kérlek ellenõrizd le az FTP beállításokat.<br />Másik lehetõség, hogy nem létezik az adott csatolmány. Kérlek elsõnek az Árnyékcsatolmányokat nézd meg.',
  'Ftp_error_pasv_mode' => 'Nem lehet ki/bekapcsolni az FTP passzív módját',

// Attach Rules Window
  'Rules_page' => 'Csatolási szabályok',
  'Attach_rules_title' => 'Engedélyezett kiterjesztések és méretkorlátok',
  'Group_rule_header' => '%s -> Maximális feltölthetõ méret: %s', // Replace first %s with Extension Group, second one with the Size STRING
  'Allowed_extensions_and_sizes' => 'Engedélyezett kiterjesztések és méretek',
  'Note_user_empty_group_permissions' => 'Megjegyzés:<br />Általánosságban elmondhatjuk, hogy  feltölthetsz fájlt a fórumba, <br />de néhány kiterjesztés nincs engedélyezve, <br />illetve nem tölthetsz fel bármit. Ha a szabályokat átléped, <br />egy hibaüzenettel fogunk figyelmeztetni.<br />',

// Quota Variables
  'Upload_quota' => 'Feltöltési kvóta',
  'Pm_quota' => 'PÜ kvóta',
  'User_upload_quota_reached' => 'Bocsi, de elérted a maximálisan elérhetõ feltöltési korlátodat: %d %s', // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
  'User_acp_title' => 'Felhasználói Csatolmánypanel',
  'UACP' => 'Felhasználói csatolmányok vezérlõpanelja',
  'User_uploaded_profile' => 'Feltöltve: %s',
  'User_quota_profile' => 'Kvóta: %s',
  'Upload_percent_profile' => '%d%%-ig tele',

// Common Variables
  'Bytes' => 'Byte',
  'KB' => 'KB',
  'MB' => 'MB',
  'Attach_search_query' => 'Csatolmány keresése',
  'Test_settings' => 'Beállítások tesztelése',
  'Not_assigned' => 'Nem átruházott',
  'No_file_comment_available' => 'Nincs elérhetõ kommentár a fájlhoz',
  'Attachbox_limit' => 'A csatolmányládád %d%%-ig tele',
  'No_quota_limit' => 'Nincs kvótakorlát',
  'Unlimited' => 'Korlátlan',
  )
);

?>