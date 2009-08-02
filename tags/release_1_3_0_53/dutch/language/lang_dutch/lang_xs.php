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
* Vjacheslav Trushkin (http://www.stsoftware.biz)
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
	'Extreme_Styles' => 'eXtreme Styles',
	'xs_title' => 'eXtreme Styles mod',
	
	'xs_file' => 'Bestand',
	'xs_template' => 'Template',
	'xs_id' => 'ID',
	'xs_style' => 'Stijl',
	'xs_styles' => 'Stijlen',
	'xs_users' => 'Gebruikers',
	'xs_options' => 'Opties',
	'xs_comment' => 'Opmerking',
	'xs_upload_time' => 'Uploadtijd',
	'xs_select' => 'Selecteer',
	
	'xs_continue' => 'Hervat',   // button
	
	'xs_click_here_lc' => 'Klik hier',
	'xs_edit_lc' => 'Bewerk',

/*
* navigation
*/
	'xs_config_shownav' => array(
		   'Configuratie',
		   'Installeer stijlen',
		   'Deinstalleer stijlen',
		   'Standaard stijl',
		   'Beheer cache',
		   'Importeer stijlen',
		   'Exporteer stijlen',
		   'Kopieer stijlen',
		   'Download stijlen',
		   'Bewerk templates',
		   'Bewerk stijlen',
		   'Exporteer database',
		   'Controleer op updates',
	   ),

/*
* frame_top.tpl
*/
	'xs_menu_lc' => 'Extreme Stijlen Modmenu',
	'xs_support_forum_lc' => 'Ondersteuningsforum',
	'xs_download_styles_lc' => 'Download stijlen',
	'xs_install_styles_lc' => 'Installeer stijlen',

/*
* index.tpl
*/

	'xs_main_comment1' => 'Dit is het eXtreme Styles mod hoofdmenu. Er zijn een groot aantal functies in deze interface, daarom is deze pagina er als een soort gids. Er is een korte uitleg over elke functie onder de functienaam.<br /><br />Notitie: Deze mod vervangt het phpBB stijlenbeheer. In deze lijst vindt je de standaard phpBB-functies niet terug, maar deze functies zijn nu geoptimaliseerd en hebben extra functies.<br /><br />Heb je vragen, ga dan naar <a href="http://www.phpbbstyles.com" target="_blank">ondersteuningsforum</a> waar je hulp kunt krijgen voor deze mod.', 
	'xs_main_comment2' => 'De eXtreme Styles mod stelt een beheerder in staat om complete stijlen op te slaan in .style-bestanden. Stijlen worden opgeslagen in een klein gecomprimeerd bestand om zodoende problemen te voorkomen bij het downloaden en uploaden van vele bestanden tegelijk. Stijlbestanden zijn gecomprimeerd zodat downloaden en uploaden efficienter verloopt dan het downloaden en uploaden van de gewone bestanden.', 
	'xs_main_comment3' => 'Alle functies van het stijlenbeheer zijn vervangen door deze van de eXtreme Styles mod.<br /><br /><a href="{URL}">Klik hier</a> om het menu weer te geven.', 
	'xs_main_title' => 'eXtreme Styles navigatiemenu',
	'xs_menu' => 'eXtreem stijlenmenu',

	'xs_manage_styles' => 'Beheer Stijlen', 
	'xs_import_export_styles' => 'Importeer/Exporteer stijlen', 
	'xs_install_uninstall_styles' => 'Installeer/Deinstalleer stijlen', 
	'xs_edit_templates' => 'Wijzig templates', 
	'xs_other_functions' => 'Overige functies',

	'xs_configuration' => 'Configuratie', 
	'xs_configuration_explain' => 'Deze functie stelt je in staat om de eXtreme Styles configuratie te wijzigen.', 
	'xs_default_style' => 'Standaard stijl', 
	'xs_default_style_explain' => 'Deze functie stelt je in staat om de standaard forumstijl te wijzigen, en schakelt de gebruikers automatisch om naar de nieuwe standaardstijl.', 
	'xs_manage_cache' => 'Beheer cache', 
	'xs_manage_cache_explain' => 'Deze functie stelt je in staat om de opgeslagen bestanden te beheren.', 
	'xs_import_styles' => 'Importeer stijlen', 
	'xs_import_styles_explain' => 'Deze functie stelt je in staat om .style-bestanden te downloaden en te installeren.', 
	'xs_export_styles' => 'Exporteer stijlen', 
	'xs_export_styles_explain' => 'Deze functie stelt je in staat om stijlen op je forum op te slaan als een .style-bestand en deze makkelijk te verplaatsen naar een ander forum of website.', 
	'xs_clone_styles' => 'Kloon stijlen', 
	'xs_clone_styles_explain' => 'Deze functie stelt je in staat om op een snelle manier stijlen of een template te klonen.', 
	'xs_download_styles' => 'Download stijlen', 
	'xs_download_styles_explain' => 'Deze functie stelt je in staat om op een snelle manier stijlen van websites te downloaden en te installeren. Je kunt zelf een lijst van websites samenstellen.', 
	'xs_install_styles' => 'Installeer stijlen', 
	'xs_install_styles_explain' => 'Deze functie stelt je in staat om stijlen te installeren die al zijn geupload naar je forum.', 
	'xs_uninstall_styles' => 'Deinstalleer stijlen', 
	'xs_uninstall_styles_explain' => 'Deze functie stelt je in staat om stijlen van je forum te verwijderen.', 
	'xs_edit_templates_explain' => 'Deze functie stelt je in staat om online tpl-bestanden te bewerken.', 
	'xs_edit_styles_data' => 'Bewerk stijlgegevens', 
	'xs_edit_styles_data_explain' => 'Deze functie stelt je in staat om stijlvariabelen te wijzigen. Bij sommige stijlen kan dit gebruikt worden, maar de meeste stijlen gebruiken een css-bestand.', 
	'xs_export_styles_data' => 'Exporteer stijlgegevens', 
	'xs_export_styles_data_explain' => 'Deze functie stelt je in staat om je stijlvariabelen op te slaan in theme_info.cfg.', 
	'xs_check_for_updates' => 'Controleer op updates', 
	'xs_check_for_updates_explain' => 'Deze functie stelt je in staat om een controle te doen op bijgewerkte versies van stijlen en mods die geïnstalleerd zijn op je forum.', 

	'xs_set_configuration_lc' => 'Stel configuratie in', 
	'xs_set_default_style_lc' => 'Stel standaardstijl in', 
	'xs_manage_cache_lc' => 'Beheer cache', 
	'xs_import_styles_lc' => 'Importeer stijlen', 
	'xs_export_styles_lc' => 'Exporteer stijlen', 
	'xs_clone_styles_lc' => 'Kloon stijlen', 
	'xs_uninstall_styles_lc' => 'Deinstalleer stijlen', 
	'xs_edit_templates_lc' => 'Bewerk templates', 
	'xs_edit_styles_data_lc' => 'Bewerk stijlgegevens', 
	'xs_export_styles_data_lc' => 'Exporteer stijlgegevens', 
	'xs_check_for_updates_lc' => 'Controleer op updates', 

/*
* ftp.tpl, ftp functions
*/

	'xs_ftp_comment1' => 'Om deze functie te kunnen gebruiken, moet je de bestand uploadmethode selecteren. Als je FTP kiest, dan wordt een wachtwoord niet opgeslagen en eXtreme Styles zal je elke keer hierom vragen als je functies selecteert die FTP toegang nodig hebben. Kies je voor lokaal bestandssysteem, zorg er dan vooor dat alle benodigde mappen beschrijfbaar zijn.', 
	'xs_ftp_comment2' => 'Om deze functie te kunnen gebruiken, moet je de FTP instellingen opgeven. Een wachtwoord wordt niet opgeslagen en eXtreme Styles zal je elke keer hierom vragen als je functies selecteert die FTP toegang nodig hebben.', 
	'xs_ftp_comment3' => 'Waarschuwing: FTP functies zijn uitgeschakeld op deze server. Je kunt geen functionaliteiten gebruiken van eXtreme Styles die FTP toegang nodig hebben.', 

	'xs_ftp_title' => 'FTP Configuratie', 

	'xs_ftp_explain' => 'FTP wordt gebruikt om nieuwe stijlen te uploaden. Indien je de functie voor het importeren van stijlen wilt gebruiken, dan moet je de FTP instellingen maken. eXtreme Styles probeert je instellingen automatisch op te gebruiken.', 

	'xs_ftp_error_fatal' => 'FTP functies zijn uitgeschakeld op deze server. Kan niet verder gaan.', 
	'xs_ftp_error_connect' => 'FTP fout: kan geen verbinding maken met {HOST}', 
	'xs_ftp_error_login' => 'FTP fout: kan niet inloggen', 
	'xs_ftp_error_chdir' => 'FTP fout: kan directory niet wijzigen naar {DIR}', 
	'xs_ftp_error_nonphpbbdir' => 'FTP fout: je hebt een ongeldige map opgegeven. Er zijn geen phpBB bestanden in deze map', 
	'xs_ftp_error_noconnect' => 'Kan niet verbinden met de FTP server', 
	'xs_ftp_error_login2' => 'Ongeldig ftp loginnaam of wachtwoord',

	'xs_ftp_log_disabled' => 'ftp functies zijn uitgeschakeld op deze server. script kan niet verder gaan.', 
	'xs_ftp_log_connecting' => 'Verbinden met {HOST}', 
	'xs_ftp_log_noconnect' => 'kan niet verbinden met {HOST}', 
	'xs_ftp_log_connected' => 'Verbonden. inloggen in...', 
	'xs_ftp_log_nologin' => 'Kan niet inloggen als {USER}', 
	'xs_ftp_log_loggedin' => 'Ingelogd', 
	'xs_ftp_log_end' => 'Uitvoeren script beeindigd', 
	'xs_ftp_log_nopwd' => 'Fout: kan inhoud van huidige map niet verkrijgen', 
	'xs_ftp_log_nomkdir' => 'Fout: kan {DIR} niet maken', 
	'xs_ftp_log_mkdir' => 'Gemaakte  {DIR}', 
	'xs_ftp_log_nochdir' => 'Fout: kan map niet wijzigen naar {DIR}', 
	'xs_ftp_log_normdir' => 'Fout: kan {DIR} niet verwijderen', 
	'xs_ftp_log_rmdir' => 'Verwijderde map {DIR}', 
	'xs_ftp_log_chdir' => 'Map gewijzigd naar {DIR}', 
	'xs_ftp_log_noupload' => 'Fout: kan bestand niet uploaden {FILE}', 
	'xs_ftp_log_upload' => 'Geuploade bestand {FILE}', 
	'xs_ftp_log_nochmod' => 'Waarschuwing: kan bestand niet CHMODDen {FILE}', 
	'xs_ftp_log_chmod' => 'CHMOD bestand {FILE} naar {MODE}', 
	'xs_ftp_log_invalidcommand' => 'Fout: onbekend commando: {COMMAND}', 
	'xs_ftp_log_chdir2' => 'Wijzig huidige map terug naar {DIR}', 
	'xs_ftp_log_nochdir2' => 'Kan map niet wijzigen naar {DIR}', 

	'xs_ftp_config' => 'FTP Configuratie', 
	'xs_ftp_select_method' => 'Selecteer uploadmethode', 
	'xs_ftp_select_local' => 'Gebruik lokaal bestandssysteem (geen configuratie nodig)', 
	'xs_ftp_select_ftp' => 'Gebruik FTP (maak hieronder de FTP instellingen)', 
	
	'xs_ftp_settings' => 'FTP instellingen', 
	'xs_ftp_host' => 'FTP host', 
	'xs_ftp_login' => 'FTP login', 
	'xs_ftp_path' => 'FTP pad naar phpBB', 
	'xs_ftp_pass' => 'FTP wachtwoord', 
	'xs_ftp_remotedir' => 'Map', 

	'xs_ftp_host_guess' => ' (waarschijnlijk "{HOST}" [<a href="javascript: void(0)" onclick="{CLICK}">stel host in</a>])', 
	'xs_ftp_login_guess' => ' (waarschijnlijk "{LOGIN}" [<a href="javascript: void(0)" onclick="{CLICK}">stel host in</a>])', 
	'xs_ftp_path_guess' => ' (waarschijnlijk "{PATH}" [<a href="javascript: void(0)" onclick="{CLICK}">stel pad in</a>])', 


/*
* config.tpl
*/
	'xs_config_updated' => 'Configuratie bijgewerkt.', 
	'xs_config_updated_explain' => 'Je moet deze pagina vernieuwen om de nieuwe configuratie effect te laten hebben. <a href="{URL}">Klik hier</a> om de pagina te vernieuwen.', 
	'xs_config_warning' => 'Waarschuwing: cache kan niet beschreven worden.', 
	'xs_config_warning_explain' => 'Cachemap is niet beschrijfbaar. eXtreme Styles kan proberen dit probleem te verhelpen.<br /><a href="{URL}">Klik hier</a> om de toegangsmodus te wijzigen om de map te cachen.<br /><br />Als cache niet werkt op je server, voor wat voor reden dan ook, geen probleem - eXtreme Styles<br />verlaagd de snelheid meerder keren, zelfs zonder cache.', 
	
	'xs_config_maintitle' => 'eXtreme Styles mod Configuratie', 
	'xs_config_subtitle' => 'Dit is de configuratie voor eXtreme Styles. Als je niet weet wat sommige variabelen betekenen, wijzig ze dan niet.', 
	'xs_config_title' => 'eXtreme Styles mod v{VERSION} instellingen', 
	'xs_config_cache' => 'Cacheconfiguratie', 
	
	'xs_config_navbar' => 'Laat zien op linkerframe:', 
	'xs_config_navbar_explain' => 'Je kunt selecteren welke items je wilt zien in het linkerframe in het beheerderspaneel.', 
	
	'xs_config_def_template' => 'Standaard templatemap', 
	'xs_config_def_template_explain' => 'Als een benodigd tpl-bestand niet gevonden wordt in de huidige templatemap (dit kan gebeuren als je phpBB verkeerd gemod hebt) dan zal het templatesysteem zoeken naar hetzelfde bestand in een gerelateerde map (alsof de huidige template "myTemplate" is en het script het bestand "myTemplate/myfile.tpl" nodig heeft. Laat leeg om deze functie uit te schakelen.', 

	'xs_config_check_switches' => 'Controleer switches tijdens het opnieuw opbouwen', 
	'xs_config_check_switches_explain' => 'Deze functie controleert op fouten in templates. Door dit uit te schakelen, verhoogt de opbouwsnelheid, maar de opbouwer slaat mogelijke fouten over in templates als deze fouten bevat.<br /><br />Slimme controle controleert templates op fouten en hersteld alle bekende fouten (er zijn enkele bekende typfouten in verschillende mods). Werkt iets langzamer dan eenvoudige controle.<br /><br />Maar soms lijkt de template foutloos als controle is uitgeschakeld; dit komt door een slechte html-codering - neem contact op met de persoon die het tpl-bestand geschreven heeft om het probleem te verhelpen.<br /><br />Indien de cachefunctie is uitgeschakeld, schakel deze dan in voor een snellere compilatie.', 
	'xs_config_check_switches_0' => 'Uit', 
	'xs_config_check_switches_1' => 'Slimme controle', 
	'xs_config_check_switches_2' => 'Eenvoudige controle', 

	'xs_config_show_errors' => 'Laat fouten zien als bestanden verkeerd zijn geincluded in tpl-bestanden', 
	'xs_config_show_error_explain' => 'Deze functie schakelt fouten aan/uit in tpl-bestanden die de gebruiker incorrect &lt;!-- INCLUDE filename --&gt;', 
	
	'xs_config_tpl_comments' => 'Voeg tpl-bestandsnamen toe in html', 
	'xs_config_tpl_comments_explain' => 'Deze functie voegt commentaar toe aan html code dat stijlontwerpers in staat stelt om vast te stellen welk tpl-bestand er wordt weergegeven.', 
	
	'xs_config_use_cache' => 'Gebruik cache', 
	'xs_config_use_cache_explain' => 'Cache wordt opgeslagen op schijf en het versneld het templatesysteem omdat er geen template opnieuw opgebouwd hoeft te worden als het weergegeven wordt.', 
	
	'xs_config_auto_compile' => 'Cache automatisch opslaan', 
	'xs_config_auto_compile_explain' => 'Dit automatiseert de templateopbouwer die niet gecached zijn en bewaard worden in de cachemap.', 
	
	'xs_config_auto_recompile' => 'Bouw cache automatisch opnieuw op', 
	'xs_config_auto_recompile_explain' => 'Dit zal de templates automatisch opnieuw opbouwen als een template is gewijzigd.', 
	
	'xs_config_php' => 'Extensie van cache bestandsnamen', 
	'xs_config_php_explain' => 'Dit is de extensie van de gecachte bestanden. Bestanden worden opgeslagen in php-formaat, dus de standaardextensie is "php". Voeg de punt (.) niet toe', 
	
	'xs_config_back' => '<a href="{URL}">Klik hier</a> om terug te gaan naar de configuratie.', 
	'xs_config_sql_error' => 'Bijwerken van algemene configuratie mislukt voor {VAR}', 

// Debug info
	'xs_debug_header' => 'Debuginformatie', 
	'xs_debug_explain' => 'Dit is debuginformatie. Wordt gebruikt om problemen op te lossen bij de configuratie van de cache.', 
	'xs_debug_vars' => 'Templatevariabelen', 
	'xs_debug_tpl_name' => 'Templatebestandsnaam:', 
	'xs_debug_cache_filename' => 'Cachebestandsnaam:', 
	'xs_debug_data' => 'Debuggegevens:', 
	
	'xs_check_hdr' => 'Controleer cache op %s', 
	'xs_check_filename' => 'Fout: ongeldige bestandsnaam', 
	'xs_check_openfile1' => 'Fout: kan bestand "%s" niet openen. Zal proberen om mappen te maken...', 
	'xs_check_openfile2' => 'Fout: kan bestand "%s" voor de tweede keer niet openen. Ik geef het op...', 
	'xs_check_nodir' => 'Controleer "%s" - deze map bestaat niet.', 
	'xs_check_nodir2' => 'Fout: kan directory "%s" niet maken - controleer de permissies.', 
	'xs_check_createddir' => 'Directory "%s" is toegevoegd', 
	'xs_check_dir' => 'Controleer "%s" - map bestaat.', 
	'xs_check_ok' => 'Bestand "%s" geopend om te schrijven. Alles lijkt oke.', 
	'xs_error_demo_edit' => 'Je kan geen bestanden bewerken in een demomodus',
	'xs_error_not_installed' => 'eXtreme Styles mod is niet geinstalleerd. Je bent vergeten het bestand includes/template.php te uploaden',

/*
* chmod
*/
	'xs_chmod' => 'CHMOD', 
	'xs_chmod_return' => '<br /><br /><a href="{URL}">Klik hier</a> om terug te gaan naar de configuratie.', 
	'xs_chmod_message1' => 'Configuratie gewijzigd.', 
	'xs_chmod_error1' => 'Kan toegangsmodus niet wijzigen om map op te slaan', 


/*
* default style
*/
	'xs_def_title' => 'Stel standaardstijl in', 
	'xs_def_explain' => 'Deze functie stelt je in staat om snel van stijl te veranderen, en ook om de gebruikers snel te laten overschakelen van de ene stijl naar de andere stijl.', 
	
	'xs_styles_set_default' => 'Stel als standaard in', 
	'xs_styles_no_override' => 'Overschrijf de gebruikersinstellingen niet', 
	'xs_styles_do_override' => 'Overschrijf de gebruikersinstellingen', 
	'xs_styles_switch_all' => 'Schakel alle gebruikers om naar deze stijl', 
	'xs_styles_switch_all2' => 'Schakel alle gebruikers om naar:', 
	'xs_styles_defstyle' => 'Standaardstijl', 
	'xs_styles_available' => 'Beschikbare stijlen', 
	'xs_styles_make_public' => 'Publiceer stijl', 
	'xs_styles_make_admin' => 'Alleen als beheerdersstijl', 
	'xs_styles_users' => 'Gebruikerslijst', 


/*
* cache management
*/
	'xs_manage_cache_explain2' => 'Deze functie stelt je in staat om opgeslagen of verwijderde stijlen opnieuw op te bouwen.', 
	'xs_clear_all_lc' => 'Alles leegmaken', 
	'xs_compile_all_lc' => 'Alles opnieuw opbouwen', 
	'xs_clear_cache_lc' => 'Leegmaken cache', 
	'xs_compile_cache_lc' => 'Bouw cache opnieuw op', 
	'xs_cache_confirm' => 'Als je veel stijlen hebt, kan dit een zware serverbelasting tot gevolg hebben. Weet je zeker dat je door wilt gaan?', 
	
	'xs_cache_nowrite' => 'Fout: kan cachemap niet openen', 
	'xs_cache_log_deleted' => 'Verwijder {FILE}', 
	'xs_cache_log_nodelete' => 'Fout: kan bestand {FILE} niet verwijderen', 
	'xs_cache_log_nothing' => 'Niets om te verwijderen voor {TPL} template', 
	'xs_cache_log_nothing2' => 'Niets om te verwijderen in cachemap', 
	'xs_cache_log_count' => '{NUM} succesvol verwijderd', 
	'xs_cache_log_count2' => 'Fout bij verwijderen van {NUM} bestanden', 
	'xs_cache_log_compiled' => 'Opnieuw opbouwen: {NUM} bestanden', 
	'xs_cache_log_errors' => 'Fouten: {NUM}', 
	'xs_cache_log_noaccess' => 'Fout: kan {DIR} niet openen', 
	'xs_cache_log_compiled2' => 'Opnieuw opbouwen: {FILE}', 
	'xs_cache_log_nocompile' => 'Fout in het opnieuw opbouwen: {FILE}', 

/*
* export/import/download/clone
*/
	'xs_import_explain' => 'Deze functie stelt je in staat om stijlen te importeren. Het kan ook automatisch stijlen installeren en bijwerken.<br /><br />Notitie: Als je enige mods heb toegevoegd (behalve voor de eXtreme Styles mod) op dit forum, dan moet je voorzichtig zijn wanneer je stjlen gaat importeren, omdat sommige stijlen niet compatibel zijn met jouw forum. Je kunt alleen stijlen importeren die dezelfde modificaties hebben die je geconfigureerd hebt voor jouw forum.', 
	
	'xs_import_lc' => 'Importeer', 
	'xs_list_files_lc' => 'Laat bestanden zien', 
	'xs_delete_file_lc' => 'Verwijder bestand', 
	'xs_export_style_lc' => 'Exporteer stijl', 
	
	'xs_import_no_cached' => 'Er zijn geen opgeslagen stijlen om te importeren', 
	'xs_add_styles' => 'Voeg stijlen toe', 
	'xs_add_styles_web' => 'Download van het web', 
	'xs_add_styles_web_get' => 'Pak het', 
	'xs_add_styles_copy' => 'Kopieer van lokaal bestand', 
	'xs_add_styles_copy_get' => 'Kopieer', 
	'xs_add_styles_upload' => 'Upload vanaf computer', 
	'xs_add_styles_upload_get' => 'Upload', 
	
	'xs_export_style' => 'Exporteer Stijl', 
	'xs_export_style_explain' => 'Deze functie stelt je in staat om een stijl te exporteren als een enkel bestand. Dit enkele bestand is erg klein - kleiner dan een .zip bestand (het is gecomprimeerd met gzip, dat beter werkt dan zip).', 
	
	'xs_export_style_title' => 'Exporteer template "{TPL}"', 
	'xs_export_tpl_name' => 'Exporteer als (template naam)', 
	'xs_export_style_names' => 'Selecteer stijl(en) om te exporteren', 
	'xs_export_style_name' => 'Te exporteren stijl (stijlnaam)', 
	'xs_export_style_comment' => 'Opmerking', 
	'xs_export_where' => 'Naar waar exporteren', 
	'xs_export_where_download' => 'Download als bestand', 
	'xs_export_where_store' => 'Opslaan als bestand op server',
	'xs_export_where_store_dir' => 'Map', 
	'xs_export_where_ftp' => 'Upload via FTP', 
	'xs_export_filename' => 'Exporteer bestandsnaam', 
	
	'xs_download_explain2' => 'Deze functie stelt je in staat om snel stijlen te downloaden van verschillende websites. Klik op de link van de website en je wordt doorgescahkeld naar een stijldownloadpagina.<br /><br />Je kunt ook een lijst van websites beheren.', 
	
	'xs_download_locations' => 'Download Locaties', 
	'xs_edit_link' => 'Wijzig link', 
	'xs_add_link' => 'Link toevoegen', 
	'xs_link_title' => 'Linktitel', 
	'xs_link_url' => 'Link URL', 
	'xs_delete' => 'Verwijder', 
	
	'xs_style_header_error_file' => 'Kan lokaal bestand niet openen', 
	'xs_style_header_error_server' => 'Fout op server: ', 
	'xs_style_header_error_invalid' => 'Ongeldige bestandshoofd', 
	'xs_style_header_error_reason' => 'Fout bij lezen van bestandshoofd: ', 
	'xs_style_header_error_incomplete' => 'Bestand is niet volledig', 
	'xs_style_header_error_incomplete2' => 'Ongeldige bestandsgrootte. Waarschijnlijk is het bestand niet volledig.', 
	'xs_style_header_error_invalid2' => 'Ongeldig bestand. Waarschijnlijk is het bestand niet eXtreme Styles mod-compatibel of van een ongeldige versie.', 
	'xs_error_cannot_open' => 'Kan bestand niet openen.', 
	'xs_error_decompress_style' => 'Fout bij uitpakken bestand. Waarschijnlijk is het bestand corrupt.', 
	'xs_error_cannot_create_file' => 'Kan "{FILE}" niet maken', 
	'xs_error_cannot_create_tmp' => 'Kan tijdelijk bestand "{FILE}" niet maken', 
	'xs_import_invalid_file' => 'Ongeldig bestand', 
	'xs_import_incomplete_file' => 'Niet volledig bestand', 
	'xs_import_uploaded' => 'Stijl geupload.', 
	'xs_import_installed' => 'Stijl geupload en geïnstalleerd.', 
	'xs_import_notinstall' => 'Stijl geupload, maar er was een fout tijdens het installeren van de stijl (sql fout).', 
	'xs_import_notinstall2' => 'Stijl geupload, maar er was een fout tijdens het installeren van de stijl: er zijn geen stijlen gevonden in theme_info.cfg', 
	'xs_import_notinstall3' => 'Stijl geupload, maar er was een fout tijdens het installeren van de stijl: er is geen ingang voor "{STYLE}" gevonden in theme_info.cfg', 
	'xs_import_notinstall4' => 'Stijl geupload, maar er was een fout tijdens het installeren van de stijl: kan de volgende themes_id informatie niet vinden', 
	'xs_import_notinstall5' => 'Stijl geupload, maar er was een fout tijdens het installeren van de stijl: kan de stijlentabel niet bijwerken', 
	'xs_import_nodownload' => 'Kan stijl niet downloaden van {URL}', 
	'xs_import_nodownload2' => 'Kan stijl niet kopieren van {URL}', 
	'xs_import_nodownload3' => 'Bestand niet geupload.', 
	'xs_import_uploaded2' => 'Stijl gedownload. Je kunt deze nu importeren.<br /><br /><a href="{URL}">Klik hier</a> om de stijl te importeren.', 
	'xs_import_uploaded3' => 'Stijl gekopieerd. Je kunt deze nu importeren.<br /><br /><a href="{URL}">Klik hier</a> om de stijl te importeren.', 
	'xs_import_uploaded4' => 'Stijl geupload. Je kunt deze nu importeren.<br /><br /><a href="{URL}">Klik hier</a> om de stijl te importeren.', 
	'xs_export_no_open_dir' => 'Kan map {DIR} niet openen', 
	'xs_export_no_open_file' => 'Kan bestand {FILE} niet openen', 
	'xs_export_no_read_file' => 'Fout bij lezen van bestand {FILE}', 
	'xs_no_theme_data' => 'Kan stijlgegevens voor geselecteerde template niet verkrijgen', 
	'xs_no_style_info' => 'Kan stijlinformatie niet verkrijgen',
	'xs_export_noselect_themes' => 'Je moet minstens één stijl selecteren', 
	'xs_export_error' => 'Kan template "{TPL}" niet exporteren:', 
	'xs_export_error2' => 'Kan template "{TPL}" niet exporteren: stijl is leeg', 
	'xs_export_saved' => 'Stijl is opgeslagen als "{FILE}"', 
	'xs_export_error_uploading' => 'Fout bij uploaden bestand', 
	'xs_export_uploaded' => 'Bestand geupload.', 
	'xs_clone_taken' => 'Deze stijlnaam is al in gebruik.', 
	'xs_error_new_row' => 'Er kan geen nieuwe rij ingevoegd worden in de tabel.', 
	'xs_theme_cloned' => 'Stijl is gekloond.', 
	'xs_invalid_style_name' => 'Ongeldige stijlnaam.', 
	'xs_clone_style_exists' => 'Deze template bestaat reeds', 
	'xs_clone_no_select' => 'Je moet minstens één stijl selecteren om te clonen.', 
	'xs_no_themes' => 'Stijl is niet gevonden in de database.', 
	
	'xs_import_back' => '<a href="{URL}">Klik hier</a> om terug te gaan naar de importstijlenpagina.', 
	'xs_import_back_download' => '<a href="{URL}" target="main">Klik hier</a> om terug te gaan naar de downloads.', 
	'xs_export_back' => '<a href="{URL}">Klik hier</a> om terug te gaan naar de exportstijlenpagina.', 
	'xs_clone_back' => '<a href="{URL}">Klik hier</a> om terug te gaan naar de kloonstijlenpagina.', 
	'xs_download_back' => '<a href="{URL}">Klik hier</a> om terug te gaan naar de downloads.', 
	
	'xs_import_tpl' => 'Importeer Template "{TPL}"', 
	'xs_import_tpl_comment' => 'Deze functie upload je template naar je forum. Als deze templatenaam al bestaat op je forum, zal deze overschreven worden, dus je kunt hier ook stijlen mee bijwerken.<br /><br />Deze functie kan ook stijlen automatisch installeren. Als je een stijl wilt installeren nadat deze geimporteerd is, selecteer dan één of meerdere stijlen hieronder.', 
	'xs_import_tpl_filename' => 'Bestandsnaam:', 
	'xs_import_tpl_tplname' => 'Templatenaam:', 
	'xs_import_tpl_comment2' => 'Commentaar:', 
	'xs_import_select_styles' => 'Selecteer stijl(en) om te installeren:', 
	'xs_import_install_def_lc' => 'Maak standaard forumstijl', 
	'xs_import_install_style' => 'Installeer stijl:', 
	'xs_import' => 'Importeer', 
	
	'xs_import_list_contents' => 'Inhoud van bestand: ', 
	'xs_import_list_filename' => 'Bestandsnaam: ', 
	'xs_import_list_template' => 'Template: ', 
	'xs_import_list_comment' => 'Commentaar: ', 
	'xs_import_list_styles' => 'Stijl(en): ', 
	'xs_import_list_files' => 'Bestanden ({NUM}):', 
	'xs_import_download_lc' => 'Download bestand', 
	'xs_import_view_lc' => 'Bekijk bestand', 
	'xs_import_file_size' => '({NUM} bytes)', 
	
	'xs_import_nogzip' => 'Deze functie benodigt Gzip-compressie, en dit wordt niet ondersteund op deze server.', 
	'xs_import_nowrite_cache' => 'Er kan niet naar cache geschreven worden. Voor schrijven naar cache is dit een voorwaarde voor deze functie. Controleer modconfiguratie.<br /><br /><a href="{URL1}">Klik hier</a> om de cache beschrijfbaar te maken.<br /><br /><a href="{URL2}">Klik hier</a> om terug te gaan naar de importpagina.', 
	
	'xs_import_download_warning' => 'Dit brengt je naar een externe website waar je snel een stijl kunt downloaden door een paar simpele kliks met de eXtreme Styles importfunctie.', 
	
	'xs_clone_style' => 'Kloon Stijl', 
	'xs_clone_style_explain' => 'Deze functie stelt je in staat om snel een stijl of template te klonen.<br /><br />Waarschuwing: Als je een kopie van een template maakt, zorg er dan voor dat je toestemming van de auteur hebt (behalve voor subSilver - met deze template mag je doen wat je wilt). Normaal gesproken laten auteurs het toe om hun template te modificeren, maar een gemodificeerde stijl mag niet gedistribueerd worden.', 
	'xs_clone_style_explain2' => 'Deze functie stelt je in staat om een nieuwe stijl voor een template te maken. Deze functie kopieert geen bestanden - het voegt een nieuwe ingang toe aan de database voor je nieuwe stijl. De oude en nieuwe stijl delen dezelfde templates.', 
	'xs_clone_style_explain3' => 'Voer de naam van de nieuwe stijl in die je gaat maken en klik op de "Kloon" button.', 
	'xs_clone_style_explain4' => 'Met deze functie kun je te een template klonen. Je kunt ook alle stijlenklonen die gekoppeld zijn met die template. Later kun je de tpl-bestanden wijzigen, de nieuwe en oude template worden niet gewijzigd.', 
	
	'xs_clone_style_lc' => 'Kloon stijl', 
	'xs_clone_style2' => 'Kloon stijl "{STYLE}":', 
	'xs_clone_style3' => 'Kloon Template "{STYLE}"', 
	'xs_clone_newdir_name' => 'Nieuwe template (map) naam:', 
	'xs_clone_select' => 'Selecteer stijl(en) om te klonen:', 
	'xs_clone_select_explain' => 'Je moet minstens één stijl selecteren.', 
	'xs_clone_newname' => 'Nieuwe stijlnaam:', 


/*
* install/uninstall
*/
	'xs_install_styles_explain2' => 'Dit is een lijst van stijlen die zijn geupload, maar die nog niet geïnstalleerd op je forum. Klik op de "Installeer" button van de stijl die je wilt installeren, of selecteer meerdere stijlen en klik op de "Bevestig" button.', 
	'xs_uninstall_styles_explain2' => 'Dit is een lijst van stijlen die geïnstalleerd zijn op je forum. Klik op de "Deinstalleer" button om stijl(en) van je forum te verwijderen. Deinstalleren is veilig - alle gebruikers die gebruik maken van een stijl die je verwijderd, worden automatisch omgezet naar de standaard forumstijl.', 
	
	'xs_install' => 'Installeer', 
	'xs_install_lc' => 'installeer', 
	'xs_uninstall' => 'Deinstalleer', 
	'xs_remove_files' => 'Verwijder bestanden', 
	'xs_style_removed' => 'Stijl verwijderd.', 
	'xs_uninstall_lc' => 'Deinstalleer', 
	'xs_uninstall2_lc' => 'Deinstalleer en verwijder bestanden', 
	
	'xs_install_back' => '<a href="{URL}">Klik hier</a> om terug te gaan naar stijleninstallatie.', 
	'xs_uninstall_back' => '<a href="{URL}">Klik hier</a> om terug te gaan naar stijlende-installatie.', 
	'xs_goto_default' => '<a href="{URL}">Klik hier</a> om de standaardstijl te wijzigen.', 
	
	'xs_install_installed' => 'Stijl(en) geïnstalleerd.', 
	'xs_install_error' => 'Fout bij installeren van stijl.', 
	'xs_install_none' => 'Er zijn geen nieuwe stijlen om te installeren. Alle beschikbare stijlen zijn al geïnstalleerd.', 
	
	'xs_uninstall_default' => 'Je kunt de standaardstijl niet verwijderen. Om de standaardstijl te wijzigen, <a href="{URL}">klik hier</a>.', 

/*
* export theme_info.cfg
*/
	'xs_export_styles_data_explain2' => 'Deze functie bewaard de stijlgegevens in theme_info.cfg. Het kan gebruikt worden om databaseinformatie op te slaan voordat een stijl verplaatst wordt van het ene naar het andere forum.<br /><br />Notitie: Als je gebruikmaakt van de eXtreme Styles exportfunctie om een stijl te verplaatsen naar een ander forum, hoef je de theme_info.cfg niet op te slaan - dit wordt automatisch gedaan door de stijlexportfunctie.', 
	'xs_export_styles_data_explain3' => 'Selecteer de stijlen die je wilt exporteren.', 
	
	'xs_export_data_back' => '<a href="{URL}">Klik hier</a> om terug te gaan naar de exportstijlgegevenspagina.', 
	'xs_export_style_data_lc' => 'Exporteer stijlgegevens', 
	
	'xs_export_data_saved' => 'Gegevens geexporteerd.', 

/*
* edit templates (file manager)
*/
	'xs_edit_template_comment1' => 'Met deze functie kun je templates wijzigen. Hier worden alleen wijzigbare bestanden weergegeven.', 
	'xs_edit_template_comment2' => 'Met deze functie kun je templates wijzigen.', 
	'xs_edit_file_saved' => 'Bestand is opgeslagen.', 
	'xs_edit_not_found' => 'Bestand niet gevonden.', 
	'xs_edittpl_back_dir' => '<a href="{URL}">Klik hier</a> om terug te gaan naar bestandsbeheer.', 
	
	'xs_fileman_browser' => 'Bladeren', 
	'xs_fileman_directory' => 'Map:', 
	'xs_fileman_dircount' => 'Mappen ({COUNT}):', 
	'xs_fileman_filter' => 'Filter', 
	'xs_fileman_filter_ext' => 'Laat alleen bestanden zien met extensie:', 
	'xs_fileman_filter_content' => 'Laat alleen bestanden zien die bevatten:', 
	'xs_fileman_filter_clear' => 'Filter leegmaken', 
	'xs_fileman_filename' => 'Bestandsnaam', 
	'xs_fileman_filesize' => 'Grootte', 
	'xs_fileman_filetime' => 'Modificatie', 
	'xs_fileman_options' => 'Opties', 
	'xs_fileman_time_today' => '(vandaag)', 
	'xs_fileman_edit_lc' => 'Wijzig', 
	
	'xs_fileedit_search_nomatch' => 'Er zijn geen overeenkomsten gevonden', 
	'xs_fileedit_search_match1' => '1 overeenkomst vervangen', 
	'xs_fileedit_search_matches' => "Vervangen ' + count + ' overeenkomsten", 
	'xs_fileedit_noundo' => 'Er is niets om ongedaan gemaakt te worden', 
	'xs_fileedit_undo_complete' => 'Oude inhoud hersteld', 
	'xs_fileedit_edit_name' => 'Wijzig bestand:', 
	'xs_fileedit_location' => 'Locatie:', 
	'xs_fileedit_reload_lc' => 'bestand opnieuw laden',
	'xs_fileedit_download_lc' => 'download bestand', 
	'xs_fileedit_trim' => 'Automatisch spaties aan het begin en eind van het bestand verwijderen.', 
	'xs_fileedit_functions' => 'Wijzig functies', 
	'xs_fileedit_replace1' => 'Vervang', 
	'xs_fileedit_replace2' => ' door', 
	'xs_fileedit_replace_first_lc' => 'vervang eerste overeenkomst', 
	'xs_fileedit_replace_all_lc' => 'vervang alle overeenkomsten', 
	'xs_fileedit_replace_undo_lc' => 'vervangen ongedaan maken', 
	'xs_fileedit_backups' => 'Backups', 
	'xs_fileedit_backups_save_lc' => 'Backup opslaan', 
	'xs_fileedit_backups_show_lc' => 'Laat inhoud zien', 
	'xs_fileedit_backups_restore_lc' => 'Herstel', 
	'xs_fileedit_backups_download_lc' => 'Download', 
	'xs_fileedit_backups_delete_lc' => 'Verwijder', 
	'xs_fileedit_upload' => 'Upload', 
	'xs_fileedit_upload_file' => 'Uploaden bestand:', 

/*
* edit styles data (theme_info)
*/
	'xs_data_head_stylesheet' => 'CSS-stylesheet', 
	'xs_data_body_background' => 'Afbeeldingsachtergrond', 
	'xs_data_body_bgcolor' => 'Achtergrondskleur', 
	'xs_data_style_name' => 'Stijlnaam', 
	'xs_data_body_link' => 'Linkkleur', 
	'xs_data_body_text' => 'Tekstkleur', 
	'xs_data_body_vlink' => 'Bezochte linkkleur', 
	'xs_data_body_alink' => 'Actieve linkkleur', 
	'xs_data_body_hlink' => 'Hover linkkleur', 
	'xs_data_tr_color' => 'Tabelrijkleur %s', 
	'xs_data_tr_class' => 'Tabelrijclass %s', 
	'xs_data_th_color' => 'Tabelhoofdkleur %s', 
	'xs_data_th_class' => 'Tabelhoofdclass %s', 
	'xs_data_td_color' => 'Tabelcelkleur %s', 
	'xs_data_td_class' => 'Tabelcelclass %s', 
	'xs_data_fontface' => 'Lettertype %s', 
	'xs_data_fontsize' => 'Lettergrootte %s', 
	'xs_data_fontcolor' => 'Letterkleur %s', 
	'xs_data_span_class' => 'Spanclass %s', 
	'xs_data_img_size_poll' => 'Peilingafbeeldingsgrootte [px]', 
	'xs_data_img_size_privmsg' => 'Privéberichtenstatusafmeting [px]', 
	'xs_data_theme_public' => 'Openbare stijl (1 of 0)', 
	'xs_data_unknown' => 'Omschrijving is niet beschikbaar (%s)', 

	'xs_edittpl_error_updating' => 'Fout bij bijwerken van stijl.', 
	'xs_edittpl_style_updated' => 'Stijl bijgewerkt.', 
	'xs_invalid_style_id' => 'Ongeldig stijl id.', 
	
	'xs_edittpl_back_edit' => '<a href="{URL}">Klik hier</a> om terug te gaan naar wijzigen.', 
	'xs_edittpl_back_list' => '<a href="{URL}">Klik hier</a> om terug te gaan naar de stijlen lijst.', 
	
	'xs_editdata_explain' => 'Deze functie stelt je in staat om de data in de database te wijzigen voor geïnstallerde stijlen. Sommige stijlen negeren database waarden en maken in plaats hiervan, gebruik van css bestanden, en sommige stjlen maken alleen gebruik van enkele database waarden.', 
	'xs_editdata_var' => 'Variabele', 
	'xs_editdata_value' => 'Waarde', 
	'xs_editdata_comment' => 'Commentaar', 

/*
* updates
*/
	
	'xs_updates' => 'Updates', 
	'xs_updates_comment' => 'Deze functie controleert of er updates zijn voor sommige stijlen en mods. Dit werkt alleen met items die relevante updateinformatie hebben.', 
	'xs_updates_comment2' => 'Dit is het resultaat van de versiecontrole.', 
	'xs_update_total1' => 'Totaal: {NUM} items', 
	'xs_update_info1' => 'Deze beheerdersfunctie controleert op beschikbare updates van phpBB, sommige mods, en sommige geïnstalleerde stijlen op je forum. Wanneer er updates zijn, wordt er een link naar het updatebestand weergegeven.<br /><br />Voor deze functie is sockets inschakeling vereist. De meeste gratis webhosts hebben deze functie niet, dus als dit forum op een gratis host draait (zoals lycos) dan kun je de updatefunctie niet gebruiken. Staat dit forum op een normale server, dan zou alles goed moeten gaan.<br /><br />Als je op "Doorgaan" klikt, zal het script alle software die geinstalleerd is op je forum controleren. Als je website traag is, kan dit enige tijd duren. Wees geduldig en klik niet op "Stop" in je browser als het proces is vertraagd. Als je website dusdanig traag is dat er een time-out optreedt, verhoog dan de time-out waarde.', 
	'xs_update_name' => 'Naam', 
	'xs_update_type' => 'Type', 
	'xs_update_current_version' => 'Jouw versie', 
	'xs_update_latest_version' => 'Laatste versie', 
	'xs_update_downloadinfo' => 'Download URL', 
	'xs_update_timeout' => 'Updatescript timeout (seconden):', 
	'xs_update_continue' => 'Doorgaan', 


	'xs_update_total2' => 'Fouten: {NUM}', 
	'xs_update_total3' => 'Beschikbare updates: {NUM} items', 
	'xs_update_select1' => 'Selecteer items om bij te werken', 
	'xs_update_types' => array( 
		  0 => 'Onbekend', 
		  1 => 'Stijl', 
		  2 => 'Mod', 
		  3 => 'phpBB',
		  4 => 'Icy Phoenix',
	), 
	'xs_update_fileinfo' => 'Meer informatie', 
	'xs_update_nothing' => 'Er is niets om bij te werken.', 
	'xs_update_noupdate' => 'Je gebruikt al de laatste versie.', 
	
	'xs_update_error_url' => 'Fout: kan url %s niet verkrijgen', 
	'xs_update_error_noitem' => 'Fout: er is geen updateinformatie beschikbaar', 
	'xs_update_error_noconnect' => 'Fout: kan geen verbinding maken met de updateserver', 
	
	'xs_update_download' => 'Download', 
	'xs_update_downloadinfo2' => 'Download/informatie', 
	'xs_update_info' => 'Website', 
	
	'xs_permission_denied' => 'Toegang afgewezen', 
	
	'xs_download_lc' => 'Download', 
	'xs_info_lc' => 'Informatie', 

/* 
* style configuration 
*/ 
	'Template_Config' => 'Templateconfiguratie', 
	'xs_style_configuration' => 'Templateconfiguratie', 
	)
);

?>