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
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
* TheSteffen, KugeLSichA, Tom, Carsten
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
	'Home' => 'Startseite',
	'Forum' => 'Forum',
	'Category' => 'Kategorie',
	'Topic' => 'Thema',
	'Topics' => 'Themen',
	'Replies' => 'Antworten',
	'Views' => 'Aufrufe',
	'Post' => 'Beitrag',
	'Posts' => 'Beiträge',
	'Posted' => 'Verfasst am',
	'Username' => 'Benutzername',
	'Password' => 'Passwort',
	'Email' => 'E-Mail',
	'Poster' => 'Poster',
	'Author' => 'Autor',
	'Time' => 'Zeit',
	'Hours' => 'Stunden',
	'Message' => 'Nachricht',

	'1_DAY' => '1 Tag',
	'7_DAYS' => '7 Tage',
	'2_WEEKS' => '2 Wochen',
	'1_MONTH' => '1 Monat',
	'3_MONTHS' => '3 Monate',
	'6_MONTHS' => '6 Monate',
	'1_YEAR' => '1 Jahr',

	'Go' => 'Los',
	'Jump_to' => 'Gehe zu',
	'Submit' => 'Absenden',
	'Reset' => 'Zurücksetzen',
	'Cancel' => 'Abbrechen',
	'Preview' => 'Vorschau',
	'Confirm' => 'Bestätigen',
	'Spellcheck' => 'Rechtschreibprüfung',
	'Yes' => 'Ja',
	'No' => 'Nein',
	'Enabled' => 'Aktiviert',
	'Disabled' => 'Deaktiviert',
	'Error' => 'Fehler',

	'GO' => 'Los',
	'JUMP_TO' => 'Gehe zu',
	'SUBMIT' => 'Absenden',
	'RESET' => 'Zurücksetzen',
	'CANCEL' => 'Abbrechen',
	'PREVIEW' => 'Vorschau',
	'CONFIRM' => 'Bestätigen',
	'YES' => 'Ja',
	'NO' => 'Nein',
	'ENABLED' => 'Aktiviert',
	'DISABLED' => 'Deaktiviert',
	'ERROR' => 'Fehler',

	'Next' => 'Weiter',
	'Previous' => 'Zurück',
	'Goto_page' => 'Gehe zu Seite',
	'Joined' => 'Anmeldung',
	'IP_Address' => 'IP-Adresse',

	'Select_forum' => 'Forum auswählen',
	'View_latest_post' => 'Letzten Beitrag anzeigen',
	'View_newest_post' => 'Neuesten Beitrag anzeigen',
	'Page_of' => 'Seite <b>%d</b> von <b>%d</b>', // Replaces with: Page 1 of 2 for example

	'AIM' => 'AIM Address',
	'ICQ' => 'ICQ Number',
	'JABBER' => 'Jabber',
	'MSNM' => 'MSN Live',
	'SKYPE' => 'Skype',
	'YIM' => 'Yahoo Messenger',

	'Forum_Index' => 'Forum',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Neues Thema eröffnen',
	'Reply_to_topic' => 'Neue Antwort erstellen',
	'Reply_with_quote' => 'Antworten mit Zitat',

	'Click_return_login' => 'Klicke %shier%s, um es noch einmal zu versuchen.',
	'Click_return_index' => 'Klicke %shier%s, um zum Index zurückzukehren.',
	'Click_return_forum' => 'Klicke %shier%s, um zum Forum zurückzukehren.',
	'Click_return_topic' => 'Klicke %shier%s, um zum Thema zurückzukehren.', // %s's here are for uris, do not remove!
	'Click_return_viewtopic' => 'Klicke %shier%s, um zum Thema zurückzukehren.',
	'Click_return_modcp' => 'Klicke %shier%s, um zur Moderatorenkontrolle zurückzukehren.',
	'Click_return_profile' => 'Klicke %shier%s, um zum Benutzer Profil zurückzukehren.',
	'Click_return_preferences' => 'Klicke %shier%s, um zu den Einstellungen zurückzukehren.',
	'Click_return_group' => 'Klicke %shier%s, um zur Gruppeninfo zurückzukehren.',
	'Click_return_drafts' => 'Klicke %shier%s, um zu den Entwürfen zurückzukehren.',
	'Click_return_inbox' => 'Klicke %shier%s, um zum Posteingang zurückzukehren.',
	'Click_view_message' => 'Klicke %shier%s, um deine Nachricht anzuzeigen.',
	'Click_view_privmsg' => 'Klicke %shier%s, um deinen Posteingang anzuschauen.',

	'Admin_panel' => 'Admin-Bereich',

	'Board_disabled' => 'Entschuldigung, aber dieses Board ist im Moment nicht verfügbar. Probier es bitte später wieder.',

// Global Header strings
	'Registered_users' => 'Registrierte Benutzer:',
	'Browsing_forum' => 'Benutzer in diesem Forum:',
	'Online_users_zero_total' => 'Insgesamt sind <b>0</b> Benutzer online: ',
	'Online_users_total' => 'Insgesamt sind <b>%d</b> Benutzer online: ',
	'Online_user_total' => 'Insgesamt ist <b>ein</b> Benutzer online: ',
	'AC_Online_users_zero_total' => 'Insgesamt sind <b>0</b> Benutzer im Chat: ',
	'AC_Online_users_total' => 'Insgesamt sind <b>%d</b> Benutzer im Chat: ',
	'AC_Online_user_total' => 'Insgesamt ist <b>1</b> Benutzer im Chat: ',
	'Reg_users_zero_total' => 'Kein registrierter, ',
	'Reg_users_total' => '%d registrierte, ',
	'Reg_user_total' => 'Ein registrierter, ',
	'Hidden_users_zero_total' => 'kein versteckter und ',
	'Hidden_user_total' => 'ein versteckter und ',
	'Hidden_users_total' => '%d versteckte und ',
	'Guest_users_zero_total' => 'kein Gast',
	'Guest_users_total' => '%d Gäste',
	'Guest_user_total' => 'ein Gast',
	'Record_online_users' => 'Der Rekord liegt bei <b>%s</b> Benutzern am %s.', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sAdministrator%s',
	'Mod_online_color' => '%sModerator%s',

	'You_last_visit' => 'Dein letzter Besuch war am: %s', // %s replaced by date/time
	'Current_time' => 'Aktuelles Datum und Uhrzeit: %s', // %s replaced by time

	'Search_new' => 'Beiträge seit dem letzten Besuch',
	'Search_your_posts' => 'Eigene Beiträge',
	'Search_unanswered' => 'Unbeantw. Beiträge anzeigen',

	'Register' => 'Registrieren',
	'Profile' => 'Profil',
	'Edit_profile' => 'Profil bearbeiten',
	'Search' => 'Suchen',
	'Memberlist' => 'Mitgliederliste',
	'FAQ' => 'FAQ',
	'KB_title' => 'Wissensdatenbank',
	'BBCode_guide' => 'BBCode-Hilfe',
	'Usergroups' => 'Benutzergruppen',
	'Last_Post' => 'Letzter Beitrag',
	'Moderator' => '<b>Moderator</b>',
	'Moderators' => '<b>Moderatoren</b>',

// Stats block text
	'Posted_articles_zero_total' => 'Unsere Benutzer haben <b>noch keine</b> Beiträge geschrieben.', // Number of posts
	'Posted_articles_total' => 'Unsere Benutzer haben insgesamt <b>%d</b> Beiträge geschrieben.', // Number of posts
	'Posted_article_total' => 'Unsere Benutzer haben <b>einen</b> Beitrag geschrieben.', // Number of posts
	'Registered_users_zero_total' => 'Wir haben <b>keine</b> registrierten Benutzer.', // # registered users
	'Registered_users_total' => 'Wir haben <b>%d</b> registrierte Benutzer.', // # registered users
	'Registered_user_total' => 'Wir haben <b>einen</b> registrierten Benutzer.', // # registered users
	'Newest_user' => 'Der neueste Benutzer ist <b>%s%s%s</b>.', // a href, username, /a

	'No_new_posts_last_visit' => 'Keine neuen Beiträge seit deinem letzten Besuch',

	'No_new_posts_global_announcement' => 'Keine neuen Beiträge [Gl. Ank.]',
	'New_posts_global_announcement' => 'Neue Beiträge [Gl. Ank.]',
	'No_new_posts_announcement' => 'Keine neuen Beiträge [Ankündigung]',
	'New_posts_announcement' => 'Neue Beiträge [Ankündigung]',
	'No_new_posts_sticky' => 'Keine neuen Beiträge [Wichtig]',
	'New_posts_sticky' => 'Neue Beiträge [Wichtig]',
	'No_new_posts_locked' => 'Keine neuen Beiträge [Gesperrt]',
	'New_posts_locked' => 'Neue Beiträge [Gesperrt]',
	'No_new_posts' => 'Keine neuen Beiträge',
	'New_posts' => 'Neue Beiträge',
	'New_post' => 'Neuer Beitrag',
	'No_new_posts_hot' => 'Keine neuen Beiträge [Top-Thema]',
	'New_posts_hot' => 'Neue Beiträge [Top-Thema]',

	'Forum_no_new_posts' => 'keine neuen Beiträge [Forum]',
	'Forum_new_posts' => 'Neue Beiträge [Forum]',
	'Cat_no_new_posts' => 'keine neuen Beiträge [Kategorie]',
	'Cat_new_posts' => 'Neue Beiträge [Kategorie]',
	'Forum_is_locked' => 'Forum ist gesperrt',

// Login
	'Enter_password' => 'Gib bitte deinen Benutzernamen und dein Passwort ein, um dich einzuloggen.',
	'Login' => 'Login',
	'Logout' => 'Logout',
	'Forgotten_password' => 'Passwort vergessen?',
	'AUTOLOGIN' => 'Bei jedem Besuch automatisch einloggen',
	'Error_login' => 'Du hast einen falschen oder inaktiven Benutzernamen oder ein falsches Passwort eingegeben.',

// Index page
	'No_Posts' => 'Keine Beiträge',
	'No_forums' => 'Dieses Board hat keine Foren.',

	'Private_Message' => 'Private Nachricht',
	'Private_Messages' => 'Private Nachrichten',
	'Who_is_Online' => 'Wer ist online?',

	'Mark_all_forums' => 'Alle Foren als gelesen markieren',
	'Forums_marked_read' => 'Alle Foren wurden als gelesen markiert.',

// Viewforum
	'View_forum' => 'Forum anzeigen',

	'Reached_on_error' => 'Fehler auf dieser Seite!',

	'Display_topics' => 'Siehe Beiträge der letzten',
	'ALL_TOPICS' => 'Alle Themen anzeigen',

	'Topic_News_nb' => 'News',
	'Topic_global_announcement_nb' => 'Globale Ankündigung',
	'Topic_Announcement_nb' => 'Ankündigungen',
	'Topic_Sticky_nb' => 'Wichtig',
	'Topic_Moved_nb' => 'Verschoben',
	'Topic_Poll_nb' => 'Umfrage',
	'Topic_Event_nb' => 'Event',
	'Topic_Announcement' => '<b>Ankündigungen:</b>',
	'Topic_Sticky' => '<b>Wichtig:</b>',
	'Topic_Moved' => '<b>Verschoben:</b>',
	'Topic_Poll' => '<b>Umfrage:</b>',
	'Topic_Event' => '<b>Event:</b>',
	'Topic_global_announcement' => '<b>Globale Ankündigung:</b>',
	'Post_global_announcement' => 'Globale Ankündigung',


	'Mark_all_topics' => 'Alle Themen als gelesen markieren',
	'Topics_marked_read' => 'Alle Themen wurden als gelesen markiert.',

/*
	'Rules_post_can' => 'You <b>can</b> post new topics in this forum',
	'Rules_post_cannot' => 'You <b>cannot</b> post new topics in this forum',
	'Rules_reply_can' => 'You <b>can</b> reply to topics in this forum',
	'Rules_reply_can_own' => 'You <b>can</b> reply to your topics in this forum',
	'Rules_reply_cannot' => 'You <b>cannot</b> reply to topics in this forum',
	'Rules_edit_can' => 'You <b>can</b> edit your posts in this forum',
	'Rules_edit_cannot' => 'You <b>cannot</b> edit your posts in this forum',
	'Rules_delete_can' => 'You <b>can</b> delete your posts in this forum',
	'Rules_delete_cannot' => 'You <b>cannot</b> delete your posts in this forum',
	'Rules_vote_can' => 'You <b>can</b> vote in polls in this forum',
	'Rules_vote_cannot' => 'You <b>cannot</b> vote in polls in this forum',
*/
	'Rules_post_can' => 'Du <b>kannst</b> neue Themen erstellen.',
	'Rules_post_cannot' => 'Du <b>kannst keine</b> neuen Themen erstellen.',
	'Rules_reply_can' => 'Du <b>kannst</b> auf Beiträge antworten.',
	'Rules_reply_can_own' => 'Du <b>kannst</b> auf deine Beiträge antworten.',
	'Rules_reply_cannot' => 'Du <b>kannst nicht</b> auf Beiträge antworten.',
	'Rules_edit_can' => 'Du <b>kannst</b> deine Beiträge bearbeiten.',
	'Rules_edit_cannot' => 'Du <b>kannst</b> deine Beiträge <b>nicht</b> bearbeiten.',
	'Rules_delete_can' => 'Du <b>kannst</b> deine Beiträge löschen.',
	'Rules_delete_cannot' => 'Du <b>kannst</b> deine Beiträge <b>nicht</b> löschen.',
	'Rules_vote_can' => 'Du <b>kannst</b> an Umfragen teilnehmen.',
	'Rules_vote_cannot' => 'Du <b>kannst nicht</b> an Umfragen teilnehmen.',
	'Rules_moderate' => 'Du <b>kannst</b> %sdieses Forum moderieren%s.', // %s replaced by a href links, do not remove!

// 'No_topics_post_one' => 'There are no posts in this forum.<br />Click on the <b>Post New Topic</b> link on this page to post one.',
	'No_topics_post_one' => 'In diesem Forum sind keine Beiträge vorhanden.<br />Klicke auf <b>Neues Thema</b>, um den ersten Beitrag zu erstellen.',

// Viewtopic
	'View_topic' => 'Thema anzeigen',

	'Guest' => 'Gast',
	'Post_subject' => 'Titel',
	'View_next_topic' => 'Nächstes Thema anzeigen',
	'View_previous_topic' => 'Vorheriges Thema anzeigen',
	'Submit_vote' => 'Stimme absenden',
	'View_results' => 'Ergebnis anzeigen',

	'No_newer_topics' => 'Es gibt keine neueren Themen in diesem Forum.',
	'No_older_topics' => 'Es gibt keine älteren Themen in diesem Forum.',
	'No_posts_topic' => 'Es existieren keine Beiträge zu diesem Thema.',

	'Display_posts' => 'Beiträge der letzten Zeit anzeigen',
	'ALL_POSTS' => 'Alle Beiträge',
	'Newest_First' => 'Die neuesten zuerst',
	'Oldest_First' => 'Die ältesten zuerst',

	'Back_to_top' => 'Nach oben',
	'Back_to_bottom' => 'Nach unten',

	'Read_profile' => 'Benutzer-Profile anzeigen',
	'Send_email' => 'E-Mail an diesen Benutzer senden',
	'Visit_website' => 'Website dieses Benutzers besuchen',
	'ICQ_status' => 'ICQ-Status',
	'Edit_delete_post' => 'Beitrag bearbeiten oder löschen',
	'View_IP' => 'IP-Adresse zeigen',
	'Delete_post' => 'Beitrag löschen',

	'wrote' => 'hat folgendes geschrieben', // proceeds the username and is followed by the quoted text
	'Quote' => 'Zitat', // comes before bbcode quote output.
	'Code' => 'Code', // comes before bbcode code output.

	'Edited_time_total' => 'Zuletzt bearbeitet von %s am %s, insgesamt einmal bearbeitet', // Last edited by me on 12 Oct 2001, edited 1 time in total
	'Edited_times_total' => 'Zuletzt bearbeitet von %s am %s, insgesamt %d-mal bearbeitet', // Last edited by me on 12 Oct 2001, edited 2 times in total

	'Lock_topic' => 'Thema sperren',
	'Unlock_topic' => 'Thema entsperren',
	'Move_topic' => 'Thema verschieben',
	'Delete_topic' => 'Thema löschen',
	'Split_topic' => 'Thema teilen',

	'Stop_watching_topic' => 'Bei Antworten zu diesem Thema nicht mehr benachrichtigen',
	'Start_watching_topic' => 'Bei Antworten zu diesem Thema benachrichtigen',
	'No_longer_watching' => 'Das Thema wird nicht mehr von Dir beobachtet.',
	'You_are_watching' => 'Du beobachtest nun das Thema.',

	'Total_votes' => 'Stimmen insgesamt',

// Posting/Replying (Not private messaging!)
	'Message_body' => 'Nachrichtentext',
	'Topic_review' => 'Thema-Überblick',

	'No_post_mode' => 'Kein Eintrags-Modus ausgewählt', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

	'Post_a_new_topic' => 'Neues Thema schreiben',
	'Post_a_reply' => 'Antwort schreiben',
	'Post_topic_as' => 'Thema schreiben als',
	'Edit_Post' => 'Beitrag editieren',
	'Options' => 'Optionen',

	'PM_Read' => 'PN gelesen',
	'PM_Unread' => 'PN ungelesen',
	'PM_Replied' => 'PN beantwortet',

	'Post_Announcement' => 'Ankündigung',
	'New_post_Announcement' => 'Neue Ankündigung',
	'Post_Sticky' => 'Wichtig',
	'New_post_Sticky' => 'Neu Wichtig',
	'Post_Normal' => 'Normal',

	'Confirm_delete' => 'Sicher, dass dieser Beitrag gelöscht werden soll?',
	'Confirm_delete_poll' => 'Sicher, dass diese Umfrage gelöscht werden soll?',

	'Flood_Error' => 'Du kannst einen Beitrag nicht so schnell nach deinem letzten absenden, bitte warte einen Augenblick.',
	'Empty_subject' => 'Bei einem neuen Thema musst du einen Titel angeben.',
	'Empty_message' => 'Du musst zu deinem Beitrag einen Text eingeben.',
	'Forum_locked' => 'Dieses Forum ist gesperrt, du kannst keine Beiträge editieren, schreiben oder beantworten.',
	'Topic_locked' => 'Dieses Thema ist gesperrt, du kannst keine Beiträge editieren oder beantworten.',
	'No_post_id' => 'Du musst einen Beitrag zum editieren auswählen.',
	'No_topic_id' => 'Du musst ein Thema für deine Antwort auswählen.',
	'No_valid_mode' => 'Du kannst nur Beiträge schreiben, bearbeiten, beantworten und zitieren. Versuch es noch einmal.',
	'No_such_post' => 'Es existiert kein solcher Beitrag. Versuch es noch einmal.',
	'Edit_own_posts' => 'Du kannst nur deine eigenen Beiträge bearbeiten.',
	'Delete_own_posts' => 'Du kannst nur deine eigenen Beiträge löschen.',
	'Cannot_delete_replied' => 'Du kannst keine Beiträge löschen, die schon beantwortet wurden.',
	'Cannot_delete_poll' => 'Du kannst keine aktiven Umfrage löschen.',
	'Empty_poll_title' => 'Du musst einen Titel für die Umfrage eingeben.',
	'To_few_poll_options' => 'Du musst mindestens zwei Antworten für die Umfrage angeben.',
	'To_many_poll_options' => 'Du hast zu viele Antworten für die Umfrage angegeben',
	'Post_has_no_poll' => 'Dieser Beitrag hat keine Umfrage.',
	'Already_voted' => 'Du hast an dieser Umfrage schon teilgenommen.',
	'No_vote_option' => 'Du musst eine Auswahl treffen, um abzustimmen.',

	'Add_poll' => 'Umfrage hinzufügen',
	'Add_poll_explain' => 'Wenn du keine Umfrage zum Thema hinzufügen willst, lass die Felder leer.',
	'Poll_question' => 'Frage',
	'Poll_option' => 'Antwort',
	'Add_option' => 'Antwort hinzufügen',
	'Update' => 'Aktualisieren',
	'Delete' => 'Löschen',
	'Poll_for' => 'Dauer der Umfrage:',
	'Days' => 'Tage', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Gib 0 ein oder lass dieses Feld leer, um die Umfrage auf unbeschränkte Zeit durchzuführen ]',
	'Delete_poll' => 'Umfrage löschen',

	'POST_ENABLE_BBCODE' => 'Enable BBCode in this post',
	'POST_ENABLE_SMILEYS' => 'Enable Smileys in this post',
	'POST_ENABLE_HTML' => 'Enable HTML in this post',
	'POST_ENABLE_ACRO_AUTO' => 'Enable Acronyms and Autolinks in this post',
	'Disable_HTML_post' => 'HTML in diesem Beitrag deaktivieren',
	'Disable_ACRO_AUTO_post' => 'Abkürzungserklärungen und Autolinks in diesem Beitrag deaktivieren',
	'Disable_BBCode_post' => 'BBCode in diesem Beitrag deaktivieren',
	'Disable_Smilies_post' => 'Smilies in diesem Beitrag deaktivieren',

	'HTML_is_ON' => 'HTML ist <u>an</u>',
	'HTML_is_OFF' => 'HTML ist <u>aus</u>',
	'BBCode_is_ON' => '%sBBCode%s ist <u>an</u>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => '%sBBCode%s ist <u>aus</u>',
	'Smilies_are_ON' => 'Smilies sind <u>an</u>',
	'Smilies_are_OFF' => 'Smilies sind <u>aus</u>',

	'Attach_signature' => 'Signatur anhängen (Signatur kann im Profil geändert werden)',
	'Notify' => 'Benachrichtigt mich, wenn eine Antwort geschrieben wurde',
	'Delete_post' => 'Diesen Beitrag löschen',

	'Stored' => 'Deine Nachricht wurde erfolgreich eingetragen.',
	'Deleted' => 'Deine Nachricht wurde erfolgreich gelöscht.',
	'Poll_delete' => 'Deine Umfrage wurde erfolgreich gelöscht.',
	'Vote_cast' => 'Deine Stimme wurde gezählt.',

	'Topic_reply_notification' => 'Benachrichtigen bei Antworten',

	'Emoticons' => 'Smilies',
	'More_emoticons' => 'Weitere Smilies ansehen',

// Private Messaging
	'Private_Messaging' => 'Private Nachrichten',

	'Login_check_pm' => 'Einloggen, um private Nachrichten zu lesen',
	'New_pms' => 'Du hast %d neue Nachrichten', // You have 2 new messages
	'New_pm' => 'Du hast 1 neue Nachricht', // You have 1 new message
	'No_new_pm' => 'Du hast keine neuen Nachrichten',
	'Unread_pms' => 'Du hast %d ungelesene Nachrichten',
	'Unread_pm' => 'Du hast 1 ungelesene Nachricht',
	'No_unread_pm' => 'Du hast keine ungelesenen Nachrichten',
	'You_new_pm' => 'Eine neue private Nachricht befindet sich in deinem Posteingang',
	'You_new_pms' => 'Es befinden sich neue private Nachrichten in deinem Posteingang',
	'You_no_new_pm' => 'Es sind keine neuen privaten Nachrichten vorhanden',

	'Unread_message' => 'Ungelesene Nachricht',
	'Read_message' => 'Gelesene Nachricht',

	'Read_pm' => 'Nachricht lesen',
	'Post_new_pm' => 'Nachricht schreiben',
	'Post_reply_pm' => 'Auf Nachricht antworten',
	'Post_quote_pm' => 'Nachricht zitieren',
	'Edit_pm' => 'Nachricht bearbeiten',

	'Inbox' => 'Posteingang',
	'Outbox' => 'Postausgang',
	'Savebox' => 'Archiv',
	'Sentbox' => 'Gesendete Nachrichten',
	'Flag' => 'Flagge',
	'Subject' => 'Titel',
	'From' => 'Von',
	'To' => 'An',
	'Date' => 'Datum',
	'Mark' => 'Markiert',
	'Sent' => 'Gesendet',
	'Saved' => 'Gespeichert',
	'Delete_marked' => 'Markierte löschen',
	'Delete_all' => 'Alle löschen',
	'Save_marked' => 'Markierte speichern',
	'Download_marked' => 'Markierte herunterladen',
	'Mailbox' => 'E-Mail-Konto',
	'Save_message' => 'Nachricht speichern',
	'Delete_message' => 'Nachricht löschen',
	'Next_privmsg' => 'Nächste Private Nachricht',
	'Previous_privmsg' => 'Vorherige Private Nachricht',
	'No_newer_pm' => 'Es gibt keine neuere Private Nachricht.',
	'No_older_pm' => 'Es gibt keine ältere Private Nachricht.',
	'Display_messages' => 'Nachrichten anzeigen der letzten', // Followed by number of days/weeks/months
	'All_Messages' => 'Alle Nachrichten',

	'No_messages_folder' => 'Es sind keine weiteren Nachrichten in diesem Ordner.',

	'PM_disabled' => 'Private Nachrichten wurden in diesem Board deaktiviert.',
	'Cannot_send_privmsg' => 'Der Administrator hat private Nachrichten für dich gesperrt.',
	'No_to_user' => 'Du musst einen Benutzernamen angeben, um diese Nachricht zu senden.',

	'Disable_HTML_pm' => 'HTML in dieser Nachricht deaktivieren',
	'Disable_ACRO_AUTO_pm' => 'Abkürzungserklärungen und Autolinks in dieser Nachricht deaktivieren',
	'Disable_BBCode_pm' => 'BBCode in dieser Nachricht deaktivieren',
	'Disable_Smilies_pm' => 'Smilies in dieser Nachricht deaktivieren',

	'Message_sent' => 'Deine Nachricht wurde gesendet.',

	'Send_a_new_message' => 'Neue Nachricht senden',
	'Send_a_reply' => 'Auf private Nachricht antworten',
	'Edit_message' => 'Private Nachricht bearbeiten',

	'Notification_subject' => 'Eine neue private Nachricht ist eingetroffen!',

	'FIND_USERNAME' => 'Benutzernamen finden',
	'Find' => 'Finden',
	'No_match' => 'Keine Ergebnisse gefunden.',

	'No_post_id' => 'Es wurde keine Beitrags-ID angegeben.',
	'No_such_folder' => 'Es existiert kein solcher Ordner.',
	'No_folder' => 'Kein Ordner ausgewählt',

	'Mark_all' => 'Alle markieren',
	'Unmark_all' => 'Markierungen aufheben',

	'Confirm_delete_pm' => 'Diese Nachricht wirklich löschen?',
	'Confirm_delete_pms' => 'Diese Nachrichten wirklich löschen?',

	'Inbox_size' => 'Dein Posteingang ist zu %d%% voll', // eg. Your Inbox is 50% full
	'Sentbox_size' => 'Deine gesendeten Nachrichten sind zu %d%% voll',
	'Savebox_size' => 'Dein Archiv ist zu %d%% voll',

// Profiles/Registration
	'Viewing_user_profile' => 'Profil anzeigen : %s', // %s is username
	'About_user' => 'Alles über %s',
//Start Quick Administrator User Options and Information MOD
	'Quick_admin_options' => 'Schnelladministration: Benutzeroptionen und Information',
	'Admin_edit_profile' => 'Bearbeite Benutzer Profil',
	'Admin_edit_permissions' => 'Bearbeite Benutzer Berechtigungen',
	'User_active' => 'Benutzer <b>ist</b> aktiv',
	'User_not_active' => 'Benutzer <b>ist nicht</b> aktiv',
	'Username_banned' => 'Benutzername <b>ist</b> gesperrt',
	'Username_not_banned' => 'Benutzername <b>ist nicht</b> gesperrt',
	'USER_BAN' => 'Sperren',
	'USER_UNBAN' => 'Entsperren',
	'User_email_banned' => 'Die E-Mail von [ %s ] <b>ist</b> gesperrt',
	'User_email_not_banned' => 'Die E-Mail des Benutzers <b>ist nicht</b> gesperrt',
//End Quick Administrator User Options and Information MOD
	'Preferences' => 'Einstellungen',
	'Items_required' => 'Mit * markierte Felder sind erforderlich',
	'Registration_info' => 'Registrierungs-Informationen',
	'Profile_info' => 'Profil-Informationen',
	'Profile_info_warn' => 'Diese Informationen sind öffentlich abrufbar!',
	'Avatar_panel' => 'Avatar-Steuerung',
	'Avatar_gallery' => 'Avatar-Galerie',
	'NO_AVATAR_GALLERY' => 'Keine Avatar-Galerie verfügbar',

	'Website' => 'Webseite',
	'Location' => 'Wohnort',
	'Contact' => 'Kontakt',
	'Email_address' => 'E-Mail-Adresse',
	'Email' => 'E-Mail',
	'Send_private_message' => 'Private Nachricht senden',
	'Hidden_email' => '[ Versteckt ]',
	'Search_user_posts' => 'Beiträge von diesem Benutzer anzeigen',
	'Interests' => 'Interessen',
	'Occupation' => 'Beruf',
	'Poster_rank' => 'Rang',

	'Total_posts' => 'Beiträge insgesamt',
	'User_post_pct_stats' => '%.2f%% aller Beiträge', // 1.25% of total
	'User_post_day_stats' => '%.2f Beiträge pro Tag', // 1.5 posts per day
	'Search_user_posts' => 'Alle Beiträge von %s anzeigen', // Find all posts by username
	'Search_user_topics_started' => 'Finde alle Themen die von %s gestartet wurden', // Find all topics started by username

	'Wrong_Profile' => 'Du kannst nur dein eigenes Profil bearbeiten.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => 'Statistik',
	'Invision_Communicate' => 'Kontakt',
	'Invision_Info' => 'Information',
	'Invision_Member_Group' => 'Gruppenmitgliedschaft',
	'Invision_Member_Title' => 'Titel',
	'Invision_Most_Active' => 'Am aktivsten in',
	'Invision_Most_Active_Posts' => '%s Beiträge in diesem Forum',
	'Invision_Details' => 'Details',
	'Invision_PPD_Stats' => 'Beiträge pro Tag',
	'Invision_Signature' => 'Signatur',
	'Invision_Website' => 'Webseite',
	'Invision_Total_Posts' => 'Gesamtanzahl Beiträge',
	'Invision_User_post_pct_stats' => '(%.2f%% aller Beiträge im Forum)',
	'Invision_User_post_day_stats' => '%.2f Beiträge pro Tag',
	'Invision_Search_user_posts' => 'Zeige alle Beiträge dieses Benutzers',
	'Invision_Posting_details' => 'Beitragsdetails',
// Invision View Profile - END

	'Only_one_avatar' => 'Es kann nur ein Avatar ausgewählt werden',
	'File_no_data' => 'Die angegebene Datei enthält keine Daten',
	'No_connection_URL' => 'Es konnte keine Verbindung zur angegebenen Datei hergestellt werden',
	'Incomplete_URL' => 'Die angegebene URL ist unvollständig',
	'Wrong_remote_avatar_format' => 'Das Format des Avatars ist nicht gültig',
	'No_send_account_inactive' => 'Sorry, aber ein neues Passwort kann im Moment nicht gesendet werden, da dein Benutzer-Konto derzeit noch inaktiv ist. Bitte kontaktiere den Administrator für weitere Informationen.',

	'Always_smile' => 'Smilies immer aktivieren',
	'Always_html' => 'HTML immer aktivieren',
	'Always_bbcode' => 'BBCode immer aktivieren',
	'Always_add_sig' => 'Signatur immer anhängen',
	'Always_notify' => 'Bei Antworten immer benachrichtigen',
	'Always_notify_explain' => 'Sendet dir eine E-Mail, wenn jemand auf einen deiner Beiträge antwortet. Kann für jeden Beitrag geändert werden.',

	'Board_style' => 'Board-Style',
	'Board_lang' => 'Board-Sprache',
	'No_themes' => 'Keine Themes in der Datenbank',
	'Timezone' => 'Zeitzone',
	'Date_format' => 'Datum-Format',
	'Date_format_explain' => 'Die Syntax ist identisch mit der PHP-Funktion <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a>',
	'Signature' => 'Signatur',
	'Signature_explain' => 'Dies ist ein Text, der an jeden Beitrag von dir angehängt werden kann. Es besteht eine Limit von %d Buchstaben.',
	'Public_view_email' => 'Zeige meine E-Mail-Adresse immer an',

	'Current_password' => 'Altes Passwort',
	'New_password' => 'Neues Passwort',
	'Confirm_password' => 'Passwort bestätigen',
	'Confirm_password_explain' => 'Du musst dein Passwort angeben, wenn du dein Passwort oder deine Mailadresse ändern möchtest.',
	'password_if_changed' => 'Du musst nur dann ein neues Passwort angeben, wenn du es ändern willst',
	'password_confirm_if_changed' => 'Du musst dein neues Passwort bestätigen, wenn du es ändern willst',

	'Avatar' => 'Avatar',
	'Avatar_explain' => 'Zeigt eine kleine Grafik neben deinen Details zu jedem deiner Beiträge an. Es kann immer nur ein Avatar angezeigt werden, seine Breite darf nicht größer als %d Pixel sein, die Höhe nicht größer als %d Pixel, und die Dateigröße darf maximal %d KB betragen.',
	'Upload_Avatar_file' => 'Avatar von deinem Computer hochladen',
	'Upload_Avatar_URL' => 'Avatar von URL hochladen',
	'Upload_Avatar_URL_explain' => 'Gib die URL des gewünschten Avatars an, dieser wird dann kopiert',
	'Pick_local_Avatar' => 'Avatar aus der Galerie auswählen',
	'Link_remote_Avatar' => 'Zu einem externen Avatar linken',
	'Link_remote_Avatar_explain' => 'Gib die URL des Avatars ein, der gelinkt werden soll',
	'Avatar_URL' => 'URL des Avatars',
	'Select_from_gallery' => 'Avatar aus der Galerie auswählen',
	'View_avatar_gallery' => 'Avatar-Galerie anzeigen',

	'Select_avatar' => 'Avatar auswählen',
	'Return_profile' => 'Avatar abbrechen',
	'Select_category' => 'Kategorie auswählen',

	'Delete_Image' => 'Bild löschen',
	'Current_Image' => 'Aktuelles Bild',

	'Notify_on_privmsg' => 'Bei neuen Privaten Nachrichten benachrichtigen',
	'Popup_on_privmsg' => 'PopUp-Fenster bei neuen Privaten Nachrichten',
	'Popup_on_privmsg_explain' => 'Einige Templates öffnen neue Fenster, um dich über neue private Nachrichten zu benachrichtigen.',
	'Hide_user' => 'Online-Status verstecken',

	'Profile_updated' => 'Dein Profil wurde aktualisiert',
	'Profile_updated_inactive' => 'Dein Profil wurde aktualisiert. Du hast jedoch wesentliche Details geändert, weswegen dein Benutzer-Konto jetzt inaktiv ist. Du wurdest per Mail darüber informiert, wie du dein Benutzer-Konto reaktivieren kannst. Falls eine Aktivierung durch den Administrator erforderlich ist, warte bitte, bis die Reaktivierung stattgefunden hat.',

	'Password_mismatch' => 'Du musst zweimal das gleiche Passwort eingeben.',
	'Current_password_mismatch' => 'Das aktuelle Passwort stimmt nicht mit dem in der Datenbank überein.',
	'Password_long' => 'Dein Passwort kann nicht länger als 32 Zeichen sein.',
	'Username_taken' => 'Der gewünschte Benutzername ist leider bereits belegt.',
	'Username_invalid' => 'Der gewünschte Benutzername enthält ein ungültiges Sonderzeichen (z.B. \').',
	'Username_disallowed' => 'Der gewünschte Benutzername wurde vom Administrator gesperrt.',
	'Email_taken' => 'Die angegebene E-Mail-Adresse wird bereits von einem anderen Benutzer verwendet.',
	'Email_banned' => 'Die angegebene E-Mail-Adresse wurde vom Administrator gesperrt.',
	'Email_invalid' => 'Die angegebene E-Mail-Adresse ist ungültig.',
	'Signature_too_long' => 'Deine Signatur ist zu lang.',
	'Fields_empty' => 'Du musst alle benötigten Felder ausfüllen.',
	'Avatar_filetype' => 'Der Avatar muss im GIF-, JPG- oder PNG-Format sein.',
	'Avatar_filesize' => 'Die Dateigröße muss kleiner als %d kB sein.', // followed by xx kB, xx being the size
	'Avatar_imagesize' => 'Der Avatar muss weniger als %d Pixel breit und %d Pixel hoch sein.',

	'Welcome_subject' => 'Willkommen bei %s',
	'New_account_subject' => 'Neues Benutzer-Konto',
	'Account_activated_subject' => 'Benutzer-Konto aktiviert',

	'Account_added' => 'Danke für die Registrierung, dein Benutzer-Konto wurde erstellt. Du kannst dich jetzt mit deinem Benutzernamen und deinem Passwort einloggen.',
	'Account_inactive' => 'Dein Benutzer-Konto wurde erstellt. Dieses Forum benötigt aber eine Aktivierung, daher wurde ein Aktivierungsschlüssel an deine E-Mail-Adresse gesendet. Bitte überprüfe in ein paar Minuten dein E-Mail-Konto für weitere Informationen.',
	'Account_inactive_admin' => 'Dein Benutzer-Konto wurde erstellt. Dieser muss noch durch den Administrator freigeschalten werden. Du wirst benachrichtigt, wenn dies geschehen ist.',
	'Account_active' => 'Dein Benutzer-Konto wurde aktiviert. Danke für die Registrierung.<br />Du kannst dich jetzt mit deinem Benutzernamen und deinem Passwort einloggen.',
	'Account_active_admin' => 'Dein Benutzer-Konto wurde jetzt aktiviert.',
	'Reactivate' => 'Benutzer-Konto wieder aktivieren!',
	'Already_activated' => 'Dein Benutzer-Konto ist bereits aktiv.',
	'COPPA' => 'Dein Benutzer-Konto wurde erstellt, muss aber zuerst überprüft werden. Mehr Details dazu wurden dir per E-Mail gesendet.',

	'Registration' => 'Einverständniserklärung',
	'Reg_agreement' => 'Die Administratoren und Moderatoren dieses Forums bemühen sich, Beiträge mit fragwürdigem Inhalt so schnell wie möglich zu bearbeiten oder ganz zu löschen, aber es ist nicht möglich, jede einzelne Nachricht zu überprüfen. Du bestätigst mit Absenden dieser Einverständniserklärung, dass du akzeptierst, dass jeder Beitrag in diesem Forum die Meinung des Urhebers wiedergibt und dass die Administratoren, Moderatoren und Betreiber dieses Forums nur für ihre eigenen Beiträge verantwortlich sind.<br /><br />Du verpflichtest dich, keine beleidigenden, obszönen, vulgären, verleumdenden, gewaltverherrlichenden oder aus anderen Gründen strafbaren Inhalte in diesem Forum zu veröffentlichen. Verstöße gegen diese Regel führen zu sofortiger und permanenter Sperrung, wir behalten uns vor, Verbindungsdaten u. ä. an die strafverfolgenden Behörden weiterzugeben. Du räumst den Betreibern, Administratoren und Moderatoren dieses Forums das Recht ein, Beiträge nach eigenem Ermessen zu entfernen, zu bearbeiten, zu verschieben oder zu sperren. Du stimmst zu, dass die im Rahmen der Registrierung erhobenen Daten in einer Datenbank gespeichert werden.<br /><br />Dieses System verwendet Cookies, um Informationen auf deinem Computer zu speichern. Diese Cookies enthalten keine der oben angegebenen Informationen, sondern dienen ausschließlich deinem Bedienungskomfort dieser Seite. Deine E-Mail-Adresse wird nur zur Bestätigung der Registrierung und ggf. zum Versand eines neuen Passwortes verwendet.<br /><br />Sei versichert, dass deine persönlichen Daten nach den Bestimmunges des Landes des Website-Eigentümer behandelt werden.<br /><br />Durch das Abschließen der Registrierung stimmst du diesen Nutzungsbedingungen zu.',

	'Agreement' => 'Einverständniserklärung',
	'Agree_under_13' => 'Ich bin mit den Bedingungen einverstanden und <b>unter</b> 12 Jahre alt.',
	'Agree_over_13' => 'Ich bin mit den Bedingungen einverstanden.',
	'Agree_not' => 'Ich bin mit den Bedingungen nicht einverstanden.',
	'Agree_checkbox' => 'Ich stimme diesen Bedingungen ausdrücklich zu.',
	'Agree_checkbox_Error' => 'Um dich registrieren zu können musst du die Checkbox (unten auf dieser Seite) aktivieren!',

	'Wrong_activation' => 'Der Aktivierungsschlüssel aus dem Link stimmt nicht mit dem in der Datenbank überein. Bitte überprüfe die URL, und versuche es erneut.',
	'Send_password' => 'Schickt mir ein neues Passwort.',
	'Password_updated' => 'Ein neues Passwort wurde erstellt und eine E-Mail mit weiteren Anweisungen an dich verschickt.',
	'No_email_match' => 'Die angegebene E-Mail-Adresse stimmt nicht mit dem Benutzernamen überein.',
	'New_password_activation' => 'Aktivierung des neuen Passwortes',
	'Password_activated' => 'Dein Benutzer-Konto wurde wieder aktiviert. Benutze das Passwort, welches du per E-Mail erhalten hast, um dich einzuloggen.',

	'Send_email_msg' => 'E-Mail senden',
	'No_user_specified' => 'Es wurde kein Benutzer ausgewählt',
	'User_prevent_email' => 'Dieser Benutzer hat den E-Mail-Empfang deaktiviert. Bitte versuche es mit einer privaten Nachricht.',
	'User_not_exist' => 'Dieser Benutzer existiert nicht.',
	'CC_email' => 'Eine Kopie dieser E-Mail an dich senden',
	'Email_message_desc' => 'Diese Nachricht wird als Text versendet, verwende bitte deshalb kein HTML oder BBCode. Als Antwort-Adresse der E-Mail wird deine Adresse angegeben.',
	'Flood_email_limit' => 'Im Moment kannst du keine weiteren E-Mails versenden. Versuch es später noch einmal.',
	'Recipient' => 'Empfänger',
	'Email_sent' => 'E-Mail wurde gesendet',
	'Send_Email' => 'E-Mail senden',
	'Empty_sender_email' => 'Du musst eine E-Mail Absender Adresse angeben.',
	'Empty_subject_email' => 'Du musst einen Titel für diese E-Mail angeben.',
	'Empty_message_email' => 'Du musst einen Text zur E-Mail angeben.',

// Visual confirmation system strings
	'CONFIRM_CODE_WRONG' => 'Der eingegebene Bestätigungs-Code war nicht richtig',
	'TOO_MANY_ATTEMPTS' => 'Du hast die zulässige Zahl von Registrierungs-Versuchen für diese Sitzung überschritten. Bitte versuche es später erneut.',
	'CONFIRM_CODE_IMPAIRED' => 'Wenn du optisch beeinträchtigt bist oder aus einem anderen Grund den Code nicht lesen kannst, kontaktiere bitte den %sAdministrator%s für Hilfe.',
	'CONFIRM_CODE' => 'Bestätigungs-Code',
	'CONFIRM_CODE_EXPLAIN' => 'Gebe den Code exakt so ein, wie du ihn siehst. Der Code unterscheidet zwischen Groß- und Kleinschreibung, die Null hat im Inneren einen schrägen Strich.',

// Memberlist
	'Select_sort_method' => 'Sortierungs-Methode auswählen',
	'Sort' => 'Sortieren',
	'SORT_TOP_TEN' => 'Top-Ten-Autoren',
	'SORT_JOINED' => 'Anmeldungsdatum',
	'SORT_USERNAME' => 'Benutzername',
	'SORT_LOCATION' => 'Ort',
	'SORT_POSTS' => 'Beiträge insgesamt',
	'SORT_EMAIL' => 'E-Mail',
	'SORT_WEBSITE' => 'Webseite',
	'Sort_Ascending' => 'Aufsteigend',
	'Sort_Descending' => 'Absteigend',
	'Order' => 'Sortierung',

// Group control panel
	'Group_Control_Panel' => 'Gruppen-Kontrolle',
	'Group_member_details' => 'Details zur Gruppen-Mitgliedschaft',
	'Group_member_join' => 'Gruppe beitreten',

	'Group_Information' => 'Information',
	'Group_name' => 'Name',
	'Group_description' => 'Beschreibung',
	'Group_membership' => 'Gruppen-Mitgliedschaft',
	'Group_Members' => 'Gruppen-Mitglieder',
	'Group_Moderator' => 'Gruppen-Moderatoren',
	'Pending_members' => 'Wartende Mitglieder',

	'Group_type' => 'Gruppentyp',
	'Group_open' => 'Offene Gruppe',
	'Group_closed' => 'Geschlossene Gruppe',
	'Group_hidden' => 'Versteckte Gruppe',

	'Current_memberships' => 'Aktuelle Mitgliedschaften',
	'Non_member_groups' => 'Gruppen ohne deine Mitgliedschaft',
	'Memberships_pending' => 'Warten auf Mitgliedschaft',

	'No_groups_exist' => 'Es existieren keine Gruppen',
	'Group_not_exist' => 'Diese Gruppe existiert nicht',

	'Join_group' => 'Gruppe beitreten',
	'No_group_members' => 'Diese Gruppe hat keine Mitglieder.',
	'Group_hidden_members' => 'Diese Gruppe ist versteckt, du kannst keine Mitgliedschaften anzeigen.',
	'No_pending_group_members' => 'Diese Gruppe hat keine wartenden Mitglieder.',
	'Group_joined' => 'Du wurdest erfolgreich bei dieser Gruppe angemeldet.<br />Du wirst benachrichtigt, wenn der Gruppenmoderator deine Mitgliedschaft akzeptiert hat.',
	'Group_request' => 'Eine Anfrage zum Beitritt in diese Gruppe wurde erstellt.',
	'Group_approved' => 'Deine Anfrage wurde akzeptiert.',
	'Group_added' => 'Du bist dieser Gruppe beigetreten.',
	'Already_member_group' => 'Du bist bereits Mitglied dieser Gruppe.',
	'User_is_member_group' => 'Dieser Benutzer ist bereits ein Mitglied dieser Gruppe.',
	'Group_type_updated' => 'Gruppentyp wurde erfolgreich aktualisiert.',
	'Could_not_add_user' => 'Die gewählte Gruppe existiert nicht.',
	'Could_not_anon_user' => 'Ein anonymer Benutzer kann kein Gruppenmitglied werden.',
	'Confirm_unsub' => 'Bist du sicher, dass du die Mitgliedschaft in dieser Gruppe beenden möchtest?',
	'Confirm_unsub_pending' => 'Deine Anmeldung bei der Gruppe wurde noch nicht bestätigt, möchtest du wirklich austreten?',
	'Unsub_success' => 'Du wurdest aus dieser Gruppe abgemeldet.',
	'Approve_selected' => 'Akzeptierte ausgewählt',
	'Deny_selected' => 'Gewählte löschen',
	'Not_logged_in' => 'Du musst eingeloggt sein, um einer Gruppe beizutreten.',
	'Remove_selected' => 'Ausgewählte entfernen',
	'Add_member' => 'Mitglied hinzufügen',
	'Not_group_moderator' => 'Du bist nicht der Gruppenmoderator, daher kannst du diese Aktion nicht durchführen.',
	'Login_to_join' => 'Einloggen, um Gruppe zu managen',
	'This_open_group' => 'Dies ist eine offene Gruppe. Klicke, um eine Mitgliedschaft zu beantragen.',
	'This_closed_group' => 'Dies ist eine geschlossene Gruppe, keine weiteren Mitglieder werden akzeptiert.',
	'This_hidden_group' => 'Dies ist eine versteckte Gruppe, automatische Anmeldungen werden nicht akzeptiert.',
	'Member_this_group' => 'Du bist ein Mitglied dieser Gruppe.',
	'Pending_this_group' => 'Du wartest auf eine Mitgliedschaft in dieser Gruppe.',
	'Are_group_moderator' => 'Du bist der Moderator dieser Gruppe.',
	'None' => 'Keine',
	'Subscribe' => 'Anmelden',
	'Unsubscribe' => 'Abmelden',
	'View_Information' => 'Information anzeigen',

// Search
	'Search_query' => 'Suchabfrage',
	'Search_options' => 'Suchoptionen',

	'Search_keywords' => 'Nach Begriffen suchen',
	'Search_keywords_explain' => 'Du kannst <u>AND</u> benutzen, um Wörter zu definieren, die vorkommen müssen, <u>OR</u> kannst du benutzen für Wörter, die im Resultat sein können und <u>NOT</u> für Wörter, die im Ergebnis nicht vorkommen sollen. Das *-Zeichen kannst du als Platzhalter benutzen.',
	'Search_author' => 'Nach Autor suchen',
	'Search_author_explain' => 'Benutze das *-Zeichen als Platzhalter',
	'Search_author_topic_starter' => 'Nur nach von diesem Autor gestartete Themen suchen',

	'Search_for_any' => 'Nach irgendeinem Wort suchen',
	'Search_for_all' => 'Nach allen Wörtern suchen',
	'Search_title_msg' => 'Titel und Text durchsuchen',
	'Search_title_only' => 'Nur Themen-Titel durchsuchen',
	'Search_msg_only' => 'Nur Nachrichtentext durchsuchen',

	'Return_first' => 'Die ersten', // followed by xxx characters in a select box
	'characters_posts' => 'Zeichen des Beitrags anzeigen',

	'Search_previous' => 'Durchsuchen', // followed by days, weeks, months, year, all in a select box

	'Sort_by' => 'Sortieren nach',
	'Sort_Time' => 'Zeit',
	'Sort_Post_Subject' => 'Titel des Beitrags',
	'Sort_Topic_Title' => 'Titel des Themas',
	'Sort_Author' => 'Autor',
	'Sort_Forum' => 'Forum',

	'Display_results' => 'Ergebnis anzeigen als',
	'All_available' => 'Alle',
	'No_searchable_forums' => 'Du hast nicht die Berechtigung, dieses Forum zu durchsuchen.',

	'No_search_match' => 'Keine Beiträge entsprechen deinen Kriterien.',
	'Found_search_match' => 'Die Suche hat %d Beitrag gefunden.', // eg. Search found 1 match
	'Found_search_matches' => 'Die Suche hat %d Beiträge gefunden.', // eg. Search found 24 matches

	'Close_window' => 'Fenster schließen',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'Ankündigungen können in diesem Forum nur von %s erstellt werden.',
	'Sorry_auth_sticky' => 'Wichtige Nachrichten können in diesem Forum nur von %s erstellt werden.',
	'Sorry_auth_read' => 'Nur %s haben die Berechtigung, in diesem Forum Beiträge zu lesen.',
	'Sorry_auth_post' => 'Nur %s haben die Berechtigung, in diesem Forum Beiträge zu erstellen.',
	'Sorry_auth_reply' => 'Nur %s haben die Berechtigung, in diesem Forum auf Beiträge zu antworten.',
	'Sorry_auth_edit' => 'Nur %s haben die Berechtigung, in diesem Forum Beiträge zu bearbeiten.',
	'Sorry_auth_delete' => 'Nur %s haben die Berechtigung, in diesem Forum Beiträge zu löschen.',
	'Sorry_auth_vote' => 'In diesem Forum können sich nur %s an Abstimmungen beteiligen.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>anonyme Benutzer</b>',
	'Auth_Registered_Users' => '<b>registrierte Benutzer</b>',
	'Auth_Self_Users' => '<b>bestimmte Benutzer</b>',
	'Auth_Users_granted_access' => '<b>Benutzer mit speziellen Rechten</b>',
	'Auth_Moderators' => '<b>Moderatoren</b>',
	'Auth_Administrators' => '<b>Administratoren</b>',

	'Not_Moderator' => 'Du bist nicht Moderator dieses Forums.',
	'Not_Authorized' => 'Nicht berechtigt!',

	'You_been_banned' => 'Du wurdest von dieser Website verbannt.<br />Kontaktiere den Administrator, um mehr Informationen zu erhalten.',

// Viewonline
	'Reg_users_zero_online' => 'Es sind kein registrierter und ', // There are 5 Registered and
	'Reg_users_online' => 'Es sind %d registrierte und ',
	'Reg_user_online' => 'Es ist ein registrierter und ', // There are 5 Registered and
	'Hidden_users_zero_online' => 'kein versteckter Benutzer online.', // 6 Hidden users online
	'Hidden_users_online' => '%d versteckte Benutzer online.', // 6 Hidden users online
	'Hidden_user_online' => 'ein versteckter Benutzer online.', // 6 Hidden users online
	'Guest_users_online' => 'Es sind %d Gäste online.',
	'Guest_users_zero_online' => 'Es sind keine Gäste online.', // There are 10 Guest users online
	'Guest_user_online' => 'Es ist ein Gast online.',
	'No_users_browsing' => 'Im Moment sind keine Benutzer im Forum.',

	'ONLINE_EXPLAIN' => 'Diese Daten zeigen, wer in den letzten 5 Minuten online war.',
	'ONLINE_TODAY' => 'Diese Daten zeigen, wer in den letzten 24 Stunden online war.',

	'Forum_Location' => 'Welche Seite',
	'Last_updated' => 'Zuletzt aktualisiert',

	'Forum_index' => 'Forum-Index',
	'Portal' => 'Startseite',
	'Logging_on' => 'Einloggen',
	'Posting_message' => 'Nachricht schreiben',
	'Searching_forums' => 'Foren durchsuchen',
	'Viewing_profile' => 'Profil anzeigen',
	'Viewing_HACKSLIST' => 'Anzeigen der Credits Liste',
	'Viewing_online' => 'Anzeigen, wer online ist',
	'Viewing_member_list' => 'Mitgliederliste anzeigen',
	'Viewing_priv_msgs' => 'Private Nachrichten anzeigen',
	'Viewing_FAQ' => 'FAQ anzeigen',
	'Viewing_KB' => 'KB anzeigen',
	'Viewing_RSS' => 'RSS-Feed',


// Moderator Control Panel
	'Mod_CP' => 'Moderator-Kontrollbereich',
	'Mod_CP_explain' => 'Mit dem unteren Menü kannst du mehrere Moderatoren-Operationen gleichzeitig ausführen. Du kannst Beiträge öffnen, schließen, löschen oder verschieben.',

	'Select' => 'Auswählen',
	'Delete' => 'Löschen',
	'Move' => 'Verschieben',
	'Copy' => 'Kopieren',
	'Lock' => 'Sperren',
	'Unlock' => 'Entsperren',

	'Topics_Removed' => 'Die gewählten Themen wurden erfolgreich gelöscht.',
	'Topics_Locked' => 'Die gewählten Themen wurden erfolgreich gesperrt.',
	'Topics_Moved' => 'Die gewählten Themen wurden verschoben.',
	'Topics_Unlocked' => 'Die gewählten Themen wurden entsperrt.',
	'No_Topics_Moved' => 'Es wurden keine Themen verschoben.',

	'Confirm_delete_topic' => 'Bist du sicher, dass du die ausgewählten Themen entfernen möchtest?',
	'Confirm_lock_topic' => 'Bist du sicher, dass du die ausgewählten Themen sperren möchtest?',
	'Confirm_unlock_topic' => 'Bist du sicher, dass du die ausgewählten Themen entsperren möchtest?',
	'Confirm_move_topic' => 'Bist du sicher, dass du die ausgewählten Themen verschieben möchtest?',

	'Move_to_forum' => 'Verschieben nach',
	'Leave_shadow_topic' => 'Schatten Thema im alten Forum lassen',

	'Split_Topic' => 'Thema teilen Kontrollbereich',
	'Split_Topic_explain' => 'Mit den Eingabefeldern unten kannst du ein Thema in zwei Teile teilen, in dem du entweder die Beiträge manuell auswählst oder ab einem gewählten Beitrag teilst',
	'Split_title' => 'Titel des neuen Themas',
	'Split_forum' => 'Forum des neuen Themas',
	'Split_posts' => 'Gewählte Beiträge teilen',
	'Split_after' => 'Von gewähltem Beitrag teilen',
	'Topic_split' => 'Das gewählte Thema wurde erfolgreich geteilt',

	'Too_many_error' => 'Du hast zu viele Beiträge gewählt. Du kannst nur einen Beitrag auswählen, nach dem geteilt werden soll!',

	'None_selected' => 'Du hast keine Themen ausgewählt, auf die diese Aktion ausgeführt werden soll. Bitte wähle mindestens eins aus.',
	'New_forum' => 'Neues Forum',

	'This_posts_IP' => 'IP-Adresse für diesen Beitrag',
	'Other_IP_this_user' => 'Andere IP-Adressen, von denen dieser Benutzer geschrieben hat',
	'Users_this_IP' => 'Beiträge von dieser IP-Adresse',
	'IP_info' => 'IP-Information',
	'Lookup_IP' => 'IP nachschlagen',

// Errors (not related to a specific failure on a page)
	'Information' => 'Information',
	'Critical_Information' => 'Kritische Information',

	'General_Error' => 'Allgemeiner Fehler',
	'Critical_Error' => 'Kritischer Fehler',
	'An_error_occured' => 'Ein Fehler ist aufgetreten.',
	'A_critical_error' => 'Ein kritischer Fehler ist aufgetreten.',
	'Admin_reauthenticate' => 'Um das Forum zu administrieren, musst du dich erneut authentifizieren.',

	'Topic_description' => 'Beschreibung des Themas',
// 'Description' => 'Themenbeschreibung',

	'Guestbook' => 'Gästebuch',
	'Viewing_guestbook' => 'Das Gästebuch lesen',

	'Warn_new_post' => 'Es gibt mindestens eine neue Antwort in diesem Thema. Bitte schau dir die neuen Antworten in der Thema Übersicht an und sende deinen Beitrag erneut ab.',

	'Today_at' => '<b class="date-today">Heute</b> um ',
	'Yesterday_at' => '<b class="date-yesterday">Gestern</b> um ',
	'TODAY' => '<b class="date-today">Heute</b>',
	'YESTERDAY' => '<b class="date-yesterday">Gestern</b>',

// Birthday - BEGIN
	'Birthday' => 'Geburtstag',
	'No_birthday_specify' => 'Keine Angabe',
	'Age' => 'Alter',
	'Wrong_birthday_format' => 'Der Geburtstag wurde nicht korrekt eingegeben.',
	'Birthday_to_high' => 'Das Alter muss unter %d Jahren liegen',
	'Birthday_require' => 'Die Eingabe des Geburtstags ist erforderlich',
	'Birthday_to_low' => 'Das Alter muss über %d Jahren liegen',
	'Submit_date_format' => 'd.m.Y', //php date() format - note: ONLY d , m and Y may be used and SHALL ALL be used (different sepperators are accepted)
	'Birthday_greeting_today' =>'Herzlichen Glückwünsch zum Geburtstag! Mit deinen %s Jahren siehst du immer noch so aus wie eh und je: einfach [b]blendend[/b]. Also lass dich heute reich beschenken und feiern und lass dich nicht ärgern.',//%s is substituted with the users age
	'Birthday_greeting_prev' =>'Hui! Wir kommen zu spät zu deinem %s. Geburtstag, der am %s war, stimmt\'s? Wir wünschen dir auch nachträglich noch alles Gute und hoffen, dass du einen schönen Geburtstag hattest.',//%s is substituted with the users age, and birthday
	'Greeting_Messaging' =>'Herzlichen Glückwunsch!',
	'Birthday_today' => 'Geburtstage heute: ',
	'Birthday_week' => 'Geburtstage in den nächsten %d Tagen: ', // %d is substitude with the number of days
	'Nobirthday_week' => 'In den nächsten %d Tagen hat niemand Geburtstag.', // %d is substitude with the number of days
	'Nobirthday_today' => 'Heute hat niemand Geburtstag.',
	'Year' => 'Jahr',
	'Month' => 'Monat',
	'Day' => 'Tag',
// Birthday - END

// Start add - Gender MOD
	'Gender' => 'Geschlecht', //used in users profile to display witch gender he/she is
	'Male' => 'männlich',
	'Female' => 'weiblich',
	'No_gender_specify' => 'keine Angabe',
	'Gender_require' => 'Die Angabe des Geschlechts ist erforderlich.',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
	'Topic_view_users' => 'Liste der Benutzer, die sich dieses Thema angesehen haben',
	'Topic_time' => 'Zuletzt angesehen',
	'Topic_count' => 'Ansichten',
	'Topic_view_count' => 'Themen Ansichten',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
	'Give_G_card' => 'Benutzer reaktivieren',
	'Give_Y_card' => 'Dem Benutzer die %d. Verwarnung erteilen.',
	'Give_R_card' => 'Diesen Benutzer JETZT sperren.',
	'Ban_update_sucessful' => 'Die Sperrliste wurde erfolgreich aktualisiert.',
	'Ban_update_green' => 'Der Benutzer ist nun reaktiviert.',
	'Ban_update_yellow' => 'Der Benutzer hat eine Verwarnung erhalten, und hat nun %d von maximal %d Verwarnungen.',
	'Ban_update_red' => 'Der Benutzer ist nun gesperrt.',
	'Ban_reactivate' => 'Dein Benutzer-Konto wurde reaktiviert.',
	'Ban_warning' => 'Du wurdest verwarnt!',
	'Ban_blocked' => 'Dein Benutzer-Konto ist nun gesperrt.',
/*
	'Rules_ban_can' => 'You <b>can</b> ban other users in this forum',
	'Rules_greencard_can' => 'You <b>can</b> un-ban users in this forum',
	'Rules_bluecard_can' => 'You <b>can</b> report post to moderators in this forum',
*/
	'Rules_ban_can' => 'Du <b>kannst</b> andere Benutzer bannen!',
	'Rules_greencard_can' => 'Du <b>kannst</b> Benutzer entsperren.',
	'Rules_bluecard_can' => 'Du <b>kannst</b> Beiträge beanstanden.',
	'user_no_email' => 'Der Benutzer hat keine E-Mail-Adresse angegeben, deshalb kann er nicht automatisch benachrichtigt werden. Du solltest ihm eine PM zukommen lassen.',
	'user_already_banned' => 'Der gewählte Benutzer ist bereits gesperrt.',
	'Ban_no_admin' => 'Dieser Benutzer ist ein Administrator und kann weder verwarnt noch gesperrt werden.',
	'Give_b_card' => 'Diesen Beitrag einem Moderator melden.',
	'Clear_b_card' => 'Dieser Beitrag hat bisher %d blaue Karten erhalten. Wenn du bestätigst wird der Counter zurückgesetzt.',
	'No_moderators' => 'Dieses Forum hat keinen Moderator. Geshalb wird kein Bericht versandt.',
	'Post_reported' => '%d Moderatoren werden über die Beanstandung dieses Beitrags informiert.',
	'Post_reported_1' => 'Der Moderator wird über die Beanstandung dieses Beitrags informiert.',
	'Post_report' => 'Die Beanstandung abschicken.',
	'Post_reset' => 'Die Anzahl der blauen Karten dieses Beitrags wurde zurückgesetzt.',
	'Search_only_bluecards' => 'Alle Beiträge mit blauen Karten anzeigen.',
	'Send_message' => 'Klicke %shier%s, um einen Beitrag zu beanstanden.<br />',
	'Send_PM_user' => 'Klicke %shier%s, um dem Benutzer eine PN zu schreiben.',
	'Link_to_post' => 'Klicke %shier%s, um zum beanstandeten Beitrag zu gehen.
--------------------------------

',
	'Post_a_report' => 'Diesen Beitrag beanstanden.',
	'Report_stored' => 'Deine Beanstandung ist erfolgreich übermittelt worden.',
	'Send_report' => 'Klicke %shier%s, um zurück zur ursprünglichen Anzeige zu gelangen.',
	'Red_card_warning' => 'Du willst dem Benutzer %s eine rote Karte geben. Damit sperrst du ihn. Bist du sicher, dass du dieses tun willst?',
	'Yellow_card_warning' => 'Du willst dem Benutzer %s eine gelbe Karte geben. Damit lässt du ihm eine Verwarnung zukommen. Bist du sicher, dass du dieses tun willst?',
	'Green_card_warning' => 'Du willst dem Benutzer %s eine grüne Karte geben. Damit entsperrst du ihn wieder. Bist du sicher, dass du dieses tun willst?',
	'Blue_card_warning' => 'Du willst diesen Beitrag beanstanden. Wenn du dies tust, werden die Moderatoren dieses Forums darüber informiert. Bist du sicher, dass du dieses tun willst?',
	'Clear_blue_card_warning' => 'Du bist im Begriff, den Zähler für blaue Karten für diesen Beitrag zurückzustellen. Möchtest du fortfahren?',
	'Warnings' => '%d Verwarnungen', //shown beside users post, if any warnings given to the user
	'Banned' => 'Benutzer gesperrt.',//shown beside users post, if user are banned

// Last visit - BEGIN
	'Last_logon' => 'Letzter Besuch',
	'Hidde_last_logon' => 'Versteckt',
	'Never_last_logon' => 'Nie',
	'Users_today_zero_total' => 'Heute hat noch <b>niemand</b> das Forum besucht: ',
	'Users_today_total' => 'Heute haben <b>%d</b> Benutzer das Forum besucht: ',
	'User_today_total' => 'Heute hat <b>%d</b> Benutzer das Forum besucht: ',
	'Users_lasthour_explain' => ', davon %d innerhalb der letzten Stunde.',
	'Users_lasthour_none_explain' => '', //showen of none have visited the last hour, fill if you like

	'Years' => 'Jahre',
	'Year' => 'Jahr',
	'Weeks' => 'Wochen',
	'Week' => 'Woche',
	'Day' => 'Tag',
	'Total_online_time' => 'Gesamte Online-Dauer',
	'Last_online_time' => 'Letzte Online-Dauer',
	'Number_of_visit' => 'Anzahl der Besuche',
	'Number_of_pages' => 'Besuchte Seiten',
// Last visit - END

	'total_site_hits_key' => '%V% Seitenansichten seit %D%.',

	'Message_too_short' => 'Deine Nachricht ist zu kurz',

// Start add - Online/Offline/Hidden Mod
	'Online' => 'Online',
	'Offline' => 'Offline',
	'Hidden' => 'Versteckt',

	'Online_status' => 'Status',
// End add - Online/Offline/Hidden Mod
	'Download' => 'Download',

//signature editor
	'sig_edit_link' => 'Signatur',
	'sig_description' => 'Signatur bearbeiten (<b>inklusive Vorschau</b>)',
	'sig_edit' => 'Signatur bearbeiten',
	'sig_current' => 'aktuelle Signatur',
	'sig_none' => 'Keine Signatur verfügbar',
	'sig_save' => 'Speichern',
	'sig_save_message' => 'Deine Signatur wurde erfolgreich gespeichert!',

	'Statistics' => 'Statistiken',

// Start add - Global announcement MOD
	'Globalannounce' => 'Global Ankündigen',
	'Globalannounce' => 'Neue globale Ankündigung',
// End add - Global announcement MOD
	'Global_Announcements' => 'Globale Ankündigungen',
	'Announcements' => 'Ankündigungen',
	'Sticky_Topics' => 'Wichtige Themen',
	'Announcements_and_Sticky' => 'Ankündigungen und wichtige Themen',
// db_update generator
	'Db_update_generator' => 'DB Update Generator',
	'Instructions' => 'Anweisungen',
	'SQL_instructions' => 'Diese Software generiert PHP Dateien, welche es dir erlauben, die Datenbank mit Hilfe deines Browsers zu aktualisieren. Es gibt ein paar Dinge, die du beachten musst, wenn du SQL Anweisungen in die Box unten eingibst.<br />Stelle zunächst einmal sicher, dass alle SQL Abfragen mit einem Semikolon (;) enden. Wenn nicht, wird die Datei fehlerhaft sein. Als nächstes solltest du sicherstellen, dass die Tabellen den &quot;phpbb_&quot; Präfix haben. Dieser wird automatisch mit einer Variablen ersetzt, welche es dir ermöglicht, die erstellte db_update.php Datei in jedem Forum zu nutzen, ganz gleich wie dort der verwendete Tabellen Präfix ist.',
	'Enter_SQL' => 'SQL eingeben',
	'Enter_SQL_explain' => 'MySQL ist die weltweit bekannteste Open Source Datenbank, geschätzt für ihre Geschwindigkeit und Zuverlässigkeit.',
	'Output_SQL' => 'SQL Ausgabe',
	'Output_SQL_explain' => 'Kopiere den Text aus dem Textfeld rechts und füge ihn in eine leere Datei ein. Speichere die Datei als <u>db_update.php</u> ab und lade sie auf deinen Server hoch. Starte sie einmal, indem du sie mit deinem Browser aufrufst.<br /><br />Alternativ kannst du auf den Download Button klicken und die Datei auf deinen Computer herunterladen (empfohlen).',
	'Download' => 'Download',

	'TOP_POSTERS' => 'Top Posters',

// TELL A FRIEND
	'TELL_FRIEND' => 'E-Mail an einen Freund',
	'TELL_FRIEND_SENDER_USER' => 'Dein Name:',
	'TELL_FRIEND_SENDER_EMAIL' => 'Deine E-Mail:',
	'TELL_FRIEND_RECEIVER_USER' => 'Name deines Freundes:',
	'TELL_FRIEND_RECEIVER_EMAIL' => 'E-Mail deines Freundes:',
	'TELL_FRIEND_WRONG_EMAIL' => 'Du hast keine gültige E-Mail Adresse angegeben.',
	'TELL_FRIEND_MSG' => 'Deine Nachricht:',
	'TELL_FRIEND_TITLE' => 'Freund informieren',
	'TELL_FRIEND_BODY' => "Hallo,\nIch habe gerade das Thema &raquo;{TOPIC}&laquo; auf {SITENAME} gesehen und dachte, dass es dich vielleicht interessiert.\n Hier ist der Link: {LINK}\n\nSchau es dir mal. Wenn du darauf antworten möchtest, kannst du ein eigenes Benutzer-Konto erstellen, sofern du nicht schon eines hast.",

// Begin Thanks Mod
	'thankful' => 'Dankbare Nutzer',
	'thanks_to' => 'Danke für dieses hilfreiche Thema',
	'thanks_end' => ':',
	'thanks_alt' => 'Dankesbeitrag',
	'thanks_add_rate' => 'Danke dem Autor für diesen nützlichen Beitrag',
	'thanked_before' => 'Du hast dich für diesen Beitrag schon bedankt',
	'thanks_add' => 'Dein Danke wurde hinzugefügt',
	'thanks_not_logged' => 'Du muss dich einloggen, um dich für einen Beitrag zu bedanken.',
	'thanks2' => 'Vielen Dank!<br />',
// End Thanks Mod

//Begin Lo-Fi Mod
	'Lofi' => 'Lo-Fi Version',
// 'Full_Version' => 'Vollversion',
	'Full_Version' => 'Dies ist eine &quot;Lo-Fi&quot; Version von unserem Inhalt. Um die volle Version mit mehr Informationen, Formaten und Bildern anzuzeigen, klicke bitte hier.',
	'quote_lofi' => 'Zitat',
	'edit_lofi' => 'Bearbeiten',
	'ip_lofi' => 'IP',
	'del_lofi' => 'Löschen',
	'profile_lofi' => 'Profil',
	'pm_lofi' => 'PN',
	'email_lofi' => 'E-Mail',
	'website_lofi' => 'Webseite',
	'icq_lofi' => 'ICQ',
	'aim_lofi' => 'AIM',
	'yim_lofi' => 'YIM',
	'msnm_lofi' => 'MSN',
	'quick_lofi' => 'Schnell-Antwort',
	'new_pm_lofi' => 'Sende eine PN',
//End Lo-Fi Mod

// Retroactive Signature MOD
	'Retro_sig' => 'Füge meine Signatur zu früheren Beiträgen hinzu',
	'Retro_sig_explain' => 'Wenn du deine Signatur hinzufügst, übernimmt Icy Phoenix die normalerweise nur für zukünftige Beiträge.',
	'Retro_sig_checkbox' => 'Setze den Haken, um die Signatur auch an frühere Beträge anzufügen.',
// End Retro Sig MOD

	'legend' => 'Legende',
	'users' => 'Benutzer',
//added to autogroup mod
	'No_more' => 'Es werden keine weiteren Benutzer akzeptiert',
	'No_add_allowed' => 'Das automatische hinzufügen von Benutzern ist nicht gestattet',
	'Join_auto' => 'Du kannst dieser Gruppe beitreten, da deine Beitragsanzahl den Gruppenkriterien entspricht.',

// merge topics
	'Merge' => 'Zusammenführen',
	'Merge_topic' => 'Themen zusammenführen',
	'Topics_Merged' => 'Die ausgewählten Themen wurden erfolgreich zusammengeführt.',
	'No_Topics_Merged' => 'Es wurden keine Themen zusammengeführt.',
	'Confirm_merge_topic' => 'Bist du sicher, dass die die ausgewählten Themen zusammenführen möchtest?',

	'Downloads' => 'Downloads',

// Start add - Bin Mod
	'Move_bin' => 'Dieses Thema in den Papierkorb verschieben',
	'Topics_Moved_bin' => 'Die ausgewählten Themen wurden in den Papierkorb verschoben.',
	'Bin_disabled' => 'Der Papierkorb wurde deaktiviert',
	'Bin_recycle' => 'Papierkorb leeren',
// End add - Bin Mod
	'Recent_topics' => 'Letzte Themen', // Recent Topics

	'Topics_Title_Edited' => 'Die Titel der ausgewählten Themen wurden bearbeitet.',
	'Edit_title' => 'Titel bearbeiten',
	'PM' => 'PN',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'IP-Adressinformation nur für Moderatoren',
	'Registered_ip_address' => 'Registrierte IP-Adresse',
	'Registered_hostname' => 'Registrierter Hostname',
	'Other_registered_ips' => 'Andere Benutzer, die sich von %s registriert haben', //%s is the IP address
	'Other_posted_ips' => 'IP Adressen, von denen der Benutzer geschrieben hat',
	'Search_ip' => 'Suche nach Beiträgen anhand der IP-Adresse',
	'Search_ip_explain' => 'Gib eine IP-Adresse im Format <u>127.0.0.1</u> ein -- du kannst * als Platzhalter verwenden z.B. <u>127.*.*.1</u>',
	'IP' => 'IP',
	'Whois' => 'Whois',
	'Browser' => 'Browser',
	'No_other_registered_ips' => 'Keine anderen Benutzer haben sich von dieser IP-Adresse registriert.',
	'No_other_posted_ips' => 'Dieser Benutzer hat noch keine Beiträge geschrieben.',
	'Not_recorded' => 'Nicht registriert',
	'Logins' => 'Logins',
	'No_logins' => 'Von diesem Benutzer wurden keine Logins registriert.',
// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'Klicke hier, um das Bild in Originalgröße anzuzeigen.',
	'LIW_click_image_explain' => 'Klicke auf das Bild, um es in Originalgröße anzuzeigen',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => 'Foto-Galerie',
	'Personal_Gallery' => 'Persönliche Foto-Galerie',
	'Personal_Gallery_Of_User' => 'Persönliche Foto-Galerie von %s',
	'Personal_Gallery_Of_User_Profile' => 'Persönliche Foto-Galerie von %s (%d Bilder)',
	'Show_All_Pic_View_Mode_Profile' => 'Zeige alle Bilder in der Persönliche Foto-Galerie von %s (ohne Unterkategorien)',
	'Not_allowed_to_view_album' => 'Du bist nicht berechtigt, dir Bilder in dieser Kategorie anzusehen.',
	'Not_allowed_to_upload_album' => 'Du bist nicht berechtigt, Bilder in diese Kategorie hochzuladen. Kontaktiere den Administrator für weitere Informationen.',
	'Album_empty' => 'Es sind keine Bilder in dieser Kategorie<br />Klicke auf den <b>Bild hochladen</b> Link auf dieser Seite, um ein Bild hinzuzufügen.',
	'Album_empty2' => 'Es sind keine Bilder in dieser Kategorie.',
	'Upload_New_Pic' => 'Neues Bild hochladen',
	'Pic_Title' => 'Bildtitel',
	'Pic_Title_Explain' => 'Es ist wichtig, dem Bild einen guten Titel zu geben. Es kann ein Name oder ein Betreff sein, damit andere wissen, um was es sich handelt, ohne das Bild zu sehen.',
	'Pic_Upload' => 'Bild hochladen',
	'Pic_Upload_Explain' => 'Erlaubte Bildtypen sind JPG, GIF und PNG. Die maximale Dateigröße darf %s Bytes betragen. Die Abmessung darf %sx%s Pixel nicht überschreiten. Benutze die Hilfe deines Grafikprogramms, um mehr über Dateigrößen und Bildabmessungen zu erfahren.',
	'Album_full' => 'Diese Kategorie hat die maximale Anzahl von Bildern erreicht. Kontaktiere den Administrator für weitere Informationen.',
	'Album_upload_successful' => 'Dein Bild wurde erfolgreich hochgeladen.',
	'Click_return_album' => 'Klicke %shier%s, um zur Kategorie zurückzukehren.',
	'Invalid_upload' => 'Ungültiger Upload<br /><br />Dein Bild ist zu groß oder das Format ist nicht erlaubt.',
	'Image_too_big' => 'Die Bildabmessungen (in Pixel) sind zu groß.',
	'Uploaded_by' => 'Hochgeladen von',
	'Category_locked' => 'Du kannst keine Bilder in diese Kategorie hochladen, da sie von einem Administrator gesperrt wurde. Kontaktiere den Administrator für weitere Informationen.',
	'View_Album_Index' => 'Foto-Galerie Index',
	'View_Album_Personal' => 'Anzeigen der persönlichen Foto-Galerie eines Benutzers',
	'View_Pictures' => 'Anzeigen von Bildern in der Foto-Galerie',
	'Album_Search' => 'Foto-Galerie durchsuchen',
	'Pic_Name' => 'Bildtitel',
	'Description' => 'Beschreibung',
	'Search_Contents' => ' beinhaltet: ',
	'Search_Found' => 'Die Suche fand ',
	'Search_Matches' => 'Treffer:',
// Mighty Gorgon - Full Album Pack - END

// News
	'xs_latest_news' => 'Letzte Neuigkeiten',
	'xs_no_news' => 'Es gibt keine News Beiträge.',
	'xs_news_version' => 'News Version: %s',
	'xs_news_ticker_feed' => 'XML Feed Quelle: %s',
	'xs_no_ticker' => 'Es sind keine News Ticker definiert. Gehe zum Administrations-Bereich um einen zu erstellen.',
	'xs_news_ticker_title' => 'News Ticker',
	'xs_news_tickers_title' => 'News Ticker',
	'xs_news_item_title' => 'News-Eintrag',
	'xs_news_items_title' => 'News-Einträge',
	'hide' => 'Ausblenden',
	'show' => 'Zeige',
	'Welcome' => 'Willkommen',
	'birthdays' => 'Geburtstage',

//Battle of the Sexes
	'male_zero_total' => '<b>keine</b> männliche Mitglieder', // # registered male users
	'male_total' => '<b>%d</b> männliche Mitglieder', // # registered male users
	'male_one_total' => '<b>%d</b> männliches Mitglied', // # registered male users
	'female_zero_total' => 'Wir haben <b>keine</b> weiblichen Mitglieder', // # registered female users
	'female_total' => 'Wir haben <b>%d</b> weibliche Mitglieder', // # registered female users
	'female_one_total' => 'Wir haben <b>%d</b> weibliches Mitglied', // # registered female users
	'unknown_total' => '&amp; <b>%d</b> Mitglieder, die es einfach nicht wissen.',
	'unknown_one_total' => '&amp; <b>%d</b> Mitglied, welches es einfach nicht weiss.',
	'unknown_zero_total' => '',
	'battle_of_sexes' => 'Geschlechterkampf: ',

	'who_viewed' => 'Thema angesehen von',
	'BoardRules' => 'Regeln',

	'View_post' => 'Zeige Beitrag',
	'Post_review' => 'Beitrag überprüfen',
	'View_next_post' => 'zeige nächsten Beitrag',
	'View_previous_post' => 'zeige vorherigen Beitrag',
	'No_newer_posts' => 'Es gibt keine neueren Beiträge in diesem Forum',
	'No_older_posts' => 'Es gibt keine älteren Beiträge in diesem Forum',

	'StaffSite' => 'Team Seite',
	'Staff_level' => array('Administrator','Moderator'),
	'Staff_forums' => 'Foren',
	'Staff_stats' => 'Statistiken',
	'Staff_user_topic_day_stats' => '%.2f Themen pro Tag', // %.2f = topics per day
	'Staff_period' => 'seit %d Tagen', // %d = days
	'Staff_contact' => 'Kontakt',
	'Staff_messenger' => 'Messenger',
// Start Edit Notes MOD
	'Edit_notes' => 'Bearbeitungsnotiz',
	'Delete_note' => 'Notiz löschen',
	'Edited_by' => 'Bearbeitet von',
	'Confirm_delete_edit_note' => 'Bist du sicher, dass du diese Bearbeitungsnotiz löschen möchtest?',
	'Edit_note_deleted' => 'Die Notiz wurde erfolgreich gelöscht.',
// End Edit Notes MOD

	'Recent_topics' => 'Neueste Themen', // Recent Topics
	'Recent_today' => 'Heute',
	'Recent_yesterday' => 'Gestern',
	'Recent_last24' => 'in den letzten 24 Stunden',
	'Recent_lastweek' => 'letzte Woche',
	'Recent_lastXdays' => 'letzte %s Tage',
	'Recent_last' => 'letzte',
	'Recent_days' => 'Tage',
	'Recent_first' => 'angefangen %s',
	'Recent_first_poster' => '%s',
	'Recent_select_mode' => 'Modus auswählen:',
	'Recent_showing_posts' => 'Beiträge anzeigen:',
	'Recent_title_one' => '%s Thema %s', // %s = topics; %s = sort method
	'Recent_title_more' => '%s Themen %s', // %s = topics; %s = sort method
	'Recent_title_today' => ' seit heute',
	'Recent_title_yesterday' => ' seit gestern',
	'Recent_title_last24' => ' seit den letzten 24 Stunden',
	'Recent_title_lastweek' => ' seit letzter Woche',
	'Recent_title_lastXdays' => ' seit den letzten %s Tagen', // %s = days
	'Recent_no_topics' => 'Es wurden keine Themen gefunden.',
	'Recent_wrong_mode' => 'Du hast den falschen Modus ausgewählt.',
	'Recent_click_return' => 'Klicke %shier%s, um zur Neueste Themen Seite zurückzukehren.',

	'Profile_view_option' => 'Pop-up Fenster für Profilansichten',
	'Profile_viewed' => 'Profilansichten',

// BEGIN Disable Registration MOD
	'registration_status' => 'Es tut uns leid, aber Neuregistrierungen im Forum sind zurzeit nicht möglich. Bitte versuche es später noch einmal.',
// END Disable Registration MOD

	'PostHighlight' => 'Markieren',
	'QuickQuote' => 'Schnellzitat',
	'Randomquote' => 'Zufälliges Zitat',

// Mod User CP Organize
	'Cpl_Navigation' => 'Konfiguration',
// 'Cpl_Settings_Options' => 'Settings And Options',
	'Cpl_Settings_Options' => 'Einstellungen und Optionen',
	'Cpl_Board_Settings' => 'Foren Einstellungen',
	'Cpl_NewMSG' => 'Neue Nachricht senden',
	'Cpl_Click_Return_Cpl' => 'oder klicke %shier%s, um zur Konfiguration zurückzukehren.',
	'Cpl_Personal_Profile' => 'Persönliches Profil',
	'Cpl_More_info' => 'Abonnements',

	'Forbidden_characters' => 'Erlaubte Zeichen für Benutzernamen sind a-z, A-Z, 0-9, -, _ und Leerzeichen.',

	'Topics_per_page' => 'Themen pro Seite',
	'Posts_per_page' => 'Beiträge pro Seite',
	'Hot_threshold' => 'Beitragsgrenze für &quot;heiße&quot; Themen',

	'Mod_CP_first_post' => 'Erster Beitrag',
	'Mod_CP_topic_count' => '<b>%s</b> Thema gefunden.',
	'Mod_CP_topics_count' => '<b>%s</b> Themen gefunden.',
	'Mod_CP_no_topics' => 'Keine Themen entsprechen deinen Kriterien.',
	'Mod_CP_sticky' => 'Wichtig',
	'Mod_CP_announce' => 'Ankündigen',
	'Mod_CP_global' => 'Globalisieren',
	'Mod_CP_normal' => 'Normalisieren',
	'Display_sticky' => 'Wichtig',
	'Display_announce' => 'Ankündigung',
	'Display_global' => 'Globale Ankündigung',
	'Display_poll' => 'Umfrage',
	'Display_shadow' => 'Verschoben',
	'Display_locked' => 'Gesperrt',
	'Display_unlocked' => 'Entsperrt',
	'Display_unread' => 'Ungelesen',
	'Display_unanswered' => 'Unbeantwortet',
	'Display_all' => 'Alle',
	'Mod_CP_confirm_delete_polls' => 'Bist du sicher, dass du diese Umfragen löschen möchtest?',
	'Mod_CP_poll_removed' => 'Die ausgewählte Umfrage wurde erfolgreich vom Thema entfernt.',
	'Mod_CP_polls_removed' => 'Die ausgewählten Umfragen wurden erfolgreich von den Themen entfernt.',
	'Mod_CP_topic_removed' => 'Das ausgewählte Thema wurde erfolgreich aus der Datenbank gelöscht.',
	'Mod_CP_topic_moved' => 'Das ausgewählte Thema wurde von <b>%s</b> nach <b>%s</b> verschoben.', // %s = old/new forum
	'Mod_CP_topics_moved' => 'Die ausgewählten Themen wurden von <b>%s</b> nach <b>%s</b> verschoben.', // %s = old/new forum
	'Mod_CP_topic_locked' => 'Das ausgewählte Thema wurde gesperrt.',
	'Mod_CP_topic_unlocked' => 'Das ausgewählte Thema wurde entsperrt.',
	'Mod_CP_topics_sticked' => 'Die ausgewählten Themen wurden als <b>Wichtig</b> markiert.',
	'Mod_CP_topic_sticked' => 'Das ausgewählte Thema wurde  als <b>Wichtig</b> markiert.',
	'Mod_CP_topics_announced' => 'Die ausgewählten Themen wurden angekündigt.',
	'Mod_CP_topic_announced' => 'Das ausgewählte Thema wurde angekündigt.',
	'Mod_CP_topics_globalized' => 'Die ausgewählten Themen wurden globalisiert.',
	'Mod_CP_topic_globalized' => 'Das ausgewählte Thema wurde globalisiert.',
	'Mod_CP_topics_normalized' => 'Die ausgewählten Themen wurden normalisiert.',
	'Mod_CP_topic_normalized' => 'Das ausgewählte Thema wurde normalisiert',
	'Mod_CP_click_return_topic' => 'Klicke %shier%s, um zum alten Thema zurückzukehren, oder %shier%s, um zum neuen zu gelangen.',

	't_starter' => 'Du kannst dir nicht selbst Danken.',
	'Watched_Topics' => 'Beobachtete Themen',
	'No_Watched_Topics' => 'Du beobachtest keine Themen.',
	'Watched_Topics_Started' => 'Thema eröffnet',
	'Watched_Topics_Stop' => 'nicht mehr beobachten',

	'Stop_watching_forum' => 'Dieses Forum nicht mehr beobachten',
	'Start_watching_forum' => 'Dieses Forum beobachten',
	'No_longer_watching_forum' => 'Du beobachtest dieses Forum nicht mehr.',
	'You_are_watching_forum' => 'Du beobachtest jetzt dieses Forum und wirst über neue Themen benachrichtigt.',

	'UCP_SubscForums' => 'Beobachtete Foren',
	'UCP_NoSubscForums' => 'Du beobachtest keine Foren',
	'UCP_SubscForums_Flag' => 'Fahne',
	'UCP_SubscForums_Forum' => 'Forum',
	'UCP_SubscForums_Forum_subscribed' => 'Forum beobachtet',
	'UCP_SubscForums_Forum_already_subscribed' => 'Du beobachtest dieses Forum bereits',
	'UCP_SubscForums_Click_return_forum' => 'Klicke %shier%s, um zum Forum zurückzukehren.',
	'UCP_SubscForums_Topics' => 'Themen',
	'UCP_SubscForums_Posts' => 'Beiträge',
	'UCP_SubscForums_LastPost' => 'Letzter Beitrag',
	'UCP_SubscForums_UnSubscribe' => 'nicht mehr beobachten',
	'UCP_SubscForums_NewTopic' => 'Neues Thema',

	'profile_main' => 'Benutzer-Kontrollzentrum',
	'profile_explain' => 'Willkommen im Benutzer-Kontrollzentrum.<br />Hier kannst du sehen, wer sich dein Profil angeschaut hat, deine persönlichen Einstellungen anpassen und beobachtete Themen sowie Foren anzeigen und verwalten. Außerdem kannst du Private Nachrichten (PN) an andere Benutzern senden (wenn vom Administrator gestattet).',
	'your_activity' => 'Dein Profil',

	'Gravatar' => 'Gravatar',
	'Gravatar_explain' => 'Wenn du einen <a href="http://www.gravatar.com" target="_blank">Gravatar</a> hast, gib hier die E-Mail Adresse ein, mit der du dich dort registriert hast.',

	'private_msg_review_title' => 'Nachricht, auf die du antwortest',
	'private_msg_review_error' => 'Fehler beim Finden der Privaten Nachricht!',

	'BSH_Viewing_Topic' => 'Thema ansehen: %t%',
	'BSH_Viewing_Post' => '%sBeitrag ansehen%s',
	'BSH_Viewing_Profile' => '%u%\'s Profil ansehen',
	'BSH_Viewing_Groups' => '%sGruppen ansehen%s',
	'BSH_Viewing_Forums' => 'Forum ansehen: %f%',
	'BSH_Index' => '%sIndex anzeigen%s',
	'BSH_Searching_Forums' => '%sForen durchsuchen%s',
	'BSH_Viewing_Onlinelist' => '%sOnline Liste anzeigen%s',
	'BSH_Viewing_Messages' => '%sPrivate Nachrichten ansehen%s',
	'BSH_Viewing_Memberlist' => '%sMitgliederliste ansehen%s',
	'BSH_Login' => '%sEinloggen%s',
	'BSH_Logout' => '%sAusloggen%s',
	'BSH_Editing_Profile' => '%sProfil bearbeiten%s',
	'BSH_Viewing_ACP' => '%sAdmin-Bereich anzeigen%s',
	'BSH_Moderating_Forum' => '%sForen moderieren%s',
	'BSH_Viewing_FAQ' => '%sFAQ ansehen%s',
	'BSH_Viewing_Category' => 'Kategorie ansehen: %c%',

	'Board_statistic' => 'Board Statistiken',
	'Database_statistic' => 'Datenbank Statistiken',
	'Version_info' => 'Versionsinformation',
	'Thereof_deactivated_users' => 'Anzahl nicht aktivierter Benutzer',
	'Thereof_Moderators' => 'Anzahl Moderatoren',
	'Thereof_Junior_Administrators' => 'Anzahl Junior Administratoren',
	'Thereof_Administrators' => 'Anzahl Administratoren',
	'Deactivated_Users' => 'Benutzer, die auf Aktivierung warten',
	'Users_with_Mod_Privileges' => 'Mitglieder mit Moderator-Rechten',
	'Users_with_Junior_Admin_Privileges' => 'Mitglieder mit Junior Administrator-Rechten',
	'Users_with_Admin_Privileges' => 'Mitglieder mit Administrator-Rechten',
	'DB_size' => 'Größe der Datenbank',
	'Version_of_ip' => '<a href="http://www.icyphoenix.com/">Icy Phoenix</a> Version',
	'Version_of_board' => '<a href="http://www.phpbb.com">phpbb</a> Version',
	'Version_of_PHP' => '<a href="http://www.php.net/">PHP</a> Version',
	'Version_of_MySQL' => '<a href="http://www.mysql.com/">MySQL</a> Version',
	'Download_post' => 'Beitrag herunterladen',

	'Download_topic' => 'Thema herunterladen',
	'Always_swear' => 'Kraftausdrücke immer erlauben',

	'Shoutbox' => 'Shoutbox',
	'Shoutbox_date' => ' d m Y H:i:s',
	'Shout_censor' => '<b>Shout entfernt!</b>',
	'Shout_refresh' => 'Aktualisieren',
	'Shout_text' => 'Dein Text',
	'Viewing_Shoutbox' => 'Shoutbox ansehen',
	'Censor' => 'Zensieren',

	'Edit_post_time' => 'Zeit dieses Beitrags bearbeiten',
	'Edit_post_time_xs' => 'bearbeiten',
	'Topic_time_xs' => 'Themenzeit',
	'Post_time' => 'Beitragszeit',
	'Post_time_successfull_edited' => '<b>Die Zeit wurde erfolgreich aktualisiert.</b></span><br /><span class="postdetails">Dieses Fenster wird nach 3 Sekunden geschlossen.',

	'staff_message' => 'Nachricht vom Team',

	'Board_Rules' => 'Foren Regeln',
	'Forum_Rules' => 'Foren Regeln',
	'Show_avatars' => 'Avatare in Themen anzeigen',
	'Show_signatures' => 'Signaturen in Themen anzeigen',
	'Acronym' => 'Abkürzung',
	'Acronyms' => 'Abkürzungen',
	'User_Number' => 'Benutzer #',
	'Member_Count' => 'Mitglieder',
	'Reply_message' => 'Beantwortete Nachricht',
	'Click_read_topic' => 'Klicke %shier%s, um sie zu lesen', // %s's here are for uris, do not remove!
	'Create_with_generator' => 'Avatar mit dem Avatar Generator erstellen',
	'View_avatar_generator' => 'Avatar Generator',
	'Adv_Search' => 'Erweiterte Suche',
	'Search_Explain' => 'Suche innerhalb dieser Seite',
	'Please_remove_install_contrib' => 'Bitte stelle sicher, dass du den Ordner <b>install</b> gelöscht hast.',
	'Search_Engines' => 'Suchmaschinen-Bots:',
	'Bots_browsing_forum' => 'Suchmaschinen-Bots in diesem Forum:',
	'Debug_On' => 'Debug ein',
	'Debug_Off' => 'Debug aus',
	'Page_Generation_Time' => 'Seitenaufbau in',
	'Memory_Usage' => 'Memory',
	'SQL_Queries' => 'SQL Abfragen',
	'Search_new2' => 'Neue Beiträge',
	'Search_new_p' => 'Neue Beiträge seit letztem Besuch',
	'Show_In_Portal' => 'Zeige im Portal',
	'Not_Auth_View' => 'Du bist nicht autorisiert, diese Seite anzusehen.',
	'Site_Hist' => 'Seiten Historie',
	'Links' => 'Links',
	'Print_View' => 'Druckansicht',
	'Browsing_topic' => 'Benutzer in diesem Thema:',
	'Sudoku' => 'Sudoku',
	'Bookmarks' => 'Lesezeichen',
	'Set_Bookmark' => 'Setze ein Lesezeichen für diese Thema',
	'Remove_Bookmark' => 'Entferne das Lesezeichen für dieses Thema',
	'No_Bookmarks' => 'Du hast kein Lesezeichen gesetzt',
	'Always_set_bm' => 'Setze Lesezeichen automatisch beim Schreiben einen Beitrages',
	'Found_bookmark' => 'Du hast %d Lesezeichen gesetzt.', // eg. Search found 1 match
	'Found_bookmarks' => 'Du hast %d Lesezeichen gesetzt.', // eg. Search found 24 matches
	'More_bookmarks' => 'Mehr Lesezeichen&hellip;', // For mozilla navigation bar

//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => 'Was ist das?',
	'Rss_news_help_title' => 'RSS Newsreader Hilfe',
	'Rss_news_help_header' => 'Was sind Feeds und wie verwende ich sie?',
	'Rss_news_help_explain' => 'Ein Feed ist eine regelmäßig aktualisierte Zusammenfassung bestimmter Web-Inhalte, die Links zur vollständigen Version des jeweiligen Inhalts enthält. Wenn du mit einem Feed-Reader den Feed einer Website abonnierst, erhältst Du alle neuen Inhalte dieser Website in einer Zusammenfassung.<br /><br /><b>Achtung:</b> Zum Abonnieren von Website-Feeds muss ein <a href="http://www.rssowl.org/" target="new">Feed-Reader</a> verwendet werden. Beim Klicken auf den Link zu einem RSS- oder Atom-Feed erscheint sonst im Browser eine Seite mit einem unformatierten Textwirrwarr.',
	'Rss_news_help_header_2' => '<b>Was ist RSS und Atom?</b>',
	'Rss_news_help_explain_2' => 'RSS und Atom sind zwei Formate für Feeds. Die meisten Feed-Reader unterstützen beide Formate. Gegenwärtig wird von uns Atom 0.3 und RSS 2.0 unterstützt.',
	'Rss_news_help_header_3' => '<b>Wie verwende ich die News-Feeds?</b>',
	'Rss_news_help_explain_3' => 'Als erstes benötigst Du einen Feed-Reader, den bekommst du beispielsweise bei <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />Danach kannst du in dem Programm:<br /><br /><b>1.</b> Nach RSS Links auf unserer Seite suchen. (Extras => Suche Newsfeeds auf Webseite) <b>oder</b><br /><b>2.</b> eine der folgenden Feed URL\'s hinzufügen:',
	'L_url_rss_explain' => 'URL für alle Forenbeiträge.',
	'L_url_rss_news_explain' => 'URL nur für die Foren News.',
	'L_url_rss_atom_explain' => 'URL für Atom RSS-Feed.',
	'Rss_news_help_rights' => 'Wir behalten uns das Recht vor, die Nutzung von Feeds jederzeit nach unserem Ermessen zu beenden. Unsere Foren-Feeds dürfen nicht weitervertrieben werden.',
	'Rss_news_feeds' => 'RSS News Feeds',

	'Quick_Reply' => 'Schnell-Antwort',
	'Mod_CP_sticky2' => 'Wichtig',
	'Mod_CP_announce2' => 'Ankündigung',
	'Mod_CP_global2' => 'Global',
	'Mod_CP_normal2' => 'Normal',

	'Search_Flood_Error' => 'Du kannst keine neue Suche so kurz nach deiner letzten Suche starten; Bitte versuche es in ein paar Sekunden noch einmal.',

// Custom Profile Fields MOD
	'custom_field_notice' => 'Diese Felder wurden von einem Administrator erstellt. Diese sind oder sind nicht öffentlich einsehbar. Felder die mit * gekennzeichnet sind, sind Pflichtfelder.',
	'and' => ' und ',
// END Custom Profile Fields MOD

	'dsbl' => 'Deine IP Adresse ist auf einer <a href="%url%">DNS-basierenden Schwarzen Liste</a>.<br />Registrierungsversuch wurde blockiert.<br />Bitte wende dich an einen Administrator dieser Seite.',
	'Emails_Only_To_Admins_Error' => 'Du kannst das E-Mail System nur zum Senden von E-Mails an einen Administrator nutzen.',
	'Wordgraph' => 'Tags',
	'Viewing_wordgraph' => 'Ansicht der Tags-Seite',
	'Links_For_Guests' => '<b>Du musst registriert sein, um den Link sehen zu können.</b>',
	'New' => 'N',
	'New_Label' => 'Neu',
	'New_Messages_Label' => 'Neue Nachrichten',
	'Show_Personal_Gallery' => 'Zeige persönliche Foto-Galerie dieses Benutzers',
	'Login_Status' => 'Online Status',
	'Login_Hidden' => 'Versteckt',
	'Login_Visible' => 'Sichtbar',
	'Login_Default' => 'Standard',
	'ERRORS_NOT_FOUND' => 'Die angeforderte Adresse wurde auf diesem Server nicht gefunden.',
	'ERRORS_000' => 'Unbekannter Fehler',
	'ERRORS_000_FULL' => 'Die angeforderte Adresse hat einen unbekannten Fehlercode zurückgegeben.<br />Der Fehler wurde in eine Log-Datei geschrieben und wir werden so schnell wie möglich prüfen, wo das Problem liegt.',
	'ERRORS_400' => 'Fehler 400',
	'ERRORS_400_FULL' => 'Die angeforderte Adresse ist ungültig.',
	'ERRORS_401' => 'Fehler 401 - Nicht berechtigt',
	'ERRORS_401_FULL' => 'Du erhältst diese Fehlermeldung, weil du nicht berechtigt bist, diese Adresse aufzurufen.',
	'ERRORS_403' => 'Fehler 403',
	'ERRORS_403_FULL' => 'Zugriff auf diese Adresse ist verboten.',
	'ERRORS_404' => 'Fehler 404 - Datei nicht gefunden',
	'ERRORS_404_FULL' => 'Die angeforderte Adresse wurde auf dem Server nicht gefunden. Vielleicht hast du die Adresse falsch eingegeben, oder die angeforderte Seite ist nicht mehr auf dem Server.',
	'ERRORS_500' => 'Fehler 500 - Konfigurationsfehler',
	'ERRORS_500_FULL' => 'Die angeforderte Adresse lieferte einen Konfigurationsfehler.<br />Der Fehler wurde in eine Log-Datei geschrieben und wir werden so schnell wie möglich prüfen, wo das Problem liegt.',
	'ERRORS_EMAIL_SUBJECT' => 'Fehler: ',
	'ERRORS_EMAIL_ADDRRESS_PREFIX' => 'errors_management',
	'ERRORS_EMAIL_BODY' => 'Auf deiner Seite ist ein Fehler aufgetreten. Bitte überprüfe die Log-Datei.',
	'Remote_avatar_no_image' => 'Das Bild %s ist nicht vorhanden',
	'Remote_avatar_error_filesize' => 'Das Bild ist zu groß. Avatare dürfen maximal (%d Bytes) groß sein.',
	'Remote_avatar_error_dimension' => 'Die Bildpixelgröße ist zu groß. Avatare dürfen maximal (%d x %d Pixel) groß sein.',
	'How_Many_Chatters' => 'Es sind zurzeit <b>%d</b> Benutzer im Chat.',
	'Who_Are_Chatting' => '<b>%s</b>',
	'Click_to_join_chat' => 'Hier klicken um zu chatten.',
	'ChatBox' => 'ChatBox',
	'log_out_chat' => 'Du hast Dich erfolgreich ausgeloggt ',
	'Send' => 'Senden',
	'Login_to_join_chat' => 'Einloggen, um zu chatten',

// Hacks List
/* General */
	'Hacks_List' => 'Credits',
	'Page_Desc' => 'Auf dieser Seite kannst du die Credits &amp; Mods für die Credits/Mods Liste deines Forums hinzufügen/bearbeiten/löschen. Sie werden angezeigt, wenn Benutzer die Seite hacks_list.php besuchen.',
	'Deleted_Hack' => 'Credit %s wurde von der Liste gelöscht.<br />',
	'Updated_Hack' => 'Informationen für Credit %s wurden aktualisiert.<br />',
	'Added_Hack' => 'Informationen für Credit %s hinzugefügt.<br />',
	'Status' => 'Status',
	'No_Website' => 'Keine Webseite verfügbar',
	'No_Hacks' => 'Keine Credits zum anzeigen',
	'Add_New_Hack' => 'Neuen Credit hinzufügen',
	'User_Viewable' => 'Nur Admin?',
	'Hack_Name' => 'Mod Name',
//	'Description' => 'Beschreibung',
	'Required' => 'Erforderlich',
	'Author_Email' => 'Autor E-Mail',
	'Version' => 'Version',
	'Download_URL' => 'Downloadseite',

/* Errors */
	'Error_Hacks_List_Table' => 'Fehler beim abfragen der Credit Tabelle.',
	'Required_Field_Missing' => 'Du hast nicht alle erforderlichen Informationen eingegeben.',
	'Error_File_Opening' => 'Fehler beim Öffnen von Datei: %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => 'Neuestes Bild', // Album Addon
	'Random_pic' => 'Zufälliges Bild', // Album Addon
	'Click_enlarge_pic' => 'Klicke auf das Bild, um es zu vergrößern.',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => 'Letzte benutzte IP',
	'Last_Used_OS' => 'OS',
	'Last_Used_Browser' => 'Browser',
	'Last_Used_Referer' => 'Referer',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
	'Users_Admins' => 'Administratoren',
	'Users_Mods' => 'Moderatoren',
	'Users_Global_Mods' => 'Globale Moderatoren',
	'Users_Regs' => 'Benutzer',
	'Users_Guests' => 'Gäste',
	'Users_Hidden' => 'Versteckt',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Style' => 'Style',
	'User_Contacts' => 'Kontakte',
	'Memberlist_Users_Display' => 'Benutzer pro Seite:',
	'SORT_FAST' => 'Schnell',
	'SORT_STANDARD' => 'Standard',
	'SORT_RANK' => 'Rang',
	'SORT_STAFF' => 'Team',
	'SORT_STYLE' => 'Style',
	'SORT_LASTLOGON' => 'Letzter Besuch',
	'SORT_BIRTHDAY' => 'Geburtstag',
	'SORT_ONLINE' => 'Online',
	'ASCENDING' => 'Aufsteigend',
	'DESCENDING' => 'Absteigend',
	'LESS_THAN' => 'Weniger als',
	'EQUAL_TO' => 'Gleich',
	'MORE_THAN' => 'Mehr als',
	'BEFORE' => 'Before',
	'AFTER' => 'After',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => 'Team',
	'Rank' => 'Rang',
	'Rank_Header' => 'Ränge',
	'Rank_Image' => 'Rangbild',
	'Rank_Posts_Count' => 'Automatischer Rang nach Beiträgen',
	'Rank_Days_Count' => 'Automatischer Rang nach Tagen',
	'Rank_Min_Des' => 'Minimum Beiträge/Tage',
	'Rank_Min_M' => 'Minimale Beiträge',
	'Rank_Max_M' => 'Maximale Beiträge',
	'Rank_Min_D' => 'Minimale Tage',
	'Rank_Max_D' => 'Maximale Tage',
	'Rank_Special' => 'Spezialrang',
	'Rank_Special_Guest' => 'Spezialrang für Gäste',
	'Rank_Special_Banned' => 'Spezialrang für Gesperrte',
	'Current_Rank_Image' => 'Aktuelles Rangbild',
	'No_Rank' => 'Kein Rang zugewiesen',
	'No_Rank_Image' => 'Kein Rangbild',
	'No_Rank_Special' => 'Kein Spezialrang zugewiesen',
	'Memberlist_Administrator' => 'Administrator',
	'Memberlist_Moderator' => 'Moderator',
	'Memberlist_User' => 'Benutzer',
	'Guest_User' => 'Gast',
	'Banned_User' => 'Gesperrt',
	'Rank1_title' => 'Rang 1 Titel',
	'Rank2_title' => 'Rang 2 Titel',
	'Rank3_title' => 'Rang 3 Titel',
	'Rank4_title' => 'Rang 4 Titel',
	'Rank5_title' => 'Rang 5 Titel',
// Mighty Gorgon - Multiple Ranks - END

// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => 'Links',
	'MAIN_LINKS' => 'Hauptlinks',
	'NEWS_LINKS' => 'News',
	'INFO_LINKS' => 'Info',
	'USERS_LINKS' => 'Benutzer &amp; Gruppen',
	'SELECT_STYLE' => 'Style',
	'SELECT_LANG' => 'Sprache',
	'RSS_FEEDS' => 'RSS Feeds',
	'SPONSORS_LINKS' => 'Sponsoren',
	'TOOLS_LINKS' => 'Werkzeuge',
	'HelpDesk' => 'Help Desk',
	'AvatarGenerator' => 'Avatar Generator',
	'DBGenerator' => 'SQL zu PHP Generator ',

	'LINK_ACP' => 'Admin-Bereich',
	'LINK_CMS' => 'CMS',
	'LINK_HOME' => 'Startseite',
	'LINK_PROFILE' => 'Profil',
	'LINK_FORUM' => 'Forum',
	'LINK_BOARDRULES' => 'Regeln',
	'LINK_FAQ' => 'FAQ',
	'LINK_SEARCH' => 'Suche',
	'LINK_SITEMAP' => 'Sitemap',
	'LINK_ALBUM' => 'Album',
	'LINK_CALENDAR' => 'Kalender',
	'LINK_DOWNLOADS' => 'Downloads',
	'LINK_BOOKMARKS' => 'Bookmarks',
	'LINK_DRAFTS' => 'Entwürfe',
	'LINK_UPLOADED_IMAGES' => 'Persönliche Bilder',
	'LINK_AJAX_SHOUTBOX' => 'Chat',
	'LINK_LINKS' => 'Links',
	'LINK_CONTACT_US' => 'Kontakt',
	'LINK_SUDOKU' => 'Sudoku',

	'LINK_NEWS_CAT' => 'News Kategorien',
	'LINK_NEWS_ARC' => 'News Archiv',
	'LINK_NEW_MESSAGES' => 'Neue Beiträge',
	'LINK_DISPLAY_UNREAD_S' => 'Ungelesen',
	'LINK_DISPLAY_MARKED_S' => 'Markiert',
	'LINK_DISPLAY_PERMANENT_S' => 'Permanent',
	'LINK_DIGESTS' => 'Digests',

	'LINK_CREDITS' => 'Credits',
	'LINK_REFERERS' => 'HTTP Referer',
	'LINK_VIEWONLINE' => 'Benutzer online',
	'LINK_STATISTICS' => 'Statistik',
	'LINK_DELETE_COOKIES' => 'Cookies löschen',

	'LINK_MEMBERLIST' => 'Mitgliederliste',
	'LINK_USERGROUPS' => 'Benutzergruppen',
	'LINK_RANKS' => 'Ränge',
	'LINK_STAFF' => 'Team',
// Mighty Gorgon - Nav Links - END

	'Activity' => 'Spiele',
	'Games' => 'Spiele',
	'Trohpy' => 'Spiel Pokale',
	'quick_links_games' => 'Spiele Menü',

	'By' => 'von',
	'No_Icon_Image' => 'Kein Icon',
	'Change_Style' => 'Style',
	'Change_Lang' => 'Sprache',
	'Permissions_List' => 'Berechtigungsliste',
	'IP_TEAM' => 'Icy Phoenix Team',

//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',
	'WeatherForecast' => 'Wettervorhersage',
	'ErrorNotFound' => 'Datei nicht gefunden!',
	'MGC_Users_Online' => 'MGC Benutzer Online',
	'MGC_User_Servertime' => 'Datum',
	'MGC_User_Nickname' => 'Spitzname',
	'MGC_User_Server' => 'Server',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'MGC Version',

	'Country_Flag' => 'Landesflagge',
	'Select_Country' => 'Land auswählen',
	'Extra_profile_info' => 'Zusätzliche Profil Informationen',
// 'Extra_profile_info_explain' => 'You can add extra information about yourself or about your hobbies. You can also add photos. You can use some bbcodes as when you post or make your signature. There is a <b>%d</b> character limit (if 0 then no limit)',
	'Extra_profile_info_explain' => 'Hier kannst du zusätzliche Informationen über dich oder deine Hobbies eintragen. Du kannst auch Bilder einfügen. Es ist möglich BBCode zu verwenden, welcher hier genauso funktioniert, wie beim Schreiben eines Beitrags oder wenn du deine Signatur bearbeitest.',
	'Extra_window' => 'in neuem Fenster öffnen',
	'Extra_too_long' => 'Dein Extra-Feld ist zu lang (max. <b>%d</b> Zeichen sind erlaubt)',
	'UserLike' => 'Benutzer mag',
	'UserDisLike' => 'Benutzer mag nicht',
	'UserLikeIns' => 'Drei Dinge die du magst',
	'UserDisLikeIns' => 'Drei Dinge die du nicht magst',
	'UserPhone' => 'Telefonnummer',
	'UserSport' => 'Sport/Team',
	'UserMusic' => 'Musik/Gruppen',
	'UserNoInfo' => 'Keine Informationen verfügbar',
	'LAST_SEEN' => 'Zuletzt Online',
// New MG - END

// MG CMS - BEGIN
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'CMS Verwaltung',
	'CMS_CONFIG' => 'Konfiguration',
	'CMS_SETTINGS' => 'Einstellungen',
	'CMS_ACP' => 'Bearbeite diese Seite',
	'CUSTOM_PAGE' => 'Individuelle Seitenanpassung',
// MG CMS - END

// Icy Phoenix - BUILD 001
	'SimilarTopics' => 'Ähnliche Beiträge',
	'Chat' => 'Chat',
	'DIGESTS' => 'Digests',

	'CPL_REG_INFO_EXPLAIN' => 'Benutzername, E-Mail-Adresse und Passwort',
	'CPL_PROFILE_INFO_EXPLAIN' => 'Allgemeine Kontakt Information, Messenger, Geburtstag, Interessen und andere Informationen',
	'CPL_PROFILE_VIEWED_EXPLAIN' => 'Benutzer die dein Profil angesehen haben',
	'CPL_AVATAR_PANEL_EXPLAIN' => 'Avatar ist ein kleines Bild das neben deinem Nick angezeigt wird',
	'CPL_SIG_EDIT_EXPLAIN' => 'Deine Signatur: Du kannst hier einen Text eingeben der unter jedem deiner Beiträge angezeigt wird',
	'CPL_PREFERENCES_EXPLAIN' => 'Allgemeine Einstellungen bezüglich schreiben und lesen von Mitteilungen',
	'CPL_BOARD_SETTINGS_EXPLAIN' => 'Globale Einstellungen bezüglich Zeit, Template und Sprache',
	'Calendar_settings_EXPLAIN' => 'Einstellungen bezüglich der Kalender Box',
	'Hierarchy_setting_EXPLAIN' => 'Einstellungen bezüglich der Unterforen und Themen Typen Aufteilung',
	'LOGIN_SEC_EXPLAIN' => 'Wenn dies aktiviert ist kannst du alle Logins mit deinem Benutzernamen einsehen',
	'CPL_OWN_POSTS_EXPLAIN' => 'Suche nach deinen Beiträgen',
	'CPL_OWN_PICTURES_EXPLAIN' => 'Besuche deine persönliche Foto-Galerie',
	'CPL_INBOX_EXPLAIN' => 'Eingang: beinhaltet private Nachrichten die du empfangen hast',
	'CPL_SAVEBOX_EXPLAIN' => 'Gespeicherte: beinhaltet private Nachrichten die du gespeichert hast',
	'CPL_OUTBOX_EXPLAIN' => 'Ausgang: beinhaltet private Nachrichten welche du gesendet hast, die aber noch nicht gelesen wurden',
	'CPL_SENTBOX_EXPLAIN' => 'Gesendet: beinhaltet private Nachrichten die gesendet und gelesen wurden',
	'CPL_BOOKMARKS_EXPLAIN' => 'Alle Lesezeichen die du für Themen gesetzt hast',
	'WATCHED_TOPICS_EXPLAIN' => 'Eine Liste aller Themen die du beobachtest',
	'CPL_SUBSCFORUMS_EXPLAIN' => 'Die Foren die du abonniert hast um Informationen über neue Themen zu erhalten',
	'DIGESTS_EXPLAIN' => 'Digests sind periodische E-Mails die automatisch gesendet werden mit einem Hinweis auf die neuen Nachrichten in dem entsprechenden Forum',
	'DRAFTS_EXPLAIN' => 'Verwalte deine Entwürfe',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Shoutbox',
	'Ajax_Chat' => 'Chat',
	'Ajax_Archive' => 'Archiv',
	'Shoutbox_flooderror' => 'Du kannst nicht so schnell hintereinander Shouts senden. Bitte versuche es in einem Moment noch einmal.',
	'Shoutbox_no_auth' => 'Entschuldigung, nur registrierte Benutzer können die Shoutbox benutzen',
	'Shoutbox_loading' => 'Lade Shoutbox&hellip;',
// Errors
	'Shoutbox_unable' => 'Entschuldigung, die Aktion konnte nicht ausgeführt werden. Versuch es bitte noch einmal.',
	'Shoutbox_timeout' => 'Entschuldigung, der Srever antwortet nicht. Bitte versuche es noch einmal.',
	'Shoutbox_empty' => 'Keine Mitteilungen in der Datenbank',
	'Shoutbox_no_mode' => 'Kein gültiger Mode festgelegt',
// Archive
	'Shouts' => 'Shouts',
	'Statistics' => 'Statistiken',
	'Total_shouts' => 'Shouts insgesamt',
	'Stored_shouts' => 'Gespeicherte Shouts',
	'My_shouts' => 'Meine Shouts',
	'Today_shouts' => 'Shouts in den letzten 24 Stunden',
	'Top_Ten_Shouters' => 'Top Ten Shouters',
// Online list
	'Online_total' => 'Insgesamt',
	'Online_registered' => 'Benutzer',
	'Online_guests' => 'Gäste',
	'Who_is_Chatting' => 'Wer ist im Chat',
	'Shoutbox_online_explain' => 'Diese Informationen basieren auf den Daten der aktiven Benutzer der letzten dreißig Sekunden.',
	'Start_Private_Chat' => 'Klicke auf einen Benutzernamen, um einen privaten Chat zu starten.',
// Chat rooms
	'Shout_rooms' => 'Räume',
	'Admin_rooms' => 'Alle Räume',
	'Public_room' => 'Öffentlicher Raum',
	'Private_room' => 'Privater Raum',
	'My_id' => 'Ich',
// Ajax Shoutbox - END

	'Contact_us' => 'Kontakt',
	'Contact_us_explain' => 'Auf dieser Seite kannst du uns eine E-Mail senden.',
	'Session_invalid' => 'Ungültige Session. Bitte betrete das Forum noch einmal.',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => ' dieser Benutzername ist zu kurz',
	'Reg_Username_Long' => ' dieser Benutzername ist zu lang',
	'Reg_Username_Taken' => ' dieser Benutzername ist nicht verfügbar',
	'Reg_Username_Free' => ' dieser Benutzername ist verfügbar',
	'Reg_PWD_Short' => 'Dieses Passwort ist zu kurz',
	'Reg_PWD_Easy' => 'Dieses Passwort ist zu einfach',
	'Reg_PWD_OK' => 'Dieses Passwort ist OK',
	'Reg_Email_Invalid' => ' diese E-Mail Adresse ist ungültig oder ist schon vorhanden',
	'Reg_Email_OK' => ' diese E-Mail Adresse ist OK',

// Moved here from lang_adv_time.php
	'time_mode' => 'Zeit-Verwaltung',
	'time_mode_text' => 'Forumeinstellungen werden ignoriert, wenn die Automatische Einstellung aktiviert ist (JavaScript ist für die ersten beiden erforderlich).<br />Wenn du Manuelle Einstellung gewählt hast, kannst du die Sommerzeit Differenz im Feld Sommerzeit Unterschied die Differenz zur normalen Zeit eingeben (0 bis 120 Minuten, normalerweise 60 Minuten).',
	'time_mode_auto' => 'Automatische Einstellung:',
	'time_mode_full_pc' => 'Zeit deines Computers',
	'time_mode_server_pc' => 'Server Universalzeit, Zeitzone/Sommerzeit<br /><span STYLE="margin-left: 25">deines Computers</span>',
	'time_mode_full_server' => 'Lokale Server Zeit',
	'time_mode_manual' => 'Manuell Einstellung:',
	'time_mode_dst' => 'Sommerzeit aktivieren',
	'time_mode_dst_server' => 'vom Server',
	'time_mode_dst_time_lag' => 'Sommerzeit Unterschied',
	'time_mode_dst_mn' => ' Minuten',
	'time_mode_dst_mn_explain' => 'Zeit in Minuten angegeben',
	'time_mode_timezone' => 'Zeitzone',

	'dst_time_lag_error' => 'Sommerzeit Unterschied Fehler. Der Wert muss zwischen 0 und 120 Minuten liegen.',

	'dst_enabled_mode' => ' [Sommerzeit aktiviert]',
	'full_server_mode' => 'Zeit mit dem Server synchronisiert',
	'server_pc_mode' => 'Zeitsyncronisation mit dem Server - Zeitzone/Sommerzeit mit deinem Computer',
	'full_pc_mode' => 'Zeit mit deinem Computer synchronisiert',

	'Smileys_Per_Page' => 'Smilies pro Seite',

/* lang_site_hist.php - BEGIN */
	'Site_history' => 'Seiten Historie',
	'Month' => 'Monat',
	'Week_day' => 'Wochentag',
	'Not_availble' => 'Nicht verfügbar',
	'Total_users' => 'Maximale Anzahl von Benutzern',
	'Reg_users' => 'Registrierte Benutzer',
	'Hidden_users' => 'Versteckte Benutzer',
	'Guests_users' => 'Gäste',
	'New_users' => 'Neue Benutzer',
	'New_topics' => 'Neue Themen',
	'New_posts_reply' => 'Schreiben/Antworten',
	'Most_online' => 'Benutzerrekord: %s',
	'Most_online_week' => 'Benutzerrekord der letzten 7 Tage',
	'Last_24' => 'Benutzerrekord der letzten %s Stunden',
	'Top_Posting_Users' => 'Die aktivsten Benutzer',
	'Top_Posting_Users_week' => 'Die aktivsten Benutzer diese Woche [%s]',
	'Rank' => 'Rang',
	'Percent' => 'Prozent',
	'Graph' => 'Grafik',
	'Top_Visiting_Users' => 'Benutzer die die meiste Zeit hier verbracht haben',
/* lang_site_hist.php - END */

/* lang_referers.php - BEGIN */
	'REFERERS' => 'Http Referer',
	'VIEWING_REFERERS' => 'Referer anzeigen',
	'REFERERS_TITLE' => 'Http Referers Management',
	'REFERERS_CLEARED' => 'Referer gelöscht',
	'REFERERS_CLEAR' => 'Alle löschen',
	'CLICK_RETURN_REFERERS' => 'Klicke %shier%s, um zu den Referer zurückzukehren.',
	'REFERER_HOST' => 'Host',
	'REFERER_URL' => 'URL',
	'REFERER_T_URL' => 'Besuchte URL',
	'REFERER_IP' => 'IP',
	'REFERER_HITS' => 'Treffer',
	'REFERER_FIRST' => 'Erster Besuch',
	'REFERER_LAST' => 'Letzter Besuch',
	'REFERER_DELETE' => 'Löschen',
	'REFERER_KILL' => 'Remove from DB (use * for wildcard)',
	'REFERER_GROUP_BY' => 'Gruppieren nach',
/* lang_referers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_DAYS' => '%d Tage',
	'X_WEEKS' => '%d Wochen',
	'X_MONTHS' => '%d Monate',
	'X_YEARS' => '%d Jahre',

	'Confirm_delete_user' => 'Bist du Dir wirklich sicher, dass du diesen Benutzer löschen willst?',
	'Prune_no_users' => 'Es wurden keine Benutzer gelöscht.',
	'Prune_users_number' => '%d Benutzer wurden gelöscht:',

	'Prune_user_list' => 'Benutzer, die gelöscht werden',
	'Prune_on_click' => 'Du bist dabei, %d Benutzer zu löschen. Fortfahren?',
	'Prune_Action' => 'Aktionen',
	'Prune_users_explain' => 'Von dieser Seite aus kannst du inaktive Benutzer löschen. Dabei kannst du zwischen drei Arten wählen: Benutzer löschen, die noch nie etwas geschrieben haben, diejenigen, die sich noch nie eingeloggt haben, oder diejenigen, die ihr Benutzer-Konto noch nicht freigeschaltet haben.<p/><b> !Achtung! </b> Du kannst diese Aktion nicht wieder rückgängig machen, alle Benutzer aus der Liste werden gelöscht, sobald du auf den Link geklickt hast.',
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => 'Avatar Generator',
	'Available' => 'Verfügbare Avatare',
	'Random' => 'Zufälliger Avatar',
	'Avatar_Text' => 'Bitte gib den Text ein, der auf dem Avatar stehen soll:',
	'Avatar_Preview' => 'Avatar-Vorschau',
	'Your_Avatar' => 'Dein Avatar',
	'Submit_Avatar' => 'Avatar bestätigen',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Uploading' => 'Wird hochgeladen&hellip;',
	'Upload_Image_Local' => 'Bild hochladen',
	'Uploaded_Images_Local' => 'Persönliche Bilder',
	'Upload_Image_Local_Explain' => 'Wähle das Bild aus, das du hochladen möchtest.',
	'Uploaded_Image_Success' => 'Das Bild wurde erfolgreich hochgeladen.',
	'Uploaded_Image_BBC' => 'Du kannst diesen BBCode benutzen, um das Bild zu posten.',
	'Upload_Image_Empty' => 'Das Bild konnte nicht hochgeladen werden!',
	'Upload_File_Too_Big' => 'Das Bild, das du hochladen wolltest, ist zu groß! Max erlaubte Größe:',
	'Upload_File_Error' => 'Unbekannter Fehler',
	'Upload_File_Error_Size' => 'Dateigröße nicht erlaubt!',
	'Upload_File_Error_Type' => 'Dateityp nicht erlaubt!',
	'Upload_File_Type_Allowed' => 'Nur diese Datei-Arten können hochgeladen werden',
	'Upload_File_Max_Size' => 'Die maximal erlaubte Größe einer Datei ist',
	'Upload_Insert_Image' => 'Füge BBCode ein',
	'Upload_Close' => 'Schließen',
	'BBCode' => 'BBCode',
	'HTML' => 'HTML',

	'No_News' => 'Keine News',

	'Email_confirm' => 'Bestätige deine E-Mail-Adresse',
	'Email_mismatch' => 'Die E-Mail-Adressen die du eingegeben hast, sind nicht gleich.',

	'View_ballot' => 'Zeige Abstimmung',
	'Full_edit' => 'Zur vollständigen Bearbeitungsansicht wechseln',
	'Save_changes' => 'Speichern',
	'No_subject' => '(Kein Betreff)',
	'Edit_quick_post' => 'Schnellbearbeitung dieses Beitrags',
	'AJAX_search_results' => 'Eine Schnellsuche hat %s Themen mit den Schlüsselwörtern aus deinem Thementitel gefunden. Klickt hier, um diese Themen anzusehen.',
	'AJAX_search_result' => 'Eine Schnellsuche hat ein Thema mit den Schlüsselwörtern aus deinem Thementitel gefunden. Klickt hier, um dieses Thema anzusehen.',
	'More_matches_username' => 'Mehr als ein Benutzer passt zu deiner Anfrage. Bitte wähle einen aus der obigen Box aus.',
	'No_username' => 'Du musst einen Benutzernamen eingeben.',
	'AJAX_quick_search_results' => 'Eine Schnellsuche hat %s Themen mit diesen Schlüsselwörtern gefunden.<br />Rechts kannst du die ersten Ergebnisse sehen.<br />Klicke auf SUCHEN, um die komplette Ergebnisliste zu erhalten.',
	'AJAX_quick_search_result' => 'Eine Schnellsuche hat ein Thema mit diesen Schlüsselwörtern gefunden.<br />Rechts kannst du das Ergebnis sehen.',

	'Icon_Description' => 'Icon Beschreibung',

	'Feature_Disabled' => 'Diese Funktion wurde deaktiviert.',

// Resend Activation - BEGIN
	'Resend_activation_email' => 'Sende Aktivierungs-E-Mail erneut!',
	'Invalid_activation' => 'Benutzer-Konto Aktivierung kann nur von einem Administrator durchgeführt werden.',
	'No_actkey' => 'Es existiert kein Aktivierung-Schlüssel für dein Konto. Bitte kontaktiere den Administrator für mehr Informationen.',
	'Send_actmail_flood_error' => 'Du kannst nicht so schnell eine erneute Anfrage nach deiner letzten senden! Bitte versuche es später noch einmal.',
	'Resend_activation_email_done' => 'Die Aktivierungs-E-Mail wurde gesendet. Bitte prüfe dein E-Mail Postfach für weitere Informationen.',
// Resend Activation - END

	'Bots_Group' => 'Bots',
	'Bots_Color' => 'Bots Farbe',
	'Active_Users_Group' => 'Aktive Benutzer',
	'Active_Users_Color' => 'Aktive Benutzer Farbe',
	'Group_Default_Membership' => 'Standard Gruppe',
	'Group_Default_Membership_Explain' => 'Wähle die Standard Gruppe für Benutzer, um Ihnen einen Rang und die Farbe zuzuweisen.',
	'User_Color' => 'Benutzer Farbe',
	'User_Color_Explain' => 'Wenn du eine Farbe für diesen Benutzer bestimmst, wird dies mit der Standard Gruppe überschrieben, wenn du oben eine angegeben hast. Benutze den HEX Code ohne <b>#</b> Beispiel: ff0000 ist der Code für ROT.',
	'No_Groups_Membership' => 'Keine Mitgliedschaft',
	'No_Default_Group' => 'Keine Standard Gruppe',
	'Group_members_updated' => 'Gruppen Mitglieder wurden erfolgreich aktualisiert.',
	'Colorize_All' => 'Färbe alle Mitglieder',
	'Colorize_Selected' => 'Färbe ausgewählte',

	'CompanyWho' => 'Das Unternehmen',
	'CompanyWhere' => 'Wie du uns erreichst',
	'CompanyServices' => 'Services',
	'CompanyProducts' => 'Produkte',

	'ShareThisTopic' => 'Verteile dieses Thema',

	'Remove_cookies' => 'Entferne die Cookies die von dieser Seite gesetzt wurden',
	'Cookies_deleted' => 'Alle Cookies wurden gelöscht. Du bist nun ausgeloggt.<br />Um das Löschen abzuschließen musst du nun deinen Browser schließen.',
	'Delete_cookies' => 'Entferne Cookies',
	'cookies_confirm' => 'Bist du sicher das du alle Cookies die von dieser Seite gesetzt wurden, löschen willst?<br /><br />Diese Aktion wird Dich auch automatisch ausloggen.',

	'CustomIcy' => 'CustomIcy',

	'Drafts' => 'Entwürfe',
	'Drafts_Action' => 'Aktion',
	'Drafts_Save' => 'Speichern',
	'Drafts_Load' => 'Laden',
	'Drafts_Saved' => 'Dieser Entwurf wurde gespeichert',
	'Drafts_Loaded' => 'Entwurf geladen',
	'Drafts_No_Drafts' => 'Keine Entwürfe gespeichert',
	'Drafts_Delete_Sel' => 'Lösche ausgewählte',
	'Drafts_Save_Question' => '<br /><br />Bist du Dir sicher diese Nachricht als Entwurf zu speichern?<br /><br />Bitte beachte das nur der Mitteilungstext gespeichert wird, alle anderen Einstellungen werden verworfen.',
	'Drafts_Delete_Question' => '<br /><br />Bist du Dir sicher alle ausgewählten Entwürfe zu löschen?',
	'Drafts_Type' => 'Entwurf Typ',
	'Drafts_Subject' => 'Entwurf Titel',
	'Drafts_NT' => 'Neues Thema',
	'Drafts_NM' => 'Antworten',
	'Drafts_NPM' => 'Private Nachricht',

	'CannotEditAdminsPosts' => 'Du kannst keine Administrator Beiträge bearbeiten',
	'Random_Number' => 'Zufällige Nummer',

	'New_download' => 'Ein neuer Download wurde hinzugefügt oder aktualisiert.<br />Klicke %shier%s, um ihn zu sehen.',
	'Dl_bug_tracker' => 'Bug Tracker',
	'Downloads_ADV' => 'Downloads ADV',

	'TopicUseful' => 'War das Thema hilfreich?',
	'Article' => 'Artikel',
	'Comments' => 'Kommentare',

	'Sitemap' => 'Sitemap',

	'Delete_My_Account' => 'Benutzer-Konto löschen',
	'Delete_My_Account_Explain' => 'Wenn du dein Benutzer-Konto auf dieser Seite löschen möchtest, dann schicke bitte einen Antrag unter Benutzung dieses Formulars und dein Konto wird so bald wie möglich gesperrt.<br />Bitte gib &quot;Konto-Löschung&quot; im Betreff an und (wenn du möchtest) schreib den Grund in wenigen Worten.',

	'KB_MODE_ON' => 'Aktiviere KB Methode',
	'KB_MODE_OFF' => 'Deaktiviere KB Methode',

	'Go_To_Page_Number' => 'Gehe zur Seite',

	'Admin_Emails' => 'Administratoren können mir Informationen per E-Mail senden',
	'Allow_PM_IN' => 'Erlaube Benutzer mir private Nachrichten zu schreiben',
	'Allow_PM_IN_Explain' => 'Denke daran, dass diese Option den Administratoren, Moderatoren und Freunden erlaubt, dir jederzeit eine Nachricht schreiben zu können.',
	'Allow_PM_IN_SEND_ERROR' => 'Der Benutzer, dem du eine PN senden wolltest, könnte deine Mitteilung nicht empfangen, da er private Mitteilungen nicht empfangen möchte.',

// 'UCP_ZEBRA' => 'Freunde &amp; Feinde',
	'UCP_ZEBRA' => 'Freund-Verwaltung',
	'UCP_ZEBRA_FOES' => 'Feinde verwalten',
	'UCP_ZEBRA_FRIENDS' => 'Freunde verwalten',

	'ADD_FOES' => 'Neue Feinde hinzufügen',
	'ADD_FOES_EXPLAIN' => 'Du kannst mehrere Benutzernamen, jeden auf einer anderen Linie eintragen.',
	'YOUR_FOES' => 'Deine Feinde',
	'YOUR_FOES_EXPLAIN' => 'Um Benutzernamen zu entfernen wähle sie aus und klicke absenden.<br />Tipp zum Auswählen: Benutze STRG + anklicken des Namens um mehrere auszuwählen.',
	'FOE_MESSAGE' => 'Nachricht von Feinden',
	'FOES_EXPLAIN' => 'Feinde sind Benutzer, die normalerweise ignoriert werden. Einträge dieser Benutzer werden nicht vollständig sichtbar sein. Persönliche Mitteilungen von den Feinden sind jedoch gestattet. Nachrichten von Moderatoren oder Administratoren kannst du allerdings nicht ignorieren.',
	'FOES_UPDATED' => 'Deine Feind-Liste wurde erfolgreich aktualisiert.',
	'FOES_UPDATE_ERROR' => 'Deine Feind-Liste wurde nicht aktualisiert.',
	'NO_FOES' => 'z.Z. keine Feinde definiert',

	'ADD_FRIENDS' => 'Neue Freunde hinzufügen',
	'ADD_FRIENDS_EXPLAIN' => 'Du kannst mehrere Benutzernamen, jeden auf einer anderen Linie eintragen.',
	'YOUR_FRIENDS' => 'Deine Freunde',
	'YOUR_FRIENDS_EXPLAIN' => 'Um Benutzernamen zu entfernen wähle sie aus und klicke absenden.<br />Tipp zum Auswählen: Benutze STRG + anklicken des Namens um mehrere auszuwählen.',
	'FRIEND_MESSAGE' => 'Nachricht von Freunden',
	'FRIENDS' => 'Freunde',
	'FRIENDS_EXPLAIN' => 'Schnellzugriff zu Freunden ermöglichen mit denen du häufig kommunizierst. Wenn das Template die Möglichkeit unterstützt, werden alle Einträge hervorgehoben, die von Freunden erstellt wurden.',
	'FRIENDS_UPDATED' => 'Deine Freunde-Liste wurde erfolgreich aktualisiert.',
	'FRIENDS_UPDATE_ERROR' => 'Deine Freunde-Liste wurde nicht aktualisiert.',
	'FRIENDS_ONLINE' => 'Online',
	'FRIENDS_HIDDEN' => 'Versteckt',
	'FRIENDS_OFFLINE' => 'Offline',
	'NO_FRIENDS' => 'z.Zt. keine Freunde festgelegt',
	'NO_FRIENDS_OFFLINE' => 'Keine Freunde offline',
	'NO_FRIENDS_ONLINE' => 'Keine Freunde online',

	'Default' => 'Standard',

	'Reserved_Author' => '[ VERSTECKT ]',
	'Reserved_Topic' => '[ THEMA VERBEHALTEN ]',
	'Reserved_Post' => '[ BEITRAG VORBEHALTEN ]',

	'THANKS_RECEIVED' => 'Erhaltene Danksagungen',

	'RECENT_USER_ACTIVITY' => 'Letzte Benutzer Aktion',
	'USER_TOPICS_STARTED' => 'Gestartete Themen',
	'USER_POSTS' => 'Geschriebene Beiträge',
	'USER_TOPICS_VIEWS' => 'Angesehene Themen',
	'RECENT_USER_STARTED_TITLE' => 'gestartet von %s',
	'RECENT_USER_STARTED_NAV' => 'Von %s gestartet Themen',
	'RECENT_USER_POSTS_TITLE' => 'indem %s einen Beitrag geschrieben hat',
	'RECENT_USER_POSTS_NAV' => 'Themen in denen %s einen Beitrag geschrieben hat',
	'RECENT_USER_VIEWS_TITLE' => 'angesehen von %s',
	'RECENT_USER_VIEWS_NAV' => 'Von %s angesehen Themen',

	'WARN_NO_BUMP' => 'Du bist der letzte der in diesem Thema einen Beitrag geschrieben hat: Du kannst in den nächsten 24 Stunden keinen neuen Beitrag in diesem Thema schreiben es sei denn jemand anderes antwortet in der Zeit auf deinen Beitrag. Ändere statt dessen deinen alten Beitrag sinnvoll ab!',

	'LINK_THIS_TOPIC' => 'Verlinke dieses Thema',
	'LINK_URL' => 'URL',
	'LINK_BBCODE' => 'BBCode',
	'LINK_HTML' => 'HTML',

	'NEWS_POSTED' => 'Geschriebene News durchsuchen',
	'TOPICS_POSTED' => 'Gestartete Themen durchsuchen',
	'POSTS_POSTED' => 'Alle Benutzer-Beiträge durchsuchen',

	'ACCOUNT_DELETION_REQUEST' => 'Benutzer %s hat die Löschung seines Accounts beantragt.',

	'SORT_TOPICS' => 'Sortiere Themen',
	'SORT_TOPICS_NEWEST' => 'Neuesten',
	'SORT_TOPICS_OLDEST' => 'Ältesten',

	'EDIT_POST_DETAILS' => 'Beitragsangaben ändern',
	'CURRENT_POSTER' => 'Aktueller Poster',
	'NEW_POSTER' => 'Neuer Poster',
	'DETAILS_CHANGED' => '<b>Beitragsangaben wurden erfolgreich geändert.</b></span><br /><span class="postdetails">Dieses Fenster wird in 3 Sekunden geschlossen.',

	'Redirect' => 'Weiterleiten',
	'Redirect_to' => 'Wenn dein Browser keine META Weiterleitung unterstützt, dann klicke bitte %shier%.',

	'InProgress' => 'In Entwicklung',

	'HAPPY_BIRTHDAY' => 'Happy Birthday',

	'DOWNLOAD' => 'Download',
	'DOWNLOADED' => 'Heruntergeladen',
	'FILESIZE' => 'Dateigröße',
	'FILENAME' => 'Dateiname',
	'FILE_NOT_AUTH' => 'Du bist nicht berechtigt diese Datei herunterzuladen',
	'SHOW_POSTS_FROM' => 'Zeige Beiträge von',
	'SHOW_POSTS_TO' => 'an',

	'SEE_MORE_DETAILS' => 'Mehr Details sehen&hellip;',
	'UNKNOWN' => 'Unbekannt',
	'MASS_PM' => 'Massen-PN',
	'TEXT_FORMAT' => 'Format',
	'SENDER' => 'Absender',
	'PM_NOTIFICATION' => 'Hallo,<br /><br />Du hast eine neue private Nachricht von &quot;{SITENAME}&quot; erhalten.<br /><br />Du kannst dir deine neue Nachricht anschauen, indem du auf den nachstehenden Link klickst:<br /><br />{U_INBOX}<br /><br />',

	'GSEARCH' => 'Google Suche',
	'GSEARCH_ENGINE' => 'Google-Suchmaschine benutzen',
	'SEARCH_WHAT' => 'Was suchen',
	'SEARCH_WHERE' => 'Wo suchen',
	'SEARCH_THIS_FORUM' => 'Dieses Forum durchsuchen&hellip;',
	'SEARCH_THIS_TOPIC' => 'Dieses Thema durchsuchen&hellip;',
	'VF_ALL_TOPICS' => 'Alle Themen',

	'WHITE_LIST_MESSAGE' => 'Diese Seite benötigt eine Benutzerkonto Freischaltung via Email. Bitte überprüfe das diese Domain auf der White-Liste (erlaubte Domains) deines Anti-Spam-Systems steht, andernfalls wirst du die Aktivierungsmitteilung nicht erhalten können.',
	'CLICK_RETURN_HOME' => 'Klicke %shier%s, um zur Startseite zurückzukehren.',

	'RATINGS' => 'Bewertungen',

	'ERROR_TABLE' => 'Konnte nicht zur %s Tabelle verbinden',

	'SMILEYS' => 'Smilies',
	'SMILEYS_NO_CATEGORIES' => 'Keine Kategorien festgelegt',
	'SMILEYS_CATEGORY' => 'Kategorie',
	'SMILEYS_GALLERY' => 'Smilies-Galerie',
	'SMILEYS_STANDARD' => 'Standard Smilies',

	'QUICK_LIST' => 'Vollständige Liste',
	'NORMAL_LIST' => 'Normale Liste',

	'RETURN_PAGE' => '%sZurück zur vorherigen Seite%s',
	'FILE_NOT_FOUND' => 'Datei nicht gefunden',
	'FSOCK_DISABLED' => 'FSOCK deaktiviert',

	'MANAGEMENT' => 'Management',
	'SORT_ORDER' => 'Sortieren nach',
	'SORT_DIR' => 'Sortier-Richtung',

	'CONTACTS' => 'Kontakte',

	// Event Registration - BEGIN
	'Reg_Title' => 'Event Anmeldung',
	'Post_Registration' => 'Event Anmeldung',
	'Add_registration' => 'Eine Event Anmeldung hinzufügen',
	'Add_reg_explain' => '&nbsp;&bull; Wähle <i>Aktivieren</i> um ein Registrierungsformular mit diesem Posting anzuzeigen. Entferne den Haken bei <i>Aktivieren</i> um es zu verstecken.<br />&nbsp;&bull; Wähle <i>Zurücksetzen</i> um alle gegenwärtigen Registrierungen für dieses Formular zu löschen.<br />&nbsp;&bull; Gib eine Zahl in <i>Plätze</i> ein, um Registrierungen für eine Option zu beschränken. &quot;0&quot; oder leer = unendlich',
	'reg_activate' => 'Aktivieren',
	'reg_reset' => 'Zurücksetzen',
	'Reg_Insert' => 'Du bist für das Event angemeldet.',
	'Reg_Change' => 'Anmeldung wurde geändert.',
	'Reg_Confirm' => 'Anmeldung wurde bestätigt.',
	'Reg_Unregister' => 'Anmeldung wurde entfernt.',
	'Reg_Max_Registrations' => 'Das Maximum von Registrierungen für diese Option ist erreicht. Es werden keine weiteren Registrierungen mehr akzeptiert.',
	'Reg_No_Slots_Left' => 'Es sind leider keine Plätze mehr frei.',
	'Reg_One_Slot_Left' => 'Es ist noch ein Platz frei.',
	'Reg_Slots_Left' => '%s Plätze sind noch frei.',
	'Reg_Self_Unregister' => 'Anmeldung löschen',
	'Reg_Own_Confirmation' => 'Bestätigung',
	'Reg_Own_Confirmed' => 'bestätigt',
	'Reg_Green_Option' => 'Grüne Option',
	'Reg_Blue_Option' => 'Blaue Option',
	'Reg_Red_Option' => 'Rote Option',
	'Reg_Value_Max_Registrations' => 'Plätze',
	'Reg_Do' => 'Zusagen',
	'Reg_Maybe' => 'Unsicher',
	'Reg_Dont' => 'Absagen',
	'Reg_Head_Username' => 'Benutzer:',
	'Reg_Head_Time' => 'Datum:',
	'Reg_for' => 'Anmeldung läuft für',
	'Reg_for_explain' => '[ Gib 0 ein, oder freilassen für eine endlose Registrierung ]',
	'Reg_no_options_specified' => 'Du musst eine Option auswählen, für die du dich registrieren möchtest.',
	'Reg_event_date' => '<b>Event Datum: </b>',
	// Event Registration - END

	'REPLY_PREFIX_OLD' => 'Re: ',
	'REPLY_PREFIX' => 'Re: ',

	'READ_ONLY_FORUM' => 'Es tut uns leid, aber z.Z. hat dieses Forum den <b>NUR LESEN</b> Status. Das bedeutet, dass du nichts posten kannst, auch wenn du sonst die Rechte dafür hast. Bitte versuch es später noch einmal.',

	// Tickets Submission - BEGIN
	'TICKET_CAT' => 'Kategorie',
	// Tickets Submission - END

	'LIMIT_EDIT_TIME_WARN' => 'Es tut uns leid, aber du darfst deine Beiträge nur innerhalb der ersten <b>%d</b> Minute(n) bearbeiten.',
	'CLEAN_NAME' => 'Clean Name',
	'CLEAN_NAME_EXPLAIN' => 'Nur alphanumerische Zeichen und Bindestriche erlaubt',
	'TOPIC_TAGS' => 'Tags und Schlüsselwörter',
	'TOPIC_TAGS_EXPLAIN' => 'Trenne jeden Tag durch ein Komma',
	'TOPIC_TAGS_CLOUDS' => 'Tags And Keywords Cloud',
	'TOPIC_TAGS_LIST' => 'Tags und Schlüsselwörter',
	'TAG_COUNT' => 'Counter',
	'TAG_TEXT' => 'Tag',
	'TAGS_TEXT' => 'Tags',
	'TAG_RESULTS' => 'Ausgewählter Tag: <b>%s</b>',
	'TAGS_SEARCH' => 'Suche einen Tag&hellip;',
	'TAGS_SEARCH_NO_RESULTS' => 'Keinen Tag gefunden!',
	'TAGS_NO_TAGS' => 'Kein Tag bisher festgelegt',
	'TAGS_NO_TAG' => 'Vorgegebener Tag ist nicht vorhanden',

	'SQL_ERROR_OCCURRED' => 'Ein SQL-Fehler ist beim LAden der Seite aufgetreten. Kontaktieren bitte den Administrator, falls dieses Problem weiterhin bestehen sollte.',

	'PLUGIN_DISABLED' => 'Dieses Plugin ist zurzeit deaktivert.',

	'AJAX_SHOUTBOX' => 'Chat',
	'AJAX_SHOUTBOX_PVT' => 'Privater Chat',
	'AJAX_SHOUTBOX_PVT_LINK' => 'Direkter Chat mit diesem Benutzer',
	'AJAX_SHOUTBOX_PVT_ALERT' => 'Du hast eine Chat-Anfrage.',

	// COMMON DB - BEGIN
	'SELECT_SORT_METHOD' => 'Sort by',
	'ORDER' => 'Sort method',
	'DATE' => 'Datum',
	'USERID' => 'Benutzer-ID',
	'USERNAME' => 'Benutzername',
	'EMAIL' => 'E-Mail',
	'WEBSITE' => 'Website',
	'EDIT' => 'Bearbeiten',
	'DELETE' => 'Löschen',
	'YES' => 'Ja',
	'NO' => 'Nein',

	'DB_ITEM_VIEW' => 'View Item',
	'DB_ITEM_UPDATED' => 'Item updated successfully',
	'DB_ITEM_ADD' => 'Add Item',
	'DB_ITEM_ADDED' => 'Item added successfully',
	'DB_ITEM_REMOVED' => 'Item removed successfully',
	'DB_ITEM_NO_ITEMS' => 'No Items',
	'DB_ITEM_CLICK_VIEW_ITEM' => 'Klicke %shier%s, um die hinzugefügten Daten anzusehen.',
	'DB_ITEM_CLICK_RETURN_ITEMS' => 'Klicke %shier%s, um zur list page zurückzukehren.',
	// COMMON DB - END

	'LOGIN_ATTEMPTS_EXCEEDED' => 'Die maximale Anzahl von %s Login-Versuchen ist erreicht. Du kannst dich deshalb in den nächsten %s Minuten nicht einloggen.',
	'LOGIN_CONFIRM_EXPLAIN' => 'Um einen Brute-Force-Angriff auf Benutzerkonten zu verhindern, müsst du nach einer bestimmten Zahl von fehlerhaften Anmeldungen einen Bestätigungscode angeben. Der Code wird im unten stehenden Bild angezeigt. Wenn du nur über ein eingeschränktes Sehvermögen verfügen oder aus einem anderen Grund den Code nicht lesen kannst, kontaktiere bitte den %sAdministrator%s.',
	'LOGIN_ERROR_ATTEMPTS' => 'Du hast die zuöässige Anzahl von Login-Versuchen überschritten. Deshalb musst du nun zusätzlich zum Benutzernamen und Passwort, auch den Bestätigungs-Code von dem Bild mit angeben.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE' => 'Du konntest von Apache nicht authentifiziert werden.',
	'LOGIN_ERROR_PASSWORD' => 'Du hast ein falsche Passwort angegeben. Bitte überprüfe dein Passwort und versuche es erneut. Wenn du weiterhin Probleme haben solltest, kontaktiere den %sAdministrator%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT' => 'Es war leider nicht möglich dein Passwort (beim Update der Website) zu konvertieren. Bitte %sfordere ein neues Passwort%s an. Wenn du weiterhin Probleme haben solltest, kontaktiere den %sAdministrator%s.',
	'LOGIN_ERROR_USERNAME' => 'Du hast einen falschen Benutzernamen angegeben. Bitte überprüfe deinen Benutzernamen und versuche es erneut. Wenn du weiterhin Probleme haben solltest, kontaktiere den %sAdministrator%s.',
	'NO_PASSWORD_SUPPLIED' => 'Du kannst dich nicht ohne ein Passwort anmelden.',
	'ACTIVE_ERROR' => 'Dein angegebener Benutzername ist derzeit inaktiv. Wenn du weiterhin Probleme hast dein Konto zu aktivieren, dann kontaktiere bitte den %sAdministrator%s.',

	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',
	'GB' => 'GB',

	'NO_EVENTS' => 'Keine aktuellen Termine vorhanden.',
	'EVENT_START_DATE' => 'Datum',
	'EVENT_START_TIME' => 'Uhrzeit',
	'EVENT_END_DATE' => 'Datum Ende',
	'EVENT_END_TIME' => 'Uhrzeit Ende',
	'EVENT_TITLE' => 'Veranstaltung',
	'EVENT_FORUM' => 'Kategorie',

	'MAX_OPTIONS_SELECT' => 'Du kannst bis zu <strong>%d</strong> Optionen auswählen.',
	'MAX_OPTION_SELECT' => 'Du kannst nur <strong>1</strong> Option auswählen.',
	'NO_POLLS' => 'Keine Umfragen',
	'NO_VOTE_OPTION' => 'Du musst mindestens eine Option auswählen.',
	'NO_VOTES' => 'Keine Abstimmungen',
	'POLL_ENDED_AT' => 'Umfrage endet am %s',
	'POLL_MAX_OPTIONS' => 'Max Optionen',
	'POLL_MAX_OPTIONS_EXPLAIN' => 'Maximale Anzahl an Optionen, die vom Benutzer ausgewählt werden können.',
	'POLL_NO_GUESTS' => 'Entschuldigung, aber Gäste dürfen nicht abstimmen.',
	'POLL_RUN_TILL' => 'Umfrage läuft bis %s',
	'POLL_VOTE_CHANGE' => 'Änderung der Stimmabgabe erlauben',
	'POLL_VOTED_OPTION' => 'Du hast bei der Umfrage schon abgestimmt.',
	'TOO_MANY_VOTE_OPTIONS' => 'Du hast zu viele Optionen ausgewählt.',
	'VIEW_POLL' => 'Umfrage anzeigen',
	'VOTE_SUBMITTED' => 'Deine Stimme wurde verarbeitet.',
	'VOTE_CONVERTED' => 'Changing votes is not supported for converted polls.',

	'FORM_INVALID' => 'Das übermittelte Formular war ungültig. Bitte versuche es noch einmal einzureichen.',

	'NO_USERS_FOUND' => 'Keine Benutzer gefunden',
	'POST_IP' => 'IP Adresse',
	'FIND_USERNAME' => 'Mitglied finden',
	'FIND_USERNAME_HIDE' => 'Blende die &quot;Mitglied finden&quot; Anzeige aus',
	'FIND_USERNAME_EXPLAIN' => 'Use this form to search for specific members. You do not need to fill out all fields. To match partial data use * as a wildcard. When entering dates use the format <kbd>YYYY-MM-DD</kbd>, e.g. <samp>2004-02-29</samp>. Use the mark checkboxes to select one or more usernames (several usernames may be accepted depending on the form itself) and click the Select Marked button to return to the previous form.',

	'AUTH_NONE' => 'NONE',
	'AUTH_ALL' => 'ALL',
	'AUTH_REG' => 'REG',
	'AUTH_SELF' => 'SELF',
	'AUTH_PRIVATE' => 'PRIVATE',
	'AUTH_MOD' => 'MOD',
	'AUTH_JADMIN' => 'J ADMIN',
	'AUTH_ADMIN' => 'ADMIN',

	'SHARE' => 'Share',
	'LIKE' => 'Gefällt mir',
	'UNLIKE' => 'Gefällt mir nicht',
	'LIKE_POST' => 'Beitrag gefällt mir',
	'UNLIKE_POST' => 'Beitrag gefällt mir nicht',
	'LIKE_TIME' => 'Datum',
	'LIKE_RECAP' => 'Benutzer, denen der Beitrag gefällt',
	'LIKE_COUNTER_YOU' => 'Dir gefällt der Beitrag',
	'LIKE_COUNTER_YOU_OTHERS_SINGLE' => 'Dir und %s gefällt der Beitrag',
	'LIKE_COUNTER_YOU_OTHERS' => 'Dir und %s Benutzern gefällt der Beitrag',
	'LIKE_COUNTER_OTHERS' => '%s Benutzern gefällt der Beitrag',
	'LIKE_COUNTER_OTHERS_SINGLE' => '%s gefällt der Beitrag',

	'FRIENDSHIP_STATUS' => 'Freundschafts-Status',
	'FRIEND_ADD' => 'Als Freund hinzufügen',
	'FRIEND_REMOVE' => 'Als Freund entfernen',
	'FOE_ADD' => 'Als Feind hinzufügen',
	'FOE_REMOVE' => 'Als Feind entfernen',

	'SOCIAL_NETWORKS' => 'Soziale Netzwerke',
	'USER_FIRST_NAME' => 'Vorname',
	'USER_LAST_NAME' => 'Nachname',
	'FACEBOOK' => 'Facebook',
	'TWITTER' => 'Twitter',

	'INACTIVE_USER' => 'Inaktiver Benutzer',
	'SEARCH_MIN_CHARS' => 'Du musst mindestens %s Zeichen eingeben, um suchen zu können.',

	'EXTRA_STATS_SHOW' => 'Zusätzliche Statistik anzeigen',
	'EXTRA_STATS_HIDE' => 'Zusätzliche Statistik ausblenden',
	'RESERVED' => 'Reserviert',

	'VIEW_TOPICS_DAYS' => 'Anzeige der Themen der letzten Tage',
	'VIEW_TOPICS_DIR' => 'Anzeige der Themasortierung',
	'VIEW_TOPICS_KEY' => 'Anzeige Themen sortieren nach',
	'VIEW_POSTS_DAYS' => 'Anzeige der Beiträge der letzten Tage',
	'VIEW_POSTS_DIR' => 'Anzeige der Beitragsortierung',
	'VIEW_POSTS_KEY' => 'Anzeige Beiträge sortieren nach',

	'AUTHOR' => 'Author',
	'POST_TIME' => 'Uhrzeit',
	'REPLIES' => 'Antworten',
	'SUBJECT' => 'Betreff',
	'VIEWS' => 'Aufrufe',

	'INVALID' => 'Ungültige Daten.',
	'TOO_LARGE' => 'Der eingegebene Wert ist zu groß.',
	'TOO_LONG' => 'Der eingegebene Wert ist zu lang.',
	'TOO_SHORT' => 'Der eingegebene Wert ist zu kurz.',
	'TOO_SMALL' => 'Der eingegebene Wert ist zu klein.',
	'WRONG_DATA' => 'Ungültige Daten.',

	'ATTACHMENTS' => 'Dateianhänge',
	'ERROR_NO_ATTACHMENT' => 'Die Datei, die du herunterladen möchtest, existiert nicht.',
	'NO_FORUM' => 'Das ausgewählte Forum existiert nicht.',
	'NO_TOPIC' => 'Das Thema oder der Beitrag existiert nicht.',
	'NO_USER' => 'Dieser Benutzer existiert nicht.',

	'AJAX_SEARCH' => 'Suche&hellip;',

	'FLICKR' => 'Flickr',
	'GOOGLEPLUS' => 'Google Plus',
	'LINKEDIN' => 'LinkedIn',
	'YOUTUBE' => 'YouTube',

	'MOBILE_STYLE_ENABLE' => 'Aktiviere Mobil freundlichen Style',
	'MOBILE_STYLE_DISABLE' => 'Deaktiviere Mobil freundlichen Style',

	'INVALID_SESSION' => 'Ungültige Sitzung. Wenn das Problem weiterhin besteht, wende dich bitte an einen Administrator.',

	'BACK_TO_TOP' => 'Top',
	'BACK_TO_PREV' => 'Zurück zur vorherigen Seite',

	'CMS_EDIT_PARENT_BLOCK' => 'Edit Parent Block',

	'UPI2DB_DISABLED' => 'UPI2DB deaktiviert',
	'UPI2DB_LINK_U' => 'UPI2DB ungelesen',
	'UPI2DB_LINK_M' => 'UPI2DB markiert',
	'UPI2DB_LINK_P' => 'UPI2DB permanent gelesen',
	'UPI2DB_LINK_FULL' => 'UPI2DB ausführliche Info',
	'NEW_POSTS_LINK' => 'Neue Beiträge',
	'LOGIN_LOGOUT_LINK' => 'Login/Logout',
	'MENU_EMPTY_LINK' => 'Leerer Link',

	'IP_BLACKLISTED' => 'Deine IP-Adresse %s wurde blockiert, da sie auf der Blacklist steht. Weitere Einzelheiten gibt es hier: <a href="%s">%s</a>.',

	'PRINTABLE_VERSION' => 'Druckbare Version',
	'CHANGE_FONT_SIZE' => 'Schriftgröße ändern',
	'CHANGE_PAGE_SIZE' => 'Seitengröße ändern',

	'FULL_EDITOR' => 'Wechsele zum Voll-Editor',

	'SN_SHOW_POSTS' => 'Zeige Beitragstexte',
	'SN_SHOW_TOPICS' => 'Zeige nur Thementitel',

	'NOT_LOGGED_IN_VIEW_PAGE' => 'Du mußt angemeldet sein, um diese Seite anschauen zu können.',

	'TAGS_SEARCH_REPLACE' => 'Suche und ersetze Tags',
	'TAGS_SEARCH_REPLACE_SRC' => 'Tag der ersetzt wird',
	'TAGS_SEARCH_REPLACE_TGT' => 'Neuer Tag',
	'TAGS_SEARCH_REPLACE_RESULT' => '%s Tags wurden ersetzt',

	)
);

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

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
$lang['Prune_commands'][5] = 'Faule und nie eingeloggte Benutzer löschen';
$lang['Prune_explain'][5] = 'Löscht die Benutzer, die zwar aktiviert sind, aber nichts geschrieben bzw. sich nie eingeloggt haben, <b>au&szlig;er</b> den neuen Benutzern der letzten %d Tage';

// Timezones - BEGIN
$lang['All_times'] = 'Alle Zeiten sind %s'; // eg. All times are GMT - 12 Hours (times from next block)

// Time zones short
$lang['tz'] = array(
	'-12' => 'UTC - 12 Stunden',
	'-11' => 'UTC - 11 Stunden',
	'-10' => 'UTC - 10 Stunden',
	'-9.5' => 'UTC - 9:30 Stunden',
	'-9' => 'UTC - 9 Stunden',
	'-8' => 'UTC - 8 Stunden',
	'-7' => 'UTC - 7 Stunden',
	'-6' => 'UTC - 6 Stunden',
	'-5' => 'UTC - 5 Stunden',
	'-4.5' => 'UTC - 4:30 Stunden',
	'-4' => 'UTC - 4 Stunden',
	'-3.5' => 'UTC - 3:30 Stunden',
	'-3' => 'UTC - 3 Stunden',
	'-2' => 'UTC - 2 Stunden',
	'-1' => 'UTC - 1 Stunde',
	'0' => 'UTC',
	'1' => 'UTC + 1 Stunde',
	'2' => 'UTC + 2 Stunden',
	'3' => 'UTC + 3 Stunden',
	'3.5' => 'UTC + 3:30 Stunden',
	'4' => 'UTC + 4 Stunden',
	'4.5' => 'UTC + 4:30 Stunden',
	'5' => 'UTC + 5 Stunden',
	'5.5' => 'UTC + 5:30 Stunden',
	'5.75' => 'UTC + 5:45 Stunden',
	'6' => 'UTC + 6 Stunden',
	'6.5' => 'UTC + 6:30 Stunden',
	'7' => 'UTC + 7 Stunden',
	'8' => 'UTC + 8 Stunden',
	'8.75' => 'UTC + 8:45 Stunden',
	'9' => 'UTC + 9 Stunden',
	'9.5' => 'UTC + 9:30 Stunden',
	'10' => 'UTC + 10 Stunden',
	'10.5' => 'UTC + 10:30 Stunden',
	'11' => 'UTC + 11 Stunden',
	'11.5' => 'UTC + 11:30 Stunden',
	'12' => 'UTC + 12 Stunden',
	'12.75' => 'UTC + 12:45 Stunden',
	'13' => 'UTC + 13 Stunden',
	'14' => 'UTC + 14 Stunden',
	'dst' => '[ <abbr title="Koordinierte Weltzeit (UTC)">UTC</abbr> ]',
);

// These are displayed in the timezone select box
$lang['tz_zones'] = array(
	'-12' => '[UTC - 12] Baker Island Zeit',
	'-11' => '[UTC - 11] Niue Time, Samoa Standard Zeit',
	'-10' => '[UTC - 10] Hawaii-Aleutian Standard Zeit, Cook Island Zeit',
	'-9.5' => '[UTC - 9:30] Marquesas Islands Zeit',
	'-9' => '[UTC - 9] Alaska Standard Zeit, Gambier Island Zeit',
	'-8' => '[UTC - 8] Pacific Standard Zeit',
	'-7' => '[UTC - 7] Mountain Standard Zeit',
	'-6' => '[UTC - 6] Central Standard Zeit',
	'-5' => '[UTC - 5] Eastern Standard Zeit',
	'-4.5' => '[UTC - 4:30] Venezuelan Standard Zeit',
	'-4' => '[UTC - 4] Atlantic Standard Zeit',
	'-3.5' => '[UTC - 3:30] Newfoundland Standard Zeit',
	'-3' => '[UTC - 3] Amazon Standard Zeit, Central Greenland Zeit',
	'-2' => '[UTC - 2] Fernando de Noronha Zeit, South Georgia &amp; the South Sandwich Islands Zeit',
	'-1' => '[UTC - 1] Azores Standard Zeit, Cape Verde Zeit, Eastern Greenland Zeit',
	'0' => '[UTC] Western European Zeit, Greenwich Mean Zeit',
	'1' => '[UTC + 1] Central European Zeit, West African Zeit',
	'2' => '[UTC + 2] Eastern European Zeit, Central African Zeit',
	'3' => '[UTC + 3] Moscow Standard Zeit, Eastern African Zeit',
	'3.5' => '[UTC + 3:30] Iran Standard Zeit',
	'4' => '[UTC + 4] Gulf Standard Zeit, Samara Standard Zeit',
	'4.5' => '[UTC + 4:30] Afghanistan Zeit',
	'5' => '[UTC + 5] Pakistan Standard Zeit, Yekaterinburg Standard Zeit',
	'5.5' => '[UTC + 5:30] Indian Standard Zeit, Sri Lanka Zeit',
	'5.75' => '[UTC + 5:45] Nepal Zeit',
	'6' => '[UTC + 6] Bangladesh Zeit, Bhutan Zeit, Novosibirsk Standard Zeit',
	'6.5' => '[UTC + 6:30] Cocos Islands Zeit, Myanmar Zeit',
	'7' => '[UTC + 7] Indochina Zeit, Krasnoyarsk Standard Zeit',
	'8' => '[UTC + 8] Chinese Standard Zeit, Australian Western Standard Zeit, Irkutsk Standard Zeit',
	'8.75' => '[UTC + 8:45] Southeastern Western Australia Standard Zeit',
	'9' => '[UTC + 9] Japan Standard Zeit, Korea Standard Zeit, Chita Standard Zeit',
	'9.5' => '[UTC + 9:30] Australian Central Standard Zeit',
	'10' => '[UTC + 10] Australian Eastern Standard Zeit, Vladivostok Standard Zeit',
	'10.5' => '[UTC + 10:30] Lord Howe Standard Zeit',
	'11' => '[UTC + 11] Solomon Island Zeit, Magadan Standard Zeit',
	'11.5' => '[UTC + 11:30] Norfolk Island Zeit',
	'12' => '[UTC + 12] New Zealand Zeit, Fiji Zeit, Kamchatka Standard Zeit',
	'12.75' => '[UTC + 12:45] Chatham Islands Zeit',
	'13' => '[UTC + 13] Tonga Time, Phoenix Islands Zeit',
	'14' => '[UTC + 14] Line Island Zeit',
);
// Timezones - END

// Dates And Times - BEGIN
$lang = array_merge($lang, array(
	'WEEK_DAY_SUNDAY' => 'Sonntag',
	'WEEK_DAY_MONDAY' => 'Montag',
	'WEEK_DAY_TUESDAY' => 'Dienstag',
	'WEEK_DAY_WEDNESDAY' => 'Mittwoch',
	'WEEK_DAY_THURSDAY' => 'Donnerstag',
	'WEEK_DAY_FRIDAY' => 'Freitag',
	'WEEK_DAY_SATURDAY' => 'Samstag',

	'TIME_YEAR' => 'Jahr',
	'TIME_MONTH' => 'Monat',
	'TIME_DAY' => 'Tag',
	'TIME_HOUR' => 'Stunde',
	'TIME_MINUTE' => 'Minute',
	'TIME_SECOND' => 'Sekunde',

	// The value is only an example and will get replaced by the current time on view
	'dateformats' => array(
		'd M Y, H:i' => '01 Jan 2007, 13:37',
		'd M Y H:i' => '01 Jan 2007 13:37',
		'M jS, \'y, H:i' => 'Jan 1st, \'07, 13:37',
		'D M d, Y g:i a' => 'Mon Jan 01, 2007 1:37 pm',
		'F jS, Y, g:i a' => 'Januar 1st, 2007, 1:37 pm',
		'|d M Y|, H:i' => 'Heute, 13:37 / 01 Jan 2007, 13:37',
		'|F jS, Y|, g:i a' => 'Heute, 1:37 pm / January 1st, 2007, 1:37 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat' => 'D M d, Y g:i a', // Mon Jan 01, 2007 1:37 pm

	)
);

$lang['datetime'] = array(
	'TODAY' => 'Heute',
	'TOMORROW' => 'Morgen',
	'YESTERDAY' => 'Gestern',
	'AGO' => array(
		0 => 'vor weniger als 1 Minute',
		1 => 'vor %d Minute',
		2 => 'vor %d Minuten',
		60=> 'vor 1 Stunde',
	),

	'Sunday' => 'Sonntag',
	'Monday' => 'Montag',
	'Tuesday' => 'Dienstag',
	'Wednesday' => 'Mittwoch',
	'Thursday' => 'Donnerstag',
	'Friday' => 'Freitag',
	'Saturday' => 'Samstag',

	'Sun' => 'So',
	'Mon' => 'Mo',
	'Tue' => 'Di',
	'Wed' => 'Mi',
	'Thu' => 'Do',
	'Fri' => 'Fr',
	'Sat' => 'Sa',

	'SUN_S' => 'So',
	'MON_S' => 'Mo',
	'TUE_S' => 'Di',
	'WED_S' => 'Mi',
	'THU_S' => 'Do',
	'FRI_S' => 'Fr',
	'SAT_S' => 'Sa',

	'January' => 'Januar',
	'February' => 'Februar',
	'March' => 'März',
	'April' => 'April',
	'May' => 'Mai',
	'June' => 'Juni',
	'July' => 'Juli',
	'August' => 'August',
	'September' => 'September',
	'October' => 'Oktober',
	'November' => 'November',
	'December' => 'Dezember',

	'JAN' => 'Jan',
	'FEB' => 'Feb',
	'MAR' => 'März',
	'APR' => 'Apr',
	'MAY' => 'Mai',
	'JUN' => 'Jun',
	'JUL' => 'Jul',
	'AUG' => 'Aug',
	'SEP' => 'Sep',
	'OCT' => 'Okt',
	'NOV' => 'Nov',
	'DEC' => 'Dez',

	'Jan_short' => 'Jan',
	'Feb_short' => 'Feb',
	'Mar_short' => 'März',
	'Apr_short' => 'Apr',
	'May_short' => 'Mai',
	'Jun_short' => 'Jun',
	'Jul_short' => 'Jul',
	'Aug_short' => 'Aug',
	'Sep_short' => 'Sep',
	'Oct_short' => 'Okt',
	'Nov_short' => 'Nov',
	'Dec_short' => 'Dez',
);

// NOTE: Please do not translate the following 4 lines!
// They are automatically translated into your language

$lang['day_short'] = array($lang['datetime']['Sun'], $lang['datetime']['Mon'], $lang['datetime']['Tue'], $lang['datetime']['Wed'], $lang['datetime']['Thu'], $lang['datetime']['Fri'], $lang['datetime']['Sat']);

$lang['day_long'] = array($lang['datetime']['Sunday'], $lang['datetime']['Monday'], $lang['datetime']['Tuesday'], $lang['datetime']['Wednesday'], $lang['datetime']['Thursday'], $lang['datetime']['Friday'], $lang['datetime']['Saturday']);

$lang['month_short'] = array($lang['datetime']['JAN'], $lang['datetime']['FEB'], $lang['datetime']['MAR'], $lang['datetime']['APR'], $lang['datetime']['MAY'], $lang['datetime']['JUN'], $lang['datetime']['JUL'], $lang['datetime']['AUG'], $lang['datetime']['SEP'], $lang['datetime']['OCT'], $lang['datetime']['NOV'], $lang['datetime']['DEC']);

$lang['month_long'] = array($lang['datetime']['January'], $lang['datetime']['February'], $lang['datetime']['March'], $lang['datetime']['April'], $lang['datetime']['May'], $lang['datetime']['June'], $lang['datetime']['July'], $lang['datetime']['August'], $lang['datetime']['September'], $lang['datetime']['October'], $lang['datetime']['November'], $lang['datetime']['December']);
// Dates And Times - END

//====================================================
// Do not insert anything below this line
//====================================================

?>