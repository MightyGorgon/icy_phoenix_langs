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
  'Mini_Cal_calendar' => 'Kalend�rium',
  'Mini_Cal_add_event' => 'Esem�ny hozz�ad�sa',
  'Mini_Cal_events' => 'K�vetkez� esem�nyek',
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
      1 => 'H�',
      2 => 'Ke',
      3 => 'Sz',
      4 => 'Cs',
      5 => 'P�',
      6 => 'Sz',
    ),
    'month' => 
    array (
      1 => 'Jan',
      2 => 'Feb',
      3 => 'M�r',
      4 => '�pr',
      5 => 'M�j',
      6 => 'J�n',
      7 => 'J�l',
      8 => 'Aug',
      9 => 'Sze',
      10 => 'Okt',
      11 => 'Nov',
      12 => 'Dec',
    ),
    'long_month' => 
    array (
      1 => 'Janu�r',
      2 => 'Febru�r',
      3 => 'M�rcius',
      4 => '�prilis',
      5 => 'M�jus',
      6 => 'J�nius',
      7 => 'J�lius',
      8 => 'Augusztus',
      9 => 'Szeptember',
      10 => 'Okt�ber',
      11 => 'November',
      12 => 'December',
    ),
  ),
));
?>