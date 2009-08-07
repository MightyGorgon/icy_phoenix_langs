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
	'Click_return_categoryadmin' => 'Klicka %shär%s tför att återgå till administrationen av kategorierna',
	'Click_return_dl_config' => 'Klicka %shär%s för att återgå till nedladdnings konfigureringen',
	'Click_return_downloadadmin' => 'Klicka %shär%s för att återgå till administrationen av nerladdningar',
	'Click_return_downloads' => 'Klicka %shär%s för att återgå till Nerladdnings Kategorierna',
	'Click_return_download_details' => 'Klicka %shär%s för att återgå till nedladdningen',
	'Click_return_file_management' => 'Klicka %shär%s för att återgå till fil hanteringen',
	'Click_return_modcp_approve' => 'Klicka %shär%s för att återgå till icke godkända nerladdningar',
	'Click_return_modcp_manage' => 'Klicka %shär%s för att återgå till moderator panelen',
	'Click_return_user_traffic_admin' => 'Klicka %shär%s för att modifiera trafiken av en annan användare',
	'Click_return_usergroup_traffic_admin' => 'Klicka %shär%s för att modifiera trafik i en annan användargrupp',

/*
* message strings
*/
	'Dl_category_added' => 'Kategori tillagd',
	'Dl_category_updated' => 'Kategori uppdaterad',
	'Dl_category_removed' => 'Kategori borttagen framgångsrikt',
	'DL_upload_error' => 'Error medan du lägger upp den här filen. Gå tillbaka och försök igen.<br />Kontakta administratören om detta fel fortfarande finns.',
	'Dl_approve_overview' => 'Det finns %s icke godkända nedladdningar. Klicka här för att godkänna dem.',
	'Dl_approve_overview_one' => 'Det finns %s icke godkända nerladdningar. Klicka här för att godkänna den.',
	'Dl_config_updated' => 'Nerladdnings konfigurationen sparats framgångsrikt',
	'Dl_confirm_cat_delete' => 'Vill du verkligen ta bort kategorin <b>%s</b>?',
	'Dl_confirm_delete_multiple_files' => 'Vill du verkligen ta bort dessa <b>%d nerladdningar</b>?',
	'Dl_confirm_delete_single_file' => 'Vill du verkligen ta bort denna nerladdning <b>%s</b>?',
	'Dl_delete_cat_and_files' => 'Radera den här kategorin och alla filer i den',
	'Dl_delete_cat_confirm' => 'Välj en kategori som varje nerladdning kommer att flyttas till eller använd en annan åtgärd',
	'Dl_delete_cat_only' => 'Radera endast den här kategorin',
	'Dl_delete_file_confirm' => 'Radera även denna fil(er)',
	'Dl_empty_category' => 'Denna kategori innehåller inga nerladdningar',
	'Dl_no_access' => 'Åtkomst nekad!<br /><br />Du har inga rättigheter att ladda ner denna fil!',
	'Dl_no_category' => 'Det finns inga kategorier. Lägg till en ny kategori innan du ställer in alla behörigheter.',
	'Dl_no_category_index' => 'Denna nerladdnings sektion har inga kategorier',
	'Dl_no_external_url' => 'Du måste ange en giltig webbadress om du vill lämna in en extern nerladdning!',
	'Dl_no_filename_entered' => 'Du måste välja en fil om du vill ladda upp den!',
	'Dl_no_groups_for_traffic' => 'Ingen användargrupp hittades!!!<br /><br />Lägg till en användargrupp innan du ställer in nerladdnings traffic information för det',
	'Dl_no_more_remain_traffic' => 'Traffic planen för nerladdningar i %s är helt använd för denna månad. Vänta tills nästa månad eller be en administratör.',
	'Dl_no_permission' => 'Åtkomst nekad!<br /><br />Du har inga rättigheter att göra detta!',
	'Dl_no_upload_traffic' => 'Ledsen, men det finns ingen uppladdnings trafik kvar. Kontakta administratören om du vill ladda upp denna fil',
	'Dl_path_not_exist' => 'Kategorins sökväg <b>%s</b> finns inte!<br />Gå tillbaka och ange ett annat sökvägsnamn<br />eller skapa denna mapp med filhanteringen.',
	'Dl_permission_updated' => 'Nerladdnings behörigheter sparats framgångsrikt',
	'Dl_user_config_saved' => 'Användarkonfiguration för nerladdningar uppdaterats framgångsrikt<br /><br />Klicka %shär%s för att återgå till nerladdningarna',
	'Download_added' => 'Nerladdning lades till',
	'Download_removed' => 'Nerladdning var raderad',
	'Download_updated' => 'Informationen har blivit uppdaterad',
	'New_download' => 'En ny hämtning var upplagd eller uppdaterad.<br />Klicka %shär%s för att gå direkt till nerladdningar.',
	'Dl_confirm_cat_stats_delete' => 'Är du säker på att du vill ta bort de statistiska uppgifterna från kategorin <b>%s</b>?',
	'Dl_confirm_all_stats_delete' => 'Är du säker på att du vill ta bort all statistik?',
	'Dl_confirm_cat_comments_delete' => 'Är du säker på att du vill ta bort kommentarer från kategorin <b>%s</b>?',
	'Dl_confirm_all_comments_delete' => 'Är du säker på att du vill ta bort alla kommentarer?',
	'Dl_file_not_found' => '<b>Filen %s kunde inte hittas!</b><br /><br />Se till att filen finns i mappen %s!',
	'Dl_no_change_edit_time' => 'Logga inte den här uppdateringen',
	'Dl_thumb_upload' => 'Miniatyrbild uppladdad successfullt',
	'Dl_thumb_del' => 'Miniatyrbild raderad successfullt',
	'Dl_thumb_to_big' => 'Miniatyrbilden är för stor!<br />Använd en mindre fil eller en bild med mindre mått.<br />Använd bakåtknappen i din webbläsare för att försöka ladda upp den igen.',
	'Dl_hotlink_permission' => 'Du har inte tillåtelse att ladda ner denna fil direkt med en länk !',
	'Dl_vc_permission' => 'Bekräftelsekoden för denna hämtning var fel. Gå tillbaka och försök igen.',
	'Dl_report_broken_vc_mismatch' => 'Bekräftelsekoden för denna rapport var fel. Gå tillbaka och försök igen.',
	'Dl_vc_not_found' => 'Bekräftelsekoden kunde inte hittas. Gå tillbaka och försök igen.',

/*
* page descriptions
*/
	'Dl_page_dl_hackslist' => 'Hackslista',
	'Dl_page_downloads' => 'Nerladdningar',

/*
* commands
*/
	'Add_new_download' => 'Lägg till en ny nedladdning',
	'Dl_add' => 'Lägg till',
	'Dl_add_category' => 'Lägg till kategori',
	'Dl_approve' => 'Godkänn',
	'Dl_check_file_sizes' => 'Kontrollera filstorleken',
	'Dl_check_thumbnails' => 'Kontrollera miniatyrbilder',
	'Dl_delete' => 'Radera',
	'Dl_down' => 'Ner',
	'Dl_edit' => 'Redigera',
	'Dl_go' => 'Gå',
	'Dl_klick_to_rate' => 'Betygsätt',
	'Dl_lock' => 'Lås',
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
	'Dl_cat_index' => 'Högsta Nivå',
	'Dl_cat_name' => 'Kategori',
	'Dl_cat_parent' => 'Förälder kategori',
	'Dl_cat_path' => 'Sökväg',
	'Dl_cat_title' => 'Nerladdnings - Kategorier',
	'Dl_choose_category' => 'Välj en kategori',
	'Dl_mod_desc_allow' => 'Tillåt detalj beskrivning',
	'Dl_must_approve' => 'Uppladdning till denna kategori måste godkännas',
	'Dl_statistics' => 'Aktivera detaljerad statistik',
	'Dl_stats_prune' => 'Reducera statistisk data',
	'Dl_stats_delete' => 'Radera statistik',
	'Dl_stats_delete_all' => 'Radera all statistik',
	'Dl_comments_delete' => 'Radera kommentarer',
	'Dl_comments_delete_all' => 'Radera alla kommentarer',
	'Dl_cat_traffic' => 'Traffic citering (förnärvarande tillgänglig: %s)',
	'Dl_cat_traffic_off' => 'Traffic citering (förnärvarande av)',
	'Dl_cat_traffic_main' => '%s traffic finns kvar i denna kategori',
	'Dl_thumb_cat' => 'Tillåt miniatyrbilder',
	'Dl_approve_comments' => 'Automatiskt godkänna varje ny kommentar',
	'Dl_cat_rules' => 'Regler',

/*
* traffic related
*/
	'Dl_auto_traffic' => 'Automatiskt nerladda traffic',
	'Dl_enable_post_traffic' => 'Möjliggör traffic tillägg för inlägg',
	'Dl_group_auto_traffic' => 'Traffic för användargrupper',
	'Dl_newtopic_traffic' => 'Ladda ner traffic för varje nytt skapat ämne',
	'Dl_overall_traffic' => 'Traffic för alla filer per månad',
	'Dl_remain_overall_traffic' => 'Återstående övergripande Traffic för denna månad: ',
	'Dl_reply_traffic' => 'Ladda ner traffic för varje post, svar eller citat',
	'Dl_traffic' => 'Max. traffic',
	'Dl_user_auto_traffic' => 'Traffic för användare',
	'Single_user_traffic_title' => 'Traffic för en enskild användare',
	'Traffic' => 'Traffic',
	'Traffic_now' => 'Närvarande på konto',
	'Usergroup_traffic_title' => 'Traffic för medlemmar i en användargrupp',
	'Users_traffic_title' => 'Traffic för alla användare',
	'Dl_user_traffic_once' => 'Minska användare traffic endast en gång per nedladdning',
	'Dl_can_download_traffic' => 'Du har redan laddat ner den här filen.<br />Administratören tillåter dig att ladda ner igen utan att betala traffic för den.',
	'Dl_can_download_traffic_footer' => '<b>Administratören tillåter dig att ladda redan nedladdade filer igen utan att betala traffic för dem.</b><br /><br />',
	'Traffic_all_users_admin_explain' => 'Lägg till eller ställ in traffic för alla användare.',
	'Traffic_single_user_admin_explain' => 'Lägg till eller ställ in traffic för en enda användare.',
	'Traffic_usergroup_admin_explain' => 'Lägg till eller ställ in traffic för alla medlemmar i en användargrupp.',
	'Dl_auto_traffic_explain' => 'Ställ in traffic för alla användare eller alla medlemmar i en användargrupp vad de får ladda ner varje månad.',

/*
* auth values
*/
	'Dl_permissions_all' => 'Ange behörigheter för alla användare',
	'Dl_auth_dl' => 'Nerladdning',
	'Dl_auth_mod' => 'Moderera',
	'Dl_auth_up' => 'Uppladdning',
	'Dl_auth_view' => 'Visa',
	'Dl_permissions' => 'Behörigheter för medlemmar i följande användargrupper',
	'Dl_stop_uploads' => 'Avaktivera uppladdningar',
	'Dl_stat_perm' => 'Behörigheter till statistisk sida från användarnivå',
	'Dl_stat_perm_all' => 'Alla',
	'Dl_stat_perm_user' => 'Registrerade användare',
	'Dl_stat_perm_mod' => 'Hämta moderatorer',
	'Dl_stat_perm_admin' => 'Forum administratörer',
	'Dl_auth_cread' => 'Läs kommentarer',
	'Dl_auth_cpost' => 'Skriv kommentarer',
	'Dl_perm_all' => 'Alla',
	'Dl_perm_reg' => 'Registrerade Användare',
	'Dl_perm_grg' => 'Användargrupper',

/*
* hacks and mods related
*/
	'Dl_hack_autor' => 'Författare',
	'Dl_hack_autor_email' => 'Författares e-post',
	'Dl_hack_autor_website' => 'Författares webbsida',
	'Dl_hack_dl_url' => 'Alternativa Nerladdning',
	'Dl_hack_version' => 'Hack Version',
	'Dl_hacklist' => 'Listas i Hacklista',
	'Dl_hacks_list' => 'Hacklista',
	'Dl_mod_desc' => 'Hur mod arbetar',
	'Dl_mod_list' => 'Visa extra information',
	'Dl_mod_require' => 'Kräver',
	'Dl_mod_test' => 'Mod testats på/med',
	'Dl_mod_todo' => 'Att göra',
	'Dl_mod_warning' => 'Varningar',

/*
* moderator panel
*/
	'Dl_modcp_approve' => 'Moderator Panel - Godkänna Nerladdningar',
	'Dl_modcp_edit' => 'Moderator Panel - Godkänna Nerladdningar',
	'Dl_modcp_manage' => 'Moderator Panel - Hantera Nerladdningar',
	'Dl_modcp_mod_auth' => 'Du <b>kan</b> %smoderera denna kategori%s',

/*
* ACP file management
*/
	'Dl_check_filesizes_result' => 'Alla filer är uppdaterade och inga fel hittades',
	'Dl_check_filesizes_result_error' => 'Följande filer kan inte kontrolleras:',
	'Dl_manage' => 'Fil verktygslåda',
	'Dl_manage_content_count' => '%s Noteringar',
	'Dl_manage_create_dir' => 'Skapa denna mappen',
	'Dl_manage_empty_folder' => 'Den här mappen är tom...',
	'Dl_manage_explain' => 'Hantera filerna för nedladdning. Du kan använda följande funktioner:<br /><br />- Ta bort eller flytta otilldelade filer<br />- Delta i tilldelade filer utan befintlig kategori till en befintlig en<br />- Bläddra bland filer (<i>Standard efter öppnings hanteringen</i>)<br />- Skapa en ny mapp<br />- Ta bort tomma mappar<br />- Kontrollera filstorleken för varje inte extern nedladdning<br /><br /><b>Uppmärksamhet:</b><br />Detta verktyg kommer inte att ersätta en FTP-klient!<br />Funktioner som uppladdningar, flytta varje fil och ersätta filer är inte möjligt med det här verktyget!',
	'Dl_physical_quota' => 'Fysisk kvot över alla filer',
	'Dl_unassigned_files' => 'Kontrollera efter otilldelade nerladdningar',

/*
* statistics
*/
	'Dl_latest_downloads' => 'Senaste Nerladdningar',
	'Dl_latest_uploads' => 'Senaste Uppladdningar',
	'Dl_downloads_cur_month' => 'Nerladdningar Aktuell Månad',
	'Dl_downloads_overall' => 'Nerladdningar Övergripande',
	'Dl_downloads_count' => 'Nerladdningar',
	'Dl_downloads_traffic' => 'Övergripande Nerladdning',
	'Dl_uploads_count' => 'Uppladdningar',
	'Dl_uploads_traffic' => 'Övergripande Uppladdnings Traffic',
	'Dl_pos' => 'Pos.',
	'Dl_time' => 'Tid',
	'Dl_stats' => 'Nerladdnings statistik',
	'Dl_direction' => 'Åtgärd',
	'Dl_browser' => 'Webbläsare',
	'Dl_ip' => 'IP Adress',
	'Dl_traffic_cur_month' => 'Traffic denna månad',
	'Dl_traffic_overall' => 'Traffic totalt',
	'Dl_guest_stat_delete' => 'Radera all data för gäster',
	'Dl_no_filter' => '- inget filter -',
	'Dl_total_entries' => 'Funna Noteringar',
	'Dl_filter' => 'Filtrera',
	'Dl_filter_string' => 'Använd * eller % som platshållare',
	'Dl_guest_stats_admin' => 'Visa gästers data, också',
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
	'Dl_comment_show' => 'Visa alla kommentarer för denna nerladdning',
	'Dl_comment_delete' => 'Radera',
	'Dl_comment_edit' => 'Redigera',
	'Dl_comment_added' => 'Kommentar successfullt tillagd',
	'Dl_comment_updated' => 'Kommentar successfullt uppdaterad',
	'Dl_must_be_approve_comment' => 'Denna kommentar måste godkännas av en moderator eller administratör!',
	'Dl_approve_overview_one_comment' => 'Det finns en ej godkänd kommentar. Klicka på texten för att kontrollera den.',
	'Dl_approve_overview_comments' => 'Det finns %s ej godkända kommentarer. Klicka på texten för att kontrollera dem.',

/*
* ACP management main page
*/
	'Dl_acp_traffic_management' => 'Hantera traffic kvoter och auto förinställningar',
	'Dl_acp_categories_management' => 'Hantera kategorier och deras behörigheter',
	'Dl_acp_config_management' => 'Ange allmänna inställningar',
	'Dl_acp_files_management' => 'Hantera nerladdningar',
	'Dl_acp_stats_management' => 'Visa och kontrollera statistik',
	'Dl_acp_managemant_page' => 'Ladda Ner MOD administration',
	'Dl_acp_managemant_page_explain' => 'Administrations inställningar och funktioner för Nerladdning MOD.<br />Välj en av funktionerna nedan för att ändra inställningarna.',

/*
* global strings
*/
	'Dl_account' => 'Du har kvar <b>%s</b> traffic denna månad.',
	'Dl_add_user' => 'Den här hämtningsbara filen lades till <b>%s</b> av <b>%s</b>',
	'Dl_all' => 'Alla',
	'Dl_Bytes' => 'B',
	'Dl_Bytes_long' => 'Bytes',
	'Dl_change_user' => ' och senast redigerad den <b>%s</b> av <b>%s</b>',
	'Dl_config' => 'Ladda ner konfiguration',
	'Dl_days' => 'Dagar',
	'Dl_default_sort' => 'Standard sortering',
	'Dl_delay_auto_traffic' => 'Försena auto traffic för ny Användare',
	'Dl_delay_post_traffic' => 'Försena traffic för inlägg för ny Användare',
	'Dl_direct_download' => 'direkt',
	'Dl_detail' => 'Detaljer',
	'Dl_disable_email' => 'Inaktivera underrättande per e-post',
	'Dl_disable_popup' => 'Inaktivera underrättande per popup/Forum meddelande',
	'Dl_disable_email_files' => 'Inaktivera underrättande per e-post',
	'Dl_disable_popup_files' => 'Inaktivera underrättande per popup/Forum meddelande',
	'Dl_download' => 'Nerladdning',
	'DL_edit' => 'Uppdaterad nerladdning',
	'DL_edit_time' => 'Antal dagar en redigerad nedladdningen kommer att märkas',
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
	'Dl_guest_stats_show' => 'Visa gäster i den detaljerade kategorins statistik',
	'Dl_hotlink_action' => 'Länk åtgärd för direkt nedladdning länkar',
	'Dl_hotlink_action_one' => 'omdirigeras till detaljer',
	'Dl_hotlink_action_two' => 'visa meddelandet',
	'Dl_info' => 'Info',
	'Dl_is_free' => 'Fria Nerladdningar',
	'Dl_is_free_reg' => 'Gratis för registrerade användare',
	'Dl_KB' => 'KB',
	'Dl_klicks' => 'Klick Månad',
	'Dl_last_time' => ' Senaste nerladdningen den <b>%s</b>',
	'Dl_last_time_extern' => ' Senaste nerladdningen från extern webbadress den <b>%s</b>',
	'Dl_limit_desc_on_index' => 'Begränsa Ladda ner beskrivningar på Index',
	'Dl_Links_per_page' => 'Nerladdningar per sida',
	'Dl_MB' => 'MB',
	'Dl_method' => 'Nerladdnings metod',
	'Dl_method_new' => 'Ny',
	'Dl_method_old' => 'Gammal',
	'Dl_method_quota' => 'Kvot för chunked fils läs metod',
	'Dl_modcp_capprove' => 'Godkänn kommentarer',
	'Dl_must_be_approved' => 'Den här nerladdningen måste godkännas av en administratör eller moderator för denna kategori.',
	'Dl_name' => 'Namn',
	'DL_new' => 'Ny nerladdning',
	'DL_new_time' => 'Antal dagar en ny nedladdning kommer att vara märkt',
	'Dl_no' => 'Nej',
	'Dl_no_config' => 'Användar konfiguration låst',
	'Dl_no_last_time' => ' Inga nerladdningar räknas fram till nu...',
	'Dl_no_mod_todo' => 'Inget Mod AttGöra just nu',
	'Dl_not_availible' => 'Inte tillgänglig',
	'Dl_order' => 'Sortera',
	'Dl_overall_klicks' => 'Totala Klickningar',
	'Dl_klicks_total' => 'Klickningar Månad / Totalt',
	'Dl_overview' => 'Översiktlista över alla nerladdningar',
	'DL_posts' => 'Antal Inlägg en användare behöver för att få nerladdnings tillgång',
	'Dl_prevent_hotlink' => 'Förhindra länkar för direkta nerladdningar',
	'Dl_rating' => 'Betyg',
	'Dl_real_filetime' => 'Senaste fil modifiering',
	'Dl_search_author' => 'För användare som har laddat upp eller ändrat nerladdningar',
	'Dl_show_footer_legend' => 'Visa legenden på nerladdnings sidfoten',
	'Dl_show_footer_stat' => 'Visa statistik på nerladdnings sidfoten',
	'Dl_show_real_filetime' => 'Visa tiden för den sista fil modifikationen på nerladdnings detaljerna',
	'Dl_sort_preform' => 'Preform sortering',
	'Dl_sort_acp' => 'Förinställd',
	'Dl_sort_user' => 'Användare',
	'Dl_sort_user_opt' => 'Sortera nerladdningar för',
	'Dl_sort_user_ext' => 'med andra kriterier',
	'Dl_thumb' => 'Miniatyrbild',
	'Dl_thumb_dim_size' => 'Miniatyrbild kan ha en maximal dimension av %s x %s pixlar och filstorleken måste vara mindre än %s.',
	'Dl_thumb_max_dim' => 'Maximal dimension i pixlar X * Y',
	'Dl_thumb_max_size' => 'Maximal miniatyrbilds filstorlek',
	'Dl_total_stat' => 'Det finns allmänt %s nerladdningar med en storlek av %s / %s inklusive %s externa Nedladdningar.',
	'Dl_unapproved' => '<br /><span class="gensmall">[ icke godkända ]</span>',
	'Dl_upload' => 'Ladda upp en fil',
	'Dl_upload_file' => 'Ladda upp',
	'Dl_upload_max_filesize' => 'Maximal filstorlek som är tillåten för uppladdning: %s',
	'Dl_upload_traffic' => 'Filstorleken för upplaggda kommer att minska den totala trafficen. Betraktar detta genom att välja filstorleken!',
	'Dl_upload_traffic_count' => 'Också minska den totala trafficen för upplaggda',
	'Dl_use_hacklist' => 'Aktivera hacklista',
	'Dl_users_without_group' => 'Användare utan medlemskap i en användargrupp',
	'Dl_white_explain' => 'Gratis nedladdning utan traffic räknas för registrerade användare',
	'Dl_yes' => 'Ja',
	'Dl_yes_reg' => 'Ja för<br />reg. Användare',
	'Download_path' => 'Sökvägen till nerladdningar, t.ex. <b>nerladdningar/</b>',
	'Downloads' => 'Nerladdningar',
	'Must_select_download' => 'Välj en  nerladdning.',
	'Number_recent_dl_on_portal' => 'Antal nyligen nerladdningar som visas på portalen',
	'Recent_downloads' => 'Senaste nerladdningar',
	'User_allow_fav_download_email' => 'Aktivera e-post till förändringar på favorit nerladdningar',
	'User_allow_fav_download_popup' => 'Aktivera forum meddelande till förändringar på favorit nerladdningar',
	'User_allow_new_download_email' => 'Aktivera e-post för nya nerladdningar',
	'User_allow_new_download_popup' => 'Aktivera forum meddelande för nya nerladdningar',
	'User_download_email' => 'E-post<br />meddelande',
	'User_download_popup' => 'Forum<br />Meddelande',
	'User_download_notify_type' => 'Typ av forum meddelande',
	'User_download_notify_type_popup' => 'Popup',
	'User_download_notify_type_message' => 'Meddelande på forumets sidhuvud',
	'Dl_edit_own_downloads' => 'Användare kan redigera egna filer',
	'Dl_report_confirm_code' => 'Vänligen ange bekräftelsekoden här för att rapportera denna nedladdning som bruten:',
	'Dl_shorten_extern_links' => 'Förkortade visade externa nedladdnings länkar',
	'Dl_physical_quota_explain' => 'Om denna kvot (för närvarande %s används) är nådd, kommer inte fler uppladdningar att tillåtas',
	'Dl_blue_explain' => 'Ingen mer övergripande traffic kvar denna månad!',
	'Dl_blue_explain_file' => 'Ingen mer fil traffic kvar denna månad!',
	'Dl_blue_explain_foot' => 'Ingen mer total traffic eller fil/kategori traffic kvar denna månad!',
	'Dl_green_explain' => 'Ladda Ner! Inga avdrag från användarkonto.',
	'Dl_grey_explain' => 'Ladda Ner! Extern källa. Inga avdrag från användarkonto.',
	'Dl_red_explain' => 'Inte nog traffic eller poster<br />(%s poster krävs). Spamma inte! Spammare kommer automatiskt att blockeras!',
	'Dl_red_explain_alt' => 'Inte nog traffic eller poster (%s poster krävs). Spamma inte! Spammare kommer automatiskt att blockeras!',
	'Dl_red_explain_perm' => 'Inga rättigheter att ladda ner!',
	'Dl_yellow_explain' => 'Ladda Ner! Traffic kommer att dras av från användarkonto.',
	'Dl_config_explain' => 'Aktivera och avaktivera olika funktioner och/eller inställningar.',
	'Dl_cat_edit_explain' => 'Hantera kategorierna för Nerladdnings MOD.',

/*
* build in add on cash to traffic
*/
	'Dl_cash_to_traffic' => 'Växla kontanter till traffic',
	'Dl_cash_to_traffic_explain' => 'Ställ in mellan kontant valuta och Ladda Ner traffic. Utbytet kommer att förändras till fulla värdet av den valuta till hela beloppet på traffic.',
	'Dl_cash_currency' => 'Kontant valuta',
	'Dl_cash_exchange' => 'Växla: 1 %s till %s traffic',
	'Dl_cash_current_amount' => 'Du har %s %s',

/*
* new on Download MOD 5.0.10: Blacklist for filetypes
*/
	'Dl_ext_blacklist' => 'Svartlistade filtyper',
	'Dl_use_ext_blacklist' => 'Aktivera svartlista för filtyper',
	'Dl_extention' => 'Nya förbjudna fil tillägg',
	'Dl_extentions' => 'Förbjudna fil tillägg',
	'Dl_add_extention' => 'Lägg Till Fil tillägg',
	'Dl_confirm_delete_extention' => 'Är du säker på att släppa tillägget <b>%s</b>?',
	'Dl_confirm_delete_extentions' => 'Är du säker på att släppa tillägget <b>%s</b>?',
	'Dl_delete_extention_confirm' => 'Släpp fil tillägget från svartlistan',
	'Dl_delete_extentions_confirm' => 'Släpp fil tillägget från svartlistan',
	'Extention_removed' => 'Fil tillägget successfullt släppt från svartlistan.',
	'Extentions_removed' => 'Fil tillägget successfullt släppt från svartlistan.',
	'Click_return_extblacklistadmin' => 'Klicka %shär%s för att återgå till Fil tilläggets svartlista',
	'Dl_forbidden_extention' => 'Detta fil tillägget är för närvarande inte tillåten!<br />Vänligen gå tillbaka och använd en annan filtyp.',
	'Dl_forbidden_ext_explain' => 'Förbjudet fil tillägg: %s',
	'Dl_ext_blacklist_explain' => 'Ange fil tillägget som ska bannlysas för uppladdning med detta MOD.<br />De bannlysta tilläggen som är tillagda iIcy Phoenix ACP kommer också att användas.<br />Dessa inkluderar inte existerande nerladdningar.',

/*
* new on Download MOD 5.0.12: Disable time edit informations
*/
	'Dl_disable_popup_notify' => 'Tillåt att inaktivera tid redigerings information om att redigera en nedladdning',

/*
* new on Download MOD 5.0.15: Banlist and report broken downloads
*/
	'Dl_acp_banlist' => 'Bannlista',
	'Dl_user_id' => 'Användar ID',
	'Dl_confirm_delete_ban_values' => 'Är du säker på att du vill ta bort dessa bannlist poster?',
	'Dl_banlist_updated' => 'Bannlista successfullt uppdaterad',
	'Dl_banned' => 'Du är bannlyst och kan inte ladda ner någon fil!',
	'Click_return_banlistadmin' => 'Klicka %shär%s för att återgå till bannlistan',
	'Dl_broken' => 'Rapportera en bruten nerladdning',
	'Dl_broken_mod' => 'Återställ brutet nerladdnings status',
	'Dl_broken_cur' => 'Den här nedladdningen är för närvarande redovisad som bruten',
	'Dl_report_broken' => 'Tillåt rapportering av brutna nerladdningar',
	'Dl_a_guest' => 'en gäst',
	'Dl_favorite_add' => 'Meddela mig om förändringar i denna nerladdning',
	'Dl_favorite_drop' => 'Ta bort meddelanden om den här nerladdningen',
	'Dl_favorite' => 'Ladda Ner Favoriter',
	'Dl_acp_banlist_explain' => 'Härifrån kan du skriva in olika värden för att förbjuda tillträde till nerladdningar.<br />Varje värde kommer att användas samtidigt, antingen om de är angivna som en datauppsättning.',

/*
* new on Download MOD 5.1.0
*/
	'Dl_report_broken_lock' => 'Avaktivera nerladdningen när den rapporteras som bruten',
	'Dl_report_broken_message' => 'Visa meddelande om bruten nerladdning bara om den är inaktiverat, också',
	'Dl_report_broken_vc' => 'Aktivera visuell bekräftelse för att rapportera en bruten nerladdning',
	'Dl_visual_confirmation' => 'Aktivera visuell bekräftelse för att ladda ner en fil',
	'Dl_off_guests' => 'Inte för gäster',

/*
* new on Download MOD 5.1.1
*/
	'Dl_icon_free_for_reg' => 'Visa den vita nerladdnings ikonen för gäster',

/*
* new on Download MOD 5.1.3
*/
	'Dl_latest_comments' => 'Visar de senaste X kommentaren på nerladdnings detaljer',

/*
* new on Download MOD 5.2.0 - The Bug Tracker !!!!!!!!!!!! -------------  * :-(((((
*/
	'Dl_bug_tracker' => 'Bug Tracker',
	'Dl_bug_tracker_file' => 'för denna nerladdning',
	'Dl_bug_tracker_cat' => 'Aktivera Bug Tracker',

	'Confirm_delete_bug_report' => 'Är du säker på att du vill ta bort den här felrapporten?',
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
	'Dl_bug_report_no_title' => 'Du har inte angett någon rubrik för denna felrapport!',
	'Dl_bug_report_no_text' => 'Du har inte angett någon beskrivning för denna felrapport!',
	'Dl_bug_report_added' => 'Felrapporten framgångsrikt tilllagd',
	'Click_return_bug_tracker' => 'Klicka %shär%s för att återgå till bug tracker.',
	'Dl_bug_report_status_text' => 'Någon text för den nya statusen (kommer att skickas per e-post till författaren av denna felrapport)',
	'Dl_bug_report_status_update' => 'uppdatera status',
	'Dl_filter_bt_own' => 'Visa mina rapporter',
	'Dl_filter_bt_assign' => 'Visa mina tilldelningar',

	'Dl_user_download_limit_flag' => 'Begränsa antalet nedladdningar per månad',
	'Dl_user_download_limit' => 'Max antal nedladdningar per månad',
	)
);

$lang['Dl_report_status'][0] = 'ny';
$lang['Dl_report_status'][1] = 'visad';
$lang['Dl_report_status'][2] = 'pågår';
$lang['Dl_report_status'][3] = 'oavslutad';
$lang['Dl_report_status'][4] = 'slutförd';
$lang['Dl_report_status'][5] = 'droppad';
$lang['Dl_bug_report_email_status'] = 'Detta meddelande är för ny status:
--------------------
%s
--------------------';

?>