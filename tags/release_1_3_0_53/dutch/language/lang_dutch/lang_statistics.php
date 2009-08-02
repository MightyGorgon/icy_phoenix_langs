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
//'Version_info' => '<br />Statistics Mod Version %s'; //%s = number
	'Version_info' => 'Statistieken bijgehouden door <a href="http://www.icyphoenix.com/">Mighty Gorgon</a> gebaseerd op Statistics Mod %s &copy; 2002 <a href="http://www.opentools.de/board">Acyd Burn</a>',

// These Language Variables are available for all installed Modules
	'Rank' => 'Rang',
	'Percent' => 'Procent',
	'Graph' => 'Grafiek',
	'Uses' => 'Gebruikt',
	'How_many' => 'Hoeveel',

// Main Language

// Page Header/Footer
	'Install_info' => 'Geinstalleerd op %s', //%s = date
	'Viewed_info' => 'Statistiekenpagina is %d keer geladen', //%d = number
	'Statistics_title' => 'Forumstatistieken',

// Admin Language
	'Statistics_management' => 'Statistiekenmodules',
	'Statistics_config' => 'Statistiekenconfiguratie',

// Statistics Config
	'Statistics_config_title' => 'Statistiekenconfiguratie',
	
	'Return_limit' => 'Terugkeerlimiet',
	'Return_limit_desc' => 'Het aantal items om toe te voegen in elke module. Dit is automatisch doorgegeven aan alle modules door het hier in te vullen.',
	'Clear_cache' => 'Maak modulecache leeg',
	'Clear_cache_desc' => 'Maak alle huidig opgeslagen gegevens voor alle modules leeg',
	'Modules_directory' => 'Modules map',
	'Modules_directory_desc' => 'De map, relatief aan de phpBB root, waar alle modules opgeslagen zijn.  Pas op dat een  / of \ niet gebruikt kan worden!',

// Status Messages
	'Messages' => 'Beheerdersberichten',
	'Updated' => 'Bijgewerkt',
	'Active' => 'Actief',
	'Activate' => 'Activeer',
	'Activated' => 'Geactiveerd',
	'Not_active' => 'Niet actief',
	'Deactivate' => 'Deactiveer',
	'Deactivated' => 'Gedeactiveerd',
	'Install' => 'Installeer',
	'Installed' => 'Geinstalleerd',
	'Uninstall' => 'Deinstalleer',
	'Uninstalled' => 'Gedeinstalleerd',
	'Move_up' => 'Naar boven verplaatsen',
	'Move_down' => 'Naar beneden verplaatsen',
	'Update_time' => 'Bijwerktijd',
	'Auth_settings_updated' => 'Authorisatieinstellingen - [Deze worden altijd bijgewerkt]',

// Modules Management
	'Back_to_management' => 'Terug naar het modulemanagementscherm',
	'Statistics_modules_title' => 'Statistieken modulemanagement',
	
	'Module_name' => 'Naam',
	'Module_file_name' => 'Modulenaam',
	'Modules_order_update' => 'Modules bijgewerkt',
	'Directory_name' => 'Mapnaam',
	'Status' => 'Status',
	'Update_time_minutes' => 'Bijwerktijd in minuten',
	'Update_time_desc' => 'Tijdinterval (in minuten) voor het vernieuwen van de opgeslagen gegevens met nieuwe gegevens.',
	'Auto_set_update_time' => 'Stel vast en zet de aanbevolen bijwerktijden voor elke geinstalleerde (en actieve) modules. Pas op: Dit kan lang duren.',
	'Uninstall_module' => 'Verwijder module',
	'Uninstall_module_desc' => 'Markeer de module met "niet geinstalleerd" status, zodat je het kunt herinstalleren met het installatieopdracht. Het verwijderd de module niet van de bestandssysteem, je zult het handmatig moeten verwijderen uit de modulemap om het compleet te verwijderen.',
	'Active_desc' => 'Optie of de module actief is, zodat het wordt weergegeven afhankelijk van de vastgelegde permissies.',
	'Go' => 'Ga',
	'Update_Modules' => 'Modules bijwerken',
	
	'Not_allowed_to_install' => 'Je kunt deze module niet installeren. meestal is dit omdat je een mod niet hebt geinstalleerd, die nodig is voor het draaien van deze module. Neem alstublieft contact op met de auteur van deze module als je vragen hebt of als deze informatie niet duidelijk voor je is.',
	'Wrong_stats_mod_version' => 'Je kunt deze module niet installeren, omdat je statistieken mod versie niet overeenkomt met de versie die vereist is om deze module te laten draaien. Om deze module te installeren en te laten draaien moet je tenminste versie %s van de statistieken mod installeren.', // replace %s with Version (2.1.3 for example)
	'Module_install_error' => 'Er was een fout terwijl je deze module probeerde te installeren. waarschijnlijk kunnen de SQL-query\'s niet worden uitgevoerd. Kijk naar de foutmeldingen hierboven.',
	
	'Preview_debug_info' => 'Deze module is gemaakt in %f seconden: %d query\'s waren uitgevoerd.', // Replace %f with seconds and %d with queries
	'Update_time_recommend' => 'De statistieken mod raadt aan (afhankelijk van de debug info) een bijwerktijd van <b>%d</b> minuten.', // Replace %d with Minutes

// Modules

	'module_name__stats_overview_section' => 'Statistiekenoverzicht',
	
	'module_name_admin_statistics' => 'Administratieve statistieken',
	'Statistic' => 'Statistiek',
	'Value' => 'Waarde',
	'Number_posts' => 'Aantal berichten',
	'Posts_per_day' => 'Berichten per dag',
	'Number_topics' => 'Aantal onderwerpen',
	'Topics_per_day' => 'Onderwerpen per dag',
	'Number_users' => 'Aantal gebruikers',
	'Users_per_day' => 'Gebruikers per dag',
	'Board_started' => 'Forum gestart',
	'Avatar_dir_size' => 'Avatarmapgrootte',
	'Database_size' => 'Databasegrootte',
	'Gzip_compression' =>'Gzip-compressie',
	'Not_available' => 'Niet beschikbaar',
	'Board_Up_Days' => 'Dagen online sinds de start',
	'Latest_Reg_User' => 'Laatste geregistreerde gebruiker',
	'Latest_Reg_User_Date' => 'Laatste gebruikers registratiedatum',
	'Most_Ever_Online' => 'Meeste gebruikers ooit online',
	'Most_Ever_Online_Date' => 'Meeste gebruikers online ooit op',
	'Disk_usage' => 'Schijfgrootte',
	'Title' => 'Gemiddeld aantal berichten per gebruiker',
	'Average_Posts' => 'Gemiddeld aantal berichten per gebruiker:',

	'module_name_average_posts_per_user' => 'Gemiddeld aantal berichten per gebruiker',
	
	'module_name_age_clusters' => 'Leeftijdcluster',
	'AGE' => 'Leeftijd',
	'LESS_THAN' => 'Jonger dan',
	'MORE_THAN' => 'Ouder dan',

	'module_name_fastest_users' => 'Snelste gebruikers',
	'time_on_forum' => 'Dagen op forum',
	'posts_day' => 'Berichten per dag',
	'Statistics' => 'Statistieken',
	
	'module_name_interesting_topics' => 'Meest interessante onderwerpen',
	'Rate' => 'Beoordeling (bekeken/berichten)',
	'Topic' => 'Topic',
	
	'module_name_latest_topics' => 'Laatste onderwerpen',
	'Rank' => 'Rang',
	'Latest_Topics' => 'Laatste onderwerpen',
	'Post_time' => 'Berichttijd',

	'module_name_month_stat' => 'Maandelijke statistieken',
	'New_users' => 'Nieuwe gebruikers',
	'New_replies' => 'Nieuwe reacties',
	'New_topics' => 'Nieuwe onderwerpen',
	'Avg_Table' => 'Tabelgemiddelde',
	'Sum_Table' => 'Tabelsom',

	'module_name_most_active_topics' => 'Meest actieve onderwerpen',

	'module_name_most_active_topicstarter' => 'Gebruikers die de meeste onderwerpen zijn gestart',

	'module_name_most_logged_on_users' => 'De meest ingelogde gebruikers',
	'Time2' => 'Inlogtijd',

	'module_name_most_used_languages' => 'Gebruikte talen',
	'Language' => 'Taal',
	
	'module_name_most_used_styles' => 'Gebruikte stijlen',
	'Style' => 'Stijl',
	
	'module_name_most_viewed_topics' => 'Meest bekeken onderwerpen',
	'Month_jan' => 'Jan',
	'Month_feb' => 'Feb',
	'Month_mar' => 'Maa',
	'Month_apr' => 'Apr',
	'Month_may' => 'Mei',
	'Month_jun' => 'Jun',
	'Month_jul' => 'Jul',
	'Month_aug' => 'Aug',
	'Month_sep' => 'Sep',
	'Month_oct' => 'Okt',
	'Month_nov' => 'Nov',
	'Month_dec' => 'Dec',
	'Year' => 'Jaar',
	'Month' => 'Maand',
	'Number' => 'Aantal',

	'module_name_new_posts_by_month' => 'Nieuwe berichten per maand',
	'Posts_month' => 'Nieuwe berichten per maand',
	
	'module_name_new_topics_by_month' => 'Nieuwe onderwerpen per maand',
	'Topics_month' => 'Nieuwe onderwerpen per maand',
	
	'module_name_new_users_by_month' => 'Nieuwe gebruikers per maand',
	'Signup_month' => 'Nieuwe gebruikers per maand',
	
	'module_name_posting_by_day_of_week' => 'Dag van de week verkeer: berichten',
	'Traffic_posts' => 'Dag van de week verkeer: berichten',
	'Dow' => 'Dag',

	'module_name_registrations_by_day_of_week' => 'Dag van de week verkeer: registraties',
	'Traffic_reg' => 'Dag van de week verkeer: registraties',
	'New_users' => 'Nieuwe gebruikers',
	
	'module_name_site_hist_daily_stats_current_week' => 'Huidige weekstatistieken',

	'module_name_site_hist_hours_stats_current_day' => 'Huidige dagstatistieken',

	'module_name_site_hist_month_top_posters' => 'De actiefste gebruikers deze maand',
	'Month_Var' => '[%s]', // %s will be replaced by the current Month
	
	'module_name_site_hist_monthly_stats_current_year' => 'Huidige kalendermaandstatistieken',

	'module_name_site_hist_week_top_posters' => 'De actiefste gebruikers deze week',
	'Week_Var' => '[%s]', // %s will be replaced by the current Week
	
	'module_name_top_attachments' => 'Meest gedownloade bijlagen',
	'File_name' => 'Bestandsnaam',
	'File_comment' => 'Bestandsbeschrijving',

	'module_name_top_posters' => 'Top Posters',
	
	'module_name_top_smilies' => 'Meest gebruikte smilies',
	'smiley_url' => 'Smilie',
	'smiley_code' => 'Smiliecode',

	'module_name_top_words' => 'Meest gebruikte woorden',
	'Word' => 'Woord',
	'Uses2' => 'Aantal',
	
	'module_name_topics_by_day_of_week' => 'Dag van de week verkeer: onderwerpen ',
	'Traffic_topics' => 'Dag van de week verkeer: onderwerpen',
	'Dow' => 'Dag',

	'module_name_users_from_where' => 'Waar komen onze gebruikers vandaan',
	'From_where_title' => 'Waar komen onze gebruikers vandaan',
	'From_where' => 'Woonplaats',
	'How_many' => 'Aantal',

	'module_name_users_gender' => 'Geslacht',
	'Users' => 'Gebruikers',
	
	'module_name_users_ranks' => 'Rangen',
	'Rank_image' => 'Rangafbeelding',
	'Rank_range' => 'Rangberichten',
	'Rank_special' => 'Speciale rang',
	)
);

?>