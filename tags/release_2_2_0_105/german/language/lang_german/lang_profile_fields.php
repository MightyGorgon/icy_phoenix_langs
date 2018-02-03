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
 *   $lang['UCP_PF_ID_Field_Name'] = 'Your Field Name';
 *   $lang['UCP_PF_ID_Field_Name_Description'] = 'Your Field Description';
 *
 *   Example: you have a field with ID=1 which is named Phone
 *   $lang['UCP_PF_1_Phone'] = 'Phone';
 *   $lang['UCP_PF_1_Phone_Description'] = 'Phone Number';
 *
 ***************************************************************************/

/*
$lang['UCP_PF__'] = '';
$lang['UCP_PF___Description'] = '';
*/

/*
//An German Example for Profile Fields
$lang['UCP_PF_1_Phone'] = 'Telefon';
$lang['UCP_PF_1_Description'] = 'Telefon Number';
$lang['UCP_PF_2_Team'] = 'Team';
$lang['UCP_PF_2_Description'] = 'Beschreibung des Teams';
$lang['UCP_PF_2_Juve'] = 'Wallabies';
$lang['UCP_PF_2_Milan'] = 'Kangaroos';
$lang['UCP_PF_2_Altro'] = 'Andere';
*/

?>