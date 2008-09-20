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
* TheSteffen, KugeLSichA, Tom
*
*/

// MG CMS - BEGIN
// Some langs borrowed from IM Portal
$lang['CMS_WELCOME'] = 'Willkommen bei Icy Phoenix';
$lang['BP_Title'] = 'Blocks Position Tag';
$lang['BP_Explain'] = 'Von diesem Control Panel aus, kannst du Blockpositionen hinzuf�gen, bearbeiten und l�schen. Die Standard Positionen sind \'header\', \'footer\', \'right\', \'left\' und \'center\'. Diese Positionen sind vom Layout der bestimmten Site Page abh�ngig. Nur existierende Positionen f�r die Site Page m�ssen hier hinzugef�gt werden. Positions Keys die nicht in dem entsprechenden Layout vorhanden sind werden auf der Site Page nicht angezeigt. Jeder Postion Tag Key und Charakter muss f�r jede Site Page einzigartig sein.';
$lang['BP_Position'] = 'Position Charakter';
$lang['BP_Key'] = 'Position Tag Key';
$lang['BP_Layout'] = 'Site Page';
$lang['BP_Add_Position'] = 'Neue Position hinzuf�gen';
$lang['No_bp_selected'] = 'Keine Position zum bearbeiten ausgew�hlt';
$lang['BP_Edit_Position'] = 'Bearbeite Block Position';
$lang['Must_enter_bp'] = 'Du musst ein Position Tag Key, Position Charakter und Site Page angeben';
$lang['BP_updated'] = 'Block Position Aktualisiert';
$lang['BP_added'] = 'Block Position hinzugef�gt';
$lang['Click_return_bpadmin'] = 'Klick %sHier%s um zur Block Positions Administration zur�ckzukehren';
$lang['BP_removed'] = 'Block Position entfernt';
$lang['Portal_wide'] = 'Site Wide';

$lang['No_layout_selected'] = 'Keine Site Page zum bearbeiten ausgew�hlt';
$lang['Layout_Title'] = 'Site Pages';
$lang['Layout_Explain'] = 'Von diesem Control Panel aus kannst du die Layout Informationen der Site Page hinzuf�gen, bearbeiten oder l�schen. Mehrere Site Pages k�nnen das gleiche Layout verwenden. Die ausgew�hlte Layout Template Datei muss im Layout Verzeichnis in deinem Template Verzeichnis liegen. Du solltest nicht die Standard Site Page l�schen. Das L�schen einer Site Page l�scht auch die Block Positionen und Blocks die dieser Seite zugeordnet sind. Du kannst auch die Blocks die jeder Seite zugordnet sind bearbeiten und komplett neue Seiten mit einem gew�nschten Name erstellen (z.B.: mypage.php).';
$lang['Layout_Special_Explain'] = 'Add, edit or delete blocks for standard pages of your site (i.e.: forum, view topic, memberlist, downloads, album, etc.).';
$lang['Layout_Name'] = 'Name';
$lang['Layout_Template'] = 'Template Datei';
$lang['Layout_Edit'] = 'Bearbeite Site Page';
$lang['Layout_Page'] = 'Seiten-ID';
$lang['Layout_View'] = 'Anzeige bei';
$lang['Layout_Edit_Perm'] = 'Bearbeite Berechtigungen';
$lang['Layout_Global_Blocks'] = 'Show Global Blocks';
$lang['Layout_Page_Nav'] = 'Page Navigation Block (Breadcrumbs)';
$lang['Must_enter_layout'] = 'Du muss einen Namen und eine Template Datei angeben';
$lang['Layout_updated'] = 'Site Page aktualisiert';
$lang['Click_return_layoutadmin'] = 'Klicke %shier%s, um zur Site Page Administration zur�ckzukehren';
$lang['Layout_added'] = 'Site Page hinzugef�gt';
$lang['Layout_removed'] = 'Site Page entfernt';
$lang['Layout_Add'] = 'Site Page hinzuf�gen';
$lang['Layout_BP_added'] = 'Layout Config Datei verf�gbar: Block Position Tags automatisch eingef�gt';
$lang['Layout_default'] = 'Standard';
$lang['Layout_make_default'] = 'Setze als Standard';

$lang['Blocks_Title'] = 'Blocks Management';
$lang['Blocks_Explain'] = 'Von diesem Control Panel aus kannst du Blocks f�r jede verf�gbare Site Page hinzuf�gen, bearbeiten, l�schen und verschieben. F�r jede hinzugef�gte Block Datei muss ein Block Template vorhanden sein.';
$lang['Blocks_Duplicate_Explain'] = 'Von diesem Control Panel aus kannst du Bl�cke von anderen Layouts duplizieren. Nur Bl�cke die mit dem ausgew�hlten Layout kompatibel sind werden angezeigt. Um Bl�cke zu duplizieren musst du nur die Box, f�r jeden Block den du hinzuf�gen willst, ankreuzen und dann nur noch "Bl�cke duplizieren" am Seitenende anklicken.';
$lang['Blocks_Creation_01'] = 'Hinzuf�gen/Bearbeiten Block Seite 1 von 2';
$lang['Blocks_Creation_02'] = 'Hinzuf�gen/Bearbeiten Block Seite 2 von 2';
$lang['Standard_Pages'] = 'Standard Seiten';
$lang['Custom_Pages'] = 'Benutzerspezifische Seiten';
$lang['Custom_Pages_ADV'] = 'CMS Pages ADV';
$lang['Choose_Layout'] = 'W�hle Site Page';
$lang['B_Title'] = 'Titel';
$lang['B_Position'] = 'Position';
$lang['B_Active'] = 'Aktivieren';
$lang['B_Display'] = 'Inhalt';
$lang['B_HTML'] = 'HTML';
$lang['B_BBCode'] = 'BBCode';
$lang['B_Type'] = 'Typ';
$lang['B_Border'] = 'Zeige Umrandung';
$lang['B_Border_and_Background'] = 'Border and Background';
$lang['B_Titlebar'] = 'Zeige Titelbar';
$lang['B_Titlebar_Content'] = 'Titlebar';
$lang['B_Background'] = 'Zeige Hintergrund';
$lang['B_Local'] = 'Beschr�nke Titelbar';
$lang['B_Cache'] = 'Cache?';
$lang['B_Cachetime'] = 'Cache Dauer';
$lang['B_Groups'] = 'Benutzergruppen';
$lang['B_All'] = 'Alle';
$lang['B_Guests'] = 'Nur G�ste';
$lang['B_Reg'] = 'Registrierte Benutzer';
$lang['B_Mod'] = 'Moderatoren';
$lang['B_Admin'] = 'Administratoren';
$lang['B_None'] = 'Keiner';
$lang['B_Layout'] = 'Site Page';
$lang['B_Page'] = 'Page ID';
$lang['B_Add'] = 'Block hinzuf�gen';
$lang['B_Duplicate'] = 'Bl�cke duplizieren';
$lang['B_Update'] = 'Bl�cke aktualisieren';
$lang['Yes'] = 'Ja';
$lang['No'] = 'Nein';
$lang['Enabled'] = 'Aktiviert';
$lang['Disabled'] = 'Deaktiviert';
$lang['B_Text'] = 'Text';
$lang['B_File'] = 'Block Datei';
$lang['B_Move_Up'] = 'nach Oben';
$lang['B_Move_Down'] = 'nach Unten';
$lang['B_View'] = 'Zeige bei';
$lang['B_Text_Block'] = 'Text oder HTML Block';
$lang['No_blocks_selected'] = 'kein Block ausgew�hlt';
$lang['B_Content'] = 'Inhalt';
$lang['B_Blockfile'] = 'Block Datei';
$lang['Block_Edit'] = 'Block Bearbeitung';
$lang['Block_updated'] = 'Block aktualisiert';
$lang['Blocks_updated'] = 'Bl�cke aktualisiert';
$lang['Must_enter_block'] = 'Du musst einen Block Titel eingeben';
$lang['Block_added'] = 'Block hinzugef�gt';
$lang['Blocks_added'] = 'Bl�cke hinzugef�gt';
$lang['Blocks_duplicated'] = 'Bl�cke dupliziert';
$lang['Click_return_blocksadmin'] = 'Klicke %shier%s, um zum Block Management zur�ckzukehren';
$lang['Block_removed'] = 'Block gel�scht';
$lang['B_BV_added'] = 'Block Config Datei verf�gbar: Block Variablen automatisch eingef�gt';

$lang['BV_Title'] = 'Block Variablen';
$lang['BV_Explain'] = 'Von diesem Control Panel aus kannst du die Block Variablen die auf den Site Pages verwendet werden, hinzuf�gen, bearbeiten und l�schen. Diese Variablen k�nnen dann durch die Home Page Konfigurations Seite eingestellt werden um dein Portal zu personalisieren.';
$lang['BV_Label'] = 'Feld Label';
$lang['BV_Sub_Label'] = 'Feld Info';
$lang['BV_Name'] = 'Config Name';
$lang['BV_Options'] = 'Optionen';
$lang['BV_Values'] = 'Feld Werte';
$lang['BV_Type'] = 'Kontroll Typ';
$lang['BV_Block'] = 'Block';
$lang['BV_Add_Variable'] = 'Block Variable hinzuf�gen';
$lang['No_bv_selected'] = 'Keine Block Variable zum konfigurieren, klicke auf SUBMIT/SENDEN um diesen Block zu speichern.';
$lang['BV_Edit_Variable'] = 'Bearbeite Block Variable';
$lang['Must_enter_bv'] = 'Du musst ein Feld Label und ein Config Name angeben';
$lang['BV_updated'] = 'Block Variable aktualisiert';
$lang['BV_added'] = 'Block Variable hinzuf�gt';
$lang['Click_return_bvadmin'] = 'Klicke %shier%s, um zur Block Variablen Konfiguration zur�ckzukehren';
$lang['Config_Name_Explain'] = 'Darf kein Leerzeichen haben';
$lang['Field_Options_Explain'] = 'F�r Dropdown-Listen vorgeschrieben und<br />f�r Radio Buttons (Kommagetrennt).';
$lang['Field_Values_Explain'] = 'F�r Dropdown-Listen vorgeschrieben und<br />f�r Radio Buttons (Kommagetrennt).';
$lang['BV_removed'] = 'Block Variable entfernt';

$lang['Config_updated'] = 'Konfiguration aktualisiert';
$lang['Click_return_config'] = 'Klicke %shier%s, um zur Konfiguration zur�ckzukehren';
$lang['Portal_Config'] = 'Site Pages Konfiguration';
$lang['Portal_Explain'] = 'Von diesem Control Panel aus, kannst du alle Konfigurationen die f�r deine Site Pages ben�tigt werden, einstellen. Block Variablen die auf dieser Seite gelistet sind, k�nnen auf der Block Variablen Config Seite erstellt/aktualisiert werden';
$lang['Portal_General_Config'] = 'Allgemeine Konfiguration';
$lang['Default_Portal'] = 'Standard Site Page';
$lang['Default_Portal_Explain'] = 'Homepage der Seite';
$lang['Cache_Enabled'] = 'Aktiviere Cache System';
$lang['Cache_Enabled_Explain'] = 'F�r schnelleres Laden der Site Pages Information';
$lang['Confirm_delete_item'] = 'Bist du sicher das du diesen Artikel l�schen willst?';
$lang['Cache_cleared'] = 'Cache Dateien gel�scht';

$lang['cms_pos_header'] = '�berschrift';
$lang['cms_pos_headerleft'] = 'Links';
$lang['cms_pos_headercenter'] = 'Oben/Center';
$lang['cms_pos_footercenter'] = 'Unten/Center';
$lang['cms_pos_footerright'] = 'Rechts';
$lang['cms_pos_footer'] = 'Seiten Footer';
$lang['cms_pos_nav'] = 'Navigationsleiste';
$lang['cms_pos_left'] = 'Links';
$lang['cms_pos_center'] = 'Center';
$lang['cms_pos_right'] = 'Rechts';
$lang['cms_pos_xsnews'] = 'News (Center)';
$lang['cms_pos_centerbottom'] = 'Unten/Center';
$lang['cms_pos_toprow'] = 'Top';
$lang['cms_pos_column1'] = 'Column 1 (Links)';
$lang['cms_pos_column2'] = 'Column 2 (Rechts)';
$lang['cms_pos_bottomrow'] = 'Unten';
$lang['cms_pos_ghtop'] = 'Header Top';
$lang['cms_pos_ghbottom'] = 'Header Bottom';
$lang['cms_pos_ghleft'] = 'Header Centre (Left)';
$lang['cms_pos_ghright'] = 'Header Centre (Right)';
//$lang['cms_pos_'] = '';

$lang['cms_block_ads'] = 'Ads';
$lang['cms_block_ajax_shoutbox'] = 'AJAX Chat';
$lang['cms_block_album'] = 'Galerie';
$lang['cms_block_birthdays'] = 'Geburtstage';
$lang['cms_block_calendar'] = 'Kalender';
//$lang['cms_block_center_downloads'] = 'Center Downloads';
$lang['cms_block_center_downloads'] = 'Downloads';
$lang['cms_block_clock'] = 'Uhr';
$lang['cms_block_donate'] = 'Spenden';
$lang['cms_block_dyn_menu'] = 'Dynamisches Menue';
//$lang['cms_block_dyn_menu'] = 'Quick Links';
$lang['cms_block_forum'] = 'News';
$lang['cms_block_forum_attach'] = 'Erweiterte News';
$lang['cms_block_forum_list'] = 'Forum Liste';
$lang['cms_block_full_search'] = 'Komplette Suche';
$lang['cms_block_global_header'] = 'Global Header';
$lang['cms_block_global_header_simple'] = 'Global Header Simple';
$lang['cms_block_gsearch'] = 'Google Suche';
$lang['cms_block_gsearch_hor'] = 'Google Search Horizontal';
$lang['cms_block_index'] = 'Site Map';
$lang['cms_block_jumpbox'] = 'Jumpbox';
$lang['cms_block_kb'] = 'Knowledge Base';
$lang['cms_block_links'] = 'Links';
$lang['cms_block_menu'] = 'Forum Navigation';
$lang['cms_block_nav_header'] = 'Header';
$lang['cms_block_nav_links'] = 'Site Map';
$lang['cms_block_new_downloads'] = 'Neue Downloads';
$lang['cms_block_new_downloads'] = 'New Downloads';
$lang['cms_block_news'] = 'News';
$lang['cms_block_online_users'] = 'Wer ist online';
$lang['cms_block_online_users2'] = 'Wer ist online';
$lang['cms_block_online_users'] = 'Who is Online';
$lang['cms_block_online_users2'] = 'Who is Online';
$lang['cms_block_paypal'] = 'PayPal';
$lang['cms_block_poll'] = 'Umfrage';
$lang['cms_block_random_attach'] = 'Zuf�llige Anh�nge';
$lang['cms_block_random_quote'] = 'Zuf�lliges Zitat';
$lang['cms_block_random_topics'] = 'Zuf�llige Themen';
$lang['cms_block_random_topics_ver'] = 'Zuf�llige Themen';
$lang['cms_block_recent_articles'] = 'Neueste Artikel';
$lang['cms_block_recent_topics'] = 'Neueste Themen';
$lang['cms_block_recent_topics_wide'] = 'Neueste Themen';
$lang['cms_block_referers'] = 'Referrer';
$lang['cms_block_rss'] = 'RSS';
$lang['cms_block_search'] = 'Suche';
$lang['cms_block_sec_menu'] = 'Extra Menue';
$lang['cms_block_shoutbox'] = 'Shoutbox';
$lang['cms_block_staff'] = 'Staff';
$lang['cms_block_statistics'] = 'Statistiken';
$lang['cms_block_style'] = 'Style';
$lang['cms_block_top_downloads'] = 'Beste Downloads';
$lang['cms_block_top_nav'] = 'Top Nav';
$lang['cms_block_top_posters'] = 'Beste Beitragserfasser';
$lang['cms_block_user_block'] = 'Benutzer Block';
$lang['cms_block_users_visited'] = 'Aktive Benutzer';
$lang['cms_block_visit_counter'] = 'Besucher Z�hler';
$lang['cms_block_welcome'] = 'Willkommen';
$lang['cms_block_wordgraph'] = 'Tags';
$lang['cms_block_xs_news'] = 'News';
//$lang['cms_block_'] = '';

$lang['cms_var_cms_style'] = 'CMS Modern Style';
$lang['cms_var_cms_style_explain'] = 'Modern Style for CMS consists in a modern layout with top transparent menu, while classic style has side menu';
$lang['cms_var_header_width'] = 'Globale linke Spalten-Breite';
$lang['cms_var_header_width_explain'] = 'Breite der linken Side-Wide Spalte in Pixeln';
$lang['cms_var_footer_width'] = 'Globale rechte Spalten-Breite';
$lang['cms_var_footer_width_explain'] = 'Breite der rechten Side-Wide Spalte in Pixeln';
$lang['cms_var_md_cache_file_locking'] = 'Cache Datei Blockierung';
$lang['cms_var_md_cache_file_locking_explain'] = 'Kann Cache Korruption unter schlechten Umst�nden vermeiden';
$lang['cms_var_md_cache_write_control'] = 'Cache Schreib Kontrolle';
$lang['cms_var_md_cache_write_control_explain'] = 'Erkennt einige korrupte Cache Dateien';
$lang['cms_var_md_cache_read_control'] = 'Cache Lese Kontrolle';
$lang['cms_var_md_cache_read_control_explain'] = 'Ein Kontroll-Schl�ssel wird in der Cache Datei hinterlegt';
$lang['cms_var_md_cache_read_type'] = 'Cache Lese Kontroll Art';
$lang['cms_var_md_cache_read_type_explain'] = 'Art der Lese-Kontrolle (nur wenn Lese-Kontrolle aktiviert ist)';
$lang['cms_var_md_cache_filename_protect'] = 'Cache Dateinamen Schutz';
$lang['cms_var_md_cache_filename_protect_explain'] = 'Verschl�sselt Cache Datei Namen f�r h�here Sicherheit';
$lang['cms_var_md_cache_serialize'] = 'Cache Automatische Anordnung';
$lang['cms_var_md_cache_serialize_explain'] = 'Aktiviert / Deaktiviert automatische Anordnung';
//$lang['cms_var_'] = '';

$lang['CMS_Config_updated'] = 'Konfigurations-Update erfolgreich';
$lang['CMS_Click_return_config'] = 'Klicke %shier%s um zu den Einstellungen zur�ckzukehren';
$lang['CMS_Click_return_cms'] = 'Klicke %shier%s um zur CMS-Verwaltung zur�ckzukehren';
$lang['CMS_Title'] = 'CMS';
$lang['CMS_Management'] = 'CMS-Verwaltung';
$lang['CMS_Config'] = 'CMS Konfiguration';
$lang['CMS_Guest'] = 'Gast';
$lang['CMS_Reg'] = 'Registrierte';
$lang['CMS_VIP'] = 'VIP';
$lang['CMS_Publisher'] = 'Ver�ffentlicher';
$lang['CMS_Reviewer'] = 'Reviewer';
$lang['CMS_Content_Manager'] = 'Inhalts-Manager';
$lang['CMS_ACP'] = 'Bearbeite diese Seite';
$lang['CMS_Pages'] = 'Site Pages';
$lang['CMS_ID'] = 'ID';
$lang['CMS_Actions'] = 'Aktionen';
$lang['CMS_Layout'] = 'Layout';
$lang['CMS_Blocks'] = 'Blocks';
$lang['CMS_Name'] = 'Name';
$lang['CMS_Description'] = 'Beschreibung';
$lang['CMS_Filename'] = 'Dateiname';
$lang['CMS_Filename_Explain'] = '<i>(Um eine neue Datei zu erstellen mu� dein Server richtig konfiguriert sein. Sonst wird dieses Feature nicht unterst�tzt.)</i>';
$lang['CMS_Filename_Explain_OK'] = '<i>Nach einem schnellen Test scheint es, dass dein Server die automatische Datei-Erstellung erlaubt. Darum sollte die Datei automatisch erstellt werden.</i>';
$lang['CMS_Filename_Explain_NO'] = '<i>Nach einem schnellen Test scheint es, dass dein Server die automatische Datei-Erstellung <b>NICHT ERLAUBT</b>. Wenn du eine neue Datei mit einem neuen Namen erstellen m�chtest, solltest du deshalb die Datei von Hand erstellen (kopiere die <b>index_empty.php</b> auf deinen Server und benenne sie, wie gew�nscht, um). Alternativ kannst du die richtigen Berechtigungen f�r dein Stammverzeichnis (root) setzen, so dass das Verfahren automatisch ausgef�hrt werden kann.</i>';
$lang['CMS_Template'] = 'Template';
$lang['CMS_FileAlreadyExists'] = 'Die Datei die du gerade versuchst zu erstellen existiert bereits. Bitte w�hle einen anderen Dateinamen.';
$lang['CMS_FileCreationSuccess'] = 'Die neue Seite wurde automatisch erstellt.';
$lang['CMS_FileCreationError'] = 'Die Datei konnte nicht erstellt werden.';
$lang['CMS_FileCreationManual'] = 'Bitte erstelle eine Kopie der index_empty.php und gib ihr den Namen den du f�r die neue Seite verwendet hast. Lade die Datei in dein Stammverzeichnis (root).';
$lang['CMS_Permissions'] = 'Befugnisse';
$lang['CMS_Global_Header'] = 'Global Header';
$lang['CMS_Global_Blocks'] = 'Globale Bl�cke';
$lang['CMS_Edit'] = 'Bearbeiten';
$lang['CMS_Delete'] = 'L�schen';
$lang['CMS_Preview'] = 'Vorschau';
$lang['CMS_Configure_Blocks'] = 'Bl�cke einstellen';
$lang['CMS_Page_Permissions'] = 'Seiten-Berechtigung';
$lang['CMS_Page_Permissions_Explain'] = 'Auf dieser Seite kannst du das Benutzer-Level einstellen, das f�r die Seite erforderlich ist. Au�erdem kannst du f�r jede Seite ausw�hlen, ob der Block global angezeigt wird oder nicht (um dieses Feature nutzen zu k�nnen, mu� "Globale Bl�cke" in der <b>CMS Konfiguration</b>) aktiviert sein.';
$lang['CMS_Page'] = 'Seite';
//$lang['CMS_'] = '';
// MG CMS - END

// MG CMS MENU - BEGIN
$lang['CMS_Menu_Page'] = 'Dynamisches Menue';
$lang['CMS_Menu_Page_Explain'] = 'Auf dieser Seite kannst du benutzerdefinierte Menues erstellen, um sie dann auf den CMS Seiten als Block anzuzeigen. Wenn du eine Kategorie oder Link erstellst, kannst du die Sprachschl�ssel verwenden oder einen eigenen Namen. Du kannst auch das Berechtigungs-Level ausw�hlen, das zum Aufrufen eines Links ben�tigt wird und ob der Link im selben oder einem Neuen Fenster ge�ffnet werden soll.';

$lang['CMS_Menu_New_Menu'] = 'Erstelle ein neues Menue mlock';
$lang['CMS_Menu_New_cat'] = 'Erstelle eine neue Kategorie';
$lang['CMS_Menu_New_link'] = 'Erstelle einen neuen Link';
$lang['CMS_Menu_Edit_menu_links_button'] = 'Bearbeite Links in diesem Menue';
$lang['CMS_Menu_Edit_cat_button'] = 'Bearbeite Kategorie';
$lang['CMS_Menu_Edit_link_button'] = 'Bearbeite Link';
$lang['CMS_Menu_Set_auth'] = 'Berechtigung';
$lang['CMS_Menu_New_menu_name'] = 'Menue-Name';
$lang['CMS_Menu_New_cat_name'] = 'Kategorie-Name';
$lang['CMS_Menu_New_link_name'] = 'Link-Name';
$lang['CMS_Menu_Default_link'] = 'Default link (<b>*</b> will be ignored)';
$lang['CMS_Menu_No_default_link'] = 'No default link (Custom settings)';
$lang['CMS_Menu_New_menu_des'] = 'Menue-Beschreibung';
$lang['CMS_Menu_New_cat_des'] = 'Kategorie-Beschreibung';
$lang['CMS_Menu_New_link_des'] = 'Link-Beschreibung';
$lang['CMS_Menu_Choose_cat'] = 'W�hle Kategorie';
$lang['CMS_Menu_Choose_cat_desc'] = 'W�hle die Kategorie wo der Link angezeigt werden soll.';
$lang['CMS_Menu_link_status'] = 'Status';
$lang['CMS_Menu_Icon'] = 'Icon';
$lang['CMS_Menu_No_Icon'] = 'Kein Icon';
$lang['CMS_Menu_Standard_Icon'] = 'Standard Icon';
$lang['CMS_Menu_link_external'] = 'Externer Link';
$lang['CMS_Menu_New_link_name_key'] = 'Sprach-Variable (in der Datei <b>lang_dyn_menu.php</b> bestimmt)';
$lang['CMS_Menu_No_lang_key'] = 'Keine Sprach-Variable (verwende den angegebenen Namen)';
$lang['CMS_Menu_New_link_url'] = 'URL dieses Links';
$lang['CMS_Menu_New_cat_link_url'] = 'URL dieser Kategorie (wenn keine URL angegeben wird, kannst du die Kategorie auf- und zuklappen um die Beitr�ge zu sehen)';
$lang['CMS_Menu_Update'] = 'Update Menu';

$lang['Click_Return_CMS_Menu'] = 'Klicke %shier%s, um zur Menue-Administration zur�ckzukehren';

$lang['Menu_created'] = 'Menue wurde erfolgreich erstellt.';
$lang['Cat_created'] = 'Kategorie erfolgreich erstellt.';
$lang['Link_created'] = 'Link erfolgreich erstellt.';
$lang['Menu_updated'] = 'Menue erfolgreich aktualisiert.';
$lang['Cat_updated'] = 'Kategorie erfolgreich aktualisiert.';
$lang['Link_updated'] = 'Link erfolgreich aktualisiert.';
$lang['Menu_deleted'] = 'Menue erfolgreich gel�scht.';
$lang['Cat_deleted'] = 'Kategorie erfolgreich entfernt.';
$lang['Link_deleted'] = 'Link erfolgreich entfernt.';

$lang['CMS_Menu_Not_Exist'] = 'Dieses Menue existiert nicht.';
$lang['CMS_Menu_Items_Not_Exist'] = 'Dieses Menue hat keine Kategorie. Klicke auf hinzuf�gen, um eine zu erstellen.';
$lang['CMS_Menu_No_Cats_Exist'] = 'Dieser Menue-Block hat keine Kategorie. Bevor du einen Link erstellen kannst, mu�t du eine Kategorie anlegen.';
$lang['CMS_Menu_Item_Not_Exist'] = 'Dieser Menue-Eintrag existiert nicht.';
$lang['CMS_Menu_Item_Add_Edit'] = 'Menue-Eintrag hinzuf�gen/bearbeiten.';
// MG CMS MENU - END

// CMS - ADV - BEGIN
$lang['CMS_ADV'] = 'CMS ADV';
$lang['CMS_LINKS'] = 'Links';
$lang['CMS_SETTINGS'] = 'Settings';
$lang['CMS_ADV_USERSLIST'] = 'CMS Users';
$lang['CMS_ADV_CUSTOM_PAGES'] = 'Light Pages';
$lang['CMS_ADV_DEFAULT_TEMPLATE'] = 'Default';
$lang['CMS_ADV_DEFAULT_TEMPLATE_OPTION'] = '-- Template default --';

$lang['BLOCK_MOVE'] = 'Move Block';
$lang['TURN_ACTIVE'] = 'Enable/Disable Block';
$lang['TURN_BORDER'] = 'Enable/Disable Border';
$lang['TURN_TITLEBAR'] = 'Enable/Disable Title Bar';
$lang['TURN_LOCAL'] = 'Enable/Disable Location Title';
$lang['TURN_BACKGROUND'] = 'Enable/Disable Background';

$lang['BLOCKS_POSITION_SAVE'] = 'Save blocks position';
$lang['BLOCKS_POSITION_UPDATED'] = 'Blocks location successfully updated';

$lang['INVALID_BLOCKS'] = 'Invalid blocks position';
// CMS - ADV - END

?>