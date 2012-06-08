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

$lang['Mini_Cal_calendar'] = 'Naptár';
$lang['Mini_Cal_add_event'] = 'Esemény hozzáadása';
$lang['Mini_Cal_events'] = 'Közelgő események';
$lang['Mini_Cal_no_events'] = 'Nincs';

// uses MySQL DATE_FORMAT - %c  long_month, numeric (1..12) - %e  Day of the long_month, numeric (0..31)
// see http://www.mysql.com/doc/D/a/Date_and_time_functions.html for more details
// currently supports: %a, %b, %c, %d, %e, %m, %y, %Y, %H, %k, %h, %l, %i, %s, %p
$lang['Mini_Cal_date_format'] = '%b %e';
$lang['Mini_Cal_date_format_Time'] = '%H:%i';

// if you change the first day of the week in constants.php, you should change values for the short day names accordingly
// e.g. FDOW = Sunday -> $lang['mini_cal']['day'][1] = 'Su'; ... $lang['mini_cal']['day'][7] = 'Sa';
//      FDOW = Monday -> $lang['mini_cal']['day'][1] = 'Mo'; ... $lang['mini_cal']['day'][7] = 'Su';
$lang['mini_cal']['day'][1] = 'H';
$lang['mini_cal']['day'][2] = 'K';
$lang['mini_cal']['day'][3] = 'Sze';
$lang['mini_cal']['day'][4] = 'Cs';
$lang['mini_cal']['day'][5] = 'P';
$lang['mini_cal']['day'][6] = 'Szo';
$lang['mini_cal']['day'][7] = 'V';

$lang['mini_cal']['month'][1] = 'jan.';
$lang['mini_cal']['month'][2] = 'febr.';
$lang['mini_cal']['month'][3] = 'márc.';
$lang['mini_cal']['month'][4] = 'ápr.';
$lang['mini_cal']['month'][5] = 'máj.';
$lang['mini_cal']['month'][6] = 'jún.';
$lang['mini_cal']['month'][7] = 'júl.';
$lang['mini_cal']['month'][8] = 'aug.';
$lang['mini_cal']['month'][9] = 'szept.';
$lang['mini_cal']['month'][10] = 'okt.';
$lang['mini_cal']['month'][11] = 'nov.';
$lang['mini_cal']['month'][12] = 'dec.';

$lang['mini_cal']['long_month'][1] = 'január';
$lang['mini_cal']['long_month'][2] = 'február';
$lang['mini_cal']['long_month'][3] = 'március';
$lang['mini_cal']['long_month'][4] = 'április';
$lang['mini_cal']['long_month'][5] = 'május';
$lang['mini_cal']['long_month'][6] = 'június';
$lang['mini_cal']['long_month'][7] = 'július';
$lang['mini_cal']['long_month'][8] = 'augusztus';
$lang['mini_cal']['long_month'][9] = 'szeptember';
$lang['mini_cal']['long_month'][10] = 'október';
$lang['mini_cal']['long_month'][11] = 'november';
$lang['mini_cal']['long_month'][12] = 'december';

?>