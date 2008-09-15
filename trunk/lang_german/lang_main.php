<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main.php 49 2008-09-15 20:00:00Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
* TheSteffen, KugeLSichA, Tom
*
*/

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Kategorie';
$lang['Topic'] = 'Thema';
$lang['Topics'] = 'Themen';
$lang['Replies'] = 'Antworten';
$lang['Views'] = 'Aufrufe';
$lang['Post'] = 'Beitrag';
$lang['Posts'] = 'Beiträge';
$lang['Posted'] = 'Verfasst am';
$lang['Username'] = 'Benutzername';
$lang['Password'] = 'Passwort';
$lang['Email'] = 'E-Mail';
$lang['Poster'] = 'Poster';
$lang['Author'] = 'Autor';
$lang['Time'] = 'Zeit';
$lang['Hours'] = 'Stunden';
$lang['Message'] = 'Nachricht';

$lang['1_Day'] = '1 Tag';
$lang['7_Days'] = '7 Tage';
$lang['2_Weeks'] = '2 Wochen';
$lang['1_Month'] = '1 Monat';
$lang['3_Months'] = '3 Monate';
$lang['6_Months'] = '6 Monate';
$lang['1_Year'] = '1 Jahr';

$lang['Go'] = 'Los';
$lang['Jump_to'] = 'Gehe zu';
$lang['Submit'] = 'Absenden';
$lang['Reset'] = 'Zurücksetzen';
$lang['Cancel'] = 'Abbrechen';
$lang['Preview'] = 'Vorschau';
$lang['Confirm'] = 'Bestätigen';
$lang['Spellcheck'] = 'Rechtschreibprüfung';
$lang['Yes'] = 'Ja';
$lang['No'] = 'Nein';
$lang['Enabled'] = 'Aktiviert';
$lang['Disabled'] = 'Deaktiviert';
$lang['Error'] = 'Fehler';

$lang['Next'] = 'Weiter';
$lang['Previous'] = 'Zurück';
$lang['Goto_page'] = 'Gehe zu Seite';
$lang['Joined'] = 'Anmeldung';
$lang['IP_Address'] = 'IP-Adresse';

$lang['Select_forum'] = 'Forum auswählen';
$lang['View_latest_post'] = 'Letzten Beitrag anzeigen';
$lang['View_newest_post'] = 'Neuesten Beitrag anzeigen';
$lang['Page_of'] = 'Seite <b>%d</b> von <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ-Nummer';
$lang['AIM'] = 'AIM-Name';
$lang['MSNM'] = 'MSN Live';
$lang['YIM'] = 'Yahoo Messenger';
$lang['SKYPE'] = 'Skype';
$lang['Forum_Index'] = 'Forum';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Neues Thema eröffnen';
$lang['Reply_to_topic'] = 'Neue Antwort erstellen';
$lang['Reply_with_quote'] = 'Antworten mit Zitat';

$lang['Click_return_topic'] = '%sHier klicken%s, um zum Thema zurückzukehren'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = '%sHier klicken%s, um es noch einmal zu versuchen';
$lang['Click_return_forum'] = '%sHier klicken%s, um zum Forum zurückzukehren';
$lang['Click_view_message'] = '%sHier klicken%s, um deine Nachricht anzuzeigen';
$lang['Click_return_modcp'] = '%sHier klicken%s, um zur Moderatorenkontrolle zurückzukehren';
$lang['Click_return_group'] = '%sHier klicken%s, um zur Gruppeninfo zurückzukehren';

$lang['Admin_panel'] = 'Admin-Bereich';

$lang['Board_disabled'] = 'Sorry, aber dieses Board ist im Moment nicht verfügbar. Probier es bitte später wieder.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Registrierte Benutzer:';
$lang['Browsing_forum'] = 'Benutzer in diesem Forum:';
$lang['Online_users_zero_total'] = 'Insgesamt sind <b>0</b> Benutzer online: ';
$lang['Online_users_total'] = 'Insgesamt sind <b>%d</b> Benutzer online: ';
$lang['Online_user_total'] = 'Insgesamt ist <b>ein</b> Benutzer online: ';
$lang['AC_Online_users_zero_total'] = 'Insgesamt sind <b>0</b> Benutzer im Chat: ';
$lang['AC_Online_users_total'] = 'Insgesamt sind <b>%d</b> Benutzer im Chat: ';
$lang['AC_Online_user_total'] = 'Insgesamt ist <b>1</b> Benutzer im Chat: ';
$lang['Reg_users_zero_total'] = 'Kein registrierter, ';
$lang['Reg_users_total'] = '%d registrierte, ';
$lang['Reg_user_total'] = 'Ein registrierter, ';
$lang['Hidden_users_zero_total'] = 'kein versteckter und ';
$lang['Hidden_user_total'] = 'ein versteckter und ';
$lang['Hidden_users_total'] = '%d versteckte und ';
$lang['Guest_users_zero_total'] = 'kein Gast';
$lang['Guest_users_total'] = '%d Gäste';
$lang['Guest_user_total'] = 'ein Gast';
$lang['Record_online_users'] = 'Der Rekord liegt bei <b>%s</b> Benutzern am %s.'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrator%s';
$lang['Mod_online_color'] = '%sModerator%s';

$lang['You_last_visit'] = 'Dein letzter Besuch war am: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Aktuelles Datum und Uhrzeit: %s'; // %s replaced by time

$lang['Search_new'] = 'Beiträge seit dem letzten Besuch';
$lang['Search_your_posts'] = 'Eigene Beiträge';
$lang['Search_unanswered'] = 'Unbeantw. Beiträge anzeigen';

$lang['Register'] = 'Registrieren';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Profil bearbeiten';
$lang['Search'] = 'Suchen';
$lang['Memberlist'] = 'Mitgliederliste';
$lang['FAQ'] = 'FAQ';
$lang['KB_title'] = 'Wissensdatenbank';
$lang['BBCode_guide'] = 'BBCode-Hilfe';
$lang['Usergroups'] = 'Benutzergruppen';
$lang['Last_Post'] = 'Letzter&nbsp;Beitrag';
$lang['Moderator'] = '<b>Moderator</b>';
$lang['Moderators'] = '<b>Moderatoren</b>';


// Stats block text
$lang['Posted_articles_zero_total'] = 'Unsere Benutzer haben <b>noch keine</b> Beiträge geschrieben.'; // Number of posts
$lang['Posted_articles_total'] = 'Unsere Benutzer haben insgesamt <b>%d</b> Beiträge geschrieben.'; // Number of posts
$lang['Posted_article_total'] = 'Unsere Benutzer haben <b>einen</b> Beitrag geschrieben.'; // Number of posts
$lang['Registered_users_zero_total'] = 'Wir haben <b>keine</b> registrierten Benutzer.'; // # registered users
$lang['Registered_users_total'] = 'Wir haben <b>%d</b> registrierte Benutzer.'; // # registered users
$lang['Registered_user_total'] = 'Wir haben <b>einen</b> registrierten Benutzer.'; // # registered users
$lang['Newest_user'] = 'Der neueste Benutzer ist <b>%s%s%s</b>.'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Keine neuen Beiträge seit deinem letzten Besuch';

$lang['No_new_posts_global_announcement'] = 'Keine neuen Beiträge [Gl. Ankündigung]';
$lang['New_posts_global_announcement'] = 'Neue Beiträge [Gl. Ankündigung]';
$lang['No_new_posts_announcement'] = 'Keine neuen Beiträge [Ankündigung]';
$lang['New_posts_announcement'] = 'Neue Beiträge [Ankündigung]';
$lang['No_new_posts_sticky'] = 'Keine neuen Beiträge [Wichtig]';
$lang['New_posts_sticky'] = 'Neue Beiträge [Wichtig]';
$lang['No_new_posts_locked'] = 'Keine neuen Beiträge [Gesperrt]';
$lang['New_posts_locked'] = 'Neue Beiträge [Gesperrt]';
$lang['No_new_posts'] = 'Keine neuen Beiträge';
$lang['New_posts'] = 'Neue Beiträge';
$lang['New_post'] = 'Neuer Beitrag';
$lang['No_new_posts_hot'] = 'Keine neuen Beiträge [Top-Thema]';
$lang['New_posts_hot'] = 'Neue Beiträge [Top-Thema]';

$lang['Forum_no_new_posts'] = 'keine neuen Beiträge [Forum]';
$lang['Forum_new_posts'] = 'Neue Beiträge [Forum]';
$lang['Cat_no_new_posts'] = 'keine neuen Beiträge [Kategorie]';
$lang['Cat_new_posts'] = 'Neue Beiträge [Kategorie]';
$lang['Forum_is_locked'] = 'Forum ist gesperrt';

// Login
$lang['Enter_password'] = 'Gib bitte deinen Benutzernamen und dein Passwort ein, um dich einzuloggen.';
$lang['Login'] = 'Login';
$lang['Logout'] = 'Logout';
$lang['Forgotten_password'] = 'Ich habe mein Passwort vergessen!';
$lang['AUTOLOGIN'] = 'Bei jedem Besuch automatisch einloggen';
$lang['Error_login'] = 'Du hast einen falschen oder inaktiven Benutzernamen oder ein falsches Passwort eingegeben.';

// Index page
$lang['No_Posts'] = 'Keine Beiträge';
$lang['No_forums'] = 'Dieses Board hat keine Foren.';

$lang['Private_Message'] = 'Private Nachricht';
$lang['Private_Messages'] = 'Private Nachrichten';
$lang['Who_is_Online'] = 'Wer ist online?';

$lang['Mark_all_forums'] = 'Alle Foren als gelesen markieren';
$lang['Forums_marked_read'] = 'Alle Foren wurden als gelesen markiert.';


// Viewforum
$lang['View_forum'] = 'Forum anzeigen';

$lang['Forum_not_exist'] = 'Das ausgewählte Forum existiert nicht.';
$lang['Reached_on_error'] = 'Fehler auf dieser Seite!';

$lang['Display_topics'] = 'Siehe Beiträge der letzten';
$lang['All_Topics'] = 'Alle Themen anzeigen';

$lang['Topic_News_nb'] = 'News';
$lang['Topic_global_announcement_nb'] = 'Globale Ankündigung';
$lang['Topic_Announcement_nb'] = 'Ankündigungen';
$lang['Topic_Sticky_nb'] = 'Wichtig';
$lang['Topic_Moved_nb'] = 'Verschoben';
$lang['Topic_Poll_nb'] = 'Umfrage';
$lang['Topic_Announcement'] = '<b>Ankündigungen:</b>';
$lang['Topic_Sticky'] = '<b>Wichtig:</b>';
$lang['Topic_Moved'] = '<b>Verschoben:</b>';
$lang['Topic_Poll'] = '<b>[Umfrage]</b>';
$lang['Topic_global_announcement'] = '<b>Globale Ankündigung:</b>';
$lang['Post_global_announcement'] = 'Globale Ankündigung';


$lang['Mark_all_topics'] = 'Alle Themen als gelesen markieren';
$lang['Topics_marked_read'] = 'Alle Themen wurden als gelesen markiert.';














$lang['Rules_post_can'] = 'Du <b>kannst</b> neue Themen in diesem Forum erstellen.';
$lang['Rules_post_cannot'] = 'Du <b>kannst keine</b> neuen Themen in diesem Forum erstellen.';
$lang['Rules_reply_can'] = 'Du <b>kannst</b> auf Beiträge in diesem Forum antworten.';
$lang['Rules_reply_can_own'] = 'Du <b>kannst</b> auf Deine Beiträge in diesem Forum antworten.';
$lang['Rules_reply_cannot'] = 'Du <b>kannst nicht</b> auf Beiträge in diesem Forum antworten.';
$lang['Rules_edit_can'] = 'Du <b>kannst</b> deine Beiträge in diesem Forum bearbeiten.';
$lang['Rules_edit_cannot'] = 'Du <b>kannst</b> deine Beiträge in diesem Forum <b>nicht</b> bearbeiten.';
$lang['Rules_delete_can'] = 'Du <b>kannst</b> deine Beiträge in diesem Forum löschen.';
$lang['Rules_delete_cannot'] = 'Du <b>kannst</b> deine Beiträge in diesem Forum <b>nicht</b> löschen.';
$lang['Rules_vote_can'] = 'Du <b>kannst</b> an Umfragen in diesem Forum teilnehmen.';
$lang['Rules_vote_cannot'] = 'Du <b>kannst nicht</b> an Umfragen in diesem Forum teilnehmen.';
$lang['Rules_moderate'] = 'Du <b>kannst</b> %sdieses Forum moderieren%s.'; // %s replaced by a href links, do not remove!


$lang['No_topics_post_one'] = 'In diesem Forum sind keine Beiträge vorhanden.<br />Klicke auf <b>Neues Thema</b>, um den ersten Beitrag zu erstellen.';


//
// Viewtopic
//
$lang['View_topic'] = 'Thema anzeigen';

$lang['Guest'] = 'Gast';
$lang['Post_subject'] = 'Titel';
$lang['View_next_topic'] = 'Nächstes Thema anzeigen';
$lang['View_previous_topic'] = 'Vorheriges Thema anzeigen';
$lang['Submit_vote'] = 'Stimme absenden';
$lang['View_results'] = 'Ergebnis anzeigen';

$lang['No_newer_topics'] = 'Es gibt keine neueren Themen in diesem Forum.';
$lang['No_older_topics'] = 'Es gibt keine älteren Themen in diesem Forum.';
$lang['Topic_post_not_exist'] = 'Das gewählte Thema oder der Beitrag existiert nicht.';
$lang['No_posts_topic'] = 'Es existieren keine Beiträge zu diesem Thema.';

$lang['Display_posts'] = 'Beiträge der letzten Zeit anzeigen';
$lang['All_Posts'] = 'Alle Beiträge';
$lang['Newest_First'] = 'Die neusten zuerst';
$lang['Oldest_First'] = 'Die ältesten zuerst';

$lang['Back_to_top'] = 'Nach oben';
$lang['Back_to_bottom'] = 'Nach unten';

$lang['Read_profile'] = 'Benutzer-Profile anzeigen';
$lang['Send_email'] = 'E-Mail an diesen Benutzer senden';
$lang['Visit_website'] = 'Website dieses Benutzers besuchen';
$lang['ICQ_status'] = 'ICQ-Status';
$lang['Edit_delete_post'] = 'Beitrag bearbeiten oder löschen';
$lang['View_IP'] = 'IP-Adresse zeigen';
$lang['Delete_post'] = 'Beitrag löschen';

$lang['wrote'] = 'hat folgendes geschrieben'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Zitat'; // comes before bbcode quote output.
$lang['Code'] = 'Code'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Zuletzt bearbeitet von %s am %s, insgesamt einmal bearbeitet'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Zuletzt bearbeitet von %s am %s, insgesamt %d-mal bearbeitet'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Thema sperren';
$lang['Unlock_topic'] = 'Thema entsperren';
$lang['Move_topic'] = 'Thema verschieben';
$lang['Delete_topic'] = 'Thema löschen';
$lang['Split_topic'] = 'Thema teilen';

$lang['Stop_watching_topic'] = 'Bei Antworten zu diesem Thema nicht mehr benachrichtigen';
$lang['Start_watching_topic'] = 'Bei Antworten zu diesem Thema benachrichtigen';
$lang['No_longer_watching'] = 'Das Thema wird nicht mehr von Dir beobachtet.';
$lang['You_are_watching'] = 'Du beobachtest nun das Thema.';

$lang['Total_votes'] = 'Stimmen insgesamt';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Nachrichtentext';
$lang['Topic_review'] = 'Thema-Überblick';

$lang['No_post_mode'] = 'Kein Eintrags-Modus ausgewählt'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Neues Thema schreiben';
$lang['Post_a_reply'] = 'Antwort schreiben';
$lang['Post_topic_as'] = 'Thema schreiben als';
$lang['Edit_Post'] = 'Beitrag editieren';
$lang['Options'] = 'Optionen';

$lang['PM_Read'] = 'PN gelesen';
$lang['PM_Unread'] = 'PN ungelesen';
$lang['PM_Replied'] = 'PN beantwortet';

$lang['Post_Announcement'] = 'Ankündigung';
$lang['New_post_Announcement'] = 'Neue Ankündigung';
$lang['Post_Sticky'] = 'Wichtig';
$lang['New_post_Sticky'] = 'Neu Wichtig';
$lang['Post_Normal'] = 'Normal';

$lang['Confirm_delete'] = 'Sicher, dass dieser Beitrag gelöscht werden soll?';
$lang['Confirm_delete_poll'] = 'Sicher, dass diese Umfrage gelöscht werden soll?';

$lang['Flood_Error'] = 'Du kannst einen Beitrag nicht so schnell nach deinem letzten absenden, bitte warte einen Augenblick.';
$lang['Empty_subject'] = 'Bei einem neuen Thema musst du einen Titel angeben.';
$lang['Empty_message'] = 'Du musst zu deinem Beitrag einen Text eingeben.';
$lang['Forum_locked'] = 'Dieses Forum ist gesperrt, du kannst keine Beiträge editieren, schreiben oder beantworten.';
$lang['Topic_locked'] = 'Dieses Thema ist gesperrt, du kannst keine Beiträge editieren oder beantworten.';
$lang['No_post_id'] = 'Du musst einen Beitrag zum editieren auswählen.';
$lang['No_topic_id'] = 'Du musst ein Thema für deine Antwort auswählen.';
$lang['No_valid_mode'] = 'Du kannst nur Beiträge schreiben, bearbeiten, beantworten und zitieren. Versuch es noch einmal.';
$lang['No_such_post'] = 'Es existiert kein solcher Beitrag. Versuch es noch einmal.';
$lang['Edit_own_posts'] = 'Du kannst nur deine eigenen Beiträge bearbeiten.';
$lang['Delete_own_posts'] = 'Du kannst nur deine eigenen Beiträge löschen.';
$lang['Cannot_delete_replied'] = 'Du kannst keine Beiträge löschen, die schon beantwortet wurden.';
$lang['Cannot_delete_poll'] = 'Du kannst keine aktiven Umfrage löschen.';
$lang['Empty_poll_title'] = 'Du musst einen Titel für die Umfrage eingeben.';
$lang['To_few_poll_options'] = 'Du musst mindestens zwei Antworten für die Umfrage angeben.';
$lang['To_many_poll_options'] = 'Du hast zu viele Antworten für die Umfrage angegeben';
$lang['Post_has_no_poll'] = 'Dieser Beitrag hat keine Umfrage.';
$lang['Already_voted'] = 'Du hast an dieser Umfrage schon teilgenommen.';
$lang['No_vote_option'] = 'Du musst eine Auswahl treffen, um abzustimmen.';

$lang['Add_poll'] = 'Umfrage hinzufügen';
$lang['Add_poll_explain'] = 'Wenn du keine Umfrage zum Thema hinzufügen willst, lass die Felder leer.';
$lang['Poll_question'] = 'Frage';
$lang['Poll_option'] = 'Antwort';
$lang['Add_option'] = 'Antwort hinzufügen';
$lang['Update'] = 'Aktualisieren';
$lang['Delete'] = 'Löschen';
$lang['Poll_for'] = 'Dauer der Umfrage:';
$lang['Days'] = 'Tage'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Gib 0 ein oder lass dieses Feld leer, um die Umfrage auf unbeschränkte Zeit durchzuführen ]';
$lang['Delete_poll'] = 'Umfrage löschen';

$lang['Disable_HTML_post'] = 'HTML in diesem Beitrag deaktivieren';
$lang['Disable_ACRO_AUTO_post'] = 'Abkürzungserklärungen und Autolinks in diesem Beitrag deaktivieren';
$lang['Disable_BBCode_post'] = 'BBCode in diesem Beitrag deaktivieren';
$lang['Disable_Smilies_post'] = 'Smilies in diesem Beitrag deaktivieren';

$lang['HTML_is_ON'] = 'HTML ist <u>an</u>';
$lang['HTML_is_OFF'] = 'HTML ist <u>aus</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s ist <u>an</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s ist <u>aus</u>';
$lang['Smilies_are_ON'] = 'Smilies sind <u>an</u>';
$lang['Smilies_are_OFF'] = 'Smilies sind <u>aus</u>';

$lang['Attach_signature'] = 'Signatur anhängen (Signatur kann im Profil geändert werden)';
$lang['Notify'] = 'Benachrichtigt mich, wenn eine Antwort geschrieben wurde';
$lang['Delete_post'] = 'Diesen Beitrag löschen';

$lang['Stored'] = 'Deine Nachricht wurde erfolgreich eingetragen.';
$lang['Deleted'] = 'Deine Nachricht wurde erfolgreich gelöscht.';
$lang['Poll_delete'] = 'Deine Umfrage wurde erfolgreich gelöscht.';
$lang['Vote_cast'] = 'Deine Stimme wurde gezählt.';

$lang['Topic_reply_notification'] = 'Benachrichtigen bei Antworten';

$lang['bbcode_b_help'] = 'Text in fett: [b]Text[/b] (alt+b)';
$lang['bbcode_i_help'] = 'Text in kursiv: [i]Text[/i] (alt+i)';
$lang['bbcode_u_help'] = 'Unterstrichener Text: [u]Text[/u] (alt+u)';
$lang['bbcode_q_help'] = 'Zitat: [quote]Text[/quote] (alt+q)';
$lang['bbcode_c_help'] = 'Code anzeigen: [code]Code[/code] (alt+c)';
$lang['bbcode_l_help'] = 'Liste: [list]Text[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Geordnete Liste: [list=]Text[/list] (alt+o)';
$lang['bbcode_p_help'] = 'Bild einfügen: [img]http://URL_des_Bildes[/img] (alt+p)';
$lang['bbcode_w_help'] = 'URL einfügen: [url]http://URL[/url] oder [url=http://url]URL Text[/url] (alt+w)';
$lang['bbcode_a_help'] = 'Alle offenen BBCodes schließen';
$lang['bbcode_s_help'] = 'Schriftfarbe: [color=red]Text[/color] Tipp: Du kannst ebenfalls color=#FF0000 benutzen';
$lang['bbcode_f_help'] = 'Schriftgröße: [size=x-small]Kleiner Text[/size]';

$lang['Emoticons'] = 'Smilies';
$lang['More_emoticons'] = 'Weitere Smilies ansehen';

$lang['Font_color'] = 'Schriftfarbe';
$lang['color_default'] = 'Standard';
$lang['color_dark_red'] = 'Dunkelrot';
$lang['color_red'] = 'Rot';
$lang['color_orange'] = 'Orange';
$lang['color_brown'] = 'Braun';
$lang['color_yellow'] = 'Gelb';
$lang['color_green'] = 'Grün';
$lang['color_olive'] = 'Oliv';
$lang['color_cyan'] = 'Cyan';
$lang['color_blue'] = 'Blau';
$lang['color_dark_blue'] = 'Dunkelblau';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Violett';
$lang['color_white'] = 'Weiß';
$lang['color_black'] = 'Schwarz';

$lang['Font_size'] = 'Schriftgröße';
$lang['font_tiny'] = 'Winzig';
$lang['font_small'] = 'Klein';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'Groß';
$lang['font_huge'] = 'Riesig';

$lang['Close_Tags'] = 'Tags schließen';
$lang['Styles_tip'] = 'Tipp: Styles können schnell zum markierten Text hinzugefügt werden.';

//
// Private Messaging
//
$lang['Private_Messaging'] = 'Private Nachrichten';

$lang['Login_check_pm'] = 'Einloggen, um private Nachrichten zu lesen';
$lang['New_pms'] = 'Du hast %d neue Nachrichten'; // You have 2 new messages
$lang['New_pm'] = 'Du hast 1 neue Nachricht'; // You have 1 new message
$lang['No_new_pm'] = 'Du hast keine neuen Nachrichten';
$lang['Unread_pms'] = 'Du hast %d ungelesene Nachrichten';
$lang['Unread_pm'] = 'Du hast 1 ungelesene Nachricht';
$lang['No_unread_pm'] = 'Du hast keine ungelesenen Nachrichten';
$lang['You_new_pm'] = 'Eine neue private Nachricht befindet sich in deinem Posteingang';
$lang['You_new_pms'] = 'Es befinden sich neue private Nachrichten in deinem Posteingang';
$lang['You_no_new_pm'] = 'Es sind keine neuen privaten Nachrichten vorhanden';

$lang['Unread_message'] = 'Ungelesene Nachricht';
$lang['Read_message'] = 'Gelesene Nachricht';

$lang['Read_pm'] = 'Nachricht lesen';
$lang['Post_new_pm'] = 'Nachricht schreiben';
$lang['Post_reply_pm'] = 'Auf Nachricht antworten';
$lang['Post_quote_pm'] = 'Nachricht zitieren';
$lang['Edit_pm'] = 'Nachricht bearbeiten';

$lang['Inbox'] = 'Posteingang';
$lang['Outbox'] = 'Postausgang';
$lang['Savebox'] = 'Archiv';
$lang['Sentbox'] = 'Gesendete Nachrichten';
$lang['Flag'] = 'Flagge';
$lang['Subject'] = 'Titel';
$lang['From'] = 'Von';
$lang['To'] = 'An';
$lang['Date'] = 'Datum';
$lang['Mark'] = 'Markiert';
$lang['Sent'] = 'Gesendet';
$lang['Saved'] = 'Gespeichert';
$lang['Delete_marked'] = 'Markierte löschen';
$lang['Delete_all'] = 'Alle löschen';
$lang['Save_marked'] = 'Markierte speichern';
$lang['Download_marked'] = 'Markierte herunterladen';
$lang['Mailbox'] = 'Mailbox';
$lang['Save_message'] = 'Nachricht speichern';
$lang['Delete_message'] = 'Nachricht löschen';
// BEGIN PM Navigation MOD
$lang['Next_privmsg'] = 'Nächste Private Nachricht';
$lang['Previous_privmsg'] = 'Vorherige Private Nachricht';
$lang['No_newer_pm'] = 'Es gibt keine neuere Private Nachricht.';
$lang['No_older_pm'] = 'Es gibt keine ältere Private Nachricht.';
// END PM Navigation MOD
$lang['Display_messages'] = 'Nachrichten anzeigen der letzten'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Alle Nachrichten';

$lang['No_messages_folder'] = 'Es sind keine weiteren Nachrichten in diesem Ordner.';

$lang['PM_disabled'] = 'Private Nachrichten wurden in diesem Board deaktiviert.';
$lang['Cannot_send_privmsg'] = 'Der Administrator hat private Nachrichten für dich gesperrt.';
$lang['No_to_user'] = 'Du musst einen Benutzernamen angeben, um diese Nachricht zu senden.';
$lang['No_such_user'] = 'Es existiert kein Benutzer mit diesem Namen.';

$lang['Disable_HTML_pm'] = 'HTML in dieser Nachricht deaktivieren';
$lang['Disable_ACRO_AUTO_pm'] = 'Abkürzungserklärungen und Autolinks in dieser Nachricht deaktivieren';
$lang['Disable_BBCode_pm'] = 'BBCode in dieser Nachricht deaktivieren';
$lang['Disable_Smilies_pm'] = 'Smilies in dieser Nachricht deaktivieren';

$lang['Message_sent'] = 'Deine Nachricht wurde gesendet.';

$lang['Click_return_inbox'] = '%sKlicke hier%s, um zum Posteingang zurückzukehren.';
$lang['Click_return_index'] = '%sKlicke hier%s, um zum Index zurückzukehren.';

$lang['Send_a_new_message'] = 'Neue Nachricht senden';
$lang['Send_a_reply'] = 'Auf private Nachricht antworten';
$lang['Edit_message'] = 'Private Nachricht bearbeiten';

$lang['Notification_subject'] = 'Eine neue private Nachricht ist eingetroffen!';

$lang['Find_username'] = 'Benutzernamen finden';
$lang['Find'] = 'Finden';
$lang['No_match'] = 'Keine Ergebnisse gefunden.';

$lang['No_post_id'] = 'Es wurde keine Beitrags-ID angegeben.';
$lang['No_such_folder'] = 'Es existiert kein solcher Ordner.';
$lang['No_folder'] = 'Kein Ordner ausgewählt';

$lang['Mark_all'] = 'Alle markieren';
$lang['Unmark_all'] = 'Markierungen aufheben';

$lang['Confirm_delete_pm'] = 'Diese Nachricht wirklich löschen?';
$lang['Confirm_delete_pms'] = 'Diese Nachrichten wirklich löschen?';

$lang['Inbox_size'] = 'Dein Posteingang ist zu %d%% voll'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Deine gesendeten Nachrichten sind zu %d%% voll';
$lang['Savebox_size'] = 'Dein Archiv ist zu %d%% voll';

$lang['Click_view_privmsg'] = '%sKlicke hier%s, um deinen Posteingang aufzurufen';

// Profiles/Registration
$lang['Viewing_user_profile'] = 'Profil anzeigen : %s'; // %s is username
$lang['About_user'] = 'Alles über %s';
//Start Quick Administrator User Options and Information MOD
$lang['Quick_admin_options'] = 'Schnelladministration: Benutzeroptionen und Information';
$lang['Admin_edit_profile'] = 'Bearbeite Benutzer Profil';
$lang['Admin_edit_permissions'] = 'Bearbeite Benutzer Berechtigungen';
$lang['User_active'] = 'Benutzer <b>ist</b> aktiv';
$lang['User_not_active'] = 'Benutzer <b>ist nicht</b> aktiv';
$lang['Username_banned'] = 'Benutzername <b>ist</b> gesperrt';
$lang['Username_not_banned'] = 'Benutzername <b>ist nicht</b> gesperrt';
$lang['User_email_banned'] = 'Die E-Mail von [ %s ] <b>ist</b> gesperrt';
$lang['User_email_not_banned'] = 'Die E-Mail des Benutzers <b>ist nicht</b> gesperrt';
//End Quick Administrator User Options and Information MOD
$lang['Preferences'] = 'Einstellungen';
$lang['Items_required'] = 'Mit * markierte Felder sind erforderlich';
$lang['Registration_info'] = 'Registrierungs-Informationen';
$lang['Profile_info'] = 'Profil-Informationen';
$lang['Profile_info_warn'] = 'Diese Informationen sind öffentlich abrufbar!';
$lang['Avatar_panel'] = 'Avatar-Steuerung';
$lang['Avatar_gallery'] = 'Avatar-Galerie';

$lang['Website'] = 'Webseite';
$lang['Location'] = 'Wohnort';
$lang['Contact'] = 'Kontakt';
$lang['Email_address'] = 'E-Mail-Adresse';
$lang['Email'] = 'E-Mail';
$lang['Send_private_message'] = 'Private Nachricht senden';
$lang['Hidden_email'] = '[ Versteckt ]';
$lang['Search_user_posts'] = 'Beiträge von diesem Benutzer anzeigen';
$lang['Interests'] = 'Interessen';
$lang['Occupation'] = 'Beruf';
$lang['Poster_rank'] = 'Rang';

$lang['Total_posts'] = 'Beiträge insgesamt';
$lang['User_post_pct_stats'] = '%.2f%% aller Beiträge'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f Beiträge pro Tag'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Alle Beiträge von %s anzeigen'; // Find all posts by username
$lang['Search_user_topics_started'] = 'Find all topics started by %s'; // Find all topics started by username

$lang['No_user_id_specified'] = 'Dieser Benutzer existiert nicht.';
$lang['Wrong_Profile'] = 'Du kannst nur dein eigenes Profil bearbeiten.';
//====================================================================== |
//==== Start Invision View Profile ===================================== |
//==== v1.1.3 ========================================================== |
//====
$lang['Invision_Active_Stats'] = 'Aktivitätsstatistik';
$lang['Invision_Communicate'] = 'Kontakt';
$lang['Invision_Info'] = 'Information';
$lang['Invision_Member_Group'] = 'Gruppenmitgliedschaft';
$lang['Invision_Member_Title'] = 'Titel';
$lang['Invision_Most_Active'] = 'Am aktivsten in';
$lang['Invision_Most_Active_Posts'] = '%s Beiträge in diesem Forum';
$lang['Invision_Details'] = 'Details';
$lang['Invision_PPD_Stats'] = 'Beiträge pro Tag';
$lang['Invision_Signature'] = 'Signatur';
$lang['Invision_Website'] = 'Webseite';
$lang['Invision_Total_Posts'] = 'Gesamtanzahl Beiträge';
$lang['Invision_User_post_pct_stats'] = '( %.2f%% aller Beiträge im Forum)';
$lang['Invision_User_post_day_stats'] = '%.2f Beiträge pro Tag';
$lang['Invision_Search_user_posts'] = 'Zeige alle Beiträge dieses Benutzers';
$lang['Invision_Posting_details'] = 'Beitragsdetails';
//====
//==== Author: Disturbed One [http://anthonycoy.com] =================== |
//==== End Invision View Profile ======================================= |
//====================================================================== |

$lang['Only_one_avatar'] = 'Es kann nur ein Avatar ausgewählt werden';
$lang['File_no_data'] = 'Die angegebene Datei enthält keine Daten';
$lang['No_connection_URL'] = 'Es konnte keine Verbindung zur angegebenen Datei hergestellt werden';
$lang['Incomplete_URL'] = 'Die angegebene URL ist unvollständig';
$lang['Wrong_remote_avatar_format'] = 'Das Format des Avatars ist nicht gültig';
$lang['No_send_account_inactive'] = 'Sorry, aber ein neues Passwort kann im Moment nicht gesendet werden, da dein Benutzer-Konto derzeit noch inaktiv ist. Bitte kontaktiere den Administrator für weitere Informationen.';

$lang['Always_smile'] = 'Smilies immer aktivieren';
$lang['Always_html'] = 'HTML immer aktivieren';
$lang['Always_bbcode'] = 'BBCode immer aktivieren';
$lang['Always_add_sig'] = 'Signatur immer anhängen';
$lang['Always_notify'] = 'Bei Antworten immer benachrichtigen';
$lang['Always_notify_explain'] = 'Sendet dir eine E-Mail, wenn jemand auf einen deiner Beiträge antwortet. Kann für jeden Beitrag geändert werden.';

$lang['Board_style'] = 'Board-Style';
$lang['Board_lang'] = 'Board-Sprache';
$lang['No_themes'] = 'Keine Themes in der Datenbank';
$lang['Timezone'] = 'Zeitzone';
$lang['Date_format'] = 'Datum-Format';
$lang['Date_format_explain'] = 'Die Syntax ist identisch mit der PHP-Funktion <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a>';
$lang['Signature'] = 'Signatur';
$lang['Signature_explain'] = 'Dies ist ein Text, der an jeden Beitrag von dir angehängt werden kann. Es besteht eine Limit von %d Buchstaben.';
$lang['Public_view_email'] = 'Zeige meine E-Mail-Adresse immer an';

$lang['Current_password'] = 'Altes Passwort';
$lang['New_password'] = 'Neues Passwort';
$lang['Confirm_password'] = 'Passwort bestätigen';
$lang['Confirm_password_explain'] = 'Du musst dein Passwort angeben, wenn du dein Passwort oder deine Mailadresse ändern möchtest.';
$lang['password_if_changed'] = 'Du musst nur dann ein neues Passwort angeben, wenn du es ändern willst';
$lang['password_confirm_if_changed'] = 'Du musst dein neues Passwort bestätigen, wenn du es ändern willst';

$lang['Avatar'] = 'Avatar';





$lang['Avatar_explain'] = 'Zeigt eine kleine Grafik neben deinen Details zu jedem deiner Beiträge an. Es kann immer nur ein Avatar angezeigt werden, seine Breite darf nicht größer als %d Pixel sein, die Höhe nicht größer als %d Pixel, und die Dateigröße darf maximal %d KB betragen.';
$lang['Upload_Avatar_file'] = 'Avatar von deinem Computer hochladen';
$lang['Upload_Avatar_URL'] = 'Avatar von URL hochladen';
$lang['Upload_Avatar_URL_explain'] = 'Gib die URL des gewünschten Avatars an, dieser wird dann kopiert';
$lang['Pick_local_Avatar'] = 'Avatar aus der Galerie auswählen';
$lang['Link_remote_Avatar'] = 'Zu einem externen Avatar linken';
$lang['Link_remote_Avatar_explain'] = 'Gib die URL des Avatars ein, der gelinkt werden soll';
$lang['Avatar_URL'] = 'URL des Avatars';
$lang['Select_from_gallery'] = 'Avatar aus der Galerie auswählen';
$lang['View_avatar_gallery'] = 'Galerie anzeigen';

$lang['Select_avatar'] = 'Avatar auswählen';
$lang['Return_profile'] = 'Avatar abbrechen';
$lang['Select_category'] = 'Kategorie auswählen';

$lang['Delete_Image'] = 'Bild löschen';
$lang['Current_Image'] = 'Aktuelles Bild';

$lang['Notify_on_privmsg'] = 'Bei neuen Privaten Nachrichten benachrichtigen';
$lang['Popup_on_privmsg'] = 'PopUp-Fenster bei neuen Privaten Nachrichten';
$lang['Popup_on_privmsg_explain'] = 'Einige Templates öffnen neue Fenster, um dich über neue private Nachrichten zu benachrichtigen.';
$lang['Hide_user'] = 'Online-Status verstecken';

$lang['Profile_updated'] = 'Dein Profil wurde aktualisiert';
$lang['Profile_updated_inactive'] = 'Dein Profil wurde aktualisiert. Du hast jedoch wesentliche Details geändert, weswegen dein Benutzer-Konto jetzt inaktiv ist. Du wurdest per Mail darüber informiert, wie du dein Benutzer-Konto reaktivieren kannst. Falls eine Aktivierung durch den Administrator erforderlich ist, warte bitte, bis die Reaktivierung stattgefunden hat.';

$lang['Password_mismatch'] = 'Du musst zweimal das gleiche Passwort eingeben.';
$lang['Current_password_mismatch'] = 'Das aktuelle Passwort stimmt nicht mit dem in der Datenbank überein.';
$lang['Password_long'] = 'Dein Passwort kann nicht länger als 32 Zeichen sein.';
$lang['Too_many_registers'] = 'Du hast zu oft versucht, dich zu registrieren. Bitte versuche es später erneut.';
$lang['Username_taken'] = 'Der gewünschte Benutzername ist leider bereits belegt.';
$lang['Username_invalid'] = 'Der gewünschte Benutzername enthält ein ungültiges Sonderzeichen (z.B. \').';
$lang['Username_disallowed'] = 'Der gewünschte Benutzername wurde vom Administrator gesperrt.';
$lang['Email_taken'] = 'Die angegebene E-Mail-Adresse wird bereits von einem anderen Benutzer verwendet.';
$lang['Email_banned'] = 'Die angegebene E-Mail-Adresse wurde vom Administrator gesperrt.';
$lang['Email_invalid'] = 'Die angegebene E-Mail-Adresse ist ungültig.';
$lang['Signature_too_long'] = 'Deine Signatur ist zu lang.';
$lang['Fields_empty'] = 'Du musst alle benötigten Felder ausfüllen.';
$lang['Avatar_filetype'] = 'Der Avatar muss im GIF-, JPG- oder PNG-Format sein.';
$lang['Avatar_filesize'] = 'Die Dateigröße muss kleiner als %d kB sein.'; // followed by xx kB, xx being the size
$lang['Avatar_imagesize'] = 'Der Avatar muss weniger als %d Pixel breit und %d Pixel hoch sein.';

$lang['Welcome_subject'] = 'Willkommen bei %s';
$lang['New_account_subject'] = 'Neues Benutzer-Konto';
$lang['Account_activated_subject'] = 'Benutzer-Konto aktiviert';

$lang['Account_added'] = 'Danke für die Registrierung, dein Benutzer-Konto wurde erstellt. Du kannst dich jetzt mit deinem Benutzernamen und deinem Passwort einloggen.';
$lang['Account_inactive'] = 'Dein Benutzer-Konto wurde erstellt. Dieses Forum benötigt aber eine Aktivierung, daher wurde ein Aktivierungsschlüssel an deine E-Mail-Adresse gesendet. Bitte überprüfe in ein paar Minuten deine Mailbox für weitere Informationen.';
$lang['Account_inactive_admin'] = 'Dein Benutzer-Konto wurde erstellt. Dieser muss noch durch den Administrator freigeschalten werden. Du wirst benachrichtigt, wenn dies geschehen ist.';
$lang['Account_active'] = 'Dein Benutzer-Konto wurde aktiviert. Danke für die Registrierung.<br />Du kannst dich jetzt mit deinem Benutzernamen und deinem Passwort einloggen.';
$lang['Account_active_admin'] = 'Dein Benutzer-Konto wurde jetzt aktiviert.';
$lang['Reactivate'] = 'Benutzer-Konto wieder aktivieren!';
$lang['Already_activated'] = 'Dein Benutzer-Konto ist bereits aktiv.';
$lang['COPPA'] = 'Dein Benutzer-Konto wurde erstellt, muss aber zuerst überprüft werden. Mehr Details dazu wurden dir per E-Mail gesendet.';

$lang['Registration'] = 'Einverständniserklärung';
$lang['Reg_agreement'] = 'Die Administratoren und Moderatoren dieses Forums bemühen sich, Beiträge mit fragwürdigem Inhalt so schnell wie möglich zu bearbeiten oder ganz zu löschen, aber es ist nicht möglich, jede einzelne Nachricht zu überprüfen. Du bestätigst mit Absenden dieser Einverständniserklärung, dass du akzeptierst, dass jeder Beitrag in diesem Forum die Meinung des Urhebers wiedergibt und dass die Administratoren, Moderatoren und Betreiber dieses Forums nur für ihre eigenen Beiträge verantwortlich sind.<br /><br />Du verpflichtest dich, keine beleidigenden, obszönen, vulgären, verleumdenden, gewaltverherrlichenden oder aus anderen Gründen strafbaren Inhalte in diesem Forum zu veröffentlichen. Verstöße gegen diese Regel führen zu sofortiger und permanenter Sperrung, wir behalten uns vor, Verbindungsdaten u. ä. an die strafverfolgenden Behörden weiterzugeben. Du räumst den Betreibern, Administratoren und Moderatoren dieses Forums das Recht ein, Beiträge nach eigenem Ermessen zu entfernen, zu bearbeiten, zu verschieben oder zu sperren. Du stimmst zu, dass die im Rahmen der Registrierung erhobenen Daten in einer Datenbank gespeichert werden.<br /><br />Dieses System verwendet Cookies, um Informationen auf deinem Computer zu speichern. Diese Cookies enthalten keine der oben angegebenen Informationen, sondern dienen ausschließlich deinem Bedienungskomfort dieser Seite. Deine E-Mail-Adresse wird nur zur Bestätigung der Registrierung und ggf. zum Versand eines neuen Passwortes verwendet.<br /><br />Durch das Abschließen der Registrierung stimmst du diesen Nutzungsbedingungen zu.';

$lang['Agreement'] = 'Einverständniserklärung';
$lang['Agree_under_13'] = 'Ich bin mit den Bedingungen dieses Forums einverstanden und <b>unter</b> 12 Jahre alt.';
$lang['Agree_over_13'] = 'Ich bin mit den Bedingungen dieses Forums einverstanden.';
$lang['Agree_not'] = 'Ich bin mit den Bedingungen nicht einverstanden.';
$lang['Agree_checkbox'] = 'Ich stimme diesen Bedingungen ausdrücklich zu.';
$lang['Agree_checkbox_Error'] = 'Um dich registrieren zu können mußt du die Checkbox (unten auf dieser Seite) aktivieren!';

$lang['Wrong_activation'] = 'Der Aktivierungsschlüssel aus dem Link stimmt nicht mit dem in der Datenbank überein. Bitte überprüfe die URL, und versuche es erneut.';
$lang['Send_password'] = 'Schickt mir ein neues Passwort.';
$lang['Password_updated'] = 'Ein neues Passwort wurde erstellt, es wurde eine E-Mail mit weiteren Anweisungen verschickt.';
$lang['No_email_match'] = 'Die angegebene E-Mail-Adresse stimmt nicht mit dem Benutzernamen überein.';
$lang['New_password_activation'] = 'Aktivierung des neuen Passwortes';
$lang['Password_activated'] = 'Dein Benutzer-Konto wurde wieder aktiviert. Um dich einzuloggen, benutze das Passwort, welches du per E-Mail erhalten hast.';

$lang['Send_email_msg'] = 'E-Mail senden';
$lang['No_user_specified'] = 'Es wurde kein Benutzer ausgewählt';
$lang['User_prevent_email'] = 'Dieser Benutzer hat den E-Mail-Empfang deaktiviert. Bitte versuche es mit einer privaten Nachricht.';
$lang['User_not_exist'] = 'Dieser Benutzer existiert nicht.';
$lang['CC_email'] = 'Eine Kopie dieser E-Mail an dich senden';
$lang['Email_message_desc'] = 'Diese Nachricht wird als Text versendet, verwende bitte deshalb kein HTML oder BBCode. Als Antwort-Adresse der E-Mail wird deine Adresse angegeben.';
$lang['Flood_email_limit'] = 'Im Moment kannst du keine weiteren E-Mails versenden. Versuch es später noch einmal.';
$lang['Recipient'] = 'Empfänger';
$lang['Email_sent'] = 'E-Mail wurde gesendet';
$lang['Send_email'] = 'E-Mail senden';
$lang['Empty_sender_email'] = 'Du musst eine E-Mail Absender Adresse angeben.';
$lang['Empty_subject_email'] = 'Du musst einen Titel für diese E-Mail angeben.';
$lang['Empty_message_email'] = 'Du musst einen Text zur E-Mail angeben.';


// Visual confirmation system strings
$lang['Confirm_code_wrong'] = 'Der eingegebene Bestätigungs-Code war nicht richtig';
//$lang['Too_many_registers'] = 'Du hast die zulässige Zahl von Registrierungs-Versuchen für diese Sitzung überschritten. Bitte versuche es später erneut.';
$lang['Confirm_code_impaired'] = 'Wenn du optisch beeinträchtigt bist oder aus einem anderen Grund den Code nicht lesen kannst, kontaktiere bitte den %sAdministrator%s für Hilfe.';
$lang['Confirm_code'] = 'Bestätigungs-Code';
$lang['Confirm_code_explain'] = 'Gebe den Code exakt so ein, wie du ihn siehst. Der Code unterscheidet zwischen Groß- und Kleinschreibung, die Null hat im Inneren einen schrägen Strich.';



// Memberslist
$lang['Select_sort_method'] = 'Sortierungs-Methode auswählen';
$lang['Sort'] = 'Sortieren';
$lang['Sort_Top_Ten'] = 'Top-Ten-Autoren';
$lang['Sort_Joined'] = 'Anmeldungsdatum';
$lang['Sort_Username'] = 'Benutzername';
$lang['Sort_Location'] = 'Ort';
$lang['Sort_Posts'] = 'Beiträge insgesamt';
$lang['Sort_Email'] = 'E-Mail';
$lang['Sort_Website'] = 'Webseite';
$lang['Sort_Ascending'] = 'Aufsteigend';
$lang['Sort_Descending'] = 'Absteigend';
$lang['Order'] = 'Ordnung';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Gruppen-Kontrolle';
$lang['Group_member_details'] = 'Details zur Gruppen-Mitgliedschaft';
$lang['Group_member_join'] = 'Gruppe beitreten';

$lang['Group_Information'] = 'Information';
$lang['Group_name'] = 'Name';
$lang['Group_description'] = 'Beschreibung';
$lang['Group_membership'] = 'Gruppen-Mitgliedschaft';
$lang['Group_Members'] = 'Gruppen-Mitglieder';
$lang['Group_Moderator'] = 'Gruppen-Moderatoren';
$lang['Pending_members'] = 'Wartende Mitglieder';

$lang['Group_type'] = 'Gruppentyp';
$lang['Group_open'] = 'Offene Gruppe';
$lang['Group_closed'] = 'Geschlossene Gruppe';
$lang['Group_hidden'] = 'Versteckte Gruppe';

$lang['Current_memberships'] = 'Aktuelle Mitgliedschaften';
$lang['Non_member_groups'] = 'Gruppen ohne deine Mitgliedschaft';
$lang['Memberships_pending'] = 'Warten auf Mitgliedschaft';

$lang['No_groups_exist'] = 'Es existieren keine Gruppen';
$lang['Group_not_exist'] = 'Diese Gruppe existiert nicht';

$lang['Join_group'] = 'Gruppe beitreten';
$lang['No_group_members'] = 'Diese Gruppe hat keine Mitglieder.';
$lang['Group_hidden_members'] = 'Diese Gruppe ist versteckt, du kannst keine Mitgliedschaften anzeigen.';
$lang['No_pending_group_members'] = 'Diese Gruppe hat keine wartenden Mitglieder.';
$lang['Group_joined'] = 'Du wurdest erfolgreich bei dieser Gruppe angemeldet.<br />Du wirst benachrichtigt, wenn der Gruppenmoderator deine Mitgliedschaft akzeptiert hat.';
$lang['Group_request'] = 'Eine Anfrage zum Beitritt in diese Gruppe wurde erstellt.';
$lang['Group_approved'] = 'Deine Anfrage wurde akzeptiert.';
$lang['Group_added'] = 'Du bist dieser Gruppe beigetreten.';
$lang['Already_member_group'] = 'Du bist bereits Mitglied dieser Gruppe.';
$lang['User_is_member_group'] = 'Dieser Benutzer ist bereits ein Mitglied dieser Gruppe.';
$lang['Group_type_updated'] = 'Gruppentyp wurde erfolgreich aktualisiert.';

$lang['Could_not_add_user'] = 'Die gewählte Gruppe existiert nicht.';
$lang['Could_not_anon_user'] = 'Ein anonymer Benutzer kann kein Gruppenmitglied werden.';

$lang['Confirm_unsub'] = 'Bist du sicher, dass du die Mitgliedschaft in dieser Gruppe beenden möchtest?';
$lang['Confirm_unsub_pending'] = 'Deine Anmeldung bei der Gruppe wurde noch nicht bestätigt, möchtest du wirklich austreten?';

$lang['Unsub_success'] = 'Du wurdest aus dieser Gruppe abgemeldet.';

$lang['Approve_selected'] = 'Akzeptierte ausgewählt';
$lang['Deny_selected'] = 'Gewählte löschen';
$lang['Not_logged_in'] = 'Du musst eingeloggt sein, um einer Gruppe beizutreten.';
$lang['Remove_selected'] = 'Ausgewählte entfernen';
$lang['Add_member'] = 'Mitglied hinzufügen';
$lang['Not_group_moderator'] = 'Du bist nicht der Gruppenmoderator, daher kannst du diese Aktion nicht durchführen.';

$lang['Login_to_join'] = 'Einloggen, um Gruppe zu managen';
$lang['This_open_group'] = 'Dies ist eine offene Gruppe. Klicke, um eine Mitgliedschaft zu beantragen.';
$lang['This_closed_group'] = 'Dies ist eine geschlossene Gruppe, keine weiteren Mitglieder werden akzeptiert.';
$lang['This_hidden_group'] = 'Dies ist eine versteckte Gruppe, automatische Anmeldungen werden nicht akzeptiert.';
$lang['Member_this_group'] = 'Du bist ein Mitglied dieser Gruppe.';
$lang['Pending_this_group'] = 'Du wartest auf eine Mitgliedschaft in dieser Gruppe.';
$lang['Are_group_moderator'] = 'Du bist der Moderator dieser Gruppe.';
$lang['None'] = 'Keine';

$lang['Subscribe'] = 'Anmelden';
$lang['Unsubscribe'] = 'Abmelden';
$lang['View_Information'] = 'Information anzeigen';


// Search
$lang['Search_query'] = 'Suchabfrage';
$lang['Search_options'] = 'Suchoptionen';

$lang['Search_keywords'] = 'Nach Begriffen suchen';
$lang['Search_keywords_explain'] = 'Du kannst <u>AND</u> benutzen, um Wörter zu definieren, die vorkommen müssen, <u>OR</u> kannst du benutzen für Wörter, die im Resultat sein können und <u>NOT</u> für Wörter, die im Ergebnis nicht vorkommen sollen. Das *-Zeichen kannst du als Platzhalter benutzen.';
$lang['Search_author'] = 'Nach Autor suchen';
$lang['Search_author_explain'] = 'Benutze das *-Zeichen als Platzhalter';
$lang['Search_author_topic_starter'] = 'Search only topics started by this author';

$lang['Search_for_any'] = 'Nach irgendeinem Wort suchen';
$lang['Search_for_all'] = 'Nach allen Wörtern suchen';
$lang['Search_title_msg'] = 'Titel und Text durchsuchen';
$lang['Search_title_only'] = 'Nur Themen-Titel durchsuchen';
$lang['Search_msg_only'] = 'Nur Nachrichtentext durchsuchen';

$lang['Return_first'] = 'Die ersten'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'Zeichen des Beitrags anzeigen';

$lang['Search_previous'] = 'Durchsuchen'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sortieren nach';
$lang['Sort_Time'] = 'Zeit';
$lang['Sort_Post_Subject'] = 'Titel des Beitrags';
$lang['Sort_Topic_Title'] = 'Titel des Themas';
$lang['Sort_Author'] = 'Autor';
$lang['Sort_Forum'] = 'Forum';

$lang['Display_results'] = 'Ergebnis anzeigen als';
$lang['All_available'] = 'Alle';
$lang['No_searchable_forums'] = 'Du hast nicht die Berechtigung, dieses Forum zu durchsuchen.';

$lang['No_search_match'] = 'Keine Beiträge entsprechen deinen Kriterien.';
$lang['Found_search_match'] = 'Die Suche hat %d Beitrag gefunden.'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Die Suche hat %d Beiträge gefunden.'; // eg. Search found 24 matches

$lang['Close_window'] = 'Fenster schließen';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Ankündigungen können in diesem Forum nur von %s erstellt werden.';
$lang['Sorry_auth_sticky'] = 'Wichtige Nachrichten können in diesem Forum nur von %s erstellt werden.';
$lang['Sorry_auth_read'] = 'Nur %s haben die Berechtigung, in diesem Forum Beiträge zu lesen.';
$lang['Sorry_auth_post'] = 'Nur %s haben die Berechtigung, in diesem Forum Beiträge zu erstellen.';
$lang['Sorry_auth_reply'] = 'Nur %s haben die Berechtigung, in diesem Forum auf Beiträge zu antworten.';
$lang['Sorry_auth_edit'] = 'Nur %s haben die Berechtigung, in diesem Forum Beiträge zu bearbeiten.';
$lang['Sorry_auth_delete'] = 'nur %s haben die Berechtigung, in diesem Forum Beiträge zu löschen.';
$lang['Sorry_auth_vote'] = 'In diesem Forum können sich nur %s an Abstimmungen beteiligen.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>anonyme Benutzer</b>';
$lang['Auth_Registered_Users'] = '<b>registrierte Benutzer</b>';
$lang['Auth_Self_Users'] = '<b>bestimmte Benutzer</b>';
$lang['Auth_Users_granted_access'] = '<b>Benutzer mit speziellen Rechten</b>';
$lang['Auth_Moderators'] = '<b>Moderatoren</b>';
$lang['Auth_Administrators'] = '<b>Administratoren</b>';

$lang['Not_Moderator'] = 'Du bist nicht Moderator dieses Forums.';
$lang['Not_Authorised'] = 'Nicht berechtigt';

$lang['You_been_banned'] = 'Du wurdest von diesem Forum verbannt.<br />Kontaktiere den Administrator, um mehr Informationen zu erhalten.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Es sind kein registrierter und '; // There are 5 Registered and
$lang['Reg_users_online'] = 'Es sind %d registrierte und ';
$lang['Reg_user_online'] = 'Es ist ein registrierter und '; // There are 5 Registered and
$lang['Hidden_users_zero_online'] = 'kein versteckter Benutzer online.'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d versteckte Benutzer online.'; // 6 Hidden users online
$lang['Hidden_user_online'] = 'ein versteckter Benutzer online.'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Es sind %d Gäste online.';
$lang['Guest_users_zero_online'] = 'Es sind keine Gäste online.'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Es ist ein Gast online.';
$lang['No_users_browsing'] = 'Im Moment sind keine Benutzer im Forum.';

$lang['Online_explain'] = 'Diese Daten zeigen an, wer in den letzten 5 Minuten online war.';
$lang['Online_today'] = 'Diese Daten zeigen an, wer in den letzten 24 Stunden online war.';

$lang['Forum_Location'] = 'Welche Seite';
$lang['Last_updated'] = 'Zuletzt aktualisiert';

$lang['Forum_index'] = 'Forum-Index';
$lang['Portal'] = 'Startseite';
$lang['Logging_on'] = 'Einloggen';
$lang['Posting_message'] = 'Nachricht schreiben';
$lang['Searching_forums'] = 'Foren durchsuchen';
$lang['Viewing_profile'] = 'Profil anzeigen';
$lang['Viewing_HACKSLIST'] = 'Anzeigen der Credits Liste';
$lang['Viewing_online'] = 'Anzeigen, wer online ist';
$lang['Viewing_member_list'] = 'Mitgliederliste anzeigen';
$lang['Viewing_priv_msgs'] = 'Private Nachrichten anzeigen';
$lang['Viewing_FAQ'] = 'FAQ anzeigen';
$lang['Viewing_KB'] = 'KB anzeigen';
$lang['Viewing_RSS'] = 'RSS feed';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderator-Kontrollbereich';
$lang['Mod_CP_explain'] = 'Mit dem unteren Menü kannst du mehrere Moderatoren-Operationen gleichzeitig ausführen. Du kannst Beiträge öffnen, schließen, löschen oder verschieben.';

$lang['Select'] = 'Auswählen';
$lang['Delete'] = 'Löschen';
$lang['Move'] = 'Verschieben';
$lang['Copy'] = 'Kopieren';
$lang['Lock'] = 'Sperren';
$lang['Unlock'] = 'Entsperren';

$lang['Topics_Removed'] = 'Die gewählten Themen wurden erfolgreich gelöscht.';
$lang['Topics_Locked'] = 'Die gewählten Themen wurden erfolgreich gesperrt.';
$lang['Topics_Moved'] = 'Die gewählten Themen wurden verschoben.';
$lang['Topics_Unlocked'] = 'Die gewählten Themen wurden entsperrt.';
$lang['No_Topics_Moved'] = 'Es wurden keine Themen verschoben.';

$lang['Confirm_delete_topic'] = 'Bist du sicher, dass die gewählten Themen entfernt werden sollen?';
$lang['Confirm_lock_topic'] = 'Bist du sicher, dass die gewählten Themen gesperrt werden sollen?';
$lang['Confirm_unlock_topic'] = 'Bist du sicher, dass die gewählten Themen entsperrt werden sollen?';
$lang['Confirm_move_topic'] = 'Bist du sicher, dass die gewählten Themen verschoben werden sollen?';

$lang['Move_to_forum'] = 'Verschieben nach';
$lang['Leave_shadow_topic'] = 'Shadow Topic im alten Forum lassen';

$lang['Split_Topic'] = 'Thema teilen Kontrollbereich';
$lang['Split_Topic_explain'] = 'Mit den Eingabefeldern unten kannst du ein Thema in zwei teilen, in dem du entweder die Beiträge manuell auswählst oder ab einem gewählten Beitrag teilst';
$lang['Split_title'] = 'Titel des neuen Themas';
$lang['Split_forum'] = 'Forum des neuen Themas';
$lang['Split_posts'] = 'Gewählte Beiträge teilen';
$lang['Split_after'] = 'Von gewähltem Beitrag teilen';
$lang['Topic_split'] = 'Das gewählte Thema wurde erfolgreich geteilt';

$lang['Too_many_error'] = 'Du hast zu viele Beiträge gewählt. Du kannst nur einen Beitrag auswählen, nach dem geteilt werden soll!';

$lang['None_selected'] = 'Du hast keine Themen ausgewählt, auf die diese Aktion ausgeführt werden soll. Bitte wähle mindestens eins aus.';
$lang['New_forum'] = 'Neues Forum';

$lang['This_posts_IP'] = 'IP-Adresse für diesen Beitrag';
$lang['Other_IP_this_user'] = 'Andere IP-Adressen, von denen dieser Benutzer geschrieben hat';
$lang['Users_this_IP'] = 'Beiträge von dieser IP-Adresse';
$lang['IP_info'] = 'IP-Information';
$lang['Lookup_IP'] = 'IP nachschlagen';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Alle Zeiten sind %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Stunden';
$lang['-11'] = 'GMT - 11 Stunden';
$lang['-10'] = 'GMT - 10 Stunden';
$lang['-9'] = 'GMT - 9 Stunden';
$lang['-8'] = 'GMT - 8 Stunden';
$lang['-7'] = 'GMT - 7 Stunden';
$lang['-6'] = 'GMT - 6 Stunden';
$lang['-5'] = 'GMT - 5 Stunden';
$lang['-4'] = 'GMT - 4 Stunden';
$lang['-3.5'] = 'GMT - 3.5 Stunden';
$lang['-3'] = 'GMT - 3 Stunden';
$lang['-2'] = 'GMT - 2 Stunden';
$lang['-1'] = 'GMT - 1 Stunde';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 Stunde';
$lang['2'] = 'GMT + 2 Stunden';
$lang['3'] = 'GMT + 3 Stunden';
$lang['3.5'] = 'GMT + 3.5 Stunden';
$lang['4'] = 'GMT + 4 Stunden';
$lang['4.5'] = 'GMT + 4.5 Stunden';
$lang['5'] = 'GMT + 5 Stunden';
$lang['5.5'] = 'GMT + 5.5 Stunden';
$lang['6'] = 'GMT + 6 Stunden';
$lang['6.5'] = 'GMT + 6.5 Stunden';
$lang['7'] = 'GMT + 7 Stunden';
$lang['8'] = 'GMT + 8 Stunden';
$lang['9'] = 'GMT + 9 Stunden';
$lang['9.5'] = 'GMT + 9.5 Stunden';
$lang['10'] = 'GMT + 10 Stunden';
$lang['11'] = 'GMT + 11 Stunden';
$lang['12'] = 'GMT + 12 Stunden';
$lang['13'] = 'GMT + 13 Stunden';

//
// Time Zone Mod
// These are displayed in the timezone select box

$lang['tz']['-12'] = '(GMT -12 Stunden) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11 Stunden) Midway Island, Samoa';
$lang['tz']['-10'] = '(GMT -10 Stunden) Hawaii';
$lang['tz']['-9'] = '(GMT -9 Stunden) Alaska';
$lang['tz']['-8'] = '(GMT -8 Stunden) Pacific Time (US & Canada)';
$lang['tz']['-7'] = '(GMT -7 Stunden) Mountain Time (US & Canada)';
$lang['tz']['-6'] = '(GMT -6 Stunden) Central Time (US & Canada), Mexico City';
$lang['tz']['-5'] = '(GMT -5 Stunden) Eastern Time (US & Canada), Bogota, Lima, Quito';
$lang['tz']['-4'] = '(GMT -4 Stunden) Atlantic Time (Canada), Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3.5 Stunden) Neufundland';
$lang['tz']['-3'] = '(GMT -3 Stunden) Brazilien, Buenos Aires, Georgetown';
$lang['tz']['-2'] = '(GMT -2 Stunden) Mitt-Atlantik';
$lang['tz']['-1'] = '(GMT -1 Stunde) Azoren, Cape Verde Inseln';
$lang['tz']['0'] = '(GMT) Westeuropäische Zeit, London, Lisabon, Casablanca, Monrovia';
$lang['tz']['1'] = '(GMT +1 Stunde) Mitteleuropäische Zeit, Brüssel, Berlin, Madrid, Paris';
$lang['tz']['2'] = '(GMT +2 Stunden) Osteuropäische Zeit, Kaliningrad, Süd Afrika';
$lang['tz']['3'] = '(GMT +3 Stunden) Baghdad, Kuwait, Riyadh, Moskau, St. Petersburg';
$lang['tz']['3.5'] = '(GMT +3.5 Stunden) Tehran';
$lang['tz']['4'] = '(GMT +4 Stunden) Abu Dhabi, Muscat, Baku, Tbilisi';
$lang['tz']['4.5'] = '(GMT +4.5 Stunden) Kabul';
$lang['tz']['5'] = '(GMT +5 Stunden) Ekaterinburg, Islamabad, Karachi, Tashkent';
$lang['tz']['5.5'] = '(GMT +5.5 Stunden) Bombay, Kalkutta, Madras, Neu Delhi';
$lang['tz']['5.75'] = '(GMT +5.75 Stunden) Kathmandu';
$lang['tz']['6'] = '(GMT +6 Stunden) Almaty, Dhaka, Colombo';
$lang['tz']['6.5'] = '(GMT +6.5 Stunden)';
$lang['tz']['7'] = '(GMT +7 Stunden) Bangkok, Hanoi, Jakarta';
$lang['tz']['8'] = '(GMT +8 Stunden) Beijing, Perth, Singapur, Hong Kong, Urumqi';
$lang['tz']['9'] = '(GMT +9 Stunden) Tokyo, Seoul, Osaka, Sapporo, Yakutsk';
$lang['tz']['9.5'] = '(GMT +9.5 Stunden) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10 Stunden) EAST (East Australian Standard), Guam';
$lang['tz']['11'] = '(GMT +11 Stunden) Magadan, Solomon Islands, Neu Caledonia';
$lang['tz']['12'] = '(GMT +12 Stunden) Auckland, Fiji, Kamchatka, Marshall Inseln';
$lang['tz']['13'] = '(GMT +13 Stunden) Nuku\'alofa';

//
// End Time Zone Mod
//

$lang['datetime']['Sunday'] = 'Sonntag';
$lang['datetime']['Monday'] = 'Montag';
$lang['datetime']['Tuesday'] = 'Dienstag';
$lang['datetime']['Wednesday'] = 'Mittwoch';
$lang['datetime']['Thursday'] = 'Donnerstag';
$lang['datetime']['Friday'] = 'Freitag';
$lang['datetime']['Saturday'] = 'Samstag';
$lang['datetime']['Sun'] = 'So';
$lang['datetime']['Mon'] = 'Mo';
$lang['datetime']['Tue'] = 'Di';
$lang['datetime']['Wed'] = 'Mi';
$lang['datetime']['Thu'] = 'Do';
$lang['datetime']['Fri'] = 'Fr';
$lang['datetime']['Sat'] = 'Sa';
$lang['datetime']['January'] = 'Januar';
$lang['datetime']['February'] = 'Februar';
$lang['datetime']['March'] = 'März';
$lang['datetime']['April'] = 'April';
$lang['datetime']['May'] = 'Mai';
$lang['datetime']['June'] = 'Juni';
$lang['datetime']['July'] = 'Juli';
$lang['datetime']['August'] = 'August';
$lang['datetime']['September'] = 'September';
$lang['datetime']['October'] = 'Oktober';
$lang['datetime']['November'] = 'November';
$lang['datetime']['December'] = 'Dezember';
$lang['datetime']['JAN'] = 'Jan';
$lang['datetime']['FEB'] = 'Feb';
$lang['datetime']['MAR'] = 'März';
$lang['datetime']['APR'] = 'Apr';
$lang['datetime']['MAY'] = 'Mai';
$lang['datetime']['JUN'] = 'Jun';
$lang['datetime']['JUL'] = 'Jul';
$lang['datetime']['AUG'] = 'Aug';
$lang['datetime']['SEP'] = 'Sep';
$lang['datetime']['OCT'] = 'Okt';
$lang['datetime']['NOV'] = 'Nov';
$lang['datetime']['DEC'] = 'Dez';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Information';
$lang['Critical_Information'] = 'Kritische Information';

$lang['General_Error'] = 'Allgemeiner Fehler';
$lang['Critical_Error'] = 'Kritischer Fehler';
$lang['An_error_occured'] = 'Ein Fehler ist aufgetreten.';
$lang['A_critical_error'] = 'Ein kritischer Fehler ist aufgetreten.';
$lang['Admin_reauthenticate'] = 'Um das Forum zu administrieren, musst du dich erneut authentifizieren.';

$lang['Topic_description'] = 'Beschreibung des Themas';
//$lang['Description'] = 'Themenbeschreibung';

$lang['Guestbook'] = 'Gästebuch';
$lang['Viewing_guestbook'] = 'Das Gästebuch lesen';

$lang['Click_return_preferences'] = '%sKlicke hier%s, um zu den Einstellungen zurückzukehren';

$lang['Warn_new_post'] = 'Es gibt mindestens eine neue Antwort in diesem Thema. Bitte schau dir die neuen Antworten in der Thema Übersicht an und sende deinen Beitrag erneut ab.';

$lang['Today_at'] = '<b class="date-today">Heute</b> um ';
$lang['Yesterday_at'] = '<b class="date-yesterday">Gestern</b> um ';
$lang['TODAY'] = '<b class="date-today">Today</b>';
$lang['YESTERDAY'] = '<b class="date-yesterday">Yesterday</b>';

// Start add - Birthday MOD
$lang['Birthday'] = 'Geburtstag';
$lang['No_birthday_specify'] = 'Keine Angabe';
$lang['Age'] = 'Alter';
$lang['Wrong_birthday_format'] = 'Der Geburtstag wurde nicht korrekt eingegeben.';
$lang['Birthday_to_high'] = 'Das Alter muss unter %d Jahren liegen';
$lang['Birthday_require'] = 'Die Eingabe des Geburtstags ist erforderlich';
$lang['Birthday_to_low'] = 'Das Alter muss über %d Jahren liegen';
$lang['Submit_date_format'] = 'd.m.Y'; //php date() format - note: ONLY d , m and Y may be used and SHALL ALL be used (different sepperators are accepted)
$lang['Birthday_greeting_today'] ='Herzlichen Glückwünsch zum Geburstag! Mit deinen %s Jahren siehst du immer noch so aus wie eh und je: einfach <b>blendend</b>.<br /> Also lass dich heute reich beschenken und feiern und lass dich nicht ärgern.';//%s is substituted with the users age
$lang['Birthday_greeting_prev'] ='Hui! Wir kommen zu spät zu deinem %s. Geburtstag, der am %s war, stimmt\'s? Wir wünschen dir auch nachträglich noch alles Gute und hoffen, dass du einen schönen Geburtstag hattest.';//%s is substituted with the users age, and birthday
$lang['Greeting_Messaging'] ='Herzlichen Glückwunsch!';
$lang['Birthday_today'] = 'Geburtstage heute: ';
$lang['Birthday_week'] = 'Geburtstage in den nächsten %d Tagen: '; // %d is substitude with the number of days
$lang['Nobirthday_week'] = 'In den nächsten %d Tagen hat niemand Geburtstag.'; // %d is substitude with the number of days
$lang['Nobirthday_today'] = 'Heute hat niemand Geburtstag.';
$lang['Year'] = 'Jahr';
$lang['Month'] = 'Monat';
$lang['Day'] = 'Tag';

// NOTE: Please do not translate the folowing 4 lines!
// They are automatically translated into your language
$lang['day_short'] = array ($lang['datetime']['Sun'],$lang['datetime']['Mon'],$lang['datetime']['Tue'],$lang['datetime']['Wed'],$lang['datetime']['Thu'],$lang['datetime']['Fri'],$lang['datetime']['Sat']);
$lang['day_long'] = array ($lang['datetime']['Sunday'],$lang['datetime']['Monday'],$lang['datetime']['Tuesday'],$lang['datetime']['Wednesday'],$lang['datetime']['Thursday'],$lang['datetime']['Friday'],$lang['datetime']['Saturday']);
$lang['month_short'] = array ($lang['datetime']['JAN'],$lang['datetime']['FEB'],$lang['datetime']['MAR'],$lang['datetime']['APR'],$lang['datetime']['MAY'],$lang['datetime']['JUN'],$lang['datetime']['JUL'],$lang['datetime']['AUG'],$lang['datetime']['SEP'],$lang['datetime']['OCT'],$lang['datetime']['NOV'],$lang['datetime']['DEC']);
$lang['month_long'] = array ($lang['datetime']['January'],$lang['datetime']['February'],$lang['datetime']['March'],$lang['datetime']['April'],$lang['datetime']['May'],$lang['datetime']['June'],$lang['datetime']['July'],$lang['datetime']['August'],$lang['datetime']['September'],$lang['datetime']['October'],$lang['datetime']['November'],$lang['datetime']['December']);
// End add - Birthday MOD


// Start add - Gender MOD
$lang['Gender'] = 'Geschlecht'; //used in users profile to display witch gender he/she is
$lang['Male'] = 'männlich';
$lang['Female'] = 'weiblich';
$lang['No_gender_specify'] = 'keine Angabe';
$lang['Gender_require'] = 'Die Angabe des Geschlechts ist erforderlich.';
// End add - Gender MOD


// Start add - Who viewed a topic MOD
$lang['Topic_view_users'] = 'Liste der Benutzer, die sich dieses Thema angesehen haben';
$lang['Topic_time'] = 'Zuletzt angesehen';
$lang['Topic_count'] = 'Ansichten';
$lang['Topic_view_count'] = 'Themen Ansichten';
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
$lang['Give_G_card'] = 'Benutzer reaktivieren';
$lang['Give_Y_card'] = 'Dem Benutzer die %d. Verwarnung erteilen.';
$lang['Give_R_card'] = 'Diesen Benutzer JETZT sperren.';
$lang['Ban_update_sucessful'] = 'Die Sperrliste wurde erfolgreich aktualisiert.';
$lang['Ban_update_green'] = 'Der Benutzer ist nun reaktiviert.';
$lang['Ban_update_yellow'] = 'Der Benutzer hat eine Verwarnung erhalten, und hat nun %d von maximal %d Verwarnungen.';
$lang['Ban_update_red'] = 'Der Benutzer ist nun gesperrt.';
$lang['Ban_reactivate'] = 'Dein Benutzer-Konto wurde reaktiviert.';
$lang['Ban_warning'] = 'Du wurdest verwarnt!';
$lang['Ban_blocked'] = 'Dein Benutzer-Konto ist nun gesperrt.';
$lang['Click_return_viewtopic'] = '%sKlicke hier%s, um zum Thema zurückzukehren.';





$lang['Rules_ban_can'] = 'Du <b>kannst</b> andere Benutzer in diesem Forum bannen!';
$lang['Rules_greencard_can'] = 'Du <b>kannst</b> Benutzer in diesem Forum entsperren.';
$lang['Rules_bluecard_can'] = 'Du <b>kannst</b> Beiträge in diesem Forum beanstanden.';
$lang['user_no_email'] = 'Der Benutzer hat keine E-Mail-Adresse angegeben, deshalb kann er nicht automatisch benachrichtigt werden. Du solltest ihm eine PM zukommen lassen.';
$lang['user_already_banned'] = 'Der gewählte Benutzer ist bereits gesperrt.';
$lang['Ban_no_admin'] = 'Dieser Benutzer ist ein Administrator und kann weder verwarnt noch gesperrt werden.';
$lang['Give_b_card'] = 'Diesen Beitrag einem Moderator melden.';
$lang['Clear_b_card'] = 'Dieses Posting hat bisher %d blaue Karten erhalten. Wenn du bestätigst wird der Counter zurückgesetzt.';
$lang['No_moderators'] = 'Dieses Forum hat keinen Moderator, deswegen wird kein Bericht versandt.';
$lang['Post_repported'] = '%d Moderatoren werden über die Beanstandung dieses Postings informiert.';
$lang['Post_repported_1'] = 'Der Moderator wird über die Beanstandung dieses Postings informaiert.';
$lang['Post_repport'] = 'Die Beanstandung abschicken.';
$lang['Post_reset'] = 'Die Anzahl der blauen Karten dieses Postings wurde zurückgesetzt.';
$lang['Search_only_bluecards'] = 'Alle Beiträge mit blauen Karten anzeigen.';
$lang['Send_message'] = '%sKlicke hier%s, um einen Beitrag zu beanstanden.<br/>';
$lang['Send_PM_user'] = '%sKlicke hier%s, um dem Benutzer eine PN zu schreiben.';
$lang['Link_to_post'] = '%sKlicke hier%s, um zum beanstandeten Beitrag zu gehen.
--------------------------------

';
$lang['Post_a_report'] = 'Diesen Beitrag beanstanden.';
$lang['Report_stored'] = 'Deine Beanstandung ist erfolgreich übermittelt worden.';
$lang['Send_report'] = '%sKlicke hier%s, um zurück zur ursprünglichen Anzeige zu gelangen.';
$lang['Red_card_warning'] = 'Du willst dem Benutzer %s eine rote Karte geben. Damit sperrst du ihn. Bist du sicher, dass du dieses tun willst?';
$lang['Yellow_card_warning'] = 'Du willst dem Benutzer %s eine gelbe Karte geben. Damit lässt du ihm eine Verwarnung zukommen. Bist du sicher, dass du dieses tun willst?';
$lang['Green_card_warning'] = 'Du willst dem Benutzer %s eine grüne Karte geben. Damit entsperrst du ihn wieder. Bist du sicher, dass du dieses tun willst?';
$lang['Blue_card_warning'] = 'Du willst diesen Beitrag beanstanden. Wenn du dies tust, werden die Moderatoren dieses Forums darüber informiert. Bist du sicher, dass du dieses tun willst?';
$lang['Clear_blue_card_warning'] = 'Du bist im Begriff, den Zähler für blaue Karten für diesen Beitrag zurückzustellen. Möchtest du fortfahren?';
$lang['Warnings'] = '%d Verwarnungen'; //shown beside users post, if any warnings given to the user
$lang['Banned'] = 'Benutzer gesperrt.';//shown beside users post, if user are banned

// Start add - Last visit MOD
$lang['Last_logon'] = 'Letzter Besuch';
$lang['Hidde_last_logon'] = 'Versteckt';
$lang['Never_last_logon'] = 'Nie';
$lang['Users_today_zero_total'] = 'Heute hat noch <b>niemand</b> das Forum besucht: ';
$lang['Users_today_total'] = 'Heute haben <b>%d</b> Benutzer das Forum besucht: ';
$lang['User_today_total'] = 'Heute hat <b>%d</b> Benutzer das Forum besucht: ';
$lang['Users_lasthour_explain'] = ', davon %d innerhalb der letzten Stunde.';
$lang['Users_lasthour_none_explain'] = ''; //showen of none have visited the last hour, fill if you like

$lang['Years'] = 'Jahre';
$lang['Year'] = 'Jahr';
$lang['Weeks'] = 'Wochen';
$lang['Week'] = 'Woche';
$lang['Day'] = 'Tag';
$lang['Total_online_time'] = 'Gesamte Online-Dauer';
$lang['Last_online_time'] = 'Letzte Online-Dauer';
$lang['Number_of_visit'] = 'Anzahl der Besuche';
$lang['Number_of_pages'] = 'Besuchte Seiten';
// End add - Last visit MOD

$lang['total_site_hits_key'] = '%V% Seitenansichten seit %D%.';

// Start add - BBCodes & smilies enhancement MOD
$lang['bbcode_url'] = 'URL eingeben (z.B. http://www.icyphoenix.com)';
$lang['bbcode_url_title'] = 'Titel des Links eingeben';
$lang['bbcode_url_empty'] = 'Du hast keine URL eingegeben';
$lang['bbcode_url_errors'] = 'Fehler!';
// End add - BBCodes & smilies enhancement MODz

$lang['Message_too_short'] = 'Deine Nachricht ist zu kurz';

// Start add - Online/Offline/Hidden Mod
$lang['Online'] = 'Online';
$lang['Offline'] = 'Offline';
$lang['Hidden'] = 'Versteckt';

$lang['Online_status'] = 'Status';
// End add - Online/Offline/Hidden Mod
$lang['Download'] = 'Download';

//signature editor
$lang['sig_edit_link'] = 'Signatur';
$lang['sig_description'] = 'Signatur bearbeiten (<b>inklusive Vorschau</b>)';
$lang['sig_edit'] = 'Signatur bearbeiten';
$lang['sig_current'] = 'aktuelle Signatur';
$lang['sig_none'] = 'Keine Signatur verfügbar';
$lang['sig_save'] = 'Speichern';
$lang['sig_save_message'] = 'Deine Signatur wurde erfolgreich gespeichert!';

$lang['Statistics'] = 'Statistiken';

// Start add - Global announcement MOD
$lang['Globalannounce'] = 'Global Ankündigen';
$lang['Globalannounce'] = 'Neue globale Ankündigung';
// End add - Global announcement MOD
$lang['Global_Announcements'] = 'Globale Ankündigungen';
$lang['Announcements'] = 'Ankündigungen';
$lang['Sticky_Topics'] = 'Wichtige Themen';
$lang['Announcements_and_Sticky'] = 'Ankündigungen und wichtige Themen';
//
// db_update generator
//
$lang['Db_update_generator'] = 'DB Update Generator';
$lang['Instructions'] = 'Anweisungen';
$lang['SQL_instructions'] = 'Diese Software generiert PHP Dateien, welche es dir erlauben, die Datenbank mit Hilfe deines Browsers zu aktualisieren. Es gibt ein paar Dinge, die du beachten musst, wenn du SQL Anweisungen in die Box unten eingibst.<br />Stelle zunächst einmal sicher, dass alle SQL Abfragen mit einem Semikolon (;) enden. Wenn nicht, wird die Datei fehlerhaft sein. Als nächstes solltest du sicherstellen, dass die Tabellen den "phpbb_" Präfix haben. Dieser wird automatisch mit einer Variablen ersetzt, welche es dir ermöglicht, die erstellte db_update.php Datei in jedem Forum zu nutzen, ganz gleich wie dort der verwendete Tabellen Präfix ist.';
$lang['Enter_SQL'] = 'SQL eingeben';
$lang['Enter_SQL_explain'] = 'MySQL ist die weltweit bekannteste Open Source Datenbank, geschätzt für ihre Geschwindigkeit und Zuverlässigkeit.';
$lang['Output_SQL'] = 'SQL Ausgabe';
$lang['Output_SQL_explain'] = 'Kopiere den Text aus dem Textfeld rechts und füge ihn in eine leere Datei ein. Speichere die Datei als <u>db_update.php</u> ab und lade sie auf deinen Server hoch. Starte sie einmal, indem du sie mit deinem Browser aufrufst.<br /><br />Alternativ kannst du auf den Download Button klicken und die Datei auf deinen Computer herunterladen (empfohlen).';
$lang['Download'] = 'Download';

$lang['TOP_POSTERS'] = 'Top Posters';

//
// TELL A FRIEND
$lang['Tell_Friend'] = 'E-Mail an einen Freund';
$lang['Tell_Friend_Sender_User'] = 'Dein Name:';
$lang['Tell_Friend_Sender_Email'] = 'Deine E-Mail:';
$lang['Tell_Friend_Reciever_User'] = 'Name deines Freundes:';
$lang['Tell_Friend_Reciever_Email'] = 'E-Mail deines Freundes:';
$lang['Tell_Friend_Wrong_Email'] = 'Du hast keine gültige E-Mail Adresse angegeben.';
$lang['Tell_Friend_Msg'] = 'Deine Nachricht:';
$lang['Tell_Friend_Title'] = 'Freund informieren';
$lang['Tell_Friend_Body'] = "Hallo,\nIch habe gerade das Thema &raquo;{TOPIC}&laquo; auf {SITENAME} gesehen und dachte, dass es dich vielleicht interessiert.\n Hier ist der Link: {LINK}\n\nSchau es dir mal. Wenn du darauf antworten möchtest, kannst du ein eigenes Benutzer-Konto erstellen, sofern du nicht schon eines hast.";

// Begin Thanks Mod
$lang['thankful'] = 'Dankbare Nutzer';
$lang['thanks_to'] = 'Danke für dieses hilfreiche Thema';
$lang['thanks_end'] = ':';
$lang['thanks_alt'] = 'Dankesbeitrag';
$lang['thanks_add_rate'] = 'Danke dem Autor für diesen nützlichen Beitrag';
$lang['thanked_before'] = 'Du hast dich für diesen Beitrag schon bedankt';
$lang['thanks_add'] = 'Dein Danke wurde hinzugefügt';
$lang['thanks_not_logged'] = 'Du muss dich einloggen, um dich für einen Beitrag zu bedanken.';
$lang['thanks2'] = 'Vielen Dank! <br />';
// End Thanks Mod

// Default Subject on Reply
$lang['RE'] = 'Re';

//Begin Lo-Fi Mod
$lang['Lofi'] = 'Lo-Fi Version';
//$lang['Full_Version'] = 'Volle Version';
$lang['Full_Version'] = 'Dies ist eine "Lo-Fi" Version von unserem Inhalt. Um die volle Version mit mehr Informationen, Formaten und Bildern anzuzeigen, klicke bitte hier.';
$lang['quote_lofi'] = 'Zitat';
$lang['edit_lofi'] = 'Bearbeiten';
$lang['ip_lofi'] = 'IP';
$lang['del_lofi'] = 'Löschen';
$lang['profile_lofi'] = 'Profil';
$lang['pm_lofi'] = 'PN';
$lang['email_lofi'] = 'E-Mail';
$lang['website_lofi'] = 'Webseite';
$lang['icq_lofi'] = 'ICQ';
$lang['aim_lofi'] = 'AIM';
$lang['yim_lofi'] = 'YIM';
$lang['msnm_lofi'] = 'MSN';
$lang['quick_lofi'] = 'Schnellantwort';
$lang['new_pm_lofi'] = 'Sende eine PN';
//End Lo-Fi Mod

// Retroactive Signature MOD
$lang['Retro_sig'] = 'Füge meine Signatur zu früheren Beiträgen hinzu';
$lang['Retro_sig_explain'] = 'Wenn du deine Signatur hinzufügst, übernimmt phpBB die normalerweise nur für zukünftige Beiträge.';
$lang['Retro_sig_checkbox'] = 'Setze den Haken, um die Signatur auch an frühere Beträge anzufügen.';
// End Retro Sig MOD

$lang['legend'] = 'Legende';
$lang['users'] = 'Benutzer';
//added to autogroup mod
$lang['No_more'] = 'Es werden keine weiteren Benutzer akzeptiert';
$lang['No_add_allowed'] = 'Das automatische hinzufügen von Benutzern ist nicht gestattet';
$lang['Join_auto'] = 'Du kannst dieser Gruppe beitreten, da deine Beitragsanzahl den Gruppenkriterien entspricht.';

// merge topics
$lang['Merge'] = 'Zusammenführen';
$lang['Merge_topic'] = 'Themen zusammenführen';
$lang['Topics_Merged'] = 'Die ausgewählten Themen wurden erfolgreich zusammengeführt.';
$lang['No_Topics_Merged'] = 'Es wurden keine Themen zusammengeführt.';
$lang['Confirm_merge_topic'] = 'Bist du sicher, dass die die ausgewählten Themen zusammenführen möchtest?';

$lang['Downloads'] = 'Downloads';

// Start add - Bin Mod
$lang['Move_bin'] = 'Dieses Thema in den Papierkorb verschieben';
$lang['Topics_Moved_bin'] = 'Die ausgewählten Themen wurden in den Papierkorb verschoben.';
$lang['Bin_disabled'] = 'Der Papierkorb wurde deaktiviert';
$lang['Bin_recycle'] = 'Papierkorb leeren';
// End add - Bin Mod
$lang['Recent_topics'] = 'Letzte Themen'; // Recent Topics

$lang['Topics_Title_Edited'] = 'Die Titel der ausgewählten Themen wurden bearbeitet.';
$lang['Edit_title'] = 'Titel bearbeiten';
$lang['PM'] = 'PN';

// Start Advanced IP Tools Pack MOD
$lang['Moderator_ip_information'] = 'IP-Adressinformation nur für Moderatoren';
$lang['Registered_ip_address'] = 'Registrierte IP-Adresse';
$lang['Registered_hostname'] = 'Registrierter Hostname';
$lang['Other_registered_ips'] = 'Andere Benutzer, die sich von %s registriert haben'; //%s is the IP address
$lang['Other_posted_ips'] = 'IP Adressen, von denen der Benutzer geschrieben hat';
$lang['Search_ip'] = 'Suche nach Beiträgen anhand der IP-Adresse';
$lang['Search_ip_explain'] = 'Gib eine IP-Adresse im Format <u>127.0.0.1</u> ein -- du kannst * als Platzhalter verwenden z.B. <u>127.*.*.1</u>';
$lang['IP'] = 'IP';
$lang['Whois'] = 'Whois';
$lang['Browser'] = 'Browser';
$lang['No_other_registered_ips'] = 'Keine anderen Benutzer haben sich von dieser IP-Adresse registriert.';
$lang['No_other_posted_ips'] = 'Dieser Benutzer hat noch keine Beiträge geschrieben.';
$lang['Not_recorded'] = 'Nicht registriert';
$lang['Logins'] = 'Logins';
$lang['No_logins'] = 'Von diesem Benutzer wurden keine Logins registriert.';
// End Advanced IP Tools Pack MOD

$lang['LIW_click_image'] = 'Klicke hier, um das Bild in Originalgröße anzuzeigen.';
$lang['LIW_click_image_explain'] = 'Klicke auf das Bild, um es in Originalgröße anzuzeigen';
// Mighty Gorgon - Full Album Pack - BEGIN
$lang['Album'] = 'Galerie';
$lang['Personal_Gallery'] = 'Persönliche Galerie';
$lang['Personal_Gallery_Of_User'] = 'Persönliche Galerie von %s';
$lang['Personal_Gallery_Of_User_Profile'] = 'Persönliche Galerie von %s (%d Bilder)';
$lang['Show_All_Pic_View_Mode_Profile'] = 'Zeige alle Bilder in der Persönliche Galerie von %s (ohne Unterkategorien)';
$lang['Not_allowed_to_view_album'] = 'Du bist nicht berechtigt, dir Bilder in dieser Kategorie anzusehen.';
$lang['Not_allowed_to_upload_album'] = 'Du bist nicht berechtigt, Bilder in diese Kategorie hochzuladen. Kontaktiere den Administrator für weitere Informationen.';
$lang['Album_empty'] = 'Es sind keine Bilder in dieser Kategorie<br />Klicke auf den <b>Bild hochladen</b> Link auf dieser Seite, um ein Bild hinzuzufügen.';
$lang['Album_empty2'] = 'Es sind keine Bilder in dieser Kategorie.';
$lang['Upload_New_Pic'] = 'Neues Bild hochladen';
$lang['Pic_Title'] = 'Bildtitel';
$lang['Pic_Title_Explain'] = 'Es ist wichtig, dem Bild einen guten Titel zu geben. Es kann ein Name oder ein Betreff sein, damit andere wissen, um was es sich handelt, ohne das Bild zu sehen.';
$lang['Pic_Upload'] = 'Bild hochladen';
$lang['Pic_Upload_Explain'] = 'Erlaubte Bildtypen sind JPG, GIF und PNG. Die maximale Dateigröße darf %s Bytes betragen. Die Abmessung darf %sx%s Pixel nicht überschreiten. Benutze die Hilfe deines Grafikprogramms, um mehr über Dateigrößen und Bildabmessungen zu erfahren.';
$lang['Album_full'] = 'Diese Kategorie hat die maximale Anzahl von Bildern erreicht. Kontaktiere den Administrator für weitere Informationen.';
$lang['Album_upload_successful'] = 'Dein Bild wurde erfolgreich hochgeladen.';
$lang['Click_return_album'] = '%sKlicke hier%s, um zur Kategorie zurückzukehren.';
$lang['Invalid_upload'] = 'Ungültiger Upload<br /><br />Dein Bild ist zu groß oder das Format ist nicht erlaubt.';
$lang['Image_too_big'] = 'Die Bildabmessungen (in Pixel) sind zu groß.';
$lang['Uploaded_by'] = 'Hochgeladen von';
$lang['Category_locked'] = 'Du kannst keine Bilder in diese Kategorie hochladen, da sie von einem Administrator gesperrt wurde. Kontaktiere den Administrator für weitere Informationen.';
$lang['View_Album_Index'] = 'Galerie Index';
$lang['View_Album_Personal'] = 'Anzeigen der persönlichen Galerie eines Benutzers';
$lang['View_Pictures'] = 'Anzeigen von Bildern in der Galerie';
$lang['Album_Search'] = 'Galerie durchsuchen';
$lang['Pic_Name'] = 'Bildtitel';
$lang['Description'] = 'Beschreibung';
$lang['Search_Contents'] = ' beinhaltet: ';
$lang['Search_Found'] = 'Die Suche fand ';
$lang['Search_Matches'] = 'Treffer:';
// Mighty Gorgon - Full Album Pack - END


// News
$lang['xs_latest_news'] = 'Letzte Neuigkeiten';
$lang['xs_no_news'] = 'Es gibt keine News Beiträge.';
$lang['xs_news_version'] = 'News Version: %s';
$lang['xs_news_ticker_feed'] = 'XML Feed Quelle: %s';
$lang['xs_no_ticker'] = 'Es sind keine News Ticker definiert. Gehe zum Administrations-Bereich um einen zu erstellen.';
$lang['xs_news_ticker_title'] = 'News Ticker';
$lang['xs_news_tickers_title'] = 'News Ticker';
$lang['xs_news_item_title'] = 'News-Eintrag';
$lang['xs_news_items_title'] = 'News-Einträge';
$lang['hide'] = 'Ausblenden';
$lang['show'] = 'Zeige';
$lang['Welcome'] = 'Willkommen';
$lang['birthdays'] = 'Geburtstage';

//Battle of the Sexes
$lang['male_zero_total'] = '<b>keine</b> männliche Mitglieder'; // # registered male users
$lang['male_total'] = '<b>%d</b> männliche Mitglieder'; // # registered male users
$lang['male_one_total'] = '<b>%d</b> männliches Mitglied'; // # registered male users
$lang['female_zero_total'] = 'Wir haben <b>keine</b> weiblichen Mitglieder'; // # registered female users
$lang['female_total'] = 'Wir haben <b>%d</b> weibliche Mitglieder'; // # registered female users
$lang['female_one_total'] = 'Wir haben <b>%d</b> weibliches Mitglied'; // # registered female users
$lang['unknown_total'] = '& <b>%d</b> Mitglieder, die es einfach nicht wissen.';
$lang['unknown_one_total'] = '& <b>%d</b> Mitglied, welches es einfach nicht weiss.';
$lang['unknown_zero_total'] = '';
$lang['battle_of_sexes'] = 'Geschlechterkampf: ';

$lang['who_viewed'] = 'Thema angesehen von';
$lang['BoardRules'] = 'Regeln';

$lang['View_post'] = 'Zeige Beitrag';
$lang['Post_review'] = 'Beitrag überprüfen';
$lang['View_next_post'] = 'zeige nächsten Beitrag';
$lang['View_previous_post'] = 'zeige vorherigen Beitrag';
$lang['No_newer_posts'] = 'Es gibt keine neueren Beiträge in diesem Forum';
$lang['No_older_posts'] = 'Es gibt keine älteren Beiträge in diesem Forum';

$lang['StaffSite'] = 'Team Seite';
$lang['Staff_level'] = array('Administrator','Moderator');
$lang['Staff_forums'] = 'Foren';
$lang['Staff_stats'] = 'Statistiken';
$lang['Staff_user_topic_day_stats'] = '%.2f Themen pro Tag'; // %.2f = topics per day
$lang['Staff_period'] = 'seit %d Tagen'; // %d = days
$lang['Staff_contact'] = 'Kontakt';
$lang['Staff_messenger'] = 'Messenger';
// Start Edit Notes MOD
$lang['Edit_notes'] = 'Bearbeitungsnotiz';
$lang['Delete_note'] = 'Notiz löschen';
$lang['Edited_by'] = 'Bearbeitet von';
$lang['Confirm_delete_edit_note'] = 'Bist du sicher, dass du diese Bearbeitungsnotiz löschen möchtest?';
$lang['Edit_note_deleted'] = 'Die Notiz wurde erfolgreich gelöscht.';
// End Edit Notes MOD
//Referrers Mod
$lang['Referrers'] = 'http Referer';
$lang['Viewing_Referrers'] = 'Referer anzeigen';
//Referrers Mod End

$lang['Recent_topics'] = 'Neueste Themen'; // Recent Topics
$lang['Recent_today'] = 'Heute';
$lang['Recent_yesterday'] = 'Gestern';
$lang['Recent_last24'] = 'in den letzten 24 Stunden';
$lang['Recent_lastweek'] = 'letzte Woche';
$lang['Recent_lastXdays'] = 'letzte %s Tage';
$lang['Recent_last'] = 'letzte';
$lang['Recent_days'] = 'Tage';
$lang['Recent_first'] = 'angefangen %s';
$lang['Recent_first_poster'] = '%s';
$lang['Recent_select_mode'] = 'Modus auswählen:';
$lang['Recent_showing_posts'] = 'Beiträge anzeigen:';
$lang['Recent_title_one'] = '%s Thema %s'; // %s = topics; %s = sort method
$lang['Recent_title_more'] = '%s Themen %s'; // %s = topics; %s = sort method
$lang['Recent_title_today'] = ' seit heute';
$lang['Recent_title_yesterday'] = ' seit gestern';
$lang['Recent_title_last24'] = ' seit den letzten 24 Stunden';
$lang['Recent_title_lastweek'] = ' seit letzter Woche';
$lang['Recent_title_lastXdays'] = ' seit den letzten %s Tagen'; // %s = days
$lang['Recent_no_topics'] = 'Es wurden keine Themen gefunden.';
$lang['Recent_wrong_mode'] = 'Du hast den falschen Modus ausgewählt.';
$lang['Recent_click_return'] = '%sKlicke hier%s, um zur Neueste Themen Seite zurückzukehren.';

$lang['Profile_view_option'] = 'Pop up Fenster für Profilansichten';
$lang['Profile_viewed'] = 'Profilansichten';

// BEGIN Disable Registration MOD
$lang['registration_status'] = 'Es tut uns leid, aber Neuregistrierungen im Forum sind zur Zeit nicht möglich. Bitte versuche es später noch einmal.';
// END Disable Registration MOD

$lang['PostHighlight'] = 'Markieren';
$lang['QuickQuote'] = 'Schnellzitat';
$lang['Randomquote'] = 'Zufälliges Zitat';

// Mod User CP Organize
$lang['Cpl_Navigation'] = 'Konfiguration';

$lang['Cpl_Settings_Options'] = 'Einstellungen und Optionen';
$lang['Cpl_Board_Settings'] = 'Foren Einstellungen';
$lang['Cpl_NewMSG'] = 'Neue Nachricht senden';
$lang['Cpl_Click_Return_Cpl'] = 'oder %sklicke hier%s um zur Konfiguration zurückzukehren.';
$lang['Cpl_Personal_Profile'] = 'Persönliches Profil';
$lang['Cpl_More_info'] = 'Abonnements';

$lang['Forbidden_characters'] = 'Erlaubte Zeichen für Benutzernamen sind a-z, A-Z, 0-9, -, _ und Leerzeichen.';

$lang['Topics_per_page'] = 'Themen pro Seite';
$lang['Posts_per_page'] = 'Beiträge pro Seite';
$lang['Hot_threshold'] = 'Beitragsgrenze für "heiße" Themen';
$lang['Home'] = 'Startseite';

//Added in 006
// enhanced modcp..
$lang['Mod_CP_enhanced'] = '(erweiterte Version)';
$lang['Mod_CP_first_post'] = 'Erster Beitrag';
$lang['Mod_CP_topic_count'] = '<b>%s</b> Thema gefunden.';
$lang['Mod_CP_topics_count'] = '<b>%s</b> Themen gefunden.';
$lang['Mod_CP_no_topics'] = 'Keine Themen entsprechen deinen Kriterien.';
$lang['Mod_CP_sticky'] = 'Wichtig';
$lang['Mod_CP_announce'] = 'Ankündigen';
$lang['Mod_CP_global'] = 'Globalisieren';
$lang['Mod_CP_normal'] = 'Normalisieren';
$lang['Display_sticky'] = 'Wichtig';
$lang['Display_announce'] = 'Ankündigung';
$lang['Display_global'] = 'Globale Ankündigung';
$lang['Display_poll'] = 'Umfrage';
$lang['Display_shadow'] = 'Verschoben';
$lang['Display_locked'] = 'Gesperrt';
$lang['Display_unlocked'] = 'Entsperrt';
$lang['Display_unread'] = 'Ungelesen';
$lang['Display_unanswered'] = 'Unbeantwortet';
$lang['Display_all'] = 'Alle';
$lang['Mod_CP_confirm_delete_polls'] = 'Bist du sicher, dass du diese Umfragen löschen möchtest?';
$lang['Mod_CP_poll_removed'] = 'Die ausgewählte Umfrage wurde erfolgreich vom Thema entfernt.';
$lang['Mod_CP_polls_removed'] = 'Die ausgewählten Umfragen wurden erfolgreich von den Themen entfernt.';
$lang['Mod_CP_topic_removed'] = 'Das ausgewählte Thema wurde erfolgreich aus der Datenbank gelöscht.';
$lang['Mod_CP_topic_moved'] = 'Das ausgewählte Thema wurde von <b>%s</b> nach <b>%s</b> verschoben.'; // %s = old/new forum
$lang['Mod_CP_topics_moved'] = 'Die ausgewählten Themen wurden von <b>%s</b> nach <b>%s</b> verschoben.'; // %s = old/new forum
$lang['Mod_CP_topic_locked'] = 'Das ausgewählte Thema wurde gesperrt.';
$lang['Mod_CP_topic_unlocked'] = 'Das ausgewählte Thema wurde entsperrt.';
$lang['Mod_CP_topics_sticked'] = 'Die ausgewählten Themen wurden als <b>Wichtig</b> markiert.';
$lang['Mod_CP_topic_sticked'] = 'Das ausgewählte Thema wurde  als <b>Wichtig</b> markiert.';
$lang['Mod_CP_topics_announced'] = 'Die ausgewählten Themen wurden angekündigt.';
$lang['Mod_CP_topic_announced'] = 'Das ausgewählte Thema wurde angekündigt.';
$lang['Mod_CP_topics_globalized'] = 'Die ausgewählten Themen wurden globalisiert.';
$lang['Mod_CP_topic_globalized'] = 'Das ausgewählte Thema wurde globalisiert.';
$lang['Mod_CP_topics_normalized'] = 'Die ausgewählten Themen wurden normalisiert.';
$lang['Mod_CP_topic_normalized'] = 'Das ausgewählte Thema wurde normalisiert';
$lang['Mod_CP_click_return_topic'] = '%sKlicke hier%s, um zum alten Thema zurückzukehren, oder %shier%s, um zum neuen zu gelangen.';

// ..enhanced modcp
$lang['t_starter'] = 'Du kannst dir nicht selbst Danken.';
$lang['Watched_Topics'] = 'Beobachtete Themen';
$lang['No_Watched_Topics'] = 'Du beobachtest keine Themen.';
$lang['Watched_Topics_Started'] = 'Thema eröffnet';
$lang['Watched_Topics_Stop'] = 'nicht mehr beobachten';

// Start add - Forum notification MOD
$lang['Stop_watching_forum'] = 'Dieses Forum nicht mehr beobachten';
$lang['Start_watching_forum'] = 'Dieses Forum beobachten';
$lang['No_longer_watching_forum'] = 'Du beobachtest dieses Forum nicht mehr.';
$lang['You_are_watching_forum'] = 'Du beobachtest jetzt dieses Forum und wirst über neue Themen benachrichtigt.';
// End add - Forum notification MOD
$lang['UCP_SubscForums'] = 'Beobachtete Foren';
$lang['UCP_NoSubscForums'] = 'Du beobachtest keine Foren';
$lang['UCP_SubscForums_Flag'] = 'Flagge';
$lang['UCP_SubscForums_Forum'] = 'Forum';
$lang['UCP_SubscForums_Forum_subscribed'] = 'Forum beobachtet';
$lang['UCP_SubscForums_Forum_already_subscribed'] = 'Du beobachtest dieses Forum bereits';
$lang['UCP_SubscForums_Click_return_forum'] = '%sKlicke hier%s, um zum Forum zurückzukehren.';
$lang['UCP_SubscForums_Topics'] = 'Themen';
$lang['UCP_SubscForums_Posts'] = 'Beiträge';
$lang['UCP_SubscForums_LastPost'] = 'Letzter Beitrag';
$lang['UCP_SubscForums_UnSubscribe'] = 'nicht mehr beobachten';
$lang['UCP_SubscForums_NewTopic'] = 'Neues Thema';

$lang['profile_main'] = 'Benutzer-Kontrollzentrum';
$lang['profile_explain'] = 'Willkommen im Benutzer-Kontrollzentrum.<br />Hier kannst du sehen, wer sich dein Profil angeschaut hat, deine persönlichen Einstellungen anpassen und beobachtete Themen sowie Foren anzeigen und verwalten. Außerdem kannst du Private Nachrichten (PN) an andere Benutzern senden (wenn vom Administrator gestattet).';
$lang['your_activity'] = 'Dein Profil';

$lang['Gravatar'] = 'Gravatar';
$lang['Gravatar_explain'] = 'Wenn du einen <a href="http://www.gravatar.com" target="_blank">Gravatar</a> hast, gib hier die E-Mail Adresse ein, mit der du dich dort registriert hast.';

$lang['private_msg_review_title'] = 'Nachricht, auf die du antwortest';
$lang['private_msg_review_error'] = 'Fehler beim Finden der Privaten Nachricht!';

$lang['BSH_Viewing_Topic'] = 'Thema ansehen: %t%';
$lang['BSH_Viewing_Post'] = '%sBeitrag ansehen%s';
$lang['BSH_Viewing_Profile'] = '%u%\'s Profil ansehen';
$lang['BSH_Viewing_Groups'] = '%sGruppen ansehen%s';
$lang['BSH_Viewing_Forums'] = 'Forum ansehen: %f%';
$lang['BSH_Index'] = '%sIndex anzeigen%s';
$lang['BSH_Searching_Forums'] = '%sForen durchsuchen%s';
$lang['BSH_Viewing_Onlinelist'] = '%sOnline Liste anzeigen%s';
$lang['BSH_Viewing_Messages'] = '%sPrivate Nachrichten ansehen%s';
$lang['BSH_Viewing_Memberlist'] = '%sMitgliederliste ansehen%s';
$lang['BSH_Login'] = '%sEinloggen%s';
$lang['BSH_Logout'] = '%sAusloggen%s';
$lang['BSH_Editing_Profile'] = '%sProfil bearbeiten%s';
$lang['BSH_Viewing_ACP'] = '%sACP anzeigen%s';
$lang['BSH_Moderating_Forum'] = '%sForen moderieren%s';
$lang['BSH_Viewing_FAQ'] = '%sFAQ ansehen%s';
$lang['BSH_Viewing_Category'] = 'Kategorie ansehen: %c%';

$lang['Board_statistic'] = 'Board Statistiken';
$lang['Database_statistic'] = 'Datenbank Statistiken';
$lang['Version_info'] = 'Versionsinformation';
$lang['Thereof_deactivated_users'] = 'Anzahl nicht aktivierter Benutzer';
$lang['Thereof_Moderators'] = 'Anzahl Moderatoren';
$lang['Thereof_Junior_Administrators'] = 'Number of Junior Administrators';
$lang['Thereof_Administrators'] = 'Anzahl Administrators';
$lang['Deactivated_Users'] = 'Benutzer, die auf Aktivierung warten';
$lang['Users_with_Mod_Privileges'] = 'Mitglieder mit Moderator-Rechten';
$lang['Users_with_Junior_Admin_Privileges'] = 'Members with junior administrator privileges';
$lang['Users_with_Admin_Privileges'] = 'Mitglieder mit Administrator-Rechten';
$lang['DB_size'] = 'Größe der Datenbank';
$lang['Version_of_ip'] = '<a href="http://www.icyphoenix.com/">Icy Phoenix</a> Version';
$lang['Version_of_board'] = '<a href="http://www.phpbb.com">phpbb</a> Version';
$lang['Version_of_PHP'] = '<a href="http://www.php.net/">PHP</a> Version';
$lang['Version_of_MySQL'] = '<a href="http://www.mysql.com/">MySQL</a> Version';
$lang['Download_post'] = 'Beitrag herunterladen';

$lang['Download_topic'] = 'Thema herunterladen';
$lang['Always_swear'] = 'Kraftausdrücke immer erlauben';

$lang['Shoutbox'] = 'Shoutbox';
$lang['Shoutbox_date'] = ' d m Y h:i:s';
$lang['Shout_censor'] = 'Shout entfernt!';
$lang['Shout_refresh'] = 'Aktualisieren';
$lang['Shout_text'] = 'Dein Text';
$lang['Viewing_Shoutbox'] = 'Shoutbox ansehen';
$lang['Censor'] = 'Zensieren';

$lang['Edit_post_time'] = 'Zeit dieses Beitrags bearbeiten';
$lang['Edit_post_time_xs'] = 'bearbeiten';
$lang['Topic_time_xs'] = 'Themenzeit';
$lang['Post_time'] = 'Beitragszeit';
$lang['Post_time_successfull_edited'] = '<b>Die Zeit wurde erfolgreich aktualisiert.</b></span><br /><span class="postdetails">Dieses Fenster wird nach 3 Sekunden geschlossen.';

$lang['staff_message'] = 'Nachricht vom Team';

$lang['Board_Rules'] = 'Foren Regeln';
$lang['Forum_Rules'] = 'Foren Regeln';
$lang['Show_avatars'] = 'Avatare in Themen anzeigen';
$lang['Show_signatures'] = 'Signaturen in Themen anzeigen';

//016
$lang['Acronym'] = 'Abkürzung';
$lang['Acronyms'] = 'Abkürzungen';
$lang['User_Number'] = 'Benutzer #';
$lang['Member_Count'] = 'Mitglieder';
$lang['Reply_message'] = 'Beantwortete Nachricht';

//018
$lang['Click_read_topic'] = '%sKlicke hier%s, um sie zu lesen'; // %s's here are for uris, do not remove!
$lang['Create_with_generator'] = 'Avatar mit dem Avatar Generator erstellen';
$lang['View_avatar_generator'] = 'Avatar Generator';

//027
$lang['Adv_Search'] = 'Erweiterte Suche';
$lang['Search_Explain'] = 'Suche innerhalb dieser Seite';

//030
$lang['Login_attempts_exceeded'] = 'Die maximale Anzahl von %s zulässigen Login-Versuchen wurde überschritten. Du kannst dich in den nächsten %s Minuten nicht einloggen.';
$lang['Please_remove_install_contrib'] = 'Bitte stelle sicher, dass du die Verzeichnisse install/ und contrib/ gelöscht hast.';

//033
$lang['Search_Engines'] = 'Suchmaschinen-Bots:';
$lang['Bots_browsing_forum'] = 'Suchmaschinen-Bots in diesem Forum:';

//036
$lang['Debug_On'] = 'Debug ein';
$lang['Debug_Off'] = 'Debug aus';
$lang['Page_Generation_Time'] = 'Seitenaufbau in';
$lang['Memory_Usage'] = 'Memory';
$lang['SQL_Queries'] = 'SQL Abfragen';
$lang['Search_new2'] = 'Neue Beiträge';
$lang['Search_new_p'] = 'Neue Beiträge seit letztem Besuch';

//037
$lang['Show_In_Portal'] = 'Zeige im Portal';
$lang['Not_Auth_View'] = 'Du bist nicht autorisiert, diese Seite anzusehen.';

//038
$lang['Site_Hist'] = 'Seiten Historie';
$lang['Links'] = 'Links';
$lang['Print_View'] = 'Druckansicht';
$lang['Browsing_topic'] = 'Benutzer in diesem Thema:';

//041
$lang['Sudoku'] = 'Sudoku';
$lang['Bookmarks'] = 'Lesezeichen';
$lang['Set_Bookmark'] = 'Setze ein Lesezeichen für diese Thema';
$lang['Remove_Bookmark'] = 'Entferne das Lesezeichen für dieses Thema';
$lang['No_Bookmarks'] = 'Du hast kein Lesezeichen gesetzt';
$lang['Always_set_bm'] = 'Setze Lesezeichen automatisch beim Schreiben einen Beitrages';
$lang['Found_bookmark'] = 'Du hast %d Lesezeichen gesetzt.'; // eg. Search found 1 match
$lang['Found_bookmarks'] = 'Du hast %d Lesezeichen gesetzt.'; // eg. Search found 24 matches
$lang['More_bookmarks'] = 'Mehr Lesezeichen...'; // For mozilla navigation bar

//RSS Reader Help
$lang['RSS'] = 'RSS';
$lang['Rss_news_help'] = 'Was ist das?';
$lang['Rss_news_help_title'] = 'RSS Newsreader Hilfe';
$lang['Rss_news_help_header'] = 'Was sind Feeds und wie verwende ich sie?';
$lang['Rss_news_help_explain'] = 'Ein Feed ist eine regelmäßig aktualisierte Zusammenfassung bestimmter Web-Inhalte, die Links zur vollständigen Version des jeweiligen Inhalts enthält. Wenn Du mit einem Feed-Reader den Feed einer Website abonnierst, erhältst Du alle neuen Inhalte dieser Website in einer Zusammenfassung.<br /><br /><b>Achtung:</b> Zum Abonnieren von Website-Feeds muss ein <a href="http://www.rssowl.org/" target="new">Feed-Reader</a> verwendet werden. Beim Klicken auf den Link zu einem RSS- oder Atom-Feed erscheint sonst im Browser eine Seite mit einem unformatierten Textwirrwarr.';
$lang['Rss_news_help_header_2'] = '<b>Was ist RSS und Atom?</b>';
$lang['Rss_news_help_explain_2'] = 'RSS und Atom sind zwei Formate für Feeds. Die meisten Feed-Reader unterstützen beide Formate. Gegenwärtig wird von uns Atom 0.3 und RSS 2.0 unterstützt.';
$lang['Rss_news_help_header_3'] = '<b>Wie verwende ich die News-Feeds?</b>';
$lang['Rss_news_help_explain_3'] = 'Als erstes benötigst Du einen Feed-Reader, den bekommst Du beispielsweise bei <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />Danach kannst Du in dem Programm:<br /><br /><b>1.</b> Nach RSS Links auf unserer Seite suchen. (Extras => Suche Newsfeeds auf Webseite) <b>oder</b><br /><b>2.</b> eine der folgenden Feed URL´s hinzufügen:';
$lang['L_url_rss_explain'] = 'URL für alle Forenbeiträge.';
$lang['L_url_rss_news_explain'] = 'URL nur für die Foren News.';
$lang['L_url_rss_atom_explain'] = 'URL für Atom RSS Feed.';
$lang['Rss_news_help_rights'] = 'Wir behalten uns das Recht vor, die Nutzung von Feeds jederzeit nach unserem Ermessen zu beenden. Unsere Foren-Feeds dürfen nicht weitervertrieben werden.';
$lang['Rss_news_feeds'] = 'RSS News Feeds';

$lang['Quick_Reply'] = 'Schnell Antwort';
$lang['Mod_CP_sticky2'] = 'Wichtig';
$lang['Mod_CP_announce2'] = 'Ankündigung';
$lang['Mod_CP_global2'] = 'Global';
$lang['Mod_CP_normal2'] = 'Normal';

$lang['Search_Flood_Error'] = 'Du kannst keine neue Suche so kurz nach deiner letzten Suche starten; Bitte versuche es in ein paar Sekunden noch einmal.';

// Custom Profile Fields MOD
$lang['custom_field_notice'] = 'Diese Felder wurden von einem Administrator erstellt. Diese sind oder sind nicht öffentlich einsehbar. Felder die mit * gekennzeichnet sind, sind Pflichtfelder.';
$lang['and'] = ' und ';
// END Custom Profile Fields MOD

$lang['dsbl'] = 'Deine IP Adresse ist auf einer <a href="%url%">DNS-basierenden Schwarzen Liste</a>.<br />Registrierungsversuch wurde blockiert.<br />Bitte wende dich an einen Administrator dieser Seite.';

// BUILD 044
$lang['Emails_Only_To_Admins_Error'] = 'Du kannst das E-Mail System nur zum Senden von E-Mails an einen Administrator nutzen.';

// BUILD 046
$lang['Wordgraph'] = 'Tags';
$lang['Viewing_wordgraph'] = 'Ansicht der Tags-Seite';

// BUILD 050
$lang['Links_For_Guests'] = '<b>Du musst registriert sein, um den Link sehen zu können.</b>';
$lang['New'] = 'N';
$lang['New_Label'] = 'Neu';
$lang['New_Messages_Label'] = 'Neue Nachrichten';

// BUILD 056
$lang['Show_Personal_Gallery'] = 'Zeige persönliche Galerie dieses Benutzers';

// BUILD 058
$lang['Login_Status'] = 'Online Status';
$lang['Login_Hidden'] = 'Versteckt';
$lang['Login_Visible'] = 'Sichtbar';
$lang['Login_Default'] = 'Standard';
$lang['Errors_Not_Found'] = 'Die angeforderte Adresse wurde auf diesem Server nicht gefunden.';
$lang['Errors_000'] = 'Unbekannter Fehler';
$lang['Errors_000_Full'] = 'Die angeforderte Adresse hat einen unbekannten Fehlercode zurückgegeben.<br />Der Fehler wurde in eine Log-Datei geschrieben und wir werden so schnell wie möglich prüfen, wo das Problem liegt.';
$lang['Errors_400'] = 'Fehler 400';
$lang['Errors_400_Full'] = 'Die angeforderte Adresse ist ungültig.';
$lang['Errors_401'] = 'Fehler 401 - Nicht berechtigt';
$lang['Errors_401_Full'] = 'Du erhältst diese Fehlermeldung, weil du nicht berechtigt bist, diese Adresse aufzurufen.';
$lang['Errors_403'] = 'Fehler 403';
$lang['Errors_403_Full'] = 'Zugriff auf diese Adresse ist verboten.';
$lang['Errors_404'] = 'Fehler 404 - Datei nicht gefunden';
$lang['Errors_404_Full'] = 'Die angeforderte Adresse wurde auf dem Server nicht gefunden. Vielleicht hast du die Adresse falsch eingegeben, oder die angeforderte Seite ist nicht mehr auf dem Server.';
$lang['Errors_500'] = 'Fehler 500 - Konfigurationsfehler';
$lang['Errors_500_Full'] = 'Die angeforderte Adresse lieferte einen Konfigurationsfehler.<br />Der Fehler wurde in eine Log-Datei geschrieben und wir werden so schnell wie möglich prüfen, wo das Problem liegt.';
$lang['Errors_Email_Subject'] = 'Fehler: ';
$lang['Errors_Email_Addrress_Prefix'] = 'icy_phoenix_errors';
$lang['Errors_Email_Body'] = 'Auf deiner Seite ist ein Fehler aufgetreten. Bitte überprüfe die Log-Datei.';

// BUILD 059
$lang['Remote_avatar_no_image'] = 'Das Bild %s ist nicht vorhanden';
$lang['Remote_avatar_error_filesize'] = 'Das Bild ist zu groß. Avatare dürfen maximal (%d Bytes) groß sein.';
$lang['Remote_avatar_error_dimension'] = 'Die Bildpixelgröße ist zu groß. Avatare dürfen maximal (%d x %d Pixel) groß sein.';
$lang['How_Many_Chatters'] = 'Es sind zur Zeit <b>%d</b> Benutzer im Chat.';
$lang['Who_Are_Chatting' ] = '<b>%s</b>';
$lang['Click_to_join_chat'] = 'Hier klicken um zu chatten.';
$lang['ChatBox'] = 'ChatBox';
$lang['log_out_chat'] = 'Du hast Dich erfolgreich ausgeloggt ';
$lang['Send'] = 'Senden';
$lang['Login_to_join_chat'] = 'Einloggen, um zu chatten';

// Hacks List
/* General */
$lang['Hacks_List'] = 'Credits';
$lang['Page_Desc'] = 'Auf dieser Seite kannst du die Credits &amp; Mods für die Credits/Mods Liste deines Forums hinzufügen/bearbeiten/löschen. Sie werden angezeigt, wenn Benutzer die Seite hacks_list.php besuchen.';
$lang['Deleted_Hack'] = 'Credit %s wurde von der Liste gelöscht.<br />';
$lang['Updated_Hack'] = 'Informationen für Credit %s wurden aktualisiert.<br />';
$lang['Added_Hack'] = 'Informationen für Credit %s hinzugefügt.<br />';
$lang['Status'] = 'Status';
$lang['No_Website'] = 'Keine Website verfügbar';
$lang['No_Hacks'] = 'Keine Credits zum anzeigen';
$lang['Add_New_Hack'] = 'Neuen Credit hinzufügen';
$lang['User_Viewable'] = 'Nur Admin?';
$lang['Hack_Name'] = 'Mod Name';
//$lang['Description'] = 'Beschreibung';
$lang['Required'] = 'Erforderlich';
$lang['Author_Email'] = 'Autor E-Mail';
$lang['Version'] = 'Version';
$lang['Download_URL'] = 'Downloadseite';

/* Errors */
$lang['Error_Hacks_List_Table'] = 'Fehler beim abfragen der Credit Tabelle.';
$lang['Required_Field_Missing'] = 'Du hast nicht alle erforderlichen Informationen eingegeben.';
$lang['Error_File_Opening'] = 'Fehler beim Öffen von Datei: %s';

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
$lang['Newest_pic'] = 'Neuestes Bild'; // Album Addon
$lang['Random_pic'] = 'Zufälliges Bild'; // Album Addon
$lang['Click_enlarge_pic'] = 'Klicke auf das Bild, um es zu vergrößern.';
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
$lang['Last_Used_IP'] = 'Letzte benutzte IP';
$lang['Last_Used_OS'] = 'OS';
$lang['Last_Used_Browser'] = 'Browser';
$lang['Last_Used_Referer'] = 'Referer';
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
$lang['Users_Admins'] = 'Administratoren';
$lang['Users_Mods'] = 'Moderatoren';
$lang['Users_Global_Mods'] = 'Globale Moderatoren';
$lang['Users_Regs'] = 'Benutzer';
$lang['Users_Guests'] = 'Gäste';
$lang['Users_Hidden'] = 'Versteckt';
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
$lang['Fast'] = 'Schnell';
$lang['Standard'] = 'Standard';
$lang['Style'] = 'Style';
$lang['User_Contacts'] = 'Kontakte';
$lang['Memberlist_Users_Display'] = 'Benutzer pro Seite:';
$lang['Sort_LastLogon'] = 'Letzter Besuch';
$lang['Sort_Birthday'] = 'Geburtstag';
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
$lang['Staff'] = 'Team';
$lang['Rank'] = 'Rang';
$lang['Rank_Header'] = 'Ränge';
$lang['Rank_Image'] = 'Rangbild';
$lang['Rank_Posts_Count'] = 'Automatischer Rang nach Beiträgen';
$lang['Rank_Days_Count'] = 'Automatischer Rang nach Tagen';
$lang['Rank_Min_Des'] = 'Minimum Beiträge/Tage';
$lang['Rank_Min_M'] = 'Minimale Beiträge';
$lang['Rank_Max_M'] = 'Maximale Beiträge';
$lang['Rank_Min_D'] = 'Minimale Tage';
$lang['Rank_Max_D'] = 'Maximale Tage';
$lang['Rank_Special'] = 'Spezialrang';
$lang['Rank_Special_Guest'] = 'Spezialrang für Gäste';
$lang['Rank_Special_Banned'] = 'Spezialrang für Gesperrte';
$lang['Current_Rank_Image'] = 'Aktuelles Rangbild';
$lang['No_Rank'] = 'Kein Rang zugewiesen';
$lang['No_Rank_Image'] = 'Kein Rangbild';
$lang['No_Rank_Special'] = 'Kein Spezialrang zugewiesen';
$lang['Memberlist_Administrator'] = 'Administrator';
$lang['Memberlist_Moderator'] = 'Moderator';
$lang['Memberlist_User'] = 'Benutzer';
$lang['Guest_User'] = 'Gast';
$lang['Banned_User'] = 'Gesperrt';
$lang['Rank1_title'] = 'Rang 1 Titel';
$lang['Rank2_title'] = 'Rang 2 Titel';
$lang['Rank3_title'] = 'Rang 3 Titel';
$lang['Rank4_title'] = 'Rang 4 Titel';
$lang['Rank5_title'] = 'Rang 5 Titel';
// Mighty Gorgon - Multiple Ranks - END
// Mighty Gorgon - Nav Links - BEGIN
$lang['QUICK_LINKS'] = 'Links';
$lang['MAIN_LINKS'] = 'Hauptlinks';
$lang['TOOLS_LINKS'] = 'Tools';
$lang['NEWS_LINKS'] = 'News';
$lang['USERS_LINKS'] = 'Benutzer &amp; Gruppen';
$lang['INFO_LINKS'] = 'Info';
$lang['SPONSORS_LINKS'] = 'Sponsoren';
$lang['HelpDesk'] = 'Help Desk';
$lang['AvatarGenerator'] = 'Avatar Generator';
$lang['DBGenerator'] = 'SQL zu PHP Generator ';
$lang['NEWS_CAT'] = 'News Kategorien';
$lang['NEWS_ARC'] = 'News Archiv';
// Mighty Gorgon - Nav Links - END
$lang['Activity'] = 'Spiele';
$lang['Games'] = 'Spiele';
$lang['Trohpy'] = 'Spiel Pokale';
$lang['quick_links_games'] = 'Spiele Menu';

$lang['By'] = 'von';
$lang['No_Icon_Image'] = 'Kein Icon';
$lang['Change_Style'] = 'Style';
$lang['Change_Lang'] = 'Sprache';
$lang['Permissions_List'] = 'Berechtigungsliste';
$lang['IP_TEAM'] = 'Icy Phoenix Team';

//$lang[''] = '';
// Mighty Gorgon - LANG - END

// New MG - BEGIN
$lang['Nav_Separator'] = '&nbsp;&raquo;&nbsp;';
$lang['WeatherForecast'] = 'Wettervorhersage';
$lang['ErrorNotFound'] = 'Datei nicht gefunden!';
$lang['MGC_Users_Online'] = 'MGC Benutzer Online';
$lang['MGC_User_Servertime'] = 'Datum';
$lang['MGC_User_Nickname'] = 'Nickname';
$lang['MGC_User_Server'] = 'Server';
$lang['MGC_User_IP'] = 'IP';
$lang['MGC_User_ID'] = 'ID';
$lang['MGC_User_Client_Version'] = 'MGC Version';

$lang['Country_Flag'] = 'Landesflagge';
$lang['Select_Country'] = 'Land auswählen';
$lang['Extra_profile_info'] = 'Zusätzliche Profil Informationen';

$lang['Extra_profile_info_explain'] = 'Hier kannst du zusätzliche Informationen über dich oder deine Hobbies eintragen. Du kannst auch Bilder einfügen. Es ist möglich BBCode zu verwenden, welcher hier genauso funktioniert, wie beim Schreiben eines Beitrags oder wenn du deine Signatur bearbeitest.';
$lang['Extra_window'] = 'in neuem Fenster öffnen';
$lang['Extra_too_long'] = 'Dein Extra-Feld ist zu lang (max. <b>%d</b> Zeichen sind erlaubt)';
$lang['UserLike'] = 'Benutzer mag';
$lang['UserDisLike'] = 'Benutzer mag nicht';
$lang['UserLikeIns'] = 'Drei Dinge die du magst';
$lang['UserDisLikeIns'] = 'Drei Dinge die du nicht magst';
$lang['UserPhone'] = 'Telefonnummer';
$lang['UserSport'] = 'Sport/Team';
$lang['UserMusic'] = 'Musik/Gruppen';
$lang['UserNoInfo'] = 'Keine Informationen verfügbar';
$lang['Last_Seen'] = 'Zuletzt Online';
// New MG - END

// MG CMS - BEGIN
$lang['CMS_Title'] = 'CMS';
$lang['CMS_Management'] = 'CMS Verwaltung';
$lang['CMS_Config'] = 'CMS Konfiguration';
$lang['CMS_ACP'] = 'Bearbeite diese Seite';
$lang['Custom_Page'] = 'Individuelle Seitenanpassung';
// MG CMS - END

// Icy Phoenix - BUILD 001
$lang['SimilarTopics'] = 'Ähnliche Beiträge';
$lang['Chat'] = 'Chat';
$lang['Digests'] = 'Digests';

$lang['CPL_REG_INFO_EXPLAIN'] = 'Benutzername, E-Mail-Adresse und Passwort';
$lang['CPL_PROFILE_INFO_EXPLAIN'] = 'Allgemeine Kontakt Information, Messenger, Geburtstag, Interessen und andere Informationen';
$lang['CPL_PROFILE_VIEWED_EXPLAIN'] = 'Benutzer die dein Profil angesehen haben';
$lang['CPL_AVATAR_PANEL_EXPLAIN'] = 'Avatar ist ein kleines Bild das neben deinem Nick angezeigt wird';
$lang['CPL_SIG_EDIT_EXPLAIN'] = 'Deine Signatur: Du kannst hier einen Text eingeben der unter jedem deiner Beiträge angezeigt wird';
$lang['CPL_PREFERENCES_EXPLAIN'] = 'Allgemeine Einstellungen bezüglich schreiben und lesen von Mitteilungen';
$lang['CPL_BOARD_SETTINGS_EXPLAIN'] = 'Globale Einstellungen bezüglich Zeit, Template und Sprache';
$lang['Calendar_settings_EXPLAIN'] = 'Einstellungen bezüglich der Kalender Box';
$lang['Hierarchy_setting_EXPLAIN'] = 'Einstellungen bezüglich der Unterforen und Themen Typen Aufteilung';
$lang['LOGIN_SEC_EXPLAIN'] = 'Wenn dies aktiviert ist kannst du alle Logins mit deinem Benutzernamen einsehen';
$lang['CPL_OWN_POSTS_EXPLAIN'] = 'Suche nach deinen Beiträgen';
$lang['CPL_OWN_PICTURES_EXPLAIN'] = 'Besuche deine persönliche Galerie';
$lang['CPL_INBOX_EXPLAIN'] = 'Eingang: beinhaltet private Nachrichten die du empfangen hast';
$lang['CPL_SAVEBOX_EXPLAIN'] = 'Gespeicherte: beinhaltet private Nachrichten die du gespeichert hast';
$lang['CPL_OUTBOX_EXPLAIN'] = 'Ausgang: beinhaltet private Nachrichten welche du gesendet hast, die aber noch nicht gelesen wurden';
$lang['CPL_SENTBOX_EXPLAIN'] = 'Gesendet: beinhaltet private Nachrichten die gesendet und gelesen wurden';
$lang['CPL_BOOKMARKS_EXPLAIN'] = 'Alle Lesezeichen die du für Themen gesetzt hast';
$lang['WATCHED_TOPICS_EXPLAIN'] = 'Eine Liste aller Themen die du beobachtest';
$lang['CPL_SUBSCFORUMS_EXPLAIN'] = 'Die Foren die du abonniert hast um Informationen über neue Themen zu erhalten';
$lang['DIGESTS_EXPLAIN'] = 'Digests sind periodische E-Mails die automatisch gesendet werden mit einem Hinweis auf die neuen Nachrichten in dem entsprechenden Forum';
$lang['DRAFTS_EXPLAIN'] = 'Verwalte Deine Entwürfe';

// Ajax Shoutbox - BEGIN
$lang['Ajax_Shoutbox'] = 'Shoutbox';
$lang['Ajax_Chat'] = 'Chat';
$lang['Ajax_Archive'] = 'Archiv';
$lang['Shoutbox_flooderror'] = 'Du kannst nicht so schnell hintereinander Shouts senden. Bitte versuche es in einem Moment noch einmal.';
$lang['Shoutbox_no_auth'] = 'Sorry, nur registrierte Benutzer können die Shoutbox benutzen';
$lang['Shoutbox_loading'] = 'Lade Shoutbox...';
// Errors
$lang['Shoutbox_unable'] = 'Sorry, die Aktion konnte nicht ausgeführt werden. Versuch es bitte noch einmal.';
$lang['Shoutbox_empty'] = 'Keine Mitteilungen in der Datenbank';
$lang['Shoutbox_no_mode'] = 'Kein gültiger Mode festgelegt';
// Archive
$lang['Shouts'] = 'Shouts';
$lang['Statistics'] = 'Statistiken';
$lang['Total_shouts'] = 'Shouts insgesamt';
$lang['Stored_shouts'] = 'Gespeicherte Shouts';
$lang['My_shouts'] = 'Meine Shouts';
$lang['Today_shouts'] = 'Shouts in den letzten 24 Stunden';
$lang['Top_Ten_Shouters'] = 'Top Ten Shouters';
// Online list
$lang['Online_total'] = 'Insgesamt';
$lang['Online_registered'] = 'Benutzer';
$lang['Online_guests'] = 'Gäste';
$lang['Who_is_Chatting'] = 'Wer ist im Chat';
$lang['Shoutbox_online_explain'] = 'Diese Informationen basieren auf den Daten der aktiven Benutzer der letzten dreißig Sekunden.';
// Ajax Shoutbox - END

$lang['Contact_us'] = 'Kontakt';
$lang['Contact_us_explain'] = 'Auf dieser Seite kannst du uns eine E-Mail senden';
$lang['Session_invalid'] = 'Ungültige Session. Bitte betrete das Forum noch einmal.';

// Icy Phoenix - BUILD 007
$lang['Reg_Username_Short'] = ' dieser Benutzername ist zu kurz';
$lang['Reg_Username_Long'] = ' dieser Benutzername ist zu lang';
$lang['Reg_Username_Taken'] = ' dieser Benutzername ist nicht verfügbar';
$lang['Reg_Username_Free'] = ' dieser Benutzername ist verfügbar';
$lang['Reg_PWD_Short'] = 'Dieses Passwort ist zu kurz';
$lang['Reg_PWD_Easy'] = 'Dieses Passwort ist zu einfach';
$lang['Reg_PWD_OK'] = 'Dieses Passwort ist OK';
$lang['Reg_Email_Invalid'] = ' diese E-Mail Adresse ist ungültig oder ist schon vorhanden';
$lang['Reg_Email_OK'] = ' diese E-Mail Adresse ist OK';

// Moved here from lang_adv_time.php
$lang['time_mode'] = 'Zeit-Verwaltung';
$lang['time_mode_text'] = 'Forumeinstellungen werden ignoriert, wenn die Automatische Eintellung aktiviert ist (JavaScript ist für die ersten beiden erforderlich).<br />Wenn du Manuelle Einstellung gewählt hast, kannst du die Sommerzeit Differenz im Feld Sommerzeit Unterschied die Differenz zur normalen Zeit eingeben (0 bis 120 Minuten, normalerweise 60 Minuten).<br /><br />* Der mit Sternchen markierte Modus, ist der Standardmodus im Forum und vom Administrator empfohlen.';
$lang['time_mode_auto'] = 'Automatische Einstellung:';
$lang['time_mode_full_pc'] = 'Zeit deines Computers';
$lang['time_mode_server_pc'] = 'Server Universalzeit, Zeitzone/Sommerzeit<br /><span STYLE="margin-left: 25">deines Computers</span>';
$lang['time_mode_full_server'] = 'Lokale Server Zeit';
$lang['time_mode_manual'] = 'Manuell Einstellung:';
$lang['time_mode_dst'] = 'Sommerzeit aktivieren';
$lang['time_mode_dst_server'] = 'vom Server';
$lang['time_mode_dst_time_lag'] = 'Sommerzeit Unterschied';
$lang['time_mode_dst_mn'] = ' Minuten';
$lang['time_mode_timezone'] = 'Zeitzone';

$lang['dst_time_lag_error'] = 'Sommerzeit Unterschied Fehler. Der Wert muss zwischen 0 und 120 Minuten liegen.';

$lang['dst_enabled_mode'] = ' [Sommerzeit aktiviert]';
$lang['full_server_mode'] = 'Zeit mit dem Server syncronisiert';
$lang['server_pc_mode'] = 'Zeitsyncronisation mit dem Server - Zeitzone/Sommerzeit mit deinem Computer';
$lang['full_pc_mode'] = 'Zeit mit deinem Computer syncronisiert';

$lang['Smileys_Per_Page'] = 'Smilies pro Seite';

/* lang_site_hist.php - BEGIN */
$lang['Site_history'] = 'Seiten Historie';
$lang['Month'] = 'Monat';
$lang['Week_day'] = 'Wochentag';
$lang['Not_availble'] = 'Nicht verfügbar';
$lang['Total_users'] = 'Maximale Anzahl von Benutzern';
$lang['Reg_users'] = 'Registrierte Benutzer';
$lang['Hidden_users'] = 'Versteckte Benutzer';
$lang['Guests_users'] = 'Gäste';
$lang['New_users'] = 'Neue Benutzer';
$lang['New_topics'] = 'Neue Themen';
$lang['New_posts_reply'] = 'Schreiben/Antworten';
$lang['Most_online'] = 'Benutzerrekord: %s';
$lang['Most_online_week'] = 'Benutzerrekord der letzten 7 Tage';
$lang['Last_24'] = 'Benutzerrekord der letzten %s Stunden';
$lang['Top_Posting_Users'] = 'Die aktivsten Benutzer';
$lang['Top_Posting_Users_week'] = 'Die aktivsten Benutzer diese Woche [%s]';
$lang['Rank'] = 'Rang';
$lang['Percent'] = 'Prozent';
$lang['Graph'] = 'Grafik';
$lang['Top_Visiting_Users'] = 'Benutzer die die meiste Zeit hier verbracht haben';
/* lang_site_hist.php - END */

/* lang_referrers.php - BEGIN */
$lang['Referrers_Title'] = 'Http Referer Konfiguration';
$lang['Referrers_Cleared'] = 'Referer gelöscht';
$lang['Referrers_Clear'] = 'Alle löschen';
$lang['Click_Return_Referrers'] = '%sKlicke hier%s, um zu den Referer zurückzukehren';
$lang['Referrers'] = 'Http Referer';
$lang['Referrer_host'] = 'Verweisender Host';
$lang['Referrer_url'] = 'Verweisende URL';
$lang['Referrer_ip'] = 'Verweisende IP';
$lang['Referrer_hits'] = 'Treffer';
$lang['Referrer_first'] = 'Erster Besuch';
$lang['Referrer_last'] = 'Letzter Besuch';
$lang['Viewing_Referrers'] = 'Referer anzeigen';
/* lang_referrers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
$lang['X_Days'] = '%d Tage';
$lang['X_Weeks'] = '%d Wochen';
$lang['X_Months'] = '%d Monate';
$lang['X_Years'] = '%d Jahre';

$lang['Confirm_delete_user'] = 'Bist du Dir wirklich sicher das Du diesen Benutzer löschen willst?';
$lang['Prune_no_users'] = 'Es wurden keine Benutzer gelöscht.';
$lang['Prune_users_number'] = '%d Benutzer wurden gelöscht:';

$lang['Prune_user_list'] = 'Benutzer, die gelöscht werden';
$lang['Prune_on_click'] = 'Du bist dabei, %d Benutzer zu löschen. Fortfahren?';
$lang['Prune_Action'] = 'Aktionen';
$lang['Prune_users_explain'] = 'Von dieser Seite aus kannst du inaktive Benutzer löschen. Dabei kannst du zwischen drei Arten wählen: Benutzer löschen, die noch nie etwas geschrieben haben, diejenigen, die sich noch nie eingeloggt haben, oder diejenigen, die ihr Benutzer-Konto noch nicht freigeschaltet haben.<p/><b> !Achtung! </b> Du kannst diese Aktion nicht wieder rückgängig machen, alle Benutzer aus der Liste werden gelöscht, sobald du auf den Link geklickt hast.';
$lang['Prune_commands'] = array();

// here you can make more entries if needed
$lang['Prune_commands'][0] = 'Faule Benutzer löschen';
$lang['Prune_explain'][0] = 'Löscht die Benutzer, die noch nichts geschrieben haben, <b>au&szlig;er</b> den neuen Benutzern der letzten %d Tage';
$lang['Prune_commands'][1] = 'Nie eingeloggte Benutzer löschen';
$lang['Prune_explain'][1] = 'Löscht die Benutzer, die zwar aktiviert sind, sich aber noch nie eingeloggt haben, <b>au&szlig;er</b> den neuen Benutzern der letzten %d Tage';
$lang['Prune_commands'][2] = 'Nicht aktivierte Benutzer löschen';
$lang['Prune_explain'][2] = 'Löscht die Benutzer, die sich zwar angemeldet haben, aber nicht freigeschaltet sind, <b>au&szlig;er</b> den neuen Benutzern der letzten %d Tage';
$lang['Prune_commands'][3] = 'Untreue Benutzer löschen';
$lang['Prune_explain'][3] = 'Löscht die Benutzer, die sich seit 60 Tagen nicht mehr eingeloggt haben, <b>au&szlig;er</b> den neuen Benutzern der letzten %d Tage';
$lang['Prune_commands'][4] = 'Schreibfaule Benutzer löschen';
$lang['Prune_explain'][4] = 'Löscht die Benutzer, die nicht mindestens 1 Beitrag innerhalb von 10 Tagen schreiben, <b>au&szlig;er</b> den neuen Benutzern der letzten %d Tage';
$lang['Prune_commands'][5] = 'Prune non-posting and non-visiting users';
$lang['Prune_explain'][5] = 'Who have never posted and not visited recently, <b>excluding</b> new users from the past %d days';
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
$lang['Avatar_Generator'] = 'Avatar Generator';
$lang['Available'] = 'Verfügbare Avatare';
$lang['Random'] = 'Zufälliger Avatar';
$lang['Avatar_Text'] = 'Bitte gib den Text ein, der auf dem Avatar stehen soll:';
$lang['Avatar_Preview'] = 'Avatar-Vorschau';
$lang['Your_Avatar'] = 'Dein Avatar';
$lang['Submit_Avatar'] = 'Avatar bestätigen';
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

$lang['Upload_Image_Local'] = 'Bild hochladen';
$lang['Uploaded_Images_Local'] = 'Hochgeladene Bilder';
$lang['Upload_Image_Local_Explain'] = 'Wähle das Bild aus, das du hochladen möchtest.';
$lang['Uploaded_Image_Success'] = 'Das Bild wurde erfolgreich hochgeladen.';
$lang['Uploaded_Image_BBC'] = 'Du kannst diesen BBCode benutzen, um das Bild zu posten.';
$lang['Upload_Image_Empty'] = 'Das Bild konnte nicht hochgeladen werden!';
$lang['Upload_File_Too_Big'] = 'Das Bild, das du hochladen wolltest, ist zu groß! Max erlaubte Größe:';
$lang['Upload_File_Type_Allowed'] = 'Nur diese Datei-Arten können hochgeladen werden';
$lang['Upload_Insert_Image'] = 'Füge BBCode ein';
$lang['Upload_Close'] = 'Schließen';
$lang['BBCode'] = 'BBCode';

$lang['No_News'] = 'Keine News';

$lang['Email_confirm'] = 'Bestätige deine E-Mail-Adresse';
$lang['Email_mismatch'] = 'Die E-Mail-Adressen die du eingegeben hast, sind nicht gleich.';

$lang['View_ballot'] = 'Zeige Abstimmung';
$lang['Full_edit'] = 'Zur vollständigen Bearbeitungsansicht wechseln';
$lang['Save_changes'] = 'Speichern';
$lang['No_subject'] = '(Kein Betreff)';
$lang['Edit_quick_post'] = 'Schnellbearbeitung dieses Beitrags';
$lang['AJAX_search_results'] = 'Eine Schnellsuche hat %s Themen mit den Schlüsselwörtern aus Deinem Thementitel gefunden. Klickt hier, um diese Themen anzusehen.';
$lang['AJAX_search_result'] = 'Eine Schnellsuche hat ein Thema mit den Schlüsselwörtern aus Deinem Thementitel gefunden. Klickt hier, um dieses Thema anzusehen.';
$lang['More_matches_username'] = 'Mehr als ein Benutzer paßt zu deiner Anfrage. Bitte wähle einen aus der obigen Box aus.';
$lang['No_username'] = 'Du mußt einen Benutzernamen eingeben.';
$lang['AJAX_quick_search_results'] = 'Eine Schnellsuche hat %s Themen mit diesen Schlüsselwörtern gefunden.<br />Rechts kannst du die ersten Ergebnisse sehen.<br />Klicke auf SUCHEN, um die komplette Ergebnisliste zu erhalten.';
$lang['AJAX_quick_search_result'] = 'Eine Schnellsuche hat ein Thema mit diesen Schlüsselwörtern gefunden.<br />Rechts kannst du das Ergebnis sehen.';

$lang['Icon_Description'] = 'Icon Beschreibung';

$lang['Feature_Disabled'] = 'Diese Funktion wurde deaktiviert.';

// Resend Activation - BEGIN
$lang['Resend_activation_email'] = 'Erneutes Senden der Aktivierungs E-Mail';
$lang['Invalid_activation'] = 'Benutzer-Konto Aktivierung kann nur vom einem Administrator durchgeführt werden.';
$lang['No_actkey'] = 'Es existiert kein Aktivierung-Schlüssel für Dein Konto. Bitte kontaktiere den Administrator für mehr Informationen.';
$lang['Send_actmail_flood_error'] = 'Du kannst nicht so schnell eine erneute Anfrage nach deiner letzten senden! Bitte versuche es später nocheinmal.';
$lang['Resend_activation_email_done'] = 'Die Aktivierungs E-Mail wurde gesendet. Bitte prüfe dein E-Mail Postfach für weitere Informationen.';
// Resend Activation - END

$lang['Bots_Group'] = 'Bots';
$lang['Bots_Color'] = 'Bots Farbe';
$lang['Active_Users_Group'] = 'Aktive Benutzer';
$lang['Active_Users_Color'] = 'Aktive Benutzer Farbe';
$lang['Group_Default_Membership'] = 'Standard Gruppe';
$lang['Group_Default_Membership_Explain'] = 'Wähle die Standard Gruppe für Benutzer, um Ihnen einen Rang und die Farbe zuzuweisen.';
$lang['User_Color'] = 'Benutzer Farbe';
$lang['User_Color_Explain'] = 'Wenn Du eine Farbe für diesen Benutzer bestimmst, wird dies mit der Standard Gruppe überschrieben, wenn Du oben eine angegeben hast. Benutze den HEX Code ohne <b>#</b> Beispiel: ff0000 ist der Code für ROT.';
$lang['No_Groups_Membership'] = 'Keine Mitgliedschaft';
$lang['No_Default_Group'] = 'Keine Standard Gruppe';
$lang['Group_members_updated'] = 'Gruppen Mitglieder wurden erfolgreich aktualisiert.';
$lang['Colorize_All'] = 'Färbe alle Mitglieder';
$lang['Colorize_Selected'] = 'Färbe ausgewählte';

$lang['CompanyWho'] = 'Das Unternehmen';
$lang['CompanyWhere'] = 'Wie du uns erreichst';
$lang['CompanyServices'] = 'Services';
$lang['CompanyProducts'] = 'Produkte';

$lang['ShareThisTopic'] = 'Verteile dieses Thema';

$lang['Remove_cookies'] = 'Entferne die Cookies die von dieser Seite gesetzt wurden';
$lang['Cookies_deleted'] = 'Alle Cookies wurden gelöscht. Du bist nun ausgeloggt.<br />Um das Löschen abzuschliessen musst Du nun deinen Browser schliessen.';
$lang['Delete_cookies'] = 'Entferne Cookies';
$lang['cookies_confirm'] = 'Bist Du sicher das Du alle Cookies die von dieser Seite gesetzt wurden, löschen willst?<br /><br />Diese Aktion wird Dich auch automatisch ausloggen.';

$lang['CustomIcy'] = 'CustomIcy';

$lang['Drafts'] = 'Entwürfe';
$lang['Drafts_Action'] = 'Aktion';
$lang['Drafts_Save'] = 'Speichern';
$lang['Drafts_Load'] = 'Laden';
$lang['Drafts_Saved'] = 'Dieser Entwurf wurde gespeichert';
$lang['Drafts_Loaded'] = 'Entwurf geladen';
$lang['Drafts_No_Drafts'] = 'Keine Entwürfe gespeichert';
$lang['Drafts_Delete_Sel'] = 'Lösche ausgewählte';
$lang['Drafts_Save_Question'] = '<br /><br />Bist Du Dir sicher diese Nachricht als Entwurf zu speichern?<br /><br />Bitte beachte das nur der Mitteilungstext gespeichert wird, alle anderen Einstellungen werden verworfen.';
$lang['Drafts_Delete_Question'] = '<br /><br />Bist Du Dir sicher alle ausgewählten Entwürfe zu löschen?';
$lang['Drafts_Type'] = 'Entwurf Typ';
$lang['Drafts_Subject'] = 'Entwurf Titel';
$lang['Drafts_NT'] = 'Neues Thema';
$lang['Drafts_NM'] = 'Antworten';
$lang['Drafts_NPM'] = 'Private Nachricht';

$lang['CannotEditAdminsPosts'] = 'Du kannst keine Administrator Beiträge bearbeiten';
$lang['Random_Number'] = 'Zufällige Nummer';

$lang['New_download'] = 'Ein neuer Download wurde hinzugefügt oder aktualisiert.<br />Klicke %shier%s um ihn zu sehen.';
$lang['Dl_bug_tracker'] = 'Bug Tracker';
$lang['Downloads_ADV'] = 'Downloads ADV';

$lang['TopicUseful'] = 'War das Thema hilfreich?';
$lang['Article'] = 'Artikel';
$lang['Comments'] = 'Kommentare';

$lang['Sitemap'] = 'Sitemap';

$lang['Delete_My_Account'] = 'Benutzer-Konto löschen';
$lang['Delete_My_Account_Explain'] = 'Wenn du dein Benutzer-Konto auf dieser Seite löschen möchtest, dann schicke bitte einen Antrag unter Benutzung dieses Formulars und dein Konto wird so bald wie möglich gesperrt.<br />Bitte gib "Konto-Löschung" im Betreff an und (wenn du möchtest) schreib den Grund in wenigen Worten.';

$lang['KB_MODE_ON'] = 'Aktiviere KB Methode';
$lang['KB_MODE_OFF'] = 'Deaktiviere KB Methode';

$lang['Go_To_Page_Number'] = 'Gehe zur Seite';

$lang['Admin_Emails'] = 'Administratoren können mir Informationen per E-Mail senden';
$lang['Allow_PM_IN'] = 'Erlaube Benutzer mir private Nachrichten zu schreiben';
$lang['Allow_PM_IN_Explain'] = 'Denke daran, daß diese Oprion den Administratoren, Moderatoren und Freunden erlaubt, dir jederzeit eine Nachricht schreiben zu können.';
$lang['Allow_PM_IN_SEND_ERROR'] = 'Der Benutzer, dem du eine PN senden wolltest, könnte deine Mitteilung nicht empfangen, da er private Mitteilungen nicht empfangen möchte.';

//$lang['UCP_ZEBRA'] = 'Freunde &amp; Feinde';
$lang['UCP_ZEBRA'] = 'Freund-Verwaltung';
$lang['UCP_ZEBRA_FOES'] = 'Feinde verwalten';
$lang['UCP_ZEBRA_FRIENDS'] = 'Freunde verwalten';

$lang['ADD_FOES'] = 'Neue Feinde hinzufügen';
$lang['ADD_FOES_EXPLAIN'] = 'Du kannst mehrere Benutzernamen, jeden auf einer anderen Linie eintragen.';
$lang['YOUR_FOES'] = 'Deine Feinde';
$lang['YOUR_FOES_EXPLAIN'] = 'Um Benutzernamen zu entfernen wähle sie aus und klicke absenden.<br />Tipp zum Auswählen: Benutze STRG + anklicken des Namens um mehrere auszuwählen.';
$lang['FOE_MESSAGE'] = 'Nachricht von Feinden';
$lang['FOES_EXPLAIN'] = 'Feinde sind Benutzer, die normalerweise ignoriert werden. Einträge dieser Benutzer werden nicht vollständig sichtbar sein. Persönliche Mitteilungen von den Feinden sind jedoch gestattet. Nachrichten von Moderatoren oder Administratoren kannst du allerdings nicht ignorieren.';
$lang['FOES_UPDATED'] = 'Deine Feind-Liste wurde erfolgreich aktualisiert.';
$lang['FOES_UPDATE_ERROR'] = 'Deine Feind-Liste wurde nicht aktualisiert.';
$lang['NO_FOES'] = 'z.Z. keine Feinde definiert';

$lang['ADD_FRIENDS'] = 'Neue Freunde hinzufügen';
$lang['ADD_FRIENDS_EXPLAIN'] = 'Du kannst mehrere Benutzernamen, jeden auf einer anderen Linie eintragen.';
$lang['YOUR_FRIENDS'] = 'Deine Freunde';
$lang['YOUR_FRIENDS_EXPLAIN'] = 'Um Benutzernamen zu entfernen wähle sie aus und klicke absenden.<br />Tipp zum Auswählen: Benutze STRG + anklicken des Namens um mehrere auszuwählen.';
$lang['FRIEND_MESSAGE'] = 'Nachricht von Freunden';
$lang['FRIENDS'] = 'Freunde';
$lang['FRIENDS_EXPLAIN'] = 'Schnellzugriff zu Freunden ermöglichen mit denen du häufig kommunizierst. Wenn das Template die Möglichkeit unterstützt, werden alle Einträge hervorgehoben, die von Freunden erstellt wurden.';
$lang['FRIENDS_UPDATED'] = 'Deine Freunde-Liste wurde erfolgreich aktualisiert.';
$lang['FRIENDS_UPDATE_ERROR'] = 'Deine Freunde-Liste wurde nicht aktualisiert.';
$lang['FRIENDS_ONLINE'] = 'Online';
$lang['FRIENDS_HIDDEN'] = 'Versteckt';
$lang['FRIENDS_OFFLINE'] = 'Offline';
$lang['NO_FRIENDS'] = 'z.Z. keine Freunde definiert';
$lang['NO_FRIENDS_OFFLINE'] = 'Keine Freunde offline';
$lang['NO_FRIENDS_ONLINE'] = 'Keine Freunde online';

$lang['Default'] = 'Standard';

$lang['Reserved_Author'] = '[ VERSTECKT ]';
$lang['Reserved_Topic'] = '[ THEMA VERBEHALTEN ]';
$lang['Reserved_Post'] = '[ BEITRAG VORBEHALTEN ]';

$lang['THANKS_RECEIVED'] = 'Thanks received';

$lang['RECENT_USER_ACTIVITY'] = 'Recent user activity';
$lang['USER_TOPICS_STARTED'] = 'Topics started';
$lang['USER_POSTS'] = 'Posts written';
$lang['USER_TOPICS_VIEWS'] = 'Topic viewed';
$lang['RECENT_USER_STARTED_TITLE'] = 'started by %s';
$lang['RECENT_USER_STARTED_NAV'] = 'Topics started by %s';
$lang['RECENT_USER_POSTS_TITLE'] = 'which %s posted in';
$lang['RECENT_USER_POSTS_NAV'] = 'Topics which %s posted in';
$lang['RECENT_USER_VIEWS_TITLE'] = 'viewed by %s';
$lang['RECENT_USER_VIEWS_NAV'] = 'Topics viewed by %s';

$lang['WARN_NO_BUMP'] = 'You are the last poster in this topic: you cannot write new posts within 24 hours from your last post unless someone else answers in the meantime.';

$lang['LINK_THIS_TOPIC'] = 'Link this topic';
$lang['LINK_URL'] = 'URL';
$lang['LINK_BBCODE'] = 'BBCode';
$lang['LINK_HTML'] = 'HTML';

$lang['NEWS_POSTED'] = 'Browse news posted';
$lang['TOPICS_POSTED'] = 'Search topics started';
$lang['POSTS_POSTED'] = 'Search all user posts';

$lang['ACCOUNT_DELETION_REQUEST'] = 'User %s requested to delete the account.';

$lang['SORT_TOPICS'] = 'Sort topics';
$lang['SORT_TOPICS_NEWEST'] = 'Newest';
$lang['SORT_TOPICS_OLDEST'] = 'Oldest';

//$lang[''] = '';

//====================================================
// Keine weiteren Einträge nach dieser Zeile einfügen.
//====================================================

?>