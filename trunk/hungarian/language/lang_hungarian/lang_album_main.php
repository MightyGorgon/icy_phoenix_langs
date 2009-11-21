<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_album_main.php 96 2009-04-27 16:48:19Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Smartor (smartor_xp@hotmail.com)
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
// Album Index
  'Photo_Album' => 'Fotóalbum',
  'Pics' => 'Képek',
  'Last_Pic' => 'Legújabb kép',
  'Public_Categories' => 'Publikus kategóriák',
  'No_Pics' => 'Nincsenek képek',
  'Users_Personal_Galleries' => 'Felhasználók személyes galériái',
  'Your_Personal_Gallery' => 'A személyes galériád',
  'Recent_Public_Pics' => 'Legfrissebb publikus képek',
  'Nav_Separator' => '&nbsp;&raquo;&nbsp;',

// Category View
  'Category_not_exist' => 'Nem létezik ez a kategória',
  'Upload_Pic' => 'Képfeltöltés',
  'Upload_Pics' => 'Képek feltöltése',
  'JUpload_Pic' => 'Több kép egyszerre történõ feltöltése a Jupload-dal',
  'Pic_Title' => 'Képcím',
  'View' => 'Megnéz',
  'Pic_Poster' => 'Beküldõ',
  'Pic_Image' => 'Kép',
  'Waiting' => ' elfogadásra váró kép(ek)',

/*
	'Album_upload_can' => 'You <b>can</b> upload new pics in this category',
	'Album_upload_cannot' => 'You <b>cannot</b> upload new pics in this category',
	'Album_rate_can' => 'You <b>can</b> rate pics in this category',
	'Album_rate_cannot' => 'You <b>cannot</b> rate pics in this category',
	'Album_comment_can' => 'You <b>can</b> post comments to pics in this category',
	'Album_comment_cannot' => 'You <b>cannot</b> post comments to pics in this category',
	'Album_edit_can' => 'You <b>can</b> edit your pics and comments in this category',
	'Album_edit_cannot' => 'You <b>cannot</b> edit your pics and comments in this category',
	'Album_delete_can' => 'You <b>can</b> delete your pics and comments in this category',
	'Album_delete_cannot' => 'You <b>cannot</b> delete your pics and comments in this category',
*/
  'Album_view_can' => 'Meg <b>tudod</b> nézni a képeket',
  'Album_view_cannot' => '<b>Nem tudod</b> megnézni a képeket',
  'Album_upload_can' => '<b>Tudsz</b> képet feltölteni ebbe a kategóriába',
  'Album_upload_cannot' => '<b>Nem tudsz</b> új képet feltölteni ebbe a kategóriába',
  'Album_rate_can' => '<b>Tudsz</b> értékelni képeket ebben a kategóriában',
  'Album_rate_cannot' => '<b>Nem tudod</b> értékelni a képeket ebben a kategóriában',
  'Album_comment_can' => '<b>Tudsz</b> kommentárt fûzni a képekhez ebben a kategóriában',
  'Album_comment_cannot' => '<b>Nem tudsz</b> kommentárt fûzni a képekhez ebben a kategóriában',
  'Album_edit_can' => '<b>Tudod</b> szerkeszteni a képeidet és kommentárjaidat ebben a kategóriában',
  'Album_edit_cannot' => '<b>Nem tudod</b> szerkeszteni a képeidet és kommentárjaidat ebben a kategóriában',
  'Album_delete_can' => '<b>Tudod</b> törölni a képeidet és a kommentárokat ebben a kategóriában',
  'Album_delete_cannot' => '<b>Nem tudod</b> törölni a képeidet és a kommentárokat ebben a kategóriában',
  'Album_moderate_can' => '<b>Tudod</b> %smoderálni%s ezt a kategóriát',
  
  'Edit_pic' => 'Szerkeszt',
  'Delete_pic' => 'Töröl',
  'Rating' => 'Értékel',
  'Comments' => 'Kommentárok',
  'Last_Comment' => 'Utolsó kommentár',
  'New_Comment' => 'Új kommentár',
  'Not_rated' => '<i>Nem értékelt</i>',
  'Random_Pictures' => 'Véletlen képek',
  'Highest_Rated_Pictures' => 'Legtöbbre értékelt képek',
  'Most_Viewed_Pictures' => 'Most nézett képek',
  
  'Avatar_Set' => 'Beállítás avaratként',
  'BBCode_Copy' => 'BBCode másolás',

// Upload
  'Pic_Desc' => 'Kép leírása',
  'Plain_text_only' => 'Tiszán szöveg',
  'Max_length' => 'Max hossz (byte)',
  'Upload_pic_from_machine' => 'Kép feltöltése a gépedrõl',
  'Upload_to_Category' => 'Feltöltés ebbe a kategóriába',
  'Upload_thumbnail_from_machine' => 'Bélyegkép feltöltése a géprõl (muszály ugyanannak a típusnak lenni, mint a kép)',
  'Upload_thumbnail' => 'Bélyegkép feltöltése',
  'Upload_thumbnail_explain' => 'Muszály, hogy ugyanaz a típus legyen, mint a kép',
  'Thumbnail_size' => 'Bélyeg mérete (pixel)',
  'Filetype_and_thumbtype_do_not_match' => 'A kép és a bélyeg típusának meg kell egyeznie',
  
  'Upload_no_title' => 'Muszály címet adnod a képednek',
  'Upload_no_file' => 'Muszály egy útvonalat és fájlnevet megadnod',
  'Desc_too_long' => 'A leírás túl hosszú',
  
  'JPG_allowed' => 'Engedélyezett a JPG fájlok feltöltése',
  'PNG_allowed' => 'Engedélyezett a JPG fájlok feltöltése',
  'GIF_allowed' => 'Engedélyezett a JPG fájlok feltöltése',
  
  'Album_reached_quota' => 'Korlátozva van a kategóriába feltölthetõ képek száma. Nem tudsz több képet feltölteni. Kérlek lépj kapcsolatba az administrátorral.',
  'User_reached_pics_quota' => 'Korlátozva van a feltölthetõ képeid száma. Nem tudsz több képet feltölteni. Kérlek lépj kapcsolatba az administrátorral.',
  
  'No_valid_category_selected' => 'Nincs valós albumkategória kiválasztva',
  'No_category_to_upload' => 'Sajnos nem adtál megf kategóriát a feltöltéshez.',
  'Not_allowed_file_type' => 'A fájl típusa nincs engedélyezve',
  'Upload_image_size_too_big' => 'A kép méretei túl nagyok',
  'Upload_thumbnail_size_too_big' => 'A bélyegkép méretei túl nagyok',
  
  'Missed_pic_title' => 'Muszály a képednek címet adnod',
  
  'Click_return_category' => 'Kattints %side%s, hogy visszatérj a kategóriához',
  'Click_return_album_index' => 'Kattints %side%s, hogy visszatérj az Album indexéhez',
  
  'Add_File' => 'Fájl hozzáadása',
  'File_thumbnail_count_mismatch' => 'A feltöltött képek és bélyegképek száma nem egyezik',
  'No_thumbnail_for_picture_found' => 'A feltöltött képhez nem találom a bélyegképet (neve: %s)',
  'No_picture_for_thumbnail_found' => 'Nem találom a képet a feltöltött bélyegképhez (neve: %s)',
  'Unknown_file_and_thumbnail_error_mismatch' => 'Ismeretlen hiba keletkezett a kép és bélyegkép feltöltésénél<br />Kép neve: %s és a bélyegkép neve: %s<br />',
  'Picture_exceeded_maximum_size_INI' => 'A \'%s\' nevû kép túl nagy. A kép ki lett hagyva.<br />',
  'Thumbnail_exceeded_maximum_size_INI' => 'A \'%s\' nevû bélyegkép túl nagy. A kép és a bélyegkép ki lett hagyva..<br />',
  'Execution_time_exceeded_skipping' => 'A szkript maximális engedélyezett futási ideje túl lett lépve. Az alábbi fájlok ki lettek hagyva:<br />',
  'Skipping_uploaded_picture_file' => '%s<br/>',
  'Skipping_uploaded_picture_and_thumbnail_file' => '%s (bélyegkép: %s)<br/>',
  'Album_upload_not_successful' => 'A képek feltöltése sikertelen<br/><br/>',
  'Album_upload_partially_successful' => 'Csak a képek egy része érkezett meg sikeresen.<br/><br/>',
  'No_pictures_selected_for_upload' => 'Nem lett kép kijelölve a feltöltésre vagy ismeretlen hiba történt',

// 'Bad_upload_file_size' => 'Your uploaded file is too large or corrupted',
// 'Album_upload_successful' => 'Your pic has been uploaded successfully',
// 'Album_upload_need_approval' => 'Your pic has been uploaded successfully.<br /><br />But the feature Pic Approval has been enabled so your pic must be approved by a administrator or a moderator before posting',

  'Bad_upload' => 'Rossz feltöltés',
  'Bad_upload_file_size' => 'A feltöltött fájlod (%s) túll nagy vagy hibás',
  'Album_upload_successful' => 'A kép(ek)et sikeresen feltöltötted',
  'Album_upload_need_approval' => 'A kép(ek)et sikeresen feltöltötted.<br /><br />De a képeket el kell fogadnia egy adminisztrátornak vagy moderátornak, mielõtt megjelennének az oldalon.',
  
  'Rotation' => 'Forgatás - óramutató járásával ellentétesen (fok)',
  
  'Max_file_size' => 'Maximális fájlméret (byte)',
  'Max_width' => 'Maximális képszélesség újratömörítés elõtt (pixel)',
  'Max_height' => 'Maximális képmagasság újratömörítés elõtt (pixel)',

// Album Nuffload
  'time_elapsed' => 'Eltelt idõ',
  'time_remaining' => 'Maradék idõ',
  'upload_in_progress' => 'Feltöltés folyamatban',
  'please_wait' => 'Kis türelmet...',
  'uploaded' => 'Feltöltve %multi_id% a %multi_max% képbõl.',
  'no_file_received' => 'Nem érkezett meg a kép',
  'no_thumbnail_file_received' => 'Bélyegkép-fájl nem érkezett',
  'file_too_big' => 'A képfájl mérete túl nagy',
  'thumbnail_too_big' => 'A bélyegképfájl mérete túl nagy',
  'image_res_too_high' => 'A kép felbontása túl nagy',
  'add_field' => 'Fájlfeltöltés mezõ hozzáadva',
  'remove_field' => 'Fájlfeltöltés mezõ elvéve',
  'ZIP_allowed' => 'Engedélyezett a ZIP fájlok feltöltése',

// View Pic
  'Pic_ID' => 'ID',
  'Pic_Details' => 'Kép részletei',
  'Pic_Size' => 'Méret',
  'Pic_Type' => 'Kép típusa',
  'Pic_BBCode' => 'BBCode',
  'Pic_not_exist' => 'Ez a kép nem létezik',
  'Click_enlarge' => 'Kattints a képre a nagyobb verzióért',
  'Prev_Pic' => 'Elõzõ kép',
  'Next_Pic' => 'Következõ kép',
  'Slideshow' => 'Diavetítés',
  'Slideshow_Delay' => 'Diavetítés idõzítése',
  'Slideshow_On' => 'Diavetítés',
  'Slideshow_Off' => 'Diavetítés áll',
  'Pics_Nav' => 'Képnavigáció',
  'Pics_Nav_Next' => 'Következõ kép',
  'Pics_Nav_Prev' => 'Elõzõ kép',
  'Pics_Counter' => '%s. kép a %s-bõl',

// Edit Pic
  'Edit_Pic_Info' => 'Képinformáció szerkesztése',
  'Pics_updated_successfully' => 'A képinformáció frissítése sikeres',

// Delete Pic
  'Album_delete_confirm' => 'Tényleg törölni akarod ez(eke)t a kép(eke)t??',
  'Pics_deleted_successfully' => 'Kép(ek) törlése sikeres',

// ModCP
  'Approval' => 'Jóváhagyás',
  'Approve' => 'Jóváhagy',
  'Unapprove' => 'Elutasít',
  'Status' => 'Státusz',
  'Locked' => 'Zárolt',
  'Not_approved' => 'Nem jóváhagyott',
  'Approved' => 'Jóváhagyott',
  'Copy' => 'Másol',
  'Move_to_Category' => 'Mozgatás ebbe a kategóriába',
  'Pics_moved_successfully' => 'A kép(ek) sikeresen átmozgatva',
  'Copy_to_Category' => 'Másolás ebbe a kategóriába',
  'Pics_copied_successfully' => 'A kép(ek) sikeresen másolva',
  'Pics_locked_successfully' => 'A kép(ek) sikeresen zárolva',
  'Pics_unlocked_successfully' => 'A kép(ek) sikeresen feloldva',
  'Pics_approved_successfully' => 'A kép(ek) sikeresen jóváhagyva',
  'Pics_unapproved_successfully' => 'A kép(ek) sikeresen elutasítva',

// Rate
  'Current_Rating' => 'Jelenlegi értékelés',
  'Please_Rate_It' => 'Kérlek értékeld',
  'Login_To_Vote' => 'Kérlek jelentkezz be az értékeléshez',
  'Already_rated' => 'Már értékelted ezt a képet',
  'Own_Pic_Rate' => 'Nem értékelheted a saját képeid',
  'Album_rate_successfully' => 'Sikeresen értékelted a képet',
  'Click_rate_more' => 'Kattints %side%s a többi kép értékeléséhez',
  'Hot_Or_Not' => 'Friss/nem friss',

// Comment
  'Comment_no_text' => 'Nyomj entert a kommentárhoz',
  'Comment_too_long' => 'A kommentárod túl hosszú',
  'Comment_delete_confirm' => 'Tényleg törölni akarod ezt a kommentárt?',
  'Pic_Locked' => 'Bocsi, de ez a kép zárolt. Ezt a  képet nem tudod kommentálni.',
  'Post_your_comment' => 'Kérlek nyomj entert a kommentárhoz!',

// Personal Gallery
  'Personal_Gallery_Explain' => 'Láthatod más személyes galériáját, ha a profiljára kattintasz',
  'Personal_gallery_not_created' => '%s személyes galériája nem lett létrehozva',
  'Not_allowed_to_create_personal_gallery' => 'Bocsi, de az adminisztrátor úgy döntött, hogy ezen az oldalon nem lehet személyes galériát létrehozni',
  'Click_return_personal_gallery' => 'Kattints %side%s a személyes galériához való visszatéréshez',

// Download Archive
  'Download_pics' => 'Képek letöltése (ZIP)',
  'Download_page' => 'Az ezen a lapon lévõ képek letöltése (ZIP)',
  'No_Download_auth' => 'Nincs jogod archiválni a fotókat ebben az albumban!',

// Email Notification
  'Email_Notification' => 'Album e-mail figyelmeztetés',
  'Email_Notification_Explain' => 'Ezen a beállítás engedi, hogy egy admin értesítve legyen, ha az albumba új képet küldenek',
  'Approvation_OK' => 'Elfogadva',
  'Approvation_NO' => 'Nem elfogadott',

// Album Hierarchy Index Table
  'Last_Comment' => 'Friss kommentár',
  'Last_Comments' => 'Friss kommentárok',
  'No_Comment_Info' => 'Nincsenek kommentárok',
  'No_Pictures_In_Cat' => 'Nincs kép ebben a kategóriában',
  'Total_Pics' => 'Összes kép',
  'Total_Comments' => 'Összes kommentár',
  'Last_Index_Thumbnail' => 'Legújabb kép',
  'One_Sub_Total_Pics' => '%d kép',
  'Multiple_Sub_Total_Pics' => '%d képek',
  'Album_sub_categories' => 'Alkategóriák',
  'No_Public_Galleries' => 'Nincs publikus kategória',
  'One_new_picture' => '%d új kép',
  'Multiple_new_pictures' => '%d új képek',

// Personal Album Hierarchy Index Table
  'Personal_Categories' => 'Személyes galéria',
  'Create_Personal_Categories' => 'Személyes galéria létrehozása',
  'Personal_Cat_Admin' => 'Személyes galéria adminisztrálás',
  'Recent_Personal_Pics' => 'Fogadott képek a %s személyes galériában',
  
// Album Moderator Control Panel
  'Modcp_check_all' => 'Mind megjelöl',
  'Modcp_uncheck_all' => 'Mind jelöletlen',
  'Modcp_inverse_selection' => 'Fordított kijelölés',
  
  'Show_selected_pic_view_mode' => 'Csak a kijelölt képek látszódjanak a személyes galériában',
  'Show_all_pic_view_mode' => 'Látszódjon minden kép ebben a kategóriában',
  
// Access language strings
  'Album_Can_Manage_Categories' => '<b>Tudod</b> %skezelni%s a galéria kategóriáit',
  'No_Personal_Category_admin' => '<b>Nem tudod></b> kezelni a személyes galériádat',
  
// The picture list of a member (album_memberlist.php)
  'Pic_Cat' => 'Kategória',
  'Picture_List_Of_User' => '%s minden képe',
  'Member_Picture_List_Explain' => 'Láthatod bármely felhasználó által közzé tett képek teljes listáját a saját profiljában',
  'Comment_List_Of_User' => '%s minden kommentárja',
  'Rating_List_Of_User' => '%s minden értékelése',
  'Show_All_Pictures_Of_user' => '%s minden képének megjelenítése',
  'Show_All_Comments_Of_user' => '%s minden kommentárjának megjelenítése',
  'Show_All_Ratings_Of_user' => '%s minden értékelésének megjelenítése',

// The pictures list
  'All_Picture_List_Of_User' => 'Minden kép',
  'All_Comment_List_Of_User' => 'Minden kommentár',
  'All_Rating_List_Of_User' => 'Minden értékelés',
  'All_Show_All_Pictures_Of_user' => 'Minden kép mutatása',
  'All_Show_All_Comments_Of_user' => 'Minden kommentár mutatása',
  'All_Show_All_Ratings_Of_user' => 'Minden értékelés mutatása',
  
  'Not_commented' => '<i>Nem kommentált</i>',

// Nuff's Stuff
  'Nuff_Click' => 'Kattints ide a különleges effektek alkalmazására',
  'Nuff_UnClick' => 'Kattints ide a normál megjelenítésre',
  'Nuff_Title' => 'Különleges effektek',
  'Nuff_Explain' => 'Ezt az oldalt a feltöltött képek effekttel történõ manipulálására használhatod.<br />Kérlek vedd figyelembe, hogy a <i><b>kiszolgálót ez nagyon leterheli</b></i>, ezért kérlek csak mérsékelten használd. Néhány effekt nem terheli túlságosan a szerver processzorát ( pl.: átméretezés)',
  'Nuff_Normal' => 'Normál kép',
  'Nuff_Normal_Explain' => 'Nincs effekt alkalmazva',
  'Nuff_BW' => 'Fekete-fehér',
  'Nuff_BW_Explain' => 'Ez az effekt fekete-fehér képpé alakítja',
  'Nuff_Sepia' => 'Régies tónus',
  'Nuff_Sepia_Explain' => 'Ez az effekt egy régi fényképhez hasonlóvá alakítja át a képet',
  'Nuff_Flip' => 'Megfordít',
  'Nuff_Flip_Explain' => 'Használd ezt a funkciót, ha feje tetejére akarod állítani a képet',
  'Nuff_Mirror' => 'Tükrözés',
  'Nuff_Mirror_Explain' => 'Ez az effekt tükrözi a képet',
  'Nuff_Flip_H' => 'Vízszintes',
  'Nuff_Flip_V' => 'Függõleges',
  'Nuff_Rotate' => 'Kép forgatása (Óramutató járásával ellentétesen)',
  'Nuff_Rotate_Explain' => 'Kép forgatása az óramutató járásával ellentétesen',
  'Nuff_Resize' => 'Átméretezés',
  'Nuff_Resize_Explain' => 'Ez a funkció átméretezi a képet',
  'Nuff_Resize_W' => 'Szélesség',
  'Nuff_Resize_H' => 'Magasság',
  'Nuff_Resize_No_Resize' => 'Nincs átméretezés',
  'Nuff_Watermark' => 'Vízjel',
  'Nuff_Watermark_Explain' => 'Vízjel alkalmazása a képre',
  'Nuff_Recompress' => 'Újratömörítés',
  'Nuff_Recompress_Explain' => 'Ez a funkció újratömöríti a képet',
  'Nuff_Alpha' => 'Alfa',
  'Nuff_Alpha_Explain' => 'Ez az effekt egy alfa csatorna értéket alkalmaz a képre',
  'Nuff_Blur' => 'Elmosás',
  'Nuff_Blur_Explain' => 'Ez az effekt egy elmosási szûrõt alkalmaz a képen',
  'Nuff_Pixelate' => 'Pixelesít',
  'Nuff_Pixelate_Explain' => 'Ez az effekt egy nagyobb pixeleknek látszó sûrõt alkalmaz',
  'Nuff_Scatter' => 'Szétráz',
  'Nuff_Scatter_Explain' => 'Ez az effekt a képpontokat eltávolítja a helyükrõl. Úgy néz ki mintha megrázták volna a képet, és az szétesne',
  'Nuff_Infrared' => 'Infravörös',
  'Nuff_Infrared_Explain' => 'Ez az effekt egy infravörös szûrõt alkalmaz a képre',
  'Nuff_Tint' => 'Tinta',
  'Nuff_Tint_Explain' => 'Ez az effekt vörös tintát önt a képre',
  'Nuff_Interlace' => 'Interlace (Vízszintes vonalak)',
  'Nuff_Interlace_Explain' => 'Ez az effekt egy interlace csatornát feszít a képre',
  'Nuff_Screen' => 'Screen (vízszintes és függõleges vonalak)',
  'Nuff_Screen_Explain' => 'Ez az effekt egy screen csatornát feszít a képre',
  'Nuff_Stereogram' => 'Sztereográf',
  'Nuff_Stereogram_Explain' => 'Ez az effekt sztereografikus képet készít (FF 16 bit szükséges)',
  
  'Pic_Gallery' => 'OTF Galléria',
  'Select_Pic' => 'Kép kiválasztása',
  'Select_Category' => 'Kategória kiválasztása',
  'Title_Description' => 'Cím &amp; Leírás',
  
// Pic watch
  'No_longer_watching_comment' => 'Mostantól a képhez fûzött kommentárok nem lesznek figyelve',
  'Watching_comment' => 'Mostantól a képhez fûzött kommentárok figyelve lesznek',
  'Pic_comment_notification' => 'Album kommentárjainak figyelése',
  'Pic_comment_watch_checkbox' => 'Jelöld ezt be, ha figyelni szeretnéd a kommentárokat:',
  'Watch_pic' => 'A képhez fûzött kommentárok figyelésének indítása',
  'Unwatch_pic' => 'A képhez fûzött kommentárok figyelésének abbahagyása',
  'Click_return_pic' => 'Kattints %side%s a képhez való visszatéréshez',
  
  'Pic_RDF' => 'RSS Feed 1.0',
  'Pic_RSS' => 'RSS Feed 2.0',
));
?>