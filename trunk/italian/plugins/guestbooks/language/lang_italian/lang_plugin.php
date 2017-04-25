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
	'9000_GUESTBOOKS' => 'Guestbook',
	'9110_GUESTBOOKS_CONFIG' => 'Configurazione',
	'PLUGIN_GUESTBOOKS_GENERAL' => 'Generale',
	'ACP_GUESTBOOKS' => 'Guestbook',
	'ACP_GUESTBOOKS_EXPLAIN' => 'In questa pagina puoi configurare le impostazioni dei Guestbook',
	'GUESTBOOKS_CONFIG_01' => 'Config One',
	'GUESTBOOKS_CONFIG_01_EXPLAIN' => 'Config One Explain',
	'GUESTBOOKS_CONFIG_02' => 'Config Two',
	'GUESTBOOKS_CONFIG_02_EXPLAIN' => 'Config Two Explain',

	'GUESTBOOKS_PAGE' => 'Guestbooks',
	'GUESTBOOK_PAGE' => 'Guestbook',
	'MUST_ENTER_GUESTBOOK' => 'Devi compilare almeno titolo e descrizione.',
	'GUESTBOOK_ADD' => 'Aggiungi Guestbook',
	'GUESTBOOK_ADDED' => 'Guestbook Aggiunto',
	'GUESTBOOK_UPDATED' => 'Guestbook Aggiornato',
	'GUESTBOOK_REMOVED' => 'Guestbook Rimosso',
	'GUESTBOOK_POST_ADDED' => 'Messaggio aggiunto correttamente',
	'GUESTBOOK_POST_UPDATED' => 'Messaggio aggiornato correttamente',
	'GUESTBOOK_POST_REMOVED' => 'Messaggio rimosso correttamente',
	'GUESTBOOK_VIEW' => 'Visualizza Guestbook',
	'NO_GUESTBOOK_ID' => 'Identificativo guestbook non immesso o non esistente, per favore inserire un identificativo valido',
	'NO_GUESTBOOK_POST_ID' => 'Identificativo messaggio non immesso o non esistente',
	'NO_GUESTBOOK_POSTS' => 'Nessun messaggio',
	'NO_GUESTBOOKS' => 'Nessun Guestbook',
	'GUESTBOOK_MESSAGE_SUCCESS' => '<b>Messaggio Inviato Correttamente</b>',
	'CLICK_RETURN_GUESTBOOKS' => 'Clicca %sQUI%s per tornare alla pagina dei Guestbooks',
	'CLICK_RETURN_GUESTBOOK' => 'Clicca %sQUI%s per tornare al guestbook',
	'CLICK_RETURN_POST' => 'Clicca %sQUI%s per tornare al messaggio',

	'GUESTBOOKS_LINK_ALL' => 'Tutti I Guestbooks',
	'GUESTBOOKS_LINK_POST_MESSAGE' => 'Scrivi un messaggio',

	'GUESTBOOKS_POST_POSTER' => 'Autore',
	'GUESTBOOKS_POST_TIME' => 'Data',
	'GUESTBOOKS_GUESTBOOK_ID' => 'ID Guestbook',
	'GUESTBOOKS_USER_ID_CREATE' => 'Autore',
	'GUESTBOOKS_USER_ID_UPDATE' => 'Aggiornamento',
	'GUESTBOOKS_TIME_CREATION' => 'Data',
	'GUESTBOOKS_TIME_UPDATE' => 'Aggiornamento',
	'GUESTBOOKS_TITLE' => 'Titolo',
	'GUESTBOOKS_DESCRIPTION' => 'Descrizione',
	'GUESTBOOKS_REPLY' => 'Risposta',
	'GUESTBOOKS_STATUS' => 'Stato',
	'GUESTBOOKS_STATUS_DISABLED' => 'Disattivato',
	'GUESTBOOKS_STATUS_ENABLED' => 'Abilitato',
	'GUESTBOOKS_STATUS_HIDDEN' => 'Nascosto',
	'GUESTBOOKS_OWNER' => 'Proprietario',
	'GUESTBOOKS_NOTIFICATIONS' => 'Notifiche via email per nuovi messaggi',
	'GUESTBOOKS_AUTH_READ' => 'Permessi di lettura',
	'GUESTBOOKS_AUTH_POST' => 'Permessi invio messaggi',
	'GUESTBOOKS_AUTH_EDIT' => 'Permessi di modifica',
	'GUESTBOOKS_AUTH_DELETE' => 'Permessi di cancellazione',
	'GUESTBOOKS_AUTH_ALL' => 'Tutti',
	'GUESTBOOKS_AUTH_REG' => 'Utenti Registrati',
	'GUESTBOOKS_AUTH_OWNER' => 'Proprietario',

	'GUESTBOOKS_POST_ID' => 'ID Messaggio',
	'GUESTBOOKS_POST_IP' => 'Indirizzo IP',
	'GUESTBOOKS_POST_EMAIL' => 'Email',
	'GUESTBOOKS_POST_USERNAME' => 'Nome utente',
	'GUESTBOOKS_POST_SUBJECT' => 'Titolo',
	'GUESTBOOKS_POST_TEXT' => 'Messaggio',
	'GUESTBOOKS_POST_OPTIONS' => 'Opzioni',
	'GUESTBOOKS_POSTED_BY' => 'Scritto da %s &bull; %s',
	'GUESTBOOKS_POST_POST' => 'Inserisci un messaggio',
	'GUESTBOOKS_POST_POSTS' => 'Messaggi',

	'GUESTBOOKS_ERROR_MESSAGE' => 'Per favore torna indietro e compila tutti i campi richiesti',
	'GUESTBOOKS_ERROR_EMPTY_USERNAME' => 'Il nome utente non pu&ograve; essere vuoto',
	'GUESTBOOKS_ERROR_EMPTY_TITLE' => 'Il titolo non pu&ograve; essere vuoto',
	'GUESTBOOKS_ERROR_EMPTY_MESSAGE' => 'Il messaggio non pu&ograve; essere vuoto',

	)
);

?>