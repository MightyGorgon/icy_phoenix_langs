<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 80 2009-02-19 13:45:54Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group (r. 391 tot 402 nog vertalen)
*
*/

/**
*
* @Extra credits for this file
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
	'General' => 'Algemeen Beheer',
	'Users' => 'Gebruikersbeheer',
	'Groups' => 'Groepsbeheer',
	'Forums' => 'Forumbeheer',
	'Styles' => 'Stijlenbeheer',

	'Configuration' => 'Configuratie',
	'Various_Configuration' => 'Overige configuratie',
	'Permissions' => 'Permissies',
	'Manage' => 'Instellingen',
	'manage' => 'Instellingen',
	'Disallow' => 'Gebruikersnaam wiegeren',
	'Prune' => 'Automatisch opruimen',
	'Mass_Email' => 'Massa e-mail versturen',
	'Ranks' => 'Rangen',
	'Smilies' => 'Smilies',
	'Ban_Management' => 'Bannen',
	'Word_Censor' => 'Woordcensuur',
	'Export' => 'Exporteren',
	'Create_new' => 'Maken',
	'Add_new' => 'Toevoegen',
	'Backup_DB' => 'Databasebackup',
	'Restore_DB' => 'Database herstellen',
	'DB_Maintenance' => 'Databaseonderhoud',
	'News_Admin' => 'Nieuws',
	'News_Cats' => 'Nieuwscategorieën',
	'News_Config' => 'Nieuwsconfiguratie',
	'Security' => 'Veiligheid',
	'Member_Tries' => 'Gebruikersverzoeken',
	'Quick_Search' => 'Snel zoeken',
	'Special' => 'Speciaal',
	'Styles_Management' => 'Stijlinstellingen',
	'Manage_Bots' => 'Botsinstellingen',
	'Admin_Notepad' => 'Kladblok',

// Index
	'Admin' => 'Beheer',
	'Not_admin' => 'Je hebt geen beheerdersrechten',
	'Welcome_phpBB' => 'Welkom bij Icy Phoenix',
	'Admin_intro' => 'Bedankt, dat je voor Icy Phoenix hebt gekozen. In dit venster heb je een kort overzicht van verschillende statistieken van je forum. Wanneer je naar deze pagina wilt terug keren, klik dan op <u>Beheerdersindex</u> link bovenaan de pagina. Om terug te keren naar het forum klik dan rechtsboven op Forum. De andere links op de linkerpagina maken het mogelijk, om alle belangrijke instellingen van het forum te controleren en aan te passen. Op elke pagina wordt beschreven, welke functies het bevat en hoe je die pagina kunt gebruiken.',
	'PayPalInfo' => 'Icy Phoenix is een opensourceproject, je kan je waardering blijken en ondersteuning geven door een donatie aan het project.',
	'Forum_stats' => 'Forumstatistieken',
	'Admin_Index' => 'Beheerdersindex',
	'Preview_forum' => 'Forumvoorbeeld',
	'Click_return_admin_index' => 'Klik %shier%s om naar beheerderspagina terug te keren',
	'Portal' => 'Portaal',
	'Preview_Portal' => 'Portaalvoorbeeld',
	'Main_index' => 'Forum',

	'Statistic' => 'Statistiek',
	'Value' => 'Waarde',
	'Number_posts' => 'Aantal berichten',
	'Posts_per_day' => 'Berichten per dag',
	'Number_topics' => 'Aantal onderwerpen',
	'Topics_per_day' => 'Onderwerpen per dag',
	'Number_users' => 'Aantal gebruikers',
	'Users_per_day' => 'Gebruikers per dag',
	'Board_started' => 'Forum gestart op',
	'Avatar_dir_size' => 'Avatarmapgrootte',
	'Database_size' => 'Databasegrootte',
	'Gzip_compression' =>'GZip-compressie',
	'Not_available' => 'Niet beschikbaar',
	
	'ON' => 'AAN', // This is for GZip compression
	'OFF' => 'UIT',

// DB Utils
	'Database_Utilities' => 'Databasefuncties',
	
	'Restore' => 'Herstellen',
	'Backup' => 'Backuppen',
	'Restore_explain' => 'Hiermee worden alle Icy Phoenix tabellen uit een bestand hersteld. Als in dit geval de server het ondersteund, kun je ook een Gzip-gecomprimeerde tekst uploaden - het wordt automatisch gedecomprimeerd! <b>WAARSCHUWING</b>: De bestaande tabellen en gegevens worden overschreven. Het proces kan enige tijd duren, verlaat deze pagina niet, tot het afgerond is.',
	'Backup_explain' => 'Hier kun je een backup maken van alle Icy Phoenix tabellen. Heb je ook nog andere tabellen in dezelfde database als de Icy Phoenix tabellen, die ook gebackupt moeten worden, geef dan de namen van de tabellen op in de \'Overige tabellen\'-tekstbox (gescheiden met een komma). Als je server het ondersteund, kan je de bestand(en) ook met Gzip comprimeren, voordat je deze opslaat.',
	
	'Backup_options' => 'Backupopties',
	'Start_backup' => 'Start backupproces',
	'Full_backup' => 'Volledige backup',
	'Structure_backup' => 'Alleen structuurbackup',
	'Data_backup' => 'Alleen gegevensbackup',
	'Additional_tables' => 'Overige tabellen',
	'phpBB_only' => 'Alleen Icy Phoenix gerelateerde tabellen',
	'Gzip_compress' => 'Gzip-compressiebestand',
	'Select_file' => 'Selecteer een bestand',
	'Start_Restore' => 'Start herstelproces',
	
	'Restore_success' => 'De database is succesvol hersteld.<br /><br />Het forum is weer terug in de stand van wanneer je de backup gemaakt hebt.',
	'Backup_download' => 'Jouw download wordt gestart over een paar seconden; wacht alstublieft tot het zover is.',
	'Backups_not_supported' => 'Fout: jouw databasesysteem ondersteund databasebackups niet.',
	
	'Restore_Error_uploading' => 'Fout in het uploaden van backupbestand',
	'Restore_Error_filename' => 'Probleem met bestandsnaam; probeer een ander bestand',
	'Restore_Error_decompress' => 'De Gzip-versie kan niet gedecomprimeerd worden; gebruik de tekstversie',
	'Restore_Error_no_file' => 'Er is geen bestand geupload',

// Auth pages
	'Select_a_User' => 'Selecteer een gebruiker',
	'Select_a_Group' => 'Selecteer een groep',
	'Select_a_Forum' => 'Selecteer een forum',
	'Auth_Control_User' => 'Gebruikersrechtencontrole',
	'Auth_Control_Group' => 'Groepsrechtencontrole',
	'Auth_Control_Forum' => 'Forumtoegangscontrole',
// Start add Permission List
	'Auth_list_Control_Forum' => 'Bevoegdheden voor alle forums',
// End add Permission List
	'Look_up_User' => 'Zoek gebruiker',
	'Look_up_Group' => 'Zoek groep',
	'Look_up_Forum' => 'Zoek forum',
	
	'Group_auth_explain' => 'Hier kun je de bevoegdheden en de moderatorstatus voor elke groep instellen. Vergis je niet, dat de individuele gebruikersbevoegdheden altijd nog geldig zijn, wanneer je de groepsbevoegdheden veranderd (b.v. toegang tot forums e.d.). Zou dat het geval zijn, wordt je daarover geinformeerd.',
	'User_auth_explain' => 'Hier kun je de bevoegdheden en de moderatorstatus voor elke individuele gebruiker instellen. Vergis je niet, dat de groepsbevoegdheden altijd nog geldig zijn, wanneer je de groepsbevoegdheden veranderd (b.v. toegang tot forums e.d.). Zou dat het geval zijn, wordt je daarover geinformeerd.',
	'Forum_auth_explain' => 'Hier kun je het bevoegheidsniveau van elk forum aanpassen. Je hebt hiervoor een eenvoudige en een uitgebreide methode, de uitgebreide methode geeft je meer invloed op elke forumactie. Denk eraan dat wanneer je het permissieniveau van forums aanpast, dit invloed heeft op welke gebruikers bepaalde acties daarbinnen kunnen uitvoeren.',
// Start add Permission List
	'Forum_auth_list_explain' => 'Hier kun je het bevoegheidsniveau van elk forum aanpassen. Je hebt hiervoor een simpele en een uitgebreide methode, de uitgebreide methode geeft je meer invloed op elke forumactie. Denk eraan dat wanneer je het permissieniveau van forums aanpast, dit invloed heeft op welke gebruikers bepaalde acties daarbinnen kunnen uitvoeren.',
// End add Permission List

	'Simple_mode' => 'Eenvoudige methode',
	'Advanced_mode' => 'Uitgebreide methode',
	'Moderator_status' => 'Moderatorstatus',
	
	'Allowed_Access' => 'Toegang toegestaan',
	'Disallowed_Access' => 'Toegang blokkeren',
	'Is_Moderator' => 'is moderator',
	'Not_Moderator' => 'geen moderator',
	
	'Conflict_warning' => 'Authorisatieconflictwaarschuwing',
	'Conflict_access_userauth' => 'Deze gebruiker heeft nog toegang tot dit forum via een groep waarvan hij/zij deel uit maakt. Je kunt de groeppermissies aanpassen om volledig te voorkomen dat hij/zij toegangsrechten heeft. De permissies (en de forums waarom het gaat) staan hieronder opgesomd.',
	'Conflict_mod_userauth' => 'Deze gebruiker heeft nog moderatorrechten op dit forum via een groep waarvan hij/zij deel uit maakt. Je kunt de groeppermissies aanpassen om volledig te voorkomen dat hij/zij moderatorrechten heeft. De permissies (en de forums waarom het gaat) staan hieronder opgesomd.',

	'Conflict_access_groupauth' => 'De volgende gebruiker (of gebruikers) heeft nog toegang tot dit forum via hun gebruikerpermissies. Je kunt de gebruikerpermissies aanpassen om volledig te voorkomen dat hij/zij toegangsrechten heeft. De gebruikersrechten (en de forums waarom het gaat) staan hieronder opgesomd.',
	'Conflict_mod_groupauth' => 'De volgende gebruiker (of gebruikers) heeft nog moderatorrechten op dit forum via hun gebruikerpermissies. Je kunt de gebruikerpermissies aanpassen om volledig te voorkomen dat hij/zij moderatorrechten heeft. De gebruikersrechten (en de forums waarom het gaat) staan hieronder opgesomd.',
	
	'Public' => 'Openbaar',
	'Private' => 'Privé',
	'Registered' => 'Geregistreerd',
	'Self' => 'Zelf',
	'Administrators' => 'Beheerders',
	'Hidden' => 'Verborgen',

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
	'Forum_NONE' => 'GEEN',
	'Forum_ALL' => 'ALLE',
	'Forum_REG' => 'REG',
	'Forum_SELF' => 'SELF',
	'Forum_PRIVATE' => 'PRIVÉ',
	'Forum_MOD' => 'MOD',
	'Forum_JADMIN' => 'J ADMIN',
	'Forum_ADMIN' => 'ADMIN',

	'View' => 'Bekijk',
	'Read' => 'Lees',
	'Post' => 'Verstuur',
	'Reply' => 'Antwoord',
	'Edit' => 'Bewerk',
	'Delete' => 'Verwijder',
	'Sticky' => 'Belangrijk',
	'Announce' => 'Mededelen',
	'Vote' => 'Stemmen',
	'Pollcreate' => 'Peiling maken',
	
	'Simple_Permission' => 'Eenvoudige permissies',
	
	'User_Level' => 'Gebruikerniveau',
	'Auth_User' => 'Gebruiker',
	'Auth_Junior_Admin' => 'Juniorbeheerder',
	'Auth_Admin' => 'Beheerder',
	'Group_memberships' => 'Gebruikersgroeplidmaatschap',
	'Usergroup_members' => 'Deze groep heeft de volgende leden',
	
	'Forum_auth_updated' => 'Forumpermissies bijgewerkt',
	'User_auth_updated' => 'Gebruikerpermissies bijgewerkt',
	'Group_auth_updated' => 'Groeppermissies bijgewerkt',
	
	'Auth_updated' => 'Permissies zijn bijgewerkt',
	'Click_return_userauth' => 'Klik %shier%s om terug te keren naar gebruikerpermissies',
	'Click_return_groupauth' => 'Klik %shier%s om terug te keren naar groeppermissies',
	'Click_return_forumauth' => 'Klik %shier%s om terug te keren naar forumpermissies',

// Banning
	'Ban_control' => 'Banbeheer',
	'Ban_explain' => 'Hier kun je het bannen van gebruikers beheren. je kunt dit bereiken door een specifieke gebruiker of een persoon of reeks van IP-adressen of hostnamen te bannen. Deze methode zorgt ervoor dat de gebruiker niet eens de indexpagina van je forum kan bereiken. Om te voorkomen dat de gebruiker zich onder een andere gebruikersnaam registreert kun je ook te bannen e-mailadressen specificeren. Denk eraan dat het bannen van alleen een e-mailadres niet voorkomt dat een gebruiker in kan loggen en berichten kan plaatsen op je forum. Daarvoor moet je een van de eerste twee methoden gebruiken.',
	'Ban_explain_warn' => 'Denk eraan dat bij het invoeren van een IP-reeks alle adresssen tussen het begin en einde op de banlijst staan. Er wordt geprobeerd om het aantal adressen in de database te minimaliseren door, waar mogelijk, automatisch wildcards toe te passen. Als je echt een reeks in wilt voeren, probeer hem dan zo klein mogelijk te houden. of beter nog, vermeld een specifiek adres.',
	
	'Select_username' => 'Selecteer een gebruikersnaam',
	'Select_ip' => 'Selecteer een IP-adres',
	'Select_email' => 'Selecteer een e-mailadres',
	
	'Ban_username' => 'Een of meerdere specifieke gebruikers bannen',
	'Ban_username_explain' => 'Je kunt meerdere gebruikers in een keer bannen door de juiste combinatie van muis en toetsenbord voor jouw computer en browser',
	
	'Ban_IP' => 'Een of meerdere IP-adressen of hostnamen bannen',
	'IP_hostname' => 'IP-adressen of hostnamen',
	'Ban_IP_explain' => 'Om meerdere IP-adressen of hostnamen in te voeren dien je ze te scheiden met komma\'s. Om een IP-reeks in te voeren zet je een liggend streepje (-) tussen het begin en het eind. Om een joker aan te geven gebruik je *',
	
	'Ban_email' => 'Een of meerdere e-mailadressen bannen',
	'Ban_email_explain' => 'Om meerdere e-mailadressen in te voeren dien je ze te scheiden met komma\'s. Om een joker aan te geven gebruik je *, bijvoorbeeld *@hotmail.com',
	
	'Unban_username' => 'Een of meerdere specifieke gebruikers onbannen',
	'Unban_username_explain' => 'Je kunt meerdere gebruikers in een keer onbannen door de juiste combinatie van muis en toetsenbord voor jouw computer en browser',
	
	'Unban_IP' => 'Een of meerdere IP-adressen onbannen',
	'Unban_IP_explain' => 'Je kunt meerdere IP-adressen in een keer onbannen door de juiste combinatie van muis en toetsenbord voor jouw computer en browser',
	
	'Unban_email' => 'Een of meerdere e-mailadressen onbannen',
	'Unban_email_explain' => 'Je kunt meerdere e-mailadressen in een keer onbannen door de juiste combinatie van muis en toetsenbord voor jouw computer en browser',
	
	'No_banned_users' => 'Er zijn geen gebande gebruikersnamen',
	'No_banned_ip' => 'Er zijn geen gebande IP-adressen',
	'No_banned_email' => 'Er zijn geen gebande e-mailadressen',
	
	'Ban_update_sucessful' => 'De banlijst is succesvol bijgewerkt',
	'Click_return_banadmin' => 'Klik %shier%s om terug te keren  naar banbeheer',

// Configuration
	'General_Config' => 'Algemene configuratie',
	'Config_explain' => '<b>Met het formulier hieronder kun je (bijna) alle belangrijke algemene forumopties aanpassen. Voor gebruikers- en forumconfiguratie gebruik je de links aan de linkerkant.</b>',
	
	'Click_return_config' => 'Klik %shier%s om terug te keren naar algemene configuratie',
	
	'General_settings' => 'Algemene foruminstellingen',
	'Server_name' => 'Domeinnaam',
	'Server_name_explain' => 'De domeinnaam van de server (bijv. www.mijndomein.nl)',
	'Script_path' => 'Scriptpad',
	'Script_path_explain' => 'Het pad waar Icy Phoenix geinstalleerd is (bijv. /icyphoenix/)',
	'Server_port' => 'Serverpoort',
	'Server_port_explain' => 'De poort waarop de HTTP server draait, normaal 80.',
	'Site_name' => 'Websitenaam',
	'Site_desc' => 'Websitebeschrijving',
	'Board_disable' => 'Schakel forum uit',
	'Board_disable_explain' => 'Dit maakt het forum onbereikbaar voor de gebruikers. Beheerders zijn altijd in de gelegenheid om toegang te krijgen tot het beheerderspaneel wanneer het forum is uitgeschakeld.',
	'Acct_activation' => 'Accountactivering aanzetten',
	'Acc_None' => 'Geen', // These three entries are the type of activation
	'Acc_User' => 'Gebruiker',
	'Acc_Admin' => 'Beheerder',

	'Abilities_settings' => 'Gebruikers- en foruminstellingen',
	'Max_poll_options' => 'Max aantal peilingopties',
	'Flood_Interval' => 'Floodinterval',
	'Flood_Interval_explain' => 'Aantal seconden die een gebruiker moet wachten tussen twee berichten',
	'Board_email_form' => 'Gebruiker e-mail via forum',
	'Board_email_form_explain' => 'Gebruikers sturen elkaar e-mail via dit forum',
	'Topics_per_page' => 'Onderwerpen per pagina',
	'Posts_per_page' => 'Berichten per pagina',
	'Hot_threshold' => 'Aantal berichten voor een populair onderwerp',
	'Default_style' => 'Standaardstijl',
	'Override_style' => 'Gebruikerstijl negeren',
	'Override_style_explain' => 'Gebruikerstijl vervangen door de standaardstijl',
	'Default_language' => 'Standaardtaal',
	'Date_format' => 'Datumformaat',
	'System_timezone' => 'Tijdzone van het systeem',
	'Enable_gzip' => 'GZip-compressie aanzetten',
// Start Gzip Compression Level MOD
	'Gzip_level' => 'GZip-compressieniveau',
	'Gzip_level_explain' => 'Je kunt hier de compressieniveau aanpassen (een getal tussen 0 en 9). 0 is gelijk aan het uitschakelen van deze functie, 1 is erg laag, en 9 is het maximum. 9 is aanbevolen.',
// End Gzip Compression Level MOD
	'Enable_prune' => 'Forumopruiming aanzetten',
	'Allow_HTML' => 'HTML toestaan',
	'Allow_BBCode' => 'BBCode toestaan',
	'Allowed_tags' => 'Toegestane HTML tags',
	'Allowed_tags_explain' => 'Tags scheiden met komma\'s',
	'Allow_smilies' => 'Smilies toestaan',
	'Smilies_path' => 'Smilies opslagmap',
	'Smilies_path_explain' => 'Map in je Icy Phoenix rootmap, bijv. images/smilies',
	'Allow_sig' => 'Handtekening toestaan',
	'Max_sig_length' => 'Maximale lengte van handtekening',
	'Max_sig_length_explain' => 'Maximaal aantal tekens in handtekening van gebruikers',
	'Allow_name_change' => 'Gebruikersnaam wijzigingen toestaan',
	
	'Avatar_settings' => 'Avatarinstellingen',
	'Allow_local' => 'Gallerij avatars toestaan',
	'Allow_remote' => 'Externe avatars toestaan',
	'Allow_remote_explain' => 'Avatars waarnaar gelinkt wordt vanaf een andere website',
	'Allow_upload' => 'Avatar uploaden toestaan',
	'Max_filesize' => 'Maximale avatar bestandsgrootte',
	'Max_filesize_explain' => 'Voor geuploade avatarbestanden',
	'Max_avatar_size' => 'Maximale avatar afmetingen',
	'Max_avatar_size_explain' => '(hoogte x breedte in pixels)',
	'Avatar_storage_path' => 'Avatar opslagmap',
	'Avatar_storage_path_explain' => 'Map in de Icy Phoenix rootmap, bijv. images/avatars',
	'Avatar_gallery_path' => 'Avatar gallerijmap',
	'Avatar_gallery_path_explain' => 'Map in de Icy Phoenix rootmap voor geladen avatars, bijv. images/avatars/gallery',

	'COPPA_settings' => 'COPPA instellingen',
	'COPPA_fax' => 'COPPA faxnummer',
	'COPPA_mail' => 'COPPA postadres',
	'COPPA_mail_explain' => 'Dit is het postadres waar ouders COPPA registratieformulieren naar toe kunnen sturen',

	'Email_settings' => 'E-mailinstellingen',
	'Admin_email' => 'Beheerder e-mailadres',
	'Email_sig' => 'E-mail handtekening',
	'Email_sig_explain' => 'Deze tekst wordt toegevoegd aan alle e-mails die het forum verstuurd',
	'Use_SMTP' => 'SMTP server gebruiken voor alle e-mails',
	'Use_SMTP_explain' => 'Vul \'ja\' in als de e-mail via een benoemde server wilt of moet versturen in plaats van de \'lokale e-mail\' functie',
	'SMTP_server' => 'SMTP serveradres',
	'SMTP_username' => 'SMTP gebruikersnaam',
	'SMTP_username_explain' => 'Alleen een gebruikersnaam invullen als dit nodig is',
	'SMTP_password' => 'SMTP wachtwoord',
	'SMTP_password_explain' => 'Alleen een wachtwoord invullen als dit nodig is',
	
	'Disable_privmsg' => 'Privéberichten',
	'Inbox_limits' => 'Max berichten in postvak in',
	'Sentbox_limits' => 'Max berichten in verzonden items',
	'Savebox_limits' => 'Max berichten in opgeslagen items',
	
	'Cookie_settings' => 'Cookieinstellingen',
	'Cookie_settings_explain' => 'Deze bepalen hoe een cookie, die aan een browser gestuurd wordt, is gedefinieerd. In de meeste gevallen voldoen de standaardinstellingen. Als je ze toch moet aanpassen let dan goed op, door onjuiste instellingen kunnen gebruikers mogelijk niet meer inloggen.',
	'Cookie_domain' => 'Cookiedomein',
	'Cookie_name' => 'Cookienaam',
	'Cookie_path' => 'Cookiepad',
	'Cookie_secure' => 'Cookieveiligheid [ https ]',
	'Cookie_secure_explain' => 'Deze optie alleen aanzetten als je server gebruikmaakt van SSL',
	'Session_length' => 'Sessielengte [ seconds ]',

// Visual Confirmation
	'Visual_confirm' => 'Bevestigingscode inschakelen',
	'Visual_confirm_explain' => 'Gebruikers dienen een code van een afbeelding in te vullen bij registratie.',

// Autologin Keys - added 2.0.18
	'Allow_autologin' => 'Automatisch inloggen aanzetten', 
	'Allow_autologin_explain' => 'Bepaald of gebruikers zich automatisch in kunnen loggen als ze het forum bezoeken.', 
	'Autologin_time' => 'Geldigheidsduur automatisch inloggen', 
	'Autologin_time_explain' => 'Bepaalt hoeveel dagen de de gebruiker het forum niet kan bezoeken om vervolgens toch automatisch ingelogd kan worden. Nul voor oneindig lang.',

// Forum Management
	'Forum_admin' => 'Forumbeheer',
	'Forum_admin_explain' => 'Op dit paneel kun je categoriëen en forums maken, verwijderen, reorganiseren en opnieuw synchroniseren',
	'Edit_forum' => 'Bewerk forum',
	'Create_forum' => 'Voeg nieuw forum toe',
	'Create_category' => 'Voeg nieuwe categorie toe',
	'Remove' => 'Verwijderen',
	'Action' => 'Actie',
	'Update_order' => 'Volgorde bijwerken',
	'Config_updated' => 'Forumconfiguratie succesvol bijgewerkt',
	'Move_up' => 'Verplaats omhoog',
	'Move_down' => 'Verplaats omlaag',
	'Resync' => 'Hersynchroniseren',
	'No_mode' => 'Er is geen methode geselecteerd',
	'Forum_edit_delete_explain' => 'Met het formulier hieronder kun je alle algemene forumopties aanpassen. Voor gebruikersconfiguratie en forumconfiguraties kun je de links aan de linkerkant gebruiken',

	'Move_contents' => 'Alle inhoud verplaatsen',
	'Forum_delete' => 'Forum verwijderen',
	'Forum_delete_explain' => 'Met het formulier hieronder kun je een forum (of categorie) verwijderen en bepalen waarheen je alle onderwerpen (of forums) wilt verplaatsen.',
	
	'Status_locked' => 'Gesloten',
	'Status_unlocked' => 'Open',
	'Forum_settings' => 'Algemene foruminstellingen',
	'Forum_name' => 'Forumnaam',
	'Forum_desc' => 'Omschrijving',
	'Forum_status' => 'Forumstatus',
	'Forum_pruning' => 'Automatisch opruimen',
	
	'prune_freq' => 'De leeftijd controleren van een onderwerp elke',
	'prune_days' => 'Onderwerpen verwijderen waarin geen berichten is geplaatst is over',
	'Set_prune_data' => 'Je hebt de automatische opruiming aangezet voor dit forum, maar je hebt geen frequentie of aantal dagen ingegeven. ga alstublieft terug en doe dit alsnog',
	
	'FORUM_SIMILAR_TOPICS' => 'Vergelijkbare onderwerpen',
	'FORUM_SIMILAR_TOPICS_EXPLAIN' => 'If you enable this option you will see a box with similar topics at the bottom of each topic in this forum (please note that you need also to enable the global switch for this feature in Icy Phoenix Settings => SEO TAB)',
	'FORUM_TOPIC_VIEWS' => 'Topics Viewer',
	'FORUM_TOPIC_VIEWS_EXPLAIN' => 'If you enable this option all users that views topics in this forum will be stored in the DB (please note that you need also to enable the global switch for this feature in Icy Phoenix Settings => SQL TAB)',
	'FORUM_TAGS' => 'Forum Tags',
	'FORUM_TAGS_EXPLAIN' => 'If you enable this option you will see a box with all the most used words in this forum (please note that you need also to enable the global switch for this feature in Icy Phoenix Settings => SEO TAB)',
	'FORUM_SORT_BOX' => 'Topic Sort Box',
	'FORUM_SORT_BOX_EXPLAIN' => 'If you enable this option you will see a box wich allows you to alphabetically sort topics in this forum (please note that you need also to enable the global switch for this feature in Icy Phoenix Settings)',
	'FORUM_KB_MODE' => 'KB Mode',
	'FORUM_KB_MODE_EXPLAIN' => 'If you enable this option this forum will be shown in KB Mode (topics listed like Knowledge Base)',
	'FORUM_INDEX_ICONS' => 'Index Icons',
	'FORUM_INDEX_ICONS_EXPLAIN' => 'If you enable this option you will see icons for RSS and New Topic in Forum Index (please note that you need also to enable the global switch for this feature in Icy Phoenix Settings)',

	'Move_and_Delete' => 'Verplaatsen en verwijderen',
	
	'Delete_all_posts' => 'Alle berichten verwijderen',
	'Nowhere_to_move' => 'Er is geen plaats waar ze naartoe verplaatst kunnen worden',
	
	'Edit_Category' => 'Categorie bewerken',
	'Edit_Category_explain' => 'Dit formulier kun je gebruiken om de naam van een categorie aan te passen.',
	
	'Forums_updated' => 'Foruminformatie en categorieinformatie succesvol bijgewerkt',
	
	'Must_delete_forums' => 'Je moet alle forums verwijderen voordat je deze categorie kunt verwijderen',
	
	'Click_return_forumadmin' => 'Klik %shier%s om terug te keren naar forumbeheer',

// Smiley Management
	'smiley_title' => 'Smilies Bewerkgereedschap',
	'smile_desc' => 'Op deze pagina kun je de smilies, die gebruikers in hun berichten of privéberichten kunnen gebruiken, toevoegen, verwijderen en bewerken.',
	
	'smiley_config' => 'Smilieconfiguratie',
	'smiley_code' => 'Smiliecode',
	'smiley_url' => 'Smilie grafisch bestand',
	'smiley_emot' => 'Smilie',
	'smile_add' => 'Voeg een smilie toe',
	'Smile' => 'Smilie',
	'Emotion' => 'Emotie',
	
	'Select_pak' => 'Selecteer pakketbestand (.pak)',
	'replace_existing' => 'Bestaande smilie vervangen',
	'keep_existing' => 'Bestaande smilie behouden',
	'smiley_import_inst' => 'Je moet het smiliepakket unzippen en alle bestanden uploaden naar de juiste smiliemap voor jouw installatie. Selecteer vervolgens de juiste informatie in dit formulier om het smiliepakket te importeren.',
	'smiley_import' => 'Importeer smiliepakket',
	'choose_smile_pak' => 'Een smiliepakket .pak bestand kiezen',
	'import' => 'Smilies importeren',
	'smile_conflicts' => ' Wat moet er gedaan worden in geval van een conflict',
	'del_existing_smileys' => 'Bestaande smilies voor het importeren verwijderen',
	'import_smile_pack' => 'Smiliepakket importeren',
	'export_smile_pack' => 'Smiliepakket maken',
	'export_smiles' => 'Om een smiliepakket aan te maken met je huidige geinstalleerde smilies, kun je %shier%s klikken om het smilies.pak bestand te downloaden. Het bestand hernoemen naar een geschikte naam, maar hou de .pak extensie aan. Vervolgens maak je een zip-bestand aan met al je smilies plus dit .pak configuratiebestand.',
	
	'smiley_add_success' => 'De smilie is succesvol toegevoegd',
	'smiley_edit_success' => 'De smilie is succesvol bijgewerkt',
	'smiley_import_success' => 'Smiliepakket is succesvol geimporteerd!',
	'smiley_del_success' => 'De smilie is succesvol verwijderd',
	'Click_return_smileadmin' => 'Klik %shier%s om terug te keren naar smiliebeheer',

// User Management
	'User_admin' => 'Gebruikersbeheer',
	'User_admin_explain' => 'Hier kun je informatie en bepaalde specifieke opties van gebruikers aanpassen. Als je de gebruikerpermissies wilt aanpassen dien je het gebruikerbeheer en groeppermissiesysteem te gebruiken.',
	
	'Look_up_user' => 'Zoek gebruiker',
	
	'Admin_user_fail' => 'Gebruikersprofiel kan niet worden bijgewerkt.',
	'Admin_user_updated' => 'Gebruikersprofiel is succesvol bijgewerkt',
	'Click_return_useradmin' => 'Klik %shier%s om naar gebruikerbeheer terug te keren',
//Start Quick Administrator User Options and Information MOD
	'Click_return_userprofile' => 'Klik %shier%s om naar gebruikerprofiel terug te keren',
//End Quick Administrator User Options and Information MOD
	'User_delete' => 'Deze gebruiker verwijderen.',
	'User_delete_explain' => 'Klik hier om deze gebruiker te verwijderen, dit kan niet ongedaan worden gemaakt.',
	'User_deleted' => 'Gebruiker is succesvol verwijderd.',

	'User_status' => 'Gebruiker is actief',
	'User_allowpm' => 'Kan privéberichten versturen',
	'User_allowavatar' => 'Kan avatar weergeven',
	
	'Admin_avatar_explain' => 'Hier kun je de huidige avatar van de gebruiker bekijken en verwijderen.',
	
	'User_special' => 'Speciale alleen-beheerdersvelden',
	'User_special_explain' => 'Deze velden kunnen niet worden aangepast door gebruikers. Hier kun je hun status instellen en andere opties die niet beschikbaar zijn voor gebruikers.',

// Group Management
	'Group_administration' => 'Groepsbeheer',
	'Group_admin_explain' => 'Vanaf dit paneel kun je al je gebruikersgroepen beheren, je kunt: verwijderen, toevoegen en bestaande groepen bewerken. je kunt moderators kiezen, groep open/gesloten status bewerken en de groepsnaam en omschrijving ingeven',
	'Error_updating_groups' => 'Er is een fout opgetreden tijdens het bijwerken van de groepen',
	'Updated_group' => 'De groep is succesvol bijgewerkt',
	'Added_new_group' => 'De nieuwe groep is succesvol aangemaakt',
	'Deleted_group' => 'De groep is succesvol verwijderd',
	'New_group' => 'Voeg een nieuwe groep toe',
	'Edit_group' => 'Bewerk groep',
	'group_name' => 'Groepsnaam',
	'group_description' => 'Groepsomschrijving',
	'group_moderator' => 'Groepsmoderator',
	'group_status' => 'Groepstatus',
	'group_open' => 'Open groep',
	'group_closed' => 'Gesloten groep',
	'group_hidden' => 'Verborgen groep',
	'group_delete' => 'Verwijder groep',
	'group_delete_check' => 'Deze groep verwijderen',
	'submit_group_changes' => 'Wijzigingen bevestigen',
	'reset_group_changes' => 'Wijzigingen herstellen',
	'No_group_name' => 'Je moet een naam opgeven voor deze groep',
	'No_group_moderator' => 'Je moet een moderator aangeven voor deze groep',
	'No_group_mode' => 'Je moet de staat van deze groep aangeven, open of gesloten',
	'No_group_action' => 'Er is geen actie opgegeven',
	'delete_group_moderator' => 'De oude groepsmoderator verwijderen?',
	'delete_moderator_explain' => 'Dit veld selecteren als je tijdens het bewerken van een groepsmoderator wilt dat de oude moderator verwijderd wordt. Als je dit niet selecteert wordt de oude moderator gewoon een lid van de groep.',
	'Click_return_groupsadmin' => 'Klik %shier%s om terug te keren naar groepsbeheer',
	'Select_group' => 'Selecteer een groep',
	'Look_up_group' => 'Een groep zoeken',

// Prune Administration
	'Forum_Prune' => 'Forumopruiming',
	'Forum_Prune_explain' => 'Dit ruimt elk onderwerp waarop geen reactie is geweest in het aantal dagen dat je aangeeft. Als je geen getal ingeeft worden alle onderwerpen opgeruimd. Dit ruimt geen onderwerpen waarin nog peilingen lopen, ook ruimt het geen mededelingen op. Die onderwerpen dien je handmatig op te ruimen.',
	'Do_Prune' => 'Opruiming uitvoeren',
	'All_Forums' => 'Alle forums',
	'Prune_topics_not_posted' => 'Opgeruimde onderwerpen zonder reacties in bepaald aantal dagen',
	'Topics_pruned' => 'Onderwerpen opgeruimd',
	'Posts_pruned' => 'Berichten opgeruimd',
	'Prune_success' => 'Opruiming van de forums is succesvol afgerond',

// Word censor
	'Words_title' => 'Woordcensuurbeheer',
	'Words_explain' => 'Op dit paneel kun je woorden toevoegen, bewerken en verwijderen die automatisch op alle forums gecensureerd worden. Bovendien kunnen gebruikers zich niet registreren met een gebruikersnaam waarin zo\'n woord voorkomt. Jokers (*) worden geaccepteerd in het woordveld, bijv. *pik* komt overeen met Lopikkerwaard, pik* met pikant en *pik met hospik.',
	'Word' => 'Woord',
	'Edit_word_censor' => 'Bewerk woordcensuur',
	'Replacement' => 'Vervangen door',
	'Add_new_word' => 'Voeg nieuw woord toe',
	'Update_word' => 'Woordcensuur bijwerken',
	
	'Must_enter_word' => 'Je moet een woord en de vervanging daarvoor opgeven',
	'No_word_selected' => 'Er is geen woord geselecteerd om te bewerken',
	
	'Word_updated' => 'Het geselecteerde woordcensuur is succesvol bijgewerkt',
	'Word_added' => 'Het woordcensuur is succesvol toegevoegd',
	'Word_removed' => 'Het geselecteerde woordcensuur is succesvol verwijderd',
	
	'Click_return_wordadmin' => 'Klik %shier%s om terug te keren naar woordcensuurbeheer',

// Mass Email
	'Mass_email_explain' => 'Hier kun je e-mails sturen aan al je gebruikers, of aan gebruikers uit een specifieke groep. Hiervoor wordt een e-mail verstuurd aan het beheerders e-mailadres dat opgegeven is, met een \'blind carbon copy\' aan alle ontvangers. Als je een grote groep wilt e-mailen, wees dan geduldig na het verzenden en stop de pagina niet halverwege. Het is normaal dat massa e-mail geruime tijd in beslag neemt, je krijgt een melding wanneer het script is afgerond.',
	'Compose' => 'Opstellen',
	
	'Recipients' => 'Ontvangers',
	'All_users' => 'Alle gebruikers',
	
	'Email_successfull' => 'Je bericht is verzonden',
	'Click_return_massemail' => 'Klik %shier%s om terug te keren naar massa e-mailformulier',

// Ranks admin
	'Ranks_title' => 'Rangbeheer',
	'Ranks_explain' => 'Met dit formulier kun je rangen toevoegen, bewerken, bekijken en verwijderen. Je kunt ook aangepaste rangen aanmaken die toegepast kunnen worden via gebruikersbeheer',
	
	'Add_new_rank' => 'Voeg nieuwe rang toe',
	
	'Rank_title' => 'Rangtitel',
	'Rank_special' => 'Als speciale rang instellen',
	'Rank_minimum' => 'Minimum berichten',
	'Rank_maximum' => 'Maximum berichten',
	'Rank_image' => 'Rangafbeelding (relatief aan de Icy Phoenix rootmap)',
	'Rank_image_explain' => 'Dit gebruiken om een klein plaatje aan een rang te koppelen',
	
	'Must_select_rank' => 'Je moet een rang selecteren',
	'No_assigned_rank' => 'Er is geen speciale rang toegewezen',
	
	'Rank_updated' => 'De rang is succesvol bijgewerkt',
	'Rank_added' => 'De rang is succesvol toegevoegd',
	'Rank_removed' => 'De rang is succesvol verwijderd',
	'No_update_ranks' => 'De rang is succesvol verwijderd, maar de gebruikers die deze rang gebruikten zijn niet aangepast. Je zal dit handmatig nog moeten veranderen.',
	
	'Click_return_rankadmin' => 'Klik %shier%s om terug te keren naar rangbeheer',

// Disallow Username Admin
	'Disallow_control' => 'Geweigerde Gebruikersnaambeheer',
	'Disallow_explain' => 'Hier kun je bepalen welke gebruikersnamen niet gebruikt mogen worden. Geweigerde gebruikersnamen mogen het jokerteken * bevatten. Denk eraan dat je geen gebruikersnaam kunt specificeren die al geregistreerd is, je moet die eerst verwijderen en dan weigeren',
	
	'Delete_disallow' => 'Verwijderen',
	'Delete_disallow_title' => 'Verwijder gebruikersnaam',
	'Delete_disallow_explain' => 'Je kunt een geweigerde gebruikersnaam verwijderen door de naam in deze lijst te selecteren en op bevestigen te klikken',
	
	'Add_disallow' => 'Toevoegen',
	'Add_disallow_title' => 'Voeg gebruikersnaam toe',
	'Add_disallow_explain' => 'Je kunt een gebruikersnaam weigeren door gebruik te maken van het jokerteken * om een willekeurig ander teken te vervangen',
	
	'No_disallowed' => 'Er zijn geen geweigerde gebruikersnamen',
	
	'Disallowed_deleted' => 'De geweigerde gebruikersnaam is succesvol verwijderd',
	'Disallow_successful' => 'De geweigerde gebruikersnaam is succesvol toegevoegd',
	'Disallowed_already' => 'De naam die je ingegeven hebt kon niet worden toegevoegd aan de lijst. Hij staat er al in of er is al een bestaande gebruikersnaam aanwezig',
	
	'Click_return_disallowadmin' => 'Klik %shier%s om terug te keren naar geweigerde gebruikersnaambeheer',

// Styles Admin
	'Styles_admin' => 'Stijlenbeheer',
	'Styles_explain' => 'Met dit onderdeel kun je de stijlen (templates en stijlen) beheren die beschikbaar zijn voor je gebruikers',
	'Styles_addnew_explain' => 'De volgende lijst bevat alle stijlen die momenteel beschikbaar zijn voor de templates die je hebt. De onderdelen op deze lijst zijn nog niet geinstalleerd in de Icy Phoenix database. Om ze te installeren kun je simpelweg klikken op de \'installeer\' link naast de vermelding',
	
	'Select_template' => 'Selecteer een template',
	
	'Style' => 'Stijl',
	'Template' => 'Template',
	'Download' => 'Download',
	
	'Edit_theme' => 'Bewerk stijl',
	'Edit_theme_explain' => 'In dit formulier kun je de instellingen van het geselecteerde stijl bewerken',
	
	'Create_theme' => 'Voeg stijl toe',
	'Create_theme_explain' => 'Gebruik dit formulier om een nieuw stijl aan te maken voor een geselecteerde template. Wanneer je kleuren toevoegt (waarvoor je de hexadecimale schrijfwijze moet gebruiken) moet je het voorafgaande # weglaten, bijv. CCCCCC is bruikbaar, #CCCCCC niet',

	'Export_themes' => 'Exporteer stijlen',
	'Export_explain' => 'In dit venster kun je de gegevens van een bepaald stijl voor een geselecteerd template exporteren. Selecteer het template uit de lijst hieronder en het script zal het configuratiebestand van de stijl maken en proberen dit op te slaan in de map van het geselecteerde template. Als het bestand niet kan worden opgeslagen krijg je de mogelijkheid om het te downloaden. Om het bestand op te kunnen slaan met het script, dient de webserver schrijfrechten te hebben in de map van het geselecteerde template. Zie, voor meer informatie hierover, de Icy Phoenix gebruikersgids.',
	
	'Theme_installed' => 'Het geselecteerde stijl is succesvol geïnstalleerd',
	'Style_removed' => 'De geselecteerde stijl is verwijderd uit de database. Om de stijl volledig van je systeem te verwijderen moet je de betreffende bestanden verwijderen uit je templates map.',
	'Theme_info_saved' => 'De stijlinformatie voor het geselecteerde template is opgeslagen. Je dient nu de permissies op \'theme_info.cfg (en indien van toepassing, de map van het geselecteerde template) terug te zetten naar alleen-lezen (read-only)',
	'Theme_updated' => 'De geselecteerde stijl is bijgewerkt. Je dient nu de nieuwe stijlinstellingen te exporteren',
	'Theme_created' => 'Stijl gemaakt. Je dient nu het stijl op te slaan in het stijlconfiguratiebestand om veilig ergens anders te bewaren',

	'Confirm_delete_style' => 'Weet je zeker dat je deze stijl wilt verwijderen?',
	
	'Download_theme_cfg' => 'De \'exporteer\' kon niet schrijven naar het stijlinformatiebestand. Klik op de knop hieronder om dit bestand via je browser te downloaden. Wanneer je het gedownload hebt, kun je het verplaatsen naar de map waarin de templatebestanden staan. Je kunt de bestanden vervolgens verpakken voor verspreiding of ergens anders gebruiken',
	'No_themes' => 'Aan het template dat je geselecteerd hebt zijn geen thema\'s verbonden. Om een nieuw thema taan te maken, klik je op \'Maak nieuw thema\' in het vlak aan de linkerkant',
	'No_template_dir' => 'De templatemap kan niet worden geopend. Het kan mogelijk niet gelezen worden door de webserver of de map bestaat niet',
	'Cannot_remove_style' => 'Je kunt deze stijl niet verwijderen aangezien het de standaard is voor het forum. Verander AUB de standaardstijl en probeer het opnieuw.',
	'Style_exists' => 'De naam die je opgegeven hebt voor de stijl bestaat al, ga terug en kies een andere naam.',
	
	'Click_return_styleadmin' => 'Klik %shier%s om terug te gaan naar stijlenbeheer',
	
	'Theme_settings' => 'Stijlinstellingen',
	'Theme_element' => 'Stijlelement',
	'Simple_name' => 'Eenvoudige naam',
	'Save_Settings' => 'Instellingen opslaan',
	
	'Stylesheet' => 'CSS-stylesheet',
	'Stylesheet_explain' => 'Bestandsnaam van de CSS-stylesheet die gebruikt moet worden voor deze stijl.',
	'Background_image' => 'Achtergrondsafbeelding',
	'Background_color' => 'Achtergrondskleur',
	'Theme_name' => 'Stijlnaam',
	'Link_color' => 'Linkkleur',
	'Text_color' => 'Tekstkleur',
	'VLink_color' => 'Bekeken Linkkleur',
	'ALink_color' => 'Actieve Linkkleur',
	'HLink_color' => 'Zweef Linkkleur',
	'Tr_color1' => 'Tabelrijkleur 1',
	'Tr_color2' => 'Tabelrijkleur 2',
	'Tr_color3' => 'Tabelrijkleur 3',
	'Tr_class1' => 'Tabelrijklasse 1',
	'Tr_class2' => 'Tabelrijklasse 2',
	'Tr_class3' => 'Tabelrijklasse 3',
	'Th_color1' => 'Tabelkopkleur 1',
	'Th_color2' => 'Tabelkopkleur 2',
	'Th_color3' => 'Tabelkopkleur 3',
	'Th_class1' => 'Tabelkopklasse 1',
	'Th_class2' => 'Tabelkopklasse 2',
	'Th_class3' => 'Tabelkopklasse 3',
	'Td_color1' => 'Tabelcelkleur 1',
	'Td_color2' => 'Tabelcelkleur 2',
	'Td_color3' => 'Tabelcelkleur 3',
	'Td_class1' => 'Tabelcelklasse 1',
	'Td_class2' => 'Tabelcelklasse 2',
	'Td_class3' => 'Tabelcelklasse 3',

// Admin Userlist Start
	'Userlist' => 'Gebruikerlijst',
	'Userlist_description' => 'Geeft een complete lijst weer van gebruikers en je kan diverse acties uitvoeren met de gebruikers.',
	
	'Add_group' => 'Voeg toe aan groep',
	'Add_group_explain' => 'Selecteer aan welke groep de geselecteerde gebruikers ingevoegd moeten worden',
	
	'Open_close' => 'Open/sluit',
	'Active' => 'Actief',
	'Group' => 'Groep(en)',
	'Rank' => 'Rang',
	'Last_activity' => 'Laatste activiteit',
	'Never' => 'Nooit',
	'User_manage' => 'Beheer',
	'Find_all_posts' => 'Alle berichten vinden',
	
	'Select_one' => 'Selecteer een',
	'Ban' => 'Ban',
	'Activate_deactivate' => 'Activeer/deactiveer',
	
	'User_id' => 'Gebruiker ID',
	'User_level' => 'Gebruikerniveau',
	'Ascending' => 'Oplopend',
	'Descending' => 'Aflopend',
	'Show' => 'Weergeven',
	'All' => 'Alles',
	
	'Member' => 'Gebruiker',
	'Pending' => 'in afwachting',
	
	'Confirm_user_ban' => 'Weet je zeker dat je de geselecteerde gebruiker(s) wilt bannen?',
	'Confirm_user_deleted' => 'Weet je zeker dat je de geselecteerde gebruiker(s) wilt verwijderen?',
	
	'User_status_updated' => 'Gebruiker(s) status succesvol bijgewerkt!',
	'User_banned_successfully' => 'Gebruiker(s) succesvol geband!',
	'User_deleted_successfully' => 'Gebruiker(s) succesvol verwijderd!',
	'User_add_group_successfully' => 'Gebruiker(s) succesvol aan de groep toegevoegd!',
	
	'Click_return_userlist' => 'Klik %shier%s om terug te keren naar gebruikerlijst',
//
// Admin Userlist End

// Version Check
	'Version_up_to_date' => 'Je forum is bijgewerkt tot de laatste versie, er zijn geen updates beschikbaar voor jouw versie van phpBB.', 
	'Version_up_to_date_ip' => 'Geen updates beschikbaar voor Icy Phoenix',
	'Version_not_up_to_date' => 'Je forum lijkt <b>niet</b> bijgewerkt te zijn naar de nieuwste versie. Updates zijn beschikbaar voor phpBB, ga naar <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> om de laatste versie te downloaden.',
	'Version_not_up_to_date_ip' => 'Updates zijn beschikbaar voor Icy Phoenix, ga naar <a href="http://www.icyphoenix.com/" target="_new">Icy Phoenix</a> om de nieuwste versie te downloaden.',
	'Latest_version_info' => 'De laatst beschikbare versie is <b>phpBB %s</b>.', 
	'Current_version_info' => 'Je draait <b>phpBB %s</b>', 
	'Connect_socket_error' => 'Er kan geen verbinding maken met de phpBB server, de foutmelding is: <br />%s', 
	'Connect_socket_error_ip' => 'Er kan geen verbinding maken met de Icy Phoenix server',
	'Socket_functions_disabled' => 'Servercontact uitgeschakeld.',
	'Mailing_list_subscribe_reminder' => 'Op de hoogte blijven van de laatste versie van phpBB? <a href="http://www.phpbb.com/support/" target="_new">Meld je aan voor de nieuwsbrief</a>.', 
	'Version_information' => 'Versieinformatie',
	'Version_not_checked' => 'Versiecontrole is uitgeschakeld, ga naar de Icy Phoenix website voor meer informatie.',

// Advanced Signature Divider Control
	'sig_title' => 'Onderschriftscheidingsinstellingen',
	'sig_divider' => 'Onderschriftscheiding',
	'sig_explain' => 'Hier kun je instellen, met welke tekens de onderschrift gescheiden moet worden van de berichten.',

// Start add - Birthday MOD
	'Birthday_required' => 'Het is verplicht om je verjaardag in te geven!', 
	'Enable_birthday_greeting' => 'De popup \'Prettige verjaardag\' gebruiken',
	'Birthday_greeting_expain' => 'De leden kunnen een popup te zien krijgen met \'Prettige verjaardag\' als ze het forum bezoeken.',
	'Next_birthday_greeting' => 'Volgende popup verjaardagsgroet',
	'Next_birthday_greeting_expain' => 'Dit veld houdt bij wanneer een lid een popup met \'Prettige verjaardag\' krijgt.',
	'Wrong_next_birthday_greeting' => 'Het jaar van de volgende popup is incorrect, opnieuw proberen!',
	'Max_user_age' => 'Maximum leeftijd van de gebruikers',
	'Min_user_age' => 'Minimum leeftijd van de gebruikers',
	'Birthday_lookforward' => 'Aantal dagen vooraf waarschuwen',
	'Birthday_lookforward_explain' => 'Het aantal dagen dat een script vooruit kijkt of een lid jarig is.',
// End add - Birthday MOD

// Start add - Yellow card admin MOD
	'Max_user_bancard' => 'Maximaal aantal waarschuwingen', 
	'Max_user_bancard_explain' => 'Als een gebruiker meer gele kaarten heeft dan hier aangegeven, dan wordt de gebruiker geband', 
	'ban_card' => 'Gele kaart', 
	'ban_card_explain' => 'De gebruiker wordt geband als die meer dan %d gele kaarten heeft', 
	'Greencard' => 'Ban ongedaan maken', 
	'Bluecard' => 'Bericht rapporteren', 
	'Bluecard_limit' => 'Interval aantal blauwe kaarten', 
	'Bluecard_limit_explain' => 'De moderators opnieuw waarschuwen na elke x blauwe kaarten', 
	'Bluecard_limit_2' => 'Blauwe kaartenlimiet', 
	'Bluecard_limit_2_explain' => 'Het eerste bericht naar de moderators wordt verstuurd, wanneer een bericht dit aantal blauwe kaarten heeft', 
	'Report_forum' => 'Rapporteer forum', 
	'Report_forum_explain' => 'Het forum ID invullen waar gebruikersrapporten worden geplaatst, een 0 zal deze functie uitschakelen, gebruikers moeten minimaal bericht- en antwoordtoegang hebben tot dit forum', 

// Start add - Last visit MOD
	'Hidde_last_logon' => 'Verberg de datum van het laatste bezoek', 
	'Hidde_last_logon_expain' => 'Indien je deze optie op JA zet, is de datum van het laatste bezoek enkel zichtbaar voor de beheerder.', 
// End add - Last visit MOD
//
// Start add - Online/Offline/Hidden Mod
	'Online_time' => 'Onlinestatustijd',
	'Online_time_explain' => 'Aantal seconden dat een gebruiker online weergegevem moet worden (gebruik geen waarde lager dan 60).',
	'Online_setting' => 'Onlinestatusinstelling',
	'Online_color' => 'Online tekstkleur',
	'Offline_color' => 'Offline tekstkleur',
	'Hidden_color' => 'Verborgen tekstkleur',
// End add - Online/Offline/Hidden Mod

// Disallow other admins to delete or edit the first admin MOD
	'L_LISTOFADMINEDIT' => 'Geblokkeerde toegangen naar het account van de eerste beheerder',
	'L_LISTOFADMINEDITEXP' => 'In deze lijst zijn alle geblokkeerde toegangen opgenomen op de account van de eerste beheerder op dit forum. De andere beheerders hebben geprobeerd om het profiel van de eerste beheerder op dit forum te veranderen, te verwijderen als eerste beheerder of te zetten als normale gebruiker. De verandering van de profielgegevens en/of permissies van de eerste beheerder zijn niet toegepast en zijn succesvol geblokkeerd. Deze lijst kan alleen worden verwijderd door de eerste beheerder op dit forum.',
	'L_LISTOFADMINEDITUSERS' => 'Lijst van geblokkeerde toegangen voor de eerste beheerdersaccount',
	'L_LISTOFADMINTEXT' => 'succesvolle geblokkeerde toegangen zijn gedaan door',
	'L_DELETEMSG' => 'Ingangen verwijderen',
	'L_DELETESUCMSG' => 'De ingangen zijn succesvol verwijderd',
	'L_ADMINEDITMSG' => 'Je ben niet bevoegd om de profielgegevens en/of de permissies van de eerste beheerder te bewerken op dit forum.<br /><br />Deze toegangspoging is geregistreerd en succesvol geblokkeerd !',
	'use_thank' => 'Sta plaatsen van dankberichten toe in dit forum',
	'Default_avatar' => 'Een standaardavatar inschakelen',
	'Default_avatar_explain' => 'Dit geeft de gebruikers die nog geen avatar geselecteerd dat er toch een standaardavatar wordt weergegeven. Een standaard avatar voor gasten en gebruikers inschakelen, je kunt ook aangeven voor wie het weergegeven moet worden, voor iedereen of alleen gasten of voor alleen gebruikers.',
	'Default_avatar_guests' => 'Gasten',
	'Default_avatar_users' => 'Gebruikers',
	'Default_avatar_both' => 'Beide',
	'Default_avatar_none' => 'Niemand',

// Start Optimize Database
	'Optimize' => 'Database optimaliseren',
	'Optimize_explain' => 'Hier is het mogelijk om je opgeslagen gegevens in de tabellen van de database te optimaliseren. Je kan via deze weg lege ruimtes in de gegevens in je tabellen verwijderen.<br />Deze operatie moet je regelmatig uitvoeren zodat je database en website optimaal zijn geconfigureerd zodat je website snel geladen wordt.',
	'Optimize_DB' => 'Database optimaliseren',
	'Optimize_Enable_cron' => 'Sschakel cron in',
	'Optimize_Cron_every' => 'Cron elke',
	'Optimize_Cron_every_explain' => 'Merk op dat je ook <b>PHP Cron [Hoofdinstelling]</b> moet inschakelen in <b>Configuratie &raquo; Icy Phoenix &raquo; Cron</b>',
	'Optimize_month' => 'maand',
	'Optimize_2weeks' => '2 weken',
	'Optimize_week' => 'week',
	'Optimize_3days' => '3 dagen',
	'Optimize_day' => 'dag',
	'Optimize_6hours' => '6 uren',
	'Optimize_hour' => 'uur',
	'Optimize_30minutes' => '30 minuten',
	'Optimize_20seconds' => '20 seconden (alleen voor test)',
	'Optimize_Current_time' => 'Huidige tijd',
	'Optimize_Next_cron_action' => 'Volgende cronactie',
	'Optimize_Performed_Cron' => 'Uitgevoerde cron',
	'Optimize_Show_not_optimized' => 'Alleen tabellen die niet zijn geoptimaliseerd weergeven',
	'Optimize_Show_begin_for' => 'Alleen tabellen die beginnen met weergeven',
	'Optimize_Configure' => 'Configureren',
	'Optimize_Table' => 'Tabel',
	'Optimize_Record' => 'opnemen',
	'Optimize_Type' => 'Type',
	'Optimize_Size' => 'Grootte',
	'Optimize_Status' => 'Status',
	'Optimize_CheckAll' => 'Alles markeren',
	'Optimize_UncheckAll' => 'Niets markeren',
	'Optimize_InvertChecked' => 'Invert gecontroleerd',
	'Optimize_return' => 'Klik %shier%s om terug te keren naar database optimaliseren',
	'Optimize_success' => 'De database is succesvol geoptimaliseerd',
	'Optimize_NoTableChecked' => 'Er is <b>geen</b> enkele tabellen gecontroleerd',

// End Optimize Database
// Start add - Global announcement MOD
	'Globalannounce' => 'Forummededeling',
// End add - Global announcement MOD

// google bot detector by pukapuka
	'Detector' => 'Googlebot Detector',
	'Detector_Explain' => '',
	'Detector_ID' => '#',
	'Detector_Time' => 'Tijd',
	'Detector_Url' => 'Url',
	'Detector_Clear' => 'Wis alles',
	'Detector_No_Bot' => 'Er is geen Googlebot gedetecteerd',
	'Detector_Cleared' => 'Detectieinformatie is succesvol gewist',
	'Click_Return_Detector' => 'Klik %shier%s om terug te keren naar Googlebot Detector',

// added to Auto group mod
	'group_count' => 'Aantal benodigde berichten',
	'group_count_max' => 'Het maximum aantal berichten',
	'group_count_updated' => '%d gebruiker(s) zijn verwijderd, %d gebruiker(s) zijn toegevoegd aan deze groep',
	'Group_count_enable' => 'Gebruikers automatisch toevoegen als ze berichten plaatsen',
	'Group_count_update' => 'Nieuwe gebruikers toevoegen/bijwerken',
	'Group_count_delete' => 'Oude gebruikers verwijderen/bijwerken',
	'User_allow_ag' => "Autogroep inschakelen",
	'group_count_explain' => 'Als gebruikers meer berichten geplaatst hebben dan deze waarde <i>(in gehele forum)</i> dan worden deze geplaatst in deze gebruikersgroep<br/> Dit gebeurt alleen als de "'. $lang['Group_count_enable'].'" functie is ingeschakeld',
	
	// Start add - Bin Mod
	'Bin_forum' => 'Prullenbak forum',
	'Bin_forum_explain' => 'Een forum ID waar onderwerpen naar toe kunnen worden geplaatst invullen die dan dient als prullenbak, een waarde van 0 schakelt deze functie uit. Je moet de forumpermissies bewerken om het toestaan van weergeven/berichten plaatsen/antwoorden... voor gebruikers of de toegang te ontzeggen tot dit forum.',
// End add - Bin Mod

// Begin Quick Title Edition Mod 1.0.0 by Xavier Olive.
	'Title_infos' => 'Snelle Titelbeheer',
	'Must_select_title' => 'Je moet een snelle titel selecteren',
	'Title_updated' => 'Snelle titel bijgewerkt',
	'Title_added' => 'Snelle titel toegevoegd',
	'Click_return_titleadmin' => 'Klik %shier%s om terug te keren naar snelle titelbeheer',
	'Title_removed' => 'Snelle titel verwijderd',
	'Quick_title_explain' => 'Je kan hier korte tekst bedenken wat je wilt toevoegen aan de titel van een onderwerp, bij gebruik van de knop.</br>Als je de naam van de persoon die deze actie heeft ondernomen of die de titel veranderd heeft wilt toevoegen, gebruik dan %mod% waar je dat wilt plaatsen. Voorbeeld, [Link OK | gecontroleerd door %mod%] wordt weergegeven als [Link OK |gecontroleerd door ModeratorNaam]. Je kan hetzelfde ook doen met de datum, bij plaatsing van %date% waar je maar wilt.',
	'Title_head' => 'Snelle titel',
	'Title_auth' => 'Permissies',
	'Administrator' => 'Beheerder',
	'Topic_poster' => 'Onderwerpauteur',
	'Add_new_title_info' => 'Een snelle titel toevoegen',
	'Title_perm_info' => 'Permissies',
	'Title_perm_info_explain' => 'Gebruikers met deze niveaus zijn in staat om deze snelle titel te gebruiken',
	'Title_info' => 'Snelle Titel',
// End Quick Title Edition Mod 1.0.0 by Xavier Olive.

// Limit Image Width MOD
	'Available' => 'Beschikbaar',
	'Unavailable' => 'Niet beschikbaar',
	'LIW_title' => 'Limietafbeeldingsbreedte MOD',
	'LIW_admin_explain' => 'Deze pagina staat je toe of de limietafbeeldingsbreedte MOD iingeschakeld of uitgeschakeld wordt, als een instelling om de maximum breedte van elke afbeelding geplaatst in dit forum te bepalen. Als je voelt dat de SQL tabel wat cacht de afbeeldingsafmetingen van alle geplaatste afbeeldingen in dit forum te groot worden, dan kun je de tabel legen met een klik op \'Cachetabel legen\' knop.<br /><br />Je kan ook controleren of Limietafbeeldingsbreedte MOD goed werkt met je webserver en het inschakelen, in de \'Compatibiliteitscontrole\' box kun je dat zien',
	'LIW_compatibility_checks' => 'Compatibiliteitscontrole',
	'LIW_mod_config' => 'MOD configuratie',
	
	'LIW_config_updated' => 'De limietafbeeldingsbreedte MOD configuratie is succesvol bijgewerkt',
	'LIW_cache_emptied' => 'De cachetabel is succesvol geleegd',
	'LIW_click_return_config' => 'Klik %shier%s om terug te keren naar limietafbeeldingsbreedte MOD configuratiepagina',
	
	'LIW_getimagesize' => 'getimagesize() URL ondersteuning',
	'LIW_getimagesize_explain' => 'Beschikbaar in PHP 4.0.5',
	'LIW_getimagesize_available' => 'De MOD kan de afbeeldingsafmetingen ontvangen',
	'LIW_getimagesize_unavailable' => 'De MOD kan niet controleren of een afbeelding te groot is, en daarom worden <i>alle</i> geplaatste afbeeldingen verkleind',
	
	'LIW_urlaware' => 'URL-aware fopen wrappers',
	'LIW_urlaware_explain' => 'allow_url_fopen naar ja in je php.ini instellen',
	'LIW_urlaware_available' => 'De MOD kan de vingerafbeelding genereren voor afbeeldingen en daarom is het mogelijk om de afbeeldingsafmetingen op te slaan',
	'LIW_urlaware_unavailable' => 'De MOD kan geen vingerafbeelding genereren voor afbeeldingen en daarom is het niet mogelijk om de afbeeldingsafmetingen op te slaan',
	
	'LIW_openssl' => 'openSSL extensie geladen',
	'LIW_openssl_explain' => 'De openssl.dll extensie laden in je php.ini',
	'LIW_openssl_available' => 'De MOD kan de afmetingen zien van https:// afbeeldingen en kan ze dus ook opslaan',
	'LIW_openssl_unavailable' => 'De MOD kan de afmetingen niet zien van https:// afbeeldingen en kan ze dus ook niet opslaan',
	
	'LIW_enable' => 'De afbeeldingen in berichten verkleinen',
	'LIW_enable_explain' => 'Zet naar %s zodat de MOD de afbeeldingen verkleind worden in de berichten', // Set to 'Yes'] to ....
	'LIW_sig_enable' => 'De afbeeldingen in onderschriften verkleinen',
	'LIW_sig_enable_explain' => 'Zet naar %s zodat de MOD de afbeeldingen verkleind worden in de onderschriften',
	'LIW_attach_enable' => 'De ingevoegde afbeeldingen verkleinen',
	'LIW_attach_enable_explain' => 'Zet naar %s zodat de MOD de afbeeldingen verkleind welke zijn geplaatst door de bijlage MOD',
	'LIW_max_width' => 'Maximum afbeeldingsbreedte',
	'LIW_max_width_explain' => 'De maximum breedte (pixels) ingeven van een afbeelding wat is geplaatst gebruikmakend van de [img] tags',
	'LIW_empty_cache' => 'Afbeeldingsafmetingen cache legen',
	'LIW_empty_cache_explain' => 'Je cachetabel bevat <b>%s</b> records', // Your cache table currently contains <b>312</b> records
	'LIW_empty_cache_note' => 'Opmerking als je de cachetabel leegt, dat de MOD alle afbeeldingsafmetingen opnieuw moet worden opgeslagen, wat betekent dat een onderwerp minder snel geladen kan worden',
	'LIW_empty_cache_button' => 'Leeg cachetabel',

// News
	'xs_news_settings' => 'Nieuwsinstellingen',
	'xs_news_show' => 'Geef nieuwsbanner weer?',
	'xs_news_show_ticker' => 'Geef nieuwsticker weer?',
	'xs_news_show_ticker_explain' => 'Dit is een hoofdschakelaarinstelling, als het \'Nee\' is dan wordt er geen enkele ticker weergegeven, als het \'Ja\' is dan wordt het weergegeven en kun je de individuele tickers instellen met zijn eigen instellingen.',
	'xs_news_show_ticker_subtitle' => 'Tickerondertitel weergeven?',
	'xs_news_show_ticker_subtitle_explain' => 'Zet je het op Ja dan wordt de ondertitel boven de nieuwsticker weergegeven.',
	'xs_news_show_news_subtitle' => 'Nieuwsondertitel weergeven?',
	'xs_news_show_news_subtitle_explain' => 'Zet je het op Ja dan wordt de ondertitel boven de nieuwsitems weergegeven.',
	'xs_news_dateformat' => 'Datumformaat',
	'xs_news_dateformat_helper' => 'Dit formaat gebruiken: %s',

// Bantron Mod : Begin
	'Bantron' => 'Bantron',
	'BM_Title' => 'Bantron',
	'BM_Explain' => 'Op deze pagina, kan je bans toevoegen, aanpassen, bekijken en verwijderen.',
	
	'BM_Show_bans_by' => 'Bans weergeven op ',
	'BM_All' => 'Allemaal',
	'BM_Show' => 'Weergeven',
	
	'BM_IP' => 'IP',
	'BM_Last_visit' => 'Laatste bezoek',
	'BM_Banned' => 'Gebanned',
	'BM_Expires' => 'Verloop',
	'BM_By' => 'Door',
	'BM_Reasons' => 'Reden',
	
	'BM_Add_a_new_ban' => 'Nieuwe ban toevoegen',
	'BM_Delete_selected_bans' => 'De geselecteerde bans verwijderen',
	
	'BM_Private_reason' => 'Privéredenen',
	'BM_Private_reason_explain' => 'Deze reden is alleen te zien in de beheerspaneel, voor de ingegeven namen, e-mailadressen of IP-adressen',
	
	'BM_Public_reason' => 'Publieke redenen',
	'BM_Public_reason_explain' => 'Dit is de reden die de gebande user, e-mailadressen of IP-adres ziet, wanneer hij/zij het forum bezoekt.',
	'BM_Generic_reason' => 'Algemene redenen',
	'BM_Mirror_private_reason' => 'Alternatieve privéredenen',
	'BM_Other' => 'Overige',
	
	'BM_Expire_time' => 'Tijdsperiode',
	'BM_Expire_time_explain' => 'Bij het opgeven van een datum, in relatie met de huidige datum, of een absolute datum, de ban wordt inactief na die tijd.',
	'BM_Never' => 'Nooit',
	'BM_After_specified_length_of_time' => 'Na een opgegeven tijd',
	'BM_Minutes' => 'Minuten',
	'BM_Hours' => 'Uren',
	'BM_Days' => 'Dagen',
	'BM_Weeks' => 'Weken',
	'BM_Months' => 'Maanden',
	'BM_Years' => 'Jaar',
	'BM_After_specified_date' => 'Na een opgegeven datum',
	'BM_AM' => 'am',
	'BM_PM' => 'pm',
	'BM_24_hour' => '24 uur',
	
	'BM_Ban_reasons' => 'Banreden',
// Bantron Mod : End

	'board_disable_message' => 'Dit bericht weergeven als het forum is uitgeschakeld.',
	'board_disable_message_texte' => 'Bericht wordt weergegeven als het forum is uitgeschakeld',

// Start Edit Notes MOD
	'Edit_notes_settings' => 'Bewerknotitienstellingen',
	'Edit_notes_enable' => 'Schakel bewerknotities in',
	'Edit_notes_enable_explain' => 'Bewerknotitie op dit forum inschakelen of uitschakelen',
	'Max_edit_notes' => 'Maximum aantal bewerknotities',
	'Max_edit_notes_explain' => 'Maximum aantal bewerknotities per bericht ingeven.',
	'Edit_notes_permissions' => 'Bewerknotitie permissies',
	'Edit_notes_permissions_explain' => 'Welke gebruikers mogen gebruik maken van bewerknotities ingeven.',
	'Edit_notes_admin' => 'Alleen beheerders',
	'Edit_notes_staff' => 'Beheer (beheerders en moderators)',
	'Edit_notes_reg' => 'Geregistreerde gebruikers (incl. beheerders en moderators)',
	'Edit_notes_all' => 'Alle gebruikers (gasten, geregistreerde gebruikers, beheerders, en moderators)',
// End Edit Notes MOD

// BEGIN Disable Registration MOD
	'registration_status' => 'Schakel registraties uit',
	'registration_status_explain' => 'Dit schakelt nieuwe registraties uit op je forum.',
	'registration_closed' => 'Reden sluiting van de registraties',
	'registration_closed_explain' => 'Tekst dat uitlegt waarom de registraties zijn gesloten, wordt zichtbaar als een gebruiker zich wil registreren. Laat het veld leeg als je de standaardtekst wilt laten weergeven.',
// END Disable Registration MOD

	'Gender_required' => 'Gebruikers moeten verplicht het geslacht opgeven',

//admin user list mail
	'Usersname' => "Gebruikersnaam",
	'Admin_Users_List_Mail_Title' => "Lijst met alle e-mailadressen",
	'Admin_Users_List_Mail_Explain' => "Een lijst met alle e-mailadressen van onze gebruikers",

// Start add - Forum notification MOD
	'Forum_notify' => 'Forumabonnementen toestaan',
	'Forum_notify_enabled' => 'Toestaan',
	'Forum_notify_disabled' => 'Niet toestaan',
// End add - Forum notification MOD

	'Smilie_table_columns' => 'Smilie tabelkolommen',
	'Smilie_table_rows' => 'Smilie tabelregels',
	'Smilie_window_columns' => 'Smilie vensterkolommen',
	'Smilie_window_rows' => 'Smilie vensterregels<br /> (dit is de snelle antwoord smiliesaantal)',
	'Smilie_single_row' => 'Smilies per regel<br /> (b.v. snelle reactie smiliesaantal)',

	'Auth_Rating' => 'Beoordelingen',

// Gravatars
	'Enable_gravatars' => 'Schakel gravatars in',
	'Gravatar_rating' => 'Gravatar maximum beoordeling',
	'Gravatar_rating_explain' => '<a href="http://www.gravatar.com/rating.php" target="_blank">Lees de beoordelingsgids</a> voor meer informatie. Zet naar \'Geen\' voor geen beperking.',
	'Gravatar_default_image' => 'Gravatar standaardafbeelding',
	'Gravatar_default_image_explain' => 'Als er geen gravatar wordt gevonden, dan gaat de server terug naar deze afbeelding. Pad naar de afbeelding is relatief aan de phpBB root map. Laat het veld leeg voor geen afbeelding.',

// Admin Account Actions
	'Account_actions' => 'Accountacties',
	'Account_inactive_explain' => 'Hier kan je alle gebruikers bekijken die inactief zijn of wachten op hun activatie. Je kan activeren of verwijderen van deze accounts.<br />Verder kan je hun permissies wijzigen of bewerken van hun profielen met een klik op de volgende links.',
	'Account_active_explain' => 'Hier kan je alle gebruikers bekijken die actief zijn. Je kan deactiveren of verwijderen van deze accounts.<br />Verder kan je hun permissies wijzigen of bewerken van hun profielen met een klik op de volgende links.',
	'Account_active' => 'actieve gebruikers',
	'Account_inactive' => 'inactieve gebruikers',
	'Account_activate' => 'Activeer gemarkeerde',
	'Account_deactivate' => 'Deactiveer gemarkeerde',
	'Account_none' => 'Er zijn geen gebruikers die wacht op activatie.',
	'Account_total_user' => 'Hoeveel gebruikers: <b>%d</b> gebruiker',
	'Account_total_users' => 'Hoeveel gebruikers: <b>%d</b> gebruikers',
	'Account_activation' => 'Activeermethode',
	'Account_awaits' => 'Wacht op activatie sinds',
	'Account_registered' => 'Geregistreerd sinds',
	'Account_delete_users' => 'Weet je zeker dat je deze gebruikers wilt verwijderen?',
	'Account_delete_user' => 'Weet je zeker dat je deze gebruiker wilt verwijderen?',
	'Account_sort_letter' => 'Alle accounts beginnend met weergeven',
	'Account_others' => 'anders',
	'Account_all' => 'alles',
	'Account_year' => 'jaar',
	'Account_years' => 'jaren',
	'Account_week' => 'week',
	'Account_weeks' => 'weken',
	'Account_day' => 'dag',
	'Account_days' => 'dagen',
	'Account_hour' => 'uur',
	'Account_hours' => 'uren',
	'Account_user_activated' => 'De gebruiker is geactiveerd.',
	'Account_users_activated' => 'De gebruikers zijn geactiveerd.',
	'Account_user_deactivated' => 'De gebruiker is gedeactiveerd.',
	'Account_users_deactivated' => 'De gebruikers zijn gedeactiveerd.',
	'Account_user_deleted' => 'De gebruiker is verwijderd.',
	'Account_users_deleted' => 'De gebruikers zijn verwijderd.',
	'Account_activated' => 'Accountactivatie',
	'Account_activated_text' => 'Je account is geactiveerd',
	'Account_deactivated' => 'Accountdeactivatie',
	'Account_deactivated_text' => 'Je account is gedeactiveerd',
	'Account_deleted' => 'Accountverwijdering',
	'Account_deleted_text' => 'Je account is verwijderd',
	'Account_notification' => 'E-mailbevestiging versturen.',

// Acronyms
	'Acronyms_title' => 'Afkortingenbeheer',
	'Acronyms_explain' => 'In dit venster kun je afkortingen die je automatisch toegevoegd in de berichten: toevoegen, bewerken en verwijderen.',
	'Acronym' => 'Afkorting',
	'Acronyms' => 'Afkortingen',
	'Edit_acronym' => 'Bewerk afkorting',
	'Description' => 'Beschrijving',
	'Add_new_acronym' => 'Voeg nieuwe afkorting toe',
	'Update_acronym' => 'Afkorting bijwerken',
	
	'Must_enter_acronym' => 'Je moet een afkorting en een omschrijving ingeven',
	'No_acronym_selected' => 'Er is geen afkorting geselecteerd om te bewerken',
	
	'Acronym_updated' => 'De geselecteerde afkorting is succesvol bijgewerkt',
	'Acronym_added' => 'De afkorting is succesvol toegevoegd',
	'Acronym_removed' => 'De geselecteerde afkorting is succesvol verwijderd',
	
	'Click_return_acronymadmin' => 'Klik %shier%s om terug te keren naar afkortingenbeheer',
	'Prune_shouts' => 'Automatisch berichten verwijderen', 
	'Prune_shouts_explain' => 'Het aantal dagen voor berichten worden verwijderd, als de waarde 0 is zal de automatische verwijderen niet werken',
	
	'MOD_OS_ForumRules' => 'Forumregels',
	'Forum_rules' => 'Forumregels',
	'Rules_display_title' => 'Titel in de forumregelsgebied weergeven?',
	'Rules_custom_title' => 'Eigen titel',
	'Rules_appear_in' => 'Deze forumregels worden weergegeven in ...',
	'Rules_in_viewforum' => 'In dit forum weergeven',
	'Rules_in_viewtopic' => 'In onderwerpen weergeven op dit forum',
	'Rules_in_posting' => 'Bij het berichten plaatsen of antwoorden weergeven in dit forum',
	
	'Php_Info_Explain' => 'Deze pagina geeft informatie over de versie van PHP dat is geïnstalleerd op deze server. Daarbij zit inbegrepen, de details van de geladen modules, beschikbare variabelen en standaard instellingen. Deze informatie is zeer handig bij problemen om een diagnose te stellen. Maar let op, het kan zijn dat je hostingbedrijf deze informatie om veiligheidsredenen niet doorgeeft. Je wordt geadviseerd om de details die op deze pagina worden weergegeven NIET door te geven op ondersteuningsforums.',

	'IcyPhoenix_Main' => 'Icy Phoenix homepagina',
	'IcyPhoenix_Download' => 'Icy Phoenix download',
	'IcyPhoenix_Code_Changes' => 'Icy Phoenix update',
	'IcyPhoenix_Updates' => 'Icy Phoenix updates',
	'PhpBB_Upgrade' => 'phpBB upgrade',
	'Header_Welcome' => 'Welkom bij de beheerderspaneel van Icy Phoenix',

	'Prune_users' => 'Ruim gebruikers op',
	'Prune_Overview' => 'Opruimoverzicht',
	'Prune_title_explain' => 'Hier kan je de opruiminstellingen van elk forum beheren.',
	'Prune_forum' => 'Forum',
	'Prune_active' => 'Opruiming actief',
	'Prune_freq' => 'Verwijder alles',
	'Prune_check' => 'Controleer alles',
	'Prune_days' => 'Dagen',
	'Prune_days_explain' => '* Onderwerpen verwijderen waar nog geen berichten in zijn geplaatst.',
	'Click_return_admin_po' => '%sKlik hier%s om terug te keren naar de opruimoverzicht',
	'Prune_update' => 'De opruiminstellingen zijn succesvol bijgewerkt',

	'Admin_notepad_title' => 'Kladblok',
	'Admin_notepad_explain' => 'Op dit paneel kunnen beheerders berichten achterlaten voor een andere beheerder in dit forum.',
	'Allow_generator' => 'Avatar Generator inschakelen',
	'Avatar_generator_template_path' => 'Avatar Generator stijlpad',
	'Avatar_generator_template_path_explain' => 'Pad in je phpBB map voor je stijlafbeeldingen, b.v. images/avatars/generator_templates',

// Start Autolinks Mod
	'Autolink_first' => 'Autolink elke trefwoord in bericht',
	
	'Autolinks_title' => 'Autolinks',
	'Autolinks_explain' => 'Op dit paneel kun je trefwoorden die automatisch worden vervangen door een url in berichten toevoegen, bewerken en verwijderen. Als de url die je ingegeven hebt een interne url is, dan wordt er een sessie ID toegevoegd aan de link.<br /><br />bv. Als gevonden is, de <b>trefwoord</b> in een bericht wordt automatisch vervangen door het volgende,<br /><br />&lt;a href="<b>Url</b>" title="<b>opmerking</b>" style="<b>stijl</b>"&gt;<b>tekst</b>&lt;/a&gt;',
	'links_keyword' => 'Trefwoord',
	'links_title' => 'Tekst',
	'links_url' => 'Url',
	'links_comment' => 'Opmerking',
	'links_style' => 'Stijl',
	'links_forum' => 'Forum voor autolink',
	'links_forum2' => 'Forum',
	'links_internal' => 'Intern',
	'Autolinks_add' => 'Een autolink toevoegen',
	'Add_keyword' => 'Autolink toevoegen',
	'Autolinks_edit' => 'Eeen autolink bewerken',
	'Edit_keyword' => 'Autolink bewerken',
//'Delete_link' => 'Controleveld om deze autolink te verwijderen.',
	
	'Select_all_forums' => 'Alle forums',
	'Autolink_added' => 'Autolink is succesvol toegevoegd.',
	'Autolink_updated' => 'Autolink is succesvol bijgewerkt.',
	'Autolink_removed' => 'Autolink is succesvol verwijerd.',
	'No_autolink_selected' => 'Er is geen autolink geselecteerd om te verwijderen.',
	'No_autolinks' => 'Er zijn geen autolinks in de database.',
	'Must_enter_autolink' => 'Je moet een trefwoord, link tekst en een url ingeven.',
	'Click_return_autolinkadmin' => 'Klik %shier%s om terug te keren naar de autolinksbeheer',
// End Autolinks Mod

// XS BUILD 030

// Login attempts configuration
	'Max_login_attempts' => 'Toegestane aantal loginpogingen', 
	'Max_login_attempts_explain' => 'Aantal toegestane pogingen om in te loggen op je forum', 
	'Login_reset_time' => 'Wachttijd tussen twee loginpogingen', 
	'Login_reset_time_explain' => 'De tijd instellen hoelang een gebruiker moet wachten als hij/zij de maximale aantal loginpogingen heeft overschreden',

// XS BUILD 035
// Smilies Order
	'position_new_smilies' => 'Nieuwe smilies ervoor moeten worden toegevoegd of na de bestaande smilies?',
	'smiley_change_position' => 'Vervanglocatie veranderen',
	'before' => 'Ervoor',
	'after' => 'Erna',
	'Move_top' => 'Naar boven verplaatsen',
	'Move_end' => 'Naar beneden verplaatsen',

// XS BUILD 037
// Pages Auth
	'auth_view_title' => 'Paginabekijkbevoegdheid',
	'auth_view_portal' => 'Startpagina',
	'auth_view_forum' => 'Forum',
	'auth_view_viewf' => 'Forum weergeven',
	'auth_view_viewt' => 'Onderwerp weergeven',
	'auth_view_faq' => 'FAQ',
	'auth_view_memberlist' => 'Gebruikerslijst',
	'auth_view_group_cp' => 'Gebruikersgroepen',
	'auth_view_profile' => 'Profiel',
	'auth_view_search' => 'Zoeken',
	'auth_view_album' => 'Album',
	'auth_view_links' => 'Links',
	'auth_view_calendar' => 'Kalender',
	'auth_view_attachments' => 'Bijlagen',
	'auth_view_download' => 'Download',
	'auth_view_pic_upload' => 'Afbeeldingupload (icy afbeeldingen plaatsen)',
	'auth_view_kb' => 'Kennisbank',
	'auth_view_ranks' => 'Rangen',
	'auth_view_statistics' => 'Statistieken',
	'auth_view_recent' => 'Laatste onderwerpen',
	'auth_view_referrers' => 'Referrers',
	'auth_view_rules' => 'Regels',
	'auth_view_site_hist' => 'Websitegeschiedenis',
	'auth_view_shoutbox' => 'Babbelbox',
	'auth_view_viewonline' => 'Online weergeven',
	'auth_view_contact_us' => 'Contact',
	'auth_view_ajax_chat' => 'Chat',
	'auth_view_ajax_chat_archive' => 'Chatarchief',
	'auth_view_custom_pages' => 'Eigen pagina\'s',

// Begin Yahoo Submit Your Site MOD by www.pentapenguin.com
	'Yahoo_search' => 'Yahoo zoeken',
	'Yahoo_search_settings' => 'Yahoo zoekinstellingen',
	'Yahoo_search_settings_explain' => 'Hier kan je de instellingen voor de Yahoo zoek je website in MOD aanpassen. Voor meer informatie, zie de  <a href="http://submit.search.yahoo.com/free/request" target="_blank">Yahoo zoek je website in website</a>.',
	'Yahoo_search_select_forums' => 'Selecteer forums',
	'Yahoo_search_select_forums_explain' => 'Selecteer welke forums je wil toevoegen aan deze lijst. Je kan zo veel forums selecteren als je wil door op elke forumnaam te klikken terwijl je de CRTL toets (Windows) of de Command toets (Macintosh) ingedrukt houdt. Standaard zijn alle openbaar toegankelijke forums geselecteerd.',
	'Yahoo_search_savepath' => 'Pad opslaan voor de URL lijst',
	'Yahoo_search_savepath_explain' => 'Geef een locatie op voor de URL lijst die opgeslagen zal worden. Geef een pad op relatief aan de phpBB hoofdmap. Bijv: Wanneer je de cachemap wil gebruiken op <b>www.domein.nl/phpBB/cache/</b> geef je <b>cache</b> op. Onthoud dat je de map dan op CHMOD 777 moet zetten.',
	'Yahoo_search_additional_urls' => 'Extra URL\'s ingeven',
	'Yahoo_search_additional_urls_explain' => 'Geef extra URI\'s op die Yahoo ook moet indexeren. Plaats ze onder elkaar, op elke regel een. Geef ook een volledig adres op. Bijv. <b>http://www.domein.nl/pagina.html</b>.',
	'Yahoo_search_compress_file' => 'De URL lijst comprimeren',
	'Yahoo_search_compress_file_explain' => 'Wanneer je JA kiest bij deze optie zal de URL lijst worden gecomprimeerd met Gzip wat zorgt voor een minder groot bestand en dus minder bandbreedte verbruik door de Yahoobot. Deze instelling werkt niet wanneer de server geen Gzip ondersteuning heeft.',
	'Yahoo_search_compression_level' => 'Compressieniveau voor bestand',
	'Yahoo_search_compression_level_explain' => 'Kies een compressieniveau voor het bestand. 9 is de aanbevolen instelling tenzij je problemen ondervindt, dan kan je beter een lagere waarde instellen.',
	'Yahoo_search_generate_file' => 'Bestand aanmaken',
	'Yahoo_search_error_no_forums' => 'Fout: Er zijn geen forums geselecteerd. Ga terug en kies op zijn minst een forum.',
	'Yahoo_search_error_no_gzip' => 'Fout: Of je gebruikt een oude PHP versie, of de webserver ondersteunt geen Gzip. Ga terug en kies <b>Nee</b> voor de <b>De URI lijst comprimeren</b> instelling.',
	'Yahoo_search_error_unopenable_file' => 'Fout: Kan het bestand %s niet openen.',
	'Yahoo_search_error_unwritable_file' => 'Fout: Kan het bestand %s niet schrijven.',
	'Yahoo_search_error_unclosable_file' => 'Fout: Kan het bestand %s niet sluiten.',
	'Yahoo_search_error_update_sql' => 'Fout: Kan het veld %s niet bijwerken',
	'Yahoo_search_error_unknown_file_error' => 'Fout: Het bestand is niet opgeslagen wegens een onbekende fout.',
	'Yahoo_search_file_done' => 'De URL lijst is verwerkt en opgeslagen. Kopieer onderstaand adres en geef het op in het juiste veld bij :<br /><b>%s</b>',
// Finish Yahoo Submit Your Site MOD by www.pentapenguin.com

// Bookmark Mod
	'Max_bookmarks_links' => 'Maximum aantal favorieten in linktag',
	'Max_bookmarks_links_explain' => 'Aantal favorieten maximaal zenden in het begin van het document. Deze informatie is bijv. gebruikt door Mozilla. Typ 0 om deze functie uit te schakelen.',
	
	'Faq_manager' => 'FAQ Beheer',
	'Faq_Rules_manager' => 'FAQ &amp; regels',
	'board_rules' => 'Forumregels',
	'board_faq' => 'Forum FAQ',
	'bbcode_faq' => 'BBcode FAQ',
	'attachment_faq' => 'Attachment FAQ',
	'prillian_faq' => 'Prillian FAQ',
	'bid_faq' => 'Vriendenlijst FAQ',
	
	
	'Account_active2' => 'Actieve gebruikers',
	'Account_inactive2' => 'Inactieve gebruikers',

// Search Flood Control - added 2.0.20
	'Search_Flood_Interval' => 'Zoekfloodinterval',
	'Search_Flood_Interval_explain' => 'Aantal seconden dat de gebruiker moet wachten tussen zoekacties.', 
	'Confirm_delete_smiley' => 'Weet je zeker dat je deze smilie wilt verwijderen?',
	'Confirm_delete_word' => 'Weet je zeker dat je deze wordcensuur wilt verwijderen?',
	'Confirm_delete_rank' => 'Weet je zeker dat je deze rang wilt verwijderen?',

// Custom Profile Fields MOD
	'custom_field_notice_admin' => 'Deze dingen zijn gemaakt door een andere beheerder. Items met een * zijn verplicht. Items met een teken zijn alleen zichtbaar voor beheerders.',
	
	'field_deleted' => 'Het veld is verwijderd',
	'double_check_delete' => 'Weet je zeker dat je het veld "%s" permanent uit de database wilt verwijderen', 
	
	'here' => 'Hier',
	'new_field_link' => '<a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">%s</a>',
	'edit_field_link' => '<a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'index_link' => '<a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'field_exists' => 'Deze veld bestaat al.<br /><br />Je kan proberen om een <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">nieuw</a> profielveld toe te voegen,<br /><br />of proberen de bestaande profielveld <a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">te bewerken</a>.',
	'click_here_here' => 'Klik <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">hier</a> om een andere profielveld toe te voegen,<br /><br />of klik <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">hier</a> om terug te keren naar de beheerdersindex.',
	'field_success' => 'Veld succesvol toegevoegd!<br /><br />Klik <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">hier</a> om een andere profielveld toe te voegen,<br /><br />of klik <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">hier</a> om terug te keren naar de beheerdersindex.',
	'Custom_Profile' => 'Profielvelden',
	'profile_field_created' => 'Profielveld gemaakt',
	'profile_field_updated' => 'Profielveld bijgewerkt',
	
	'add_field_title' => 'Een profielveld toevoegen',
	'edit_field_title' => 'Een profielveld bewerken',
	'add_field_explain' => 'Hier kun je nieuwe velden instellen die gebruikers kunnen invullen.',
	'edit_field_explain' => 'Hier kun je de velden aanpassen die al gemaakt zijn.',
	
	'add_field_general' => 'Algemene instellingen',
	'add_field_admin' => 'Beheerdersinstellingen',
	'add_field_view' => 'Weergaveinstellingen',
	'add_field_text_field' => 'Tekstveldinstellingen',
	'add_field_text_area' => 'Tekstgebiedinstellingen',
	'add_field_radio_button' => 'Radioknopinstellingen',
	'add_field_checkbox' => 'Controleveldinstellingen',

	'default_value' => 'Standaardwaarde',
	'default_value_explain' => 'Dit is standaard voor dit veld. Als een gebruiker dit niet veranderd is dit de standaardwaarde. Als dit een verplicht veld is, dan is dit de waarde die alle bestaande gebruikers hebben.',
	'default_value_radio_explain' => 'Geef een naam om te gebruiken bij een geschreven waardeveld.',
	'default_value_checkbox_explain' => 'Geef de waarde die standaard aangevinkt zal zijn. Deze waarde moeten in de beschikbare waarden vallen',
	'max_length' => 'maximum lengte',
	'max_length_explain' => 'Dit is de maximum lengte voor dit veld.',
	'max_length_value' => ' dit moet een nummer zijn tussen %d en %d.',
	'available_values' => 'Beschikbare waarden',
	'available_values_explain' => 'Elke waarde op een andere regel plaatsen', 
	
	'add_field_view_disclaimer' => 'Al deze instellingen zullen gezien worden als "Nee" als gebruikers het veld niet mogen veranderen',
	
	'add_field_name' => 'Veldnaam',
	'add_field_name_explain' => 'De naam van het veld ingeven.',
	'add_field_description' => 'Veldomschrijving',
	'add_field_description_explain' => 'Een omschrijving van het veld, Het wordt net als deze tekst weergegeven.',
	'add_field_type' => 'Soort veld',
	'add_field_type_explain' => 'Selecteer het soort veld dat je wilt toevoegen. Voorbeelden van de mogelijkheden staan hiernaast.',
	'edit_field_type_explain' => 'Selecteer naar welk soort je het veld wilt veranderen. Voorbeelden van de mogelijkheden staan hiernaast.',
	'add_field_required' => 'Als verplicht instellen',
	'add_field_required_explain' => 'Als dit veld op  "Verplicht" is ingesteld, dan <strong>moet</strong> iedere gebruiker die zich registreert het invullen, alle bestaande gebruikers krijgen er dan de standaardwaarde in te staan.',
	'add_field_user_can_view' => 'Sta gebruikers toe dat ze het kunnen bekijken',
	'add_field_user_can_view_explain' => 'Als dit ingesteld is op "Ja", Dan kan de gebruiker dit veld zien en veranderen. Als dit is ingesteld op "Nee", Dan kunnen alleen beheerders het bekijken of bewerken. Als dit is ingesteld op "Ja", kan het veld niet verplicht zijn.',
	'view_in_profile' => 'Zichtbaar in het gebruikerprofiel',
	'profile_locations_explain' => 'Deze optie is voor het weergeven in het profiel.',
	'contacts_column' => 'Contact kolom',
	'about_column' => 'Alles over kolom',
	'view_in_memberlist' => 'Zichtbaar in gebruikerslijst',
	'view_in_topic' => 'Zichtbaar in onderwerp',
	'topic_locations_explain' => 'Deze opties zijn voor het weergeven in een bericht.',
	'author_column' => 'Onder avatar',
	'above' => 'boven ',
	'below' => 'onder ',
	
	'textarea' => 'Tekstgebied',
	'textarea_example' => 'Dit is een voorbeeld van een tekstgebied',
	'text_field' => 'Tekstveld',
	'text_field_example' => 'Dit is een voorbeeld van een tekstveld',
	'radio' => 'Radioknop',
	'radio_example' => 'Dit is een voorbeeld van 2 radioknoppen',
	'checkbox' => 'Controleveld',
	'checkbox_example' => 'Dit is een voorbeeld van twee controlevelden', 
	
	'profile_field_list' => 'Eigen profielvelden',
	'profile_field_list_explain' => 'Dit zijn alle eigen profielvelden, met links om ze te verwijderen of bewerken.',
	'profile_field_id' => 'ID #',
	'profile_field_name' => 'veldnaam',
	'profile_field_action' => 'Actie',
	'no_profile_fields_exist' => 'Er zijn nog geen eigen velden gemaakt.',
	
	'enter_a_name' => 'Je <strong>moet</strong> een veldnaam ingeven.<br><br>Klik op terug en probeer het opnieuw',
// END Custom Profile Fields MOD

	'Add' => 'Toevoegen',
	'split_global_announce' => 'Forummededelingen splitsen',
	'split_announce' => 'Mededelingen splitsen',
	'split_sticky' => 'Vastgepinde onderwerpen splitsen',
	'split_topic_split' => 'Onderwerpen splitsen',
	'Announce_settings' => 'Mededelingeninstellingen',
	'Split_settings' => 'Instellingen splitsen',
	'Server_Cookies' => 'Serverinstellingen',
	'Disable_Registration_IP_Check' => 'Openbare zwarte lijst IP-adrescontrole bij registeren uitschakelen',
	'Disable_Registration_IP_Check_Explain' => 'Als je de openbare lijst IP-adrescontrole uitschakelt tijdens het registreren, dan wordt het IP-adres niet gecontroleerd of deze voorkomt in de zwarte lijst. Het uitschakelen van deze functie geeft wel consequenties, omdat er soms gebruikers zijn die registreren wel een geldige IP-adres hebben maar toch voorkomen op de zwarte lijst wat dan ten onrechte is.',
	'Config_explain2' => 'Dit formulier hieronder staat toe dat je de kalender en subforumopties naar je hand zet. Je kan het gedrag en instellingen veranderen in dit venster.',
	'Forum_postcount' => 'Aantal gebruikersberichten',
	'Use_Captcha' => 'CAPTCHA gebruiken',
	'Use_Captcha_Explain' => 'Als is ingesteld naar JA, dan is de uitgebreide bevestigingscode in gebruik. Als het naar NEE is ingesteld dan wordt de standaard phpBB bevestigingscode gebruikt.',
	'Sync_Pics_Count' => 'Klik <b>JA</b> dan worden alle gebruikers afbeeldingsaantallen gesynchroniseerd.',
	'Pics_Count_Synchronized' => 'Afbeeldingsaantal van gebruiker is succesvol gesynchroniseerd',
	'Pics_Count_Not_Synchronized' => 'Afbeeldingsaantal van gebruiker is niet succesvol gesynchroniseerd',

// IP - BUILD 001
	'Enable_Digests' => 'Digests inschakelen',
	'Enable_Digests_PHPCron' => 'Digests PHP Cron inschakelen',
	'Enable_Digests_PHPCron_Explain' => 'Deze functie schakelt een PHP emulatie van een cron in om e-mails per uur te verzenden, maar sinds het is gebaseerd op een PHP emulatie kan het niet altijd succesvol worden uitgevoerd. Dat betekend dat soms de e-mails niet verzonden kunnen worden. Als je cron ingeschakeld hebt op je server, gebruik dan cron in deze functie.',

// Ajax Shoutbox - BEGIN
	'Shoutbox_config' => 'AJAX Babbelboxconfiguratie',
	'Shout_read_only' => 'Alleen lezen',
	'Displayed_shouts' => 'Weergegeven babbels',
	'Displayed_shouts_explain' => 'Aantal babbels dat weergegeven wordt bij het laden van de babbelbox.<br /><i>0 om alle babbels te laden.</i>',
	'Stored_shouts' => 'Opgeslagen babbels',
	'Stored_shouts_explain' => 'Aantal babbels wat bestaan in de database.<br />Dit getal moet hoger of gelijk zijn aan de waarde van de aantal weergegeven babbels.<br /><i>0 om alle babbels te bewaren.</i>',
	'Shout_guest_allowed' => 'Gasten toestaan',
	'Shoutbox_flood' => 'Floodinterval',
	'Shoutbox_flood_explain' => 'Aantal seconden dat een gebruiker moet wachten tussen twee babbels.',
	'Shoutbox_refreshtime' => 'Vernieuwtijd',
	'Shoutbox_refresh_explain' => 'Tijd in miliseconden voor de babbelbox om nieuwe berichten te lezen.<br /><i>Deze waarde moet groter zijn dan 1000 miliseconden.</i>',
// Ajax Shoutbox - END

/* lang_postcount.php - BEGIN */
	'Postcounts' => 'Berichtaantallenbeheer',	
	'Post_count_explain' => '<b>Bewerk berichtenaantal van een gebruiker.</b>',
	'Modify_post_counts' => 'De berichtaantallen veranderen',
	'Post_count_changed' => 'Je hebt met succes de gebruiker zijn/haar berichtaantal bewerkt!',
	'Click_return_posts_config' => 'Klik %shier%s om terug te keren naar berichtaantallenbeheer',
	'Modify_post_count' => 'Wijzig berichtenaantal',
	'Edit_post_count' => 'Bewerk de berichtaantal voor <b>%s</b>',
	'Post_count' => 'Aantal berichten',
/* lang_postcount.php - END */

/* lang_megamail.php - BEGIN */
	'Megamail_Explain' => 'Hier kan je een e-mailbericht versturen naar alle gebruikers, of alle gebruikers van een specifieke groep. Om dat te doen, een e-mail wordt verstuurd waar de administratieve e-mailadres aan vastgekoppeld is, met een BBC voor alle ontvangers.<br /> Deze aangepaste script verstuurt de e-mails in verschillende batches. Dit om te voorkomen dat er een server-timeout of serverlaadproblemen zijn bij het versturen van deze e-mails. De status van de massa e-mailactie kan worden verstuurd en opgeslagen worden in de database. Je kan het venster sluiten, wanneer je het wilt pauzeren de massa e-mailversturing (de huidige batch wordt nog wel verstuurd). Je kan het later altijd nog simpel inschakelen wanneer je dat nodig vind.',
	'megamail_inactive_users' => 'Niet bezoekende gebruikers in de laatste {DAYS} dagen',
	'megamail_header' => 'Jouw e-mailsessies',
	'megamail_id' => 'E-mail ID',
	'megamail_batchstart' => 'In behandeling genomen',
	'megamail_batchsize' => 'E-mails per batch',
	'megamail_batchwait' => 'Pauze',
	'megamail_created_message' => 'De massa e-mail is opgeslagen in de database.<br /><br/> Om het versturen te starten %sklik hier%s of wacht totdat de meta-refresh je daarheen brengt...',
	'megamail_send_message' => 'De huidige batch (%s - %s) is verzonden.<br /><br/> Om het versturen voort te zetten %sklik hier%s of wacht totdat de meta-refresh je daarheen brengt...',
	'megamail_status' => 'Status',
	'megamail_proceed' => '%sUitvoeren%s',
	'megamail_done' => 'VOLTOOID',
	'megamail_none' => 'Er zijn geen records gevonden.',
	'megamail_delete_confirm' => 'Weet je zeker dat je deze e-mailbericht wilt verwijderen?',
	'megamail_deleted' => 'E-mailbericht is succesvol verwijderd',
	'megamail_click_return' => 'Klik %shier%s om terug te keren naar massa e-mail / pb',
/* lang_megamail.php - END */

/* lang_admin_voting.php - BEGIN */
	'Admin_Vote_Explain' => 'Peilingresultaten (wie heeft er gestemd en wat).',
	'Admin_Vote_Title' => 'Peilingbeheer',
	'Vote_id' => '#',
	'Poll_topic' => 'Pollonderwerp',
	'Vote_username' => 'Stemmer(s)',
	'Vote_end_date' => 'Stemduur',
	'Sort_vote_id' => 'Peilingnummer',
	'Sort_poll_topic' => 'Peilingonderwerp',
	'Sort_vote_start' => 'Startdatum',
	'Submit' => 'Bevestigen',
	'Select_sort_field' => 'Selecteer sorteerveld',
	'Sort_ascending' => 'Oplopend',
	'Sort_descending' => 'Aflopend',
/* lang_admin_voting.php - END */

/* lang_admin_gd_info.php - BEGIN */
	'GD_Title' => 'GD Info',
	'NO_GD' => 'Er is geen GD',
	'GD_Description' => 'Hier ontvang je informatie over de huidig geinstalleerde GD bibliotheek',
	'GD_Freetype_Support' => 'Freetype lettertypeondersteuning:',
	'GD_Freetype_Linkage' => 'Freetype linktype:',
	'GD_T1lib_Support' => 'T1lib ondersteuning:',
	'GD_Gif_Read_Support' => 'GIF leesondersteuning:',
	'GD_Gif_Create_Support' => 'GIF maakondersteuning:',
	'GD_Jpg_Support' => 'JPG/JPEG ondersteuning:',
	'GD_Png_Support' => 'PNG ondersteuning:',
	'GD_Wbmp_Support' => 'WBMP ondersteuning:',
	'GD_XBM_Support' => 'XBM ondersteuning:',
	'GD_Jis_Mapped_Support' => 'Japanse letterondersteuning:',
	'GD_True' => 'Ja',
	'GD_False' => 'Nee',
/* lang_admin_gd_info.php - END */

/* lang_admin_captcha.php - BEGIN */
	'VC_Captcha_Config' => 'CAPTCHA',
	'captcha_config_explain' => 'Hier kun je de weergave van de CAPTCHA-afbeelding wijzigen, deze wordt gebruikt bij de bevestigingscode tijdens de registratie.',
	'VC_active' => 'Bevestigingscode is actief!',
	'VC_inactive' => 'Bevestigingscode is niet actief!',
	'background_configs' => 'Achtergrond',
	'Click_return_captcha_config' => 'Klik %shier%s om terug te keren naar de CAPTCHA configuratie',
	
	'CAPTCHA_width' => 'CAPTCHA breedte',
	'CAPTCHA_height' => 'CAPTCHA hoogte',
	'background_color' => 'Achtergrondkleur',
	'background_color_explain' => 'Geef de kleur in hexadecimaal (bv. #0000FF is blauw).',
	'pre_letters' => 'Aantal schaduwletters',
	'pre_letters_explain' => 'Hier kun je het aantal schaduwletters opgeven dat je wilt weergeven.',
	'great_pre_letters' => 'Schaduwletterverschillen vergroten',
	'great_pre_letters_explain' => 'Hier geef je op hoe de schaduwletters in grootte moeten verschillen.',
	'Random' => 'Wilekeurig',
	'random_font_per_letter' => 'Willekeurig lettertype per letter',
	'random_font_per_letter_explain' => 'Dit aanzetten om iedere letter in een willekeurig lettertype weer te geven.',
	
	'back_chess' => 'Schaakbord',
	'back_chess_explain' => 'Vult de achtergrond met 16 blokken.',
	'back_ellipses' => 'Ellipsen',
	'back_arcs' => 'Gebogen lijnen',
	'back_lines' => 'Lijnen',
	'back_image' => 'Achtergrondafbeelding',
	'back_image_explain' => '(Deze functie functioneert nog niet)',
	
	'foreground_lattice' => 'Voorgrondwaas',
	'foreground_lattice_explain' => '(breedte x hoogte)<br />Een waas over de CAPTCHA weergeven',
	'foreground_lattice_color' => 'Waaskleur',
	'foreground_lattice_color_explain' => 'Indicatie in hexadecimaal (bv. #0000FF voor blauw)',
	'gammacorrect' => 'Contrastcorrectie',
	'gammacorrect_explain' => '(0 = uit)<br />LET OP!!! Wijzigen van deze waarde heeft direct invloed op de leesbaarheid van de CAPTCHA!',
	'generate_jpeg' => 'Afbeeldingstype',
	'generate_jpeg_explain' => 'Het JPEG-formaat heeft een grotere compressie dan PNG, maar heeft daardoor ook direct invloed op de leesbaarheid van de CAPTCHA.',
	'generate_jpeg_quality' => 'Kwaliteit',
/* lang_admin_captcha.php - END */

/* lang_admin_topic_shadow.php - BEGIN */
	'Del_Before_Date' => 'Verwijderd alle schaduwonderwerpen voor %s<br />', // %s = insertion of date
	'Deleted_Topic' => 'Verwijderd schaduwonderwerp %s<br />', // %s = topic name
	'Affected_Rows' => '%d bekende ingangen gemaakt<br />', // %d = affected rows (not avail with all databases!)
	'Delete_From_Date' => 'Alle schaduwonderwerpen die gemaakt zijn voor de ingevoerde datum zullen verwijderd worden.',
	'Delete_Before_Date_Button' => 'Verwijder alles voor datum',
	'No_Shadow_Topics' => 'Er zijn geen schaduwonderwerpen gevonden.',
	'Topic_Shadow' => 'Schaduwonderwerpen',
	'TS_Desc' => '<b>Verwijder schaduwonderwerpen zonder het originele bericht te verwijderen.</b><br /> Schaduwonderwerpen zijn gemaakt wanneer je een bericht verplaatst naar een ander forum en kiest om het met een link (naar het bericht) in het originele forum te achter te laten.',
	'Month' => 'Maand',
	'Day' => 'Dag',
	'Year' => 'Jaar',
	'Clear' => 'Wissen',
	'Resync_Ran_On' => 'Resynchronisatie gedraaid op %s<br />', // %s = insertion of forum name
	'Version' => 'Versie',
	
	'Title' => 'Titel',
	'Moved_To' => 'Verplaatst naar',
	'Moved_From' => 'Verplaatst van',

/* Modes */
	'topic_time' => 'Onderwerptijd',
	'topic_title' => 'Onderwerptitel',

/* Errors */
	'Error_Month' => 'De ingegeven maand moet een waarde zijn tussen 1 en 12',
	'Error_Day' => 'De ingegeven dag moet een waarde zijn tussen 1 en 31',
	'Error_Year' => 'Het ingegeven jaar moet een waarde zijn tussen 1970 en 2038',
	'Error_Topics_Table' => 'Fout, er is geen toegang tot de onderwerpentabel',
/* lang_admin_topic_shadow.php - END */

/* lang_admin_rebuild_search.php - BEGIN */
	'Rebuild_search' => 'Zoeken opbouwen',
	'Rebuild_search_desc' => 'Dit zal iedere pagina in uw kennisbank indexeren, bouwt zoektabellen opnieuw op. Dat proces kan lang duren, verlaat deze pagina niet voordat alles is afgerond.',
	'Post_limit' => 'Berichtlimiet',
	'Time_limit' => 'Tijdslimiet',
	'Refresh_rate' => 'Vernieuwinterval',
	
	'Next' => 'Volgende',
	'Finished' => 'Afgerond',
/* lang_admin_rebuild_search.php - END */

/* lang_admin_faq_editor.php - BEGIN */
	'faq_editor' => 'Taal wijzigen',
	'faq_editor_explain' => 'Deze module zorgt er voor dat je de Bijlage FAQ, BBCode FAQ en Forum FAQ kunt wijzigen en herschikken. Je <u>mag geen</u> secties wijzigen of verwijderen met de titel <b>phpBB 2</b> en <b>Over Icy Phoenix</b>.',
	
	'faq_select_language' => 'De taal van het bestand kiezen dat je wilt wijzigen',
	'faq_retrieve' => 'Bestand ophalen',
	
	'faq_block_delete' => 'Weet je zeker dat je dit blok wilt verwijderen?',
	'faq_quest_delete' => 'Weet je zeker dat je deze vraag (en daarmee ook het antwoord) wilt verwijderen?',
	
	'faq_quest_edit' => 'Vraag en antwoord wijzigen',
	'faq_quest_create' => 'Een nieuwe vraag met antwoord maken',
	
	'faq_quest_edit_explain' => 'De vraag en het antwoord wijzigen. Het blok wijzigen als je dat wilt.',
	'faq_quest_create_explain' => 'Geef een nieuwe vraag met het antwoord in en klik bevestigen.',
	
	'faq_block' => 'Blok',
	'faq_quest' => 'Vraag',
	'faq_answer' => 'Antwoord',
	
	'faq_block_name' => 'Bloknaam',
	'faq_block_rename' => 'Een blok hernoemen',
	'faq_block_rename_explain' => 'De naam van het blok in het bestand wijzigen',
	
	'faq_block_add' => 'Blok toevoegen',
	'faq_quest_add' => 'Vraag toevoegen',
	
	'faq_no_quests' => 'Er zijn geen vragen in dit blok. Hierdoor zal het blok NA dit blok niet weergegeven worden. Verwijder dit blok of voeg 1 of meer vragen toe.',
	'faq_no_blocks' => 'Er zijn geen blokken gedefinieerd. Voeg een nieuw blok toe door hieronder de titel in te geven.',
	
	'faq_write_file' => 'Kan niet naar het taalbestand schrijven!',
	'faq_write_file_explain' => 'Je moet het taalbestand van language/lang_dutch/ of soortgelijke map <i>schrijfbaar</i> maken, om deze functie te gebruiken. Op UNIX, kan dit via <code>chmod 666 bestandsnaam</code>. Veel FTP programma\'s hebben ook de mogelijkheid CHMOD te doen of om dit via de eigenschappen van het bestand te wijzigen. Anders kun je het via telnet of SSH proberen..',
/* lang_admin_faq_editor.php - END */

/* lang_admin_rules_editor.php - BEGIN */
	'rules_editor' => 'Taal wijzigen',
	'rules_editor_explain' => 'Deze module zorgt er voor dat je de forumregels kunt wijzigen en herschikken.. ',
	
	'rules_select_language' => 'De taal van het bestand kiezen dat je wilt wijzigen',
	'rules_retrieve' => 'Bestand ophalen',
	
	'rules_block_delete' => 'Weet je zeker dat je dit blok wilt verwijderen?',
	'rules_quest_delete' => 'Weet je zeker dat je deze vraag (en daarmee ook het antwoord) wilt verwijderen?',
	
	'rules_quest_edit' => 'Vraag en antwoord wijzigen',
	'rules_quest_create' => 'Een nieuwe vraag met antwoord maken',
	
	'rules_quest_edit_explain' => 'De vraag en het antwoord wijzigen. Het blok wijzigen als je dat wilt.',
	'rules_quest_create_explain' => 'Geef een nieuwe vraag met het antwoord in en klik bevestigen.',
	
	'rules_block' => 'Blok',
	'rules_quest' => 'Vraag',
	'rules_answer' => 'Antwoord',
	
	'rules_block_name' => 'Bloknaam',
	'rules_block_rename' => 'Een blok hernoemen',
	'rules_block_rename_explain' => 'De naam van het blok in het bestand wijzigen',
	
	'rules_block_add' => 'Blok toevoegen',
	'rules_quest_add' => 'Vraag toevoegen',
	
	'rules_no_quests' => 'Er zijn geen vragen in dit blok. Hierdoor zal het blok NA dit blok niet weergegeven worden. Verwijder dit blok of voeg een of meer vragen toe.',
	'rules_no_blocks' => 'Er zijn geen blokken gedefinieerd. Voeg een nieuw blok toe door hieronder de titel in te geven.',
	
	'rules_write_file' => 'Er kan niet naar het taalbestand worden geschreven!',
	'rules_write_file_explain' => 'Je moet het taalbestand van language/lang_dutch/ of soortgelijke map <i>schrijfbaar</i> maken, om deze functie te gebruiken. Op UNIX, kan dit via <code>chmod 666 bestandsnaam</code>. Veel FTP programma\'s hebben ook de mogelijkheid CHMOD te doen of om dit via de eigenschappen van het bestand te wijzigen. Anders kun je het via telnet of SSH proberen..',
/* lang_admin_rules_editor.php - END */

/* lang_admin_priv_msgs.php - BEGIN */
	'PM_View_Type' => 'Bekijktype',
	'Show_IP' => 'Bekijk IP-adres',
	'Rows_Per_Page' => 'Rijen per pagina',
	'Archive_Feature' => 'Archief',
	'Inline' => 'Inline',
	'Pop_up' => 'Pop-up',
	'Current' => 'Huidig',
	'Rows_Plus_5' => 'Voeg 5 rijen toe',
	'Rows_Minus_5' => 'Verwijder 5 rijen',
	'Enable' => 'Activeren',
	'Disable' => 'Deactiveren',
	'Inserted_Default_Value' => '%s configuratieitem bestaat niet, standaardwaarde toegevoegd<br />', // %s = config name
	'Updated_Config' => 'Bijgewerkte configuratieitem %s<br />', // %s = config item
	'Archive_Table_Inserted' => 'Archieftabel bestaat niet, nu gemaakt<br />',
	'Switch_Normal' => 'Schakel naar normale modus',
	'Switch_Archive' => 'Schakel naar archiefmodus',

/* General */
	'Deleted_Message' => 'Privébericht verwijderd - %s <br />', // %s = PM title 
	'Archived_Message' => 'Privébericht gearchiveerd - %s <br />', // %s = PM title 
	'Archived_Message_No_Delete' => 'Kan %s niet verwijderen, die is gemarkeerd voor het archief <br />', // %s = PM title 
	'Private_Messages' => 'Privéberichten', 
	'Private_Messages_Archive' => 'Privéberichtenarchief', 
	'Archive' => 'Archief', 
	'To' => 'Naar', 
	'Subject' => 'Onderwerp', 
	'Sent_Date' => 'Verzonden', 
	'From' => 'Van', 
	'Sort' => 'Sorteer',
	'Filter_By' => 'Filter op', 
	'PM_Type' => 'PB type', 
	'Status' => 'Status', 
	'No_PMS' => 'Er is geen privébericht die overeenkomt met je sorteercriteria', 
	'Archive_Desc' => 'Privéberichten, waarbij je hebt gekozen om ze te archiveren staan hier. Gebruikers kunnen deze niet langer benaderen (verstuurder en ontvanger), maar jij kunt ze altijd bekijken of verwijderen.', 
	'Normal_Desc' => 'Alle privéberichten op je forum kunnen hier beheerd worden. Je kunt ze allemaal bekijken als je dat wilt en kiezen om ze te verwijderen of te archiveren (bewaren, maar gebruikers kunnen ze niet bekijken).',
	'Remove_Old' => 'Loze PB\'s:</a> <span class="gensmall">Gebruikers die niet langer bestaan hebben PB\'s achtergelaten. Deze functie verwijdert deze berichten.</span>', 
	'Remove_Sent' => 'Verzonden map PB\'s:</a> <span class="gensmall">PB\'s in de verzonden map zijn alleen maar kopieën van hetzelfde berichten dat verzonden zijn, behalve gemarkeerd naar de verstuurder nadat de andere gebruiker de PB gelezen heeft. Deze zijn niet echt nodig.</span>', 
	'Removed_Old' => 'Verwijder alle loze privéberichten<br />',
	'Removed_Sent' => 'Verwijder alle verzonden privéberichten<br />',
	'Utilities' => 'Massaverwijdergereedschappen',
	'Nivisec_Com' => 'Nivisec.com',

/* PM Types */
	'PM_-1' => 'Alle typen', //PRIVMSGS_ALL_MAIL = -1
	'PM_0' => 'Gelezen PBs', //PRIVMSGS_READ_MAIL = 0
	'PM_1' => 'Nieuwe PBs', //PRIVMSGS_NEW_MAIL = 1
	'PM_2' => 'Verzonden PBs', //PRIVMSGS_SENT_MAIL = 2
	'PM_3' => 'Opgeslagen PBs (in)', //PRIVMSGS_SAVED_IN_MAIL = 3
	'PM_4' => 'Opgeslagen PBs (uit)', //PRIVMSGS_SAVED_OUT_MAIL = 4
	'PM_5' => 'Ongelezen PBs', //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
	'Error_Other_Table' => 'Fout bij het opvragen van de benodige tabel.',
	'Error_Posts_Text_Table' => 'Fout bij het opvragen van de privéberichttekstentabel.',
	'Error_Posts_Table' => 'Fout bij het opvragen van de privéberichtentabel.',
	'Error_Posts_Archive_Table' => 'Fout bij het opvragen van de privéberichtenarchieftabel.',
	'No_Message_ID' => 'Er is geen bericht ID gespecificeerd.',
/* lang_admin_priv_msgs.php - END */

/* lang_admin_link.php - BEGIN */
// Categories
	'Link_Categories_Title' => 'Linkcategorieënbeheer',
	'Link_Categories_Explain' => 'In dit venster kun je je categorieën beheren: toevoegen, bewerken, verwijderen, sorteren, etc.',
	'Category_Permissions' => 'Categoriepermissies',
	'Category_Title' => 'Categorietitel',
	'Category_Desc' => 'Categorieomschrijving',
	'View_level' => 'Bekijk niveau',
	'Upload_level' => 'Upload niveau',
	'Rate_level' => 'Beoordelingsniveau',
	'Comment_level' => 'Opmerkingsniveau',
	'Edit_level' => ' Bewerk niveau',
	'Delete_level' => 'Verwijder niveau',
	'New_category_created' => 'Nieuw categorie is succesvol toegevoegd',
	'Click_return_link_category' => 'Klik %shier%s om terug te keren naar linkcategorieënbeheer',
	'Category_updated' => 'Deze categorie is succesvol bijgewerkt',
	'Delete_Category' => 'Categorie verwijderen',
	'Delete_Category_Explain' => 'Het onderstaande formulier staat je toe om een categorie te verwijderen',
	'Category_deleted' => 'Deze categorie is succesvol verwijderd',
	'Category_changed_order' => 'Deze categorie is succesvol veranderd van volgorde',

// Config
	'Link_Config' =>'Linkconfiguratiebeheer',
	'Link_config_explain' => 'Je kan de algemene instellingen van je link hier veranderen',
	'lock_submit_site' => 'Sluit de mogelijkheid voor websites toe te voegen',
	'allow_guest_submit_site' => 'Gasten toestaan om een website toe te voegen',
	'allow_no_logo' => 'Website toevoegen zonder banner toestaan',
	'site_logo' => 'De url waar je logo gevonden kan worden (volledige url)',
	'site_url' => 'De url van je website',
	'width' => 'Max. bannerbreedte',
	'height' => 'Max. bannerhoogte',
	'linkspp' => 'Max. links per pagina',
	'interval' => 'Hoe snel de banners moeten worden weergeven',
	'display_logo' => 'Hoeveel banners moeten in een keer worden weergeven',
	'Link_display_links_logo' => 'Links banner weergeven',
	'Link_email_notify' => 'Wanneer er een link wordt toegevoegd, een e-mail sturen naar alle beheerders van deze website',
	'Link_pm_notify' => 'Wanneer er een link wordt toegevoegd, een privébericht sturen naar alle beheerders van deze website',
	'Link_config_updated' => 'Linksconfiguratie is succesvol bijgewerkt',
	'Click_return_link_config' => 'Klik %shier%s om terug te keren naar linkconfiguratiebeheer',

// Link_MOD
	'Links' => 'Linksbeheer',
	'Links_explain' => 'In deze menu krijg je een overzicht van de aanwezige links, hier kun je de links bewerken en verwijderen.',
	'Add_link' => 'Link toevoegen',
	'Add_link_explain' => 'De onderstaande formulier staat je toe om een link toe te voegen.',
	'Edit_link' => 'Link bewerken',
	'Edit_link_explain' => 'De onderstaande formulier staat je toe om een link te bewerken, en je kunt ook een selecteren ',
	'Delete_link' => 'Link verwijderen',
	'Delete_link_explain' => 'De onderstaande formulier staat je toe om een link te verwijderen, en je kunt ook een selecteren ',
	'Link_update' => 'Link bewerken',
	'Link_delete' => 'Deze link verwijderen',
	'Link_title' => 'Naam',
	'Link_url' => 'URL',
	'Link_logo_src' => 'Logo (88x31 pixels, niet meer dan 10K groot)',
	'Link_category' => 'Categorie',
	'Link_desc' => 'Omschrijving',
	'link_hits' => 'Klikken',
	'Link_basic_setting' => 'Linkinstellingen',
	'Link_adv_setting' => 'Geavanceerde instellingen',
	'Link_active' => 'Actieve status',
	
	'Link_admin_add_success' => 'De links zijn succesvol toegevoegd',
	'Link_admin_add_fail' => 'De link kan niet toegevoegd worden, probeer het later nog eens',
	'Link_admin_update_success' => 'De links zijn succesvol bijwerkt',
	'Link_admin_update_fail' => 'De link kan niet bijgewerkt worden, probeer het later nog eens',
	'Link_admin_delete_success' => 'De links zijn succesvol verwijderd',
	'Link_admin_delete_fail' => 'De link kan niet verwijderd worden, probeer het later nog eens',
	'Click_return_lastpage' => 'Klik %shier%s om terug te keren naar de vorige pagina',
	'Click_return_admin_links' => 'Klik %shier%s om terug te keren naar linkbeheer',
	'Preview' => 'Logovoorbeeld',
	'Search_site' => 'Zoek website',
	'Search_site_title' => 'Zoek website naam/omschrijving:',
/* lang_admin_link.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

// Icy Phoenix - BUILD 009
	'Replace_title' => 'Vervang in berichten',
	'Replace_text' => 'Vervang woorden of hele zinnen in wat je ook maar wilt. <br /><b>Opgelet!</b> Dit kan niet ongedaan gemaakt worden.',
	'Link' => 'Link',
	'Str_old' => 'Huidige tekst',
	'Str_new' => 'Vervangen met',
	'No_results' => 'Er zijn geen resultaten gevonden',
	'Replaced_count' => 'Aantal berichten bijgewerkt: %s',

// Icy Phoenix - BUILD 016
	'group_rank' => 'Rang',
	'group_color' => 'Kleur',
	'group_legend' => 'Geef in legenda weer',
	'group_legend_short' => 'Legenda',
	'group_main' => 'Hoofdgroep',
	'group_members' => 'Gebruikers',
	'group_update' => 'Wijzigingen toepassen',

/* lang_color_groups.php - BEGIN */
	'Color_Groups' => 'Groepskleuren',
	'Manage_Color_Groups' => 'Beheer groepskleuren',
	'Add_New_Group' => 'Voeg nieuwe groep toe',
	'Color' => 'Kleur',
	'User_Count' => 'Gebruikersaantal',
	'Color_List' => 'Kleurnamenlijst:',
	'Group_Name' => 'Groepnamenlijst',
	'Define_Users' => 'Definieer gebruikers',
	'Color_Group_User_List' => 'Groepskleurengebruikerslijst',
	'Options' => 'Opties',
	'Example' => 'Voorbeeld',
	'User_List' => 'Full User List',
	'Unassigned_User_List' => 'Gebruikers zonder groep',
	'Assigned_User_List' => 'Gebruikers met groep',
	'User_List' => 'Volledige gebruikerslijst',
	'Update' => 'Bijwerken',
	'Updated_Group' => 'Bijgewerkte gebruikersgroepenlijst<br />',
	'Deleted_Group' => 'Specifieke groep verwijderd - Alle gebruikers uit deze groep worden teruggezet op &quot,gebruikers zonder groeplidmaatschap&quot; <br />',
	'Hide' => 'Verbergen',
	'Un-hide' => 'Weergeven',
	'Move_Up' => 'Naar boven',
	'Move_Down' => 'Naar beneden',
	'Group_Hidden' => 'Groep verborgen<br />',
	'Group_Unhidden' => 'Groep niet verborgen<br />',
	'Groups_Updated' => 'Groepsveranderingen worden bijgewerkt<br />',
	'Moved_Group' => 'Groepsvolgorde is gewijzigd<br />',

//Descriptions
	'Manage_Color_Groups_Desc' => 'Bijwerken van groepen, toevoegen van nieuwe groepen of een groepskleur toewijzen aan de gebruikers.<br />Verborgen groepen worden niet op de indexpagina weergegeven.',
	'Color_Group_User_List_Desc' => 'Hier kan je gebruikers in een specifieke groep toevoegen of verwijderen.',

//Errors
	'Error_Group_Table' => 'Fout bij het opvragen van de groepskleurentabel.',
	'Error_Font_Color' => '<b><u>Waarschuwing:</b></u>  De aangegeven letterkleur schijnt ongeldig te zijn!',
	'Color_Ok' => 'De aangegeven letterkleur schijnt ongeldig te zijn.',
	'No_Groups_Exist' => 'Er bestaan geen groepen.',
	'Error_Users_Table' => 'Fout bij het opvragen van de gebruikerstabel.',
	'Invalid_Group_Add' => '%s is een ongeldige of een naam die al voorkomt.<br />',

//Dynamic
	'Group_Updated' => 'Groepskleuren van %s bijgewerkt<br />',
	'Editing_Group' => 'Bijwerken van de gebruikerslijst voor %s.',
	'Invalid_User' => '%s is een ongeldige gebruikersnaam en wordt overgeslagen<br />',
	'Invalid_Order_Num' => '%s bevat een ongeldige sorteergetal en wordt verbeterd. Probeer nog een keer om de groep naar boven of naar onder te verplaatsen.',

//New for 1.2.0
	'Users_List' => 'Gebruikerslijst',
	'Groups_List' => 'Groepskleurenlijst',
	'List_Info' => '<b>Notities</b>: <ul><li>Hou bij het klikken de CTRL ingedrukt, om meerdere namen te selecteren. <li>Als een gebruiker al tot een groep behoort en het nu in een andere groep wordt toegevoegd, wordt de kleur waarin de gebruiker wordt weergegeven, niet de groepskleur, van de groep waar de gebruiker nu inzit. <li>De namenlijst wordt aangegeven met NAME (CURRENT_COLOR_GROUP). Er is geen (CURRENT_COLOR_GROUP) ingang, wanneer er niemand tot een groep behoort. <li>Wanneer een gebruiker deelneemt aan 2 of meerdere groepen, wordt de kleur met de hoogste prioriteit toegewezen. (Je kan de volgorde op de groepskleurenpagina veranderen).</ul>',
/* lang_color_groups.php - END */

// Icy Phoenix - BUILD 023
	'Empty_Cache_Main_Question' => 'Als je klikt op ja, alle bestanden in de hoofd cachemap worden permanent verwijderd.<br /><br /><em> Weet je zeker dat je dit wilt doen? </em>',
	'Empty_Cache_Posts_Question' => 'Als je klikt op ja, precompiled berichtenveld in de berichtentabel worden permanent verwijderd.<br /><br /><em> Weet je zeker dat je dit wilt doen? </em>',
	'Empty_Cache_Thumbs_Question' => 'Als je klikt op ja, alle gegenereerde thumbnails in berichten worden permanent verwijderd.<br /><br /><em> Weet je zeker dat je dit wilt doen? </em>',
	'Empty_Cache_Success' => 'Cachemappen zijn succesvol geleegd.',
	
	'Copy_Auth' => 'Kopieer permissies van',
	'Copy_Auth_Explain' => 'Hou er rekening mee dat je alleen permissies van forums kunt kopieren, niet van de categorieen!',

// Icy Phoenix - BUILD 027
/* lang_admin_db_backup.php - BEGIN */
	'SELECT_ALL' => 'Selecteer alles',
	'SELECT_FILE' => 'Selecteer een bestand',
	'START_BACKUP' => 'Start backup',
	'START_RESTORE' => 'Start herstellen',
	'STORE_AND_DOWNLOAD' => 'Opslaan en downloaden',
	'STORE_LOCAL' => 'Sla het bestand lokaal op',
	'STRUCTURE_ONLY' => 'Alleen de structuur',

// Backup
	'ACP_BACKUP' => 'Databasebackup',
	'ACP_BACKUP_EXPLAIN' => 'Backup alle websitegerelateerde gegevens. Je kan het resultaat opslaan in je <samp>backup/</samp> map of het direct downloaden. Je serverconfiguratie maakt het misschien ook mogelijk om het met GZip-compressie, het bestand op te slaan.',
	
	'BACKUP_OPTIONS' => 'Backupopties',
	'BACKUP_TYPE' => 'Backuptype',
	
	'DATABASE' => 'Databasegereedschappen',
	'DATA_ONLY' => 'Alleen gegevens',
	'DELETE_BACKUP' => 'Verwijder backup',
	'DELETE_SELECTED_BACKUP' => 'Weet je zeker dat je de geselecteerde backup wilt verwijderen?',
	'DESELECT_ALL' => 'Deselecteer alles',
	'DOWNLOAD_BACKUP' => 'Download backup',
	
	'FILE_TYPE' => 'Bestandstype',
	'FULL_BACKUP' => 'Volledig',
	
	'BACKUP_TYPE_COMPLETE' => 'Afgerond',
	'BACKUP_TYPE_EXTENDED' => 'Uitgebreid',
	'BACKUP_TYPE_COMPACT' => 'Compacte lijnconstructies',
	
	'BACKUP_SUCCESS' => 'Het backupbestand is succesvol gemaakt.',
	'BACKUP_DELETED' => 'Het backupbestand is succesvol verwijderd.',
	
	'TABLE_SELECT' => 'Tabel selecteren',
	
	'BACKUP_IN_PROGRESS' => 'Backup in volle gang...',
	'BACKUP_IN_PROGRESS_TABLE' => 'Backup tabel: <b>%s</b>',
	'BACKUP_IN_PROGRESS_REDIRECT' => 'Je wordt automatisch doorgeschakeld naar de volgende stap in een paar seconden',
	'BACKUP_IN_PROGRESS_REDIRECT_CLICK' => 'Als je niet automatisch wordt doorgeschakeld binnen een paar seconden, klik dan %shier%s',
	'BACKUP_OPTIONS_RETURN' => 'Klik %shier%s om terug te keren naar backupbeheer',
	
// Errors
	'Table_Select_Error' => 'Je moet minimaal een tabel selecteren.',

// Restore
	'ACP_RESTORE' => 'Database herstellen',
	'ACP_RESTORE_EXPLAIN' => 'Herstel alle databasetabellen uit een opgeslagen backupbestand. Als je server het ondersteund en je maakt gebruik van de GZip-compressie wordt het bestand automatisch uitgepakt. <strong>WAARSCHUWING</strong> Dit overschrijft alle bestaande gegevens. Het herstellen kan een lange tijd in beslag nemen, <b>ga niet</b> terug of verlaat deze pagina niet voordat het is afgerond. De backups worden opgeslagen in de <samp>backup/</samp> map, en zijn gegenereerd door de aanwezige backupfuncties. Herstellen met backups die niet zijn gemaakt door de aanwezige backupfuncies kunnen het systeem zodanig vernielen dat het niet meer werkt..',
	'RESTORE_OPTIONS' => 'Herstelopties',
	
	'Restore_Success' => 'De database is succesvol hersteld.<br />Je website is weer terug in de staat van het moment dat de backup is gemaakt.',

// Errors
	'No_Backup_Selected' => 'Je hebt geen backupbestand geselecteerd, dus je kunt ook niets herstellen.',
	'Backup_Invalid' => 'Het geselecteerde backupbestand is ongeldig.',
	'RESTORE_FAILURE' => 'Het backupbestand is corrupt.',
/* lang_admin_db_backup.php - END */

/* Logs - BEGIN */
	'LOGS_ACTIONS_FILTER' => 'Actiesfilter',
	'LOGS_TITLE' => 'Logs',
	'LOGS_EXPLAIN' => 'Alle relevante acties die opgeslagen zijn in de DB',
	'LOGS_TARGET' => 'Doel',
	'LOGS_DELETE' => 'Verwijder geselecteerde',
	'LOGS_DELETE_ALL' => 'Leeg logtabel',
	'LOGS_DENY' => 'Niet bevoegd!',
	'LOGS_POST_EDIT' => 'bewerkt een bericht geplaatst door',
	'LOGS_POST_DELETE' => 'verwijderd een bericht geplaatst door',
	'LOGS_GROUP_JOIN' => 'vraagt lidmaatschap aan voor een groep',
	'LOGS_GROUP_EDIT' => 'bewerkt groepopties van %s',
	'LOGS_GROUP_ADD' => 'voegt %s toe tot de groep',
	'LOGS_GROUP_TYPE' => 'bewerkt groepstatus %s , nu de groep is %s',
	'LOGS_GROUP_TYPE_0' => 'open',
	'LOGS_GROUP_TYPE_1' => 'gesloten',
	'LOGS_GROUP_TYPE_2' => 'verborgen',
	'LOGS_MESSAGE' => 'bericht naar de gebruiker, code <b>%s</b>',
	'LOGS_MODCP_DELETE' => 'verwijderd aantal berichten in %s met MODCP',
	'LOGS_MODCP_RECYCLE' => 'recycled aantal berichten in %s met MODCP',
	'LOGS_MODCP_LOCK' => 'sluit aantal berichten in %s met MODCP',
	'LOGS_MODCP_UNLOCK' => 'heropend aantal berichten in %s met MODCP',
	'LOGS_MODCP_MOVE' => 'verplaatst aantal berichten in %s met MODCP',
	'LOGS_MODCP_MERGE' => 'voegt aantal berichten samen in %s met MODCP',
	'LOGS_MODCP_SPLIT' => 'splitst aantal berichten in %s met MODCP',
	'LOGS_TOPIC_BIN' => 'gooit een bericht in de prullenbak in',
	'LOGS_TOPIC_ATTACK' => 'hackpoging in bericht',
	'LOGS_CARD_BAN' => 'geband',
	'LOGS_CARD_WARN' => 'gewaarschuwd',
	'LOGS_CARD_UNBAN' => 'ungeband',
	'LOGS_ADMIN_CAT_ADD' => 'voegt een forumcategorie toe',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP' => 'DB backup %s',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_full' => 'volledig',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_structure' => 'alleen structuur',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_data' => 'gegevens',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store_and_download' => ', gedownload en opgeslagen',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store' => ', opgeslagen',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_download' => ', gedownload',
	'LOGS_ADMIN_DB_UTILITIES_RESTORE' => 'DB herstelt vanuit',
	'LOGS_ADMIN_BOARD_CONFIG' => 'bewerkt configuratie',
	'LOGS_ADMIN_BOARD_IP_CONFIG' => 'bewerkt Icy Phoenix instellingen',
	'LOGS_ADMIN_GROUP_NEW' => 'groep aangemaakt',
	'LOGS_ADMIN_GROUP_DELETE' => 'groep verwijderd',
	'LOGS_ADMIN_GROUP_EDIT' => 'groep bewerkt',
	'LOGS_ADMIN_USER_AUTH' => 'bewerkt permissies van',
	'LOGS_ADMIN_GROUP_AUTH' => 'bewerkt groepspermissies',
	'LOGS_ADMIN_USER_BAN' => 'bant sommige vanuit ACP',
	'LOGS_ADMIN_USER_UNBAN' => 'onbant sommige vanuit ACP',
	'LOGS_ADMIN_USER_DELETE' => 'gebruiker verwijderd',
	'LOGS_ADMIN_USER_EDIT' => 'profiel bewerkt van',
	'LOGS_CMS_LAYOUT_EDIT' => 'bewerkt %sDEZE%s pagina',
	'LOGS_CMS_LAYOUT_DELETE' => 'verwijderd een pagina [ID = %s]',
	'LOGS_CMS_BLOCK_EDIT' => 'bewerkt een blok [ID = %s] op %sDEZE%s pagina',
	'LOGS_CMS_BLOCK_EDIT_LS' => 'bewerkt een blok [ID = %s] op een standaardpagina [%s]',
	'LOGS_CMS_BLOCK_DELETE' => 'verwijderd een blok [ID = %s] op %sDEZE%s pagina',
	'LOGS_CMS_BLOCK_DELETE_LS' => 'verwijderd een blok [ID = %s] op een standaardpagina [%s]',
/* Logs - END */

	'SMILEYS_UPDATED' => 'Smilies bijgewerkt',

/* ADS - BEGIN */
	'ADS_TITLE' => 'Ads &amp; Sponsors',
	'ADS_TITLE_EXPLAIN' => 'Deze sectie staat je toe om banners in te stellen, advertenties en sponsors worden dan weergegeven op je website. Je kan verschillende bannertypes kiezen, bepalen waar deze weergegeven moeten worden en welke gebruikers deze banners niet zien. Als je meer banners instelt op dezelfde postitie, dan wordt er een weergegeven maar wordt willekeurig gekozen uit alle die op dezelfde positie zijn ingesteld.',
	'AD_DES' => 'Omschrijving',
	'AD_TEXT' => 'Inhoud',
	'AD_ENABLED' => 'Ingeschakeld',
	'AD_STATUS' => 'Status',
	'AD_STATUS_EXPLAIN' => 'Select Ja als je wilt dat deze wordt ingeschakeld of Nee om het uit te schakelen',
	'AD_POSITION' => 'Positie',
	'AD_AUTH' => 'Permissie',
	'AD_AUTH_EXPLAIN' => 'Gebruikers die deze ad zien',
	'AD_AUTH_GUESTS' => 'Alleen gasten',
	'AD_AUTH_REG' => 'Gasten en geregistreerde gebruikers (geen beheerders of moderators)',
	'AD_AUTH_MOD' => 'Iedereen, behalve beheerders',
	'AD_AUTH_ADMIN' => 'Iedereen',
	'AD_FORMAT' => 'Formaat',
	'AD_POS_GLT' => 'Algemeen Top',
	'AD_POS_GLB' => 'Algemeen Bottom',
	'AD_POS_GLH' => 'Algemeen Header',
	'AD_POS_GLF' => 'Algemeen Footer',
	'AD_POS_FIX' => 'Forumindex Element',
	'AD_POS_FIT' => 'Forumindex Top',
	'AD_POS_FIB' => 'Forumindex Bottom',
	'AD_POS_VFX' => 'Viewforum Element',
	'AD_POS_VFT' => 'Viewforum Top',
	'AD_POS_VFB' => 'Viewforum Bottom',
	'AD_POS_VTX' => 'Viewtopic Element',
	'AD_POS_VTT' => 'Viewtopic Top',
	'AD_POS_VTB' => 'Viewtopic Bottom',
	'AD_POS_NMT' => 'Nav Menu Top',
	'AD_POS_NMB' => 'Nav Benu Bottom',
	'AD_ADD' => 'Voeg Ad toe',
	'AD_EDIT' => 'Bewerk Ad',
	'AD_ADDED' => 'Ad succesvol toegevoegd',
	'ADS_UPDATE' => 'Ads bijwerken',
	'AD_UPDATED' => 'Ad succesvol bijgewerkt',
	'AD_DELETED' => 'Ad succesvol verwijderd',
	'CLICK_RETURN_ADS' => 'Klik %shier%s om terug te keren naar adsbeheer',
	'AD_NO_ADS' => 'Er zijn geen ads gedefinieerd',
	'ERR_AD_ADD' => 'Vul alstublieft alle verplichte velden in',
/* ADS - END */

	'FULL_HTML' => 'Volledig HTML',
	'ACTIONS' => 'Acties',
	'EDIT' => 'Bewerk',
	'DELETE' => 'Verwijder',

// ####################### [ Icy Phoenix Options BEGIN ] #####################
	'MG_Configuration' => 'Icy Phoenix Instellingen',
	'MG_Configuration_Explain' => '<em><b>Uitgebreide Icy Phoenix instellingen</b></em>',
	
	'MG_Configuration_Headers_Banners' => 'Headers &amp, Banners',
	'MG_Configuration_Queries' => 'SQL Optimalisatie',
	'MG_Configuration_Permissions' => 'Paginapermissies',
	'MG_Configuration_Posting' => 'Berichten plaatsen',
	'MG_SW_Precompiled_Posts_Title' => 'Precompiled berichten',
	'MG_SW_Logins_Title' => 'Loginsopname',
	'MG_SW_Edit_Notes_Title' => 'Bewerknotities',
	'MG_Configuration_IMG_Posting' => 'Afbeeldingen in berichten',
	
	'MG_SW_Header_Footer' => 'Header en footerberichten',
	'MG_SW_Header_Table' => 'Headertabel',
	'MG_SW_Header_Table_Explain' => 'Deze optie inschakelen betekent dat, in elke paginaheader wordt een eigen bericht wordt weergegeven.',
	'MG_SW_Header_Table_Text' => 'Geef je tekst hier in',
	
	'MG_SW_Empty_Precompiled_Posts' => 'Leeg vooropgebouwde berichten',
	'MG_SW_Empty_Precompiled_Posts_Explain' => 'Deze functie staat toe om vooropgebouwde berichten te legen.',
	'MG_SW_Empty_Precompiled_Posts_Succes' => 'Vooropgebouwde berichten zijn succesvol geleegd.',
	'MG_SW_Empty_Precompiled_Posts_Fail' => 'Fouten in leegmaken van vooropgebouwde berichten.',
	'MG_SW_Empty_Precompiled_Posts_InProgress' => 'Emptying cache folders in progress...',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect' => 'You will be automatically redirected to next step in three seconds',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect_Click' => 'If you are not automatically redirected within three seconds you may click %sHere%s',
	'MG_SW_Empty_Precompiled_Posts_Redirect_Click' => 'Click %sHere%s to return to Cache Management',
	
	'MG_FNF_Header' => 'Snelle instellingen',
	'MG_FNF_Header_Explain' => 'Op deze pagina kun je snel en eenvoudig snelle instellingen voor jouw forum instellen. Deze voorinstellingen wordt voor de gebruikers samengesteld, om eenvoudig de massaverandering voor jouw forum over te nemen, zonder iedere instellingen apart te veranderen. Deze voorinstellingen kunnen als opstapje dienen, zodat je daarna enkele persoonlijke voorkeuren kunt aanpassen: bijv. kun je "Snel en handig" uitkiezen en dan de instellingen veranderen, die je niet wilt.<br /><br /><span class="text_red"><b>WAARSCHUWING, wanneer je eenmaal een snelinstelling gekozen hebt, kun je niet meer automatisch teruggaan naar de oude instellingen. Je moet dan alles handmatig weer aanpassen.</b></span>',
	'MG_FNF_Options_Set' => 'Snelinstellingen',
	'MG_FNF_FNF' => 'Snel en handig',
	'MG_FNF_FNF_Explain' => 'Deze instelling verhoogt de snelheid van je forum, de vele functies, welke een verhoogte CPU belasting of databaseaanvragen benodigen zijn gedeactiveerd. Dat is een goede aanvangsinstelling voor een snelwerkend forum.',
	'MG_FNF_MGS' => 'Mighty Gorgon\'s aanbeveling',
	'MG_FNF_MGS_Explain' => 'Deze instelling is afgewogen en voor de meeste websites aanbevolen. Enkele functies zijn geactiveerd, waar andere met een hoge CPU belasting gedeactiveerd zijn.',
	'MG_FNF_Full_Features' => 'Alle functies',
	'MG_FNF_Full_Features_Explain' => 'Kies deze instelling uit, wanneer je geen bandbreedtebeperking hebt of wanneer je alle Icy Phoenix functies wilt gebruiken. Het kan zou zijn dat er een aantal functies zijn die niet met je server samenwerken en deze zul je zelf nog uit moeten schakelen.',
	
	'MG_SW_ACRONYMS' => 'Afkortingen uitschakelen',
	'MG_SW_ACRONYMS_Explain' => 'Afkortingen in berichten uit te schakelen?.',
	'MG_SW_AUTOLINKS' => 'Autolinks uitschakelen',
	'MG_SW_AUTOLINKS_Explain' => 'Autolinks in berichten uit te schakelen?.',
	'MG_SW_CENSOR' => 'Woordcensuur uitschakelen',
	'MG_SW_CENSOR_Explain' => 'Woordcensuur in berichten uit te schakelen?.',
	
	'MG_SW_No_Right_Click' => 'Blokkeer rechtermuisknop',

	'Click_return_config_mg' => 'Klik %shier%s om terug te keren naar Icy Phoenix Instellingen',
	)
);

/* Special Cases, Do not bother to change for another language */
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
$lang['privmsgs_date'] = $lang['Sent_Date'];
$lang['privmsgs_subject'] = $lang['Subject'];
$lang['privmsgs_from_userid'] = $lang['From'];
$lang['privmsgs_to_userid'] = $lang['To'];
$lang['privmsgs_type'] = $lang['PM_Type'];

// ####################### [ Icy Phoenix Options END ] #######################

// ####################### [ Icy Phoenix Navigation BEGIN ] #######################
// Use numbers to sort the ACP Navigation menu
// Numbers have to be changed in all /adm/*.php files too

// Configuration
$lang['1000_Configuration'] = 'Configuratie'; // admin_board.php, admin_board_extend.php, admin_board_headers_banners.php, admin_board_main.php, admin_board_permissions.php, admin_board_server.php, admin_board_posting.php, admin_board_queries.php, admin_captcha_config.php, admin_upi2db.php
$lang['100_Server_Configuration'] = 'Server'; // admin_board_server.php
$lang['110_Various_Configuration'] = 'Website'; // admin_board.php
$lang['120_MG_Configuration'] = 'Icy Phoenix'; // admin_board.php
$lang['125_Language'] = 'Eigen Lang Vars'; // admin_lang_user_created.php
$lang['127_Clear_Cache'] = 'Wis Cache'; // admin_board_clearcache.php
$lang['130_UPI2DB_Mod'] = 'Ongelezen berichten'; // admin_upi2db.php
$lang['140_MG_Configuration_Headers_Banners'] = 'Headers &amp; Banners'; // admin_board_headers_banners.php
$lang['145_Captcha_Config'] = 'Bevestigingscode'; // admin_captcha_config.php
$lang['150_Similar_topics'] = 'Vergelijkbare onderwerpen'; // admin_similar_topics.php
$lang['160_Title_infos'] = 'Snelle titelbeheer'; // admin_quick_title.php
$lang['170_LIW'] = 'Limietafbeeldingsbreedte'; // admin_liw.php
$lang['180_MG_Configuration_Permissions'] = 'Paginapermissies'; // admin_board_permissions.php
$lang['190_Spider_Bots'] = 'Spider / Bots'; // admin_bots.php
$lang['192_Google_BOT'] = 'Googlebot Detector'; // admin_google_bot_detector.php
$lang['195_Yahoo_search'] = 'Yahoo Zoeken'; // admin_yahoo_search.php
$lang['200_Language'] = 'Taal'; // admin_lang_extend.php
$lang['210_MG_Quick_Settings'] = 'Snelle instellingen'; // admin_board_quick_settings.php

// General
$lang['1100_General'] = 'Algemeen'; // admin_acronyms.php, admin_autolinks.php, admin_force_read.php, admin_helpdesk.php, admin_liw.php, admin_force_read.php, admin_mass_email.php, admin_megamail.php, admin_notepad.php, admin_quick_title.php, admin_smilies.php, admin_words.php, admin_yahoo_search.php
$lang['100_Acronyms'] = 'Afkortingen'; // admin_acronyms.php
$lang['110_Autolinks'] = 'Autolinks'; // admin_autolinks.php
$lang['120_Ads'] = 'Ads &amp; Sponsors'; // admin_ads.php
$lang['130_Mass_Email'] = 'Massa e-mail'; // admin_mass_email.php
$lang['140_Mega_Mail'] = 'Massa E-mail / PB'; // admin_megamail.php
$lang['150_FTR_Config'] = 'FTR'; // admin_force_read.php
$lang['160_FTR_Users'] = 'FTR gebruiker'; // admin_force_read.php
$lang['170_Smilies'] = 'Smilies'; // admin_smilies.php
$lang['180_Word_Censor'] = 'Woordcensuur'; // admin_words.php
$lang['200_Notepad'] = 'Beheerder kladblok'; // admin_notepad.php
$lang['210_Help_Desk'] = 'Helpdesk'; // admin_helpdesk.php
$lang['240_Replace_title'] = 'Vervang in berichten'; // admin_replace.php

// Forum
$lang['1200_Forums'] = 'Forum'; // admin_forum_prune.php, admin_forumauth_list.php, admin_forums.php, admin_forums_extend.php, admin_prune_overview.php, admin_topic_shadow.php
$lang['100_Manage'] = 'Beheer'; // admin_forums.php
$lang['110_Manage_extend'] = 'Uitgebreid beheer'; // admin_forums_extend.php
$lang['120_Permissions_List'] = 'Permissieslijst'; // admin_forumauth_list.php
$lang['122_Permissions_Adv'] = 'Permissies ADV'; // admin_forumauth_adv.php
$lang['125_Permissions_Forum'] = 'Permissies'; // admin_forumauth.php
$lang['130_Prune'] = 'Opruimen'; // admin_forum_prune.php
$lang['140_Prune_Overview'] = 'Opruimoverzicht'; // admin_prune_overview.php
$lang['150_Topic_Shadow'] = 'Schaduwonderwerpen'; // admin_topic_shadow.php

// eXtreme Styles
$lang['1300_Extreme_Styles'] = 'Stijlen'; // xs_include.php -> $module_name

// DB Maintenance
$lang['1400_DB_Maintenance'] = 'DB en veiligheid'; // admin_bb_db.php, admin_db_generator.php, admin_db_maintenance.php, admin_db_utilities.php
$lang['100_Actions_LOG'] = 'Actieslog'; // admin_logs.php
$lang['110_DB_Admin'] = 'IP MySQLAdmin'; // admin_bb_db.php
$lang['120_Backup_DB'] = 'DB backup'; // admin_db_utilities.php, admin_db_backup
$lang['130_Restore_DB'] = 'DB herstellen'; // admin_db_utilities.php, admin_db_backup
$lang['135_Restore_DB'] = 'DB herstellen vanuit bestand'; // admin_db_utilities.php
$lang['140_Optimize_DB'] = 'Optimaliseer database'; // admin_db_utilities.php
$lang['150_DB_Maintenance'] = 'Databaseonderhoud'; // admin_db_maintenance.php
$lang['170_db_update_generator'] = 'DB Updategenerator'; // admin_db_generator.php
$lang['180_msqd'] = 'MySQLDumper'; // admin_msqd.php

// IM Portal
$lang['1500_IM_Portal'] = 'Portaal'; // admin_blocks.php, admin_blocks_pos.php, admin_blocks_var.php, admin_clear_cache.php, admin_layout.php, admin_portal.php
$lang['100_Portal_Configuration'] = 'Portaalconfiguratie'; // admin_portal.php
$lang['110_Page_Management'] = 'Paginabeheer'; // admin_layout.php
$lang['115_Page_Management'] = 'Eigen paginabeheer'; // admin_layout_cp.php
$lang['120_Blocks_Management'] = 'Blokbeheer'; // admin_blocks.php
$lang['130_Blocks_Position_Tag'] = 'Bloktagpositie'; // admin_blocks_pos.php
$lang['140_Blocks_Variables'] = 'Blokvariabelen'; // admin_blocks_var.php
$lang['150_Delete_Cache_Files'] = 'Verwijder cachebestanden'; // admin_clear_cache.php

// News
$lang['1600_News_Admin'] = 'Nieuws'; // admin_news.php, admin_news_cats.php, admin_xs_news.php, admin_xs_news_xml.php
$lang['100_News_Config'] = 'Nieuwsconfiguratie'; // admin_news.php
$lang['110_News_Cats'] = 'Nieuwscategorieen'; // admin_news_cats.php
$lang['120_XS_News_Config'] = 'Nieuwstickerconfiguratie'; // admin_xs_news.php
$lang['130_XS_News'] = 'Nieuwstickerartikelen'; // admin_xs_news.php
$lang['140_XS_News_Tickers'] = 'Nieuwstickers'; // admin_xs_news_xml.php

// Users
$lang['1610_Users'] = 'Gebruikers'; // admin_account.php, admin_disallow.php, admin_email_list.php, admin_jr_admin.php, admin_postcount.php, admin_priv_msgs.php, admin_profile_fields.php, admin_ranks.php, admin_ug_auth.php, admin_user_ban.php, admin_user_bantron.php, admin_user_register.php, admin_user_search.php, admin_userlist.php, admin_users.php, admin_voting.php
$lang['100_Jr_Admin'] = 'Junior Beheerder'; // admin_jr_admin.php
$lang['110_Manage'] = 'Beheer'; // admin_users.php
$lang['113_Permissions_Users'] = 'Permissies'; // admin_ug_auth.php
$lang['116_CMS_Permissions_Users'] = 'CMS Permissies'; // admin_cms_auth.php
$lang['120_Ranks'] = 'Rangen'; // admin_ranks.php
$lang['130_Userlist'] = 'Gebruikerslijst'; // admin_userlist.php
$lang['140_Email_List'] = 'E-maillijst'; // admin_email_list.php
$lang['150_Private_Messages'] = 'Privéberichten'; // admin_priv_msgs.php
$lang['160_Account_active'] = 'Actieve gebruikers'; // admin_account.php
$lang['170_Account_inactive'] = 'Inactieve gebruikers'; // admin_account.php
$lang['180_Add_New_User'] = 'Voeg nieuwe gebruiker toe'; // admin_user_register.php
$lang['190_Prune_users'] = 'Ruim gebruikers op'; // admin_prune_users.php
$lang['200_Disallow'] = 'Weiger gebruikersnamen'; // admin_disallow.php
$lang['210_Ban_Management'] = 'Ban gebruikers'; // admin_user_ban.php
$lang['220_Bantron'] = 'Bantron'; // admin_user_bantron.php
$lang['250_Postcount_Config'] = 'Bewerk berichtaantallen'; // admin_postcount.php
$lang['260_CPF_Add'] = 'Voeg eigen profielveld toe'; // admin_profile_fields.php
$lang['270_CPF_Edit'] = 'Bewerk eigen profielvelden'; // admin_profile_fields.php
$lang['280_User_Search'] = 'Uitgebreid gebruiker zoeken'; // admin_user_search.php
$lang['290_Poll_Results'] = 'Peilingresultaten'; // admin_voting.php
$lang['300_Picscount_Config'] = 'Synchroniseer afbeeldingsaantallen'; // admin_postcount.php

// Groups
$lang['1620_Groups'] = 'Groepen'; // admin_color_groups.php, admin_groups.php, admin_ug_auth.php
$lang['110_Manage_Groups'] = 'Beheer groepen'; // admin_groups.php
$lang['120_Color_Groups'] = 'Kleurgroepen'; // admin_color_groups.php
$lang['130_Permissions_Group'] = 'Permissies'; // admin_ug_auth.php

// Topic Rating
$lang['1700_Topic_Rating'] = 'Onderwerpbeoordeling'; // admin_rate.php

// Knowledge Base
$lang['1800_KB_title'] = 'Kennisbank'; // admin_kb_art.php, admin_kb_auth.php, admin_kb_cat.php, admin_kb_config.php, admin_kb_custom.php, admin_kb_rebuild_search.php, admin_kb_types.php
$lang['100_KB_Configuration'] = 'Configuratie'; // admin_kb_config.php
$lang['110_Art_man'] = 'Artikelbeheer'; // admin_kb_art.php
$lang['120_Cat_man'] = 'Categoriebeheer'; // admin_kb_cat.php
$lang['130_Types_man'] = 'Artikeltypes'; // admin_kb_types.php
$lang['140_Custom_Field'] = 'Eigen velden'; // admin_kb_custom.php
$lang['150_Permissions'] = 'Permissies'; // admin_kb_auth.php
$lang['160_Optimize_tables'] = 'Optimaliseer tabellen'; // admin_kb_rebuild_search.php

// Attachments
$lang['1900_Attachments'] = 'Bijlagen'; // admin_attach_cp.php, admin_attachments.php, admin_extensions.php
$lang['100_Control_Panel'] = 'Controlepaneel'; // admin_attach_cp.php
$lang['110_Att_Manage'] = 'Beheer'; // admin_attachments.php
$lang['120_Quota_limits'] = 'Quotalimieten'; // admin_attachments.php
$lang['130_Shadow_attachments'] = 'Schaduwbijlagen'; // admin_attachments.php
$lang['140_Sync_attachments'] = 'Synchroniseer bijlagen'; // admin_attachments.php
$lang['150_Extension_control'] = 'Extensiebeheer'; // admin_extensions.php
$lang['160_Extension_group_manage'] = 'Beheer extensiegroepen'; // admin_extensions.php
$lang['170_Forbidden_extensions'] = 'Verboden extensies'; // admin_extensions.php
$lang['180_Special_categories'] = 'Speciale categorieen'; // admin_attachments.php

// Downloads
$lang['2000_Downloads'] = 'Downloads'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_Settings'] = 'Configuratie'; // admin_pa_settings.php
$lang['110_Cat_manage_title'] = 'Beheer categorieen'; // admin_pa_category.php
$lang['120_File_manage_title'] = 'Beheer bestanden'; // admin_pa_file.php
$lang['130_Fchecker'] = 'Bestandscontrole'; // admin_pa_fchecker.php
$lang['140_Mfieldtitle'] = 'Eigen velden'; // admin_pa_custom.php
$lang['150_License_title'] = 'Beheer licenties'; // admin_pa_license.php
$lang['160_Permissions'] = 'Permissies'; // admin_pa_catauth.php

// Downloads
$lang['2050_Downloads'] = 'Downloads ADV'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_DL_Settings'] = 'Configuratie'; // admin_pa_settings.php

// Links
$lang['2100_Links'] = 'Links'; // admin_links.php, admin_links_cat.php, admin_links_config.php
$lang['100_Configuration'] = 'Configuratie'; // admin_links_config.php
$lang['110_Category'] = 'Beheer categorieen'; // admin_links_cat.php
$lang['120_Add_new'] = 'Voeg link toe'; // admin_links.php
$lang['130_Link_Manage'] = 'Beheer links'; // admin_links.php

// Album
$lang['2200_Photo_Album'] = 'Album'; // admin_album_auth.php, admin_album_cat.php, admin_album_config_extended.php
$lang['110_Album_Config'] = 'Configuratie'; // admin_album_config_extended.php
$lang['120_Album_Categories'] = 'Beheer categorieen'; // admin_album_cat.php
$lang['130_Album_Permissions'] = 'Permissies'; // admin_album_auth.php
$lang['140_Personal_Galleries'] = 'Persoonlijke albums'; // admin_album_personal.php

// FAQ
$lang['2300_FAQ'] = 'FAQ & Regels'; // admin_faq_editor.php
$lang['110_FAQ_BBCode'] = 'BBCode FAQ'; // admin_faq_editor.php
$lang['120_FAQ_Board'] = 'Website FAQ'; // admin_faq_editor.php
$lang['130_FAQ_Rules'] = 'Websiteregels'; // admin_faq_editor.php

// INFO
$lang['2400_INFO'] = 'Info'; // admin_logs.php, admin_phpinfo.php, admin_gd_info.php, admin_referrers.php, admin_google_bot_detector.php
$lang['110_Actions_LOG'] = 'Actieslog'; // admin_logs.php
$lang['120_PHP_INFO'] = 'PHP Info'; // admin_phpinfo.php
$lang['130_GD_Info'] = 'GD Info'; // admin_gd_info.php
$lang['140_HTTP_REF'] = 'HTTP Referrers'; // admin_referrers.php
$lang['150_Google_BOT'] = 'Googlebot Detector'; // admin_google_bot_detector.php

// ####################### [ ACP Navigation END ] #######################

?>