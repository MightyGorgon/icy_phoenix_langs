<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_album_admin.php 34 2009-05-07 22:45:10Z TheSteffen $
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
// 01 - Configuration
	'Album_config' => 'Foto-Galerie',
	'Album_config_explain' => 'Hier kannst du die generellen Einstellungen der Foto-Galerie zu �ndern.',
	'Album_config_updated' => 'Foto-Galerie Konfiguration wurde erfolgreich aktualisiert',
	'Click_return_album_config' => 'Klicke %shier%s, um zur Foto-Galerie Konfiguration zur�ckzukehren.',
	'Max_pics' => 'Maximale Anzahl Bilder pro Kategorie (-1 = unbegrenzt)',
	'User_pics_limit' => 'Maximale Anzahl Bilder pro Kategorie pro Benutzer(-1 = unbegrenzt)',
	'Moderator_pics_limit' => 'Maximale Anzahl Bilder pro Kategorie pro Moderator(-1 = unbegrenzt)',
	'Pics_Approval' => 'Bilder Genehmigung',
	'Rows_per_page' => 'Anzahl der Reihen pro Thumbnail Seite',
	'Cols_per_page' => 'Anzahl der Spalten pro Thumbnail Seite',
	'Thumbnail_quality' => 'Thumbnail Qualit�t (1-100)',
	'Thumbnail_cache' => 'Thumbnail Cache',
	'Manual_thumbnail' => 'Manuelle Thumbnails',
	'GD_version' => 'Optimiere f�r die GD Version',
	'Pic_Desc_Max_Length' => 'Maximale L�nge f�r Bildbeschreibung/Kommentar (bytes)',
	'Hotlink_prevent' => 'Hotlinking verhindern',
	'Hotlink_allowed' => 'Erlaubte Domains f�r Hotlinking (getrennt durch Kommata)',
	'Personal_gallery' => 'Benutzer d�rfen eine pers�nliche Foto-Galerie erstellen',
	'Personal_gallery_limit' => 'Maximale Anzahl von Bildern f�r jede pers�nliche Foto-Galerie (-1 = unbegrenzt)',
	'Personal_gallery_view' => 'Wer darf pers�nliche Foto-Galerien betrachten (Voreinstellung)',
	'Rate_system' => 'Erlaube Bildbewertung',
	'Rate_Scale' => 'Bewertungs-Skala',
	'Comment_system' => 'Aktiviere Kommentarsystem',
	'Thumbnail_Settings' => 'Thumbnail Einstellungen',
	'Quick_Thumbnails' => 'Schnelle Thumbnails',
	'Quick_Thumbnails_explain' => 'Aktiviere die Option, um das System nach bereits erstellten Thumbnails suchen und vom Browser anzeigen zu lassen. Dies beschleunigt die Thumbnails Erstellung in den Kategorien.',
	'Extra_Settings' => 'Extra Einstellungen',
	'Default_Sort_Method' => 'Voreingestellte Sortiermethode',
	'Default_Sort_Order' => 'Voreingestellte Sortierreihenfolge',
	'Fullpic_Popup' => 'Zeige gew�hltes Bild in Popup-Fenster',
	'Email_Notification' => 'Aktiviere E-Mail-Benachrichtigung f�r neue Bilder (nur Admins)',
	'Show_Download' => 'Zeige DOWNLOAD-Knopf (der das Herunterladen der Bilder im ZIP-Format erm�glicht) nur f�r jene, die UPLOAD-Rechte in der Kategorie haben (wird IMMER gew�hlt, ist der Knopf auch f�r Benutzer ohne UPLOAD-Rechte sichtbar)',
	'Show_Slideshow' => 'Aktiviere Dia-Show-Feature',
	'Show_Slideshow_Script' => '�bergangseffekte f�r Diashow aktivieren',
	'Show_Pic_Size' => 'Zeige die Bildgr��e im Thumbnail',
	'Show_IMG_No_GD' => 'Zeige GIF-Thumbnails ohne GD (die Bilder werden verkleinert dargestellt, aber komplett geladen)',
	'Show_GIF_MidThumb' => 'Zeige vollst�ndiges GIF-Bild, wenn Mid Thumb aktiviert ist.',
	'Show_Pics_Nav' => 'Zeige Bild-Navigations-Box in Show Page',
	'Invert_Nav_Arrows' => 'Die Pfeilrichtung in der Showpage umkehren (rechter Pfeil = neuer)',
	'Show_Inline_Copyright' => 'Zeige Copyright-Info in einer Zeile',
	'Enable_Nuffimage' => 'Aktiviere die Nuffmonn-Bild-Spezialeffektseite',
	'Enable_Sepia_BW' => 'Aktiviere Sepia und B&W auf der Spezialeffektseite (deaktiviere diese Funktion, um die CPU-Belastung zu verringern)',
	'Show_EXIF_Info' => 'EXIF Information des Bildes anzeigen',
	'Set_Memory' => 'Versucht ein neues Limit durch php zu setzen (MB)',
	'Set_Memory_Explain' => 'Dieses Feature kann verwendet werden um die Speicherbegrenzung in PHP zu erh�hen (Diese Einstellung muss durch Deinen Anbieter erlaubt werden): falls deine Bilder nicht richtig geladen werden, kannst du versuchen den Speicher zu erh�hen. Der Maximalwert wird hier bei 16 MB festgelegt.',
	'LB_Preview' => 'Aktiviere LightBox Vorschau',
	'LB_Preview_Explain' => 'Dieses Feature zeigt eine LightBox mit einer Bildervorschau, wenn du mit der Maus �ber das Thumbnail f�hrst.',
	'Album_config_notice' => 'Falls du die derzeitigen Album-Einstellungen wechselst und einen anderen Tab w�hlst, wirst du zum Speichern der �nderungen aufgefordert.<br />Das System wird �nderungen <b>nicht automatisch speichern</b>.',
	'Save_sucessfully_confimation' => '%s wurde erfolgreich gespeichert',
	'Show_Recent_In_Subcats' => 'Zeige die neusten Bilder in den Unterkategorien',
	'Show_Recent_Instead_of_NoPics' => 'Zeige die neusten Bilder anstelle der \'Keine Bilder\'-Nachricht',
	'Show_Last_Comments' => 'Zeige letzte Kommentare im Foto-Galerie Index und Kategorien',
	'Album_Index_Settings' => 'Foto-Galerie Index',
	'Album_Index_Page_Settings' => 'Album Index Seiten Einstellungen',
	'Show_Index_Subcats' => 'Zeige Unterkategorien im Index',
	'Show_Index_Thumb' => 'Zeige Kategorie-Thumbnails im Index',
	'Show_Index_Pics' => 'Zeige die Anzahl der Bilder der jeweiligen Unterkategorien im Index',
	'Show_Index_Comments' => 'Zeige die Anzahl der Kommentare der jeweiligen Unterkategorie im Index',
	'Show_Index_Total_Pics' => 'Zeige die Gesamtanzahl der Bilder f�r die Kategorie inkl. aller Unterkategorien im Index',
	'Show_Index_Total_Comments' => 'Zeige die Gesamtanzahl der Kommentare f�r die Kategorie inkl. aller Unterkategorien im Index',
	'Show_Index_Last_Comment' => 'Zeige den letzten Kommentar f�r die Kategorie inkl. aller Unterkategorien im Index',
	'Show_Index_Last_Pic' => 'Zeige die letzten Bildinformationen f�r die Kategorie inkl. aller Unterkategorien im Index',
	'Line_Break_Subcats' => 'Zeige jede Unterkategorie in einer neuen Zeile',
	'Show_Personal_Gallery_Link' => 'Zeige pers�nliche Foto-Galerien und den dazugeh�rigen Link in den Unterkategorien',
	'Album_Personal_Auth_Explain' => 'Hier kannst du w�hlen, welche Benutzergruppe(n) Moderator f�r <b>alle</b> pers�nlichen Alben-Kategorien sind oder einfach nur pers�nlichen Zugriff zu ihnen hat.',
	'Album_debug_mode' => 'Aktiviere den \'hierarchy debug mode\'.<br /><span class="gensmall">Dies wird eine Menge zus�tzliche Ausgaben und einige Warnungen mit sich bringen, die alle ihre Richtigkeit haben sollten.<br />Die Option sollten <b>nur</b> genutzt werden, wenn Probleme auftreten.</span>',
	'New_Pic_Check_Interval' => 'Die Zeit, in der ein Bild als \'neu\' markiert sein soll.<br /><span class="gensmall"><b>Format</b> : &lt;Nummer&gt;&lt;Typ&gt; Anstelle von Typ h, d, w or m (Stunde, Tag, Woche oder Monat)<br /> z.B.. 12H = 12 Stunden und 12D = 12 Tage und 12W = 12 Wochen und 12M = 12 Monate<br />Wenn kein Typ angegeben wurde, geht das System von <b>Tagen</b> aus</span>',
	'New_Pic_Check_Interval_Desc' => '<span class="gensmall">H = STUNDEN, D = TAGE, W = WOCHEN, M = MONATE</span>',
	'New_Pic_Check_Interval_LV' => 'Wird diese Option aktiviert, basiert die Markierung \'neu\' auf dem Zeitpunkt des letzten Besuchs.',
	'Enable_Show_All_Pics' => 'Aktiviert die Ansicht wie in den pers�nlichen Foto-Galerien (alle Kategorien oder nur die derzeitig gew�hlte). <br /> Wenn ausgeschaltet, wird nur die gew�hlte Kategorie angezeigt',
	'Enable_Index_Supercells' => 'Aktiviert \'super cells\' im Index. <br /><span class="gensmall">Dies aktiviert den mouse-over-Effekt in den Spalten, auch als supercell-Effekt bekannt.</span>',
	'Show_OTF_Link' => 'Zeige "Schnelle Foto-Galerie" Link im Foto-Galerie Index',
	'Show_AllPics_Link' => 'Zeige "Alle Bilder" Link im Foto-Galerie Index',
	'Show_PG_Link' => 'Zeige "Pers�nliche Foto-Galerien der Benutzer" Link im Foto-Galerie Index',

// 02 - Personal Galleries
	'Personal_Galleries' => 'Pers�nliche Foto-Galerien',
	'Album_personal_gallery_title' => 'Pers�nliche Foto-Galerie',
	'Album_personal_gallery_explain' => 'Auf dieser Seite kannst du ausw�hlen, welche Benutzergruppen eine pers�nliche Foto-Galerie erstellen d�rfen. Diese Einstellungen sind nur wirksam, wenn du f�r "Benutzer d�rfen eine Pers�nliche Galerie erstellen" oder "Wer darf pers�nliche Galerien betrachten (Voreinstellung)" in der Albumkonfiguration die Einstellung "privat" gew�hlt hast!',
	'Album_personal_successfully' => 'Die Einstellungen wurden erfolgreich aktualisiert',
	'Click_return_album_personal' => 'Klicke %shier%s, um zu den Einstellungen der pers�nlichen Foto-Galerien zur�ckzukehren.',
	'Allow_Album_Avatars' => 'Erlaube Benutzern ihre Bilder als Avatar zu verwenden',
	'Album_Personal_Settings' => 'Pers�nliche Foto-Galerien',
	'Show_Personal_Sub_Cats' => 'Zeige Pers�nliche Unterkategorien im Index',
	'Personal_Gallery_Approval' => 'Pers�nliche Bilder m�ssen vom Admin genehmigt werden',
	'Personal_Gallery_MOD' => 'Pers�nliche Foto-Galerien k�nnen vom Benutzer administriert werden',
	'Personal_Sub_Cat_Limit' => 'Maximale Anzahl an Unterkategorien (-1 = unbegrenzt)',
	'User_Can_Create_Personal_SubCats' => 'Benutzer k�nnen Unterkategorien in ihren pers�nlichen Foto-Galerien erstellen',
	'Click_return_personal_gallery_index' => 'Klicke %shier%s, um zu den pers�nlichen Foto-Galerien zur�ckzukehren.',
	'Show_Recent_In_Personal_Subcats' => 'Zeige die neusten Bilder in den pers�nlichen Unterkategorien',
	'Show_Recent_Instead_of_Personal_NoPics' => 'Zeige die neusten Bilder anstelle von \'Keine Bilder\' in den pers�nlichen Foto-Galerien',

// 03 - Categories
	'Categories' => 'Foto-Galerie Kategorien',
	'Album_Categories_Title' => 'Foto-Galerie Kategorien �bersicht',
	'Album_Categories_Explain' => 'Auf dieser Seite kannst du Kategorien erstellen, �ndern, l�schen, sortieren, etc.',
	'Category_Permissions' => 'Kategorie-Rechte',
	'Category_Title' => 'Kategorie Titel',
	'Category_Desc' => 'Kategorie Beschreibung',
	'View_level' => 'Betrachten-Level',
	'Upload_level' => 'Upload-Level',
	'Rate_level' => 'Bewertungs-Level',
	'Comment_level' => 'Kommentar-Level',
	'Edit_level' => 'Bearbeiten-Level',
	'Delete_level' => 'L�schen-Level',
	'New_category_created' => 'Die neue Kategorie wurde erfolgreich erstellt!',
	'Click_return_album_category' => 'Klicke %shier%s, um zur Foto-Galerie Kategorien-Verwaltung zur�ckzukehren.',
	'Category_updated' => 'Die Kategorie wurde erfolgreich aktualisiert',
	'Delete_Category' => 'Kategorie l�schen',
	'Delete_Category_Explain' => 'Das Formular gestattet das L�schen einer Kategorie und die Entscheidung, wohin die enthaltenen Bilder verschoben werden sollen.',
	'Delete_all_pics' => 'L�sche alle Bilder',
	'Category_deleted' => 'Die Kategorie wurde erfolgreich gel�scht!',
	'Category_changed_order' => 'Die Ordnung dieser Kategorie wurde erfolgreich ge�ndert (?)',
	'Personal_Root_Gallery' => 'Grundverzeichnis der pers�nlichen Foto-Galerie',
	'Parent_Category' => 'Oberverzeichnis (f�r diese Kategorie)',
	'Child_Category_Moved' => 'Die gew�hlte Kategorie hat Unterverzeichnisse. Die Unterkategorie wurde in die <B>%s</B> Kategorie verschoben.',
	'No_Self_Refering_Cat' => 'Eine �berkategorie kann nicht sich selbst zugeordnet werden',
	'Can_Not_Change_Main_Parent' => 'Im Grundverzeichnis kann nicht in eine �berkategorie gewechselt werden.',
	'Watermark' => 'Wasserzeichen',
	'Watermark_explain' => 'Lege die Wasserzeichen Datei fest, die in dieser Kategorie benutzt wird. W�hle den Pfad der Datei vom IcyPhoenix root aus (z.B.: <b>images/album/mark_fap.png</b>). Die Wasserzeichen-Datei wird nur angezeigt, wenn das Wasserzeichen aktiviert ist.',
	'Cat_Pics_Synchronize' => 'Sync Bild Z�hler',
	'Cat_Pics_Synchronized' => 'Alle Bild Z�hler wurden synchronisiert.',

// 04 - Permissions
	'Album_Auth_Title' => 'Kategorie-Berechtigungen',
	'Album_Auth_Explain' => 'Hier kannst du festlegen, welche Benutzergruppe(n) in welchen Kategorien Moderator(en) sein sollen, oder ob sie nur pers�nlichen Zugang zu bestimmten Kategorien haben sollen',
	'Select_a_Category' => 'W�hle eine Kategorie!',
	'Look_up_Category' => 'Kategorie ansehen',
	'Album_Auth_successfully' => 'Berechtigung wurde erfolgreich aktualisiert.',
	'Click_return_album_auth' => 'Klicke %shier%s, um zu den Kategorie-Berechtigungen zur�ckzukehren.',
	'Upload' => 'Upload',
	'Rate' => 'Bewerten',
	'Comment' => 'Kommentar',

// 05 - Thumbnails
	'Use_Old_Thumbnails' => 'Benutze alte Thumbnail Funktionen',
	'Use_Old_Thumbnails_Explain' => 'Wenn du dieses Feature aktivierst, verwendest du die alte Thumbnail Funktionen um kleine und mittlere Bilder zu generieren und um komplette Bilder schnell zu laden. Du solltest dies nur verwenden wenn du Probleme hast, wenn dies nicht aktiviert ist.',

// 06 - Sorting
	'Album_Category_Sorting' => 'Sortierung der Alben-Kategorien',
	'Album_Category_Sorting_Id' => 'ID',
	'Album_Category_Sorting_Name' => 'Name',
	'Album_Category_Sorting_Order' => 'Sortierreihenfolge (standard)',
	'Album_Category_Sorting_Direction' => 'Richtung (nur f�r ID und Name)',
	'Album_Category_Sorting_Asc' => 'Aufsteigend',
	'Album_Category_Sorting_Desc' => 'Absteigend',

// 07 - Clear Cache
	'Clear_Cache_Tab' => 'Cache',
	'Clear_Cache' => 'L�sche Cache',
	'Album_clear_cache_confirm' => 'Wenn du den "Thumbnail Cache" benutzt, musst du diesen leeren, nachdem du die Thumbnail-Einstellungen in der Album-Konfiguration ge�ndert hast, damit sie neu erstellt werden.<br /><br /> M�chtest du ihn jetzt leeren?',
	'Thumbnail_cache_cleared_successfully' => '<br />Dein "Thumbnail Cache" wurde erfolgreich geleert<br />&nbsp;',

// ACP - Javascript text
	'acp_ask_save_changes' => 'M�chtest du die �nderungen speichern ?\n(OK = Ja, Cancel = Nein)',
	'acp_nothing_to_save' => 'Nichts zu speichern!',
	'acp_settings_changed_ask_save' => 'Es wurden �nderungen vorgenommen. Sollen diese gespeichert werden?\n(OK = Ja, Cancel = Nein)',

// GD Info
	'GD_Info' => 'GD Info',
	'GD_Title' => 'GD Info',
	'GD_Description' => 'Hier k�nnen Informationen zu der vorhandenen Grafikbibliothek abgelesen werden.',
	'GD_Version' => 'Version:',
	'GD_Freetype_Support' => 'Freetype Fonts Unterst�tzung:',
	'GD_Freetype_Linkage' => 'Freetype Link Typ:',
	'GD_T1lib_Support' => 'T1lib Unterst�tzung:',
	'GD_Gif_Read_Support' => 'Gif Read Unterst�tzung:',
	'GD_Gif_Create_Support' => 'Gif Create Unterst�tzung:',
	'GD_Jpg_Support' => 'Jpg/Jpeg Unterst�tzung:',
	'GD_Png_Support' => 'Png Unterst�tzung:',
	'GD_Wbmp_Support' => 'WBMP Unterst�tzung:',
	'GD_XBM_Support' => 'XBM Unterst�tzung:',
	'GD_Jis_Mapped_Support' => 'Japanese Font Unterst�tzung:',
	'GD_True' => 'Ja',
	'GD_False' => 'Nein',

// Multiple Uploads Admin configuration
	'Upload_Settings' => 'Hochladen',
	'Max_Files_To_Upload' => 'Maximum an Bildern, die gleichzeitig hochgeladen werden kann',
	'Album_upload_settings' => 'Album Upload Einstellungen',
	'Max_pregenerated_fields' => 'Maximum vorgenerierter Upload-Felder',
	'Dynamic_field_generation' => 'Aktiviere dynamisches Hochladen von Feldern',
	'Pre_generate_fields' => 'Generiere Upload-Felder vor',
	'Propercase_pic_title' => 'Setze alle bis auf erste Zeichen auf Kleinschreibung <br />(<i>\'Dies Ist Ein Titel\'</i> wird beispielsweise zu <i>\'Dies ist ein titel\'</i>).',
	'Pic_Resampling' => 'Wird diese Option aktiviert, wird jedes Bild automatisch w�hrend des Uploads angepasst, welches die Vorgaben im ACP �berschreitet.',
	'Max_file_size_resampling' => 'Maximale Gr��e, bevor ein Bild neu berechnet wird (bytes).',

// CLowN
	'SP_Album_config' => 'Clown SP',
	'SP_Album_config_explain' => 'Hier k�nnen einige Optionen f�r das Album Service Pack ver�ndert werden',
	'SP_Album_sp_general' => 'Allgemeine Konfiguration',
	'SP_Album_sp_watermark' => 'Wasserzeichen Konfiguration (Logo im Bild)',
	'SP_Album_sp_hotornot' => 'Hot or Not Konfiguration',
	'SP_Rate_type' => 'W�hle Bild-Bewertungsanzeige',
	'SP_Rate_type_0' => 'Nur Bilder',
	'SP_Rate_type_1' => 'Nur Ziffern',
	'SP_Rate_type_2' => 'Ziffern und Bilder',
	'SP_Display_latest' => 'Zeige Block mit den neusten Bildern',
	'SP_Display_highest' => 'Zeige Block mit den h�chstbewerteten Bildern',
	'SP_Display_most_viewed' => 'Zeige Block mit den am h�ufigsten betrachteten Bildern',
	'SP_Display_random' => 'Zeige Block mit zuf�lligen Bildern',
	'SP_Pic_row' => 'Anzahl der Reihen pro Thumbnail Seite',
	'SP_Pic_col' => 'Anzahl der Spalten pro Thumbnail Seite',
	'SP_Midthumb_use' => 'Benutze mittleres Thumbnail',
	'SP_Midthumb_cache' => 'Aktiviere Caching des mittleren Thumbnails',
	'SP_Midthumb_high' => 'H�he des mittleren Thumbnails (Pixel)',
	'SP_Midthumb_width' => 'Breite des mittleren Thumbnails (Pixel)',
	'SP_Watermark' => 'Benutze Wasserzeichen',
	'SP_Watermark_users' => 'Zeige Wasserzeichen allen Nutzern, \'Nein\' zeigt Wasserzeichen nur bei G�sten',
	'SP_Watermark_placent' => 'Wasserzeichen Position auf dem Bild',
	'SP_Hon_already_rated' => 'Unendliche Wertungen f�r Hot or Not-Seite',
	'SP_Hon_sep_rating' => 'Speichere Hot or Not-Wertungen in einer eigenen Tabelle',
	'SP_Hon_where' => 'Zeige Bilder in Hot or Not aus welchen Kategorien? (Um Bilder aus allen Kategorien zu zeigen leer lassen, bei mehr als einer Kategorie die einzelnen Kategorien durch Kommata trennen)',
	'SP_Hon_users' => 'D�rfen G�ste werten?',

	'SP_Disabled' => 'Deaktiviert',
	'SP_Enabled' => 'Aktiviert',
	'SP_Yes' => 'Ja',
	'SP_No' => 'Nein',
	'SP_Always' => 'Immer',
	'SP_Submit' => '�bertragen',
	'SP_Reset' => 'Zur�cksetzen',

// Nuffload
	'Nuffload_Config' => 'Nuffload Konfiguration',
	'Enable_Nuffload' => 'Aktiviere Nuffload',
	'Enable_Nuffload_Explain' => 'Wird diese Option aktiviert, werden die Bilder mittels Nuffload anstelle des normalen Uploaders hochgeladen.',
	'progress_bar_configuration' => 'Nuffload - Konfiguration der Fortschrittsanzeige',
	'perl_uploader' => 'Aktiviere Perl uploader',
	'path_to_bin' => 'Pfad vom IcyPhoenix Grundverzeichnis zum cgi-bin (z.B. <b>./cgi-bin/</b>, wenn IcyPhoenix in einem Unterverzeichnis liegt)',
	'show_progress_bar' => 'Zeige Fortschrittsanzeige beim Upload',
	'close_progress_bar' => 'Schlie�e die Fortschrittsanzeige nach dem Upload',
	'activity_timeout' => 'Aktivit�ts-Timeout (Sek.)',
	'simple_format' => 'Benutze einfache Formatierung der Fortschrittsanzeige',
	'multiple_uploads_configuration' => 'Nuffload - Konfiguration des Multi-Uploads',
	'multiple_uploads' => 'Aktiviere Multi-Upload',
	'max_uploads' => 'Maximale Anzahl an Upload-Feldern',
	'zip_uploads' => 'Aktiviere ZIP-Upload',
	'image_resizing_configuration' => 'Nuffload - Konfiguration der Bildgr��enanpassung',
	'image_resizing' => 'Aktiviere Gr��enanpassung',
	'image_width' => 'Bildbreite',
	'image_height' => 'Bildh�he',
	'image_quality' => 'Bildqualit�t',
	)
);
?>