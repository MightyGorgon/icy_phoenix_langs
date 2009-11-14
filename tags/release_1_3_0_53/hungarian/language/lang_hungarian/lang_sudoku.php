<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 110 2009-07-14 08:09:47Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
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

$lang = array_merge($lang, array (
  'Sudoku_Version' => 'Sudoku Mod Version %s &copy Majorflam 2005 - Latest Game Pack Installed: Pack %s',
  'suduko_blank_tile' => 'Kattints ide egy szám megadásához',
  'suduko_user_tile' => 'Kattints ide a szerkesztéshez',
  'sudoku_no_tile' => 'Nincs kõ megadva!',
  'sudoku_input_num' => 'Jelöld ki azt a számot, amit a kiválasztott kõre kell tenni.',
  'sudoku_no_number' => 'Muszáj egy számot kiválasztanod!',
  'sudoku_instructions' => 'Helyezz minden kõre egy-egy számot 1-9-ig minden 3x3-az kockába úgy, hogy 1-9-ig minden szám szerepeljen benne. Az "induló" számok segítenek abban, hogy kell kirakni a táblát. Egyszerûen kattints egy fehér cellára, és válaszd ki a beszúrandó számot. Ha elrontottál egyet, akkor ismét válaszd ki, és válasz egy másikat.',
  'sudoku_invalid_number' => 'Érvénytelen számot adtál meg!',
  'sudoku_howto' => 'Hogyan játszunk',
  'sudoku_stats' => 'Statisztika',
  'sudoku_statistics' => 'A statisztika megmutatja, hogy milyen teljesítményt nyújtasz ebben a játékban, illetve a többiekhez viszonyítva mennyire megy ez a játék. A Top10 játékosokat is itt láthatod. Mindig, amikor elhelyezel egy számot, kapsz 10 pontot. De vigyázz! Amikor meg kell változtatnod egy számot 10 pontot levonok! Ha letörlöd a táblát, és újrakezded a játékot 200 pontot levonok.',
  'sudoku_game_info' => 'Játékcsomag:<b>%s</b> || Játékszám:<b>%s</b> || Szint:<b>%s</b>',
  'sudoku_player_stats' => 'A statisztikád',
  'sudoku_leaderboard' => 'Sudoku Top 10',
  'sudoku_played' => 'Összes lejátszott játék',
  'sudoku_points' => 'Összes elért pont',
  'sudoku_these_points' => 'Pontok - Jelenlegi játék',
  'sudoku_lead_played' => 'Játszott játékok',
  'sudoku_lead_points' => 'Pontok',
  'sudoku_level_easy' => 'Könnyû',
  'sudoku_level_medium' => 'Közepes',
  'sudoku_level_hard' => 'Nehéz',
  'sudoku_level_very_hard' => 'Bonyolult',
  'sudoku_confirm_reset' => 'Tábla törlése',
  'sudoku_confirm_reset_text' => 'Tényleg szeretnéd a táblát törölni? Ha az egészet elölrõl akarod kezdeni, levonok tõled 200 pontot.',
  'sudoku_reset_cancelled' => 'Táblatörlés visszavonva.',
  'sudoku_lead_current_game' => 'Most játszik',
  'sudoku_current_game_text' => 'Csomag:<b>%s ~ </b>Játék <b>#%s</b>',
  'sudoku_nomore_grids' => 'Gratulálunk! Minden táblát kiraktál. Kérlek szólj a fórum adminisztrátorának, hogy töltsön föl még több táblát',
  'sudoku_load_new' => 'A táblát teljesen kiraktad! Új tábla töltése...',
  'sudoku_wrong_numbers' => 'Teljesen kiraktad a táblát, de néhány számot rossz helyre helyeztél el. A táblát most újratöltöm, és a hibás számokat eltávolítom. Minden rossz számért 20 pontot levonok. %s számot tettél rossz helyre, így összesen %s pontot vonok le.<br />&nbsp;<br />Tábla töltése...',
  'sudoku_reset_confirmed' => 'A tábla törölve lett. Töltés...',
  'sudoku_no_change_starter' => 'Az induló számokat nem változtathatod meg!',
  'sudoku_no_url_tricks' => 'Kérlek ne trükközz az URL-ekkel!',
  'sudoku_place' => 'Elhelyez!',
  'sudoku_reset_grid' => 'Tábla törlése',
  'sudoku_who_is_online' => 'Ki sudokuzik?',
  'sudoku_total_online' => 'Összesen <b>%s</b> felhasználó játszott sudokut az elmúlt 24 órában:',
  'sudoku_logged_in_list' => 'Jelenleg sudokut játszanak:',
  'sudoku_online_explain' => 'Ez az adat az elmúlt 5 percben sudokuzó felhasználókat jelenti.',
  'sudoku_game_stats' => 'Összesen, <b>%s</b> felhasználó sudokuzott ezen az oldalon, és <b>%s</b> felhasználó ki tudta rakni.',
  'sudoku_no_blank_starter' => 'Nem tudsz olyan számot törölni, amelyik nem létezik!',
  'sudoku_view_all' => 'Mind megnéz',
  'sudoku_buy_number' => 'Szám vásárlása',
  'sudoku_confirm_buy_text' => 'Szeretnél venni egy helyes számot? Válassz ki egy fehér cellát, vagy véletlenszerûen kiválasztok egyet. Ez a mûvelet 30 pontba kerül. Tényleg szeretnél venni egy számot?',
  'sudoku_buy_cancelled' => 'Azt választottad, hogy mégsem veszel most számot',
  'sudoku_ran_error' => 'Valami hiba van a megfelelõ szám megadásával. Kérlek próbáld meg még egyszer. Ha a hiba állandóan elõjön, kérlek szólj a fórum adminisztrátorának',
  'sudoku_ran_success' => 'Véletlenszerûen ki lett választva egy szám, és el lett helyezve a táblán. Az új információ ki lett emelve',
  'sudoku_resynch_success' => 'A statisztika szinkronizációja teljes. Átirányítás...',
  'sudoku_resynch' => 'Szinkronizál',
  'sudoku_reset_game' => 'Sudoku játék törlése',
  'sudoku_reset_game_text' => 'Tényleg újra szeretnéd indítani a sudoku játékot? Ez a mûvelet eltávolít minden játékinfót és sikeresen kirakott játékot, és friss játékot tudsz kezdeni. SZeretnélek figyelmeztetni, hogy a játékcsomagok érintetlenek, és nem kell azokat újratelepíteni. Ez a mûvelet nem visszavonható.',
  'sudoku_reset_game_cancelled' => 'Játék reset visszavonása. Nem történt semmi változtatás.',
  'sudoku_rest_game_success' => 'A sudoku játék újra lett indítva.',
))
?>