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
	'db_browse' => 'Brskaj',
	'db_truncate' => 'Skraj�aj',
	'db_optimize' => 'Optimiziraj',
	'db_drop' => 'Opusti',
	'db_repair' => 'Popravi',
	'db_structure' => 'Struktura',
	'db_explain' => 'Pojasni ukrepe',

	'db_table_name' => 'Ime tabele',
	'db_action' => 'Ukrep',
	'db_type' => 'Vrsta',
	'db_row_format' => 'Format vrstice',
	'db_rows' => 'Vrstice',
	'db_avg_r_len' => 'Povprecna dol�ina vrstice',
	'db_data_len' => 'Dol�ina podatkov',
	'db_max_dat_len' => 'Maksimalna dol�ina podatkov',
	'db_index_len' => 'Dol�ina Indeksa',
	'db_overhead' => 'Splo�no',
	'db_auto_inc' => 'Avtomatsko skraj�anje',
	'db_with_sel' => 'Z izbranimi tabelami:',
	'db_field' => 'Polje',
	'db_type' => 'Vrsta',
	'db_null' => 'Nic',
	'db_key' => 'Kljuc',
	'db_default' => 'Privzeto',
	'db_extra' => 'Ekstra',

	'db_unauthed' => 'Nepoobla�cen dostop.',
	'db_tru_warning' => 'Ali ste prepricani, da �elite skraj�ajte %s?',
	'db_dro_warning' => 'Ali ste prepricani, da �elite, da se opustiti %s?',
	'db_warning_y' => 'Da',
	'db_warning_n' => 'Ne',
	'db_opt_success' => 'Optimizirajte Tabelo <b>%s</b>, Uspe�no zakljuceno.',
	'db_tru_success' => 'Skraj�aj Tabelo <b>%s</b>, Uspe�no zakljuceno.',
	'db_dro_success' => 'Opusti Tabelo <b>%s</b>, Uspe�no zakljuceno.',
	'db_rep_success' => 'Popravi Tabelo<b>%s</b>, Uspe�no zakljuceno.',
	'db_explained' => 'Optimiziraj Tabelo: Bo izprazniti vse ostanke bitov podatkov.<br />Skraj�ajte tabelo: Bo izpraznite preglednico vseh njenih vsebino.<br />Brskanje: vam bo omogocilo, da si ogledate podatke v tabeli.<br />Opusti: Bo odstraniti tabelo iz zbirke podatkov.',
	'db_back' => 'Klikni %sTukaj%s za vrnitev na glavno stran.',
	'db_change_exp' => 'S tem boste lahko izvedli SQL\'s, kot so, VSTAVI V, SPREMENI TABELO, POSODOBI, IZBRI�I IZ, OPUSTI TABELO, OPI�I, itd... Dodajte toliko, kot �elite, lociti vsak SQL ukaz s podpicjem.',
	'db_submit_q' => ' Po�lji Poizvedbo ',
	'db_sql_total' => 'SQL Poizvedba # %s',
	'db_aff_total' => 'Uspe�no zakljuceno. Prizadete Vrstice: %s',
	'db_no_query' => 'Niste vnesli poizvedbe!',
	'db_sql_field_changed' => 'Ime polja Spremenjeno.',
	'db_sql_query_db' => 'Poizvedba zbirke podatkov: ',
	'DB_Admin' => 'IP MyAdmin',
	)
);

?>