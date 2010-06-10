<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/* translation
                           
   Переведено на русский: Мельников Николай(zver) zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
It is translated into Russian: Mel'nikov Nikolay(zver)   zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
                    
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

$lang['Mini_Cal_calendar'] = 'Календарь';
$lang['Mini_Cal_add_event'] = 'Добавить событие';
$lang['Mini_Cal_events'] = 'Наступающие события';
$lang['Mini_Cal_no_events'] = 'Нет';

// uses MySQL DATE_FORMAT - %c  long_month, numeric (1..12) - %e  Day of the long_month, numeric (0..31)
// see http://www.mysql.com/doc/D/a/Date_and_time_functions.html for more details
// currently supports: %a, %b, %c, %d, %e, %m, %y, %Y, %H, %k, %h, %l, %i, %s, %p
$lang['Mini_Cal_date_format'] = '%b %e';
$lang['Mini_Cal_date_format_Time'] = '%H:%i';

// if you change the first day of the week in constants.php, you should change values for the short day names accordingly
// e.g. FDOW = Sunday -> $lang['mini_cal']['day'][1] = 'Su'; ... $lang['mini_cal']['day'][7] = 'Sa';
//      FDOW = Monday -> $lang['mini_cal']['day'][1] = 'Mo'; ... $lang['mini_cal']['day'][7] = 'Su';
$lang['mini_cal']['day'][1] = 'Mo';
$lang['mini_cal']['day'][2] = 'Tu';
$lang['mini_cal']['day'][3] = 'We';
$lang['mini_cal']['day'][4] = 'Th';
$lang['mini_cal']['day'][5] = 'Fr';
$lang['mini_cal']['day'][6] = 'Sa';
$lang['mini_cal']['day'][7] = 'Su';

$lang['mini_cal']['month'][1] = 'Jan';
$lang['mini_cal']['month'][2] = 'Feb';
$lang['mini_cal']['month'][3] = 'Mar';
$lang['mini_cal']['month'][4] = 'Apr';
$lang['mini_cal']['month'][5] = 'May';
$lang['mini_cal']['month'][6] = 'Jun';
$lang['mini_cal']['month'][7] = 'Jul';
$lang['mini_cal']['month'][8] = 'Aug';
$lang['mini_cal']['month'][9] = 'Sep';
$lang['mini_cal']['month'][10] = 'Oct';
$lang['mini_cal']['month'][11] = 'Nov';
$lang['mini_cal']['month'][12] = 'Dec';

$lang['mini_cal']['long_month'][1] = 'Январь';
$lang['mini_cal']['long_month'][2] = 'Февраль';
$lang['mini_cal']['long_month'][3] = 'Март';
$lang['mini_cal']['long_month'][4] = 'Апрель';
$lang['mini_cal']['long_month'][5] = 'Май';
$lang['mini_cal']['long_month'][6] = 'Июнь';
$lang['mini_cal']['long_month'][7] = 'Июль';
$lang['mini_cal']['long_month'][8] = 'Август';
$lang['mini_cal']['long_month'][9] = 'Сентябрь';
$lang['mini_cal']['long_month'][10] = 'Октябрь';
$lang['mini_cal']['long_month'][11] = 'Ноябрь';
$lang['mini_cal']['long_month'][12] = 'Декабрь';

?>