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
	'Lang_extend_lang_extend' => 'Extension for languages packs',
	'Lang_extend__custom' => 'Custom language pack',
	'Lang_extend__phpBB' => 'Icy Phoenix language pack',

	'Languages' => 'Sprachen',
	'Lang_management' => 'Verwaltung',
	'Lang_extend' => 'Spracherweiterungs Verwaltung',
	'Lang_extend_explain' => 'Hier kannst du Sprachvariablen hinzufügen oder ändern.',
	'Lang_extend_pack' => 'Datei',
//	'Lang_extend_pack_explain' => 'This is the name of the pack, usualy the name of the MOD refering to',
	'Lang_extend_pack_explain' => 'Dateiname',

	'Lang_extend_entry' => 'Variable',
	'Lang_extend_entries' => 'Sprachvariable',
	'Lang_extend_level_edit' => 'Bearbeiten',
	'Lang_extend_level_admin' => 'Admin',
	'Lang_extend_level_normal' => 'Normal',

	'Lang_extend_add_entry' => 'Neue Variable erstellen',

	'Lang_extend_key_main' => 'Sprachvariable',
	'Lang_extend_key_main_explain' => 'Dies ist die Hauptsprachvariable, gewöhnlich auch der einzige Eintrag',
	'Lang_extend_key_sub' => 'Zweite Sprachvariable',
	'Lang_extend_key_sub_explain' => 'Dies ist die zweite Sprachvariable die normalerweise nicht genutzt wird.',
	'Lang_extend_level' => 'Level der Sprachvariablen',
	'Lang_extend_level_explain' => 'Admin Level kann nur im Administrations-Bereich genutzt werden. Normales Level kann überall genutzt werden.',

	'Lang_extend_missing_value' => 'Du hast mindestens den englischen Wert zu definieren.',
	'Lang_extend_key_missing' => 'Das Feld "Sprachvariable" wurde nicht ausgefüllt.',
	'Lang_extend_duplicate_entry' => 'Dieser Eintrag existiert bereits (siehe Datei %)',

	'Lang_extend_update_done' => 'Der Eintrag wurde erfolgreich aktualisiert.<br /><br />Klicke %shier%s, um zum Eintrag zurückzukehren.<br /><br />Klicke %shier%s, um zur Eintragsliste zurückzukehren.',
	'Lang_extend_delete_done' => 'Der Eintrag wurde erfolgreich gelöscht.<br />Note that only customized key entries are deleted, not the basic key entries if exist.<br /><br />Klicke %shier%s, um zur Eintragsliste zurückzukehren.',

	'Lang_extend_search' => 'Suchen in den Sprachvariablen',
	'Lang_extend_search_words' => 'Zu suchende Wörter',
	'Lang_extend_search_words_explain' => 'Trenne mehrere Wörter mit einem Leerzeichen',
	'Lang_extend_search_all' => 'Nach allen Wörtern suchen',
	'Lang_extend_search_one' => 'Nach irgendeinem Wort suchen',
	'Lang_extend_search_in' => 'Suchen in',
	'Lang_extend_search_in_explain' => 'Bestimme wo gesucht wird',
	'Lang_extend_search_in_key' => 'Variable',
	'Lang_extend_search_in_value' => 'Wert',
	'Lang_extend_search_in_both' => 'Beide',
	'Lang_extend_search_all_lang' => 'Alle installierten Sprachen',

	'Lang_extend_search_no_words' => 'Keine zu suchenden Wörter eingegeben.<br /><br />Klicke %shier%s, um zur Dateiliste zurückzukehren.',
	'Lang_extend_search_results' => 'Ergebnisse',
	'Lang_extend_value' => 'Wert',
	'Lang_extend_level_leg' => 'Level',

	'Lang_extend_added_modified' => '*',
	'Lang_extend_modified' => 'Geändert',
	'Lang_extend_added' => 'Hinzugefügt',
	)
);

?>