<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_xs.php 49 2008-09-15 20:00:00Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Vjacheslav Trushkin (http://www.stsoftware.biz)
* TheSteffen, KugeLSichA, Tom
*
*/

$lang['Extreme_Styles'] = 'eXtreme Styles';
$lang['xs_title'] = 'eXtreme Styles MOD';

$lang['xs_file'] = 'Datei';
$lang['xs_template'] = 'Template';
$lang['xs_id'] = 'ID';
$lang['xs_style'] = 'Style';
$lang['xs_styles'] = 'Styles';
$lang['xs_users'] = 'Benutzer';
$lang['xs_options'] = 'Optionen';
$lang['xs_comment'] = 'Kommentar';
$lang['xs_upload_time'] = 'Upload Zeit';
$lang['xs_select'] = 'Wähle';

$lang['xs_continue'] = 'Weiter';	// button

$lang['xs_click_here_lc'] = 'klicke hier';
$lang['xs_edit_lc'] = 'bearbeiten';

/*
* navigation
*/
$lang['xs_config_shownav'] = array(
	'Konfiguration',
	'Styles installieren',
	'Styles deinstallieren',
	'Standard Style',
	'Cache verwalten',
	'Styles importieren',
	'Styles exportieren',
	'Styles clonen',
	'Styles downloaden',
	'Templates bearbeiten',
	'Styles bearbeiten',
	'Datenbank exportieren',
	'Auf Updates prüfen',
	);

/*
* frame_top.tpl
*/
$lang['xs_menu_lc'] = 'eXtreme Styles MOD Menü';
$lang['xs_support_forum_lc'] = 'Support forum';
$lang['xs_download_styles_lc'] = 'Styles downloaden';
$lang['xs_install_styles_lc'] = 'Styles installieren';

/*
* index.tpl
*/

$lang['xs_main_comment1'] = 'Du befindest Dich im eXtreme Styles MOD Hauptmenu. Es gibt eine Menge Funktionen in diesem Interface, diese Seite versteht sich als eine Übersicht. Unterhalb einer Funktion befindet sich immer eine Kurzanleitung.<br /><br />Achtung: Dieser Mod ersetzt das phpBB Styles Management. Du findest alle Standard phpBB Funktionen in dieser Liste, diese wurden jedoch optimiert und erweitert.<br /><br />Solltest Du irgendwelche Fragen haben dann besuche das <a href="http://www.phpbbstyles.com" target="_blank">Support Forum</a> in dem Du Unterstützung für diesen Mod findest.';
$lang['xs_main_comment2'] = 'Der eXtreme Styles MOD erlaubt dem Admin, komplette Styles in .style Dateien zu speichern. Die Styles werden in einer kleinen komprimierten Datei gespeichert, hierdurch erspart man sich den Ärger viele Dateien hoch/runterladen zu müssen. Die Style Dateien sind komprimiert, hierdurch ist der upload/download wesentlich effizienter als bei normalen Style-Dateien.';
$lang['xs_main_comment3'] = 'Alle Funktionen des phpBB Styles Management sind durch den eXtreme Styles mod ersetzt worden.<br /><br /><a href="{URL}">Klicke hier</a> um zum Menu zu gelangen.';
$lang['xs_main_title'] = 'eXtreme Styles Navigationsmenu';
$lang['xs_menu'] = 'eXtreme Styles Menu';

$lang['xs_manage_styles'] = 'Styles verwalten';
$lang['xs_import_export_styles'] = 'Importiere/Exportiere Styles';
$lang['xs_install_uninstall_styles'] = 'Installiere/Deinstalliere Styles';
$lang['xs_edit_templates'] = 'Templates bearbeiten';
$lang['xs_other_functions'] = 'Sonstige Funktionen';

$lang['xs_configuration'] = 'Konfiguration';
$lang['xs_configuration_explain'] = 'Diese Funktion erlaubt Dir, die eXtreme Styles Konfiguration zu ändern.';
$lang['xs_default_style'] = 'Standard Style';
$lang['xs_default_style_explain'] = 'Diese Funktion erlaubt Dir, den Standard Forum Style zu ändern und Benutzer auf ein anderes Style umzustellen.';
$lang['xs_manage_cache'] = 'Cache verwalten';
$lang['xs_manage_cache_explain'] = 'Diese Funktion erlaubt Dir die Verwaltung der Cache-Dateien.';
$lang['xs_import_styles'] = 'Styles importieren';
$lang['xs_import_styles_explain'] = 'Diese Funktion erlaubt Dir den Download und die Installation von .style Dateien.';
$lang['xs_export_styles'] = 'Styles exportieren';
$lang['xs_export_styles_explain'] = 'Diese Funktion erlaubt Dir, einen Style Deines Forums als .style Datei zu sichern und diesen dadurch leicht zu einem anderen Forum oder einer anderen Webseite zu transferieren.';
$lang['xs_clone_styles'] = 'Styles clonen';
$lang['xs_clone_styles_explain'] = 'Diese Funktion erlaubt Dir das schnelle clonen eines Styles oder eines ganzen Templates.';
$lang['xs_download_styles'] = 'Styles Download';
$lang['xs_download_styles_explain'] = 'Diese Funktion erlaubt Dir das schnelle downloaden und die Installation von Styles von Webseiten. Du kannst selbst eine Liste mit Webseiten konfigurieren.';
$lang['xs_install_styles'] = 'Styles installieren';
$lang['xs_install_styles_explain'] = 'Diese Funktion erlaubt Dir die Installation von Styles, die Du bereits in Dein Forum hochgeladen hast.';
$lang['xs_uninstall_styles'] = 'Styles deinstallieren';
$lang['xs_uninstall_styles_explain'] = 'Diese Funktion erlaubt Dir, Styles von Deinem Forum zu entfernen.';
$lang['xs_edit_templates_explain'] = 'Diese Funktion erlaubt Dir, tpl Dateien online zu editieren.';
$lang['xs_edit_styles_data'] = 'Styles Daten bearbeiten';
$lang['xs_edit_styles_data_explain'] = 'Diese Funktion erlaubt Dir, Styles Variablen zu bearbeiten. Es wird von einigen Styles verwendet, meist werden jedoch stattdessen css Files verwendet.';
$lang['xs_export_styles_data'] = 'Styles Daten exportieren';
$lang['xs_export_styles_data_explain'] = 'Diese Feature erlaubt Dir, Styles Variablen in die Datei theme_info.cfg zu speichern.';
$lang['xs_check_for_updates'] = 'Prüfe auf Updates';
$lang['xs_check_for_updates_explain'] = 'Diese Funktion erlaubt Dir die Überprüfung auf aktualisierte Versionen von Styles und Mods in Deinem Forum.';

$lang['xs_set_configuration_lc'] = 'Konfiguration ändern';
$lang['xs_set_default_style_lc'] = 'Standard Style ändern';
$lang['xs_manage_cache_lc'] = 'Cache verwalten';
$lang['xs_import_styles_lc'] = 'Styles importieren';
$lang['xs_export_styles_lc'] = 'Styles exportieren';
$lang['xs_clone_styles_lc'] = 'Styles clonen';
$lang['xs_uninstall_styles_lc'] = 'Styles deinstallieren';
$lang['xs_edit_templates_lc'] = 'Templates bearbeiten';
$lang['xs_edit_styles_data_lc'] = 'Styles Daten bearbeiten';
$lang['xs_export_styles_data_lc'] = 'Styles Daten exportieren';
$lang['xs_check_for_updates_lc'] = 'Prüfe auf Updates';

/*
* ftp.tpl, ftp functions
*/

$lang['xs_ftp_comment1'] = 'Um diese Funktion zu nutzen musst Du die Datei Upload Methode auswählen. Wenn Du FTP auswählst, wird ein Passwort nicht gespeichert und eXtreme Styles wird Dich jedesmal nach dem Passwort fragen, wenn ein FTP-Zugriff erfolgt. Wenn Du das lokale Dateisystem auswählst stelle sicher, das für alle erforderlichen Verzeichnisse Schreibrechte existieren.';
$lang['xs_ftp_comment2'] = 'Um Diese Funktion zu benutzen müssen die FTP-Einstellungen gesetzt werden. Wenn Du FTP auswählst, wird ein Passwort nicht gespeichert und eXtreme Styles wird Dich jedesmal nach dem Passwort fragen, wenn ein FTP-Zugriff erfolgt';
$lang['xs_ftp_comment3'] = 'Warnung: FTP Funktionen sind auf diesem Server deaktiviert. Du kannst keine eXtreme Styles Funktionalität verwenden, die FTP Zugriff benötigt.';

$lang['xs_ftp_title'] = 'FTP Konfiguration';

$lang['xs_ftp_explain'] = 'FTP wird verwendet, um neue Styles hochzuladen. Wenn Du die Styles Importieren Funktion verwenden möchtest musst Du vorher die FTP-Einstellungen gemacht haben. eXtreme Styles versucht die Einstellungen soweit möglich automatisch zu erkennen.';

$lang['xs_ftp_error_fatal'] = 'FTP Funktionen sind auf diesem Server deaktiviert. Kann nicht fortsetzen.';
$lang['xs_ftp_error_connect'] = 'FTP Fehler: Kann keine Verbindung aufbauen zu {HOST}';
$lang['xs_ftp_error_login'] = 'FTP Fehler: Kein Login möglich';
$lang['xs_ftp_error_chdir'] = 'FTP Fehler: Kann nicht ins Verzeichnis {DIR} wechseln';
$lang['xs_ftp_error_nonphpbbdir'] = 'FTP Fehler: Du hast ein falsches Verzeichnis eingestellt. In diesem Verzeichnis befinden sich keine phpBB Dateien';
$lang['xs_ftp_error_noconnect'] = 'Kann nicht zum FTP-Server verbinden';
$lang['xs_ftp_error_login2'] = 'Falscher FTP Login oder Passwort';

$lang['xs_ftp_log_disabled'] = 'FTP Funktionen sind auf diesem Server deaktiviert. Script wird nicht fortgesetzt.';
$lang['xs_ftp_log_connecting'] = 'verbinde zu {HOST}';
$lang['xs_ftp_log_noconnect'] = 'kann nicht zu {HOST} verbinden';
$lang['xs_ftp_log_connected'] = 'verbunden. Logge ein...';
$lang['xs_ftp_log_nologin'] = 'kann nicht als {USER} einloggen';
$lang['xs_ftp_log_loggedin'] = 'eingeloggt';
$lang['xs_ftp_log_end'] = 'Scriptausführung beendet';
$lang['xs_ftp_log_nopwd'] = 'Fehler: kann momentanes Verzeichnis nicht lesen';
$lang['xs_ftp_log_nomkdir'] = 'Fehler: Kann Verzeichnis {DIR} nicht erstellen';
$lang['xs_ftp_log_mkdir'] = 'Verzeichnis {DIR} erstellt';
$lang['xs_ftp_log_nochdir'] = 'Fehler: kann nicht ins Verzeichnis {DIR} wechseln';
$lang['xs_ftp_log_normdir'] = 'Fehler: kann Verzeichnis {DIR} nicht entfernen';
$lang['xs_ftp_log_rmdir'] = 'Verzeichnis {DIR} entfernt';
$lang['xs_ftp_log_chdir'] = 'Verzeichnis nach {DIR} gewechselt';
$lang['xs_ftp_log_noupload'] = 'Fehler: kann Datei {FILE} nicht hochladen';
$lang['xs_ftp_log_upload'] = 'Datei {FILE} hochgeladen';
$lang['xs_ftp_log_nochmod'] = 'Warnung: Konnte chmod der Datei {FILE} nicht ändern';
$lang['xs_ftp_log_chmod'] = 'chmod Datei {FILE} in {MODE}';
$lang['xs_ftp_log_invalidcommand'] = 'Fehler: Unbekanntes Kommando: {COMMAND}';
$lang['xs_ftp_log_chdir2'] = 'wechsele momentanes Verzeichnis zurück nach {DIR}';
$lang['xs_ftp_log_nochdir2'] = 'kann Verzeichnis nicht nach {DIR} wechseln';

$lang['xs_ftp_config'] = 'FTP Konfiguration';
$lang['xs_ftp_select_method'] = 'Wähle Upload Methode';
$lang['xs_ftp_select_local'] = 'Verwende lokales Dateisystem (keine Konfiguration notwendig)';
$lang['xs_ftp_select_ftp'] = 'FTP verwenden (FTP-Einstellungen weiter unten einstellen)';

$lang['xs_ftp_settings'] = 'FTP Einstellungen';
$lang['xs_ftp_host'] = 'FTP Host';
$lang['xs_ftp_login'] = 'FTP Login';
$lang['xs_ftp_path'] = 'FTP Pfad zum phpBB';
$lang['xs_ftp_pass'] = 'FTP Passwort';
$lang['xs_ftp_remotedir'] = 'Remote Verzeichnis';

$lang['xs_ftp_host_guess'] = ' (wahrscheinlich "{HOST}" [<a href="javascript: void(0)" onclick="{CLICK}">Host setzen</a>])';
$lang['xs_ftp_login_guess'] = ' (wahrscheinlich "{LOGIN}" [<a href="javascript: void(0)" onclick="{CLICK}">Login setzen</a>])';
$lang['xs_ftp_path_guess'] = ' (wahrscheinlich "{PATH}" [<a href="javascript: void(0)" onclick="{CLICK}">Pfad setzen</a>])';


/*
* config.tpl
*/

$lang['xs_config_updated'] = 'Konfiguration aktualisiert.';
$lang['xs_config_updated_explain'] = 'Du musst diese Seite aktualisieren bevor die Konfiguration übernommen werden kann. <a href="{URL}">Klicke hier</a> um die Seite zu aktualisieren.';
$lang['xs_config_warning'] = 'Achtung: Cache kann nicht geschrieben werden.';
$lang['xs_config_warning_explain'] = 'In das Cache Verzeichnis kann nicht geschrieben werden. eXtreme Styles kann versuchen, dieses Problem zu lösen.<br /><a href="{URL}">Klicke hier</a> um zu versuchen, den Zugriffsmodus für das Cache Verzeichnis zu ändern.<br /><br />Sollte Cache aus irgendwelchen Gründen auf Deinem Server nicht funktionieren...kein Problem, eXtreme Styles<br />beschleunigt die Geschwindigkeit des Forums auch ohne Cache um ein Vielfaches.';

$lang['xs_config_maintitle'] = 'eXtreme Styles mod Konfiguration';
$lang['xs_config_subtitle'] = 'Das ist die Konfiguration von eXtreme Styles. Wenn Du eine Einstellungsmöglichkeit nicht verstehst, ändere sie bitte nicht.';
$lang['xs_config_title'] = 'eXtreme Styles mod v{VERSION} Einstellungen';
$lang['xs_config_cache'] = 'Cache Konfiguration';

$lang['xs_config_navbar'] = 'In linkem Frame anzeigen:';
$lang['xs_config_navbar_explain'] = 'Du kannst auswählen, welche Punkte im linken Frame des Admin Panels angezeigt werden sollen.';

$lang['xs_config_def_template'] = 'Default Template Verzeichnis';
$lang['xs_config_def_template_explain'] = 'Sollte eine benötigte tpl Datei nicht im aktuellen Template Verzeichnis gefunden werden (das könnte passieren, wenn Du phpBB falsch modifiziert hast) dann wird das Template System auch in anderen Verzeichnissen danach suchen (Wenn also Beispielsweise das momentane Template "meinTemplate" heisst und das Script die Datei "meinTemplate/meinedatei.cfg" benötigt und die Datei ist nicht vorhanden, wird das Template System auch nach "subSilver/meineDatei.tpl" suchen). Wenn Du hier nichts einträgst wird diese Funktion deaktiviert.';

$lang['xs_config_check_switches'] = 'Überprüfung beim kompilieren';
$lang['xs_config_check_switches_explain'] = 'Diese Funktion prüft auf Fehler in Templates. Wenn Du es deaktivierst beschleunigst Du die Kompilierung, jedoch könnten Fehler in den Templates übersehen werden.<br /><br />Smart Check wird die Templates auf Fehler überprüfen und alle bekannten Fehler automatisch korrigieren (es gibt einige wenige bekannte Tippfehler in verschiedenen Mods). Ist etwas langsamer als die einfache Überprüfung.<br /><br />Manchmal sieht das Template nur fehlerfrei aus, wenn die Fehlerkorrektur deaktiviert wurde; das passiert bei schlecht programmiertem HTML Code - bitte kontaktiere denjenigen, der das Template geschrieben hat, wenn Du den Fehler nicht selbst korrigieren kannst.<br /><br />Sollte die Cache Funktion deaktiviert sein, dann schalte das hier ab um eine schnellere Kompilierung zu erhalten.';
$lang['xs_config_check_switches_0'] = 'Aus';
$lang['xs_config_check_switches_1'] = 'Smart Check';
$lang['xs_config_check_switches_2'] = 'Einfacher Check';

$lang['xs_config_show_errors'] = 'Zeigt Fehler, wenn Dateien in tpl Dateien falsch included werden';
$lang['xs_config_show_error_explain'] = 'Diese Funktion aktiviert/deaktiviert Fehler in den tpl Dateien &lt;!-- INCLUDE filename --&gt;';

$lang['xs_config_tpl_comments'] = 'Füge tpl Dateinamen in HTML hinzu';
$lang['xs_config_tpl_comments_explain'] = 'Diese Funktion fügt Kommentare zum HTML Code hinzu, die den Style Designern erlaubt zu prüfen, welche tpl Datei angezeigt wird.';

$lang['xs_config_use_cache'] = 'Cache verwenden';
$lang['xs_config_use_cache_explain'] = 'Der Cache wird auf Festplatte geschrieben und beschleunigt das Template System, da hierdurch nicht das Template bei jeder Anzeige neu kompiliert werden muss.';

$lang['xs_config_auto_compile'] = 'Cache automatisch speichern';
$lang['xs_config_auto_compile_explain'] = 'Templates, die noch nicht im Cache existieren, werden bei Aktivierung automatisch ins Cache Verzeichnis gespeichert.';

$lang['xs_config_auto_recompile'] = 'Cache automatisch rekompilieren';
$lang['xs_config_auto_recompile_explain'] = 'Templates, die geändert wurden, werden autmatisch neu kompiliert.';

$lang['xs_config_php'] = 'Datei-Erweiterung der Cache Dateien';
$lang['xs_config_php_explain'] = 'Das ist die Erweiterung der Cache-Dateien. Dateien weren im php Format gespeichert, also ist die Standard Erweiterung "php". Bitte den Punkt nicht miteingeben';

$lang['xs_config_back'] = '<a href="{URL}">Klicke hier</a> um zur Konfiguration zurückzukehren.';
$lang['xs_config_sql_error'] = 'Fehler bei der Aktualisierung der Allgemeinen Konfiguration für {VAR}';

// Debug info
$lang['xs_debug_header'] = 'Debug Info';
$lang['xs_debug_explain'] = 'Das ist die Debug Info. Sie wird verwendet, um Probleme bei der Cache-Konfiguration zu finden/lösen.';
$lang['xs_debug_vars'] = 'Template Variablen';
$lang['xs_debug_tpl_name'] = 'Template Dateiname:';
$lang['xs_debug_cache_filename'] = 'Cache Dateiname:';
$lang['xs_debug_data'] = 'Debug Daten:';

$lang['xs_check_hdr'] = 'Prüfe Cache auf %s';
$lang['xs_check_filename'] = 'Fehler: Falscher Dateiname';
$lang['xs_check_openfile1'] = 'Fehler: Kann Datei "%s" nicht öffnen. Versuche Verzeichnisse zu erstellen...';
$lang['xs_check_openfile2'] = 'Fehler: Konnte die Datei "%s" zum zweiten Mal nicht öffnen. Gebe auf...';
$lang['xs_check_nodir'] = 'Prüfe "%s" - Verzeichnis existiert nicht.';
$lang['xs_check_nodir2'] = 'Fehler: Kann Verzeichnis "%s" nicht erstellen - Du solltest die Befugnisse überprüfen.';
$lang['xs_check_createddir'] = 'Verzeichnis "%s" erstellt';
$lang['xs_check_dir'] = 'Überprüfe "%s" - Verzeichnis existiert.';
$lang['xs_check_ok'] = 'Datei "%s" zum schreiben geöffnet. Scheint alles in Ordnung zu sein.';
$lang['xs_error_demo_edit'] = 'Du kannst keine Datei im Demo-Modus ändern.';
$lang['xs_error_not_installed'] = 'eXtreme Styles mod ist nicht installiert. Du hast vergessen includes/template.php hochzuladen';

/*
* chmod
*/


$lang['xs_chmod'] = 'CHMOD';
$lang['xs_chmod_return'] = '<br /><br /><a href="{URL}">Klicke hier</a> um zur Konfiguration zurückzukehren.';
$lang['xs_chmod_message1'] = 'Konfiguration geändert.';
$lang['xs_chmod_error1'] = 'Kann den Zugriffsmodus des Cache Verzeichnisses nicht ändern';


/*
* default style
*/

$lang['xs_def_title'] = 'Default Style einstellen';
$lang['xs_def_explain'] = 'Diese Funktion erlaubt das schnelle Umschalten des Standard Forum Styles, ebenfalls können hier die Benutzer von einem auf einen anderen Style umgeschaltet werden.';

$lang['xs_styles_set_default'] = 'als Default';
$lang['xs_styles_no_override'] = 'Benutzereinstellungen nicht überschreiben';
$lang['xs_styles_do_override'] = 'Benutzereinstellungen überschreiben';
$lang['xs_styles_switch_all'] = 'alle Benutzer auf diesen Style umschalten';
$lang['xs_styles_switch_all2'] = 'alle Benutzer umschalten auf:';
$lang['xs_styles_defstyle'] = 'Default style';
$lang['xs_styles_available'] = 'Verfügbare Styles';
$lang['xs_styles_make_public'] = 'Style öffentlich machen';
$lang['xs_styles_make_admin'] = 'Style nur für Admins zugänglich machen';
$lang['xs_styles_users'] = 'Benutzerliste';


/*
* cache management
*/

$lang['xs_manage_cache_explain2'] = 'Diese Funktion erlaubt das kompilieren oder entfernen der Cache-Dateien von Styles.';
$lang['xs_clear_all_lc'] = 'alle löschen';
$lang['xs_compile_all_lc'] = 'alle kompilieren';
$lang['xs_clear_cache_lc'] = 'Cache löschen';
$lang['xs_compile_cache_lc'] = 'Cache kompilieren';
$lang['xs_cache_confirm'] = 'Wenn Du viele Styles hast, kann das die Last des Servers deutlich erhöhen. Bist Du sicher, das Du fortfahren möchtest?';

$lang['xs_cache_nowrite'] = 'Fehler: Kein Zugriff auf das Cache Verzeichnis';
$lang['xs_cache_log_deleted'] = '{FILE} gelöscht';
$lang['xs_cache_log_nodelete'] = 'Fehler: Kann Datei {FILE} nicht löschen';
$lang['xs_cache_log_nothing'] = 'Nichts zu löschen für Template {TPL}';
$lang['xs_cache_log_nothing2'] = 'Es gibt nichts zu löschen im Cache Verzeichnis';
$lang['xs_cache_log_count'] = '{NUM} Dateien erfolgreich gelöscht';
$lang['xs_cache_log_count2'] = 'Fehler beim löschen von {NUM} Dateien';
$lang['xs_cache_log_compiled'] = 'Kompiliert: {NUM} Dateien';
$lang['xs_cache_log_errors'] = 'Fehler: {NUM}';
$lang['xs_cache_log_noaccess'] = 'Fehler: Kann nicht auf Verzeichnis {DIR} zugreifen';
$lang['xs_cache_log_compiled2'] = 'Kompiliert: {FILE}';
$lang['xs_cache_log_nocompile'] = 'Fehler beim kompilieren: {FILE}';

/*
* export/import/download/clone
*/

$lang['xs_import_explain'] = 'Diese Funktion erlaubt den Import von Styles. Ebenfalls können Styles automatisch installiert und aktualisiert werden.<br /><br />Achtung: Solltest Du irgendwelche Mods in diesem Forum installiert haben (ausser dem eXtreme Styles Mod) musst Du beim Import von Styles vorsichtig sein, da diese nicht kompatibel mit Deinem Forum sein könnten. Du kannst nur Styles installieren, die die gleichen Modifikationen wie die anderen Styles haben, die Du in Deinem Forum konfiguriert hast.';

$lang['xs_import_lc'] = 'importieren';
$lang['xs_list_files_lc'] = 'Dateien auflisten';
$lang['xs_delete_file_lc'] = 'Datei löschen';
$lang['xs_export_style_lc'] = 'Style exportieren';

$lang['xs_import_no_cached'] = 'Es gibt keine gecachten Styles zum importieren';
$lang['xs_add_styles'] = 'Styles hinzufügen';
$lang['xs_add_styles_web'] = 'Aus dem Web downloaden';
$lang['xs_add_styles_web_get'] = 'Los';
$lang['xs_add_styles_copy'] = 'Von lokaler Datei kopieren';
$lang['xs_add_styles_copy_get'] = 'kopieren';
$lang['xs_add_styles_upload'] = 'Upload vom Computer';
$lang['xs_add_styles_upload_get'] = 'Upload';

$lang['xs_export_style'] = 'Style exportieren';
$lang['xs_export_style_explain'] = 'Diese Funktion ermöglicht den Export eines Styles als eine einzige Datei. Diese Datei ist sehr klein - kleiner als eine .zip Datei (sie wurde mit gzip gepackt, welches besser als zip packt) und alle Styles in einer einzigen Datei. Deswegen ist es sehr einfach, Styles von einem Forum zu einem anderen zu transferieren.<br /><br />Diese Funktion erlaubt ebenfalls den Upload exportierter Styles über FTP auf einen Server. Dieses System ermöglicht den Transfer eines Styles auf ein anderes Forum schnell, ohne manuell kopieren zu müssen.';

$lang['xs_export_style_title'] = 'Template "{TPL}" exportieren';
$lang['xs_export_tpl_name'] = 'Exportieren als (Template Name)';
$lang['xs_export_style_names'] = 'Wähle zu exportierende(n) Style(s)';
$lang['xs_export_style_name'] = 'Zu exportierendes Style (Style Name)';
$lang['xs_export_style_comment'] = 'Kommentar';
$lang['xs_export_where'] = 'Wohin exportieren';
$lang['xs_export_where_download'] = 'Als Datei herunterladen';
$lang['xs_export_where_store'] = 'Als Datei auf dem Server speichern';
$lang['xs_export_where_store_dir'] = 'Verzeichnis';
$lang['xs_export_where_ftp'] = 'Über FTP hochladen';
$lang['xs_export_filename'] = 'Export Dateiname';

$lang['xs_download_explain2'] = 'Diese Funktion erlaubt das schnelle Downloaden von Styles direkt von verschiedenen Webseiten. Klicke auf den Link neben dem Namen der Webseite um zur Style Download Seite weitergeleitet zu werden.<br /><br />Du kannst die Liste der Webseiten auch verwalten.';

$lang['xs_download_locations'] = 'Download Locations';
$lang['xs_edit_link'] = 'Link bearbeiten';
$lang['xs_add_link'] = 'Link hinzufügen';
$lang['xs_link_title'] = 'Link Titel';
$lang['xs_link_url'] = 'Link URL';
$lang['xs_delete'] = 'Löschen';

$lang['xs_style_header_error_file'] = 'Kann lokale Datei nicht öffnen';
$lang['xs_style_header_error_server'] = 'Fehler auf dem Server: ';
$lang['xs_style_header_error_invalid'] = 'Ungültiger Datei Header';
$lang['xs_style_header_error_reason'] = 'Fehler beim lesen des Datei Headers: ';
$lang['xs_style_header_error_incomplete'] = 'Datei ist unvollständig';
$lang['xs_style_header_error_incomplete2'] = 'Falsche Dateigrösse. Datei ist möglicherweise nicht komplett.';
$lang['xs_style_header_error_invalid2'] = 'Falsche Datei. Wahrscheinlich ist die Datei kein eXtreme Styles mod kompatibles Style oder eine ungültige Version.';
$lang['xs_error_cannot_open'] = 'Kann Datei nicht öffnen.';
$lang['xs_error_decompress_style'] = 'Fehler beim auspacken der Datei. Die Datei ist wahrscheinlich fehlerhaft.';
$lang['xs_error_cannot_create_file'] = 'Kann Datei "{FILE}" nicht erstellen';
$lang['xs_error_cannot_create_tmp'] = 'Kann temporäre Datei "{FILE}" nicht erstellen';
$lang['xs_import_invalid_file'] = 'Ungültige Datei';
$lang['xs_import_incomplete_file'] = 'Unvollständige Datei';
$lang['xs_import_uploaded'] = 'Style hochgeladen.';
$lang['xs_import_installed'] = 'Style hochgeladen und installiert.';
$lang['xs_import_notinstall'] = 'Style hochgeladen, jedoch Fehler beim installieren (sql Fehler).';
$lang['xs_import_notinstall2'] = 'Style hochgeladen, jedoch Fehler beim installieren: keine Styles in der theme_info.cfg gefunden';
$lang['xs_import_notinstall3'] = 'Style hochgeladen, jedoch Fehler beim installieren: kein Eintrag für "{STYLE}" in der theme_info.cfg gefunden';
$lang['xs_import_notinstall4'] = 'Style hochgeladen, jedoch Fehler beim installieren: konnte die nächste themes_id Information nicht ermitteln';
$lang['xs_import_notinstall5'] = 'Style hochgeladen, jedoch Fehler beim installieren: konnte die Styles Tabelle nicht aktualisieren';
$lang['xs_import_nodownload'] = 'Kann Style nicht von {URL} downloaden';
$lang['xs_import_nodownload2'] = 'Kann Style nicht von {URL} kopieren';
$lang['xs_import_nodownload3'] = 'Datei nicht hochgeladen.';
$lang['xs_import_uploaded2'] = 'Style heruntergeladen. Du kannst ihn nun importieren.<br /><br /><a href="{URL}">Klicke hier</a> um den Style zu importieren.';
$lang['xs_import_uploaded3'] = 'Style kopiert. Du kannst ihn nun importieren.<br /><br /><a href="{URL}">Klicke hier</a> um den Style zu importieren.';
$lang['xs_import_uploaded4'] = 'Style hochgeladen. Du kannst ihn nun importieren.<br /><br /><a href="{URL}">Klicke hier</a> um den Style zu importieren.';
$lang['xs_export_no_open_dir'] = 'Kann Verzeichnis {DIR} nicht öffnen';
$lang['xs_export_no_open_file'] = 'Kann Datei {FILE} nicht öffnen';
$lang['xs_export_no_read_file'] = 'Fehler beim lesen der Datei {FILE}';
$lang['xs_no_theme_data'] = 'Konnte die Style Daten für das gewählte Template nicht lesen';
$lang['xs_no_style_info'] = 'Konnte die Style Informationen nicht lesen';
$lang['xs_export_noselect_themes'] = 'Du solltest mindestens ein Style auswählen';
$lang['xs_export_error'] = 'Kann Template "{TPL}" nicht exportieren: ';
$lang['xs_export_error2'] = 'Kann Template "{TPL}" nicht exportieren: Style ist leer';
$lang['xs_export_saved'] = 'Style wurde als "{FILE}" gespeichert';
$lang['xs_export_error_uploading'] = 'Fehler beim hochladen der Datei';
$lang['xs_export_uploaded'] = 'Datei hochgeladen.';
$lang['xs_clone_taken'] = 'Der Name des Styles ist bereits in Verwendung.';
$lang['xs_error_new_row'] = 'Konnte die neue Reihe nicht in der Tabelle anlegen.';
$lang['xs_theme_cloned'] = 'Style geclont.';
$lang['xs_invalid_style_name'] = 'Ungültiger Stylename.';
$lang['xs_clone_style_exists'] = 'Dieses Template existiert bereits';
$lang['xs_clone_no_select'] = 'Du solltest mindestens ein Style zum clonen auswählen.';
$lang['xs_no_themes'] = 'Style in der Datenbank nicht gefunden.';

$lang['xs_import_back'] = '<a href="{URL}">Klicke hier</a> um zur Styles Importieren Seite zurückzukehren.';
$lang['xs_import_back_download'] = '<a href="{URL}" target="main">Klicke hier</a> um zu den Downloads zurückzukehren.';
$lang['xs_export_back'] = '<a href="{URL}">Klicke hier</a> um zur Styles exportieren Seite zurückzukehren.';
$lang['xs_clone_back'] = '<a href="{URL}">Klicke hier</a> um zur Styles Clone Seite zurückzukehren.';
$lang['xs_download_back'] = '<a href="{URL}">Klicke hier</a> um zur Downloadseite zurückzukehren.';

$lang['xs_import_tpl'] = 'Importiere Template "{TPL}"';
$lang['xs_import_tpl_comment'] = 'Diese Funktion wird ein Template in Dein Forum hochladen. Sollte ein Template mit diesem Namen bereits in Deinem Forum existieren, wird diese Funktion automatisch die alten Dateien überschreiben, daher kann es auch verwendet werden, um Styles zu aktualisieren.<br /><br />Diese Funktion kann ebenfalls automatisch Styles installieren.';
$lang['xs_import_tpl_filename'] = 'Dateiname:';
$lang['xs_import_tpl_tplname'] = 'Template Name:';
$lang['xs_import_tpl_comment2'] = 'Kommentar:';
$lang['xs_import_select_styles'] = 'Wähle Style(s) die installiert werden sollen:';
$lang['xs_import_install_def_lc'] = 'mache Default Forum Style';
$lang['xs_import_install_style'] = 'Installiere Style:';
$lang['xs_import'] = 'Import';

$lang['xs_import_list_contents'] = 'Inhalt der Datei: ';
$lang['xs_import_list_filename'] = 'Dateiname: ';
$lang['xs_import_list_template'] = 'Template: ';
$lang['xs_import_list_comment'] = 'Kommentar: ';
$lang['xs_import_list_styles'] = 'Style(s): ';
$lang['xs_import_list_files'] = 'Dateien ({NUM}):';
$lang['xs_import_download_lc'] = 'Datei herunterladen';
$lang['xs_import_view_lc'] = 'Datei anzeigen';
$lang['xs_import_file_size'] = '({NUM} bytes)';

$lang['xs_import_nogzip'] = 'Diese Funktion benötigt gz Komprimierung, und diese wird auf diesem Server nicht unterstützt.';
$lang['xs_import_nowrite_cache'] = 'Kann nicht in den Cache schreiben. Diese Funktion benötigt, dass der Cache beschrieben werden kann. Überprüfe die mod Konfiguration.<br /><br /><a href="{URL1}">Klicke hier</a> um den Cache schreibfähig zu machen.<br /><br /><a href="{URL2}">Klicke hier</a> um zur Import Seite zurückzukehren.';

$lang['xs_import_download_warning'] = 'Das führt Dich auf eine externe Webseite, auf der Du Styles mit ein paar wenigen klicks über die eXtreme Styles Import Funktion herunterladen kannst.';

$lang['xs_clone_style'] = 'Style clonen';
$lang['xs_clone_style_explain'] = 'Diese Funktion erlaubt das schnelle clonen von Styles oder ganzen Templates.<br /><br />Achtung: Bitte stelle vor dem kopieren sicher, dass der Autor des Original-Templates das kopieren erlaubt (ausser subSilver, mit dem Du alles machen darfst). In der Regel erlauben die Autoren die Modifizierung der Styles, jedoch sollten diese dann nicht weitergegeben werden.';
$lang['xs_clone_style_explain2'] = 'Diese Funktion erlaubt das Erstellen neuer Styles für ein Template. Die Funktion kopiert keine Dateien sondern fügt für das neue Style Einträge in die Datenbank hinzu. Sowohl das alte als auch das neue Style teilen sich das Template.';
$lang['xs_clone_style_explain3'] = 'Gib den Namen für das neue Style ein und klicke auf den "clonen" Knopf.';
$lang['xs_clone_style_explain4'] = 'Diese Funktion erlaubt das clonen von Templates. Du kannst ebenfalls alle Styles dieses Templates kopieren. Später kannst Du die tpl einfach bearbeiten ohne das alte Template zu beeinflussen.';

$lang['xs_clone_style_lc'] = 'Style clonen';
$lang['xs_clone_style2'] = 'Clone Style "{STYLE}":';
$lang['xs_clone_style3'] = 'Clone Template "{STYLE}"';
$lang['xs_clone_newdir_name'] = 'Neues Template (directory) Name:';
$lang['xs_clone_select'] = 'Wähle Style(s) zum  clonen:';
$lang['xs_clone_select_explain'] = 'Du musst mindestens ein Style auswählen.';
$lang['xs_clone_newname'] = 'Neuer Stylename:';


/*
* install/uninstall
*/
$lang['xs_install_styles_explain2'] = 'Das ist eine Liste der Styles, die ins Forum hochgeladen wurden, die jedoch nicht installiert sind. Klicke auf den "installieren" Link bei dem Style, den Du installieren möchtest, oder wähle mehrere Styles und kliche auf den Absenden Button.';
$lang['xs_uninstall_styles_explain2'] = 'Das ist eine Liste der installierten Styles Deines Forums. Klicke auf den "Deinstallieren" Link um Styles vom Forum zu entfernen. Die Deinstallation ist sicher, da alle Benutzer, die dieses Style bisher eingestellt hatten auf das Standard Style umgeschaltet werden. Ebenfalls wird automatisch der Cache für das entfernte Style gelöscht.';

$lang['xs_install'] = 'Installation';
$lang['xs_install_lc'] = 'installieren';
$lang['xs_uninstall'] = 'Deinstallation';
$lang['xs_remove_files'] = 'Dateien entfernen';
$lang['xs_style_removed'] = 'Style entfernt.';
$lang['xs_uninstall_lc'] = 'deinstallieren';
$lang['xs_uninstall2_lc'] = 'deinstallieren und Dateien löschen';

$lang['xs_install_back'] = '<a href="{URL}">Klicke hier</a> um zur Styles Installation zurückzukehren.';
$lang['xs_uninstall_back'] = '<a href="{URL}">Klicke hier</a> um zur Styles Deinstallation zurückzukehren.';
$lang['xs_goto_default'] = '<a href="{URL}">Klicke hier</a> um den Default Style zu ändern.';

$lang['xs_install_installed'] = 'Style(s) installiert.';
$lang['xs_install_error'] = 'Fehler bei der Installation des Styles.';
$lang['xs_install_none'] = 'Es gibt keine neuen Styles zum installieren. Alle verfügbaren Styles sind bereits installiert.';

$lang['xs_uninstall_default'] = 'DU kannst das Standard-Style nicht entfernen. Um das Standard-Style zu ändern <a href="{URL}">klicke hier</a>.';

/*
* export theme_info.cfg
*/
$lang['xs_export_styles_data_explain2'] = 'Diese Funktion speichert Style Datein in die theme_info.cfg. Es kann verwendet werden, um Datenbankinformationen vor dem Transfer eines Styles von einem Forum auf ein anderes zu sichern.<br /><br />Achtung: Wenn Du die Export Funktion von eXtreme Styles verwendest, um ein Style auf ein anderes Forum zu übertragen brauchst Du die theme_info.cfg nicht speichern - es wird automatisch durch die Style Export Funktion gemacht.';
$lang['xs_export_styles_data_explain3'] = 'Wähle Styles, die Du exportieren möchtest.';

$lang['xs_export_data_back'] = '<a href="{URL}">Klicke hier</a> um zur Style Export Daten Seite zurückzukehren.';
$lang['xs_export_style_data_lc'] = 'Style Daten exportieren';

$lang['xs_export_data_saved'] = 'Daten exportiert.';

/*
* edit templates (file manager)
*/
$lang['xs_edit_template_comment1'] = 'Diese Funktion ermöglicht die Bearbeitung der Templates. Der Dateibrowser zeigt nur Dateien an, die editierbar sind';
$lang['xs_edit_template_comment2'] = 'Diese Funktion ermöglicht die Bearbeitung von Templates.';
$lang['xs_edit_file_saved'] = 'Datei wurde gespeichert.';
$lang['xs_edit_not_found'] = 'Datei nicht gefunden.';
$lang['xs_edittpl_back_dir'] = '<a href="{URL}">Klicke hier</a> um zum Dateimanager zurückzukehren.';

$lang['xs_fileman_browser'] = 'Datei Browser';
$lang['xs_fileman_directory'] = 'Verzeichnis:';
$lang['xs_fileman_dircount'] = 'Verzeichnisse ({COUNT}):';
$lang['xs_fileman_filter'] = 'Filter';
$lang['xs_fileman_filter_ext'] = 'Nur Files mit dieser Erweiterung anzeigen:';
$lang['xs_fileman_filter_content'] = 'Nur Dateien anzeigen, die dieses enthalten:';
$lang['xs_fileman_filter_clear'] = 'Filter löschen';
$lang['xs_fileman_filename'] = 'Dateiname';
$lang['xs_fileman_filesize'] = 'Grösse';
$lang['xs_fileman_filetime'] = 'Modifikationen';
$lang['xs_fileman_options'] = 'Optionen';
$lang['xs_fileman_time_today'] = '(heute)';
$lang['xs_fileman_edit_lc'] = 'bearbeiten';

$lang['xs_fileedit_search_nomatch'] = 'Keine Übereinstimmung gefunden';
$lang['xs_fileedit_search_match1'] = '1 Übereinstimmung ersetzt';
$lang['xs_fileedit_search_matches'] = "Ersetzt ' + zähle + ' Übereinstimmungen";
$lang['xs_fileedit_noundo'] = 'Es gibt nichts, was rückgängig zu machen wäre';
$lang['xs_fileedit_undo_complete'] = 'Alter Inhalt wiederhergestellt';
$lang['xs_fileedit_edit_name'] = 'Datei bearbeiten:';
$lang['xs_fileedit_location'] = 'Ort:';
$lang['xs_fileedit_reload_lc'] = 'Datei aktualisieren';
$lang['xs_fileedit_download_lc'] = 'Datei herunterladen';
$lang['xs_fileedit_trim'] = 'Entferne automatisch Leerzeichen am Anfang und Ende der Datei.';
$lang['xs_fileedit_functions'] = 'Funktionen bearbeiten';
$lang['xs_fileedit_replace1'] = 'Ersetze ';
$lang['xs_fileedit_replace2'] = ' mit ';
$lang['xs_fileedit_replace_first_lc'] = 'Ersetze erste Übereinstimmung';
$lang['xs_fileedit_replace_all_lc'] = 'Ersetze alle Übereinstimmungen';
$lang['xs_fileedit_replace_undo_lc'] = 'Ersetzen rückgängig machen';
$lang['xs_fileedit_backups'] = 'Backups';
$lang['xs_fileedit_backups_save_lc'] = 'Backup sichern';
$lang['xs_fileedit_backups_show_lc'] = 'zeige Inhalt';
$lang['xs_fileedit_backups_restore_lc'] = 'wiederherstellen';
$lang['xs_fileedit_backups_download_lc'] = 'download';
$lang['xs_fileedit_backups_delete_lc'] = 'löschen';
$lang['xs_fileedit_upload'] = 'Upload';
$lang['xs_fileedit_upload_file'] = 'Datei hochladen:';

/*
* edit styles data (theme_info)
*/
$lang['xs_data_head_stylesheet'] = 'CSS Stylesheet';
$lang['xs_data_body_background'] = 'Hintergundbild';
$lang['xs_data_body_bgcolor'] = 'Hintergrundfarbe';
$lang['xs_data_style_name'] = 'Style Name';
$lang['xs_data_body_link'] = 'Linkfarbe';
$lang['xs_data_body_text'] = 'Textfarbe';
$lang['xs_data_body_vlink'] = 'Farbe der besuchten Links';
$lang['xs_data_body_alink'] = 'Farbe der aktiven Links';
$lang['xs_data_body_hlink'] = 'Farbe der Hoverlinks';
$lang['xs_data_tr_color'] = 'Farbe der Tabellenreihe %s';
$lang['xs_data_tr_class'] = 'Klasse der Tabellenreihe %s';
$lang['xs_data_th_color'] = 'Farbe des Tabellenkopfs %s';
$lang['xs_data_th_class'] = 'Klasse des Tabellenkopfs %s';
$lang['xs_data_td_color'] = 'Zellenfarbe der Tabellen %s';
$lang['xs_data_td_class'] = 'Zellenklasse der Tabellen %s';
$lang['xs_data_fontface'] = 'Schriftart %s';
$lang['xs_data_fontsize'] = 'Schriftgrösse %s';
$lang['xs_data_fontcolor'] = 'Schriftfarbe %s';
$lang['xs_data_span_class'] = 'Span Class %s';
$lang['xs_data_img_size_poll'] = 'Polling-Bild Grösse [px]';
$lang['xs_data_img_size_privmsg'] = 'Private Nachrichten Status Grösse [px]';
$lang['xs_data_theme_public'] = 'Öffentliches Style (1 oder 0)';
$lang['xs_data_unknown'] = 'Beschreibung nicht verfügbar (%s)';

$lang['xs_edittpl_error_updating'] = 'Fehler bei der Aktualisierung des Styles.';
$lang['xs_edittpl_style_updated'] = 'Style aktualisiert.';
$lang['xs_invalid_style_id'] = 'Falsche Style ID.';

$lang['xs_edittpl_back_edit'] = '<a href="{URL}">Klicke hier</a> um zur Bearbeitung zurückzukehren.';
$lang['xs_edittpl_back_list'] = '<a href="{URL}">Klicke hier</a> um zur Liste der Styles zurückzukehren.';

$lang['xs_editdata_explain'] = 'Diese Funktion erlaubt die Bearbeitung von Datenbankwerten der installierten Styles. Einige Styles ignorieren die Datenbank-Einträge und verwenden stattdessen css Dateien, einige andere verwenden nur einige der Datenbankeinträge.';
$lang['xs_editdata_var'] = 'Variable';
$lang['xs_editdata_value'] = 'Wert';
$lang['xs_editdata_comment'] = 'Kommentar';

/*
* updates
*/

$lang['xs_updates'] = 'Updates';
$lang['xs_updates_comment'] = 'Diese Funktion prüft auf Updates einiger Styles und Mods. Es funktioniert dort, wo die notwendigen Update Informationen vorhanden sind.';
$lang['xs_updates_comment2'] = 'Ergebnis der Versionsprüfung.';
$lang['xs_update_total1'] = 'Gesamt: {NUM}';
$lang['xs_update_info1'] = 'Diese Administrationsfunktion prüft auf vorhandene Updates für phpBB, einige Mods, und einige Styles, die in Deinem Forum installiert sind. Sollten verfügbare Updates gefunden werden, werden diese mit dem entsprechenden Download-Link angezeigt.<br /><br />Diese Funktion benötigt \'Sockets\' aktiviert. Die meisten freien Webhoster (z.B. Lycos) bieten dieses Feature nicht an, sollte dieses Forum also auf einem freien Webhost laufen, kann diese Funktion nicht benutzt werden, auf einem normalen Server sollte es hingegen keine Probleme geben.<br /><br />Wenn Du auf "Weiter" klickst wird das Script die Software des Forums prüfen. Sollte Deine Webseite langsam sein, wird dies einige Zeit in Anspruch nehmen. Bitte bewahre die Ruhe und klicke nicht auf "Stop" im Browser, wenn es Verzögerungen gibt. Sollte der Server oder die Webseite langsam sein könnte es sein, das das Script in einen Timeout läuft. Sollte das passieren, musst Du den Timeout-Wert erhöhen.';
$lang['xs_update_name'] = 'Name';
$lang['xs_update_type'] = 'Typ';
$lang['xs_update_current_version'] = 'Deine Version';
$lang['xs_update_latest_version'] = 'Letzte Version';
$lang['xs_update_downloadinfo'] = 'Download URL';
$lang['xs_update_timeout'] = 'Timeout für Update Script (Sekunden):';
$lang['xs_update_continue'] = 'Weiter';


$lang['xs_update_total2'] = 'Fehler: {NUM}';
$lang['xs_update_total3'] = 'Updates verfügbar: {NUM}';
$lang['xs_update_select1'] = 'Wähle die zu aktualisierenden Punkte';
$lang['xs_update_types'] = array(
		0 => 'Unbekannt',
		1 => 'Style',
		2 => 'Mod',
		3 => 'phpBB'
		4 => 'Icy Phoenix'
		);
$lang['xs_update_fileinfo'] = 'Weitere Info';
$lang['xs_update_nothing'] = 'Es gibt kein Update.';
$lang['xs_update_noupdate'] = 'Du verwendest bereits die aktuelle Version.';

$lang['xs_update_error_url'] = 'Fehler: Konnte URL %s nicht laden';
$lang['xs_update_error_noitem'] = 'Fehler: Keine Update Information verfügbar';
$lang['xs_update_error_noconnect'] = 'Fehler: Konnte nicht mit dem Update Server verbinden';

$lang['xs_update_download'] = 'Download';
$lang['xs_update_downloadinfo2'] = 'Download/Info';
$lang['xs_update_info'] = 'Webseite';

$lang['xs_permission_denied'] = 'Zugriff verweigert';

$lang['xs_download_lc'] = 'Download';
$lang['xs_info_lc'] = 'Info';

/*
* style configuration
*/
$lang['Template_Config'] = 'Template Konfig';
$lang['xs_style_configuration'] = 'Template Konfiguration';

?>