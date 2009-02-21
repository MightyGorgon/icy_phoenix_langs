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
* aUsTiN-Inc - (austin_inc@hotmail.com) - (phpbb-amod.com)
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

//Language: Italian
$lang['db_browse'] = 'Mostra';
$lang['db_truncate'] = 'Svuota';
$lang['db_optimize'] = 'Ottimiza';
$lang['db_drop'] = 'Elimina';
$lang['db_repair'] = 'Ripara';
$lang['db_structure'] = 'Struttura';
$lang['db_explain'] = 'Sipegazione Azioni';

$lang['db_table_name'] = 'Nome Tabella';
$lang['db_action'] = 'Azione';
$lang['db_type'] = 'Tipo';
$lang['db_row_format'] = 'Formato Riga';
$lang['db_rows'] = 'Righe';
$lang['db_avg_r_len'] = 'Media Dimensione Righe';
$lang['db_data_len'] = 'Dimensione Dati';
$lang['db_max_dat_len'] = 'Dimensione Massima Dati';
$lang['db_index_len'] = 'Dimensione Indice';
$lang['db_overhead'] = 'In Eccesso';
$lang['db_auto_inc'] = 'Incremento automatico';
$lang['db_with_sel'] = 'Con le tabelle selezionate:';
$lang['db_field'] = 'Campo';
$lang['db_type'] = 'Tipo';
$lang['db_null'] = 'Null';
$lang['db_key'] = 'Key';
$lang['db_default'] = 'Default';
$lang['db_extra'] = 'Extra';

$lang['db_unauthed'] = 'Accesso non Autorizzato.';
$lang['db_tru_warning'] = 'Sei certo di voler svuotare %s?';
$lang['db_dro_warning'] = 'Sei certo di voler eliminare %s?';
$lang['db_warning_y'] = 'Si';
$lang['db_warning_n'] = 'No';
$lang['db_opt_success'] = 'Otimizzazione Tabella <b>%s</b>, completata senza problemi.';
$lang['db_tru_success'] = 'Svuotamento Tabella <b>%s</b>, completata senza problemi.';
$lang['db_dro_success'] = 'Eliminazione Tabella <b>%s</b>, completata senza problemi.';
$lang['db_rep_success'] = 'Riparazione Tabella <b>%s</b>, completata senza problemi.';
$lang['db_explained'] = 'Otimizzazione Tabella: otimizzerà lo spazio eliminato tutti i bits non contenenti dati.<br />
									Svuotamento Tabella: Svuoterà una tabella elminando tutti i dati in essa contenuti.<br />
									Mostra: Permetterà di vederi i dati in una tabella.<br />
									Eliminazione: Eliminarà la tabella dal tuo database.';
$lang['db_back'] = 'Clicca %sQUI%s per tornare alla pagina principale.';
$lang['db_change_exp'] = 'Da questo pannello potrai eseguire dei comandi SQL come, INSERT INTO,
									ALTER TABLE, UPDATE, DELETE FROM, DROP TABLE, DESCRIBE, etc.. E ne potrai aggiungere quanti vuoi,
									ricorda di separare ogni comando con un punto e virgola (;).';
$lang['db_submit_q'] = ' Invia Query ';
$lang['db_sql_total'] = 'SQL Query # %s';
$lang['db_aff_total'] = 'Completata senza problemi. Righe Affette: %s';
$lang['db_no_query'] = 'Non hai immesso una query!';
$lang['db_sql_field_changed'] = 'Nome campo cambiato.';
$lang['db_sql_query_db'] = 'Query del Database: ';
$lang['DB_Admin'] = 'IPMyAdmin';

?>
