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
  'Ftr_msg_error' => 'Hiba',
  'Ftr_msg_success' => 'Siker',
  'Ftr_select_button' => ' Kiválaszt ',
  'Ftr_change_button' => ' Változtat ',
  'Ftr_delete_button' => ' Töröl ',
  'Ftr_save_button' => ' Ment ',
  'Ftr_admin_users' => 'Force Topic Read Admin: Users Who Have Viewed The Topic',
  'Ftr_total_user_error' => 'Error Getting Total Users.',
  'Ftr_username' => 'Felhasználónév',
  'Ftr_post_date_time' => 'Viewed Post Date &amp; Time',
  'Ftr_admin_user_delete' => 'Force Topic Read Admin: Complete User Deletion',
  'Ftr_user_del_success' => 'All Users Were Deleted.',
  'Ftr_save_config' => 'Force Topic Read Admin: Save Configuration',
  'Ftr_save_config_success' => 'Your New Config Settings Are Saved.',
  'Ftr_select_forum' => 'Force Topic Read Admin: Select Forum',
  'Ftr_forum_choose' => 'Choose The Forum:',
  'Ftr_set_config' => 'Force Topic Read Admin: Set Configuration',
  'Ftr_topic_choose' => 'Choose The Topic To Force Them To Read:',
  'Ftr_message' => 'Type Your Message The User Will Receive Telling Them To View This Topic.',
  'Ftr_config' => 'Force Topic Read Admin: Configuration',
  'Ftr_post_changed' => 'Changed The Post &amp; Want Them To Re-Read It?',
  'Ftr_current_topic' => 'Jelenleg használatos téma:',
  'Ftr_current_message' => 'Jelenlegi üzenet:',
  'Ftr_default' => 'Válassz egy fórumot',
  'Ftr_default2' => 'Válassz egy témát',
  'Ftr_user_deleted' => 'Felhasználó törölve!',
  'Ftr_deactivate' => 'Letiltod ezt a modot?<br /><span class="gensmall"><b>Igen</b> maradjon csendben ez a mod!</span>',
  'Ftr_whos_effected' => 'Kikkel szeretnéd ezt kötelezõen elolvastatni?<span class="gensmall">Új tagoknak számítanak azok, akik a mod telepítése és aktiválása után regisztrálna a fórumra.</span>',
  'Ftr_whos_effected_a' => 'Minden tag',
  'Ftr_whos_effected_n' => 'Új tagok',
  'Ftr_deactivate_y' => 'Igen',
  'Ftr_deactivate_n' => 'Nem',
  'Ftr_effected_1' => 'Csak az új tagoknak kötelezõ ezt elolvasni.',
  'Ftr_effected_2' => 'Minden tagnak kötelezõ ezt elolvasni.',
  'Ftr_active_1' => 'Letiltottad ezt a modot azzal, hogy nincs senki, aki meg lenne jelölve a kötelezõ elolvasáshoz.',
  'Ftr_active_2' => 'Aktiváltad ezt a modot!',
))
?>