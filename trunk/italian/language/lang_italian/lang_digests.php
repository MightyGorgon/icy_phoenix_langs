<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	// This block goes as default text in the emailed digest (mail_digests.php)
	'digest_introduction' => 'Come richesto, ecco qui il Digest dei messaggi inviati su ' . $config['sitename'] . '. Vieni a visitare il sito per partecipare alle discussioni!',
	'digest_from_text_name' => $config['sitename'] . ' Robot Digest',
	'digest_from_email_address' => $config['board_email'],
	'digest_subject_line' => $config['sitename'] . ' Digests',
	'digest_disclaimer_html' => "\r\n" . 'Questo Digest viene inviato agli utenti registrati su <a href = "' . DIGEST_SITE_URL. '">' . $config['sitename'] . '</a> che ne hanno fatto richiesta. ' . $config['sitename'] . ' non &egrave; un sito con contenuto commerciale ed il tuo indirizzo email non viene fornito a terzi. Consulta le <a href = "' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">FAQ</a> per avere ulteriori informazioni sulle nostre politiche di rispetto della Privacy. Puoi modificare la tua iscrizione al Digest accedendo a ' . $config['sitename'] . ' ed entrando nella <a href = "' . DIGEST_SITE_URL . 'digests.' . PHP_EXT . '">Pagina Digest</a> (devi aver effettuato l\'accesso con i tuoi dati per poter modificare le impostazioni del Digest). Se hai domande o suggerimenti riguardo questo Digest puoi contattare il <a href = "mailto:' . $config['board_email'] . '">Webmaster di ' . $config['sitename'] . '</a>.',
	'digest_disclaimer_text' => "\r\n" . 'Questo Digest viene inviato agli utenti registrati su ' . $config['sitename'] . ' che ne hanno fatto richiesta. ' . $config['sitename'] . ' non &egrave; un sito con contenuto commerciale ed il tuo indirizzo email non viene fornito a terzi. Consulta le FAQ per avere ulteriori informazioni sulle nostre politiche di rispetto della Privacy. Puoi modificare la tua iscrizione al Digest accedendo a ' . $config['sitename'] . ' ed entrando nella Pagina Digest (devi aver effettuato l\'accesso con i tuoi dati per poter modificare le impostazioni del Digest). Se hai domande o suggerimenti riguardo questo Digest puoi contattare il Webmaster di ' . $config['sitename'] . ' a questo indirizzo: ' . $config['board_email'] . '.',
	'digest_forum' => 'Forum: ',
	'digest_topic' => 'Argomenti: ',
	'digest_link' => 'Link',
	'digest_post_time' => 'Data',
	'digest_author' => 'Autore',
	'digest_message_excerpt' => 'Estratto Messaggio',
	'digest_posted_by' => 'Inviato da ',
	'digest_posted_at' => ' il ',
	'digest_forums_message_digest' => 'Digest', // used in <head> tag
	'digest_salutation' => 'Ciao ',
	'digest_your_digest_options' => 'Opzioni Digest:',
	'digest_format' => 'Formato:',
	'digest_show_message_text' => 'Mostra Testo Messaggio:',
	'digest_show_my_messages' => 'Mostra I Miei Messaggi:',
	'digest_frequency' => 'Frequenza Digest:',
	'digest_show_only_new_messages' => 'Mostra solo i messaggi dal mio ultimo login:',
	'digest_send_if_no_new_messages' => 'Invia il Digest se non ci sono nuovi messaggi:',
	'digest_period_24_hrs' => '24 ore',
	'digest_period_1_week' => '1 settimana',
	'digest_no_new_messages' => 'Non ci sono nuovi messaggi nei forums che hai selezionato.',
	'digest_message_size' => 'Numero massimo di caratteri per messaggio nel Digest:',
	'digest_summary' => 'Sommario Digest',
	'digest_a_total_of' => 'Un totale di ',
	'digest_were_emailed' => 'Digests sono stati inviati.',
	'digest_server_date' => 'Data Server:',
	'digest_server_hour' => 'Orario Server:',
	'digest_server_time_zone' => 'Fuso Orario Server:',
	'digest_or' => 'o',
	'digest_a_digest_containing' => 'Un Digest contenente',
	'digest_posts_was_sent_to' => 'messaggi &egrave; stato inviato a',

	// This block goes on the digest settings user interface page (digests.php)
	'digest_page_title' => 'Digests',
	'digest_explanation' => 'I Digests sono delle email periodiche che sintetizzano i messaggi inviati su questo sito. I Digests possono essere inviati giornalmente o settimanalmente ad un orario specificato. Puoi selezionare tra le opzioni i forums di cui vuoi ricevere i Digests.<br /><br />' . "\r\n" . 'Secondo la nostra politica sulla Privacy i Digests non contengono "SPAM" ed il tuo indirizzo email non viene usato per fini commerciali o per l\'invio di annunci. In ogni momento puoi annullare l\'invio dei Digests semplicemente annullando la tua sottoscrizione in questa pagina. Molti utenti ritengono che i Digests sono molto utili... per cui ti invitiamo a provarli!!!' . "\r\n",
	'digest_wanted' => '<b>Tipo di Digest:</b><br />(I Digests settimanali vengono inviati di Domenica)',
	'digest_none' => 'Nessuno (Annulla Sottoscrizione)',
	'digest_daily' => 'Giornaliero',
	'digest_weekly' => 'Settimanale',
	'digest_format_short' => 'Formato del Digest:',
	'digest_format' => '<b>Formato Digest:</b><br />(E\' raccomandato l\'utilizzo del formato HTML per una migliore formattazione dei messaggi)',
	'digest_html' => 'HTML',
	'digest_text' => 'Testo',
	'digest_excerpt' => '<b>Mostra un estratto del messaggio:</b>',
	'digest_yes' => 'Si',
	'digest_no' => 'No',
	'digest_l_show_my_messages' => '<b>Mostra i miei messaggi nel Digest:</b>',
	'digest_l_show_new_only' => '<b>Mostra soltanto i nuovi messaggi:</b><br />(Questa opzione impedisce che vengano inclusi nel Digest tutti i messaggi inviati prima del tuo ultimo accesso al sito.)',
	'digest_send_if_no_msgs' => '<b>Invia il Digest se non ci sono nuovi messaggi:</b>',
	'digest_hour_to_send' => '<b>Ora in cui attivare l\'invio del Digest:</b><br />(L\'ora di invio &egrave; basata sul fuso orario impostato nel profilo.)',
	'digest_hour_to_send_short' => 'Ora invio Digest (basata sul fuso orario impostato nel profilo):',
	'digest_midnight' => '00',
	'digest_1am' => '01',
	'digest_2am' => '02',
	'digest_3am' => '03',
	'digest_4am' => '04',
	'digest_5am' => '05',
	'digest_6am' => '06',
	'digest_7am' => '07',
	'digest_8am' => '08',
	'digest_9am' => '09',
	'digest_10am' => '10',
	'digest_11am' => '11',
	'digest_12pm' => '12',
	'digest_1pm' => '13',
	'digest_2pm' => '14',
	'digest_3pm' => '15',
	'digest_4pm' => '16',
	'digest_5pm' => '17',
	'digest_6pm' => '18',
	'digest_7pm' => '19',
	'digest_8pm' => '20',
	'digest_9pm' => '21',
	'digest_10pm' => '22',
	'digest_11pm' => '23',
	'digest_click_return' => 'Clicca %sQUI%s per tornare alle impostazioni del Digest',
	'digest_select_forums' => '<b>Attiva il Digest per i seguenti forums:</b>',
	'digest_create' => 'Impostazioni Digest Create',
	'digest_modify' => 'Impostazioni Digest Aggiornate',
	'digest_unsubscribe' => 'Digest Disattivato',
	'digest_no_forums_selected' => 'Non &egrave; stato selezionato alcun forum, verr&agrave; disattivato il Digest',
	'digest_all_forums' => 'Tutti I Forums Sottoscritti',
	'digest_submit_text' => 'Applica Cambiamenti',
	'digest_reset_text' => 'Azzera',
	'digest_size' => '<b>Numero massimo di caratteri per messaggio:</b><br />(Attenzione: impostare questo valore troppo alto comporter&agrave; delle email molto lunghe. In ogni caso viene fornito un link per visualizzare l\'intero contenuto del messaggio.)',
	'digest_size_50' => '50',
	'digest_size_100' => '100',
	'digest_size_150' => '150',
	'digest_size_300' => '300',
	'digest_size_600' => '600',
	'digest_size_max' => 'Massimo (32000)',
	'digest_version_text' => 'Versione',
	)
);

?>