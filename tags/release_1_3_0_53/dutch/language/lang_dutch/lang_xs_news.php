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
	'n_title' => 'Nieuwsadministratie',
	
	'n_main_title' => 'Nieuwsartikelen',
	'n_main_title_explain' => 'Hier kun je een nieuwsartikelen toevoegen.<br /><br />Als je de weergavestatus wilt wijzigen van een aantal nieuwsartikelen, kun je die bewerken waar nodig.',

// Config
	'n_config_title' => 'Nieuwsconfiguratie',
	'n_config_title_explain' => 'Hier kun je de instellingen van het nieuws aanpassen.',
	'n_config_updated' => 'Nieuwsconfiguratie bijgewerkt.',

// Add menu item
	'n_add_page_title' => 'Nieuwsartikel toevoegen',
	'n_add_page_title_explain' => 'Gebruik het onderstaande formulier om een nieuwe nieuwsartikel toe te voegen.',
	'n_add_header' => 'Nieuwsartikel toevoegen',
	'n_news_item_added' => 'Nieuwsitem toegevoegd.',

// edit menu item
	'n_edit_page_title' => 'Nieuwsartikel bewerken',
	'n_edit_page_title_explain' => 'Gebruik het onderstaande formulier om een bestaande nieuwsartikel te bewerken.',
	'n_edit_header' => 'Bestaande nieuwsartikel bewerken',

// Delete
	'n_news_delete' => 'Nieuwsartikel verwijderen.',
	'n_news_delete_explain' => 'Gebruik het onderstaande formulier om een nieuwsartikel te verwijderen.',
	'n_confirm_delete_news' => 'Weet je zeker dat je deze nieuwsitem wilt verwijderen?',

// General Settings used by Add/Edit Menu item
	'n_news_item' => 'Nieuwsitem',
	'n_news_item_display' => 'Dit artikel weergeven?',
	
	'n_news_date' => 'Nieuwsdatum',
	
	'n_create_item' => 'Nieuw artikel toevoegen',
	'n_create_item_null' => 'Er kan geen artikel zonder tekst toegevoegd worden!',
	
	'n_news_smilies' => 'Smilies in dit artikel inschakelen?',
	'n_smilies_button' => 'Smilies',
	
	'xs_no_news' => 'Er zijn geen nieuwsartikelen.',
	'xs_news_invalid_date' => 'Je hebt een ongeldige datum ingegeven, de datumformaat is: dd/mm/yyyy',
	'n_news_updated' => 'De nieuwsartikel is bijgewerkt',
	'n_click_return_newslist' => 'Klik %shier%s om terug te keren naar nieuwsartikelenlijst',

// News XML Settings
	'n_xml_title' => 'Nieuwstickeradministratie',
	'n_xml_title_explain' => 'Hier kun je de nieuwstickers beheren.',
	'n_xml_title_explain_0' => 'Wanneer de tickerhoofdschakelaar (status wordt hieronder weergegeven) op <b>uit</b> staat, worden de onderstaande ticker niet weergegeven, maakt niet uit of deze geactiveerd is of niet. De hoofdschakelaar overschrijft de instellingen, welke hieronder zijn weergegeven. <br />Wanneer de hoofdschakelaar is ingeschakeld, worden de instellingen van de tickers zelf toegepast.<br /><br />Let op: <i>de hoofdschakelaar zelf kun je vinden onder <b>Nieuwsconfiguratie</b></i>.',
	'n_xml_sub_title' => 'Nieuwstickers.',
	'n_xml_master_switch' => 'De tickerhoofdschakelaar is: <b>%s</b> wat betekent dat nieuwstickers <b>%s</b> worden weergegeven.',
	'n_xml_ms_will' => 'wel',
	'n_xml_ms_not' => 'niet',
	
	'xs_news_ticker_settings' => 'Instellingen voor deze nieuwsticker',
	'xs_news_ticker_title' => 'Titel voor deze nieuwsticker:',
	'xs_news_ticker_title_explain' => 'Wordt in de XML Nieuwsfeedlijst gebruikt om elke feed te identificeren.',
	'xs_news_ticker_show' => 'Deze nieuwsticker weergeven?',
	'xs_news_ticker_feed' => 'XML Nieuwsfeed',
	'xs_news_ticker_feed_explain' => 'De URL, van waar de ticker de nieuwsitems vandaan haalt voor het scrollen, of tekst wat je wenst te scrollen.',
	'xs_news_ticker_is_feed' => 'Is dit een XML Nieuwsfeed?',
	'xs_news_ticker_is_feed_explain' => 'Wanneer <b>Ja</b> gekozen wordt, moet er een geldige URL voor de ticker toegevoegd worden. Wanneer <b>Nee</b> gekozen wordt, kun je ook andere tekst ingegeven worden, welke door het beeld gescrollt wordt.',
	'xs_news_ticker_wh' => 'De breedte x hoogte van de nieuwsticker.',
	'xs_news_ticker_wh_explain' => 'Je kan de breedte x hoogte van de nieuwsticker ingeven, de standaardwaarde is 98% x 20, de breedte is gebaseerd op een percentage van de tabelbreedte, terwijl de hoogte in pixels is',
	'xs_news_ticker_fontsize' => 'Lettergrootte voor de nieuwsticker.',
	'xs_news_ticker_fontsize_explain' => 'Daarmee kun je de in de stylesheet gespecificeerde lettergrootte overschrijven, zet de waarde op 0 (nul) om deze functie te deactiveren.',
	'xs_news_ticker_ss' => 'Scrollsnelheid',
	'xs_news_ticker_ss_explain' => 'Hoe hoger de waarde, hoe sneller de tekst scrollt',
	'xs_news_ticker_sd' => 'Scrollrichting',
	'xs_news_left' => 'naar links',
	'xs_news_right' => 'naar rechts',

// Add menu item
	'n_xml_add_page_title' => 'XML Nieuwsfeed toevoegen',
	'n_xml_add_page_title_explain' => 'Gebruik het onderstaande formulier om een XML Nieuwsfeed toe te voegen.',
	'n_xml_add_header' => 'Nieuw XML Nieuwsfeed toevoegen',
	'n_xml_news_item_added' => 'Nieuwsfeed toegevoegd.',

// edit menu item
	'n_xml_edit_page_title' => 'XML Nieuwsfeed bewerken',
	'n_xml_edit_page_title_explain' => 'Gebruik het onderstaande formulier om een XML Nieuwsfeed te bewerken.',
	'n_xml_edit_header' => 'Bestaande XML Nieuwsfeed bewerken',

// Delete
	'n_xml_news_delete' => 'XML Nieuwsfeed verwijderen.',
	'n_xml_news_delete_explain' => 'Gebruik het onderstaande formulier om een XML Nieuwsfeed te verwijderen.',
	'n_xml_confirm_delete_news' => 'Weet je zeker dat je deze nieuwsfeed wilt verwijderen?',

// General Settings used by Add/Edit Menu item
	'n_xml_news_item' => 'Nieuwsartikel',
	'n_xml_news_item_display' => 'Dit artikel weergeven?',
	
	'n_xml_create_item' => 'Nieuw artikel toevoegen',
	'n_xml_create_item_null' => 'Er kan geen nieuwsticker zonder XML Nieuwsfeed URL of scroll-tekst toeveogen.',
	
	'n_xml_no_feeds' => 'Er zijn geen XML Nieuwsfeeds.',
	'n_xml_news_updated' => 'De ticker is bijgewerkt',
	'n_xml_click_return_newslist' => 'Klik %shier%s om terug te keren naar de nieuwstickerlijst',
	
	'n_xml_show' => 'Weergeven',
	'n_xml_title' => 'Tickertitel',
	)
);

?>