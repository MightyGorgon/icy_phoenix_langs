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
	'db_truncate' => 'Skrajšaj',
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
	'db_avg_r_len' => 'Povprecna dolžina vrstice',
	'db_data_len' => 'Dolžina podatkov',
	'db_max_dat_len' => 'Maksimalna dolžina podatkov',
	'db_index_len' => 'Dolžina Indeksa',
	'db_overhead' => 'Splošno',
	'db_auto_inc' => 'Avtomatsko skrajšanje',
	'db_with_sel' => 'Z izbranimi tabelami:',
	'db_field' => 'Polje',
	'db_type' => 'Vrsta',
	'db_null' => 'Nic',
	'db_key' => 'Kljuc',
	'db_default' => 'Privzeto',
	'db_extra' => 'Ekstra',

	'db_unauthed' => 'Nepooblašcen dostop.',
	'db_tru_warning' => 'Ali ste prepricani, da želite skrajšajte %s?',
	'db_dro_warning' => 'Ali ste prepricani, da želite, da se opustiti %s?',
	'db_warning_y' => 'Da',
	'db_warning_n' => 'Ne',
	'db_opt_success' => 'Optimizirajte Tabelo <b>%s</b>, Uspešno zakljuceno.',
	'db_tru_success' => 'Skrajšaj Tabelo <b>%s</b>, Uspešno zakljuceno.',
	'db_dro_success' => 'Opusti Tabelo <b>%s</b>, Uspešno zakljuceno.',
	'db_rep_success' => 'Popravi Tabelo<b>%s</b>, Uspešno zakljuceno.',
	'db_explained' => 'Optimiziraj Tabelo: Bo izprazniti vse ostanke bitov podatkov.<br />Skrajšajte tabelo: Bo izpraznite preglednico vseh njenih vsebino.<br />Brskanje: vam bo omogocilo, da si ogledate podatke v tabeli.<br />Opusti: Bo odstraniti tabelo iz zbirke podatkov.',
	'db_back' => 'Klikni %sTukaj%s za vrnitev na glavno stran.',
	'db_change_exp' => 'S tem boste lahko izvedli SQL\'s, kot so, VSTAVI V, SPREMENI TABELO, POSODOBI, IZBRIŠI IZ, OPUSTI TABELO, OPIŠI, itd... Dodajte toliko, kot želite, lociti vsak SQL ukaz s podpicjem.',
	'db_submit_q' => ' Pošlji Poizvedbo ',
	'db_sql_total' => 'SQL Poizvedba # %s',
	'db_aff_total' => 'Uspešno zakljuceno. Prizadete Vrstice: %s',
	'db_no_query' => 'Niste vnesli poizvedbe!',
	'db_sql_field_changed' => 'Ime polja Spremenjeno.',
	'db_sql_query_db' => 'Poizvedba zbirke podatkov: ',
	'DB_Admin' => 'IP MyAdmin',
	)
);

?>