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

$lang = array_merge($lang, array(
// Album Index
     'Photo_Album' => 'Foto Album',
     'Pics' => 'Bilder',
     'Last_Pic' => 'Senaste Bild',
     'Public_Categories' => 'Offentliga Kategorier',
     'No_Pics' => 'Inga Bilder',
     'Users_Personal_Galleries' => 'Anv�ndares Personliga Gallerier',
     'Your_Personal_Gallery' => 'Ditt Personliga Galleri',
     'Recent_Public_Pics' => 'Nyligen Offentliga Bilder',
     'Nav_Separator' => '&nbsp;&raquo;&nbsp;',

// Category View
	'Category_not_exist' => 'Denna kategori existerar inte',
	'Upload_Pic' => 'Ladda Upp Bild',
	'Upload_Pics' => 'Ladda Upp Bilder',
	'JUpload_Pic' => 'Ladda upp flera bilder med Jupload',
	'Pic_Title' => 'Bild Titel',
	'View' => 'Visa',
	'Pic_Poster' => 'Poster',
	'Pic_Image' => 'Bild',
	'Waiting' => ' bild(er) v�ntar p� godk�nnande',

/*
	'Album_upload_can' => 'Du <b>kan</b> ladda upp nya bilder i denna kategori',
	'Album_upload_cannot' => 'Du <b>kan ej</b> ladda upp nya bilder i denna kategori',
	'Album_rate_can' => 'Du <b>kan</b> v�rdera bilder i denna kategori',
	'Album_rate_cannot' => 'Du <b>kan ej</b> v�rdera bilder i denna kategori',
	'Album_comment_can' => 'Du <b>kan</b> posta kommentarer till bilder i denna kategori',
	'Album_comment_cannot' => 'Du <b>kan ej</b> posta kommentarer till bilder i denna kategori',
	'Album_edit_can' => 'Du <b>kan</b> redigera och kommentera dina bilder i denna kategori',
	'Album_edit_cannot' => 'Du <b>kan ej</b> redigera och kommentera dina bilder i denna kategori',
	'Album_delete_can' => 'Du <b>kan</b> radera och kommentera dina bilder i denna kategori',
	'Album_delete_cannot' => 'Du <b>kan ej</b> radera och kommentera dina bilder i denna kategori',
*/
	'Album_view_can' => 'Du <b>kan</b> granska bilder',
	'Album_view_cannot' => 'Du <b>kan ej</b> granska bilder',
	'Album_upload_can' => 'Du <b>kan</b> ladda upp nya bilder',
	'Album_upload_cannot' => 'Du <b>kan ej</b> ladda upp nya bilder',
	'Album_rate_can' => 'Du <b>kan</b> v�rdera bilder',
	'Album_rate_cannot' => 'Du <b>kan ej</b> v�rdera bilder',
	'Album_comment_can' => 'Du <b>kan</b> posta kommentarer till bilder',
	'Album_comment_cannot' => 'Du <b>kan ej</b> posta kommentarer till bilder',
	'Album_edit_can' => 'Du <b>kan</b> redigera dina bilder och kommentarer',
	'Album_edit_cannot' => 'Du <b>kan ej</b> redigera dina bilder och kommentarer',
	'Album_delete_can' => 'Du <b>kan</b> radera dina bilder och kommentarer',
	'Album_delete_cannot' => 'Du <b>kan ej</b> radera dina bilder och kommentarer',
	'Album_moderate_can' => 'Du <b>kan</b> %smoderera%s denna kategori',

	'Edit_pic' => 'Redigera',
	'Delete_pic' => 'Radera',
	'Rating' => 'Betyg',
	'Comments' => 'Kommentarer',
	'Last_Comment' => 'Senaste Kommentar',
	'New_Comment' => 'Ny Kommentar',
	'Not_rated' => '<i>Ej V�rderad</i>',
	'Random_Pictures' => 'Slumpm�ssiga Bilder',
	'Highest_Rated_Pictures' => 'H�gst V�rderade Bilder',
	'Most_Viewed_Pictures' => 'Mest Visade Bilder',

	'Avatar_Set' => 'S�tt som Avatar',
	'BBCode_Copy' => 'Kopiera BBKod',

// Upload
	'Pic_Desc' => 'Bild Beskrivning',
	'Plain_text_only' => 'Vanlig text bara',
	'Max_length' => 'Max l�ngd (bytes)',
	'Upload_pic_from_machine' => 'Ladda upp en bild fr�n din dator',
	'Upload_to_Category' => 'L�gg upp till Kategori',
	'Upload_thumbnail_from_machine' => 'Ladda upp dess miniatyrbild fr�n din dator (m�ste vara samma typ som din bild)',
	'Upload_thumbnail' => 'Ladda upp en miniatyrbild',
	'Upload_thumbnail_explain' => 'Det m�ste vara av samma filtyp som din bild',
	'Thumbnail_size' => 'Miniatyrbilds storlek (pixlar)',
	'Filetype_and_thumbtype_do_not_match' => 'Din bild och din miniatyrbild m�ste vara samma typ',

	'Upload_no_title' => 'Du m�ste ange en titel f�r din bild',
	'Upload_no_file' => 'Du m�ste ange din s�kv�g och ditt filnamn',
	'Desc_too_long' => 'Din beskrivning �r f�r l�ng',

	'JPG_allowed' => 'Till�tet att ladda upp JPG filer',
	'PNG_allowed' => 'Till�tet att ladda upp PNG filer',
	'GIF_allowed' => 'Till�tet att ladda upp GIF filer',

	'Album_reached_quota' => 'Denna kategori har n�tt kvoten av bilder. Nu kan du inte l�gga upp n�gra fler. Kontakta administrat�ren f�r mer information',
	'User_reached_pics_quota' => 'Du har n�tt din kvot av bilder. Nu kan du inte l�gga upp n�gra fler. Kontakta administrat�ren f�r mer information',

	'No_valid_category_selected' => 'Ingen giltig album kategori vald',
	'No_category_to_upload' => 'Tyv�rr finns det f�r n�rvarande inga kategorier som du kan ladda upp till.',
	'Not_allowed_file_type' => 'Din Filtyp �r inte till�tet',
	'Upload_image_size_too_big' => 'Din bild dimensions storlek �r f�r stort',
	'Upload_thumbnail_size_too_big' => 'Din miniatyrbilds dimensions storlek �r f�r stort',

	'Missed_pic_title' => 'Du m�ste ange din bild titel',

	'Click_return_category' => 'Klicka %sh�r%s f�r att �terg� till kategorin',
	'Click_return_album_index' => 'Klicka %sh�r%s f�r att �terg� till Album Index',

	'Add_File' => 'L�gg till Fil',
	'File_thumbnail_count_mismatch' => 'Antalet uppladdade bilder och miniatyrer matchar ej',
	'No_thumbnail_for_picture_found' => 'Det fanns inga miniatyrer f�r den uppladdade bilden (namngivet: %s)',
	'No_picture_for_thumbnail_found' => 'Det fanns ingen bild f�r den uppladdade miniatyren (namngivet: %s)',
	'Unknown_file_and_thumbnail_error_mismatch' => 'Ok�nt fel har uppkommit n�r du l�gger upp bilden och miniatyren<br />Bildens namn: %s och Miniatyren namngivet: %s<br />',
	'Picture_exceeded_maximum_size_INI' => 'Bild namngiven \'%s\' �r f�r stor. Bilden �r �verhoppad.<br />',
	'Thumbnail_exceeded_maximum_size_INI' => 'Miniatyren namngiven \'%s\' �r f�r stor. Bild och miniatyrbilden hoppades �ver.<br />',
	'Execution_time_exceeded_skipping' => 'Den l�ngsta tidsfristen f�r script utf�rande har �verskridits. F�ljande filer hoppades �ver:<br />',
	'Skipping_uploaded_picture_file' => '%s<br/>',
	'Skipping_uploaded_picture_and_thumbnail_file' => '%s (miniatyrbild: %s)<br/>',
	'Album_upload_not_successful' => 'Ingen av dina bilder har lagts upp framg�ngsrikt<br/><br/>',
	'Album_upload_partially_successful' => 'Endast en del av dina bilder har lagts upp framg�ngsrikt<br/><br/>',
	'No_pictures_selected_for_upload' => 'Inga bilder som valts ut f�r att ladda upp eller ok�nt fel',

// 'Bad_upload_file_size' => 'Your uploaded file is too large or corrupted',
// 'Album_upload_successful' => 'Your pic has been uploaded successfully',
// 'Album_upload_need_approval' => 'Your pic has been uploaded successfully.<br /><br />But the feature Pic Approval has been enabled so your pic must be approved by a administrator or a moderator before posting',

	'Bad_upload' => 'D�lig uppladdning',
	'Bad_upload_file_size' => 'Dina upplagda filer (%s) �r f�r stora eller skadade',
	'Album_upload_successful' => 'Din bild(er) har lagts upp framg�ngsrikt',
	'Album_upload_need_approval' => 'Din bild(er) har lagts upp framg�ngsrikt.<br /><br />Men funktionen Bild Justering har aktiverats s� din bild m�ste godk�nnas av en administrat�r eller en moderator innan publisering.',

	'Rotation' => 'Rotera (moturs) - Grader',

	'Max_file_size' => 'Maximala fil storlek file size (bytes)',
	'Max_width' => 'Maximala bildbredd innan du kompressions �ndrar (pixlar)',
	'Max_height' => 'Maximala H�gsta bildh�jd innan du kompressions �ndrar (pixlar)',

// Album Nuffload
	'time_elapsed' => 'Tid som f�rflutit',
	'time_remaining' => 'Tid som �terst�r',
	'upload_in_progress' => 'Uppladdning I Framsteg',
	'please_wait' => 'V�nligen V�nta...',
	'uploaded' => 'Uppladdade %multi_id% av %multi_max% bilder.',
	'no_file_received' => 'Inga bild filer mottagna',
	'no_thumbnail_file_received' => 'Inga Miniatyrbilds filer mottagna',
	'file_too_big' => 'Bildfil storlek f�r stor',
	'thumbnail_too_big' => 'Miniatyrbild filstorleken �r f�r stor',
	'image_res_too_high' => 'Bilduppl�sning f�r h�g',
	'add_field' => 'L�gg till fil uppladdnings f�lt',
	'remove_field' => 'Ta bort fil uppladdnings f�ltet',
	'ZIP_allowed' => 'Till�tet att ladda upp zip-filer',

// View Pic
	'Pic_ID' => 'ID',
	'Pic_Details' => 'Bild Detaljer',
	'Pic_Size' => 'Storlek',
	'Pic_Type' => 'Bild Typ',
	'Pic_BBCode' => 'BBKod',
	'Pic_not_exist' => 'Denna bild finns inte',
	'Click_enlarge' => 'Klicka p� bilden f�r att se st�rre bild',
	'Prev_Pic' => 'Visa F�reg�ende Bild',
	'Next_Pic' => 'Visa N�sta Bild',
	'Slideshow' => 'Bildspel',
	'Slideshow_Delay' => 'Bildspel F�rdr�jning',
	'Slideshow_On' => 'Bildspel',
	'Slideshow_Off' => 'Stoppa Bildspel',
	'Pics_Nav' => 'Bild Navigering',
	'Pics_Nav_Next' => 'N�sta Bild',
	'Pics_Nav_Prev' => 'F�reg�ende Bild',
	'Pics_Counter' => 'Visar Bild %s av %s',

// Edit Pic
	'Edit_Pic_Info' => 'Redigera Bild Information',
	'Pics_updated_successfully' => 'Din bild information har uppdaterats framg�ngsrikt',

// Delete Pic
	'Album_delete_confirm' => '�r du s�ker p� att du vill ta bort dessa bild(er)?',
	'Pics_deleted_successfully' => 'Dessa bild(er) har tagits bort framg�ngsrikt',

// ModCP
	'Approval' => 'Godk�nnande',
	'Approve' => 'Godk�nn',
	'Unapprove' => 'Godk�nn Ej',
	'Status' => 'Status',
	'Locked' => 'L�st',
	'Not_approved' => 'Ej godk�nd',
	'Approved' => 'Godk�nd',
	'Copy' => 'Kopiera',
	'Move_to_Category' => 'Flytta till kategori',
	'Pics_moved_successfully' => 'Dina bild(er) har blivit flyttade framg�ngsrikt',
	'Copy_to_Category' => 'Kopiera till kategori',
	'Pics_copied_successfully' => 'Dina bild(er) har blivit kopierade framg�ngsrikt',
	'Pics_locked_successfully' => 'Dina bild(er) har blivit l�sta framg�ngsrikt',
	'Pics_unlocked_successfully' => 'Dina bild(er) har blivit uppl�sta framg�ngsrikt',
	'Pics_approved_successfully' => 'Dina bild(er) har blivit godk�nda framg�ngsrikt',
	'Pics_unapproved_successfully' => 'Dina bild(er) har icke blivit godk�nda framg�ngsrikt',

// Rate
	'Current_Rating' => 'Nuvarande V�rdering',
	'Please_Rate_It' => 'V�nligen V�rdera Den',
	'Login_To_Vote' => 'V�nligen Logga In f�r att r�sta',
	'Already_rated' => 'Du har redan v�rderat denna bild',
	'Own_Pic_Rate' => 'Du kan inte v�rdera dina bilder',
	'Album_rate_successfully' => 'Din bild har v�rderats framg�ngsrikt.',
	'Click_rate_more' => 'Klicka %sh�r%s f�r att v�rdera fler bilder.',
	'Hot_Or_Not' => 'Het Eller Ej',

// Comment
	'Comment_no_text' => 'V�nligen skriv in din kommentar',
	'Comment_too_long' => 'Din kommentar �r f�r l�ng',
	'Comment_delete_confirm' => '�r du s�ker p� att du vill ta bort den h�r kommentaren?',
	'Pic_Locked' => 'Tyv�rr, denna bild var l�st. S� du kan inte skicka kommentarer till denna bild l�ngre',
	'Post_your_comment' => 'V�nligen ange din kommentar!',

// Personal Gallery
	'Personal_Gallery_Explain' => 'Du kan se personliga gallerier av andra medlemmar genom att klicka p� l�nken i deras profiler',
	'Personal_gallery_not_created' => 'Det personliga galleriet av %s har inte blivit skapat',
	'Not_allowed_to_create_personal_gallery' => 'Tyv�rr, administrat�rerna av detta forum till�ter inte dig att skapa ditt personliga galleri',
	'Click_return_personal_gallery' => 'Klicka %sh�r%s f�r att �terg� till personliga galleriet',

// Download Archive
	'Download_pics' => 'Ladda Ner Bilder (ZIP)',
	'Download_page' => 'Ladda Ner Bilder P� Denna Sida (ZIP)',
	'No_Download_auth' => 'Du har inte beh�righet att arkivera bilder fr�n detta album!',

// Email Notification
	'Email_Notification' => 'Album E-post Anm�lan',
	'Email_Notification_Explain' => 'Denna inst�llning till�ter administrat�rer att f� ett meddelande n�r en ny bild l�ggs upp i albumet',
	'Approvation_OK' => 'Godk�nd',
	'Approvation_NO' => 'F�r Att Godk�nnas',

// Album Hierarchy Index Table
	'Last_Comment' => 'Senaste Kommentar',
	'Last_Comments' => 'Senaste Kommentarer',
	'No_Comment_Info' => 'Inga Kommentarer',
	'No_Pictures_In_Cat' => 'Inga Bilder I Kategori',
	'Total_Pics' => 'Bilder Totalt',
	'Total_Comments' => 'Kommentarer Totalt',
	'Last_Index_Thumbnail' => 'Senaste Bild',
	'One_Sub_Total_Pics' => '%d Bild',
	'Multiple_Sub_Total_Pics' => '%d Bilder',
	'Album_sub_categories' => 'Underkategorier',
	'No_Public_Galleries' => 'Inga Offentliga Gallerier',
	'One_new_picture' => '%d ny bild',
	'Multiple_new_pictures' => '%d nya bilder',

// Personal Album Hierarchy Index Table
	'Personal_Categories' => 'Personligt Galleri',
	'Create_Personal_Categories' => 'Skapa Personligt Galleri',
	'Personal_Cat_Admin' => 'Personligt Galleri Kategorier Admin',
	'Recent_Personal_Pics' => 'Senaste Bilderna Fr�n Personligt Galleri av %s',

// Album Moderator Control Panel
	'Modcp_check_all' => 'Markera Alla',
	'Modcp_uncheck_all' => 'Avmarkera Alla',
	'Modcp_inverse_selection' => 'Omv�nt Urval',

	'Show_selected_pic_view_mode' => 'Visa Endast Det Markerade Personliga Galleriets Kategorier',
	'Show_all_pic_view_mode' => 'Visa Alla Bilder I Det Personliga Galleriet',

// Access language strings
	'Album_Can_Manage_Categories' => 'Du <b>kan</b> %shantera%s kategorierna i galleriet',
	'No_Personal_Category_admin' => 'Du har inga r�ttigheter att hantera ditt personliga galleris kategorier',

// The picture list of a member (album_memberlist.php)
	'Pic_Cat' => 'Kategori',
	'Picture_List_Of_User' => 'Alla Bilder av %s',
	'Member_Picture_List_Explain' => 'Du kan se den kompletta listan �ver bilden fr�n andra medlemmar genom att klicka p� l�nken i deras profiler',
	'Comment_List_Of_User' => 'Alla Kommentarer av %s',
	'Rating_List_Of_User' => 'Alla V�rderingar av %s',
	'Show_All_Pictures_Of_user' => 'Visa Alla Bilder av %s',
	'Show_All_Comments_Of_user' => 'Visa Alla Kommentarer av %s',
	'Show_All_Ratings_Of_user' => 'Visa Alla V�rderingar av %s',

// The pictures list
	'All_Picture_List_Of_User' => 'Alla Bilderna',
	'All_Comment_List_Of_User' => 'Alla Kommentarer',
	'All_Rating_List_Of_User' => 'Alla V�rderingar',
	'All_Show_All_Pictures_Of_user' => 'Visa Alla Bilderna',
	'All_Show_All_Comments_Of_user' => 'Visa Alla Kommentarerna',
	'All_Show_All_Ratings_Of_user' => 'Visa Alla V�rderingar',

	'Not_commented' => '<i>Ej Kommenterad</i>',

// Nuff's Stuff
	'Nuff_Click' => 'Klicka h�r f�r att anv�nda Special Effekter',
	'Nuff_UnClick' => 'Klicka h�r f�r normal visualisering',
	'Nuff_Title' => 'Special Effekter',
	'Nuff_Explain' => 'Anv�nd flera effekter till bilderna.<br />Kom ih�g att detta �r en <i><b>mycket tung drift p� serverns CPU-belastning</b></i>, s� v�nligen missbruka inte det. Vissa effekter kommer automatiskt att �ndra storlek p� bild, s� att det inte kr�vs f�r mycket server CPU.',
	'Nuff_Normal' => 'Normal Bild',
	'Nuff_Normal_Explain' => 'Inga effekter till�mpas',
	'Nuff_BW' => 'Svart & Vitt',
	'Nuff_BW_Explain' => 'F�r�ndra bilden till Svart och Vitt',
	'Nuff_Sepia' => 'Sepia Toning',
	'Nuff_Sepia_Explain' => 'L�gg till en sepia toning i bilden',
	'Nuff_Flip' => 'Flip',
	'Nuff_Flip_Explain' => 'V�nd bilden',
	'Nuff_Mirror' => 'Spegel',
	'Nuff_Mirror_Explain' => 'Spegla bilden',
	'Nuff_Flip_H' => 'Horisontal',
	'Nuff_Flip_V' => 'Vertikal',
	'Nuff_Rotate' => 'Bild Rotation (Anti Medsols)',
	'Nuff_Rotate_Explain' => 'Roterar bilder anti medurs',
	'Nuff_Resize' => 'Storleks�ndra',
	'Nuff_Resize_Explain' => 'Bild storleks�ndra',
	'Nuff_Resize_W' => 'Bredd',
	'Nuff_Resize_H' => 'H�jd',
	'Nuff_Resize_No_Resize' => 'Ingen Storleks�ndring',
	'Nuff_Watermark' => 'Vattenm�rke',
	'Nuff_Watermark_Explain' => 'L�gg till ett vattenm�rke i bilden',
	'Nuff_Recompress' => 'Komprimera',
	'Nuff_Recompress_Explain' => '�ter-komprimera bilden',
	'Nuff_Alpha' => 'Alpha',
	'Nuff_Alpha_Explain' => 'L�gg �ver en alfa-kanal p� bilden',
	'Nuff_Blur' => 'Blur',
	'Nuff_Blur_Explain' => 'L�gg till ett suddigt filter p� bilden',
	'Nuff_Pixelate' => 'Pixelate',
	'Nuff_Pixelate_Explain' => 'L�gg till ett pixlat filter p� bilden',
	'Nuff_Scatter' => 'Scatter',
	'Nuff_Scatter_Explain' => 'L�gg till ett scatter-filter p� bildene',
	'Nuff_Infrared' => 'Infrar�d',
	'Nuff_Infrared_Explain' => 'L�gga till ett Infrar�tt-filter p� bilden',
	'Nuff_Tint' => 'Toning',
	'Nuff_Tint_Explain' => 'L�gg till en r�d nyans i bilden',
	'Nuff_Interlace' => 'Interlace (Horisontella linjer)',
	'Nuff_Interlace_Explain' => '�verl�gg en fl�tad kanal till bilden',
	'Nuff_Screen' => 'Sk�rm (Hor Ver Linjer)',
	'Nuff_Screen_Explain' => '�verl�gg en sk�rm kanal till bilden',
	'Nuff_Stereogram' => 'Stereograph',
	'Nuff_Stereogram_Explain' => 'Konvertera bilden till en stereograph (BW 16 bitars kr�vs)',

	'Pic_Gallery' => 'OTF Galleri',
	'Select_Pic' => 'V�lj Bild',
	'Select_Category' => 'V�lj Kategori',
	'Title_Description' => 'Titel &amp; Beskrivning',

// Pic watch
	'No_longer_watching_comment' => 'Du bevakar inte l�ngre p� denna bild f�r kommentarer',
	'Watching_comment' => 'Du bevakar nu den h�r bilden efter kommentarer',
	'Pic_comment_notification' => 'Album Kommentar Meddelande',
	'Pic_comment_watch_checkbox' => 'Markera rutan f�r att bli meddelad om bild kommentarer:',
	'Watch_pic' => 'Bevaka den h�r bilden f�r kommentarer',
	'Unwatch_pic' => 'Sluta bevaka denna bild f�r kommentarer',
	'Click_return_pic' => 'Klicka %sh�r%s f�r att �terg� till bilder',

	'Pic_RDF' => 'RSS Feed 1.0',
	'Pic_RSS' => 'RSS Feed 2.0',
	)
);

?>