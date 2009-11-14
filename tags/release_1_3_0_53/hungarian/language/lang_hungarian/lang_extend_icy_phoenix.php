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
  '20_SQL_Charge' => 'SQL Optimaliz�ci�',
  '30_Posting' => 'Hozz�sz�l�sok �s �zenetek',
  '40_IMG_Posting' => 'K�pek a hozz�sz�l�sokban',
  '50_Hierarchy_setting' => 'F�rum',
  '60_Calendar_settings' => 'Kalend�rium',
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
  'Hierarchy_setting' => 'F�rum',
  'Forum_link' => 'Link �tir�ny�t�s',
  'Forum_link_visited' => 'Ezt a linket %d-szer l�tt�k',
  'Use_sub_forum' => 'Index felsorol�sa',
  'Index_packing_explain' => 'Choose the level of packing you want for the index',
  'Medium' => 'K�zepes',
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
  'Subforums' => 'Alf�rumok',
  'Calendar_settings' => 'Kalend�rium',
  'Calendar' => 'Kalend�rium',
  'Calendar_scheduler' => '�temez�',
  'Calendar_event' => 'Calendar event',
  'Calendar_from_to' => 'From %s to %s (inclusive)',
  'Calendar_time' => '%s',
  'Calendar_duration' => 'Id�tartam',
  'Calendar_week_start' => 'A h�t els� napja',
  'Calendar_header_cells' => 'A f�rum fejl�c�ben megjelen� cell�k sz�ma (a 0 letiltja a megjelen�st)',
  'Calendar_title_length' => 'Length of the title displayed in the calendar cells',
  'Calendar_text_length' => 'Length of the text displayed in the overview windows',
  'Calendar_block_display' => 'A f�rum fejl�c�ben megjelen� sorok sz�ma',
  'Calendar_display_open' => 'Display the calendar row on the board header opened (if calendar row enabled)',
  'Calendar_nb_row' => 'A f�rum fejl�c�ben megjelen� egy napra es� sorok sz�ma',
  'Calendar_birthday' => 'Sz�let�snapok megjelen�t�se a kalend�riumban',
  'Calendar_forum' => 'A napt�rban jelenjen meg a f�rum neve alatt a t�ma c�me is',
  'Sorry_auth_cal' => 'Sorry, but only %s can post calendar events in this forum.',
  'Date_error' => 'day %d, month %d, year %d is not a valid date',
  'Event_time' => 'Eset ideje',
  'Minutes' => 'perce',
  'Today' => 'Ma',
  'Yesterday' => 'Yesterday',
  'All_events' => 'Minden eset',
  'Rules_calendar_can' => '<b>Tudsz</b> bek�ldeni kalend�riumi esem�nyt ebbe a f�rumba',
  'Rules_calendar_cannot' => '<b>Nem tudsz</b> bek�ldeni kalend�riumi esem�nyt ebbe a f�rumba',
  'birthday_header' => 'Happy Birthday!',
  'birthday' => '<b>%s</b> has birthday today!',
  'DB_LOG_ALL' => 'Yes with error reports',
  'Redirect' => '�tir�ny�t�s',
  'Redirect_to' => 'Ha a b�ng�sz�d nem t�mogatja az automatius �tir�ny�t�st, akkor kattins %side%s az �tir�ny�t�shoz',
))
?>