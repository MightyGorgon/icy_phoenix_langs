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
	'db_browse' => 'Anzeigen',
	'db_truncate' => 'Leeren',
	'db_optimize' => 'Optimieren',
	'db_drop' => 'Löschen',
	'db_repair' => 'Reparieren',
	'db_structure' => 'Struktur',
	'db_explain' => 'Aktionen erklären',

	'db_table_name' => 'Tabllenname',
	'db_action' => 'Aktion',
	'db_type' => 'Typ',
	'db_row_format' => 'Zeilen-Format',
	'db_rows' => 'Zeilen',
	'db_avg_r_len' => 'Durchschn. Zeilenlänge',
	'db_data_len' => 'Datenlänge',
	'db_max_dat_len' => 'Max Datenlänge',
	'db_index_len' => 'Indexlänge',
	'db_overhead' => 'Überhang',
	'db_auto_inc' => 'Auto Increment',
	'db_with_sel' => 'Ausgewählte Tabellen:',
	'db_field' => 'Feld',
	'db_type' => 'Typ',
	'db_null' => 'Null',
	'db_key' => 'Key',
	'db_default' => 'Standard',
	'db_extra' => 'Extra',

	'db_unauthed' => 'Unautorisierter Zugriff. Nur ausgewählte Administratoren dürfen diese Funtion nutzen.',
	'db_tru_warning' => 'Leere %s! Bist du sicher?',
	'db_dro_warning' => 'Lösche %s! Bist du sicher?',
	'db_warning_y' => 'Ja',
	'db_warning_n' => 'Nein',
	'db_opt_success' => 'Optimieren von Tabelle <b>%s</b> erfolgreich abgeschlossen.',
	'db_tru_success' => 'Leeren von Tabelle <b>%s</b> erfolgreich abgeschlossen.',
	'db_dro_success' => 'Löschen von Tabelle <b>%s</b> erfolgreich abgeschlossen.',
	'db_rep_success' => 'Reparieren von Tabelle <b>%s</b> erfolgreich abgeschlossen.',	
	'db_explained' => 'Tabelle optimieren: Entfernt alle übriggebliebenen Datenbits.<br />Tabelle leeren: Entfernt sämtlichen Inhalt aus der Tabelle.<br />Tabelle anzeigen: Erlaubt dir das Anschauen von Daten in der Tabelle.<br />Tabelle löschen: Entfernt die Tabelle aus der Datenbank.',
	'db_back' => 'Klicke %shier%s, um zur Hauptseite zurückzukehren.',
	'db_change_exp' => 'Mit der Verwendung dieser Funktion kannst du SQL Befehle wie INSERT INTO, ALTER TABLE, UPDATE, DELETE FROM, DROP TABLE, DESCRIBE, etc. ausführen. Füge so viele hinzu, wie du möchtest. Separiere jeden SQL Befehl mit einem Semikolon.',
	'db_submit_q' => ' Abfrage absenden ',
	'db_sql_total' => 'SQL Abfrage # %s',
	'db_aff_total' => 'Erfolgreich abgeschlossen. Betroffene Zeilen: %s',
	'db_no_query' => 'Du hast keien Abfrage eingegeben!',
	'db_sql_field_changed' => 'Feld Name geändert.',
	'db_sql_query_db' => 'Datenbankabfrage: ',
	'DB_Admin' => 'IP MyAdmin',
	)
);

?>