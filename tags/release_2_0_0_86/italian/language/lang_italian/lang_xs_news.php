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
* Bicet
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
	'n_title' => 'Amministrazione XS News',

	'n_main_title' => 'Elementi XS News',
	'n_main_title_explain' => 'Da qui puoi gestire le news.<br /><br />Se desideri cambiare lo stato di visualizzazione di una particolare news, la devi modificare.',

	// Config
	'n_config_title' => 'Configurazione XS News',
	'n_config_title_explain' => 'Da qui puoi modificare le impostazioni di XS News.',
	'n_config_updated' => 'Configurazione XS News aggiornata.',

	// Add menu item
	'n_add_page_title' => 'Aggiungi News',
	'n_add_page_title_explain' => 'Usando questo form potrai creare le news.',
	'n_add_header' => 'Aggiungi News',
	'n_news_item_added' => 'News Aggiunta.',

	// edit menu item
	'n_edit_page_title' => 'Modifica News',
	'n_edit_page_title_explain' => 'Usando questo form potrai modificare le news.',
	'n_edit_header' => 'Modifica news esistente',

	// Delete
	'n_news_delete' => 'Elimina News.',
	'n_news_delete_explain' => 'Usando questo form potrai eliminare le news',
	'n_confirm_delete_news' => 'Sei sicuro di voler eliminare questa news?',

	// General Settings used by Add/Edit Menu item
	'n_news_item' => 'News',
	'n_news_item_display' => 'Visualizza questa News?',

	'n_news_date' => 'Data News',

	'n_create_item' => 'Crea News',
	'n_create_item_null' => 'Non &egrave; possibile creare una news senza testo.',

	'n_news_smilies' => 'Abilita gli smileys in questo messaggio?',
	'n_smilies_button' => 'Smileys',

	'xs_no_news' => 'Non ci sono News.',
	'xs_news_invalid_date' => 'Hai immesso un formato non valido per la data, il formato deve essere: gg/mm/aaaa',
	'n_news_updated' => 'La News &egrave; stata Aggiornata',
	'n_click_return_newslist' => 'Clicca %sQUI%s per tornare alla Lista delle News',

	// XS News XML Settings
	'n_xml_title' => 'Amministrazione XS News Ticker',
	'n_xml_title_explain' => 'Da qui puoi gestire i News Tickers.<br /><br />Se desideri cambiare lo stato di visualizzazione di un particolare feed di News, lo devi modificare.',
	'n_xml_sub_title' => 'Tickers XS News.',
	'n_xml_master_switch' => 'Lo switch principale per il Ticker &egrave; impostato su: <b>%s</b> che implica che <b>%s</b> visualizzati i Tickers XS NEWS',
	'n_xml_ms_will' => 'saranno',
	'n_xml_ms_not' => 'non saranno',

	'xs_news_ticker_settings' => 'Impostazione per questo News Ticker',
	'xs_news_ticker_title' => 'Titolo per questo news ticker:',
	'xs_news_ticker_title_explain' => 'Usato nel Feed XML delle News per identificare il feed delle News.',
	'xs_news_ticker_show' => 'Visualizza questo News Ticker?',
	'xs_news_ticker_feed' => 'Feed XML News',
	'xs_news_ticker_feed_explain' => 'L\'URL da cui il il ticker deve prendere le news, o il testo che vuoi far scorrere.',
	'xs_news_ticker_is_feed' => 'E\' un Feed XML News?',
	'xs_news_ticker_is_feed_explain' => 'Se impostato su \'Si\' allora si deve fornire una URL valida per il feed, se impostato su \'No\' allora qualsiasi testo immesso sopra verr&agrave; fatto scorrere.',
	'xs_news_ticker_wh' => 'Larhgezza x Altezza del News Ticker.',
	'xs_news_ticker_wh_explain' => 'Puoi specificare larghezza ed altezza del news ticker, di defaults sono 98% x 20, la larghezza &egrave; basata su una percentuale della larghezza tabella mentre l\'altezza &egrave; in Pixels.',
	'xs_news_ticker_fontsize' => 'Dimensione font per il News Ticker.',
	'xs_news_ticker_fontsize_explain' => 'Puoi impostare la dimensione dei font sovrascrivendo quella specificata nello stylesheet, se impostato a 0 (zero) la caratteristica sar&agrave; disabilitata.',
	'xs_news_ticker_ss' => 'Velocit&agrave; di scorrimento',
	'xs_news_ticker_ss_explain' => 'A valori maggiori corrisponde una maggiore velocit&agrave; di scorrimento',
	'xs_news_ticker_sd' => 'Direzione di scorrimento',
	'xs_news_left' => 'Sinistra',
	'xs_news_right' => 'Destra',

	// Add menu item
	'n_xml_add_page_title' => 'Aggiungi Feed XML',
	'n_xml_add_page_title_explain' => 'Usando questo form potrai creare un nuovo Feed XML News.',
	'n_xml_add_header' => 'Aggiungi nuovo Feed XML News',
	'n_xml_news_item_added' => 'Feed XML News Aggiunto.',

	// edit menu item
	'n_xml_edit_page_title' => 'Modifica Feed XML Newsd',
	'n_xml_edit_page_title_explain' => 'Usando questo form potrai modificare un nuovo Feed XML News.',
	'n_xml_edit_header' => 'Modifica Feed XML News Preesistente',

	// Delete
	'n_xml_news_delete' => 'Elimina Feed XML News.',
	'n_xml_news_delete_explain' => 'Usando questo form potrai eliminare un Feed XML News.',
	'n_xml_confirm_delete_news' => 'Sei sicuro di voler eliminare questo Feed XML News?',

	// General Settings used by Add/Edit Menu item
	'n_xml_news_item' => 'XML News',
	'n_xml_news_item_display' => 'Visualizza questa News XML?',

	'n_xml_create_item' => 'Crea News XML',
	'n_xml_create_item_null' => 'Non &egrave; possibile creare un News Ticker senza URL o testo da far scorrere.',

	'n_xml_no_feeds' => 'Non ci sono Feed XML.',
	'n_xml_news_updated' => 'Il ticker &egrave; stato Aggiornato',
	'n_xml_click_return_newslist' => 'Clicca %sQUI%s per tornare alla lista dei Tickers News',

	'n_xml_show' => 'Visualizza',
	'n_xml_title' => 'Titolo Ticker',
	)
);

?>