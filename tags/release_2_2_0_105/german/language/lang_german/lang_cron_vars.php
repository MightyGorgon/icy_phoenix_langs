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
* Lopalong, TheSteffen
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
	'BIRTHDAY_GREETING_EMAIL_SUBJECT' => 'Alles Gute zum Geburtstag wünscht %s', //%s is substituted with site title
	'BIRTHDAY_GREETING_EMAIL_CONTENT_AGE' => 'Wir gratulieren dir zu deinem heutigen %s. Geburtstag.', //%s is substituted with the users age
	'BIRTHDAY_GREETING_EMAIL_CONTENT' => 'Wir von %s wünschen dir alles Gute zu deinem Geburtstag.', //%s is substituted with the users age
	)
);

?>