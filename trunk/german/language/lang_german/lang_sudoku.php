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
	'Sudoku_Version' => 'Sudoku Mod Version %s &copy; Majorflam 2005 - Aktuellstes Game Pack installiert: Pack %s',
	'suduko_blank_tile' => 'Klicke, um eine Zahl einzugeben',
	'suduko_user_tile' => 'Klicke, um eine Zahl zu ändern',
	'sudoku_no_tile' => 'Kein Feld angegeben!',
	'sudoku_input_num' => 'Wähle die gewünschte Zahl, um sie in das gewählte Feld einzufügen.',
	'sudoku_no_number' => 'Du musst eine Zahl wählen, die in dieses Feld soll!',
	'sudoku_instructions' => 'In dieses Raster müssen die Zahlen von 1-9 so eingefügt werden, dass <ul><li>in jeder Zeile, <li>in jeder Reihe und <li>in jedem der neun Unterquadrate</ul> alle Zahlen von 1-9 genau einmal enthalten sind.<br /><br />Ein paar Startfelder sind bereits als kleine Hilfe vorgegeben und sind unterstrichen. Klicke einfach auf ein leeres Feld und wähle die entsprechende Zahl im Drop-Down-Menü unter dem Spielfeld. Wenn du einen Fehler machst dann klicke einfach auf die Zahl und ändere diese.',
	'sudoku_invalid_number' => 'Du hast eine ungültige Zahl angegeben!',
	'sudoku_howto' => 'Spielanleitung',
	'sudoku_stats' => 'Statistiken',
	'sudoku_statistics' => 'Die Statistiken werden anhand deines Abschneidens, aber auch dem Abschneiden der anderen beim diesem Spiel berechnet. Die jeweils 10 besten Spieler werden unten angezeigt. Jedes Mal, wenn du eine Zahl einfügst, bekommst du 10 Punkte. Aber Vorsicht! Jedes Mal, wenn du eine Zahl änderst, verlierst Du 15 Punkte. Hast du das Puzzel komplett ausgefüllt, wird überprüft ob alle Zahlen richtig sind. Für jede falsche Zahl bekommst Du 20 Punkte abgezogen, sind alle Zahlen richtig, wird ein neues Puzzle geladen. Wenn du das gesamte Puzzle zurücksetzt, verlierst Du 200 Punkte und beginnst das Puzzle erneut.<br /><br />Du brauchst ein Puzzle nicht auf einmal zu lösen. Alle Einträge, die du machst, werden gespeichert. So kannst du weiterrätseln, wenn du das nächste Mal vorbeikommst.<br /><br /><strong>Punkte...</strong> einfügen: <b>+10</b>&nbsp;&nbsp;&nbsp;ändern: <b>-15</b>&nbsp;&nbsp;&nbsp;löschen (E): <b>-25</b>&nbsp;&nbsp;&nbsp;kaufen: <b>-30</b>',
	'sudoku_game_info' => 'Puzzle-Pack:<b>%s</b> || Puzzlenummer:<b>%s</b> || Level:<b>%s</b>',
	'sudoku_player_stats' => 'Deine Statistiken',
	'sudoku_leaderboard' => 'Sudoku Top 10',
	'sudoku_played' => 'Gesamte gelöste Puzzle',
	'sudoku_points' => 'Gesamte erzielte Punkte',
	'sudoku_these_points' => 'Punkte - Aktuelles Spiel',
	'sudoku_lead_played' => 'Puzzle gelöst',
	'sudoku_lead_points' => 'Punkte',
	'sudoku_level_easy' => 'Einfach',
	'sudoku_level_medium' => 'Mittel',
	'sudoku_level_hard' => 'Schwer',
	'sudoku_level_very_hard' => 'Sehr schwer',
	'sudoku_confirm_reset' => 'Felder zurücksetzen',
	'sudoku_confirm_reset_text' => 'Bist du sicher, dass du die Felder zurücksetzen willst? Du wirst dann das Puzzle mit -200 Punkten beginnen.',
	'sudoku_reset_cancelled' => 'Feldzurücksetzung abgebrochen.',
	'sudoku_lead_current_game' => 'Spielt gerade',
	'sudoku_current_game_text' => 'Pack:<b>%s ~ </b>Puzzle <b>#%s</b>',
	'sudoku_nomore_grids' => 'Herzlichen Glückwunsch! Du hast alle verfügbaren Puzzle gelöst. Wende Dich an den Administrator, damit er neue Puzzle für Dich erstellt.',
	'sudoku_load_new' => 'Puzzle erfolgreich abgeschlossen! Ein neues Puzzle wird geladen...',
	'sudoku_wrong_numbers' => 'Du hast das Puzzle abgeschlossen, aber einige der Zahlen waren an den falschen Stellen. Die falschen Zahlen wurden entfernt und das Puzzle wird neu geladen. Für jede falsche Zahl werden Dir 20 Punkte abgezogen.<br /><br />Es waren %s Zahlen falsch eingetragen, also kostet Dich das %s insgesamt Punkte.<br />&nbsp;<br />Puzzle lädt...',
	'sudoku_reset_confirmed' => 'Dein Puzzle wird nun zurückgesetzt. Einen Moment bitte...',
	'sudoku_no_change_starter' => 'Du kannst eine vorgegebene Zahl nicht verändern!',
	'sudoku_no_url_tricks' => 'Keine URL-Tricks, bitte!.',
	'sudoku_place' => 'Einfügen!',
	'sudoku_reset_grid' => 'Puzzle zurücksetzen',
	'sudoku_who_is_online' => 'Wer spielt Sudoku',
	'sudoku_total_online' => 'In den letzten 24 Stunden haben insgesamt <b>%s</b> Benutzer Sudoku gespielt:',
	'sudoku_logged_in_list' => 'Benutzer, die gerade Sudoku spielen:',
	'sudoku_online_explain' => 'Diese Daten basieren auf den Benutzern, die in den letzten 5 Minuten Sudoku gespielt haben.',
	'sudoku_game_stats' => 'Insgesamt haben <b>%s</b> Benutzer dieser Community Sudoku gespielt. Du hast insgesamt <b>%s</b> Puzzle gelöst',
	'sudoku_no_blank_starter' => 'Eine Nummer, die es nicht gibt, kannst du auch nicht löschen!',
	'sudoku_view_all' => 'Alle ansehen',
	'sudoku_buy_number' => 'Zahl kaufen',
	'sudoku_confirm_buy_text' => 'Du möchtest eine Nummer kaufen. Ein leeres Feld wird zufällig ausgewählt und die korrekte Zahl angezeigt. Diese Aktion wird dich 30 Punkte kosten. Willst Du wirklich eine Zahl kaufen?',
	'sudoku_buy_cancelled' => 'Du hast Dich entschlossen doch keine Zahl zu kaufen',
	'sudoku_ran_error' => 'Es ist ein Fehler aufgetreten beim Einfügen der Nummer. Versuche es bitte erneut.<br />Wenn das Problem weiterhin besteht, wende Dich bitte an den Administrator.',
	'sudoku_ran_success' => 'Die Zahl wurde zufällig gewählt und wird in das Feld eingetragen. Zur besseren &Uuml;bersicht ist es markiert.',
	'sudoku_resynch_success' => 'Synchronisation der Statistiken abgeschlossen. Weiterleitung...',
	'sudoku_resynch' => 'Resynchronisierung',
// for ver 1.0.5
	'sudoku_reset_game' => 'Rücksetzen des Sudokus Mods',
	'sudoku_reset_game_text' => 'Bist du sicher, dass du den Sudoku Mod zurücksetzen willst? Dies wird alle Spielerdaten aus der Datenbank löschen und den Mod ganz von vorne beginnen lassen, als wenn es eine frische Installation wäre. Bitte beachte, dass die Gamepacks unberührt von dieser Rücksetzung bleiben, es besteht also keine Notwendigkeit diese erneut zu installieren. Dieses Vorgehen kann nicht rückgängig gemacht werden',
	'sudoku_reset_game_cancelled' => 'Zurücksetzung abgebrochen. Es wurden keine Veränderungen vorgenommen.',
	'sudoku_rest_game_success' => 'Der Sudoku Mod wurde nun zurückgesetzt.',
	)
);

?>