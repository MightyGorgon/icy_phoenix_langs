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
//An German Example for Profile Fields
$lang['1_Phone'] = 'Telefon';
$lang['1_Description'] = 'Telefon Nummer';
$lang['2_Team'] = 'Team';
$lang['2_Description'] = 'Beschreibung des Teams';
$lang['2_Juve'] = 'Juventus';
$lang['2_Milan'] = 'Milano';
$lang['2_Altro'] = 'Andere';
*/

?>