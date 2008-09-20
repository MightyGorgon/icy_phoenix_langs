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
* TheSteffen, KugeLSichA, Tom
*
*/

// 01 - Configuration
$lang['Album_config'] = 'Album Konfiguration';
$lang['Album_config_explain'] = 'Hier kannst Du die generellen Einstellungen des Albums �ndern.';
$lang['Album_config_updated'] = 'Album Konfiguration wurde erfolgreich aktualisiert';
$lang['Click_return_album_config'] = '%sKlicke hier%s, um zur Album Konfiguration zur�ckzukehren.';
$lang['Max_pics'] = 'Maximale Anzahl Bilder pro Kategorie (-1 = unbegrenzt)';
$lang['User_pics_limit'] = 'Maximale Anzahl Bilder pro Kategorie pro User(-1 = unbegrenzt)';
$lang['Moderator_pics_limit'] = 'Maximale Anzahl Bilder pro Kategorie pro Moderator(-1 = unbegrenzt)';
$lang['Pics_Approval'] = 'Bilder Genehmigung';
$lang['Rows_per_page'] = 'Anzahl der Reihen pro Thumbnail Seite';
$lang['Cols_per_page'] = 'Anzahl der Spalten pro Thumbnail Seite';
$lang['Thumbnail_quality'] = 'Thumbnail Qualit�t (1-100)';
$lang['Thumbnail_cache'] = 'Thumbnail Cache';
$lang['Manual_thumbnail'] = 'Manuelle Thumbnails';
$lang['GD_version'] = 'Optimiere f�r die GD Version';
$lang['Pic_Desc_Max_Length'] = 'Maximale L�nge f�r Bildbeschreibung/Kommentar (bytes)';
$lang['Hotlink_prevent'] = 'Hotlinking verhindern';
$lang['Hotlink_allowed'] = 'Erlaubte Domains f�r Hotlinking (getrennt durch Kommata)';
$lang['Personal_gallery'] = 'User d�rfen eine Pers�nliche Galerie erstellen';
$lang['Personal_gallery_limit'] = 'Maximale Anzahl von Bildern f�r jede pers�nliche Galerie (-1 = unbegrenzt)';
$lang['Personal_gallery_view'] = 'Wer darf pers�nliche Galerien betrachten (Voreinstellung)';
$lang['Rate_system'] = 'Erlaube Bildbewertung';
$lang['Rate_Scale'] = 'Bewertungs-Skala';
$lang['Comment_system'] = 'Aktiviere Kommentarsystem';
$lang['Thumbnail_Settings'] = 'Thumbnail Einstellungen';
$lang['Quick_Thumbnails'] = 'Schnelle Thumbnails';
$lang['Quick_Thumbnails_explain'] = 'Aktiviere die Option, um das System nach bereits erstellten Thumbnails suchen und vom Browser anzeigen zu lassen. Dies beschleunigt die Thumbnails Erstellung in den Kategorien.';
$lang['Extra_Settings'] = 'Extra Einstellungen';
$lang['Default_Sort_Method'] = 'Voreingestellte Sortiermethode';
$lang['Default_Sort_Order'] = 'Voreingestellte Sortierreihenfolge';
$lang['Fullpic_Popup'] = 'Zeige gew�hltes Bild in Popup-Fenster';
$lang['Email_Notification'] = 'Aktiviere E-Mail-Benachrichtung f�r neue Bilder (nur Admins)';
$lang['Show_Download'] = 'Zeige DOWNLOAD-Knopf (der das Herunterladen der Bilder im ZIP-Format erm�glicht) nur f�r jene, die UPLOAD-Rechte in dem Album haben (wird IMMER gew�hlt, ist der Knopf auch f�r Benutzer ohne UPLOAD-Rechte sichtbar)';
$lang['Show_Slideshow'] = 'Aktiviere Dia-Show-Feature';
$lang['Show_Slideshow_Script'] = '�bergangseffekte f�r Diashow aktivieren';
$lang['Show_Pic_Size'] = 'Zeige die Bildgr��e im Thumbnail';
$lang['Show_IMG_No_GD'] = 'Zeige GIF-Thumbnails ohne GD (die Bilder werden verkleinert dargestellt, aber komplett geladen)';
$lang['Show_GIF_MidThumb'] = 'Zeige vollst�ndiges GIF-Bild, wenn Mid Thumb aktiviert ist.';
$lang['Show_Pics_Nav'] = 'Zeige Bild-Navigations-Box in Show Page';
$lang['Invert_Nav_Arrows'] = 'Die Pfeilrichtung in der Showpage umkehren (rechter Pfeil = neuer)';
$lang['Show_Inline_Copyright'] = 'Zeige Copyright-Info in einer Zeile';
$lang['Enable_Nuffimage'] = 'Aktiviere die Nuffmonn-Bild-Spezialeffektseite';
$lang['Enable_Sepia_BW'] = 'Aktiviere Sepia und B&W auf der Spezialeffektseite (deaktiviere diese Funktion, um die CPU-Belastung zu verringern)';
$lang['Show_EXIF_Info'] = 'EXIF Information des Bildes anzeigen';
$lang['Set_Memory'] = 'Setze ein Limit �ber Php (MB)';
$lang['Set_Memory_Explain'] = 'Dieses Feature kann verwendet werden um die Speicherbegrenzung in PHP zu erh�hen (Diese Einstellung mu� durch Deinen Anbieter erlaubt werden): falls Deine Bilder nicht richtig geladen werden, kannst Du versuchen den Speicher zu erh�hen. Der Maximalwert wird hier bei 16 MB festgelegt.';
$lang['LB_Preview'] = 'Aktiviere LightBox Vorschau';
$lang['LB_Preview_Explain'] = 'Dieses Feature zeigt eine LightBox mit einer Bildervorschau, wenn du mit der Maus �ber das Thumbnail f�hrst.';
$lang['Album_config_notice'] = 'Falls Du die derzeitigen Album-Einstellungen wechselst und einen anderen Tab w�hlst, wirst Du zum speichern der �nderungen aufgefordert.<br />Das System wird �nderungen <b>nicht automatisch speichern</b>.';
$lang['Save_sucessfully_confimation'] = '%s wurde erfolgreich gespeichert';
$lang['Show_Recent_In_Subcats'] = 'Zeige die neusten Bilder in den Unterkategorien';
$lang['Show_Recent_Instead_of_NoPics'] = 'Zeige die neusten Bilder anstelle der \'Keine Bilder\'-Nachricht';
$lang['Show_Last_Comments'] = 'Zeige letzte Kommentare im Album Index und Kategorien';
$lang['Album_Index_Settings'] = 'Album Index';
$lang['Album_Index_Page_Settings'] = 'Album Index Seiten Einstellungen';
$lang['Show_Index_Subcats'] = 'Zeige Unterkategorien im Index';
$lang['Show_Index_Thumb'] = 'Zeige Kategorie-Thumbnails im Index';
$lang['Show_Index_Pics'] = 'Zeige die Anzahl der Bilder der jeweiligen Unterkategorien im Index';
$lang['Show_Index_Comments'] = 'Zeige die Anzahl der Kommentare der jeweiligen Unterkategorie im Index';
$lang['Show_Index_Total_Pics'] = 'Zeige die Gesamtanzahl der Bilder f�r die Kategorie inkl. aller Unterkategorien im Index';
$lang['Show_Index_Total_Comments'] = 'Zeige die Gesamtanzahl der Kommentare f�r die Kategorie inkl. aller Unterkategorien im Index';
$lang['Show_Index_Last_Comment'] = 'Zeige den letzten Kommentar f�r die Kategorie inkl. aller Unterkategorien im Index';
$lang['Show_Index_Last_Pic'] = 'Zeige die letzten Bildinformationen f�r die Kategorie inkl. aller Unterkategorien im Index';
$lang['Line_Break_Subcats'] = 'Zeige jede Unterkategorie in einer neuen Zeile';
$lang['Show_Personal_Gallery_Link'] = 'Zeige Pers�nliche Galerien und den dazugeh�rigen Link in den Unterkategorien';
$lang['Album_Personal_Auth_Explain'] = 'Hier kannst Du w�hlen, welche Benutzergruppe(n) Moderator f�r <b>alle</b> pers�nlichen Albenkategorien sind oder einfach nur pers�nlichen Zugriff zu ihnen hat.';
$lang['Album_debug_mode'] = 'Aktiviere den \'hierarchy debug mode\'.<br /><span class="gensmall">Dies wird eine Menge zus�tzliche Ausgaben und einige Warnungen mit sich bringen, die alle ihre Richtigkeit haben sollten.<br />Die Option sollten <b>nur</b> genutzt werden, wenn Probleme auftreten.</span>';
$lang['New_Pic_Check_Interval'] = 'Die Zeit, in der ein Bild als \'neu\' markiert sein soll.<br /><span class="gensmall"><b>Format</b> : &lt;Nummer&gt;&lt;Typ&gt; Anstelle von Typ h, d, w or m (Stunde, Tag, Woche oder Monat)<br /> z.B.. 12H = 12 Stunden und 12D = 12 Tage und 12W = 12 Wochen und 12M = 12 Monate<br />Wenn kein Typ angegeben wurde, geht das System von <b>Tagen</b> aus</span>';
$lang['New_Pic_Check_Interval_Desc'] = '<span class="gensmall">H = STUNDEN, D = TAGE, W = WOCHEN, M = MONATE</span>';
$lang['New_Pic_Check_Interval_LV'] = 'Wird diese Option aktiviert, basiert die Markierung \'neu\' auf dem Zeitpunkt des letzten Besuchs.';
$lang['Enable_Show_All_Pics'] = 'Aktiviert die Ansicht wie in den pers�nlichen Galerien (alle Kategorien oder nur die derzeitig gew�hlte). <br /> Wenn ausgeschaltet, wird nur die gew�hlte Kategorie angezeigt';
$lang['Enable_Index_Supercells'] = 'Aktiviert \'super cells\' im Index. <br /><span class="gensmall">Dies aktiviert den mouse-over-Effekt in den Spalten, auch als supercell-Effekt bekannt.</span>';
$lang['Show_OTF_Link'] = 'Zeige "Schnelles Foto Album" Link im Album Index';
$lang['Show_AllPics_Link'] = 'Zeige "Alle Bilder" Link im Album Index';
$lang['Show_PG_Link'] = 'Zeige "Pers�nliche Galerien der Benutzer" link on Album Index';

// 02 - Personal Galleries
$lang['Personal_Galleries'] = 'Pers�nliche Galerien';
$lang['Album_personal_gallery_title'] = 'Pers�nliche Galerie';
$lang['Album_personal_gallery_explain'] = 'Auf dieser Seite kannst Du ausw�hlen, welche Usergruppen eine pers�nliche Galerie erstellen d�rfen. Diese Einstellungen sind nur wirksam, wenn Du f�r "User d�rfen eine Pers�nliche Galerie erstellen" oder "Wer darf pers�nliche Galerien betrachten (Voreinstellung)" in der Albumkonfiguration die Einstellung "privat" gew�hlt hast!';
$lang['Album_personal_successfully'] = 'Die Einstellungen wurden erfolgreich aktualisiert';
$lang['Click_return_album_personal'] = 'Klicke %shier%s, um zu den Einstellungen der pers�nlichen Galerien zur�ckzukehren';
$lang['Allow_Album_Avatars'] = 'Erlaube Benutzern ihre Bilder als Avatar zu verwenden';
$lang['Album_Personal_Settings'] = 'Pers�nliche Galerien';
$lang['Show_Personal_Sub_Cats'] = 'Zeige Pers�nliche Unterkategorien im Index';
$lang['Personal_Gallery_Approval'] = 'Pers�nliche Bilder m�ssen vom Admin genehmigt werden';
$lang['Personal_Gallery_MOD'] = 'Pers�nliche Galerien k�nnen vom Benutzer administriert werden';
$lang['Personal_Sub_Cat_Limit'] = 'Maximale Anzahl an Unterkategorien (-1 = unbegrenzt)';
$lang['User_Can_Create_Personal_SubCats'] = 'Benutzer k�nnen Unterkategorien in ihren pers�nlichen Galerien erstellen';
$lang['Click_return_personal_gallery_index'] = 'Klicke %shier%s, um zu den pers�nlichen Galerien zur�ckzukehren';
$lang['Show_Recent_In_Personal_Subcats'] = 'Zeige die neusten Bilder in den pers�nlichen Unterkategorien';
$lang['Show_Recent_Instead_of_Personal_NoPics'] = 'Zeige die neusten Bilder anstelle von \'Keine Bilder\' in den pers�nlichen Galerien';

// 03 - Categories
$lang['Categories'] = 'Album Kategorien';
$lang['Album_Categories_Title'] = 'Album Kategorien Kontrolle';
$lang['Album_Categories_Explain'] = 'Auf dieser Seite kannst Du Kategorien erstellen, �ndern, l�schen, sortieren, etc.';
$lang['Category_Permissions'] = 'Kategorie-Rechte';
$lang['Category_Title'] = 'Kategorie Titel';
$lang['Category_Desc'] = 'Kategorie Beschreibung';
$lang['View_level'] = 'Betrachten-Level';
$lang['Upload_level'] = 'Upload-Level';
$lang['Rate_level'] = 'Bewertungs-Level';
$lang['Comment_level'] = 'Kommentar-Level';
$lang['Edit_level'] = 'Bearbeiten-Level';
$lang['Delete_level'] = 'L�schen-Level';
$lang['New_category_created'] = 'Die neue Kategorie wurde erfolgreich erstellt!';
$lang['Click_return_album_category'] = 'Klick %shier%s um zur Album-Kategorien-Verwaltung zur�ckzukehren';
$lang['Category_updated'] = 'Die Kategorie wurde erfolgreich aktualisiert';
$lang['Delete_Category'] = 'Kategorie l�schen';
$lang['Delete_Category_Explain'] = 'Das Formular gestattet das L�schen einer Kategorie und die Entscheidung, wohin die enthaltenen Bilder verschoben werden sollen.';
$lang['Delete_all_pics'] = 'L�sche alle Bilder';
$lang['Category_deleted'] = 'Die Kategorie wurde erfolgreich gel�scht!';
$lang['Category_changed_order'] = 'Die Ordnung dieser Kategorie wurde erfolgreich ge�ndert (?)';
$lang['Personal_Root_Gallery'] = 'Grundverzeichnis der pers�nlichen Galerie';
$lang['Parent_Category'] = 'Oberverzeichnis (f�r diese Kategorie)';
$lang['Child_Category_Moved'] = 'Die gew�hlte Kategorie hat Unterverzeichnisse. Die Unterkategorie wurde in die <B>%s</B> Kategorie verschoben.';
$lang['No_Self_Refering_Cat'] = 'Eine �berkategorie kann nicht sich selbst zugeordnet werden';
$lang['Can_Not_Change_Main_Parent'] = 'Im Grundverzeichnis kann nicht in eine �berkategorie gewechselt werden.';
$lang['Watermark'] = 'Wasserzeichen';
$lang['Watermark_explain'] = 'Lege die Wasserzeichen Datei fest, die in dieser Kategorie benutzt wird. W�hle den Pfad der Datei vom phpBB root aus (z.B.: <b>album_mod/mark_fap.png</b>). Die Wasserzeichen-Datei wird nur angezeigt, wenn das Wasserzeichen aktiviert ist.';
$lang['Cat_Pics_Synchronize'] = 'Sync Bild Z�hler';
$lang['Cat_Pics_Synchronized'] = 'Alle Bild Z�hler wurden synchronisiert.';

// 04 - Permissions
$lang['Album_Auth_Title'] = 'Album-Berechtigungen';
$lang['Album_Auth_Explain'] = 'Hier kannst Du festlegen, welche Usergruppe(n) in welchen Kategorien Moderator(en) sein sollen, oder ob sie nur pers�nlichen Zugang zu bestimmten Kategorien haben sollen';
$lang['Select_a_Category'] = 'W�hle eine Kategorie!';
$lang['Look_up_Category'] = 'Kategorie ansehen';
$lang['Album_Auth_successfully'] = 'Auth wurde erfolgreich aktualisiert';
$lang['Click_return_album_auth'] = 'Klick %shier%s um zu Album-Berechtigungen zur�ckzukehren';
$lang['Upload'] = 'Upload';
$lang['Rate'] = 'Bewerten';
$lang['Comment'] = 'Kommentar';

// 05 - Thumbnails
$lang['Use_Old_Thumbnails'] = 'Benutze alte Thumbnail Funktionen';
$lang['Use_Old_Thumbnails_Explain'] = 'Wenn du dieses Feature aktivierst, verwendest du die alte Thumbnail Funktionen um kleine und mittlere Bilder zu generieren und um komplette Bilder schnell zu laden. Du solltest dies nur verwenden wenn du Probleme hast, wenn dies nicht aktiviert ist.';

// 06 - Sorting
$lang['Album_Category_Sorting'] = 'Sortierung der Alben-Kategorien';
$lang['Album_Category_Sorting_Id'] = 'ID';
$lang['Album_Category_Sorting_Name'] = 'Name';
$lang['Album_Category_Sorting_Order'] = 'Sortierreihenfolge (standard)';
$lang['Album_Category_Sorting_Direction'] = 'Richtung (nur f�r ID und Name)';
$lang['Album_Category_Sorting_Asc'] = 'Aufsteigend';
$lang['Album_Category_Sorting_Desc'] = 'Absteigend';

// 07 - Clear Cache
$lang['Clear_Cache_Tab'] = 'Cache';
$lang['Clear_Cache'] = 'L�sche Cache';
$lang['Album_clear_cache_confirm'] = 'Wenn Du den "Thumbnail Cache" benutzt, musst Du diesen leeren, nachdem Du die Thumbnail-Einstellungen in der Album-Konfiguration ge�ndert hast, damit sie neu erstellt werden.<br /><br /> M�chtest Du ihn jetzt leeren?';
$lang['Thumbnail_cache_cleared_successfully'] = '<br />Dein "Thumbnail Cache" wurde erfolgreich geleert<br />&nbsp;';

// ACP - Javascript text
$lang['acp_ask_save_changes'] = 'M�chtest Du die �nderungen speichern ?\n(OK = Ja, Cancel = Nein)';
$lang['acp_nothing_to_save'] = 'Nichts zu speichern!';
$lang['acp_settings_changed_ask_save'] = 'Es wurden �nderungen vorgenommen. Sollen diese gespeichert werden?\n(OK = Ja, Cancel = Nein)';

// GD Info
$lang['GD_Info'] = 'GD Info';
$lang['GD_Title'] = 'GD Info';
$lang['GD_Description'] = 'Hier k�nnen Informationen zu der vorhandenen Grafikbibliothek abgelesen werden.';
$lang['GD_Version'] = 'Version:';
$lang['GD_Freetype_Support'] = 'Freetype Fonts Unterst�tzung:';
$lang['GD_Freetype_Linkage'] = 'Freetype Link Typ:';
$lang['GD_T1lib_Support'] = 'T1lib Unterst�tzung:';
$lang['GD_Gif_Read_Support'] = 'Gif Read Unterst�tzung:';
$lang['GD_Gif_Create_Support'] = 'Gif Create Unterst�tzung:';
$lang['GD_Jpg_Support'] = 'Jpg/Jpeg Unterst�tzung:';
$lang['GD_Png_Support'] = 'Png Unterst�tzung:';
$lang['GD_Wbmp_Support'] = 'WBMP Unterst�tzung:';
$lang['GD_XBM_Support'] = 'XBM Unterst�tzung:';
$lang['GD_Jis_Mapped_Support'] = 'Japanese Font Unterst�tzung:';
$lang['GD_True'] = 'Ja';
$lang['GD_False'] = 'Nein';

// Multiple Uploads Admin configuration
$lang['Upload_Settings'] = 'Hochladen';
$lang['Max_Files_To_Upload'] = 'Maximum an Bildern, die gleichzeitig hochgeladen werden kann';
$lang['Album_upload_settings'] = 'Album Upload Einstellungen';
$lang['Max_pregenerated_fields'] = 'Maximum vorgenerierter Upload-Felder';
$lang['Dynamic_field_generation'] = 'Aktiviere dynamisches Hochladen von Feldern';
$lang['Pre_generate_fields'] = 'Generiere Upload-Felder vor';
$lang['Propercase_pic_title'] = 'Setze alle bis auf erste Zeichen auf Kleinschreibung <br />(<i>\'Dies Ist Ein Titel\'</i> wird beispielsweise zu <i>\'Dies ist ein titel\'</i>).';
$lang['Pic_Resampling'] = 'Wird diese Option aktiviert, wird jedes Bild automatisch w�hrend des Uploads angepasst, welches die Vorgaben im ACP �berschreitet.';
$lang['Max_file_size_resampling'] = 'Maximale Gr��e, bevor ein Bild neu berechnet wird (bytes).';

// CLowN
$lang['SP_Album_config'] = 'Clown SP';
$lang['SP_Album_config_explain'] = 'Hier k�nnen einige Optionen f�r das Album Service Pack ver�ndert werden';
$lang['SP_Album_sp_general'] = 'Allgemeine Konfiguration';
$lang['SP_Album_sp_watermark'] = 'Wasserzeichen Konfiguration (Logo im Bild)';
$lang['SP_Album_sp_hotornot'] = 'Hot or Not Konfiguration';
$lang['SP_Rate_type'] = 'W�hle Bild-Wertungsanzeige';
$lang['SP_Rate_type_0'] = 'Nur Bilder';
$lang['SP_Rate_type_1'] = 'Nur Ziffern';
$lang['SP_Rate_type_2'] = 'Ziffern und Bilder';
$lang['SP_Display_latest'] = 'Zeige Block mit den neusten Bildern';
$lang['SP_Display_highest'] = 'Zeige Block mit den h�chstbewerteten Bildern';
$lang['SP_Display_most_viewed'] = 'Zeige Block mit den am h�ufigsten betrachteten Bildern';
$lang['SP_Display_random'] = 'Zeige Block mit zuf�lligen Bildern';
$lang['SP_Pic_row'] = 'Anzahl der Reihen pro Thumbnail Seite';
$lang['SP_Pic_col'] = 'Anzahl der Spalten pro Thumbnail Seite';
$lang['SP_Midthumb_use'] = 'Benutze mittleres Thumbnail';
$lang['SP_Midthumb_cache'] = 'Aktiviere Caching des mittleren Thumbnails';
$lang['SP_Midthumb_high'] = 'H�he des mittleren Thumbnails (Pixel)';
$lang['SP_Midthumb_width'] = 'Breite des mittleren Thumbnails (Pixel)';
$lang['SP_Watermark'] = 'Benutze Wasserzeichen';
$lang['SP_Watermark_users'] = 'Zeige Wasserzeichen allen Nutzern, \'Nein\' zeigt Wasserzeichen nur bei G�sten';
$lang['SP_Watermark_placent'] = 'Wasserzeichen Position auf dem Bild';
$lang['SP_Hon_already_rated'] = 'Unendliche Wertungen f�r Hot or Not-Seite';
$lang['SP_Hon_sep_rating'] = 'Speichere Hot or Not-Wertungen in einer eigenen Tabelle';
$lang['SP_Hon_where'] = 'Zeige Bilder in Hot or Not aus welchen Kategorien? (Um Bilder aus allen Kategorien zu zeigen leer lassen, bei mehr als einer Kategorie die einzelnen Kategorien durch Kommata trennen)';
$lang['SP_Hon_users'] = 'D�rfen G�ste werten?';

$lang['SP_Disabled'] = 'Deaktiviert';
$lang['SP_Enabled'] = 'Aktiviert';
$lang['SP_Yes'] = 'Ja';
$lang['SP_No'] = 'Nein';
$lang['SP_Always'] = 'Immer';
$lang['SP_Submit'] = '�bertragen';
$lang['SP_Reset'] = 'Zur�cksetzen';

// Nuffload
$lang['Nuffload_Config'] = 'Nuffload Konfiguration';
$lang['Enable_Nuffload'] = 'Aktiviere Nuffload';
$lang['Enable_Nuffload_Explain'] = 'Wird diese Option aktiviert, werden die Bilder mittels Nuffload anstelle des normalen Uploaders hochgeladen.';
$lang['progress_bar_configuration'] = 'Nuffload - Konfiguration der Fortschrittsanzeige';
$lang['perl_uploader'] = 'Aktiviere Perl uploader';
$lang['path_to_bin'] = 'Pfad vom phpBB Grundverzeichnis zum cgi-bin (z.B. <b>./cgi-bin/</b>, wenn phpBB in einem Unterverzeichnis liegt)';
$lang['show_progress_bar'] = 'Zeige Fortschrittsanzeige beim Upload';
$lang['close_progress_bar'] = 'Schlie�e die Fortschrittsanzeige nach dem Upload';
$lang['activity_timeout'] = 'Aktivit�ts-Timeout (Sek.)';
$lang['simple_format'] = 'Benutze einfache Formatierung der Fortschrittsanzeige';
$lang['multiple_uploads_configuration'] = 'Nuffload - Konfiguration des Multi-Uploads';
$lang['multiple_uploads'] = 'Aktiviere Multi-Upload';
$lang['max_uploads'] = 'Maximale Anzahl an Upload-Feldern';
$lang['zip_uploads'] = 'Aktiviere ZIP-Upload';
$lang['image_resizing_configuration'] = 'Nuffload - Konfiguration der Bildgr��enanpassung';
$lang['image_resizing'] = 'Aktiviere Gr��enanpassung';
$lang['image_width'] = 'Bildbreite';
$lang['image_height'] = 'Bildh�he';
$lang['image_quality'] = 'Bildqualit�t';

?>