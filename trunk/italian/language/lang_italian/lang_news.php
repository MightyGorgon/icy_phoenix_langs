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

// Main Stuff.
$lang['Regular_Post'] = 'Messaggio normale (non visualizzato come News)';
$lang['Current_Selection'] = 'Selezione corrente';
$lang['Select_News_Category'] = 'Seleziona Categoria News';
$lang['News'] = 'News';
$lang['News_Cmx'] = '<b>News:</b>&nbsp;';
$lang['Auth_News'] = 'News';
$lang['View_Comments'] = 'Leggi commenti';
$lang['Read_More'] = 'Leggi tutto';
$lang['News_Categories'] = 'Categoria News';

// Admin Stuff
// News Config
$lang['Add_news_categories'] = 'Aggiungi categoria News';
$lang['News_Configuration'] = 'Configurazione News';
$lang['News_Add_Description'] = 'Da questo pannello di controllo potete aggiungere delle nuove categorie per le news';
$lang['Icon'] = 'Immagine per le News';
$lang['Add_new_category'] = 'Aggiungi una nuova categoria per le news';

$lang['Click_return_newsadmin'] = 'Clicca %sQUI%s per ritornare all\'amministrazione delle News';
$lang['Category_Deleted'] = 'Categoria news cancellata';
$lang['Category_Updated'] = 'Categoria news aggiornata';
$lang['Category_Added'] = 'Categoria news aggiunta';

$lang['News_Editing_Utility'] = 'Modifica Categoria news';
$lang['News_Config'] = 'Configurazione Categoria news';
$lang['News_Explain'] = 'In questa pagina potete aggiungere, rimuovere o modificare delle categorie delle news.';

$lang['Enable_News'] = 'Abilita l\'inserimento di news';
$lang['News_Path'] = 'Percorso icone per le news';
$lang['News_Path_Explain'] = 'Percorso relativo alla cartella Icy Phoenix, p.e. images/news';

$lang['News_explain'] = 'Da questa pagina e\' possibile configurare il mod Slashdot News  CMX.';
$lang['News_settings'] = 'Impostazioni News';

$lang['News_trim'] = 'Lunghezza massima Trim';
$lang['News_trim_explain'] = 'Imposta la lunghezza massima delle notizie (news) prima di essere "spezzate" (0 = nessun limite).';

$lang['News_topic_trim'] = 'Lunghezza massima Trim Argomento';
$lang['News_topic_trim_explain'] = 'Imposta la lunghezza massima degli argomenti delle notizie (news) prima di essere "spezzate" (0 = nessun limite).';

$lang['News_item_num'] = 'Numero di voci da visualizzare';
$lang['News_item_num_explain'] = 'Il numero di news da visualizzare in news_viewnews.php.';

$lang['RSS_Configuration'] = 'Configurazione RSS News Feed ';
$lang['Enable_RSS'] = 'Abilita  RSS Sydication';
$lang['Enable_RSS_explain'] = 'RSS Sydications permette ad altri siti di utilizzare le vostre news e visualizzarle nei loro siti';

$lang['Feed_Description'] = 'Descrizione Feed ';
$lang['Feed_Description_Explain'] = 'Frase che descrive il feed.';

$lang['Feed_Language'] = 'Lingua Feed ';
$lang['Feed_Language_Explain'] = 'La lingua in cui il canale viene scritto. Potete utilizzare i valori definiti dal W3C.';

$lang['Feed_TTL'] = 'Feed TTL (Time To Live)';
$lang['Feed_TTL_Explain'] = 'TTL indica in minuti il periodo nel quale un canale possa essere salvato in una cache prima di aggiornare la sorgente.';

$lang['Feed_Category'] = 'Categoria Feed';

$lang['Feed_Image'] = 'Immagine Feed ';
$lang['Feed_Image_Explain'] = 'Un\'immagine da associare con il vostro news feed (Deve essere un\'immagine di piccole dimensioni)';

$lang['Feed_Image_Desc'] = 'Descrizione Immagine Feed ';

// New
$lang['Articles'] = 'Articoli';
$lang['Archives'] = 'Archivi';
$lang['Categories'] = 'Categorie';

$lang['News_base_url'] = 'News Mod Base URL';
$lang['News_base_url_explain'] = 'Collocazione del vostro file indice news.<br /> p.e. http://mydomain.com/';
$lang['Show_RSS_abstract'] = 'Mostra gli Abstract nel Feed Rss.';

$lang['News_index_file'] = 'File indice per News Mod ';
$lang['News_index_file_explain'] = 'Il nome del file indice del news p.e. news_index.php.';

?>