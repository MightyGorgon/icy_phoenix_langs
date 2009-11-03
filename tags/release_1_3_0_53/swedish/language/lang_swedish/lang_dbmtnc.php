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
// Usage: $mtnc[] = array(internal Name, Name of Function, Description of Function, Warning Message (leave empty to avoid), Number of Check function (Integer))
// Use $mtnc[] = array('--', '', '', '', 0) for a space row (you can us a different check function)
$mtnc[] = array('statistic',
	'Statistik',
	'Visar information om forum och databasen.',
	'',
	0);
$mtnc[] = array('config',
	'Konfiguration',
	'Till�ter konfiguration p� DB Maintenance.',
	'',
	5);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_user',
	'Kontrollera anv�ndarnamn och grupp tabeller',
	'Detta kommer att kontrollera anv�ndare och grupp tabeller efter fel och kommer att �terst�lla saknade ensamma anv�ndargrupper.',
	'Du kommer att f�rlora alla grupper utan n�gon medlem genom denna �tg�rd. Forts�tta?',
	0);
$mtnc[] = array('check_post',
	'Kontrollera post och �mnes tabeller',
	'Detta kommer att kontrollera inl�gg och �mne tabeller efter fel.',
	'Du kommer att f�rlora alla inl�gg utan n�gon text. Forts�tta?',
	0);
$mtnc[] = array('check_vote',
	'Kontrollera omr�stnings tabeller',
	'Detta kommer att kontrollera omr�stnings tabeller efter fel.',
	'Du kommer att f�rlora alla r�ster utan en motsvarande omr�stning. Forts�tta?',
	0);
$mtnc[] = array('check_pm',
	'Kontrollera privata meddelande tabeller',
	'Detta kommer att kontrollera den privata meddelande tabellen efter fel.',
	'Ol�sta meddelanden kommer att raderas n�r antingen avs�ndaren eller mottagaren inte existerar. Forts�tta?',
	0);
$mtnc[] = array('check_config',
	'Kontrollera inst�llnings tabellen',
	'Detta kommer att kontrollera konfigurations tabellen f�r f�rsvunna poster.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_search_wordmatch',
	'Kontrollera s�k ord matchnings tabellen',
	'Detta kommer att kontrollera ord matchnings tabellen f�r fel. Denna tabell anv�nds f�r s�kfunktionen.',
	'',
	0);
$mtnc[] = array('check_search_wordlist',
	'Kontrollera s�k ord list tabellen',
	'Detta tar bort alla on�diga ord i ordlisn som anv�nds f�r s�kning.',
	'Denna funktion kan ta lite tid att verkst�lla. Det �r inte n�dv�ndigt att utf�ra denna kontroll, men g�rs den kan detta minska databasens storlek lite. Forts�tta?',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('synchronize_post',
	'Synkronisera forum och �mnen',
	'Detta kommer att synkronisera inl�ggs r�knaren och post data i forum och �mnen.',
	'Det h�r kommandot kommer att ta lite tid att slutf�ra. Om din server inte till�ter anv�ndningen av set_time_limit() kommandot, kan detta kommando avbrytas av PHP. Inga uppgifter kommer att g� vilse i detta, men vissa uppgifter kan inte uppdateras. Forts�tta?',
	0);
$mtnc[] = array('synchronize_user',
	'Synkronisera anv�ndares post r�knare',
	'Detta kommer att synkronisera post r�knaren f�r anv�ndarna.',
	'<b>Uppm�rksamhet:</b> beskurna inl�gg dras normalt inte av fr�n post r�knaren counter. N�r du k�r det h�r kommandot kommer beskurna inl�gg att dras fr�n r�knaren och kan inte �terst�llas. Forts�tta?',
	6);
$mtnc[] = array('synchronize_mod_state',
	'Synkronisera moderator status',
	'Detta kommer att resync moderator status i anv�ndare tabell.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_date',
	'�terst�ll det senaste inl�ggs datumet',
	'Detta kommer att �terst�lla det senaste inl�ggets uppgifter om det �r i framtiden. Detta kommer att l�sa fr�gor d�r anv�ndarna f�r ett meddelande om att de inte �r till�tet att g�ra ett annat inl�gg s� snart efter det sista.',
	'Vilken tid som helst i en post i framtiden kommer att st�llas till den aktuella tiden. Forts�tta?',
	0);
$mtnc[] = array('reset_sessions',
	'�terst�ll alla sessioner',
	'Detta kommer att �terst�lla alla nuvarande sessioner genom en t�mning av sessions tabellen.',
	'Alla nuvarande aktiva anv�ndare kommer att f�rlora sin session och deras s�kresultat. Forts�tta?',
	0);
$mtnc[] = array('--', '', '', '', 8);
$mtnc[] = array('sync_topics_subjects',
	'Synkronisera �mnes fr�gor',
	'Denna funktion kommer att synkronisera �mne fr�gor i f�rsta inl�gget i varje inl�gg. Du beh�ver inte denna funktion under normala f�rh�llanden.',
	'Detta kommer att synkronisera �mnes fr�gor i f�rsta inl�gget i varje �mne. Sidan kommer inte att vara tillg�ngliga under denna tid. Forts�tta?',
	0);
$mtnc[] = array('rebuild_search_index',
	'�teruppbygg s�knings index',
	'Denna funktion kommer att �terskapa indexet som anv�nds f�r s�kning. Du beh�ver inte denna funktion under normala f�rh�llanden.',
	'Detta kommer att ta bort det kompletta s�kindexet och �teruppbygga det. Det kan ta upp till flera timmar att genomf�ra denna uppgift. Forumet kommer inte att vara tillg�ngligt under denna tid. Forts�tta?',
	7);
$mtnc[] = array('proceed_rebuilding',
	'Starta ombyggnad',
	'Anv�nd denna funktion vid p� nytt skapande av s�kindexet om den blir avbruten.',
	'',
	4);
$mtnc[] = array('--', '', '', '', 1);
$mtnc[] = array('check_db',
	'Kontrollera databas',
	'Kontrollera databasen f�r errors.',
	'',
	1);
$mtnc[] = array('optimize_db',
	'Optimera databas',
	'Optimera tabellerna. Detta minskar databasens storlek efter radering  av massor av records och s� vidare.',
	'',
	1);
$mtnc[] = array('repair_db',
	'Reparera databas',
	'Fixar databasen n�r ett fel hittas.',
	'Du b�r bara utf�ra den h�r �tg�rden om ett fel rapporteras vid kontroll av databasen. Forts�tta?',
	1);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_auto_increment',
	'�terst�ll auto tillskotts v�rden',
	'Denna funktion �terst�ller auto tillskotts v�rden. Detta b�r endast utf�ras om det verkar vara ett problem n�r du kopplar in nya uppgifter i tabellerna.',
	'Vill du verkligen �terst�lla auto tillskotts v�rden? Inga uppgifter kommer att g� vilse, men denna funktion b�r bara anv�ndas vid behov.',
	0);
$mtnc[] = array('heap_convert',
	'Konvertera Session-Tabell',
	'Denna funktion konverterar session-tabellen till HEAP tabell typ. Detta kommer normalt att ske under installationen och snabbar p� phpBB lite. Du b�r anv�nda denna funktion om din session-tabell inte �r theYou och �ven anv�nda denna funktion om din session-tabell inte �r av HEAP tabell typ.',
	'Vill du verkligen konvertera denna tabell?',
	2);
$mtnc[] = array('--', '', '', '', 3);
$mtnc[] = array('unlock_db',
	'L�s upp forum',
	'Anv�nd denna funktion om du fick ett fel under en operation som gjordes f�re och med forumet fortfarande l�st.',
	'',
	3);

$lang = array_merge($lang, array(
	'DB_Maintenance' => 'Databas Verktyg',
	'DB_Maintenance_Description' => 'Kontrollera din databas f�r inkonsekvenser och felaktigheter.<br /><b>Uppm�rksamhet:</b> Vissa operationer kommer att ta l�ngre tid att utf�ra. Din sida kommer att <b>l�sas</b> under dessa operationer.<br /><br /><b>Det �r alltid rekommenderbart att ta en backup av databasen innan du anv�nder n�gon av de funktioner som anges nedan!</b>',
	'Function' => 'Funktion',
	'Function_Description' => 'Beskrivning',

	'Incomplete_configuration' => 'En inst�llning f�r <b>%s</b> kunde inte hittas i forum konfigurationen. DB Maintenance kan inte k�ras utan denna inst�llning.<br />Du kanske har gl�mt att verkst�lla SQL uttalanden som beskrivs i installationsanvisningarna.',
	'dbtype_not_supported' => 'Tyv�rr, denna funktion st�der inte din databas',
	'no_function_specified' => 'Ingen funktion har angivets',
	'function_unknown' => 'Den angivna funktionen �r ok�nd',
	'Old_MySQL_Version' => 'Tyv�rr, din MySQL-Version st�der inte den h�r funktionen. V�nligen anv�nd version 3.23.17 eller nyare.',

	'Back_to_DB_Maintenance' => 'Tillbaka till Databas Maintenance',
	'Processing_time' => 'DB Maintenance tog %f sekunder f�r operationen',

	'Lock_db' => 'Inaktivering Forum',
	'Unlock_db' => 'Aktivering Forum',
	'Already_locked' => 'Sidan var redan l�st',
	'Ignore_unlock_command' => 'Sidan var l�st n�r du startade detta kommando. Sidan kommer inte att l�sas upp',
	'Delay_info' => 'F�rsening tre sekunder f�r att l�ta databasens �tg�rder avslutas...',

	'Affected_row' => 'En p�verkad dataupps�ttning',
	'Affected_rows' => '%d p�verkad dataupps�ttning',
	'Done' => 'Done',
// The following variable is used when nothing had to be fixed in the database. It needs the complete paragraph-tag.
// If you do not want a message to be displayed in these cases, just leave the variable empty.
	'Nothing_to_do' => '<p class="gen"><i>Nothing to do :-)</i></p><br />' . "\n",

// Names for new records in several tables
	'New_cat_name' => '�terst�llda forum',
	'New_forum_name' => '�terst�llda �mnen',
	'New_topic_name' => '�terst�llda inl�gg',
	'Restored_topic_name' => '�terst�llda �mnen',
	'New_poster_name' => '�terst�llda inl�gg', // Name for Poster of a restored post

// Function specific vars
// statistic
	'Statistic_title' => 'Sido och databas statistik',
	'Database_table_info' => 'Databas statistik kommer att ge tre olika v�rden: dessa f�r alla tabeller i databasen, dessa i alla tabeller framf�rda av phpBB som standard (core-tabellerna) och dessa b�rjar med prefixet i forum tabeller (avancerade tabeller).',
	'Board_statistic' => 'Sido statistik',
	'Database_statistic' => 'Databas statistik',
	'Version_info' => 'Version information',
	'Thereof_deactivated_users' => 'dessa avaktiverade',
	'Thereof_Moderators' => 'dessa moderatorer',
	'Thereof_Administrators' => 'dessa administrat�rer',
	'Users_with_Admin_Privileges' => 'Anv�ndare med administrat�rs privileger',
	'Number_tables' => 'Antal tabeller',
	'Number_records' => 'Antal records',
	'DB_size' => 'Storlek p� databasen',
	'Thereof_phpbb_core' => 'dessa Icy Phoenix k�rn tabeller',
	'Thereof_phpbb_advanced' => 'dessa avancerade Icy Phoenix tabeller',
	'Version_of_board' => 'Version av Icy Phoenix',
	'Version_of_mod' => 'Version av DB Maintenance',
	'Version_of_PHP' => 'Version av PHP',
	'Version_of_MySQL' => 'Version av MySQL',
// config
	'Config_title' => 'DB Maintenance konfiguration',
	'Config_info' => 'F�ljande alternativ g�r att du kan konfigurera beteende p� DB Maintenance. T�nk p� att en felkonfigurering kan leda till ov�ntade resultat.',
	'General_Config' => 'Allm�nn konfiguration',
	'Rebuild_Config' => 'Konfiguration av ombyggnad av s�kindexet',
	'Current_Rebuild_Config' => 'Konfiguration av nuvarande ombyggnad',
	'Rebuild_Settings_Explain' => 'Dessa inst�llningar justerar beteendet p� DB Maintenance vid �teruppbyggnaden av s�kindexet.',
	'Current_Rebuild_Settings_Explain' => 'Dessa inst�llningar anv�nds av DB Maintenance f�r att lagra positionen i den nuvarande �teruppbyggnaden. Det finns inget behov av att anpassa dessa inst�llningar under normala f�rh�llanden.',
	'Disallow_postcounter' => 'F�rhindra synkronisering av anv�ndarens post r�knare',
	'Disallow_postcounter_Explain' => 'Detta kommer att inaktivera funktionen att synkronisera anv�ndarens inl�gg efter r�knare. Du kan f�rhindra den h�r funktionen om du inte vill att besk�rda inl�gg f�r dras av fr�n inl�ggs r�knaren av anv�ndarna.',
	'Disallow_rebuild' => 'Hindra �teruppbyggnad av s�kindexet',
	'Disallow_rebuild_Explain' => 'Detta kommer att inaktivera �teruppbyggaden av s�kindexet. En avbruten ombyggnad kan forts�tta men.',
	'Rebuildcfg_Timelimit' => 'Maximal utf�rande tid det tar att genomf�ra ombyggnad (i sekunder)',
	'Rebuildcfg_Timelimit_Explain' => 'Maximal tid som anv�nds f�r ett steg vid ombyggnad (standard: 240). Detta v�rde begr�nsar den tid det tar att genomf�ra, �ven om en l�ngre tid skulle vara m�jligt.',
	'Rebuildcfg_Timeoverwrite' => 'Fast tid tillg�nglig f�r utf�rande (i sekunder)',
	'Rebuildcfg_Timeoverwrite_Explain' => 'Fast uppskattning av tidpunkten f�r genomf�randet (standard: 0). Med 0 anv�nds resultatet av ber�kningen som genomf�randetid, n�got annat v�rde �verskriver det ber�knade v�rdet.',
	'Rebuildcfg_Maxmemory' => 'Maximal post storlek f�r ombyggnad (in kByte)',
	'Rebuildcfg_Maxmemory_Explain' => 'Maximal storlek p� inl�ggs indexering i ett steg (standard: 500). N�r summan av inl�ggs storlekar blir under detta v�rde, kommer ingen ytterligare post att indexeras i det nuvarande steget.',
	'Rebuildcfg_Minposts' => 'Minsta inl�gg till index per steg',
	'Rebuildcfg_Minposts_Explain' => 'Minsta antalet inl�gg som indexeras per steg (standard: 3). Anger det antal inl�gg som �r minst indexerade per steg.',
	'Rebuildcfg_PHP3Only' => 'Anv�nd endast standard PHP 3 kompatibel metod f�r indexering',
	'Rebuildcfg_PHP3Only_Explain' => 'DB Maintenance anv�nder en avancerad metod f�r indexering n�r PHP 4.0.5 eller nyare �r tillg�ngligt. Du kan st�nga av den avancerade metoden s� att DB Maintenance kommer att anv�nda sig av standardmetoden i forumet.',
	'Rebuildcfg_PHP4PPS' => 'Inl�gg som indexeras per sekund n�r du anv�nder avancerade Indexeringsmetoden',
	'Rebuildcfg_PHP4PPS_Explain' => 'Uppskattat v�rde p� inl�gg som kan indexeras per sekund n�r du anv�nder avancerade Indexeringsmetoden (standard: 8).',
	'Rebuildcfg_PHP3PPS' => 'Inl�gg som indexeras per sekund n�r man anv�nder standard Indexeringsmetoden',
	'Rebuildcfg_PHP3PPS_Explain' => 'Uppskattat v�rde p� inl�gg som kan indexeras per sekund n�r du anv�nder standard Indexeringsmetoden (standard: 1).',
	'Rebuild_Pos' => 'Senaste inl�gg indexerat',
	'Rebuild_Pos_Explain' => 'ID av den senaste successfulla indexerade post. �r -1 n�r ombyggnaden �r klar.',
	'Rebuild_End' => 'Senaste inl�gget till index',
	'Rebuild_End_Explain' => 'ID i senaste inl�gget till index. �r 0 n�r ombyggnaden �r klar.',
	'Dbmtnc_config_updated' => 'Konfigurationen Uppdaterad Successfullt',
	'Click_return_dbmtnc_config' => 'Klicka %sH�r%s f�r att �terg� till konfigurationen',
// check_user
	'Checking_user_tables' => 'Kontrollera anv�ndare och grupp tabeller',
	'Checking_missing_anonymous' => 'Kontroll efter f�rsvunna anonyma konton',
	'Anonymous_recreated' => 'Anonymt konto �terskapat',
	'Checking_incorrect_pending_information' => 'Kontroll av felaktigt avvaktande information',
	'Updating_invalid_pendig_user' => 'Uppdatera ogiltig avvaktan information fr�n en anv�ndare',
	'Updating_invalid_pendig_users' => 'Uppdatera ogiltig avvaktan information fr�n %d anv�ndare',
	'Updating_pending_information' => 'Uppdatering avvaktan information singel anv�ndargrupper',
	'Checking_missing_user_groups' => 'Kontroll av anv�ndare med flera eller ingen enskild anv�ndargrupp',
	'Found_multiple_SUG' => 'Hittade anv�ndare med flera singel anv�ndargrupper',
	'Resolving_user_id' => 'L�sa anv�ndare till grupp',
	'Removing_groups' => 'Ta bort grupper',
	'Removing_user_groups' => 'Ta bort anv�ndare till grupp anslutning',
	'Recreating_SUG' => '�ter-skapa singel anv�ndargrupper f�r anv�ndare',
	'Checking_for_invalid_moderators' => 'Kontroll av ogiltiga grupp moderator inst�llningar',
	'Updating_Moderator' => 'Inst�llning av aktuell anv�ndare som moderator f�r gruppen',
	'Checking_moderator_membership' => 'Kontrollera gruppmedlemskap av moderatorer',
	'Updating_mod_membership' => 'Uppdatering av medlemskap i gruppen moderatorer',
	'Moderator_added' => 'Moderator tillagd till grupp',
	'Moderator_changed_pending' => '�ndrad avvaktan av moderator',
	'Remove_invalid_user_data' => 'Ta bort ogiltig anv�ndar data i anv�ndar-grupp-tabell',
	'Remove_empty_groups' => 'Ta bort tomma grupper',
	'Remove_invalid_group_data' => 'Ta bort ogiltiga gruppdata i anv�ndar-grupp-tabell',
	'Checking_ranks' => 'Kontroll av ogiltiga v�rderingar',
	'Invalid_ranks_found' => 'Hittade anv�ndare med ogiltiga v�rderingar',
	'Removing_invalid_ranks' => 'Ta bort ogiltiga v�rderingar',
	'Checking_themes' => 'Kontroll f�r ogiltiga teman inst�llningar',
	'Updating_users_without_style' => 'Uppdatera anv�ndare utan tema upps�ttning',
	'Default_theme_invalid' => '<b>Uppm�rksamhet:</b> Standard stilen �r ogiltig. V�nligen Kontrollera din konfiguration.',
	'Updating_themes' => 'Uppdatering ogiltig teman till tema %d',
	'Checking_theme_names' => 'Kontroll f�r ogiltiga tema namn data',
	'Removing_invalid_theme_names' => 'Ta bort ogiltiga tema namn data',
	'Checking_languages' => 'Kontroll f�r ogiltiga spr�k inst�llningarna',
	'Invalid_languages_found' => 'Hittade anv�ndare med ogiltiga spr�k inst�llningar',
	'Default_language_invalid' => '<b>Uppm�rksamhet:</b> Standardspr�ket �r ogiltigt. V�nligen Kontrollera din konfiguration.',
	'English_language_invalid' => '<b>Uppm�rksamhet:</b> Standardspr�ket �r ogiltigt och de Engelska spr�k-filerna finns inte. Du m�ste �terst�lla <b>lang_english</b>-katalogen.',
	'Changing_language' => '�ndra spr�k \'%s\' till \'%s\'',
	'Remove_invalid_ban_data' => 'Ta bort ogiltiga f�rbuds data',
	'Remove_invalid_session_keys' => 'Ta bort ogiltiga sessions nycklar',
// check_post
	'Checking_post_tables' => 'Kontrollera post och �mnes tabeller',
	'Checking_invalid_forums' => 'Kontrollering av forum med ogiltiga kategori',
	'Invalid_forums_found' => 'Hittade forum med ogiltiga kategorier',
	'Setting_category' => 'Flytta forum till kategori \'%s\'',
	'Checking_posts_wo_text' => 'Kontrollering av inl�gg utan n�gon text',
	'Posts_wo_text_found' => 'Hittade poster utan text',
	'Deleting_post_wo_text' => '%d (�mnen: %s (%d); Anv�ndare: %s (%d))',
	'Deleting_Posts' => 'Ta bort post data',
	'Checking_topics_wo_post' => 'Kontrollering av �mnen utan post',
	'Topics_wo_post_found' => 'Hittade �mnen utan n�gon post',
	'Deleting_topics' => 'Radera �mnes data',
	'Checking_invalid_topics' => 'Kontrollering av �mnen med ogiltiga forum',
	'Invalid_topics_found' => 'Hittade inl�gg med ogiltiga forum',
	'Setting_forum' => 'Flytta �mnen till forum \'%s\'',
	'Checking_invalid_posts' => 'Kontrollering av inl�gg med ogiltiga �mne',
	'Invalid_posts_found' => 'Hittade inl�gg med ogiltiga �mne',
	'Setting_topic' => 'Flytta inl�gg %s till �mne \'%s\' (%d) i forum \'%s\'',
	'Checking_invalid_forums_posts' => 'Kontrollering av inl�gg med ogiltiga forum',
	'Invalid_forum_posts_found' => 'Hittade inl�gg med ogiltiga forum',
	'Setting_post_forum' => '%d: Flytta fr�n forum \'%s\' (%d) till \'%s\' (%d)',
	'Checking_texts_wo_post' => 'Kontrollera efter text utan en post',
	'Invalid_texts_found' => 'Hittade text utan en post',
	'Recreating_post' => '�terskapa post %d och flytta den till �mne \'%s\' i forum \'%s\'<br />Utdrag: %s',
	'Checking_invalid_topic_posters' => 'Kontrollera inl�gg f�r ogiltiga poster',
	'Invalid_topic_poster_found' => 'Hittade inl�gg med ogiltiga poster',
	'Updating_topic' => 'Uppdatera �mne %d (Poster: %d -&gt; %d)',
	'Checking_invalid_posters' => 'Kontrollera inl�gg f�r ogiltiga poster',
	'Invalid_poster_found' => 'Hittade inl�gg med ogiltiga poster',
	'Updating_posts' => 'Uppdatera poster',
	'Checking_moved_topics' => 'Kontrollera flyttade �mnen',
	'Deleting_invalid_moved_topics' => 'Ta bort ogiltiga flyttade �mnen',
	'Updating_invalid_moved_topic' => 'Uppdatera ogiltig flyttad information f�r ett ober�rt �mnen',
	'Updating_invalid_moved_topics' => 'Uppdatera ogiltig flyttad information f�r %d ober�rda �mnen',
	'Checking_prune_settings' => 'Kontroll f�r ogiltig besk�rd data',
	'Removing_invalid_prune_settings' => 'Ta bort ogiltig besk�rda inst�llningar',
	'Updating_invalid_prune_setting' => 'Uppdatera ogiltig besk�rda inst�llningar f�r ett forum',
	'Updating_invalid_prune_settings' => 'Uppdatera ogiltig besk�rda inst�llningar f�r %d forums',
	'Checking_topic_watch_data' => 'Kontroll f�r ogiltig bevakade �mnen',
	'Checking_auth_access_data' => 'Kontroll f�r ogiltig grupp till�ten data',
	'Must_synchronize' => 'Du m�ste synkronisera post data innan du anv�nder forumet. Klicka f�r att forts�tta.',
// check_vote
	'Checking_vote_tables' => 'Kontrollera r�st tabeller',
	'Checking_votes_wo_topic' => 'Kontroll av r�sterna utan motsvarande �mne',
	'Votes_wo_topic_found' => 'Hittade r�ster utan �mne',
	'Invalid_vote' => '%s (%d) - Start datum: %s - Slut datum: %s',
	'Deleting_votes' => 'Radera r�ster',
	'Checking_votes_wo_result' => 'Kontroll av r�ster utan resultat',
	'Votes_wo_result_found' => 'Hittade r�ster utan resultat',
	'Checking_topics_vote_data' => 'Kontrollera r�stnings uppgifter i �mnes tabeller',
	'Updating_topics_wo_vote' => 'Uppdatera �mnen markerade som omr�stning utan en motsvarande omr�stning',
	'Updating_topics_w_vote' => 'Uppdatera �mnen som inte �r m�rkta som omr�stning, men med en motsvarande omr�stning',
	'Checking_results_wo_vote' => 'Kontroll av resultaten utan motsvarande omr�stning',
	'Results_wo_vote_found' => 'Hittade resultat utan r�st',
	'Invalid_result' => 'Radera resultat: %s (R�ster: %d)',
	'Checking_voters_data' => 'Kontroll f�r ogiltig omr�stnings data',
// check_pm
	'Checking_pm_tables' => 'Kontrollerar privata meddelanden tabeller',
	'Checking_pms_wo_text' => 'Kontroll efter privata meddelanden utan text',
	'Pms_wo_text_found' => 'Hittade privata meddelanden utan text',
	'Deleting_pn_wo_text' => '%d (�mne: %s; Avs�ndare: %s (%d); Mottagare: %s (%d))',
	'Deleting_Pms' => 'Radera privat meddelande data',
	'Checking_texts_wo_pm' => 'Kontroll av privata meddelanden text utan ett meddelande',
	'Deleting_pm_texts' => 'Ta bort ogiltiga privata meddelanden text',
	'Checking_invalid_pm_senders' => 'Kontrollera privata meddelanden efter ogiltig avs�ndare',
	'Invalid_pm_senders_found' => 'Hittade privata meddelanden med ogiltig avs�ndare',
	'Updating_pms' => 'Uppdatering privata meddelanden',
	'Checking_invalid_pm_recipients' => 'Kontrollera privata meddelanden efter ogiltig mottagare',
	'Invalid_pm_recipients_found' => 'Hittade privata meddelanden med ogiltiga mottagare',
	'Checking_pm_deleted_users' => 'Kontrollera privata meddelanden efter raderade avs�ndare eller mottagare',
	'Invalid_pm_users_found' => 'Hittade privata meddelanden med raderade avs�ndare eller mottagare',
	'Deleting_pms' => 'Radera privata meddelanden',
	'Synchronize_new_pm_data' => 'Synkronisera nya privata meddelanden r�knare',
	'Synchronizing_users' => 'Uppdatera anv�ndare',
	'Synchronizing_user' => 'Uppdatera anv�ndare %s (%d)',
	'Synchronize_unread_pm_data' => 'Synkronisera ol�sta privata meddelanden r�knare',
// check_config
	'Checking_config_table' => 'Kontrollera konfigurations tabellen',
	'Checking_config_entries' => 'Kontrollera uppgifterna i konfigurations tabellen',
	'Restoring_config' => '�terst�lla poster',
// check_search_wordmatch
	'Checking_search_wordmatch_tables' => 'Kontrollera ord matchnings tabellen',
	'Checking_search_data' => 'Kontrollera f�r ogiltiga s�knings data',
// check_search_wordlist
	'Checking_search_wordlist_tables' => 'Kontrollera ord matchnings tabellen',
	'Checking_search_words' => 'Kontroll av on�diga s�kord',
	'Removing_part_invalid_words' => 'Ta bort en del on�diga s�kord',
	'Removing_invalid_words' => 'Ta bort on�diga s�kord',
// synchronize topics subjects
	'Sync_topics_subjects' => 'Synkronisera �mnes Fr�gor',
	'Sync_topics_subjects_progress' => 'Synkronisering p�g�r',
// rebuild_search_index
	'Rebuilding_search_index' => '�teruppbygger s�knings index',
	'Deleting_search_tables' => 'T�mmer s�knings tabeller',
	'Reset_search_autoincrement' => '�terst�ller r�knare f�r s�knings tabeller',
	'Preparing_config_data' => 'St�ller konfigurations data',
	'Can_start_rebuilding' => 'Nu kan du b�rja med att bygga om s�knings index',
	'Click_once_warning' => '<b>Klicka bara p� l�nken en g�ng!</b> - det kan ta upp till flera minuter tills en ny sida visas.',
// proceed_rebuilding
	'Preparing_to_proceed' => 'F�rbereder tabeller f�r att till�ta forts�ttning',
	'Preparing_search_tables' => 'F�rbereder s�k tabeller f�r forts�ttning',
// perform_rebuild
	'Click_or_wait_to_proceed' => 'Klicka h�r f�r att g� vidare eller v�nta n�gra sekunder',
	'Indexing_progress' => '%d av %d poster (%01.1f%%) har blivit indexerat. Senaste post indexerad: %d',
	'Indexing_finished' => '�teruppbyggnad av indexet var f�rdigt successfullt',
// synchronize_post
	'Synchronize_posts' => 'Synkronisera post data',
	'Synchronize_topic_data' => 'Synkronisera �mnen',
	'Synchronizing_topics' => 'Uppdatera �mnen',
	'Synchronizing_topic' => 'Uppdatera �mne %d (%s)',
	'Synchronize_moved_topic_data' => 'Synkronisera flyttade �mnen',
	'Inconsistencies_found' => 'Inkonsekvenser i din databas hittades. V�nligen %skontrollera post och �mnes tabeller%s',
	'Synchronizing_moved_topics' => 'Uppdatera flyttade �mnen',
	'Synchronizing_moved_topic' => 'Uppdatera flyttade �mne %d -&gt; %d (%s)',
	'Synchronize_forum_topic_data' => 'Synkronisera �mne-data f�r forum',
	'Synchronizing_forums' => 'Uppdatera forum',
	'Synchronizing_forum' => 'Uppdatera forum %d (%s)',
	'Synchronize_forum_data_wo_topic' => 'Synkronisera forum utan n�got �mne',
	'Synchronize_forum_post_data' => 'Synkronisera post-data f�r forum',
	'Synchronize_forum_data_wo_post' => 'Synkronisera forum utan n�gon post',
// synchronize_user
	'Synchronize_post_counters' => 'Synkronisera post r�knare',
	'Synchronize_user_post_counter' => 'Synkronisera post r�knare f�r anv�ndare',
	'Synchronizing_user_counter' => 'Uppdatera anv�ndare %s (%d): %d -&gt; %d',
// synchronize_mod_state
	'Synchronize_moderators' => 'Synkronisera moderator status i anv�ndare tabell',
	'Getting_moderators' => 'F� moderatorer',
	'Checking_non_moderators' => 'Kontroll efter anv�ndare med moderator-status som inte modererar ett forum',
	'Updating_mod_state' => 'Uppdatera moderator status f�r anv�ndare',
	'Changing_moderator_status' => '�ndra moderator status f�r anv�ndare %s (%d)',
	'Checking_moderators' => 'Kontroll av anv�ndare utan moderator-status som modererar ett forum',
// reset_date
	'Resetting_future_post_dates' => '�terst�lla senaste inl�ggs datum i framtiden',
	'Checking_post_dates' => 'Kontrollera datum f�r poster',
	'Checking_pm_dates' => 'Kontrollera datum f�r privata meddelanden',
	'Checking_email_dates' => 'Kontrollera datum f�r senaste e-post',
// reset_sessions
	'Resetting_sessions' => '�terst�lla sessioner',
	'Deleting_session_tables' => 'T�mma sessionen och s�kresultat tabeller',
	'Restoring_session' => '�terst�lla sessioner p� aktiva anv�ndare',
// check_db
	'Checking_db' => 'Kontrollerar databas',
	'Checking_tables' => 'Kontrollerar tabeller',
	'Table_OK' => 'OK',
	'Table_HEAP_info' => 'Kommando inte tillg�ngligt f�r HEAP-tabeller',
// repair_db
	'Repairing_db' => 'Reparerar databas',
	'Repairing_tables' => 'Reparerar tabeller',
// optimize_db
	'Optimizing_db' => 'Optimera databas',
	'Optimizing_tables' => 'Optimera tabeller',
	'Optimization_statistic' => 'Optimering minskar storleken p� tabeller fr�n %s till %s. Det �r en minskning med %s eller %01.2f%%.',
// reset_auto_increment
	'Reset_ai' => '�terst�lla auto tillskotts  v�rden',
	'Ai_message_update_table' => 'tabell uppdaterad',
	'Ai_message_no_update' => 'ingen uppdatering n�dv�ndig',
	'Ai_message_update_table_old_mysql' => 'tabell uppdaterad', // Used if an old version of MySQL is used which does not allow a table check before updating the table
// heap_convert
	'Converting_heap' => 'Konvertera Session-Tabeller till HEAP',
// unlock_db
	'Unlocking_db' => 'Frig�r databas',

// Emergency Recovery Console
	'Forum_Home' => 'Forum Hem',
	'ERC' => 'Akut �tervinnings Konsoll',
	'Submit_text' => 'Skicka',
	'Select_Language' => 'V�lj ett spr�k',
	'No_selectable_language' => 'Inga valbara spr�k finns',
	'Select_Option' => 'V�lj ett alternativ',
	'Option_Help' => 'Tips f�r alternativ',
	'Authenticate_methods' => 'Det finns tv� s�tt att verifiera',
	'Authenticate_methods_help_text' => 'Du m�ste verifiera och g�ra n�gra f�r�ndringar i forumets konfiguration. Det finns tv� s�tt att g�ra det: F�rst, kan du verifiera genom att ange namn och l�senord f�r alla aktiva administrat�rskonto i forumet (f�redra metod). Andra, du kan autentisera genom att ange namn och l�senord f�r databasens konto som forumet anv�nder f�r �tkomst till databasen.',
	'Authenticate_user_only' => 'Du m�ste verifiera med ett aktivt administrat�rskonto',
	'Authenticate_user_only_help_text' => 'Du m�ste verifiera genom att g�ra n�gra f�r�ndringar i forumets konfiguration. Du kan bara verifiera genom att ange namn och l�senord f�r alla aktiva administrat�rskonto i forumet.',
	'Admin_Account' => 'Admin konto p� forumet',
	'Database_Login' => 'Databas anv�ndare',
	'Username' => 'Anv�ndarnamn',
	'Password' => 'L�senord',
	'Auth_failed' => 'Autentiseringen misslyckades!',
	'Return_ERC' => '�terg� till Akut �tervinnings Konsoll',
	'cur_setting' => 'Aktuell inst�llning',
	'rec_setting' => 'Rekommenderad inst�llning',
	'secure' => 'S�kerhet',
	'secure_yes' => 'ja (https)',
	'secure_no' => 'nej (http)',
	'domain' => 'Dom�n',
	'port' => 'Port',
	'path' => 'S�kv�g',
	'Cookie_domain' => 'Cookie dom�n',
	'Cookie_name' => 'Cookie namn',
	'Cookie_path' => 'Cookie s�kv�g',
	'select_language' => 'V�lj nytt spr�k',
	'select_theme' => 'V�lj nytt tema',
	'reset_thmeme' => '�terskapa standard tema',
	'new_admin_user' => 'Anv�ndare att bevilja admin privilegier',
	'dbms' => 'Databas Typ',
	'DB_Host' => 'Databas Server V�rdnamn / DSN',
	'DB_Name' => 'Ditt Databas Namn',
	'DB_Username' => 'Databas Anv�ndarnamn',
	'DB_Password' => 'Databas L�senord',
	'Table_Prefix' => 'Prefix f�r tabeller i databas',
	'New_config_php' => 'Detta �r din nya config.' . PHP_EXT,
// Options
	'cls' => 'Rensa alla sessioner',
	'ecf' => 'T�m cache-mappen',
	'rdb' => 'Reparera databas tabeller',
	'cct' => 'Kontrollera config tabellen',
	'rpd' => '�terst�ll path data',
	'rcd' => '�terst�ll cookie data',
	'rld' => '�terst�ll spr�k data',
	'rtd' => '�terst�ll mall data',
	'dgc' => 'Avaktivera GZip komprimering',
	'cbl' => 'Rensa bannlysnings listan',
	'raa' => 'Ta bort alla administrat�rer',
	'mua' => 'Bevilja anv�ndaren admin privilegier',
	'rcp' => '�terskapa config.php',
// Info for options
	'cls_info' => 'Vid f�rfarandet kommer alla sessioner att avslutas.',
	'ecf_info' => 'Vid f�rfarandet kommer cache mappen att bli rensad.',
	'rdb_info' => 'Vid f�rfarandet av tabellerna i databasen kommer dessa att repareras.',
	'cct_info' => 'Vid f�rfarandet kommer config tabellen att kontrolleras och missade poster blir �terst�llda.',
	'rpd_info' => 'Vid f�rfarandet kommer config data att bli uppdaterad om den rekommenderade inst�llningen �r vald.',
	'rcd_info' => 'Vid f�rfarandet kommer cookie data att bli uppdaterad. Alternativet om att st�lla en s�ker cookie eller ej finns under \'�terst�ll s�kv�gs data\'.',
	'rld_info' => 'Vid f�rfarandet kommer valt spr�k att anv�ndas f�r b�de forumet och anv�ndare som anv�nds f�r att verifiera.',
	'rtd_info' => 'Vid f�rfarandet kommer antingen den valda stilen att anv�ndas f�r b�de forumet och anv�ndare som anv�nds f�r att verifiera eller kommer standard temat (Icy Phoenix) att �terskapas och anv�nds f�r forum och anv�ndare.',
	'rtd_info_no_theme' => 'Vid f�rfarandet kommer standard temat (Icy Phoenix) att bli �terskapat och anv�ndas f�r b�de forumet och anv�ndare som anv�nds f�r att verifiera.',
	'dgc_info' => 'Vid f�rfarandet kommer GZip komprimering att bli avaktiverad.',
	'cbl_info' => 'Vid f�rfarandet kommer b�de bannlysnings listan och otill�tna anv�ndare att bli rensade.',
	'raa_info' => 'Vid f�rfarandet kommer alla admins att st�llas in till normala anv�ndare. Om du anv�nder ett admin konto till verifiering, kommer det konto som anv�nds f�r autentisering att beh�lla sin Administrat�rs niv�.',
	'mua_info' => 'Vid f�rfarandet kommer de valda anv�ndarna att beviljas administrat�rs privilegier. Anv�ndaren kommer ocks� att vara aktiverad.',
	'rcp_info' => 'Vid f�rfarandet kommer en ny config.php att skapas med data inf�rd.',
// Success messages for options
	'cls_success' => 'Alla sessionerna var rensade successfullt.',
	'ecf_success' => 'Cache rensat successfullt.',
	'rdb_success' => 'Tabellerna i databasen har reparerats.',
	'rpd_success' => 'Sido konfiguration uppdaterad successfullt.',
	'cct_success' => 'Config tabell kontrollerad successfullt.',
	'rcd_success' => 'Cookie data uppdaterades successfullt.',
	'rld_success' => 'Spr�k data uppdaterades successfullt.',
	'rld_failed' => 'De obligatoriska spr�k filerna (lang_main.' . PHP_EXT . ' och lang_admin.' . PHP_EXT . ') finns inte.',
	'rtd_restore_success' => 'Standard stilen �terst�lldes successfullt.',
	'rtd_success' => 'Stil data var uppdaterad successfullt.',
	'dgc_success' => 'GZip-komprimering inaktiverades successfullt.',
	'cbl_success' => 'Bannlysnings listan och otill�tna anv�ndare avslutades successfullt.',
	'cbl_success_anonymous' => 'Bannlysnings listan och otill�tna anv�ndare avslutades successfullt. Det anonyma kontot har blivit �terskapat. Sedan gruppdata av anonyma konto kan saknas, rekommenderas det att anv�nda funktionen &quot;Kontrollera anv�ndarnamn och grupp tabeller&quot; i den centrala delen av DB Maintenance.',
	'raa_success' => 'Alla admins togs bort successfullt.',
	'mua_success' => 'Den valda anv�ndaren har nu admin privilegier.',
	'mua_failed' => '<b>Error:</b> Den valda anv�ndaren finns inte eller har redan admin r�ttigheter.',
	'rcp_success' => "Kopiera texten till en textfil, d�p om den till <b>config.php</b> och ladda upp den till rotkatalogen p� forumet. Se till att det inte finns n�gra tecken (inklusive mellanslag och linje feeds) f�re <b>&lt;?php</b> och efter <b>?&gt;</b>.<br />Du kan ocks� %sladda ner%s filen till din dator.",
// Text for success messages
	'Removing_admins' => 'Ta bort admins',
// Help Text
	'Option_Help_Text' => '<p>Om du f�r en rapport om att det var ett misstag att skapa ett m�te eller s� kan du rensa sessionen genom att v�lja <b>Rensa alla sessioner</b>. Om du har problem med att f� tillg�ng till databasens tabeller kan du reparera tabellerna genom att v�lja <b>Reparera databas tabellerna</b>. <b>Kontrollera config tabellen</b> kommer att kontrollera config tabellen efter saknade uppgifter, vilket kan vara till hj�lp f�r olika typer av fel.</p><p>Om du inte kan logga in eller har tillg�ng till admin-panelen kan det finnas ett fel i din s�kv�g eller dina cookie-inst�llningar. Du kan �terst�lla dem med <b>Reset path data</b> or <b>�terst�ll cookie data</b>. Du kan �ven �terst�lla spr�k inst�llningarna med <b>�terst�ll spr�k data</b> eller mall data med <b>�terst�ll mall  data</b>.</p><p>Om problem uppst�r efter att du har aktiverat gzip komprimering kan du avaktivera det genom att v�lja <b>Avaktivera GZip kompression</b>.</p><p>Om du tappat bort l�senordet f�r ditt konto kan du ge en anv�ndare admin privilegier genom att v�lja <b>Bevilja anv�ndaren admin privilegier</b>. Detta kommer �ven att aktivera anv�ndaren s� att du kan anv�nda ett anv�ndarnamn som skapats tidigare. Om du inte kan l�gga till en ny anv�ndare, kan du rensa bannlysningslistan med <b>Rensa bannlysnings listan</b> (detta kommer ocks� att �terst�lla anonyma anv�ndare).</p><p>Om ditt forum har hackats, rekommenderas att du tar bort alla admin konton genom att v�lja <b>Ta bort alla administrat�rer</b>. (kontot i sig sj�lv kommer inte att raders men r�ttigheterna blir borttagna.)</p><p>Om du beh�ver �terst�lla din config.php kan du g�ra det genom att v�lja <b>�terskapa config.php</b>.</p>',

	'dbmntc_Invalid_Option' => 'Ogiltigt Alternativ',
	)
);
?>