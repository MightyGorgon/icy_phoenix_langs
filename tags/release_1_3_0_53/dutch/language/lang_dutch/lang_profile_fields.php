<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_profile_fields.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
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
$lang['1_Phone'] = 'Telefoon';
$lang['1_Description'] = 'Telefoonnummer';
$lang['2_Team'] = 'Team';
$lang['2_Description'] = 'Australisch team';
$lang['2_Juve'] = 'Wallabies';
$lang['2_Milan'] = 'Kangaroes';
$lang['2_Altro'] = 'Anders';

*/

?>