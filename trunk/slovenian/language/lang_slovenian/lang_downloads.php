<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_downloads.php 34 2009-05-07 22:45:10Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* (c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* (c) hotschi / demolition fabi / oxpus
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

$lang = array_merge($lang, array(
/*
* mod version string
*/
	'Dl_mod_version' => 'Download MOD v%s&nbsp;&copy;(c) 2002 - 2007 by Hotschi, Demolition Fabi, OXPUS',

/*
* general messages after successfull data managements
*/
'Click_return_categoryadmin' => 'Klikni %stukaj%s za vrnitev na administracijo kategorij',
	'Click_return_dl_config' => 'Klikni %stukaj%s za vrnitev na upravitelja prenosov',
	'Click_return_downloadadmin' => 'Klikni %stukaj%s za vrnitev na administracijo prensov',
	'Click_return_downloads' => 'Klikni %stukaj%s za vrnitev k kategorijo Prenosi',
	'Click_return_download_details' => 'Klikni %stukaj%s za vrnitev na prenos',
	'Click_return_file_management' => 'Klikni %shere%s za vrnitev v urejanja podatkov',
	'Click_return_modcp_approve' => 'Klikni %shere%s za vrnitev v neodobrene prenose',
	'Click_return_modcp_manage' => 'Klikni %stukaj%s za vrnitev v moderatorsko plo�co',
	'Click_return_user_traffic_admin' => 'Klikni %stukaj%s za urejanje povezave drugega uporabnika ',
	'Click_return_usergroup_traffic_admin' => 'Klikni %stukaj%s za urejanje povezave drugege uporabni�ke skupine ',

/*
* message strings
*/
	'Dl_category_added' => 'Kategorija dodana',
	'Dl_category_updated' => 'Kategorija posodobljena',
	'Dl_category_removed' => 'Kategorija uspe�no odstranjena',
	'DL_upload_error' => 'Napaka pri prenosu datoteke. Prosimo, vrnite se na prej�njo stran in poskusite znova.<br />Kontaktirajte administratorja strani, ce se napaka ponavlja.',
	'Dl_approve_overview' => 'Obstajajo %s neodobreni prenosi. Klikni tukaj za odobritev.',
	'Dl_approve_overview_one' => 'Obstaja%s neodobren prenos. Klikni tu za odobritev.',
	'Dl_config_updated' => 'Konfiguracija prenosa uspe�no shranjena',
	'Dl_confirm_cat_delete' => 'Ali res �elite izbrisati kategorijo <b>%s</b>?',
	'Dl_confirm_delete_multiple_files' => 'Ali res �elite izbrisati izbrane<b>%d prenose</b>?',
	'Dl_confirm_delete_single_file' => 'Ali res �elite izbrisati prenos<b>%s</b>?',
	'Dl_delete_cat_and_files' => 'Zbri�i kategorijo in vse datoteke v njej',
	'Dl_delete_cat_confirm' => 'Izberi kategorijo, v katero bojo vsi prenosi premaknjeni, ali izberi drugo mo�nost',
	'Dl_delete_cat_only' => 'Zbri�i le to kategorijo',
	'Dl_delete_file_confirm' => 'Zbri�i tudi vsebujoce podatke',
	'Dl_empty_category' => 'V tej kategoriji ni prenosov',
	'Dl_no_access' => 'Dostop zavrnjen!<br /><br />Nimate ustreznih dovoljenj za prenos datoteke!',
	'Dl_no_category' => 'Na voljo ni nobenih kategorij. Preden nastavite dovoljenja, dodajte novo kategorijo.',
	'Dl_no_category_index' => 'Izbrani del prenosov nima kategorij',
	'Dl_no_external_url' => 'Vstavite ustrezen URL ce �elite prilo�iti zunanji prenos!',
	'Dl_no_filename_entered' => 'Izbrati morate datoteko, ce jo �elite nalo�iti!',
	'Dl_no_groups_for_traffic' => 'Najdene ni nobene uporabni�ke skupine!!!<br /><br />Dodaj uporabni�ko skupino preden nastavi� omejitve prenosa',
	'Dl_no_more_remain_traffic' => 'Dovoljena kvota prenosov %s je bila do�ene za ta mesec. Pocakajte na nasledni mesec, ali kontaktirajte daministratorja.',
	'Dl_no_permission' => 'Dostop zavrnjen!<br /><br />Nimate pravice za to dejanje!',
	'Dl_no_upload_traffic' => 'Oprostite, meja nalaganja je dose�ena. Prosimo, kontaktirajte administratorja ce �elite nalo�iti izbrano datoteko',
	'Dl_path_not_exist' => 'Izbrana kategorja<b>%s</b> ne obstaja!<br />Vrnite se nazaj in vstavite ime druge kategorije<br />ali ustvarite kategorijo v upravljitelju datotek.',
	'Dl_permission_updated' => 'Dovoljenja prenosov uspe�no shranjena',
	'Dl_user_config_saved' => 'Uporabni�ke nastavitve prenosov so uspre�no shranjene<br /><br />Klikni %stukaj%s za vrnitev v prenose',
	'Download_added' => 'Prenos dodan',
	'Download_removed' => 'Prenos izbrisan',
	'Download_updated' => 'Podatki so posodobljeni',
	'New_download' => 'Nov prenosje bil nalo�en ali posodobljen.<br />Klikni %stukaj%s za direktno vrnitev v prenose.',

	'Dl_confirm_cat_stats_delete' => 'Ali ste prepricani da �elite izbrisati statisticne podatke iz kategorije <b>%s</b>?',
	'Dl_confirm_all_stats_delete' => 'Ali ste prepricani da �elite izbrisati vse statisticne podatke?',
	'Dl_confirm_cat_comments_delete' => 'Ali ste prepricani da �elite izbrisati komentarje v kategoriji <b>%s</b>?',
	'Dl_confirm_all_comments_delete' => 'Ali ste prepricani da �elite izbrisati vse komentarje?',
	'Dl_file_not_found' => '<b>Datoteka %s ni bila najdena!</b><br /><br />Prosimo prepricajte se da ta datoteke obstaja v mapi %s!',
	'Dl_no_change_edit_time' => 'Ne bele�i te posodovitve',
	'Dl_thumb_upload' => 'Slicica uspe�no nalo�ena',
	'Dl_thumb_del' => 'Slicica uspe�no izbrisana',
	'Dl_thumb_to_big' => 'Slicica je prevelika!<br />Prosimo uporabite manj�o datoteko ali sliko z manj�imi dimenzijami.<br />Uporabite gumb nazaj v va�em brskalniku za ponovno nalaganje.',
	'Dl_hotlink_permission' => 'Ni vam dovoljeno prenesti datoteke s kopiranjem povezave !',
	'Dl_vc_permission' => 'Potrditvena koda za prenos datoteke je napacna. Prosimo pojdite nazaj in poizkusite ponovno.',
	'Dl_report_broken_vc_mismatch' => 'Potrditvena koda za porocilo je bila napacna. Prosimo pojdite nazaj in poizkusite ponovno.',
	'Dl_vc_not_found' => 'Potrditvene kode ni bilo mogoce najti. Prosimo pojdite nazaj in poizkusite ponovno.',

/*
* page descriptions
*/
	'Dl_page_dl_hackslist' => 'Seznam Hacks',
	'Dl_page_downloads' => 'Prenosi',

/*
* commands
*/
	'Add_new_download' => 'Dodaj nov prenos',
	'Dl_add' => 'Dodaj',
	'Dl_add_category' => 'Dodaj kategorijo',
	'Dl_approve' => 'Odobri',
	'Dl_check_file_sizes' => 'Preveri velikosti datotek',
	'Dl_check_thumbnails' => 'Preveri slicice',
	'Dl_delete' => 'Izbri�i',
	'Dl_down' => 'Dol',
	'Dl_edit' => 'Uredi',
	'Dl_go' => 'Pojdi',
	'Dl_klick_to_rate' => 'Oceni',
	'Dl_lock' => 'Zakleni',
	'Dl_mark_all' => 'Oznaci vse',
	'Dl_move' => 'Premakni',
	'Dl_set' => 'Nastavi',
	'Dl_unmark' => 'Odznaci vse',
	'Dl_up' => 'Gor',
	'Dl_delete_cat' => 'Izbri�i kategorijo',
	'Dl_stats_delete' => 'Izbri�i statisticne podatke',
	'Dl_stats_delete_all' => 'Izbri�i vse statisticne podatke',
	'Dl_comments_delete' => 'Izbri�i komentarje',
	'Dl_comments_delete_all' => 'Izbri�i vse komentarje',
	'Dl_sub_sort_asc' => 'Razvr�canje vseh vnosov v tej kategoriji nara�cajoce.',
	'Dl_sub_sort_asc_zero' => 'Razvrsti glavne kategorije nara�cajoce',

/*
* categories related
*/
	'Dl_cat_description' => 'Opis',
	'Dl_cat_files' => 'Datoteke',
	'Dl_cat_index' => 'Najvi�ja stopnja',
	'Dl_cat_name' => 'Kategorija',
	'Dl_cat_parent' => 'Nadrejena kategorija',
	'Dl_cat_path' => 'Pot',
	'Dl_cat_title' => 'Prenosi - Kategorije',
	'Dl_choose_category' => 'Izberi kategorijo',
	'Dl_mod_desc_allow' => 'Dovoli podroben opis',
	'Dl_must_approve' => 'Prenosi v tej kategoriji morajo biti potrjeni',
	'Dl_statistics' => 'Omogoci podrobne statisticne podatke',
	'Dl_stats_prune' => 'Skraj�ani statisticni podatki',
	'Dl_stats_delete' => 'Izbri�i statisticne podatke',
	'Dl_stats_delete_all' => 'Izbri�i vse statisticne podatke',
	'Dl_comments_delete' => 'Izbri�i komentarje',
	'Dl_comments_delete_all' => 'Izbri�i vse komentarje',
	'Dl_cat_traffic' => 'Kvota prometa (trenutno na voljo: %s)',
	'Dl_cat_traffic_off' => 'Kvota prometa (currently off)',
	'Dl_cat_traffic_main' => '%s �e dovoljenega prometa v tej kategoriji',
	'Dl_thumb_cat' => 'Dovoli slicice',
	'Dl_approve_comments' => 'Avtomaticno potrdi vsak nov komentar',
	'Dl_cat_rules' => 'Pravila',

/*
* traffic related
*/
	'Dl_auto_traffic' => 'Avtomaticno prenesi promet',
	'Dl_enable_post_traffic' => 'Dovoli vticnik za promet pri objavi',
	'Dl_group_auto_traffic' => 'Promet za uporabni�ke skupine',
	'Dl_newtopic_traffic' => 'Prenesi promet za vsako na novo ustvarjeno temo',
	'Dl_overall_traffic' => 'Mesecni promet za vse datoteke',
	'Dl_remain_overall_traffic' => 'Preostali skupni promet za ta mesec: ',
	'Dl_reply_traffic' => 'Prenesi promet za vsako objavo, odgovor ali citat',
	'Dl_traffic' => 'Najvecji dovoljen promet',
	'Dl_user_auto_traffic' => 'Promet uporabnikov',
	'Single_user_traffic_title' => 'Promet uporabnika',
	'Traffic' => 'Promet',
	'Traffic_now' => 'Trenutno na racunu',
	'Usergroup_traffic_title' => 'Promet za clane uporabni�ke skupine',
	'Users_traffic_title' => 'Promet za vse uporabnike',
	'Dl_user_traffic_once' => 'Zmanj�anje uporabni�kega prometa samo enkrat na prenos',
	'Dl_can_download_traffic' => 'To datoteko ste �e prenesli.<br />Skrbnik vam je dovolil prenesti spet brez da bi placali za ponoven prenos.',
	'Dl_can_download_traffic_footer' => '<b>Skrbnik vam je dovolil nalo�iti �e preneseno datoteko spet brez da bi placali.</b><br /><br />',
	'Traffic_all_users_admin_explain' => 'Dodaj ali nastavi promet za vse uporabnike.',
	'Traffic_single_user_admin_explain' => 'Dodaj promet za uporabnika.',
	'Traffic_usergroup_admin_explain' => 'Dodaj ali nastavi promet za vse clane uporabni�ke skupine.',
	'Dl_auto_traffic_explain' => 'Nastavi promet za vse uporabnike ali clane uporabni�ke skupine koliko ga bodo dobili za mesecno prena�anje.',

/*
* auth values
*/
	'Dl_permissions_all' => 'Nastavljanje dovoljenj za vse uporabnike',
	'Dl_auth_dl' => 'Prene�eno',
	'Dl_auth_mod' => 'Zmerno',
	'Dl_auth_up' => 'Nalo�i',
	'Dl_auth_view' => 'Pogled',
	'Dl_permissions' => 'Dovoljenja za clane naslednjih uporabni�kih skupin',
	'Dl_stop_uploads' => 'Onemogoci prenose',
	'Dl_stat_perm' => 'Dovoljenja za statisticne podatke na ravni uporabnika',
	'Dl_stat_perm_all' => 'Vsi',
	'Dl_stat_perm_user' => 'Registrirani uporabniki',
	'Dl_stat_perm_mod' => 'Uporabniki z dovoljenjem za prenos',
	'Dl_stat_perm_admin' => 'Upravni skrbniki',
	'Dl_auth_cread' => 'Beri komentarje',
	'Dl_auth_cpost' => 'Napi�i komentarje',
	'Dl_perm_all' => 'Vsi',
	'Dl_perm_reg' => 'Registrirani uporabniki',
	'Dl_perm_grg' => 'Uporabni�ke skupine',

/*
* hacks and mods related
*/
	'Dl_hack_autor' => 'Avtor',
	'Dl_hack_autor_email' => 'Elektronska po�ta avtorja',
	'Dl_hack_autor_website' => 'Spletna stran avtorja',
	'Dl_hack_dl_url' => 'Alternativni prenos',
	'Dl_hack_version' => 'Verzija Hack',
	'Dl_hacklist' => 'Hack seznam',
	'Dl_hacks_list' => 'Hacklist',
	'Dl_mod_desc' => 'Kako mod deluje',
	'Dl_mod_list' => 'Prika�i dodatne informacije',
	'Dl_mod_require' => 'Zahteve',
	'Dl_mod_test' => 'Mod testiran na/z',
	'Dl_mod_todo' => 'Todo',
	'Dl_mod_warning' => 'Opozorila',

/*
* moderator panel
*/
	'Dl_modcp_approve' => 'Moderator foruma - Odobri prenose',
	'Dl_modcp_edit' => 'Moderator foruma - Uredi prenose',
	'Dl_modcp_manage' => 'Moderator foruma - Upravljaj s prenosi',
	'Dl_modcp_mod_auth' => '<b>Lahko</b> %supravlja� s to kategorijo%s',

/*
* ACP file management
*/
	'Dl_check_filesizes_result' => 'Vse datoteke so posodobljene in ni bilo najdenih nobenih napak',
	'Dl_check_filesizes_result_error' => 'Sledecih datotek ni bilo mogoce pregledati:',
	'Dl_manage' => 'Zbirka datotek',
	'Dl_manage_content_count' => '%s Vnosov',
	'Dl_manage_create_dir' => 'Ustvari to mapo',
	'Dl_manage_empty_folder' => 'Mapa je prazna...',
	'Dl_manage_explain' => 'Upravljaj s prenosi. Lahko uporabi� sledece funkcije:<br /><br />- Izbri�i ali premakni nepodpisane datoteke<br />- Zdru�i podpisane datoteke brez kategorije z �e obstojeco<br />- Brskaj med datotekami (<i>Privzeto pri odprtju upravljalnega okna</i>)<br />- Ustvari novo mapo<br />- Izbri�i prazne mape<br />- Preveri velikosti datotek za vsak zunanji prenos<br /><br /><b>Opozorilo:</b><br />To orodje ne bo nadomestilo klienta FTP!<br />Funkcije, kot so dodajanje, premikanje posamezne datoteke ali zamenjava datoteke niso no�ne s pomocjo tega orodja!',
	'Dl_physical_quota' => 'Fizicna kvota vseh datotek',
	'Dl_unassigned_files' => 'Preverite svobodne datoteke',

/*
* statistics
*/
	'Dl_latest_downloads' => 'Zadnji prenos',
	'Dl_latest_uploads' => 'Zadnja nalo�ena datoteka',
	'Dl_downloads_cur_month' => 'Prenosi ta mesec',
	'Dl_downloads_overall' => 'Prenosi skupno',
	'Dl_downloads_count' => 'Prenosi',
	'Dl_downloads_traffic' => 'Skupni promet prenosov',
	'Dl_uploads_count' => 'Nalaganje',
	'Dl_uploads_traffic' => 'Skupni promet nalaganj',
	'Dl_pos' => 'Pos.',
	'Dl_time' => 'cas',
	'Dl_stats' => 'Statisnicni podatki prenosov',
	'Dl_direction' => 'Delovanje',
	'Dl_browser' => 'Spletni brskalnik',
	'Dl_ip' => 'IP Naslov',
	'Dl_traffic_cur_month' => 'Promet ta mesec',
	'Dl_traffic_overall' => 'Skupni promet',
	'Dl_guest_stat_delete' => 'Izbri�i vse podatke gostov',
	'Dl_no_filter' => '- brez filtra -',
	'Dl_total_entries' => 'Najdeni vnosi',
	'Dl_filter' => 'Filter',
	'Dl_filter_string' => 'Uporabi * ali % kot ogrado',
	'Dl_guest_stats_admin' => 'Poka�i tudi podatke gostov',
	'Dl_stat_edit' => 'urejeno',

/*
* comments
*/
	'Dl_comment' => 'Komentar',
	'Dl_comments' => 'Komentarji',
	'Dl_last_comment' => 'Zadnji komentar',
	'Dl_post_comment' => 'Pi�i',
	'Dl_view_comments' => 'Poka�i',
	'Dl_comment_edited' => 'Komentiraj zadnje urejen %s',
	'Dl_comment_write' => 'Napi�i komentar',
	'Dl_comment_show' => 'Poka�i vse komentarje za ta prenos',
	'Dl_comment_delete' => 'Izbri�i',
	'Dl_comment_edit' => 'Uredu',
	'Dl_comment_added' => 'Komentar uspe�no dodan',
	'Dl_comment_updated' => 'Komentar uspe�no posodobljen',
	'Dl_must_be_approve_comment' => 'Ta komentar mora biti odobren s strani moderatorja ali skirbnika!',
	'Dl_approve_overview_one_comment' => 'Neodobren komentar. Klikni na besedilo ce ga �eli� preveriti.',
	'Dl_approve_overview_comments' => 'Tukaj je %s neodobrenih komentarjev. Klikni na besedilo ce jih �eli� preveriti.',

/*
* ACP management main page
*/
	'Dl_acp_traffic_management' => 'Upravljanje kvote prometa in avtomatskih prednastavitev',
	'Dl_acp_categories_management' => 'Upravljanje kategorij in njihovih dovoljenj',
	'Dl_acp_config_management' => 'Nastavi splo�ne nastavitve',
	'Dl_acp_files_management' => 'Upravljaj s prenosi',
	'Dl_acp_stats_management' => 'Ogled statisticnih podatkov',
	'Dl_acp_managemant_page' => 'Prenos skrbni�kih dovoljenj',
	'Dl_acp_managemant_page_explain' => 'Skrbni�ke nastavitve in funkcije za prenos MOD-a.<br />Izberi eno izmed na�tetih funkcij za sprememno nastavitev.',

/*
* global strings
*/
	'Dl_account' => 'Ima� <b>%s</b> prometa ta mesec.',
	'Dl_add_user' => 'Ta datoteka je bila dodana dne <b>%s</b> od <b>%s</b>',
	'Dl_all' => 'Vsi',
	'Dl_Bytes' => 'B',
	'Dl_Bytes_long' => 'Bytes',
	'Dl_change_user' => ' in nazadnje urejena dne <b>%s</b> od <b>%s</b>',
	'Dl_config' => 'Prenos konfiguracije',
	'Dl_days' => 'Dnevov',
	'Dl_default_sort' => 'Privzeto sortiranje',
	'Dl_delay_auto_traffic' => 'Zamuda avtomatekega prometa za novega uporabnika',
	'Dl_delay_post_traffic' => 'Zamuda prometa za objave novega uporabnika',
	'Dl_direct_download' => 'direktno',
	'Dl_detail' => 'Detajli',
	'Dl_disable_email' => 'Onemogoci obvestila preko elektronske po�te',
	'Dl_disable_popup' => 'Onemogoci obvestila preko popup-a',
	'Dl_disable_email_files' => 'Onemogoci obvestila preko elektronske po�te',
	'Dl_disable_popup_files' => 'nemogoci obvestila preko popup-a',
	'Dl_download' => 'Prenos',
	'DL_edit' => 'Posodobljen prenos',
	'DL_edit_time' => '�tevilo dni ko bo prenos zaznamovan',
	'Dl_extern' => 'Zunanji',
	'Dl_extern_up' => 'Zunanji',
	'Dl_file_description' => 'Opis',
	'Dl_file_name' => 'Datoteka',
	'Dl_file_size' => 'Velikost',
	'Dl_files_title' => 'Datoteke',
	'Dl_files_url' => 'Povezava',
	'Dl_free' => 'Brezplacen prenos',
	'Dl_function' => 'Funkcija',
	'Dl_GB' => 'GB',
	'Dl_group_name' => 'Skupinska imena',
	'Dl_guest_stats_show' => 'Poka�i goste v podrobni kategoriji pri statisticnih podatkih',
	'Dl_hotlink_action' => 'Povezava za direkten prenos',
	'Dl_hotlink_action_one' => 'preusmeri na podrobnosti',
	'Dl_hotlink_action_two' => 'prika�i sporocilo',
	'Dl_info' => 'Informacije',
	'Dl_is_free' => 'Brezplacen prenos',
	'Dl_is_free_reg' => 'Brezplacno za registrirane uporabnike',
	'Dl_KB' => 'KB',
	'Dl_klicks' => 'Klikov',
	'Dl_last_time' => ' Zadnji prenos dne <b>%s</b>',
	'Dl_last_time_extern' => ' Zadnji prenos z zunanje povezave dne <b>%s</b>',

	'Dl_limit_desc_on_index' => 'Omejitev opis prenosa v Indexu',
	'Dl_Links_per_page' => 'Prenosov na stran',
	'Dl_MB' => 'MB',
	'Dl_method' => 'Metoda prenosa',
	'Dl_method_new' => 'Novo',
	'Dl_method_old' => 'Staro',
	'Dl_method_quota' => 'Kvota za kose datotek',
	'Dl_modcp_capprove' => 'Odobri komentarje',
	'Dl_must_be_approved' => 'Ta prenos mora biti odobren z strani skrbnika ali moderatorja te kategorije.',
	'Dl_name' => 'Ime',
	'DL_new' => 'Nov prenos',
	'DL_new_time' => '�tevilo dni kolikor bo nov prenos oznacen',
	'Dl_no' => 'Ne',
	'Dl_no_config' => 'Uporabni�ka konfiguracija je zaklenjena',
	'Dl_no_last_time' => ' Ni prenosov na�tetih do sedaj...',
	'Dl_no_mod_todo' => 'Ni MOD-ov ToDo\'s za sedaj',
	'Dl_not_availible' => 'Ni na voljo',
	'Dl_order' => 'Razvr�canje',
	'Dl_overall_klicks' => 'Skupno �evilo klikov',
	'Dl_klicks_total' => 'Klikov na mesec / Skupno',
	'Dl_overview' => 'Pregled seznam vseh prenosov',
	'DL_posts' => '�etvilo objav ki jih potrebuje uporabnik da lahko dostopa do prenosa',
	'Dl_prevent_hotlink' => 'Odvracati povezave iz neposrednih prenosov',
	'Dl_rating' => 'Ocena',
	'Dl_real_filetime' => 'Zadnja sprememba datoteke',
	'Dl_search_author' => 'Za uporabnike katere so nalo�ili ali spremenili prenose',
	'Dl_show_footer_legend' => 'Prika�i legendo v nogi prenosa',
	'Dl_show_footer_stat' => 'Prika�i statisticne podatke v nogi prenosa',
	'Dl_show_real_filetime' => 'Prika�i cas zadnjega urejanja podrobnosti o prenosu',
	'Dl_sort_preform' => 'Opravi razvr�canje',
	'Dl_sort_acp' => 'Prednastavitev',
	'Dl_sort_user' => 'Uporabnik',
	'Dl_sort_user_opt' => 'Sortiraj prenose za',
	'Dl_sort_user_ext' => 'Z drugimi kriteriji',
	'Dl_thumb' => 'Slicica',
	'Dl_thumb_dim_size' => 'Slicica ima lahko najvecjo velikost %s x %s pixlov in velikost datoteke mora biti manj�a od %s.',
	'Dl_thumb_max_dim' => 'Najvecja dimenzija v pixlih X * Y',
	'Dl_thumb_max_size' => 'Najvecja velikost datoteke',
	'Dl_total_stat' => 'Tukaj je skupno %s prenosov z velikostjo %s / %s z vkljucno %s zunanjimi prenosi.',
	'Dl_unapproved' => '<br /><span class="gensmall">[ nepotrjeno ]</span>',
	'Dl_upload' => 'Nalo�i datoteko',
	'Dl_upload_file' => 'Nalo�i',
	'Dl_upload_max_filesize' => 'Najvecja dovoljena velikost nalo�ene datoteke: %s',
	'Dl_upload_traffic' => 'Velikost nalo�ene datoteke bo zni�ala skupni promet. To upo�tevaj pri izbiri velikosti datoteke!',
	'Dl_upload_traffic_count' => 'Tudi zmanj�anje celotnega prometa za nalaganje',
	'Dl_use_hacklist' => 'Vkljucite listo Hack',
	'Dl_users_without_group' => 'Uporabniki brez clanstva uporabni�ki skupini',
	'Dl_white_explain' => 'Brezplacen prenos brez �tetja prometa za registrirane uporabnike',
	'Dl_yes' => 'da',
	'Dl_yes_reg' => 'Da za <br />registrirane uporabnike',
	'Download_path' => 'Pot do va�ih prenosov, npr. <b>prenosi/</b>',
	'Downloads' => 'Prenosi',
	'Must_select_download' => 'Izberi prenos.',
	'Number_recent_dl_on_portal' => '�tevilo zadnjih prenosov, ki so prikazane na portalu',
	'Recent_downloads' => 'Zadnji prenosi',
	'User_allow_fav_download_email' => 'Omogoci elektronsko po�to za spremembo priljubljenih prenosov',
	'User_allow_fav_download_popup' => 'Omogoci sporocila na tabli za spremembo priljubljenih prenosov',
	'User_allow_new_download_email' => 'Omogoci elektronska sporocila za nove prenose',
	'User_allow_new_download_popup' => 'Omogoci sporocila na tabli za nove prenose',
	'User_download_email' => 'elektronska po�ta<br />obvestilo',
	'User_download_popup' => 'tabla<br />sporocilo',
	'User_download_notify_type' => 'Tip sporocila na tabli',
	'User_download_notify_type_popup' => 'Pop-up',
	'User_download_notify_type_message' => 'Glava sporocila na tabli',
	'Dl_edit_own_downloads' => 'Uporabnik lahko ureja svoje datoteke',
	'Dl_report_confirm_code' => 'Prosimo vpi�ite potrditveno kodo tukaj za prijavo pokvarjenega prenosa:',
	'Dl_shorten_extern_links' => 'Skraj�ana prikazana zunanja povezava prenosa',
	'Dl_physical_quota_explain' => 'ce je ta kvota (trenutno %s v uporabi) dose�ena, nalaganje nebo vec mo�no',
	'Dl_blue_explain' => 'Nic vec skupnega prometa ta mesec!',
	'Dl_blue_explain_file' => 'Nic vec prometa z datotekami ta mesec!',
	'Dl_blue_explain_foot' => 'Nic vec skupnega prometa datoteke/kategorije ni dovoljenega ta mesec!',
	'Dl_green_explain' => 'Prenos! Ni odbitkov od uporabni�kega racuna.',
	'Dl_grey_explain' => 'Prenos! Zunanji vir. Ni odbitkov od uporabni�kega racuna.',
	'Dl_red_explain' => 'Ni dovolj prometa ali objav<br />(%s zahtevanih objav). Ne smeti! Po�iljatelji neza�elenih sporocil bodo avtomatsko blokirani!',
	'Dl_red_explain_alt' => 'Ni dovolj prometa ali objav (%s zahtevanih objav). Ne smeti! Po�iljatelji neza�elenih sporocil bodo avtomatsko blokirani!',
	'Dl_red_explain_perm' => 'Nimate pravic za zacetek prenosa!',
	'Dl_yellow_explain' => 'Prenos! Promet bo od�tet od uporabni�kega racuna',
	'Dl_config_explain' => 'Omogoci ali onemogoci razlicne funkcije in/ali nastavitev.',
	'Dl_cat_edit_explain' => 'Upravljaj kategorije za prenos datoteke MOD.',

/*
* build in add on cash to traffic
*/
	'Dl_cash_to_traffic' => 'Zamenjaj denar za promet',
	'Dl_cash_to_traffic_explain' => 'Nastavi zamenjavo med denarnimi valutami in prometom. Zamenjava bo spremenila eno polno vrednost valute z dolocenim �tevilom prometa.',
	'Dl_cash_currency' => 'Denar',
	'Dl_cash_exchange' => 'Menjava: 1 %s v %s prometa',
	'Dl_cash_current_amount' => 'Vi imate %s %s',

/*
* new on Download MOD 5.0.10: Blacklist for filetypes
*/
	'Dl_ext_blacklist' => 'Crna lista vrst datotek',
	'Dl_use_ext_blacklist' => 'Omogoci crno listo vrst datotek',
	'Dl_extention' => 'Nova prepovedana raz�iritev datoteke',
	'Dl_extentions' => 'Prepovedana raz�iritev datoteke',
	'Dl_add_extention' => 'Dodaj raz�iritev datoteke',
	'Dl_confirm_delete_extention' => 'Ali ste prepricani da hocete zavreci rez�iritve <b>%s</b>?',
	'Dl_confirm_delete_extentions' => 'Ali ste prepricani da hocete zavreci rez�iritve <b>%s</b>?',
	'Dl_delete_extention_confirm' => 'Zavrzi raz�iritve datoteke s crne liste',
	'Dl_delete_extentions_confirm' => 'Zavrzi raz�iritve datoteke s crne liste',
	'Extention_removed' => 'Raz�iritev datoteka uspe�no odstranjena s crne liste.',
	'Extentions_removed' => 'Raz�iritev datoteka uspe�no odstranjena s crne liste.',
	'Click_return_extblacklistadmin' => 'Klikni %shere%s za vrnitev v raz�iritev datoteke na crno listo',
	'Dl_forbidden_extention' => 'Ta raz�iritev datoteke trenutno ni dovoljena!<br />Prosimo pojdite nazaj in uporabite drugo vrsto datoteke.',
	'Dl_forbidden_ext_explain' => 'Prepovedane raz�irite datotek: %s',
	'Dl_ext_blacklist_explain' => 'Vstavi raz�iritev datoteke katere bodo prepovedana za nalaganje s pomocjo tega MOD-a.<br />Prepovedane raz�iritve datotek dodane v Icy Phoenix ACP bodo tudi uporabljene.<br />to ne vkljucuje trenutnih prenosov.',

/*
* new on Download MOD 5.0.12: Disable time edit informations
*/
	'Dl_disable_popup_notify' => 'Dovoli urejanje delovnega casa informacij o urejanju prenosa',

/*
* new on Download MOD 5.0.15: Banlist and report broken downloads
*/
	'Dl_acp_banlist' => 'Lista blokiranih uporabnikov',
	'Dl_user_id' => 'Uporabni�ki ID',
	'Dl_confirm_delete_ban_values' => 'Ali ste prepricani da �elite izbrisati te vnose iz liste blokiranih uporabnikov?',
	'Dl_banlist_updated' => 'Lista blokiranih uporabnikov uspe�no posodobljena',
	'Dl_banned' => 'Blokirani ste in prena�anje datotek vam je onemogoceno!',
	'Click_return_banlistadmin' => 'Klikni %shere%s za vrnitev na listo blokiranih uporabnikov',
	'Dl_broken' => 'Prijavi pokvarjen prenos',
	'Dl_broken_mod' => 'Resetiraj status pokvarjenega prenosa',
	'Dl_broken_cur' => 'Ta prenos je trenutno prijavljeno kot pokvarjen',
	'Dl_report_broken' => 'Dovoli prijavo pokvarjenih prenosov',
	'Dl_a_guest' => 'gost',
	'Dl_favorite_add' => 'Opozori me o spremembah o tem prenosu',
	'Dl_favorite_drop' => 'Odstrani opozorila o tem prenosu',
	'Dl_favorite' => 'Prenesi priljubljene',
	'Dl_acp_banlist_explain' => 'Vstavi razlicne vrednosti za prepoved dostopa do prenosov.<br />Vse vrednosti bodo uporabljene hkrati, tudi ce so vstavljene kot en nabor podatkov.',

/*
* new on Download MOD 5.1.0
*/
	'Dl_report_broken_lock' => 'Odstrani prenos, ki je prijavljen kot pokvarjen',
	'Dl_report_broken_message' => 'Prika�i opis o pokvarjenem prenosu samo ce je onemogocen',
	'Dl_report_broken_vc' => 'Omogoci slikovno potrditev za prijavo pokvarjenega prenosa',
	'Dl_visual_confirmation' => 'Omogoci slikovno potrditev za prenos datoteke',
	'Dl_off_guests' => 'Ni za goste',

/*
* new on Download MOD 5.1.1
*/
	'Dl_icon_free_for_reg' => 'Gostom prika�i belo ikono za prenos',

/*
* new on Download MOD 5.1.3
*/
	'Dl_latest_comments' => 'Prika�i zadnje X komentarje pri opisu prenosa',

/*
* new on Download MOD 5.2.0 - The Bug Tracker !!!!!!!!!!!! -------------  * :-(((((
*/
	'Dl_bug_tracker' => 'Sledilnik napak',
	'Dl_bug_tracker_file' => 'za ta prenos',
	'Dl_bug_tracker_cat' => 'Omogoci sledilnik napak',
	'Confirm_delete_bug_report' => 'Ali ste prepricani da �elite izbrisati to porocilo o napakah?',
	'Dl_bug_report_id' => 'ID prijave',
	'Dl_bug_report_title' => 'Naslov prijave',
	'Dl_bug_report_title_details' => 'Prijava',
	'Dl_bug_report_text' => 'Opis',
	'Dl_bug_report_date' => 'Prijavljeno na',
	'Dl_bug_report_php' => 'PHP',
	'Dl_bug_report_db' => 'DB',
	'Dl_bug_report_forum' => 'Forum',
	'Dl_bug_report_file' => 'Prenos',
	'Dl_bug_report_author' => 'Prijavljeno od',
	'Dl_bug_report_assigned' => 'Dodeljeno ',
	'Dl_bug_report_assign_date' => 'Namenjeno',
	'Dl_bug_report_status' => 'Status',
	'Dl_bug_report_status_date' => 'Zadnji status',
	'Dl_bug_report_detail' => 'Detajli',
	'Dl_bug_report_history' => 'Zgodovina',
	'Dl_bug_report_reassign' => 'prerazporeditev',
	'Dl_bug_report_assign' => 'razporeditev',
	'Dl_bug_report_unassigned' => 'nerazporejeno',
	'Dl_no_bug_tracker' => 'Najdenih ni bilo nobenih prijav',
	'Dl_bug_report_no_title' => 'Niste vnesli naslova za to prijavo napake!',
	'Dl_bug_report_no_text' => 'Niste vnesli opisa za to prijavo napake!',
	'Dl_bug_report_added' => 'Prijava napake uspe�no oddana',
	'Click_return_bug_tracker' => 'Klikni %shere%s za vrnite na sledilnik napak.',
	'Dl_bug_report_status_text' => 'Nekaj besedila za nov status (bo poslano preko elektronske po�te avtorju porocila o napaki)',
	'Dl_bug_report_status_update' => 'posodobi status',
	'Dl_filter_bt_own' => 'Poka�i moja porocila',
	'Dl_filter_bt_assign' => 'Poka�i moje razporeditve',

	'Dl_user_download_limit_flag' => 'Omeji �tevilo prenosov na mesec',
	'Dl_user_download_limit' => 'Najvecje �tevilo prenosov na mesec',
	)
);

$lang['Dl_report_status'][0] = 'neu';
$lang['Dl_report_status'][1] = 'gesehen';
$lang['Dl_report_status'][2] = 'in Arbeit';
$lang['Dl_report_status'][3] = 'zur�ckgestellt';
$lang['Dl_report_status'][4] = 'erledigt';
$lang['Dl_report_status'][5] = 'abgelehnt';
$lang['Dl_bug_report_email_status'] = 'Diese Nachricht wurde f�r den neuen Status hinterlassen:
--------------------
%s
--------------------';

?>