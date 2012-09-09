<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_statistics.php 33 2009-05-02 16:34:07Z TheSteffen $
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
	'Version_info' => '<br />Statistika Mod razlicica %s &copy; 2011 <a href="http://www.opentools.com/board">board</a>',

// Diese Sprach Variablen sind für alle installierten Module verfügbar
'Rank' => 'vrsta',
	'Percent' => 'Procent',
	'Graph' => 'Graf',
	'Uses' => 'rabe',
	'How_many' => 'koliko',

// Main Language

// Page Header/Footer
	'Install_info' => 'namešcen na %s', //%s = datum
	'Viewed_info' => 'statististika naložene strani %d kolikokrat', //%d = število
	'Statistics_title' => 'statistika plošce',

// Admin Language
	'Statistics_management' => 'statistika modulov',
	'Statistics_config' => 'statistika konfiguracije',

// Statistics Config
	'Statistics_config_title' => 'statistika konfiguracije',

	'Return_limit' => 'vrni omejitev',
	'Return_limit_desc' => '<b>Število predmetov vkljucenih v vsaki razvrstitvi.</b><br /> To je avtomatska razclenitev vseh modulov ki so tukaj doloceni.',
	'Clear_cache' => 'ocisti modul predpomnilnika',
	'Clear_cache_desc' => 'Potrditveno polje za pocisti vse trenutne podatke iz predpomnilnika za vse module.',
	'Modules_directory' => 'imenik modulov',
	'Modules_directory_desc' => 'Imenik povezan z  domacim Icy imenikom Phoenix, kjer se nahajajo moduli.<br /><b>Note:</b> A trailing / or \ must not be used!',

// Status Messages
	'Messages' => 'sporocilo administratorja',
	'Updated' => 'posodobljeno',
	'Active' => 'dejaven',
	'Activate' => 'vkljuciti',
	'Activated' => 'vkljuceno',
	'Not_active' => 'ni dejaven',
	'Deactivate' => 'dezaktivirati',
	'Deactivated' => 'Dezaktiviran',
	'Install' => 'namesti',
	'Installed' => 'namešceno',
	'Uninstall' => 'odstrani',
	'Uninstalled' => 'odstranjeno',
	'Move_up' => 'premakni gor',
	'Move_down' => 'premakni dol',
	'Update_time' => 'posodobi cas',
	'Auth_settings_updated' => 'dovoljenja nastavitev - [These are always updated]',

// Modules Management
	'Back_to_management' => 'nazaj na zaslon upravljalca modulov',
	'Statistics_modules_title' => 'statisticni modil za upravljanje',

	'Module_name' => 'ime',
	'Module_file_name' => 'ime modula',
	'Modules_order_update' => 'posodobljeni moduli',
	'Directory_name' => 'ime imenika',
	'Status' => 'Stanje',
	'Update_time_minutes' => 'posodobi cas in minute',
	'Update_time_desc' => 'casovni interval (in Minutes) za osveževanje podatkov predpomnilnika z novimi podatki.',
	'Auto_set_update_time' => '<span class="genmed"><b>doloci in nastavi priporocene posodobitve casa za vse namešcene (and Active) Module.</b></span><br /><span class="genmed"><b>Be aware: This may take a long time.</b></span><br /><span class="genmed"><i>Hint: lahko prilagodite red modulov z uporabo primi in spusti.</i></span>',
	'Uninstall_module' => 'odstrani modul',
	'Uninstall_module_desc' => 'oznaci modul z "ni namešcen" stanjem, tako da galahko ponovno namestite z ukaz namesti.Noce izbrisati modul iz vašega datotecnega sistema, potem boste morali rocno izbrisati mapo modula za popolno odstranitev.',
	'Active_desc' => 'Možnost, ce je  modul aktiven, tako da je prikazan odvisen od nastavitev dovoljenj.',
	'Go' => 'pojdi',
	'Update_Modules' => 'posodobi modul',

	'Not_allowed_to_install' => 'Ne morete namestiti modul. najbrž zato ker nimate namešcene potreben Mod za zagon tega modula. prosim kontaktirajte avtorja tega modula ce imate še kakšno vprašanje in ce posebne informacije natisnjene tukaj nimajo smisla za vas.',
	'Wrong_stats_mod_version' => 'Ne morete namestiti modul, ker se vaša statistika Mod Verzije ne ujema z zahtevano verzijo potrebno za modul. Za namestitev in zagon modula, potrebujete najnovejšo verzijo %s statistike Mod.', // zamenjaj %s z verzijo(2.1.3 for example)
	'Module_install_error' => 'Prišlo je do napake pri namestitvi modula. Vec kot verjetno je da se nekaj SQL ukazov ni bilo mogoce izvesti, preveri za ponesrecenimi sporocili zgoraj.',

	'Preview_debug_info' => 'ta modul je bil ustvarjen v nekaj %f sekundah: %d zahteve so bile izvedene.', // zamenjaj %f z sekundami in  %d z zahtevami
	'Update_time_recommend' => 'statistika mod priporoca (depending on the debug info) an update time of <b>%d</b> Minutes.', // Replace %d with Minutes

// Modules

	'module_name__stats_overview_section' => 'statisitcni pregled ',

	'module_name_admin_statistics' => 'upravna statistika',
	'Statistic' => 'Statistika',
	'Value' => 'vrednost',
	'Number_posts' => 'število objav',
	'Posts_per_day' => 'objave na dan',
	'Number_topics' => 'število tem',
	'Topics_per_day' => 'teme na dan',
	'Number_users' => 'število uporabnikov',
	'Users_per_day' => 'uporabniki na dan',
	'Board_started' => 'svet zacel',
	'Avatar_dir_size' => 'Avatar velikost imenika',
	'Database_size' => 'velikost podatkovne baze',
	'Gzip_compression' => 'Gzip kompresija',
	'Not_available' => 'Ni na volja',
	'Board_Up_Days' => 'vkrcanje na dan',
	'Latest_Reg_User' => 'zadnje registriran uporabnik',
	'Latest_Reg_User_Date' => 'datum zadnjega registriranega uporabnika',
	'Most_Ever_Online' => 'Najvecje število prisotnih uporabnikov',
	'Most_Ever_Online_Date' => 'Datum najvecjega števila obiskovalcev na forumu ',
	'Disk_usage' => 'uporaba diska',
	'Title' => 'povprecne objave na uporabnika',
	'Average_Posts' => 'povprecne objave na uporabnika:',

	'module_name_average_posts_per_user' => 'povprecne objave na uporabnika',

	'module_name_age_clusters' => 'starost gruce',
	'AGE' => 'starost',
	'LESS_THAN' => 'manj kot',
	'MORE_THAN' => 'vec kot',

	'module_name_fastest_users' => 'najhitrejši uporabniki',
	'time_on_forum' => 'število dni na forumu',
	'posts_day' => 'sporocila na dan',
	'Statistics' => 'Statistika',

	'module_name_interesting_topics' => 'najbolj zanimive teme',
	'Rate' => 'ocena (views/messages)',
	'Topic' => 'Tema',

	'module_name_latest_topics' => 'najnovejša tema',
	'Rank' => 'vrsta',
	'Latest_Topics' => 'najnovejša tema',
	'Post_time' => 'cas objavljanja',

	'module_name_month_stat' => 'Mesecna statistika',
	'New_users' => 'novi uporabniki',
	'New_replies' => 'Novi odgovori',
	'New_topics' => 'Nove teme',
	'Avg_Table' => 'Tabela povprecja',
	'Sum_Table' => 'Tabela vsote',

	'module_name_most_active_topics' => 'najbolj dejavne teme',

	'module_name_most_active_topicstarter' => 'zaganjanje najbolj dejavne teme',

	'module_name_most_logged_on_users' => 'najbolj prijavljeni upoabniki',
	'Time2' => 'prijavljeni ob casu',

	'module_name_most_used_languages' => 'jezik',
	'Language' => 'jezik',

	'module_name_most_used_styles' => 'Stili',
	'Style' => 'Style',

	'module_name_most_viewed_topics' => 'najbolj ogledane teme',
	'Month_jan' => 'Januar',
	'Month_feb' => 'Februar',
	'Month_mar' => 'Marec',
	'Month_apr' => 'April',
	'Month_may' => 'Maj',
	'Month_jun' => 'Junij',
	'Month_jul' => 'Julij',
	'Month_aug' => 'Avgust',
	'Month_sep' => 'September',
	'Month_oct' => 'Oktober',
	'Month_nov' => 'November',
	'Month_dec' => 'December',
	'Year' => 'leto',
	'Month' => 'Mesec',
	'Number' => 'številka',

	'module_name_new_posts_by_month' => 'nove objave na mesec',
	'Posts_month' => 'število novih objav na mesec',

	'module_name_new_topics_by_month' => 'nove teme na mesec',
	'Topics_month' => 'število novih tem na mesec',

	'module_name_new_users_by_month' => 'novi uporabniki na mesec',
	'Signup_month' => 'število novih uporabnikov na mesec',

	'module_name_posting_by_day_of_week' => 'dan-v-tednu promet: objav',
	'Traffic_posts' => 'dan-v-tednu promet: objavljanja',
	'Dow' => 'Dan',

	'module_name_registrations_by_day_of_week' => 'dan-v-tednu promet: registracij',
	'Traffic_reg' => 'dan-v-tednu promet: registracije',
	'New_users' => 'novi uporabniki',

	'module_name_site_hist_daily_stats_current_week' => 'Trenutni teden Dnevna statistika',

	'module_name_site_hist_hours_stats_current_day' => 'trenutni dan statistike',

	'module_name_site_hist_month_top_posters' => 'trenutni mesec Top objavljanja Uporabnikov',
	'Month_Var' => '[%s]', // %s bo zamenjano z trenutnim mesecem

	'module_name_site_hist_monthly_stats_current_year' => 'letošnja mesecna statistika',

	'module_name_site_hist_week_top_posters' => 'trenutni teden Top objavljanja Uporabnikov',
	'Week_Var' => '[%s]', // %s bo zamenjano z trenutnim tednom

	'module_name_top_attachments' => 'Top prenesenih priponk',
	'File_name' => 'ime datoteke',
	'File_comment' => 'komentar datoteke',

	'module_name_top_posters' => 'Top objavljalci',

	'module_name_top_smilies' => 'najbolj uporabljeni smejkoti',
	'smiley_url' => 'slika',
	'smiley_code' => 'koda',

	'module_name_top_words' => 'najbolj uporabljene besede',
	'Word' => 'beseda',
	'Uses2' => 'uporaba',

	'module_name_topics_by_day_of_week' => 'dan-v-tednu promet: Teme',
	'Traffic_topics' => 'dan-v-tednu promet: Teme',
	'Dow' => 'Dan',

	'module_name_users_from_where' => 'lokacija uporabnikov',
	'From_where_title' => 'iz kje so uporabniki',
	'From_where' => 'iz kje',

	'module_name_users_gender' => 'spol',
	'Users' => 'Uporabniki',

	'module_name_users_ranks' => 'vrste',
	'Rank_image' => 'vrsta slike',
	'Rank_range' => 'vrsta sporocil',
	'Rank_special' => 'posebne vrsta',
	)
);

?>