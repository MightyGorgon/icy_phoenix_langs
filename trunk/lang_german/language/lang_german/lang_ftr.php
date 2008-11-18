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
* TheSteffen, KugeLSichA, Tom,Carsten
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
    'Ftr_msg_error' => 'Fehler',
    'Ftr_msg_success' => 'Erfolg',

// Buttons
    'Ftr_select_button' => ' Ausw�hlen ',
    'Ftr_change_button' => ' �ndern ',
    'Ftr_delete_button' => ' L�schen ',
    'Ftr_save_button' => ' Speichern ',

// Admin Panel
    'Ftr_admin_users' => 'Force Topic Read Admin: Benutzer, die sich das Thema angesehen haben',
    'Ftr_total_user_error' => 'Fehler beim Lesen der Gesamtbenutzer.',
    'Ftr_username' => '<strong>Benutzername</strong>',
    'Ftr_post_date_time' => '<strong>Angesehener Beitrag Datum &amp; Zeit</strong>',
    'Ftr_admin_user_delete' => 'Force Topic Read Admin: Vollst�ndige Benutzer L�schung',
    'Ftr_user_del_success' => 'Alle Benutzer wurden gel�scht.',
    'Ftr_save_config' => 'Force Topic Read Admin: Konfiguration Speichern',
    'Ftr_save_config_success' => 'Deine neuen Konfigurationseinstellungen wurden gespeichert.',
    'Ftr_select_forum' => 'Force Topic Read Admin: Forum Ausw�hlen',
    'Ftr_forum_choose' => 'Forum ausw�hlen:',
    'Ftr_set_config' => 'Force Topic Read Admin: Konfiguration Setzen',
    'Ftr_topic_choose' => 'W�hle das Thema, welches die Benutzer lesen m�ssen:',
    'Ftr_message' => 'Gib die Nachricht ein, die der Benutzer erh�lt und ihm mitteilt, dass er dieses Thema lesen muss.',
    'Ftr_config' => 'Force Topic Read Admin: Konfiguration',
    'Ftr_post_changed' => 'Beitrag ge�ndert &amp; Sollen sie es erneut lesen?',
    'Ftr_current_topic' => 'Aktuell verwendetes Thema:',
    'Ftr_current_message' => 'Aktuelle Nachricht:',
    'Ftr_default' => 'W�hle ein Forum',
    'Ftr_default2' => 'W�hle ein Thema',

// Added in 1.0.2
    'Ftr_user_deleted' => 'Benutzer gel�scht!',
    'Ftr_deactivate' => '<strong>Diesen MOD deaktivieren?</strong><br /><span class=\'gensmall\'><b>Ja</b> schaltet diesen MOD ab!</span>',
    'Ftr_whos_effected' => 'Wer wird gezwungen dieses Thema zu lesen?<span class=\'gensmall\'>Neue Mitglieder zwingt nur Mitglieder, die sich nach Installation dieses Mods anmelden, das Thema zu lesen.</span>',
    'Ftr_whos_effected_a' => 'Alle Mitglieder',
    'Ftr_whos_effected_n' => 'Neue Mitglieder',
    'Ftr_deactivate_y' => 'Ja',
    'Ftr_deactivate_n' => 'Nein',
    'Ftr_effected_1' => 'Nur neue Mitglieder werden gezwungen, das zu lesen.',
    'Ftr_effected_2' => 'Alle Mitglieder werden gezwungen, das zu lesen.',
    'Ftr_active_1' => 'Du hast diesen Mod deaktiviert. Niemand wird gezwungen, das zu lesen.',
    'Ftr_active_2' => 'Du hast den Mod aktiviert!',
	)
);

?>