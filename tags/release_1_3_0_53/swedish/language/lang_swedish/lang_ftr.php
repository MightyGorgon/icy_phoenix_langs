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
	'Ftr_admin_users' => 'FTR: Användare Som Har Sett Ämnet',
	'Ftr_total_user_error' => 'Error Få Totala Användare.',
	'Ftr_username' => '<strong>Användarnamn</strong>',
	'Ftr_post_date_time' => '<strong>Visad Post Datum &amp; Tid</strong>',
	'Ftr_admin_user_delete' => 'FTR: Komplett Användare Raderingar',
	'Ftr_user_del_success' => 'Alla Användare Var Successfullt Raderade.',
	'Ftr_save_config' => 'FTR: Spara Konfiguration',
	'Ftr_save_config_success' => 'Den Nya Config Inställningen Har Sparats.',
	'Ftr_select_forum' => 'FTR: Välj Forum',
	'Ftr_forum_choose' => '<strong>Välj ett Forum:</strong>',
	'Ftr_set_config' => 'FTR: Sätt Konfiguration',
	'Ftr_topic_choose' => 'Välj ämnet som de är tvingade att läsa:',
	'Ftr_message' => 'Ange ett meddelande som Användarna kommer att få som berättar att de ska granska detta ämne.',
	'Ftr_config' => 'FTR: Konfiguration',
	'Ftr_post_changed' => '<strong>Radera FTR flaggor:</strong><br /> Detta tvingar \'alla\' medlemmar att Åter-Läsa inlägget.',
	'Ftr_current_topic' => '<strong>Aktuellt FTR Ämne:</strong>',
	'Ftr_current_message' => '<strong>Aktuellt Meddelande:</strong>',
	'Ftr_default' => 'Välj Ett Forum',
	'Ftr_default2' => 'Välj Ett Ämne',

// Added in 1.0.2
	'Ftr_user_deleted' => 'Användare Raderad!',
	'Ftr_deactivate' => '<strong>Inaktivera FTR?</strong><br /><span class="gensmall"><b>Ja</b> will turn off FTR.</span>',
	'Ftr_whos_effected' => '<strong>Vem tvingad att läsa detta?</strong><br /><span class="gensmall">\'Nya Medlemmar\' påverkar endast nyregistreringar.</span>',
	'Ftr_whos_effected_a' => 'Alla Medlemmar',
	'Ftr_whos_effected_n' => 'Nya Medlemmar',
	'Ftr_deactivate_y' => 'Ja',
	'Ftr_deactivate_n' => 'Nej',
	'Ftr_effected_1' => 'Endast Nya Användarna Kommer Att Tvingas Att Läsa Detta.',
	'Ftr_effected_2' => 'Alla Användarna Kommer Att Tvingas Att Läsa Detta.',
	'Ftr_active_1' => 'Du Har Avaktiverat FTR. Ingen Kommer Att Tvingas Att Läsa Detta.',
	'Ftr_active_2' => 'Du Har Aktiverat FTR!',
	)
);

?>