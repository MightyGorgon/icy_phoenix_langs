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
* netclectic - Adrian Cockburn - phpbb@netclectic.com
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

$lang['Mini_Cal_calendar'] = 'Calendario';
$lang['Mini_Cal_add_event'] = 'A�adir eventos';
$lang['Mini_Cal_events'] = 'Pr�ximos eventos';
$lang['Mini_Cal_no_events'] = 'Ninguno';

// uses MySQL DATE_FORMAT - %c  long_month, numeric (1..12) - %e  Day of the long_month, numeric (0..31)
// see http://www.mysql.com/doc/D/a/Date_and_time_functions.html for more details
// currently supports: %a, %b, %c, %d, %e, %m, %y, %Y, %H, %k, %h, %l, %i, %s, %p
$lang['Mini_Cal_date_format'] = '%b %e';
$lang['Mini_Cal_date_format_Time'] = '%H:%i';

// if you change the first day of the week in constants.php, you should change values for the short day names accordingly
// e.g. FDOW = Sunday -> $lang['mini_cal']['day'][1] = 'Su'; ... $lang['mini_cal']['day'][7] = 'Sa'; 
//      FDOW = Monday -> $lang['mini_cal']['day'][1] = 'Mo'; ... $lang['mini_cal']['day'][7] = 'Su'; 
$lang['mini_cal']['day'][7] = 'S�';
$lang['mini_cal']['day'][1] = 'Do';
$lang['mini_cal']['day'][2] = 'Lu';
$lang['mini_cal']['day'][3] = 'Ma';
$lang['mini_cal']['day'][4] = 'Mi';
$lang['mini_cal']['day'][5] = 'Ju';
$lang['mini_cal']['day'][6] = 'Vi';

$lang['mini_cal']['month'][1] = 'Ene';
$lang['mini_cal']['month'][2] = 'Feb';
$lang['mini_cal']['month'][3] = 'Mar';
$lang['mini_cal']['month'][4] = 'Abr';
$lang['mini_cal']['month'][5] = 'May';
$lang['mini_cal']['month'][6] = 'Jun';
$lang['mini_cal']['month'][7] = 'Jul';
$lang['mini_cal']['month'][8] = 'Ago';
$lang['mini_cal']['month'][9] = 'Sep';
$lang['mini_cal']['month'][10] = 'Oct';
$lang['mini_cal']['month'][11] = 'Nov';
$lang['mini_cal']['month'][12] = 'Dic';

$lang['mini_cal']['long_month'][1] = 'Enero'; 
$lang['mini_cal']['long_month'][2] = 'Febrero'; 
$lang['mini_cal']['long_month'][3] = 'Marzo'; 
$lang['mini_cal']['long_month'][4] = 'Abril'; 
$lang['mini_cal']['long_month'][5] = 'Mayo'; 
$lang['mini_cal']['long_month'][6] = 'Junio'; 
$lang['mini_cal']['long_month'][7] = 'Julio'; 
$lang['mini_cal']['long_month'][8] = 'Agosto'; 
$lang['mini_cal']['long_month'][9] = 'Septiembre'; 
$lang['mini_cal']['long_month'][10] = 'Octubre'; 
$lang['mini_cal']['long_month'][11] = 'Noviembre'; 
$lang['mini_cal']['long_month'][12] = 'Diciembre'; 

?>