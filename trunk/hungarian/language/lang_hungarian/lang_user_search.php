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
	'Search_invalid_username' => 'Érvénytelen felhasználónevet adtál meg a kereséshez',
	'Search_invalid_email' => 'Érvénytelen email címet adtál meg a kereséshez',
	'Search_invalid_ip' => 'Érvénytelen IP címet adtál meg a kereséshez',
	'Search_invalid_group' => 'Érvénytelen csoportot adtál meg a kereséshez',
	'Search_invalid_date' => 'Érvénytelen dátumot adtál meg a kereséshez',
	'Search_invalid_postcount' => 'Érvénytelen hozzászólás-számot adtál meg a kereséshez',
	'Search_invalid_userfield' => 'Érvénytelen felhasználói mezőt adtál meg a kereséshez',
	'Search_invalid_lastvisited' => 'Érvénytelen adatot adtál meg az Utoljára jelen mezőbe a kereséshez',
	'Search_invalid_language' => 'Érvénytelen nyelv lett kijelölve',
	'Search_invalid_style' => 'Érvénytelen stílus lett kijelölve',
	'Search_invalid_timezone' => 'Érvénytelen időzóna lett kijelölve',
	'Search_invalid_moderators' => 'Érvénytelen fórum lett kijelölve',
	'Search_invalid' => 'Érvénytelen keresés',
	'Search_invalid_day' => 'A megadott nap érvénytelen',
	'Search_invalid_month' => 'A megadott hónap érvénytelen',
	'Search_invalid_year' => 'A megadott év érvénytelen',
	'Search_no_regexp' => 'Az adatbázis nem támogatja az Általános szóhasználati keresést.',
	'Search_for_username' => 'Ezzel megegyező felhasználónevek keresése: %s',
	'Search_for_email' => 'Ezzel megegyező email címek keresése: %s',
	'Search_for_ip' => 'Ezzel megegyező IP címek keresése: %s',
	'Search_for_date' => 'Felhasználók keresése, akik ekkor csatlakoztak: %s %d/%d/%d',
	'Search_for_group' => '%s csoport tagjainak keresése',
	'Search_for_banned' => 'Kitiltott felhasználók keresése',
	'Search_for_admins' => 'Adiminisztrátorok keresése',
	'Search_for_mods' => 'Moderátorok keresése',
	'Search_for_disabled' => 'Letiltott felhasználók keresése',
	'Search_for_disabled_pms' => 'Felhasználók keresése, akiknek le lett tiltva a Privát Üzenet',
	'Search_for_postcount_greater' => 'Felhasználók keresése, akiknek több hozzászólása van ennél: %d',
	'Search_for_postcount_lesser' => 'Felhasználók keresése, akiknek kevesebb hozzászólása van ennél: %d',
	'Search_for_postcount_range' => 'Felhasználók keresése, akiknek %d és %d közötti hozzászólása van',
	'Search_for_postcount_equals' => 'Felhasználók keresése, akiknek %d hozzászólása van',
	'Search_for_userfield_icq' => 'Felhasználók keresése, akiknek az ICQ címe megegyezik ezzel: %s',
	'Search_for_userfield_yahoo' => 'Felhasználók keresése, akiknek a Yahoo IM címe megegyezik ezzel: %s',
	'Search_for_userfield_aim' => 'Felhasználók keresése, akiknek az AIM címe megegyezik ezzel: %s',
	'Search_for_userfield_msn' => 'Felhasználók keresése, akiknek az MSN Messenger címe megegyezik ezzel: %s',
	'Search_for_userfield_website' => 'Felhasználók keresése, akiknek a honlapja megegyezik ezzel: %s',
	'Search_for_userfield_location' => 'Felhasználók keresése, akiknek a tartózkodási helye megegyezik ezzel: %s',
	'Search_for_userfield_interests' => 'Felhasználók keresése, akiknek az érdeklődési köre megegyezik ezzel: %s',
	'Search_for_userfield_occupation' => 'Felhasználók keresése, akiknek a foglalkozása megegyezik ezzel: %s',
	'Search_for_lastvisited_inthelast' => 'Felhasználók keresése, akik ennél korábban jeletnkeztek be utoljára: %s %s',
	'Search_for_lastvisited_afterthelast' => 'Felhasználók keresése, akik ennél régebben jelentkeztek be utoljára: %s %s',
	'Search_for_language' => 'Felhasználók keresése, akik a(z) %s nyelvet állították be maguknak',
	'Search_for_timezone' => 'Felhasználók keresése, akik a GMT %s-t adták meg időzónának',
	'Search_for_style' => 'Felhasználók keresése, akik a(z) %s megjelenést állították be',
	'Search_for_moderators' => 'A %s fórum moderátorainak keresése',
	'Search_users_advanced' => 'Bővített felhasználó kereső',
	'Search_users_explain' => 'Ez a modul lehetőséget ad arra, hogy bővített keresést folytass a felhasználók között a feltételek széles választékával. Olvasd el minden mező alatt a leírást, hogy pontosan megértsd a keresési opciót.',
	'Search_username_explain' => 'Kis- és nagybetűre nem érzékeny keresés folytatása a felhasználónevek között. Ha csak részleges egyezést szeretnél, használd a * (csillag) karaktert. Az Általános szóhasználat jelölőnégyzet kipipálása engedélyezi számodra a regex sablon használatát. <strong>Megjegyzés:</strong> Általános szóhasználat csak a MySQL, PostgreSQL és Oracle 10g+ típusú adatbázisoknál működik.',
	'Search_email_explain' => 'Írj be egy kifejezést, hogy az alapján keressen email címet. Kis-nagy betűkre nem érzékeny. Ha csak részleges egyezést szeretnél, használd a * (csillag) karaktert. Az Általános szóhasználat jelölőnégyzet kipipálása engedélyezi számodra a regex sablon használatát. <strong>Megjegyzés:</strong> Általános szóhasználat csak a MySQL, PostgreSQL és Oracle 10g+ típusú adatbázisoknál működik.',
	'Search_ip_explain' => 'Felhasználók keresése, akik a megadott ip címről küldtek hozzászólást(xxx.xxx.xxx.xxx), wildcard (xxx.xxx.xxx.*) or range (xxx.xxx.xxx.xxx-yyy.yyy.yyy.yyy). Note: the last quad .255 is considered the range of all the IPs in that quad. If you enter 10.0.0.255, it is just like entering 10.0.0.* (No IP is assigned .255 for that matter, it is reserved). Where you may encounter this is in ranges, 10.0.0.5-10.0.0.255 is the same as "10.0.0.*" . You should really enter 10.0.0.5-10.0.0.254 .',
	'Search_users_joined' => 'Felhasználók, akik csatlakoztak',
	'Search_users_lastvisited' => 'Felhasználók, akik utoljára bejelentkeztek',
	'in_the_last' => 'a megadott időnél korábban:',
	'after_the_last' => 'a megadott időnél később',
	'Before' => 'Előtt',
	'After' => 'Után',
	'Search_users_joined_explain' => 'Felhasználók keresése, akik a megadott idő előtt vagy után csatlakozták. A dátumformátum ÉÉÉÉ/HH/NN.',
	'Search_users_groups_explain' => 'A kiválasztott csoport tagjainak megtekintése.',
	'Administrators' => 'Adminisztrátorok',
	'Banned_users' => 'Kitiltott felhasználók',
	'Disabled_users' => 'Letiltott felhasználók',
	'Users_disabled_pms' => 'PÜ-tiltott felhasználók',
	'Search_users_misc_explain' => 'Adminisztrátorok - Minden felhasználó, akinek Adminisztrátori státusza van; Moderátorok - Az összes fórum moderátor; Kitiltott felhasználók - Az összes felhasználó, akik ki lettek tiltva a fórumról; Letiltott felhasználók - Az összes felhasználó, akik azonosítója levan tiltva (a kézileg letiltottak és az email címüket soha nem megerősítők is ide tartoznak); PÜ-tiltott felhasználók - Felhasználók, akiktől meg lettek vonva a Privát Üzenetekkel kapcsolatos jogosultságok (Felhasználó kezelőben)',
	'Postcount' => 'Hozzászólás-szám',
	'Equals' => 'Egyenlő',
	'Greater_than' => 'Nagyobb, mint',
	'Less_than' => 'Kisebb, mint',
	'Search_users_postcount_explain' => 'Felhasználók keresése hozzászólásaik száma alapján. Kereshetsz megadott szám alapján; "nagyobb, mint" vagy "kisebb, mint" alapon; vagy megadhatod, mely 2 szám közötti legyen ez az érték. A két érték közötti kereséshez válaszd az "Egyenlő" lehetőséget, majd add meg a minimum és a maximum értéket kötőjellel (-) elválasztva, pl. 10-15',
	'Userfield' => 'Profilmező',
	'Search_users_userfield_explain' => 'Felhasználók keresése profilmező alapján. A csillag (*) használata engedélyezett. Az Általános szóhasználat jelölőnégyzet kipipálása engedélyezi számodra a regex sablon használatát. <strong>Megjegyzés:</strong> Általános szóhasználat csak a MySQL, PostgreSQL és Oracle 10g+ típusú adatbázisoknál működik.',
	'Search_users_lastvisited_explain' => 'Felhasználók keresése az utolsó bejelentkezési dátumuk alapján.',
	'Search_users_language_explain' => 'Azon felhasználókat jeleníti meg, akik a megadott nyelvet állították be a profiljukban.',
	'Search_users_timezone_explain' => 'Felhasználók meglejenítése, akik a megadott időzónát állították be.',
	'Search_users_style_explain' => 'Felhasználók megjelenítése, akik a megadott stílust állították be.',
	'Moderators_of' => 'Moderátorai ennek:',
	'Search_users_moderators_explain' => 'Felhasználók keresése, akik moderátorai a megadott fórumnak. A moderátori jogosultságok felismerése a Felhasználói jogosultságok alapján, vagy egy moderátori joggal bíró csoport tagjaként történik',
	'Regular_expression' => 'Általános szóhasználat?',

	'Manage' => 'Kezelés',
	'Search_users_new' => '%s  %d találatot észlelt. Végezz el <a href="%s">másik keresést</a>.',
	'Banned' => 'Kitiltva',
	'Not_banned' => 'Nincs kitiltva',
	'Search_no_results' => 'Nem található felhasználó a megadott feltételekkel. Próbáld meg más feltételekkel. Ha a felhasználónév vagy email cím alapján keresel, használd a * (csillag) karaktert a részleges egyezéshez. ',
	'Account_status' => 'Azonosító állapota',
	'Sort_options' => 'SRendezési lehetőségek:',
	'Last_visit' => 'Utolsó látogatás',
	'Day' => 'Nap',
	)
);

?>