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
	'suduko_blank_tile' => 'Klicka för att ange nummer',
	'suduko_user_tile' => 'Klicka här för att redigera',
	'sudoku_no_tile' => 'Ingen titel specificerad!',
	'sudoku_input_num' => 'Välj önskat nummer för att infoga i den valda plattan.',
	'sudoku_no_number' => 'Du måste välja ett nummer att placera i den plattan!',
	'sudoku_instructions' => 'Placera en siffra från 1-9 i varje tom cell, så att varje rad, varje kolumn och varje 3 x 3 block innehåller alla siffrorna 1-9. Du har fått några "start" nummer för att hjälpa dig, och de visas understrukna. Klicka bara på en tom cell för att infoga ditt nummer. Om du gör ett misstag, klickar du bara på nummret igen för att införa ett nytt.',
	'sudoku_invalid_number' => 'Du har angett ett ogiltigt nummer!',
	'sudoku_howto' => 'Hur man spelar',
	'sudoku_stats' => 'Statistik',
	'sudoku_statistics' => 'Statistiken samlas in på ditt resultat i detta spel, och resultatet för andra också. De tio bästa spelarna visas. Varje gång du sätter in ett nummer får du 10 poäng. Men se upp! Varje gång du ändrar ett nummer, förlorar du 15 poäng. Om du återställer systemet, då startar spelet om igen med minus 200 poäng.',
	'sudoku_game_info' => 'Spel Paket:<b>%s</b> || Spel Antal:<b>%s</b> || Nivå:<b>%s</b>',
	'sudoku_player_stats' => 'Din statistik',
	'sudoku_leaderboard' => 'Sudoku Topp 10',
	'sudoku_played' => 'Totala spelomgångar',
	'sudoku_points' => 'Total poäng räkning',
	'sudoku_these_points' => 'Poäng - Aktuella Spel',
	'sudoku_lead_played' => 'Spelomgångar',
	'sudoku_lead_points' => 'Poäng',
	'sudoku_level_easy' => 'Enkel',
	'sudoku_level_medium' => 'Medium',
	'sudoku_level_hard' => 'Svårt',
	'sudoku_level_very_hard' => 'Mycket svårt',
	'sudoku_confirm_reset' => 'Återställa Spelplanen',
	'sudoku_confirm_reset_text' => 'Är du säker på att du vill återställa denna spelplan? Om du gör det kommer du att starta med minus 200 poäng.',
	'sudoku_reset_cancelled' => 'Spelplans återställning stoppad.',
	'sudoku_lead_current_game' => 'Nu spelar',
	'sudoku_current_game_text' => 'Paket:<b>%s ~ </b>Spel <b>#%s</b>',
	'sudoku_nomore_grids' => 'Gratulationer! Du har slutfört alla spelplaner som är tillgängliga. Kontakta en forum Administratör för att ladda fler spelplaner.',
	'sudoku_load_new' => 'Spelplan successfullt fullbordad! Laddar nya spelplanen...',
	'sudoku_wrong_numbers' => 'Ni har fullbordad spelplanen, men några siffror infördes på fel ställe. Spelplanen kommer nu att laddas igen och fel nummer kommer att tas bort. Detta kommer att kosta dig 20 poäng för varje fel nummer. Det finns %s nummer som infördes felaktigt, och det har kostat dig %s poäng totalt.<br />&nbsp;<br />Laddar Spelplan...',
	'sudoku_reset_confirmed' => 'Din spelplan kommer nu att återställas. Laddar...',
	'sudoku_no_change_starter' => 'Du kan inte ändra ett start nummer!',
	'sudoku_no_url_tricks' => 'Inga url tricks, vänligen!.',
	'sudoku_place' => 'Plats!',
	'sudoku_reset_grid' => 'Återställ Spelplan',
	'sudoku_who_is_online' => 'Vem spelar Sudoku',
	'sudoku_total_online' => 'Totalt <b>%s</b> användare har spelat Sudoku under de senaste 24 timmarna:',
	'sudoku_logged_in_list' => 'Användare som just nu spelar Sudoku:',
	'sudoku_online_explain' => 'Informationen ovan är baserad på användarna som spelade Sudoku under de senaste 5 minuterna.',
	'sudoku_game_stats' => 'Totalt, <b>%s</b> användare har spelat Sudoku på webbplatsen. De har spelat <b>%s</b> spel totalt',
	'sudoku_no_blank_starter' => 'Du kan inte radera ett nummer som inte finns!',
	'sudoku_view_all' => 'Visa alla',
	'sudoku_buy_number' => 'Köp nummer',
	'sudoku_confirm_buy_text' => 'Du har valt att köpa ett nummer. En tom ruta från spelplanen kommer att väljas ut slumpmässigt, och det korrekta antalet införas för dig. Denna åtgärd kommer att kosta dig 30 poäng från din spelplan totalt. Är du säker på att du vill köpa ett nummer?',
	'sudoku_buy_cancelled' => 'Du har valt att inte köpa ett nummer den här gången',
	'sudoku_ran_error' => 'Ett fel uppstod samtidigt som du försökte infoga ditt nummer. Vänligen prova igen. Om problemet kvarstår, kontakta en Forum Administratör',
	'sudoku_ran_success' => 'Ditt nummer har valts ut slumpmässigt och införes på din spelplan. Det kommer att belysa din information',
	'sudoku_resynch_success' => 'Synkronisering av statistik klar. Omdirigerar...',
	'sudoku_resynch' => 'Resync',
// for ver 1.0.5
	'sudoku_reset_game' => 'Återställ Sudoku Spelet',
	'sudoku_reset_game_text' => 'Är du säker på att du vill återställa Sudoku Spelet? Detta tar bort alla spelares data från databasen, och startar om spelet igen som om det vore en ny installation. Observera att dina Game Packs kommer att förbli orörda, så det finns ingen anledning att på nytt installera Game Packs. Denna åtgärd kan inte ängras',
	'sudoku_reset_game_cancelled' => 'Spel återställning avbruten. Inga ändringar har gjorts.',
	'sudoku_rest_game_success' => 'Sudoku Spelet är nu återställt.',
	)
);

?>