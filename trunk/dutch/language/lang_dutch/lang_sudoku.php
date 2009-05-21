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
	'Sudoku_Version' => 'Sudoku Modversie %s &copy; Majorflam 2005 - Laatst geinstalleerde spelpakket: Spelpakket %s',
	'suduko_blank_tile' => 'Klik om een getal in te vullen',
	'suduko_user_tile' => 'Klik om een getal te wijzigen',
	'sudoku_no_tile' => 'Er is geen veld gespecificeerd!',
	'sudoku_input_num' => 'Selecteer een getal om in te vullen in het gekozen veld.',
	'sudoku_no_number' => 'Je moet een getal selecteren om in het gekozen veld in te vullen!',
	'sudoku_instructions' => 'Plaats een getal van 1-9 in elke lege veld zodat elke rij, elke kolom en elk blok van 3 x 3 alle getallen van 1 t/m 9 bevat, Je hebt een paar "start" getallen gekregen om je op weg te helpen en die worden onderstreept weergegeven. Klik op een leeg veld om je getal in te vullen. Als je een fout maakt, klik dan op het getal om een nieuw getal in te vullen.',
	'sudoku_invalid_number' => 'Je hebt een fout getal ingevuld!',
	'sudoku_howto' => 'Hoe te spelen',
	'sudoku_stats' => 'Statistieken',
	'sudoku_statistics' => 'De statistieken worden verzameld over je prestaties bij dit spel en de prestaties van anderen. De Top 10 spelers wordt weergegeven. Elke keer als je een getal invult, krijg je 10 punten. Maar let op! elke keer als je een nummer wijzigt, verlies je 15 punten. Als je het speelveld reset, begin je het spel opnieuw met minus 200 punten.',
	'sudoku_game_info' => 'Spelpakket:<b>%s</b> || Spelnummer:<b>%s</b> || Niveau:<b>%s</b>',
	'sudoku_player_stats' => 'Jouw statistieken',
	'sudoku_leaderboard' => 'Sudoku top 10',
	'sudoku_played' => 'Totaal spellen gespeeld',
	'sudoku_points' => 'Totaal gescoorde punten',
	'sudoku_these_points' => 'Punten - huidige spel',
	'sudoku_lead_played' => 'Spellen gespeeld',
	'sudoku_lead_points' => 'Punten',
	'sudoku_level_easy' => 'Makkelijk',
	'sudoku_level_medium' => 'Gemiddeld',
	'sudoku_level_hard' => 'Moeilijk',
	'sudoku_level_very_hard' => 'Erg moeilijk',
	'sudoku_confirm_reset' => 'Speelveld resetten',
	'sudoku_confirm_reset_text' => 'Weet je zeker dat je dit speelveld wilt resetten? Als je het zeker weet, begin je het spel opnieuw met minus 200 punten.',
	'sudoku_reset_cancelled' => 'Resetten van het speelveld geannuleerd',
	'sudoku_lead_current_game' => 'Nu spelend',
	'sudoku_current_game_text' => 'Pakket:<b>%s ~ </b>Spel#%s</b>',
	'sudoku_nomore_grids' => 'Gefeliciteerd! Je hebt alle spellen uitgespeeld. Neem contact op met de beheerder om meerdere nieuwe spellen te installeren.',
	'sudoku_load_new' => 'Speelveld succesvol uitgespeeld! Laad nieuw speelveld....',
	'sudoku_wrong_numbers'  => 'Je hebt het speelveld uitgespeeld, maar sommige getallen staan op de verkeerde plaats. Er wordt een nieuw veld geladen en de foute getallen worden verwijderd. Elk fout ingevulde getal kost je 20 punten. Er zijn %s getallen verkeerd ingevuld en dit kost je %s punten van het totaal.<br />&nbsp;<br />Laden speelveld...',
	'sudoku_reset_confirmed'  => 'Je speelveld wordt nu gereset! Laden...',
	'sudoku_no_change_starter' => 'Je kan geen startgetal veranderen',
	'sudoku_no_url_tricks' => 'Niet valsspelen!',
	'sudoku_place' => 'Invullen',
	'sudoku_reset_grid' => 'Reset Speelveld',
	'sudoku_who_is_online' => 'Wie speelt er Sudoku',
	'sudoku_total_online' => 'In totaal <b>%s</b> gebruikers hebben Sudoku gespeeld in de laatste 24 uur:',
	'sudoku_logged_in_list' => 'Gebruikers die nu Sudoku spelen:',
	'sudoku_online_explain' => 'Deze gegevens zijn gebaseerd op gebruikers die Sudoku speelde in de afgelopen 5 minuten.',
	'sudoku_game_stats' => 'In totaal hebben, <b>%s</b> gebruikers Sudoku gespeeld op het forum. Ze hebben in totaal <b>%s</b> spellen gespeeld',
	'sudoku_no_blank_starter' =>'Je kan geen getal verwijderen wat niet bestaat!',
	'sudoku_view_all' => 'Bekijk alles',
	'sudoku_buy_number' => 'Koop getal',
	'sudoku_confirm_buy_text' => 'Je hebt aangegeven een getal te willen kopen. Een leeg veld uit het speelveld zal willekeurig worden gekozen, en het correcte getal zal worden ingevuld. Deze actie kost je 30 punten van je totaal. Weet je zeker dat je een getal wilt kopen?',
	'sudoku_buy_cancelled' => 'Je hebt besloten deze keer geen getal te kopen',
	'sudoku_ran_error' => 'Er is een fout opgetreden tijdens de poging om je getal in te vullen. Probeer het opnieuw. Als het probleem blijft, neem dan contact op met de beheerder.',
	'sudoku_ran_success' => 'Je getal is willekeurig gekozen en in het veld ingevuld. Het zal verduidelijkt worden weergegeven.',
	'sudoku_resynch_success' => 'Synchronisatie van de statistieken voltooid. Laden...',
	'sudoku_resynch' => 'Resynch',
// for ver 1.0.5
	'sudoku_reset_game' => 'Reset Sudoku',
	'sudoku_reset_game_text' => 'Weet u zeker dat u het Sudoku wilt resetten? Dit zal alle spelersgegevens uit de database verwijderen en begint het spel opnieuw alsof het opnieuw is geinstalleerd. Alstublieft houdt er rekening mee dat uw spelpakketten geinstalleerd zullen blijven, zo dat het niet nodig zal zijn om de spelpakketten opnieuw te installeren. Deze actie kan niet ongedaan gemaakt worden',
	'sudoku_reset_game_cancelled' => 'Het resetten van de Sudoku is geannuleerd. Er zijn geen veranderingen aangebracht.',
	'sudoku_rest_game_success' => 'Sudoku is nu gereset.',
	)
);

?>