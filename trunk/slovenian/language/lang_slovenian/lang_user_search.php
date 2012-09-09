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
'Search_invalid_username' => 'Za iskanje ste vnesli neveljavno uporabniško ime',
	'Search_invalid_email' => 'Za iskanje ste vnesli neveljavni e-mail naslov',
	'Search_invalid_ip' => 'Za iskanje ste vnesli neveljavni IP naslov',
	'Search_invalid_group' => 'Za iskanje ste vnesli neveljavni skupino',
	'Search_invalid_date' => 'Za iskanje ste vnesli neveljavni datum',
	'Search_invalid_postcount' => 'Za iskanje ste vnesli neveljavno štetje prispevkov',
	'Search_invalid_userfield' => 'V uporabniško polje ste vnesli neveljavne podatke',
	'Search_invalid_lastvisited' => 'V polje "Zadnje opravljeno iskanje" ste vnesli neveljavne podatke',
	'Search_invalid_language' => 'Izbrali ste neveljaven jezik',
	'Search_invalid_style' => 'Izbrali ste neveljaven slog',
	'Search_invalid_timezone' => 'Izbrali ste neveljavno èasovno podroèje',
	'Search_invalid_moderators' => 'Izbrali ste neveljaven forum',
	'Search_invalid' => 'Iskanje neveljavno',
	'Search_invalid_day' => 'Vnešeni dan je neveljaven',
	'Search_invalid_month' => 'Vnešeni mesec neveljaven',
	'Search_invalid_year' => 'Vnešeno leto je neveljavno',
	'Search_no_regexp' => 'Vaša baza podatkov ne podpira iskanje z vnosom obièajnih izrazov (Regular Expression searching).',
	'Search_for_username' => 'Iskanje uporabniških imen, ki ste ujemajo z %s',
	'Search_for_email' => 'Iskanje e-mail naslovov, ki ste ujemajo z %s',
	'Search_for_ip' => 'Iskanje IP naslovov, ki ste ujemajo z %s',
	'Search_for_date' => 'Iskanje uporabnikov, ki so se pridružili %s %d/%d/%d',
	'Search_for_group' => 'Iskanje èlanov skupine %s',
	'Search_for_banned' => 'Iskanje uporabnikov s prepovedjo',
	'Search_for_admins' => 'Iskanje administratorjev',
	'Search_for_mods' => 'Iskanje moderatorjev',
	'Search_for_disabled' => 'Iskanje onemogoèenih uporabnikov',
	'Search_for_disabled_pms' => 'Iskanje uporabnikov, ki imajo onemogoèena zasebna sporoèila',
	'Search_for_postcount_greater' => 'Iskanje uporabnikov veèjo vsoto prispevkov kot %d',
	'Search_for_postcount_lesser' => 'Iskanje uporabnikov manjšo vsoto prispevkov kot %d',
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
	'Search_for_timezone' => 'Iskanje uporabnikov, ki so nastavili GMT %s èasovno podroèje',
	'Search_for_style' => 'Iskanje uporabnikov, ki so nastavili  %s slog',
	'Search_for_moderators' => 'Iskanje moderatorjev foruma -> %s',
	'Search_users_advanced' => 'Napredno uporabniško iskanje',
	'Search_users_explain' => 'Ta modul vam omogoèa izvajanje napredno uporabniško iskanje z uporabo širokega spektra kriterijev. Prosimo preberite opise pod vsemi polji za popolno razumevanje vseh iskalnih funkcij.',
	'Search_username_explain' => 'Izvedite neodvisno iskanje uporabniških imen. Èe želite, da se ujema tudi samo del uporabniškega imena, uporabite * (zvezdico) kot "wildcard". Èe obkljukate polje "Regular Expressions", boste lahko iskali na podlagi vašega regex vzorca. <strong>Note:</strong> Regular Expressions deluje samo v MySQL-u, PostgreSQL-u in Oracle 10g+.',
	'Search_email_explain' => 'Vnesite izraz, ki se ujema z uporabnikovim e-mail naslovom. To je neodvisno od primera. Èe želite delno ujemanje, uporabite * (zvezdico) kot "wildcard". Èe obkljukate polje "Regular Expressions", boste lahko iskali na podlagi vašega regex vzorca. <strong>Note:</strong> Regular Expressions deluje samo v MySQL-u, PostgreSQL-u in Oracle 10g+.',	'Search_ip_explain' => 'Iskanje uporabnikov, ki so objavili prispevke z uporabo specifiènega IP naslova (xxx.xxx.xxx.xxx), wildcarda (xxx.xxx.xxx.*) ali dometa (xxx.xxx.xxx.xxx-yyy.yyy.yyy.yyy). Opomba: Zadnji quad .255 je obravnavan kot domet vseh IP naslovov v temu quadu. Èe boste vnesli 10.0.0.255 je enako, kot èe bi vnesli 10.0.0.* (IP naslov .255 ni bil dodeljen temu primeru, ker je rezerviran). Tam, kjer naletite na te domete, 10.0.0.5-10.0.0.255 pomeni enako kot "10.0.0.*" . V bistvu morate vnesti 10.0.0.5-10.0.0.254 .',
	'Search_users_joined' => 'Uporabniki, ki so se pridružili',
	'Search_users_lastvisited' => 'Uporabniki, ki so obiskali',
	'in_the_last' => 'v zadnjih',
	'after_the_last' => 'po zadnjih',
	'Before' => 'Pred',
	'After' => 'Po',
	'Search_users_joined_explain' => 'iskanje uporabnikov. ki so se pridružili pred ali po (in ob) specifiènemu datumu. Oblika datuma je YYYY/MM/DD.',
	'Search_users_groups_explain' => 'Prikaži vse èlane izbrane skupine.',
	'Administrators' => 'Administratorji',
	'Banned_users' => 'Uporabniki s prepovedanim dostopom',
	'Disabled_users' => 'Onemogoèeni uporabniki',
	'Users_disabled_pms' => 'Uporabniki z onemogoèenim PMs',
	'Search_users_misc_explain' => 'Administratorji - Vsi uporabniki z statusom administratorja; Moderatorji - Vsi moderatorji foruma; Uporabniki z prepovedanim dostopm - Vsi uporabniški raèuni, katerim je bil prepovedan dostop na forumu; Onemogoèeni uporabniki - Vsi uporabniki z onemogoèenimi uporabniškimi raèuni (roèno onemogoèeni ali tisti, ki niso nikoli potrdili svoj e-mail naslov; Uporabniki z onemogoèenimi zasebnimi sporoèili - Izbere uporabnike, katerim je bila odvzeta pravica do zasebnih sporoèil (nastavljenjo preko nadzora uporabnikov)',
	'Postcount' => 'Vsota prispevkov',
	'Equals' => 'Je enako',
	'Greater_than' => 'Veè kot',
	'Less_than' => 'Manj kot',
	'Search_users_postcount_explain' => 'Iskanje uporabnikov glede na njihovo vrednost vsote prispevkov. Lahko išèete z uporabo konkretne vrednosti, veèje ali manjše vrednosti ali pa vrednosti, ki je med dvema vrednostima. Èe želite domet iskanja, izberite "Je enako" nato vnesite zaèetne in konène vrednosti dometa, loèene z - (vezaj) npr. 10-15',
	'Userfield' => 'Uporabniško polje',
	'Search_users_userfield_explain' => 'Iskanje uporabnikov glede na razliène vrednosti v profilnih poljih. Wildcardi so podprti z uporabo zvezdice (*). Èe obkljukate polje "Regular Expressions", boste lahko iskali na podlagi vašega regex vzorca. <strong>Note:</strong> Regular Expressions delujej samo v MySQL, PostgreSQL in Oracle 10g+',
	'Search_users_lastvisited_explain' => 'Iskanje uporabnikov na podlagi datuma njihove zadnje prijave.',
	'Search_users_language_explain' => 'Funkcija bo prikazala uporabnike, kateri so izbrali doloèen jezik v njihovih profilih',
	'Search_users_timezone_explain' => 'Uporabniki, ki so izbrali doloèeno èasovno podroèje v njihovih profilih',
	'Search_users_style_explain' => 'Prikaže uporabnike, ki so izbrali doloèen slog',
	'Moderators_of' => 'Moderatorji',
	'Search_users_moderators_explain' => 'Iskanje uporabnikov s pravicami moderatorja za doloèen forum. Pravice moderatorja so prepoznane ali pri Uporabniških pravicah ali pa s prisotnostjo v Skupini s pravilnimi pravicami skupine.',
	'Regular_expression' => 'Obièajni izraz (Regular Expression)?',

	'Manage' => 'Upravljaj',
	'Search_users_new' => '%s prinešeni %d rezultat(i). Izvedi <a href="%s">novo iskanje</a>.',
	'Banned' => 'Prepovedano',
	'Not_banned' => 'Ni prepovedano',
	'Search_no_results' => 'Vašim kriterijem ne ustreza noben uporabnik. Prosimo poskusite ponovno iskanje. Èe išèete polja z uporabniškimi imeni ali e-mail naslovi , morate za delno ujemanje uporabiti wildcard * (zvezdico).',
	'Account_status' => 'Status raèuna',
	'Sort_options' => 'Možnosti razvršèanja:',
	'Last_visit' => 'Zadnji obisk',
	'Day' => 'Dan',
	)
);

?>