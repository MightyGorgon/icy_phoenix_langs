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
  'db_browse' => 'Böngészés',
  'db_truncate' => 'Csonkol',
  'db_optimize' => 'Optimalizálás',
  'db_drop' => 'Eldob',
  'db_repair' => 'Javít',
  'db_structure' => 'Struktúra',
  'db_explain' => 'Akció magyarázata',
  'db_table_name' => 'Táblanév',
  'db_action' => 'Akció',
  'db_type' => 'Típus',
  'db_row_format' => 'Sorformátum',
  'db_rows' => 'Sorok',
  'db_avg_r_len' => 'Elfogadott sorszélesség',
  'db_data_len' => 'Adathossz',
  'db_max_dat_len' => 'Max adathossz',
  'db_index_len' => 'Index szélesség',
  'db_overhead' => 'Overhead',
  'db_auto_inc' => 'Automatikos növekmény',
  'db_with_sel' => 'kijelölt táblákon:',
  'db_field' => 'Mezõ',
  'db_null' => 'Null',
  'db_key' => 'Kulcs',
  'db_default' => 'Alapértelmezett',
  'db_extra' => 'Extra',
  'db_unauthed' => 'Nem azonosított hozzáférés.',
  'db_tru_warning' => 'Tényleg csonkolni akarod ezt: %s?',
  'db_dro_warning' => 'Tényleg el akarod dobni ezt: %s?',
  'db_warning_y' => 'Igen',
  'db_warning_n' => 'Nem',
  'db_opt_success' => '<b>%s</b> tábla optimalizálása: sikeres, teljes.',
  'db_tru_success' => '<b>%s</b> tábla csonkolása: sikeres, teljes.',
  'db_dro_success' => '<b>%s</b> tábla eldobása: sikeres, teljes.',
  'db_rep_success' => '<b>%s</b> tábla javítása: sikeres, teljes.',
  'db_explained' => 'Tábla optimalizálása: Eltávolítja az üres meradékbiteket.<br />
									Tábla csonkolása: Eltávolítja a tábla tartalmát.<br />
									Browse: Megnézheted a tábla tartalmát.<br />
									Eldob: Eltávolítja a táblát az adatbázisból.',
  'db_back' => 'Kattints %side%s a saját oldalra történõ visszatéréshez.',
  'db_change_exp' => 'Ennek a használatával el tudsz érni olyan SQL SQL parancsokat, mint az INSERT INTO, az ALTER TABLE, az UPDATE, a DELETE FROM, a DROP TABLE, a DESCRIBE, stb.. Többet is megadhatsz egyszerre, csak el kell õket vélasztanod pontosvesszõvel.',
  'db_submit_q' => ' Lekérés elküldése ',
  'db_sql_total' => 'SQL lekérés # %s',
  'db_aff_total' => 'Sikeres, teljes. Érintett sorok: %s',
  'db_no_query' => 'Nem adtál meg semmilyen lekérést!',
  'db_sql_field_changed' => 'Mezõ neve megváltoztatva.',
  'db_sql_query_db' => 'Lekérés az adatbázisodból: ',
  'DB_Admin' => 'phpBBMyAdmin',
))
?>