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
* Philipp Kordowich
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

// Functions available
// Usage: $mtnc[ => array(internal Name, Name of Function, Description of Function, Warning Message (leave empty to avoid), Number of Check function (Integer))
// Use $mtnc[ => array('--', '', '', '', 0) for a space row (you can us a different check function)
$mtnc[] = array('statistic',
	'Statistieken',
	'Geef informatie over het forum en de database weer.',
	'',
	0);
$mtnc[] = array('config',
	'Configuratie',
	'Sta de configuratie toe van databaseonderhoud.',
	'',
	5);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_user',
	'Controleert gebruikerstabellen en groepstabellen',
	'Dit controleert de gebruikerstabellen en groepstabellen voor fouten en hersteld enkele gebruikersgroepen.',
	'Je verliest alle groepen zonder leden bij deze actie. Doorgaan?',
	0);
$mtnc[] = array('check_post',
	'Controleer berichttabellen en onderwerptabellen',
	'Dit controleert de berichttabellen en onderwerptabellen op fouten.',
	'Je verliest alle berichten zonder tekst. Doorgaan?',
	0);
$mtnc[] = array('check_vote',
	'Controleer peilingtabellen',
	'Dit controleert de peilingtabellen op fouten.',
	'Je verliest alle peilinggegevens zonder een corresponderende peiling. Doorgaan?',
	0);
$mtnc[] = array('check_pm',
	'Controleer privéberichttabellen',
	'Dit controleert de privéberichttabellen op fouten.',
	'Ongelezen berichten zullen worden verwijderd als de verstuurder of de ontvanger niet bestaat. Doorgaan?',
	0);
$mtnc[] = array('check_config',
	'Controleer configuratietabellen',
	'Dit controleert de configuratietabellen voor missende toevoegingen.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_search_wordmatch',
	'Controleert de zoekwoord resultaat tabel',
	'Dit controleert de zoekwoord resultaat tabel voor fouten. Deze tabel wordt gebruikt voor de zoekfunctie.',
	'',
	0);
$mtnc[] = array('check_search_wordlist',
	'Controleer zoek woorden lijst tabel',
	'Dit verwijdert alle onnodige woorden in de woordenlijst die voor het zoeken gebruikt wordt.',
	'Deze functie neemt enige tijd in beslag. Deze controle is niet nodig maar door dit wel te doen wordt de grootte van de database iets gereduceerd. Doorgaan?',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('synchronize_post',
	'Synchroniseer forums en onderwerpen',
	'Dit synchroniseert de berichten teller en de berichten data in de forums en onderwerpen.',
	'Dit commando neemt enige tijd in beslag. Indien uw Server het gebuik van de set_time_limit() commando teostaat, wordt dit commando misschien onderbroken door PHP. Er raakt geen data verloren hierdoor maar sommige data wordt mogelijk niet geupdated. Doorgaan?',
	0);
$mtnc[] = array('synchronize_user',
	'Synchroniseer berichtenteller voor de gebruikers',
	'Dit synchroniseert de berichtenteller voor de gebruikers.',
	'<b>Opgelet:</b> opgeruimde berichten worden normaal gesproken niet apart van de berichtenteller verwijderd. Indien je deze operatie uitvoert, worden de opgeruimde berichten apart van de teller verwijderd en kunnen niet worden herstelt. Doorgaan?',
	6);
$mtnc[] = array('synchronize_mod_state',
	'Synchroniseer moderatorstatus',
	'Dit resynchroniseert de moderatorstatus in de gebruikerstabel.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_date',
	'Reset laatste berichtdatum',
	'Dit reset het laatste bericht als het in de toekomst is. Dit lost enkele problemen op waar gebruikers een bericht krijgen dat zij geen ander bericht kunnen aanmaken kort na hun laatst geplaatste bericht.',
	'Elke tijd van een bericht in de toekomst wordt veranderd naar de huidige tijd. Doorgaan?',
	0);
$mtnc[] = array('reset_sessions',
	'Reset alle sessies',
	'Dit reset alle huidige sessies door de sessietabel leeg te maken.',
	'Alle huidige actieve gebruikers verliezen hun sessies en hun zoekresultaten. Doorgaan?',
	0);
$mtnc[] = array('--', '', '', '', 8);
$mtnc[] = array('sync_topics_subjects',
	'Synchroniseer onderwerptitels',
	'Deze functie synchroniseert alle eerste berichten van elke onderwerp. Je hebt deze functie niet nodig onder de normale condities.',
	'Dit synchroniseert de onderwerptitels in alle eerste berichten van elke onderwerp. Het forum is niet bereikbaar tijdens deze actie. Doorgaan?',
	0);
$mtnc[] = array('rebuild_search_index',
	'Opnieuw opbouwen van de zoekindex',
	'Deze functie bouwt de index, dat gebruikt wordt voor het zoeken, opnieuw op. Je heb deze functie niet nodig onder de normale condities.',
	'Dit verwijderd de complete zoekindex en bouwt het opnieuw op. Deze taak kan enkele uren duren. Het forum is niet bereikbaar tijdens deze actie. Doorgaan?',
	7);
$mtnc[] = array('proceed_rebuilding',
	'Herstart opnieuw opbouwen',
	'Gebruik deze functie indien het aanmaken van de zoekindex is onderbroken.',
	'',
	4);
$mtnc[] = array('--', '', '', '', 1);
$mtnc[] = array('check_db',
	'Controleer database',
	'Controleer de database op fouten.',
	'',
	1);
$mtnc[] = array('optimize_db',
	'Optimaliseren database',
	'Optimaliseren van de tabellen. Dit reduceert de databasegrootte na het verwijderen van veel records en meer.',
	'',
	1);
$mtnc[] = array('repair_db',
	'Herstel database',
	'Herstelt de database als er een fout is gevonden.',
	'Je moet deze actie alleen uitvoeren als er een fout in de database is gevonden. Doorgaan?',
	1);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_auto_increment',
	'Reset auto verhoogde waardes',
	'Deze functie resets de auto verhoogde waardes. Dit moet alleen gedaan worden als er een probleem optreedt bij het invoegen van gegevens in de tabellen.',
	'Wil je echt de auto verhoogde waardes resetten? Er gaat geen gegevens verloren, maar doe dit alleen als het echt nodig is.',
	0);
$mtnc[] = array('heap_convert',
	'Converteer sessietabellen',
	'Deze functie converteert de sessietabellen naar een HEAP tabeltype. Dit wordt gewoonlijk gedaan bij de installatie en verhoogt de snelheid van phpBB een beetje. Je moet deze functie gebruiken als jouw sessietabel niet van het HEAP tabeltype is.',
	'Wil je echt de tabellen converteren?',
	2);
$mtnc[] = array('--', '', '', '', 3);
$mtnc[] = array('unlock_db',
	'Deblokkeer het forum',
	'Gebruik deze functie als u een foutmelding krijgt gedurende een van te voren gedane operatie en het forum nog steeds is geblokkeerd.',
	'',
	3);

$lang = array_merge($lang, array(
	'DB_Maintenance' => 'Databaseonderhoud',
	'DB_Maintenance_Description' => 'Hier kunt je de database controleren op fouten.<br /><b>Attentie:</b> Sommige operaties nemen iets langere tijd in beslag. Jouw forum zal <b>gesloten</b> zijn gedurende deze operaties.</br/><br /><b>Je wordt dringend verzocht om een backup van je database te maken voor je een van deze functies gebruikt!</b>',
	'Function' => 'Functie',
	'Function_Description' => 'Beschrijving',

	'Incomplete_configuration' => 'Een instelling voor <b>%s</b> is niet gevonden in de forumconfiguratie. Databaseonderhoud kan niet functioneren zonder deze instelling.<br />Je bent misschien vergeten de SQL-query\'s uit te voeren zoals beschreven in de installatieinstructie.',
	'dbtype_not_supported' => 'Sorry, deze functie ondersteunt je database niet',
	'no_function_specified' => 'Er is geen functie gespecificeerd',
	'function_unknown' => 'De gespecificeerde functie is onbekend',
	'Old_MySQL_Version' => 'Sorry, je MySQL versie ondersteunt deze functie niet. Gebruik versie 3.23.17 of hoger.',

	'Back_to_DB_Maintenance' => 'Terug naar databaseonderhoud',
	'Processing_time' => 'Databaseonderhoud neemt voor deze operaties %f seconden in beslag',
	
	'Lock_db' => 'Blokkeer forum',
	'Unlock_db' => 'Deblokkeer forum',
	'Already_locked' => 'Forum is reeds geblokkeerd',
	'Ignore_unlock_command' => 'Forum is gesloten in verband met het starten van deze operatie. Forum wordt niet gedeblokkeerd',
	'Delay_info' => 'Drie seconden vertraging om de database de tijd te geven alles af te ronden...',

	'Affected_row' => 'Getroffen gegevensrijen',
	'Affected_rows' => '%d getroffen gegevensrijen',
	'Done' => 'Klaar',
// The following variable is used when nothing had to be fixed in the database. It needs the complete paragraph-tag.
// If you do not want a message to be displayed in these cases, just leave the variable empty.
	'Nothing_to_do' => '<p class="gen"><i>Niets te doen :-)</i></p><br />' . "\n",

// Names for new records in several tables
	'New_cat_name' => 'Herstelde forums',
	'New_forum_name' => 'Herstelde onderwerpen',
	'New_topic_name' => 'Herstelde berichten',
	'Restored_topic_name' => 'Herstelde onderwerp',
	'New_poster_name' => 'Herstelde bericht', // Name for Poster of a restored post

// Function specific vars
// statistic
	'Statistic_title' => 'Forum- en databasestatistieken',
	'Database_table_info' => 'Databasestatistieken leveren drie verschillende waarden: diegene voor alle tabellen van de database, diegene voor alle tabellen standaard geleverd door phpBB (core tables) en diegene die starten met de prefix van de forumtabellen (geadvanceerde tabellen).',
	'Board_statistic' => 'Forumstatistieken',
	'Database_statistic' => 'Databasestatistieken',
	'Version_info' => 'Versieinformatie',
	'Thereof_deactivated_users' => 'daarvan gedeactiveerd',
	'Thereof_Moderators' => 'daarvan moderators',
	'Thereof_Administrators' => 'daarvan beheerders',
	'Users_with_Admin_Privileges' => 'Gebruikers met beheerder privileges',
	'Number_tables' => 'Aantal tabellen',
	'Number_records' => 'Aantal records',
	'DB_size' => 'Grootte van de database',
	'Thereof_phpbb_core' => 'daarvan Icy Phoenix core tabellen',
	'Thereof_phpbb_advanced' => 'daarvan geavanceerde Icy Phoenix tabellen',
	'Version_of_board' => 'Versie van Icy Phoenix',
	'Version_of_mod' => 'Versie van databaseonderhoud',
	'Version_of_PHP' => 'Versie van PHP',
	'Version_of_MySQL' => 'Versie van MySQL',
// config
	'Config_title' => 'Databaseoderhoud Configuratie',
	'Config_info' => 'De volgende opties laat u toe het gedrag van databaseonderhoud te configureren. Onthoudt dat een misconfiguratie tot onverwachte resultaten kan leiden.',
	'General_Config' => 'Algemene configuratie',
	'Rebuild_Config' => 'Configuratie heropbouwen van de zoekindex',
	'Current_Rebuild_Config' => 'Configuratie van huidige heropbouw',
	'Rebuild_Settings_Explain' => 'Deze instellingen passen het gedrag van de databaseonderhoud aan, als de zoekindex opnieuw wordt opgebouwd.',
	'Current_Rebuild_Settings_Explain' => 'Deze instellingen worden gebruikt door databaseonderhoud om de positie van de huidige heropbouw te bewaren. Het is onder normale omstandigheden niet nodig deze instellingen aan te passen.',
	'Disallow_postcounter' => 'Sta synchronisatie van gebruikers berichtentellers niet toe',
	'Disallow_postcounter_Explain' => 'Dit zet de functie uit die de gebruikers berichtenteller synchroniseert. U kunt deze functie uitzetten als u niet wil dat opgeruimde berichten worden verwijderd van de berichtentellers van de gebruikers.',
	'Disallow_rebuild' => 'Sta heropbouwen van zoekindex niet toe',
	'Disallow_rebuild_Explain' => 'Dit zet het heropbouwen van de zoek index uit. Een onderbroken heropbouw kan wel worden voortgezet.',
	'Rebuildcfg_Timelimit' => 'Maximale uitvoeringstijd voor heropbouw (in seconden)',
	'Rebuildcfg_Timelimit_Explain' => 'Maximale tijd gebruikt voor een stap tijdens heropbouw (standaard: 240). Deze waarde limiteerd de uitvoer tijd zelfs als een langere tijd mogelijk is.',
	'Rebuildcfg_Timeoverwrite' => 'Vaststaande hoeveelheid tijd nodig voor uitvoer (in seconden)',
	'Rebuildcfg_Timeoverwrite_Explain' => 'Vaststaand mogelijke tijd beschikbaar voor uitvoer (stanaard: 0). Met 0 wordt het resultaat van de berekening gebruikt als uitvoertijd, iedere andere waarde overschrijft de berekende waarde.',
	'Rebuildcfg_Maxmemory' => 'Maximale berichten grootte voor heropbouw (in kByte)',
	'Rebuildcfg_Maxmemory_Explain' => 'Maximale grootte van berichten geïndexeerd in een stap (standaard: 500). Als de berichten grootte boven deze waarde komt, wordt er geen verdere bericht geïndexeerd in de huidige stap.',
	'Rebuildcfg_Minposts' => 'Minimuale berichten voor index per stap',
	'Rebuildcfg_Minposts_Explain' => 'Minimale aantal berichten geïndexeerd per stap (standaard: 3). Definieert het aantal berichten dat als laatste zijn geïndexeerd per stap.',
	'Rebuildcfg_PHP3Only' => 'Gebruik alleen standaard PHP 3 compatible methode voor indexering',
	'Rebuildcfg_PHP3Only_Explain' => 'DB Onderhoud gebruikt een geadvanceerde methode voor indexering als PHP 4.0.5 of nieuwer beschikbaar is. Je kunt de geadvanceerde methode uitschakelen zodat databaseonderhoud gebruikmaakt van de standaard methode van het forum.',
	'Rebuildcfg_PHP4PPS' => 'Berichten geïndexeerd per seconde als de geadvanceerde indexeringmethode wordt gebruikt',
	'Rebuildcfg_PHP4PPS_Explain' => 'Geschatte waarde van berichten dat kan worden geïndexeerd per seconde als de geadvanceerde indexeringmethode wordt gebruikt (standaard: 8).',
	'Rebuildcfg_PHP3PPS' => 'Berichten geïndexeerd per seconde als de standaard indexering methode wordt gebruikt',
	'Rebuildcfg_PHP3PPS_Explain' => 'Geschatte waarde van berichten dat kan worden geïndexeerd per seconde als de standaard indexeringmethode wordt gebruikt (standaard: 1).',
	'Rebuild_Pos' => 'Laatst bericht geïndexeerd',
	'Rebuild_Pos_Explain' => 'ID van de laatste met succes geïndexeerd bericht. Is -1 als heropbouw klaar is.',
	'Rebuild_End' => 'Laatst bericht voor index',
	'Rebuild_End_Explain' => 'ID van het laatste bericht om te indexeren. Is 0 als de heropbouw klaar is.',
	'Dbmtnc_config_updated' => 'Configuratie met succes bijgewerkt',
	'Click_return_dbmtnc_config' => 'Klik %shier%s om terug te keren naar configuratie',
// check_user
	'Checking_user_tables' => 'Controleer gebruiker- en groeptabellen',
	'Checking_missing_anonymous' => 'Controleer voor vermist anoniem account',
	'Anonymous_recreated' => 'Anoniem account aangemaakt',
	'Checking_incorrect_pending_information' => 'Controleer incorrecte wachtende informatie',
	'Updating_invalid_pendig_user' => 'Ongeldige wachtende informatie van een gebruiker bijwerken',
	'Updating_invalid_pendig_users' => 'Ongeldige wachtende informatie van %d gebruikers bijwerken',
	'Updating_pending_information' => 'Wachtende informatie van een enkele gebruikersgroep bijwerken',
	'Checking_missing_user_groups' => 'Controleer voor gebruikers met meerdere, of geen enkele gebruikersgroep',
	'Found_multiple_SUG' => 'Gebruikers gevonden met meerdere enkele gebruikergroepen',
	'Resolving_user_id' => 'Ontbind gebruikers naar groep',
	'Removing_groups' => 'Verplaats groepen',
	'Removing_user_groups' => 'Verplaats gebruikers naar groepsverbinding',
	'Recreating_SUG' => 'Opnieuw aanmaken enkele gebruikersgroep voor gebruiker',
	'Checking_for_invalid_moderators' => 'Controleer voor ongeldige groepsmoderatorinstellingen',
	'Updating_Moderator' => 'Instelling huidige gebruiker als moderator voor groep',
	'Checking_moderator_membership' => 'Controleer groepslidmaatschap van moderators',
	'Updating_mod_membership' => 'Lidmaatschap van groepsmoderators bijwerken',
	'Moderator_added' => 'Moderator toegevoegd aan groep',
	'Moderator_changed_pending' => 'Wachtende status van moderator veranderd',
	'Remove_invalid_user_data' => 'Verwijderen ongeldige gebruikersgegevens in gebruikersgroeptabel',
	'Remove_empty_groups' => 'Verwijderen lege groepen',
	'Remove_invalid_group_data' => 'Verwijderen ongeldige groepsgegevens in gebruikersgroeptabel',
	'Checking_ranks' => 'Controleren van ongeldige rangen',
	'Invalid_ranks_found' => 'Gebruikers gevonden met ongeldige rangen',
	'Removing_invalid_ranks' => 'Verwijderen van ongeldige rangen',
	'Checking_themes' => 'Controleren voor ongeldige themainstellingen',
	'Updating_users_without_style' => 'Gebruikers zonder een thema bijwerken',
	'Default_theme_invalid' => '<b>Let op:</b> De standaardstijl is ongeldig. Controleer je configuratie.',
	'Updating_themes' => 'Ongeldige stijl naar stijl %d bijwerken',
	'Checking_theme_names' => 'Controleer voor ongeldige stijlnaamgegevens',
	'Removing_invalid_theme_names' => 'verwijderen van ongeldig stijlnaamgegevens',
	'Checking_languages' => 'Controleren voor ongeldige taalinstellingen',
	'Invalid_languages_found' => 'Gebruikers gevonden met ongeldige taalinstellingen',
	'Default_language_invalid' => '<b>Let op:</b> De standaardtaal is ongeldig. Controleer je configuratie.',
	'English_language_invalid' => '<b>Let op:</b> De standaardtaal is ongeldig en de Engelse taalbestanden bestaan niet. Je moet de <b>lang_english</b> map herstellen.',
	'Changing_language' => 'Verander taal van \'%s\' naar \'%s\'',
	'Remove_invalid_ban_data' => 'Verwijderen ongeldige bangegevens',
	'Remove_invalid_session_keys' => 'Verwijderen ongeldige sessiesleutels',
// check_post
	'Checking_post_tables' => 'Controleren voor bericht- en onderwerptabellen',
	'Checking_invalid_forums' => 'Controleren voor formulieren met ongeldige categorie',
	'Invalid_forums_found' => 'Gevonden forums met ongeldige categorie',
	'Setting_category' => 'Verplaats forums naar categorie \'%s\'',
	'Checking_posts_wo_text' => 'Controleren voor berichten zonder tekst',
	'Posts_wo_text_found' => 'Gevonden berichten zonder tekst',
	'Deleting_post_wo_text' => '%d (Onderwerp: %s (%d), Gebruikers: %s (%d))',
	'Deleting_Posts' => 'Verwijder berichtgegevens',
	'Checking_topics_wo_post' => 'Controleren voor onderwerpen zonder bericht',
	'Topics_wo_post_found' => 'Gevonden onderwerpen zonder bericht',
	'Deleting_topics' => 'Verwijderen onderwerpengegevens',
	'Checking_invalid_topics' => 'Controleren voor onderwerpen met ongeldig forum',
	'Invalid_topics_found' => 'Gevonden onderwerpen met ongeldig forum',
	'Setting_forum' => 'Verplaats onderwerpen naar forum \'%s\'',
	'Checking_invalid_posts' => 'Controleren voor berichten met ongeldig onderwerp',
	'Invalid_posts_found' => 'Gevonden berichten met ongeldig onderwerp',
	'Setting_topic' => 'Verplaats berichten %s naar onderwerp \'%s\' (%d) in forum \'%s\'',
	'Checking_invalid_forums_posts' => 'Controleren voor berichten met ongeldig forum',
	'Invalid_forum_posts_found' => 'Gevonden berichten met ongeldig forum',
	'Setting_post_forum' => '%d: Verplaats van forum \'%s\' (%d) naar \'%s\' (%d)',
	'Checking_texts_wo_post' => 'Controleren voor tekst zonder bericht',
	'Invalid_texts_found' => 'Gevonden tekst zonder bericht',
	'Recreating_post' => 'Bouw bericht opnieuw op %d en verplaats het naar onderwerpen \'%s\' in forum \'%s\'<br />Extract: %s',
	'Checking_invalid_topic_posters' => 'Controleer onderwerpen voor ongeldige posters',
	'Invalid_topic_poster_found' => 'Gevonden onderwerpen met onbekende poster',
	'Updating_topic' => 'Onderwerp %d (Poster: %d -&gt; %d) bijwerken',
	'Checking_invalid_posters' => 'Controleer berichten voor ongeldige posters',
	'Invalid_poster_found' => 'Gevonden berichten voor ongeldige poster',
	'Updating_posts' => 'Berichten bijwerken',
	'Checking_moved_topics' => 'Controleer verplaatste onderwerpen',
	'Deleting_invalid_moved_topics' => 'Verwijderen ongeldig verplaatste onderwerpen',
	'Updating_invalid_moved_topic' => 'Ongeldig verplaatste informatie bijwerken voor een niet verplaatste onderwerpen',
	'Updating_invalid_moved_topics' => 'Ongeldig verplaatste informatie bijwerken voor %d niet verplaatste onderwerpen',
	'Checking_prune_settings' => 'Controleren voor ongeldige opruimgegevens',
	'Removing_invalid_prune_settings' => 'Verwijderen ongeldige opruiminstellingen',
	'Updating_invalid_prune_setting' => 'Ongeldige opruiminstellingen voor een forum bijwerken',
	'Updating_invalid_prune_settings' => 'Ongeldige opruiminstellingen van %d forums bijwerken',
	'Checking_topic_watch_data' => 'Controleren voor ongeldig bekeken onderwerpen',
	'Checking_auth_access_data' => 'Controleren voor ongeldig groep authorisatiegegevens',
	'Must_synchronize' => 'Je moet de berichtengegevens synchoniseren voor je het forum gebruikt. Klik om door te gaan.',
// check_vote
	'Checking_vote_tables' => 'Controleer peilingstabellen',
	'Checking_votes_wo_topic' => 'Controleer voor peilingen zonder corresponderende onderwerp',
	'Votes_wo_topic_found' => 'Gevonden peilingen zonder onderwerp',
	'Invalid_vote' => '%s (%d) - Startdatum: %s - Einddatum: %s',
	'Deleting_votes' => 'Verwijder stemmen',
	'Checking_votes_wo_result' => 'Controleer voor peilingen zonder enig resultaat',
	'Votes_wo_result_found' => 'Gevonden peilingen zonder resultaat',
	'Checking_topics_vote_data' => 'Controleer peilinggegevens in onderwerptabellen',
	'Updating_topics_wo_vote' => 'Onderwerpen gemarkeerd als peiling zonder corresponderende stem bijwerken',
	'Updating_topics_w_vote' => 'Onderwerpen niet gemarkeerd als peiling met een corresponderende stem bijwerken',
	'Checking_results_wo_vote' => 'Controleer voor resultaten zonder corresponderende stem',
	'Results_wo_vote_found' => 'Gevonden resultaten zonder peiling',
	'Invalid_result' => 'Verwijder resultaten: %s (Stemmen: %d)',
	'Checking_voters_data' => 'Controleer voor ongeldige stemmengegevens',
// check_pm
	'Checking_pm_tables' => 'Controleer privéberichttabellen',
	'Checking_pms_wo_text' => 'Controleer voor privéberichten zonder een tekst',
	'Pms_wo_text_found' => 'Gevonden privéberichten zonder tekst',
	'Deleting_pn_wo_text' => '%d (Onderwerp: %s; Verstuurder: %s (%d); Ontvanger: %s (%d))',
	'Deleting_Pms' => 'Verwijderen privéberichtgegevens',
	'Checking_texts_wo_pm' => 'Controleer voor privéberichtentekst zonder een bericht',
	'Deleting_pm_texts' => 'Verwijder ongeldige privéberichtenteksten',
	'Checking_invalid_pm_senders' => 'Controleer privéberichten voor ongeldige verstuurder',
	'Invalid_pm_senders_found' => 'Gevonden privéberichten met ongeldige verstuurder',
	'Updating_pms' => 'Privéberichten bijwerken',
	'Checking_invalid_pm_recipients' => 'Controleer privéberichten voor ongeldige ontvangers',
	'Invalid_pm_recipients_found' => 'Gevonden privéberichten met ongeldige ontvangers',
	'Checking_pm_deleted_users' => 'Controleer privéberichten voor verwijderde verstuurders of ontvangers',
	'Invalid_pm_users_found' => 'Gevonden privéberichten met verwijderde verstuurders of ontvangers',
	'Deleting_pms' => 'Verwijderen privéberichten',
	'Synchronize_new_pm_data' => 'Synchronisering nieuwe privéberichtenteller',
	'Synchronizing_users' => 'Gebruikers bijwerken',
	'Synchronizing_user' => 'Gebruiker %s (%d) bijwerken',
	'Synchronize_unread_pm_data' => 'Synchroniseeer ongelezen privéberichtenteller',
// check_config
	'Checking_config_table' => 'Controleer configuratietabel',
	'Checking_config_entries' => 'Controleer toevoegingen in configuratietabel',
	'Restoring_config' => 'Herstel toevoegingen',
// check_search_wordmatch
	'Checking_search_wordmatch_tables' => 'Controleer gelijke woordentabel',
	'Checking_search_data' => 'Controleer voor ongeldige zoekopdrachten',
// check_search_wordlist
	'Checking_search_wordlist_tables' => 'Controleer gelijke woordentabel',
	'Checking_search_words' => 'Controleer voor onnodige zoekwoorden',
	'Removing_part_invalid_words' => 'Verwijder deel van onnodige zoekwoorden',
	'Removing_invalid_words' => 'Verwijder onnodige zoekwoorden',
// synchronize topics subjects
	'Sync_topics_subjects' => 'Synchroniseer onderwerptitels',
	'Sync_topics_subjects_progress' => 'Synchroniseren is in volle gang',
// rebuild_search_index
	'Rebuilding_search_index' => 'Herbouwen van zoekindex',
	'Deleting_search_tables' => 'Leegmaken zoektabellen',
	'Reset_search_autoincrement' => 'Resetten teller van zoektabellen',
	'Preparing_config_data' => 'Instelling configuratiegegevens',
	'Can_start_rebuilding' => 'Je kunt nu starten met het heropbouwen van de zoekindex',
	'Click_once_warning' => '<b>Klik maar 1 (een) keer!</b> - Het kan meerdere minuten duren totdat een nieuwe pagina wordt weergegeven.',
// proceed_rebuilding
	'Preparing_to_proceed' => 'Tabellen voorbereiden om door mogen te gaan',
	'Preparing_search_tables' => 'Zoektabellen voorbereiden om door te gaan',
// perform_rebuild
	'Click_or_wait_to_proceed' => 'Klik hier om door te gaan of wacht een paar seconden',
	'Indexing_progress' => '%d van %d berichten (%01.1f%%) is geïndexeerd. Laatste bericht geïndexeerd: %d',
	'Indexing_finished' => 'Het opnieuw opbouwen van de index is met succes afgerond',
// synchronize_post
	'Synchronize_posts' => 'Synchroniseer berichtgegevens',
	'Synchronize_topic_data' => 'Synchroniseer onderwerpen',
	'Synchronizing_topics' => 'Onderwerpen bijwerken',
	'Synchronizing_topic' => 'Onderwerp %d (%s) bijwerken',
	'Synchronize_moved_topic_data' => 'Synchroniseer verplaatste onderwerpen',
	'Inconsistencies_found' => 'Er zijn fouten gevonden in jouw database. %sControleer de bericht- en onderwerptabellen%s',
	'Synchronizing_moved_topics' => 'Verplaatste onderwerpen bijwerken',
	'Synchronizing_moved_topic' => 'Verplaatste onderwerp %d -&gt; %d (%s) bijwerken',
	'Synchronize_forum_topic_data' => 'Synchroniseer onderwerp-data van forums',
	'Synchronizing_forums' => 'Forums bijwerken',
	'Synchronizing_forum' => 'Forum %d (%s) bijwerken',
	'Synchronize_forum_data_wo_topic' => 'Synchroniseer forums zonder een onderwerp',
	'Synchronize_forum_post_data' => 'Synchroniseer berichtgegevens van forums',
	'Synchronize_forum_data_wo_post' => 'Synchroniseer forums zonder enig bericht',
// synchronize_user
	'Synchronize_post_counters' => 'Synchroniseer berichtenteller',
	'Synchronize_user_post_counter' => 'Synchroniseer berichtenteller van gebruikers',
	'Synchronizing_user_counter' => 'Gebruiker %s (%d): %d -&gt; %d is bijgewerkt',
// synchronize_mod_state
	'Synchronize_moderators' => 'Synchroniseer moderatorstatus in gebruikertabel',
	'Getting_moderators' => 'Zoeken moderators',
	'Checking_non_moderators' => 'Controleer voor gebruikers met moderatorstatus die geen forum moderaten',
	'Updating_mod_state' => 'Moderatorstatus van gebruikers bijwerken',
	'Changing_moderator_status' => 'Veranderen moderatorstatus van gebruiker %s (%d)',
	'Checking_moderators' => 'Controleer voor gebruikers zonder moderatorstatus die een forum moderaten',
// reset_date
	'Resetting_future_post_dates' => 'Resetten laatste berichtendatum in de toekomst',
	'Checking_post_dates' => 'Controleer datum van berichten',
	'Checking_pm_dates' => 'Controleer datum van privéberichten',
	'Checking_email_dates' => 'Controleer datum van laatste e-mail',
// reset_sessions
	'Resetting_sessions' => 'Resetten sessies',
	'Deleting_session_tables' => 'Leegmaken van sessie- en zoekresultatentabellen',
	'Restoring_session' => 'Herstellen sessie van actieve gebruiker',
// check_db
	'Checking_db' => 'Controleer database',
	'Checking_tables' => 'Controleer tabellen',
	'Table_OK' => 'Ok',
	'Table_HEAP_info' => 'Operatie niet beschikbaar voor HEAP-tabellen',
// repair_db
	'Repairing_db' => 'Repareren database',
	'Repairing_tables' => 'Repareren tabellen',
// optimize_db
	'Optimizing_db' => 'Optimaliseer database',
	'Optimizing_tables' => 'Optimaliseer tabellen',
	'Optimization_statistic' => 'Optimaliseer afgenomen grootte van tabellen van %s tot %s. Dat is een afname van %s of %01.2f%%.',
// reset_auto_increment
	'Reset_ai' => 'Resetten auto toenemende waarden',
	'Ai_message_update_table' => 'Tabel bijgewerkt',
	'Ai_message_no_update' => 'Er is update nodig',
	'Ai_message_update_table_old_mysql' => 'Tabel bijgewerkt', // Used if an old version of MySQL is used which does not allow a table check before updating the table
// heap_convert
	'Converting_heap' => 'Converteer sessietabel naar HEAP',
// unlock_db
	'Unlocking_db' => 'Heropen database',

// Emergency Recovery Console
	'Forum_Home' => 'Forum',
	'ERC' => 'Noodsituatie Herstelconsole',
	'Submit_text' => 'Bevestigen',
	'Select_Language' => 'Selecteer een taal',
	'No_selectable_language' => 'Er is geen taal om te selecteren',
	'Select_Option' => 'Selecteer een optie',
	'Option_Help' => 'Hints voor de opties',
	'Authenticate_methods' => 'Er zijn twee manieren om te identificeren',
	'Authenticate_methods_help_text' => 'Je moet je indentificeren om veranderingen aan te kunnen brengen aan de forumconfiguratie. Er zijn twee manieren om dat te doen: Eerste, je kunt je identificeren door de naam en wachtwoord van een actieve beheerderaccount van het forum (gewenste methode). Tweede, je kunt je identificeren door het invullen van de naam en wachtwoord van de databaseaccount dat het forum gebruikt om de database te benaderen.',
	'Authenticate_user_only' => 'Je moet je identificeren met een actieve beheerdersaccount',
	'Authenticate_user_only_help_text' => 'Je moet je identificeren om veranderingen aan te kunnen brengen aan de forumconfiguratie. Je kunt je alleen identificeren door 
	het invullen van naam en wachtwoord van een actieve beheerdersaccount van het forum.',
	'Admin_Account' => 'Beheerderaccount van het forum',
	'Database_Login' => 'Databasegebruiker',
	'Username' => 'Gebruikersnaam',
	'Password' => 'Wachtwoord',
	'Auth_failed' => 'Identificatie mislukt!',
	'Return_ERC' => 'Terugkeren naar noodsituatie herstelconsole',
	'cur_setting' => 'Huidige instelling',
	'rec_setting' => 'Geadviseerde instelling',
	'secure' => 'Veilig',
	'secure_yes' => 'ja (https)',
	'secure_no' => 'nee (http)',
	'domain' => 'Domein',
	'port' => 'Poort',
	'path' => 'Pad',
	'Cookie_domain' => 'Cookiedomein',
	'Cookie_name' => 'Cookienaam',
	'Cookie_path' => 'Cookiepad',
	'select_language' => 'Selecteer nieuwe taal',
	'select_theme' => 'Selecteer nieuw stijl',
	'reset_thmeme' => 'Herstel standaardstijl',
	'new_admin_user' => 'Verleen gebruikerbeheerprivileges',
	'dbms' => 'Databasetype',
	'DB_Host' => 'Databaseserver hostnaam / DSN',
	'DB_Name' => 'Jouw databasenaam',
	'DB_Username' => 'Databasegebruikersnaam',
	'DB_Password' => 'Databasewachtwoord',
	'Table_Prefix' => 'Prefix voor tabellen in database',
	'New_config_php' => 'Dit is je nieuwe config.' . PHP_EXT,
// Options
	'cls' => 'Wis alle sessies',
	'ecf' => 'Wis cache',
	'rdb' => 'Repareer databasetabellen',
	'cct' => 'Controleer configtabel',
	'rpd' => 'Reset padgegevens',
	'rcd' => 'Reset cookiegegevens',
	'rld' => 'Reset taalgegevens',
	'rtd' => 'Reset stijlgegevens',
	'dgc' => 'Blokkeer Gzip-compressie',
	'cbl' => 'Wis de banlijst',
	'raa' => 'Verwijder alle beheerders',
	'mua' => 'Verleen gebruikerbeheerprivileges',
	'rcp' => 'Herstel config.php',
// Info for options
	'cls_info' => 'Als je doorgaat worden alle sessies gewist.',
	'ecf_info' => 'Als je doorgaat worden de cache geleegd.',
	'rdb_info' => 'Als je doorgaat worden de tabellen van de database gerepareerd.',
	'cct_info' => 'Als je doorgaat wordt de configtabel gecontroleerd en vermiste toevoegingen worden hersteld.',
	'rpd_info' => 'Als je doorgaat worden de configgegevens bijgewerkt zoals de aanbevolen instelling is ingesteld.',
	'rcd_info' => 'Als je doorgaat worden de cookiegegevens bijgewerkt. De optie om een veilige cookie in te stellen of niet kan gevonden worden onder \'Reset padgegevens\'.',
	'rld_info' => 'Als je doorgaat wordt de geselecteerde taal gebruikt voor het forum en voor de gebruikers die deze gebruikt om zich te identificeren.',
	'rtd_info' => 'Als je doorgaat wordt de geselecteerde stijl gebruikt voor beide, het forum en de gebruiker die gebruikt wordt om te identificeren, of voor het standaardstijl (mg_themes) dat wordt hersteld en gebruikt voor forum en gebruiker.',
	'rtd_info_no_theme' => 'Als je doorgaat wordt het standaardstijl (mg_themes) hersteld en gebruikt voor beide, het forum en de gebruiker die gebruikt wordt om te identificeren.',
	'dgc_info' => 'Als je doorgaat wordt de Gzip-compressie geblokkeerd.',
	'cbl_info' => 'Als je doorgaat wordt zowel de banlijst als de niet toegestane gebruikers gewist.',
	'raa_info' => 'Als je doorgaat worden alle beheerders gewone gebruikers. Als je een beheerdersaccount gebruikt om te identificeren, behoudt het account zijn beheerdersniveau.',
	'mua_info' => 'Als je doorgaat worden de geselecteerde gebruikerbeheerders privileges verleent. De gebruiker wordt ook geactiveerd.',
	'rcp_info' => 'Als je doorgaat wordt een nieuwe config.php gemaakt met de gegevens die je invult.',
// Success messages for options
	'cls_success' => 'Alle sessies zijn succesvol gewist.',
	'ecf_success' => 'Cache is succesvol gewist.',
	'rdb_success' => 'De tabellen van de database zijn gerepareerd.',
	'rpd_success' => 'Forumconfiguratie is succesvol bijgewerkt.',
	'cct_success' => 'Configtabel is succesvol gecontroleerd.',
	'rcd_success' => 'Cookiegegevens zijn succesvol bijgewerkt.',
	'rld_success' => 'De taalgegevens zijn succesvol bijgewerkt.',
	'rld_failed' => 'De benodigde taalbestanden (lang_main.' . PHP_EXT . ' en lang_admin.' . PHP_EXT . ') bestaan niet.',
	'rtd_restore_success' => 'De standaardstijl is succesvol hersteld.',
	'rtd_success' => 'De stijlgegevens zijn succesvol bijgewerkt.',
	'dgc_success' => 'De Gzip-compressie is succesvol geblokkeerd.',
	'cbl_success' => 'De banlijst en de niet toegestane gebruikerslijst zijn succesvol gewist.',
	'cbl_success_anonymous' => 'De banlijst en de niet toegestane gebruikerslijst zijn succesvol gewist. Het anonieme account is aangemaakt. Aangezien groepsgegevens van het anoniem account mogelijk gewist zijn, is het raadzaam om de functie &quot;Controleer gebruikers- en groepstabellen&quot; in het hoofdmenu van de databaseonderhoud te gebruiken.',
	'raa_success' => 'Alle beheerders zijn succesvol verwijderd.',
	'mua_success' => 'De geselecteerde gebruiker heeft beheerderprivileges.',
	'mua_failed' => '<b>Fout:</b> De geselecteerde gebruiker bestaat niet of heeft reeds beheerprivileges.',
	'rcp_success' => "Kopiëer de tekst naar een tekstbestand, hernoem het naar <b>config.$phpEx</b> en upload het naar de root map van het forum. Ben er zeker van dat er geen teken (inclusief spaties en harde returns (enters)) zijn, voor de <b>&lt;?php</b> en achter de <b>?&gt;</b>.<br /> Ook kun je het bestand %sdownloaden%s naar je computer.",
// Text for success messages
	'Removing_admins' => 'Verwijderen beheerders',
// Help Text
	'Option_Help_Text' => '<p>Als je een melding krijgt dat er een fout is opgetreden bij het aanmaken van een sessie of zo, kun je de sessiegegevens wissen door <b>Alle sessies te wissen</b>te selecteren. Indien je problemen hebt met het verbinding maken met de databasetabellen, kun je de tabellen repareren door <b>Repareer databasetabellen</b> te selecteren. <b>Controleer configtabel</b> controleert de configtabel voor missende toevoegingen, dit iserg behulpzaam bij veel soorten van fouten.</p><p>Indien je niet kunt inloggen of in het beheerderspaneel kunt komen, is er misschien een fout in je pad of met je cookieinstellingen. Je kunt hen resetten met <b>Reset padgegevens</b> of <b>Reset cookiegegevens</b>. Je kunt ook de taalinstellingen resetten met <b>Reset taalgegevens</b> of de templategegevens met <b>Reset templategegevens</b>.</p><p>Indien er problemen optreden na activering van de Gzip-compressie, Kun je het deactiveren door <b>Blokkeer Gzip-compressie</b>te selecteren.</p><p>Indien je het wachtwoord van je account kwijt bent, kunt je een gebruikerbeheerprivileges geven door <b>Verleen gebruikerbeheerprivileges</b>te selecteren. Dit activeert ook de gebruiker, zodat je een gebruiker kunt nemen die je eerder heeft aangemaakt. Indien het niet mogelijk is een nieuwe gebruiker aan te maken, kun je de banlijst wissen met <b>Banlijst wissen</b> (dit herstelt ook de anonieme gebruiker).</p><p>Indien je board is gehackt, wordt je aangeraden alle beheerdersaccounts te verwijderen door <b>verwijder alle beheerders</b>te selecteren. (Het account zelf wordt niet verwijderd maar de rechten worden verwijderd.)</p><p>Indien je je config.php moet herstellen kunt je dit doen door <b>Herstel config.php</b> te selecteren.</p>',
	
	'dbmntc_Invalid_Option' => 'Ongeldige optie',
	)
);
?>