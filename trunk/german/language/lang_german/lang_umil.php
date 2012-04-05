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
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
* @author Nathan Guse (EXreaction) http://lithiumstudios.org
* @author David Lewis (Highway of Life) highwayoflife@gmail.com
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
	'ACTION' => 'Vorgang',
	'ADVANCED' => 'Fortgeschritten',
	'AUTH_CACHE_PURGE' => 'Leere Berechtigungs-Cache',

	'CACHE_PURGE' => 'Leere Cache des Forums',
	'CONFIGURE' => 'Konfiguration',
	'CONFIG_ADD' => 'Lege neue Konfigurationsvariable an: %s',
	'CONFIG_ALREADY_EXISTS' => 'FEHLER: Konfigurationsvariable %s existiert bereits.',
	'CONFIG_NOT_EXIST' => 'FEHLER: Konfigurationsvariable %s existiert nicht.',
	'CONFIG_REMOVE' => 'Lösche Konfigurationsvariable: %s',
	'CONFIG_UPDATE' => 'Aktualisiere Konfigurationsvariable: %s',

	'DISPLAY_RESULTS' => 'Vollständige Ergebnisse anzeigen',
	'DISPLAY_RESULTS_EXPLAIN' => 'Wähle Ja aus, um alle Vorgänge und Ergebnisse der Aktion angezeigt zu bekommen.',

	'ERROR_NOTICE' => 'Einer oder mehrere Fehler sind während der angeforderten Aktion aufgetreten. Bitte lade <a href="%1$s">diese Datei</a>, die eine Liste der Fehler enthält, herunter und bitte den Autor der Modifikation um Unterstützung.<br /><br />Wenn beim Herunterladen der Datei Probleme auftreten, kannst du sie auch direkt mit einem FTP-Programm unter folgender Adresse herunterladen: %2$s',
	'ERROR_NOTICE_NO_FILE' => 'Einer oder mehrere Fehler sind während der angeforderten Aktion aufgetreten. Bitte erstelle eine vollständige Kopie aller aufgetretenen Fehler und bitte den Autor der Modifikation um Unterstützung.',

	'FAIL' => 'Gescheitert',
	'FILE_COULD_NOT_READ' => 'FEHLER: Datei %s konnte nicht zum Lesen geöffnet werden.',
	'FOUNDERS_ONLY' => 'Du musst Gründer-Status haben, um diese Seite betreten zu können.',

	'GROUP_NOT_EXIST' => 'Gruppe existiert nicht',

	'IGNORE' => 'Ignorieren',
	'IMAGESET_CACHE_PURGE' => 'Aktualisiere die Grafiksammlung %s',
	'INSTALL' => 'Installieren',
	'INSTALL_MOD' => 'Installiere %s',
	'INSTALL_MOD_CONFIRM' => 'Bist du bereit, %s zu installieren?',

	'MODULE_ADD' => 'Füge %1$s-Modul hinzu: %2$s',
	'MODULE_ALREADY_EXIST' => 'FEHLER: Modul existiert bereits.',
	'MODULE_NOT_EXIST' => 'FEHLER: Modul existiert nicht.',
	'MODULE_REMOVE' => 'Entferne %1$s-Modul: %2$s',

	'NONE' => 'Keine',
	'NO_TABLE_DATA' => 'FEHLER: Es wurden keine Tabellendaten angegeben.',

	'PARENT_NOT_EXIST' => 'FEHLER: Die übergeordnete Kategorie, die für dieses Modul angegeben wurde, existiert nicht.',
	'PERMISSIONS_WARNING' => 'Es wurden neue Berechtigungen hinzugefügt. Bitte prüfe die Berechtigungseinstellungen und passe sie nach deinen Wünschen an.',
	'PERMISSION_ADD' => 'Füge neue Berechtigungsoption hinzu: %s',
	'PERMISSION_ALREADY_EXISTS' => 'FEHLER: Berechtigungsoption %s existiert bereits.',
	'PERMISSION_NOT_EXIST' => 'FEHLER: Berechtigungsoption %s existiert nicht.',
	'PERMISSION_REMOVE' => 'Entferne Berechtigungsoption: %s',
	'PERMISSION_ROLE_ADD' => 'Füge neue Berechtigungs-Rolle hinzu: %s',
	'PERMISSION_ROLE_UPDATE' => 'Aktualisiere Berechtigungs-Rolle: %s',
	'PERMISSION_ROLE_REMOVE' => 'Entferne Berechtigungs-Rolle: %s',
	'PERMISSION_SET_GROUP' => 'Setze Berechtigungen für die %s-Gruppe.',
	'PERMISSION_SET_ROLE' => 'Setze Berechtigungen für die %s-Rolle.',
	'PERMISSION_UNSET_GROUP' => 'Entferne Berechtigung für die %s-Gruppe.',
	'PERMISSION_UNSET_ROLE' => 'Entferne Berechtigung für die %s-Rolle.',

	'ROLE_ALREADY_EXISTS' => 'Berechtigungs-Rolle existiert bereits.',
	'ROLE_NOT_EXIST' => 'Berechtigungs-Rolle existiert nicht.',

	'SUCCESS' => 'Erfolgreich',

	'TABLE_ADD' => 'Eine neue Datenbanktabelle erstellen: %s',
	'TABLE_ALREADY_EXISTS' => 'FEHLER: Die Datenbanktabelle %s existiert bereits.',
	'TABLE_COLUMN_ADD' => 'Eine neue Spalte %2$s der Tabelle %1$s hinzufügen',
	'TABLE_COLUMN_ALREADY_EXISTS' => 'FEHLER: Die Spalte %2$s existiert bereits in Tabelle %1$s.',
	'TABLE_COLUMN_NOT_EXIST' => 'FEHLER: Die Spalte %2$s existiert nicht in Tabelle %1$s.',
	'TABLE_COLUMN_REMOVE' => 'Lösche die Spalte %2$s aus Tabelle %1$s',
	'TABLE_COLUMN_UPDATE' => 'Aktualisiere die Spalte %2$s in Tabelle %1$s',
	'TABLE_KEY_ADD' => 'Füge Index %2$s der Tabelle %1$s hinzu',
	'TABLE_KEY_ALREADY_EXIST' => 'FEHLER: Der Index %2$s existiert bereits in Tabelle %1$s.',
	'TABLE_KEY_NOT_EXIST' => 'FEHLER: Der Index %2$s existiert nicht in Tabelle %1$s.',
	'TABLE_KEY_REMOVE' => 'Entferne Index %2$s von Tabelle %1$s',
	'TABLE_NOT_EXIST' => 'FEHLER: Datenbanktabelle %s existiert nicht.',
	'TABLE_REMOVE' => 'Lösche Datenbanktabelle: %s',
	'TABLE_ROW_INSERT_DATA' => 'Füge Datensätze der Tabelle %s hinzu.',
	'TABLE_ROW_REMOVE_DATA' => 'Lösche Datensätze der Tabelle %s',
	'TABLE_ROW_UPDATE_DATA' => 'Aktualisiere einen Datensatz in Tabelle %s.',
	'TEMPLATE_CACHE_PURGE' => 'Aktualisiere das Template %s',
	'THEME_CACHE_PURGE' => 'Aktualisiere das Theme %s',

	'UNINSTALL' => 'Deinstallieren',
	'UNINSTALL_MOD' => 'Deinstalliere %s',
	'UNINSTALL_MOD_CONFIRM' => 'Bist du bereit, %s zu deinstallieren? Alle Einstellungen und Daten, die von dieser Modifikation gespeichert wurden, werden dadurch gelöscht!',
	'UNKNOWN' => 'Unbekannt',
	'UPDATE_MOD' => 'Aktualisiere %s',
	'UPDATE_MOD_CONFIRM' => 'Bist du bereit, %s zu aktualisieren?',
	'UPDATE_UMIL' => 'Diese Version von UMIL (Unified MOD Install Library) ist veraltet.<br /><br />Bitte lade die aktuelle UMIL-Version von <a href="%1$s">%1$s</a> herunter.',

	'VERSIONS' => 'Version der Modifikation: <strong>%1$s</strong><br />Derzeit installiert: <strong>%2$s</strong>',
	'VERSION_SELECT' => 'Versionsauswahl',
	'VERSION_SELECT_EXPLAIN' => 'Wähle keine andere Option als „Ignorieren“ aus, sofern du nicht weißt, was du damit machst oder du explizit dazu aufgefordert wurdest.',
	)
);

?>