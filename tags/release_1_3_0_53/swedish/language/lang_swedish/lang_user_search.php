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
* Adam Alkins (phpbb at rasadam dot com)
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
	'Search_invalid_username' => 'Ogiltigt användarnamn angavs till Sökning',
	'Search_invalid_email' => 'Ogiltig e-postadress angavs till Sökning',
	'Search_invalid_ip' => 'Ogiltig IP adress angavs till Sökning',
	'Search_invalid_group' => 'Ogiltig grupp angavs till Sökning',
	'Search_invalid_date' => 'Ogiltigt Datum angavs till Sökning',
	'Search_invalid_postcount' => 'Ogiltig Post Räknare angavs till Sökning',
	'Search_invalid_userfield' => 'Ogiltig Användarfälts data angavs',
	'Search_invalid_lastvisited' => 'Ogiltig data angavs för Senast Besök sökning',
	'Search_invalid_language' => 'Ogiltigt Språk Valt',
	'Search_invalid_style' => 'Ogiltig Stil Vald',
	'Search_invalid_timezone' => 'Ogiltig Tidszon Vald',
	'Search_invalid_moderators' => 'Ogiltigt Forum Valt',
	'Search_invalid' => 'Ogiltig Sökning',
	'Search_invalid_day' => 'Den dag du skrev in var ogiltig',
	'Search_invalid_month' => 'Den månad som du angav var ogiltig',
	'Search_invalid_year' => 'Året du angav var ogiltigt',
	'Search_no_regexp' => 'Din databas stöder inte Vanliga Uttrycks sökning.',
	'Search_for_username' => 'Sök användarnamns matchning %s',
	'Search_for_email' => 'Sök e-postadressers matchning %s',
	'Search_for_ip' => 'Sök IP-adresser matchning %s',
	'Search_for_date' => 'Sök användare som anslutits %s %d/%d/%d',
	'Search_for_group' => 'Sök grupp medlemmar av %s',
	'Search_for_banned' => 'Sök bannlysta användare',
	'Search_for_admins' => 'Sök Administratörer',
	'Search_for_mods' => 'Sök Moderatorer',
	'Search_for_disabled' => 'Söker efter användare som är avaktiverade',
	'Search_for_disabled_pms' => 'Söker efter användare med avaktiverade Privata Meddelanden',
	'Search_for_postcount_greater' => 'Söker efter användare med en inläggs räkning större än %d',
	'Search_for_postcount_lesser' => 'Söker efter användare med en inläggs räkning mindre än %d',
	'Search_for_postcount_range' => 'Söker efter användare med en inläggs räkning mellan %d och %d',
	'Search_for_postcount_equals' => 'Söker efter användare med ett post räknings värde av %d',
	'Search_for_userfield_icq' => 'Söker efter användare med en ICQ adress matchning %s',
	'Search_for_userfield_yahoo' => 'Söker efter användare med en Yahoo IM adress matchning %s',
	'Search_for_userfield_aim' => 'Söker efter användare med en AIM adress matchning %s',
	'Search_for_userfield_msn' => 'Söker efter användare med en MSN Messenger adress matchning %s',
	'Search_for_userfield_website' => 'Söker efter användare med en Webbside matchning %s',
	'Search_for_userfield_location' => 'Söker efter användare med en Plats matchning %s',
	'Search_for_userfield_interests' => 'Söker efter användare med deras intressen områdets matchning %s',
	'Search_for_userfield_occupation' => 'Söker efter användare med deras yrkesutövning områdets matchning %s',
	'Search_for_lastvisited_inthelast' => 'Söker efter användare som har besökt under de senaste %s %s',
	'Search_for_lastvisited_afterthelast' => 'Söker efter användare som har besökt efter det sista %s %s',
	'Search_for_language' => 'Söker efter användare som har satt %s som deras språk',
	'Search_for_timezone' => 'Söker efter användare som har satt GMT %s som deras tidszon',
	'Search_for_style' => 'Söker efter användare som har satt %s som deras stil',
	'Search_for_moderators' => 'Sök moderatorer i Forumet -> %s',
	'Search_users_advanced' => 'Avancerad Användar Sökning',
	'Search_users_explain' => 'Denna modul ger dig möjlighet att utföra avancerade sökningar för användare på en rad olika kriterier. Läs beskrivningar under varje område för att förstå alla sökalternativ helt.',
	'Search_username_explain' => 'Här kan du utföra ett skiftlägesokänsligt sökning efter användarnamn. Om du vill söka på del av användarnamn, använda * (asterisk) som jokertecken. Kontrollera Regular Expressions box gör att du kan söka utifrån dina regex mönster. <strong>Notera:</strong> Regular Expressions fungerar bara i MySQL, PostgreSQL och Oracle 10g+.',
	'Search_email_explain' => 'Ange ett uttryck för att matcha ett användarnamn e-postadress. Detta är skiftlägesokänsligt. Om du vill göra en partiell matchning använda * (asterisk) som jokertecken. Kontrollera Regular Expressions gör att du kan söka utifrån dina regex mönster. <strong>Notera:</strong> Regular Expressions fungerar bara i MySQL, PostgreSQL och Oracle 10g+.',
	'Search_ip_explain' => 'Sök efter användare som gjort inlägg från en specifik IP-adress (xxx.xxx.xxx.xxx), jokertecken (xxx.xxx.xxx.*) eller intervall (xxx.xxx.xxx.xxx-yyy.yyy.yyy.yyy). Notera: de senaste fyra ,255 avser utbudet av alla IP-adresser i fyrlingen. Om du anger 10.0.0.255, det är precis som att ange 10.0.0.* (Ingen IP tilldelas ,255 för den delen, den är reserverad). Där du kan stöta på detta är inom områdena, 10.0.0.5-10.0.0.255 är densamma som "10.0.0.*" . Du borde verkligen ange 10.0.0.5-10.0.0.254 .',
	'Search_users_joined' => 'Användare som gick med',
	'Search_users_lastvisited' => 'Användare som har besökt',
	'in_the_last' => 'under de senaste',
	'after_the_last' => 'efter den sista',
	'Before' => 'Innan',
	'After' => 'Efter',
	'Search_users_joined_explain' => 'Sök användare som gått med Före eller Efter (och) ett visst datum. Datumformatet är YYYY/MM/DD.',
	'Search_users_groups_explain' => 'Visa alla medlemmar i den utvalda gruppen.',
	'Administrators' => 'Administratörer',
	'Banned_users' => 'Bannlysta Användare',
	'Disabled_users' => 'Avaktiverade Användare',
	'Users_disabled_pms' => 'Användare med avaktiverade PMs',
	'Search_users_misc_explain' => 'Administratörer - Alla användare med Administratörs rättigheter; Moderatorer - Alla forum moderatorer; Bannlysta Användare - Alla konton som har blivit bannlysta i dessa forum; Avaktiverade Användare - Alla användare med avaktiverade konton (antingen manuellt avaktiverade eller aldrig kontrollerat deras e-postadress); Användare med avaktiverade PMs - Väljer användare som har Privata Meddelanden privilegier borttagna (via Användarhantering)',
	'Postcount' => 'Posträkning',
	'Equals' => 'Likvärdiga',
	'Greater_than' => 'Större än',
	'Less_than' => 'Mindre än',
	'Search_users_postcount_explain' => 'Du kan söka efter användare baserat på Posträknings värde. Du kan antingen söka på ett visst värde, större än eller mindre än ett värde mellan två värden. För att göra en områdes sökning, välj "Likvärdiga" lägg sedan start och slut värden i rad separerade med ett bindestreck (-), t.ex. 10-15',
	'Userfield' => 'Användarfält',
	'Search_users_userfield_explain' => 'Sök efter användare utifrån olika profil fält. Jokertecken kan hanteras med hjälp av en asteriskk (*). Kontrollera Regular Expressions box gör att du kan söka utifrån dina regex mönster. <strong>Notera:</strong> Regular Expressions fungerar bara i MySQL, PostgreSQL och Oracle 10g+.',
	'Search_users_lastvisited_explain' => 'Sök efter användare baserat på deras senaste inloggnings datum.',
	'Search_users_language_explain' => 'Det här kommer att visa användare som har valt ett visst språk i sin Profil',
	'Search_users_timezone_explain' => 'Användare som har valt en viss tidszon i sin profil',
	'Search_users_style_explain' => 'Visa användare som har valt en specifik stil.',
	'Moderators_of' => 'Moderator på',
	'Search_users_moderators_explain' => 'Sök användare med Moderating rättigheter till ett särskilt forum. Moderations rättigheter redovisas antingen genom användarbehörigheter eller genom att vara i en grupp med rätt Grupp Rättigheter.',
	'Regular_expression' => 'Regelbundna Uttryck?',

	'Manage' => 'Hantera',
	'Search_users_new' => '%s gav %d resultat. Utför <a href="%s">en ny sökning</a>.',
	'Banned' => 'Bannlyst',
	'Not_banned' => 'Inte Bannlyst',
	'Search_no_results' => 'Inga användare matchar dina valda kriterier. Vänligen prova en ny sökning. Om du söker på användarnamn eller e-postadress fälten för partiella matchningar måste du använda jokertecken * (asterisk).',
	'Account_status' => 'Konto Status',
	'Sort_options' => 'Sortera alternativ:',
	'Last_visit' => 'Senaste Besök',
	'Day' => 'Dag',
	)
);

?>