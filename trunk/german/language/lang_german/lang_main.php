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
<span style="color: #ff5500;"><b>Mighty Gorgon</b></span><br />
<i>(Luca Libralato)</i><br />
<b><i>Developer</i></b><br />
Interests: Heroes Of Might And Magic III, 69, #FF5522<br />
Location: Homer\'s Head<br />
<br />
<br />
<span style="color: #dd2222;"><b>Bicet</b></span><br />
<b><i>phpBB XS Developer</i></b><br />
<br />
<br />
<span style="color: #dd2222;"><b>hpl</b></span><br />
<b><i>Some Special Contributions</i></b><br />
<br />
<br />
<b><i>Valued Contributors</i></b><br />
<span style="color: #228822;"><b>Andrea75</b></span><br />
<span style="color: #dd2222;"><b>Artie</b></span><br />
<span style="color: #0000bb;"><b>brandsrus</b></span><br />
<span style="color: #228822;"><b>buldo</b></span><br />
<span style="color: #228822;"><b>casimedicos</b></span><br />
<span style="color: #228822;"><b>Chaotic</b></span><br />
<span style="color: #dd2222;"><b>CyberAlien</b></span><br />
<span style="color: #228822;"><b>difus</b></span><br />
<span style="color: #228822;"><b>DWho</b></span><br />
<span style="color: #228822;"><b>fracs</b></span><br />
<span style="color: #880088;"><b>ganesh</b></span><br />
<span style="color: #228822;"><b>JANU1535</b></span><br />
<span style="color: #880088;"><b>jz</b></span><br />
<span style="color: #228822;"><b>KasLimon</b></span><br />
<span style="color: #aaff00;"><b>KugeLSichA</b></span><br />
<span style="color: #0000bb;"><b>Limun</b></span><br />
<span style="color: #880088;"><b>Lopalong</b></span><br />
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

$lang = array_merge($lang, array(
	'Home' => 'Startseite',
	'Forum' => 'Forum',
	'Category' => 'Kategorie',
	'Topic' => 'Thema',
	'Topics' => 'Themen',
	'Replies' => 'Antworten',
	'Views' => 'Aufrufe',
	'Post' => 'Beitrag',
	'Posts' => 'Beitr�ge',
	'Posted' => 'Verfasst am',
	'Username' => 'Benutzername',
	'Password' => 'Passwort',
	'Email' => 'E-Mail',
	'Poster' => 'Poster',
	'Author' => 'Autor',
	'Time' => 'Zeit',
	'Hours' => 'Stunden',
	'Message' => 'Nachricht',

	'1_Day' => '1 Tag',
	'7_Days' => '7 Tage',
	'2_Weeks' => '2 Wochen',
	'1_Month' => '1 Monat',
	'3_Months' => '3 Monate',
	'6_Months' => '6 Monate',
	'1_Year' => '1 Jahr',

	'Go' => 'Los',
	'Jump_to' => 'Gehe zu',
	'Submit' => 'Absenden',
	'Reset' => 'Zur�cksetzen',
	'Cancel' => 'Abbrechen',
	'Preview' => 'Vorschau',
	'Confirm' => 'Best�tigen',
	'Spellcheck' => 'Rechtschreibpr�fung',
	'Yes' => 'Ja',
	'No' => 'Nein',
	'Enabled' => 'Aktiviert',
	'Disabled' => 'Deaktiviert',
	'Error' => 'Fehler',

	'GO' => 'Los',
	'JUMP_TO' => 'Gehe zu',
	'SUBMIT' => 'Absenden',
	'RESET' => 'Zur�cksetzen',
	'CANCEL' => 'Abbrechen',
	'PREVIEW' => 'Vorschau',
	'CONFIRM' => 'Best�tigen',
	'YES' => 'Ja',
	'NO' => 'Nein',
	'ENABLED' => 'Aktiviert',
	'DISABLED' => 'Deaktiviert',
	'ERROR' => 'Fehler',

	'Next' => 'Weiter',
	'Previous' => 'Zur�ck',
	'Goto_page' => 'Gehe zu Seite',
	'Joined' => 'Anmeldung',
	'IP_Address' => 'IP-Adresse',

	'Select_forum' => 'Forum ausw�hlen',
	'View_latest_post' => 'Letzten Beitrag anzeigen',
	'View_newest_post' => 'Neusten Beitrag anzeigen',
	'Page_of' => 'Seite <b>%d</b> von <b>%d</b>', // Replaces with: Page 1 of 2 for example

	'ICQ' => 'ICQ-Nummer',
	'AIM' => 'AIM-Name',
	'MSNM' => 'MSN Live',
	'YIM' => 'Yahoo Messenger',
	'SKYPE' => 'Skype',
	'Forum_Index' => 'Forum',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Neues Thema er�ffnen',
	'Reply_to_topic' => 'Neue Antwort erstellen',
	'Reply_with_quote' => 'Antworten mit Zitat',

	'Click_return_topic' => 'Klicke %shier%s, um zum Thema zur�ckzukehren.', // %s's here are for uris, do not remove!
	'Click_return_login' => 'Klicke %shier%s, um es noch einmal zu versuchen.',
	'Click_return_forum' => 'Klicke %shier%s, um zum Forum zur�ckzukehren.',
	'Click_view_message' => 'Klicke %shier%s, um deine Nachricht anzuzeigen.',
	'Click_return_modcp' => 'Klicke %shier%s, um zur Moderatorenkontrolle zur�ckzukehren.',
	'Click_return_group' => 'Klicke %shier%s, um zur Gruppeninfo zur�ckzukehren.',

	'Admin_panel' => 'Admin-Bereich',

	'Board_disabled' => 'Sorry, aber dieses Board ist im Moment nicht verf�gbar. Probier es bitte sp�ter wieder.',

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
	'Guest_users_total' => '%d G�ste',
	'Guest_user_total' => 'ein Gast',
	'Record_online_users' => 'Der Rekord liegt bei <b>%s</b> Benutzern am %s.', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sAdministrator%s',
	'Mod_online_color' => '%sModerator%s',

	'You_last_visit' => 'Dein letzter Besuch war am: %s', // %s replaced by date/time
	'Current_time' => 'Aktuelles Datum und Uhrzeit: %s', // %s replaced by time

	'Search_new' => 'Beitr�ge seit dem letzten Besuch',
	'Search_your_posts' => 'Eigene Beitr�ge',
	'Search_unanswered' => 'Unbeantw. Beitr�ge anzeigen',

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
	'Posted_articles_zero_total' => 'Unsere Benutzer haben <b>noch keine</b> Beitr�ge geschrieben.', // Number of posts
	'Posted_articles_total' => 'Unsere Benutzer haben insgesamt <b>%d</b> Beitr�ge geschrieben.', // Number of posts
	'Posted_article_total' => 'Unsere Benutzer haben <b>einen</b> Beitrag geschrieben.', // Number of posts
	'Registered_users_zero_total' => 'Wir haben <b>keine</b> registrierten Benutzer.', // # registered users
	'Registered_users_total' => 'Wir haben <b>%d</b> registrierte Benutzer.', // # registered users
	'Registered_user_total' => 'Wir haben <b>einen</b> registrierten Benutzer.', // # registered users
	'Newest_user' => 'Der neuste Benutzer ist <b>%s%s%s</b>.', // a href, username, /a

	'No_new_posts_last_visit' => 'Keine neuen Beitr�ge seit deinem letzten Besuch',

	'No_new_posts_global_announcement' => 'Keine neuen Beitr�ge [Gl. Ank.]',
	'New_posts_global_announcement' => 'Neue Beitr�ge [Gl. Ank.]',
	'No_new_posts_announcement' => 'Keine neuen Beitr�ge [Ank�ndigung]',
	'New_posts_announcement' => 'Neue Beitr�ge [Ank�ndigung]',
	'No_new_posts_sticky' => 'Keine neuen Beitr�ge [Wichtig]',
	'New_posts_sticky' => 'Neue Beitr�ge [Wichtig]',
	'No_new_posts_locked' => 'Keine neuen Beitr�ge [Gesperrt]',
	'New_posts_locked' => 'Neue Beitr�ge [Gesperrt]',
	'No_new_posts' => 'Keine neuen Beitr�ge',
	'New_posts' => 'Neue Beitr�ge',
	'New_post' => 'Neuer Beitrag',
	'No_new_posts_hot' => 'Keine neuen Beitr�ge [Top-Thema]',
	'New_posts_hot' => 'Neue Beitr�ge [Top-Thema]',

	'Forum_no_new_posts' => 'keine neuen Beitr�ge [Forum]',
	'Forum_new_posts' => 'Neue Beitr�ge [Forum]',
	'Cat_no_new_posts' => 'keine neuen Beitr�ge [Kategorie]',
	'Cat_new_posts' => 'Neue Beitr�ge [Kategorie]',
	'Forum_is_locked' => 'Forum ist gesperrt',

// Login
	'Enter_password' => 'Gib bitte deinen Benutzernamen und dein Passwort ein, um dich einzuloggen.',
	'Login' => 'Login',
	'Logout' => 'Logout',
	'Forgotten_password' => 'Ich habe mein Passwort vergessen!',
	'AUTOLOGIN' => 'Bei jedem Besuch automatisch einloggen',
	'Error_login' => 'Du hast einen falschen oder inaktiven Benutzernamen oder ein falsches Passwort eingegeben.',

// Index page
	'No_Posts' => 'Keine Beitr�ge',
	'No_forums' => 'Dieses Board hat keine Foren.',

	'Private_Message' => 'Private Nachricht',
	'Private_Messages' => 'Private Nachrichten',
	'Who_is_Online' => 'Wer ist online?',

	'Mark_all_forums' => 'Alle Foren als gelesen markieren',
	'Forums_marked_read' => 'Alle Foren wurden als gelesen markiert.',

// Viewforum
	'View_forum' => 'Forum anzeigen',

	'Forum_not_exist' => 'Das ausgew�hlte Forum existiert nicht.',
	'Reached_on_error' => 'Fehler auf dieser Seite!',

	'Display_topics' => 'Siehe Beitr�ge der letzten',
	'All_Topics' => 'Alle Themen anzeigen',

	'Topic_News_nb' => 'News',
	'Topic_global_announcement_nb' => 'Globale Ank�ndigung',
	'Topic_Announcement_nb' => 'Ank�ndigungen',
	'Topic_Sticky_nb' => 'Wichtig',
	'Topic_Moved_nb' => 'Verschoben',
	'Topic_Poll_nb' => 'Umfrage',
	'Topic_Event_nb' => 'Event',
	'Topic_Announcement' => '<b>Ank�ndigungen:</b>',
	'Topic_Sticky' => '<b>Wichtig:</b>',
	'Topic_Moved' => '<b>Verschoben:</b>',
	'Topic_Poll' => '<b>Umfrage:</b>',
	'Topic_Event' => '<b>Event:</b>',
	'Topic_global_announcement' => '<b>Globale Ank�ndigung:</b>',
	'Post_global_announcement' => 'Globale Ank�ndigung',


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
	'Rules_reply_can' => 'Du <b>kannst</b> auf Beitr�ge antworten.',
	'Rules_reply_can_own' => 'Du <b>kannst</b> auf deine Beitr�ge antworten.',
	'Rules_reply_cannot' => 'Du <b>kannst nicht</b> auf Beitr�ge antworten.',
	'Rules_edit_can' => 'Du <b>kannst</b> deine Beitr�ge bearbeiten.',
	'Rules_edit_cannot' => 'Du <b>kannst</b> deine Beitr�ge <b>nicht</b> bearbeiten.',
	'Rules_delete_can' => 'Du <b>kannst</b> deine Beitr�ge l�schen.',
	'Rules_delete_cannot' => 'Du <b>kannst</b> deine Beitr�ge <b>nicht</b> l�schen.',
	'Rules_vote_can' => 'Du <b>kannst</b> an Umfragen teilnehmen.',
	'Rules_vote_cannot' => 'Du <b>kannst nicht</b> an Umfragen teilnehmen.',
	'Rules_moderate' => 'Du <b>kannst</b> %sdieses Forum moderieren%s.', // %s replaced by a href links, do not remove!

// 'No_topics_post_one' => 'There are no posts in this forum.<br />Click on the <b>Post New Topic</b> link on this page to post one.',
	'No_topics_post_one' => 'In diesem Forum sind keine Beitr�ge vorhanden.<br />Klicke auf <b>Neues Thema</b>, um den ersten Beitrag zu erstellen.',

// Viewtopic
	'View_topic' => 'Thema anzeigen',

	'Guest' => 'Gast',
	'Post_subject' => 'Titel',
	'View_next_topic' => 'N�chstes Thema anzeigen',
	'View_previous_topic' => 'Vorheriges Thema anzeigen',
	'Submit_vote' => 'Stimme absenden',
	'View_results' => 'Ergebnis anzeigen',

	'No_newer_topics' => 'Es gibt keine neueren Themen in diesem Forum.',
	'No_older_topics' => 'Es gibt keine �lteren Themen in diesem Forum.',
	'Topic_post_not_exist' => 'Das gew�hlte Thema oder der Beitrag existiert nicht.',
	'No_posts_topic' => 'Es existieren keine Beitr�ge zu diesem Thema.',

	'Display_posts' => 'Beitr�ge der letzten Zeit anzeigen',
	'All_Posts' => 'Alle Beitr�ge',
	'Newest_First' => 'Die neusten zuerst',
	'Oldest_First' => 'Die �ltesten zuerst',

	'Back_to_top' => 'Nach oben',
	'Back_to_bottom' => 'Nach unten',

	'Read_profile' => 'Benutzer-Profile anzeigen',
	'Send_email' => 'E-Mail an diesen Benutzer senden',
	'Visit_website' => 'Website dieses Benutzers besuchen',
	'ICQ_status' => 'ICQ-Status',
	'Edit_delete_post' => 'Beitrag bearbeiten oder l�schen',
	'View_IP' => 'IP-Adresse zeigen',
	'Delete_post' => 'Beitrag l�schen',

	'wrote' => 'hat folgendes geschrieben', // proceeds the username and is followed by the quoted text
	'Quote' => 'Zitat', // comes before bbcode quote output.
	'Code' => 'Code', // comes before bbcode code output.

	'Edited_time_total' => 'Zuletzt bearbeitet von %s am %s, insgesamt einmal bearbeitet', // Last edited by me on 12 Oct 2001, edited 1 time in total
	'Edited_times_total' => 'Zuletzt bearbeitet von %s am %s, insgesamt %d-mal bearbeitet', // Last edited by me on 12 Oct 2001, edited 2 times in total

	'Lock_topic' => 'Thema sperren',
	'Unlock_topic' => 'Thema entsperren',
	'Move_topic' => 'Thema verschieben',
	'Delete_topic' => 'Thema l�schen',
	'Split_topic' => 'Thema teilen',

	'Stop_watching_topic' => 'Bei Antworten zu diesem Thema nicht mehr benachrichtigen',
	'Start_watching_topic' => 'Bei Antworten zu diesem Thema benachrichtigen',
	'No_longer_watching' => 'Das Thema wird nicht mehr von Dir beobachtet.',
	'You_are_watching' => 'Du beobachtest nun das Thema.',

	'Total_votes' => 'Stimmen insgesamt',

// Posting/Replying (Not private messaging!)
	'Message_body' => 'Nachrichtentext',
	'Topic_review' => 'Thema-�berblick',

	'No_post_mode' => 'Kein Eintrags-Modus ausgew�hlt', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

	'Post_a_new_topic' => 'Neues Thema schreiben',
	'Post_a_reply' => 'Antwort schreiben',
	'Post_topic_as' => 'Thema schreiben als',
	'Edit_Post' => 'Beitrag editieren',
	'Options' => 'Optionen',

	'PM_Read' => 'PN gelesen',
	'PM_Unread' => 'PN ungelesen',
	'PM_Replied' => 'PN beantwortet',

	'Post_Announcement' => 'Ank�ndigung',
	'New_post_Announcement' => 'Neue Ank�ndigung',
	'Post_Sticky' => 'Wichtig',
	'New_post_Sticky' => 'Neu Wichtig',
	'Post_Normal' => 'Normal',

	'Confirm_delete' => 'Sicher, dass dieser Beitrag gel�scht werden soll?',
	'Confirm_delete_poll' => 'Sicher, dass diese Umfrage gel�scht werden soll?',

	'Flood_Error' => 'Du kannst einen Beitrag nicht so schnell nach deinem letzten absenden, bitte warte einen Augenblick.',
	'Empty_subject' => 'Bei einem neuen Thema musst du einen Titel angeben.',
	'Empty_message' => 'Du musst zu deinem Beitrag einen Text eingeben.',
	'Forum_locked' => 'Dieses Forum ist gesperrt, du kannst keine Beitr�ge editieren, schreiben oder beantworten.',
	'Topic_locked' => 'Dieses Thema ist gesperrt, du kannst keine Beitr�ge editieren oder beantworten.',
	'No_post_id' => 'Du musst einen Beitrag zum editieren ausw�hlen.',
	'No_topic_id' => 'Du musst ein Thema f�r deine Antwort ausw�hlen.',
	'No_valid_mode' => 'Du kannst nur Beitr�ge schreiben, bearbeiten, beantworten und zitieren. Versuch es noch einmal.',
	'No_such_post' => 'Es existiert kein solcher Beitrag. Versuch es noch einmal.',
	'Edit_own_posts' => 'Du kannst nur deine eigenen Beitr�ge bearbeiten.',
	'Delete_own_posts' => 'Du kannst nur deine eigenen Beitr�ge l�schen.',
	'Cannot_delete_replied' => 'Du kannst keine Beitr�ge l�schen, die schon beantwortet wurden.',
	'Cannot_delete_poll' => 'Du kannst keine aktiven Umfrage l�schen.',
	'Empty_poll_title' => 'Du musst einen Titel f�r die Umfrage eingeben.',
	'To_few_poll_options' => 'Du musst mindestens zwei Antworten f�r die Umfrage angeben.',
	'To_many_poll_options' => 'Du hast zu viele Antworten f�r die Umfrage angegeben',
	'Post_has_no_poll' => 'Dieser Beitrag hat keine Umfrage.',
	'Already_voted' => 'Du hast an dieser Umfrage schon teilgenommen.',
	'No_vote_option' => 'Du musst eine Auswahl treffen, um abzustimmen.',

	'Add_poll' => 'Umfrage hinzuf�gen',
	'Add_poll_explain' => 'Wenn du keine Umfrage zum Thema hinzuf�gen willst, lass die Felder leer.',
	'Poll_question' => 'Frage',
	'Poll_option' => 'Antwort',
	'Add_option' => 'Antwort hinzuf�gen',
	'Update' => 'Aktualisieren',
	'Delete' => 'L�schen',
	'Poll_for' => 'Dauer der Umfrage:',
	'Days' => 'Tage', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Gib 0 ein oder lass dieses Feld leer, um die Umfrage auf unbeschr�nkte Zeit durchzuf�hren ]',
	'Delete_poll' => 'Umfrage l�schen',

	'Disable_HTML_post' => 'HTML in diesem Beitrag deaktivieren',
	'Disable_ACRO_AUTO_post' => 'Abk�rzungserkl�rungen und Autolinks in diesem Beitrag deaktivieren',
	'Disable_BBCode_post' => 'BBCode in diesem Beitrag deaktivieren',
	'Disable_Smilies_post' => 'Smilies in diesem Beitrag deaktivieren',

	'HTML_is_ON' => 'HTML ist <u>an</u>',
	'HTML_is_OFF' => 'HTML ist <u>aus</u>',
	'BBCode_is_ON' => '%sBBCode%s ist <u>an</u>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => '%sBBCode%s ist <u>aus</u>',
	'Smilies_are_ON' => 'Smilies sind <u>an</u>',
	'Smilies_are_OFF' => 'Smilies sind <u>aus</u>',

	'Attach_signature' => 'Signatur anh�ngen (Signatur kann im Profil ge�ndert werden)',
	'Notify' => 'Benachrichtigt mich, wenn eine Antwort geschrieben wurde',
	'Delete_post' => 'Diesen Beitrag l�schen',

	'Stored' => 'Deine Nachricht wurde erfolgreich eingetragen.',
	'Deleted' => 'Deine Nachricht wurde erfolgreich gel�scht.',
	'Poll_delete' => 'Deine Umfrage wurde erfolgreich gel�scht.',
	'Vote_cast' => 'Deine Stimme wurde gez�hlt.',

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
	'Delete_marked' => 'Markierte l�schen',
	'Delete_all' => 'Alle l�schen',
	'Save_marked' => 'Markierte speichern',
	'Download_marked' => 'Markierte herunterladen',
	'Mailbox' => 'Mailbox',
	'Save_message' => 'Nachricht speichern',
	'Delete_message' => 'Nachricht l�schen',
	'Next_privmsg' => 'N�chste Private Nachricht',
	'Previous_privmsg' => 'Vorherige Private Nachricht',
	'No_newer_pm' => 'Es gibt keine neuere Private Nachricht.',
	'No_older_pm' => 'Es gibt keine �ltere Private Nachricht.',
	'Display_messages' => 'Nachrichten anzeigen der letzten', // Followed by number of days/weeks/months
	'All_Messages' => 'Alle Nachrichten',

	'No_messages_folder' => 'Es sind keine weiteren Nachrichten in diesem Ordner.',

	'PM_disabled' => 'Private Nachrichten wurden in diesem Board deaktiviert.',
	'Cannot_send_privmsg' => 'Der Administrator hat private Nachrichten f�r dich gesperrt.',
	'No_to_user' => 'Du musst einen Benutzernamen angeben, um diese Nachricht zu senden.',
	'No_such_user' => 'Es existiert kein Benutzer mit diesem Namen.',

	'Disable_HTML_pm' => 'HTML in dieser Nachricht deaktivieren',
	'Disable_ACRO_AUTO_pm' => 'Abk�rzungserkl�rungen und Autolinks in dieser Nachricht deaktivieren',
	'Disable_BBCode_pm' => 'BBCode in dieser Nachricht deaktivieren',
	'Disable_Smilies_pm' => 'Smilies in dieser Nachricht deaktivieren',

	'Message_sent' => 'Deine Nachricht wurde gesendet.',

	'Click_return_inbox' => 'Klicke %shier%s, um zum Posteingang zur�ckzukehren.',
	'Click_return_index' => 'Klicke %shier%s, um zum Index zur�ckzukehren.',

	'Send_a_new_message' => 'Neue Nachricht senden',
	'Send_a_reply' => 'Auf private Nachricht antworten',
	'Edit_message' => 'Private Nachricht bearbeiten',

	'Notification_subject' => 'Eine neue private Nachricht ist eingetroffen!',

	'Find_username' => 'Benutzernamen finden',
	'Find' => 'Finden',
	'No_match' => 'Keine Ergebnisse gefunden.',

	'No_post_id' => 'Es wurde keine Beitrags-ID angegeben.',
	'No_such_folder' => 'Es existiert kein solcher Ordner.',
	'No_folder' => 'Kein Ordner ausgew�hlt',

	'Mark_all' => 'Alle markieren',
	'Unmark_all' => 'Markierungen aufheben',

	'Confirm_delete_pm' => 'Diese Nachricht wirklich l�schen?',
	'Confirm_delete_pms' => 'Diese Nachrichten wirklich l�schen?',

	'Inbox_size' => 'Dein Posteingang ist zu %d%% voll', // eg. Your Inbox is 50% full
	'Sentbox_size' => 'Deine gesendeten Nachrichten sind zu %d%% voll',
	'Savebox_size' => 'Dein Archiv ist zu %d%% voll',

	'Click_view_privmsg' => 'Klicke %shier%s, um deinen Posteingang aufzurufen',

// Profiles/Registration
	'Viewing_user_profile' => 'Profil anzeigen : %s', // %s is username
	'About_user' => 'Alles �ber %s',
//Start Quick Administrator User Options and Information MOD
	'Quick_admin_options' => 'Schnelladministration: Benutzeroptionen und Information',
	'Admin_edit_profile' => 'Bearbeite Benutzer Profil',
	'Admin_edit_permissions' => 'Bearbeite Benutzer Berechtigungen',
	'User_active' => 'Benutzer <b>ist</b> aktiv',
	'User_not_active' => 'Benutzer <b>ist nicht</b> aktiv',
	'Username_banned' => 'Benutzername <b>ist</b> gesperrt',
	'Username_not_banned' => 'Benutzername <b>ist nicht</b> gesperrt',
	'User_email_banned' => 'Die E-Mail von [ %s ] <b>ist</b> gesperrt',
	'User_email_not_banned' => 'Die E-Mail des Benutzers <b>ist nicht</b> gesperrt',
//End Quick Administrator User Options and Information MOD
	'Preferences' => 'Einstellungen',
	'Items_required' => 'Mit * markierte Felder sind erforderlich',
	'Registration_info' => 'Registrierungs-Informationen',
	'Profile_info' => 'Profil-Informationen',
	'Profile_info_warn' => 'Diese Informationen sind �ffentlich abrufbar!',
	'Avatar_panel' => 'Avatar-Steuerung',
	'Avatar_gallery' => 'Avatar-Galerie',

	'Website' => 'Webseite',
	'Location' => 'Wohnort',
	'Contact' => 'Kontakt',
	'Email_address' => 'E-Mail-Adresse',
	'Email' => 'E-Mail',
	'Send_private_message' => 'Private Nachricht senden',
	'Hidden_email' => '[ Versteckt ]',
	'Search_user_posts' => 'Beitr�ge von diesem Benutzer anzeigen',
	'Interests' => 'Interessen',
	'Occupation' => 'Beruf',
	'Poster_rank' => 'Rang',

	'Total_posts' => 'Beitr�ge insgesamt',
	'User_post_pct_stats' => '%.2f%% aller Beitr�ge', // 1.25% of total
	'User_post_day_stats' => '%.2f Beitr�ge pro Tag', // 1.5 posts per day
	'Search_user_posts' => 'Alle Beitr�ge von %s anzeigen', // Find all posts by username
	'Search_user_topics_started' => 'Finde alle Themen die von %s gestartet wurden', // Find all topics started by username

	'No_user_id_specified' => 'Dieser Benutzer existiert nicht.',
	'Wrong_Profile' => 'Du kannst nur dein eigenes Profil bearbeiten.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => 'Aktivit�tsstatistik',
	'Invision_Communicate' => 'Kontakt',
	'Invision_Info' => 'Information',
	'Invision_Member_Group' => 'Gruppenmitgliedschaft',
	'Invision_Member_Title' => 'Titel',
	'Invision_Most_Active' => 'Am aktivsten in',
	'Invision_Most_Active_Posts' => '%s Beitr�ge in diesem Forum',
	'Invision_Details' => 'Details',
	'Invision_PPD_Stats' => 'Beitr�ge pro Tag',
	'Invision_Signature' => 'Signatur',
	'Invision_Website' => 'Webseite',
	'Invision_Total_Posts' => 'Gesamtanzahl Beitr�ge',
	'Invision_User_post_pct_stats' => '( %.2f%% aller Beitr�ge im Forum)',
	'Invision_User_post_day_stats' => '%.2f Beitr�ge pro Tag',
	'Invision_Search_user_posts' => 'Zeige alle Beitr�ge dieses Benutzers',
	'Invision_Posting_details' => 'Beitragsdetails',
// Invision View Profile - END

	'Only_one_avatar' => 'Es kann nur ein Avatar ausgew�hlt werden',
	'File_no_data' => 'Die angegebene Datei enth�lt keine Daten',
	'No_connection_URL' => 'Es konnte keine Verbindung zur angegebenen Datei hergestellt werden',
	'Incomplete_URL' => 'Die angegebene URL ist unvollst�ndig',
	'Wrong_remote_avatar_format' => 'Das Format des Avatars ist nicht g�ltig',
	'No_send_account_inactive' => 'Sorry, aber ein neues Passwort kann im Moment nicht gesendet werden, da dein Benutzer-Konto derzeit noch inaktiv ist. Bitte kontaktiere den Administrator f�r weitere Informationen.',

	'Always_smile' => 'Smilies immer aktivieren',
	'Always_html' => 'HTML immer aktivieren',
	'Always_bbcode' => 'BBCode immer aktivieren',
	'Always_add_sig' => 'Signatur immer anh�ngen',
	'Always_notify' => 'Bei Antworten immer benachrichtigen',
	'Always_notify_explain' => 'Sendet dir eine E-Mail, wenn jemand auf einen deiner Beitr�ge antwortet. Kann f�r jeden Beitrag ge�ndert werden.',

	'Board_style' => 'Board-Style',
	'Board_lang' => 'Board-Sprache',
	'No_themes' => 'Keine Themes in der Datenbank',
	'Timezone' => 'Zeitzone',
	'Date_format' => 'Datum-Format',
	'Date_format_explain' => 'Die Syntax ist identisch mit der PHP-Funktion <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a>',
	'Signature' => 'Signatur',
	'Signature_explain' => 'Dies ist ein Text, der an jeden Beitrag von dir angeh�ngt werden kann. Es besteht eine Limit von %d Buchstaben.',
	'Public_view_email' => 'Zeige meine E-Mail-Adresse immer an',

	'Current_password' => 'Altes Passwort',
	'New_password' => 'Neues Passwort',
	'Confirm_password' => 'Passwort best�tigen',
	'Confirm_password_explain' => 'Du musst dein Passwort angeben, wenn du dein Passwort oder deine Mailadresse �ndern m�chtest.',
	'password_if_changed' => 'Du musst nur dann ein neues Passwort angeben, wenn du es �ndern willst',
	'password_confirm_if_changed' => 'Du musst dein neues Passwort best�tigen, wenn du es �ndern willst',

	'Avatar' => 'Avatar',
	'Avatar_explain' => 'Zeigt eine kleine Grafik neben deinen Details zu jedem deiner Beitr�ge an. Es kann immer nur ein Avatar angezeigt werden, seine Breite darf nicht gr��er als %d Pixel sein, die H�he nicht gr��er als %d Pixel, und die Dateigr��e darf maximal %d KB betragen.',
	'Upload_Avatar_file' => 'Avatar von deinem Computer hochladen',
	'Upload_Avatar_URL' => 'Avatar von URL hochladen',
	'Upload_Avatar_URL_explain' => 'Gib die URL des gew�nschten Avatars an, dieser wird dann kopiert',
	'Pick_local_Avatar' => 'Avatar aus der Galerie ausw�hlen',
	'Link_remote_Avatar' => 'Zu einem externen Avatar linken',
	'Link_remote_Avatar_explain' => 'Gib die URL des Avatars ein, der gelinkt werden soll',
	'Avatar_URL' => 'URL des Avatars',
	'Select_from_gallery' => 'Avatar aus der Galerie ausw�hlen',
	'View_avatar_gallery' => 'Avatar-Galerie anzeigen',

	'Select_avatar' => 'Avatar ausw�hlen',
	'Return_profile' => 'Avatar abbrechen',
	'Select_category' => 'Kategorie ausw�hlen',

	'Delete_Image' => 'Bild l�schen',
	'Current_Image' => 'Aktuelles Bild',

	'Notify_on_privmsg' => 'Bei neuen Privaten Nachrichten benachrichtigen',
	'Popup_on_privmsg' => 'PopUp-Fenster bei neuen Privaten Nachrichten',
	'Popup_on_privmsg_explain' => 'Einige Templates �ffnen neue Fenster, um dich �ber neue private Nachrichten zu benachrichtigen.',
	'Hide_user' => 'Online-Status verstecken',

	'Profile_updated' => 'Dein Profil wurde aktualisiert',
	'Profile_updated_inactive' => 'Dein Profil wurde aktualisiert. Du hast jedoch wesentliche Details ge�ndert, weswegen dein Benutzer-Konto jetzt inaktiv ist. Du wurdest per Mail dar�ber informiert, wie du dein Benutzer-Konto reaktivieren kannst. Falls eine Aktivierung durch den Administrator erforderlich ist, warte bitte, bis die Reaktivierung stattgefunden hat.',

	'Password_mismatch' => 'Du musst zweimal das gleiche Passwort eingeben.',
	'Current_password_mismatch' => 'Das aktuelle Passwort stimmt nicht mit dem in der Datenbank �berein.',
	'Password_long' => 'Dein Passwort kann nicht l�nger als 32 Zeichen sein.',
	'Too_many_registers' => 'Du hast zu oft versucht, dich zu registrieren. Bitte versuche es sp�ter erneut.',
	'Username_taken' => 'Der gew�nschte Benutzername ist leider bereits belegt.',
	'Username_invalid' => 'Der gew�nschte Benutzername enth�lt ein ung�ltiges Sonderzeichen (z.B. \').',
	'Username_disallowed' => 'Der gew�nschte Benutzername wurde vom Administrator gesperrt.',
	'Email_taken' => 'Die angegebene E-Mail-Adresse wird bereits von einem anderen Benutzer verwendet.',
	'Email_banned' => 'Die angegebene E-Mail-Adresse wurde vom Administrator gesperrt.',
	'Email_invalid' => 'Die angegebene E-Mail-Adresse ist ung�ltig.',
	'Signature_too_long' => 'Deine Signatur ist zu lang.',
	'Fields_empty' => 'Du musst alle ben�tigten Felder ausf�llen.',
	'Avatar_filetype' => 'Der Avatar muss im GIF-, JPG- oder PNG-Format sein.',
	'Avatar_filesize' => 'Die Dateigr��e muss kleiner als %d kB sein.', // followed by xx kB, xx being the size
	'Avatar_imagesize' => 'Der Avatar muss weniger als %d Pixel breit und %d Pixel hoch sein.',

	'Welcome_subject' => 'Willkommen bei %s',
	'New_account_subject' => 'Neues Benutzer-Konto',
	'Account_activated_subject' => 'Benutzer-Konto aktiviert',

	'Account_added' => 'Danke f�r die Registrierung, dein Benutzer-Konto wurde erstellt. Du kannst dich jetzt mit deinem Benutzernamen und deinem Passwort einloggen.',
	'Account_inactive' => 'Dein Benutzer-Konto wurde erstellt. Dieses Forum ben�tigt aber eine Aktivierung, daher wurde ein Aktivierungsschl�ssel an deine E-Mail-Adresse gesendet. Bitte �berpr�fe in ein paar Minuten deine Mailbox f�r weitere Informationen.',
	'Account_inactive_admin' => 'Dein Benutzer-Konto wurde erstellt. Dieser muss noch durch den Administrator freigeschalten werden. Du wirst benachrichtigt, wenn dies geschehen ist.',
	'Account_active' => 'Dein Benutzer-Konto wurde aktiviert. Danke f�r die Registrierung.<br />Du kannst dich jetzt mit deinem Benutzernamen und deinem Passwort einloggen.',
	'Account_active_admin' => 'Dein Benutzer-Konto wurde jetzt aktiviert.',
	'Reactivate' => 'Benutzer-Konto wieder aktivieren!',
	'Already_activated' => 'Dein Benutzer-Konto ist bereits aktiv.',
	'COPPA' => 'Dein Benutzer-Konto wurde erstellt, muss aber zuerst �berpr�ft werden. Mehr Details dazu wurden dir per E-Mail gesendet.',

	'Registration' => 'Einverst�ndniserkl�rung',
	'Reg_agreement' => 'Die Administratoren und Moderatoren dieses Forums bem�hen sich, Beitr�ge mit fragw�rdigem Inhalt so schnell wie m�glich zu bearbeiten oder ganz zu l�schen, aber es ist nicht m�glich, jede einzelne Nachricht zu �berpr�fen. Du best�tigst mit Absenden dieser Einverst�ndniserkl�rung, dass du akzeptierst, dass jeder Beitrag in diesem Forum die Meinung des Urhebers wiedergibt und dass die Administratoren, Moderatoren und Betreiber dieses Forums nur f�r ihre eigenen Beitr�ge verantwortlich sind.<br /><br />Du verpflichtest dich, keine beleidigenden, obsz�nen, vulg�ren, verleumdenden, gewaltverherrlichenden oder aus anderen Gr�nden strafbaren Inhalte in diesem Forum zu ver�ffentlichen. Verst��e gegen diese Regel f�hren zu sofortiger und permanenter Sperrung, wir behalten uns vor, Verbindungsdaten u. �. an die strafverfolgenden Beh�rden weiterzugeben. Du r�umst den Betreibern, Administratoren und Moderatoren dieses Forums das Recht ein, Beitr�ge nach eigenem Ermessen zu entfernen, zu bearbeiten, zu verschieben oder zu sperren. Du stimmst zu, dass die im Rahmen der Registrierung erhobenen Daten in einer Datenbank gespeichert werden.<br /><br />Dieses System verwendet Cookies, um Informationen auf deinem Computer zu speichern. Diese Cookies enthalten keine der oben angegebenen Informationen, sondern dienen ausschlie�lich deinem Bedienungskomfort dieser Seite. Deine E-Mail-Adresse wird nur zur Best�tigung der Registrierung und ggf. zum Versand eines neuen Passwortes verwendet.<br /><br />Durch das Abschlie�en der Registrierung stimmst du diesen Nutzungsbedingungen zu.',

	'Agreement' => 'Einverst�ndniserkl�rung',
	'Agree_under_13' => 'Ich bin mit den Bedingungen dieses Forums einverstanden und <b>unter</b> 12 Jahre alt.',
	'Agree_over_13' => 'Ich bin mit den Bedingungen dieses Forums einverstanden.',
	'Agree_not' => 'Ich bin mit den Bedingungen nicht einverstanden.',
	'Agree_checkbox' => 'Ich stimme diesen Bedingungen ausdr�cklich zu.',
	'Agree_checkbox_Error' => 'Um dich registrieren zu k�nnen mu�t du die Checkbox (unten auf dieser Seite) aktivieren!',

	'Wrong_activation' => 'Der Aktivierungsschl�ssel aus dem Link stimmt nicht mit dem in der Datenbank �berein. Bitte �berpr�fe die URL, und versuche es erneut.',
	'Send_password' => 'Schickt mir ein neues Passwort.',
	'Password_updated' => 'Ein neues Passwort wurde erstellt, es wurde eine E-Mail mit weiteren Anweisungen verschickt.',
	'No_email_match' => 'Die angegebene E-Mail-Adresse stimmt nicht mit dem Benutzernamen �berein.',
	'New_password_activation' => 'Aktivierung des neuen Passwortes',
	'Password_activated' => 'Dein Benutzer-Konto wurde wieder aktiviert. Um dich einzuloggen, benutze das Passwort, welches du per E-Mail erhalten hast.',

	'Send_email_msg' => 'E-Mail senden',
	'No_user_specified' => 'Es wurde kein Benutzer ausgew�hlt',
	'User_prevent_email' => 'Dieser Benutzer hat den E-Mail-Empfang deaktiviert. Bitte versuche es mit einer privaten Nachricht.',
	'User_not_exist' => 'Dieser Benutzer existiert nicht.',
	'CC_email' => 'Eine Kopie dieser E-Mail an dich senden',
	'Email_message_desc' => 'Diese Nachricht wird als Text versendet, verwende bitte deshalb kein HTML oder BBCode. Als Antwort-Adresse der E-Mail wird deine Adresse angegeben.',
	'Flood_email_limit' => 'Im Moment kannst du keine weiteren E-Mails versenden. Versuch es sp�ter noch einmal.',
	'Recipient' => 'Empf�nger',
	'Email_sent' => 'E-Mail wurde gesendet',
	'Send_Email' => 'E-Mail senden',
	'Empty_sender_email' => 'Du musst eine E-Mail Absender Adresse angeben.',
	'Empty_subject_email' => 'Du musst einen Titel f�r diese E-Mail angeben.',
	'Empty_message_email' => 'Du musst einen Text zur E-Mail angeben.',


// Visual confirmation system strings
	'Confirm_code_wrong' => 'Der eingegebene Best�tigungs-Code war nicht richtig',
//	'Too_many_registers' => 'Du hast die zul�ssige Zahl von Registrierungs-Versuchen f�r diese Sitzung �berschritten. Bitte versuche es sp�ter erneut.',
	'Confirm_code_impaired' => 'Wenn du optisch beeintr�chtigt bist oder aus einem anderen Grund den Code nicht lesen kannst, kontaktiere bitte den %sAdministrator%s f�r Hilfe.',
	'Confirm_code' => 'Best�tigungs-Code',
	'Confirm_code_explain' => 'Gebe den Code exakt so ein, wie du ihn siehst. Der Code unterscheidet zwischen Gro�- und Kleinschreibung, die Null hat im Inneren einen schr�gen Strich.',



// Members list
	'Select_sort_method' => 'Sortierungs-Methode ausw�hlen',
	'Sort' => 'Sortieren',
	'Sort_Top_Ten' => 'Top-Ten-Autoren',
	'Sort_Joined' => 'Anmeldungsdatum',
	'Sort_Username' => 'Benutzername',
	'Sort_Location' => 'Ort',
	'Sort_Posts' => 'Beitr�ge insgesamt',
	'Sort_Email' => 'E-Mail',
	'Sort_Website' => 'Webseite',
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
	'Could_not_add_user' => 'Die gew�hlte Gruppe existiert nicht.',
	'Could_not_anon_user' => 'Ein anonymer Benutzer kann kein Gruppenmitglied werden.',
	'Confirm_unsub' => 'Bist du sicher, dass du die Mitgliedschaft in dieser Gruppe beenden m�chtest?',
	'Confirm_unsub_pending' => 'Deine Anmeldung bei der Gruppe wurde noch nicht best�tigt, m�chtest du wirklich austreten?',
	'Unsub_success' => 'Du wurdest aus dieser Gruppe abgemeldet.',
	'Approve_selected' => 'Akzeptierte ausgew�hlt',
	'Deny_selected' => 'Gew�hlte l�schen',
	'Not_logged_in' => 'Du musst eingeloggt sein, um einer Gruppe beizutreten.',
	'Remove_selected' => 'Ausgew�hlte entfernen',
	'Add_member' => 'Mitglied hinzuf�gen',
	'Not_group_moderator' => 'Du bist nicht der Gruppenmoderator, daher kannst du diese Aktion nicht durchf�hren.',
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
	'Search_keywords_explain' => 'Du kannst <u>AND</u> benutzen, um W�rter zu definieren, die vorkommen m�ssen, <u>OR</u> kannst du benutzen f�r W�rter, die im Resultat sein k�nnen und <u>NOT</u> f�r W�rter, die im Ergebnis nicht vorkommen sollen. Das *-Zeichen kannst du als Platzhalter benutzen.',
	'Search_author' => 'Nach Autor suchen',
	'Search_author_explain' => 'Benutze das *-Zeichen als Platzhalter',
	'Search_author_topic_starter' => 'Nur nach von diesem Autor gestartete Themen suchen',

	'Search_for_any' => 'Nach irgendeinem Wort suchen',
	'Search_for_all' => 'Nach allen W�rtern suchen',
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

	'No_search_match' => 'Keine Beitr�ge entsprechen deinen Kriterien.',
	'Found_search_match' => 'Die Suche hat %d Beitrag gefunden.', // eg. Search found 1 match
	'Found_search_matches' => 'Die Suche hat %d Beitr�ge gefunden.', // eg. Search found 24 matches

	'Close_window' => 'Fenster schlie�en',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'Ank�ndigungen k�nnen in diesem Forum nur von %s erstellt werden.',
	'Sorry_auth_sticky' => 'Wichtige Nachrichten k�nnen in diesem Forum nur von %s erstellt werden.',
	'Sorry_auth_read' => 'Nur %s haben die Berechtigung, in diesem Forum Beitr�ge zu lesen.',
	'Sorry_auth_post' => 'Nur %s haben die Berechtigung, in diesem Forum Beitr�ge zu erstellen.',
	'Sorry_auth_reply' => 'Nur %s haben die Berechtigung, in diesem Forum auf Beitr�ge zu antworten.',
	'Sorry_auth_edit' => 'Nur %s haben die Berechtigung, in diesem Forum Beitr�ge zu bearbeiten.',
	'Sorry_auth_delete' => 'Nur %s haben die Berechtigung, in diesem Forum Beitr�ge zu l�schen.',
	'Sorry_auth_vote' => 'In diesem Forum k�nnen sich nur %s an Abstimmungen beteiligen.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>anonyme Benutzer</b>',
	'Auth_Registered_Users' => '<b>registrierte Benutzer</b>',
	'Auth_Self_Users' => '<b>bestimmte Benutzer</b>',
	'Auth_Users_granted_access' => '<b>Benutzer mit speziellen Rechten</b>',
	'Auth_Moderators' => '<b>Moderatoren</b>',
	'Auth_Administrators' => '<b>Administratoren</b>',

	'Not_Moderator' => 'Du bist nicht Moderator dieses Forums.',
	'Not_Authorized' => 'Nicht berechtigt',

	'You_been_banned' => 'Du wurdest von diesem Forum verbannt.<br />Kontaktiere den Administrator, um mehr Informationen zu erhalten.',

// Viewonline
	'Reg_users_zero_online' => 'Es sind kein registrierter und ', // There are 5 Registered and
	'Reg_users_online' => 'Es sind %d registrierte und ',
	'Reg_user_online' => 'Es ist ein registrierter und ', // There are 5 Registered and
	'Hidden_users_zero_online' => 'kein versteckter Benutzer online.', // 6 Hidden users online
	'Hidden_users_online' => '%d versteckte Benutzer online.', // 6 Hidden users online
	'Hidden_user_online' => 'ein versteckter Benutzer online.', // 6 Hidden users online
	'Guest_users_online' => 'Es sind %d G�ste online.',
	'Guest_users_zero_online' => 'Es sind keine G�ste online.', // There are 10 Guest users online
	'Guest_user_online' => 'Es ist ein Gast online.',
	'No_users_browsing' => 'Im Moment sind keine Benutzer im Forum.',

	'Online_explain' => 'Diese Daten zeigen an, wer in den letzten 5 Minuten online war.',
	'Online_today' => 'Diese Daten zeigen an, wer in den letzten 24 Stunden online war.',

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
	'Mod_CP_explain' => 'Mit dem unteren Men� kannst du mehrere Moderatoren-Operationen gleichzeitig ausf�hren. Du kannst Beitr�ge �ffnen, schlie�en, l�schen oder verschieben.',

	'Select' => 'Ausw�hlen',
	'Delete' => 'L�schen',
	'Move' => 'Verschieben',
	'Copy' => 'Kopieren',
	'Lock' => 'Sperren',
	'Unlock' => 'Entsperren',

	'Topics_Removed' => 'Die gew�hlten Themen wurden erfolgreich gel�scht.',
	'Topics_Locked' => 'Die gew�hlten Themen wurden erfolgreich gesperrt.',
	'Topics_Moved' => 'Die gew�hlten Themen wurden verschoben.',
	'Topics_Unlocked' => 'Die gew�hlten Themen wurden entsperrt.',
	'No_Topics_Moved' => 'Es wurden keine Themen verschoben.',

	'Confirm_delete_topic' => 'Bist du sicher, dass die gew�hlten Themen entfernt werden sollen?',
	'Confirm_lock_topic' => 'Bist du sicher, dass die gew�hlten Themen gesperrt werden sollen?',
	'Confirm_unlock_topic' => 'Bist du sicher, dass die gew�hlten Themen entsperrt werden sollen?',
	'Confirm_move_topic' => 'Bist du sicher, dass die gew�hlten Themen verschoben werden sollen?',

	'Move_to_forum' => 'Verschieben nach',
	'Leave_shadow_topic' => 'Schatten Thema im alten Forum lassen',

	'Split_Topic' => 'Thema teilen Kontrollbereich',
	'Split_Topic_explain' => 'Mit den Eingabefeldern unten kannst du ein Thema in zwei Teile teilen, in dem du entweder die Beitr�ge manuell ausw�hlst oder ab einem gew�hlten Beitrag teilst',
	'Split_title' => 'Titel des neuen Themas',
	'Split_forum' => 'Forum des neuen Themas',
	'Split_posts' => 'Gew�hlte Beitr�ge teilen',
	'Split_after' => 'Von gew�hltem Beitrag teilen',
	'Topic_split' => 'Das gew�hlte Thema wurde erfolgreich geteilt',

	'Too_many_error' => 'Du hast zu viele Beitr�ge gew�hlt. Du kannst nur einen Beitrag ausw�hlen, nach dem geteilt werden soll!',

	'None_selected' => 'Du hast keine Themen ausgew�hlt, auf die diese Aktion ausgef�hrt werden soll. Bitte w�hle mindestens eins aus.',
	'New_forum' => 'Neues Forum',

	'This_posts_IP' => 'IP-Adresse f�r diesen Beitrag',
	'Other_IP_this_user' => 'Andere IP-Adressen, von denen dieser Benutzer geschrieben hat',
	'Users_this_IP' => 'Beitr�ge von dieser IP-Adresse',
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

	'Guestbook' => 'G�stebuch',
	'Viewing_guestbook' => 'Das G�stebuch lesen',

	'Click_return_preferences' => 'Klicke %shier%s, um zu den Einstellungen zur�ckzukehren.',

	'Warn_new_post' => 'Es gibt mindestens eine neue Antwort in diesem Thema. Bitte schau dir die neuen Antworten in der Thema �bersicht an und sende deinen Beitrag erneut ab.',

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
	'Birthday_to_low' => 'Das Alter muss �ber %d Jahren liegen',
	'Submit_date_format' => 'd.m.Y', //php date() format - note: ONLY d , m and Y may be used and SHALL ALL be used (different sepperators are accepted)
	'Birthday_greeting_today' =>'Herzlichen Gl�ckw�nsch zum Geburtstag! Mit deinen %s Jahren siehst du immer noch so aus wie eh und je: einfach <b>blendend</b>.<br /> Also lass dich heute reich beschenken und feiern und lass dich nicht �rgern.',//%s is substituted with the users age
	'Birthday_greeting_prev' =>'Hui! Wir kommen zu sp�t zu deinem %s. Geburtstag, der am %s war, stimmt\'s? Wir w�nschen dir auch nachtr�glich noch alles Gute und hoffen, dass du einen sch�nen Geburtstag hattest.',//%s is substituted with the users age, and birthday
	'Greeting_Messaging' =>'Herzlichen Gl�ckwunsch!',
	'Birthday_today' => 'Geburtstage heute: ',
	'Birthday_week' => 'Geburtstage in den n�chsten %d Tagen: ', // %d is substitude with the number of days
	'Nobirthday_week' => 'In den n�chsten %d Tagen hat niemand Geburtstag.', // %d is substitude with the number of days
	'Nobirthday_today' => 'Heute hat niemand Geburtstag.',
	'Year' => 'Jahr',
	'Month' => 'Monat',
	'Day' => 'Tag',
// Birthday - END

// Start add - Gender MOD
	'Gender' => 'Geschlecht', //used in users profile to display witch gender he/she is
	'Male' => 'm�nnlich',
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
	'Click_return_viewtopic' => 'Klicke %shier%s, um zum Thema zur�ckzukehren.',
/*
	'Rules_ban_can' => 'You <b>can</b> ban other users in this forum',
	'Rules_greencard_can' => 'You <b>can</b> un-ban users in this forum',
	'Rules_bluecard_can' => 'You <b>can</b> report post to moderators in this forum',
*/
	'Rules_ban_can' => 'Du <b>kannst</b> andere Benutzer bannen!',
	'Rules_greencard_can' => 'Du <b>kannst</b> Benutzer entsperren.',
	'Rules_bluecard_can' => 'Du <b>kannst</b> Beitr�ge beanstanden.',
	'user_no_email' => 'Der Benutzer hat keine E-Mail-Adresse angegeben, deshalb kann er nicht automatisch benachrichtigt werden. Du solltest ihm eine PM zukommen lassen.',
	'user_already_banned' => 'Der gew�hlte Benutzer ist bereits gesperrt.',
	'Ban_no_admin' => 'Dieser Benutzer ist ein Administrator und kann weder verwarnt noch gesperrt werden.',
	'Give_b_card' => 'Diesen Beitrag einem Moderator melden.',
	'Clear_b_card' => 'Dieser Beitrag hat bisher %d blaue Karten erhalten. Wenn du best�tigst wird der Counter zur�ckgesetzt.',
	'No_moderators' => 'Dieses Forum hat keinen Moderator, deswegen wird kein Bericht versandt.',
	'Post_repported' => '%d Moderatoren werden �ber die Beanstandung dieses Beitrags informiert.',
	'Post_repported_1' => 'Der Moderator wird �ber die Beanstandung dieses Beitrags informiert.',
	'Post_repport' => 'Die Beanstandung abschicken.',
	'Post_reset' => 'Die Anzahl der blauen Karten dieses Beitrags wurde zur�ckgesetzt.',
	'Search_only_bluecards' => 'Alle Beitr�ge mit blauen Karten anzeigen.',
	'Send_message' => 'Klicke %shier%s, um einen Beitrag zu beanstanden.<br />',
	'Send_PM_user' => 'Klicke %shier%s, um dem Benutzer eine PN zu schreiben.',
	'Link_to_post' => 'Klicke %shier%s, um zum beanstandeten Beitrag zu gehen.
--------------------------------

',
	'Post_a_report' => 'Diesen Beitrag beanstanden.',
	'Report_stored' => 'Deine Beanstandung ist erfolgreich �bermittelt worden.',
	'Send_report' => 'Klicke %shier%s, um zur�ck zur urspr�nglichen Anzeige zu gelangen.',
	'Red_card_warning' => 'Du willst dem Benutzer %s eine rote Karte geben. Damit sperrst du ihn. Bist du sicher, dass du dieses tun willst?',
	'Yellow_card_warning' => 'Du willst dem Benutzer %s eine gelbe Karte geben. Damit l�sst du ihm eine Verwarnung zukommen. Bist du sicher, dass du dieses tun willst?',
	'Green_card_warning' => 'Du willst dem Benutzer %s eine gr�ne Karte geben. Damit entsperrst du ihn wieder. Bist du sicher, dass du dieses tun willst?',
	'Blue_card_warning' => 'Du willst diesen Beitrag beanstanden. Wenn du dies tust, werden die Moderatoren dieses Forums dar�ber informiert. Bist du sicher, dass du dieses tun willst?',
	'Clear_blue_card_warning' => 'Du bist im Begriff, den Z�hler f�r blaue Karten f�r diesen Beitrag zur�ckzustellen. M�chtest du fortfahren?',
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
	'sig_none' => 'Keine Signatur verf�gbar',
	'sig_save' => 'Speichern',
	'sig_save_message' => 'Deine Signatur wurde erfolgreich gespeichert!',

	'Statistics' => 'Statistiken',

// Start add - Global announcement MOD
	'Globalannounce' => 'Global Ank�ndigen',
	'Globalannounce' => 'Neue globale Ank�ndigung',
// End add - Global announcement MOD
	'Global_Announcements' => 'Globale Ank�ndigungen',
	'Announcements' => 'Ank�ndigungen',
	'Sticky_Topics' => 'Wichtige Themen',
	'Announcements_and_Sticky' => 'Ank�ndigungen und wichtige Themen',
// db_update generator
	'Db_update_generator' => 'DB Update Generator',
	'Instructions' => 'Anweisungen',
	'SQL_instructions' => 'Diese Software generiert PHP Dateien, welche es dir erlauben, die Datenbank mit Hilfe deines Browsers zu aktualisieren. Es gibt ein paar Dinge, die du beachten musst, wenn du SQL Anweisungen in die Box unten eingibst.<br />Stelle zun�chst einmal sicher, dass alle SQL Abfragen mit einem Semikolon (;) enden. Wenn nicht, wird die Datei fehlerhaft sein. Als n�chstes solltest du sicherstellen, dass die Tabellen den "phpbb_" Pr�fix haben. Dieser wird automatisch mit einer Variablen ersetzt, welche es dir erm�glicht, die erstellte db_update.php Datei in jedem Forum zu nutzen, ganz gleich wie dort der verwendete Tabellen Pr�fix ist.',
	'Enter_SQL' => 'SQL eingeben',
	'Enter_SQL_explain' => 'MySQL ist die weltweit bekannteste Open Source Datenbank, gesch�tzt f�r ihre Geschwindigkeit und Zuverl�ssigkeit.',
	'Output_SQL' => 'SQL Ausgabe',
	'Output_SQL_explain' => 'Kopiere den Text aus dem Textfeld rechts und f�ge ihn in eine leere Datei ein. Speichere die Datei als <u>db_update.php</u> ab und lade sie auf deinen Server hoch. Starte sie einmal, indem du sie mit deinem Browser aufrufst.<br /><br />Alternativ kannst du auf den Download Button klicken und die Datei auf deinen Computer herunterladen (empfohlen).',
	'Download' => 'Download',

	'TOP_POSTERS' => 'Top Posters',

// TELL A FRIEND
	'TELL_FRIEND' => 'E-Mail an einen Freund',
	'TELL_FRIEND_SENDER_USER' => 'Dein Name:',
	'TELL_FRIEND_SENDER_EMAIL' => 'Deine E-Mail:',
	'TELL_FRIEND_RECEIVER_USER' => 'Name deines Freundes:',
	'TELL_FRIEND_RECEIVER_EMAIL' => 'E-Mail deines Freundes:',
	'TELL_FRIEND_WRONG_EMAIL' => 'Du hast keine g�ltige E-Mail Adresse angegeben.',
	'TELL_FRIEND_MSG' => 'Deine Nachricht:',
	'TELL_FRIEND_TITLE' => 'Freund informieren',
	'TELL_FRIEND_BODY' => "Hallo,\nIch habe gerade das Thema &raquo;{TOPIC}&laquo; auf {SITENAME} gesehen und dachte, dass es dich vielleicht interessiert.\n Hier ist der Link: {LINK}\n\nSchau es dir mal. Wenn du darauf antworten m�chtest, kannst du ein eigenes Benutzer-Konto erstellen, sofern du nicht schon eines hast.",

// Begin Thanks Mod
	'thankful' => 'Dankbare Nutzer',
	'thanks_to' => 'Danke f�r dieses hilfreiche Thema',
	'thanks_end' => ':',
	'thanks_alt' => 'Dankesbeitrag',
	'thanks_add_rate' => 'Danke dem Autor f�r diesen n�tzlichen Beitrag',
	'thanked_before' => 'Du hast dich f�r diesen Beitrag schon bedankt',
	'thanks_add' => 'Dein Danke wurde hinzugef�gt',
	'thanks_not_logged' => 'Du muss dich einloggen, um dich f�r einen Beitrag zu bedanken.',
	'thanks2' => 'Vielen Dank!<br />',
// End Thanks Mod

//Begin Lo-Fi Mod
	'Lofi' => 'Lo-Fi Version',
// 'Full_Version' => 'Vollversion',
	'Full_Version' => 'Dies ist eine "Lo-Fi" Version von unserem Inhalt. Um die volle Version mit mehr Informationen, Formaten und Bildern anzuzeigen, klicke bitte hier.',
	'quote_lofi' => 'Zitat',
	'edit_lofi' => 'Bearbeiten',
	'ip_lofi' => 'IP',
	'del_lofi' => 'L�schen',
	'profile_lofi' => 'Profil',
	'pm_lofi' => 'PN',
	'email_lofi' => 'E-Mail',
	'website_lofi' => 'Webseite',
	'icq_lofi' => 'ICQ',
	'aim_lofi' => 'AIM',
	'yim_lofi' => 'YIM',
	'msnm_lofi' => 'MSN',
	'quick_lofi' => 'Schnellantwort',
	'new_pm_lofi' => 'Sende eine PN',
//End Lo-Fi Mod

// Retroactive Signature MOD
	'Retro_sig' => 'F�ge meine Signatur zu fr�heren Beitr�gen hinzu',
	'Retro_sig_explain' => 'Wenn du deine Signatur hinzuf�gst, �bernimmt Icy Phoenix die normalerweise nur f�r zuk�nftige Beitr�ge.',
	'Retro_sig_checkbox' => 'Setze den Haken, um die Signatur auch an fr�here Betr�ge anzuf�gen.',
// End Retro Sig MOD

	'legend' => 'Legende',
	'users' => 'Benutzer',
//added to autogroup mod
	'No_more' => 'Es werden keine weiteren Benutzer akzeptiert',
	'No_add_allowed' => 'Das automatische hinzuf�gen von Benutzern ist nicht gestattet',
	'Join_auto' => 'Du kannst dieser Gruppe beitreten, da deine Beitragsanzahl den Gruppenkriterien entspricht.',

// merge topics
	'Merge' => 'Zusammenf�hren',
	'Merge_topic' => 'Themen zusammenf�hren',
	'Topics_Merged' => 'Die ausgew�hlten Themen wurden erfolgreich zusammengef�hrt.',
	'No_Topics_Merged' => 'Es wurden keine Themen zusammengef�hrt.',
	'Confirm_merge_topic' => 'Bist du sicher, dass die die ausgew�hlten Themen zusammenf�hren m�chtest?',

	'Downloads' => 'Downloads',

// Start add - Bin Mod
	'Move_bin' => 'Dieses Thema in den Papierkorb verschieben',
	'Topics_Moved_bin' => 'Die ausgew�hlten Themen wurden in den Papierkorb verschoben.',
	'Bin_disabled' => 'Der Papierkorb wurde deaktiviert',
	'Bin_recycle' => 'Papierkorb leeren',
// End add - Bin Mod
	'Recent_topics' => 'Letzte Themen', // Recent Topics

	'Topics_Title_Edited' => 'Die Titel der ausgew�hlten Themen wurden bearbeitet.',
	'Edit_title' => 'Titel bearbeiten',
	'PM' => 'PN',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'IP-Adressinformation nur f�r Moderatoren',
	'Registered_ip_address' => 'Registrierte IP-Adresse',
	'Registered_hostname' => 'Registrierter Hostname',
	'Other_registered_ips' => 'Andere Benutzer, die sich von %s registriert haben', //%s is the IP address
	'Other_posted_ips' => 'IP Adressen, von denen der Benutzer geschrieben hat',
	'Search_ip' => 'Suche nach Beitr�gen anhand der IP-Adresse',
	'Search_ip_explain' => 'Gib eine IP-Adresse im Format <u>127.0.0.1</u> ein -- du kannst * als Platzhalter verwenden z.B. <u>127.*.*.1</u>',
	'IP' => 'IP',
	'Whois' => 'Whois',
	'Browser' => 'Browser',
	'No_other_registered_ips' => 'Keine anderen Benutzer haben sich von dieser IP-Adresse registriert.',
	'No_other_posted_ips' => 'Dieser Benutzer hat noch keine Beitr�ge geschrieben.',
	'Not_recorded' => 'Nicht registriert',
	'Logins' => 'Logins',
	'No_logins' => 'Von diesem Benutzer wurden keine Logins registriert.',
// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'Klicke hier, um das Bild in Originalgr��e anzuzeigen.',
	'LIW_click_image_explain' => 'Klicke auf das Bild, um es in Originalgr��e anzuzeigen',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => 'Foto-Galerie',
	'Personal_Gallery' => 'Pers�nliche Foto-Galerie',
	'Personal_Gallery_Of_User' => 'Pers�nliche Foto-Galerie von %s',
	'Personal_Gallery_Of_User_Profile' => 'Pers�nliche Foto-Galerie von %s (%d Bilder)',
	'Show_All_Pic_View_Mode_Profile' => 'Zeige alle Bilder in der Pers�nliche Foto-Galerie von %s (ohne Unterkategorien)',
	'Not_allowed_to_view_album' => 'Du bist nicht berechtigt, dir Bilder in dieser Kategorie anzusehen.',
	'Not_allowed_to_upload_album' => 'Du bist nicht berechtigt, Bilder in diese Kategorie hochzuladen. Kontaktiere den Administrator f�r weitere Informationen.',
	'Album_empty' => 'Es sind keine Bilder in dieser Kategorie<br />Klicke auf den <b>Bild hochladen</b> Link auf dieser Seite, um ein Bild hinzuzuf�gen.',
	'Album_empty2' => 'Es sind keine Bilder in dieser Kategorie.',
	'Upload_New_Pic' => 'Neues Bild hochladen',
	'Pic_Title' => 'Bildtitel',
	'Pic_Title_Explain' => 'Es ist wichtig, dem Bild einen guten Titel zu geben. Es kann ein Name oder ein Betreff sein, damit andere wissen, um was es sich handelt, ohne das Bild zu sehen.',
	'Pic_Upload' => 'Bild hochladen',
	'Pic_Upload_Explain' => 'Erlaubte Bildtypen sind JPG, GIF und PNG. Die maximale Dateigr��e darf %s Bytes betragen. Die Abmessung darf %sx%s Pixel nicht �berschreiten. Benutze die Hilfe deines Grafikprogramms, um mehr �ber Dateigr��en und Bildabmessungen zu erfahren.',
	'Album_full' => 'Diese Kategorie hat die maximale Anzahl von Bildern erreicht. Kontaktiere den Administrator f�r weitere Informationen.',
	'Album_upload_successful' => 'Dein Bild wurde erfolgreich hochgeladen.',
	'Click_return_album' => 'Klicke %shier%s, um zur Kategorie zur�ckzukehren.',
	'Invalid_upload' => 'Ung�ltiger Upload<br /><br />Dein Bild ist zu gro� oder das Format ist nicht erlaubt.',
	'Image_too_big' => 'Die Bildabmessungen (in Pixel) sind zu gro�.',
	'Uploaded_by' => 'Hochgeladen von',
	'Category_locked' => 'Du kannst keine Bilder in diese Kategorie hochladen, da sie von einem Administrator gesperrt wurde. Kontaktiere den Administrator f�r weitere Informationen.',
	'View_Album_Index' => 'Foto-Galerie Index',
	'View_Album_Personal' => 'Anzeigen der pers�nlichen Foto-Galerie eines Benutzers',
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
	'xs_no_news' => 'Es gibt keine News Beitr�ge.',
	'xs_news_version' => 'News Version: %s',
	'xs_news_ticker_feed' => 'XML Feed Quelle: %s',
	'xs_no_ticker' => 'Es sind keine News Ticker definiert. Gehe zum Administrations-Bereich um einen zu erstellen.',
	'xs_news_ticker_title' => 'News Ticker',
	'xs_news_tickers_title' => 'News Ticker',
	'xs_news_item_title' => 'News-Eintrag',
	'xs_news_items_title' => 'News-Eintr�ge',
	'hide' => 'Ausblenden',
	'show' => 'Zeige',
	'Welcome' => 'Willkommen',
	'birthdays' => 'Geburtstage',

//Battle of the Sexes
	'male_zero_total' => '<b>keine</b> m�nnliche Mitglieder', // # registered male users
	'male_total' => '<b>%d</b> m�nnliche Mitglieder', // # registered male users
	'male_one_total' => '<b>%d</b> m�nnliches Mitglied', // # registered male users
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
	'Post_review' => 'Beitrag �berpr�fen',
	'View_next_post' => 'zeige n�chsten Beitrag',
	'View_previous_post' => 'zeige vorherigen Beitrag',
	'No_newer_posts' => 'Es gibt keine neueren Beitr�ge in diesem Forum',
	'No_older_posts' => 'Es gibt keine �lteren Beitr�ge in diesem Forum',

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
	'Delete_note' => 'Notiz l�schen',
	'Edited_by' => 'Bearbeitet von',
	'Confirm_delete_edit_note' => 'Bist du sicher, dass du diese Bearbeitungsnotiz l�schen m�chtest?',
	'Edit_note_deleted' => 'Die Notiz wurde erfolgreich gel�scht.',
// End Edit Notes MOD
//Referrers Mod
	'Referrers' => 'http Referer',
	'Viewing_Referrers' => 'Referer anzeigen',
//Referrers Mod End

	'Recent_topics' => 'Neuste Themen', // Recent Topics
	'Recent_today' => 'Heute',
	'Recent_yesterday' => 'Gestern',
	'Recent_last24' => 'in den letzten 24 Stunden',
	'Recent_lastweek' => 'letzte Woche',
	'Recent_lastXdays' => 'letzte %s Tage',
	'Recent_last' => 'letzte',
	'Recent_days' => 'Tage',
	'Recent_first' => 'angefangen %s',
	'Recent_first_poster' => '%s',
	'Recent_select_mode' => 'Modus ausw�hlen:',
	'Recent_showing_posts' => 'Beitr�ge anzeigen:',
	'Recent_title_one' => '%s Thema %s', // %s = topics; %s = sort method
	'Recent_title_more' => '%s Themen %s', // %s = topics; %s = sort method
	'Recent_title_today' => ' seit heute',
	'Recent_title_yesterday' => ' seit gestern',
	'Recent_title_last24' => ' seit den letzten 24 Stunden',
	'Recent_title_lastweek' => ' seit letzter Woche',
	'Recent_title_lastXdays' => ' seit den letzten %s Tagen', // %s = days
	'Recent_no_topics' => 'Es wurden keine Themen gefunden.',
	'Recent_wrong_mode' => 'Du hast den falschen Modus ausgew�hlt.',
	'Recent_click_return' => 'Klicke %shier%s, um zur Neuste Themen Seite zur�ckzukehren.',

	'Profile_view_option' => 'Pop up Fenster f�r Profilansichten',
	'Profile_viewed' => 'Profilansichten',

// BEGIN Disable Registration MOD
	'registration_status' => 'Es tut uns leid, aber Neuregistrierungen im Forum sind zurzeit nicht m�glich. Bitte versuche es sp�ter noch einmal.',
// END Disable Registration MOD

	'PostHighlight' => 'Markieren',
	'QuickQuote' => 'Schnellzitat',
	'Randomquote' => 'Zuf�lliges Zitat',

// Mod User CP Organize
	'Cpl_Navigation' => 'Konfiguration',
// 'Cpl_Settings_Options' => 'Settings And Options',
	'Cpl_Settings_Options' => 'Einstellungen und Optionen',
	'Cpl_Board_Settings' => 'Foren Einstellungen',
	'Cpl_NewMSG' => 'Neue Nachricht senden',
	'Cpl_Click_Return_Cpl' => 'oder klicke %shier%s, um zur Konfiguration zur�ckzukehren.',
	'Cpl_Personal_Profile' => 'Pers�nliches Profil',
	'Cpl_More_info' => 'Abonnements',

	'Forbidden_characters' => 'Erlaubte Zeichen f�r Benutzernamen sind a-z, A-Z, 0-9, -, _ und Leerzeichen.',

	'Topics_per_page' => 'Themen pro Seite',
	'Posts_per_page' => 'Beitr�ge pro Seite',
	'Hot_threshold' => 'Beitragsgrenze f�r "hei�e" Themen',

	'Mod_CP_first_post' => 'Erster Beitrag',
	'Mod_CP_topic_count' => '<b>%s</b> Thema gefunden.',
	'Mod_CP_topics_count' => '<b>%s</b> Themen gefunden.',
	'Mod_CP_no_topics' => 'Keine Themen entsprechen deinen Kriterien.',
	'Mod_CP_sticky' => 'Wichtig',
	'Mod_CP_announce' => 'Ank�ndigen',
	'Mod_CP_global' => 'Globalisieren',
	'Mod_CP_normal' => 'Normalisieren',
	'Display_sticky' => 'Wichtig',
	'Display_announce' => 'Ank�ndigung',
	'Display_global' => 'Globale Ank�ndigung',
	'Display_poll' => 'Umfrage',
	'Display_shadow' => 'Verschoben',
	'Display_locked' => 'Gesperrt',
	'Display_unlocked' => 'Entsperrt',
	'Display_unread' => 'Ungelesen',
	'Display_unanswered' => 'Unbeantwortet',
	'Display_all' => 'Alle',
	'Mod_CP_confirm_delete_polls' => 'Bist du sicher, dass du diese Umfragen l�schen m�chtest?',
	'Mod_CP_poll_removed' => 'Die ausgew�hlte Umfrage wurde erfolgreich vom Thema entfernt.',
	'Mod_CP_polls_removed' => 'Die ausgew�hlten Umfragen wurden erfolgreich von den Themen entfernt.',
	'Mod_CP_topic_removed' => 'Das ausgew�hlte Thema wurde erfolgreich aus der Datenbank gel�scht.',
	'Mod_CP_topic_moved' => 'Das ausgew�hlte Thema wurde von <b>%s</b> nach <b>%s</b> verschoben.', // %s = old/new forum
	'Mod_CP_topics_moved' => 'Die ausgew�hlten Themen wurden von <b>%s</b> nach <b>%s</b> verschoben.', // %s = old/new forum
	'Mod_CP_topic_locked' => 'Das ausgew�hlte Thema wurde gesperrt.',
	'Mod_CP_topic_unlocked' => 'Das ausgew�hlte Thema wurde entsperrt.',
	'Mod_CP_topics_sticked' => 'Die ausgew�hlten Themen wurden als <b>Wichtig</b> markiert.',
	'Mod_CP_topic_sticked' => 'Das ausgew�hlte Thema wurde  als <b>Wichtig</b> markiert.',
	'Mod_CP_topics_announced' => 'Die ausgew�hlten Themen wurden angek�ndigt.',
	'Mod_CP_topic_announced' => 'Das ausgew�hlte Thema wurde angek�ndigt.',
	'Mod_CP_topics_globalized' => 'Die ausgew�hlten Themen wurden globalisiert.',
	'Mod_CP_topic_globalized' => 'Das ausgew�hlte Thema wurde globalisiert.',
	'Mod_CP_topics_normalized' => 'Die ausgew�hlten Themen wurden normalisiert.',
	'Mod_CP_topic_normalized' => 'Das ausgew�hlte Thema wurde normalisiert',
	'Mod_CP_click_return_topic' => 'Klicke %shier%s, um zum alten Thema zur�ckzukehren, oder %shier%s, um zum neuen zu gelangen.',

	't_starter' => 'Du kannst dir nicht selbst Danken.',
	'Watched_Topics' => 'Beobachtete Themen',
	'No_Watched_Topics' => 'Du beobachtest keine Themen.',
	'Watched_Topics_Started' => 'Thema er�ffnet',
	'Watched_Topics_Stop' => 'nicht mehr beobachten',

	'Stop_watching_forum' => 'Dieses Forum nicht mehr beobachten',
	'Start_watching_forum' => 'Dieses Forum beobachten',
	'No_longer_watching_forum' => 'Du beobachtest dieses Forum nicht mehr.',
	'You_are_watching_forum' => 'Du beobachtest jetzt dieses Forum und wirst �ber neue Themen benachrichtigt.',

	'UCP_SubscForums' => 'Beobachtete Foren',
	'UCP_NoSubscForums' => 'Du beobachtest keine Foren',
	'UCP_SubscForums_Flag' => 'Fahne',
	'UCP_SubscForums_Forum' => 'Forum',
	'UCP_SubscForums_Forum_subscribed' => 'Forum beobachtet',
	'UCP_SubscForums_Forum_already_subscribed' => 'Du beobachtest dieses Forum bereits',
	'UCP_SubscForums_Click_return_forum' => 'Klicke %shier%s, um zum Forum zur�ckzukehren.',
	'UCP_SubscForums_Topics' => 'Themen',
	'UCP_SubscForums_Posts' => 'Beitr�ge',
	'UCP_SubscForums_LastPost' => 'Letzter Beitrag',
	'UCP_SubscForums_UnSubscribe' => 'nicht mehr beobachten',
	'UCP_SubscForums_NewTopic' => 'Neues Thema',

	'profile_main' => 'Benutzer-Kontrollzentrum',
	'profile_explain' => 'Willkommen im Benutzer-Kontrollzentrum.<br />Hier kannst du sehen, wer sich dein Profil angeschaut hat, deine pers�nlichen Einstellungen anpassen und beobachtete Themen sowie Foren anzeigen und verwalten. Au�erdem kannst du Private Nachrichten (PN) an andere Benutzern senden (wenn vom Administrator gestattet).',
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
	'BSH_Viewing_ACP' => '%sACP anzeigen%s',
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
	'DB_size' => 'Gr��e der Datenbank',
	'Version_of_ip' => '<a href="http://www.icyphoenix.com/">Icy Phoenix</a> Version',
	'Version_of_board' => '<a href="http://www.phpbb.com">phpbb</a> Version',
	'Version_of_PHP' => '<a href="http://www.php.net/">PHP</a> Version',
	'Version_of_MySQL' => '<a href="http://www.mysql.com/">MySQL</a> Version',
	'Download_post' => 'Beitrag herunterladen',

	'Download_topic' => 'Thema herunterladen',
	'Always_swear' => 'Kraftausdr�cke immer erlauben',

	'Shoutbox' => 'Shoutbox',
	'Shoutbox_date' => ' d m Y h:i:s',
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
	'Acronym' => 'Abk�rzung',
	'Acronyms' => 'Abk�rzungen',
	'User_Number' => 'Benutzer #',
	'Member_Count' => 'Mitglieder',
	'Reply_message' => 'Beantwortete Nachricht',
	'Click_read_topic' => 'Klicke %shier%s, um sie zu lesen', // %s's here are for uris, do not remove!
	'Create_with_generator' => 'Avatar mit dem Avatar Generator erstellen',
	'View_avatar_generator' => 'Avatar Generator',
	'Adv_Search' => 'Erweiterte Suche',
	'Search_Explain' => 'Suche innerhalb dieser Seite',
	'Login_attempts_exceeded' => 'Die maximale Anzahl von %s zul�ssigen Login-Versuchen wurde �berschritten. Du kannst dich in den n�chsten %s Minuten nicht einloggen.',
	'Please_remove_install_contrib' => 'Bitte stelle sicher, dass du die Verzeichnisse install/ und contrib/ gel�scht hast.',
	'Search_Engines' => 'Suchmaschinen-Bots:',
	'Bots_browsing_forum' => 'Suchmaschinen-Bots in diesem Forum:',
	'Debug_On' => 'Debug ein',
	'Debug_Off' => 'Debug aus',
	'Page_Generation_Time' => 'Seitenaufbau in',
	'Memory_Usage' => 'Memory',
	'SQL_Queries' => 'SQL Abfragen',
	'Search_new2' => 'Neue Beitr�ge',
	'Search_new_p' => 'Neue Beitr�ge seit letztem Besuch',
	'Show_In_Portal' => 'Zeige im Portal',
	'Not_Auth_View' => 'Du bist nicht autorisiert, diese Seite anzusehen.',
	'Site_Hist' => 'Seiten Historie',
	'Links' => 'Links',
	'Print_View' => 'Druckansicht',
	'Browsing_topic' => 'Benutzer in diesem Thema:',
	'Sudoku' => 'Sudoku',
	'Bookmarks' => 'Lesezeichen',
	'Set_Bookmark' => 'Setze ein Lesezeichen f�r diese Thema',
	'Remove_Bookmark' => 'Entferne das Lesezeichen f�r dieses Thema',
	'No_Bookmarks' => 'Du hast kein Lesezeichen gesetzt',
	'Always_set_bm' => 'Setze Lesezeichen automatisch beim Schreiben einen Beitrages',
	'Found_bookmark' => 'Du hast %d Lesezeichen gesetzt.', // eg. Search found 1 match
	'Found_bookmarks' => 'Du hast %d Lesezeichen gesetzt.', // eg. Search found 24 matches
	'More_bookmarks' => 'Mehr Lesezeichen...', // For mozilla navigation bar

//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => 'Was ist das?',
	'Rss_news_help_title' => 'RSS Newsreader Hilfe',
	'Rss_news_help_header' => 'Was sind Feeds und wie verwende ich sie?',
	'Rss_news_help_explain' => 'Ein Feed ist eine regelm��ig aktualisierte Zusammenfassung bestimmter Web-Inhalte, die Links zur vollst�ndigen Version des jeweiligen Inhalts enth�lt. Wenn du mit einem Feed-Reader den Feed einer Website abonnierst, erh�ltst Du alle neuen Inhalte dieser Website in einer Zusammenfassung.<br /><br /><b>Achtung:</b> Zum Abonnieren von Website-Feeds muss ein <a href="http://www.rssowl.org/" target="new">Feed-Reader</a> verwendet werden. Beim Klicken auf den Link zu einem RSS- oder Atom-Feed erscheint sonst im Browser eine Seite mit einem unformatierten Textwirrwarr.',
	'Rss_news_help_header_2' => '<b>Was ist RSS und Atom?</b>',
	'Rss_news_help_explain_2' => 'RSS und Atom sind zwei Formate f�r Feeds. Die meisten Feed-Reader unterst�tzen beide Formate. Gegenw�rtig wird von uns Atom 0.3 und RSS 2.0 unterst�tzt.',
	'Rss_news_help_header_3' => '<b>Wie verwende ich die News-Feeds?</b>',
	'Rss_news_help_explain_3' => 'Als erstes ben�tigst Du einen Feed-Reader, den bekommst du beispielsweise bei <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />Danach kannst du in dem Programm:<br /><br /><b>1.</b> Nach RSS Links auf unserer Seite suchen. (Extras => Suche Newsfeeds auf Webseite) <b>oder</b><br /><b>2.</b> eine der folgenden Feed URL\'s hinzuf�gen:',
	'L_url_rss_explain' => 'URL f�r alle Forenbeitr�ge.',
	'L_url_rss_news_explain' => 'URL nur f�r die Foren News.',
	'L_url_rss_atom_explain' => 'URL f�r Atom RSS-Feed.',
	'Rss_news_help_rights' => 'Wir behalten uns das Recht vor, die Nutzung von Feeds jederzeit nach unserem Ermessen zu beenden. Unsere Foren-Feeds d�rfen nicht weitervertrieben werden.',
	'Rss_news_feeds' => 'RSS News Feeds',

	'Quick_Reply' => 'Schnell Antwort',
	'Mod_CP_sticky2' => 'Wichtig',
	'Mod_CP_announce2' => 'Ank�ndigung',
	'Mod_CP_global2' => 'Global',
	'Mod_CP_normal2' => 'Normal',

	'Search_Flood_Error' => 'Du kannst keine neue Suche so kurz nach deiner letzten Suche starten; Bitte versuche es in ein paar Sekunden noch einmal.',

// Custom Profile Fields MOD
	'custom_field_notice' => 'Diese Felder wurden von einem Administrator erstellt. Diese sind oder sind nicht �ffentlich einsehbar. Felder die mit * gekennzeichnet sind, sind Pflichtfelder.',
	'and' => ' und ',
// END Custom Profile Fields MOD

	'dsbl' => 'Deine IP Adresse ist auf einer <a href="%url%">DNS-basierenden Schwarzen Liste</a>.<br />Registrierungsversuch wurde blockiert.<br />Bitte wende dich an einen Administrator dieser Seite.',
	'Emails_Only_To_Admins_Error' => 'Du kannst das E-Mail System nur zum Senden von E-Mails an einen Administrator nutzen.',
	'Wordgraph' => 'Tags',
	'Viewing_wordgraph' => 'Ansicht der Tags-Seite',
	'Links_For_Guests' => '<b>Du musst registriert sein, um den Link sehen zu k�nnen.</b>',
	'New' => 'N',
	'New_Label' => 'Neu',
	'New_Messages_Label' => 'Neue Nachrichten',
	'Show_Personal_Gallery' => 'Zeige pers�nliche Foto-Galerie dieses Benutzers',
	'Login_Status' => 'Online Status',
	'Login_Hidden' => 'Versteckt',
	'Login_Visible' => 'Sichtbar',
	'Login_Default' => 'Standard',
	'Errors_Not_Found' => 'Die angeforderte Adresse wurde auf diesem Server nicht gefunden.',
	'Errors_000' => 'Unbekannter Fehler',
	'Errors_000_Full' => 'Die angeforderte Adresse hat einen unbekannten Fehlercode zur�ckgegeben.<br />Der Fehler wurde in eine Log-Datei geschrieben und wir werden so schnell wie m�glich pr�fen, wo das Problem liegt.',
	'Errors_400' => 'Fehler 400',
	'Errors_400_Full' => 'Die angeforderte Adresse ist ung�ltig.',
	'Errors_401' => 'Fehler 401 - Nicht berechtigt',
	'Errors_401_Full' => 'Du erh�ltst diese Fehlermeldung, weil du nicht berechtigt bist, diese Adresse aufzurufen.',
	'Errors_403' => 'Fehler 403',
	'Errors_403_Full' => 'Zugriff auf diese Adresse ist verboten.',
	'Errors_404' => 'Fehler 404 - Datei nicht gefunden',
	'Errors_404_Full' => 'Die angeforderte Adresse wurde auf dem Server nicht gefunden. Vielleicht hast du die Adresse falsch eingegeben, oder die angeforderte Seite ist nicht mehr auf dem Server.',
	'Errors_500' => 'Fehler 500 - Konfigurationsfehler',
	'Errors_500_Full' => 'Die angeforderte Adresse lieferte einen Konfigurationsfehler.<br />Der Fehler wurde in eine Log-Datei geschrieben und wir werden so schnell wie m�glich pr�fen, wo das Problem liegt.',
	'Errors_Email_Subject' => 'Fehler: ',
	'Errors_Email_Addrress_Prefix' => 'icy_phoenix_errors',
	'Errors_Email_Body' => 'Auf deiner Seite ist ein Fehler aufgetreten. Bitte �berpr�fe die Log-Datei.',
	'Remote_avatar_no_image' => 'Das Bild %s ist nicht vorhanden',
	'Remote_avatar_error_filesize' => 'Das Bild ist zu gro�. Avatare d�rfen maximal (%d Bytes) gro� sein.',
	'Remote_avatar_error_dimension' => 'Die Bildpixelgr��e ist zu gro�. Avatare d�rfen maximal (%d x %d Pixel) gro� sein.',
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
	'Page_Desc' => 'Auf dieser Seite kannst du die Credits &amp; Mods f�r die Credits/Mods Liste deines Forums hinzuf�gen/bearbeiten/l�schen. Sie werden angezeigt, wenn Benutzer die Seite hacks_list.php besuchen.',
	'Deleted_Hack' => 'Credit %s wurde von der Liste gel�scht.<br />',
	'Updated_Hack' => 'Informationen f�r Credit %s wurden aktualisiert.<br />',
	'Added_Hack' => 'Informationen f�r Credit %s hinzugef�gt.<br />',
	'Status' => 'Status',
	'No_Website' => 'Keine Webseite verf�gbar',
	'No_Hacks' => 'Keine Credits zum anzeigen',
	'Add_New_Hack' => 'Neuen Credit hinzuf�gen',
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
	'Error_File_Opening' => 'Fehler beim �ffnen von Datei: %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => 'Neustes Bild', // Album Addon
	'Random_pic' => 'Zuf�lliges Bild', // Album Addon
	'Click_enlarge_pic' => 'Klicke auf das Bild, um es zu vergr��ern.',
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
	'Users_Guests' => 'G�ste',
	'Users_Hidden' => 'Versteckt',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Fast' => 'Schnell',
	'Standard' => 'Standard',
	'Style' => 'Style',
	'User_Contacts' => 'Kontakte',
	'Memberlist_Users_Display' => 'Benutzer pro Seite:',
	'Sort_LastLogon' => 'Letzter Besuch',
	'Sort_Birthday' => 'Geburtstag',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => 'Team',
	'Rank' => 'Rang',
	'Rank_Header' => 'R�nge',
	'Rank_Image' => 'Rangbild',
	'Rank_Posts_Count' => 'Automatischer Rang nach Beitr�gen',
	'Rank_Days_Count' => 'Automatischer Rang nach Tagen',
	'Rank_Min_Des' => 'Minimum Beitr�ge/Tage',
	'Rank_Min_M' => 'Minimale Beitr�ge',
	'Rank_Max_M' => 'Maximale Beitr�ge',
	'Rank_Min_D' => 'Minimale Tage',
	'Rank_Max_D' => 'Maximale Tage',
	'Rank_Special' => 'Spezialrang',
	'Rank_Special_Guest' => 'Spezialrang f�r G�ste',
	'Rank_Special_Banned' => 'Spezialrang f�r Gesperrte',
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
	'TOOLS_LINKS' => 'Werkzeuge',
	'NEWS_LINKS' => 'News',
	'USERS_LINKS' => 'Benutzer &amp; Gruppen',
	'INFO_LINKS' => 'Info',
	'SPONSORS_LINKS' => 'Sponsoren',
	'HelpDesk' => 'Help Desk',
	'AvatarGenerator' => 'Avatar Generator',
	'DBGenerator' => 'SQL zu PHP Generator ',
	'NEWS_CAT' => 'News Kategorien',
	'NEWS_ARC' => 'News Archiv',
// Mighty Gorgon - Nav Links - END
	'Activity' => 'Spiele',
	'Games' => 'Spiele',
	'Trohpy' => 'Spiel Pokale',
	'quick_links_games' => 'Spiele Men�',

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
	'MGC_User_Nickname' => 'Nickname',
	'MGC_User_Server' => 'Server',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'MGC Version',

	'Country_Flag' => 'Landesflagge',
	'Select_Country' => 'Land ausw�hlen',
	'Extra_profile_info' => 'Zus�tzliche Profil Informationen',
// 'Extra_profile_info_explain' => 'You can add extra information about yourself or about your hobbies. You can also add photos. You can use some bbcodes as when you post or make your signature. There is a <b>%d</b> character limit (if 0 then no limit)',
	'Extra_profile_info_explain' => 'Hier kannst du zus�tzliche Informationen �ber dich oder deine Hobbies eintragen. Du kannst auch Bilder einf�gen. Es ist m�glich BBCode zu verwenden, welcher hier genauso funktioniert, wie beim Schreiben eines Beitrags oder wenn du deine Signatur bearbeitest.',
	'Extra_window' => 'in neuem Fenster �ffnen',
	'Extra_too_long' => 'Dein Extra-Feld ist zu lang (max. <b>%d</b> Zeichen sind erlaubt)',
	'UserLike' => 'Benutzer mag',
	'UserDisLike' => 'Benutzer mag nicht',
	'UserLikeIns' => 'Drei Dinge die du magst',
	'UserDisLikeIns' => 'Drei Dinge die du nicht magst',
	'UserPhone' => 'Telefonnummer',
	'UserSport' => 'Sport/Team',
	'UserMusic' => 'Musik/Gruppen',
	'UserNoInfo' => 'Keine Informationen verf�gbar',
	'Last_Seen' => 'Zuletzt Online',
// New MG - END

// MG CMS - BEGIN
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'CMS Verwaltung',
	'CMS_CONFIG' => 'CMS Konfiguration',
	'CMS_ACP' => 'Bearbeite diese Seite',
	'CUSTOM_PAGE' => 'Individuelle Seitenanpassung',
// MG CMS - END

// Icy Phoenix - BUILD 001
	'SimilarTopics' => '�hnliche Beitr�ge',
	'Chat' => 'Chat',
	'Digests' => 'Digests',

	'CPL_REG_INFO_EXPLAIN' => 'Benutzername, E-Mail-Adresse und Passwort',
	'CPL_PROFILE_INFO_EXPLAIN' => 'Allgemeine Kontakt Information, Messenger, Geburtstag, Interessen und andere Informationen',
	'CPL_PROFILE_VIEWED_EXPLAIN' => 'Benutzer die dein Profil angesehen haben',
	'CPL_AVATAR_PANEL_EXPLAIN' => 'Avatar ist ein kleines Bild das neben deinem Nick angezeigt wird',
	'CPL_SIG_EDIT_EXPLAIN' => 'Deine Signatur: Du kannst hier einen Text eingeben der unter jedem deiner Beitr�ge angezeigt wird',
	'CPL_PREFERENCES_EXPLAIN' => 'Allgemeine Einstellungen bez�glich schreiben und lesen von Mitteilungen',
	'CPL_BOARD_SETTINGS_EXPLAIN' => 'Globale Einstellungen bez�glich Zeit, Template und Sprache',
	'Calendar_settings_EXPLAIN' => 'Einstellungen bez�glich der Kalender Box',
	'Hierarchy_setting_EXPLAIN' => 'Einstellungen bez�glich der Unterforen und Themen Typen Aufteilung',
	'LOGIN_SEC_EXPLAIN' => 'Wenn dies aktiviert ist kannst du alle Logins mit deinem Benutzernamen einsehen',
	'CPL_OWN_POSTS_EXPLAIN' => 'Suche nach deinen Beitr�gen',
	'CPL_OWN_PICTURES_EXPLAIN' => 'Besuche deine pers�nliche Foto-Galerie',
	'CPL_INBOX_EXPLAIN' => 'Eingang: beinhaltet private Nachrichten die du empfangen hast',
	'CPL_SAVEBOX_EXPLAIN' => 'Gespeicherte: beinhaltet private Nachrichten die du gespeichert hast',
	'CPL_OUTBOX_EXPLAIN' => 'Ausgang: beinhaltet private Nachrichten welche du gesendet hast, die aber noch nicht gelesen wurden',
	'CPL_SENTBOX_EXPLAIN' => 'Gesendet: beinhaltet private Nachrichten die gesendet und gelesen wurden',
	'CPL_BOOKMARKS_EXPLAIN' => 'Alle Lesezeichen die du f�r Themen gesetzt hast',
	'WATCHED_TOPICS_EXPLAIN' => 'Eine Liste aller Themen die du beobachtest',
	'CPL_SUBSCFORUMS_EXPLAIN' => 'Die Foren die du abonniert hast um Informationen �ber neue Themen zu erhalten',
	'DIGESTS_EXPLAIN' => 'Digests sind periodische E-Mails die automatisch gesendet werden mit einem Hinweis auf die neuen Nachrichten in dem entsprechenden Forum',
	'DRAFTS_EXPLAIN' => 'Verwalte deine Entw�rfe',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Shoutbox',
	'Ajax_Chat' => 'Chat',
	'Ajax_Archive' => 'Archiv',
	'Shoutbox_flooderror' => 'Du kannst nicht so schnell hintereinander Shouts senden. Bitte versuche es in einem Moment noch einmal.',
	'Shoutbox_no_auth' => 'Sorry, nur registrierte Benutzer k�nnen die Shoutbox benutzen',
	'Shoutbox_loading' => 'Lade Shoutbox...',
// Errors
	'Shoutbox_unable' => 'Sorry, die Aktion konnte nicht ausgef�hrt werden. Versuch es bitte noch einmal.',
	'Shoutbox_empty' => 'Keine Mitteilungen in der Datenbank',
	'Shoutbox_no_mode' => 'Kein g�ltiger Mode festgelegt',
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
	'Online_guests' => 'G�ste',
	'Who_is_Chatting' => 'Wer ist im Chat',
	'Shoutbox_online_explain' => 'Diese Informationen basieren auf den Daten der aktiven Benutzer der letzten drei�ig Sekunden.',
// Ajax Shoutbox - END

	'Contact_us' => 'Kontakt',
	'Contact_us_explain' => 'Auf dieser Seite kannst du uns eine E-Mail senden',
	'Session_invalid' => 'Ung�ltige Session. Bitte betrete das Forum noch einmal.',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => ' dieser Benutzername ist zu kurz',
	'Reg_Username_Long' => ' dieser Benutzername ist zu lang',
	'Reg_Username_Taken' => ' dieser Benutzername ist nicht verf�gbar',
	'Reg_Username_Free' => ' dieser Benutzername ist verf�gbar',
	'Reg_PWD_Short' => 'Dieses Passwort ist zu kurz',
	'Reg_PWD_Easy' => 'Dieses Passwort ist zu einfach',
	'Reg_PWD_OK' => 'Dieses Passwort ist OK',
	'Reg_Email_Invalid' => ' diese E-Mail Adresse ist ung�ltig oder ist schon vorhanden',
	'Reg_Email_OK' => ' diese E-Mail Adresse ist OK',

// Moved here from lang_adv_time.php
	'time_mode' => 'Zeit-Verwaltung',
	'time_mode_text' => 'Forumeinstellungen werden ignoriert, wenn die Automatische Einstellung aktiviert ist (JavaScript ist f�r die ersten beiden erforderlich).<br />Wenn du Manuelle Einstellung gew�hlt hast, kannst du die Sommerzeit Differenz im Feld Sommerzeit Unterschied die Differenz zur normalen Zeit eingeben (0 bis 120 Minuten, normalerweise 60 Minuten).<br /><br />* Der mit Sternchen markierte Modus, ist der Standardmodus im Forum und vom Administrator empfohlen.',
	'time_mode_auto' => 'Automatische Einstellung:',
	'time_mode_full_pc' => 'Zeit deines Computers',
	'time_mode_server_pc' => 'Server Universalzeit, Zeitzone/Sommerzeit<br /><span STYLE="margin-left: 25">deines Computers</span>',
	'time_mode_full_server' => 'Lokale Server Zeit',
	'time_mode_manual' => 'Manuell Einstellung:',
	'time_mode_dst' => 'Sommerzeit aktivieren',
	'time_mode_dst_server' => 'vom Server',
	'time_mode_dst_time_lag' => 'Sommerzeit Unterschied',
	'time_mode_dst_mn' => ' Minuten',
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
	'Not_availble' => 'Nicht verf�gbar',
	'Total_users' => 'Maximale Anzahl von Benutzern',
	'Reg_users' => 'Registrierte Benutzer',
	'Hidden_users' => 'Versteckte Benutzer',
	'Guests_users' => 'G�ste',
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

/* lang_referrers.php - BEGIN */
	'Referrers_Title' => 'Http Referer Konfiguration',
	'Referrers_Cleared' => 'Referer gel�scht',
	'Referrers_Clear' => 'Alle l�schen',
	'Click_Return_Referrers' => 'Klicke %shier%s, um zu den Referer zur�ckzukehren.',
	'Referrers' => 'Http Referer',
	'Referrer_host' => 'Verweisender Host',
	'Referrer_url' => 'Verweisende URL',
	'Referrer_ip' => 'Verweisende IP',
	'Referrer_hits' => 'Treffer',
	'Referrer_first' => 'Erster Besuch',
	'Referrer_last' => 'Letzter Besuch',
	'Viewing_Referrers' => 'Referer anzeigen',
/* lang_referrers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_Days' => '%d Tage',
	'X_Weeks' => '%d Wochen',
	'X_Months' => '%d Monate',
	'X_Years' => '%d Jahre',

	'Confirm_delete_user' => 'Bist du Dir wirklich sicher, dass du diesen Benutzer l�schen willst?',
	'Prune_no_users' => 'Es wurden keine Benutzer gel�scht.',
	'Prune_users_number' => '%d Benutzer wurden gel�scht:',

	'Prune_user_list' => 'Benutzer, die gel�scht werden',
	'Prune_on_click' => 'Du bist dabei, %d Benutzer zu l�schen. Fortfahren?',
	'Prune_Action' => 'Aktionen',
	'Prune_users_explain' => 'Von dieser Seite aus kannst du inaktive Benutzer l�schen. Dabei kannst du zwischen drei Arten w�hlen: Benutzer l�schen, die noch nie etwas geschrieben haben, diejenigen, die sich noch nie eingeloggt haben, oder diejenigen, die ihr Benutzer-Konto noch nicht freigeschaltet haben.<p/><b> !Achtung! </b> Du kannst diese Aktion nicht wieder r�ckg�ngig machen, alle Benutzer aus der Liste werden gel�scht, sobald du auf den Link geklickt hast.',
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => 'Avatar Generator',
	'Available' => 'Verf�gbare Avatare',
	'Random' => 'Zuf�lliger Avatar',
	'Avatar_Text' => 'Bitte gib den Text ein, der auf dem Avatar stehen soll:',
	'Avatar_Preview' => 'Avatar-Vorschau',
	'Your_Avatar' => 'Dein Avatar',
	'Submit_Avatar' => 'Avatar best�tigen',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Upload_Image_Local' => 'Bild hochladen',
	'Uploaded_Images_Local' => 'Hochgeladene Bilder',
	'Upload_Image_Local_Explain' => 'W�hle das Bild aus, das du hochladen m�chtest.',
	'Uploaded_Image_Success' => 'Das Bild wurde erfolgreich hochgeladen.',
	'Uploaded_Image_BBC' => 'Du kannst diesen BBCode benutzen, um das Bild zu posten.',
	'Upload_Image_Empty' => 'Das Bild konnte nicht hochgeladen werden!',
	'Upload_File_Too_Big' => 'Das Bild, das du hochladen wolltest, ist zu gro�! Max erlaubte Gr��e:',
	'Upload_File_Type_Allowed' => 'Nur diese Datei-Arten k�nnen hochgeladen werden',
	'Upload_Insert_Image' => 'F�ge BBCode ein',
	'Upload_Close' => 'Schlie�en',
	'BBCode' => 'BBCode',
	'HTML' => 'HTML',

	'No_News' => 'Keine News',

	'Email_confirm' => 'Best�tige deine E-Mail-Adresse',
	'Email_mismatch' => 'Die E-Mail-Adressen die du eingegeben hast, sind nicht gleich.',

	'View_ballot' => 'Zeige Abstimmung',
	'Full_edit' => 'Zur vollst�ndigen Bearbeitungsansicht wechseln',
	'Save_changes' => 'Speichern',
	'No_subject' => '(Kein Betreff)',
	'Edit_quick_post' => 'Schnellbearbeitung dieses Beitrags',
	'AJAX_search_results' => 'Eine Schnellsuche hat %s Themen mit den Schl�sselw�rtern aus deinem Thementitel gefunden. Klickt hier, um diese Themen anzusehen.',
	'AJAX_search_result' => 'Eine Schnellsuche hat ein Thema mit den Schl�sselw�rtern aus deinem Thementitel gefunden. Klickt hier, um dieses Thema anzusehen.',
	'More_matches_username' => 'Mehr als ein Benutzer passt zu deiner Anfrage. Bitte w�hle einen aus der obigen Box aus.',
	'No_username' => 'Du mu�t einen Benutzernamen eingeben.',
	'AJAX_quick_search_results' => 'Eine Schnellsuche hat %s Themen mit diesen Schl�sselw�rtern gefunden.<br />Rechts kannst du die ersten Ergebnisse sehen.<br />Klicke auf SUCHEN, um die komplette Ergebnisliste zu erhalten.',
	'AJAX_quick_search_result' => 'Eine Schnellsuche hat ein Thema mit diesen Schl�sselw�rtern gefunden.<br />Rechts kannst du das Ergebnis sehen.',

	'Icon_Description' => 'Icon Beschreibung',

	'Feature_Disabled' => 'Diese Funktion wurde deaktiviert.',

// Resend Activation - BEGIN
	'Resend_activation_email' => 'Erneutes Senden der Aktivierungs-E-Mail',
	'Invalid_activation' => 'Benutzer-Konto Aktivierung kann nur von einem Administrator durchgef�hrt werden.',
	'No_actkey' => 'Es existiert kein Aktivierung-Schl�ssel f�r dein Konto. Bitte kontaktiere den Administrator f�r mehr Informationen.',
	'Send_actmail_flood_error' => 'Du kannst nicht so schnell eine erneute Anfrage nach deiner letzten senden! Bitte versuche es sp�ter noch einmal.',
	'Resend_activation_email_done' => 'Die Aktivierungs-E-Mail wurde gesendet. Bitte pr�fe dein E-Mail Postfach f�r weitere Informationen.',
// Resend Activation - END

	'Bots_Group' => 'Bots',
	'Bots_Color' => 'Bots Farbe',
	'Active_Users_Group' => 'Aktive Benutzer',
	'Active_Users_Color' => 'Aktive Benutzer Farbe',
	'Group_Default_Membership' => 'Standard Gruppe',
	'Group_Default_Membership_Explain' => 'W�hle die Standard Gruppe f�r Benutzer, um Ihnen einen Rang und die Farbe zuzuweisen.',
	'User_Color' => 'Benutzer Farbe',
	'User_Color_Explain' => 'Wenn du eine Farbe f�r diesen Benutzer bestimmst, wird dies mit der Standard Gruppe �berschrieben, wenn du oben eine angegeben hast. Benutze den HEX Code ohne <b>#</b> Beispiel: ff0000 ist der Code f�r ROT.',
	'No_Groups_Membership' => 'Keine Mitgliedschaft',
	'No_Default_Group' => 'Keine Standard Gruppe',
	'Group_members_updated' => 'Gruppen Mitglieder wurden erfolgreich aktualisiert.',
	'Colorize_All' => 'F�rbe alle Mitglieder',
	'Colorize_Selected' => 'F�rbe ausgew�hlte',

	'CompanyWho' => 'Das Unternehmen',
	'CompanyWhere' => 'Wie du uns erreichst',
	'CompanyServices' => 'Services',
	'CompanyProducts' => 'Produkte',

	'ShareThisTopic' => 'Verteile dieses Thema',

	'Remove_cookies' => 'Entferne die Cookies die von dieser Seite gesetzt wurden',
	'Cookies_deleted' => 'Alle Cookies wurden gel�scht. Du bist nun ausgeloggt.<br />Um das L�schen abzuschlie�en musst du nun deinen Browser schlie�en.',
	'Delete_cookies' => 'Entferne Cookies',
	'cookies_confirm' => 'Bist du sicher das du alle Cookies die von dieser Seite gesetzt wurden, l�schen willst?<br /><br />Diese Aktion wird Dich auch automatisch ausloggen.',

	'CustomIcy' => 'CustomIcy',

	'Drafts' => 'Entw�rfe',
	'Drafts_Action' => 'Aktion',
	'Drafts_Save' => 'Speichern',
	'Drafts_Load' => 'Laden',
	'Drafts_Saved' => 'Dieser Entwurf wurde gespeichert',
	'Drafts_Loaded' => 'Entwurf geladen',
	'Drafts_No_Drafts' => 'Keine Entw�rfe gespeichert',
	'Drafts_Delete_Sel' => 'L�sche ausgew�hlte',
	'Drafts_Save_Question' => '<br /><br />Bist du Dir sicher diese Nachricht als Entwurf zu speichern?<br /><br />Bitte beachte das nur der Mitteilungstext gespeichert wird, alle anderen Einstellungen werden verworfen.',
	'Drafts_Delete_Question' => '<br /><br />Bist du Dir sicher alle ausgew�hlten Entw�rfe zu l�schen?',
	'Drafts_Type' => 'Entwurf Typ',
	'Drafts_Subject' => 'Entwurf Titel',
	'Drafts_NT' => 'Neues Thema',
	'Drafts_NM' => 'Antworten',
	'Drafts_NPM' => 'Private Nachricht',

	'CannotEditAdminsPosts' => 'Du kannst keine Administrator Beitr�ge bearbeiten',
	'Random_Number' => 'Zuf�llige Nummer',

	'New_download' => 'Ein neuer Download wurde hinzugef�gt oder aktualisiert.<br />Klicke %shier%s, um ihn zu sehen.',
	'Dl_bug_tracker' => 'Bug Tracker',
	'Downloads_ADV' => 'Downloads ADV',

	'TopicUseful' => 'War das Thema hilfreich?',
	'Article' => 'Artikel',
	'Comments' => 'Kommentare',

	'Sitemap' => 'Sitemap',

	'Delete_My_Account' => 'Benutzer-Konto l�schen',
	'Delete_My_Account_Explain' => 'Wenn du dein Benutzer-Konto auf dieser Seite l�schen m�chtest, dann schicke bitte einen Antrag unter Benutzung dieses Formulars und dein Konto wird so bald wie m�glich gesperrt.<br />Bitte gib "Konto-L�schung" im Betreff an und (wenn du m�chtest) schreib den Grund in wenigen Worten.',

	'KB_MODE_ON' => 'Aktiviere KB Methode',
	'KB_MODE_OFF' => 'Deaktiviere KB Methode',

	'Go_To_Page_Number' => 'Gehe zur Seite',

	'Admin_Emails' => 'Administratoren k�nnen mir Informationen per E-Mail senden',
	'Allow_PM_IN' => 'Erlaube Benutzer mir private Nachrichten zu schreiben',
	'Allow_PM_IN_Explain' => 'Denke daran, dass diese Option den Administratoren, Moderatoren und Freunden erlaubt, dir jederzeit eine Nachricht schreiben zu k�nnen.',
	'Allow_PM_IN_SEND_ERROR' => 'Der Benutzer, dem du eine PN senden wolltest, k�nnte deine Mitteilung nicht empfangen, da er private Mitteilungen nicht empfangen m�chte.',

// 'UCP_ZEBRA' => 'Freunde &amp; Feinde',
	'UCP_ZEBRA' => 'Freund-Verwaltung',
	'UCP_ZEBRA_FOES' => 'Feinde verwalten',
	'UCP_ZEBRA_FRIENDS' => 'Freunde verwalten',

	'ADD_FOES' => 'Neue Feinde hinzuf�gen',
	'ADD_FOES_EXPLAIN' => 'Du kannst mehrere Benutzernamen, jeden auf einer anderen Linie eintragen.',
	'YOUR_FOES' => 'Deine Feinde',
	'YOUR_FOES_EXPLAIN' => 'Um Benutzernamen zu entfernen w�hle sie aus und klicke absenden.<br />Tipp zum Ausw�hlen: Benutze STRG + anklicken des Namens um mehrere auszuw�hlen.',
	'FOE_MESSAGE' => 'Nachricht von Feinden',
	'FOES_EXPLAIN' => 'Feinde sind Benutzer, die normalerweise ignoriert werden. Eintr�ge dieser Benutzer werden nicht vollst�ndig sichtbar sein. Pers�nliche Mitteilungen von den Feinden sind jedoch gestattet. Nachrichten von Moderatoren oder Administratoren kannst du allerdings nicht ignorieren.',
	'FOES_UPDATED' => 'Deine Feind-Liste wurde erfolgreich aktualisiert.',
	'FOES_UPDATE_ERROR' => 'Deine Feind-Liste wurde nicht aktualisiert.',
	'NO_FOES' => 'z.Z. keine Feinde definiert',

	'ADD_FRIENDS' => 'Neue Freunde hinzuf�gen',
	'ADD_FRIENDS_EXPLAIN' => 'Du kannst mehrere Benutzernamen, jeden auf einer anderen Linie eintragen.',
	'YOUR_FRIENDS' => 'Deine Freunde',
	'YOUR_FRIENDS_EXPLAIN' => 'Um Benutzernamen zu entfernen w�hle sie aus und klicke absenden.<br />Tipp zum Ausw�hlen: Benutze STRG + anklicken des Namens um mehrere auszuw�hlen.',
	'FRIEND_MESSAGE' => 'Nachricht von Freunden',
	'FRIENDS' => 'Freunde',
	'FRIENDS_EXPLAIN' => 'Schnellzugriff zu Freunden erm�glichen mit denen du h�ufig kommunizierst. Wenn das Template die M�glichkeit unterst�tzt, werden alle Eintr�ge hervorgehoben, die von Freunden erstellt wurden.',
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
	'USER_POSTS' => 'Geschriebene Beitr�ge',
	'USER_TOPICS_VIEWS' => 'Angesehene Themen',
	'RECENT_USER_STARTED_TITLE' => 'gestartet von %s',
	'RECENT_USER_STARTED_NAV' => 'Von %s gestartet Themen',
	'RECENT_USER_POSTS_TITLE' => 'indem %s einen Beitrag geschrieben hat',
	'RECENT_USER_POSTS_NAV' => 'Themen in denen %s einen Beitrag geschrieben hat',
	'RECENT_USER_VIEWS_TITLE' => 'angesehen von %s',
	'RECENT_USER_VIEWS_NAV' => 'Von %s angesehen Themen',

	'WARN_NO_BUMP' => 'Du bist der letzte der in diesem Thema einen Beitrag geschrieben hat: Du kannst in den n�chsten 24 Stunden keinen neuen Beitrag in diesem Thema schreiben es sei denn jemand anderes antwortet in der Zeit auf deinen Beitrag. �ndere statt dessen deinen alten Beitrag sinnvoll ab!',

	'LINK_THIS_TOPIC' => 'Verlinke dieses Thema',
	'LINK_URL' => 'URL',
	'LINK_BBCODE' => 'BBCode',
	'LINK_HTML' => 'HTML',

	'NEWS_POSTED' => 'Geschriebene News durchsuchen',
	'TOPICS_POSTED' => 'Gestartete Themen durchsuchen',
	'POSTS_POSTED' => 'Alle Benutzer-Beitr�ge durchsuchen',

	'ACCOUNT_DELETION_REQUEST' => 'Benutzer %s hat die L�schung seines Accounts beantragt.',

	'SORT_TOPICS' => 'Sortiere Themen',
	'SORT_TOPICS_NEWEST' => 'Neusten',
	'SORT_TOPICS_OLDEST' => '�ltesten',

	'EDIT_POST_DETAILS' => 'Beitragsangaben �ndern',
	'CURRENT_POSTER' => 'Aktueller Poster',
	'NEW_POSTER' => 'Neuer Poster',
	'DETAILS_CHANGED' => '<b>Beitragsangaben wurden erfolgreich ge�ndert.</b></span><br /><span class="postdetails">Dieses Fenster wird in 3 Sekunden geschlossen.',

	'Redirect' => 'Weiterleiten',
	'Redirect_to' => 'Wenn dein Browser keine META Weiterleitung unterst�tzt, dann klicke bitte %shier%.',

	'InProgress' => 'In Entwicklung',

	'HAPPY_BIRTHDAY' => 'Happy Birthday',

	'DOWNLOAD' => 'Download',
	'DOWNLOADED' => 'Heruntergeladen',
	'FILESIZE' => 'Dateigr��e',
	'FILENAME' => 'Dateiname',
	'FILE_NOT_AUTH' => 'Du bist nicht berechtigt diese Datei herunterzuladen',
	'SHOW_POSTS_FROM' => 'Zeige Beitr�ge von',
	'SHOW_POSTS_TO' => 'an',

	'SEE_MORE_DETAILS' => 'Mehr Details sehen...',
	'UNKNOWN' => 'Unbekannt',
	'MASS_PM' => 'Massen-PN',
	'TEXT_FORMAT' => 'Format',
	'SENDER' => 'Absender',
	'PM_NOTIFICATION' => 'Hallo,<br /><br />Du hast eine neue private Nachricht bei "{SITENAME}" erhalten.<br /><br />Du kannst dir deine neue Nachricht anschauen, indem du auf nachstehenden Link klickst:<br /><br />{U_INBOX}<br /><br />',

	'GSEARCH' => 'Google Suche',
	'GSEARCH_ENGINE' => 'Google-Suchmaschine benutzen',
	'SEARCH_WHAT' => 'Was suchen',
	'SEARCH_WHERE' => 'Wo suchen',
	'SEARCH_THIS_FORUM' => 'Dieses Forum durchsuchen...',
	'SEARCH_THIS_TOPIC' => 'Dieses Thema durchsuchen...',
	'VF_ALL_TOPICS' => 'Alle Themen',

	'WHITE_LIST_MESSAGE' => 'Diese Seite ben�tigt eine Benutzerkonto Freischaltung via Email. Bitte �berpr�fe das diese Domain auf der White-Liste (erlaubte Domains) deines Anti-Spam-Systems steht, andernfalls wirst du die Aktivierungsmitteilung nicht erhalten k�nnen.',
	'CLICK_RETURN_HOME' => 'Klicke %shier%s, um zur Startseite zur�ckzukehren.',

	'WEEK_DAY_SUNDAY' => 'Sonntag',
	'WEEK_DAY_MONDAY' => 'Montag',
	'WEEK_DAY_TUESDAY' => 'Dienstag',
	'WEEK_DAY_WEDNESDAY' => 'Mittwoch',
	'WEEK_DAY_THURSDAY' => 'Donnerstag',
	'WEEK_DAY_FRIDAY' => 'Freitag',
	'WEEK_DAY_SATURDAY' => 'Samstag',

	'RATINGS' => 'Bewertungen',

	'ERROR_TABLE' => 'Konnte nicht zur %s Tabelle verbinden',

	'SMILEYS' => 'Smilies',
	'SMILEYS_NO_CATEGORIES' => 'Keine Kategorien festgelegt',
	'SMILEYS_CATEGORY' => 'Kategorie',
	'SMILEYS_GALLERY' => 'Smilies-Galerie',
	'SMILEYS_STANDARD' => 'Standard Smilies',

	'QUICK_LIST' => 'Vollst�ndige Liste',
	'NORMAL_LIST' => 'Normale Liste',

	'RETURN_PAGE' => '%sZur�ck zur vorherigen Seite%s',
	'FILE_NOT_FOUND' => 'Datei nicht gefunden',
	'FSOCK_DISABLED' => 'FSOCK deaktiviert',

	'MANAGEMENT' => 'Management',
	'SORT_ORDER' => 'Sortieren nach',
	'SORT_DIR' => 'Sortier-Richtung',

	'TIME_YEAR' => 'Jahr',
	'TIME_MONTH' => 'Monat',
	'TIME_DAY' => 'Tag',
	'TIME_HOUR' => 'Stunde',
	'TIME_MINUTE' => 'Minute',
	'TIME_SECOND' => 'Sekunde',

	'CONTACTS' => 'Kontakte',

	// Event Registration - BEGIN
	'Reg_Title' => 'Event Anmeldung',
	'Post_Registration' => 'Event Anmeldung',
	'Add_registration' => 'Eine Event Anmeldung hinzuf�gen',
	'Add_reg_explain' => '&nbsp;&bull; W�hle <i>Aktivieren</i> um ein Registrierungsformular mit diesem Posting anzuzeigen. Entferne den Haken bei <i>Aktivieren</i> um es zu verstecken.<br />&nbsp;&bull; W�hle <i>Zur�cksetzen</i> um alle gegenw�rtigen Registrierungen f�r dieses Formular zu l�schen.<br />&nbsp;&bull; Gib eine Zahl in <i>Pl�tze</i> ein, um Registrierungen f�r eine Option zu beschr�nken. "0" oder leer = unendlich',
	'reg_activate' => 'Aktivieren',
	'reg_reset' => 'Zur�cksetzen',
	'Reg_Insert' => 'Du bist f�r das Event angemeldet.',
	'Reg_Change' => 'Anmeldung wurde ge�ndert.',
	'Reg_Confirm' => 'Anmeldung wurde best�tigt.',
	'Reg_Unregister' => 'Anmeldung wurde entfernt.',
	'Reg_Max_Registrations' => 'Das Maximum von Registrierungen f�r diese Option ist erreicht. Es werden keine weiteren Registrierungen mehr akzeptiert.',
	'Reg_No_Slots_Left' => 'Es sind leider keine Pl�tze mehr frei.',
	'Reg_One_Slot_Left' => 'Es ist noch ein Platz frei.',
	'Reg_Slots_Left' => '%s Pl�tze sind noch frei.',
	'Reg_Self_Unregister' => 'Anmeldung l�schen',
	'Reg_Own_Confirmation' => 'Best�tigung',
	'Reg_Own_Confirmed' => 'best�tigt',
	'Reg_Green_Option' => 'Gr�ne Option',
	'Reg_Blue_Option' => 'Blaue Option',
	'Reg_Red_Option' => 'Rote Option',
	'Reg_Value_Max_Registrations' => 'Pl�tze',
	'Reg_Do' => 'Zusagen',
	'Reg_Maybe' => 'Unsicher',
	'Reg_Dont' => 'Absagen',
	'Reg_Head_Username' => 'Benutzer:',
	'Reg_Head_Time' => 'Datum:',
	'Reg_for' => 'Anmeldung l�uft f�r',
	'Reg_for_explain' => '[ Gib 0 ein, oder freilassen f�r eine endlose Registrierung ]',
	'Reg_no_options_specified' => 'Du mu�t eine Option ausw�hlen, f�r die du dich registrieren m�chtest.',
	'Reg_event_date' => '<b>Event Datum: </b>',
	// Event Registration - END

	'REPLY_PREFIX_OLD' => 'Re: ',
	'REPLY_PREFIX' => 'Re: ',

	'READ_ONLY_FORUM' => 'Es tut uns leid, aber z.Z. hat dieses Forum den <b>NUR LESEN</b> Status. Das bedeutet, dass du nichts posten kannst, auch wenn du sonst die Rechte daf�r hast. Bitte versuch es sp�ter noch einmal.',

	)
);

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

$lang['Prune_commands'] = array();

// here you can make more entries if needed
$lang['Prune_commands'][0] = 'Faule Benutzer l�schen';
$lang['Prune_explain'][0] = 'L�scht die Benutzer, die noch nichts geschrieben haben, <b>au&szlig;er</b> den neuen Benutzern der letzten %d Tage';
$lang['Prune_commands'][1] = 'Nie eingeloggte Benutzer l�schen';
$lang['Prune_explain'][1] = 'L�scht die Benutzer, die zwar aktiviert sind, sich aber noch nie eingeloggt haben, <b>au&szlig;er</b> den neuen Benutzern der letzten %d Tage';
$lang['Prune_commands'][2] = 'Nicht aktivierte Benutzer l�schen';
$lang['Prune_explain'][2] = 'L�scht die Benutzer, die sich zwar angemeldet haben, aber nicht freigeschaltet sind, <b>au&szlig;er</b> den neuen Benutzern der letzten %d Tage';
$lang['Prune_commands'][3] = 'Untreue Benutzer l�schen';
$lang['Prune_explain'][3] = 'L�scht die Benutzer, die sich seit 60 Tagen nicht mehr eingeloggt haben, <b>au&szlig;er</b> den neuen Benutzern der letzten %d Tage';
$lang['Prune_commands'][4] = 'Schreibfaule Benutzer l�schen';
$lang['Prune_explain'][4] = 'L�scht die Benutzer, die nicht mindestens 1 Beitrag innerhalb von 10 Tagen schreiben, <b>au&szlig;er</b> den neuen Benutzern der letzten %d Tage';
$lang['Prune_commands'][5] = 'Faule und nie eingeloggte Benutzer l�schen';
$lang['Prune_explain'][5] = 'L�scht die Benutzer, die zwar aktiviert sind, aber nichts geschrieben bzw. sich nie eingeloggt haben, <b>au&szlig;er</b> den neuen Benutzern der letzten %d Tage';

// Timezones - BEGIN
$lang['All_times'] = 'Alle Zeiten sind %s'; // eg. All times are GMT - 12 Hours (times from next block)

// Time zones short
$lang['tzs']['-12'] = 'GMT - 12 Stunden';
$lang['tzs']['-11'] = 'GMT - 11 Stunden';
$lang['tzs']['-10'] = 'GMT - 10 Stunden';
$lang['tzs']['-9'] = 'GMT - 9 Stunden';
$lang['tzs']['-8'] = 'GMT - 8 Stunden';
$lang['tzs']['-7'] = 'GMT - 7 Stunden';
$lang['tzs']['-6'] = 'GMT - 6 Stunden';
$lang['tzs']['-5'] = 'GMT - 5 Stunden';
$lang['tzs']['-4'] = 'GMT - 4 Stunden';
$lang['tzs']['-3.5'] = 'GMT - 3.5 Stunden';
$lang['tzs']['-3'] = 'GMT - 3 Stunden';
$lang['tzs']['-2'] = 'GMT - 2 Stunden';
$lang['tzs']['-1'] = 'GMT - 1 Stunde';
$lang['tzs']['0'] = 'GMT';
$lang['tzs']['1'] = 'GMT + 1 Stunde';
$lang['tzs']['2'] = 'GMT + 2 Stunden';
$lang['tzs']['3'] = 'GMT + 3 Stunden';
$lang['tzs']['3.5'] = 'GMT + 3.5 Stunden';
$lang['tzs']['4'] = 'GMT + 4 Stunden';
$lang['tzs']['4.5'] = 'GMT + 4.5 Stunden';
$lang['tzs']['5'] = 'GMT + 5 Stunden';
$lang['tzs']['5.5'] = 'GMT + 5.5 Stunden';
$lang['tzs']['6'] = 'GMT + 6 Stunden';
$lang['tzs']['6.5'] = 'GMT + 6.5 Stunden';
$lang['tzs']['7'] = 'GMT + 7 Stunden';
$lang['tzs']['8'] = 'GMT + 8 Stunden';
$lang['tzs']['9'] = 'GMT + 9 Stunden';
$lang['tzs']['9.5'] = 'GMT + 9.5 Stunden';
$lang['tzs']['10'] = 'GMT + 10 Stunden';
$lang['tzs']['11'] = 'GMT + 11 Stunden';
$lang['tzs']['12'] = 'GMT + 12 Stunden';
$lang['tzs']['13'] = 'GMT + 13 Stunden';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12 Stunden) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11 Stunden) Midway Island, Samoa';
$lang['tz']['-10'] = '(GMT -10 Stunden) Hawaii';
$lang['tz']['-9'] = '(GMT -9 Stunden) Alaska';
$lang['tz']['-8'] = '(GMT -8 Stunden) Pacific Time (US &amp; Canada)';
$lang['tz']['-7'] = '(GMT -7 Stunden) Mountain Time (US &amp; Canada)';
$lang['tz']['-6'] = '(GMT -6 Stunden) Central Time (US &amp; Canada), Mexico City';
$lang['tz']['-5'] = '(GMT -5 Stunden) Eastern Time (US &amp; Canada), Bogota, Lima, Quito';
$lang['tz']['-4'] = '(GMT -4 Stunden) Atlantic Time (Canada), Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3.5 Stunden) Neufundland';
$lang['tz']['-3'] = '(GMT -3 Stunden) Brazilien, Buenos Aires, Georgetown';
$lang['tz']['-2'] = '(GMT -2 Stunden) Mitt-Atlantik';
$lang['tz']['-1'] = '(GMT -1 Stunde) Azoren, Cape Verde Inseln';
$lang['tz']['0'] = '(GMT) Westeurop�ische Zeit, London, Lisabon, Casablanca, Monrovia';
$lang['tz']['1'] = '(GMT +1 Stunde) Mitteleurop�ische Zeit, Br�ssel, Berlin, Madrid, Paris';
$lang['tz']['2'] = '(GMT +2 Stunden) Osteurop�ische Zeit, Kaliningrad, S�d Afrika';
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
// Timezones - END

$lang['datetime']['Sunday'] = $lang['WEEK_DAY_SUNDAY'];
$lang['datetime']['Monday'] = $lang['WEEK_DAY_MONDAY'];
$lang['datetime']['Tuesday'] = $lang['WEEK_DAY_TUESDAY'];
$lang['datetime']['Wednesday'] = $lang['WEEK_DAY_WEDNESDAY'];
$lang['datetime']['Thursday'] = $lang['WEEK_DAY_THURSDAY'];
$lang['datetime']['Friday'] = $lang['WEEK_DAY_FRIDAY'];
$lang['datetime']['Saturday'] = $lang['WEEK_DAY_SATURDAY'];
$lang['datetime']['Sun'] = 'So';
$lang['datetime']['Mon'] = 'Mo';
$lang['datetime']['Tue'] = 'Di';
$lang['datetime']['Wed'] = 'Mi';
$lang['datetime']['Thu'] = 'Do';
$lang['datetime']['Fri'] = 'Fr';
$lang['datetime']['Sat'] = 'Sa';
$lang['datetime']['January'] = 'Januar';
$lang['datetime']['February'] = 'Februar';
$lang['datetime']['March'] = 'M�rz';
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
$lang['datetime']['MAR'] = 'M�rz';
$lang['datetime']['APR'] = 'Apr';
$lang['datetime']['MAY'] = 'Mai';
$lang['datetime']['JUN'] = 'Jun';
$lang['datetime']['JUL'] = 'Jul';
$lang['datetime']['AUG'] = 'Aug';
$lang['datetime']['SEP'] = 'Sep';
$lang['datetime']['OCT'] = 'Okt';
$lang['datetime']['NOV'] = 'Nov';
$lang['datetime']['DEC'] = 'Dez';

// NOTE: Please do not translate the following 4 lines!
// They are automatically translated into your language
$lang['day_short'] = array($lang['datetime']['Sun'], $lang['datetime']['Mon'], $lang['datetime']['Tue'], $lang['datetime']['Wed'], $lang['datetime']['Thu'], $lang['datetime']['Fri'], $lang['datetime']['Sat']);
$lang['day_long'] = array($lang['datetime']['Sunday'], $lang['datetime']['Monday'], $lang['datetime']['Tuesday'], $lang['datetime']['Wednesday'], $lang['datetime']['Thursday'], $lang['datetime']['Friday'], $lang['datetime']['Saturday']);
$lang['month_short'] = array($lang['datetime']['JAN'], $lang['datetime']['FEB'], $lang['datetime']['MAR'], $lang['datetime']['APR'], $lang['datetime']['MAY'], $lang['datetime']['JUN'], $lang['datetime']['JUL'], $lang['datetime']['AUG'], $lang['datetime']['SEP'], $lang['datetime']['OCT'], $lang['datetime']['NOV'], $lang['datetime']['DEC']);
$lang['month_long'] = array($lang['datetime']['January'], $lang['datetime']['February'], $lang['datetime']['March'], $lang['datetime']['April'], $lang['datetime']['May'], $lang['datetime']['June'], $lang['datetime']['July'], $lang['datetime']['August'], $lang['datetime']['September'], $lang['datetime']['October'], $lang['datetime']['November'], $lang['datetime']['December']);

//$lang[''] = '';

//====================================================
// Do not insert anything below this line
//====================================================

?>