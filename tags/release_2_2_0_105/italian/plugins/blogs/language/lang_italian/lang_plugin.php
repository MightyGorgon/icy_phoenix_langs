<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'cms_page_name_blogs' => 'Blogs',

	'9000_BLOGS' => 'Blog',
	'9110_BLOGS_CONFIG' => 'Configurazione',
	'PLUGIN_BLOGS_GENERAL' => 'Generale',
	'PLUGIN_BLOGS_VARIOUS' => 'Varie',
	'ACP_BLOGS' => 'Blog',
	'ACP_BLOGS_EXPLAIN' => 'In questa pagina puoi configurare le impostazioni dei Blog',
	'BLOGS_CONFIG_01' => 'Config One',
	'BLOGS_CONFIG_01_EXPLAIN' => 'Config One Explain',
	'BLOGS_CONFIG_02' => 'Config Two',
	'BLOGS_CONFIG_02_EXPLAIN' => 'Config Two Explain',

	'BLOGS_PAGE' => 'Blog',
	'MUST_ENTER_BLOG' => 'Devi compilare almeno titolo e descrizione.',
	'BLOG_ADD' => 'Aggiungi Blog',
	'BLOG_ADDED' => 'Blog Aggiunto',
	'BLOG_UPDATED' => 'Blog Aggiornato',
	'BLOG_REMOVED' => 'Blog Rimosso',
	'BLOG_ARTICLE_ADDED' => 'Articolo aggiunto correttamente',
	'BLOG_ARTICLE_UPDATED' => 'Articolo aggiornato correttamente',
	'BLOG_ARTICLE_REMOVED' => 'Articolo rimosso correttamente',
	'BLOG_COMMENT_ADDED' => 'Commento aggiunto correttamente',
	'BLOG_COMMENT_UPDATED' => 'Commento aggiornato correttamente',
	'BLOG_COMMENT_REMOVED' => 'Commento rimosso correttamente',
	'BLOG_VIEW' => 'Visualizza Blog',
	'BLOG_ARTICLE_VIEW' => 'Visualizza Articolo',
	'BLOGS_RESYNC' => 'Sincronizza',
	'BLOGS_RESYNCHED' => 'Blog sincronizzati correttamente',
	'NO_BLOG_ID' => 'Identificativo blog non immesso o non esistente, per favore inserire un identificativo valido',
	'NO_BLOG_TOPIC_ID' => 'Identificativo articolo non immesso o non esistente',
	'NO_BLOG_POST_ID' => 'Identificativo commento non immesso o non esistente',
	'NO_BLOG_ARTICLES' => 'Nessun articolo pubblicato',
	'NO_BLOG_COMMENTS' => 'Nessun commento',
	'NO_BLOGS' => 'Nessun Blog',
	'CLICK_RETURN_BLOGS' => 'Clicca %sQUI%s per tornare alla pagina dei Blogs',
	'CLICK_RETURN_BLOG' => 'Clicca %sQUI%s per tornare al blog',
	'CLICK_RETURN_ARTICLE' => 'Clicca %sQUI%s per tornare all\'articolo',

	'BLOG_LINK_ALL_ARTICLES' => 'Tutti gli articoli',
	'BLOG_LINK_POST_ARTICLE' => 'Pubblica articolo',
	'BLOGS_LINK_ALL' => 'Tutti I Blogs',

	'BLOGS_BLOG_ID' => 'ID Blog',
	'BLOGS_USER_ID_CREATE' => 'Autore',
	'BLOGS_USER_ID_UPDATE' => 'Aggiornamento',
	'BLOGS_TIME_CREATION' => 'Data',
	'BLOGS_TIME_UPDATE' => 'Aggiornamento',
	'BLOGS_TITLE' => 'Titolo',
	'BLOGS_DESCRIPTION' => 'Descrizione',
	'BLOGS_REPLY' => 'Risposta',
	'BLOGS_STATUS' => 'Stato',
	'BLOGS_STATUS_DISABLED' => 'Disattivato',
	'BLOGS_STATUS_ENABLED' => 'Abilitato',
	'BLOGS_STATUS_HIDDEN' => 'Nascosto',
	'BLOGS_OWNER' => 'Proprietario',
	'BLOGS_NOTIFICATIONS' => 'Notifiche via email per nuovi commenti',
	'BLOGS_AUTH_READ' => 'Permessi di lettura',
	'BLOGS_AUTH_POST' => 'Permessi invio articoli',
	'BLOGS_AUTH_REPLY' => 'Permessi di risposta',
	'BLOGS_AUTH_EDIT' => 'Permessi di modifica',
	'BLOGS_AUTH_DELETE' => 'Permessi di cancellazione',
	'BLOGS_AUTH_ALL' => 'Tutti',
	'BLOGS_AUTH_REG' => 'Utenti Registrati',
	'BLOGS_AUTH_OWNER' => 'Proprietario',

	'BLOGS_TOPIC_ID' => 'ID Articolo',
	'BLOGS_TOPIC_TITLE' => 'Titolo',
	'BLOGS_TOPIC_TIME' => 'Data',
	'BLOGS_TOPIC_POSTER' => 'Autore',
	'BLOGS_TOPIC_APPROVED' => 'Approvato',

	'BLOGS_POST_ID' => 'ID Commento',
	'BLOGS_POST_IP' => 'Indirizzo IP',
	'BLOGS_POST_EMAIL' => 'Email',
	'BLOGS_POST_USERNAME' => 'Nome utente',
	'BLOGS_POST_SUBJECT' => 'Titolo',
	'BLOGS_POST_TEXT' => 'Messaggio',
	'BLOGS_POST_OPTIONS' => 'Opzioni',
	'BLOGS_POSTED_BY' => 'Scritto da %s &bull; %s',
	'BLOGS_POST_COMMENT' => 'Inserisci un commento',
	'BLOGS_POST_COMMENTS' => 'Commenti',

	'BLOGS_ERROR_MESSAGE' => 'Per favore torna indietro e compila tutti i campi richiesti',
	'BLOGS_ERROR_EMPTY_USERNAME' => 'Il nome utente non pu&ograve; essere vuoto',
	'BLOGS_ERROR_EMPTY_TITLE' => 'Il titolo non pu&ograve; essere vuoto',
	'BLOGS_ERROR_EMPTY_MESSAGE' => 'Il messaggio non pu&ograve; essere vuoto',

	)
);

?>