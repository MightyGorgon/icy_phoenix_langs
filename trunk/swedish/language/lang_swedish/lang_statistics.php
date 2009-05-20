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
* Lopalong
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
// If you want to credit the Author on the Statistics Page, uncomment the second line.
// 'Version_info' => '<br />Statistics Mod Version %s', //%s = number
	'Version_info' => '<br />Statistik återkodat av <a href="http://www.icyphoenix.com/">Mighty Gorgon</a> baserat på Statistics Mod Version %s &copy; 2002 <a href="http://www.opentools.de/board">Acyd Burn</a>',

// These Language Variables are available for all installed Modules
	'Rank' => 'Värdering',
	'Percent' => 'Procent',
	'Graph' => 'Diagram',
	'Uses' => 'Användare',
	'How_many' => 'Hur Många',

// Main Language

// Page Header/Footer
	'Install_info' => 'Installerat den %s', //%s = date
	'Viewed_info' => 'Statistik Sidan Laddad %d Gånger', //%d = number
	'Statistics_title' => 'Forum Statistik',

// Admin Language
	'Statistics_management' => 'Statistik Moduler',
	'Statistics_config' => 'Statistik Konfiguration',

// Statistics Config
	'Statistics_config_title' => 'Statistik Konfiguration',

	'Return_limit' => 'Retur Begränsning',
	'Return_limit_desc' => '<b>Antalet objekt som ska ingå i varje rankning.</b><br /> Detta är automatiskt skickat till samtliga moduler som anges här.',
	'Clear_cache' => 'Rensa Modul Cache',
	'Clear_cache_desc' => 'Markera kryssrutan för att rensa bort alla nuvarande cachade data för alla moduler.',
	'Modules_directory' => 'Modul Katalog',
	'Modules_directory_desc' => 'Katalogens förhållande till Icy Phoenix katalogen där moduler finns.<br /><b>Notera:</b>Att ett avslutande / eller \ får inte användas!',

// Status Messages
	'Messages' => 'Admin Meddelanden',
	'Updated' => 'Uppdaterad',
	'Active' => 'Aktiva',
	'Activate' => 'Aktivera',
	'Activated' => 'Aktivt',
	'Not_active' => 'Ej Aktiv',
	'Deactivate' => 'Avaktivera',
	'Deactivated' => 'Avaktiverade',
	'Install' => 'Installera',
	'Installed' => 'Installerad',
	'Uninstall' => 'Avinstallera',
	'Uninstalled' => 'Avinstallerats',
	'Move_up' => 'Flytta Upp',
	'Move_down' => 'Flytta Ner',
	'Update_time' => 'Uppdatera Tid',
	'Auth_settings_updated' => 'Tillstånds Inställningar - [Dessa är alltid uppdaterade]',

// Modules Management
	'Back_to_management' => 'Tillbaka till Modulers Management Skärm',
	'Statistics_modules_title' => 'Statistik Modul Management',

	'Module_name' => 'Namn',
	'Module_file_name' => 'Modul Namn',
	'Modules_order_update' => 'Moduler Uppdaterade',
	'Directory_name' => 'Katalog Namn',
	'Status' => 'Status',
	'Update_time_minutes' => 'Uppdaterings tid i minuter',
	'Update_time_desc' => 'Tids Intervall (i minuter) för att uppdatera den cachade datan med ny data.',
	'Auto_set_update_time' => '<span class="genmed"><b>Bestäm och ange rekommenderade Uppdaterings Tiden för varje Installerad (och Aktiv) Modul.</b></span><br /><span class="genmed"><b>Tänk på: Det kan ta lång tid.</b></span><br /><span class="genmed"><i>Tips: Du kan justera moduler genom att använda dra och släpp.</i></span>',
	'Uninstall_module' => 'Avinstallera Modul',
	'Uninstall_module_desc' => 'Markera modulen med "inte installerad" status, så att du kan installera den med installations kommandon.  Det kommer inte att radera modulen från filsystemet, du måste manuellt ta bort modul mappen för att ta bort den helt.',
	'Active_desc' => 'Alternativ om modulen är aktiv, så den visas beroende på vilken inställning det är på Rättigheterna.',
	'Go' => 'Gå',
	'Update_Modules' => 'Uppdatera Moduler',

	'Not_allowed_to_install' => 'Du kan inte installera denna modul. Främst beror detta på att du inte har installerat ett Mod som krävs för att köra den här modulen. Kontakta Författare av denna modul om du har frågor och om Extra Info som är tryckt här inte är rimligt för dig.',
	'Wrong_stats_mod_version' => 'Du kan inte installera denna modul, eftersom din Statistik Mod Version inte stämmer med den version som krävs av Modulen. För att installera och köra Modulen måste du ha minst version %s av Statistik Modulen.', // replace %s with Version (2.1.3 for example)
	'Module_install_error' => 'Det uppstod ett fel av någon typ när du installerade denna modul. Mest sannolikt är att vissa SQL-kommandon inte kan verkställas, kolla efter felmeddelanden ovan.',

	'Preview_debug_info' => 'Denna Modul genererades i %f sekunder: %d queries var avrättade.', // Replace %f with seconds and %d with queries
	'Update_time_recommend' => 'Statistik Modulen rekommenderar (beroende på debug info) en uppdaterings tid av <b>%d</b> Minuter.', // Replace %d with Minutes

// Modules

	'module_name__stats_overview_section' => 'Statistik Översikt',

	'module_name_admin_statistics' => 'Administrativ Statistik',
	'Statistic' => 'Statistik',
	'Value' => 'Värde',
	'Number_posts' => 'Antal inlägg',
	'Posts_per_day' => 'Inlägg per dag',
	'Number_topics' => 'Antal ämnen',
	'Topics_per_day' => 'Ämnen per dag',
	'Number_users' => 'Antal användare',
	'Users_per_day' => 'Användare per dag',
	'Board_started' => 'Forum startade',
	'Avatar_dir_size' => 'Avatar katalog storlek',
	'Database_size' => 'Databas storlek',
	'Gzip_compression' => 'Gzip kompression',
	'Not_available' => 'Inte tillgänglig',
	'Board_Up_Days' => 'Forum Upp Dagar',
	'Latest_Reg_User' => 'Senaste Användare Registrerad',
	'Latest_Reg_User_Date' => 'Senaste Användare Registrerings Datum',
	'Most_Ever_Online' => 'Flest användare någonsin Online',
	'Most_Ever_Online_Date' => 'Flest användare någonsin online Datum',
	'Disk_usage' => 'Diskanvändning',
	'Title' => 'Genomsnittliga Inlägg per användare',
	'Average_Posts' => 'Genomsnittliga Inlägg per användare:',

	'module_name_average_posts_per_user' => 'Genomsnittliga inlägg per användare',

	'module_name_age_clusters' => 'Ålder Kluster',
	'AGE' => 'Ålder',
	'LESS_THAN' => 'Mindre än',
	'MORE_THAN' => 'Mer än',

	'module_name_fastest_users' => 'Snabbaste Användaren',
	'time_on_forum' => 'Dagar på forumet',
	'posts_day' => 'Meddelanden per dag',
	'Statistics' => 'Statistik',

	'module_name_interesting_topics' => 'Mest Intressanta Ämnen',
	'Rate' => 'Betygsätt (visningar/meddelanden)',
	'Topic' => 'Ämnen',

	'module_name_latest_topics' => 'Senaste Ämnen',
	'Rank' => 'Rank',
	'Latest_Topics' => 'Senaste Ämnen',
	'Post_time' => 'Post tid',

	'module_name_month_stat' => 'Månads Statistik',
	'New_users' => 'Nya Användare',
	'New_replies' => 'Nya Svar',
	'New_topics' => 'Nya Ämnen',
	'Avg_Table' => 'Tabell Genomsnittliga',
	'Sum_Table' => 'Tabell Sum',

	'module_name_most_active_topics' => 'Mest Aktiva Ämnen',

	'module_name_most_active_topicstarter' => 'Mest Aktiva Ämnes Startare',

	'module_name_most_logged_on_users' => 'Mest Inloggade Användare',
	'Time2' => 'Logged On Time',

	'module_name_most_used_languages' => 'Språk',
	'Language' => 'Språk',

	'module_name_most_used_styles' => 'Stilar',
	'Style' => 'Stilar',

	'module_name_most_viewed_topics' => 'Mest Visade Ämnen',
	'Month_jan' => 'Jan',
	'Month_feb' => 'Feb',
	'Month_mar' => 'Mar',
	'Month_apr' => 'Apr',
	'Month_may' => 'Maj',
	'Month_jun' => 'Jun',
	'Month_jul' => 'Jul',
	'Month_aug' => 'Aug',
	'Month_sep' => 'Sep',
	'Month_oct' => 'Okt',
	'Month_nov' => 'Nov',
	'Month_dec' => 'Dec',
	'Year' => 'År',
	'Month' => 'Månad',
	'Number' => 'Antal',

	'module_name_new_posts_by_month' => 'Nya inlägg per månad',
	'Posts_month' => 'Antal nya inlägg per månad',

	'module_name_new_topics_by_month' => 'Nya ämnen per månad',
	'Topics_month' => 'Antal nya inlägg per månad',

	'module_name_new_users_by_month' => 'Nya användare per månad',
	'Signup_month' => 'Antal nya användare per månad',

	'module_name_posting_by_day_of_week' => 'Dag-av-Vecka Traffic: Inlägg',
	'Traffic_posts' => 'Dag-av-Vecka Traffic: Inlägg',
	'Dow' => 'Dag',

	'module_name_registrations_by_day_of_week' => 'Dag-av-Vecka Traffic: Registreringar',
	'Traffic_reg' => 'Dag-av-Vecka Traffic: Registreringar',
	'New_users' => 'Nya Användare',

	'module_name_site_hist_daily_stats_current_week' => 'Innevarande Vecka Dagens Statistik',

	'module_name_site_hist_hours_stats_current_day' => 'Aktuell Dag Statistik',

	'module_name_site_hist_month_top_posters' => 'Innevarande Månad Topp Postare Användare',
	'Month_Var' => '[%s]', // %s will be replaced by the current Month

	'module_name_site_hist_monthly_stats_current_year' => 'Innevarande År Månads Statistik',

	'module_name_site_hist_week_top_posters' => 'Innevarande Vecka Topp Postare Användare',
	'Week_Var' => '[%s]', // %s will be replaced by the current Week

	'module_name_top_attachments' => 'Topp Nerladdade Bilagor',
	'File_name' => 'Filnamn',
	'File_comment' => 'Fil Kommentar',

	'module_name_top_posters' => 'Topp Inläggare',

	'module_name_top_smilies' => 'Mest Använda Smileys',
	'smiley_url' => 'Bild',
	'smiley_code' => 'Kod',

	'module_name_top_words' => 'Mest Använda Orden',
	'Word' => 'Ord',
	'Uses2' => 'Används',

	'module_name_topics_by_day_of_week' => 'Dag-av-Vecka Traffic: Ämnen',
	'Traffic_topics' => 'Dag-av-Vecka Traffic: Ämnen',
	'Dow' => 'Dag',

	'module_name_users_from_where' => 'Användare Placering',
	'From_where_title' => 'Var är användarna från',
	'From_where' => 'Varifrån',

	'module_name_users_gender' => 'Kön',
	'Users' => 'Användare',

	'module_name_users_ranks' => 'Värderingar',
	'Rank_image' => 'Värdering Bild',
	'Rank_range' => 'Värderings meddelanden',
	'Rank_special' => 'Speciell värdering',
	)
);

?>