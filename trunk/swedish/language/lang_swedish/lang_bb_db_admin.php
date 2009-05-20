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
	'db_browse' => 'Bl�ddra',
	'db_truncate' => 'Trunkera',
	'db_optimize' => 'Optimera',
	'db_drop' => 'Droppa',
	'db_repair' => 'Reparera',
	'db_structure' => 'Struktur',
	'db_explain' => 'F�rklara �tg�rder',

	'db_table_name' => 'Tabell Namn',
	'db_action' => '�tg�rd',
	'db_type' => 'Typ',
	'db_row_format' => 'Rad Format',
	'db_rows' => 'Rader',
	'db_avg_r_len' => 'Avg Rad L�ngd',
	'db_data_len' => 'Data L�ngd',
	'db_max_dat_len' => 'Max Data L�ngd',
	'db_index_len' => 'Index L�ngd',
	'db_overhead' => 'Overhead',
	'db_auto_inc' => 'Auto �kning',
	'db_with_sel' => 'Med Utvalda Tabeller:',
	'db_field' => 'F�lt',
	'db_type' => 'Typ',
	'db_null' => 'Null',
	'db_key' => 'Nyckel',
	'db_default' => 'Standard',
	'db_extra' => 'Extra',

	'db_unauthed' => 'Ej-auktoriserad �tkomst.',
	'db_tru_warning' => '�r du s�ker p� att du vill trunkera %s?',
	'db_dro_warning' => '�r du s�ker p� att du vill droppa %s?',
	'db_warning_y' => 'Ja',
	'db_warning_n' => 'Nej',
	'db_opt_success' => 'Optimera Tabell <b>%s</b>, Framg�ngsrikt Slutf�rt.',
	'db_tru_success' => 'Trunkera Tabell <b>%s</b>, Framg�ngsrikt Slutf�rt.',
	'db_dro_success' => 'Droppa Tabell <b>%s</b>, Framg�ngsrikt Slutf�rt.',
	'db_rep_success' => 'Reparera Tabell <b>%s</b>, Framg�ngsrikt Slutf�rt.',
	'db_explained' => 'Optimera Tabell: T�mmer ut eventuella �verblivna bitar av data.<br />Trunkera Tabell: T�mmer ut en tabell med all dess inneh�ll.<br />Bl�ddra: Till�ter dig att visa informationen i en tabell.<br />Droppa: Kommer att ta bort en tabell fr�n databasen.',
	'db_back' => 'Klicka %sh�r%s f�r att �terg� till huvud sidan.',
	'db_change_exp' => 'Genom att anv�nda denna, kommer du att kunna utf�ra SQL\'s som t.ex., INSERT INTO, ALTER TABLE, UPDATE, DELETE FROM, DROP TABLE, DESCRIBE, etc.. L�gg till s� m�nga du vill, separera varje SQL kommando med ett a semi-kolon.',
	'db_submit_q' => ' Skicka in Query ',
	'db_sql_total' => 'SQL Query # %s',
	'db_aff_total' => 'Framg�ngsrikt Slutf�rt. P�verkade Rader: %s',
	'db_no_query' => 'Du skrev inte in ett query!',
	'db_sql_field_changed' => 'F�lt Namn �ndrat.',
	'db_sql_query_db' => 'Query Din Databas: ',
	'DB_Admin' => 'IP MyAdmin',
	)
);

?>