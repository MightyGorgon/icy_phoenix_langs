<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

$lang['setup_upi2db'] = 'Configurazione UPI2DB';
$lang['setup_upi2db_explain'] = 'In questa sezione &egrave; possibile configurare la funzione di <b>Memorizzazione Messaggi Non Letti Nel DB</b> (UPI2DB).';
$lang['upi2db_on'] = 'UPI2DB Attivo?';
$lang['upi2db_on_explain'] = 'Questa opzione consente di attivare o disattivare UPI2DB o lasciare agli utenti la facolt&agrave; di decidere.<br />Se disattivato, verr&agrave; utilizzato il sistema predefinito basato sui cookies.';
$lang['user_select'] = 'Impostazioni Utenti';
$lang['up2db_days'] = 'Messaggi automaticamenti contrassegnati come letti dopo &hellip;';
$lang['up2db_days_tagen'] = 'Giorni';
$lang['up2db_days_explain'] = 'Numero di giorni che verranno utilizzati per memorizzare i messaggi non letti nel DB.<br />Tutti i messaggi pi&ugrave; vecchi verranno contrassegnati come letti.<br />Attenzione! Pi&ugrave; giorni vengono impostati, e pi&ugrave; il DB crescer&agrave;! Default = 30 Giorni';

$lang['edit_as_new'] = 'Mostrare i messaggi modificati come nuovi messaggi?';
$lang['edit_as_new_explain'] = 'Contrassegnare i messaggi modificati come non letti subito dopo la modifica?';
$lang['last_edit_as_new'] = 'Contrassegnare l\'ultimo messaggio di un argomento come non letto dopo che &egrave; stato modificato?';
$lang['edit_topic_first'] = 'Mostrare i messaggi modificati in cima alla visualizzazione degli argomenti?';
$lang['edit_topic_first_explain'] = 'Se impostato su "No", tutti gli argomenti modificati e contrassegnati come non letti, verranno ordinati in base alla data di invio originale (Default). Se impostato su "Si" tutti gli argomenti modificati verranno contrassegnati come non letti ed ordinati in base alla data di modifica, per cui appariranno in cima alla lista nella visualizzazione argomenti.';

$lang['upi2db_condition_setup'] = 'UPI2DB Condizioni';
$lang['upi2db_condition_min_posts'] = 'Minimo numero di messaggi';
$lang['upi2db_condition_min_regdays'] = 'Minimum numero di giorni di registrazione';
$lang['upi2db_unread_color'] = 'Codice colore per il titolo dell\'argomento (messaggio non letto)';
$lang['upi2db_edit_color'] = 'Codice colore per il titolo dell\'argomento (messaggio modificato)';
$lang['upi2db_mark_color'] = 'Codice colore per il titolo dell\'argomento (mnessaggio contrassegnato come non letto)';
$lang['group_allow_upi2db'] = 'Abilita Gruppi Utenti ad usare UPI2DB?';
$lang['user_allow_upi2db'] = 'Abilita Utenti ad usare UPI2DB?';
$lang['user_disable_upi2db'] = 'Disabilita UPI2DB';
$lang['group_user'] = 'Utente';
$lang['user_without_group'] = 'Untente non appartenente ad alcun gruppo';

$lang['max_new_posts'] = 'Massimo numero di messaggi nuovi o modificati per la sincronizzazione';
$lang['max_new_posts_explain'] = 'Inserisci il numero massimo di messaggi che verranno copiati per la sincronizzazione. Inserire "0" per impostare il numero di messaggi ad infinito.';
$lang['max_permanent_topics'] = 'Massimo numero di argomenti non letti per utente';
$lang['max_permanent_topics_explain'] = 'Inserisci il numero massimo di argomenti che un utente pu&ograve; permanentemente contrassegnare come letti. Inserire "0" per impostare il numero di argomenti ad infinito.';
$lang['up2db_del_perm'] = 'Elimina definitivamente le informazioni di lettura forum/argomenti dopo...';
$lang['up2db_del_perm_explain'] = 'Inserisci il numero di giorni superato il quale le informazioni di lettura forum/argomenti verranno eliminati dal DB. Questa opzione riduce la dimensione del DB.';

$lang['up2db_del_mark'] = 'Elimina i messaggi selezionati dopo...';
$lang['up2db_del_mark_explain'] = 'Inserisci il numero di giorni superato il quale le informazioni di lettura dei messaggi verranno eliminate dal DB.';
$lang['max_mark_posts'] = 'Numero massimo di messaggi impostabili per utente';
$lang['max_mark_posts_explain'] = 'Numero di messaggi che ciascun utente pu&ograve; contrassegnare come non letti.';
?>