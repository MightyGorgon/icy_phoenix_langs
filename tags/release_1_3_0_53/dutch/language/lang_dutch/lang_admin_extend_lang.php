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
* Ptirhiik (admin@rpgnet-fr.com)
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
	'Lang_extend_lang_extend' => 'Extensie voor taalpakketten',
	'Lang_extend__custom' => 'Eigen taalpakket',
	'Lang_extend__phpBB' => 'Icy Phoenix taalpakket',

	'Languages' => 'Talen',
	'Lang_management' => 'Beheer',
	'Lang_extend' => 'Uitgebreide taalbeheer',
	'Lang_extend_explain' => 'Hier kun je toevoegen of verwijderen van taalsleutels',
	'Lang_extend_pack' => 'Taalpakket',
//	'Lang_extend_pack_explain' => 'This is the name of the pack, usualy the name of the MOD refering to',
	'Lang_extend_pack_explain' => 'Taalpakketnaam',

	'Lang_extend_entry' => 'Taalsleutel',
	'Lang_extend_entries' => 'Taalsleutels',
	'Lang_extend_level_edit' => 'Bewerk',
	'Lang_extend_level_admin' => 'Beheerder',
	'Lang_extend_level_normal' => 'Normaal',

	'Lang_extend_add_entry' => 'Voeg een nieuwe taalsleutel toe',

	'Lang_extend_key_main' => 'Taalhoofdsleutel',
	'Lang_extend_key_main_explain' => 'Dit is de hoofdsleutel, meestal de enige',
	'Lang_extend_key_sub' => 'Tweede niveau taalsleutel',
	'Lang_extend_key_sub_explain' => 'Deze tweede niveau taalsleutel wordt vaak niet gebruikt',
	'Lang_extend_level' => 'Niveau van de taalsleutel',
	'Lang_extend_level_explain' => 'Beheerdersniveau kan alleen gebruikt worden in de beheerderspaneel. Normaal niveau kan overal gebruikt worden.',

	'Lang_extend_missing_value' => 'Je moet minimaal de Engelse vertaling ingeven',
	'Lang_extend_key_missing' => 'Hoofdsleutel ontbreekt',
	'Lang_extend_duplicate_entry' => 'Deze sleutel bestaat al (bekijk pakket %)',

	'Lang_extend_update_done' => 'Deze sleutel is succesvol bijgewerkt.<br /><br />Klik %shier%s om terug te keren naar de sleutel.<br /><br />Klik %shier%s om terug te keren naar de lijst',
	'Lang_extend_delete_done' => 'Deze sleutel is succesvol verwijderd.<br />Merk op dat alleen eigengemaakte sleutels verwijderd kunnen worden, niet de basis taalsleutels als deze er zijn.<br /><br />Klik %shier%s om terug te keren naar de lijst',

	'Lang_extend_search' => 'Zoek in de taalsleutels',
	'Lang_extend_search_words' => 'Woorden om te zoeken',
	'Lang_extend_search_words_explain' => 'Scheidt woorden met een spatie',
	'Lang_extend_search_all' => 'Alle woorden',
	'Lang_extend_search_one' => 'Een van deze',
	'Lang_extend_search_in' => 'Zoeken in',
	'Lang_extend_search_in_explain' => 'Precieze locatie waarin gezocht moet worden',
	'Lang_extend_search_in_key' => 'Sleutels',
	'Lang_extend_search_in_value' => 'Waarden',
	'Lang_extend_search_in_both' => 'Beide',
	'Lang_extend_search_all_lang' => 'Alle talen geinstalleerd',

	'Lang_extend_search_no_words' => 'Er zijn geen woorden die overeenkomen met je zoekopdracht.<br /><br />Klik %shier%s om terug te keren naar de pakketlijst.',
	'Lang_extend_search_results' => 'Zoekresultaten',
	'Lang_extend_value' => 'Waarde',
	'Lang_extend_level_leg' => 'Niveau',

	'Lang_extend_added_modified' => '*',
	'Lang_extend_modified' => 'Aangepast',
	'Lang_extend_added' => 'Toegevoegd',
	)
);

?>