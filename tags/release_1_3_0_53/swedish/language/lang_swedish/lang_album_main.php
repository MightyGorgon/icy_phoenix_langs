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
     'Users_Personal_Galleries' => 'Användares Personliga Gallerier',
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
	'Waiting' => ' bild(er) väntar på godkännande',

/*
	'Album_upload_can' => 'Du <b>kan</b> ladda upp nya bilder i denna kategori',
	'Album_upload_cannot' => 'Du <b>kan ej</b> ladda upp nya bilder i denna kategori',
	'Album_rate_can' => 'Du <b>kan</b> värdera bilder i denna kategori',
	'Album_rate_cannot' => 'Du <b>kan ej</b> värdera bilder i denna kategori',
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
	'Album_rate_can' => 'Du <b>kan</b> värdera bilder',
	'Album_rate_cannot' => 'Du <b>kan ej</b> värdera bilder',
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
	'Not_rated' => '<i>Ej Värderad</i>',
	'Random_Pictures' => 'Slumpmässiga Bilder',
	'Highest_Rated_Pictures' => 'Högst Värderade Bilder',
	'Most_Viewed_Pictures' => 'Mest Visade Bilder',

	'Avatar_Set' => 'Sätt som Avatar',
	'BBCode_Copy' => 'Kopiera BBKod',

// Upload
	'Pic_Desc' => 'Bild Beskrivning',
	'Plain_text_only' => 'Vanlig text bara',
	'Max_length' => 'Max längd (bytes)',
	'Upload_pic_from_machine' => 'Ladda upp en bild från din dator',
	'Upload_to_Category' => 'Lägg upp till Kategori',
	'Upload_thumbnail_from_machine' => 'Ladda upp dess miniatyrbild från din dator (måste vara samma typ som din bild)',
	'Upload_thumbnail' => 'Ladda upp en miniatyrbild',
	'Upload_thumbnail_explain' => 'Det måste vara av samma filtyp som din bild',
	'Thumbnail_size' => 'Miniatyrbilds storlek (pixlar)',
	'Filetype_and_thumbtype_do_not_match' => 'Din bild och din miniatyrbild måste vara samma typ',

	'Upload_no_title' => 'Du måste ange en titel för din bild',
	'Upload_no_file' => 'Du måste ange din sökväg och ditt filnamn',
	'Desc_too_long' => 'Din beskrivning är för lång',

	'JPG_allowed' => 'Tillåtet att ladda upp JPG filer',
	'PNG_allowed' => 'Tillåtet att ladda upp PNG filer',
	'GIF_allowed' => 'Tillåtet att ladda upp GIF filer',

	'Album_reached_quota' => 'Denna kategori har nått kvoten av bilder. Nu kan du inte lägga upp några fler. Kontakta administratören för mer information',
	'User_reached_pics_quota' => 'Du har nått din kvot av bilder. Nu kan du inte lägga upp några fler. Kontakta administratören för mer information',

	'No_valid_category_selected' => 'Ingen giltig album kategori vald',
	'No_category_to_upload' => 'Tyvärr finns det för närvarande inga kategorier som du kan ladda upp till.',
	'Not_allowed_file_type' => 'Din Filtyp är inte tillåtet',
	'Upload_image_size_too_big' => 'Din bild dimensions storlek är för stort',
	'Upload_thumbnail_size_too_big' => 'Din miniatyrbilds dimensions storlek är för stort',

	'Missed_pic_title' => 'Du måste ange din bild titel',

	'Click_return_category' => 'Klicka %shär%s för att återgå till kategorin',
	'Click_return_album_index' => 'Klicka %shär%s för att återgå till Album Index',

	'Add_File' => 'Lägg till Fil',
	'File_thumbnail_count_mismatch' => 'Antalet uppladdade bilder och miniatyrer matchar ej',
	'No_thumbnail_for_picture_found' => 'Det fanns inga miniatyrer för den uppladdade bilden (namngivet: %s)',
	'No_picture_for_thumbnail_found' => 'Det fanns ingen bild för den uppladdade miniatyren (namngivet: %s)',
	'Unknown_file_and_thumbnail_error_mismatch' => 'Okänt fel har uppkommit när du lägger upp bilden och miniatyren<br />Bildens namn: %s och Miniatyren namngivet: %s<br />',
	'Picture_exceeded_maximum_size_INI' => 'Bild namngiven \'%s\' är för stor. Bilden är överhoppad.<br />',
	'Thumbnail_exceeded_maximum_size_INI' => 'Miniatyren namngiven \'%s\' är för stor. Bild och miniatyrbilden hoppades över.<br />',
	'Execution_time_exceeded_skipping' => 'Den längsta tidsfristen för script utförande har överskridits. Följande filer hoppades över:<br />',
	'Skipping_uploaded_picture_file' => '%s<br/>',
	'Skipping_uploaded_picture_and_thumbnail_file' => '%s (miniatyrbild: %s)<br/>',
	'Album_upload_not_successful' => 'Ingen av dina bilder har lagts upp framgångsrikt<br/><br/>',
	'Album_upload_partially_successful' => 'Endast en del av dina bilder har lagts upp framgångsrikt<br/><br/>',
	'No_pictures_selected_for_upload' => 'Inga bilder som valts ut för att ladda upp eller okänt fel',

// 'Bad_upload_file_size' => 'Your uploaded file is too large or corrupted',
// 'Album_upload_successful' => 'Your pic has been uploaded successfully',
// 'Album_upload_need_approval' => 'Your pic has been uploaded successfully.<br /><br />But the feature Pic Approval has been enabled so your pic must be approved by a administrator or a moderator before posting',

	'Bad_upload' => 'Dålig uppladdning',
	'Bad_upload_file_size' => 'Dina upplagda filer (%s) är för stora eller skadade',
	'Album_upload_successful' => 'Din bild(er) har lagts upp framgångsrikt',
	'Album_upload_need_approval' => 'Din bild(er) har lagts upp framgångsrikt.<br /><br />Men funktionen Bild Justering har aktiverats så din bild måste godkännas av en administratör eller en moderator innan publisering.',

	'Rotation' => 'Rotera (moturs) - Grader',

	'Max_file_size' => 'Maximala fil storlek file size (bytes)',
	'Max_width' => 'Maximala bildbredd innan du kompressions ändrar (pixlar)',
	'Max_height' => 'Maximala Högsta bildhöjd innan du kompressions ändrar (pixlar)',

// Album Nuffload
	'time_elapsed' => 'Tid som förflutit',
	'time_remaining' => 'Tid som återstår',
	'upload_in_progress' => 'Uppladdning I Framsteg',
	'please_wait' => 'Vänligen Vänta...',
	'uploaded' => 'Uppladdade %multi_id% av %multi_max% bilder.',
	'no_file_received' => 'Inga bild filer mottagna',
	'no_thumbnail_file_received' => 'Inga Miniatyrbilds filer mottagna',
	'file_too_big' => 'Bildfil storlek för stor',
	'thumbnail_too_big' => 'Miniatyrbild filstorleken är för stor',
	'image_res_too_high' => 'Bildupplösning för hög',
	'add_field' => 'Lägg till fil uppladdnings fält',
	'remove_field' => 'Ta bort fil uppladdnings fältet',
	'ZIP_allowed' => 'Tillåtet att ladda upp zip-filer',

// View Pic
	'Pic_ID' => 'ID',
	'Pic_Details' => 'Bild Detaljer',
	'Pic_Size' => 'Storlek',
	'Pic_Type' => 'Bild Typ',
	'Pic_BBCode' => 'BBKod',
	'Pic_not_exist' => 'Denna bild finns inte',
	'Click_enlarge' => 'Klicka på bilden för att se större bild',
	'Prev_Pic' => 'Visa Föregående Bild',
	'Next_Pic' => 'Visa Nästa Bild',
	'Slideshow' => 'Bildspel',
	'Slideshow_Delay' => 'Bildspel Fördröjning',
	'Slideshow_On' => 'Bildspel',
	'Slideshow_Off' => 'Stoppa Bildspel',
	'Pics_Nav' => 'Bild Navigering',
	'Pics_Nav_Next' => 'Nästa Bild',
	'Pics_Nav_Prev' => 'Föregående Bild',
	'Pics_Counter' => 'Visar Bild %s av %s',

// Edit Pic
	'Edit_Pic_Info' => 'Redigera Bild Information',
	'Pics_updated_successfully' => 'Din bild information har uppdaterats framgångsrikt',

// Delete Pic
	'Album_delete_confirm' => 'Är du säker på att du vill ta bort dessa bild(er)?',
	'Pics_deleted_successfully' => 'Dessa bild(er) har tagits bort framgångsrikt',

// ModCP
	'Approval' => 'Godkännande',
	'Approve' => 'Godkänn',
	'Unapprove' => 'Godkänn Ej',
	'Status' => 'Status',
	'Locked' => 'Låst',
	'Not_approved' => 'Ej godkänd',
	'Approved' => 'Godkänd',
	'Copy' => 'Kopiera',
	'Move_to_Category' => 'Flytta till kategori',
	'Pics_moved_successfully' => 'Dina bild(er) har blivit flyttade framgångsrikt',
	'Copy_to_Category' => 'Kopiera till kategori',
	'Pics_copied_successfully' => 'Dina bild(er) har blivit kopierade framgångsrikt',
	'Pics_locked_successfully' => 'Dina bild(er) har blivit låsta framgångsrikt',
	'Pics_unlocked_successfully' => 'Dina bild(er) har blivit upplåsta framgångsrikt',
	'Pics_approved_successfully' => 'Dina bild(er) har blivit godkända framgångsrikt',
	'Pics_unapproved_successfully' => 'Dina bild(er) har icke blivit godkända framgångsrikt',

// Rate
	'Current_Rating' => 'Nuvarande Värdering',
	'Please_Rate_It' => 'Vänligen Värdera Den',
	'Login_To_Vote' => 'Vänligen Logga In för att rösta',
	'Already_rated' => 'Du har redan värderat denna bild',
	'Own_Pic_Rate' => 'Du kan inte värdera dina bilder',
	'Album_rate_successfully' => 'Din bild har värderats framgångsrikt.',
	'Click_rate_more' => 'Klicka %shär%s för att värdera fler bilder.',
	'Hot_Or_Not' => 'Het Eller Ej',

// Comment
	'Comment_no_text' => 'Vänligen skriv in din kommentar',
	'Comment_too_long' => 'Din kommentar är för lång',
	'Comment_delete_confirm' => 'Är du säker på att du vill ta bort den här kommentaren?',
	'Pic_Locked' => 'Tyvärr, denna bild var låst. Så du kan inte skicka kommentarer till denna bild längre',
	'Post_your_comment' => 'Vänligen ange din kommentar!',

// Personal Gallery
	'Personal_Gallery_Explain' => 'Du kan se personliga gallerier av andra medlemmar genom att klicka på länken i deras profiler',
	'Personal_gallery_not_created' => 'Det personliga galleriet av %s har inte blivit skapat',
	'Not_allowed_to_create_personal_gallery' => 'Tyvärr, administratörerna av detta forum tillåter inte dig att skapa ditt personliga galleri',
	'Click_return_personal_gallery' => 'Klicka %shär%s för att återgå till personliga galleriet',

// Download Archive
	'Download_pics' => 'Ladda Ner Bilder (ZIP)',
	'Download_page' => 'Ladda Ner Bilder På Denna Sida (ZIP)',
	'No_Download_auth' => 'Du har inte behörighet att arkivera bilder från detta album!',

// Email Notification
	'Email_Notification' => 'Album E-post Anmälan',
	'Email_Notification_Explain' => 'Denna inställning tillåter administratörer att få ett meddelande när en ny bild läggs upp i albumet',
	'Approvation_OK' => 'Godkänd',
	'Approvation_NO' => 'För Att Godkännas',

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
	'Recent_Personal_Pics' => 'Senaste Bilderna Från Personligt Galleri av %s',

// Album Moderator Control Panel
	'Modcp_check_all' => 'Markera Alla',
	'Modcp_uncheck_all' => 'Avmarkera Alla',
	'Modcp_inverse_selection' => 'Omvänt Urval',

	'Show_selected_pic_view_mode' => 'Visa Endast Det Markerade Personliga Galleriets Kategorier',
	'Show_all_pic_view_mode' => 'Visa Alla Bilder I Det Personliga Galleriet',

// Access language strings
	'Album_Can_Manage_Categories' => 'Du <b>kan</b> %shantera%s kategorierna i galleriet',
	'No_Personal_Category_admin' => 'Du har inga rättigheter att hantera ditt personliga galleris kategorier',

// The picture list of a member (album_memberlist.php)
	'Pic_Cat' => 'Kategori',
	'Picture_List_Of_User' => 'Alla Bilder av %s',
	'Member_Picture_List_Explain' => 'Du kan se den kompletta listan över bilden från andra medlemmar genom att klicka på länken i deras profiler',
	'Comment_List_Of_User' => 'Alla Kommentarer av %s',
	'Rating_List_Of_User' => 'Alla Värderingar av %s',
	'Show_All_Pictures_Of_user' => 'Visa Alla Bilder av %s',
	'Show_All_Comments_Of_user' => 'Visa Alla Kommentarer av %s',
	'Show_All_Ratings_Of_user' => 'Visa Alla Värderingar av %s',

// The pictures list
	'All_Picture_List_Of_User' => 'Alla Bilderna',
	'All_Comment_List_Of_User' => 'Alla Kommentarer',
	'All_Rating_List_Of_User' => 'Alla Värderingar',
	'All_Show_All_Pictures_Of_user' => 'Visa Alla Bilderna',
	'All_Show_All_Comments_Of_user' => 'Visa Alla Kommentarerna',
	'All_Show_All_Ratings_Of_user' => 'Visa Alla Värderingar',

	'Not_commented' => '<i>Ej Kommenterad</i>',

// Nuff's Stuff
	'Nuff_Click' => 'Klicka här för att använda Special Effekter',
	'Nuff_UnClick' => 'Klicka här för normal visualisering',
	'Nuff_Title' => 'Special Effekter',
	'Nuff_Explain' => 'Använd flera effekter till bilderna.<br />Kom ihåg att detta är en <i><b>mycket tung drift på serverns CPU-belastning</b></i>, så vänligen missbruka inte det. Vissa effekter kommer automatiskt att ändra storlek på bild, så att det inte krävs för mycket server CPU.',
	'Nuff_Normal' => 'Normal Bild',
	'Nuff_Normal_Explain' => 'Inga effekter tillämpas',
	'Nuff_BW' => 'Svart & Vitt',
	'Nuff_BW_Explain' => 'Förändra bilden till Svart och Vitt',
	'Nuff_Sepia' => 'Sepia Toning',
	'Nuff_Sepia_Explain' => 'Lägg till en sepia toning i bilden',
	'Nuff_Flip' => 'Flip',
	'Nuff_Flip_Explain' => 'Vänd bilden',
	'Nuff_Mirror' => 'Spegel',
	'Nuff_Mirror_Explain' => 'Spegla bilden',
	'Nuff_Flip_H' => 'Horisontal',
	'Nuff_Flip_V' => 'Vertikal',
	'Nuff_Rotate' => 'Bild Rotation (Anti Medsols)',
	'Nuff_Rotate_Explain' => 'Roterar bilder anti medurs',
	'Nuff_Resize' => 'Storleksändra',
	'Nuff_Resize_Explain' => 'Bild storleksändra',
	'Nuff_Resize_W' => 'Bredd',
	'Nuff_Resize_H' => 'Höjd',
	'Nuff_Resize_No_Resize' => 'Ingen Storleksändring',
	'Nuff_Watermark' => 'Vattenmärke',
	'Nuff_Watermark_Explain' => 'Lägg till ett vattenmärke i bilden',
	'Nuff_Recompress' => 'Komprimera',
	'Nuff_Recompress_Explain' => 'Åter-komprimera bilden',
	'Nuff_Alpha' => 'Alpha',
	'Nuff_Alpha_Explain' => 'Lägg över en alfa-kanal på bilden',
	'Nuff_Blur' => 'Blur',
	'Nuff_Blur_Explain' => 'Lägg till ett suddigt filter på bilden',
	'Nuff_Pixelate' => 'Pixelate',
	'Nuff_Pixelate_Explain' => 'Lägg till ett pixlat filter på bilden',
	'Nuff_Scatter' => 'Scatter',
	'Nuff_Scatter_Explain' => 'Lägg till ett scatter-filter på bildene',
	'Nuff_Infrared' => 'Infraröd',
	'Nuff_Infrared_Explain' => 'Lägga till ett Infrarött-filter på bilden',
	'Nuff_Tint' => 'Toning',
	'Nuff_Tint_Explain' => 'Lägg till en röd nyans i bilden',
	'Nuff_Interlace' => 'Interlace (Horisontella linjer)',
	'Nuff_Interlace_Explain' => 'Överlägg en flätad kanal till bilden',
	'Nuff_Screen' => 'Skärm (Hor Ver Linjer)',
	'Nuff_Screen_Explain' => 'Överlägg en skärm kanal till bilden',
	'Nuff_Stereogram' => 'Stereograph',
	'Nuff_Stereogram_Explain' => 'Konvertera bilden till en stereograph (BW 16 bitars krävs)',

	'Pic_Gallery' => 'OTF Galleri',
	'Select_Pic' => 'Välj Bild',
	'Select_Category' => 'Välj Kategori',
	'Title_Description' => 'Titel &amp; Beskrivning',

// Pic watch
	'No_longer_watching_comment' => 'Du bevakar inte längre på denna bild för kommentarer',
	'Watching_comment' => 'Du bevakar nu den här bilden efter kommentarer',
	'Pic_comment_notification' => 'Album Kommentar Meddelande',
	'Pic_comment_watch_checkbox' => 'Markera rutan för att bli meddelad om bild kommentarer:',
	'Watch_pic' => 'Bevaka den här bilden för kommentarer',
	'Unwatch_pic' => 'Sluta bevaka denna bild för kommentarer',
	'Click_return_pic' => 'Klicka %shär%s för att återgå till bilder',

	'Pic_RDF' => 'RSS Feed 1.0',
	'Pic_RSS' => 'RSS Feed 2.0',
	)
);

?>