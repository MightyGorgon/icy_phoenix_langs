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
	'Click_return_categoryadmin' => 'Klicka %sHär%s för att återgå till administrationen av kategorierna',
	'Click_return_dl_config' => 'Klicka %sHär%s för att återgå till nedladdnings konfiguration',
	'Click_return_downloadadmin' => 'Klicka %sHär%s för att återgå till administrationen av nedladdningar',
	'Click_return_downloads' => 'Klicka %sHär%s för att återgå till nedladdnings kategorierna',
	'Click_return_download_details' => 'Klicka %sHär%s för att återgå till nedladdning',
	'Click_return_file_management' => 'Klicka %sHär%s för att återgå till fil hanteringen',
	'Click_return_modcp_approve' => 'Klicka %sHär%s för att återgå till ej godkända nedladdningar',
	'Click_return_modcp_manage' => 'Klicka %sHär%s för att återgå till moderator panelen',
	'Click_return_user_traffic_admin' => 'Klicka %sHär%s för att modifiera trafik av en annan användare',
	'Click_return_usergroup_traffic_admin' => 'Klicka %sHär%s för att modifiera trafik av en annan användargrupp',

/*
* message strings
*/
	'Dl_category_added' => 'Kategori tillagd',
	'Dl_category_updated' => 'Kategori uppdaterad',
	'Dl_category_removed' => 'Kategori flyttad successfullt',
	'DL_upload_error' => 'Error vid uppladdning av denna fil. Gå tillbaka och försök igen.<br />Kontakta admin, om felet kvarstår.',
	'Dl_approve_overview' => 'Det finns %s ej godkända nedladdningar. Klicka här för att godkänna dem.',
	'Dl_approve_overview_one' => 'Det finns %s ej godkända nedladdningar. Klicka här för att godkänna dem.',
	'Dl_config_updated' => 'Nedladdnings konfiguration sparats successfullt',
	'Dl_confirm_cat_delete' => 'Vill du verkligen ta bort denna kategori <b>%s</b>?',
	'Dl_confirm_delete_multiple_files' => 'Vill du verkligen ta bort dessa <b>%d nedladdningar</b>?',
	'Dl_confirm_delete_single_file' => 'Vill du verkligen ta bort nedladdningen <b>%s</b>?',
	'Dl_delete_cat_and_files' => 'Ta bort den här kategorin och alla filer i den',
	'Dl_delete_cat_confirm' => 'Välj en kategori som varje nedladdning kommer att flyttas till, eller använd ett annat alternativ',
	'Dl_delete_cat_only' => 'Radera bara denna kategori',
	'Dl_delete_file_confirm' => 'Radera även filen (er)',
	'Dl_empty_category' => 'Denna kategori innehåller inte någon nedladdningar',
	'Dl_no_access' => 'Åtkomst nekad!<br /><br />Du har inga rättigheter att ladda ner denna filen!',
	'Dl_no_category' => 'Det finns inga kategorier. Lägg till en ny kategori innan du ställer några behörigheter.',
	'Dl_no_category_index' => 'Den här nedladdnings sektionen har inga kategorier',
	'Dl_no_external_url' => 'Du måste ange en giltig webbadress om du vill skicka in en extern nedladdning!',
	'Dl_no_filename_entered' => 'Du måste välja en fil om du vill ladda upp den!',
	'Dl_no_groups_for_traffic' => 'Ingen användargrupp hittades!!!<br /><br />Lägg till en användargrupp innan du ställer nedladdningstrafiken för det',
	'Dl_no_more_remain_traffic' => 'Trafik kvoten för nedladdningar i %s har uppnåtts för denna månad. Du måste vänta tills nästa månad eller be en administratör.',
	'Dl_no_permission' => 'Åtkomst nekad!<br /><br />Du har inga rättigheter att göra detta!',
	'Dl_no_upload_traffic' => 'Tyvärr, men det finns ingen uppladdnings trafik kvar. Kontakta admin om du vill ladda upp filen',
	'Dl_path_not_exist' => 'Kategori sökväg <b>%s</b> existerar inte!<br />Gå tillbaka och ange en annan sökväg<br />eller skapa denna mapp med filhantering.',
	'Dl_permission_updated' => 'Nedladdnings behörigheter sparats successfullt',
	'Dl_user_config_saved' => 'Användarkonfiguration för nedladdningar uppdaterade successfullt<br /><br />Klicka %sHär%s för att återvända till nedladdning',
	'Download_added' => 'Nedladdning var tillagd',
	'Download_removed' => 'Nedladdning var raderad',
	'Download_updated' => 'Informationen har uppdaterats',
	'New_download' => 'En ny nedladdning laddades upp eller uppdaterades.<br />Klicka %sHäre%s för att gå direkt till nedladdningar.',
	'Dl_confirm_cat_stats_delete' => 'Är du säker på att du vill ta bort statistik från kategorin <b>%s</b>?',
	'Dl_confirm_all_stats_delete' => 'Är du säker på att du vill ta bort all statistiks?',
	'Dl_confirm_cat_comments_delete' => 'Är du säker på att du vill ta bort kommentarerna från kategorin <b>%s</b>?',
	'Dl_confirm_all_comments_delete' => 'Är du säker på att du vill ta bort alla kommentarer?',
	'Dl_file_not_found' => '<b>Filen %s hittades inte!</b><br /><br />Se till att den här filen finns i mappen %s!',
	'Dl_no_change_edit_time' => 'Logga inte den här uppdateringen',
	'Dl_thumb_upload' => 'Miniatyrbild uppladdad successfullt',
	'Dl_thumb_del' => 'Miniatyrbild raderad successfullt',
	'Dl_thumb_to_big' => 'Miniatyrbilden är för stor!<br />Använd en mindre fil eller en bild med mindre dimensioner.<br />Använd bakåtknappen i din webbläsare för att försöka att ladda upp igen.',
	'Dl_hotlink_permission' => 'Du får inte ladda ner filen genom att länka till !',
	'Dl_vc_permission' => 'Bekräftelsekoden för denna hämtning var fel. Gå tillbaka och försök igen.',
	'Dl_report_broken_vc_mismatch' => 'Bekräftelsekoden för denna rapport var fel. Gå tillbaka och försök igen.',
	'Dl_vc_not_found' => 'Bekräftelse koden kunde inte hittas. Gå tillbaka och försök igen.',

/*
* page descriptions
*/
	'Dl_page_dl_hackslist' => 'Hackslista',
	'Dl_page_downloads' => 'Nedladdningar',

/*
* commands
*/
	'Add_new_download' => 'Lägg till en ny nedladdning',
	'Dl_add' => 'Lägg till',
	'Dl_add_category' => 'Lägg till kategori',
	'Dl_approve' => 'Godkänn',
	'Dl_check_file_sizes' => 'Kontrollera filstorlekar',
	'Dl_check_thumbnails' => 'Kontrollera miniatyrbilder',
	'Dl_delete' => 'Radera',
	'Dl_down' => 'Ner',
	'Dl_edit' => 'Redigera',
	'Dl_go' => 'Gå',
	'Dl_klick_to_rate' => 'Värdera',
	'Dl_lock' => 'Lås',
	'Dl_mark_all' => 'Markera alla',
	'Dl_move' => 'Flytta till',
	'Dl_set' => 'Sätt',
	'Dl_unmark' => 'Avmarkera alla',
	'Dl_up' => 'Upp',
	'Dl_delete_cat' => 'Radera kategori',
	'Dl_stats_delete' => 'Radera statistik',
	'Dl_stats_delete_all' => 'Radera all statistik',
	'Dl_comments_delete' => 'Radera kommentarer',
	'Dl_comments_delete_all' => 'Radera alla kommentarer',
	'Dl_sub_sort_asc' => 'Sortera alla poster i denna kategori stigande',
	'Dl_sub_sort_asc_zero' => 'Sortera huvud kategorierd stigande',

/*
* categories related
*/
	'Dl_cat_description' => 'Beskrivning',
	'Dl_cat_files' => 'Filer',
	'Dl_cat_index' => 'Högsta nivå',
	'Dl_cat_name' => 'Kategori',
	'Dl_cat_parent' => 'Förälder kategori',
	'Dl_cat_path' => 'Sökväg',
	'Dl_cat_title' => 'Nedladdning - Kategorier',
	'Dl_choose_category' => 'Välj en kategori',
	'Dl_mod_desc_allow' => 'Tillåt detaljerad beskrivningar',
	'Dl_must_approve' => 'Ladda upp till denna kategori måste bli godkänd',
	'Dl_statistics' => 'Aktivera detaljerad statistik',
	'Dl_stats_prune' => 'Beskär statistik',
	'Dl_stats_delete' => 'Radera statistik',
	'Dl_stats_delete_all' => 'Radera all statistik',
	'Dl_comments_delete' => 'Radera kommentar',
	'Dl_comments_delete_all' => 'Radera alla kommentarer',
	'Dl_cat_traffic' => 'Trafikkvot (för närvarande tillgänglig: %s)',
	'Dl_cat_traffic_off' => 'Trafikkvot (för närvarande avstängd)',
	'Dl_cat_traffic_main' => '%s trafik kvar för denna kategori',
	'Dl_thumb_cat' => 'Tillåt miniatyrbilder',
	'Dl_approve_comments' => 'Godkänn automatiskt varje ny kommentar',
	'Dl_cat_rules' => 'Regler',

/*
* traffic related
*/
	'Dl_auto_traffic' => 'Automatiskt nedladdnings trafik',
	'Dl_enable_post_traffic' => 'Aktivera trafik tillägg för postning',
	'Dl_group_auto_traffic' => 'Trafik för användargrupper',
	'Dl_newtopic_traffic' => 'Nedladdnings trafiken på varje nyskapat ämne',
	'Dl_overall_traffic' => 'Trafik för alla filer per månad',
	'Dl_remain_overall_traffic' => 'Återstående övergripande trafik för denna månad: ',
	'Dl_reply_traffic' => 'Nedladdnings trafik för varje inlägg, svar eller citat',
	'Dl_traffic' => 'Max. trafik',
	'Dl_user_auto_traffic' => 'Trafik för användare',
	'Single_user_traffic_title' => 'Trafik för en singel användare',
	'Traffic' => 'Trafik',
	'Traffic_now' => 'För närvarande på konto',
	'Usergroup_traffic_title' => 'Trafik för medlemmar i en användargrupp',
	'Users_traffic_title' => 'Trafik för alla användare',
	'Dl_user_traffic_once' => 'Minska användartrafik endast en gång per nedladdning',
	'Dl_can_download_traffic' => 'Du har redan hämtat den här filen.<br />Administratören har tillåtit dig att ladda ner igen utan att betala trafik för det.',
	'Dl_can_download_traffic_footer' => '<b>Administratören har tillåtit dig att ladda redan nedladdade filer igen utan att betala trafik för dem.</b><br /><br />',
	'Traffic_all_users_admin_explain' => 'Lägg till eller ställ in trafiken för alla användare.',
	'Traffic_single_user_admin_explain' => 'Lägg till eller ställ in trafiken för en singel användare.',
	'Traffic_usergroup_admin_explain' => 'Lägg till eller ställ in trafiken för alla medlemmar av en användargrupp.',
	'Dl_auto_traffic_explain' => 'Ställ den trafik som alla användare eller alla medlemmar i en användargrupp kommer att få varje månad för nedladdningar.',

/*
* auth values
*/
	'Dl_permissions_all' => 'Ange behörigheter för alla användare',
	'Dl_auth_dl' => 'Nedladdning',
	'Dl_auth_mod' => 'Moderera',
	'Dl_auth_up' => 'Ladda upp',
	'Dl_auth_view' => 'Visa',
	'Dl_permissions' => 'Behörigheter för medlemmar i följande användargrupper',
	'Dl_stop_uploads' => 'Inaktivera uppladdningar',
	'Dl_stat_perm' => 'Behörigheter till statistiksida från användarnivå',
	'Dl_stat_perm_all' => 'Alla',
	'Dl_stat_perm_user' => 'Registrerade användare',
	'Dl_stat_perm_mod' => 'Download moderatorer',
	'Dl_stat_perm_admin' => 'Forum administratörer',
	'Dl_auth_cread' => 'Läs kommentarer',
	'Dl_auth_cpost' => 'Skriv kommentarer',
	'Dl_perm_all' => 'Alla',
	'Dl_perm_reg' => 'Registrerade användare',
	'Dl_perm_grg' => 'Användargrupper',

/*
* hacks and mods related
*/
	'Dl_hack_autor' => 'Författare',
	'Dl_hack_autor_email' => 'Författares e-post',
	'Dl_hack_autor_website' => 'Författares webbsida',
	'Dl_hack_dl_url' => 'Alternativa nedladdningar',
	'Dl_hack_version' => 'Hack version',
	'Dl_hacklist' => 'Lista i Hacklist',
	'Dl_hacks_list' => 'Hacklist',
	'Dl_mod_desc' => 'Hur mod arbetar',
	'Dl_mod_list' => 'Visa extra information',
	'Dl_mod_require' => 'Kräver',
	'Dl_mod_test' => 'Mod testat på/med',
	'Dl_mod_todo' => 'Att göra',
	'Dl_mod_warning' => 'Varningar',

/*
* moderator panel
*/
	'Dl_modcp_approve' => 'Moderator Panel - Godkänn Nedladdning',
	'Dl_modcp_edit' => 'Moderator Panel - Redigera Nedladdning',
	'Dl_modcp_manage' => 'Moderator Panel - Hantera Nedladdning',
	'Dl_modcp_mod_auth' => 'Du <b>kan</b> %smoderera denna kategori%s',

/*
* ACP file management
*/
	'Dl_check_filesizes_result' => 'Alla filer är uppdaterade och inga fel hittades',
	'Dl_check_filesizes_result_error' => 'Följande filer kunde inte kontrolleras:',
	'Dl_manage' => 'Fil verktygslåda',
	'Dl_manage_content_count' => '%s Poster',
	'Dl_manage_create_dir' => 'Skapa mappen',
	'Dl_manage_empty_folder' => 'Denna mapp är tom...',
	'Dl_manage_explain' => 'Hantera filerna om nedladdningar. Du kan använda följande funktioner:<br /><br />- Radera eller flytta ej tilldelade filer<br />- Gå med tilldelade filer utan en befintlig kategori till ett befintligt<br />- Bläddra bland filerna (<i>Standard efter att ha öppnat hanteringen</i>)<br />- Skapa en ny mapp<br />- Ta bort tomma mappar<br />- Kontrollera filstorleken för varje inte extern nedladdning<br /><br /><b>Uppmärksamhet:</b><br />Detta verktyg kommer inte att ersätta en FTP klient!<br />Funktioner som uppladdning, flytta varje fil eller byta filer är inte möjligt med det här verktyget!',
	'Dl_physical_quota' => 'Fysisk kvot övergriper filer',
	'Dl_unassigned_files' => 'Kontrollera efter ej tilldelade nedladdningar',

/*
* statistics
*/
	'Dl_latest_downloads' => 'Senaste nedladdningar',
	'Dl_latest_uploads' => 'Senaste uppladdning',
	'Dl_downloads_cur_month' => 'Nedladdningar denna månad',
	'Dl_downloads_overall' => 'Nedladdningar övergripande',
	'Dl_downloads_count' => 'Nedladdningar',
	'Dl_downloads_traffic' => 'Övergripande download trafik',
	'Dl_uploads_count' => 'Uppladdningar',
	'Dl_uploads_traffic' => 'Övergripande uppladdnings trafik',
	'Dl_pos' => 'Pos.',
	'Dl_time' => 'Tid',
	'Dl_stats' => 'Nedladdnings statistik',
	'Dl_direction' => 'Åtgärd',
	'Dl_browser' => 'Webb-läsare',
	'Dl_ip' => 'IP Adress',
	'Dl_traffic_cur_month' => 'Trafik den här månaden',
	'Dl_traffic_overall' => 'Trafik övergripande',
	'Dl_guest_stat_delete' => 'Ta bort all data för gäster',
	'Dl_no_filter' => '- inget filter -',
	'Dl_total_entries' => 'Hittade inlägg',
	'Dl_filter' => 'Filter',
	'Dl_filter_string' => 'Använd * eller % som platshållare',
	'Dl_guest_stats_admin' => 'Visa gäster data också',
	'Dl_stat_edit' => 'redigerad',

/*
* comments
*/
	'Dl_comment' => 'Kommentar',
	'Dl_comments' => 'Kommentarer',
	'Dl_last_comment' => 'Senaste kommentar',
	'Dl_post_comment' => 'Skriv',
	'Dl_view_comments' => 'Visa',
	'Dl_comment_edited' => 'Kommentar senast redigerad den %s',
	'Dl_comment_write' => 'Skriv en kommentar',
	'Dl_comment_show' => 'Visa alla kommentarer för denna nedladdning',
	'Dl_comment_delete' => 'Radera',
	'Dl_comment_edit' => 'Redigera',
	'Dl_comment_added' => 'Kommentar successfullt tillagd',
	'Dl_comment_updated' => 'Kommentar successfullt uppdaterad',
	'Dl_must_be_approve_comment' => 'Denna kommentar måste godkännas av en moderator eller administratör!',
	'Dl_approve_overview_one_comment' => 'Det finns en icke godkänd kommentar. Klicka på texten för att kontrollera det.',
	'Dl_approve_overview_comments' => 'Det finns %s icke godkända kommentar. Klicka på texten för att kontrollera dem.',

/*
* ACP management main page
*/
	'Dl_acp_traffic_management' => 'Hantera trafikkvoter och auto förinställningar',
	'Dl_acp_categories_management' => 'Hantera kategorier och deras behörigheter',
	'Dl_acp_config_management' => 'Sätt den allmänna konfigurationen',
	'Dl_acp_files_management' => 'Hantera nedladdningar',
	'Dl_acp_stats_management' => 'Visa och kontrollera statistik',
	'Dl_acp_managemant_page' => 'Download MOD administration',
	'Dl_acp_managemant_page_explain' => 'Administrations inställningar och funktioner för Download MOD.<br />Välj en av funktionerna nedan för att ändra dess inställningar.',

/*
* global strings
*/
	'Dl_account' => 'Du har <b>%s</b> trafik kvar denna månad.',
	'Dl_add_user' => 'Denna nedladdning var tillagd den <b>%s</b> av<b>%s</b>',
	'Dl_all' => 'Alla',
	'Dl_Bytes' => 'B',
	'Dl_Bytes_long' => 'Bytes',
	'Dl_change_user' => ' och senast redigerad den <b>%s</b> av <b>%s</b>',
	'Dl_config' => 'Nedladdnings konfiguration',
	'Dl_days' => 'Dagar',
	'Dl_default_sort' => 'Standard sortering',
	'Dl_delay_auto_traffic' => 'Fördröjning automatisk trafik för nya användare',
	'Dl_delay_post_traffic' => 'Fördröjning trafik för inlägg för nya användare',
	'Dl_direct_download' => 'direkt',
	'Dl_detail' => 'Detalj',
	'Dl_disable_email' => 'Inaktivera meddela per e-post',
	'Dl_disable_popup' => 'Inaktivera meddela per popup/forum meddelande',
	'Dl_disable_email_files' => 'Inaktivera meddela per email',
	'Dl_disable_popup_files' => 'Inaktivera meddela per popup/forum meddelande',
	'Dl_download' => 'Nedladdning',
	'DL_edit' => 'Uppdaterade nedladdning',
	'DL_edit_time' => 'Antal dagar en redigerad nedladdning kommer att märkas',
	'Dl_extern' => 'Extern',
	'Dl_extern_up' => 'Extern',
	'Dl_file_description' => 'Beskrivning',
	'Dl_file_name' => 'Fil',
	'Dl_file_size' => 'Storlek',
	'Dl_files_title' => 'Filer',
	'Dl_files_url' => 'URL',
	'Dl_free' => 'Gratis nedladdning',
	'Dl_function' => 'Funktion',
	'Dl_GB' => 'GB',
	'Dl_group_name' => 'Gruppnamn',
	'Dl_guest_stats_show' => 'Visa gäster i den detaljerade kategoristatistiken',
	'Dl_hotlink_action' => 'Länk åtgärd för direkta nedladdningslänkar',
	'Dl_hotlink_action_one' => 'omdirigera till detaljer',
	'Dl_hotlink_action_two' => 'visa meddelandet',
	'Dl_info' => 'Info',
	'Dl_is_free' => 'Gratis nedladdning',
	'Dl_is_free_reg' => 'Gratis för registrerade användare',
	'Dl_KB' => 'KB',
	'Dl_klicks' => 'Klick i månad',
	'Dl_last_time' => ' Senaste nedladdning den <b>%s</b>',
	'Dl_last_time_extern' => ' Senaste nedladdning från extern webbadress den <b>%s</b>',
	'Dl_limit_desc_on_index' => 'Begränsa nedladdnings beskrivningar på Index',
	'Dl_Links_per_page' => 'Nedladdningar per sida',
	'Dl_MB' => 'MB',
	'Dl_method' => 'Nedladdnings metod',
	'Dl_method_new' => 'Ny',
	'Dl_method_old' => 'Gammal',
	'Dl_method_quota' => 'Kvot för chunked fil läs metod',
	'Dl_modcp_capprove' => 'Godkänn kommentarer',
	'Dl_must_be_approved' => 'Denna nedladdning måste godkännas av en administratör eller en moderator för denna kategori.',
	'Dl_name' => 'Namn',
	'DL_new' => 'Ny nedladdning',
	'DL_new_time' => 'Antal dagar en ny nedladdning kommer att vara märkt',
	'Dl_no' => 'Nej',
	'Dl_no_config' => 'Användarens konfiguration låst',
	'Dl_no_last_time' => ' Inga nedladdningar räknas fram till nu...',
	'Dl_no_mod_todo' => 'Inga Mod AttGörao\'s just nu',
	'Dl_not_availible' => 'Inte tillgängligt',
	'Dl_order' => 'Sortera',
	'Dl_overall_klicks' => 'Övergripande klick',
	'Dl_klicks_total' => 'Klicks Månad / Totalt',
	'Dl_overview' => 'Översikts lista för alla nedladdningar',
	'DL_posts' => 'Antal inlägg en användare behöver för att få nedladdnings tillgång',
	'Dl_prevent_hotlink' => 'Förhindra länkar från direkta nedladdningar',
	'Dl_rating' => 'Betyg',
	'Dl_real_filetime' => 'Senast fil modifiering',
	'Dl_search_author' => 'För användare som har laddat upp eller ändrat nedladdningar',
	'Dl_show_footer_legend' => 'Visa legend på nedladdnings sidfot',
	'Dl_show_footer_stat' => 'Visa statistik på nedladdnings sidfot',
	'Dl_show_real_filetime' => 'Visa tiden för den sista fil modifieringen på nedladdnings detaljer',
	'Dl_sort_preform' => 'Utför sortering',
	'Dl_sort_acp' => 'Förinställd',
	'Dl_sort_user' => 'Användare',
	'Dl_sort_user_opt' => 'Sortera nedladdningar för',
	'Dl_sort_user_ext' => 'med andra kriterier',
	'Dl_thumb' => 'Miniatyrbild',
	'Dl_thumb_dim_size' => 'Miniatyrbild kan ha en maximal dimension av %s x %s pixlar och filstorleken måste vara mindre än %s.',
	'Dl_thumb_max_dim' => 'Maximala dimensioner i pixlar X * Y',
	'Dl_thumb_max_size' => 'Maximal miniatyrbilds filstorlek',
	'Dl_total_stat' => 'Det finns totalt %s nedladdningar med en storlek på %s / %s inklusive %s externa nedladdningar.',
	'Dl_unapproved' => '<br /><span class="gensmall">[ unapproved ]</span>',
	'Dl_upload' => 'Ladda upp en fil',
	'Dl_upload_file' => 'Ladda upp',
	'Dl_upload_max_filesize' => 'Maximal filstorlek som är tillåten för uppladdningar: %s',
	'Dl_upload_traffic' => 'Filstorleken på uppladdningar minskar den totala trafiken. Betrakta detta på att välja filstorlek!',
	'Dl_upload_traffic_count' => 'Också minska den totala trafiken för uppladdningar',
	'Dl_use_hacklist' => 'Aktivera hacklist',
	'Dl_users_without_group' => 'Användare utan medlemskap i en användargrupp',
	'Dl_white_explain' => 'Gratis nedladdning utan trafikräkning för registrerade användare',
	'Dl_yes' => 'Ja',
	'Dl_yes_reg' => 'Ja för<br />reg. Användare',
	'Download_path' => 'Sökvägen till dina nedladdningar, t.ex. <b>downloads/</b>',
	'Downloads' => 'Nedladdningar',
	'Must_select_download' => 'Välj en nedladdning.',
	'Number_recent_dl_on_portal' => 'Antal senaste nedladdningar som visas på portalen',
	'Recent_downloads' => 'Nya nedladdningar',
	'User_allow_fav_download_email' => 'Aktivera e-post för ändringar till favorit nedladdningar',
	'User_allow_fav_download_popup' => 'Aktivera forums meddelande för ändringar till favorit nedladdningar',
	'User_allow_new_download_email' => 'Aktivera e-post för nya nedladdningar',
	'User_allow_new_download_popup' => 'Aktivera forums meddelande för nya nedladdningar',
	'User_download_email' => 'E-post<br />kungörelse',
	'User_download_popup' => 'Forum<br />Meddelande',
	'User_download_notify_type' => 'Typ av forums meddelande',
	'User_download_notify_type_popup' => 'Popup',
	'User_download_notify_type_message' => 'Meddelande på forumets sidhuvud',
	'Dl_edit_own_downloads' => 'Användaren kan redigera egna filer',
	'Dl_report_confirm_code' => 'Vänligen ange bekräftelsekoden här för att rapportera denna nedladdning som bruten:',
	'Dl_shorten_extern_links' => 'Förkorta visade extern länk för nedladdning',
	'Dl_physical_quota_explain' => 'Om denna kvot (för närvarande %s i bruk) uppnås, kommer inga fler uppladdningar att tillåtas',
	'Dl_blue_explain' => 'Ingen mer övergripande trafik kvar den här månaden!',
	'Dl_blue_explain_file' => 'Ingen mer fil trafik kvar den här månaden!',
	'Dl_blue_explain_foot' => 'Ingen mer övergripande trafik eller fil / kategoris trafik kvar denna månad!',
	'Dl_green_explain' => 'Ladda ner! Inga avdrag från användarkonto.',
	'Dl_grey_explain' => 'Ladda ner! Extern källa. Inga avdrag från användarkonto.',
	'Dl_red_explain' => 'Inte tillräckligt med trafik eller inlägg<br />(%s inlägg krävs). Inte spamma! Spammare kommer automatiskt att blockeras!',
	'Dl_red_explain_alt' => 'Inte tillräckligt med trafik eller inlägg (%s inlägg krävs). Inte spamma! Spammare kommer automatiskt att blockeras!',
	'Dl_red_explain_perm' => 'Inga rättigheter att ladda ner!',
	'Dl_yellow_explain' => 'Ladda ner! Trafiken kommer att dras från användarkonto.',
	'Dl_config_explain' => 'Aktivera eller inaktivera olika funktioner och / eller inställningar.',
	'Dl_cat_edit_explain' => 'Hantera kategorier för nedladdnings MOD.',

/*
* build in add on cash to traffic
*/
	'Dl_cash_to_traffic' => 'Exchange pengar till trafiken',
	'Dl_cash_to_traffic_explain' => 'Sätt utbytet mellan kontant valutor och nedladdnings trafik. Utbytet kommer att förändra ett fullt värde på valutan till den angivna mängden trafik.',
	'Dl_cash_currency' => 'Cash valuta',
	'Dl_cash_exchange' => 'Exchange: 1 %s in i %s trafik',
	'Dl_cash_current_amount' => 'Du har %s %s',

/*
* new on Download MOD 5.0.10: Blacklist for filetypes
*/
	'Dl_ext_blacklist' => 'Blacklist filetyper',
	'Dl_use_ext_blacklist' => 'Aktivera blacklist för filtyper',
	'Dl_extention' => 'Nytt förbjudet fil tillägg',
	'Dl_extentions' => 'Förbjudet fil tillägg',
	'Dl_add_extention' => 'Lägg till fil tillägg',
	'Dl_confirm_delete_extention' => 'Är du säker på att du vill radera tillägget <b>%s</b>?',
	'Dl_confirm_delete_extentions' => 'Är du säker på att du vill radera tillägget <b>%s</b>?',
	'Dl_delete_extention_confirm' => 'Radera fil tillägg från blacklist',
	'Dl_delete_extentions_confirm' => 'Radera fil tillägg från blacklist',
	'Extention_removed' => 'Fil tillägg framgångsrikt minskat från blacklist.',
	'Extentions_removed' => 'Fil tillägg framgångsrikt minskat från blacklist.',
	'Click_return_extblacklistadmin' => 'Klicka %sHär%s för att återgå till filtilläggs blacklist',
	'Dl_forbidden_extention' => 'Denna filändelsen är för närvarande inte tillåten!<br />Vänligen gå tillbaka och använda en annan filtyp.',
	'Dl_forbidden_ext_explain' => 'Förbjuden filändelser: %s',
	'Dl_ext_blacklist_explain' => 'Ange filändelser som ska förbjudas från att laddas upp med detta MOD.<br />De förbjudna filändelser som läggs i Icy Phoenix ACP kommer också att användas.<br />Detta inkluderar inte existerande nedladdningar.',

/*
* new on Download MOD 5.0.12: Disable time edit informations
*/
	'Dl_disable_popup_notify' => 'Tillåt inaktivera i redigerings-tids information om redigering av en ​​nedladdning',

/*
* new on Download MOD 5.0.15: Banlist and report broken downloads
*/
	'Dl_acp_banlist' => 'Bannlista',
	'Dl_user_id' => 'Användar ID',
	'Dl_confirm_delete_ban_values' => 'Är du säker på att du vill ta bort dessa bannlysningslistans poster?',
	'Dl_banlist_updated' => 'Bannlista har uppdaterats',
	'Dl_banned' => 'Du är bannlyst och kan inte ladda ner filer!',
	'Click_return_banlistadmin' => 'Klick %sHär%s för att återgå till bannlysningslistan',
	'Dl_broken' => 'Rapportera fel i nedladdning',
	'Dl_broken_mod' => 'Återställ brutna nedladdnings status',
	'Dl_broken_cur' => 'Den här nedladdningen är för närvarande redovisad som brytens',
	'Dl_report_broken' => 'Tillåt rapportering av brutna nedladdningar',
	'Dl_a_guest' => 'en gäst',
	'Dl_favorite_add' => 'Meddela mig om ändringar i denna nedladdning',
	'Dl_favorite_drop' => 'Ta bort meddelanden om denna nedladdning',
	'Dl_favorite' => 'Ladda ner Favoriter',
	'Dl_acp_banlist_explain' => 'Ange olika värden för att förbjuda tillgång till nedladdningar.<br />Varje värde kommer att användas samtidigt, även om de redovisas som en datauppsättning.',

/*
* new on Download MOD 5.1.0
*/
	'Dl_report_broken_lock' => 'Inaktivera nedladdning samtidigt som den rapporteras som bruten',
	'Dl_report_broken_message' => 'Visa anteckning om en trasig nedladdning endast om den också är inaktiv',
	'Dl_report_broken_vc' => 'Aktivera visuell bekräftelse för att rapportera en bruten nedladdning',
	'Dl_visual_confirmation' => 'Aktivera visuell bekräftelse för att ladda ner en fil',
	'Dl_off_guests' => 'Inte för gäster',

/*
* new on Download MOD 5.1.1
*/
	'Dl_icon_free_for_reg' => 'Visa den vita nedladdnings ikonen för gäster',

/*
* new on Download MOD 5.1.3
*/
	'Dl_latest_comments' => 'Visar de senaste X kommentarerna på nedladdningsuppgifter',

/*
* new on Download MOD 5.2.0 - The Bug Tracker !!!!!!!!!!!! -------------  * :-(((((
*/
	'Dl_bug_tracker' => 'Bug Tracker',
	'Dl_bug_tracker_file' => 'för denna nedladdning',
	'Dl_bug_tracker_cat' => 'Aktivera Bug Tracker',

	'Confirm_delete_bug_report' => 'Är du säker på att du vill ta bort denna felrapport?',
	'Dl_bug_report_id' => 'Rapport ID',
	'Dl_bug_report_title' => 'Rapport titel',
	'Dl_bug_report_title_details' => 'Rapport',
	'Dl_bug_report_text' => 'Beskrivning',
	'Dl_bug_report_date' => 'Rapporterat vid',
	'Dl_bug_report_php' => 'PHP',
	'Dl_bug_report_db' => 'DB',
	'Dl_bug_report_forum' => 'Forum',
	'Dl_bug_report_file' => 'Download',
	'Dl_bug_report_author' => 'Rapporterad av',
	'Dl_bug_report_assigned' => 'Tilldelats till',
	'Dl_bug_report_assign_date' => 'Tilldelats den',
	'Dl_bug_report_status' => 'Status',
	'Dl_bug_report_status_date' => 'Förra gången för status',
	'Dl_bug_report_detail' => 'Detaljer',
	'Dl_bug_report_history' => 'Historia',
	'Dl_bug_report_reassign' => 'ej tilldela',
	'Dl_bug_report_assign' => 'tilldela',
	'Dl_bug_report_unassigned' => 'ej tilldelad',
	'Dl_no_bug_tracker' => 'Inga rapporter hittades',
	'Dl_bug_report_no_title' => 'Du har inte angett en titel för denna felrapport!',
	'Dl_bug_report_no_text' => 'Du har inte angett någon beskrivning för denna felrapport!',
	'Dl_bug_report_added' => 'Felrapport tillagd successfullt',
	'Click_return_bug_tracker' => 'Klicka %sHär%s för att återgå till bug tracker.',
	'Dl_bug_report_status_text' => 'Viss text för den nya statusen (kommer att skickas per e-post till författaren av denna felrapport)',
	'Dl_bug_report_status_update' => 'uppdatera status',
	'Dl_filter_bt_own' => 'Visa min rapport',
	'Dl_filter_bt_assign' => 'Visa min tildelning',

	'Dl_user_download_limit_flag' => 'Begränsa antalet nedladdningar per månad',
	'Dl_user_download_limit' => 'Max antal nedladdningar per månad',
	)
);

$lang['Dl_report_status'][0] = 'ny';
$lang['Dl_report_status'][1] = 'visad';
$lang['Dl_report_status'][2] = 'i progress';
$lang['Dl_report_status'][3] = 'avvaktan';
$lang['Dl_report_status'][4] = 'klar';
$lang['Dl_report_status'][5] = 'kastad';
$lang['Dl_bug_report_email_status'] = 'Detta meddelande är för den nya statusen:
--------------------
%s
--------------------';

?>