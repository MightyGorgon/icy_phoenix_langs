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
  'Photo_Album' => 'Fot�album',
  'Pics' => 'K�pek',
  'Last_Pic' => 'Leg�jabb k�p',
  'Public_Categories' => 'Publikus kateg�ri�k',
  'No_Pics' => 'Nincsenek k�pek',
  'Users_Personal_Galleries' => 'Felhaszn�l�k szem�lyes gal�ri�i',
  'Your_Personal_Gallery' => 'A szem�lyes gal�ri�d',
  'Recent_Public_Pics' => 'Legfrissebb publikus k�pek',
  'Nav_Separator' => '&nbsp;&raquo;&nbsp;',

// Category View
  'Category_not_exist' => 'Nem l�tezik ez a kateg�ria',
  'Upload_Pic' => 'K�pfelt�lt�s',
  'Upload_Pics' => 'K�pek felt�lt�se',
  'JUpload_Pic' => 'T�bb k�p egyszerre t�rt�n� felt�lt�se a Jupload-dal',
  'Pic_Title' => 'K�pc�m',
  'View' => 'Megn�z',
  'Pic_Poster' => 'Bek�ld�',
  'Pic_Image' => 'K�p',
  'Waiting' => ' elfogad�sra v�r� k�p(ek)',

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
  'Album_view_can' => 'Meg <b>tudod</b> n�zni a k�peket',
  'Album_view_cannot' => '<b>Nem tudod</b> megn�zni a k�peket',
  'Album_upload_can' => '<b>Tudsz</b> k�pet felt�lteni ebbe a kateg�ri�ba',
  'Album_upload_cannot' => '<b>Nem tudsz</b> �j k�pet felt�lteni ebbe a kateg�ri�ba',
  'Album_rate_can' => '<b>Tudsz</b> �rt�kelni k�peket ebben a kateg�ri�ban',
  'Album_rate_cannot' => '<b>Nem tudod</b> �rt�kelni a k�peket ebben a kateg�ri�ban',
  'Album_comment_can' => '<b>Tudsz</b> komment�rt f�zni a k�pekhez ebben a kateg�ri�ban',
  'Album_comment_cannot' => '<b>Nem tudsz</b> komment�rt f�zni a k�pekhez ebben a kateg�ri�ban',
  'Album_edit_can' => '<b>Tudod</b> szerkeszteni a k�peidet �s komment�rjaidat ebben a kateg�ri�ban',
  'Album_edit_cannot' => '<b>Nem tudod</b> szerkeszteni a k�peidet �s komment�rjaidat ebben a kateg�ri�ban',
  'Album_delete_can' => '<b>Tudod</b> t�r�lni a k�peidet �s a komment�rokat ebben a kateg�ri�ban',
  'Album_delete_cannot' => '<b>Nem tudod</b> t�r�lni a k�peidet �s a komment�rokat ebben a kateg�ri�ban',
  'Album_moderate_can' => '<b>Tudod</b> %smoder�lni%s ezt a kateg�ri�t',
  
  'Edit_pic' => 'Szerkeszt',
  'Delete_pic' => 'T�r�l',
  'Rating' => '�rt�kel',
  'Comments' => 'Komment�rok',
  'Last_Comment' => 'Utols� komment�r',
  'New_Comment' => '�j komment�r',
  'Not_rated' => '<i>Nem �rt�kelt</i>',
  'Random_Pictures' => 'V�letlen k�pek',
  'Highest_Rated_Pictures' => 'Legt�bbre �rt�kelt k�pek',
  'Most_Viewed_Pictures' => 'Most n�zett k�pek',
  
  'Avatar_Set' => 'Be�ll�t�s avaratk�nt',
  'BBCode_Copy' => 'BBCode m�sol�s',

// Upload
  'Pic_Desc' => 'K�p le�r�sa',
  'Plain_text_only' => 'Tisz�n sz�veg',
  'Max_length' => 'Max hossz (byte)',
  'Upload_pic_from_machine' => 'K�p felt�lt�se a g�pedr�l',
  'Upload_to_Category' => 'Felt�lt�s ebbe a kateg�ri�ba',
  'Upload_thumbnail_from_machine' => 'B�lyegk�p felt�lt�se a g�pr�l (musz�ly ugyanannak a t�pusnak lenni, mint a k�p)',
  'Upload_thumbnail' => 'B�lyegk�p felt�lt�se',
  'Upload_thumbnail_explain' => 'Musz�ly, hogy ugyanaz a t�pus legyen, mint a k�p',
  'Thumbnail_size' => 'B�lyeg m�rete (pixel)',
  'Filetype_and_thumbtype_do_not_match' => 'A k�p �s a b�lyeg t�pus�nak meg kell egyeznie',
  
  'Upload_no_title' => 'Musz�ly c�met adnod a k�pednek',
  'Upload_no_file' => 'Musz�ly egy �tvonalat �s f�jlnevet megadnod',
  'Desc_too_long' => 'A le�r�s t�l hossz�',
  
  'JPG_allowed' => 'Enged�lyezett a JPG f�jlok felt�lt�se',
  'PNG_allowed' => 'Enged�lyezett a JPG f�jlok felt�lt�se',
  'GIF_allowed' => 'Enged�lyezett a JPG f�jlok felt�lt�se',
  
  'Album_reached_quota' => 'Korl�tozva van a kateg�ri�ba felt�lthet� k�pek sz�ma. Nem tudsz t�bb k�pet felt�lteni. K�rlek l�pj kapcsolatba az administr�torral.',
  'User_reached_pics_quota' => 'Korl�tozva van a felt�lthet� k�peid sz�ma. Nem tudsz t�bb k�pet felt�lteni. K�rlek l�pj kapcsolatba az administr�torral.',
  
  'No_valid_category_selected' => 'Nincs val�s albumkateg�ria kiv�lasztva',
  'No_category_to_upload' => 'Sajnos nem adt�l megf kateg�ri�t a felt�lt�shez.',
  'Not_allowed_file_type' => 'A f�jl t�pusa nincs enged�lyezve',
  'Upload_image_size_too_big' => 'A k�p m�retei t�l nagyok',
  'Upload_thumbnail_size_too_big' => 'A b�lyegk�p m�retei t�l nagyok',
  
  'Missed_pic_title' => 'Musz�ly a k�pednek c�met adnod',
  
  'Click_return_category' => 'Kattints %side%s, hogy visszat�rj a kateg�ri�hoz',
  'Click_return_album_index' => 'Kattints %side%s, hogy visszat�rj az Album index�hez',
  
  'Add_File' => 'F�jl hozz�ad�sa',
  'File_thumbnail_count_mismatch' => 'A felt�lt�tt k�pek �s b�lyegk�pek sz�ma nem egyezik',
  'No_thumbnail_for_picture_found' => 'A felt�lt�tt k�phez nem tal�lom a b�lyegk�pet (neve: %s)',
  'No_picture_for_thumbnail_found' => 'Nem tal�lom a k�pet a felt�lt�tt b�lyegk�phez (neve: %s)',
  'Unknown_file_and_thumbnail_error_mismatch' => 'Ismeretlen hiba keletkezett a k�p �s b�lyegk�p felt�lt�s�n�l<br />K�p neve: %s �s a b�lyegk�p neve: %s<br />',
  'Picture_exceeded_maximum_size_INI' => 'A \'%s\' nev� k�p t�l nagy. A k�p ki lett hagyva.<br />',
  'Thumbnail_exceeded_maximum_size_INI' => 'A \'%s\' nev� b�lyegk�p t�l nagy. A k�p �s a b�lyegk�p ki lett hagyva..<br />',
  'Execution_time_exceeded_skipping' => 'A szkript maxim�lis enged�lyezett fut�si ideje t�l lett l�pve. Az al�bbi f�jlok ki lettek hagyva:<br />',
  'Skipping_uploaded_picture_file' => '%s<br/>',
  'Skipping_uploaded_picture_and_thumbnail_file' => '%s (b�lyegk�p: %s)<br/>',
  'Album_upload_not_successful' => 'A k�pek felt�lt�se sikertelen<br/><br/>',
  'Album_upload_partially_successful' => 'Csak a k�pek egy r�sze �rkezett meg sikeresen.<br/><br/>',
  'No_pictures_selected_for_upload' => 'Nem lett k�p kijel�lve a felt�lt�sre vagy ismeretlen hiba t�rt�nt',

// 'Bad_upload_file_size' => 'Your uploaded file is too large or corrupted',
// 'Album_upload_successful' => 'Your pic has been uploaded successfully',
// 'Album_upload_need_approval' => 'Your pic has been uploaded successfully.<br /><br />But the feature Pic Approval has been enabled so your pic must be approved by a administrator or a moderator before posting',

  'Bad_upload' => 'Rossz felt�lt�s',
  'Bad_upload_file_size' => 'A felt�lt�tt f�jlod (%s) t�ll nagy vagy hib�s',
  'Album_upload_successful' => 'A k�p(ek)et sikeresen felt�lt�tted',
  'Album_upload_need_approval' => 'A k�p(ek)et sikeresen felt�lt�tted.<br /><br />De a k�peket el kell fogadnia egy adminisztr�tornak vagy moder�tornak, miel�tt megjelenn�nek az oldalon.',
  
  'Rotation' => 'Forgat�s - �ramutat� j�r�s�val ellent�tesen (fok)',
  
  'Max_file_size' => 'Maxim�lis f�jlm�ret (byte)',
  'Max_width' => 'Maxim�lis k�psz�less�g �jrat�m�r�t�s el�tt (pixel)',
  'Max_height' => 'Maxim�lis k�pmagass�g �jrat�m�r�t�s el�tt (pixel)',

// Album Nuffload
  'time_elapsed' => 'Eltelt id�',
  'time_remaining' => 'Marad�k id�',
  'upload_in_progress' => 'Felt�lt�s folyamatban',
  'please_wait' => 'Kis t�relmet...',
  'uploaded' => 'Felt�ltve %multi_id% a %multi_max% k�pb�l.',
  'no_file_received' => 'Nem �rkezett meg a k�p',
  'no_thumbnail_file_received' => 'B�lyegk�p-f�jl nem �rkezett',
  'file_too_big' => 'A k�pf�jl m�rete t�l nagy',
  'thumbnail_too_big' => 'A b�lyegk�pf�jl m�rete t�l nagy',
  'image_res_too_high' => 'A k�p felbont�sa t�l nagy',
  'add_field' => 'F�jlfelt�lt�s mez� hozz�adva',
  'remove_field' => 'F�jlfelt�lt�s mez� elv�ve',
  'ZIP_allowed' => 'Enged�lyezett a ZIP f�jlok felt�lt�se',

// View Pic
  'Pic_ID' => 'ID',
  'Pic_Details' => 'K�p r�szletei',
  'Pic_Size' => 'M�ret',
  'Pic_Type' => 'K�p t�pusa',
  'Pic_BBCode' => 'BBCode',
  'Pic_not_exist' => 'Ez a k�p nem l�tezik',
  'Click_enlarge' => 'Kattints a k�pre a nagyobb verzi��rt',
  'Prev_Pic' => 'El�z� k�p',
  'Next_Pic' => 'K�vetkez� k�p',
  'Slideshow' => 'Diavet�t�s',
  'Slideshow_Delay' => 'Diavet�t�s id�z�t�se',
  'Slideshow_On' => 'Diavet�t�s',
  'Slideshow_Off' => 'Diavet�t�s �ll',
  'Pics_Nav' => 'K�pnavig�ci�',
  'Pics_Nav_Next' => 'K�vetkez� k�p',
  'Pics_Nav_Prev' => 'El�z� k�p',
  'Pics_Counter' => '%s. k�p a %s-b�l',

// Edit Pic
  'Edit_Pic_Info' => 'K�pinform�ci� szerkeszt�se',
  'Pics_updated_successfully' => 'A k�pinform�ci� friss�t�se sikeres',

// Delete Pic
  'Album_delete_confirm' => 'T�nyleg t�r�lni akarod ez(eke)t a k�p(eke)t??',
  'Pics_deleted_successfully' => 'K�p(ek) t�rl�se sikeres',

// ModCP
  'Approval' => 'J�v�hagy�s',
  'Approve' => 'J�v�hagy',
  'Unapprove' => 'Elutas�t',
  'Status' => 'St�tusz',
  'Locked' => 'Z�rolt',
  'Not_approved' => 'Nem j�v�hagyott',
  'Approved' => 'J�v�hagyott',
  'Copy' => 'M�sol',
  'Move_to_Category' => 'Mozgat�s ebbe a kateg�ri�ba',
  'Pics_moved_successfully' => 'A k�p(ek) sikeresen �tmozgatva',
  'Copy_to_Category' => 'M�sol�s ebbe a kateg�ri�ba',
  'Pics_copied_successfully' => 'A k�p(ek) sikeresen m�solva',
  'Pics_locked_successfully' => 'A k�p(ek) sikeresen z�rolva',
  'Pics_unlocked_successfully' => 'A k�p(ek) sikeresen feloldva',
  'Pics_approved_successfully' => 'A k�p(ek) sikeresen j�v�hagyva',
  'Pics_unapproved_successfully' => 'A k�p(ek) sikeresen elutas�tva',

// Rate
  'Current_Rating' => 'Jelenlegi �rt�kel�s',
  'Please_Rate_It' => 'K�rlek �rt�keld',
  'Login_To_Vote' => 'K�rlek jelentkezz be az �rt�kel�shez',
  'Already_rated' => 'M�r �rt�kelted ezt a k�pet',
  'Own_Pic_Rate' => 'Nem �rt�kelheted a saj�t k�peid',
  'Album_rate_successfully' => 'Sikeresen �rt�kelted a k�pet',
  'Click_rate_more' => 'Kattints %side%s a t�bbi k�p �rt�kel�s�hez',
  'Hot_Or_Not' => 'Friss/nem friss',

// Comment
  'Comment_no_text' => 'Nyomj entert a komment�rhoz',
  'Comment_too_long' => 'A komment�rod t�l hossz�',
  'Comment_delete_confirm' => 'T�nyleg t�r�lni akarod ezt a komment�rt?',
  'Pic_Locked' => 'Bocsi, de ez a k�p z�rolt. Ezt a  k�pet nem tudod komment�lni.',
  'Post_your_comment' => 'K�rlek nyomj entert a komment�rhoz!',

// Personal Gallery
  'Personal_Gallery_Explain' => 'L�thatod m�s szem�lyes gal�ri�j�t, ha a profilj�ra kattintasz',
  'Personal_gallery_not_created' => '%s szem�lyes gal�ri�ja nem lett l�trehozva',
  'Not_allowed_to_create_personal_gallery' => 'Bocsi, de az adminisztr�tor �gy d�nt�tt, hogy ezen az oldalon nem lehet szem�lyes gal�ri�t l�trehozni',
  'Click_return_personal_gallery' => 'Kattints %side%s a szem�lyes gal�ri�hoz val� visszat�r�shez',

// Download Archive
  'Download_pics' => 'K�pek let�lt�se (ZIP)',
  'Download_page' => 'Az ezen a lapon l�v� k�pek let�lt�se (ZIP)',
  'No_Download_auth' => 'Nincs jogod archiv�lni a fot�kat ebben az albumban!',

// Email Notification
  'Email_Notification' => 'Album e-mail figyelmeztet�s',
  'Email_Notification_Explain' => 'Ezen a be�ll�t�s engedi, hogy egy admin �rtes�tve legyen, ha az albumba �j k�pet k�ldenek',
  'Approvation_OK' => 'Elfogadva',
  'Approvation_NO' => 'Nem elfogadott',

// Album Hierarchy Index Table
  'Last_Comment' => 'Friss komment�r',
  'Last_Comments' => 'Friss komment�rok',
  'No_Comment_Info' => 'Nincsenek komment�rok',
  'No_Pictures_In_Cat' => 'Nincs k�p ebben a kateg�ri�ban',
  'Total_Pics' => '�sszes k�p',
  'Total_Comments' => '�sszes komment�r',
  'Last_Index_Thumbnail' => 'Leg�jabb k�p',
  'One_Sub_Total_Pics' => '%d k�p',
  'Multiple_Sub_Total_Pics' => '%d k�pek',
  'Album_sub_categories' => 'Alkateg�ri�k',
  'No_Public_Galleries' => 'Nincs publikus kateg�ria',
  'One_new_picture' => '%d �j k�p',
  'Multiple_new_pictures' => '%d �j k�pek',

// Personal Album Hierarchy Index Table
  'Personal_Categories' => 'Szem�lyes gal�ria',
  'Create_Personal_Categories' => 'Szem�lyes gal�ria l�trehoz�sa',
  'Personal_Cat_Admin' => 'Szem�lyes gal�ria adminisztr�l�s',
  'Recent_Personal_Pics' => 'Fogadott k�pek a %s szem�lyes gal�ri�ban',
  
// Album Moderator Control Panel
  'Modcp_check_all' => 'Mind megjel�l',
  'Modcp_uncheck_all' => 'Mind jel�letlen',
  'Modcp_inverse_selection' => 'Ford�tott kijel�l�s',
  
  'Show_selected_pic_view_mode' => 'Csak a kijel�lt k�pek l�tsz�djanak a szem�lyes gal�ri�ban',
  'Show_all_pic_view_mode' => 'L�tsz�djon minden k�p ebben a kateg�ri�ban',
  
// Access language strings
  'Album_Can_Manage_Categories' => '<b>Tudod</b> %skezelni%s a gal�ria kateg�ri�it',
  'No_Personal_Category_admin' => '<b>Nem tudod></b> kezelni a szem�lyes gal�ri�dat',
  
// The picture list of a member (album_memberlist.php)
  'Pic_Cat' => 'Kateg�ria',
  'Picture_List_Of_User' => '%s minden k�pe',
  'Member_Picture_List_Explain' => 'L�thatod b�rmely felhaszn�l� �ltal k�zz� tett k�pek teljes list�j�t a saj�t profilj�ban',
  'Comment_List_Of_User' => '%s minden komment�rja',
  'Rating_List_Of_User' => '%s minden �rt�kel�se',
  'Show_All_Pictures_Of_user' => '%s minden k�p�nek megjelen�t�se',
  'Show_All_Comments_Of_user' => '%s minden komment�rj�nak megjelen�t�se',
  'Show_All_Ratings_Of_user' => '%s minden �rt�kel�s�nek megjelen�t�se',

// The pictures list
  'All_Picture_List_Of_User' => 'Minden k�p',
  'All_Comment_List_Of_User' => 'Minden komment�r',
  'All_Rating_List_Of_User' => 'Minden �rt�kel�s',
  'All_Show_All_Pictures_Of_user' => 'Minden k�p mutat�sa',
  'All_Show_All_Comments_Of_user' => 'Minden komment�r mutat�sa',
  'All_Show_All_Ratings_Of_user' => 'Minden �rt�kel�s mutat�sa',
  
  'Not_commented' => '<i>Nem komment�lt</i>',

// Nuff's Stuff
  'Nuff_Click' => 'Kattints ide a k�l�nleges effektek alkalmaz�s�ra',
  'Nuff_UnClick' => 'Kattints ide a norm�l megjelen�t�sre',
  'Nuff_Title' => 'K�l�nleges effektek',
  'Nuff_Explain' => 'Ezt az oldalt a felt�lt�tt k�pek effekttel t�rt�n� manipul�l�s�ra haszn�lhatod.<br />K�rlek vedd figyelembe, hogy a <i><b>kiszolg�l�t ez nagyon leterheli</b></i>, ez�rt k�rlek csak m�rs�kelten haszn�ld. N�h�ny effekt nem terheli t�ls�gosan a szerver processzor�t ( pl.: �tm�retez�s)',
  'Nuff_Normal' => 'Norm�l k�p',
  'Nuff_Normal_Explain' => 'Nincs effekt alkalmazva',
  'Nuff_BW' => 'Fekete-feh�r',
  'Nuff_BW_Explain' => 'Ez az effekt fekete-feh�r k�pp� alak�tja',
  'Nuff_Sepia' => 'R�gies t�nus',
  'Nuff_Sepia_Explain' => 'Ez az effekt egy r�gi f�nyk�phez hasonl�v� alak�tja �t a k�pet',
  'Nuff_Flip' => 'Megford�t',
  'Nuff_Flip_Explain' => 'Haszn�ld ezt a funkci�t, ha feje tetej�re akarod �ll�tani a k�pet',
  'Nuff_Mirror' => 'T�kr�z�s',
  'Nuff_Mirror_Explain' => 'Ez az effekt t�kr�zi a k�pet',
  'Nuff_Flip_H' => 'V�zszintes',
  'Nuff_Flip_V' => 'F�gg�leges',
  'Nuff_Rotate' => 'K�p forgat�sa (�ramutat� j�r�s�val ellent�tesen)',
  'Nuff_Rotate_Explain' => 'K�p forgat�sa az �ramutat� j�r�s�val ellent�tesen',
  'Nuff_Resize' => '�tm�retez�s',
  'Nuff_Resize_Explain' => 'Ez a funkci� �tm�retezi a k�pet',
  'Nuff_Resize_W' => 'Sz�less�g',
  'Nuff_Resize_H' => 'Magass�g',
  'Nuff_Resize_No_Resize' => 'Nincs �tm�retez�s',
  'Nuff_Watermark' => 'V�zjel',
  'Nuff_Watermark_Explain' => 'V�zjel alkalmaz�sa a k�pre',
  'Nuff_Recompress' => '�jrat�m�r�t�s',
  'Nuff_Recompress_Explain' => 'Ez a funkci� �jrat�m�r�ti a k�pet',
  'Nuff_Alpha' => 'Alfa',
  'Nuff_Alpha_Explain' => 'Ez az effekt egy alfa csatorna �rt�ket alkalmaz a k�pre',
  'Nuff_Blur' => 'Elmos�s',
  'Nuff_Blur_Explain' => 'Ez az effekt egy elmos�si sz�r�t alkalmaz a k�pen',
  'Nuff_Pixelate' => 'Pixeles�t',
  'Nuff_Pixelate_Explain' => 'Ez az effekt egy nagyobb pixeleknek l�tsz� s�r�t alkalmaz',
  'Nuff_Scatter' => 'Sz�tr�z',
  'Nuff_Scatter_Explain' => 'Ez az effekt a k�ppontokat elt�vol�tja a hely�kr�l. �gy n�z ki mintha megr�zt�k volna a k�pet, �s az sz�tesne',
  'Nuff_Infrared' => 'Infrav�r�s',
  'Nuff_Infrared_Explain' => 'Ez az effekt egy infrav�r�s sz�r�t alkalmaz a k�pre',
  'Nuff_Tint' => 'Tinta',
  'Nuff_Tint_Explain' => 'Ez az effekt v�r�s tint�t �nt a k�pre',
  'Nuff_Interlace' => 'Interlace (V�zszintes vonalak)',
  'Nuff_Interlace_Explain' => 'Ez az effekt egy interlace csatorn�t fesz�t a k�pre',
  'Nuff_Screen' => 'Screen (v�zszintes �s f�gg�leges vonalak)',
  'Nuff_Screen_Explain' => 'Ez az effekt egy screen csatorn�t fesz�t a k�pre',
  'Nuff_Stereogram' => 'Sztereogr�f',
  'Nuff_Stereogram_Explain' => 'Ez az effekt sztereografikus k�pet k�sz�t (FF 16 bit sz�ks�ges)',
  
  'Pic_Gallery' => 'OTF Gall�ria',
  'Select_Pic' => 'K�p kiv�laszt�sa',
  'Select_Category' => 'Kateg�ria kiv�laszt�sa',
  'Title_Description' => 'C�m &amp; Le�r�s',
  
// Pic watch
  'No_longer_watching_comment' => 'Mostant�l a k�phez f�z�tt komment�rok nem lesznek figyelve',
  'Watching_comment' => 'Mostant�l a k�phez f�z�tt komment�rok figyelve lesznek',
  'Pic_comment_notification' => 'Album komment�rjainak figyel�se',
  'Pic_comment_watch_checkbox' => 'Jel�ld ezt be, ha figyelni szeretn�d a komment�rokat:',
  'Watch_pic' => 'A k�phez f�z�tt komment�rok figyel�s�nek ind�t�sa',
  'Unwatch_pic' => 'A k�phez f�z�tt komment�rok figyel�s�nek abbahagy�sa',
  'Click_return_pic' => 'Kattints %side%s a k�phez val� visszat�r�shez',
  
  'Pic_RDF' => 'RSS Feed 1.0',
  'Pic_RSS' => 'RSS Feed 2.0',
));
?>