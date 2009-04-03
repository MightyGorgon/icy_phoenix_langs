<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_bb_db_admin.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
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
	'db_browse' => 'Bekijken',
	'db_truncate' => 'Legen',
	'db_optimize' => 'Optimaliseren',
	'db_drop' => 'Verwijderen',
	'db_repair' => 'Repareren',
	'db_structure' => 'Structuur',
	'db_explain' => 'Acties uitleggen',
	
	'db_table_name' => 'Tabelnaam',
	'db_action' => 'Actie',
	'db_type' => 'Type',
	'db_row_format' => 'Regelformaat',
	'db_rows' => 'Regels',
	'db_avg_r_len' => 'Gem. regellengte',
	'db_data_len' => 'Gegevenslengte',
	'db_max_dat_len' => 'Max. gegevenslengte',
	'db_index_len' => 'Indexlengte',
	'db_overhead' => 'Overhead',
	'db_auto_inc' => 'Auto Increment',
	'db_with_sel' => 'Met geselecteerde tabellen:',
	'db_field' => 'Veld',
	'db_type' => 'Type',
	'db_null' => 'Null',
	'db_key' => 'Sleutel',
	'db_default' => 'Standaard',
	'db_extra' => 'Extra',

	'db_unauthed' => 'Ongeauthoriseerde toegang.',
	'db_tru_warning' => 'Weet je zeker dat je %s wilt legen?',
	'db_dro_warning' => 'Weet je zeker dat je %s wilt verwijderen?',
	'db_warning_y' => 'Ja',
	'db_warning_n' => 'Nee',
	'db_opt_success' => 'Optimiseren van tabel <b>%s</b>, succesvol afgerond.',
	'db_tru_success' => 'Legen van tabel <b>%s</b>, succesvol afgerond.',
	'db_dro_success' => 'Verwijderen van tabel <b>%s</b>, succesvol afgerond.',
	'db_rep_success' => 'Repareren van tabel <b>%s</b>, succesvol afgerond.',
	'db_explained' => 'Tabel optimiliseren: verwijdert alle overgebleven gegevens.<br />Tabel legen: verwijdert alle inhoud uit een tabel.<br />Tabel bekijken: staat je toe om de gegevens in een tabel te bekijken.<br />Tabel verwijderen: verwijdert de tabel uit je database.',
	'db_back' => 'Klik %shier%s om terug te keren naar de hoofdpagina.',
	'db_change_exp' => 'Bij gebruikmaken van deze functie, ben je in de gelegenheid om query\'s als, INSERT INTO, ALTER TABLE, UPDATE, DELETE FROM, DROP TABLE, DESCRIBE, etc. uit te voeren. Voeg zoveel toe als je maar wilt, scheidt elk SQL-commando door een puntkomma.',
	'db_submit_q' => ' Query uitvoeren ',
	'db_sql_total' => 'SQL query # %s',
	'db_aff_total' => 'Succesvol afgerond. Getroffen rijen: %s',
	'db_no_query' => 'Je hebt geen  query ingegeven!',
	'db_sql_field_changed' => 'Veldnaam veranderd.',
	'db_sql_query_db' => 'Databasequery: ',
	'DB_Admin' => 'phpBBMyAdmin',
	)
);

?>