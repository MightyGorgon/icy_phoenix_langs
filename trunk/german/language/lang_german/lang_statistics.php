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
* Nivisec.com (support@nivisec.com)
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

// Original Statistics Mod (c) 2002 Nivisec - http://nivisec.com/mods

$lang = array_merge($lang, array(
// Wenn du den Autor auf der Statistik Seite würdigen möchtest, dann unkommentiere die zweite Zeile.
// 'Version_info' => '<br />Statistik Mod Version %s', //%s = nummer
	'Version_info' => '<br />Statistik Mod recoded by <a href="http://www.icyphoenix.com/">Mighty Gorgon</a> based on Version %s &copy; 2002 <a href="http://www.opentools.de/board">Acyd Burn</a>',

// Diese Sprach Variablen sind für alle installierten Module verfügbar
	'Rank' => 'Rang',
	'Percent' => 'Prozent',
	'Graph' => 'Balken',
	'Uses' => 'Anzahl',
	'How_many' => 'Wie viele',

// Main Language

// Page Header/Footer
	'Install_info' => 'Installiert am %s', //%s = date
	'Viewed_info' => 'Statistik Seite wurde %d mal geladen', //%d = number
	'Statistics_title' => 'Board Statistiken',

// Admin Language
	'Statistics_management' => 'Statistik Module',
	'Statistics_config' => 'Statistik Konfiguration',

// Statistics Config
	'Statistics_config_title' => 'Statistik Konfiguration',

	'Return_limit' => 'Rückgabelimit',
	'Return_limit_desc' => 'Die Anzahl der Punkte die in jedem Ranking enthalten sind. Diese Variable ist in jedem Modul verfügbar.',
	'Clear_cache' => 'Modul Cache leeren',
	'Clear_cache_desc' => 'Leert die vorgehaltenen gecachten Daten aller Module',
	'Modules_directory' => 'Modulverzeichnis',
	'Modules_directory_desc' => 'Das Verzeichnis relativ zu deinem Icy Phoenix Verzeichnis, in dem die Module gespeichert werden. Es ist nicht erlaubt, / oder \ im Pfad zu benutzen.',

// Status Messages
	'Messages' => 'Admin Nachrichten',
	'Updated' => 'Aktualisiert',
	'Active' => 'Aktiv',
	'Activate' => 'Aktivieren',
	'Activated' => 'Aktiviert',
	'Not_active' => 'Nicht Aktiv',
	'Deactivate' => 'Deaktivieren',
	'Deactivated' => 'Deaktiviert',
	'Install' => 'Installieren',
	'Installed' => 'Installiert',
	'Uninstall' => 'Deinstallieren',
	'Uninstalled' => 'Deinstalliert',
	'Update_time' => 'Update Zeit',
	'Auth_settings_updated' => 'Berechtigungen - [Diese werden immer aktualisiert]',

// Modules Management
	'Back_to_management' => 'Zurück zur Modul Konfiguration',
	'Statistics_modules_title' => 'Statistik Modul Verwaltung',

	'Module_name' => 'Name',
	'Module_file_name' => 'Modul Name',
	'Modules_order_update' => 'Module aktualisiert',
	'Directory_name' => 'Verzeichnisname',
	'Status' => 'Status',
	'Update_time_minutes' => 'Update Zeit in Minuten',
	'Update_time_desc' => 'Zeitintervall (in Minuten) bis zum Neuladen der Daten aus dem Modul. D.h. in der eingestellten Zeit werden die gecachten Daten zum Anzeigen genommen.',
	'AUTO_SET_UPDATE_TIME' => 'Ermittle und setze die vorgeschlagenen Update Zeiten für jedes Installiertes (und Aktive) Modul. Bitte Beachte: Das kann etwas länger dauern.',
	'STAT_BLOCKS_SORT' => '<i>Tipp: Sie können die Module auch per Drag &amp; Drop anordnen.</i>',
	'Uninstall_module' => 'Modul deinstallieren',
	'Uninstall_module_desc' => 'Markiert das Modul als "nicht installiert", so das es möglich ist das Modul noch einmal zu installieren. Es löscht das Modul nicht von der Festplatte, du musst das Modul Verzeichnis löschen um das Modul komplett zu deinstallieren.',
	'Active_desc' => 'Option, ob das Modul aktiv ist oder nicht. Im aktiviertem Zustand wird das Modul in abhängigkeit der Berechtigungen in den Statistiken angezeigt.',
	'Go' => 'Los',
	'Update_Modules' => 'Module aktualisieren',

	'Not_allowed_to_install' => 'Dieses Modul kann nicht installiert werden. Meistens deshalb nicht, weil das Modul ein Mod benötigt, welches du nicht installiert hast. Bitte kontaktiere den Autoren des Moduls falls du weitere Fragen hast oder wenn die obigen Informationen nicht ausreichen.',
	'Wrong_stats_mod_version' => 'Dieses Modul kann nicht installiert werden, da es eine höhere Statistik Mod Version benötigt. Um dieses Modul ordnungsgemäß ausführen zu können benötigst du mindestens eine Statistik Mod Version %s.', // replace %s with Version (2.1.3 for example)
	'Module_install_error' => 'Es ist ein Fehler beim Installieren des Moduls aufgetreten. Bitte prüfe die obigen Ausgaben auf Fehler und kontaktiere den Modul Autoren.',

	'Preview_debug_info' => 'Dieses Modul wurde in %f Sekunden generiert: %d queries wurden ausgeführt.', // Replace %f with seconds and %d with queries
	'Update_time_recommend' => 'Das Statistik Mod schlägt (auf Basis der Debug Informationen) eine Update Zeit von <b>%d</b> Minuten vor.', // Replace %d with Minutes

// Modules

	'module_name__stats_overview_section' => 'Statistik Übersicht',

	'module_name_admin_statistics' => 'Administrative Statistik',
	'Statistic' => 'Statistik',
	'Value' => 'Wert',
	'Number_posts' => 'Anzahl der Beiträge',
	'Posts_per_day' => 'Beiträge pro Tag',
	'Number_topics' => 'Anzahl der Themen',
	'Topics_per_day' => 'Themen pro Tag',
	'Number_users' => 'Anzahl der Benutzer',
	'Users_per_day' => 'Benutzer pro Tag',
	'Board_started' => 'Board startete am',
	'Avatar_dir_size' => 'Größe des Avatarordners',
	'Database_size' => 'Größe der Datenbank',
	'Gzip_compression' => 'GZip-Kompression',
	'Not_available' => 'Nicht verfügbar',
	'Board_Up_Days' => 'Tage seit dem Start',
	'Latest_Reg_User' => 'Letzter registrierter Benutzer',
	'Latest_Reg_User_Date' => 'Letzter registrierter Benutzer am',
	'Most_Ever_Online' => 'Meisten Benutzer auf einmal Online',
	'Most_Ever_Online_Date' => 'Meisten Benutzer auf einmal Online am',
	'Disk_usage' => 'Speicherplatzverbrauch',
	'Title' => 'Durchschnittliche Beiträge pro Benutzer',
	'Average_Posts' => 'Durchschnittliche Beiträge pro Benutzer:',

	'module_name_average_posts_per_user' => 'Durschnittliche Beiträge pro Benutzer',

	'module_name_age_clusters' => 'Altersgruppen',
	'AGE' => 'Alter',
	'LESS_THAN' => 'Weniger als',
	'MORE_THAN' => 'Mehr als',

	'module_name_fastest_users' => 'Schnellste Benutzer',
	'time_on_forum' => 'Tage im Forum',
	'posts_day' => 'Beiträge pro Tag',
	'Statistics' => 'Statistik',

	'module_name_interesting_topics' => 'Interessanteste Themen',
	'Rate' => 'Rate (Ansichten/Beiträge)',
	'Topic' => 'Thema',

	'module_name_latest_topics' => 'Letzte Themen',
	'Rank' => 'Rang',
	'Latest_Topics' => 'Neuestes Thema',
	'Post_time' => 'Beitragszeit',

	'module_name_month_stat' => 'Monats-Statistik',
	'New_users' => 'Neue Benutzer',
	'New_replies' => 'Neue Beiträge',
	'New_topics' => 'Neue Themen',
	'Avg_Table' => 'Tabellen-Durchschnitt',
	'Sum_Table' => 'Tabellen-Summe',

	'module_name_most_active_topics' => 'Aktivste Themen',

	'module_name_most_active_topicstarter' => 'Die aktivsten Themenstarter',

	'module_name_most_logged_on_users' => 'Am häufigsten eingeloggte Benutzer',
	'Time2' => 'Eingeloggt für',

	'module_name_most_used_languages' => 'Verwendete Sprachen',
	'Language' => 'Sprache',

	'module_name_most_used_styles' => 'Verwendete Styles',
	'Style' => 'Style',

	'module_name_most_viewed_topics' => 'Am häufigsten angesehene Themen',
	'Month_jan' => 'Jan',
	'Month_feb' => 'Feb',
	'Month_mar' => 'Mrz',
	'Month_apr' => 'Apr',
	'Month_may' => 'Mai',
	'Month_jun' => 'Jun',
	'Month_jul' => 'Jul',
	'Month_aug' => 'Aug',
	'Month_sep' => 'Sep',
	'Month_oct' => 'Okt',
	'Month_nov' => 'Nov',
	'Month_dec' => 'Dez',
	'Year' => 'Jahr',
	'Month' => 'Monat',
	'Number' => 'Anzahl',

	'module_name_new_posts_by_month' => 'Neue Beiträge pro Monat',
	'Posts_month' => 'Neue Beiträge pro Monat',

	'module_name_new_topics_by_month' => 'Neue Themen pro Monat',
	'Topics_month' => 'Neue Themen pro Monat',

	'module_name_new_users_by_month' => 'Neue Benutzer pro Monat',
	'Signup_month' => 'Neue Benutzer pro Monat',

	'module_name_posting_by_day_of_week' => 'Tag der Woche Traffic: Beiträge',
	'Traffic_posts' => 'Tag der Woche Traffic: Beiträge',
	'Dow' => 'Tag',

	'module_name_registrations_by_day_of_week' => 'Tag der Woche Traffic: Registrierungen',
	'Traffic_reg' => 'Tag der Woche Traffic: Registrierungen',
	'New_users' => 'Neue Benutzer',

	'module_name_site_hist_daily_stats_current_week' => 'Aktulle Wochen-Tages-Statistik',

	'module_name_site_hist_hours_stats_current_day' => 'Aktulle Tages-Statistik',

	'module_name_site_hist_month_top_posters' => 'Die aktivesten Benutzer diesen Monat',
	'Month_Var' => '[%s]', // %s wird durch den aktuellen Monat ersetzt

	'module_name_site_hist_monthly_stats_current_year' => 'Laufendes Jahr Monats-Statistik',

	'module_name_site_hist_week_top_posters' => 'Die aktivesten Benutzer diese Woche',
	'Week_Var' => '[%s]', // %s wird durch die aktuelle Woche ersetzt

	'module_name_top_attachments' => 'Am häufigsten heruntergeladene Dateianhänge',
	'File_name' => 'Dateiname',
	'File_comment' => 'Dateikommentar',

	'module_name_top_posters' => 'Top Poster',

	'module_name_top_smilies' => 'Am häufigsten verwendete Smilies',
	'smiley_url' => 'Smiley',
	'smiley_code' => 'Smiley Code',

	'module_name_top_words' => 'Am häufigsten verwendete Wörter',
	'Word' => 'Wort',
	'Uses2' => 'Verwendet',

	'module_name_topics_by_day_of_week' => 'Tag der Woche Traffic: Themen',
	'Traffic_topics' => 'Tag der Woche Traffic: Themen',
	'Dow' => 'Tag',

	'module_name_users_from_where' => 'Woher kommen die Benutzer',
	'From_where_title' => 'Woher kommen die Benutzer',
	'From_where' => 'Wohnort',

	'module_name_users_gender' => 'Geschlechter',
	'Users' => 'Benutzer',

	'module_name_users_ranks' => 'Ränge',
	'Rank_image' => 'Rang Bild',
	'Rank_range' => 'Rang Beiträge',
	'Rank_special' => 'Spezialrang',
	)
);

?>