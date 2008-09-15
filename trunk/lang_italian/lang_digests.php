<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

// This block goes as default text in the emailed digest (mail_digests.php)
$lang['digest_introduction'] = 'Come richesto, ecco qui il Digest dei messaggi inviati su ' . $board_config['sitename'] . '. Vieni a visitare il sito per partecipare alle discussioni!';
$lang['digest_from_text_name'] = $board_config['sitename'] . ' Robot Digest';
$lang['digest_from_email_address'] = $board_config['board_email'];
$lang['digest_subject_line'] = $board_config['sitename'] . ' Digests';
$lang['digest_disclaimer_html'] = "\r\n" . 'Questo Digest viene inviato agli utenti registrati su <a href = "' . DIGEST_SITE_URL. '">' . $board_config['sitename'] . '</a> che ne hanno fatto richiesta. ' . $board_config['sitename'] . ' non &egrave; un sito con contenuto commerciale ed il tuo indirizzo email non viene fornito a terzi. Consulta le <a href = "' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">FAQ</a> per avere ulteriori informazioni sulle nostre politiche di rispetto della Privacy. Puoi modificare la tua iscrizione al Digest accedendo a ' . $board_config['sitename'] . ' ed entrando nella <a href = "' . DIGEST_SITE_URL . 'digests.' . PHP_EXT . '">Pagina Digest</a> (devi aver effettuato l\'accesso con i tuoi dati per poter modificare le impostazioni del Digest). Se hai domande o suggerimenti riguardo questo Digest puoi contattare il <a href = "mailto:' . $board_config['board_email'] . '">Webmaster di ' . $board_config['sitename'] . '</a>.';
$lang['digest_disclaimer_text'] = "\r\n" . 'Questo Digest viene inviato agli utenti registrati su ' . $board_config['sitename'] . ' che ne hanno fatto richiesta. ' . $board_config['sitename'] . ' non &egrave; un sito con contenuto commerciale ed il tuo indirizzo email non viene fornito a terzi. Consulta le FAQ per avere ulteriori informazioni sulle nostre politiche di rispetto della Privacy. Puoi modificare la tua iscrizione al Digest accedendo a ' . $board_config['sitename'] . ' ed entrando nella Pagina Digest (devi aver effettuato l\'accesso con i tuoi dati per poter modificare le impostazioni del Digest). Se hai domande o suggerimenti riguardo questo Digest puoi contattare il Webmaster di ' . $board_config['sitename'] . ' a questo indirizzo: ' . $board_config['board_email'] . '.';
$lang['digest_forum'] = 'Forum: ';
$lang['digest_topic'] = 'Argomenti: ';
$lang['digest_link'] = 'Link';
$lang['digest_post_time'] = 'Data';
$lang['digest_author'] = 'Autore';
$lang['digest_message_excerpt'] = 'Estratto Messaggio';
$lang['digest_posted_by'] = 'Inviato da ';
$lang['digest_posted_at'] = ' il ';
$lang['digest_forums_message_digest'] = 'Digest'; // used in <head> tag
$lang['digest_salutation'] = 'Ciao ';
$lang['digest_your_digest_options'] = 'Opzioni Digest:';
$lang['digest_format'] = 'Formato:';
$lang['digest_show_message_text'] = 'Mostra Testo Messaggio:';
$lang['digest_show_my_messages'] = 'Mostra I Miei Messaggi:';
$lang['digest_frequency'] = 'Frequenza Digest:';
$lang['digest_show_only_new_messages'] = 'Mostra solo i messaggi dal mio ultimo login:';
$lang['digest_send_if_no_new_messages'] = 'Invia il Digest se non ci sono nuovi messaggi:';
$lang['digest_period_24_hrs'] = '24 ore';
$lang['digest_period_1_week'] = '1 settimana';
$lang['digest_no_new_messages'] = 'Non ci sono nuovi messaggi nei forums che hai selezionato.';
$lang['digest_message_size'] = 'Numero massimo di caratteri per messaggio nel Digest:';
$lang['digest_summary'] = 'Sommario Digest';
$lang['digest_a_total_of'] = 'Un totale di ';
$lang['digest_were_emailed'] = 'Digests sono stati inviati.';
$lang['digest_server_date'] = 'Data Server:';
$lang['digest_server_hour'] = 'Orario Server:';
$lang['digest_server_time_zone'] = 'Fuso Orario Server:';
$lang['digest_or'] = 'o';
$lang['digest_a_digest_containing'] = 'Un Digest contenente';
$lang['digest_posts_was_sent_to'] = 'messaggi &egrave; stato inviato a';

// This block goes on the digest settings user interface page (digests.php)
$lang['digest_page_title'] = 'Digests';
$lang['digest_explanation'] = 'I Digests sono delle email periodiche che sintetizzano i messaggi inviati su questo sito. I Digests possono essere inviati giornalmente o settimanalmente ad un orario specificato. Puoi selezionare tra le opzioni i forums di cui vuoi ricevere i Digests.<br /><br />' . "\r\n" . 'Secondo la nostra politica sulla Privacy i Digests non contengono "SPAM" ed il tuo indirizzo email non viene usato per fini commerciali o per l\'invio di annunci. In ogni momento puoi annullare l\'invio dei Digests semplicemente annullando la tua sottoscrizione in questa pagina. Molti utenti ritengono che i Digests sono molto utili... per cui ti invitiamo a provarli!!!' . "\r\n";
$lang['digest_wanted'] = '<b>Tipo di Digest:</b><br />(I Digests settimanali vengono inviati di Domenica)';
$lang['digest_none'] = 'Nessuno (Annulla Sottoscrizione)';
$lang['digest_daily'] = 'Giornaliero';
$lang['digest_weekly'] = 'Settimanale';
$lang['digest_format_short'] = 'Formato del Digest:';
$lang['digest_format'] = '<b>Formato Digest:</b><br />(E\' raccomandato l\'utilizzo del formato HTML per una migliore formattazione dei messaggi)';
$lang['digest_html'] = 'HTML';
$lang['digest_text'] = 'Testo';
$lang['digest_excerpt'] = '<b>Mostra un estratto del messaggio:</b>';
$lang['digest_yes'] = 'Si';
$lang['digest_no'] = 'No';
$lang['digest_l_show_my_messages'] = '<b>Mostra i miei messaggi nel Digest:</b>';
$lang['digest_l_show_new_only'] = '<b>Mostra soltanto i nuovi messaggi:</b><br />(Questa opzione impedisce che vengano inclusi nel Digest tutti i messaggi inviati prima del tuo ultimo accesso al sito.)';
$lang['digest_send_if_no_msgs'] = '<b>Invia il Digest se non ci sono nuovi messaggi:</b>';
$lang['digest_hour_to_send'] = '<b>Ora in cui attivare l\'invio del Digest:</b><br />(L\'ora di invio &egrave; basata sul fuso orario impostato nel profilo.)';
$lang['digest_hour_to_send_short'] = 'Ora invio Digest (basata sul fuso orario impostato nel profilo):';
$lang['digest_midnight'] = '00';
$lang['digest_1am'] = '01';
$lang['digest_2am'] = '02';
$lang['digest_3am'] = '03';
$lang['digest_4am'] = '04';
$lang['digest_5am'] = '05';
$lang['digest_6am'] = '06';
$lang['digest_7am'] = '07';
$lang['digest_8am'] = '08';
$lang['digest_9am'] = '09';
$lang['digest_10am'] = '10';
$lang['digest_11am'] = '11';
$lang['digest_12pm'] = '12';
$lang['digest_1pm'] = '13';
$lang['digest_2pm'] = '14';
$lang['digest_3pm'] = '15';
$lang['digest_4pm'] = '16';
$lang['digest_5pm'] = '17';
$lang['digest_6pm'] = '18';
$lang['digest_7pm'] = '19';
$lang['digest_8pm'] = '20';
$lang['digest_9pm'] = '21';
$lang['digest_10pm'] = '22';
$lang['digest_11pm'] = '23';
$lang['digest_select_forums'] = '<b>Attiva il Digest per i seguenti forums:</b>';
$lang['digest_create'] = 'Impostazioni Digest Create';
$lang['digest_modify'] = 'Impostazioni Digest Aggiornate';
$lang['digest_unsubscribe'] = 'Digest Disattivato';
$lang['digest_no_forums_selected'] = 'Non &egrave; stato selezionato alcun forum, verr&agrave; disattivato il Digest';
$lang['digest_all_forums'] = 'Tutti I Forums Sottoscritti';
$lang['digest_submit_text'] = 'Applica Cambiamenti';
$lang['digest_reset_text'] = 'Azzera';
$lang['digest_size'] = '<b>Numero massimo di caratteri per messaggio:</b><br />(Attenzione: impostare questo valore troppo alto comporter&agrave; delle email molto lunghe. In ogni caso viene fornito un link per visualizzare l\'intero contenuto del messaggio.)';
$lang['digest_size_50'] = '50';
$lang['digest_size_100'] = '100';
$lang['digest_size_150'] = '150';
$lang['digest_size_300'] = '300';
$lang['digest_size_600'] = '600';
$lang['digest_size_max'] = 'Massimo (32000)';
$lang['digest_version_text'] = 'Versione';

?>