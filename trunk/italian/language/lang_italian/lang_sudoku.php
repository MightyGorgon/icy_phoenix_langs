<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang['Sudoku_Version'] = 'Sudoku Mod Versione %s &copy; Majorflam 2005 - Ultimo Game Pack Installato: Pack %s';
$lang['suduko_blank_tile'] = 'Clicca per inserire un numero';
$lang['suduko_user_tile'] = 'Clicca per modificare';
$lang['sudoku_no_tile'] = 'Nessuna casella selezionata!';
$lang['sudoku_input_num'] = 'Seleziona il numero da inserire nella casella scelta.';
$lang['sudoku_no_number'] = 'Devi selezionare un numero da inserire in quella casella!';
$lang['sudoku_instructions'] = 'Inserisci un numero da 1 a 9 in ogni casella vuota in modo che ogni riga, ogni colonna ed ogni blocco da 3 x 3 caselle contenga tutti i numeri da 1 a 9. Sono gi&agrave; presenti alcuni numeri di "partenza" per aiutarti (sottolineati). Clicca semplicemente su una casella vuota per inserire il tuo numero. Se fai un errore clicca di nuovo sulla casella per inserirne uno nuovo.';
$lang['sudoku_invalid_number'] = 'Hai inserito un numero non valido!';
$lang['sudoku_howto'] = 'Come si gioca';
$lang['sudoku_stats'] = 'Statistiche';
$lang['sudoku_statistics'] = 'Le statistiche sono ottenute in base alla tua prestazione ed a quella degli altri giocatori. Sono elencati i migliori dieci giocatori. Ogni volta che inserisci un numero valido, guadagni 10 punti. Ma attento! se lo sostituisci ne perdi 15. Se resetti la griglia, ricominci a giocare con una detrazione di 200 punti.';
$lang['sudoku_game_info'] = 'Game Pack:<b>%s</b> || Gioco Numero:<b>%s</b> || Livello:<b>%s</b>';
$lang['sudoku_player_stats'] = 'Le tue statistiche';
$lang['sudoku_leaderboard'] = 'Sudoku Top 10';
$lang['sudoku_played'] = 'Partite totali giocate';
$lang['sudoku_points'] = 'Totale punti';
$lang['sudoku_these_points'] = 'Punti - Questa partita';
$lang['sudoku_lead_played'] = 'Partite giocate';
$lang['sudoku_lead_points'] = 'Punti';
$lang['sudoku_level_easy'] = 'Facile';
$lang['sudoku_level_medium'] = 'Medio';
$lang['sudoku_level_hard'] = 'Difficile';
$lang['sudoku_level_very_hard'] = 'Molto difficile';
$lang['sudoku_confirm_reset'] = 'Azzeramento griglia';
$lang['sudoku_confirm_reset_text'] = 'Sei sicuro di voler resettare la griglia? Se lo farai, ricomincerai a giocare con - 200 punti.';
$lang['sudoku_reset_cancelled'] = 'Azzeramento griglia annullato.';
$lang['sudoku_lead_current_game'] = 'Partita in gioco';
$lang['sudoku_current_game_text'] = 'Pack:<b>%s ~ </b>Part. <b>#%s</b>';
$lang['sudoku_nomore_grids'] = 'Congratulazioni! Hai completato tutte le griglie a disposizione!. Contatta l\'amministratore per sapere se ce ne sono di nuove.';
$lang['sudoku_load_new'] = 'Griglia completata con successo! Sto caricando la prossima ...';
$lang['sudoku_wrong_numbers'] = 'Hai completato la griglia ma alcuni numeri sono stati inseriti al posto sbagliato. La griglia verr&agrave; ricaricata ed i numeri errati verranno rimossi. Questo ti coster&agrave; 20 punti per ogni numero errato. Ci sono %s numeri inseriti in modo errato. Questo ti coster&agrave; un totale di %s punti.<br />&nbsp;<br />Caricamento griglia...';
$lang['sudoku_reset_confirmed'] = 'Adesso la tua griglia viene resettata. Caricamento...';
$lang['sudoku_no_change_starter'] = 'Non puoi cambiare questo numero!';
$lang['sudoku_no_url_tricks'] = 'Niente trucchetti esterni, grazie!.';
$lang['sudoku_place'] = 'Inserisci!';
$lang['sudoku_reset_grid'] = 'Azzeramento griglia';
$lang['sudoku_who_is_online'] = 'Chi sta giocando a Sudoku';
$lang['sudoku_total_online'] = 'In totale <b>%s</b> utenti hanno giocato a Sudoku nelle ultime 24 ore:';
$lang['sudoku_logged_in_list'] = 'Utenti attualmente in gioco:';
$lang['sudoku_online_explain'] = 'Questi dati sono basati sugli utenti che giocano/hanno giocato a Sudoku negli ultimi 15 minuti.';
$lang['sudoku_game_stats'] = 'In totale, <b>%s</b> utenti hanno giocato a Sudoku su questo forum. Per un totale di <b>%s</b> partite';
$lang['sudoku_no_blank_starter'] ='Non puoi cancellare un numero che non esiste!';
$lang['sudoku_view_all'] ='Guarda tutto';
$lang['sudoku_buy_number'] ='Compra un numero';
$lang['sudoku_confirm_buy_text'] ='Hai scelto di comprare un numero. Verr&agrave; scelta una casella a caso nella tua griglia e sar&agrave; inserito automaticamente un numero corretto. Questo ti coster&agrave; 30 punti dal totale della griglia. Sei sicuro di volerlo comprare?';
$lang['sudoku_buy_cancelled'] = 'Questa volta hai scelto di non comprare il numero';
$lang['sudoku_ran_error'] = 'Si &egrave; verificato un errore durante l\'inserimento di un numero. Riprova. Se il problema persiste, contatta l\'amministratore.';
$lang['sudoku_ran_success'] = 'Il numero &egrave; stato scelto a caso e inserito nella griglia. Sar&agrave; evidenziato per fartelo notare';
$lang['sudoku_resynch_success'] = 'Sincronizzazione statistiche completata. Reindirizzamento...';
$lang['sudoku_resynch'] = 'Sincronizza';
// per la versione 1.0.5
$lang['sudoku_reset_game'] = 'Reset totale del gioco';
$lang['sudoku_reset_game_text'] = 'Sei sicuro di voler resettare il Sudoku? Cos&igrave; rimuoverai dal database tutti i giocatori e il gioco ricomincer&agrave; dal principio come appena installato. I Game Packs non verranno rimossi pertanto non sar&agrave; necessario reinstallarli. Questa operazione non potr&agrave; essere annullata.';
$lang['sudoku_reset_game_cancelled'] = 'Reset totale annullato. Non &egrave; stata effettuata alcuna modifica.';
$lang['sudoku_rest_game_success'] = 'Il gioco &egrave; stato totalmente resettato.';

?>