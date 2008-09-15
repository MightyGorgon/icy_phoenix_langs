<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin_attach.php 24 2008-09-15 20:00:00Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* (c) 2002 Meik Sievertsen (Acyd Burn)
* TheSteffen, KugeLSichA, Tom
*
*/

/**
* DO NOT CHANGE
*/
if (!isset($lang) || !is_array($lang))
{
	$lang = array();
}

//
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = 'Kontrollzentrum';
$lang['Shadow_attachments'] = 'Versteckte Attachments';
$lang['Forbidden_extensions'] = 'Verbotene Dateiendungen';
$lang['Extension_control'] = 'Bearbeite Erweiterungen';
$lang['Extension_group_manage'] = 'Bearbeite Dateiendungsgruppen';
$lang['Special_categories'] = 'Spezial-Kategorien';
$lang['Sync_attachments'] = 'Attachments Synchronisieren';
$lang['Quota_limits'] = 'Quota Grenzen';

// Attachments -> Management
$lang['Attach_settings'] = 'Attachment Einstellungen';
$lang['Manage_attachments_explain'] = 'Hier kannst du die Allgemeinen Einstellungen f�r das Attachment Mod konfigurieren. Wenn du unten auf den Button \'Teste Einstellungen\' dr�ckst, dann f�hrt das Attachment Mod einige System Tests durch um sicherzugehen, da� das Mod ordnungsgem�� funktionieren wird. Wenn du Probleme beim Hochladen von Dateien hast, dann lass diesen Test laufen um eine detailliertere Fehlernachricht zu bekommen.';
$lang['Attach_filesize_settings'] = 'Attachment Dateigr��en Einstellungen';
$lang['Attach_number_settings'] = 'Attachment Nummern Einstellungen';
$lang['Attach_options_settings'] = 'Attachment Optionen';

$lang['Upload_directory'] = 'Upload Verzeichnis';
$lang['Upload_directory_explain'] = 'Gib den relativen Pfad von deiner phpBB2-Installation zu deinem Upload-Verzeichnis an. Zum Beispiel: \'files\' wenn deine phpBB2 Installation auf http://www.deineseite.de/phpBB2 und das Attachment Upload-Verzeichnis auf http://www.deineseite.de/phpBB2/files ist.';
$lang['Attach_img_path'] = 'Pfad zu einem Bild f�r Attachments';
$lang['Attach_img_path_explain'] = 'Dieses Bild wird vor dem Attachment Link in jeder Nachricht angezeicht. Lassen Sie das Feld leer, wenn es nicht angezeigt werden soll. Diese Einstellung wird �berschrieben von den Einstellungen f�r das Bild in der Verwaltung der Dateiendungsgruppen.';
$lang['Attach_topic_icon'] = 'Attachment Topic Icon';
$lang['Attach_topic_icon_explain'] = 'Dieses Bild wird vor einem Topic, in dem Attachments gepostet wurden, angezeigt. Lassen Sie das Feld leer, wenn es nicht angezeigt werden soll.';
$lang['Attach_display_order'] = 'Attachment Reihenfolge (Anzeige)';
$lang['Attach_display_order_explain'] = 'Hier kannst du ausw�hlen in welcher Reihenfolge die Attachments in Nachrichten/PNs angezeigt werden sollen. Entweder in Absteigender Reihenfolge (Neustes Attachment zuerst) or Aufsteigender Reihenfolge (�ltestes Attachment zuerst).';
$lang['Show_apcp'] = 'Neues Attachment Posting Control Panel anzeigen';
$lang['Show_apcp_explain'] = 'W�hle aus, ob du das Attachment Posting Control Panel anzeigen m�chtest (yes) oder die alte Methode mit den zwei Boxen f�r das Hinzuf�gen von Dateien und f�r alle hinzugef�gten Dateien (no) in dem Nachrichten Fenster. Das Aussehen der beiden Modi ist sehr schwer zu beschreiben, am besten die beiden Modi mal ausprobieren.';

$lang['Max_filesize_attach'] = 'Dateigr��e';
$lang['Max_filesize_attach_explain'] = 'Maximale Dateigr��e f�r Attachments. Ein Wert von 0 bedeutet \'unbegrenzt\'. Diese Einstellung ist begrenzt durch die Server Konfiguration. Wenn z.B. in der PHP Konfiguration nur eine maximale Upload Gr��e von 2 MB defniert ist, dann kann dieser Wert auch nicht vom Attachment Mod �berschritten werden.';
$lang['Attach_quota'] = 'Attachment Quota';
$lang['Attach_quota_explain'] = 'Hier kannst du die maximale Gr��e ALLER Attachments definieren. Ein Wert von 0 bedeutet \'unbegrenzt\'.';
$lang['Max_filesize_pm'] = 'Maximale Dateigr��e in den Privaten Nachrichten';
$lang['Max_filesize_pm_explain'] = 'Maximale Dateigr��e ALLER Attachments, die ein User in allen seiner Privaten Nachrichten haben kann. Ein Wert von 0 bedeutet \'unbegrenzt\'.'; 
$lang['Default_quota_limit'] = 'Standard Quota Grenze';
$lang['Default_quota_limit_explain'] = 'Hier bist du in der Lage eine Standard Quota Grenze f�r Benutzer festzulegen, die sich gerade neu registriert haben oder die keine definierte Quota Grenze besitzen. Die Option \'Keine Quota Grenze\' ist zum Benutzen der normalen Einstellungen (f�r Dateigr��en und Grenzen) gedacht. Wenn \'Standard\' ausgew�hlt ist, dann werden keine Quotas neu registrierten Benutzern zugeordnet.';

$lang['Max_attachments'] = 'Maximale Anzahl an Attachments';
$lang['Max_attachments_explain'] = 'Hier kannst du die Anzahl der Attachments, die in einer Nachricht erlaubt sind, angeben.';
$lang['Max_attachments_pm'] = 'Maximale Anzahl an Attachments in einer Privaten Nachricht';
$lang['Max_attachments_pm_explain'] = 'Hier kannst du die Anzahl der Attachments, die in einer Privaten Nachricht erlaubt sind, angeben.';

$lang['Disable_mod'] = 'Attachment Mod abschalten';
$lang['Disable_mod_explain'] = 'Diese Option ist haupts�chlich zum testen neuer Templates oder Themes gedacht, sie unterbindet alle Attachment Funktionen, au�er diese im Administrationsbereich.';
$lang['PM_Attachments'] = 'Erlaube Attachments in Privaten Nachrichten';
$lang['PM_Attachments_explain'] = 'Erlaube oder Verbiete das Anh�ngen von Dateien in Privaten Nachrichten.';
$lang['Ftp_upload'] = 'Benutze FTP Upload';
$lang['Ftp_upload_explain'] = 'Benutze die FTP Upload M�glichkeit. Wenn du diese Option auf Ja stellst, dann musst du unten deine FTP Einstellungen eingeben, das Upload Verzeichnis hat dann keine G�ltigkeit mehr.';
$lang['Attachment_topic_review'] = 'M�chtest du Attachments in dem Themen-�berblicks Feld darstellen ?';
$lang['Attachment_topic_review_explain'] = 'Wenn du \'Ja\', dann werden alle Attachments in dem Themen-�berblicks Feld dargestellt, da� angezeigt wird, wenn du auf Themen antwortest.';

$lang['Ftp_server'] = 'FTP Upload Server';
$lang['Ftp_server_explain'] = 'Hier kannst du die IP-Addresse oder den FTP Hostnamen des Servers eintragen, der f�r die hochgeladenen Dateien benutzt wird. Wenn du das Feld leer l�sst, dann wird automatisch der Server genommen, auf dem auch das phpBB2 Board installiert ist. Bitte beachte, da� es nicht erlaubt ist ftp:// oder sonstiges der Addresse voranzustellen, es reicht, wenn man z.B. ftp.foo.com eingibt oder, was sehr viel schneller ist, einfach die IP-Adresse.';

$lang['Attach_ftp_path'] = 'FTP Pfad zu deinem Upload Verzeichnis';
$lang['Attach_ftp_path_explain'] = 'Das Vezeichnis wo die Attachments abgelegt werden. Die Berechtigungen f�r das Verzeichnis m�ssen nicht ge�ndert werden. Bitte gib hier nicht die IP oder die FTP Adresse deines FTP Servers ein, es wird automatisch der localhost genommen, dieses Eingabefeld ist nur f�r den FTP Pfad da.<br />Zum Beispiel: /home/web/uploads';
$lang['Ftp_download_path'] = 'Download Link zum FTP Pfad';
$lang['Ftp_download_path_explain'] = 'Gib die URL zu deinem FTP Pfad, in dem die Attachments gespeichert werden, an.<br />Wenn du einen Remote FTP Server benutzt, dann gib die komplette URL zu deinem FTP Pfad an, zum Beispiel http://www.meineseite.de/phpBB2/upload.<br />Wenn du den Local Host benutzt, dann kannst du auch den URL Pfad relativ zu deiner phpBB2 Installation benutzen, z.B. \'upload\'.<br />Lass dieses Feld leer, wenn sich auf deinen FTP Pfad vom Internet aus nicht zugreigen l�sst. Dann kannst du aber die Physikalische Download Methode nicht benutzen.';
$lang['Ftp_passive_mode'] = 'FTP Passiv Modus';
$lang['Ftp_passive_mode_explain'] = 'Das PASV Kommando erzwingt das �ffnen eines Ports am Remote Server f�r eine Datenverbindung und gibt diese Addresse dann zur�ck. Der Remote Server lauscht an diesem Port und der Client verbindet sich mit ihm.';

$lang['No_ftp_extensions_installed'] = 'Du kannst die FTP Upload Methode nicht verwenden, da die FTP Erweiterungen nicht in deiner PHP Installation integriert/installiert wurden.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Hier kannst du die Attachments l�schen, die einer Nachricht zugeordnet sind aber nicht mehr existieren und die Dateien, die zwar existieren aber in keiner Nachricht auftauchen. Du kannst dir die existierenden Dateien angucken oder herunterladen wenn du auf diese klickst. Wenn kein Link existiert, dann gibt es diese Datei auch nicht mehr im Dateisystem.';
$lang['Shadow_attachments_file_explain'] = 'Alle Attachments l�schen die im Dateisystem verblieben sind aber keiner Nachricht zugeordnet werden kann.';
$lang['Shadow_attachments_row_explain'] = 'Alle Attachments Informationen l�schen die auf nicht vorhandene Attachments im Dateisystem verweisen.';
$lang['Empty_file_entry'] = 'Leerer Dateieintrag';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Thumbnail f�r Attachment %s zur�ckgesetzt.';
$lang['Attach_sync_finished'] = 'Attachment Synchronisierung erfolgreich beendet.';
$lang['Sync_topics'] = 'Themen syncronisieren';
$lang['Sync_posts'] = 'Beitr�ge syncronisieren';
$lang['Sync_thumbnails'] = 'Thumbnails syncronisieren';


// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Dateiendungen verwalten';
$lang['Manage_extensions_explain'] = 'Hier kannst du deine Dateiendungen verwalten. Wenn du bestimmte Dateiendungen erlauben oder verbieten m�chtest, benutze bitte das Dateiendungsgruppen Kontrollzentrum.';
$lang['Explanation'] = 'Erkl�rung';
$lang['Extension_group'] = 'Dateiendungsgruppe';
$lang['Invalid_extension'] = 'Ung�ltige Dateiendung';
$lang['Extension_exist'] = 'Die Dateiendung %s existiert bereits'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'Die Dateiendung %s ist verboten, es ist nicht erlaubt diese zu den Dateiendungen hinzuzuf�gen';

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Dateiendungsgruppen verwalten';
$lang['Manage_extension_groups_explain'] = 'Hier kannst du Dateiendungsgruppen hinzuf�gen, ver�ndern oder l�schen, du kannst sie deaktivieren, ihnen eine Spezial Kategorie zuweisen, den Download Mechanismus �ndern und du kannst ein Upload Bild definieren, da� vor jedem Attachment angezeigt wird, da� zu der jeweiligen Gruppe geh�rt.';
$lang['Special_category'] = 'Spezial Kategorie';
$lang['Category_images'] = 'Bilder';
$lang['Category_stream_files'] = 'Stream Dateien';
$lang['Category_swf_files'] = 'Flash Dateien';
$lang['Allowed'] = 'Erlaubt';
$lang['Allowed_forums'] = 'Erlaubte Foren';
$lang['Ext_group_permissions'] = 'Gruppen Berechtigungen';
$lang['Download_mode'] = 'Download Modus';
$lang['Upload_icon'] = 'Upload-Bild';
$lang['Max_groups_filesize'] = 'Maximale Dateigr��e';
$lang['Extension_group_exist'] = 'Die Dateiendungsgruppe %s existiert bereits'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Spezial Kategorien verwalten';
$lang['Manage_categories_explain'] = 'Hier kannst du die Spezial Kategorien konfigurieren. Du kannst spezielle Parameter und Verhalten bei bestimmten Situationen definieren. Alles gilt immer f�r Dateiendungsgruppen die der Spezial Kategorie zugeordnet sind.';
$lang['Settings_cat_images'] = 'Einstellungen f�r die Spezial Kategorie: Bilder';
$lang['Settings_cat_streams'] = 'Einstellungen f�r die Spezial Kategorie: Stream Dateien';
$lang['Settings_cat_flash'] = 'Einstellungen f�r die Spezial Kategorie: Flash Dateien';
$lang['Display_inlined'] = 'Bilder direkt in Nachrichten anzeigen';
$lang['Display_inlined_explain'] = 'W�hle aus, ob du Bilder direkt anzeigen m�chtest oder als Link darstellen m�chtest.';
$lang['Max_image_size'] = 'Maximale Abmessungen eines Bildes';
$lang['Max_image_size_explain'] = '(H�he x Breite in Pixel).<br />Wenn dieses Feld auf 0x0 gesetzt ist, dann wird dieses Feature nicht benutzt. Mit einigen Bildern wird dieses Feature nicht funktionieren, auf Grund von Einschr�nkungen in PHP.';
$lang['Image_link_size'] = 'Bild Link Abmessungen';
$lang['Image_link_size_explain'] = 'Wenn diese definierte Abmessung (H�he x Breite in Pixel) eines Bildes erreicht ist, dann wird das Bild als Link dargestellt, anstatt direkt.<br />Dieses Feature ist nur aktiviert, wenn \'Bilder direkt in Nachrichten anzeigen\' angeschaltet ist.<br />Wenn dieses Feld auf 0x0 gesetzt ist, dann ist das Feature deaktiviert. Mit einigen Bildern wird dieses Feature nicht funktionieren, auf Grund von Einschr�nkungen in PHP.';
$lang['Assigned_group'] = 'Zugewiesene Gruppe';

$lang['Image_create_thumbnail'] = 'Thumbnail erstellen';
$lang['Image_create_thumbnail_explain'] = 'Erstellt immer ein Thumbnail. Dieses Feature �berschreibt alle in dieser Spezial Kategorie get�tigten Einstellungen, au�er der \'Maximale Abmessungen eines Bildes\'-Einstellung. Mit diesem Feature kann ein kleines Bild (Thumbnail) erstellt werden, da� anstelle des Bildes (oder Links) angezeigt wird. Wenn der Benutzer auf dieses Thumbnail klickt, dann �ffnet sich das eigentliche Bild.<br />Bitte beachte, da� dieses Feature das Programm \'Imagick\' voraussetzt. Wenn das Programm nicht installiert ist oder Safe-Mode in PHP angeschaltet ist, dann versucht das Attachment Mod die GD-Erweiterungen von PHP zu benutzen. Wenn der Dateityp von PHP (oder dem Attachment Mod) nicht unterst�tzt wird, dann wird dieses Feature nicht benutzt.';
$lang['Image_min_thumb_filesize'] = 'Minimale Thumbnail Gr��e';
$lang['Image_min_thumb_filesize_explain'] = 'Wenn ein Bild kleiner als die hier angegebene Dateigr��e ist, dann wird kein Thumbnail erstellt, da es ja anscheinend klein genug ist.';
$lang['Image_imagick_path'] = 'Imagick Programm (Kompletter Pfad)';
$lang['Image_imagick_path_explain'] = 'Gib den Pfad zu dem Convert Programm von Imagemagick an, noralerweise ist das /usr/bin/convert (unter windows: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Imagemagick suchen';

$lang['Use_gd2'] = 'Benutze die GD2 Erweiterung';
$lang['Use_gd2_explain'] = 'PHP kann mit der GD1 oder GD2 Erweiterung kompiliert werden, die f�r Bildmanipulationen genutzt wird. Um Thumbnails korrekt ohne der Zunahme von Imagemagick generieren zu k�nnen, benutzt das Attachment Mod zwei Methoden, basierend auf der hier gew�hlten Einstellung. Wenn deine Thumbnails eine schlechte Qualit�t besitzen oder total verzerrt sind, dann versuche diese Einstellung zu �ndern.';
$lang['Attachment_version'] = 'Attachment Mod Version %s'; // %s is the version number

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Verbotene Erweiterungen einstellen';
$lang['Manage_forbidden_extensions_explain'] = 'Hier kannst du verbotene Erweiterungen hinzuf�gen oder l�schen. Die Erweiterungen php, php3 und php4 sind standardm��ig verboten, du kannst sie hier nicht l�schen.';
$lang['Forbidden_extension_exist'] = 'Die verbotene Dateiendung %s existiert bereits'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'Die Dateiendung %s ist in den erlaubten Extensions definiert, bitte l�sche sie dort, bevor du sie hier hinzuf�gst.';

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Dateiendungsgruppen Berechtigungen -> \'%s\'';
$lang['Group_permissions_explain'] = 'Hier bist du in der Lage diese Dateiendungsgruppe auf bestimmte Foren zu beschr�nken. Standardm��ig werden Dateiendungsgruppen in allen Foren erlaubt, in denen ein User die Berechtigung zum Posten von Attachments hat. Hier kannst du dies �ndern, indem du Foren, in denen die Gruppe (die Dateierweiterungen dieser Gruppe) erlaubt sein soll hinzuf�gst. Der Standardwert \'ALLE FOREN\' wird nach dem hinzuf�gen verschwinden. Du kannst \'ALLE FOREN\' jederzeit wieder hinzuf�gen. Wenn du ein Forum zu deinem Board hinzuf�gst, und eine Gruppe auf \'ALLE FOREN\' gesetzt ist, dann wird sich nichts �ndern. Aber wenn du die Berechtigungen ge�ndert hast, die Dateierweiterungen der Gruppe somit nur in bestimmten Foren erlaubst, dann solltest du hier noch mal vorbeischauen, wenn du die Gruppe auch in dem neu hinzugef�gtem Forum erlauben m�chtest. Bedenke bitte, da� du hier alle Foren ausw�hlen kannst, auch die, in denen das Posten von Attachments generell nicht erlaubt ist.';
$lang['Note_admin_empty_group_permissions'] = 'Beachte:<br />In den unten aufgef�hrten Foren wird deinen Benutzern in der Regel erlaubt Dateien anzuh�ngen, aber da keine Dateiendungsgruppe erlaubt ist, ist es deinen Benutzern nicht erlaubt irgendetwas anzuh�ngen. Wenn sie es versuchen, werden sie eine Fehlermeldung erhalten. Vielleicht willst du die Berechtigung bei \'Post Files\' auf ADMIN bei diesen Foren setzen.<br /><br />';
$lang['Add_forums'] = 'F�ge Foren hinzu';
$lang['Add_selected'] = 'F�ge ausgew�hlte hinzu';
$lang['Perm_all_forums'] = 'ALLE FOREN';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Attachment Quota Grenzen verwalten';
$lang['Manage_quotas_explain'] = 'Hier kannst die Quota Grenzen hinzuf�gen/l�schen und �ndern. Die hier festgelegten Grenzen k�nnen sp�ter Gruppen und Benutzern zugeordnet werden. Um einem Benutzer ein Quota zuzuweisen, musst du in die User-Verwaltung gehen (Benutzer->Verwaltung), sobald du einen Benutzer ausgew�hlt hast kannst du seine Quotas �ndern/zuweisen. Um Quotas einer Gruppe zuzuordnen musst du in die Gruppen-Verwaltung gehen (Gruppen->Verwaltung), sobald du eine Gruppe ausgew�hlt hast, um sie zu editieren, kannst du Quotas zuweisen. Wenn du sehen m�chtest welche Benutzer und Gruppen welche Quotas besitzen, klicke einfach auf \'Ansicht\', zu finden auf der linken Seite einer Quota Beschreibung.';
$lang['Assigned_users'] = 'Zugewiesene Benutzer';
$lang['Assigned_groups'] = 'Zugewiesene Gruppen';
$lang['Quota_limit_exist'] = 'Die Quota Grenze %s existiert bereits.';

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'File Attachments Kontrollzentrum';
$lang['Control_panel_explain'] = 'Hier kannst du Attachments, basierend auf Benutzername, Attachments, Mime Gruppen usw. verwalten und angucken.';
$lang['File_comment_cp'] = 'Kommentar';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Benutze das *-Zeichen als Joker';
$lang['Size_smaller_than'] = 'Attachmentgr��e kleiner als (bytes)';
$lang['Size_greater_than'] = 'Attachmentgr��e gr��er als (bytes)';
$lang['Count_smaller_than'] = 'Anzahl der Downloads ist kleiner als';
$lang['Count_greater_than'] = 'Anzahl der Downloads ist gr��er als';
$lang['More_days_old'] = 'Mehr als diese Anzahl an Tagen alt';
$lang['No_attach_search_match'] = 'Keine Attachments gefunden die den Suchkriterien entsprechen.';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Anzahl an Attachments';
$lang['Total_filesize'] = 'komplette Dateigr��e';
$lang['Number_posts_attach'] = 'Anzahl der Posts mit Attachments';
$lang['Number_topics_attach'] = 'Anzahl der Topics mit Attachments';
$lang['Number_users_attach'] = 'Anzahl der User die Attachments gepostet haben';
$lang['Number_pms_attach'] = 'Anzahl der Attachments in Privaten Nachrichten';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Attachment Statistik f�r %s'; // replace %s with username
$lang['Size_in_kb'] = 'Gr��e (KB)';
$lang['Downloads'] = 'Downloads';
$lang['Post_time'] = 'Postzeit';
$lang['Posted_in_topic'] = 'Im Topic gepostet';
$lang['Submit_changes'] = '�nderungen absenden';

// Sort Types
$lang['Sort_Attachments'] = 'Datei-Anh�nge';
$lang['Sort_Size'] = 'Gr��e';
$lang['Sort_Filename'] = 'Dateiname';
$lang['Sort_Comment'] = 'Kommentar';
$lang['Sort_Extension'] = 'Dateiendung';
$lang['Sort_Downloads'] = 'Downloads';
$lang['Sort_Posttime'] = 'Postzeit';
$lang['Sort_Posts'] = 'Posts';

// View Types
$lang['View_Statistic'] = 'Statistik';
$lang['View_Search'] = 'Suche';
$lang['View_Username'] = 'Benutzername';
$lang['View_Attachments'] = 'Datei-Anh�nge';

// Successfully updated
$lang['Attach_config_updated'] = 'Attachment Einstellungen wurden erfolgreich ver�ndert';
$lang['Click_return_attach_config'] = 'Klicke %shier%s um zu den Attachment Einstellungen zur�ckzukehren';
$lang['Test_settings_successful'] = 'Einstellungstest abgeschlossen, die Konfiguration scheint zu funktionieren.';

// Some basic definitions
$lang['Attachments'] = 'Datei-Anh�nge';
$lang['Attachment'] = 'Datei-Anhang';
$lang['Extensions'] = 'Dateiendungen';
$lang['Extension'] = 'Dateiendung';

// Auth pages
$lang['Auth_attach'] = 'Dateien Posten';
$lang['Auth_download'] = 'Dateien herunterladen';

?>