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
* (c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* (c) hotschi / demolition fabi / oxpus
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
/*
* mod version string
*/
	'Dl_mod_version' => 'Download MOD v%s&nbsp;&copy;(c) 2002 - 2007 by Hotschi, Demolition Fabi, OXPUS',

/*
* general messages after successfull data managements
*/
	'Click_return_categoryadmin' => 'Klicke %shier%s, um zur Kategorie Administration zur�ckzukehren.',
	'Click_return_dl_config' => 'Klicke %shier%s, um zur Download Konfiguration zur�ckzukehren.',
	'Click_return_downloadadmin' => 'Klicke %shier%s, um zur Download Administration zur�ckzukehren.',
	'Click_return_downloads' => 'Klicke %shier%s, um zu den Downloads Kategorien zur�ckzukehren.',
	'Click_return_download_details' => 'Klicke %shier%s, um zum Download zur�ckzukehren.',
	'Click_return_file_management' => 'Klicke %shier%s, um zur Dateiverwaltung zur�ckzukehren.',
	'Click_return_modcp_approve' => 'Klicke %shier%s, um zu den freizugebenden Downloads zur�ckzukehren.',
	'Click_return_modcp_manage' => 'Klicke %shier%s, um zum Moderator Panel zur�ckzukehren.',
	'Click_return_user_traffic_admin' => 'Klicke %shier%s, um den Traffic eines weiteren Benutzers zu ver�ndern.',
	'Click_return_usergroup_traffic_admin' => 'Klicke %shier%s, um den Traffic einer weiteren Benutzergruppe zu ver�ndern.',

/*
* message strings
*/
	'Dl_category_added' => 'Kategorie hinzugef�gt',
	'Dl_category_updated' => 'Kategorie aktualisiert',
	'Dl_category_removed' => 'Kategorie erfolgreich entfernt',
	'DL_upload_error' => 'Fehler beim Hochladen dieser Datei. Bitte gehe zur�ck und versuche es erneut.<br />Kontaktiere den Admin, wenn der Fehler weiterhin existiert.',
	'Dl_approve_overview' => 'Es sind %s Downloads freizugeben. Klicke hier, um diese zu pr�fen.',
	'Dl_approve_overview_one' => 'Es ist %s Download freizugeben. Klicke hier, um diesen zu pr�fen.',
	'Dl_config_updated' => 'Downloadkonfiguration erfolgreich gespeichert.',
	'Dl_confirm_cat_delete' => 'Willst du die Kategorie <b>%s</b> wirklich l�schen?',
	'Dl_confirm_delete_multiple_files' => 'Willst du wirklich diese <b>%d Downloads</b> l�schen?',
	'Dl_confirm_delete_single_file' => 'Willst du wirklich den Download <b>%s</b> l�schen?',
	'Dl_delete_cat_and_files' => 'L�sche diese Kategorie und alle Downloads',
	'Dl_delete_cat_confirm' => 'W�hle eine Kategorie in die alle Downloads verschoben werden sollen oder benutze eine andere Aktion',
	'Dl_delete_cat_only' => 'L�sche nur diese Kategorie',
	'Dl_delete_file_confirm' => 'L�sche auch die Datei(en)',
	'Dl_empty_category' => 'Diese Kategorie beinhaltet keine Downloads',
	'Dl_no_access' => 'Zugriff verweigert!<br /><br />Du hast keine Rechte, diese Datei herunterzuladen!',
	'Dl_no_category' => 'Es existiert noch keine Kategorie. Lege erst eine Kategorie an, bevor du Befugnisse einstellst.',
	'Dl_no_category_index' => 'Dieser Downloadbereich besitzt keine Kategorien',
	'Dl_no_external_url' => 'Du musst eine g�ltige URL angeben, wenn du einen externen Download eintragen willst!!',
	'Dl_no_filename_entered' => 'Du musst eine Datei ausw�hlen, wenn du sie hochladen willst!',
	'Dl_no_groups_for_traffic' => 'Keine Benutzergruppen gefunden!!!<br /><br />F�ge erst eine Benutzergruppe hinzu bevor du ihr Traffic zuweist',
	'Dl_no_more_remain_traffic' => 'Der Traffic f�r Downloads von %s ist diesen Monat verbraucht worden. Warte bitte bis zum n�chsten Monat oder frage einen Administrator.',
	'Dl_no_permission' => 'Zugriff verweigert!<br /><br />Du hast keine Rechte, dieses zu tun!',
	'Dl_no_upload_traffic' => 'Sorry, kein Upload Traffic �brig. Bitte kontaktiere den Admin, wenn du diese Datei hochladen m�chtest',
	'Dl_path_not_exist' => 'Der Kategoriepfad <b>%s</b> existiert nicht!<br />Gehe zur�ck und gib einen anderen Pfad ein<br />oder lege den Ordner mit der Dateiverwaltung an.',
	'Dl_permission_updated' => 'Download Berechtigungen erfolgreich gespeichert',
	'Dl_user_config_saved' => 'Benutzerkonfiguration f�r Downloads erfolgreich aktualisiert<br /><br />Klicke %shier%s, um zu den Downloads zur�ckzukehren.',
	'Download_added' => 'Der Download wurde hinzugef�gt',
	'Download_removed' => 'Der Download wurde gel�scht',
	'Download_updated' => 'Die Informationen des Downloads wurden aktualisiert',
	'New_download' => 'Es ist ein Download neu hochgeladen oder aktualisiert worden.<br />Klicke %shier%s, um zu den Downloads zu gehen.',
	'Dl_confirm_cat_stats_delete' => 'Bist du sicher, die Statistikdaten der Kategorie <b>%s</b> zu l�schen?',
	'Dl_confirm_all_stats_delete' => 'Bist du sicher, alle Statistikdaten zu l�schen?',
	'Dl_confirm_cat_comments_delete' => 'Bist du sicher, die Kommentare der Kategorie <b>%s</b> zu l�schen?',
	'Dl_confirm_all_comments_delete' => 'Bist du sicher, alle Kommentare zu l�schen?',
	'Dl_file_not_found' => '<b>Datei %s nicht gefunden!</b><br /><br />Stelle sicher, da� diese Datei im Ordner %s existiert!',
	'Dl_no_change_edit_time' => 'Update nicht protokolieren',
	'Dl_thumb_upload' => 'Thumbnail erfolgreich hochgeladen',
	'Dl_thumb_del' => 'Thumbnail erfolgreich gel�scht',
	'Dl_thumb_to_big' => 'Das Thumbnail ist zu gro�!<br />Bitte verwende eine kleinere Datei oder ein Bild mit kleineren Abma�en.<br />Benutze den Zur�ck-Button deines Browsers, um den Upload erneut durchzuf�hren.',
	'Dl_hotlink_permission' => 'Du bist nicht berechtigt, diese Datei mittels Link direkt herunterzuladen!',
	'Dl_vc_permission' => 'Der Best�tigungscode f�r diesen Download war nicht korrekt. Bitte kehre zur�ck und versuche es erneut.',
	'Dl_report_broken_vc_mismatch' => 'Der Best�tigungscode f�r diese Meldung war nicht korrekt. Bitte kehre zur�ck und versuche es erneut.',
	'Dl_vc_not_found' => 'Der Best�tigungscode kann nicht gefunden werden. Bitte kehre zur�ck und versuche es erneut.',

/*
* page descriptions
*/
	'Dl_page_dl_hackslist' => 'Hacksliste',
	'Dl_page_downloads' => 'Downloads',

/*
* commands
*/
	'Add_new_download' => 'Neuen Download hinzuf�gen',
	'Dl_add' => 'Addieren',
	'Dl_add_category' =>'Erstelle Kategorie',
	'Dl_approve' => 'Freigeben',
	'Dl_check_file_sizes' => 'Pr�fe Dateigr��en',
	'Dl_check_thumbnails' => 'Pr�fe Thumbnails',
	'Dl_delete' => 'L�schen',
	'Dl_down' => 'runter',
	'Dl_edit' => 'Bearbeiten',
	'Dl_go' => 'Los',
	'Dl_klick_to_rate' => 'Bewerten',
	'Dl_lock' => 'Sperren',
	'Dl_mark_all' => 'Alle markieren',
	'Dl_move' => 'Verschieben nach',
	'Dl_set' => 'Setzen',
	'Dl_unmark' => 'Alle Markierungen aufheben',
	'Dl_up' => 'hoch',
	'Dl_delete_cat' => 'L�sche Kategorie',
	'Dl_stats_delete' => 'L�sche Statistik',
	'Dl_stats_delete_all' => 'L�sche alle Statistiken',
	'Dl_comments_delete' => 'L�sche Kommentare',
	'Dl_comments_delete_all' => 'L�sche alle Kommentare',
	'Dl_sub_sort_asc' => 'Eintr�ge dieser Kategorie aufsteigend sortieren',
	'Dl_sub_sort_asc_zero' => 'Hauptkategorien aufsteigend sortieren',

/*
* categories related
*/
	'Dl_cat_description' => 'Kategorien Beschreibung',
	'Dl_cat_files' => 'Dateien',
	'Dl_cat_index' =>'Oberste Ebene',
	'Dl_cat_name' => 'Kategorie',
	'Dl_cat_parent' => '�bergeordnete Kategorie',
	'Dl_cat_path' =>'Pfad',
	'Dl_cat_title' => 'Downloads Kategorien',
	'Dl_choose_category' => 'W�hle eine Kategorie',
	'Dl_mod_desc_allow' => 'Erlaube Detail-Beschreibungen zu Modifikationen',
	'Dl_must_approve' => 'Uploads in dieser Kategorie m�ssen freigegeben werden',
	'Dl_statistics' => 'Aktiviere detaillierte Statistiken',
	'Dl_stats_prune' => 'Prune statistische Daten',
	'Dl_stats_delete' => 'L�sche Statistik',
	'Dl_stats_delete_all' => 'L�sche alle Statistiken',
	'Dl_comments_delete' => 'L�sche Kommentare',
	'Dl_comments_delete_all' => 'L�sche alle Kommentare',
	'Dl_cat_traffic' => 'Trafficgrenze (aktuell verf�gbar: %s)',
	'Dl_cat_traffic_off' => 'Trafficgrenze (aktuell aus)',
	'Dl_cat_traffic_main' => 'Noch %s Traffic in dieser Kategorie verf�gbar',
	'Dl_thumb_cat' => 'Erlaube Thumbnails',
	'Dl_approve_comments' => 'Neue Kommentare freigeben',
	'Dl_cat_rules' => 'Regeln',

/*
* traffic related
*/
	'Dl_auto_traffic' => 'Automatischer Download-Traffic',
	'Dl_enable_post_traffic' => 'Aktiviere Trafficzuschlag durch Posten',
	'Dl_group_auto_traffic' => 'Traffic f�r Gruppen',
	'Dl_newtopic_traffic' => 'Download Traffic f�r jedes neue Topic',
	'Dl_overall_traffic' => 'Gesamttraffic �ber alle Dateien je Monat',
	'Dl_remain_overall_traffic' => 'Verbleibender Gesamttraffic in diesem Monat: ',
	'Dl_reply_traffic' => 'Download Traffic f�r jede Antwort oder jedes Zitat',
	'Dl_traffic' => 'Max. Traffic',
	'Dl_user_auto_traffic' => 'Traffic f�r Benutzer',
	'Single_user_traffic_title' => 'Traffic f�r einen Benutzer',
	'Traffic' => 'Traffic',
	'Traffic_now' => 'Derzeit auf dem Konto',
	'Usergroup_traffic_title' => 'Traffic f�r Mitglieder einer Benutzergruppe',
	'Users_traffic_title' => 'Traffic f�r alle Benutzer',
	'Dl_user_traffic_once' => 'Traffic je Download nur einmal vom Benutzerkonto abziehen',
	'Dl_can_download_traffic' => 'Du hast diese Datei bereits heruntergeladen.<br />Der Administrator erlaubt Dir ein erneutes Herunterladen ohne daf�r Traffic zu bezahlen.',
	'Dl_can_download_traffic_footer' => '<b>Der Administrator erlaubt dir zurzeit alle Dateien, die du bereits heruntergeladen hast, nochmal zu laden, ohne daf�r Traffic zu bezahlen.</b><br /><br />',
	'Traffic_all_users_admin_explain' => 'Traffic f�r alle Benutzer hinzugef�gen oder setzen',
	'Traffic_single_user_admin_explain' => 'Traffic f�r einen Benutzer hinzugef�gen oder setzen',
	'Traffic_usergroup_admin_explain' => 'Traffic f�r alle Benutzer einer Gruppe hinzugef�gen oder setzen',
	'Dl_auto_traffic_explain' => 'H�he des Traffic festlegen, den Benutzer oder Mitglieder von Benutzergruppen jeden Monat f�r Downloads erhalten',

/*
* auth values
*/
	'Dl_permissions_all' => 'Berechtigungen f�r alle Benutzer',
	'Dl_auth_dl' => 'Download',
	'Dl_auth_mod' => 'Moderation',
	'Dl_auth_up' => 'Upload',
	'Dl_auth_view' => 'Ansicht',
	'Dl_permissions' => 'Berechtigungen f�r Mitglieder nachfolgender Benutzergruppen',
	'Dl_stop_uploads' =>'Uploads deaktivieren',
	'Dl_stat_perm' => 'Zugriff auf Statistikseite ab Benutzerlevel',
	'Dl_stat_perm_all' => 'Jeder',
	'Dl_stat_perm_user' => 'Registrierte Benutzer',
	'Dl_stat_perm_mod' => 'Download Moderatoren',
	'Dl_stat_perm_admin' => 'Board Administratoren',
	'Dl_auth_cread' => 'Kommentare lesen',
	'Dl_auth_cpost' => 'Kommentare schreiben',
	'Dl_perm_all' => 'Jeder',
	'Dl_perm_reg' => 'Reg. Benutzer',
	'Dl_perm_grg' => 'Benutzergruppen',

/*
* hacks and mods related
*/
	'Dl_hack_autor' => 'Autor',
	'Dl_hack_autor_email' => 'Autor E-Mail',
	'Dl_hack_autor_website' => 'Autor Webseite',
	'Dl_hack_dl_url' => 'Alternativer Download',
	'Dl_hack_version' => 'Hack Version',
	'Dl_hacklist' => 'In Hackliste auff�hren',
	'Dl_hacks_list' => 'Hackliste',
	'Dl_mod_desc' => 'Beschreibung der Funktionsweise',
	'Dl_mod_list' => 'Extra Informationen anzeigen',
	'Dl_mod_require' => 'Ben�tigt',
	'Dl_mod_test' => 'Mod getestet auf/mit',
	'Dl_mod_todo' => 'ToDo',
	'Dl_mod_warning' => 'Achtung',

/*
* moderator panel
*/
	'Dl_modcp_approve' => 'Moderator Panel - Downloads freigeben',
	'Dl_modcp_edit' => 'Moderator Panel - Downloads bearbeiten',
	'Dl_modcp_manage' => 'Moderator Panel - Downloads verwalten',
	'Dl_modcp_mod_auth' => 'Du <b>kannst</b> %sdiese Kategorie moderieren%s',

/*
* ACP file management
*/
	'Dl_check_filesizes_result' => 'Alle Dateien sind aktuell und es wurde kein Fehler festgestellt',
	'Dl_check_filesizes_result_error' => 'Die folgenden Dateien konnten nicht gepr�ft werden:',
	'Dl_manage' => 'Datei Toolbox',
	'Dl_manage_content_count' => '%s Eintr�ge',
	'Dl_manage_create_dir' => 'Erstelle diesen Ordner',
	'Dl_manage_empty_folder' => 'Dieses Verzeichnis ist leer...',
	'Dl_manage_explain' => 'Hier kannst du die Dateien der Downloads verwalten. Dir stehen folgende M�glichkeiten zur Verf�gung:<br /><br />- Nicht zugeordnete Dateien l�schen oder verschieben<br />- Zugeordnete Dateien ohne vorhandene Kategorie einer bestehende Kategorie zuordnen<br />- In den Dateien browsen (<i>Standardfunktion nach Aufruf der Verwaltung</i>)<br />- Neue Verzeichnisse anlegen<br />- Leere Verzeichnisse l�schen<br />- Pr�fe die Dateigr��e f�r jeden nicht externen Download<br /><br /><b>Hinweis:</b><br />Dieses Tool dient dabei nicht als Ersatz f�r einen FTP-Client!<br />Funktionen wie Uploads, Dateien immer verschieben k�nnen, Dateien ersetzen, etc. sind daher mit diesem Tool nicht m�glich!',
	'Dl_physical_quota' => 'Physikalisches Limit �ber alle Dateien',
	'Dl_unassigned_files' => 'Pr�fe nicht zugeordnete Downloads',

/*
* statistics
*/
	'Dl_latest_downloads' => 'Letzte Downloads',
	'Dl_latest_uploads' => 'Letzte Uploads',
	'Dl_downloads_cur_month' => 'Downloads aktueller Monat',
	'Dl_downloads_overall' => 'Downloads �ber Alles',
	'Dl_downloads_count' => 'Anzahl Downloads',
	'Dl_downloads_traffic' => 'Download Traffic gesamt',
	'Dl_uploads_count' => 'Anzahl Uploads',
	'Dl_uploads_traffic' => 'Upload Traffic gesamt',
	'Dl_pos' => 'Pos.',
	'Dl_time' => 'Zeit',
	'Dl_stats' => 'Download Statistiken',
	'Dl_direction' => 'Aktion',
	'Dl_browser' => 'Webbrowser',
	'Dl_ip' => 'IP Adresse',
	'Dl_traffic_cur_month' => 'Traffic diesen Monat',
	'Dl_traffic_overall' => 'Traffic �ber Alles',
	'Dl_guest_stat_delete' => 'L�sche alle Daten der G�ste',
	'Dl_no_filter' => '- nicht filtern -',
	'Dl_total_entries' => 'Gefundene Eintr�ge',
	'Dl_filter' => 'Filtern',
	'Dl_filter_string' => 'Verwende * oder % als Platzhalter',
	'Dl_guest_stats_admin' => 'Zeige auch Daten der G�ste',
	'Dl_stat_edit' => 'bearbeitet',

/*
* comments
*/
	'Dl_comment' => 'Kommentar',
	'Dl_comments' => 'Kommentare',
	'Dl_last_comment' => 'Letzter Kommentar',
	'Dl_post_comment' => 'Schreiben',
	'Dl_view_comments' => 'Anzeigen',
	'Dl_comment_edited' => 'Kommentar zuletzt am %s bearbeitet',
	'Dl_comment_write' => 'Einen Kommentar verfassen',
	'Dl_comment_show' => 'Alle Kommentare dieses Downloads anzeigen',
	'Dl_comment_delete' => 'L�schen',
	'Dl_comment_edit' => 'Bearbeiten',
	'Dl_comment_added' => 'Kommentar erfolgreich hinzugef�gt',
	'Dl_comment_updated' => 'Kommentar erfolgreich aktualisiert',
	'Dl_must_be_approve_comment' => 'Dieser Kommentar muss von einem Moderator oder Administrator freigegeben werden!',
	'Dl_approve_overview_one_comment' => 'Es ist 1 freizugebender Kommentar vorhanden. Klicke auf diesen Text, um ihn zu pr�fen.',
	'Dl_approve_overview_comments' => 'Es sind %s freizugebende Kommentare vorhanden. Klicke auf diesen Text, um sie zu pr�fen.',

/*
* ACP management main page
*/
	'Dl_acp_traffic_management' => 'Traffic vorgeben und automatisieren',
	'Dl_acp_categories_management' => 'Kategorien und deren Berechtigungen verwalten',
	'Dl_acp_config_management' => 'Allgemeine Einstellungen anpassen',
	'Dl_acp_files_management' => 'Downloads verwalten',
	'Dl_acp_stats_management' => 'Statistik einsehen und pr�fen',
	'Dl_acp_managemant_page' => 'Download MOD Administration',
	'Dl_acp_managemant_page_explain' => 'Auf dieser Seite erreichst du alle Einstellungen und Funktionen des Download MODs, die zur Verwaltung geh�ren.<br />W�hle eine der unten angef�hrten Funktionen, um die betreffenden Einstellungen vornehmen zu k�nnen.',

/*
* global strings
*/
	'Dl_account' => 'Du hast diesen Monat noch <b>%s</b> Traffic �brig.',
	'Dl_add_user' => 'Dieser Download wurde am <b>%s</b> von <b>%s</b> hinzugef�gt',
	'Dl_all' => 'Alle',
	'Dl_Bytes' => 'B',
	'Dl_Bytes_long' => 'Bytes',
	'Dl_change_user' => ' und zuletzt am <b>%s</b> von <b>%s</b> bearbeitet',
	'Dl_config' => 'Download Konfiguration',
	'Dl_days' => 'Tage',
	'Dl_default_sort' => 'Standardsortierung',
	'Dl_delay_auto_traffic' => 'Verz�gere automatischen Traffic f�r neue Benutzer',
	'Dl_delay_post_traffic' => 'Verz�gere Traffic f�r Beitrage neuer Benutzer',
	'Dl_direct_download' => 'direkt',
	'Dl_detail' => 'Details',
	'Dl_disable_email' => 'Deaktiviere Benachrichtigungen per E-Mail',
	'Dl_disable_popup' => 'Deaktiviere Benachrichtigungen per Popup/Board Nachricht',
	'Dl_disable_email_files' => 'Deaktiviere Benachrichtigungen per E-Mail',
	'Dl_disable_popup_files' => 'Deaktiviere Benachrichtigungen per Popup/Board Nachricht',
	'Dl_download' => 'Download',
	'DL_edit' => 'Aktualisierter Download',
	'DL_edit_time' => 'Tage, die ein ge�nderter Download markiert bleibt',
	'Dl_extern' => 'Extern',
	'Dl_extern_up' => 'Extern',
	'Dl_file_description' => 'Beschreibung',
	'Dl_file_name' => 'Datei',
	'Dl_file_size' => 'Gr��e',
	'Dl_files_title' => 'Files',
	'Dl_files_url' => 'URL',
	'Dl_free' => 'freier Download',
	'Dl_function' => 'Funktion',
	'Dl_GB' => 'GB',
	'Dl_group_name' => 'Gruppen Namen',
	'Dl_guest_stats_show' => 'Zeige G�ste in den detaillierten Kategoriestatistiken',
	'Dl_hotlink_action' => 'Aktion bei direkten Downloadlinks',
	'Dl_hotlink_action_one' => 'weiterleiten zu Details',
	'Dl_hotlink_action_two' => 'Meldung anzeigen',
	'Dl_info' => 'Info',
	'Dl_is_free' => 'frei',
	'Dl_is_free_reg' => 'frei f�r reg. Benutzer',
	'Dl_KB' => 'KB',
	'Dl_klicks' => 'Klicks diesen Monat',
	'Dl_last_time' => ' Letzter Download am <b>%s</b>',
	'Dl_last_time_extern' => ' Letzter Download von externer URL am <b>%s</b>',
	'Dl_limit_desc_on_index' => 'Begrenze die Download-Beschreibung auf dem Index',
	'Dl_Links_per_page' => 'Downloads pro Seite',
	'Dl_MB' => 'MB',
	'Dl_method' => 'Download Methode',
	'Dl_method_new' => 'Neu',
	'Dl_method_old' => 'Alt',
	'Dl_method_quota' => 'Quota f�r Chunked File Read Methode',
	'Dl_modcp_capprove' => 'Kommentare freigeben',
	'Dl_must_be_approved' => 'Dieser Download muss von einem Administrator oder einem Moderator dieser Kategorie freigegeben werden.',
	'Dl_name' => 'Name',
	'DL_new' => 'Neuer Download',
	'DL_new_time' => 'Tage, die ein neuer Download markiert bleibt',
	'Dl_no' => 'Nein',
	'Dl_no_config' => 'Benutzer Konfiguration gesperrt',
	'Dl_no_last_time' => ' Bislang kein Download gez�hlt...',
	'Dl_no_mod_todo' => 'Aktuell keine ToDo\'s',
	'Dl_not_availible' => 'nicht verf�gbar',
	'Dl_order' => 'Sortieren',
	'Dl_overall_klicks' => 'Klicks gesamt',
	'Dl_klicks_total' => 'Klicks',
	'Dl_overview' => '�bersicht �ber alle Downloads',
	'DL_posts' => 'Anzahl Beitr�ge die ein Benutzer braucht, um downloaden zu k�nnen',
	'Dl_prevent_hotlink' => 'Links zum direkten Herunterladen unterbinden',
	'Dl_rating' => 'Bewertung',
	'Dl_real_filetime' => 'Letzte Dateiaktualisierung',
	'Dl_search_author' => 'Nach Benutzern, die Downloads hochgeladen oder ge�ndert haben',
	'Dl_show_footer_legend' => 'Zeige Legende im Download Fu�',
	'Dl_show_footer_stat' => 'Zeige Statistik im Download Fu�',
	'Dl_show_real_filetime' => 'Zeige die Zeit der letzten Dateiaktualisierung in den Downloaddetails',
	'Dl_sort_preform' => 'Sortierung vorgeben',
	'Dl_sort_acp' => 'Voreinstellung',
	'Dl_sort_user' => 'Benutzer',
	'Dl_sort_user_opt' => 'Sortierung der Downloads nach',
	'Dl_sort_user_ext' => 'mit weiteren Auswahlm�glichkeiten',
	'Dl_thumb' => 'Thumbnail',
	'Dl_thumb_dim_size' => 'Das Thumbnail kann bis zu %s x %s Pixel haben und die Datei muss kleiner als %s sein.',
	'Dl_thumb_max_dim' => 'Maximale Thumbnail Abmessungen in Pixels x * y',
	'Dl_thumb_max_size' => 'Maximale Thumbnail Dateigr��e',
	'Dl_total_stat' => 'Es sind insgesamt %s Downloads mit einem Volumen von %s / %s verf�gbar. Darin sind %s externe Downloads enthalten.',
	'Dl_unapproved' => '<br /><span class="gensmall">[ nicht freigegeben ]</span>',
	'Dl_upload' => 'Eine Datei hochladen',
	'Dl_upload_file' => 'Hochladen',
	'Dl_upload_max_filesize' => 'Maximal erlaubte Dateigr��e f�r Uploads: %s',
	'Dl_upload_traffic' => 'Die Gr��e hochgeladener Dateien wird vom Gesamttraffic abgezogen. Bedenke dieses bei der Wahl der Dateigr��e!',
	'Dl_upload_traffic_count' => 'Verringere den Gesamttraffic ebenso f�r Uploads',
	'Dl_use_hacklist' => 'Aktiviere Hacksliste',
	'Dl_users_without_group' => 'Benutzer ohne eine Mitgliedschaft in einer Benutzergruppe',
	'Dl_white_explain' => 'Freier Download f�r registrierte Benutzer ohne Trafficabzug',
	'Dl_yes' => 'Ja',
	'Dl_yes_reg' => 'Ja f�r<br />reg. Benutzer',
	'Download_path' => 'Pfad zu Deinen Downloads, z.B. \'downloads/\'',
	'Downloads' => 'Downloads',
	'Must_select_download' => 'W�hle einen Download aus',
	'Number_recent_dl_on_portal' => 'Anzahl der letzten Downloads auf dem Portal',
	'Recent_downloads' => 'Letzte Downloads',
	'User_allow_fav_download_email' => 'E-Mail bei �nderungen an abonnierten Downloads senden',
	'User_allow_fav_download_popup' => 'Board Nachricht bei �nderungen an abonnierten Downloads anzeigen',
	'User_allow_new_download_email' => 'E-Mail bei neuen Downloads senden',
	'User_allow_new_download_popup' => 'Board Nachricht bei neuen Downloads anzeigen',
	'User_download_email' => 'E-Mail<br />Nachricht',
	'User_download_popup' => 'Board<br />Nachricht',
	'User_download_notify_type' => 'Art der Board Nachricht',
	'User_download_notify_type_popup' => 'Popup',
	'User_download_notify_type_message' => 'Nachricht im Board Kopf',
	'Dl_edit_own_downloads' => 'Benutzer k�nnen eigene Dateien bearbeiten',
	'Dl_report_confirm_code' => 'Bitte gib hier den Best�tigungscode ein, um diesen Download als defekt zu melden:',
	'Dl_shorten_extern_links' => 'K�rze den angezeigten externen Download Link',
	'Dl_physical_quota_explain' => 'Wenn dieses Limit (aktuell %s belegt) erreicht ist, sind weiter Uploads nicht mehr m�glich',
	'Dl_blue_explain' => 'Kein weiterer Gesamttraffic f�r diesen Monat frei!',
	'Dl_blue_explain_file' => 'Kein weiterer Gesamttraffic f�r diesen Monat frei!',
	'Dl_blue_explain_foot' => 'Kein weiterer Traffic f�r Download / Kategorie diesen Monat frei!',
	'Dl_green_explain' => 'Download! Kein Abzug vom Benutzerkonto.',
	'Dl_grey_explain' => 'Download! Externe Quelle. Unabh�ngig vom Benutzerkonto.',
	'Dl_red_explain' => 'Nicht genug Traffic oder Beitr�ge<br />(%s Beitr�ge ben�tigt!).',
	'Dl_red_explain_alt' => 'Nicht genug Traffic oder Beitr�ge (%s Beitr�ge ben�tigt!).',
	'Dl_red_explain_perm' => 'Keine Berechtigungen f�r Downloads!',
	'Dl_yellow_explain' => 'Download! Traffic wird vom Konto abgezogen.',
	'Dl_config_explain' => 'Hier kannst du verschiedene Funktionen des Download Mods ein-/ausschalten und verschiedene Einstellungen vornehmen.',
	'Dl_cat_edit_explain' =>'Hier k�nnen die Kategorien des Download MODs bearbeitet werden.',

/*
* build in add on cash to traffic
*/
	'Dl_cash_to_traffic' => 'Wechsel Cash in Traffic',
	'Dl_cash_to_traffic_explain' => 'Hier kannst du den Wechselkurs zwischen Cash W�hrungen und Download Traffic einstellen. Umgerechnet wird eine volle Einheit der W�hrung in die angegebene Anzahl Traffic.',
	'Dl_cash_currency' => 'Cash W�hrung',
	'Dl_cash_exchange' => 'Wechselkurs: 1 %s in %s Traffic',
	'Dl_cash_current_amount' => 'Du besitzt %s %s',

/*
* new on Download MOD 5.0.10: Blacklist for filetypes
*/
	'Dl_ext_blacklist' => 'Blackliste Dateiendungen',
	'Dl_use_ext_blacklist' => 'Aktiviere Blackliste f�r Dateiendungen',
	'Dl_extention' => 'Neue verbotene Dateiendung',
	'Dl_extentions' => 'Verbotene Dateiendungen',
	'Dl_add_extention' => 'Dateiendung hinzuf�gen',
	'Dl_confirm_delete_extention' => 'Bist du sicher, die Dateiendung <b>%s</b> zu entfernen?',
	'Dl_confirm_delete_extentions' => 'Bist du sicher, die Dateiendungen <b>%s</b> zu entfernen?',
	'Dl_delete_extention_confirm' => 'Dateiendung von Blackliste entfernen',
	'Dl_delete_extentions_confirm' => 'Dateiendungen von Blackliste entfernen',
	'Extention_removed' => 'Dateiendung erfolgreich von der Blackliste entfernt.',
	'Extentions_removed' => 'Dateiendungen erfolgreich von der Blackliste entfernt.',
	'Click_return_extblacklistadmin' => 'Klicke %shier%s, um zur Blackliste f�r Dateiendungen zur�ckzukehren.',
	'Dl_forbidden_extention' => 'Diese Dateiendung ist aktuell nicht erlaubt!<br />Bitte gehe zur�ck und verwende eine andere Dateiform.',
	'Dl_forbidden_ext_explain' => 'Verbotene Dateierweiterungen: %s',
	'Dl_ext_blacklist_explain' => 'Alle hier eingetragenen Dateiendungen sind f�r Uploads mit diesem MOD deaktiviert.<br />Im Administrator Panel werden diese Dateiendungen ebenfalls ber�cksichtigt.<br />Bestehende Downloads sind hiervon nicht betroffen.',

/*
* new on Download MOD 5.0.12: Disable time edit informations
*/
	'Dl_disable_popup_notify' => 'Erlaube, die Bearbeitungszeit beim Bearbeiten eines Downloads zu unterdr�cken',

/*
* new on Download MOD 5.0.15: Banlist and report broken downloads
*/
	'Dl_acp_banlist' => 'Bannliste',
	'Dl_user_id' => 'Benutzer ID',
	'Dl_confirm_delete_ban_values' => 'Bist du sicher, diese Bannlisteneintr�ge zu l�schen?',
	'Dl_banlist_updated' => 'Bannliste erfolgreich aktualisiert',
	'Dl_banned' => 'Du bist gebannt und kannst daher keine Dateien herunterladen!',
	'Click_return_banlistadmin' => 'Klicke %shier%s, um zur Bannliste zur�ckzukehren.',
	'Dl_broken' => 'Melde defekten Download',
	'Dl_broken_mod' => 'Setze defekten Download zur�ck',
	'Dl_broken_cur' => 'Dieser Download ist aktuell als defekt gemeldet',
	'Dl_report_broken' => 'Erlaube das Melden defekter Downloads',
	'Dl_a_guest' => 'ein Gast',
	'Dl_favorite_add' => 'Benachrichtige mich �ber �nderungen an diesen Download',
	'Dl_favorite_drop' => 'Benachrichtigungen �ber diesen Download abstellen',
	'Dl_favorite' => 'Download Favoriten',
	'Dl_acp_banlist_explain' => 'Hiermit kannst du verschiedene Kriterien eintragen, um den Zugriff auf die Downloads zu verhindern.<br />Alle Eintr�ge werden dabei gleichzeitig verwendet, auch dann, wenn sie in einem Datensatz gespeichert sind.',

/*
* new on Download MOD 5.1.0
*/
	'Dl_report_broken_lock' => 'Deaktiviere den Download solange er als defekt gemeldet ist',
	'Dl_report_broken_message' => 'Zeige Hinweis �ber defekten Download nur wenn er auch deaktiviert ist',
	'Dl_report_broken_vc' => 'Aktiviere visuelle Best�tigung, um einen defekten Download zu melden',
	'Dl_visual_confirmation' => 'Aktiviere visuelle Best�tigung, um Dateien herunterzuladen',
	'Dl_off_guests' => 'Nicht f�r G�ste',

/*
* new on Download MOD 5.1.1
*/
	'Dl_icon_free_for_reg' => 'Zeige G�sten das weisse Download Icon',

/*
* new on Download MOD 5.1.3
*/
	'Dl_latest_comments' => 'Zeige die letzten X Kommentare in den Download Details',

/*
* new on Download MOD 5.2.0 - The Bug Tracker !!!!!!!!!!!! -------------  * :-(((((
*/
	'Dl_bug_tracker' => 'Bug Tracker',
	'Dl_bug_tracker_file' => 'f�r diesen Download',
	'Dl_bug_tracker_cat' => 'Aktiviere Bug Tracker',

	'Confirm_delete_bug_report' => 'Bist du sicher, diese Fehlermeldung zu l�schen?',
	'Dl_bug_report_id' => 'Bericht ID',
	'Dl_bug_report_title' => 'Titel des Fehlerberichts',
	'Dl_bug_report_title_details' => 'Fehlerbericht',
	'Dl_bug_report_text' => 'Beschreibung',
	'Dl_bug_report_date' => 'Gemeldet am',
	'Dl_bug_report_php' => 'PHP',
	'Dl_bug_report_db' => 'DB',
	'Dl_bug_report_forum' => 'Forum',
	'Dl_bug_report_file' => 'Download',
	'Dl_bug_report_author' => 'Gemeldet von',
	'Dl_bug_report_assigned' => 'Zugeordnet zu',
	'Dl_bug_report_assign_date' => 'Zugeordnet am',
	'Dl_bug_report_status' => 'Status',
	'Dl_bug_report_status_date' => 'Zeit des letzten Status',
	'Dl_bug_report_detail' => 'Details',
	'Dl_bug_report_history' => 'Historie',
	'Dl_bug_report_reassign' => 'neu zuordnen',
	'Dl_bug_report_assign' => 'zuordnen',
	'Dl_bug_report_unassigned' => 'nicht zugeordnet',
	'Dl_no_bug_tracker' => 'Keine Fehlerberichte gefunden',
	'Dl_bug_report_no_title' => 'Du hast keinen Titel zur Fehlermeldung eingetragen!',
	'Dl_bug_report_no_text' => 'Du hast keine Fehlerbeschreibung angegeben!',
	'Dl_bug_report_added' => 'Fehlerbericht erfolgreich abgesendet',
	'Click_return_bug_tracker' => 'Klicke %shier%s, um zum Bug Tracker zur�ckzukehren.',
	'Dl_bug_report_status_text' => 'Ein wenig Text f�r den neuen Status (wird per E-Mail an den Verfasser diese Fehlermeldung gesendet)',
	'Dl_bug_report_status_update' => 'aktualisiere Status',
	'Dl_filter_bt_own' => 'Zeige meine Meldungen',
	'Dl_filter_bt_assign' => 'Zeige meine Zuordnungen',

	'Dl_user_download_limit_flag' => 'Begrenze die Anzahl der Downloads pro Monat',
	'Dl_user_download_limit' => 'Maximale Anzahl an Downloads pro Monat',
	)
);

$lang['Dl_report_status'][0] = 'neu';
$lang['Dl_report_status'][1] = 'gesehen';
$lang['Dl_report_status'][2] = 'in Arbeit';
$lang['Dl_report_status'][3] = 'zur�ckgestellt';
$lang['Dl_report_status'][4] = 'erledigt';
$lang['Dl_report_status'][5] = 'abgelehnt';
$lang['Dl_bug_report_email_status'] = 'Diese Nachricht wurde f�r den neuen Status hinterlassen:
--------------------
%s
--------------------';

?>