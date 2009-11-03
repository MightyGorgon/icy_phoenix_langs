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

$lang = array_merge($lang, array(
// Main Stuff.
	'Regular_Post' => 'Regelbundna Inl�gg (visas Ej som nyheter)',
	'Current_Selection' => 'Aktuella Urval',
	'Select_News_Category' => 'V�lj nyhets kategori',
	'News' => 'Nyheter',
	'News_Cmx' => '<b>Nyheter:</b>&nbsp;',
	'Auth_News' => 'Nyheter',
	'View_Comments' => 'Visa Kommentarer',
	'Read_More' => 'L�s Mer',
	'News_Categories' => 'Nyhets Kategorier',

// Admin Stuff

// News Config
	'Add_news_categories' => 'L�gg Till Nyhets Kategorier',
	'News_Configuration' => 'Nyhets Konfiguration',
	'News_Add_Description' => 'L�gg till nya nyhets kategorier',
	'Icon' => 'Nyhets Ikon',
	'Add_new_category' => 'L�gg till nya nyhets kategorier',

	'Click_return_newsadmin' => 'Klicka %sH�r%s f�r att �terv�nda till Nyhets Administrationen',
	'Category_Deleted' => 'Nyhets kategori har tagits bort successfullt',
	'Category_Updated' => 'Nyhets kategori uppdaterad successfullt',
	'Category_Added' => 'Nyhets kategori successfullt tillagd',

	'News_Editing_Utility' => 'Nyhets Kategori Redigering',
	'News_Config' => 'Nyhets Kategori Konfiguration',
	'News_Explain' => 'L�gga till, ta bort och redigera nyhets kategorier.',

	'Enable_News' => '<strong>Aktivera nyhets utstationering</strong>',
	'News_Path' => '<strong>Nyhets ikoners s�kv�g</strong>',
	'News_Path_Explain' => 'S�kv�g under din icyphoenix root dir, e.g. images/news',

	'News_explain' => 'konfigurera Slashdot Nyhets Mod av CMX.',
	'News_settings' => 'Nyhets Inst�llningar',

	'News_trim' => '<strong>Nyhets Trim L�ngd</strong>',
	'News_trim_explain' => 'St�ller in max l�ngd f�r nyhets inl�gg innan de �r klippta. (0 = ingen trim).',

	'News_topic_trim' => '<strong>Nyhets Trim �mne L�ngd</strong>',
	'News_topic_trim_explain' => 'St�ller in max l�ngd f�r nyhets �mnen innan de �r klippta. (0 = ingen trim).',

	'News_item_num' => '<strong>Antal artiklar som ska visas</strong>',
	'News_item_num_explain' => 'Standard antalet av nyhets inl�gg visas i news_viewnews.php.',

	'RSS_Configuration' => 'RSS Nyhets Feed Konfiguration',
	'Enable_RSS' => '<strong>Aktivera RSS Syndication</strong>',
	'Enable_RSS_explain' => 'RSS Syndication till�ter andra webbplatser att f� tillg�ng till dina nyheter och visa dem p� sina webbplatser',

	'Feed_Description' => '<strong>Feed Beskrivning</strong>',
	'Feed_Description_Explain' => 'Fras eller mening som beskriver feed.',

	'Feed_Language' => '<strong>Feed Spr�k</strong>',
	'Feed_Language_Explain' => 'Spr�ket kanalen �r skrivna i. Du kan anv�nda v�rden definierade p� W3C.',

	'Feed_TTL' => '<strong>Feed TTL (Time To Live)</strong>',
	'Feed_TTL_Explain' => 'TTL �r det antal minuter som visar hur l�nge en kanal kan cacha innan uppfriskande fr�n k�llan.',

	'Feed_Category' => '<strong>Feed Kategori</strong>',

	'Feed_Image' => '<strong>Feed Bild</strong>',
	'Feed_Image_Explain' => 'En bild som ska associeras med ditt nyhetsfl�de. (Kan bara vara en liten knapp p� bilden)',

	'Feed_Image_Desc' => '<strong>Feed Bild Beskrivning</strong>',

// New
	'Articles' => 'Artiklar',
	'Archives' => 'Arkiv',
	'Categories' => 'Kategorier',

	'News_base_url' => '<strong>Nyhets Mod Base URL</strong>',
	'News_base_url_explain' => 'Placeringen av din nyhets index filen.<br /> i.e. http://mydomain.com/, din nyhets index fil finns h�r.',
	'Show_RSS_abstract' => '<strong>Visa Abstrakt p� RSS Feeds.</strong>',

	'News_index_file' => '<strong>Nyhets Mod Index Fil</strong>',
	'News_index_file_explain' => 'Namnet p� nyhets index filen. dvs. news_index.php.',
	)
);

?>