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
* (c) 2002 Meik Sievertsen (Acyd Burn)
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
// Modules, this replaces the keys used
	'Control_Panel' => 'Kontrollzentrum',
	'Shadow_attachments' => 'Versteckte Dateianhänge',
	'Forbidden_extensions' => 'Verbotene Dateiendungen',
	'Extension_control' => 'Bearbeite Erweiterungen',
	'Extension_group_manage' => 'Bearbeite Dateiendungsgruppen',
	'Special_categories' => 'Spezial-Kategorien',
	'Sync_attachments' => 'Dateianhänge synchronisieren',
	'Quota_limits' => 'Kontingent Grenzen',

// Attachments -> Management
	'Attach_settings' => 'Attachment Einstellungen',
	'Manage_attachments_explain' => 'Hier kannst du die Allgemeinen Einstellungen für das Attachment Mod konfigurieren. Wenn du unten auf den Button \'Teste Einstellungen\' drückst, dann führt das Attachment Mod einige System Tests durch um sicherzugehen, daß das Mod ordnungsgemäß funktionieren wird. Wenn du Probleme beim Hochladen von Dateien hast, dann lass diesen Test laufen um eine detailliertere Fehlernachricht zu bekommen.',
	'Attach_filesize_settings' => 'Attachment Dateigrößen Einstellungen',
	'Attach_number_settings' => 'Attachment Nummern Einstellungen',
	'Attach_options_settings' => 'Attachment Optionen',

	'Upload_directory' => 'Upload Verzeichnis',
	'Upload_directory_explain' => 'Gib den relativen Pfad von deiner Icy Phoenix Installation zu deinem Upload-Verzeichnis an. Zum Beispiel: <b>files</b> wenn deine Icy Phoenix Installation auf http://www.deineseite.de/ip und das Attachment Upload-Verzeichnis auf http://www.deineseite.de/ip/files ist.',
	'Attach_img_path' => 'Pfad zu einem Bild für Dateianhänge',
	'Attach_img_path_explain' => 'Dieses Bild wird vor einem Dateianhang-Link in jeder Nachricht angezeigt. Lass dieses Feld leer, wenn es nicht angezeigt werden soll. Diese Einstellung wird überschrieben von den Einstellungen für das Bild in der Verwaltung der Dateiendungsgruppen.',
	'Attach_topic_icon' => 'Dateianhang Themen Icon',
	'Attach_topic_icon_explain' => 'Dieses Bild wird vor einem Topic, in dem Attachments gepostet wurden, angezeigt. Lassen Sie das Feld leer, wenn es nicht angezeigt werden soll.',
	'Attach_display_order' => 'Dateianhang Reihenfolge (Anzeige)',
	'Attach_display_order_explain' => 'Hier kannst du auswählen in welcher Reihenfolge die Attachments in Nachrichten/PNs angezeigt werden sollen. Entweder in Absteigender Reihenfolge (Neuestes Attachment zuerst) or Aufsteigender Reihenfolge (Ältestes Attachment zuerst).',
	'Show_apcp' => 'Neues Attachment Posting Control Panel anzeigen',
	'Show_apcp_explain' => 'Wähle aus, ob du das Attachment Posting Control Panel anzeigen möchtest (Ja) oder die alte Methode mit den zwei Boxen für das Hinzufügen von Dateien und für alle hinzugefügten Dateien (Nein) in dem Nachrichten Fenster. Das Aussehen der beiden Modi ist sehr schwer zu beschreiben, am besten die beiden Modi mal ausprobieren.',

	'Max_filesize_attach' => 'Dateigröße',
	'Max_filesize_attach_explain' => 'Maximale Dateigröße für Attachments. Ein Wert von 0 bedeutet \'unbegrenzt\'. Diese Einstellung ist begrenzt durch die Server Konfiguration. Wenn z.B. in der PHP Konfiguration nur eine maximale Upload Größe von 2 MB defniert ist, dann kann dieser Wert auch nicht vom Attachment Mod überschritten werden.',
	'Attach_quota' => 'Dateianhang Kontingent',
	'Attach_quota_explain' => 'Hier kannst du die maximale Größe ALLER Dateianhänge definieren. Ein Wert von 0 bedeutet \'unbegrenzt\'.',
	'Max_filesize_pm' => 'Maximale Dateigröße in den Privaten Nachrichten',
	'Max_filesize_pm_explain' => 'Maximale Dateigröße ALLER Attachments, die ein User in allen seiner Privaten Nachrichten haben kann. Ein Wert von 0 bedeutet \'unbegrenzt\'.', 
	'Default_quota_limit' => 'Standard Kontingent Grenze',
	'Default_quota_limit_explain' => 'Hier bist du in der Lage eine Standard Quota Grenze für Benutzer festzulegen, die sich gerade neu registriert haben oder die keine definierte Quota Grenze besitzen. Die Option \'Keine Quota Grenze\' ist zum Benutzen der normalen Einstellungen (für Dateigrößen und Grenzen) gedacht. Wenn \'Standard\' ausgewählt ist, dann werden keine Quotas neu registrierten Benutzern zugeordnet.',

	'Max_attachments' => 'Maximale Anzahl an Attachments',
	'Max_attachments_explain' => 'Hier kannst du die Anzahl der Dateianhänge, die in einer Nachricht erlaubt sind, angeben.',
	'Max_attachments_pm' => 'Maximale Anzahl an Dateianhänge in einer Privaten Nachricht',
	'Max_attachments_pm_explain' => 'Hier kannst du die Anzahl der Dateianhänge, die in einer Privaten Nachricht erlaubt sind, angeben.',

	'Disable_mod' => 'Dateianhänge komplett deaktivieren',
	'Disable_mod_explain' => 'Diese Option ist hauptsächlich zum Testen neuer Templates oder Themes gedacht, sie unterbindet alle Funktionen für Dateianhänge, außer diese im Administrationsbereich.',
	'PM_Attachments' => 'Erlaube Dateianhänge in Privaten Nachrichten',
	'PM_Attachments_explain' => 'Erlaube oder verbiete das Anhängen von Dateien in Privaten Nachrichten.',
	'Ftp_upload' => 'Benutze FTP Upload',
	'Ftp_upload_explain' => 'Benutze die FTP Upload Möglichkeit. Wenn du diese Option auf Ja stellst, dann musst du unten deine FTP Einstellungen eingeben, das Upload Verzeichnis hat dann keine Gültigkeit mehr.',
	'Attachment_topic_review' => 'Möchtest du Dateianhänge in dem Themen-Überblicks Feld darstellen?',
	'Attachment_topic_review_explain' => 'Wenn du \'Ja\', dann werden alle Attachments in dem Themen-Überblicks Feld dargestellt, daß angezeigt wird, wenn du auf Themen antwortest.',

	'Ftp_server' => 'FTP Upload Server',
	'Ftp_server_explain' => 'Hier kannst du die IP-Addresse oder den FTP Hostnamen des Servers eintragen, der für die hochgeladenen Dateien benutzt wird. Wenn du das Feld leer lässt, dann wird automatisch der Server genommen, auf dem auch das Icy Phoenix installiert ist. Bitte beachte, daß es nicht erlaubt ist ftp:// oder sonstiges der Addresse voranzustellen, es reicht, wenn man z.B. ftp.foo.com eingibt oder, was sehr viel schneller ist, einfach die IP-Adresse.',

	'ftp_username' => 'Dein FTP Benutzer',
	'ftp_password' => 'Dein FTP Passwort',

	'Attach_ftp_path' => 'FTP Pfad zu deinem Upload Verzeichnis',
	'Attach_ftp_path_explain' => 'Das Vezeichnis wo die Attachments abgelegt werden. Die Berechtigungen für das Verzeichnis müssen nicht geändert werden. Bitte gib hier nicht die IP oder die FTP Adresse deines FTP Servers ein, es wird automatisch der localhost genommen, dieses Eingabefeld ist nur für den FTP Pfad da.<br />Zum Beispiel: /home/web/uploads',
	'Ftp_download_path' => 'Download Link zum FTP Pfad',
	'Ftp_download_path_explain' => 'Gib die URL zu deinem FTP Pfad, in dem die Attachments gespeichert werden, an.<br />Wenn du einen Remote FTP Server benutzt, dann gib die komplette URL zu deinem FTP Pfad an, zum Beispiel http://www.meineseite.de/ip/upload.<br />Wenn du den Local Host benutzt, dann kannst du auch den URL Pfad relativ zu deiner Icy Phoenix Installation benutzen, z.B. \'upload\'.<br />Lass dieses Feld leer, wenn sich auf deinen FTP Pfad vom Internet aus nicht zugreigen lässt. Dann kannst du aber die Physikalische Download Methode nicht benutzen.',
	'Ftp_passive_mode' => 'FTP Passiv Modus',
	'Ftp_passive_mode_explain' => 'Das PASSIV Kommando erzwingt das öffnen eines Ports am Remote Server für eine Datenverbindung und gibt diese Addresse dann zurück. Der Remote Server lauscht an diesem Port und der Client verbindet sich mit ihm.',

	'No_ftp_extensions_installed' => 'Du kannst die FTP Upload Methode nicht verwenden, da die FTP Erweiterungen nicht in deiner PHP Installation integriert/installiert wurden.',

// Attachments -> Shadow Attachments
	'Shadow_attachments_explain' => 'Hier kannst du die Attachments löschen, die einer Nachricht zugeordnet sind aber nicht mehr existieren und die Dateien, die zwar existieren aber in keiner Nachricht auftauchen. Du kannst dir die existierenden Dateien angucken oder herunterladen wenn du auf diese klickst. Wenn kein Link existiert, dann gibt es diese Datei auch nicht mehr im Dateisystem.',
	'Shadow_attachments_file_explain' => 'Alle Attachments löschen die im Dateisystem verblieben sind aber keiner Nachricht zugeordnet werden kann.',
	'Shadow_attachments_row_explain' => 'Alle Attachments Informationen löschen die auf nicht vorhandene Attachments im Dateisystem verweisen.',
	'Empty_file_entry' => 'Leerer Dateieintrag',

// Attachments -> Sync
	'Sync_thumbnail_recreated' => 'Thumbnail für Dateianhänge erstellt: %s', // replace %s with physical Filename
	'Sync_thumbnail_resetted' => 'Thumbnail für Dateianhänge %s zurückgesetzt.',
	'Attach_sync_finished' => 'Dateianhang-Synchronisierung erfolgreich beendet.',
	'Sync_topics' => 'Themen synchronisieren',
	'Sync_posts' => 'Beiträge synchronisieren',
	'Sync_thumbnails' => 'Thumbnails synchronisieren',


// Extensions -> Extension Control
	'Manage_extensions' => 'Dateiendungen verwalten',
	'Manage_extensions_explain' => 'Hier kannst du deine Dateiendungen verwalten. Wenn du bestimmte Dateiendungen erlauben oder verbieten möchtest, benutze bitte das Dateiendungsgruppen Kontrollzentrum.',
	'Explanation' => 'Erklärung',
	'Extension_group' => 'Dateiendungsgruppe',
	'Invalid_extension' => 'Ungültige Dateiendung',
	'Extension_exist' => 'Die Dateiendung %s existiert bereits', // replace %s with the Extension
	'Unable_add_forbidden_extension' => 'Die Dateiendung %s ist verboten, es ist nicht erlaubt diese zu den Dateiendungen hinzuzufügen',

// Extensions -> Extension Groups Management
	'Manage_extension_groups' => 'Dateiendungsgruppen verwalten',
	'Manage_extension_groups_explain' => 'Hier kannst du Dateiendungsgruppen hinzufügen, verändern oder löschen, du kannst sie deaktivieren, ihnen eine Spezial Kategorie zuweisen, den Download Mechanismus ändern und du kannst ein Upload Bild definieren, daß vor jedem Attachment angezeigt wird, daß zu der jeweiligen Gruppe gehört.',
	'Special_category' => 'Spezial Kategorie',
	'Category_images' => 'Bilder',
	'Category_stream_files' => 'Stream Dateien',
	'Category_swf_files' => 'Flash Dateien',
	'Allowed' => 'Erlaubt',
	'Allowed_forums' => 'Erlaubte Foren',
	'Ext_group_permissions' => 'Gruppen Berechtigungen',
	'Download_mode' => 'Download Modus',
	'Upload_icon' => 'Upload-Bild',
	'Max_groups_filesize' => 'Maximale Dateigröße',
	'Extension_group_exist' => 'Die Dateiendungsgruppe %s existiert bereits', // replace %s with the group name
	'Collapse' => '+',
	'Decollapse' => '-',

// Extensions -> Special Categories
	'Manage_categories' => 'Spezial Kategorien verwalten',
	'Manage_categories_explain' => 'Hier kannst du die Spezial Kategorien konfigurieren. Du kannst spezielle Parameter und Verhalten bei bestimmten Situationen definieren. Alles gilt immer für Dateiendungsgruppen die der Spezial Kategorie zugeordnet sind.',
	'Settings_cat_images' => 'Einstellungen für die Spezial Kategorie: Bilder',
	'Settings_cat_streams' => 'Einstellungen für die Spezial Kategorie: Stream Dateien',
	'Settings_cat_flash' => 'Einstellungen für die Spezial Kategorie: Flash Dateien',
	'Display_inlined' => 'Bilder direkt in Nachrichten anzeigen',
	'Display_inlined_explain' => 'Wähle aus, ob du Bilder direkt anzeigen möchtest oder als Link darstellen möchtest.',
	'Max_image_size' => 'Maximale Abmessungen eines Bildes',
	'Max_image_size_explain' => '(Höhe x Breite in Pixel).<br />Wenn dieses Feld auf 0x0 gesetzt ist, dann wird dieses Feature nicht benutzt. Mit einigen Bildern wird dieses Feature nicht funktionieren, auf Grund von Einschränkungen in PHP.',
	'Image_link_size' => 'Bild Link Abmessungen',
	'Image_link_size_explain' => 'Wenn diese definierte Abmessung (Höhe x Breite in Pixel) eines Bildes erreicht ist, dann wird das Bild als Link dargestellt, anstatt direkt.<br />Dieses Feature ist nur aktiviert, wenn \'Bilder direkt in Nachrichten anzeigen\' angeschaltet ist.<br />Wenn dieses Feld auf 0x0 gesetzt ist, dann ist das Feature deaktiviert. Mit einigen Bildern wird dieses Feature nicht funktionieren, auf Grund von Einschränkungen in PHP.',
	'Assigned_group' => 'Zugewiesene Gruppe',

	'Image_create_thumbnail' => 'Thumbnail erstellen',
	'Image_create_thumbnail_explain' => 'Erstellt immer ein Thumbnail. Dieses Feature überschreibt alle in dieser Spezial Kategorie getätigten Einstellungen, außer der \'Maximale Abmessungen eines Bildes\'-Einstellung. Mit diesem Feature kann ein kleines Bild (Thumbnail) erstellt werden, daß anstelle des Bildes (oder Links) angezeigt wird. Wenn der Benutzer auf dieses Thumbnail klickt, dann öffnet sich das eigentliche Bild.<br />Bitte beachte, daß dieses Feature das Programm \'Imagick\' voraussetzt. Wenn das Programm nicht installiert ist oder Safe-Mode in PHP angeschaltet ist, dann versucht das Attachment Mod die GD-Erweiterungen von PHP zu benutzen. Wenn der Dateityp von PHP (oder dem Attachment Mod) nicht unterstützt wird, dann wird dieses Feature nicht benutzt.',
	'Image_min_thumb_filesize' => 'Minimale Thumbnail Größe',
	'Image_min_thumb_filesize_explain' => 'Wenn ein Bild kleiner als die hier angegebene Dateigröße ist, dann wird kein Thumbnail erstellt, da es ja anscheinend klein genug ist.',
	'Image_imagick_path' => 'Imagick Programm (Kompletter Pfad)',
	'Image_imagick_path_explain' => 'Gib den Pfad zu dem Convert Programm von Imagemagick an, noralerweise ist das /usr/bin/convert (unter windows: c:/imagemagick/convert.exe).',
	'Image_search_imagick' => 'Imagemagick suchen',

	'Use_gd2' => 'Benutze die GD2 Erweiterung',
	'Use_gd2_explain' => 'PHP kann mit der GD1 oder GD2 Erweiterung kompiliert werden, die für Bildmanipulationen genutzt wird. Um Thumbnails korrekt ohne der Zunahme von Imagemagick generieren zu können, benutzt das Attachment Mod zwei Methoden, basierend auf der hier gewählten Einstellung. Wenn deine Thumbnails eine schlechte Qualität besitzen oder total verzerrt sind, dann versuche diese Einstellung zu ändern.',
	'Attachment_version' => 'Attachment Mod Version %s', // %s is the version number

// Extensions -> Forbidden Extensions
	'Manage_forbidden_extensions' => 'Verbotene Erweiterungen einstellen',
	'Manage_forbidden_extensions_explain' => 'Hier kannst du verbotene Erweiterungen hinzufügen oder löschen. Die Erweiterungen php, php3 und php4 sind standardmäßig verboten, du kannst sie hier nicht löschen.',
	'Forbidden_extension_exist' => 'Die verbotene Dateiendung %s existiert bereits', // replace %s with the extension
	'Extension_exist_forbidden' => 'Die Dateiendung %s ist in den erlaubten Extensions definiert, bitte lösche sie dort, bevor du sie hier hinzufügst.',

// Extensions -> Extension Groups Control -> Group Permissions
	'Group_permissions_title' => 'Dateiendungsgruppen Berechtigungen -> \'%s\'',
	'Group_permissions_explain' => 'Hier bist du in der Lage diese Dateiendungsgruppe auf bestimmte Foren zu beschränken. Standardmäßig werden Dateiendungsgruppen in allen Foren erlaubt, in denen ein Benutzer die Berechtigung zum hochladen von Dateianhängen hat. Hier kannst du dies ändern, indem du Foren, in denen die Gruppe (die Dateierweiterungen dieser Gruppe) erlaubt sein soll hinzufügst. Der Standardwert \'ALLE FOREN\' wird nach dem hinzufügen verschwinden. Du kannst \'ALLE FOREN\' jederzeit wieder hinzufügen. Wenn du ein Forum zu deinem Board hinzufügst, und eine Gruppe auf \'ALLE FOREN\' gesetzt ist, dann wird sich nichts ändern. Aber wenn du die Berechtigungen geändert hast, die Dateierweiterungen der Gruppe somit nur in bestimmten Foren erlaubst, dann solltest du hier noch mal vorbeischauen, wenn du die Gruppe auch in dem neu hinzugefügtem Forum erlauben möchtest. Bedenke bitte, daß du hier alle Foren auswählen kannst, auch die, in denen das Hochladen von Dateianhängen generell nicht erlaubt ist.',
	'Note_admin_empty_group_permissions' => 'Beachte:<br />In den unten aufgeführten Foren wird deinen Benutzern in der Regel erlaubt Dateien anzuhängen, aber da keine Dateiendungsgruppe erlaubt ist, ist es deinen Benutzern nicht erlaubt irgendetwas anzuhängen. Wenn sie es versuchen, werden sie eine Fehlermeldung erhalten. Vielleicht willst du die Berechtigung bei \'Post Files\' auf ADMIN bei diesen Foren setzen.<br /><br />',
	'Add_forums' => 'Füge Foren hinzu',
	'Add_selected' => 'Füge ausgewählte hinzu',
	'Perm_all_forums' => 'ALLE FOREN',

// Attachments -> Quota Limits
	'Manage_quotas' => 'Attachment Quota Grenzen verwalten',
	'Manage_quotas_explain' => 'Hier kannst die Quota Grenzen hinzufügen/löschen und ändern. Die hier festgelegten Grenzen können später Gruppen und Benutzern zugeordnet werden. Um einem Benutzer ein Quota zuzuweisen, musst du in die User-Verwaltung gehen (Benutzer->Verwaltung), sobald du einen Benutzer ausgewählt hast kannst du seine Quotas ändern/zuweisen. Um Quotas einer Gruppe zuzuordnen musst du in die Gruppen-Verwaltung gehen (Gruppen->Verwaltung), sobald du eine Gruppe ausgewählt hast, um sie zu editieren, kannst du Quotas zuweisen. Wenn du sehen möchtest welche Benutzer und Gruppen welche Quotas besitzen, klicke einfach auf \'Ansicht\', zu finden auf der linken Seite einer Quota Beschreibung.',
	'Assigned_users' => 'Zugewiesene Benutzer',
	'Assigned_groups' => 'Zugewiesene Gruppen',
	'Quota_limit_exist' => 'Die Quota Grenze %s existiert bereits.',

// Attachments -> Control Panel
	'Control_panel_title' => 'Dateianhänge Kontrollzentrum',
	'Control_panel_explain' => 'Hier kannst du Dateianhänge, basierend auf Benutzername, Attachments, Mime Gruppen usw. verwalten und angucken.',
	'File_comment_cp' => 'Kommentar',

// Control Panel -> Search
	'Search_wildcard_explain' => 'Benutze das *-Zeichen als Joker',
	'Size_smaller_than' => 'Dateianhang kleiner als (bytes)',
	'Size_greater_than' => 'Dateianhang größer als (bytes)',
	'Count_smaller_than' => 'Anzahl der Downloads ist kleiner als',
	'Count_greater_than' => 'Anzahl der Downloads ist größer als',
	'More_days_old' => 'Mehr als diese Anzahl an Tagen alt',
	'No_attach_search_match' => 'Keine Dateianhänge gefunden die den Suchkriterien entsprechen.',

// Control Panel -> Statistics
	'Number_of_attachments' => 'Anzahl der Dateianhänge',
	'Total_filesize' => 'komplette Dateigröße',
	'Number_posts_attach' => 'Anzahl der Beiträge mit Dateianhängen',
	'Number_topics_attach' => 'Anzahl der Themen mit Dateianhängen',
	'Number_users_attach' => 'Anzahl der User die Dateianhänge hochgeladen haben',
	'Number_pms_attach' => 'Anzahl der Dateianhänge in Privaten Nachrichten',

// Control Panel -> Attachments
	'Statistics_for_user' => 'Dateianhang-Statistik für %s', // replace %s with username
	'Size_in_kb' => 'Größe (KB)',
	'Downloads' => 'Downloads',
	'Post_time' => 'Beitragszeit',
	'Posted_in_topic' => 'Im Thema geschrieben',
	'Submit_changes' => 'Änderungen absenden',

// Sort Types
	'Sort_Attachments' => 'Dateianhänge',
	'Sort_Size' => 'Größe',
	'Sort_Filename' => 'Dateiname',
	'Sort_Comment' => 'Kommentar',
	'Sort_Extension' => 'Dateiendung',
	'Sort_Downloads' => 'Downloads',
	'Sort_Posttime' => 'Beitragszeit',
	'Sort_Posts' => 'Beiträge',

// View Types
	'View_Statistic' => 'Statistik',
	'View_Search' => 'Suche',
	'View_Username' => 'Benutzername',
	'View_Attachments' => 'Dateianhänge',

// Successfully updated
	'Attach_config_updated' => 'Einstellungen der Dateianhänge wurde erfolgreich verändert.',
	'Click_return_attach_config' => 'Klicke %shier%s, um zu den Einstellungen der Dateianhängen zurückzukehren.',
	'Test_settings_successful' => 'Einstellungstest abgeschlossen, die Konfiguration scheint zu funktionieren.',

// Some basic definitions
	'Attachments' => 'Dateianhänge',
	'Attachment' => 'Dateianhang',
	'Extensions' => 'Dateiendungen',
	'Extension' => 'Dateiendung',

// Auth pages
	'Auth_attach' => 'Dateien hochladen',
	'Auth_download' => 'Dateien herunterladen',
	)
);

?>