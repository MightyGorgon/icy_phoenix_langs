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

//
// CONTRIBUTORS:
//         Add your details here if wanted,
//
//        e.g. Date, Name, username, email address, website
//
// <date>	<Name>		<Username>	<email>			<website>
// 09-01-2005	<n/a>		Bicet		<n/a>			http://www.lesionetotale.org
//

$lang['n_title'] = 'Amministrazione XS News';

$lang['n_main_title'] = 'Elementi XS News';
$lang['n_main_title_explain'] = 'Da qui puoi gestire le news.<br /><br />Se desideri cambiare lo stato di visualizzazione di una particolare news, la devi modificare.';

//
// Config
//
$lang['n_config_title'] = 'Configurazione XS News';
$lang['n_config_title_explain'] = 'Da qui puoi modificare le impostazioni di XS News.';
$lang['n_config_updated'] = 'Configurazione XS News aggiornata.';

//
// Add menu item
//
$lang['n_add_page_title'] = 'Aggiungi News';
$lang['n_add_page_title_explain'] = 'Usando questo form potrai creare le news.';
$lang['n_add_header'] = 'Aggiungi News';
$lang['n_news_item_added'] = 'News Aggiunta.';

//
// edit menu item
//
$lang['n_edit_page_title'] = 'Modifica News';
$lang['n_edit_page_title_explain'] = 'Usando questo form potrai modificare le news.';
$lang['n_edit_header'] = 'Modifica news esistente';

//
// Delete
//
$lang['n_news_delete'] = 'Elimina News.';
$lang['n_news_delete_explain'] = 'Usando questo form potrai eliminare le news';
$lang['n_confirm_delete_news'] = 'Sei sicuro di voler eliminare questa news?';

//
// General Settings used by Add/Edit Menu item
//
$lang['n_news_item'] = 'News';
$lang['n_news_item_display'] = 'Visualizza questa News?';

$lang['n_news_date'] = 'Data News';

$lang['n_create_item'] = 'Crea News';
$lang['n_create_item_null'] = 'Non &egrave; possibile creare una news senza testo.';

$lang['n_news_smilies'] = 'Abilita gli smileys in questo messaggio?';
$lang['n_smilies_button'] = 'Smileys';

$lang['xs_no_news'] = 'Non ci sono News.';
$lang['xs_news_invalid_date'] = 'Hai immesso un formato non valido per la data, il formato deve essere: gg/mm/aaaa';
$lang['n_news_updated'] = 'La News &egrave; stata Aggiornata';
$lang['n_click_return_newslist'] = 'Clicca %sQUI%s per tornare alla Lista delle News';

//
// XS News XML Settings
//
$lang['n_xml_title'] = 'Amministrazione XS News Ticker';
$lang['n_xml_title_explain'] = 'Da qui puoi gestire i News Tickers.<br /><br />Se desideri cambiare lo stato di visualizzazione di un particolare feed di News, lo devi modificare.';
$lang['n_xml_sub_title'] = 'Tickers XS News.';
$lang['n_xml_master_switch'] = 'Lo switch principale per il Ticker &egrave; impostato su: <b>%s</b> che implica che <b>%s</b> visualizzati i Tickers XS NEWS';
$lang['n_xml_ms_will'] = 'saranno';
$lang['n_xml_ms_not'] = 'non saranno';

$lang['xs_news_ticker_settings'] = 'Impostazione per questo News Ticker';
$lang['xs_news_ticker_title'] = 'Titolo per questo news ticker:';
$lang['xs_news_ticker_title_explain'] = 'Usato nel Feed XML delle News per identificare il feed delle News.';
$lang['xs_news_ticker_show'] = 'Visualizza questo News Ticker?';
$lang['xs_news_ticker_feed'] = 'Feed XML News';
$lang['xs_news_ticker_feed_explain'] = 'L\'URL da cui il il ticker deve prendere le news, o il testo che vuoi far scorrere.';
$lang['xs_news_ticker_is_feed'] = 'E\' un Feed XML News?';
$lang['xs_news_ticker_is_feed_explain'] = 'Se impostato su \'Si\' allora si deve fornire una URL valida per il feed, se impostato su \'No\' allora qualsiasi testo immesso sopra verr&agrave; fatto scorrere.';
$lang['xs_news_ticker_wh'] = 'Larhgezza x Altezza del News Ticker.';
$lang['xs_news_ticker_wh_explain'] = 'Puoi specificare larghezza ed altezza del news ticker, di defaults sono 98% x 20, la larghezza &egrave; basata su una percentuale della larghezza tabella mentre l\'altezza &egrave; in Pixels.';
$lang['xs_news_ticker_fontsize'] = 'Dimensione font per il News Ticker.';
$lang['xs_news_ticker_fontsize_explain'] = 'Puoi impostare la dimensione dei font sovrascrivendo quella specificata nello stylesheet, se impostato a 0 (zero) la caratteristica sar&agrave; disabilitata.';
$lang['xs_news_ticker_ss'] = 'Velocit&agrave; di scorrimento';
$lang['xs_news_ticker_ss_explain'] = 'A valori maggiori corrisponde una maggiore velocit&agrave; di scorrimento';
$lang['xs_news_ticker_sd'] = 'Direzione di scorrimento';
$lang['xs_news_left'] = 'Sinistra';
$lang['xs_news_right'] = 'Destra';

//
// Add menu item
//
$lang['n_xml_add_page_title'] = 'Aggiungi Feed XML';
$lang['n_xml_add_page_title_explain'] = 'Usando questo form potrai creare un nuovo Feed XML News.';
$lang['n_xml_add_header'] = 'Aggiungi nuovo Feed XML News';
$lang['n_xml_news_item_added'] = 'Feed XML News Aggiunto.';

//
// edit menu item
//
$lang['n_xml_edit_page_title'] = 'Modifica Feed XML Newsd';
$lang['n_xml_edit_page_title_explain'] = 'Usando questo form potrai modificare un nuovo Feed XML News.';
$lang['n_xml_edit_header'] = 'Modifica Feed XML News Preesistente';

//
// Delete
//
$lang['n_xml_news_delete'] = 'Elimina Feed XML News.';
$lang['n_xml_news_delete_explain'] = 'Usando questo form potrai eliminare un Feed XML News.';
$lang['n_xml_confirm_delete_news'] = 'Sei sicuro di voler eliminare questo Feed XML News?';

//
// General Settings used by Add/Edit Menu item
//
$lang['n_xml_news_item'] = 'XML News';
$lang['n_xml_news_item_display'] = 'Visualizza questa News XML?';

$lang['n_xml_create_item'] = 'Crea News XML';
$lang['n_xml_create_item_null'] = 'Non &egrave; possibile creare un News Ticker senza URL o testo da far scorrere.';

$lang['n_xml_no_feeds'] = 'Non ci sono Feed XML.';
$lang['n_xml_news_updated'] = 'Il ticker &egrave; stato Aggiornato';
$lang['n_xml_click_return_newslist'] = 'Clicca %sQUI%s per tornare alla lista dei Tickers News';

$lang['n_xml_show'] = 'Visualizza';
$lang['n_xml_title'] = 'Titolo Ticker';

?>