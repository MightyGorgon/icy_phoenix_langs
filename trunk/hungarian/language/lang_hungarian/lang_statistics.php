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
	'Version_info' => '<br />Statistics recoded by <a href="http://www.icyphoenix.com/">Mighty Gorgon</a> based on Statistics Mod Version %s &copy; 2002 <a href="http://www.opentools.de/board">Acyd Burn</a>',

// These Language Variables are available for all installed Modules
	'Rank' => 'Sorszám',
	'Percent' => 'Százalék',
	'Graph' => 'Gráf',
	'Uses' => 'Használva',
	'How_many' => 'Hányszor',

// Main Language

// Page Header/Footer
	'Install_info' => 'Telepítve ekkor: %s', //%s = date
	'Viewed_info' => 'Statisztika betöltve %d alkalommal', //%d = number
	'Statistics_title' => 'Statisztika',

// Admin Language
	'Statistics_management' => 'Statisztika modulok',
	'Statistics_config' => 'Statisztika konfigurációk',

// Statistics Config
	'Statistics_config_title' => 'Statisztika konfigurációk',

	'Return_limit' => 'Visszatérési limit',
	'Return_limit_desc' => '<b>A megjelenítendő találatok száma az egyes rangsoroknál.</b><br /> Automatikusan érvényesül az összes modulra.',
	'Clear_cache' => 'Modul gyorsítótár ürítése',
	'Clear_cache_desc' => 'Jelöld be a négyzetet, ha az összes modul minden gyorsítótárazott adatát törölni szeretnéd.',
	'Modules_directory' => 'Modulok könyvtára',
	'Modules_directory_desc' => 'Az Icy Phoenix gyökérkönyvtárától viszonyítva a modulok helye.<br /><b>Note:</b> A / és a \ jelek használatát mellőzd!',

// Status Messages
	'Messages' => 'Admin üzenetek',
	'Updated' => 'Frissítve',
	'Active' => 'Aktív',
	'Activate' => 'Aktiválás',
	'Activated' => 'Aktiválva',
	'Not_active' => 'Nem aktív',
	'Deactivate' => 'Deaktiválás',
	'Deactivated' => 'Deaktiválva',
	'Install' => 'Telepítés',
	'Installed' => 'Telepítve',
	'Uninstall' => 'Eltávolítás',
	'Uninstalled' => 'Eltávolítva',
	'Update_time' => 'Frissítve',
	'Auth_settings_updated' => 'Azonosítási beállítások - [Ezek mindig frissülnek]',

// Modules Management
	'Back_to_management' => 'Vissza a modulkezelő oldalra',
	'Statistics_modules_title' => 'Statisztika modulkezelő',

	'Module_name' => 'Név',
	'Module_file_name' => 'Modul név',
	'Modules_order_update' => 'Modulok frissítve',
	'Directory_name' => 'Könyvtár név',
	'Status' => 'Állapot',
	'Update_time_minutes' => 'Frissítési gyakoriság (percben)',
	'Update_time_desc' => 'Időintervallum (percben), hogy milyen gyakran frissítse a gyorsítótár adatait.',
	'AUTO_SET_UPDATE_TIME' => '<b>Határozz meg és állíts be egy frissítési időt minden telepített (és aktív) modulnak.</b><br /><b>A folyamat eltarthat egy ideig.</b>',
	'STAT_BLOCKS_SORT' => '<i>Tipp: a modulok sorrendjét fogd és vidd módszerrel is megváltoztathatod.</i>',
	'Uninstall_module' => 'Modul eltávolítása',
	'Uninstall_module_desc' => 'Megjelöli a modult egy "nincs telepítve" állapottal, így bármikor újratelepítheted a telepítés paranccsal. A folyamat nem törli a modult a fájlrendszerből, a teljes eltávolításhoz neked kell manuálisan törölnöd a modulok könyvtárából.',
	'Active_desc' => 'Ha a modul aktív, akkor a jogosultságoktól függően megjelenik az oldalon.',
	'Go' => 'Küldés',
	'Update_Modules' => 'Modulok frissítése',

	'Not_allowed_to_install' => 'Nem telepítheted ezt a modult. Ennek lehet az az oka, hogy a modulhoz kellő mod nincs telepítve. Értesítsd a modul szerzőjét, amennyiben kérdésed van, vagy a megadott Extra információkat nem érted.',
	'Wrong_stats_mod_version' => 'Nem telepítheted ezt a modult, mert a Statisztika mod verziója nem felel meg a modul igényeinek. A modul telepítéséhez és futtatásához frissítened kell a Statisztika modot a legfrissebb verzióra (%s).', // replace %s with Version (2.1.3 for example)
	'Module_install_error' => 'Hiba lépett fel a modul telepítése során. Néhány SQL parancsot nem sikerült végrehajtani. A részleteket lentebb láthatod.',

	'Preview_debug_info' => 'Modul generálva %f másodperc alatt, %d művelet végrehajtva.', // Replace %f with seconds and %d with queries
	'Update_time_recommend' => 'A statisztika mod azt javasolva (a debug infótól függően), hogy állíts be <b>%d</b> percenkénti frissítési időt.', // Replace %d with Minutes

// Modules

	'module_name__stats_overview_section' => 'Statisztika áttekintő',

	'module_name_admin_statistics' => 'Adminisztratív statisztika',
	'Statistic' => 'Statisztika',
	'Value' => 'Érték',
	'Number_posts' => 'Hozzászólások száma',
	'Posts_per_day' => 'Hozzászólás/nap',
	'Number_topics' => 'Témák száma',
	'Topics_per_day' => 'Téma/nap',
	'Number_users' => 'Felhasználók száma',
	'Users_per_day' => 'Felhasználó/nap',
	'Board_started' => 'Oldal indulása',
	'Avatar_dir_size' => 'Avatar könyvtár mérete',
	'Database_size' => 'Adatbázis mérete',
	'Gzip_compression' => 'Gzip tömörítés',
	'Not_available' => 'Nem elérhető',
	'Board_Up_Days' => 'Oldal indulása óta eltelt idő (nap)',
	'Latest_Reg_User' => 'Legutóbb regisztrált felhasználó',
	'Latest_Reg_User_Date' => 'Legutóbbi regisztráció ideje',
	'Most_Ever_Online' => 'Valaha jelen lévő legtöbb felhasználó',
	'Most_Ever_Online_Date' => 'Valaha jelen lévő legtöbb felhasználó dátuma',
	'Disk_usage' => 'Lemezhasználat',
	'Title' => 'Átlagos hozzászólás/felhasználó',
	'Average_Posts' => 'Átlagos hozzászólás/felhasználó:',

	'module_name_average_posts_per_user' => 'Átlagos hozzászólás/felhasználó',

	'module_name_age_clusters' => 'Korosztályok',
	'AGE' => 'Kor',
	'LESS_THAN' => 'Fiatalabb, mint',
	'MORE_THAN' => 'Idősebb, mint',

	'module_name_fastest_users' => 'Leggyorsabb felhasználók',
	'time_on_forum' => 'Eltelt idő (nap)',
	'posts_day' => 'Hozzászólások/nap',
	'Statistics' => 'Statisztika',

	'module_name_interesting_topics' => 'Legérdekesebb témák',
	'Rate' => 'Értékelés (megtekintés/hozzászólás)',
	'Topic' => 'Téma',

	'module_name_latest_topics' => 'Legutóbbi témák',
	'Rank' => 'Sorszám',
	'Latest_Topics' => 'Legutóbbi témák',
	'Post_time' => 'Hozzászólás ideje',

	'module_name_month_stat' => 'Havi statisztika',
	'New_users' => 'Új felhasználók',
	'New_replies' => 'Új válaszok',
	'New_topics' => 'Új témák',
	'Avg_Table' => 'Átlag',
	'Sum_Table' => 'Összesen',

	'module_name_most_active_topics' => 'Legaktívabb témák',

	'module_name_most_active_topicstarter' => 'Legaktívabb témaindító',

	'module_name_most_logged_on_users' => 'Legtöbbet jelen lévő felhasználók',
	'Time2' => 'Bejelentkezve',

	'module_name_most_used_languages' => 'Nyelvek',
	'Language' => 'Nyelv',

	'module_name_most_used_styles' => 'Megjelenések',
	'Style' => 'Megjelenés',

	'module_name_most_viewed_topics' => 'Legtöbbször megtekintett témák',
	'Month_jan' => 'Jan',
	'Month_feb' => 'Febr',
	'Month_mar' => 'Márc',
	'Month_apr' => 'Ápr',
	'Month_may' => 'Máj',
	'Month_jun' => 'Jún',
	'Month_jul' => 'Júl',
	'Month_aug' => 'Aug',
	'Month_sep' => 'Szept',
	'Month_oct' => 'Okt',
	'Month_nov' => 'Nov',
	'Month_dec' => 'Dec',
	'Year' => 'Year',
	'Month' => 'Month',
	'Number' => 'Number',

	'module_name_new_posts_by_month' => 'Új hozzászólások havonta',
	'Posts_month' => 'Új hozzászólások száma az egyes hónapokban',

	'module_name_new_topics_by_month' => 'Új témák havonta',
	'Topics_month' => 'Új témák száma az egyes hónapokban',

	'module_name_new_users_by_month' => 'Új felhasználók havonta',
	'Signup_month' => 'Új felhasználók száma havonta',

	'module_name_posting_by_day_of_week' => 'A hét napjainak forgalma: Hozzászólások',
	'Traffic_posts' => 'A hét napjainak forgalma: Hozzászólások',
	'Dow' => 'Nap',

	'module_name_registrations_by_day_of_week' => 'A hét napjainak forgalma: Regisztrációk',
	'Traffic_reg' => 'A hét napjainak forgalma: Regisztrációk',
	'New_users' => 'Új felhaználók',

	'module_name_site_hist_daily_stats_current_week' => 'Eheti napi statisztika',

	'module_name_site_hist_hours_stats_current_day' => 'Mai statisztika',

	'module_name_site_hist_month_top_posters' => 'Ehavi legtöbbet hozzászólók',
	'Month_Var' => '[%s]', // %s will be replaced by the current Month

	'module_name_site_hist_monthly_stats_current_year' => 'Ezévi havi statisztikák',

	'module_name_site_hist_week_top_posters' => 'Eheti legtöbbet hozzászólók',
	'Week_Var' => '[%s]', // %s will be replaced by the current Week

	'module_name_top_attachments' => 'Legtöbbet letöltött csatolmányok',
	'File_name' => 'Fájlnév',
	'File_comment' => 'Fájlhozzászólások',

	'module_name_top_posters' => 'Legtöbbet hozzászólók',

	'module_name_top_smilies' => 'Legtöbbet használt hangulatjelek',
	'smiley_url' => 'Kép',
	'smiley_code' => 'Kód',

	'module_name_top_words' => 'Leggyakrabban használt szavak',
	'Word' => 'Szó',
	'Uses2' => 'Használva',

	'module_name_topics_by_day_of_week' => 'A hét napjainak forgalma: Témák',
	'Traffic_topics' => 'A ét napjainak forgalma: Témák',
	'Dow' => 'Nap',

	'module_name_users_from_where' => 'Felhasználók tartózkodási helye',
	'From_where_title' => 'Felhasználók tartózkodási helye',
	'From_where' => 'Honnan',

	'module_name_users_gender' => 'Nemek',
	'Users' => 'Felhasználók száma',

	'module_name_users_ranks' => 'Rangok',
	'Rank_image' => 'Rang képe',
	'Rank_range' => 'Rang hozzászólások',
	'Rank_special' => 'Különleges rang',
	)
);

?>