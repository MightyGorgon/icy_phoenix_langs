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
* Lopalong
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
	'BIRTHDAY_GREETING_EMAIL_SUBJECT' => 'Felicidades de %s', //%s is substituted with site title
	'BIRTHDAY_GREETING_EMAIL_CONTENT_AGE' => 'Queremos Felicidarte por cumplir %s añ hoy.', //%s is substituted with the users age
	'BIRTHDAY_GREETING_EMAIL_CONTENT' => 'Nosotros de %s , queremos desearte un Feliz Cumpleaños.', //%s is substituted with the site name
	)
);

?>