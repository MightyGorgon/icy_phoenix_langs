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
	'Ftr_msg_error' => 'Fout',
	'Ftr_msg_success' => 'Goed',

// Buttons
	'Ftr_select_button' => ' Selecteren ',
	'Ftr_change_button' => ' Wijzigen ',
	'Ftr_delete_button' => ' Verwijderen ',
	'Ftr_save_button' => ' Opslaan ',

// Admin Panel
	'Ftr_admin_users' => 'FTR: Gebruikers die deze onderwerp bekeken hebben',
	'Ftr_total_user_error' => 'Fout bij het lezen van de aantal gebruikers',
	'Ftr_username' => 'Gebruikersnaam',
	'Ftr_post_date_time' => 'Bekeken berichtdatum &amp; berichttijd',
	'Ftr_admin_user_delete' => 'FTR: volledige gebruikersverwijdering',
	'Ftr_user_del_success' => 'Alle gebruikers zijn succesvol verwijderd.',
	'Ftr_save_config' => 'FTR: configuratie opslaan',
	'Ftr_save_config_success' => 'De nieuwe configuratie wordt opgeslagen..',
	'Ftr_select_forum' => 'FTR: selecteer forum',
	'Ftr_forum_choose' => 'Selecteer een forum:',
	'Ftr_set_config' => 'FTR: configuratie zetten',
	'Ftr_topic_choose' => 'Kies de onderwerp, welke de gebruiker moet lezen:',
	'Ftr_message' => 'Geef je bericht in, dat de gebruiker ontvangt en op de hoogte brengt dat er een onderwerp gelezen moet worden.',
	'Ftr_config' => 'FTR: configuratie',
	'Ftr_post_changed' => '<strong>Bericht veranderen:</strong><br /> Moet het opnieuw gelezen worden?.',
	'Ftr_current_topic' => '<strong>Huidige gekozen onderwerp:</strong>',
	'Ftr_current_message' => '<strong>Huidig bericht:</strong>',
	'Ftr_default' => 'Kies een forum',
	'Ftr_default2' => 'Kies een onderwerp',

// Added in 1.0.2
	'Ftr_user_deleted' => 'Gebruiker verwijderd!',
	'Ftr_deactivate' => '<strong>Deze mod deactiveren?</strong><br /><span class="gensmall"><b>Ja</b> schakel deze MOD uit.</span>',
	'Ftr_whos_effected' => '<strong>Wie wordt gedwongen om deze onderwerp te lezen?</strong><br /><span class="gensmall">\'Nieuwe gebruikers\' heeft alleen effect bij nieuwe registraties.</span>',
	'Ftr_whos_effected_a' => 'Alle gebruikers',
	'Ftr_whos_effected_n' => 'Nieuwe gebruikers',
	'Ftr_deactivate_y' => 'Ja',
	'Ftr_deactivate_n' => 'Nee',
	'Ftr_effected_1' => 'Alleen nieuwe gebruikers worden gedwongen, dat te lezen.',
	'Ftr_effected_2' => 'Alle gebruikers worden gedwongen, dat te lezen.',
	'Ftr_active_1' => 'Je hebt deze mod gedeactiveerd. Niemand wordt gedwongen, dat te lezen.',
	'Ftr_active_2' => 'Je hebt de mod geactiveerd!',
	)
);

?>