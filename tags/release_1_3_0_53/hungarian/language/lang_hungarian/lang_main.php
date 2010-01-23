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

$lang = array_merge($lang, array (
  'BBC_IP_CREDITS_STATIC' => '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="http://www.icyphoenix.com/images/logo_ip.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #ff5500;"><b>Mighty Gorgon</b></span><br />
<i>(Luca Libralato)</i><br />
<b><i>Fejleszt�</i></b><br />
�rdekl�d�s: Heroes Of Might And Magic III, 69, #FF5522<br />
Hely: Homer\'s Head<br />
<br />
<br />
<span style="color: #dd2222;"><b>Bicet</b></span><br />
<b><i>phpBB XS fejleszt�</i></b><br />
<br />
<br />
<span style="color: #dd2222;"><b>hpl</b></span><br />
<b><i>K�l�n k�sz�net minden k�zrem�k�d�nek</i></b><br />
<br />
<br />
<b><i>K�zrem�k�dtek</i></b><br />
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
�rdekl�d�s: Icy Phoenix<br />
Hely: <a href="http://www.icyphoenix.com/">http://www.icyphoenix.com</a>
',

  'BBC_IP_CREDITS' => '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>',  
  
  'Home' => 'Home',
  'Forum' => 'F�rum',
  'Category' => 'T�mak�r',
  'Topic' => 'T�ma',
  'Topics' => 'T�m�k',
  'Replies' => 'V�laszok',
  'Views' => 'Megtekintve',
  'Post' => 'Hozz�sz�l�s',
  'Posts' => 'Hozz�sz�l�sok',
  'Posted' => 'Elk�ldve',
  'Username' => 'Felhaszn�l�n�v',
  'Password' => 'Jelsz�',
  'Email' => 'Email',
  'Poster' => 'K�ld�',
  'Author' => 'Szerz�',
  'Time' => 'Id�',
  'Hours' => '�ra',
  'Message' => '�zenet',
  
  '1_Day' => '1 nap',
  '7_Days' => '7 nap',
  '2_Weeks' => '2 h�t',
  '1_Month' => '1 h�nap',
  '3_Months' => '3 h�nap',
  '6_Months' => '6 h�nap',
  '1_Year' => '1 �v',
  
  'Go' => 'Mehet',
  'Jump_to' => 'Ugr�s',
  'Submit' => 'Elk�ld',
  'Reset' => 'T�r�l',
  'Cancel' => 'M�gsem',
  'Preview' => 'El�n�zet',
  'Confirm' => 'Elfogad',
  'Spellcheck' => 'Helyes�r�s',
  'Yes' => 'Igen',
  'No' => 'Nem',
  'Enabled' => 'Bekapcsolva',
  'Disabled' => 'Kikapcsolva',
  'Error' => 'Hiba',
  
  'GO' => 'Mehet',
  'JUMP_TO' => 'Ugr�s ide: ',
  'SUBMIT' => 'Elk�ld',
  'RESET' => 'Reset',
  'CANCEL' => 'M�gsem',
  'PREVIEW' => 'El�n�zet',
  'CONFIRM' => 'Elfogad',
  'YES' => 'Igen',
  'NO' => 'Nem',
  'ENABLED' => 'Elged�lyez',
  'DISABLED' => 'Letilt',
  'ERROR' => 'Hiba',
  
  'Next' => 'K�vetkez�',
  'Previous' => 'El�z�',
  'Goto_page' => 'Ugr�s a k�v. oldalra:',
  'Joined' => 'Csatlakozott',
  'IP_Address' => 'IP-c�m',
  
  'Select_forum' => 'F�rum kiv�laszt�sa',
  'View_latest_post' => 'Legut�bbi hozz�sz�l�sok',
  'View_newest_post' => 'Leg�jabb hozz�sz�l�sok',
  'Page_of' => '<b>%d</b> / <b>%d</b> oldal', // Replaces with: Page 1 of 2 for example

  'ICQ' => 'ICQ sz�m',
  'AIM' => 'AIM c�m',
  'MSNM' => 'MSN Live',
  'YIM' => 'Yahoo Messenger',
  'SKYPE' => 'Skype',
  'Forum_Index' => 'F�rum',  // eg. sitename Forum Index, %s can be removed if you prefer
  
  'Post_new_topic' => '�j t�ma nyit�sa',
  'Reply_to_topic' => 'Hozz�sz�l�s a t�m�hoz',
  'Reply_with_quote' => 'Hozz�sz�l�s az el�zm�ny id�z�s�vel',
  
  'Click_return_topic' => '%sVisszat�r�s%s a t�m�hoz.', // %s's here are for uris, do not remove!
  'Click_return_login' => 'Kattints %side%s, hogy ism�t megpr�b�ld.',
  'Click_return_forum' => 'Kattints %side%s, hogy visszat�rj a f�rumba.',
  'Click_view_message' => 'Kattints %side%s a hozz�sz�l�sod megtekint�s�hez.',
  'Click_return_modcp' => '%sVisszat�r�s%s a Moder�tor vez�rl�pulthoz.',
  'Click_return_group' => '%sVisszat�r�s%s a csoporthoz.',
  
  'Admin_panel' => 'F�rum adminisztr�ci�',
  
  'Board_disabled' => 'Eln�z�st, de az oldal jelenleg nem el�rhet�. K�rlek n�zz vissza k�s�bb.',
  
// Global Header strings
  'Registered_users' => 'Regisztr�lt felhaszn�l�k:',
  'Browsing_forum' => 'Jelenl�v� f�rumoz�k:',
  'Online_users_zero_total' => '�sszesen <b>0</b> felhaszn�l� van jelen :: ',
  'Online_users_total' => 'Jelenleg <b>%d</b> felhaszn�l� van itt :: ',
  'Online_user_total' => 'Jelenleg <b>%d</b> felhaszn�l� van itt :: ',
  'AC_Online_users_zero_total' => 'Jelenleg nincs felhaszn�l� a cseveg�ben: ',
  'AC_Online_users_total' => '�sszesen <b>%d</b> felhaszn�l� a cseveg�ben: ',
  'AC_Online_user_total' => '�sszesen <b>1</b> felhaszn�l� a cseveg�ben: ',
  'Reg_users_zero_total' => '0 regisztr�lt, ',
  'Reg_users_total' => '%d regisztr�lt, ',
  'Reg_user_total' => '%d regisztr�lt, ',
  'Hidden_users_zero_total' => '0 rejtett �s ',
  'Hidden_user_total' => '%d rejtett �s ',
  'Hidden_users_total' => '%d rejtett �s ',
  'Guest_users_zero_total' => '0 vend�g',
  'Guest_users_total' => '%d vend�g',
  'Guest_user_total' => '%d vend�g',
  'Record_online_users' => 'A legt�bb felhaszn�l� (<b>%s</b> f�) %s-kor volt.', // first %s = number of users, second %s is the date.

  'Admin_online_color' => '%sAdminisztr�tor%s',
  'Mod_online_color' => '%sModer�tor%s',
  
  'You_last_visit' => 'Legutols� l�togat�sod d�tuma: %s', // %s replaced by date/time
  'Current_time' => 'Pontos id�: %s', // %s replaced by time
  
  'Search_new' => 'Friss hozz�sz�l�sok',
  'Search_your_posts' => '�zeneteid megtekint�se',
  'Search_unanswered' => 'Megv�laszolatlan �zenetek megtekint�se',
  
  'Register' => 'Regisztr�ci�',
  'Profile' => 'Profil',
  'Edit_profile' => 'Profil szerkeszt�se',
  'Search' => 'Keres�s',
  'Memberlist' => 'Taglista',
  'FAQ' => 'Gy.I.K.',
  'KB_title' => 'Tud�sb�zis',
  'BBCode_guide' => 'BBCode kalauz',
  'Usergroups' => 'Csoportok',
  'Last_Post' => 'Legutols� �zenet',
  'Moderator' => 'Moder�tor',
  'Moderators' => 'Moder�torok',
  
// Stats block text
  'Posted_articles_zero_total' => 'M�g nem k�ldtek be hozz�sz�l�st.', // Number of posts
  'Posted_articles_total' => '<b>%d</b> hozz�sz�l�s olvashat�.', // Number of posts
  'Posted_article_total' => '<b>%d</b> hozz�sz�l�s olvashat�.', // Number of posts
  'Registered_users_zero_total' => 'M�g nincs regisztr�lt felhaszn�l�.', // # registered users
  'Registered_users_total' => '<b>%d</b> regisztr�lt felhaszn�l�nk van.', // # registered users
  'Registered_user_total' => '<b>%d</b> regisztr�lt felhaszn�l�nk van.', // # registered users
  'Newest_user' => 'Leg�jabb regisztr�lt tagunk: <b>%s%s%s</b>', // a href, username, /a
  
  'No_new_posts_last_visit' => 'Nincsen �j hozz�sz�l�s a legutols� l�togat�sod �ta.',
  
  'No_new_posts_global_announcement' => 'Nincs �j [ Gl. esem�ny ]',
  'New_posts_global_announcement' => '�j [ Gl. esem�ny ]',
  'No_new_posts_announcement' => 'Nincs �j [ Esem�ny ]',
  'New_posts_announcement' => '�j [ Esem�ny ]',
  'No_new_posts_sticky' => 'Nincs �j [ Fontos ] hozz�sz�l�s',
  'New_posts_sticky' => '�j [ Fontos ] hozz�sz�l�sok',
  'No_new_posts_locked' => 'Nincsenek �j [ Lez�rt ] hozz�sz�l�s',
  'New_posts_locked' => '�j [ Lez�rt ] hozz�sz�l�sok',
  'No_new_posts' => 'Nincsenek �j hozz�sz�l�sok',
  'New_posts' => '�j hozz�sz�l�sok',
  'New_post' => '�j hozz�sz�l�s',
  'No_new_posts_hot' => 'Nincs �j [ N�pszer� ] hozz�sz�l�s',
  'New_posts_hot' => '�j [ N�pszer� ] hozz�sz�l�sok',
  
  'Forum_no_new_posts' => 'Nincs �j [Forum] hozz�sz�l�s',
  'Forum_new_posts' => '�j [Forum] hozz�sz�l�s',
  'Cat_no_new_posts' => 'Nincs �j [Kateg�ria] hozz�sz�l�s',
  'Cat_new_posts' => '�j [Kateg�ria] hozz�sz�l�s',
  'Forum_is_locked' => 'Lez�rt f�rum',
  
// Login
  'Enter_password' => 'A bel�p�shez add meg a felhaszn�l�neved �s jelszavad.',
  'Login' => 'Bel�p�s',
  'Logout' => 'Kil�p�s',
  'Forgotten_password' => 'Elfelejtettem a jelsz�t!',
  'AUTOLOGIN' => 'Log me on automatically each visit',
  'Error_login' => 'Hib�s, vagy inakt�v felhaszn�l�nevet �s/vagy hib�s jelsz�t adt�l meg!',

// Index page
  'No_Posts' => 'Nincs hozz�sz�l�s.',
  'No_forums' => 'Nincsenek f�rumok.',
  
  'Private_Message' => 'Priv�t �zenet',
  'Private_Messages' => 'Priv�t �zenetek',
  'Who_is_Online' => 'Ki online?',
  
  'Mark_all_forums' => '�sszes f�rum megjel�l�se olvasottk�nt',
  'Forums_marked_read' => '�sszes f�rum megjel�lve olvasottk�nt.',
  
// Viewforum
  'View_forum' => 'F�rum megtekint�se',
  
  'Forum_not_exist' => 'A kiv�lasztott f�rum nem l�tezik.',
  'Reached_on_error' => 'Hiba az k�rt oldal el�r�s�ben.',
  
  'Display_topics' => '�sszes t�ma mutat�sa',
  'All_Topics' => '�sszes t�ma',
  
  'Topic_News_nb' => 'H�rek',
  'Topic_global_announcement_nb' => 'Glob�lis esem�ny',
  'Topic_Announcement_nb' => 'Esem�ny',
  'Topic_Sticky_nb' => 'Fontos',
  'Topic_Moved_nb' => '�thozott',
  'Topic_Poll_nb' => 'Szavazat',
  'Topic_Event_nb' => 'Esem�ny',
  'Topic_Announcement' => '<b>Esem�ny:</b>',
  'Topic_Sticky' => '<b>Fontos:</b>',
  'Topic_Moved' => '<b>�rny�k:</b>',
  'Topic_Poll' => '<b>[ Szavaz�s ]</b>',
  'Topic_Event' => '<b>Esem�ny:</b>',
  'Topic_global_announcement' => '<b>Glob�lis esem�ny:</b>',
  'Post_global_announcement' => 'Glob�lis esem�ny',
  
  
  'Mark_all_topics' => '�sszes t�ma megjel�l�se olvasottk�nt',
  'Topics_marked_read' => '�sszes t�ma megjel�lve olvasottk�nt.',

/*
  'Rules_post_can' => '<b>K�sz�thetsz</b> �j t�m�kat ebben a f�rumban.',
  'Rules_post_cannot' => '<b>Nem</b> k�sz�thetsz �j t�m�kat ebben a f�rumban.',
  'Rules_reply_can' => '<b>V�laszolhatsz</b> egy t�m�ra ebben a f�rumban.',
  'Rules_reply_can_own' => '<b>Tudsz</b> a saj�t t�m�dban v�laszolni',
  'Rules_reply_cannot' => '<b>Nem</b> v�laszolhatsz egy t�m�ra ebben a f�rumban.',
  'Rules_edit_can' => '<b>M�dos�thatod</b> a hozz�sz�l�saidat a f�rumban.',
  'Rules_edit_cannot' => '<b>Nem</b> m�dos�thatod a hozz�sz�l�saidat a f�rumban.',
  'Rules_delete_can' => '<b>T�r�lheted</b> a hozz�sz�l�saidat a f�rumban.',
  'Rules_delete_cannot' => '<b>Nem</b> t�r�lheted a hozz�sz�l�saidat a f�rumban.',
  'Rules_vote_can' => '<b>Szavazhatsz</b> ebben a f�rumban.',
  'Rules_vote_cannot' => '<b>Nem</b> szavazhatsz ebben f�rumban.',
*/
  'Rules_post_can' => '<b>Nyithatsz</b> �j t�m�kat',
  'Rules_post_cannot' => '<b>Nem nyithatsz</b> �j t�m�t',
  'Rules_reply_can' => '<b>V�laszolhatsz</b> a t�m�ra.',
  'Rules_reply_can_own' => '<b>Tudsz v�laszolni</b> a saj�t t�m�dban.',
  'Rules_reply_cannot' => '<b>Nem v�laszolhatsz</b> a t�m�ra.',
  'Rules_edit_can' => '<b>M�dos�thatod</b> a hozz�sz�l�saidat.',
  'Rules_edit_cannot' => '<b>Nem m�dos�thatod</b> a hozz�sz�l�saidat.',
  'Rules_delete_can' => '<b>T�r�lheted</b> a hozz�sz�l�saidat.',
  'Rules_delete_cannot' => '<b>Nem t�r�lheted</b> a hozz�sz�l�saidat.',
  'Rules_vote_can' => '<b>Szavazhatsz</b>.',
  'Rules_vote_cannot' => '<b>Nem szavazhatsz</b>.',
  'Rules_moderate' => '<b>%sModer�lhatod%s</b> ezt a f�rumot.', // %s replaced by a href links, do not remove!
  
//  'No_topics_post_one' => 'Nincsenek t�m�k a f�rumban.<br />Kattints az <b>�j t�ma k�sz�t�s�re</b>.',
  'No_topics_post_one' => 'Nincsenek t�m�k a f�rumban vagy a megadott felt�teleknek nem felel meg egyik t�ma sem.<br />Kattints az <b>�j t�ma k�sz�t�s�re</b> vagy adj meg m�s felt�telt.',

// Viewtopic
  'View_topic' => 'T�ma megtekint�se',
  
  'Guest' => 'Vend�g',
  'Post_subject' => 'Hozz�sz�l�s t�m�ja',
  'View_next_topic' => 'K�vetkez� t�ma megtekint�se',
  'View_previous_topic' => 'El�z� t�ma megtekint�se',
  'Submit_vote' => 'Szavaz�s k�ld�se',
  'View_results' => 'Eredm�ny megtekint�se',
  
  'No_newer_topics' => 'Nincsenek �jabb t�m�k a f�rumban.',
  'No_older_topics' => 'Nincsenek r�gbbi t�m�k a f�rumban.',
  'Topic_post_not_exist' => 'A t�ma vagy hozz�sz�l�s nem l�tezik.',
  'No_posts_topic' => 'Nincs hozz�sz�l�s a t�m�ban.',
  
  'Display_posts' => 'Hozz�sz�l�sok megtekint�se',
  'All_Posts' => '�sszes',
  'Newest_First' => '�jak el�re',
  'Oldest_First' => 'R�gebbiek el�re',
  
  'Back_to_top' => 'Vissza az elej�re',
  'Back_to_bottom' => 'Lap alj�ra',
  
  'Read_profile' => 'Felhaszn�l� profilj�nak megtekint�se',
  'Send_email' => 'Email k�ld�se',
  'Visit_website' => 'Felhaszn�l� weblapj�nak megtekint�se',
  'ICQ_status' => 'ICQ st�tusz',
  'Edit_delete_post' => 'Hozz�sz�l�s szerkeszt�se/t�rl�se',
  'View_IP' => 'Felhaszn�l� IP-c�me',
  'Delete_post' => 'Hozz�sz�l�s t�rl�se',
  
  'wrote' => '�rta', // proceeds the username and is followed by the quoted text
  'Quote' => 'Id�zet', // comes before bbcode quote output.
  'Code' => 'K�d', // comes before bbcode code output.
  
  'Edited_time_total' => 'A hozz�sz�l�st %s szerkesztette %s-kor; eddig %d alkalommal', // Last edited by me on 12 Oct 2001; edited 1 time in total
  'Edited_times_total' => 'A hozz�sz�l�st %s szerkesztette %s-kor; eddig %d alkalommal', // Last edited by me on 12 Oct 2001; edited 2 times in total
  
  'Lock_topic' => 'T�ma lez�r�sa',
  'Unlock_topic' => 'T�ma megnyit�sa',
  'Move_topic' => 'T�ma �thelyez�se',
  'Delete_topic' => 'T�ma t�rl�se',
  'Split_topic' => 'T�ma sz�tv�laszt�sa',
  
  'Stop_watching_topic' => 'Leiratkoz�s a t�m�r�l',
  'Start_watching_topic' => 'Feliratkoz�s a t�m�ra',
  'No_longer_watching' => 'T�ma figyel�se megsz�ntetve!',
  'You_are_watching' => 'Feliratkozt�l a t�m�ra.',
  
  'Total_votes' => '�sszes szavazat',
  
// Posting/Replying (Not private messaging!)
  'Message_body' => '�zenet tartalma',
  'Topic_review' => 'T�ma el�n�zet',
  
  'No_post_mode' => 'Nincs hozz�sz�l�s-t�pus kiv�lasztva.', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normally)
  
  'Post_a_new_topic' => '�j t�ma k�ld�se',
  'Post_a_reply' => '�j v�lasz k�ld�se',
  'Post_topic_as' => 'T�ma k�ld�se, mint',
  'Edit_Post' => 'Hozz�sz�l�s szerkeszt�se',
  'Options' => 'Be�ll�t�sok',
  
  'PM_Read' => 'Olvasott PM',
  'PM_Unread' => 'Olvasatlan PM',
  'PM_Replied' => 'Megv�laszolt PM',
  
  'Post_Announcement' => 'Esem�ny',
  'New_post_Announcement' => '�j esem�ny',
  'Post_Sticky' => 'Fontos',
  'New_post_Sticky' => '�j fontos',
  'Post_Normal' => 'Norm�l',
  
  'Confirm_delete' => 'Biztosan t�r�lni akarod a hozz�sz�l�st?',
  'Confirm_delete_poll' => 'Biztosan t�r�lni akarod a szavaz�st?',
  
  'Flood_Error' => 'Nem k�ldhetsz r�vid id�n bel�l t�bb hozz�sz�l�st, v�rj egy kicsit.',
  'Empty_subject' => '�j t�ma ind�t�sakor add meg a c�m�t.',
  'Empty_message' => 'Nem k�ldhetsz �res hozz�sz�l�st.',
  'Forum_locked' => 'Lez�rt f�rum: ide nem k�ldhetsz t�m�t, v�laszt, nem szerkesztheted a hozz�sz�l�saidat.',
  'Topic_locked' => 'Lez�rt t�ma: ide nem �rhatsz v�laszt, �s nem szerkesztheted a hozz�sz�l�saidat.',
  'No_post_id' => 'Nincs hozz�sz�l�s azonos�t� meghat�rozva.',
  'No_topic_id' => 'V�lasz�zenet k�ld�s�hez v�lassz ki egy t�m�t.',
  'No_valid_mode' => 'Csak k�ldhetsz, szerkeszthetsz, vagy id�zhetsz hozz�sz�l�st. L�pj vissza, �s pr�b�ld �jra.',
  'No_such_post' => 'Nincsen ilyen hozz�sz�l�s. L�pj vissza, �s pr�b�ld �jra.',
  'Edit_own_posts' => 'Csak szerkesztheted a hozz�sz�l�saidat.',
  'Delete_own_posts' => 'Csak t�r�lheted a hozz�sz�l�saidat.',
  'Cannot_delete_replied' => 'Nem t�r�lhetsz olyan hozz�sz�l�st, melyre m�r �rkezett v�lasz.',
  'Cannot_delete_poll' => 'Nem t�r�lhetsz akt�v szavaz�st.',
  'Empty_poll_title' => 'Adj meg egy c�met a szavaz�snak.',
  'To_few_poll_options' => 'Legal�bb k�t v�laszt�si lehet�s�get adj meg.',
  'To_many_poll_options' => 'T�l sok v�laszt�si lehet�s�get adt�l meg.',
  'Post_has_no_poll' => 'A hozz�sz�l�shoz nem tartozik szavaz�s.',
  'Already_voted' => 'Egyszer m�r szavazt�l.',
  'No_vote_option' => 'V�lassz egy lehet�s�get a szavaz�sn�l.',
  
  'Add_poll' => 'Szavaz�s hozz�ad�sa',
  'Add_poll_explain' => 'Ha nem akarsz szavaz�st adni a t�m�hoz, hagyd �resen a mez�ket.',
  'Poll_question' => 'A szavaz�s k�rd�se',
  'Poll_option' => 'V�laszt�si lehet�s�g',
  'Add_option' => 'Hozz�ad�s',
  'Update' => 'Friss�t�s',
  'Delete' => 'T�r�l',
  'Poll_for' => 'A szavaz�s �rv�nyes',
  'Days' => 'nap', // This is used for the Run poll for ... Days + in admin_forums for pruning
  'Poll_for_explain' => '[ Hagyd �resen (vagy 0), ha soha sem j�r le a szavaz�s. ]',
  'Delete_poll' => 'Szavaz�s t�rl�se',
  
  'Disable_HTML_post' => 'HTML kikapcsol�sa a hozz�sz�l�sban',
  'Disable_ACRO_AUTO_post' => 'Akronizmusok �s Autolinkek tilt�sa ebben a hozz�sz�l�sban',
  'Disable_BBCode_post' => 'BBCode kikapcsol�sa a hozz�sz�l�sban',
  'Disable_Smilies_post' => 'Emotikonok kikapcsol�sa a hozz�sz�l�sban',
  
  'HTML_is_ON' => 'HTML <u>BE</u>',
  'HTML_is_OFF' => 'HTML <u>KI</u>',
  'BBCode_is_ON' => '%sBBCode%s <u>BE</u>',
  'BBCode_is_OFF' => '%sBBCode%s <u>KI</u>',
  'Smilies_are_ON' => 'Emotikonok <u>BE</u>',
  'Smilies_are_OFF' => 'Emotikonok <u>KI</u>',
  
  'Attach_signature' => 'Al��r�s hozz�ad�sa (az al��r�s megv�ltoztathat� a profilban)',
  'Notify' => '�rtes�t�s, ha v�lasz �rkezik',
  'Delete_post' => 'Hozz�sz�l�s t�rl�se',
  
  'Stored' => 'A hozz�sz�l�s sikeresen beker�lt a f�rumba!',
  'Deleted' => 'A hozz�sz�l�s t�rl�se siker�lt.',
  'Poll_delete' => 'A szavaz�s t�rl�se siker�lt.',
  'Vote_cast' => 'Szavaz�s elfogadva.',
  
  'Topic_reply_notification' => 'T�ma eml�keztet�',
  
  'Emoticons' => 'Emotikonok',
  'More_emoticons' => 'A t�bbi emotikon megtekint�se',
  
// Private Messaging
  'Private_Messaging' => 'Priv�t �zenetek',
  
  'Login_check_pm' => 'Priv�t �zeneteid olvas�s�hoz be kell jelentkezned',
  'New_pms' => '%d �j priv�t �zeneted van',
  'New_pm' => '%d �j priv�t �zeneted van',
  'No_new_pm' => 'Nincsen �j priv�t �zeneted',
  'Unread_pms' => '%d olvasatlan priv�t �zeneted van.', // You have 2 new messages
  'Unread_pm' => '%d olvasatlan priv�t �zeneted van.', // You have 1 new message
  'No_unread_pm' => 'Nincsen olvasatlan priv�t �zeneted.',
  'You_new_pm' => '�j priv�t �zenet �rkezett!',
  'You_new_pms' => '�j priv�t �zenetek �rkeztek!',
  'You_no_new_pm' => 'Nincs �j priv�t �zenet.',
  
  'Unread_message' => 'Olvasatlan �zenetek',
  'Read_message' => 'Olvasott �zenetek',
  
  'Read_pm' => '�zenet olvas�sa',
  'Post_new_pm' => '�zenet k�ld�se',
  'Post_reply_pm' => 'V�lasz az �zenetre',
  'Post_quote_pm' => '�zenet id�z�se',
  'Edit_pm' => '�zenet szerkeszt�se',
  
  'Inbox' => '�rkezett fi�k',
  'Outbox' => 'Kimen� fi�k',
  'Savebox' => 'Ment�s fi�k',
  'Sentbox' => 'Elk�ld�tt fi�k',
  'Flag' => 'Jel�l�s',
  'Subject' => 'T�ma',
  'From' => 'Felad�',
  'To' => 'C�mzett',
  'Date' => 'D�tum',
  'Mark' => 'Kijel�l�s',
  'Sent' => 'Elk�ld�tt',
  'Saved' => 'Elmentett',
  'Delete_marked' => 'Kijel�ltek t�rl�se',
  'Delete_all' => 'Mindegyik t�rl�se',
  'Save_marked' => 'Kijel�ltek ment�se',
  'Download_marked' => 'Kijel�lt let�lt�se',
  'Mailbox' => 'Levelez�s',
  'Save_message' => '�zenet ment�se',
  'Delete_message' => '�zenet t�rl�se',
  'Next_privmsg' => 'K�vetkez� priv�t �zenet',
  'Previous_privmsg' => 'El�z� priv�t �zenet',
  'No_newer_pm' => 'Nincs �jabb priv�t �zenet.',
  'No_older_pm' => 'Nincs r�gebbi priv�t �zenet.',
  'Display_messages' => '�zenetek megjelen�t�se',
  'All_Messages' => 'Minden �zenet',
  
  'No_messages_folder' => 'Nincs �zeneted ebben a fi�kban.',
  
  'PM_disabled' => 'Nincs lehet�s�g priv�t �zenet k�ld�s�re.',
  'Cannot_send_privmsg' => 'Sajnos nem k�ldhetsz priv�t �zeneteket. L�pj kapcsolatba az Adminisztr�torral.',
  'No_to_user' => 'Az �zenet k�ld�s�hez meg kell adnod a c�mzettet.',
  'No_such_user' => 'Ilyen nev� felhaszn�l� nem l�tezik.',
  
  'Disable_HTML_pm' => 'HTML kikapcsol�sa az �zenetben',
  'Disable_ACRO_AUTO_pm' => 'Letiltva az Akronizmusok �s az Autolinkek ebben az �zenetben',
  'Disable_BBCode_pm' => 'BBCode kikapcsol�sa az �zenetben',
  'Disable_Smilies_pm' => 'Emotikonok kikapcsol�sa az �zenetben',
  
  'Message_sent' => '�zenet elk�ldve.',
  
  'Click_return_inbox' => 'Kattints %side%s, hogy visszat�rj az �rkezett �zenetekhez.',
  'Click_return_index' => 'Kattints %side%s, hogy visszat�rj a Tartalomjegyz�khez.',
  
  'Send_a_new_message' => '�j priv�t �zenet k�ld�se',
  'Send_a_reply' => 'V�lasz a priv�t �zenetre',
  'Edit_message' => 'Priv�t �zenet szerkeszt�se',
  
  'Notification_subject' => '�j priv�t �zenet �rkezett!',
  
  'Find_username' => 'Felhaszn�l�n�v keres�se',
  'Find' => 'Tal�lat',
  'No_match' => 'Nincs tal�lat.',
  
  'No_post_id' => 'Nincs �zenet ID megadva',
  'No_such_folder' => 'Nem l�tezik ilyen fi�k.',
  'No_folder' => 'Nincs fi�k meghat�rozva.',
  
  'Mark_all' => 'Mind',
  'Unmark_all' => 'Semelyik',
  
  'Confirm_delete_pm' => 'Biztosan t�r�lni akarod az �zenetet?',
  'Confirm_delete_pms' => 'Biztosan t�r�lni akarod az �zeneteket?',
  
  'Inbox_size' => 'Az �rkezett fi�k %d%%-a telt meg.', // eg. Your Inbox is 50% full
  'Sentbox_size' => 'Az Elk�ld�tt fi�k %d%%-a telt meg.',
  'Savebox_size' => 'A Ment�s fi�k %d%%-a telt meg.',
  
  'Click_view_privmsg' => 'Kattints %side%s az �rkezett fi�kod megtekint�s�hez.',

// Profiles/Registration
  'Viewing_user_profile' => 'Profil megtekint�se :: %s', // %s is username
  'About_user' => '%s adatlapja', // %s is username
//Start Quick Administrator User Options and Information MOD
  'Quick_admin_options' => 'Gyors adminisztr�tori felhaszn�l�-inform�ci� �s opci�k',
  'Admin_edit_profile' => 'Felhaszn�l�i profil szerkeszt�se',
  'Admin_edit_permissions' => 'Felhaszn�l�i jogosults�gok szerkeszt�se',
  'User_active' => '<b>Akt�v</b> felhaszn�l�',
  'User_not_active' => '<b>Nem akt�v</b> felhaszn�l�',
  'Username_banned' => '<b>Banolt</b> felhaszn�l�',
  'Username_not_banned' => '<b>Nem banolt</b> felhaszn�l�',
  'User_email_banned' => '<b>Banolt</b> email c�m [ %s ]',
  'User_email_not_banned' => '<b>Nem banolt</b> email c�m [ %s ]',
//End Quick Administrator User Options and Information MOD
  'Preferences' => 'Be�ll�t�sok',
  'Items_required' => 'A csillaggal megjel�lt mez�k kit�lt�se k�telez�.',
  'Registration_info' => 'Regisztr�ci� inform�ci�',
  'Profile_info' => 'Profil inform�ci�',
  'Profile_info_warn' => 'Ezek az inform�ci�k mindenki sz�m�ra l�that�ak lesznek.',
  'Avatar_panel' => 'Avatar be�ll�t�s',
  'Avatar_gallery' => 'Avatar gal�ria',
  
  'Website' => 'Honlap',
  'Location' => 'Tart�zkod�si hely',
  'Contact' => 'Kapcsolat: ',
  'Email_address' => 'Email c�m',
  'Email' => 'Email',
  'Send_private_message' => 'Priv�t �zenet k�ld�se',
  'Hidden_email' => '[ Rejtett ]',
  'Search_user_posts' => '%s hozz�sz�l�sainak keres�se',
  'Interests' => '�rdekl�d�si k�r',
  'Occupation' => 'Foglalkoz�s',
  'Poster_rank' => 'Hozz�sz�l� Rang',
  
  'Total_posts' => '�sszes hozz�sz�l�sa',
  'User_post_pct_stats' => 'Az �sszes %.2f%%-ka', // 1.25% of total
  'User_post_day_stats' => 'Naponta %.2f hozz�sz�l�s', // 1.5 posts per day
  'Search_user_posts' => '%s minden hozz�sz�l�s�nak megtekint�se', // Find all posts by username
  'Search_user_topics_started' => 'Minden %s �ltal ind�tott t�ma megtekint�se', // Find all topics started by username
  
  'No_user_id_specified' => 'A felhaszn�l� nem l�tezik.',
  'Wrong_Profile' => 'Nem m�dos�thatod m�s profilj�t.',
  
// Invision View Profile - BEGIN
  'Invision_Active_Stats' => 'Aktivit�si statisztika',
  'Invision_Communicate' => 'El�rhet�s�g',
  'Invision_Info' => 'Inform�ci�',
  'Invision_Member_Group' => 'Csoporttags�g',
  'Invision_Member_Title' => 'Tags�gi c�m',
  'Invision_Most_Active' => 'Itt van: ',
  'Invision_Most_Active_Posts' => '%s hozz�sz�l�s ebben a f�rumban',
  'Invision_Details' => 'Hozz�sz�l�s r�szletez�s',
  'Invision_PPD_Stats' => 'Hozz�sz�l�s naponta',
  'Invision_Signature' => 'Al��r�s',
  'Invision_Website' => 'Weboldal',
  'Invision_Total_Posts' => '�sszes hozz�sz�l�s',
  'Invision_User_post_pct_stats' => '( �sszes hozz�sz�l�s %.2f%%-a az �v� )',
  'Invision_User_post_day_stats' => '%.2f hozz�sz�l�s per nap',
  'Invision_Search_user_posts' => 'Tagnak az �sszes hozz�sz�l�s�nak megkeres�se',
  'Invision_Posting_details' => 'Hozz�sz�l�s r�szletez�s',
// Invision View Profile - END

  'Only_one_avatar' => 'Csak egy avatart v�lassz ki.',
  'File_no_data' => 'A megadott webc�m nem tartalmaz adatot!',
  'No_connection_URL' => 'A megadott webc�mhez nem lehet csatlakozni!',
  'Incomplete_URL' => 'A megadott webc�m hi�nyos.',
  'Wrong_remote_avatar_format' => 'A t�voli avatar webc�me nem �rv�nyes.',
  'No_send_account_inactive' => 'A jelsz� sajnos nem k�rhet� le, mivel a felhaszn�l�n�v jelenleg inakt�v. L�pj kapcsolatba az Adminisztr�torral.',
  
  'Always_smile' => 'Mindig enged�lyezze a emotikonokat',
  'Always_html' => 'Mindig enged�lyezze a HTML-t',
  'Always_bbcode' => 'Mindig enged�lyezze a BBCode-ot',
  'Always_add_sig' => 'Mindig csatolja az al��r�somat',
  'Always_notify' => 'Mindig �rtes�tsen, ha v�lasz �rkezik',
  'Always_notify_explain' => 'K�ld egy emailt, ha hozz�sz�l�s �rkezik az adott t�m�ban. Ez b�rmikor megv�ltoztathat�, ha egy �jabb hozz�sz�l�st k�ldesz.',
  
  'Board_style' => 'Sablon',
  'Board_lang' => 'Nyelv',
  'No_themes' => 'Nincsenek sablonok az adatb�zisban.',
  'Timezone' => 'Id�z�na',
  'Date_format' => 'D�tum form�tum',
  'Date_format_explain' => 'A PHP <a href=\'http://hu.php.net/manual/hu/function.date.php#AEN22851\' target=\'_other\'>date()</a> f�ggv�nye szerint haszn�land�.',
  'Signature' => 'Al��r�s',
  'Signature_explain' => 'A hozz�sz�l�sok v�g�re ker�l� sz�veg. Legfeljebb %d karakter lehet.',
  'Public_view_email' => 'Email-c�m megjelen�t�se',
  
  'Current_password' => 'Jelenlegi jelsz�',
  'New_password' => '�j jelsz�',
  'Confirm_password' => 'Jelsz� meger�s�t�se',
  'Confirm_password_explain' => 'Ha meg szeretn�d v�ltoztatni a jelszavad, vagy az email c�med, meg kell adnod a jelenlegi jelszavad.',
  'password_if_changed' => 'Csak akkor kell megadnod a jelsz�t, ha meg akarod v�ltoztatni.',
  'password_confirm_if_changed' => 'A fenti jelsz� �rv�nyes�t�s�hez sz�ks�ges.',
  
  'Avatar' => 'Avatar',
  'Avatar_explain' => 'Egy k�p, mely a hozz�sz�l�sokban a nevedn�l lesz l�that�.<br />Az avatar nem lehet sz�lesebb, mint %d pixel, �s nem lehet magasabb, mint %d pixel. A m�rete nem lehet nagyobb, mint %d KByte.',
  'Upload_Avatar_file' => 'Avatar felt�lt�se a sz�m�t�g�pr�l',
  'Upload_Avatar_URL' => 'Avatar felt�lt�se webc�mr�l',
  'Upload_Avatar_URL_explain' => '�rd be az avatar k�p�nek webc�m�t (a k�p �t lesz m�solva erre az oldalra).',
  'Pick_local_Avatar' => 'Avatar kiv�laszt�sa a gal�ri�b�l',
  'Link_remote_Avatar' => 'Avatar k�p�nek belinkel�se',
  'Link_remote_Avatar_explain' => '�rd be az Avatar k�p�nek webc�m�t, amelyet be szeretn�l linkelni (a k�p nem lesz �tm�solva erre az oldalra).',
  'Avatar_URL' => 'Avatar k�p�nek webc�me',
  'Select_from_gallery' => 'Avatar kiv�laszt�sa a gal�ri�b�l',
  'View_avatar_gallery' => 'Gal�ria megtekint�se',
  
  'Select_avatar' => 'Avatar kiv�laszt�sa',
  'Return_profile' => 'M�gsem',
  'Select_category' => 'Kateg�ria kiv�laszt�sa',
  
  'Delete_Image' => 'K�p t�rl�se',
  'Current_Image' => 'Jelenlegi k�p',
  
  'Notify_on_privmsg' => '�rtes�t�s �j priv�t �zenet �rkez�sekor',
  'Popup_on_privmsg' => 'Felugr� ablak �j priv�t �zenet �rkez�sekor',
  'Popup_on_privmsg_explain' => 'N�h�ny sablon �j ablakot nyit, ha �j �zeneted �rkezik.',
  'Hide_user' => 'Online jelenl�t elrejt�se',
  
  'Profile_updated' => 'A profil megv�ltozott!',
  'Profile_updated_inactive' => 'A profil megv�ltozott, de mivel n�h�ny alapvet� inform�ci�n v�ltoztatt�l, �gy a hozz�f�r�sed inakt�vra v�ltozott. Ellen�rizd az email-c�medet, melyben megtal�lod az �jraaktiv�l�shoz sz�ks�ges inform�ci�kat, vagy ha ehhez adminisztr�tori j�v�hagy�s sz�ks�ges, v�rj m�g � reaktiv�lja a hozz�f�r�sedet.',
  
  'Password_mismatch' => 'A be�rt jelszavak nem egyeznek meg.',
  'Current_password_mismatch' => 'A jelenlegi jelsz� nem egyezik meg az adatb�zisban tal�lhat�val.',
  'Password_long' => 'A jelsz� nem lehet t�bb mint 32 karakter.',
  'Too_many_registers' => 'Egyszerre t�l sok regisztr�ci�val pr�b�lkozt�l. Pr�b�ld k�s�bb.',
  'Username_taken' => 'Ez a felhaszn�l�n�v m�r foglalt.',
  'Username_invalid' => 'A felhaszn�l�n�v olyan �rv�nytelen karaktert tartalmaz, mint p�ld�ul a \'.',
  'Username_disallowed' => 'Ez a felhaszn�l�n�v nem enged�lyezett.',
  'Email_taken' => 'Ezt az email-c�met m�r regisztr�lta egy m�sik felhaszn�l�.',
  'Email_banned' => 'Ez az email-c�m le van tiltva.',
  'Email_invalid' => '�rv�nytelen email-c�m.',
  'Signature_too_long' => 'T�l hossz� al��r�s.',
  'Fields_empty' => 'A csillaggal jel�lt mez�k kit�lt�se k�telez�.',
  'Avatar_filetype' => 'Az avatar k�p t�pusa csak JPG, GIF vagy PNG lehet.',
  'Avatar_filesize' => 'Az avatar k�p nem lehet nagyobb mint %d KByte.', // The avatar image file size must be less than 6 KB
  'Avatar_imagesize' => 'Az avatar nem lehet nagyobb mint %d pixel sz�les �s %d pixel magas.',
  
  'Welcome_subject' => '�dv�zl�nk a %s f�rumban!', // Welcome to my.com forums
  'New_account_subject' => '�j felhaszn�l�',
  'Account_activated_subject' => 'Felhaszn�l� aktiv�lva.',
  
  'Account_added' => 'K�sz�nj�k a regisztr�ci�dat, mely sikeresen befejez�d�tt. Most m�r bejelentkezhetsz a neveddel, �s a hozz� tartoz� jelsz�val.',
  'Account_inactive' => 'A regisztr�ci� sikeres volt, de a bel�p�s el�tt m�g aktiv�lnod kell az azonos�t�dat.<br />Az ezzel kapcsolatos inform�ci�k�rt n�zd meg a regisztr�ci�n�l megadott email-c�met.',
  'Account_inactive_admin' => 'A regisztr�ci� sikeres volt, de a f�rum haszn�lat�hoz az Adminisztr�tor j�v�hagy�sa sz�ks�ges.<br />R�videsen �rtes�t a regisztr�ci�d befejez�s�r�l, a felhaszn�l�neved aktiv�l�s�r�l.',
  'Account_active' => 'A felhaszn�l�neved aktiv�lva lett. K�sz�nj�k a regisztr�ci�t.',
  'Account_active_admin' => 'A felhaszn�l� aktiv�lva van.',
  'Reactivate' => 'Felhaszn�l�n�v �jraaktiv�l�sa!',
  'Already_activated' => 'M�r aktiv�ltad a felhaszn�l�nevedet.',
  'COPPA' => 'A felhaszn�l�n�v elk�sz�lt, de b�vebb inform�ci��rt olvasd el az emailt.',
  
  'Registration' => 'Felhaszn�l�i szab�lyzat',
  'Reg_agreement' => 'Noha az Adminisztr�tor, �s a moder�torok mindent megtesznek, hogy min�l hamarabb elt�vol�ts�k a F�rumb�l az �ltal�nosan kifog�solhat� anyagokat, lehetetlen, hogy minden egyes hozz�sz�l�st �tn�zzenek. Ebb�l ad�d�an elfogadom, hogy a F�rumon tal�lhat� �sszes hozz�sz�l�s a szerz� n�zeteit t�kr�zi, �s nem az Adminisztr�torok, Moder�torok, vagy a Webmester �ll�spontj�t - �gy �k nem v�llalnak felel�ss�get a hozz�sz�l�sok tartalm��rt.<br /><br/>Beleegyezek, hogy nem k�ld�k s�rteget�, obszc�n, vulg�ris, r�galmaz�, gy�l�letkelt�, t�mad�, vagy b�rmely m�s olyan tartalmat, illetve anyagot, mely t�rv�nyt s�rt. Mivel ez egy nyilv�nos f�rum, ez�rt olyan anyagot sem k�ld�k, mely ellent�tes az �ltal�nos k�z�zl�ssel. A fentiek megs�rt�se azonnali �s v�gleges t�rl�st von maga ut�n.<br/>Elfogadom, hogy a F�rum webmester�nek, az Adminisztr�tornak �s b�rmely Moder�tornak jog�ban �ll elt�vol�tani, szerkeszteni a hozz�sz�l�saimat, vagy lez�rni az �ltalam nyitott t�m�kat, amennyiben �gy �t�lik meg hogy ez sz�ks�ges. Mint felhaszn�l�, elfogadom, hogy n�h�ny, �ltalam megadott adat t�rol�sra ker�l a F�rum adatb�zis�ban. Ezek az inform�ci�k semmilyen m�don nem ker�lnek ki egy harmadik f�lhez, de sem az Adminisztr�tor sem a Moder�torok nem tudnak felel�ss�get v�llalni az adatok�rt egy esetleges "hacker-t�mad�s" eset�n.<br /><br />A F�rum "cookie"-kat (s�tiket) haszn�l, hogy adatokat t�roljon a felhaszn�l� sz�m�t�g�p�n, de egyik sem tartalmaz szem�lyes adatokat, melyek a regisztr�ci�n�l ker�ltek megad�sra: a cookie-k puszt�n technikai szempontb�l sz�ks�gesek.<br />A megadott email-c�m csak a regisztr�ci� (�s az �j jelsz�) �rv�nyes�t�s�hez sz�ks�geltetik, semmilyen m�s felhaszn�l�sra nem ker�l, �s a hozz�tartoz� szem�lyes adatok sem.<br /><br />',
  
  'Agreement' => 'Meg�llapod�s',
  'Agree_under_13' => '<b>Elfogadom</b> a felt�teleket, �s 13 �vesn�l <i>fiatalabb</i> vagyok.',
  'Agree_over_13' => '<b>Elfogadom</b> a felt�teleket.',
  'Agree_not' => '<b>Nem fogadom el</b> a felt�teleket.',
  'Agree_checkbox' => 'Tudom �s akarom teljes�teni ezeket a felt�teleket',
  'Agree_checkbox_Error' => 'Az "ELFOGADOM" rubrik�t meg kell jel�lni a regisztr�ci�s lap alj�n!',
  
  'Wrong_activation' => 'Az aktiv�ci�s kulcs nem egyezik meg az adatb�zisban l�v�vel.',
  'Send_password' => '�j jelsz� k�ld�se',
  'Password_updated' => 'Az �j jelsz� elk�sz�lt, ellen�rizd az email-c�medet a tov�bbi inform�ci�k�rt.',
  'No_email_match' => 'A megadott email-c�m nem tartozik ehhez a felhaszn�l�n�vhez.',
  'New_password_activation' => '�j jelsz� aktiv�ci�',
  'Password_activated' => 'A hozz�f�r�sedet �jraaktiv�ltuk. A bejelentkez�shez �rd be az emailben megadott jelsz�t.',
  
  'Send_email_msg' => 'Email �zenet k�ld�se',
  'No_user_specified' => 'Nem adt�l meg felhaszn�l�nevet.',
  'User_prevent_email' => 'A felhaszn�l� nem k�v�n emaileket fogadni. Pr�b�lj priv�t �zenetet k�ldeni.',
  'User_not_exist' => 'Ilyen felhaszn�l� nem l�tezik.',
  'CC_email' => 'M�solat k�ld�se magadnak',
  'Email_message_desc' => 'Az �zenet sima sz�vegk�nt lesz elk�ldve, ez�rt ne haszn�lj HTML-t vagy BBCode tageket. A v�laszc�m a te email-c�med lesz.',
  'Flood_email_limit' => 'Most nem k�ldhetsz t�bb emailt, pr�b�ld k�s�bb.',
  'Recipient' => 'C�mzett',
  'Email_sent' => 'Email elk�ldve.',
  'Send_Email' => 'Send e-mail',
  'Empty_sender_email' => 'A felad� c�m�t meg kell adnod.',
  'Empty_subject_email' => 'K�telez� a t�ma megad�sa.',
  'Empty_message_email' => 'Az �zenet �res. �rj egy �zenetet, miel�tt elk�ld�d a levelet.',


// Visual confirmation system strings
  'Confirm_code_wrong' => 'Az �rv�nyes�t� k�d hib�s.',
//  'Too_many_registers' => 'You have exceeded the number of attempts for this session. Please try again later.',
  'Confirm_code_impaired' => 'Ha l�t�si (vagy egy�b) probl�m�k folyt�n nem tudn�d elolvasni a k�dot, vedd fel a kapcsolatot az %sAdminisztr�torral%s.',
  'Confirm_code' => '�rv�nyes�t� k�d',
  'Confirm_code_explain' => 'A k�dot �gy kell beg�pelni, ahogy itt l�tod. �gyelj a kis- �s nagybet�kre, a 0 egy �tl�s vonallal van �th�zva.',



// Members list
  'Select_sort_method' => 'Rendez�si m�d kiv�laszt�sa',
  'Sort' => 'Rendez�s',
  'Sort_Top_Ten' => 'A legt�bb hozz�sz�l�st k�ld� 10 felhaszn�l�',
  'Sort_Joined' => 'Regisztr�ci� d�tuma',
  'Sort_Username' => 'Felhaszn�l�n�v',
  'Sort_Location' => 'Tart�zkod�si hely',
  'Sort_Posts' => '�sszes hozz�sz�l�s',
  'Sort_Email' => 'Email',
  'Sort_Website' => 'Honlap',
  'Sort_Ascending' => 'N�vekv�',
  'Sort_Descending' => 'Cs�kken�',
  'Order' => 'Sorrend',


// Group control panel
  'Group_Control_Panel' => 'Csoport vez�rl�pult',
  'Group_member_details' => 'Csoporttags�g r�szletek',
  'Group_member_join' => 'Csatlakoz�s egy csoporthoz',
  
  'Group_Information' => 'Csoport inform�ci�',
  'Group_name' => 'A csoport neve',
  'Group_description' => 'A csoport le�r�sa',
  'Group_membership' => 'Csoporttags�g',
  'Group_Members' => 'Csoporttagok',
  'Group_Moderator' => 'Csoport moder�tor',
  'Pending_members' => 'K�relmezett tags�gok',
  
  'Group_type' => 'A csoport t�pusa',
  'Group_open' => 'Ny�lt csoport',
  'Group_closed' => 'Z�rt csoport',
  'Group_hidden' => 'Rejtett csoport',
  
  'Current_memberships' => 'Aktu�lis tags�gok',
  'Non_member_groups' => 'Csoportok',
  'Memberships_pending' => 'Tags�gi k�relmek',
  
  'No_groups_exist' => 'Jelenleg m�g nincsen csoport a F�rumon.',
  'Group_not_exist' => 'A megadott csoport nem l�tezik.',
  
  'Join_group' => 'Csatlakoz�s a csoporthoz',
  'No_group_members' => 'A csoportnak nincsenek tagjai.',
  'Group_hidden_members' => 'A csoport rejtett, nem tudod megn�zni a tagjait.',
  'No_pending_group_members' => 'A csoportnak nincsenek f�gg� k�relmez�sben l�v� tagjai.',
  'Group_joined' => 'A jelentkez�s sikeresen megt�rt�nt!<br />A Csoport moder�tora �rtes�teni fog, ha elfogadta a k�relmedet.',
  'Group_request' => 'A csatlakoz�si k�relmed elk�sz�lt.',
  'Group_approved' => 'Csatlakoz�si k�relmed elfogadva.',
  'Group_added' => 'Csatlakozt�l a csoporthoz.',
  'Already_member_group' => 'M�r tagja vagy ennek a csoportnak.',
  'User_is_member_group' => 'A felhaszn�l� m�r most is tagja ennek a csoportnak.',
  'Group_type_updated' => 'Sikeresen megv�ltozott a csoport t�pusa.',
  'Could_not_add_user' => 'A kiv�lasztott felhaszn�l� nem l�tezik.',
  'Could_not_anon_user' => 'Nem k�sz�thetsz n�vtelen csoporttagot.',
  'Confirm_unsub' => 'Biztos le akarod mondani ezt a csoporttags�got?',
  'Confirm_unsub_pending' => 'A jelentkez�sed m�g nincs j�v�hagyva ehhez a csoporthoz, biztosan le akarod mondani?',
  'Unsub_success' => 'Sikeresen lemondtad a csoporttags�got.',
  'Approve_selected' => 'Kiv�lasztottak elfogad�sa',
  'Deny_selected' => 'Kiv�laszottak elutas�t�sa',
  'Not_logged_in' => 'Be kell jelentkezned, hogy csatlakozhass egy csoporthoz.',
  'Remove_selected' => 'Kijel�lt tagok t�rl�se',
  'Add_member' => 'Tag hozz�ad�sa',
  'Not_group_moderator' => 'Nem vagy a csoport moder�tora, �gy nem v�gezheted el ezeket a m�dos�t�sokat.',
  'Login_to_join' => 'A csatlakoz�shoz, vagy a csoporttags�gok ir�ny�t�s�hoz el�sz�r be kell jelentkezned.',
  'This_open_group' => 'Nyitott csoport, kattints a tags�g k�relmez�s�shez.',
  'This_closed_group' => 'Z�rt csoport, t�bb felhaszn�l� nem enged�lyezett.',
  'This_hidden_group' => 'Ehhez a rejtett csoporthoz nem lehet automatikusan �j felhaszn�l�kat adni!',
  'Member_this_group' => 'A csoport tagja vagy.',
  'Pending_this_group' => 'A csoport moder�tora m�g nem d�nt�tt a felv�teledr�l.',
  'Are_group_moderator' => 'A csoport moder�tora vagy.',
  'None' => 'Nincs',
  'Subscribe' => 'Jelentkez�s',
  'Unsubscribe' => 'Lemond�s',
  'View_Information' => 'Inform�ci�k a csoportr�l',

// Search
  'Search_query' => 'Keres�si felt�telek',
  'Search_options' => 'Keres�si be�ll�t�sok',
  
  'Search_keywords' => 'Keres�s kulcssz�ra',
  'Search_keywords_explain' => 'Haszn�lhatod az <u>AND</u> (�s) sz�t, hogy a keres�sben megadott �sszes sz� benne legyen a tal�latban, az <u>OR</u> (vagy) sz�t mellyel a "benne lehet" szavakat v�laszthatod el, �s a <u>NO</u> (nem) sz�t, mellyel kiz�rhatsz szavakat.<br />Haszn�lj *-ot a r�szleges szavakhoz.',
  'Search_author' => 'Szerz� keres�se',
  'Search_author_explain' => 'Haszn�lj *-ot a r�szleges szavakhoz.',
  'Search_author_topic_starter' => 'Search only topics started by this author',
  
  'Search_for_any' => 'Keres�s b�rmely kifejez�sre',
  'Search_for_all' => 'Keres�s az �sszes kifejez�sre',
  'Search_title_msg' => 'Keres�s t�ma c�mre, �s sz�vegre',
  'Search_title_only' => 'Csak a t�mac�mekben keres',
  'Search_msg_only' => 'Csak sz�vegben keresse',
  
  'Return_first' => 'A tal�lt t�m�k els�', // followed by xxx characters in a select box
  'characters_posts' => 'karakter�nek megjelen�t�se.',
  
  'Search_previous' => 'Keres�s az el�z� x id�tartamban', // followed by days, weeks, months, year, all in a select box
  
  'Sort_by' => 'Rendez�si felt�tel',
  'Sort_Time' => 'Bek�ld�s ideje',
  'Sort_Post_Subject' => 'T�ma',
  'Sort_Topic_Title' => 'T�ma c�me',
  'Sort_Author' => 'Szerz�',
  'Sort_Forum' => 'F�rum',
  
  'Display_results' => 'Tal�latok megjelen�t�se',
  'All_available' => '�sszes tal�lat',
  'No_searchable_forums' => 'Nincs jogod keresni az oldalon l�v� f�rumban.',
  
  'No_search_match' => 'A keres�si felt�teleknek egy f�rum, �s egy t�ma sem felelt meg.',
  'Found_search_match' => 'Keres�si tal�lat: %d', // eg. Search found 1 match
  'Found_search_matches' => 'Keres�si tal�latok: %d',
  
  'Close_window' => 'Ablak bez�r�sa',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
  'Sorry_auth_announce' => 'Csak a %s k�ldhetnek k�zlem�nyt ebbe a f�rumba.',
  'Sorry_auth_sticky' => 'Csak a %s k�ldhetnek kiemelt t�m�t ebbe a f�rumba.',
  'Sorry_auth_read' => 'Csak a %s olvashatj�k a f�rum t�m�it.',
  'Sorry_auth_post' => 'Csak a %s nyithatnek �j t�m�t ebben a f�rumban.',
  'Sorry_auth_reply' => 'Csak a %s v�laszolhatnek egy hozz�sz�l�sra ebben a f�rumban.',
  'Sorry_auth_edit' => 'Csak a %s szerkeszthetnek hozz�sz�l�sokat ebben a f�rumban.',
  'Sorry_auth_delete' => 'Csak a %s t�r�lhetnek hozz�sz�l�sokat ebben a f�rumban.',
  'Sorry_auth_vote' => 'Csak a %s szavazhatnek ebben a f�rumban.',

// These replace the %s in the above strings
  'Auth_Anonymous_Users' => '<b>vend�gek</b>',
  'Auth_Registered_Users' => '<b>regisztr�lt felhaszn�l�k</b>',
  'Auth_Self_Users' => '<b>a speci�lis felhaszn�l�k</b>',
  'Auth_Users_granted_access' => '<b>priv�t enged�llyel rendelkez� felhaszn�l�k</b>',
  'Auth_Moderators' => '<b>moder�torok</b>',
  'Auth_Administrators' => '<b>adminisztr�torok</b>',
  
  'Not_Moderator' => 'Nem vagy a moder�tor ezen a f�rumon.',
  'Not_Authorized' => 'Nem azonos�tott',
  
  'You_been_banned' => 'Ki lett�l tiltva err�l a f�rumr�l!<br />A tov�bbi tudnival�k�rt vedd fel a kapcsolatot a Webmesterrel, vagy az Adminisztr�torral.',

// Viewonline
  'Reg_users_zero_online' => '0 regisztr�lt felhaszn�l� �s ', // There are 5 Registered and
  'Reg_users_online' => '%d regisztr�lt felhaszn�l� �s ', // There are 5 Registered and
  'Reg_user_online' => '%d regisztr�lt felhaszn�l� �s ', // There are 1 Registered and
  'Hidden_users_zero_online' => '0 rejtett felhaszn�l� online', // 6 Hidden users online
  'Hidden_users_online' => '%d rejtett felhaszn�l� online', // 6 Hidden users online
  'Hidden_user_online' => '%d rejtett felhaszn�l� online', // 6 Hidden users online
  'Guest_users_online' => '%d vend�g online', // There are 10 Guest users online
  'Guest_users_zero_online' => '0 vend�g online', // There are 10 Guest users online
  'Guest_user_online' => '%d vend�g online', // There are 1 Guest users online
  'No_users_browsing' => 'Jelenleg egy felhaszn�l� sem b�ng�szi a f�rum oldalait',
  
  'Online_explain' => 'A fenti adat az elm�lt ' . intval(ONLINE_REFRESH / 60) . ' perc alapj�n k�sz�lt.',
  'Online_today' => 'Ez az adat a ma akt�v felhaszn�l�kat mutatja',
  
  'Forum_Location' => 'F�rum helye',
  'Last_updated' => 'Utols� friss�t�s',
  
  'Forum_index' => 'F�rum index',
  'Portal' => 'Home Page',
  'Logging_on' => 'Bejelentkez�s',
  'Posting_message' => '�zenet k�ld�se',
  'Searching_forums' => 'F�rumok keres�se',
  'Viewing_profile' => 'Profil megtekint�se',
  'Viewing_HACKSLIST' => 'K�sz�t�k list�ja',
  'Viewing_online' => 'Jelenl�v� felhaszn�l�k megtekint�se',
  'Viewing_member_list' => 'Taglista megtekint�se',
  'Viewing_priv_msgs' => 'Priv�t �zenetek megtekint�se',
  'Viewing_FAQ' => 'Gy.I.K. megtekint�se',
  'Viewing_KB' => 'TB megn�z�se',
  'Viewing_RSS' => 'RSS Feed',
  
  
// Moderator Control Panel
  'Mod_CP' => 'Moder�tor vez�rl�pult',
  'Mod_CP_explain' => 'Az al�bbi �rlap seg�ts�g�vel t�meges m�veleteket is v�gezhetsz a f�rumon. P�ld�ul: egyszerre b�rmennyi t�m�t lez�rhatsz, megnyithatsz, �thelyezhetsz vagy t�r�lhetsz.',
  
  'Select' => 'Kiv�laszt',
  'Delete' => 'T�r�l',
  'Move' => '�thelyez',
  'Copy' => 'M�sol',
  'Lock' => 'Lez�r',
  'Unlock' => 'Megnyit',
  
  'Topics_Removed' => 'A kiv�laszott t�m�k sikeresen t�r�lve lettek az adatb�zisb�l!',
  'Topics_Locked' => 'A kiv�laszott t�m�k le lettek z�rva!',
  'Topics_Moved' => 'A kiv�laszott t�m�k sikeresen �tker�ltek az �j helyre!',
  'Topics_Unlocked' => 'A kiv�laszott t�m�k sikeresen meg lettek nyitva!',
  'No_Topics_Moved' => 'Nem lett t�ma �thelyezve!',
  
  'Confirm_delete_topic' => 'Biztosan el akarod t�vol�tani a kiv�laszott t�m�(ka)t?',
  'Confirm_lock_topic' => 'Biztosan le akarod z�rni a kiv�lasztott t�m�(ka)t?',
  'Confirm_unlock_topic' => 'Biztosan meg akarod nyitni a kiv�lasztott t�m�(ka)t?',
  'Confirm_move_topic' => 'Biztosan �t akarod helyezni a kiv�lasztott t�m�(ka)t?',
  
  'Move_to_forum' => '�thelyez�s m�s f�rumba:',
  'Leave_shadow_topic' => 'Maradjon �rny�kt�ma a r�gi f�rumban.',
  
  'Split_Topic' => 'T�ma-sz�tv�laszt�',
  'Split_Topic_explain' => 'Az al�bbi mez�k haszn�lat�val egy t�m�t k�tf�lek�ppen v�laszthatsz sz�t: vagy az adott hozz�sz�l�sok kiemel�s�vel, vagy egy adott hozz�sz�l�st�l sz�m�tva',
  'Split_title' => 'A t�ma �j c�me',
  'Split_forum' => 'A t�ma �j f�ruma',
  'Split_posts' => 'Megjel�lt hozz�sz�l�sok sz�tv�laszt�sa',
  'Split_after' => 'Sz�tv�laszt�s a bejel�lt hozz�sz�l�st�l',
  'Topic_split' => 'A t�ma sz�tv�laszt�sa siker�lt!',
  
  'Too_many_error' => 'T�l sok hozz�sz�l�st v�lasztott�l ki. Csak egy hozz�sz�l�st v�lassz ki, az ut�na k�vetkez�k is kiemel�dnek!',
  
  'None_selected' => 'A m�velet v�grahajt�s�hoz t�m�t is ki kell v�lasztani. L�pj vissza, �s v�lassz ki legal�bb egyet.',
  'New_forum' => '�j f�rum',
  
  'This_posts_IP' => 'A hozz�sz�l�s IP-je',
  'Other_IP_this_user' => 'A felhaszn�l�hoz tartoz� egy�b IP-c�mek',
  'Users_this_IP' => 'Az IP-hez tartoz� felhaszn�l�k',
  'IP_info' => 'IP inform�ci�',
  'Lookup_IP' => 'IP keres�se',
  
// Errors (not related to a specific failure on a page)
  'Information' => 'Inform�ci�',
  'Critical_Information' => 'Kritikus inform�ci�',
  
  'General_Error' => '�ltal�nos hiba',
  'Critical_Error' => 'Kritikus hiba',
  'An_error_occured' => 'Hiba ad�dott',
  'A_critical_error' => 'Kritikus hiba ad�dott',
  'Admin_reauthenticate' => 'A f�rum adminisztr�ci�j�hoz �jra azonos�tanod kell magad.',
  
  'Topic_description' => 'A t�m�d meghat�roz�sa',
// 'Description' => 'Topic Description',

  'Guestbook' => 'Vend�gk�nyv',
  'Viewing_guestbook' => 'Vend�gk�nyv elolvas�sa',
  
  'Click_return_preferences' => 'Kattints %side%s Tulajdons�gokhoz val� visszat�r�shez',
  
  'Warn_new_post' => '�rkezett egy �j v�lasz ehhez a sz�lhoz. K�rlek n�zd meg a v�laszt, annak f�ny�ben fogalmazd �t �s k�ld el a v�laszod.',
  
  'Today_at' => '<b class="date-today">Ma</b> t�rt�nt ',
  'Yesterday_at' => '<b class="date-yesterday">Tegnap</b> t�rt�nt ',
  'TODAY' => '<b class="date-today">Today</b>',
  'YESTERDAY' => '<b class="date-yesterday">Yesterday</b>',

// Birthday - BEGIN
  'Birthday' => 'Sz�let�snap',
  'No_birthday_specify' => 'Nem meghat�rozott',
  'Age' => 'Kor',
  'Wrong_birthday_format' => 'The birthday format was entered incorrectly.',
  'Birthday_to_high' => 'Sorry, this site, does not accept user older than %d years old',
  'Birthday_require' => 'Your Birthday is required on this site',
  'Birthday_to_low' => 'Sorry, this site, does not accept user younger than %d years old',
  'Submit_date_format' => 'Y-m-d', //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different separators are accepted)
  'Birthday_greeting_today' => 'We would like to wish you congratulations on reaching %s years old today.<br /><br />&nbsp;',//%s is substituted with the users age
  'Birthday_greeting_prev' => 'We would like to give you belated congratulations for becoming %s years old on the %s.<br /><br />&nbsp;',//%s is substituted with the users age, and birthday
  'Greeting_Messaging' => 'Congratulations',
  'Birthday_today' => 'Users with a birthday today:',
  'Birthday_week' => 'Users with a birthday within the next %d days:',
  'Nobirthday_week' => 'No users are having a birthday in the upcoming %d days', // %d is substituted with the number of days
  'Nobirthday_today' => 'No users have a birthday today',
  'Year' => '�v',
  'Month' => 'H�nap',
  'Day' => 'Nap',
// Birthday - END

// Start add - Gender MOD
  'Gender' => 'Nem',//used in users profile to display which gender he/she is
  'Male' => 'F�rfi',
  'Female' => 'N�',
  'No_gender_specify' => 'Nem meghat�rozott',
  'Gender_require' => 'A nemed meghat�roz�sa k�telez� ezen az oldalon.',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
  'Topic_view_users' => 'A t�m�t megl�togat� felhaszn�l�k list�ja',
  'Topic_time' => 'Utolj�ra l�tta',
  'Topic_count' => 'T�masz�ml�l�',
  'Topic_view_count' => 'A t�m�t l�togat�k sz�ma',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
  'Give_G_card' => 'Felhaszn�l� �jraaktiv�l�sa',
  'Give_Y_card' => 'Felhaszn�l� #%d figyelmeztet�se',
  'Give_R_card' => 'Felhaszn�l� azonnali banol�sa',
  'Ban_update_sucessful' => 'A banlista sikeresen friss�tve',
  'Ban_update_green' => 'A felhaszn�l� �jraaktiv�lva',
  'Ban_update_yellow' => 'A felhaszn�l� figyelmeztetve lett. Jelenleg %d figyelmeztet�se van a maxim�lis %d-b�l',
  'Ban_update_red' => 'A felhaszn�l� banolva lett',
  'Ban_reactivate' => 'A hozz�f�r�sed �jra akt�v',
  'Ban_warning' => 'Egy figyelmeztet�st kapt�l',
  'Ban_blocked' => 'A hozz�f�r�sedet blokkolt�k',
  'Click_return_viewtopic' => 'Kattints %side%s a t�m�hoz val� visszat�r�shez',
/*
  'Rules_ban_can' => 'You <b>can</b> ban other users in this forum',
  'Rules_greencard_can' => 'You <b>can</b> un-ban users in this forum',
  'Rules_bluecard_can' => 'You <b>can</b> report post to moderators in this forum',
*/
  'Rules_ban_can' => '<b>Tudsz</b> banolni m�s felhaszn�l�kat ebben a f�rumban',
  'Rules_greencard_can' => 'Vissza <b>tudod</b> vonni egy felhaszn�l� banj�t',
  'Rules_bluecard_can' => '<b>Tudsz</b> jelent�st k�ldeni egy moder�tornak ebben a f�rumban',
  'user_no_email' => 'Ez a felhaszn�l� nem engedi meg, hogy levelet k�ldj�l neki, de priv�t �zenetet k�ldhetsz neki',
  'user_already_banned' => 'A kijel�lt felhaszn�l� m�r banolva van',
  'Ban_no_admin' => 'Ez a felhaszn�l� egy ADMIN, ez�rt nem banolhatod, nem figyelmeztetheted',
  'Give_b_card' => 'Jelented ezt a hozz�sz�l�st a f�rum egyik moder�tor�nak',
  'Clear_b_card' => 'Ennek a hozz�sz�l�snak m�r van %d k�k k�rty�ja. Ha megnyomod ezt a gombot, akkor lenull�z�dik',
  'No_moderators' => 'Ennek a f�rumnak nincsen moder�tora, nem tudsz senkinek sem jelenteni!',
  'Post_repported' => 'Ezt a hozz�sz�l�st jelentetted %d moder�tornak',
  'Post_repported_1' => 'Ezt a hozz�sz�l�st jelentetted egy moder�tornak',
  'Post_repport' => 'Hozz�sz�l�s jelent�se', //Subject in email notification
  'Post_reset' => 'A hozz�sz�l�s k�k k�rty�inak a sz�ml�l�sa �jra lett ind�tva',
  'Search_only_bluecards' => 'Keres�s csak k�k k�rty�s hozz�sz�l�sokban',
  'Send_message' => 'Kattints %side%s, ha �rsz egy �zenetet a moder�toroknak, vagy<br />',
  'Send_PM_user' => 'Kattints %side%s, ha �rsz egy priv�t �zenetet a felhaszn�lnak, vagy',
  'Link_to_post' => 'Kattints %side%s a jelentett hozz�sz�l�shoz val� visszat�r�shez
--------------------------------

',
  'Post_a_report' => 'Jelent�s k�ld�se',
  'Report_stored' => 'A jelent�sed sikeresen k�zbes�tve lett',
  'Send_report' => 'Kattints %side%s ide az eredeti �zenethez val� visszat�r�shez',
  'Red_card_warning' => 'A(z) %s felhaszn�l�nak piros lapot akarsz adni. Ezzel banolod a felhaszn�l�t az oldalr�l. Biztos ezt akarod tenni?',
  'Yellow_card_warning' => 'A(z) %s felhaszn�l�nak s�rga lapot akarsz adni. Ezzel figyelmeztet�sben r�szes�ted a felhaszn�l�t. Biztos ezt akarod tenni?',
  'Green_card_warning' => 'A(z) %s felhaszn�l�nak z�ld lapot akarsz adni. Ezzel megsz�nteted a felhaszn�l� banj�t. Biztos ezt akarod tenni?',
  'Blue_card_warning' => 'A(z) %s felhaszn�l�nak k�k lapot akarsz adni. Ezzel felh�vod a moder�torok figyelm�t erre a hozz�sz�l�sra. Biztos, hogy figyelmeztetni akarod a moder�torokat ezen hozz�sz�l�s kapcs�n?',
  'Clear_blue_card_warning' => 'Ezzel reseteled a hozz�sz�l�s k�k lap sz�ml�l�j�t. Biztos ezt akarod tenni?',
  'Warnings' => 'Figyelmeztet�s: %d', //shown beside users post, if any warnings given to the user
  'Banned' => 'Jelenleg banolva',//shown beside users post, if user are banned

// Last visit - BEGIN
  'Last_logon' => 'Utols� l�togat�',
  'Hidde_last_logon' => 'Rejtett',
  'Never_last_logon' => 'Soha',
  'Users_today_zero_total' => '�sszesen <b>0</b> felhaszn�l� l�tta ezt az oldalt ma: ',
  'Users_today_total' => '�sszesen <b>%d</b> felhaszn�l� l�tta ezt az oldalt ma: ',
  'User_today_total' => '�sszesen <b>%d</b> felhaszn�l� l�tta ezt az oldalt ma: ',
  'Users_lasthour_explain' => ', %d of them within the last hour.',
  'Users_lasthour_none_explain' => '', //shown if no one has visited in the last hour, fill if you like
  
  'Years' => '�v',
  'Year' => '�v',
  'Weeks' => 'H�t',
  'Week' => 'H�t',
  'Day' => 'Nap',
  'Total_online_time' => '�sszes online id�',
  'Last_online_time' => 'Utols� online id�',
  'Number_of_visit' => 'L�togat�sok sz�ma',
  'Number_of_pages' => 'Megtekintett lapok sz�ma',
// Last visit - END

  'total_site_hits_key' => '%V% oldalt l�tott %D% �ta.',
  
  'Message_too_short' => 'Az �zenet t�l r�vid',
  
// Start add - Online/Offline/Hidden Mod
  'Online' => 'Online',
  'Offline' => 'Offline',
  'Hidden' => 'Rejtett',
  
  'Online_status' => 'St�tusz',
// End add - Online/Offline/Hidden Mod
  'Download' => 'Let�lt�s',

//signature editor
  'sig_edit_link' => 'Al��r�s',
  'sig_description' => 'Al��r�s szerkeszt�se (<b>El�n�zettel</b>)',
  'sig_edit' => 'Al��r�s szerkeszt�se',
  'sig_current' => 'Jelenlegi al��r�s',
  'sig_none' => 'Nincs el�rhet� al��r�s',
  'sig_save' => 'Ment',
  'sig_save_message' => 'Az al��r�s sikeresen mentve!',
  
  'Statistics' => 'Statisztik�k',
  
// Start add - Global announcement MOD
  'Globalannounce' => 'Glob�lis esem�ny',
  'Globalannounce' => '�j Glob�lis esem�ny',
// End add - Global announcement MOD
  'Global_Announcements' => 'Glob�lis esem�nyek',
  'Announcements' => 'Esem�nyek',
  'Sticky_Topics' => 'Fontos t�m�k',
  'Announcements_and_Sticky' => 'Esem�nyek �s fontos t�m�k',
// db_update generator
  'Db_update_generator' => 'DB Update Generator',
  'Instructions' => 'Instructions',
  'SQL_instructions' => '<p>This piece of software will create PHP files that will allow you to update your database using your browser. There are a few things you must look after when you insert an SQL in the box below.<br />First of all, make sure that every SQL query is ending with a semicolon (;). If not, the file created will be faulty. Next, ensure that the tables have the "phpbb_" prefix. This will automatically be replaced with a little piece of code that enables you to use the db_update.php file on any forum regardless of what the table prefix is set to.</p>',
  'Enter_SQL' => '<strong>Enter SQL</strong>',
  'Enter_SQL_explain' => '<strong>MySQL</strong> is the world\'s most popular open source database, recognized for its speed and reliability.',
  'Output_SQL' => '<strong>SQL Output</strong>',
  'Output_SQL_explain' => 'Copy and paste the text from the text area on the right into a blank file. Save the file as <u>db_update.php</u> and upload it to your server. Run it once by accessing with your browser.<br /><br />Alternatively, click the download button to download the file directly to your computer <strong>(recommended)</strong>.',
  'Download' => 'Let�lt�s',

  'TOP_POSTERS' => 'Legt�bbet hozz�sz�l�k',
  
// TELL A FRIEND
  'TELL_FRIEND' => 'Email egy bar�tnak',
  'TELL_FRIEND_SENDER_USER' => 'A neved',
  'TELL_FRIEND_SENDER_EMAIL' => 'Az email c�med',
  'TELL_FRIEND_RECEIVER_USER' => 'A bar�tod neve',
  'TELL_FRIEND_RECEIVER_EMAIL' => 'A bar�tod email c�me',
  'TELL_FRIEND_WRONG_EMAIL' => 'Nem �rv�nyes a megadott email c�m.',
  'TELL_FRIEND_MSG' => 'Az �zeneted:',
  'TELL_FRIEND_TITLE' => 'Tell A Friend',
  'TELL_FRIEND_BODY' => 'Szia!\nA {SITENAME} f�rum�n j�rtam, �s olvastam egy t�m�t, ami szerintem t�ged �rdekelni fog: &raquo;{TOPIC}&laquo;.\n\nTess�k a link: {LINK}\n\nMenj, �s olvasd el. Ha szeretn�l r� v�laszolni tudsz regisztr�lni egy saj�t felhaszn�l�t p�r perc alatt.',

// Begin Thanks Mod
  'thankful' => 'K�sz�n�m emberek',
  'thanks_to' => 'K�sz�n�m a t�m�t',
  'thanks_end' => ':',
  'thanks_alt' => 'Nagyon tetszett a t�ma',
  'thanks_add_rate' => 'K�sz�n�m a szerz�nek ezt a hasznos t�m�t',
  'thanked_before' => 'M�r megk�sz�nted ezt a t�m�t',
  'thanks_add' => 'A k�sz�netedet �tadtuk',
  'thanks_not_logged' => 'Be kell jelentkezned miel�tt megk�sz�nsz egy t�m�t',
  'thanks2' => 'Nagyon sz�pen k�sz�n�m!<br />',
// End Thanks Mod

//Begin Lo-Fi Mod
  'Lofi' => 'Lo-Fi Verzi�',
// 'Full_Version' => 'Teljes verzi�',
  'Full_Version' => 'Ez a "Lo-Fi" verzi�j� tartalom. A teljes min�s�g� verzi� t�bb inform�ci�t tartalmaz, mert k�peket �s szembar�t form�z�sokat tartalmaz. K�rlek kattints ide.',
  'quote_lofi' => 'Id�zet',
  'edit_lofi' => 'Szerkeszt',
  'ip_lofi' => 'IP',
  'del_lofi' => 'T�r�l',
  'profile_lofi' => 'Profil',
  'pm_lofi' => 'P�',
  'email_lofi' => 'Email',
  'website_lofi' => 'Weboldal',
  'icq_lofi' => 'ICQ',
  'aim_lofi' => 'AIM',
  'yim_lofi' => 'YIM',
  'msnm_lofi' => 'MSN',
  'quick_lofi' => 'Gyors v�lasz',
  'new_pm_lofi' => 'Egy P� k�ld�se',
//End Lo-Fi Mod

// Retroactive Signature MOD
  'Retro_sig' => 'A r�gebbi v�laszaim al� is tegye oda az al��r�som',
  'Retro_sig_explain' => 'Ha hozz�adsz/lecser�lsz egy al��r�st, akkor az norm�lis esetben csak az ezek ut�n bek�ld�tt hozz�sz�l�said alatt lesz l�that�',
  'Retro_sig_checkbox' => 'Jel�ld be, ha szeretn�d, hogy a r�gebbi hozz�sz�l�said alatt is megjelenjen az al��r�sod',
// End Retro Sig MOD

  'legend' => 'T�rt�net',
  'users' => 'Felhaszn�l�k',
//added to autogroup mod
  'No_more' => 'nincs t�bb elfogadott felhaszn�l�',
  'No_add_allowed' => 'automatikus felhaszn�l�felv�tel nincs enged�lyezve',
  'Join_auto' => 'Csatlakozhatsz a csoporthoz, mert a minim�lis hozz�sz�l�ssz�mot teljes�tetted',

// merge topics
  'Merge' => '�sszevon',
  'Merge_topic' => 'T�ma �sszevon�sa',
  'Topics_Merged' => 'A t�ma be lett emelve a t�m�ba.',
  'No_Topics_Merged' => 'A t�m�k nem beemelhet�ek.',
  'Confirm_merge_topic' => 'T�nyleg szeretn�d beemelni a kijel�lt t�m�t?',
  
  'Downloads' => 'Let�lt�sek',
  
// Start add - Bin Mod
  'Move_bin' => 'T�ma szemetesbe helyez�se',
  'Topics_Moved_bin' => 'A kijel�lt t�m�k a szemetesbe lettek mozgatva.',
  'Bin_disabled' => 'A szemetes le van tiltva',
  'Bin_recycle' => 'Szemetes',
// End add - Bin Mod
  'Recent_topics' => 'Friss t�m�k', // Recent Topics

  'Topics_Title_Edited' => 'A kijel�lt t�ma c�me sikeresen szerkesztve.',
  'Edit_title' => 'C�m szerkeszt�se',
  'PM' => 'P�',
  
// Start Advanced IP Tools Pack MOD
  'Moderator_ip_information' => 'Az IP inform�ci�kat csak moder�torok l�thatj�k',
  'Registered_ip_address' => 'Regisztr�lt IP c�m',
  'Registered_hostname' => 'Regisztr�lt g�pn�v',
  'Other_registered_ips' => 'A %s c�mr�l regisztr�lt m�s felhaszn�l�k', //%s is the IP address
  'Other_posted_ips' => 'IP c�mek, ahonnan ez a felhaszn�l� hozz�sz�lt',
  'Search_ip' => 'Hozz�sz�l�sok err�l az IP c�mr�l',
  'Search_ip_explain' => 'Az IP c�m <u>127.0.0.1</u>-hez hasonl� form�tum� -- haszn�lhatod a *-ot jolly karakternek, hogy egy tartom�nyt lefedj�l. Pl.: <u>127.*.*.1</u>',
  'IP' => 'IP',
  'Whois' => 'Whois',
  'Browser' => 'B�ng�sz�',
  'No_other_registered_ips' => 'Nem regisztr�lt m�s felhaszn�l� err�l az IP c�mr�l.',
  'No_other_posted_ips' => 'Ez a felhaszn�l� m�g nem sz�lt hozz�.',
  'Not_recorded' => 'Nem r�gz�tett',
  'Logins' => 'Bel�p�sek',
  'No_logins' => 'Ennek a felhaszn�l�nak nincsen r�gz�tett bel�p�se.',
// End Advanced IP Tools Pack MOD

  'LIW_click_image' => 'Kattints ide, hogy a k�pet eredeti m�retben megn�zd',
  'LIW_click_image_explain' => 'Ide kattintva megn�zheted a k�pet eredeti m�ret�ben',
// Mighty Gorgon - Full Album Pack - BEGIN
  'Album' => 'Album',
  'Personal_Gallery' => 'Szem�lyes gal�ria',
  'Personal_Gallery_Of_User' => '%s szem�lyes gal�ri�ja',
  'Personal_Gallery_Of_User_Profile' => '%s szem�lyes gal�ri�ja (%d k�p)',
  'Show_All_Pic_View_Mode_Profile' => '%s szem�lyes gal�r�j�nak �sszes k�p�nek mutat�sa (alkateg�ri�k n�lk�l)',
  'Not_allowed_to_view_album' => 'Bocsi, de nem enged�lyezett az album megn�z�se.',
  'Not_allowed_to_upload_album' => 'Bocsi, de nincs jogod �j k�pet felt�lteni az albumba. L�pj kapcsolatba egy adminisztr�torral tov�bbi r�szletek�rt.',
  'Album_empty' => 'Nincsenek k�pek az albumban<br />Kattints az <b>�j k�p felt�lt�se</b> linkre, ha szeretn�l egyet felt�lteni.',
  'Album_empty2' => 'Eben az albumban nincsenek k�pek.',
  'Upload_New_Pic' => '�j k�p felt�lt�se',
  'Pic_Title' => 'K�pc�m',
  'Pic_Title_Explain' => 'Nagyon fontos, hogy a k�peidnek tal�l� c�met adj�l, mert a t�bbiek ez alapj�n tudj�k megtal�lni a k�pet, illetve seg�t beazonos�tani, hogy mit �br�zol a k�p.',
  'Pic_Upload' => 'K�p felt�lt�se',
  'Pic_Upload_Explain' => 'Elfogadott t�pusok: JPG, GIF �s PNG. Maxim�lis f�jlm�ret: %s byte. Maxim�lis k�pm�ret: %sx%s pixel.',
  'Album_full' => 'Bocsi, de az album m�rete el�rte a maxim�lis felt�lthet� k�pek sz�m�t. L�pj kapcsolatba egy adminisztr�torral tov�bbi r�szletek�rt.',
  'Album_upload_successful' => 'K�sz�n�m. A k�pedet sikeresen felt�lt�tted.',
  'Click_return_album' => 'Kattints %side%s az albumhoz val� visszat�r�shez.',
  'Invalid_upload' => '�rv�nytelen felt�lt�s<br /><br />A k�ped t�l nagy, vagy nem elfogadott t�pus.',
  'Image_too_big' => 'Bocsi, de a k�p m�retei t�l nagyok.',
  'Uploaded_by' => 'Felt�lt�tte:',
  'Category_locked' => 'Bocsi, de ebbe a kateg�ri�ba nem t�lthetsz fel, mert egy admin z�rolta ezt a kateg�ri�t. L�pj kapcsolatba az album adminisztr�tor�val tov�bbi inform�ci��rt.',
  'View_Album_Index' => 'Album Index',
  'View_Album_Personal' => 'A felhaszn�l� szem�lyes album�nak megn�z�se',
  'View_Pictures' => 'Az album k�pinek n�zeget�se vagy komment�rok olvas�sa/bek�ld�se',
  'Album_Search' => 'Albumkeres�s',
  'Pic_Name' => 'K�pn�v',
  'Description' => 'Meghat�roz�s',
  'Search_Contents' => ' ami tartalmazza: ',
  'Search_Found' => 'Keres�si eredm�ny: ',
  'Search_Matches' => 'Illeszkedik:',
// Mighty Gorgon - Full Album Pack - END

// News
  'xs_latest_news' => 'Legfrissebb h�rek',
  'xs_no_news' => 'Nincsenek h�rek megadva.',
  'xs_news_version' => 'XS News Verzi�: %s',
  'xs_news_ticker_feed' => 'XML Feed forr�sa: %s',
  'xs_no_ticker' => 'Nincs megadva H�rjegy. K�rlek menj el az AVP-be, �s hozz l�tre egyet.',
  'xs_news_ticker_title' => 'Szalagc�m',
  'xs_news_tickers_title' => 'Szalagc�mek',
  'xs_news_item_title' => 'Vegyes h�r',
  'xs_news_items_title' => 'Vegyes h�rek',
  'hide' => 'Elrejt',
  'show' => 'Mutat',
  'Welcome' => '�dv�z�llek',
  'birthdays' => 'Sz�let�snapok',

//Battle of the Sexes
  'male_zero_total' => '<b>0</b> f�rfi tagunk', // # registered male users
  'male_total' => '<b>%d</b> f�rfi tagunk', // # registered male users
  'male_one_total' => '<b>%d</b> f�rfi tagunk', // # registered male users
  'female_zero_total' => 'Van <b>0</b> n�i tagunk', // # registered female users
  'female_total' => 'Van <b>%d</b> n�i tagunk', // # registered female users
  'female_one_total' => 'Van <b>%d</b> n�i tag', // # registered female users
  'unknown_total' => '& <b>%d</b> tagr�l nem tudni milyen nem�',
  'unknown_one_total' => '& <b>%d</b> tagr�l nem tudni milyen nem�',
  'unknown_zero_total' => '',
  'battle_of_sexes' => 'Nemek harca: ',
  
  'who_viewed' => 'A t�m�t n�zik',
  'BoardRules' => 'Szab�lyok',
  
  'View_post' => 'Hozz�sz�l�s megn�z�se',
  'Post_review' => 'Hozz�sz�l�s �tn�z�se',
  'View_next_post' => 'K�vetkez� hozz�sz�l�s megn�z�se',
  'View_previous_post' => 'El�z� hozz�sz�l�s megn�z�se',
  'No_newer_posts' => 'Nincs �jabb hozz�sz�l�s a f�rumban',
  'No_older_posts' => 'Nincs r�gebbi hozz�sz�l��s a f�rumban',
  
  'StaffSite' => 'Staff oldal',
  'Staff_level' => array ('Administrator', 'Moderator'),
  'Staff_forums' => 'F�rumok',
  'Staff_stats' => 'Statisztik�k',
  'Staff_user_topic_day_stats' => '%.2f t�ma per nap', // %.2f = topics per day
  'Staff_period' => '%d napja', // %d = days
  'Staff_contact' => 'Kapcsolat',
  'Staff_messenger' => '�zen�',
// Start Edit Notes MOD
  'Edit_notes' => 'Feljegyz�sek szerkeszt�se',
  'Delete_note' => 'Feljegyz�s t�rl�se',
  'Edited_by' => 'Szerkesztette:',
  'Confirm_delete_edit_note' => 'T�nyleg t�r�lni szeretn�d ezt a feljegyz�st?',
  'Edit_note_deleted' => 'A feljegyz�s sikeresen t�r�lve.',
// End Edit Notes MOD
//Referrers Mod
  'Referrers' => 'Http hivatkoz�k',
  'Viewing_Referrers' => 'Idel�togat� hivatkoz�k',
//Referrers Mod End

  'Recent_topics' => 'Leg�jabb t�ma',
  'Recent_today' => 'Ma',
  'Recent_yesterday' => 'Tegnap',
  'Recent_last24' => '24 �r�n bel�l',
  'Recent_lastweek' => 'Egy h�ten bel�l',
  'Recent_lastXdays' => 'Utols� %s nap',
  'Recent_last' => 'Utols�',
  'Recent_days' => 'Nap',
  'Recent_first' => '%s-t�l',
  'Recent_first_poster' => '%s',
  'Recent_select_mode' => 'Kiv�laszt�s m�dja:',
  'Recent_showing_posts' => 'Hozz�sz�l�sok mutat�sa:',
  'Recent_title_one' => '%s t�ma %s', // %s = topics; %s = sort method
  'Recent_title_more' => '%s t�m�k %s', // %s = topics; %s = sort method
  'Recent_title_today' => ' m�t�l',
  'Recent_title_yesterday' => ' tegnapt�l',
  'Recent_title_last24' => ' az utols� 24 �r�t�l',
  'Recent_title_lastweek' => ' utols� h�tt�l',
  'Recent_title_lastXdays' => ' utols� %s napt�l', // %s = days
  'Recent_no_topics' => 'Nem tal�ltam egy t�m�t sem.',
  'Recent_wrong_mode' => 'Rossz m�dot v�lasztott�l.',
  'Recent_click_return' => 'Kattints %side%s, hogy visszat�rj a legutols� oldalra.',
  
  'Profile_view_option' => 'Pop up window on Profile View',
  'Profile_viewed' => 'A Profilom l�tt�k',

// BEGIN Disable Registration MOD
  'registration_status' => 'Bocsi, de a f�rumra jelenleg nem lehet regisztr�lni, ez egy z�rt k�z�ss�g. K�rlek n�zz vissza m�skor.',
// END Disable Registration MOD

  'PostHighlight' => 'Kijel�l',
  'QuickQuote' => 'Gyors id�z�s',
  'Randomquote' => 'V�letlen id�z�s',

// Mod User CP Organize
  'Cpl_Navigation' => 'Vez�rl�panel',
// 'Cpl_Settings_Options' => 'Settings And Options',
  'Cpl_Settings_Options' => 'Be�ll�t�sok',
  'Cpl_Board_Settings' => 'Oldal be�ll�t�sa',
  'Cpl_NewMSG' => '�j �zenet k�ld�se',
  'Cpl_Click_Return_Cpl' => 'Vagy kattints %side%s, hogy visszajuss a Vez�rl�panelhez',
  'Cpl_Personal_Profile' => 'Szem�lyes profil',
  'Cpl_More_info' => 'Feliratkoz�sok',
  
  'Forbidden_characters' => 'Felhaszn�l�n�vben enged�lyezet karakterek: a-z, 0-9, -, _ �s a sz�net.',
  
  'Topics_per_page' => 'T�ma per oldal',
  'Posts_per_page' => 'Hozz�sz�l�s per oldal',
  'Hot_threshold' => 'N�pszer� hozz�sz�l�s k�sz�be',
  
  'Mod_CP_first_post' => 'Els� hozz�sz�l�s',
  'Mod_CP_topic_count' => '<b>%s</b> t�m�t tal�ltam.',
  'Mod_CP_topics_count' => '<b>%s</b> t�m�t tal�ltam.',
  'Mod_CP_no_topics' => 'Nincs s krit�riumnak megfelel� t�ma.',
  'Mod_CP_sticky' => 'Fontos',
  'Mod_CP_announce' => 'Esem�ny',
  'Mod_CP_global' => 'Glob�lis',
  'Mod_CP_normal' => 'Norm�lis',
  'Display_sticky' => 'Fontos',
  'Display_announce' => 'Esem�ny',
  'Display_global' => 'Glob�lis esem�ny',
  'Display_poll' => 'Szavaz�s',
  'Display_shadow' => '�tmozgatott',
  'Display_locked' => 'Z�rolt',
  'Display_unlocked' => 'Nyitott',
  'Display_unread' => 'Olvasatlan',
  'Display_unanswered' => 'Megv�laszolatlan',
  'Display_all' => 'Mind',
  'Mod_CP_confirm_delete_polls' => 'T�nyleg t�r�lni szeretn�d a kijel�lt szavaz�sokat?',
  'Mod_CP_poll_removed' => 'A kijel�lt szavaz�s sikeresen el lett t�vol�tva a t�m�b�l.',
  'Mod_CP_polls_removed' => 'A kijel�lt szavaz�sok sikeresen el lett t�vol�tva a t�m�kb�l.',
  'Mod_CP_topic_removed' => 'A kijel�lt t�ma sikeresen el lett t�vol�tva az adatb�zisb�l.',
  'Mod_CP_topic_moved' => 'A kijel�lt t�ma �tmozgatva <b>%s</b>-b�l <b>%s</b>-be.', // %s = old/new forum
  'Mod_CP_topics_moved' => 'A kijel�lt t�ma �tmozgatva <b>%s</b>-b�l <b>%s</b>-be.', // %s = old/new forum
  'Mod_CP_topic_locked' => 'A kijel�lt t�ma lez�rva.',
  'Mod_CP_topic_unlocked' => 'A kijel�lt t�ma kinyitva.',
  'Mod_CP_topics_sticked' => 'A kijel�lt t�m�k fontosaknak megjel�lve.',
  'Mod_CP_topic_sticked' => 'A kijel�lt t�ma fontosnak megjel�lve.',
  'Mod_CP_topics_announced' => 'A kijel�lt t�m�k esem�nyeknek megjel�lve.',
  'Mod_CP_topic_announced' => 'A kijel�lt t�ma esem�nynek megjel�lve.',
  'Mod_CP_topics_globalized' => 'A kijel�lt t�m�k glob�lis esem�nynek megjel�lve.',
  'Mod_CP_topic_globalized' => 'A kijel�lt t�ma glob�lis esem�nynek megjel�lve.',
  'Mod_CP_topics_normalized' => 'A kijel�lt t�m�k norm�lisnak megjel�lve.',
  'Mod_CP_topic_normalized' => 'A kijel�lt t�ma norm�lisnak megjel�lve.',
  'Mod_CP_click_return_topic' => 'Kattints %side%s ha a r�gi t�m�hoz, �s %side%s ha az �j t�m�hoz akarsz visszat�rni.',
  
  't_starter' => 'Magadnak nem k�sz�nheted meg',
  'Watched_Topics' => 'Figyelt t�ma',
  'No_Watched_Topics' => 'Nem figyelsz egy t�m�t sem',
  'Watched_Topics_Started' => 'T�ma elind�tva',
  'Watched_Topics_Stop' => 'Figyel�s le�ll�tva',
  
  'Stop_watching_forum' => 'F�rum figyel�s�nek abbahagy�sa',
  'Start_watching_forum' => 'A f�rum a hozz�sz�l�sainak figyel�se',
  'No_longer_watching_forum' => 'Nem figyeled t�bb� ezt a f�rumot.',
  'You_are_watching_forum' => 'Mostant�l figyeled ezt a f�rumot.',
  
  'UCP_SubscForums' => 'Feliratkoz�sok',
  'UCP_NoSubscForums' => 'Nem vagy feliratkozva egy f�rumra sem',
  'UCP_SubscForums_Flag' => 'Z�szl�',
  'UCP_SubscForums_Forum' => 'F�rum',
  'UCP_SubscForums_Forum_subscribed' => 'Feliratkozt�l a f�rumra',
  'UCP_SubscForums_Forum_already_subscribed' => 'M�r feliratkozt�l erre a f�rumra',
  'UCP_SubscForums_Click_return_forum' => 'Kattints %side%s, hogy visszat�rj a f�rumhoz',
  'UCP_SubscForums_Topics' => 'T�m�k',
  'UCP_SubscForums_Posts' => 'Hozz�sz�l�sok',
  'UCP_SubscForums_LastPost' => 'Utols� hozz�sz�l�s',
  'UCP_SubscForums_UnSubscribe' => 'Leiratkoz�s',
  'UCP_SubscForums_NewTopic' => '�j t�ma',
  
  'profile_main' => '�ltal�nos inform�ci�',
  'profile_explain' => '�dv�zl�nk a Felhaszn�l�i Vez�rl�panelben. Itt tudod figyelni, megn�zni �s friss�teni a profilodat, egyes m�k�d�si tulajdons�gokat, fel�rt f�rumokat �s t�m�kat. Illetve tudsz m�s felhaszn�l�knak �zenetet k�ldeni (ha enged�lyezve van).',
  'your_activity' => 'A profilod',
  
  'Gravatar' => 'Gravatar',
  'Gravatar_explain' => 'Ha van egy <a href="http://www.gravatar.com" target="_blank">gravatarod</a>, add meg az ott regisztr�lt email c�medet.',
  
  'private_msg_review_title' => 'V�lasz�zenet: ',
  'private_msg_review_error' => 'Hiba a Priv�t �zenetek keres�se k�zben!',
  
  'BSH_Viewing_Topic' => 'T�ma megtekint�se: %t%',
  'BSH_Viewing_Post' => '%sEgy hozz�sz�l�s megtekint�se%s',
  'BSH_Viewing_Profile' => '%u% profilj�nak megtekint�se',
  'BSH_Viewing_Groups' => '%sCsoportok megn�z�se%s',
  'BSH_Viewing_Forums' => 'F�rum megtekint�se: %f%',
  'BSH_Index' => '%sIndex megtekint�se%s',
  'BSH_Searching_Forums' => '%sKeres�s a f�rumokban%s',
  'BSH_Viewing_Onlinelist' => '%sOnline felhaszn�l�k list�ja%s',
  'BSH_Viewing_Messages' => '%sPriv�t �zenetek megn�z�se%s',
  'BSH_Viewing_Memberlist' => '%sTaglista megn�z�se%s',
  'BSH_Login' => '%sBejelentkez�s%s',
  'BSH_Logout' => '%sKijelentkez�s%s',
  'BSH_Editing_Profile' => '%sProfil szerkeszt�se%s',
  'BSH_Viewing_ACP' => '%sACP megn�z�se%s',
  'BSH_Moderating_Forum' => '%sF�rumok moder�l�sa%s',
  'BSH_Viewing_FAQ' => '%sGYIK megtekint�se%s',
  'BSH_Viewing_Category' => 'Kateg�ria megtekint�se: %c%',
  
  'Board_statistic' => 'Oldalstatisztik�k',
  'Database_statistic' => 'Adadtb�zisstatisztik�k',
  'Version_info' => 'Verzi�inform�ci�',
  'Thereof_deactivated_users' => 'Nem akt�v tagok sz�ma',
  'Thereof_Moderators' => 'Moder�torok sz�ma',
  'Thereof_Junior_Administrators' => 'Number of Junior Administrators',
  'Thereof_Administrators' => 'Adminisztr�torok sz�ma',
  'Deactivated_Users' => 'Aktiv�l�st ig�nyl� felhaszn�l�k sz�ma',
  'Users_with_Mod_Privileges' => 'Moder�tori joggal rendelkez� tagok',
  'Users_with_Junior_Admin_Privileges' => 'Members with junior administrator privileges',
  'Users_with_Admin_Privileges' => 'Adminisztr�tori joggal rendelkez� tagok',
  'DB_size' => 'Adatb�zis m�rete',
  'Version_of_ip' => '<a href="http://www.icyphoenix.com/">Icy Phoenix</a> verzi�',
  'Version_of_board' => '<a href="http://www.phpbb.com">phpBB</a> verzi�',
  'Version_of_PHP' => '<a href="http://www.php.net/">PHP</a> verzi�',
  'Version_of_MySQL' => '<a href="http://www.mysql.com/">MySQL</a> verzi�',
  'Download_post' => 'Hozz�sz�l�s let�lt�se',
  
  'Download_topic' => 'T�ma let�lt�se',
  'Always_swear' => 'Cs�nya szavak elfogad�sa',
  
  'Shoutbox' => '�zen�fal',
  'Shoutbox_date' => ' Y m d h:i:s',
  'Shout_censor' => 'Sor elt�vol�tva!',
  'Shout_refresh' => 'Friss�t�s',
  'Shout_text' => 'Sz�veg',
  'Viewing_Shoutbox' => '�zen�fal megn�z�se',
  'Censor' => 'Cenzor',
  
  'Edit_post_time' => 'Hozz�sz�l�s idej�nek szerkeszt�se',
  'Edit_post_time_xs' => 'Szerkeszt',
  'Topic_time_xs' => 'T�ma ideje',
  'Post_time' => 'Bek�ld�s ideje',
  'Post_time_successfull_edited' => '<b>Az id� sikeresen friss�tve.</b></span><br /><span class="postdetails">Ez az ablak 3 mp m�lva bez�r�dik.',
  
  'staff_message' => '�zenet a F�n�ks�gt�l',
  
  'Board_Rules' => 'F�rumszab�lyok',
  'Forum_Rules' => 'F�rumszab�lyok',
  'Show_avatars' => 'Avatarok megjelen�t�se a t�m�ban',
  'Show_signatures' => 'Al��r�sok megjelen�t�se a t�m�ban',
  'Acronym' => 'Acronym',
  'Acronyms' => 'Acronyms',
  'User_Number' => 'Felhaszn�l� #',
  'Member_Count' => 'Tagok',
  'Reply_message' => 'Megv�laszolt �zenet',
  'Click_read_topic' => 'Kattints %side%s az elolvas�shoz', // %s's here are for uris, do not remove!
  'Create_with_generator' => 'Avatar l�trehoz�sa az Avatar Gener�torral',
  'View_avatar_generator' => 'Avatar Gener�tor',
  'Adv_Search' => 'R�szletes keres�s',
  'Search_Explain' => 'Keres�s az oldalon bel�l',
  'Login_attempts_exceeded' => 'T�ll�pted a %s enged�lyezett bel�p�si k�s�rletet. A k�vetkez� %s percben nem l�phetsz be.',
  'Please_remove_install_contrib' => 'K�rj�k t�r�ld az install/ �s a contrib/ k�nyvt�rat.',
  'Search_Engines' => 'Keres�roboto:',
  'Bots_browsing_forum' => 'Keres�robotok a f�rumban:',
  'Debug_On' => 'Debug Be',
  'Debug_Off' => 'Debug Ki',
  'Page_Generation_Time' => 'Lapgener�l�si id�:',
  'Memory_Usage' => 'Memory',
  'SQL_Queries' => 'SQL lek�r�sek',
  'Search_new2' => '�j hozz�sz�l�sok',
  'Search_new_p' => 'Hozz�sz�l�sok utols� ittj�rtad �ta',
  'Show_In_Portal' => 'Mutasd a Home oldalon',
  'Not_Auth_View' => 'Nincs jogod ezt az oldalt megn�zned.',
  'Site_Hist' => 'Oldalt�rt�net',
  'Links' => 'Linkek',
  'Print_View' => 'Nyomtathat� verzi�',
  'Browsing_topic' => 'Felhaszn�l�k, akik ezt a t�m�t olvass�k:',
  'Sudoku' => 'Sudoku',
  'Bookmarks' => 'K�nyvjelz�k',
  'Set_Bookmark' => 'K�nyvjelz� ehhez a t�m�hoz',
  'Remove_Bookmark' => 'Ennek a t�m�nak a k�nyvjelz�j�nek elt�vol�t�sa',
  'No_Bookmarks' => 'Nem �ll�tott�l be egy k�nyvjelz�t sem',
  'Always_set_bm' => 'K�nyvjelz� be�ll�t�sa minden hozz�sz�l�sodhoz',
  'Found_bookmark' => '%d k�nyvjelz�t �ll�tott�l be.', // eg. Search found 1 match
  'Found_bookmarks' => '%d k�nyvjelz�t �ll�tott�l be.', // eg. Search found 24 matches
  'More_bookmarks' => 'Tov�bbi k�nyvjelz�k...', // For mozilla navigation bar

//RSS Reader Help
  'RSS' => 'RSS',
  'Rss_news_help' => 'Mi is ez?',
  'Rss_news_help_title' => 'Seg�ts�g az RSS h�rolvas�hoz',
  'Rss_news_help_header' => 'Mik a feed-ek, �s hogyan tudom haszn�lni?',
  'Rss_news_help_explain' => 'Egy feed �ltal�ban folyamatosan friss�tett inform�ci�val szolg�l egy webtartalomr�l, �s egy linket szolg�ltat az id�zett tartalom megtekint�s�hez. Ha feliratkozol egy weboldal feed-j�re egy feed olvas�val, akkor a weboldal tartalm�r�l �rtes�lni fogsz.<br /><br /><b>Figyelem:</b> Egy weboldal feed-j�re val� feliratkoz�shoz sz�ks�ged van egy <a href="http://www.rssowl.org/" target="new">Feed-olvas�ra</a>. Egy�bk�nt egy RSS vagy Atom linkre val� kattint�skor csak egy form�zatlan �s �rthetetlen sz�veghalmazt kapn�l a b�ng�sz�dben.',
  'Rss_news_help_header_2' => '<b>Mi az RSS �s az Atom?</b>',
  'Rss_news_help_explain_2' => 'Az RSS �s az Atom k�t k�l�nb�z� form�tum� feed. A legt�bb feed olvas� t�mogatja mindk�t form�tumot. Ez az oldal az Atom 0.3-at �s az RSS 2.0-�t t�mogatja.',
  'Rss_news_help_header_3' => '<b>Hogyan haszn�lhatok a h�rolvas�kat?</b>',
  'Rss_news_help_explain_3' => 'Els�nek kell neked egy feed olvas�. P�ld�ul ennek a c�lnak pont megfelel a <a href="http://www.rssowl.org/" target="new">www.rssowl.org</a> programja.<br /><br />Ezeket a l�p�seket kell megtenned, hogy haszn�lhasd:<br /><br /><b>1.</b> Keress ezen az oldalon RSS linket. (Extra => Kereshetsz a weboldalon is �j feed-eket.) <b>or</b><br /><b>2.</b> Add hozz� az egyiket az al�bbi linkek k�z�l:',
  'L_url_rss_explain' => 'URL minden f�rumt�m�hoz.',
  'L_url_rss_news_explain' => 'URL csak a h�rek f�rumhoz.',
  'L_url_rss_atom_explain' => 'URL egy bizonyos RSS Feed-hez.',
  'Rss_news_help_rights' => 'K�rlek wedd figyelembe, hogy ez a szolg�ltat�s nem egyen�rt�k� a weboldallal, �s haszn�lat�t b�rmikor megsz�ntetheted, illetve nem biztos, hogy minden esetben rendelkez�sre �ll.',
  'Rss_news_feeds' => 'RSS h�rek Feed-k�nt',
  
  'Quick_Reply' => 'Gyors v�lasz',
  'Mod_CP_sticky2' => 'Fontos',
  'Mod_CP_announce2' => 'Esem�ny',
  'Mod_CP_global2' => 'Glob�lis',
  'Mod_CP_normal2' => 'Norm�lis',
  
  'Search_Flood_Error' => 'K�t keres�s k�z�tt el kell telnie egy kis id�nek. K�rlek v�rj egy kicsit �s pr�b�lkozz �jra.',
  
// Custom Profile Fields MOD
  'custom_field_notice' => 'Ezt a mez�t egy adminisztr�tor hozta l�tre. Megjel�lhet� publikusnak is, meg nem is. A mez� meg lesz *-gal jel�lve, �s k�telez� lesz kit�lteni.',
  'and' => ' �s ',
// END Custom Profile Fields MOD

  'dsbl' => 'Az IP c�med egy <a href="%url%">DNS alap� fekete lyuk list�n</a> szerepel. <br />A regisztr�ci�d blokkolva van.',
  'Emails_Only_To_Admins_Error' => 'A levelez�rendszert csak adminisztr�tornak c�mzett levelek k�ld�s�re haszn�lhatod.',
  'Wordgraph' => 'Sz�felh�',
  'Viewing_wordgraph' => 'L�that� szavak',
  'Links_For_Guests' => '<b>A regisztr�l�shoz musz�ly megn�zni ezt a linket</b>',
  'New' => '�',
  'New_Label' => '�j',
  'New_Messages_Label' => 'Friss hozz�sz�l�sok',
  'Show_Personal_Gallery' => 'Felhaszn�l�i gal�ria megn�z�se',
  'Login_Status' => 'Online St�tusz',
  'Login_Hidden' => 'Rejtett',
  'Login_Visible' => 'L�that�',
  'Login_Default' => 'Alap�rtelmezett',
  'Errors_Not_Found' => 'A k�rt c�met nem tal�lja a kiszolg�l�',
  'Errors_000' => 'Ismeretlen hiba',
  'Errors_000_Full' => 'A k�rt c�m kiszolg�l�sa ismeretlen hib�ba �tk�z�tt.<br />A hib�r�l bejegyz�s ker�lt a napl�ba, k�rlek abban keress a probl�m�ra haszn�lhat�bb magyar�zatot.',
  'Errors_400' => 'Hiba: 400',
  'Errors_400_Full' => 'A k�rt c�m nem �rv�nyes c�m.',
  'Errors_401' => 'Hiba: 401 - Jogosults�gi hiba',
  'Errors_401_Full' => 'A kapott �zenet szerint nincs jogod a k�rt c�m megtekint�s�re.',
  'Errors_403' => 'Hiba: 403',
  'Errors_403_Full' => 'A c�mhez val� hozz�f�r�s vissza lett utas�tva.',
  'Errors_404' => 'Hiba: 404 - F�jl nem tal�hat�',
  'Errors_404_Full' => 'A k�rt c�m nem tal�lhat� a szerveren. Lehet, hogy hib�s c�mre hivatkozt�l, vagy a id�k�zben t�rl�sre ker�lt.',
  'Errors_500' => 'Hiba: 500 - Hiba a be�ll�t�sokban',
  'Errors_500_Full' => 'A c�m kiszolg�l�sa k�zben konfigur�ci�s probl�ma l�pett fel..<br />A hib�r�l bejegyz�s ker�lt a napl�ba, k�rlek abban keress a probl�m�ra haszn�lhat�bb magyar�zatot.',
  'Errors_Email_Subject' => 'Hib�k: ',
  'Errors_Email_Addrress_Prefix' => 'xs_errors',
  'Errors_Email_Body' => 'Hiba van az oldalon. K�rlek n�zz bele a napl�f�jlokba.',
  'Remote_avatar_no_image' => 'A %s nem l�tezik',
  'Remote_avatar_error_filesize' => 'A k�p m�rete t�l nagy egy avatarnak (%d Byte)',
  'Remote_avatar_error_dimension' => 'A k�p m�retei t�l nagyok egy avatarnak (%d x %d pixel)',
  'How_Many_Chatters' => 'Jelenleg <b>%d</b> felhaszn�l� tar�zkodik a chat-ben',
  'Who_Are_Chatting' => '<b>%s</b>',
  'Click_to_join_chat' => 'Klikk a chat-hez val� csatlakoz�shoz',
  'ChatBox' => 'ChatBox',
  'log_out_chat' => 'Sikeresen kijelentkezt�l a chat-b�l ',
  'Send' => 'K�ld',
  'Login_to_join_chat' => 'Bejelentkez�s a chat-be',

// Hacks List
/* General */
  'Hacks_List' => 'K�sz�t�k',
  'Page_Desc' => 'Ez a modul hozz�f�rhet�v� teszi a k�sz�t�k list�j�nak a m�dos�t�s�t, �gy tudsz a list�hoz hozz�adni, a list�t szerkeszteni vagy a list�b�l t�r�lni att�l f�gg�en, hogy mit m�dos�tott�l/vari�lt�l a motoron. Minden v�ltoztat�s a credits.php lapon l�that� lesz.',
  'Deleted_Hack' => 'A %s mod k�sz�t�je t�r�lve a list�r�l.<br />',
  'Updated_Hack' => 'A %s mod k�sz�t�je friss�tve a list�n.<br />',
  'Added_Hack' => 'A %s mod inf�ja hozz�adva.<br />',
  'Status' => 'St�tusz',
  'No_Website' => 'Nincs el�rhet� weboldal.',
  'No_Hacks' => 'Nincs megjelen�thet� k�sz�t�.',
  'Add_New_Hack' => 'Egy �j k�sz�t� hozz�ad�sa',
  'User_Viewable' => 'Elrejt a felhaszn�l�i list�n?',
  'Hack_Name' => 'Mod neve',
//  'Description' => 'Description',
  'Required' => 'K�telez�',
  'Author_Email' => 'Szerz� email c�me',
  'Version' => 'Verzi�',
  'Download_URL' => 'Let�lt�si hely',

/* Errors */
  'Error_Hacks_List_Table' => 'Hiba a hackerek t�bl�j�nak letk�r�se k�zben.',
  'Required_Field_Missing' => 'Nem adt�l meg egy k�telez�en megadand� adatot.',
  'Error_File_Opening' => 'Nem lehet megnyitni a f�jlt: %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
  'Newest_pic' => 'Utols� k�p', // Album Addon
  'Random_pic' => 'V�letlen k�p', // Album Addon
  'Click_enlarge_pic' => 'Click on image to enlarge it',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
  'Last_Used_IP' => 'Utolj�ra haszn�lt IP',
  'Last_Used_OS' => 'OS',
  'Last_Used_Browser' => 'B�ng�sz�',
  'Last_Used_Referer' => 'Hivatkoz�',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
  'Users_Admins' => 'Adminisztr�torok',
  'Users_Mods' => 'Moder�torok',
  'Users_Global_Mods' => 'Glob�lis Moder�torok',
  'Users_Regs' => 'Felhaszn�l�k',
  'Users_Guests' => 'Vend�gek',
  'Users_Hidden' => 'Rejtve',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
  'Fast' => 'Gyors',
  'Standard' => '�ltal�nos',
  'Style' => 'St�lus',
  'User_Contacts' => 'Kapcsolat',
  'Memberlist_Users_Display' => 'Felhaszn�l� per oldal:',
  'Sort_LastLogon' => 'Utols� bejelentkez�s',
  'Sort_Birthday' => 'Sz�let�snap',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
  'Staff' => 'F�n�ks�g',
  'Rank' => 'Rang',
  'Rank_Header' => 'Rangok',
  'Rank_Image' => 'Rangk�p',
  'Rank_Posts_Count' => 'Hozz�sz�l�st�l f�gg� automatikus rang',
  'Rank_Days_Count' => 'Napokt�l f�gg� automatikus rang',
  'Rank_Min_Des' => 'Minim�lis hozz�sz�l�s/nap',
  'Rank_Min_M' => 'Minim�lis hozz�sz�l�s',
  'Rank_Max_M' => 'Maxim�lis hozz�sz�l�s',
  'Rank_Min_D' => 'Minimum�lis nap',
  'Rank_Max_D' => 'Maxim�lis nap',
  'Rank_Special' => 'Speci�lis rang',
  'Rank_Special_Guest' => 'Speci�lis rang vend�geknek',
  'Rank_Special_Banned' => 'Speci�lis rang banoltaknak',
  'Current_Rank_Image' => 'Jelenlegi rangk�p',
  'No_Rank' => 'Nincs hozz�rendelt rang',
  'No_Rank_Image' => 'Nincs rangk�p',
  'No_Rank_Special' => 'Nincs speci�lis rang hozz�rendelve',
  'Memberlist_Administrator' => 'Adminisztr�tor',
  'Memberlist_Moderator' => 'Moder�tor',
  'Memberlist_User' => 'Felhaszn�l�',
  'Guest_User' => 'Vend�g',
  'Banned_User' => 'Banolt',
  'Rank1_title' => 'Rang 1 c�m',
  'Rank2_title' => 'Rang 2 c�m',
  'Rank3_title' => 'Rang 3 c�m',
  'Rank4_title' => 'Rang 4 c�m',
  'Rank5_title' => 'Rang 5 c�m',
// Mighty Gorgon - Multiple Ranks - END
// Mighty Gorgon - Nav Links - BEGIN
  'QUICK_LINKS' => 'Men�',
  'MAIN_LINKS' => 'Saj�t linkek',
  'TOOLS_LINKS' => 'Eszk�z�k',
  'NEWS_LINKS' => 'H�rek',
  'USERS_LINKS' => 'Felhaszn�l�k &amp; Csoportok',
  'INFO_LINKS' => 'Inf�',
  'SPONSORS_LINKS' => 'T�mogat�k',
  'HelpDesk' => 'Seg�ts�g',
  'AvatarGenerator' => 'Avatar Gener�tor',
  'DBGenerator' => 'SQL-b�l-PHP Gener�tor ',
  'NEWS_CAT' => 'H�rkateg�ri�k',
  'NEWS_ARC' => 'H�rarch�vum',
// Mighty Gorgon - Nav Links - END
  'Activity' => 'J�t�kok',
  'Games' => 'J�t�kok',
  'Trohpy' => 'J�t�ksziget',
  'quick_links_games' => 'J�t�kok men�',
  
  'By' => 'By',
  'No_Icon_Image' => 'Nincs ikon',
  'Change_Style' => 'St�lus',
  'Change_Lang' => 'Nyelv',
  'Permissions_List' => 'Jogosults�glista',
  'IP_TEAM' => 'Icy Phoenix Csapat',
  
//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
  'Nav_Separator' => '&nbsp;&raquo;&nbsp;',
  'WeatherForecast' => 'Id�j�r�s el�rejelz�s',
  'ErrorNotFound' => 'F�jl nem tal�lhat�!',
  'MGC_Users_Online' => 'MGC Online felhaszn�l�k',
  'MGC_User_Servertime' => 'D�tum',
  'MGC_User_Nickname' => 'Nickn�v',
  'MGC_User_Server' => 'Kiszolg�l�',
  'MGC_User_IP' => 'IP',
  'MGC_User_ID' => 'ID',
  'MGC_User_Client_Version' => 'MGC Verzi�',
  
  'Country_Flag' => 'Orsz�g',
  'Select_Country' => 'V�lassz orsz�got',
  'Extra_profile_info' => 'Extra Profil inform�ci�',
//  'Extra_profile_info_explain' => 'Itt extra inform�ci�t adhatsz meg magadr�l, vagy �rhatsz a hobbidr�l is. S�t, k�peket is hozz�adhatsz. A bbcode-okat ugyan�gy haszn�lhatod, mint a hozz�sz�l�sokn�l, vagy az al��r�sodban.',
  'Extra_profile_info_explain' => 'Itt extra inform�ci�t adhatsz meg magadr�l, vagy �rhatsz a hobbidr�l is. S�t, k�peket is hozz�adhatsz. A bbcode-okat ugyan�gy haszn�lhatod, mint a hozz�sz�l�sokn�l, vagy az al��r�sodban.',
  'Extra_window' => 'K�l�n ablakban nyitja meg',
  'Extra_too_long' => 'Az extra mez� t�l hossz� (max. <b>%d</b> karakter engedett)',
  'UserLike' => 'Hasonl� felhaszn�l�k',
  'UserDisLike' => 'Nincs hasonl� felhaszn�l�',
  'UserLikeIns' => 'H�rom dologban egyezik',
  'UserDisLikeIns' => 'Nem egyezik h�rom dologban sem',
  'UserPhone' => 'Telefonsz�m',
  'UserSport' => 'Sport/Csapat',
  'UserMusic' => 'Zene/Egy�ttes',
  'UserNoInfo' => 'Nincs el�rhet� inform�ci�',
  'Last_Seen' => 'Utolj�ra Online',
// New MG - END

// MG CMS - BEGIN
  'CMS_TITLE' => 'CMS',
  'CMS_MANAGEMENT' => 'CMS Menedzsment',
  'CMS_CONFIG' => 'CMS Be�ll�t�s',
  'CMS_ACP' => 'Ennek a lapnak a szerkeszt�se',
  'CUSTOM_PAGE' => 'Egy�ni oldalak',
// MG CMS - END

// Icy Phoenix - BUILD 001
  'SimilarTopics' => 'Hasonl� t�m�k',
  'Chat' => 'Chat',
  'Digests' => 'Kivonat',
  
  'CPL_REG_INFO_EXPLAIN' => 'Felhaszn�l�n�v, email c�mek �s jelsz�',
  'CPL_PROFILE_INFO_EXPLAIN' => '�ltal�nos kapcsolati inform�ci�k, �zen� lehet�s�gek, sz�let�snap, �rdekl�d�si k�r �s m�g sok minden',
  'CPL_PROFILE_VIEWED_EXPLAIN' => 'Felhaszn�l�k, akik megn�zt�k a profilodat',
  'CPL_AVATAR_PANEL_EXPLAIN' => 'Az avatar egy kicsiny k�p, amelyik a te nevedhez van t�rs�tva',
  'CPL_SIG_EDIT_EXPLAIN' => 'Az al��r�sod: meg tudsz adni b�rmilyen sz�veget, amit csatolunk minden hozz�sz�l�sod alatt',
  'CPL_PREFERENCES_EXPLAIN' => 'A hozz�sz�l�sok olvas�s�nak �s �r�s�nak �ltal�nos be�ll�t�sai',
  'CPL_BOARD_SETTINGS_EXPLAIN' => 'Glob�lis be�ll�t�sok (id�, kin�zet, nyelv...)',
  'Calendar_settings_EXPLAIN' => 'A napt�r be�ll�t�sai',
  'Hierarchy_setting_EXPLAIN' => 'Alf�rumok �s t�m�k csoportos�t�s�nak be�ll�t�sai',
  'LOGIN_SEC_EXPLAIN' => 'Ha enged�lyezed ezt a be�ll�t�st, akkor minden ezzel a felhaszn�l�n�vvel t�rt�n� bejelentkez�s figyelve lesz',
  'CPL_OWN_POSTS_EXPLAIN' => 'Keres�s a hozz�sz�l�said k�z�tt',
  'CPL_OWN_PICTURES_EXPLAIN' => 'A szem�lyes gal�ri�d megn�z�se',
  'CPL_INBOX_EXPLAIN' => 'Be�rkez�: a fogadott priv�t �zeneteket tartalmazza',
  'CPL_SAVEBOX_EXPLAIN' => 'Mentett �zenetek: az elmentett priv�t �zeneteket tartalmazza',
  'CPL_OUTBOX_EXPLAIN' => 'Kimen�: az elk�ld�tt, de m�g el nem olvasott priv�t �zeneteket tartalmazza',
  'CPL_SENTBOX_EXPLAIN' => 'Elk�ld�tt: az elk�ld�tt, �s m�r elolvasott priv�t �zeneteket tartalmazza',
  'CPL_BOOKMARKS_EXPLAIN' => 'Minden k�nyvjelz�vel megjel�lt t�ma',
  'WATCHED_TOPICS_EXPLAIN' => 'Egy lista minden megfigyelt t�m�r�l',
  'CPL_SUBSCFORUMS_EXPLAIN' => 'A feliratkozott f�rumok �j t�m�i',
  'DIGESTS_EXPLAIN' => 'A kivonat egy rendszeres email, ami az �ltalad megjel�lt t�m�k �j �zeneteinek a tartalm�r�l �rtes�t',
  'DRAFTS_EXPLAIN' => 'V�zlataid kezel�se',

// Ajax Shoutbox - BEGIN
  'Ajax_Shoutbox' => '�zen�fal',
  'Ajax_Chat' => 'Chat',
  'Ajax_Archive' => 'Chat arch�vum',
  'Shoutbox_flooderror' => 'Nem k�ldhetsz gyorsan egym�s ut�n t�bb �zenetet, mert ez a t�bbieket nagyon zavarn�. Mire ezt a sz�veget v�gigolvasod nagy es�llyel megint tudsz �zenni. Ha m�gsem, akkor megint kapsz olvasnival�t.',
  'Shoutbox_no_auth' => 'Bocsi, de csak regisztr�lt felhaszn�l�k haszn�lhatj�k az �zen�falat',
  'Shoutbox_loading' => '�zen�fal t�lt�se...',
// Errors
  'Shoutbox_unable' => 'Bocsi, de az akci� nem tudott v�get �rni. K�rlek pr�b�ld meg ism�t.',
  'Shoutbox_empty' => 'Az adatb�zis nem tartalmaz �zenetet',
  'Shoutbox_no_mode' => 'Nem �rv�nyes a meghat�rozott m�d',
// Archive
  'Shouts' => '�zenetek',
  'Statistics' => 'Statisztik�k',
  'Total_shouts' => '�sszes �zenet',
  'Stored_shouts' => 'Elt�rolt �zenetek',
  'My_shouts' => 'Az �zeneteim',
  'Today_shouts' => 'Az utols� 24 �ra �zenetei',
  'Top_Ten_Shouters' => 'A t�z legt�bbet �zen�',
// Online list
  'Online_total' => '�sszes',
  'Online_registered' => 'Felhaszn�l�k',
  'Online_guests' => 'Vend�gek',
  'Who_is_Chatting' => 'Chat-el�k:',
  'Shoutbox_online_explain' => 'Ez az adat az utols� harminc m�sodperc hozz�sz�l�sai alapj�n k�sz�lt',
// Ajax Shoutbox - END

  'Contact_us' => 'Kapcsolat',
  'Contact_us_explain' => 'Haszn�ld ezt a lapot, ha szeretn�l nek�nk �zenetet k�ldeni',
  'Session_invalid' => '�rv�nytelen munkamenet. K�rj�k k�ldd el �jra az �rlapot.',

// Icy Phoenix - BUILD 007
  'Reg_Username_Short' => ' felhaszn�l�n�v t�l r�vid',
  'Reg_Username_Long' => ' felhaszn�l�n�v t�l hossz�',
  'Reg_Username_Taken' => ' felhaszn�l�n�v nem el�rhet�',
  'Reg_Username_Free' => ' felhaszn�l�n�v el�rhet�',
  'Reg_PWD_Short' => 'Ez a jelsz� t�l r�vid',
  'Reg_PWD_Easy' => 'Ez a jelsz� t�l k�nny�',
  'Reg_PWD_OK' => 'Ez a jelsz� elfogadhat�',
  'Reg_Email_Invalid' => ' email c�m nem �rv�nyes, vagy m�r szerepel az adatb�zisban',
  'Reg_Email_OK' => ' email c�m helyes',

// Moved here from lang_adv_time.php
  'time_mode' => 'Id� kezel�se',
  'time_mode_text' => 'A t�l-ny�r k�l�nbs�ge a norm�l id� �s a ny�ri id�sz�m�t�s k�z�tti k�l�nbs�g. Ez 0 �s 120 perc k�z� es� �rt�k, �ltal�ban 60 perc.<br /><br /><strong> * A csilaggal megjel�lt opci� az alap�rtelmezett be�ll�t�s ezen az oldalon, �s az adminisztr�tor aj�nlata, hogy erre �ll�tsd be. </strong>',
  'time_mode_auto' => 'Automatikus m�d...',
  'time_mode_full_pc' => 'A kiszolg�l� ideje',
  'time_mode_server_pc' => 'Univerz�lis kiszolg�l�id�, Id�z�na/Ny�ri id�sz�m�t�s<br /><span STYLE="margin-left: 25">a sz�m�t�g�pedr�l</span>',
  'time_mode_full_server' => 'Kiszolg�l� ideje',
  'time_mode_manual' => 'K�zi be�ll�t�s...',
  'time_mode_dst' => 'Ny�ri id�sz�m�t�s',
  'time_mode_dst_server' => 'Kiszolg�l� szerint',
  'time_mode_dst_time_lag' => 'T�l-ny�r k�l�nbs�g',
  'time_mode_dst_mn' => 'perc',
  'time_mode_timezone' => 'Id�z�na',
  
  'dst_time_lag_error' => 'Hiba a t�l-ny�r k�l�nbs�gben. A megadott sz�mnak 0 �s 120 k�z�tt kell lennie.',
  
  'dst_enabled_mode' => ' [DST enged�lyezve]',
  'full_server_mode' => 'Az id� szinkroniz�lva a f�rum kiszolg�l� idej�vel',
  'server_pc_mode' => 'Az id� szinkroniz�lva a kiszolg�l� idej�vel - Id�z�na/DST inform�ci�k a te sz�m�t�g�pedr�l lettek haszn�lva',
  'full_pc_mode' => 'Az id� szinkroniz�lva a sz�m�t�g�ped idej�vel',
  
  'Smileys_Per_Page' => 'Smiley egy oldalon',

/* lang_site_hist.php - BEGIN */
  'Site_history' => 'Oldalt�rt�net',
  'Month' => 'H�nap',
  'Week_day' => 'H�t napjai',
  'Not_availble' => 'Nem el�rhet�',
  'Total_users' => 'Maxim�lis felhaszn�l�',
  'Reg_users' => 'Regisztr�lt felhaszn�l�',
  'Hidden_users' => 'Rejtett felhaszn�l�k',
  'Guests_users' => 'Vend�g felhaszn�l�k',
  'New_users' => '�j felhaszn�l�k',
  'New_topics' => '�j t�m�k',
  'New_posts_reply' => 'Posts/Reply',
  'Most_online' => 'Legt�bb online felhaszn�l�: %s',
  'Most_online_week' => 'Legt�bb online felhaszn�l az utols� 7 napban',
  'Last_24' => 'Legt�bb online felhaszn�l� az utols� %s �r�ban',
  'Top_Posting_Users' => 'Legt�bbet hozz�sz�l� felhaszn�l�k',
  'Top_Posting_Users_week' => 'Legt�bbet hozz�sz�l� felhaszn�l�k a h�ten [%s]',
  'Rank' => 'Rang',
  'Percent' => 'Sz�zal�k',
  'Graph' => 'Grafikon',
  'Top_Visiting_Users' => 'Legt�bb id�t itt t�lt� felhaszn�l�k',
/* lang_site_hist.php - END */

/* lang_referrers.php - BEGIN */
  'Referrers_Title' => 'Http hivatkoz�k kezel�se',
  'Referrers_Cleared' => 'Hivatkoz�k tiszt�t�sa',
  'Referrers_Clear' => 'Mindet t�r�l',
  'Click_Return_Referrers' => 'Kattints %side%s, hogy visszat�rj a Hivatkoz�kra',
  'Referrers' => 'Http hivatkoz�k',
  'Referrer_host' => 'Hivatkoz�k g�pneve',
  'Referrer_url' => 'Hivatkoz�k Url-je',
  'Referrer_ip' => 'Hivatkoz�k IP-je',
  'Referrer_hits' => 'Tal�lat',
  'Referrer_first' => 'Els� l�togat�s',
  'Referrer_last' => 'Utols� l�togat�s',
  'Viewing_Referrers' => 'Hivatkoz�k megtekint�se',
/* lang_referrers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
  'X_Days' => '%d napja',
  'X_Weeks' => '%d hete',
  'X_Months' => '%d h�napja',
  'X_Years' => '%d �ve',
  
  'Confirm_delete_user' => 'T�nyleg t�r�lni akarod ezt a felhaszn�l�t?',
  'Prune_no_users' => 'Nincs t�r�lt felhaszn�l�',
  'Prune_users_number' => 'Az al�bbi %d felhaszn�l� t�r�lve lett:',
  
  'Prune_user_list' => 'Users who will be deleted',
  'Prune_on_click' => 'You are about to delete %d users. Are you sure?',
  'Prune_Action' => 'Click link below to execute',
  'Prune_users_explain' => 'From this page you can prune users. You can choose one of three links: delete old users who have never posted, delete old users who have never logged in, delete users who have never activated their account.<p/><b>Note:</b> There is no undo function.',
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
  'Avatar_Generator' => 'Avatar Gener�tor',
  'Available' => 'El�rhet� avatarok',
  'Random' => 'V�letlen',
  'Avatar_Text' => 'K�rlek adj meg egy sz�veget, ami az avatarodhoz k�thet�nk:',
  'Avatar_Preview' => 'Avatar el�n�zet',
  'Your_Avatar' => 'Avatarod',
  'Submit_Avatar' => 'Avatar bek�ld�se',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

  'Upload_Image_Local' => 'K�p felt�lt�se',
  'Uploaded_Images_Local' => 'Felt�lt�tt k�pek',
  'Upload_Image_Local_Explain' => 'Kijel�lt f�jl felt�lt�se',
  'Uploaded_Image_Success' => 'A k�p sikeresen fel lett t�ltve.',
  'Uploaded_Image_BBC' => 'Ez a BBCode-ot haszn�lhatod ehhez a k�phez a hozz�sz�l�saidban.',
  'Upload_Image_Empty' => 'Semmit te sem tudsz felk�ldeni... hi�ba pr�b�lod!',
  'Upload_File_Too_Big' => 'A felt�ltend� f�jl t�l nagy! A maxim�lis elfogadott m�ret:',
  'Upload_File_Type_Allowed' => 'Csak ezeket a f�jlt�pusokat engedj�k felt�lteni',
  'Upload_Insert_Image' => 'BBCode besz�r�sa',
  'Upload_Close' => 'Bez�r',
  'BBCode' => 'BBCode',
  'HTML' => 'HTML',
  
  'No_News' => 'Nincsenek h�rek',
  
  'Email_confirm' => 'Email c�m j�v�hagy�sa',
  'Email_mismatch' => 'Az �ltalad megadott email c�mek nem egyeznek.',
  
  'View_ballot' => 'Szavazatok megn�z�se',
  'Full_edit' => 'Teljes szerkeszt� m�dba v�lt�s',
  'Save_changes' => 'Ment',
  'No_subject' => '(Nincs t�rgy)',
  'Edit_quick_post' => 'Ennek a hozz�sz�l�snak a gyorsszerkeszt�se',
  'AJAX_search_results' => 'A gyorskeres� %s hasonl� c�m� t�m�t tal�lt. Kattints ide a t�m�k megtekint�s�hez',
  'AJAX_search_result' => 'A gyorskeres� egy hasonl� c�m� t�m�t tal�lt. Kattints ide a t�m�k megtekint�s�hez',
  'More_matches_username' => 'T�bb mint egy felhaszn�l�n�v illeszkedik a keres�sre. K�rlek jel�lj ki egyet az al�bbi dobozb�l.',
  'No_username' => 'Musz�j megadnod egy felhaszn�l�nevet.',
  'AJAX_quick_search_results' => 'A gyorskeres� %s hasonl� t�m�t tal�lt a megadott kulcszavak alapj�n.<br />Jobb oldalon az els� tal�latot l�thatod.<br />Kattints a KERES�SRE a teljes lista megtekint�s�hez.',
  'AJAX_quick_search_result' => 'A gyorskeres� egy hasonl� t�m�t tal�lt a megadott kulcszavak alapj�n.<br />Jobb oldalon l�thatod az eredm�nyt.',
  
  'Icon_Description' => 'Ikon meghat�roz�sa',
  
  'Feature_Disabled' => 'Ez a k�pess�g ki van kapcsolva.',
  
// Resend Activation - BEGIN
  'Resend_activation_email' => 'Aktiv�l� email �jrak�ld�se',
  'Invalid_activation' => 'Felhaszn�l� hozz�f�r�st csak adminisztr�torok aktiv�lhatnak.',
  'No_actkey' => 'A hozz�f�r�sednek nincs aktiv�l� kulcsa. K�rlek l�pj kapcsolatba az oldal adminisztr�toraival tov�bbi inform�ci��rt.',
  'Send_actmail_flood_error' => 'Nem ind�thatsz �j k�r�st, am�g nem �rt v�get az el�z�; k�rlek k�s�bb pr�b�lkozz vele ism�t.',
  'Resend_activation_email_done' => 'Az aktiv�l� email el lett k�ldve. K�rlek ellen�rizd le az emailjeidet tov�bbi inform�ci��rt.',
// Resend Activation - END

  'Bots_Group' => 'Botok',
  'Bots_Color' => 'Botok sz�ne',
  'Active_Users_Group' => 'Akt�v felhaszn�l�k',
  'Active_Users_Color' => 'Akt�v felhaszn�l�k sz�ne',
  'Group_Default_Membership' => 'Alap�rtelmezett csoport',
  'Group_Default_Membership_Explain' => 'V�lassz egy alap�rtelmezett csoportot a felhasz�l�nak, hogy hozz� lehessen rendelni e rangot �s egy sz�nt.',
  'User_Color' => 'Felhaszn�l� sz�ne',
  'User_Color_Explain' => 'Ha meghat�rozol egy sz�nt ennek a felhaszn�l�nak, akkor az fel�l fogja b�r�lni az alap�rtelmezett csoport �ltal meghat�rozott sz�nt. Haszn�l hexa k�dot a sz�n meghat�roz�s�ra <b>#</b> n�lk�l. P�ld�ul: ff0000 A PIROS k�dja.',
  'No_Groups_Membership' => 'Nincs csoporttags�ga',
  'No_Default_Group' => 'Nincs alap�rtelmezett csoport',
  'Group_members_updated' => 'A csoporttagok sikeresen friss�tve.',
  'Colorize_All' => 'Minden tag kisz�nez�se',
  'Colorize_Selected' => 'A kiv�lasztottak kisz�nez�se',
  
  'CompanyWho' => 'A T�rsas�g',
  'CompanyWhere' => 'El�rhet�s�g',
  'CompanyServices' => 'Szolg�ltat�sok',
  'CompanyProducts' => 'Term�kek',
  
  'ShareThisTopic' => 'T�ma megoszt�sa',
  
  'Remove_cookies' => 'Az oldal �sszes s�tij�nek elt�vol�t�sa',
  'Cookies_deleted' => 'Minden s�ti le lett t�r�lve. Ki lett�l jelentkeztetve.<br />A t�rl�s akkor lesz teljes, ha a b�ng�sz�t azonnal bez�rod.',
  'Delete_cookies' => 'S�tik t�rl�se',
  'cookies_confirm' => 'T�nyleg t�r�lni szeretn�d minden az oldalhoz kapcsol�d� s�tiket?<br /><br />Ez az akci� ki fog jelentkeztetni.',
  
  'CustomIcy' => 'CustomIcy',
  
  'Drafts' => 'V�zlatok',
  'Drafts_Action' => 'Akci�',
  'Drafts_Save' => 'Ment',
  'Drafts_Load' => 'Bet�lt',
  'Drafts_Saved' => 'A v�zlat el lett mentve',
  'Drafts_Loaded' => 'V�zlat bet�ltve',
  'Drafts_No_Drafts' => 'Nincs elmentett v�zlat',
  'Drafts_Delete_Sel' => 'Kijel�lt t�rl�se',
  'Drafts_Save_Question' => '<br /><br />T�nyleg el akarod menteni ezt az �zenetet a v�zlatok k�z�?<br /><br />K�rlek, hogy mindig csak az �zenet t�rzs�t mentsd el.',
  'Drafts_Delete_Question' => '<br /><br />T�nyleg t�r�lni szeretn�d a kijel�lt v�zlatokat?',
  'Drafts_Type' => 'V�zlat t�pusa',
  'Drafts_Subject' => 'V�zlat t�rgya',
  'Drafts_NT' => '�j t�ma',
  'Drafts_NM' => 'V�lasz',
  'Drafts_NPM' => 'Priv�t �zenet',
  
  'CannotEditAdminsPosts' => 'Nem szerkesztheted az adminisztr�tor hozz�sz�l�sait',
  'Random_Number' => 'V�letlensz�m',
  
  'New_download' => 'Az �j let�lt�s fel lett t�ltve, vagy friss�tve lett.<br />Kattints %side%s, hogy megn�zd.',
  'Dl_bug_tracker' => 'Hibakezel�',
  'Downloads_ADV' => 'Let�lt�sek+',
  
  'TopicUseful' => 'Mennyire tal�ltad hasznosnak a t�m�t?',
  'Article' => 'Cikk',
  'Comments' => 'Komment�rok',
  
  'Sitemap' => 'Oldalt�rk�p',
  
  'Delete_My_Account' => 'Hozz�f�r�s t�rl�se',
  'Delete_My_Account_Explain' => 'A t�r�lni szeretn�d a hozz�f�r�sed err�l az oldalr�l, akkor k�ld el a k�r�sed ezzel az �rlappal, �s letiltjuk amint lehet.<br />K�r�nk t�rgynak "Hozz�f�r�s t�rl�se" legyen megadva, �s (ha akarod) p�r sz�ban �rd le, hogy mi�rt k�red ezt.',
  
  'KB_MODE_ON' => 'TB mod enged�lyez�se',
  'KB_MODE_OFF' => 'TB mod tilt�sa',
  
  'Go_To_Page_Number' => 'Ir�ny az oldalra',
  
  'Admin_Emails' => 'Adminisztr�torok k�ldhetnek inform�ci�t sz�momra emailben',
  'Allow_PM_IN' => 'Engedem, hogy a felhaszn�l�k Priv�t �zenetek k�ldhessenek nekem',
  'Allow_PM_IN_Explain' => 'A rendszer adminisztr�torai, moder�torai �s a bar�taid ett�l f�ggetlen�l k�ldhetnek neked �zenetet.',
  'Allow_PM_IN_SEND_ERROR' => 'A felhaszn�l� letiltotta a norm�l felhaszn�l�kt�l val� �zenetek fogad�s�t, �gy nem kapta meg a te Priv�t �zenetedet sem.',

// 'UCP_ZEBRA' => 'Friends &amp; Foes',
  'UCP_ZEBRA' => 'Bar�tkezel�',
  'UCP_ZEBRA_FOES' => 'Ellens�g kezel�se',
  'UCP_ZEBRA_FRIENDS' => 'Bar�tok kezel�se',
  
  'ADD_FOES' => '�j ellens�g hozz�ad�sa',
  'ADD_FOES_EXPLAIN' => 'T�bb felhaszn�l�t is megadhatsz, ha mindet k�l�n sorba �rod.',
  'YOUR_FOES' => 'Ellens�geid',
  'YOUR_FOES_EXPLAIN' => 'V�laszd ki az elt�vol�tand� felhaszn�l�neveket �s kattints a k�ld�s gombra.<br />Tipp: a CTRL gombot lenyomva t�bbet is ki tudsz egyszerre jel�lni.',
  'FOE_MESSAGE' => '�zenet egy ellens�gt�l',
  'FOES_EXPLAIN' => 'Az ellens�gk�nt megjel�lt felhaszn�l�kat alap�rtelmez�sben figyelmen k�v�l hagyod. A Hozz�sz�l�sai p�ld�ul sz�modra nem jelennek meg, szem�lyes �zeneteket t�le nem fogadsz. K�rlek vedd figyelembe, hogy az adminisztr�torokat �s a moder�torokat nem tudod �gy elrejteni.',
  'FOES_UPDATED' => 'Az ellens�geid list�ja sikeresen friss�tve.',
  'FOES_UPDATE_ERROR' => 'Az ellens�geid list�ja nem lett friss�tve.',
  'NO_FOES' => 'Jelenleg nincs ellens�ged',
  
  'ADD_FRIENDS' => '�j bar�t hozz�ad�sa',
  'ADD_FRIENDS_EXPLAIN' => 'T�bb felhaszn�l�t is megadhatsz, ha mindet k�l�n sorba �rod.',
  'YOUR_FRIENDS' => 'Bar�taid',
  'YOUR_FRIENDS_EXPLAIN' => 'V�laszd ki az elt�vol�tand� felhaszn�l�neveket �s kattints a k�ld�s gombra.<br />Tipp: a CTRL gombot lenyomva t�bbet is ki tudsz egyszerre jel�lni.',
  'FRIEND_MESSAGE' => '�zenet egy bar�tt�l',
  'FRIENDS' => 'Bar�tok',
  'FRIENDS_EXPLAIN' => 'Egy bar�ttal val� kapcsolattart�s, illetve kommunik�ci� sokkal gyorsabb �s egyszer�bb. a template t�mogatja, ak�r k�l�n ki is lesznek emelve.',
  'FRIENDS_UPDATED' => 'Az bar�taid list�ja sikeresen friss�tve.',
  'FRIENDS_UPDATE_ERROR' => 'Az bar�taid list�ja nem lett friss�tve.',
  'FRIENDS_ONLINE' => 'Online',
  'FRIENDS_HIDDEN' => 'Rejtett',
  'FRIENDS_OFFLINE' => 'Offline',
  'NO_FRIENDS' => 'Jelenleg nincs bar�tod',
  'NO_FRIENDS_OFFLINE' => 'Egy bar�tod sem offline',
  'NO_FRIENDS_ONLINE' => 'Egy bar�tod sem online',
  
  'Default' => 'Alap�rtelmezett',
  
  'Reserved_Author' => '[ REJTETT ]',
  'Reserved_Topic' => '[ ELZ�RT T�MA ]',
  'Reserved_Post' => '[ ELZ�RT HOZZ�SZ�L�S ]',
  
  'THANKS_RECEIVED' => 'K�sz�net �rkezett',
  
  'RECENT_USER_ACTIVITY' => 'Legfrissebb felhaszn�l�-aktivit�s',
  'USER_TOPICS_STARTED' => 'Elind�tott t�m�k',
  'USER_POSTS' => 'Bek�ld�tt hozz�sz�l�sok',
  'USER_TOPICS_VIEWS' => 'Megtekintett hozz�sz�l�sok',
  'RECENT_USER_STARTED_TITLE' => 'ind�tota: %s',
  'RECENT_USER_STARTED_NAV' => 'A t�ma ind�t�ja: %s',
  'RECENT_USER_POSTS_TITLE' => 'amire %s hozz�sz�l�s �rkezett',
  'RECENT_USER_POSTS_NAV' => 'T�m�k, amiket %s ind�tott el',
  'RECENT_USER_VIEWS_TITLE' => 'megtekintett�k: %s',
  'RECENT_USER_VIEWS_NAV' => '%s �ltal megtekintett t�m�k',
  
  'WARN_NO_BUMP' => 'Te vagy az utols� hozz�sz�l� ebben a t�m�ban: te nem tudsz �j hozz�sz�l�st bek�ldeni 24 �r�n bel�l, kiv�ve hogyha valaki m�s v�laszol id�k�zben.',
  
  'LINK_THIS_TOPIC' => 'T�ma linkje',
  'LINK_URL' => 'URL',
  'LINK_BBCODE' => 'BBCode',
  'LINK_HTML' => 'HTML',
  
  'NEWS_POSTED' => 'Keres�s az �j hozz�sz�l�sokban',
  'TOPICS_POSTED' => 'Keres�s a t�maind�t�sokban',
  'POSTS_POSTED' => 'Keres�s minden hozz�sz�l�sban',
  
  'ACCOUNT_DELETION_REQUEST' => '%s felhaszn�l� k�rte, hogy t�r�lj�k a hozz�f�r�s�t.',
  
  'SORT_TOPICS' => 'T�m�k rendez�se',
  'SORT_TOPICS_NEWEST' => '�jabbak',
  'SORT_TOPICS_OLDEST' => 'R�gebbiek',
  
  'EDIT_POST_DETAILS' => 'Hozz�sz�l�s r�szleteinek szerkeszt�se',
  'CURRENT_POSTER' => 'Aktu�lis hozz�sz�l�',
  'NEW_POSTER' => '�j hozz�sz�l�',
  'DETAILS_CHANGED' => '<b>A hozz�sz�l�s r�szletei sikeresen meg lettek v�ltoztatva.</b></span><br /><span class="postdetails">Ez az ablak bez�r�dik 3 m�sodperc m�lva.',
  
  'Redirect' => '�tir�ny�t�s',
  'Redirect_to' => 'Ha a b�ng�sz�d nem t�mogatja az �tir�ny�t�st, akkor kattints %side%s, hogy az �j oldalra ker�lj',
  
  'InProgress' => 'Folyamatban',
  
  'HAPPY_BIRTHDAY' => 'Happy Birthday',
  
  'DOWNLOAD' => 'Let�lt�s',
  'DOWNLOADED' => 'Let�ltve',
  'FILESIZE' => 'F�jlm�ret',
  'FILENAME' => 'F�jl neve',
  'FILE_NOT_AUTH' => 'Nem vagy azonos�tva, nem t�ltheted le ezt a f�jlt',
  'SHOW_POSTS_FROM' => 'Mutasd a hozz�sz�l�sokat ett�l',
  'SHOW_POSTS_TO' => 'eddig',
  
  'SEE_MORE_DETAILS' => 'Tov�bbi r�szletek...',
  'UNKNOWN' => 'Ismeretlen',
  'MASS_PM' => 'T�meges PM',
  'TEXT_FORMAT' => 'Form�tum',
  'SENDER' => 'K�ld�',
  'PM_NOTIFICATION' => 'Hell�!<br /><br />�rkezett a nevedre egy �j Priv�t �zenet a "{SITENAME}" oldal�n.<br /><br />Meg tudod n�zni az �zenetet, ha az al�bbi linkre kattintassz:<br /><br />{U_INBOX}<br /><br />',
  
  'GSEARCH' => 'Google Keres�',
  'GSEARCH_ENGINE' => 'Haszn�lj Google Keres� Motort',
  'SEARCH_WHAT' => 'Mit keresel',
  'SEARCH_WHERE' => 'Hol keresed',
  'SEARCH_THIS_FORUM' => 'Keres�s ebben a f�rumban...',
  'SEARCH_THIS_TOPIC' => 'Keres�s ebben a t�m�ban...',
  'VF_ALL_TOPICS' => 'Minden t�ma',
  
  'WHITE_LIST_MESSAGE' => 'Ezen az oldalon k�telez� a felhaszn�l�i hozz�f�r�s aktiv�l�sa. Tov�bbi inform�ci�kat az aktiv�l� emailban tal�lhatsz. K�rlek ellen�rizd le, hogy a lev�l nincs e a spam-ek k�z�tt.',
  'CLICK_RETURN_HOME' => 'Kattints %side%s, hogy visszat�rj a Home oldalra',
  
  'WEEK_DAY_SUNDAY' => 'Vas�rnap',
  'WEEK_DAY_MONDAY' => 'H�tf�',
  'WEEK_DAY_TUESDAY' => 'Kedd',
  'WEEK_DAY_WEDNESDAY' => 'Szerda',
  'WEEK_DAY_THURSDAY' => 'Cs�t�rt�k',
  'WEEK_DAY_FRIDAY' => 'P�ntek',
  'WEEK_DAY_SATURDAY' => 'Szombat',
  
  'RATINGS' => '�rt�kel�sek',
  
  'ERROR_TABLE' => 'Nem lehet lek�rdezni a %s t�bl�b�l',
  
  'SMILEYS' => 'Smiley-k',
  'SMILEYS_NO_CATEGORIES' => 'Nincs kateg�ria meghat�rozva',
  'SMILEYS_CATEGORY' => 'Kategoria',
  'SMILEYS_GALLERY' => 'Smileygal�ria',
  'SMILEYS_STANDARD' => 'Alap Smiley-k',
  
  'QUICK_LIST' => 'Teljes lista',
  'NORMAL_LIST' => 'Norm�l lista',
  
  'RETURN_PAGE' => '%sVissza az el�z� oldalra%s',
  'FILE_NOT_FOUND' => 'F�jl nem tal�lhat�',
  'FSOCK_DISABLED' => 'FSOCK letiltva',
  
  'MANAGEMENT' => 'Menedzsment',
  'SORT_ORDER' => 'Rendezve',
  'SORT_DIR' => 'Rendez�s ir�nya',
  
  'TIME_YEAR' => '�v',
  'TIME_MONTH' => 'H�nap',
  'TIME_DAY' => 'Nap',
  'TIME_HOUR' => '�ra',
  'TIME_MINUTE' => 'Perc',
  'TIME_SECOND' => 'M�sodperc',
  
  'CONTACTS' => 'Kapcsolatok',
  
// Event Registration - BEGIN
  'Reg_Title' => 'Rendezv�ny regisztr�ci�',
  'Post_Registration' => 'Rendezv�ny regisztr�ci�',
  'Add_registration' => 'Rendezv�ny regisztr�ci� hozz�ad�sa',
  'Add_reg_explain' => '&nbsp;&bull; Jel�ld <i>Akt�vnak</i>, ha szeretn�l egy regisztr�ci�s �rlapot megjelen�teni a hozz�sz�l�sn�l. Illetve ha nem szeretn�l, akkor ne jel�ld be.<br />&nbsp;&bull; Jel�ld be a <i>Resetet</i> ha az aktu�lis regisztr�ci�kat t�r�lni szeretn�d.<br />&nbsp;&bull; Add meg a regisztr�lhat� <i>Helyek</i> sz�m�t, ha korl�tozni szeretn�d a jelentkez�k sz�m�t. "0" vagy �res = korl�tlan.',
  'reg_activate' => 'Aktiv�l',
  'reg_reset' => 'Reset',
  'Reg_Insert' => 'Regisztr�lt�l a rendezv�nyre.',
  'Reg_Change' => 'Regisztr�ci� megv�ltoztatva.',
  'Reg_Confirm' => 'Regisztr�ci� elfogadva.',
  'Reg_Unregister' => 'Regisztr�ci� visszavonva.',
  'Reg_Max_Registrations' => 'Minden regisztr�lhat� hely elkelt. Nem tudunk t�bb regisztr�ci�t elfogadni.',
  'Reg_No_Slots_Left' => 'Nem maradt t�bb regisztr�lhat� hely.',
  'Reg_One_Slot_Left' => 'Egy �res hely van m�g.',
  'Reg_Slots_Left' => '%s �res hely van m�g.',
  'Reg_Self_Unregister' => 'Regisztr�ci� visszavon�sa',
  'Reg_Own_Confirmation' => 'Elfogad�s',
  'Reg_Own_Confirmed' => 'elfogadva',
  'Reg_Green_Option' => 'Z�ld opci�',
  'Reg_Blue_Option' => 'K�k opci�',
  'Reg_Red_Option' => 'Piros opci�',
  'Reg_Value_Max_Registrations' => 'Helyek',
  'Reg_Do' => 'Jelentkezek',
  'Reg_Maybe' => 'Nem biztos',
  'Reg_Dont' => 'Most nem megyek',
  'Reg_Head_Username' => 'Felhaszn�l�:',
  'Reg_Head_Time' => 'D�tum:',
  'Reg_for' => 'Regisztr�ci�s id�: ',
  'Reg_for_explain' => '[ Addj meg 0-t vagy hagyd �resen, ha nem akarod, hogy lej�rjon a regisztr�ci� ]',
  'Reg_no_options_specified' => 'Megjel�lhetsz egy opci�t a regisztr�l�skor.',
  'Reg_event_date' => '<b>A rendezv�ny id�pontja: </b>',
// Event Registration - END

  'REPLY_PREFIX_OLD' => 'Re: ',
  'REPLY_PREFIX' => 'Re: ',
  
  'READ_ONLY_FORUM' => 'Bocsi, de a f�rum <b>CSAK OLVASHAT�</b> m�dba van kapcsolva. Nem lehet a f�rumba �zenetet bek�ldeni. K�rlek pr�b�lkozz k�s�bb.',

// Tickets Submission - BEGIN
  'TICKET_CAT' => 'Categ�ria',
// Tickets Submission - END




/*Special Cases, Do not bother to change for another language */
  'YES' => 'Igen',
  'NO' => 'Nem',
  'HL_File_Error' => $lang['Error_File_Opening'],
  
  'Prune_commands' => 
  array (
// here you can make more entries if needed
    0 => 'Nem-hozz�sz�l� felhaszn�l�k tiszt�t�sa',
    1 => 'Inakt�v felhaszn�l�k tiszt�t�sa',
    2 => 'Nem-aktiv�lt felhaszn�l�k tiszt�t�sa',
    3 => 'Hossz�-ideje-csendben-l�v� felhaszn�l�k tiszt�t�sa',
    4 => 'Sz�tlanok tiszt�t�sa',
  ),
  'Prune_explain' => 
  array (
    0 => 'Azok, akik m�g sose sz�ltak hozz�, <b>kiv�ve</b> az �t�bbi %d napban regisztr�lt �j felhaszn�l�k',
    1 => 'Akik m�g sohasem jelentkeztek be, <b>kiv�ve</b> az �t�bbi %d napban regisztr�lt �j felhaszn�l�k',
    2 => 'Akik soha sem aktiv�lt�k felhaszn�l�jukat, <b>kiv�ve</b> az �t�bbi %d napban regisztr�lt �j felhaszn�l�k',
    3 => 'Akik 60 napja nem l�togatt�k meg az oldalt, <b>kiv�ve</b> az �t�bbi %d napban regisztr�lt �j felhaszn�l�k',
    4 => 'Akik a regisztr�ci�jukt�l sz�m�tott els� 10 napban 1-n�l kevesebbszer sz�ltak hozz�, <b>kiv�ve</b> az �t�bbi %d napban regisztr�lt �j felhaszn�l�k'),
// Timezones - BEGIN
  'All_times' => 'Minden id�: %s',
  'tzs' => array (
// Time zones short
    -12 => 'GMT - 12 �ra',
    -11 => 'GMT - 11 �ra',
    -10 => 'GMT - 10 �ra',
    -9 => 'GMT - 9 �ra',
    -8 => 'GMT - 8 �ra',
    -7 => 'GMT - 7 �ra',
    -6 => 'GMT - 6 �ra',
    -5 => 'GMT - 5 �ra',
    -4 => 'GMT - 4 �ra',
    '-3.5' => 'GMT - 3.5 �ra',
    -3 => 'GMT - 3 �ra',
    -2 => 'GMT - 2 �ra',
    -1 => 'GMT - 1 �ra',
    0 => 'GMT',
    1 => 'GMT + 1 �ra',
    2 => 'GMT + 2 �ra',
    3 => 'GMT + 3 �ra',
    '3.5' => 'GMT + 3.5 �ra',
    4 => 'GMT + 4 �ra',
    '4.5' => 'GMT + 4.5 �ra',
    5 => 'GMT + 5 �ra',
    '5.5' => 'GMT + 5.5 �ra',
    6 => 'GMT + 6 �ra',
    '6.5' => 'GMT + 6.5 �ra',
    7 => 'GMT + 7 �ra',
    8 => 'GMT + 8 �ra',
    9 => 'GMT + 9 �ra',
    '9.5' => 'GMT + 9.5 �ra',
    10 => 'GMT + 10 �ra',
    11 => 'GMT + 11 �ra',
    12 => 'GMT + 12 �ra',
    13 => 'GMT + 13 �ra',
  ), 'tz' => array (
// These are displayed in the timezone select box
    -12 => '(GMT -12 �ra) Eniwetok, Kwajalein',
    -11 => '(GMT -11 �ra) Midway-sziget, Szamoa',
    -10 => '(GMT -10 �ra) Hawaii',
    -9 => '(GMT -9 �ra) Alaszka',
    -8 => '(GMT -8 �ra) Csendes-�ce�ni id�, Tijuana',
    -7 => '(GMT -7 �ra) Arizona, Hegyi id�',
    -6 => '(GMT -6 �ra) Amerikai k�z�pid�, K�z�p-Amerika, Mexik�v�ros',
    -5 => '(GMT -5 �ra) Bogota, Lima, Quito, Indiana, Keleti id�',
    -4 => '(GMT -4 �ra) Atlanti-�ce�ni id�, Caracas, La Paz',
    '-3.5' => '(GMT -3.5 �ra) �j-Founland',
    -3 => '(GMT -3 �ra) Braz�lia, Buenos Aires, Georgetown, Gr�nland',
    -2 => '(GMT -2 �ra) K�z�p-atlanti id�z�na',
    -1 => '(GMT -1 �ra) Azori-szigetek, Z�ld-foki-szigetek',
    0 => '(GMT 0) Greenwich, London, Dublin, Lisszabon',
    1 => '(GMT +1 �ra) Belgr�d, Budapest, Ljubljana, Pozsony, Pr�ga',
    2 => '(GMT +2 �ra) Budapest ny�ri isz., Ath�n, Isztambul, Minszk, Helsinki',
    3 => '(GMT +3 �ra) Bagdad, Kuvait, Rij�d, Moszkva, Szentp�terv�r',
    '3.5' => '(GMT +3.5 �ra) Teher�n',
    4 => '(GMT +4 �ra) Baku, Tbiliszi',
    '4.5' => '(GMT +4.5 �ra) Kabul',
    5 => '(GMT +5 �ra) Iszl�mb�d, Karacsi, Taskent, Jekatyerinburg',
    '5.5' => '(GMT +5.5 �ra) Chennai, Kalkutta, Mumbai, �j-Delhi',
    6 => '(GMT +6 �ra) Almaty, Novoszibirszk, Astana, Dhaka',
    '6.5' => '(GMT +6.5 �ra) Rangun',
    7 => '(GMT +7 �ra) Bangkok, Dzsakarta, Hanoi, Krasznojarszk',
    8 => '(GMT +8 �ra) Hongkong, Peking, Irkutszk, Ul�nb�tor, Perth',
    9 => '(GMT +9 �ra) Jakutszk, Oszkara, Szapporo, Toki�, Sz�ul',
    '9.5' => '(GMT +9.5 �ra) Adelaide, Darwin',
    10 => '(GMT +10 �ra) Brisbane, Canberra, Melbourne, Sydney, Guam',
    11 => '(GMT +11 �ra) Magad�n, Salamon-szigetek, �j Kaled�nia',
    12 => '(GMT +12 �ra) Auckland, Wellington, Fidzsi-szigetek, Kamcsatka',
    13 => '(GMT +13 �ra) Nuku\'alofa'
  ),
// Timezones - END
  'datetime' => 
  array (
    'Sunday' => $lang['WEEK_DAY_SUNDAY'],
    'Monday' => $lang['WEEK_DAY_MONDAY'],
    'Tuesday' => $lang['WEEK_DAY_TUESDAY'],
    'Wednesday' => $lang['WEEK_DAY_WEDNESDAY'],
    'Thursday' => $lang['WEEK_DAY_THURSDAY'],
    'Friday' => $lang['WEEK_DAY_FRIDAY'],
    'Saturday' => $lang['WEEK_DAY_SATURDAY'],
    'Sun' => 'Vas.',
    'Mon' => 'H�tf.',
    'Tue' => 'Kedd.',
    'Wed' => 'Szer.',
    'Thu' => 'Cs�t.',
    'Fri' => 'P�nt.',
    'Sat' => 'Szomb.',
    'January' => 'Janu�r',
    'February' => 'Febru�r',
    'March' => 'M�rcius',
    'April' => '�prilis',
    'May' => 'M�jus',
    'June' => 'J�nius',
    'July' => 'J�lius',
    'August' => 'Augusztus',
    'September' => 'Szeptember',
    'October' => 'Okt�ber',
    'November' => 'November',
    'December' => 'December',
    'Jan' => $lang['datetime']['JAN'],
    'Feb' => $lang['datetime']['FEB'],
    'Mar' => $lang['datetime']['MAR'],
    'Apr' => $lang['datetime']['APR'],
    'May' => $lang['datetime']['MAY'],
    'Jun' => $lang['datetime']['JUN'],
    'Jul' => $lang['datetime']['JUL'],
    'Aug' => $lang['datetime']['AUG'],
    'Sep' => $lang['datetime']['SEP'],
    'Oct' => $lang['datetime']['OCT'],
    'Nov' => $lang['datetime']['NOV'],
    'Dec' => $lang['datetime']['DEC'],
  ),
));

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