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

$lang['BBC_IP_CREDITS_STATIC'] = '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="http://www.icyphoenix.com/images/logo_ip.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #dd2222;"><b>Mighty Gorgon</b></span>&nbsp;<i>(Luca Libralato)</i><br />
<b><i>Project Manager And Main Developer</i></b><br />
<br />
<br />
<span style="color: #dd2222;"><b>The Steffen</b></span><br />
<b><i>Site Administrator</i></b><br />
<br />
<br />
<span style="color: #228822;"><b>Joshua203</b></span><br />
<b><i>Staff Leader</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>KasLimon</b></span><br />
<b><i>Junior Developer</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>Informpro</b></span><br />
<b><i>Junior Developer</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>jhl</b></span><br />
<b><i>Junior Developer</i></b><br />
<br />
<br />
<b><i>Valued Contributors</i></b><br />
<span style="color: #dd2222;"><b>Andrea75</b></span><br />
<span style="color: #228822;"><b>Artie</b></span><br />
<span style="color: #ff5500;"><b>Bicet</b></span>&nbsp;<i>(phpBB XS Developer)</i><br />
<span style="color: #880088;"><b>brandsrus</b></span><br />
<span style="color: #dd2222;"><b>buldo</b></span><br />
<span style="color: #880088;"><b>casimedicos</b></span><br />
<span style="color: #880088;"><b>Chaotic</b></span><br />
<span style="color: #ff5500;"><b>CyberAlien</b></span>&nbsp;<i>(Many Contributions)</i><br />
<span style="color: #880088;"><b>difus</b></span><br />
<span style="color: #228822;"><b>DWho</b></span><br />
<span style="color: #880088;"><b>fracs</b></span><br />
<span style="color: #880088;"><b>ganesh</b></span><br />
<span style="color: #880088;"><b>Hans</b></span><br />
<span style="color: #ff5500;"><b>hpl</b></span>&nbsp;<i>(Junior Developer)</i><br />
<span style="color: #880088;"><b>JANU1535</b></span><br />
<span style="color: #880088;"><b>jz</b></span><br />
<span style="color: #aaff00;"><b>KugeLSichA</b></span><br />
<span style="color: #0000bb;"><b>Limun</b></span><br />
<span style="color: #880088;"><b>Lopalong</b></span><br />
<span style="color: #880088;"><b>moreteavicar</b></span><br />
<span style="color: #880088;"><b>mort</b></span><br />
<span style="color: #880088;"><b>novice programmer</b></span><br />
<span style="color: #dd2222;"><b>ThE KuKa</b></span><br />
<span style="color: #880088;"><b>Tom</b></span><br />
<span style="color: #228822;"><b>TopoMotoV3X</b></span><br />
<span style="color: #aaff00;"><b>TuningBEB2008</b></span><br />
<span style="color: #880088;"><b>z3d0</b></span><br />
<span style="color: #880088;"><b>Zuker</b></span><br />
<br />
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

$lang = array_merge($lang, array(
// Common, these terms are used extensively on several pages
	'Forum' => 'Forum',
	'Category' => 'Categoria',
	'Topic' => 'Argomento',
	'Topics' => 'Discussioni',
	'Replies' => 'Risposte',
	'Views' => 'Visite',
	'Post' => 'Messaggio',
	'Posts' => 'Messaggi',
	'Posted' => 'Inviato',
	'Username' => 'Username',
	'Password' => 'Password',
	'Email' => 'Email',
	'Poster' => 'Scritto da',
	'Author' => 'Autore',
	'Time' => 'Data',
	'Hours' => 'Ore',
	'Message' => 'Messaggio',

	'1_DAY' => '1 Giorno',
	'7_DAYS' => '7 Giorni',
	'2_WEEKS' => '2 Settimane',
	'1_MONTH' => '1 Mese',
	'3_MONTHS' => '3 Mesi',
	'6_MONTHS' => '6 Mesi',
	'1_YEAR' => '1 Anno',

	'Go' => 'Vai',
	'Jump_to' => 'Vai a',
	'Submit' => 'Invia',
	'Reset' => 'Annulla',
	'Cancel' => 'Annulla',
	'Preview' => 'Anteprima',
	'Confirm' => 'Conferma',
	'Spellcheck' => 'Controllo Ortografico',
	'Yes' => 'Si',
	'No' => 'No',
	'Enabled' => 'Abilitato',
	'Disabled' => 'Disabilitato',
	'Error' => 'Errore',

	'GO' => 'Vai',
	'JUMP_TO' => 'Vai a',
	'SUBMIT' => 'Invia',
	'RESET' => 'Annulla',
	'CANCEL' => 'Annulla',
	'PREVIEW' => 'Anteprima',
	'CONFIRM' => 'Conferma',
	'ENABLED' => 'Abilitato',
	'DISABLED' => 'Disabilitato',
	'ERROR' => 'Errore',

	'Next' => 'Successivo',
	'Previous' => 'Precedente',
	'Goto_page' => 'Vai a',
	'Joined' => 'Registrato',
	'IP_Address' => 'Indirizzo IP',

	'Select_forum' => 'Seleziona Forum',
	'View_latest_post' => 'Leggi gli ultimi Messaggi',
	'View_newest_post' => 'Leggi i nuovi Messaggi',
	'Page_of' => 'Pagina <b>%d</b> di <b>%d</b>', // Replaces with: Page 1 of 2 for example

	'AIM' => 'Indirizzo AIM',
	'ICQ' => 'ICQ',
	'JABBER' => 'Jabber',
	'MSNM' => 'MSN Live',
	'SKYPE' => 'Skype',
	'YIM' => 'Yahoo Messenger',

	'Forum_Index' => 'Forum', // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Nuova Discussione',
	'Reply_to_topic' => 'Rispondi alla Discussione',
	'Reply_with_quote' => 'Rispondi Citando',

	'Click_return_topic' => '%sTorna alla Discussione%s', // %s's here are for uris, do not remove!
	'Click_return_login' => '%sRitenta Login%s',
	'Click_return_forum' => '%sTorna a Forum%s',
	'Click_view_message' => '%sGuarda il tuo Messaggio%s',
	'Click_return_modcp' => '%sPannello Di Controllo Moderatori%s',
	'Click_return_group' => '%sTorna A Informazioni Gruppo%s',

	'Admin_panel' => 'ACP',

	'Board_disabled' => 'Spiacenti ma il sito al momento non &egrave; disponibile, prova pi&ugrave; tardi.',

// Global Header strings
	'Registered_users' => 'Utenti Registrati:',
	'Browsing_forum' => 'Utenti presenti in questo Forum:',
	'Online_users_zero_total' => 'In totale ci sono <b>0</b> Utenti in linea: ',
	'Online_users_total' => 'In totale ci sono <b>%d</b> Utenti in linea: ',
	'Online_user_total' => 'In totale c\'&egrave; <b>%d</b> Utente in linea: ',
	'AC_Online_users_zero_total' => 'In totale ci sono <b>0</b> Utenti in chat: ',
	'AC_Online_users_total' => 'In totale ci sono <b>%d</b> Utenti in chat: ',
	'AC_Online_user_total' => 'In totale c\'&egrave; <b>1</b> Utente in chat: ',
	'Reg_users_zero_total' => '0 Registrati, ',
	'Reg_users_total' => '%d Registrati, ',
	'Reg_user_total' => '%d Registrato, ',
	'Hidden_users_zero_total' => '0 Nascosti e ',
	'Hidden_user_total' => '%d Nascosto e ',
	'Hidden_users_total' => '%d Nascosti e ',
	'Guest_users_zero_total' => '0 Ospiti',
	'Guest_users_total' => '%d Ospiti',
	'Guest_user_total' => '%d Ospite',
	'Record_online_users' => 'Record Utenti in linea <b>%s</b> in data %s', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sAmministratore%s',
	'Mod_online_color' => '%sModeratore%s',

	'You_last_visit' => 'La tua ultima visita &egrave; stata %s', // %s replaced by date/time
	'Current_time' => 'La data di oggi &egrave; %s', // %s replaced by time

	'Search_new' => 'Messaggi non letti',
	'Search_your_posts' => 'Propri messaggi',
	'Search_unanswered' => 'Messaggi senza risposta',

	'Register' => 'Iscriviti',
	'Profile' => 'Profilo',
	'Edit_profile' => 'Modifica il tuo profilo',
	'Search' => 'Cerca',
	'Memberlist' => 'Lista Utenti',
	'FAQ' => 'FAQ',
	'KB_title' => 'Knowledge Base',
	'Statistics' => 'Statistiche',
	'BBCode_guide' => 'Guida BBCode',
	'Usergroups' => 'Gruppi',
	'Last_Post' => 'Ultimo Messaggio',
	'Moderator' => 'Moderatore',
	'Moderators' => 'Moderatori',

// Stats block text
	'Posted_articles_zero_total' => 'Non ci sono Messaggi nel forum', // Number of posts
	'Posted_articles_total' => 'Ci sono <b>%d</b> Messaggi nel Forum', // Number of posts
	'Posted_article_total' => 'C\'&egrave; <b>%d</b> Messaggio nel Forum', // Number of posts
	'Registered_users_zero_total' => 'Abbiamo <b>0</b> Utenti Registrati', // # registered users
	'Registered_users_total' => 'Abbiamo <b>%d</b> Utenti Registrati', // # registered users
	'Registered_user_total' => 'Abbiamo <b>%d</b> Utente Registrato', // # registered users
	'Newest_user' => 'L\'ultimo utente registrato &egrave; <b>%s%s%s</b>', // a href, username, /a

	'No_new_posts_last_visit' => 'Non ci sono nuovi messaggi dall\'ultima tua visita',

	'No_new_posts_global_announcement' => 'No Nuovi [ Ann. Globale ]',
	'New_posts_global_announcement' => 'Nuovi [ Ann. Globale ]',
	'No_new_posts_announcement' => 'No Nuovi [ Annuncio ]',
	'New_posts_announcement' => 'Nuovi [ Annuncio ]',
	'No_new_posts_sticky' => 'No Nuovi [ Importante ]',
	'New_posts_sticky' => 'Nuovi [ Importante ]',
	'No_new_posts_locked' => 'No Nuovi [ Chiuso ]',
	'New_posts_locked' => 'Nuovi [ Chiuso ]',
	'No_new_posts' => 'No Nuovi Messaggi',
	'New_posts' => 'Nuovi Messaggi',
	'New_post' => 'Nuovo Messaggio',
	'No_new_posts_hot' => 'No Nuovi [ Popolare ]',
	'New_posts_hot' => 'Nuovi [ Popolare ]',

	'Forum_no_new_posts' => 'No Nuovi Messaggi [Forum]',
	'Forum_new_posts' => 'Nuovi Messaggi [Forum]',
	'Cat_no_new_posts' => 'No Nuovi Messaggi [Categoria]',
	'Cat_new_posts' => 'Nuovi Messaggi [Categoria]',
	'Forum_is_locked' => 'Forum Chiuso',

// Login
	'Enter_password' => 'Inserisci username e password per entrare.',
	'Login' => 'Login',
	'Logout' => 'Logout',

	'Forgotten_password' => 'Ho dimenticato la password',

	'AUTOLOGIN' => 'Login automatico ad ogni visita',

	'Error_login' => 'I dati inseriti non sono corretti.',

// Index page
	'No_Posts' => 'Nessun Messaggio',
	'No_forums' => 'Questo Forum &egrave; vuoto',

	'Private_Message' => 'Messaggio Privato',
	'Private_Messages' => 'Messaggi Privati',
	'Who_is_Online' => 'In Linea',

	'Mark_all_forums' => 'Segna come gi&agrave; letti',
	'Forums_marked_read' => 'Tutti i Forum sono stati segnati come gi&agrave; letti',


// Viewforum
	'View_forum' => 'Guarda Forum',

	'Reached_on_error' => 'Sei arrivato in questa pagina per errore.',

	'Display_topics' => 'Mostra prima gli Argomenti di',
	'ALL_TOPICS' => 'Seleziona',

	'Topic_News_nb' => 'News',
	'Topic_global_announcement_nb' => 'Annuncio Globale',
	'Topic_Announcement_nb' => 'Annuncio',
	'Topic_Sticky_nb' => 'Importante',
	'Topic_Moved_nb' => 'Spostato',
	'Topic_Poll_nb' => 'Sondaggio',
	'Topic_Event_nb' => 'Evento',
	'Topic_Announcement' => '<b>Annuncio:</b>',
	'Topic_Sticky' => '<b>Importante:</b>',
	'Topic_Moved' => '<b>Spostato:</b>',
	'Topic_Poll' => '<b>[ Sondaggio ]</b>',
	'Topic_Event' => '<b>Evento:</b>',
	'Topic_global_announcement' => '<b>Annuncio Globale:</b>',
	'Post_global_announcement' => 'Annuncio Globale',

	'Mark_all_topics' => 'Segna come gi&agrave; letti',
	'Topics_marked_read' => 'Gli Argomenti di questo Forum sono stati segnati come gi&agrave; letti',

	'Rules_post_can' => '<b>Puoi</b> inserire nuovi Argomenti',
	'Rules_post_cannot' => '<b>Non puoi</b> inserire nuovi Argomenti',
	'Rules_reply_can' => '<b>Puoi</b> rispondere ai Messaggi',
	'Rules_reply_can_own' => '<b>Puoi</b> rispondere ai tuoi Argomenti',
	'Rules_reply_cannot' => '<b>Non puoi</b> rispondere ai Messaggi',
	'Rules_edit_can' => '<b>Puoi</b> modificare i tuoi Messaggi',
	'Rules_edit_cannot' => '<b>Non puoi</b> modificare i tuoi Messaggi',
	'Rules_delete_can' => '<b>Puoi</b> cancellare i tuoi Messaggi',
	'Rules_delete_cannot' => '<b>Non puoi</b> cancellare i tuoi Messaggi',
	'Rules_vote_can' => '<b>Puoi</b> votare nei Sondaggi',
	'Rules_vote_cannot' => '<b>Non puoi</b> votare nei Sondaggi',
	'Rules_moderate' => '<b>Puoi</b> %sModerare questo Forum%s', // %s replaced by a href links, do not remove!

	'No_topics_post_one' => 'Non ci sono Argomenti in questo Forum oppure non ci sono Argomenti che iniziano con la lettera selezionata.<br />Clicca <b>Inserisci Nuovo Argomento</b> per crearne uno o seleziona un\'altra lettera.',


// Viewtopic
	'View_topic' => 'Leggi Argomento',

	'Guest' => 'Ospite',
	'Post_subject' => 'Oggetto',
	'View_next_topic' => 'Successivo',
	'View_previous_topic' => 'Precedente',
	'Submit_vote' => 'Vota',
	'View_results' => 'Guarda i risultati',

	'No_newer_topics' => 'Non ci sono nuovi argomenti in questo forum',
	'No_older_topics' => 'Non ci sono vecchi argomenti in questo forum',
	'No_posts_topic' => 'Non ci sono messaggi in questo argomento',

	'Display_posts' => 'Mostra prima i messaggi di',
	'ALL_POSTS' => 'Tutti i messaggi',
	'Newest_First' => 'Nuovi',
	'Oldest_First' => 'Vecchi',

	'Back_to_top' => 'Torna in cima',
	'Back_to_bottom' => 'Vai a fondo pagina',

	'Read_profile' => 'Profilo',
	'Send_email' => 'Invia Email',
	'Visit_website' => 'HomePage',
	'ICQ_status' => 'Stato ICQ',
	'Edit_delete_post' => 'Modifica',
	'View_IP' => 'Mostra indirizzo IP',
	'Delete_post' => 'Cancella Messaggio',

	'wrote' => 'ha scritto', // proceeds the username and is followed by the quoted text
	'Quote' => 'Citazione', // comes before bbcode quote output.
	'Code' => 'Codice', // comes before bbcode code output.

	'Edited_time_total' => 'Ultima modifica di %s il %s, modificato %d volta in totale', // Last edited by me on 12 Oct 2001; edited 1 time in total
	'Edited_times_total' => 'Ultima modifica di %s il %s, modificato %d volte in totale', // Last edited by me on 12 Oct 2001; edited 2 times in total

	'Lock_topic' => 'Chiudi Argomento',
	'Unlock_topic' => 'Apri Argomento',
	'Move_topic' => 'Sposta Argomento',
	'Delete_topic' => 'Cancella Argomento',
	'Split_topic' => 'Dividi Argomento',

	'Stop_watching_topic' => 'Smetti di controllare questo Argomento',
	'Start_watching_topic' => 'Controlla questo Argomento',
	'No_longer_watching' => 'Non stai pi&ugrave; controllando questo Argomento',
	'You_are_watching' => 'Adesso stai controllando questo Argomento',

	'Total_votes' => 'Voti Totali',

// Posting/Replying (Not private messaging!)
	'Message_body' => 'Struttura Messaggio',
	'Topic_review' => 'Revisione Argomento',

	'No_post_mode' => 'Modo di risposta non specificato', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

	'Post_a_new_topic' => 'Nuovo Argomento',
	'Post_a_reply' => 'Rispondi',
	'Post_topic_as' => 'Tipo Argomento',
	'Edit_Post' => 'Modifica Messaggio',
	'Options' => 'Opzioni',

	'Post_Announcement' => 'Annuncio',
	'Post_Sticky' => 'Importante',
	'Post_Normal' => 'Normale',

	'Confirm_delete' => 'Sei sicuro di voler cancellare questo Messaggio?',
	'Confirm_delete_poll' => 'Sei sicuro di voler cancellare questo Sondaggio?',

	'Flood_Error' => 'Non puoi inviare un nuovo Messaggio cos&igrave; presto dopo l\'ultimo inserito, attendi un istante e riprova.',
	'Empty_subject' => 'Devi specificare un oggetto quando inserisci un nuovo Argomento.',
	'Empty_message' => 'Devi scrivere un Messaggio per inserirlo.',
	'Forum_locked' => 'Questo Forum &egrave; chiuso: Non puoi inserire, rispondere o modificare gli Argomenti.',
	'Topic_locked' => 'Quest\'Argomento &egrave; chiuso: Non puoi inserire, rispondere o modificare i Messaggi.',
	'No_post_id' => 'Non &egrave; stato specificato nessun ID',
	'No_topic_id' => 'Devi selezionare un Argomento a cui rispondere',
	'No_valid_mode' => 'Puoi solo inviare, rispondere, modificare o citare Messaggi. Torna indietro e prova di nuovo.',
	'No_such_post' => 'Questo Messaggio non esiste. Torna indietro e prova di nuovo.',
	'Edit_own_posts' => 'Puoi modificare solo i tuoi Messaggi.',
	'Delete_own_posts' => 'Puoi cancellare solo i tuoi Messaggi.',
	'Cannot_delete_replied' => 'Non puoi cancellare i Messaggi che hanno una risposta.',
	'Cannot_delete_poll' => 'Non puoi cancellare un Sondaggio attivo.',
	'Empty_poll_title' => 'Devi inserire un titolo per il tuo Sondaggio.',
	'To_few_poll_options' => 'Devi inserire almeno due opzioni per il Sondaggio.',
	'To_many_poll_options' => 'Ci sono troppe opzioni per il Sondaggio.',
	'Post_has_no_poll' => 'Questo Messaggio non ha Sondaggi.',
	'Already_voted' => 'Hai gi&agrave; votato questo Sondaggio.',
	'No_vote_option' => 'Devi specificare un\'opzione quando voti.',

	'Add_poll' => 'Aggiungi Sondaggio',
	'Add_poll_explain' => 'Se non vuoi aggiungere un sondaggio al tuo Argomento lascia vuoti i campi.',
	'Poll_question' => 'Domanda del Sondaggio',
	'Poll_option' => 'Opzione del Sondaggio',
	'Add_option' => 'Aggiungi un\'opzione',
	'Update' => 'Aggiorna',
	'Delete' => 'Cancella',
	'Poll_for' => 'Attiva il sondaggio per',
	'Days' => 'Giorni', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Scrivi 0 o lascia vuoto per un Sondaggio senza fine ]',
	'Delete_poll' => 'Cancella Sondaggio',

	'POST_ENABLE_BBCODE' => 'Attiva BBCode in questo messaggio',
	'POST_ENABLE_SMILEYS' => 'Attiva gli Smileys in questo messaggio',
	'POST_ENABLE_HTML' => 'Attiva l\'HTML in questo messaggio',
	'POST_ENABLE_ACRO_AUTO' => 'Attiva Acronimi e Autolinks in questo messaggio',
	'Disable_HTML_post' => 'Disabilita l\'HTML in questo Messaggio',
	'Disable_ACRO_AUTO_post' => 'Disabilita Acronimi ed Autolinks in questo Messaggio',
	'Disable_BBCode_post' => 'Disabilita i BBCode in questo Messaggio',
	'Disable_Smilies_post' => 'Disabilita gli Smileys in questo Messaggio',

	'HTML_is_ON' => 'HTML <u>ABILITATO</u>',
	'HTML_is_OFF' => 'HTML <u>DISABILITATO</u>',
	'BBCode_is_ON' => '%sBBCode%s <u>ABILITATO</u>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => '%sBBCode%s <u>DISABILITATO</u>',
	'Smilies_are_ON' => 'Smileys <u>ATTIVATI</u>',
	'Smilies_are_OFF' => 'Smileys <u>DISATTIVATI</u>',

	'Attach_signature' => 'Aggiungi firma (puoi cambiare la firma nel profilo)',
	'Notify' => 'Avvisami quando viene inviata una risposta',
	'Delete_post' => 'Cancella Messaggio',

	'Stored' => 'Il tuo Messaggio &egrave; stato inserito.',
	'Deleted' => 'Il tuo Messaggio &egrave; stato cancellato.',
	'Poll_delete' => 'Il tuo Sondaggio &egrave; stato cancellato.',
	'Vote_cast' => 'Il tuo voto &egrave; stato aggiunto.',

	'Topic_reply_notification' => 'Notifica risposta all\'Argomento',

	'bbcode_b_help' => 'Grassetto: [b]testo[/b]  (alt+b)',
	'bbcode_i_help' => 'Corsivo: [i]testo[/i]  (alt+i)',
	'bbcode_u_help' => 'Sottolineato: [u]testo[/u]  (alt+u)',
	'bbcode_q_help' => 'Citazione: [quote]testo[/quote]  (alt+q)',
	'bbcode_c_help' => 'Codice: [code]codice[/code]  (alt+c)',
	'bbcode_l_help' => 'Lista: [list]testo[/list] (alt+l)',
	'bbcode_o_help' => 'Lista ordinata: [list=]testo[/list]  (alt+o)',
	'bbcode_p_help' => 'Inserisci immagine: [img]http://image_url[/img]  (alt+p)',
	'bbcode_w_help' => 'Inserisci URL: [url]http://url[/url] o [url=http://url]testo URL[/url]  (alt+w)',
	'bbcode_a_help' => 'Chiudi tutti i bbCode tags aperti',
	'bbcode_s_help' => 'Colore font: [color=red]testo[/color]  Suggerimento: puoi anche usare color=#FF0000',
	'bbcode_f_help' => 'Dimensione font: [size=x-small]testo piccolo[/size]',

	'Emoticons' => 'Smileys',
	'More_emoticons' => 'Altri Smileys',

	'Font_color' => 'Colore Carattere',
	'color_default' => 'Default',
	'color_dark_red' => 'Rosso Scuro',
	'color_red' => 'Rosso',
	'color_orange' => 'Arancione',
	'color_brown' => 'Marrone',
	'color_yellow' => 'Giallo',
	'color_green' => 'Verde',
	'color_olive' => 'Oliva',
	'color_cyan' => 'Azzurro',
	'color_blue' => 'Blu',
	'color_dark_blue' => 'Blu Scuro',
	'color_indigo' => 'Violetto',
	'color_violet' => 'Viola',
	'color_white' => 'Bianco',
	'color_black' => 'Nero',

	'Font_size' => 'Dimensione Font',
	'font_tiny' => 'Minuscolo',
	'font_small' => 'Piccolo',
	'font_normal' => 'Normale',
	'font_large' => 'Grande',
	'font_huge' => 'Enorme',

	'Close_Tags' => 'Chiudi i Tags',
	'Styles_tip' => 'Suggerimento: gli stili possono essere applicati velocemente al testo selezionato',

// Private Messaging
	'Private_Messaging' => 'Messaggi Privati',

	'Login_check_pm' => 'Messaggi Privati',
	'New_pms' => '%d nuovi MP', // You have 2 new messages
	'New_pm' => '%d nuovo MP', // You have 1 new message
	'No_new_pm' => 'Non ci sono nuovi MP',
	'Unread_pms' => '%d MP non letti',
	'Unread_pm' => '%d MP non letto',
	'No_unread_pm' => 'Hai letto tutti i MP',
	'You_new_pm' => 'Hai un nuovo MP in Posta in Arrivo',
	'You_new_pms' => 'Ci sono nuovi MP in Posta in Arrivo',
	'You_no_new_pm' => 'Non ci sono nuovi MP',

	'Unread_message' => 'Messaggio da leggere',
	'Read_message' => 'Messaggio letto',

	'Read_pm' => 'Leggi Messaggio',
	'Post_new_pm' => 'Nuovo Messaggio',
	'Post_reply_pm' => 'Rispondi',
	'Post_quote_pm' => 'Cita Messaggio',
	'Edit_pm' => 'Modifica Messaggio',

	'Inbox' => 'Posta In Arrivo',
	'Outbox' => 'Posta In Uscita',
	'Savebox' => 'Posta Salvata',
	'Sentbox' => 'Posta Inviata',
	'Flag' => 'Stato',
	'Subject' => 'Oggetto',
	'From' => 'Da',
	'To' => 'A',
	'Date' => 'Data',
	'Mark' => 'Seleziona',
	'Sent' => 'Inviato',
	'Saved' => 'Salvato',
	'Delete_marked' => 'Cancella Selezionati',
	'Delete_all' => 'Cancella Tutti',
	'Save_marked' => 'Salva Selezionati',
	'Download_marked' => 'Download Selezionati',
	'Mailbox' => 'Mailbox',
	'Save_message' => 'Salva Messaggio',
	'Delete_message' => 'Cancella Messaggio',

// BEGIN PM Navigation MOD
	'Next_privmsg' => 'Messaggio Privato Successivo',
	'Previous_privmsg' => 'Messaggio Privato Precedente',
	'No_newer_pm' => 'Non ci sono messaggi privati pi&ugrave; nuovi',
	'No_older_pm' => 'Non ci sono messaggi privati pi&ugrave; vecchi',
// END PM Navigation MOD

	'Display_messages' => 'Mostra i Messaggi di', // Followed by number of days/weeks/months
	'All_Messages' => 'Tutti i Messaggi',

	'No_messages_folder' => 'Non ci sono Messaggi in questa cartella',

	'PM_disabled' => 'I Messaggi privati sono stati disabilitati dal Forum.',
	'Cannot_send_privmsg' => 'L\'Amministratore del forum ti ha revocato i permessi di inviare Messaggi Privati.',
	'No_to_user' => 'Devi specificare uno username per inviare il Messaggio.',

	'Disable_HTML_pm' => 'Disabilita HTML in questo Messaggio',
	'Disable_ACRO_AUTO_pm' => 'Disabilita Acronimi ed Autolinks in questo Messaggio',
	'Disable_BBCode_pm' => 'Disabilita BBCode in questo Messaggio',
	'Disable_Smilies_pm' => 'Disabilita Smileys in questo Messaggio',

	'Message_sent' => 'Il tuo Messaggio &egrave; stato spedito.',

	'Click_return_login' => 'Clicca %sQUI%s per riprovare',
	'Click_return_index' => 'Clicca %sQUI%s per tornare all\'indice',
	'Click_return_forum' => 'Clicca %sQUI%s per tornare al forum',
	'Click_return_topic' => 'Clicca %sQUI%s per tornare all\'argomento', // %s's here are for uris, do not remove!
	'Click_return_viewtopic' => 'Clicca %sQUI%s per tornare all\'argomento',
	'Click_return_modcp' => 'Clicca %sQUI%s per tornare al Pannello Di Moderazione (MCP)',
	'Click_return_profile' => 'Clicca %sQUI%s per tornare al Profilo',
	'Click_return_preferences' => 'Clicca %sQUI%s per tornare alle Preferenze',
	'Click_return_group' => 'Clicca %sQUI%s per tornare alle informazioni del gruppo',
	'Click_return_drafts' => 'Clicca %sQUI%s per tornare alle Bozze',
	'Click_return_inbox' => 'Clicca %sQUI%s per tornare alla cartella Posta in Arrivo',
	'Click_view_message' => 'Clicca %sQUI%s per visualizzare il messaggio',
	'Click_view_privmsg' => 'Clicca %sQUI%s per andare alla casella Posta in Arrivo',

	'Send_a_new_message' => 'Invia nuovo Messaggio Privato',
	'Send_a_reply' => 'Rispondi a Messaggio Privato',
	'Edit_message' => 'Modifica Messaggio Privato',

	'Notification_subject' => 'Hai un nuovo Messaggio Privato!',

	'FIND_USERNAME' => 'Trova uno username',
	'Find' => 'Trova',
	'No_match' => 'Nessun Risultato.',

	'No_post_id' => 'Non &egrave; stato specificato nessun ID',
	'No_such_folder' => 'Questa cartella non esiste',
	'No_folder' => 'Nessuna cartella specificata',

	'Mark_all' => 'Seleziona tutti',
	'Unmark_all' => 'Deseleziona tutti',

	'Confirm_delete_pm' => 'Sei sicuro di voler cancellare questo Messaggio?',
	'Confirm_delete_pms' => 'Sei sicuro di voler cancellare questi Messaggi?',

	'Inbox_size' => 'Posta in Arrivo [%d%%]', // eg. Your Inbox is 50% full
	'Sentbox_size' => 'Posta in Uscita [%d%%]',
	'Savebox_size' => 'Posta Salvata [%d%%]',

// Profiles/Registration
	'Viewing_user_profile' => 'Guarda il profilo :: %s', // %s is username
	'About_user' => 'Tutto su %s', // %s is username
//Start quick Administrator User Options and Information MOD
	'quick_admin_options' => 'Opzioni Amministrazione Rapida',
	'Admin_edit_profile' => 'Modifica il profilo dell\'utente',
	'Admin_edit_permissions' => 'Modifica i permessi dell\'utente',
	'User_active' => 'L\'utente <b>&egrave;</b> attivo',
	'User_not_active' => 'L\'utente <b>non &egrave;</b> attivo',
	'Username_banned' => 'L\'utente <b>&egrave;</b> stato espulso',
	'Username_not_banned' => 'L\'utente <b>non &egrave;</b> stato espulso',
	'USER_BAN' => 'Espelli',
	'USER_UNBAN' => 'Ri-ammetti',
	'User_email_banned' => 'L\'email dell\'utente [ %s ] <b>&egrave;</b> bannata',
	'User_email_not_banned' => 'L\'email dell\'utente <b>non &egrave;</b> bannata',
//End quick Administrator User Options and Information MOD
	'Preferences' => 'Preferenze',
	'Items_required' => 'Le voci contrassegnate con * sono richieste.',
	'Registration_info' => 'Dettagli Registrazione',
	'Profile_info' => 'Dettagli Profilo',
	'Profile_info_warn' => 'Queste informazioni saranno visibili da tutti gli Utenti',
	'Avatar_panel' => 'Avatar',
	'Avatar_gallery' => 'Galleria Avatar',
	'NO_AVATAR_GALLERY' => 'Nessuna Galleria Avatar Disponibile',

	'Website' => 'Sito web',
	'Location' => 'Residenza',
	'Contact' => 'Contatto',
	'Email_address' => 'Indirizzo Email',
	'Email' => 'Email',
	'Send_private_message' => 'Invia Messaggio Privato',
	'Hidden_email' => '[ Nascosto ]',
	'Search_user_posts' => 'Cerca tutti i Messaggi di %s',
	'Interests' => 'Interessi',
	'Occupation' => 'Impiego',
	'Poster_rank' => 'Livello Utente',

	'Total_posts' => 'Messaggi totali',
	'User_post_pct_stats' => '%.2f%% del totale', // 1.25% of total
	'User_post_day_stats' => '%.2f messaggi al giorno', // 1.5 posts per day
	'Search_user_posts' => 'Cerca tutti i Messaggi scritti da %s', // Find all posts by username
	'Search_user_topics_started' => 'Cerca tutti gli argomenti iniziati da %s', // Find all topics started by username

	'Wrong_Profile' => 'Non puoi modificare questo Profilo.',
//====================================================================== |
//==== Start Invision View Profile ===================================== |
//==== v1.1.3 ========================================================== |
//====
	'Invision_Active_Stats' => 'Statistiche',
	'Invision_Communicate' => 'Comunicazioni',
	'Invision_Info' => 'Informazioni',
	'Invision_Member_Group' => 'Membro dei Gruppi',
	'Invision_Member_Title' => 'Titolo Utente',
	'Invision_Most_Active' => 'Maggiormente attivo in',
	'Invision_Most_Active_Posts' => '%s messaggi in questo forum',
	'Invision_Details' => 'Dettagli Utente',
	'Invision_PPD_Stats' => 'Messaggi al giorno',
	'Invision_Signature' => 'Firma',
	'Invision_Website' => 'Sito Web',
	'Invision_Total_Posts' => 'Totale messaggi',
	'Invision_User_post_pct_stats' => '(%.2f%% dei messaggi totali del forum)',
	'Invision_User_post_day_stats' => '%.2f messaggi al giorno',
	'Invision_Search_user_posts' => 'Trova tutti i messaggi dell\'utente',
	'Invision_Posting_details' => 'Dettagli Utente',
//====
//==== Author: Disturbed One [http://anthonycoy.com] =================== |
//==== End Invision View Profile ======================================= |
//====================================================================== |

	'Only_one_avatar' => 'Pu&ograve; essere specificato un solo tipo di Avatar',
	'File_no_data' => 'Il file all\'URL che hai fornito non contiene dati',
	'No_connection_URL' => 'Non &egrave; possibile connettersi all\'URL che hai fornito',
	'Incomplete_URL' => 'L\'URL che hai fornito &egrave; incompleto',
	'Wrong_remote_avatar_format' => 'L\'URL dell\'Avatar remoto non &egrave; valido',
	'No_send_account_inactive' => 'Spiacenti, ma la tua password non pu&ograve; essere recuperata perch&eacute; il tuo account al momento &egrave; inattivo. Contatta l\'Amministratore per ulteriori informazioni.',

	'Always_smile' => 'Abilita sempre gli Smileys',
	'Always_html' => 'Abilita sempre i codici HTML',
	'Always_bbcode' => 'Abilita sempre il BBCode',
	'Always_add_sig' => 'Aggiungi sempre la mia firma',
	'Always_notify' => 'Avvisami sempre delle risposte',
	'Always_notify_explain' => 'Vieni avvisato con un\'Email quando un Utente risponde ad un Argomento a cui hai risposto. Questo pu&ograve; essere cambiato ogni volta che inserisci un nuovo Messaggio.',

	'Board_style' => 'Stile',
	'Board_lang' => 'Lingua',
	'No_themes' => 'Non ci sono Stili presenti nel Database',
	'Timezone' => 'Fuso orario',
	'Date_format' => 'Formato data',
	'Date_format_explain' => 'La sintassi utilizzata &egrave; la funzione <a href=\'http://www.php.net/manual/it/html/function.date.html\' target=\'_other\'>data()</a> del PHP.',
	'Signature' => 'Firma',
	'Signature_explain' => 'Testo che verr&agrave; visualizzato come firma a tutti i tuoi Messaggi. C\'&egrave; un limite di %d caratteri',
	'Public_view_email' => 'Mostra sempre il mio indirizzo Email',

	'Current_password' => 'Password attuale',
	'New_password' => 'Nuova password',
	'Confirm_password' => 'Conferma password',
	'Confirm_password_explain' => 'Devi confermare la tua password attuale se vuoi cambiarla o modificare il tuo indirizzo email',
	'password_if_changed' => 'Devi inserire la password solo se vuoi cambiarla',
	'password_confirm_if_changed' => 'Devi confermare la tua password solo se ne hai inserita una nuova qui sopra',

	'Avatar' => 'Avatar',
// MOD: Remote Avatar Resize  - by tomlevens (tom@tomlevens.co.uk)
// (1 line replaced - original lines follow)
	'Avatar_explain' => 'Mostra una piccola immagine grafica sotto i tuoi dettagli nel Messaggio. Pu&ograve; essere mostrata una sola immagine alla volta, la sua larghezza massima &egrave; di %d pixels, l\'altezza di %d pixels e il file deve essere pi&ugrave; piccolo di %d KB. Gli avatar con Link Esterno saranno ridimensionati automaticamente.',
// END MOD
	'Upload_Avatar_file' => 'Carica Avatar da PC',
	'Upload_Avatar_URL' => 'Carica Avatar da un URL',
	'Upload_Avatar_URL_explain' => 'Inserisci URL dell\'Avatar, che verr&agrave; copiato in questo Sito.',
	'Pick_local_Avatar' => 'Seleziona Avatar dalla Galleria',
	'Link_remote_Avatar' => 'Link esterno Avatar',
	'Link_remote_Avatar_explain' => 'Inserisci URL dell\'Avatar che vuoi linkare.',
	'Avatar_URL' => 'URL Avatar',
	'Select_from_gallery' => 'Seleziona Avatar dalla Galleria',
	'View_avatar_gallery' => 'Mostra Galleria',

	'Select_avatar' => 'Seleziona Avatar',
	'Return_profile' => 'Elimina Avatar',
	'Select_category' => 'Seleziona categoria',

	'Delete_Image' => 'Cancella Immagine',
	'Current_Image' => 'Immagine attuale',

	'Notify_on_privmsg' => 'Notifica sui nuovi Messaggi Privati',
	'Popup_on_privmsg' => 'Popup nuovo Messaggio Privato',
	'Popup_on_privmsg_explain' => 'Apre una piccola nuova finestra per informarti quando arriva un nuovo Messaggio Privato.',
	'Hide_user' => 'Nascondi il tuo stato online',

	'Profile_updated' => 'Il tuo profilo &egrave; stato aggiornato',
	'Profile_updated_inactive' => 'Il tuo profilo &egrave; stato aggiornato. Hai modificato dettagli importanti anche se il tuo account non &egrave; ancora attivo. Controlla la tua email per riattivare il tuo account, o, se richiesta, attendi la riattivazione da parte dell\'Amministratore.',

	'Password_mismatch' => 'La password inserita non corrisponde.',
	'Current_password_mismatch' => 'La password inserita non corrisponde a quella presente nel Database.',
	'Password_long' => 'La password non deve essere pi&ugrave; lunga di 32 caratteri.',
	'Username_taken' => 'Username in uso da un\'altro utente.',
	'Username_invalid' => 'Errore, l\'Username contiene un carattere non valido come \'.',
	'Username_disallowed' => 'Username disabilitato dall\'Amministratore.',
	'Email_taken' => 'L\'indirizzo Email &egrave; gi&agrave; presente nel nostro Database.',
	'Email_banned' => 'L\'indirizzo Email stato escluso dall\'Amministratore.',
	'Email_invalid' => 'Indirizzo Email non valido.',
	'Signature_too_long' => 'La firma &egrave; troppo lunga.',
	'Fields_empty' => 'Devi riempire tutti i campi richiesti.',
	'Avatar_filetype' => 'Il file Avatar deve essere .jpg, .gif o .png',
	'Avatar_filesize' => 'La grandezza del file dell\'Avatar deve essere inferiore a %d kB', // The avatar image file size must be less than 6 KB
	'Avatar_imagesize' => 'L\'Avatar non pu&ograve; superare le dimensioni di %d pixels di larghezza e di %d pixels di altezza',
	'Welcome' => 'Benvenuto', // Welcome
	'Welcome_subject' => 'Benvenuto nel Forum di %s ', // Welcome to my.com forums
	'New_account_subject' => 'Account Nuovo Utente',
	'Account_activated_subject' => 'Account Attivato',

	'Account_added' => 'Grazie per esserti registrato, il tuo account &egrave; stato creato. Adesso puoi entrare con il tuo username e password',
	'Account_inactive' => 'Il tuo account &egrave; stato creato. Questo forum richiede l\'attivazione dell\'account. La chiave per l\'attivazione &egrave; stata inviata all\'indirizzo email che hai inserito. Controlla la tua Email per ulteriori informazioni',
	'Account_inactive_admin' => 'Il tuo account &egrave; stato creato. Questo forum richiede l\'attivazione dell\'account da parte dell\'Amministratore. Ti verr&agrave; inviata un\'Email dall\'Amministratore e sarai informato sullo stato di attivazione del tuo account',
	'Account_active' => 'Il tuo account &egrave; stato attivato. Grazie per esserti registrato.',
	'Account_active_admin' => 'Il tuo account &egrave; stato attivato',
	'Reactivate' => 'Riattiva il tuo account!',
	'Already_activated' => 'Questo account &egrave; gi&agrave; stato attivato',
	'COPPA' => 'Il tuo account &egrave; stato creato, ma deve essere approvato. Controlla la tua Email per ulteriori dettagli.',

	'Registration' => 'Condizioni Per La Registrazione',
	'Reg_agreement' => 'Anche se gli Amministratori e i Moderatori di questo forum cercheranno di rimuovere o modificare tutto il materiale contestabile il pi&ugrave; velocemente possibile, &egrave; comunque impossibile verificare ogni Messaggio. Tuttavia sei consapevole che tutti i Messaggi di questo forum esprimono il punto di vista e le opinioni dell\'autore e non quelle degli Amministratori, dei Moderatori o del Webmaster (eccetto i messaggi degli stessi) e per questo non sono perseguibili.<br /><br />L\'utente concorda di non inviare Messaggi abusivi, osceni, volgari, diffamatori, di odio, minatori, sessuali o qualunque altro materiale che possa violare qualunque legge applicabile. Inserendo Messaggi di questo tipo l\'utente verr&agrave; immediatamente e permanentemente escluso (e il tuo provider verr&agrave; informato). L\'indirizzo IP di tutti i Messaggi viene registrato per aiutare a rinforzare queste condizioni. L\'Utente concorda che l\'Amministratore i Moderatori e Webmaster di questo forum hanno il diritto di rimuovere, modificare, o chiudere Argomenti qualora si ritenga necessario. Come Utente concordi che ogni informazione che &egrave; stata inserita verr&agrave; conservata in un database. Poich&eacute; queste informazioni non verranno cedute a terzi senza il tuo consenso, Webmaster, Amministratore e i Moderatori non sono ritenuti responsabili per gli attacchi da parte degli hackers che possano compromettere i dati.<br /><br />Questo Forum usa i cookies per conservare informazioni sul tuo computer locale. Questi cookies non contengono le informazioni che hai inserirai, servono soltanto per velocizzarne il processo. L\'indirizzo Email viene utilizzato solo per confermare i dettagli della tua registrazione e per la password (e per inviare una nuova password nel caso dovessi perdere quella attuale).<br /><br />Cliccando su &quot;<i>Accetto queste condizioni</i>&quot; accetterai i termini di queste condizioni. I tuoi dati personali verranno trattati e conservati nel rispetto delle leggi vigenti nella nazione del titolare di questo sito.<br /><br />',

	'Agreement' => 'Accettazione',
	'Agree_under_13' => 'Accetto queste condizioni e ho <b>meno</b> di 13 anni',
	'Agree_over_13' => 'Accetto queste condizioni',
	'Agree_not' => 'Non accetto queste condizioni',
	'Agree_checkbox' => 'Accetto esplicitamente queste condizioni',
	'Agree_checkbox_Error' => 'Devi accettare le condizioni cliccando sulla casella a fondo pagina se vuoi registrarti!',

	'Wrong_activation' => 'La chiave di attivazione che hai fornito non corrisponde a nessuna presente nel database.',
	'Send_password' => 'Inviami una nuova password',
	'Password_updated' => 'Una nuova password &egrave; stata creata, controlla la tua email per maggiori dettagli su come attivarla.',
	'No_email_match' => 'L\'indirizzo Email inserita non corrisponde a quella attuale per questo Username.',
	'New_password_activation' => 'Attivazione nuova password',
	'Password_activated' => 'Il tuo account &egrave; stato riattivato. Per entrare usa la password ricevuta via Email.',

	'Send_email_msg' => 'Invia un Messaggio Email',
	'No_user_specified' => 'Non &egrave; stato specificato nessun Utente',
	'User_prevent_email' => 'L\'Utente non gradisce ricevere Email. Prova ad inviare un Messaggio Privato.',
	'User_not_exist' => 'Questo Utente non esiste',
	'CC_email' => 'Invia una copia di questa Email a te stesso',
	'Email_message_desc' => 'Questo messaggio verr&agrave; inviato come testo, non includere nessun codice HTML o BBCode. L\'indirizzo per la risposta di questo Messaggio &egrave; il tuo indirizzo Email.',
	'Flood_email_limit' => 'Non puoi inviare un\'altra Email al momento. Prova pi&ugrave; tardi.',
	'Recipient' => 'Destinatario',
	'Email_sent' => 'Questa Email &egrave; stata inviata.',
	'Send_Email' => 'Invia Email',
	'Empty_sender_email' => 'Devi specificare un indirizzo email mittente.',
	'Empty_subject_email' => 'Devi specificare un oggetto per l\'Email.',
	'Empty_message_email' => 'Devi inserire un Messaggio da inviare.',

// Visual confirmation system strings
	'CONFIRM_CODE_WRONG' => 'Il codice di conferma inserito non &egrave; corretto',
	'TOO_MANY_ATTEMPTS' => 'Hai fatto troppi tentativi senza inserire il codice corretto. Riprova pi&ugrave; tardi.',
	'CONFIRM_CODE_IMPAIRED' => 'Se non riesci a visualizzare il codice di registrazione contatta l\'%sAmministratore%s.',
	'CONFIRM_CODE' => 'Codice di conferma',
	'CONFIRM_CODE_EXPLAIN' => 'Inserisci il codice di conferma  visuale come indicato nell\'immagine. Il sistema riconosce la differenza tra maiuscole e minuscole, non ci sono ZERI (per difficolt&agrave; nel distinguerli dalla lettera O).',

// Memberslist
	'Select_sort_method' => 'Seleziona un ordine',
	'Sort' => 'Ordina',
	'SORT_TOP_TEN' => 'I Migliori 10 Autori',
	'SORT_JOINED' => 'Data di Registrazione',
	'SORT_USERNAME' => 'Username',
	'SORT_LOCATION' => 'Localit&agrave;',
	'SORT_POSTS' => 'Messaggi totali',
	'SORT_EMAIL' => 'Email',
	'SORT_WEBSITE' => 'Sito Web',
	'Sort_Ascending' => 'Crescente',
	'Sort_Descending' => 'Decrescente',
	'Order' => 'Ordina',


// Group control panel
	'Group_Control_Panel' => 'Pannello Di Controllo Gruppo',
	'Group_member_details' => 'Gruppi di cui sei membro',
	'Group_member_join' => 'Gruppi a cui puoi iscriverti',

	'Group_Information' => 'Informazioni Gruppo',
	'Group_name' => 'Nome Gruppo',
	'Group_description' => 'Descrizione Gruppo',
	'Group_membership' => 'Appartenenza al Gruppo',
	'Group_Members' => 'Utenti del Gruppo',
	'Group_Moderator' => 'Moderatore Gruppo',
	'Pending_members' => 'Nuovi iscritti in attesa',

	'Group_type' => 'Tipo di Gruppo',
	'Group_open' => 'Gruppo Aperto',
	'Group_closed' => 'Gruppo Chiuso',
	'Group_hidden' => 'Gruppo Nascosto',

	'Current_memberships' => 'Gruppi di cui sei membro',
	'Non_member_groups' => 'Gruppi di cui non sei membro',
	'Memberships_pending' => 'Gruppi in attesa di iscrizione',

	'No_groups_exist' => 'Non esistono Gruppi',
	'Group_not_exist' => 'Gruppo non esistente',

	'Join_group' => 'Iscriviti al Gruppo',
	'No_group_members' => 'Questo Gruppo non ha Utenti iscritti',
	'Group_hidden_members' => 'Gruppo nascosto, non puoi vedere i suoi membri',
	'No_pending_group_members' => 'Questo Gruppo non ha Utenti in attesa',
	'Group_joined' => 'Ti sei iscritto a questo Gruppo con successo.<br />Sarai avvisato quando la tua iscrizione verr&agrave; approvata dal moderatore del Gruppo.',
	'Group_request' => 'C\'&egrave; una richiesta di iscrizione al tuo Gruppo.',
	'Group_approved' => 'La tua richiesta &egrave; stata approvata.',
	'Group_added' => 'Sei stato aggiunto a questo Gruppo.',
	'Already_member_group' => 'Sei gi&agrave; iscritto a questo Gruppo',
	'User_is_member_group' => 'L\'Utente &egrave; gi&agrave; iscritto a questo Gruppo',
	'Group_type_updated' => 'Tipo di Gruppo aggiornato.',

	'Could_not_add_user' => 'L\'Utente selezionato non esiste.',
	'Could_not_anon_user' => 'L\'Utente Anonimo non pu&ograve; essere iscritto ad un Gruppo.',

	'Confirm_unsub' => 'Sei sicuro di volerti cancellare da questo Gruppo?',
	'Confirm_unsub_pending' => 'La tua iscrizione a questo Gruppo non &egrave; ancora stata approvata, sei sicuro di volerti cancellare?',

	'Unsub_success' => 'Sei stato cancellato da questo Gruppo.',

	'Approve_selected' => 'Approva Selezionati',
	'Deny_selected' => 'Rifiuta Selezionati',
	'Not_logged_in' => 'Per iscriverti ad un Gruppo devi essere Registrato.',
	'Remove_selected' => 'Rimuovi Selezionati',
	'Add_member' => 'Aggiungi Utente',
	'Not_group_moderator' => 'Non sei Moderatore di questo Gruppo, non puoi eseguire questa azione.',

	'Login_to_join' => 'Entra per iscriverti o gestire un Gruppo di Utenti',
	'This_open_group' => 'Gruppo aperto, clicca per richiedere l\'adesione',
	'This_closed_group' => 'Gruppo chiuso: %s',
	'This_hidden_group' => 'Gruppo nascosto: %s',
	'Member_this_group' => 'Sei iscritto a questo Gruppo',
	'Pending_this_group' => 'La tua iscrizione a questo Gruppo &egrave; in attesa di approvazione',
	'Are_group_moderator' => 'Sei Moderatore di questo Gruppo',
	'None' => 'Nessuno',

	'Subscribe' => 'Iscriviti',
	'Unsubscribe' => 'Cancella',
	'View_Information' => 'Guarda Informazioni',


// Search
	'Search_query' => 'Motore di Ricerca',
	'Search_options' => 'Opzioni di Ricerca',

	'Search_keywords' => 'Cerca per parole chiave',
	'Search_keywords_explain' => 'Puoi usare <u>AND</u> per definire le parole che devono essere nel risultato della ricerca, <u>OR</u> per definire le parole che potrebbero essere nel risultato e <u>NOT</u> per definire le parole che non devono essere nel risultato. Usa * come abbrevazione per parole parziali',
	'Search_author' => 'Cerca per Autore',
	'Search_author_explain' => 'Usa * come abbreviazione per parole parziali',
	'Search_author_topic_starter' => 'Cerca solo gli argomenti iniziati da questo autore',

	'Search_for_any' => 'Cerca per parola o usa frase esatta',
	'Search_for_all' => 'Cerca tutte le parole',
	'Search_title_msg' => 'Cerca nel titolo o nel testo',
	'Search_title_only' => 'Cerca solo nel titolo',
	'Search_msg_only' => 'Cerca solo nel testo',

	'Return_first' => 'Mostra i primi', // followed by xxx characters in a select box
	'characters_posts' => 'caratteri del messaggio',

	'Search_previous' => 'Cerca i Messaggi da', // followed by days, weeks, months, year, all in a select box

	'Sort_by' => 'Ordina per',
	'Sort_Time' => 'Data Messaggio',
	'Sort_Post_Subject' => 'Oggetto Messaggio',
	'Sort_Topic_Title' => 'Titolo Argomento',
	'Sort_Author' => 'Autore',
	'Sort_Forum' => 'Forum',

	'Display_results' => 'Mostra i risultati come',
	'All_available' => 'Tutto disponibile',
	'No_searchable_forums' => 'Non hai i permessi per utilizzare il motore di ricerca del Forum.',

	'No_search_match' => 'Nessun messaggio con questo criterio di ricerca',
	'Found_search_match' => 'La ricerca ha trovato %d risultato', // eg. Search found 1 match
	'Found_search_matches' => 'La ricerca ha trovato %d risultati', // eg. Search found 24 matches

	'Close_window' => 'Chiudi Finestra',


// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'Solo %s possono inviare Annunci.',
	'Sorry_auth_sticky' => 'Solo %s possono inviare Messaggi importanti.',
	'Sorry_auth_read' => 'Solo %s possono leggere gli Argomenti.',
	'Sorry_auth_post' => 'Solo %s possono inserire Argomenti.',
	'Sorry_auth_reply' => 'Solo %s possono rispondere ai Messaggi.',
	'Sorry_auth_edit' => 'Solo %s possono modificare i Messaggi.',
	'Sorry_auth_delete' => 'Solo %s possono cancellare i Messaggi.',
	'Sorry_auth_vote' => 'Solo %s possono votare nei Sondaggi.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>gli Utenti Anonimi</b>',
	'Auth_Registered_Users' => '<b>gli Utenti Registrati</b>',
	'Auth_Self_Users' => '<b>gli Utenti che hanno scritto Argomenti</b>',
	'Auth_Users_granted_access' => '<b>gli Utenti con accesso speciale</b>',
	'Auth_Moderators' => '<b>i Moderatori</b>',
	'Auth_Administrators' => '<b>gli Amministratori</b>',

	'Not_Moderator' => 'Non sei Moderatore di questo Forum.',
	'Not_Authorized' => 'Non Autorizzato',

	'You_been_banned' => 'Sei stato escluso da questo sito.<br />Contatta l\'Amministratore o il Webmaster per ulteriori informazioni.',

// Viewonline
	'Reg_users_zero_online' => 'Ci sono 0 Utenti Registrati e ', // There are 5 Registered and
	'Reg_users_online' => 'Ci sono %d Utenti Registrati e ', // There are 5 Registered and
	'Reg_user_online' => 'C\'&egrave; %d Utente Registrato e ', // There is 1 Registered and
	'Hidden_users_zero_online' => '0 Utenti Nascosti in linea', // 6 Hidden users online
	'Hidden_users_online' => '%d Utenti Nascosti in linea', // 6 Hidden users online
	'Hidden_user_online' => '%d Utente Nascosto in linea', // 6 Hidden users online
	'Guest_users_online' => 'Ci sono %d Ospiti in linea', // There are 10 Guest users online
	'Guest_users_zero_online' => 'Ci sono 0 Ospiti in linea', // There are 10 Guest users online
	'Guest_user_online' => 'C\'&egrave; %d Ospite in linea', // There is 1 Guest user online
	'No_users_browsing' => 'Al momento non ci sono Utenti nel Forum',

	'ONLINE_EXPLAIN' => 'Questi dati si basano sugli Utenti in linea negli ultimi ' . intval(ONLINE_REFRESH / 60) . ' minuti',
	'ONLINE_TODAY' => 'Questi dati si basano sugli Utenti in linea nella giornata',

	'Forum_Location' => 'Localit&agrave; del Forum',
	'Last_updated' => 'Ultimo Aggiornamento',

	'Forum_index' => 'Indice Forum',
	'Portal' => 'Home Page',
	'Logging_on' => 'Sta entrando',
	'Posting_message' => 'Sta inviando un Messaggio',
	'Searching_forums' => 'Sta cercando nei Forum',
	'Viewing_profile' => 'Sta guardando il Profilo',
	'Viewing_HACKSLIST' => 'Sta Guardando la Lista delle Modifiche',
	'Viewing_online' => 'Sta guardando chi c\'&egrave; in linea',
	'Viewing_member_list' => 'Sta guardando la Lista Utenti',
	'Viewing_priv_msgs' => 'Sta guardando i Messaggi Privati',
	'Viewing_FAQ' => 'Sta guardando le FAQ',
	'Viewing_KB' => 'Sta guardando la KB',
	'Viewing_RSS' => 'RSS feed', // RSS Feed Mod


// Moderator Control Panel
	'Mod_CP' => 'Pannello Di Controllo Moderatori',
	'Mod_CP_explain' => 'Utilizzando il modulo qui sotto puoi eseguire operazioni di massa su questo Forum. Puoi bloccare, sbloccare, spostare o cancellare.',

	'Select' => 'Seleziona',
	'Delete' => 'Cancella',
	'Move' => 'Sposta',
	'Copy' => 'Copia',
	'Lock' => 'Blocca',
	'Unlock' => 'Sblocca',

	'Topics_Removed' => 'Gli Argomenti selezionati sono stati rimossi dal Database.',
	'Topics_Locked' => 'Gli Argomenti selezionati sono stati chiusi.',
	'Topics_Moved' => 'Gli Argomenti selezionati sono stati spostati.',
	'Topics_Unlocked' => 'Gli Argomenti selezionati sono stati ri-aperti.',
	'No_Topics_Moved' => 'Non &egrave; stato spostato nessun Argomenti.',

	'Confirm_delete_topic' => 'Sei sicuro di voler eliminare gli Argomenti selezionati?',
	'Confirm_lock_topic' => 'Sei sicuro di voler chiudere gli Argomenti selezionati?',
	'Confirm_unlock_topic' => 'Sei sicuro di voler ri-aprire gli Argomenti selezionati?',
	'Confirm_move_topic' => 'Sei sicuro di voler spostare gli Argomenti selezionati?',

	'Move_to_forum' => 'Vai al Forum',
	'Leave_shadow_topic' => 'Lascia una traccia nel Forum di creazione.',

	'Split_Topic' => 'Divisione Argomenti',
	'Split_Topic_explain' => 'Utilizzando il modulo qui sotto puoi dividere un Argomenti in due, sia selezionando i Messaggi individualmente, sia dividendo l\'Argomento da una parte di selezionato Messaggio in poi',
	'Split_title' => 'Titolo nuovo Argomento',
	'Split_forum' => 'Forum per il nuovo Argomento',
	'Split_posts' => 'Dividi i Messaggi selezionati',
	'Split_after' => 'Dividi partendo dal Messaggio selezionato',
	'Topic_split' => 'L\'Argomento selezionato &egrave; stato diviso',

	'Too_many_error' => 'Hai selezionato troppi Messaggi. Puoi selezionare solo il Messaggio da cui dividere l\'Argomento!',

	'None_selected' => 'Nessun Argomento selezionato nel quale eseguire questa operazione. Torna indietro e selezionane almeno uno.',
	'New_forum' => 'Nuovo Forum',

	'This_posts_IP' => 'Indirizzo IP per questo Messaggio',
	'Other_IP_this_user' => 'Altri indirizzi IP utilizzati da questo Utente',
	'Users_this_IP' => 'Utenti che utilizzano questo indirizzo IP',
	'IP_info' => 'Informazioni indirizzo IP',
	'Lookup_IP' => 'Cerca indirizzo IP',

//
// Errors (not related to a
// specific failure on a page)
//
	'Information' => 'Informazione',
	'Critical_Information' => 'Informazione Critica',

	'General_Error' => 'Errore Generale',
	'Critical_Error' => 'Errore Critico',
	'An_error_occured' => 'Si &egrave; verificato un errore',
	'A_critical_error' => 'Si &egrave; verificato un errore critico',
	'Admin_reauthenticate' => 'Per Amministrare il sito ti devi riautenticare.',


	'Topic_description' => 'Descrizione Argomento',

//Member List
	'Recent_Logins' => 'Ultimo accesso',
	'Users_Display' => 'Utenti per pagina',

// BIRTHDAY - BEGIN
	'Birthday' => 'Compleanno',
	'No_birthday_specify' => 'Non si chiede l\'et&agrave;',
	'Age' => 'Et&agrave;',
	'Wrong_birthday_format' => 'Formato del compleanno inserito in modo non corretto.',
	'Birthday_to_high' => 'Spiacente, questo sito, non accetta user oltre %d anni di et&agrave;',
	'Birthday_require' => 'La tua data di nascita &egrave; richiesta in questo sito',
	'Birthday_to_low' => 'Spiacente, questo sito, non accetta user con meno di %d anni di et&agrave;',
	'Submit_date_format' => 'd-m-Y', //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different separators are accepted)
	'Birthday_greeting_today' => 'I nostri migliori auguri per i tuoi %s anni.', //%s is substituted with the users age
	'Birthday_greeting_prev' => 'I nostri migliori auguri per aver compiuto %s anni il %s.', //%s is substituted with the users age, and birthday
	'Greeting_Messaging' => 'Buon Compleanno!!!',
	'Birthday_today' => 'Oggi &egrave; il compleanno di:',
	'Birthday_week' => 'Nei prossimi %d giorni &egrave; il compleanno di:',
	'Nobirthday_week' => 'Nessun utente compir&agrave; gli anni nei prossimi %d giorni', // %d is substitude with the number of days
	'Nobirthday_today' => 'Nessuno oggi compie gli anni',
	'Year' => 'Anno',
	'Month' => 'Mese',
	'Day' => 'Giorno',
// BIRTHDAY - END

// Start add - Who viewed a topic MOD
	'Topic_view_users' => 'Utenti che hanno visualizzato questo argomento',
	'Topic_time' => 'Ultima Visita',
	'Topic_count' => 'Visite',
	'Topic_view_count' => 'Contatore Visualizzazioni Argomento',
// End add - Who viewed a topic MOD

	'Global_Announcements' => 'Annunci Globali',
	'Announcements' => 'Annunci',
	'Sticky_Topics' => 'Argomenti Importanti',
	'Announcements_and_Sticky' => 'Annunci ed Argomenti Importanti',
// Message too short
	'Message_too_short' => 'Messaggio troppo breve.',

	'Today_at' => '<b class="date-today">Oggi</b> alle ',
	'Yesterday_at' => '<b class="date-yesterday">Ieri</b> alle ',
	'TODAY' => '<b class="date-today">Oggi</b>',
	'YESTERDAY' => '<b class="date-yesterday">Ieri</b>',

// Start add - Yellow card admin MOD
	'Give_G_card' => 'Riattiva user',
	'Give_Y_card' => 'Cartellino giallo #%d',
	'Give_R_card' => 'Espelli questo utente',
	'Ban_update_sucessful' => 'La lista utenti espulsi &egrave; stata aggiornata',
	'Ban_update_green' => 'Utente riattivato',
	'Ban_update_yellow' => 'Questo utente ha ricevuto una ammonizione ed ha un totale di %d ammonizioni su un massimo di %d consentite',
	'Ban_update_red' => 'Utente espulso',
	'Ban_reactivate' => 'Il vostro account &egrave; stato riattivato',
	'Ban_warning' => 'Siete stati ammoniti',
	'Ban_blocked' => 'Siete stati espulsi',
	'Rules_ban_can' => '<b>Puoi</b> ammonire gli utenti',
	'user_no_email' => 'Questo utente non ha un indirizzo email, pertanto nessun messaggio pu&ograve; essergli inviato. Devi mandare un messaggio privato',
	'user_already_banned' => 'Questo utente risulta gi&agrave; bannato',
	'Ban_no_admin' => 'Questo utente &egrave; un ADMIN e quindi non pu&ograve; essere espulso',
	'Rules_greencard_can' => '<b>Puoi</b> riattivare gli utenti ',
	'Rules_bluecard_can' => '<b>Puoi</b> segnalare i messaggi al moderatore',
	'Give_b_card' => 'Segnala questo messaggio al moderatore',
	'Clear_b_card' => 'Questo messaggio ha %d blue card. Applicando questa selezione questo conteggio verr&agrave; azzerato',
	'No_moderators' => 'Questo forum non &egrave; moderato. Nessun rapporto pu&ograve; essere inviato!',
	'Post_reported' => 'Questo messaggio &egrave; stato segnalato al moderatore %d',
	'Post_reported_1' => 'Questo messaggio &egrave; stato segnalato al moderatore',
	'Post_report' => 'Segnalazione', //Subject in email notification
	'Post_reset' => 'Il numero di blue cards di questo messaggio &egrave; stato azzerato',
	'Search_only_bluecards' => 'Cerca solo i messaggi con blue cards',
	'Send_message' => 'Clicca %sQUI%s per scrivere un messaggio al moderatore o<br />',
	'Send_PM_user' => 'Clicca %sQUI%s contattare in privato utente o',
	'Link_to_post' => 'Clicca %sQUI%s per andare al messaggio segnalato
--------------------------------

',
	'Post_a_report' => 'Segnala',
	'Report_stored' => 'La vostra segnalazione &egrave; stata inserita',
	'Send_report' => 'Clicca %sQUI%s per tornare al messaggio originale',
	'Red_card_warning' => 'State per dare un cartellino rosso a %s, provocandone una espulsione . Siete sicuri?',
	'Yellow_card_warning' => 'State per dare un cartellino giallo a %s, questo equivale ad ammonirlo. Siete sicuri?',
	'Green_card_warning' => 'State per riammettere %s. Siete sicuri?',
	'Blue_card_warning' => 'State per dare una blue card al messaggio. Il sistema invia in questi casi un messaggio di avviso al moderatore. Siete sicuri di voler segnalare questo messaggio?',
	'Clear_blue_card_warning' => 'State per azzerare il numero delle blue card relative a questo messaggio. Volete continuare?',
	'Warnings' => 'Cartellini gialli: %d', // Shown beside users post, if any warnings given to the user
	'Banned' => 'Espulso', // Shown beside users post, if user is banned

// Retroactive Signature MOD
	'Retro_sig' => 'Aggiungi la Firma ai vecchi messaggi',
	'Retro_sig_explain' => 'Se aggiungi/modifichi la tua Firma, il Forum di norma la applica solo ai nuovi messaggi',
	'Retro_sig_checkbox' => 'Metti un segno di spunta qui per aggiungere la Firma anche ai vecchi messaggi',
// End Retro Sig MOD
//signature editor
	'sig_edit_link' => 'Firma',
	'sig_description' => 'Modifica Firma (<i>Anteprima inclusa</i>)',
	'sig_edit' => 'Modifica Firma',
	'sig_current' => 'Firma Attuale',
	'sig_none' => 'Firma non disponibile',
	'sig_save' => 'Salva',
	'sig_save_message' => 'Firma salvata con successo!',

	'Guestbook' => 'Guestbook',
	'Viewing_guestbook' => 'Read the guestbook',

// Start add - Last visit MOD
	'Last_logon' => 'Ultima visita',
	'Hidde_last_logon' => 'Nascosto',
	'Never_last_logon' => 'Mai',
	'Users_today_zero_total' => 'In totale <b>0</b> utenti hanno visitato questo forum oggi: ',
	'Users_today_total' => 'In totale <b>%d</b> utenti hanno visitato questo forum oggi: ',
	'User_today_total' => 'In totale <b>%d</b> utente ha visitato questo forum oggi: ',
	'Users_lasthour_explain' => ', %d nell\'ultima ora.',
	'Users_lasthour_none_explain' => '', // Shown if no one has visited in the last hour

	'Years' => 'Anni',
	'Year' => 'Anno',
	'Weeks' => 'Settimane',
	'Week' => 'Settimana',
	'Day' => 'Giorno',
	'Total_online_time' => 'Durata totale online',
	'Last_online_time' => 'Ultima durata online',
	'Number_of_visit' => 'Numero di visite',
	'Number_of_pages' => 'Totale pagine viste',
// End add - Last visit MOD

	'total_site_hits_key' => 'Sono state viste %V% Pagine dal %D%.',

// Start add - Online/Offline/Hidden Mod
	'Online' => 'Online',
	'Offline' => 'Offline',
	'Hidden' => 'Nascosto',

	'Online_status' => 'Stato',
// End add - Online/Offline/Hidden Mod

// News
	'xs_latest_news' => 'Ultime News',
	'xs_no_news' => 'Non ci sono news.',
	'xs_news_version' => 'Versione XS News: %s',
	'xs_news_ticker_feed' => 'Fonte XML Feed: %s',

	'Home' => 'Home',

// Begin Thanks Mod
	'thankful' => 'Persone Riconoscenti',
	'thanks_to' => 'Ringraziano per l\'utile discussione di',
	'thanks_end' => ':',
	'thanks_alt' => 'Ringrazia per la discussione',
	'thanks_add_rate' => 'Ringrazia l\'autore per la discussione',
	'thanked_before' => 'Hai gi&agrave; rignraziato per questa discussione',
	'thanks_add' => 'I tuoi ringraziamenti sono stati aggiunti',
	'thanks_not_logged' => 'Devi effettuare il login per poter ringraziare qualcuno',
	'thanks2' => 'Grazie mille!<br />',
// End Thanks Mod

	'Warn_new_post' => 'C\'&egrave; almeno una nuova risposta a questa Discussione. Per Cortesia dai un occhiata alle nuove risposte e reinvia il tuo post.',

// Start add - Gender MOD
	'Gender' => 'Sesso', //used in users profile to display witch gender he/she is
	'Male' => 'Uomo',
	'Female' => 'Donna',
	'No_gender_specify' => 'Non Specificato',
	'Gender_require' => 'Su questo sito E\' necessario specificare il proprio sesso.',
// End add - Gender MOD

	'Download_Code' => 'download',

// db_update generator
	'Db_update_generator' => 'Generatore Update DB',
	'Instructions' => 'Istruzioni',
	'SQL_instructions' => 'Questo software permette di creare files PHP che servono per l\'update del tuo database direttamente dal browser. Ci sono un po\' di cose che devi tenere in considerazione prima di inserire le query SQL nel box sottostante.<br />Anzitutto, assicurati che ogni query SQL termini con un punto e virgola (;). Altrimenti il file creato potrebbe contenere errori. In secondo luogo assicurati che le tabelle abbiano il prefisso "phpbb_". Questo prefisso verr&agrave; rimpiazzato da un piccolo pezzo di codice che ti render&agrave; in grado di usare il file db_update.php su tutti i forum, senza preoccuparti di quale prefisso abbiano le tabelle.',
	'Enter_SQL' => 'Inserisci SQL',
	'Enter_SQL_explain' => 'MySQL &egrave; il database open source pi&ugrave; famoso del mondo, riconosciuto per la sua velocit&agrave; e per la sua affidabilit&agrave;.',
	'Output_SQL' => 'Output SQL',
	'Output_SQL_explain' => 'Copia e in colla il testo dall\'area di testo in un file vuoto. Salva il file come <u>db_update.php</u> fanne l\'upload sul tuo server. Fallo girare una volta accedendoci con il browser.<br /><br />Alternativamente clicca sul bottone per il download per scaricare il file direttamente sul tuo computer (metodo raccomandato).',
	'Download' => 'Download',

	'TOP_POSTERS' => 'Utenti Migliori',

// Tell A Friend
	'TELL_FRIEND' => 'Segnala via email',
	'TELL_FRIEND_SENDER_USER' => 'Il tuo nome',
	'TELL_FRIEND_SENDER_EMAIL' => 'Il tuo indirizzo email',
	'TELL_FRIEND_RECEIVER_USER' => 'Il nome del tuo amico',
	'TELL_FRIEND_RECEIVER_EMAIL' => 'L\'indirizzo email del tuo amico',
	'TELL_FRIEND_WRONG_EMAIL' => 'L\'indirizzo email indicato non &egrave; valido.',
	'TELL_FRIEND_MSG' => 'Il tuo messaggio:',
	'TELL_FRIEND_TITLE' => 'Segnala ad un amico',
	'TELL_FRIEND_BODY' => "Ciao,\nho letto questa discussione sull'argomento &raquo;{TOPIC}&laquo; su {SITENAME} ed ho pensato che potrebbe interessarti.\n\nQuesto &egrave; il link: {LINK}\n\nVai e leggi e, se vuoi rispondere, ricordati che probabilmente dovrai registrarti.",

//Begin Lo-Fi Mod
	'Lofi' => 'Visualizzazione Lo-Fi',
	//'Full_Version' => 'Visualizzazione Integrale',
	'Full_Version' => 'Questa visualizzazione "Lo-Fi" &egrave; semplificata. Per avere la versione completa di formattazioni ed immagini clicca su questo link.',
	'quote_lofi' => 'Cita',
	'edit_lofi' => 'Modifica',
	'ip_lofi' => 'IP',
	'del_lofi' => 'Elimina',
	'profile_lofi' => 'Profilo',
	'pm_lofi' => 'PM',
	'email_lofi' => 'E-mail',
	'website_lofi' => 'SitoWeb',
	'icq_lofi' => 'ICQ',
	'aim_lofi' => 'AIM',
	'yim_lofi' => 'YIM',
	'msnm_lofi' => 'MSN',
	'quick_lofi' => 'Risposta Rapida',
	'new_pm_lofi' => 'Spedisci un PM',
//End Lo-Fi Mod

	'legend' => 'Legenda',
	'users' => 'Utenti',
//added to autogroup mod
	'No_more' => 'Non si accettano altri utenti',
	'No_add_allowed' => 'l\'aggiunta automatica di utenti non &egrave; consentita',
	'Join_auto' => 'Puoi iscriverti a questo gruppo, visto che il tuo numero di post &egrave; compatibile con quello del criterio del gruppo',


	'Downloads' => 'Downloads',
// merge topics
	'Merge' => 'Unisci',
	'Merge_topic' => 'Unisci alla Discussione',
	'Topics_Merged' => 'Le Discussioni selezionate sono state unite.',
	'No_Topics_Merged' => 'Non &egrave; stata unita alcuna discussione.',
	'Confirm_merge_topic' => 'Sei sicuro di voler unire le discussioni selezionate?',

// Start add - Bin Mod
	'Move_bin' => 'Sposta questa discussione nel cestino',
	'Topics_Moved_bin' => 'Le discussioni selezionate sono state spostate nel cestino.',
	'Bin_disabled' => 'Il Cestino &egrave; stato disabilitato',
	'Bin_recycle' => 'Cestina',
// End add - Bin Mod

	'Topics_Title_Edited' => 'I titoli delle discussioni selezionate sono stati modificati.',
	'Edit_title' => 'Modifica Titolo',
	'PM' => 'PM',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'Informazioni indirizzo IP per i soli Moderatori',
	'Registered_ip_address' => 'Indirizzo IP Registrato',
	'Registered_hostname' => 'Hostname Registrato',
	'Other_registered_ips' => 'Altri utenti regitrati con l\'IP: %s', //%s is the IP address
	'Other_posted_ips' => 'Indirizzi IP da cui ha scritto questo utente',
	'Search_ip' => 'Ricerca posts secondo indirizzo IP',
	'Search_ip_explain' => 'Immetti un indirizzo IP nel formato <u>127.0.0.1</u> - Puoi inoltre usare * come wildcard per corrispondenze parziali come <u>127.*.*.1</u>',
	'IP' => 'IP',
	'Whois' => 'Whois',
	'Browser' => 'Browser',
	'No_other_registered_ips' => 'Non si &egrave; registrato nessun altro con questo IP.',
	'No_other_posted_ips' => 'Questo utente non ha mai postato.',
	'Not_recorded' => 'Non Registrato',
	'Logins' => 'Logins',
	'No_logins' => 'Non sono stati registrati logins per questo utente.',
// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'Clicca per vedere l\'immagine nella sua dimensione originale',
	'LIW_click_image_explain' => 'Clicca sull\'immagine per vederla nella sua dimensione originale',

// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => 'Album',
	'Personal_Gallery' => 'Galleria Personale',
	'Personal_Gallery_Of_User' => 'Galleria Personale Di %s',
	'Personal_Gallery_Of_User_Profile' => 'Galleria Personale di %s (%d Immagini)',
	'Show_All_Pic_View_Mode_Profile' => 'Mostra tutte le Immagini nella Galleria Personale di %s (senza Sottocategorie)',
	'Not_allowed_to_view_album' => 'Non sei autorizzato a visualizzare l\'album',
	'Not_allowed_to_upload_album' => 'Non sei autorizzato a caricare immagini nell\'album. Contatta l\'amministratore per ulteriori informazioni.',
	'Album_empty' => 'Non ci sono immagini nell\'album<br />Clicca su <b>Upload Pic</b> per caricarne una.',
	'Album_empty2' => 'Non ci sono immagini nell\'album',
	'Upload_New_Pic' => 'Carica Nuova Immagine',
	'Pic_Title' => 'Titolo Immagine',
	'Pic_Title_Explain' => 'E\' molto importante assegnare un buon titolo all\'immagine, in questo modo gli utenti hanno gi&agrave; un\'idea sul contenuto senza bisogno di visualizzarla.',
	'Pic_Upload' => 'Carica Immagine',
	'Pic_Upload_Explain' => 'Formati consentiti: JPG, GIF e PNG. La dimensione massima &egrave; %s bytes. La grandezza massima &egrave; %sx%s pixels.',
	'Album_full' => 'l\'album ha raggiunto il livello massimo di immagini. Contatta l\'amministratore per ulteriori informazioni.',
	'Album_upload_successful' => 'Grazie, la tua immagine &egrave; stata caricata con successo.',
	'Click_return_album' => 'Clicca %sQUI%s per tornare all\'Album',
	'Invalid_upload' => 'Errore nel caricamento<br /><br />l\'immagine &egrave; troppo grande, oppure l\'estensione non &egrave; di quelle consentite.',
	'Image_too_big' => 'l\'immagine ha dimensioni troppo elevate.',
	'Uploaded_by' => 'Caricata da',
	'Category_locked' => 'Questa categoria &egrave; stata bloccata e non si possono caricare immagini. Contatta l\'amministratore per ulteriori informazioni.',
	'View_Album_Index' => 'Indice Album',
	'View_Album_Personal' => 'Sta visualizzando le Gallerie Personali degli utenti',
	'View_Pictures' => 'Sta visualizzando immagini nell\'Album',
	'Album_Search' => 'Ricerca nell\'Album',
	'Pic_Name' => 'Nome Immagine',
	'Description' => 'Descrizione',
	'Search_Contents' => ' che contiene: ',
	'Search_Found' => 'La ricerca ha trovato ',
	'Search_Matches' => 'Risultati:',
// Mighty Gorgon - Full Album Pack - END


// XS News
	'xs_latest_news' => 'Ultime News',
	'xs_no_news' => 'Non ci sono News',
	'xs_news_version' => 'Versione XS News: %s',
	'xs_news_ticker_feed' => 'Fonte XML Feed: %s',
	'xs_no_ticker' => 'Non ci sono Tickers definiti, per cortesia vai al Pannello di Amministrazione per crearne uno.',
	'xs_news_ticker_title' => 'News Ticker',
	'xs_news_tickers_title' => 'News Tickers',
	'xs_news_item_title' => 'News',
	'xs_news_items_title' => 'News',
	'hide' => 'Nascondi',
	'show' => 'Mostra',
	'Welcome' => 'Benvenuto',
	'birthdays' => 'Compleanni',

//Battle of the Sexes
	'male_zero_total' => '<b>0</b> Utenti Maschi', // # registered male users
	'male_total' => '<b>%d</b> Utenti Maschi', // # registered male users
	'male_one_total' => '<b>%d</b> Utente Maschio', // # registered male users
	'female_zero_total' => 'Abbiamo <b>0</b> Utenti Femmine', // # registered female users
	'female_total' => 'Abbiamo <b>%d</b> Utenti Femmine', // # registered female users
	'female_one_total' => 'Abbiamo <b>%d</b> Utente Femmina', // # registered female users
	'unknown_total' => 'e <b>%d</b> Utenti che non hanno ancora deciso',
	'unknown_one_total' => 'e <b>%d</b> Utente che non ha ancora deciso',
	'unknown_zero_total' => '',
	'battle_of_sexes' => 'Battaglia dei Sessi: ',

	'who_viewed' => 'Visite Discussione',

	'View_post' => 'Vedi Messaggio',
	'Post_review' => 'Revisione Messaggio',
	'View_next_post' => 'Vedi Prossimo Messaggio',
	'View_previous_post' => 'Vedi Messaggio Precedente',
	'No_newer_posts' => 'Non ci sono messaggi pi&ugrave nuovi in questo forum',
	'No_older_posts' => 'Non ci sono messaggi pi&ugrave vecchi in questo forum',

	'StaffSite' => 'Staff Site',
	'Staff_level' => array('Amministratore', 'Moderatore'),
	'Staff_forums' => 'Forum',
	'Staff_stats' => 'Statistiche',
	'Staff_user_topic_day_stats' => '%.2f Discussioni al giorno', // %.2f = topics per day
	'Staff_period' => 'da %d giorni', // %d = days
	'Staff_contact' => 'Contatti',
	'Staff_messenger' => 'Messenger',

// Start Edit Notes MOD
	'Edit_notes' => 'Note di Modifica',
	'Delete_note' => 'Elimina Nota',
	'Edited_by' => 'Modificato da',
	'Confirm_delete_edit_note' => 'Sei certo di voler eliminare questa Nota di Modifica?',
	'Edit_note_deleted' => 'La Nota di Modifica selezionata &egrave; stata eliminata con successo',
// End Edit Notes MOD

// Recent Topics
	'Recent_topics' => 'Argomenti Recenti',
	'Recent_today' => 'Oggi',
	'Recent_yesterday' => 'Ieri',
	'Recent_last24' => 'Ultime 24 ore',
	'Recent_lastweek' => 'Ultima settimana',
	'Recent_lastXdays' => 'Ultimi %s giorni',
	'Recent_last' => 'Ultimi',
	'Recent_days' => 'Giorni',
	'Recent_first' => 'iniziato %s',
	'Recent_first_poster' => '%s',
	'Recent_select_mode' => 'Seleziona modalit&agrave;:',
	'Recent_showing_posts' => 'Visualizzazione messaggi:',
	'Recent_title_one' => '%s argomento %s', // %s = topics; %s = sort method
	'Recent_title_more' => '%s argomenti %s', // %s = topics; %s = sort method
	'Recent_title_today' => ' da oggi',
	'Recent_title_yesterday' => ' da ieri',
	'Recent_title_last24' => ' nelle ultime 24 ore',
	'Recent_title_lastweek' => ' nell\'ultima settimana',
	'Recent_title_lastXdays' => ' negli ultimi %s giorni', // %s = days
	'Recent_no_topics' => 'Nessun argomento trovato.',
	'Recent_wrong_mode' => 'Modalit&agrave; selezionata errata.',
	'Recent_click_return' => 'Clicca %sQUI%s per ritornare indietro.',

	'Profile_view_option' => 'Finestra di pop up per la visione del profilo',
	'Profile_viewed' => 'Visite Profilo',

// BEGIN Disable Registration MOD
	'registration_status' => 'Spiacenti, ma al momento le registrazioni a questo forum sono chiuse. Per cortesia riprova pi&ugrave; tardi.',
// END Disable Registration MOD

	'PostHighlight' => 'Seleziona',
	'QuickQuote' => 'Citazione Veloce',
	'Randomquote' => 'Citazione Casuale',

// Mod User CP Organize
	'Cpl_Navigation' => 'Pannello Di Controllo',
	'Cpl_Settings_Options' => 'Impostazioni',
	'Cpl_Board_Settings' => 'Impostazioni Sito',
	'Cpl_NewMSG' => 'Invia un Nuovo Messaggio',
	'Cpl_Click_Return_Cpl' => 'O clicca %sQUI%s per ritornare al Pannello Di Controllo',
	'Cpl_Personal_Profile' => 'Dati Personali',
	'Cpl_More_info' => 'Sottoscrizioni',

	'Forbidden_characters' => 'Per lo Username sono permessi solo i seguenti caratteri a-z, 0-9, -, _ e gli spazi.',

	'Topics_per_page' => 'Argomenti per pagina',
	'Posts_per_page' => 'Messaggi per pagina',
	'Hot_threshold' => 'Numero messaggi argomento popolare',

// enhanced modcp..
	'Mod_CP_first_post' => 'Primo Messaggio',
	'Mod_CP_topic_count' => 'trovato <b>%s</b> argomento.',
	'Mod_CP_topics_count' => 'trovati <b>%s</b> argomenti.',
	'Mod_CP_no_topics' => 'Nessun argomento No topics met the criteria.',
	'Mod_CP_sticky' => 'Importante',
	'Mod_CP_announce' => 'Annuncio',
	'Mod_CP_global' => 'Annuncio Globale',
	'Mod_CP_normal' => 'Normale',
	'Display_sticky' => 'Importanti',
	'Display_announce' => 'Annunci',
	'Display_global' => 'Annunci Globali',
	'Display_poll' => 'Sondaggi',
	'Display_shadow' => 'Spostati',
	'Display_locked' => 'Bloccati',
	'Display_unlocked' => 'Sbloccati',
	'Display_unread' => 'Non-Letti',
	'Display_unanswered' => 'Senza Risposta',
	'Display_all' => 'Tutti',
	'Mod_CP_confirm_delete_polls' => 'Sicuro di voler eliminare questi sondaggi?',
	'Mod_CP_poll_removed' => 'Il sondaggio selezionato &egrave; stato eliminato dall\'argomento senza problemi.',
	'Mod_CP_polls_removed' => 'I sondaggi selezionati sono stati eliminati dagli argomenti senza problemi.',
	'Mod_CP_topic_removed' => 'Gli argomenti selezionati sono stati rimossi senza problemi dal database.',
	'Mod_CP_topic_moved' => 'L\'argomento selezionato &egrave; stato spostato da <b>%s</b> a <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topics_moved' => 'Gli argomenti selezionati sono stati spostati da <b>%s</b> a <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topic_locked' => 'L\'argomento selezionato &egrave; stato bloccato.',
	'Mod_CP_topic_unlocked' => 'L\'argomento selezionato &egrave; stato sbloccato.',
	'Mod_CP_topics_sticked' => 'Gli argomenti selezionati sono stati resi Importanti.',
	'Mod_CP_topic_sticked' => 'L\'argomento selezionato &egrave; stato reso Importante.',
	'Mod_CP_topics_announced' => 'Gli argomenti selezionati sono stati resi Annunci.',
	'Mod_CP_topic_announced' => 'L\'argomento selezionato &egrave; stato reso Annuncio.',
	'Mod_CP_topics_globalized' => 'Gli argomenti selezionati sono stati resi Annunci Globali.',
	'Mod_CP_topic_globalized' => 'L\'argomento selezionato &egrave; stato reso Annuncio Globale.',
	'Mod_CP_topics_normalized' => 'Gli argomenti selezionati sono stati resi Normali.',
	'Mod_CP_topic_normalized' => 'L\'argomento selezionato &egrave; stato reso Normale.',
	'Mod_CP_click_return_topic' => 'Clicca %sQUI%s per ritornare al vecchio argomento o %sQUI%s per andare al nuovo.',

// ..enhanced modcp
	't_starter' => 'Non puoi ringraziare te stesso',
	'Watched_Topics' => 'Discussioni Controllate',
	'No_Watched_Topics' => 'Non stai controllando alcuna discussione',
	'Watched_Topics_Started' => 'Argomento Iniziato',
	'Watched_Topics_Stop' => 'Smetti di Controllare',

// Start add - Forum notification MOD
	'Stop_watching_forum' => 'Smetti di controllare questo Forum',
	'Start_watching_forum' => 'Controlla i messaggi in questo Forum',
	'No_longer_watching_forum' => 'Non stai pi&ugrave; controllando questo Forum.',
	'You_are_watching_forum' => 'Stai controllando questo forum.',
// End add - Forum notification MOD
	'profile_main' => 'Informazioni generali',
	'profile_explain' => 'Benvenuto nel tuo Pannello Di Controllo. Da qui puoi modificare e aggiornare il tuo profilo, le tue preferenze, monitorare i forum. Puoi inoltre spedire messaggi agli altri utenti (se permesso).',
	'your_activity' => 'Profilo',

	'UCP_SubscForums' => 'Lista Forum Controllati',
	'UCP_NoSubscForums' => 'Non stai controllando nessun Forum',
	'UCP_SubscForums_Flag' => 'Flag',
	'UCP_SubscForums_Forum' => 'Forum',
	'UCP_SubscForums_Forum_subscribed' => 'Forum Sottoscritti',
	'UCP_SubscForums_Forum_already_subscribed' => 'Sei gi&agrave; sottoscritto a questoYou are already subscibed to this Forum',
	'UCP_SubscForums_Click_return_forum' => 'Clicca %sQUI%s per ritornare al Forum',
	'UCP_SubscForums_Topics' => 'Discussioni',
	'UCP_SubscForums_Posts' => 'Posts',
	'UCP_SubscForums_LastPost' => 'Ultimo Post',
	'UCP_SubscForums_UnSubscribe' => 'Annulla la sottoscrizione',
	'UCP_SubscForums_NewTopic' => 'Nuova Discussione',

	'Gravatar' => 'Gravatar',
	'Gravatar_explain' => 'Se hai un <a href="http://www.gravatar.com" target="_blank">gravatar</a>, inserisci qui l\'indirizzo email associato ad esso.',

/* Start Private Message Review By aUsTiN */
	'private_msg_review_title' => 'Messaggio al quale stai rispondendo',
	'private_msg_review_error' => 'Errore nella Ricerca dei Messaggi Privati!',
/* End Private Message Review By aUsTiN */


	'BSH_Viewing_Topic' => 'Sta Guardando la discussione: %t%',
	'BSH_Viewing_Post' => '%sSta Guardando un Messaggio%s',
	'BSH_Viewing_Profile' => 'Sta Guardando il Profilo di %u%',
	'BSH_Viewing_Groups' => '%sSta Guardando i Gruppi%s',
	'BSH_Viewing_Forums' => 'Sta Guardando il Forum: %f%',
	'BSH_Index' => '%sSta Guardando l\'Indice%s',
	'BSH_Searching_Forums' => '%sSta Cercando nei Forum%s',
	'BSH_Viewing_Onlinelist' => '%sSta Guardando la lista degli Utenti Online%s',
	'BSH_Viewing_Messages' => '%sSta Guardando i Messaggi Privati%s',
	'BSH_Viewing_Memberlist' => '%sSta Guardano la Lista degli Utenti%s',
	'BSH_Login' => '%sSta Effettuando il Login%s',
	'BSH_Logout' => '%sSta Effettuando il LogOut%s',
	'BSH_Editing_Profile' => '%sSta modificando il Profilo%s',
	'BSH_Viewing_ACP' => '%sSta Guardando l\'ACP%s',
	'BSH_Moderating_Forum' => '%sSta Moderando i Forum%s',
	'BSH_Viewing_FAQ' => '%sSta Guardando le FAQ%s',
	'BSH_Viewing_Category' => 'Sta Guardando la Categoria: %c%',

	'Board_statistic' => 'Statistiche Forum',
	'Database_statistic' => 'Statistiche Database',
	'Version_info' => 'Informazioni Versione',
	'Thereof_deactivated_users' => 'Numero di membri non attivi',
	'Thereof_Moderators' => 'Numero di Moderatori',
	'Thereof_Junior_Administrators' => 'Numero di Amministratori Junior',
	'Thereof_Administrators' => 'Numero di Amministratori',
	'Deactivated_Users' => 'Membri in attesa dell\'Attivazione',
	'Users_with_Mod_Privileges' => 'Membri con i privilegi di Moderatore',
	'Users_with_Junior_Admin_Privileges' => 'Membri con i privilegi di Amministratore Junior',
	'Users_with_Admin_Privileges' => 'Membri con i privilegi di Amministratore',
	'DB_size' => 'Dimensioni del database',
	'Version_of_ip' => 'Versione di <a href="http://www.icyphoenix.com/">Icy Phoenix</a>',
	'Version_of_board' => 'Versione di <a href="http://www.phpbb.com">phpBB</a>',
	'Version_of_PHP' => 'Versione di <a href="http://www.php.net/">PHP</a>',
	'Version_of_MySQL' => 'Versione di <a href="http://www.mysql.com/">MySQL</a>',
	'Download_post' => 'Download Messaggio',
	'Download_topic' => 'Download Discussione',
	'Always_swear' => 'Consenti parole censurate',

	'Shoutbox' => 'Shoutbox',
	'Shoutbox_date' => ' d m Y H:i:s',
	'Shout_censor' => '<b>Messaggio Rimosso!</b>',
	'Shout_refresh' => 'Aggiorna',
	'Shout_text' => 'Testo',
	'Viewing_Shoutbox' => 'Shoutbox',
	'Censor' => 'Censura',

	'Edit_post_time' => 'Modifica Orario Messaggio',
	'Edit_post_time_xs' => 'Modifica',
	'Topic_time_xs' => 'Ora Discussione',
	'Post_time' => 'Ora Messaggio',
	'Post_time_successfull_edited' => '<b>Ora Aggiornata Senza Problemi.</b></span><br /><span class="postdetails">Questa finestra si chiuder&agrave; in 3 secondi.',

	'staff_message' => 'Messaggio Dallo Staff',

	'Board_Rules' => 'Regolamento',
	'Forum_Rules' => 'Regolamento',
	'Show_avatars' => 'Visualizza Avatars nelle Discussioni',
	'Show_signatures' => 'Visualizza Firme nelle Discussioni',

//016
	'Acronym' => 'Acronimo',
	'Acronyms' => 'Acronimi',
	'User_Number' => 'Utente #',
	'Member_Count' => 'Utenti',
	'BoardRules' => 'Regolamento',

//018
	'Click_read_topic' => 'Clicca %sQUI%s per leggerlo', // %s's here are for uris, do not remove!
	'Create_with_generator' => 'Crea Avatar con Avatar Generator',
	'View_avatar_generator' => 'Avatar Generator',

//027
	'Adv_Search' => 'Ricerca Avanzata',
	'Search_Explain' => 'Ricerca interna al sito',

//030
	'Please_remove_install_contrib' => 'Elimina la cartella <b>install/</b>s dal tuo server',

//033
	'Search_Engines' => 'Bots Motori di Ricerca:',
	'Bots_browsing_forum' => 'Bots Motori di Ricerca in questo forum:',

//036
	'Debug_On' => 'Debug On',
	'Debug_Off' => 'Debug Off',
	'Page_Generation_Time' => 'Tempo Generazione',
	'Memory_Usage' => 'Memoria',
	'SQL_Queries' => 'SQL queries',
	'Search_new2' => 'Nuovi Messaggi',
	'Search_new_p' => 'Messaggi dalla tua ultima visita',

//037
	'Show_In_Portal' => 'Visualizza in Home Page',
	'Not_Auth_View' => 'Non hai permessi sufficienti per visualizzare questa pagina.',

//038
	'Site_Hist' => 'Storico Sito',
	'Links' => 'Links',
	'Print_View' => 'Versione Stampabile',
	'Browsing_topic' => 'Online in questo argomento:',

//041
	'Sudoku' => 'Sudoku',

// Bookmarks Mod
	'Bookmarks' => 'Segnalibri',
	'Set_Bookmark' => 'Imposta un segnalibro per questo argomento',
	'Remove_Bookmark' => 'Rimuovi segnalibro per questo argomento',
	'No_Bookmarks' => 'Non hai impostato nessun segnalibro',
	'Always_set_bm' => 'Imposta automaticamente un segnalibro quando scrivi',
	'Found_bookmark' => 'Hai impostato %d segnalibro.', // eg. Search found 1 match
	'Found_bookmarks' => 'Hai impostato %d segnalibri.', // eg. Search found 24 matches
	'More_bookmarks' => 'Altri segnalibri...', // For mozilla navigation bar

//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_feeds' => 'RSS News Feeds',
	'Rss_news_help' => 'Che cos\'&egrave;?',
	'Rss_news_help_title' => 'RSS Newsreader Help',
	'Rss_news_help_header' => 'Cosa sono i feeds e come si usano?',
	'Rss_news_help_explain' => 'Un feed &egrave; un riassunto aggiornato regolarmente di alcuni contenuti Web, che contiene un link ai rispettivi contenuti completi. Se ti iscrivi ad un feed di un Sito Web con un Feed Reader, riceverai un riassunto dei nuovi contenuti di quel Sito.<br /><br /><b>Attenzione:</b> Per iscriverti a un feed di un Sito Web potrebbe essere necessario un <a href="http://www.rssowl.org/" target="new">Feed-Reader</a>. Quando si clicca su un link ad un feed RSS o ATOM potrebbe apparire del testo confuso e non formattato nel Browser.',
	'Rss_news_help_header_2' => '<b>Cosa Sono RSS e Atom?</b>',
	'Rss_news_help_explain_2' => 'RSS e Atom sono due formati per i feed. La maggior parte dei Readers li supporta entrambi. Al momento noi offriamo atom 0.3 e RSS 2.0.',
	'Rss_news_help_header_3' => '<b>Come si usano i feeds?</b>',
	'Rss_news_help_explain_3' => 'Anzitutto bisogna avere un feed reader, lo potete scaricacare da qui: <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />Dopodich&eacute; potrete:<br /><br /><b>1.</b> Cercare nuovi link RSS nel nostro sito. (Strumenti => Scoperta new feeds su sito web) <b>o</b><br /><b>2.</b> Aggiungere uno delle seguenti URL:',
	'L_url_rss_explain' => 'URL per tutte le discussioni del forum.',
	'L_url_rss_news_explain' => 'URL per le sole News.',
	'L_url_rss_atom_explain' => 'URL per Il Feed RSS Atom.',
	'Rss_news_help_rights' => 'Ci riserviamo il diritto di sospendere l\'uso dei feeds in qualsiasi momento e a nostra discrezione. I feeds del nostro forum potrebbero essere sospesi senza preavviso.',

	'Quick_Reply' => 'Risposta Veloce',
	'Mod_CP_sticky2' => 'Rendi la Discussione Importante',
	'Mod_CP_announce2' => 'Rendi la Discussione Annuncio',
	'Mod_CP_global2' => 'Rendi la Discussione Annuncio Globale',
	'Mod_CP_normal2' => 'Rendi la Discussione Normale',

	'Search_Flood_Error' => 'Non puoi effettuare una ricerca cos&igrave; presto dopo la tua ultima: per cortesia riprova tra un po\'.',

// Custom Profile Fields MOD
	'custom_field_notice' => 'Questi campi sono stati creati da un amministratore. Alcuni potrebbero essere visibili da tutti, altri no. I campi contrassegnati da un asterisco (*) sono campi obbligatori.',
	'and' => ' e ',
// END Custom Profile Fields MOD

	'dsbl' => 'Il tuo indirizzo IP &egrave; presente su <a href="%url%">DNS-based Blackhole List</a>.<br />Registrazione bloccata.',

// BUILD 044
	'Emails_Only_To_Admins_Error' => 'Puoi inviare le email tramite il sito soltanto agli amministratori.',

// BUILD 046
	'Wordgraph' => 'Tags',
	'Viewing_wordgraph' => 'Sta visualizzando i Tags',

// BUILD 050
	'Links_For_Guests' => '<b>Devi essere registrato per poter vedere questo link</b>',
	'New' => 'N',
	'New_Label' => 'Nuovi',
	'New_Messages_Label' => 'Nuovi Messaggi',

// BUILD 056
	'Show_Personal_Gallery' => 'Galleria Personale',

// BUILD 058
	'Login_Status' => 'Stato Online',
	'Login_Hidden' => 'Nascosto',
	'Login_Visible' => 'Visibile',
	'Login_Default' => 'Predefinito',
	'ERRORS_NOT_FOUND' => 'L\'indirizzo richesto non &egrave; stato trovato su questo server',
	'ERRORS_000' => 'Errore Sconosciuto',
	'ERRORS_000_FULL' => 'L\'indirizzo richiesto ha restituito un errore sconosciuto.<br />Gli errori sono stati registrati nel file di log.',
	'ERRORS_400' => 'Errore 400',
	'ERRORS_400_FULL' => 'L\'indirizzo richiesto non &egrave; un indirizzo valido.',
	'ERRORS_401' => 'Errore 401 - Errore Autorizzazione',
	'ERRORS_401_FULL' => 'Non disponi delle autorizzazioni necessarie per visualizzare questa pagina.',
	'ERRORS_403' => 'Errore 403',
	'ERRORS_403_FULL' => 'L\'accesso a questo indirizzo &egrave; proibito.',
	'ERRORS_404' => 'Errore 404 - Indirizzo Non Trovato',
	'ERRORS_404_FULL' => 'L\'indirizzo richiesto non &egrave; stato trovato su questo server. L\'errore pu&ograve; essere dovuto ad un\'errata digitazione oppure al fatto che il file &egrave; stato rimosso dal server.',
	'ERRORS_500' => 'Errore 500 - Errore Di Configurazione',
	'ERRORS_500_FULL' => 'L\'indirizzo richiesto restituisce un errore di configurazione.<br />Gli errori sono stati registrati nel file di log.',
	'ERRORS_EMAIL_SUBJECT' => 'Errori: ',
	'ERRORS_EMAIL_ADDRRESS_PREFIX' => 'gestione_errori',
	'ERRORS_EMAIL_BODY' => 'Si &egrave verificato un errore sul tuo sito. Per favore verifica il file di log.',

// BUILD 059
	'Remote_avatar_no_image' => 'L\'immagine %s non esiste o non &egrave; raggiunbibile',
	'Remote_avatar_error_filesize' => 'L\'immagine supera la dimensione massima consentita per gli avatar (%d Bytes)',
	'Remote_avatar_error_dimension' => 'L\'immagine supera il limite di dimensione per gli avatar (%d x %d pixel)',
	'How_Many_Chatters' => 'Ci sono <b>%d</b> utenti in chat',
	'Who_Are_Chatting' => '<b>%s</b>',
	'Click_to_join_chat' => 'Clicca per entrare in chat',
	'ChatBox' => 'ChatBox',
	'log_out_chat' => 'Sei uscito dalla chat alle ',
	'Send' => 'Invia',
	'Login_to_join_chat' => 'Login per entrare in chat',

// Hacks List
/* General */
	'Hacks_List' => 'Riconoscimenti',
	'Page_Desc' => 'Questo modulo vi permette di aggiungere/modificare la lista dei riconoscimenti sulle modifiche installate. Questa lista viene mostrata agli utenti quando accedono alla pagina credits.php.',
	'Deleted_Hack' => 'Rimuovi voce %s dalla lista.<br />',
	'Updated_Hack' => 'Aggiorna info su %s.<br />',
	'Added_Hack' => 'Informazione aggiornata per %s.<br />',
	'Status' => 'Stato',
	'No_Website' => 'Sito web non disponibile.',
	'No_Hacks' => 'Nessun riconoscimento da visualizzare.',
	'Add_New_Hack' => 'Aggiungi un nuovo riconoscimento',
	'User_Viewable' => 'Nascondi dalla lista per gli utenti?',
	'Hack_Name' => 'Nome Aggiunta',
	//'Description' => 'Descrizione',
	'Required' => 'Richiesto',
	'Author_Email' => 'Email Autore',
	'Version' => 'Versione',
	'Download_URL' => 'Download',

/* Errors */
	'Error_Hacks_List_Table' => 'Errore durante l\'interrogazione della tabella Riconoscimenti.',
	'Required_Field_Missing' => 'Le informazioni che avete immesso non sono complete.',
	'Error_File_Opening' => 'Impossibile aprire il file: %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => 'Utlima Immagine', // Album Addon
	'Random_pic' => 'Immagine Casuale', // Album Addon
	'Click_enlarge_pic' => 'Clicca sull\'immagine per vederla ingrandita',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => 'Ultimo IP',
	'Last_Used_OS' => 'Sistema Operativo',
	'Last_Used_Browser' => 'Browser',
	'Last_Used_Referer' => 'Referer',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
	'Users_Admins' => 'Amministratori',
	'Users_Mods' => 'Moderatori',
	'Users_Global_Mods' => 'Moderatori Globali',
	'Users_Regs' => 'Utenti',
	'Users_Guests' => 'Ospiti',
	'Users_Hidden' => 'Nascosti',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Style' => 'Stile',
	'User_Contacts' => 'Contatti',
	'Memberlist_Users_Display' => 'Utenti per pagina:',
	'SORT_FAST' => 'Veloce',
	'SORT_STANDARD' => 'Standard',
	'SORT_RANK' => 'Livello',
	'SORT_STAFF' => 'Staff',
	'SORT_STYLE' => 'Stile',
	'SORT_LASTLOGON' => 'Ultima Visita',
	'SORT_BIRTHDAY' => 'Compleanno',
	'SORT_ONLINE' => 'Online',
	'ASCENDING' => 'Crescente',
	'DESCENDING' => 'Decrescente',
	'LESS_THAN' => 'Minore di',
	'EQUAL_TO' => 'Uguale a',
	'MORE_THAN' => 'Maggiore di',
	'BEFORE' => 'Prima',
	'AFTER' => 'Dopo',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => 'Staff',
	'Rank' => 'Livello',
	'Rank_Header' => 'Livelli',
	'Rank_Image' => 'Immagine Livello',
	'Rank_Posts_Count' => 'Livello automatico in base ai messaggi',
	'Rank_Days_Count' => 'Livello automatico in base ai giorni d\'iscrizione',
	'Rank_Min_Des' => 'Giorni/Messaggi minimi',
	'Rank_Min_M' => 'Messaggi Minimo',
	'Rank_Max_M' => 'Messaggi Massimo',
	'Rank_Min_D' => 'Giorni Minimo',
	'Rank_Max_D' => 'Giorni Massimo',
	'Rank_Special' => 'Livello Speciale',
	'Rank_Special_Guest' => 'Livello Speciale Per Gli Ospiti',
	'Rank_Special_Banned' => 'Livello Speciale Per Gli Espulsi',
	'Current_Rank_Image' => 'Immagine attualmente impostata',
	'No_Rank' => 'Nessun livello assegnato',
	'No_Rank_Image' => 'Nessuna immagine assegnata',
	'No_Rank_Special' => 'Nessun livello speciale assegnato',
	'Memberlist_Administrator' => 'Amministratore',
	'Memberlist_Moderator' => 'Moderatore',
	'Memberlist_User' => 'Utente',
	'Guest_User' => 'Ospite',
	'Banned_User' => 'Espulso',
	'Rank1_title' => 'Titolo Livello 1',
	'Rank2_title' => 'Titolo Livello 2',
	'Rank3_title' => 'Titolo Livello 3',
	'Rank4_title' => 'Titolo Livello 4',
	'Rank5_title' => 'Titolo Livello 5',
// Mighty Gorgon - Multiple Ranks - END

// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => 'Menu',
	'MAIN_LINKS' => 'Link Principali',
	'NEWS_LINKS' => 'News',
	'INFO_LINKS' => 'Info',
	'USERS_LINKS' => 'Utenti &amp; Gruppi',
	'SELECT_STYLE' => 'Stile',
	'SELECT_LANG' => 'Lingua',
	'RSS_FEEDS' => 'Feeds RSS',
	'SPONSORS_LINKS' => 'Sponsors',
	'TOOLS_LINKS' => 'Utilit&agrave;',
	'HelpDesk' => 'Help Desk',
	'AvatarGenerator' => 'Generatore Avatar',
	'DBGenerator' => 'Conversione SQL/PHP',

	'LINK_ACP' => 'ACP',
	'LINK_CMS' => 'CMS',
	'LINK_HOME' => 'Home',
	'LINK_PROFILE' => 'Profilo',
	'LINK_FORUM' => 'Forum',
	'LINK_BOARDRULES' => 'Regolamento',
	'LINK_FAQ' => 'FAQ',
	'LINK_SEARCH' => 'Cerca',
	'LINK_SITEMAP' => 'Sitemap',
	'LINK_ALBUM' => 'Album',
	'LINK_CALENDAR' => 'Calendario',
	'LINK_DOWNLOADS' => 'Downloads',
	'LINK_BOOKMARKS' => 'Bookmarks',
	'LINK_DRAFTS' => 'Bozze',
	'LINK_UPLOADED_IMAGES' => 'Immagini Personali',
	'LINK_AJAX_SHOUTBOX' => 'Chat',
	'LINK_LINKS' => 'Links',
	'LINK_CONTACT_US' => 'Contattaci',
	'LINK_SUDOKU' => 'Sudoku',

	'LINK_NEWS_CAT' => 'Categorie News',
	'LINK_NEWS_ARC' => 'Archivio News',
	'LINK_NEW_MESSAGES' => 'Nuovi Messaggi',
	'LINK_DISPLAY_UNREAD_S' => 'Non Letti',
	'LINK_DISPLAY_MARKED_S' => 'Contrassegnati',
	'LINK_DISPLAY_PERMANENT_S' => 'Permanenti',
	'LINK_DIGESTS' => 'Digests',

	'LINK_CREDITS' => 'Crediti',
	'LINK_REFERERS' => 'HTTP Referers',
	'LINK_VIEWONLINE' => 'Utenti Online',
	'LINK_STATISTICS' => 'Statistiche',
	'LINK_DELETE_COOKIES' => 'Elimina Cookies',

	'LINK_MEMBERLIST' => 'Lista Utenti',
	'LINK_USERGROUPS' => 'Gruppi Utenti',
	'LINK_RANKS' => 'Livelli',
	'LINK_STAFF' => 'Staff',
// Mighty Gorgon - Nav Links - END

	'Activity' => 'Giochi',
	'Games' => 'Giochi',
	'Trohpy' => 'Trofei',
	'quick_links_games' => 'Menu Giochi',

	'By' => 'Da',
	'No_Icon_Image' => 'Nessuna Icona',
	'Change_Style' => 'Stile',
	'Change_Lang' => 'Lingua',
	'Permissions_List' => 'Lista Permessi',
	'IP_TEAM' => 'Team Icy Phoenix',

// Mighty Gorgon - LANG - END

// New MG - BEGIN
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',
	'WeatherForecast' => 'Previsioni Del Tempo',
	'ErrorNotFound' => 'File Non Trovato!',
	'MGC_Users_Online' => 'MGC Users Online',
	'MGC_User_Servertime' => 'Data',
	'MGC_User_Nickname' => 'Nickname',
	'MGC_User_Server' => 'Server',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'MGC Version',

	'Country_Flag' => 'Bandiera',
	'Select_Country' => 'Seleziona Bandiera',
	'Extra_profile_info' => 'Altre Informazioni',
	//'Extra_profile_info_explain' => 'Puoi aggiungere in questo campo altre informazioni su di te. Puoi anche usare il BBCode per inserire immagini o altre formattazioni particolari (se non sai cos\'&egrave; il BBCode puoi consultare le FAQ). La descrizione &egrave; limitata a <b>%d</b> caratteri (0 = senza limiti)',
	'Extra_profile_info_explain' => 'Puoi aggiungere in questo campo altre informazioni su di te. Puoi anche usare il BBCode per inserire immagini o altre formattazioni particolari (se non sai cos\'&egrave; il BBCode puoi consultare le FAQ).',
	'Extra_window' => 'Apri in un altra finestra',
	'Extra_too_long' => 'Hai superato il numero di caratteri consentito nelle Altre Informazioni (max <b>%d</b> caratteri)',
	'UserLike' => 'Cose che ama',
	'UserDisLike' => 'Cose che odia',
	'UserLikeIns' => 'Tre cose che ami',
	'UserDisLikeIns' => 'Tre cose che odi',
	'UserPhone' => 'Numero Di Telefono',
	'UserSport' => 'Sport/Squadra',
	'UserMusic' => 'Musica/Gruppi',
	'UserNoInfo' => 'Nessuna Informazione Inserita',
	'LAST_SEEN' => 'Ultimi Online',
// New MG - END

// MG CMS - BEGIN
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'Gestione CMS',
	'CMS_CONFIG' => 'Configurazione',
	'CMS_SETTINGS' => 'Impostazioni',
	'CMS_ACP' => 'Modifica Questa Pagina',
	'CUSTOM_PAGE' => 'Pagina Personalizzata',
// MG CMS - END


// Icy Phoenix - BUILD 001
	'SimilarTopics' => 'Argomenti Simili',
	'Chat' => 'Chat',
	'DIGESTS' => 'Digests',

	'CPL_REG_INFO_EXPLAIN' => 'Username, indirizzo email e password',
	'CPL_PROFILE_INFO_EXPLAIN' => 'Informazioni generali riguardo i contatti, interessi ed altre informazioni generali',
	'CPL_PROFILE_VIEWED_EXPLAIN' => 'Utenti che hanno visitato il tuo profilo',
	'CPL_AVATAR_PANEL_EXPLAIN' => 'L\'Avatar &egrave; la piccola immagine associata al tuo profilo',
	'CPL_SIG_EDIT_EXPLAIN' => 'La tua firma: puoi inserire un testo che verr&agrave; inserito come firma ai tuoi messaggi',
	'CPL_PREFERENCES_EXPLAIN' => 'Preferenze generali riguardo l\'invio e la visualizzazione di messaggi',
	'CPL_BOARD_SETTINGS_EXPLAIN' => 'Impostazioni globali relative al fuso orario, lo stile e la lingua',
	'Calendar_settings_EXPLAIN' => 'Impostazioni relative al calendario',
	'Hierarchy_setting_EXPLAIN' => 'Impostazioni riguardanti le sottocategorie ed il raggruppamento dei messaggi',
	'LOGIN_SEC_EXPLAIN' => 'Se abilitata, questa funzione consente di controllare gli accessi effettuati con questo profilo',
	'CPL_OWN_POSTS_EXPLAIN' => 'Cerca i tuoi messaggi',
	'CPL_OWN_PICTURES_EXPLAIN' => 'Visualizza la tua galleria personale',
	'CPL_INBOX_EXPLAIN' => 'Posta in arrivo: contiene i messaggi privati ricevuti',
	'CPL_SAVEBOX_EXPLAIN' => 'Posta salvata: contiene i messaggi salvati',
	'CPL_OUTBOX_EXPLAIN' => 'Posta in uscita: contiene i messaggi da te inviati ma che non sono ancora stati letti',
	'CPL_SENTBOX_EXPLAIN' => 'Posta inviata: contiene i messaggi da te inviati che sono stati letti dal destinatario',
	'CPL_BOOKMARKS_EXPLAIN' => 'I segnalibri che hai assegnato agli argomenti nel sito',
	'WATCHED_TOPICS_EXPLAIN' => 'La lista di tutti gli argomenti che stai controllando',
	'CPL_SUBSCFORUMS_EXPLAIN' => 'La lista dei forum in cui hai attivato la notifica per i nuovi argomenti',
	'DIGESTS_EXPLAIN' => 'I Digests sono email periodiche che vengono invate automaticamente dal sito e che contengono una sintesi dei nuovi messaggi',
	'DRAFTS_EXPLAIN' => 'Gestione bozze messaggi',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Shoutbox',
	'Ajax_Chat' => 'Chat',
	'Ajax_Archive' => 'Archivio Chat',
	'Shoutbox_flooderror' => 'Non puoi inviare un messaggio cos&igrave; presto dopo il tuo ultimo messaggio. Per cortesia, aspetta ancora qualche secondo e poi riprova.',
	'Shoutbox_no_auth' => 'Spiacenti, ma solo gli utenti registrati possono utilizzare la Shoutbox.',
	'Shoutbox_loading' => 'Caricamento Shoutbox...',
// Errors
	'Shoutbox_unable' => 'Spiacenti, ma a causa di un errore la pagina non viene visualizzata correttamente. Riprova di nuovo.',
	'Shoutbox_timeout' => 'Spiacenti, ma il server non risponde. Riprova di nuovo.',
	'Shoutbox_empty' => 'Nessun messaggio nel DB',
	'Shoutbox_no_mode' => 'Modo specificato non valido',
// Archive
	'Shouts' => 'Messaggi',
	'Statistics' => 'Statistiche',
	'Total_shouts' => 'Messaggi Totali',
	'Stored_shouts' => 'Messaggi Memorizzati',
	'My_shouts' => 'Miei Messaggi',
	'Today_shouts' => 'Messaggi nelle ultime 24 ore',
	'Top_Ten_Shouters' => 'Migliori 10 utenti',
// Online list
	'Online_total' => 'Totale',
	'Online_registered' => 'Utenti',
	'Online_guests' => 'Ospiti',
	'Who_is_Chatting' => 'Online In Chat',
	'Shoutbox_online_explain' => 'Questi dati sono basati sugli ultimi 30 secondi',
	'Start_Private_Chat' => 'Clicca sul nome per iniziare una chat privata',
// Chat rooms
	'Shout_rooms' => 'Stanze',
	'Admin_rooms' => 'Tutte le stanze',
	'Public_room' => 'Stanza pubblica',
	'Private_room' => 'Stanza privata',
	'My_id' => 'Io',
// Ajax Shoutbox - END

	'Contact_us' => 'Contattaci',
	'Contact_us_explain' => 'Tramite questa pagina puoi inviarci un\'email',
	'Session_invalid' => 'Sessione Non Valida. Ricompila il modulo.',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => ' username troppo corto',
	'Reg_Username_Long' => ' username troppo lungo',
	'Reg_Username_Taken' => ' username non disponibile',
	'Reg_Username_Free' => ' username disponibile',
	'Reg_PWD_Short' => 'Password troppo corta',
	'Reg_PWD_Easy' => 'Password troppo semplice',
	'Reg_PWD_OK' => 'Password ok',
	'Reg_Email_Invalid' => ' indirizzo email non valido',
	'Reg_Email_OK' => ' indirizzo email corretto',

	'time_mode' => 'Gestione orario',
	'time_mode_text' => 'Il valore DST &egrave; la differenza tra l\'ora legale e quella normale (da 0 a 120 minuti)',
	'time_mode_auto' => 'Modalit&agrave; automatica...',
	'time_mode_full_pc' => 'Orario del vostro computer',
	'time_mode_server_pc' => 'Orario universale del server <br /><span STYLE="margin-left: 25">Impostazioni ora legale del vostro computer</span>',
	'time_mode_full_server' => 'Orario del server',
	'time_mode_manual' => 'Modalit&agrave; manuale...',
	'time_mode_dst' => 'Ora legale',
	'time_mode_dst_server' => 'Dal server',
	'time_mode_dst_time_lag' => 'Differenza ora legale / seriale',
	'time_mode_dst_mn' => ' mn ',
	'time_mode_dst_mn_explain' => 'Tempo espresso in minuti',
	'time_mode_timezone' => 'Timezone',

	'dst_time_lag_error' => 'Valore Ora legale/solare errato. Inserire un valore tra 0 e 120.',

	'dst_enabled_mode' => ' [Ora Legale]',
	'full_server_mode' => 'Ogni orario &egrave; sincronizzato  con l\'orario del server',
	'server_pc_mode' => 'Orario sincronizzato con il server - Fuso orario e Ora Solare con il tuo computer',
	'full_pc_mode' => 'Ogni orario &egrave; sincronizzato con l\'orario del computer',

	'Smileys_Per_Page' => 'Smileys Per Pagina',

/* lang_site_hist.php - BEGIN */
	'Site_history' => 'Storico Sito',
	'Month' => 'Mese',
	'Week_day' => 'Giorno della Settimana',
	'Not_availble' => 'Non Disponibile',
	'Total_users' => 'Numero Massimo Utenti',
	'Reg_users' => 'Utenti Registrati',
	'Hidden_users' => 'Utenti Nascosti',
	'Guests_users' => 'Ospiti',
	'New_users' => 'Nuovi Utenti',
	'New_topics' => 'Nuove Discussioni',
	'New_posts_reply' => 'Messaggi/Risposte',
	'Most_online' => 'Numero massimo di utenti online %s',
	'Most_online_week' => 'Numero massimo di utenti online nell\'ultima settimana',
	'Last_24' => 'Numero massimo di utenti online nelle ultime %s Ore',
	'Top_Posting_Users' => 'Utenti Migliori',
	'Top_Posting_Users_week' => 'Utenti migliori della settimana [%s]',
	'Rank' => 'Livello',
	'Percent' => '%',
	'Graph' => 'Grafico',
	'Top_Visiting_Users' => 'Maggiori Visitatori',
/* lang_site_hist.php - END */

/* lang_referers.php - BEGIN */
	'REFERERS' => 'Http Referers',
	'VIEWING_REFERERS' => 'Sta guardando i Referers',
	'REFERERS_TITLE' => 'Gestione Http Referers',
	'REFERERS_CLEARED' => 'Referers Eliminati',
	'REFERERS_CLEAR' => 'Elimina Tutti',
	'CLICK_RETURN_REFERERS' => 'Clicca %sQUI%s per tornare ai Referers',
	'REFERER_HOST' => 'Host',
	'REFERER_URL' => 'URL',
	'REFERER_T_URL' => 'Visited URL',
	'REFERER_IP' => 'IP',
	'REFERER_HITS' => 'Numero Visite',
	'REFERER_FIRST' => 'Prima Visita',
	'REFERER_LAST' => 'Ultima Visita',
	'REFERER_DELETE' => 'Elimina',
	'REFERER_KILL' => 'Rimuovi dal DB (puoi usare * come carattere jolly)',
	'REFERER_GROUP_BY' => 'Raggruppa per',
/* lang_referers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_DAYS' => '%d Giorni',
	'X_WEEKS' => '%d Settimane',
	'X_MONTHS' => '%d Mesi',
	'X_YEARS' => '%d Anni',

	'Confirm_delete_user' => 'Sei sicuro di voler eliminare questo Utente?',
	'Prune_no_users' => 'Non &egrave stato eliminato nessun utente',
	'Prune_users_number' => 'I seguenti %d utenti sono stati eliminati:',

	'Prune_user_list' => 'Utenti che saranno eliminati',
	'Prune_on_click' => 'Stai per eliminare %d utenti. Sei sicuro?',
	'Prune_Action' => 'Clicca sul link sottostante per l\'esecuzione del comando',
	'Prune_users_explain' => 'Da questa pagina puoi eliminare automaticamente gli utenti. Puoi scegliere tra tre opzioni: eliminare i vecchi utenti che non hanno mai inviato messaggi, eliminare i vecchi utenti che non hanno mai effettuato il Login, eliminare i vecchi utenti che non hanno mai attivato il loro account.<p/><b>ATTENZIONE:</b> Non c\'&egrave; una funzione per annullare le operazioni eseguite.',
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => 'Avatar Generator',
	'Available' => 'Avatars Disponibili',
	'Random' => 'Casuale',
	'Avatar_Text' => 'Per cortesia immetti il testo che vorrai che appaia sul tuo Avatar:',
	'Avatar_Preview' => 'Anteprima Avatar',
	'Your_Avatar' => 'Il tuo Avatar',
	'Submit_Avatar' => 'Invia Avatar',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Uploading' => 'Caricamento in corso...',
	'Upload_Image_Local' => 'Carica Immagine',
	'Uploaded_Images_Local' => 'Immagini Personali',
	'Upload_Image_Local_Explain' => 'Seleziona il file da caricare',
	'Uploaded_Image_Success' => 'L\'immagine &egrave; stata caricata corretamente.',
	'Uploaded_Image_BBC' => 'Per allegare questa immagine nei post, puoi usare questo BBCode.',
	'Upload_Image_Empty' => 'Non puoi caricare aria sul server... seleziona un file!',
	'Upload_File_Too_Big' => 'Il file che stai cercando di caricare &egrave; troppo grande! Dimensione massima consentita:',
	'Upload_File_Error' => 'Errore sconosciuto',
	'Upload_File_Error_Size' => 'Dimensioni eccessive!',
	'Upload_File_Error_Type' => 'Tipo file non consentito!',
	'Upload_File_Type_Allowed' => 'Soltanto questi tipi di immagine possono essere caricati',
	'Upload_File_Max_Size' => 'La grandezza massima permesso per ogni file &egrave; di',
	'Upload_Insert_Image' => 'Inserisci BBCode',
	'Upload_Close' => 'Chiudi',
	'BBCode' => 'BBCode',
	'HTML' => 'HTML',

	'No_News' => 'Nessuna News',

	'Email_confirm' => 'Reinserisci il tuo indirizzo email',
	'Email_mismatch' => 'Gli indirizzi email inseriti non corrispondono.',

	'View_ballot' => 'Visualizza Risultati',
	'Full_edit' => 'Modifica il messaggio con tutte le funzioni',
	'Save_changes' => 'Salva',
	'No_subject' => '(Nessun oggetto)',
	'Edit_quick_post' => 'Modifica questo messaggio al volo',
	'AJAX_search_results' => 'Sono stati trovati %s argomenti con le parole indicate nel titolo del tuo messaggio. Clicca qui per visualizzare questi argomenti',
	'AJAX_search_result' => 'Un argomento trovato con le parole indicate nel titolo del tuo messaggio. Clicca qui per visualizzare questo argomento',
	'More_matches_username' => 'Diversi utenti sono stati trovati con la tua richiesta. Seleziona un utente dalla finestra sovrastante.',
	'No_username' => 'Devi inserire un nome utente.',
	'AJAX_quick_search_results' => 'Sono stati trovati %s argomenti con queste parole chiave.<br />Sulla destra sono visualizzati i primi risultati.<br />Clicca su "Cerca" per ottenere la lista completa.',
	'AJAX_quick_search_result' => 'Un argomento trovato con queste parole chiave.<br />Sulla destra puoi visualizzare il risultato.',

	'Icon_Description' => 'Descrizione Icone',

	'Feature_Disabled' => 'Questa funzionalit&agrave; &egrave; stata disabilitata.',

// Resend Activation - BEGIN
	'Resend_activation_email' => 'Reinvia email di attivazione',
	'Invalid_activation' => 'L\'attivazione degli account pu&ograve; essere effettuata solo dagli amministratori.',
	'No_actkey' => 'Non esiste una chiave di attivazione per il tuo account. Per favore contatta l\'amministratore per maggiori informazioni.',
	'Send_actmail_flood_error' => 'Non puoi effettuare una nuova richiesta di attivazione cos&igrave; presto. Per favore, prova ancora pi&ugrave; tardi.',
	'Resend_activation_email_done' => 'L\'email di attivazione &egrave; stata inviata. Per favore verifica la tua casella email per attivare il tuo account.',
// Resend Activation - END

	'Bots_Group' => 'Bots',
	'Bots_Color' => 'Bots Color',
	'Active_Users_Group' => 'Utenti Attivi',
	'Active_Users_Color' => 'Colore Utenti Attivi',
	'Group_Default_Membership' => 'Gruppo Predefinito',
	'Group_Default_Membership_Explain' => 'Scegliere il gruppo predefinito per l\'utente per l\'assegnazione di livello e colore',
	'User_Color' => 'Colore Utente',
	'User_Color_Explain' => 'Scegliendo un colore per questo utente verr&agrave; utilizzato solo se non viene specificato alcun gruppo predefinito nella casella qui sopra (utilizza il codice esadecimale senza il carattere <b>#</b> ad esempio: ff0000 per il colore rosso)',
	'No_Groups_Membership' => 'Non Iscritto A Gruppi',
	'No_Default_Group' => 'No Gruppo Di Default',
	'Group_members_updated' => 'Informazioni membri aggiornate correttamente.',
	'Colorize_All' => 'Colora Tutti',
	'Colorize_Selected' => 'Colora Selezionati',

	'CompanyWho' => 'Chi Siamo',
	'CompanyWhere' => 'Dove Siamo',
	'CompanyServices' => 'I Servizi',
	'CompanyProducts' => 'I Prodotti',

	'ShareThisTopic' => 'Condividi Argomento',

	'Remove_cookies' => 'Elimina Cookies',
	'Cookies_deleted' => 'I cookies sono stati eliminati ed ora non sei pi&ugrave; connesso.<br />Per completare l\'eliminazione devi anche riavviare il tuo browser.',
	'Delete_cookies' => 'Elimina Cookies',
	'cookies_confirm' => 'Sei sicuro di voler eliminare tutti i cookies impostati da questo sito?<br /><br />Questa operazione comporter&agrave; anche la disconnessione dal sito.',

	'CustomIcy' => 'CustomIcy',

	'Drafts' => 'Bozze',
	'Drafts_Action' => 'Azione',
	'Drafts_Save' => 'Salva',
	'Drafts_Load' => 'Carica',
	'Drafts_Saved' => 'Questo messaggio &egrave; stato salvato nelle bozze',
	'Drafts_Loaded' => 'Bozza caricata',
	'Drafts_No_Drafts' => 'Nessuna bozza salvata',
	'Drafts_Delete_Sel' => 'Elimina selezionati',
	'Drafts_Save_Question' => '<br /><br />Sei sicuro di voler salvare il messaggio come bozza?<br /><br />Solo il testo del messaggio verr&agrave; salvato: tutte le altre impostazioni saranno perse.',
	'Drafts_Delete_Question' => '<br /><br />Sei sicuro di voler eliminare le bozze selezionate?',
	'Drafts_Type' => 'Tipo Bozza',
	'Drafts_Subject' => 'Titolo Bozza',
	'Drafts_NT' => 'Nuovo Argomento',
	'Drafts_NM' => 'Risposta',
	'Drafts_NPM' => 'Messaggio Privato',

	'CannotEditAdminsPosts' => 'Non puoi modificare i messaggi degli amministratori',
	'Random_Number' => 'Numero Casuale',

	'New_download' => '&Egrave; stato inserito o aggiornato un download.<br />Clicca %sQUI%s per visualizzarlo.',
	'Dl_bug_tracker' => 'Bug Tracker',
	'Downloads_ADV' => 'Downloads ADV',

	'TopicUseful' => 'Questo argomento &egrave; stato utile?',
	'Article' => 'Articolo',
	'Comments' => 'Commenti',

	'Sitemap' => 'Mappa Sito',

	'Delete_My_Account' => 'Eliminazione Account',
	'Delete_My_Account_Explain' => 'Se vuoi eliminare il tuo account su questo sito invia una richiesta tramite questo modulo ed il tuo account verr&agrave; disabilitato al pi&ugrave; presto.<br />Per favore specificare nell\'oggetto dell\'email "Eliminazione Account" e (se lo ritieni opportuno) le ragioni per cui vuoi che il tuo account venga eliminato.',

	'KB_MODE_ON' => 'Attiva versione KB',
	'KB_MODE_OFF' => 'Disattiva versione KB',

	'Go_To_Page_Number' => 'Vai a pagina',

	'Admin_Emails' => 'Gli amministratori possono inviarmi email di gruppo',
	'Allow_PM_IN' => 'Consenti agli utenti di inviarmi messaggi privati',
	'Allow_PM_IN_Explain' => 'Nota che sistema, amministratori, moderatori ed amici potranno inviarti messaggi privati in ogni caso.',
	'Allow_PM_IN_SEND_ERROR' => 'L\'utente a cui stai cercando di inviare il Messaggio Privato non pu&ograve; ricevere il tuo messaggio perch&egrave; ha scelto di non ricevere Messaggi Privati.',

	//'UCP_ZEBRA' => 'Amici &amp; Ignorati',
	'UCP_ZEBRA' => 'Gestione Amici',
	'UCP_ZEBRA_FOES' => 'Gestisci Ignorati',
	'UCP_ZEBRA_FRIENDS' => 'Gestisci Amici',

	'ADD_FOES' => 'Aggiungi Ignorati',
	'ADD_FOES_EXPLAIN' => 'Puoi inserire diversi nomi utente ognuno per singola riga.',
	'YOUR_FOES' => 'I tuoi ignorati',
	'YOUR_FOES_EXPLAIN' => 'Per rimuovere degli utenti selezionali e clicca su invia.<br />Consiglio: usa CTRL per selezionare/deselezionare pi&ugrave; di un elemento.',
	'FOE_MESSAGE' => 'Messaggio da un utente ignorato',
	'FOES_EXPLAIN' => 'Gli utenti Ignorati sono quegli utenti che verranno ignorati come opzione predefinita. I messaggi di questi utenti non saranno visibili. I messaggi privati sono comunque consentiti. Nota che non possono essere ignorati moderatori o amministratori.',
	'FOES_UPDATED' => 'La lista Ignorati &egrave; stata aggiornata correttamente.',
	'FOES_UPDATE_ERROR' => 'La lista Ignorati NON &egrave; stata aggiornata.',
	'NO_FOES' => 'Nessun utente Ignorato',

	'ADD_FRIENDS' => 'Aggiungi Amico',
	'ADD_FRIENDS_EXPLAIN' => 'Puoi inserire diversi nomi utente ognuno per singola riga.',
	'YOUR_FRIENDS' => 'I tuoi amici',
	'YOUR_FRIENDS_EXPLAIN' => 'Per rimuovere degli utenti selezionali e clicca su invia.<br />Consiglio: usa CTRL per selezionare/deselezionare pi&ugrave; di un elemento.',
	'FRIEND_MESSAGE' => 'Messaggio da un utente amico',
	'FRIENDS' => 'Amici',
	'FRIENDS_EXPLAIN' => 'Gli utenti Amici sono quegli utenti con cui comunichi di frequente.',
	'FRIENDS_UPDATED' => 'La lista Amici &egrave; stata aggiornata correttamente.',
	'FRIENDS_UPDATE_ERROR' => 'La lista Amici NON &egrave; stata aggiornata.',
	'FRIENDS_ONLINE' => 'Online',
	'FRIENDS_HIDDEN' => 'Nascosti',
	'FRIENDS_OFFLINE' => 'Offline',
	'NO_FRIENDS' => 'Nessun utente Amico',
	'NO_FRIENDS_OFFLINE' => 'Nessun amico offline',
	'NO_FRIENDS_ONLINE' => 'Nessun amico online',

	'Default' => 'Predefinito',

	'Reserved_Author' => '[ NASCOSTO ]',
	'Reserved_Topic' => '[ ARGOMENTO RISERVATO ]',
	'Reserved_Post' => '[ MESSAGGIO RISERVATO ]',

	'THANKS_RECEIVED' => 'Ringraziamenti ricevuti',

	'RECENT_USER_ACTIVITY' => 'Attivit&agrave; recenti',
	'USER_TOPICS_STARTED' => 'Argomenti aperti',
	'USER_POSTS' => 'Messaggi inviati',
	'USER_TOPICS_VIEWS' => 'Argomenti visitati',
	'RECENT_USER_STARTED_TITLE' => 'aperti da %s',
	'RECENT_USER_STARTED_NAV' => 'Argomenti aperti da %s',
	'RECENT_USER_POSTS_TITLE' => 'in cui %s ha partecipato',
	'RECENT_USER_POSTS_NAV' => 'Argomenti in cui %s ha partecipato',
	'RECENT_USER_VIEWS_TITLE' => 'visitati da %s',
	'RECENT_USER_VIEWS_NAV' => 'Argomenti visitati da %s',

	'WARN_NO_BUMP' => 'Sei stata l\'ultima persona a scrivere in questo argomento: non puoi inviare nuovi messaggi fino a che non sia passato un giorno dal tuo ultimo messaggio o fino a che qualcun altro non risponda nel frattempo.',

	'LINK_THIS_TOPIC' => 'Inserisci un link per questo argomento',
	'LINK_URL' => 'URL',
	'LINK_BBCODE' => 'BBCode',
	'LINK_HTML' => 'HTML',

	'NEWS_POSTED' => 'Mostra le news',
	'TOPICS_POSTED' => 'Cerca gli argomenti aperti',
	'POSTS_POSTED' => 'Cerca tutti i messaggi',

	'ACCOUNT_DELETION_REQUEST' => 'L\'utente %s ha richiesto la cancellazione del proprio account.',

	'SORT_TOPICS' => 'Ordina Argomenti',
	'SORT_TOPICS_NEWEST' => 'Pi&ugrave; Recenti',
	'SORT_TOPICS_OLDEST' => 'Pi&ugrave; Vecchi',

	'EDIT_POST_DETAILS' => 'Modifica Dettagli Messaggio',
	'CURRENT_POSTER' => 'Autore Corrente',
	'NEW_POSTER' => 'Nuovo Autore',
	'DETAILS_CHANGED' => '<b>Dettagli messaggio aggiornati correttamente.</b></span><br /><span class="postdetails">Questa finestra si chiuder&agrave; in 3 secondi.',

	'Redirect' => 'Reindirizzamento',
	'Redirect_to' => 'Se il vostro browser non supporta le il reindirizzamento via meta tags clicca %sQUI%s per accedere al link',

	'InProgress' => 'In corso',

	'HAPPY_BIRTHDAY' => 'Buon Compleanno',

	'DOWNLOAD' => 'Scarica',
	'DOWNLOADED' => 'Scaricato',
	'FILESIZE' => 'Dimensione',
	'FILENAME' => 'Nome file',
	'FILE_NOT_AUTH' => 'Non hai i permessi sufficienti per scaricare il file',

	'SHOW_POSTS_FROM' => 'Mostra messaggi da',
	'SHOW_POSTS_TO' => 'a',

	'SEE_MORE_DETAILS' => 'See more details...',

	'UNKNOWN' => 'Sconosciuto',

	'MASS_PM' => 'MP Globale',
	'TEXT_FORMAT' => 'Formato',
	'SENDER' => 'Mittente',
	'PM_NOTIFICATION' => 'Ciao,<br /><br />hai ricevuto un messaggio privato sul sito "{SITENAME}".<br /><br />Puoi visualizzare il messaggio cliccando sul link seguente:<br /><br />{U_INBOX}<br /><br />',

	'GSEARCH' => 'Ricerca Google',
	'GSEARCH_ENGINE' => 'Ricerca Utilizzando Il Motore Google',
	'SEARCH_WHAT' => 'Cerca cosa',
	'SEARCH_WHERE' => 'Cerca in',
	'SEARCH_THIS_FORUM' => 'Cerca in questa categoria',
	'SEARCH_THIS_TOPIC' => 'Cerca in questo argomento',
	'VF_ALL_TOPICS' => 'Tutti Gli Argomenti',

	'WHITE_LIST_MESSAGE' => 'Questo sito richiede la conferma della registrazione tramite email, per favore controlla che questo dominio sia tra i domini consentiti, altrimenti a causa dei filtri antispam potresti non ricevere l\'email per attivare il tuo account.',

	'CLICK_RETURN_HOME' => 'Clicca %sQUI%s per ritornare alla Home Page',

	'RATINGS' => 'Valutazioni',

	'ERROR_TABLE' => 'Could not query %s table',

	'SMILEYS' => 'Smileys',
	'SMILEYS_NO_CATEGORIES' => 'Nessuna categoria creata',
	'SMILEYS_CATEGORY' => 'Categoria',
	'SMILEYS_GALLERY' => 'Galleria Smileys',
	'SMILEYS_STANDARD' => 'Smileys Standard',

	'QUICK_LIST' => 'Elenco Completo',
	'NORMAL_LIST' => 'Elenco Standard',

	'RETURN_PAGE' => '%sTorna alla pagina precedente%s',
	'FILE_NOT_FOUND' => 'File non trovato',
	'FSOCK_DISABLED' => 'FSOCK Disabilitato',

	'MANAGEMENT' => 'Gestione',
	'SORT_ORDER' => 'Ordina per',
	'SORT_DIR' => 'Ordinamento',

	'CONTACTS' => 'Contatti',

// Event Registration - BEGIN
	'Reg_Title' => 'Registrazione Eventi',
	'Post_Registration' => 'Registrazione Eventi',
	'Add_registration' => 'Aggiungi Registrazione Eventi',
	'Add_reg_explain' => '&nbsp;&bull; Contrassegna <i>Attiva</i> per mostrare un modulo di registrazione in questo messaggio. Togli il contrassegno per nascondere il modulo di registrazione.<br />&nbsp;&bull; Contrassegna <i>Azzera</i> per cancellare tutte le registrazioni effettuate.<br />&nbsp;&bull; Inserisci un numero negli <i>Spazi</i> per limitare le registrazioni per ciascuna opzione. "0" o vuoto = illimitate.',
	'reg_activate' => 'Attiva',
	'reg_reset' => 'Azzera',
	'Reg_Insert' => 'Ti sei registrato per l\'evento.',
	'Reg_Change' => 'Registrazione modificata.',
	'Reg_Confirm' => 'Registrazione confermata.',
	'Reg_Unregister' => 'Registrazione annullata.',
	'Reg_Max_Registrations' => 'E\' stato raggiunto il numero massimo di registrazioni per questa opzione. Non verranno accettate nuove registrazioni.',
	'Reg_No_Slots_Left' => 'Non ci sono posti disponibili.',
	'Reg_One_Slot_Left' => 'Un solo posto disponibile.',
	'Reg_Slots_Left' => '%s posti disponibili.',
	'Reg_Self_Unregister' => 'Cancella Registrazione',
	'Reg_Own_Confirmation' => 'Conferma',
	'Reg_Own_Confirmed' => 'confermata',
	'Reg_Green_Option' => 'Opzione Verde',
	'Reg_Blue_Option' => 'Opzione Blu',
	'Reg_Red_Option' => 'Opzione Rossa',
	'Reg_Value_Max_Registrations' => 'Posti',
	'Reg_Do' => 'Partecipo',
	'Reg_Maybe' => 'Incerto',
	'Reg_Dont' => 'Non Partecipo',
	'Reg_Head_Username' => 'Utente:',
	'Reg_Head_Time' => 'Data:',
	'Reg_for' => 'Inizia registrazioni per',
	'Reg_for_explain' => '[ Inserisci 0 o lascia vuoto il campo per registrazioni senza limiti di tempo ]',
	'Reg_no_options_specified' => 'Devi specificare almeo un\'opzione di registrazione.',
	'Reg_event_date' => '<b>Data evento: </b>',
// Event Registration - END

	'REPLY_PREFIX_OLD' => 'Re: ',
	'REPLY_PREFIX' => 'Re: ',

	'READ_ONLY_FORUM' => 'Ci dispiace, ma il forum &egrave; impostato in modalit&agrave; <b>SOLA LETTURA</b> per cui al momento non puoi inviare messaggi. Per favore riprova pi&ugrave; tardi.',

// Tickets Submission - BEGIN
	'TICKET_CAT' => 'Categoria',
// Tickets Submission - END

	'LIMIT_EDIT_TIME_WARN' => 'Attenzione, purtroppo in questo forum puoi modificare i messaggi solo entro <b>%d</b> minuti dall\'invio.',
	'CLEAN_NAME' => 'Nome Regolare',
	'CLEAN_NAME_EXPLAIN' => 'Consentiti solo caratteri alfanumerici e trattini',
	'TOPIC_TAGS' => 'Tags E Parole Chiave',
	'TOPIC_TAGS_EXPLAIN' => 'Inserire ogni tag separato da virgola',
	'TOPIC_TAGS_CLOUDS' => 'Tags E Parole Chiave Nuvola',
	'TOPIC_TAGS_LIST' => 'Tags E Parole Chiave Lista',
	'TAG_COUNT' => 'Contatore',
	'TAG_TEXT' => 'Tag',
	'TAGS_TEXT' => 'Tags',
	'TAG_RESULTS' => 'Tag selezionato: <b>%s</b>',
	'TAGS_SEARCH' => 'Cerca un tag...',
	'TAGS_SEARCH_NO_RESULTS' => 'Nessun tag trovato!',
	'TAGS_NO_TAGS' => 'Nessun tag creato',
	'TAGS_NO_TAG' => 'Il tag richiesto non esiste',

	'SQL_ERROR_OCCURRED' => 'Questa pagina contiene degli errori SQL. Per cortesia contatta l\'amministratore del sito se il problema persiste.',

	'PLUGIN_DISABLED' => 'Questa funzionalit&agrave; &egrave; disattivata.',

	'AJAX_SHOUTBOX' => 'Chat',
	'AJAX_SHOUTBOX_PVT' => 'Chat Privata',
	'AJAX_SHOUTBOX_PVT_LINK' => 'Chat privata con questo utente',
	'AJAX_SHOUTBOX_PVT_ALERT' => 'Hai una richiesta di Chat Privata',

	// COMMON DB - BEGIN
	'SELECT_SORT_METHOD' => 'Ordina per',
	'ORDER' => 'Ordinamento',
	'DATE' => 'Data',
	'USERID' => 'ID Utente',
	'USERNAME' => 'Utente',
	'EMAIL' => 'Email',
	'WEBSITE' => 'Sito Web',
	'EDIT' => 'Modifica',
	'DELETE' => 'Elimina',
	'YES' => 'Si',
	'NO' => 'No',

	'DB_ITEM_VIEW' => 'Mostra Elemento',
	'DB_ITEM_UPDATED' => 'Elemento aggiornato correttamente',
	'DB_ITEM_ADD' => 'Aggiungi Elemento',
	'DB_ITEM_ADDED' => 'Elemento aggiunto correttamente',
	'DB_ITEM_REMOVED' => 'Elemento rimosso correttamente',
	'DB_ITEM_NO_ITEMS' => 'Nessun Elemento',
	'DB_ITEM_CLICK_VIEW_ITEM' => 'Clicca %sQUI%s per visualizzare i dati inseriti',
	'DB_ITEM_CLICK_RETURN_ITEMS' => 'Clicca %sQUI%s per tornare alla lista',
	// COMMON DB - END

	'LOGIN_ATTEMPTS_EXCEEDED' => 'Il numero massimo di %s tentativi di login consentiti sono stati superati. Potrai riprovare tra %s minuti.',
	'LOGIN_CONFIRM_EXPLAIN' => 'Dopo un numero massimo di tentativi di accesso falliti verr&agrave; richiesto l\'inserimento di un codice di conferma. Questo serve a prevenire accessi non autorizzati. Il codice &egrave; visualizzato nell\'immagine sottostante. Se l\'immmagine non compare o se hai problemi di visualizzazione, conttatta un %sAmministratore%s.',
	'LOGIN_ERROR_ATTEMPTS' => 'Hai superato il numero massimo di tentativi di accesso. In aggiunta ai dati nome utente e password dovrai inserire anche il codice di conferma che leggi nell\'immagine sottostante.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE' => 'Non sei stato riconosciuto da Apache.',
	'LOGIN_ERROR_PASSWORD' => 'La password inserita non &egrave; corretta, fai un altro tentativo. Se il problema persiste contatta un %sAmministratore%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT' => 'Non &egrave; stato possibile convertire la tua password al momento dell\'aggiornamento del software di questo sito. %sRichiedi una nuova password%s. Se il problema persiste contatta un %samministratore%s.',
	'LOGIN_ERROR_USERNAME' => 'Il nome utente inserito non &egrave; corretto, fai un\'altro tentativo. Se il problema persiste contatta un %sAmministratore%s.',
	'NO_PASSWORD_SUPPLIED' => 'Non puoi accedere senza inserire una password.',
	'ACTIVE_ERROR' => 'L\'username inserito risulta ancora inattivo. Se riscontri problemi nell\'attivazione dell\'account contatta un %sAmministratore%s.',

	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',
	'GB' => 'GB',

	'NO_EVENTS' => 'Nessun evento pianificato',
	'EVENT_START_DATE' => 'Data Inizio',
	'EVENT_START_TIME' => 'Ora Inizio',
	'EVENT_END_DATE' => 'Data Fine',
	'EVENT_END_TIME' => 'Ora Fine',
	'EVENT_TITLE' => 'Evento',
	'EVENT_FORUM' => 'Categoria',

	'MAX_OPTIONS_SELECT' => 'Puoi scegliere fino a <strong>%d</strong> opzioni',
	'MAX_OPTION_SELECT' => 'Puoi usare <strong>1</strong> opzione',
	'NO_POLLS' => 'Nessun Sondaggio',
	'NO_VOTE_OPTION' => 'Devi selezionare un\'opzione per votare.',
	'NO_VOTES' => 'Nessun voto',
	'POLL_ENDED_AT' => 'Sondaggio concluso il %s',
	'POLL_MAX_OPTIONS' => 'Numero opzioni',
	'POLL_MAX_OPTIONS_EXPLAIN' => 'Numero massimo di opzioni selezionabili',
	'POLL_NO_GUESTS' => 'Siamo spiacenti, ma gli ospiti non possono votare',
	'POLL_RUN_TILL' => 'Il sondaggio termina il %s',
	'POLL_VOTE_CHANGE' => 'Consenti variazione voto',
	'POLL_VOTED_OPTION' => 'Hai votato questa opzione',
	'TOO_MANY_VOTE_OPTIONS' => 'Stai tentando di votare con troppe ozioni.',
	'VIEW_POLL' => 'Visualizza Sondaggio',
	'VOTE_SUBMITTED' => 'Il tuo voto &egrave; stato registrato.',
	'VOTE_CONVERTED' => 'Non &egrave; supportato il cambio voto per sondaggi convertiti.',

	'FORM_INVALID' => 'Il form inviato non è valido. Prova a inviarlo di nuovo.',

	'NO_USERS_FOUND' => 'Nessun utente trovato',
	'POST_IP' => 'Indirizzo IP',
	'FIND_USERNAME' => 'Ricerca avanzata',
	'FIND_USERNAME_HIDE' => 'Nascondi modulo &quot;Ricerca avanzata&quot;',
	'FIND_USERNAME_EXPLAIN' => 'Usa questo modulo per cercare gli utenti. Non è necessario compilare tutti i campi. Per ricerche parziali è permesso l’utilizzo del carattere *. Come formato della data utilizzare il seguente <kbd>DD-MM-YYYY</kbd>, es. <samp>29-02-2004</samp>. Selezionare uno o più nomi utenti e clicca sul pulsante di conferma per tornare al modulo precedente.',

	'AUTH_NONE' => 'NESSUNO',
	'AUTH_ALL' => 'TUTTI',
	'AUTH_REG' => 'REG',
	'AUTH_SELF' => 'PROPRI',
	'AUTH_PRIVATE' => 'PRIVATO',
	'AUTH_MOD' => 'MOD',
	'AUTH_JADMIN' => 'J ADMIN',
	'AUTH_ADMIN' => 'ADMIN',

	'SHARE' => 'Condividi',
	'LIKE' => 'Mi piace',
	'UNLIKE' => 'Rimuovi apprezzamento',
	'LIKE_POST' => 'Mi piace questo messaggio',
	'UNLIKE_POST' => 'Rimuovi apprezzamento a questo messaggio',
	'LIKE_TIME' => 'Data',
	'LIKE_RECAP' => 'Utenti a cui piace questo messaggio',
	'LIKE_COUNTER_YOU' => 'Hai apprezzato questo messaggio',
	'LIKE_COUNTER_YOU_OTHERS_SINGLE' => 'Tu e %s utente avete apprezzato questo messaggio',
	'LIKE_COUNTER_YOU_OTHERS' => 'Tu e %s utenti avete apprezzato questo messaggio',
	'LIKE_COUNTER_OTHERS' => '%s utenti hanno apprezzato questo messaggio',
	'LIKE_COUNTER_OTHERS_SINGLE' => '%s utente ha apprezzato questo messaggio',

	'FRIENDSHIP_STATUS' => 'Stato amicizia',
	'FRIEND_ADD' => 'Aggiungi come amico',
	'FRIEND_REMOVE' => 'Rimuovi amicizia',
	'FOE_ADD' => 'Aggiungi alla lista ignorati',
	'FOE_REMOVE' => 'Rimuovi dalla lista ignorati',

	'SOCIAL_NETWORKS' => 'Social Networks',
	'USER_FIRST_NAME' => 'Nome',
	'USER_LAST_NAME' => 'Cognome',
	'FACEBOOK' => 'Facebook',
	'TWITTER' => 'Twitter',

	'INACTIVE_USER' => 'Utente Inattivo',
	'SEARCH_MIN_CHARS' => 'Devi inserire almeno %s caratteri per poter effettuare la ricerca.',

	'EXTRA_STATS_SHOW' => 'Mostra Statistiche Avanzate',
	'EXTRA_STATS_HIDE' => 'Nascondi Statistiche Avanzate',
	'RESERVED' => 'Riservata',

	'VIEW_TOPICS_DAYS' => 'Visualizza argomenti dei giorni scorsi',
	'VIEW_TOPICS_DIR' => 'Ordinameto argomenti per',
	'VIEW_TOPICS_KEY' => 'Direzione ordinamento argomenti',
	'VIEW_POSTS_DAYS' => 'Visualizza messaggi dei giorni scorsi',
	'VIEW_POSTS_DIR' => 'Ordinameto messaggi per',
	'VIEW_POSTS_KEY' => 'Direzione ordinamento messaggi',

	'AUTHOR' => 'Autore',
	'POST_TIME' => 'Data',
	'REPLIES' => 'Risposte',
	'SUBJECT' => 'Titolo',
	'VIEWS' => 'Visite',

	'INVALID' => 'Valore non valido.',
	'TOO_LARGE' => 'Il valore inserito &egrave; troppo grande.',
	'TOO_LONG' => 'Il valore inserito &egrave; troppo lungo.',
	'TOO_SHORT' => 'Il valore inserito &egrave; troppo corto.',
	'TOO_SMALL' => 'Il valore inserito &egrave; troppo piccolo.',
	'WRONG_DATA' => 'Valore non valido.',

	'ATTACHMENTS' => 'Allegati',
	'ERROR_NO_ATTACHMENT' => 'Il file richiesto non esiste.',
	'NO_FORUM' => 'Il Forum selezionato non esiste.',
	'NO_TOPIC' => 'L\'argomento o il messaggio che hai richiesto non esiste.',
	'NO_USER' => 'L\'Utente non esiste.',

	'AJAX_SEARCH' => 'Cerca...',

	'FLICKR' => 'Flickr',
	'GOOGLEPLUS' => 'Google Plus',
	'LINKEDIN' => 'LinkedIn',
	'YOUTUBE' => 'YouTube',

	'MOBILE_STYLE_ENABLE' => 'Attiva Mobile Style',
	'MOBILE_STYLE_DISABLE' => 'Disattiva Mobile Style',

	'INVALID_SESSION' => 'Sessione non valida, se il problema persiste contattare un amministratore.',

	'BACK_TO_TOP' => 'Torna Su',
	'BACK_TO_PREV' => 'Torna alla pagina precedente',

	'CMS_EDIT_PARENT_BLOCK' => 'Modifica Blocco Base',

	'UPI2DB_DISABLED' => 'UPI2DB Disattivato',
	'UPI2DB_LINK_U' => 'UPI2DB Non Letti',
	'UPI2DB_LINK_M' => 'UPI2DB Segnati',
	'UPI2DB_LINK_P' => 'UPI2DB Permanentemente Letti',
	'UPI2DB_LINK_FULL' => 'UPI2DB Info Completa',
	'NEW_POSTS_LINK' => 'Nuovi Messaggi',
	'LOGIN_LOGOUT_LINK' => 'Login/Logout',
	'MENU_EMPTY_LINK' => 'Link Vuoto',

	'IP_BLACKLISTED' => 'Il tuo IP %s &egrave; stato bloccato perch&eacute; incluso in blacklist pubbliche. Per maggiori dettagli <a href="%s">%s</a>.',

	'PRINTABLE_VERSION' => 'Versione Stampabile',
	'CHANGE_FONT_SIZE' => 'Cambia Dimensione Font',
	'CHANGE_PAGE_SIZE' => 'Cambia Dimensione Pagina',

	'FULL_EDITOR' => 'Editor Completo',

	'SN_SHOW_POSTS' => 'Mostra testo messaggi',
	'SN_SHOW_TOPICS' => 'Mostra solo argomenti',

	'NOT_LOGGED_IN_VIEW_PAGE' => 'Devi aver effettuato il login per visualizzare questa pagina.',

	'TAGS_SEARCH_REPLACE' => 'Sostituisci Tags',
	'TAGS_SEARCH_REPLACE_SRC' => 'Tag da sostituire',
	'TAGS_SEARCH_REPLACE_TGT' => 'Nuovo Tag',
	'TAGS_SEARCH_REPLACE_RESULT' => '%s Tags sono stati sostituiti',

	'UNABLE_TO_UPLOAD_AVATAR' => 'Impossibile caricare l\'immagine, accertati che non sia troppo grande e del formato consentito.',

	)
);

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

$lang['Prune_commands'] = array();
// here you can make more entries if needed
$lang['Prune_commands'][0] = 'Elimina gli utenti che non hanno mai inviato messaggi';
$lang['Prune_explain'][0] = 'Coloro che non hanno mai inviato messaggi, <b>esclusi</b> i nuovi utenti degli ultimi %d giorni';
$lang['Prune_commands'][1] = 'Elimina gli utenti inattivi';
$lang['Prune_explain'][1] = 'Coloro che non hanno mai effettuato il login, <b>esclusi</b> i nuovi utenti degli ultimi %d giorni';
$lang['Prune_commands'][2] = 'Elimina gli utenti che non hanno effettuato l\'attivazione';
$lang['Prune_explain'][2] = 'Coloro che non hanno mai effettuato l\'attivazione, <b>esclusi</b> i nuovi utenti degli ultimi %d giorni';
$lang['Prune_commands'][3] = 'Elimina gli utenti che non hanno effettuato visite';
$lang['Prune_explain'][3] = 'Coloro che non hanno effettuato visite negli ultimi 60 giorni, <b>esclusi</b> i nuovi utenti degli ultimi %d giorni';
$lang['Prune_commands'][4] = 'Elimina gli utenti che non inviano spesso messaggi';
$lang['Prune_explain'][4] = 'Coloro che hanno una media di messaggi inferiore ad 1 ogni 10 giorni da quando sono registrati, <b>esclusi</b> i nuovi utenti degli ultimi %d giorni';
$lang['Prune_commands'][5] = 'Elimina gli utenti che non hanno mai scritto e non visitato recentemente';
$lang['Prune_explain'][5] = 'Coloro che non hanno mai scritto e non hanno visitato recentemente, <b>esclusi</b> i nuovi utenti degli ultimi %d giorni';

// Timezones - BEGIN
$lang['All_times'] = 'Tutti i fusi orari sono %s'; // eg. All times are GMT - 12 Hours (times from next block)

// Time zones short
$lang['tz'] = array(
	'-12' => 'UTC - 12 Ore',
	'-11' => 'UTC - 11 Ore',
	'-10' => 'UTC - 10 Ore',
	'-9.5' => 'UTC - 9:30 Ore',
	'-9' => 'UTC - 9 Ore',
	'-8' => 'UTC - 8 Ore',
	'-7' => 'UTC - 7 Ore',
	'-6' => 'UTC - 6 Ore',
	'-5' => 'UTC - 5 Ore',
	'-4.5' => 'UTC - 4:30 Ore',
	'-4' => 'UTC - 4 Ore',
	'-3.5' => 'UTC - 3:30 Ore',
	'-3' => 'UTC - 3 Ore',
	'-2' => 'UTC - 2 Ore',
	'-1' => 'UTC - 1 Ora',
	'0' => 'UTC',
	'1' => 'UTC + 1 Ora',
	'2' => 'UTC + 2 Ore',
	'3' => 'UTC + 3 Ore',
	'3.5' => 'UTC + 3:30 Ore',
	'4' => 'UTC + 4 Ore',
	'4.5' => 'UTC + 4:30 Ore',
	'5' => 'UTC + 5 Ore',
	'5.5' => 'UTC + 5:30 Ore',
	'5.75' => 'UTC + 5:45 Ore',
	'6' => 'UTC + 6 Ore',
	'6.5' => 'UTC + 6:30 Ore',
	'7' => 'UTC + 7 Ore',
	'8' => 'UTC + 8 Ore',
	'8.75' => 'UTC + 8:45 Ore',
	'9' => 'UTC + 9 Ore',
	'9.5' => 'UTC + 9:30 Ore',
	'10' => 'UTC + 10 Ore',
	'10.5' => 'UTC + 10:30 Ore',
	'11' => 'UTC + 11 Ore',
	'11.5' => 'UTC + 11:30 Ore',
	'12' => 'UTC + 12 Ore',
	'12.75' => 'UTC + 12:45 Ore',
	'13' => 'UTC + 13 Ore',
	'14' => 'UTC + 14 Ore',
	'dst' => '[ <abbr title="Daylight Saving Time">DST</abbr> ]',
);

// These are displayed in the timezone select box
$lang['tz_zones'] = array(
	'-12' => '[UTC - 12] Baker Island Time',
	'-11' => '[UTC - 11] Niue Time, Samoa Standard Time',
	'-10' => '[UTC - 10] Hawaii-Aleutian Standard Time, Cook Island Time',
	'-9.5' => '[UTC - 9:30] Marquesas Islands Time',
	'-9' => '[UTC - 9] Alaska Standard Time, Gambier Island Time',
	'-8' => '[UTC - 8] Pacific Standard Time',
	'-7' => '[UTC - 7] Mountain Standard Time',
	'-6' => '[UTC - 6] Central Standard Time',
	'-5' => '[UTC - 5] Eastern Standard Time',
	'-4.5' => '[UTC - 4:30] Venezuelan Standard Time',
	'-4' => '[UTC - 4] Atlantic Standard Time',
	'-3.5' => '[UTC - 3:30] Newfoundland Standard Time',
	'-3' => '[UTC - 3] Amazon Standard Time, Central Greenland Time',
	'-2' => '[UTC - 2] Fernando de Noronha Time, South Georgia &amp; the South Sandwich Islands Time',
	'-1' => '[UTC - 1] Azores Standard Time, Cape Verde Time, Eastern Greenland Time',
	'0' => '[UTC] Western European Time, Greenwich Mean Time',
	'1' => '[UTC + 1] Central European Time, West African Time',
	'2' => '[UTC + 2] Eastern European Time, Central African Time',
	'3' => '[UTC + 3] Moscow Standard Time, Eastern African Time',
	'3.5' => '[UTC + 3:30] Iran Standard Time',
	'4' => '[UTC + 4] Gulf Standard Time, Samara Standard Time',
	'4.5' => '[UTC + 4:30] Afghanistan Time',
	'5' => '[UTC + 5] Pakistan Standard Time, Yekaterinburg Standard Time',
	'5.5' => '[UTC + 5:30] Indian Standard Time, Sri Lanka Time',
	'5.75' => '[UTC + 5:45] Nepal Time',
	'6' => '[UTC + 6] Bangladesh Time, Bhutan Time, Novosibirsk Standard Time',
	'6.5' => '[UTC + 6:30] Cocos Islands Time, Myanmar Time',
	'7' => '[UTC + 7] Indochina Time, Krasnoyarsk Standard Time',
	'8' => '[UTC + 8] Chinese Standard Time, Australian Western Standard Time, Irkutsk Standard Time',
	'8.75' => '[UTC + 8:45] Southeastern Western Australia Standard Time',
	'9' => '[UTC + 9] Japan Standard Time, Korea Standard Time, Chita Standard Time',
	'9.5' => '[UTC + 9:30] Australian Central Standard Time',
	'10' => '[UTC + 10] Australian Eastern Standard Time, Vladivostok Standard Time',
	'10.5' => '[UTC + 10:30] Lord Howe Standard Time',
	'11' => '[UTC + 11] Solomon Island Time, Magadan Standard Time',
	'11.5' => '[UTC + 11:30] Norfolk Island Time',
	'12' => '[UTC + 12] New Zealand Time, Fiji Time, Kamchatka Standard Time',
	'12.75' => '[UTC + 12:45] Chatham Islands Time',
	'13' => '[UTC + 13] Tonga Time, Phoenix Islands Time',
	'14' => '[UTC + 14] Line Island Time',
);
// Timezones - END

// Dates And Times - BEGIN
$lang = array_merge($lang, array(
	'WEEK_DAY_SUNDAY' => 'Domenica',
	'WEEK_DAY_MONDAY' => 'Luned&igrave,',
	'WEEK_DAY_TUESDAY' => 'Marted&igrave,',
	'WEEK_DAY_WEDNESDAY' => 'Mercoled&igrave,',
	'WEEK_DAY_THURSDAY' => 'Gioved&igrave,',
	'WEEK_DAY_FRIDAY' => 'Venerd&igrave,',
	'WEEK_DAY_SATURDAY' => 'Sabato',

	'TIME_YEAR' => 'Anno',
	'TIME_MONTH' => 'Mese',
	'TIME_DAY' => 'Giorno',
	'TIME_HOUR' => 'Ora',
	'TIME_MINUTE' => 'Minuto',
	'TIME_SECOND' => 'Secondo',

	// The value is only an example and will get replaced by the current time on view
	'dateformats' => array(
		'd M Y, H:i' => '01 Gen 2007, 13:37',
		'd M Y H:i' => '01 Gen 2007 13:37',
		'M jS, \'y, H:i' => 'Gen 1st, \'07, 13:37',
		'D M d, Y g:i a' => 'Lun Gen 01, 2007 1:37 pm',
		'F jS, Y, g:i a' => 'Gennaio 1st, 2007, 1:37 pm',
		'|d M Y|, H:i' => 'Oggi, 13:37 / 01 Gen 2007, 13:37',
		'|F jS, Y|, g:i a' => 'Oggi, 1:37 pm / Gennaio 1st, 2007, 1:37 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat' => 'D M d, Y g:i a', // Lun Gen 01, 2007 1:37 pm

	)
);

$lang['datetime'] = array(
	'TODAY' => 'Oggi',
	'TOMORROW' => 'Domani',
	'YESTERDAY' => 'Ieri',
	'AGO' => array(
		0 => 'meno di un minuto fa',
		1 => '%d minuto fa',
		2 => '%d minuti fa',
		60=> '1 ora fa',
	),

	'Sunday' => 'Domenica',
	'Monday' => 'Luned&igrave;',
	'Tuesday' => 'Marted&igrave;',
	'Wednesday' => 'Mercoled&igrave;',
	'Thursday' => 'Gioved&igrave;',
	'Friday' => 'Venerd&igrave;',
	'Saturday' => 'Sabato',

	'Sun' => 'Dom',
	'Mon' => 'Lun',
	'Tue' => 'Mar',
	'Wed' => 'Mer',
	'Thu' => 'Gio',
	'Fri' => 'Ven',
	'Sat' => 'Sab',

	'SUN_S' => 'Do',
	'MON_S' => 'Lu',
	'TUE_S' => 'Ma',
	'WED_S' => 'Me',
	'THU_S' => 'Gi',
	'FRI_S' => 'Ve',
	'SAT_S' => 'Sa',

	'January' => 'Gennaio',
	'February' => 'Febbraio',
	'March' => 'Marzo',
	'April' => 'Aprile',
	'May' => 'Maggio',
	'June' => 'Giugno',
	'July' => 'Luglio',
	'August' => 'Agosto',
	'September' => 'Settembre',
	'October' => 'Ottobre',
	'November' => 'Novembre',
	'December' => 'Dicembre',

	'JAN' => 'Gen',
	'FEB' => 'Feb',
	'MAR' => 'Mar',
	'APR' => 'Apr',
	'MAY' => 'Mag',
	'JUN' => 'Giu',
	'JUL' => 'Lug',
	'AUG' => 'Ago',
	'SEP' => 'Set',
	'OCT' => 'Ott',
	'NOV' => 'Nov',
	'DEC' => 'Dic',

	'Jan_short' => 'Gen',
	'Feb_short' => 'Feb',
	'Mar_short' => 'Mar',
	'Apr_short' => 'Apr',
	'May_short' => 'Mag',
	'Jun_short' => 'Giu',
	'Jul_short' => 'Lug',
	'Aug_short' => 'Ago',
	'Sep_short' => 'Set',
	'Oct_short' => 'Ott',
	'Nov_short' => 'Nov',
	'Dec_short' => 'Dic',
);

$lang['day_short'] = array($lang['datetime']['Sun'], $lang['datetime']['Mon'], $lang['datetime']['Tue'], $lang['datetime']['Wed'], $lang['datetime']['Thu'], $lang['datetime']['Fri'], $lang['datetime']['Sat']);

$lang['day_long'] = array($lang['datetime']['Sunday'], $lang['datetime']['Monday'], $lang['datetime']['Tuesday'], $lang['datetime']['Wednesday'], $lang['datetime']['Thursday'], $lang['datetime']['Friday'], $lang['datetime']['Saturday']);

$lang['month_short'] = array($lang['datetime']['JAN'], $lang['datetime']['FEB'], $lang['datetime']['MAR'], $lang['datetime']['APR'], $lang['datetime']['MAY'], $lang['datetime']['JUN'], $lang['datetime']['JUL'], $lang['datetime']['AUG'], $lang['datetime']['SEP'], $lang['datetime']['OCT'], $lang['datetime']['NOV'], $lang['datetime']['DEC']);

$lang['month_long'] = array($lang['datetime']['January'], $lang['datetime']['February'], $lang['datetime']['March'], $lang['datetime']['April'], $lang['datetime']['May'], $lang['datetime']['June'], $lang['datetime']['July'], $lang['datetime']['August'], $lang['datetime']['September'], $lang['datetime']['October'], $lang['datetime']['November'], $lang['datetime']['December']);
// Dates And Times - END

//====================================================
// Non inserire niente sotto questa riga, per favore.
//====================================================

?>