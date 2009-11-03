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
	'Topic' => '�mne',
	'Topics' => '�mnen',
	'Replies' => 'Svar',
	'Views' => 'Visningar',
	'Post' => 'Post',
	'Posts' => 'Poster',
	'Posted' => 'Postade',
	'Username' => 'Anv�ndarnamn',
	'Password' => 'L�senord',
	'Email' => 'E-post',
	'Poster' => 'Poster',
	'Author' => 'F�rfattare',
	'Time' => 'Tid',
	'Hours' => 'Timmar',
	'Message' => 'Meddelande',

	'1_Day' => '1 Dag',
	'7_Days' => '7 Dagar',
	'2_Weeks' => '2 Veckor',
	'1_Month' => '1 M�nad',
	'3_Months' => '3 M�nader',
	'6_Months' => '6 M�nader',
	'1_Year' => '1 �r',

	'Go' => 'G�',
	'Jump_to' => 'Hoppa till',
	'Submit' => 'Skicka',
	'Reset' => '�terst�ll',
	'Cancel' => 'Avbryt',
	'Preview' => 'F�rhandsgranska',
	'Confirm' => 'Bekr�fta',
	'Spellcheck' => 'Stavningskontroll',
	'Yes' => 'Ja',
	'No' => 'Nej',
	'Enabled' => 'Aktiverad',
	'Disabled' => 'Avaktiverad',
	'Error' => 'Error',

	'GO' => 'G�',
	'JUMP_TO' => 'Hoppa till',
	'SUBMIT' => 'Skicka',
	'RESET' => '�terst�ll',
	'CANCEL' => 'Avbryt',
	'PREVIEW' => 'F�rhandsgranska',
	'CONFIRM' => 'Bekr�fta',
	'YES' => 'Ja',
	'NO' => 'Nej',
	'ENABLED' => 'Aktiverad',
	'DISABLED' => 'Avaktiverad',
	'ERROR' => 'Error',

	'Next' => 'N�sta',
	'Previous' => 'F�reg�ende',
	'Goto_page' => 'G� till sidan',
	'Joined' => 'Gick med',
	'IP_Address' => 'IP Adress',

	'Select_forum' => 'V�lj ett forum',
	'View_latest_post' => 'Visa senaste inl�gget',
	'View_newest_post' => 'Visa nyaste inl�gget',
	'Page_of' => 'Sida <b>%d</b> av <b>%d</b>', // Replaces with: Page 1 of 2 for example

	'ICQ' => 'ICQ Nummer',
	'AIM' => 'AIM Adress',
	'MSNM' => 'MSN Live',
	'YIM' => 'Yahoo Messenger',
	'SKYPE' => 'Skype',
	'Forum_Index' => 'Forum',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Posta nytt �mne',
	'Reply_to_topic' => 'Svara p� �mne',
	'Reply_with_quote' => 'Svara med citat',

	'Click_return_topic' => 'Klicka %sH�r%s f�r att �terg� till �mnet', // %s's here are for uris, do not remove!
	'Click_return_login' => 'Klicka %sH�r%s f�r att f�rs�ka igen',
	'Click_return_forum' => 'Klicka %sH�r%s f�r att �terv�nda till forumet',
	'Click_view_message' => 'Klicka %sH�r%s f�r att visa ditt meddelande',
	'Click_return_modcp' => 'Klicka %sH�r%s f�r att �terg� till Moderator Kontroll Panelen',
	'Click_return_group' => 'Klicka %sH�r%s f�r att �terg� till grupp information',

	'Admin_panel' => 'ACP',

	'Board_disabled' => 'Tyv�rr, men denna sida �r inte tillg�nglig f�r n�rvarande. F�rs�k igen senare.',

// Global Header strings
	'Registered_users' => 'Registrerade Anv�ndare:',
	'Browsing_forum' => 'Anv�ndare som bl�ddrar i detta forum:',
	'Online_users_zero_total' => 'Totalt finns det <b>0</b> anv�ndare online: ',
	'Online_users_total' => 'Totalt finns det <b>%d</b> anv�ndare online: ',
	'Online_user_total' => 'Totalt finns det <b>%d</b> anv�ndare online: ',
	'AC_Online_users_zero_total' => 'Totalt finns det <b>0</b> anv�ndare i chatten: ',
	'AC_Online_users_total' => 'Totalt finns det <b>%d</b> anv�ndare i chatten: ',
	'AC_Online_user_total' => 'Totalt finns det <b>1</b> anv�ndare i chatten: ',
	'Reg_users_zero_total' => '0 Registrerade, ',
	'Reg_users_total' => '%d Registrerade, ',
	'Reg_user_total' => '%d Registrerade, ',
	'Hidden_users_zero_total' => '0 Dolda och ',
	'Hidden_user_total' => '%d Dolda och ',
	'Hidden_users_total' => '%d Dolda och ',
	'Guest_users_zero_total' => '0 G�ster',
	'Guest_users_total' => '%d G�ster',
	'Guest_user_total' => '%d G�st',
	'Record_online_users' => 'Flest anv�ndare online var <b>%s</b> den %s', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sAdministrat�r%s',
	'Mod_online_color' => '%sModerator%s',

	'You_last_visit' => 'Du bes�kte senast den %s', // %s replaced by date/time
	'Current_time' => 'Datum/Klockan �r nu %s', // %s replaced by time

	'Search_new' => 'Visa inl�gg sedan senaste bes�k',
	'Search_your_posts' => 'Visa dina inl�gg',
	'Search_unanswered' => 'Visa obesvarade inl�gg',

	'Register' => 'Registrera',
	'Profile' => 'Profil',
	'Edit_profile' => 'Redigera din profil',
	'Search' => 'S�k',
	'Memberlist' => 'Medlemslista',
	'FAQ' => 'FAQ',
	'KB_title' => 'Kunskaps Bas',
	'BBCode_guide' => 'BBKod Guide',
	'Usergroups' => 'Anv�ndargrupper',
	'Last_Post' => 'Senaste Inl�gg',
	'Moderator' => 'Moderator',
	'Moderators' => 'Moderatorer',

// Stats block text
	'Posted_articles_zero_total' => 'V�ra anv�ndare har skickat in totalt <b>0</b> artiklar', // Number of posts
	'Posted_articles_total' => 'V�ra anv�ndare har skickat in totalt <b>%d</b> artiklar', // Number of posts
	'Posted_article_total' => 'V�ra anv�ndare har skickat in totalt <b>%d</b> artiklar', // Number of posts
	'Registered_users_zero_total' => 'Vi har <b>0</b> registrerade anv�ndare', // # registered users
	'Registered_users_total' => 'Vi har <b>%d</b> registrerade anv�ndare', // # registered users
	'Registered_user_total' => 'Vi har <b>%d</b> registrerade anv�ndare', // # registered users
	'Newest_user' => 'Den senaste registrerade anv�ndaren �r <b>%s%s%s</b>', // a href, username, /a

	'No_new_posts_last_visit' => 'Inga nya inl�gg sedan ditt senaste bes�k',

	'No_new_posts_global_announcement' => 'Inget nytt [ Global Ann. ]',
	'New_posts_global_announcement' => 'Nytt [ Global Ann. ]',
	'No_new_posts_announcement' => 'Inget nytt [ Meddelande ]',
	'New_posts_announcement' => 'Nytt [ Meddelande ]',
	'No_new_posts_sticky' => 'Inget nytt [ Sticky ]',
	'New_posts_sticky' => 'Nytt [ Sticky ]',
	'No_new_posts_locked' => 'Inget nytt [ L�st ]',
	'New_posts_locked' => 'Nytt [ L�st ]',
	'No_new_posts' => 'Inga nya inl�gg',
	'New_posts' => 'Nya inl�gg',
	'New_post' => 'Nya inl�gg',
	'No_new_posts_hot' => 'Inga nya [ Popul�r ]',
	'New_posts_hot' => 'Nya [ Popul�r ]',

	'Forum_no_new_posts' => 'Inga nya inl�gg [Forum]',
	'Forum_new_posts' => 'Nya inl�gg [Forum]',
	'Cat_no_new_posts' => 'Inga nya inl�gg [Kategori]',
	'Cat_new_posts' => 'Nya inl�gg [Kategori]',
	'Forum_is_locked' => 'Forum �r l�st',

// Login
	'Enter_password' => 'V�nligen ange ditt anv�ndarnamn och l�senord f�r att logga in.',
	'Login' => 'Logga in',
	'Logout' => 'Logga ut',
	'Forgotten_password' => 'Jag har gl�mt mitt l�senord',
	'AUTOLOGIN' => 'Logga in mig automatiskt vid varje bes�k',
	'Error_login' => 'Du har angett ett felaktig eller inaktivt anv�ndarnamn eller ett ogiltigt l�senord.',

// Index page
	'No_Posts' => 'Inga inl�gg',
	'No_forums' => 'Detta forum har inga forum',

	'Private_Message' => 'Privata Meddelande',
	'Private_Messages' => 'Privata Meddelanden',
	'Who_is_Online' => 'Vem �r Online',

	'Mark_all_forums' => 'Markera alla forum l�sta',
	'Forums_marked_read' => 'Alla forum har markerats som l�sta',

// Viewforum
	'View_forum' => 'Visa Forum',

	'Forum_not_exist' => 'Det forum som du valt finns inte.',
	'Reached_on_error' => 'Du har kommit till denna sida av misstag.',

	'Display_topics' => 'Visa �mnen fr�n tidigare',
	'All_Topics' => 'Alla �mnen',

	'Topic_News_nb' => 'Nyheter',
	'Topic_global_announcement_nb' => 'Globalt Meddelande',
	'Topic_Announcement_nb' => 'Meddelande',
	'Topic_Sticky_nb' => 'Sticky',
	'Topic_Moved_nb' => 'Flyttad',
	'Topic_Poll_nb' => 'Unders�kning',
	'Topic_Event_nb' => 'Evenemang',
	'Topic_Announcement' => '<b>Meddelande:</b>',
	'Topic_Sticky' => '<b>Sticky:</b>',
	'Topic_Moved' => '<b>Flyttad:</b>',
	'Topic_Poll' => '<b>Unders�kning:</b>',
	'Topic_Event' => '<b>Evenemang:</b>',
	'Topic_global_announcement' => '<b>Globalt Meddelande:</b>',
	'Post_global_announcement' => 'Globalt Meddelande',


	'Mark_all_topics' => 'Markera alla �mnen l�sta',
	'Topics_marked_read' => '�mnena f�r detta forum har nu markerats som l�sta',

/*
	'Rules_post_can' => 'Du <b>kan</b> posta nya �mnen i detta forum',
	'Rules_post_cannot' => 'Du <b>kan ej</b> posta nya �mnen i detta forum',
	'Rules_reply_can' => 'Du <b>kan</b> svara p� �mnen i detta forum',
	'Rules_reply_can_own' => 'Du <b>kan</b> svara p� dina �mnen i detta forum',
	'Rules_reply_cannot' => 'Du <b>kan ej</b> svara p� �mnen i detta forum',
	'Rules_edit_can' => 'Du <b>kan</b> redigera dina �mnen i detta forum',
	'Rules_edit_cannot' => 'Du <b>kan ej</b> redigera dina �mnen i detta forum',
	'Rules_delete_can' => 'Du <b>kan</b> radera dina �mnen i detta forum',
	'Rules_delete_cannot' => 'Du <b>kan ej</b> radera dina �mnen i detta forum',
	'Rules_vote_can' => 'Du <b>kan</b> r�sta i omr�stningar i detta forum',
	'Rules_vote_cannot' => 'Du <b>kan ej</b> r�sta i omr�stningar i detta forum',
*/
	'Rules_post_can' => 'Du <b>kan</b> posta nya �mnen',
	'Rules_post_cannot' => 'Du <b>kan ej</b> posta nya �mnen',
	'Rules_reply_can' => 'Du <b>kan</b> svara p� inl�gg',
	'Rules_reply_can_own' => 'Du <b>kan</b> svara p� ditt inl�gg',
	'Rules_reply_cannot' => 'Du <b>kan ej</b> svara p� inl�gg',
	'Rules_edit_can' => 'Du <b>kan</b> redigera dina inl�gg',
	'Rules_edit_cannot' => 'Du <b>kan ej</b> redigera dina inl�gg',
	'Rules_delete_can' => 'Du <b>kan</b> radera dina inl�gg',
	'Rules_delete_cannot' => 'Du <b>kan ej</b> radera dina inl�gg',
	'Rules_vote_can' => 'Du <b>kan</b> r�sta i omr�stningar',
	'Rules_vote_cannot' => 'Du <b>kan ej</b> r�sta i omr�stningar',
	'Rules_moderate' => 'Du <b>kan</b> %smoderera detta forum%s', // %s replaced by a href links, do not remove!

// 'No_topics_post_one' => 'There are no posts in this forum.<br />Click on the <b>Post New Topic</b> link on this page to post one.',
	'No_topics_post_one' => 'Antingen finns det inga inl�gg i detta forum, eller �r d�r inga matchningar f�r de bokst�ver du har valt.<br />Klicka p� <b>Posta Nytt �mne</b> l�nken p� denna sida f�r att starta ett nytt inl�gg eller v�lj en annan bokstav.',

// Viewtopic
	'View_topic' => 'Visa �mne',

	'Guest' => 'G�st',
	'Post_subject' => 'Post f�rem�l',
	'View_next_topic' => 'Visa n�sta �mne',
	'View_previous_topic' => 'Visa f�reg�ende �mne',
	'Submit_vote' => 'Skicka R�st',
	'View_results' => 'Visa Resultat',

	'No_newer_topics' => 'Det finns inga nyare �mnen i detta forum',
	'No_older_topics' => 'Det finns inga �ldre �mnen i detta forum',
	'Topic_post_not_exist' => '�mnet eller inl�gg du efterfr�gar finns inte',
	'No_posts_topic' => 'Inga inl�gg finns f�r detta �mne',

	'Display_posts' => 'Visa inl�gg fr�n tidigare',
	'All_Posts' => 'Alla Inl�gg',
	'Newest_First' => 'Nyaste F�rst',
	'Oldest_First' => '�ldsta F�rst',

	'Back_to_top' => 'Tillbaka till toppen',
	'Back_to_bottom' => 'Sido botten',

	'Read_profile' => 'Visa anv�ndares profil',
	'Send_email' => 'Skicka e-post till anv�ndaren',
	'Visit_website' => 'Bes�k inl�ggarens hemsida',
	'ICQ_status' => 'ICQ Status',
	'Edit_delete_post' => 'Redigera/Radera det h�r inl�gget',
	'View_IP' => 'Visa IP adress f�r inl�ggare',
	'Delete_post' => 'Radera detta inl�gg',

	'wrote' => 'skrev', // proceeds the username and is followed by the quoted text
	'Quote' => 'Citera', // comes before bbcode quote output.
	'Code' => 'Kod', // comes before bbcode code output.

	'Edited_time_total' => 'Senast redigerad av %s den %s; redigerad %d g�nger totalt', // Last edited by me on 12 Oct 2001; edited 1 time in total
	'Edited_times_total' => 'Senast redigerad av %s den %s; redigerad %d g�nger totalt', // Last edited by me on 12 Oct 2001; edited 2 times in total

	'Lock_topic' => 'L�s detta �mne',
	'Unlock_topic' => 'L�s upp det h�r �mnet',
	'Move_topic' => 'Flytta detta �mne',
	'Delete_topic' => 'Radera det h�r �mnet',
	'Split_topic' => 'Dela detta �mne',

	'Stop_watching_topic' => 'Stoppa bevaka det h�r �mnet',
	'Start_watching_topic' => 'Bevaka det h�r �mnet f�r svar',
	'No_longer_watching' => 'Du bevakar inte l�ngre det h�r �mnet',
	'You_are_watching' => 'Du bevakar nu det h�r �mnet',

	'Total_votes' => 'Totalt Antal R�ster',

// Posting/Replying (Not private messaging!)
	'Message_body' => 'Meddelande body',
	'Topic_review' => '�mnes recension',

	'No_post_mode' => 'Ingen post l�ge anges', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normally)

	'Post_a_new_topic' => 'Posta ett nytt �mne',
	'Post_a_reply' => 'Posta ett svar',
	'Post_topic_as' => 'Posta �mne som',
	'Edit_Post' => 'Redigera post',
	'Options' => 'Alternativ',

	'PM_Read' => 'PM L�sa',
	'PM_Unread' => 'PM Ol�sta',
	'PM_Replied' => 'PM Svarade',

	'Post_Announcement' => 'Tillk�nnagivande',
	'New_post_Announcement' => 'Ny tillk�nnagivande',
	'Post_Sticky' => 'Sticky',
	'New_post_Sticky' => 'Ny sticky',
	'Post_Normal' => 'Normal',

	'Confirm_delete' => '�r du s�ker p� att du vill ta bort det h�r inl�gget?',
	'Confirm_delete_poll' => '�r du s�ker p� att du vill ta bort denna enk�t?',

	'Flood_Error' => 'Du kan inte g�ra ett annat inl�gg s� snart efter ditt sista, v�nligen f�rs�k igen om en stund.',
	'Empty_subject' => 'Du m�ste ange ett �mne n�r du publicerar ett nytt �mne.',
	'Empty_message' => 'Du m�ste ange ett meddelande n�r du g�r inl�gg.',
	'Forum_locked' => 'Detta forum �r l�st: du kan inte skicka, svara p� eller �ndra inl�gg.',
	'Topic_locked' => 'Detta �mne �r l�st: du kan inte redigera inl�gg eller skicka svar.',
	'No_post_id' => 'Du m�ste v�lja ett inl�gg att redigera',
	'No_topic_id' => 'Du m�ste v�lja ett �mne att besvara',
	'No_valid_mode' => 'Du kan bara skicka, svara, redigera eller citera meddelanden. G� tillbaka och f�rs�k igen.',
	'No_such_post' => 'Det finns inget s�dant inl�gg. G� tillbaka och f�rs�k igen.',
	'Edit_own_posts' => 'Tyv�rr, men du kan bara redigera dina egna inl�gg.',
	'Delete_own_posts' => 'Tyv�rr, men du kan bara ta bort dina egna inl�gg.',
	'Cannot_delete_replied' => 'Tyv�rr, men du kan inte ta bort inl�gg som har besvarats.',
	'Cannot_delete_poll' => 'Tyv�rr, men du kan inte ta bort en aktiv enk�t.',
	'Empty_poll_title' => 'Du m�ste ange en titel f�r din enk�t.',
	'To_few_poll_options' => 'Du m�ste ange minst tv� enk�t alternativ.',
	'To_many_poll_options' => 'Du har f�rs�kt att ange alltf�r m�nga enk�t alternativ.',
	'Post_has_no_poll' => 'Det h�r inl�gget har ingen enk�t.',
	'Already_voted' => 'Du har redan r�stat i denna enk�t.',
	'No_vote_option' => 'Du m�ste ange ett alternativ n�r du r�star.',

	'Add_poll' => 'L�gg till en Enk�t',
	'Add_poll_explain' => 'Om du inte vill l�gga till en enk�t till ditt �mne, l�mna f�lten tomma.',
	'Poll_question' => 'Enk�t fr�ga',
	'Poll_option' => 'Enk�t alternativ',
	'Add_option' => 'L�gg till alternativ',
	'Update' => 'Uppdatera',
	'Delete' => 'Radera',
	'Poll_for' => 'K�r enk�t i',
	'Days' => 'Dagar', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Ange 0 eller l�mna tomt f�r en o�ndlig enk�t ]',
	'Delete_poll' => 'Radera Enk�t',

	'Disable_HTML_post' => 'Avaktivera HTML i det h�r inl�gget',
	'Disable_ACRO_AUTO_post' => 'Avaktivera F�rkortningar och AutoL�nkar i det h�r inl�gget',
	'Disable_BBCode_post' => 'Avaktivera BBKod i det h�r inl�gget',
	'Disable_Smilies_post' => 'Avaktivera Smileys i det h�r inl�gget',

	'HTML_is_ON' => 'HTML �r <u>P�</u>',
	'HTML_is_OFF' => 'HTML �r <u>AV</u>',
	'BBCode_is_ON' => '%sBBCode%s �r <u>P�</u>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => '%sBBCode%s �r <u>AV</u>',
	'Smilies_are_ON' => 'Smileys �r <u>P�</u>',
	'Smilies_are_OFF' => 'Smileys �r <u>AV</u>',

	'Attach_signature' => 'Bifoga signatur (signaturer kan �ndras i profilen)',
	'Notify' => 'Meddela mig n�r ett svar �r postat',
	'Delete_post' => 'Radera det h�r inl�gget',

	'Stored' => 'Ditt meddelande har angivets successfullt.',
	'Deleted' => 'Ditt meddelande har raderats successfullt.',
	'Poll_delete' => 'Din enk�t har raderats successfullty.',
	'Vote_cast' => 'Din r�st har blivit f�rkastad.',

	'Topic_reply_notification' => '�mne Svara Meddelanden',

	'Emoticons' => 'Smileys',
	'More_emoticons' => 'Visa alla Smileys',

// Private Messaging
	'Private_Messaging' => 'Privata Meddelanden',

	'Login_check_pm' => 'Logga in f�r att kontrollera dina privata meddelanden',
	'New_pms' => 'Du har %d nya PM', // You have 2 new messages
	'New_pm' => 'Du har %d nya PM', // You have 1 new message
	'No_new_pm' => 'Du har inga nya PM',
	'Unread_pms' => 'Du har %d ol�sta PM',
	'Unread_pm' => 'Du har %d ol�sta PM',
	'No_unread_pm' => 'Du har inga ol�sta PM',
	'You_new_pm' => 'Ett nytt privat meddelande v�ntar p� dig i din Inkorg',
	'You_new_pms' => 'Nya privata meddelanden v�ntar p� dig i din Inkorg',
	'You_no_new_pm' => 'Inget nytt privat meddelande v�ntar p� dig',

	'Unread_message' => 'Ol�st meddelande',
	'Read_message' => 'L�s meddelande',

	'Read_pm' => 'L�s meddelande',
	'Post_new_pm' => 'Posta meddelande',
	'Post_reply_pm' => 'Svara p� meddelande',
	'Post_quote_pm' => 'Citera meddelande',
	'Edit_pm' => 'Redigera meddelande',

	'Inbox' => 'Inkorg',
	'Outbox' => 'Utkorg',
	'Savebox' => 'Spara Korg',
	'Sentbox' => 'Skicka Korg',
	'Flag' => 'Flagga',
	'Subject' => '�mne',
	'From' => 'Fr�n',
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
	'Next_privmsg' => 'N�sta privata meddelande',
	'Previous_privmsg' => 'F�reg�ende privata meddelande',
	'No_newer_pm' => 'Det finns inga nyare privata meddelanden.',
	'No_older_pm' => 'Det finns inga �ldre privata meddelanden.',
	'Display_messages' => 'Visa meddelanden fr�n tidigare', // Followed by number of days/weeks/months
	'All_Messages' => 'Alla Meddelanden',

	'No_messages_folder' => 'Du har inga meddelanden i den h�r mappen',

	'PM_disabled' => 'Privata Meddelanden har inaktiverats p� detta forum.',
	'Cannot_send_privmsg' => 'Tyv�rr, men administrat�ren har hindrat dig fr�n att skicka privata meddelanden.',
	'No_to_user' => 'Du m�ste ange ett anv�ndarnamn till den du ska skicka det h�r meddelandet.',
	'No_such_user' => 'Tyv�rr, men ingen s�dan anv�ndare finns.',

	'Disable_HTML_pm' => 'Inaktivera HTML i det h�r meddelandet',
	'Disable_ACRO_AUTO_pm' => 'Inaktivera Akronymer och AutoL�nkar i det h�r meddelandet',
	'Disable_BBCode_pm' => 'Inaktivera BBKod i det h�r meddelandet',
	'Disable_Smilies_pm' => 'Avaktivera Smileys i det h�r meddelandet',

	'Message_sent' => 'Ditt meddelande har skickats.',

	'Click_return_inbox' => 'Klicka %sH�r%s f�r att �terg� till din Inkorg',
	'Click_return_index' => 'Klicka %sH�r%s f�r att �terg� till Index',

	'Send_a_new_message' => 'Skicka ett nytt privat meddelande',
	'Send_a_reply' => 'Svara p� ett privat meddelande',
	'Edit_message' => 'Redigera privat meddelande',

	'Notification_subject' => 'Nya Privata Meddelande har anl�nt!',

	'Find_username' => 'Hitta ett anv�ndarnamn',
	'Find' => 'Hitta',
	'No_match' => 'Inga matchningar hittades.',

	'No_post_id' => 'Ingen post ID angavs',
	'No_such_folder' => 'Ingen s�dan mapp finns',
	'No_folder' => 'Ingen mapp angavs',

	'Mark_all' => 'Markera alla',
	'Unmark_all' => 'Markera Ej alla',

	'Confirm_delete_pm' => '�r du s�ker p� att du vill radera det h�r meddelandet?',
	'Confirm_delete_pms' => '�r du s�ker p� att du vill radera dessa meddelanden?',

	'Inbox_size' => 'Inkorg [%d%% full]', // eg. Your Inbox is 50% full
	'Sentbox_size' => 'Skicka Korg [%d%% full]',
	'Savebox_size' => 'Spara Korg [%d%% full]',

	'Click_view_privmsg' => 'Klicka %sH�r%s f�r att bes�ka din Inkorg',

// Profiles/Registration
	'Viewing_user_profile' => 'Granskar profil :: %s', // %s is username
	'About_user' => 'Allt om %s', // %s is username
//Start Quick Administrator User Options and Information MOD
	'Quick_admin_options' => 'Snabbt Administrat�rs Anv�ndar Alternativ och Info',
	'Admin_edit_profile' => 'Redigera Anv�ndares Profil',
	'Admin_edit_permissions' => 'Redigera Anv�ndares Beh�righeter',
	'User_active' => 'Anv�ndare <b>�r</b> aktiv',
	'User_not_active' => 'Anv�ndare <b>�r inte</b> aktiv',
	'Username_banned' => 'Anv�ndarnamn <b>�r</b> bannlysts',
	'Username_not_banned' => 'Anv�ndarnamn <b>�r inte</b> bannlysts',
	'User_email_banned' => 'Anv�ndares e-post [ %s ] <b>�r</b> bannlysts',
	'User_email_not_banned' => 'Anv�ndares e-post <b>�r not</b> bannlysts',
//End Quick Administrator User Options and Information MOD
	'Preferences' => 'Preferens',
	'Items_required' => 'Poster markerade med en * �r obligatoriska om inte annat anges.',
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
	'Search_user_posts' => 'SS�k efter inl�gg av denna anv�ndare',
	'Interests' => 'Intressen',
	'Occupation' => 'Yrke',
	'Poster_rank' => 'Avs�ndar rank',

	'Total_posts' => 'Inl�gg Totalt',
	'User_post_pct_stats' => '%.2f%% av totala', // 1.25% of total
	'User_post_day_stats' => '%.2f inl�gg per dag', // 1.5 posts per day
	'Search_user_posts' => 'Hitta alla inl�gg av %s', // Find all posts by username
	'Search_user_topics_started' => 'Hitta alla �mnen startade av %s', // Find all topics started by username

	'No_user_id_specified' => 'Tyv�rr, men den anv�ndaren finns inte.',
	'Wrong_Profile' => 'Du kan inte �ndra en profil som inte �r din egen.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => 'Aktiv Statistik',
	'Invision_Communicate' => 'Kommunicera',
	'Invision_Info' => 'Information',
	'Invision_Member_Group' => 'Medlems Grupp',
	'Invision_Member_Title' => 'Medlems Titel',
	'Invision_Most_Active' => 'Mest Aktiv I',
	'Invision_Most_Active_Posts' => '%s inl�gg i detta forum',
	'Invision_Details' => 'Utstationering Detaljer',
	'Invision_PPD_Stats' => 'Inl�gg Per Dag',
	'Invision_Signature' => 'Signatur',
	'Invision_Website' => 'Hemsida',
	'Invision_Total_Posts' => 'Totalt Kumulerade Inl�gg',
	'Invision_User_post_pct_stats' => '( %.2f%% av de totala forum inl�ggen )',
	'Invision_User_post_day_stats' => '%.2f inl�gg per dag',
	'Invision_Search_user_posts' => 'Hitta alla inl�gg av denna medlem',
	'Invision_Posting_details' => 'Utstationering Detaljer',
// Invision View Profile - END

	'Only_one_avatar' => 'Endast en typ av avatar kan specificeras',
	'File_no_data' => 'Filen p� den URL som du gav inneh�ller inga data',
	'No_connection_URL' => 'En anslutning kan inte g�ras till den URL som du angav',
	'Incomplete_URL' => 'URL:n du angett �r ofullst�ndig',
	'Wrong_remote_avatar_format' => 'URL:n till fj�rr avataren �r inte giltig',
	'No_send_account_inactive' => 'Tyv�rr, men ditt l�senord kan inte h�mtas p� grund av att ditt konto �r f�r n�rvarande inaktivt. Kontakta forumets administrat�r f�r mer information.',

	'Always_smile' => 'Aktivera alltid Smileys',
	'Always_html' => 'Till�t alltid HTML',
	'Always_bbcode' => 'Till�t alltid BBKod',
	'Always_add_sig' => 'Bifoga alltid min signatur',
	'Always_notify' => 'Meddela mig alltid om svar',
	'Always_notify_explain' => 'Skickar ett e-post n�r n�gon svarar p� ett �mne som du har lagt upp i. Detta kan �ndras n�r som hels n�r du g�r ett inl�gg.',

	'Board_style' => 'Forum Stil',
	'Board_lang' => 'Forum Spr�k',
	'No_themes' => 'Inga teman i databasen',
	'Timezone' => 'Tidszon',
	'Date_format' => 'Datum format',
	'Date_format_explain' => 'Syntaxen som anv�nds �r identiskt med PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> funktionen.',
	'Signature' => 'Signatur',
	'Signature_explain' => 'Detta �r ett block av text som kan l�ggas till i inl�gg du g�r. Det finns en %d tecken begr�nsning',
	'Public_view_email' => 'Visa alltid min e-postadress',

	'Current_password' => 'Nuvarande l�senord',
	'New_password' => 'Nytt l�senord',
	'Confirm_password' => 'Bekr�fta l�senord',
	'Confirm_password_explain' => 'Du m�ste bekr�fta ditt nuvarande l�senord om du vill �ndra det eller �ndra din e-postadresss',
	'password_if_changed' => 'Du beh�ver bara tillhandah�lla ett l�senord om du vill �ndra det',
	'password_confirm_if_changed' => 'Du beh�ver bara bekr�fta ditt l�senord om du har �ndrat det ovan',

	'Avatar' => 'Avatar',
	'Avatar_explain' => 'Visar en liten grafisk bild nedan dina uppgifter i inl�ggen. Endast en bild kan visas p� en g�ng. M�tten p� bilden �r begr�nsade till h�gst %d pixlar bred, och %d pixlar h�g. Uppladdade avatarer har en filstorleks gr�ns p� %d KB, och m�ste vara mindre �n eller lika med maximim�ttet. Fj�rrstyrda hostade avatarer kommer automatiskt att skalas f�r att passa dessa dimensioner.',
	'Upload_Avatar_file' => 'Ladda upp Avatar fr�n din dator',
	'Upload_Avatar_URL' => 'Ladda upp Avatar fr�n en URL',
	'Upload_Avatar_URL_explain' => 'Ange URL till den plats som inneh�ller Avatar bild, den kommer att kopieras till denna webbplats.',
	'Pick_local_Avatar' => 'V�lj Avatar fr�n galleriet',
	'Link_remote_Avatar' => 'L�nk till off-site Avatar',
	'Link_remote_Avatar_explain' => 'Ange URL till den plats som inneh�ller Avatar bild som du vill l�nka till.',
	'Avatar_URL' => 'URL till Avatar Bild',
	'Select_from_gallery' => 'V�lj Avatar fr�n galleriet',
	'View_avatar_gallery' => 'Visa galleri',

	'Select_avatar' => 'V�lj avatar',
	'Return_profile' => 'Avbryt avatar',
	'Select_category' => 'V�lj kategori',

	'Delete_Image' => 'Radera Bild',
	'Current_Image' => 'Aktuell Bild',

	'Notify_on_privmsg' => 'Meddela om nya Privata Meddelanden',
	'Popup_on_privmsg' => 'Pop upp f�nster p� nya Privata Meddelanden',
	'Popup_on_privmsg_explain' => 'Vissa mallar kan �ppna ett nytt f�nster f�r att informera dig n�r nya privata meddelanden inkommer.',
	'Hide_user' => 'D�lj din online status',

	'Profile_updated' => 'Din profil har blivit uppdaterad',
	'Profile_updated_inactive' => 'Din profil har blivit uppdaterad. Men du har �ndrat viktig information, s� att ditt konto nu �r inaktivt. Kontrollera din e-post f�r att ta reda p� hur du �ter aktiverar ditt konto eller om admin aktivering kr�vs, v�nta p� att administrat�ren ska �teraktivera det.',

	'Password_mismatch' => 'L�senorden du angav matchar inte.',
	'Current_password_mismatch' => 'Det nuvarande l�senord du levererade �verensst�mmer inte med det som lagrats i databasen.',
	'Password_long' => 'Ditt l�senord b�r inte vara l�ngre �n 32 tecken.',
	'Too_many_registers' => 'Du har �verskridit antalet f�rs�k f�r denna session. F�rs�k igen senare.',
	'Username_taken' => 'Tyv�rr, men det h�r anv�ndarnamnet har redan tagits.',
	'Username_invalid' => 'Tyv�rr, men detta anv�ndarnamn inneh�ller ett ogiltigt tecken s�som \'.',
	'Username_disallowed' => 'Tyv�rr, men detta anv�ndarnamn har nekats.',
	'Email_taken' => 'Tyv�rr, men denna e-postadressen �r redan registrerad p� en anv�ndare.',
	'Email_banned' => 'Tyv�rr, men denna e-postadress har f�rbjudits.',
	'Email_invalid' => 'Tyv�rr, men den h�r e-postadressen �r ogiltig.',
	'Signature_too_long' => 'Din signatur �r f�r l�ng.',
	'Fields_empty' => 'Du m�ste fylla i de obligatoriska f�lten.',
	'Avatar_filetype' => 'Avatar filtypen m�ste vara .jpg, .gif eller .png',
	'Avatar_filesize' => 'Avatar bild filstorleken m�ste vara mindre �n %d KB', // The avatar image file size must be less than 6 KB
	'Avatar_imagesize' => 'Avataren m�ste vara mindre �n %d pixlar bred och %d pixlar h�g',

	'Welcome_subject' => 'V�lkommen till %s Forum', // Welcome to my.com forums
	'New_account_subject' => 'Nytt anv�ndar konto',
	'Account_activated_subject' => 'Konto Aktiverat',

	'Account_added' => 'Tack f�r att du registrerade. Ditt konto har skapats. Du kan logga in med ditt anv�ndarnamn och l�senord',
	'Account_inactive' => 'Ditt konto har skapats. Men, detta forum kr�ver konto aktivering. En aktiveringsnyckel har skickats till den e-postadress som du angav. V�nligen kontrollera din e-post f�r ytterligare information',
	'Account_inactive_admin' => 'Ditt konto har skapats. Men, detta forum kr�ver kontoaktivering fr�n administrat�ren. Ett e-postmeddelande har skickats till dem och du kommer att informeras n�r ditt konto har aktiverats',
	'Account_active' => 'Ditt konto har nu aktiverats. Tack f�r att du registrerade',
	'Account_active_admin' => 'Kontot har nu blivit aktiverat',
	'Reactivate' => '�teraktivera ditt konto!',
	'Already_activated' => 'Du har redan aktiverat ditt konto',
	'COPPA' => 'Ditt konto har skapats men m�ste godk�nnas. Kontrollera din e-post f�r mer information.',

	'Registration' => 'Registrering Avtalsvillkor',
	'Reg_agreement' => 'Medan administrat�rer och moderatorer p� forumet f�rs�ker att ta bort eller �ndra allt st�rande eller st�tande material s� fort som m�jligt �r det om�jligt att g� igenom alla meddelanden. D�rf�r ska du vara medveten om att alla inl�gg som g�rs i dessa forum uttrycker �sikter och yttranden av f�rfattaren och inte administrat�rer, moderatorer eller webmaster (utom f�r inl�gg fr�n dessa personer) och d�rmed inte kommer att h�llas ansvariga.<br /><br />Du accepterar att inte posta n�got grovt, obscent, vulg�rt, kr�nkande, hatiskt, hotande, sexuellt orienterat eller n�got annat material som kan bryta mot g�llande lagar. Om du g�r detta kan det leda till att du omedelbart och permanent f�rbjuds (och din tj�nsteleverant�r informeras). IP-adressen till alla inl�gg spelas in i till�mpningen av dessa villkor. Du accepterar att webmaster, administrat�r och moderatorer i detta forum har r�tt att ta bort, redigera, flytta eller st�nga vilket �mne som helst som de finner l�mpligt. Som en anv�ndare g�r du med p� att all information som du skrivit in sparas i en databas. �ven om denna information inte kommer att avsl�jas f�r n�gon tredje part utan ditt samtycke kan webmaster, administrat�r och moderatorer inte h�llas ansvariga f�r eventuella hackningsf�rs�k som kan leda till att data �ventyras.<br /><br />Detta forum systemet anv�nder cookies f�r att spara information p� din dator. Dessa cookies inneh�ller inte n�got av den information som du skrivit in ovan; de kan endast anv�ndas f�r att f�rb�ttra ditt visning n�je. E-postadressen anv�nds bara f�r att bekr�fta din registrering information och l�senord (och f�r att skicka nytt l�senord om du skulle gl�mma ditt nuvarande).<br /><br />Genom att klicka p� Registrera nedan godk�nner du att vara bunden av dessa villkor.',

	'Agreement' => '�verenskommelse',
	'Agree_under_13' => 'Jag samtycker till dessa villkor och �r <b>under</b> 13 �r',
	'Agree_over_13' => 'Jag samtycker till dessa villkor',
	'Agree_not' => 'Jag samtycker inte till dessa villkor',
	'Agree_checkbox' => 'Jag samtycker i synnerhet till dessa villkor',
	'Agree_checkbox_Error' => 'Du m�ste kontrollera "SAMTYCKER" rutan p� sidans botten f�r att registrera!',

	'Wrong_activation' => 'Den aktiverings nyckel du levererade matchar inte med n�gon i databasen.',
	'Send_password' => 'Skicka mig ett nytt l�senord',
	'Password_updated' => 'Ett nytt l�senord har skapats; v�nligen kontrollera din e-post f�r information om hur du aktiverar det.',
	'No_email_match' => 'E-postadressen du levererade matchar inte den som listas f�r det anv�ndarnamnet.',
	'New_password_activation' => 'Nytt l�senords aktivering',
	'Password_activated' => 'Ditt konto har blivit �ter-aktiverat. Om du vill logga in anv�nd l�senordet som l�mnades i e-postmeddelandet du f�tt.',

	'Send_email_msg' => 'Skicka ett e-postmeddelande',
	'No_user_specified' => 'Ingen anv�ndare har angetts',
	'User_prevent_email' => 'Den h�r anv�ndaren vill inte ta emot e-post. Prova att skicka dem ett privat meddelande.',
	'User_not_exist' => 'Den anv�ndaren finns inte',
	'CC_email' => 'Skicka en kopia av detta e-post meddelande till dig sj�lv',
	'Email_message_desc' => 'Detta meddelande kommer att skickas som oformaterad text, s� inkludera inte n�gon HTML eller BBKod. Returadress till det h�r meddelandet kommer att skickas till din e-postadress.',
	'Flood_email_limit' => 'Du kan inte skicka en annan e-post f�r tillf�llet. F�rs�k igen senare.',
	'Recipient' => 'Mottagare',
	'Email_sent' => 'E-postmeddelandet har skickats.',
	'Send_Email' => 'Skicka e-post',
	'Empty_sender_email' => 'Du m�ste ange en e-post avs�ndaradress.',
	'Empty_subject_email' => 'Du m�ste ange ett �mne f�r e-posten.',
	'Empty_message_email' => 'Du m�ste ange ett meddelande som ska e-postas.',


// Visual confirmation system strings
	'Confirm_code_wrong' => 'Bekr�ftelsekoden du skrev var felaktig',
//	'Too_many_registers' => 'You have exceeded the number of attempts for this session. Please try again later.',
	'Confirm_code_impaired' => 'Om du �r synskadad eller n�got annat och inte kan l�sa denna kod, v�nligen kontakta %sAdministrat�ren%s f�r hj�lp.',
	'Confirm_code' => 'Bekr�ftelsekod',
	'Confirm_code_explain' => 'Ange koden exakt s� som du ser den. Koden �r skiftl�gesk�nsligt och noll har en diagonal linje genom det.',



// Members list
	'Select_sort_method' => 'V�lj sorterings metod',
	'Sort' => 'Sortera',
	'Sort_Top_Ten' => 'Topp Tio Postare',
	'Sort_Joined' => 'Gick Med Datum',
	'Sort_Username' => 'Anv�ndarnamn',
	'Sort_Location' => 'Plats',
	'Sort_Posts' => 'Totalt Antal Inl�gg',
	'Sort_Email' => 'E-post',
	'Sort_Website' => 'Webbsida',
	'Sort_Ascending' => 'Stigande',
	'Sort_Descending' => 'Fallande',
	'Order' => 'Ordning',


// Group control panel
	'Group_Control_Panel' => 'Grupp Kontroll Panelen',
	'Group_member_details' => 'Grupp Medlemskaps Detaljer',
	'Group_member_join' => 'G� med i en Grupp',

	'Group_Information' => 'Grupp Information',
	'Group_name' => 'Grupp namn',
	'Group_description' => 'Grupp beskrivning',
	'Group_membership' => 'Grupp medlemskap',
	'Group_Members' => 'Grupp Medlemmar',
	'Group_Moderator' => 'Grupp Moderator',
	'Pending_members' => 'V�ntande Medlemmar',

	'Group_type' => 'Grupp typ',
	'Group_open' => '�ppen grupp',
	'Group_closed' => 'St�ngd grupp',
	'Group_hidden' => 'Dold grupp',

	'Current_memberships' => 'Aktuella medlemskap',
	'Non_member_groups' => 'Inga-medlems grupper',
	'Memberships_pending' => 'Medlemskap p� avvaktan',

	'No_groups_exist' => 'Inga grupper finns',
	'Group_not_exist' => 'Den anv�ndargrupp finns inte',

	'Join_group' => 'G� med i grupp',
	'No_group_members' => 'Denna grupp har inga medlemmar',
	'Group_hidden_members' => 'Denna grupp �r dold; du kan inte granska dess medlemskap',
	'No_pending_group_members' => 'Denna grupp har inga v�ntande medlemmar',
	'Group_joined' => 'Du har successfullt abonnerat p� den h�r gruppen.<br />Du kommer att meddelas n�r din prenumeration �r godk�nd av den grupp moderatorn.',
	'Group_request' => 'En f�rfr�gan om att delta i din grupp har gjorts.',
	'Group_approved' => 'Din ans�kan har godk�nts.',
	'Group_added' => 'Du har lagts till i denna anv�ndargrupp.',
	'Already_member_group' => 'Du �r redan en medlem av denna grupp',
	'User_is_member_group' => 'Anv�ndaren �r redan medlem av denna grupp',
	'Group_type_updated' => 'Successfullt uppdaterat grupp typ.',
	'Could_not_add_user' => 'Anv�ndaren du valt finns inte.',
	'Could_not_anon_user' => 'Du kan inte g�ra Anonyma till en gruppmedlem.',
	'Confirm_unsub' => '�r du s�ker p� att du vill ej-prenumerera p� den h�r gruppen?',
	'Confirm_unsub_pending' => 'Din prenumeration p� den h�r gruppen har �nnu inte godk�nts; �r du s�ker p� att du vill un-prenumerera?',
	'Unsub_success' => 'Du har blivit ej-prenumerant i den h�r gruppen.',
	'Approve_selected' => 'Godk�nn Valda',
	'Deny_selected' => 'Neka Valda',
	'Not_logged_in' => 'Du m�ste vara inloggad f�r att g� med i en grupp.',
	'Remove_selected' => 'Ta bort valda',
	'Add_member' => 'L�gg Till Medlem',
	'Not_group_moderator' => 'Du �r inte den h�r gruppens moderator, d�rf�r kan du inte utf�ra �tg�rden.',
	'Login_to_join' => 'Logga in f�r att ansluta sig eller hantera gruppmedlemskap',
	'This_open_group' => 'Detta �r en �ppen grupp: klicka f�r att beg�ra medlemskap',
	'This_closed_group' => 'Detta �r en st�ngd grupp: %s',
	'This_hidden_group' => 'Detta �r en dold grupp: %s',
	'Member_this_group' => 'Du �r en medlem av denna grupp',
	'Pending_this_group' => 'Ditt medlemskap i denna grupp �r p� avvaktan',
	'Are_group_moderator' => 'Du �r gruppens moderator',
	'None' => 'Ingen',
	'Subscribe' => 'Prenumerera',
	'Unsubscribe' => 'Prenumerera Ej',
	'View_Information' => 'Visa Information',

// Search
	'Search_query' => 'S�k Query',
	'Search_options' => 'S�k Alternativ',

	'Search_keywords' => 'S�k efter Nyckelord',
	'Search_keywords_explain' => 'Du kan anv�nda <u>AND</u> f�r att definiera ord som m�ste finnas i resultatet, <u>OR</u> f�r att definiera ord som kan vara i resultatet och <u>NOT</u> f�r att definiera ord som inte ska vara i resultatet. Anv�nd * som jokertecken f�r partiella matchningar',
	'Search_author' => 'S�k F�rfattare',
	'Search_author_explain' => 'Anv�nd * som jokertecken f�r partiella matchningar',
	'Search_author_topic_starter' => 'S�k endast �mnen som startade genom denna f�rfattare',

	'Search_for_any' => 'S�k p� alla termer eller anv�nd s�kfr�ga',
	'Search_for_all' => 'S�k p� alla termer',
	'Search_title_msg' => 'S�k �mnes rubrik och meddelandetext',
	'Search_title_only' => 'S�k bara �mnes titeln',
	'Search_msg_only' => 'S�k bara meddelande texten',

	'Return_first' => '�terg� f�rst', // followed by xxx characters in a select box
	'characters_posts' => 'tecken i inl�gget',

	'Search_previous' => 'S�k f�reg�ende', // followed by days, weeks, months, year, all in a select box

	'Sort_by' => 'Sortera efter',
	'Sort_Time' => 'Inl�ggs Tid',
	'Sort_Post_Subject' => 'Inl�ggs �mne',
	'Sort_Topic_Title' => '�mnes Titel',
	'Sort_Author' => 'F�rfattare',
	'Sort_Forum' => 'Forum',

	'Display_results' => 'Visa resultat som',
	'All_available' => 'Alla tillg�ngliga',
	'No_searchable_forums' => 'Du har inte beh�righet att s�ka i n�got forum p� denna webbplats.',

	'No_search_match' => 'Inga inl�gg uppfyllde dina s�kkriterier',
	'Found_search_match' => 'S�kning hittade %d matchning', // eg. Search found 1 match
	'Found_search_matches' => 'S�kning hittade %d matchningar', // eg. Search found 24 matches

	'Close_window' => 'St�ng F�nstret',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'Tyv�rr, men enbart %s kan skicka meddelanden i detta forum.',
	'Sorry_auth_sticky' => 'Tyv�rr, men enbart %s kan skicka sticky inl�gg i detta forum.',
	'Sorry_auth_read' => 'Tyv�rr, men enbart %s kan l�sa inl�gg i detta forum.',
	'Sorry_auth_post' => 'Tyv�rr, men enbart %s kan posta inl�gg i detta forumet.',
	'Sorry_auth_reply' => 'Tyv�rr, men enbart %s kan svara p� inl�gg i detta forum.',
	'Sorry_auth_edit' => 'Tyv�rr, men enbart %s kan redigera inl�gg i detta forum.',
	'Sorry_auth_delete' => 'Tyv�rr, men enbart %s kan radera inl�gg i detta forum.',
	'Sorry_auth_vote' => 'Tyv�rr, men enbart %s kan r�sta i omr�stningar i detta forum.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>anonyma anv�ndare</b>',
	'Auth_Registered_Users' => '<b>registrerade anv�ndare</b>',
	'Auth_Self_Users' => '<b>specifika anv�ndare</b>',
	'Auth_Users_granted_access' => '<b>anv�ndare beviljas s�rskild tillg�ng</b>',
	'Auth_Moderators' => '<b>moderatorer</b>',
	'Auth_Administrators' => '<b>administrat�rer</b>',

	'Not_Moderator' => 'Du �r inte en moderator i detta forum.',
	'Not_Authorised' => 'Inte Godk�nda',

	'You_been_banned' => 'Du har blivit bannlyst fr�n detta forum.<br />Kontakta webmaster eller forum administrat�ren f�r mer information.',

// Viewonline
	'Reg_users_zero_online' => 'Det finns 0 Registrerade anv�ndare och ', // There are 5 Registered and
	'Reg_users_online' => 'Det finns %d Registrerade anv�ndare och ', // There are 5 Registered and
	'Reg_user_online' => 'Det finns %d Registrerade anv�ndare och ', // There is 1 Registered and
	'Hidden_users_zero_online' => '0 Dolda anv�ndare online', // 6 Hidden users online
	'Hidden_users_online' => '%d Dolda anv�ndare online', // 6 Hidden users online
	'Hidden_user_online' => '%d Dolda anv�ndare online', // 6 Hidden users online
	'Guest_users_online' => 'Det finns %d G�st anv�ndare online', // There are 10 Guest users online
	'Guest_users_zero_online' => 'Det finns 0 G�st anv�ndare online', // There are 10 Guest users online
	'Guest_user_online' => 'Det finns %d G�st anv�ndare online', // There is 1 Guest user online
	'No_users_browsing' => 'Det finns inga aktuella anv�ndare som bl�ddrar i detta forumet',

	'Online_explain' => 'Denna data �r baserad p� aktiva anv�ndare under de senaste ' . intval(ONLINE_REFRESH / 60) . ' minuterna',
	'Online_today' => 'Denna data �r baserad p� aktiva anv�ndare idag',

	'Forum_Location' => 'Forum Plats',
	'Last_updated' => 'Senast Uppdaterad',

	'Forum_index' => 'Forum index',
	'Portal' => 'Hemsida',
	'Logging_on' => 'Loggar in',
	'Posting_message' => 'Postar ett meddelande',
	'Searching_forums' => 'S�ker forum',
	'Viewing_profile' => 'Granskar profil',
	'Viewing_HACKSLIST' => 'Granskar krediter',
	'Viewing_online' => 'Granskar vem som �r online',
	'Viewing_member_list' => 'Granskar medlemslista',
	'Viewing_priv_msgs' => 'Granskar privata meddelanden',
	'Viewing_FAQ' => 'Granskar FAQ',
	'Viewing_KB' => 'Granskar KB',
	'Viewing_RSS' => 'RSS Feed',


// Moderator Control Panel
	'Mod_CP' => 'Moderator Kontroll Panel',
	'Mod_CP_explain' => 'Anv�nd formul�ret nedan s� kan du utf�ra en massa m�ttliga insatser p� detta forum. Du kan l�sa, l�sa upp, flytta eller ta bort valfritt antal inl�gg.',

	'Select' => 'V�lj',
	'Delete' => 'Radera',
	'Move' => 'Flytta',
	'Copy' => 'Kopiera',
	'Lock' => 'L�s',
	'Unlock' => 'L�s upp',

	'Topics_Removed' => 'Det valda inl�gget har successfullt tagits bort fr�n databasen.',
	'Topics_Locked' => 'Det valda inl�gget har blivit l�st.',
	'Topics_Moved' => 'Det valda inl�gget har blivit flyttat.',
	'Topics_Unlocked' => 'Det valda inl�gget har blivit uppl�st.',
	'No_Topics_Moved' => 'Inga �mnen flyttades.',

	'Confirm_delete_topic' => '�r du s�ker p� att du vill ta bort det valda �mnet?',
	'Confirm_lock_topic' => '�r du s�ker p� att du vill l�sa det valda �mnet?',
	'Confirm_unlock_topic' => '�r du s�ker p� att du vill l�sa upp det valda �mnet?',
	'Confirm_move_topic' => '�r du s�ker p� att du vill flytta det valda �mnet?',

	'Move_to_forum' => 'Flytta till forum',
	'Leave_shadow_topic' => 'L�mna skugg �mnet i gamla forumet.',

	'Split_Topic' => 'Dela �mne Kontroll Panel',
	'Split_Topic_explain' => 'Dela upp ett inl�gg i tv�, antingen genom att v�lja de inl�gg som enskilt eller genom att dela upp p� en markerad post',
	'Split_title' => 'Ny �mnes titel',
	'Split_forum' => 'Forum f�r nytt �mne',
	'Split_posts' => 'Dela utvalda inl�gg',
	'Split_after' => 'Dela fr�n utvalda inl�gg',
	'Topic_split' => 'Det utvalda inl�gg har blivit delat successfullt',

	'Too_many_error' => 'Du har valt f�r m�nga inl�gg. Du kan bara v�lja en post att dela upp ett �mne efter!',

	'None_selected' => 'Du har inte valt n�gra �mnen f�r att utf�ra denna �tg�rd p�. G� tillbaka och v�lj minst ett.',
	'New_forum' => 'Nytt forum',

	'This_posts_IP' => 'IP adress f�r detta inl�gg',
	'Other_IP_this_user' => 'Andra IP adresser denna anv�ndare har gjort inl�gg fr�n',
	'Users_this_IP' => 'Anv�ndare har gjort inl�gg fr�n denna IP-adress',
	'IP_info' => 'IP Information',
	'Lookup_IP' => 'L�s upp IP adress',

// Errors (not related to a specific failure on a page)
	'Information' => 'Information',
	'Critical_Information' => 'Kritisk Information',

	'General_Error' => 'Allm�nt Error',
	'Critical_Error' => 'Kritiskt Error',
	'An_error_occured' => 'Ett Error Intr�ffade',
	'A_critical_error' => 'Ett Kritiskt Error Intr�ffade',
	'Admin_reauthenticate' => 'F�r att administrera webbplatsen m�ste du �ter-autentisera dig sj�lv.',

	'Topic_description' => 'Beskrivning av ditt �mne',
// 'Description' => 'Topic Description',

	'Guestbook' => 'G�stbok',
	'Viewing_guestbook' => 'L�s g�stboken',

	'Click_return_preferences' => 'Klicka %sH�r%s f�r att �terg� till Inst�llningar',

	'Warn_new_post' => 'Det finns minst ett nytt svar i denna tr�d. L�s nya svar i �mnet och l�gg �ter fram ditt inl�gg.',

	'Today_at' => '<b class="date-today">Idag</b> at ',
	'Yesterday_at' => '<b class="date-yesterday">Ig�r</b> at ',
	'TODAY' => '<b class="date-today">Idag</b>',
	'YESTERDAY' => '<b class="date-yesterday">Ig�r</b>',

// Birthday - BEGIN
	'Birthday' => 'F�delsedag',
	'No_birthday_specify' => 'Inga specificerade',
	'Age' => '�lder',
	'Wrong_birthday_format' => 'F�delsedags formatet var felaktigt angiven.',
	'Birthday_to_high' => 'Tyv�rr, denna sida, accepterar inte anv�ndare �ldre �n %d �r gammla',
	'Birthday_require' => 'Din f�delsedag kr�vs p� denna webbplats',
	'Birthday_to_low' => 'Tyv�rr, denna sida, accepterar inte anv�ndare yngre �n %d �r gammla',
	'Submit_date_format' => 'd-m-Y', //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different separators are accepted)
	'Birthday_greeting_today' => 'Vi vill �nska dig gratulationer till att du har n�tt %s �r gammal idag.',//%s is substituted with the users age
	'Birthday_greeting_prev' => 'Vi vill ge er ett f�rsenat grattis f�r att du bli %s �r gammal den %s.',//%s is substituted with the users age, and birthday
	'Greeting_Messaging' => 'Gratulationer',
	'Birthday_today' => 'Anv�ndare som har f�delsedag idag:',
	'Birthday_week' => 'Anv�ndare som har f�delsedag inom de n�rmaste %d dagarna:',
	'Nobirthday_week' => 'Ingen anv�ndare har f�delsedag inom de kommande %d dagarna', // %d is substituted with the number of days
	'Nobirthday_today' => 'Ingen anv�ndare har f�delsedag idag',
	'Year' => '�r',
	'Month' => 'M�nad',
	'Day' => 'Dag',
// Birthday - END

// Start add - Gender MOD
	'Gender' => 'K�n',//used in users profile to display which gender he/she is
	'Male' => 'Man',
	'Female' => 'Kvinna',
	'No_gender_specify' => 'Inga specificerade',
	'Gender_require' => 'Ditt k�n kr�vs p� denna webbplats.',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
	'Topic_view_users' => 'Lista anv�ndare som har tittat p� det h�r �mnet',
	'Topic_time' => 'Senast visade',
	'Topic_count' => 'Visnings r�kning',
	'Topic_view_count' => '�mnes visnings r�knare',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
	'Give_G_card' => '�ter-aktivera anv�ndare',
	'Give_Y_card' => 'Ge anv�ndaren en varning #%d',
	'Give_R_card' => 'Bannlys denna anv�ndare nu',
	'Ban_update_sucessful' => 'Bannlysnings listan har uppdaterats successfullt',
	'Ban_update_green' => 'Anv�ndaren �r nu �ter-aktiverad',
	'Ban_update_yellow' => 'Anv�ndaren har f�tt en varning, och har nu totalt %d varningar p� ett maximum av %d varningar',
	'Ban_update_red' => 'Anv�ndaren �r nu Bannlyst',
	'Ban_reactivate' => 'Ditt konto har blivit �ter-aktiverat',
	'Ban_warning' => 'Du har f�tt en varning',
	'Ban_blocked' => 'Ditt konto �r nu blockerat',
	'Click_return_viewtopic' => 'Klicka %sH�r%s f�r att �terg� till �mnet',
/*
	'Rules_ban_can' => 'Du <b>kan</b> bannlysa andra anv�ndare i detta forum',
	'Rules_greencard_can' => 'Du <b>kan</b> ej-bannlysa anv�ndare i detta forum',
	'Rules_bluecard_can' => 'Du <b>kan</b> rapportera poster till moderator i detta forum',
*/
	'Rules_ban_can' => 'Du <b>kan</b> bannlysa andra anv�ndare',
	'Rules_greencard_can' => 'Du <b>kan</b> ej-bannlysa anv�ndare',
	'Rules_bluecard_can' => 'Du <b>kan</b> rapportera inl�gg till moderatorer',
	'user_no_email' => 'Anv�ndaren har ingen e-post, d�rf�r kan inget meddelande om den h�r �tg�rden s�ndas. Du b�r l�mna honom/henne ett privat meddelande',
	'user_already_banned' => 'Den valda anv�ndaren �r redan bannlyst',
	'Ban_no_admin' => 'Denna anv�ndare �r en ADMIN och kan d�rf�r inte varnas eller bannlysas',
	'Give_b_card' => 'Rapportera det h�r inl�gget till en moderatorer i detta forum',
	'Clear_b_card' => 'Det h�r inl�gget har %d bl�a kort nu. Om du trycker p� denna knapp kommer du att rensa detta',
	'No_moderators' => 'Detta forum har inga moderatorer, inga rapporter kan d�rf�r skickas!',
	'Post_repported' => 'Denna post har nu rapporterats till %d moderatorer',
	'Post_repported_1' => 'Denna post har nu rapporterats till en moderator',
	'Post_repport' => 'Post Rapport', //Subject in email notification
	'Post_reset' => 'Det bl�a kortet f�r det h�r inl�gget har nu nollst�llts',
	'Search_only_bluecards' => 'S�k bara bland inl�gg med bl� kort',
	'Send_message' => 'Klicka %sH�r%s f�r att skriva ett meddelande till moderatorer eller <br />',
	'Send_PM_user' => 'Klicka %sH�r%s f�r att skriva ett PM till anv�ndaren eller',
	'Link_to_post' => 'Klicka %sH�r%s f�r att g� till det rapporterade inl�gget
--------------------------------

',
	'Post_a_report' => 'Posta en rapport',
	'Report_stored' => 'Din rapport har tagits upp successfullt',
	'Send_report' => 'Klicka %sH�r%s f�r att g� tillbaka till det ursprungliga meddelandet',
	'Red_card_warning' => 'Du h�ller p� att ge anv�ndaren:%s ett r�tt kort, detta kommer att bannlysa anv�ndaren, �r du s�ker?',
	'Yellow_card_warning' => 'Du h�ller p� att ge anv�ndaren:%s ett gult kort, detta kommer att utf�rda en varning till anv�ndaren, �r du s�ker?',
	'Green_card_warning' => 'Du h�ller p� att ge anv�ndaren:%s ett gr�nt kort, detta kommer att unban anv�ndaren, �r du s�ker?',
	'Blue_card_warning' => 'Du �r p� v�g att ge inl�gget ett bl�tt kort, detta kommer att varna moderatorer om det h�r inl�gget, �r du s�ker p� att du vill varna moderatorer om det h�r inl�gget?',
	'Clear_blue_card_warning' => 'Du h�ller p� att �terst�lla det bl� kortet f�r detta inl�gg, Vill du forts�tta?',
	'Warnings' => 'Varningar: %d', //shown beside users post, if any warnings given to the user
	'Banned' => 'F�r n�rvarande bannlyst',//shown beside users post, if user are banned

// Last visit - BEGIN
	'Last_logon' => 'Senaste bes�ket',
	'Hidde_last_logon' => 'Dolda',
	'Never_last_logon' => 'Aldrig',
	'Users_today_zero_total' => 'Totalt <b>0</b> anv�ndare har bes�kt denna webbplats idag: ',
	'Users_today_total' => 'Totalt <b>%d</b> anv�ndare har bes�kt denna webbplats idag: ',
	'User_today_total' => 'Totalt <b>%d</b> anv�ndare har bes�kt denna webbplats idag: ',
	'Users_lasthour_explain' => ', %d av dem inom den senaste timmen.',
	'Users_lasthour_none_explain' => '', //shown if no one has visited in the last hour, fill if you like

	'Years' => '�r',
	'Year' => '�r',
	'Weeks' => 'Veckor',
	'Week' => 'Vecka',
	'Day' => 'Dag',
	'Total_online_time' => 'Totalt Online Varaktighet',
	'Last_online_time' => 'Senast Online Varaktighet',
	'Number_of_visit' => 'Antal bes�k',
	'Number_of_pages' => 'Antal sido tr�ffar',
// Last visit - END

	'total_site_hits_key' => '%V% Sido visningar sedan %D%.',

	'Message_too_short' => 'Meddelande f�r kort',

// Start add - Online/Offline/Hidden Mod
	'Online' => 'Online',
	'Offline' => 'Offline',
	'Hidden' => 'Dolda',

	'Online_status' => 'Status',
// End add - Online/Offline/Hidden Mod
	'Download' => 'Nedladdning',

//signature editor
	'sig_edit_link' => 'Signatur',
	'sig_description' => 'Redigera Signatur (<b>F�rhandsgranska ing�r</b>)',
	'sig_edit' => 'Redigera Signatur',
	'sig_current' => 'Nuvarande Signatur',
	'sig_none' => 'Ingen Signatur tillg�nglig',
	'sig_save' => 'Spara',
	'sig_save_message' => 'Signaturen sparad successfullt!',

	'Statistics' => 'Statistik',

// Start add - Global announcement MOD
	'Globalannounce' => 'Globalt Tillk�nnagivande',
	'Globalannounce' => 'Nytt Globalt Tillk�nnagivande',
// End add - Global announcement MOD
	'Global_Announcements' => 'Globalt Meddelande',
	'Announcements' => 'Meddelande',
	'Sticky_Topics' => 'Sticky �mnen',
	'Announcements_and_Sticky' => 'Meddelande och Sticky �mnen',
// db_update generator
	'Db_update_generator' => 'DB Uppdatera Generator',
	'Instructions' => 'Instruktioner',
	'SQL_instructions' => '<p>Denna del av mjukvara kommer att skapa PHP filer som g�r att du kan uppdatera din databas med hj�lp av din webbl�sare. Det finns n�gra saker man m�ste titta efter n�r du s�tter i en SQL i rutan nedan.<br />F�rst av allt, se till att alla SQL query slutar med ett semikolon (;). Om inte, kommer den fil som skapas att vara fel. N�sta, se till att tabellerna har "phpbb_" prefix. Detta kommer automatiskt att ers�ttas med en liten bit kod som g�r att du kan anv�nda db_update.php fil p� n�got forum oavsett vad tabellen prefix �r inst�llt p�.</p>',
	'Enter_SQL' => '<strong>Ange SQL</strong>',
	'Enter_SQL_explain' => '<strong>MySQL</strong> �r v�rldens mest popul�ra open source databas, erk�nd f�r sin snabbhet och tillf�rlitlighet.',
	'Output_SQL' => '<strong>SQL Output</strong>',
	'Output_SQL_explain' => 'Kopiera och klistra in texten fr�n textboxen till h�ger in p� en tom fil. Spara filen som <u>db_update.php</u> och ladda upp den till din server. K�r den en g�ng genom din webbl�sare.<br /><br />Allternativ, s� klickar du p� knappen H�mta f�r att ladda ner filen direkt till din dator <strong>(rekommenderas)</strong>.',
	'Download' => 'Nerladdning',

	'TOP_POSTERS' => 'Topp Postare',

// TELL A FRIEND
	'TELL_FRIEND' => 'E-post till en V�n',
	'TELL_FRIEND_SENDER_USER' => 'Ditt Namn',
	'TELL_FRIEND_SENDER_EMAIL' => 'Din E-post Adress',
	'TELL_FRIEND_RECEIVER_USER' => 'Din V�n\'s Namn',
	'TELL_FRIEND_RECEIVER_EMAIL' => 'Din V�n\'s E-post Adress',
	'TELL_FRIEND_WRONG_EMAIL' => 'Du har inte angett en giltig e-postadress.',
	'TELL_FRIEND_MSG' => 'Ditt meddelande:',
	'TELL_FRIEND_TITLE' => 'Tipsa En V�n',
	'TELL_FRIEND_BODY' => "Hej,\nJag har precis l�st �mnet &raquo;{TOPIC}&laquo; p� {SITENAME} och t�nkte att du kanske �r intresserad.\n\nH�r �r l�nken: {LINK}\n\nG� och l�s det och om du vill svara kan du registrera dig f�r ditt eget konto om du inte redan har gjort det.",

// Begin Thanks Mod
	'thankful' => 'Tacksamma Folk',
	'thanks_to' => 'Tack f�r det v�rdefulla �mnet',
	'thanks_end' => ':',
	'thanks_alt' => 'Tack �mne',
	'thanks_add_rate' => 'Tacka f�rfattaren f�r det nyttiga �mnet',
	'thanked_before' => 'Du har redan tackat f�r detta �mne',
	'thanks_add' => 'Din tack har givits',
	'thanks_not_logged' => 'Du m�ste logga in f�r att tacka n�gon f�r inl�gget',
	'thanks2' => 'Tack s� mycket!<br />',
// End Thanks Mod

//Begin Lo-Fi Mod
	'Lofi' => 'Lo-Fi Version',
// 'Full_Version' => 'Full Version',
	'Full_Version' => 'Detta �r en "Lo-Fi-version av v�rt huvudsakliga inneh�ll. Om du vill se den fullst�ndiga versionen med mer information, formatering och bilder, klicka h�r.',
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
	'Retro_sig' => 'Bifoga min signatur till mitt tidigare inl�gg',
	'Retro_sig_explain' => 'Om att l�gga till/redigera din signatur, Icy Phoenix g�ller detta normalt endast f�r framtida inl�gg',
	'Retro_sig_checkbox' => 'Kolla h�r f�r att bifoga din signatur till dina tidigare inl�gg',
// End Retro Sig MOD

	'legend' => 'Legend',
	'users' => 'Anv�ndare',
//added to autogroup mod
	'No_more' => 'inga fler anv�ndare accepteras',
	'No_add_allowed' => 'anv�ndarens automatiska till�gg �r inte till�tet',
	'Join_auto' => 'Du kan delta i den h�r gruppen, eftersom ditt inl�gg uppfyller grupp kriterier',

// merge topics
	'Merge' => 'Sammanfoga',
	'Merge_topic' => 'Sammanfoga till �mne',
	'Topics_Merged' => 'De utvalda �mnena har slagits samman.',
	'No_Topics_Merged' => 'Inga inl�gg slogs samman.',
	'Confirm_merge_topic' => '�r du s�ker p� att du vill sl� samman de valda �mnen?',

	'Downloads' => 'Nedladdningar',

// Start add - Bin Mod
	'Move_bin' => 'Flytta detta �mne till papperskorgen',
	'Topics_Moved_bin' => 'De utvalda �mnen har flyttats till papperskorgen.',
	'Bin_disabled' => 'Papperskorgen har avaktiverats',
	'Bin_recycle' => '�tervinn',
// End add - Bin Mod
	'Recent_topics' => 'Aktuella �mnen', // Recent Topics

	'Topics_Title_Edited' => 'Titlarna p� utvalda �mnen har redigerats.',
	'Edit_title' => 'Titel Redigera',
	'PM' => 'PM',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'IP adress information enbart f�r moderatorer',
	'Registered_ip_address' => 'Registrerad IP adress',
	'Registered_hostname' => 'Registrerat v�rdnamn',
	'Other_registered_ips' => 'Andra anv�ndare som registrerar fr�n %s', //%s is the IP address
	'Other_posted_ips' => 'IP adresser denna anv�ndare har postat fr�n',
	'Search_ip' => 'S�k efter inl�gg p� IP address',
	'Search_ip_explain' => 'Ange en IP-adress i det format som g�ller <u>127.0.0.1</u> -- du kan anv�nda * som jokertecken f�r partiella matchningar liksom <u>127.*.*.1</u>',
	'IP' => 'IP',
	'Whois' => 'Vems �r',
	'Browser' => 'Webbl�sare',
	'No_other_registered_ips' => 'Ingen annan anv�ndare har registrerats i enlighet med denna IP-adress.',
	'No_other_posted_ips' => 'Denna anv�ndare har inte gjort n�gra inl�gg.',
	'Not_recorded' => 'Registreras ej',
	'Logins' => 'Inloggningar',
	'No_logins' => 'Inga inloggningar har registrerats f�r den h�r anv�ndaren.',
// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'Klicka f�r att visa bilden i dess originalstorlek',
	'LIW_click_image_explain' => 'Klicka p� bilden f�r att se den i originalstorlek',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => 'Album',
	'Personal_Gallery' => 'Personligt Galleri',
	'Personal_Gallery_Of_User' => 'Personligt Galleri Av %s',
	'Personal_Gallery_Of_User_Profile' => 'Personligt Galleri av %s (%d Bilder)',
	'Show_All_Pic_View_Mode_Profile' => 'Visa alla bilder i Personligt Galleri av %s (utan underkategorier)',
	'Not_allowed_to_view_album' => 'Tyv�rr, Du �r inte till�ten att granska detta album.',
	'Not_allowed_to_upload_album' => 'Tyv�rr, Du �r inte till�ten att ladda upp en ny bild till albumet. Kontakta albumets administrat�r f�r mer information.',
	'Album_empty' => 'Det finns inga bilder i albumet<br />Klicka p� <b>Ladda Upp Ny Bild</b> l�nk p� denna sida f�r att posta en.',
	'Album_empty2' => 'Det finns inga bilder i albumet.',
	'Upload_New_Pic' => 'Ladda Upp Ny Bild.',
	'Pic_Title' => 'Bild Titel',
	'Pic_Title_Explain' => 'Det �r mycket viktigt att du ger din bild en bra titel. Det kan vara ett namn eller ett �mne f�r att se till att andra vet vad det �r utan att se det.',
	'Pic_Upload' => 'Bild Uppladdad',
	'Pic_Upload_Explain' => 'Till�tna typer �r JPG, GIF och PNG. Maximal filstorlek �r %s bytes. Maximal bild dimensioner �r %sx%s pixlar.',
	'Album_full' => 'Tyv�rr, albumet har n�tt det h�gsta antalet uppladdade bilder. V�nligen kontakta albumets administrat�r f�r mer information.',
	'Album_upload_successful' => 'Tack, din bild har lagts upp successfullt.',
	'Click_return_album' => 'Klicka %sh�r%s f�r att �terg� till Albumet.',
	'Invalid_upload' => 'Ogiltig Uppladdning<br /><br />Din bild �r f�r stort eller dess typ �r inte till�ten.',
	'Image_too_big' => 'Tyv�rr, din bilds dimensioner �r f�r stora.',
	'Uploaded_by' => 'Uppladdad av',
	'Category_locked' => 'Tyv�rr, Du kan inte ladda upp, eftersom denna kategori var l�st av en admin. V�nligen kontakta albumets administrat�r f�r mer information.',
	'View_Album_Index' => 'Album Index',
	'View_Album_Personal' => 'Visa Personligt Album av en anv�ndare',
	'View_Pictures' => 'Visa Bilder eller Inl�gg/L�sa kommentarer i albumet',
	'Album_Search' => 'S�ker i Albumet',
	'Pic_Name' => 'Bild Namn',
	'Description' => 'Beskrivning',
	'Search_Contents' => ' som inneh�ller: ',
	'Search_Found' => 'S�kning hittade ',
	'Search_Matches' => 'Matchningar:',
// Mighty Gorgon - Full Album Pack - END

// News
	'xs_latest_news' => 'Senaste Nytt',
	'xs_no_news' => 'Det finns inga nyhets inl�gg.',
	'xs_news_version' => 'XS Nyhets Version: %s',
	'xs_news_ticker_feed' => 'XML Feed K�lla: %s',
	'xs_no_ticker' => 'Det finns inga Nyhets Tickers definierade, bes�k ACP f�r att skapa en.',
	'xs_news_ticker_title' => 'Nyhets Ticker',
	'xs_news_tickers_title' => 'Nyhets Tickers',
	'xs_news_item_title' => 'Nyhets Artikel',
	'xs_news_items_title' => 'Nyhets Artiklar',
	'hide' => 'G�m',
	'show' => 'Visa',
	'Welcome' => 'V�lkommen',
	'birthdays' => 'F�delsedagar',

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
	'battle_of_sexes' => 'Krig mellan k�nen: ',

	'who_viewed' => '�mnes granskningar',
	'BoardRules' => 'Regler',

	'View_post' => 'Granska Post',
	'Post_review' => 'Post Granskning',
	'View_next_post' => 'Visa N�sta Post',
	'View_previous_post' => 'Visa tidigare inl�gg',
	'No_newer_posts' => 'Det finns inga nya inl�gg i detta forum',
	'No_older_posts' => 'Det finns inga �ldre inl�gg i forumet',

	'StaffSite' => 'Personal Sida',
	'Staff_level' => array('Administrat�r', 'Moderator'),
	'Staff_forums' => 'Forum',
	'Staff_stats' => 'Statistik',
	'Staff_user_topic_day_stats' => '%.2f �mnen per dag', // %.2f = topics per day
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

	'Recent_topics' => 'Aktuella �mnen',
	'Recent_today' => 'Idag',
	'Recent_yesterday' => 'Ig�r',
	'Recent_last24' => 'Senaste 24 Timmarna',
	'Recent_lastweek' => 'Senaste Veckan',
	'Recent_lastXdays' => 'Senaste %s dagarna',
	'Recent_last' => 'Senast',
	'Recent_days' => 'Dagarna',
	'Recent_first' => 'startat %s',
	'Recent_first_poster' => '%s',
	'Recent_select_mode' => 'V�lj mode:',
	'Recent_showing_posts' => 'Visar Poster:',
	'Recent_title_one' => '%s �mne %s', // %s = topics; %s = sort method
	'Recent_title_more' => '%s �mnen %s', // %s = topics; %s = sort method
	'Recent_title_today' => ' fr�n idag',
	'Recent_title_yesterday' => ' fr�n ig�r',
	'Recent_title_last24' => ' fr�n de senaste 24 timmarna',
	'Recent_title_lastweek' => ' fr�n f�rra veckan',
	'Recent_title_lastXdays' => ' fr�n de sista %s dagarna', // %s = days
	'Recent_no_topics' => 'Inga inl�gg hittades.',
	'Recent_wrong_mode' => 'Du har valt fel mode.',
	'Recent_click_return' => 'Klicka %sh�r%s f�r att �terg� till senaste webbplatsen.',

	'Profile_view_option' => 'Pop upp f�nster p� Profil Granskning',
	'Profile_viewed' => 'Min Profil Visningar',

// BEGIN Disable Registration MOD
	'registration_status' => 'Tyv�rr, men registreringar i detta forum �r f�r n�rvarande st�ngd. F�rs�k igen senare.',
// END Disable Registration MOD

	'PostHighlight' => 'Highlight',
	'QuickQuote' => 'Snabb Citat',
	'Randomquote' => 'Slumpm�ssigt Citat',

// Mod User CP Organize
	'Cpl_Navigation' => 'Kontroll Panel',
// 'Cpl_Settings_Options' => 'Settings And Options',
	'Cpl_Settings_Options' => 'Inst�llningar',
	'Cpl_Board_Settings' => 'Sido Inst�llningar',
	'Cpl_NewMSG' => 'Skicka Nytt Meddelande',
	'Cpl_Click_Return_Cpl' => 'Eller klicka %sH�r%s f�r att �terg� till din Kontroll Panel',
	'Cpl_Personal_Profile' => 'Personlig Profil',
	'Cpl_More_info' => 'Prenumerationer',

	'Forbidden_characters' => 'Till�tna tecken f�r anv�ndarnamn �r a-z, 0-9, -, _ och mellanslag.',

	'Topics_per_page' => '�mnen Per Sida',
	'Posts_per_page' => 'Inl�gg Per Sida',
	'Hot_threshold' => 'Popul�r Inl�ggs Tr�skel',

	'Mod_CP_first_post' => 'F�rsta Inl�gg',
	'Mod_CP_topic_count' => '<b>%s</b> �mne hittade.',
	'Mod_CP_topics_count' => '<b>%s</b> �mnen hittades.',
	'Mod_CP_no_topics' => 'Inga �mnen uppfyller kriterierna.',
	'Mod_CP_sticky' => 'Sticky',
	'Mod_CP_announce' => 'Tillk�nnage',
	'Mod_CP_global' => 'Globalisera',
	'Mod_CP_normal' => 'Normalisera',
	'Display_sticky' => 'Sticky',
	'Display_announce' => 'Meddelande',
	'Display_global' => 'Globalt Meddelande',
	'Display_poll' => 'Omr�stning',
	'Display_shadow' => 'Flyttad',
	'Display_locked' => 'L�st',
	'Display_unlocked' => 'Ej L�st',
	'Display_unread' => 'Ol�st',
	'Display_unanswered' => 'Obesvarad',
	'Display_all' => 'Alla',
	'Mod_CP_confirm_delete_polls' => '�r du s�ker p� att du vill radera dessa unders�kningar?',
	'Mod_CP_poll_removed' => 'De valda unders�kningar har tagits bort successfullt fr�n �mnet.',
	'Mod_CP_polls_removed' => 'De utvalda unders�kningarna har f�rflyttas successfullt fr�n �mnet.',
	'Mod_CP_topic_removed' => 'Det valda �mnet har successfullt f�rflyttats fr�n databasen.',
	'Mod_CP_topic_moved' => 'Det valda �mnet har blivit flyttat fr�n <b>%s</b> till <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topics_moved' => 'Det valda �mnet har blivit flyttat fr�n <b>%s</b> till <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topic_locked' => 'Det valda �mnet har blivit l�st.',
	'Mod_CP_topic_unlocked' => 'Det valda �mnet har blivit uppl�st.',
	'Mod_CP_topics_sticked' => 'De valda �mnen har blivit sticked.',
	'Mod_CP_topic_sticked' => 'Det valda �mnet har blivit sticked.',
	'Mod_CP_topics_announced' => 'De valda �mnen har blivit annonserade.',
	'Mod_CP_topic_announced' => 'Det valda �mnet har blivit annonserat.',
	'Mod_CP_topics_globalized' => 'De valda �mnen har blivit globaliserade.',
	'Mod_CP_topic_globalized' => 'Det valda �mnet har blivit globaliserat.',
	'Mod_CP_topics_normalized' => 'De valda �mnen har blivit normaliserade.',
	'Mod_CP_topic_normalized' => 'Det valda �mnet har blivit normaliserat.',
	'Mod_CP_click_return_topic' => 'Klicka %sh�r%s f�r att �terg� till det gamla �mnet eller %sh�r%s f�r att �terg� till det nya.',

	't_starter' => 'Du kan inte tacka dig sj�lv',
	'Watched_Topics' => 'Bevakade �mnen',
	'No_Watched_Topics' => 'Du bevakar inte n�gra �mnen',
	'Watched_Topics_Started' => '�mnet Startade',
	'Watched_Topics_Stop' => 'Stoppa Bevakning',

	'Stop_watching_forum' => 'Stoppa bevaka detta forum',
	'Start_watching_forum' => 'Bevaka detta forum f�r inl�gg',
	'No_longer_watching_forum' => 'Du bevakar inte l�ngre detta forum.',
	'You_are_watching_forum' => 'Du bevakar nu detta forum.',

	'UCP_SubscForums' => 'Prenumerationer Forum Lista',
	'UCP_NoSubscForums' => 'Du har inga Prenumerationer p� Forum',
	'UCP_SubscForums_Flag' => 'Flagga',
	'UCP_SubscForums_Forum' => 'Forum',
	'UCP_SubscForums_Forum_subscribed' => 'Forum Prenumerationer',
	'UCP_SubscForums_Forum_already_subscribed' => 'Du prenumererar redan p� detta Forum',
	'UCP_SubscForums_Click_return_forum' => 'Klicka %sH�r%s f�r att �terg� till Forum',
	'UCP_SubscForums_Topics' => '�mnen',
	'UCP_SubscForums_Posts' => 'Inl�gg',
	'UCP_SubscForums_LastPost' => 'Senaste Inl�gg',
	'UCP_SubscForums_UnSubscribe' => 'Un-Prenumerationer',
	'UCP_SubscForums_NewTopic' => 'Nytt �mne',

	'profile_main' => 'Allm�nt Info',
	'profile_explain' => 'V�lkommen till Anv�ndare Kontroll Panelen. H�rifr�n kan du �vervaka, visa och uppdatera din profil, preferenser, tecknade forum och inl�gg. Du kan ocks� skicka meddelanden till andra anv�ndare (om till�tet).',
	'your_activity' => 'Din Profil',

	'Gravatar' => 'Gravatar',
	'Gravatar_explain' => 'Om du har en <a href="http://www.gravatar.com" target="_blank">gravatar</a>, ange e-postadressen som du registrerade med h�r.',

	'private_msg_review_title' => 'Meddelande du svarar p�',
	'private_msg_review_error' => 'Error Hitta Privata Meddelande!',

	'BSH_Viewing_Topic' => 'Visa �mne: %t%',
	'BSH_Viewing_Post' => '%sVisa en Post%s',
	'BSH_Viewing_Profile' => 'Visa %u%\'s Profil',
	'BSH_Viewing_Groups' => '%sVisa Grupper%s',
	'BSH_Viewing_Forums' => 'Visa Forum: %f%',
	'BSH_Index' => '%Visa Index%s',
	'BSH_Searching_Forums' => '%sS�ker Forum%s',
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
	'Thereof_Junior_Administrators' => 'Antal Junior Administrat�rer',
	'Thereof_Administrators' => 'Antal Administrat�rer',
	'Deactivated_Users' => 'Medlemmar i behov av aktivering',
	'Users_with_Mod_Privileges' => 'Medlemmar med moderator r�ttigheter',
	'Users_with_Junior_Admin_Privileges' => 'Medlemmar med junior administrat�rs r�ttigheter',
	'Users_with_Admin_Privileges' => 'Medlemmar med administrat�rs r�ttigheter',
	'DB_size' => 'Storlek p� databasen',
	'Version_of_ip' => 'Version av <a href="http://www.icyphoenix.com/">Icy Phoenix</a>',
	'Version_of_board' => 'Version av <a href="http://www.phpbb.com">phpBB</a>',
	'Version_of_PHP' => 'Version av <a href="http://www.php.net/">PHP</a>',
	'Version_of_MySQL' => 'Version av <a href="http://www.mysql.com/">MySQL</a>',
	'Download_post' => 'Ladda Ner Inl�gg',

	'Download_topic' => 'Ladda Ner �mne',
	'Always_swear' => 'Till�t alltid sv�r ord',

	'Shoutbox' => 'Shoutbox',
	'Shoutbox_date' => ' d m Y h:i:s',
	'Shout_censor' => 'Shout f�rflyttad!',
	'Shout_refresh' => 'Uppdatera',
	'Shout_text' => 'Din text',
	'Viewing_Shoutbox' => 'Granskar shoutbox',
	'Censor' => 'Censur',

	'Edit_post_time' => 'Redigera tid f�r det h�r inl�gget',
	'Edit_post_time_xs' => 'Redigera',
	'Topic_time_xs' => '�mnes Tid',
	'Post_time' => 'Inl�ggs Tid',
	'Post_time_successfull_edited' => '<b>Tid uppdaterad successfullt.</b></span><br /><span class="postdetails">Detta f�nster kommer att st�ngas efter 3 sekunder.',

	'staff_message' => 'Meddelande fr�n Personalen',

	'Board_Rules' => 'Forum Regler',
	'Forum_Rules' => 'Forum Regler',
	'Show_avatars' => 'Visa Avatarer i �mne',
	'Show_signatures' => 'Visa Signaturer i �mne',
	'Acronym' => 'F�rkortning',
	'Acronyms' => 'F�rkortningar',
	'User_Number' => 'Anv�ndare #',
	'Member_Count' => 'Medlemmar',
	'Reply_message' => 'Svarade p� meddelandet',
	'Click_read_topic' => 'Klicka %sH�r%s f�r att l�sa det', // %s's here are for uris, do not remove!
	'Create_with_generator' => 'Skapa Avatar genom att anv�nda Avatar Generator',
	'View_avatar_generator' => 'Avatar Generator',
	'Adv_Search' => 'Avancerad S�kning',
	'Search_Explain' => 'S�k inom webbplatsen',
	'Login_attempts_exceeded' => 'Det h�gsta antalet %s inloggnings f�rs�k har �verskridits. Du f�r inte logga in igen innom de n�rmsta %s minuterna.',
	'Please_remove_install_contrib' => 'V�nligen se till att b�de install / och contrib / katalogerna �r borttagna',
	'Search_Engines' => 'S�kmotor Bots:',
	'Bots_browsing_forum' => 'S�kmotor Bots som bl�ddrar i detta forum:',
	'Debug_On' => 'Debug P�',
	'Debug_Off' => 'Debug Av',
	'Page_Generation_Time' => 'Generations Tid',
	'Memory_Usage' => 'Minne',
	'SQL_Queries' => 'SQL queries',
	'Search_new2' => 'Nya Inl�gg',
	'Search_new_p' => 'Inl�gg sedan senaste bes�k',
	'Show_In_Portal' => 'Visa p� Hemsidan',
	'Not_Auth_View' => 'Du har inte beh�righet att granska den h�r sidan.',
	'Site_Hist' => 'Sido Historia',
	'Links' => 'L�nkar',
	'Print_View' => 'Utskrivningsbar Version',
	'Browsing_topic' => 'Anv�ndare som bl�ddrar i detta �mne:',
	'Sudoku' => 'Sudoku',
	'Bookmarks' => 'Bokm�rken',
	'Set_Bookmark' => 'S�tt ett bokm�rke f�r detta inl�gg',
	'Remove_Bookmark' => 'Ta bort bokm�rket f�r detta inl�gg',
	'No_Bookmarks' => 'Du har inga bokm�rkes upps�ttningar',
	'Always_set_bm' => 'St�ll bokm�rke automatiskt n�r du g�r inl�gg',
	'Found_bookmark' => 'Du har satt %d bokm�rke.', // eg. Search found 1 match
	'Found_bookmarks' => 'Du har satt %d bokm�rken.', // eg. Search found 24 matches
	'More_bookmarks' => 'Fler bokm�rken...', // For mozilla navigation bar

//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => 'Vad �r det h�r?',
	'Rss_news_help_title' => 'RSS Newsreader Hj�lp',
	'Rss_news_help_header' => 'Vad �r feeds och hur anv�nder jag dem?',
	'Rss_news_help_explain' => 'En feed �r en regelbundet uppdaterad sammanfattning av vissa Webb inneh�llet, som har kopplingar till den fullst�ndiga versionen av respektive inneh�ll. Om du prenumererar p� feeds p� en webbplats med en fl�desl�sare, s� f�r du alla nya inneh�ll p� dess hemsida i en sammanfattning.<br /><br /><b>Uppm�rksamhet:</b> F�r att prenumerera p� feeds fr�n webbplatsen m�ste en <a href="http://www.rssowl.org/" target="new">Feed-Reader</a> anv�ndas. Annars, n�r du klickar p� en l�nk till en RSS eller Atom kommer det bara att leda till en oformaterad text och f�rvirring i webbl�saren.',
	'Rss_news_help_header_2' => '<b>Vad �r RSS och Atom?</b>',
	'Rss_news_help_explain_2' => 'RSS och Atom �r tv� format f�r feeds. De flesta feed l�sare st�djer b�da formaten. F�r n�rvarande st�ds atom 0.3 och RSS 2.0 av oss.',
	'Rss_news_help_header_3' => '<b>Hur anv�nder jag Nyhets feeds?</b>',
	'Rss_news_help_explain_3' => 'F�r det f�rsta beh�ver du en feedl�sare som du exempelvis kan f� fr�n <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />D�refter kan du i programmet:<br /><br /><b>1.</b> S�ka efter RSS l�nkar p� v�r sida. (Extra => S�k efter nya feeds p� webbsidan) <b>eller</b><br /><b>2.</b> l�gg till en av f�ljande feed URL`s:',
	'L_url_rss_explain' => 'URL f�r alla forum inl�gg.',
	'L_url_rss_news_explain' => 'URL bara f�r forum Nyheter.',
	'L_url_rss_atom_explain' => 'URL f�r Atom RSS Feed.',
	'Rss_news_help_rights' => 'Vi f�rbeh�ller oss r�tten att avsluta anv�ndning av feeds n�r som helst och efter eget gottfinnande. V�rt forum feeds f�r inte l�ngre drivas ut.',
	'Rss_news_feeds' => 'RSS Nyhets Feeds',

	'Quick_Reply' => 'Snabbt Svar',
	'Mod_CP_sticky2' => 'Sticky',
	'Mod_CP_announce2' => 'Tillk�nnage',
	'Mod_CP_global2' => 'Globalisera',
	'Mod_CP_normal2' => 'Normalisera',

	'Search_Flood_Error' => 'Du kan inte g�ra en ny s�kning s� snart efter din sista, v�nligen f�rs�k igen om en stund.',

// Custom Profile Fields MOD
	'custom_field_notice' => 'Dessa poster har skapats av en administrat�r. De kan eller kan ej vara offentliga. Poster markerade med * �r obligatoriska f�lt.',
	'and' => ' och ',
// END Custom Profile Fields MOD

	'dsbl' => 'Din IP-adress finns p� en <a href="%url%">DNS-baserad Blackhole Lista</a>. <br />Registrerings f�rs�k blockerat.',
	'Emails_Only_To_Admins_Error' => 'Du kan anv�nda e-post systemet f�r att skicka e-post enbart till administrat�rer.',
	'Wordgraph' => 'Taggar',
	'Viewing_wordgraph' => 'Granskar Taggar',
	'Links_For_Guests' => '<b>Du m�ste vara registrerad f�r att granska den h�r l�nken</b>',
	'New' => 'N',
	'New_Label' => 'Nytt',
	'New_Messages_Label' => 'Nya Meddelanden',
	'Show_Personal_Gallery' => 'Visa anv�ndarens personliga galleri',
	'Login_Status' => 'Online Status',
	'Login_Hidden' => 'Dolda',
	'Login_Visible' => 'Synlig',
	'Login_Default' => 'Standard',
	'Errors_Not_Found' => 'Den beg�rda adressen kan inte hittas p� denna server',
	'Errors_000' => 'Ok�nt error',
	'Errors_000_Full' => 'Den beg�rda adressen �terskickar en ok�nd fel kod.<br />Errors har registrerats till loggfilen och vi kommer att se vad problemet �r.',
	'Errors_400' => 'Error 400',
	'Errors_400_Full' => 'Den beg�rda adressen �r inte en giltig adress.',
	'Errors_401' => 'Error 401 - Tillst�nds Error',
	'Errors_401_Full' => 'Du f�r detta meddelande eftersom du inte har beh�righet till den h�r adressen.',
	'Errors_403' => 'Error 403',
	'Errors_403_Full' => 'Tillg�ng till denna adress �r f�rbjuden.',
	'Errors_404' => 'Error 404 - File Not Found',
	'Errors_404_Full' => 'Adressen du har beg�rt �r inte tillg�nglig p� denna server. Du kan ha felstavat adressen, eller det du s�ker kan ha tagits bort.',
	'Errors_500' => 'Error 500 - Konfigurations error',
	'Errors_500_Full' => 'Adressen du har beg�rt �ters�nder ett konfigurationsfel.<br />Errors har registrerats till loggfilen, och vi kommer att kontrollera vad som �r problemet s� snart som m�jligt.',
	'Errors_Email_Subject' => 'Errors: ',
	'Errors_Email_Addrress_Prefix' => 'xs_errors',
	'Errors_Email_Body' => 'Ett error har skett p� din webbplats. Kontrollera loggfilen.',
	'Remote_avatar_no_image' => 'Bilden %s finns inte',
	'Remote_avatar_error_filesize' => 'Bilden �r �ver storleksgr�nsen f�r avatarer (%d Bytes)',
	'Remote_avatar_error_dimension' => 'Bilden �r �ver dimensions gr�nsen f�r avatarer (%d x %d pixlar)',
	'How_Many_Chatters' => 'Det finns <b>%d</b> anv�ndare i chatten nu',
	'Who_Are_Chatting' => '<b>%s</b>',
	'Click_to_join_chat' => 'Klicka h�r f�r att delta i chatten',
	'ChatBox' => 'ChatBox',
	'log_out_chat' => 'Du har nu successfullt loggats ut fr�n chatten p� ',
	'Send' => 'Skicka',
	'Login_to_join_chat' => 'Logga in f�r att delta i chatten',

// Hacks List
/* General */
	'Hacks_List' => 'Krediter',
	'Page_Desc' => 'Med denna modul kan du l�gga till/redigera/ta bort i listan �ver aktuella krediter f�r Hacks/mods som �r installerade i ditt forum. De visas f�r anv�ndare n�r de bes�ker krediter:s .php sida.',
	'Deleted_Hack' => 'Radera kredit f�r mod %s fr�n listan.<br />',
	'Updated_Hack' => 'Uppdaterad kredit info om mod %s.<br />',
	'Added_Hack' => 'Tillagd info om mod %s.<br />',
	'Status' => 'Status',
	'No_Website' => 'Ingen webbplats tillg�nglig.',
	'No_Hacks' => 'Inga krediter att visa.',
	'Add_New_Hack' => 'L�gg till en ny kredit',
	'User_Viewable' => 'G�mmma Fr�n Anv�ndar Lista?',
	'Hack_Name' => 'Mod Namn',
//	'Description' => 'Description',
	'Required' => 'N�dv�ndig',
	'Author_Email' => 'F�rfattare E-post',
	'Version' => 'Version',
	'Download_URL' => 'Nerladdnings Plats',

/* Errors */
	'Error_Hacks_List_Table' => 'Error querying Hacks List Tabell.',
	'Required_Field_Missing' => 'Du misslyckades med att skriva in alla beg�rda uppgifter.',
	'Error_File_Opening' => 'Det g�r inte att �ppna filen: %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => 'Senaste Bild', // Album Addon
	'Random_pic' => 'Slumpm�ssig Bild', // Album Addon
	'Click_enlarge_pic' => 'Klicka p� bilden f�r att f�rstora den',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => 'Senast Anv�nd IP',
	'Last_Used_OS' => 'OS',
	'Last_Used_Browser' => 'Webbl�sare',
	'Last_Used_Referer' => 'Referrer',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
	'Users_Admins' => 'Administrat�rer',
	'Users_Mods' => 'Moderatorer',
	'Users_Global_Mods' => 'Globala Moderatorer',
	'Users_Regs' => 'Anv�ndare',
	'Users_Guests' => 'G�ster',
	'Users_Hidden' => 'Dold',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Fast' => 'Snabb',
	'Standard' => 'Standard',
	'Style' => 'Stil',
	'User_Contacts' => 'Kontakter',
	'Memberlist_Users_Display' => 'Anv�ndare per sida:',
	'Sort_LastLogon' => 'Senaste Inloggning',
	'Sort_Birthday' => 'F�delsedag',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => 'Personal',
	'Rank' => 'V�rdera',
	'Rank_Header' => 'V�rdering',
	'Rank_Image' => 'V�rdera Bild',
	'Rank_Posts_Count' => 'Automatisk v�rdering genom inl�gg',
	'Rank_Days_Count' => 'Automatisk v�rdering genom dagar',
	'Rank_Min_Des' => 'Minimum meddelanden/dagar',
	'Rank_Min_M' => 'Minimum Meddelanden',
	'Rank_Max_M' => 'Max Meddelanden',
	'Rank_Min_D' => 'Minimum Dagar',
	'Rank_Max_D' => 'Max Dagar',
	'Rank_Special' => 'Speciell V�rdering',
	'Rank_Special_Guest' => 'Speciell V�rdering F�r G�ster',
	'Rank_Special_Banned' => 'Speciell V�rdering F�r Bannlysta',
	'Current_Rank_Image' => 'Nuvarande v�rderings bild',
	'No_Rank' => 'Ingen v�rdering tilldelad',
	'No_Rank_Image' => 'Ingen v�rderings bild',
	'No_Rank_Special' => 'Ingen speciell v�rdering tilldelad',
	'Memberlist_Administrator' => 'Administrat�r',
	'Memberlist_Moderator' => 'Moderator',
	'Memberlist_User' => 'Anv�ndare',
	'Guest_User' => 'G�st',
	'Banned_User' => 'Bannlyst',
	'Rank1_title' => 'V�rdering 1 Titel',
	'Rank2_title' => 'V�rdering 2 Titel',
	'Rank3_title' => 'V�rdering 3 Titel',
	'Rank4_title' => 'V�rdering 4 Titel',
	'Rank5_title' => 'V�rdering 5 Titel',
// Mighty Gorgon - Multiple Ranks - END
// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => 'Meny',
	'MAIN_LINKS' => 'Huvud L�nkar',
	'TOOLS_LINKS' => 'Verktyg',
	'NEWS_LINKS' => 'Nyheter',
	'USERS_LINKS' => 'Anv�ndare &amp; Grupper',
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
	'Trohpy' => 'Spel Trof�er',
	'quick_links_games' => 'Spel Meny',

	'By' => 'Av',
	'No_Icon_Image' => 'Ingen Ikon',
	'Change_Style' => 'Stil',
	'Change_Lang' => 'Spr�k',
	'Permissions_List' => 'R�ttighets Lista',
	'IP_TEAM' => 'Icy Phoenix Team',

//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',
	'WeatherForecast' => 'V�derprognos',
	'ErrorNotFound' => 'Filen hittades inte!',
	'MGC_Users_Online' => 'MGC Anv�ndare Online',
	'MGC_User_Servertime' => 'Datum',
	'MGC_User_Nickname' => 'Alias',
	'MGC_User_Server' => 'Server',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'MGC Version',

	'Country_Flag' => 'Land Flagga',
	'Select_Country' => 'V�lj Land',
	'Extra_profile_info' => 'Extra Profil Information',
// 'Extra_profile_info_explain' => 'You can add extra information about yourself or about your hobbies. You can also add photos. You can use some bbcodes as when you post or make your signature. There is a <b>%d</b> character limit (if 0 then no limit)',
	'Extra_profile_info_explain' => 'Du kan l�gga till extra information om dig sj�lv eller om din hobby. Du kan �ven l�gga till foto. Du kan anv�nda n�gon bbkoder n�r du g�r inl�gg eller skapar din signatur.',
	'Extra_window' => '�ppnar i separat f�nster',
	'Extra_too_long' => 'Ditt extra f�lt �r f�r l�ngt (max. <b>%d</b> tecken �r till�tna)',
	'UserLike' => 'Anv�ndare gillar',
	'UserDisLike' => 'Anv�ndare gillar inte',
	'UserLikeIns' => 'Tre saker du gillar',
	'UserDisLikeIns' => 'Tre saker som du inte gillar',
	'UserPhone' => 'Telefon Nummer',
	'UserSport' => 'Sport/Team',
	'UserMusic' => 'Musik/Grupper',
	'UserNoInfo' => 'Ingen Information Tillg�nglig',
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
	'SimilarTopics' => 'Liknande �mnen',
	'Chat' => 'Chat',
	'Digests' => 'Sammandrag',

	'CPL_REG_INFO_EXPLAIN' => 'Anv�ndarnamn, e-postadress och l�senord',
	'CPL_PROFILE_INFO_EXPLAIN' => 'Allm�n kontaktinformation, Messenger, f�delsedagar, intressen och annan information',
	'CPL_PROFILE_VIEWED_EXPLAIN' => 'Anv�ndare som granskat din profil',
	'CPL_AVATAR_PANEL_EXPLAIN' => 'Avatar �r en liten bild som du kan l�nka till ditt namn',
	'CPL_SIG_EDIT_EXPLAIN' => 'Din Signatur: du kan definiera lite text som ska bifogas l�ngst ner i dina inl�gg',
	'CPL_PREFERENCES_EXPLAIN' => 'Allm�nna �nskem�l om inl�gg och l�sta meddelanden',
	'CPL_BOARD_SETTINGS_EXPLAIN' => 'Globala inst�llningar ang�ende tid, mallar och spr�k',
	'Calendar_settings_EXPLAIN' => 'Inst�llningar om kalender boxen',
	'Hierarchy_setting_EXPLAIN' => 'Inst�llningar om underforum och �mnen typ dela',
	'LOGIN_SEC_EXPLAIN' => 'Om detta avsnitt �r aktiverat kan du bevaka alla inloggningar i ditt anv�ndarnamn',
	'CPL_OWN_POSTS_EXPLAIN' => 'S�k dina egna inl�gg',
	'CPL_OWN_PICTURES_EXPLAIN' => 'Bes�k ditt personliga galleri',
	'CPL_INBOX_EXPLAIN' => 'Inkorg: inneh�ller de privata meddelanden som du har f�tt',
	'CPL_SAVEBOX_EXPLAIN' => 'Sparade Meddelanden: inneh�ller de privata meddelanden som du har sparat',
	'CPL_OUTBOX_EXPLAIN' => 'Utkorg: inneh�ller de privata meddelanden som du har skickat, men som inte har l�sts �nnu',
	'CPL_SENTBOX_EXPLAIN' => 'Skicka Korg: inneh�ller de privata meddelanden som du har skickat och som har l�sts',
	'CPL_BOOKMARKS_EXPLAIN' => 'Alla bokm�rken som du har tilldelats f�r inl�gg',
	'WATCHED_TOPICS_EXPLAIN' => 'En lista �ver alla de �mnen som du bevakar',
	'CPL_SUBSCFORUMS_EXPLAIN' => 'De forum som du prenumererar p� f�r anm�lningar om nya �mnen',
	'DIGESTS_EXPLAIN' => 'Sammandrag �r �terkommande e-post som skickas automatiskt med ett utdrag av de nya inl�ggen i forumet',
	'DRAFTS_EXPLAIN' => 'Hantera dina Utkast',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Shoutbox',
	'Ajax_Chat' => 'Chat',
	'Ajax_Archive' => 'Chat Arkiv',
	'Shoutbox_flooderror' => 'Du kan inte shout s� fort efter ditt senaste shout. F�rs�k igen om en stund.',
	'Shoutbox_no_auth' => 'Tyv�rr, Endast registrerade anv�ndare kan anv�nda shoutbox',
	'Shoutbox_loading' => 'Laddar Shoutbox...',
// Errors
	'Shoutbox_unable' => 'Tyv�rr, �tg�rden kunde inte g�ras. V�nligen f�rs�k igen.',
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
	'Online_registered' => 'Anv�ndare',
	'Online_guests' => 'G�ster',
	'Who_is_Chatting' => 'Vem Chattar',
	'Shoutbox_online_explain' => 'Informationen �r baserad p� aktiva anv�ndare under de senaste trettio sekunder',
// Ajax Shoutbox - END

	'Contact_us' => 'Kontakta Oss',
	'Contact_us_explain' => 'Med den h�r sidan kan du skicka oss e-post meddelande',
	'Session_invalid' => 'Ogiltig Session. Var sn�ll och skicka formul�ret igen.',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => ' det h�r anv�ndarnamnet �r f�r kort',
	'Reg_Username_Long' => ' det h�r anv�ndarnamnet �r f�r l�ngt',
	'Reg_Username_Taken' => ' det h�r anv�ndarnamnet �r inte tillg�ngligt',
	'Reg_Username_Free' => ' det h�r anv�ndarnamnet �r tillg�ngligt',
	'Reg_PWD_Short' => 'Detta l�senord �r f�r kort',
	'Reg_PWD_Easy' => 'Detta l�senord �r alltf�r l�tt',
	'Reg_PWD_OK' => 'Detta l�senord �r ok',
	'Reg_Email_Invalid' => ' den h�r e-postadressen �r ogiltig eller �r redan i db',
	'Reg_Email_OK' => ' den h�r e-postadressen �r ok',

// Moved here from lang_adv_time.php
	'time_mode' => 'Tids hantering',
	'time_mode_text' => 'DST skillnaden �r skillnaden mellan sommartiden och normal tid f�r ditt land (fr�n 0 till 120 minuter, typiskt 60).<br /><br /><strong> * Modulen markerad med en asterisk anv�nds som standard i detta forum och rekommenderas av dess administrat�r. </strong>',
	'time_mode_auto' => 'Automatisk modes...',
	'time_mode_full_pc' => 'Din Dators tid',
	'time_mode_server_pc' => 'Serverns allm�nna tid, Tidszon/DST<br /><span STYLE="margin-left: 25">fr�n din dator</span>',
	'time_mode_full_server' => 'Serverns lokala tid',
	'time_mode_manual' => 'Manuell mode...',
	'time_mode_dst' => 'DST aktiverad',
	'time_mode_dst_server' => 'Genom servern',
	'time_mode_dst_time_lag' => 'DST skillnad',
	'time_mode_dst_mn' => 'min',
	'time_mode_timezone' => 'Tidszon',

	'dst_time_lag_error' => 'skillnads v�rde fel. Du m�ste skriva ett antal minuter mellan 0 och 120.',

	'dst_enabled_mode' => ' [DST aktiverad]',
	'full_server_mode' => 'Tid synkroniseras med forumets servertid',
	'server_pc_mode' => 'Tid synkroniserad. med servern - Tidszon / DST med datorn',
	'full_pc_mode' => 'Tid synkroniseras med datorns tid',

	'Smileys_Per_Page' => 'Smileys Per Sida',

/* lang_site_hist.php - BEGIN */
	'Site_history' => 'Sajtens historia',
	'Month' => 'M�nad',
	'Week_day' => 'Veckodag',
	'Not_availble' => 'Ej tillg�ngligt',
	'Total_users' => 'Max anv�ndare',
	'Reg_users' => 'Registrerade anv�ndare',
	'Hidden_users' => 'Dolda anv�ndare',
	'Guests_users' => 'G�st anv�ndare',
	'New_users' => 'Nya anv�ndare',
	'New_topics' => 'Nya �mnen',
	'New_posts_reply' => 'Inl�gg/Svar',
	'Most_online' => 'Mest online-anv�ndare %s',
	'Most_online_week' => 'Mest online-anv�ndare de senaste 7 dagarna',
	'Last_24' => 'Mest online-anv�ndare de senaste %s Timmarna',
	'Top_Posting_Users' => 'Topp inl�ggs anv�ndare',
	'Top_Posting_Users_week' => 'Topp inl�ggs anv�ndare denna vecka [%s]',
	'Rank' => 'Rank',
	'Percent' => 'Procent',
	'Graph' => 'Diagram',
	'Top_Visiting_Users' => 'Mest Tid Anv�ndare',
/* lang_site_hist.php - END */

/* lang_referrers.php - BEGIN */
	'Referrers_Title' => 'Http H�nvisnings Management',
	'Referrers_Cleared' => 'H�nvisning Rensad',
	'Referrers_Clear' => 'Radera Alla',
	'Click_Return_Referrers' => 'Klicka %sH�r%s f�r att �terg� till H�nvisning',
	'Referrers' => 'Http H�nvisning',
	'Referrer_host' => 'H�nvisning\'s V�rd',
	'Referrer_url' => 'H�nvisning\'s Url',
	'Referrer_ip' => 'H�nvisning\'s IP',
	'Referrer_hits' => 'Tr�ffar',
	'Referrer_first' => 'F�rsta Bes�k',
	'Referrer_last' => 'Senaste Bes�k',
	'Viewing_Referrers' => 'Granskar H�nvisning',
/* lang_referrers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_Days' => '%d Dagar',
	'X_Weeks' => '%d Veckor',
	'X_Months' => '%d M�nader',
	'X_Years' => '%d �r',

	'Confirm_delete_user' => '�r du verkligen s�ker p� att du vill ta bort den h�r anv�ndaren?',
	'Prune_no_users' => 'Ingen anv�ndare raderad',
	'Prune_users_number' => 'F�ljande %d anv�ndare var raderade:',

	'Prune_user_list' => 'Anv�ndare som vill tas bort',
	'Prune_on_click' => 'Du h�ller p� att ta bort %d users. anv�ndare. �r du s�ker?',
	'Prune_Action' => 'Klicka p� l�nken nedan f�r att verkst�lla',
	'Prune_users_explain' => 'Reducera anv�ndare!. Fr�n denna sida kan du rensa anv�ndare. Du kan v�lja en av tre l�nkar: ta bort gamla anv�ndare som aldrig har postat, ta bort gamla anv�ndare som aldrig har loggat in, radera anv�ndare som aldrig har aktiverat sitt konto.<p/><b>Notera:</b> Det finns ingen �ngra-funktion.',
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => 'Avatar Generator',
	'Available' => 'Tillg�ngliga Avatars',
	'Random' => 'Slumpm�ssigt',
	'Avatar_Text' => 'V�nligen ange texten du vill ha p� din Avatar:',
	'Avatar_Preview' => 'F�rhandsgranska Avatar',
	'Your_Avatar' => 'Din Avatar',
	'Submit_Avatar' => 'Skicka in avatar',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Upload_Image_Local' => 'Ladda upp Bild',
	'Uploaded_Images_Local' => 'Uppladdade Bilder',
	'Upload_Image_Local_Explain' => 'V�lj den fil som ska laddas upp',
	'Uploaded_Image_Success' => 'Bilden har lagts upp successfullt.',
	'Uploaded_Image_BBC' => 'Du kan anv�nda denna BBKod f�r att l�gga upp den h�r bilden.',
	'Upload_Image_Empty' => 'Du kan inte ladda upp luft ... du vet!',
	'Upload_File_Too_Big' => 'Filen du f�rs�ker ladda upp �r f�r stor! Max till�tna storlek:',
	'Upload_File_Type_Allowed' => 'Endast dessa filtyper kan laddas upp',
	'Upload_Insert_Image' => 'S�tt In BBKod',
	'Upload_Close' => 'St�ng',
	'BBCode' => 'BBKod',
	'HTML' => 'HTML',

	'No_News' => 'Inga Nyheter',

	'Email_confirm' => 'Bekr�fta din e-postadress',
	'Email_mismatch' => 'E-post adressen du har angett st�mmer inte �verens.',

	'View_ballot' => 'Visa Ballot',
	'Full_edit' => '�ndra till full redigerings form',
	'Save_changes' => 'Spara',
	'No_subject' => '(Inga f�rem�l)',
	'Edit_quick_post' => 'Snabb-redigera det h�r inl�gget',
	'AJAX_search_results' => 'En snabb s�kning har funnit %s �mnen med nyckelorden i ditt �mnes titel. Klicka h�r f�r att visa detta �mne',
	'AJAX_search_result' => 'En snabb s�kning har hittat ett �mne med nyckelorden i ditt �mnes titel. Klicka h�r f�r att visa detta �mne',
	'More_matches_username' => 'Mer �n ett anv�ndarnamn matchade din s�kning. V�lj en anv�ndare fr�n rutan ovan.',
	'No_username' => 'Du m�ste ange ett anv�ndarnamn.',
	'AJAX_quick_search_results' => 'En snabb s�kning har funnit %s �mnen med nyckelorden.<br />P� h�ger sida kan du se de f�rsta resultaten.<br />Klicka p� S�K f�r att f� den fullst�ndiga resultatlistan.',
	'AJAX_quick_search_result' => 'En snabb s�kning har hittat ett �mne med nyckelorden.<br />P� h�ger sida kan du se resultatet.',

	'Icon_Description' => 'Ikon Beskrivning',

	'Feature_Disabled' => 'Den h�r funktionen �r inaktiverad.',

// Resend Activation - BEGIN
	'Resend_activation_email' => '�ters�nd aktiverings e-post',
	'Invalid_activation' => 'Anv�ndar konto aktivering kan endast utf�ras av administrat�rer.',
	'No_actkey' => 'Det finns ingen aktiveringsnyckel f�r ditt konto. V�nligen kontakta forumets administrat�r f�r mer information.',
	'Send_actmail_flood_error' => 'Du kan inte g�ra en ny ans�kan s� snart efter din sista, v�nligen f�rs�k igen om en stund.',
	'Resend_activation_email_done' => 'Aktiverings e-post meddelandet har skickats. V�nligen kontrollera din e-post f�r ytterligare information.',
// Resend Activation - END

	'Bots_Group' => 'Bots',
	'Bots_Color' => 'Bots F�rg',
	'Active_Users_Group' => 'Aktiva Anv�ndare',
	'Active_Users_Color' => 'Aktiva Anv�ndares F�rg',
	'Group_Default_Membership' => 'Standard Grupp',
	'Group_Default_Membership_Explain' => 'V�lj standardgruppen f�r anv�ndare att tilldela rank och f�rg.',
	'User_Color' => 'Anv�ndare F�rg',
	'User_Color_Explain' => 'Om du anger en f�rg f�r den h�r anv�ndaren kommer detta att vara �verdskrivit av standardgruppens f�rg om du anger en grupp i rutan ovan. Anv�nd hex koden utan <b>#</b> exempel: ff0000 �r koden f�r R�D.',
	'No_Groups_Membership' => 'Inget Medlemskap',
	'No_Default_Group' => 'Ingen Standard Grupp',
	'Group_members_updated' => 'Successfullt uppdaterad gruppmedlem.',
	'Colorize_All' => 'F�rgs�tt Alla Medlemmarna',
	'Colorize_Selected' => 'F�rgs�ttning Valda',

	'CompanyWho' => 'F�retaget',
	'CompanyWhere' => 'Hur Du N�r Oss',
	'CompanyServices' => 'Tj�nster',
	'CompanyProducts' => 'Produkter',

	'ShareThisTopic' => 'Dela detta �mne',

	'Remove_cookies' => 'Ta bort cookies fr�n denna webbplats',
	'Cookies_deleted' => 'Alla cookies har nu raderats. Du �r nu utloggad.<br />F�r att slutf�ra raderingen m�ste du st�nger din webbl�sare nu.',
	'Delete_cookies' => 'Radera Cookies',
	'cookies_confirm' => '�r du s�ker p� att du vill ta bort alla cookies fr�n denna webbplats?<br /><br />Denna �tg�rd kommer ocks� att logga ut dig.',

	'CustomIcy' => 'CustomIcy',

	'Drafts' => 'Utkast',
	'Drafts_Action' => '�tg�rd',
	'Drafts_Save' => 'Spara',
	'Drafts_Load' => 'Ladda',
	'Drafts_Saved' => 'Detta utkast har sparats',
	'Drafts_Loaded' => 'Utkast laddas',
	'Drafts_No_Drafts' => 'Inget utkast sparat',
	'Drafts_Delete_Sel' => 'Radering valt',
	'Drafts_Save_Question' => '<br /><br />�r du s�ker p� att du vill spara detta meddelandet som ett utkast?<br /><br />Observera att endast meddelandetexten kommer att sparas medan alla andra inst�llningar kommer att sl�ngas.',
	'Drafts_Delete_Question' => '<br /><br />�r du s�ker p� att du vill ta bort de valda utkasten?',
	'Drafts_Type' => 'Utkast Typ',
	'Drafts_Subject' => 'Utkast �mne',
	'Drafts_NT' => 'Nytt �mne',
	'Drafts_NM' => 'Svara',
	'Drafts_NPM' => 'Privat Meddelande',

	'CannotEditAdminsPosts' => 'Du kan inte �ndra admins inl�gg',
	'Random_Number' => 'Slumpm�ssigt Nummer',

	'New_download' => 'En ny nedladdning var upplagd eller uppdaterad.<br />Klicka %sh�r%s f�r att visa det.',
	'Dl_bug_tracker' => 'Bug Tracker',
	'Downloads_ADV' => 'Nedladdnings ADV',

	'TopicUseful' => 'Var detta �mne anv�ndbart?',
	'Article' => 'Artikel',
	'Comments' => 'Kommentarer',

	'Sitemap' => 'Sidokarta',

	'Delete_My_Account' => 'Radera Konto',
	'Delete_My_Account_Explain' => 'Om du vill ta bort ditt konto p� denna webbplats kan du skicka en beg�ran med hj�lp av detta formul�r och inaktiverar ditt konto s� snart som m�jligt.<br />Ange "Konto Radering" i �mnesraden och (om du vill) skriva en anledningen i n�gra f� ord.',

	'KB_MODE_ON' => 'Aktivera KB mode',
	'KB_MODE_OFF' => 'Inaktivera KB mode',

	'Go_To_Page_Number' => 'G� till sidan',

	'Admin_Emails' => 'Administrat�rer kan maila mig information',
	'Allow_PM_IN' => 'Till�t anv�ndare att skicka mig privata meddelanden',
	'Allow_PM_IN_Explain' => 'Observera att system administrat�rer, moderatorer och v�nner kommer alltid att kunna skicka meddelanden till dig.',
	'Allow_PM_IN_SEND_ERROR' => 'Anv�ndaren du f�rs�ker skicka PM till kunde inte ta emot ditt meddelande eftersom han/hon beslutat att inte ta emot Privata Meddelanden.',

// 'UCP_ZEBRA' => 'Friends &amp; Foes',
	'UCP_ZEBRA' => 'V�nner Management',
	'UCP_ZEBRA_FOES' => 'Hantera Fiender',
	'UCP_ZEBRA_FRIENDS' => 'Hantera V�nner',

	'ADD_FOES' => 'L�gg till nya fiender',
	'ADD_FOES_EXPLAIN' => 'Du kan ange flera anv�ndarnamn p� en annan linje.',
	'YOUR_FOES' => 'Dina fiender',
	'YOUR_FOES_EXPLAIN' => 'Om du vill ta bort anv�ndarnamn markera dem och klicka p� skicka.<br />Tips: anv�nd CTRL f�r att markera/avmarkera flera objekt.',
	'FOE_MESSAGE' => 'Meddelande fr�n fiende',
	'FOES_EXPLAIN' => 'Fiender �r anv�ndarna som kommer att ignoreras som standard. Inl�gg av dessa anv�ndare kommer inte att vara fullt synliga. Personliga meddelanden fr�n fiender �r fortfarande till�tna. Observera att du inte kan ignorera moderatorer eller administrat�rer.',
	'FOES_UPDATED' => 'Din fiende lista har uppdaterats successfullt.',
	'FOES_UPDATE_ERROR' => 'Dina fiender listan har INTE uppdaterats.',
	'NO_FOES' => 'Inga fiender definieras n�rvarande',

	'ADD_FRIENDS' => 'L�gg till nya v�nner',
	'ADD_FRIENDS_EXPLAIN' => 'Du kan ange flera anv�ndarnamn var och ett p� en annan linje.',
	'YOUR_FRIENDS' => 'Dina v�nner',
	'YOUR_FRIENDS_EXPLAIN' => 'Om du vill ta bort anv�ndarnamn markera dem och klicka p� Skicka.<br />Tips: anv�nd CTRL f�r att markera/avmarkera flera objekt.',
	'FRIEND_MESSAGE' => 'Meddelande fr�n en v�n',
	'FRIENDS' => 'V�nner',
	'FRIENDS_EXPLAIN' => 'V�nner kan ge dig snabb tillg�ng till medlemmar du kommunicera med ofta. Om mallen har relevant support st�djs alla inl�gg som gjorts av en v�n kan vara markerat.',
	'FRIENDS_UPDATED' => 'Dina v�nner-listan har uppdaterats framg�ngsrikt.',
	'FRIENDS_UPDATE_ERROR' => 'Dina v�nners lista har INTE uppdaterats.',
	'FRIENDS_ONLINE' => 'Online',
	'FRIENDS_HIDDEN' => 'Dolda',
	'FRIENDS_OFFLINE' => 'Offline',
	'NO_FRIENDS' => 'Inga v�nner definieras n�rvarande',
	'NO_FRIENDS_OFFLINE' => 'Inga v�nner offline',
	'NO_FRIENDS_ONLINE' => 'Inga v�nner online',

	'Default' => 'Standard',

	'Reserved_Author' => '[ DOLT ]',
	'Reserved_Topic' => '[ RESERVERAT �MNE ]',
	'Reserved_Post' => '[ RESERVERATD INL�GG ]',

	'THANKS_RECEIVED' => 'Tack mottagits',

	'RECENT_USER_ACTIVITY' => 'Senaste anv�ndar aktivitet',
	'USER_TOPICS_STARTED' => '�mnen startat',
	'USER_POSTS' => 'Inl�gg skrivna',
	'USER_TOPICS_VIEWS' => '�mnen granskade',
	'RECENT_USER_STARTED_TITLE' => 'startat av %s',
	'RECENT_USER_STARTED_NAV' => '�mnen startat av %s',
	'RECENT_USER_POSTS_TITLE' => 'med %s inl�gg i',
	'RECENT_USER_POSTS_NAV' => '�mnen med %s inl�gg i',
	'RECENT_USER_VIEWS_TITLE' => 'granskat av %s',
	'RECENT_USER_VIEWS_NAV' => '�mnen granskat av %s',

	'WARN_NO_BUMP' => 'Du �r den sista postaren i detta �mne: du kan inte skriva nya inl�gg inom 24 timmar fr�n det senaste inl�gget om inte n�gon annan svarar under tiden.',

	'LINK_THIS_TOPIC' => 'L�nka detta �mne',
	'LINK_URL' => 'URL',
	'LINK_BBCODE' => 'BBKod',
	'LINK_HTML' => 'HTML',

	'NEWS_POSTED' => 'Bl�ddra inlagda nyheter',
	'TOPICS_POSTED' => 'S�k �mnen startade',
	'POSTS_POSTED' => 'S�k alla anv�ndar inl�gg',

	'ACCOUNT_DELETION_REQUEST' => 'Anv�ndare %s uppmanas att radera kontot.',

	'SORT_TOPICS' => 'Sortera �mnen',
	'SORT_TOPICS_NEWEST' => 'Nyaste',
	'SORT_TOPICS_OLDEST' => '�ldsta',

	'EDIT_POST_DETAILS' => 'Redigera Post Detaljer',
	'CURRENT_POSTER' => 'Aktuella Poster',
	'NEW_POSTER' => 'Nya Poster',
	'DETAILS_CHANGED' => '<b>Post detaljer har �ndrats successfullt.</b></span><br /><span class="postdetails">Detta f�nster st�ngs efter 3 sekunder.',

	'Redirect' => 'Omdirigera ',
	'Redirect_to' => 'Om din webbl�sare inte st�der meta omdirigering klicka %sH�R% f�r att bli omdirigerad',

	'InProgress' => 'I progress',

	'HAPPY_BIRTHDAY' => 'Grattis p� F�delsedagen',
	
    'DOWNLOAD' => 'Ladda ner',
	'DOWNLOADED' => 'Nerladdade',
	'FILESIZE' => 'Filstorlek',
	'FILENAME' => 'Filnamn',
	'FILE_NOT_AUTH' => 'Du har inte beh�righet att ladda ner denna fil',
	'SHOW_POSTS_FROM' => 'Visa inl�gg fr�n',
	'SHOW_POSTS_TO' => 'till',

	'SEE_MORE_DETAILS' => 'Se fler detaljer...',
	'UNKNOWN' => 'Ok�nd',
	'MASS_PM' => 'Mass PM',
	'TEXT_FORMAT' => 'Format',
	'SENDER' => 'Avs�ndare',
	'PM_NOTIFICATION' => 'Hej,<br /><br />Du har f�tt ett nytt privat meddelande till ditt konto p� "{SITENAME}".<br /><br />Du kan granska dina nya meddelanden genom att klicka p� f�ljande l�nk:<br /><br />{U_INBOX}<br /><br />',

	'GSEARCH' => 'Google S�kning',
	'GSEARCH_ENGINE' => 'Anv�nd Google S�kmotor',
	'SEARCH_WHAT' => 'S�ka vad',
	'SEARCH_WHERE' => 'S�ka var',
	'SEARCH_THIS_FORUM' => 'S�k i detta forum...',
	'SEARCH_THIS_TOPIC' => 'S�k i detta topic...',
	'VF_ALL_TOPICS' => 'Alla �mnen',
	
	'WHITE_LIST_MESSAGE' => 'Denna webbplats kr�ver konto bekr�ftelse via e-post. V�nligen kontrollera att denna dom�n �r i vit-listan �ver dina antispam eller du kunde aldrig f� aktiverings meddelande.',
	'CLICK_RETURN_HOME' => 'Klicka %sH�r%s f�r att �terg� till Hem Sidan',

	'WEEK_DAY_SUNDAY' => 'S�ndag',
	'WEEK_DAY_MONDAY' => 'M�ndag',
	'WEEK_DAY_TUESDAY' => 'Tisdag',
	'WEEK_DAY_WEDNESDAY' => 'Onsdag',
	'WEEK_DAY_THURSDAY' => 'Torsdag',
	'WEEK_DAY_FRIDAY' => 'Fredag',
	'WEEK_DAY_SATURDAY' => 'L�rdag',

	'RATINGS' => 'V�rdering',

	'ERROR_TABLE' => 'Kunde inte query %s tabell',

	'SMILEYS' => 'Smileys',
	'SMILEYS_NO_CATEGORIES' => 'Inga kategorier definierade',
	'SMILEYS_CATEGORY' => 'Kategori',
	'SMILEYS_GALLERY' => 'Smileys Gallery',
	'SMILEYS_STANDARD' => 'Standard Smileys',

	'QUICK_LIST' => 'Full Lista',
	'NORMAL_LIST' => 'Normal Lista',
	
	'RETURN_PAGE' => '%sG� tillbaka till f�reg�ende sida%s',
	'FILE_NOT_FOUND' => 'Fil kunde ej hittas',
	'FSOCK_DISABLED' => 'FSOCK Avaktiverad',

	'MANAGEMENT' => 'Management',
	'SORT_ORDER' => 'Sortera efter',
	'SORT_DIR' => 'Sorterings riktning',

	'TIME_YEAR' => '�r',
	'TIME_MONTH' => 'M�nad',
	'TIME_DAY' => 'Dag',
	'TIME_HOUR' => 'Timme',
	'TIME_MINUTE' => 'Minuter',
	'TIME_SECOND' => 'Sekund',

	'CONTACTS' => 'Kontakter',
	
	// Event Registration - BEGIN
	'Reg_Title' => 'Evenemangs Registrering',
	'Post_Registration' => 'Evenemangs Registrering',
	'Add_registration' => 'L�gg Till Evenemangs Registrering',
	'Add_reg_explain' => '&nbsp;&bull; Kontrollera <i>Aktivera</i> f�r att visa ett registreringsformul�r med det h�r inl�gget. Avmarkera f�r att d�lja det.<br />&nbsp;&bull; Kontrollera <i>�terst�ll</i> f�r att ta bort alla aktuella registreringar f�r detta formul�r.<br />&nbsp;&bull; Ange ett antal i <i>Slots</i> f�r att begr�nsa registreringar f�r ett alternativ. "0" eller tom = obegr�nsad.',
	'reg_activate' => 'Aktivera',
	'reg_reset' => '�terst�ll',
	'Reg_Insert' => 'Du registrerade f�r evenemanget.',
	'Reg_Change' => 'Registrering �ndrad.',
	'Reg_Confirm' => 'Registrering bekr�ftad.',
	'Reg_Unregister' => 'Registrering f�rfallen.',
	'Reg_Max_Registrations' => 'Det h�gsta antalet av registreringar f�r det h�r alternativet �r n�dd. Inga fler anm�lningar tas emot.',
	'Reg_No_Slots_Left' => 'Inga tider kvar att registrera.',
	'Reg_One_Slot_Left' => 'One slot left to register.',
	'Reg_Slots_Left' => '%s slots left to register.',
	'Reg_Self_Unregister' => 'Avregistrera',
	'Reg_Own_Confirmation' => 'Bekr�ftelse',
	'Reg_Own_Confirmed' => 'bekr�ftade',
	'Reg_Green_Option' => 'Gr�nt Alternativ',
	'Reg_Blue_Option' => 'Bl�tt Alternativ',
	'Reg_Red_Option' => 'R�tt Alternativ',
	'Reg_Value_Max_Registrations' => 'Slots',
	'Reg_Do' => 'Anm�l Dig',
	'Reg_Maybe' => 'Ej S�ker',
	'Reg_Dont' => 'Inte Denna G�ng',
	'Reg_Head_Username' => 'Anv�ndare:',
	'Reg_Head_Time' => 'Datum:',
	'Reg_for' => 'K�r registrering f�r',
	'Reg_for_explain' => '[ Ange 0 eller l�mna blank f�r en o�ndligg registrering ]',
	'Reg_no_options_specified' => 'Du m�ste ange minst ett alternativ att registrera dig f�r.',
	'Reg_event_date' => '<b>Evenemangs datum: </b>',
	// Event Registration - END
	
	'REPLY_PREFIX_OLD' => 'Re: ',
	'REPLY_PREFIX' => 'Re: ',
	
	'READ_ONLY_FORUM' => 'Vi beklagar, men nu �r forumet inst�llt p� <b> L�S BARA </ b> mode vilket inneb�r att du kan inte skicka �ven om du har r�tt till det. F�rs�k igen senare. ',

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
$lang['All_times'] = 'All tid �r %s'; // eg. All times are GMT - 12 Hours (times from next block)

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
$lang['datetime']['Sun'] = 'S�n';
$lang['datetime']['Mon'] = 'M�n';
$lang['datetime']['Tue'] = 'Tis';
$lang['datetime']['Wed'] = 'Ons';
$lang['datetime']['Thu'] = 'Tor';
$lang['datetime']['Fri'] = 'Fre';
$lang['datetime']['Sat'] = 'L�r';
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