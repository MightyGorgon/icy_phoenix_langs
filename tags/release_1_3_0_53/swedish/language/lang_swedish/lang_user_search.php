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
	'Search_invalid_username' => 'Ogiltigt anv�ndarnamn angavs till S�kning',
	'Search_invalid_email' => 'Ogiltig e-postadress angavs till S�kning',
	'Search_invalid_ip' => 'Ogiltig IP adress angavs till S�kning',
	'Search_invalid_group' => 'Ogiltig grupp angavs till S�kning',
	'Search_invalid_date' => 'Ogiltigt Datum angavs till S�kning',
	'Search_invalid_postcount' => 'Ogiltig Post R�knare angavs till S�kning',
	'Search_invalid_userfield' => 'Ogiltig Anv�ndarf�lts data angavs',
	'Search_invalid_lastvisited' => 'Ogiltig data angavs f�r Senast Bes�k s�kning',
	'Search_invalid_language' => 'Ogiltigt Spr�k Valt',
	'Search_invalid_style' => 'Ogiltig Stil Vald',
	'Search_invalid_timezone' => 'Ogiltig Tidszon Vald',
	'Search_invalid_moderators' => 'Ogiltigt Forum Valt',
	'Search_invalid' => 'Ogiltig S�kning',
	'Search_invalid_day' => 'Den dag du skrev in var ogiltig',
	'Search_invalid_month' => 'Den m�nad som du angav var ogiltig',
	'Search_invalid_year' => '�ret du angav var ogiltigt',
	'Search_no_regexp' => 'Din databas st�der inte Vanliga Uttrycks s�kning.',
	'Search_for_username' => 'S�k anv�ndarnamns matchning %s',
	'Search_for_email' => 'S�k e-postadressers matchning %s',
	'Search_for_ip' => 'S�k IP-adresser matchning %s',
	'Search_for_date' => 'S�k anv�ndare som anslutits %s %d/%d/%d',
	'Search_for_group' => 'S�k grupp medlemmar av %s',
	'Search_for_banned' => 'S�k bannlysta anv�ndare',
	'Search_for_admins' => 'S�k Administrat�rer',
	'Search_for_mods' => 'S�k Moderatorer',
	'Search_for_disabled' => 'S�ker efter anv�ndare som �r avaktiverade',
	'Search_for_disabled_pms' => 'S�ker efter anv�ndare med avaktiverade Privata Meddelanden',
	'Search_for_postcount_greater' => 'S�ker efter anv�ndare med en inl�ggs r�kning st�rre �n %d',
	'Search_for_postcount_lesser' => 'S�ker efter anv�ndare med en inl�ggs r�kning mindre �n %d',
	'Search_for_postcount_range' => 'S�ker efter anv�ndare med en inl�ggs r�kning mellan %d och %d',
	'Search_for_postcount_equals' => 'S�ker efter anv�ndare med ett post r�knings v�rde av %d',
	'Search_for_userfield_icq' => 'S�ker efter anv�ndare med en ICQ adress matchning %s',
	'Search_for_userfield_yahoo' => 'S�ker efter anv�ndare med en Yahoo IM adress matchning %s',
	'Search_for_userfield_aim' => 'S�ker efter anv�ndare med en AIM adress matchning %s',
	'Search_for_userfield_msn' => 'S�ker efter anv�ndare med en MSN Messenger adress matchning %s',
	'Search_for_userfield_website' => 'S�ker efter anv�ndare med en Webbside matchning %s',
	'Search_for_userfield_location' => 'S�ker efter anv�ndare med en Plats matchning %s',
	'Search_for_userfield_interests' => 'S�ker efter anv�ndare med deras intressen omr�dets matchning %s',
	'Search_for_userfield_occupation' => 'S�ker efter anv�ndare med deras yrkesut�vning omr�dets matchning %s',
	'Search_for_lastvisited_inthelast' => 'S�ker efter anv�ndare som har bes�kt under de senaste %s %s',
	'Search_for_lastvisited_afterthelast' => 'S�ker efter anv�ndare som har bes�kt efter det sista %s %s',
	'Search_for_language' => 'S�ker efter anv�ndare som har satt %s som deras spr�k',
	'Search_for_timezone' => 'S�ker efter anv�ndare som har satt GMT %s som deras tidszon',
	'Search_for_style' => 'S�ker efter anv�ndare som har satt %s som deras stil',
	'Search_for_moderators' => 'S�k moderatorer i Forumet -> %s',
	'Search_users_advanced' => 'Avancerad Anv�ndar S�kning',
	'Search_users_explain' => 'Denna modul ger dig m�jlighet att utf�ra avancerade s�kningar f�r anv�ndare p� en rad olika kriterier. L�s beskrivningar under varje omr�de f�r att f�rst� alla s�kalternativ helt.',
	'Search_username_explain' => 'H�r kan du utf�ra ett skiftl�gesok�nsligt s�kning efter anv�ndarnamn. Om du vill s�ka p� del av anv�ndarnamn, anv�nda * (asterisk) som jokertecken. Kontrollera Regular Expressions box g�r att du kan s�ka utifr�n dina regex m�nster. <strong>Notera:</strong> Regular Expressions fungerar bara i MySQL, PostgreSQL och Oracle 10g+.',
	'Search_email_explain' => 'Ange ett uttryck f�r att matcha ett anv�ndarnamn e-postadress. Detta �r skiftl�gesok�nsligt. Om du vill g�ra en partiell matchning anv�nda * (asterisk) som jokertecken. Kontrollera Regular Expressions g�r att du kan s�ka utifr�n dina regex m�nster. <strong>Notera:</strong> Regular Expressions fungerar bara i MySQL, PostgreSQL och Oracle 10g+.',
	'Search_ip_explain' => 'S�k efter anv�ndare som gjort inl�gg fr�n en specifik IP-adress (xxx.xxx.xxx.xxx), jokertecken (xxx.xxx.xxx.*) eller intervall (xxx.xxx.xxx.xxx-yyy.yyy.yyy.yyy). Notera: de senaste fyra ,255 avser utbudet av alla IP-adresser i fyrlingen. Om du anger 10.0.0.255, det �r precis som att ange 10.0.0.* (Ingen IP tilldelas ,255 f�r den delen, den �r reserverad). D�r du kan st�ta p� detta �r inom omr�dena, 10.0.0.5-10.0.0.255 �r densamma som "10.0.0.*" . Du borde verkligen ange 10.0.0.5-10.0.0.254 .',
	'Search_users_joined' => 'Anv�ndare som gick med',
	'Search_users_lastvisited' => 'Anv�ndare som har bes�kt',
	'in_the_last' => 'under de senaste',
	'after_the_last' => 'efter den sista',
	'Before' => 'Innan',
	'After' => 'Efter',
	'Search_users_joined_explain' => 'S�k anv�ndare som g�tt med F�re eller Efter (och) ett visst datum. Datumformatet �r YYYY/MM/DD.',
	'Search_users_groups_explain' => 'Visa alla medlemmar i den utvalda gruppen.',
	'Administrators' => 'Administrat�rer',
	'Banned_users' => 'Bannlysta Anv�ndare',
	'Disabled_users' => 'Avaktiverade Anv�ndare',
	'Users_disabled_pms' => 'Anv�ndare med avaktiverade PMs',
	'Search_users_misc_explain' => 'Administrat�rer - Alla anv�ndare med Administrat�rs r�ttigheter; Moderatorer - Alla forum moderatorer; Bannlysta Anv�ndare - Alla konton som har blivit bannlysta i dessa forum; Avaktiverade Anv�ndare - Alla anv�ndare med avaktiverade konton (antingen manuellt avaktiverade eller aldrig kontrollerat deras e-postadress); Anv�ndare med avaktiverade PMs - V�ljer anv�ndare som har Privata Meddelanden privilegier borttagna (via Anv�ndarhantering)',
	'Postcount' => 'Postr�kning',
	'Equals' => 'Likv�rdiga',
	'Greater_than' => 'St�rre �n',
	'Less_than' => 'Mindre �n',
	'Search_users_postcount_explain' => 'Du kan s�ka efter anv�ndare baserat p� Postr�knings v�rde. Du kan antingen s�ka p� ett visst v�rde, st�rre �n eller mindre �n ett v�rde mellan tv� v�rden. F�r att g�ra en omr�des s�kning, v�lj "Likv�rdiga" l�gg sedan start och slut v�rden i rad separerade med ett bindestreck (-), t.ex. 10-15',
	'Userfield' => 'Anv�ndarf�lt',
	'Search_users_userfield_explain' => 'S�k efter anv�ndare utifr�n olika profil f�lt. Jokertecken kan hanteras med hj�lp av en asteriskk (*). Kontrollera Regular Expressions box g�r att du kan s�ka utifr�n dina regex m�nster. <strong>Notera:</strong> Regular Expressions fungerar bara i MySQL, PostgreSQL och Oracle 10g+.',
	'Search_users_lastvisited_explain' => 'S�k efter anv�ndare baserat p� deras senaste inloggnings datum.',
	'Search_users_language_explain' => 'Det h�r kommer att visa anv�ndare som har valt ett visst spr�k i sin Profil',
	'Search_users_timezone_explain' => 'Anv�ndare som har valt en viss tidszon i sin profil',
	'Search_users_style_explain' => 'Visa anv�ndare som har valt en specifik stil.',
	'Moderators_of' => 'Moderator p�',
	'Search_users_moderators_explain' => 'S�k anv�ndare med Moderating r�ttigheter till ett s�rskilt forum. Moderations r�ttigheter redovisas antingen genom anv�ndarbeh�righeter eller genom att vara i en grupp med r�tt Grupp R�ttigheter.',
	'Regular_expression' => 'Regelbundna Uttryck?',

	'Manage' => 'Hantera',
	'Search_users_new' => '%s gav %d resultat. Utf�r <a href="%s">en ny s�kning</a>.',
	'Banned' => 'Bannlyst',
	'Not_banned' => 'Inte Bannlyst',
	'Search_no_results' => 'Inga anv�ndare matchar dina valda kriterier. V�nligen prova en ny s�kning. Om du s�ker p� anv�ndarnamn eller e-postadress f�lten f�r partiella matchningar m�ste du anv�nda jokertecken * (asterisk).',
	'Account_status' => 'Konto Status',
	'Sort_options' => 'Sortera alternativ:',
	'Last_visit' => 'Senaste Bes�k',
	'Day' => 'Dag',
	)
);

?>