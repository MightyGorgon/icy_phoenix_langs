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
    'Current_Selection' => 'gegenw�rtige Auswahl',
    'Select_News_Category' => 'News Kategorie:',
    'News' => 'News',
    'News_Cmx' => '<b>News:</b>&nbsp;',
    'Auth_News' => 'News',
    'View_Comments' => 'Kommentare lesen',
    'Read_More' => 'mehr lesen',
    'News_Categories' => 'News Kategorien',

// Admin Stuff

// News Config
    'Add_news_categories' => 'News Kategorien hinzuf�gen',
    'News_Configuration' => 'News Konfiguration',
    'News_Add_Description' => 'Hier kannst du neue News Kategorien hinzuf�gen.',
    'Icon' => 'News Icon',
    'Add_new_category' => 'Neue News Kategorie hinzuf�gen',

    'Click_return_newsadmin' => 'Klicke %shier%s, um zur News-Konfiguration zur�ckzukehren',
    'Category_Deleted' => 'Die News Kategorie wurde erfolgreich gel�scht.',
    'Category_Updated' => 'Die News Kategorie wurde erfolgreich ge�ndert.',
    'Category_Added' => 'Die News Kategorie wurde erfolgreich hinzugef�gt.',

    'News_Editing_Utility' => 'News Kategorie �ndern',
    'News_Config' => 'News Kategorie Einstellung',
    'News_Explain' => 'Hier kannst du News-Kategorien hinzuf�gen, editieren und l�schen.',

    'Enable_News' => 'Newserstellung erlauben',
    'News_Path' => 'News Icons-Pfad',
    'News_Path_Explain' => 'Der Pfad in Deinem Icy Phoenix Verzeichnis, in dem die Bilder liegen (z.B. images/news)',

    'News_explain' => 'Hier kannst du die Einstellungen des <i>Slashdot News Mod by CMX</i> �ndern.',
    'News_settings' => 'News-Konfiguration',

    'News_trim' => 'News L�nge',
    'News_trim_explain' => 'Die maximale Anzahl an Zeichen, f�r News-Beitr�ge, bevor sie gek�rzt werden (0 = unbegrenzt).',

    'News_topic_trim' => 'News-Titell�nge',
    'News_topic_trim_explain' => 'Die maximale Anzahl an Zeichen, f�r News-Titel, bevor sie gek�rzt werden (0 = unbegrenzt).',

    'News_item_num' => 'Anzahl der anzuzeigenden News-Beitr�ge',
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
    'Show_RSS_abstract' => 'Zeige Abstracte in RSS Feeds.',

    'News_index_file' => 'News Mod Index Datei',
    'News_index_file_explain' => 'Der Name der News Index Datei, z.B. news_index.php.',
	)
);

?>