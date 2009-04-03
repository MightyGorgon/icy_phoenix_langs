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
	'Click_return_categoryadmin' => 'Klik %shier%s om terug te keren naar categoriebeheer',
	'Click_return_dl_config' => 'Klik %shier%s om terug te keren naar downloadconfiguratie',
	'Click_return_downloadadmin' => 'Klik %shier%s om terug te keren naar downloadabeheer',
	'Click_return_downloads' => 'Klik %shier%s om terug te keren naar downloadcategorieën',
	'Click_return_download_details' => 'Klik %shier%s om terug te keren naar download',
	'Click_return_file_management' => 'Klik %shier%s om terug te keren naar downloadsbeheer',
	'Click_return_modcp_approve' => 'Klik %shier%s om terug te keren naar ongekeurde downloads',
	'Click_return_modcp_manage' => 'Klik %shier%s om terug te keren naar moderatorpaneel',
	'Click_return_user_traffic_admin' => 'Klik %shier%s om het verkeer van een andere gebruiker aan te passen',
	'Click_return_usergroup_traffic_admin' => 'Klik %shier%s om het verkeer van een andere gebruikersgroep aan te passen',

/*
* message strings
*/
	'Dl_category_added' => 'Categorie toegevoegd',
	'Dl_category_updated' => 'Categorie bijgewerkt',
	'Dl_category_removed' => 'Categorie succesvol verwijderd',
	'DL_upload_error' => 'Fout tijdens het uploaden van de download. Ga terug en probeer het opnieuw.<br>Neem contact op met de beheerder, als de fout blijft bestaan.',
	'Dl_approve_overview' => 'Er zijn %s ongekeurde downloads. Klik hier om ze te controleren',
	'Dl_approve_overview_one' => 'Er is %s ongekeurde download. Klik hier om deze te controleren',
	'Dl_config_updated' => 'Downloadconfiguratie succesvol opgeslagen',
	'Dl_confirm_cat_delete' => 'Weet je zeker dat je de categorie <b>%s</b> wil verwijderen?',
	'Dl_confirm_delete_multiple_files' => 'Weet je zeker dat je <b>%d downloads</b> wil verwijderen?',
	'Dl_confirm_delete_single_file' => 'Weet je zeker dat je de download <b>%s</b> wil verwijderen?',
	'Dl_delete_cat_and_files' => 'Verwijder deze categorie en alle downloads',
	'Dl_delete_cat_confirm' => 'Kies een categorie. Elke download zal worden verplaatst, of gebruik een andere functie',
	'Dl_delete_cat_only' => 'Verwijder alleen deze categorie',
	'Dl_delete_file_confirm' => 'Verwijder ook de downloads',
	'Dl_empty_category' => 'Deze categorie bevat geen downloads',
	'Dl_no_access' => 'Verboden toegang!<br><br>Je hebt geen toestemming om dit bestand te downloaden!',
	'Dl_no_category' => 'Er bestaan geen categorieën. Voeg een nieuwe categorie toe voordat je de permissies aanpast.',
	'Dl_no_category_index' => 'Deze downloadsectie heeft geen categorieën',
	'Dl_no_external_url' => 'Je moet een geldige url opgeven als je een externe download wilt opgeven!',
	'Dl_no_filename_entered' => 'Je moet een download selecteren als je het wilt uploaden!',
	'Dl_no_groups_for_traffic' => 'Er zijn geen gebruikersgroepen gevonden!<br><br>Voeg een gebruikersgroep toe voordat je de downloadlimiet instelt',
	'Dl_no_more_remain_traffic' => 'Het downloadverkeer in %s is volledig gebruikt voor deze maand. Wacht tot de volgende maand of vraag het de beheerder voor meer verkeer.',
	'Dl_no_permission' => 'Verboden toegang!<br><br>Je hebt geen toestemming om dit te doen!',
	'Dl_no_upload_traffic' => 'Sorry, de uploadlimiet is overschreden. Neem contact op met de beheerder als je een bestand wil uploaden.',
	'Dl_path_not_exist' => 'De categoriepad <b>%s</b> bestaat niet!<br>Ga terug en stel een ander pad in<br>of maak een map met downloadsbeheer.',
	'Dl_permission_updated' => 'Downloadpermissies succesvol opgeslagen',
	'Dl_user_config_saved' => 'Gebruikersconfiguratie voor downloads succesvol bijgewerkt<br><br>Klik %shier%s om terug te keren naar Downloads',
	'Download_added' => 'De download is toegevoegd',
	'Download_removed' => 'De download is verwijderd',
	'Download_updated' => 'De informatie is bijgewerkt',
	'New_download' => 'Er is een download geupload of bijgewerkt.<br>Klik %shier%s om de downloads te bekijken.',
	'Dl_confirm_cat_stats_delete' => 'Weet je zeker dat je de statistische gegevens wilt verwijderen van deze categorie?<b>%s</b>?',
	'Dl_confirm_all_stats_delete' => 'Weet je zeker dat je alle statistische gegevens wilt verwijderen?',
	'Dl_confirm_cat_comments_delete' => 'Weet je zeker dat je de opmerkingen wilt verwijderen van deze categorie <b>%s</b>?',
	'Dl_confirm_all_comments_delete' => 'Weet je zeker dat je alle opmerkingen wilt verwijderen?',
	'Dl_file_not_found' => '<b>De download %s is niet gevonden!</b><br><br>Je moet zeker weten dat deze download bestaat in de map %s!',
	'Dl_no_change_edit_time' => 'Deze update niet loggen',
	'Dl_thumb_upload' => 'Thumbnail is succesvol bijgewerkt',
	'Dl_thumb_del' => 'Thumbnail is succesvol verwijderd',
	'Dl_thumb_to_big' => 'De thumbnail is te groot!<br>Alstublieft gebruik een kleiner bestand of een afbeelding die kleiner is.<br>Gebruik de \'Terug\' button van je browser en probeer het nog eens te uploaden.',
	'Dl_hotlink_permission' => 'Je bent niet bevoegd om deze download te downloaden via een directe link!',
	'Dl_vc_permission' => 'De bevestigingscode voor deze download is fout. Ga terug en probeer het nog eens.',
	'Dl_report_broken_vc_mismatch' => 'De bevestigingscode voor deze report is fout. Ga terug en probeer het nog eens.',
	'Dl_vc_not_found' => 'De bevestigingscode is niet gevonden. Ga terug en probeer het nog eens.',

/*
* page descriptions
*/
	'Dl_page_dl_hackslist' => 'Hackslist',
	'Dl_page_downloads' => 'Downloads',

/*
* commands
*/
	'Add_new_download' => 'Nieuwe download toevoegen',
	'Dl_add' => 'Toevoegen',
	'Dl_add_category' =>'Categorie toevoegen',
	'Dl_approve' => 'Goedkeuren',
	'Dl_check_file_sizes' => 'Controleer bestandsgroottes',
	'Dl_check_thumbnails' => 'Controleer thumbnails',
	'Dl_delete' => 'Verwijder',
	'Dl_down' => 'neer',
	'Dl_edit' => 'Bewerken',
	'Dl_go' => 'Ga',
	'Dl_klick_to_rate' => 'Beoordeel',
	'Dl_lock' => 'Sluit',
	'Dl_mark_all' => 'Markeer alles',
	'Dl_move' => 'Verplaats naar',
	'Dl_set' => 'Stel in',
	'Dl_unmark' => 'Markeer niets',
	'Dl_up' => 'op',
	'Dl_delete_cat' => 'Verwijder categorie',
	'Dl_stats_delete' => 'Verwijder statistieken',
	'Dl_stats_delete_all' => 'Verwijder alle statistieken',
	'Dl_comments_delete' => 'Verwijder opmerkingen',
	'Dl_comments_delete_all' => 'Verwijder alle opmerkingen',
	'Dl_sub_sort_asc' => 'Sorteer alles in deze categorie oplopend',
	'Dl_sub_sort_asc_zero' => 'Sorteer de hoofdcategorieën oplopend',

/*
* categories related
*/
	'Dl_cat_description' => 'Omschrijving',
	'Dl_cat_files' => 'Downloads',
	'Dl_cat_index' =>'Hoogste niveau',
	'Dl_cat_name' => 'Categorie',
	'Dl_cat_parent' => 'Bovenliggende categorie',
	'Dl_cat_path' =>'Pad',
	'Dl_cat_title' => 'Downloadcategorieën',
	'Dl_choose_category' => 'Kies een categorie',
	'Dl_mod_desc_allow' => 'Sta modomschrijvingen toe bij het uploaden',
	'Dl_must_approve' => 'Uploads in deze categorie moeten goedgekeurd worden',
	'Dl_statistics' => 'Schakel gedetaileerde statistieken in',
	'Dl_stats_prune' => 'Opruimen van statistiekgegevens',
	'Dl_stats_delete' => 'Verwijder statistieken',
	'Dl_stats_delete_all' => 'Verwijder alle statistieken',
	'Dl_comments_delete' => 'Verwijder opmerkingen',
	'Dl_comments_delete_all' => 'Verwijder alle opmerkingen',
	'Dl_cat_traffic' => 'Dataverkeerbeperking (nog beschikbaar: %s)',
	'Dl_cat_traffic_off' => 'Dataverkeerbeperking (ongelimiteerd)',
	'Dl_cat_traffic_main' => 'Er is nog %s dataverkeer over in deze categorie',
	'Dl_thumb_cat' => 'Sta thumbnails toe',
	'Dl_approve_comments' => 'Automatisch goedkeuren van elk nieuwe opmerking',
	'Dl_cat_rules' => 'Regels',

/*
* traffic related
*/
	'Dl_auto_traffic' => 'Automatisch dataverkeer',
	'Dl_enable_post_traffic' => 'Schakel dataverkeertoevoegingen bij berichten in',
	'Dl_group_auto_traffic' => 'Verkeer voor gebruikersgroepen',
	'Dl_newtopic_traffic' => 'Dataverkeer voor elk nieuw onderwerp',
	'Dl_overall_traffic' => 'Dataverkeer voor alle downloads per maand',
	'Dl_remain_overall_traffic' => 'Overgebleven dataverkeer deze maand: ',
	'Dl_reply_traffic' => 'Dataverkeer voor elke reactie of citaat',
	'Dl_traffic' => 'Max. dataverkeer',
	'Dl_user_auto_traffic' => 'Dataverkeer voor gebruikers',
	'Single_user_traffic_title' => 'Dataverkeer voor enkele gebruiker',
	'Traffic' => 'Dataverkeer',
	'Traffic_now' => 'Op het moment op account',
	'Usergroup_traffic_title' => 'Dataverkeer voor leden van een gebruikersgroep',
	'Users_traffic_title' => 'Dataverkeer voor alle gebruikers',
	'Dl_user_traffic_once' => 'Verlaag de downloadlimiet alleen bij de eerste download',
	'Dl_can_download_traffic' => 'Je hebt deze download al eens eerder gedownload.<br />De beheerder laat je toe om het nog eens te downloaden zonder dat het ten koste gaat van je dataverkeer.',
	'Dl_can_download_traffic_footer' => '<b>De beheerder laat op dit moment toe dat je de downloads die je al eens eerder gedownload hebt nog eens te downloaden zonder dat het ten koste gaat van je dataverkeer.</b><br /><br />',
	'Traffic_all_users_admin_explain' => 'Hier kan je het dataverkeer van alle gebruikers aanpassen.',
	'Traffic_single_user_admin_explain' => 'Hier kan je het dataverkeer voor een bepaalde gebruiker aanpassen.',
	'Traffic_usergroup_admin_explain' => 'Hier kan je het dataverkeer voor alle leden van een groep instellen.',
	'Dl_auto_traffic_explain' => 'Vanaf deze pagina kan je de dataverkeerinstellingen per maand voor downloads van een gebruiker of een gebruikersgroep instellen.',

/*
* auth values
*/
	'Dl_permissions_all' => 'Stel rechten in voor alle gebruikers',
	'Dl_auth_dl' => 'Download',
	'Dl_auth_mod' => 'Modereer',
	'Dl_auth_up' => 'Upload',
	'Dl_auth_view' => 'Bekijk',
	'Dl_permissions' => 'Downloadpermissies',
	'Dl_stop_uploads' =>'Schakel uploads uit',
	'Dl_stat_perm' => 'Permissies voor leden van de volgende gebruikersgroepen',
	'Dl_stat_perm_all' => 'Iedereen',
	'Dl_stat_perm_user' => 'Geregistreerde gebruikers',
	'Dl_stat_perm_mod' => 'Downloadmoderators',
	'Dl_stat_perm_admin' => 'Forumbeheerders',
	'Dl_auth_cread' => 'Lees opmerkingen',
	'Dl_auth_cpost' => 'Schrijf opmerkingen',
	'Dl_perm_all' => 'Iedereen',
	'Dl_perm_reg' => 'Geregistreerde gebruikers',
	'Dl_perm_grg' => 'Gebruikersgroepen',

/*
* hacks and mods related
*/
	'Dl_hack_autor' => 'Auteur',
	'Dl_hack_autor_email' => 'Auteur e-mailadres',
	'Dl_hack_autor_website' => 'Auteurwebsite',
	'Dl_hack_dl_url' => 'Download van',
	'Dl_hack_version' => 'Modversie',
	'Dl_hacklist' => 'Geef in modslijst weer',
	'Dl_hacks_list' => 'Modlijst',
	'Dl_mod_desc' => 'Hoe de mod werkt',
	'Dl_mod_list' => 'Geef extra informatie weer',
	'Dl_mod_require' => 'Heeft nodig',
	'Dl_mod_test' => 'Mod getest met/door',
	'Dl_mod_todo' => 'Nog te doen',
	'Dl_mod_warning' => 'Waarschuwingen',

/*
* moderator panel
*/
	'Dl_modcp_approve' => 'Moderatorpaneel - downloads goedkeuren',
	'Dl_modcp_edit' => 'Moderatorpaneel - downloads bewerken',
	'Dl_modcp_manage' => 'Moderatorpaneel - downloadsbeheer',
	'Dl_modcp_mod_auth' => 'Je <b>kan</b> %sdeze categorie beheren%s',

/*
* ACP file management
*/
	'Dl_check_filesizes_result' => 'Alle downloads zijn up to date en er zijn geen fouten gevonden',
	'Dl_check_filesizes_result_error' => 'De volgende downloads kunnen niet gecontroleerd worden:',
	'Dl_manage' => 'Downloadsbeheer',
	'Dl_manage_content_count' => '%s inzendingen',
	'Dl_manage_create_dir' => 'Maak deze map',
	'Dl_manage_empty_folder' => 'Deze map is leeg...',
	'Dl_manage_explain' => 'Vanuit hier kan je de downloads die te downloaden zijn beheren. Je kan de volgende functies gebruiken:<br><br>- Verwijder of verplaats ongebruikte downloads<br>- Zet downloads zonder bestaande categorie in een bestaande categorie<br>- Blader door de downloads (<i>Standaard na het openen van het beheer</i>)<br>- Maak een nieuwe map<br>- Verwijder lege map<br>- Controleer de downloadomvang voor downloads die niet extern gehost zijn<br><br><b>Attentie:</b><br>Dit gereedschap is geen vervanger van je FTP programma!<br>Functies zoals uploaden, downloads verplaatsen, downloads vervangen en anderen zijn niet mogelijk met dit gereedschap!',
	'Dl_physical_quota' => 'Schijfquota voor alle downloads',
	'Dl_unassigned_files' => 'Controleer voor niet toegewezen downloads',

/*
* statistics
*/
	'Dl_latest_downloads' => 'Laatste downloads',
	'Dl_latest_uploads' => 'Laatste uploads',
	'Dl_downloads_cur_month' => 'Downloads deze maand',
	'Dl_downloads_overall' => 'Totale downloads',
	'Dl_downloads_count' => 'Aantal downloads',
	'Dl_downloads_traffic' => 'Totale dataverkeer',
	'Dl_uploads_count' => 'Aantal uploads',
	'Dl_uploads_traffic' => 'Totale uploadverkeer',
	'Dl_pos' => 'Pos.',
	'Dl_time' => 'Tijd',
	'Dl_stats' => 'Downloadstatistieken',
	'Dl_direction' => 'Richting',
	'Dl_browser' => 'Webbrowser',
	'Dl_ip' => 'IP-adres',
	'Dl_traffic_cur_month' => 'Dataverkeer deze maand',
	'Dl_traffic_overall' => 'Totale dataverkeer',
	'Dl_guest_stat_delete' => 'Verwijder alle data van gasten',
	'Dl_no_filter' => '- geen filter -',
	'Dl_total_entries' => 'Gevonden ingangen',
	'Dl_filter' => 'Filter',
	'Dl_filter_string' => 'Gebruik * of % als wildcard',
	'Dl_guest_stats_admin' => 'Geef gastendata ook weer',
	'Dl_stat_edit' => 'bewerkt',

/*
* comments
*/
	'Dl_comment' => 'Opmerking',
	'Dl_comments' => 'Opmerkingen',
	'Dl_last_comment' => 'Laatste opmerking',
	'Dl_post_comment' => 'Schrijf',
	'Dl_view_comments' => 'Geef weer',
	'Dl_comment_edited' => 'Opmerking laatst bewerkt op %s',
	'Dl_comment_write' => 'Schrijf een opmerking',
	'Dl_comment_show' => 'Bekijk alle opmerkingen van deze download',
	'Dl_comment_delete' => 'Verwijder',
	'Dl_comment_edit' => 'Bewerk',
	'Dl_comment_added' => 'Opmerking succesvol toegevoegd',
	'Dl_comment_updated' => 'Opmerking succesvol bijgewerkt',
	'Dl_must_be_approve_comment' => 'Deze opmerking moet nog goedgekeurd worden door een moderator of beheerder!',
	'Dl_approve_overview_one_comment' => 'Er is 1 ongekeurde opmerking. Klik op de tekst om het goed te keuren.',
	'Dl_approve_overview_comments' => 'Er zijn %s ongekeurde opmerkingen. Klik op de teksten om het goed te keuren.',

/*
* ACP management main page
*/
	'Dl_acp_traffic_management' => 'Beheer de dataverkeerquota\'s en vooraf ingestelde opties',
	'Dl_acp_categories_management' => 'Beheer de categorieën en zijn permissies',
	'Dl_acp_config_management' => 'Zet de algemene configuratie',
	'Dl_acp_files_management' => 'Beheer de downloads',
	'Dl_acp_stats_management' => 'Geef weer en controleer de statistieken',
	'Dl_acp_managemant_page' => 'DownloadMOD beheer',
	'Dl_acp_managemant_page_explain' => 'Hier kun je alle instellingen en functies van de download mod beheren en veranderen.<br>Kies een van de functies hier onder en verander het naar je eigen inzicht.',

/*
* global strings
*/
	'Dl_account' => 'Je hebt deze maand <b>%s</b> dataverkeer over.',
	'Dl_add_user' => 'Deze download is toegevoegd op <b>%s</b> door <b>%s</b>',
	'Dl_all' => 'Alles',
	'Dl_Bytes' => 'B',
	'Dl_Bytes_long' => 'Bytes',
	'Dl_change_user' => ' en het laatst aangepast op <b>%s</b> door <b>%s</b>',
	'Dl_config' => 'Downloadconfiguratie',
	'Dl_days' => 'Dagen',
	'Dl_default_sort' => 'Standaard sorteermethode',
	'Dl_delay_auto_traffic' => 'Vertraag autodataverkeer vor nieuwe gebruiker',
	'Dl_delay_post_traffic' => 'Vertraag uploaddataverkeer voor nieuwe gebruiker',
	'Dl_direct_download' => 'direct',
	'Dl_detail' => 'Details',
	'Dl_disable_email' => 'Schakel meldingen per mail uit',
	'Dl_disable_popup' => 'Schakel meldingen per pop- up uit',
	'Dl_disable_email_files' => 'Schakel meldingen per mail uit',
	'Dl_disable_popup_files' => 'Schakel meldingen per pop- up uit',
	'Dl_download' => 'Download',
	'DL_edit' => 'Bijgewerkte download',
	'DL_edit_time' => 'Aantal dagen dat een aangepaste download wordt gemarkeerd',
	'Dl_extern' => 'Extern',
	'Dl_extern_up' => 'Extern',
	'Dl_file_description' => 'Omschrijving',
	'Dl_file_name' => 'Naam',
	'Dl_file_size' => 'Grootte',
	'Dl_files_title' => 'Download',
	'Dl_files_url' => 'URL',
	'Dl_free' => 'Vrije download',
	'Dl_function' => 'Functie',
	'Dl_GB' => 'GB',
	'Dl_group_name' => 'Groepnamen',
	'Dl_guest_stats_show' => 'Geef gasten weer in gedetaileerde categoriestatistieken',
	'Dl_hotlink_action' => 'Link actie voor directe downloadlinks',
	'Dl_hotlink_action_one' => 'stuur door voor details',
	'Dl_hotlink_action_two' => 'Geef bericht weer',
	'Dl_info' => 'Info',
	'Dl_is_free' => 'Vrij',
	'Dl_is_free_reg' => 'Vrij voor geregistreerde gebruikers',
	'Dl_KB' => 'KB',
	'Dl_klicks' => 'Kliks deze maand',
	'Dl_last_time' => ' Laatste download op <b>%s</b>',
	'Dl_last_time_extern' => ' Laatste download vanaf externe URL op <b>%s</b>',
	'Dl_limit_desc_on_index' => 'Aantal tekens voor de downloadomschrijvingen op Index',
	'Dl_Links_per_page' => 'Downloads per pagina',
	'Dl_MB' => 'MB',
	'Dl_method' => 'Downloadmethode',
	'Dl_method_old' => 'Oud',
	'Dl_method_new' => 'Nieuw',
	'Dl_method_quota' => 'Quota voor gebroken download leesmethode',
	'Dl_modcp_capprove' => 'Goedgekeurde opmerkingen',
	'Dl_must_be_approved' => 'Deze download moet goedgekeurd worden door een beheerder of een moderator van deze categorie.',
	'Dl_name' => 'Naam',
	'DL_new' => 'Nieuwe download',
	'DL_new_time' => 'Aantal dagen dat een nieuwe download wordt gemarkeerd',
	'Dl_no' => 'Nee',
	'Dl_no_config' => 'Gebruikersconfiguratie gesloten',
	'Dl_no_last_time' => ' Geen downloads geteld tot nu...',
	'Dl_no_mod_todo' => 'Geen mod to-do voor nu',
	'Dl_not_availible' => 'niet beschikbaar',
	'Dl_order' => 'Sorteer',
	'Dl_overall_klicks' => 'Gezamelijke kliks',
	'Dl_klicks_total' => 'Kliks maandelijks / totaal',
	'Dl_overview' => 'Overzicht van alle downloads',
	'DL_posts' => 'Aantal berichten dat een gebruiker nodig heeft om downloadtoegang te krijgen',
	'Dl_prevent_hotlink' => 'Voorkom links naar direct downloads',
	'Dl_rating' => 'Beoordeling',
	'Dl_real_filetime' => 'Laatste bestandmodificatie',
	'Dl_search_author' => 'Voor gebruikers die wat hebben geupload of downloads hebben gewijzigd',
	'Dl_show_footer_legend' => 'Geef legenda in download footer weer',
	'Dl_show_footer_stat' => 'Geef statistieken in download footer weer',
	'Dl_show_real_filetime' => 'Geef de tijd weer van de laatste bestand modificatie op de downloaddetails',
	'Dl_sort_preform' => 'Sortering uitgevoerd',
	'Dl_sort_acp' => 'Preset',
	'Dl_sort_user' => 'Gebruiker',
	'Dl_sort_user_opt' => 'Sorteer downloads op',
	'Dl_sort_user_ext' => 'met andere criteria',
	'Dl_thumb' => 'Thumbnail',
	'Dl_thumb_dim_size' => 'De maximale thumbnail afbeeldingsgrootte is %s bij %s pixels en de bestandsgrootte kleiner dan %s.',
	'Dl_thumb_max_dim' => 'Maximale afbeeldingsgrootte in pixels X bij Y',
	'Dl_thumb_max_size' => 'Maximale thumbnail bestandsgrootte',
	'Dl_total_stat' => 'Er zijn in totaal %s downloads met een omvang van %s / %s beschikbaar. Inclusief %s externe downloads.',
	'Dl_unapproved' => '<br><span>[ ongekeurd ]</span>',
	'Dl_upload' => 'Upload een download',
	'Dl_upload_file' => 'Upload',
	'Dl_upload_max_filesize' => 'Maximale bestandsgrootte wat is toegestaan voor uploads: %s',
	'Dl_upload_traffic' => 'De bestandsomvang van de uploads zal het downloadverkeer laten dalen. Let hierop bij het kiezen van de bestandsomvang!',
	'Dl_upload_traffic_count' => 'Laat het uploaddataverkeer ook dalen',
	'Dl_use_hacklist' => 'Activeer modslijst',
	'Dl_users_without_group' => 'Gebruiker zonder lidmaatschap van een gebruikersgroep',
	'Dl_white_explain' => 'Vrije download zonder dataverkeerbeperking voor geregistreerde gebruikers',
	'Dl_yes' => 'Ja',
	'Dl_yes_reg' => 'Ja, voor<br>geregistreerde gebruiker',
	'Download_path' => 'Pad naar je downloads, bijv. \'media\'',
	'Downloads' => 'Downloads',
	'Must_select_download' => 'Kies een download.',
	'Number_recent_dl_on_portal' => 'Aantal recente downloads op de portaal',
	'Recent_downloads' => 'Recente downloads',
	'User_allow_fav_download_email' => 'Schakel e-mail voor verandering van favoriete downloads in',
	'User_allow_fav_download_popup' => 'Schakel pop- up voor verandering van favoriete downloads in',
	'User_allow_new_download_popup' => 'Schakel pop- up voor nieuwe downloads in',
	'User_allow_new_download_email' => 'Schakel e-mail voor nieuwe downloads in',
	'User_download_email' => 'E-mail<br />notificatie',
	'User_download_popup' => 'Popup<br />notificatie',
	'User_download_notify_type' => 'Forumberichttype',
	'User_download_notify_type_popup' => 'Pop- up',
	'User_download_notify_type_message' => 'Bericht in de forumheader',
	'Dl_edit_own_downloads' => 'Gebruiker kan zijn/haar downloads bewerken',
	'Dl_report_confirm_code' => 'Geef de bevestigingscode voor de report naar een corrupte download in:',
	'Dl_shorten_extern_links' => 'Geef korte externe downloadlink weer',
	'Dl_physical_quota_explain' => 'Als dit quota (op het moment %s in gebruik) is bereikt, zullen uploads niet meer worden toegestaan',
	'Dl_blue_explain' => 'Geen dataverkeer meer beschikbaar deze maand!',
	'Dl_blue_explain_file' => 'Geen dataverkeer meer beschikbaar deze maand!',
	'Dl_blue_explain_foot' => 'Totaal geen dataverkeer meer beschikbaar deze maand!',
	'Dl_green_explain' => 'Download! Geen minderingen in het dataverkeer.',
	'Dl_grey_explain' => 'Download! Externe bron. Geen minderingen in het dataverkeer.',
	'Dl_red_explain' => 'Niet genoeg verkeer of berichten<br>(%s berichten benodigd). Spammers worden automatisch geblokkeerd!!',
	'Dl_red_explain_alt' => 'Niet genoeg verkeer of berichten (%s berichten benodigd). Spammers worden automatisch geblokkeerd!!',
	'Dl_red_explain_perm' => 'Geen toestemming om te downloaden!',
	'Dl_yellow_explain' => 'Download! Dataverkeer zal worden afgetrokken van het dataverkeer.',
	'Dl_config_explain' => 'Vanuit hier kan je diverse functies in- en uitschakelen en instellingen aanpassen, die deze DownloadMod bevat.',
	'Dl_cat_edit_explain' =>'Hier kan je de categorieën van de DownloadMod beheren.',

/*
* build in add on cash to traffic
*/
	'Dl_cash_to_traffic' => 'Ruil geld in voor dataverkeer',
	'Dl_cash_to_traffic_explain' => 'Vanuit hier kan je de uitwisseling tussen de valuta\'s en het dataverkeer instellen. Deze omwisseling zal geld volledig omzetten in dataverkeer.',
	'Dl_cash_currency' => 'Valuta',
	'Dl_cash_exchange' => 'Omwisselen: 1 %s in %s dataverkeer',
	'Dl_cash_current_amount' => 'Je hebt %s %s',

/*
* new on Download MOD 5.0.10: Blacklist for filetypes
*/
	'Dl_ext_blacklist' => 'Zwarte lijst bestandstypen',
	'Dl_use_ext_blacklist' => 'Schakel zwarte lijst voor bestandstypen in',
	'Dl_extention' => 'Nieuwe verboden bestandsextensie',
	'Dl_extentions' => 'Verboden bestandsextensie',
	'Dl_add_extention' => 'Voeg bestandsextensie aan',
	'Dl_confirm_delete_extention' => 'Weet je zeker dat je de extensie <b>%s</b> wilt verwijderen?',
	'Dl_confirm_delete_extentions' => 'Weet je zeker dat je de extensies <b>%s</b> wilt verwijderen?',
	'Dl_delete_extention_confirm' => 'Verwijder de bestandsextensie van de zwarte lijst',
	'Dl_delete_extentions_confirm' => 'Verwijder de bestandsextensies van de zwarte lijst',
	'Extention_removed' => 'Bestandsextensie is succesvol verwijderd van de zwarte lijst.',
	'Extentions_removed' => 'Bestandsextensies zijn succesvol verwijderd van de zwarte lijst.',
	'Click_return_extblacklistadmin' => 'Klik %shier%s om terug te keren naar de zwarte lijst voor bestandsextensies',
	'Dl_forbidden_extention' => 'De bestandsextensie is op dit moment niet toegestaan!<br />Ga terug en gebruik een andere bestandstype.',
	'Dl_forbidden_ext_explain' => 'Verboden bestandsextensies: %s',
	'Dl_ext_blacklist_explain' => 'Alle hier genoemde bestandsextensies zijn uitgeschakeld door deze MOD.<br />In de beheerderspaneel worden deze ook gebruikt.<br />Ze beïnvloeden geen bestaande downloads.',

/*
* new on Download MOD 5.0.12: Disable time edit informations
*/
	'Dl_disable_popup_notify' => 'Sta het uitgeschakelen van pop- up notificatie toe van bewerken of toevoegen van een download',

/*
* new on Download MOD 5.0.15: Banlist and report broken downloads
*/
	'Dl_acp_banlist' => 'Banlijst',
	'Dl_user_id' => 'Gebruiker ID',
	'Dl_confirm_delete_ban_values' => 'Weet je zeker dat je de ingangen uit de banlijst wilt verwijderen?',
	'Dl_banlist_updated' => 'Banlijst succesvol bijgewerkt',
	'Dl_banned' => 'Je bent geband en het is dus onmogelijk om een download te downloaden!',
	'Click_return_banlistadmin' => 'Klik %shier%s om terug te keren naar de banlijst',
	'Dl_broken' => 'Rapporteer gebroken downloads',
	'Dl_broken_mod' => 'Reset gebroken downloadstatus',
	'Dl_broken_cur' => 'Deze download is op dit moment gerapporteerd als corrupt.<br />Probeer het later nog eens.',
	'Dl_guest_report_broken' => 'Sta gasten toe om corrupte downloads te rapporteren',
	'Dl_a_guest' => 'een gast',
	'Dl_favorite_add' => 'Hou me op de hoogte van de wijzigingen van deze download',
	'Dl_favorite_drop' => 'Verwijder notificaties over deze download',
	'Dl_favorite' => 'Downloadfavorieten',
	'Dl_acp_banlist_explain' => 'Van hier kun je de verschillende waarden ingeven om iemand te bannen voor toegang tot de downloads.<br />Elke waarde wordt direct gebruikt, ook als ze worden ingegeven als een dataset.',

/*
* new on Download MOD 5.1.0
*/
	'Dl_report_broken_lock' => 'Schakel download uit als het gerapporteerd is als corrupt',
	'Dl_report_broken_message' => 'Geef een notitie weer over de corrupte download, alleen als het ook uitgeschakeld is',
	'Dl_report_broken_vc' => 'Schakel visuele bevestiging in om corrupte downloads te rapporteren',
	'Dl_visual_confirmation' => 'Schakel visuele bevestiging in om een download te kunnen downloaden',
	'Dl_off_guests' => 'Niet voor gasten',

/*
* new on Download MOD 5.1.1
*/
	'Dl_icon_free_for_reg' => 'Geef een witte downloadicoon voor gasten weer',

/*
* new on Download MOD 5.1.3
*/
	'Dl_latest_comments' => 'Geef de laatste X opmerkingen weer op detailpagina',

/*
* new on Download MOD 5.2.0 - The Bug Tracker !!!!!!!!!!!! -------------  * :-(((((
*/
	'Dl_bug_tracker' => 'Bug Tracker',
	'Dl_bug_tracker_file' => 'voor deze download',
	'Dl_bug_tracker_cat' => 'Schakel Bug Tracker in',

	'Confirm_delete_bug_report' => 'Weet je zeker dat je deze bugrapport wilt verwijderen?',
	'Dl_bug_report_id' => 'Rapport ID',
	'Dl_bug_report_title' => 'Rapporttitel',
	'Dl_bug_report_title_details' => 'Rapport',
	'Dl_bug_report_text' => 'Omschrijving',
	'Dl_bug_report_date' => 'Gerapporteerd op',
	'Dl_bug_report_php' => 'PHP',
	'Dl_bug_report_db' => 'DB',
	'Dl_bug_report_forum' => 'Forum',
	'Dl_bug_report_file' => 'Download',
	'Dl_bug_report_author' => 'Gerapporteerd door',
	'Dl_bug_report_assigned' => 'Toegewezen aan',
	'Dl_bug_report_assign_date' => 'Toegewezen op',
	'Dl_bug_report_status' => 'Status',
	'Dl_bug_report_status_date' => 'Laatste tijd van de status',
	'Dl_bug_report_detail' => 'Details',
	'Dl_bug_report_history' => 'Geschiedenis',
	'Dl_bug_report_reassign' => 'opnieuw toewijzen',
	'Dl_bug_report_assign' => 'toewijzen',
	'Dl_bug_report_unassigned' => 'niet toegewezen',
	'Dl_no_bug_tracker' => 'Er zijn geen rapporten gevonden',
	'Dl_bug_report_no_title' => 'Je hebt geen titel voor dit bugrapport opgegeven!',
	'Dl_bug_report_no_text' => 'Je hebt geen omschrijving voor dit bug rapport opgegeven!',
	'Dl_bug_report_added' => 'Bugrapport succesvol toegevoegd',
	'Click_return_bug_tracker' => 'Klik %shhier%s om terug te keren naar de bug tracker.',
	'Dl_bug_report_status_text' => 'Korte omschrijving voor de nieuwe status (wordt per mail verzonden naar de auteur van dit bugrapport)',
	'Dl_bug_report_status_update' => 'update status',
	'Dl_filter_bt_own' => 'Bekijk mijn rapporten',
	'Dl_filter_bt_assign' => 'Bekijk mijn toegewezen bugs',
	
	'Dl_user_download_limit_flag' => 'Limiet aantan downloads per maand',
	'Dl_user_download_limit' => 'Maximum aantal downloads per maand',
	)
);

$lang['Dl_report_status'][0] = 'nieuw';
$lang['Dl_report_status'][1] = 'bekeken';
$lang['Dl_report_status'][2] = 'in behandeling';
$lang['Dl_report_status'][3] = 'wachtend';
$lang['Dl_report_status'][4] = 'afgerond';
$lang['Dl_report_status'][5] = 'afgewezen';
$lang['Dl_bug_report_email_status'] = 'Dit is een bericht voor de nieuwe status:
--------------------
%s
--------------------';

?>