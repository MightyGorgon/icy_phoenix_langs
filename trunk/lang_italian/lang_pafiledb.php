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

// Toplist
$lang['Toplist'] = 'Toplist';
$lang['Select_list'] = 'Selezionate il tipo di elenco da mostrare';
$lang['Latest_downloads'] = 'Files pi&ugrave; recenti';
$lang['Most_downloads'] = 'Files pi&ugrave; scaricati';
$lang['Rated_downloads'] = 'Files pi&ugrave; votati';
$lang['Total_new_files'] = 'Nuovi files';
$lang['Show'] = 'Mostra';
$lang['One_week'] = 'Una settimana';
$lang['Two_week'] = 'Due Settimane';
$lang['30_days'] = '30 Giorni';
$lang['New_Files'] = 'Totale nuovi files negli ultimi %d giorni';
$lang['Last_week'] ='Ultima settimana';
$lang['Last_30_days'] = 'Ultimi 30 giorni';
$lang['Show_top'] = 'Mostra Top';
$lang['Or_top'] = 'o Top';
$lang['Popular_num'] = 'Top %d su %d files nel database';
$lang['Popular_per'] = 'Top %d %% di tutti i  %d files nel database';
$lang['General_Info'] = 'Informazioni generali';
$lang['Downloads_stats'] = 'Statistiche Downloads ';
$lang['Rating_stats'] = 'Voti';
$lang['Os'] = 'Sistema operativo';
$lang['Browsers'] = 'Browsers';

// Main
$lang['Files'] = 'Files';
$lang['Viewall'] = 'Mostra tutti i Files';
$lang['Vainfo'] = 'Mostra tutti i files nel database';
$lang['Jump'] = 'Seleziona una categoria';
$lang['Sub_category'] = 'Sub Categoria';
$lang['Last_file'] = 'Ultimo file';

// Sort
$lang['Sort'] = 'Ordina';
$lang['Name'] = 'Nome';
$lang['Update_time'] = 'Ultimo aggiornamento';

// Category
$lang['No_files'] = 'Nessun file trovato';
$lang['No_files_cat'] = 'Questa categoria non contiene files.';
$lang['Cat_not_exist'] = 'La categoria selezionata non esiste.';
$lang['File_not_exist'] = 'Il file selezionato non esiste.';
$lang['License_not_exist'] = 'La licenza selezionata non esiste.';

// File
$lang['File'] = 'File';
$lang['Desc'] = 'Descrizione';
$lang['Creator'] = 'Autore';
$lang['Version'] = 'Versione';
$lang['Scrsht'] = 'Screenshot';
$lang['Docs'] = 'Documentazione';
$lang['Lastdl'] = 'Ultimo Download';
$lang['Never'] = 'Mai';
$lang['Votes'] = ' voti';
$lang['Date'] = 'Data';
$lang['Update_time'] = 'Ultimo aggiornamento';
$lang['DlRating'] = 'Valutazione';
$lang['Dls'] = ' Downloads';
$lang['Downloadfile'] = 'Download File';
$lang['File_size'] = 'Dimensione file';
$lang['Not_available'] = 'Non disponibile!';
$lang['Bytes'] = 'Bytes';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';

$lang['Mirrors'] = 'Mirrors';
$lang['Mirrors_explain'] = 'In questa sezione potete aggiungere o modificare i mirror per questo file, assicuratevi di verificare tutte le informazioni prima di inviare il file al database';
$lang['Click_here_mirrors'] = 'Clicca qui per aggiungere i mirror';
$lang['Mirror_location'] = 'Posizione Mirror';
$lang['Add_new_mirror'] = 'Aggiungere un nuovo mirror';

//User Upload
$lang['User_upload'] = 'Carica File';

// License
$lang['License'] = 'Accettazione Licenza d\'uso';
$lang['Licensewarn'] = 'Dovete accettare la licenza d\'uso prima di scaricare il file';
$lang['Iagree'] = 'Accetto';
$lang['Dontagree'] = 'Non accetto';

// Search
$lang['Search'] = 'Cerca';
$lang['Search_for'] = 'Ricerca per';
$lang['Results'] = 'Risultati per';
$lang['No_matches'] = 'Spiacente, nessun risultato per ';
$lang['Matches'] = 'risultati per ';
$lang['All'] = 'Tutte le categorie';
$lang['Choose_cat'] = 'Seleziona categoria:';
$lang['Include_comments'] = 'Includi commenti ';
$lang['Submiter'] = 'Inviato da ';

// Statistics
$lang['Statistics'] = 'Statistiche';
$lang['Stats_text'] = "Ci sono {total_files} files in {total_categories} categorie<br />";
$lang['Stats_text'] .= "Sono stati effettuati {total_downloads} downloads totali<br /><br />";
$lang['Stats_text'] .= "Il file pi&ugrave; recente &egrave; <a href={u_newest_file}>{newest_file}</a><br />";
$lang['Stats_text'] .= "Il file pi&ugrave; vecchio &egrave; <a href={u_oldest_file}>{oldest_file}</a><br /><br />";
$lang['Stats_text'] .= "La valutazione media dei files &egrave; {average}/10<br />";
$lang['Stats_text'] .= "Il file con la valutazione pi&ugrave; alta &egrave; <a href={u_popular}>{popular}</a> con una valutazione di {most}/10<br />";
$lang['Stats_text'] .= "Il file con la valutazione pi&ugrave; bassa &egrave; <a href={u_lpopular}>{lpopular}</a> con una valutazione di {least}/10<br /><br />";
$lang['Stats_text'] .= "La media di download per file &egrave; {avg_dls}<br />";
$lang['Stats_text'] .= "Il file con il maggior numero di download &egrave; <a href={u_most_dl}>{most_dl}</a> con {most_no} downloads<br />";
$lang['Stats_text'] .= "Il file con il minor numero di download &egrave; <a href={u_least_dl}>{least_dl}</a> con {least_no} downloads<br />";
$lang['Select_chart_type'] = 'Seleziona tipo grafico';
$lang['Bars'] = 'Barre';
$lang['Lines'] = 'Linee';
$lang['Area'] = 'Area';
$lang['Linepoints'] = 'Linee puntate';
$lang['Points'] = 'Punti';
$lang['Chart_header'] = 'Statistica files - files aggiunti al database ogni mese';
$lang['Chart_legend'] = 'Files';
$lang['X_label'] = 'Mesi';
$lang['Y_label'] = 'Numero di files';

// Rate
$lang['Rate'] = 'Valuta file';
$lang['Rerror'] = 'Spiacente, hai gi&agrave; valutato questo file.';
$lang['Rateinfo'] = 'Stai per valutare il file <i>{filename}</i>.<br /> Selezionate una valutazione. 1 &egrave; il peggiore, 10 il migliore.';
$lang['Rconf'] = 'Avete valutato il file <i>{filename}</i> con un punteggio {rate}.<br /> Dopo questa operazione la valutazione del file diventa {newrating}/10.';
$lang['R1'] = '1';
$lang['R2'] = '2';
$lang['R3'] = '3';
$lang['R4'] = '4';
$lang['R5'] = '5';
$lang['R6'] = '6';
$lang['R7'] = '7';
$lang['R8'] = '8';
$lang['R9'] = '9';
$lang['R10'] = '10';
$lang['Not_rated'] = 'Non valutato';

// Email
$lang['Emailfile'] = 'Segnala file via E-mail ad un amico';
$lang['Emailinfo'] = 'Se volete segnalare ad un amico questo file, potete riempire i campi del form ed inviare tramite lo stesso, una email contenente l\'informazione del file al vostro amico<br /> &egrave; obbligatorio compilare i campi con *.';
$lang['Yname'] = 'Il vostro nome.';
$lang['Yemail'] = 'La vostra email.';
$lang['Fname'] = 'Il nome dell\'amico.';
$lang['Femail'] = 'L\'email dell\'amico.';
$lang['Esub'] = 'Titolo dell\'email';
$lang['Etext'] = 'Testo dell\'email';
$lang['Defaultmail'] = 'Ho pensato ti interessasse questo file che ho trovato su ';
$lang['Semail'] = 'Invia E-mail';
$lang['Econf'] = "Email inviata senza errori.";

// Comments
$lang['Comments'] = 'Commenti';
$lang['Comments_title'] = 'Titolo commenti';
$lang['Comment_subject'] = 'Soggetto del commento';
$lang['Comment'] = 'Commento';
$lang['Comment_explain'] = 'Usate la casella di testo per esprimere un\'opinione su questo file!';
$lang['Comment_add'] = 'Aggiungi commento';
$lang['Comment_delete'] = 'Cancella';
$lang['Comment_posted'] = 'Il vostro commento &egrave; stato inserito';
$lang['Comment_deleted'] = 'Il commento selezionato &egrave; stato cancellato';
$lang['Comment_desc'] = 'Titolo';
$lang['No_comments'] = 'Nessun commento inserito sinora.';
$lang['Links_are_ON'] = 'I links sono <b>ON</b>';
$lang['Links_are_OFF'] = 'I links sono <b>OFF</b>';
$lang['Images_are_ON'] = 'Le immagini sono <b>ON</b>';
$lang['Images_are_OFF'] = 'Le immagini sono  <b>OFF</b>';
$lang['Check_message_length'] = 'Verifica lunghezza messaggi';
$lang['Msg_length_1'] = 'Il vostro messaggio ha ';
$lang['Msg_length_2'] = ' caratteri.';
$lang['Msg_length_3'] = 'Avete ';
$lang['Msg_length_4'] = ' caratteri disponibili.';;
$lang['Msg_length_5'] = 'Ci sono ';
$lang['Msg_length_6'] = ' caratteri rimasti.';


// Download
$lang['Directly_linked'] = 'Non puoi scaricare questo file da un altro sito';

//Permission
$lang['Sorry_auth_view'] = 'Spiacente , ma solo %s pu&ograve; visualizzare i files e le sub-categorie in questa categoria.';
$lang['Sorry_auth_file_view'] = 'Spiacente , ma solo  %s pu&ograve; visualizzare i files in questa categoria.';
$lang['Sorry_auth_upload'] = 'Spiacente , ma solo  %s pu&ograve; aggiungere files a questa categoria.';
$lang['Sorry_auth_download'] = 'Spiacente , ma solo  %s pu&ograve; scaricare files da questa categoria.';
$lang['Sorry_auth_rate'] = 'Spiacente , ma solo  %s pu&ograve; valutare i files in questa categoria.';
$lang['Sorry_auth_view_comments'] = 'Spiacente , ma solo  %s pu&ograve; visualizzare i commenti in questa categoria.';
$lang['Sorry_auth_post_comments'] = 'Spiacente , ma solo  %s pu&ograve; inserire i commenti in questa categoria.';
$lang['Sorry_auth_edit_comments'] = 'Spiacente , ma solo  %s pu&ograve; modificare i commenti in questa categoria.';
$lang['Sorry_auth_delete_comments'] = 'Spiacente , ma solo  %s pu&ograve; cancellare i commenti in questa categoria.';
// MX
$lang['Sorry_auth_edit'] = 'Spiacente, non potete modificare i file in questa categoria.';
$lang['Sorry_auth_delete'] = 'Spiacente, non potete cancellare i file in questa categoria.';
$lang['Sorry_auth_mcp'] = 'Spiacente, non potete moderare questa categoria.';
$lang['Sorry_auth_approve'] = 'Spiacente, non potete approvare i file in questa categoria.';


// General
$lang['Category'] = 'Categoria';
$lang['Error_no_download'] = 'Il file selezionato non esiste pi&ugrave;';
$lang['Options'] = 'Opzioni';
$lang['Click_return'] = 'Clicca %sQUI%s per tornare alla pagina precedente';
$lang['Click_here'] = 'Clicca qui';
$lang['never'] = "Nessuno";
$lang['pafiledb_disable'] = 'Il database dei download non &egrave; attivo';
$lang['jump'] = "Selezionate una categoria";
$lang['viewall_disabled'] = 'Opzione disabilitata dall\'amministrazione.';
$lang['New_file'] = 'Nuovo file';
$lang['No_new_file'] = 'Nessun nuovo file';
$lang['None'] = 'Nessuno';
$lang['No_file'] = 'Nessun file';
$lang['View_latest_file'] = 'Visualizza gli ultimi files';

// Toplists mx blocks
$lang['Recent_Public_Files'] = 'Ultimi dls';
$lang['Random_Public_Files'] = 'Random dls';
$lang['Toprated_Public_Files'] = 'DL Pi&ugrave; votato';
$lang['Most_Public_Files'] = 'Pi&ugrave; scaricato';
$lang['File_Title'] = 'Titolo';
$lang['File_Desc'] = 'Descrizione';
$lang['Rating'] = 'Giudizio';
$lang['Dls'] = 'Scaricato';

// MX Addon
$lang['Deletefile'] = 'Cancella file';
$lang['Editfile'] = 'Modifica file';
$lang['pa_MCP'] = '[PC Moderatore]';
$lang['Click_return_not_validated'] = 'Clicca %sQUI%s per ritornare alla pagina precedente';

?>