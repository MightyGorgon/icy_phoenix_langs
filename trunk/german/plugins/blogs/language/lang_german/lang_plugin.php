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
* TheSteffen
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

	'9000_BLOGS' => 'Blogs',
	'9110_BLOGS_CONFIG' => 'Blog-Einstellungen',
	'PLUGIN_BLOGS_GENERAL' => 'Allgemein',
	'PLUGIN_BLOGS_VARIOUS' => 'Diverse',
	'ACP_BLOGS' => 'Blog',
	'ACP_BLOGS_EXPLAIN' => 'Auf dieser Seite kannst du die Blog-Einstellungen vornehmen.',
	'BLOGS_CONFIG_01' => 'Einstellung Eins',
	'BLOGS_CONFIG_01_EXPLAIN' => 'Beschreibung Einstellung Eins',
	'BLOGS_CONFIG_02' => 'Einstellung Zwei',
	'BLOGS_CONFIG_02_EXPLAIN' => 'Beschreibung Einstellung Zwei',

	'BLOGS_PAGE' => 'Blogs',
	'MUST_ENTER_BLOG' => 'Du musst mindestens Titel und Beschreibung ausfüllen.',
	'BLOG_ADD' => 'Blog hinzufügen',
	'BLOG_ADDED' => 'Blog hinzugefügt',
	'BLOG_UPDATED' => 'Blog aktualisiert',
	'BLOG_REMOVED' => 'Blog gelöscht',
	'BLOG_ARTICLE_ADDED' => 'Artikel erfolgreich hinzugefügt',
	'BLOG_ARTICLE_UPDATED' => 'Artikel erfolgreich aktualisiert',
	'BLOG_ARTICLE_REMOVED' => 'Artikel erfolgreich gelöscht',
	'BLOG_COMMENT_ADDED' => 'Kommentar erfolgreich hinzugefügt',
	'BLOG_COMMENT_UPDATED' => 'Kommentar erfolgreich aktualisiert',
	'BLOG_COMMENT_REMOVED' => 'Kommentar erfolgreich gelöscht',
	'BLOG_VIEW' => 'Blogs anschauen',
	'BLOG_ARTICLE_VIEW' => 'Artikel anschauen',
	'BLOGS_RESYNC' => 'Resync',
	'BLOGS_RESYNCHED' => 'Blogs erfolgreich synchronisiert',
	'NO_BLOG_ID' => 'Falsche oder keine Blog-ID angegeben, wähle bitte einen gültigen Blog aus.',
	'NO_BLOG_TOPIC_ID' => 'Falsche oder keine Artikel-ID angegeben',
	'NO_BLOG_POST_ID' => 'Falsche oder keine Kommentar-ID angegeben.',
	'NO_BLOG_ARTICLES' => 'Keine Artikel wurden bis jetzt geschrieben.',
	'NO_BLOG_COMMENTS' => 'Keine Kommentare wurden bis jetzt geschrieben.',
	'NO_BLOGS' => 'Keine Blogs',
	'CLICK_RETURN_BLOGS' => 'Klicke %shier%s, um zu den Blogs zurückzukehren.',
	'CLICK_RETURN_BLOG' => 'Klicke %shier%s, um zum Blog zurückzukehren.',
	'CLICK_RETURN_ARTICLE' => 'Klicke %shier%s, um zum Artikel zurückzukehren.',

	'BLOG_LINK_ALL_ARTICLES' => 'Alle Artikel',
	'BLOG_LINK_POST_ARTICLE' => 'Neuen Artikel schreiben',
	'BLOGS_LINK_ALL' => 'Alle Blogs',

	'BLOGS_BLOG_ID' => 'Blog ID',
	'BLOGS_USER_ID_CREATE' => 'Blog-Schreiber',
	'BLOGS_USER_ID_UPDATE' => 'Letzter Blog-Schreiber',
	'BLOGS_TIME_CREATION' => 'Einreichung',
	'BLOGS_TIME_UPDATE' => 'Letzte Aktualisierung',
	'BLOGS_TITLE' => 'Titel',
	'BLOGS_DESCRIPTION' => 'Beschreibung',
	'BLOGS_REPLY' => 'Antwort',
	'BLOGS_STATUS' => 'Status',
	'BLOGS_STATUS_DISABLED' => 'deaktiviert',
	'BLOGS_STATUS_ENABLED' => 'aktiviert',
	'BLOGS_STATUS_HIDDEN' => 'versteckt',
	'BLOGS_OWNER' => 'Besitzer',
	'BLOGS_NOTIFICATIONS' => 'E-Mail Benachrichtigungen bei neuen Kommentaren',
	'BLOGS_AUTH_READ' => 'Berechtigung zum Lesen',
	'BLOGS_AUTH_POST' => 'Berechtigung zum Schreiben',
	'BLOGS_AUTH_REPLY' => 'Berechtigung zum Antworten',
	'BLOGS_AUTH_EDIT' => 'Berechtigung zum Ändern',
	'BLOGS_AUTH_DELETE' => 'Berechtigung zum Löschen',
	'BLOGS_AUTH_ALL' => 'Alle',
	'BLOGS_AUTH_REG' => 'Registrierte Benutzer',
	'BLOGS_AUTH_OWNER' => 'Besitzer',

	'BLOGS_TOPIC_ID' => 'Artikel ID',
	'BLOGS_TOPIC_TITLE' => 'Artikel Titel',
	'BLOGS_TOPIC_TIME' => 'Datum',
	'BLOGS_TOPIC_POSTER' => 'Autor',
	'BLOGS_TOPIC_APPROVED' => 'genehmigt',

	'BLOGS_POST_ID' => 'Kommentar ID',
	'BLOGS_POST_IP' => 'IP Adresse',
	'BLOGS_POST_EMAIL' => 'E-Mail',
	'BLOGS_POST_USERNAME' => 'Benutzername',
	'BLOGS_POST_SUBJECT' => 'Thema',
	'BLOGS_POST_TEXT' => 'Nachricht',
	'BLOGS_POST_OPTIONS' => 'Optionen',
	'BLOGS_POSTED_BY' => 'Geschrieben von %s &bull; %s',
	'BLOGS_POST_COMMENT' => 'Schreibe einen Kommentar',
	'BLOGS_POST_COMMENTS' => 'Kommentare',

	'BLOGS_ERROR_MESSAGE' => 'Bitte klicke den Zurück-Button und fülle alle erforderlichen Felder aus.',
	'BLOGS_ERROR_EMPTY_USERNAME' => 'Benutzername darf nicht leer sein',
	'BLOGS_ERROR_EMPTY_TITLE' => 'Titel der Nachricht darf nicht leer sein',
	'BLOGS_ERROR_EMPTY_MESSAGE' => 'Nachricht darf nicht leer sein',

	)
);

?>