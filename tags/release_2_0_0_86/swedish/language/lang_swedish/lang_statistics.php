<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_statistics.php 64 2008-12-01 21:14:17Z Mighty Gorgon $
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
	'How_many' => 'Hur många',

// Main Language

// Page Header/Footer
	'Install_info' => 'Installerat den %s', //%s = date
	'Viewed_info' => 'Statistik sidan laddad %d gånger', //%d = number
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
	'Messages' => 'Admin meddelanden',
	'Updated' => 'Uppdaterad',
	'Active' => 'Aktiva',
	'Activate' => 'Aktivera',
	'Activated' => 'Aktivt',
	'Not_active' => 'Ej aktiv',
	'Deactivate' => 'Avaktivera',
	'Deactivated' => 'Avaktiverade',
	'Install' => 'Installera',
	'Installed' => 'Installerad',
	'Uninstall' => 'Avinstallera',
	'Uninstalled' => 'Avinstallerats',
	'Update_time' => 'Uppdatera tTid',
	'Auth_settings_updated' => 'Tillstånds Inställningar - [Dessa är alltid uppdaterade]',

// Modules Management
	'Back_to_management' => 'Tillbaka till modulers management skärm',
	'Statistics_modules_title' => 'Statistik Modul Management',

	'Module_name' => 'Namn',
	'Module_file_name' => 'Modul namn',
	'Modules_order_update' => 'Moduler uppdaterade',
	'Directory_name' => 'Katalog namn',
	'Status' => 'Status',
	'Update_time_minutes' => 'Uppdaterings tid i minuter',
	'Update_time_desc' => 'Tids intervall (i minuter) för att uppdatera den cachade datan med ny data.',
	'AUTO_SET_UPDATE_TIME' => '<span class="genmed"><b>Bestäm och ange rekommenderad uppdaterings tiden för varje installerad (och aktiv) modul.</b></span><br /><span class="genmed"><b>Tänk på: Det kan ta lång tid.</b></span><br /><span class="genmed"><i>Tips: Du kan justera moduler genom att använda dra och släpp.</i></span>',
	'STAT_BLOCKS_SORT' => '<i>Hint: You can adjust modules order using drag and drop.</i>',
	'Uninstall_module' => 'Avinstallera modul',
	'Uninstall_module_desc' => 'Markera modulen med "inte installerad" status, så att du kan installera den med installations kommandon.  Det kommer inte att radera modulen från filsystemet, du måste manuellt ta bort modul mappen för att ta bort den helt.',
	'Active_desc' => 'Alternativ om modulen är aktiv, så den visas beroende på vilken inställning det är på rättigheterna.',
	'Go' => 'Gå',
	'Update_Modules' => 'Uppdatera Moduler',

	'Not_allowed_to_install' => 'Du kan inte installera denna modul. Främst beror detta på att du inte har installerat ett Mod som krävs för att köra den här modulen. Kontakta Författare av denna modul om du har frågor och om Extra Info som är tryckt här inte är rimligt för dig.',
	'Wrong_stats_mod_version' => 'Du kan inte installera denna modul, eftersom din Statistik Mod Version inte stämmer med den version som krävs av Modulen. För att installera och köra Modulen måste du ha minst version %s av Statistik Modulen.', // replace %s with Version (2.1.3 for example)
	'Module_install_error' => 'Det uppstod ett fel av någon typ när du installerade denna modul. Mest sannolikt är att vissa SQL-kommandon inte kan verkställas, kolla efter felmeddelanden ovan.',

	'Preview_debug_info' => 'Denna Modul genererades i %f sekunder: %d queries var avrättade.', // Replace %f with seconds and %d with queries
	'Update_time_recommend' => 'Statistik Modulen rekommenderar (beroende på debug info) en uppdaterings tid av <b>%d</b> Minuter.', // Replace %d with Minutes

// Modules

	'module_name__stats_overview_section' => 'Statistik översikt',

	'module_name_admin_statistics' => 'Administrativ statistik',
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
	'Board_Up_Days' => 'Forum upp dagar',
	'Latest_Reg_User' => 'Senaste användare registrerad',
	'Latest_Reg_User_Date' => 'Senaste användare registrerings datum',
	'Most_Ever_Online' => 'Flest användare någonsin Online',
	'Most_Ever_Online_Date' => 'Flest användare någonsin online datum',
	'Disk_usage' => 'Diskanvändning',
	'Title' => 'Genomsnittliga inlägg per användare',
	'Average_Posts' => 'Genomsnittliga inlägg per användare:',

	'module_name_average_posts_per_user' => 'Genomsnittliga inlägg per användare',

	'module_name_age_clusters' => 'Ålder Kluster',
	'AGE' => 'Ålder',
	'LESS_THAN' => 'Mindre än',
	'MORE_THAN' => 'Mer än',

	'module_name_fastest_users' => 'Snabbaste användaren',
	'time_on_forum' => 'Dagar på forumet',
	'posts_day' => 'Meddelanden per dag',
	'Statistics' => 'Statistik',

	'module_name_interesting_topics' => 'Mest intressanta ämnen',
	'Rate' => 'Betygsätt (visningar/meddelanden)',
	'Topic' => 'Ämnen',

	'module_name_latest_topics' => 'Senaste ämnen',
	'Rank' => 'Rank',
	'Latest_Topics' => 'Senaste ämnen',
	'Post_time' => 'Post tid',

	'module_name_month_stat' => 'Månads statistik',
	'New_users' => 'Nya användare',
	'New_replies' => 'Nya svar',
	'New_topics' => 'Nya ämnen',
	'Avg_Table' => 'Tabell genomsnittliga',
	'Sum_Table' => 'Tabell sum',

	'module_name_most_active_topics' => 'Mest aktiva ämnen',

	'module_name_most_active_topicstarter' => 'Mest aktiva ämnes startare',

	'module_name_most_logged_on_users' => 'Mest inloggade användare',
	'Time2' => 'Logged On Time',

	'module_name_most_used_languages' => 'Språk',
	'Language' => 'Språk',

	'module_name_most_used_styles' => 'Stilar',
	'Style' => 'Stilar',

	'module_name_most_viewed_topics' => 'Mest visade ämnen',
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

	'module_name_posting_by_day_of_week' => 'Dag-av-Vecka Trafik: Inlägg',
	'Traffic_posts' => 'Dag-av-Vecka Trafik: Inlägg',
	'Dow' => 'Dag',

	'module_name_registrations_by_day_of_week' => 'Dag-av-Vecka Trafik: Registreringar',
	'Traffic_reg' => 'Dag-av-Vecka Trafik: Registreringar',
	'New_users' => 'Nya användare',

	'module_name_site_hist_daily_stats_current_week' => 'Innevarande vecka dagens statistik',

	'module_name_site_hist_hours_stats_current_day' => 'Aktuell dag statistik',

	'module_name_site_hist_month_top_posters' => 'Innevarande månad topp postare användare',
	'Month_Var' => '[%s]', // %s will be replaced by the current Month

	'module_name_site_hist_monthly_stats_current_year' => 'Innevarande är månads statistik',

	'module_name_site_hist_week_top_posters' => 'Innevarande vecka topp postare användare',
	'Week_Var' => '[%s]', // %s will be replaced by the current Week

	'module_name_top_attachments' => 'Topp nerladdade bilagor',
	'File_name' => 'Filnamn',
	'File_comment' => 'Fil kommentar',

	'module_name_top_posters' => 'Topp inläggare',

	'module_name_top_smilies' => 'Mest använda smileys',
	'smiley_url' => 'Bild',
	'smiley_code' => 'Kod',

	'module_name_top_words' => 'Mest använda orden',
	'Word' => 'Ord',
	'Uses2' => 'Används',

	'module_name_topics_by_day_of_week' => 'Dag-av-Vecka Trafik: Ämnen',
	'Traffic_topics' => 'Dag-av-Vecka Trafik: Ämnen',
	'Dow' => 'Dag',

	'module_name_users_from_where' => 'Användare placering',
	'From_where_title' => 'Var är användarna från',
	'From_where' => 'Varifrån',

	'module_name_users_gender' => 'Kön',
	'Users' => 'Användare',

	'module_name_users_ranks' => 'Värderingar',
	'Rank_image' => 'Värderings bild',
	'Rank_range' => 'Värderings meddelanden',
	'Rank_special' => 'Speciell värdering',
	)
);

?>