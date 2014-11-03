<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_news.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
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
	'Regular_Post' => 'Regelbundna inlägg (visas Ej som nyheter)',
	'Current_Selection' => 'Aktuella urval',
	'Select_News_Category' => 'Välj nyhets kategori',
	'News' => 'Nyheter',
	'News_Cmx' => '<b>Nyheter:</b>&nbsp;',
	'Auth_News' => 'Nyheter',
	'View_Comments' => 'Visa Kommentarer',
	'Read_More' => 'Läs Mer',
	'News_Categories' => 'Nyhets Kategorier',

// Admin Stuff

// News Config
	'Add_news_categories' => 'Lägg till nyhets kategorier',
	'News_Configuration' => 'Nyhets konfiguration',
	'News_Add_Description' => 'Lägg till nya nyhets kategorier',
	'Icon' => 'Nyhets Ikon',
	'Add_new_category' => 'Lägg till nya nyhets kategorier',

	'Click_return_newsadmin' => 'Klicka %sHär%s för att återvända till Nyhets Administrationen',
	'Category_Deleted' => 'Nyhets kategori har tagits bort successfullt',
	'Category_Updated' => 'Nyhets kategori uppdaterad successfullt',
	'Category_Added' => 'Nyhets kategori successfullt tillagd',

	'News_Editing_Utility' => 'Nyhets kategori redigering',
	'News_Config' => 'Nyhets kategori konfiguration',
	'News_Explain' => 'Lägga till, ta bort och redigera nyhets kategorier.',

	'Enable_News' => '<strong>Aktivera nyhets utstationering</strong>',
	'News_Path' => '<strong>Nyhets ikoners sökväg</strong>',
	'News_Path_Explain' => 'Sökväg under din icyphoenix root dir, e.g. images/news',

	'News_explain' => 'Konfigurera Slashdot Nyhets Mod av CMX.',
	'News_settings' => 'Nyhets inställningar',

	'News_trim' => '<strong>Nyhets Trim Längd</strong>',
	'News_trim_explain' => 'Ställer in max längd för nyhets inlägg innan de är klippta. (0 = ingen trim).',

	'News_topic_trim' => '<strong>Nyhets Trim Ämnes Längd</strong>',
	'News_topic_trim_explain' => 'Ställer in max längd för nyhets ämnen innan de är klippta. (0 = ingen trim).',

	'News_item_num' => '<strong>Antal artiklar som ska visas</strong>',
	'News_item_num_explain' => 'Standard antalet av nyhets inlägg visas i news_viewnews.php.',

	'RSS_Configuration' => 'RSS Nyhets Feed Konfiguration',
	'Enable_RSS' => '<strong>Aktivera RSS Syndication</strong>',
	'Enable_RSS_explain' => 'RSS Syndication tillåter andra webbplatser att få tillgång till dina nyheter och visa dem på sina webbplatser',

	'Feed_Description' => '<strong>Feed Beskrivning</strong>',
	'Feed_Description_Explain' => 'Fras eller mening som beskriver feed.',

	'Feed_Language' => '<strong>Feed Språk</strong>',
	'Feed_Language_Explain' => 'Språk kanalen är skrivna i. Du kan använda värden definierade på W3C.',

	'Feed_TTL' => '<strong>Feed TTL (Time To Live)</strong>',
	'Feed_TTL_Explain' => 'TTL är det antal minuter som visar hur länge en kanal kan cacha innan uppfriskning från källan.',

	'Feed_Category' => '<strong>Feed Kategori</strong>',

	'Feed_Image' => '<strong>Feed Bild</strong>',
	'Feed_Image_Explain' => 'En bild som ska associeras med ditt nyhetsflöde. (Kan bara vara en liten knapp på bilden)',

	'Feed_Image_Desc' => '<strong>Feed Bild Beskrivning</strong>',

// New
	'Articles' => 'Artiklar',
	'Archives' => 'Arkiv',
	'Categories' => 'Kategorier',

	'News_base_url' => '<strong>Nyhets Mod Base URL</strong>',
	'News_base_url_explain' => 'Placeringen av din nyhets index fil.<br /> i.e. http://mydomain.com/, din nyhets index fil finns här.',
	'Show_RSS_abstract' => '<strong>Visa Abstrakt på RSS Feeds.</strong>',

	'News_index_file' => '<strong>Nyhets Mod Index Fil</strong>',
	'News_index_file_explain' => 'Namnet på nyhets index filen. dvs. news_index.php.',
	)
);

?>