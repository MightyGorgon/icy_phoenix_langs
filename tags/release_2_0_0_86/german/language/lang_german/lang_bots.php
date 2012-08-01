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
	'BOTS' => 'Verwalte Bots',
	'BOTS_EXPLAIN' => '"Bots", "Spiders" oder "Crawlers" sind Roboter die meistens von Suchmaschinen eingesetzt werden um ihre Datenbanken zu aktualisieren. Seit sie die echten Session nutzen können diese Roboter Besucherzähler verfälschen, erhöhte Serverbelastung verursachen und manchmal auch Webseiten nicht korrekt indexieren. Hier kannst du bestimmte Bots definieren um diese Probleme zu bewältigen.',
	'BOT_ACTIVATE' => 'Aktivieren',
	'BOT_ACTIVE' => 'Bot aktivieren',
	'BOT_ACTIVE_EXPLAIN' => 'Du kannst bestimmen ob es diesem Bot erlaubt ist dein Icy Phoenix zu betreten. Ist es ihm nicht gestattet, wird er verwiesen.',
	'BOT_ADD' => 'Bot hinzufügen',
	'BOT_ADDED' => 'Neuer Bot erfolgreich hinzugefügt.',
	'BOT_AGENT' => 'Agent match',
	'BOT_AGENT_EXPLAIN' => 'Eine Zeichenkette auf die der Browser Agent des Bots passt, teilweise Übereinstimmungen sind erlaubt.',
	'BOT_COLOR' => 'Bot Farbe',
	'BOT_COLOR_EXPLAIN' => 'HTML Code ist zu benutzen um den Bot darzustellen. Wird keine Farbe angegeben, wird der Bot in der Standardfarbe dargestellt.',
	'BOT_DEACTIVATE' => 'Deaktivieren',
	'BOT_DELETED' => 'Bot erfolgreich gelöscht.',
	'BOT_EDIT' => 'Bots ändern',
	'BOT_EDIT_EXPLAIN' => 'Hier kannst du einen Bot Eintrag hinzufügen oder bearbeiten. Du kannst einen Agent und/oder eine oder mehrere IP Adressen (oder IP Bereiche) bestimmen. Aber sei bei der Eingabe des Agent Strings oder der Adresse sehr sorgfältig. Du kannst auch einen Style und eine Sprache bestimmen, die dem Bot beim besuchen der Seite angezeigt wird. Dies erlaubt dir den Traffic zu minimieren, wenn du einen einfachen Style für Bots verwendest. Denke daran geeignete Berechtigungen für die spezielle Bot Benutzergruppe einzustellen.',
	'BOT_LANG' => 'Bot Sprache',
	'BOT_LANG_EXPLAIN' => 'Die Sprache die für diesen Bot benutzt wird, während er die Seite besucht.',
	'BOT_LAST_VISIT' => 'Letzter Besuch',
	'BOT_IP' => 'Bot IP Adresse',
	'BOT_IP_EXPLAIN' => 'Teilweise Übereinstimmungen sind erlaubt, trenne die einzelnen Adressen mit einem Komma.',
	'BOT_NAME' => 'Bot Name',
	'BOT_NAME_EXPLAIN' => 'Wird nur für deine eigene Information benutzt.',
	'BOT_NAME_TAKEN' => 'Dieser Name existiert bereits in deinem Icy Phoenix und kann <b>nicht</b> für den Bot genutzt werden!',
	'BOT_NEVER' => 'Niemals',
	'BOT_STYLE' => 'Bot Style',
	'BOT_STYLE_EXPLAIN' => 'Der Forum Style der für diesen Bot genutzt wird.',
	'BOTS_UPDATE' => 'Aktualisieren',
	'BOT_UPDATED' => 'Bot erfolgreich aktualisiert.',

	'BOT_COL_NAME' => 'Name',
	'BOT_COL_COLOR' => 'Farbe',
	'BOT_COL_AGENT' => 'Agent',
	'BOT_COL_IP' => 'IP',
	'BOT_COL_ACTIVE' => 'Aktiv',
	'BOT_COL_LAST_VISIT' => 'Letzter Besuch',
	'BOT_COL_COUNTER' => 'Counter',

	'CLICK_RETURN_BOTS' => 'Klicke %shier%s, um zur Bot-Administration zurückzukehren.',

	'ERR_BOT_ADD' => 'Du hast nicht alle benötigten Felder ausgefüllt, bitte gehe zurück und versuche es erneut.',
	'ERR_BOT_AGENT_MATCHES_UA' => 'Der Bot Agent den du eingeben willst ist der gleiche den du zurzeit benutzt. Bitte stelle den Agent für diesen Bot ein.',
	'ERR_BOT_NO_IP' => 'Die IP Adressen die du eingegeben hast sind ungültig oder der Hostname konnte nicht aufgelöst werden.',
	'ERR_BOT_NO_MATCHES' => 'Du musst mindestens einen Agent oder eine IP für diesen Bot eingeben.',

	'NO_BOTS' => 'Keine Bots definiert.',
	'NO_BOT' => 'Kann keinen Bot mit der angegebenen ID finden.',
	'NO_BOT_GROUP' => 'Kann keine spezielle Bots Gruppe finden.',
	)
);

?>