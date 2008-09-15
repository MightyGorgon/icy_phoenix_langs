<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_xs_news.php 24 2008-09-15 20:00:00Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* UseLess
* TheSteffen, KugeLSichA, Tom
*
*/

//
// CONTRIBUTORS:
//	 Add your details here if wanted,
//
//	e.g. Date, Name, username, email address, website
//
// <date>	<Name>		<Username>	<email>		<website>
// 09-01-2005			UseLess
//

$lang['n_title'] = 'News Administration';

$lang['n_main_title'] = 'News Artikel';
$lang['n_main_title_explain'] = 'Hier kannst du deine News Artikel verwalten.<br /><br />Wenn du den Anzeige Status eines bestimmten News Artikels �ndern m�chtest, musst du ihn bearbeiten.';

//
// Config
//
$lang['n_config_title'] = 'News Konfiguration';
$lang['n_config_title_explain'] = 'Hier kannst du die Einstellungen f�r die News �ndern.';
$lang['n_config_updated'] = 'News Konfiguration wurde aktualisiert.';

//
// Add menu item
//
$lang['n_add_page_title'] = 'News Beitrag hinzuf�gen';
$lang['n_add_page_title_explain'] = 'Nutze das untenstehende Forumlar, um einen neuen Artikel zu erstellen.';
$lang['n_add_header'] = 'Neuen Artikel hinzuf�gen';
$lang['n_news_item_added'] = 'News Artikel hinzugef�gt';

//
// edit menu item
//
$lang['n_edit_page_title'] = 'News Artikel';
$lang['n_edit_page_title_explain'] = 'Nutze das untenstehende Forumlar, um den Artikel zu bearbeiten.';
$lang['n_edit_header'] = 'Bestehenden News Artikel bearbeiten';

//
// Delete
$lang['n_news_delete'] = 'News Artikel l�schen';
$lang['n_news_delete_explain'] = 'Nutze das untenstehende Forumlar, um einen Artikel zu l�schen.';
$lang['n_confirm_delete_news'] = 'Bist du sicher, dass du den Artikel l�schen m�chtest?';
$lang['n_confirm_delete_news'] = 'Are you sure you wish to delete this news item?';

//
// General Settings used by Add/Edit Menu item
//
$lang['n_news_item'] = 'News Artikel';
$lang['n_news_item_display'] = 'Diesen Artikel anzeigen';

$lang['n_news_date'] = 'News Datum';

$lang['n_create_item'] = 'Neuen Artikel erstellen';
$lang['n_create_item_null'] = 'Kann keinen Artikel ohne Text erstellen!';

$lang['n_news_smilies'] = 'Smilies in diesen Artikel aktivieren';
$lang['n_smilies_button'] = 'Smilies';

$lang['xs_no_news'] = 'Es existieren keine News Artikel.';
$lang['xs_news_invalid_date'] = 'Du hast ein ung�ltiges Datum eingegeben, das Format ist: TT-MM-JJJJ';
$lang['n_news_updated'] = 'Der Artikel wurde aktualisiert';
$lang['n_click_return_newslist'] = '%sKlicke hier%s, um zur News Liste zur�ckzukehren';

//
// News XML Settings
//
$lang['n_xml_title'] = 'News Ticker Administration';
$lang['n_xml_title_explain'] = 'Hier kannst du die News Ticker verwalten.';
$lang['n_xml_title_explain_0'] = 'Wenn der Ticker Hauptschalter (status wird oben angezeigt) auf <b>Aus</b> steht, werden die untenstehenden Ticker nicht angezeigt, egal ob diese aktiviert sind oder nicht. Der Hauptschalter �berschreibt die Einstellungen, welche unten angezeigt werden.<br />Wenn der Hauptschalter eingeschaltet ist, werden die Einstellungen der einzelnen Ticker wirksam.<br /><br />Hinweis: <i>Den Hauptschalter findest du unter <b>News Konfiguration</b></i>.';
$lang['n_xml_sub_title'] = 'News Ticker';
$lang['n_xml_master_switch'] = 'Der Ticker Hauptschalter ist: <b>%s</b> Das bedeutet, News Ticker <b>%s</b> angezeigt.';
$lang['n_xml_ms_will'] = 'werden';
$lang['n_xml_ms_not'] = 'werden nicht';

$lang['xs_news_ticker_settings'] = 'Einstellungen f�r diesen News Ticker';
$lang['xs_news_ticker_title'] = 'Titel f�r diesen News Ticker:';
$lang['xs_news_ticker_title_explain'] = 'Wird in der XML News Feed Liste verwendet, um jeden einzelnen Ticker zu identifizieren';
$lang['xs_news_ticker_show'] = 'Diesen News Ticker anzeigen?';
$lang['xs_news_ticker_feed'] = 'XML News Feed';
$lang['xs_news_ticker_feed_explain'] = 'Die URL, von welcher der Ticker die Artikel zum scrollen bekommt, oder der Text, der scrollen soll.';
$lang['xs_news_ticker_is_feed'] = 'Ist dies ein XML News Feed?';
$lang['xs_news_ticker_is_feed_explain'] = 'Wenn <b>Ja</b> gew�hlt wurde, muss eine g�ltige URL f�r den Ticker angegeben werden. Wenn <b>Nein</b> gew�hlt wurde, kann oben jeder beliebige Text eingegeben werden, welcher dann als Ticker durchl�uft.';
$lang['xs_news_ticker_wh'] = 'Die Breite x H�he des News Tickers.';
$lang['xs_news_ticker_wh_explain'] = 'Du kannst die Breite x H�he des Newstickers angeben, die Standardwerte sind 98% x 20. Die Breite basiert auf dem Prozentsatz der Tabellenbreite, w�hrend die H�he in Pixeln angegeben ist.';
$lang['xs_news_ticker_fontsize'] = 'Schriftgr��e f�r den News Ticker.';
$lang['xs_news_ticker_fontsize_explain'] = 'Damit kannst du die im Stylesheet definierte Schriftgr��e �berschreiben, setze den Wert auf 0 (Null) um die Funtion zu deaktivieren.';
$lang['xs_news_ticker_ss'] = 'Scroll-Geschwindigkeit';
$lang['xs_news_ticker_ss_explain'] = 'Je h�her der Wert, desto schneller wird l�uft der Text';
$lang['xs_news_ticker_sd'] = 'Scroll-Richtung';
$lang['xs_news_left'] = 'nach Links';
$lang['xs_news_right'] = 'nach Rechts';

//
// Add menu item
//
$lang['n_xml_add_page_title'] = 'XML News Feed hinzugef�gen';
$lang['n_xml_add_page_title_explain'] = 'Nutze das untenstehende Forumlar, um einen neuen XML News Feed hinzuzuf�gen.';
$lang['n_xml_add_header'] = 'Neuen XML News Feed hinzuf�gen';
$lang['n_xml_news_item_added'] = 'News Feed hinzugef�gt';

//
// edit menu item
//
$lang['n_xml_edit_page_title'] = 'XML News Feed bearbeiten';
$lang['n_xml_edit_page_title_explain'] = 'Nutze das untenstehende Forumlar, um den XML News Feed zu bearbeiten.';
$lang['n_xml_edit_header'] = 'Bestehenden XML News Feed bearbeiten';

//
// Delete
//
$lang['n_xml_news_delete'] = 'XML News Feed l�schen';
$lang['n_xml_news_delete_explain'] = 'Nutze das untenstehende Forumlar, um einen XML News Feed zu l�schen.';
$lang['n_xml_confirm_delete_news'] = 'Bist du sicher, dass du diesen News Feed l�schen m�chtest?';

//
// General Settings used by Add/Edit Menu item
//
$lang['n_xml_news_item'] = 'News Aktikel';
$lang['n_xml_news_item_display'] = 'Diesen Artikel anzeigen?';

$lang['n_xml_create_item'] = 'Neuen Ticker erstellen';
$lang['n_xml_create_item_null'] = 'Kann keinen News Ticker ohne XML Feed URL oder Scroll-Text erstellen.';

$lang['n_xml_no_feeds'] = 'Es sind keine XML News Feeds eingerichtet.';
$lang['n_xml_news_updated'] = 'Der Ticker wurde aktualisiert.';
$lang['n_xml_click_return_newslist'] = '%sKlicke hier%s, um zur News Ticker Liste zur�ckzukehren.';

$lang['n_xml_show'] = 'Anzeigen';
$lang['n_xml_title'] = 'Ticker Titel';

?>