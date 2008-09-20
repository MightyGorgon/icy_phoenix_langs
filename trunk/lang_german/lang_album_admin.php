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
$lang['Album_config_explain'] = 'Hier kannst Du die generellen Einstellungen des Albums ändern.';
$lang['Album_config_updated'] = 'Album Konfiguration wurde erfolgreich aktualisiert';
$lang['Click_return_album_config'] = '%sKlicke hier%s, um zur Album Konfiguration zurückzukehren.';
$lang['Max_pics'] = 'Maximale Anzahl Bilder pro Kategorie (-1 = unbegrenzt)';
$lang['User_pics_limit'] = 'Maximale Anzahl Bilder pro Kategorie pro User(-1 = unbegrenzt)';
$lang['Moderator_pics_limit'] = 'Maximale Anzahl Bilder pro Kategorie pro Moderator(-1 = unbegrenzt)';
$lang['Pics_Approval'] = 'Bilder Genehmigung';
$lang['Rows_per_page'] = 'Anzahl der Reihen pro Thumbnail Seite';
$lang['Cols_per_page'] = 'Anzahl der Spalten pro Thumbnail Seite';
$lang['Thumbnail_quality'] = 'Thumbnail Qualität (1-100)';
$lang['Thumbnail_cache'] = 'Thumbnail Cache';
$lang['Manual_thumbnail'] = 'Manuelle Thumbnails';
$lang['GD_version'] = 'Optimiere für die GD Version';
$lang['Pic_Desc_Max_Length'] = 'Maximale Länge für Bildbeschreibung/Kommentar (bytes)';
$lang['Hotlink_prevent'] = 'Hotlinking verhindern';
$lang['Hotlink_allowed'] = 'Erlaubte Domains für Hotlinking (getrennt durch Kommata)';
$lang['Personal_gallery'] = 'User dürfen eine Persönliche Galerie erstellen';
$lang['Personal_gallery_limit'] = 'Maximale Anzahl von Bildern für jede persönliche Galerie (-1 = unbegrenzt)';
$lang['Personal_gallery_view'] = 'Wer darf persönliche Galerien betrachten (Voreinstellung)';
$lang['Rate_system'] = 'Erlaube Bildbewertung';
$lang['Rate_Scale'] = 'Bewertungs-Skala';
$lang['Comment_system'] = 'Aktiviere Kommentarsystem';
$lang['Thumbnail_Settings'] = 'Thumbnail Einstellungen';
$lang['Quick_Thumbnails'] = 'Schnelle Thumbnails';
$lang['Quick_Thumbnails_explain'] = 'Aktiviere die Option, um das System nach bereits erstellten Thumbnails suchen und vom Browser anzeigen zu lassen. Dies beschleunigt die Thumbnails Erstellung in den Kategorien.';
$lang['Extra_Settings'] = 'Extra Einstellungen';
$lang['Default_Sort_Method'] = 'Voreingestellte Sortiermethode';
$lang['Default_Sort_Order'] = 'Voreingestellte Sortierreihenfolge';
$lang['Fullpic_Popup'] = 'Zeige gewähltes Bild in Popup-Fenster';
$lang['Email_Notification'] = 'Aktiviere E-Mail-Benachrichtung für neue Bilder (nur Admins)';
$lang['Show_Download'] = 'Zeige DOWNLOAD-Knopf (der das Herunterladen der Bilder im ZIP-Format ermöglicht) nur für jene, die UPLOAD-Rechte in dem Album haben (wird IMMER gewählt, ist der Knopf auch für Benutzer ohne UPLOAD-Rechte sichtbar)';
$lang['Show_Slideshow'] = 'Aktiviere Dia-Show-Feature';
$lang['Show_Slideshow_Script'] = 'Übergangseffekte für Diashow aktivieren';
$lang['Show_Pic_Size'] = 'Zeige die Bildgröße im Thumbnail';
$lang['Show_IMG_No_GD'] = 'Zeige GIF-Thumbnails ohne GD (die Bilder werden verkleinert dargestellt, aber komplett geladen)';
$lang['Show_GIF_MidThumb'] = 'Zeige vollständiges GIF-Bild, wenn Mid Thumb aktiviert ist.';
$lang['Show_Pics_Nav'] = 'Zeige Bild-Navigations-Box in Show Page';
$lang['Invert_Nav_Arrows'] = 'Die Pfeilrichtung in der Showpage umkehren (rechter Pfeil = neuer)';
$lang['Show_Inline_Copyright'] = 'Zeige Copyright-Info in einer Zeile';
$lang['Enable_Nuffimage'] = 'Aktiviere die Nuffmonn-Bild-Spezialeffektseite';
$lang['Enable_Sepia_BW'] = 'Aktiviere Sepia und B&W auf der Spezialeffektseite (deaktiviere diese Funktion, um die CPU-Belastung zu verringern)';
$lang['Show_EXIF_Info'] = 'EXIF Information des Bildes anzeigen';
$lang['Set_Memory'] = 'Setze ein Limit über Php (MB)';
$lang['Set_Memory_Explain'] = 'Dieses Feature kann verwendet werden um die Speicherbegrenzung in PHP zu erhöhen (Diese Einstellung muß durch Deinen Anbieter erlaubt werden): falls Deine Bilder nicht richtig geladen werden, kannst Du versuchen den Speicher zu erhöhen. Der Maximalwert wird hier bei 16 MB festgelegt.';
$lang['LB_Preview'] = 'Aktiviere LightBox Vorschau';
$lang['LB_Preview_Explain'] = 'Dieses Feature zeigt eine LightBox mit einer Bildervorschau, wenn du mit der Maus über das Thumbnail fährst.';
$lang['Album_config_notice'] = 'Falls Du die derzeitigen Album-Einstellungen wechselst und einen anderen Tab wählst, wirst Du zum speichern der Änderungen aufgefordert.<br />Das System wird Änderungen <b>nicht automatisch speichern</b>.';
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
$lang['Show_Index_Total_Pics'] = 'Zeige die Gesamtanzahl der Bilder für die Kategorie inkl. aller Unterkategorien im Index';
$lang['Show_Index_Total_Comments'] = 'Zeige die Gesamtanzahl der Kommentare für die Kategorie inkl. aller Unterkategorien im Index';
$lang['Show_Index_Last_Comment'] = 'Zeige den letzten Kommentar für die Kategorie inkl. aller Unterkategorien im Index';
$lang['Show_Index_Last_Pic'] = 'Zeige die letzten Bildinformationen für die Kategorie inkl. aller Unterkategorien im Index';
$lang['Line_Break_Subcats'] = 'Zeige jede Unterkategorie in einer neuen Zeile';
$lang['Show_Personal_Gallery_Link'] = 'Zeige Persönliche Galerien und den dazugehörigen Link in den Unterkategorien';
$lang['Album_Personal_Auth_Explain'] = 'Hier kannst Du wählen, welche Benutzergruppe(n) Moderator für <b>alle</b> persönlichen Albenkategorien sind oder einfach nur persönlichen Zugriff zu ihnen hat.';
$lang['Album_debug_mode'] = 'Aktiviere den \'hierarchy debug mode\'.<br /><span class="gensmall">Dies wird eine Menge zusätzliche Ausgaben und einige Warnungen mit sich bringen, die alle ihre Richtigkeit haben sollten.<br />Die Option sollten <b>nur</b> genutzt werden, wenn Probleme auftreten.</span>';
$lang['New_Pic_Check_Interval'] = 'Die Zeit, in der ein Bild als \'neu\' markiert sein soll.<br /><span class="gensmall"><b>Format</b> : &lt;Nummer&gt;&lt;Typ&gt; Anstelle von Typ h, d, w or m (Stunde, Tag, Woche oder Monat)<br /> z.B.. 12H = 12 Stunden und 12D = 12 Tage und 12W = 12 Wochen und 12M = 12 Monate<br />Wenn kein Typ angegeben wurde, geht das System von <b>Tagen</b> aus</span>';
$lang['New_Pic_Check_Interval_Desc'] = '<span class="gensmall">H = STUNDEN, D = TAGE, W = WOCHEN, M = MONATE</span>';
$lang['New_Pic_Check_Interval_LV'] = 'Wird diese Option aktiviert, basiert die Markierung \'neu\' auf dem Zeitpunkt des letzten Besuchs.';
$lang['Enable_Show_All_Pics'] = 'Aktiviert die Ansicht wie in den persönlichen Galerien (alle Kategorien oder nur die derzeitig gewählte). <br /> Wenn ausgeschaltet, wird nur die gewählte Kategorie angezeigt';
$lang['Enable_Index_Supercells'] = 'Aktiviert \'super cells\' im Index. <br /><span class="gensmall">Dies aktiviert den mouse-over-Effekt in den Spalten, auch als supercell-Effekt bekannt.</span>';
$lang['Show_OTF_Link'] = 'Zeige "Schnelles Foto Album" Link im Album Index';
$lang['Show_AllPics_Link'] = 'Zeige "Alle Bilder" Link im Album Index';
$lang['Show_PG_Link'] = 'Zeige "Persönliche Galerien der Benutzer" link on Album Index';

// 02 - Personal Galleries
$lang['Personal_Galleries'] = 'Persönliche Galerien';
$lang['Album_personal_gallery_title'] = 'Persönliche Galerie';
$lang['Album_personal_gallery_explain'] = 'Auf dieser Seite kannst Du auswählen, welche Usergruppen eine persönliche Galerie erstellen dürfen. Diese Einstellungen sind nur wirksam, wenn Du für "User dürfen eine Persönliche Galerie erstellen" oder "Wer darf persönliche Galerien betrachten (Voreinstellung)" in der Albumkonfiguration die Einstellung "privat" gewählt hast!';
$lang['Album_personal_successfully'] = 'Die Einstellungen wurden erfolgreich aktualisiert';
$lang['Click_return_album_personal'] = 'Klicke %shier%s, um zu den Einstellungen der persönlichen Galerien zurückzukehren';
$lang['Allow_Album_Avatars'] = 'Erlaube Benutzern ihre Bilder als Avatar zu verwenden';
$lang['Album_Personal_Settings'] = 'Persönliche Galerien';
$lang['Show_Personal_Sub_Cats'] = 'Zeige Persönliche Unterkategorien im Index';
$lang['Personal_Gallery_Approval'] = 'Persönliche Bilder müssen vom Admin genehmigt werden';
$lang['Personal_Gallery_MOD'] = 'Persönliche Galerien können vom Benutzer administriert werden';
$lang['Personal_Sub_Cat_Limit'] = 'Maximale Anzahl an Unterkategorien (-1 = unbegrenzt)';
$lang['User_Can_Create_Personal_SubCats'] = 'Benutzer können Unterkategorien in ihren persönlichen Galerien erstellen';
$lang['Click_return_personal_gallery_index'] = 'Klicke %shier%s, um zu den persönlichen Galerien zurückzukehren';
$lang['Show_Recent_In_Personal_Subcats'] = 'Zeige die neusten Bilder in den persönlichen Unterkategorien';
$lang['Show_Recent_Instead_of_Personal_NoPics'] = 'Zeige die neusten Bilder anstelle von \'Keine Bilder\' in den persönlichen Galerien';

// 03 - Categories
$lang['Categories'] = 'Album Kategorien';
$lang['Album_Categories_Title'] = 'Album Kategorien Kontrolle';
$lang['Album_Categories_Explain'] = 'Auf dieser Seite kannst Du Kategorien erstellen, ändern, löschen, sortieren, etc.';
$lang['Category_Permissions'] = 'Kategorie-Rechte';
$lang['Category_Title'] = 'Kategorie Titel';
$lang['Category_Desc'] = 'Kategorie Beschreibung';
$lang['View_level'] = 'Betrachten-Level';
$lang['Upload_level'] = 'Upload-Level';
$lang['Rate_level'] = 'Bewertungs-Level';
$lang['Comment_level'] = 'Kommentar-Level';
$lang['Edit_level'] = 'Bearbeiten-Level';
$lang['Delete_level'] = 'Löschen-Level';
$lang['New_category_created'] = 'Die neue Kategorie wurde erfolgreich erstellt!';
$lang['Click_return_album_category'] = 'Klick %shier%s um zur Album-Kategorien-Verwaltung zurückzukehren';
$lang['Category_updated'] = 'Die Kategorie wurde erfolgreich aktualisiert';
$lang['Delete_Category'] = 'Kategorie löschen';
$lang['Delete_Category_Explain'] = 'Das Formular gestattet das Löschen einer Kategorie und die Entscheidung, wohin die enthaltenen Bilder verschoben werden sollen.';
$lang['Delete_all_pics'] = 'Lösche alle Bilder';
$lang['Category_deleted'] = 'Die Kategorie wurde erfolgreich gelöscht!';
$lang['Category_changed_order'] = 'Die Ordnung dieser Kategorie wurde erfolgreich geändert (?)';
$lang['Personal_Root_Gallery'] = 'Grundverzeichnis der persönlichen Galerie';
$lang['Parent_Category'] = 'Oberverzeichnis (für diese Kategorie)';
$lang['Child_Category_Moved'] = 'Die gewählte Kategorie hat Unterverzeichnisse. Die Unterkategorie wurde in die <B>%s</B> Kategorie verschoben.';
$lang['No_Self_Refering_Cat'] = 'Eine Überkategorie kann nicht sich selbst zugeordnet werden';
$lang['Can_Not_Change_Main_Parent'] = 'Im Grundverzeichnis kann nicht in eine Überkategorie gewechselt werden.';
$lang['Watermark'] = 'Wasserzeichen';
$lang['Watermark_explain'] = 'Lege die Wasserzeichen Datei fest, die in dieser Kategorie benutzt wird. Wähle den Pfad der Datei vom phpBB root aus (z.B.: <b>album_mod/mark_fap.png</b>). Die Wasserzeichen-Datei wird nur angezeigt, wenn das Wasserzeichen aktiviert ist.';
$lang['Cat_Pics_Synchronize'] = 'Sync Bild Zähler';
$lang['Cat_Pics_Synchronized'] = 'Alle Bild Zähler wurden synchronisiert.';

// 04 - Permissions
$lang['Album_Auth_Title'] = 'Album-Berechtigungen';
$lang['Album_Auth_Explain'] = 'Hier kannst Du festlegen, welche Usergruppe(n) in welchen Kategorien Moderator(en) sein sollen, oder ob sie nur persönlichen Zugang zu bestimmten Kategorien haben sollen';
$lang['Select_a_Category'] = 'Wähle eine Kategorie!';
$lang['Look_up_Category'] = 'Kategorie ansehen';
$lang['Album_Auth_successfully'] = 'Auth wurde erfolgreich aktualisiert';
$lang['Click_return_album_auth'] = 'Klick %shier%s um zu Album-Berechtigungen zurückzukehren';
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
$lang['Album_Category_Sorting_Direction'] = 'Richtung (nur für ID und Name)';
$lang['Album_Category_Sorting_Asc'] = 'Aufsteigend';
$lang['Album_Category_Sorting_Desc'] = 'Absteigend';

// 07 - Clear Cache
$lang['Clear_Cache_Tab'] = 'Cache';
$lang['Clear_Cache'] = 'Lösche Cache';
$lang['Album_clear_cache_confirm'] = 'Wenn Du den "Thumbnail Cache" benutzt, musst Du diesen leeren, nachdem Du die Thumbnail-Einstellungen in der Album-Konfiguration geändert hast, damit sie neu erstellt werden.<br /><br /> Möchtest Du ihn jetzt leeren?';
$lang['Thumbnail_cache_cleared_successfully'] = '<br />Dein "Thumbnail Cache" wurde erfolgreich geleert<br />&nbsp;';

// ACP - Javascript text
$lang['acp_ask_save_changes'] = 'Möchtest Du die Änderungen speichern ?\n(OK = Ja, Cancel = Nein)';
$lang['acp_nothing_to_save'] = 'Nichts zu speichern!';
$lang['acp_settings_changed_ask_save'] = 'Es wurden Änderungen vorgenommen. Sollen diese gespeichert werden?\n(OK = Ja, Cancel = Nein)';

// GD Info
$lang['GD_Info'] = 'GD Info';
$lang['GD_Title'] = 'GD Info';
$lang['GD_Description'] = 'Hier können Informationen zu der vorhandenen Grafikbibliothek abgelesen werden.';
$lang['GD_Version'] = 'Version:';
$lang['GD_Freetype_Support'] = 'Freetype Fonts Unterstützung:';
$lang['GD_Freetype_Linkage'] = 'Freetype Link Typ:';
$lang['GD_T1lib_Support'] = 'T1lib Unterstützung:';
$lang['GD_Gif_Read_Support'] = 'Gif Read Unterstützung:';
$lang['GD_Gif_Create_Support'] = 'Gif Create Unterstützung:';
$lang['GD_Jpg_Support'] = 'Jpg/Jpeg Unterstützung:';
$lang['GD_Png_Support'] = 'Png Unterstützung:';
$lang['GD_Wbmp_Support'] = 'WBMP Unterstützung:';
$lang['GD_XBM_Support'] = 'XBM Unterstützung:';
$lang['GD_Jis_Mapped_Support'] = 'Japanese Font Unterstützung:';
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
$lang['Pic_Resampling'] = 'Wird diese Option aktiviert, wird jedes Bild automatisch während des Uploads angepasst, welches die Vorgaben im ACP überschreitet.';
$lang['Max_file_size_resampling'] = 'Maximale Größe, bevor ein Bild neu berechnet wird (bytes).';

// CLowN
$lang['SP_Album_config'] = 'Clown SP';
$lang['SP_Album_config_explain'] = 'Hier können einige Optionen für das Album Service Pack verändert werden';
$lang['SP_Album_sp_general'] = 'Allgemeine Konfiguration';
$lang['SP_Album_sp_watermark'] = 'Wasserzeichen Konfiguration (Logo im Bild)';
$lang['SP_Album_sp_hotornot'] = 'Hot or Not Konfiguration';
$lang['SP_Rate_type'] = 'Wähle Bild-Wertungsanzeige';
$lang['SP_Rate_type_0'] = 'Nur Bilder';
$lang['SP_Rate_type_1'] = 'Nur Ziffern';
$lang['SP_Rate_type_2'] = 'Ziffern und Bilder';
$lang['SP_Display_latest'] = 'Zeige Block mit den neusten Bildern';
$lang['SP_Display_highest'] = 'Zeige Block mit den höchstbewerteten Bildern';
$lang['SP_Display_most_viewed'] = 'Zeige Block mit den am häufigsten betrachteten Bildern';
$lang['SP_Display_random'] = 'Zeige Block mit zufälligen Bildern';
$lang['SP_Pic_row'] = 'Anzahl der Reihen pro Thumbnail Seite';
$lang['SP_Pic_col'] = 'Anzahl der Spalten pro Thumbnail Seite';
$lang['SP_Midthumb_use'] = 'Benutze mittleres Thumbnail';
$lang['SP_Midthumb_cache'] = 'Aktiviere Caching des mittleren Thumbnails';
$lang['SP_Midthumb_high'] = 'Höhe des mittleren Thumbnails (Pixel)';
$lang['SP_Midthumb_width'] = 'Breite des mittleren Thumbnails (Pixel)';
$lang['SP_Watermark'] = 'Benutze Wasserzeichen';
$lang['SP_Watermark_users'] = 'Zeige Wasserzeichen allen Nutzern, \'Nein\' zeigt Wasserzeichen nur bei Gästen';
$lang['SP_Watermark_placent'] = 'Wasserzeichen Position auf dem Bild';
$lang['SP_Hon_already_rated'] = 'Unendliche Wertungen für Hot or Not-Seite';
$lang['SP_Hon_sep_rating'] = 'Speichere Hot or Not-Wertungen in einer eigenen Tabelle';
$lang['SP_Hon_where'] = 'Zeige Bilder in Hot or Not aus welchen Kategorien? (Um Bilder aus allen Kategorien zu zeigen leer lassen, bei mehr als einer Kategorie die einzelnen Kategorien durch Kommata trennen)';
$lang['SP_Hon_users'] = 'Dürfen Gäste werten?';

$lang['SP_Disabled'] = 'Deaktiviert';
$lang['SP_Enabled'] = 'Aktiviert';
$lang['SP_Yes'] = 'Ja';
$lang['SP_No'] = 'Nein';
$lang['SP_Always'] = 'Immer';
$lang['SP_Submit'] = 'Übertragen';
$lang['SP_Reset'] = 'Zurücksetzen';

// Nuffload
$lang['Nuffload_Config'] = 'Nuffload Konfiguration';
$lang['Enable_Nuffload'] = 'Aktiviere Nuffload';
$lang['Enable_Nuffload_Explain'] = 'Wird diese Option aktiviert, werden die Bilder mittels Nuffload anstelle des normalen Uploaders hochgeladen.';
$lang['progress_bar_configuration'] = 'Nuffload - Konfiguration der Fortschrittsanzeige';
$lang['perl_uploader'] = 'Aktiviere Perl uploader';
$lang['path_to_bin'] = 'Pfad vom phpBB Grundverzeichnis zum cgi-bin (z.B. <b>./cgi-bin/</b>, wenn phpBB in einem Unterverzeichnis liegt)';
$lang['show_progress_bar'] = 'Zeige Fortschrittsanzeige beim Upload';
$lang['close_progress_bar'] = 'Schließe die Fortschrittsanzeige nach dem Upload';
$lang['activity_timeout'] = 'Aktivitäts-Timeout (Sek.)';
$lang['simple_format'] = 'Benutze einfache Formatierung der Fortschrittsanzeige';
$lang['multiple_uploads_configuration'] = 'Nuffload - Konfiguration des Multi-Uploads';
$lang['multiple_uploads'] = 'Aktiviere Multi-Upload';
$lang['max_uploads'] = 'Maximale Anzahl an Upload-Feldern';
$lang['zip_uploads'] = 'Aktiviere ZIP-Upload';
$lang['image_resizing_configuration'] = 'Nuffload - Konfiguration der Bildgrößenanpassung';
$lang['image_resizing'] = 'Aktiviere Größenanpassung';
$lang['image_width'] = 'Bildbreite';
$lang['image_height'] = 'Bildhöhe';
$lang['image_quality'] = 'Bildqualität';

?>