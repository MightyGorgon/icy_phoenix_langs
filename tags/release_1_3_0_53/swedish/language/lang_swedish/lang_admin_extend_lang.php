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
	'Lang_extend_lang_extend' => 'Till�gg f�r spr�k paket',
	'Lang_extend__custom' => 'Anpassat spr�kpaket',
	'Lang_extend__phpBB' => 'Icy Phoenix spr�kpaket',

	'Languages' => 'Spr�k',
	'Lang_management' => 'Management',
	'Lang_extend' => 'Spr�k utvidgnings management',
	'Lang_extend_explain' => 'H�r kan du l�gga till eller �ndra spr�kets nyckel poster',
	'Lang_extend_pack' => 'Spr�k Paket',
//	'Lang_extend_pack_explain' => 'This is the name of the pack, usualy the name of the MOD refering to',
	'Lang_extend_pack_explain' => 'Spr�k paket namn',

	'Lang_extend_entry' => 'Spr�k nyckel post',
	'Lang_extend_entries' => 'Spr�k nyckel poster',
	'Lang_extend_level_edit' => 'Redigera',
	'Lang_extend_level_admin' => 'Admin',
	'Lang_extend_level_normal' => 'Normal',

	'Lang_extend_add_entry' => 'L�gg till en ny spr�k nyckel post',

	'Lang_extend_key_main' => 'Spr�k huvud nyckel post',
	'Lang_extend_key_main_explain' => 'Detta �r huvud nyckel posten, normalt den �nda',
	'Lang_extend_key_sub' => 'Sekund�ra nyckel post',
	'Lang_extend_key_sub_explain' => 'Denna andra niv� nyckel post brukar inte anv�ndas',
	'Lang_extend_level' => 'Niv�n p� spr�k nyckel post',
	'Lang_extend_level_explain' => 'Admin niv� kan endast anv�ndas i admin konfigurations panel. Normal niv� kan anv�ndas �verallt.',

	'Lang_extend_missing_value' => 'Du m�ste ange �tminstone det engelska v�rdet',
	'Lang_extend_key_missing' => 'Huvud nyckel posten saknas',
	'Lang_extend_duplicate_entry' => 'Denna post existerar redan (se paketet %)',

	'Lang_extend_update_done' => 'Uppgifterna har uppdaterats successfullt.<br /><br />Klicka %sH�r%s f�r att �terv�nda till posten.<br /><br />Klicka %sH�r%s f�r att �terv�nda til post listan',
	'Lang_extend_delete_done' => 'Uppgifterna har tagits bort successfullt.<br />Notera att endast anpassade viktiga uppgifter �r raderade, inte de grundl�ggande viktiga uppgifter om det finns.<br /><br />Klicka %sH�r%s f�r att �terv�nda till post listan',

	'Lang_extend_search' => 'S�k i spr�k nyckel poster',
	'Lang_extend_search_words' => 'Ord att hitta',
	'Lang_extend_search_words_explain' => 'Separate words with a space',
	'Lang_extend_search_all' => 'Alla ord',
	'Lang_extend_search_one' => 'En av dessa',
	'Lang_extend_search_in' => 'S�k i',
	'Lang_extend_search_in_explain' => 'Exakt var de skall s�ka',
	'Lang_extend_search_in_key' => 'Nycklar',
	'Lang_extend_search_in_value' => 'V�rderingar',
	'Lang_extend_search_in_both' => 'B�da',
	'Lang_extend_search_all_lang' => 'Alla spr�k installerade',

	'Lang_extend_search_no_words' => 'Inga ord att s�ka f�rutsatt.<br /><br />Klicka %sH�r%s f�r att �terg� till paket listan.',
	'Lang_extend_search_results' => 'S�k resultat',
	'Lang_extend_value' => 'V�rde',
	'Lang_extend_level_leg' => 'Niv�',

	'Lang_extend_added_modified' => '*',
	'Lang_extend_modified' => '�ndrad',
	'Lang_extend_added' => 'Tillagd',
	)
);

?>