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
	'Home' => 'Főoldal',
	'Forum' => 'Fórum',
	'Category' => 'Kategória',
	'Topic' => 'Téma',
	'Topics' => 'Témák',
	'Replies' => 'Válaszok',
	'Views' => 'Megtekintve',
	'Post' => 'Hozzászólás',
	'Posts' => 'Hozzászólások',
	'Posted' => 'Beküldve',
	'Username' => 'Felhasználónév',
	'Password' => 'Jelszó',
	'Email' => 'Email',
	'Poster' => 'Küldő',
	'Author' => 'Szerző',
	'Time' => 'Idő',
	'Hours' => 'Óra',
	'Message' => 'Üzenet',

	'1_DAY' => '1 Nap',
	'7_DAYS' => '7 Nap',
	'2_WEEKS' => '2 Hét',
	'1_MONTH' => '1 Hónap',
	'3_MONTHS' => '3 Hónap',
	'6_MONTHS' => '6 Hónap',
	'1_YEAR' => '1 Év',

	'Go' => 'Elküld',
	'Jump_to' => 'Ugrás',
	'Submit' => 'Elküld',
	'Reset' => 'Visszaállít',
	'Cancel' => 'Mégse',
	'Preview' => 'Előnézet',
	'Confirm' => 'Megerősít',
	'Spellcheck' => 'Helyesírás-ellenőrzés',
	'Yes' => 'Igen',
	'No' => 'Nem',
	'Enabled' => 'Engedélyezve',
	'Disabled' => 'Letiltva',
	'Error' => 'Hiba',

	'GO' => 'Elküld',
	'JUMP_TO' => 'Ugrás',
	'SUBMIT' => 'Elküld',
	'RESET' => 'Visszaállít',
	'CANCEL' => 'Mégse',
	'PREVIEW' => 'Előnézet',
	'CONFIRM' => 'Megerősít',
	'YES' => 'Igen',
	'NO' => 'Nem',
	'ENABLED' => 'Engedélyezve',
	'DISABLED' => 'Letiltva',
	'ERROR' => 'Hiba',

	'Next' => 'Következő',
	'Previous' => 'Előző',
	'Goto_page' => 'Oldalra ugrás',
	'Joined' => 'Csatlakozott',
	'IP_Address' => 'IP cím',

	'Select_forum' => 'Válassz fórumot',
	'View_latest_post' => 'Utolsó hozzászólás megtekintése',
	'View_newest_post' => 'Legújabb hozzászólás megtekintése',
	'Page_of' => 'Oldal: <b>%d</b> / <b>%d</b>', // Replaces with: Page 1 of 2 for example

	'AIM' => 'AIM cím',
	'ICQ' => 'ICQ szám',
	'JABBER' => 'Jabber',
	'MSNM' => 'MSN Live',
	'SKYPE' => 'Skype',
	'YIM' => 'Yahoo Messenger',

	'Forum_Index' => 'Fórum',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Új téma indítása',
	'Reply_to_topic' => 'Válasz írása',
	'Reply_with_quote' => 'Válasz idézettel',

	'Click_return_login' => 'Kattints %side%s, hogy újra megpróbáld',
	'Click_return_index' => 'Kattints %side%s, hogy visszatérj a főoldalra',
	'Click_return_forum' => 'Kattints %side%s, hogy visszatérj a fórumhoz',
	'Click_return_topic' => 'Kattints %side%s, hogy visszatérj a témához', // %s's here are for uris, do not remove!
	'Click_return_viewtopic' => 'Kattints %side%s, hogy visszatérj a témához',
	'Click_return_modcp' => 'Kattints %side%s, hogy visszatérj a Moderátori Vezérlőpulthoz',
	'Click_return_profile' => 'Kattints %side%s, hogy visszatérj a Profilhoz',
	'Click_return_preferences' => 'Kattints %side%s, hogy visszatérj a Beállításokhoz',
	'Click_return_group' => 'Kattints %side%s, hogy visszatérj a csoport információkhoz',
	'Click_return_drafts' => 'Kattints %side%s, hogy visszatérj a Vázlatokhoz',
	'Click_return_inbox' => 'Kattints %side%s, hogy visszatérj az Érkező levelekhez',
	'Click_view_message' => 'Kattints %side%s az üzenet megtekintéséhez',
	'Click_view_privmsg' => 'Kattints %side%s, hogy megtekintsd az érkező leveleid',

	'Admin_panel' => 'AVP',

	'Board_disabled' => 'Elnézést, de az oldal átmenetileg nem elérhető. Kérjük, próbáld meg később.',

// Global Header strings
	'Registered_users' => 'Regisztrált felhasználók:',
	'Browsing_forum' => 'Fórumot böngésző felhasználók:',
	'Online_users_zero_total' => 'Összesen <b>0</b> felhasználó van jelen: ',
	'Online_users_total' => 'Összesen <b>%d</b> felhasználó van jelen: ',
	'Online_user_total' => 'Összesen <b>%d</b> felhasználó van jelen: ',
	'AC_Online_users_zero_total' => 'Összesen <b>0</b> felhasználó van a chaten: ',
	'AC_Online_users_total' => 'Összesen <b>%d</b> felhasználó van a chaten: ',
	'AC_Online_user_total' => 'Összesen <b>1</b> felhasználó van a chaten: ',
	'Reg_users_zero_total' => '0 Regisztrált, ',
	'Reg_users_total' => '%d Regisztrált, ',
	'Reg_user_total' => '%d Regisztrált, ',
	'Hidden_users_zero_total' => '0 Rejtett és ',
	'Hidden_user_total' => '%d Rejtett és ',
	'Hidden_users_total' => '%d Rejtett és ',
	'Guest_users_zero_total' => '0 Vendég',
	'Guest_users_total' => '%d Vendég',
	'Guest_user_total' => '%d Vendég',
	'Record_online_users' => 'A legtöbb felhasználó (<b>%s</b> fő) %s-kor tartózkodott itt', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sAdminisztrátor%s',
	'Mod_online_color' => '%sModerátor%s',

	'You_last_visit' => 'Utolsó látogatásod: %s', // %s replaced by date/time
	'Current_time' => 'Pontos idő: %s', // %s replaced by time

	'Search_new' => 'Utolsó látogatásod óta érkezett hozzászólások megtekintése',
	'Search_your_posts' => 'Hozzászólásaid',
	'Search_unanswered' => 'Megválaszolatlan hozzászólások',

	'Register' => 'Regisztráció',
	'Profile' => 'Profil',
	'Edit_profile' => 'Profil szerkesztése',
	'Search' => 'Keresés',
	'Memberlist' => 'Taglista',
	'FAQ' => 'GyIK',
	'KB_title' => 'Tudásbázis',
	'BBCode_guide' => 'BBCode Útmutató',
	'Usergroups' => 'Csoportok',
	'Last_Post' => 'Utolsó hozzászólás',
	'Moderator' => 'Moderátor',
	'Moderators' => 'Moderátorok',

// Stats block text
	'Posted_articles_zero_total' => 'Felhasználóink összesen <b>0</b> cikket küldtek be', // Number of posts
	'Posted_articles_total' => 'Felhasználóink összesen <b>%d</b> cikket küldtek be', // Number of posts
	'Posted_article_total' => 'Felhasználóink összesen <b>%d</b> cikket küldtek be', // Number of posts
	'Registered_users_zero_total' => 'Összesen <b>0</b> regisztrált felhasználónk van', // # registered users
	'Registered_users_total' => 'Összesen <b>%d</b> regisztrált felhasználónk van', // # registered users
	'Registered_user_total' => 'Összesen <b>%d</b> regisztrált felhasználónk van', // # registered users
	'Newest_user' => 'Legújabb regisztrált tagunk: <b>%s%s%s</b>', // a href, username, /a

	'No_new_posts_last_visit' => 'Nincs új hozzászólás az utolsó látogatásod óta',

	'No_new_posts_global_announcement' => 'Nincs új [ Globális köz. ]',
	'New_posts_global_announcement' => 'Új [ Globális köz. ]',
	'No_new_posts_announcement' => 'Nincs Új [ Közlemény ]',
	'New_posts_announcement' => 'Új	[ Közlemény ]',
	'No_new_posts_sticky' => 'Nincs új [ Kiemelt ]',
	'New_posts_sticky' => 'Új [ Kimelt ]',
	'No_new_posts_locked' => 'Nincs új [ Lezárt ]',
	'New_posts_locked' => 'Új [ Lezárt ]',
	'No_new_posts' => 'Nincs új hozzászólás',
	'New_posts' => 'Új hozzászólás',
	'New_post' => 'Új hozzászólás',
	'No_new_posts_hot' => 'Nincs új [ Népszerű ]',
	'New_posts_hot' => 'Új [ Népszerű ]',

	'Forum_no_new_posts' => 'Nincs új hozzászólás [Fórum]',
	'Forum_new_posts' => 'Új hozzászólás [Fórum]',
	'Cat_no_new_posts' => 'Nincs új hozzászólás [Kategória]',
	'Cat_new_posts' => 'Új hozzászólás [Kategória]',
	'Forum_is_locked' => 'Lezárt fórum',

// Login
	'Enter_password' => 'A bejelentkezéshez add meg a felhasználóneved és a jelszavad.',
	'Login' => 'Belépés',
	'Logout' => 'Kilépés',
	'Forgotten_password' => 'Elfelejtettem a jelszavam',
	'AUTOLOGIN' => 'Automatikus bejelentkezés',
	'Error_login' => 'Hibás vagy inaktív felhasználónevet és/vagy rossz jelszót adtál meg.',

// Index page
	'No_Posts' => 'Nincs hozzászólás',
	'No_forums' => 'Nincsenek fórumok',

	'Private_Message' => 'Privát üzenet',
	'Private_Messages' => 'Privát üzenetek',
	'Who_is_Online' => 'Ki van itt?',

	'Mark_all_forums' => 'Összes fórum megjelölése olvasottként',
	'Forums_marked_read' => 'Összes fórum megjelölve olvasottként',

// Viewforum
	'View_forum' => 'Fórum megtekintése',

	'Reached_on_error' => 'Váratlan hiba történt.',

	'Display_topics' => 'Előző témák megtekintése',
	'ALL_TOPICS' => 'Összes téma',

	'Topic_News_nb' => 'Hírek',
	'Topic_global_announcement_nb' => 'Globális közlemény',
	'Topic_Announcement_nb' => 'Közlemény',
	'Topic_Sticky_nb' => 'Kiemelt',
	'Topic_Moved_nb' => 'Áthelyezve',
	'Topic_Poll_nb' => 'Szavazás',
	'Topic_Event_nb' => 'Esemény',
	'Topic_Announcement' => '<b>Közlemény:</b>',
	'Topic_Sticky' => '<b>Kiemelt:</b>',
	'Topic_Moved' => '<b>Áthelyezve:</b>',
	'Topic_Poll' => '<b>Szavazás:</b>',
	'Topic_Event' => '<b>Esemény:</b>',
	'Topic_global_announcement' => '<b>Globális közlemény:</b>',
	'Post_global_announcement' => 'Globális közlemény',


	'Mark_all_topics' => 'Összes téma megjelölése olvasottként',
	'Topics_marked_read' => 'A fórum témái megjelölve olvasottként',

/*
	'Rules_post_can' => '<b>Indíthatsz</b> új témát ebben a fórumban',
	'Rules_post_cannot' => '<b>Nem</b> indíthatsz új témát ebben a fórumban',
	'Rules_reply_can' => '<b>Válaszolhatsz</b> témákra ebben a fórumban',
	'Rules_reply_can_own' => '<b>Nem</b> válaszolhatsz a saját témáidra ebben a fórumban',
	'Rules_reply_cannot' => '<b>Nem</b> válaszolhatsz témákra ebben a fórumban',
	'Rules_edit_can' => '<b>Szerkesztheted</b> a hozzászólásaidat ebben a fórumban',
	'Rules_edit_cannot' => '<b>Nem</b> szerkesztheted a hozzászólásaidat ebben a fórumban',
	'Rules_delete_can' => '<b>Törölheted</b> a hozzászólásaidat ebben a fórumban',
	'Rules_delete_cannot' => '<b>Nem</b> törölheted a hozzászólásaidat ebben a fórumban',
	'Rules_vote_can' => '<b>Szavazhatsz</b> ebben a fórumban',
	'Rules_vote_cannot' => '<b>Nem</b> szavazhatsz ebben a fórumban',
*/
	'Rules_post_can' => '<b>Indíthatsz</b> új témát ebben a fórumban',
	'Rules_post_cannot' => '<b>Nem</b> indíthatsz új témát ebben a fórumban',
	'Rules_reply_can' => '<b>Válaszolhatsz</b> témákra ebben a fórumban',
	'Rules_reply_can_own' => '<b>Nem</b> válaszolhatsz a saját témáidra ebben a fórumban',
	'Rules_reply_cannot' => '<b>Nem</b> válaszolhatsz témákra ebben a fórumban',
	'Rules_edit_can' => '<b>Szerkesztheted</b> a hozzászólásaidat ebben a fórumban',
	'Rules_edit_cannot' => '<b>Nem</b> szerkesztheted a hozzászólásaidat ebben a fórumban',
	'Rules_delete_can' => '<b>Törölheted</b> a hozzászólásaidat ebben a fórumban',
	'Rules_delete_cannot' => '<b>Nem</b> törölheted a hozzászólásaidat ebben a fórumban',
	'Rules_vote_can' => '<b>Szavazhatsz</b> ebben a fórumban',
	'Rules_vote_cannot' => '<b>Nem</b> szavazhatsz ebben a fórumban',
	'Rules_moderate' => '<b>Moderálhatod</b> ezt a %sfórum%sot', // %s replaced by a href links, do not remove!

// 'No_topics_post_one' => 'Nincsenek témák ebben a fórumban.<br />Kattints az <b>Új téma indítása</b> linkre, hogy új témát küldj be.',
	'No_topics_post_one' => 'Nincsenek témák ebben a fórumban, vagy nincs találat a megadott kezdőbetűvel.<br />Kattints az <b>Új téma indítása</b> linkre új téma indításához, vagy válassz egy másik kezdőbetűt.',

// Viewtopic
	'View_topic' => 'Téma megtekintése',

	'Guest' => 'Vendég',
	'Post_subject' => 'Tárgy beküldése',
	'View_next_topic' => 'Következő téma',
	'View_previous_topic' => 'Előző téma',
	'Submit_vote' => 'Szavazás',
	'View_results' => 'Eredmények megtekintése',

	'No_newer_topics' => 'Nincs újabb téma a fórumban',
	'No_older_topics' => 'Nincs régebbi téma a fórumban',
	'No_posts_topic' => 'Nincs hozzászólás a témában',

	'Display_posts' => 'Előző hozzászólások megjelenítése',
	'ALL_POSTS' => 'Összes hozzászólás',
	'Newest_First' => 'Újabbak',
	'Oldest_First' => 'Régebbiek',

	'Back_to_top' => 'Vissza a tetejére',
	'Back_to_bottom' => 'Oldal aljára',

	'Read_profile' => 'Felhasználó profiljának megtekintése',
	'Send_email' => 'E-mail küldése a felhasználónak',
	'Visit_website' => 'Szerző weboldalának megtekintése',
	'ICQ_status' => 'ICQ állapot',
	'Edit_delete_post' => 'Hozzászólás szerkesztése/törlése',
	'View_IP' => 'Szerző IP címének megtekintése',
	'Delete_post' => 'Hozzászólás törlése',

	'wrote' => 'írta', // proceeds the username and is followed by the quoted text
	'Quote' => 'Idézet', // comes before bbcode quote output.
	'Code' => 'Kód', // comes before bbcode code output.

	'Edited_time_total' => 'Utoljára %s módosította %s-kor; összesen %d alkalommal', // Last edited by me on 12 Oct 2001; edited 1 time in total
	'Edited_times_total' => 'Utoljára %s módosította %s-kor; összesen %d alkalommal', // Last edited by me on 12 Oct 2001; edited 2 times in total

	'Lock_topic' => 'Téma lezárása',
	'Unlock_topic' => 'Téma megnyitása',
	'Move_topic' => 'Téma áthelyezése',
	'Delete_topic' => 'Téma törlése',
	'Split_topic' => 'Téma szétválasztása',

	'Stop_watching_topic' => 'Leiratkozás a témáról',
	'Start_watching_topic' => 'Feliratkozás a témára',
	'No_longer_watching' => 'Sikeresen leiratkoztál a témáról',
	'You_are_watching' => 'Sikeresen feliratkoztál a témára',

	'Total_votes' => 'Összes szavazat',

// Posting/Replying (Not private messaging!)
	'Message_body' => 'Üzenet szövege',
	'Topic_review' => 'Téma előnézet',

	'No_post_mode' => 'Hozzászólás típusa', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normally)

	'Post_a_new_topic' => 'Új téma indítása',
	'Post_a_reply' => 'Válasz írása',
	'Post_topic_as' => 'Téma küldése, mint',
	'Edit_Post' => 'Hozzászólás szerkesztése',
	'Options' => 'Lehetőségek',

	'PM_Read' => 'Olvasott PÜ',
	'PM_Unread' => 'Olvasatlan PÜ',
	'PM_Replied' => 'Megválaszolt PÜ',

	'Post_Announcement' => 'Közlemény',
	'New_post_Announcement' => 'Új közlemény',
	'Post_Sticky' => 'Kiemelt',
	'New_post_Sticky' => 'Új kiemelt',
	'Post_Normal' => 'Normál',

	'Confirm_delete' => 'Biztosan törölni szeretnéd a hozzászólást?',
	'Confirm_delete_poll' => 'Biztosan törölni szeretnéd a szavazást?',

	'Flood_Error' => 'Most nem küldhetsz újabb hozzászólást, mivel az előzőt nemrég küldted el; próbáld meg kicsit később.',
	'Empty_subject' => 'Új téma indításához meg kell adnod a téma címét.',
	'Empty_message' => 'Új hozzászólás írásakor meg kell adnod az üzenet tartalmát.',
	'Forum_locked' => 'Lezárt fórum: nem indíthatsz új témákat, valamint a meglévőkre sem válaszolhatsz .',
	'Topic_locked' => 'Lezárt téma: nem szerkesztheted a hozzászólásaid, és nem küldhetsz új hozzászólást.',
	'No_post_id' => 'A szerkesztéshez ki kell választanod egy hozzászólást',
	'No_topic_id' => 'Válasz írásához ki kell választanod egy témát',
	'No_valid_mode' => 'Csak írhatsz, válaszolhatsz, szerkeszthetsz és idézhetsz hozzászólásokat. Kérjük, próbáld meg újra.',
	'No_such_post' => 'Nincs ilyen hozzászólás. Kérjük, próbáld meg újra.',
	'Edit_own_posts' => 'Elnézést, de csak a saját hozzászólásaidat szerkesztheted.',
	'Delete_own_posts' => 'Elnézést, de csak a saját hozzászólásaidat törölheted.',
	'Cannot_delete_replied' => 'Elnézést, de nem törölhetsz olyan hozzászólást, amelyre már válaszoltak.',
	'Cannot_delete_poll' => 'Elnézést, de nem törölhetsz érvényes szavazást.',
	'Empty_poll_title' => 'Adnod kell egy címet a szavazásnak.',
	'To_few_poll_options' => 'Legalább 2 választási lehetőséget meg kell adnod.',
	'To_many_poll_options' => 'Túl sok választási lehetőséget adtál meg.',
	'Post_has_no_poll' => 'Ez a téma nem tartalmaz szavazást.',
	'Already_voted' => 'Már szavaztál.',
	'No_vote_option' => 'Szavazáshoz választanod kell egy lehetőséget.',

	'Add_poll' => 'Szavazás hozzáadása',
	'Add_poll_explain' => 'Ha nem szeretnél szavazást indítani, hagyd üresen a mezőt.',
	'Poll_question' => 'Szavazás kérdése',
	'Poll_option' => 'Választási lehetőség',
	'Add_option' => 'Új lehetőség',
	'Update' => 'Frissítés',
	'Delete' => 'Törlés',
	'Poll_for' => 'Érvényes',
	'Days' => 'nap', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Ha nem szeretnéd, hogy lejárjon, írj be 0-t, vagy hagyd üresen ]',
	'Delete_poll' => 'Szavazás törlése',

	'POST_ENABLE_BBCODE' => 'BBCode engedélyezése a hozzászólásban',
	'POST_ENABLE_SMILEYS' => 'Hangulatjelek engedélyezése a hozzászólásban',
	'POST_ENABLE_HTML' => 'HTML engedélyezése a hozzászólásban',
	'POST_ENABLE_ACRO_AUTO' => 'Mozaikszavak és Autolinkek engedélyezése a hozzászólásban',
	'Disable_HTML_post' => 'HTML tiltása a hozzászólásban',
	'Disable_ACRO_AUTO_post' => 'Mozaikszavak és Autolinkek tiltása a hozzászólásban',
	'Disable_BBCode_post' => 'BBCode tiltása a hozzászólásban',
	'Disable_Smilies_post' => 'Hangulatjelek tiltása a hozzászólásban',

	'HTML_is_ON' => 'HTML <u>bekapcsolva</u>',
	'HTML_is_OFF' => 'HTML <u>kikapcsolva</u>',
	'BBCode_is_ON' => '%sBBCode%s <u>bekapcsolva</u>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => '%sBBCode%s <u>kikapcsolva</u>',
	'Smilies_are_ON' => 'Hangulatjelek <u>bekapcsolva</u>',
	'Smilies_are_OFF' => 'Hangulatjelek <u>kikapcsolva</u>',

	'Attach_signature' => 'Aláírás csatolása (az aláírás a profilban változtatható)',
	'Notify' => 'Értesítés válasz érkezéséről',
	'Delete_post' => 'Hozzászólás törlése',

	'Stored' => 'A hozzászólást sikeresen elküldted.',
	'Deleted' => 'A hozzászólást sikeresen törölted.',
	'Poll_delete' => 'A szavazást sikeresen törölted.',
	'Vote_cast' => 'A szavazás sikeresen frissítve.',

	'Topic_reply_notification' => 'Értesítés, ha a témában új válasz érkezik',

	'Emoticons' => 'Hangulatjelek',
	'More_emoticons' => 'Összes hangulatjel',

// Private Messaging
	'Private_Messaging' => 'Privát üzenetek',

	'Login_check_pm' => 'Privát üzeneteid megtekintéséhez jelentkezz be',
	'New_pms' => '%d új privát üzeneted van', // You have 2 new messages
	'New_pm' => '%d új privát üzeneted van', // You have 1 new message
	'No_new_pm' => 'Nincs új privát üzeneted',
	'Unread_pms' => '%d olvasatlan privát üzeneted van',
	'Unread_pm' => '%d olvasatlan privát üzeneted van',
	'No_unread_pm' => 'Nincs olvasatlan privát üzeneted',
	'You_new_pm' => 'Új privát üzeneted érkezett',
	'You_new_pms' => 'Új privát üzeneted érkezett',
	'You_no_new_pm' => 'Nincs új privát üzeneted',

	'Unread_message' => 'Olvasatlan üzenet',
	'Read_message' => 'Olvasott üzenet',

	'Read_pm' => 'Üzenet olvasása',
	'Post_new_pm' => 'Üzenet küldése',
	'Post_reply_pm' => 'Válasz az üzenetre',
	'Post_quote_pm' => 'Üzenet idézése',
	'Edit_pm' => 'Üzenet szerkesztése',

	'Inbox' => 'Érkezett',
	'Outbox' => 'Kimenő',
	'Savebox' => 'Mentett',
	'Sentbox' => 'Elküldött',
	'Flag' => 'Zászló',
	'Subject' => 'Tárgy',
	'From' => 'Feladó',
	'To' => 'Címzett',
	'Date' => 'Dátum',
	'Mark' => 'Kijelöl',
	'Sent' => 'Elküldve',
	'Saved' => 'Elmentve',
	'Delete_marked' => 'Kijelöltek törlése',
	'Delete_all' => 'Összes törlése',
	'Save_marked' => 'Kijelöltek mentése',
	'Download_marked' => 'Kijelöltek letöltése',
	'Mailbox' => 'Postaláda',
	'Save_message' => 'Üzenet mentése',
	'Delete_message' => 'Üzenet törlése',
	'Next_privmsg' => 'Következő privát üzenet',
	'Previous_privmsg' => 'Előző privát üzenet',
	'No_newer_pm' => 'Nincs újabb privát üzenet.',
	'No_older_pm' => 'Nincs előző privát üzenet.',
	'Display_messages' => 'Ennél régebbi üzenetek megjelenítése:', // Followed by number of days/weeks/months
	'All_Messages' => 'Összes üzenet',

	'No_messages_folder' => 'Nincs üzenet a mappában',

	'PM_disabled' => 'A privát üzenetek küldése le van tiltva az oldalon.',
	'Cannot_send_privmsg' => 'Elnézést, de az adminisztrátor számodra letiltotta a privát üzenet küldést.',
	'No_to_user' => 'Meg kell adnod a felhasználó nevét, akinek az üzenetet küldöd.',

	'Disable_HTML_pm' => 'HTML letiltása az üzenetben',
	'Disable_ACRO_AUTO_pm' => 'Mozaikszavak és Autolinkek tiltása az üzenetben',
	'Disable_BBCode_pm' => 'BBCode letiltása az üzenetben',
	'Disable_Smilies_pm' => 'Hangulatjelek tiltása az üzenetben',

	'Message_sent' => 'Az üzenetetet sikeresen elküldted.',

	'Send_a_new_message' => 'Új privát üzenet küldése',
	'Send_a_reply' => 'Válasz írása',
	'Edit_message' => 'Privát üzenet szerkesztése',

	'Notification_subject' => 'Új Privát Üzeneted érkezett!',

	'FIND_USERNAME' => 'Felhasználónév keresése',
	'Find' => 'Keres',
	'No_match' => 'Nincs találat.',

	'No_post_id' => 'Nincs üzenet kiválasztva',
	'No_such_folder' => 'Nem létezik ilyen mappa',
	'No_folder' => 'Nincs mappa kiválasztva',

	'Mark_all' => 'Összes kijelölése',
	'Unmark_all' => 'Kijelölés törlése',

	'Confirm_delete_pm' => 'Biztosan törölni szeretnéd az üzenetet?',
	'Confirm_delete_pms' => 'Biztosan törölni szeretnéd az üzeneteket?',

	'Inbox_size' => ' Érkezett [%d%% telt meg]', // eg. Your Inbox is 50% full
	'Sentbox_size' => ' Elküldött [%d%% telt meg]',
	'Savebox_size' => 'Mentett [%d%% telt meg]',

// Profiles/Registration
	'Viewing_user_profile' => '%s profilját böngészi', // %s is username
	'About_user' => '%s profilja', // %s is username
//Start Quick Administrator User Options and Information MOD
	'Quick_admin_options' => 'Gyors adminisztrátori felhasználó-információ és opciók',
	'Admin_edit_profile' => 'Felhasználó profiljának szerkesztése',
	'Admin_edit_permissions' => 'Felhasználó jogosultságának szerkesztése',
	'User_active' => '<b>Aktív</b> felhasználó',
	'User_not_active' => '<b>Inaktív</b> felhasználó',
	'Username_banned' => '<b>Kitiltott</b> felhasználó',
	'Username_not_banned' => '<b>Nem</b> kitiltott felhasználó',
	'USER_BAN' => 'Kitiltás',
	'USER_UNBAN' => 'Tiltás feloldása',
	'User_email_banned' => 'Felhasználó e-mailje [ %s ] <b>kitiltva</b>',
	'User_email_not_banned' => 'Felhasználó e-mailje <b>nincs</b> kitiltva',
//End Quick Administrator User Options and Information MOD
	'Preferences' => 'Beállítások',
	'Items_required' => 'A *-gal megjelöltek kitöltése kötelező.',
	'Registration_info' => 'Regisztrációs adatok',
	'Profile_info' => 'Profil adatok',
	'Profile_info_warn' => 'Ez az adat nyilvánosan megtekinthető lesz',
	'Avatar_panel' => 'Avatar Vezérlőpult',
	'Avatar_gallery' => 'Avatar galéria',

	'Website' => 'Honlap',
	'Location' => 'Tartózkodási hely',
	'Contact' => 'Kapcsolat',
	'Email_address' => 'E-mail cím',
	'Email' => 'E-mail',
	'Send_private_message' => 'Privát üzenet küldése',
	'Hidden_email' => '[ Rejtett ]',
	'Search_user_posts' => 'Felhasználó hozzászólásainak megtekintése',
	'Interests' => 'Érdeklődési kör',
	'Occupation' => 'Foglalkozás',
	'Poster_rank' => 'Rang',

	'Total_posts' => 'Összes  hozzászólás',
	'User_post_pct_stats' => 'Az összes hozzászólás %.2f%%-a', // 1.25% of total
	'User_post_day_stats' => 'Naponta %.2f hozzászólás', // 1.5 posts per day
	'Search_user_posts' => '%s hozzászólásainak keresése', // Find all posts by username
	'Search_user_topics_started' => '%s által indított témák keresése', // Find all topics started by username

	'Wrong_Profile' => 'Nem szerkesztheted más felhasználó profilját.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => 'Aktivitási statisztika',
	'Invision_Communicate' => 'Elérhetőség',
	'Invision_Info' => 'Információ',
	'Invision_Member_Group' => 'Csoporttagságai',
	'Invision_Member_Title' => 'Tagsági címe',
	'Invision_Most_Active' => 'Legaktívabb',
	'Invision_Most_Active_Posts' => '%s hozzászólás ebben a fórumban',
	'Invision_Details' => 'Hozzászólás-adatok',
	'Invision_PPD_Stats' => 'Hozzászólás naponta',
	'Invision_Signature' => 'Aláírás',
	'Invision_Website' => 'Honlap',
	'Invision_Total_Posts' => 'Összes hozzászólás',
	'Invision_User_post_pct_stats' => '(fórum összes hozzászólásának %.2f%%-a )',
	'Invision_User_post_day_stats' => '%.2f hozzászólás naponta',
	'Invision_Search_user_posts' => 'Felhasználó hozzászólásainak keresése',
	'Invision_Posting_details' => 'Hozzászólás-adatok',
// Invision View Profile - END

	'Only_one_avatar' => 'Csak egy avatart választhatsz ki',
	'File_no_data' => 'A megadott webcím nem tartalmaz fájlt',
	'No_connection_URL' => 'A megadott webcímhez nem lehet csatlakozin',
	'Incomplete_URL' => 'A megadott webcím hiányos',
	'Wrong_remote_avatar_format' => 'A távoli avatar webcímje nem érvényes',
	'No_send_account_inactive' => 'Elnézést, de a jelszó sajnos nem kérhető le, mivel a felhasználónév jelenleg inaktív. Lépj kapcsolatba az oldal adminisztrátorával.',

	'Always_smile' => 'Mindig engedélyezze a Hangulatjeleket',
	'Always_html' => 'Mindig engedélyezze a HTML használatát',
	'Always_bbcode' => 'Mindig engedélyezze a BBCode használatát',
	'Always_add_sig' => 'Mindig csatoljon aláírást',
	'Always_notify' => 'Mindig értesítsen új válasz érkezéséről',
	'Always_notify_explain' => 'E-mail küldése, ha új válasz érkezik egy olyan témába, amihez már hozzászóltam. (Bármkikor megváltoztatható új hozzászólás küldésekor)',

	'Board_style' => 'Oldal megjelenése',
	'Board_lang' => 'Oldal nyelve',
	'No_themes' => 'Nincs megjelenés az adatbázisban',
	'Timezone' => 'Időzóna',
	'Date_format' => 'Dátum formátum',
	'Date_format_explain' => 'A PHP <a href=\'http://hu.php.net/manual/hu/function.date.php#AEN22851\' target=\'_other\'>date()</a> függvénye szerint használandó.',
	'Signature' => 'Aláírás',
	'Signature_explain' => 'Olyan szöveg, melyet a hozzászólásaidhoz csatolhatsz. Maximum %d karakterből állhat',
	'Public_view_email' => 'Mindig mutassa az e-mail címem',

	'Current_password' => 'Jelenlegi jelszó',
	'New_password' => 'Új jelszó',
	'Confirm_password' => 'Jelszó megerősítése',
	'Confirm_password_explain' => 'Ha meg szeretnéd változtatni a jelszavad, vagy az email címed, meg kell adnod a jelenlegi jelszavad',
	'password_if_changed' => 'Csak akkor adj meg jelszót, ha meg szeretnéd változtatni',
	'password_confirm_if_changed' => 'Csak akkor szükséges, ha megváltoztatod a jelszavad',

	'Avatar' => 'Avatar',
	'Avatar_explain' => 'Egy kis kép, mely a hozzászólásaidnál a neved alatt látható. Egyszerre csak egy kép választható. Az avatar nem lehet szélesebb, mint %d pixel, és nem lehet magasabb, mint %d pixel. A mérete nem lehet nagyobb, mint %d KByte..',
	'Upload_Avatar_file' => 'Avatar feltöltése a számítógépről',
	'Upload_Avatar_URL' => 'Avatar feltöltése webcímről',
	'Upload_Avatar_URL_explain' => 'Írd be az Avatar webcímét (a kép át lesz másolva az oldalra).',
	'Pick_local_Avatar' => 'Avatar választása a galériából',
	'Link_remote_Avatar' => 'Avatar belinkelése',
	'Link_remote_Avatar_explain' => 'Írd be az Avatar képének webcímét, amelyet be szeretnél linkelni (a kép nem lesz átmásolva erre az oldalra)',
	'Avatar_URL' => 'Avatar webcíme',
	'Select_from_gallery' => 'Avatar választása a galériából',
	'View_avatar_gallery' => 'Galéria megjelenítése',

	'Select_avatar' => 'Avatar választása',
	'Return_profile' => 'Mégsem',
	'Select_category' => 'Kategória kiválasztása',

	'Delete_Image' => 'Avatar törlése',
	'Current_Image' => 'Jelenlegi avatar',

	'Notify_on_privmsg' => 'Értesítés új Privát üzenet érkezésekor',
	'Popup_on_privmsg' => 'Felugró ablak új Privát üzenet érkezésekor',
	'Popup_on_privmsg_explain' => 'Néhány sablon új ablakot nyit meg, ha új üzeneted érkezik.',
	'Hide_user' => 'Jelenlét elrejtése',

	'Profile_updated' => 'Profilod sikeresen frissítve',
	'Profile_updated_inactive' => 'Frissítetted a profilod. Mivel alapvető adatokat is megváltoztattál, így a felhasználód inaktív lett. Ellenőrizd az E-mail fiókod az újraaktiválásért szükséges utasításokhoz, vagy ha ehhez adminisztrátori jóváhagyás szükséges, várj, míg ő aktiválja a hozzáférésedet.',

	'Password_mismatch' => 'A beírt jelszavak nem egyeznek.',
	'Current_password_mismatch' => 'A megadott jelenlegi jelszavad nem egyezik az adatbázisban találhatóval.',
	'Password_long' => 'A jelszavad nem lehet hosszabb 32 karakternél.',
	'Username_taken' => 'Ez a felhasználónév már foglalt.',
	'Username_invalid' => 'A felhasználóneved olyan érvénytelen karaktereket tartalmaz, mint a \'.',
	'Username_disallowed' => 'Ez a felhasználónév nem engedélyezett.',
	'Email_taken' => 'Ezzel az e-mail címmel már van regisztrált felhasználónk',
	'Email_banned' => 'Ez az e-mail cím nem engedélyezett.',
	'Email_invalid' => 'Érvénytele e-mail cím.',
	'Signature_too_long' => 'Túl hosszú aláírás.',
	'Fields_empty' => 'A *-gal jelölt mezők kitöltése kötelező.',
	'Avatar_filetype' => 'Az avatar csak .jpg, .gif vagy .png kiterjesztésű lehet',
	'Avatar_filesize' => 'Az avatar kép nem lehet nagyobb mint %d KByte', // The avatar image file size must be less than 6 KB
	'Avatar_imagesize' => 'Az avatar nem lehet nagyobb mint %d pixel széles és %d pixel magas',

	'Welcome_subject' => 'Üdvözlünk a(z) %s oldalon', // Welcome to my.com forums
	'New_account_subject' => 'Új felhasználó',
	'Account_activated_subject' => 'Felhasználó aktiválva',

	'Account_added' => 'Köszönjük a regisztrációdat. Most már bejelentkezhetsz regisztrációkor megadott felhasználóneveddel, és a hozzá tartozó jelszóval',
	'Account_inactive' => 'A felhasználódat sikeresen létrehoztuk, azonban az azonosítódat aktiválnod kell. A megadott e-mail címre elküldtünk egy e-mailt, mely az aktiváláshoz szükséges adatokat tartalmazza',
	'Account_inactive_admin' => 'A felhasználódat sikeresen létrehoztuk, azonban egy adminisztrátornak aktiválnia kell azt. Az adminisztrátorokat e-mail értesítettük regisztrációdról. Felhasználód aktiválásáról e-mailben értesítünk',
	'Account_active' => 'Sikeresen aktiváltad a felhasználódat. Köszönjük regisztrációdat',
	'Account_active_admin' => 'A felhasználód aktiválásra került',
	'Reactivate' => 'Felhasználónév újraaktiválása!',
	'Already_activated' => 'You have already activated your account',
	'COPPA' => 'A felhasználódat sikeresen létrehoztuk, de megerősítés szükséges. Bővebb adatokat a regisztrációs e-mail címre kiküldött levélben találsz.',

	'Registration' => 'Használati feltételek',
	'Reg_agreement' => 'Noha az Adminisztrátorok, és a Moderátorok mindent megtesznek, hogy minél hamarabb eltávolítsák az oldalról az általánosan kifogásolható anyagokat, lehetetlen, hogy minden egyes hozzászólást átnézzenek. Ebből adódóan elfogadom, hogy az oldalon található összes hozzászólás a szerző nézeteit tükrözi, és nem az Adminisztrátorok, Moderátorok, vagy a Webmester álláspontját - így ők nem vállalnak felelősséget a hozzászólások tartalmáért.<br /><br/>Beleegyezek, hogy nem küldök sértegető, obszcén, vulgáris, rágalmazó, gyűlöletkeltő, támadó, vagy bármely más olyan tartalmat, illetve anyagot, mely törvényt sért. Mivel ez egy nyilvános oldal, ezért olyan anyagot sem küldök, mely ellentétes az általános közízléssel. A fentiek megsértése azonnali és végleges törlést von maga után.<br/>Elfogadom, hogy az oldal Webmesterének, az Adminisztrátornak és bármely Moderátornak jogában áll eltávolítani, szerkeszteni a hozzászólásaimat, vagy lezárni az általam nyitott témákat, amennyiben úgy ítélik meg hogy ez szükséges. Mint felhasználó, elfogadom, hogy néhány, általam megadott adat tárolásra kerül az oldal adatbázisában. Ezek az információk semmilyen módon nem kerülnek ki egy harmadik félhez, de sem az Adminisztrátor sem a Moderátorok nem tudnak felelősséget vállalni az adatokért egy esetleges "hacker-támadás" esetén.<br /><br />Az oldal "cookie"-kat (sütiket) használ, hogy adatokat tároljon a felhasználó számítógépén, de egyik sem tartalmaz személyes adatokat, melyek a regisztrációnál kerültek megadásra: a cookie-k pusztán technikai szempontból szükségesek.<br />A megadott email-cím csak a regisztráció (és az új jelszó) érvényesítéséhez szükségeltetik, semmilyen más felhasználásra nem kerül, és a hozzátartozó személyes adatok sem.<br /><br />',

	'Agreement' => 'Megállapodás',
	'Agree_under_13' => 'Elfogadom a feltételeket, 13 évnél <b>fiatalabb</b> vagyok',
	'Agree_over_13' => 'Elfogadom a feltételeket',
	'Agree_not' => 'Nem fogadom el a feltételeket',
	'Agree_checkbox' => 'A feltételeket megértettem és elfogadom',
	'Agree_checkbox_Error' => 'A regisztrációhoz el kell fogadnod a feltételeket!',

	'Wrong_activation' => 'Az aktivációs kulcs nem egyezik az adatbázisban lévővel.',
	'Send_password' => 'Új jelszó kérése',
	'Password_updated' => 'Az új jelszó elkészült, ellenőrizd az email-címedet a további információkért.',
	'No_email_match' => 'A megadott email-cím nem tartozik ehhez a felhasználónévhez.',
	'New_password_activation' => 'Új jelszó aktiváció',
	'Password_activated' => 'A felhasználódat újraaktiváltuk. A belépéshez használd az e-mailben megadott jelszót.',

	'Send_email_msg' => 'E-mail küldése',
	'No_user_specified' => 'Nincs felhasználó kiválasztva',
	'User_prevent_email' => 'A felhasználó nem kíván emaileket fogadni. Próbálj privát üzenetet küldeni.',
	'User_not_exist' => 'Nincs ilyen felhasználó',
	'CC_email' => 'Másolat küldése magamnak',
	'Email_message_desc' => 'Az üzenet sima szövegként lesz elküldve, ezért mellőzd a HTML és a BBCode használatát. A válaszcím a te email-címed lesz.',
	'Flood_email_limit' => 'Most nem küldhetsz több e-mailt. Kérjük, próbáld meg később.',
	'Recipient' => 'Címzett',
	'Email_sent' => 'Az e-mail sikeresen elküldve.',
	'Send_Email' => 'E-mail küldése',
	'Empty_sender_email' => 'Meg kell adnod a címzett e-mail címét.',
	'Empty_subject_email' => 'Meg kell adnod az e-mail tárgyát.',
	'Empty_message_email' => 'Meg kell adnod az e-mail szövegét.',

// Visual confirmation system strings
	'CONFIRM_CODE_WRONG' => 'A beírt megerősítő kód hibás',
	'TOO_MANY_ATTEMPTS' => 'Túllépted a megengedett kísérletek számát. Kérjük, próbáld meg később.',
	'CONFIRM_CODE_IMPAIRED' => 'Ha látási (vagy egyéb) problémák folytán nem tudnád elolvasni a kódot, kérjük, vedd fel a kapcsolatot az %sAdminisztrátorral%s.',
	'CONFIRM_CODE' => 'Megerősítő kód',
	'CONFIRM_CODE_EXPLAIN' => 'Írd be a képen látható szöveget. Nincs 0.',

// Memberlist
	'Select_sort_method' => 'Rendezési mód kiválasztása',
	'Sort' => 'Rendezés',
	'SORT_TOP_TEN' => 'A 10 legtöbb hozzászólást küldő felhasználó',
	'SORT_JOINED' => 'Csatlakozás dátuma',
	'SORT_USERNAME' => 'Felhasználónév',
	'SORT_LOCATION' => 'Tartózkodási hely',
	'SORT_POSTS' => 'Összes hozzászólás',
	'SORT_EMAIL' => 'Email',
	'SORT_WEBSITE' => 'Honlap',
	'Sort_Ascending' => 'Növekvő',
	'Sort_Descending' => 'Csökkenő',
	'Order' => 'Sorrend',

// Group control panel
	'Group_Control_Panel' => 'Csoport Vezérlőpanel',
	'Group_member_details' => 'Csoporttagság részletei',
	'Group_member_join' => 'Csatlakozás egy csoporthoz',

	'Group_Information' => 'Csoport adatai',
	'Group_name' => 'Csoport neve',
	'Group_description' => 'Csoport leírása',
	'Group_membership' => 'Csoporttagság',
	'Group_Members' => 'Csoport tagjai',
	'Group_Moderator' => 'Csoport moderátor',
	'Pending_members' => 'Függőben lévő tagságok',

	'Group_type' => 'Csoport típusa',
	'Group_open' => 'Nyitott csoport',
	'Group_closed' => 'Zárt csoport',
	'Group_hidden' => 'Rejtett csoport',

	'Current_memberships' => 'Aktuális tagságok',
	'Non_member_groups' => 'Csoportok',
	'Memberships_pending' => 'Tagsági kérelmek',

	'No_groups_exist' => 'Nincs csoport létrehozva',
	'Group_not_exist' => 'A megadott csoport nem létezik',

	'Join_group' => 'Csatlakozás a csoporthoz',
	'No_group_members' => 'A csoportnak nincs tagja',
	'Group_hidden_members' => 'Ez egy rejtett csoport; nem láthatod a tagjait',
	'No_pending_group_members' => 'Nincsen függőben lévő tagság',
	'Group_joined' => 'Sikeresen feliratkoztál a csoportra.<br />Értesítünk, ha a csoport moderátor elfogadta a kérelmed.',
	'Group_request' => 'Új felvételi kérelem érkezett a csoportodba.',
	'Group_approved' => 'A felvételi kérelmed elfogadták.',
	'Group_added' => 'Csalakoztál a csoporthoz.',
	'Already_member_group' => 'Már tagja vagy ennek a csoportnak',
	'User_is_member_group' => 'A felhasználó már tagja ennek a csoportnak',
	'Group_type_updated' => 'Sikeresen megváltoztattad a csoport típusát',
	'Could_not_add_user' => 'A megadott felhasználó nem létezik.',
	'Could_not_anon_user' => 'Nem készíthetsz névtelen csoporttagok.',
	'Confirm_unsub' => 'Biztosan le szeretnéd mondani a csoporttagságod?',
	'Confirm_unsub_pending' => 'A felvételi kérelmed még nincs elfogadva; biztosan le szeretnéd mondani?',
	'Unsub_success' => 'Sikeresen lemondtad a csoporttagságod.',
	'Approve_selected' => 'Kijelöltek elfogadása',
	'Deny_selected' => 'Kijelöltek elutasítása',
	'Not_logged_in' => 'Be kell jelentkezned, hogy csatlakozhass egy csoporthoz',
	'Remove_selected' => 'Kijelöltek eltávolítása',
	'Add_member' => 'Új tag',
	'Not_group_moderator' => 'Nem vagy a csoport moderátora, így nem végezheted el ezeket a módosításokat',
	'Login_to_join' => 'A csatlakozáshoz, vagy a csoporttagságok irányításához először be kell jelentkezned',
	'This_open_group' => 'Nyitott csoport: Kattints ide a tagság kérelmezéséhez',
	'This_closed_group' => 'Zárt csoport: %s',
	'This_hidden_group' => 'Rejtett csoport: %s',
	'Member_this_group' => 'A csoport tagja vagy',
	'Pending_this_group' => 'Tagsági kérelmedről még nem született döntés',
	'Are_group_moderator' => 'Te vagy a csoport moderátora',
	'None' => 'Nincs',
	'Subscribe' => 'Jelentkezés',
	'Unsubscribe' => 'Lemondás',
	'View_Information' => 'Adatok megtekintése',

// Search
	'Search_query' => 'Keresési feltételek',
	'Search_options' => 'Keresési beállítások',

	'Search_keywords' => 'Keresés kulcssszóra',
	'Search_keywords_explain' => 'Használhatod az <u>AND</u> (és) szót, hogy a keresésben megadott összes szó benne legyen a találatban, az <u>OR</u> (vagy) szót mellyel a "benne lehet" szavakat választhatod el, és a <u>NO</u> (nem) szót, mellyel kizárhatsz szavakat.<br />Használj *-ot a részleges szavakhoz',
	'Search_author' => 'Szerző keresése',
	'Search_author_explain' => 'Használj *-ot a részleges szavakhoz',
	'Search_author_topic_starter' => 'Szerző által indított témák keresése',

	'Search_for_any' => 'Keresés bármely kifejezésre',
	'Search_for_all' => 'Keresés az összes kifejezésre',
	'Search_title_msg' => 'Keresés témák címében és hozzászólásokban',
	'Search_title_only' => 'Keresés csak a témák címében',
	'Search_msg_only' => 'Keresés csak a hozzászólásokban',

	'Return_first' => 'Talált témák első', // followed by xxx characters in a select box
	'characters_posts' => 'karakterének megjelenítése',

	'Search_previous' => 'Ennél régebbi keresése', // followed by days, weeks, months, year, all in a select box

	'Sort_by' => 'Rendezés',
	'Sort_Time' => 'Dátum',
	'Sort_Post_Subject' => 'Hozzászólás tárgya',
	'Sort_Topic_Title' => 'Téma címe',
	'Sort_Author' => 'Szerző',
	'Sort_Forum' => 'Fórum',

	'Display_results' => 'Találatok megjelenítése',
	'All_available' => 'Összes találat',
	'No_searchable_forums' => 'Nincs jogosultságod az oldal fórumaiban keresni.',

	'No_search_match' => 'A keresési feltételeknek egy fórum, és egy téma sem felelt meg',
	'Found_search_match' => 'Keresés eredménye: %d találat', // eg. Search found 1 match
	'Found_search_matches' => 'Keresés eredménye: %d találat', // eg. Search found 24 matches

	'Close_window' => 'Ablak bezárása',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'Csak a(z) %s küldhetnek be közleményt ebben a fórumban.',
	'Sorry_auth_sticky' => 'Csak a(z) %s küldhetnek be kiemelt témát ebben a fórumban.',
	'Sorry_auth_read' => 'Csak a(z) %s olvashatják a fórum témáit.',
	'Sorry_auth_post' => 'Csak a(z) %s indíthatnak új témát ebben a fórumban.',
	'Sorry_auth_reply' => 'Csak a(z) %s válaszolhatnak témákra ebben a fórumban.',
	'Sorry_auth_edit' => 'Csak a(z) %s szerkeszthetnek hozzászólásokat ebben a fórumban.',
	'Sorry_auth_delete' => 'Csak a(z) %s törölhetnek hozzászólásokat ebben a fórumban.',
	'Sorry_auth_vote' => 'Csak a(z) %s vehetnek részt szavazásokon ebben a fórumban.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>vendégek</b>',
	'Auth_Registered_Users' => '<b>regisztrált felhasználók</b>',
	'Auth_Self_Users' => '<b>különleges felhasználók</b>',
	'Auth_Users_granted_access' => '<b>privát engedéllyel rendelkező felhasználók</b>',
	'Auth_Moderators' => '<b>moderátorok</b>',
	'Auth_Administrators' => '<b>adminisztrátorok</b>',

	'Not_Moderator' => 'Nem vagy a moderátora ennek a fórumnak.',
	'Not_Authorized' => 'Nem azonosított',

	'You_been_banned' => 'Kitiltottak téged erről a fórumról.<br />További információkért lépj kapcsolatba a Webmesterrel vagy az oldal Adminisztrátorával.',

// Viewonline
	'Reg_users_zero_online' => '0 Regisztrált felhasználó ', // There are 5 Registered and
	'Reg_users_online' => '%d Regisztrált és', // There are 5 Registered and
	'Reg_user_online' => '%d Regisztrált és ', // There is 1 Registered and
	'Hidden_users_zero_online' => '0 Rejtett felhasználó van jelen', // 6 Hidden users online
	'Hidden_users_online' => '%d Rejtett felhasználó van jelen', // 6 Hidden users online
	'Hidden_user_online' => '%d Rejtett felhasználó van jelen', // 6 Hidden users online
	'Guest_users_online' => '%d Vendég van jelen', // There are 10 Guest users online
	'Guest_users_zero_online' => '0 Vendég van jelen', // There are 10 Guest users online
	'Guest_user_online' => '%d Vendég van jelen', // There is 1 Guest user online
	'No_users_browsing' => 'Jelenleg egy felhasználó sem böngészi a fórumot',

	'ONLINE_EXPLAIN' => 'A fenti adat az elmúlt ' . intval(ONLINE_REFRESH / 60) . ' perc alapján készült',
	'ONLINE_TODAY' => 'Ez az adat a ma belépett felhasználókat mutatja.',

	'Forum_Location' => 'Oldal/Fórum helye',
	'Last_updated' => 'Utolsó frissítés',

	'Forum_index' => 'Fórum főoldal',
	'Portal' => 'Főoldal',
	'Logging_on' => 'Bejelentkezés',
	'Posting_message' => 'Hozzászólást küld',
	'Searching_forums' => 'Fórumokban keres',
	'Viewing_profile' => 'Profilt látogat',
	'Viewing_HACKSLIST' => 'Készítők listáját nézi',
	'Viewing_online' => 'Jelenlévők listáját nézi',
	'Viewing_member_list' => 'Taglistát nézi',
	'Viewing_priv_msgs' => 'Privát üzeneteket nézi',
	'Viewing_FAQ' => 'GyIK-et olvassa',
	'Viewing_KB' => 'TB-t olvassa',
	'Viewing_RSS' => 'RSS Feed',


// Moderator Control Panel
	'Mod_CP' => 'Moderátori Vezérlőpult',
	'Mod_CP_explain' => 'Itt tudod moderálni ezt a fórumot. Lezárhatod, megnyithatod, áthelyezheted és törölheted a fórum témáit.',

	'Select' => 'Kijelöl',
	'Delete' => 'Törlés',
	'Move' => 'Áthelyezés',
	'Copy' => 'Másolás',
	'Lock' => 'Lezár',
	'Unlock' => 'Megnyit',

	'Topics_Removed' => 'Sikeresen eltávolítottad az adatbázisból a kijelölt témákat.',
	'Topics_Locked' => 'Sikeresen lezártad a kijelölt témákat.',
	'Topics_Moved' => 'Sikeresen áthelyezted a kijelölt témákat.',
	'Topics_Unlocked' => 'Sikeresen megnyitottad a kijelölt témákat.',
	'No_Topics_Moved' => 'Nem helyeztél át témát.',

	'Confirm_delete_topic' => 'Valóban el szeretnéd távolítani a kijelölt témákat?',
	'Confirm_lock_topic' => 'Valóban le szeretnéd zárni a kijelölt témákat?',
	'Confirm_unlock_topic' => 'Valoban meg szeretnéd nyitni a kijelölt témákat?',
	'Confirm_move_topic' => 'Válóban át szeretnéd helyezni a kijelölt témákat?',

	'Move_to_forum' => 'Áthelyezés más fórumba',
	'Leave_shadow_topic' => 'Árnyéktéma meghagyása a régi fórumban.',

	'Split_Topic' => 'Téma szétválasztása',
	'Split_Topic_explain' => 'Az alábbi oldalon szétválaszthatsz egy adott témát 2 féleképpen: vagy az adott hozzászólások kiemelésével, vagy egy adott hozzászólástól számítva',
	'Split_title' => 'Új téma címe',
	'Split_forum' => 'Új téma fóruma',
	'Split_posts' => 'Megjelölt hozzászólások szétválasztása',
	'Split_after' => 'Szétválasztás a megjelölt hozzászólásokból',
	'Topic_split' => 'Sikeresen szétválasztottad a témát',

	'Too_many_error' => 'úl sok hozzászólást választottál ki. Csak egy hozzászólást válassz ki, az utána következők is kiemelődnek!',

	'None_selected' => 'A művelet végrahajtásához témát is ki kell választani. Lépj vissza, és válassz ki legalább egyet.',
	'New_forum' => 'Új fórum',

	'This_posts_IP' => 'A hozzászólás IP címe',
	'Other_IP_this_user' => 'A felhasználóhoz tartozó egyéb IP címek',
	'Users_this_IP' => 'Ip címhez tartozó felhasználók',
	'IP_info' => 'IP adatok',
	'Lookup_IP' => 'IP keresése',

// Errors (not related to a specific failure on a page)
	'Information' => 'Információ',
	'Critical_Information' => 'Kritikus információ',

	'General_Error' => 'Általános hiba',
	'Critical_Error' => 'Kritikus hiba',
	'An_error_occured' => 'Belső hiba lépett fel',
	'A_critical_error' => 'Kritikus hiba lépett fel',
	'Admin_reauthenticate' => 'Az oldal adminisztrálásához újra azonosítanod kell magad',

	'Topic_description' => 'Témád meghatározása',
// 'Description' => 'Téma meghatározása',

	'Guestbook' => 'Vendégkönyv',
	'Viewing_guestbook' => 'Vendégkönyv elolvasása',

	'Warn_new_post' => 'Legalább egy válasz érkezett a bejegyzéshez. Kérjük, nézd meg a választ, majd küldd el újra a bejegyzésed.',

	'Today_at' => '<b class="date-today">Ma</b> ',
	'Yesterday_at' => '<b class="date-yesterday">Tegnap</b>',
	'TODAY' => '<b class="date-today">Ma</b>',
	'YESTERDAY' => '<b class="date-yesterday">Tegnap</b>',

// Birthday - BEGIN
	'Birthday' => 'Születésnap',
	'No_birthday_specify' => 'Nem meghatározott',
	'Age' => 'Kor',
	'Wrong_birthday_format' => 'A születésnap formátuma hibásan lett megadva.',
	'Birthday_to_high' => 'Elnézést, de erre az oldalra %d évnél idősebb nem regisztrálhat',
	'Birthday_require' => 'A születésnap megadása kötelező',
	'Birthday_to_low' => 'Elnézést, de erre az oldalra %d évnél fiatalabb nem regisztrálhat',
	'Submit_date_format' => 'Y-m-d', //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different separators are accepted)
	'Birthday_greeting_today' => 'Gratulálunk %s. születésnapod alkalmából.',//%s is substituted with the users age
	'Birthday_greeting_prev' => 'Boldog Születésnapot szeretnénk kívánni %s. születésnapod alkalmából',//%s is substituted with the users age, and birthday
	'Greeting_Messaging' => 'Gratulálunk',
	'Birthday_today' => 'Mai születésnaposok:',
	'Birthday_week' => 'Felhasználók, akiknek %d napon belül van a születésnapjuk',
	'Nobirthday_week' => 'A következő %d napon belül egy felhasználónak sem lesz születésnapja', // %d is substituted with the number of days
	'Nobirthday_today' => 'Ma egy felhasználónknak sincs születésnapja',
	'Year' => 'Év',
	'Month' => 'Hónap',
	'Day' => 'Nap',
// Birthday - END

// Start add - Gender MOD
	'Gender' => 'Nem',//used in users profile to display which gender he/she is
	'Male' => 'Férfi',
	'Female' => 'Nő',
	'No_gender_specify' => 'Nem meghatározott',
	'Gender_require' => 'A nemed megadása kötelező.',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
	'Topic_view_users' => 'A témát megtekintő felhasználók listája',
	'Topic_time' => 'Megtekintve',
	'Topic_count' => 'Témaszámláló',
	'Topic_view_count' => 'A témát látogatók száma',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
	'Give_G_card' => 'Felhasználó újraaktiválása',
	'Give_Y_card' => 'Felhasználó #%d figyelmeztetése',
	'Give_R_card' => 'Felhasználó azonnali kitiltása',
	'Ban_update_sucessful' => 'A kitiltottak listája sikeresen frissítve',
	'Ban_update_green' => 'A felhasználót sikeresen újraaktiváltad',
	'Ban_update_yellow' => 'A felhasználó figyelmeztetve lett. Jelenleg %d figyelmeztetése van, maximum %d lehet',
	'Ban_update_red' => 'A felhasználót sikeresen kitiltottad',
	'Ban_reactivate' => 'A felhasználót sikeresen újraaktiváltad',
	'Ban_warning' => 'Figyelmeztetésben részesültél',
	'Ban_blocked' => 'A felhasználód blokkolva lett',
/*
	'Rules_ban_can' => '<b>Kitilthatsz</b> felhasználókat ebben a fórumban',
	'Rules_greencard_can' => '<b>Feloldhatod</b> a felhasználók kitiltásait ebben a fórumban',
	'Rules_bluecard_can' => '<b>Jelenthetsz</b> hozzászólásokat a moderátoroknak ebben a fórumban',
*/
	'Rules_ban_can' => '<b>Kitilthatsz</b> más felhasználókat',
	'Rules_greencard_can' => '<b>Feloldhatod</b> más felhasználók kitiltásait',
	'Rules_bluecard_can' => '<b>Jelenthetsz</b> hozzászólásokat a moderátoroknak',
	'user_no_email' => 'A felhasználó nem adott meg email címet, így nem tudjuk értesíteni a műveletről. Próbálj meg privát üzenetet küldeni neki',
	'user_already_banned' => 'A felhasználó már ki van tiltva',
	'Ban_no_admin' => 'A felhasználó egy ADMINISZTRÁTOR; nem figyelmeztetheted és nem is tilthatod ki',
	'Give_b_card' => 'Hozzászólás jelentése a fórum moderátorainak',
	'Clear_b_card' => 'A hozzászólásnak már van %d kék lapja. A gomb megnyomásával lenullázhatod',
	'No_moderators' => 'A fórumnak nincs moderátora, így senkinek nem tudsz jelentést küldeni!',
	'Post_reported' => 'A hozzászólást %d moderátornak jelentetted',
	'Post_reported_1' => 'A hozzászólást jelentetted egy moderátornak',
	'Post_report' => 'Hozzászólás jelentése', //Subject in email notification
	'Post_reset' => 'A hozzászólás kék lapjainak számát sikeresen lenulláztad',
	'Search_only_bluecards' => 'Keresés csak kék lapos hozzászólásokban',
	'Send_message' => 'Kattints %side%s, hogy üzenetet küldj a moderátoroknak, vagy <br />',
	'Send_PM_user' => 'Kattins %side%s, hogy Privát Üzenetet küldj a felhasználónak, vagy',
	'Link_to_post' => 'Kattints %side%s a jelentett hozzászólások megtekintéséhez
--------------------------------

',
	'Post_a_report' => 'Jelentés küldése',
	'Report_stored' => 'A jelentés sikeresen kézbesítve lett',
	'Send_report' => 'Kattints %side%s az eredeti üzenet megtekintéséhez',
	'Red_card_warning' => 'A felhasználónak %s piros lapot szeretnél adni, így kitiltod a felhasználót. Biztosan ezt szeretnéd?',
	'Yellow_card_warning' => 'A felhasználónak %s sárga lapot szeretnél adni, így figyelmeztetésben részesíted. Biztosan ezt szeretnéd?',
	'Green_card_warning' => 'A felhasználónak %s zöld lapot szeretnél adni, ezzel feloldod a kitiltását. Biztosan ezt szeretnéd?',
	'Blue_card_warning' => 'A hozzászólásnak kék lapot szeretnél adni, ezzel jelentve azt a moderátoroknak. Biztosan jelenteni szeretnéd a hozzászólást?',
	'Clear_blue_card_warning' => 'A hozzászólás kék lap számlálóját szeretnéd lenullázni. Biztosan ezt szeretnéd?',
	'Warnings' => 'Figyelmeztetések: %d', //shown beside users post, if any warnings given to the user
	'Banned' => 'Jelenleg kitiltva',//shown beside users post, if user are banned

// Last visit - BEGIN
	'Last_logon' => 'Utolsó látogatás',
	'Hidde_last_logon' => 'Rejtett',
	'Never_last_logon' => 'Soha',
	'Users_today_zero_total' => 'Összesen <b>0</b> felhasználó látogatta az oldalt ma: ',
	'Users_today_total' => 'Összesen <b>%d</b> felhasználó látogatta az oldalt ma: ',
	'User_today_total' => 'Összesen <b>%d</b> felhasználó látogatta az oldalt ma: ',
	'Users_lasthour_explain' => ', %d közülük az előző órában.',
	'Users_lasthour_none_explain' => '', //shown if no one has visited in the last hour, fill if you like

	'Years' => 'Év',
	'Year' => 'Év',
	'Weeks' => 'Hét',
	'Week' => 'Hét',
	'Day' => 'Nap',
	'Total_online_time' => 'Összes jelenléti idő',
	'Last_online_time' => 'Utolsó jelenléti idő',
	'Number_of_visit' => 'Látogatások száma',
	'Number_of_pages' => 'Megtekintett lapok száma',
// Last visit - END

	'total_site_hits_key' => '%V% oldalt látogatott %D% óta.',

	'Message_too_short' => 'Az üzenet túl róvid',

// Start add - Online/Offline/Hidden Mod
	'Online' => 'Elérhető',
	'Offline' => 'Nem elérhető',
	'Hidden' => 'Rejtett',

	'Online_status' => 'Állapot',
// End add - Online/Offline/Hidden Mod
	'Download' => 'Letöltés',

//signature editor
	'sig_edit_link' => 'Aláírás',
	'sig_description' => 'Aláírás szerkesztése (<b>Előnézettel</b>)',
	'sig_edit' => 'Aláírás szerkesztése',
	'sig_current' => 'Jelenlegi aláírás',
	'sig_none' => 'Nincs aláírás',
	'sig_save' => 'Mentés',
	'sig_save_message' => 'Aláírás sikeresen elmentve!',

	'Statistics' => 'Statisztika',

// Start add - Global announcement MOD
	'Globalannounce' => 'Globális közlemény',
	'Globalannounce' => 'Új Globális közlemény',
// End add - Global announcement MOD
	'Global_Announcements' => 'Globális közlemények',
	'Announcements' => 'Közlemények',
	'Sticky_Topics' => 'Kiemelt témák',
	'Announcements_and_Sticky' => 'Közlemények és kiemelt témák',
// db_update generator
	'Db_update_generator' => 'DB Frissítés Generátor',
	'Instructions' => 'Útmutató',
	'SQL_instructions' => '<p>A szoftver ezen részével PHP fájlokat hozhatsz létre, melyek segítségével a böngésződben frissítheted az adatbázisod. Azonban mielőtt SQL-t illesztesz be az alábbi mezőbe, előszőr pár dolognak nem ártana utána nézned.<br />Előszőr is, minden SQL lekérés 1 pontosvessző (;) alatt érjen véget. Amennyiben mégsem, a létrehozott fájl valószínűleg hibás lesz. Továbbá, az adatbázis tábláinak a "phpbb_" előtagot kell használniuk. Ez automatikusan helyettesítve lesz egy kód részlettel, mely segítségével a db_update.php bármely fórumon használható lesz függetlenül az adatbázis táblák előtagjától.</p>',
	'Enter_SQL' => '<strong>SQL beillesztése</strong>',
	'Enter_SQL_explain' => 'A <strong>MySQL</strong> a világ legnépszerűbb nyílt forráskódú adatbázisa, amely a megbízhatóságáról és gyorsaságáról híres.',
	'Output_SQL' => '<strong>SQL kimenet</strong>',
	'Output_SQL_explain' => 'A jobboldalon lévő szöveget illeszd be egy üres fájlba. Mentsd el a fájlt <u>db_update.php</u> néven, majd töltsd fel a szerverre. A böngésződön keresztül nyisd meg egyszer.<br /><br />Másik megoldás, hogy a Letöltés gombra kattintva töltöd le a fájlt <strong>(ajánlott)</strong>.',
	'Download' => 'Letöltés',

	'TOP_POSTERS' => 'Top Hozzászólók',

// TELL A FRIEND
	'TELL_FRIEND' => 'E-mail küldése egy barátnak',
	'TELL_FRIEND_SENDER_USER' => 'Neved',
	'TELL_FRIEND_SENDER_EMAIL' => 'E-mail címed',
	'TELL_FRIEND_RECEIVER_USER' => 'Barátod neve',
	'TELL_FRIEND_RECEIVER_EMAIL' => 'Barátod E-mail címe',
	'TELL_FRIEND_WRONG_EMAIL' => 'A megadott E-mail cím hibás.',
	'TELL_FRIEND_MSG' => 'Üzeneted:',
	'TELL_FRIEND_TITLE' => 'Barát értesítése',
	'TELL_FRIEND_BODY' => "Hello,\nÉpp a topic &raquo;{TOPIC}&laquo; témát olvastam a(z) {SITENAME} oldalon, és arra gondoltam, talán téged is érdekelhet.\n\nItt az oldal linkje: {LINK}\n\nOlvasd el, és ha válaszolni szeretnél a témára, csak regisztrálnod kell, ha még korábban nem tetted.",

// Begin Thanks Mod
	'thankful' => 'Hálás felhasználók',
	'thanks_to' => 'Köszönet a hasznos témáért',
	'thanks_end' => ':',
	'thanks_alt' => 'Téma megköszönése',
	'thanks_add_rate' => 'Köszönet a szerzőnek a hasznos témáért',
	'thanked_before' => 'Már megköszönted a témát',
	'thanks_add' => 'Sikeresen megköszönted a témát',
	'thanks_not_logged' => 'Be kell jelentkezned, hogy megköszönhesd más hozzászólásást',
	'thanks2' => 'Köszönjük!<br />',
// End Thanks Mod

//Begin Lo-Fi Mod
	'Lofi' => 'Lo-Fi Verzió',
// 'Full_Version' => 'Full Version',
	'Full_Version' => 'Ez a "Lo-Fi" verziója az oldal fő tartalmának. Az oldal formázással, képekkel és több információval való rendes megtekintéséhez kattints ide.',
	'quote_lofi' => 'Idézet',
	'edit_lofi' => 'Szerkesztés',
	'ip_lofi' => 'IP',
	'del_lofi' => 'Törlés',
	'profile_lofi' => 'Profil',
	'pm_lofi' => 'PÜ',
	'email_lofi' => 'E-mail',
	'website_lofi' => 'Honlap',
	'icq_lofi' => 'ICQ',
	'aim_lofi' => 'AIM',
	'yim_lofi' => 'YIM',
	'msnm_lofi' => 'MSN',
	'quick_lofi' => 'Gyors válasz',
	'new_pm_lofi' => 'PÜ küldése',
//End Lo-Fi Mod

// Retroactive Signature MOD
	'Retro_sig' => 'Régebbi hozzászólásaimhoz is csatolja az aláírásomat',
	'Retro_sig_explain' => 'Ha új aláírást állítasz be, vagy lecseréled az előzőt, akkor az normális esetben csak az ezek után beküldött hozzászólásaid alatt lesz látható',
	'Retro_sig_checkbox' => 'Jelöld be, ha szeretnéd, hogy a régebbi hozzászólásaid alatt is megjelenjen az aláírásod',
// End Retro Sig MOD

	'legend' => 'Magyarázat',
	'users' => 'Felhasználók',
//added to autogroup mod
	'No_more' => 'több felhasználó nem engedélyezett',
	'No_add_allowed' => 'nincs engedélyezve az automatikus felhasználó-hozzáadás',
	'Join_auto' => 'Csatlakozhatsz a csoporthoz, mert a minimális hozzászólásszámot teljesítetted',

// merge topics
	'Merge' => 'Összevonás',
	'Merge_topic' => 'Téma összevonása',
	'Topics_Merged' => 'A témákat sikeresen összevontad.',
	'No_Topics_Merged' => 'Nem lettek témák összevonva.',
	'Confirm_merge_topic' => 'Valóban szeretnéd összevonni a kiválasztott témákat?',

	'Downloads' => 'Letöltések',

// Start add - Bin Mod
	'Move_bin' => 'Téma áthelyezése a szemetesbe',
	'Topics_Moved_bin' => 'A kijelölt témá(ka)t sikeresen áthelyezted a szemetesbe.',
	'Bin_disabled' => 'A szemetes le van tiltva',
	'Bin_recycle' => 'Szemetes',
// End add - Bin Mod
	'Recent_topics' => 'Friss témák', // Recent Topics

	'Topics_Title_Edited' => 'A kijelölt témák címét sikeresen megváltoztattad',
	'Edit_title' => 'Téma címének szerkesztése',
	'PM' => 'PÜ',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'Az IP cím adatokat csak a moderátorok tekinthetik meg',
	'Registered_ip_address' => 'Regisztrált IP cím',
	'Registered_hostname' => 'Regisztrált gépnév',
	'Other_registered_ips' => '%s címről regisztrált felhasználók', //%s is the IP address
	'Other_posted_ips' => 'IP címek, amelyekről a felhasználó hozzászólt',
	'Search_ip' => 'Hozzászólások keresése IP cím alapján',
	'Search_ip_explain' => 'Írj be egy IP címet <u>127.0.0.1</u> formátumban -- használd a * karaktert, hogy egyes tartományokat kihagyj, pl. <u>127.*.*.1</u>',
	'IP' => 'IP',
	'Whois' => 'Whois',
	'Browser' => 'Böngésző',
	'No_other_registered_ips' => 'Nem regisztrált más felhasználó erről az IP címről.',
	'No_other_posted_ips' => 'Ez a felhasználó még nem szólt hozzá.',
	'Not_recorded' => 'Nem naplózott',
	'Logins' => 'Belépések',
	'No_logins' => 'A felhasználónak nincs naplózott belépése',
// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'A kép eredeti méretben való megtekintéséhez kattints ise',
	'LIW_click_image_explain' => 'Kattints a képre, hogy az eredeti méretben láthasd',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => 'Album',
	'Personal_Gallery' => 'Személyes galéria',
	'Personal_Gallery_Of_User' => '%s személyes galériája',
	'Personal_Gallery_Of_User_Profile' => '%s személyes galériája (%d kép)',
	'Show_All_Pic_View_Mode_Profile' => '%s személyes galérájának összes képének megjelenítése (alkategóriák nélkül)',
	'Not_allowed_to_view_album' => 'Elnézést, az album megtekintése nem engedélyezett.',
	'Not_allowed_to_upload_album' => 'Nincs jogosultságod új képet feltölteni az albumba. Lépj kapcsolatba egy adminisztrátorral további részletekért.',
	'Album_empty' => 'Nincsenek képek az albumban<br />Kattints az<b>Új kép feltöltése</b> linkre az oldalon új kép feltöltéséhez.',
	'Album_empty2' => 'Nincsenek képek az albumban.',
	'Upload_New_Pic' => 'Új kép feltöltése',
	'Pic_Title' => 'Kép címe',
	'Pic_Title_Explain' => 'Nagyon fontos, hogy a képeidnek találó címet adjál, mert a többiek ez alapján tudják megtalálni a képet, illetve segít beazonosítani, hogy mit ábrázol a kép.',
	'Pic_Upload' => 'Kép feltöltése',
	'Pic_Upload_Explain' => 'Engedélyezett fájltípusok: JPG, GIF és PNG. Maximum fájlméret %s bájt. Maximum képméret: %sx%s pixel.',
	'Album_full' => 'Elnézést, de az album mérete elérte a maximális feltölthető képek számát. Lépj kapcsolatba egy adminisztrátorral további részletekért.',
	'Album_upload_successful' => 'Köszönjük. A képedet sikeresen feltöltötted.',
	'Click_return_album' => 'Kattints %side%s, hogy visszatérj az Albumhoz.',
	'Invalid_upload' => 'Hibás kép<br /><br />Túl nagy kép, vagy nem engedélyezett fájltípus.',
	'Image_too_big' => 'Elnézést, de a kép méretei túl nagyok.',
	'Uploaded_by' => 'Feltöltötte',
	'Category_locked' => 'Elnézést, de ezt a kategóriát egy admin már lezárta, így nem tudsz bele új képet feltölteni. További részletekért lépj kapcsolatba az album adminisztrátorával.',
	'View_Album_Index' => 'Album Főoldal',
	'View_Album_Personal' => 'Felhasználó személyes albumát böngészi',
	'View_Pictures' => 'Az album képeit nézi vagy hozzászólást küld/olvas',
	'Album_Search' => 'Keres albumban',
	'Pic_Name' => 'Kép neve',
	'Description' => 'Leírás',
	'Search_Contents' => ' ami tartalmazza: ',
	'Search_Found' => 'Keresési eredmény: ',
	'Search_Matches' => 'Találat:',
// Mighty Gorgon - Full Album Pack - END

// News
	'xs_latest_news' => 'Legfrissebb hírek',
	'xs_no_news' => 'Nincsenek hírek.',
	'xs_news_version' => 'XS News Verzió: %s',
	'xs_news_ticker_feed' => 'XML Feed forrás: %s',
	'xs_no_ticker' => 'Nincsenek Hírjegyek megadva. Az Adminisztrátori Vezérlőpultban tudsz hozzáadni Hírjegyeket.',
	'xs_news_ticker_title' => 'Szalagcím',
	'xs_news_tickers_title' => 'Szalagcímek',
	'xs_news_item_title' => 'Hír',
	'xs_news_items_title' => 'Hírek',
	'hide' => 'Elrejt',
	'show' => 'Megjelenít',
	'Welcome' => 'Üdvözlünk',
	'birthdays' => 'Születésnapok',

//Battle of the Sexes
	'male_zero_total' => '<b>0</b> férfi tag', // # registered male users
	'male_total' => '<b>%d</b> férfi tag', // # registered male users
	'male_one_total' => '<b>%d</b> férfi tag', // # registered male users
	'female_zero_total' => 'We have <b>0</b> női tag', // # registered female users
	'female_total' => 'We have <b>%d</b> női tag', // # registered female users
	'female_one_total' => 'We have <b>%d</b> női tag', // # registered female users
	'unknown_total' => '& <b>%d</b> tag nem adta meg nemét',
	'unknown_one_total' => '& <b>%d</b> tag nem adta meg nemét',
	'unknown_zero_total' => '',
	'battle_of_sexes' => 'Nemek harca: ',

	'who_viewed' => 'Téma megtekintések',
	'BoardRules' => 'Szabályok',

	'View_post' => 'Hozzászólás megtekintése',
	'Post_review' => 'Hozzászólás átnézése',
	'View_next_post' => 'Következő hozzászólás',
	'View_previous_post' => 'Előző hozzászólás',
	'No_newer_posts' => 'Nincs újabb hozzászólás a fórumban',
	'No_older_posts' => 'NIncs régebbi hozzászólás a fórumban',

	'StaffSite' => 'Csapat oldal',
	'Staff_level' => array('Adminisztrátor', 'Moderátor'),
	'Staff_forums' => 'Fórumok',
	'Staff_stats' => 'Statisztola',
	'Staff_user_topic_day_stats' => '%.2f téma naponta', // %.2f = topics per day
	'Staff_period' => '%d napja', // %d = days
	'Staff_contact' => 'Kapcsolat',
	'Staff_messenger' => 'Üzenő',
// Start Edit Notes MOD
	'Edit_notes' => 'Feljegyzések szerkesztése',
	'Delete_note' => 'Feljegyzés törlése',
	'Edited_by' => 'Szerkesztette:',
	'Confirm_delete_edit_note' => 'Valóban törölni szeretnéd a kiválasztott feljegyzést?',
	'Edit_note_deleted' => 'A feljegyzést sikeresen törölted',
// End Edit Notes MOD

	'Recent_topics' => 'Friss témák',
	'Recent_today' => 'Ma',
	'Recent_yesterday' => 'Tegnap',
	'Recent_last24' => '24 órán belül',
	'Recent_lastweek' => 'Egy héten belül',
	'Recent_lastXdays' => 'Elmúlt %s nap',
	'Recent_last' => 'Elmúlt',
	'Recent_days' => 'nap',
	'Recent_first' => '%s-tól',




	'Recent_first_poster' => '%s',
	'Recent_select_mode' => 'Kiválasztás módja:',
	'Recent_showing_posts' => 'Hozzászólások megjelenítése:',
	'Recent_title_one' => '%s téma %s', // %s = topics; %s = sort method
	'Recent_title_more' => '%s téma %s', // %s = topics; %s = sort method
	'Recent_title_today' => ' mától',
	'Recent_title_yesterday' => ' tegnaptól',
	'Recent_title_last24' => ' az utolsó 24 órától',
	'Recent_title_lastweek' => ' utolsó héttől',
	'Recent_title_lastXdays' => ' utolsó %s naptól', // %s = days
	'Recent_no_topics' => 'Nincs téma.',
	'Recent_wrong_mode' => 'Rossz módot választottál.',
	'Recent_click_return' => 'Kattints %side%s, hogy visszatérj a legutolsó oldalra.',

	'Profile_view_option' => 'Felugró ablak profil látogatásánál',
	'Profile_viewed' => 'Profil látogatóim',

// BEGIN Disable Registration MOD
	'registration_status' => 'Elnézést, de a regisztráció átmenetileg le van zárva. Kérjük, próbáld meg később.',
// END Disable Registration MOD

	'PostHighlight' => 'Kiemel',
	'QuickQuote' => 'Gyors idézés',
	'Randomquote' => 'Véletlenszerű idézés',

// Mod User CP Organize
	'Cpl_Navigation' => 'Vezérlőpult',
// 'Cpl_Settings_Options' => 'Settings And Options',
	'Cpl_Settings_Options' => 'Beállítások',
	'Cpl_Board_Settings' => 'Oldal beállítások',
	'Cpl_NewMSG' => 'Új üzenet küldése',
	'Cpl_Click_Return_Cpl' => 'vagy kattins %side%s, hogy visszatérj a Vezérlőpulthoz',
	'Cpl_Personal_Profile' => 'Személyes profil',
	'Cpl_More_info' => 'Feliratkozások',

	'Forbidden_characters' => 'Felhasználónévben engedélyezett a-z, 0-9, -, _ és a szóköz használata.',

	'Topics_per_page' => 'Témák száma oldalanként',
	'Posts_per_page' => 'Hozzászólások száma oldalanként',
	'Hot_threshold' => 'Népszerű hozzászólások küszöbe',

	'Mod_CP_first_post' => 'Első hozzászólás',
	'Mod_CP_topic_count' => '<b>%s</b> témát találtam.',
	'Mod_CP_topics_count' => '<b>%s</b> témát találtam.',
	'Mod_CP_no_topics' => 'Nincs a keresési feltételeknek megfelelő téma.',
	'Mod_CP_sticky' => 'Kiemelt',
	'Mod_CP_announce' => 'Közlemény',
	'Mod_CP_global' => 'Globális',
	'Mod_CP_normal' => 'normális',
	'Display_sticky' => 'Kiemelt',
	'Display_announce' => 'Közlemény',
	'Display_global' => 'Globális közlemény',
	'Display_poll' => 'Szavazás',
	'Display_shadow' => 'Áthelyezett',
	'Display_locked' => 'Lezárt',
	'Display_unlocked' => 'Nyitott',
	'Display_unread' => 'Olvasatlan',
	'Display_unanswered' => 'Megválaszolatlan',
	'Display_all' => 'Összes',
	'Mod_CP_confirm_delete_polls' => 'Biztosan törölni szeretnéd a kijelölt szavazásokat?',
	'Mod_CP_poll_removed' => 'A szavazás sikeresen eltávolítottad a témából.',
	'Mod_CP_polls_removed' => 'A kijelölt szavazások sikeresen eltávolítottad a témákból.',
	'Mod_CP_topic_removed' => 'A téma sikeresen eltávolítottad az adatbázisból.',
	'Mod_CP_topic_moved' => 'A kiválaszott témát sikeresen áthelyezted <b>%s</b> fórumból <b>%s</b> fórumba.', // %s = old/new forum
	'Mod_CP_topics_moved' => 'A kiválasztott témákat sikeresen áthelyezted <b>%s</b> fórumból <b>%s</b> fórumba.', // %s = old/new forum
	'Mod_CP_topic_locked' => 'A témát sikeresen lezártad.',
	'Mod_CP_topic_unlocked' => 'A témát sikeresen megnyitottad.',
	'Mod_CP_topics_sticked' => 'A témákat sikeresen kiemelted.',
	'Mod_CP_topic_sticked' => 'A témát sikeresen kiemelted.',
	'Mod_CP_topics_announced' => 'A témákat sikeresen megjelölted közleményként.',
	'Mod_CP_topic_announced' => 'A témát sikeresen megjelölted közleményként.',
	'Mod_CP_topics_globalized' => 'A témákat sikeresen megjelölted globális eseménynek.',
	'Mod_CP_topic_globalized' => 'A témát sikeresen megjelölted globális eseménynek.',
	'Mod_CP_topics_normalized' => 'A témákat sikeresen megjelölted normálisnak.',
	'Mod_CP_topic_normalized' => 'A témát sikeresen megjelölted normálisnak.',
	'Mod_CP_click_return_topic' => 'Kattints %side%s, hogy visszatérj a régi témához, vagy %side%s, hogy visszatérj az újhoz.',

	't_starter' => 'Nem köszönheted meg saját magadnak',
	'Watched_Topics' => 'Figyelt témák',
	'No_Watched_Topics' => 'Jelenleg egy témát sem figyelsz',
	'Watched_Topics_Started' => 'Téma elindítva',
	'Watched_Topics_Stop' => 'Figyelés leállítása',

	'Stop_watching_forum' => 'Fórum figyelésének leállítása',
	'Start_watching_forum' => 'Fórum hozzászólásainak figyelése',
	'No_longer_watching_forum' => 'Sikeresen leiratkoztál a fórumról.',
	'You_are_watching_forum' => 'Sikeresen feliratkoztál a fórumra.',

	'UCP_SubscForums' => 'Fórum feliratkozások',
	'UCP_NoSubscForums' => 'Nem iratkoztál fel egy fórumra sem',
	'UCP_SubscForums_Flag' => 'Zászló',
	'UCP_SubscForums_Forum' => 'Fórum',
	'UCP_SubscForums_Forum_subscribed' => 'Feliratkoztál a fórumra',
	'UCP_SubscForums_Forum_already_subscribed' => 'Már feliratkoztál erre a fórumra',
	'UCP_SubscForums_Click_return_forum' => 'Kattints %side%s, hogy visszatérj a fórumba',
	'UCP_SubscForums_Topics' => 'Témák',
	'UCP_SubscForums_Posts' => 'Hozzászólások',
	'UCP_SubscForums_LastPost' => 'Utolsó hozzászólás',
	'UCP_SubscForums_UnSubscribe' => 'Leiratkozás',
	'UCP_SubscForums_NewTopic' => 'Új téma',

	'profile_main' => 'Általános adatok',
	'profile_explain' => 'Üdvözlünk a Felhasználói Vezérlőpultban. Itt tudod figyelni és frissíteni is a profilodat, a beállításaidat, illetve a fórum és téma feliratkozásaidat is. Más felhasználóknak is innen küldhetsz üzeneteket (ha engedélyezve van).',
	'your_activity' => 'Profilod',

	'Gravatar' => 'Gravatar',
	'Gravatar_explain' => 'Ha van <a href="http://www.gravatar.com" target="_blank">gravatar</a>od, kérjük, add meg az ott regisztrált e-mail címedet.',

	'private_msg_review_title' => 'VÁlaszüzenet',
	'private_msg_review_error' => 'Hiba a Privát Üzenet keresése közben!',

	'BSH_Viewing_Topic' => '%t% témát olvassa',
	'BSH_Viewing_Post' => '%sHozzászólást olvas%s',
	'BSH_Viewing_Profile' => '%u% profilját böngészi',
	'BSH_Viewing_Groups' => '%sCsoportokat böngészi%s',
	'BSH_Viewing_Forums' => '%f% fórumot böngészi',
	'BSH_Index' => '%sFórum kezdőlap%sot nézi',
	'BSH_Searching_Forums' => '%sKeres a fórumok közt%s',
	'BSH_Viewing_Onlinelist' => '%sJelenlévők listáját böngészi%s',
	'BSH_Viewing_Messages' => '%sPrivát üzeneteit olvassa%s',
	'BSH_Viewing_Memberlist' => '%sTaglistát böngészi%s',
	'BSH_Login' => '%sBejelentkezik%s',
	'BSH_Logout' => '%sKijelentkezik%s',
	'BSH_Editing_Profile' => '%sProfilt szerkeszt%s',
	'BSH_Viewing_ACP' => '%sAVP-t böngészi%s',
	'BSH_Moderating_Forum' => '%sFórumokat moderál%s',
	'BSH_Viewing_FAQ' => '%sGyIK-et olvas%s',
	'BSH_Viewing_Category' => '%c% kategóriát böngészi',

	'Board_statistic' => 'Oldalstatisztikák',
	'Database_statistic' => 'Adatbázis statisztikák',
	'Version_info' => 'Verzió adatok',
	'Thereof_deactivated_users' => 'Inaktív tagok száma',
	'Thereof_Moderators' => 'Moderátorok száma',
	'Thereof_Junior_Administrators' => 'Junior Adminok száma',
	'Thereof_Administrators' => 'Adminisztrátorok száma',
	'Deactivated_Users' => 'Aktiválásra váró felhasználók szám',
	'Users_with_Mod_Privileges' => 'Moderátori joggal rendelkező tagok',
	'Users_with_Junior_Admin_Privileges' => 'Junior Admin joggal rendelkező tagok',
	'Users_with_Admin_Privileges' => 'Adminisztrátori joggal rendelkező tagok',
	'DB_size' => 'Adatbázis mérete',
	'Version_of_ip' => '<a href="http://www.icyphoenix.com/">Icy Phoenix</a> verzió',
	'Version_of_board' => '<a href="http://www.phpbb.com">phpBB</a> verzió',
	'Version_of_PHP' => '<a href="http://www.php.net/">PHP</a> verzió',
	'Version_of_MySQL' => '<a href="http://www.mysql.com/">MySQL</a> verzió',
	'Download_post' => 'Hozzászólás letöltése',

	'Download_topic' => 'Téma letöltése',
	'Always_swear' => 'Trágár szavak elfogadása',

	'Shoutbox' => 'Üzenőfal',
	'Shoutbox_date' => ' Y m d H:i:s',
	'Shout_censor' => '<b>Üzenet eltávolítva!</b>',
	'Shout_refresh' => 'Frissítés',
	'Shout_text' => 'Szöveg',
	'Viewing_Shoutbox' => 'Üzenőfalat böngészi',
	'Censor' => 'Cenzor',

	'Edit_post_time' => 'Hozzászólás idejének szerkesztése',
	'Edit_post_time_xs' => 'Szerkeszt',
	'Topic_time_xs' => 'Téma ideje',
	'Post_time' => 'Hozzászólás ideje',
	'Post_time_successfull_edited' => '<b>Az időt sikeresen frissítetted.</b></span><br /><span class="postdetails">Ez az ablak 3 másodperc múlva bezárul.',

	'staff_message' => 'Üzenet a csapattól',

	'Board_Rules' => 'Oldal szabályok',
	'Forum_Rules' => 'Fórum szabályok',
	'Show_avatars' => 'Avatar megjelenítése a témában',
	'Show_signatures' => 'Aláírás megjelenítése a témában',
	'Acronym' => 'Mozaikszó',
	'Acronyms' => 'Mozaikszavak',
	'User_Number' => 'Felhasználó #',
	'Member_Count' => 'Tagok',
	'Reply_message' => 'Megválaszolt üzenet',
	'Click_read_topic' => 'Kattints %side%s, hogy elolvasd', // %s's here are for uris, do not remove!
	'Create_with_generator' => 'Avatar készítése az Avatar Generátorral',
	'View_avatar_generator' => 'Avatar Generátor',
	'Adv_Search' => 'Részletes keresés',
	'Search_Explain' => 'Keresés az oldalon belül',
	'Please_remove_install_contrib' => 'Kérjük töröld az <b>install/</b> könyvtárat',
	'Search_Engines' => 'Keresőrobotok:',
	'Bots_browsing_forum' => 'Fórumot böngésző keresőrobotok:',
	'Debug_On' => 'Debug Be',
	'Debug_Off' => 'Debug Ki',
	'Page_Generation_Time' => 'Generálási idő',
	'Memory_Usage' => 'Memória',
	'SQL_Queries' => 'SQL lekérések',
	'Search_new2' => 'Új hozzászólások',
	'Search_new_p' => 'Hozzászólások az utolsó látogatás óta',
	'Show_In_Portal' => 'Megjelenítés a Főoldalon',
	'Not_Auth_View' => 'Nincs jogosultságod a kért oldal megtekintéséhez.',
	'Site_Hist' => 'Oldaltörténet',
	'Links' => 'Linkek',
	'Print_View' => 'Nyomtatható verzió',
	'Browsing_topic' => 'Témát böngésző felhasználók:',
	'Sudoku' => 'Sudoku',
	'Bookmarks' => 'Könyvjelző',
	'Set_Bookmark' => 'Könyvjelző ehhez a témához',
	'Remove_Bookmark' => 'Téma könyvjelzőjének eltávolítása',
	'No_Bookmarks' => 'Még nem állítottál be egy könyvjelzőt sem',
	'Always_set_bm' => 'Könyvjelző beállítása automatikusan hozzászólás küldésekor',
	'Found_bookmark' => '%d könyvjelzőt állítottál be.', // eg. Search found 1 match
	'Found_bookmarks' => '%d könyvjelzőt állítottál be.', // eg. Search found 24 matches
	'More_bookmarks' => 'További könyvjelzők...', // For mozilla navigation bar

//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => 'Mi is ez?',
	'Rss_news_help_title' => 'Segítség az RSS hírolvasóhoz',
	'Rss_news_help_header' => 'Mik azok a feedek és hogyan tudom őket használni?',
	'Rss_news_help_explain' => 'Egy feed általában folyamatosan frissített információval szolgál egy webtartalomról, és egy linket szolgáltat az idézett tartalom megtekintéséhez. Ha feliratkozol egy weboldal feed-jére egy feed olvasóval, akkor a weboldal tartalmáról értesülni fogsz.<br /><br /><b>Figyelem:</b> Egy weboldal feed-jére való feliratkozáshoz szükséged van egy <a href="http://www.rssowl.org/" target="new">Feed-olvasóra</a>. Egyébként egy RSS vagy Atom linkre való kattintáskor csak egy formázatlan és érthetetlen szöveghalmazt kapnál a böngésződben.',
	'Rss_news_help_header_2' => '<b>Mi az RSS és az Atom?</b>',
	'Rss_news_help_explain_2' => 'Az RSS és az Atom két különböző formátumú feed. A legtöbb feed olvasó támogatja mindkét formátumot. Ez az oldal az Atom 0.3-at és az RSS 2.0-át támogatja.',
	'Rss_news_help_header_3' => '<b>Hogyan használhatom a hírolvasókat?</b>',
	'Rss_news_help_explain_3' => 'Elsőnek kell neked egy feed olvasó. Például ennek a célnak pont megfelel a <a href="http://www.rssowl.org/" target="new">www.rssowl.org</a> programja.<br /><br />Ezeket a lépéseket kell megtenned, hogy használhasd:<br /><br /><b>1.</b> Keress ezen az oldalon RSS linket. (Extra => Kereshetsz a weboldalon is új feed-eket.) <b>or</b><br /><b>2.</b> Add hozzá az egyiket az alábbi linkek közül:',
	'L_url_rss_explain' => 'URL minden fórum témához.',
	'L_url_rss_news_explain' => 'URL csak a hírek fórumhoz.',
	'L_url_rss_atom_explain' => 'URL egy bizonyos RSS feedhez.',
	'Rss_news_help_rights' => 'Kérlek wedd figyelembe, hogy ez a szolgáltatás nem egyenértékű a weboldallal, és használatát bármikor megszüntetheted, illetve nem biztos, hogy minden esetben rendelkezésre áll..',
	'Rss_news_feeds' => 'RSS Hírek Feedként',

	'Quick_Reply' => 'Gyors válasz',
	'Mod_CP_sticky2' => 'Kiemelt',
	'Mod_CP_announce2' => 'Közlemény',
	'Mod_CP_global2' => 'Globális',
	'Mod_CP_normal2' => 'Normális',

	'Search_Flood_Error' => 'Két keresés között el kell telnie egy kis időnek. Kérlek várj egy kicsit és próbálkozz újra.',

// Custom Profile Fields MOD
	'custom_field_notice' => 'Ezt a mezőt egy adminisztrátor hozta létre. Megjelölhető publikusnak is, meg nem is. A mező meg lesz *-gal jelölve, és kötelező lesz kitölteni',
	'and' => ' és ',
// END Custom Profile Fields MOD

	'dsbl' => 'Az IP címed egy <a href="%url%">DNS alapú feketelistán</a> szerepel. <br />A regisztrációd blokkolva van',
	'Emails_Only_To_Admins_Error' => 'A levelezőrendszerrel csak az adminisztrátoroknak üzenhetsz.',
	'Wordgraph' => 'Címkék',
	'Viewing_wordgraph' => 'Címkéket böngészi',
	'Links_For_Guests' => '<b>A link megtekintéséhez regisztrálnod kell</b>',
	'New' => 'Ú',
	'New_Label' => 'Új',
	'New_Messages_Label' => 'Új üzenetek',
	'Show_Personal_Gallery' => 'Felhasználó személyes galériájának megtekintése',
	'Login_Status' => 'Állapot',
	'Login_Hidden' => 'Rejtett',
	'Login_Visible' => 'Látható',
	'Login_Default' => 'Alapértelmezett',
	'ERRORS_NOT_FOUND' => 'A kért cím nem található a szerveren',
	'ERRORS_000' => 'Ismeretlen hiba',
	'ERRORS_000_FULL' => 'A kért cím kiszolgálása ismeretlen hibába ütközött.<br />A hibáról bejegyzés került a naplóba, kérlek abban keress a problémára használhatóbb magyarázatot.',
	'ERRORS_400' => '400-as hiba',
	'ERRORS_400_FULL' => 'Rosszul formázott kérés.',
	'ERRORS_401' => '401-es hiba - Azonosítási hiba',
	'ERRORS_401_FULL' => 'Ezt a hibaüzenetet azért kapod, mert még nem azonosítottad magad a kért cím megtekintéséhez.',
	'ERRORS_403' => '403-as hiba',
	'ERRORS_403_FULL' => 'A kért címhez nincs hozzáférési jogod.',
	'ERRORS_404' => '404-es hiba - ',
	'ERRORS_404_FULL' => 'A kért cím nem elérhető. Lehet, hogy hibás címre hivatkoztál, vagy az időközben törölve lett.',
	'ERRORS_500' => '500-as hiba - Hiba a beállításokban',
	'ERRORS_500_FULL' => 'A cím kiszolgálása közben konfigurációs probléma lépett fel..<br />A hibáról bejegyzés került a naplóba, kérlek abban keress a problémára használhatóbb magyarázatot.',
	'ERRORS_EMAIL_SUBJECT' => 'Hibák: ',
	'ERRORS_EMAIL_ADDRRESS_PREFIX' => 'errors_management',
	'ERRORS_EMAIL_BODY' => 'Hiba lépett fel az oldalon. Kérjük, ellenőrizd a naplót.',
	'Remote_avatar_no_image' => 'A %s kép nem létezik',
	'Remote_avatar_error_filesize' => 'A kép mérete túl nagy Avatarnak (%d Bájt)',
	'Remote_avatar_error_dimension' => 'A kép méretei túl nagyok egy avatarnak (%d x %d pixel)',
	'How_Many_Chatters' => '<b>%d</b> felhasználó tartózkodik a chaten',
	'Who_Are_Chatting' => '<b>%s</b>',
	'Click_to_join_chat' => 'Kattints ide a chateléshez',
	'ChatBox' => 'ChatBox',
	'log_out_chat' => 'Sikeresen kiléptél a chatből ',
	'Send' => 'Küldés',
	'Login_to_join_chat' => 'Jelentkezz be a chateléshez',

// Hacks List
/* General */
	'Hacks_List' => 'Készítők',
	'Page_Desc' => 'Ez a modul lehetőséget ad arra, hogy hozzáadd/szerkeszd/töröld a különböző modok készítőinek nevét az oldalról. A felhasználóknak a credits.php fájl jeleníti meg a készítők listáját.',
	'Deleted_Hack' => 'A(z) %s mod sikeresen törölve a készítők közül.<br />',
	'Updated_Hack' => 'A(z) %s mod sikeresen frissítve.<br />',
	'Added_Hack' => '%s mod adatait sikeresen bővítetted.<br />',
	'Status' => 'Állapot',
	'No_Website' => 'Nincs megadva honlap.',
	'No_Hacks' => 'Nincsenek készítők megadva.',
	'Add_New_Hack' => 'Új készítő hozzáadása',
	'User_Viewable' => 'Elrejtés a felhasználók elől?',
	'Hack_Name' => 'Mod Neve',
//	'Description' => 'Leírás',
	'Required' => 'Kötelező',
	'Author_Email' => 'Szerző Email-je',
	'Version' => 'Verzió',
	'Download_URL' => 'Letöltési link',

/* Errors */
	'Error_Hacks_List_Table' => 'Hiba történt a Hack Lista táblájának lekérése közben.',
	'Required_Field_Missing' => 'Nem töltötted ki az összes kötelező mezőt.',
	'Error_File_Opening' => 'Nem lehet megnyitni a következő fájlt: %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => 'Utolsó kép', // Album Addon
	'Random_pic' => 'Véletlenszerű kép', // Album Addon
	'Click_enlarge_pic' => 'A nagyításhoz kattints a képre',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => 'Utoljára használt IP',
	'Last_Used_OS' => 'OS',
	'Last_Used_Browser' => 'Böngésző',
	'Last_Used_Referer' => 'Hivatkozó',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
	'Users_Admins' => 'Adminisztrátorok',
	'Users_Mods' => 'Moderátorok',
	'Users_Global_Mods' => 'Globális moderátorok',
	'Users_Regs' => 'Felhasználók',
	'Users_Guests' => 'Vendégek',
	'Users_Hidden' => 'Rejtett',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Style' => 'Megjelenés',
	'User_Contacts' => 'Kapcsolat',
	'Memberlist_Users_Display' => 'Felhasználók száma oldalanként:',
	'SORT_FAST' => 'Gyors',
	'SORT_STANDARD' => 'Standard',
	'SORT_RANK' => 'Rang',
	'SORT_STAFF' => 'A csapat',
	'SORT_STYLE' => 'Megjelenés',
	'SORT_LASTLOGON' => 'Utolsó bejelentkezés',
	'SORT_BIRTHDAY' => 'Születésnap',
	'SORT_ONLINE' => 'Elérhető',
	'ASCENDING' => 'Növekvő',
	'DESCENDING' => 'Csökkenő',
	'LESS_THAN' => 'Kevesebb, mint',
	'EQUAL_TO' => 'Egyenlő',
	'MORE_THAN' => 'Több, mint',
	'BEFORE' => 'Előtt',
	'AFTER' => 'Után',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => 'A csapat',
	'Rank' => 'Rang',
	'Rank_Header' => 'Rangok',
	'Rank_Image' => 'Rang képe',
	'Rank_Posts_Count' => 'Automatikus rang hosszászólás alapján',
	'Rank_Days_Count' => 'Automatikus rang napok alapján',
	'Rank_Min_Des' => 'Minimum hozzászólás/nap',
	'Rank_Min_M' => 'Minimum hozzászólás',
	'Rank_Max_M' => 'Max hozzászólás',
	'Rank_Min_D' => 'Minimum nap',
	'Rank_Max_D' => 'Max nap',
	'Rank_Special' => 'Különleges rang',
	'Rank_Special_Guest' => 'Különleges rang a Vendégeknek',
	'Rank_Special_Banned' => 'Különleges rang a Kitiltott Felhasználóknak',
	'Current_Rank_Image' => 'Jelenlegi rangkép',
	'No_Rank' => 'Nincs hozzárendelt rang',
	'No_Rank_Image' => 'Nincs rangkép',
	'No_Rank_Special' => 'Nincs hozzárendelt különleges rang',
	'Memberlist_Administrator' => 'Adminisztrátor',
	'Memberlist_Moderator' => 'Moderátor',
	'Memberlist_User' => 'Felhasználó',
	'Guest_User' => 'Tag',
	'Banned_User' => 'Kitiltott',
	'Rank1_title' => 'Rang 1 cím',
	'Rank2_title' => 'Rang 2 Cím',
	'Rank3_title' => 'Rang 3 Cím',
	'Rank4_title' => 'Rang 4 Cím',
	'Rank5_title' => 'Rang 5 Cím',
// Mighty Gorgon - Multiple Ranks - END

// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => 'Menü',
	'MAIN_LINKS' => 'Főmenü',
	'NEWS_LINKS' => 'Hírek',
	'INFO_LINKS' => 'Infó',
	'USERS_LINKS' => 'Tagok &amp; Csoportok',
	'SELECT_STYLE' => 'Megjelenés',
	'SELECT_LANG' => 'Nyelv',
	'RSS_FEEDS' => 'RSS Feedek',
	'SPONSORS_LINKS' => 'Szponzorok',
	'TOOLS_LINKS' => 'Eszközök',
	'HelpDesk' => 'Súgó',
	'AvatarGenerator' => 'Avatar Generátor',
	'DBGenerator' => 'SQL-ből PHP Generátor ',

	'LINK_ACP' => 'AVP',
	'LINK_CMS' => 'CMS',
	'LINK_HOME' => 'Főoldal',
	'LINK_PROFILE' => 'Profil',
	'LINK_FORUM' => 'Fórum',
	'LINK_BOARDRULES' => 'Szabályok',
	'LINK_FAQ' => 'GyIK',
	'LINK_SEARCH' => 'Keresés',
	'LINK_SITEMAP' => 'Oldaltérkép',
	'LINK_ALBUM' => 'Album',
	'LINK_CALENDAR' => 'Naptár',
	'LINK_DOWNLOADS' => 'Letöltések',
	'LINK_BOOKMARKS' => 'Könyvjelzők',
	'LINK_DRAFTS' => 'Vázlatok',
	'LINK_UPLOADED_IMAGES' => 'Feltöltött képek',
	'LINK_AJAX_SHOUTBOX' => 'Chat',
	'LINK_LINKS' => 'Linkek',
	'LINK_CONTACT_US' => 'Kapcsolat',
	'LINK_SUDOKU' => 'Sudoku',

	'LINK_NEWS_CAT' => 'Hírkategóriák',
	'LINK_NEWS_ARC' => 'Híarchívum',
	'LINK_NEW_MESSAGES' => 'Új hozzászólások',
	'LINK_DISPLAY_UNREAD_S' => 'Olvasatlan',
	'LINK_DISPLAY_MARKED_S' => 'Kijelölt',
	'LINK_DISPLAY_PERMANENT_S' => 'Állandó',
	'LINK_DIGESTS' => 'Kivonatok',

	'LINK_CREDITS' => 'Készítők',
	'LINK_REFERRERS' => 'HTTP Hivatkozók',
	'LINK_VIEWONLINE' => 'Jelenlévő tagok',
	'LINK_STATISTICS' => 'Statisztikák',
	'LINK_DELETE_COOKIES' => 'Sütik törlése',

	'LINK_MEMBERLIST' => 'Taglista',
	'LINK_USERGROUPS' => 'Csoportok',
	'LINK_RANKS' => 'Rangok',
	'LINK_STAFF' => 'A Csapat',
// Mighty Gorgon - Nav Links - END

	'Activity' => 'Játékok',
	'Games' => 'Játékok',
	'Trohpy' => 'Játék trófeák',
	'quick_links_games' => 'Játékok menü',

	'By' => 'by',
	'No_Icon_Image' => 'Nincs ikon',
	'Change_Style' => 'Megjelenés',
	'Change_Lang' => 'Nyelv',
	'Permissions_List' => 'Jogosultság lista',
	'IP_TEAM' => 'Icy Phoenix Csapat',

//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',
	'WeatherForecast' => 'Időjárás előrejelzés',
	'ErrorNotFound' => 'A fájl nem található!',
	'MGC_Users_Online' => 'Jelenlévő MGC felhasználók',
	'MGC_User_Servertime' => 'Dátum',
	'MGC_User_Nickname' => 'Nicknév',
	'MGC_User_Server' => 'Szerver',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'MGC Verzió',

	'Country_Flag' => 'Ország',
	'Select_Country' => 'Válassz országot',
	'Extra_profile_info' => 'Extra Profil Adatok',
// 'Extra_profile_info_explain' => 'Itt extra információt adhatsz meg magadról, vagy írhatsz a hobbidról is. Sőt, képeket is hozzáadhatsz. A bbcode-okat ugyanúgy használhatod, mint a hozzászólásoknál, vagy az aláírásodban.',
	'Extra_profile_info_explain' => 'Itt extra információt adhatsz meg magadról, vagy írhatsz a hobbidról is. Sőt, képeket is hozzáadhatsz. A bbcode-okat ugyanúgy használhatod, mint a hozzászólásoknál, vagy az aláírásodban.',
	'Extra_window' => 'Megnyitás külön ablakban',
	'Extra_too_long' => 'Az extra mező túl hosszú (max. <b>%d</b> karakter engedélyezett)',
	'UserLike' => 'A felhasználó kedveli',
	'UserDisLike' => 'A felhasználó nem kedveli',
	'UserLikeIns' => '3 dolog amit kedvelsz',
	'UserDisLikeIns' => '3 dolog amit nem kedvelsz',
	'UserPhone' => 'Telefonszám',
	'UserSport' => 'Sport/Egyesület',
	'UserMusic' => 'Zene/Együttes',
	'UserNoInfo' => 'Nincs adat megadva',
	'LAST_SEEN' => 'Utolsó bejelentkezés',
// New MG - END

// MG CMS - BEGIN
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'CMS Kezelése',
	'CMS_CONFIG' => 'Konfiguráció',
	'CMS_SETTINGS' => 'Beállítások',
	'CMS_ACP' => 'Lap szerkesztése',
	'CUSTOM_PAGE' => 'Egyéni oldal',
// MG CMS - END

// Icy Phoenix - BUILD 001
	'SimilarTopics' => 'Hasonló témák',
	'Chat' => 'Chat',
	'DIGESTS' => 'Kivonatok',

	'CPL_REG_INFO_EXPLAIN' => 'Felhasználónév, Email cím és jelszó',
	'CPL_PROFILE_INFO_EXPLAIN' => 'Általános adatok, üzenetküldők, születésnap, érdeklődési kör, és egyéb adatok',
	'CPL_PROFILE_VIEWED_EXPLAIN' => 'Felhasználók, akik meglátogatták a profilod',
	'CPL_AVATAR_PANEL_EXPLAIN' => 'Az Avatar egy kicsi kép, amelyet a nevedhez csatolhatsz',
	'CPL_SIG_EDIT_EXPLAIN' => 'Az aláírásodban megadhatsz egy szöveget, amely minden hozzászólásod alatt megjelenik',
	'CPL_PREFERENCES_EXPLAIN' => 'A hozzászólások olvasásának és írásának általános beállításai',
	'CPL_BOARD_SETTINGS_EXPLAIN' => 'Global settings regarding time, template and language',
	'Calendar_settings_EXPLAIN' => 'Globális beállítások (idő, kinézet, nyelv...)',
	'Hierarchy_setting_EXPLAIN' => 'Alfórumok és témák csoportosításának beállításai',
	'LOGIN_SEC_EXPLAIN' => 'Ha engedélyezed ezt a beállítást, akkor minden ezzel a felhasználónévvel történő bejelentkezés figyelve lesz',
	'CPL_OWN_POSTS_EXPLAIN' => 'Saját hozzászólásaim keresése',
	'CPL_OWN_PICTURES_EXPLAIN' => 'Személyes galériám megtekintése',
	'CPL_INBOX_EXPLAIN' => 'Bejövő: a kapott privát üzeneteket tartalmazza',
	'CPL_SAVEBOX_EXPLAIN' => 'Mentett: a lementett privát üzeneteket tartalmazza',
	'CPL_OUTBOX_EXPLAIN' => 'Kimenő: az általad elküldött, de a címzett által még nem olvasott privát üzeneteket tartalmazza',
	'CPL_SENTBOX_EXPLAIN' => 'Elküldőtt: az általad elküldött, és a címzett által már olvasott privát üzeneteket tartalmazza',
	'CPL_BOOKMARKS_EXPLAIN' => 'Minden könyvjelzővel megjelölt téma',
	'WATCHED_TOPICS_EXPLAIN' => 'Egy lista az összes figyelt témáról',
	'CPL_SUBSCFORUMS_EXPLAIN' => 'Azok a fórumok, amelyekre feliratkoztál',
	'DIGESTS_EXPLAIN' => 'A kivonat egy rendszeres email, ami az általad megjelölt témák új üzeneteinek a tartalmáról értesít',
	'DRAFTS_EXPLAIN' => 'Vázlataid kezelése',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Üzenőfal',
	'Ajax_Chat' => 'Chat',
	'Ajax_Archive' => 'Chat Archívum',
	'Shoutbox_flooderror' => 'Nem küldhetsz gyorsan egymás után több üzenetet. Próbáld újra pár másodperc múlva',
	'Shoutbox_no_auth' => 'Csak regisztrált felhasználók írhatnak az üzenőfalra',
	'Shoutbox_loading' => 'Üzenőfal betöltése...',
// Errors
	'Shoutbox_unable' => 'A művelet végrehajtása sikertelen. Kérjük, próbáld meg újra.',
	'Shoutbox_timeout' => 'A szerver nem válaszolt. Kérjük, próbáld meg újra.',
	'Shoutbox_empty' => 'Nincs üzenet az Adatbázisban',
	'Shoutbox_no_mode' => 'Nincs érvényes mód kiválasztva',
// Archive
	'Shouts' => 'Üzenetek',
	'Statistics' => 'Statisztikák',
	'Total_shouts' => 'Összes üzenet',
	'Stored_shouts' => 'Tárolt üzenetek',
	'My_shouts' => 'Üzeneteim',
	'Today_shouts' => 'Elmúlt 24 óra üzenetei',
	'Top_Ten_Shouters' => 'Top 10 üzenetküldő',
// Online list
	'Online_total' => 'Összes',
	'Online_registered' => 'Felhasználók',
	'Online_guests' => 'Vendégek',
	'Who_is_Chatting' => 'Chatelők',
	'Shoutbox_online_explain' => 'Ez az adat az elmúlt 30 másodperc alapján készült',
	'Start_Private_Chat' => 'Kattints a névre privát csevegés indításához',
// Chat rooms
	'Shout_rooms' => 'Szobál',
	'Admin_rooms' => 'Összes szoba',
	'Public_room' => 'Publikus szoba',
	'Private_room' => 'Privát szoba',
	'My_id' => 'Én',
// Ajax Shoutbox - END

	'Contact_us' => 'Kapcsolat',
	'Contact_us_explain' => 'Ezen az oldalon tudsz nekünk üzenni.',
	'Session_invalid' => 'Érvénytelen munkamenet. Kérjük küldd el újra az űrlapot..',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => ' ez a felhasználónév túl rövid',
	'Reg_Username_Long' => ' ez a felhasználónév túl hosszú',
	'Reg_Username_Taken' => ' ez a felhasználónév nem elérhető',
	'Reg_Username_Free' => ' ez a felhasználónév elérhető',
	'Reg_PWD_Short' => 'A jelszó túl rövid',
	'Reg_PWD_Easy' => 'A jelszó túl egyszerű',
	'Reg_PWD_OK' => 'Elfogadható jelszó',
	'Reg_Email_Invalid' => ' érvénytelen, vagy már regisztrált e-mail cím',
	'Reg_Email_OK' => ' helyes e-mail cím',

// Moved here from lang_adv_time.php
	'time_mode' => 'Idő kezelése',
	'time_mode_text' => 'A tél-nyár különbsége a normál idő és a nyári időszámítás közötti különbség. Ez 0 és 120 perc közé eső érték, általában 60 perc.',
	'time_mode_auto' => 'Automatikus mód',
	'time_mode_full_pc' => 'A kiszolgáló ideje',
	'time_mode_server_pc' => 'Univerzális kiszolgálóidő, Időzóna/Nyári időszámítás<br /><span STYLE="margin-left: 25">a számítógépedről</span>',
	'time_mode_full_server' => 'Szerver helyi idő',
	'time_mode_manual' => 'Kézi beállítás',
	'time_mode_dst' => 'Nyári időszámítás',
	'time_mode_dst_server' => 'Kiszolgáló szerint',
	'time_mode_dst_time_lag' => 'Tél-nyár különbség',
	'time_mode_dst_mn' => 'perc',
	'time_mode_dst_mn_explain' => 'Téli-Nyári időszámítás közötti eltérés percben megadva',
	'time_mode_timezone' => 'Időzóna',

	'dst_time_lag_error' => 'Tél-nyár különbség hiba. 0 és 120 közötti értéket kell megadni.',

	'dst_enabled_mode' => ' [Nyári időszámítás]',
	'full_server_mode' => 'Az idő szinkronizálva a fórum kiszolgáló idejével',
	'server_pc_mode' => 'Az idő szinkronizálva a kiszolgáló idejével - Időzóna/DST információk a te számítógépedről lettek használva',
	'full_pc_mode' => 'Az idő szinkronizálva a számítógéped idejével',

	'Smileys_Per_Page' => 'Hangulatjelek száma oldalanként',

/* lang_site_hist.php - BEGIN */
	'Site_history' => 'Oldaltörténet',
	'Month' => 'Hónap',
	'Week_day' => 'Hét napjai',
	'Not_availble' => 'Nem elérhető',
	'Total_users' => 'Maximális elhasználók',
	'Reg_users' => 'Regisztrált felhasználók',
	'Hidden_users' => 'Rejtett felhasználók',
	'Guests_users' => 'Vendég felhasználók',
	'New_users' => 'Új felhasználók',
	'New_topics' => 'Új témák',
	'New_posts_reply' => 'Hozzászólások/Válaszok',
	'Most_online' => 'Legtöbb jelenlévő felhasználó: %s',
	'Most_online_week' => 'Legtöbb jelenlévő felhasználó az elmúlt 7 napon belül',
	'Last_24' => 'Legtöbb jelenlévő felhasználó az elmúlt %s órában',
	'Top_Posting_Users' => 'Legtöbbet hozzászóló felhasználók',
	'Top_Posting_Users_week' => 'Legtöbbet hozzászóló felhasználók a héten [%s]',
	'Rank' => 'Rang',
	'Percent' => 'Százalék',
	'Graph' => 'Grafikon',
	'Top_Visiting_Users' => 'Legtöbb időt itt töltő felhasználók',
/* lang_site_hist.php - END */

/* lang_referers.php - BEGIN */
	'REFERERS' => 'Http Hivatkozók',
	'VIEWING_REFERERS' => 'Hivatkozókat böngészi',
	'REFERERS_TITLE' => 'Http hivatkozók kezelése',
	'REFERERS_CLEARED' => 'Hivatkozók törölve',
	'REFERERS_CLEAR' => 'Összes törlése',
	'CLICK_RETURN_REFERERS' => 'Kattints %side%s, hogy visszatérj a Hivatkozókhoz',
	'REFERER_HOST' => 'Hivatkozók gépneve',
	'REFERER_URL' => 'Hivatkozók webcíme',
	'REFERER_T_URL' => 'Látogató URL',
	'REFERER_IP' => 'Hivatkozók IP-je',
	'REFERER_HITS' => 'Találat',
	'REFERER_FIRST' => 'Első látogatás',
	'REFERER_LAST' => 'Utolsó látogatás',
	'REFERER_DELETE' => 'Törlés',
	'REFERER_KILL' => 'Eltávolítás adatbázisból (használd a * (csillag) karaktert a helyettesítéshez)',
	'REFERER_GROUP_BY' => 'Csoport által',
/* lang_referers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_DAYS' => '%d nap',
	'X_WEEKS' => '%d hét',
	'X_MONTHS' => '%d hónap',
	'X_YEARS' => '%d év',

	'Confirm_delete_user' => 'Biztosan törölni szeretnéd a felhasználót?',
	'Prune_no_users' => 'Nem lett felhasználó törölve',
	'Prune_users_number' => 'Az alábbi %d felhasználó törlésre került:',

	'Prune_user_list' => 'Törlésre kerülő felhasználók',
	'Prune_on_click' => '%d felhasználót fogsz törölni. Biztosan ezt szeretnéd?',
	'Prune_Action' => 'Kattints a linkre a művelet végrehajtásához',
	'Prune_users_explain' => 'Felhasználók megtisztítása! 3 link közül választhatsz: törlöd azon régi felhasználókat, akik egyszer sem szóltak hozzá egy témához sem; törlöd azon régi felhasználókat, akik sohasem léptek be; vagy törlöd azon felhasználókat, akik nem aktiválták a hozzáférésüket.<p/><b>Megjegyzés:</b> A műveletet később nem lehet visszavonni!',
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => 'Avatar Generátor',
	'Available' => 'Elérhető Avatarok',
	'Random' => 'Véletlenszerű',
	'Avatar_Text' => 'Írd be a szöveget, amelyet az avatarodon szeretnél látni:',
	'Avatar_Preview' => 'Avatar előnézet',
	'Your_Avatar' => 'Avatarod',
	'Submit_Avatar' => 'Avatar beküldése',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Uploading' => 'Feltöltés...',
	'Upload_Image_Local' => 'Kép feltöltése',
	'Uploaded_Images_Local' => 'Feltöltött képek',
	'Upload_Image_Local_Explain' => 'Válaszd ki a feltölteni kívánt képet',
	'Uploaded_Image_Success' => 'A képet sikeresen feltöltötted.',
	'Uploaded_Image_BBC' => 'A kép linkeléséhez használhatsz BBCode-t.',
	'Upload_Image_Empty' => 'Semmit nem tölthetsz fel... hiába próbálod!',
	'Upload_File_Too_Big' => 'A feltölteni kívánt kép túl nagy! Engedélyezett fájlméret:',
	'Upload_File_Error' => 'Ismeretlen hiba',
	'Upload_File_Error_Size' => 'Fájlméret nem engedélyezett (túl nagy fájl)!',
	'Upload_File_Error_Type' => 'Fájltípus nem engedélyezett!',
	'Upload_File_Type_Allowed' => 'A következő fájltípusok engedélyezettek',
	'Upload_File_Max_Size' => 'Egy fájl maximum engedélyezett mérete',
	'Upload_Insert_Image' => 'BBCode beszúrása',
	'Upload_Close' => 'Bezárás',
	'BBCode' => 'BBCode',
	'HTML' => 'HTML',

	'No_News' => 'Nincsenek hírek',

	'Email_confirm' => 'Email cím megerősítése',
	'Email_mismatch' => 'A megadott email címek nem egyeznek.',

	'View_ballot' => 'Szavazatok megtekintése',
	'Full_edit' => 'Teljes szerkesztő-módba váltás',
	'Save_changes' => 'Mentés',
	'No_subject' => '(Nincs tárgy)',
	'Edit_quick_post' => 'Hozzászólás gyorsszerkesztése',
	'AJAX_search_results' => 'A gyorskereső %s hasonló című témát talált. Kattints ide a témák megtekintéséhez',
	'AJAX_search_result' => 'A gyorskereső egy hasonló című témát talált. Kattints ide a témák megtekintéséhez',
	'More_matches_username' => 'Több felhasználó is egyezik a kéréssel. Válassz ki egyet a listából.',
	'No_username' => 'Meg kell adnod egy felhasználónevet.',
	'AJAX_quick_search_results' => 'A gyorskereső %s hasonló témát talált a megadott kulcszavak alapján.<br />Jobb oldalon az első találatot láthatod.<br />Kattints a KERESÉSRE a teljes lista megtekintéséhez.',
	'AJAX_quick_search_result' => 'A gyorskereső egy hasonló témát talált a megadott kulcszavak alapján.<br />Jobb oldalon az első találatot láthatod.<br />Kattints a KERESÉSRE a teljes lista megtekintéséhez.',

	'Icon_Description' => 'Ikon leírása',

	'Feature_Disabled' => 'Ez a funkció jelenleg ki van kapcsolva.',

// Resend Activation - BEGIN
	'Resend_activation_email' => 'Aktivációs email újraküldése',
	'Invalid_activation' => 'A felhasználó aktiválása csak az adminisztrátor által lehetséges.',
	'No_actkey' => 'A hozzáférésednek nincs aktiváló kulcsa. Kérlek lépj kapcsolatba az oldal adminisztrátoraival további információért.',
	'Send_actmail_flood_error' => 'Nem indíthatsz új kérést ilyen hamar. Próbáld meg újra kicsit később.',
	'Resend_activation_email_done' => 'Az aktiváló email el lett küldve. Kérlek ellenőrizd le az emailjeidet további információért.',
// Resend Activation - END

	'Bots_Group' => 'Botok',
	'Bots_Color' => 'Botok színe',
	'Active_Users_Group' => 'Aktív felhasználók',
	'Active_Users_Color' => 'Aktív felhasználók színe',
	'Group_Default_Membership' => 'Elsődleges csoport',
	'Group_Default_Membership_Explain' => 'Válaszd ki a felhasználó elsődleges csoportját, amely hozzárendel a felhasználóhoz egy rangot és a csoport színét.',
	'User_Color' => 'Felhasználó színe',
	'User_Color_Explain' => 'A felhasználó elsődleges csoportja (amennyiben beállítasz neki egyet), felül fogja írni az itt beállított színét. Használ hexa kódot a szín meghatározására <b>#</b> nélkül. Például: ff0000 A PIROS kódja.',
	'No_Groups_Membership' => 'Nincs csoporttagsága',
	'No_Default_Group' => 'Nincs elsődleges csoport beállítva',
	'Group_members_updated' => 'Csoporttagok sikeresen frissítve.',
	'Colorize_All' => 'Összes tag színezése',
	'Colorize_Selected' => 'Kijelöltek színezése',

	'CompanyWho' => 'A Vállalat',
	'CompanyWhere' => 'Elérhetőség',
	'CompanyServices' => 'Szolgáltatások',
	'CompanyProducts' => 'Termékek',

	'ShareThisTopic' => 'Téma megosztása',

	'Remove_cookies' => 'Az oldal által használt sütik eltávolítása',
	'Cookies_deleted' => 'Összes süti sikeresen törölve, a rendszer pedig automatikusan kiléptetett.<br />A törlés befejezéséhez zárd be a böngésződet.',
	'Delete_cookies' => 'Sütik törlése',
	'cookies_confirm' => 'Biztosan törölni szeretnéd az oldal által használt sütiket?<br /><br />A művelet téged is ki fog léptetni.',

	'CustomIcy' => 'CustomIcy',

	'Drafts' => 'Vázlatok',
	'Drafts_Action' => 'Művelet',
	'Drafts_Save' => 'Mentés',
	'Drafts_Load' => 'Betölt',
	'Drafts_Saved' => 'Vázlat sikeresen elmentve',
	'Drafts_Loaded' => 'Vázlat betöltve',
	'Drafts_No_Drafts' => 'Nincs mentett vázlat',
	'Drafts_Delete_Sel' => 'Kijelöltek törlése',
	'Drafts_Save_Question' => '<br /><br />Biztosan el szeretnéd menteni az üzenetet vázlatként?<br /><br />Kérjük, vedd figyelembe, hogy csak a szövegtörzs lesz elmentve, minden más adat elveszik.',
	'Drafts_Delete_Question' => '<br /><br />Biztosan törölni szeretnéd a kijelölt vázlatokat?',
	'Drafts_Type' => 'Vázlat típusa',
	'Drafts_Subject' => 'Vázlat tárgya',
	'Drafts_NT' => 'Új téma',
	'Drafts_NM' => 'Válasz írása',
	'Drafts_NPM' => 'Privát üzenet',

	'CannotEditAdminsPosts' => 'Nem szerkesztheted az adminisztrátorok hozzászólásait',
	'Random_Number' => 'Véletlenszám',

	'New_download' => 'Új letöltés került feltöltésre vagy frissítésre.<br />A megtekintéséhez kattints %side%s.',
	'Dl_bug_tracker' => 'Hibajelentő',
	'Downloads_ADV' => 'Letöltések ADV',

	'TopicUseful' => 'Hasznos volt a téma?',
	'Article' => 'Cikk',
	'Comments' => 'Hozzászólások',

	'Sitemap' => 'Oldaltérkép',

	'Delete_My_Account' => 'Felhasználó törlése',
	'Delete_My_Account_Explain' => 'Ha szeretnéd a hozzáférésedet törölni az oldalról, küldj egy kérelmet erről az oldalról, és töröljük az azonosítódat, amilyen hamar csak lehetséges.<br />Tárgynak "azonosító törlése" címet adj, és (ha szeretnéd) írd le pár szóban, miért szeretnéd törölni magad magad az oldalról.',

	'KB_MODE_ON' => 'TB mód engedélyezése',
	'KB_MODE_OFF' => 'Tb mód tiltása',

	'Go_To_Page_Number' => 'Oldalra ugrás',

	'Admin_Emails' => 'Adminisztrátorok küldhetnek nekem emailt',
	'Allow_PM_IN' => 'Felhasználók küldhetnek nekem privát üzeneteket',
	'Allow_PM_IN_Explain' => 'Kérjük, vedd figyelembe, hogy a rendszer adminisztrátorok, a moderátorok és a barátaid továbbra is tudnak majd üzeneteket küldeni.',
	'Allow_PM_IN_SEND_ERROR' => 'A felhasználó nem kíván más felhasználóktól Privát Üzeneteket kapni, így a tiedé sem fog eljutni hozzá.',

// 'UCP_ZEBRA' => 'Barátok &amp; Ellenségek',
	'UCP_ZEBRA' => 'Barátkezelő',
	'UCP_ZEBRA_FOES' => 'Ellenségek kezelése',
	'UCP_ZEBRA_FRIENDS' => 'Barátok kezelése',

	'ADD_FOES' => 'Ellenségek hozzáadása',
	'ADD_FOES_EXPLAIN' => 'Több felhasználónevet is megadhatsz, mindegyiket külön sorban írva.',
	'YOUR_FOES' => 'Ellenségeid',
	'YOUR_FOES_EXPLAIN' => 'Válaszd ki az eltávolítandó felhasználóneveket és kattints a küldés gombra.<br />Tipp: a CTRL gombot lenyomva többet is ki tudsz egyszerre jelölni.',
	'FOE_MESSAGE' => 'Üzenet egy ellenségtől',
	'FOES_EXPLAIN' => 'Az ellenségként megjelölt felhasználókat alapértelmezésben figyelmen kívül hagyod. Például a hozzászólásaik számodra nem jelennek meg, és személyes üzeneteiket sem kapod meg. Kérjük, vedd figyelembe, hogy az adminisztrátorokat és a moderátorokat nem tudod így elrejteni.',
	'FOES_UPDATED' => 'Ellenségeid listája sikeresen frissítve.',
	'FOES_UPDATE_ERROR' => 'Nem sikerült az ellenségeid listájának frissítése.',
	'NO_FOES' => 'Nincs ellenség meghatározva',

	'ADD_FRIENDS' => 'Barát hozzáadása',
	'ADD_FRIENDS_EXPLAIN' => 'Több felhasználónevet is megadhatsz, mindegyiket külön sorban írva.',
	'YOUR_FRIENDS' => 'Barátaid',
	'YOUR_FRIENDS_EXPLAIN' => 'Válaszd ki az eltávolítandó felhasználóneveket és kattints a küldés gombra.<br />Tipp: a CTRL gombot lenyomva többet is ki tudsz egyszerre jelölni.',
	'FRIEND_MESSAGE' => 'Üzenet egy baráttól',
	'FRIENDS' => 'Barátok',
	'FRIENDS_EXPLAIN' => 'A barátkezelő segítségével egy baráttal való kapcsolattartás illetve kommunikáció sokkal gyorsabb és egyszerűbb. Ha a megjelenés támogatja, akkor a barátaid akár külön ki is lesznek emelve.',
	'FRIENDS_UPDATED' => 'Barátaid listája sikeresen frissítve.',
	'FRIENDS_UPDATE_ERROR' => 'Nem sikerült a barátaid listájának frissítése.',
	'FRIENDS_ONLINE' => 'Elérhető',
	'FRIENDS_HIDDEN' => 'Rejtett',
	'FRIENDS_OFFLINE' => 'Nem elérhető',
	'NO_FRIENDS' => 'Nincs barát meghatározva',
	'NO_FRIENDS_OFFLINE' => 'Nincs nem elérhető barát',
	'NO_FRIENDS_ONLINE' => 'Nincs elérhető barát',

	'Default' => 'Alapértelmezett',

	'Reserved_Author' => '[ REJTETT ]',
	'Reserved_Topic' => '[ ELZÁRT TÉMA ]',
	'Reserved_Post' => '[ ELZÁRT HOZZÁSZÓLÁS ]',

	'THANKS_RECEIVED' => 'Köszönetet kaptál',

	'RECENT_USER_ACTIVITY' => 'Legfrissebb felhasználó-aktivitás',
	'USER_TOPICS_STARTED' => 'Elindított témák',
	'USER_POSTS' => 'Beküldött hozzászólások',
	'USER_TOPICS_VIEWS' => 'Megtekintett témák',
	'RECENT_USER_STARTED_TITLE' => 'indította: %s',
	'RECENT_USER_STARTED_NAV' => 'A témát indította: %s',
	'RECENT_USER_POSTS_TITLE' => '%s-kor beküldve',
	'RECENT_USER_POSTS_NAV' => 'Témák, amikben %s hozzászólt',
	'RECENT_USER_VIEWS_TITLE' => '%s megtekintett',
	'RECENT_USER_VIEWS_NAV' => 'Témák, amiket %s megtekintett',

	'WARN_NO_BUMP' => 'Te vagy az utolsó hozzászóló ebben a témában: te nem tudsz új hozzászólást beküldeni 24 órán belül, kivéve hogyha valaki más válaszol időközben.',

	'LINK_THIS_TOPIC' => 'Link a témához',
	'LINK_URL' => 'URL',
	'LINK_BBCODE' => 'BBCode',
	'LINK_HTML' => 'HTML',

	'NEWS_POSTED' => 'Hírek böngészése',
	'TOPICS_POSTED' => 'Elindított témák keresése',
	'POSTS_POSTED' => 'Összes hozzászólás keresése',

	'ACCOUNT_DELETION_REQUEST' => '%s nevű felhasználó kérte hozzáférésének a törlésést.',

	'SORT_TOPICS' => 'Témák rendezése',
	'SORT_TOPICS_NEWEST' => 'Legújabb',
	'SORT_TOPICS_OLDEST' => 'Legrégebbi',

	'EDIT_POST_DETAILS' => 'Hozzászólás adatainak szerkesztése',
	'CURRENT_POSTER' => 'Jelenlegi szerző',
	'NEW_POSTER' => 'Új szerző',
	'DETAILS_CHANGED' => '<b>Hozzászólás adatai sikeresen frissítve.</b></span><br /><span class="postdetails">Ez az ablak 3 másodperc múlva bezárul.',

	'Redirect' => 'Átirányítás',
	'Redirect_to' => 'Ha a böngésződ nem támogatja a meta átirányítást, kattints %ide%s, hogy átirányítson',

	'InProgress' => 'Folyamatban',

	'HAPPY_BIRTHDAY' => 'Boldog Születésnapot',

	'DOWNLOAD' => 'Letöltés',
	'DOWNLOADED' => 'Letöltve',
	'FILESIZE' => 'Fájlméret',
	'FILENAME' => 'Fájlnév',
	'FILE_NOT_AUTH' => 'Nincs jogosultságod a fájl letöltéséhez',
	'SHOW_POSTS_FROM' => 'Hozzászólások megjelenítése ettől:',
	'SHOW_POSTS_TO' => ' eddig:',

	'SEE_MORE_DETAILS' => 'További részletek...',
	'UNKNOWN' => 'Ismeretlen',
	'MASS_PM' => 'Tömeges PÜ',
	'TEXT_FORMAT' => 'Formátum',
	'SENDER' => 'Feladó',
	'PM_NOTIFICATION' => 'Hello,<br /><br />Új privát üzeneted érkezett a "{SITENAME}" oldalon.<br /><br />Az üzenet megtekintéséhez kattints az alábbi linkre:<br /><br />{U_INBOX}<br /><br />',

	'GSEARCH' => 'Google keresés',
	'GSEARCH_ENGINE' => 'Google keresőmotor használata',
	'SEARCH_WHAT' => 'Mit keresel',
	'SEARCH_WHERE' => 'Hol keresel',
	'SEARCH_THIS_FORUM' => 'Keresés ebben a fórumban...',
	'SEARCH_THIS_TOPIC' => 'Keresés ebben a témában...',
	'VF_ALL_TOPICS' => 'Összes téma',

	'WHITE_LIST_MESSAGE' => 'Az oldalon szükséges az azonosítód aktiválása email-en keresztül. Kérjük, ellenőrizd, hogy az aktiváló email nincs-e a spam levelek között.',
	'CLICK_RETURN_HOME' => 'Kattints %side%s, hogy visszatérj a főoldalra',

	'RATINGS' => 'Értékelések',

	'ERROR_TABLE' => 'Nem sikerült a %s tábla lekérdezése',

	'SMILEYS' => 'Hangulatjelek',
	'SMILEYS_NO_CATEGORIES' => 'Nincsen kategória létrehozva',
	'SMILEYS_CATEGORY' => 'Kategória',
	'SMILEYS_GALLERY' => 'Hangulatjelek galéria',
	'SMILEYS_STANDARD' => 'Alapértelmezett hangulatjelek',

	'QUICK_LIST' => 'Teljes lista',
	'NORMAL_LIST' => 'Normál lista',

	'RETURN_PAGE' => '%sVissza az előző oldalra%s',
	'FILE_NOT_FOUND' => 'Fájl nem található',
	'FSOCK_DISABLED' => 'FSOCK letiltva',

	'MANAGEMENT' => 'Kezelés',
	'SORT_ORDER' => 'Rendezés',
	'SORT_DIR' => 'Rendezés iránya',

	'CONTACTS' => 'Kapcsolat',

	// Event Registration - BEGIN
	'Reg_Title' => 'Esemény regisztráció',
	'Post_Registration' => 'Esemény regisztrálása',
	'Add_registration' => 'Új esemény regisztrálása',
	'Add_reg_explain' => '&nbsp;&bull; Jelöld be az <i>Aktiválás</i> mezőt, ha a hozzászólásnál szeretnél egy regisztrációs mezőt. Vedd ki a jelölést az elrejtéséhez.<br />&nbsp;&bull; Jelöld be az <i>Újra</i> mezőt, hogy a regisztráció összes adatát kitöröld.<br />&nbsp;&bull; Írj be egy számot a <i>Szabad helyek</i>, hogy korlátozd a lehetőségekre való jelentkezők számát; vagy írj be egy 0-t, vagy hagyd üresen, ha nem szeretnéd korlátozni.',
	'reg_activate' => 'Aktiválás',
	'reg_reset' => 'Újra',
	'Reg_Insert' => 'Jelentkeztél az eseményre.',
	'Reg_Change' => 'Jelentkezés megváltoztatva.',
	'Reg_Confirm' => 'Jelentkezés megerősítve.',
	'Reg_Unregister' => 'Jelentkezés megszakítva.',
	'Reg_Max_Registrations' => 'Erre a lehetőségre elértük a maximális jelentkezők számát. Sajnos nem tudunk több jelentkezést elfogadni.',
	'Reg_No_Slots_Left' => 'Nincs több szabad hely a jelentkezéshez.',
	'Reg_One_Slot_Left' => '1 szabad hely van a jelentkezéshez.',
	'Reg_Slots_Left' => '%s szabad hely van a jelentkezéshez.',
	'Reg_Self_Unregister' => 'Jelentkezés törlése',
	'Reg_Own_Confirmation' => 'Megerősítés',
	'Reg_Own_Confirmed' => 'megerősítve',
	'Reg_Green_Option' => 'Zöld lehetőség',
	'Reg_Blue_Option' => 'Kék lehetőség',
	'Reg_Red_Option' => 'Vörös lehetőség',
	'Reg_Value_Max_Registrations' => 'Szabad helyek',
	'Reg_Do' => 'Jelentkezés',
	'Reg_Maybe' => 'Talán',
	'Reg_Dont' => 'Most nem',
	'Reg_Head_Username' => 'Felhasználó:',
	'Reg_Head_Time' => 'Dátum:',
	'Reg_for' => 'Jelentkezés ideje',
	'Reg_for_explain' => '[ Adj meg 0-t, vagy hagyd üresen, ha soha ne járjon le ]',
	'Reg_no_options_specified' => 'Legalább egy lehetőséget meg kell adnod, amire jelentkezhetnek.',
	'Reg_event_date' => '<b>Esemény ideje: </b>',
	// Event Registration - END

	'REPLY_PREFIX_OLD' => 'Re: ',
	'REPLY_PREFIX' => 'Re: ',

	'READ_ONLY_FORUM' => 'Elnézést, de a fórum jelenleg <b>CSAK OLVASHATÓ</b> módban üzemel, ami azt jelenti, hogy akkor sem tudsz hozzászólást küldeni, ha egyébként lenne rá jogosultságod. Kérjük, később próbáld meg újra.',

	// Tickets Submission - BEGIN
	'TICKET_CAT' => 'Kategória',
	// Tickets Submission - END

	'LIMIT_EDIT_TIME_WARN' => 'Csak a beküldés utáni első <b>%d</b> percben módosíthatod a hozzászólást.',
	'CLEAN_NAME' => 'Tisztítás neve',
	'CLEAN_NAME_EXPLAIN' => 'Csak betűk, számok és kötőjel használata engedélyezett',
	'TOPIC_TAGS' => 'Címkék és kulcsszavak',
	'TOPIC_TAGS_EXPLAIN' => 'Vesszővel válaszd el őket',
	'TOPIC_TAGS_CLOUDS' => 'Címkék és kulcsszavak felhő',
	'TOPIC_TAGS_LIST' => 'Címkék és kulcsszavak listája',
	'TAG_COUNT' => 'Számláló',
	'TAG_TEXT' => 'Címke',
	'TAGS_TEXT' => 'Címke',
	'TAG_RESULTS' => 'Kijelölt címke: <b>%s</b>',
	'TAGS_SEARCH' => 'Címke keresése...',
	'TAGS_SEARCH_NO_RESULTS' => 'Nincs címketalálat!',
	'TAGS_NO_TAGS' => 'Nem határoztál meg címkét',
	'TAGS_NO_TAG' => 'A megadott címke nem létezik',

	'SQL_ERROR_OCCURRED' => 'SQL hiba lépett fel az oldal betöltése közben. Kérjük, értesítsd az oldal adminisztrátorát, ha a hiba állandó.',

	'PLUGIN_DISABLED' => 'Ez a plugin jelenleg le van tiltva.',

	'AJAX_SHOUTBOX' => 'Chat',
	'AJAX_SHOUTBOX_PVT' => 'Privát Chat',
	'AJAX_SHOUTBOX_PVT_LINK' => 'Közvetlen beszélgetés ezzel a felhasználóval',
	'AJAX_SHOUTBOX_PVT_ALERT' => 'Chat felkérésed van',

	// COMMON DB - BEGIN
	'SELECT_SORT_METHOD' => 'Rendezés',
	'ORDER' => 'Rendezési mód',
	'SUBMIT' => 'Elküld',
	'DATE' => 'Dátum',
	'USERID' => 'Felhasználó ID',
	'USERNAME' => 'Felhasználónév',
	'EMAIL' => 'Email',
	'WEBSITE' => 'Honlap',
	'EDIT' => 'Szerkesztés',
	'DELETE' => 'Törlés',
	'YES' => 'Igen',
	'NO' => 'Nem',

	'DB_ITEM_VIEW' => 'Tétel megtekintése',
	'DB_ITEM_UPDATED' => 'Tétel sikeresen frissítve',
	'DB_ITEM_ADD' => 'Tétel hozzáadása',
	'DB_ITEM_ADDED' => 'Tétel sikeresen hozzáadva',
	'DB_ITEM_REMOVED' => 'Tétel sikeresn eltávolítva',
	'DB_ITEM_NO_ITEMS' => 'Nincs tétel',
	'DB_ITEM_CLICK_VIEW_ITEM' => 'Kattints %side%s a hozzáadott tételek megtekintéséhez',
	'DB_ITEM_CLICK_RETURN_ITEMS' => 'Kattints %side%s, hogy visszatérj a listához',
	// COMMON DB - END

	'LOGIN_ATTEMPTS_EXCEEDED' => 'Elérted a maximum (%s) belépési kísérletet. A következő %s percig nem tudsz belépni.',
	'LOGIN_CONFIRM_EXPLAIN' => 'Az azonosítók feltörésének megakadályozása érdekében egy bizonyos számú sikertelen belépési kísérlet után meg kell adnod egy megerősítő kódot. A kód az alábbi képen található. Ha látási (vagy egyéb) problémák folytán nem tudnád elolvasni a kódot, vedd fel a kapcsolatot a oldal %sadminisztrátorával%s.',
	'LOGIN_ERROR_ATTEMPTS' => 'Túllépted az engedélyezett belépési kísérletek számát. Ezért a felhasználóneved és a jelszavad megadása mellett be kell írnod a képen látható megerősítő kódot is.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE' => 'Az Apache szervernek nem sikerült azonosítania téged.',
	'LOGIN_ERROR_PASSWORD' => 'Rossz jelszót adtál meg. Ellenőrizd le a jelszavad, majd próbálkozz újra. Ha továbbra sem tudsz belépni a jelszavaddal, lépj kapcsolatba az oldal %sadminisztrátorával%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT' => 'Nem sikerült átkonvertálni a jelszavad az oldal szoftverének frissítése során. Kérünk, %sigényelj egy új jelszót%s. Ha továbbra is problémáid lennének, lépj kapcsolatba az oldal %sadminisztrátorával%s.',
	'LOGIN_ERROR_USERNAME' => 'Rossz felhasználónevet adtál meg. Ellenőrizd le a felhasználónevet, majd próbálkozz újra. Ha továbbra sem tudsz belépni a felhasználóneveddel, lépj kapcsolatba az oldal %sadminisztrátorával%s.',
	'NO_PASSWORD_SUPPLIED' => 'A bejelentkezéshez meg kell adnod a jelszavadat..',
	'ACTIVE_ERROR' => 'A megadott felhasználónév jelenleg inaktív. Ha problémáid akadnának az azonosítód aktiválásával, lépj kapcsolatba az oldal %sadminisztrátorával%s.',

	'Bytes' => 'Bájt',
	'KB' => 'KB',
	'MB' => 'MB',
	'GB' => 'GB',

	'NO_EVENTS' => 'Nincs tervezett esemény',
	'EVENT_START_DATE' => 'Kezdés dátuma',
	'EVENT_START_TIME' => 'Kezdés ideje',
	'EVENT_END_DATE' => 'Befejezés dátuma',
	'EVENT_END_TIME' => 'Befejezés ideje',
	'EVENT_TITLE' => 'Esemény',
	'EVENT_FORUM' => 'Kategória',

	'MAX_OPTIONS_SELECT' => 'Maximum <strong>%d</strong> választási lehetőséget választhatsz',
	'MAX_OPTION_SELECT' => '<strong>1</strong> választási lehetőséget választhatsz',
	'NO_POLLS' => 'Nincs szavazás',
	'NO_VOTE_OPTION' => 'A szavazáshoz választanod kell egy választási lehetőséget.',
	'NO_VOTES' => 'Nincs szavazat',
	'POLL_ENDED_AT' => 'Szavazás lejárt ekkor: %s',
	'POLL_MAX_OPTIONS' => 'Maximum választási lehetőség',
	'POLL_MAX_OPTIONS_EXPLAIN' => 'Maximum felhasználók által választható válaszlehetőség',
	'POLL_NO_GUESTS' => 'Sajnos a vendégek nem szavazhatnak',
	'POLL_RUN_TILL' => 'Szavazás érvényes eddig: %s',
	'POLL_VOTE_CHANGE' => 'Szavazat megváltoztatásának engedélyezése',
	'POLL_VOTED_OPTION' => 'Erre a válaszra szavaztál',
	'TOO_MANY_VOTE_OPTIONS' => 'Túl sok válaszra próbáltál szavazni.',
	'VIEW_POLL' => 'Szavazás megtekintése',
	'VOTE_SUBMITTED' => 'Szavazat elküldve.',
	'VOTE_CONVERTED' => 'Konvertált szavazásoknál nem lehet megváltoztatni a szavazatot.',

	'FORM_INVALID' => 'A beküldött űtlap érvénytelen. Próbáld meg újra elküldeni.',

	'NO_USERS_FOUND' => 'Nem található felhasználó',
	'POST_IP' => 'IP cím',
	'FIND_USERNAME' => 'felhasználó keresése',
	'FIND_USERNAME_HIDE' => '&quot;Felhasználó keresése&quot; mező elrejtése',
	'FIND_USERNAME_EXPLAIN' => 'Ezzel az űrlappal kereshetsz rá megadott felhasználókra. Nem kötelező az összes mezőt kitölteni. Részleges kereséshez használd a * karaktert. Dátum megadásához az <kbd>ÉÉÉÉ-HH-NN</kbd> dátumformátumot használd, pl. <samp>2004-02-29</samp>. Egy vagy több felhasználó megadásához használd a jelölőnégyzeteket (űrlaptől függően több felhasználó is kijelölhető), és kattints a Kijelöltek választása gombra, hogy visszatérj az előző űrlapra.',

	'AUTH_NONE' => 'SENKI',
	'AUTH_ALL' => 'MINDENKI',
	'AUTH_REG' => 'REG',
	'AUTH_SELF' => 'SAJÁT',
	'AUTH_PRIVATE' => 'PRIVÁT',
	'AUTH_MOD' => 'MOD',
	'AUTH_JADMIN' => 'J ADMIN',
	'AUTH_ADMIN' => 'ADMIN',

	'SHARE' => 'Megosztás',
	'LIKE' => 'Tetszik',
	'UNLIKE' => 'Nem tetszik',
	'LIKE_POST' => 'Tetszik a hozzászólás',
	'UNLIKE_POST' => 'Nem tetszik a hozzászólás',
	'LIKE_TIME' => 'Dátum',
	'LIKE_RECAP' => 'Hozzászólást kedvelő felhasználók',
	'LIKE_COUNTER_YOU' => 'Kedveled a hozzászólást',
	'LIKE_COUNTER_YOU_OTHERS_SINGLE' => 'Te és egy másik felhasználó kedvelitek ezt a hozzászólást.',
	'LIKE_COUNTER_YOU_OTHERS' => 'Te és %s másik felhasználó kedveli ezt a hozzászólást',
	'LIKE_COUNTER_OTHERS' => '%s felhasználó kedveli ezt a hozzászólást',
	'LIKE_COUNTER_OTHERS_SINGLE' => 'Egy felhasználó kedveli ezt a hozzászólást',

	'FRIENDSHIP_STATUS' => 'Barátság állapot',
	'FRIEND_ADD' => 'Hozzáadás barátként',
	'FRIEND_REMOVE' => 'Barát eltávolítása',
	'FOE_ADD' => 'Hozzáadás ellenségként',
	'FOE_REMOVE' => 'Ellenség eltávolítása',

	'SOCIAL_NETWORKS' => 'Közösségi hálózatok',
	'USER_FIRST_NAME' => 'Keresztnév',
	'USER_LAST_NAME' => 'Vezetéknév',
	'FACEBOOK' => 'Facebook',
	'TWITTER' => 'Twitter',

	'INACTIVE_USER' => 'Inaktív felhasználó',
	'SEARCH_MIN_CHARS' => 'Legalább %s karaktert kell beírnod a kereséshez.',

	'EXTRA_STATS_SHOW' => 'Extra Statisztika megjelenítése',
	'EXTRA_STATS_HIDE' => 'Extra Statisztika elrejtése',
	'RESERVED' => 'Tartózkodott',

	'VIEW_TOPICS_DAYS' => 'Témák megjelenítése az előző naptól',
	'VIEW_TOPICS_DIR' => 'Témák rendezésének iránya',
	'VIEW_TOPICS_KEY' => 'Témák rendezése',
	'VIEW_POSTS_DAYS' => 'Hozzászólások megjelenítése az előző naptól',
	'VIEW_POSTS_DIR' => 'Hozzászólások rendezésének iránya',
	'VIEW_POSTS_KEY' => 'Hozzászólások rendezése',

	'AUTHOR' => 'Szerző',
	'POST_TIME' => 'Idő',
	'REPLIES' => 'Válaszok',
	'SUBJECT' => 'Tárgy',
	'VIEWS' => 'Megtekintések',

	'INVALID' => 'Hibás adat.',
	'TOO_LARGE' => 'A megadott érték túl nagy.',
	'TOO_LONG' => 'A megadott érték túl hosszú.',
	'TOO_SHORT' => 'A megadott érték túl rövid.',
	'TOO_SMALL' => 'A megadott érték túl kicsi.',
	'WRONG_DATA' => 'Hibás adat.',

	'ATTACHMENTS' => 'Csatolmányok',
	'ERROR_NO_ATTACHMENT' => 'A letölteni kívánt fájl nem létezik.',
	'NO_FORUM' => 'A kért fórum nem létezik.',
	'NO_TOPIC' => 'A kért téma/hozzászólás nem létezik.',
	'NO_USER' => 'A megadott felhasználó nem létezik.',

	'AJAX_SEARCH' => 'Keresés...',

	'FLICKR' => 'Flickr',
	'GOOGLEPLUS' => 'Google Plus',
	'LINKEDIN' => 'LinkedIn',
	'YOUTUBE' => 'YouTube',

	'MOBILE_STYLE_ENABLE' => 'Mobil megjelenés engedélyezése',
	'MOBILE_STYLE_DISABLE' => 'Mobil megjelenés letiltása',

	'INVALID_SESSION' => 'Érvénytelen munkamenet. Ha a probléma továbbra is fennáll, lépj kapcsolatba az oldal adminisztrátorával.',

	'BACK_TO_TOP' => 'Vissza a tetejére',
	'BACK_TO_PREV' => 'Vissza az előző oldalra',

	'CMS_EDIT_PARENT_BLOCK' => 'Szülő blokk szerkesztése',

	'UPI2DB_DISABLED' => 'UPI2DB letiltva',
	'UPI2DB_LINK_U' => 'UPI2DB olvasatlan',
	'UPI2DB_LINK_M' => 'UPI2DB megjelölve',
	'UPI2DB_LINK_P' => 'UPI2DB állandóan olvasott',
	'UPI2DB_LINK_FULL' => 'UPI2DB Full Info',
	'NEW_POSTS_LINK' => 'Új hozzászólások',
	'LOGIN_LOGOUT_LINK' => 'Belépés/Kilépés',
	'MENU_EMPTY_LINK' => 'Üres Link',

	'IP_BLACKLISTED' => 'Az IP-d, %s blokkolva lett, mert feketelistára került. További információk: <a href="%s">%s</a>.',

	'PRINTABLE_VERSION' => 'Nyomtatható verzió',
	'CHANGE_FONT_SIZE' => 'Betűméret megváltoztatása',

	'FULL_EDITOR' => 'Teljes szerkesztőre váltás',

	)
);

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

$lang['Prune_commands'] = array();
// here you can make more entries if needed
$lang['Prune_commands'][0] = 'Hozzászólás nélküli felhasználók tisztítása';
$lang['Prune_explain'][0] = 'Akik soha nem szóltak hozzá, <b>kivéve</b> a(z) %d napon belül regisztrált új tagokat';
$lang['Prune_commands'][1] = 'Inaktív felhasználók tisztítása';
$lang['Prune_explain'][1] = 'Akik soha nem léptek be, <b>kivéve</b> a(z) %d napon belül regisztrált új tagokat';
$lang['Prune_commands'][2] = 'Nem aktivált felhasználók tisztítása';
$lang['Prune_explain'][2] = 'Akik soha nem lettek aktiválva, <b>kivéve</b> a(z) %d napon belül regisztrált új tagokat';
$lang['Prune_commands'][3] = 'Régen belépett felhasználók tisztítása';
$lang['Prune_explain'][3] = 'Akik több, mint 60 napja léptek be utoljára, <b>kivéve</b> a(z) %d napon belül regisztrált új tagokat';
$lang['Prune_commands'][4] = 'Ritkán hozzászólók tisztítása';
$lang['Prune_explain'][4] = 'Akiknek a hozzászólási átlaga 10 nap alatt kisebb, mint 1, <b>kivéve</b> a(z) %d napon belül regisztrált új tagokat';
$lang['Prune_commands'][5] = 'Nem hosszászóló és régen belépett tagok törlése';
$lang['Prune_explain'][5] = 'Akik soha nem szóltak hozzá, és nem léptek be mostanában, <b>kivéve</b> a(z) %d napon belül regisztrált új tagokat';

// Timezones - BEGIN
$lang['All_times'] = 'Időzóna: %s'; // eg. All times are GMT - 12 Hours (times from next block)

// Time zones short
$lang['tz'] = array(
	'-12' => 'UTC - 12 óra',
	'-11' => 'UTC - 11 óra',
	'-10' => 'UTC - 10 óra',
	'-9.5' => 'UTC - 9:30 óra',
	'-9' => 'UTC - 9 óra',
	'-8' => 'UTC - 8 óra',
	'-7' => 'UTC - 7 óra',
	'-6' => 'UTC - 6 óra',
	'-5' => 'UTC - 5 óra',
	'-4.5' => 'UTC - 4:30 óra',
	'-4' => 'UTC - 4 óra',
	'-3.5' => 'UTC - 3:30 óra',
	'-3' => 'UTC - 3 óra',
	'-2' => 'UTC - 2 óra',
	'-1' => 'UTC - 1 óra',
	'0' => 'UTC',
	'1' => 'UTC + 1 óra',
	'2' => 'UTC + 2 óra',
	'3' => 'UTC + 3 óra',
	'3.5' => 'UTC + 3:30 óra',
	'4' => 'UTC + 4 óra',
	'4.5' => 'UTC + 4:30 óra',
	'5' => 'UTC + 5 óra',
	'5.5' => 'UTC + 5:30 óra',
	'5.75' => 'UTC + 5:45 óra',
	'6' => 'UTC + 6 óra',
	'6.5' => 'UTC + 6:30 óra',
	'7' => 'UTC + 7 óra',
	'8' => 'UTC + 8 óra',
	'8.75' => 'UTC + 8:45 óra',
	'9' => 'UTC + 9 óra',
	'9.5' => 'UTC + 9:30 óra',
	'10' => 'UTC + 10 óra',
	'10.5' => 'UTC + 10:30 óra',
	'11' => 'UTC + 11 óra',
	'11.5' => 'UTC + 11:30 óra',
	'12' => 'UTC + 12 óra',
	'12.75' => 'UTC + 12:45 óra',
	'13' => 'UTC + 13 óra',
	'14' => 'UTC + 14 óra',
	'dst' => '[ <abbr title="nyári időszámítás">nyi</abbr> ]',
);

// These are displayed in the timezone select box
$lang['tz_zones'] = array(
	'-12' => '[UTC - 12] Baker-szigeti idő',
	'-11' => '[UTC - 11] niue-i idő, szamoai zónaidő',
	'-10' => '[UTC - 10] hawaii-aleuti zónaidő, Cook-szigeteki idő',
	'-9.5' => '[UTC - 9,5] Marquise-szigeteki idő',
	'-9' => '[UTC - 9] alaszkai zónaidő, Gambier-szigeteki idő',
	'-8' => '[UTC - 8] csendes-óceáni zónaidő',
	'-7' => '[UTC - 7] sziklás-hegységi zónaidő',
	'-6' => '[UTC - 6] közép zónaidő',
	'-5' => '[UTC - 5] keleti zónaidő',
	'-4.5' => '[UTC - 4,5] venezuelai zónaidő',
	'-4' => '[UTC - 4] atlanti zónaidő',
	'-3.5' => '[UTC - 3,5] újfundlandi zónaidő',
	'-3' => '[UTC - 3] amazoni zónaidő, közép-grönlandi idő',
	'-2' => '[UTC - 2] Fernando de Noronha-i, dél-georgiai és dél-szendvics-szigeteki idő',
	'-1' => '[UTC - 1] azori-szigeteki zónaidő, zöld-foki-szigeteki idő, kelet-grönlandi idő',
	'0' => '[UTC] nyugat-európai idő, greenwichi középidő',
	'1' => '[UTC + 1] közép-európai idő, nyugat-afrikai idő',
	'2' => '[UTC + 2] kelet-európai idő, közép-afrikai idő',
	'3' => '[UTC + 3] moszkvai zónaidő, kelet-afrikai idő',
	'3.5' => '[UTC + 3,5] iráni zónaidő',
	'4' => '[UTC + 4] gulfi zónaidő, szamarai zónaidő',
	'4.5' => '[UTC + 4:30] afganisztáni idő',
	'5' => '[UTC + 5] pakisztáni zónaidő, yekaterinburgi zónaidő',
	'5.5' => '[UTC + 5,5] indiai zónaidő, Sri Lanka-i idő',
	'5.75' => '[UTC + 5,75] nepáli idő',
	'6' => '[UTC + 6] bangladesi idő, bhutáni idő, novoszibirszki zónaidő',
	'6.5' => '[UTC + 6,5] kókusz-szigeteki idő, myanmari idő',
	'7' => '[UTC + 7] indokínai idő, krasznojarszki zónaidő',
	'8' => '[UTC + 8] kínai zónaidő, nyugat-ausztráliai zónaidő, irkutszki zónaidő',
	'8.75' => '[UTC + 8,75] délkelet-nyugat-ausztráliai zónaidő',
	'9' => '[UTC + 9] japán zónaidő, koreai zónaidő, csitai zónaidő',
	'9.5' => '[UTC + 9,5] közép-ausztráliai zónaidő',
	'10' => '[UTC + 10] kelet-ausztráliai zónaidő, vlagyivosztoki zónaidő',
	'10.5' => '[UTC + 10,5] Lord Howe-i zónaidő',
	'11' => '[UTC + 11] Salamon-szigeteki idő, magadáni zónaidő',
	'11.5' => '[UTC + 11,5] Norfolk-szigeti idő',
	'12' => '[UTC + 12] új-zélandi idő, Fidzsi-szigeteki idő, kamcsatkai zónaidő',
	'12.75' => '[UTC + 12,75] Chatham-szigeteki idő',
	'13' => '[UTC + 13] tongai idő, Phoenix-szigeteki idő',
	'14' => '[UTC + 14] Line-szigeti idő',
);
// Timezones - END

// Dates And Times - BEGIN
$lang = array_merge($lang, array(
	'WEEK_DAY_SUNDAY' => 'vasárnap',
	'WEEK_DAY_MONDAY' => 'hétfő',
	'WEEK_DAY_TUESDAY' => 'kedd',
	'WEEK_DAY_WEDNESDAY' => 'szerda',
	'WEEK_DAY_THURSDAY' => 'csütörtök',
	'WEEK_DAY_FRIDAY' => 'péntek',
	'WEEK_DAY_SATURDAY' => 'szombat',

	'TIME_YEAR' => 'Év',
	'TIME_MONTH' => 'Hónap',
	'TIME_DAY' => 'Nap',
	'TIME_HOUR' => 'Óra',
	'TIME_MINUTE' => 'Perc',
	'TIME_SECOND' => 'Másodperc',

	// The value is only an example and will get replaced by the current time on view
	'dateformats' => array(
		'd M Y, H:i' => '01 Jan 2007, 13:37',
		'd M Y H:i' => '01 Jan 2007 13:37',
		'M jS, \'y, H:i' => 'Jan 1st, \'07, 13:37',
		'D M d, Y g:i a' => 'Mon Jan 01, 2007 1:37 pm',
		'F jS, Y, g:i a' => 'January 1st, 2007, 1:37 pm',
		'|d M Y|, H:i' => 'Today, 13:37 / 01 Jan 2007, 13:37',
		'|F jS, Y|, g:i a' => 'Today, 1:37 pm / January 1st, 2007, 1:37 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat' => 'D M d, Y g:i a', // Mon Jan 01, 2007 1:37 pm

	)
);

$lang['datetime'] = array(
	'TODAY' => 'Ma',
	'TOMORROW' => 'Holnap',
	'YESTERDAY' => 'Tegnap',
	'AGO' => array(
		0 => 'kevesebb, mint egy perce',
		1 => '%d perccel ezelőtt',
		2 => '%d perccel ezelőtt',
		60=> '1 órával ezelőtt',
	),

	'Sunday' => 'vasárnap',
	'Monday' => 'hétfő',
	'Tuesday' => 'kedd',
	'Wednesday' => 'szerda',
	'Thursday' => 'csütörtök',
	'Friday' => 'péntek',
	'Saturday' => 'szombat',

	'Sun' => 'vas.',
	'Mon' => 'hét.',
	'Tue' => 'kedd',
	'Wed' => 'szer.',
	'Thu' => 'csüt.',
	'Fri' => 'pén.',
	'Sat' => 'szomb.',

	'SUN_S' => 'V',
	'MON_S' => 'H',
	'TUE_S' => 'K',
	'WED_S' => 'Sze',
	'THU_S' => 'Cs',
	'FRI_S' => 'P',
	'SAT_S' => 'Szo',

	'January' => 'január',
	'February' => 'február',
	'March' => 'Mmárcius',
	'April' => 'április',
	'May' => 'Május',
	'June' => 'Június',
	'July' => 'Július',
	'August' => 'Augusztus',
	'September' => 'szeptember',
	'October' => 'október',
	'November' => 'november',
	'December' => 'december',

	'JAN' => 'jan.',
	'FEB' => 'feb.',
	'MAR' => 'márc.',
	'APR' => 'ápr.',
	'MAY' => 'máj.',
	'JUN' => 'jún.',
	'JUL' => 'júl.',
	'AUG' => 'aug.',
	'SEP' => 'szept.',
	'OCT' => 'okt.',
	'NOV' => 'nov.',
	'DEC' => 'dec.',

	'Jan_short' => 'jan.',
	'Feb_short' => 'feb.',
	'Mar_short' => 'márc.',
	'Apr_short' => 'ápr.',
	'May_short' => 'máj.',
	'Jun_short' => 'jún.',
	'Jul_short' => 'júl.',
	'Aug_short' => 'aug.',
	'Sep_short' => 'szept.',
	'Oct_short' => 'okt.',
	'Nov_short' => 'nov.',
	'Dec_short' => 'dec.',
);

$lang['day_short'] = array($lang['datetime']['Sun'], $lang['datetime']['Mon'], $lang['datetime']['Tue'], $lang['datetime']['Wed'], $lang['datetime']['Thu'], $lang['datetime']['Fri'], $lang['datetime']['Sat']);

$lang['day_long'] = array($lang['datetime']['Sunday'], $lang['datetime']['Monday'], $lang['datetime']['Tuesday'], $lang['datetime']['Wednesday'], $lang['datetime']['Thursday'], $lang['datetime']['Friday'], $lang['datetime']['Saturday']);

$lang['month_short'] = array($lang['datetime']['JAN'], $lang['datetime']['FEB'], $lang['datetime']['MAR'], $lang['datetime']['APR'], $lang['datetime']['MAY'], $lang['datetime']['JUN'], $lang['datetime']['JUL'], $lang['datetime']['AUG'], $lang['datetime']['SEP'], $lang['datetime']['OCT'], $lang['datetime']['NOV'], $lang['datetime']['DEC']);

$lang['month_long'] = array($lang['datetime']['January'], $lang['datetime']['February'], $lang['datetime']['March'], $lang['datetime']['April'], $lang['datetime']['May'], $lang['datetime']['June'], $lang['datetime']['July'], $lang['datetime']['August'], $lang['datetime']['September'], $lang['datetime']['October'], $lang['datetime']['November'], $lang['datetime']['December']);
// Dates And Times - END

//====================================================
// Do not insert anything below this line
//====================================================

?>