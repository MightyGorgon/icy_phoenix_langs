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
* TheSteffen, KugeLSichA, Tom, Carsten
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
    'Last_Pic' => 'Letztes Bild',
    'Public_Categories' => '�ffentliche Kategorien',
    'No_Pics' => 'Keine Bilder',
    'Users_Personal_Galleries' => 'Pers�nliche Galerien der Benutzer',
    'Your_Personal_Gallery' => 'Deine pers�nliche Galerie',
    'Recent_Public_Pics' => 'Neu ver�ffentlichte Bilder',
    'Nav_Separator' => '&nbsp;&raquo;&nbsp;',

// Category View
    'Category_not_exist' => 'Diese Kategorie existiert nicht',
    'Upload_Pic' => 'Bild Upload',
    'Upload_Pics' => 'Bilder Upload',
    'JUpload_Pic' => 'Lade mehrere verschiedene Bilder mit Jupload hoch',
    'Pic_Title' => 'Bild Titel',
    'View' => 'Ansichten',
    'Pic_Poster' => 'Benutzer',
    'Pic_Image' => 'Bild',
    'Waiting' => ' Bild(er) die auf Freigabe warten',

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
    'Album_upload_can' => 'Du <b>kannst</b> neue Bilder in dieser Kategorie hochladen.',
    'Album_upload_cannot' => 'Du <b>kannst keine</b> neuen Bilder in dieser Kategorie hochladen.',
    'Album_rate_can' => 'Du <b>kannst</b> Bilder in dieser Kategorie bewerten.',
    'Album_rate_cannot' => 'Du <b>kannst</b> Bilder in dieser Kategorie <b>nicht</b> bewerten.',
    'Album_comment_can' => 'Du <b>kannst</b> Kommentare in dieser Kategorie schreiben.',
    'Album_comment_cannot' => 'Du <b>kannst keine</b> Kommentare in dieser Kategorie schreiben.',
    'Album_edit_can' => 'Du <b>kannst</b> Deine Bilder in dieser Kategorie bearbeiten.',
    'Album_edit_cannot' => 'Du <b>kannst</b> Deine Bilder in dieser Kategorie <b>nicht</b> bearbeiten.',
    'Album_delete_can' => 'Du <b>kannst</b> Deine Bilder in dieser Kategorie l�schen.',
    'Album_delete_cannot' => 'Du <b>kannst</b> Deine Bilder in dieser Kategorie <b>nicht</b> l�schen.',
    'Album_moderate_can' => 'Du <b>kannst</b> %sdiese Kategorie moderieren%s.',

    'Edit_pic' => 'Bearbeiten',
    'Delete_pic' => 'L�schen',
    'Rating' => 'Bewertung',
    'Comments' => 'Kommentare',
    'Last_Comment' => 'Letzter Kommentar',
    'New_Comment' => 'Neuer Kommentar',
    'Not_rated' => '<i>Nicht bewertet</i>',
    'Random_Pictures' => 'Zuf�llige Bilder',
    'Highest_Rated_Pictures' => 'Hoch bewertete Bilder',
    'Most_Viewed_Pictures' => 'Meist betrachtete Bilder',

    'Avatar_Set' => 'Als Avatar verwenden',
    'BBCode_Copy' => 'BBCode kopieren',

// Upload
    'Pic_Desc' => 'Bildbeschreibung',
    'Plain_text_only' => 'Nur einfacher Text',
    'Max_length' => 'Max. L�nge (bytes)',
    'Upload_pic_from_machine' => 'Lade ein Bild von Deiner Festplatte hoch',
    'Upload_to_Category' => 'Lade in Kategorie',
    'Upload_thumbnail_from_machine' => 'Lade das Vorschaubild von der Festplatte (gleicher Typ wie Bild)',
    'Upload_thumbnail' => 'Lade ein Vorschaubild hoch',
    'Upload_thumbnail_explain' => 'Muss gleicher Filetyp wie das Bild haben!',
    'Thumbnail_size' => 'Vorschaubild Gr��e (Pixel)',
    'Filetype_and_thumbtype_do_not_match' => 'Dein Bild und das Vorschaubild m�ssen den gleichen Typ haben!',

    'Upload_no_title' => 'Du musst einen Titel f�r das Bild angeben',
    'Upload_no_file' => 'Du musst einen Pfad und den Namen angeben',
    'Desc_too_long' => 'Deine Beschreibung ist zu lang',

    'JPG_allowed' => 'JPGs erlaubt?',
    'PNG_allowed' => 'PNGs erlaubt?',
    'GIF_allowed' => 'GIFs erlaubt?',

    'Album_reached_quota' => 'Diese Kategorie hat die maximale Bildanzahl erreicht. Du kannst hier keine Bilder mehr hochladen. Bitte kontaktiere den Administrator f�r mehr Informationen!',
    'User_reached_pics_quota' => 'Du hast Deine maximale Bildanzahl erreicht! Du kannst keine Bilder mehr hochladen. Bitte kontaktiere den Administrator f�r mehr Informationen!',

    'No_valid_category_selected' => 'Keine g�ltige Album-Kategorie gew�hlt',
    'No_category_to_upload' => 'Leider existieren zur Zeit keine Kategorien, in welche du Bilder hochladen kannst.',
    'Not_allowed_file_type' => 'Dein Dateityp ist nicht erlaubt',
    'Upload_image_size_too_big' => 'Die Bildma�e sind zu gro�',
    'Upload_thumbnail_size_too_big' => 'Die Ma�e Deines Vorschaubildes sind zu gro�',

    'Missed_pic_title' => 'Du musst einen Bildtitel angeben',

    'Click_return_category' => 'Klick %shier%s, um zur Kategorie zur�ckzukehren',
    'Click_return_album_index' => 'Klick %shier %s um zum Album Index zur�ckzukehren',

    'Add_File' => 'Datei hinzuf�gen',
    'File_thumbnail_count_mismatch' => 'Die Anzahl der hochgeladenen Bilder stimmt nicht mit der Anzahl der Thumbnails �berein.',
    'No_thumbnail_for_picture_found' => 'Es wurde kein Thumbnail f�r das hochgeladene Bild namens %s gefunden.',
    'No_picture_for_thumbnail_found' => 'Es wurde kein Bild f�r das hochgeladene Thumbnail namens %s gefunden.',
    'Unknown_file_and_thumbnail_error_mismatch' => 'Unbekannter Fehler beim Hochladen des Bildes und dessen Thumbnail<br />Bildname: %s und Thumbnailname %s<br />',
    'Picture_exceeded_maximum_size_INI' => 'Das Bild namens \'%s\' ist zu gro� und wurde ausgelassen.<br />',
    'Thumbnail_exceeded_maximum_size_INI' => 'Das Thumbnail namens \'%s\' ist zu gro�, Bild und Thumbnail wurden ausgelassen.<br />',
    'Execution_time_exceeded_skipping' => 'Die maximale Zeit zur Ausf�hrung des Skriptes wurde �berschritten, die folgenden Bilder wurden ausgelassen:<br />',
    'Skipping_uploaded_picture_file' => '%s<br/>',
    'Skipping_uploaded_picture_and_thumbnail_file' => '%s (Thumbnail: %s)<br/>',
    'Album_upload_not_successful' => 'Kein Bild wurde erfolgreich hochgeladen.<br /><br />',
    'Album_upload_partially_successful' => 'Nur ein Teil der Bilder wurde erfolgreich hochgeladen.<br /><br />',
    'No_pictures_selected_for_upload' => 'Kein Bild zum Hochladen ausgew�hlt oder unbekannter Fehler.',

// 'Bad_upload_file_size' => 'Deine hochgeladene Datei ist zu gro� oder korrupt',
// 'Album_upload_successful' => 'Dein Bild wurde erfolgreich hochgeladen',
// 'Album_upload_need_approval' => 'Dein Bild wurde erfolgreich hochgeladen.<br /><br />Aber Bild�berpr�fung ist angeschaltet, sodass dein Bild vor der Ver�ffentlichung erst von einem Administrator oder Moderator dieses Forum �berpr�ft werden muss',

    'Bad_upload' => 'Das Hochladen des Bildes ist fehlgeschlagen.',
    'Bad_upload_file_size' => 'Die von Dir hochgeladene Datei ist zu gro� oder besch�digt.',
    'Album_upload_successful' => 'Dein Bild wurde erfolgreich hochgeladen.',
    'Album_upload_need_approval' => 'Dein Bild wurde erfolgreich hochgeladen.<br /><br />Allerdings muss Dein Bild erst von einem Administrator oder Moderator �berpr�ft werden, bevor es angezeigt wird.',

    'Rotation' => 'Rotieren (gegen den Uhrzeigersinn) - Grad',

    'Max_file_size' => 'Maximale Dateigr��e (Bytes)',
    'Max_width' => 'Maximale Bildbreite vor Komression (Pixel)',
    'Max_height' => 'Maximale Bildh�he vor Komression (Pixel)',

// Album Nuffload
    'time_elapsed' => 'Vergangene Zeit',
    'time_remaining' => 'Verbleibende Zeit',
    'upload_in_progress' => 'Bild wird hochgeladen�',
    'please_wait' => 'Bitte warten�',
    'uploaded' => 'Lade %multi_id% von %multi_max% Bildern hoch',
    'no_file_received' => 'Keine Bilddateien empfangen',
    'no_thumbnail_file_received' => 'Keine Thumbnails empfangen.',
    'file_too_big' => 'Bild-Dateigr��e �berschritten.',
    'thumbnail_too_big' => 'Thumbnail-Dateigr��e �berschritten',
    'image_res_too_high' => 'Bildaufl�sung zu hoch.',
    'add_field' => 'Upload-Feld hinzuf�gen',
    'remove_field' => 'Upload-Feld entfernen',
    'ZIP_allowed' => 'Erlaube ZIP-Upload',

// View Pic
    'Pic_ID' => 'ID',
    'Pic_Details' => 'Bild-Details',
    'Pic_Size' => 'Gr��e',
    'Pic_Type' => 'Bild-Typ',
    'Pic_BBCode' => 'BBCode',
    'Pic_not_exist' => 'Dieses Bild existiert nicht',
    'Click_enlarge' => 'Klicke auf das Bild, um ein gr��eres Bild zu betrachten',
    'Prev_Pic' => 'Zeige vorheriges Bild',
    'Next_Pic' => 'Zeige n�chstes Bild',
    'Slideshow' => 'Diashow',
    'Slideshow_Delay' => 'Diashow-Verz�gerung',
    'Slideshow_On' => 'Diashow',
    'Slideshow_Off' => 'Stoppe Diashow',
    'Pics_Nav' => 'Bild-Navigation',
    'Pics_Nav_Next' => 'N�chstes Bild',
    'Pics_Nav_Prev' => 'Vorheriges Bild',
    'Pics_Counter' => 'Bild %s von %s',

// Edit Pic
    'Edit_Pic_Info' => '�ndere Bild Informationen',
    'Pics_updated_successfully' => 'Deine Bildinformationen wurden erfolgreich aktualisiert',

// Delete Pic
    'Album_delete_confirm' => 'Bist Du sicher, dass Du diese(s) Bild(er) l�schen willst?',
    'Pics_deleted_successfully' => 'Diese(s) Bild(er) wurden erfolgreich gel�scht',

// ModCP
    'Approval' => 'Freigabe',
    'Approve' => 'freigeben',
    'Unapprove' => 'Freigabe aufheben',
    'Status' => 'Status',
    'Locked' => 'Gesperrt',
    'Not_approved' => 'nicht freigegeben',
    'Approved' => 'freigegeben',
    'Copy' => 'kopieren',
    'Move_to_Category' => 'Verschiebe nach Kategorie',
    'Pics_moved_successfully' => 'Die Bilder wurden erfolgreich verschoben',
    'Copy_to_Category' => 'Zur Kategorie kopieren',
    'Pics_copied_successfully' => 'Die Bilder wurden erfolgreich kopiert',
    'Pics_locked_successfully' => 'Die Bilder wurden erfolgreich gesperrt',
    'Pics_unlocked_successfully' => 'Die Bilder wurden erfolgreich entsperrt',
    'Pics_approved_successfully' => 'Die Bilder wurden erfolgreich freigegeben',
    'Pics_unapproved_successfully' => 'Die Freigabe der Bilder wurden erfolgreich aufgehoben',

// Rate
    'Current_Rating' => 'Aktuelle Bewertung',
    'Please_Rate_It' => 'Bitte bewerten',
    'Login_To_Vote' => 'Bitte log Dich ein, um zu bewerten',
    'Already_rated' => 'Du hast dieses Bild schon bewertet',
    'Own_Pic_Rate' => 'Du darfst deine eigenen Bilder nicht bewerten.',
    'Album_rate_successfully' => 'Das Bild wurde erfolgreich bewertet.',
    'Click_rate_more' => 'klicke %shier%s um weitere Bilder zu bewerten.',
    'Hot_Or_Not' => 'Hot Or Not',

// Comment
    'Comment_no_text' => 'Bitte gib Deinen Kommentar ein',
    'Comment_too_long' => 'Dein Kommentar ist zu lang',
    'Comment_delete_confirm' => 'Bist Du sicher, dass Du diesen Kommentar l�schen willst?',
    'Pic_Locked' => 'Sorry, dieses Bild ist gesperrt. Du kannst hier keine weiteren Kommentare einstellen.',
    'Post_your_comment' => 'Bitte gib Deinen Kommentar ein',

// Personal Gallery
    'Personal_Gallery_Explain' => 'Du kannst die pers�nlichen Galerien anderer Mitglieder betrachten, wenn Du auf den Link in deren Profil klickst',
    'Personal_gallery_not_created' => 'Die Pers�nliche Galerie von %s ist leer oder wurde noch nicht erstellt',
    'Not_allowed_to_create_personal_gallery' => 'Sorry, der Administrator des Boards erlaubt es Dir nicht, eine pers�nliche Galerie zu erstellen',
    'Click_return_personal_gallery' => 'Klick %shier%s um zur Pers�nlichen Galerie zur�ckzukehren',

// Download Archive
    'Download_pics' => 'Bilder herunterladen (ZIP)',
    'Download_page' => 'Bilder auf dieser Seite herunterladen (ZIP)',
    'No_Download_auth' => 'Du bist nicht berechtigt, Bilder aus dieser Galerie herunterzuaden!',

// Email Notification
    'Email_Notification' => 'Album-E-Mail-Benachrichtigung',
    'Email_Notification_Explain' => 'Diese Einstellung erlaubt es Administratoren, eine E-Mail-Benachrichtigung beim Upload eines Bildes zu erhalten.',
    'Approvation_OK' => 'Freigegeben',
    'Approvation_NO' => 'Erwarte Freigabe',

// Album Hierarchy Index Table
    'Last_Comment' => 'Letzter Kommentar',
    'Last_Comments' => 'Letzte Kommentare',
    'No_Comment_Info' => 'Keine Kommentare',
    'No_Pictures_In_Cat' => 'Keine Bilder in der Kategorie',
    'Total_Pics' => 'Bilder insgesamt',
    'Total_Comments' => 'Kommentare insgesamt',
    'Last_Index_Thumbnail' => 'Letztes Bild',
    'One_Sub_Total_Pics' => '%d Bild',
    'Multiple_Sub_Total_Pics' => '%d Bilder',
    'Album_sub_categories' => 'Unterkategorie',
    'No_Public_Galleries' => 'Keine �ffentlichen Galerien',
    'One_new_picture' => '%d neues Bild',
    'Multiple_new_pictures' => '%d neue Bilder',

// Personal Album Hierarchy Index Table
    'Personal_Categories' => 'Pers�nliche Galerien',
    'Create_Personal_Categories' => 'Pers�nliche Galerie erstellen',
    'Personal_Cat_Admin' => 'Pers�nliche Galerie Kategorien-Administration',
    'Recent_Personal_Pics' => 'Letzte Bilder aus der Pers�nlichen Galerie von %s',

// Album Moderator Control Panel
    'Modcp_check_all' => 'Alle markieren',
    'Modcp_uncheck_all' => 'Alle Markierungen aufheben',
    'Modcp_inverse_selection' => 'Auswahl umkehren',

    'Show_selected_pic_view_mode' => 'Zeige nur die gew�hlte Kategorie der pers�nlichen Galerie',
    'Show_all_pic_view_mode' => 'Zeige alle Bilder in dieser pers�nlichen Galerie',

// Access language strings
    'Album_Can_Manage_Categories' => 'Du <b>kannst</b> die Kategorien in der Galerie %smanagen%s',
    'No_Personal_Category_admin' => 'Du darfst die Kategorien der pers�nlichen Galerie nicht managen',

// The picture list of a member (album_memberlist.php)
    'Pic_Cat' => 'Kategorie',
    'Picture_List_Of_User' => 'Alle Bilder von %s',
    'Member_Picture_List_Explain' => 'Du kannst eine komplette Liste aller von einem Mitglied hinzugef�gten Bilder sehen, indem Du auf den Link in deren Profil klickst.',
    'Comment_List_Of_User' => 'Alle Kommentare von %s',
    'Rating_List_Of_User' => 'Alle Bewertungen von %s',
    'Show_All_Pictures_Of_user' => 'Zeige alle Bilder von %s',
    'Show_All_Comments_Of_user' => 'Zeige alle Kommentare von %s',
    'Show_All_Ratings_Of_user' => 'Zeige alle Bewertungen von %s',

// The pictures list
    'All_Picture_List_Of_User' => 'Alle Bilder',
    'All_Comment_List_Of_User' => 'Alle Kommentare',
    'All_Rating_List_Of_User' => 'Alle Wertungen',
    'All_Show_All_Pictures_Of_user' => 'Zeige alle Bilder',
    'All_Show_All_Comments_Of_user' => 'Zeige alle Kommentare',
    'All_Show_All_Ratings_Of_user' => 'Zeige alle Wertungen',

    'Not_commented' => '<i>Nicht kommentiert</i>',

// Nuff's Stuff
    'Nuff_Click' => 'Hier klicken, um Spezialeffekte anzuwenden',
    'Nuff_UnClick' => 'Klicke hier, f�r normale Ansicht',
    'Nuff_Title' => 'Spezialeffekte',
    'Nuff_Explain' => 'Auf dieser Seite k�nnen mehrere Effekte auf das Bild angewendet werden.<br />Dies ist eine <i><b>gro�e Belastung f�r die Server CPU</b></i>, also bitte nicht mi�brauchen. Einige Effekte ver�ndern die Gr��e des Bildes automatisch, um die CPU-Last zu minimieren.',
    'Nuff_Normal' => 'Normales Bild',
    'Nuff_Normal_Explain' => 'Keine Effekte angewandt',
    'Nuff_BW' => 'Schwarz / Wei�',
    'Nuff_BW_Explain' => 'Dieser Effekt wandelt das Bild in Schwarz/Wei� um',
    'Nuff_Sepia' => 'Sepia',
    'Nuff_Sepia_Explain' => 'Dieser Effekt t�nt das Bild in Sepia (�hnelt alten Aufnahmen)',
    'Nuff_Flip' => 'Drehen',
    'Nuff_Flip_Explain' => 'Diese Funktion dreht das Bild',
    'Nuff_Mirror' => 'Spiegel',
    'Nuff_Mirror_Explain' => 'Diese Funktion spiegelt das Bild',
    'Nuff_Flip_H' => 'Horizontal',
    'Nuff_Flip_V' => 'Vertikal',
    'Nuff_Rotate' => 'Bilddrehung (gegen den Uhrzeigersinn)',
    'Nuff_Rotate_Explain' => 'Rotiert das Bild gegen den Uhrzeigersinn',
    'Nuff_Resize' => 'Gr��en�nderung',
    'Nuff_Resize_Explain' => 'Diese Funktion �ndert die Bildgr��e',
    'Nuff_Resize_W' => 'Breite',
    'Nuff_Resize_H' => 'H�he',
    'Nuff_Resize_No_Resize' => 'Keine Gr��en�nderung',
    'Nuff_Watermark' => 'Wasserzeichen',
    'Nuff_Watermark_Explain' => 'Ein Wasserzeichen auf das Bild anwenden',
    'Nuff_Recompress' => 'Erneut komprimieren',
    'Nuff_Recompress_Explain' => 'Diese Funktion komprimiert das Bild erneut',
    'Nuff_Alpha' => 'Alpha',
    'Nuff_Alpha_Explain' => 'Dieser Effekt legt einen Alpha-Kanal �ber das Bild',
    'Nuff_Blur' => 'Unsch�rfe',
    'Nuff_Blur_Explain' => 'Dieser Effekt l��t das Bild unsch�rfer erscheinen',
    'Nuff_Pixelate' => 'Verpixeln',
    'Nuff_Pixelate_Explain' => 'Dieser Effekt wendet einen Pixel-Filter auf das Bild an und l��t es verpixelt erscheinen',
    'Nuff_Scatter' => 'Streuung',
    'Nuff_Scatter_Explain' => 'Dieser Effekt wendet einen Streufilter auf das Bild an',
    'Nuff_Infrared' => 'Infrarot',
    'Nuff_Infrared_Explain' => 'Dieser Effekt legt einen Infrarot-Filter �ber das Bild',
    'Nuff_Tint' => 'T�nung',
    'Nuff_Tint_Explain' => 'Dieser Effekt legt einen Rot-Tintenfilter �ber das Bild',
    'Nuff_Interlace' => 'Interlace (Horizontale Linien)',
    'Nuff_Interlace_Explain' => 'Dieser Effekt legt einen Horizontal-Linien-Filter �ber das Bild',
    'Nuff_Screen' => 'Bildschirm (H / V Linien)',
    'Nuff_Screen_Explain' => 'Dieser Effekt legt einen Bildschirm-Filter �ber das Bild (Horizontale &amp; Vertikale Linien)',
    'Nuff_Stereogram' => 'Stereogramm',
    'Nuff_Stereogram_Explain' => 'Dieser Effekt konvertiert das Bild in ein Stereogramm (BW 16 bit erforderlich)',

    'Pic_Gallery' => 'Schnelles Foto Album',
    'Select_Pic' => 'W�hle ein Bild aus',
    'Select_Category' => 'W�hle eine Kategorie aus',
    'Title_Description' => 'Titel &amp; Beschreibung',

// Pic watch
    'No_longer_watching_comment' => 'Du beobachtest die Kommentare dieses Bildes nun nicht mehr',
    'Watching_comment' => 'Du beobachtest nun die Kommentare dieses Bildes',
    'Pic_comment_notification' => 'Galerie-Kommentar-Benachrichtigung',
    'Pic_comment_watch_checkbox' => 'Markiere die Box um �ber Kommentare zu diesem Bild benachrichtigt zu werden:',
    'Watch_pic' => 'Beobachte dieses Bild f�r Kommentare',
    'Unwatch_pic' => 'Beende das Beobachten der Kommentare dieses Bildes',
    'Click_return_pic' => 'Klicke %shier%s um zum Bild zur�ckzukehren',

    'Pic_RDF' => 'RSS Feed 1.0',
    'Pic_RSS' => 'RSS Feed 2.0',
	)
);

?>