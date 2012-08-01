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
	'Regular_Post' => 'Normaler Beitrag (Nicht als Foren-News schreiben)',
	'Current_Selection' => 'gegenwärtige Auswahl',
	'Select_News_Category' => 'News Kategorie:',
	'News' => 'News',
	'News_Cmx' => '<b>News:</b>&nbsp;',
	'Auth_News' => 'News',
	'View_Comments' => 'Kommentare lesen',
	'Read_More' => 'mehr lesen',
	'News_Categories' => 'News Kategorien',

// Admin Stuff

// News Config
	'Add_news_categories' => 'News Kategorien hinzufügen',
	'News_Configuration' => 'News Konfiguration',
	'News_Add_Description' => 'Hier kannst du neue News Kategorien hinzufügen.',
	'Icon' => 'News Icon',
	'Add_new_category' => 'Neue News Kategorie hinzufügen',

	'Click_return_newsadmin' => 'Klicke %shier%s, um zur News-Konfiguration zurückzukehren.',
	'Category_Deleted' => 'Die News Kategorie wurde erfolgreich gelöscht.',
	'Category_Updated' => 'Die News Kategorie wurde erfolgreich geändert.',
	'Category_Added' => 'Die News Kategorie wurde erfolgreich hinzugefügt.',

	'News_Editing_Utility' => 'News Kategorie ändern',
	'News_Config' => 'News Kategorie Einstellung',
	'News_Explain' => 'Hier kannst du News-Kategorien hinzufügen, editieren und löschen.',

	'Enable_News' => 'Newserstellung erlauben',
	'News_Path' => 'News Icons-Pfad',
	'News_Path_Explain' => 'Der Pfad in deinem Icy Phoenix Verzeichnis, in dem die Bilder liegen (z.B. images/news)',

	'News_explain' => 'Hier kannst du die Einstellungen des <i>Slashdot News Mod by CMX</i> ändern.',
	'News_settings' => 'News-Konfiguration',

	'News_trim' => 'News Länge',
	'News_trim_explain' => 'Die maximale Anzahl an Zeichen, für News-Beiträge, bevor sie gekürzt werden (0 = unbegrenzt).',

	'News_topic_trim' => 'News-Titellänge',
	'News_topic_trim_explain' => 'Die maximale Anzahl an Zeichen, für News-Titel, bevor sie gekürzt werden (0 = unbegrenzt).',

	'News_item_num' => 'Anzahl der anzuzeigenden News-Beiträge',
	'News_item_num_explain' => 'Die Anzahl News, die in news_viewnews.php angezeigt wird.',

	'RSS_Configuration' => 'RSS News Feed Konfiguration',
	'Enable_RSS' => 'RSS Syndication aktivieren',
	'Enable_RSS_explain' => 'RSS syndication allows erlaubt es anderen Webmastern deine News auf ihren Seiten einzubinden.',

	'Feed_Description' => 'Feed Beschreibung',
	'Feed_Description_Explain' => 'Ausdruck oder Text zur Beschreibung des Feed.',

	'Feed_Language' => 'Feed Sprache',
	'Feed_Language_Explain' => 'Die Sprache des Kanals. Du kannst nur die vom W3C definierten Werte nutzen.',

	'Feed_TTL' => 'Feed TTL (Time To Live)',
	'Feed_TTL_Explain' => 'TTL ist die Zeit in Minuten, die angibt, wie lange ein Feed zwischengespeichert werken kann, bevor er von der Quelle aktualisiert wird.',

	'Feed_Category' => 'Feed-Kategorie',

	'Feed_Image' => 'Feed Bild',
	'Feed_Image_Explain' => 'Ein kleines Bild in Verbindung mit deinem News Feed (kann nur ein sehr kleines Bild sein).',

	'Feed_Image_Desc' => 'Feed Bild Beschreibung',

// New
	'Articles' => 'Artikel',
	'Archives' => 'Archiv',
	'Categories' => 'Kategorien',

	'News_base_url' => 'News Mod Basis URL',
	'News_base_url_explain' => 'Der Ort deiner News Index Datei.<br /> z.B. http://mydomain.com/Icy_Phoenix/, deine News Index Datei ist hier gespeichert.',
	'Show_RSS_abstract' => 'Zeige Abstracte in RSS-Feeds.',

	'News_index_file' => 'News Mod Index Datei',
	'News_index_file_explain' => 'Der Name der News Index Datei, z.B. news_index.php.',
	)
);

?>