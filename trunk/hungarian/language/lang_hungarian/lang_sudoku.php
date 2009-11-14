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
  'suduko_blank_tile' => 'Kattints ide egy sz�m megad�s�hoz',
  'suduko_user_tile' => 'Kattints ide a szerkeszt�shez',
  'sudoku_no_tile' => 'Nincs k� megadva!',
  'sudoku_input_num' => 'Jel�ld ki azt a sz�mot, amit a kiv�lasztott k�re kell tenni.',
  'sudoku_no_number' => 'Musz�j egy sz�mot kiv�lasztanod!',
  'sudoku_instructions' => 'Helyezz minden k�re egy-egy sz�mot 1-9-ig minden 3x3-az kock�ba �gy, hogy 1-9-ig minden sz�m szerepeljen benne. Az "indul�" sz�mok seg�tenek abban, hogy kell kirakni a t�bl�t. Egyszer�en kattints egy feh�r cell�ra, �s v�laszd ki a besz�rand� sz�mot. Ha elrontott�l egyet, akkor ism�t v�laszd ki, �s v�lasz egy m�sikat.',
  'sudoku_invalid_number' => '�rv�nytelen sz�mot adt�l meg!',
  'sudoku_howto' => 'Hogyan j�tszunk',
  'sudoku_stats' => 'Statisztika',
  'sudoku_statistics' => 'A statisztika megmutatja, hogy milyen teljes�tm�nyt ny�jtasz ebben a j�t�kban, illetve a t�bbiekhez viszony�tva mennyire megy ez a j�t�k. A Top10 j�t�kosokat is itt l�thatod. Mindig, amikor elhelyezel egy sz�mot, kapsz 10 pontot. De vigy�zz! Amikor meg kell v�ltoztatnod egy sz�mot 10 pontot levonok! Ha let�rl�d a t�bl�t, �s �jrakezded a j�t�kot 200 pontot levonok.',
  'sudoku_game_info' => 'J�t�kcsomag:<b>%s</b> || J�t�ksz�m:<b>%s</b> || Szint:<b>%s</b>',
  'sudoku_player_stats' => 'A statisztik�d',
  'sudoku_leaderboard' => 'Sudoku Top 10',
  'sudoku_played' => '�sszes lej�tszott j�t�k',
  'sudoku_points' => '�sszes el�rt pont',
  'sudoku_these_points' => 'Pontok - Jelenlegi j�t�k',
  'sudoku_lead_played' => 'J�tszott j�t�kok',
  'sudoku_lead_points' => 'Pontok',
  'sudoku_level_easy' => 'K�nny�',
  'sudoku_level_medium' => 'K�zepes',
  'sudoku_level_hard' => 'Neh�z',
  'sudoku_level_very_hard' => 'Bonyolult',
  'sudoku_confirm_reset' => 'T�bla t�rl�se',
  'sudoku_confirm_reset_text' => 'T�nyleg szeretn�d a t�bl�t t�r�lni? Ha az eg�szet el�lr�l akarod kezdeni, levonok t�led 200 pontot.',
  'sudoku_reset_cancelled' => 'T�blat�rl�s visszavonva.',
  'sudoku_lead_current_game' => 'Most j�tszik',
  'sudoku_current_game_text' => 'Csomag:<b>%s ~ </b>J�t�k <b>#%s</b>',
  'sudoku_nomore_grids' => 'Gratul�lunk! Minden t�bl�t kirakt�l. K�rlek sz�lj a f�rum adminisztr�tor�nak, hogy t�lts�n f�l m�g t�bb t�bl�t',
  'sudoku_load_new' => 'A t�bl�t teljesen kiraktad! �j t�bla t�lt�se...',
  'sudoku_wrong_numbers' => 'Teljesen kiraktad a t�bl�t, de n�h�ny sz�mot rossz helyre helyezt�l el. A t�bl�t most �jrat�lt�m, �s a hib�s sz�mokat elt�vol�tom. Minden rossz sz�m�rt 20 pontot levonok. %s sz�mot tett�l rossz helyre, �gy �sszesen %s pontot vonok le.<br />&nbsp;<br />T�bla t�lt�se...',
  'sudoku_reset_confirmed' => 'A t�bla t�r�lve lett. T�lt�s...',
  'sudoku_no_change_starter' => 'Az indul� sz�mokat nem v�ltoztathatod meg!',
  'sudoku_no_url_tricks' => 'K�rlek ne tr�kk�zz az URL-ekkel!',
  'sudoku_place' => 'Elhelyez!',
  'sudoku_reset_grid' => 'T�bla t�rl�se',
  'sudoku_who_is_online' => 'Ki sudokuzik?',
  'sudoku_total_online' => '�sszesen <b>%s</b> felhaszn�l� j�tszott sudokut az elm�lt 24 �r�ban:',
  'sudoku_logged_in_list' => 'Jelenleg sudokut j�tszanak:',
  'sudoku_online_explain' => 'Ez az adat az elm�lt 5 percben sudokuz� felhaszn�l�kat jelenti.',
  'sudoku_game_stats' => '�sszesen, <b>%s</b> felhaszn�l� sudokuzott ezen az oldalon, �s <b>%s</b> felhaszn�l� ki tudta rakni.',
  'sudoku_no_blank_starter' => 'Nem tudsz olyan sz�mot t�r�lni, amelyik nem l�tezik!',
  'sudoku_view_all' => 'Mind megn�z',
  'sudoku_buy_number' => 'Sz�m v�s�rl�sa',
  'sudoku_confirm_buy_text' => 'Szeretn�l venni egy helyes sz�mot? V�lassz ki egy feh�r cell�t, vagy v�letlenszer�en kiv�lasztok egyet. Ez a m�velet 30 pontba ker�l. T�nyleg szeretn�l venni egy sz�mot?',
  'sudoku_buy_cancelled' => 'Azt v�lasztottad, hogy m�gsem veszel most sz�mot',
  'sudoku_ran_error' => 'Valami hiba van a megfelel� sz�m megad�s�val. K�rlek pr�b�ld meg m�g egyszer. Ha a hiba �lland�an el�j�n, k�rlek sz�lj a f�rum adminisztr�tor�nak',
  'sudoku_ran_success' => 'V�letlenszer�en ki lett v�lasztva egy sz�m, �s el lett helyezve a t�bl�n. Az �j inform�ci� ki lett emelve',
  'sudoku_resynch_success' => 'A statisztika szinkroniz�ci�ja teljes. �tir�ny�t�s...',
  'sudoku_resynch' => 'Szinkroniz�l',
  'sudoku_reset_game' => 'Sudoku j�t�k t�rl�se',
  'sudoku_reset_game_text' => 'T�nyleg �jra szeretn�d ind�tani a sudoku j�t�kot? Ez a m�velet elt�vol�t minden j�t�kinf�t �s sikeresen kirakott j�t�kot, �s friss j�t�kot tudsz kezdeni. SZeretn�lek figyelmeztetni, hogy a j�t�kcsomagok �rintetlenek, �s nem kell azokat �jratelep�teni. Ez a m�velet nem visszavonhat�.',
  'sudoku_reset_game_cancelled' => 'J�t�k reset visszavon�sa. Nem t�rt�nt semmi v�ltoztat�s.',
  'sudoku_rest_game_success' => 'A sudoku j�t�k �jra lett ind�tva.',
))
?>