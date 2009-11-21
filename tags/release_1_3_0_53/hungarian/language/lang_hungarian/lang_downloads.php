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
  'Click_return_categoryadmin' => 'Kattints %side%s, hogy visszamenj a kateg�ria adminisztr�l�s�hoz',
  'Click_return_dl_config' => 'Kattints %side%s, hogy visszamenj  let�lt�s konfigur�l�s�hoz',
  'Click_return_downloadadmin' => 'Kattints %side%s, hogy visszamenj  let�lt�sek adminisztr�l�s�hoz',
  'Click_return_downloads' => 'Kattints %side%s, hogy visszamenj a Let�lt�skateg�ri�khoz',
  'Click_return_download_details' => 'Kattints %side%s, hogy visszamenj a let�lt�shez',
  'Click_return_file_management' => 'Kattints %side%s, hogy visszamenj a f�jlkezel�shez',
  'Click_return_modcp_approve' => 'Kattints %side%s, hogy visszamenj a j�v�hagyatlan let�lt�sekhez',
  'Click_return_modcp_manage' => 'Kattints %side%s, hogy visszamenj a moder�torpanelhez',
  'Click_return_user_traffic_admin' => 'Kattints %side%s, hogy visszamenj a m�s felhaszn�l� forgalm�nak be�ll�t�s�hoz',
  'Click_return_usergroup_traffic_admin' => 'Kattints %side%s, hogy visszamenj a m�s felhaszn�l�csoport forgalm�nak be�ll�t�s�hoz',

/*
* message strings
*/
  'Dl_category_added' => 'Kateg�ria hozz�adva',
  'Dl_category_updated' => 'Kateg�ria friss�tve',
  'Dl_category_removed' => 'Kateg�ria sikeresen elt�vol�tva',
  'DL_upload_error' => 'Hiba a f�jlfelt�lt�s sor�n. K�rlek menj vissza �s pr�b�lt meg �jra.<br />L�pj kapcsolatba egy adminisztr�torral, ha a hiba �lland�.',
  'Dl_approve_overview' => 'Itt %s j�v�hagyatlan let�lt�s van. Kattints ide, ha szeretn�d �ket �tn�zni.',
  'Dl_approve_overview_one' => 'Itt %s j�v�hagyatlan let�lt�s van. Kattints ide, ha szeretn�d �tn�zni.',
  'Dl_config_updated' => 'A let�lt�s konfigur�ci�j�nak a ment�se sikeres',
  'Dl_confirm_cat_delete' => 'T�nyleg t�r�lni akarod a <b>%s</b> kateg�ri�t?',
  'Dl_confirm_delete_multiple_files' => 'T�nyleg t�r�lni szeretn�d mind a <b>%d f�jlt</b>?',
  'Dl_confirm_delete_single_file' => 'T�nyleg t�r�lni szeretn�d a <b>%s f�jlt</b>?',
  'Dl_delete_cat_and_files' => 'Ennek a kateg�ri�nak, �s minden f�jlj�nak a t�rl�se',
  'Dl_delete_cat_confirm' => 'V�lassz egy kateg�ri�t, ahov� ezt a let�lt�seket �tmozgathatod, vagy haszn�lj m�sik akci�t',
  'Dl_delete_cat_only' => 'Csak ennek a kateg�ri�nak a t�rl�se',
  'Dl_delete_file_confirm' => 'Szint�n t�rl�sre ker�l(nek)',
  'Dl_empty_category' => 'Ez a kateg�ria nem tartalmaz let�lt�seket',
  'Dl_no_access' => 'Hozz�f�r�s megtagadva!<br /><br />Nincs jogod let�lteni ezt a f�jlt!',
  'Dl_no_category' => 'Nincsenek kateg�ri�k. Adj hozz� egy �j kateg�ri�t, miel�tt m�dos�tod a jogosults�gokat.',
  'Dl_no_category_index' => 'Ebben a let�lt�si szekci�ban nincsenek kateg�ri�k',
  'Dl_no_external_url' => 'Mindenk�ppen val�s URL-t kell megadnod, ha k�ls� let�lt�si forr�st adsz meg!',
  'Dl_no_filename_entered' => 'Meg kell adnod egy f�jlt, amit fel szeretn�l t�lteni!',
  'Dl_no_groups_for_traffic' => 'Nem tal�lom a felhaszn�l�csoportot!!!<br /><br />Adj hozz� egy felhaszn�l�csopotot, miel�tt be�ll�tod a forgalomm�r�st',
  'Dl_no_more_remain_traffic' => '%s let�lt�si forgalma teljesen fel lett haszn�lva. K�rlek v�rj a k�vetkez� h�napig, vagy fordulj a k�r�seddel egy adminisztr�torhoz.',
  'Dl_no_permission' => 'Hozz�f�r�s megtagadva!<br /><br />Nincs jogod ezt tenni!',
  'Dl_no_upload_traffic' => 'Bocsi, de nincs t�bb felt�lt�si lehet�s�ged. L�pj kapcsolatba egy adminiasztr�torral, ha  f�jlt mindenk�ppen szeretn�d felt�lteni',
  'Dl_path_not_exist' => 'Ez a kateg�ria �tvonal (<b>%s</b>) nem l�tezik!<br />Menj vissza, �s adj meg egy m�sik �tvonalat<br />vagy hozd l�tre ezt az �tvonalat egy f�jlkezel�vel.',
  'Dl_permission_updated' => 'Let�lt�si jogosults�gok ment�se: sikeres',
  'Dl_user_config_saved' => 'A let�lt�sek felhaszn�l�i be�ll�t�sa sikeresen friss�tve<br /><br />Kattints %side%s, hogy visszamenj a let�lt�sekhez',
  'Download_added' => 'A let�lt�s hozz�adva',
  'Download_removed' => 'A let�lt�s t�r�lve',
  'Download_updated' => 'Az inform�ci�k friss�tve',
  'New_download' => 'Az �j let�lt�s felt�ltve vagy friss�tve.<br />Kattints %side%s, hogy visszamenj a let�lt�sekhez.',
  'Dl_confirm_cat_stats_delete' => 'T�nyleg t�r�lni szeretn�d a <b>%s</b> kateg�ria statisztikai adatait?',
  'Dl_confirm_all_stats_delete' => 'T�nyleg t�r�lni szeretn�d az �sszes statisztikai adatot?',
  'Dl_confirm_cat_comments_delete' => 'T�nyleg t�r�lni szeretn�d a <b>%s</b> kateg�ria �sszes komment�rj�t?',
  'Dl_confirm_all_comments_delete' => 'T�nyleg t�r�lni szeretn�d az �sszes komment�rt?',
  'Dl_file_not_found' => '<b>A %s f�jlt nem tal�lom!</b><br /><br />Gy�z�dj meg arr�l, hogy a f�jl l�tezik-e a %s k�nyvt�rban!',
  'Dl_no_change_edit_time' => 'Ez a friss�t�s nem napl�zott',
  'Dl_thumb_upload' => 'B�lyegk�p sikeresen felt�ltve',
  'Dl_thumb_del' => 'B�lyegk�p sikeresen t�r�lve',
  'Dl_thumb_to_big' => 'A b�lyegk�p t�l nagy!<br />K�rlek kisebb f�jlt, vagy kisebb m�ret� k�pet haszn�lj.<br />Haszn�ld a b�ng�sz� vissza gombj�t, �s ism�teld meg a felt�lt�st.',
  'Dl_hotlink_permission' => 'Nincs enged�lyezve, hogy ezt a f�jlt egy link seg�ts�g�vel k�zvetlen�l t�ltsd fel!',
  'Dl_vc_permission' => 'A let�lt�shez sz�ks�ges j�v�hagy� k�d hib�s. K�rlek pr�b�lkozz �jra.',
  'Dl_report_broken_vc_mismatch' => 'A j�v�hagy� k�d a jelent�shez hib�s. K�rlek pr�b�lkozz �jra.',
  'Dl_vc_not_found' => 'A j�v�hagy� k�d hi�nyzott. K�rlek pr�b�lkozz �jra.',

/*
* page descriptions
*/
  'Dl_page_dl_hackslist' => 'Hacklista',
  'Dl_page_downloads' => 'Let�lt�sek',

/*
* commands
*/
  'Add_new_download' => '�j let�lt�s hozz�ad�sa',
  'Dl_add' => 'Hozz�ad',
  'Dl_add_category' => 'Kateg�ria hozz�ad�sa',
  'Dl_approve' => 'Elfogad',
  'Dl_check_file_sizes' => 'F�jlm�retek ellen�rz�se',
  'Dl_check_thumbnails' => 'B�lyegk�pek ellen�rz�se',
  'Dl_delete' => 'T�r�l',
  'Dl_down' => 'Le',
  'Dl_edit' => 'Szerkeszt',
  'Dl_go' => 'Ugorj',
  'Dl_klick_to_rate' => '�rt�kel',
  'Dl_lock' => 'Z�rol',
  'Dl_mark_all' => 'Mind megjel�l',
  'Dl_move' => 'Mozgat:',
  'Dl_set' => 'Be�ll�t',
  'Dl_unmark' => 'Mind jel�letlen',
  'Dl_up' => 'fel',
  'Dl_delete_cat' => 'Kateg�ria t�rl�se',
  'Dl_stats_delete' => 'Statisztika t�rl�se',
  'Dl_stats_delete_all' => 'Minden statisztika t�rl�se',
  'Dl_comments_delete' => 'Komment�rok t�rl�se',
  'Dl_comments_delete_all' => 'Minden komment�r t�rl�se',
  'Dl_sub_sort_asc' => 'Minden kateg�ria minden bejegyz�s�nek n�vekv� sorrendbe �ll�t�sa',
  'Dl_sub_sort_asc_zero' => 'Saj�t kateg�ri�ban a bejegyz�sek n�vekv� sorrendbe �ll�t�sa',

/*
* categories related
*/
  'Dl_cat_description' => 'Meghat�roz�s',
  'Dl_cat_files' => 'F�jlok',
  'Dl_cat_index' => 'Legmagasabb szint',
  'Dl_cat_name' => 'Kateg�ria',
  'Dl_cat_parent' => 'Sz�l� kateg�ria',
  'Dl_cat_path' => '�tvonal',
  'Dl_cat_title' => 'Let�lt�sek - Kateg�ri�k',
  'Dl_choose_category' => 'V�lassz egy kateg�ri�t',
  'Dl_mod_desc_allow' => 'Allow mod detail descriptions',
  'Dl_must_approve' => 'Ebben a keteg�ri�ban a let�lt�seket el kell fogadtatni',
  'Dl_statistics' => 'R�szletes statisztika enged�lyezve',
  'Dl_stats_prune' => 'Statisztikai adatok tiszt�t�sa',
  'Dl_stats_delete' => 'Statisztika t�rl�se',
  'Dl_stats_delete_all' => 'Minden statisztika t�rl�se',
  'Dl_comments_delete' => 'Komment�rok t�rl�se',
  'Dl_comments_delete_all' => 'Minden komment�r t�rl�se',
  'Dl_cat_traffic' => 'Forgalmi korl�t (Jelenleg el�rhet�: %s)',
  'Dl_cat_traffic_off' => 'Forgalomkorl�toz�s (jelenleg kikapcsolva)',
  'Dl_cat_traffic_main' => '%s forgalom maradt ebben a kateg�ri�ban',
  'Dl_thumb_cat' => 'B�lyegk�pek enged�lyezve',
  'Dl_approve_comments' => 'Automatikusan elfogadva minden �j komment�r',
  'Dl_cat_rules' => 'Szab�lyok',

/*
* traffic related
*/
  'Dl_auto_traffic' => 'Automatikus let�lt�sm�r�',
  'Dl_enable_post_traffic' => 'Forgalomm�r�s enged�lyez�se a hozz�sz�l�sokhoz',
  'Dl_group_auto_traffic' => 'Felhaszn�l�csoport forgalma',
  'Dl_newtopic_traffic' => 'Let�lt�sm�r�s minden �jonnan l�trehozott t�m�hoz',
  'Dl_overall_traffic' => 'Havonta let�lt�tt f�jlok m�r�se',
  'Dl_remain_overall_traffic' => 'Ebben a h�napra marad� �sszes forgalom: ',
  'Dl_reply_traffic' => 'Let�lt�sm�r�s minden hozz�sz�l�shoz, v�laszhoz �s �rt�kel�shez',
  'Dl_traffic' => 'Max. forgalom',
  'Dl_user_auto_traffic' => 'Felhaszn�l� forgalma',
  'Single_user_traffic_title' => 'Egyszer� felhaszn�l� forgalma',
  'Traffic' => 'Forgalomm�r�s',
  'Traffic_now' => 'Jelenlegi hozz�f�r�s',
  'Usergroup_traffic_title' => 'Felhaszn�l�csoportokon bel�li tagok forgalma',
  'Users_traffic_title' => 'Minden felhaszn�l� forgalma',
  'Dl_user_traffic_once' => 'Felhaszn�l�i forgalom lecs�kkent�se let�lt�senk�nt egyre',
  'Dl_can_download_traffic' => 'M�r let�lt�tted ezt a f�jlt.<br />Az adminisztr�tor enged�lyezte, hogy m�g egyszer let�ltsd an�lk�l, hogy az adatforgalmat kifizetn�d.',
  'Dl_can_download_traffic_footer' => '<b>Az adminisztr�tor enged�lyezte, hogy a m�r let�lt�tt f�jlokat ism�telten let�lthesd fizet�si k�telezets�g n�lk�l.</b><br /><br />',
  'Traffic_all_users_admin_explain' => 'Minden felhaszn�l� forgalm�nak be�ll�t�sa vagy ahhoz val� hozz�ad�s.',
  'Traffic_single_user_admin_explain' => 'Egy egyszer� felhaszn�l� forgalm�nak be�ll�t�sa vagy ahhoz val� hozz�ad�s.',
  'Traffic_usergroup_admin_explain' => 'Egy felhaszn�l�csoport tagjainak forgalm�nak be�ll�t�sa vagy ahhoz val� hozz�ad�s.',
  'Dl_auto_traffic_explain' => 'Ez a t�bla be�ll�tja minden felhaszn�l�nak, vagy egy felhaszn�l�csoport minden tagj�nak a havi let�lt�s korl�tj�t.',

/*
* auth values
*/
  'Dl_permissions_all' => 'Minden felhaszn�l� jogosults�g�nak be�ll�t�sa',
  'Dl_auth_dl' => 'Let�lt',
  'Dl_auth_mod' => 'Moder�l',
  'Dl_auth_up' => 'Felt�lt',
  'Dl_auth_view' => 'Megn�z',
  'Dl_permissions' => 'Az al�bbi felhaszn�l�csoport felhaszn�l�inak a jogosults�ga',
  'Dl_stop_uploads' => 'Felt�lt�s tilt�sa',
  'Dl_stat_perm' => 'Statisztikai oldal felhaszn�l�i jogosults�ga',
  'Dl_stat_perm_all' => 'Mindenki',
  'Dl_stat_perm_user' => 'Regisztr�lt felhaszn�l�k',
  'Dl_stat_perm_mod' => 'Let�lt�smoder�torok',
  'Dl_stat_perm_admin' => 'F�rumadminisztr�torok',
  'Dl_auth_cread' => 'Komment�rok olvas�sa',
  'Dl_auth_cpost' => 'Komment�rok �r�sa',
  'Dl_perm_all' => 'Mindenki',
  'Dl_perm_reg' => 'Regisztr�lt felhaszn�l�k',
  'Dl_perm_grg' => 'Felhaszn�l�csoportok',

/*
* hacks and mods related
*/
  'Dl_hack_autor' => 'Szerz�',
  'Dl_hack_autor_email' => 'Szerz� emailje',
  'Dl_hack_autor_website' => 'Szerz� weboldala',
  'Dl_hack_dl_url' => 'Alternat�v let�lt�s',
  'Dl_hack_version' => 'Hack Version',
  'Dl_hacklist' => 'List in Hacklist',
  'Dl_hacks_list' => 'Hacklist',
  'Dl_mod_desc' => 'How the mod works',
  'Dl_mod_list' => 'Extra inform�ci�k megjelen�t�se',
  'Dl_mod_require' => 'K�vetelm�nyek',
  'Dl_mod_test' => 'Mod tesztelve vmin/vmvel',
  'Dl_mod_todo' => 'Tennival�',
  'Dl_mod_warning' => 'Figyelmeztet�sek',

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
  'Dl_latest_downloads' => 'Legfrissebb let�lt�sek',
  'Dl_latest_uploads' => 'Legfrissebb felt�lt�sek',
  'Dl_downloads_cur_month' => 'Let�lt�sek ebben a h�napban',
  'Dl_downloads_overall' => '�sszes let�lt�s',
  'Dl_downloads_count' => 'Let�lt�sek',
  'Dl_downloads_traffic' => '�sszes let�lt�si forgalom',
  'Dl_uploads_count' => 'Felt�lt�sek',
  'Dl_uploads_traffic' => '�sszes felt�lt�si forgalom',
  'Dl_pos' => 'Hely',
  'Dl_time' => 'Id�',
  'Dl_stats' => 'Let�lt�si statisztik�k',
  'Dl_direction' => 'Akci�',
  'Dl_browser' => 'Webb�ng�sz�',
  'Dl_ip' => 'IP c�mek',
  'Dl_traffic_cur_month' => 'Ennek a h�napnak forgalma',
  'Dl_traffic_overall' => '�sszes forgalom',
  'Dl_guest_stat_delete' => 'Vend�gek adat�nak t�rl�se',
  'Dl_no_filter' => '- nincs sz�r� -',
  'Dl_total_entries' => 'Tal�lt bejegyz�sek',
  'Dl_filter' => 'Sz�r�',
  'Dl_filter_string' => 'Haszn�ld a *-ot vagy a %-ot a "b�rmi" helyett',
  'Dl_guest_stats_admin' => 'Vend�gek adat�nak mutat�sa',
  'Dl_stat_edit' => 'szerkesztett',

/*
* comments
*/
  'Dl_comment' => 'Komment�r',
  'Dl_comments' => 'Komment�rok',
  'Dl_last_comment' => 'Utols� komment�r',
  'Dl_post_comment' => '�r',
  'Dl_view_comments' => 'Mutat',
  'Dl_comment_edited' => 'A komment�r szerkesztve %s-kor',
  'Dl_comment_write' => 'Komment�r �r�sa',
  'Dl_comment_show' => 'Mutasd ennek a let�lt�snek minden komment�rj�t',
  'Dl_comment_delete' => 'T�r�l',
  'Dl_comment_edit' => 'Szerkeszt',
  'Dl_comment_added' => 'komment�r sikeresen hozz�adva',
  'Dl_comment_updated' => 'Komment�r sikeresen friss�tve',
  'Dl_must_be_approve_comment' => 'Ezt a komment�rt musz�ly egy moder�tornak vagy egy adminisztr�tornak elfogadni!',
  'Dl_approve_overview_one_comment' => 'Itt egy nem elfogadott komment�r van. Kattints a sz�vegre az ellen�rz�shez.',
  'Dl_approve_overview_comments' => 'Itt %s nem elfogadott komment�r van. Kattints a sz�vegre az elen�rz�shez.',

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
  'Dl_account' => 'Erre a h�napra m�g <b>%s</b> forgalom maradt.',
  'Dl_add_user' => 'Ezt a let�lt�st <b>%s</b>-kor <b>%s</b> adta hozz�',
  'Dl_all' => 'Mind',
  'Dl_Bytes' => 'B',
  'Dl_Bytes_long' => 'Byte',
  'Dl_change_user' => ' Utolj�ra szerkesztette <b>%s</b>-kor <b>%s</b>',
  'Dl_config' => 'Let�lt�si be�ll�t�sok',
  'Dl_days' => 'Nap',
  'Dl_default_sort' => 'Alap�rtelmezett sorrend',
  'Dl_delay_auto_traffic' => 'V�rakoz�s az �j felhaszn�l�k let�lt�s�nek m�r�s�hez',
  'Dl_delay_post_traffic' => 'V�rakoz�s az �j felhaszn�l�k hozz�sz�l�sainak m�r�s�hez',
  'Dl_direct_download' => 'k�zvetlen',
  'Dl_detail' => 'R�szletek',
  'Dl_disable_email' => 'Esem�nyenk�nti email tilt�sa',
  'Dl_disable_popup' => 'Popup/f�rum�zenetenk�nti eml�keztet� tilt�sa',
  'Dl_disable_email_files' => 'Esem�nyenk�nti email tilt�sa',
  'Dl_disable_popup_files' => 'Popup/f�rum�zenetenk�nti eml�keztet� tilt�sa',
  'Dl_download' => 'Let�lt�s',
  'DL_edit' => 'Friss�tett let�lt�s',
  'DL_edit_time' => 'Szerkeszt�s ut�ni megjel�l�s napjainak a sz�ma',
  'Dl_extern' => 'K�ls�',
  'Dl_extern_up' => 'K�ls�',
  'Dl_file_description' => 'Meghat�roz�s',
  'Dl_file_name' => 'F�jl',
  'Dl_file_size' => 'M�ret',
  'Dl_files_title' => 'F�jlok',
  'Dl_files_url' => 'URL',
  'Dl_free' => 'Szabad let�lt�s',
  'Dl_function' => 'Funkci�',
  'Dl_GB' => 'GB',
  'Dl_group_name' => 'Csoportnevek',
  'Dl_guest_stats_show' => 'A vend�gek r�szletes kateg�riastatisztik�inak a mutat�sa',
  'Dl_hotlink_action' => 'Linkm�velet a k�zvetlen let�lt�shez',
  'Dl_hotlink_action_one' => '�tir�ny�t�s a r�szletez�shez',
  'Dl_hotlink_action_two' => 'megjelen� �zenet',
  'Dl_info' => 'Inf�',
  'Dl_is_free' => 'Szabad let�lt�s',
  'Dl_is_free_reg' => 'Szabad a regisztr�lt felhaszn�l�knak',
  'Dl_KB' => 'TB',
  'Dl_klicks' => 'A h�nap klikkjei',
  'Dl_last_time' => ' Ut�lj�ra let�lt�tte: <b>%s</b>',
  'Dl_last_time_extern' => ' Ut�lj�ra let�lt�tte egy k�ls� linkr�l: <b>%s</b>',
  'Dl_limit_desc_on_index' => 'A let�lt�s meghat�ros�s�nak korl�tja az Index oldalon',
  'Dl_Links_per_page' => 'Let�lt�s per oldal',
  'Dl_MB' => 'MB',
  'Dl_method' => 'Let�lt�si m�d',
  'Dl_method_new' => '�j',
  'Dl_method_old' => 'R�gi',
  'Dl_method_quota' => 'Az olvas�sra megnyitott nagyobb f�jlok korl�tja',
  'Dl_modcp_capprove' => 'Komment�r elfogad�sa',
  'Dl_must_be_approved' => 'Ezt a let�lt�st ebben a kateg�ri�ban musz�ly elfogadnia egy adminisztr�tornak vagy egy moder�tornak',
  'Dl_name' => 'N�v',
  'DL_new' => '�j let�lt�s',
  'DL_new_time' => 'H�ny napig legyen �jk�nt megjel�lve a let�lt�s',
  'Dl_no' => 'Nem',
  'Dl_no_config' => 'A felhaszn�l�be�ll�t�s z�rolva',
  'Dl_no_last_time' => ' Nem sz�moltam let�lt�st...',
  'Dl_no_mod_todo' => 'Nem kell most semmit csin�lni a moddal',
  'Dl_not_availible' => 'Nem el�rhet�',
  'Dl_order' => 'Rendez',
  'Dl_overall_klicks' => '�sszes klikk',
  'Dl_klicks_total' => 'Havi / �ves klikk',
  'Dl_overview' => '�ttekint� lista minden let�lt�sr�l',
  'DL_posts' => 'Number of Posts a user needs to get download access',
  'Dl_prevent_hotlink' => 'Prevent links for direct downloads',
  'Dl_rating' => '�rt�kel�s',
  'Dl_real_filetime' => 'Last file modification',
  'Dl_search_author' => 'For users which have uploaded or changed downloads',
  'Dl_show_footer_legend' => 'Show legend on download footer',
  'Dl_show_footer_stat' => 'Show statistics on download footer',
  'Dl_show_real_filetime' => 'Show the time of the last file modification on download details',
  'Dl_sort_preform' => 'Preform sorting',
  'Dl_sort_acp' => 'Preset',
  'Dl_sort_user' => 'Felhaszn�l�',
  'Dl_sort_user_opt' => 'Sort downloads for',
  'Dl_sort_user_ext' => 'with other criteria',
  'Dl_thumb' => 'B�lyegk�p',
  'Dl_thumb_dim_size' => 'The thumbnail can have a maximum dimension of %s x %s pixels and the filesize must be smaller than %s.',
  'Dl_thumb_max_dim' => 'Maximum dimension in pixels X * Y',
  'Dl_thumb_max_size' => 'Maximum thumbnail filesize',
  'Dl_total_stat' => 'There are overall %s downloads with a size of %s / %s including %s external Downloads.',
  'Dl_unapproved' => '<br /><span class="gensmall">[ unapproved ]</span>',
  'Dl_upload' => 'Egy f�jl felt�lt�se',
  'Dl_upload_file' => 'Felt�lt�s',
  'Dl_upload_max_filesize' => 'Maximum filesize that is allowed for uploads: %s',
  'Dl_upload_traffic' => 'The file size of uploads will decrease the overall traffic. Regard this on choosing the file size!',
  'Dl_upload_traffic_count' => 'Also decrease the overall traffic for uploads',
  'Dl_use_hacklist' => 'Activate hackslist',
  'Dl_users_without_group' => 'Users without a membership in an usergroup',
  'Dl_white_explain' => 'Free download without traffic count for registered users',
  'Dl_yes' => 'Yes',
  'Dl_yes_reg' => 'Yes for<br />reg. User',
  'Download_path' => 'Path to your downloads, e.g. <b>downloads/</b>',
  'Downloads' => 'Let�lt�sek',
  'Must_select_download' => 'V�lassz egy let�lt�st.',
  'Number_recent_dl_on_portal' => 'Number of recent downloads that are displayed on the portal',
  'Recent_downloads' => 'Recent downloads',
  'User_allow_fav_download_email' => 'Enable emails for changes on favorite downloads',
  'User_allow_fav_download_popup' => 'Enable board messag for changes on favorite downloads',
  'User_allow_new_download_email' => 'Enable emails for new downloads',
  'User_allow_new_download_popup' => 'Enable board message for new downloads',
  'User_download_email' => 'Email<br />notification',
  'User_download_popup' => 'F�rum<br />�zenet',
  'User_download_notify_type' => 'Type of board message',
  'User_download_notify_type_popup' => 'Popup',
  'User_download_notify_type_message' => 'Message on board header',
  'Dl_edit_own_downloads' => 'A felhaszn�l� szerkesztheti a saj�t f�jljait',
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
  'Dl_report_broken_lock' => 'Let�lt�s tilt�sa, ha a f�jl t�r�ttk�nt be van jelentve',
  'Dl_report_broken_message' => 'Vizu�lis j�v�hagy�s csak akkor, ha a f�jl nincs t�r�ttk�nt bejelentve',
  'Dl_report_broken_vc' => 'Vizu�lis j�v�hagy�s enged�lyez�se egy t�r�tt let�lt�s bejelent�s�hez',
  'Dl_visual_confirmation' => 'Vizu�lis j�v�hagy�s enged�lyez�se egy f�jl let�lt�s�hez',
  'Dl_off_guests' => 'Vend�geknek nem',

/*
* new on Download MOD 5.1.1
*/
  'Dl_icon_free_for_reg' => 'Feh�r let�lt�s ikon megjelen�t�se a vend�geknek',

/*
* new on Download MOD 5.1.3
*/
  'Dl_latest_comments' => 'Az utols� X komment�r megjelen�t�se a let�lt�s r�szleteiben',

/*
* new on Download MOD 5.2.0 - The Bug Tracker !!!!!!!!!!!! -------------  * :-(((((
*/
  'Dl_bug_tracker' => 'Hibakezel�',
  'Dl_bug_tracker_file' => 'err�l a let�lt�sr�l',
  'Dl_bug_tracker_cat' => 'Hibakezel� enged�lyez�se',
  
  'Confirm_delete_bug_report' => 'T�nyleg t�r�lni akarod ezt a hibajelent�st?',
  'Dl_bug_report_id' => 'Jelent�s ID',
  'Dl_bug_report_title' => 'Jelent�s c�me',
  'Dl_bug_report_title_details' => 'Jelent�s',
  'Dl_bug_report_text' => 'Meghat�roz�s',
  'Dl_bug_report_date' => 'Jelentette neki:',
  'Dl_bug_report_php' => 'PHP',
  'Dl_bug_report_db' => 'DB',
  'Dl_bug_report_forum' => 'F�rum',
  'Dl_bug_report_file' => 'Let�lt�s',
  'Dl_bug_report_author' => 'Bejelentette:',
  'Dl_bug_report_assigned' => '�truh�zva neki:',
  'Dl_bug_report_assign_date' => '�truh�zta:',
  'Dl_bug_report_status' => 'St�tusz',
  'Dl_bug_report_status_date' => 'Utols� st�tuszid�',
  'Dl_bug_report_detail' => 'R�szletek',
  'Dl_bug_report_history' => 'T�rt�net',
  'Dl_bug_report_reassign' => '�jra-�truh�zva',
  'Dl_bug_report_assign' => '�truh�zva',
  'Dl_bug_report_unassigned' => '�truh�zatlan',
  'Dl_no_bug_tracker' => 'Nem tal�ltam jelent�st',
  'Dl_bug_report_no_title' => 'Nem adt�l c�met ennek a hibajelent�snek!',
  'Dl_bug_report_no_text' => 'Nem adt�l meghat�roz�st ennek a hibajelent�snek!',
  'Dl_bug_report_added' => 'Hibajelent�s sikeresen hozz�adva',
  'Click_return_bug_tracker' => 'Kattints %side%s a hibajelent�sekhez val� visszat�r�shez.',
  'Dl_bug_report_status_text' => 'N�h�ny sz�veg �j st�tusszal van (�rtes�teni kell az emailek szerz�it err�l a hibajelent�sr�l)',
  'Dl_bug_report_status_update' => 'friss�tett st�tusz',
  'Dl_filter_bt_own' => 'Jelent�seim mutat�sa',
  'Dl_filter_bt_assign' => '�truh�z�saim mutat�sa',
  
  'Dl_user_download_limit_flag' => 'A havi let�lt�si sz�m korl�tja',
  'Dl_user_download_limit' => 'Havi let�lt�sek maxim�lis sz�ma',
  'Dl_report_status' => 
  array (
    0 => '�j',
    1 => 'n�zett',
    2 => 'folyamatban',
    3 => 'f�gg�',
    4 => 'v�ge',
    5 => 'eldobva',
  ),
  'Dl_bug_report_email_status' => 'Ez az �zenet �j �llapotot kapott:
--------------------
%s
--------------------',
  )
);

?>