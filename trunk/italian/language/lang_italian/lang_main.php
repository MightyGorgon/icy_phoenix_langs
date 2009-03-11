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
<span style="color: #ff5500;"><b>Mighty Gorgon</b></span><br />
<i>(Luca Libralato)</i><br />
<b><i>Developer</i></b><br />
Interests: Heroes Of Might And Magic III, 69, #FF5522<br />
Location: Homer\'s Head<br />
<br />
<br />
<span style="color: #dd2222;"><b>hpl</b></span><br />
<i>(Alessandro Drago)</i><br />
<b><i>Developer</i></b><br />
Interests: CMS, little animals<br />
Location: Global Header<br />
<br />
<br />
<span style="color: #dd2222;"><b>Bicet</b></span><br />
<b><i>phpBB XS Developer</i></b><br />
<br />
<br />
<b><i>Valued Contributors</i></b><br />
<span style="color: #228822;"><b>Andrea75</b></span><br />
<span style="color: #dd2222;"><b>Artie</b></span><br />
<span style="color: #228822;"><b>buldo</b></span><br />
<span style="color: #228822;"><b>casimedicos</b></span><br />
<span style="color: #228822;"><b>Chaotic</b></span><br />
<span style="color: #dd2222;"><b>CyberAlien</b></span><br />
<span style="color: #228822;"><b>difus</b></span><br />
<span style="color: #228822;"><b>fracs</b></span><br />
<span style="color: #800080;"><b>ganesh</b></span><br />
<span style="color: #228822;"><b>JANU1535</b></span><br />
<span style="color: #800080;"><b>jz</b></span><br />
<span style="color: #228822;"><b>KasLimon</b></span><br />
<span style="color: #aaff00;"><b>KugeLSichA</b></span><br />
<span style="color: #0000bb;"><b>Limun</b></span><br />
<span style="color: #228822;"><b>Lopalong</b></span><br />
<span style="color: #228822;"><b>moreteavicar</b></span><br />
<span style="color: #228822;"><b>novice programmer</b></span><br />
<span style="color: #228822;"><b>ThE KuKa</b></span><br />
<span style="color: #ff7700;"><b>TheSteffen</b></span><br />
<span style="color: #0000bb;"><b>Tom</b></span><br />
<span style="color: #228822;"><b>z3d0</b></span><br />
<span style="color: #228822;"><b>Zuker</b></span><br />
<br />
Interests: Icy Phoenix<br />
Location: <a href="http://www.icyphoenix.com/">http://www.icyphoenix.com</a>
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Categoria';
$lang['Topic'] = 'Argomento';
$lang['Topics'] = 'Discussioni';
$lang['Replies'] = 'Risposte';
//$lang['Views'] = 'Consultazioni';
$lang['Views'] = 'Visite';
$lang['Post'] = 'Messaggio';
$lang['Posts'] = 'Messaggi';
$lang['Posted'] = 'Inviato';
$lang['Username'] = 'Username';
$lang['Password'] = 'Password';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Scritto da';
$lang['Author'] = 'Autore';
$lang['Time'] = 'Data';
$lang['Hours'] = 'Ore';
$lang['Message'] = 'Messaggio';

$lang['1_Day'] = '1 Giorno';
$lang['7_Days'] = '7 Giorni';
$lang['2_Weeks'] = '2 Settimane';
$lang['1_Month'] = '1 Mese';
$lang['3_Months'] = '3 Mesi';
$lang['6_Months'] = '6 Mesi';
$lang['1_Year'] = '1 Anno';

$lang['Go'] = 'Vai';
$lang['Jump_to'] = 'Vai a';
$lang['Submit'] = 'Invia';
$lang['Reset'] = 'Annulla';
$lang['Cancel'] = 'Annulla';
$lang['Preview'] = 'Anteprima';
$lang['Confirm'] = 'Conferma';
$lang['Spellcheck'] = 'Controllo Ortografico';
$lang['Yes'] = 'Si';
$lang['No'] = 'No';
$lang['Enabled'] = 'Abilitato';
$lang['Disabled'] = 'Disabilitato';
$lang['Error'] = 'Errore';

$lang['GO'] = 'Vai';
$lang['JUMP_TO'] = 'Vai a';
$lang['SUBMIT'] = 'Invia';
$lang['RESET'] = 'Annulla';
$lang['CANCEL'] = 'Annulla';
$lang['PREVIEW'] = 'Anteprima';
$lang['CONFIRM'] = 'Conferma';
$lang['YES'] = 'Si';
$lang['NO'] = 'No';
$lang['ENABLED'] = 'Abilitato';
$lang['DISABLED'] = 'Disabilitato';
$lang['ERROR'] = 'Errore';

$lang['Next'] = 'Successivo';
$lang['Previous'] = 'Precedente';
$lang['Goto_page'] = 'Vai a';
$lang['Joined'] = 'Registrato';
$lang['IP_Address'] = 'Indirizzo IP';

$lang['Select_forum'] = 'Seleziona Forum';
$lang['View_latest_post'] = 'Leggi gli ultimi Messaggi';
$lang['View_newest_post'] = 'Leggi i nuovi Messaggi';
$lang['Page_of'] = 'Pagina <b>%d</b> di <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ';
$lang['AIM'] = 'Indirizzo AIM';
$lang['MSNM'] = 'MSN Live';
$lang['YIM'] = 'Yahoo Messenger';
$lang['SKYPE'] = 'Skype';

$lang['Forum_Index'] = 'Forum';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Nuova Discussione';
$lang['Reply_to_topic'] = 'Rispondi alla Discussione';
$lang['Reply_with_quote'] = 'Rispondi Citando';

$lang['Click_return_topic'] = '%sTorna alla Discussione%s'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = '%sRitenta Login%s';
$lang['Click_return_forum'] = '%sTorna a Forum%s';
$lang['Click_view_message'] = '%sGuarda il tuo Messaggio%s';
$lang['Click_return_modcp'] = '%sPannello Di Controllo Moderatori%s';
$lang['Click_return_group'] = '%sTorna A Informazioni Gruppo%s';

$lang['Admin_panel'] = 'ACP';

$lang['Board_disabled'] = 'Spiacenti ma il sito al momento non &egrave; disponibile, prova pi&ugrave; tardi.';


// Global Header strings
$lang['Registered_users'] = 'Utenti Registrati:';
$lang['Browsing_forum'] = 'Utenti presenti in questo Forum:';
$lang['Online_users_zero_total'] = 'In totale ci sono <b>0</b> Utenti in linea: ';
$lang['Online_users_total'] = 'In totale ci sono <b>%d</b> Utenti in linea: ';
$lang['Online_user_total'] = 'In totale c\'&egrave; <b>%d</b> Utente in linea: ';
$lang['AC_Online_users_zero_total'] = 'In totale ci sono <b>0</b> Utenti in chat: ';
$lang['AC_Online_users_total'] = 'In totale ci sono <b>%d</b> Utenti in chat: ';
$lang['AC_Online_user_total'] = 'In totale c\'&egrave; <b>1</b> Utente in chat: ';
$lang['Reg_users_zero_total'] = '0 Registrati, ';
$lang['Reg_users_total'] = '%d Registrati, ';
$lang['Reg_user_total'] = '%d Registrato, ';
$lang['Hidden_users_zero_total'] = '0 Nascosti e ';
$lang['Hidden_user_total'] = '%d Nascosto e ';
$lang['Hidden_users_total'] = '%d Nascosti e ';
$lang['Guest_users_zero_total'] = '0 Ospiti';
$lang['Guest_users_total'] = '%d Ospiti';
$lang['Guest_user_total'] = '%d Ospite';
$lang['Record_online_users'] = 'Record Utenti in linea <b>%s</b> in data %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAmministratore%s';
$lang['Mod_online_color'] = '%sModeratore%s';

$lang['You_last_visit'] = 'La tua ultima visita &egrave; stata %s'; // %s replaced by date/time
$lang['Current_time'] = 'La data di oggi &egrave; %s'; // %s replaced by time

$lang['Search_new'] = 'Messaggi non letti';
$lang['Search_your_posts'] = 'Propri messaggi';
$lang['Search_unanswered'] = 'Messaggi senza risposta';

$lang['Register'] = 'Iscriviti';
$lang['Profile'] = 'Profilo';
$lang['Edit_profile'] = 'Modifica il tuo profilo';
$lang['Search'] = 'Cerca';
$lang['Memberlist'] = 'Lista Utenti';
$lang['FAQ'] = 'FAQ';
$lang['KB_title'] = 'Knowledge Base';
$lang['Statistics'] = 'Statistiche';
$lang['BBCode_guide'] = 'Guida BBCode';
$lang['Usergroups'] = 'Gruppi';
$lang['Last_Post'] = 'Ultimo Messaggio';
$lang['Moderator'] = 'Moderatore';
$lang['Moderators'] = 'Moderatori';


// Stats block text
$lang['Posted_articles_zero_total'] = 'Non ci sono Messaggi nel forum'; // Number of posts
$lang['Posted_articles_total'] = 'Ci sono <b>%d</b> Messaggi nel Forum'; // Number of posts
$lang['Posted_article_total'] = 'C\'&egrave; <b>%d</b> Messaggio nel Forum'; // Number of posts
$lang['Registered_users_zero_total'] = 'Abbiamo <b>0</b> Utenti Registrati'; // # registered users
$lang['Registered_users_total'] = 'Abbiamo <b>%d</b> Utenti Registrati'; // # registered users
$lang['Registered_user_total'] = 'Abbiamo <b>%d</b> Utente Registrato'; // # registered users
$lang['Newest_user'] = 'L\'ultimo utente registrato &egrave; <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Non ci sono nuovi messaggi dall\'ultima tua visita';

$lang['No_new_posts_global_announcement'] = 'No Nuovi [ Ann. Globale ]';
$lang['New_posts_global_announcement'] = 'Nuovi [ Ann. Globale ]';
$lang['No_new_posts_announcement'] = 'No Nuovi [ Annuncio ]';
$lang['New_posts_announcement'] = 'Nuovi [ Annuncio ]';
$lang['No_new_posts_sticky'] = 'No Nuovi [ Importante ]';
$lang['New_posts_sticky'] = 'Nuovi [ Importante ]';
$lang['No_new_posts_locked'] = 'No Nuovi [ Chiuso ]';
$lang['New_posts_locked'] = 'Nuovi [ Chiuso ]';
$lang['No_new_posts'] = 'No Nuovi Messaggi';
$lang['New_posts'] = 'Nuovi Messaggi';
$lang['New_post'] = 'Nuovo Messaggio';
$lang['No_new_posts_hot'] = 'No Nuovi [ Popolare ]';
$lang['New_posts_hot'] = 'Nuovi [ Popolare ]';

$lang['Forum_no_new_posts'] = 'No Nuovi Messaggi [Forum]';
$lang['Forum_new_posts'] = 'Nuovi Messaggi [Forum]';
$lang['Cat_no_new_posts'] = 'No Nuovi Messaggi [Categoria]';
$lang['Cat_new_posts'] = 'Nuovi Messaggi [Categoria]';
$lang['Forum_is_locked'] = 'Forum Chiuso';

// Login
$lang['Enter_password'] = 'Inserisci username e password per entrare.';
$lang['Login'] = 'Login';
$lang['Logout'] = 'Logout';

$lang['Forgotten_password'] = 'Ho dimenticato la password';

$lang['AUTOLOGIN'] = 'Login automatico ad ogni visita';

$lang['Error_login'] = 'I dati inseriti non sono corretti.';


// Index page
$lang['No_Posts'] = 'Nessun Messaggio';
$lang['No_forums'] = 'Questo Forum &egrave; vuoto';

$lang['Private_Message'] = 'Messaggio Privato';
$lang['Private_Messages'] = 'Messaggi Privati';
$lang['Who_is_Online'] = 'In Linea';

$lang['Mark_all_forums'] = 'Segna come gi&agrave; letti';
$lang['Forums_marked_read'] = 'Tutti i Forum sono stati segnati come gi&agrave; letti';


// Viewforum
$lang['View_forum'] = 'Guarda Forum';

$lang['Forum_not_exist'] = 'Il Forum selezionato non esiste.';
$lang['Reached_on_error'] = 'Sei arrivato in questa pagina per errore.';

$lang['Display_topics'] = 'Mostra prima gli Argomenti di';
$lang['All_Topics'] = 'Seleziona';

$lang['Topic_News_nb'] = 'News';
$lang['Topic_global_announcement_nb'] ='Annuncio Globale';
$lang['Topic_Announcement_nb'] = 'Annuncio';
$lang['Topic_Sticky_nb'] = 'Importante';
$lang['Topic_Moved_nb'] = 'Spostato';
$lang['Topic_Poll_nb'] = 'Sondaggio';
$lang['Topic_Announcement'] = '<b>Annuncio:</b>';
$lang['Topic_Sticky'] = '<b>Importante:</b>';
$lang['Topic_Moved'] = '<b>Spostato:</b>';
$lang['Topic_Poll'] = '<b>[ Sondaggio ]</b>';
$lang['Topic_global_announcement'] ='<b>Annuncio Globale:</b>';
$lang['Post_global_announcement'] = 'Annuncio Globale';

$lang['Mark_all_topics'] = 'Segna come gi&agrave; letti';
$lang['Topics_marked_read'] = 'Gli Argomenti di questo Forum sono stati segnati come gi&agrave; letti';

$lang['Rules_post_can'] = '<b>Puoi</b> inserire nuovi Argomenti';
$lang['Rules_post_cannot'] = '<b>Non puoi</b> inserire nuovi Argomenti';
$lang['Rules_reply_can'] = '<b>Puoi</b> rispondere ai Messaggi';
$lang['Rules_reply_can_own'] = '<b>Puoi</b> rispondere ai tuoi Argomenti';
$lang['Rules_reply_cannot'] = '<b>Non puoi</b> rispondere ai Messaggi';
$lang['Rules_edit_can'] = '<b>Puoi</b> modificare i tuoi Messaggi';
$lang['Rules_edit_cannot'] = '<b>Non puoi</b> modificare i tuoi Messaggi';
$lang['Rules_delete_can'] = '<b>Puoi</b> cancellare i tuoi Messaggi';
$lang['Rules_delete_cannot'] = '<b>Non puoi</b> cancellare i tuoi Messaggi';
$lang['Rules_vote_can'] = '<b>Puoi</b> votare nei Sondaggi';
$lang['Rules_vote_cannot'] = '<b>Non puoi</b> votare nei Sondaggi';
$lang['Rules_moderate'] = '<b>Puoi</b> %sModerare questo Forum%s'; // %s replaced by a href links, do not remove!

//$lang['No_topics_post_one'] = 'Non ci sono Argomenti in questo Forum.<br />Clicca <b>Inserisci Nuovo Argomento</b> per crearne uno.';
$lang['No_topics_post_one'] = 'Non ci sono Argomenti in questo Forum oppure non ci sono Argomenti che iniziano con la lettera selezionata.<br />Clicca <b>Inserisci Nuovo Argomento</b> per crearne uno o seleziona un\'altra lettera.';


// Viewtopic
$lang['View_topic'] = 'Leggi Argomento';

$lang['Guest'] = 'Ospite';
$lang['Post_subject'] = 'Oggetto';
$lang['View_next_topic'] = 'Successivo';
$lang['View_previous_topic'] = 'Precedente';
$lang['Submit_vote'] = 'Vota';
$lang['View_results'] = 'Guarda i risultati';

$lang['No_newer_topics'] = 'Non ci sono nuovi argomenti in questo forum';
$lang['No_older_topics'] = 'Non ci sono vecchi argomenti in questo forum';
$lang['Topic_post_not_exist'] = 'L\'argomento o il messaggio che hai richiesto non esiste';
$lang['No_posts_topic'] = 'Non ci sono messaggi in questo argomento';

$lang['Display_posts'] = 'Mostra prima i messaggi di';
$lang['All_Posts'] = 'Tutti i messaggi';
$lang['Newest_First'] = 'Nuovi';
$lang['Oldest_First'] = 'Vecchi';

$lang['Back_to_top'] = 'Torna in cima';
$lang['Back_to_bottom'] = 'Vai a fondo pagina';

$lang['Read_profile'] = 'Profilo';
$lang['Send_email'] = 'Invia Email';
$lang['Visit_website'] = 'HomePage';
$lang['ICQ_status'] = 'Stato ICQ';
$lang['Edit_delete_post'] = 'Modifica';
$lang['View_IP'] = 'Mostra indirizzo IP';
$lang['Delete_post'] = 'Cancella Messaggio';

$lang['wrote'] = 'ha scritto'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Citazione'; // comes before bbcode quote output.
$lang['Code'] = 'Codice'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Ultima modifica di %s il %s, modificato %d volta in totale'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Ultima modifica di %s il %s, modificato %d volte in totale'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Chiudi Argomento';
$lang['Unlock_topic'] = 'Apri Argomento';
$lang['Move_topic'] = 'Sposta Argomento';
$lang['Delete_topic'] = 'Cancella Argomento';
$lang['Split_topic'] = 'Dividi Argomento';

$lang['Stop_watching_topic'] = 'Smetti di controllare questo Argomento';
$lang['Start_watching_topic'] = 'Controlla questo Argomento';
$lang['No_longer_watching'] = 'Non stai pi&ugrave; controllando questo Argomento';
$lang['You_are_watching'] = 'Adesso stai controllando questo Argomento';

$lang['Total_votes'] = 'Voti Totali';

// Posting/Replying (Not private messaging!)
$lang['Message_body'] = 'Struttura Messaggio';
$lang['Topic_review'] = 'Revisione Argomento';

$lang['No_post_mode'] = 'Modo di risposta non specificato'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Nuovo Argomento';
$lang['Post_a_reply'] = 'Rispondi';
$lang['Post_topic_as'] = 'Tipo Argomento';
$lang['Edit_Post'] = 'Modifica Messaggio';
$lang['Options'] = 'Opzioni';

$lang['Post_Announcement'] = 'Annuncio';
$lang['Post_Sticky'] = 'Importante';
$lang['Post_Normal'] = 'Normale';

$lang['Confirm_delete'] = 'Sei sicuro di voler cancellare questo Messaggio?';
$lang['Confirm_delete_poll'] = 'Sei sicuro di voler cancellare questo Sondaggio?';

$lang['Flood_Error'] = 'Non puoi inviare un nuovo Messaggio cos&igrave; presto dopo l\'ultimo inserito, attendi un istante e riprova.';
$lang['Empty_subject'] = 'Devi specificare un oggetto quando inserisci un nuovo Argomento.';
$lang['Empty_message'] = 'Devi scrivere un Messaggio per inserirlo.';
$lang['Forum_locked'] = 'Questo Forum &egrave; chiuso: Non puoi inserire, rispondere o modificare gli Argomenti.';
$lang['Topic_locked'] = 'Quest\'Argomento &egrave; chiuso: Non puoi inserire, rispondere o modificare i Messaggi.';
$lang['No_post_id'] = 'Non &egrave; stato specificato nessun ID';
$lang['No_topic_id'] = 'Devi selezionare un Argomento a cui rispondere';
$lang['No_valid_mode'] = 'Puoi solo inviare, rispondere, modificare o citare Messaggi. Torna indietro e prova di nuovo.';
$lang['No_such_post'] = 'Questo Messaggio non esiste. Torna indietro e prova di nuovo.';
$lang['Edit_own_posts'] = 'Puoi modificare solo i tuoi Messaggi.';
$lang['Delete_own_posts'] = 'Puoi cancellare solo i tuoi Messaggi.';
$lang['Cannot_delete_replied'] = 'Non puoi cancellare i Messaggi che hanno una risposta.';
$lang['Cannot_delete_poll'] = 'Non puoi cancellare un Sondaggio attivo.';
$lang['Empty_poll_title'] = 'Devi inserire un titolo per il tuo Sondaggio.';
$lang['To_few_poll_options'] = 'Devi inserire almeno due opzioni per il Sondaggio.';
$lang['To_many_poll_options'] = 'Ci sono troppe opzioni per il Sondaggio.';
$lang['Post_has_no_poll'] = 'Questo Messaggio non ha Sondaggi.';
$lang['Already_voted'] = 'Hai gi&agrave; votato questo Sondaggio.';
$lang['No_vote_option'] = 'Devi specificare un\'opzione quando voti.';

$lang['Add_poll'] = 'Aggiungi Sondaggio';
$lang['Add_poll_explain'] = 'Se non vuoi aggiungere un sondaggio al tuo Argomento lascia vuoti i campi.';
$lang['Poll_question'] = 'Domanda del Sondaggio';
$lang['Poll_option'] = 'Opzione del Sondaggio';
$lang['Add_option'] = 'Aggiungi un\'opzione';
$lang['Update'] = 'Aggiorna';
$lang['Delete'] = 'Cancella';
$lang['Poll_for'] = 'Attiva il sondaggio per';
$lang['Days'] = 'Giorni'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Scrivi 0 o lascia vuoto per un Sondaggio senza fine ]';
$lang['Delete_poll'] = 'Cancella Sondaggio';

$lang['Disable_HTML_post'] = 'Disabilita l\'HTML in questo Messaggio';
$lang['Disable_ACRO_AUTO_post'] = 'Disabilita Acronimi ed Autolinks in questo Messaggio';
$lang['Disable_BBCode_post'] = 'Disabilita i BBCode in questo Messaggio';
$lang['Disable_Smilies_post'] = 'Disabilita gli Smileys in questo Messaggio';

$lang['HTML_is_ON'] = 'HTML <u>ABILITATO</u>';
$lang['HTML_is_OFF'] = 'HTML <u>DISABILITATO</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>ABILITATO</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>DISABILITATO</u>';
$lang['Smilies_are_ON'] = 'Smileys <u>ATTIVATI</u>';
$lang['Smilies_are_OFF'] = 'Smileys <u>DISATTIVATI</u>';

$lang['Attach_signature'] = 'Aggiungi firma (puoi cambiare la firma nel profilo)';
$lang['Notify'] = 'Avvisami quando viene inviata una risposta';
$lang['Delete_post'] = 'Cancella Messaggio';

$lang['Stored'] = 'Il tuo Messaggio &egrave; stato inserito.';
$lang['Deleted'] = 'Il tuo Messaggio &egrave; stato cancellato.';
$lang['Poll_delete'] = 'Il tuo Sondaggio &egrave; stato cancellato.';
$lang['Vote_cast'] = 'Il tuo voto &egrave; stato aggiunto.';

$lang['Topic_reply_notification'] = 'Notifica risposta all\'Argomento';

$lang['bbcode_b_help'] = 'Grassetto: [b]testo[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Corsivo: [i]testo[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Sottolineato: [u]testo[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Citazione: [quote]testo[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Codice: [code]codice[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Lista: [list]testo[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Lista ordinata: [list=]testo[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Inserisci immagine: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Inserisci URL: [url]http://url[/url] o [url=http://url]testo URL[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Chiudi tutti i bbCode tags aperti';
$lang['bbcode_s_help'] = 'Colore font: [color=red]testo[/color]  Suggerimento: puoi anche usare color=#FF0000';
$lang['bbcode_f_help'] = 'Dimensione font: [size=x-small]testo piccolo[/size]';

$lang['Emoticons'] = 'Smileys';
$lang['More_emoticons'] = 'Altri Smileys';

$lang['Font_color'] = 'Colore Carattere';
$lang['color_default'] = 'Default';
$lang['color_dark_red'] = 'Rosso Scuro';
$lang['color_red'] = 'Rosso';
$lang['color_orange'] = 'Arancione';
$lang['color_brown'] = 'Marrone';
$lang['color_yellow'] = 'Giallo';
$lang['color_green'] = 'Verde';
$lang['color_olive'] = 'Oliva';
$lang['color_cyan'] = 'Azzurro';
$lang['color_blue'] = 'Blu';
$lang['color_dark_blue'] = 'Blu Scuro';
$lang['color_indigo'] = 'Violetto';
$lang['color_violet'] = 'Viola';
$lang['color_white'] = 'Bianco';
$lang['color_black'] = 'Nero';

$lang['Font_size'] = 'Dimensione Font';
$lang['font_tiny'] = 'Minuscolo';
$lang['font_small'] = 'Piccolo';
$lang['font_normal'] = 'Normale';
$lang['font_large'] = 'Grande';
$lang['font_huge'] = 'Enorme';

$lang['Close_Tags'] = 'Chiudi i Tags';
$lang['Styles_tip'] = 'Suggerimento: gli stili possono essere applicati velocemente al testo selezionato';

// Private Messaging
$lang['Private_Messaging'] = 'Messaggi Privati';

$lang['Login_check_pm'] = 'Messaggi Privati';
$lang['New_pms'] = '%d nuovi MP'; // You have 2 new messages
$lang['New_pm'] = '%d nuovo MP'; // You have 1 new message
$lang['No_new_pm'] = 'Non ci sono nuovi MP';
$lang['Unread_pms'] = '%d MP non letti';
$lang['Unread_pm'] = '%d MP non letto';
$lang['No_unread_pm'] = 'Hai letto tutti i MP';
$lang['You_new_pm'] = 'Hai un nuovo MP in Posta in Arrivo';
$lang['You_new_pms'] = 'Ci sono nuovi MP in Posta in Arrivo';
$lang['You_no_new_pm'] = 'Non ci sono nuovi MP';

$lang['Unread_message'] = 'Messaggio da leggere';
$lang['Read_message'] = 'Messaggio letto';

$lang['Read_pm'] = 'Leggi Messaggio';
$lang['Post_new_pm'] = 'Nuovo Messaggio';
$lang['Post_reply_pm'] = 'Rispondi';
$lang['Post_quote_pm'] = 'Cita Messaggio';
$lang['Edit_pm'] = 'Modifica Messaggio';

$lang['Inbox'] = 'Posta In Arrivo';
$lang['Outbox'] = 'Posta In Uscita';
$lang['Savebox'] = 'Posta Salvata';
$lang['Sentbox'] = 'Posta Inviata';
$lang['Flag'] = 'Stato';
$lang['Subject'] = 'Oggetto';
$lang['From'] = 'Da';
$lang['To'] = 'A';
$lang['Date'] = 'Data';
$lang['Mark'] = 'Seleziona';
$lang['Sent'] = 'Inviato';
$lang['Saved'] = 'Salvato';
$lang['Delete_marked'] = 'Cancella Selezionati';
$lang['Delete_all'] = 'Cancella Tutti';
$lang['Save_marked'] = 'Salva Selezionati';
$lang['Download_marked'] = 'Download Selezionati';
$lang['Mailbox'] = 'Mailbox';
$lang['Save_message'] = 'Salva Messaggio';
$lang['Delete_message'] = 'Cancella Messaggio';

// BEGIN PM Navigation MOD
$lang['Next_privmsg'] = 'Messaggio Privato Successivo';
$lang['Previous_privmsg'] = 'Messaggio Privato Precedente';
$lang['No_newer_pm'] = 'Non ci sono messaggi privati pi&ugrave; nuovi';
$lang['No_older_pm'] = 'Non ci sono messaggi privati pi&ugrave; vecchi';
// END PM Navigation MOD

$lang['Display_messages'] = 'Mostra i Messaggi di'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Tutti i Messaggi';

$lang['No_messages_folder'] = 'Non ci sono Messaggi in questa cartella';

$lang['PM_disabled'] = 'I Messaggi privati sono stati disabilitati dal Forum.';
$lang['Cannot_send_privmsg'] = 'L\'Amministratore del forum ti ha revocato i permessi di inviare Messaggi Privati.';
$lang['No_to_user'] = 'Devi specificare uno username per inviare il Messaggio.';
$lang['No_such_user'] = 'L\'Utente non esiste.';

$lang['Disable_HTML_pm'] = 'Disabilita HTML in questo Messaggio';
$lang['Disable_ACRO_AUTO_pm'] = 'Disabilita Acronimi ed Autolinks in questo Messaggio';
$lang['Disable_BBCode_pm'] = 'Disabilita BBCode in questo Messaggio';
$lang['Disable_Smilies_pm'] = 'Disabilita Smileys in questo Messaggio';

$lang['Message_sent'] = 'Il tuo Messaggio &egrave; stato spedito.';

$lang['Click_return_inbox'] = 'Torna alla cartella %sPosta in Arrivo%s';
$lang['Click_return_index'] = 'Torna %sall\'Indice%s';

$lang['Send_a_new_message'] = 'Invia nuovo Messaggio Privato';
$lang['Send_a_reply'] = 'Rispondi a Messaggio Privato';
$lang['Edit_message'] = 'Modifica Messaggio Privato';

$lang['Notification_subject'] = 'Hai un nuovo Messaggio Privato!';

$lang['Find_username'] = 'Trova uno username';
$lang['Find'] = 'Trova';
$lang['No_match'] = 'Nessun Risultato.';

$lang['No_post_id'] = 'Non &egrave; stato specificato nessun ID';
$lang['No_such_folder'] = 'Questa cartella non esiste';
$lang['No_folder'] = 'Nessuna cartella specificata';

$lang['Mark_all'] = 'Seleziona tutti';
$lang['Unmark_all'] = 'Deseleziona tutti';

$lang['Confirm_delete_pm'] = 'Sei sicuro di voler cancellare questo Messaggio?';
$lang['Confirm_delete_pms'] = 'Sei sicuro di voler cancellare questi Messaggi?';

$lang['Inbox_size'] = 'Posta in Arrivo [%d%%]'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Posta in Uscita [%d%%]';
$lang['Savebox_size'] = 'Posta Salvata [%d%%]';

$lang['Click_view_privmsg'] = 'Clicca %sQUI%s per andare alla cartella di Posta in Arrivo';

// Profiles/Registration
$lang['Viewing_user_profile'] = 'Guarda il profilo :: %s'; // %s is username
$lang['About_user'] = 'Tutto su %s'; // %s is username
//Start quick Administrator User Options and Information MOD
$lang['quick_admin_options'] = 'Info ed Opzioni per l\'Amministrazione Rapida';
$lang['Admin_edit_profile'] = 'Modifica il Profilo dell\'Utente';
$lang['Admin_edit_permissions'] = 'Modifica i Permessi dell\'Utente';
$lang['User_active'] = 'L\'utente <b>&egrave;</b> attivo';
$lang['User_not_active'] = 'L\'utente <b>non &egrave;</b> attivo';
$lang['Username_banned'] = 'Il nome Utente <b>&egrave;</b> bannato';
$lang['Username_not_banned'] = 'Il nome Utente <b>non &egrave;</b> bannato';
$lang['User_email_banned'] = 'L\'email dell\' Utente [ %s ] <b>&egrave;</b> bannata';
$lang['User_email_not_banned'] = 'L\'email dell\' Utente <b>non &egrave;</b> bannata';
//End quick Administrator User Options and Information MOD
$lang['Preferences'] = 'Preferenze';
$lang['Items_required'] = 'Le voci contrassegnate con * sono richieste.';
$lang['Registration_info'] = 'Dettagli Registrazione';
$lang['Profile_info'] = 'Dettagli Profilo';
$lang['Profile_info_warn'] = 'Queste informazioni saranno visibili da tutti gli Utenti';
$lang['Avatar_panel'] = 'Avatar';
$lang['Avatar_gallery'] = 'Galleria Avatar';

$lang['Website'] = 'Sito web';
$lang['Location'] = 'Residenza';
$lang['Contact'] = 'Contatto';
$lang['Email_address'] = 'Indirizzo Email';
$lang['Email'] = 'Email';
$lang['Send_private_message'] = 'Invia Messaggio Privato';
$lang['Hidden_email'] = '[ Nascosto ]';
$lang['Search_user_posts'] = 'Cerca tutti i Messaggi di %s';
$lang['Interests'] = 'Interessi';
$lang['Occupation'] = 'Impiego';
$lang['Poster_rank'] = 'Livello Utente';

$lang['Total_posts'] = 'Messaggi totali';
$lang['User_post_pct_stats'] = '%.2f%% del totale'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f messaggi al giorno'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Cerca tutti i Messaggi scritti da %s'; // Find all posts by username
$lang['Search_user_topics_started'] = 'Cerca tutti gli argomenti iniziati da %s'; // Find all topics started by username

$lang['No_user_id_specified'] = 'L\'Utente non esiste.';
$lang['Wrong_Profile'] = 'Non puoi modificare questo Profilo.';
//====================================================================== |
//==== Start Invision View Profile ===================================== |
//==== v1.1.3 ========================================================== |
//====
$lang['Invision_Active_Stats'] = 'Statistiche Attivit&agrave;';
$lang['Invision_Communicate'] = 'Comunicazioni';
$lang['Invision_Info'] = 'Informazioni';
$lang['Invision_Member_Group'] = 'Membro dei Gruppi';
$lang['Invision_Member_Title'] = 'Titolo Utente';
$lang['Invision_Most_Active'] = 'Maggiormente attivo in';
$lang['Invision_Most_Active_Posts'] = '%s posts in questo forum';
$lang['Invision_Details'] = 'Dettagli Utente';
$lang['Invision_PPD_Stats'] = 'Post al Giorno';
$lang['Invision_Signature'] = 'Firma';
$lang['Invision_Website'] = 'Sito Web';
$lang['Invision_Total_Posts'] = 'Totale Post';
$lang['Invision_User_post_pct_stats'] = '( %.2f%% dei post totali del forum )';
$lang['Invision_User_post_day_stats'] = '%.2f posts al giorno';
$lang['Invision_Search_user_posts'] = 'Trova tutti i Post dell\'utente';
$lang['Invision_Posting_details'] = 'Dettagli Utente';
//====
//==== Author: Disturbed One [http://anthonycoy.com] =================== |
//==== End Invision View Profile ======================================= |
//====================================================================== |


$lang['Only_one_avatar'] = 'Pu&ograve; essere specificato un solo tipo di Avatar';
$lang['File_no_data'] = 'Il file all\'URL che hai fornito non contiene dati';
$lang['No_connection_URL'] = 'Non &egrave; possibile connettersi all\'URL che hai fornito';
$lang['Incomplete_URL'] = 'L\'URL che hai fornito &egrave; incompleto';
$lang['Wrong_remote_avatar_format'] = 'L\'URL dell\'Avatar remoto non &egrave; valido';
$lang['No_send_account_inactive'] = 'Spiacenti, ma la tua password non pu&ograve; essere recuperata perch&eacute; il tuo account al momento &egrave; inattivo. Contatta l\'Amministratore per ulteriori informazioni.';

$lang['Always_smile'] = 'Abilita sempre gli Smileys';
$lang['Always_html'] = 'Abilita sempre i codici HTML';
$lang['Always_bbcode'] = 'Abilita sempre il BBCode';
$lang['Always_add_sig'] = 'Aggiungi sempre la mia firma';
$lang['Always_notify'] = 'Avvisami sempre delle risposte';
$lang['Always_notify_explain'] = 'Vieni avvisato con un\'Email quando un Utente risponde ad un Argomento a cui hai risposto. Questo pu&ograve; essere cambiato ogni volta che inserisci un nuovo Messaggio.';

$lang['Board_style'] = 'Stile';
$lang['Board_lang'] = 'Lingua';
$lang['No_themes'] = 'Non ci sono Stili presenti nel Database';
$lang['Timezone'] = 'Fuso orario';
$lang['Date_format'] = 'Formato data';
$lang['Date_format_explain'] = 'La sintassi utilizzata &egrave; la funzione <a href=\'http://www.php.net/manual/it/html/function.date.html\' target=\'_other\'>data()</a> del PHP.';
$lang['Signature'] = 'Firma';
$lang['Signature_explain'] = 'Testo che verr&agrave; visualizzato come firma a tutti i tuoi Messaggi. C\'&egrave; un limite di %d caratteri';
$lang['Public_view_email'] = 'Mostra sempre il mio indirizzo Email';

$lang['Current_password'] = 'Password attuale';
$lang['New_password'] = 'Nuova password';
$lang['Confirm_password'] = 'Conferma password';
$lang['Confirm_password_explain'] = 'Devi confermare la tua password attuale se vuoi cambiarla o modificare il tuo indirizzo email';
$lang['password_if_changed'] = 'Devi inserire la password solo se vuoi cambiarla';
$lang['password_confirm_if_changed'] = 'Devi confermare la tua password solo se ne hai inserita una nuova qui sopra';

$lang['Avatar'] = 'Avatar';
// MOD: Remote Avatar Resize  - by tomlevens (tom@tomlevens.co.uk)
// (1 line replaced - original lines follow)
// $lang['Avatar_explain'] = 'Displays a small graphic image below your details in posts. Only one image can be displayed at a time, its width can be no greater than %d pixels, the height no greater than %d pixels, and the file size no more than %d KB.';
$lang['Avatar_explain'] = 'Mostra una piccola immagine grafica sotto i tuoi dettagli nel Messaggio. Pu&ograve; essere mostrata una sola immagine alla volta, la sua larghezza massima &egrave; di %d pixels, l\'altezza di %d pixels e il file deve essere pi&ugrave; piccolo di %d KB. Gli avatar con Link Esterno saranno ridimensionati automaticamente.';
//
// END MOD
$lang['Upload_Avatar_file'] = 'Carica Avatar da PC';
$lang['Upload_Avatar_URL'] = 'Carica Avatar da un URL';
$lang['Upload_Avatar_URL_explain'] = 'Inserisci URL dell\'Avatar, che verr&agrave; copiato in questo Sito.';
$lang['Pick_local_Avatar'] = 'Seleziona Avatar dalla Galleria';
$lang['Link_remote_Avatar'] = 'Link esterno Avatar';
$lang['Link_remote_Avatar_explain'] = 'Inserisci URL dell\'Avatar che vuoi linkare.';
$lang['Avatar_URL'] = 'URL Avatar';
$lang['Select_from_gallery'] = 'Seleziona Avatar dalla Galleria';
$lang['View_avatar_gallery'] = 'Mostra Galleria';

$lang['Select_avatar'] = 'Seleziona Avatar';
$lang['Return_profile'] = 'Elimina Avatar';
$lang['Select_category'] = 'Seleziona categoria';

$lang['Delete_Image'] = 'Cancella Immagine';
$lang['Current_Image'] = 'Immagine attuale';

$lang['Notify_on_privmsg'] = 'Notifica sui nuovi Messaggi Privati';
$lang['Popup_on_privmsg'] = 'Popup nuovo Messaggio Privato';
$lang['Popup_on_privmsg_explain'] = 'Apre una piccola nuova finestra per informarti quando arriva un nuovo Messaggio Privato.';
$lang['Hide_user'] = 'Nascondi il tuo stato online';

$lang['Profile_updated'] = 'Il tuo profilo &egrave; stato aggiornato';
$lang['Profile_updated_inactive'] = 'Il tuo profilo &egrave; stato aggiornato. Hai modificato dettagli importanti anche se il tuo account non &egrave; ancora attivo. Controlla la tua email per riattivare il tuo account, o, se richiesta, attendi la riattivazione da parte dell\'Amministratore.';

$lang['Password_mismatch'] = 'La password inserita non corrisponde.';
$lang['Current_password_mismatch'] = 'La password inserita non corrisponde a quella presente nel Database.';
$lang['Password_long'] = 'La password non deve essere pi&ugrave; lunga di 32 caratteri.';
$lang['Too_many_registers'] = 'Hai fatto troppi tentativi senza inserire il codice corretto. Prova pi&ugrave; tardi.';
$lang['Username_taken'] = 'Username in uso da un\'altro utente.';
$lang['Username_invalid'] = 'Errore, l\'Username contiene un carattere non valido come \'.';
$lang['Username_disallowed'] = 'Username disabilitato dall\'Amministratore.';
$lang['Email_taken'] = 'L\'indirizzo Email &egrave; gi&agrave; presente nel nostro Database.';
$lang['Email_banned'] = 'L\'indirizzo Email stato escluso dall\'Amministratore.';
$lang['Email_invalid'] = 'Indirizzo Email non valido.';
$lang['Signature_too_long'] = 'La firma &egrave; troppo lunga.';
$lang['Fields_empty'] = 'Devi riempire tutti i campi richiesti.';
$lang['Avatar_filetype'] = 'Il file Avatar deve essere .jpg, .gif o .png';
$lang['Avatar_filesize'] = 'La grandezza del file dell\'Avatar deve essere inferiore a %d kB'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'L\'Avatar non pu&ograve; superare le dimensioni di %d pixels di larghezza e di %d pixels di altezza';
$lang['Welcome'] = 'Benvenuto'; // Welcome
$lang['Welcome_subject'] = 'Benvenuto nel Forum di %s '; // Welcome to my.com forums
$lang['New_account_subject'] = 'Account Nuovo Utente';
$lang['Account_activated_subject'] = 'Account Attivato';

$lang['Account_added'] = 'Grazie per esserti registrato, il tuo account &egrave; stato creato. Adesso puoi entrare con il tuo username e password';
$lang['Account_inactive'] = 'Il tuo account &egrave; stato creato. Questo forum richiede l\'attivazione dell\'account. La chiave per l\'attivazione &egrave; stata inviata all\'indirizzo email che hai inserito. Controlla la tua Email per ulteriori informazioni';
$lang['Account_inactive_admin'] = 'Il tuo account &egrave; stato creato. Questo forum richiede l\'attivazione dell\'account da parte dell\'Amministratore. Ti verr&agrave; inviata un\'Email dall\'Amministratore e sarai informato sullo stato di attivazione del tuo account';
$lang['Account_active'] = 'Il tuo account &egrave; stato attivato. Grazie per esserti registrato.';
$lang['Account_active_admin'] = 'Il tuo account &egrave; stato attivato';
$lang['Reactivate'] = 'Riattiva il tuo account!';
$lang['Already_activated'] = 'Questo account &egrave; gi&agrave; stato attivato';
$lang['COPPA'] = 'Il tuo account &egrave; stato creato, ma deve essere approvato. Controlla la tua Email per ulteriori dettagli.';

$lang['Registration'] = 'Condizioni Per La Registrazione';
$lang['Reg_agreement'] = 'Anche se gli Amministratori e i Moderatori di questo forum cercheranno di rimuovere o modificare tutto il materiale contestabile il pi&ugrave; velocemente possibile, &egrave; comunque impossibile verificare ogni Messaggio. Tuttavia sei consapevole che tutti i Messaggi di questo forum esprimono il punto di vista e le opinioni dell\'autore e non quelle degli Amministratori, dei Moderatori o del Webmaster (eccetto i messaggi degli stessi) e per questo non sono perseguibili.<br /><br />L\'utente concorda di non inviare Messaggi abusivi, osceni, volgari, diffamatori, di odio, minatori, sessuali o qualunque altro materiale che possa violare qualunque legge applicabile. Inserendo Messaggi di questo tipo l\'utente verr&agrave; immediatamente e permanentemente escluso (e il tuo provider verr&agrave; informato). L\'indirizzo IP di tutti i Messaggi viene registrato per aiutare a rinforzare queste condizioni. L\'Utente concorda che l\'Amministratore i Moderatori e Webmaster di questo forum hanno il diritto di rimuovere, modificare, o chiudere Argomenti qualora si ritenga necessario. Come Utente concordi che ogni informazione che &egrave; stata inserita verr&agrave; conservata in un database. Poich&eacute; queste informazioni non verranno cedute a terzi senza il tuo consenso, Webmaster, Amministratore e i Moderatori non sono ritenuti responsabili per gli attacchi da parte degli hackers che possano compromettere i dati.<br /><br />Questo Forum usa i cookies per conservare informazioni sul tuo computer locale. Questi cookies non contengono le informazioni che hai inserirai, servono soltanto per velocizzarne il processo. L\'indirizzo Email viene utilizzato solo per confermare i dettagli della tua registrazione e per la password (e per inviare una nuova password nel caso dovessi perdere quella attuale).<br /><br />';

$lang['Agreement'] = 'Accettazione';
$lang['Agree_under_13'] = 'Accetto queste condizioni e ho <b>meno</b> di 13 anni';
$lang['Agree_over_13'] = 'Accetto queste condizioni';
$lang['Agree_not'] = 'Non Accetto queste condizioni';
$lang['Agree_checkbox'] = 'Accetto esplicitamente queste condizioni';
$lang['Agree_checkbox_Error'] = 'Devi accettare le condizioni cliccando sulla casella a fondo pagina se vuoi registrarti!';

$lang['Wrong_activation'] = 'La chiave di attivazione che hai fornito non corrisponde a nessuna presente nel database.';
$lang['Send_password'] = 'Inviami una nuova password';
$lang['Password_updated'] = 'Una nuova password &egrave; stata creata, controlla la tua email per maggiori dettagli su come attivarla.';
$lang['No_email_match'] = 'L\'indirizzo Email inserita non corrisponde a quella attuale per questo Username.';
$lang['New_password_activation'] = 'Attivazione nuova password';
$lang['Password_activated'] = 'Il tuo account &egrave; stato riattivato. Per entrare usa la password ricevuta via Email.';

$lang['Send_email_msg'] = 'Invia un Messaggio Email';
$lang['No_user_specified'] = 'Non &egrave; stato specificato nessun Utente';
$lang['User_prevent_email'] = 'L\'Utente non gradisce ricevere Email. Prova ad inviare un Messaggio Privato.';
$lang['User_not_exist'] = 'Questo Utente non esiste';
$lang['CC_email'] = 'Invia una copia di questa Email a te stesso';
$lang['Email_message_desc'] = 'Questo messaggio verr&agrave; inviato come testo, non includere nessun codice HTML o BBCode. L\'indirizzo per la risposta di questo Messaggio &egrave; il tuo indirizzo Email.';
$lang['Flood_email_limit'] = 'Non puoi inviare un\'altra Email al momento. Prova pi&ugrave; tardi.';
$lang['Recipient'] = 'Destinatario';
$lang['Email_sent'] = 'Questa Email &egrave; stata inviata.';
$lang['Send_Email'] = 'Invia Email';
$lang['Empty_sender_email'] = 'Devi specificare un indirizzo email mittente.';
$lang['Empty_subject_email'] = 'Devi specificare un oggetto per l\'Email.';
$lang['Empty_message_email'] = 'Devi inserire un Messaggio da inviare.';


// Visual confirmation system strings
$lang['Confirm_code_wrong'] = 'Il codice di conferma inserito non &egrave; corretto';
//$lang['Too_many_registers'] = 'Hai superato il numero massimo di tentativi per questa sessione. Ritenta pi&ugrave; tardi.';
$lang['Confirm_code_impaired'] = 'Se non riesci a visualizzare il codice di registrazione contatta l\'%sAmministratore%s.';
$lang['Confirm_code'] = 'Codice di conferma';
$lang['Confirm_code_explain'] = 'Inserisci il codice di conferma  visuale come indicato nell\'immagine. Il sistema riconosce la differenza tra maiuscole e minuscole, lo zero ha una barra diagonale per distinguerlo dalla lettera O.';



// Memberslist
$lang['Select_sort_method'] = 'Seleziona un ordine';
$lang['Sort'] = 'Ordina';
$lang['Sort_Top_Ten'] = 'I Migliori 10 Autori';
$lang['Sort_Joined'] = 'Data di Registrazione';
$lang['Sort_Username'] = 'Username';
$lang['Sort_Location'] = 'Localit&agrave;';
$lang['Sort_Posts'] = 'Messaggi totali';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Sito Web';
$lang['Sort_Ascending'] = 'Crescente';
$lang['Sort_Descending'] = 'Decrescente';
$lang['Order'] = 'Ordina';


// Group control panel
$lang['Group_Control_Panel'] = 'Pannello Di Controllo Gruppo';
$lang['Group_member_details'] = 'Gruppi di cui sei membro';
$lang['Group_member_join'] = 'Gruppi a cui puoi iscriverti';

$lang['Group_Information'] = 'Informazioni Gruppo';
$lang['Group_name'] = 'Nome Gruppo';
$lang['Group_description'] = 'Descrizione Gruppo';
$lang['Group_membership'] = 'Appartenenza al Gruppo';
$lang['Group_Members'] = 'Utenti del Gruppo';
$lang['Group_Moderator'] = 'Moderatore Gruppo';
$lang['Pending_members'] = 'Nuovi iscritti in attesa';

$lang['Group_type'] = 'Tipo di Gruppo';
$lang['Group_open'] = 'Gruppo Aperto';
$lang['Group_closed'] = 'Gruppo Chiuso';
$lang['Group_hidden'] = 'Gruppo Nascosto';

$lang['Current_memberships'] = 'Gruppi di cui sei membro';
$lang['Non_member_groups'] = 'Gruppi di cui non sei membro';
$lang['Memberships_pending'] = 'Gruppi in attesa di iscrizione';

$lang['No_groups_exist'] = 'Non esistono Gruppi';
$lang['Group_not_exist'] = 'Gruppo non esistente';

$lang['Join_group'] = 'Iscriviti al Gruppo';
$lang['No_group_members'] = 'Questo Gruppo non ha Utenti iscritti';
$lang['Group_hidden_members'] = 'Gruppo nascosto, non puoi vedere i suoi membri';
$lang['No_pending_group_members'] = 'Questo Gruppo non ha Utenti in attesa';
$lang['Group_joined'] = 'Ti sei iscritto a questo Gruppo con successo.<br />Sarai avvisato quando la tua iscrizione verr&agrave; approvata dal moderatore del Gruppo.';
$lang['Group_request'] = 'C\'&egrave; una richiesta di iscrizione al tuo Gruppo.';
$lang['Group_approved'] = 'La tua richiesta &egrave; stata approvata.';
$lang['Group_added'] = 'Sei stato aggiunto a questo Gruppo.';
$lang['Already_member_group'] = 'Sei gi&agrave; iscritto a questo Gruppo';
$lang['User_is_member_group'] = 'L\'Utente &egrave; gi&agrave; iscritto a questo Gruppo';
$lang['Group_type_updated'] = 'Tipo di Gruppo aggiornato.';

$lang['Could_not_add_user'] = 'L\'Utente selezionato non esiste.';
$lang['Could_not_anon_user'] = 'L\'Utente Anonimo non pu&ograve; essere iscritto ad un Gruppo.';

$lang['Confirm_unsub'] = 'Sei sicuro di volerti cancellare da questo Gruppo?';
$lang['Confirm_unsub_pending'] = 'La tua iscrizione a questo Gruppo non &egrave; ancora stata approvata, sei sicuro di volerti cancellare?';

$lang['Unsub_success'] = 'Sei stato cancellato da questo Gruppo.';

$lang['Approve_selected'] = 'Approvazione Selezionata';
$lang['Deny_selected'] = 'Rifiuto Selezionato';
$lang['Not_logged_in'] = 'Per iscriverti ad un Gruppo devi essere Registrato.';
$lang['Remove_selected'] = 'Rimuovi Selezionati';
$lang['Add_member'] = 'Aggiungi Utente';
$lang['Not_group_moderator'] = 'Non sei Moderatore di questo Gruppo, non puoi eseguire questa azione.';

$lang['Login_to_join'] = 'Entra per iscriverti o gestire un Gruppo di Utenti';
$lang['This_open_group'] = 'Gruppo aperto, clicca per richiedere l\'adesione';
$lang['This_closed_group'] = 'Gruppo chiuso: %s';
$lang['This_hidden_group'] = 'Gruppo nascosto: %s';
$lang['Member_this_group'] = 'Sei iscritto a questo Gruppo';
$lang['Pending_this_group'] = 'La tua iscrizione a questo Gruppo &egrave; in attesa di approvazione';
$lang['Are_group_moderator'] = 'Sei Moderatore di questo Gruppo';
$lang['None'] = 'Nessuno';

$lang['Subscribe'] = 'Iscriviti';
$lang['Unsubscribe'] = 'Cancella';
$lang['View_Information'] = 'Guarda Informazioni';


// Search
$lang['Search_query'] = 'Motore di Ricerca';
$lang['Search_options'] = 'Opzioni di Ricerca';

$lang['Search_keywords'] = 'Cerca per parole chiave';
$lang['Search_keywords_explain'] = 'Puoi usare <u>AND</u> per definire le parole che devono essere nel risultato della ricerca, <u>OR</u> per definire le parole che potrebbero essere nel risultato e <u>NOT</u> per definire le parole che non devono essere nel risultato. Usa * come abbrevazione per parole parziali';
$lang['Search_author'] = 'Cerca per Autore';
$lang['Search_author_explain'] = 'Usa * come abbreviazione per parole parziali';
$lang['Search_author_topic_starter'] = 'Cerca solo gli argomenti iniziati da questo autore';

$lang['Search_for_any'] = 'Cerca per parola o usa frase esatta';
$lang['Search_for_all'] = 'Cerca tutte le parole';
$lang['Search_title_msg'] = 'Cerca nel titolo o nel testo';
$lang['Search_title_only'] = 'Cerca solo nel titolo';
$lang['Search_msg_only'] = 'Cerca solo nel testo';

$lang['Return_first'] = 'Mostra i primi'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'caratteri del messaggio';

$lang['Search_previous'] = 'Cerca i Messaggi da'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Ordina per';
$lang['Sort_Time'] = 'Data Messaggio';
$lang['Sort_Post_Subject'] = 'Oggetto Messaggio';
$lang['Sort_Topic_Title'] = 'Titolo Argomento';
$lang['Sort_Author'] = 'Autore';
$lang['Sort_Forum'] = 'Forum';

$lang['Display_results'] = 'Mostra i risultati come';
$lang['All_available'] = 'Tutto disponibile';
$lang['No_searchable_forums'] = 'Non hai i permessi per utilizzare il motore di ricerca del Forum.';

$lang['No_search_match'] = 'Nessun messaggio con questo criterio di ricerca';
$lang['Found_search_match'] = 'La ricerca ha trovato %d risultato'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'La ricerca ha trovato %d risultati'; // eg. Search found 24 matches

$lang['Close_window'] = 'Chiudi Finestra';


// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Solo %s possono inviare Annunci.';
$lang['Sorry_auth_sticky'] = 'Solo %s possono inviare Messaggi importanti.';
$lang['Sorry_auth_read'] = 'Solo %s possono leggere gli Argomenti.';
$lang['Sorry_auth_post'] = 'Solo %s possono inserire Argomenti.';
$lang['Sorry_auth_reply'] = 'Solo %s possono rispondere ai Messaggi.';
$lang['Sorry_auth_edit'] = 'Solo %s possono modificare i Messaggi.';
$lang['Sorry_auth_delete'] = 'Solo %s possono cancellare i Messaggi.';
$lang['Sorry_auth_vote'] = 'Solo %s possono votare nei Sondaggi.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>gli Utenti Anonimi</b>';
$lang['Auth_Registered_Users'] = '<b>gli Utenti Registrati</b>';
$lang['Auth_Self_Users'] = '<b>gli Utenti che hanno scritto Argomenti</b>';
$lang['Auth_Users_granted_access'] = '<b>gli Utenti con accesso speciale</b>';
$lang['Auth_Moderators'] = '<b>i Moderatori</b>';
$lang['Auth_Administrators'] = '<b>gli Amministratori</b>';

$lang['Not_Moderator'] = 'Non sei Moderatore di questo Forum.';
$lang['Not_Authorised'] = 'Non Autorizzato';

$lang['You_been_banned'] = 'Sei stato escluso da questo Forum.<br />Contatta l\'Amministratore o Webmaster del Sito per ulteriori informazioni.';


// Viewonline
$lang['Reg_users_zero_online'] = 'Ci sono 0 Utenti Registrati e '; // There are 5 Registered and
$lang['Reg_users_online'] = 'Ci sono %d Utenti Registrati e '; // There are 5 Registered and
$lang['Reg_user_online'] = 'C\'&egrave; %d Utente Registrato e '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = '0 Utenti Nascosti in linea'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d Utenti Nascosti in linea'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d Utente Nascosto in linea'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Ci sono %d Ospiti in linea'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Ci sono 0 Ospiti in linea'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'C\'&egrave; %d Ospite in linea'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Al momento non ci sono Utenti nel Forum';

$lang['Online_explain'] = 'Questi dati si basano sugli Utenti in linea negli ultimi ' . intval(ONLINE_REFRESH / 60) . ' minuti';
$lang['Online_today'] = 'Questi dati si basano sugli Utenti in linea nella giornata';

$lang['Forum_Location'] = 'Localit&agrave; del Forum';
$lang['Last_updated'] = 'Ultimo Aggiornamento';

$lang['Forum_index'] = 'Indice Forum';
$lang['Portal'] = 'Home Page';
$lang['Logging_on'] = 'Sta entrando';
$lang['Posting_message'] = 'Sta inviando un Messaggio';
$lang['Searching_forums'] = 'Sta cercando nei Forum';
$lang['Viewing_profile'] = 'Sta guardando il Profilo';
$lang['Viewing_HACKSLIST'] = 'Sta Guardando la Lista delle Modifiche';
$lang['Viewing_online'] = 'Sta guardando chi c\'&egrave; in linea';
$lang['Viewing_member_list'] = 'Sta guardando la Lista Utenti';
$lang['Viewing_priv_msgs'] = 'Sta guardando i Messaggi Privati';
$lang['Viewing_FAQ'] = 'Sta guardando le FAQ';
$lang['Viewing_KB'] = 'Sta guardando la KB';
$lang['Viewing_RSS'] = 'RSS feed';         // RSS Feed Mod


// Moderator Control Panel
$lang['Mod_CP'] = 'Pannello Di Controllo Moderatori';
$lang['Mod_CP_explain'] = 'Utilizzando il modulo qui sotto puoi eseguire operazioni di massa su questo Forum. Puoi bloccare, sbloccare, spostare o cancellare.';

$lang['Select'] = 'Seleziona';
$lang['Delete'] = 'Cancella';
$lang['Move'] = 'Sposta';
$lang['Copy'] = 'Copia';
$lang['Lock'] = 'Blocca';
$lang['Unlock'] = 'Sblocca';

$lang['Topics_Removed'] = 'Gli Argomenti selezionati sono stati rimossi dal Database.';
$lang['Topics_Locked'] = 'Gli Argomenti selezionati sono stati chiusi.';
$lang['Topics_Moved'] = 'Gli Argomenti selezionati sono stati spostati.';
$lang['Topics_Unlocked'] = 'Gli Argomenti selezionati sono stati ri-aperti.';
$lang['No_Topics_Moved'] = 'Non &egrave; stato spostato nessun Argomenti.';

$lang['Confirm_delete_topic'] = 'Sei sicuro di voler eliminare gli Argomenti selezionati?';
$lang['Confirm_lock_topic'] = 'Sei sicuro di voler chiudere gli Argomenti selezionati?';
$lang['Confirm_unlock_topic'] = 'Sei sicuro di voler ri-aprire gli Argomenti selezionati?';
$lang['Confirm_move_topic'] = 'Sei sicuro di voler spostare gli Argomenti selezionati?';

$lang['Move_to_forum'] = 'Vai al Forum';
$lang['Leave_shadow_topic'] = 'Lascia una traccia nel Forum di creazione.';

$lang['Split_Topic'] = 'Divisione Argomenti';
$lang['Split_Topic_explain'] = 'Utilizzando il modulo qui sotto puoi dividere un Argomenti in due, sia selezionando i Messaggi individualmente, sia dividendo l\'Argomento da una parte di selezionato Messaggio in poi';
$lang['Split_title'] = 'Titolo nuovo Argomento';
$lang['Split_forum'] = 'Forum per il nuovo Argomento';
$lang['Split_posts'] = 'Dividi i Messaggi selezionati';
$lang['Split_after'] = 'Dividi partendo dal Messaggio selezionato';
$lang['Topic_split'] = 'L\'Argomento selezionato &egrave; stato diviso';

$lang['Too_many_error'] = 'Hai selezionato troppi Messaggi. Puoi selezionare solo il Messaggio da cui dividere l\'Argomento!';

$lang['None_selected'] = 'Nessun Argomento selezionato nel quale eseguire questa operazione. Torna indietro e selezionane almeno uno.';
$lang['New_forum'] = 'Nuovo Forum';

$lang['This_posts_IP'] = 'Indirizzo IP per questo Messaggio';
$lang['Other_IP_this_user'] = 'Altri indirizzi IP utilizzati da questo Utente';
$lang['Users_this_IP'] = 'Utenti che utilizzano questo indirizzo IP';
$lang['IP_info'] = 'Informazioni indirizzo IP';
$lang['Lookup_IP'] = 'Cerca indirizzo IP';


// Timezones - BEGIN
$lang['All_times'] = 'Tutti i fusi orari sono %s'; // eg. All times are GMT - 12 Hours (times from next block)

// Time zones short
$lang['tzs']['-12'] = 'GMT - 12 Hours';
$lang['tzs']['-11'] = 'GMT - 11 Hours';
$lang['tzs']['-10'] = 'GMT - 10 Hours';
$lang['tzs']['-9'] = 'GMT - 9 Hours';
$lang['tzs']['-8'] = 'GMT - 8 Hours';
$lang['tzs']['-7'] = 'GMT - 7 Hours';
$lang['tzs']['-6'] = 'GMT - 6 Hours';
$lang['tzs']['-5'] = 'GMT - 5 Hours';
$lang['tzs']['-4'] = 'GMT - 4 Hours';
$lang['tzs']['-3.5'] = 'GMT - 3.5 Hours';
$lang['tzs']['-3'] = 'GMT - 3 Hours';
$lang['tzs']['-2'] = 'GMT - 2 Hours';
$lang['tzs']['-1'] = 'GMT - 1 Hours';
$lang['tzs']['0'] = 'GMT';
$lang['tzs']['1'] = 'GMT + 1 Hour';
$lang['tzs']['2'] = 'GMT + 2 Hours';
$lang['tzs']['3'] = 'GMT + 3 Hours';
$lang['tzs']['3.5'] = 'GMT + 3.5 Hours';
$lang['tzs']['4'] = 'GMT + 4 Hours';
$lang['tzs']['4.5'] = 'GMT + 4.5 Hours';
$lang['tzs']['5'] = 'GMT + 5 Hours';
$lang['tzs']['5.5'] = 'GMT + 5.5 Hours';
$lang['tzs']['6'] = 'GMT + 6 Hours';
$lang['tzs']['6.5'] = 'GMT + 6.5 Hours';
$lang['tzs']['7'] = 'GMT + 7 Hours';
$lang['tzs']['8'] = 'GMT + 8 Hours';
$lang['tzs']['9'] = 'GMT + 9 Hours';
$lang['tzs']['9.5'] = 'GMT + 9.5 Hours';
$lang['tzs']['10'] = 'GMT + 10 Hours';
$lang['tzs']['11'] = 'GMT + 11 Hours';
$lang['tzs']['12'] = 'GMT + 12 Hours';
$lang['tzs']['13'] = 'GMT + 13 Hours';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12:00 Ore) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11:00 Ore) Midway Island, Samoa';
$lang['tz']['-10'] = '(GMT -10:00 Ore) Hawaii';
$lang['tz']['-9'] = '(GMT -9:00 Ore) Alaska';
$lang['tz']['-8'] = '(GMT -8:00 Ore) Pacific Time (US &amp; Canada), Tijuana';
$lang['tz']['-7'] = '(GMT -7:00 Ore) Mountain Time (US &amp; Canada), Arizona';
$lang['tz']['-6'] = '(GMT -6:00 Ore) Central Time (US &amp; Canada), Mexico City';
$lang['tz']['-5'] = '(GMT -5:00 Ore) Eastern Time (US &amp; Canada), Bogota, Lima, quito';
$lang['tz']['-4'] = '(GMT -4:00 Ore) Atlantic Time (Canada), Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3:30 Ore) Newfoundland';
$lang['tz']['-3'] = '(GMT -3:00 Ore) Brassila, Buenos Aires, Georgetown, Falkland Is';
$lang['tz']['-2'] = '(GMT -2:00 Ore) Mid-Atlantic, Ascension Is., St. Helena';
$lang['tz']['-1'] = '(GMT -1:00 Ora) Azores, Cape Verde Islands';
$lang['tz']['0'] = '(GMT) London, Casablanca, Dublin, Edinburgh, Lisbon, Monrovia';
$lang['tz']['1'] = '(GMT +1:00 Ora)  Amsterdam, Berlin, Brussels, Madrid, Paris, Rome';
$lang['tz']['2'] = '(GMT +2:00 Ore) Cairo, Helsinki, Kaliningrad, South Africa';
$lang['tz']['3'] = '(GMT +3:00 Ore) Baghdad, Riyadh, Moscow, Nairobi';
$lang['tz']['3.5'] = '(GMT +3:30 Ore) Tehran';
$lang['tz']['4'] = '(GMT +4:00 Ore) Abu Dhabi, Baku, Muscat, Tbilisi';
$lang['tz']['4.5'] = '(GMT +4:30 Ore) Kabul';
$lang['tz']['5'] = '(GMT +5:00 Ore) Ekaterinburg, Islamabad, Karachi, Tashkent';
$lang['tz']['5.5'] = '(GMT +5:30 Ore) Bombay, Calcutta, Madras, New Delhi';
$lang['tz']['5.75'] = '(GMT +5.75 Ore) Kathmandu';
$lang['tz']['6'] = '(GMT +6:00 Ore) Almaty, Colombo, Dhaka, Novosibirsk';
$lang['tz']['6.5'] = '(GMT +6:30 Ore) Rangoon';
$lang['tz']['7'] = '(GMT +7:00 Ore) Bangkok, Hanoi, Jakarta';
$lang['tz']['8'] = '(GMT +8:00 Ore) Beijing, Hong Kong, Perth, Singapore, Taipei';
$lang['tz']['9'] = '(GMT +9:00 Ore) Osaka, Sapporo, Seoul, Tokyo, Yakutsk';
$lang['tz']['9.5'] = '(GMT +9:30 Ore) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10:00 Ore) Canberra, Guam, Melbourne, Sydney, Vladivostok';
$lang['tz']['11'] = '(GMT +11:00 Ore) Magadan, New Caledonia, Solomon Islands';
$lang['tz']['12'] = '(GMT +12:00 Ore) Auckland, Wellington, Fiji, Marshall Island';
$lang['tz']['13'] = '(GMT +13 Ore) Nuku\'alofa';

$lang['WEEK_DAY_SUNDAY'] = 'Domenica';
$lang['WEEK_DAY_MONDAY'] = 'Luned&igrave;';
$lang['WEEK_DAY_TUESDAY'] = 'Marted&igrave;';
$lang['WEEK_DAY_WEDNESDAY'] = 'Mercoled&igrave;';
$lang['WEEK_DAY_THURSDAY'] = 'Gioved&igrave;';
$lang['WEEK_DAY_FRIDAY'] = 'Venerd&igrave;';
$lang['WEEK_DAY_SATURDAY'] = 'Sabato';

$lang['datetime']['Sunday'] = $lang['WEEK_DAY_SUNDAY'];
$lang['datetime']['Monday'] = $lang['WEEK_DAY_MONDAY'];
$lang['datetime']['Tuesday'] = $lang['WEEK_DAY_TUESDAY'];
$lang['datetime']['Wednesday'] = $lang['WEEK_DAY_WEDNESDAY'];
$lang['datetime']['Thursday'] = $lang['WEEK_DAY_THURSDAY'];
$lang['datetime']['Friday'] = $lang['WEEK_DAY_FRIDAY'];
$lang['datetime']['Saturday'] = $lang['WEEK_DAY_SATURDAY'];
$lang['datetime']['Sun'] = 'Dom';
$lang['datetime']['Mon'] = 'Lun';
$lang['datetime']['Tue'] = 'Mar';
$lang['datetime']['Wed'] = 'Mer';
$lang['datetime']['Thu'] = 'Gio';
$lang['datetime']['Fri'] = 'Ven';
$lang['datetime']['Sat'] = 'Sab';
$lang['datetime']['January'] = 'Gennaio';
$lang['datetime']['February'] = 'Febbraio';
$lang['datetime']['March'] = 'Marzo';
$lang['datetime']['April'] = 'Aprile';
$lang['datetime']['May'] = 'Maggio';
$lang['datetime']['June'] = 'Giugno';
$lang['datetime']['July'] = 'Luglio';
$lang['datetime']['August'] = 'Agosto';
$lang['datetime']['September'] = 'Settembre';
$lang['datetime']['October'] = 'Ottobre';
$lang['datetime']['November'] = 'Novembre';
$lang['datetime']['December'] = 'Dicembre';
$lang['datetime']['JAN'] = 'Gen';
$lang['datetime']['FEB'] = 'Feb';
$lang['datetime']['MAR'] = 'Mar';
$lang['datetime']['APR'] = 'Apr';
$lang['datetime']['MAY'] = 'Mag';
$lang['datetime']['JUN'] = 'Giu';
$lang['datetime']['JUL'] = 'Lug';
$lang['datetime']['AUG'] = 'Ago';
$lang['datetime']['SEP'] = 'Set';
$lang['datetime']['OCT'] = 'Ott';
$lang['datetime']['NOV'] = 'Nov';
$lang['datetime']['DEC'] = 'Dic';
// Timezones - END

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Informazione';
$lang['Critical_Information'] = 'Informazione Critica';

$lang['General_Error'] = 'Errore Generale';
$lang['Critical_Error'] = 'Errore Critico';
$lang['An_error_occured'] = 'Si &egrave; verificato un errore';
$lang['A_critical_error'] = 'Si &egrave; verificato un errore critico';
$lang['Admin_reauthenticate'] = 'Per Amministrare il sito ti devi riautenticare.';


$lang['Topic_description'] = 'Descrizione Argomento';
//$lang['Description'] = 'Descrizione Topic';

//Member List
$lang['Recent_Logins'] = 'Ultimo accesso';
$lang['Users_Display'] = 'Utenti per pagina';

// Start add - Birthday MOD
$lang['Birthday'] = 'Compleanno';
$lang['No_birthday_specify'] = 'Non si chiede l\'et&agrave;';
$lang['Age'] = 'Et&agrave;';
$lang['Wrong_birthday_format'] = 'Formato del compleanno inserito in modo non corretto.';
$lang['Birthday_to_high'] = 'Spiacente, questo sito, non accetta user oltre %d anni di et&agrave;';
$lang['Birthday_require'] = 'La tua data di nascita &egrave; richiesta in questo sito';
$lang['Birthday_to_low'] = 'Spiacente, questo sito, non accetta user con meno di %d anni di et&agrave;';
$lang['Submit_date_format'] = 'd-m-Y'; //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different seperators are accepted)
$lang['Birthday_greeting_today'] = 'I nostri migliori auguri per i tuoi %s anni.';//%s is substituted with the users age
$lang['Birthday_greeting_prev'] = 'I nostri migliori auguri per aver compiuto %s anni il %s.';//%s is substituted with the users age, and birthday
$lang['Greeting_Messaging'] = 'Buon Compleanno!!!';
$lang['Birthday_today'] = 'Oggi &egrave; il compleanno di:';
$lang['Birthday_week'] = 'Nei prossimi %d giorni &egrave; il compleanno di:';
$lang['Nobirthday_week'] = 'Nessun utente compir&agrave; gli anni nei prossimi %d giorni'; // %d is substitude with the number of days
$lang['Nobirthday_today'] = 'Nessuno oggi compie gli anni';
$lang['Year'] = 'Anno';
$lang['Month'] = 'Mese';
$lang['Day'] = 'Giorno';

// NOTE: Please do not translate the following 4 lines!
// They are automatically translated into your language
$lang['day_short'] = array ($lang['datetime']['Sun'], $lang['datetime']['Mon'], $lang['datetime']['Tue'], $lang['datetime']['Wed'], $lang['datetime']['Thu'], $lang['datetime']['Fri'], $lang['datetime']['Sat']);
$lang['day_long'] = array ($lang['datetime']['Sunday'], $lang['datetime']['Monday'], $lang['datetime']['Tuesday'], $lang['datetime']['Wednesday'], $lang['datetime']['Thursday'], $lang['datetime']['Friday'], $lang['datetime']['Saturday']);
$lang['month_short'] = array ($lang['datetime']['JAN'], $lang['datetime']['FEB'], $lang['datetime']['MAR'], $lang['datetime']['APR'], $lang['datetime']['MAY'], $lang['datetime']['JUN'], $lang['datetime']['JUL'], $lang['datetime']['AUG'], $lang['datetime']['SEP'], $lang['datetime']['OCT'], $lang['datetime']['NOV'], $lang['datetime']['DEC']);
$lang['month_long'] = array ($lang['datetime']['January'], $lang['datetime']['February'], $lang['datetime']['March'], $lang['datetime']['April'], $lang['datetime']['May'], $lang['datetime']['June'], $lang['datetime']['July'], $lang['datetime']['August'], $lang['datetime']['September'], $lang['datetime']['October'], $lang['datetime']['November'], $lang['datetime']['December']);
// End add - Birthday MOD

// Start add - Who viewed a topic MOD
$lang['Topic_view_users'] = 'Utenti che hanno visualizzato questo argomento';
$lang['Topic_time'] = 'Ultima Visita';
$lang['Topic_count'] = 'Visite';
$lang['Topic_view_count'] = 'Contatore Visualizzazioni Argomento';
// End add - Who viewed a topic MOD

$lang['Global_Announcements'] = 'Annunci Globali';
$lang['Announcements'] = 'Annunci';
$lang['Sticky_Topics'] = 'Argomenti Importanti';
$lang['Announcements_and_Sticky'] = 'Annunci ed Argomenti Importanti';
// Message too short
$lang['Message_too_short'] = 'Messaggio troppo breve.';

$lang['Today_at'] = '<b class="date-today">Oggi</b> alle ';
$lang['Yesterday_at'] = '<b class="date-yesterday">Ieri</b> alle ';
$lang['TODAY'] = '<b class="date-today">Oggi</b>';
$lang['YESTERDAY'] = '<b class="date-yesterday">Ieri</b>';

// Start add - Yellow card admin MOD
$lang['Give_G_card'] = 'Riattiva user';
$lang['Give_Y_card'] = 'Cartellino giallo #%d';
$lang['Give_R_card'] = 'Espelli questo utente';
$lang['Ban_update_sucessful'] = 'La lista utenti espulsi &egrave; stata aggiornata';
$lang['Ban_update_green'] = 'Utente riattivato';
$lang['Ban_update_yellow'] = 'Questo utente ha ricevuto una ammonizione ed ha un totale di %d ammonizioni su un massimo di %d consentite';
$lang['Ban_update_red'] = 'Utente espulso';
$lang['Ban_reactivate'] = 'Il vostro account &egrave; stato riattivato';
$lang['Ban_warning'] = 'Siete stati ammoniti';
$lang['Ban_blocked'] = 'Siete stati espulsi';
$lang['Click_return_viewtopic'] = 'Clicca %sQUI%s per ritornare all\'argomento';
$lang['Rules_ban_can'] = '<b>Puoi</b> ammonire gli utenti';
$lang['user_no_email'] = 'Questo utente non ha un indirizzo email, pertanto nessun messaggio pu&ograve; essergli inviato. Devi mandare un messaggio privato';
$lang['user_already_banned'] = 'Questo utente risulta gi&agrave; bannato';
$lang['Ban_no_admin'] ='Questo utente &egrave; un ADMIN e quindi non pu&ograve; essere espulso';
$lang['Rules_greencard_can'] = '<b>Puoi</b> riattivare gli utenti ';
$lang['Rules_bluecard_can'] = '<b>Puoi</b> segnalare i messaggi al moderatore';
$lang['Give_b_card'] = 'Segnala questo messaggio al moderatore';
$lang['Clear_b_card'] = 'Questo messaggio ha %d blue card. Applicando questa selezione questo conteggio verr&agrave; azzerato';
$lang['No_moderators'] = 'Questo forum non &egrave; moderato. Nessun rapporto pu&ograve; essere inviato!';
$lang['Post_repported'] = 'Questo messaggio &egrave; stato segnalato al moderatore %d';
$lang['Post_repported_1'] = 'Questo messaggio &egrave; stato segnalato al moderatore';
$lang['Post_repport'] = 'Segnalazione';//Subject in email notification
$lang['Post_reset'] = 'Il numero di blue cards di questo messaggio &egrave; stato azzerato';
$lang['Search_only_bluecards'] = 'Cerca solo i messaggi con blue cards';
$lang['Send_message'] = 'Clicca %sQUI%s per scrivere un messaggio al moderatore o<br />';
$lang['Send_PM_user'] = 'Clicca %sQUI%s contattare in privato utente o';
$lang['Link_to_post'] = 'Clicca %sQUI%s per andare al messaggio segnalato
--------------------------------

';
$lang['Post_a_report'] = 'Segnala';
$lang['Report_stored'] = 'La vostra segnalazione &egrave; stata inserita';
$lang['Send_report'] = 'Clicca %sQUI%s per tornare al messaggio originale';
$lang['Red_card_warning'] = 'State per dare un cartellino rosso a %s, provocandone una espulsione . Siete sicuri?';
$lang['Yellow_card_warning'] = 'State per dare un cartellino giallo a %s, questo equivale ad ammonirlo. Siete sicuri?';
$lang['Green_card_warning'] = 'State per riammettere %s. Siete sicuri?';
$lang['Blue_card_warning'] = 'State per dare una blue card al messaggio. Il sistema invia in questi casi un messaggio di avviso al moderatore. Siete sicuri di voler segnalare questo messaggio?';
$lang['Clear_blue_card_warning'] = 'State per azzerare il numero delle blue card relative a questo messaggio. Volete continuare?';
$lang['Warnings'] = 'Cartellini gialli: %d';// Shown beside users post, if any warnings given to the user
$lang['Banned'] = 'Espulso';// Shown beside users post, if user is banned

// Retroactive Signature MOD
$lang['Retro_sig'] = 'Aggiungi la Firma ai vecchi messaggi';
$lang['Retro_sig_explain'] = 'Se aggiungi/modifichi la tua Firma, il Forum di norma la applica solo ai nuovi messaggi';
$lang['Retro_sig_checkbox'] = 'Metti un segno di spunta qui per aggiungere la Firma anche ai vecchi messaggi';
// End Retro Sig MOD
//signature editor
$lang['sig_edit_link'] = 'Firma';
$lang['sig_description'] = 'Modifica Firma (<i>Anteprima inclusa</i>)';
$lang['sig_edit'] = 'Modifica Firma';
$lang['sig_current'] = 'Firma Attuale';
$lang['sig_none'] = 'Firma non disponibile';
$lang['sig_save'] = 'Salva';
$lang['sig_save_message'] = 'Firma salvata con successo!';

$lang['Guestbook'] = 'Guestbook';
$lang['Viewing_guestbook'] = 'Read the guestbook';

$lang['Click_return_preferences'] = 'Clicca %sQUI%s per tornare alle Impostazioni';

// Start add - Last visit MOD
$lang['Last_logon'] = 'Ultima visita';
$lang['Hidde_last_logon'] = 'Nascosto';
$lang['Never_last_logon'] = 'Mai';
$lang['Users_today_zero_total'] = 'In totale <b>0</b> utenti hanno visitato questo forum oggi: ';
$lang['Users_today_total'] = 'In totale <b>%d</b> utenti hanno visitato questo forum oggi: ';
$lang['User_today_total'] = 'In totale <b>%d</b> utente ha visitato questo forum oggi: ';
$lang['Users_lasthour_explain'] = ', %d nell\'ultima ora.';
$lang['Users_lasthour_none_explain'] = ''; // Shown if no one has visited in the last hour

$lang['Years'] = 'Anni';
$lang['Year'] = 'Anno';
$lang['Weeks'] = 'Settimane';
$lang['Week'] = 'Settimana';
$lang['Day'] = 'Giorno';
$lang['Total_online_time'] = 'Durata totale online';
$lang['Last_online_time'] = 'Ultima durata online';
$lang['Number_of_visit'] = 'Numero di visite';
$lang['Number_of_pages'] = 'Totale pagine viste';
// End add - Last visit MOD

$lang['total_site_hits_key'] = 'Sono state viste %V% Pagine dal %D%.';

// Start add - Online/Offline/Hidden Mod
$lang['Online'] = 'Online';
$lang['Offline'] = 'Offline';
$lang['Hidden'] = 'Nascosto';

$lang['Online_status'] = 'Stato';
// End add - Online/Offline/Hidden Mod

// News
$lang['xs_latest_news'] = 'Ultime News';
$lang['xs_no_news'] = 'Non ci sono news.';
$lang['xs_news_version'] = 'Versione XS News: %s';
$lang['xs_news_ticker_feed'] = 'Fonte XML Feed: %s';

$lang['Home'] = 'Home';

// Begin Thanks Mod
$lang['thankful'] = 'Persone Riconoscenti';
$lang['thanks_to'] = 'Ringraziano per l\'utile discussione di';
$lang['thanks_end'] = ':';
$lang['thanks_alt'] = 'Ringrazia per la discussione';
$lang['thanks_add_rate'] = 'Ringrazia l\'autore per la discussione';
$lang['thanked_before'] = 'Hai gi&agrave; rignraziato per questa discussione';
$lang['thanks_add'] = 'I tuoi ringraziamenti sono stati aggiunti';
$lang['thanks_not_logged'] = 'Devi effettuare il login per poter ringraziare qualcuno';
$lang['thanks2'] = 'Grazie mille!<br />';
// End Thanks Mod

$lang['Warn_new_post'] = 'C\'&egrave; almeno una nuova risposta a questa Discussione. Per Cortesia dai un occhiata alle nuove risposte e reinvia il tuo post.';

// Start add - Gender MOD
$lang['Gender'] = 'Sesso';//used in users profile to display witch gender he/she is
$lang['Male'] = 'Uomo';
$lang['Female']= 'Donna';
$lang['No_gender_specify'] = 'Non Specificato';
$lang['Gender_require'] = 'Su questo sito E\' necessario specificare il proprio sesso.';
// End add - Gender MOD

$lang['Download_Code'] = 'download';

// db_update generator
$lang['Db_update_generator'] = 'Generatore Update DB';
$lang['Instructions'] = 'Istruzioni';
$lang['SQL_instructions'] = 'Questo software permette di creare files PHP che servono per l\'update del tuo database direttamente dal browser. Ci sono un po\' di cose che devi tenere in considerazione prima di inserire le query SQL nel box sottostante.<br />Anzitutto, assicurati che ogni query SQL termini con un punto e virgola (;). Altrimenti il file creato potrebbe contenere errori. In secondo luogo assicurati che le tabelle abbiano il prefisso "phpbb_". Questo prefisso verr&agrave; rimpiazzato da un piccolo pezzo di codice che ti render&agrave; in grado di usare il file db_update.php su tutti i forum, senza preoccuparti di quale prefisso abbiano le tabelle.';
$lang['Enter_SQL'] = 'Inserisci SQL';
$lang['Enter_SQL_explain'] = 'MySQL &egrave; il database open source pi&ugrave; famoso del mondo, riconosciuto per la sua velocit&agrave; e per la sua affidabilit&agrave;.';
$lang['Output_SQL'] = 'Output SQL';
$lang['Output_SQL_explain'] = 'Copia e in colla il testo dall\'area di testo in un file vuoto. Salva il file come <u>db_update.php</u> fanne l\'upload sul tuo server. Fallo girare una volta accedendoci con il browser.<br /><br />Alternativamente clicca sul bottone per il download per scaricare il file direttamente sul tuo computer (metodo raccomandato).';
$lang['Download'] = 'Download';

$lang['TOP_POSTERS'] = 'Utenti Migliori';

// Tell A Friend
$lang['TELL_FRIEND'] = 'Segnala via email';
$lang['TELL_FRIEND_SENDER_USER'] = 'Il tuo nome';
$lang['TELL_FRIEND_SENDER_EMAIL'] = 'Il tuo indirizzo email';
$lang['TELL_FRIEND_RECIEVER_USER'] = 'Il nome del tuo amico';
$lang['TELL_FRIEND_RECIEVER_EMAIL'] = 'L\'indirizzo email del tuo amico';
$lang['TELL_FRIEND_WRONG_EMAIL'] = 'L\'indirizzo email indicato non &egrave; valido.';
$lang['TELL_FRIEND_MSG'] = 'Il tuo messaggio:';
$lang['TELL_FRIEND_TITLE'] = 'Segnala ad un amico';
$lang['TELL_FRIEND_BODY'] = "Ciao,\nho letto questa discussione sull'argomento &raquo;{TOPIC}&laquo; su {SITENAME} ed ho pensato che potrebbe interessarti.\n\nQuesto &egrave; il link: {LINK}\n\nVai e leggi e, se vuoi rispondere, ricordati che probabilmente dovrai registrarti.";

// Default Subject on Reply
$lang['RE'] = 'Re';

//Begin Lo-Fi Mod
$lang['Lofi'] = 'Visualizzazione Lo-Fi';
//$lang['Full_Version'] = 'Visualizzazione Integrale';
$lang['Full_Version'] = 'Questa visualizzazione "Lo-Fi" &egrave; semplificata. Per avere la versione completa di formattazioni ed immagini clicca su questo link.';
$lang['quote_lofi'] = 'Quota';
$lang['edit_lofi'] = 'Modifica';
$lang['ip_lofi'] = 'IP';
$lang['del_lofi'] = 'Elimina';
$lang['profile_lofi'] = 'Profilo';
$lang['pm_lofi'] = 'PM';
$lang['email_lofi'] = 'E-mail';
$lang['website_lofi'] = 'SitoWeb';
$lang['icq_lofi'] = 'ICQ';
$lang['aim_lofi'] = 'AIM';
$lang['yim_lofi'] = 'YIM';
$lang['msnm_lofi'] = 'MSN';
$lang['quick_lofi'] = 'Risposta Rapida';
$lang['new_pm_lofi'] = 'Spedisci un PM';
//End Lo-Fi Mod

$lang['legend'] = 'Legenda';
$lang['users'] = 'Utenti';
//added to autogroup mod
$lang['No_more'] = 'Non si accettano altri utenti';
$lang['No_add_allowed'] = 'l\'aggiunta automatica di utenti non &egrave; consentita';
$lang['Join_auto'] = 'Puoi iscriverti a questo gruppo, visto che il tuo numero di post &egrave; compatibile con quello del criterio del gruppo';


$lang['Downloads'] = 'Downloads';
// merge topics
$lang['Merge'] = 'Unisci';
$lang['Merge_topic'] = 'Unisci alla Discussione';
$lang['Topics_Merged'] = 'Le Discussioni selezionate sono state unite.';
$lang['No_Topics_Merged'] = 'Non &egrave; stata unita alcuna discussione.';
$lang['Confirm_merge_topic'] = 'Sei sicuro di voler unire le discussioni selezionate?';

// Start add - Bin Mod
$lang['Move_bin'] = 'Sposta questa discussione nel cestino';
$lang['Topics_Moved_bin'] = 'Le discussioni selezionate sono state spostate nel cestino.';
$lang['Bin_disabled'] = 'Il Cestino &egrave; stato disabilitato';
$lang['Bin_recycle'] = 'Cestina';
// End add - Bin Mod

$lang['Topics_Title_Edited'] = 'I titoli delle discussioni selezionate sono stati modificati.';
$lang['Edit_title'] = 'Modifica Titolo';
$lang['PM'] = 'PM';

// Start Advanced IP Tools Pack MOD
$lang['Moderator_ip_information'] = 'Informazioni indirizzo IP per i soli Moderatori';
$lang['Registered_ip_address'] = 'Indirizzo IP Registrato';
$lang['Registered_hostname'] = 'Hostname Registrato';
$lang['Other_registered_ips'] = 'Altri utenti regitrati con l\'IP: %s'; //%s is the IP address
$lang['Other_posted_ips'] = 'Indirizzi IP da cui ha scritto questo utente';
$lang['Search_ip'] = 'Ricerca posts secondo indirizzo IP';
$lang['Search_ip_explain'] = 'Immetti un indirizzo IP nel formato <u>127.0.0.1</u> - Puoi inoltre usare * come wildcard per corrispondenze parziali come <u>127.*.*.1</u>';
$lang['IP'] = 'IP';
$lang['Whois'] = 'Whois';
$lang['Browser'] = 'Browser';
$lang['No_other_registered_ips'] = 'Non si &egrave; registrato nessun altro con questo IP.';
$lang['No_other_posted_ips'] = 'Questo utente non ha mai postato.';
$lang['Not_recorded'] = 'Non Registrato';
$lang['Logins'] = 'Logins';
$lang['No_logins'] = 'Non sono stati registrati logins per questo utente.';
// End Advanced IP Tools Pack MOD

$lang['LIW_click_image'] = 'Clicca per vedere l\'immagine nella sua dimensione originale';
$lang['LIW_click_image_explain'] = 'Clicca sull\'immagine per vederla nella sua dimensione originale';

// Mighty Gorgon - Full Album Pack - BEGIN
$lang['Album'] = 'Album';
$lang['Personal_Gallery'] = 'Galleria Personale';
$lang['Personal_Gallery_Of_User'] = 'Galleria Personale Di %s';
$lang['Personal_Gallery_Of_User_Profile'] = 'Galleria Personale di %s (%d Immagini)';
$lang['Show_All_Pic_View_Mode_Profile'] = 'Mostra tutte le Immagini nella Galleria Personale di %s (senza Sottocategorie)';
$lang['Not_allowed_to_view_album'] = 'Non sei autorizzato a visualizzare l\'album';
$lang['Not_allowed_to_upload_album'] = 'Non sei autorizzato a caricare immagini nell\'album. Contatta l\'amministratore per ulteriori informazioni.';
$lang['Album_empty'] = 'Non ci sono immagini nell\'album<br />Clicca su <b>Upload Pic</b> per caricarne una.';
$lang['Album_empty2'] = 'Non ci sono immagini nell\'album';
$lang['Upload_New_Pic'] = 'Carica Nuova Immagine';
$lang['Pic_Title'] = 'Titolo Immagine';
$lang['Pic_Title_Explain'] = 'E\' molto importante assegnare un buon titolo all\'immagine, in questo modo gli utenti hanno gi&agrave; un\'idea sul contenuto senza bisogno di visualizzarla.';
$lang['Pic_Upload'] = 'Carica Immagine';
$lang['Pic_Upload_Explain'] = 'Formati consentiti: JPG, GIF e PNG. La dimensione massima &egrave; %s bytes. La grandezza massima &egrave; %sx%s pixels.';
$lang['Album_full'] = 'l\'album ha raggiunto il livello massimo di immagini. Contatta l\'amministratore per ulteriori informazioni.';
$lang['Album_upload_successful'] = 'Grazie, la tua immagine &egrave; stata caricata con successo.';
$lang['Click_return_album'] = 'Clicca %sQUI%s per tornare all\'Album';
$lang['Invalid_upload'] = 'Errore nel caricamento<br /><br />l\'immagine &egrave; troppo grande, oppure l\'estensione non &egrave; di quelle consentite.';
$lang['Image_too_big'] = 'l\'immagine ha dimensioni troppo elevate.';
$lang['Uploaded_by'] = 'Caricata da';
$lang['Category_locked'] = 'Questa categoria &egrave; stata bloccata e non si possono caricare immagini. Contatta l\'amministratore per ulteriori informazioni.';
$lang['View_Album_Index'] = 'Indice Album';
$lang['View_Album_Personal'] = 'Sta visualizzando le Gallerie Personali degli utenti';
$lang['View_Pictures'] = 'Sta visualizzando immagini nell\'Album';
$lang['Album_Search'] = 'Ricerca nell\'Album';
$lang['Pic_Name'] = 'Nome Immagine';
$lang['Description'] = 'Descrizione';
$lang['Search_Contents'] = ' che contiene: ';
$lang['Search_Found'] = 'La ricerca ha trovato ';
$lang['Search_Matches'] = 'Risultati:';
// Mighty Gorgon - Full Album Pack - END


// XS News
$lang['xs_latest_news'] = 'Ultime News';
$lang['xs_no_news'] = 'Non ci sono News';
$lang['xs_news_version'] = 'Versione XS News: %s';
$lang['xs_news_ticker_feed'] = 'Fonte XML Feed: %s';
$lang['xs_no_ticker'] = 'Non ci sono Tickers definiti, per cortesia vai al Pannello di Amministrazione per crearne uno.';
$lang['xs_news_ticker_title'] = 'News Ticker';
$lang['xs_news_tickers_title'] = 'News Tickers';
$lang['xs_news_item_title'] = 'News';
$lang['xs_news_items_title'] = 'News';
$lang['hide'] = 'Nascondi';
$lang['show'] = 'Mostra';
$lang['Welcome'] = 'Benvenuto';
$lang['birthdays'] = 'Compleanni';

//Battle of the Sexes
$lang['male_zero_total'] = '<b>0</b> Utenti Maschi'; // # registered male users
$lang['male_total'] = '<b>%d</b> Utenti Maschi'; // # registered male users
$lang['male_one_total'] = '<b>%d</b> Utente Maschio'; // # registered male users
$lang['female_zero_total'] = 'Abbiamo <b>0</b> Utenti Femmine'; // # registered female users
$lang['female_total'] = 'Abbiamo <b>%d</b> Utenti Femmine'; // # registered female users
$lang['female_one_total'] = 'Abbiamo <b>%d</b> Utente Femmina'; // # registered female users
$lang['unknown_total'] = 'e <b>%d</b> Utenti che non hanno ancora deciso';
$lang['unknown_one_total'] = 'e <b>%d</b> Utente che non ha ancora deciso';
$lang['unknown_zero_total'] = '';
$lang['battle_of_sexes'] = 'Battaglia dei Sessi: ';

$lang['who_viewed'] = 'Visite Discussione';

$lang['View_post'] = 'Vedi Messaggio';
$lang['Post_review'] = 'Revisione Messaggio';
$lang['View_next_post'] = 'Vedi Prossimo Messaggio';
$lang['View_previous_post'] = 'Vedi Messaggio Precedente';
$lang['No_newer_posts'] = 'Non ci sono messaggi pi&ugrave nuovi in questo forum';
$lang['No_older_posts'] = 'Non ci sono messaggi pi&ugrave vecchi in questo forum';

$lang['StaffSite'] = 'Staff Site';
$lang['Staff_level'] = array('Amministratore', 'Moderatore');
$lang['Staff_forums'] = 'Forum';
$lang['Staff_stats'] = 'Statistiche';
$lang['Staff_user_topic_day_stats'] = '%.2f Discussioni al giorno'; // %.2f = topics per day
$lang['Staff_period'] = 'da %d giorni'; // %d = days
$lang['Staff_contact'] = 'Contatti';
$lang['Staff_messenger'] = 'Messenger';

// Start Edit Notes MOD
$lang['Edit_notes'] = 'Note di Modifica';
$lang['Delete_note'] = 'Elimina Nota';
$lang['Edited_by'] = 'Modificato da';
$lang['Confirm_delete_edit_note'] = 'Sei certo di voler eliminare questa Nota di Modifica?';
$lang['Edit_note_deleted'] = 'La Nota di Modifica selezionata &egrave; stata eliminata con successo';
// End Edit Notes MOD

//Referrers Mod
$lang['Referrers'] = 'Http Referrers';
$lang['Viewing_Referrers'] = 'Sta guardando i Referrers';
//Referrers Mod End

// Recent Topics
$lang['Recent_topics'] = 'Argomenti Recenti';
$lang['Recent_today'] = 'Oggi';
$lang['Recent_yesterday'] = 'Ieri';
$lang['Recent_last24'] = 'Ultime 24 ore';
$lang['Recent_lastweek'] = 'Ultima settimana';
$lang['Recent_lastXdays'] = 'Ultimi %s giorni';
$lang['Recent_last'] = 'Ultimi';
$lang['Recent_days'] = 'Giorni';
$lang['Recent_first'] = 'iniziato %s';
$lang['Recent_first_poster'] = '%s';
$lang['Recent_select_mode'] = 'Seleziona modalit&agrave;:';
$lang['Recent_showing_posts'] = 'Visualizzazione messaggi:';
$lang['Recent_title_one'] = '%s argomento %s'; // %s = topics; %s = sort method
$lang['Recent_title_more'] = '%s argomenti %s'; // %s = topics; %s = sort method
$lang['Recent_title_today'] = ' da oggi';
$lang['Recent_title_yesterday'] = ' da ieri';
$lang['Recent_title_last24'] = ' nelle ultime 24 ore';
$lang['Recent_title_lastweek'] = ' nell\'ultima settimana';
$lang['Recent_title_lastXdays'] = ' negli ultimi %s giorni'; // %s = days
$lang['Recent_no_topics'] = 'Nessun argomento trovato.';
$lang['Recent_wrong_mode'] = 'Modalit&agrave; selezionata errata.';
$lang['Recent_click_return'] = 'Clicca %sQUI%s per ritornare indietro.';

$lang['Profile_view_option'] = 'Finestra di Pop up per la visione del profilo';
$lang['Profile_viewed'] = 'Visite Profilo';

// BEGIN Disable Registration MOD
$lang['registration_status'] = 'Spiacenti, ma al momento le registrazioni a questo forum sono chiuse. Per cortesia riprova pi&ugrave; tardi.';
// END Disable Registration MOD

$lang['PostHighlight'] = 'Seleziona';
$lang['QuickQuote'] = 'Citazione Veloce';
$lang['Randomquote'] = 'Citazione Casuale';

// Mod User CP Organize
$lang['Cpl_Navigation'] = 'Pannello Di Controllo';
$lang['Cpl_Settings_Options'] = 'Impostazioni';
$lang['Cpl_Board_Settings'] = 'Impostazioni Sito';
$lang['Cpl_NewMSG'] = 'Invia un Nuovo Messaggio';
$lang['Cpl_Click_Return_Cpl'] = 'O clicca %sQUI%s per ritornare al Pannello Di Controllo';
$lang['Cpl_Personal_Profile'] = 'Dati Personali';
$lang['Cpl_More_info'] = 'Sottoscrizioni';

$lang['Forbidden_characters'] = 'Per lo Username sono permessi solo i seguenti caratteri a-z, 0-9, -, _ e gli spazi.';

$lang['Topics_per_page'] = 'Argomenti Per Pagina';
$lang['Posts_per_page'] = 'Messaggi Per Pagina';
$lang['Hot_threshold'] = 'Numero Messaggi Argomento Popolare';

// enhanced modcp..
$lang['Mod_CP_first_post'] = 'Primo Messaggio';
$lang['Mod_CP_topic_count'] = 'trovato <b>%s</b> argomento.';
$lang['Mod_CP_topics_count'] = 'trovati <b>%s</b> argomenti.';
$lang['Mod_CP_no_topics'] = 'Nessun argomento No topics met the criteria.';
$lang['Mod_CP_sticky'] = 'Importante';
$lang['Mod_CP_announce'] = 'Annuncio';
$lang['Mod_CP_global'] = 'Annuncio Globale';
$lang['Mod_CP_normal'] = 'Normale';
$lang['Display_sticky'] = 'Importanti';
$lang['Display_announce'] = 'Annunci';
$lang['Display_global'] = 'Annunci Globali';
$lang['Display_poll'] = 'Sondaggi';
$lang['Display_shadow'] = 'Spostati';
$lang['Display_locked'] = 'Bloccati';
$lang['Display_unlocked'] = 'Sbloccati';
$lang['Display_unread'] = 'Non-Letti';
$lang['Display_unanswered'] = 'Senza Risposta';
$lang['Display_all'] = 'Tutti';
$lang['Mod_CP_confirm_delete_polls'] = 'Sicuro di voler eliminare questi sondaggi?';
$lang['Mod_CP_poll_removed'] = 'Il sondaggio selezionato &egrave; stato eliminato dall\'argomento senza problemi.';
$lang['Mod_CP_polls_removed'] = 'I sondaggi selezionati sono stati eliminati dagli argomenti senza problemi.';
$lang['Mod_CP_topic_removed'] = 'Gli argomenti selezionati sono stati rimossi senza problemi dal database.';
$lang['Mod_CP_topic_moved'] = 'L\'argomento selezionato &egrave; stato spostato da <b>%s</b> a <b>%s</b>.'; // %s = old/new forum
$lang['Mod_CP_topics_moved'] = 'Gli argomenti selezionati sono stati spostati da <b>%s</b> a <b>%s</b>.'; // %s = old/new forum
$lang['Mod_CP_topic_locked'] = 'L\'argomento selezionato &egrave; stato bloccato.';
$lang['Mod_CP_topic_unlocked'] = 'L\'argomento selezionato &egrave; stato sbloccato.';
$lang['Mod_CP_topics_sticked'] = 'Gli argomenti selezionati sono stati resi Importanti.';
$lang['Mod_CP_topic_sticked'] = 'L\'argomento selezionato &egrave; stato reso Importante.';
$lang['Mod_CP_topics_announced'] = 'Gli argomenti selezionati sono stati resi Annunci.';
$lang['Mod_CP_topic_announced'] = 'L\'argomento selezionato &egrave; stato reso Annuncio.';
$lang['Mod_CP_topics_globalized'] = 'Gli argomenti selezionati sono stati resi Annunci Globali.';
$lang['Mod_CP_topic_globalized'] = 'L\'argomento selezionato &egrave; stato reso Annuncio Globale.';
$lang['Mod_CP_topics_normalized'] = 'Gli argomenti selezionati sono stati resi Normali.';
$lang['Mod_CP_topic_normalized'] = 'L\'argomento selezionato &egrave; stato reso Normale.';
$lang['Mod_CP_click_return_topic'] = 'Clicca %sQUI%s per ritornare al vecchio argomento o %sQUI%s per andare al nuovo.';

// ..enhanced modcp
$lang['t_starter'] = 'Non puoi ringraziare te stesso';
$lang['Watched_Topics'] = 'Discussioni Controllate';
$lang['No_Watched_Topics'] = 'Non stai controllando alcuna discussione';
$lang['Watched_Topics_Started'] = 'Argomento Iniziato';
$lang['Watched_Topics_Stop'] = 'Smetti di Controllare';

// Start add - Forum notification MOD
$lang['Stop_watching_forum'] = 'Smetti di controllare questo Forum';
$lang['Start_watching_forum'] = 'Controlla i messaggi in questo Forum';
$lang['No_longer_watching_forum'] = 'Non stai pi&ugrave; controllando questo Forum.';
$lang['You_are_watching_forum'] = 'Stai controllando questo forum.';
// End add - Forum notification MOD
$lang['profile_main'] = 'Informazioni generali';
$lang['profile_explain'] = 'Benvenuto nel tuo Pannello Di Controllo. Da qui puoi modificare e aggiornare il tuo profilo, le tue preferenze, monitorare i forum. Puoi inoltre spedire messaggi agli altri utenti (se permesso).';
$lang['your_activity'] = 'Profilo';

$lang['UCP_SubscForums'] = 'Lista Forum Controllati';
$lang['UCP_NoSubscForums'] = 'Non stai controllando nessun Forum';
$lang['UCP_SubscForums_Flag'] = 'Flag';
$lang['UCP_SubscForums_Forum'] = 'Forum';
$lang['UCP_SubscForums_Forum_subscribed'] = 'Forum Sottoscritti';
$lang['UCP_SubscForums_Forum_already_subscribed'] = 'Sei gi&agrave; sottoscritto a questoYou are already subscibed to this Forum';
$lang['UCP_SubscForums_Click_return_forum'] = 'Clicca %sQUI%s per ritornare al Forum';
$lang['UCP_SubscForums_Topics'] = 'Discussioni';
$lang['UCP_SubscForums_Posts'] = 'Posts';
$lang['UCP_SubscForums_LastPost'] = 'Ultimo Post';
$lang['UCP_SubscForums_UnSubscribe'] = 'Annulla la sottoscrizione';
$lang['UCP_SubscForums_NewTopic'] = 'Nuova Discussione';

$lang['Gravatar'] = 'Gravatar';
$lang['Gravatar_explain'] = 'Se hai un <a href="http://www.gravatar.com" target="_blank">gravatar</a>, inserisci qui l\'indirizzo email associato ad esso.';

/* Start Private Message Review By aUsTiN */
$lang['private_msg_review_title'] = 'Messaggio al quale stai rispondendo';
$lang['private_msg_review_error'] = 'Errore nella Ricerca dei Messaggi Privati!';
/* End Private Message Review By aUsTiN */


$lang['BSH_Viewing_Topic'] = 'Sta Guardando la discussione: %t%';
$lang['BSH_Viewing_Post'] = '%sSta Guardando un Messaggio%s';
$lang['BSH_Viewing_Profile'] = 'Sta Guardando il Profilo di %u%';
$lang['BSH_Viewing_Groups'] = '%sSta Guardando i Gruppi%s';
$lang['BSH_Viewing_Forums'] = 'Sta Guardando il Forum: %f%';
$lang['BSH_Index'] = '%sSta Guardando l\'Indice%s';
$lang['BSH_Searching_Forums'] = '%sSta Cercando nei Forum%s';
$lang['BSH_Viewing_Onlinelist'] = '%sSta Guardando la lista degli Utenti Online%s';
$lang['BSH_Viewing_Messages'] = '%sSta Guardando i Messaggi Privati%s';
$lang['BSH_Viewing_Memberlist'] = '%sSta Guardano la Lista degli Utenti%s';
$lang['BSH_Login'] = '%sSta Effettuando il Login%s';
$lang['BSH_Logout'] = '%sSta Effettuando il LogOut%s';
$lang['BSH_Editing_Profile'] = '%sSta modificando il Profilo%s';
$lang['BSH_Viewing_ACP'] = '%sSta Guardando l\'ACP%s';
$lang['BSH_Moderating_Forum'] = '%sSta Moderando i Forum%s';
$lang['BSH_Viewing_FAQ'] = '%sSta Guardando le FAQ%s';
$lang['BSH_Viewing_Category'] = 'Sta Guardando la Categoria: %c%';

$lang['Board_statistic'] = 'Statistiche Forum';
$lang['Database_statistic'] = 'Statistiche Database';
$lang['Version_info'] = 'Informazioni Versione';
$lang['Thereof_deactivated_users'] = 'Numero di membri non attivi';
$lang['Thereof_Moderators'] = 'Numero di Moderatori';
$lang['Thereof_Junior_Administrators'] = 'Numero di Amministratori Junior';
$lang['Thereof_Administrators'] = 'Numero di Amministratori';
$lang['Deactivated_Users'] = 'Membri in attesa dell\'Attivazione';
$lang['Users_with_Mod_Privileges'] = 'Membri con i privilegi di Moderatore';
$lang['Users_with_Junior_Admin_Privileges'] = 'Membri con i privilegi di Amministratore Junior';
$lang['Users_with_Admin_Privileges'] = 'Membri con i privilegi di Amministratore';
$lang['DB_size'] = 'Dimensioni del database';
$lang['Version_of_ip'] = 'Versione di <a href="http://www.icyphoenix.com/">Icy Phoenix</a>';
$lang['Version_of_board'] = 'Versione di <a href="http://www.phpbb.com">phpBB</a>';
$lang['Version_of_PHP'] = 'Versione di <a href="http://www.php.net/">PHP</a>';
$lang['Version_of_MySQL'] = 'Versione di <a href="http://www.mysql.com/">MySQL</a>';
$lang['Download_post'] = 'Download Messaggio';
$lang['Download_topic'] = 'Download Discussione';
$lang['Always_swear'] = 'Consenti parole censurate';

$lang['Shoutbox'] = 'Shoutbox';
$lang['Shoutbox_date'] = ' d m Y h:i:s';
$lang['Shout_censor'] = 'Shout Rimosso!';
$lang['Shout_refresh'] = 'Aggiorna';
$lang['Shout_text'] = 'Testo';
$lang['Viewing_Shoutbox']= 'Shoutbox';
$lang['Censor'] ='Censura';

$lang['Edit_post_time'] = 'Modifica Orario Messaggio';
$lang['Edit_post_time_xs'] = 'Modifica';
$lang['Topic_time_xs'] = 'Ora Discussione';
$lang['Post_time'] = 'Ora Messaggio';
$lang['Post_time_successfull_edited'] = '<b>Ora Aggiornata Senza Problemi.</b></span><br /><span class="postdetails">Questa finestra si chiuder&agrave; in 3 secondi.';

$lang['staff_message'] = 'Messaggio Dallo Staff';

$lang['Board_Rules'] = 'Regolamento';
$lang['Forum_Rules'] = 'Regolamento';
$lang['Show_avatars'] = 'Visualizza Avatars nelle Discussioni';
$lang['Show_signatures'] = 'Visualizza Firme nelle Discussioni';

//016
$lang['Acronym'] = 'Acronimo';
$lang['Acronyms'] = 'Acronimi';
$lang['User_Number'] = 'Utente #';
$lang['Member_Count'] = 'Utenti';
$lang['BoardRules'] = 'Regolamento';

//018
$lang['Click_read_topic'] = 'Clicca %sQUI%s per leggerlo'; // %s's here are for uris, do not remove!
$lang['Create_with_generator'] = 'Crea Avatar con Avatar Generator';
$lang['View_avatar_generator'] = 'Avatar Generator';

//027
$lang['Adv_Search'] = 'Ricerca Avanzata';
$lang['Search_Explain'] = 'Ricerca interna al sito';

//030
$lang['Login_attempts_exceeded'] = 'Il numero massimo di %s tentativi di login consentiti sono stati superati. Potrai riprovare tra %s minuti.';
$lang['Please_remove_install_contrib'] = 'Elimina le cartelle install/ e contrib/ dal tuo server';

//033
$lang['Search_Engines'] = 'Bots Motori di Ricerca:';
$lang['Bots_browsing_forum'] = 'Bots Motori di Ricerca in questo forum:';

//036
$lang['Debug_On'] = 'Debug On';
$lang['Debug_Off'] = 'Debug Off';
$lang['Page_Generation_Time'] = 'Tempo Generazione';
$lang['Memory_Usage'] = 'Memoria';
$lang['SQL_Queries'] = 'SQL queries';
$lang['Search_new2'] = 'Nuovi Messaggi';
$lang['Search_new_p'] = 'Messaggi dalla tua ultima visita';

//037
$lang['Show_In_Portal'] = 'Visualizza in Home Page';
$lang['Not_Auth_View'] = 'Non hai permessi sufficienti per visualizzare questa pagina.';

//038
$lang['Site_Hist'] = 'Storico Sito';
$lang['Links'] = 'Links';
$lang['Print_View'] = 'Versione Stampabile';
$lang['Browsing_topic'] = 'Online in questo argomento:';

//041
$lang['Sudoku'] = 'Sudoku';

// Bookmarks Mod
$lang['Bookmarks'] = 'Segnalibri';
$lang['Set_Bookmark'] = 'Imposta un segnalibro per questo argomento';
$lang['Remove_Bookmark'] = 'Rimuovi segnalibro per questo argomento';
$lang['No_Bookmarks'] = 'Non hai impostato nessun segnalibro';
$lang['Always_set_bm'] = 'Imposta automaticamente un segnalibro quando scrivi';
$lang['Found_bookmark'] = 'Hai impostato %d segnalibro.'; // eg. Search found 1 match
$lang['Found_bookmarks'] = 'Hai impostato %d segnalibri.'; // eg. Search found 24 matches
$lang['More_bookmarks'] = 'Altri segnalibri...'; // For mozilla navigation bar

//RSS Reader Help
$lang['RSS'] = 'RSS';
$lang['Rss_news_feeds'] = 'RSS News Feeds';
$lang['Rss_news_help'] = 'Che cos\'&egrave;?';
$lang['Rss_news_help_title'] = 'RSS Newsreader Help';
$lang['Rss_news_help_header'] = 'Cosa sono i feeds e come si usano?';
$lang['Rss_news_help_explain'] = 'Un feed &egrave; un riassunto aggiornato regolarmente di alcuni contenuti Web, che contiene un link ai rispettivi contenuti completi. Se ti iscrivi ad un feed di un Sito Web con un Feed Reader, riceverai un riassunto dei nuovi contenuti di quel Sito.<br /><br /><b>Attenzione:</b> Per iscriverti a un feed di un Sito Web potrebbe essere necessario un <a href="http://www.rssowl.org/" target="new">Feed-Reader</a>. Quando si clicca su un link ad un feed RSS o ATOM potrebbe apparire del testo confuso e non formattato nel Browser.';
$lang['Rss_news_help_header_2'] = '<b>Cosa Sono RSS e Atom?</b>';
$lang['Rss_news_help_explain_2'] = 'RSS e Atom sono due formati per i feed. La maggior parte dei Readers li supporta entrambi. Al momento noi offriamo atom 0.3 e RSS 2.0.';
$lang['Rss_news_help_header_3'] = '<b>Come si usano i feeds?</b>';
$lang['Rss_news_help_explain_3'] = 'Anzitutto bisogna avere un feed reader, lo potete scaricacare da qui: <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />Dopodich&eacute; potrete:<br /><br /><b>1.</b> Cercare nuovi link RSS nel nostro sito. (Strumenti => Scoperta new feeds su sito web) <b>o</b><br /><b>2.</b> Aggiungere uno delle seguenti URL:';
$lang['L_url_rss_explain'] = 'URL per tutte le discussioni del forum.';
$lang['L_url_rss_news_explain'] = 'URL per le sole News.';
$lang['L_url_rss_atom_explain'] = 'URL per Il Feed RSS Atom.';
$lang['Rss_news_help_rights'] = 'Ci riserviamo il diritto di sospendere l\'uso dei feeds in qualsiasi momento e a nostra discrezione. I feeds del nostro forum potrebbero essere sospesi senza preavviso.';

$lang['Quick_Reply'] = 'Risposta Veloce';
$lang['Mod_CP_sticky2'] = 'Rendi la Discussione Importante';
$lang['Mod_CP_announce2'] = 'Rendi la Discussione Annuncio';
$lang['Mod_CP_global2'] = 'Rendi la Discussione Annuncio Globale';
$lang['Mod_CP_normal2'] = 'Rendi la Discussione Normale';

$lang['Search_Flood_Error'] = 'Non puoi effettuare una ricerca cos&igrave; presto dopo la tua ultima: per cortesia riprova tra un po\'.';

// Custom Profile Fields MOD
$lang['custom_field_notice'] = 'Questi campi sono stati creati da un amministratore. Alcuni potrebbero essere visibili da tutti, altri no. I campi contrassegnati da un asterisco (*) sono campi obbligatori.';
$lang['and'] = ' e ';
// END Custom Profile Fields MOD

$lang['dsbl'] = 'Il tuo indirizzo IP &egrave; presente su <a href="%url%">DNS-based Blackhole List</a>.<br />Registrazione bloccata.';

// BUILD 044
$lang['Emails_Only_To_Admins_Error'] = 'Puoi inviare le email tramite il sito soltanto agli amministratori.';

// BUILD 046
$lang['Wordgraph'] = 'Tags';
$lang['Viewing_wordgraph'] = 'Sta visualizzando i Tags';

// BUILD 050
$lang['Links_For_Guests'] = '<b>Devi essere registrato per poter vedere questo link</b>';
$lang['New'] = 'N';
$lang['New_Label'] = 'Nuovi';
$lang['New_Messages_Label'] = 'Nuovi Messaggi';

// BUILD 056
$lang['Show_Personal_Gallery'] = 'Galleria Personale';

// BUILD 058
$lang['Login_Status'] = 'Stato Online';
$lang['Login_Hidden'] = 'Nascosto';
$lang['Login_Visible'] = 'Visibile';
$lang['Login_Default'] = 'Predefinito';
$lang['Errors_Not_Found'] = 'L\'indirizzo richesto non &egrave; stato trovato su questo server';
$lang['Errors_000'] = 'Errore Sconosciuto';
$lang['Errors_000_Full'] = 'L\'indirizzo richiesto ha restituito un errore sconosciuto.<br />Gli errori sono stati registrati nel file di log.';
$lang['Errors_400'] = 'Errore 400';
$lang['Errors_400_Full'] = 'L\'indirizzo richiesto non &egrave; un indirizzo valido.';
$lang['Errors_401'] = 'Errore 401 - Errore Autorizzazione';
$lang['Errors_401_Full'] = 'Non disponi delle autorizzazioni necessarie per visualizzare questa pagina.';
$lang['Errors_403'] = 'Errore 403';
$lang['Errors_403_Full'] = 'L\'accesso a questo indirizzo &egrave; proibito.';
$lang['Errors_404'] = 'Errore 404 - Indirizzo Non Trovato';
$lang['Errors_404_Full'] = 'L\'indirizzo richiesto non &egrave; stato trovato su questo server. L\'errore pu&ograve; essere dovuto ad un\'errata digitazione oppure al fatto che il file &egrave; stato rimosso dal server.';
$lang['Errors_500'] = 'Errore 500 - Errore Di Configurazione';
$lang['Errors_500_Full'] = 'L\'indirizzo richiesto restituisce un errore di configurazione.<br />Gli errori sono stati registrati nel file di log.';
$lang['Errors_Email_Subject'] = 'Errori: ';
$lang['Errors_Email_Addrress_Prefix'] = 'gestione_errori';
$lang['Errors_Email_Body'] = 'Si &egrave verificato un errore sul tuo sito. Per favore verifica il file di log.';

// BUILD 059
$lang['Remote_avatar_no_image'] = 'L\'immagine %s non esiste o non &egrave; raggiunbibile';
$lang['Remote_avatar_error_filesize'] = 'L\'immagine supera la dimensione massima massima consentita per gli avatar (%d Bytes)';
$lang['Remote_avatar_error_dimension'] = 'L\'immagine supera il limite di dimensione per gli avatar (%d x %d pixel)';
$lang['How_Many_Chatters'] = 'Ci sono <b>%d</b> utenti in chat';
$lang['Who_Are_Chatting' ] = '<b>%s</b>';
$lang['Click_to_join_chat'] = 'Clicca per entrare in chat';
$lang['ChatBox'] = 'ChatBox';
$lang['log_out_chat'] = 'Sei uscito dalla chat alle ';
$lang['Send'] = 'Invia';
$lang['Login_to_join_chat'] = 'Login per entrare in chat';

// Hacks List
/* General */
$lang['Hacks_List'] = 'Riconoscimenti';
$lang['Page_Desc'] = 'Questo modulo vi permette di aggiungere/modificare la lista dei riconoscimenti sulle modifiche installate. Questa lista viene mostrata agli utenti quando accedono alla pagina credits.php.';
$lang['Deleted_Hack'] = 'Rimuovi voce %s dalla lista.<br />';
$lang['Updated_Hack'] = 'Aggiorna info su %s.<br />';
$lang['Added_Hack'] = 'Informazione aggiornata per %s.<br />';
$lang['Status'] = 'Stato';
$lang['No_Website'] = 'Sito web non disponibile.';
$lang['No_Hacks'] = 'Nessun riconoscimento da visualizzare.';
$lang['Add_New_Hack'] = 'Aggiungi un nuovo riconoscimento';
$lang['User_Viewable'] = 'Nascondi dalla lista per gli utenti?';
$lang['Hack_Name'] = 'Nome Aggiunta';
//$lang['Description'] = 'Descrizione';
$lang['Required'] = 'Richiesto';
$lang['Author_Email'] = 'Email Autore';
$lang['Version'] = 'Versione';
$lang['Download_URL'] = 'Download';

/* Errors */
$lang['Error_Hacks_List_Table'] = 'Errore durante l\'interrogazione della tabella Riconoscimenti.';
$lang['Required_Field_Missing'] = 'Le informazioni che avete immesso non sono complete.';
$lang['Error_File_Opening'] = 'Impossibile aprire il file: %s';

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
$lang['Newest_pic'] = 'Utlima Immagine'; // Album Addon
$lang['Random_pic'] = 'Immagine Casuale'; // Album Addon
$lang['Click_enlarge_pic'] = 'Clicca sull\'immagine per vederla ingrandita';
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
$lang['Last_Used_IP'] = 'Ultimo IP';
$lang['Last_Used_OS'] = 'Sistema Operativo';
$lang['Last_Used_Browser'] = 'Browser';
$lang['Last_Used_Referer'] = 'Referer';
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
$lang['Users_Admins'] = 'Amministratori';
$lang['Users_Mods'] = 'Moderatori';
$lang['Users_Global_Mods'] = 'Moderatori Globali';
$lang['Users_Regs'] = 'Utenti';
$lang['Users_Guests'] = 'Ospiti';
$lang['Users_Hidden'] = 'Nascosti';
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
$lang['Fast'] = 'Veloce';
$lang['Standard'] = 'Standard';
$lang['Style'] = 'Stile';
$lang['User_Contacts'] = 'Contatti';
$lang['Memberlist_Users_Display'] = 'Utenti per pagina:';
$lang['Sort_LastLogon'] = 'Ultima Visita';
$lang['Sort_Birthday'] = 'Compleanno';
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
$lang['Staff'] = 'Staff';
$lang['Rank'] = 'Livello';
$lang['Rank_Header'] = 'Livelli';
$lang['Rank_Image'] = 'Immagine Livello';
$lang['Rank_Posts_Count'] = 'Livello automatico in base ai messaggi';
$lang['Rank_Days_Count'] = 'Livello automatico in base ai giorni d\'iscrizione';
$lang['Rank_Min_Des'] = 'Giorni/Messaggi minimi';
$lang['Rank_Min_M'] = 'Messaggi Minimo';
$lang['Rank_Max_M'] = 'Messaggi Massimo';
$lang['Rank_Min_D'] = 'Giorni Minimo';
$lang['Rank_Max_D'] = 'Giorni Massimo';
$lang['Rank_Special'] = 'Livello Speciale';
$lang['Rank_Special_Guest'] = 'Livello Speciale Per Gli Ospiti';
$lang['Rank_Special_Banned'] = 'Livello Speciale Per Gli Espulsi';
$lang['Current_Rank_Image'] = 'Immagine attualmente impostata';
$lang['No_Rank'] = 'Nessun livello assegnato';
$lang['No_Rank_Image'] = 'Nessuna immagine assegnata';
$lang['No_Rank_Special'] = 'Nessun livello speciale assegnato';
$lang['Memberlist_Administrator'] = 'Amministratore';
$lang['Memberlist_Moderator'] = 'Moderatore';
$lang['Memberlist_User'] = 'Utente';
$lang['Guest_User'] = 'Ospite';
$lang['Banned_User'] = 'Espulso';
$lang['Rank1_title'] = 'Titolo Livello 1';
$lang['Rank2_title'] = 'Titolo Livello 2';
$lang['Rank3_title'] = 'Titolo Livello 3';
$lang['Rank4_title'] = 'Titolo Livello 4';
$lang['Rank5_title'] = 'Titolo Livello 5';
// Mighty Gorgon - Multiple Ranks - END
// Mighty Gorgon - Nav Links - BEGIN
$lang['QUICK_LINKS'] = 'Menu';
$lang['MAIN_LINKS'] = 'Link Principali';
$lang['TOOLS_LINKS'] = 'Utilit&agrave;';
$lang['NEWS_LINKS'] = 'News';
$lang['USERS_LINKS'] = 'Utenti &amp; Gruppi';
$lang['INFO_LINKS'] = 'Info';
$lang['SPONSORS_LINKS'] = 'Sponsors';
$lang['HelpDesk'] = 'Help Desk';
$lang['AvatarGenerator'] = 'Generatore Avatar';
$lang['DBGenerator'] = 'Conversione SQL/PHP';
$lang['NEWS_CAT'] = 'Categorie News';
$lang['NEWS_ARC'] = 'Archivio News';
// Mighty Gorgon - Nav Links - END
$lang['Activity'] = 'Giochi';
$lang['Games'] = 'Giochi';
$lang['Trohpy'] = 'Trofei';
$lang['quick_links_games'] = 'Menu Giochi';

$lang['By'] = 'Da';
$lang['No_Icon_Image'] = 'Nessuna Icona';
$lang['Change_Style'] = 'Stile';
$lang['Change_Lang'] = 'Lingua';
$lang['Permissions_List'] = 'Lista Permessi';
$lang['IP_TEAM'] = 'Team Icy Phoenix';

//$lang[''] = '';
// Mighty Gorgon - LANG - END

// New MG - BEGIN
$lang['Nav_Separator'] = '&nbsp;&raquo;&nbsp;';
$lang['WeatherForecast'] = 'Previsioni Del Tempo';
$lang['ErrorNotFound'] = 'File Non Trovato!';
$lang['MGC_Users_Online'] = 'MGC Users Online';
$lang['MGC_User_Servertime'] = 'Data';
$lang['MGC_User_Nickname'] = 'Nickname';
$lang['MGC_User_Server'] = 'Server';
$lang['MGC_User_IP'] = 'IP';
$lang['MGC_User_ID'] = 'ID';
$lang['MGC_User_Client_Version'] = 'MGC Version';

$lang['Country_Flag'] = 'Bandiera';
$lang['Select_Country'] = 'Seleziona Bandiera';
$lang['Extra_profile_info'] = 'Altre Informazioni';
//$lang['Extra_profile_info_explain'] = 'Puoi aggiungere in questo campo altre informazioni su di te. Puoi anche usare il BBCode per inserire immagini o altre formattazioni particolari (se non sai cos\'&egrave; il BBCode puoi consultare le FAQ). La descrizione &egrave; limitata a <b>%d</b> caratteri (0 = senza limiti)';
$lang['Extra_profile_info_explain'] = 'Puoi aggiungere in questo campo altre informazioni su di te. Puoi anche usare il BBCode per inserire immagini o altre formattazioni particolari (se non sai cos\'&egrave; il BBCode puoi consultare le FAQ).';
$lang['Extra_window'] = 'Apri in un altra finestra';
$lang['Extra_too_long'] = 'Hai superato il numero di caratteri consentito nelle Altre Informazioni (max <b>%d</b> caratteri)';
$lang['UserLike'] = 'Cose che ama';
$lang['UserDisLike'] = 'Cose che odia';
$lang['UserLikeIns'] = 'Tre cose che ami';
$lang['UserDisLikeIns'] = 'Tre cose che odi';
$lang['UserPhone'] = 'Numero Di Telefono';
$lang['UserSport'] = 'Sport/Squadra';
$lang['UserMusic'] = 'Musica/Gruppi';
$lang['UserNoInfo'] = 'Nessuna Informazione Inserita';
$lang['Last_Seen'] = 'Ultimi Online';
// New MG - END

// MG CMS - BEGIN
$lang['CMS_TITLE'] = 'CMS';
$lang['CMS_MANAGEMENT'] = 'Gestione CMS';
$lang['CMS_CONFIG'] = 'Configurazione CMS';
$lang['CMS_ACP'] = 'Modifica Questa Pagina';
$lang['CUSTOM_PAGE'] = 'Pagina Personalizzata';
//$lang['CMS_'] = '';
// MG CMS - END


// Icy Phoenix - BUILD 001
$lang['SimilarTopics'] = 'Argomenti Simili';
$lang['Chat'] = 'Chat';
$lang['Digests'] = 'Digests';

$lang['CPL_REG_INFO_EXPLAIN'] = 'Username, indirizzo email e password';
$lang['CPL_PROFILE_INFO_EXPLAIN'] = 'Informazioni generali riguardo i contatti, interessi ed altre informazioni generali';
$lang['CPL_PROFILE_VIEWED_EXPLAIN'] = 'Utenti che hanno visitato il tuo profilo';
$lang['CPL_AVATAR_PANEL_EXPLAIN'] = 'L\'Avatar &egrave; la piccola immagine associata al tuo profilo';
$lang['CPL_SIG_EDIT_EXPLAIN'] = 'La tua firma: puoi inserire un testo che verr&agrave; inserito come firma ai tuoi messaggi';
$lang['CPL_PREFERENCES_EXPLAIN'] = 'Preferenze generali riguardo l\'invio e la visualizzazione di messaggi';
$lang['CPL_BOARD_SETTINGS_EXPLAIN'] = 'Impostazioni globali relative al fuso orario, lo stile e la lingua';
$lang['Calendar_settings_EXPLAIN'] = 'Impostazioni relative al calendario';
$lang['Hierarchy_setting_EXPLAIN'] = 'Impostazioni riguardanti le sottocategorie ed il raggruppamento dei messaggi';
$lang['LOGIN_SEC_EXPLAIN'] = 'Se abilitata, questa funzione consente di controllare gli accessi effettuati con questo profilo';
$lang['CPL_OWN_POSTS_EXPLAIN'] = 'Cerca i tuoi messaggi';
$lang['CPL_OWN_PICTURES_EXPLAIN'] = 'Visualizza la tua galleria personale';
$lang['CPL_INBOX_EXPLAIN'] = 'Posta in arrivo: contiene i messaggi privati ricevuti';
$lang['CPL_SAVEBOX_EXPLAIN'] = 'Posta salvata: contiene i messaggi salvati';
$lang['CPL_OUTBOX_EXPLAIN'] = 'Posta in uscita: contiene i messaggi da te inviati ma che non sono ancora stati letti';
$lang['CPL_SENTBOX_EXPLAIN'] = 'Posta inviata: contiene i messaggi da te inviati che sono stati letti dal destinatario';
$lang['CPL_BOOKMARKS_EXPLAIN'] = 'I segnalibri che hai assegnato agli argomenti nel sito';
$lang['WATCHED_TOPICS_EXPLAIN'] = 'La lista di tutti gli argomenti che stai controllando';
$lang['CPL_SUBSCFORUMS_EXPLAIN'] = 'La lista dei forum in cui hai attivato la notifica per i nuovi argomenti';
$lang['DIGESTS_EXPLAIN'] = 'I Digests sono email periodiche che vengono invate automaticamente dal sito e che contengono una sintesi dei nuovi messaggi';
$lang['DRAFTS_EXPLAIN'] = 'Gestione bozze messaggi';

// Ajax Shoutbox - BEGIN
$lang['Ajax_Shoutbox'] = 'Shoutbox';
$lang['Ajax_Chat'] = 'Chat';
$lang['Ajax_Archive'] = 'Archivio Chat';
$lang['Shoutbox_flooderror'] = 'Non puoi inviare un messaggio cos&igrave; presto dopo il tuo ultimo messaggio. Per cortesia, aspetta ancora qualche secondo e poi riprova.';
$lang['Shoutbox_no_auth'] = 'Spiacenti, ma solo gli utenti registrati possono utilizzare la Shoutbox.';
$lang['Shoutbox_loading'] = 'Caricamento Shoutbox...';
// Errors
$lang['Shoutbox_unable'] = 'Spiacenti, ma l\'azione richiesta non pu&ograve; essere completate. Riprova di nuovo.';
$lang['Shoutbox_empty'] = 'Nessun messaggio nel DB';
$lang['Shoutbox_no_mode'] = 'Modo specificato non valido';
// Archive
$lang['Shouts'] = 'Messaggi';
$lang['Statistics'] = 'Statistiche';
$lang['Total_shouts'] = 'Messaggi Totali';
$lang['Stored_shouts'] = 'Messaggi Memorizzati';
$lang['My_shouts'] = 'Miei Messaggi';
$lang['Today_shouts'] = 'Messaggi nelle ultime 24 ore';
$lang['Top_Ten_Shouters'] = 'Migliori 10 utenti';
// Online list
$lang['Online_total'] = 'Totale';
$lang['Online_registered'] = 'Utenti';
$lang['Online_guests'] = 'Ospiti';
$lang['Who_is_Chatting'] = 'Online In Chat';
$lang['Shoutbox_online_explain'] = 'Questi dati sono basati sugli ultimi 30 secondi';
// Ajax Shoutbox - END

$lang['Contact_us'] = 'Contattaci';
$lang['Contact_us_explain'] = 'Tramite questa pagina puoi inviarci un\'email';
$lang['Session_invalid'] = 'Sessione Non Valida. Ricompila il modulo.';

// Icy Phoenix - BUILD 007
$lang['Reg_Username_Short'] = ' username troppo corto';
$lang['Reg_Username_Long'] = ' username troppo lungo';
$lang['Reg_Username_Taken'] = ' username non disponibile';
$lang['Reg_Username_Free'] = ' username disponibile';
$lang['Reg_PWD_Short'] = 'Password troppo corta';
$lang['Reg_PWD_Easy'] = 'Password troppo semplice';
$lang['Reg_PWD_OK'] = 'Password ok';
$lang['Reg_Email_Invalid'] = ' indirizzo email non valido';
$lang['Reg_Email_OK'] = ' indirizzo email corretto';

$lang['time_mode'] = 'Gestione orario:';
$lang['time_mode_text'] = 'Il valore DST &egrave; la differenza tra l\'ora legale e quella normale (da 0 a 120 minuti).<br /><br />* La modalit&agrave; indicata dall\'asterisco indica quella utilizzata dal forum ed &egrave; quella raccomandata dall\'amministratore.';
$lang['time_mode_auto'] = 'Modalit&agrave; automatica...';
$lang['time_mode_full_pc'] = 'Orario del vostro computer';
$lang['time_mode_server_pc'] = 'Orario universale del server <br /><span STYLE="margin-left: 25">Impostazioni ora legale del vostro computer</span>';
$lang['time_mode_full_server'] = 'Orario del server';
$lang['time_mode_manual'] = 'Modalit&agrave; manuale...';
$lang['time_mode_dst'] = 'Ora legale';
$lang['time_mode_dst_server'] = 'Dal server';
$lang['time_mode_dst_time_lag'] = 'Differenza ora legale / seriale';
$lang['time_mode_dst_mn'] = ' mn ';
$lang['time_mode_timezone'] = 'Timezone';

$lang['dst_time_lag_error'] = 'Valore Ora legale/solare errato. Inserire un valore tra 0 e 120.';

$lang['dst_enabled_mode'] = ' [Ora Legale]';
$lang['full_server_mode'] = 'Ogni orario &egrave; sincronizzato  con l\'orario del server';
$lang['server_pc_mode'] = 'Orario sincronizzato con il server - Fuso orario e Ora Solare con il tuo computer';
$lang['full_pc_mode'] = 'Ogni orario &egrave; sincronizzato con l\'orario del computer';

$lang['Smileys_Per_Page'] = 'Smileys Per Pagina';

/* lang_site_hist.php - BEGIN */
$lang['Site_history'] = 'Storico Sito';
$lang['Month'] = 'Mese';
$lang['Week_day'] = 'Giorno della Settimana';
$lang['Not_availble'] = 'Non Disponibile';
$lang['Total_users'] = 'Numero Massimo Utenti';
$lang['Reg_users'] = 'Utenti Registrati';
$lang['Hidden_users'] = 'Utenti Nascosti';
$lang['Guests_users'] = 'Ospiti';
$lang['New_users'] = 'Nuovi Utenti';
$lang['New_topics'] = 'Nuove Discussioni';
$lang['New_posts_reply'] = 'Messaggi/Risposte';
$lang['Most_online'] = 'Numero massimo di utenti online %s';
$lang['Most_online_week'] = 'Numero massimo di utenti online nell\'ultima settimana';
$lang['Last_24'] = 'Numero massimo di utenti online nelle ultime %s Ore';
$lang['Top_Posting_Users'] = 'Utenti Migliori';
$lang['Top_Posting_Users_week'] = 'Utenti migliori della settimana [%s]';
$lang['Rank'] = 'Livello';
$lang['Percent'] = '%';
$lang['Graph'] = 'Grafico';
$lang['Top_Visiting_Users'] = 'Maggiori Visitatori';
/* lang_site_hist.php - END */

/* lang_referrers.php - BEGIN */
$lang['Referrers_Title'] = 'Http Referrers Managememnt';
$lang['Referrers_Cleared'] = 'Referrers Cleared';
$lang['Referrers_Clear'] = 'Delete All';
$lang['Click_Return_Referrers'] = 'Click %sHere%s to return to Referrers';
$lang['Referrers'] = 'Http Referrers';
$lang['Referrer_host'] = 'Host del Referrer';
$lang['Referrer_url'] = 'URL del Referrer';
$lang['Referrer_ip'] = 'IP del Referrer';
$lang['Referrer_hits'] = 'Numero Visite';
$lang['Referrer_first'] ='Prima Visita';
$lang['Referrer_last'] = 'Ultima Visita';
$lang['Referrer_delete'] = 'Elimina';
$lang['Viewing_Referrers'] = 'Sta guardando i Referrers';
/* lang_referrers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
$lang['X_Days'] = '%d Giorni';
$lang['X_Weeks'] = '%d Settimane';
$lang['X_Months'] = '%d Mesi';
$lang['X_Years'] = '%d Anni';

$lang['Confirm_delete_user'] = 'Sei sicuro di voler eliminare questo Utente?';
$lang['Prune_no_users'] = 'Non &egrave stato eliminato nessun utente';
$lang['Prune_users_number'] = 'I seguenti %d utenti sono stati eliminati:';

$lang['Prune_user_list'] = 'Utenti che saranno eliminati';
$lang['Prune_on_click'] = 'Stai per eliminare %d utenti. Sei sicuro?';
$lang['Prune_Action'] = 'Clicca sul link sottostante per l\'esecuzione del comando';
$lang['Prune_users_explain'] = 'Da questa pagina puoi eliminare automaticamente gli utenti. Puoi scegliere tra tre opzioni: eliminare i vecchi utenti che non hanno mai inviato messaggi, eliminare i vecchi utenti che non hanno mai effettuato il Login, eliminare i vecchi utenti che non hanno mai attivato il loro account.<p/><b>ATTENZIONE:</b> Non c\'&egrave; una funzione per annullare le operazioni eseguite.';
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
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
$lang['Avatar_Generator'] = 'Avatar Generator';
$lang['Available'] = 'Avatars Disponibili';
$lang['Random'] = 'Casuale';
$lang['Avatar_Text'] = 'Per cortesia immetti il testo che vorrai che appaia sul tuo Avatar:';
$lang['Avatar_Preview'] = 'Anteprima Avatar';
$lang['Your_Avatar'] = 'Il tuo Avatar';
$lang['Submit_Avatar'] = 'Invia Avatar';
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

$lang['Upload_Image_Local'] = 'Carica Immagine';
$lang['Uploaded_Images_Local'] = 'Immagini Caricate';
$lang['Upload_Image_Local_Explain'] = 'Seleziona il file da caricare';
$lang['Uploaded_Image_Success'] = 'L\'immagine &egrave; stata caricata corretamente.';
$lang['Uploaded_Image_BBC'] = 'Per allegare questa immagine nei post, puoi usare questo BBCode.';
$lang['Upload_Image_Empty'] = 'Non puoi caricare aria sul server... seleziona un file!';
$lang['Upload_File_Too_Big'] = 'Il file che stai cercando di caricare &egrave; troppo grande! Dimensione massima consentita:';
$lang['Upload_File_Type_Allowed'] = 'Soltanto questi tipi di immagine possono essere caricati';
$lang['Upload_Insert_Image'] = 'Inserisci BBCode';
$lang['Upload_Close'] = 'Chiudi';
$lang['BBCode'] = 'BBCode';
$lang['HTML'] = 'HTML';

$lang['No_News'] = 'Nessuna News';

$lang['Email_confirm'] = 'Reinserisci il tuo indirizzo email';
$lang['Email_mismatch'] = 'Gli indirizzi email inseriti non corrispondono.';

$lang['View_ballot'] = 'Visualizza Risultati';
$lang['Full_edit'] = 'Modifica il messaggio con tutte le funzioni';
$lang['Save_changes'] = 'Salva';
$lang['No_subject'] = '(Nessun oggetto)';
$lang['Edit_quick_post'] = 'Modifica questo messaggio al volo';
$lang['AJAX_search_results'] = 'Sono stati trovati %s argomenti con le parole indicate nel titolo del tuo messaggio. Clicca qui per visualizzare questi argomenti';
$lang['AJAX_search_result'] = 'Un argomento trovato con le parole indicate nel titolo del tuo messaggio. Clicca qui per visualizzare questo argomento';
$lang['More_matches_username'] = 'Diversi utenti sono stati trovati con la tua richiesta. Seleziona un utente dalla finestra sovrastante.';
$lang['No_username'] = 'Devi inserire un nome utente.';
$lang['AJAX_quick_search_results'] = 'Sono stati trovati %s argomenti con queste parole chiave.<br />Sulla destra sono visualizzati i primi risultati.<br />Clicca su "Cerca" per ottenere la lista completa.';
$lang['AJAX_quick_search_result'] = 'Un argomento trovato con queste parole chiave.<br />Sulla destra puoi visualizzare il risultato.';

$lang['Icon_Description'] = 'Descrizione Icone';

$lang['Feature_Disabled'] = 'Questa funzionalit&agrave; &egrave; stata disabilitata.';

// Resend Activation - BEGIN
$lang['Resend_activation_email'] = 'Reinvia email di attivazione';
$lang['Invalid_activation'] = 'L\'attivazione degli account pu&ograve; essere effettuata solo dagli amministratori.';
$lang['No_actkey'] = 'Non esiste una chiave di attivazione per il tuo account. Per favore contatta l\'amministratore per maggiori informazioni.';
$lang['Send_actmail_flood_error'] = 'Non puoi effettuare una nuova richiesta di attivazione cos&igrave; presto. Per favore, prova ancora pi&ugrave; tardi.';
$lang['Resend_activation_email_done'] = 'L\'email di attivazione &egrave; stata inviata. Per favore verifica la tua casella email per attivare il tuo account.';
// Resend Activation - END

$lang['Bots_Group'] = 'Bots';
$lang['Bots_Color'] = 'Bots Color';
$lang['Active_Users_Group'] = 'Utenti Attivi';
$lang['Active_Users_Color'] = 'Colore Utenti Attivi';
$lang['Group_Default_Membership'] = 'Gruppo Predefinito';
$lang['Group_Default_Membership_Explain'] = 'Scegliere il gruppo predefinito per l\'utente per l\'assegnazione di livello e colore';
$lang['User_Color'] = 'Colore Utente';
$lang['User_Color_Explain'] = 'Scegliendo un colore per questo utente verr&agrave; utilizzato solo se non viene specificato alcun gruppo predefinito nella casella qui sopra (utilizza il codice esadecimale senza il carattere <b>#</b> ad esempio: ff0000 per il colore rosso)';
$lang['No_Groups_Membership'] = 'Non Iscritto A Gruppi';
$lang['No_Default_Group'] = 'No Gruppo Di Default';
$lang['Group_members_updated'] = 'Informazioni membri aggiornate correttamente.';
$lang['Colorize_All'] = 'Colora Tutti';
$lang['Colorize_Selected'] = 'Colora Selezionati';

$lang['CompanyWho'] = 'Chi Siamo';
$lang['CompanyWhere'] = 'Dove Siamo';
$lang['CompanyServices'] = 'I Servizi';
$lang['CompanyProducts'] = 'I Prodotti';

$lang['ShareThisTopic'] = 'Condividi Argomento';

$lang['Remove_cookies'] = 'Elimina Cookies';
$lang['Cookies_deleted'] = 'I cookies sono stati eliminati ed ora non sei pi&ugrave; connesso.<br />Per completare l\'eliminazione devi anche riavviare il tuo browser.';
$lang['Delete_cookies'] = 'Elimina Cookies';
$lang['cookies_confirm'] = 'Sei sicuro di voler eliminare tutti i cookies impostati da questo sito?<br /><br />Questa operazione comporter&agrave; anche la disconnessione dal sito.';

$lang['CustomIcy'] = 'CustomIcy';

$lang['Drafts'] = 'Bozze';
$lang['Drafts_Action'] = 'Azione';
$lang['Drafts_Save'] = 'Salva';
$lang['Drafts_Load'] = 'Carica';
$lang['Drafts_Saved'] = 'Questo messaggio &egrave; stato salvato nelle bozze';
$lang['Drafts_Loaded'] = 'Bozza caricata';
$lang['Drafts_No_Drafts'] = 'Nessuna bozza salvata';
$lang['Drafts_Delete_Sel'] = 'Elimina selezionati';
$lang['Drafts_Save_Question'] = '<br /><br />Sei sicuro di voler salvare il messaggio come bozza?<br /><br />Solo il testo del messaggio verr&agrave; salvato: tutte le altre impostazioni saranno perse.';
$lang['Drafts_Delete_Question'] = '<br /><br />Sei sicuro di voler eliminare le bozze selezionate?';
$lang['Drafts_Type'] = 'Tipo Bozza';
$lang['Drafts_Subject'] = 'Titolo Bozza';
$lang['Drafts_NT'] = 'Nuovo Argomento';
$lang['Drafts_NM'] = 'Risposta';
$lang['Drafts_NPM'] = 'Messaggio Privato';

$lang['CannotEditAdminsPosts'] = 'Non puoi modificare i messaggi degli amministratori';
$lang['Random_Number'] = 'Numero Casuale';

$lang['New_download'] = '&Egrave; stato inserito o aggiornato un download.<br />Clicca %sQUI%s per visualizzarlo.';
$lang['Dl_bug_tracker'] = 'Bug Tracker';
$lang['Downloads_ADV'] = 'Downloads ADV';

$lang['TopicUseful'] = 'Questo argomento &egrave; stato utile?';
$lang['Article'] = 'Articolo';
$lang['Comments'] = 'Commenti';

$lang['Sitemap'] = 'Mappa Sito';

$lang['Delete_My_Account'] = 'Eliminazione Account';
$lang['Delete_My_Account_Explain'] = 'Se vuoi eliminare il tuo account su questo sito invia una richiesta tramite questo modulo ed il tuo account verr&agrave; disabilitato al pi&ugrave; presto.<br />Per favore specificare nell\'oggetto dell\'email "Eliminazione Account" e (se lo ritieni opportuno) le ragioni per cui vuoi che il tuo account venga eliminato.';

$lang['KB_MODE_ON'] = 'Attiva versione KB';
$lang['KB_MODE_OFF'] = 'Disattiva versione KB';

$lang['Go_To_Page_Number'] = 'Vai a pagina';

$lang['Admin_Emails'] = 'Gli amministratori possono inviarmi email di gruppo';
$lang['Allow_PM_IN'] = 'Consenti agli utenti di inviarmi messaggi privati';
$lang['Allow_PM_IN_Explain'] = 'Nota che sistema, amministratori, moderatori ed amici potranno inviarti messaggi privati in ogni caso.';
$lang['Allow_PM_IN_SEND_ERROR'] = 'L\'utente a cui stai cercando di inviare il Messaggio Privato non pu&ograve; ricevere il tuo messaggio perch&egrave; ha scelto di non ricevere Messaggi Privati.';

//$lang['UCP_ZEBRA'] = 'Amici &amp; Ignorati';
$lang['UCP_ZEBRA'] = 'Gestione Amici';
$lang['UCP_ZEBRA_FOES'] = 'Gestisci Ignorati';
$lang['UCP_ZEBRA_FRIENDS'] = 'Gestisci Amici';

$lang['ADD_FOES'] = 'Aggiungi Ignorati';
$lang['ADD_FOES_EXPLAIN'] = 'Puoi inserire diversi nomi utente ognuno per singola riga.';
$lang['YOUR_FOES'] = 'I tuoi ignorati';
$lang['YOUR_FOES_EXPLAIN'] = 'Per rimuovere degli utenti selezionali e clicca su invia.<br />Consiglio: usa CTRL per selezionare/deselezionare pi&ugrave; di un elemento.';
$lang['FOE_MESSAGE'] = 'Messaggio da un utente ignorato';
$lang['FOES_EXPLAIN'] = 'Gli utenti Ignorati sono quegli utenti che verranno ignorati come opzione predefinita. I messaggi di questi utenti non saranno visibili. I messaggi privati sono comunque consentiti. Nota che non possono essere ignorati moderatori o amministratori.';
$lang['FOES_UPDATED'] = 'La lista Ignorati &egrave; stata aggiornata correttamente.';
$lang['FOES_UPDATE_ERROR'] = 'La lista Ignorati NON &egrave; stata aggiornata.';
$lang['NO_FOES'] = 'Nessun utente Ignorato';

$lang['ADD_FRIENDS'] = 'Aggiungi Amico';
$lang['ADD_FRIENDS_EXPLAIN'] = 'Puoi inserire diversi nomi utente ognuno per singola riga.';
$lang['YOUR_FRIENDS'] = 'I tuoi amici';
$lang['YOUR_FRIENDS_EXPLAIN'] = 'Per rimuovere degli utenti selezionali e clicca su invia.<br />Consiglio: usa CTRL per selezionare/deselezionare pi&ugrave; di un elemento.';
$lang['FRIEND_MESSAGE'] = 'Messaggio da un utente amico';
$lang['FRIENDS'] = 'Amici';
$lang['FRIENDS_EXPLAIN'] = 'Gli utenti Amici sono quegli utenti con cui comunichi di frequente.';
$lang['FRIENDS_UPDATED'] = 'La lista Amici &egrave; stata aggiornata correttamente.';
$lang['FRIENDS_UPDATE_ERROR'] = 'La lista Amici NON &egrave; stata aggiornata.';
$lang['FRIENDS_ONLINE'] = 'Online';
$lang['FRIENDS_HIDDEN'] = 'Nascosti';
$lang['FRIENDS_OFFLINE'] = 'Offline';
$lang['NO_FRIENDS'] = 'Nessun utente Amico';
$lang['NO_FRIENDS_OFFLINE'] = 'Nessun amico offline';
$lang['NO_FRIENDS_ONLINE'] = 'Nessun amico online';

$lang['Default'] = 'Predefinito';

$lang['Reserved_Author'] = '[ NASCOSTO ]';
$lang['Reserved_Topic'] = '[ ARGOMENTO RISERVATO ]';
$lang['Reserved_Post'] = '[ MESSAGGIO RISERVATO ]';

$lang['THANKS_RECEIVED'] = 'Ringraziamenti ricevuti';

$lang['RECENT_USER_ACTIVITY'] = 'Attivit&agrave; recenti';
$lang['USER_TOPICS_STARTED'] = 'Argomenti aperti';
$lang['USER_POSTS'] = 'Messaggi inviati';
$lang['USER_TOPICS_VIEWS'] = 'Argomenti visitati';
$lang['RECENT_USER_STARTED_TITLE'] = 'aperti da %s';
$lang['RECENT_USER_STARTED_NAV'] = 'Argomenti aperti da %s';
$lang['RECENT_USER_POSTS_TITLE'] = 'in cui %s ha partecipato';
$lang['RECENT_USER_POSTS_NAV'] = 'Argomenti in cui %s ha partecipato';
$lang['RECENT_USER_VIEWS_TITLE'] = 'visitati da %s';
$lang['RECENT_USER_VIEWS_NAV'] = 'Argomenti visitati da %s';

$lang['WARN_NO_BUMP'] = 'Sei stata l\'ultima persona a scrivere in questo argomento: non puoi inviare nuovi messaggi fino a che non sia passato un giorno dal tuo ultimo messaggio o fino a che qualcun altro non risponda nel frattempo.';

$lang['LINK_THIS_TOPIC'] = 'Inserisci un link per questo argomento';
$lang['LINK_URL'] = 'URL';
$lang['LINK_BBCODE'] = 'BBCode';
$lang['LINK_HTML'] = 'HTML';

$lang['NEWS_POSTED'] = 'Mostra le news';
$lang['TOPICS_POSTED'] = 'Cerca gli argomenti aperti';
$lang['POSTS_POSTED'] = 'Cerca tutti i messaggi';

$lang['ACCOUNT_DELETION_REQUEST'] = 'L\'utente %s ha richiesto la cancellazione del proprio account.';

$lang['SORT_TOPICS'] = 'Ordina Argomenti';
$lang['SORT_TOPICS_NEWEST'] = 'Pi&ugrave; Recenti';
$lang['SORT_TOPICS_OLDEST'] = 'Pi&ugrave; Vecchi';

$lang['EDIT_POST_DETAILS'] = 'Modifica Dettagli Messaggio';
$lang['CURRENT_POSTER'] = 'Autore Corrente';
$lang['NEW_POSTER'] = 'Nuovo Autore';
$lang['DETAILS_CHANGED'] = '<b>Dettagli messaggio aggiornati correttamente.</b></span><br /><span class="postdetails">Questa finestra si chiuder&agrave; in 3 secondi.';

$lang['Redirect'] = 'Reindirizzamento';
$lang['Redirect_to'] = 'Se il vostro browser non supporta le il reindirizzamento via meta tags clicca %sQUI%s per accedere al link';

$lang['InProgress'] = 'In corso';

$lang['HAPPY_BIRTHDAY'] = 'Buon Compleanno';

$lang['DOWNLOADED'] = 'Scaricato';
$lang['FILESIZE'] = 'Dimensione';
$lang['FILENAME'] = 'Nome file';
$lang['FILE_NOT_AUTH'] = 'Non hai i permessi sufficienti per scaricare il file';

$lang['SHOW_POSTS_FROM'] = 'Mostra messaggi da';
$lang['SHOW_POSTS_TO'] = 'a';

$lang['SEE_MORE_DETAILS'] = 'See more details...';

$lang['UNKNOWN'] = 'Sconosciuto';

$lang['MASS_PM'] = 'MP Globale';
$lang['TEXT_FORMAT'] = 'Formato';
$lang['SENDER'] = 'Mittente';
$lang['PM_NOTIFICATION'] = 'Ciao,<br /><br />hai ricevuto un messaggio privato sul sito "{SITENAME}".<br /><br />Puoi visualizzare il messaggio cliccando sul link seguente:<br /><br />{U_INBOX}<br /><br />';

$lang['GSEARCH'] = 'Ricerca Google';
$lang['GSEARCH_ENGINE'] = 'Ricerca Utilizzando Il Motore Google';
$lang['SEARCH_WHAT'] = 'Cerca cosa';
$lang['SEARCH_WHERE'] = 'Cerca in';
$lang['SEARCH_THIS_FORUM'] = 'Cerca in questa categoria';
$lang['SEARCH_THIS_TOPIC'] = 'Cerca in questo argomento';
$lang['VF_ALL_TOPICS'] = 'Tutti Gli Argomenti';

$lang['WHITE_LIST_MESSAGE'] = 'Questo sito richiede la conferma della registrazione tramite email, per favore controlla che questo dominio sia tra i domini consentiti, altrimenti a causa dei filtri antispam potresti non ricevere l\'email per attivare il tuo account.';

$lang['CLICK_RETURN_HOME'] = 'Clicca %sQUI%s per ritornare alla Home Page';

$lang['RATINGS'] = 'Valutazioni';

$lang['ERROR_TABLE'] = 'Could not query %s table';

$lang['SMILEYS'] = 'Smileys';
$lang['SMILEYS_NO_CATEGORIES'] = 'Nessuna categoria creata';
$lang['SMILEYS_CATEGORY'] = 'Categoria';
$lang['SMILEYS_GALLERY'] = 'Galleria Smileys';
$lang['SMILEYS_STANDARD'] = 'Smileys Standard';

$lang['QUICK_LIST'] = 'Elenco Completo';
$lang['NORMAL_LIST'] = 'Elenco Standard';

//$lang[''] = '';

//====================================================
// Non inserite niente sotto questa riga, per favore.
//====================================================

?>