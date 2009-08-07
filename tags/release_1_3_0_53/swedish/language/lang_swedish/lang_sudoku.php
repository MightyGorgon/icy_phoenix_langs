<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_sudoku.php 96 2009-04-27 16:48:19Z Mighty Gorgon $
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
	'Sudoku_Version' => 'Sudoku Mod Version %s &copy Majorflam 2005 - Latest Game Pack Installed: Pack %s',
	'suduko_blank_tile' => 'Klicka f�r att ange Nummer',
	'suduko_user_tile' => 'Klicka h�r f�r att redigera',
	'sudoku_no_tile' => 'Ingen Titel Specificerad!',
	'sudoku_input_num' => 'V�lj �nskat nummer f�r att infoga i den valda plattan.',
	'sudoku_no_number' => 'Du m�ste v�lja ett nummer att placera i den plattan!',
	'sudoku_instructions' => 'Placera en siffra fr�n 1-9 i varje tom cell, s� att varje rad, varje kolumn och varje 3 x 3 block inneh�ller alla siffrorna 1-9. Du har f�tt n�gra "start" nummer f�r att hj�lpa dig, och de visas understrukna. Klicka bara p� en tom cell f�r att infoga ditt nummer. Om du g�r ett misstag, klickar du bara p� nummret igen f�r att inf�ra ett nytt.',
	'sudoku_invalid_number' => 'Du har angett ett ogiltigt nummer!',
	'sudoku_howto' => 'Hur man spelar',
	'sudoku_stats' => 'Statistik',
	'sudoku_statistics' => 'Statistiken samlas in p� ditt resultat i detta spel, och resultatet f�r andra ocks�. De tio b�sta spelarna visas. Varje g�ng du s�tter in ett nummer f�r du 10 po�ng. Men se upp! Varje g�ng du �ndrar ett nummer, f�rlorar du 15 po�ng. Om du �terst�ller systemet, d� startar spelet om igen med minus 200 po�ng.',
	'sudoku_game_info' => 'Spel Paket:<b>%s</b> || Spel Antal:<b>%s</b> || Niv�:<b>%s</b>',
	'sudoku_player_stats' => 'Din Statistik',
	'sudoku_leaderboard' => 'Sudoku Topp 10',
	'sudoku_played' => 'Totala Spelomg�ngar',
	'sudoku_points' => 'Total Po�ng R�kning',
	'sudoku_these_points' => 'Po�ng - Aktuella Spel',
	'sudoku_lead_played' => 'Spelomg�ngar',
	'sudoku_lead_points' => 'Po�ng',
	'sudoku_level_easy' => 'Enkel',
	'sudoku_level_medium' => 'Medium',
	'sudoku_level_hard' => 'Sv�rt',
	'sudoku_level_very_hard' => 'Mycket Sv�rt',
	'sudoku_confirm_reset' => '�terst�lla Spelplanen',
	'sudoku_confirm_reset_text' => '�r du s�ker p� att du vill �terst�lla detta spelplan? Om du g�r det kommer du att starta med minus 200 po�ng.',
	'sudoku_reset_cancelled' => 'Spelplans �terst�llning stoppad.',
	'sudoku_lead_current_game' => 'Nu spelar',
	'sudoku_current_game_text' => 'Paket:<b>%s ~ </b>Spel <b>#%s</b>',
	'sudoku_nomore_grids' => 'Gratulationer! Du har slutf�rt alla spelplaner som �r tillg�ngliga. Kontakta en forum Administrat�r f�r att ladda fler spelplaner.',
	'sudoku_load_new' => 'Spelplan successfullt fullbordad! Laddar nya spelplanen...',
	'sudoku_wrong_numbers' => 'Ni har fullbordad spelplanen, men n�gra siffror inf�rdes p� fel st�lle. Spelplanen kommer nu att laddas igen och fel nummer kommer att tas bort. Detta kommer att kosta dig 20 po�ng f�r varje fel nummer. Det finns %s nummer som inf�rdes felaktigt, och det har kostat dig %s po�ng totalt.<br />&nbsp;<br />Laddar Spelplan...',
	'sudoku_reset_confirmed' => 'Din spelplan kommer nu att �terst�llas. Laddar...',
	'sudoku_no_change_starter' => 'Du kan inte �ndra ett start nummer!',
	'sudoku_no_url_tricks' => 'Inga url tricks, v�nligen!.',
	'sudoku_place' => 'Plats!',
	'sudoku_reset_grid' => '�terst�ll Spelplan',
	'sudoku_who_is_online' => 'Vem spelar Sudoku',
	'sudoku_total_online' => 'Totalt <b>%s</b> anv�ndare har spelat Sudoku under de senaste 24 timmarna:',
	'sudoku_logged_in_list' => 'Anv�ndare som just nu spelar Sudoku:',
	'sudoku_online_explain' => 'Informationen ovan �r baserad p� anv�ndarna som spelade Sudoku under de senaste 5 minuterna.',
	'sudoku_game_stats' => 'Totalt, <b>%s</b> anv�ndare har spelat Sudoku p� webbplatsen. De har spelat <b>%s</b> spel totalt',
	'sudoku_no_blank_starter' => 'Du kan inte radera ett nummer som inte finns!',
	'sudoku_view_all' => 'Visa Alla',
	'sudoku_buy_number' => 'K�p Nummer',
	'sudoku_confirm_buy_text' => 'Du har valt att k�pa ett nummer. En tom ruta fr�n spelplanen kommer att v�ljas ut slumpm�ssigt, och det korrekta antalet inf�ras f�r dig. Denna �tg�rd kommer att kosta dig 30 po�ng fr�n din spelplan totalt. �r du s�ker p� att du vill k�pa ett nummer?',
	'sudoku_buy_cancelled' => 'Du har valt att inte k�pa ett nummer den h�r g�ngen',
	'sudoku_ran_error' => 'Ett fel uppstod samtidigt som du f�rs�kte infoga ditt nummer. V�nligen prova igen. Om problemet kvarst�r, kontakta en Forum Administrat�r',
	'sudoku_ran_success' => 'Ditt nummer har valts ut slumpm�ssigt och inf�res p� din spelplan. Det kommer att belysa din information',
	'sudoku_resynch_success' => 'Synkronisering av statistik klar. Omdirigerar...',
	'sudoku_resynch' => 'Resync',
// for ver 1.0.5
	'sudoku_reset_game' => '�terst�ll Sudoku Spelet',
	'sudoku_reset_game_text' => '�r du s�ker p� att du vill �terst�lla Sudoku Spelet? Detta tar bort alla spelares data fr�n databasen, och startar om spelet igen som om det vore en ny installation. Observera att dina Game Packs kommer att f�rbli or�rda, s� det finns ingen anledning att p� nytt installera Game Packs. Denna �tg�rd kan inte �ngras',
	'sudoku_reset_game_cancelled' => 'Spel �terst�llning Avbruten. Inga �ndringar har gjorts.',
	'sudoku_rest_game_success' => 'Sudoku Spelet �r nu �terst�llt.',
	)
);

?>