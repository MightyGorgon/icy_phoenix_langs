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

$lang = array_merge($lang, array(
// Album Index
	'Photo_Album' => 'Fotóalbum',
	'Pics' => 'Képek',
	'Last_Pic' => 'Legutolsó kép',
	'Public_Categories' => 'Publikus kategóriák',
	'No_Pics' => 'Nincsenek képek',
	'Users_Personal_Galleries' => 'Felhasználók személyes galériája',
	'Your_Personal_Gallery' => 'Személyes galériád',
	'Recent_Public_Pics' => 'Legfrissebb publikus képek',
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',

// Category View
	'Category_not_exist' => 'A kategória nem létezik',
	'Upload_Pic' => 'Kép feltöltése',
	'Upload_Pics' => 'Képek feltöltése',
	'JUpload_Pic' => 'Több kép feltöltése a JUpload segítségével',
	'Pic_Title' => 'Kép címe',
	'View' => 'Megtekintés',
	'Pic_Poster' => 'Szerző',
	'Pic_Image' => 'Kép',
	'Waiting' => ' Kép(ek) vár(nak) jóváhagyásra',

/*
	'Album_upload_can' => '<b>Feltölthetsz</b> új képeket ebben a kategóriában',
	'Album_upload_cannot' => '<b>Nem</b> tölthetsz fel új képeket ebben a kategóriában',
	'Album_rate_can' => '<b>Értékelheted</b> a képeket ebben a kategóriában',
	'Album_rate_cannot' => '<b>Nem</b> értékelheted a képeket ebben a kategóriában',
	'Album_comment_can' => '<b>Hozzászólhatsz</b> a képeket ebben a kategóriában',
	'Album_comment_cannot' => '<b>Nem</b> szólhatsz hozzá a képekhez ebben a kategóriában',
	'Album_edit_can' => '<b>Szerkesztheted</b> a képeidet ebben a kategóriában',
	'Album_edit_cannot' => '<b>Nem</b> szerkesztheted a képeidet ebben a kategóriában',
	'Album_delete_can' => '<b>Törölheted</b> a képeidet és a hozzászólásaidat ebben a kategóriában',
	'Album_delete_cannot' => '<b>Nem</b> törölheted a képeidet és a hozzászólásaidat ebben a kategóriában',
*/
	'Album_view_can' => '<b>Megtekintheted</b> a képeket',
	'Album_view_cannot' => '<b>Nem</b> tekintheted meg a képeket',
	'Album_upload_can' => '<b>Feltölthetsz</b> új képeket ebben a kategóriában',
	'Album_upload_cannot' => '<b>Nem</b> tölthetsz fel új képeket ebben a kategóriában',
	'Album_rate_can' => '<b>Értékelheted</b> a képeket ebben a kategóriában',
	'Album_rate_cannot' => '<b>Nem</b> értékelheted a képeket ebben a kategóriában',
	'Album_comment_can' => '<b>Hozzászólhatsz</b> a képeket ebben a kategóriában',
	'Album_comment_cannot' => '<b>Nem</b> szólhatsz hozzá a képekhez ebben a kategóriában',
	'Album_edit_can' => '<b>Szerkesztheted</b> a képeidet ebben a kategóriában',
	'Album_edit_cannot' => '<b>Nem</b> szerkesztheted a képeidet ebben a kategóriában',
	'Album_delete_can' => '<b>Törölheted</b> a képeidet és a hozzászólásaidat ebben a kategóriában',
	'Album_delete_cannot' => '<b>Nem</b> törölheted a képeidet és a hozzászólásaidat ebben a kategóriában',
	'Album_moderate_can' => '<b>%sModerálhatod%s</b> ezt a kategóriát',

	'Edit_pic' => 'Szerkesztés',
	'Delete_pic' => 'Törlés',
	'Rating' => 'Értékelés',
	'Comments' => 'Hozzászólások',
	'Last_Comment' => 'Utolsó hozzászólás',
	'New_Comment' => 'Új hozzászólás',
	'Not_rated' => '<i>Nincs értékelve</i>',
	'Random_Pictures' => 'Véletlenszerű képek',
	'Highest_Rated_Pictures' => 'Legjobbra értékelt képek',
	'Most_Viewed_Pictures' => 'Legtöbbször megtekintett képek',

	'Avatar_Set' => 'Beállítás avatarként',
	'BBCode_Copy' => 'BBCode másolása',

// Upload
	'Pic_Desc' => 'Kép leírása',
	'Plain_text_only' => 'Csak sima szöveg',
	'Max_length' => 'Max hosszúság (bájtban)',
	'Upload_pic_from_machine' => 'Kép feltöltése a számítógépről',
	'Upload_to_Category' => 'Feltöltés kategóriába',
	'Upload_thumbnail_from_machine' => 'Bélyegkép feltöltése a gépről (ugyanolyan fájltípusnak kell lennie, mint a képnek)',
	'Upload_thumbnail' => 'Bélyegkép feltöltése',
	'Upload_thumbnail_explain' => 'A képpel megegyező fájltípusnak kell lennie',
	'Thumbnail_size' => 'Bélyegkép mérete (képpontban)',
	'Filetype_and_thumbtype_do_not_match' => 'A képnek és a bélyegképnek ugyanolyan fájltípusnak kell lennie',

	'Upload_no_title' => 'Meg kell adnod a kép címét',
	'Upload_no_file' => 'Meg kell adnod a fájl elérési útvonalát',
	'Desc_too_long' => 'Túl hosszú a kép leírása',

	'JPG_allowed' => 'Engedélyezett JPG fájlok feltöltése',
	'PNG_allowed' => 'Engedélyezett PNG fájlok feltöltése',
	'GIF_allowed' => 'Engedélyezett GIF fájlok feltöltése',

	'Album_reached_quota' => 'A kategória elérte a maximális képek számát, ezért nem lehet újakat feltölteni. További információkért fordulj az oldal adminisztrátorához',
	'User_reached_pics_quota' => 'Elérted a maximális képek számát, ezért nem tölthetsz fel több képet. További információkért fordulj az oldal adminisztrátorához',

	'No_valid_category_selected' => 'Nincs érvényes kategória kiválasztva',
	'No_category_to_upload' => 'Nincs kategória, amelybe feltölthetnél.',
	'Not_allowed_file_type' => 'Ez a fájltípus nem engedélyezett',
	'Upload_image_size_too_big' => 'A kép túl nagy',
	'Upload_thumbnail_size_too_big' => 'A bélyegkép túl nagy',

	'Missed_pic_title' => 'Meg kell adnod a kép címét',

	'Click_return_category' => 'Kattints %side%s, hogy visszatérj a kategóriához',
	'Click_return_album_index' => 'Kattints %side%s, hogy visszatérj az Album főoldalra',

	'Add_File' => 'Fájl hozzáadása',
	'File_thumbnail_count_mismatch' => 'A képek és a bélyegképek száma nem egyezik',
	'No_thumbnail_for_picture_found' => 'Nem található bélyegkép a feltöltött képhez (név: %s)',
	'No_picture_for_thumbnail_found' => 'Nem található kép a feltöltött bélyegképhez (név: %s)',
	'Unknown_file_and_thumbnail_error_mismatch' => 'Ismeretlen hiba lépett fel a kép és az ikonkép feltöltése során<br />Kép neve: %s, ikonkép neve: %s<br />',
	'Picture_exceeded_maximum_size_INI' => 'A(z) \'%s\' nevű kép túl nagy. Kép kihagyva.<br />',
	'Thumbnail_exceeded_maximum_size_INI' => 'A(z) \'%s\' nevű ikonkép túl nagy. Kép és ikonkép kihagyva.<br />',
	'Execution_time_exceeded_skipping' => 'A szkript maximális engedélyezett futási ideje túl lett lépve. Az alábbi fájlok ki lettek hagyva:<br />',
	'Skipping_uploaded_picture_file' => '%s<br />',
	'Skipping_uploaded_picture_and_thumbnail_file' => '%s (bélyegkép: %s)<br />',
	'Album_upload_not_successful' => 'Képek feltöltése sikertelen<br /><br />',
	'Album_upload_partially_successful' => 'A képeknek csak egy részét sikerült feltölteni<br /><br />',
	'No_pictures_selected_for_upload' => 'Nem lett kép kijelölve a feltöltésre vagy ismeretlen hiba történt',

// 'Bad_upload_file_size' => 'A feltöltött fájl túl nagy, vagy hibás',
// 'Album_upload_successful' => 'A kép sikeresen feltöltve',
// 'Album_upload_need_approval' => 'A kép sikeresen feltöltve.<br /><br />Azonban publikálás előtt egy adminisztrátornak vagy egy moderátornak jóvá kell hagynia.',

	'Bad_upload' => 'Hibás feltöltés',
	'Bad_upload_file_size' => 'A feltöltött fájl (%s) túl nagy, vagy hibás',
	'Album_upload_successful' => 'Kép(ek) sikeresen feltöltve',
	'Album_upload_need_approval' => 'Kép(ek) sikeresen feltöltve.<br /><br />Azonban publikálás előtt egy adminisztrátornak vagy egy moderátornak jóvá kell hagynia.',

	'Rotation' => 'Forgatás (Óramutató járásával ellentétesen) - Fok',

	'Max_file_size' => 'Maximum fájlméret (bájtban)',
	'Max_width' => 'Maximum kép szélesség újratömörítés előtt (képpontban)',
	'Max_height' => 'Maximum képmagasság újratömörítés előtt (képpontban)',

// Album Nuffload
	'time_elapsed' => 'Eltelt idő',
	'time_remaining' => 'Hátralévő idő',
	'upload_in_progress' => 'Feltöltés folyamatban',
	'please_wait' => 'Kérlek, várj...',
	'uploaded' => 'Feltöltve %multi_id% a(z) %multi_max% képből.',
	'no_file_received' => 'Nem érkezett meg a képfájl',
	'no_thumbnail_file_received' => 'Nem érkezett meg a bélyegkép',
	'file_too_big' => 'A kép méretei túl nagyok',
	'thumbnail_too_big' => 'A bélyegkép méretei túl nagyok',
	'image_res_too_high' => 'A kép felbontása túl nagy',
	'add_field' => 'További képek feltöltése',
	'remove_field' => 'Mégsem',
	'ZIP_allowed' => 'ZIP fájlok feltöltése engedélyezve',

// View Pic
	'Pic_ID' => 'ID',
	'Pic_Details' => 'Kép adatai',
	'Pic_Size' => 'Méret',
	'Pic_Type' => 'Kép típusa',
	'Pic_BBCode' => 'BBCode',
	'Pic_not_exist' => 'A kép nem létezik',
	'Click_enlarge' => 'Kattints ide nagyobb képért',
	'Prev_Pic' => 'Előző kép',
	'Next_Pic' => 'Következő kép',
	'Slideshow' => 'Diavetítés',
	'Slideshow_Delay' => 'Diavetítés késleltetése',
	'Slideshow_On' => 'Diavetítés',
	'Slideshow_Off' => 'Diavetítés leállítása',
	'Pics_Nav' => 'Képek navigáció',
	'Pics_Nav_Next' => 'Következő kép',
	'Pics_Nav_Prev' => 'Előző kép',
	'Pics_Counter' => 'Kép %s/%s',

// Edit Pic
	'Edit_Pic_Info' => 'Kép adatainak szerkesztése',
	'Pics_updated_successfully' => 'Kép adatai sikeresen frissítve',

// Delete Pic
	'Album_delete_confirm' => 'Valóban törölni szeretnéd a képe(ke)t?',
	'Pics_deleted_successfully' => 'Kép(ek) sikeresen törölve',

// ModCP
	'Approval' => 'Jóváhagyás',
	'Approve' => 'Jóváhagy',
	'Unapprove' => 'Jóváhagyás visszavonása',
	'Status' => 'Állapot',
	'Locked' => 'Lezárt',
	'Not_approved' => 'Nincs jóváhagyva',
	'Approved' => 'Jóváhagyva',
	'Copy' => 'Másol',
	'Move_to_Category' => 'Áthelyezés kategóriába',
	'Pics_moved_successfully' => 'Kép(ek) sikeresen áthelyezve',
	'Copy_to_Category' => 'Másolás kategóriába',
	'Pics_copied_successfully' => 'Kép(ek) sikeresen átmásolva',
	'Pics_locked_successfully' => 'Kép(ek) sikeresen lezárva',
	'Pics_unlocked_successfully' => 'Kép(ek) sikeresen feloldva',
	'Pics_approved_successfully' => 'Kép(ek) sikeresen jóváhagyva',
	'Pics_unapproved_successfully' => 'Kép(ek) jóváhagyása sikeresen visszavonva',
	'NO_PICS_SPECIFIED' => 'Nincs kép meghatározva',

// Rate
	'Current_Rating' => 'Jelenlegi értékelés',
	'Please_Rate_It' => 'Kérjük, értékeld',
	'Login_To_Vote' => 'Az értékeléshez lépj be',
	'Already_rated' => 'Már értékelted a képet',
	'Own_Pic_Rate' => 'Nem értékelheted a saját képeidet',
	'Album_rate_successfully' => 'Kép sikeresen értékelve.',
	'Click_rate_more' => 'Kattints %side%s további képek értékeléséhez.',
	'Hot_Or_Not' => 'Népszerű vagy nem?',

// Comment
	'Comment_no_text' => 'Írd be a hozzászólásodat',
	'Comment_too_long' => 'A hozzászólás túl hosszú',
	'Comment_delete_confirm' => 'Valóban törölni szeretnéd a hozzászólást?',
	'Pic_Locked' => 'A kép le van zárva, ezért nem küldhetsz több hozzászólást',
	'Post_your_comment' => 'Írd be a hozzászólásodat',

// Personal Gallery
	'Personal_Gallery_Explain' => 'Megtekintheted a többi felhasználó személyes galériáját, ha a profiljukon a linkre kattintasz',
	'Personal_gallery_not_created' => '%s személyes galériája még nincs létrehozva',
	'Not_allowed_to_create_personal_gallery' => 'Az oldal adminisztrátora nem engedélyezi személyes galériák létrehozását',
	'Click_return_personal_gallery' => 'Kattints %side%s, hogy visszatérj a személyes galériához',

// Download Archive
	'Download_pics' => 'Képek letöltése (ZIP)',
	'Download_page' => 'Ezen az oldalon található képek letöltése (ZIP)',
	'No_Download_auth' => 'Nem archiválhatod az album fényképeit!',

// Email Notification
	'Email_Notification' => 'Album Email értesítés',
	'Email_Notification_Explain' => 'Ezzel a beállítással az adminok értesítést kapnak, ha új kép kerül az albumba',
	'Approvation_OK' => 'Jóváhagyva',
	'Approvation_NO' => 'Jóváhagyásra vár',

// Album Hierarchy Index Table
	'Last_Comment' => 'Utolsó hozzászólás',
	'Last_Comments' => 'Utolsó hozzászólás',
	'No_Comment_Info' => 'Nincs hozzászólás',
	'No_Pictures_In_Cat' => 'Nincsenek képek a kategóriában',
	'Total_Pics' => 'Összes kép',
	'Total_Comments' => 'Összes hozzászólás',
	'Last_Index_Thumbnail' => 'Utolsó kép',
	'One_Sub_Total_Pics' => '%d kép',
	'Multiple_Sub_Total_Pics' => '%d kép',
	'Album_sub_categories' => 'Alkategóriák',
	'No_Public_Galleries' => 'Nincs publikus galéria',
	'One_new_picture' => '%d új kép',
	'Multiple_new_pictures' => '%d új kép',

// Personal Album Hierarchy Index Table
	'Personal_Categories' => 'Személyes galéria',
	'Create_Personal_Categories' => 'Személyes galéria létrehozása',
	'Personal_Cat_Admin' => 'Személyes galéria kategória admin',
	'Recent_Personal_Pics' => '%s személyes galériájának friss képei',

// Album Moderator Control Panel
	'Modcp_check_all' => 'Összes bejelölése',
	'Modcp_uncheck_all' => 'Jelölések törlése',
	'Modcp_inverse_selection' => 'Megfordítás',

	'Show_selected_pic_view_mode' => 'Csak a kiválasztott személyes galéria kategória megjelenítése',
	'Show_all_pic_view_mode' => 'Személyes galéria összes képének megjelenítése',

// Access language strings
	'Album_Can_Manage_Categories' => '%s<b>Kezelheted</b>%s a galéria kategóriáit',
	'No_Personal_Category_admin' => 'Nem kezelheted a személyes galéria kategóriáit',

// The picture list of a member (album_memberlist.php)
	'Pic_Cat' => 'Kategória',
	'Picture_List_Of_User' => '%s összes képe',
	'Member_Picture_List_Explain' => 'Megtekintheted a többi felhasználó összes képét a profiljukon a linkre kattintva',
	'Comment_List_Of_User' => '%s összes hozzászólása',
	'Rating_List_Of_User' => '%s összes értékelése',
	'Show_All_Pictures_Of_user' => '%s összes képének megtekintése',
	'Show_All_Comments_Of_user' => '%s összes hozzászólásának megtekintése',
	'Show_All_Ratings_Of_user' => '%s összes értékelésének megtekintése',

// The pictures list
	'All_Picture_List_Of_User' => 'Összes kép',
	'All_Comment_List_Of_User' => 'Összes hozzászólás',
	'All_Rating_List_Of_User' => 'Összes értékelés',
	'All_Show_All_Pictures_Of_user' => 'Összes kép megjelenítése',
	'All_Show_All_Comments_Of_user' => 'Összes hozzászólás megjelenítése',
	'All_Show_All_Ratings_Of_user' => 'Összes értékelés megjelenítése',

	'Not_commented' => '<i>Nem szóltak hozzá</i>',

// Nuff's Stuff
	'Nuff_Click' => 'Kattints ide különleges hatások beállításához',
	'Nuff_UnClick' => 'Kattints ide normális megtekintéséhez',
	'Nuff_Title' => 'Különleges hatások',
	'Nuff_Explain' => 'Többféle hatás beállítása a képhez.<br />Kérjük, vedd figyelembe, hogy ezek a műveletek <i><b>leterhelik a CPU</b></i>-t ezért óvatosan kezeld. A CPU nagy leterhelésének elkerülése érdekében néhány hatás automatikusan átméretezi a képet.',
	'Nuff_Normal' => 'Normális kép',
	'Nuff_Normal_Explain' => 'Nincs hatás beállítva',
	'Nuff_BW' => 'Fekete-fehér',
	'Nuff_BW_Explain' => 'Kép átalakítása fekete-fehérré',
	'Nuff_Sepia' => 'Szépia tónus',
	'Nuff_Sepia_Explain' => 'Szépia tónust állít be a képnek',
	'Nuff_Flip' => 'Megfordítás',
	'Nuff_Flip_Explain' => 'Kép megfordítása',
	'Nuff_Mirror' => 'Tükör',
	'Nuff_Mirror_Explain' => 'Kép tükrözése',
	'Nuff_Flip_H' => 'Vízszintes',
	'Nuff_Flip_V' => 'Függőleges',
	'Nuff_Rotate' => 'Kép elforgatása (Óramutató járásával ellentétesen)',
	'Nuff_Rotate_Explain' => 'Kép elforgatása az óramutató járásával ellentétes irányban',
	'Nuff_Resize' => 'Átméreteés',
	'Nuff_Resize_Explain' => 'Kép átméretezése',
	'Nuff_Resize_W' => 'Szélesség',
	'Nuff_Resize_H' => 'Magasság',
	'Nuff_Resize_No_Resize' => 'Nincs átméretezés',
	'Nuff_Watermark' => 'Vízjel',
	'Nuff_Watermark_Explain' => 'Vízjel elhelyezése a képen',
	'Nuff_Recompress' => 'Újratömörítés',
	'Nuff_Recompress_Explain' => 'Kép újratömörítése',
	'Nuff_Alpha' => 'Alfa',
	'Nuff_Alpha_Explain' => 'Alfa-csatorna elhelyezése a képen',
	'Nuff_Blur' => 'Elmosódás',
	'Nuff_Blur_Explain' => 'Elmosódás beállítása',
	'Nuff_Pixelate' => 'Képpontosítás',
	'Nuff_Pixelate_Explain' => 'Képpontosítás alkalmazása a képen',
	'Nuff_Scatter' => 'Szórás',
	'Nuff_Scatter_Explain' => 'Szórás alkalmazása a képen',
	'Nuff_Infrared' => 'Infravörös',
	'Nuff_Infrared_Explain' => 'Infravörös szűrő alkalmazása a képen',
	'Nuff_Tint' => 'Színezés',
	'Nuff_Tint_Explain' => 'Vörös színezés alkalmazása a képen',
	'Nuff_Interlace' => 'Összekötés (vízszintes vonalakkal)',
	'Nuff_Interlace_Explain' => 'Összekötési-csatorna alkalmazása a képen',
	'Nuff_Screen' => 'Képernyő (vízszintes-függőleges vonalak)',
	'Nuff_Screen_Explain' => 'Képernyő-csatorna elhelyezése a képen',
	'Nuff_Stereogram' => 'Sztereográfia',
	'Nuff_Stereogram_Explain' => 'Kép átalakítása sztereográfiává (BW 16 bit szükséges)',

	'Pic_Gallery' => 'OTF Galéria',
	'Select_Pic' => 'Kép:',
	'Select_Category' => 'Kategória:',
	'Title_Description' => 'Cím &amp; leírás',

// Pic watch
	'No_longer_watching_comment' => 'Leiratkoztál a kép hozzászólásairól',
	'Watching_comment' => 'Feliratkoztál a képre.',
	'Pic_comment_notification' => 'Album hozzászólás-értesítő',
	'Pic_comment_watch_checkbox' => 'Jelöld be, ha értesülni szeretnél az új hozzászólásokról:',
	'Watch_pic' => 'Feliratkozás a képre új hozzászólásokért',
	'Unwatch_pic' => 'Leiratkozás a kép új hozzászólásairól',
	'Click_return_pic' => 'Kattints %side%s, hogy visszatérj a képhez',

	'Pic_RDF' => 'RSS Feed 1.0',
	'Pic_RSS' => 'RSS Feed 2.0',
	)
);

?>