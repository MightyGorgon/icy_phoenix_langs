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
	'Regular_Post' => 'Normális hozzászólás (nincs megjelenítve a híreknél)',
	'Current_Selection' => 'Jelenleg kiválasztva',
	'Select_News_Category' => 'Válassz hírkategóriát',
	'News' => 'Hírek',
	'News_Cmx' => '<b>Hírek:</b>&nbsp;',
	'Auth_News' => 'Hírek',
	'View_Comments' => 'Hozzászólások megtekintése',
	'Read_More' => 'Tovább',
	'News_Categories' => 'Hírkategóriák',

// Admin Stuff

// News Config
	'Add_news_categories' => 'Hírkategóriák hozzáadása',
	'News_Configuration' => 'Hírek beállítások',
	'News_Add_Description' => 'Új hírkategória hozzáadása',
	'Icon' => 'Hírek ikon',
	'Add_new_category' => 'Új hírkategória hozzáadása',

	'Click_return_newsadmin' => 'Kattints %side%s, hogy visszatérj a Hírek Adminisztrációba',
	'Category_Deleted' => 'Hírkategória sikeresen törölve',
	'Category_Updated' => 'Hírketgória sikeresen frissítve',
	'Category_Added' => 'Hírkategória sikeresen hozzáadva',

	'News_Editing_Utility' => 'Hírkategória szerkesztése',
	'News_Config' => 'Hírkategória beállítások',
	'News_Explain' => 'Hírkategóriák hozzáadása, szerkesztése és eltávolítása.',

	'Enable_News' => '<strong>Hír beküldésének engedélyezése</strong>',
	'News_Path' => '<strong>Hírek ikonjának útvonala</strong>',
	'News_Path_Explain' => 'útvonal az icyphoenix gyökérkönyvtárából, pl. images/news',

	'News_explain' => 'Slashdot News Mod by CMX beállítása.',
	'News_settings' => 'Hírek beállítások',

	'News_trim' => '<strong>News Trim Length</strong>',
	'News_trim_explain' => 'Sets the max length for news posts before they are trimmed. (0 = no trim).',

	'News_topic_trim' => '<strong>News Trim Topic Length</strong>',
	'News_topic_trim_explain' => 'Sets the max length for news topics before they are trimmed. (0 = no trim).',

	'News_item_num' => '<strong>Megjelenítendő elemek száma</strong>',
	'News_item_num_explain' => 'Az alapértelmezettként megjelenített hírek száma a news_viewnews.php oldalon.',

	'RSS_Configuration' => 'RSS News Feed Configuration',
	'Enable_RSS' => '<strong>Enable RSS Syndication</strong>',
	'Enable_RSS_explain' => 'RSS Syndication allows other websites to access your news and display it on their sites',

	'Feed_Description' => '<strong>Feed Description</strong>',
	'Feed_Description_Explain' => 'Phrase or sentence describing the feed.',

	'Feed_Language' => '<strong>Feed Language</strong>',
	'Feed_Language_Explain' => 'The language the channel is written in. You may use values defined by the W3C.',

	'Feed_TTL' => '<strong>Feed TTL (Time To Live)</strong>',
	'Feed_TTL_Explain' => 'TTL is the number of minutes indicating how long a channel can be cached before refreshing from the source.',

	'Feed_Category' => '<strong>Feed Category</strong>',

	'Feed_Image' => '<strong>Feed Image</strong>',
	'Feed_Image_Explain' => 'An image to be associated with your news feed. (Can only be a small button size image)',

	'Feed_Image_Desc' => '<strong>Feed Image Description</strong>',

// New
	'Articles' => 'Articles',
	'Archives' => 'Archives',
	'Categories' => 'Categories',

	'News_base_url' => '<strong>News Mod Base URL</strong>',
	'News_base_url_explain' => 'The location of your news index file.<br /> i.e. http://mydomain.com/, your news index file is located here.',
	'Show_RSS_abstract' => '<strong>Show Abstracts in RSS Feeds.</strong>',

	'News_index_file' => '<strong>News Mod Index File</strong>',
	'News_index_file_explain' => 'The name of the news index file. i.e. news_index.php.',
	)
);

?>