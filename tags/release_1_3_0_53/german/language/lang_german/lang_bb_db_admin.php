<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_bb_db_admin.php 33 2009-05-02 16:34:07Z TheSteffen $
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
	'db_drop' => 'L�schen',
	'db_repair' => 'Reparieren',
	'db_structure' => 'Struktur',
	'db_explain' => 'Aktionen erkl�ren',

	'db_table_name' => 'Tabllenname',
	'db_action' => 'Aktion',
	'db_type' => 'Typ',
	'db_row_format' => 'Zeilen-Format',
	'db_rows' => 'Zeilen',
	'db_avg_r_len' => 'Durchschn. Zeilenl�nge',
	'db_data_len' => 'Datenl�nge',
	'db_max_dat_len' => 'Max Datenl�nge',
	'db_index_len' => 'Indexl�nge',
	'db_overhead' => '�berhang',
	'db_auto_inc' => 'Auto Increment',
	'db_with_sel' => 'Ausgew�hlte Tabellen:',
	'db_field' => 'Feld',
	'db_type' => 'Typ',
	'db_null' => 'Null',
	'db_key' => 'Key',
	'db_default' => 'Standard',
	'db_extra' => 'Extra',

	'db_unauthed' => 'Unautorisierter Zugriff. Nur ausgew�hlte Administratoren d�rfen diese Funtion nutzen.',
	'db_tru_warning' => 'Leere %s! Bist du sicher?',
	'db_dro_warning' => 'L�sche %s! Bist du sicher?',
	'db_warning_y' => 'Ja',
	'db_warning_n' => 'Nein',
	'db_opt_success' => 'Optimieren von Tabelle <b>%s</b> erfolgreich abgeschlossen.',
	'db_tru_success' => 'Leeren von Tabelle <b>%s</b> erfolgreich abgeschlossen.',
	'db_dro_success' => 'L�schen von Tabelle <b>%s</b> erfolgreich abgeschlossen.',
	'db_rep_success' => 'Reparieren von Tabelle <b>%s</b> erfolgreich abgeschlossen.',	
	'db_explained' => 'Tabelle optimieren: Entfernt alle �briggebliebenen Datenbits.<br />Tabelle leeren: Entfernt s�mtlichen Inhalt aus der Tabelle.<br />Tabelle anzeigen: Erlaubt dir das Anschauen von Daten in der Tabelle.<br />Tabelle l�schen: Entfernt die Tabelle aus der Datenbank.',
	'db_back' => 'Klicke %shier%s, um zur Hauptseite zur�ckzukehren.',
	'db_change_exp' => 'Mit der Verwendung dieser Funktion kannst du SQL Befehle wie INSERT INTO, ALTER TABLE, UPDATE, DELETE FROM, DROP TABLE, DESCRIBE, etc. ausf�hren. F�ge so viele hinzu, wie du m�chtest. Separiere jeden SQL Befehl mit einem Semikolon.',
	'db_submit_q' => ' Abfrage absenden ',
	'db_sql_total' => 'SQL Abfrage # %s',
	'db_aff_total' => 'Erfolgreich abgeschlossen. Betroffene Zeilen: %s',
	'db_no_query' => 'Du hast keien Abfrage eingegeben!',
	'db_sql_field_changed' => 'Feld Name ge�ndert.',
	'db_sql_query_db' => 'Datenbankabfrage: ',
	'DB_Admin' => 'IP MyAdmin',
	)
);

?>