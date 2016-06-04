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

$lang = array_merge($lang, array(
	'db_browse' => 'Mostra',
	'db_truncate' => 'Svuota',
	'db_optimize' => 'Ottimiza',
	'db_drop' => 'Elimina',
	'db_repair' => 'Ripara',
	'db_structure' => 'Struttura',
	'db_explain' => 'Sipegazione Azioni',

	'db_table_name' => 'Nome Tabella',
	'db_action' => 'Azione',
	'db_type' => 'Tipo',
	'db_row_format' => 'Formato Riga',
	'db_rows' => 'Righe',
	'db_avg_r_len' => 'Media Dimensione Righe',
	'db_data_len' => 'Dimensione Dati',
	'db_max_dat_len' => 'Dimensione Massima Dati',
	'db_index_len' => 'Dimensione Indice',
	'db_overhead' => 'In Eccesso',
	'db_auto_inc' => 'Incremento automatico',
	'db_with_sel' => 'Con le tabelle selezionate:',
	'db_field' => 'Campo',
	'db_type' => 'Tipo',
	'db_null' => 'Null',
	'db_key' => 'Key',
	'db_default' => 'Default',
	'db_extra' => 'Extra',

	'db_unauthed' => 'Accesso non Autorizzato.',
	'db_tru_warning' => 'Sei certo di voler svuotare %s?',
	'db_dro_warning' => 'Sei certo di voler eliminare %s?',
	'db_warning_y' => 'Si',
	'db_warning_n' => 'No',
	'db_opt_success' => 'Otimizzazione Tabella <b>%s</b>, completata senza problemi.',
	'db_tru_success' => 'Svuotamento Tabella <b>%s</b>, completata senza problemi.',
	'db_dro_success' => 'Eliminazione Tabella <b>%s</b>, completata senza problemi.',
	'db_rep_success' => 'Riparazione Tabella <b>%s</b>, completata senza problemi.',
	'db_explained' => 'Otimizzazione Tabella: otimizzerà lo spazio eliminato tutti i bits non contenenti dati.<br />Svuotamento Tabella: Svuoterà una tabella elminando tutti i dati in essa contenuti.<br />Mostra: Permetterà di vederi i dati in una tabella.<br />Eliminazione: Eliminarà la tabella dal tuo database.',
	'db_back' => 'Clicca %sQUI%s per tornare alla pagina principale.',
	'db_change_exp' => 'Da questo pannello potrai eseguire dei comandi SQL come, INSERT INTO, ALTER TABLE, UPDATE, DELETE FROM, DROP TABLE, DESCRIBE, etc.. E ne potrai aggiungere quanti vuoi, ricorda di separare ogni comando con un punto e virgola (;).',
	'db_submit_q' => ' Invia Query ',
	'db_sql_total' => 'SQL Query # %s',
	'db_aff_total' => 'Completata senza problemi. Righe Affette: %s',
	'db_no_query' => 'Non hai immesso una query!',
	'db_sql_field_changed' => 'Nome campo cambiato.',
	'db_sql_query_db' => 'Query del Database: ',
	'DB_Admin' => 'IPMyAdmin',
	)
);

?>