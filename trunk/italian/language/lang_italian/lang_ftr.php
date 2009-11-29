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
	'Ftr_msg_error' => 'Errori riscontrati',
	'Ftr_msg_success' => 'Nessun errore',

	// Buttons
	'Ftr_select_button' => ' Seleziona ',
	'Ftr_change_button' => ' Modifica ',
	'Ftr_delete_button' => ' Azzera letture ',
	'Ftr_save_button' => ' Memorizza ',

	// Admin Panel
	'Ftr_admin_users' => ' Amministrazione Argomento Forzato: Utenti che hanno visto l\'argomento',
	'Ftr_total_user_error' => 'Impossibile ottenere il totale degli utenti.',
	'Ftr_username' => 'Nome utente',
	'Ftr_post_date_time' => 'Messaggio visualizzato (data ed ora)',
	'Ftr_admin_user_delete' => ' Amministrazione Argomento Forzato: Rimozione completa utenti',
	'Ftr_user_del_success' => 'Tutti gli utenti rimossi.',
	'Ftr_save_config' => 'Amministrazione Argomento Forzato: Memorizza configurazione',
	'Ftr_save_config_success' => 'La tua nuova configurazione &egrave; stata memorizzata.',
	'Ftr_select_forum' => 'Amministrazione Argomento Forzato: Selezione Forum',
	'Ftr_forum_choose' => 'seleziona il forum:',
	'Ftr_set_config' => 'Amministrazione Argomento Forzato: Configurazione',
	'Ftr_topic_choose' => 'Seleziona l\'argomento di cui volete forzarne la lettura:',
	'Ftr_message' => 'Scrivete il messaggio che verr&agrave; visualizzato dall\'utente invitandolo a leggere questo argomento.',
	'Ftr_config' => 'Amministrazione Argomento Forzato: Configurazione',
	'Ftr_post_changed' => 'Il messaggio &egrave; stato modificato. Volete che sia nuovamente forzata la lettura?',
	'Ftr_current_topic' => 'Argomento attualmente utilizzato:',
	'Ftr_current_message' => 'Messaggio attivo:',
	'Ftr_default' => 'Seleziona un forum',
	'Ftr_default2' => 'Seleziona un argomento',

	/* Added in 1.0.2 */

	'Ftr_user_deleted' => 'Utente rimosso!',
	'Ftr_deactivate' => 'Disattivazione del Mod?<br /><span class="gensmall">Selezionando <b>SI</b> la funzione verr&agrave; disattivata</span>',
	'Ftr_whos_effected' => 'Chi volete sia obbligato a leggere questo messaggio?<br /><span class="gensmall">Selezionando <b>Nuovi Iscritti</b> soltanto coloro che si iscriveranno dopo l\'installazione di questo mod saranno obbligati a leggere questo messaggio.</span>',
	'Ftr_whos_effected_a' => 'Tutti',
	'Ftr_whos_effected_n' => 'Nuovi Iscritti',
	'Ftr_deactivate_y' => 'Si',
	'Ftr_deactivate_n' => 'No',
	'Ftr_effected_1' => 'Solo i nuovi utenti saranno obbligati a leggere questo messaggio.',
	'Ftr_effected_2' => 'Tutti gli utenti saranno obbligati a leggere questo messaggio.',
	'Ftr_active_1' => 'Hai disattivato questo Mod. Nessun utente verr&agrave; obbligato a leggere questo messaggio.',
	'Ftr_active_2' => 'Il Mod &egrave; stato attivato!',
	)
);

?>