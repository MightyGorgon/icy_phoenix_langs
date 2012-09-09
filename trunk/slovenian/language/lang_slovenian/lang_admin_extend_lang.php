<?php
/**
*
* @package Intero
* @version $Id: lang_admin_extend_lang.php 34 2011-05-07 22:45:10Z 
* @copyright (c) 2011 Intero
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
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
'Lang_extend_lang_extend' => 'Podaljški za jezikovne pakete',
	'Lang_extend__custom' => 'Jezikovni paket po meri',
	'Lang_extend__phpBB' => 'Intero jezikovni paket',

	'Languages' => 'Jeziki',
	'Lang_management' => 'Upravljanje',
	'Lang_extend' => 'Razširjeno upravljanje jezikov',
	'Lang_extend_explain' => 'Tukaj lahko dodate ali spremenite kljucne vnose jezikov',
	'Lang_extend_pack' => 'Jezikovni Paket',
//	'Lang_extend_pack_explain' => 'To je ime paketa, obicajno ime MOD-a na keterega se nanaša',
	'Lang_extend_pack_explain' => 'Ime Jezikovnega paketa',

	'Lang_extend_entry' => 'Kljucni vnos Jezika',
	'Lang_extend_entries' => 'Kljucni vnos Jezika',
	'Lang_extend_level_edit' => 'Editiraj',
	'Lang_extend_level_admin' => 'Administrator',
	'Lang_extend_level_normal' => 'Normalno',

	'Lang_extend_add_entry' => 'Dodaj nov kljucen jezikovni vnos',

	'Lang_extend_key_main' => 'Glavni kljucni vnos jezika',
	'Lang_extend_key_main_explain' => 'To je glavni kljucni vnos jezika, obicajno edini',
	'Lang_extend_key_sub' => 'Sekundarni kljucni vnos',
	'Lang_extend_key_sub_explain' => 'Sekundarni kljucni vnos obijacno ni v uporabi',
	'Lang_extend_level' => 'Raven kljucnega vnosa jezika',
	'Lang_extend_level_explain' => 'Admin stopnja lahko se lahko uporablja samo v konfiguraciji na administrativni plošci. Normalno raven se lahko uporablja povsod.',

	'Lang_extend_missing_value' => 'Morate zagotoviti vsaj angleško vrednost',
	'Lang_extend_key_missing' => 'Glavni vnos kljuca manjka',
	'Lang_extend_duplicate_entry' => 'Ta vnos že obstaja (see pack %)',

	'Lang_extend_update_done' => 'Vnos je bil uspešno posodobljen.<br /><br />Klikni %sTukaj%s za vrnitev na vnos.<br /><br />Klikni %sTukaj%s za vrnitev na seznam vnosov',
	'Lang_extend_delete_done' => 'Vnos je bil uspešno izbrisan.<br />Upoštevajte, da so le prilagojeni kljucni vpisi izbrisani, ne osnovni kljucni vnosi, ce obstajajo.<br /><br />Klikni %sTukaj%s za vrnitev na seznam vnosov',

	'Lang_extend_search' => 'Iskanje v kljucnih vnosih jezika',
	'Lang_extend_search_words' => 'Najdi besede',
	'Lang_extend_search_words_explain' => 'Loci besede z presledkom',
	'Lang_extend_search_all' => 'Vse besede',
	'Lang_extend_search_one' => 'Ena od teh',
	'Lang_extend_search_in' => 'Išci v',
	'Lang_extend_search_in_explain' => 'Tocna lokacija iskanja',
	'Lang_extend_search_in_key' => 'Kljuci',
	'Lang_extend_search_in_value' => 'Vrednosti',
	'Lang_extend_search_in_both' => 'Oboje',
	'Lang_extend_search_all_lang' => 'Vsi jeziki namešceni',

	'Lang_extend_search_no_words' => 'Niste podali besed za iskanje.<br /><br />Klikni %sTukaj%s za vrnitev na seznam paketov.',
	'Lang_extend_search_results' => 'Rezultati iskanja',
	'Lang_extend_value' => 'Vrednost',
	'Lang_extend_level_leg' => 'Stopnja',

	'Lang_extend_added_modified' => '*',
	'Lang_extend_modified' => 'Spremenjeno',
	'Lang_extend_added' => 'Dodano',
	)
);

?>