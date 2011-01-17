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
	'BIRTHDAY_GREETING_EMAIL_SUBJECT' => 'Buon Compleanno Da %s', //%s is substituted with site title
	'BIRTHDAY_GREETING_EMAIL_CONTENT' => 'I nostri migliori auguri per i tuoi %s anni.', //%s is substituted with the users age
	)
);

?>