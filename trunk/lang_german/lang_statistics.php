<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_statistics.php 24 2008-09-15 20:00:00Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Nivisec.com (support@nivisec.com)
* TheSteffen, KugeLSichA, Tom
*
*/

// Original Statistics Mod (c) 2002 Nivisec - http://nivisec.com/mods

// Wenn du den Autor auf der Statistik Seite würdigen möchtest, dann unkommentiere die zweite Zeile.
$lang['Version_info'] = '<br />Statistik Mod Version %s'; //%s = nummer
//$lang['Version_info'] = '<br />Statistics Mod Version %s &copy; 2002 <a href="http://www.opentools.de/board">Acyd Burn</a>';

// Diese Sprach Variablen sind für alle installierten Module verfügbar
$lang['Rank'] = 'Rang';
$lang['Percent'] = 'Prozent';
$lang['Graph'] = 'Balken';
$lang['Uses'] = 'Anzahl';
$lang['How_many'] = 'Wie viele';

// Main Language

// Page Header/Footer
$lang['Install_info'] = 'Installiert am %s'; //%s = date
$lang['Viewed_info'] = 'Statistik Seite wurde %d mal geladen'; //%d = number
$lang['Statistics_title'] = 'Board Statistiken';

// Admin Language
$lang['Statistics_management'] = 'Statistik Module';
$lang['Statistics_config'] = 'Statistik Konfiguration';

// Statistics Config
$lang['Statistics_config_title'] = 'Statistik Konfiguration';

$lang['Return_limit'] = 'Rückgabelimit';
$lang['Return_limit_desc'] = 'Die Anzahl der Punkte die in jedem Ranking enthalten sind. Diese Variable ist in jedem Modul verfügbar.';
$lang['Clear_cache'] = 'Modul Cache leeren';
$lang['Clear_cache_desc'] = 'Leert die vorgehaltenen gecachten Daten aller Module';
$lang['Modules_directory'] = 'Modulverzeichnis';
$lang['Modules_directory_desc'] = 'Das Verzeichnis relativ zu deinem phpBB Verzeichnis, in dem die Module gespeichert werden. Es ist nicht erlaubt, / oder \ im Pfad zu benutzen.';

// Status Messages
$lang['Messages'] = 'Admin Nachrichten';
$lang['Updated'] = 'Aktualisiert';
$lang['Active'] = 'Aktiv';
$lang['Activate'] = 'Aktivieren';
$lang['Activated'] = 'Aktiviert';
$lang['Not_active'] = 'Nicht Aktiv';
$lang['Deactivate'] = 'Deaktivieren';
$lang['Deactivated'] = 'Deaktiviert';
$lang['Install'] = 'Installieren';
$lang['Installed'] = 'Installiert';
$lang['Uninstall'] = 'Deinstallieren';
$lang['Uninstalled'] = 'Deinstalliert';
$lang['Move_up'] = 'Einen Eintrag hoch';
$lang['Move_down'] = 'Einen Eintrag runter';
$lang['Update_time'] = 'Update Zeit';
$lang['Auth_settings_updated'] = 'Berechtigungen - [Diese werden immer aktualisiert]';

// Modules Management
$lang['Back_to_management'] = 'Zurück zur Modul Konfiguration';
$lang['Statistics_modules_title'] = 'Statistik Modul Verwaltung';

$lang['Module_name'] = 'Name';
$lang['Directory_name'] = 'Verzeichnisname';
$lang['Status'] = 'Status';
$lang['Update_time_minutes'] = 'Update Zeit in Minuten';
$lang['Update_time_desc'] = 'Zeitintervall (in Minuten) bis zum Neuladen der Daten aus dem Modul. D.h. in der eingestellten Zeit werden die gecachten Daten zum Anzeigen genommen.';
$lang['Auto_set_update_time'] = 'Ermittle und setze die vorgeschlagenen Update Zeiten für jedes Installiertes (und Aktive) Modul. Bitte Beachte: Das kann etwas länger dauern.';
$lang['Uninstall_module'] = 'Modul deinstallieren';
$lang['Uninstall_module_desc'] = 'Markiert das Modul als "nicht installiert", so das es möglich ist das Modul noch einmal zu installieren. Es löscht das Modul nicht von der Festplatte, du musst das Modul Verzeichnis löschen um das Modul komplett zu deinstallieren.';
$lang['Active_desc'] = 'Option, ob das Modul aktiv ist oder nicht. Im aktiviertem Zustand wird das Modul in abhängigkeit der Berechtigungen in den Statistiken angezeigt.';
$lang['Go'] = 'Los';

$lang['Not_allowed_to_install'] = 'Dieses Modul kann nicht installiert werden. Meistens deshalb nicht, weil das Modul ein Mod benötigt, welches du nicht installiert hast. Bitte kontaktiere den Autoren des Moduls falls du weitere Fragen hast oder wenn die obigen Informationen nicht ausreichen.';
$lang['Wrong_stats_mod_version'] = 'Dieses Modul kann nicht installiert werden, da es eine höhere Statistik Mod Version benötigt. Um dieses Modul ordnungsgemäß ausführen zu können benötigst du mindestens eine Statistik Mod Version %s.'; // replace %s with Version (2.1.3 for example)
$lang['Module_install_error'] = 'Es ist ein Fehler beim Installieren des Moduls aufgetreten. Bitte prüfe die obigen Ausgaben auf Fehler und kontaktiere den Modul Autoren.';

$lang['Preview_debug_info'] = 'Dieses Modul wurde in %f Sekunden generiert: %d queries wurden ausgeführt.'; // Replace %f with seconds and %d with queries
$lang['Update_time_recommend'] = 'Das Statistik Mod schlägt (auf Basis der Debug Informationen) eine Update Zeit von <b>%d</b> Minuten vor.'; // Replace %d with Minutes

// Modules

$lang['module_name__stats_overview_section'] = 'Statistik Übersicht';

$lang['module_name_admin_statistics'] = 'Administrative Statistik';
$lang['Statistic'] = 'Statistik';
$lang['Value'] = 'Value';
$lang['Number_posts'] = 'Number of posts';
$lang['Posts_per_day'] = 'Posts per day';
$lang['Number_topics'] = 'Number of topics';
$lang['Topics_per_day'] = 'Topics per day';
$lang['Number_users'] = 'Number of users';
$lang['Users_per_day'] = 'Users per day';
$lang['Board_started'] = 'Board started';
$lang['Avatar_dir_size'] = 'Avatar directory size';
$lang['Database_size'] = 'Database size';
$lang['Gzip_compression'] ='Gzip compression';
$lang['Not_available'] = 'Not available';
$lang['Board_Up_Days'] = 'Tage seit dem Start';
$lang['Latest_Reg_User'] = 'Letzter registrierter Benutzer';
$lang['Latest_Reg_User_Date'] = 'Letzter registrierter Benutzer am';
$lang['Most_Ever_Online'] = 'Meisten User auf einem Mal Online';
$lang['Most_Ever_Online_Date'] = 'Meisten User auf einem Mal Online am';
$lang['Disk_usage'] = 'Speicherplatzverbrauch';
$lang['Title'] = 'Durchschnittliche Beiträge pro Benutzer';
$lang['Average_Posts'] = 'Durchschnittliche Beiträge pro Benutzer:';

$lang['module_name_average_posts_per_user'] = 'Durschnittliche Beiträge pro Benutzer';

$lang['module_name_fastest_users'] = 'Schnellste Benutzer';
$lang['time_on_forum'] = 'Tage im Forum';
$lang['posts_day'] = 'Beiträge pro Tag';
$lang['Statistics'] = 'Statistik';

$lang['module_name_interesting_topics'] = 'Interessanteste Themen';
$lang['Rate'] = 'Rate (Ansichten/Beiträge)';
$lang['Topic'] = 'Thema';

$lang['module_name_latest_topics'] = 'Letzte Themen';
$lang['Rank'] = 'Rang';
$lang['Latest_Topics'] = 'Neuestes Thema';
$lang['Post_time'] = 'Beitragszeit';

$lang['module_name_month_stat'] = 'Monats-Statistik';
$lang['New_users'] = 'Neue Benutzer';
$lang['New_replies'] = 'Neue Beiträge';
$lang['New_topics'] = 'Neue Themen';
$lang['Avg_Table'] = 'Tabellen-Durchschnitt';
$lang['Sum_Table'] = 'Tabellen-Summe';

$lang['module_name_most_active_topics'] = 'Aktivste Themen';

$lang['module_name_most_active_topicstarter'] = 'Die aktivsten Themenstarter';

$lang['module_name_most_logged_on_users'] = 'Am meisten eingeloggte Benutzer';
$lang['Time2'] = 'Eingeloggt für';

$lang['module_name_most_used_languages'] = 'Verwendete Sprachen';
$lang['Language'] = 'Sprache';

$lang['module_name_most_used_styles'] = 'Verwendete Styles';
$lang['Style'] = 'Style';

$lang['module_name_most_viewed_topics'] = 'Am häufigsten angesehene Themen';
$lang['Month_jan'] = 'Jan';
$lang['Month_feb'] = 'Feb';
$lang['Month_mar'] = 'Mrz';
$lang['Month_apr'] = 'Apr';
$lang['Month_may'] = 'Mai';
$lang['Month_jun'] = 'Jun';
$lang['Month_jul'] = 'Jul';
$lang['Month_aug'] = 'Aug';
$lang['Month_sep'] = 'Sep';
$lang['Month_oct'] = 'Okt';
$lang['Month_nov'] = 'Nov';
$lang['Month_dec'] = 'Dez';
$lang['Year'] = 'Jahr';
$lang['Month'] = 'Monat';
$lang['Number'] = 'Anzahl';

$lang['module_name_new_posts_by_month'] = 'Neue Beiträge pro Monat';
$lang['Posts_month'] = 'Neue Beiträge pro Monat';

$lang['module_name_new_topics_by_month'] = 'Neue Themen pro Monat';
$lang['Topics_month'] = 'Neue Themen pro Monat';

$lang['module_name_new_users_by_month'] = 'Neue Benutzer pro Monat';
$lang['Signup_month'] = 'Neue Benutzer pro Monat';

$lang['module_name_posting_by_day_of_week'] = 'Tag der Woche Traffic: Beiträge';
$lang['Traffic_posts'] = 'Tag der Woche Traffic: Beiträge';
$lang['Dow'] = 'Tag';

$lang['module_name_registrations_by_day_of_week'] = 'Tag der Woche Traffic: Registrierungen';
$lang['Traffic_reg'] = 'Tag der Woche Traffic: Registrierungen';
$lang['New_users'] = 'Neue Benutzer';

$lang['module_name_site_hist_month_top_posters'] = 'Die aktivesten Benutzer diesen Monat';
$lang['Month_Var'] = '[%s]'; // %s wird durch den aktuellen Monat ersetzt

$lang['module_name_site_hist_week_top_posters'] = 'Die aktivesten Benutzer diese Woche';
$lang['Week_Var'] = '[%s]'; // %s wird durch die aktuelle Woche ersetzt

$lang['module_name_top_attachments'] = 'Am häufigsten heruntergeladene Anhänge';
$lang['File_name'] = 'Dateiname';
$lang['File_comment'] = 'Dateikommentar';

$lang['module_name_top_posters'] = 'Top Poster';

$lang['module_name_top_smilies'] = 'Am häufigsten verwendete Smilies';
$lang['smiley_url'] = 'Smilie';
$lang['smiley_code'] = 'Smilie Code';

$lang['module_name_top_words'] = 'Am häufigsten verwendete Worte';
$lang['Word'] = 'Wort';
$lang['Uses2'] = 'Verwendet';

$lang['module_name_topics_by_day_of_week'] = 'Tag der Woche Traffic: Themen';
$lang['Traffic_topics'] = 'Tag der Woche Traffic: Themen';
$lang['Dow'] = 'Tag';

$lang['module_name_users_from_where'] = 'Woher kommen die Benutzer';
$lang['From_where_title'] = 'Woher kommen die Benutzer';
$lang['From_where'] = 'Wohnort';
$lang['How_many'] = 'Anzahl';

$lang['module_name_users_gender'] = 'Geschlechter';
$lang['Users'] = 'Benutzer';

$lang['module_name_users_ranks'] = 'Ränge';
$lang['Rank_image'] = 'Rangsymbol';
$lang['Rank_range'] = 'Rang Beiträge';
$lang['Rank_special'] = 'Spezialrang';

?>