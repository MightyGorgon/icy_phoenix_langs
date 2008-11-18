<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_bots.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
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
	'BOTS_EXPLAIN' => '"Bots", "Spiders" oder "Crawlers" sind Roboter die meistens von Suchmaschinen eingesetzt werden um ihre Datenbanken zu aktualisieren. Since they rarely make proper use of sessions they can distort visitor counts, increase load and sometimes fail to index sites correctly. Here you can define a special type of user to overcome these problems.',
	'BOT_ACTIVATE' => 'Activate',
	'BOT_ACTIVE' => 'Bot active',
	'BOT_ACTIVE_EXPLAIN' => 'You can specify whether the bot is allowed to surf the site or not. If set to no, the bot will be kicked out from the site.',
	'BOT_ADD' => 'Bot hinzufügen',
	'BOT_ADDED' => 'Neuer Bot erfolgreich hinzugefügt.',
	'BOT_AGENT' => 'Agent match',
	'BOT_AGENT_EXPLAIN' => 'A string matching the bots browser agent, partial matches are allowed.',
	'BOT_COLOR' => 'Bot Farbe',
	'BOT_COLOR_EXPLAIN' => 'HTML code used to display the bot. If empty bot name will be shown using default bots color.',
	'BOT_DEACTIVATE' => 'Deactivate',
	'BOT_DELETED' => 'Bot erfolgreich gelöscht.',
	'BOT_EDIT' => 'Edit bots',
	'BOT_EDIT_EXPLAIN' => 'Here you can add or edit an existing bot entry. You may define an agent string and/or one or more IP addresses (or range of addresses) to match. Be careful when defining matching agent strings or addresses. You may also specify a style and language that the bot will view the board using. This may allow you to reduce bandwidth use by setting a simple style for bots. Remember to set appropriate permissions for the special Bot usergroup.',
	'BOT_LANG' => 'Bot language',
	'BOT_LANG_EXPLAIN' => 'The language presented to the bot as it browses.',
	'BOT_LAST_VISIT' => 'Last visit',
	'BOT_IP' => 'Bot IP address',
	'BOT_IP_EXPLAIN' => 'Partial matches are allowed, separate addresses with a comma.',
	'BOT_NAME' => 'Bot name',
	'BOT_NAME_EXPLAIN' => 'Used only for your own information.',
	'BOT_NAME_TAKEN' => 'The name is already in use on your board and canâ€™t be used for the Bot.',
	'BOT_NEVER' => 'Niemals',
	'BOT_STYLE' => 'Bot style',
	'BOT_STYLE_EXPLAIN' => 'The style used for the board by the bot.',
	'BOTS_UPDATE' => 'Aktualisieren',
	'BOT_UPDATED' => 'Bot erfolgreich aktualisiert.',

	'BOT_COL_NAME' => 'Name',
	'BOT_COL_COLOR' => 'Farbe',
	'BOT_COL_AGENT' => 'Agent',
	'BOT_COL_IP' => 'IP',
	'BOT_COL_ACTIVE' => 'Aktiv',
	'BOT_COL_LAST_VISIT' => 'Letzter Besuch',
	'BOT_COL_COUNTER' => 'Counter',

	'CLICK_RETURN_BOTS' => '%sKlicke hier%s um zur Bot-Administration zurückzukehren',

	'ERR_BOT_ADD' => 'You have not filled all the required fields, please go back and try again.',
	'ERR_BOT_AGENT_MATCHES_UA' => 'The bot agent you supplied is similar to the one you are currently using. Please adjust the agent for this bot.',
	'ERR_BOT_NO_IP' => 'The IP addresses you supplied were invalid or the hostname could not be resolved.',
	'ERR_BOT_NO_MATCHES' => 'You must supply at least one of an agent or IP for this bot match.',

	'NO_BOTS' => 'Keine Bots definiert.',
	'NO_BOT' => 'Kann keinen Bot mit der angegebenen ID finden.',
	'NO_BOT_GROUP' => 'Unable to find special bot group.',
	)
);

?>