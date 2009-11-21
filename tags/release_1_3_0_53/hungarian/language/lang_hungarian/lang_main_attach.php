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
  'Rules_attach_can' => '<b>Tudsz</b> f�jlokat csatolni',
  'Rules_attach_cannot' => '<b>Nem tudsz</b> f�jlokat csatolni',
  'Rules_download_can' => 'Le <b>tudod</b> t�lteni a f�jlokat',
  'Rules_download_cannot' => '<b>Nem tudod</b> let�lteni a f�jlokat',
  'Sorry_auth_view_attach' => 'Bocsi, de nincs jogod let�lteni vagy megn�zni ezt a csatolm�nyt',

// Viewtopic -> Display of Attachments
  'Description' => 'Meghat�roz�s', // used in Administration Panel too...
  'Downloaded' => 'Let�ltve',
  'Download' => 'Let�lt�s', // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
  'Filesize' => 'F�jlm�ret',
  'Viewed' => 'Megn�zve',
  'Download_number' => '%d-szor', // replace %d with count
  'Extension_disabled_after_posting' => 'A \'%s\' kiterjeszt�st deaktiv�lta a f�rum adminisztr�tora, ez�rt ez a csatolm�ny nem jelenik meg.', // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
  'Attach_posting_cp' => 'Csatolm�ny bek�ld� vez�rl�panel',
  'Attach_posting_cp_explain' => 'Ha a Csatolm�ny hozz�ad�s�ra klikkelsz, akkor meg fog jelenni a csatolm�ny felk�ld�s�hez sz�ks�ges doboz.<br />Ha a Bek�ld�tt csatolm�nyokra kattintasz, akkor a m�r bek�ld�tt csatolm�nyokat fogod l�tni, �s azokat ak�r m�dos�thatod is.<br />Ha az �j verzi� felt�lt�se linkre kattintasz, akkor mindk�t link megjelenik. Add meg az �j csatolm�nyt, viszont ne kattints a Csatolm�ny hozz�ad�s�ra. Az �j verzi� felt�lt�s�re kattintva tudod a csatolm�nyt friss�teni.',

// Posting/PM -> Posting Attachments
  'Add_attachment' => 'Csatolm�ny hozz�ad�sa',
  'Add_attachment_title' => 'Egy csatolm�ny hozz�ad�sa',
  'Add_attachment_explain' => 'Ha nem akarsz a hozz�sz�l�shoz csatolm�nyt adni, akkor ezt a mez�t hagyd �resen',
  'File_name' => 'F�jln�v',
  'File_comment' => 'F�jl komment�l�sa',

// Posting/PM -> Posted Attachments
  'Posted_attachments' => 'Bek�ld�tt csatolm�nyok',
  'Options' => 'Opci�k',
  'Update_comment' => 'Komment�r friss�t�se',
  'Delete_attachments' => 'Csatolm�nyok t�rl�se',
  'Delete_attachment' => 'Csatolm�ny t�rl�se',
  'Delete_thumbnail' => 'B�lyegk�p t�rl�se',
  'Upload_new_version' => '�j verzi� felt�lt�se',

// Errors -> Posting Attachments
  'Invalid_filename' => 'A(z) %s �rv�nytelen f�jln�v', // replace %s with given filename
  'Attachment_php_size_na' => 'A csatolm�ny t�l nagy.<br />Nem lehet nagyobb a f�jlm�ret, mint amit a PHP megenged.<br />A csatolm�ny modul nem tudja fel�lb�r�lni a php.ini-ben meghat�rozott maxim�lis felt�lthet� f�jlm�retet.',
  'Attachment_php_size_overrun' => 'A csatolm�ny t�l nagy.<br />A maxim�lis felt�lthet� f�jlm�ret: %d MB.<br />K�rlek vedd figyelembe, hogy ezt az �rt�ket a php.ini-ben deklar�lt�k, sem a PHP-nek sem a csatolm�nymodulnak nincs joga ezt fel�lb�r�lni.', // replace %d with ini_get('upload_max_filesize')
  'FileType_Mismatch' => 'File type mismatch',
  'Disallowed_extension' => 'A %s kiterjeszt�s nincs enged�lyezve', // replace %s with extension (e.g. .php)
  'Disallowed_extension_within_forum' => 'Ebben a f�rumban nincs enged�lyezve a %s kiterjeszt�s� f�jlok felt�lt�se', // replace %s with the Extension
  'Attachment_too_big' => 'A csatolm�ny t�l nagy.<br />Maxim�lis m�ret: %d %s', // replace %d with maximum file size, %s with size var
  'Attach_quota_reached' => 'Bocsi, de a csatolm�nyok �tl�pt�k a maxim�lis f�jlm�retet. K�rlek l�pj kapcsolatba az adminisztr�torokkal, ha b�rmi k�rd�sed van.',
  'Too_many_attachments' => 'A csatolm�ny nem adhat� hozz�, mert el�rted az egy hozz�sz�l�shoz csatolhat� maxim�lis csatolm�nyok sz�m�t', // replace %d with maximum number of attachments
  'Error_imagesize' => 'A k�pcsatolm�nynak musz�j %d pixeln�l keskenyebbnek �s %d pixeln�l alacsonyabbnak lennie',
  'General_upload_error' => 'Felt�lt�si hiba: nem lehetett a %s csatolm�nyt felt�lteni.', // replace %s with local path

  'Error_empty_add_attachbox' => 'Meg kell adnod minden �rt�ket az \'Egy csatolm�ny hozz�ad�sa\' dobozban',
  'Error_missing_old_entry' => 'Nem friss�thet� a csatolm�ny, mert nem tal�lhat� a r�gi csatolm�ny bejegyz�se',

// Errors -> PM Related
  'Attach_quota_sender_pm_reached' => 'Bocsi, de az �sszes csatolm�ny maxim�lis f�jlm�ret�t el�rte a Priv�t �zenetekkel kapott/k�ld�tt csatolm�nyok m�rete a Priv�t �zenetek k�nyvt�r�ban. K�rlek t�r�lj n�h�nyat a kapott/k�ld�tt csatolm�nyok k�z�l.',
  'Attach_quota_receiver_pm_reached' => 'Sorry, but the maximum filesize for all Attachments in the Private Message Folder of \'%s\' has been reached. Please let him know, or wait until he/she has deleted some of his/her Attachments.',

// Errors -> Download
  'No_attachment_selected' => 'Nincs let�lt�sre vagy megn�z�sre kijel�lt csatolm�ny.',
  'Error_no_attachment' => 'A kiv�lasztott csatolm�ny m�r nem l�tezik',

// Delete Attachments
  'Confirm_delete_attachments' => 'T�nyleg t�r�lni szeretn �d a kiv�lasztott csatolm�nyt?',
  'Deleted_attachments' => 'A kiv�lasztott csatolm�ny t�r�lve lett.',
  'Error_deleted_attachments' => 'A csatolm�ny nem t�r�lhet�.',
  'Confirm_delete_pm_attachments' => 'T�nyleg minden bek�ld�tt csatolm�nyt t�r�lni szeretn�l a PU k�nyvt�r�b�l??',

// General Error Messages
  'Attachment_feature_disabled' => 'A csatol�si lehet�s�g ki van kapcsolva.',
  
  'Directory_does_not_exist' => 'A \'%s\' k�nyvt�r nem l�tezik, vagy nem el�rhet�.', // replace %s with directory
  'Directory_is_not_a_dir' => 'K�rlek ellen�rizd le, hogy a \'%s\' k�nyvt�r-e.', // replace %s with directory
  'Directory_not_writeable' => 'A \'%s\' k�nyvt�r nem �rhat�. L�tre kell hoznod egy k�nyvt�rat a felt�lt�shez, �s chmod-dal 777-es jogot kell adnod neki (vagy a tulajdonos�t �rd �t a httpd tulajdonos�v�) hogy felt�lthess f�jlokat a k�nyvt�rba.<br />Ha csak ftp hozz�f�r�sed van akkor az \'Attribute\'-okat kell rwxrwxrwx-re �ll�tanod.', // replace %s with directory
  
  'Ftp_error_connect' => 'Nem lehet az FTP szerverhez csatlakozni: \'%s\'. K�rlek ellen�rizd le az FTP be�ll�t�sokat.',
  'Ftp_error_login' => 'Nem lehet az FTP szerverre bejelentkezni. A \'%s\' felhaszn�l�n�v vagy a jelsz� hib�s. K�rlek ellen�rizd le az FTP be�ll�t�sokat.',
  'Ftp_error_path' => 'Nincs hozz�f�r�sed a \'%s\' ftp k�nyvt�rhoz. K�rlek ellen�rizd le az FTP be�ll�t�sokat.',
  'Ftp_error_upload' => 'Nem lehet felt�lteni a \'%s\' ftp k�nyvt�rba. K�rlek ellen�rizd le az FTP be�ll�t�sokat.',
  'Ftp_error_delete' => 'Nem lehet f�jlokat t�r�lni az \'%s\' ftp k�nyvt�rban. K�rlek ellen�rizd le az FTP be�ll�t�sokat.<br />M�sik lehet�s�g, hogy nem l�tezik az adott csatolm�ny. K�rlek els�nek az �rny�kcsatolm�nyokat n�zd meg.',
  'Ftp_error_pasv_mode' => 'Nem lehet ki/bekapcsolni az FTP passz�v m�dj�t',

// Attach Rules Window
  'Rules_page' => 'Csatol�si szab�lyok',
  'Attach_rules_title' => 'Enged�lyezett kiterjeszt�sek �s m�retkorl�tok',
  'Group_rule_header' => '%s -> Maxim�lis felt�lthet� m�ret: %s', // Replace first %s with Extension Group, second one with the Size STRING
  'Allowed_extensions_and_sizes' => 'Enged�lyezett kiterjeszt�sek �s m�retek',
  'Note_user_empty_group_permissions' => 'Megjegyz�s:<br />�ltal�noss�gban elmondhatjuk, hogy  felt�lthetsz f�jlt a f�rumba, <br />de n�h�ny kiterjeszt�s nincs enged�lyezve, <br />illetve nem t�lthetsz fel b�rmit. Ha a szab�lyokat �tl�ped, <br />egy hiba�zenettel fogunk figyelmeztetni.<br />',

// Quota Variables
  'Upload_quota' => 'Felt�lt�si kv�ta',
  'Pm_quota' => 'P� kv�ta',
  'User_upload_quota_reached' => 'Bocsi, de el�rted a maxim�lisan el�rhet� felt�lt�si korl�todat: %d %s', // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
  'User_acp_title' => 'Felhaszn�l�i Csatolm�nypanel',
  'UACP' => 'Felhaszn�l�i csatolm�nyok vez�rl�panelja',
  'User_uploaded_profile' => 'Felt�ltve: %s',
  'User_quota_profile' => 'Kv�ta: %s',
  'Upload_percent_profile' => '%d%%-ig tele',

// Common Variables
  'Bytes' => 'Byte',
  'KB' => 'KB',
  'MB' => 'MB',
  'Attach_search_query' => 'Csatolm�ny keres�se',
  'Test_settings' => 'Be�ll�t�sok tesztel�se',
  'Not_assigned' => 'Nem �truh�zott',
  'No_file_comment_available' => 'Nincs el�rhet� komment�r a f�jlhoz',
  'Attachbox_limit' => 'A csatolm�nyl�d�d %d%%-ig tele',
  'No_quota_limit' => 'Nincs kv�takorl�t',
  'Unlimited' => 'Korl�tlan',
  )
);

?>