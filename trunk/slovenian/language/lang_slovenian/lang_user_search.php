<?php
/**
*
* @package Intero
* @version $Id: lang_user_search.php 33 2009-05-02 16:34:07Z  $
* @copyright (c) 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Adam Alkins (phpbb at rasadam dot com)
* TheSteffen, KugeLSichA, Tom, Carsten
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
'Search_invalid_username' => 'Za iskanje ste vnesli neveljavno uporabni�ko ime',
	'Search_invalid_email' => 'Za iskanje ste vnesli neveljavni e-mail naslov',
	'Search_invalid_ip' => 'Za iskanje ste vnesli neveljavni IP naslov',
	'Search_invalid_group' => 'Za iskanje ste vnesli neveljavni skupino',
	'Search_invalid_date' => 'Za iskanje ste vnesli neveljavni datum',
	'Search_invalid_postcount' => 'Za iskanje ste vnesli neveljavno �tetje prispevkov',
	'Search_invalid_userfield' => 'V uporabni�ko polje ste vnesli neveljavne podatke',
	'Search_invalid_lastvisited' => 'V polje "Zadnje opravljeno iskanje" ste vnesli neveljavne podatke',
	'Search_invalid_language' => 'Izbrali ste neveljaven jezik',
	'Search_invalid_style' => 'Izbrali ste neveljaven slog',
	'Search_invalid_timezone' => 'Izbrali ste neveljavno �asovno podro�je',
	'Search_invalid_moderators' => 'Izbrali ste neveljaven forum',
	'Search_invalid' => 'Iskanje neveljavno',
	'Search_invalid_day' => 'Vne�eni dan je neveljaven',
	'Search_invalid_month' => 'Vne�eni mesec neveljaven',
	'Search_invalid_year' => 'Vne�eno leto je neveljavno',
	'Search_no_regexp' => 'Va�a baza podatkov ne podpira iskanje z vnosom obi�ajnih izrazov (Regular Expression searching).',
	'Search_for_username' => 'Iskanje uporabni�kih imen, ki ste ujemajo z %s',
	'Search_for_email' => 'Iskanje e-mail naslovov, ki ste ujemajo z %s',
	'Search_for_ip' => 'Iskanje IP naslovov, ki ste ujemajo z %s',
	'Search_for_date' => 'Iskanje uporabnikov, ki so se pridru�ili %s %d/%d/%d',
	'Search_for_group' => 'Iskanje �lanov skupine %s',
	'Search_for_banned' => 'Iskanje uporabnikov s prepovedjo',
	'Search_for_admins' => 'Iskanje administratorjev',
	'Search_for_mods' => 'Iskanje moderatorjev',
	'Search_for_disabled' => 'Iskanje onemogo�enih uporabnikov',
	'Search_for_disabled_pms' => 'Iskanje uporabnikov, ki imajo onemogo�ena zasebna sporo�ila',
	'Search_for_postcount_greater' => 'Iskanje uporabnikov ve�jo vsoto prispevkov kot %d',
	'Search_for_postcount_lesser' => 'Iskanje uporabnikov manj�o vsoto prispevkov kot %d',
	'Search_for_postcount_range' => 'Iskanje uporabnikov z vsoto prispevkov med %d in %d',
	'Search_for_postcount_equals' => 'Iskanje uporabnikov z vrednostjo vsote prispevkov %d',
	'Search_for_userfield_icq' => 'Iskanje uporabnikov z ICQ naslovom, ki se ujema z %s',
	'Search_for_userfield_yahoo' => 'Iskanje uporabnikov z Yahoo IM naslovom, ki se ujema z %s',
	'Search_for_userfield_aim' => 'Iskanje uporabnikov z AIM naslovom, ki se ujema z %s',
	'Search_for_userfield_msn' => 'Iskanje uporabnikov z MSN Messenger naslovom, ki se ujema z %s',
	'Search_for_userfield_website' => 'Iskanje uporabnikov s spletno stranjo, ki se ujema z %s',
	'Search_for_userfield_location' => 'Iskanje uporabnikov z lokacijo, ki se ujema %s',
	'Search_for_userfield_interests' => 'Iskanje uporabnikov, katerim se polje za "Interesi" ujema z %s',
	'Search_for_userfield_occupation' => 'Iskanje uporabnikov, katerim se polje za "Poklic" ujema z %s',
	'Search_for_lastvisited_inthelast' => 'Iskanje uporabnikov, kateri so stran obiskali zadnjih %s %s dni/minut',
	'Search_for_lastvisited_afterthelast' => 'Iskanje uporabnikov, kater so stran obiskali pred %s %s dni/minut',
	'Search_for_language' => 'Iskanje uporabnikov, ki so nastavili %s jezik',
	'Search_for_timezone' => 'Iskanje uporabnikov, ki so nastavili GMT %s �asovno podro�je',
	'Search_for_style' => 'Iskanje uporabnikov, ki so nastavili  %s slog',
	'Search_for_moderators' => 'Iskanje moderatorjev foruma -> %s',
	'Search_users_advanced' => 'Napredno uporabni�ko iskanje',
	'Search_users_explain' => 'Ta modul vam omogo�a izvajanje napredno uporabni�ko iskanje z uporabo �irokega spektra kriterijev. Prosimo preberite opise pod vsemi polji za popolno razumevanje vseh iskalnih funkcij.',
	'Search_username_explain' => 'Izvedite neodvisno iskanje uporabni�kih imen. �e �elite, da se ujema tudi samo del uporabni�kega imena, uporabite * (zvezdico) kot "wildcard". �e obkljukate polje "Regular Expressions", boste lahko iskali na podlagi va�ega regex vzorca. <strong>Note:</strong> Regular Expressions deluje samo v MySQL-u, PostgreSQL-u in Oracle 10g+.',
	'Search_email_explain' => 'Vnesite izraz, ki se ujema z uporabnikovim e-mail naslovom. To je neodvisno od primera. �e �elite delno ujemanje, uporabite * (zvezdico) kot "wildcard". �e obkljukate polje "Regular Expressions", boste lahko iskali na podlagi va�ega regex vzorca. <strong>Note:</strong> Regular Expressions deluje samo v MySQL-u, PostgreSQL-u in Oracle 10g+.',	'Search_ip_explain' => 'Iskanje uporabnikov, ki so objavili prispevke z uporabo specifi�nega IP naslova (xxx.xxx.xxx.xxx), wildcarda (xxx.xxx.xxx.*) ali dometa (xxx.xxx.xxx.xxx-yyy.yyy.yyy.yyy). Opomba: Zadnji quad .255 je obravnavan kot domet vseh IP naslovov v temu quadu. �e boste vnesli 10.0.0.255 je enako, kot �e bi vnesli 10.0.0.* (IP naslov .255 ni bil dodeljen temu primeru, ker je rezerviran). Tam, kjer naletite na te domete, 10.0.0.5-10.0.0.255 pomeni enako kot "10.0.0.*" . V bistvu morate vnesti 10.0.0.5-10.0.0.254 .',
	'Search_users_joined' => 'Uporabniki, ki so se pridru�ili',
	'Search_users_lastvisited' => 'Uporabniki, ki so obiskali',
	'in_the_last' => 'v zadnjih',
	'after_the_last' => 'po zadnjih',
	'Before' => 'Pred',
	'After' => 'Po',
	'Search_users_joined_explain' => 'iskanje uporabnikov. ki so se pridru�ili pred ali po (in ob) specifi�nemu datumu. Oblika datuma je YYYY/MM/DD.',
	'Search_users_groups_explain' => 'Prika�i vse �lane izbrane skupine.',
	'Administrators' => 'Administratorji',
	'Banned_users' => 'Uporabniki s prepovedanim dostopom',
	'Disabled_users' => 'Onemogo�eni uporabniki',
	'Users_disabled_pms' => 'Uporabniki z onemogo�enim PMs',
	'Search_users_misc_explain' => 'Administratorji - Vsi uporabniki z statusom administratorja; Moderatorji - Vsi moderatorji foruma; Uporabniki z prepovedanim dostopm - Vsi uporabni�ki ra�uni, katerim je bil prepovedan dostop na forumu; Onemogo�eni uporabniki - Vsi uporabniki z onemogo�enimi uporabni�kimi ra�uni (ro�no onemogo�eni ali tisti, ki niso nikoli potrdili svoj e-mail naslov; Uporabniki z onemogo�enimi zasebnimi sporo�ili - Izbere uporabnike, katerim je bila odvzeta pravica do zasebnih sporo�il (nastavljenjo preko nadzora uporabnikov)',
	'Postcount' => 'Vsota prispevkov',
	'Equals' => 'Je enako',
	'Greater_than' => 'Ve� kot',
	'Less_than' => 'Manj kot',
	'Search_users_postcount_explain' => 'Iskanje uporabnikov glede na njihovo vrednost vsote prispevkov. Lahko i��ete z uporabo konkretne vrednosti, ve�je ali manj�e vrednosti ali pa vrednosti, ki je med dvema vrednostima. �e �elite domet iskanja, izberite "Je enako" nato vnesite za�etne in kon�ne vrednosti dometa, lo�ene z - (vezaj) npr. 10-15',
	'Userfield' => 'Uporabni�ko polje',
	'Search_users_userfield_explain' => 'Iskanje uporabnikov glede na razli�ne vrednosti v profilnih poljih. Wildcardi so podprti z uporabo zvezdice (*). �e obkljukate polje "Regular Expressions", boste lahko iskali na podlagi va�ega regex vzorca. <strong>Note:</strong> Regular Expressions delujej samo v MySQL, PostgreSQL in Oracle 10g+',
	'Search_users_lastvisited_explain' => 'Iskanje uporabnikov na podlagi datuma njihove zadnje prijave.',
	'Search_users_language_explain' => 'Funkcija bo prikazala uporabnike, kateri so izbrali dolo�en jezik v njihovih profilih',
	'Search_users_timezone_explain' => 'Uporabniki, ki so izbrali dolo�eno �asovno podro�je v njihovih profilih',
	'Search_users_style_explain' => 'Prika�e uporabnike, ki so izbrali dolo�en slog',
	'Moderators_of' => 'Moderatorji',
	'Search_users_moderators_explain' => 'Iskanje uporabnikov s pravicami moderatorja za dolo�en forum. Pravice moderatorja so prepoznane ali pri Uporabni�kih pravicah ali pa s prisotnostjo v Skupini s pravilnimi pravicami skupine.',
	'Regular_expression' => 'Obi�ajni izraz (Regular Expression)?',

	'Manage' => 'Upravljaj',
	'Search_users_new' => '%s prine�eni %d rezultat(i). Izvedi <a href="%s">novo iskanje</a>.',
	'Banned' => 'Prepovedano',
	'Not_banned' => 'Ni prepovedano',
	'Search_no_results' => 'Va�im kriterijem ne ustreza noben uporabnik. Prosimo poskusite ponovno iskanje. �e i��ete polja z uporabni�kimi imeni ali e-mail naslovi , morate za delno ujemanje uporabiti wildcard * (zvezdico).',
	'Account_status' => 'Status ra�una',
	'Sort_options' => 'Mo�nosti razvr��anja:',
	'Last_visit' => 'Zadnji obisk',
	'Day' => 'Dan',
	)
);

?>