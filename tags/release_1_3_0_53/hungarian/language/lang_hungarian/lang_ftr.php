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
* aUsTiN-Inc - (austin_inc@hotmail.com) - (phpbb-amod.com)
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

$lang = array_merge($lang, array(
// Commonly Used
  'Ftr_msg_error' => 'Hiba',
  'Ftr_msg_success' => 'Siker',

// Buttons
  'Ftr_select_button' => ' Kiv�laszt ',
  'Ftr_change_button' => ' V�ltoztat ',
  'Ftr_delete_button' => ' T�r�l ',
  'Ftr_save_button' => ' Ment ',

// Admin Panel
  'Ftr_admin_users' => 'Force Topic Read Admin: Users Who Have Viewed The Topic',
  'Ftr_total_user_error' => 'Error Getting Total Users.',
  'Ftr_username' => 'Felhaszn�l�n�v',
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
  'Ftr_current_topic' => 'Jelenleg haszn�latos t�ma:',
  'Ftr_current_message' => 'Jelenlegi �zenet:',
  'Ftr_default' => 'V�lassz egy f�rumot',
  'Ftr_default2' => 'V�lassz egy t�m�t',

// Added in 1.0.2
  'Ftr_user_deleted' => 'Felhaszn�l� t�r�lve!',
  'Ftr_deactivate' => 'Letiltod ezt a modot?<br /><span class="gensmall"><b>Igen</b> maradjon csendben ez a mod!</span>',
  'Ftr_whos_effected' => 'Kikkel szeretn�d ezt k�telez�en elolvastatni?<span class="gensmall">�j tagoknak sz�m�tanak azok, akik a mod telep�t�se �s aktiv�l�sa ut�n regisztr�lna a f�rumra.</span>',
  'Ftr_whos_effected_a' => 'Minden tag',
  'Ftr_whos_effected_n' => '�j tagok',
  'Ftr_deactivate_y' => 'Igen',
  'Ftr_deactivate_n' => 'Nem',
  'Ftr_effected_1' => 'Csak az �j tagoknak k�telez� ezt elolvasni.',
  'Ftr_effected_2' => 'Minden tagnak k�telez� ezt elolvasni.',
  'Ftr_active_1' => 'Letiltottad ezt a modot azzal, hogy nincs senki, aki meg lenne jel�lve a k�telez� elolvas�shoz.',
  'Ftr_active_2' => 'Aktiv�ltad ezt a modot!',
)
);

?>