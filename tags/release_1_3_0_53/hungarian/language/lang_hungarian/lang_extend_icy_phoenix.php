<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 110 2009-07-14 08:09:47Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
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
  '10_Main_Settings_Icy_Phoenix' => 'Icy Phoenix',
  '20_SQL_Charge' => 'SQL Optimalizáció',
  '30_Posting' => 'Hozzászólások és üzenetek',
  '40_IMG_Posting' => 'Képek a hozzászólásokban',
  '50_Hierarchy_setting' => 'Fórum',
  '60_Calendar_settings' => 'Kalendárium',
  '70_SEO' => 'SEO',
  '80_Security' => 'Logs And Security',
  '90_Cron' => 'Cron',
  'CFG_NONE' => 'NONE',
  'CFG_ALL' => 'ALL',
  'CFG_REG' => 'REG',
  'CFG_SELF' => 'SELF',
  'CFG_PRIVATE' => 'PRIVATE',
  'CFG_MOD' => 'MOD',
  'CFG_ADMIN' => 'ADMIN',
  'Hierarchy_setting' => 'Fórum',
  'Forum_link' => 'Link átirányítás',
  'Forum_link_visited' => 'Ezt a linket %d-szer látták',
  'Use_sub_forum' => 'Index felsorolása',
  'Index_packing_explain' => 'Choose the level of packing you want for the index',
  'Medium' => 'Közepes',
  'Full' => 'Teljes',
  'Split_categories' => 'Split categories on index',
  'Use_last_topic_title' => 'Show the last topic titles on index',
  'Last_topic_title_length' => 'Title length of the last topic on index',
  'Sub_level_links' => 'Sub-level links on index',
  'Sub_level_links_explain' => 'Add the links to the sub-levels in the forum or category description',
  'With_pics' => 'Ikonokkal',
  'Display_viewonline' => 'Display viewonline information box on index',
  'Never' => 'Soha',
  'Root_index_only' => 'Csak a root indexeit',
  'Always' => 'Mindig',
  'Subforums' => 'Alfórumok',
  'Calendar_settings' => 'Kalendárium',
  'Calendar' => 'Kalendárium',
  'Calendar_scheduler' => 'Ütemezõ',
  'Calendar_event' => 'Calendar event',
  'Calendar_from_to' => 'From %s to %s (inclusive)',
  'Calendar_time' => '%s',
  'Calendar_duration' => 'Idõtartam',
  'Calendar_week_start' => 'A hét elsõ napja',
  'Calendar_header_cells' => 'A fórum fejlécében megjelenõ cellák száma (a 0 letiltja a megjelenést)',
  'Calendar_title_length' => 'Length of the title displayed in the calendar cells',
  'Calendar_text_length' => 'Length of the text displayed in the overview windows',
  'Calendar_block_display' => 'A fórum fejlécében megjelenõ sorok száma',
  'Calendar_display_open' => 'Display the calendar row on the board header opened (if calendar row enabled)',
  'Calendar_nb_row' => 'A fórum fejlécében megjelenõ egy napra esõ sorok száma',
  'Calendar_birthday' => 'Születésnapok megjelenítése a kalendáriumban',
  'Calendar_forum' => 'A naptárban jelenjen meg a fórum neve alatt a téma címe is',
  'Sorry_auth_cal' => 'Sorry, but only %s can post calendar events in this forum.',
  'Date_error' => 'day %d, month %d, year %d is not a valid date',
  'Event_time' => 'Eset ideje',
  'Minutes' => 'perce',
  'Today' => 'Ma',
  'Yesterday' => 'Yesterday',
  'All_events' => 'Minden eset',
  'Rules_calendar_can' => '<b>Tudsz</b> beküldeni kalendáriumi eseményt ebbe a fórumba',
  'Rules_calendar_cannot' => '<b>Nem tudsz</b> beküldeni kalendáriumi eseményt ebbe a fórumba',
  'birthday_header' => 'Happy Birthday!',
  'birthday' => '<b>%s</b> has birthday today!',
  'DB_LOG_ALL' => 'Yes with error reports',
  'Redirect' => 'Átirányítás',
  'Redirect_to' => 'Ha a böngészõd nem támogatja az automatius átirányítást, akkor kattins %side%s az átirányításhoz',
))
?>