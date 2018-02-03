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
 *   $lang['UCP_PF_ID_Field_Name'] = 'Su Campo Nombre';
 *   $lang['UCP_PF_ID_Field_Name_Description'] = 'Su Campo Descripción';
 *
 *   Example: you have a field with ID=1 which is named Phone
 *   $lang['UCP_PF_1_Phone'] = 'Teléfono';
 *   $lang['UCP_PF_1_Phone_Description'] = 'Número de Teléfono';
 *
 ***************************************************************************/

/*
$lang['UCP_PF__'] = '';
$lang['UCP_PF___Descripción'] = '';
*/

/*
//An Australian Example for Profile Fields
$lang['UCP_PF_1_Phone'] = 'Teléfono';
$lang['UCP_PF_1_Description'] = 'Número de teléfono';
$lang['UCP_PF_2_Team'] = 'Equipo';
$lang['UCP_PF_2_Description'] = 'Equipo Australizano';
$lang['UCP_PF_2_Juve'] = 'Wallabies';
$lang['UCP_PF_2_Milan'] = 'Kangaroos';
$lang['UCP_PF_2_Altro'] = 'Otro';
*/

?>