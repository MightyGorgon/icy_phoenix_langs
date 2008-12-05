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
* Vjacheslav Trushkin (http://www.stsoftware.biz)
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
    'Extreme_Styles' => 'eXtreme Styles',
    'xs_title' => 'eXtreme Styles MOD',

    'xs_file' => 'Datei',
    'xs_template' => 'Template',
    'xs_id' => 'ID',
    'xs_style' => 'Style',
    'xs_styles' => 'Styles',
    'xs_users' => 'Benutzer',
    'xs_options' => 'Optionen',
    'xs_comment' => 'Kommentar',
    'xs_upload_time' => 'Upload Zeit',
    'xs_select' => 'W�hle',

    'xs_continue' => 'Weiter',	// button

    'xs_click_here_lc' => 'klicke hier',
    'xs_edit_lc' => 'bearbeiten',

/*
* navigation
*/
    'xs_config_shownav' => array(
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
		'Auf Updates pr�fen',
	),

/*
* frame_top.tpl
*/
    'xs_menu_lc' => 'eXtreme Styles MOD Men�',
    'xs_support_forum_lc' => 'Support forum',
    'xs_download_styles_lc' => 'Styles downloaden',
    'xs_install_styles_lc' => 'Styles installieren',

/*
* index.tpl
*/

    'xs_main_comment1' => 'Du befindest Dich im eXtreme Styles MOD Hauptmenu. Es gibt eine Menge Funktionen in diesem Interface, diese Seite versteht sich als eine �bersicht. Unterhalb einer Funktion befindet sich immer eine Kurzanleitung.<br /><br />Achtung: Dieser Mod ersetzt das Icy Phoenix Styles Management. Du findest alle Standard Icy Phoenix Funktionen in dieser Liste, diese wurden jedoch optimiert und erweitert.<br /><br />Solltest Du irgendwelche Fragen haben dann besuche das <a href="http://www.stsoftware.biz/forum" target="_blank">Support Forum</a> in dem Du Unterst�tzung f�r diesen Mod findest.',
    'xs_main_comment2' => 'Der eXtreme Styles MOD erlaubt dem Admin, komplette Styles in .style Dateien zu speichern. Die Styles werden in einer kleinen komprimierten Datei gespeichert, hierdurch erspart man sich den �rger viele Dateien hoch/runterladen zu m�ssen. Die Style Dateien sind komprimiert, hierdurch ist der upload/download wesentlich effizienter als bei normalen Style-Dateien.',
    'xs_main_comment3' => 'Alle Funktionen des Icy Phoenix Styles Management sind durch den eXtreme Styles mod ersetzt worden.<br /><br /><a href="{URL}">Klicke hier</a> um zum Menu zu gelangen.',
    'xs_main_title' => 'eXtreme Styles Navigationsmenu',
    'xs_menu' => 'eXtreme Styles Menu',

    'xs_manage_styles' => 'Styles verwalten',
    'xs_import_export_styles' => 'Importiere/Exportiere Styles',
    'xs_install_uninstall_styles' => 'Installiere/Deinstalliere Styles',
    'xs_edit_templates' => 'Templates bearbeiten',
    'xs_other_functions' => 'Sonstige Funktionen',

    'xs_configuration' => 'Konfiguration',
    'xs_configuration_explain' => 'Diese Funktion erlaubt Dir, die eXtreme Styles Konfiguration zu �ndern.',
    'xs_default_style' => 'Standard Style',
    'xs_default_style_explain' => 'Diese Funktion erlaubt Dir, den Standard Forum Style zu �ndern und Benutzer auf ein anderes Style umzustellen.',
    'xs_manage_cache' => 'Cache verwalten',
    'xs_manage_cache_explain' => 'Diese Funktion erlaubt Dir die Verwaltung der Cache-Dateien.',
    'xs_import_styles' => 'Styles importieren',
    'xs_import_styles_explain' => 'Diese Funktion erlaubt Dir den Download und die Installation von .style Dateien.',
    'xs_export_styles' => 'Styles exportieren',
    'xs_export_styles_explain' => 'Diese Funktion erlaubt Dir, einen Style Deines Forums als .style Datei zu sichern und diesen dadurch leicht zu einem anderen Forum oder einer anderen Webseite zu transferieren.',
    'xs_clone_styles' => 'Styles clonen',
    'xs_clone_styles_explain' => 'Diese Funktion erlaubt Dir das schnelle clonen eines Styles oder eines ganzen Templates.',
    'xs_download_styles' => 'Styles Download',
    'xs_download_styles_explain' => 'Diese Funktion erlaubt Dir das schnelle downloaden und die Installation von Styles von Webseiten. Du kannst selbst eine Liste mit Webseiten konfigurieren.',
    'xs_install_styles' => 'Styles installieren',
    'xs_install_styles_explain' => 'Diese Funktion erlaubt Dir die Installation von Styles, die Du bereits in Dein Forum hochgeladen hast.',
    'xs_uninstall_styles' => 'Styles deinstallieren',
    'xs_uninstall_styles_explain' => 'Diese Funktion erlaubt Dir, Styles von Deinem Forum zu entfernen.',
    'xs_edit_templates_explain' => 'Diese Funktion erlaubt Dir, tpl Dateien online zu editieren.',
    'xs_edit_styles_data' => 'Styles Daten bearbeiten',
    'xs_edit_styles_data_explain' => 'Diese Funktion erlaubt Dir, Styles Variablen zu bearbeiten. Es wird von einigen Styles verwendet, meist werden jedoch stattdessen css Files verwendet.',
    'xs_export_styles_data' => 'Styles Daten exportieren',
    'xs_export_styles_data_explain' => 'Diese Feature erlaubt Dir, Styles Variablen in die Datei theme_info.cfg zu speichern.',
    'xs_check_for_updates' => 'Pr�fe auf Updates',
    'xs_check_for_updates_explain' => 'Diese Funktion erlaubt Dir die �berpr�fung auf aktualisierte Versionen von Styles und Mods in Deinem Forum.',

    'xs_set_configuration_lc' => 'Konfiguration �ndern',
    'xs_set_default_style_lc' => 'Standard Style �ndern',
    'xs_manage_cache_lc' => 'Cache verwalten',
    'xs_import_styles_lc' => 'Styles importieren',
    'xs_export_styles_lc' => 'Styles exportieren',
    'xs_clone_styles_lc' => 'Styles clonen',
    'xs_uninstall_styles_lc' => 'Styles deinstallieren',
    'xs_edit_templates_lc' => 'Templates bearbeiten',
    'xs_edit_styles_data_lc' => 'Styles Daten bearbeiten',
    'xs_export_styles_data_lc' => 'Styles Daten exportieren',
    'xs_check_for_updates_lc' => 'Pr�fe auf Updates',

/*
* ftp.tpl, ftp functions
*/

    'xs_ftp_comment1' => 'Um diese Funktion zu nutzen musst Du die Datei Upload Methode ausw�hlen. Wenn Du FTP ausw�hlst, wird ein Passwort nicht gespeichert und eXtreme Styles wird Dich jedesmal nach dem Passwort fragen, wenn ein FTP-Zugriff erfolgt. Wenn Du das lokale Dateisystem ausw�hlst stelle sicher, das f�r alle erforderlichen Verzeichnisse Schreibrechte existieren.',
    'xs_ftp_comment2' => 'Um Diese Funktion zu benutzen m�ssen die FTP-Einstellungen gesetzt werden. Wenn Du FTP ausw�hlst, wird ein Passwort nicht gespeichert und eXtreme Styles wird Dich jedesmal nach dem Passwort fragen, wenn ein FTP-Zugriff erfolgt',
    'xs_ftp_comment3' => 'Warnung: FTP Funktionen sind auf diesem Server deaktiviert. Du kannst keine eXtreme Styles Funktionalit�t verwenden, die FTP Zugriff ben�tigt.',

    'xs_ftp_title' => 'FTP Konfiguration',

    'xs_ftp_explain' => 'FTP wird verwendet, um neue Styles hochzuladen. Wenn Du die Styles Importieren Funktion verwenden m�chtest musst Du vorher die FTP-Einstellungen gemacht haben. eXtreme Styles versucht die Einstellungen soweit m�glich automatisch zu erkennen.',

    'xs_ftp_error_fatal' => 'FTP Funktionen sind auf diesem Server deaktiviert. Kann nicht fortsetzen.',
    'xs_ftp_error_connect' => 'FTP Fehler: Kann keine Verbindung aufbauen zu {HOST}',
    'xs_ftp_error_login' => 'FTP Fehler: Kein Login m�glich',
    'xs_ftp_error_chdir' => 'FTP Fehler: Kann nicht ins Verzeichnis {DIR} wechseln',
    'xs_ftp_error_nonphpbbdir' => 'FTP Fehler: Du hast ein falsches Verzeichnis eingestellt. In diesem Verzeichnis befinden sich keine Icy Phoenix Dateien',
    'xs_ftp_error_noconnect' => 'Kann nicht zum FTP-Server verbinden',
    'xs_ftp_error_login2' => 'Falscher FTP Login oder Passwort',

    'xs_ftp_log_disabled' => 'FTP Funktionen sind auf diesem Server deaktiviert. Script wird nicht fortgesetzt.',
    'xs_ftp_log_connecting' => 'verbinde zu {HOST}',
    'xs_ftp_log_noconnect' => 'kann nicht zu {HOST} verbinden',
    'xs_ftp_log_connected' => 'verbunden. Logge ein...',
    'xs_ftp_log_nologin' => 'kann nicht als {USER} einloggen',
    'xs_ftp_log_loggedin' => 'eingeloggt',
    'xs_ftp_log_end' => 'Scriptausf�hrung beendet',
    'xs_ftp_log_nopwd' => 'Fehler: kann momentanes Verzeichnis nicht lesen',
    'xs_ftp_log_nomkdir' => 'Fehler: Kann Verzeichnis {DIR} nicht erstellen',
    'xs_ftp_log_mkdir' => 'Verzeichnis {DIR} erstellt',
    'xs_ftp_log_nochdir' => 'Fehler: kann nicht ins Verzeichnis {DIR} wechseln',
    'xs_ftp_log_normdir' => 'Fehler: kann Verzeichnis {DIR} nicht entfernen',
    'xs_ftp_log_rmdir' => 'Verzeichnis {DIR} entfernt',
    'xs_ftp_log_chdir' => 'Verzeichnis nach {DIR} gewechselt',
    'xs_ftp_log_noupload' => 'Fehler: kann Datei {FILE} nicht hochladen',
    'xs_ftp_log_upload' => 'Datei {FILE} hochgeladen',
    'xs_ftp_log_nochmod' => 'Warnung: Konnte chmod der Datei {FILE} nicht �ndern',
    'xs_ftp_log_chmod' => 'chmod Datei {FILE} in {MODE}',
    'xs_ftp_log_invalidcommand' => 'Fehler: Unbekanntes Kommando: {COMMAND}',
    'xs_ftp_log_chdir2' => 'wechsele momentanes Verzeichnis zur�ck nach {DIR}',
    'xs_ftp_log_nochdir2' => 'kann Verzeichnis nicht nach {DIR} wechseln',

    'xs_ftp_config' => 'FTP Konfiguration',
    'xs_ftp_select_method' => 'W�hle Upload Methode',
    'xs_ftp_select_local' => 'Verwende lokales Dateisystem (keine Konfiguration notwendig)',
    'xs_ftp_select_ftp' => 'FTP verwenden (FTP-Einstellungen weiter unten einstellen)',

    'xs_ftp_settings' => 'FTP Einstellungen',
    'xs_ftp_host' => 'FTP Host',
    'xs_ftp_login' => 'FTP Login',
    'xs_ftp_path' => 'FTP Pfad zum Icy Phoenix',
    'xs_ftp_pass' => 'FTP Passwort',
    'xs_ftp_remotedir' => 'Remote Verzeichnis',

    'xs_ftp_host_guess' => ' (wahrscheinlich "{HOST}" [<a href="javascript: void(0)" onclick="{CLICK}">Host setzen</a>])',
    'xs_ftp_login_guess' => ' (wahrscheinlich "{LOGIN}" [<a href="javascript: void(0)" onclick="{CLICK}">Login setzen</a>])',
    'xs_ftp_path_guess' => ' (wahrscheinlich "{PATH}" [<a href="javascript: void(0)" onclick="{CLICK}">Pfad setzen</a>])',


/*
* config.tpl
*/
    'xs_config_updated' => 'Konfiguration aktualisiert.',
    'xs_config_updated_explain' => 'Du musst diese Seite aktualisieren bevor die Konfiguration �bernommen werden kann. <a href="{URL}">Klicke hier</a> um die Seite zu aktualisieren.',
    'xs_config_warning' => 'Achtung: Cache kann nicht geschrieben werden.',
    'xs_config_warning_explain' => 'In das Cache Verzeichnis kann nicht geschrieben werden. eXtreme Styles kann versuchen, dieses Problem zu l�sen.<br /><a href="{URL}">Klicke hier</a> um zu versuchen, den Zugriffsmodus f�r das Cache Verzeichnis zu �ndern.<br /><br />Sollte Cache aus irgendwelchen Gr�nden auf Deinem Server nicht funktionieren...kein Problem, eXtreme Styles<br />beschleunigt die Geschwindigkeit des Forums auch ohne Cache um ein Vielfaches.',

    'xs_config_maintitle' => 'eXtreme Styles mod Konfiguration',
    'xs_config_subtitle' => 'Das ist die Konfiguration von eXtreme Styles. Wenn Du eine Einstellungsm�glichkeit nicht verstehst, �ndere sie bitte nicht.',
    'xs_config_title' => 'eXtreme Styles mod v{VERSION} Einstellungen',
    'xs_config_cache' => 'Cache Konfiguration',

    'xs_config_navbar' => 'In linkem Frame anzeigen:',
    'xs_config_navbar_explain' => 'Du kannst ausw�hlen, welche Punkte im linken Frame des Admin Panels angezeigt werden sollen.',

    'xs_config_def_template' => 'Default Template Verzeichnis',
    'xs_config_def_template_explain' => 'Sollte eine ben�tigte tpl Datei nicht im aktuellen Template Verzeichnis gefunden werden (das k�nnte passieren, wenn Du Icy Phoenix falsch modifiziert hast) dann wird das Template System auch in anderen Verzeichnissen danach suchen (Wenn also Beispielsweise das momentane Template "meinTemplate" heisst und das Script die Datei "meinTemplate/meinedatei.cfg" ben�tigt und die Datei ist nicht vorhanden, wird das Template System auch nach "subSilver/meineDatei.tpl" suchen). Wenn Du hier nichts eintr�gst wird diese Funktion deaktiviert.',

    'xs_config_check_switches' => '�berpr�fung beim kompilieren',
    'xs_config_check_switches_explain' => 'Diese Funktion pr�ft auf Fehler in Templates. Wenn Du es deaktivierst beschleunigst Du die Kompilierung, jedoch k�nnten Fehler in den Templates �bersehen werden.<br /><br />Smart Check wird die Templates auf Fehler �berpr�fen und alle bekannten Fehler automatisch korrigieren (es gibt einige wenige bekannte Tippfehler in verschiedenen Mods). Ist etwas langsamer als die einfache �berpr�fung.<br /><br />Manchmal sieht das Template nur fehlerfrei aus, wenn die Fehlerkorrektur deaktiviert wurde; das passiert bei schlecht programmiertem HTML Code - bitte kontaktiere denjenigen, der das Template geschrieben hat, wenn Du den Fehler nicht selbst korrigieren kannst.<br /><br />Sollte die Cache Funktion deaktiviert sein, dann schalte das hier ab um eine schnellere Kompilierung zu erhalten.',
    'xs_config_check_switches_0' => 'Aus',
    'xs_config_check_switches_1' => 'Smart Check',
    'xs_config_check_switches_2' => 'Einfacher Check',

    'xs_config_show_errors' => 'Zeigt Fehler, wenn Dateien in tpl Dateien falsch included werden',
    'xs_config_show_error_explain' => 'Diese Funktion aktiviert/deaktiviert Fehler in den tpl Dateien &lt;!-- INCLUDE filename --&gt;',

    'xs_config_tpl_comments' => 'F�ge tpl Dateinamen in HTML hinzu',
    'xs_config_tpl_comments_explain' => 'Diese Funktion f�gt Kommentare zum HTML Code hinzu, die den Style Designern erlaubt zu pr�fen, welche tpl Datei angezeigt wird.',

    'xs_config_use_cache' => 'Cache verwenden',
    'xs_config_use_cache_explain' => 'Der Cache wird auf Festplatte geschrieben und beschleunigt das Template System, da hierdurch nicht das Template bei jeder Anzeige neu kompiliert werden muss.',

    'xs_config_auto_compile' => 'Cache automatisch speichern',
    'xs_config_auto_compile_explain' => 'Templates, die noch nicht im Cache existieren, werden bei Aktivierung automatisch ins Cache Verzeichnis gespeichert.',

    'xs_config_auto_recompile' => 'Cache automatisch rekompilieren',
    'xs_config_auto_recompile_explain' => 'Templates, die ge�ndert wurden, werden autmatisch neu kompiliert.',

    'xs_config_php' => 'Datei-Erweiterung der Cache Dateien',
    'xs_config_php_explain' => 'Das ist die Erweiterung der Cache-Dateien. Dateien weren im php Format gespeichert, also ist die Standard Erweiterung "php". Bitte den Punkt nicht miteingeben',

    'xs_config_back' => '<a href="{URL}">Klicke hier</a> um zur Konfiguration zur�ckzukehren.',
    'xs_config_sql_error' => 'Fehler bei der Aktualisierung der Allgemeinen Konfiguration f�r {VAR}',

// Debug info
    'xs_debug_header' => 'Debug Info',
    'xs_debug_explain' => 'Das ist die Debug Info. Sie wird verwendet, um Probleme bei der Cache-Konfiguration zu finden/l�sen.',
    'xs_debug_vars' => 'Template Variablen',
    'xs_debug_tpl_name' => 'Template Dateiname:',
    'xs_debug_cache_filename' => 'Cache Dateiname:',
    'xs_debug_data' => 'Debug Daten:',

    'xs_check_hdr' => 'Pr�fe Cache auf %s',
    'xs_check_filename' => 'Fehler: Falscher Dateiname',
    'xs_check_openfile1' => 'Fehler: Kann Datei "%s" nicht �ffnen. Versuche Verzeichnisse zu erstellen...',
    'xs_check_openfile2' => 'Fehler: Konnte die Datei "%s" zum zweiten Mal nicht �ffnen. Gebe auf...',
    'xs_check_nodir' => 'Pr�fe "%s" - Verzeichnis existiert nicht.',
    'xs_check_nodir2' => 'Fehler: Kann Verzeichnis "%s" nicht erstellen - Du solltest die Befugnisse �berpr�fen.',
    'xs_check_createddir' => 'Verzeichnis "%s" erstellt',
    'xs_check_dir' => '�berpr�fe "%s" - Verzeichnis existiert.',
    'xs_check_ok' => 'Datei "%s" zum schreiben ge�ffnet. Scheint alles in Ordnung zu sein.',
    'xs_error_demo_edit' => 'Du kannst keine Datei im Demo-Modus �ndern.',
    'xs_error_not_installed' => 'eXtreme Styles mod ist nicht installiert. Du hast vergessen includes/template.php hochzuladen',

/*
* chmod
*/
    'xs_chmod' => 'CHMOD',
    'xs_chmod_return' => '<br /><br /><a href="{URL}">Klicke hier</a> um zur Konfiguration zur�ckzukehren.',
    'xs_chmod_message1' => 'Konfiguration ge�ndert.',
    'xs_chmod_error1' => 'Kann den Zugriffsmodus des Cache Verzeichnisses nicht �ndern',


/*
* default style
*/
    'xs_def_title' => 'Default Style einstellen',
    'xs_def_explain' => 'Diese Funktion erlaubt das schnelle Umschalten des Standard Forum Styles, ebenfalls k�nnen hier die Benutzer von einem auf einen anderen Style umgeschaltet werden.',

    'xs_styles_set_default' => 'als Default',
    'xs_styles_no_override' => 'Benutzereinstellungen nicht �berschreiben',
    'xs_styles_do_override' => 'Benutzereinstellungen �berschreiben',
    'xs_styles_switch_all' => 'alle Benutzer auf diesen Style umschalten',
    'xs_styles_switch_all2' => 'alle Benutzer umschalten auf:',
    'xs_styles_defstyle' => 'Default style',
    'xs_styles_available' => 'Verf�gbare Styles',
    'xs_styles_make_public' => 'Style �ffentlich machen',
    'xs_styles_make_admin' => 'Style nur f�r Admins zug�nglich machen',
    'xs_styles_users' => 'Benutzerliste',


/*
* cache management
*/
    'xs_manage_cache_explain2' => 'Diese Funktion erlaubt das kompilieren oder entfernen der Cache-Dateien von Styles.',
    'xs_clear_all_lc' => 'alle l�schen',
    'xs_compile_all_lc' => 'alle kompilieren',
    'xs_clear_cache_lc' => 'Cache l�schen',
    'xs_compile_cache_lc' => 'Cache kompilieren',
    'xs_cache_confirm' => 'Wenn Du viele Styles hast, kann das die Last des Servers deutlich erh�hen. Bist Du sicher, das Du fortfahren m�chtest?',

    'xs_cache_nowrite' => 'Fehler: Kein Zugriff auf das Cache Verzeichnis',
    'xs_cache_log_deleted' => '{FILE} gel�scht',
    'xs_cache_log_nodelete' => 'Fehler: Kann Datei {FILE} nicht l�schen',
    'xs_cache_log_nothing' => 'Nichts zu l�schen f�r Template {TPL}',
    'xs_cache_log_nothing2' => 'Es gibt nichts zu l�schen im Cache Verzeichnis',
    'xs_cache_log_count' => '{NUM} Dateien erfolgreich gel�scht',
    'xs_cache_log_count2' => 'Fehler beim l�schen von {NUM} Dateien',
    'xs_cache_log_compiled' => 'Kompiliert: {NUM} Dateien',
    'xs_cache_log_errors' => 'Fehler: {NUM}',
    'xs_cache_log_noaccess' => 'Fehler: Kann nicht auf Verzeichnis {DIR} zugreifen',
    'xs_cache_log_compiled2' => 'Kompiliert: {FILE}',
    'xs_cache_log_nocompile' => 'Fehler beim kompilieren: {FILE}',

/*
* export/import/download/clone
*/
    'xs_import_explain' => 'Diese Funktion erlaubt den Import von Styles. Ebenfalls k�nnen Styles automatisch installiert und aktualisiert werden.<br /><br />Achtung: Solltest Du irgendwelche Mods in diesem Forum installiert haben (ausser dem eXtreme Styles Mod) musst Du beim Import von Styles vorsichtig sein, da diese nicht kompatibel mit Deinem Forum sein k�nnten. Du kannst nur Styles installieren, die die gleichen Modifikationen wie die anderen Styles haben, die Du in Deinem Forum konfiguriert hast.',

    'xs_import_lc' => 'importieren',
    'xs_list_files_lc' => 'Dateien auflisten',
    'xs_delete_file_lc' => 'Datei l�schen',
    'xs_export_style_lc' => 'Style exportieren',

    'xs_import_no_cached' => 'Es gibt keine gecachten Styles zum importieren',
    'xs_add_styles' => 'Styles hinzuf�gen',
    'xs_add_styles_web' => 'Aus dem Web downloaden',
    'xs_add_styles_web_get' => 'Los',
    'xs_add_styles_copy' => 'Von lokaler Datei kopieren',
    'xs_add_styles_copy_get' => 'kopieren',
    'xs_add_styles_upload' => 'Upload vom Computer',
    'xs_add_styles_upload_get' => 'Upload',

    'xs_export_style' => 'Style exportieren',
    'xs_export_style_explain' => 'Diese Funktion erm�glicht den Export eines Styles als eine einzige Datei. Diese Datei ist sehr klein - kleiner als eine .zip Datei (sie wurde mit gzip gepackt, welches besser als zip packt) und alle Styles in einer einzigen Datei. Deswegen ist es sehr einfach, Styles von einem Forum zu einem anderen zu transferieren.<br /><br />Diese Funktion erlaubt ebenfalls den Upload exportierter Styles �ber FTP auf einen Server. Dieses System erm�glicht den Transfer eines Styles auf ein anderes Forum schnell, ohne manuell kopieren zu m�ssen.',

    'xs_export_style_title' => 'Template "{TPL}" exportieren',
    'xs_export_tpl_name' => 'Exportieren als (Template Name)',
    'xs_export_style_names' => 'W�hle zu exportierende(n) Style(s)',
    'xs_export_style_name' => 'Zu exportierendes Style (Style Name)',
    'xs_export_style_comment' => 'Kommentar',
    'xs_export_where' => 'Wohin exportieren',
    'xs_export_where_download' => 'Als Datei herunterladen',
    'xs_export_where_store' => 'Als Datei auf dem Server speichern',
    'xs_export_where_store_dir' => 'Verzeichnis',
    'xs_export_where_ftp' => '�ber FTP hochladen',
    'xs_export_filename' => 'Export Dateiname',

    'xs_download_explain2' => 'Diese Funktion erlaubt das schnelle Downloaden von Styles direkt von verschiedenen Webseiten. Klicke auf den Link neben dem Namen der Webseite um zur Style Download Seite weitergeleitet zu werden.<br /><br />Du kannst die Liste der Webseiten auch verwalten.',

    'xs_download_locations' => 'Download Locations',
    'xs_edit_link' => 'Link bearbeiten',
    'xs_add_link' => 'Link hinzuf�gen',
    'xs_link_title' => 'Link Titel',
    'xs_link_url' => 'Link URL',
    'xs_delete' => 'L�schen',

    'xs_style_header_error_file' => 'Kann lokale Datei nicht �ffnen',
    'xs_style_header_error_server' => 'Fehler auf dem Server: ',
    'xs_style_header_error_invalid' => 'Ung�ltiger Datei Header',
    'xs_style_header_error_reason' => 'Fehler beim lesen des Datei Headers: ',
    'xs_style_header_error_incomplete' => 'Datei ist unvollst�ndig',
    'xs_style_header_error_incomplete2' => 'Falsche Dateigr�sse. Datei ist m�glicherweise nicht komplett.',
    'xs_style_header_error_invalid2' => 'Falsche Datei. Wahrscheinlich ist die Datei kein eXtreme Styles mod kompatibles Style oder eine ung�ltige Version.',
    'xs_error_cannot_open' => 'Kann Datei nicht �ffnen.',
    'xs_error_decompress_style' => 'Fehler beim auspacken der Datei. Die Datei ist wahrscheinlich fehlerhaft.',
    'xs_error_cannot_create_file' => 'Kann Datei "{FILE}" nicht erstellen',
    'xs_error_cannot_create_tmp' => 'Kann tempor�re Datei "{FILE}" nicht erstellen',
    'xs_import_invalid_file' => 'Ung�ltige Datei',
    'xs_import_incomplete_file' => 'Unvollst�ndige Datei',
    'xs_import_uploaded' => 'Style hochgeladen.',
    'xs_import_installed' => 'Style hochgeladen und installiert.',
    'xs_import_notinstall' => 'Style hochgeladen, jedoch Fehler beim installieren (sql Fehler).',
    'xs_import_notinstall2' => 'Style hochgeladen, jedoch Fehler beim installieren: keine Styles in der theme_info.cfg gefunden',
    'xs_import_notinstall3' => 'Style hochgeladen, jedoch Fehler beim installieren: kein Eintrag f�r "{STYLE}" in der theme_info.cfg gefunden',
    'xs_import_notinstall4' => 'Style hochgeladen, jedoch Fehler beim installieren: konnte die n�chste themes_id Information nicht ermitteln',
    'xs_import_notinstall5' => 'Style hochgeladen, jedoch Fehler beim installieren: konnte die Styles Tabelle nicht aktualisieren',
    'xs_import_nodownload' => 'Kann Style nicht von {URL} downloaden',
    'xs_import_nodownload2' => 'Kann Style nicht von {URL} kopieren',
    'xs_import_nodownload3' => 'Datei nicht hochgeladen.',
    'xs_import_uploaded2' => 'Style heruntergeladen. Du kannst ihn nun importieren.<br /><br /><a href="{URL}">Klicke hier</a> um den Style zu importieren.',
    'xs_import_uploaded3' => 'Style kopiert. Du kannst ihn nun importieren.<br /><br /><a href="{URL}">Klicke hier</a> um den Style zu importieren.',
    'xs_import_uploaded4' => 'Style hochgeladen. Du kannst ihn nun importieren.<br /><br /><a href="{URL}">Klicke hier</a> um den Style zu importieren.',
    'xs_export_no_open_dir' => 'Kann Verzeichnis {DIR} nicht �ffnen',
    'xs_export_no_open_file' => 'Kann Datei {FILE} nicht �ffnen',
    'xs_export_no_read_file' => 'Fehler beim lesen der Datei {FILE}',
    'xs_no_theme_data' => 'Konnte die Style Daten f�r das gew�hlte Template nicht lesen',
    'xs_no_style_info' => 'Konnte die Style Informationen nicht lesen',
    'xs_export_noselect_themes' => 'Du solltest mindestens ein Style ausw�hlen',
    'xs_export_error' => 'Kann Template "{TPL}" nicht exportieren: ',
    'xs_export_error2' => 'Kann Template "{TPL}" nicht exportieren: Style ist leer',
    'xs_export_saved' => 'Style wurde als "{FILE}" gespeichert',
    'xs_export_error_uploading' => 'Fehler beim hochladen der Datei',
    'xs_export_uploaded' => 'Datei hochgeladen.',
    'xs_clone_taken' => 'Der Name des Styles ist bereits in Verwendung.',
    'xs_error_new_row' => 'Konnte die neue Reihe nicht in der Tabelle anlegen.',
    'xs_theme_cloned' => 'Style geclont.',
    'xs_invalid_style_name' => 'Ung�ltiger Stylename.',
    'xs_clone_style_exists' => 'Dieses Template existiert bereits',
    'xs_clone_no_select' => 'Du solltest mindestens ein Style zum clonen ausw�hlen.',
    'xs_no_themes' => 'Style in der Datenbank nicht gefunden.',

    'xs_import_back' => '<a href="{URL}">Klicke hier</a> um zur Styles Importieren Seite zur�ckzukehren.',
    'xs_import_back_download' => '<a href="{URL}" target="main">Klicke hier</a> um zu den Downloads zur�ckzukehren.',
    'xs_export_back' => '<a href="{URL}">Klicke hier</a> um zur Styles exportieren Seite zur�ckzukehren.',
    'xs_clone_back' => '<a href="{URL}">Klicke hier</a> um zur Styles Clone Seite zur�ckzukehren.',
    'xs_download_back' => '<a href="{URL}">Klicke hier</a> um zur Downloadseite zur�ckzukehren.',

    'xs_import_tpl' => 'Importiere Template "{TPL}"',
    'xs_import_tpl_comment' => 'Diese Funktion wird ein Template in Dein Forum hochladen. Sollte ein Template mit diesem Namen bereits in Deinem Forum existieren, wird diese Funktion automatisch die alten Dateien �berschreiben, daher kann es auch verwendet werden, um Styles zu aktualisieren.<br /><br />Diese Funktion kann ebenfalls automatisch Styles installieren.',
    'xs_import_tpl_filename' => 'Dateiname:',
    'xs_import_tpl_tplname' => 'Template Name:',
    'xs_import_tpl_comment2' => 'Kommentar:',
    'xs_import_select_styles' => 'W�hle Style(s) die installiert werden sollen:',
    'xs_import_install_def_lc' => 'mache Default Forum Style',
    'xs_import_install_style' => 'Installiere Style:',
    'xs_import' => 'Import',

    'xs_import_list_contents' => 'Inhalt der Datei: ',
    'xs_import_list_filename' => 'Dateiname: ',
    'xs_import_list_template' => 'Template: ',
    'xs_import_list_comment' => 'Kommentar: ',
    'xs_import_list_styles' => 'Style(s): ',
    'xs_import_list_files' => 'Dateien ({NUM}):',
    'xs_import_download_lc' => 'Datei herunterladen',
    'xs_import_view_lc' => 'Datei anzeigen',
    'xs_import_file_size' => '({NUM} bytes)',

    'xs_import_nogzip' => 'Diese Funktion ben�tigt gz Komprimierung, und diese wird auf diesem Server nicht unterst�tzt.',
    'xs_import_nowrite_cache' => 'Kann nicht in den Cache schreiben. Diese Funktion ben�tigt, dass der Cache beschrieben werden kann. �berpr�fe die mod Konfiguration.<br /><br /><a href="{URL1}">Klicke hier</a> um den Cache schreibf�hig zu machen.<br /><br /><a href="{URL2}">Klicke hier</a> um zur Import Seite zur�ckzukehren.',

    'xs_import_download_warning' => 'Das f�hrt Dich auf eine externe Webseite, auf der Du Styles mit ein paar wenigen klicks �ber die eXtreme Styles Import Funktion herunterladen kannst.',

    'xs_clone_style' => 'Style clonen',
    'xs_clone_style_explain' => 'Diese Funktion erlaubt das schnelle clonen von Styles oder ganzen Templates.<br /><br />Achtung: Bitte stelle vor dem kopieren sicher, dass der Autor des Original-Templates das kopieren erlaubt (ausser subSilver, mit dem Du alles machen darfst). In der Regel erlauben die Autoren die Modifizierung der Styles, jedoch sollten diese dann nicht weitergegeben werden.',
    'xs_clone_style_explain2' => 'Diese Funktion erlaubt das Erstellen neuer Styles f�r ein Template. Die Funktion kopiert keine Dateien sondern f�gt f�r das neue Style Eintr�ge in die Datenbank hinzu. Sowohl das alte als auch das neue Style teilen sich das Template.',
    'xs_clone_style_explain3' => 'Gib den Namen f�r das neue Style ein und klicke auf den "clonen" Knopf.',
    'xs_clone_style_explain4' => 'Diese Funktion erlaubt das clonen von Templates. Du kannst ebenfalls alle Styles dieses Templates kopieren. Sp�ter kannst Du die tpl einfach bearbeiten ohne das alte Template zu beeinflussen.',

    'xs_clone_style_lc' => 'Style clonen',
    'xs_clone_style2' => 'Clone Style "{STYLE}":',
    'xs_clone_style3' => 'Clone Template "{STYLE}"',
    'xs_clone_newdir_name' => 'Neues Template (directory) Name:',
    'xs_clone_select' => 'W�hle Style(s) zum  clonen:',
    'xs_clone_select_explain' => 'Du musst mindestens ein Style ausw�hlen.',
    'xs_clone_newname' => 'Neuer Stylename:',


/*
* install/uninstall
*/
    'xs_install_styles_explain2' => 'Das ist eine Liste der Styles, die ins Forum hochgeladen wurden, die jedoch nicht installiert sind. Klicke auf den "installieren" Link bei dem Style, den Du installieren m�chtest, oder w�hle mehrere Styles und kliche auf den Absenden Button.',
    'xs_uninstall_styles_explain2' => 'Das ist eine Liste der installierten Styles Deines Forums. Klicke auf den "Deinstallieren" Link um Styles vom Forum zu entfernen. Die Deinstallation ist sicher, da alle Benutzer, die dieses Style bisher eingestellt hatten auf das Standard Style umgeschaltet werden. Ebenfalls wird automatisch der Cache f�r das entfernte Style gel�scht.',

    'xs_install' => 'Installation',
    'xs_install_lc' => 'installieren',
    'xs_uninstall' => 'Deinstallation',
    'xs_remove_files' => 'Dateien entfernen',
    'xs_style_removed' => 'Style entfernt.',
    'xs_uninstall_lc' => 'deinstallieren',
    'xs_uninstall2_lc' => 'deinstallieren und Dateien l�schen',

    'xs_install_back' => '<a href="{URL}">Klicke hier</a> um zur Styles Installation zur�ckzukehren.',
    'xs_uninstall_back' => '<a href="{URL}">Klicke hier</a> um zur Styles Deinstallation zur�ckzukehren.',
    'xs_goto_default' => '<a href="{URL}">Klicke hier</a> um den Default Style zu �ndern.',

    'xs_install_installed' => 'Style(s) installiert.',
    'xs_install_error' => 'Fehler bei der Installation des Styles.',
    'xs_install_none' => 'Es gibt keine neuen Styles zum installieren. Alle verf�gbaren Styles sind bereits installiert.',

    'xs_uninstall_default' => 'DU kannst das Standard-Style nicht entfernen. Um das Standard-Style zu �ndern <a href="{URL}">klicke hier</a>.',

/*
* export theme_info.cfg
*/
    'xs_export_styles_data_explain2' => 'Diese Funktion speichert Style Datein in die theme_info.cfg. Es kann verwendet werden, um Datenbankinformationen vor dem Transfer eines Styles von einem Forum auf ein anderes zu sichern.<br /><br />Achtung: Wenn Du die Export Funktion von eXtreme Styles verwendest, um ein Style auf ein anderes Forum zu �bertragen brauchst Du die theme_info.cfg nicht speichern - es wird automatisch durch die Style Export Funktion gemacht.',
    'xs_export_styles_data_explain3' => 'W�hle Styles, die Du exportieren m�chtest.',

    'xs_export_data_back' => '<a href="{URL}">Klicke hier</a> um zur Style Export Daten Seite zur�ckzukehren.',
    'xs_export_style_data_lc' => 'Style Daten exportieren',

    'xs_export_data_saved' => 'Daten exportiert.',

/*
* edit templates (file manager)
*/
    'xs_edit_template_comment1' => 'Diese Funktion erm�glicht die Bearbeitung der Templates. Der Dateibrowser zeigt nur Dateien an, die editierbar sind',
    'xs_edit_template_comment2' => 'Diese Funktion erm�glicht die Bearbeitung von Templates.',
    'xs_edit_file_saved' => 'Datei wurde gespeichert.',
    'xs_edit_not_found' => 'Datei nicht gefunden.',
    'xs_edittpl_back_dir' => '<a href="{URL}">Klicke hier</a> um zum Dateimanager zur�ckzukehren.',

    'xs_fileman_browser' => 'Datei Browser',
    'xs_fileman_directory' => 'Verzeichnis:',
    'xs_fileman_dircount' => 'Verzeichnisse ({COUNT}):',
    'xs_fileman_filter' => 'Filter',
    'xs_fileman_filter_ext' => 'Nur Files mit dieser Erweiterung anzeigen:',
    'xs_fileman_filter_content' => 'Nur Dateien anzeigen, die dieses enthalten:',
    'xs_fileman_filter_clear' => 'Filter l�schen',
    'xs_fileman_filename' => 'Dateiname',
    'xs_fileman_filesize' => 'Gr�sse',
    'xs_fileman_filetime' => 'Modifikationen',
    'xs_fileman_options' => 'Optionen',
    'xs_fileman_time_today' => '(heute)',
    'xs_fileman_edit_lc' => 'bearbeiten',

    'xs_fileedit_search_nomatch' => 'Keine �bereinstimmung gefunden',
    'xs_fileedit_search_match1' => '1 �bereinstimmung ersetzt',
    'xs_fileedit_search_matches' => "Ersetzt ' + z�hle + ' �bereinstimmungen",
    'xs_fileedit_noundo' => 'Es gibt nichts, was r�ckg�ngig zu machen w�re',
    'xs_fileedit_undo_complete' => 'Alter Inhalt wiederhergestellt',
    'xs_fileedit_edit_name' => 'Datei bearbeiten:',
    'xs_fileedit_location' => 'Ort:',
    'xs_fileedit_reload_lc' => 'Datei aktualisieren',
    'xs_fileedit_download_lc' => 'Datei herunterladen',
    'xs_fileedit_trim' => 'Entferne automatisch Leerzeichen am Anfang und Ende der Datei.',
    'xs_fileedit_functions' => 'Funktionen bearbeiten',
    'xs_fileedit_replace1' => 'Ersetze ',
    'xs_fileedit_replace2' => ' mit ',
    'xs_fileedit_replace_first_lc' => 'Ersetze erste �bereinstimmung',
    'xs_fileedit_replace_all_lc' => 'Ersetze alle �bereinstimmungen',
    'xs_fileedit_replace_undo_lc' => 'Ersetzen r�ckg�ngig machen',
    'xs_fileedit_backups' => 'Backups',
    'xs_fileedit_backups_save_lc' => 'Backup sichern',
    'xs_fileedit_backups_show_lc' => 'zeige Inhalt',
    'xs_fileedit_backups_restore_lc' => 'wiederherstellen',
    'xs_fileedit_backups_download_lc' => 'download',
    'xs_fileedit_backups_delete_lc' => 'l�schen',
    'xs_fileedit_upload' => 'Upload',
    'xs_fileedit_upload_file' => 'Datei hochladen:',

/*
* edit styles data (theme_info)
*/
    'xs_data_head_stylesheet' => 'CSS Stylesheet',
    'xs_data_body_background' => 'Hintergundbild',
    'xs_data_body_bgcolor' => 'Hintergrundfarbe',
    'xs_data_style_name' => 'Style Name',
    'xs_data_body_link' => 'Linkfarbe',
    'xs_data_body_text' => 'Textfarbe',
    'xs_data_body_vlink' => 'Farbe der besuchten Links',
    'xs_data_body_alink' => 'Farbe der aktiven Links',
    'xs_data_body_hlink' => 'Farbe der Hoverlinks',
    'xs_data_tr_color' => 'Farbe der Tabellenreihe %s',
    'xs_data_tr_class' => 'Klasse der Tabellenreihe %s',
    'xs_data_th_color' => 'Farbe des Tabellenkopfs %s',
    'xs_data_th_class' => 'Klasse des Tabellenkopfs %s',
    'xs_data_td_color' => 'Zellenfarbe der Tabellen %s',
    'xs_data_td_class' => 'Zellenklasse der Tabellen %s',
    'xs_data_fontface' => 'Schriftart %s',
    'xs_data_fontsize' => 'Schriftgr�sse %s',
    'xs_data_fontcolor' => 'Schriftfarbe %s',
    'xs_data_span_class' => 'Span Class %s',
    'xs_data_img_size_poll' => 'Polling-Bild Gr�sse [px]',
    'xs_data_img_size_privmsg' => 'Private Nachrichten Status Gr�sse [px]',
    'xs_data_theme_public' => '�ffentliches Style (1 oder 0)',
    'xs_data_unknown' => 'Beschreibung nicht verf�gbar (%s)',

    'xs_edittpl_error_updating' => 'Fehler bei der Aktualisierung des Styles.',
    'xs_edittpl_style_updated' => 'Style aktualisiert.',
    'xs_invalid_style_id' => 'Falsche Style ID.',

    'xs_edittpl_back_edit' => '<a href="{URL}">Klicke hier</a> um zur Bearbeitung zur�ckzukehren.',
    'xs_edittpl_back_list' => '<a href="{URL}">Klicke hier</a> um zur Liste der Styles zur�ckzukehren.',

    'xs_editdata_explain' => 'Diese Funktion erlaubt die Bearbeitung von Datenbankwerten der installierten Styles. Einige Styles ignorieren die Datenbank-Eintr�ge und verwenden stattdessen css Dateien, einige andere verwenden nur einige der Datenbankeintr�ge.',
    'xs_editdata_var' => 'Variable',
    'xs_editdata_value' => 'Wert',
    'xs_editdata_comment' => 'Kommentar',

/*
* updates
*/

    'xs_updates' => 'Updates',
    'xs_updates_comment' => 'Diese Funktion pr�ft auf Updates einiger Styles und Mods. Es funktioniert dort, wo die notwendigen Update Informationen vorhanden sind.',
    'xs_updates_comment2' => 'Ergebnis der Versionspr�fung.',
    'xs_update_total1' => 'Gesamt: {NUM}',
    'xs_update_info1' => 'Diese Administrationsfunktion pr�ft auf vorhandene Updates f�r phpBB, einige Mods, und einige Styles, die in Deinem Forum installiert sind. Sollten verf�gbare Updates gefunden werden, werden diese mit dem entsprechenden Download-Link angezeigt.<br /><br />Diese Funktion ben�tigt \'Sockets\' aktiviert. Die meisten freien Webhoster (z.B. Lycos) bieten dieses Feature nicht an, sollte dieses Forum also auf einem freien Webhost laufen, kann diese Funktion nicht benutzt werden, auf einem normalen Server sollte es hingegen keine Probleme geben.<br /><br />Wenn Du auf "Weiter" klickst wird das Script die Software des Forums pr�fen. Sollte Deine Webseite langsam sein, wird dies einige Zeit in Anspruch nehmen. Bitte bewahre die Ruhe und klicke nicht auf "Stop" im Browser, wenn es Verz�gerungen gibt. Sollte der Server oder die Webseite langsam sein k�nnte es sein, das das Script in einen Timeout l�uft. Sollte das passieren, musst Du den Timeout-Wert erh�hen.',
    'xs_update_name' => 'Name',
    'xs_update_type' => 'Typ',
    'xs_update_current_version' => 'Deine Version',
    'xs_update_latest_version' => 'Letzte Version',
    'xs_update_downloadinfo' => 'Download URL',
    'xs_update_timeout' => 'Timeout f�r Update Script (Sekunden):',
    'xs_update_continue' => 'Weiter',


    'xs_update_total2' => 'Fehler: {NUM}',
    'xs_update_total3' => 'Updates verf�gbar: {NUM}',
    'xs_update_select1' => 'W�hle die zu aktualisierenden Punkte',
    'xs_update_types' => array(
		0 => 'Unbekannt',
		1 => 'Style',
		2 => 'Mod',
		3 => 'phpBB',
		4 => 'Icy Phoenix'
	),
    'xs_update_fileinfo' => 'Weitere Info',
    'xs_update_nothing' => 'Es gibt kein Update.',
    'xs_update_noupdate' => 'Du verwendest bereits die aktuelle Version.',

    'xs_update_error_url' => 'Fehler: Konnte URL %s nicht laden',
    'xs_update_error_noitem' => 'Fehler: Keine Update Information verf�gbar',
    'xs_update_error_noconnect' => 'Fehler: Konnte nicht mit dem Update Server verbinden',

    'xs_update_download' => 'Download',
    'xs_update_downloadinfo2' => 'Download/Info',
    'xs_update_info' => 'Webseite',

    'xs_permission_denied' => 'Zugriff verweigert',

    'xs_download_lc' => 'Download',
    'xs_info_lc' => 'Info',

/*
* style configuration
*/
    'Template_Config' => 'Template Konfiguration',
    'xs_style_configuration' => 'Template Konfiguration',
	)
);

?>