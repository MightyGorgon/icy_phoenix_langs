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
	'9000_GUESTBOOKS' => 'Gästebuch',
	'9110_GUESTBOOKS_CONFIG' => 'Konfiguration',
	'PLUGIN_GUESTBOOKS_GENERAL' => 'Allgemein',
	'ACP_GUESTBOOKS' => 'Gästebücher',
	'ACP_GUESTBOOKS_EXPLAIN' => 'Auf dieser Seite kannst du die Einstellungen der Gästebücher konfigurieren',
	'GUESTBOOKS_CONFIG_01' => 'Konfiguration 1',
	'GUESTBOOKS_CONFIG_01_EXPLAIN' => 'Konfiguration 1 Beschreibung',
	'GUESTBOOKS_CONFIG_02' => 'Konfiguration 2',
	'GUESTBOOKS_CONFIG_02_EXPLAIN' => 'Konfiguration 2 Beschreibung',

	'GUESTBOOKS_PAGE' => 'Gästebücher',
	'GUESTBOOK_PAGE' => 'Gästebuch',
	'MUST_ENTER_GUESTBOOK' => 'Du musst wenigstens einen Titel und eine Nachricht angeben.',
	'GUESTBOOK_ADD' => 'Gästebuch hinzufügen',
	'GUESTBOOK_ADDED' => 'Gästebuch hinzugefügt',
	'GUESTBOOK_UPDATED' => 'Gästebuch aktualisiert',
	'GUESTBOOK_REMOVED' => 'Gästebuch entfernt',
	'GUESTBOOK_POST_ADDED' => 'Nachricht erfolgreich hinzugefügt',
	'GUESTBOOK_POST_UPDATED' => 'Nachricht erfolgreich aktualisiert',
	'GUESTBOOK_POST_REMOVED' => 'Nachricht erfolgreich gelöscht',
	'GUESTBOOK_VIEW' => 'Gästebücher anschauen',
	'NO_GUESTBOOK_ID' => 'Falsche oder keine Gästebuch-ID angegeben, wähle bitte ein gültiges Gästebuch aus.',
	'NO_GUESTBOOK_POST_ID' => 'Falsche oder keine Nachrichten-ID angegeben',
	'NO_GUESTBOOK_POSTS' => 'Bisher wurde noch keine Nachricht geschrieben',
	'NO_GUESTBOOKS' => 'Keine Gästebücher vorhanden',
	'GUESTBOOK_MESSAGE_SUCCESS' => '<b>Nachricht erfolgreich gesendet</b>',
	'CLICK_RETURN_GUESTBOOKS' => 'Klicke %shier%s, um zu den Gästebüchern zurückzukehren.',
	'CLICK_RETURN_GUESTBOOK' => 'Klicke %shier%s, um zum Gästebuch zurückzukehren.',
	'CLICK_RETURN_POST' => 'Klicke %shier%s, um zum Eintrag zurückzukehren.',

	'GUESTBOOKS_LINK_ALL' => 'Alle Gästebücher',
	'GUESTBOOKS_LINK_POST_MESSAGE' => 'Schreibe einen Eintrag',

	'GUESTBOOKS_GUESTBOOK_ID' => 'Gästebuch-ID',
	'GUESTBOOKS_USER_ID_CREATE' => 'Gästebuch-Verfasser',
	'GUESTBOOKS_USER_ID_UPDATE' => 'Gästebuch letzter Verfasser',
	'GUESTBOOKS_TIME_CREATION' => 'Erstellt',
	'GUESTBOOKS_TIME_UPDATE' => 'Letzte Aktualisierung',
	'GUESTBOOKS_TITLE' => 'Titel',
	'GUESTBOOKS_DESCRIPTION' => 'Beschreibung',
	'GUESTBOOKS_REPLY' => 'Antworten',
	'GUESTBOOKS_STATUS' => 'Status',
	'GUESTBOOKS_STATUS_DISABLED' => 'Deaktivieren',
	'GUESTBOOKS_STATUS_ENABLED' => 'Aktivieren',
	'GUESTBOOKS_STATUS_HIDDEN' => 'Versteckt',
	'GUESTBOOKS_OWNER' => 'Eigentümer',
	'GUESTBOOKS_NOTIFICATIONS' => 'E-Mail Benachrichtigungen bei neuen Nachrichten',
	'GUESTBOOKS_AUTH_READ' => 'Berechtigung zum Lesen',
	'GUESTBOOKS_AUTH_POST' => 'Berechtigung zum Schreiben',
	'GUESTBOOKS_AUTH_EDIT' => 'Berechtigung zum Bearbeiten',
	'GUESTBOOKS_AUTH_DELETE' => 'Berechtigung zum Löschen',
	'GUESTBOOKS_AUTH_ALL' => 'Alle',
	'GUESTBOOKS_AUTH_REG' => 'Registrierte Benutzer',
	'GUESTBOOKS_AUTH_OWNER' => 'Eigentümer',

	'GUESTBOOKS_POST_POSTER' => 'Verfasser',
	'GUESTBOOKS_POST_TIME' => 'Datum',
	'GUESTBOOKS_POST_ID' => 'Nachrichten-ID',
	'GUESTBOOKS_POST_IP' => 'IP-Adresse',
	'GUESTBOOKS_POST_EMAIL' => 'E-Mail',
	'GUESTBOOKS_POST_USERNAME' => 'Benutzername',
	'GUESTBOOKS_POST_SUBJECT' => 'Betreff',
	'GUESTBOOKS_POST_TEXT' => 'Nachricht',
	'GUESTBOOKS_POST_OPTIONS' => 'Optionen',
	'GUESTBOOKS_POSTED_BY' => 'Geschrieben von %s &bull; %s',
	'GUESTBOOKS_POST_POST' => 'Schreibe eine Nachricht',
	'GUESTBOOKS_POST_POSTS' => 'Nachrichten',

	'GUESTBOOKS_ERROR_MESSAGE' => 'Bitte klicke auf den Zurück-Button und fülle alle erforderlichen Felder aus.',
	'GUESTBOOKS_ERROR_EMPTY_USERNAME' => 'Benutzername darf nicht leer sein',
	'GUESTBOOKS_ERROR_EMPTY_TITLE' => 'Betreff der Nachricht darf nicht leer sein',
	'GUESTBOOKS_ERROR_EMPTY_MESSAGE' => 'Nachricht darf nicht leer sein',

	)
);

?>