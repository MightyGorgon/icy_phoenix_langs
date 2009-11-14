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
  'Site_links' => 'Linkek',
  'Link_lock_submit_site' => 'Oldalbeköldés zárolva',
  'Link_title' => 'Oldal neve',
  'Link_desc' => 'Oldal leírása',
  'Link_url' => 'Oldal URL',
  'Link_logo_src' => 'Oldal logója (88x31 pixel, mérete maximum 10K), vagy hagyd üresen:',
  'Link_logo_src1' => 'Oldal logója (88x31 pixel, mérete maximum 10K):',
  'Links_Preview' => 'Elõnézet',
  'Link_category' => 'Oldal kategóriája',
  'link_hits' => 'Találat',
  'Link_us' => 'Link: ',
  'Link_us_explain' => 'Kérünk helyezd el ezt a <b>%s</b> oldalra mutató linket ezzel a HTML kóddal:',
  'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" alt="%s" /></a>',
  'Link_register' => 'Egy oldal ajánlása',
  'Link_register_guest_rule' => 'Lépj be, mint regisztrált felhasználó, és akkor tudsz oldalt ajánlani.',
  'Link_register_rule' => 'Ha kitöltöd az ûrlapot, akkor a javaslatod el lesz küldve jóváhagyásra.',
  'Link_pm_notify_subject' => 'Link hozzáadva',
  'Link_pm_notify_message' => '
 A %s link hozzáadva,
 kérlek menj el a Linkkezelõbe, és hagyd jóvá.',
  'Link_update_success' => 'Az információ elküldve',
  'Link_update_fail' => 'Bocsi!! Az információ nem lett elküldve, kérlek nyomd meg a vissza gombot, és próbáld meg még egyszer',
  'Link_incomplete' => 'Bocsi!! Nincs teljesen kitöltve az ûrlap, kérlek nyomd meg a vissza gombot, és próbáld meg még egyszer',
  'Link_intval_warning' => 'Bocsi!! Nem tudsz most ajánlani semmilyen oldalt, kérlek gyere vissza késõbb',
  'Click_return_links' => 'Kattints %side%s a Linkekhez való visszatéréshez',
  'Please_enter_your' => 'Kérem adja meg a ',
  'No_Logo_img' => '<span class="text_blue">&#8226;</span>',
  'No_Display_Links_Logo' => '<span class="text_red">&#8226;</span>',
  'Links_home' => 'Linkek',
  'Search_site' => 'Keresõoldal',
  'Search_site_title' => 'Keresõoldal neve/meghatározása:',
  'Descend_by_hits' => 'Találat csökkentése',
  'Descend_by_joindate' => 'Dátum csökkentése',
  'Logo' => 'Logó',
  'Site' => 'Oldal',
  'Link_ME' => 'Link ide',
  'Remember_Me' => 'Automatikus belépés',
))
?>