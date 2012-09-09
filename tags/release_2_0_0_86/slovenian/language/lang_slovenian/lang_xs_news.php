<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_xs_news.php 34 2009-05-07 22:45:10Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* UseLess
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
'n_title' => 'Administracija novic',

	'n_main_title' => 'Novice',
	'n_main_title_explain' => 'Uredi novice.<br /><br />Ce želite spremeniti status katerekoli od novic, jo bote morali editirati',

// Config
	'n_config_title' => 'Konfiguracija novic',
	'n_config_title_explain' => 'Spremeni nastavitve za novice.',
	'n_config_updated' => 'Nastavitve novi posodobljene.',

// Add menu item
	'n_add_page_title' => 'Dodajte element novice',
	'n_add_page_title_explain' => 'Ustvarite nov element novice.',
	'n_add_header' => 'Dodajte nov elemnt novice',
	'n_news_item_added' => 'Element Novice dodan.',

// edit menu item
	'n_edit_page_title' => 'Editirajte novico',
	'n_edit_page_title_explain' => 'Editirajte dele novice.',
	'n_edit_header' => 'Editirajte že objavljeno novico',

// Delete
	'n_news_delete' => 'Zbrišite novico.',
	'n_news_delete_explain' => 'Izbrišite del novice.',
	'n_confirm_delete_news' => 'Ali ste prepricani da želite izbrisati to novico',

// General Settings used by Add/Edit Menu item
	'n_news_item' => 'Nova novica',
	'n_news_item_display' => 'Prikaži to novico?',

	'n_news_date' => 'Datum novice',

	'n_create_item' => 'Ustvari novo novico',
	'n_create_item_null' => 'Brez teksta je nemogoce ustvariti novo novico.',

	'n_news_smilies' => 'Omogoci smeškote v tem sporocilu?',
	'n_smilies_button' => 'Smeškoti',

	'xs_no_news' => 'Ni nobene novice.',
	'xs_news_invalid_date' => 'Vnestli ste napacen datum, pravi format je: dd/mm/yyyy',
	'n_news_updated' => 'Novica je bila posodobljena',
	'n_click_return_newslist' => 'Kliknite %sTukaj%s Za vrnitev na seznam novic',

// News XML Settings
	'n_xml_title' => 'Administracija potujocega teksta',
	'n_xml_title_explain' => 'Uredite potujoci tekst.',
	'n_xml_title_explain_0' => 'Ce je glavno stikalo potujocega teksta (Status prikazan zgoraj) na \'Off\' potem je spreminjanje potujocega teksta brezpredmetno ker tekst ne bo prikazan, ker glavne nastavitve prepišejo tiste spodaj.<br /><br />Vendar, ce je stikalo prižgano in želite spremeniti status potujocega teksta potem ga boste morali editirati.',
	'n_xml_sub_title' => 'Potujoci tekst novic.',
	'n_xml_master_switch' => 'Glavno stikalo potujocega teksta je: <b>%s</b>kar pomeni da bo potujoci tekst <b>%s</b> prikazan.',
	'n_xml_ms_will' => 'bo',
	'n_xml_ms_not' => 'ne bo',

	'xs_news_ticker_settings' => 'Nastavitve za potujoci tekst',
	'xs_news_ticker_title' => 'Naslov za potujoci tekst te novice:',
	'xs_news_ticker_title_explain' => 'Vir novic je uproabljen v XML listi virov novice da inteficirate vsak vir novic .',
	'xs_news_ticker_show' => 'Prikaži potujoci tekst za to novico?',
	'xs_news_ticker_feed' => 'XML vir novic',
	'xs_news_ticker_feed_explain' => 'URL kamor naj bi tekoci tekst predvajal dele novice, ali tekst ki ga želiš predvajati.',
	'xs_news_ticker_is_feed' => 'Is this an XML News Feed?',
	'xs_news_ticker_is_feed_explain' => 'Ce je nastavljen na \'Yes\' potem mora biti podan veljaven url z virom, ce je nastaljen na \'No\' potem bo katerikoli text vnesen zgoraj v predel za tekst predvajan.',
	'xs_news_ticker_wh' => 'Širinia x Višina tekocega teksta.',
	'xs_news_ticker_wh_explain' => 'Lahko spremenite širino x višino potujocega teksta, privzeto je 98% x 20, širina temelji na procentuaži tabele širine medtem ko je višina v pikslih.',
	'xs_news_ticker_fontsize' => 'Velikost pisave potujocega teksta.',
	'xs_news_ticker_fontsize_explain' => 'Lahko prepišete velikost pisave dolocene v stylesheet, ce je nastavljeno 0 (nic) je ta funkcija izkljucena.',
	'xs_news_ticker_ss' => 'Hitrost potovanja teksta',
	'xs_news_ticker_ss_explain' => 'Višja kot je vrednost vecja je hitrost potovanja',
	'xs_news_ticker_sd' => 'Smer potovanja',
	'xs_news_left' => 'Levo',
	'xs_news_right' => 'Desno',

// Add menu item
	'n_xml_add_page_title' => 'Dodaj XML Vir novice',
	'n_xml_add_page_title_explain' => 'Ustvari nov XML Vir Novice.',
	'n_xml_add_header' => 'Dodaj nov XML Vir Novice',
	'n_xml_news_item_added' => 'Vir novice posodobljen.',

// edit menu item
	'n_xml_edit_page_title' => 'Editirajte XML Vir novice',
	'n_xml_edit_page_title_explain' => 'Editirajte the XML Vir novice.',
	'n_xml_edit_header' => 'Editirajte obstojeci XML Vir novice',

// Delete
	'n_xml_news_delete' => 'Izbrišite XML Vir novice.',
	'n_xml_news_delete_explain' => 'Izbrišite XML Vir novice.',
	'n_xml_confirm_delete_news' => 'ASte prepricani da želite pobrisati ta vir novice?',

// General Settings used by Add/Edit Menu item
	'n_xml_news_item' => 'Element novice',
	'n_xml_news_item_display' => 'Pokaži ta element?',

	'n_xml_create_item' => 'Ustvari nov element',
	'n_xml_create_item_null' => 'Ni mogoce ustvariti potujocega teksta brez XML vira URL ali teksta ki bo potoval.',

	'n_xml_no_feeds' => 'Najden ni noben XML vir novice.',
	'n_xml_news_updated' => 'Potujoci tekst je bil posodobljen',
	'n_xml_click_return_newslist' => 'Klikni %sTukaj%s za vrnitev na seznam potujocega teksta',

	'n_xml_show' => 'Pokaži',
	'n_xml_title' => 'Naslov potujocega teksta',

	)
);

?>