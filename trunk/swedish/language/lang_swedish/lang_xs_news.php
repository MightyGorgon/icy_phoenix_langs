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
	'n_main_title_explain' => 'Hantera nyhets poster.<br /><br />Om du vill �ndra visningens status i en viss nyhet m�ste du redigera den.',

// Config
	'n_config_title' => 'Nyhets Konfiguration',
	'n_config_title_explain' => '�ndra inst�llningar f�r Nyheter.',
	'n_config_updated' => 'Nyhets Konfigurationen uppdaterad.',

// Add menu item
	'n_add_page_title' => 'L�gg Till Nyhets Poster',
	'n_add_page_title_explain' => 'Skapa en ny nyhets post.',
	'n_add_header' => 'L�gg Till Nya Nyhets Poster',
	'n_news_item_added' => 'Nyhets Poster tillagda.',

// edit menu item
	'n_edit_page_title' => 'Redigera Nyhets Poster',
	'n_edit_page_title_explain' => 'Redigera nyhets posten.',
	'n_edit_header' => 'Redigera befintliga nyhets poster',

// Delete
	'n_news_delete' => 'Radera Nyhets Poster.',
	'n_news_delete_explain' => 'Radera en nyhets post.',
	'n_confirm_delete_news' => '�r du s�ker p� att du vill radera denna nyhets post?',

// General Settings used by Add/Edit Menu item
	'n_news_item' => 'Nyhets Post',
	'n_news_item_display' => 'Visa Denna Post?',

	'n_news_date' => 'Nyhets Datum',

	'n_create_item' => 'Skapa Nyhets Post',
	'n_create_item_null' => 'Kan inte skapa en nyhet med ny nyhets text.',

	'n_news_smilies' => 'Aktivera smileys i meddelandet?',
	'n_smilies_button' => 'Smileys',

	'xs_no_news' => 'Det finns inga nyhets poster.',
	'xs_news_invalid_date' => 'Du har angett ett ogiltigt datum, formatet �r: dd/mm/yyyy',
	'n_news_updated' => 'Nyhets posten har blivit uppdaterad',
	'n_click_return_newslist' => 'Klicka %sH�r%s f�r att �terg� till Nyhets Listan',

// News XML Settings
	'n_xml_title' => 'News Ticker Administration',
	'n_xml_title_explain' => 'Hantera News Ticker.',
	'n_xml_title_explain_0' => 'Om ticker master switch (status visas ovan) �r inst�lld p� \'Av\' d� �ndrars displayen hos alla ticker vilket �r meningsl�st eftersom det inte kommer att visas som huvud inst�llning eftersom det �sidos�tter de inst�llningar som visas nedan.<br /><br />Men om switchen �r p�slagen och du vill �ndra displayen hos alla ticker s� m�ste du redigera den.',
	'n_xml_sub_title' => 'News Tickers.',
	'n_xml_master_switch' => 'Ticker Master Switch �r: <b>%s</b> vilket betyder News Tickers <b>%s</b> visas.',
	'n_xml_ms_will' => 'vill',
	'n_xml_ms_not' => 'vill inte',

	'xs_news_ticker_settings' => 'Inst�llningar f�r denna News Ticker',
	'xs_news_ticker_title' => 'Titel f�r denna nyhets ticker:',
	'xs_news_ticker_title_explain' => 'Anv�nds i XML News Feed listan f�r att identifiera varje nyhetsfl�de.',
	'xs_news_ticker_show' => 'Visa denna News Ticker?',
	'xs_news_ticker_feed' => 'XML News Feed',
	'xs_news_ticker_feed_explain' => 'Webbadressen d�r ticker b�r f� nyheter ifr�n f�r att bl�ddra, eller den text du vill bl�ddra.',
	'xs_news_ticker_is_feed' => '�r detta en XML News Feed?',
	'xs_news_ticker_is_feed_explain' => 'Om den �r satt till \"ja\" d� m�ste en giltig URL f�r feeden levereras, om den �r sat till \'Nej\' d� kommer vilken text som helst i textomr�det ovan att rullas.',
	'xs_news_ticker_wh' => 'Bredd x H�jd av News Ticker.',
	'xs_news_ticker_wh_explain' => 'Du kan ange bredd x h�jd p� nyhets ticker, standardvalet �r 98% x 20, bredden �r baserat p� en procentdel av tabellens bredd medan h�jden �r i pixlar.',
	'xs_news_ticker_fontsize' => 'Teckenstorleken f�r News Ticker.',
	'xs_news_ticker_fontsize_explain' => 'Du f�r �verskriva teckenstorleken som anges i formatmallen, en inst�llning p� 0 (noll) inaktiverar den h�r funktionen.',
	'xs_news_ticker_ss' => 'Bl�ddrings Hastighet',
	'xs_news_ticker_ss_explain' => 'Ju h�gre v�rde desto snabbare bl�ddring',
	'xs_news_ticker_sd' => 'Bl�ddrings Riktning',
	'xs_news_left' => 'V�nster',
	'xs_news_right' => 'H�ger',

// Add menu item
	'n_xml_add_page_title' => 'L�gg Till XML News Feed',
	'n_xml_add_page_title_explain' => 'Skapa ett nytt XML News Feed.',
	'n_xml_add_header' => 'L�gg till ny XML News Feed',
	'n_xml_news_item_added' => 'News Feed tillagd.',

// edit menu item
	'n_xml_edit_page_title' => 'Redigera XML News Feed',
	'n_xml_edit_page_title_explain' => 'Redigera XML News Feed.',
	'n_xml_edit_header' => 'Redigera befintliga XML News Feed',

// Delete
	'n_xml_news_delete' => 'Radera XML News Feed.',
	'n_xml_news_delete_explain' => 'Radera en XML News Feed.',
	'n_xml_confirm_delete_news' => '�r du s�ker p� att du vill radera detta news feed?',

// General Settings used by Add/Edit Menu item
	'n_xml_news_item' => 'Nyhets Post',
	'n_xml_news_item_display' => 'Visa Denna Post?',

	'n_xml_create_item' => 'Skapa Ny Post',
	'n_xml_create_item_null' => 'Kan inte skapa en News Ticker med ingen XML Feed URL eller text att bl�ddra.',

	'n_xml_no_feeds' => 'Det finns inga XML News Feeds.',
	'n_xml_news_updated' => 'Ticker har blivit uppdaterad',
	'n_xml_click_return_newslist' => 'Klicka %sH�r%s f�r att �terg� till News Ticker listan',

	'n_xml_show' => 'Visa',
	'n_xml_title' => 'Ticker Titel',
	)
);

?>