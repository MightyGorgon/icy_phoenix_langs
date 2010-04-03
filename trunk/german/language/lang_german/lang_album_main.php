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
	'Photo_Album' => 'Foto-Galerie',
	'Pics' => 'Bilder',
	'Last_Pic' => 'Letztes Bild',
	'Public_Categories' => 'Öffentliche Kategorien',
	'No_Pics' => 'Keine Bilder',
	'Users_Personal_Galleries' => 'Persönliche Foto-Galerien der Benutzer',
	'Your_Personal_Gallery' => 'Deine persönliche Foto-Galerie',
	'Recent_Public_Pics' => 'Neu veröffentlichte Bilder',
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
	'Album_view_can' => 'Du <b>kannst</b> Bilder anschauen.',
	'Album_view_cannot' => 'Du <b>kannst keine</b> Bilder anschauen.',
	'Album_upload_can' => 'Du <b>kannst</b> neue Bilder in dieser Kategorie hochladen.',
	'Album_upload_cannot' => 'Du <b>kannst keine</b> neuen Bilder in dieser Kategorie hochladen.',
	'Album_rate_can' => 'Du <b>kannst</b> Bilder in dieser Kategorie bewerten.',
	'Album_rate_cannot' => 'Du <b>kannst</b> Bilder in dieser Kategorie <b>nicht</b> bewerten.',
	'Album_comment_can' => 'Du <b>kannst</b> Kommentare in dieser Kategorie schreiben.',
	'Album_comment_cannot' => 'Du <b>kannst keine</b> Kommentare in dieser Kategorie schreiben.',
	'Album_edit_can' => 'Du <b>kannst</b> deine Bilder in dieser Kategorie bearbeiten.',
	'Album_edit_cannot' => 'Du <b>kannst</b> deine Bilder in dieser Kategorie <b>nicht</b> bearbeiten.',
	'Album_delete_can' => 'Du <b>kannst</b> deine Bilder in dieser Kategorie löschen.',
	'Album_delete_cannot' => 'Du <b>kannst</b> deine Bilder in dieser Kategorie <b>nicht</b> löschen.',
	'Album_moderate_can' => 'Du <b>kannst</b> %sdiese Kategorie moderieren%s.',

	'Edit_pic' => 'Bearbeiten',
	'Delete_pic' => 'Löschen',
	'Rating' => 'Bewertung',
	'Comments' => 'Kommentare',
	'Last_Comment' => 'Letzter Kommentar',
	'New_Comment' => 'Neuer Kommentar',
	'Not_rated' => '<i>Nicht bewertet</i>',
	'Random_Pictures' => 'Zufällige Bilder',
	'Highest_Rated_Pictures' => 'Hoch bewertete Bilder',
	'Most_Viewed_Pictures' => 'Meist betrachtete Bilder',

	'Avatar_Set' => 'Als Avatar verwenden',
	'BBCode_Copy' => 'BBCode kopieren',

// Upload
	'Pic_Desc' => 'Bildbeschreibung',
	'Plain_text_only' => 'Nur einfacher Text',
	'Max_length' => 'Max. Länge (bytes)',
	'Upload_pic_from_machine' => 'Lade ein Bild von Deiner Festplatte hoch',
	'Upload_to_Category' => 'Lade in Kategorie',
	'Upload_thumbnail_from_machine' => 'Lade das Vorschaubild von der Festplatte (gleicher Dateityp wie Bild)',
	'Upload_thumbnail' => 'Lade ein Vorschaubild hoch',
	'Upload_thumbnail_explain' => 'Muss gleichen Dateityp wie das Bild haben!',
	'Thumbnail_size' => 'Vorschaubild Größe (Pixel)',
	'Filetype_and_thumbtype_do_not_match' => 'Dein Bild und das Vorschaubild müssen den gleichen Dateitypen haben!',

	'Upload_no_title' => 'Du musst einen Titel für das Bild angeben',
	'Upload_no_file' => 'Du musst einen Pfad und den Namen angeben',
	'Desc_too_long' => 'Deine Beschreibung ist zu lang',

	'JPG_allowed' => 'JPGs erlaubt?',
	'PNG_allowed' => 'PNGs erlaubt?',
	'GIF_allowed' => 'GIFs erlaubt?',

	'Album_reached_quota' => 'Diese Kategorie hat die maximale Bildanzahl erreicht. Du kannst hier keine Bilder mehr hochladen. Bitte kontaktiere den Administrator für mehr Informationen!',
	'User_reached_pics_quota' => 'Du hast deine maximale Bildanzahl erreicht! Du kannst keine Bilder mehr hochladen. Bitte kontaktiere den Administrator für mehr Informationen!',

	'No_valid_category_selected' => 'Keine gültige Album-Kategorie gewählt',
	'No_category_to_upload' => 'Leider existieren zurzeit keine Kategorien, in welche du Bilder hochladen kannst.',
	'Not_allowed_file_type' => 'Dein Dateityp ist nicht erlaubt',
	'Upload_image_size_too_big' => 'Die Bildmaße sind zu groß',
	'Upload_thumbnail_size_too_big' => 'Die Maße deines Vorschaubildes sind zu groß',

	'Missed_pic_title' => 'Du musst einen Bildtitel angeben.',

	'Click_return_category' => 'Klicke %shier%s, um zur Kategorie zurückzukehren.',
	'Click_return_album_index' => 'Klicke %shier%s, um zum Album Index zurückzukehren.',

	'Add_File' => 'Datei hinzufügen',
	'File_thumbnail_count_mismatch' => 'Die Anzahl der hochgeladenen Bilder stimmt nicht mit der Anzahl der Thumbnails überein.',
	'No_thumbnail_for_picture_found' => 'Es wurde kein Thumbnail für das hochgeladene Bild namens %s gefunden.',
	'No_picture_for_thumbnail_found' => 'Es wurde kein Bild für das hochgeladene Thumbnail namens %s gefunden.',
	'Unknown_file_and_thumbnail_error_mismatch' => 'Unbekannter Fehler beim Hochladen des Bildes und dessen Thumbnail<br />Bildname: %s und Thumbnailname %s<br />',
	'Picture_exceeded_maximum_size_INI' => 'Das Bild namens \'%s\' ist zu groß und wurde ausgelassen.<br />',
	'Thumbnail_exceeded_maximum_size_INI' => 'Das Thumbnail namens \'%s\' ist zu groß, Bild und Thumbnail wurden ausgelassen.<br />',
	'Execution_time_exceeded_skipping' => 'Die maximale Zeit zur Ausführung des Skriptes wurde überschritten, die folgenden Bilder wurden ausgelassen:<br />',
	'Skipping_uploaded_picture_file' => '%s<br />',
	'Skipping_uploaded_picture_and_thumbnail_file' => '%s (Thumbnail: %s)<br />',
	'Album_upload_not_successful' => 'Kein Bild wurde erfolgreich hochgeladen.<br /><br />',
	'Album_upload_partially_successful' => 'Nur ein Teil der Bilder wurde erfolgreich hochgeladen.<br /><br />',
	'No_pictures_selected_for_upload' => 'Kein Bild zum Hochladen ausgewählt oder unbekannter Fehler.',

// 'Bad_upload_file_size' => 'Deine hochgeladene Datei ist zu groß oder korrupt',
// 'Album_upload_successful' => 'Dein Bild wurde erfolgreich hochgeladen',
// 'Album_upload_need_approval' => 'Dein Bild wurde erfolgreich hochgeladen.<br /><br />Aber Bildüberprüfung ist angeschaltet, sodass dein Bild vor der Veröffentlichung erst von einem Administrator oder Moderator dieses Forum überprüft werden muss',

	'Bad_upload' => 'Das Hochladen des Bildes ist fehlgeschlagen.',
	'Bad_upload_file_size' => 'Die von Dir hochgeladene Datei ist zu groß oder beschädigt.',
	'Album_upload_successful' => 'Dein Bild wurde erfolgreich hochgeladen.',
	'Album_upload_need_approval' => 'Dein Bild wurde erfolgreich hochgeladen.<br /><br />Allerdings muss dein Bild erst von einem Administrator oder Moderator überprüft werden, bevor es angezeigt wird.',

	'Rotation' => 'Rotieren (gegen den Uhrzeigersinn) - Grad',

	'Max_file_size' => 'Maximale Dateigröße (Bytes)',
	'Max_width' => 'Maximale Bildbreite vor Kompression (Pixel)',
	'Max_height' => 'Maximale Bildhöhe vor Kompression (Pixel)',

// Album Nuffload
	'time_elapsed' => 'Vergangene Zeit',
	'time_remaining' => 'Verbleibende Zeit',
	'upload_in_progress' => 'Bild wird hochgeladen…',
	'please_wait' => 'Bitte warten…',
	'uploaded' => 'Lade %multi_id% von %multi_max% Bildern hoch',
	'no_file_received' => 'Keine Bilddateien empfangen',
	'no_thumbnail_file_received' => 'Keine Thumbnails empfangen.',
	'file_too_big' => 'Bild-Dateigröße überschritten.',
	'thumbnail_too_big' => 'Thumbnail-Dateigröße überschritten',
	'image_res_too_high' => 'Bildauflösung zu hoch.',
	'add_field' => 'Upload-Feld hinzufügen',
	'remove_field' => 'Upload-Feld entfernen',
	'ZIP_allowed' => 'Erlaube ZIP-Upload',

// View Pic
	'Pic_ID' => 'ID',
	'Pic_Details' => 'Bild-Details',
	'Pic_Size' => 'Größe',
	'Pic_Type' => 'Bild-Typ',
	'Pic_BBCode' => 'BBCode',
	'Pic_not_exist' => 'Dieses Bild existiert nicht',
	'Click_enlarge' => 'Klicke auf das Bild, um ein größeres Bild zu betrachten',
	'Prev_Pic' => 'Zeige vorheriges Bild',
	'Next_Pic' => 'Zeige nächstes Bild',
	'Slideshow' => 'Diashow',
	'Slideshow_Delay' => 'Diashow-Verzögerung',
	'Slideshow_On' => 'Diashow',
	'Slideshow_Off' => 'Stoppe Diashow',
	'Pics_Nav' => 'Bild-Navigation',
	'Pics_Nav_Next' => 'Nächstes Bild',
	'Pics_Nav_Prev' => 'Vorheriges Bild',
	'Pics_Counter' => 'Bild %s von %s',

// Edit Pic
	'Edit_Pic_Info' => 'Ändere Bild Informationen',
	'Pics_updated_successfully' => 'Deine Bildinformationen wurden erfolgreich aktualisiert',

// Delete Pic
	'Album_delete_confirm' => 'Bist du sicher, dass du diese(s) Bild(er) löschen willst?',
	'Pics_deleted_successfully' => 'Diese(s) Bild(er) wurden erfolgreich gelöscht',

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
	'Click_rate_more' => 'Klicke %shier%s, um weitere Bilder zu bewerten.',
	'Hot_Or_Not' => 'Hot Or Not',

// Comment
	'Comment_no_text' => 'Bitte gib Deinen Kommentar ein',
	'Comment_too_long' => 'Dein Kommentar ist zu lang',
	'Comment_delete_confirm' => 'Bist du sicher, dass du diesen Kommentar löschen willst?',
	'Pic_Locked' => 'Sorry, dieses Bild ist gesperrt. Du kannst hier keine weiteren Kommentare einstellen.',
	'Post_your_comment' => 'Bitte gib Deinen Kommentar ein',

// Personal Gallery
	'Personal_Gallery_Explain' => 'Du kannst die persönlichen Foto-Galerien anderer Mitglieder betrachten, wenn du auf den Link in deren Profil klickst',
	'Personal_gallery_not_created' => 'Die persönliche Foto-Galerie von %s ist leer oder wurde noch nicht erstellt',
	'Not_allowed_to_create_personal_gallery' => 'Sorry, der Administrator des Boards erlaubt es Dir nicht, eine persönliche Foto-Galerie zu erstellen',
	'Click_return_personal_gallery' => 'Klicke %shier%s, um zur persönlichen Foto-Galerie zurückzukehren.',

// Download Archive
	'Download_pics' => 'Bilder herunterladen (ZIP)',
	'Download_page' => 'Bilder auf dieser Seite herunterladen (ZIP)',
	'No_Download_auth' => 'Du bist nicht berechtigt, Bilder aus dieser Foto-Galerie herunterzuladen!',

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
	'No_Public_Galleries' => 'Keine öffentlichen Foto-Galerien',
	'One_new_picture' => '%d neues Bild',
	'Multiple_new_pictures' => '%d neue Bilder',

// Personal Album Hierarchy Index Table
	'Personal_Categories' => 'Persönliche Foto-Galerien',
	'Create_Personal_Categories' => 'Persönliche Foto-Galerie erstellen',
	'Personal_Cat_Admin' => 'Persönliche Foto-Galerie Kategorien-Administration',
	'Recent_Personal_Pics' => 'Letzte Bilder aus der persönlichen Foto-Galerie von %s',

// Album Moderator Control Panel
	'Modcp_check_all' => 'Alle markieren',
	'Modcp_uncheck_all' => 'Alle Markierungen aufheben',
	'Modcp_inverse_selection' => 'Auswahl umkehren',

	'Show_selected_pic_view_mode' => 'Zeige nur die gewählte Kategorie der persönlichen Foto-Galerie',
	'Show_all_pic_view_mode' => 'Zeige alle Bilder in dieser persönlichen Foto-Galerie',

// Access language strings
	'Album_Can_Manage_Categories' => 'Du <b>kannst</b> die Kategorien in der Foto-Galerie %smanagen%s',
	'No_Personal_Category_admin' => 'Du darfst die Kategorien der persönlichen Foto-Galerie nicht managen',

// The picture list of a member (album_memberlist.php)
	'Pic_Cat' => 'Kategorie',
	'Picture_List_Of_User' => 'Alle Bilder von %s',
	'Member_Picture_List_Explain' => 'Du kannst eine komplette Liste aller von einem Mitglied hinzugefügten Bilder sehen, indem du auf den Link in deren Profil klickst.',
	'Comment_List_Of_User' => 'Alle Kommentare von %s',
	'Rating_List_Of_User' => 'Alle Bewertungen von %s',
	'Show_All_Pictures_Of_user' => 'Zeige alle Bilder von %s',
	'Show_All_Comments_Of_user' => 'Zeige alle Kommentare von %s',
	'Show_All_Ratings_Of_user' => 'Zeige alle Bewertungen von %s',

// The pictures list
	'All_Picture_List_Of_User' => 'Alle Bilder',
	'All_Comment_List_Of_User' => 'Alle Kommentare',
	'All_Rating_List_Of_User' => 'Alle Bewertungen',
	'All_Show_All_Pictures_Of_user' => 'Zeige alle Bilder',
	'All_Show_All_Comments_Of_user' => 'Zeige alle Kommentare',
	'All_Show_All_Ratings_Of_user' => 'Zeige alle Bewertungen',

	'Not_commented' => '<i>Nicht kommentiert</i>',

// Nuff's Stuff
	'Nuff_Click' => 'Hier klicken, um Spezialeffekte anzuwenden',
	'Nuff_UnClick' => 'Klicke hier, für normale Ansicht',
	'Nuff_Title' => 'Spezialeffekte',
	'Nuff_Explain' => 'Auf dieser Seite können mehrere Effekte auf das Bild angewendet werden.<br />Dies ist eine <i><b>große Belastung für die Server CPU</b></i>, also bitte nicht missbrauchen. Einige Effekte verändern die Größe des Bildes automatisch, um die CPU-Last zu minimieren.',
	'Nuff_Normal' => 'Normales Bild',
	'Nuff_Normal_Explain' => 'Keine Effekte angewandt',
	'Nuff_BW' => 'Schwarz / Weiß',
	'Nuff_BW_Explain' => 'Dieser Effekt wandelt das Bild in Schwarz/Weiß um',
	'Nuff_Sepia' => 'Sepia',
	'Nuff_Sepia_Explain' => 'Dieser Effekt tönt das Bild in Sepia (ähnelt alten Aufnahmen)',
	'Nuff_Flip' => 'Drehen',
	'Nuff_Flip_Explain' => 'Diese Funktion dreht das Bild',
	'Nuff_Mirror' => 'Spiegel',
	'Nuff_Mirror_Explain' => 'Diese Funktion spiegelt das Bild',
	'Nuff_Flip_H' => 'Horizontal',
	'Nuff_Flip_V' => 'Vertikal',
	'Nuff_Rotate' => 'Bilddrehung (gegen den Uhrzeigersinn)',
	'Nuff_Rotate_Explain' => 'Rotiert das Bild gegen den Uhrzeigersinn',
	'Nuff_Resize' => 'Größenänderung',
	'Nuff_Resize_Explain' => 'Diese Funktion ändert die Bildgröße',
	'Nuff_Resize_W' => 'Breite',
	'Nuff_Resize_H' => 'Höhe',
	'Nuff_Resize_No_Resize' => 'Keine Größenänderung',
	'Nuff_Watermark' => 'Wasserzeichen',
	'Nuff_Watermark_Explain' => 'Ein Wasserzeichen auf das Bild anwenden',
	'Nuff_Recompress' => 'Erneut komprimieren',
	'Nuff_Recompress_Explain' => 'Diese Funktion komprimiert das Bild erneut',
	'Nuff_Alpha' => 'Alpha',
	'Nuff_Alpha_Explain' => 'Dieser Effekt legt einen Alpha-Kanal über das Bild',
	'Nuff_Blur' => 'Unschärfe',
	'Nuff_Blur_Explain' => 'Dieser Effekt läßt das Bild unschärfer erscheinen',
	'Nuff_Pixelate' => 'Verpixeln',
	'Nuff_Pixelate_Explain' => 'Dieser Effekt wendet einen Pixel-Filter auf das Bild an und lässt es verpixelt erscheinen',
	'Nuff_Scatter' => 'Streuung',
	'Nuff_Scatter_Explain' => 'Dieser Effekt wendet einen Streufilter auf das Bild an',
	'Nuff_Infrared' => 'Infrarot',
	'Nuff_Infrared_Explain' => 'Dieser Effekt legt einen Infrarot-Filter über das Bild',
	'Nuff_Tint' => 'Tönung',
	'Nuff_Tint_Explain' => 'Dieser Effekt legt einen Rot-Tintenfilter über das Bild',
	'Nuff_Interlace' => 'Interlace (Horizontale Linien)',
	'Nuff_Interlace_Explain' => 'Dieser Effekt legt einen Horizontal-Linien-Filter über das Bild',
	'Nuff_Screen' => 'Bildschirm (H / V Linien)',
	'Nuff_Screen_Explain' => 'Dieser Effekt legt einen Bildschirm-Filter über das Bild (Horizontale &amp; Vertikale Linien)',
	'Nuff_Stereogram' => 'Stereogramm',
	'Nuff_Stereogram_Explain' => 'Dieser Effekt konvertiert das Bild in ein Stereogramm (BW 16 bit erforderlich)',

	'Pic_Gallery' => 'Schnelle Foto-Galerie',
	'Select_Pic' => 'Wähle ein Bild aus',
	'Select_Category' => 'Wähle eine Kategorie aus',
	'Title_Description' => 'Titel &amp; Beschreibung',

// Pic watch
	'No_longer_watching_comment' => 'Du beobachtest die Kommentare dieses Bildes nun nicht mehr',
	'Watching_comment' => 'Du beobachtest nun die Kommentare dieses Bildes',
	'Pic_comment_notification' => 'Foto-Galerie-Kommentar-Benachrichtigung',
	'Pic_comment_watch_checkbox' => 'Markiere die Box um über Kommentare zu diesem Bild benachrichtigt zu werden:',
	'Watch_pic' => 'Beobachte dieses Bild für Kommentare.',
	'Unwatch_pic' => 'Beende das Beobachten der Kommentare dieses Bildes.',
	'Click_return_pic' => 'Klicke %shier%s, um zum Bild zurückzukehren.',

	'Pic_RDF' => 'RSS-Feed 1.0',
	'Pic_RSS' => 'RSS-Feed 2.0',
	)
);

?>