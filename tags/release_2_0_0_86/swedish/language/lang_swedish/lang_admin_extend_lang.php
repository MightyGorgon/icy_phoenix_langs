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
	'Lang_extend_lang_extend' => 'Tillägg för språk paket',
	'Lang_extend__custom' => 'Anpassat språkpaket',
	'Lang_extend__phpBB' => 'Icy Phoenix språkpaket',

	'Languages' => 'Språk',
	'Lang_management' => 'Management',
	'Lang_extend' => 'Språk utvidgnings management',
	'Lang_extend_explain' => 'Här kan du lägga till eller ändra språkets nyckel poster',
	'Lang_extend_pack' => 'Språk paket',
//	'Lang_extend_pack_explain' => 'This is the name of the pack, usualy the name of the MOD refering to',
	'Lang_extend_pack_explain' => 'Språk paket namn',

	'Lang_extend_entry' => 'Språk nyckel post',
	'Lang_extend_entries' => 'Språk nyckel poster',
	'Lang_extend_level_edit' => 'Redigera',
	'Lang_extend_level_admin' => 'Admin',
	'Lang_extend_level_normal' => 'Normal',

	'Lang_extend_add_entry' => 'Lägg till en ny språk nyckel post',

	'Lang_extend_key_main' => 'Språk huvud nyckel post',
	'Lang_extend_key_main_explain' => 'Detta är huvud nyckel posten, normalt den ända',
	'Lang_extend_key_sub' => 'Sekundära nyckel post',
	'Lang_extend_key_sub_explain' => 'Denna andra nivå nyckel post brukar inte användas',
	'Lang_extend_level' => 'Nivån på språk nyckel post',
	'Lang_extend_level_explain' => 'Admin nivå kan endast användas i admin konfigurations panel. Normal nivå kan användas överallt.',

	'Lang_extend_missing_value' => 'Du måste ange åtminstone det engelska värdet',
	'Lang_extend_key_missing' => 'Huvud nyckel posten saknas',
	'Lang_extend_duplicate_entry' => 'Denna post existerar redan (se paketet %)',

	'Lang_extend_update_done' => 'Uppgifterna har uppdaterats successfullt.<br /><br />Klicka %sHär%s för att återvända till posten.<br /><br />Klicka %sHär%s för att återvända till post listan',
	'Lang_extend_delete_done' => 'Uppgifterna har tagits bort successfullt.<br />Notera att endast anpassade viktiga uppgifter är raderade, inte de grundläggande viktiga uppgifter om det finns.<br /><br />Klicka %sHär%s för att återvända till post listan',

	'Lang_extend_search' => 'Sök i språk nyckel poster',
	'Lang_extend_search_words' => 'Ord att hitta',
	'Lang_extend_search_words_explain' => 'Separera ord med mellanslag',
	'Lang_extend_search_all' => 'Alla ord',
	'Lang_extend_search_one' => 'En av dessa',
	'Lang_extend_search_in' => 'Sök i',
	'Lang_extend_search_in_explain' => 'Exakt var de skall söka',
	'Lang_extend_search_in_key' => 'Nycklar',
	'Lang_extend_search_in_value' => 'Värderingar',
	'Lang_extend_search_in_both' => 'Båda',
	'Lang_extend_search_all_lang' => 'Alla språk installerade',

	'Lang_extend_search_no_words' => 'Inga ord att söka förutsatt.<br /><br />Klicka %sHär%s för att återgå till paket listan.',
	'Lang_extend_search_results' => 'Sök resultat',
	'Lang_extend_value' => 'Värde',
	'Lang_extend_level_leg' => 'Nivå',

	'Lang_extend_added_modified' => '*',
	'Lang_extend_modified' => 'Ändrad',
	'Lang_extend_added' => 'Tillagd',
	)
);

?>