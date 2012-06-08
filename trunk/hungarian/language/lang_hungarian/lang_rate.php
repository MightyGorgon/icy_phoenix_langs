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
* Nivisec.com (support@nivisec.com)
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
	'Already_Rated' => 'Értekelted: <b>%d</b>', //%d = their rate
	'Rate_Stats' => '<b>%.2f</b>', //%.2f = average, %d = min, %d = max, %d # of ratings
	'Rate' => 'Értékel',
	'Choose_Rating' => 'Válassz értékelést',
	'Topic_Rated' => 'Téma értékelve.',
	'Anon_Rate_Disabled' => 'Névtelen felhasználók nem értékelhetnek',
	'Not_Authorized_To_Rate' => 'Nem értékelhetsz, mert az azonosítás nem sikerült',
	'Change_Rating' => 'Értékelés megváltoztatása',
	'View_Details' => '<a href="%s" title="Részletek megtekintése">Bővebb információk megtekintése</a>', //%s = detailed URL
	'View_Details_2' => '<a href="%s" title="Részletek megtekintése">Bővebb információk megtekintése</a>', //%s = detailed URL
	'Username_Gave_Rate_of_Max' => '<b>%s</b> értékelte ezt a témát ennyire: <b>%d</b> a maximum ennyiből: <b>%d</b> ekkor: %s.', //%s = username, %d = user rate, %d = max rate, %s = date with create_date()
	'Detailed_Rating' => 'Részletezett értékelés',
	'Details_For_Topic' => 'Részletes értékelési adatok - &nbsp;&raquo;&nbsp;<b>%s</b>', //%s = topic title
	'Or_Someone_From_IP' => '(ip logged)', // makes it smaller for smaller res screens
	'Disable_Rating_ON' => 'Értékelés tiltása a hozzászólásban',
	'Summary' => 'Értékelés áttekintő',
	'Topic_Rating_Details' => 'Témaértékelés részletek',

	'Anonymous' => 'Névtelen',
	'All_Forums' => 'Összes fórum',

	'Max_Rate' => 'Maximum értékelés',
	'User_Rate' => 'Felhasználó értékelése',
	'Rate_Date' => 'Értékelés dátuma',
	'Rate_Time' => 'Értékelés ideje',
	'Rate_Order' => 'Értékelés száma',

	'No_Topics_Rated' => 'Nem lett téma értékelve',
	'Top_Topics' => 'Top %d legjobbra értékelt téma', //%d = number of topics
	'Top_Topics_For_Forum' => 'Top %d értékelt téma a(z) %s fórumban', //%d = number of topics, %s is forum name
	'For_Forum' => 'csak %s fórum', //%s = forum name
	'Last_Rated' => 'Utoljára értékelt',
	'Number_of_Rates' => '# értékelés',
	'Rating' => 'Értékelés',
	'Min' => 'Min',
	'Max' => 'Max',
	'Min_Rating' => 'Minimum értékelés',
	'By_Forum' => 'Rendezés fórum alapján',
	'Details_For_Topic' => '<b>%s</b>', //%s = topic title

//admin
	'Status' => 'Állapot',
	'Auth_Description' => 'Meghatározások',
	'NONE' => 'Értékelés letiltva; nem jelenik meg az értékelési eszköztár a témák alatt',
	'ALL' => 'Összes felhasználó értékelhet és láthatja az értékelési eszköztárat, beleértve a névtelen tagokat és a vendégeket is',
	'REG' => 'Csak regisztrált felhasználók értékelhetnek, de mindenki láthatja az eszköztárat',
	'PRIVATE' => 'Csak regisztrált felhasználók láthatják az eszköztárat, és értékelhetnek',
	'MOD' => 'Csak a fórum moderátorai és az adminisztrátorok értékelhetnek, de mindenki láthatja az eszköztárat',
	'ADMIN' => 'Csak az adminisztrátorok értekelhetnek, de mindenki láthatja az eszköztárat',
	'Allow_Poster_To_Disable_Rating' => 'Szerzők letilthatják az értékelést saját témáiknál',
	'Allow_Detailed_Ratings_Page' => 'Felhasználók megtekinthetik a bővebb értékelési oldalt',
	'Max_Rating' => 'Max értékelés (1 to MAX)',
	'Allow_Users_To_ReRate' => 'Felhasználók változtathatják az értékelésüket',
	'Check_Anon_IP' => 'Névtelen felhasználók IP-jének ellenőrzése értékeléskor, hogy ellenőrizze, nem-e szavazott-e korábban',
	'Anon_Rate_ID' => 'Következő névtelen felhasználó értékelésének IP-je.<br />Ne változtasd meg, kivéve, ha tudod, hogy mit csinálsz, és tényleg szükséges.<br />Nagyobb értékre állítani a jelenlegi értéknél nem ajánlott.',
	'Big_Page_Number' => 'Megjelenített témák száma az értékelt témák oldalon (amennyiben használod)',
	'Main_Page_Number' => 'Megjelenített témák száma a főoldali megjelenítőben (amennyiben használod)',
	'Header_Page_Number' => 'Megjelenített témák száma a fejléc megjelenítőben (amennyiben használd)',
	'Mass_Update' => 'Halmozott frissítés',
	'Purge_Old_Ratings' => 'Régi értékelések tisztítása',
	'Min_Rates' => 'Minimum értékelések száma, mielőtt a témát megjeleníti a legjobbra értékelt témák listájában',
	'Purge' => 'Tisztítás',
	'Purged' => 'Tisztítva',
	'Purge_Desc' => 'Törölt témák értékelésének tisztítása, amik valahogy megmaradtak a téma törlése után is.',
	'Clear' => 'Törlés',
	'Clear_Desc' => 'Törli az <b>ÖSSZES</b> értékelést. Csak akkor végezd el a műveletet, ha szokatlan problémáid vannak, vagy ha <b>törölni</b> szeretnéd az értékeléseket. Kattints a mezőre, és írj bele IGENt..',
	'Complete' => 'Kész',
	'Authorization' => 'Azonosítás',
	'rate_average' => 'Átlagos értékelés',
	'rate_minimum' => 'Legrosszabb értékelés',
	'rate_maximum' => 'Legjobb értékelés',
	'Number_of_Rates' => 'Értékelések száma',
	'Rank2' => '#',
	'Rating' => 'Értékelés',

//Error Messages
	'Database_Error' => 'Adatbázis hiba',
	'Error_Dbase_Config' => 'Hiba lépett fel a konfigurációs állomány lekérése vagy frissítése közben.',
	'Error_Dbase_Ratings' => 'Hiba lépett fel az értékelési állomány lekérése vagy frissítése közben.',
	'Error_Dbase_Auth' => 'Error retrieving or updating Ratings Authorization data.',
	'No_Topic_ID' => 'Nincs téma kiválasztva a bővebb adatok megtekintéséhez.',
	)
);

?>