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

/***************************************************************************
 *
 *   Use this field to rename your custom profile fields.
 *   You should use the following syntax:
 *   $lang['ID_Field_Name'] = 'Your Field Name';
 *   $lang['ID_Description'] = 'Your Field Description';
 *
 *   Example: you have a field with ID=1 which is named Phone
 *   $lang['1_Phone'] = 'Phone';
 *   $lang['1_Description'] = 'Phone Number';
 *
 ***************************************************************************/

/*
$lang['_'] = '';
$lang['_Description'] = '';
*/

/*
//An Australian Example for Profile Fields
$lang['1_Phone'] = 'Tel&eacute;fono';
$lang['1_Description'] = 'N&uacute;mero de Tel&eacute;fono';
$lang['2_Team'] = 'Equipo';
$lang['2_Description'] = 'Equipo Australiano';
$lang['2_Barca'] = 'Wallabies';
$lang['2_Madr'] = 'Kangaroos';
$lang['2_Otro'] = 'Otro';
*/

?>