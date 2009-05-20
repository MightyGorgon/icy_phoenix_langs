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
	'Version_info' => '<br />Statistik �terkodat av <a href="http://www.icyphoenix.com/">Mighty Gorgon</a> baserat p� Statistics Mod Version %s &copy; 2002 <a href="http://www.opentools.de/board">Acyd Burn</a>',

// These Language Variables are available for all installed Modules
	'Rank' => 'V�rdering',
	'Percent' => 'Procent',
	'Graph' => 'Diagram',
	'Uses' => 'Anv�ndare',
	'How_many' => 'Hur M�nga',

// Main Language

// Page Header/Footer
	'Install_info' => 'Installerat den %s', //%s = date
	'Viewed_info' => 'Statistik Sidan Laddad %d G�nger', //%d = number
	'Statistics_title' => 'Forum Statistik',

// Admin Language
	'Statistics_management' => 'Statistik Moduler',
	'Statistics_config' => 'Statistik Konfiguration',

// Statistics Config
	'Statistics_config_title' => 'Statistik Konfiguration',

	'Return_limit' => 'Retur Begr�nsning',
	'Return_limit_desc' => '<b>Antalet objekt som ska ing� i varje rankning.</b><br /> Detta �r automatiskt skickat till samtliga moduler som anges h�r.',
	'Clear_cache' => 'Rensa Modul Cache',
	'Clear_cache_desc' => 'Markera kryssrutan f�r att rensa bort alla nuvarande cachade data f�r alla moduler.',
	'Modules_directory' => 'Modul Katalog',
	'Modules_directory_desc' => 'Katalogens f�rh�llande till Icy Phoenix katalogen d�r moduler finns.<br /><b>Notera:</b>Att ett avslutande / eller \ f�r inte anv�ndas!',

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
	'Auth_settings_updated' => 'Tillst�nds Inst�llningar - [Dessa �r alltid uppdaterade]',

// Modules Management
	'Back_to_management' => 'Tillbaka till Modulers Management Sk�rm',
	'Statistics_modules_title' => 'Statistik Modul Management',

	'Module_name' => 'Namn',
	'Module_file_name' => 'Modul Namn',
	'Modules_order_update' => 'Moduler Uppdaterade',
	'Directory_name' => 'Katalog Namn',
	'Status' => 'Status',
	'Update_time_minutes' => 'Uppdaterings tid i minuter',
	'Update_time_desc' => 'Tids Intervall (i minuter) f�r att uppdatera den cachade datan med ny data.',
	'Auto_set_update_time' => '<span class="genmed"><b>Best�m och ange rekommenderade Uppdaterings Tiden f�r varje Installerad (och Aktiv) Modul.</b></span><br /><span class="genmed"><b>T�nk p�: Det kan ta l�ng tid.</b></span><br /><span class="genmed"><i>Tips: Du kan justera moduler genom att anv�nda dra och sl�pp.</i></span>',
	'Uninstall_module' => 'Avinstallera Modul',
	'Uninstall_module_desc' => 'Markera modulen med "inte installerad" status, s� att du kan installera den med installations kommandon.  Det kommer inte att radera modulen fr�n filsystemet, du m�ste manuellt ta bort modul mappen f�r att ta bort den helt.',
	'Active_desc' => 'Alternativ om modulen �r aktiv, s� den visas beroende p� vilken inst�llning det �r p� R�ttigheterna.',
	'Go' => 'G�',
	'Update_Modules' => 'Uppdatera Moduler',

	'Not_allowed_to_install' => 'Du kan inte installera denna modul. Fr�mst beror detta p� att du inte har installerat ett Mod som kr�vs f�r att k�ra den h�r modulen. Kontakta F�rfattare av denna modul om du har fr�gor och om Extra Info som �r tryckt h�r inte �r rimligt f�r dig.',
	'Wrong_stats_mod_version' => 'Du kan inte installera denna modul, eftersom din Statistik Mod Version inte st�mmer med den version som kr�vs av Modulen. F�r att installera och k�ra Modulen m�ste du ha minst version %s av Statistik Modulen.', // replace %s with Version (2.1.3 for example)
	'Module_install_error' => 'Det uppstod ett fel av n�gon typ n�r du installerade denna modul. Mest sannolikt �r att vissa SQL-kommandon inte kan verkst�llas, kolla efter felmeddelanden ovan.',

	'Preview_debug_info' => 'Denna Modul genererades i %f sekunder: %d queries var avr�ttade.', // Replace %f with seconds and %d with queries
	'Update_time_recommend' => 'Statistik Modulen rekommenderar (beroende p� debug info) en uppdaterings tid av <b>%d</b> Minuter.', // Replace %d with Minutes

// Modules

	'module_name__stats_overview_section' => 'Statistik �versikt',

	'module_name_admin_statistics' => 'Administrativ Statistik',
	'Statistic' => 'Statistik',
	'Value' => 'V�rde',
	'Number_posts' => 'Antal inl�gg',
	'Posts_per_day' => 'Inl�gg per dag',
	'Number_topics' => 'Antal �mnen',
	'Topics_per_day' => '�mnen per dag',
	'Number_users' => 'Antal anv�ndare',
	'Users_per_day' => 'Anv�ndare per dag',
	'Board_started' => 'Forum startade',
	'Avatar_dir_size' => 'Avatar katalog storlek',
	'Database_size' => 'Databas storlek',
	'Gzip_compression' => 'Gzip kompression',
	'Not_available' => 'Inte tillg�nglig',
	'Board_Up_Days' => 'Forum Upp Dagar',
	'Latest_Reg_User' => 'Senaste Anv�ndare Registrerad',
	'Latest_Reg_User_Date' => 'Senaste Anv�ndare Registrerings Datum',
	'Most_Ever_Online' => 'Flest anv�ndare n�gonsin Online',
	'Most_Ever_Online_Date' => 'Flest anv�ndare n�gonsin online Datum',
	'Disk_usage' => 'Diskanv�ndning',
	'Title' => 'Genomsnittliga Inl�gg per anv�ndare',
	'Average_Posts' => 'Genomsnittliga Inl�gg per anv�ndare:',

	'module_name_average_posts_per_user' => 'Genomsnittliga inl�gg per anv�ndare',

	'module_name_age_clusters' => '�lder Kluster',
	'AGE' => '�lder',
	'LESS_THAN' => 'Mindre �n',
	'MORE_THAN' => 'Mer �n',

	'module_name_fastest_users' => 'Snabbaste Anv�ndaren',
	'time_on_forum' => 'Dagar p� forumet',
	'posts_day' => 'Meddelanden per dag',
	'Statistics' => 'Statistik',

	'module_name_interesting_topics' => 'Mest Intressanta �mnen',
	'Rate' => 'Betygs�tt (visningar/meddelanden)',
	'Topic' => '�mnen',

	'module_name_latest_topics' => 'Senaste �mnen',
	'Rank' => 'Rank',
	'Latest_Topics' => 'Senaste �mnen',
	'Post_time' => 'Post tid',

	'module_name_month_stat' => 'M�nads Statistik',
	'New_users' => 'Nya Anv�ndare',
	'New_replies' => 'Nya Svar',
	'New_topics' => 'Nya �mnen',
	'Avg_Table' => 'Tabell Genomsnittliga',
	'Sum_Table' => 'Tabell Sum',

	'module_name_most_active_topics' => 'Mest Aktiva �mnen',

	'module_name_most_active_topicstarter' => 'Mest Aktiva �mnes Startare',

	'module_name_most_logged_on_users' => 'Mest Inloggade Anv�ndare',
	'Time2' => 'Logged On Time',

	'module_name_most_used_languages' => 'Spr�k',
	'Language' => 'Spr�k',

	'module_name_most_used_styles' => 'Stilar',
	'Style' => 'Stilar',

	'module_name_most_viewed_topics' => 'Mest Visade �mnen',
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
	'Year' => '�r',
	'Month' => 'M�nad',
	'Number' => 'Antal',

	'module_name_new_posts_by_month' => 'Nya inl�gg per m�nad',
	'Posts_month' => 'Antal nya inl�gg per m�nad',

	'module_name_new_topics_by_month' => 'Nya �mnen per m�nad',
	'Topics_month' => 'Antal nya inl�gg per m�nad',

	'module_name_new_users_by_month' => 'Nya anv�ndare per m�nad',
	'Signup_month' => 'Antal nya anv�ndare per m�nad',

	'module_name_posting_by_day_of_week' => 'Dag-av-Vecka Traffic: Inl�gg',
	'Traffic_posts' => 'Dag-av-Vecka Traffic: Inl�gg',
	'Dow' => 'Dag',

	'module_name_registrations_by_day_of_week' => 'Dag-av-Vecka Traffic: Registreringar',
	'Traffic_reg' => 'Dag-av-Vecka Traffic: Registreringar',
	'New_users' => 'Nya Anv�ndare',

	'module_name_site_hist_daily_stats_current_week' => 'Innevarande Vecka Dagens Statistik',

	'module_name_site_hist_hours_stats_current_day' => 'Aktuell Dag Statistik',

	'module_name_site_hist_month_top_posters' => 'Innevarande M�nad Topp Postare Anv�ndare',
	'Month_Var' => '[%s]', // %s will be replaced by the current Month

	'module_name_site_hist_monthly_stats_current_year' => 'Innevarande �r M�nads Statistik',

	'module_name_site_hist_week_top_posters' => 'Innevarande Vecka Topp Postare Anv�ndare',
	'Week_Var' => '[%s]', // %s will be replaced by the current Week

	'module_name_top_attachments' => 'Topp Nerladdade Bilagor',
	'File_name' => 'Filnamn',
	'File_comment' => 'Fil Kommentar',

	'module_name_top_posters' => 'Topp Inl�ggare',

	'module_name_top_smilies' => 'Mest Anv�nda Smileys',
	'smiley_url' => 'Bild',
	'smiley_code' => 'Kod',

	'module_name_top_words' => 'Mest Anv�nda Orden',
	'Word' => 'Ord',
	'Uses2' => 'Anv�nds',

	'module_name_topics_by_day_of_week' => 'Dag-av-Vecka Traffic: �mnen',
	'Traffic_topics' => 'Dag-av-Vecka Traffic: �mnen',
	'Dow' => 'Dag',

	'module_name_users_from_where' => 'Anv�ndare Placering',
	'From_where_title' => 'Var �r anv�ndarna fr�n',
	'From_where' => 'Varifr�n',

	'module_name_users_gender' => 'K�n',
	'Users' => 'Anv�ndare',

	'module_name_users_ranks' => 'V�rderingar',
	'Rank_image' => 'V�rdering Bild',
	'Rank_range' => 'V�rderings meddelanden',
	'Rank_special' => 'Speciell v�rdering',
	)
);

?>