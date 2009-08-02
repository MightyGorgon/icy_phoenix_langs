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
	'Photo_Album' => 'Album',
	'Pics' => 'Afbeeldingen',
	'Last_Pic' => 'Laatste afbeelding',
	'Public_Categories' => 'Openbare categorieën',
	'No_Pics' => 'Geen afbeeldingen',
	'Users_Personal_Galleries' => 'Persoonlijke albums van gebruiker',
	'Your_Personal_Gallery' => 'Jouw persoonlijke album',
	'Recent_Public_Pics' => 'Nieuwe openbare afbeeldingen',
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',

// Category View
	'Category_not_exist' => 'Deze categorie bestaat niet',
	'Upload_Pic' => 'Afbeeldingupload',
	'Upload_Pics' => 'Afbeeldingenupload',
	'JUpload_Pic' => 'Upload meerdere afbeeldingen met Jupload',
	'Pic_Title' => 'Afbeeldingtitel',
	'View' => 'Bekeken',
	'Pic_Poster' => 'Gebruiker',
	'Pic_Image' => 'Afbeelding',
	'Waiting' => ' afbeelding(en) die op goedkeuring wachten',

/*
	'Album_upload_can' => 'Je <b>mag</b> nieuwe afbeeldingen in deze categorie uploaden.',
	'Album_upload_cannot' => 'Je <b>mag geen</b> nieuwe afbeeldingen in deze categorie uploaden.',
	'Album_rate_can' => 'Je <b>mag</b> afbeeldingen in deze categorie waarderen.',
	'Album_rate_cannot' => 'Je <b>mag geen</b> afbeeldingen in deze categorie waarderen.',
	'Album_comment_can' => 'Je <b>mag</b> opmerkingen op afbeeldingen in deze categorie plaatsen.',
	'Album_comment_cannot' => 'Je <b>mag geen</b> opmerkingen op afbeeldingen in deze categorie plaatsen.',
	'Album_edit_can' => 'Je <b>mag</b> jouw afbeeldingen en opmerkingen in deze categorie bewerken.',
	'Album_edit_cannot' => 'Je <b>mag geen</b> jouw afbeeldingen en opmerkingen in deze categorie bewerken.',
	'Album_delete_can' => 'Je <b>mag</b> jouw afbeeldingen en opmerkingen in deze categorie verwijderen.',
	'Album_delete_cannot' => 'Je <b>mag geen</b> jouw afbeeldingen en opmerkingen in deze categorie verwijderen.',
*/
	'Album_upload_can' => 'Je <b>mag</b> nieuwe afbeeldingen uploaden.',
	'Album_upload_cannot' => 'Je <b>mag geen</b> nieuwe afbeeldingen uploaden.',
	'Album_rate_can' => 'Je <b>mag</b> afbeeldingen beoordelen.',
	'Album_rate_cannot' => 'Je <b>mag geen</b> afbeeldingen beoordelen.',
	'Album_comment_can' => 'Je <b>mag </b> opmerkingen op afbeeldingen plaatsen.',
	'Album_comment_cannot' => 'Je <b>mag geen</b> opmerkingen op afbeeldingen plaatsen.',
	'Album_edit_can' => 'Je <b>mag</b> eigen afbeeldingen en opmerkingen bewerken',
	'Album_edit_cannot' => 'Je <b>mag niet</b> eigen afbeeldingen en opmerkingen bewerken',
	'Album_delete_can' => 'Je <b>mag</b> eigen afbeeldingen en opmerkingen verwijderen.',
	'Album_delete_cannot' => 'Je <b>mag niet</b> eigen afbeeldingen en opmerkingen verwijderen',
	'Album_moderate_can' => 'Je <b>mag</b> deze categorie %smoderaten%s.',

	'Edit_pic' => 'Bewerken',
	'Delete_pic' => 'Verwijderen',
	'Rating' => 'Beoordeling',
	'Comments' => 'Opmerkingen',
	'Last_Comment' => 'Laatste opmerking',
	'New_Comment' => 'Nieuwe opmerking',
	'Not_rated' => '<i>Niet gewaardeerd</i>',
	'Random_Pictures' => 'Willekeurige afbeeldingen',
	'Highest_Rated_Pictures' => 'Best beoordeelde afbeeldingen',
	'Most_Viewed_Pictures' => 'Meest bekeken afbeeldingen',

	'Avatar_Set' => 'Als avatar gebruiken',
	'BBCode_Copy' => 'Kopieer BBCode',

// Upload
	'Pic_Desc' => 'Afbeeldingomschrijving',
	'Plain_text_only' => 'Alleen platte tekst',
	'Max_length' => 'Maximumlengte (bytes)',
	'Upload_pic_from_machine' => 'Een afbeelding van je pc uploaden',
	'Upload_to_Category' => 'Upload naar categorie',
	'Upload_thumbnail_from_machine' => 'Upload de thumbnail van je computer (moet dezelfde type zijn als je afbeelding)',
	'Upload_thumbnail' => 'Upload een thumbnailafbeelding',
	'Upload_thumbnail_explain' => 'Het moet dezelfde type zijn als je afbeelding',
	'Thumbnail_size' => 'Thumbnailgrootte (pixel)',
	'Filetype_and_thumbtype_do_not_match' => 'Je afbeelding en de thumbnail moet dezelfde type zijn',

	'Upload_no_title' => 'Je moet een titel voor de afbeelding ingeven',
	'Upload_no_file' => 'Je moet een pad en een bestandsnaam ingeven',
	'Desc_too_long' => 'Je omschrijving is te lang',
	
	'JPG_allowed' => 'Sta uploaden van JPG-bestanden toe',
	'PNG_allowed' => 'Sta uploaden van PNG-bestanden toe',
	'GIF_allowed' => 'Sta uploaden van GIF-bestanden toe',
	
	'Album_reached_quota' => 'Deze categorie bevat de maximum aantal afbeeldingen. Je kan geen nieuwe afbeeldingen uploaden. Neem contact op met de beheerders voor meer informatie.',
	'User_reached_pics_quota' => 'Je hebt je eigen afbeeldingsquota bereikt. Je kan geen nieuwe afbeeldingen uploaden. Neem contact op met de beheerders voor meer informatie.',
	
	'No_valid_category_selected' => 'Er is geen geldige albumcategorie geselecteerd',
	'No_category_to_upload' => 'Helaas zijn er op dit moment geen categorieën, in welke je afbeeldingen kunt uploaden.',
	'Not_allowed_file_type' => 'Je bestandstype is niet toegestaan',
	'Upload_image_size_too_big' => 'De afbeelding is te groot',
	'Upload_thumbnail_size_too_big' => 'Je thumbnail is te groot',

	'Missed_pic_title' => 'Je moet een afbeeldingstitel ingeven',
	
	'Click_return_category' => 'Klik %shier%s om terug te keren naar de categorie',
	'Click_return_album_index' => 'Klik %shier%s om terug te keren naar de albumindex',
	
	'Add_File' => 'Afbeelding toevoegen',
	'File_thumbnail_count_mismatch' => 'De aantal geuploade afbeeldingen en thumbnails komt niet overeen',
	'No_thumbnail_for_picture_found' => 'Er is geen thumbnail gevonden voor de geuploade afbeelding (genaamd: %s)',
	'No_picture_for_thumbnail_found' => 'Er is geen afbeelding gevonden voor de geuploade thumbnail (genaamd: %s)',
	'Unknown_file_and_thumbnail_error_mismatch' => 'Onbekende fout opgetreden tijdens het uploaden van de afbeelding en thumbnail.<br />Afbeelding genaamd: %s en thumbnail genaamd: %s<br />',
	'Picture_exceeded_maximum_size_INI' => 'Afbeelding genaamd \'%s\' is te groot. Afbeelding is overgeslagen.<br />',
	'Thumbnail_exceeded_maximum_size_INI' => 'Thumbnail genaamd \'%s\' is te groot. Afbeelding en thumbmnail is overgeslagen.<br />',
	'Execution_time_exceeded_skipping' => 'De maximale tijd dat voor de scriptuitvoering toegestaan is, is bereikt. De volgende bestanden zijn overgeslagen:<br />',
	'Skipping_uploaded_picture_file' => '%s<br/>',
	'Skipping_uploaded_picture_and_thumbnail_file' => '%s (thumbnail: %s)<br/>',
	'Album_upload_not_successful' => 'Er is geen afbeelding succesvol geupload<br/><br/>',
	'Album_upload_partially_successful' => 'Alleen een deel van je afbeeldingen zijn succesvol geupload<br/><br/>',
	'No_pictures_selected_for_upload' => 'Er is geen afbeelding geselecteerd om te uploaden of onbekende fout',

//'Bad_upload_file_size' => 'Your uploaded file is too large or corrupted',
//'Album_upload_successful' => 'Your pic has been uploaded successfully',
//'Album_upload_need_approval' => 'Your pic has been uploaded successfully.<br /><br />But the feature Pic Approval has been enabled so your pic must be approved by a administrator or a moderator before posting',

	'Bad_upload' => 'Uploadfout',
	'Bad_upload_file_size' => 'Je geuploade bestand (%s) is te groot of corrupt.',
	'Album_upload_successful' => 'Je afbeeldingen zijn succesvol geupload.',
	'Album_upload_need_approval' => 'Je afbeeldingen zijn succesvol geupload.<br /><br />Maar de functie "Afbeelding goedkeuring" is ingeschakeld, de afbeeldingen moet eerst goedgekeurd worden door de beheerder of een moderator voordat hij zichtbaar is.',
	
	'Rotation' => 'Roteren (tegen de klok in) - graden',
	
	'Max_file_size' => 'Maximale bestandsgrootte (bytes)',
	'Max_width' => 'Maximale afbeeldingsbreedte voor compressie (pixel)',
	'Max_height' => 'Maximale afbeeldingshoogte voor compressie (pixel)',

// Album Nuffload
	'time_elapsed' => 'Verstreken tijd',
	'time_remaining' => 'Overgebleven tijd',
	'upload_in_progress' => 'Afbeelding wordt geupload…',
	'please_wait' => 'Wacht alstublieft…',
	'uploaded' => 'Geupload %multi_id% van de %multi_max% afbeeldingen.',
	'no_file_received' => 'Er is geen afbeeldingbestand ontvangen',
	'no_thumbnail_file_received' => 'Er is geen thumbnailbestand ontvangen',
	'file_too_big' => 'Afbeeldingbestand is te groot',
	'thumbnail_too_big' => 'Thumbnailbestand is te groot',
	'image_res_too_high' => 'Afbeeldingresolutie is te groot',
	'add_field' => 'Uploadveld toevoegen',
	'remove_field' => 'Uploadveld verwijderen',
	'ZIP_allowed' => 'ZIP-bestanden uploaden toestaan',

// View Pic
	'Pic_ID' => 'ID',
	'Pic_Details' => 'Afbeeldingdetails',
	'Pic_Size' => 'Grootte',
	'Pic_Type' => 'Afbeeldingtype',
	'Pic_BBCode' => 'BBCode',
	'Pic_not_exist' => 'Deze afbeelding bestaat niet',
	'Click_enlarge' => 'Klik op de afbeelding om in originele formaat weer te geven',
	'Prev_Pic' => 'Vorige afbeelding weergeven',
	'Next_Pic' => 'Volgende afbeelding weergeven',
	'Slideshow' => 'Slideshow',
	'Slideshow_Delay' => 'Slidshowvertraging',
	'Slideshow_On' => 'Slideshow',
	'Slideshow_Off' => 'Slideshow stoppen',
	'Pics_Nav' => 'Afbeeldingnavigatie',
	'Pics_Nav_Next' => 'Volgende afbeelding',
	'Pics_Nav_Prev' => 'Vorige afbeelding',
	'Pics_Counter' => 'Bekijk afbeelding %s van de %s',

// Edit Pic
	'Edit_Pic_Info' => 'Bewerk afbeeldinginformatie',
	'Pics_updated_successfully' => 'Je afbeeldinginformatie is succesvol bijgewerkt',

// Delete Pic
	'Album_delete_confirm' => 'Weet je zeker dat je deze afbeeldingen wilt verwijderen?',
	'Pics_deleted_successfully' => 'Deze afbeeldingen zijn succesvol verwijderd',

// ModCP
	'Approval' => 'Goedkeuring',
	'Approve' => 'Goedkeuren',
	'Unapprove' => 'Afkeuren',
	'Status' => 'Status',
	'Locked' => 'Gesloten',
	'Not_approved' => 'Niet goedgekeurd',
	'Approved' => 'Goedgekeurd',
	'Copy' => 'Kopieren',
	'Move_to_Category' => 'Verplaats naar categorie',
	'Pics_moved_successfully' => 'Je afbeeldingen zijn succesvol verplaatst',
	'Copy_to_Category' => 'Kopieër naar categorie',
	'Pics_copied_successfully' => 'Je afbeeldingen zijn succesvol gekopieërd',
	'Pics_locked_successfully' => 'Je afbeeldingen zijn succesvol gesloten',
	'Pics_unlocked_successfully' => 'Je afbeeldingen zijn succesvol heropend',
	'Pics_approved_successfully' => 'Je afbeeldingen zijn succesvol goedgekeurd',
	'Pics_unapproved_successfully' => 'Je afbeeldingen zijn succesvol afgekeurd',

// Rate
	'Current_Rating' => 'Huidige beoordeling',
	'Please_Rate_It' => 'Beoordeel het',
	'Login_To_Vote' => 'Log in om te kunnen beoordelen',
	'Already_rated' => 'Je hebt deze afbeelding al beoordeeld',
	'Own_Pic_Rate' => 'Je mag niet je eigen afbeeldingen beoordelen',
	'Album_rate_successfully' => 'De afbeelding is succesvol beoordeeld.',
	'Click_rate_more' => 'Klik %shier%s om meer afbeeldingen te beoordelen.',
	'Hot_Or_Not' => 'Hot Or Not',

// Comment
	'Comment_no_text' => 'Geef je opmerking in',
	'Comment_too_long' => 'Je opmerking is te lang',
	'Comment_delete_confirm' => 'Weet je zeker dat je deze opmerking wilt verwijderen?',
	'Pic_Locked' => 'Sorry, deze afbeelding is gesloten. Je kan geen opmerkingen over deze afbeelding plaatsen.',
	'Post_your_comment' => 'Geef je opmerking in',

// Personal Gallery
	'Personal_Gallery_Explain' => 'Je kan de persoonlijke albums van andere gebruikers bekijken door op een link in zijn/haar profiel te klikken',
	'Personal_gallery_not_created' => 'De persoonlijke album van %s is (nog) niet gemaakt',
	'Not_allowed_to_create_personal_gallery' => 'Sorry, de beheerders van dit forum staan het niet toe dat je je eigen persoonlijke album kunt maken',
	'Click_return_personal_gallery' => 'Klik %shier%s om terug te keren naar persoonlijke album',

// Download Archive
	'Download_pics' => 'Download afbeeldingen (ZIP)',
	'Download_page' => 'Download afbeeldingen van deze pagina (ZIP)',
	'No_Download_auth' => 'Je bent niet bevoegd om afbeelding uit deze album te downloaden!',

// Email Notification
	'Email_Notification' => 'Album e-mailbevestiging',
	'Email_Notification_Explain' => 'Deze instelling staat beheerders toe om e-mailbevestiging te sturen wanneer er een nieuwe afbeelding is geplaatst in de album.',
	'Approvation_OK' => 'Goedgekeurd',
	'Approvation_NO' => 'Afgekeurd',

// Album Hierarchy Index Table
	'Last_Comment' => 'Laatste opmerking',
	'Last_Comments' => 'Laatste opmerkingen',
	'No_Comment_Info' => 'Geen opmerkingen',
	'No_Pictures_In_Cat' => 'Er zijn geen afbeeldingen in categorie',
	'Total_Pics' => 'Afbeeldingentotaal',
	'Total_Comments' => 'Opmerkingentotaal',
	'Last_Index_Thumbnail' => 'Laatste afbeelding',
	'One_Sub_Total_Pics' => '%d afbeelding',
	'Multiple_Sub_Total_Pics' => '%d afbeeldingen',
	'Album_sub_categories' => 'Subcategorieën',
	'No_Public_Galleries' => 'Er zijn geen openbare gallerijen',
	'One_new_picture' => '%d nieuw afbeelding',
	'Multiple_new_pictures' => '%d nieuwe afbeeldingen',

// Personal Album Hierarchy Index Table
	'Personal_Categories' => 'Persoonlijke album',
	'Create_Personal_Categories' => 'Persoonlijke album maken',
	'Personal_Cat_Admin' => 'Persoonlijke albumcategoriebeheer',
	'Recent_Personal_Pics' => 'Laatste afbeeldingen uit de persoonlijke album van %s',

// Album Moderator Control Panel
	'Modcp_check_all' => 'Alles markeren',
	'Modcp_uncheck_all' => 'Niets markeren',
	'Modcp_inverse_selection' => 'Selectie omkeren',
	
	'Show_selected_pic_view_mode' => 'Bekijk alleen de geselecteerde persoonlijke albumcategorie',
	'Show_all_pic_view_mode' => 'Bekijk alle afbeeldingen in deze persoonlijke album',

// Access language strings
	'Album_Can_Manage_Categories' => 'Je <b>mag</b> de categoriën in de album %sbeheren%s',
	'No_Personal_Category_admin' => 'Je bent niet bevoegd om jouw persoonlijke albumcategorieën te beheren',

// The picture list of a member (album_memberlist.php)
	'Pic_Cat' => 'Categorie',
	'Picture_List_Of_User' => 'Alle afbeeldingen door %s',
	'Member_Picture_List_Explain' => 'Je kan de complete lijst van afbeeldingen bekijken van de andere gebruikers door een klik op de link van hem/haar profiel',
	'Comment_List_Of_User' => 'Alle opmerkingen door %s',
	'Rating_List_Of_User' => 'Alle beoordelingen door %s',
	'Show_All_Pictures_Of_user' => 'Bekijk alle afbeeldingen door %s',
	'Show_All_Comments_Of_user' => 'Bekijk alle opmerkingen door %s',
	'Show_All_Ratings_Of_user' => 'Bekijk alle beoordelingen door %s',

// The pictures list
	'All_Picture_List_Of_User' => 'Alle afbeeldingen',
	'All_Comment_List_Of_User' => 'Alle opmerkingen',
	'All_Rating_List_Of_User' => 'Alle beoordelingen',
	'All_Show_All_Pictures_Of_user' => 'Bekijk alle afbeeldingen',
	'All_Show_All_Comments_Of_user' => 'Bekijk alle opmerkingen',
	'All_Show_All_Ratings_Of_user' => 'Bekijk alle beoordelingen',

	'Not_commented' => '<i>Er zijn geen opmerkingen</i>',

// Nuff's Stuff
	'Nuff_Click' => 'Klik hier om de speciale effect toe te passen', 
	'Nuff_UnClick' => 'Klik hier voor de normale weergave', 
	'Nuff_Title' => 'Speciale effecten', 
	'Nuff_Explain' =>'Deze pagina kun je gebruiken om diverse effecten toe te passen op de afbeeldingen.<br>Maar let op dit is een <i><b>serverintensieve operatie voor je server</b></i>, dus misbruik het niet. Sommige effecten worden automatisch verkleind, zodat er niet te veel serveroperaties zijn.', 
	'Nuff_Normal' => 'Normale afbeelding', 
	'Nuff_Normal_Explain' => 'Er is geen effecten toegepast', 
	'Nuff_BW' => 'Zwartwit', 
	'Nuff_BW_Explain' => 'Dit effect zet de afbeelding om in zwartwit', 
	'Nuff_Sepia' => 'Sepiakleurig', 
	'Nuff_Sepia_Explain' => 'Dit effect past de sepiakleurigeffect toe aan de afbeelding', 
	'Nuff_Flip' => 'Flippen', 
	'Nuff_Flip_Explain' => 'Deze functie kan je de afbeelding laten flippen', 
	'Nuff_Mirror' => 'Spiegelen', 
	'Nuff_Mirror_Explain' => 'Deze functie kan je de afbeelding spiegelen', 
	'Nuff_Flip_H' => 'Horizontaal', 
	'Nuff_Flip_V' => 'Verticaal', 
	'Nuff_Rotate' => 'Rotatie (tegen de klok)', 
	'Nuff_Rotate_Explain' => 'Roteert de afbeeldingen tegen de klok in', 
	'Nuff_Resize' => 'Verkleind', 
	'Nuff_Resize_Explain' => 'Deze functie verkleind de afbeelding', 
	'Nuff_Resize_W' => 'Breedte', 
	'Nuff_Resize_H' => 'Hoogte', 
	'Nuff_Resize_No_Resize' => 'Niet verkleinen', 
	'Nuff_Watermark' => 'Watermerk', 
	'Nuff_Watermark_Explain' => 'Past een watermerk toe aan de afbeelding', 
	'Nuff_Recompress' => 'Recompressie', 
	'Nuff_Recompress_Explain' => 'Deze functie recomprest de afbeelding', 
	'Nuff_Alpha' => 'Alfa', 
	'Nuff_Alpha_Explain' => 'Dit effect legt een alfakanaal over je afbeelding heen', 
	'Nuff_Blur' => 'Vervagen', 
	'Nuff_Blur_Explain' => 'Dit effect vervaagt de afbeelding', 
	'Nuff_Pixelate' => 'Pixelate', 
	'Nuff_Pixelate_Explain' => 'Dit effect voeg een pixelatefilter toe aan de afbeelding', 
	'Nuff_Scatter' => 'Spreiding', 
	'Nuff_Scatter_Explain' => 'Dit effect voeg een spreidingfilter toe aan de afbeelding', 
	'Nuff_Infrared' => 'Infrarood', 
	'Nuff_Infrared_Explain' => 'Dit effect voegt een infraroodfilter toe aan de afbeelding', 
	'Nuff_Tint' => 'Tint', 
	'Nuff_Tint_Explain' => 'Dit effect past een rood effect toe aan de afbeelding', 
	'Nuff_Interlace' => 'Doorweven (Horizontale Lijnen)', 
	'Nuff_Interlace_Explain' => 'Dit effect voegt horizontale lijnen toe aan je afbeelding', 
	'Nuff_Screen' => 'Scherm (Hor Ver Lijnen)', 
	'Nuff_Screen_Explain' => 'Dit effect schrijft de schermkanaal van de afbeelding over', 
	'Nuff_Stereogram' => 'Stereogram', 
	'Nuff_Stereogram_Explain' => 'Dit effect zet een afbeelding om als een stereogram (BW 16 bit benodigd)', 

	'Pic_Gallery' => 'OTF album',
	'Select_Pic' => 'Selecteer afbeelding',
	'Select_Category' => 'Selecteer categorie',
	'Title_Description' => 'Titel &amp; omschrijving',

// Pic watch
	'No_longer_watching_comment' => 'Je volgt deze afbeelding niet meer voor opmerkingen',
	'Watching_comment' => 'Je volgt deze afbeelding voor opmerkingen',
	'Pic_comment_notification' => 'Album opmerkingbevestiging',
	'Pic_comment_watch_checkbox' => 'Controleveld voor opmerkingbevestiging:',
	'Watch_pic' => 'Volg deze afbeelding voor opmerkingen',
	'Unwatch_pic' => 'Stop het volgen van deze afbeelding voor opmerkingen',
	'Click_return_pic' => 'Klik %shier%s om terug te keren naar de afbeelding',
	
	'Pic_RDF' => 'RSS Feed 1.0',
	'Pic_RSS' => 'RSS Feed 2.0',
	)
);

?>