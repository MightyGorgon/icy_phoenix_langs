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
 *   Usa questo file per impostare i nomi dei campi personalizzati nel profilo.
 *   Questa è la sintassi da usare:
 *   $lang['UCP_PF_ID_Field_Name'] = 'Nome del campo';
 *   $lang['UCP_PF_ID_Field_Name_Description'] = 'Descrizione del campo';
 *
 *   Esempio: avendo un campo con ID=1 che si chiama Phone
 *   $lang['UCP_PF_1_Phone'] = 'Telefono';
 *   $lang['UCP_PF_1_Phone_Description'] = 'Numero di telefono';
 *
 ***************************************************************************/

/*
$lang['UCP_PF__'] = '';
$lang['UCP_PF___Description'] = '';
*/

//An Italian Example for Profile Fields
/*
$lang['UCP_PF_1_Phone'] = 'Telefono';
$lang['UCP_PF_1_Phone_Description'] = 'Numero Di Telefono';
$lang['UCP_PF_2_Team'] = 'Squadra';
$lang['UCP_PF_2_Team_Description'] = 'Squadra Italiana';
$lang['UCP_PF_2_Team_Juve'] = 'Juventus';
$lang['UCP_PF_2_Team_Milan'] = 'Milan';
$lang['UCP_PF_2_Team_Altro'] = 'Altro';
*/

?>