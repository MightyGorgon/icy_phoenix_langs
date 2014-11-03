<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_dbmtnc.php 96 2009-04-27 16:48:19Z Mighty Gorgon $
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
// Usage: $mtnc[] = array(internal Name, Name of Function, Description of Function, Warning Message (leave empty to avoid), Number of Check function (Integer))
// Use $mtnc[] = array('--', '', '', '', 0) for a space row (you can us a different check function)
$mtnc[] = array('statistic',
	'Statistik',
	'Visar information om forum och databasen.',
	'',
	0);
$mtnc[] = array('config',
	'Konfiguration',
	'Tillåter konfiguration på DB Maintenance.',
	'',
	5);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_user',
	'Kontrollera användarnamn och grupp tabeller',
	'Detta kommer att kontrollera användare och grupp tabeller efter fel och kommer att återställa saknade ensamma användargrupper.',
	'Du kommer att förlora alla grupper utan någon medlem genom denna åtgärd. Fortsätta?',
	0);
$mtnc[] = array('check_post',
	'Kontrollera post och ämnes tabeller',
	'Detta kommer att kontrollera inlägg och ämne tabeller efter fel.',
	'Du kommer att förlora alla inlägg utan någon text. Fortsätta?',
	0);
$mtnc[] = array('check_vote',
	'Kontrollera omröstnings tabeller',
	'Detta kommer att kontrollera omröstnings tabeller efter fel.',
	'Du kommer att förlora alla röster utan en motsvarande omröstning. Fortsätta?',
	0);
$mtnc[] = array('check_pm',
	'Kontrollera privata meddelande tabeller',
	'Detta kommer att kontrollera den privata meddelande tabellen efter fel.',
	'Olästa meddelanden kommer att raderas när antingen avsändaren eller mottagaren inte existerar. Fortsätta?',
	0);
$mtnc[] = array('check_config',
	'Kontrollera inställnings tabellen',
	'Detta kommer att kontrollera konfigurations tabellen för försvunna poster.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_search_wordmatch',
	'Kontrollera sök ord matchnings tabellen',
	'Detta kommer att kontrollera ord matchnings tabellen för fel. Denna tabell används för sökfunktionen.',
	'',
	0);
$mtnc[] = array('check_search_wordlist',
	'Kontrollera sök ord list tabellen',
	'Detta tar bort alla onödiga ord i ordlisn som används för sökning.',
	'Denna funktion kan ta lite tid att verkställa. Det är inte nödvändigt att utföra denna kontroll, men görs den kan detta minska databasens storlek lite. Fortsätta?',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('synchronize_post',
	'Synkronisera forum och ämnen',
	'Detta kommer att synkronisera inläggs räknaren och post data i forum och ämnen.',
	'Det här kommandot kommer att ta lite tid att slutföra. Om din server inte tillåter användningen av set_time_limit() kommandot, kan detta kommando avbrytas av PHP. Inga uppgifter kommer att gå vilse i detta, men vissa uppgifter kan inte uppdateras. Fortsätta?',
	0);
$mtnc[] = array('synchronize_user',
	'Synkronisera användares post räknare',
	'Detta kommer att synkronisera post räknaren för användarna.',
	'<b>Uppmärksamhet:</b> beskurna inlägg dras normalt inte av från post räknaren counter. När du kör det här kommandot kommer beskurna inlägg att dras från räknaren och kan inte återställas. Fortsätta?',
	6);
$mtnc[] = array('synchronize_mod_state',
	'Synkronisera moderator status',
	'Detta kommer att resync moderator status i användare tabell.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_date',
	'Återställ det senaste inläggs datumet',
	'Detta kommer att återställa det senaste inläggets uppgifter om det är i framtiden. Detta kommer att lösa frågor där användarna får ett meddelande om att de inte är tillåtet att göra ett annat inlägg så snart efter det sista.',
	'Vilken tid som helst i en post i framtiden kommer att ställas till den aktuella tiden. Fortsätta?',
	0);
$mtnc[] = array('reset_sessions',
	'Återställ alla sessioner',
	'Detta kommer att återställa alla nuvarande sessioner genom en tömning av sessions tabellen.',
	'Alla nuvarande aktiva användare kommer att förlora sin session och deras sökresultat. Fortsätta?',
	0);
$mtnc[] = array('--', '', '', '', 8);
$mtnc[] = array('sync_topics_subjects',
	'Synkronisera ämnes frågor',
	'Denna funktion kommer att synkronisera ämne frågor i första inlägget i varje inlägg. Du behöver inte denna funktion under normala förhållanden.',
	'Detta kommer att synkronisera ämnes frågor i första inlägget i varje ämne. Sidan kommer inte att vara tillgängliga under denna tid. Fortsätta?',
	0);
$mtnc[] = array('synchronize_notify_forum_id',
	'Synkronisera ämnes meddelande forum IDs',
	'Denna funktion vill uppdatera forum IDs på ämnes neddelandes tabell. Du behöver inte köra denna funktion under normala förhållanden.',
	'',
	0);
$mtnc[] = array('rebuild_search_index',
	'Återuppbygg söknings index',
	'Denna funktion kommer att återskapa indexet som används för sökning. Du behöver inte denna funktion under normala förhållanden.',
	'Detta kommer att ta bort det kompletta sökindexet och återuppbygga det. Det kan ta upp till flera timmar att genomföra denna uppgift. Forumet kommer inte att vara tillgängligt under denna tid. Fortsätta?',
	7);
$mtnc[] = array('proceed_rebuilding',
	'Starta ombyggnad',
	'Använd denna funktion vid på nytt skapande av sökindexet om den blir avbruten.',
	'',
	4);
$mtnc[] = array('--', '', '', '', 1);
$mtnc[] = array('check_db',
	'Kontrollera databas',
	'Kontrollera databasen för errors.',
	'',
	1);
$mtnc[] = array('optimize_db',
	'Optimera databas',
	'Optimera tabellerna. Detta minskar databasens storlek efter radering  av massor av records och så vidare.',
	'',
	1);
$mtnc[] = array('repair_db',
	'Reparera databas',
	'Fixar databasen när ett fel hittas.',
	'Du bör bara utföra den här åtgärden om ett fel rapporteras vid kontroll av databasen. Fortsätta?',
	1);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_auto_increment',
	'Återställ auto tillskotts värden',
	'Denna funktion återställer auto tillskotts värden. Detta bör endast utföras om det verkar vara ett problem när du kopplar in nya uppgifter i tabellerna.',
	'Vill du verkligen återställa auto tillskotts värden? Inga uppgifter kommer att gå vilse, men denna funktion bör bara användas vid behov.',
	0);
$mtnc[] = array('heap_convert',
	'Konvertera Session-Tabell',
	'Denna funktion konverterar session-tabellen till HEAP tabell typ. Detta kommer normalt att ske under installationen och snabbar på phpBB lite. Du bör använda denna funktion om din session-tabell inte är theYou och även använda denna funktion om din session-tabell inte är av HEAP tabell typ.',
	'Vill du verkligen konvertera denna tabell?',
	2);
$mtnc[] = array('--', '', '', '', 3);
$mtnc[] = array('unlock_db',
	'Lås upp forum',
	'Använd denna funktion om du fick ett fel under en operation som gjordes före och med forumet fortfarande låst.',
	'',
	3);

$lang = array_merge($lang, array(
	'DB_Maintenance' => 'Databas Verktyg',
	'DB_Maintenance_Description' => 'Kontrollera din databas för inkonsekvenser och felaktigheter.<br /><b>Uppmärksamhet:</b> Vissa operationer kommer att ta längre tid att utföra. Din sida kommer att <b>låsas</b> under dessa operationer.<br /><br /><b>Det är alltid rekommenderbart att ta en backup av databasen innan du använder någon av de funktioner som anges nedan!</b>',
	'Function' => 'Funktion',
	'Function_Description' => 'Beskrivning',

	'Incomplete_configuration' => 'En inställning för <b>%s</b> kunde inte hittas i forum konfigurationen. DB Maintenance kan inte köras utan denna inställning.<br />Du kanske har glömt att verkställa SQL uttalanden som beskrivs i installationsanvisningarna.',
	'dbtype_not_supported' => 'Tyvärr, denna funktion stöder inte din databas',
	'no_function_specified' => 'Ingen funktion har angivets',
	'function_unknown' => 'Den angivna funktionen är okänd',
	'Old_MySQL_Version' => 'Tyvärr, din MySQL-Version stöder inte den här funktionen. Vänligen använd version 3.23.17 eller nyare.',

	'Back_to_DB_Maintenance' => 'Tillbaka till Databas Maintenance',
	'Processing_time' => 'DB Maintenance tog %f sekunder för operationen',

	'Lock_db' => 'Inaktivering Forum',
	'Unlock_db' => 'Aktivering Forum',
	'Already_locked' => 'Sidan var redan låst',
	'Ignore_unlock_command' => 'Sidan var låst när du startade detta kommando. Sidan kommer inte att låsas upp',
	'Delay_info' => 'Försening tre sekunder för att låta databasens åtgärder avslutas...',

	'Affected_row' => 'En påverkad datauppsättning',
	'Affected_rows' => '%d påverkad datauppsättning',
	'Done' => 'Done',
// The following variable is used when nothing had to be fixed in the database. It needs the complete paragraph-tag.
// If you do not want a message to be displayed in these cases, just leave the variable empty.
	'Nothing_to_do' => '<p class="gen"><i>Nothing to do :-)</i></p><br />' . "\n",

// Names for new records in several tables
	'New_cat_name' => 'Återställda forum',
	'New_forum_name' => 'Återställda ämnen',
	'New_topic_name' => 'Återställda inlägg',
	'Restored_topic_name' => 'Återställda ämnen',
	'New_poster_name' => 'Återställda inlägg', // Name for Poster of a restored post

// Function specific vars
// statistic
	'Statistic_title' => 'Sido och databas statistik',
	'Database_table_info' => 'Databas statistik kommer att ge tre olika värden: dessa för alla tabeller i databasen, dessa i alla tabeller framförda av phpBB som standard (core-tabellerna) och dessa börjar med prefixet i forum tabeller (avancerade tabeller).',
	'Board_statistic' => 'Sido statistik',
	'Database_statistic' => 'Databas statistik',
	'Version_info' => 'Version information',
	'Thereof_deactivated_users' => 'dessa avaktiverade',
	'Thereof_Moderators' => 'dessa moderatorer',
	'Thereof_Administrators' => 'dessa administratörer',
	'Users_with_Admin_Privileges' => 'Användare med administratörs privileger',
	'Number_tables' => 'Antal tabeller',
	'Number_records' => 'Antal records',
	'DB_size' => 'Storlek på databasen',
	'Thereof_phpbb_core' => 'dessa Icy Phoenix kärn tabeller',
	'Thereof_phpbb_advanced' => 'dessa avancerade Icy Phoenix tabeller',
	'Version_of_board' => 'Version av Icy Phoenix',
	'Version_of_mod' => 'Version av DB Maintenance',
	'Version_of_PHP' => 'Version av PHP',
	'Version_of_MySQL' => 'Version av MySQL',
// config
	'Config_title' => 'DB Maintenance konfiguration',
	'Config_info' => 'Följande alternativ gör att du kan konfigurera beteende på DB Maintenance. Tänk på att en felkonfigurering kan leda till oväntade resultat.',
	'General_Config' => 'Allmänn konfiguration',
	'Rebuild_Config' => 'Konfiguration av ombyggnad av sökindexet',
	'Current_Rebuild_Config' => 'Konfiguration av nuvarande ombyggnad',
	'Rebuild_Settings_Explain' => 'Dessa inställningar justerar beteendet på DB Maintenance vid återuppbyggnaden av sökindexet.',
	'Current_Rebuild_Settings_Explain' => 'Dessa inställningar används av DB Maintenance för att lagra positionen i den nuvarande återuppbyggnaden. Det finns inget behov av att anpassa dessa inställningar under normala förhållanden.',
	'Disallow_postcounter' => 'Förhindra synkronisering av användarens post räknare',
	'Disallow_postcounter_Explain' => 'Detta kommer att inaktivera funktionen att synkronisera användarens inlägg efter räknare. Du kan förhindra den här funktionen om du inte vill att beskärda inlägg får dras av från inläggs räknaren av användarna.',
	'Disallow_rebuild' => 'Hindra återuppbyggnad av sökindexet',
	'Disallow_rebuild_Explain' => 'Detta kommer att inaktivera återuppbyggaden av sökindexet. En avbruten ombyggnad kan fortsätta men.',
	'Rebuildcfg_Timelimit' => 'Maximal utförande tid det tar att genomföra ombyggnad (i sekunder)',
	'Rebuildcfg_Timelimit_Explain' => 'Maximal tid som används för ett steg vid ombyggnad (standard: 240). Detta värde begränsar den tid det tar att genomföra, även om en längre tid skulle vara möjligt.',
	'Rebuildcfg_Timeoverwrite' => 'Fast tid tillgänglig för utförande (i sekunder)',
	'Rebuildcfg_Timeoverwrite_Explain' => 'Fast uppskattning av tidpunkten för genomförandet (standard: 0). Med 0 används resultatet av beräkningen som genomförandetid, något annat värde överskriver det beräknade värdet.',
	'Rebuildcfg_Maxmemory' => 'Maximal post storlek för ombyggnad (in kByte)',
	'Rebuildcfg_Maxmemory_Explain' => 'Maximal storlek på inläggs indexering i ett steg (standard: 500). När summan av inläggs storlekar blir under detta värde, kommer ingen ytterligare post att indexeras i det nuvarande steget.',
	'Rebuildcfg_Minposts' => 'Minsta inlägg till index per steg',
	'Rebuildcfg_Minposts_Explain' => 'Minsta antalet inlägg som indexeras per steg (standard: 3). Anger det antal inlägg som är minst indexerade per steg.',
	'Rebuildcfg_PHP3Only' => 'Använd endast standard PHP 3 kompatibel metod för indexering',
	'Rebuildcfg_PHP3Only_Explain' => 'DB Maintenance använder en avancerad metod för indexering när PHP 4.0.5 eller nyare är tillgängligt. Du kan stänga av den avancerade metoden så att DB Maintenance kommer att använda sig av standardmetoden i forumet.',
	'Rebuildcfg_PHP4PPS' => 'Inlägg som indexeras per sekund när du använder avancerade Indexeringsmetoden',
	'Rebuildcfg_PHP4PPS_Explain' => 'Uppskattat värde på inlägg som kan indexeras per sekund när du använder avancerade Indexeringsmetoden (standard: 8).',
	'Rebuildcfg_PHP3PPS' => 'Inlägg som indexeras per sekund när man använder standard Indexeringsmetoden',
	'Rebuildcfg_PHP3PPS_Explain' => 'Uppskattat värde på inlägg som kan indexeras per sekund när du använder standard Indexeringsmetoden (standard: 1).',
	'Rebuild_Pos' => 'Senaste inlägg indexerat',
	'Rebuild_Pos_Explain' => 'ID av den senaste successfulla indexerade post. Är -1 när ombyggnaden är klar.',
	'Rebuild_End' => 'Senaste inlägget till index',
	'Rebuild_End_Explain' => 'ID i senaste inlägget till index. Är 0 när ombyggnaden är klar.',
	'Dbmtnc_config_updated' => 'Konfigurationen Uppdaterad Successfullt',
	'Click_return_dbmtnc_config' => 'Klicka %sHär%s för att återgå till konfigurationen',
// check_user
	'Checking_user_tables' => 'Kontrollera användare och grupp tabeller',
	'Checking_missing_anonymous' => 'Kontroll efter försvunna anonyma konton',
	'Anonymous_recreated' => 'Anonymt konto återskapat',
	'Checking_incorrect_pending_information' => 'Kontroll av felaktigt avvaktande information',
	'Updating_invalid_pendig_user' => 'Uppdatera ogiltig avvaktan information från en användare',
	'Updating_invalid_pendig_users' => 'Uppdatera ogiltig avvaktan information från %d användare',
	'Updating_pending_information' => 'Uppdatering avvaktan information singel användargrupper',
	'Checking_missing_user_groups' => 'Kontroll av användare med flera eller ingen enskild användargrupp',
	'Found_multiple_SUG' => 'Hittade användare med flera singel användargrupper',
	'Resolving_user_id' => 'Lösa användare till grupp',
	'Removing_groups' => 'Ta bort grupper',
	'Removing_user_groups' => 'Ta bort användare till grupp anslutning',
	'Recreating_SUG' => 'Åter-skapa singel användargrupper för användare',
	'Checking_for_invalid_moderators' => 'Kontroll av ogiltiga grupp moderator inställningar',
	'Updating_Moderator' => 'Inställning av aktuell användare som moderator för gruppen',
	'Checking_moderator_membership' => 'Kontrollera gruppmedlemskap av moderatorer',
	'Updating_mod_membership' => 'Uppdatering av medlemskap i gruppen moderatorer',
	'Moderator_added' => 'Moderator tillagd till grupp',
	'Moderator_changed_pending' => 'Ändrad avvaktan av moderator',
	'Remove_invalid_user_data' => 'Ta bort ogiltig användar data i användar-grupp-tabell',
	'Remove_empty_groups' => 'Ta bort tomma grupper',
	'Remove_invalid_group_data' => 'Ta bort ogiltiga gruppdata i användar-grupp-tabell',
	'Checking_ranks' => 'Kontroll av ogiltiga värderingar',
	'Invalid_ranks_found' => 'Hittade användare med ogiltiga värderingar',
	'Removing_invalid_ranks' => 'Ta bort ogiltiga värderingar',
	'Checking_themes' => 'Kontroll för ogiltiga teman inställningar',
	'Updating_users_without_style' => 'Uppdatera användare utan tema uppsättning',
	'Default_theme_invalid' => '<b>Uppmärksamhet:</b> Standard stilen är ogiltig. Vänligen Kontrollera din konfiguration.',
	'Updating_themes' => 'Uppdatering ogiltig teman till tema %d',
	'Checking_theme_names' => 'Kontroll för ogiltiga tema namn data',
	'Removing_invalid_theme_names' => 'Ta bort ogiltiga tema namn data',
	'Checking_languages' => 'Kontroll för ogiltiga språk inställningarna',
	'Invalid_languages_found' => 'Hittade användare med ogiltiga språk inställningar',
	'Default_language_invalid' => '<b>Uppmärksamhet:</b> Standardspråket är ogiltigt. Vänligen Kontrollera din konfiguration.',
	'English_language_invalid' => '<b>Uppmärksamhet:</b> Standardspråket är ogiltigt och de Engelska språk-filerna finns inte. Du måste återställa <b>lang_english</b>-katalogen.',
	'Changing_language' => 'Ändra språk \'%s\' till \'%s\'',
	'Remove_invalid_ban_data' => 'Ta bort ogiltiga förbuds data',
	'Remove_invalid_session_keys' => 'Ta bort ogiltiga sessions nycklar',
// check_post
	'Checking_post_tables' => 'Kontrollera post och ämnes tabeller',
	'Checking_invalid_forums' => 'Kontrollering av forum med ogiltiga kategori',
	'Invalid_forums_found' => 'Hittade forum med ogiltiga kategorier',
	'Setting_category' => 'Flytta forum till kategori \'%s\'',
	'Checking_posts_wo_text' => 'Kontrollering av inlägg utan någon text',
	'Posts_wo_text_found' => 'Hittade poster utan text',
	'Deleting_post_wo_text' => '%d (Ämnen: %s (%d); Användare: %s (%d))',
	'Deleting_Posts' => 'Ta bort post data',
	'Checking_topics_wo_post' => 'Kontrollering av ämnen utan post',
	'Topics_wo_post_found' => 'Hittade ämnen utan någon post',
	'Deleting_topics' => 'Radera ämnes data',
	'Checking_invalid_topics' => 'Kontrollering av ämnen med ogiltiga forum',
	'Invalid_topics_found' => 'Hittade inlägg med ogiltiga forum',
	'Setting_forum' => 'Flytta ämnen till forum \'%s\'',
	'Checking_invalid_posts' => 'Kontrollering av inlägg med ogiltiga ämne',
	'Invalid_posts_found' => 'Hittade inlägg med ogiltiga ämne',
	'Setting_topic' => 'Flytta inlägg %s till ämne \'%s\' (%d) i forum \'%s\'',
	'Checking_invalid_forums_posts' => 'Kontrollering av inlägg med ogiltiga forum',
	'Invalid_forum_posts_found' => 'Hittade inlägg med ogiltiga forum',
	'Setting_post_forum' => '%d: Flytta från forum \'%s\' (%d) till \'%s\' (%d)',
	'Checking_texts_wo_post' => 'Kontrollera efter text utan en post',
	'Invalid_texts_found' => 'Hittade text utan en post',
	'Recreating_post' => 'Återskapa post %d och flytta den till ämne \'%s\' i forum \'%s\'<br />Utdrag: %s',
	'Checking_invalid_topic_posters' => 'Kontrollera inlägg för ogiltiga poster',
	'Invalid_topic_poster_found' => 'Hittade inlägg med ogiltiga poster',
	'Updating_topic' => 'Uppdatera ämne %d (Poster: %d -&gt; %d)',
	'Checking_invalid_posters' => 'Kontrollera inlägg för ogiltiga poster',
	'Invalid_poster_found' => 'Hittade inlägg med ogiltiga poster',
	'Updating_posts' => 'Uppdatera poster',
	'Checking_moved_topics' => 'Kontrollera flyttade ämnen',
	'Deleting_invalid_moved_topics' => 'Ta bort ogiltiga flyttade ämnen',
	'Updating_invalid_moved_topic' => 'Uppdatera ogiltig flyttad information för ett oberört ämnen',
	'Updating_invalid_moved_topics' => 'Uppdatera ogiltig flyttad information för %d oberörda ämnen',
	'Checking_prune_settings' => 'Kontroll för ogiltig beskärd data',
	'Removing_invalid_prune_settings' => 'Ta bort ogiltig beskärda inställningar',
	'Updating_invalid_prune_setting' => 'Uppdatera ogiltig beskärda inställningar för ett forum',
	'Updating_invalid_prune_settings' => 'Uppdatera ogiltig beskärda inställningar för %d forums',
	'Checking_topic_watch_data' => 'Kontroll för ogiltig bevakade ämnen',
	'Checking_auth_access_data' => 'Kontroll för ogiltig grupp tillåten data',
	'Must_synchronize' => 'Du måste synkronisera post data innan du använder forumet. Klicka för att fortsätta.',
// rebuild last poster details
	'Rebuild_Last_Poster_Details' => 'Återuppbygg senaste inläggs detaljer',
// check_vote
	'Checking_vote_tables' => 'Kontrollera röst tabeller',
	'Checking_votes_wo_topic' => 'Kontroll av rösterna utan motsvarande ämne',
	'Votes_wo_topic_found' => 'Hittade röster utan ämne',
	'Invalid_vote' => '%s (%d) - Start datum: %s - Slut datum: %s',
	'Deleting_votes' => 'Radera röster',
	'Checking_votes_wo_result' => 'Kontroll av röster utan resultat',
	'Votes_wo_result_found' => 'Hittade röster utan resultat',
	'Checking_topics_vote_data' => 'Kontrollera röstnings uppgifter i ämnes tabeller',
	'Updating_topics_wo_vote' => 'Uppdatera ämnen markerade som omröstning utan en motsvarande omröstning',
	'Updating_topics_w_vote' => 'Uppdatera ämnen som inte är märkta som omröstning, men med en motsvarande omröstning',
	'Checking_results_wo_vote' => 'Kontroll av resultaten utan motsvarande omröstning',
	'Results_wo_vote_found' => 'Hittade resultat utan röst',
	'Invalid_result' => 'Radera resultat: %s (Röster: %d)',
	'Checking_voters_data' => 'Kontroll för ogiltig omröstnings data',
// check_pm
	'Checking_pm_tables' => 'Kontrollerar privata meddelanden tabeller',
	'Checking_pms_wo_text' => 'Kontroll efter privata meddelanden utan text',
	'Pms_wo_text_found' => 'Hittade privata meddelanden utan text',
	'Deleting_pn_wo_text' => '%d (Ämne: %s; Avsändare: %s (%d); Mottagare: %s (%d))',
	'Deleting_Pms' => 'Radera privat meddelande data',
	'Checking_texts_wo_pm' => 'Kontroll av privata meddelanden text utan ett meddelande',
	'Deleting_pm_texts' => 'Ta bort ogiltiga privata meddelanden text',
	'Checking_invalid_pm_senders' => 'Kontrollera privata meddelanden efter ogiltig avsändare',
	'Invalid_pm_senders_found' => 'Hittade privata meddelanden med ogiltig avsändare',
	'Updating_pms' => 'Uppdatering privata meddelanden',
	'Checking_invalid_pm_recipients' => 'Kontrollera privata meddelanden efter ogiltig mottagare',
	'Invalid_pm_recipients_found' => 'Hittade privata meddelanden med ogiltiga mottagare',
	'Checking_pm_deleted_users' => 'Kontrollera privata meddelanden efter raderade avsändare eller mottagare',
	'Invalid_pm_users_found' => 'Hittade privata meddelanden med raderade avsändare eller mottagare',
	'Deleting_pms' => 'Radera privata meddelanden',
	'Synchronize_new_pm_data' => 'Synkronisera nya privata meddelanden räknare',
	'Synchronizing_users' => 'Uppdatera användare',
	'Synchronizing_user' => 'Uppdatera användare %s (%d)',
	'Synchronize_unread_pm_data' => 'Synkronisera olästa privata meddelanden räknare',
// check_config
	'Checking_config_table' => 'Kontrollera konfigurations tabellen',
	'Checking_config_entries' => 'Kontrollera uppgifterna i konfigurations tabellen',
	'Restoring_config' => 'Återställa poster',
// check_search_wordmatch
	'Checking_search_wordmatch_tables' => 'Kontrollera ord matchnings tabellen',
	'Checking_search_data' => 'Kontrollera för ogiltiga söknings data',
// check_search_wordlist
	'Checking_search_wordlist_tables' => 'Kontrollera ord matchnings tabellen',
	'Checking_search_words' => 'Kontroll av onödiga sökord',
	'Removing_part_invalid_words' => 'Ta bort en del onödiga sökord',
	'Removing_invalid_words' => 'Ta bort onödiga sökord',
// synchronize topics subjects
	'Sync_topics_subjects' => 'Synkronisera ämnes Frågor',
	'Sync_topics_subjects_progress' => 'Synkronisering pågår',
// rebuild_search_index
	'Rebuilding_search_index' => 'Återuppbygger söknings index',
	'Deleting_search_tables' => 'Tömmer söknings tabeller',
	'Reset_search_autoincrement' => 'Återställer räknare för söknings tabeller',
	'Preparing_config_data' => 'Ställer konfigurations data',
	'Can_start_rebuilding' => 'Nu kan du börja med att bygga om söknings index',
	'Click_once_warning' => '<b>Klicka bara på länken en gång!</b> - det kan ta upp till flera minuter tills en ny sida visas.',
// proceed_rebuilding
	'Preparing_to_proceed' => 'Förbereder tabeller för att tillåta fortsättning',
	'Preparing_search_tables' => 'Förbereder sök tabeller för fortsättning',
// perform_rebuild
	'Click_or_wait_to_proceed' => 'Klicka här för att gå vidare eller vänta några sekunder',
	'Indexing_progress' => '%d av %d poster (%01.1f%%) har blivit indexerat. Senaste post indexerad: %d',
	'Indexing_finished' => 'Återuppbyggnad av indexet var färdigt successfullt',
// synchronize_notify_forum_id
	'Synchronizing_notify_forum_ids' => 'Synkronisera ämnes meddelandes forum IDs',
// synchronize_post
	'Synchronize_posts' => 'Synkronisera post data',
	'Synchronize_topic_data' => 'Synkronisera ämnen',
	'Synchronizing_topics' => 'Uppdatera ämnen',
	'Synchronizing_topic' => 'Uppdatera ämne %d (%s)',
	'Synchronize_moved_topic_data' => 'Synkronisera flyttade ämnen',
	'Inconsistencies_found' => 'Inkonsekvenser i din databas hittades. Vänligen %skontrollera post och ämnes tabeller%s',
	'Synchronizing_moved_topics' => 'Uppdatera flyttade ämnen',
	'Synchronizing_moved_topic' => 'Uppdatera flyttade ämne %d -&gt; %d (%s)',
	'Synchronize_forum_topic_data' => 'Synkronisera ämne-data för forum',
	'Synchronizing_forums' => 'Uppdatera forum',
	'Synchronizing_forum' => 'Uppdatera forum %d (%s)',
	'Synchronize_forum_data_wo_topic' => 'Synkronisera forum utan något ämne',
	'Synchronize_forum_post_data' => 'Synkronisera post-data för forum',
	'Synchronize_forum_data_wo_post' => 'Synkronisera forum utan någon post',
// synchronize_user
	'Synchronize_post_counters' => 'Synkronisera post räknare',
	'Synchronize_user_post_counter' => 'Synkronisera post räknare för användare',
	'Synchronizing_user_counter' => 'Uppdatera användare %s (%d): %d -&gt; %d',
// synchronize_mod_state
	'Synchronize_moderators' => 'Synkronisera moderator status i användare tabell',
	'Getting_moderators' => 'Få moderatorer',
	'Checking_non_moderators' => 'Kontroll efter användare med moderator-status som inte modererar ett forum',
	'Updating_mod_state' => 'Uppdatera moderator status för användare',
	'Changing_moderator_status' => 'Ändra moderator status för användare %s (%d)',
	'Checking_moderators' => 'Kontroll av användare utan moderator-status som modererar ett forum',
// reset_date
	'Resetting_future_post_dates' => 'Återställa senaste inläggs datum i framtiden',
	'Checking_post_dates' => 'Kontrollera datum för poster',
	'Checking_pm_dates' => 'Kontrollera datum för privata meddelanden',
	'Checking_email_dates' => 'Kontrollera datum för senaste e-post',
// reset_sessions
	'Resetting_sessions' => 'Återställa sessioner',
	'Deleting_session_tables' => 'Tömma sessionen och sökresultat tabeller',
	'Restoring_session' => 'Återställa sessioner på aktiva användare',
// check_db
	'Checking_db' => 'Kontrollerar databas',
	'Checking_tables' => 'Kontrollerar tabeller',
	'Table_OK' => 'OK',
	'Table_HEAP_info' => 'Kommando inte tillgängligt för HEAP-tabeller',
// repair_db
	'Repairing_db' => 'Reparerar databas',
	'Repairing_tables' => 'Reparerar tabeller',
// optimize_db
	'Optimizing_db' => 'Optimera databas',
	'Optimizing_tables' => 'Optimera tabeller',
	'Optimization_statistic' => 'Optimering minskar storleken på tabeller från %s till %s. Det är en minskning med %s eller %01.2f%%.',
// reset_auto_increment
	'Reset_ai' => 'Återställa auto tillskotts  värden',
	'Ai_message_update_table' => 'tabell uppdaterad',
	'Ai_message_no_update' => 'ingen uppdatering nödvändig',
	'Ai_message_update_table_old_mysql' => 'tabell uppdaterad', // Used if an old version of MySQL is used which does not allow a table check before updating the table
// heap_convert
	'Converting_heap' => 'Konvertera Session-Tabeller till HEAP',
// unlock_db
	'Unlocking_db' => 'Frigör databas',

// Emergency Recovery Console
	'Forum_Home' => 'Forum Hem',
	'ERC' => 'Akut Återvinnings Konsoll',
	'Submit_text' => 'Skicka',
	'Select_Language' => 'Välj ett språk',
	'No_selectable_language' => 'Inga valbara språk finns',
	'Select_Option' => 'Välj ett alternativ',
	'Option_Help' => 'Tips för alternativ',
	'Authenticate_methods' => 'Det finns två sätt att verifiera',
	'Authenticate_methods_help_text' => 'Du måste verifiera och göra några förändringar i forumets konfiguration. Det finns två sätt att göra det: Först, kan du verifiera genom att ange namn och lösenord för alla aktiva administratörskonto i forumet (föredra metod). Andra, du kan autentisera genom att ange namn och lösenord för databasens konto som forumet använder för åtkomst till databasen.',
	'Authenticate_user_only' => 'Du måste verifiera med ett aktivt administratörskonto',
	'Authenticate_user_only_help_text' => 'Du måste verifiera genom att göra några förändringar i forumets konfiguration. Du kan bara verifiera genom att ange namn och lösenord för alla aktiva administratörskonto i forumet.',
	'Admin_Account' => 'Admin konto på forumet',
	'Database_Login' => 'Databas användare',
	'Username' => 'Användarnamn',
	'Password' => 'Lösenord',
	'Auth_failed' => 'Autentiseringen misslyckades!',
	'Return_ERC' => 'Återgå till Akut Återvinnings Konsoll',
	'cur_setting' => 'Aktuell inställning',
	'rec_setting' => 'Rekommenderad inställning',
	'secure' => 'Säkerhet',
	'secure_yes' => 'ja (https)',
	'secure_no' => 'nej (http)',
	'domain' => 'Domän',
	'port' => 'Port',
	'path' => 'Sökväg',
	'Cookie_domain' => 'Cookie domän',
	'Cookie_name' => 'Cookie namn',
	'Cookie_path' => 'Cookie sökväg',
	'select_language' => 'Välj nytt språk',
	'select_theme' => 'Välj nytt tema',
	'reset_thmeme' => 'Återskapa standard tema',
	'new_admin_user' => 'Användare att bevilja admin privilegier',
	'dbms' => 'Databas Typ',
	'DB_Host' => 'Databas Server Värdnamn / DSN',
	'DB_Name' => 'Ditt Databas Namn',
	'DB_Username' => 'Databas Användarnamn',
	'DB_Password' => 'Databas Lösenord',
	'Table_Prefix' => 'Prefix för tabeller i databas',
	'New_config_php' => 'Detta är din nya config.' . PHP_EXT,
// Options
	'cls' => 'Rensa alla sessioner',
	'ecf' => 'Töm cache-mappen',
	'rdb' => 'Reparera databas tabeller',
	'cct' => 'Kontrollera config tabellen',
	'rpd' => 'Återställ path data',
	'rcd' => 'Återställ cookie data',
	'rld' => 'Återställ språk data',
	'rtd' => 'Återställ mall data',
	'dgc' => 'Avaktivera GZip komprimering',
	'cbl' => 'Rensa bannlysnings listan',
	'raa' => 'Ta bort alla administratörer',
	'mua' => 'Bevilja användaren admin privilegier',
	'rcp' => 'Återskapa config.php',
// Info for options
	'cls_info' => 'Vid förfarandet kommer alla sessioner att avslutas.',
	'ecf_info' => 'Vid förfarandet kommer cache mappen att bli rensad.',
	'rdb_info' => 'Vid förfarandet av tabellerna i databasen kommer dessa att repareras.',
	'cct_info' => 'Vid förfarandet kommer config tabellen att kontrolleras och missade poster blir återställda.',
	'rpd_info' => 'Vid förfarandet kommer config data att bli uppdaterad om den rekommenderade inställningen är vald.',
	'rcd_info' => 'Vid förfarandet kommer cookie data att bli uppdaterad. Alternativet om att ställa en säker cookie eller ej finns under \'Återställ sökvägs data\'.',
	'rld_info' => 'Vid förfarandet kommer valt språk att användas för både forumet och användare som används för att verifiera.',
	'rtd_info' => 'Vid förfarandet kommer antingen den valda stilen att användas för både forumet och användare som används för att verifiera eller kommer standard temat (Icy Phoenix) att återskapas och används för forum och användare.',
	'rtd_info_no_theme' => 'Vid förfarandet kommer standard temat (Icy Phoenix) att bli återskapat och användas för både forumet och användare som används för att verifiera.',
	'dgc_info' => 'Vid förfarandet kommer GZip komprimering att bli avaktiverad.',
	'cbl_info' => 'Vid förfarandet kommer både bannlysnings listan och otillåtna användare att bli rensade.',
	'raa_info' => 'Vid förfarandet kommer alla admins att ställas in till normala användare. Om du använder ett admin konto till verifiering, kommer det konto som används för autentisering att behålla sin Administratörs nivå.',
	'mua_info' => 'Vid förfarandet kommer de valda användarna att beviljas administratörs privilegier. Användaren kommer också att vara aktiverad.',
	'rcp_info' => 'Vid förfarandet kommer en ny config.php att skapas med data införd.',
// Success messages for options
	'cls_success' => 'Alla sessionerna var rensade successfullt.',
	'ecf_success' => 'Cache rensat successfullt.',
	'rdb_success' => 'Tabellerna i databasen har reparerats.',
	'rpd_success' => 'Sido konfiguration uppdaterad successfullt.',
	'cct_success' => 'Config tabell kontrollerad successfullt.',
	'rcd_success' => 'Cookie data uppdaterades successfullt.',
	'rld_success' => 'Språk data uppdaterades successfullt.',
	'rld_failed' => 'De obligatoriska språk filerna (lang_main.' . PHP_EXT . ' och lang_admin.' . PHP_EXT . ') finns inte.',
	'rtd_restore_success' => 'Standard stilen återställdes successfullt.',
	'rtd_success' => 'Stil data var uppdaterad successfullt.',
	'dgc_success' => 'GZip-komprimering inaktiverades successfullt.',
	'cbl_success' => 'Bannlysnings listan och otillåtna användare avslutades successfullt.',
	'cbl_success_anonymous' => 'Bannlysnings listan och otillåtna användare avslutades successfullt. Det anonyma kontot har blivit återskapat. Sedan gruppdata av anonyma konto kan saknas, rekommenderas det att använda funktionen &quot;Kontrollera användarnamn och grupp tabeller&quot; i den centrala delen av DB Maintenance.',
	'raa_success' => 'Alla admins togs bort successfullt.',
	'mua_success' => 'Den valda användaren har nu admin privilegier.',
	'mua_failed' => '<b>Error:</b> Den valda användaren finns inte eller har redan admin rättigheter.',
	'rcp_success' => "Kopiera texten till en textfil, döp om den till <b>config.php</b> och ladda upp den till rotkatalogen på forumet. Se till att det inte finns några tecken (inklusive mellanslag och linje feeds) före <b>&lt;?php</b> och efter <b>?&gt;</b>.<br />Du kan också %sladda ner%s filen till din dator.",
// Text for success messages
	'Removing_admins' => 'Ta bort admins',
// Help Text
	'Option_Help_Text' => '<p>Om du får en rapport om att det var ett misstag att skapa ett möte eller så kan du rensa sessionen genom att välja <b>Rensa alla sessioner</b>. Om du har problem med att få tillgång till databasens tabeller kan du reparera tabellerna genom att välja <b>Reparera databas tabellerna</b>. <b>Kontrollera config tabellen</b> kommer att kontrollera config tabellen efter saknade uppgifter, vilket kan vara till hjälp för olika typer av fel.</p><p>Om du inte kan logga in eller har tillgång till admin-panelen kan det finnas ett fel i din sökväg eller dina cookie-inställningar. Du kan återställa dem med <b>Reset path data</b> or <b>Återställ cookie data</b>. Du kan även återställa språk inställningarna med <b>Återställ språk data</b> eller mall data med <b>Återställ mall  data</b>.</p><p>Om problem uppstår efter att du har aktiverat gzip komprimering kan du avaktivera det genom att välja <b>Avaktivera GZip kompression</b>.</p><p>Om du tappat bort lösenordet för ditt konto kan du ge en användare admin privilegier genom att välja <b>Bevilja användaren admin privilegier</b>. Detta kommer även att aktivera användaren så att du kan använda ett användarnamn som skapats tidigare. Om du inte kan lägga till en ny användare, kan du rensa bannlysningslistan med <b>Rensa bannlysnings listan</b> (detta kommer också att återställa anonyma användare).</p><p>Om ditt forum har hackats, rekommenderas att du tar bort alla admin konton genom att välja <b>Ta bort alla administratörer</b>. (kontot i sig själv kommer inte att raders men rättigheterna blir borttagna.)</p><p>Om du behöver återställa din config.php kan du göra det genom att välja <b>Återskapa config.php</b>.</p>',

	'dbmntc_Invalid_Option' => 'Ogiltigt Alternativ',
	)
);
?>