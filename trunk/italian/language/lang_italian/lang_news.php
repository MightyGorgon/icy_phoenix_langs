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
* Antonio Mercurio (roland@phpbbplus.it) www.phpbbplus.it
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
	'Regular_Post' => 'Messaggio normale (non visualizzato come News)',
	'Current_Selection' => 'Selezione corrente',
	'Select_News_Category' => 'Seleziona Categoria News',
	'News' => 'News',
	'News_Cmx' => '<b>News:</b>&nbsp;',
	'Auth_News' => 'News',
	'View_Comments' => 'Leggi commenti',
	'Read_More' => 'Leggi tutto',
	'News_Categories' => 'Categoria News',

	// Admin Stuff
	// News Config
	'Add_news_categories' => 'Aggiungi categoria News',
	'News_Configuration' => 'Configurazione News',
	'News_Add_Description' => 'Da questo pannello di controllo potete aggiungere delle nuove categorie per le news',
	'Icon' => 'Immagine per le News',
	'Add_new_category' => 'Aggiungi una nuova categoria per le news',

	'Click_return_newsadmin' => 'Clicca %sQUI%s per ritornare all\'amministrazione delle News',
	'Category_Deleted' => 'Categoria news cancellata',
	'Category_Updated' => 'Categoria news aggiornata',
	'Category_Added' => 'Categoria news aggiunta',

	'News_Editing_Utility' => 'Modifica Categoria news',
	'News_Config' => 'Configurazione Categoria news',
	'News_Explain' => 'In questa pagina potete aggiungere, rimuovere o modificare delle categorie delle news.',

	'Enable_News' => 'Abilita l\'inserimento di news',
	'News_Path' => 'Percorso icone per le news',
	'News_Path_Explain' => 'Percorso relativo alla cartella Icy Phoenix, p.e. images/news',

	'News_explain' => 'Da questa pagina e\' possibile configurare il mod Slashdot News  CMX.',
	'News_settings' => 'Impostazioni News',

	'News_trim' => 'Lunghezza massima Trim',
	'News_trim_explain' => 'Imposta la lunghezza massima delle notizie (news) prima di essere "spezzate" (0 = nessun limite).',

	'News_topic_trim' => 'Lunghezza massima Trim Argomento',
	'News_topic_trim_explain' => 'Imposta la lunghezza massima degli argomenti delle notizie (news) prima di essere "spezzate" (0 = nessun limite).',

	'News_item_num' => 'Numero di voci da visualizzare',
	'News_item_num_explain' => 'Il numero di news da visualizzare in news_viewnews.php.',

	'RSS_Configuration' => 'Configurazione RSS News Feed ',
	'Enable_RSS' => 'Abilita  RSS Syndication',
	'Enable_RSS_explain' => 'RSS Syndications permette ad altri siti di utilizzare le vostre news e visualizzarle nei loro siti',

	'Feed_Description' => 'Descrizione Feed ',
	'Feed_Description_Explain' => 'Frase che descrive il feed.',

	'Feed_Language' => 'Lingua Feed ',
	'Feed_Language_Explain' => 'La lingua in cui il canale viene scritto. Potete utilizzare i valori definiti dal W3C.',

	'Feed_TTL' => 'Feed TTL (Time To Live)',
	'Feed_TTL_Explain' => 'TTL indica in minuti il periodo nel quale un canale possa essere salvato in una cache prima di aggiornare la sorgente.',

	'Feed_Category' => 'Categoria Feed',

	'Feed_Image' => 'Immagine Feed ',
	'Feed_Image_Explain' => 'Un\'immagine da associare con il vostro news feed (Deve essere un\'immagine di piccole dimensioni)',

	'Feed_Image_Desc' => 'Descrizione Immagine Feed ',

	// New
	'Articles' => 'Articoli',
	'Archives' => 'Archivi',
	'Categories' => 'Categorie',

	'News_base_url' => 'News Mod Base URL',
	'News_base_url_explain' => 'Collocazione del vostro file indice news.<br /> p.e. http://mydomain.com/',
	'Show_RSS_abstract' => 'Mostra gli Abstract nel Feed Rss.',

	'News_index_file' => 'File indice per News Mod ',
	'News_index_file_explain' => 'Il nome del file indice del news p.e. news_index.php.',
	)
);

?>