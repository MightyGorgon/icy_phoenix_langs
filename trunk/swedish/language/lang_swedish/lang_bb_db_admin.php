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
	'db_browse' => 'Bläddra',
	'db_truncate' => 'Trunkera',
	'db_optimize' => 'Optimera',
	'db_drop' => 'Droppa',
	'db_repair' => 'Reparera',
	'db_structure' => 'Struktur',
	'db_explain' => 'Förklara Åtgärder',

	'db_table_name' => 'Tabell Namn',
	'db_action' => 'Åtgärd',
	'db_type' => 'Typ',
	'db_row_format' => 'Rad Format',
	'db_rows' => 'Rader',
	'db_avg_r_len' => 'Avg Rad Längd',
	'db_data_len' => 'Data Längd',
	'db_max_dat_len' => 'Max Data Längd',
	'db_index_len' => 'Index Längd',
	'db_overhead' => 'Overhead',
	'db_auto_inc' => 'Auto Ökning',
	'db_with_sel' => 'Med Utvalda Tabeller:',
	'db_field' => 'Fält',
	'db_type' => 'Typ',
	'db_null' => 'Null',
	'db_key' => 'Nyckel',
	'db_default' => 'Standard',
	'db_extra' => 'Extra',

	'db_unauthed' => 'Ej-auktoriserad åtkomst.',
	'db_tru_warning' => 'Är du säker på att du vill trunkera %s?',
	'db_dro_warning' => 'Är du säker på att du vill droppa %s?',
	'db_warning_y' => 'Ja',
	'db_warning_n' => 'Nej',
	'db_opt_success' => 'Optimera Tabell <b>%s</b>, Framgångsrikt Slutfört.',
	'db_tru_success' => 'Trunkera Tabell <b>%s</b>, Framgångsrikt Slutfört.',
	'db_dro_success' => 'Droppa Tabell <b>%s</b>, Framgångsrikt Slutfört.',
	'db_rep_success' => 'Reparera Tabell <b>%s</b>, Framgångsrikt Slutfört.',
	'db_explained' => 'Optimera Tabell: Tömmer ut eventuella överblivna bitar av data.<br />Trunkera Tabell: Tömmer ut en tabell med all dess innehåll.<br />Bläddra: Tillåter dig att visa informationen i en tabell.<br />Droppa: Kommer att ta bort en tabell från databasen.',
	'db_back' => 'Klicka %shär%s för att återgå till huvud sidan.',
	'db_change_exp' => 'Genom att använda denna, kommer du att kunna utföra SQL\'s som t.ex., INSERT INTO, ALTER TABLE, UPDATE, DELETE FROM, DROP TABLE, DESCRIBE, etc.. Lägg till så många du vill, separera varje SQL kommando med ett a semi-kolon.',
	'db_submit_q' => ' Skicka in Query ',
	'db_sql_total' => 'SQL Query # %s',
	'db_aff_total' => 'Framgångsrikt Slutfört. Påverkade Rader: %s',
	'db_no_query' => 'Du skrev inte in ett query!',
	'db_sql_field_changed' => 'Fält Namn Ändrat.',
	'db_sql_query_db' => 'Query Din Databas: ',
	'DB_Admin' => 'IP MyAdmin',
	)
);

?>