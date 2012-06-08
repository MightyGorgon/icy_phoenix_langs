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
* Majorflam - (majorflam@majormod.com) - (http://majormod.com)
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
	'Sudoku_Version' => 'Sudoku Mod Version %s &copy; Majorflam 2005 - Latest Game Pack Installed: Pack %s',
	'suduko_blank_tile' => 'Kattints szám beírásához',
	'suduko_user_tile' => 'Kattints a szerkesztéshez',
	'sudoku_no_tile' => 'Nincs mező kijelölve!',
	'sudoku_input_num' => 'Válaszd ki a beírni kívánt számot a kiválasztott mezőbe.',
	'sudoku_no_number' => 'Választanod kell egy számot a mezőn való elhelyezéséhez!',
	'sudoku_instructions' => 'Minden mezőbe írni kell egy számot 1-9 úgy, hogy minden egyes sorban, oszlopban és 3x3 mezőben 1-9ig az összes szám benne legyen. Néhány "kezdő" szám megvan adva segítségként, ezek alá vannak húzva. Szám beírásához kattints egy üres mezőre. Ha hibás számot írsz be, simán kattints rá, és írj be egy új számot.',
	'sudoku_invalid_number' => 'Érvénytelen számot adtál meg!',
	'sudoku_howto' => 'Játékszabály',
	'sudoku_stats' => 'Statisztika',
	'sudoku_statistics' => 'A statisztika a te és a többi felhasználók teljesítménye alapján készül. A statisztikában a top 10 játékos látható. Minden egyes alkalommal, mikor beírsz egy számot, 10 pontot kapsz. De vigyázz! Minden alkalommal, mikor megváltoztatsz egy számot, 15 pontot veszítesz. Ha újrakezded ezt a táblát, akkor 200 pont levonással kezded előről.',
	'sudoku_game_info' => 'Játékcsomag:<b>%s</b> || Játékszám:<b>%s</b> || Szint:<b>%s</b>',
	'sudoku_player_stats' => 'Statisztikád',
	'sudoku_leaderboard' => 'Sudoku Top 10',
	'sudoku_played' => 'Összesen játszott menet',
	'sudoku_points' => 'Összesen szerzett pont',
	'sudoku_these_points' => 'Pontok - Jelenlegi menet',
	'sudoku_lead_played' => 'Játszott menetek',
	'sudoku_lead_points' => 'Pontok',
	'sudoku_level_easy' => 'Könnyű',
	'sudoku_level_medium' => 'Közepes',
	'sudoku_level_hard' => 'Nehéz',
	'sudoku_level_very_hard' => 'Nagyon nehéz',
	'sudoku_confirm_reset' => 'Újrakezdés',
	'sudoku_confirm_reset_text' => 'Biztosan újra szeretnéd kezdeni? Ha igen, 200 pont levonással indulsz.',
	'sudoku_reset_cancelled' => 'Újraindítás megszakítva.',
	'sudoku_lead_current_game' => 'Most játszod',
	'sudoku_current_game_text' => 'Csomag:<b>%s ~ </b>Menet <b>#%s</b>',
	'sudoku_nomore_grids' => 'Gratulálunk! Az összes táblát lejátszottad. Lépj kapcsolatba az oldal adminisztrátorával még több tábláért.',
	'sudoku_load_new' => 'Tábla sikeresen lejátszva! Új tábla betöltése...',
	'sudoku_wrong_numbers' => 'Kitöltötted a táblát, de néhány szám rossz helyre került. A tábla most újra lesz töltve, a rossz helyre írt számok pedig törölve lesznek. 20 pontot levon a rendszer minden rossz számért. Összesen %s szám lett rossz helyre írva, ami %s pont levonást jelent.<br />&nbsp;<br />Tábla betöltése...',
	'sudoku_reset_confirmed' => 'A tábla újratöltése...',
	'sudoku_no_change_starter' => 'Kezdő számot nem lehet átírni!',
	'sudoku_no_url_tricks' => 'Nincs url csalás!.',
	'sudoku_place' => 'Mező!',
	'sudoku_reset_grid' => 'Tábla újratöltése',
	'sudoku_who_is_online' => 'Ki játszik Sudokut',
	'sudoku_total_online' => 'Összesen <b>%s</b> felhasználó játszott Sudokut az elmúlt 24 órában:',
	'sudoku_logged_in_list' => 'Jelenleg Sudokut játszó felhasználók:',
	'sudoku_online_explain' => 'Ez az adat az elmúlt 5 percben Sudokut játszott felhasználók alapján készült.',
	'sudoku_game_stats' => 'Összesen <b>%s</b> felhasználó játszott Sudokut az oldalon, és <b>%s</b> menetet játszottak összesen',
	'sudoku_no_blank_starter' => 'Nem törölhetsz nemlétező számot!',
	'sudoku_view_all' => 'Összes megtekintése',
	'sudoku_buy_number' => 'Szám vásárlása',
	'sudoku_confirm_buy_text' => 'Azt választottad, hogy veszel egy számot. Egy üres mező véletlenszerűen ki lesz választva, és a helyes szám beillesztésre kerül. Ez neked a táblán elért pontjaidból 30 pont levonásba kerül. Biztosan szeretnél egy számot vásárolni?',
	'sudoku_buy_cancelled' => 'Úgy döntöttél, nem vásárolsz egy számot',
	'sudoku_ran_error' => 'Hiba történt a szá beillesztése közben. Kérjük, próbáld meg újra. Ha a probléma továbbra is fennáll, értesítsd az oldal adminisztrátorát',
	'sudoku_ran_success' => 'Egy szám kiválasztásra került, és véletlenszerűen be lett írva a táblára. A szám ki lesz emelve.',
	'sudoku_resynch_success' => 'Statisztika szinkronizálása kész. Átirányítás...',
	'sudoku_resynch' => 'Újraszinkronizálás',
// for ver 1.0.5
	'sudoku_reset_game' => 'Sudoku játék újraindítása',
	'sudoku_reset_game_text' => 'Biztosan újra szeretnéd indítani a Sudoku játékot? Ezzel az összes felhasználói adat törlésre kerül az adatbázisból, és előről indul a játék, mint egy új telepítés után. Kérjük vedd figyelembe, hogy ez a Játékcsomagokat nem érinti, ezért a Játékcsomagokat nem kell újratelepíteni. A műveletet később nem lehet visszavonni',
	'sudoku_reset_game_cancelled' => 'Újraindítás megszakítva. Nem történt változás.',
	'sudoku_rest_game_success' => 'Sudoku játék újraindítása.',
	)
);

?>