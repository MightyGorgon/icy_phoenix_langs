<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_ftr.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
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
	'Ftr_msg_error' => 'Error',
	'Ftr_msg_success' => 'Framgång',

// Buttons
	'Ftr_select_button' => ' Välj ',
	'Ftr_change_button' => ' Ändra ',
	'Ftr_delete_button' => ' Radera ',
	'Ftr_save_button' => ' Spara ',

// Admin Panel
	'Ftr_admin_users' => 'FTR: Användare som har sett ämnet',
	'Ftr_total_user_error' => 'Error Få totala användare.',
	'Ftr_username' => '<strong>Användarnamn</strong>',
	'Ftr_post_date_time' => '<strong>Visad post datum &amp; tid</strong>',
	'Ftr_admin_user_delete' => 'FTR: Komplett användare raderingar',
	'Ftr_user_del_success' => 'Alla Användare var successfullt raderade.',
	'Ftr_save_config' => 'FTR: Spara konfiguration',
	'Ftr_save_config_success' => 'Den nya konfigurations inställningen har sparats.',
	'Ftr_select_forum' => 'FTR: Välj forum',
	'Ftr_forum_choose' => '<strong>Välj ett forum:</strong>',
	'Ftr_set_config' => 'FTR: Sätt konfiguration',
	'Ftr_topic_choose' => 'Välj ämnet som de är tvingade att läsa:',
	'Ftr_message' => 'Ange ett meddelande som användarna kommer att få som berättar att de ska granska detta ämne.',
	'Ftr_config' => 'FTR: Konfiguration',
	'Ftr_post_changed' => '<strong>Radera FTR flaggor:</strong><br /> Detta tvingar \'alla\' medlemmar att åter-läsa inlägget.',
	'Ftr_current_topic' => '<strong>Aktuellt FTR ämne:</strong>',
	'Ftr_current_message' => '<strong>Aktuellt Meddelande:</strong>',
	'Ftr_default' => 'Välj ett forum',
	'Ftr_default2' => 'Välj ett ämne',

// Added in 1.0.2
	'Ftr_user_deleted' => 'Användare raderad!',
	'Ftr_deactivate' => '<strong>Inaktivera FTR?</strong><br /><span class="gensmall"><b>Ja</b> kommer att stänga av FTR.</span>',
	'Ftr_whos_effected' => '<strong>Vem tvingad att läsa detta?</strong><br /><span class="gensmall">\'Nya Medlemmar\' påverkar endast nyregistreringar.</span>',
	'Ftr_whos_effected_a' => 'Alla medlemmar',
	'Ftr_whos_effected_n' => 'Nya medlemmar',
	'Ftr_deactivate_y' => 'Ja',
	'Ftr_deactivate_n' => 'Nej',
	'Ftr_effected_1' => 'Endast nya användare kommer att tvingas att läsa detta.',
	'Ftr_effected_2' => 'Alla användarna kommer att tvingas att läsa detta.',
	'Ftr_active_1' => 'Du har avaktiverat FTR. Ingen kommer att tvingas att läsa detta.',
	'Ftr_active_2' => 'Du har aktiverat FTR!',
	)
);

?>