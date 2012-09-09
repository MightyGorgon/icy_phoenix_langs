<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_news.php 34 2009-05-07 22:45:10Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
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
// Main Stuff.
	'Regular_Post' => 'Normala tema (Ne pišite kot NOVICO na prvo stran portala)',
	'Current_Selection' => 'trenutni izbor',
	'Select_News_Category' => 'Kategorija novic:',
	'News' => 'Novice',
	'News_Cmx' => '<b>Novice:</b>&nbsp;',
	'Auth_News' => 'Novice',
	'View_Comments' => 'Poglej komentarje',
	'Read_More' => 'Poglej vec',
	'News_Categories' => 'Kategorije novic',

// Admin Stuff

// News Config
'Add_news_categories' => 'Dodaj novo kategorijo',
	'News_Configuration' => 'Konfiguracija novic',
	'News_Add_Description' => 'Dodaj novo kategorijo novic',
	'Icon' => 'Ikona novice',
	'Add_new_category' => 'Dodaj novo kategorijo novic',

	'Click_return_newsadmin' => 'Kliknite tukaj za vrnitev nazaj v Administratorja novic',
	'Category_Deleted' => 'Novica uspešno izbrisana',
	'Category_Updated' => 'Novica uspešno posodobljena',
	'Category_Added' => 'Novica uspešno dodana',

	'News_Editing_Utility' => 'Urejanje novic',
	'News_Config' => 'Konfiguracija novic',
	'News_Explain' => 'Dodaj,odstrani ALI uredi kategorije novic.',

	'Enable_News' => '<strong>Omogoci dodajanje novic</strong>',
	'News_Path' => '<strong>Pot do ikone novice</strong>',
	'News_Path_Explain' => 'Pot v vašem INTERO korenskem direktoriju, e.g. slike/novice',

	'News_explain' => 'Konfiguracija Slashdot News Mod by CMX.',
	'News_settings' => 'Nastavitve novic',

	'News_trim' => '<strong>Dolžina obrezane novice</strong>',
	'News_trim_explain' => 'Nastavi najdaljšo dolžino novice preden so obrezane. (0 = brez obrezave).',

	'News_topic_trim' => '<strong>Dolžina teme obrezane novice</strong>',
	'News_topic_trim_explain' => 'Nastavi najdaljšo dolžino teme novice preden so obrezane. (0 = brez obrezave).',

	'News_item_num' => '<strong>Število postavk za prikaz</strong>',
	'News_item_num_explain' => 'Število novih novic prikazanih v novice_poglejnovice.php.',

	'RSS_Configuration' => 'Nastavitve RSS citalca za novice',
	'Enable_RSS' => '<strong>Omogoci hitro objavo novic</strong>',
	'Enable_RSS_explain' => 'Omogoci dostop hitra objava novic ALI kopiranje po drugih straneh',

	'Feed_Description' => '<strong>Opis povratnic</strong>',
	'Feed_Description_Explain' => 'Fraza ali stavek ki opisuje povratnico.',

	'Feed_Language' => '<strong>Jezik povratnic</strong>',
	'Feed_Language_Explain' => 'Jezik v katerem je napisano. Uporabite lahko vrednosti dolocene v W3C.',

	'Feed_TTL' => '<strong>Povratnice TTL (Time To Live)</strong>',
	'Feed_TTL_Explain' => 'TTL je število minut ki ponazarja koliko casa je shranjeno v predpomnilniku preden se stran osveži.',

	'Feed_Category' => '<strong>Kategorije povratnic</strong>',

	'Feed_Image' => '<strong>Slika povratnice</strong>',
	'Feed_Image_Explain' => 'Slika ki se navezuje na vašo povratnico. (Lahko je samo majhna slika)',

	'Feed_Image_Desc' => '<strong>Opis slike povratnic</strong>',


	'Articles' => 'Artikli',
	'Archives' => 'Arhiv',
	'Categories' => 'Kategorije',

	'News_base_url' => '<strong>URL zmerne osnove novice</strong>',
	'News_base_url_explain' => 'Lokacija datoteke indeksa novic.<br /> i.e. http://www.intero.si/, vaša datoteka indeksa novic se nahaja tu.',
	'Show_RSS_abstract' => '<strong>Pokaži povzetke v povratnicah.</strong>',

	'News_index_file' => '<strong>Datoteka indeks zmerne novice</strong>',
	'News_index_file_explain' => 'Ime datoteke indeks. npr. novice_indeks.php.',
	)
);

?>