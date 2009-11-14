<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 110 2009-07-14 08:09:47Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
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

$lang = array_merge($lang, array (
  'db_browse' => 'B�ng�sz�s',
  'db_truncate' => 'Csonkol',
  'db_optimize' => 'Optimaliz�l�s',
  'db_drop' => 'Eldob',
  'db_repair' => 'Jav�t',
  'db_structure' => 'Strukt�ra',
  'db_explain' => 'Akci� magyar�zata',
  'db_table_name' => 'T�blan�v',
  'db_action' => 'Akci�',
  'db_type' => 'T�pus',
  'db_row_format' => 'Sorform�tum',
  'db_rows' => 'Sorok',
  'db_avg_r_len' => 'Elfogadott sorsz�less�g',
  'db_data_len' => 'Adathossz',
  'db_max_dat_len' => 'Max adathossz',
  'db_index_len' => 'Index sz�less�g',
  'db_overhead' => 'Overhead',
  'db_auto_inc' => 'Automatikos n�vekm�ny',
  'db_with_sel' => 'kijel�lt t�bl�kon:',
  'db_field' => 'Mez�',
  'db_null' => 'Null',
  'db_key' => 'Kulcs',
  'db_default' => 'Alap�rtelmezett',
  'db_extra' => 'Extra',
  'db_unauthed' => 'Nem azonos�tott hozz�f�r�s.',
  'db_tru_warning' => 'T�nyleg csonkolni akarod ezt: %s?',
  'db_dro_warning' => 'T�nyleg el akarod dobni ezt: %s?',
  'db_warning_y' => 'Igen',
  'db_warning_n' => 'Nem',
  'db_opt_success' => '<b>%s</b> t�bla optimaliz�l�sa: sikeres, teljes.',
  'db_tru_success' => '<b>%s</b> t�bla csonkol�sa: sikeres, teljes.',
  'db_dro_success' => '<b>%s</b> t�bla eldob�sa: sikeres, teljes.',
  'db_rep_success' => '<b>%s</b> t�bla jav�t�sa: sikeres, teljes.',
  'db_explained' => 'T�bla optimaliz�l�sa: Elt�vol�tja az �res merad�kbiteket.<br />
									T�bla csonkol�sa: Elt�vol�tja a t�bla tartalm�t.<br />
									Browse: Megn�zheted a t�bla tartalm�t.<br />
									Eldob: Elt�vol�tja a t�bl�t az adatb�zisb�l.',
  'db_back' => 'Kattints %side%s a saj�t oldalra t�rt�n� visszat�r�shez.',
  'db_change_exp' => 'Ennek a haszn�lat�val el tudsz �rni olyan SQL SQL parancsokat, mint az INSERT INTO, az ALTER TABLE, az UPDATE, a DELETE FROM, a DROP TABLE, a DESCRIBE, stb.. T�bbet is megadhatsz egyszerre, csak el kell �ket v�lasztanod pontosvessz�vel.',
  'db_submit_q' => ' Lek�r�s elk�ld�se ',
  'db_sql_total' => 'SQL lek�r�s # %s',
  'db_aff_total' => 'Sikeres, teljes. �rintett sorok: %s',
  'db_no_query' => 'Nem adt�l meg semmilyen lek�r�st!',
  'db_sql_field_changed' => 'Mez� neve megv�ltoztatva.',
  'db_sql_query_db' => 'Lek�r�s az adatb�zisodb�l: ',
  'DB_Admin' => 'phpBBMyAdmin',
))
?>