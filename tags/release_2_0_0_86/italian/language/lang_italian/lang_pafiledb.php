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
* Antonio Mercurio (roland@phpbbplus.it) www.phpbbplus.it
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
	// Toplist
	'Toplist' => 'Toplist',
	'Select_list' => 'Selezionate il tipo di elenco da mostrare',
	'Latest_downloads' => 'Files pi&ugrave; recenti',
	'Most_downloads' => 'Files pi&ugrave; scaricati',
	'Rated_downloads' => 'Files pi&ugrave; votati',
	'Total_new_files' => 'Nuovi files',
	'Show' => 'Mostra',
	'One_week' => 'Una settimana',
	'Two_week' => 'Due Settimane',
	'30_days' => '30 Giorni',
	'New_Files' => 'Totale nuovi files negli ultimi %d giorni',
	'Last_week' => 'Ultima settimana',
	'Last_30_days' => 'Ultimi 30 giorni',
	'Show_top' => 'Mostra Top',
	'Or_top' => 'o Top',
	'Popular_num' => 'Top %d su %d files nel database',
	'Popular_per' => 'Top %d %% di tutti i %d files nel database',
	'General_Info' => 'Informazioni generali',
	'Downloads_stats' => 'Statistiche Downloads ',
	'Rating_stats' => 'Voti',
	'Os' => 'Sistema operativo',
	'Browsers' => 'Browsers',

	// Main
	'Files' => 'Files',
	'Viewall' => 'Mostra tutti i Files',
	'Vainfo' => 'Mostra tutti i files nel database',
	'Jump' => 'Seleziona una categoria',
	'Sub_category' => 'Sub Categoria',
	'Last_file' => 'Ultimo file',

	// Sort
	'Sort' => 'Ordina',
	'Name' => 'Nome',
	'Update_time' => 'Ultimo aggiornamento',

	// Category
	'No_files' => 'Nessun file trovato',
	'No_files_cat' => 'Questa categoria non contiene files.',
	'Cat_not_exist' => 'La categoria selezionata non esiste.',
	'File_not_exist' => 'Il file selezionato non esiste.',
	'License_not_exist' => 'La licenza selezionata non esiste.',
	'No_dl_categories_exists' => 'Non ci sono categorie nel database oppure non hai il permesso di visualizzare nessuna categoria.',

	// File
	'File' => 'File',
	'Desc' => 'Descrizione',
	'Creator' => 'Autore',
	'Version' => 'Versione',
	'Scrsht' => 'Screenshot',
	'Docs' => 'Documentazione',
	'Lastdl' => 'Ultimo Download',
	'Never' => 'Mai',
	'Votes' => ' voti',
	'Date' => 'Data',
	'Update_time' => 'Ultimo aggiornamento',
	'DlRating' => 'Valutazione',
	'Dls' => ' Downloads',
	'Downloadfile' => 'Download File',
	'File_size' => 'Dimensione file',
	'Not_available' => 'Non disponibile!',

	'Mirrors' => 'Mirrors',
	'Mirrors_explain' => 'In questa sezione potete aggiungere o modificare i mirror per questo file, assicuratevi di verificare tutte le informazioni prima di inviare il file al database',
	'Click_here_mirrors' => 'Clicca qui per aggiungere i mirror',
	'Mirror_location' => 'Posizione Mirror',
	'Add_new_mirror' => 'Aggiungere un nuovo mirror',

	//User Upload
	'User_upload' => 'Carica File',

	// License
	'License' => 'Accettazione Licenza d\'uso',
	'Licensewarn' => 'Dovete accettare la licenza d\'uso prima di scaricare il file',
	'Iagree' => 'Accetto',
	'Dontagree' => 'Non accetto',

	// Search
	'Search' => 'Cerca',
	'Search_for' => 'Ricerca per',
	'Results' => 'Risultati per',
	'No_matches' => 'Spiacente, nessun risultato per ',
	'Matches' => 'risultati per ',
	'All' => 'Tutte le categorie',
	'Choose_cat' => 'Seleziona categoria:',
	'Include_comments' => 'Includi commenti ',
	'Submiter' => 'Inviato da ',

	// Statistics
	'Statistics' => 'Statistiche',
	'Stats_text' => "Ci sono {total_files} files in {total_categories} categorie<br />
	Sono stati effettuati {total_downloads} downloads totali<br /><br />
	Il file pi&ugrave; recente &egrave; <a href={u_newest_file}>{newest_file}</a><br />
	Il file pi&ugrave; vecchio &egrave; <a href={u_oldest_file}>{oldest_file}</a><br /><br />
	La valutazione media dei files &egrave; {average}/10<br />
	Il file con la valutazione pi&ugrave; alta &egrave; <a href={u_popular}>{popular}</a> con una valutazione di {most}/10<br />
	Il file con la valutazione pi&ugrave; bassa &egrave; <a href={u_lpopular}>{lpopular}</a> con una valutazione di {least}/10<br /><br />
	La media di download per file &egrave; {avg_dls}<br />
	Il file con il maggior numero di download &egrave; <a href={u_most_dl}>{most_dl}</a> con {most_no} downloads<br />
	Il file con il minor numero di download &egrave; <a href={u_least_dl}>{least_dl}</a> con {least_no} downloads<br />",
	'Select_chart_type' => 'Seleziona tipo grafico',
	'Bars' => 'Barre',
	'Lines' => 'Linee',
	'Area' => 'Area',
	'Linepoints' => 'Linee puntate',
	'Points' => 'Punti',
	'Chart_header' => 'Statistica files - files aggiunti al database ogni mese',
	'Chart_legend' => 'Files',
	'X_label' => 'Mesi',
	'Y_label' => 'Numero di files',

	// Rate
	'Rate' => 'Valuta file',
	'Rerror' => 'Spiacente, hai gi&agrave; valutato questo file.',
	'Rateinfo' => 'Stai per valutare il file <i>{filename}</i>.<br /> Selezionate una valutazione. 1 &egrave; il peggiore, 10 il migliore.',
	'Rconf' => 'Avete valutato il file <i>{filename}</i> con un punteggio {rate}.<br /> Dopo questa operazione la valutazione del file diventa {newrating}/10.',
	'R1' => '1',
	'R2' => '2',
	'R3' => '3',
	'R4' => '4',
	'R5' => '5',
	'R6' => '6',
	'R7' => '7',
	'R8' => '8',
	'R9' => '9',
	'R10' => '10',
	'Not_rated' => 'Non valutato',

	// Email
	'Emailfile' => 'Segnala file via E-mail ad un amico',
	'Emailinfo' => 'Se volete segnalare ad un amico questo file, potete riempire i campi del form ed inviare tramite lo stesso, una email contenente l\'informazione del file al vostro amico<br /> &egrave; obbligatorio compilare i campi con *.',
	'Yname' => 'Il vostro nome.',
	'Yemail' => 'La vostra email.',
	'Fname' => 'Il nome dell\'amico.',
	'Femail' => 'L\'email dell\'amico.',
	'Esub' => 'Titolo dell\'email',
	'Etext' => 'Testo dell\'email',
	'Defaultmail' => 'Ho pensato ti interessasse questo file che ho trovato su ',
	'Semail' => 'Invia E-mail',
	'Econf' => 'Email inviata con successo.',

	// Comments
	'Comments' => 'Commenti',
	'Comments_title' => 'Titolo commenti',
	'Comment_subject' => 'Soggetto del commento',
	'Comment' => 'Commento',
	'Comment_explain' => 'Usate la casella di testo per esprimere un\'opinione su questo file!',
	'Comment_add' => 'Aggiungi commento',
	'Comment_delete' => 'Cancella',
	'Comment_posted' => 'Il vostro commento &egrave; stato inserito',
	'Comment_deleted' => 'Il commento selezionato &egrave; stato cancellato',
	'Comment_desc' => 'Titolo',
	'No_comments' => 'Nessun commento inserito sinora.',
	'Links_are_ON' => 'I links sono <b>ON</b>',
	'Links_are_OFF' => 'I links sono <b>OFF</b>',
	'Images_are_ON' => 'Le immagini sono <b>ON</b>',
	'Images_are_OFF' => 'Le immagini sono  <b>OFF</b>',
	'Check_message_length' => 'Verifica lunghezza messaggi',
	'Msg_length_1' => 'Il vostro messaggio ha ',
	'Msg_length_2' => ' caratteri.',
	'Msg_length_3' => 'Avete ',
	'Msg_length_4' => ' caratteri disponibili.',
	'Msg_length_5' => 'Ci sono ',
	'Msg_length_6' => ' caratteri rimasti.',


	// Download
	'Directly_linked' => 'Non puoi scaricare questo file da un altro sito',

	//Permission
	'Sorry_auth_view' => 'Spiacente , ma solo %s pu&ograve; visualizzare i files e le sub-categorie in questa categoria.',
	'Sorry_auth_file_view' => 'Spiacente , ma solo  %s pu&ograve; visualizzare i files in questa categoria.',
	'Sorry_auth_upload' => 'Spiacente , ma solo  %s pu&ograve; aggiungere files a questa categoria.',
	'Sorry_auth_download' => 'Spiacente , ma solo  %s pu&ograve; scaricare files da questa categoria.',
	'Sorry_auth_rate' => 'Spiacente , ma solo  %s pu&ograve; valutare i files in questa categoria.',
	'Sorry_auth_view_comments' => 'Spiacente , ma solo  %s pu&ograve; visualizzare i commenti in questa categoria.',
	'Sorry_auth_post_comments' => 'Spiacente , ma solo  %s pu&ograve; inserire i commenti in questa categoria.',
	'Sorry_auth_edit_comments' => 'Spiacente , ma solo  %s pu&ograve; modificare i commenti in questa categoria.',
	'Sorry_auth_delete_comments' => 'Spiacente , ma solo  %s pu&ograve; cancellare i commenti in questa categoria.',
	// MX
	'Sorry_auth_edit' => 'Spiacente, non potete modificare i file in questa categoria.',
	'Sorry_auth_delete' => 'Spiacente, non potete cancellare i file in questa categoria.',
	'Sorry_auth_mcp' => 'Spiacente, non potete moderare questa categoria.',
	'Sorry_auth_approve' => 'Spiacente, non potete approvare i file in questa categoria.',


	// General
	'Category' => 'Categoria',
	'Error_no_download' => 'Il file selezionato non esiste pi&ugrave;',
	'Options' => 'Opzioni',
	'Click_return' => 'Clicca %sQUI%s per tornare alla pagina precedente',
	'Click_here' => 'Clicca qui',
	'never' => 'Nessuno',
	'pafiledb_disable' => 'Il database dei download non &egrave; attivo',
	'jump' => 'Selezionate una categoria',
	'viewall_disabled' => 'Opzione disabilitata dall\'amministrazione.',
	'New_file' => 'Nuovo file',
	'No_new_file' => 'Nessun nuovo file',
	'None' => 'Nessuno',
	'No_file' => 'Nessun file',
	'View_latest_file' => 'Visualizza gli ultimi files',

	// Toplists mx blocks
	'Recent_Public_Files' => 'Ultimi dls',
	'Random_Public_Files' => 'Random dls',
	'Toprated_Public_Files' => 'DL Pi&ugrave; votato',
	'Most_Public_Files' => 'Pi&ugrave; scaricato',
	'File_Title' => 'Titolo',
	'File_Desc' => 'Descrizione',
	'Rating' => 'Giudizio',
	'Dls' => 'Scaricato',

	// MX Addon
	'Deletefile' => 'Cancella file',
	'Editfile' => 'Modifica file',
	'pa_MCP' => 'PC Moderatore',
	'Click_return_not_validated' => 'Clicca %sQUI%s per ritornare alla pagina precedente',
	)
);

?>