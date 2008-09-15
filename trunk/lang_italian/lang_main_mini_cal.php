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
* Antonio Mercurio (roland@phpbbplus.it) www.phpbbplus.it
*
*/

$lang['Mini_Cal_calendar'] = 'Calendario';
$lang['Mini_Cal_add_event'] = 'Aggiungi evento';
$lang['Mini_Cal_events'] = 'Prossimi eventi';
$lang['Mini_Cal_no_events'] = 'Nessuno';


// uses MySQL DATE_FORMAT - %c  long_month, numeric (1..12) - %e  Day of the long_month, numeric (0..31)
// see http://www.mysql.com/doc/D/a/Date_and_time_functions.html for more details
// currently supports: %a, %b, %c, %d, %e, %m, %y, %Y, %H, %k, %h, %l, %i, %s, %p
$lang['Mini_Cal_date_format'] = '%e %b';
$lang['Mini_Cal_date_format_Time'] = '%H:%i';


// if you change the first day of the week in constants.php, you should change values for the short day names accordingly
// e.g. FDOW = Sunday -> $lang['mini_cal']['day'][1] = 'Su'; ... $lang['mini_cal']['day'][7] = 'Sa';
//      FDOW = Monday -> $lang['mini_cal']['day'][1] = 'Mo'; ... $lang['mini_cal']['day'][7] = 'Su';
$lang['mini_cal']['day'][1] = 'Lu';
$lang['mini_cal']['day'][2] = 'Ma';
$lang['mini_cal']['day'][3] = 'Me';
$lang['mini_cal']['day'][4] = 'Gi';
$lang['mini_cal']['day'][5] = 'Ve';
$lang['mini_cal']['day'][6] = 'Sa';
$lang['mini_cal']['day'][7] = 'Do';

$lang['mini_cal']['month'][1] = 'Gen';
$lang['mini_cal']['month'][2] = 'Feb';
$lang['mini_cal']['month'][3] = 'Mar';
$lang['mini_cal']['month'][4] = 'Apr';
$lang['mini_cal']['month'][5] = 'Mag';
$lang['mini_cal']['month'][6] = 'Giu';
$lang['mini_cal']['month'][7] = 'Lug';
$lang['mini_cal']['month'][8] = 'Ago';
$lang['mini_cal']['month'][9] = 'Set';
$lang['mini_cal']['month'][10] = 'Ott';
$lang['mini_cal']['month'][11] = 'Nov';
$lang['mini_cal']['month'][12] = 'Dic';

$lang['mini_cal']['long_month'][1] = 'Gennaio';
$lang['mini_cal']['long_month'][2] = 'Febbraio';
$lang['mini_cal']['long_month'][3] = 'Marzo';
$lang['mini_cal']['long_month'][4] = 'Aprile';
$lang['mini_cal']['long_month'][5] = 'Maggio';
$lang['mini_cal']['long_month'][6] = 'Giugno';
$lang['mini_cal']['long_month'][7] = 'Luglio';
$lang['mini_cal']['long_month'][8] = 'Agosto';
$lang['mini_cal']['long_month'][9] = 'Settembre';
$lang['mini_cal']['long_month'][10] = 'Ottobre';
$lang['mini_cal']['long_month'][11] = 'Novembre';
$lang['mini_cal']['long_month'][12] = 'Dicembre';
?>
