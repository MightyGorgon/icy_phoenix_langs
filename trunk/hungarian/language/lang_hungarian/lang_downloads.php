<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_downloads.php 64 2008-12-01 21:14:17Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* (c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* (c) hotschi / demolition fabi / oxpus
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

$lang = array_merge($lang, array (
/*
* mod version string
*/
  'Dl_mod_version' => 'Download MOD v%s&nbsp;&copy;(c) 2002 - 2007 by Hotschi, Demolition Fabi, OXPUS',

/*
* general messages after successfull data managements
*/
  'Click_return_categoryadmin' => 'Kattints %side%s, hogy visszamenj a kategória adminisztrálásához',
  'Click_return_dl_config' => 'Kattints %side%s, hogy visszamenj  letöltés konfigurálásához',
  'Click_return_downloadadmin' => 'Kattints %side%s, hogy visszamenj  letöltések adminisztrálásához',
  'Click_return_downloads' => 'Kattints %side%s, hogy visszamenj a Letöltéskategóriákhoz',
  'Click_return_download_details' => 'Kattints %side%s, hogy visszamenj a letöltéshez',
  'Click_return_file_management' => 'Kattints %side%s, hogy visszamenj a fájlkezeléshez',
  'Click_return_modcp_approve' => 'Kattints %side%s, hogy visszamenj a jóváhagyatlan letöltésekhez',
  'Click_return_modcp_manage' => 'Kattints %side%s, hogy visszamenj a moderátorpanelhez',
  'Click_return_user_traffic_admin' => 'Kattints %side%s, hogy visszamenj a más felhasználó forgalmának beállításához',
  'Click_return_usergroup_traffic_admin' => 'Kattints %side%s, hogy visszamenj a más felhasználócsoport forgalmának beállításához',

/*
* message strings
*/
  'Dl_category_added' => 'Kategória hozzáadva',
  'Dl_category_updated' => 'Kategória frissítve',
  'Dl_category_removed' => 'Kategória sikeresen eltávolítva',
  'DL_upload_error' => 'Hiba a fájlfeltöltés során. Kérlek menj vissza és próbált meg újra.<br />Lépj kapcsolatba egy adminisztrátorral, ha a hiba állandó.',
  'Dl_approve_overview' => 'Itt %s jóváhagyatlan letöltés van. Kattints ide, ha szeretnéd õket átnézni.',
  'Dl_approve_overview_one' => 'Itt %s jóváhagyatlan letöltés van. Kattints ide, ha szeretnéd átnézni.',
  'Dl_config_updated' => 'A letöltés konfigurációjának a mentése sikeres',
  'Dl_confirm_cat_delete' => 'Tényleg törölni akarod a <b>%s</b> kategóriát?',
  'Dl_confirm_delete_multiple_files' => 'Tényleg törölni szeretnéd mind a <b>%d fájlt</b>?',
  'Dl_confirm_delete_single_file' => 'Tényleg törölni szeretnéd a <b>%s fájlt</b>?',
  'Dl_delete_cat_and_files' => 'Ennek a kategóriának, és minden fájljának a törlése',
  'Dl_delete_cat_confirm' => 'Válassz egy kategóriát, ahová ezt a letöltéseket átmozgathatod, vagy használj másik akciót',
  'Dl_delete_cat_only' => 'Csak ennek a kategóriának a törlése',
  'Dl_delete_file_confirm' => 'Szintén törlésre kerül(nek)',
  'Dl_empty_category' => 'Ez a kategória nem tartalmaz letöltéseket',
  'Dl_no_access' => 'Hozzáférés megtagadva!<br /><br />Nincs jogod letölteni ezt a fájlt!',
  'Dl_no_category' => 'Nincsenek kategóriák. Adj hozzá egy új kategóriát, mielõtt módosítod a jogosultságokat.',
  'Dl_no_category_index' => 'Ebben a letöltési szekcióban nincsenek kategóriák',
  'Dl_no_external_url' => 'Mindenképpen valós URL-t kell megadnod, ha külsõ letöltési forrást adsz meg!',
  'Dl_no_filename_entered' => 'Meg kell adnod egy fájlt, amit fel szeretnél tölteni!',
  'Dl_no_groups_for_traffic' => 'Nem találom a felhasználócsoportot!!!<br /><br />Adj hozzá egy felhasználócsopotot, mielõtt beállítod a forgalommérést',
  'Dl_no_more_remain_traffic' => '%s letöltési forgalma teljesen fel lett használva. Kérlek várj a következõ hónapig, vagy fordulj a kéréseddel egy adminisztrátorhoz.',
  'Dl_no_permission' => 'Hozzáférés megtagadva!<br /><br />Nincs jogod ezt tenni!',
  'Dl_no_upload_traffic' => 'Bocsi, de nincs több feltöltési lehetõséged. Lépj kapcsolatba egy adminiasztrátorral, ha  fájlt mindenképpen szeretnéd feltölteni',
  'Dl_path_not_exist' => 'Ez a kategória útvonal (<b>%s</b>) nem létezik!<br />Menj vissza, és adj meg egy másik útvonalat<br />vagy hozd létre ezt az útvonalat egy fájlkezelõvel.',
  'Dl_permission_updated' => 'Letöltési jogosultságok mentése: sikeres',
  'Dl_user_config_saved' => 'A letöltések felhasználói beállítása sikeresen frissítve<br /><br />Kattints %side%s, hogy visszamenj a letöltésekhez',
  'Download_added' => 'A letöltés hozzáadva',
  'Download_removed' => 'A letöltés törölve',
  'Download_updated' => 'Az információk frissítve',
  'New_download' => 'Az új letöltés feltöltve vagy frissítve.<br />Kattints %side%s, hogy visszamenj a letöltésekhez.',
  'Dl_confirm_cat_stats_delete' => 'Tényleg törölni szeretnéd a <b>%s</b> kategória statisztikai adatait?',
  'Dl_confirm_all_stats_delete' => 'Tényleg törölni szeretnéd az összes statisztikai adatot?',
  'Dl_confirm_cat_comments_delete' => 'Tényleg törölni szeretnéd a <b>%s</b> kategória összes kommentárját?',
  'Dl_confirm_all_comments_delete' => 'Tényleg törölni szeretnéd az összes kommentárt?',
  'Dl_file_not_found' => '<b>A %s fájlt nem találom!</b><br /><br />Gyõzõdj meg arról, hogy a fájl létezik-e a %s könyvtárban!',
  'Dl_no_change_edit_time' => 'Ez a frissítés nem naplózott',
  'Dl_thumb_upload' => 'Bélyegkép sikeresen feltöltve',
  'Dl_thumb_del' => 'Bélyegkép sikeresen törölve',
  'Dl_thumb_to_big' => 'A bélyegkép túl nagy!<br />Kérlek kisebb fájlt, vagy kisebb méretû képet használj.<br />Használd a böngészõ vissza gombját, és ismételd meg a feltöltést.',
  'Dl_hotlink_permission' => 'Nincs engedélyezve, hogy ezt a fájlt egy link segítségével közvetlenül töltsd fel!',
  'Dl_vc_permission' => 'A letöltéshez szükséges jóváhagyó kód hibás. Kérlek próbálkozz újra.',
  'Dl_report_broken_vc_mismatch' => 'A jóváhagyó kód a jelentéshez hibás. Kérlek próbálkozz újra.',
  'Dl_vc_not_found' => 'A jóváhagyó kód hiányzott. Kérlek próbálkozz újra.',

/*
* page descriptions
*/
  'Dl_page_dl_hackslist' => 'Hacklista',
  'Dl_page_downloads' => 'Letöltések',

/*
* commands
*/
  'Add_new_download' => 'Új letöltés hozzáadása',
  'Dl_add' => 'Hozzáad',
  'Dl_add_category' => 'Kategória hozzáadása',
  'Dl_approve' => 'Elfogad',
  'Dl_check_file_sizes' => 'Fájlméretek ellenõrzése',
  'Dl_check_thumbnails' => 'Bélyegképek ellenõrzése',
  'Dl_delete' => 'Töröl',
  'Dl_down' => 'Le',
  'Dl_edit' => 'Szerkeszt',
  'Dl_go' => 'Ugorj',
  'Dl_klick_to_rate' => 'Értékel',
  'Dl_lock' => 'Zárol',
  'Dl_mark_all' => 'Mind megjelöl',
  'Dl_move' => 'Mozgat:',
  'Dl_set' => 'Beállít',
  'Dl_unmark' => 'Mind jelöletlen',
  'Dl_up' => 'fel',
  'Dl_delete_cat' => 'Kategória törlése',
  'Dl_stats_delete' => 'Statisztika törlése',
  'Dl_stats_delete_all' => 'Minden statisztika törlése',
  'Dl_comments_delete' => 'Kommentárok törlése',
  'Dl_comments_delete_all' => 'Minden kommentár törlése',
  'Dl_sub_sort_asc' => 'Minden kategória minden bejegyzésének növekvõ sorrendbe állítása',
  'Dl_sub_sort_asc_zero' => 'Saját kategóriában a bejegyzések növekvõ sorrendbe állítása',

/*
* categories related
*/
  'Dl_cat_description' => 'Meghatározás',
  'Dl_cat_files' => 'Fájlok',
  'Dl_cat_index' => 'Legmagasabb szint',
  'Dl_cat_name' => 'Kategória',
  'Dl_cat_parent' => 'Szülõ kategória',
  'Dl_cat_path' => 'Útvonal',
  'Dl_cat_title' => 'Letöltések - Kategóriák',
  'Dl_choose_category' => 'Válassz egy kategóriát',
  'Dl_mod_desc_allow' => 'Allow mod detail descriptions',
  'Dl_must_approve' => 'Ebben a ketegóriában a letöltéseket el kell fogadtatni',
  'Dl_statistics' => 'Részletes statisztika engedélyezve',
  'Dl_stats_prune' => 'Statisztikai adatok tisztítása',
  'Dl_stats_delete' => 'Statisztika törlése',
  'Dl_stats_delete_all' => 'Minden statisztika törlése',
  'Dl_comments_delete' => 'Kommentárok törlése',
  'Dl_comments_delete_all' => 'Minden kommentár törlése',
  'Dl_cat_traffic' => 'Forgalmi korlát (Jelenleg elérhetõ: %s)',
  'Dl_cat_traffic_off' => 'Forgalomkorlátozás (jelenleg kikapcsolva)',
  'Dl_cat_traffic_main' => '%s forgalom maradt ebben a kategóriában',
  'Dl_thumb_cat' => 'Bélyegképek engedélyezve',
  'Dl_approve_comments' => 'Automatikusan elfogadva minden új kommentár',
  'Dl_cat_rules' => 'Szabályok',

/*
* traffic related
*/
  'Dl_auto_traffic' => 'Automatikus letöltésmérõ',
  'Dl_enable_post_traffic' => 'Forgalommérés engedélyezése a hozzászólásokhoz',
  'Dl_group_auto_traffic' => 'Felhasználócsoport forgalma',
  'Dl_newtopic_traffic' => 'Letöltésmérés minden újonnan létrehozott témához',
  'Dl_overall_traffic' => 'Havonta letöltött fájlok mérése',
  'Dl_remain_overall_traffic' => 'Ebben a hónapra maradó összes forgalom: ',
  'Dl_reply_traffic' => 'Letöltésmérés minden hozzászóláshoz, válaszhoz és értékeléshez',
  'Dl_traffic' => 'Max. forgalom',
  'Dl_user_auto_traffic' => 'Felhasználó forgalma',
  'Single_user_traffic_title' => 'Egyszerû felhasználó forgalma',
  'Traffic' => 'Forgalommérés',
  'Traffic_now' => 'Jelenlegi hozzáférés',
  'Usergroup_traffic_title' => 'Felhasználócsoportokon belüli tagok forgalma',
  'Users_traffic_title' => 'Minden felhasználó forgalma',
  'Dl_user_traffic_once' => 'Felhasználói forgalom lecsökkentése letöltésenként egyre',
  'Dl_can_download_traffic' => 'Már letöltötted ezt a fájlt.<br />Az adminisztrátor engedélyezte, hogy még egyszer letöltsd anélkül, hogy az adatforgalmat kifizetnéd.',
  'Dl_can_download_traffic_footer' => '<b>Az adminisztrátor engedélyezte, hogy a már letöltött fájlokat ismételten letölthesd fizetési kötelezetség nélkül.</b><br /><br />',
  'Traffic_all_users_admin_explain' => 'Minden felhasználó forgalmának beállítása vagy ahhoz való hozzáadás.',
  'Traffic_single_user_admin_explain' => 'Egy egyszerû felhasználó forgalmának beállítása vagy ahhoz való hozzáadás.',
  'Traffic_usergroup_admin_explain' => 'Egy felhasználócsoport tagjainak forgalmának beállítása vagy ahhoz való hozzáadás.',
  'Dl_auto_traffic_explain' => 'Ez a tábla beállítja minden felhasználónak, vagy egy felhasználócsoport minden tagjának a havi letöltés korlátját.',

/*
* auth values
*/
  'Dl_permissions_all' => 'Minden felhasználó jogosultságának beállítása',
  'Dl_auth_dl' => 'Letölt',
  'Dl_auth_mod' => 'Moderál',
  'Dl_auth_up' => 'Feltölt',
  'Dl_auth_view' => 'Megnéz',
  'Dl_permissions' => 'Az alábbi felhasználócsoport felhasználóinak a jogosultsága',
  'Dl_stop_uploads' => 'Feltöltés tiltása',
  'Dl_stat_perm' => 'Statisztikai oldal felhasználói jogosultsága',
  'Dl_stat_perm_all' => 'Mindenki',
  'Dl_stat_perm_user' => 'Regisztrált felhasználók',
  'Dl_stat_perm_mod' => 'Letöltésmoderátorok',
  'Dl_stat_perm_admin' => 'Fórumadminisztrátorok',
  'Dl_auth_cread' => 'Kommentárok olvasása',
  'Dl_auth_cpost' => 'Kommentárok írása',
  'Dl_perm_all' => 'Mindenki',
  'Dl_perm_reg' => 'Regisztrált felhasználók',
  'Dl_perm_grg' => 'Felhasználócsoportok',

/*
* hacks and mods related
*/
  'Dl_hack_autor' => 'Szerzõ',
  'Dl_hack_autor_email' => 'Szerzõ emailje',
  'Dl_hack_autor_website' => 'Szerzõ weboldala',
  'Dl_hack_dl_url' => 'Alternatív letöltés',
  'Dl_hack_version' => 'Hack Version',
  'Dl_hacklist' => 'List in Hacklist',
  'Dl_hacks_list' => 'Hacklist',
  'Dl_mod_desc' => 'How the mod works',
  'Dl_mod_list' => 'Extra információk megjelenítése',
  'Dl_mod_require' => 'Követelmények',
  'Dl_mod_test' => 'Mod tesztelve vmin/vmvel',
  'Dl_mod_todo' => 'Tennivaló',
  'Dl_mod_warning' => 'Figyelmeztetések',

/*
* moderator panel
*/
  'Dl_modcp_approve' => 'Moderator panel - approve downloads',
  'Dl_modcp_edit' => 'Moderator panel - edit download',
  'Dl_modcp_manage' => 'Moderator panel - manage downloads',
  'Dl_modcp_mod_auth' => 'You <b>can</b> %smoderate this category%s',

/*
* ACP file management
*/
  'Dl_check_filesizes_result' => 'All files are up to date and no error was found',
  'Dl_check_filesizes_result_error' => 'The following files could not be checked:',
  'Dl_manage' => 'File toolbox',
  'Dl_manage_content_count' => '%s Entries',
  'Dl_manage_create_dir' => 'Create this folder',
  'Dl_manage_empty_folder' => 'This folder is empty...',
  'Dl_manage_explain' => 'From here you can manage the files of the downloads. You can use the following functions:<br /><br />- Delete or move unassigned files<br />- Join assigned files without existing category to an existing one<br />- Browse the files (<i>Default after opening the management</i>)<br />- Create a new folder<br />- Delete empty folders<br />- Check the filesize for each not external download<br /><br /><b>Attention:</b><br />This tool will not replace a FTP client!<br />Functions like uploading, moving each file and replacing files are not possible with this tool!',
  'Dl_physical_quota' => 'Physical quota over all files',
  'Dl_unassigned_files' => 'Check for unassigned downloads',

/*
* statistics
*/
  'Dl_latest_downloads' => 'Legfrissebb letöltések',
  'Dl_latest_uploads' => 'Legfrissebb feltöltések',
  'Dl_downloads_cur_month' => 'Letöltések ebben a hónapban',
  'Dl_downloads_overall' => 'Összes letöltés',
  'Dl_downloads_count' => 'Letöltések',
  'Dl_downloads_traffic' => 'Összes letöltési forgalom',
  'Dl_uploads_count' => 'Feltöltések',
  'Dl_uploads_traffic' => 'Összes feltöltési forgalom',
  'Dl_pos' => 'Hely',
  'Dl_time' => 'Idõ',
  'Dl_stats' => 'Letöltési statisztikák',
  'Dl_direction' => 'Akció',
  'Dl_browser' => 'Webböngészõ',
  'Dl_ip' => 'IP címek',
  'Dl_traffic_cur_month' => 'Ennek a hónapnak forgalma',
  'Dl_traffic_overall' => 'Összes forgalom',
  'Dl_guest_stat_delete' => 'Vendégek adatának törlése',
  'Dl_no_filter' => '- nincs szûrõ -',
  'Dl_total_entries' => 'Talált bejegyzések',
  'Dl_filter' => 'Szûrõ',
  'Dl_filter_string' => 'Használd a *-ot vagy a %-ot a "bármi" helyett',
  'Dl_guest_stats_admin' => 'Vendégek adatának mutatása',
  'Dl_stat_edit' => 'szerkesztett',

/*
* comments
*/
  'Dl_comment' => 'Kommentár',
  'Dl_comments' => 'Kommentárok',
  'Dl_last_comment' => 'Utolsó kommentár',
  'Dl_post_comment' => 'Ír',
  'Dl_view_comments' => 'Mutat',
  'Dl_comment_edited' => 'A kommentár szerkesztve %s-kor',
  'Dl_comment_write' => 'Kommentár írása',
  'Dl_comment_show' => 'Mutasd ennek a letöltésnek minden kommentárját',
  'Dl_comment_delete' => 'Töröl',
  'Dl_comment_edit' => 'Szerkeszt',
  'Dl_comment_added' => 'kommentár sikeresen hozzáadva',
  'Dl_comment_updated' => 'Kommentár sikeresen frissítve',
  'Dl_must_be_approve_comment' => 'Ezt a kommentárt muszály egy moderátornak vagy egy adminisztrátornak elfogadni!',
  'Dl_approve_overview_one_comment' => 'Itt egy nem elfogadott kommentár van. Kattints a szövegre az ellenõrzéshez.',
  'Dl_approve_overview_comments' => 'Itt %s nem elfogadott kommentár van. Kattints a szövegre az elenõrzéshez.',

/*
* ACP management main page
*/
  'Dl_acp_traffic_management' => 'Manage traffic quotas and auto presets',
  'Dl_acp_categories_management' => 'Manage categories and their permissions',
  'Dl_acp_config_management' => 'Set the general configurations',
  'Dl_acp_files_management' => 'Manage the downloads',
  'Dl_acp_stats_management' => 'View and check statistics',
  'Dl_acp_managemant_page' => 'Download MOD administration',
  'Dl_acp_managemant_page_explain' => 'Here you can reach all settings and functions of the Download MOD which are needed to manage it.<br />Choose one of the functions below to change the named settings.',

/*
* global strings
*/
  'Dl_account' => 'Erre a hónapra még <b>%s</b> forgalom maradt.',
  'Dl_add_user' => 'Ezt a letöltést <b>%s</b>-kor <b>%s</b> adta hozzá',
  'Dl_all' => 'Mind',
  'Dl_Bytes' => 'B',
  'Dl_Bytes_long' => 'Byte',
  'Dl_change_user' => ' Utoljára szerkesztette <b>%s</b>-kor <b>%s</b>',
  'Dl_config' => 'Letöltési beállítások',
  'Dl_days' => 'Nap',
  'Dl_default_sort' => 'Alapértelmezett sorrend',
  'Dl_delay_auto_traffic' => 'Várakozás az új felhasználók letöltésének méréséhez',
  'Dl_delay_post_traffic' => 'Várakozás az új felhasználók hozzászólásainak méréséhez',
  'Dl_direct_download' => 'közvetlen',
  'Dl_detail' => 'Részletek',
  'Dl_disable_email' => 'Eseményenkénti email tiltása',
  'Dl_disable_popup' => 'Popup/fórumüzenetenkénti emlékeztetõ tiltása',
  'Dl_disable_email_files' => 'Eseményenkénti email tiltása',
  'Dl_disable_popup_files' => 'Popup/fórumüzenetenkénti emlékeztetõ tiltása',
  'Dl_download' => 'Letöltés',
  'DL_edit' => 'Frissített letöltés',
  'DL_edit_time' => 'Szerkesztés utáni megjelölés napjainak a száma',
  'Dl_extern' => 'Külsõ',
  'Dl_extern_up' => 'Külsõ',
  'Dl_file_description' => 'Meghatározás',
  'Dl_file_name' => 'Fájl',
  'Dl_file_size' => 'Méret',
  'Dl_files_title' => 'Fájlok',
  'Dl_files_url' => 'URL',
  'Dl_free' => 'Szabad letöltés',
  'Dl_function' => 'Funkció',
  'Dl_GB' => 'GB',
  'Dl_group_name' => 'Csoportnevek',
  'Dl_guest_stats_show' => 'A vendégek részletes kategóriastatisztikáinak a mutatása',
  'Dl_hotlink_action' => 'Linkmûvelet a közvetlen letöltéshez',
  'Dl_hotlink_action_one' => 'átirányítás a részletezéshez',
  'Dl_hotlink_action_two' => 'megjelenõ üzenet',
  'Dl_info' => 'Infó',
  'Dl_is_free' => 'Szabad letöltés',
  'Dl_is_free_reg' => 'Szabad a regisztrált felhasználóknak',
  'Dl_KB' => 'TB',
  'Dl_klicks' => 'A hónap klikkjei',
  'Dl_last_time' => ' Utóljára letöltötte: <b>%s</b>',
  'Dl_last_time_extern' => ' Utóljára letöltötte egy külsõ linkrõl: <b>%s</b>',
  'Dl_limit_desc_on_index' => 'A letöltés meghatárosásának korlátja az Index oldalon',
  'Dl_Links_per_page' => 'Letöltés per oldal',
  'Dl_MB' => 'MB',
  'Dl_method' => 'Letöltési mód',
  'Dl_method_new' => 'Új',
  'Dl_method_old' => 'Régi',
  'Dl_method_quota' => 'Az olvasásra megnyitott nagyobb fájlok korlátja',
  'Dl_modcp_capprove' => 'Kommentár elfogadása',
  'Dl_must_be_approved' => 'Ezt a letöltést ebben a kategóriában muszály elfogadnia egy adminisztrátornak vagy egy moderátornak',
  'Dl_name' => 'Név',
  'DL_new' => 'Új letöltés',
  'DL_new_time' => 'Hány napig legyen újként megjelölve a letöltés',
  'Dl_no' => 'Nem',
  'Dl_no_config' => 'A felhasználóbeállítás zárolva',
  'Dl_no_last_time' => ' Nem számoltam letöltést...',
  'Dl_no_mod_todo' => 'Nem kell most semmit csinálni a moddal',
  'Dl_not_availible' => 'Nem elérhetõ',
  'Dl_order' => 'Rendez',
  'Dl_overall_klicks' => 'Összes klikk',
  'Dl_klicks_total' => 'Havi / Éves klikk',
  'Dl_overview' => 'Áttekintõ lista minden letöltésrõl',
  'DL_posts' => 'Number of Posts a user needs to get download access',
  'Dl_prevent_hotlink' => 'Prevent links for direct downloads',
  'Dl_rating' => 'Értékelés',
  'Dl_real_filetime' => 'Last file modification',
  'Dl_search_author' => 'For users which have uploaded or changed downloads',
  'Dl_show_footer_legend' => 'Show legend on download footer',
  'Dl_show_footer_stat' => 'Show statistics on download footer',
  'Dl_show_real_filetime' => 'Show the time of the last file modification on download details',
  'Dl_sort_preform' => 'Preform sorting',
  'Dl_sort_acp' => 'Preset',
  'Dl_sort_user' => 'Felhasználó',
  'Dl_sort_user_opt' => 'Sort downloads for',
  'Dl_sort_user_ext' => 'with other criteria',
  'Dl_thumb' => 'Bélyegkép',
  'Dl_thumb_dim_size' => 'The thumbnail can have a maximum dimension of %s x %s pixels and the filesize must be smaller than %s.',
  'Dl_thumb_max_dim' => 'Maximum dimension in pixels X * Y',
  'Dl_thumb_max_size' => 'Maximum thumbnail filesize',
  'Dl_total_stat' => 'There are overall %s downloads with a size of %s / %s including %s external Downloads.',
  'Dl_unapproved' => '<br /><span class="gensmall">[ unapproved ]</span>',
  'Dl_upload' => 'Egy fájl feltöltése',
  'Dl_upload_file' => 'Feltöltés',
  'Dl_upload_max_filesize' => 'Maximum filesize that is allowed for uploads: %s',
  'Dl_upload_traffic' => 'The file size of uploads will decrease the overall traffic. Regard this on choosing the file size!',
  'Dl_upload_traffic_count' => 'Also decrease the overall traffic for uploads',
  'Dl_use_hacklist' => 'Activate hackslist',
  'Dl_users_without_group' => 'Users without a membership in an usergroup',
  'Dl_white_explain' => 'Free download without traffic count for registered users',
  'Dl_yes' => 'Yes',
  'Dl_yes_reg' => 'Yes for<br />reg. User',
  'Download_path' => 'Path to your downloads, e.g. <b>downloads/</b>',
  'Downloads' => 'Letöltések',
  'Must_select_download' => 'Vélassz egy letöltést.',
  'Number_recent_dl_on_portal' => 'Number of recent downloads that are displayed on the portal',
  'Recent_downloads' => 'Recent downloads',
  'User_allow_fav_download_email' => 'Enable emails for changes on favorite downloads',
  'User_allow_fav_download_popup' => 'Enable board messag for changes on favorite downloads',
  'User_allow_new_download_email' => 'Enable emails for new downloads',
  'User_allow_new_download_popup' => 'Enable board message for new downloads',
  'User_download_email' => 'Email<br />notification',
  'User_download_popup' => 'Fórum<br />üzenet',
  'User_download_notify_type' => 'Type of board message',
  'User_download_notify_type_popup' => 'Popup',
  'User_download_notify_type_message' => 'Message on board header',
  'Dl_edit_own_downloads' => 'A felhasználó szerkesztheti a saját fájljait',
  'Dl_report_confirm_code' => 'Please enter the confirmation code here to report this download as broken:',
  'Dl_shorten_extern_links' => 'Shorten displayed external download link',
  'Dl_physical_quota_explain' => 'If this quota (currently %s in use) is reached no more uploads will be allowed',
  'Dl_blue_explain' => 'No more overall traffic left this month!',
  'Dl_blue_explain_file' => 'No more file traffic left this month!',
  'Dl_blue_explain_foot' => 'No more overall traffic or file/category traffic left this month!',
  'Dl_green_explain' => 'Download! No deductions from user account.',
  'Dl_grey_explain' => 'Download! External source. No deductions from user account.',
  'Dl_red_explain' => 'Not enough traffic or posts<br />(%s posts required). Do not spam! Spammers will automatically be blocked!',
  'Dl_red_explain_alt' => 'Not enough traffic or posts (%s posts required). Do not spam! Spammers will automatically be blocked!',
  'Dl_red_explain_perm' => 'No rights to download!',
  'Dl_yellow_explain' => 'Download! Traffic will be deducted from user account.',
  'Dl_config_explain' => 'From here you can enable and disable various functions of the Download Mod and change some settings.',
  'Dl_cat_edit_explain' => 'Here you can manage the categories for the Download MOD.',

/*
* build in add on cash to traffic
*/
  'Dl_cash_to_traffic' => 'Exchange cash to traffic',
  'Dl_cash_to_traffic_explain' => 'Here you can set the exchange between cash currencies and download traffic. The exchange will change one full value of the currency to the entered amount of traffic.',
  'Dl_cash_currency' => 'Cash currency',
  'Dl_cash_exchange' => 'Exchange: 1 %s into %s traffic',
  'Dl_cash_current_amount' => 'You have %s %s',

/*
* new on Download MOD 5.0.10: Blacklist for filetypes
*/
  'Dl_ext_blacklist' => 'Blacklist filetypes',
  'Dl_use_ext_blacklist' => 'Enable blacklist for filetypes',
  'Dl_extention' => 'New forbidden file extention',
  'Dl_extentions' => 'Forbidden file extentions',
  'Dl_add_extention' => 'Add File extention',
  'Dl_confirm_delete_extention' => 'Are you sure to drop the extention <b>%s</b>?',
  'Dl_confirm_delete_extentions' => 'Are you sure to drop the extentions <b>%s</b>?',
  'Dl_delete_extention_confirm' => 'Drop file extention from blacklist',
  'Dl_delete_extentions_confirm' => 'Drop file extentions from blacklist',
  'Extention_removed' => 'File extention successfull dropped from blacklist.',
  'Extentions_removed' => 'File extentions successfull dropped from blacklist.',
  'Click_return_extblacklistadmin' => 'Kattints %side%s to return to the File extention blacklist',
  'Dl_forbidden_extention' => 'This file extention is currently not allowed!<br />Please go back and use an other file type.',
  'Dl_forbidden_ext_explain' => 'Forbidden file extentions: %s',
  'Dl_ext_blacklist_explain' => 'All here entered file extentions are disabled for uploaded with this MOD.<br />On the Administration Panel these extentions will be used, too.<br />They don\'t refer to existing downloads.',

/*
* new on Download MOD 5.0.12: Disable time edit informations
*/
  'Dl_disable_popup_notify' => 'Allow to disable the time edit informations on edit a download',

/*
* new on Download MOD 5.0.15: Banlist and report broken downloads
*/
  'Dl_acp_banlist' => 'Banlist',
  'Dl_user_id' => 'User ID',
  'Dl_confirm_delete_ban_values' => 'Are you sure to delete these banlist entries?',
  'Dl_banlist_updated' => 'Banlist successfully updated',
  'Dl_banned' => 'You are banned and unable to download any file!',
  'Click_return_banlistadmin' => 'Kattints %side%s to return to the banlist',
  'Dl_broken' => 'Report broken download',
  'Dl_broken_mod' => 'Reset broken download status',
  'Dl_broken_cur' => 'This download is currently reported as broken',
  'Dl_report_broken' => 'Allow reporting broken downloads',
  'Dl_a_guest' => 'a guest',
  'Dl_favorite_add' => 'Notify me about changes on this download',
  'Dl_favorite_drop' => 'Remove notifications about this download',
  'Dl_favorite' => 'Download Favorites',
  'Dl_acp_banlist_explain' => 'From here you can enter different values to ban the access to the downloads.<br />Each value will be used concurrently, either if they are entered as one dataset.',

/*
* new on Download MOD 5.1.0
*/
  'Dl_report_broken_lock' => 'Letöltés tiltása, ha a fájl töröttként be van jelentve',
  'Dl_report_broken_message' => 'Vizuális jóváhagyás csak akkor, ha a fájl nincs töröttként bejelentve',
  'Dl_report_broken_vc' => 'Vizuális jóváhagyás engedélyezése egy törött letöltés bejelentéséhez',
  'Dl_visual_confirmation' => 'Vizuális jóváhagyás engedélyezése egy fájl letöltéséhez',
  'Dl_off_guests' => 'Vendégeknek nem',

/*
* new on Download MOD 5.1.1
*/
  'Dl_icon_free_for_reg' => 'Fehér letöltés ikon megjelenítése a vendégeknek',

/*
* new on Download MOD 5.1.3
*/
  'Dl_latest_comments' => 'Az utolsó X kommentár megjelenítése a letöltés részleteiben',

/*
* new on Download MOD 5.2.0 - The Bug Tracker !!!!!!!!!!!! -------------  * :-(((((
*/
  'Dl_bug_tracker' => 'Hibakezelõ',
  'Dl_bug_tracker_file' => 'errõl a letöltésrõl',
  'Dl_bug_tracker_cat' => 'Hibakezelõ engedélyezése',
  
  'Confirm_delete_bug_report' => 'Tényleg törölni akarod ezt a hibajelentést?',
  'Dl_bug_report_id' => 'Jelentés ID',
  'Dl_bug_report_title' => 'Jelentés címe',
  'Dl_bug_report_title_details' => 'Jelentés',
  'Dl_bug_report_text' => 'Meghatározás',
  'Dl_bug_report_date' => 'Jelentette neki:',
  'Dl_bug_report_php' => 'PHP',
  'Dl_bug_report_db' => 'DB',
  'Dl_bug_report_forum' => 'Fórum',
  'Dl_bug_report_file' => 'Letöltés',
  'Dl_bug_report_author' => 'Bejelentette:',
  'Dl_bug_report_assigned' => 'Átruházva neki:',
  'Dl_bug_report_assign_date' => 'Átruházta:',
  'Dl_bug_report_status' => 'Státusz',
  'Dl_bug_report_status_date' => 'Utolsó státuszidõ',
  'Dl_bug_report_detail' => 'Részletek',
  'Dl_bug_report_history' => 'Történet',
  'Dl_bug_report_reassign' => 'újra-átruházva',
  'Dl_bug_report_assign' => 'átruházva',
  'Dl_bug_report_unassigned' => 'átruházatlan',
  'Dl_no_bug_tracker' => 'Nem találtam jelentést',
  'Dl_bug_report_no_title' => 'Nem adtál címet ennek a hibajelentésnek!',
  'Dl_bug_report_no_text' => 'Nem adtál meghatározást ennek a hibajelentésnek!',
  'Dl_bug_report_added' => 'Hibajelentés sikeresen hozzáadva',
  'Click_return_bug_tracker' => 'Kattints %side%s a hibajelentésekhez való visszatéréshez.',
  'Dl_bug_report_status_text' => 'Néhány szöveg új státusszal van (értesíteni kell az emailek szerzõit errõl a hibajelentésrõl)',
  'Dl_bug_report_status_update' => 'frissített státusz',
  'Dl_filter_bt_own' => 'Jelentéseim mutatása',
  'Dl_filter_bt_assign' => 'Átruházásaim mutatása',
  
  'Dl_user_download_limit_flag' => 'A havi letöltési szám korlátja',
  'Dl_user_download_limit' => 'Havi letöltések maximális száma',
  'Dl_report_status' => 
  array (
    0 => 'új',
    1 => 'nézett',
    2 => 'folyamatban',
    3 => 'függõ',
    4 => 'vége',
    5 => 'eldobva',
  ),
  'Dl_bug_report_email_status' => 'Ez az üzenet új állapotot kapott:
--------------------
%s
--------------------',
  )
);

?>