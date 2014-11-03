<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_xs_news.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* UseLess
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
	'n_title' => 'Nyhets Administration',

	'n_main_title' => 'Nyhets Poster',
	'n_main_title_explain' => 'Hantera nyhets poster.<br /><br />Om du vill ändra visningens status i en viss nyhet måste du redigera den.',

// Config
	'n_config_title' => 'Nyhets Konfiguration',
	'n_config_title_explain' => 'Ändra inställningar för Nyheter.',
	'n_config_updated' => 'Nyhets konfigurationen uppdaterad.',

// Add menu item
	'n_add_page_title' => 'Lägg till nyhets poster',
	'n_add_page_title_explain' => 'Skapa en ny nyhets post.',
	'n_add_header' => 'Lägg till nya nyhets poster',
	'n_news_item_added' => 'Nyhets poster tillagda.',

// edit menu item
	'n_edit_page_title' => 'Redigera nyhets poster',
	'n_edit_page_title_explain' => 'Redigera nyhets posten.',
	'n_edit_header' => 'Redigera befintliga nyhets poster',

// Delete
	'n_news_delete' => 'Radera nyhets poster.',
	'n_news_delete_explain' => 'Radera en nyhets post.',
	'n_confirm_delete_news' => 'Är du säker på att du vill radera denna nyhets post?',

// General Settings used by Add/Edit Menu item
	'n_news_item' => 'Nyhets post',
	'n_news_item_display' => 'Visa denna post?',

	'n_news_date' => 'Nyhets datum',

	'n_create_item' => 'Skapa nyhets post',
	'n_create_item_null' => 'Kan inte skapa en nyhet med ny nyhets text.',

	'n_news_smilies' => 'Aktivera smileys i meddelandet?',
	'n_smilies_button' => 'Smileys',

	'xs_no_news' => 'Det finns inga nyhets poster.',
	'xs_news_invalid_date' => 'Du har angett ett ogiltigt datum, formatet är: dd/mm/yyyy',
	'n_news_updated' => 'Nyhets posten har blivit uppdaterad',
	'n_click_return_newslist' => 'Klicka %sHär%s för att återgå till Nyhets listan',

// News XML Settings
	'n_xml_title' => 'Nyhets Ticker Administration',
	'n_xml_title_explain' => 'Hantera nyhets ticker.',
	'n_xml_title_explain_0' => 'Om ticker master switch (status visas ovan) är inställd på \'Av\' då ändrars displayen hos alla ticker vilket är meningslöst eftersom det inte kommer att visas som huvud inställning eftersom det åsidosätter de inställningar som visas nedan.<br /><br />Men om switchen är påslagen och du vill ändra displayen hos alla ticker så måste du redigera den.',
	'n_xml_sub_title' => 'Nyhets Tickers.',
	'n_xml_master_switch' => 'Ticker Master Switch är: <b>%s</b> vilket betyder Nyhets Tickers <b>%s</b> visas.',
	'n_xml_ms_will' => 'vill',
	'n_xml_ms_not' => 'vill inte',

	'xs_news_ticker_settings' => 'Inställningar för denna Nyhets Ticker',
	'xs_news_ticker_title' => 'Titel för denna nyhets ticker:',
	'xs_news_ticker_title_explain' => 'Används i XML Nyhets Flöde listan för att identifiera varje nyhetsflöde.',
	'xs_news_ticker_show' => 'Visa denna Nyhets Ticker?',
	'xs_news_ticker_feed' => 'XML Nyhets Flöde',
	'xs_news_ticker_feed_explain' => 'Webbadressen där ticker bör få nyheter ifrån för att bläddra, eller den text du vill bläddra.',
	'xs_news_ticker_is_feed' => 'Är detta en XML Nyhets Flöde?',
	'xs_news_ticker_is_feed_explain' => 'Om den är satt till \"ja\" då måste en giltig URL för feeden levereras, om den är satt till \'Nej\' då kommer vilken text som helst i textområdet ovan att rullas.',
	'xs_news_ticker_wh' => 'Bredd x Höjd av Nyhets Ticker.',
	'xs_news_ticker_wh_explain' => 'Du kan ange bredd x höjd på nyhets ticker, standardvalet är 98% x 20, bredden är baserat på en procentdel av tabellens bredd medan höjden är i pixlar.',
	'xs_news_ticker_fontsize' => 'Teckenstorleken för Nyhets Ticker.',
	'xs_news_ticker_fontsize_explain' => 'Du får överskriva teckenstorleken som anges i formatmallen, en inställning på 0 (noll) inaktiverar den här funktionen.',
	'xs_news_ticker_ss' => 'Bläddrings hastighet',
	'xs_news_ticker_ss_explain' => 'Ju högre värde desto snabbare bläddring',
	'xs_news_ticker_sd' => 'Bläddrings riktning',
	'xs_news_left' => 'Vänster',
	'xs_news_right' => 'Höger',

// Add menu item
	'n_xml_add_page_title' => 'Lägg till XML Nyhets Flöde',
	'n_xml_add_page_title_explain' => 'Skapa ett nytt XML Nyhets Flöde.',
	'n_xml_add_header' => 'Lägg till ny XML Nyhets Flöde',
	'n_xml_news_item_added' => 'Nyhets Flöde tillagd.',

// edit menu item
	'n_xml_edit_page_title' => 'Redigera XML Nyhets Flöde',
	'n_xml_edit_page_title_explain' => 'Redigera XML Nyhets Flöde.',
	'n_xml_edit_header' => 'Redigera befintliga XML Nyhets Flöde',

// Delete
	'n_xml_news_delete' => 'Radera XML Nyhets Flöde.',
	'n_xml_news_delete_explain' => 'Radera en XML Nyhets Flöde.',
	'n_xml_confirm_delete_news' => 'Är du säker på att du vill radera detta nyhets flöde?',

// General Settings used by Add/Edit Menu item
	'n_xml_news_item' => 'Nyhets post',
	'n_xml_news_item_display' => 'Visa denna post?',

	'n_xml_create_item' => 'Skapa ny post',
	'n_xml_create_item_null' => 'Kan inte skapa en Nyhets Ticker med ingen XML Flödes URL eller text att bläddra.',

	'n_xml_no_feeds' => 'Det finns inga XML Nyhets Flöde.',
	'n_xml_news_updated' => 'Ticker har blivit uppdaterad',
	'n_xml_click_return_newslist' => 'Klicka %sHär%s för att återgå till Nyhets Ticker listan',

	'n_xml_show' => 'Visa',
	'n_xml_title' => 'Ticker Titel',
	)
);

?>