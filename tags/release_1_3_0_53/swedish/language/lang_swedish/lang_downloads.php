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

$lang = array_merge($lang, array(
/*
* mod version string
*/
	'Dl_mod_version' => 'Download MOD v%s&nbsp;&copy;(c) 2002 - 2007 by Hotschi, Demolition Fabi, OXPUS',

/*
* general messages after successfull data managements
*/
	'Click_return_categoryadmin' => 'Klicka %sh�r%s tf�r att �terg� till administrationen av kategorierna',
	'Click_return_dl_config' => 'Klicka %sh�r%s f�r att �terg� till nedladdnings konfigureringen',
	'Click_return_downloadadmin' => 'Klicka %sh�r%s f�r att �terg� till administrationen av nerladdningar',
	'Click_return_downloads' => 'Klicka %sh�r%s f�r att �terg� till Nerladdnings Kategorierna',
	'Click_return_download_details' => 'Klicka %sh�r%s f�r att �terg� till nedladdningen',
	'Click_return_file_management' => 'Klicka %sh�r%s f�r att �terg� till fil hanteringen',
	'Click_return_modcp_approve' => 'Klicka %sh�r%s f�r att �terg� till icke godk�nda nerladdningar',
	'Click_return_modcp_manage' => 'Klicka %sh�r%s f�r att �terg� till moderator panelen',
	'Click_return_user_traffic_admin' => 'Klicka %sh�r%s f�r att modifiera trafiken av en annan anv�ndare',
	'Click_return_usergroup_traffic_admin' => 'Klicka %sh�r%s f�r att modifiera trafik i en annan anv�ndargrupp',

/*
* message strings
*/
	'Dl_category_added' => 'Kategori tillagd',
	'Dl_category_updated' => 'Kategori uppdaterad',
	'Dl_category_removed' => 'Kategori borttagen framg�ngsrikt',
	'DL_upload_error' => 'Error medan du l�gger upp den h�r filen. G� tillbaka och f�rs�k igen.<br />Kontakta administrat�ren om detta fel fortfarande finns.',
	'Dl_approve_overview' => 'Det finns %s icke godk�nda nedladdningar. Klicka h�r f�r att godk�nna dem.',
	'Dl_approve_overview_one' => 'Det finns %s icke godk�nda nerladdningar. Klicka h�r f�r att godk�nna den.',
	'Dl_config_updated' => 'Nerladdnings konfigurationen sparats framg�ngsrikt',
	'Dl_confirm_cat_delete' => 'Vill du verkligen ta bort kategorin <b>%s</b>?',
	'Dl_confirm_delete_multiple_files' => 'Vill du verkligen ta bort dessa <b>%d nerladdningar</b>?',
	'Dl_confirm_delete_single_file' => 'Vill du verkligen ta bort denna nerladdning <b>%s</b>?',
	'Dl_delete_cat_and_files' => 'Radera den h�r kategorin och alla filer i den',
	'Dl_delete_cat_confirm' => 'V�lj en kategori som varje nerladdning kommer att flyttas till eller anv�nd en annan �tg�rd',
	'Dl_delete_cat_only' => 'Radera endast den h�r kategorin',
	'Dl_delete_file_confirm' => 'Radera �ven denna fil(er)',
	'Dl_empty_category' => 'Denna kategori inneh�ller inga nerladdningar',
	'Dl_no_access' => '�tkomst nekad!<br /><br />Du har inga r�ttigheter att ladda ner denna fil!',
	'Dl_no_category' => 'Det finns inga kategorier. L�gg till en ny kategori innan du st�ller in alla beh�righeter.',
	'Dl_no_category_index' => 'Denna nerladdnings sektion har inga kategorier',
	'Dl_no_external_url' => 'Du m�ste ange en giltig webbadress om du vill l�mna in en extern nerladdning!',
	'Dl_no_filename_entered' => 'Du m�ste v�lja en fil om du vill ladda upp den!',
	'Dl_no_groups_for_traffic' => 'Ingen anv�ndargrupp hittades!!!<br /><br />L�gg till en anv�ndargrupp innan du st�ller in nerladdnings traffic information f�r det',
	'Dl_no_more_remain_traffic' => 'Traffic planen f�r nerladdningar i %s �r helt anv�nd f�r denna m�nad. V�nta tills n�sta m�nad eller be en administrat�r.',
	'Dl_no_permission' => '�tkomst nekad!<br /><br />Du har inga r�ttigheter att g�ra detta!',
	'Dl_no_upload_traffic' => 'Ledsen, men det finns ingen uppladdnings trafik kvar. Kontakta administrat�ren om du vill ladda upp denna fil',
	'Dl_path_not_exist' => 'Kategorins s�kv�g <b>%s</b> finns inte!<br />G� tillbaka och ange ett annat s�kv�gsnamn<br />eller skapa denna mapp med filhanteringen.',
	'Dl_permission_updated' => 'Nerladdnings beh�righeter sparats framg�ngsrikt',
	'Dl_user_config_saved' => 'Anv�ndarkonfiguration f�r nerladdningar uppdaterats framg�ngsrikt<br /><br />Klicka %sh�r%s f�r att �terg� till nerladdningarna',
	'Download_added' => 'Nerladdning lades till',
	'Download_removed' => 'Nerladdning var raderad',
	'Download_updated' => 'Informationen har blivit uppdaterad',
	'New_download' => 'En ny h�mtning var upplagd eller uppdaterad.<br />Klicka %sh�r%s f�r att g� direkt till nerladdningar.',
	'Dl_confirm_cat_stats_delete' => '�r du s�ker p� att du vill ta bort de statistiska uppgifterna fr�n kategorin <b>%s</b>?',
	'Dl_confirm_all_stats_delete' => '�r du s�ker p� att du vill ta bort all statistik?',
	'Dl_confirm_cat_comments_delete' => '�r du s�ker p� att du vill ta bort kommentarer fr�n kategorin <b>%s</b>?',
	'Dl_confirm_all_comments_delete' => '�r du s�ker p� att du vill ta bort alla kommentarer?',
	'Dl_file_not_found' => '<b>Filen %s kunde inte hittas!</b><br /><br />Se till att filen finns i mappen %s!',
	'Dl_no_change_edit_time' => 'Logga inte den h�r uppdateringen',
	'Dl_thumb_upload' => 'Miniatyrbild uppladdad successfullt',
	'Dl_thumb_del' => 'Miniatyrbild raderad successfullt',
	'Dl_thumb_to_big' => 'Miniatyrbilden �r f�r stor!<br />Anv�nd en mindre fil eller en bild med mindre m�tt.<br />Anv�nd bak�tknappen i din webbl�sare f�r att f�rs�ka ladda upp den igen.',
	'Dl_hotlink_permission' => 'Du har inte till�telse att ladda ner denna fil direkt med en l�nk !',
	'Dl_vc_permission' => 'Bekr�ftelsekoden f�r denna h�mtning var fel. G� tillbaka och f�rs�k igen.',
	'Dl_report_broken_vc_mismatch' => 'Bekr�ftelsekoden f�r denna rapport var fel. G� tillbaka och f�rs�k igen.',
	'Dl_vc_not_found' => 'Bekr�ftelsekoden kunde inte hittas. G� tillbaka och f�rs�k igen.',

/*
* page descriptions
*/
	'Dl_page_dl_hackslist' => 'Hackslista',
	'Dl_page_downloads' => 'Nerladdningar',

/*
* commands
*/
	'Add_new_download' => 'L�gg till en ny nedladdning',
	'Dl_add' => 'L�gg till',
	'Dl_add_category' => 'L�gg till kategori',
	'Dl_approve' => 'Godk�nn',
	'Dl_check_file_sizes' => 'Kontrollera filstorleken',
	'Dl_check_thumbnails' => 'Kontrollera miniatyrbilder',
	'Dl_delete' => 'Radera',
	'Dl_down' => 'Ner',
	'Dl_edit' => 'Redigera',
	'Dl_go' => 'G�',
	'Dl_klick_to_rate' => 'Betygs�tt',
	'Dl_lock' => 'L�s',
	'Dl_mark_all' => 'Markera alla',
	'Dl_move' => 'Flytta till',
	'Dl_set' => 'Ange',
	'Dl_unmark' => 'Avmarkera alla',
	'Dl_up' => 'Upp',
	'Dl_delete_cat' => 'Radera Kategori',
	'Dl_stats_delete' => 'Radera Statistik',
	'Dl_stats_delete_all' => 'Radera all Statistik',
	'Dl_comments_delete' => 'Radera Kommentarer',
	'Dl_comments_delete_all' => 'Radera alla Kommentarer',
	'Dl_sub_sort_asc' => 'Sortera alla poster i denna kategori stigande',
	'Dl_sub_sort_asc_zero' => 'Sortera huvudposterna stigande',

/*
* categories related
*/
	'Dl_cat_description' => 'Beskrivning',
	'Dl_cat_files' => 'Filer',
	'Dl_cat_index' => 'H�gsta Niv�',
	'Dl_cat_name' => 'Kategori',
	'Dl_cat_parent' => 'F�r�lder kategori',
	'Dl_cat_path' => 'S�kv�g',
	'Dl_cat_title' => 'Nerladdnings - Kategorier',
	'Dl_choose_category' => 'V�lj en kategori',
	'Dl_mod_desc_allow' => 'Till�t detalj beskrivning',
	'Dl_must_approve' => 'Uppladdning till denna kategori m�ste godk�nnas',
	'Dl_statistics' => 'Aktivera detaljerad statistik',
	'Dl_stats_prune' => 'Reducera statistisk data',
	'Dl_stats_delete' => 'Radera statistik',
	'Dl_stats_delete_all' => 'Radera all statistik',
	'Dl_comments_delete' => 'Radera kommentarer',
	'Dl_comments_delete_all' => 'Radera alla kommentarer',
	'Dl_cat_traffic' => 'Traffic citering (f�rn�rvarande tillg�nglig: %s)',
	'Dl_cat_traffic_off' => 'Traffic citering (f�rn�rvarande av)',
	'Dl_cat_traffic_main' => '%s traffic finns kvar i denna kategori',
	'Dl_thumb_cat' => 'Till�t miniatyrbilder',
	'Dl_approve_comments' => 'Automatiskt godk�nna varje ny kommentar',
	'Dl_cat_rules' => 'Regler',

/*
* traffic related
*/
	'Dl_auto_traffic' => 'Automatiskt nerladda traffic',
	'Dl_enable_post_traffic' => 'M�jligg�r traffic till�gg f�r inl�gg',
	'Dl_group_auto_traffic' => 'Traffic f�r anv�ndargrupper',
	'Dl_newtopic_traffic' => 'Ladda ner traffic f�r varje nytt skapat �mne',
	'Dl_overall_traffic' => 'Traffic f�r alla filer per m�nad',
	'Dl_remain_overall_traffic' => '�terst�ende �vergripande Traffic f�r denna m�nad: ',
	'Dl_reply_traffic' => 'Ladda ner traffic f�r varje post, svar eller citat',
	'Dl_traffic' => 'Max. traffic',
	'Dl_user_auto_traffic' => 'Traffic f�r anv�ndare',
	'Single_user_traffic_title' => 'Traffic f�r en enskild anv�ndare',
	'Traffic' => 'Traffic',
	'Traffic_now' => 'N�rvarande p� konto',
	'Usergroup_traffic_title' => 'Traffic f�r medlemmar i en anv�ndargrupp',
	'Users_traffic_title' => 'Traffic f�r alla anv�ndare',
	'Dl_user_traffic_once' => 'Minska anv�ndare traffic endast en g�ng per nedladdning',
	'Dl_can_download_traffic' => 'Du har redan laddat ner den h�r filen.<br />Administrat�ren till�ter dig att ladda ner igen utan att betala traffic f�r den.',
	'Dl_can_download_traffic_footer' => '<b>Administrat�ren till�ter dig att ladda redan nedladdade filer igen utan att betala traffic f�r dem.</b><br /><br />',
	'Traffic_all_users_admin_explain' => 'L�gg till eller st�ll in traffic f�r alla anv�ndare.',
	'Traffic_single_user_admin_explain' => 'L�gg till eller st�ll in traffic f�r en enda anv�ndare.',
	'Traffic_usergroup_admin_explain' => 'L�gg till eller st�ll in traffic f�r alla medlemmar i en anv�ndargrupp.',
	'Dl_auto_traffic_explain' => 'St�ll in traffic f�r alla anv�ndare eller alla medlemmar i en anv�ndargrupp vad de f�r ladda ner varje m�nad.',

/*
* auth values
*/
	'Dl_permissions_all' => 'Ange beh�righeter f�r alla anv�ndare',
	'Dl_auth_dl' => 'Nerladdning',
	'Dl_auth_mod' => 'Moderera',
	'Dl_auth_up' => 'Uppladdning',
	'Dl_auth_view' => 'Visa',
	'Dl_permissions' => 'Beh�righeter f�r medlemmar i f�ljande anv�ndargrupper',
	'Dl_stop_uploads' => 'Avaktivera uppladdningar',
	'Dl_stat_perm' => 'Beh�righeter till statistisk sida fr�n anv�ndarniv�',
	'Dl_stat_perm_all' => 'Alla',
	'Dl_stat_perm_user' => 'Registrerade anv�ndare',
	'Dl_stat_perm_mod' => 'H�mta moderatorer',
	'Dl_stat_perm_admin' => 'Forum administrat�rer',
	'Dl_auth_cread' => 'L�s kommentarer',
	'Dl_auth_cpost' => 'Skriv kommentarer',
	'Dl_perm_all' => 'Alla',
	'Dl_perm_reg' => 'Registrerade Anv�ndare',
	'Dl_perm_grg' => 'Anv�ndargrupper',

/*
* hacks and mods related
*/
	'Dl_hack_autor' => 'F�rfattare',
	'Dl_hack_autor_email' => 'F�rfattares e-post',
	'Dl_hack_autor_website' => 'F�rfattares webbsida',
	'Dl_hack_dl_url' => 'Alternativa Nerladdning',
	'Dl_hack_version' => 'Hack Version',
	'Dl_hacklist' => 'Listas i Hacklista',
	'Dl_hacks_list' => 'Hacklista',
	'Dl_mod_desc' => 'Hur mod arbetar',
	'Dl_mod_list' => 'Visa extra information',
	'Dl_mod_require' => 'Kr�ver',
	'Dl_mod_test' => 'Mod testats p�/med',
	'Dl_mod_todo' => 'Att g�ra',
	'Dl_mod_warning' => 'Varningar',

/*
* moderator panel
*/
	'Dl_modcp_approve' => 'Moderator Panel - Godk�nna Nerladdningar',
	'Dl_modcp_edit' => 'Moderator Panel - Godk�nna Nerladdningar',
	'Dl_modcp_manage' => 'Moderator Panel - Hantera Nerladdningar',
	'Dl_modcp_mod_auth' => 'Du <b>kan</b> %smoderera denna kategori%s',

/*
* ACP file management
*/
	'Dl_check_filesizes_result' => 'Alla filer �r uppdaterade och inga fel hittades',
	'Dl_check_filesizes_result_error' => 'F�ljande filer kan inte kontrolleras:',
	'Dl_manage' => 'Fil verktygsl�da',
	'Dl_manage_content_count' => '%s Noteringar',
	'Dl_manage_create_dir' => 'Skapa denna mappen',
	'Dl_manage_empty_folder' => 'Den h�r mappen �r tom...',
	'Dl_manage_explain' => 'Hantera filerna f�r nedladdning. Du kan anv�nda f�ljande funktioner:<br /><br />- Ta bort eller flytta otilldelade filer<br />- Delta i tilldelade filer utan befintlig kategori till en befintlig en<br />- Bl�ddra bland filer (<i>Standard efter �ppnings hanteringen</i>)<br />- Skapa en ny mapp<br />- Ta bort tomma mappar<br />- Kontrollera filstorleken f�r varje inte extern nedladdning<br /><br /><b>Uppm�rksamhet:</b><br />Detta verktyg kommer inte att ers�tta en FTP-klient!<br />Funktioner som uppladdningar, flytta varje fil och ers�tta filer �r inte m�jligt med det h�r verktyget!',
	'Dl_physical_quota' => 'Fysisk kvot �ver alla filer',
	'Dl_unassigned_files' => 'Kontrollera efter otilldelade nerladdningar',

/*
* statistics
*/
	'Dl_latest_downloads' => 'Senaste Nerladdningar',
	'Dl_latest_uploads' => 'Senaste Uppladdningar',
	'Dl_downloads_cur_month' => 'Nerladdningar Aktuell M�nad',
	'Dl_downloads_overall' => 'Nerladdningar �vergripande',
	'Dl_downloads_count' => 'Nerladdningar',
	'Dl_downloads_traffic' => '�vergripande Nerladdning',
	'Dl_uploads_count' => 'Uppladdningar',
	'Dl_uploads_traffic' => '�vergripande Uppladdnings Traffic',
	'Dl_pos' => 'Pos.',
	'Dl_time' => 'Tid',
	'Dl_stats' => 'Nerladdnings statistik',
	'Dl_direction' => '�tg�rd',
	'Dl_browser' => 'Webbl�sare',
	'Dl_ip' => 'IP Adress',
	'Dl_traffic_cur_month' => 'Traffic denna m�nad',
	'Dl_traffic_overall' => 'Traffic totalt',
	'Dl_guest_stat_delete' => 'Radera all data f�r g�ster',
	'Dl_no_filter' => '- inget filter -',
	'Dl_total_entries' => 'Funna Noteringar',
	'Dl_filter' => 'Filtrera',
	'Dl_filter_string' => 'Anv�nd * eller % som platsh�llare',
	'Dl_guest_stats_admin' => 'Visa g�sters data, ocks�',
	'Dl_stat_edit' => 'redigerad',

/*
* comments
*/
	'Dl_comment' => 'Kommentar',
	'Dl_comments' => 'Kommentarer',
	'Dl_last_comment' => 'Senaste kommentar',
	'Dl_post_comment' => 'Skriv',
	'Dl_view_comments' => 'Visa',
	'Dl_comment_edited' => 'Kommentaren var senast redigerad den %s',
	'Dl_comment_write' => 'Skriv en kommentar',
	'Dl_comment_show' => 'Visa alla kommentarer f�r denna nerladdning',
	'Dl_comment_delete' => 'Radera',
	'Dl_comment_edit' => 'Redigera',
	'Dl_comment_added' => 'Kommentar successfullt tillagd',
	'Dl_comment_updated' => 'Kommentar successfullt uppdaterad',
	'Dl_must_be_approve_comment' => 'Denna kommentar m�ste godk�nnas av en moderator eller administrat�r!',
	'Dl_approve_overview_one_comment' => 'Det finns en ej godk�nd kommentar. Klicka p� texten f�r att kontrollera den.',
	'Dl_approve_overview_comments' => 'Det finns %s ej godk�nda kommentarer. Klicka p� texten f�r att kontrollera dem.',

/*
* ACP management main page
*/
	'Dl_acp_traffic_management' => 'Hantera traffic kvoter och auto f�rinst�llningar',
	'Dl_acp_categories_management' => 'Hantera kategorier och deras beh�righeter',
	'Dl_acp_config_management' => 'Ange allm�nna inst�llningar',
	'Dl_acp_files_management' => 'Hantera nerladdningar',
	'Dl_acp_stats_management' => 'Visa och kontrollera statistik',
	'Dl_acp_managemant_page' => 'Ladda Ner MOD administration',
	'Dl_acp_managemant_page_explain' => 'Administrations inst�llningar och funktioner f�r Nerladdning MOD.<br />V�lj en av funktionerna nedan f�r att �ndra inst�llningarna.',

/*
* global strings
*/
	'Dl_account' => 'Du har kvar <b>%s</b> traffic denna m�nad.',
	'Dl_add_user' => 'Den h�r h�mtningsbara filen lades till <b>%s</b> av <b>%s</b>',
	'Dl_all' => 'Alla',
	'Dl_Bytes' => 'B',
	'Dl_Bytes_long' => 'Bytes',
	'Dl_change_user' => ' och senast redigerad den <b>%s</b> av <b>%s</b>',
	'Dl_config' => 'Ladda ner konfiguration',
	'Dl_days' => 'Dagar',
	'Dl_default_sort' => 'Standard sortering',
	'Dl_delay_auto_traffic' => 'F�rsena auto traffic f�r ny Anv�ndare',
	'Dl_delay_post_traffic' => 'F�rsena traffic f�r inl�gg f�r ny Anv�ndare',
	'Dl_direct_download' => 'direkt',
	'Dl_detail' => 'Detaljer',
	'Dl_disable_email' => 'Inaktivera underr�ttande per e-post',
	'Dl_disable_popup' => 'Inaktivera underr�ttande per popup/Forum meddelande',
	'Dl_disable_email_files' => 'Inaktivera underr�ttande per e-post',
	'Dl_disable_popup_files' => 'Inaktivera underr�ttande per popup/Forum meddelande',
	'Dl_download' => 'Nerladdning',
	'DL_edit' => 'Uppdaterad nerladdning',
	'DL_edit_time' => 'Antal dagar en redigerad nedladdningen kommer att m�rkas',
	'Dl_extern' => 'Yttre',
	'Dl_extern_up' => 'Yttre',
	'Dl_file_description' => 'Beskrivning',
	'Dl_file_name' => 'Fil',
	'Dl_file_size' => 'Storlek',
	'Dl_files_title' => 'Filer',
	'Dl_files_url' => 'URL',
	'Dl_free' => 'Fria nerladdningar',
	'Dl_function' => 'Funktion',
	'Dl_GB' => 'GB',
	'Dl_group_name' => 'Grupp Namn',
	'Dl_guest_stats_show' => 'Visa g�ster i den detaljerade kategorins statistik',
	'Dl_hotlink_action' => 'L�nk �tg�rd f�r direkt nedladdning l�nkar',
	'Dl_hotlink_action_one' => 'omdirigeras till detaljer',
	'Dl_hotlink_action_two' => 'visa meddelandet',
	'Dl_info' => 'Info',
	'Dl_is_free' => 'Fria Nerladdningar',
	'Dl_is_free_reg' => 'Gratis f�r registrerade anv�ndare',
	'Dl_KB' => 'KB',
	'Dl_klicks' => 'Klick M�nad',
	'Dl_last_time' => ' Senaste nerladdningen den <b>%s</b>',
	'Dl_last_time_extern' => ' Senaste nerladdningen fr�n extern webbadress den <b>%s</b>',
	'Dl_limit_desc_on_index' => 'Begr�nsa Ladda ner beskrivningar p� Index',
	'Dl_Links_per_page' => 'Nerladdningar per sida',
	'Dl_MB' => 'MB',
	'Dl_method' => 'Nerladdnings metod',
	'Dl_method_new' => 'Ny',
	'Dl_method_old' => 'Gammal',
	'Dl_method_quota' => 'Kvot f�r chunked fils l�s metod',
	'Dl_modcp_capprove' => 'Godk�nn kommentarer',
	'Dl_must_be_approved' => 'Den h�r nerladdningen m�ste godk�nnas av en administrat�r eller moderator f�r denna kategori.',
	'Dl_name' => 'Namn',
	'DL_new' => 'Ny nerladdning',
	'DL_new_time' => 'Antal dagar en ny nedladdning kommer att vara m�rkt',
	'Dl_no' => 'Nej',
	'Dl_no_config' => 'Anv�ndar konfiguration l�st',
	'Dl_no_last_time' => ' Inga nerladdningar r�knas fram till nu...',
	'Dl_no_mod_todo' => 'Inget Mod AttG�ra just nu',
	'Dl_not_availible' => 'Inte tillg�nglig',
	'Dl_order' => 'Sortera',
	'Dl_overall_klicks' => 'Totala Klickningar',
	'Dl_klicks_total' => 'Klickningar M�nad / Totalt',
	'Dl_overview' => '�versiktlista �ver alla nerladdningar',
	'DL_posts' => 'Antal Inl�gg en anv�ndare beh�ver f�r att f� nerladdnings tillg�ng',
	'Dl_prevent_hotlink' => 'F�rhindra l�nkar f�r direkta nerladdningar',
	'Dl_rating' => 'Betyg',
	'Dl_real_filetime' => 'Senaste fil modifiering',
	'Dl_search_author' => 'F�r anv�ndare som har laddat upp eller �ndrat nerladdningar',
	'Dl_show_footer_legend' => 'Visa legenden p� nerladdnings sidfoten',
	'Dl_show_footer_stat' => 'Visa statistik p� nerladdnings sidfoten',
	'Dl_show_real_filetime' => 'Visa tiden f�r den sista fil modifikationen p� nerladdnings detaljerna',
	'Dl_sort_preform' => 'Preform sortering',
	'Dl_sort_acp' => 'F�rinst�lld',
	'Dl_sort_user' => 'Anv�ndare',
	'Dl_sort_user_opt' => 'Sortera nerladdningar f�r',
	'Dl_sort_user_ext' => 'med andra kriterier',
	'Dl_thumb' => 'Miniatyrbild',
	'Dl_thumb_dim_size' => 'Miniatyrbild kan ha en maximal dimension av %s x %s pixlar och filstorleken m�ste vara mindre �n %s.',
	'Dl_thumb_max_dim' => 'Maximal dimension i pixlar X * Y',
	'Dl_thumb_max_size' => 'Maximal miniatyrbilds filstorlek',
	'Dl_total_stat' => 'Det finns allm�nt %s nerladdningar med en storlek av %s / %s inklusive %s externa Nedladdningar.',
	'Dl_unapproved' => '<br /><span class="gensmall">[ icke godk�nda ]</span>',
	'Dl_upload' => 'Ladda upp en fil',
	'Dl_upload_file' => 'Ladda upp',
	'Dl_upload_max_filesize' => 'Maximal filstorlek som �r till�ten f�r uppladdning: %s',
	'Dl_upload_traffic' => 'Filstorleken f�r upplaggda kommer att minska den totala trafficen. Betraktar detta genom att v�lja filstorleken!',
	'Dl_upload_traffic_count' => 'Ocks� minska den totala trafficen f�r upplaggda',
	'Dl_use_hacklist' => 'Aktivera hacklista',
	'Dl_users_without_group' => 'Anv�ndare utan medlemskap i en anv�ndargrupp',
	'Dl_white_explain' => 'Gratis nedladdning utan traffic r�knas f�r registrerade anv�ndare',
	'Dl_yes' => 'Ja',
	'Dl_yes_reg' => 'Ja f�r<br />reg. Anv�ndare',
	'Download_path' => 'S�kv�gen till nerladdningar, t.ex. <b>nerladdningar/</b>',
	'Downloads' => 'Nerladdningar',
	'Must_select_download' => 'V�lj en  nerladdning.',
	'Number_recent_dl_on_portal' => 'Antal nyligen nerladdningar som visas p� portalen',
	'Recent_downloads' => 'Senaste nerladdningar',
	'User_allow_fav_download_email' => 'Aktivera e-post till f�r�ndringar p� favorit nerladdningar',
	'User_allow_fav_download_popup' => 'Aktivera forum meddelande till f�r�ndringar p� favorit nerladdningar',
	'User_allow_new_download_email' => 'Aktivera e-post f�r nya nerladdningar',
	'User_allow_new_download_popup' => 'Aktivera forum meddelande f�r nya nerladdningar',
	'User_download_email' => 'E-post<br />meddelande',
	'User_download_popup' => 'Forum<br />Meddelande',
	'User_download_notify_type' => 'Typ av forum meddelande',
	'User_download_notify_type_popup' => 'Popup',
	'User_download_notify_type_message' => 'Meddelande p� forumets sidhuvud',
	'Dl_edit_own_downloads' => 'Anv�ndare kan redigera egna filer',
	'Dl_report_confirm_code' => 'V�nligen ange bekr�ftelsekoden h�r f�r att rapportera denna nedladdning som bruten:',
	'Dl_shorten_extern_links' => 'F�rkortade visade externa nedladdnings l�nkar',
	'Dl_physical_quota_explain' => 'Om denna kvot (f�r n�rvarande %s anv�nds) �r n�dd, kommer inte fler uppladdningar att till�tas',
	'Dl_blue_explain' => 'Ingen mer �vergripande traffic kvar denna m�nad!',
	'Dl_blue_explain_file' => 'Ingen mer fil traffic kvar denna m�nad!',
	'Dl_blue_explain_foot' => 'Ingen mer total traffic eller fil/kategori traffic kvar denna m�nad!',
	'Dl_green_explain' => 'Ladda Ner! Inga avdrag fr�n anv�ndarkonto.',
	'Dl_grey_explain' => 'Ladda Ner! Extern k�lla. Inga avdrag fr�n anv�ndarkonto.',
	'Dl_red_explain' => 'Inte nog traffic eller poster<br />(%s poster kr�vs). Spamma inte! Spammare kommer automatiskt att blockeras!',
	'Dl_red_explain_alt' => 'Inte nog traffic eller poster (%s poster kr�vs). Spamma inte! Spammare kommer automatiskt att blockeras!',
	'Dl_red_explain_perm' => 'Inga r�ttigheter att ladda ner!',
	'Dl_yellow_explain' => 'Ladda Ner! Traffic kommer att dras av fr�n anv�ndarkonto.',
	'Dl_config_explain' => 'Aktivera och avaktivera olika funktioner och/eller inst�llningar.',
	'Dl_cat_edit_explain' => 'Hantera kategorierna f�r Nerladdnings MOD.',

/*
* build in add on cash to traffic
*/
	'Dl_cash_to_traffic' => 'V�xla kontanter till traffic',
	'Dl_cash_to_traffic_explain' => 'St�ll in mellan kontant valuta och Ladda Ner traffic. Utbytet kommer att f�r�ndras till fulla v�rdet av den valuta till hela beloppet p� traffic.',
	'Dl_cash_currency' => 'Kontant valuta',
	'Dl_cash_exchange' => 'V�xla: 1 %s till %s traffic',
	'Dl_cash_current_amount' => 'Du har %s %s',

/*
* new on Download MOD 5.0.10: Blacklist for filetypes
*/
	'Dl_ext_blacklist' => 'Svartlistade filtyper',
	'Dl_use_ext_blacklist' => 'Aktivera svartlista f�r filtyper',
	'Dl_extention' => 'Nya f�rbjudna fil till�gg',
	'Dl_extentions' => 'F�rbjudna fil till�gg',
	'Dl_add_extention' => 'L�gg Till Fil till�gg',
	'Dl_confirm_delete_extention' => '�r du s�ker p� att sl�ppa till�gget <b>%s</b>?',
	'Dl_confirm_delete_extentions' => '�r du s�ker p� att sl�ppa till�gget <b>%s</b>?',
	'Dl_delete_extention_confirm' => 'Sl�pp fil till�gget fr�n svartlistan',
	'Dl_delete_extentions_confirm' => 'Sl�pp fil till�gget fr�n svartlistan',
	'Extention_removed' => 'Fil till�gget successfullt sl�ppt fr�n svartlistan.',
	'Extentions_removed' => 'Fil till�gget successfullt sl�ppt fr�n svartlistan.',
	'Click_return_extblacklistadmin' => 'Klicka %sh�r%s f�r att �terg� till Fil till�ggets svartlista',
	'Dl_forbidden_extention' => 'Detta fil till�gget �r f�r n�rvarande inte till�ten!<br />V�nligen g� tillbaka och anv�nd en annan filtyp.',
	'Dl_forbidden_ext_explain' => 'F�rbjudet fil till�gg: %s',
	'Dl_ext_blacklist_explain' => 'Ange fil till�gget som ska bannlysas f�r uppladdning med detta MOD.<br />De bannlysta till�ggen som �r tillagda iIcy Phoenix ACP kommer ocks� att anv�ndas.<br />Dessa inkluderar inte existerande nerladdningar.',

/*
* new on Download MOD 5.0.12: Disable time edit informations
*/
	'Dl_disable_popup_notify' => 'Till�t att inaktivera tid redigerings information om att redigera en nedladdning',

/*
* new on Download MOD 5.0.15: Banlist and report broken downloads
*/
	'Dl_acp_banlist' => 'Bannlista',
	'Dl_user_id' => 'Anv�ndar ID',
	'Dl_confirm_delete_ban_values' => '�r du s�ker p� att du vill ta bort dessa bannlist poster?',
	'Dl_banlist_updated' => 'Bannlista successfullt uppdaterad',
	'Dl_banned' => 'Du �r bannlyst och kan inte ladda ner n�gon fil!',
	'Click_return_banlistadmin' => 'Klicka %sh�r%s f�r att �terg� till bannlistan',
	'Dl_broken' => 'Rapportera en bruten nerladdning',
	'Dl_broken_mod' => '�terst�ll brutet nerladdnings status',
	'Dl_broken_cur' => 'Den h�r nedladdningen �r f�r n�rvarande redovisad som bruten',
	'Dl_report_broken' => 'Till�t rapportering av brutna nerladdningar',
	'Dl_a_guest' => 'en g�st',
	'Dl_favorite_add' => 'Meddela mig om f�r�ndringar i denna nerladdning',
	'Dl_favorite_drop' => 'Ta bort meddelanden om den h�r nerladdningen',
	'Dl_favorite' => 'Ladda Ner Favoriter',
	'Dl_acp_banlist_explain' => 'H�rifr�n kan du skriva in olika v�rden f�r att f�rbjuda tilltr�de till nerladdningar.<br />Varje v�rde kommer att anv�ndas samtidigt, antingen om de �r angivna som en dataupps�ttning.',

/*
* new on Download MOD 5.1.0
*/
	'Dl_report_broken_lock' => 'Avaktivera nerladdningen n�r den rapporteras som bruten',
	'Dl_report_broken_message' => 'Visa meddelande om bruten nerladdning bara om den �r inaktiverat, ocks�',
	'Dl_report_broken_vc' => 'Aktivera visuell bekr�ftelse f�r att rapportera en bruten nerladdning',
	'Dl_visual_confirmation' => 'Aktivera visuell bekr�ftelse f�r att ladda ner en fil',
	'Dl_off_guests' => 'Inte f�r g�ster',

/*
* new on Download MOD 5.1.1
*/
	'Dl_icon_free_for_reg' => 'Visa den vita nerladdnings ikonen f�r g�ster',

/*
* new on Download MOD 5.1.3
*/
	'Dl_latest_comments' => 'Visar de senaste X kommentaren p� nerladdnings detaljer',

/*
* new on Download MOD 5.2.0 - The Bug Tracker !!!!!!!!!!!! -------------  * :-(((((
*/
	'Dl_bug_tracker' => 'Bug Tracker',
	'Dl_bug_tracker_file' => 'f�r denna nerladdning',
	'Dl_bug_tracker_cat' => 'Aktivera Bug Tracker',

	'Confirm_delete_bug_report' => '�r du s�ker p� att du vill ta bort den h�r felrapporten?',
	'Dl_bug_report_id' => 'Rapport ID',
	'Dl_bug_report_title' => 'Rapport Titel',
	'Dl_bug_report_title_details' => 'Rapport',
	'Dl_bug_report_text' => 'Beskrivning',
	'Dl_bug_report_date' => 'Rapporterad den',
	'Dl_bug_report_php' => 'PHP',
	'Dl_bug_report_db' => 'DB',
	'Dl_bug_report_forum' => 'Forum',
	'Dl_bug_report_file' => 'Nerladdning',
	'Dl_bug_report_author' => 'Rapporterad av',
	'Dl_bug_report_assigned' => 'Tilldelad till',
	'Dl_bug_report_assign_date' => 'Tilldelad den',
	'Dl_bug_report_status' => 'Status',
	'Dl_bug_report_status_date' => 'Senaste tid av status',
	'Dl_bug_report_detail' => 'Detaljer',
	'Dl_bug_report_history' => 'Historia',
	'Dl_bug_report_reassign' => 'flytta',
	'Dl_bug_report_assign' => 'tilldela',
	'Dl_bug_report_unassigned' => 'otilldelad',
	'Dl_no_bug_tracker' => 'Inga rapporter funna',
	'Dl_bug_report_no_title' => 'Du har inte angett n�gon rubrik f�r denna felrapport!',
	'Dl_bug_report_no_text' => 'Du har inte angett n�gon beskrivning f�r denna felrapport!',
	'Dl_bug_report_added' => 'Felrapporten framg�ngsrikt tilllagd',
	'Click_return_bug_tracker' => 'Klicka %sh�r%s f�r att �terg� till bug tracker.',
	'Dl_bug_report_status_text' => 'N�gon text f�r den nya statusen (kommer att skickas per e-post till f�rfattaren av denna felrapport)',
	'Dl_bug_report_status_update' => 'uppdatera status',
	'Dl_filter_bt_own' => 'Visa mina rapporter',
	'Dl_filter_bt_assign' => 'Visa mina tilldelningar',

	'Dl_user_download_limit_flag' => 'Begr�nsa antalet nedladdningar per m�nad',
	'Dl_user_download_limit' => 'Max antal nedladdningar per m�nad',
	)
);

$lang['Dl_report_status'][0] = 'ny';
$lang['Dl_report_status'][1] = 'visad';
$lang['Dl_report_status'][2] = 'p�g�r';
$lang['Dl_report_status'][3] = 'oavslutad';
$lang['Dl_report_status'][4] = 'slutf�rd';
$lang['Dl_report_status'][5] = 'droppad';
$lang['Dl_bug_report_email_status'] = 'Detta meddelande �r f�r ny status:
--------------------
%s
--------------------';

?>