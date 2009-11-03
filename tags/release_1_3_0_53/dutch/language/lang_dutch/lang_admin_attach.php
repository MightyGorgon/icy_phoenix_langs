<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin_attach.php 76 2009-01-31 21:11:24Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* (c) 2002 Meik Sievertsen (Acyd Burn)
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
// Modules, this replaces the keys used
	'Control_Panel' => 'Controlepaneel',
	'Shadow_attachments' => 'Schaduwbijlagen',
	'Forbidden_extensions' => 'Verboden extensies',
	'Extension_control' => 'Extensiebeheer',
	'Extension_group_manage' => 'Extensiegroepenbeheer',
	'Special_categories' => 'Speciale categorieën',
	'Sync_attachments' => 'Synchroniseer bijlagen',
	'Quota_limits' => 'Quotalimieten',

// Attachments -> Management
	'Attach_settings' => 'Bijlage Instellingen',
	'Manage_attachments_explain' => 'Hier kan je de algemene instellingen voor de Bijlage MOD veranderen. Als je de testinstellingen knop indrukt, doet de Bijlage MOD een paar systeemcontroles om er zeker van te zijn dat de MOD goed zal werken. Als je problemen hebt met het uploaden van bestanden, voer alstublieft deze test uit, om een gedetaileerde foutenbericht te krijgen.',
	'Attach_filesize_settings' => 'Bijlage Bestandsgrootte Instellingen',
	'Attach_number_settings' => 'Bijlage Aantal Instellingen',
	'Attach_options_settings' => 'Bijlageopties',

	'Upload_directory' => 'Uploadmap',
	'Upload_directory_explain' => 'Voer het relatieve pad van je Icy Phoenix installatie naar de bijlage uploadmap in. Bijvoorbeeld, voer \'files\' in als je Icy Phoenix installatiemap staat op http://www.jouwdomein.com/icyphoenix en de bijlage uploadmap op http://jouwdomein.com/icyphoenix/files.',
	'Attach_img_path' => 'Pad naar het plaatje voor bijlagen',
	'Attach_img_path_explain' => 'Dit plaatje is weergegeven naast bijlagelinks in de berichten. Laat dit veld leeg als je geen plaatje wilt laten weergeven. Deze instelling zal worden overschreven door de instelling in de extensiegroepenbeheer.',
	'Attach_topic_icon' => 'Bijlage onderwerpicoon',
	'Attach_topic_icon_explain' => 'Dit icoon wordt weergegeven voor een onderwerp waarin bijlagen geplaatst zijn. Laat dit veld leeg als je geen icoon wilt laten weergeven.',
	'Attach_display_order' => 'Bijlage weergavevolgorde',
	'Attach_display_order_explain' => 'Hier kan je kiezen of je de bijlagen wil weergeven in aflopende bestandsvolgorde (nieuwe bijlage eerst) of oplopende bestandsvolgorde (oude bijlage eerst).',
	'Show_apcp' => 'Geef het nieuwe bijlage plaatspaneel weer',
	'Show_apcp_explain' => 'Kies of je het bijlage plaatspaneel wilt weergeven (ja) of de oude methode met twee velden om bijlagen te plaatsen en te bewerken (nee) in je berichtvenster. Het uiterlijk ervan is erg moeilijk te beschrijven, daarom is het het beste om het te proberen.',

	'Max_filesize_attach' => 'Bestandsgrootte',
	'Max_filesize_attach_explain' => 'Maximum bestandsgrootte voor bijlagen. Een waarde van 0 betekent \'oneindig\'. Deze instelling is beperkt door je serverconfiguratie. Bijvoorbeeld, als je PHP configuratie alleen bijlagen die kleiner zijn dan 2 MB toestaat, kan deze niet overschreven worden door deze instelling.',
	'Attach_quota' => 'Bijlagequota',
	'Attach_quota_explain' => 'Hier kan je een maximum voor ALLE bijlagen invoeren. Een waarde van 0 betekent \'oneindig\'.',
	'Max_filesize_pm' => 'Maximum schijfruimte in privéberichtenmap',
	'Max_filesize_pm_explain' => 'Maximum schijfruimte die bijlagen kunnen gebruiken in de privéberichtenmap van elke gebruiker. Een waarde van 0 betekent \'oneindig\'.',
	'Default_quota_limit' => 'Standaard quotalimiet',
	'Default_quota_limit_explain' => 'Hier is het mogelijk om een standaard quotalimiet automatisch te bepalen voor nieuwe geregistreerde gebruikers en gebruikers zonder een gedefinieerde quotalimiet. De optie \'Quotalimiet\' is het gebruik van de bijlagequota uitgeschakeld, in plaats daarvan worden de standaardinstellingen gebruikt die je in de beheerderspaneel hebt ingesteld.',
	
	'Max_attachments' => 'Maximum aantal bijlagen',
	'Max_attachments_explain' => 'Het maximum aantal bijlagen toegestaan is in een bericht.',
	'Max_attachments_pm' => 'Maximum aantal bijlagen in een privébericht',
	'Max_attachments_pm_explain' => 'Het maximum aantal bijlagen toegestaan is in een privébericht.',

	'Disable_mod' => 'Bijlage MOD uitschakelen',
	'Disable_mod_explain' => 'Deze optie is vooral voor het testen van nieuwe templates en thema\'s, hiermee schakel je alle bijlagefuncties uit, behalve die in het beheerderspaneel',
	'PM_Attachments' => 'Bijlagen in privéberichten toestaan',
	'PM_Attachments_explain' => 'Bijlagen toevoegen wel of niet toestaan in privéberichten.',
	'Ftp_upload' => 'FTP upload inschakelen',
	'Ftp_upload_explain' => 'FTP Upload functie in- of uitschakelen. Als je het op \'ja\' zet, moet je de bijlage FTP Instellingen ingeven en de uploadmap wordt dan niet meer gebruikt.',
	'Attachment_topic_review' => 'Wil je bijlagen weergeven in het onderwerpvoorbeeldvenster?',
	'Attachment_topic_review_explain' => 'Als je \'ja\' kiest, zullen alle bijlagen worden weergegeven in het onderwerpvoorbeeldvenster als je een antwoord plaatst.',
	
	'Ftp_server' => 'FTP Upload Server',
	'Ftp_server_explain' => 'Hier kun je het IP-adres of de FTP hostnaam van de server invoeren die je gebruikt voor het uploaden van je bijlagen. Als je dit veld leeg laat, zal de server waar het Icy Phoenix forum op is geinstalleerd worden gebruikt. Merk op dat het niet is toegestaan om ftp:// of iets dergelijks als een adres te gebruiken, maar simpelweg ftp.nep.com of, wat een stuk sneller is, het IP-adres.',
	
	'ftp_username' => 'Je FTP gebruikersnaam',
	'ftp_password' => 'Je FTP wachtwoord',
	
	'Attach_ftp_path' => 'FTP pad naar je uploadmap',
	'Attach_ftp_path_explain' => 'De map waar de bijlagen opgeslagen zullen worden. Deze map hoeft niet ge-chmod te worden. Voer hier geen IP-adres of FTP-adres in, dit veld is alleen bedoeld voor het FTP pad.<br />Bijvoorbeeld: /home/web/uploads',
	'Ftp_download_path' => 'Downloadlink naar je ftp pad',
	'Ftp_download_path_explain' => 'Geef je FTP pad in, waar je bijlagen zijn opgeslagen.<br /> Als je een FTP server op afstand gebruikt, geef dan het volledige pad in, bijvoorbeeld http://www.mijnopslag.com/icyphoenix/upload.<br />Als je een lokale host gebruikt om de bestanden op te slaan, kan je het pad relatief naar de Icy Phoenix map ingeven, bijvoorbeeld \'upload\'.<br />Een aansluitende / zal worden verwijderd.<br />Laat dit veld leeg, als het FTP pad niet beschikbaar is vanaf het internet. Als dit veld leeg is kun je downloadmethode niet gebruiken.',
	'Ftp_passive_mode' => 'FTP Passive Mode inschakelen',
	'Ftp_passive_mode_explain' => 'Het PASV commando vraagt dat de server op afstand een poort opent voor de gegevensverbinding en het adres van die poort teruggeeft. De server op afstand luistert op die poort en de cliënt verbindt ernaar.',
	
	'No_ftp_extensions_installed' => 'Je kan de FTP Upload methoden niet gebruiken, omdat FTP extensies niet in je PHP installatie zijn gecompileerd.',

// Attachments -> Shadow Attachments
	'Shadow_attachments_explain' => 'Hier kan je de bijlagegegevens verwijderen die aan een bericht zijn toegewezen, maar niet meer op het bestandssysteem aanwezig zijn, en de bijlagen verwijderen die op het bestandssysteem aanwezig zijn, maar niet zijn toegewezen aan een bericht. Je kan een bijlage downloaden of bekijken door op de link klikken, als er geen link is, is de bijlage niet aanwezig.',
	'Shadow_attachments_file_explain' => 'Alle bijlagebestanden die bestaan in je bestandensysteem maar niet zijn toegewezen aan een bestaand bericht verwijderen.',
	'Shadow_attachments_row_explain' => 'Alle geplaatste bijlagegegevens voor bestanden die niet bestaan in je bestandensysteem verwijderen.',
	'Empty_file_entry' => 'Lege bestandsingang',

// Attachments -> Sync
	'Sync_thumbnail_recreated' => 'Thumbnail aangemaakt voor bijlage: %s', // replace %s with physical Filename
	'Sync_thumbnail_resetted' => 'Thumbnail voor bijlage %s is gereset.', // replace %s with physical Filename
	'Attach_sync_finished' => 'Bijlagesynchronisatie is afgerond.',
	'Sync_topics' => 'Onderwerpen synchroniseren',
	'Sync_posts' => 'Berichten synchroniseren',
	'Sync_thumbnails' => 'Thumbnails synchroniseren',


// Extensions -> Extension Control
	'Manage_extensions' => 'Extensiebeheer',
	'Manage_extensions_explain' => 'Hier kun je je bestandextensies beheren. Als je een extensie niet toestaat of wel toestaat om geupload te kunnen worden, gebruik daarvoor de extensiegroepenbeheer.',
	'Explanation' => 'Verklaring',
	'Extension_group' => 'Extensiegroep',
	'Invalid_extension' => 'Ongeldige extensie',
	'Extension_exist' => 'De extensie %s bestaat al', // replace %s with the Extension
	'Unable_add_forbidden_extension' => 'De extensie %s is verboden, je kan deze dan ook niet toevoegen in de toegestane extensielijst', // replace %s with Extension

// Extensions -> Extension Groups Management
	'Manage_extension_groups' => 'Extensiegroepenbeheer',
	'Manage_extension_groups_explain' => 'Hier kun je extensiegroepen toevoegen, bewerken en aanpassen, je kan extensiegroepen uitschakelen, toewijzen aan een speciale categorie, de downloadmechanisme veranderen en je kan een uploadicoon definieren, welke wordt weergegeven voor de bijlage in de groep.',
	'Special_category' => 'Speciale categorie',
	'Category_images' => 'Afbeeldingen',
	'Category_stream_files' => 'Streambestanden',
	'Category_swf_files' => 'Flashbestanden',
	'Allowed' => 'Toegestaan',
	'Allowed_forums' => 'Toegestane forums',
	'Ext_group_permissions' => 'Groeppermissies',
	'Download_mode' => 'Downloadmethode',
	'Upload_icon' => 'Uploadicoon',
	'Max_groups_filesize' => 'Maximum bestandsgrootte',
	'Extension_group_exist' => 'De extensiegroep %s bestaat al', // replace %s with the group name
	'Collapse' => '+',
	'Decollapse' => '-',

// Extensions -> Special Categories
	'Manage_categories' => 'Speciale categorieënbeheer',
	'Manage_categories_explain' => 'Hier kun je de speciale categorieën configureren. Je kan speciale parameters en condities voor de speciale categorieën die behoren bij een extensiegroep opzetten en toevoegen.',
	'Settings_cat_images' => 'Instellingen voor speciale categorie: afbeeldingen',
	'Settings_cat_streams' => 'Instellingen voor speciale categorie: streambestanden',
	'Settings_cat_flash' => 'Instellingen voor speciale categorie: flashbestanden',
	'Display_inlined' => 'Afbeeldingen inline weergeven',
	'Display_inlined_explain' => 'Geef aan of de afbeeldingen direct in het bericht worden weergeven (ja), of dat de afbeeldingen worden weergeven als een link',
	'Max_image_size' => 'Maximum afbeeldingsafmetingen',
	'Max_image_size_explain' => 'Hier kan je de maximum afmeting ingeven van afbeeldingen die toegevoegd kunnen worden (breedte x hoogte in pixels).<br />Als het op 0x0 staat is deze functie uitgeschakeld. Met sommige afbeeldingen zal deze mogelijkheid niet werken vanwege de beperkingen van PHP.',
	'Image_link_size' => 'Afbeeldingafmeting link',
	'Image_link_size_explain' => 'Als de aangegeven afmeting van een afbeelding wordt overschreden, zal de afbeelding worden weergegeven als een link, in plaats van dat het direct wordt weergeven,<br />als "Afbeeldingen inline weergeven" is ingeschakeld (breedte x hoogte in pixels).<br />Als die op 0x0 staat, is deze functie uitgeschakeld. Met sommige afbeeldingen zal deze mogelijkheid niet werken vanwege de beperkingen van PHP.',
	'Assigned_group' => 'Toegewezen groep',

	'Image_create_thumbnail' => 'Thumbnail aanmaken',
	'Image_create_thumbnail_explain' => 'Maak altijd een thumbnail. Deze mogelijkheid gaat boven bijna alle instellingen in deze speciale categorie, behalve die van de maximale afmeting van een afbeelding. Met deze mogelijkheid zal een thumbnail worden weergegeven in het bericht, de gebruiker kan er op klikken om de echte afbeelding weer te geven.<br />Houdt er rekening mee dat voor deze mogelijkheid Imagick geinstalleerd moet zijn, als deze niet is geinstalleerd of als de veilige modus is ingeschakeld zal de GD extensie van PHP worden gebruikt. Als het afbeeldingstype niet wordt ondersteund door PHP, zal deze functie niet worden gebruikt.',
	'Image_min_thumb_filesize' => 'Minimum thumbnail bestandsgrootte',
	'Image_min_thumb_filesize_explain' => 'Als de afbeelding kleiner is dan deze aangegeven bestandsgrootte, zal er geen thumbnail worden aangemaakt, omdat het klein genoeg is.',
	'Image_imagick_path' => 'Imagick programma (complete pad)',
	'Image_imagick_path_explain' => 'Geef de pad in waar de imagick conversieprogramma te vinden is, in de meeste situaties /usr/bin/convert (in Windows: c:/imagemagick/convert.exe).',
	'Image_search_imagick' => 'Imagick zoeken',
	
	'Use_gd2' => 'Maak gebruik van de GD2 extensie',
	'Use_gd2_explain' => 'PHP kan gecompileerd worden met GD1 of GD2 extensies voor de opbouw van de afbeeldingen. Om thumbnails te maken zonder imagemagick gebruikt de Attachment Mod twee verschillende methoden, gebaseerd op de selectie hier. Als je thumbnails van slechte kwaliteit zijn, probeer dan deze instelling te veranderen.',
	'Attachment_version' => 'Bijlage Mod Versie %s', // %s is the version number

// Extensions -> Forbidden Extensions
	'Manage_forbidden_extensions' => 'Verboden Extensiesbeheer',
	'Manage_forbidden_extensions_explain' => 'Hier kun je verboden extensies toevoegen of verwijderen. De extensies php, php3 and php4 zijn standaard verboden om veiligheidsredenen, je kan ze daarom ook niet verwijderen.',
	'Forbidden_extension_exist' => 'De verboden extensie %s bestaat al', // replace %s with the extension
	'Extension_exist_forbidden' => 'De extensie %s is gedefinieerd in je toegestane extensies, verwijder alstublieft deze voordat je het hier toevoegt.',  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
	'Group_permissions_title' => 'Extensiegroepenpermissies -> \'%s\'', // Replace %s with the Groups Name
	'Group_permissions_explain' => 'Hier kan je de geselecteerde extensiegroep voor bepaalde forums van jouw keuze beperken (gedefinieerd in het toegestane forumtekstvak). Gebruikelijk is om groepextensies toe te staan voor alle forums waar de gebruiker bijlagen kan toevoegen (zoals de Bijlage Mod het altijd al heeft gedaan). Voeg het forum waar je de extensiegroep (de extensies in deze groep) toegestaan wil toe, de standaard ALLE FORUMS zal verdwijnen als je forums toevoegt. Je kan ALLE FORUMS altijd toevoegen. Als je forums aan je forum toevoegt en de permissie staat op ALLE FORUMS zal deze niet veranderen. Maar als je de toegang tot bepaalde forums hebt veranderd en beperkt, moet je hier terugkomen om je nieuwe forum toe te voegen. Het is eenvoudig om dit automatisch te doen, maar dit zal je verplichten een behoorlijk aantal bijlage te wijzigen, daarom heb ik ervoor gekozen het te doen zoals het nu is. Denk er aan dat al je forums hier zullen staan.',
	'Note_admin_empty_group_permissions' => 'OPMERKING:<br />Bij de forums die hieronder staan, kunnen de gebruikers normaal gesproken bijlagen toevoegen, maar aangezien we hier geen extensiegroep toegevoegd mag worden, kunnen je gebruikers geen bijlagen toevoegen. Als ze het proberen, zullen ze fouten krijgen. Misschien wil je de permissie \'Bijlagen invoegen\' op ADMIN zetten op deze forums.<br /><br />',
	'Add_forums' => 'Forums toevoegen',
	'Add_selected' => 'Geselecteerde toevoegen',
	'Perm_all_forums' => 'ALLE FORUMS',

// Attachments -> Quota Limits
	'Manage_quotas' => 'Bijlage quotalimietenbeheer',
	'Manage_quotas_explain' => 'Hier kan je de quotagrenzen toevoegen, verwijderen en veranderen. De vastgelegde grens kan later aan groepen en gebruikers toegewezen worden. Om een gebruiker een quota toe te wijzen, moet je naar de gebruikersbeheer gaan (Gebruikers->Beheer), daar kun je een gebruiker uitkiezen en kun je zijn/haar quota veranderen of toewijzen. Om een groep een quota toe te wijzen, moet je naar groepenbeheer gaan (Groepen->Beheer), daar kun je een groep uitkiezen en kun voor een groep een quota veranderen of toewijzen. Wanneer je graag wilt zien welke gebruikers en groepen welke quotas hebben, klik eenvoudig op \'Overzicht\', dan vind je op de linkerkant van de pagina een quotabeschrijving.',
	'Assigned_users' => 'Toegewezen gebruikers',
	'Assigned_groups' => 'Toegewezen groepen',
	'Quota_limit_exist' => 'De quotalimiet %s bestaat al.', // Replace %s with the Quota Descriptionn

// Attachments -> Control Panel
	'Control_panel_title' => 'Bijlage Controlepaneel',
	'Control_panel_explain' => 'Hier kun je alle bijlagen gebaseerd op gebruikers, bijlagen, bezoeken etc, bekijken en beheren.',
	'File_comment_cp' => 'Bestandsbeschrijving',

// Control Panel -> Search
	'Search_wildcard_explain' => 'Gebruik * als een wildcard voor de ontbrekende tekens',
	'Size_smaller_than' => 'Bijlagegrootte kleiner dan (bytes)',
	'Size_greater_than' => 'Bijlagegrootte groter dan (bytes)',
	'Count_smaller_than' => 'Downloadaantal kleiner dan',
	'Count_greater_than' => 'Downloadaantal groter dan',
	'More_days_old' => 'Meer dan zoveel dagen oud',
	'No_attach_search_match' => 'Geen bijlagen voldoen aan jouw zoekcriteria',

// Control Panel -> Statistics
	'Number_of_attachments' => 'Aantal bijlagen',
	'Total_filesize' => 'Totale bestandsgrootte',
	'Number_posts_attach' => 'Aantal berichten met bijlagen',
	'Number_topics_attach' => 'Aantal onderwerpen met bijlagen',
	'Number_users_attach' => 'Aantal gebruikers die bijlagen geplaatst hebben',
	'Number_pms_attach' => 'Aantal bijlagen in privéberichten',

// Control Panel -> Attachments
	'Statistics_for_user' => 'Bijlagestatistieken voor %s', // replace %s with username
	'Size_in_kb' => 'Grootte (KB)',
	'Downloads' => 'Downloads',
	'Post_time' => 'Berichttijd',
	'Posted_in_topic' => 'In onderwerp geplaatst',
	'Submit_changes' => 'Veranderingen bevestigen',

// Sort Types
	'Sort_Attachments' => 'Bijlagen',
	'Sort_Size' => 'Grootte',
	'Sort_Filename' => 'Bestandsnaam',
	'Sort_Comment' => 'Opmerking',
	'Sort_Extension' => 'Extensie',
	'Sort_Downloads' => 'Downloads',
	'Sort_Posttime' => 'Berichttijd',
	'Sort_Posts' => 'Berichten',

// View Types
	'View_Statistic' => 'Statistieken',
	'View_Search' => 'Zoeken',
	'View_Username' => 'Gebruikersnaam',
	'View_Attachments' => 'Bijlagen',

// Successfully updated
	'Attach_config_updated' => 'Bijlageconfiguratie is succesvol bijgewerkt',
	'Click_return_attach_config' => 'Klik %shier%s om terug te keren naar bijlageconfiguratie',
	'Test_settings_successful' => 'Configuratietest beëindigd, de configuratie schijnt te functioneren.',

// Some basic definitions
	'Attachments' => 'Bijlagen',
	'Attachment' => 'Bijlage',
	'Extensions' => 'Extensies',
	'Extension' => 'Extensie',

// Auth pages
	'Auth_attach' => 'Bestanden plaatsen',
	'Auth_download' => 'Bestanden downloaden',
	)
);

?>