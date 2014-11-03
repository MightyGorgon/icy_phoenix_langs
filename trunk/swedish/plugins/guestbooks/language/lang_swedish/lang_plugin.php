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
	'9000_GUESTBOOKS' => 'Gästbok',
	'9110_GUESTBOOKS_CONFIG' => 'Konfiguration',
	'PLUGIN_GUESTBOOKS_GENERAL' => 'Allmän',
	'ACP_GUESTBOOKS' => 'Gästböcker',
	'ACP_GUESTBOOKS_EXPLAIN' => 'På den här sidan kan du konfigurera inställningar för gästbok',
	'GUESTBOOKS_CONFIG_01' => 'Konfig ett',
	'GUESTBOOKS_CONFIG_01_EXPLAIN' => 'Konfig ett förklaring',
	'GUESTBOOKS_CONFIG_02' => 'Konfig två',
	'GUESTBOOKS_CONFIG_02_EXPLAIN' => 'Config två förklaring',

	'GUESTBOOKS_PAGE' => 'Gästböcker',
	'GUESTBOOK_PAGE' => 'Gästbok',
	'MUST_ENTER_GUESTBOOK' => 'Du måste fylla i minst titel och beskrivning.',
	'GUESTBOOK_ADD' => 'Lägg till gästbok',
	'GUESTBOOK_ADDED' => 'Gästbok tillagd',
	'GUESTBOOK_UPDATED' => 'Gästbok uppdaterad',
	'GUESTBOOK_REMOVED' => 'Gästbok flyttad',
	'GUESTBOOK_POST_ADDED' => 'Meddelande lagts till successfullt',
	'GUESTBOOK_POST_UPDATED' => 'Meddelande uppdaterat successfullt',
	'GUESTBOOK_POST_REMOVED' => 'Meddelande flyttat successfullt',
	'GUESTBOOK_VIEW' => 'Visa gästböcker',
	'NO_GUESTBOOK_ID' => 'Fel eller inget gästboks id angetts, välj en giltig gästbok',
	'NO_GUESTBOOK_POST_ID' => 'Fel eller inget meddelande id angivits',
	'NO_GUESTBOOK_POSTS' => 'Inga meddelanden har postats ännu',
	'NO_GUESTBOOKS' => 'Inga gästböcker',
	'CLICK_RETURN_GUESTBOOKS' => 'Klicka %sHär%s för att gå tillbaka till gästböcker',
	'CLICK_RETURN_GUESTBOOK' => 'Klicka %sHär%s för att gå tillbaka till gästbok',
	'CLICK_RETURN_POST' => 'Klicka %sHär%s för att gå tillbaka till meddelandet',

	'GUESTBOOKS_LINK_ALL' => 'Alla gästböcker',
	'GUESTBOOKS_LINK_POST_MESSAGE' => 'Skicka ett meddelande',

	'GUESTBOOKS_GUESTBOOK_ID' => 'Gästboks ID',
	'GUESTBOOKS_USER_ID_CREATE' => 'Gästboks inlägg',
	'GUESTBOOKS_USER_ID_UPDATE' => 'Gästboks senaste inlägg',
	'GUESTBOOKS_TIME_CREATION' => 'Inlämning',
	'GUESTBOOKS_TIME_UPDATE' => 'Senast uppdaterad',
	'GUESTBOOKS_TITLE' => 'Titel',
	'GUESTBOOKS_DESCRIPTION' => 'Beskrivning',
	'GUESTBOOKS_REPLY' => 'Svar',
	'GUESTBOOKS_STATUS' => 'Status',
	'GUESTBOOKS_STATUS_DISABLED' => 'Inaktiverad',
	'GUESTBOOKS_STATUS_ENABLED' => 'Aktiverad',
	'GUESTBOOKS_STATUS_HIDDEN' => 'Dold',
	'GUESTBOOKS_OWNER' => 'Ägare',
	'GUESTBOOKS_NOTIFICATIONS' => 'E-post meddelande vid nya meddelanden',
	'GUESTBOOKS_AUTH_READ' => 'Läs tillstånd',
	'GUESTBOOKS_AUTH_POST' => 'Posta tillstånd',
	'GUESTBOOKS_AUTH_EDIT' => 'Redigera tillstånd',
	'GUESTBOOKS_AUTH_DELETE' => 'Radera tillstånd',
	'GUESTBOOKS_AUTH_ALL' => 'Alla',
	'GUESTBOOKS_AUTH_REG' => 'Registrerade användare',
	'GUESTBOOKS_AUTH_OWNER' => 'Ägare',

	'GUESTBOOKS_POST_POSTER' => 'Författare',
	'GUESTBOOKS_POST_TIME' => 'Datum',
	'GUESTBOOKS_POST_ID' => 'Inläggs ID',
	'GUESTBOOKS_POST_IP' => 'IP Adress',
	'GUESTBOOKS_POST_EMAIL' => 'E-post',
	'GUESTBOOKS_POST_USERNAME' => 'Användarnamn',
	'GUESTBOOKS_POST_SUBJECT' => 'Ämne',
	'GUESTBOOKS_POST_TEXT' => 'Meddelande',
	'GUESTBOOKS_POST_OPTIONS' => 'Alternativ',
	'GUESTBOOKS_POSTED_BY' => 'Postad av %s &bull; %s',
	'GUESTBOOKS_POST_POST' => 'Skriv ett meddelande',
	'GUESTBOOKS_POST_POSTS' => 'Meddelanden',

	'GUESTBOOKS_ERROR_MESSAGE' => 'Klicka på bakåtknappen och fyll i alla begärda fält',
	'GUESTBOOKS_ERROR_EMPTY_USERNAME' => 'Användarnamn kan inte vara tom',
	'GUESTBOOKS_ERROR_EMPTY_TITLE' => 'Meddelande titel kan inte vara tom',
	'GUESTBOOKS_ERROR_EMPTY_MESSAGE' => 'Meddelande kan inte vara tom',

	)
);

?>