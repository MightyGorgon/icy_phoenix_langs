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
	'Ftr_msg_success' => 'Framg�ng',

// Buttons
	'Ftr_select_button' => ' V�lj ',
	'Ftr_change_button' => ' �ndra ',
	'Ftr_delete_button' => ' Radera ',
	'Ftr_save_button' => ' Spara ',

// Admin Panel
	'Ftr_admin_users' => 'FTR: Anv�ndare Som Har Sett �mnet',
	'Ftr_total_user_error' => 'Error F� Totala Anv�ndare.',
	'Ftr_username' => '<strong>Anv�ndarnamn</strong>',
	'Ftr_post_date_time' => '<strong>Visad Post Datum &amp; Tid</strong>',
	'Ftr_admin_user_delete' => 'FTR: Komplett Anv�ndare Raderingar',
	'Ftr_user_del_success' => 'Alla Anv�ndare Var Successfullt Raderade.',
	'Ftr_save_config' => 'FTR: Spara Konfiguration',
	'Ftr_save_config_success' => 'Den Nya Config Inst�llningen Har Sparats.',
	'Ftr_select_forum' => 'FTR: V�lj Forum',
	'Ftr_forum_choose' => '<strong>V�lj ett Forum:</strong>',
	'Ftr_set_config' => 'FTR: S�tt Konfiguration',
	'Ftr_topic_choose' => 'V�lj �mnet som de �r tvingade att l�sa:',
	'Ftr_message' => 'Ange ett meddelande som Anv�ndarna kommer att f� som ber�ttar att de ska granska detta �mne.',
	'Ftr_config' => 'FTR: Konfiguration',
	'Ftr_post_changed' => '<strong>Radera FTR flaggor:</strong><br /> Detta tvingar \'alla\' medlemmar att �ter-L�sa inl�gget.',
	'Ftr_current_topic' => '<strong>Aktuellt FTR �mne:</strong>',
	'Ftr_current_message' => '<strong>Aktuellt Meddelande:</strong>',
	'Ftr_default' => 'V�lj Ett Forum',
	'Ftr_default2' => 'V�lj Ett �mne',

// Added in 1.0.2
	'Ftr_user_deleted' => 'Anv�ndare Raderad!',
	'Ftr_deactivate' => '<strong>Inaktivera FTR?</strong><br /><span class="gensmall"><b>Ja</b> will turn off FTR.</span>',
	'Ftr_whos_effected' => '<strong>Vem tvingad att l�sa detta?</strong><br /><span class="gensmall">\'Nya Medlemmar\' p�verkar endast nyregistreringar.</span>',
	'Ftr_whos_effected_a' => 'Alla Medlemmar',
	'Ftr_whos_effected_n' => 'Nya Medlemmar',
	'Ftr_deactivate_y' => 'Ja',
	'Ftr_deactivate_n' => 'Nej',
	'Ftr_effected_1' => 'Endast Nya Anv�ndarna Kommer Att Tvingas Att L�sa Detta.',
	'Ftr_effected_2' => 'Alla Anv�ndarna Kommer Att Tvingas Att L�sa Detta.',
	'Ftr_active_1' => 'Du Har Avaktiverat FTR. Ingen Kommer Att Tvingas Att L�sa Detta.',
	'Ftr_active_2' => 'Du Har Aktiverat FTR!',
	)
);

?>