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
	'n_title' => 'News Administration',

	'n_main_title' => 'News Artikel',
	'n_main_title_explain' => 'Hier kannst du deine News Artikel verwalten.<br /><br />Wenn du den Anzeige Status eines bestimmten News Artikels ändern möchtest, musst du ihn bearbeiten.',

// Config
	'n_config_title' => 'News Konfiguration',
	'n_config_title_explain' => 'Hier kannst du die Einstellungen für die News ändern.',
	'n_config_updated' => 'News Konfiguration wurde aktualisiert.',

// Add menu item
	'n_add_page_title' => 'News Beitrag hinzufügen',
	'n_add_page_title_explain' => 'Nutze das untenstehende Forumlar, um einen neuen Artikel zu erstellen.',
	'n_add_header' => 'Neuen Artikel hinzufügen',
	'n_news_item_added' => 'News Artikel hinzugefügt',

// edit menu item
	'n_edit_page_title' => 'News Artikel',
	'n_edit_page_title_explain' => 'Nutze das untenstehende Forumlar, um den Artikel zu bearbeiten.',
	'n_edit_header' => 'Bestehenden News Artikel bearbeiten',

// Delete
	'n_news_delete' => 'News Artikel löschen',
	'n_news_delete_explain' => 'Nutze das untenstehende Forumlar, um einen Artikel zu löschen.',
	'n_confirm_delete_news' => 'Bist du sicher, dass du den Artikel löschen möchtest?',

// General Settings used by Add/Edit Menu item
	'n_news_item' => 'News Artikel',
	'n_news_item_display' => 'Diesen Artikel anzeigen',

	'n_news_date' => 'News Datum',

	'n_create_item' => 'Neuen Artikel erstellen',
	'n_create_item_null' => 'Kann keinen Artikel ohne Text erstellen!',

	'n_news_smilies' => 'Smilies in diesen Artikel aktivieren',
	'n_smilies_button' => 'Smilies',

	'xs_no_news' => 'Es existieren keine News Artikel.',
	'xs_news_invalid_date' => 'Du hast ein ungültiges Datum eingegeben, das Format ist: TT-MM-JJJJ',
	'n_news_updated' => 'Der Artikel wurde aktualisiert',
	'n_click_return_newslist' => 'Klicke %shier%s, um zur News Liste zurückzukehren.',

// News XML Settings
	'n_xml_title' => 'News Ticker Administration',
	'n_xml_title_explain' => 'Hier kannst du die News Ticker verwalten.',
	'n_xml_title_explain_0' => 'Wenn der Ticker Hauptschalter (status wird oben angezeigt) auf <b>Aus</b> steht, werden die untenstehenden Ticker nicht angezeigt, egal ob diese aktiviert sind oder nicht. Der Hauptschalter überschreibt die Einstellungen, welche unten angezeigt werden.<br />Wenn der Hauptschalter eingeschaltet ist, werden die Einstellungen der einzelnen Ticker wirksam.<br /><br />Hinweis: <i>Den Hauptschalter findest du unter <b>News Konfiguration</b></i>.',
	'n_xml_sub_title' => 'News Ticker',
	'n_xml_master_switch' => 'Der Ticker Hauptschalter ist: <b>%s</b> Das bedeutet, News Ticker <b>%s</b> angezeigt.',
	'n_xml_ms_will' => 'werden',
	'n_xml_ms_not' => 'werden nicht',

	'xs_news_ticker_settings' => 'Einstellungen für diesen News Ticker',
	'xs_news_ticker_title' => 'Titel für diesen News Ticker:',
	'xs_news_ticker_title_explain' => 'Wird in der XML News Feed Liste verwendet, um jeden einzelnen Ticker zu identifizieren',
	'xs_news_ticker_show' => 'Diesen News Ticker anzeigen?',
	'xs_news_ticker_feed' => 'XML News Feed',
	'xs_news_ticker_feed_explain' => 'Die URL, von welcher der Ticker die Artikel zum scrollen bekommt, oder der Text, der scrollen soll.',
	'xs_news_ticker_is_feed' => 'Ist dies ein XML News Feed?',
	'xs_news_ticker_is_feed_explain' => 'Wenn <b>Ja</b> gewählt wurde, muss eine gültige URL für den Ticker angegeben werden. Wenn <b>Nein</b> gewählt wurde, kann oben jeder beliebige Text eingegeben werden, welcher dann als Ticker durchläuft.',
	'xs_news_ticker_wh' => 'Die Breite x Höhe des News Tickers.',
	'xs_news_ticker_wh_explain' => 'Du kannst die Breite x Höhe des Newstickers angeben, die Standardwerte sind 98% x 20. Die Breite basiert auf dem Prozentsatz der Tabellenbreite, während die Höhe in Pixeln angegeben ist.',
	'xs_news_ticker_fontsize' => 'Schriftgröße für den News Ticker.',
	'xs_news_ticker_fontsize_explain' => 'Damit kannst du die im Stylesheet definierte Schriftgröße überschreiben, setze den Wert auf 0 (Null) um die Funtion zu deaktivieren.',
	'xs_news_ticker_ss' => 'Scroll-Geschwindigkeit',
	'xs_news_ticker_ss_explain' => 'Je höher der Wert, desto schneller wird läuft der Text',
	'xs_news_ticker_sd' => 'Scroll-Richtung',
	'xs_news_left' => 'nach Links',
	'xs_news_right' => 'nach Rechts',

// Add menu item
	'n_xml_add_page_title' => 'XML News Feed hinzugefügen',
	'n_xml_add_page_title_explain' => 'Nutze das untenstehende Forumlar, um einen neuen XML News Feed hinzuzufügen.',
	'n_xml_add_header' => 'Neuen XML News Feed hinzufügen',
	'n_xml_news_item_added' => 'News Feed hinzugefügt',

// edit menu item
	'n_xml_edit_page_title' => 'XML News Feed bearbeiten',
	'n_xml_edit_page_title_explain' => 'Nutze das untenstehende Forumlar, um den XML News Feed zu bearbeiten.',
	'n_xml_edit_header' => 'Bestehenden XML News Feed bearbeiten',

// Delete
	'n_xml_news_delete' => 'XML News Feed löschen',
	'n_xml_news_delete_explain' => 'Nutze das untenstehende Forumlar, um einen XML News Feed zu löschen.',
	'n_xml_confirm_delete_news' => 'Bist du sicher, dass du diesen News Feed löschen möchtest?',

// General Settings used by Add/Edit Menu item
	'n_xml_news_item' => 'News Aktikel',
	'n_xml_news_item_display' => 'Diesen Artikel anzeigen?',

	'n_xml_create_item' => 'Neuen Ticker erstellen',
	'n_xml_create_item_null' => 'Kann keinen News Ticker ohne XML Feed URL oder Scroll-Text erstellen.',

	'n_xml_no_feeds' => 'Es sind keine XML News Feeds eingerichtet.',
	'n_xml_news_updated' => 'Der Ticker wurde aktualisiert.',
	'n_xml_click_return_newslist' => 'Klicke %shier%s, um zur News Ticker Liste zurückzukehren.',

	'n_xml_show' => 'Anzeigen',
	'n_xml_title' => 'Ticker Titel',
	)
);

?>