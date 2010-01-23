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
$lang = array_merge($lang, array (
  'Mini_Cal_calendar' => 'Naptár',
  'Mini_Cal_add_event' => 'Esemény hozzáadása',
  'Mini_Cal_events' => 'Következõ események',
  'Mini_Cal_no_events' => 'Nincs',

// uses MySQL DATE_FORMAT - %c  long_month, numeric (1..12) - %e  Day of the long_month, numeric (0..31)
// see http://www.mysql.com/doc/D/a/Date_and_time_functions.html for more details
// currently supports: %a, %b, %c, %d, %e, %m, %y, %Y, %H, %k, %h, %l, %i, %s, %p
  'Mini_Cal_date_format' => '%b %e',
  'Mini_Cal_date_format_Time' => '%H:%i',
  'mini_cal' => 
  array (
    'day' => 
    array (
      7 => 'Va',
      1 => 'Hé',
      2 => 'Ke',
      3 => 'Sz',
      4 => 'Cs',
      5 => 'Pé',
      6 => 'Sz',
    ),
    'month' => 
    array (
      1 => 'Jan',
      2 => 'Feb',
      3 => 'Már',
      4 => 'Ápr',
      5 => 'Máj',
      6 => 'Jún',
      7 => 'Júl',
      8 => 'Aug',
      9 => 'Sze',
      10 => 'Okt',
      11 => 'Nov',
      12 => 'Dec',
    ),
    'long_month' => 
    array (
      1 => 'Január',
      2 => 'Február',
      3 => 'Március',
      4 => 'Április',
      5 => 'Május',
      6 => 'Június',
      7 => 'Július',
      8 => 'Augusztus',
      9 => 'Szeptember',
      10 => 'Október',
      11 => 'November',
      12 => 'December',
    ),
  ),
));
?>
