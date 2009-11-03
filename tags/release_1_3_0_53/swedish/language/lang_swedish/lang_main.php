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
* Lopalong
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

$lang = array_merge($lang, array(
	'Home' => 'Hem',
	'Forum' => 'Forum',
	'Category' => 'Kategori',
	'Topic' => 'Ämne',
	'Topics' => 'Ämnen',
	'Replies' => 'Svar',
	'Views' => 'Visningar',
	'Post' => 'Post',
	'Posts' => 'Poster',
	'Posted' => 'Postade',
	'Username' => 'Användarnamn',
	'Password' => 'Lösenord',
	'Email' => 'E-post',
	'Poster' => 'Poster',
	'Author' => 'Författare',
	'Time' => 'Tid',
	'Hours' => 'Timmar',
	'Message' => 'Meddelande',

	'1_Day' => '1 Dag',
	'7_Days' => '7 Dagar',
	'2_Weeks' => '2 Veckor',
	'1_Month' => '1 Månad',
	'3_Months' => '3 Månader',
	'6_Months' => '6 Månader',
	'1_Year' => '1 År',

	'Go' => 'Gå',
	'Jump_to' => 'Hoppa till',
	'Submit' => 'Skicka',
	'Reset' => 'Återställ',
	'Cancel' => 'Avbryt',
	'Preview' => 'Förhandsgranska',
	'Confirm' => 'Bekräfta',
	'Spellcheck' => 'Stavningskontroll',
	'Yes' => 'Ja',
	'No' => 'Nej',
	'Enabled' => 'Aktiverad',
	'Disabled' => 'Avaktiverad',
	'Error' => 'Error',

	'GO' => 'Gå',
	'JUMP_TO' => 'Hoppa till',
	'SUBMIT' => 'Skicka',
	'RESET' => 'Återställ',
	'CANCEL' => 'Avbryt',
	'PREVIEW' => 'Förhandsgranska',
	'CONFIRM' => 'Bekräfta',
	'YES' => 'Ja',
	'NO' => 'Nej',
	'ENABLED' => 'Aktiverad',
	'DISABLED' => 'Avaktiverad',
	'ERROR' => 'Error',

	'Next' => 'Nästa',
	'Previous' => 'Föregående',
	'Goto_page' => 'Gå till sidan',
	'Joined' => 'Gick med',
	'IP_Address' => 'IP Adress',

	'Select_forum' => 'Välj ett forum',
	'View_latest_post' => 'Visa senaste inlägget',
	'View_newest_post' => 'Visa nyaste inlägget',
	'Page_of' => 'Sida <b>%d</b> av <b>%d</b>', // Replaces with: Page 1 of 2 for example

	'ICQ' => 'ICQ Nummer',
	'AIM' => 'AIM Adress',
	'MSNM' => 'MSN Live',
	'YIM' => 'Yahoo Messenger',
	'SKYPE' => 'Skype',
	'Forum_Index' => 'Forum',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Posta nytt ämne',
	'Reply_to_topic' => 'Svara på ämne',
	'Reply_with_quote' => 'Svara med citat',

	'Click_return_topic' => 'Klicka %sHär%s för att återgå till ämnet', // %s's here are for uris, do not remove!
	'Click_return_login' => 'Klicka %sHär%s för att försöka igen',
	'Click_return_forum' => 'Klicka %sHär%s för att återvända till forumet',
	'Click_view_message' => 'Klicka %sHär%s för att visa ditt meddelande',
	'Click_return_modcp' => 'Klicka %sHär%s för att återgå till Moderator Kontroll Panelen',
	'Click_return_group' => 'Klicka %sHär%s för att återgå till grupp information',

	'Admin_panel' => 'ACP',

	'Board_disabled' => 'Tyvärr, men denna sida är inte tillgänglig för närvarande. Försök igen senare.',

// Global Header strings
	'Registered_users' => 'Registrerade Användare:',
	'Browsing_forum' => 'Användare som bläddrar i detta forum:',
	'Online_users_zero_total' => 'Totalt finns det <b>0</b> användare online: ',
	'Online_users_total' => 'Totalt finns det <b>%d</b> användare online: ',
	'Online_user_total' => 'Totalt finns det <b>%d</b> användare online: ',
	'AC_Online_users_zero_total' => 'Totalt finns det <b>0</b> användare i chatten: ',
	'AC_Online_users_total' => 'Totalt finns det <b>%d</b> användare i chatten: ',
	'AC_Online_user_total' => 'Totalt finns det <b>1</b> användare i chatten: ',
	'Reg_users_zero_total' => '0 Registrerade, ',
	'Reg_users_total' => '%d Registrerade, ',
	'Reg_user_total' => '%d Registrerade, ',
	'Hidden_users_zero_total' => '0 Dolda och ',
	'Hidden_user_total' => '%d Dolda och ',
	'Hidden_users_total' => '%d Dolda och ',
	'Guest_users_zero_total' => '0 Gäster',
	'Guest_users_total' => '%d Gäster',
	'Guest_user_total' => '%d Gäst',
	'Record_online_users' => 'Flest användare online var <b>%s</b> den %s', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sAdministratör%s',
	'Mod_online_color' => '%sModerator%s',

	'You_last_visit' => 'Du besökte senast den %s', // %s replaced by date/time
	'Current_time' => 'Datum/Klockan är nu %s', // %s replaced by time

	'Search_new' => 'Visa inlägg sedan senaste besök',
	'Search_your_posts' => 'Visa dina inlägg',
	'Search_unanswered' => 'Visa obesvarade inlägg',

	'Register' => 'Registrera',
	'Profile' => 'Profil',
	'Edit_profile' => 'Redigera din profil',
	'Search' => 'Sök',
	'Memberlist' => 'Medlemslista',
	'FAQ' => 'FAQ',
	'KB_title' => 'Kunskaps Bas',
	'BBCode_guide' => 'BBKod Guide',
	'Usergroups' => 'Användargrupper',
	'Last_Post' => 'Senaste Inlägg',
	'Moderator' => 'Moderator',
	'Moderators' => 'Moderatorer',

// Stats block text
	'Posted_articles_zero_total' => 'Våra användare har skickat in totalt <b>0</b> artiklar', // Number of posts
	'Posted_articles_total' => 'Våra användare har skickat in totalt <b>%d</b> artiklar', // Number of posts
	'Posted_article_total' => 'Våra användare har skickat in totalt <b>%d</b> artiklar', // Number of posts
	'Registered_users_zero_total' => 'Vi har <b>0</b> registrerade användare', // # registered users
	'Registered_users_total' => 'Vi har <b>%d</b> registrerade användare', // # registered users
	'Registered_user_total' => 'Vi har <b>%d</b> registrerade användare', // # registered users
	'Newest_user' => 'Den senaste registrerade användaren är <b>%s%s%s</b>', // a href, username, /a

	'No_new_posts_last_visit' => 'Inga nya inlägg sedan ditt senaste besök',

	'No_new_posts_global_announcement' => 'Inget nytt [ Global Ann. ]',
	'New_posts_global_announcement' => 'Nytt [ Global Ann. ]',
	'No_new_posts_announcement' => 'Inget nytt [ Meddelande ]',
	'New_posts_announcement' => 'Nytt [ Meddelande ]',
	'No_new_posts_sticky' => 'Inget nytt [ Sticky ]',
	'New_posts_sticky' => 'Nytt [ Sticky ]',
	'No_new_posts_locked' => 'Inget nytt [ Låst ]',
	'New_posts_locked' => 'Nytt [ Låst ]',
	'No_new_posts' => 'Inga nya inlägg',
	'New_posts' => 'Nya inlägg',
	'New_post' => 'Nya inlägg',
	'No_new_posts_hot' => 'Inga nya [ Populär ]',
	'New_posts_hot' => 'Nya [ Populär ]',

	'Forum_no_new_posts' => 'Inga nya inlägg [Forum]',
	'Forum_new_posts' => 'Nya inlägg [Forum]',
	'Cat_no_new_posts' => 'Inga nya inlägg [Kategori]',
	'Cat_new_posts' => 'Nya inlägg [Kategori]',
	'Forum_is_locked' => 'Forum är låst',

// Login
	'Enter_password' => 'Vänligen ange ditt användarnamn och lösenord för att logga in.',
	'Login' => 'Logga in',
	'Logout' => 'Logga ut',
	'Forgotten_password' => 'Jag har glömt mitt lösenord',
	'AUTOLOGIN' => 'Logga in mig automatiskt vid varje besök',
	'Error_login' => 'Du har angett ett felaktig eller inaktivt användarnamn eller ett ogiltigt lösenord.',

// Index page
	'No_Posts' => 'Inga inlägg',
	'No_forums' => 'Detta forum har inga forum',

	'Private_Message' => 'Privata Meddelande',
	'Private_Messages' => 'Privata Meddelanden',
	'Who_is_Online' => 'Vem är Online',

	'Mark_all_forums' => 'Markera alla forum lästa',
	'Forums_marked_read' => 'Alla forum har markerats som lästa',

// Viewforum
	'View_forum' => 'Visa Forum',

	'Forum_not_exist' => 'Det forum som du valt finns inte.',
	'Reached_on_error' => 'Du har kommit till denna sida av misstag.',

	'Display_topics' => 'Visa ämnen från tidigare',
	'All_Topics' => 'Alla Ämnen',

	'Topic_News_nb' => 'Nyheter',
	'Topic_global_announcement_nb' => 'Globalt Meddelande',
	'Topic_Announcement_nb' => 'Meddelande',
	'Topic_Sticky_nb' => 'Sticky',
	'Topic_Moved_nb' => 'Flyttad',
	'Topic_Poll_nb' => 'Undersökning',
	'Topic_Event_nb' => 'Evenemang',
	'Topic_Announcement' => '<b>Meddelande:</b>',
	'Topic_Sticky' => '<b>Sticky:</b>',
	'Topic_Moved' => '<b>Flyttad:</b>',
	'Topic_Poll' => '<b>Undersökning:</b>',
	'Topic_Event' => '<b>Evenemang:</b>',
	'Topic_global_announcement' => '<b>Globalt Meddelande:</b>',
	'Post_global_announcement' => 'Globalt Meddelande',


	'Mark_all_topics' => 'Markera alla ämnen lästa',
	'Topics_marked_read' => 'Ämnena för detta forum har nu markerats som lästa',

/*
	'Rules_post_can' => 'Du <b>kan</b> posta nya ämnen i detta forum',
	'Rules_post_cannot' => 'Du <b>kan ej</b> posta nya ämnen i detta forum',
	'Rules_reply_can' => 'Du <b>kan</b> svara på ämnen i detta forum',
	'Rules_reply_can_own' => 'Du <b>kan</b> svara på dina ämnen i detta forum',
	'Rules_reply_cannot' => 'Du <b>kan ej</b> svara på ämnen i detta forum',
	'Rules_edit_can' => 'Du <b>kan</b> redigera dina ämnen i detta forum',
	'Rules_edit_cannot' => 'Du <b>kan ej</b> redigera dina ämnen i detta forum',
	'Rules_delete_can' => 'Du <b>kan</b> radera dina ämnen i detta forum',
	'Rules_delete_cannot' => 'Du <b>kan ej</b> radera dina ämnen i detta forum',
	'Rules_vote_can' => 'Du <b>kan</b> rösta i omröstningar i detta forum',
	'Rules_vote_cannot' => 'Du <b>kan ej</b> rösta i omröstningar i detta forum',
*/
	'Rules_post_can' => 'Du <b>kan</b> posta nya ämnen',
	'Rules_post_cannot' => 'Du <b>kan ej</b> posta nya ämnen',
	'Rules_reply_can' => 'Du <b>kan</b> svara på inlägg',
	'Rules_reply_can_own' => 'Du <b>kan</b> svara på ditt inlägg',
	'Rules_reply_cannot' => 'Du <b>kan ej</b> svara på inlägg',
	'Rules_edit_can' => 'Du <b>kan</b> redigera dina inlägg',
	'Rules_edit_cannot' => 'Du <b>kan ej</b> redigera dina inlägg',
	'Rules_delete_can' => 'Du <b>kan</b> radera dina inlägg',
	'Rules_delete_cannot' => 'Du <b>kan ej</b> radera dina inlägg',
	'Rules_vote_can' => 'Du <b>kan</b> rösta i omröstningar',
	'Rules_vote_cannot' => 'Du <b>kan ej</b> rösta i omröstningar',
	'Rules_moderate' => 'Du <b>kan</b> %smoderera detta forum%s', // %s replaced by a href links, do not remove!

// 'No_topics_post_one' => 'There are no posts in this forum.<br />Click on the <b>Post New Topic</b> link on this page to post one.',
	'No_topics_post_one' => 'Antingen finns det inga inlägg i detta forum, eller är där inga matchningar för de bokstäver du har valt.<br />Klicka på <b>Posta Nytt Ämne</b> länken på denna sida för att starta ett nytt inlägg eller välj en annan bokstav.',

// Viewtopic
	'View_topic' => 'Visa ämne',

	'Guest' => 'Gäst',
	'Post_subject' => 'Post föremål',
	'View_next_topic' => 'Visa nästa ämne',
	'View_previous_topic' => 'Visa föregående ämne',
	'Submit_vote' => 'Skicka Röst',
	'View_results' => 'Visa Resultat',

	'No_newer_topics' => 'Det finns inga nyare ämnen i detta forum',
	'No_older_topics' => 'Det finns inga äldre ämnen i detta forum',
	'Topic_post_not_exist' => 'Ämnet eller inlägg du efterfrågar finns inte',
	'No_posts_topic' => 'Inga inlägg finns för detta ämne',

	'Display_posts' => 'Visa inlägg från tidigare',
	'All_Posts' => 'Alla Inlägg',
	'Newest_First' => 'Nyaste Först',
	'Oldest_First' => 'Äldsta Först',

	'Back_to_top' => 'Tillbaka till toppen',
	'Back_to_bottom' => 'Sido botten',

	'Read_profile' => 'Visa användares profil',
	'Send_email' => 'Skicka e-post till användaren',
	'Visit_website' => 'Besök inläggarens hemsida',
	'ICQ_status' => 'ICQ Status',
	'Edit_delete_post' => 'Redigera/Radera det här inlägget',
	'View_IP' => 'Visa IP adress för inläggare',
	'Delete_post' => 'Radera detta inlägg',

	'wrote' => 'skrev', // proceeds the username and is followed by the quoted text
	'Quote' => 'Citera', // comes before bbcode quote output.
	'Code' => 'Kod', // comes before bbcode code output.

	'Edited_time_total' => 'Senast redigerad av %s den %s; redigerad %d gånger totalt', // Last edited by me on 12 Oct 2001; edited 1 time in total
	'Edited_times_total' => 'Senast redigerad av %s den %s; redigerad %d gånger totalt', // Last edited by me on 12 Oct 2001; edited 2 times in total

	'Lock_topic' => 'Lås detta ämne',
	'Unlock_topic' => 'Lås upp det här ämnet',
	'Move_topic' => 'Flytta detta ämne',
	'Delete_topic' => 'Radera det här ämnet',
	'Split_topic' => 'Dela detta ämne',

	'Stop_watching_topic' => 'Stoppa bevaka det här ämnet',
	'Start_watching_topic' => 'Bevaka det här ämnet för svar',
	'No_longer_watching' => 'Du bevakar inte längre det här ämnet',
	'You_are_watching' => 'Du bevakar nu det här ämnet',

	'Total_votes' => 'Totalt Antal Röster',

// Posting/Replying (Not private messaging!)
	'Message_body' => 'Meddelande body',
	'Topic_review' => 'Ämnes recension',

	'No_post_mode' => 'Ingen post läge anges', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normally)

	'Post_a_new_topic' => 'Posta ett nytt ämne',
	'Post_a_reply' => 'Posta ett svar',
	'Post_topic_as' => 'Posta ämne som',
	'Edit_Post' => 'Redigera post',
	'Options' => 'Alternativ',

	'PM_Read' => 'PM Läsa',
	'PM_Unread' => 'PM Olästa',
	'PM_Replied' => 'PM Svarade',

	'Post_Announcement' => 'Tillkännagivande',
	'New_post_Announcement' => 'Ny tillkännagivande',
	'Post_Sticky' => 'Sticky',
	'New_post_Sticky' => 'Ny sticky',
	'Post_Normal' => 'Normal',

	'Confirm_delete' => 'Är du säker på att du vill ta bort det här inlägget?',
	'Confirm_delete_poll' => 'Är du säker på att du vill ta bort denna enkät?',

	'Flood_Error' => 'Du kan inte göra ett annat inlägg så snart efter ditt sista, vänligen försök igen om en stund.',
	'Empty_subject' => 'Du måste ange ett ämne när du publicerar ett nytt ämne.',
	'Empty_message' => 'Du måste ange ett meddelande när du gör inlägg.',
	'Forum_locked' => 'Detta forum är låst: du kan inte skicka, svara på eller ändra inlägg.',
	'Topic_locked' => 'Detta ämne är låst: du kan inte redigera inlägg eller skicka svar.',
	'No_post_id' => 'Du måste välja ett inlägg att redigera',
	'No_topic_id' => 'Du måste välja ett ämne att besvara',
	'No_valid_mode' => 'Du kan bara skicka, svara, redigera eller citera meddelanden. Gå tillbaka och försök igen.',
	'No_such_post' => 'Det finns inget sådant inlägg. Gå tillbaka och försök igen.',
	'Edit_own_posts' => 'Tyvärr, men du kan bara redigera dina egna inlägg.',
	'Delete_own_posts' => 'Tyvärr, men du kan bara ta bort dina egna inlägg.',
	'Cannot_delete_replied' => 'Tyvärr, men du kan inte ta bort inlägg som har besvarats.',
	'Cannot_delete_poll' => 'Tyvärr, men du kan inte ta bort en aktiv enkät.',
	'Empty_poll_title' => 'Du måste ange en titel för din enkät.',
	'To_few_poll_options' => 'Du måste ange minst två enkät alternativ.',
	'To_many_poll_options' => 'Du har försökt att ange alltför många enkät alternativ.',
	'Post_has_no_poll' => 'Det här inlägget har ingen enkät.',
	'Already_voted' => 'Du har redan röstat i denna enkät.',
	'No_vote_option' => 'Du måste ange ett alternativ när du röstar.',

	'Add_poll' => 'Lägg till en Enkät',
	'Add_poll_explain' => 'Om du inte vill lägga till en enkät till ditt ämne, lämna fälten tomma.',
	'Poll_question' => 'Enkät fråga',
	'Poll_option' => 'Enkät alternativ',
	'Add_option' => 'Lägg till alternativ',
	'Update' => 'Uppdatera',
	'Delete' => 'Radera',
	'Poll_for' => 'Kör enkät i',
	'Days' => 'Dagar', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Ange 0 eller lämna tomt för en oändlig enkät ]',
	'Delete_poll' => 'Radera Enkät',

	'Disable_HTML_post' => 'Avaktivera HTML i det här inlägget',
	'Disable_ACRO_AUTO_post' => 'Avaktivera Förkortningar och AutoLänkar i det här inlägget',
	'Disable_BBCode_post' => 'Avaktivera BBKod i det här inlägget',
	'Disable_Smilies_post' => 'Avaktivera Smileys i det här inlägget',

	'HTML_is_ON' => 'HTML är <u>PÅ</u>',
	'HTML_is_OFF' => 'HTML är <u>AV</u>',
	'BBCode_is_ON' => '%sBBCode%s är <u>PÅ</u>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => '%sBBCode%s är <u>AV</u>',
	'Smilies_are_ON' => 'Smileys är <u>PÅ</u>',
	'Smilies_are_OFF' => 'Smileys är <u>AV</u>',

	'Attach_signature' => 'Bifoga signatur (signaturer kan ändras i profilen)',
	'Notify' => 'Meddela mig när ett svar är postat',
	'Delete_post' => 'Radera det här inlägget',

	'Stored' => 'Ditt meddelande har angivets successfullt.',
	'Deleted' => 'Ditt meddelande har raderats successfullt.',
	'Poll_delete' => 'Din enkät har raderats successfullty.',
	'Vote_cast' => 'Din röst har blivit förkastad.',

	'Topic_reply_notification' => 'Ämne Svara Meddelanden',

	'Emoticons' => 'Smileys',
	'More_emoticons' => 'Visa alla Smileys',

// Private Messaging
	'Private_Messaging' => 'Privata Meddelanden',

	'Login_check_pm' => 'Logga in för att kontrollera dina privata meddelanden',
	'New_pms' => 'Du har %d nya PM', // You have 2 new messages
	'New_pm' => 'Du har %d nya PM', // You have 1 new message
	'No_new_pm' => 'Du har inga nya PM',
	'Unread_pms' => 'Du har %d olästa PM',
	'Unread_pm' => 'Du har %d olästa PM',
	'No_unread_pm' => 'Du har inga olästa PM',
	'You_new_pm' => 'Ett nytt privat meddelande väntar på dig i din Inkorg',
	'You_new_pms' => 'Nya privata meddelanden väntar på dig i din Inkorg',
	'You_no_new_pm' => 'Inget nytt privat meddelande väntar på dig',

	'Unread_message' => 'Oläst meddelande',
	'Read_message' => 'Läs meddelande',

	'Read_pm' => 'Läs meddelande',
	'Post_new_pm' => 'Posta meddelande',
	'Post_reply_pm' => 'Svara på meddelande',
	'Post_quote_pm' => 'Citera meddelande',
	'Edit_pm' => 'Redigera meddelande',

	'Inbox' => 'Inkorg',
	'Outbox' => 'Utkorg',
	'Savebox' => 'Spara Korg',
	'Sentbox' => 'Skicka Korg',
	'Flag' => 'Flagga',
	'Subject' => 'Ämne',
	'From' => 'Från',
	'To' => 'Till',
	'Date' => 'Datum',
	'Mark' => 'Markera',
	'Sent' => 'Skickat',
	'Saved' => 'Sparat',
	'Delete_marked' => 'Radera Markerat',
	'Delete_all' => 'Radera Alla',
	'Save_marked' => 'Spara Markerat',
	'Download_marked' => 'Ladda Ner Markerat',
	'Mailbox' => 'Brevkorg',
	'Save_message' => 'Spara Meddelande',
	'Delete_message' => 'Radera Meddelande',
	'Next_privmsg' => 'Nästa privata meddelande',
	'Previous_privmsg' => 'Föregående privata meddelande',
	'No_newer_pm' => 'Det finns inga nyare privata meddelanden.',
	'No_older_pm' => 'Det finns inga äldre privata meddelanden.',
	'Display_messages' => 'Visa meddelanden från tidigare', // Followed by number of days/weeks/months
	'All_Messages' => 'Alla Meddelanden',

	'No_messages_folder' => 'Du har inga meddelanden i den här mappen',

	'PM_disabled' => 'Privata Meddelanden har inaktiverats på detta forum.',
	'Cannot_send_privmsg' => 'Tyvärr, men administratören har hindrat dig från att skicka privata meddelanden.',
	'No_to_user' => 'Du måste ange ett användarnamn till den du ska skicka det här meddelandet.',
	'No_such_user' => 'Tyvärr, men ingen sådan användare finns.',

	'Disable_HTML_pm' => 'Inaktivera HTML i det här meddelandet',
	'Disable_ACRO_AUTO_pm' => 'Inaktivera Akronymer och AutoLänkar i det här meddelandet',
	'Disable_BBCode_pm' => 'Inaktivera BBKod i det här meddelandet',
	'Disable_Smilies_pm' => 'Avaktivera Smileys i det här meddelandet',

	'Message_sent' => 'Ditt meddelande har skickats.',

	'Click_return_inbox' => 'Klicka %sHär%s för att återgå till din Inkorg',
	'Click_return_index' => 'Klicka %sHär%s för att återgå till Index',

	'Send_a_new_message' => 'Skicka ett nytt privat meddelande',
	'Send_a_reply' => 'Svara på ett privat meddelande',
	'Edit_message' => 'Redigera privat meddelande',

	'Notification_subject' => 'Nya Privata Meddelande har anlänt!',

	'Find_username' => 'Hitta ett användarnamn',
	'Find' => 'Hitta',
	'No_match' => 'Inga matchningar hittades.',

	'No_post_id' => 'Ingen post ID angavs',
	'No_such_folder' => 'Ingen sådan mapp finns',
	'No_folder' => 'Ingen mapp angavs',

	'Mark_all' => 'Markera alla',
	'Unmark_all' => 'Markera Ej alla',

	'Confirm_delete_pm' => 'Är du säker på att du vill radera det här meddelandet?',
	'Confirm_delete_pms' => 'Är du säker på att du vill radera dessa meddelanden?',

	'Inbox_size' => 'Inkorg [%d%% full]', // eg. Your Inbox is 50% full
	'Sentbox_size' => 'Skicka Korg [%d%% full]',
	'Savebox_size' => 'Spara Korg [%d%% full]',

	'Click_view_privmsg' => 'Klicka %sHär%s för att besöka din Inkorg',

// Profiles/Registration
	'Viewing_user_profile' => 'Granskar profil :: %s', // %s is username
	'About_user' => 'Allt om %s', // %s is username
//Start Quick Administrator User Options and Information MOD
	'Quick_admin_options' => 'Snabbt Administratörs Användar Alternativ och Info',
	'Admin_edit_profile' => 'Redigera Användares Profil',
	'Admin_edit_permissions' => 'Redigera Användares Behörigheter',
	'User_active' => 'Användare <b>är</b> aktiv',
	'User_not_active' => 'Användare <b>är inte</b> aktiv',
	'Username_banned' => 'Användarnamn <b>är</b> bannlysts',
	'Username_not_banned' => 'Användarnamn <b>är inte</b> bannlysts',
	'User_email_banned' => 'Användares e-post [ %s ] <b>är</b> bannlysts',
	'User_email_not_banned' => 'Användares e-post <b>är not</b> bannlysts',
//End Quick Administrator User Options and Information MOD
	'Preferences' => 'Preferens',
	'Items_required' => 'Poster markerade med en * är obligatoriska om inte annat anges.',
	'Registration_info' => 'Registrerings Information',
	'Profile_info' => 'Profil Information',
	'Profile_info_warn' => 'Denna information kommer att vara offentlig',
	'Avatar_panel' => 'Avatar Kontroll Panel',
	'Avatar_gallery' => 'Avatar galleri',

	'Website' => 'Webbsida',
	'Location' => 'Plats',
	'Contact' => 'Kontakt',
	'Email_address' => 'E-post adress',
	'Email' => 'E-post',
	'Send_private_message' => 'Skicka privat meddelande',
	'Hidden_email' => '[ Dolda ]',
	'Search_user_posts' => 'SSök efter inlägg av denna användare',
	'Interests' => 'Intressen',
	'Occupation' => 'Yrke',
	'Poster_rank' => 'Avsändar rank',

	'Total_posts' => 'Inlägg Totalt',
	'User_post_pct_stats' => '%.2f%% av totala', // 1.25% of total
	'User_post_day_stats' => '%.2f inlägg per dag', // 1.5 posts per day
	'Search_user_posts' => 'Hitta alla inlägg av %s', // Find all posts by username
	'Search_user_topics_started' => 'Hitta alla ämnen startade av %s', // Find all topics started by username

	'No_user_id_specified' => 'Tyvärr, men den användaren finns inte.',
	'Wrong_Profile' => 'Du kan inte ändra en profil som inte är din egen.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => 'Aktiv Statistik',
	'Invision_Communicate' => 'Kommunicera',
	'Invision_Info' => 'Information',
	'Invision_Member_Group' => 'Medlems Grupp',
	'Invision_Member_Title' => 'Medlems Titel',
	'Invision_Most_Active' => 'Mest Aktiv I',
	'Invision_Most_Active_Posts' => '%s inlägg i detta forum',
	'Invision_Details' => 'Utstationering Detaljer',
	'Invision_PPD_Stats' => 'Inlägg Per Dag',
	'Invision_Signature' => 'Signatur',
	'Invision_Website' => 'Hemsida',
	'Invision_Total_Posts' => 'Totalt Kumulerade Inlägg',
	'Invision_User_post_pct_stats' => '( %.2f%% av de totala forum inläggen )',
	'Invision_User_post_day_stats' => '%.2f inlägg per dag',
	'Invision_Search_user_posts' => 'Hitta alla inlägg av denna medlem',
	'Invision_Posting_details' => 'Utstationering Detaljer',
// Invision View Profile - END

	'Only_one_avatar' => 'Endast en typ av avatar kan specificeras',
	'File_no_data' => 'Filen på den URL som du gav innehåller inga data',
	'No_connection_URL' => 'En anslutning kan inte göras till den URL som du angav',
	'Incomplete_URL' => 'URL:n du angett är ofullständig',
	'Wrong_remote_avatar_format' => 'URL:n till fjärr avataren är inte giltig',
	'No_send_account_inactive' => 'Tyvärr, men ditt lösenord kan inte hämtas på grund av att ditt konto är för närvarande inaktivt. Kontakta forumets administratör för mer information.',

	'Always_smile' => 'Aktivera alltid Smileys',
	'Always_html' => 'Tillåt alltid HTML',
	'Always_bbcode' => 'Tillåt alltid BBKod',
	'Always_add_sig' => 'Bifoga alltid min signatur',
	'Always_notify' => 'Meddela mig alltid om svar',
	'Always_notify_explain' => 'Skickar ett e-post när någon svarar på ett ämne som du har lagt upp i. Detta kan ändras när som hels när du gör ett inlägg.',

	'Board_style' => 'Forum Stil',
	'Board_lang' => 'Forum Språk',
	'No_themes' => 'Inga teman i databasen',
	'Timezone' => 'Tidszon',
	'Date_format' => 'Datum format',
	'Date_format_explain' => 'Syntaxen som används är identiskt med PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> funktionen.',
	'Signature' => 'Signatur',
	'Signature_explain' => 'Detta är ett block av text som kan läggas till i inlägg du gör. Det finns en %d tecken begränsning',
	'Public_view_email' => 'Visa alltid min e-postadress',

	'Current_password' => 'Nuvarande lösenord',
	'New_password' => 'Nytt lösenord',
	'Confirm_password' => 'Bekräfta lösenord',
	'Confirm_password_explain' => 'Du måste bekräfta ditt nuvarande lösenord om du vill ändra det eller ändra din e-postadresss',
	'password_if_changed' => 'Du behöver bara tillhandahålla ett lösenord om du vill ändra det',
	'password_confirm_if_changed' => 'Du behöver bara bekräfta ditt lösenord om du har ändrat det ovan',

	'Avatar' => 'Avatar',
	'Avatar_explain' => 'Visar en liten grafisk bild nedan dina uppgifter i inläggen. Endast en bild kan visas på en gång. Måtten på bilden är begränsade till högst %d pixlar bred, och %d pixlar hög. Uppladdade avatarer har en filstorleks gräns på %d KB, och måste vara mindre än eller lika med maximimåttet. Fjärrstyrda hostade avatarer kommer automatiskt att skalas för att passa dessa dimensioner.',
	'Upload_Avatar_file' => 'Ladda upp Avatar från din dator',
	'Upload_Avatar_URL' => 'Ladda upp Avatar från en URL',
	'Upload_Avatar_URL_explain' => 'Ange URL till den plats som innehåller Avatar bild, den kommer att kopieras till denna webbplats.',
	'Pick_local_Avatar' => 'Välj Avatar från galleriet',
	'Link_remote_Avatar' => 'Länk till off-site Avatar',
	'Link_remote_Avatar_explain' => 'Ange URL till den plats som innehåller Avatar bild som du vill länka till.',
	'Avatar_URL' => 'URL till Avatar Bild',
	'Select_from_gallery' => 'Välj Avatar från galleriet',
	'View_avatar_gallery' => 'Visa galleri',

	'Select_avatar' => 'Välj avatar',
	'Return_profile' => 'Avbryt avatar',
	'Select_category' => 'Välj kategori',

	'Delete_Image' => 'Radera Bild',
	'Current_Image' => 'Aktuell Bild',

	'Notify_on_privmsg' => 'Meddela om nya Privata Meddelanden',
	'Popup_on_privmsg' => 'Pop upp fönster på nya Privata Meddelanden',
	'Popup_on_privmsg_explain' => 'Vissa mallar kan öppna ett nytt fönster för att informera dig när nya privata meddelanden inkommer.',
	'Hide_user' => 'Dölj din online status',

	'Profile_updated' => 'Din profil har blivit uppdaterad',
	'Profile_updated_inactive' => 'Din profil har blivit uppdaterad. Men du har ändrat viktig information, så att ditt konto nu är inaktivt. Kontrollera din e-post för att ta reda på hur du åter aktiverar ditt konto eller om admin aktivering krävs, vänta på att administratören ska återaktivera det.',

	'Password_mismatch' => 'Lösenorden du angav matchar inte.',
	'Current_password_mismatch' => 'Det nuvarande lösenord du levererade överensstämmer inte med det som lagrats i databasen.',
	'Password_long' => 'Ditt lösenord bör inte vara längre än 32 tecken.',
	'Too_many_registers' => 'Du har överskridit antalet försök för denna session. Försök igen senare.',
	'Username_taken' => 'Tyvärr, men det här användarnamnet har redan tagits.',
	'Username_invalid' => 'Tyvärr, men detta användarnamn innehåller ett ogiltigt tecken såsom \'.',
	'Username_disallowed' => 'Tyvärr, men detta användarnamn har nekats.',
	'Email_taken' => 'Tyvärr, men denna e-postadressen är redan registrerad på en användare.',
	'Email_banned' => 'Tyvärr, men denna e-postadress har förbjudits.',
	'Email_invalid' => 'Tyvärr, men den här e-postadressen är ogiltig.',
	'Signature_too_long' => 'Din signatur är för lång.',
	'Fields_empty' => 'Du måste fylla i de obligatoriska fälten.',
	'Avatar_filetype' => 'Avatar filtypen måste vara .jpg, .gif eller .png',
	'Avatar_filesize' => 'Avatar bild filstorleken måste vara mindre än %d KB', // The avatar image file size must be less than 6 KB
	'Avatar_imagesize' => 'Avataren måste vara mindre än %d pixlar bred och %d pixlar hög',

	'Welcome_subject' => 'Välkommen till %s Forum', // Welcome to my.com forums
	'New_account_subject' => 'Nytt användar konto',
	'Account_activated_subject' => 'Konto Aktiverat',

	'Account_added' => 'Tack för att du registrerade. Ditt konto har skapats. Du kan logga in med ditt användarnamn och lösenord',
	'Account_inactive' => 'Ditt konto har skapats. Men, detta forum kräver konto aktivering. En aktiveringsnyckel har skickats till den e-postadress som du angav. Vänligen kontrollera din e-post för ytterligare information',
	'Account_inactive_admin' => 'Ditt konto har skapats. Men, detta forum kräver kontoaktivering från administratören. Ett e-postmeddelande har skickats till dem och du kommer att informeras när ditt konto har aktiverats',
	'Account_active' => 'Ditt konto har nu aktiverats. Tack för att du registrerade',
	'Account_active_admin' => 'Kontot har nu blivit aktiverat',
	'Reactivate' => 'Återaktivera ditt konto!',
	'Already_activated' => 'Du har redan aktiverat ditt konto',
	'COPPA' => 'Ditt konto har skapats men måste godkännas. Kontrollera din e-post för mer information.',

	'Registration' => 'Registrering Avtalsvillkor',
	'Reg_agreement' => 'Medan administratörer och moderatorer på forumet försöker att ta bort eller ändra allt störande eller stötande material så fort som möjligt är det omöjligt att gå igenom alla meddelanden. Därför ska du vara medveten om att alla inlägg som görs i dessa forum uttrycker åsikter och yttranden av författaren och inte administratörer, moderatorer eller webmaster (utom för inlägg från dessa personer) och därmed inte kommer att hållas ansvariga.<br /><br />Du accepterar att inte posta något grovt, obscent, vulgärt, kränkande, hatiskt, hotande, sexuellt orienterat eller något annat material som kan bryta mot gällande lagar. Om du gör detta kan det leda till att du omedelbart och permanent förbjuds (och din tjänsteleverantör informeras). IP-adressen till alla inlägg spelas in i tillämpningen av dessa villkor. Du accepterar att webmaster, administratör och moderatorer i detta forum har rätt att ta bort, redigera, flytta eller stänga vilket ämne som helst som de finner lämpligt. Som en användare går du med på att all information som du skrivit in sparas i en databas. Även om denna information inte kommer att avslöjas för någon tredje part utan ditt samtycke kan webmaster, administratör och moderatorer inte hållas ansvariga för eventuella hackningsförsök som kan leda till att data äventyras.<br /><br />Detta forum systemet använder cookies för att spara information på din dator. Dessa cookies innehåller inte något av den information som du skrivit in ovan; de kan endast användas för att förbättra ditt visning nöje. E-postadressen används bara för att bekräfta din registrering information och lösenord (och för att skicka nytt lösenord om du skulle glömma ditt nuvarande).<br /><br />Genom att klicka på Registrera nedan godkänner du att vara bunden av dessa villkor.',

	'Agreement' => 'Överenskommelse',
	'Agree_under_13' => 'Jag samtycker till dessa villkor och är <b>under</b> 13 år',
	'Agree_over_13' => 'Jag samtycker till dessa villkor',
	'Agree_not' => 'Jag samtycker inte till dessa villkor',
	'Agree_checkbox' => 'Jag samtycker i synnerhet till dessa villkor',
	'Agree_checkbox_Error' => 'Du måste kontrollera "SAMTYCKER" rutan på sidans botten för att registrera!',

	'Wrong_activation' => 'Den aktiverings nyckel du levererade matchar inte med någon i databasen.',
	'Send_password' => 'Skicka mig ett nytt lösenord',
	'Password_updated' => 'Ett nytt lösenord har skapats; vänligen kontrollera din e-post för information om hur du aktiverar det.',
	'No_email_match' => 'E-postadressen du levererade matchar inte den som listas för det användarnamnet.',
	'New_password_activation' => 'Nytt lösenords aktivering',
	'Password_activated' => 'Ditt konto har blivit åter-aktiverat. Om du vill logga in använd lösenordet som lämnades i e-postmeddelandet du fått.',

	'Send_email_msg' => 'Skicka ett e-postmeddelande',
	'No_user_specified' => 'Ingen användare har angetts',
	'User_prevent_email' => 'Den här användaren vill inte ta emot e-post. Prova att skicka dem ett privat meddelande.',
	'User_not_exist' => 'Den användaren finns inte',
	'CC_email' => 'Skicka en kopia av detta e-post meddelande till dig själv',
	'Email_message_desc' => 'Detta meddelande kommer att skickas som oformaterad text, så inkludera inte någon HTML eller BBKod. Returadress till det här meddelandet kommer att skickas till din e-postadress.',
	'Flood_email_limit' => 'Du kan inte skicka en annan e-post för tillfället. Försök igen senare.',
	'Recipient' => 'Mottagare',
	'Email_sent' => 'E-postmeddelandet har skickats.',
	'Send_Email' => 'Skicka e-post',
	'Empty_sender_email' => 'Du måste ange en e-post avsändaradress.',
	'Empty_subject_email' => 'Du måste ange ett ämne för e-posten.',
	'Empty_message_email' => 'Du måste ange ett meddelande som ska e-postas.',


// Visual confirmation system strings
	'Confirm_code_wrong' => 'Bekräftelsekoden du skrev var felaktig',
//	'Too_many_registers' => 'You have exceeded the number of attempts for this session. Please try again later.',
	'Confirm_code_impaired' => 'Om du är synskadad eller något annat och inte kan läsa denna kod, vänligen kontakta %sAdministratören%s för hjälp.',
	'Confirm_code' => 'Bekräftelsekod',
	'Confirm_code_explain' => 'Ange koden exakt så som du ser den. Koden är skiftlägeskänsligt och noll har en diagonal linje genom det.',



// Members list
	'Select_sort_method' => 'Välj sorterings metod',
	'Sort' => 'Sortera',
	'Sort_Top_Ten' => 'Topp Tio Postare',
	'Sort_Joined' => 'Gick Med Datum',
	'Sort_Username' => 'Användarnamn',
	'Sort_Location' => 'Plats',
	'Sort_Posts' => 'Totalt Antal Inlägg',
	'Sort_Email' => 'E-post',
	'Sort_Website' => 'Webbsida',
	'Sort_Ascending' => 'Stigande',
	'Sort_Descending' => 'Fallande',
	'Order' => 'Ordning',


// Group control panel
	'Group_Control_Panel' => 'Grupp Kontroll Panelen',
	'Group_member_details' => 'Grupp Medlemskaps Detaljer',
	'Group_member_join' => 'Gå med i en Grupp',

	'Group_Information' => 'Grupp Information',
	'Group_name' => 'Grupp namn',
	'Group_description' => 'Grupp beskrivning',
	'Group_membership' => 'Grupp medlemskap',
	'Group_Members' => 'Grupp Medlemmar',
	'Group_Moderator' => 'Grupp Moderator',
	'Pending_members' => 'Väntande Medlemmar',

	'Group_type' => 'Grupp typ',
	'Group_open' => 'Öppen grupp',
	'Group_closed' => 'Stängd grupp',
	'Group_hidden' => 'Dold grupp',

	'Current_memberships' => 'Aktuella medlemskap',
	'Non_member_groups' => 'Inga-medlems grupper',
	'Memberships_pending' => 'Medlemskap på avvaktan',

	'No_groups_exist' => 'Inga grupper finns',
	'Group_not_exist' => 'Den användargrupp finns inte',

	'Join_group' => 'Gå med i grupp',
	'No_group_members' => 'Denna grupp har inga medlemmar',
	'Group_hidden_members' => 'Denna grupp är dold; du kan inte granska dess medlemskap',
	'No_pending_group_members' => 'Denna grupp har inga väntande medlemmar',
	'Group_joined' => 'Du har successfullt abonnerat på den här gruppen.<br />Du kommer att meddelas när din prenumeration är godkänd av den grupp moderatorn.',
	'Group_request' => 'En förfrågan om att delta i din grupp har gjorts.',
	'Group_approved' => 'Din ansökan har godkänts.',
	'Group_added' => 'Du har lagts till i denna användargrupp.',
	'Already_member_group' => 'Du är redan en medlem av denna grupp',
	'User_is_member_group' => 'Användaren är redan medlem av denna grupp',
	'Group_type_updated' => 'Successfullt uppdaterat grupp typ.',
	'Could_not_add_user' => 'Användaren du valt finns inte.',
	'Could_not_anon_user' => 'Du kan inte göra Anonyma till en gruppmedlem.',
	'Confirm_unsub' => 'Är du säker på att du vill ej-prenumerera på den här gruppen?',
	'Confirm_unsub_pending' => 'Din prenumeration på den här gruppen har ännu inte godkänts; är du säker på att du vill un-prenumerera?',
	'Unsub_success' => 'Du har blivit ej-prenumerant i den här gruppen.',
	'Approve_selected' => 'Godkänn Valda',
	'Deny_selected' => 'Neka Valda',
	'Not_logged_in' => 'Du måste vara inloggad för att gå med i en grupp.',
	'Remove_selected' => 'Ta bort valda',
	'Add_member' => 'Lägg Till Medlem',
	'Not_group_moderator' => 'Du är inte den här gruppens moderator, därför kan du inte utföra åtgärden.',
	'Login_to_join' => 'Logga in för att ansluta sig eller hantera gruppmedlemskap',
	'This_open_group' => 'Detta är en öppen grupp: klicka för att begära medlemskap',
	'This_closed_group' => 'Detta är en stängd grupp: %s',
	'This_hidden_group' => 'Detta är en dold grupp: %s',
	'Member_this_group' => 'Du är en medlem av denna grupp',
	'Pending_this_group' => 'Ditt medlemskap i denna grupp är på avvaktan',
	'Are_group_moderator' => 'Du är gruppens moderator',
	'None' => 'Ingen',
	'Subscribe' => 'Prenumerera',
	'Unsubscribe' => 'Prenumerera Ej',
	'View_Information' => 'Visa Information',

// Search
	'Search_query' => 'Sök Query',
	'Search_options' => 'Sök Alternativ',

	'Search_keywords' => 'Sök efter Nyckelord',
	'Search_keywords_explain' => 'Du kan använda <u>AND</u> för att definiera ord som måste finnas i resultatet, <u>OR</u> för att definiera ord som kan vara i resultatet och <u>NOT</u> för att definiera ord som inte ska vara i resultatet. Använd * som jokertecken för partiella matchningar',
	'Search_author' => 'Sök Författare',
	'Search_author_explain' => 'Använd * som jokertecken för partiella matchningar',
	'Search_author_topic_starter' => 'Sök endast ämnen som startade genom denna författare',

	'Search_for_any' => 'Sök på alla termer eller använd sökfråga',
	'Search_for_all' => 'Sök på alla termer',
	'Search_title_msg' => 'Sök ämnes rubrik och meddelandetext',
	'Search_title_only' => 'Sök bara ämnes titeln',
	'Search_msg_only' => 'Sök bara meddelande texten',

	'Return_first' => 'Återgå först', // followed by xxx characters in a select box
	'characters_posts' => 'tecken i inlägget',

	'Search_previous' => 'Sök föregående', // followed by days, weeks, months, year, all in a select box

	'Sort_by' => 'Sortera efter',
	'Sort_Time' => 'Inläggs Tid',
	'Sort_Post_Subject' => 'Inläggs Ämne',
	'Sort_Topic_Title' => 'Ämnes Titel',
	'Sort_Author' => 'Författare',
	'Sort_Forum' => 'Forum',

	'Display_results' => 'Visa resultat som',
	'All_available' => 'Alla tillgängliga',
	'No_searchable_forums' => 'Du har inte behörighet att söka i något forum på denna webbplats.',

	'No_search_match' => 'Inga inlägg uppfyllde dina sökkriterier',
	'Found_search_match' => 'Sökning hittade %d matchning', // eg. Search found 1 match
	'Found_search_matches' => 'Sökning hittade %d matchningar', // eg. Search found 24 matches

	'Close_window' => 'Stäng Fönstret',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'Tyvärr, men enbart %s kan skicka meddelanden i detta forum.',
	'Sorry_auth_sticky' => 'Tyvärr, men enbart %s kan skicka sticky inlägg i detta forum.',
	'Sorry_auth_read' => 'Tyvärr, men enbart %s kan läsa inlägg i detta forum.',
	'Sorry_auth_post' => 'Tyvärr, men enbart %s kan posta inlägg i detta forumet.',
	'Sorry_auth_reply' => 'Tyvärr, men enbart %s kan svara på inlägg i detta forum.',
	'Sorry_auth_edit' => 'Tyvärr, men enbart %s kan redigera inlägg i detta forum.',
	'Sorry_auth_delete' => 'Tyvärr, men enbart %s kan radera inlägg i detta forum.',
	'Sorry_auth_vote' => 'Tyvärr, men enbart %s kan rösta i omröstningar i detta forum.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>anonyma användare</b>',
	'Auth_Registered_Users' => '<b>registrerade användare</b>',
	'Auth_Self_Users' => '<b>specifika användare</b>',
	'Auth_Users_granted_access' => '<b>användare beviljas särskild tillgång</b>',
	'Auth_Moderators' => '<b>moderatorer</b>',
	'Auth_Administrators' => '<b>administratörer</b>',

	'Not_Moderator' => 'Du är inte en moderator i detta forum.',
	'Not_Authorised' => 'Inte Godkända',

	'You_been_banned' => 'Du har blivit bannlyst från detta forum.<br />Kontakta webmaster eller forum administratören för mer information.',

// Viewonline
	'Reg_users_zero_online' => 'Det finns 0 Registrerade användare och ', // There are 5 Registered and
	'Reg_users_online' => 'Det finns %d Registrerade användare och ', // There are 5 Registered and
	'Reg_user_online' => 'Det finns %d Registrerade användare och ', // There is 1 Registered and
	'Hidden_users_zero_online' => '0 Dolda användare online', // 6 Hidden users online
	'Hidden_users_online' => '%d Dolda användare online', // 6 Hidden users online
	'Hidden_user_online' => '%d Dolda användare online', // 6 Hidden users online
	'Guest_users_online' => 'Det finns %d Gäst användare online', // There are 10 Guest users online
	'Guest_users_zero_online' => 'Det finns 0 Gäst användare online', // There are 10 Guest users online
	'Guest_user_online' => 'Det finns %d Gäst användare online', // There is 1 Guest user online
	'No_users_browsing' => 'Det finns inga aktuella användare som bläddrar i detta forumet',

	'Online_explain' => 'Denna data är baserad på aktiva användare under de senaste ' . intval(ONLINE_REFRESH / 60) . ' minuterna',
	'Online_today' => 'Denna data är baserad på aktiva användare idag',

	'Forum_Location' => 'Forum Plats',
	'Last_updated' => 'Senast Uppdaterad',

	'Forum_index' => 'Forum index',
	'Portal' => 'Hemsida',
	'Logging_on' => 'Loggar in',
	'Posting_message' => 'Postar ett meddelande',
	'Searching_forums' => 'Söker forum',
	'Viewing_profile' => 'Granskar profil',
	'Viewing_HACKSLIST' => 'Granskar krediter',
	'Viewing_online' => 'Granskar vem som är online',
	'Viewing_member_list' => 'Granskar medlemslista',
	'Viewing_priv_msgs' => 'Granskar privata meddelanden',
	'Viewing_FAQ' => 'Granskar FAQ',
	'Viewing_KB' => 'Granskar KB',
	'Viewing_RSS' => 'RSS Feed',


// Moderator Control Panel
	'Mod_CP' => 'Moderator Kontroll Panel',
	'Mod_CP_explain' => 'Använd formuläret nedan så kan du utföra en massa måttliga insatser på detta forum. Du kan låsa, låsa upp, flytta eller ta bort valfritt antal inlägg.',

	'Select' => 'Välj',
	'Delete' => 'Radera',
	'Move' => 'Flytta',
	'Copy' => 'Kopiera',
	'Lock' => 'Lås',
	'Unlock' => 'Lås upp',

	'Topics_Removed' => 'Det valda inlägget har successfullt tagits bort från databasen.',
	'Topics_Locked' => 'Det valda inlägget har blivit låst.',
	'Topics_Moved' => 'Det valda inlägget har blivit flyttat.',
	'Topics_Unlocked' => 'Det valda inlägget har blivit upplåst.',
	'No_Topics_Moved' => 'Inga ämnen flyttades.',

	'Confirm_delete_topic' => 'Är du säker på att du vill ta bort det valda ämnet?',
	'Confirm_lock_topic' => 'Är du säker på att du vill låsa det valda ämnet?',
	'Confirm_unlock_topic' => 'Är du säker på att du vill låsa upp det valda ämnet?',
	'Confirm_move_topic' => 'Är du säker på att du vill flytta det valda ämnet?',

	'Move_to_forum' => 'Flytta till forum',
	'Leave_shadow_topic' => 'Lämna skugg ämnet i gamla forumet.',

	'Split_Topic' => 'Dela Ämne Kontroll Panel',
	'Split_Topic_explain' => 'Dela upp ett inlägg i två, antingen genom att välja de inlägg som enskilt eller genom att dela upp på en markerad post',
	'Split_title' => 'Ny ämnes titel',
	'Split_forum' => 'Forum för nytt ämne',
	'Split_posts' => 'Dela utvalda inlägg',
	'Split_after' => 'Dela från utvalda inlägg',
	'Topic_split' => 'Det utvalda inlägg har blivit delat successfullt',

	'Too_many_error' => 'Du har valt för många inlägg. Du kan bara välja en post att dela upp ett ämne efter!',

	'None_selected' => 'Du har inte valt några ämnen för att utföra denna åtgärd på. Gå tillbaka och välj minst ett.',
	'New_forum' => 'Nytt forum',

	'This_posts_IP' => 'IP adress för detta inlägg',
	'Other_IP_this_user' => 'Andra IP adresser denna användare har gjort inlägg från',
	'Users_this_IP' => 'Användare har gjort inlägg från denna IP-adress',
	'IP_info' => 'IP Information',
	'Lookup_IP' => 'Lås upp IP adress',

// Errors (not related to a specific failure on a page)
	'Information' => 'Information',
	'Critical_Information' => 'Kritisk Information',

	'General_Error' => 'Allmänt Error',
	'Critical_Error' => 'Kritiskt Error',
	'An_error_occured' => 'Ett Error Inträffade',
	'A_critical_error' => 'Ett Kritiskt Error Inträffade',
	'Admin_reauthenticate' => 'För att administrera webbplatsen måste du åter-autentisera dig själv.',

	'Topic_description' => 'Beskrivning av ditt ämne',
// 'Description' => 'Topic Description',

	'Guestbook' => 'Gästbok',
	'Viewing_guestbook' => 'Läs gästboken',

	'Click_return_preferences' => 'Klicka %sHär%s för att återgå till Inställningar',

	'Warn_new_post' => 'Det finns minst ett nytt svar i denna tråd. Läs nya svar i ämnet och lägg åter fram ditt inlägg.',

	'Today_at' => '<b class="date-today">Idag</b> at ',
	'Yesterday_at' => '<b class="date-yesterday">Igår</b> at ',
	'TODAY' => '<b class="date-today">Idag</b>',
	'YESTERDAY' => '<b class="date-yesterday">Igår</b>',

// Birthday - BEGIN
	'Birthday' => 'Födelsedag',
	'No_birthday_specify' => 'Inga specificerade',
	'Age' => 'Ålder',
	'Wrong_birthday_format' => 'Födelsedags formatet var felaktigt angiven.',
	'Birthday_to_high' => 'Tyvärr, denna sida, accepterar inte användare äldre än %d år gammla',
	'Birthday_require' => 'Din födelsedag krävs på denna webbplats',
	'Birthday_to_low' => 'Tyvärr, denna sida, accepterar inte användare yngre än %d år gammla',
	'Submit_date_format' => 'd-m-Y', //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different separators are accepted)
	'Birthday_greeting_today' => 'Vi vill önska dig gratulationer till att du har nått %s år gammal idag.',//%s is substituted with the users age
	'Birthday_greeting_prev' => 'Vi vill ge er ett försenat grattis för att du bli %s år gammal den %s.',//%s is substituted with the users age, and birthday
	'Greeting_Messaging' => 'Gratulationer',
	'Birthday_today' => 'Användare som har födelsedag idag:',
	'Birthday_week' => 'Användare som har födelsedag inom de närmaste %d dagarna:',
	'Nobirthday_week' => 'Ingen användare har födelsedag inom de kommande %d dagarna', // %d is substituted with the number of days
	'Nobirthday_today' => 'Ingen användare har födelsedag idag',
	'Year' => 'År',
	'Month' => 'Månad',
	'Day' => 'Dag',
// Birthday - END

// Start add - Gender MOD
	'Gender' => 'Kön',//used in users profile to display which gender he/she is
	'Male' => 'Man',
	'Female' => 'Kvinna',
	'No_gender_specify' => 'Inga specificerade',
	'Gender_require' => 'Ditt kön krävs på denna webbplats.',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
	'Topic_view_users' => 'Lista användare som har tittat på det här ämnet',
	'Topic_time' => 'Senast visade',
	'Topic_count' => 'Visnings räkning',
	'Topic_view_count' => 'Ämnes visnings räknare',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
	'Give_G_card' => 'Åter-aktivera användare',
	'Give_Y_card' => 'Ge användaren en varning #%d',
	'Give_R_card' => 'Bannlys denna användare nu',
	'Ban_update_sucessful' => 'Bannlysnings listan har uppdaterats successfullt',
	'Ban_update_green' => 'Användaren är nu åter-aktiverad',
	'Ban_update_yellow' => 'Användaren har fått en varning, och har nu totalt %d varningar på ett maximum av %d varningar',
	'Ban_update_red' => 'Användaren är nu Bannlyst',
	'Ban_reactivate' => 'Ditt konto har blivit åter-aktiverat',
	'Ban_warning' => 'Du har fått en varning',
	'Ban_blocked' => 'Ditt konto är nu blockerat',
	'Click_return_viewtopic' => 'Klicka %sHär%s för att återgå till ämnet',
/*
	'Rules_ban_can' => 'Du <b>kan</b> bannlysa andra användare i detta forum',
	'Rules_greencard_can' => 'Du <b>kan</b> ej-bannlysa användare i detta forum',
	'Rules_bluecard_can' => 'Du <b>kan</b> rapportera poster till moderator i detta forum',
*/
	'Rules_ban_can' => 'Du <b>kan</b> bannlysa andra användare',
	'Rules_greencard_can' => 'Du <b>kan</b> ej-bannlysa användare',
	'Rules_bluecard_can' => 'Du <b>kan</b> rapportera inlägg till moderatorer',
	'user_no_email' => 'Användaren har ingen e-post, därför kan inget meddelande om den här åtgärden sändas. Du bör lämna honom/henne ett privat meddelande',
	'user_already_banned' => 'Den valda användaren är redan bannlyst',
	'Ban_no_admin' => 'Denna användare är en ADMIN och kan därför inte varnas eller bannlysas',
	'Give_b_card' => 'Rapportera det här inlägget till en moderatorer i detta forum',
	'Clear_b_card' => 'Det här inlägget har %d blåa kort nu. Om du trycker på denna knapp kommer du att rensa detta',
	'No_moderators' => 'Detta forum har inga moderatorer, inga rapporter kan därför skickas!',
	'Post_repported' => 'Denna post har nu rapporterats till %d moderatorer',
	'Post_repported_1' => 'Denna post har nu rapporterats till en moderator',
	'Post_repport' => 'Post Rapport', //Subject in email notification
	'Post_reset' => 'Det blåa kortet för det här inlägget har nu nollställts',
	'Search_only_bluecards' => 'Sök bara bland inlägg med blå kort',
	'Send_message' => 'Klicka %sHär%s för att skriva ett meddelande till moderatorer eller <br />',
	'Send_PM_user' => 'Klicka %sHär%s för att skriva ett PM till användaren eller',
	'Link_to_post' => 'Klicka %sHär%s för att gå till det rapporterade inlägget
--------------------------------

',
	'Post_a_report' => 'Posta en rapport',
	'Report_stored' => 'Din rapport har tagits upp successfullt',
	'Send_report' => 'Klicka %sHär%s för att gå tillbaka till det ursprungliga meddelandet',
	'Red_card_warning' => 'Du håller på att ge användaren:%s ett rött kort, detta kommer att bannlysa användaren, är du säker?',
	'Yellow_card_warning' => 'Du håller på att ge användaren:%s ett gult kort, detta kommer att utfärda en varning till användaren, är du säker?',
	'Green_card_warning' => 'Du håller på att ge användaren:%s ett grönt kort, detta kommer att unban användaren, är du säker?',
	'Blue_card_warning' => 'Du är på väg att ge inlägget ett blått kort, detta kommer att varna moderatorer om det här inlägget, Är du säker på att du vill varna moderatorer om det här inlägget?',
	'Clear_blue_card_warning' => 'Du håller på att återställa det blå kortet för detta inlägg, Vill du fortsätta?',
	'Warnings' => 'Varningar: %d', //shown beside users post, if any warnings given to the user
	'Banned' => 'För närvarande bannlyst',//shown beside users post, if user are banned

// Last visit - BEGIN
	'Last_logon' => 'Senaste besöket',
	'Hidde_last_logon' => 'Dolda',
	'Never_last_logon' => 'Aldrig',
	'Users_today_zero_total' => 'Totalt <b>0</b> användare har besökt denna webbplats idag: ',
	'Users_today_total' => 'Totalt <b>%d</b> användare har besökt denna webbplats idag: ',
	'User_today_total' => 'Totalt <b>%d</b> användare har besökt denna webbplats idag: ',
	'Users_lasthour_explain' => ', %d av dem inom den senaste timmen.',
	'Users_lasthour_none_explain' => '', //shown if no one has visited in the last hour, fill if you like

	'Years' => 'År',
	'Year' => 'År',
	'Weeks' => 'Veckor',
	'Week' => 'Vecka',
	'Day' => 'Dag',
	'Total_online_time' => 'Totalt Online Varaktighet',
	'Last_online_time' => 'Senast Online Varaktighet',
	'Number_of_visit' => 'Antal besök',
	'Number_of_pages' => 'Antal sido träffar',
// Last visit - END

	'total_site_hits_key' => '%V% Sido visningar sedan %D%.',

	'Message_too_short' => 'Meddelande för kort',

// Start add - Online/Offline/Hidden Mod
	'Online' => 'Online',
	'Offline' => 'Offline',
	'Hidden' => 'Dolda',

	'Online_status' => 'Status',
// End add - Online/Offline/Hidden Mod
	'Download' => 'Nedladdning',

//signature editor
	'sig_edit_link' => 'Signatur',
	'sig_description' => 'Redigera Signatur (<b>Förhandsgranska ingår</b>)',
	'sig_edit' => 'Redigera Signatur',
	'sig_current' => 'Nuvarande Signatur',
	'sig_none' => 'Ingen Signatur tillgänglig',
	'sig_save' => 'Spara',
	'sig_save_message' => 'Signaturen sparad successfullt!',

	'Statistics' => 'Statistik',

// Start add - Global announcement MOD
	'Globalannounce' => 'Globalt Tillkännagivande',
	'Globalannounce' => 'Nytt Globalt Tillkännagivande',
// End add - Global announcement MOD
	'Global_Announcements' => 'Globalt Meddelande',
	'Announcements' => 'Meddelande',
	'Sticky_Topics' => 'Sticky Ämnen',
	'Announcements_and_Sticky' => 'Meddelande och Sticky Ämnen',
// db_update generator
	'Db_update_generator' => 'DB Uppdatera Generator',
	'Instructions' => 'Instruktioner',
	'SQL_instructions' => '<p>Denna del av mjukvara kommer att skapa PHP filer som gör att du kan uppdatera din databas med hjälp av din webbläsare. Det finns några saker man måste titta efter när du sätter i en SQL i rutan nedan.<br />Först av allt, se till att alla SQL query slutar med ett semikolon (;). Om inte, kommer den fil som skapas att vara fel. Nästa, se till att tabellerna har "phpbb_" prefix. Detta kommer automatiskt att ersättas med en liten bit kod som gör att du kan använda db_update.php fil på något forum oavsett vad tabellen prefix är inställt på.</p>',
	'Enter_SQL' => '<strong>Ange SQL</strong>',
	'Enter_SQL_explain' => '<strong>MySQL</strong> är världens mest populära open source databas, erkänd för sin snabbhet och tillförlitlighet.',
	'Output_SQL' => '<strong>SQL Output</strong>',
	'Output_SQL_explain' => 'Kopiera och klistra in texten från textboxen till höger in på en tom fil. Spara filen som <u>db_update.php</u> och ladda upp den till din server. Kör den en gång genom din webbläsare.<br /><br />Allternativ, så klickar du på knappen Hämta för att ladda ner filen direkt till din dator <strong>(rekommenderas)</strong>.',
	'Download' => 'Nerladdning',

	'TOP_POSTERS' => 'Topp Postare',

// TELL A FRIEND
	'TELL_FRIEND' => 'E-post till en Vän',
	'TELL_FRIEND_SENDER_USER' => 'Ditt Namn',
	'TELL_FRIEND_SENDER_EMAIL' => 'Din E-post Adress',
	'TELL_FRIEND_RECEIVER_USER' => 'Din Vän\'s Namn',
	'TELL_FRIEND_RECEIVER_EMAIL' => 'Din Vän\'s E-post Adress',
	'TELL_FRIEND_WRONG_EMAIL' => 'Du har inte angett en giltig e-postadress.',
	'TELL_FRIEND_MSG' => 'Ditt meddelande:',
	'TELL_FRIEND_TITLE' => 'Tipsa En Vän',
	'TELL_FRIEND_BODY' => "Hej,\nJag har precis läst ämnet &raquo;{TOPIC}&laquo; på {SITENAME} och tänkte att du kanske är intresserad.\n\nHär är länken: {LINK}\n\nGå och läs det och om du vill svara kan du registrera dig för ditt eget konto om du inte redan har gjort det.",

// Begin Thanks Mod
	'thankful' => 'Tacksamma Folk',
	'thanks_to' => 'Tack för det värdefulla Ämnet',
	'thanks_end' => ':',
	'thanks_alt' => 'Tack Ämne',
	'thanks_add_rate' => 'Tacka författaren för det nyttiga ämnet',
	'thanked_before' => 'Du har redan tackat för detta ämne',
	'thanks_add' => 'Din tack har givits',
	'thanks_not_logged' => 'Du måste logga in för att tacka någon för inlägget',
	'thanks2' => 'Tack så mycket!<br />',
// End Thanks Mod

//Begin Lo-Fi Mod
	'Lofi' => 'Lo-Fi Version',
// 'Full_Version' => 'Full Version',
	'Full_Version' => 'Detta är en "Lo-Fi-version av vårt huvudsakliga innehåll. Om du vill se den fullständiga versionen med mer information, formatering och bilder, klicka här.',
	'quote_lofi' => 'Citera',
	'edit_lofi' => 'Redigera',
	'ip_lofi' => 'IP',
	'del_lofi' => 'Radera',
	'profile_lofi' => 'Profil',
	'pm_lofi' => 'PM',
	'email_lofi' => 'E-post',
	'website_lofi' => 'Webbsida',
	'icq_lofi' => 'ICQ',
	'aim_lofi' => 'AIM',
	'yim_lofi' => 'YIM',
	'msnm_lofi' => 'MSN',
	'quick_lofi' => 'Snabbt Svar',
	'new_pm_lofi' => 'Skicka ett PM',
//End Lo-Fi Mod

// Retroactive Signature MOD
	'Retro_sig' => 'Bifoga min signatur till mitt tidigare inlägg',
	'Retro_sig_explain' => 'Om att lägga till/redigera din signatur, Icy Phoenix gäller detta normalt endast för framtida inlägg',
	'Retro_sig_checkbox' => 'Kolla här för att bifoga din signatur till dina tidigare inlägg',
// End Retro Sig MOD

	'legend' => 'Legend',
	'users' => 'Användare',
//added to autogroup mod
	'No_more' => 'inga fler användare accepteras',
	'No_add_allowed' => 'användarens automatiska tillägg är inte tillåtet',
	'Join_auto' => 'Du kan delta i den här gruppen, eftersom ditt inlägg uppfyller grupp kriterier',

// merge topics
	'Merge' => 'Sammanfoga',
	'Merge_topic' => 'Sammanfoga till ämne',
	'Topics_Merged' => 'De utvalda ämnena har slagits samman.',
	'No_Topics_Merged' => 'Inga inlägg slogs samman.',
	'Confirm_merge_topic' => 'Är du säker på att du vill slå samman de valda ämnen?',

	'Downloads' => 'Nedladdningar',

// Start add - Bin Mod
	'Move_bin' => 'Flytta detta ämne till papperskorgen',
	'Topics_Moved_bin' => 'De utvalda ämnen har flyttats till papperskorgen.',
	'Bin_disabled' => 'Papperskorgen har avaktiverats',
	'Bin_recycle' => 'Återvinn',
// End add - Bin Mod
	'Recent_topics' => 'Aktuella Ämnen', // Recent Topics

	'Topics_Title_Edited' => 'Titlarna på utvalda ämnen har redigerats.',
	'Edit_title' => 'Titel Redigera',
	'PM' => 'PM',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'IP adress information enbart för moderatorer',
	'Registered_ip_address' => 'Registrerad IP adress',
	'Registered_hostname' => 'Registrerat värdnamn',
	'Other_registered_ips' => 'Andra användare som registrerar från %s', //%s is the IP address
	'Other_posted_ips' => 'IP adresser denna användare har postat från',
	'Search_ip' => 'Sök efter inlägg på IP address',
	'Search_ip_explain' => 'Ange en IP-adress i det format som gäller <u>127.0.0.1</u> -- du kan använda * som jokertecken för partiella matchningar liksom <u>127.*.*.1</u>',
	'IP' => 'IP',
	'Whois' => 'Vems är',
	'Browser' => 'Webbläsare',
	'No_other_registered_ips' => 'Ingen annan användare har registrerats i enlighet med denna IP-adress.',
	'No_other_posted_ips' => 'Denna användare har inte gjort några inlägg.',
	'Not_recorded' => 'Registreras ej',
	'Logins' => 'Inloggningar',
	'No_logins' => 'Inga inloggningar har registrerats för den här användaren.',
// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'Klicka för att visa bilden i dess originalstorlek',
	'LIW_click_image_explain' => 'Klicka på bilden för att se den i originalstorlek',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => 'Album',
	'Personal_Gallery' => 'Personligt Galleri',
	'Personal_Gallery_Of_User' => 'Personligt Galleri Av %s',
	'Personal_Gallery_Of_User_Profile' => 'Personligt Galleri av %s (%d Bilder)',
	'Show_All_Pic_View_Mode_Profile' => 'Visa alla bilder i Personligt Galleri av %s (utan underkategorier)',
	'Not_allowed_to_view_album' => 'Tyvärr, Du är inte tillåten att granska detta album.',
	'Not_allowed_to_upload_album' => 'Tyvärr, Du är inte tillåten att ladda upp en ny bild till albumet. Kontakta albumets administratör för mer information.',
	'Album_empty' => 'Det finns inga bilder i albumet<br />Klicka på <b>Ladda Upp Ny Bild</b> länk på denna sida för att posta en.',
	'Album_empty2' => 'Det finns inga bilder i albumet.',
	'Upload_New_Pic' => 'Ladda Upp Ny Bild.',
	'Pic_Title' => 'Bild Titel',
	'Pic_Title_Explain' => 'Det är mycket viktigt att du ger din bild en bra titel. Det kan vara ett namn eller ett ämne för att se till att andra vet vad det är utan att se det.',
	'Pic_Upload' => 'Bild Uppladdad',
	'Pic_Upload_Explain' => 'Tillåtna typer är JPG, GIF och PNG. Maximal filstorlek är %s bytes. Maximal bild dimensioner är %sx%s pixlar.',
	'Album_full' => 'Tyvärr, albumet har nått det högsta antalet uppladdade bilder. Vänligen kontakta albumets administratör för mer information.',
	'Album_upload_successful' => 'Tack, din bild har lagts upp successfullt.',
	'Click_return_album' => 'Klicka %shär%s för att återgå till Albumet.',
	'Invalid_upload' => 'Ogiltig Uppladdning<br /><br />Din bild är för stort eller dess typ är inte tillåten.',
	'Image_too_big' => 'Tyvärr, din bilds dimensioner är för stora.',
	'Uploaded_by' => 'Uppladdad av',
	'Category_locked' => 'Tyvärr, Du kan inte ladda upp, eftersom denna kategori var låst av en admin. Vänligen kontakta albumets administratör för mer information.',
	'View_Album_Index' => 'Album Index',
	'View_Album_Personal' => 'Visa Personligt Album av en användare',
	'View_Pictures' => 'Visa Bilder eller Inlägg/Läsa kommentarer i albumet',
	'Album_Search' => 'Söker i Albumet',
	'Pic_Name' => 'Bild Namn',
	'Description' => 'Beskrivning',
	'Search_Contents' => ' som innehåller: ',
	'Search_Found' => 'Sökning hittade ',
	'Search_Matches' => 'Matchningar:',
// Mighty Gorgon - Full Album Pack - END

// News
	'xs_latest_news' => 'Senaste Nytt',
	'xs_no_news' => 'Det finns inga nyhets inlägg.',
	'xs_news_version' => 'XS Nyhets Version: %s',
	'xs_news_ticker_feed' => 'XML Feed Källa: %s',
	'xs_no_ticker' => 'Det finns inga Nyhets Tickers definierade, besök ACP för att skapa en.',
	'xs_news_ticker_title' => 'Nyhets Ticker',
	'xs_news_tickers_title' => 'Nyhets Tickers',
	'xs_news_item_title' => 'Nyhets Artikel',
	'xs_news_items_title' => 'Nyhets Artiklar',
	'hide' => 'Göm',
	'show' => 'Visa',
	'Welcome' => 'Välkommen',
	'birthdays' => 'Födelsedagar',

//Battle of the Sexes
	'male_zero_total' => '<b>0</b> Manlig Medlem', // # registered male users
	'male_total' => '<b>%d</b> Manliga Medlemmar', // # registered male users
	'male_one_total' => '<b>%d</b> Manlig Medlem', // # registered male users
	'female_zero_total' => 'Vi har <b>0</b> Kvinnliga Medlemmar', // # registered female users
	'female_total' => 'Vi har <b>%d</b> Kvinnliga Medlemmar', // # registered female users
	'female_one_total' => 'Vi har <b>%d</b> Kvinnlig Medlem', // # registered female users
	'unknown_total' => '& <b>%d</b> Medlemmar Som Inte Vet',
	'unknown_one_total' => '& <b>%d</b> Medlemmar Som Verkligen Inte Vet',
	'unknown_zero_total' => '',
	'battle_of_sexes' => 'Krig mellan könen: ',

	'who_viewed' => 'Ämnes granskningar',
	'BoardRules' => 'Regler',

	'View_post' => 'Granska Post',
	'Post_review' => 'Post Granskning',
	'View_next_post' => 'Visa Nästa Post',
	'View_previous_post' => 'Visa tidigare inlägg',
	'No_newer_posts' => 'Det finns inga nya inlägg i detta forum',
	'No_older_posts' => 'Det finns inga äldre inlägg i forumet',

	'StaffSite' => 'Personal Sida',
	'Staff_level' => array('Administratör', 'Moderator'),
	'Staff_forums' => 'Forum',
	'Staff_stats' => 'Statistik',
	'Staff_user_topic_day_stats' => '%.2f ämnen per dag', // %.2f = topics per day
	'Staff_period' => 'sedan %d dagar', // %d = days
	'Staff_contact' => 'Kontakter',
	'Staff_messenger' => 'Messenger',
// Start Edit Notes MOD
	'Edit_notes' => 'Redigera Noteringar',
	'Delete_note' => 'Radera Notering',
	'Edited_by' => 'Redigerad av',
	'Confirm_delete_edit_note' => 'Vill du verkligen radera denna redigerade anteckningen?',
	'Edit_note_deleted' => 'Redigerings kommentaren har tagits bort successfullt.',
// End Edit Notes MOD
//Referrers Mod
	'Referrers' => 'Http Referrenser',
	'Viewing_Referrers' => 'Granskar Referrenser',
//Referrers Mod End

	'Recent_topics' => 'Aktuella Ämnen',
	'Recent_today' => 'Idag',
	'Recent_yesterday' => 'Igår',
	'Recent_last24' => 'Senaste 24 Timmarna',
	'Recent_lastweek' => 'Senaste Veckan',
	'Recent_lastXdays' => 'Senaste %s dagarna',
	'Recent_last' => 'Senast',
	'Recent_days' => 'Dagarna',
	'Recent_first' => 'startat %s',
	'Recent_first_poster' => '%s',
	'Recent_select_mode' => 'Välj mode:',
	'Recent_showing_posts' => 'Visar Poster:',
	'Recent_title_one' => '%s ämne %s', // %s = topics; %s = sort method
	'Recent_title_more' => '%s ämnen %s', // %s = topics; %s = sort method
	'Recent_title_today' => ' från idag',
	'Recent_title_yesterday' => ' från igår',
	'Recent_title_last24' => ' från de senaste 24 timmarna',
	'Recent_title_lastweek' => ' från förra veckan',
	'Recent_title_lastXdays' => ' från de sista %s dagarna', // %s = days
	'Recent_no_topics' => 'Inga inlägg hittades.',
	'Recent_wrong_mode' => 'Du har valt fel mode.',
	'Recent_click_return' => 'Klicka %shär%s för att återgå till senaste webbplatsen.',

	'Profile_view_option' => 'Pop upp fönster på Profil Granskning',
	'Profile_viewed' => 'Min Profil Visningar',

// BEGIN Disable Registration MOD
	'registration_status' => 'Tyvärr, men registreringar i detta forum är för närvarande stängd. Försök igen senare.',
// END Disable Registration MOD

	'PostHighlight' => 'Highlight',
	'QuickQuote' => 'Snabb Citat',
	'Randomquote' => 'Slumpmässigt Citat',

// Mod User CP Organize
	'Cpl_Navigation' => 'Kontroll Panel',
// 'Cpl_Settings_Options' => 'Settings And Options',
	'Cpl_Settings_Options' => 'Inställningar',
	'Cpl_Board_Settings' => 'Sido Inställningar',
	'Cpl_NewMSG' => 'Skicka Nytt Meddelande',
	'Cpl_Click_Return_Cpl' => 'Eller klicka %sHär%s för att återgå till din Kontroll Panel',
	'Cpl_Personal_Profile' => 'Personlig Profil',
	'Cpl_More_info' => 'Prenumerationer',

	'Forbidden_characters' => 'Tillåtna tecken för användarnamn är a-z, 0-9, -, _ och mellanslag.',

	'Topics_per_page' => 'Ämnen Per Sida',
	'Posts_per_page' => 'Inlägg Per Sida',
	'Hot_threshold' => 'Populär Inläggs Tröskel',

	'Mod_CP_first_post' => 'Första Inlägg',
	'Mod_CP_topic_count' => '<b>%s</b> ämne hittade.',
	'Mod_CP_topics_count' => '<b>%s</b> ämnen hittades.',
	'Mod_CP_no_topics' => 'Inga ämnen uppfyller kriterierna.',
	'Mod_CP_sticky' => 'Sticky',
	'Mod_CP_announce' => 'Tillkännage',
	'Mod_CP_global' => 'Globalisera',
	'Mod_CP_normal' => 'Normalisera',
	'Display_sticky' => 'Sticky',
	'Display_announce' => 'Meddelande',
	'Display_global' => 'Globalt Meddelande',
	'Display_poll' => 'Omröstning',
	'Display_shadow' => 'Flyttad',
	'Display_locked' => 'Låst',
	'Display_unlocked' => 'Ej Låst',
	'Display_unread' => 'Oläst',
	'Display_unanswered' => 'Obesvarad',
	'Display_all' => 'Alla',
	'Mod_CP_confirm_delete_polls' => 'Är du säker på att du vill radera dessa undersökningar?',
	'Mod_CP_poll_removed' => 'De valda undersökningar har tagits bort successfullt från ämnet.',
	'Mod_CP_polls_removed' => 'De utvalda undersökningarna har förflyttas successfullt från ämnet.',
	'Mod_CP_topic_removed' => 'Det valda ämnet har successfullt förflyttats från databasen.',
	'Mod_CP_topic_moved' => 'Det valda ämnet har blivit flyttat från <b>%s</b> till <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topics_moved' => 'Det valda ämnet har blivit flyttat från <b>%s</b> till <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topic_locked' => 'Det valda ämnet har blivit låst.',
	'Mod_CP_topic_unlocked' => 'Det valda ämnet har blivit upplåst.',
	'Mod_CP_topics_sticked' => 'De valda ämnen har blivit sticked.',
	'Mod_CP_topic_sticked' => 'Det valda ämnet har blivit sticked.',
	'Mod_CP_topics_announced' => 'De valda ämnen har blivit annonserade.',
	'Mod_CP_topic_announced' => 'Det valda ämnet har blivit annonserat.',
	'Mod_CP_topics_globalized' => 'De valda ämnen har blivit globaliserade.',
	'Mod_CP_topic_globalized' => 'Det valda ämnet har blivit globaliserat.',
	'Mod_CP_topics_normalized' => 'De valda ämnen har blivit normaliserade.',
	'Mod_CP_topic_normalized' => 'Det valda ämnet har blivit normaliserat.',
	'Mod_CP_click_return_topic' => 'Klicka %shär%s för att återgå till det gamla ämnet eller %shär%s för att återgå till det nya.',

	't_starter' => 'Du kan inte tacka dig själv',
	'Watched_Topics' => 'Bevakade Ämnen',
	'No_Watched_Topics' => 'Du bevakar inte några ämnen',
	'Watched_Topics_Started' => 'Ämnet Startade',
	'Watched_Topics_Stop' => 'Stoppa Bevakning',

	'Stop_watching_forum' => 'Stoppa bevaka detta forum',
	'Start_watching_forum' => 'Bevaka detta forum för inlägg',
	'No_longer_watching_forum' => 'Du bevakar inte längre detta forum.',
	'You_are_watching_forum' => 'Du bevakar nu detta forum.',

	'UCP_SubscForums' => 'Prenumerationer Forum Lista',
	'UCP_NoSubscForums' => 'Du har inga Prenumerationer på Forum',
	'UCP_SubscForums_Flag' => 'Flagga',
	'UCP_SubscForums_Forum' => 'Forum',
	'UCP_SubscForums_Forum_subscribed' => 'Forum Prenumerationer',
	'UCP_SubscForums_Forum_already_subscribed' => 'Du prenumererar redan på detta Forum',
	'UCP_SubscForums_Click_return_forum' => 'Klicka %sHär%s för att återgå till Forum',
	'UCP_SubscForums_Topics' => 'Ämnen',
	'UCP_SubscForums_Posts' => 'Inlägg',
	'UCP_SubscForums_LastPost' => 'Senaste Inlägg',
	'UCP_SubscForums_UnSubscribe' => 'Un-Prenumerationer',
	'UCP_SubscForums_NewTopic' => 'Nytt Ämne',

	'profile_main' => 'Allmänt Info',
	'profile_explain' => 'Välkommen till Användare Kontroll Panelen. Härifrån kan du övervaka, visa och uppdatera din profil, preferenser, tecknade forum och inlägg. Du kan också skicka meddelanden till andra användare (om tillåtet).',
	'your_activity' => 'Din Profil',

	'Gravatar' => 'Gravatar',
	'Gravatar_explain' => 'Om du har en <a href="http://www.gravatar.com" target="_blank">gravatar</a>, ange e-postadressen som du registrerade med här.',

	'private_msg_review_title' => 'Meddelande du svarar på',
	'private_msg_review_error' => 'Error Hitta Privata Meddelande!',

	'BSH_Viewing_Topic' => 'Visa Ämne: %t%',
	'BSH_Viewing_Post' => '%sVisa en Post%s',
	'BSH_Viewing_Profile' => 'Visa %u%\'s Profil',
	'BSH_Viewing_Groups' => '%sVisa Grupper%s',
	'BSH_Viewing_Forums' => 'Visa Forum: %f%',
	'BSH_Index' => '%Visa Index%s',
	'BSH_Searching_Forums' => '%sSöker Forum%s',
	'BSH_Viewing_Onlinelist' => '%sVisa Online Lista%s',
	'BSH_Viewing_Messages' => '%sVisa Privata Meddelande%s',
	'BSH_Viewing_Memberlist' => '%sVisa Medlemslista%s',
	'BSH_Login' => '%sLoggar In%s',
	'BSH_Logout' => '%sLoggar Ut%s',
	'BSH_Editing_Profile' => '%sRedigerar Profil%s',
	'BSH_Viewing_ACP' => '%sVisa ACP%s',
	'BSH_Moderating_Forum' => '%sModerating Forum%s',
	'BSH_Viewing_FAQ' => '%sVisa FAQ%s',
	'BSH_Viewing_Category' => 'Visa Kategori: %c%',

	'Board_statistic' => 'Forum statistik',
	'Database_statistic' => 'Databas statistik',
	'Version_info' => 'Version information',
	'Thereof_deactivated_users' => 'Antal icke-aktiva medlemmar',
	'Thereof_Moderators' => 'Antal Moderatorer',
	'Thereof_Junior_Administrators' => 'Antal Junior Administratörer',
	'Thereof_Administrators' => 'Antal Administratörer',
	'Deactivated_Users' => 'Medlemmar i behov av aktivering',
	'Users_with_Mod_Privileges' => 'Medlemmar med moderator rättigheter',
	'Users_with_Junior_Admin_Privileges' => 'Medlemmar med junior administratörs rättigheter',
	'Users_with_Admin_Privileges' => 'Medlemmar med administratörs rättigheter',
	'DB_size' => 'Storlek på databasen',
	'Version_of_ip' => 'Version av <a href="http://www.icyphoenix.com/">Icy Phoenix</a>',
	'Version_of_board' => 'Version av <a href="http://www.phpbb.com">phpBB</a>',
	'Version_of_PHP' => 'Version av <a href="http://www.php.net/">PHP</a>',
	'Version_of_MySQL' => 'Version av <a href="http://www.mysql.com/">MySQL</a>',
	'Download_post' => 'Ladda Ner Inlägg',

	'Download_topic' => 'Ladda Ner Ämne',
	'Always_swear' => 'Tillåt alltid svär ord',

	'Shoutbox' => 'Shoutbox',
	'Shoutbox_date' => ' d m Y h:i:s',
	'Shout_censor' => 'Shout förflyttad!',
	'Shout_refresh' => 'Uppdatera',
	'Shout_text' => 'Din text',
	'Viewing_Shoutbox' => 'Granskar shoutbox',
	'Censor' => 'Censur',

	'Edit_post_time' => 'Redigera tid för det här inlägget',
	'Edit_post_time_xs' => 'Redigera',
	'Topic_time_xs' => 'Ämnes Tid',
	'Post_time' => 'Inläggs Tid',
	'Post_time_successfull_edited' => '<b>Tid uppdaterad successfullt.</b></span><br /><span class="postdetails">Detta fönster kommer att stängas efter 3 sekunder.',

	'staff_message' => 'Meddelande från Personalen',

	'Board_Rules' => 'Forum Regler',
	'Forum_Rules' => 'Forum Regler',
	'Show_avatars' => 'Visa Avatarer i Ämne',
	'Show_signatures' => 'Visa Signaturer i Ämne',
	'Acronym' => 'Förkortning',
	'Acronyms' => 'Förkortningar',
	'User_Number' => 'Användare #',
	'Member_Count' => 'Medlemmar',
	'Reply_message' => 'Svarade på meddelandet',
	'Click_read_topic' => 'Klicka %sHär%s för att läsa det', // %s's here are for uris, do not remove!
	'Create_with_generator' => 'Skapa Avatar genom att använda Avatar Generator',
	'View_avatar_generator' => 'Avatar Generator',
	'Adv_Search' => 'Avancerad Sökning',
	'Search_Explain' => 'Sök inom webbplatsen',
	'Login_attempts_exceeded' => 'Det högsta antalet %s inloggnings försök har överskridits. Du får inte logga in igen innom de närmsta %s minuterna.',
	'Please_remove_install_contrib' => 'Vänligen se till att både install / och contrib / katalogerna är borttagna',
	'Search_Engines' => 'Sökmotor Bots:',
	'Bots_browsing_forum' => 'Sökmotor Bots som bläddrar i detta forum:',
	'Debug_On' => 'Debug På',
	'Debug_Off' => 'Debug Av',
	'Page_Generation_Time' => 'Generations Tid',
	'Memory_Usage' => 'Minne',
	'SQL_Queries' => 'SQL queries',
	'Search_new2' => 'Nya Inlägg',
	'Search_new_p' => 'Inlägg sedan senaste besök',
	'Show_In_Portal' => 'Visa på Hemsidan',
	'Not_Auth_View' => 'Du har inte behörighet att granska den här sidan.',
	'Site_Hist' => 'Sido Historia',
	'Links' => 'Länkar',
	'Print_View' => 'Utskrivningsbar Version',
	'Browsing_topic' => 'Användare som bläddrar i detta ämne:',
	'Sudoku' => 'Sudoku',
	'Bookmarks' => 'Bokmärken',
	'Set_Bookmark' => 'Sätt ett bokmärke för detta inlägg',
	'Remove_Bookmark' => 'Ta bort bokmärket för detta inlägg',
	'No_Bookmarks' => 'Du har inga bokmärkes uppsättningar',
	'Always_set_bm' => 'Ställ bokmärke automatiskt när du gör inlägg',
	'Found_bookmark' => 'Du har satt %d bokmärke.', // eg. Search found 1 match
	'Found_bookmarks' => 'Du har satt %d bokmärken.', // eg. Search found 24 matches
	'More_bookmarks' => 'Fler bokmärken...', // For mozilla navigation bar

//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => 'Vad är det här?',
	'Rss_news_help_title' => 'RSS Newsreader Hjälp',
	'Rss_news_help_header' => 'Vad är feeds och hur använder jag dem?',
	'Rss_news_help_explain' => 'En feed är en regelbundet uppdaterad sammanfattning av vissa Webb innehållet, som har kopplingar till den fullständiga versionen av respektive innehåll. Om du prenumererar på feeds på en webbplats med en flödesläsare, så får du alla nya innehåll på dess hemsida i en sammanfattning.<br /><br /><b>Uppmärksamhet:</b> För att prenumerera på feeds från webbplatsen måste en <a href="http://www.rssowl.org/" target="new">Feed-Reader</a> användas. Annars, när du klickar på en länk till en RSS eller Atom kommer det bara att leda till en oformaterad text och förvirring i webbläsaren.',
	'Rss_news_help_header_2' => '<b>Vad är RSS och Atom?</b>',
	'Rss_news_help_explain_2' => 'RSS och Atom är två format för feeds. De flesta feed läsare stödjer båda formaten. För närvarande stöds atom 0.3 och RSS 2.0 av oss.',
	'Rss_news_help_header_3' => '<b>Hur använder jag Nyhets feeds?</b>',
	'Rss_news_help_explain_3' => 'För det första behöver du en feedläsare som du exempelvis kan få från <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />Därefter kan du i programmet:<br /><br /><b>1.</b> Söka efter RSS länkar på vår sida. (Extra => Sök efter nya feeds på webbsidan) <b>eller</b><br /><b>2.</b> lägg till en av följande feed URL`s:',
	'L_url_rss_explain' => 'URL för alla forum inlägg.',
	'L_url_rss_news_explain' => 'URL bara för forum Nyheter.',
	'L_url_rss_atom_explain' => 'URL för Atom RSS Feed.',
	'Rss_news_help_rights' => 'Vi förbehåller oss rätten att avsluta användning av feeds när som helst och efter eget gottfinnande. Vårt forum feeds får inte längre drivas ut.',
	'Rss_news_feeds' => 'RSS Nyhets Feeds',

	'Quick_Reply' => 'Snabbt Svar',
	'Mod_CP_sticky2' => 'Sticky',
	'Mod_CP_announce2' => 'Tillkännage',
	'Mod_CP_global2' => 'Globalisera',
	'Mod_CP_normal2' => 'Normalisera',

	'Search_Flood_Error' => 'Du kan inte göra en ny sökning så snart efter din sista, vänligen försök igen om en stund.',

// Custom Profile Fields MOD
	'custom_field_notice' => 'Dessa poster har skapats av en administratör. De kan eller kan ej vara offentliga. Poster markerade med * är obligatoriska fält.',
	'and' => ' och ',
// END Custom Profile Fields MOD

	'dsbl' => 'Din IP-adress finns på en <a href="%url%">DNS-baserad Blackhole Lista</a>. <br />Registrerings försök blockerat.',
	'Emails_Only_To_Admins_Error' => 'Du kan använda e-post systemet för att skicka e-post enbart till administratörer.',
	'Wordgraph' => 'Taggar',
	'Viewing_wordgraph' => 'Granskar Taggar',
	'Links_For_Guests' => '<b>Du måste vara registrerad för att granska den här länken</b>',
	'New' => 'N',
	'New_Label' => 'Nytt',
	'New_Messages_Label' => 'Nya Meddelanden',
	'Show_Personal_Gallery' => 'Visa användarens personliga galleri',
	'Login_Status' => 'Online Status',
	'Login_Hidden' => 'Dolda',
	'Login_Visible' => 'Synlig',
	'Login_Default' => 'Standard',
	'Errors_Not_Found' => 'Den begärda adressen kan inte hittas på denna server',
	'Errors_000' => 'Okänt error',
	'Errors_000_Full' => 'Den begärda adressen återskickar en okänd fel kod.<br />Errors har registrerats till loggfilen och vi kommer att se vad problemet är.',
	'Errors_400' => 'Error 400',
	'Errors_400_Full' => 'Den begärda adressen är inte en giltig adress.',
	'Errors_401' => 'Error 401 - Tillstånds Error',
	'Errors_401_Full' => 'Du får detta meddelande eftersom du inte har behörighet till den här adressen.',
	'Errors_403' => 'Error 403',
	'Errors_403_Full' => 'Tillgång till denna adress är förbjuden.',
	'Errors_404' => 'Error 404 - File Not Found',
	'Errors_404_Full' => 'Adressen du har begärt är inte tillgänglig på denna server. Du kan ha felstavat adressen, eller det du söker kan ha tagits bort.',
	'Errors_500' => 'Error 500 - Konfigurations error',
	'Errors_500_Full' => 'Adressen du har begärt återsänder ett konfigurationsfel.<br />Errors har registrerats till loggfilen, och vi kommer att kontrollera vad som är problemet så snart som möjligt.',
	'Errors_Email_Subject' => 'Errors: ',
	'Errors_Email_Addrress_Prefix' => 'xs_errors',
	'Errors_Email_Body' => 'Ett error har skett på din webbplats. Kontrollera loggfilen.',
	'Remote_avatar_no_image' => 'Bilden %s finns inte',
	'Remote_avatar_error_filesize' => 'Bilden är över storleksgränsen för avatarer (%d Bytes)',
	'Remote_avatar_error_dimension' => 'Bilden är över dimensions gränsen för avatarer (%d x %d pixlar)',
	'How_Many_Chatters' => 'Det finns <b>%d</b> användare i chatten nu',
	'Who_Are_Chatting' => '<b>%s</b>',
	'Click_to_join_chat' => 'Klicka här för att delta i chatten',
	'ChatBox' => 'ChatBox',
	'log_out_chat' => 'Du har nu successfullt loggats ut från chatten på ',
	'Send' => 'Skicka',
	'Login_to_join_chat' => 'Logga in för att delta i chatten',

// Hacks List
/* General */
	'Hacks_List' => 'Krediter',
	'Page_Desc' => 'Med denna modul kan du lägga till/redigera/ta bort i listan över aktuella krediter för Hacks/mods som är installerade i ditt forum. De visas för användare när de besöker krediter:s .php sida.',
	'Deleted_Hack' => 'Radera kredit för mod %s från listan.<br />',
	'Updated_Hack' => 'Uppdaterad kredit info om mod %s.<br />',
	'Added_Hack' => 'Tillagd info om mod %s.<br />',
	'Status' => 'Status',
	'No_Website' => 'Ingen webbplats tillgänglig.',
	'No_Hacks' => 'Inga krediter att visa.',
	'Add_New_Hack' => 'Lägg till en ny kredit',
	'User_Viewable' => 'Gömmma Från Användar Lista?',
	'Hack_Name' => 'Mod Namn',
//	'Description' => 'Description',
	'Required' => 'Nödvändig',
	'Author_Email' => 'Författare E-post',
	'Version' => 'Version',
	'Download_URL' => 'Nerladdnings Plats',

/* Errors */
	'Error_Hacks_List_Table' => 'Error querying Hacks List Tabell.',
	'Required_Field_Missing' => 'Du misslyckades med att skriva in alla begärda uppgifter.',
	'Error_File_Opening' => 'Det går inte att öppna filen: %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => 'Senaste Bild', // Album Addon
	'Random_pic' => 'Slumpmässig Bild', // Album Addon
	'Click_enlarge_pic' => 'Klicka på bilden för att förstora den',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => 'Senast Använd IP',
	'Last_Used_OS' => 'OS',
	'Last_Used_Browser' => 'Webbläsare',
	'Last_Used_Referer' => 'Referrer',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
	'Users_Admins' => 'Administratörer',
	'Users_Mods' => 'Moderatorer',
	'Users_Global_Mods' => 'Globala Moderatorer',
	'Users_Regs' => 'Användare',
	'Users_Guests' => 'Gäster',
	'Users_Hidden' => 'Dold',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Fast' => 'Snabb',
	'Standard' => 'Standard',
	'Style' => 'Stil',
	'User_Contacts' => 'Kontakter',
	'Memberlist_Users_Display' => 'Användare per sida:',
	'Sort_LastLogon' => 'Senaste Inloggning',
	'Sort_Birthday' => 'Födelsedag',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => 'Personal',
	'Rank' => 'Värdera',
	'Rank_Header' => 'Värdering',
	'Rank_Image' => 'Värdera Bild',
	'Rank_Posts_Count' => 'Automatisk värdering genom inlägg',
	'Rank_Days_Count' => 'Automatisk värdering genom dagar',
	'Rank_Min_Des' => 'Minimum meddelanden/dagar',
	'Rank_Min_M' => 'Minimum Meddelanden',
	'Rank_Max_M' => 'Max Meddelanden',
	'Rank_Min_D' => 'Minimum Dagar',
	'Rank_Max_D' => 'Max Dagar',
	'Rank_Special' => 'Speciell Värdering',
	'Rank_Special_Guest' => 'Speciell Värdering För Gäster',
	'Rank_Special_Banned' => 'Speciell Värdering För Bannlysta',
	'Current_Rank_Image' => 'Nuvarande värderings bild',
	'No_Rank' => 'Ingen värdering tilldelad',
	'No_Rank_Image' => 'Ingen värderings bild',
	'No_Rank_Special' => 'Ingen speciell värdering tilldelad',
	'Memberlist_Administrator' => 'Administratör',
	'Memberlist_Moderator' => 'Moderator',
	'Memberlist_User' => 'Användare',
	'Guest_User' => 'Gäst',
	'Banned_User' => 'Bannlyst',
	'Rank1_title' => 'Värdering 1 Titel',
	'Rank2_title' => 'Värdering 2 Titel',
	'Rank3_title' => 'Värdering 3 Titel',
	'Rank4_title' => 'Värdering 4 Titel',
	'Rank5_title' => 'Värdering 5 Titel',
// Mighty Gorgon - Multiple Ranks - END
// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => 'Meny',
	'MAIN_LINKS' => 'Huvud Länkar',
	'TOOLS_LINKS' => 'Verktyg',
	'NEWS_LINKS' => 'Nyheter',
	'USERS_LINKS' => 'Användare &amp; Grupper',
	'INFO_LINKS' => 'Info',
	'SPONSORS_LINKS' => 'Sponsorer',
	'HelpDesk' => 'Help Desk',
	'AvatarGenerator' => 'Avatar Generator',
	'DBGenerator' => 'SQL till PHP Generator ',
	'NEWS_CAT' => 'Nyhets Kategorier',
	'NEWS_ARC' => 'Nyhets Arkiv',
// Mighty Gorgon - Nav Links - END
	'Activity' => 'Spel',
	'Games' => 'Spel',
	'Trohpy' => 'Spel Troféer',
	'quick_links_games' => 'Spel Meny',

	'By' => 'Av',
	'No_Icon_Image' => 'Ingen Ikon',
	'Change_Style' => 'Stil',
	'Change_Lang' => 'Språk',
	'Permissions_List' => 'Rättighets Lista',
	'IP_TEAM' => 'Icy Phoenix Team',

//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',
	'WeatherForecast' => 'Väderprognos',
	'ErrorNotFound' => 'Filen hittades inte!',
	'MGC_Users_Online' => 'MGC Användare Online',
	'MGC_User_Servertime' => 'Datum',
	'MGC_User_Nickname' => 'Alias',
	'MGC_User_Server' => 'Server',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'MGC Version',

	'Country_Flag' => 'Land Flagga',
	'Select_Country' => 'Välj Land',
	'Extra_profile_info' => 'Extra Profil Information',
// 'Extra_profile_info_explain' => 'You can add extra information about yourself or about your hobbies. You can also add photos. You can use some bbcodes as when you post or make your signature. There is a <b>%d</b> character limit (if 0 then no limit)',
	'Extra_profile_info_explain' => 'Du kan lägga till extra information om dig själv eller om din hobby. Du kan även lägga till foto. Du kan använda någon bbkoder när du gör inlägg eller skapar din signatur.',
	'Extra_window' => 'Öppnar i separat fönster',
	'Extra_too_long' => 'Ditt extra fält är för långt (max. <b>%d</b> tecken är tillåtna)',
	'UserLike' => 'Användare gillar',
	'UserDisLike' => 'Användare gillar inte',
	'UserLikeIns' => 'Tre saker du gillar',
	'UserDisLikeIns' => 'Tre saker som du inte gillar',
	'UserPhone' => 'Telefon Nummer',
	'UserSport' => 'Sport/Team',
	'UserMusic' => 'Musik/Grupper',
	'UserNoInfo' => 'Ingen Information Tillgänglig',
	'Last_Seen' => 'Senast Online',
// New MG - END

// MG CMS - BEGIN
	'CMS_Title' => 'CMS',
	'CMS_Management' => 'CMS Management',
	'CMS_Config' => 'CMS Konfiguration',
	'CMS_ACP' => 'Redigera Denna Sida',
	'CUSTOM_PAGE' => 'Anpassa Sida',
// MG CMS - END

// Icy Phoenix - BUILD 001
	'SimilarTopics' => 'Liknande Ämnen',
	'Chat' => 'Chat',
	'Digests' => 'Sammandrag',

	'CPL_REG_INFO_EXPLAIN' => 'Användarnamn, e-postadress och lösenord',
	'CPL_PROFILE_INFO_EXPLAIN' => 'Allmän kontaktinformation, Messenger, födelsedagar, intressen och annan information',
	'CPL_PROFILE_VIEWED_EXPLAIN' => 'Användare som granskat din profil',
	'CPL_AVATAR_PANEL_EXPLAIN' => 'Avatar är en liten bild som du kan länka till ditt namn',
	'CPL_SIG_EDIT_EXPLAIN' => 'Din Signatur: du kan definiera lite text som ska bifogas längst ner i dina inlägg',
	'CPL_PREFERENCES_EXPLAIN' => 'Allmänna önskemål om inlägg och lästa meddelanden',
	'CPL_BOARD_SETTINGS_EXPLAIN' => 'Globala inställningar angående tid, mallar och språk',
	'Calendar_settings_EXPLAIN' => 'Inställningar om kalender boxen',
	'Hierarchy_setting_EXPLAIN' => 'Inställningar om underforum och ämnen typ dela',
	'LOGIN_SEC_EXPLAIN' => 'Om detta avsnitt är aktiverat kan du bevaka alla inloggningar i ditt användarnamn',
	'CPL_OWN_POSTS_EXPLAIN' => 'Sök dina egna inlägg',
	'CPL_OWN_PICTURES_EXPLAIN' => 'Besök ditt personliga galleri',
	'CPL_INBOX_EXPLAIN' => 'Inkorg: innehåller de privata meddelanden som du har fått',
	'CPL_SAVEBOX_EXPLAIN' => 'Sparade Meddelanden: innehåller de privata meddelanden som du har sparat',
	'CPL_OUTBOX_EXPLAIN' => 'Utkorg: innehåller de privata meddelanden som du har skickat, men som inte har lästs ännu',
	'CPL_SENTBOX_EXPLAIN' => 'Skicka Korg: innehåller de privata meddelanden som du har skickat och som har lästs',
	'CPL_BOOKMARKS_EXPLAIN' => 'Alla bokmärken som du har tilldelats för inlägg',
	'WATCHED_TOPICS_EXPLAIN' => 'En lista över alla de ämnen som du bevakar',
	'CPL_SUBSCFORUMS_EXPLAIN' => 'De forum som du prenumererar på för anmälningar om nya ämnen',
	'DIGESTS_EXPLAIN' => 'Sammandrag är återkommande e-post som skickas automatiskt med ett utdrag av de nya inläggen i forumet',
	'DRAFTS_EXPLAIN' => 'Hantera dina Utkast',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Shoutbox',
	'Ajax_Chat' => 'Chat',
	'Ajax_Archive' => 'Chat Arkiv',
	'Shoutbox_flooderror' => 'Du kan inte shout så fort efter ditt senaste shout. Försök igen om en stund.',
	'Shoutbox_no_auth' => 'Tyvärr, Endast registrerade användare kan använda shoutbox',
	'Shoutbox_loading' => 'Laddar Shoutbox...',
// Errors
	'Shoutbox_unable' => 'Tyvärr, åtgärden kunde inte göras. Vänligen försök igen.',
	'Shoutbox_empty' => 'Inga meddelanden i databasen',
	'Shoutbox_no_mode' => 'Inget giltigt mode anges',
// Archive
	'Shouts' => 'Shouts',
	'Statistics' => 'Statistik',
	'Total_shouts' => 'Totala Shouts',
	'Stored_shouts' => 'Lagrade Shouts',
	'My_shouts' => 'Mina Shouts',
	'Today_shouts' => 'Shouts de senaste 24 timmarna',
	'Top_Ten_Shouters' => 'Topp Tio Shouters',
// Online list
	'Online_total' => 'Totalt',
	'Online_registered' => 'Användare',
	'Online_guests' => 'Gäster',
	'Who_is_Chatting' => 'Vem Chattar',
	'Shoutbox_online_explain' => 'Informationen är baserad på aktiva användare under de senaste trettio sekunder',
// Ajax Shoutbox - END

	'Contact_us' => 'Kontakta Oss',
	'Contact_us_explain' => 'Med den här sidan kan du skicka oss e-post meddelande',
	'Session_invalid' => 'Ogiltig Session. Var snäll och skicka formuläret igen.',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => ' det här användarnamnet är för kort',
	'Reg_Username_Long' => ' det här användarnamnet är för långt',
	'Reg_Username_Taken' => ' det här användarnamnet är inte tillgängligt',
	'Reg_Username_Free' => ' det här användarnamnet är tillgängligt',
	'Reg_PWD_Short' => 'Detta lösenord är för kort',
	'Reg_PWD_Easy' => 'Detta lösenord är alltför lätt',
	'Reg_PWD_OK' => 'Detta lösenord är ok',
	'Reg_Email_Invalid' => ' den här e-postadressen är ogiltig eller är redan i db',
	'Reg_Email_OK' => ' den här e-postadressen är ok',

// Moved here from lang_adv_time.php
	'time_mode' => 'Tids hantering',
	'time_mode_text' => 'DST skillnaden är skillnaden mellan sommartiden och normal tid för ditt land (från 0 till 120 minuter, typiskt 60).<br /><br /><strong> * Modulen markerad med en asterisk används som standard i detta forum och rekommenderas av dess administratör. </strong>',
	'time_mode_auto' => 'Automatisk modes...',
	'time_mode_full_pc' => 'Din Dators tid',
	'time_mode_server_pc' => 'Serverns allmänna tid, Tidszon/DST<br /><span STYLE="margin-left: 25">från din dator</span>',
	'time_mode_full_server' => 'Serverns lokala tid',
	'time_mode_manual' => 'Manuell mode...',
	'time_mode_dst' => 'DST aktiverad',
	'time_mode_dst_server' => 'Genom servern',
	'time_mode_dst_time_lag' => 'DST skillnad',
	'time_mode_dst_mn' => 'min',
	'time_mode_timezone' => 'Tidszon',

	'dst_time_lag_error' => 'skillnads värde fel. Du måste skriva ett antal minuter mellan 0 och 120.',

	'dst_enabled_mode' => ' [DST aktiverad]',
	'full_server_mode' => 'Tid synkroniseras med forumets servertid',
	'server_pc_mode' => 'Tid synkroniserad. med servern - Tidszon / DST med datorn',
	'full_pc_mode' => 'Tid synkroniseras med datorns tid',

	'Smileys_Per_Page' => 'Smileys Per Sida',

/* lang_site_hist.php - BEGIN */
	'Site_history' => 'Sajtens historia',
	'Month' => 'Månad',
	'Week_day' => 'Veckodag',
	'Not_availble' => 'Ej tillgängligt',
	'Total_users' => 'Max användare',
	'Reg_users' => 'Registrerade användare',
	'Hidden_users' => 'Dolda användare',
	'Guests_users' => 'Gäst användare',
	'New_users' => 'Nya användare',
	'New_topics' => 'Nya ämnen',
	'New_posts_reply' => 'Inlägg/Svar',
	'Most_online' => 'Mest online-användare %s',
	'Most_online_week' => 'Mest online-användare de senaste 7 dagarna',
	'Last_24' => 'Mest online-användare de senaste %s Timmarna',
	'Top_Posting_Users' => 'Topp inläggs användare',
	'Top_Posting_Users_week' => 'Topp inläggs användare denna vecka [%s]',
	'Rank' => 'Rank',
	'Percent' => 'Procent',
	'Graph' => 'Diagram',
	'Top_Visiting_Users' => 'Mest Tid Användare',
/* lang_site_hist.php - END */

/* lang_referrers.php - BEGIN */
	'Referrers_Title' => 'Http Hänvisnings Management',
	'Referrers_Cleared' => 'Hänvisning Rensad',
	'Referrers_Clear' => 'Radera Alla',
	'Click_Return_Referrers' => 'Klicka %sHär%s för att återgå till Hänvisning',
	'Referrers' => 'Http Hänvisning',
	'Referrer_host' => 'Hänvisning\'s Värd',
	'Referrer_url' => 'Hänvisning\'s Url',
	'Referrer_ip' => 'Hänvisning\'s IP',
	'Referrer_hits' => 'Träffar',
	'Referrer_first' => 'Första Besök',
	'Referrer_last' => 'Senaste Besök',
	'Viewing_Referrers' => 'Granskar Hänvisning',
/* lang_referrers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_Days' => '%d Dagar',
	'X_Weeks' => '%d Veckor',
	'X_Months' => '%d Månader',
	'X_Years' => '%d År',

	'Confirm_delete_user' => 'Är du verkligen säker på att du vill ta bort den här användaren?',
	'Prune_no_users' => 'Ingen användare raderad',
	'Prune_users_number' => 'Följande %d användare var raderade:',

	'Prune_user_list' => 'Användare som vill tas bort',
	'Prune_on_click' => 'Du håller på att ta bort %d users. användare. Är du säker?',
	'Prune_Action' => 'Klicka på länken nedan för att verkställa',
	'Prune_users_explain' => 'Reducera användare!. Från denna sida kan du rensa användare. Du kan välja en av tre länkar: ta bort gamla användare som aldrig har postat, ta bort gamla användare som aldrig har loggat in, radera användare som aldrig har aktiverat sitt konto.<p/><b>Notera:</b> Det finns ingen ångra-funktion.',
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => 'Avatar Generator',
	'Available' => 'Tillgängliga Avatars',
	'Random' => 'Slumpmässigt',
	'Avatar_Text' => 'Vänligen ange texten du vill ha på din Avatar:',
	'Avatar_Preview' => 'Förhandsgranska Avatar',
	'Your_Avatar' => 'Din Avatar',
	'Submit_Avatar' => 'Skicka in avatar',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Upload_Image_Local' => 'Ladda upp Bild',
	'Uploaded_Images_Local' => 'Uppladdade Bilder',
	'Upload_Image_Local_Explain' => 'Välj den fil som ska laddas upp',
	'Uploaded_Image_Success' => 'Bilden har lagts upp successfullt.',
	'Uploaded_Image_BBC' => 'Du kan använda denna BBKod för att lägga upp den här bilden.',
	'Upload_Image_Empty' => 'Du kan inte ladda upp luft ... du vet!',
	'Upload_File_Too_Big' => 'Filen du försöker ladda upp är för stor! Max tillåtna storlek:',
	'Upload_File_Type_Allowed' => 'Endast dessa filtyper kan laddas upp',
	'Upload_Insert_Image' => 'Sätt In BBKod',
	'Upload_Close' => 'Stäng',
	'BBCode' => 'BBKod',
	'HTML' => 'HTML',

	'No_News' => 'Inga Nyheter',

	'Email_confirm' => 'Bekräfta din e-postadress',
	'Email_mismatch' => 'E-post adressen du har angett stämmer inte överens.',

	'View_ballot' => 'Visa Ballot',
	'Full_edit' => 'Ändra till full redigerings form',
	'Save_changes' => 'Spara',
	'No_subject' => '(Inga föremål)',
	'Edit_quick_post' => 'Snabb-redigera det här inlägget',
	'AJAX_search_results' => 'En snabb sökning har funnit %s ämnen med nyckelorden i ditt ämnes titel. Klicka här för att visa detta ämne',
	'AJAX_search_result' => 'En snabb sökning har hittat ett ämne med nyckelorden i ditt ämnes titel. Klicka här för att visa detta ämne',
	'More_matches_username' => 'Mer än ett användarnamn matchade din sökning. Välj en användare från rutan ovan.',
	'No_username' => 'Du måste ange ett användarnamn.',
	'AJAX_quick_search_results' => 'En snabb sökning har funnit %s ämnen med nyckelorden.<br />På höger sida kan du se de första resultaten.<br />Klicka på SÖK för att få den fullständiga resultatlistan.',
	'AJAX_quick_search_result' => 'En snabb sökning har hittat ett ämne med nyckelorden.<br />På höger sida kan du se resultatet.',

	'Icon_Description' => 'Ikon Beskrivning',

	'Feature_Disabled' => 'Den här funktionen är inaktiverad.',

// Resend Activation - BEGIN
	'Resend_activation_email' => 'Återsänd aktiverings e-post',
	'Invalid_activation' => 'Användar konto aktivering kan endast utföras av administratörer.',
	'No_actkey' => 'Det finns ingen aktiveringsnyckel för ditt konto. Vänligen kontakta forumets administratör för mer information.',
	'Send_actmail_flood_error' => 'Du kan inte göra en ny ansökan så snart efter din sista, vänligen försök igen om en stund.',
	'Resend_activation_email_done' => 'Aktiverings e-post meddelandet har skickats. Vänligen kontrollera din e-post för ytterligare information.',
// Resend Activation - END

	'Bots_Group' => 'Bots',
	'Bots_Color' => 'Bots Färg',
	'Active_Users_Group' => 'Aktiva Användare',
	'Active_Users_Color' => 'Aktiva Användares Färg',
	'Group_Default_Membership' => 'Standard Grupp',
	'Group_Default_Membership_Explain' => 'Välj standardgruppen för användare att tilldela rank och färg.',
	'User_Color' => 'Användare Färg',
	'User_Color_Explain' => 'Om du anger en färg för den här användaren kommer detta att vara överdskrivit av standardgruppens färg om du anger en grupp i rutan ovan. Använd hex koden utan <b>#</b> exempel: ff0000 är koden för RÖD.',
	'No_Groups_Membership' => 'Inget Medlemskap',
	'No_Default_Group' => 'Ingen Standard Grupp',
	'Group_members_updated' => 'Successfullt uppdaterad gruppmedlem.',
	'Colorize_All' => 'Färgsätt Alla Medlemmarna',
	'Colorize_Selected' => 'Färgsättning Valda',

	'CompanyWho' => 'Företaget',
	'CompanyWhere' => 'Hur Du Når Oss',
	'CompanyServices' => 'Tjänster',
	'CompanyProducts' => 'Produkter',

	'ShareThisTopic' => 'Dela detta ämne',

	'Remove_cookies' => 'Ta bort cookies från denna webbplats',
	'Cookies_deleted' => 'Alla cookies har nu raderats. Du är nu utloggad.<br />För att slutföra raderingen måste du stänger din webbläsare nu.',
	'Delete_cookies' => 'Radera Cookies',
	'cookies_confirm' => 'Är du säker på att du vill ta bort alla cookies från denna webbplats?<br /><br />Denna åtgärd kommer också att logga ut dig.',

	'CustomIcy' => 'CustomIcy',

	'Drafts' => 'Utkast',
	'Drafts_Action' => 'Åtgärd',
	'Drafts_Save' => 'Spara',
	'Drafts_Load' => 'Ladda',
	'Drafts_Saved' => 'Detta utkast har sparats',
	'Drafts_Loaded' => 'Utkast laddas',
	'Drafts_No_Drafts' => 'Inget utkast sparat',
	'Drafts_Delete_Sel' => 'Radering valt',
	'Drafts_Save_Question' => '<br /><br />Är du säker på att du vill spara detta meddelandet som ett utkast?<br /><br />Observera att endast meddelandetexten kommer att sparas medan alla andra inställningar kommer att slängas.',
	'Drafts_Delete_Question' => '<br /><br />Är du säker på att du vill ta bort de valda utkasten?',
	'Drafts_Type' => 'Utkast Typ',
	'Drafts_Subject' => 'Utkast Ämne',
	'Drafts_NT' => 'Nytt ämne',
	'Drafts_NM' => 'Svara',
	'Drafts_NPM' => 'Privat Meddelande',

	'CannotEditAdminsPosts' => 'Du kan inte ändra admins inlägg',
	'Random_Number' => 'Slumpmässigt Nummer',

	'New_download' => 'En ny nedladdning var upplagd eller uppdaterad.<br />Klicka %shär%s för att visa det.',
	'Dl_bug_tracker' => 'Bug Tracker',
	'Downloads_ADV' => 'Nedladdnings ADV',

	'TopicUseful' => 'Var detta ämne användbart?',
	'Article' => 'Artikel',
	'Comments' => 'Kommentarer',

	'Sitemap' => 'Sidokarta',

	'Delete_My_Account' => 'Radera Konto',
	'Delete_My_Account_Explain' => 'Om du vill ta bort ditt konto på denna webbplats kan du skicka en begäran med hjälp av detta formulär och inaktiverar ditt konto så snart som möjligt.<br />Ange "Konto Radering" i ämnesraden och (om du vill) skriva en anledningen i några få ord.',

	'KB_MODE_ON' => 'Aktivera KB mode',
	'KB_MODE_OFF' => 'Inaktivera KB mode',

	'Go_To_Page_Number' => 'Gå till sidan',

	'Admin_Emails' => 'Administratörer kan maila mig information',
	'Allow_PM_IN' => 'Tillåt användare att skicka mig privata meddelanden',
	'Allow_PM_IN_Explain' => 'Observera att system administratörer, moderatorer och vänner kommer alltid att kunna skicka meddelanden till dig.',
	'Allow_PM_IN_SEND_ERROR' => 'Användaren du försöker skicka PM till kunde inte ta emot ditt meddelande eftersom han/hon beslutat att inte ta emot Privata Meddelanden.',

// 'UCP_ZEBRA' => 'Friends &amp; Foes',
	'UCP_ZEBRA' => 'Vänner Management',
	'UCP_ZEBRA_FOES' => 'Hantera Fiender',
	'UCP_ZEBRA_FRIENDS' => 'Hantera Vänner',

	'ADD_FOES' => 'Lägg till nya fiender',
	'ADD_FOES_EXPLAIN' => 'Du kan ange flera användarnamn på en annan linje.',
	'YOUR_FOES' => 'Dina fiender',
	'YOUR_FOES_EXPLAIN' => 'Om du vill ta bort användarnamn markera dem och klicka på skicka.<br />Tips: använd CTRL för att markera/avmarkera flera objekt.',
	'FOE_MESSAGE' => 'Meddelande från fiende',
	'FOES_EXPLAIN' => 'Fiender är användarna som kommer att ignoreras som standard. Inlägg av dessa användare kommer inte att vara fullt synliga. Personliga meddelanden från fiender är fortfarande tillåtna. Observera att du inte kan ignorera moderatorer eller administratörer.',
	'FOES_UPDATED' => 'Din fiende lista har uppdaterats successfullt.',
	'FOES_UPDATE_ERROR' => 'Dina fiender listan har INTE uppdaterats.',
	'NO_FOES' => 'Inga fiender definieras närvarande',

	'ADD_FRIENDS' => 'Lägg till nya vänner',
	'ADD_FRIENDS_EXPLAIN' => 'Du kan ange flera användarnamn var och ett på en annan linje.',
	'YOUR_FRIENDS' => 'Dina vänner',
	'YOUR_FRIENDS_EXPLAIN' => 'Om du vill ta bort användarnamn markera dem och klicka på Skicka.<br />Tips: använd CTRL för att markera/avmarkera flera objekt.',
	'FRIEND_MESSAGE' => 'Meddelande från en vän',
	'FRIENDS' => 'Vänner',
	'FRIENDS_EXPLAIN' => 'Vänner kan ge dig snabb tillgång till medlemmar du kommunicera med ofta. Om mallen har relevant support stödjs alla inlägg som gjorts av en vän kan vara markerat.',
	'FRIENDS_UPDATED' => 'Dina vänner-listan har uppdaterats framgångsrikt.',
	'FRIENDS_UPDATE_ERROR' => 'Dina vänners lista har INTE uppdaterats.',
	'FRIENDS_ONLINE' => 'Online',
	'FRIENDS_HIDDEN' => 'Dolda',
	'FRIENDS_OFFLINE' => 'Offline',
	'NO_FRIENDS' => 'Inga vänner definieras närvarande',
	'NO_FRIENDS_OFFLINE' => 'Inga vänner offline',
	'NO_FRIENDS_ONLINE' => 'Inga vänner online',

	'Default' => 'Standard',

	'Reserved_Author' => '[ DOLT ]',
	'Reserved_Topic' => '[ RESERVERAT ÄMNE ]',
	'Reserved_Post' => '[ RESERVERATD INLÄGG ]',

	'THANKS_RECEIVED' => 'Tack mottagits',

	'RECENT_USER_ACTIVITY' => 'Senaste användar aktivitet',
	'USER_TOPICS_STARTED' => 'Ämnen startat',
	'USER_POSTS' => 'Inlägg skrivna',
	'USER_TOPICS_VIEWS' => 'Ämnen granskade',
	'RECENT_USER_STARTED_TITLE' => 'startat av %s',
	'RECENT_USER_STARTED_NAV' => 'Ämnen startat av %s',
	'RECENT_USER_POSTS_TITLE' => 'med %s inlägg i',
	'RECENT_USER_POSTS_NAV' => 'Ämnen med %s inlägg i',
	'RECENT_USER_VIEWS_TITLE' => 'granskat av %s',
	'RECENT_USER_VIEWS_NAV' => 'Ämnen granskat av %s',

	'WARN_NO_BUMP' => 'Du är den sista postaren i detta ämne: du kan inte skriva nya inlägg inom 24 timmar från det senaste inlägget om inte någon annan svarar under tiden.',

	'LINK_THIS_TOPIC' => 'Länka detta ämne',
	'LINK_URL' => 'URL',
	'LINK_BBCODE' => 'BBKod',
	'LINK_HTML' => 'HTML',

	'NEWS_POSTED' => 'Bläddra inlagda nyheter',
	'TOPICS_POSTED' => 'Sök ämnen startade',
	'POSTS_POSTED' => 'Sök alla användar inlägg',

	'ACCOUNT_DELETION_REQUEST' => 'Användare %s uppmanas att radera kontot.',

	'SORT_TOPICS' => 'Sortera ämnen',
	'SORT_TOPICS_NEWEST' => 'Nyaste',
	'SORT_TOPICS_OLDEST' => 'Äldsta',

	'EDIT_POST_DETAILS' => 'Redigera Post Detaljer',
	'CURRENT_POSTER' => 'Aktuella Poster',
	'NEW_POSTER' => 'Nya Poster',
	'DETAILS_CHANGED' => '<b>Post detaljer har ändrats successfullt.</b></span><br /><span class="postdetails">Detta fönster stängs efter 3 sekunder.',

	'Redirect' => 'Omdirigera ',
	'Redirect_to' => 'Om din webbläsare inte stöder meta omdirigering klicka %sHÄR% för att bli omdirigerad',

	'InProgress' => 'I progress',

	'HAPPY_BIRTHDAY' => 'Grattis på Födelsedagen',
	
    'DOWNLOAD' => 'Ladda ner',
	'DOWNLOADED' => 'Nerladdade',
	'FILESIZE' => 'Filstorlek',
	'FILENAME' => 'Filnamn',
	'FILE_NOT_AUTH' => 'Du har inte behörighet att ladda ner denna fil',
	'SHOW_POSTS_FROM' => 'Visa inlägg från',
	'SHOW_POSTS_TO' => 'till',

	'SEE_MORE_DETAILS' => 'Se fler detaljer...',
	'UNKNOWN' => 'Okänd',
	'MASS_PM' => 'Mass PM',
	'TEXT_FORMAT' => 'Format',
	'SENDER' => 'Avsändare',
	'PM_NOTIFICATION' => 'Hej,<br /><br />Du har fått ett nytt privat meddelande till ditt konto på "{SITENAME}".<br /><br />Du kan granska dina nya meddelanden genom att klicka på följande länk:<br /><br />{U_INBOX}<br /><br />',

	'GSEARCH' => 'Google Sökning',
	'GSEARCH_ENGINE' => 'Använd Google Sökmotor',
	'SEARCH_WHAT' => 'Söka vad',
	'SEARCH_WHERE' => 'Söka var',
	'SEARCH_THIS_FORUM' => 'Sök i detta forum...',
	'SEARCH_THIS_TOPIC' => 'Sök i detta topic...',
	'VF_ALL_TOPICS' => 'Alla Ämnen',
	
	'WHITE_LIST_MESSAGE' => 'Denna webbplats kräver konto bekräftelse via e-post. Vänligen kontrollera att denna domän är i vit-listan över dina antispam eller du kunde aldrig få aktiverings meddelande.',
	'CLICK_RETURN_HOME' => 'Klicka %sHär%s för att återgå till Hem Sidan',

	'WEEK_DAY_SUNDAY' => 'Söndag',
	'WEEK_DAY_MONDAY' => 'Måndag',
	'WEEK_DAY_TUESDAY' => 'Tisdag',
	'WEEK_DAY_WEDNESDAY' => 'Onsdag',
	'WEEK_DAY_THURSDAY' => 'Torsdag',
	'WEEK_DAY_FRIDAY' => 'Fredag',
	'WEEK_DAY_SATURDAY' => 'Lördag',

	'RATINGS' => 'Värdering',

	'ERROR_TABLE' => 'Kunde inte query %s tabell',

	'SMILEYS' => 'Smileys',
	'SMILEYS_NO_CATEGORIES' => 'Inga kategorier definierade',
	'SMILEYS_CATEGORY' => 'Kategori',
	'SMILEYS_GALLERY' => 'Smileys Gallery',
	'SMILEYS_STANDARD' => 'Standard Smileys',

	'QUICK_LIST' => 'Full Lista',
	'NORMAL_LIST' => 'Normal Lista',
	
	'RETURN_PAGE' => '%sGå tillbaka till föregående sida%s',
	'FILE_NOT_FOUND' => 'Fil kunde ej hittas',
	'FSOCK_DISABLED' => 'FSOCK Avaktiverad',

	'MANAGEMENT' => 'Management',
	'SORT_ORDER' => 'Sortera efter',
	'SORT_DIR' => 'Sorterings riktning',

	'TIME_YEAR' => 'År',
	'TIME_MONTH' => 'Månad',
	'TIME_DAY' => 'Dag',
	'TIME_HOUR' => 'Timme',
	'TIME_MINUTE' => 'Minuter',
	'TIME_SECOND' => 'Sekund',

	'CONTACTS' => 'Kontakter',
	
	// Event Registration - BEGIN
	'Reg_Title' => 'Evenemangs Registrering',
	'Post_Registration' => 'Evenemangs Registrering',
	'Add_registration' => 'Lägg Till Evenemangs Registrering',
	'Add_reg_explain' => '&nbsp;&bull; Kontrollera <i>Aktivera</i> för att visa ett registreringsformulär med det här inlägget. Avmarkera för att dölja det.<br />&nbsp;&bull; Kontrollera <i>Återställ</i> för att ta bort alla aktuella registreringar för detta formulär.<br />&nbsp;&bull; Ange ett antal i <i>Slots</i> för att begränsa registreringar för ett alternativ. "0" eller tom = obegränsad.',
	'reg_activate' => 'Aktivera',
	'reg_reset' => 'Återställ',
	'Reg_Insert' => 'Du registrerade för evenemanget.',
	'Reg_Change' => 'Registrering ändrad.',
	'Reg_Confirm' => 'Registrering bekräftad.',
	'Reg_Unregister' => 'Registrering förfallen.',
	'Reg_Max_Registrations' => 'Det högsta antalet av registreringar för det här alternativet är nådd. Inga fler anmälningar tas emot.',
	'Reg_No_Slots_Left' => 'Inga tider kvar att registrera.',
	'Reg_One_Slot_Left' => 'One slot left to register.',
	'Reg_Slots_Left' => '%s slots left to register.',
	'Reg_Self_Unregister' => 'Avregistrera',
	'Reg_Own_Confirmation' => 'Bekräftelse',
	'Reg_Own_Confirmed' => 'bekräftade',
	'Reg_Green_Option' => 'Grönt Alternativ',
	'Reg_Blue_Option' => 'Blått Alternativ',
	'Reg_Red_Option' => 'Rött Alternativ',
	'Reg_Value_Max_Registrations' => 'Slots',
	'Reg_Do' => 'Anmäl Dig',
	'Reg_Maybe' => 'Ej Säker',
	'Reg_Dont' => 'Inte Denna Gång',
	'Reg_Head_Username' => 'Användare:',
	'Reg_Head_Time' => 'Datum:',
	'Reg_for' => 'Kär registrering för',
	'Reg_for_explain' => '[ Ange 0 eller lämna blank för en oändligg registrering ]',
	'Reg_no_options_specified' => 'Du måste ange minst ett alternativ att registrera dig för.',
	'Reg_event_date' => '<b>Evenemangs datum: </b>',
	// Event Registration - END
	
	'REPLY_PREFIX_OLD' => 'Re: ',
	'REPLY_PREFIX' => 'Re: ',
	
	'READ_ONLY_FORUM' => 'Vi beklagar, men nu är forumet inställt på <b> LÄS BARA </ b> mode vilket innebär att du kan inte skicka även om du har rätt till det. Försök igen senare. ',

	)
);

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

$lang['Prune_commands'] = array();

// here you can make more entries if needed
$lang['Prune_commands'][0] = 'Prune non-posting users';
$lang['Prune_explain'][0] = 'Who have never posted, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][1] = 'Prune inactive users';
$lang['Prune_explain'][1] = 'Who have never logged in, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][2] = 'Prune non-activated users';
$lang['Prune_explain'][2] = 'Who have never been activated, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][3] = 'Prune long-time-since users';
$lang['Prune_explain'][3] = 'Who have not visited for 60 days, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][4] = 'Prune not posting so often users';
$lang['Prune_explain'][4] = 'Who have less than an average of 1 post for every 10 days while registered, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][5] = 'Prune non-posting and non-visiting users';
$lang['Prune_explain'][5] = 'Who have never posted and not visited recently, <b>excluding</b> new users from the past %d days';

// Timezones - BEGIN
$lang['All_times'] = 'All tid är %s'; // eg. All times are GMT - 12 Hours (times from next block)

// Time zones short
$lang['tzs']['-12'] = 'GMT - 12 Timmar';
$lang['tzs']['-11'] = 'GMT - 11 Timmar';
$lang['tzs']['-10'] = 'GMT - 10 Timmar';
$lang['tzs']['-9'] = 'GMT - 9 Timmar';
$lang['tzs']['-8'] = 'GMT - 8 Timmar';
$lang['tzs']['-7'] = 'GMT - 7 Timmar';
$lang['tzs']['-6'] = 'GMT - 6 Timmar';
$lang['tzs']['-5'] = 'GMT - 5 Timmar';
$lang['tzs']['-4'] = 'GMT - 4 Timmar';
$lang['tzs']['-3.5'] = 'GMT - 3.5 Timme';
$lang['tzs']['-3'] = 'GMT - 3 Timmar';
$lang['tzs']['-2'] = 'GMT - 2 Timmar';
$lang['tzs']['-1'] = 'GMT - 1 Timme';
$lang['tzs']['0'] = 'GMT';
$lang['tzs']['1'] = 'GMT + 1 Timme';
$lang['tzs']['2'] = 'GMT + 2 Timmar';
$lang['tzs']['3'] = 'GMT + 3 Timmar';
$lang['tzs']['3.5'] = 'GMT + 3.5 Timme';
$lang['tzs']['4'] = 'GMT + 4 Timmar';
$lang['tzs']['4.5'] = 'GMT + 4.5 Timme';
$lang['tzs']['5'] = 'GMT + 5 Timmar';
$lang['tzs']['5.5'] = 'GMT + 5.5 Timme';
$lang['tzs']['6'] = 'GMT + 6 Timmar';
$lang['tzs']['6.5'] = 'GMT + 6.5 Timme';
$lang['tzs']['7'] = 'GMT + 7 Timmar';
$lang['tzs']['8'] = 'GMT + 8 Timmar';
$lang['tzs']['9'] = 'GMT + 9 Timmar';
$lang['tzs']['9.5'] = 'GMT + 9.5 Timme';
$lang['tzs']['10'] = 'GMT + 10 Timmar';
$lang['tzs']['11'] = 'GMT + 11 Timmar';
$lang['tzs']['12'] = 'GMT + 12 Timmar';
$lang['tzs']['13'] = 'GMT + 13 Timmar';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12 Hours) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11 Hours) Midway Island, Samoa';
$lang['tz']['-10'] = '(GMT -10 Hours) Hawaii';
$lang['tz']['-9'] = '(GMT -9 Hours) Alaska';
$lang['tz']['-8'] = '(GMT -8 Hours) Pacific Time (US & Canada)';
$lang['tz']['-7'] = '(GMT -7 Hours) Mountain Time (US & Canada)';
$lang['tz']['-6'] = '(GMT -6 Hours) Central Time (US & Canada), Mexico City';
$lang['tz']['-5'] = '(GMT -5 Hours) Eastern Time (US & Canada), Bogota, Lima, Quito';
$lang['tz']['-4'] = '(GMT -4 Hours) Atlantic Time (Canada), Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3.5 Hours) Newfoundland';
$lang['tz']['-3'] = '(GMT -3 Hours) Brazil, Buenos Aires, Georgetown';
$lang['tz']['-2'] = '(GMT -2 Hours) Mid-Atlantic';
$lang['tz']['-1'] = '(GMT -1 Hour) Azores, Cape Verde Islands';
$lang['tz']['0'] = '(GMT) Western Europe Time, London, Lisbon, Casablanca, Monrovia';
$lang['tz']['1'] = '(GMT +1 Hour) CET(Central Europe Time), Brussels, Madrid, Paris';
$lang['tz']['2'] = '(GMT +2 Hours) EET(Eastern Europe Time), Kaliningrad, South Africa';
$lang['tz']['3'] = '(GMT +3 Hours) Baghdad, Kuwait, Riyadh, Moscow, St. Petersburg';
$lang['tz']['3.5'] = '(GMT +3.5 Hours) Tehran';
$lang['tz']['4'] = '(GMT +4 Hours) Abu Dhabi, Muscat, Baku, Tbilisi';
$lang['tz']['4.5'] = '(GMT +4.5 Hours) Kabul';
$lang['tz']['5'] = '(GMT +5 Hours) Ekaterinburg, Islamabad, Karachi, Tashkent';
$lang['tz']['5.5'] = '(GMT +5.5 Hours) Bombay, Calcutta, Madras, New Delhi';
$lang['tz']['5.75'] = '(GMT +5.75 Hours) Kathmandu';
$lang['tz']['6'] = '(GMT +6 Hours) Almaty, Dhaka, Colombo';
$lang['tz']['6.5'] = '(GMT +6.5 Hours)';
$lang['tz']['7'] = '(GMT +7 Hours) Bangkok, Hanoi, Jakarta';
$lang['tz']['8'] = '(GMT +8 Hours) Beijing, Perth, Singapore, Hong Kong, Urumqi';
$lang['tz']['9'] = '(GMT +9 Hours) Tokyo, Seoul, Osaka, Sapporo, Yakutsk';
$lang['tz']['9.5'] = '(GMT +9.5 Hours) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10 Hours) EAST(East Australian Standard), Guam';
$lang['tz']['11'] = '(GMT +11 Hours) Magadan, Solomon Islands, New Caledonia';
$lang['tz']['12'] = '(GMT +12 Hours) Auckland, Fiji, Kamchatka, Marshall Island';
$lang['tz']['13'] = '(GMT +13 Hours) Nuku\'alofa';
// Timezones - END

$lang['datetime']['Sunday'] = $lang['WEEK_DAY_SUNDAY'];
$lang['datetime']['Monday'] = $lang['WEEK_DAY_MONDAY'];
$lang['datetime']['Tuesday'] = $lang['WEEK_DAY_TUESDAY'];
$lang['datetime']['Wednesday'] = $lang['WEEK_DAY_WEDNESDAY'];
$lang['datetime']['Thursday'] = $lang['WEEK_DAY_THURSDAY'];
$lang['datetime']['Friday'] = $lang['WEEK_DAY_FRIDAY'];
$lang['datetime']['Saturday'] = $lang['WEEK_DAY_SATURDAY'];
$lang['datetime']['Sun'] = 'Sön';
$lang['datetime']['Mon'] = 'Mån';
$lang['datetime']['Tue'] = 'Tis';
$lang['datetime']['Wed'] = 'Ons';
$lang['datetime']['Thu'] = 'Tor';
$lang['datetime']['Fri'] = 'Fre';
$lang['datetime']['Sat'] = 'Lör';
$lang['datetime']['January'] = 'Januari';
$lang['datetime']['February'] = 'Februari';
$lang['datetime']['March'] = 'Mars';
$lang['datetime']['April'] = 'April';
$lang['datetime']['May'] = 'Maj';
$lang['datetime']['June'] = 'Juni';
$lang['datetime']['July'] = 'Juli';
$lang['datetime']['August'] = 'Augusti';
$lang['datetime']['September'] = 'September';
$lang['datetime']['October'] = 'Oktober';
$lang['datetime']['November'] = 'November';
$lang['datetime']['December'] = 'December';
$lang['datetime']['JAN'] = 'Jan';
$lang['datetime']['FEB'] = 'Feb';
$lang['datetime']['MAR'] = 'Mar';
$lang['datetime']['APR'] = 'Apr';
$lang['datetime']['MAY'] = 'Maj';
$lang['datetime']['JUN'] = 'Jun';
$lang['datetime']['JUL'] = 'Jul';
$lang['datetime']['AUG'] = 'Aug';
$lang['datetime']['SEP'] = 'Sep';
$lang['datetime']['OCT'] = 'Okt';
$lang['datetime']['NOV'] = 'Nov';
$lang['datetime']['DEC'] = 'Dec';

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