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
	'Regular_Post' => 'Normaal bericht (niet als nieuws weergeven)',
	'Current_Selection' => 'Huidige selectie',
	'Select_News_Category' => 'Nieuwscategorie:',
	'News' => 'Nieuws',
	'News_Cmx' => '<b>Nieuws:</b>&nbsp;',
	'Auth_News' => 'Nieuws',
	'View_Comments' => 'Reacties lezen',
	'Read_More' => 'Lees meer',
	'News_Categories' => 'Nieuwscategorieën',

// Admin Stuff

// News Config
	'Add_news_categories' => 'Nieuwscategorieën toevoegen',
	'News_Configuration' => 'Nieuwsconfiguratie',
	'News_Add_Description' => 'Hier kun je nieuwe nieuwscategorieën toevoegen',
	'Icon' => 'Nieuwsicoon',
	'Add_new_category' => 'Nieuwe nieuwscategorie toevoegen',
	
	'Click_return_newsadmin' => 'Klik %shier%s om naar nieuwsconfiguratie terug te keren',
	'Category_Deleted' => 'Nieuwscategorie is succesvol verwijderd',
	'Category_Updated' => 'Nieuwscategorie is succesvol bijgewerkt',
	'Category_Added' => 'Nieuwscategorie is succesvol toegevoegd',
	
	'News_Editing_Utility' => 'Nieuwscategorie bewerken',
	'News_Config' => 'Nieuwscategorieinstelling',
	'News_Explain' => 'Hier kan je nieuwscategorie toevoegen, bewerken en verwijderen.',
	
	'Enable_News' => 'Nieuws plaatsen toestaan',
	'News_Path' => 'Nieuwsiconenpad',
	'News_Path_Explain' => 'De pad in je phpBB root map, bv. images/news',
	
	'News_explain' => 'Hier kun je de instellingen van de <i>Slashdot News Mod by CMX</i> veranderen.',
	'News_settings' => 'Nieuwsinstellingen',
	
	'News_trim' => 'Nieuwslengte',
	'News_trim_explain' => 'De maximum aantal tekens, voor nieuwsberichten, voordat ze worden afgesneden (0 = oneindig).',

	'News_topic_trim' => 'Nieuwstitellengte',
	'News_topic_trim_explain' => 'De maximum aantal tekens, voor nieuwstitels, voordat ze worden afgesneden (0 = oneindig).',
	
	'News_item_num' => 'Aantal weergegeven nieuwsitems',
	'News_item_num_explain' => 'Het aantal nieuwsitems, die in news_viewnews.php weergegeven wordt.',
	
	'RSS_Configuration' => 'RSS nieuwsfeedconfiguratie',
	'Enable_RSS' => 'RSS syndicatie inschakelen',
	'Enable_RSS_explain' => 'RSS sydicaties staat andere websites toe jouw nieuws op hun websites weer te geven.',
	
	'Feed_Description' => 'Feedbeschrijving',
	'Feed_Description_Explain' => 'Uitdrukking of tekst voor beschrijving van de feed.',
	
	'Feed_Language' => 'Feedtaal',
	'Feed_Language_Explain' => 'De taal van het kanaal. Je kan alleen waarden van W3C gebruiken.',
	
	'Feed_TTL' => 'Feed TTL (Time To Live)',
	'Feed_TTL_Explain' => 'TTL is de tijd in minuten, die aangeeft, hoe lang de kanaal wordt opgeslagen voordat het wordt vernieuwd vanaf de bron.',
	
	'Feed_Category' => 'Feedcategorie',

	'Feed_Image' => 'Feedafbeelding',
	'Feed_Image_Explain' => 'Een afbeelding die gekoppeld wordt aan je nieuwsfeed. (kan alleen een zeer kleine afbeelding zijn)',
	
	'Feed_Image_Desc' => 'Feedafbeeldingbeschrijving',

// New
	'Articles' => 'Artikelen',
	'Archives' => 'Archieven',
	'Categories' => 'Categorieën',
	
	'News_base_url' => 'Nieuwsmod basis URL',
	'News_base_url_explain' => 'De locatie van je nieuwsindexbestand.<br /> bv. http://mydomain.com/, jouw nieuwsindexbestand is hier opgeslagen.',
	'Show_RSS_abstract' => 'Abstracts in RSS Feeds weergeven.',
	
	'News_index_file' => 'Nieuwsmodindexbestand',
	'News_index_file_explain' => 'De naam van de nieuwsindexbestand, bv. news_index.php.',
	)
);

?>