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
<b><i>Fejlesztõ</i></b><br />
Érdeklõdés: Heroes Of Might And Magic III, 69, #FF5522<br />
Hely: Homer\'s Head<br />
<br />
<br />
<span style="color: #dd2222;"><b>Bicet</b></span><br />
<b><i>phpBB XS fejlesztõ</i></b><br />
<br />
<br />
<span style="color: #dd2222;"><b>hpl</b></span><br />
<b><i>Külön köszönet minden közremûködõnek</i></b><br />
<br />
<br />
<b><i>Közremûködtek</i></b><br />
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
Érdeklõdés: Icy Phoenix<br />
Hely: <a href="http://www.icyphoenix.com/">http://www.icyphoenix.com</a>
',

  'BBC_IP_CREDITS' => '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>',  
  
  'Home' => 'Home',
  'Forum' => 'Fórum',
  'Category' => 'Témakör',
  'Topic' => 'Téma',
  'Topics' => 'Témák',
  'Replies' => 'Válaszok',
  'Views' => 'Megtekintve',
  'Post' => 'Hozzászólás',
  'Posts' => 'Hozzászólások',
  'Posted' => 'Elküldve',
  'Username' => 'Felhasználónév',
  'Password' => 'Jelszó',
  'Email' => 'Email',
  'Poster' => 'Küldõ',
  'Author' => 'Szerzõ',
  'Time' => 'Idõ',
  'Hours' => 'Óra',
  'Message' => 'Üzenet',
  
  '1_Day' => '1 nap',
  '7_Days' => '7 nap',
  '2_Weeks' => '2 hét',
  '1_Month' => '1 hónap',
  '3_Months' => '3 hónap',
  '6_Months' => '6 hónap',
  '1_Year' => '1 év',
  
  'Go' => 'Mehet',
  'Jump_to' => 'Ugrás',
  'Submit' => 'Elküld',
  'Reset' => 'Töröl',
  'Cancel' => 'Mégsem',
  'Preview' => 'Elõnézet',
  'Confirm' => 'Elfogad',
  'Spellcheck' => 'Helyesírás',
  'Yes' => 'Igen',
  'No' => 'Nem',
  'Enabled' => 'Bekapcsolva',
  'Disabled' => 'Kikapcsolva',
  'Error' => 'Hiba',
  
  'GO' => 'Mehet',
  'JUMP_TO' => 'Ugrás ide: ',
  'SUBMIT' => 'Elküld',
  'RESET' => 'Reset',
  'CANCEL' => 'Mégsem',
  'PREVIEW' => 'Elõnézet',
  'CONFIRM' => 'Elfogad',
  'YES' => 'Igen',
  'NO' => 'Nem',
  'ENABLED' => 'Elgedélyez',
  'DISABLED' => 'Letilt',
  'ERROR' => 'Hiba',
  
  'Next' => 'Következõ',
  'Previous' => 'Elõzõ',
  'Goto_page' => 'Ugrás a köv. oldalra:',
  'Joined' => 'Csatlakozott',
  'IP_Address' => 'IP-cím',
  
  'Select_forum' => 'Fórum kiválasztása',
  'View_latest_post' => 'Legutóbbi hozzászólások',
  'View_newest_post' => 'Legújabb hozzászólások',
  'Page_of' => '<b>%d</b> / <b>%d</b> oldal', // Replaces with: Page 1 of 2 for example

  'ICQ' => 'ICQ szám',
  'AIM' => 'AIM cím',
  'MSNM' => 'MSN Live',
  'YIM' => 'Yahoo Messenger',
  'SKYPE' => 'Skype',
  'Forum_Index' => 'Fórum',  // eg. sitename Forum Index, %s can be removed if you prefer
  
  'Post_new_topic' => 'Új téma nyitása',
  'Reply_to_topic' => 'Hozzászólás a témához',
  'Reply_with_quote' => 'Hozzászólás az elõzmény idézésével',
  
  'Click_return_topic' => '%sVisszatérés%s a témához.', // %s's here are for uris, do not remove!
  'Click_return_login' => 'Kattints %side%s, hogy ismét megpróbáld.',
  'Click_return_forum' => 'Kattints %side%s, hogy visszatérj a fórumba.',
  'Click_view_message' => 'Kattints %side%s a hozzászólásod megtekintéséhez.',
  'Click_return_modcp' => '%sVisszatérés%s a Moderátor vezérlõpulthoz.',
  'Click_return_group' => '%sVisszatérés%s a csoporthoz.',
  
  'Admin_panel' => 'Fórum adminisztráció',
  
  'Board_disabled' => 'Elnézést, de az oldal jelenleg nem elérhetõ. Kérlek nézz vissza késõbb.',
  
// Global Header strings
  'Registered_users' => 'Regisztrált felhasználók:',
  'Browsing_forum' => 'Jelenlévõ fórumozók:',
  'Online_users_zero_total' => 'Összesen <b>0</b> felhasználó van jelen :: ',
  'Online_users_total' => 'Jelenleg <b>%d</b> felhasználó van itt :: ',
  'Online_user_total' => 'Jelenleg <b>%d</b> felhasználó van itt :: ',
  'AC_Online_users_zero_total' => 'Jelenleg nincs felhasználó a csevegõben: ',
  'AC_Online_users_total' => 'Összesen <b>%d</b> felhasználó a csevegõben: ',
  'AC_Online_user_total' => 'Összesen <b>1</b> felhasználó a csevegõben: ',
  'Reg_users_zero_total' => '0 regisztrált, ',
  'Reg_users_total' => '%d regisztrált, ',
  'Reg_user_total' => '%d regisztrált, ',
  'Hidden_users_zero_total' => '0 rejtett és ',
  'Hidden_user_total' => '%d rejtett és ',
  'Hidden_users_total' => '%d rejtett és ',
  'Guest_users_zero_total' => '0 vendég',
  'Guest_users_total' => '%d vendég',
  'Guest_user_total' => '%d vendég',
  'Record_online_users' => 'A legtöbb felhasználó (<b>%s</b> fõ) %s-kor volt.', // first %s = number of users, second %s is the date.

  'Admin_online_color' => '%sAdminisztrátor%s',
  'Mod_online_color' => '%sModerátor%s',
  
  'You_last_visit' => 'Legutolsó látogatásod dátuma: %s', // %s replaced by date/time
  'Current_time' => 'Pontos idõ: %s', // %s replaced by time
  
  'Search_new' => 'Friss hozzászólások',
  'Search_your_posts' => 'Üzeneteid megtekintése',
  'Search_unanswered' => 'Megválaszolatlan üzenetek megtekintése',
  
  'Register' => 'Regisztráció',
  'Profile' => 'Profil',
  'Edit_profile' => 'Profil szerkesztése',
  'Search' => 'Keresés',
  'Memberlist' => 'Taglista',
  'FAQ' => 'Gy.I.K.',
  'KB_title' => 'Tudásbázis',
  'BBCode_guide' => 'BBCode kalauz',
  'Usergroups' => 'Csoportok',
  'Last_Post' => 'Legutolsó üzenet',
  'Moderator' => 'Moderátor',
  'Moderators' => 'Moderátorok',
  
// Stats block text
  'Posted_articles_zero_total' => 'Még nem küldtek be hozzászólást.', // Number of posts
  'Posted_articles_total' => '<b>%d</b> hozzászólás olvasható.', // Number of posts
  'Posted_article_total' => '<b>%d</b> hozzászólás olvasható.', // Number of posts
  'Registered_users_zero_total' => 'Még nincs regisztrált felhasználó.', // # registered users
  'Registered_users_total' => '<b>%d</b> regisztrált felhasználónk van.', // # registered users
  'Registered_user_total' => '<b>%d</b> regisztrált felhasználónk van.', // # registered users
  'Newest_user' => 'Legújabb regisztrált tagunk: <b>%s%s%s</b>', // a href, username, /a
  
  'No_new_posts_last_visit' => 'Nincsen új hozzászólás a legutolsó látogatásod óta.',
  
  'No_new_posts_global_announcement' => 'Nincs új [ Gl. esemény ]',
  'New_posts_global_announcement' => 'Új [ Gl. esemény ]',
  'No_new_posts_announcement' => 'Nincs új [ Esemény ]',
  'New_posts_announcement' => 'Új [ Esemény ]',
  'No_new_posts_sticky' => 'Nincs új [ Fontos ] hozzászólás',
  'New_posts_sticky' => 'Új [ Fontos ] hozzászólások',
  'No_new_posts_locked' => 'Nincsenek új [ Lezárt ] hozzászólás',
  'New_posts_locked' => 'Új [ Lezárt ] hozzászólások',
  'No_new_posts' => 'Nincsenek új hozzászólások',
  'New_posts' => 'Új hozzászólások',
  'New_post' => 'Új hozzászólás',
  'No_new_posts_hot' => 'Nincs új [ Népszerû ] hozzászólás',
  'New_posts_hot' => 'Új [ Népszerû ] hozzászólások',
  
  'Forum_no_new_posts' => 'Nincs új [Forum] hozzászólás',
  'Forum_new_posts' => 'Új [Forum] hozzászólás',
  'Cat_no_new_posts' => 'Nincs új [Kategória] hozzászólás',
  'Cat_new_posts' => 'Új [Kategória] hozzászólás',
  'Forum_is_locked' => 'Lezárt fórum',
  
// Login
  'Enter_password' => 'A belépéshez add meg a felhasználóneved és jelszavad.',
  'Login' => 'Belépés',
  'Logout' => 'Kilépés',
  'Forgotten_password' => 'Elfelejtettem a jelszót!',
  'AUTOLOGIN' => 'Log me on automatically each visit',
  'Error_login' => 'Hibás, vagy inaktív felhasználónevet és/vagy hibás jelszót adtál meg!',

// Index page
  'No_Posts' => 'Nincs hozzászólás.',
  'No_forums' => 'Nincsenek fórumok.',
  
  'Private_Message' => 'Privát üzenet',
  'Private_Messages' => 'Privát üzenetek',
  'Who_is_Online' => 'Ki online?',
  
  'Mark_all_forums' => 'Összes fórum megjelölése olvasottként',
  'Forums_marked_read' => 'Összes fórum megjelölve olvasottként.',
  
// Viewforum
  'View_forum' => 'Fórum megtekintése',
  
  'Forum_not_exist' => 'A kiválasztott fórum nem létezik.',
  'Reached_on_error' => 'Hiba az kért oldal elérésében.',
  
  'Display_topics' => 'Összes téma mutatása',
  'All_Topics' => 'Összes téma',
  
  'Topic_News_nb' => 'Hírek',
  'Topic_global_announcement_nb' => 'Globális esemény',
  'Topic_Announcement_nb' => 'Esemény',
  'Topic_Sticky_nb' => 'Fontos',
  'Topic_Moved_nb' => 'Áthozott',
  'Topic_Poll_nb' => 'Szavazat',
  'Topic_Event_nb' => 'Esemény',
  'Topic_Announcement' => '<b>Esemény:</b>',
  'Topic_Sticky' => '<b>Fontos:</b>',
  'Topic_Moved' => '<b>Árnyék:</b>',
  'Topic_Poll' => '<b>[ Szavazás ]</b>',
  'Topic_Event' => '<b>Esemény:</b>',
  'Topic_global_announcement' => '<b>Globális esemény:</b>',
  'Post_global_announcement' => 'Globális esemény',
  
  
  'Mark_all_topics' => 'Összes téma megjelölése olvasottként',
  'Topics_marked_read' => 'Összes téma megjelölve olvasottként.',

/*
  'Rules_post_can' => '<b>Készíthetsz</b> új témákat ebben a fórumban.',
  'Rules_post_cannot' => '<b>Nem</b> készíthetsz új témákat ebben a fórumban.',
  'Rules_reply_can' => '<b>Válaszolhatsz</b> egy témára ebben a fórumban.',
  'Rules_reply_can_own' => '<b>Tudsz</b> a saját témádban válaszolni',
  'Rules_reply_cannot' => '<b>Nem</b> válaszolhatsz egy témára ebben a fórumban.',
  'Rules_edit_can' => '<b>Módosíthatod</b> a hozzászólásaidat a fórumban.',
  'Rules_edit_cannot' => '<b>Nem</b> módosíthatod a hozzászólásaidat a fórumban.',
  'Rules_delete_can' => '<b>Törölheted</b> a hozzászólásaidat a fórumban.',
  'Rules_delete_cannot' => '<b>Nem</b> törölheted a hozzászólásaidat a fórumban.',
  'Rules_vote_can' => '<b>Szavazhatsz</b> ebben a fórumban.',
  'Rules_vote_cannot' => '<b>Nem</b> szavazhatsz ebben fórumban.',
*/
  'Rules_post_can' => '<b>Nyithatsz</b> új témákat',
  'Rules_post_cannot' => '<b>Nem nyithatsz</b> új témát',
  'Rules_reply_can' => '<b>Válaszolhatsz</b> a témára.',
  'Rules_reply_can_own' => '<b>Tudsz válaszolni</b> a saját témádban.',
  'Rules_reply_cannot' => '<b>Nem válaszolhatsz</b> a témára.',
  'Rules_edit_can' => '<b>Módosíthatod</b> a hozzászólásaidat.',
  'Rules_edit_cannot' => '<b>Nem módosíthatod</b> a hozzászólásaidat.',
  'Rules_delete_can' => '<b>Törölheted</b> a hozzászólásaidat.',
  'Rules_delete_cannot' => '<b>Nem törölheted</b> a hozzászólásaidat.',
  'Rules_vote_can' => '<b>Szavazhatsz</b>.',
  'Rules_vote_cannot' => '<b>Nem szavazhatsz</b>.',
  'Rules_moderate' => '<b>%sModerálhatod%s</b> ezt a fórumot.', // %s replaced by a href links, do not remove!
  
//  'No_topics_post_one' => 'Nincsenek témák a fórumban.<br />Kattints az <b>Új téma készítésére</b>.',
  'No_topics_post_one' => 'Nincsenek témák a fórumban vagy a megadott feltételeknek nem felel meg egyik téma sem.<br />Kattints az <b>Új téma készítésére</b> vagy adj meg más feltételt.',

// Viewtopic
  'View_topic' => 'Téma megtekintése',
  
  'Guest' => 'Vendég',
  'Post_subject' => 'Hozzászólás témája',
  'View_next_topic' => 'Következõ téma megtekintése',
  'View_previous_topic' => 'Elõzõ téma megtekintése',
  'Submit_vote' => 'Szavazás küldése',
  'View_results' => 'Eredmény megtekintése',
  
  'No_newer_topics' => 'Nincsenek újabb témák a fórumban.',
  'No_older_topics' => 'Nincsenek régbbi témák a fórumban.',
  'Topic_post_not_exist' => 'A téma vagy hozzászólás nem létezik.',
  'No_posts_topic' => 'Nincs hozzászólás a témában.',
  
  'Display_posts' => 'Hozzászólások megtekintése',
  'All_Posts' => 'Összes',
  'Newest_First' => 'Újak elõre',
  'Oldest_First' => 'Régebbiek elõre',
  
  'Back_to_top' => 'Vissza az elejére',
  'Back_to_bottom' => 'Lap aljára',
  
  'Read_profile' => 'Felhasználó profiljának megtekintése',
  'Send_email' => 'Email küldése',
  'Visit_website' => 'Felhasználó weblapjának megtekintése',
  'ICQ_status' => 'ICQ státusz',
  'Edit_delete_post' => 'Hozzászólás szerkesztése/törlése',
  'View_IP' => 'Felhasználó IP-címe',
  'Delete_post' => 'Hozzászólás törlése',
  
  'wrote' => 'írta', // proceeds the username and is followed by the quoted text
  'Quote' => 'Idézet', // comes before bbcode quote output.
  'Code' => 'Kód', // comes before bbcode code output.
  
  'Edited_time_total' => 'A hozzászólást %s szerkesztette %s-kor; eddig %d alkalommal', // Last edited by me on 12 Oct 2001; edited 1 time in total
  'Edited_times_total' => 'A hozzászólást %s szerkesztette %s-kor; eddig %d alkalommal', // Last edited by me on 12 Oct 2001; edited 2 times in total
  
  'Lock_topic' => 'Téma lezárása',
  'Unlock_topic' => 'Téma megnyitása',
  'Move_topic' => 'Téma áthelyezése',
  'Delete_topic' => 'Téma törlése',
  'Split_topic' => 'Téma szétválasztása',
  
  'Stop_watching_topic' => 'Leiratkozás a témáról',
  'Start_watching_topic' => 'Feliratkozás a témára',
  'No_longer_watching' => 'Téma figyelése megszüntetve!',
  'You_are_watching' => 'Feliratkoztál a témára.',
  
  'Total_votes' => 'Összes szavazat',
  
// Posting/Replying (Not private messaging!)
  'Message_body' => 'Üzenet tartalma',
  'Topic_review' => 'Téma elõnézet',
  
  'No_post_mode' => 'Nincs hozzászólás-típus kiválasztva.', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normally)
  
  'Post_a_new_topic' => 'Új téma küldése',
  'Post_a_reply' => 'Új válasz küldése',
  'Post_topic_as' => 'Téma küldése, mint',
  'Edit_Post' => 'Hozzászólás szerkesztése',
  'Options' => 'Beállítások',
  
  'PM_Read' => 'Olvasott PM',
  'PM_Unread' => 'Olvasatlan PM',
  'PM_Replied' => 'Megválaszolt PM',
  
  'Post_Announcement' => 'Esemény',
  'New_post_Announcement' => 'Új esemény',
  'Post_Sticky' => 'Fontos',
  'New_post_Sticky' => 'Új fontos',
  'Post_Normal' => 'Normál',
  
  'Confirm_delete' => 'Biztosan törölni akarod a hozzászólást?',
  'Confirm_delete_poll' => 'Biztosan törölni akarod a szavazást?',
  
  'Flood_Error' => 'Nem küldhetsz rövid idõn belül több hozzászólást, várj egy kicsit.',
  'Empty_subject' => 'Új téma indításakor add meg a címét.',
  'Empty_message' => 'Nem küldhetsz üres hozzászólást.',
  'Forum_locked' => 'Lezárt fórum: ide nem küldhetsz témát, választ, nem szerkesztheted a hozzászólásaidat.',
  'Topic_locked' => 'Lezárt téma: ide nem írhatsz választ, és nem szerkesztheted a hozzászólásaidat.',
  'No_post_id' => 'Nincs hozzászólás azonosító meghatározva.',
  'No_topic_id' => 'Válaszüzenet küldéséhez válassz ki egy témát.',
  'No_valid_mode' => 'Csak küldhetsz, szerkeszthetsz, vagy idézhetsz hozzászólást. Lépj vissza, és próbáld újra.',
  'No_such_post' => 'Nincsen ilyen hozzászólás. Lépj vissza, és próbáld újra.',
  'Edit_own_posts' => 'Csak szerkesztheted a hozzászólásaidat.',
  'Delete_own_posts' => 'Csak törölheted a hozzászólásaidat.',
  'Cannot_delete_replied' => 'Nem törölhetsz olyan hozzászólást, melyre már érkezett válasz.',
  'Cannot_delete_poll' => 'Nem törölhetsz aktív szavazást.',
  'Empty_poll_title' => 'Adj meg egy címet a szavazásnak.',
  'To_few_poll_options' => 'Legalább két választási lehetõséget adj meg.',
  'To_many_poll_options' => 'Túl sok választási lehetõséget adtál meg.',
  'Post_has_no_poll' => 'A hozzászóláshoz nem tartozik szavazás.',
  'Already_voted' => 'Egyszer már szavaztál.',
  'No_vote_option' => 'Válassz egy lehetõséget a szavazásnál.',
  
  'Add_poll' => 'Szavazás hozzáadása',
  'Add_poll_explain' => 'Ha nem akarsz szavazást adni a témához, hagyd üresen a mezõket.',
  'Poll_question' => 'A szavazás kérdése',
  'Poll_option' => 'Választási lehetõség',
  'Add_option' => 'Hozzáadás',
  'Update' => 'Frissítés',
  'Delete' => 'Töröl',
  'Poll_for' => 'A szavazás érvényes',
  'Days' => 'nap', // This is used for the Run poll for ... Days + in admin_forums for pruning
  'Poll_for_explain' => '[ Hagyd üresen (vagy 0), ha soha sem jár le a szavazás. ]',
  'Delete_poll' => 'Szavazás törlése',
  
  'Disable_HTML_post' => 'HTML kikapcsolása a hozzászólásban',
  'Disable_ACRO_AUTO_post' => 'Akronizmusok és Autolinkek tiltása ebben a hozzászólásban',
  'Disable_BBCode_post' => 'BBCode kikapcsolása a hozzászólásban',
  'Disable_Smilies_post' => 'Emotikonok kikapcsolása a hozzászólásban',
  
  'HTML_is_ON' => 'HTML <u>BE</u>',
  'HTML_is_OFF' => 'HTML <u>KI</u>',
  'BBCode_is_ON' => '%sBBCode%s <u>BE</u>',
  'BBCode_is_OFF' => '%sBBCode%s <u>KI</u>',
  'Smilies_are_ON' => 'Emotikonok <u>BE</u>',
  'Smilies_are_OFF' => 'Emotikonok <u>KI</u>',
  
  'Attach_signature' => 'Aláírás hozzáadása (az aláírás megváltoztatható a profilban)',
  'Notify' => 'Értesítés, ha válasz érkezik',
  'Delete_post' => 'Hozzászólás törlése',
  
  'Stored' => 'A hozzászólás sikeresen bekerült a fórumba!',
  'Deleted' => 'A hozzászólás törlése sikerült.',
  'Poll_delete' => 'A szavazás törlése sikerült.',
  'Vote_cast' => 'Szavazás elfogadva.',
  
  'Topic_reply_notification' => 'Téma emlékeztetõ',
  
  'Emoticons' => 'Emotikonok',
  'More_emoticons' => 'A többi emotikon megtekintése',
  
// Private Messaging
  'Private_Messaging' => 'Privát üzenetek',
  
  'Login_check_pm' => 'Privát üzeneteid olvasásához be kell jelentkezned',
  'New_pms' => '%d új privát üzeneted van',
  'New_pm' => '%d új privát üzeneted van',
  'No_new_pm' => 'Nincsen új privát üzeneted',
  'Unread_pms' => '%d olvasatlan privát üzeneted van.', // You have 2 new messages
  'Unread_pm' => '%d olvasatlan privát üzeneted van.', // You have 1 new message
  'No_unread_pm' => 'Nincsen olvasatlan privát üzeneted.',
  'You_new_pm' => 'Új privát üzenet érkezett!',
  'You_new_pms' => 'Új privát üzenetek érkeztek!',
  'You_no_new_pm' => 'Nincs új privát üzenet.',
  
  'Unread_message' => 'Olvasatlan üzenetek',
  'Read_message' => 'Olvasott üzenetek',
  
  'Read_pm' => 'Üzenet olvasása',
  'Post_new_pm' => 'Üzenet küldése',
  'Post_reply_pm' => 'Válasz az üzenetre',
  'Post_quote_pm' => 'Üzenet idézése',
  'Edit_pm' => 'Üzenet szerkesztése',
  
  'Inbox' => 'Érkezett fiók',
  'Outbox' => 'Kimenõ fiók',
  'Savebox' => 'Mentés fiók',
  'Sentbox' => 'Elküldött fiók',
  'Flag' => 'Jelölés',
  'Subject' => 'Téma',
  'From' => 'Feladó',
  'To' => 'Címzett',
  'Date' => 'Dátum',
  'Mark' => 'Kijelölés',
  'Sent' => 'Elküldött',
  'Saved' => 'Elmentett',
  'Delete_marked' => 'Kijelöltek törlése',
  'Delete_all' => 'Mindegyik törlése',
  'Save_marked' => 'Kijelöltek mentése',
  'Download_marked' => 'Kijelölt letöltése',
  'Mailbox' => 'Levelezés',
  'Save_message' => 'Üzenet mentése',
  'Delete_message' => 'Üzenet törlése',
  'Next_privmsg' => 'Következõ privát üzenet',
  'Previous_privmsg' => 'Elõzõ privát üzenet',
  'No_newer_pm' => 'Nincs újabb privát üzenet.',
  'No_older_pm' => 'Nincs régebbi privát üzenet.',
  'Display_messages' => 'Üzenetek megjelenítése',
  'All_Messages' => 'Minden üzenet',
  
  'No_messages_folder' => 'Nincs üzeneted ebben a fiókban.',
  
  'PM_disabled' => 'Nincs lehetõség privát üzenet küldésére.',
  'Cannot_send_privmsg' => 'Sajnos nem küldhetsz privát üzeneteket. Lépj kapcsolatba az Adminisztrátorral.',
  'No_to_user' => 'Az üzenet küldéséhez meg kell adnod a címzettet.',
  'No_such_user' => 'Ilyen nevû felhasználó nem létezik.',
  
  'Disable_HTML_pm' => 'HTML kikapcsolása az üzenetben',
  'Disable_ACRO_AUTO_pm' => 'Letiltva az Akronizmusok és az Autolinkek ebben az üzenetben',
  'Disable_BBCode_pm' => 'BBCode kikapcsolása az üzenetben',
  'Disable_Smilies_pm' => 'Emotikonok kikapcsolása az üzenetben',
  
  'Message_sent' => 'Üzenet elküldve.',
  
  'Click_return_inbox' => 'Kattints %side%s, hogy visszatérj az Érkezett üzenetekhez.',
  'Click_return_index' => 'Kattints %side%s, hogy visszatérj a Tartalomjegyzékhez.',
  
  'Send_a_new_message' => 'Új privát üzenet küldése',
  'Send_a_reply' => 'Válasz a privát üzenetre',
  'Edit_message' => 'Privát üzenet szerkesztése',
  
  'Notification_subject' => 'Új privát üzenet érkezett!',
  
  'Find_username' => 'Felhasználónév keresése',
  'Find' => 'Találat',
  'No_match' => 'Nincs találat.',
  
  'No_post_id' => 'Nincs üzenet ID megadva',
  'No_such_folder' => 'Nem létezik ilyen fiók.',
  'No_folder' => 'Nincs fiók meghatározva.',
  
  'Mark_all' => 'Mind',
  'Unmark_all' => 'Semelyik',
  
  'Confirm_delete_pm' => 'Biztosan törölni akarod az üzenetet?',
  'Confirm_delete_pms' => 'Biztosan törölni akarod az üzeneteket?',
  
  'Inbox_size' => 'Az Érkezett fiók %d%%-a telt meg.', // eg. Your Inbox is 50% full
  'Sentbox_size' => 'Az Elküldött fiók %d%%-a telt meg.',
  'Savebox_size' => 'A Mentés fiók %d%%-a telt meg.',
  
  'Click_view_privmsg' => 'Kattints %side%s az Érkezett fiókod megtekintéséhez.',

// Profiles/Registration
  'Viewing_user_profile' => 'Profil megtekintése :: %s', // %s is username
  'About_user' => '%s adatlapja', // %s is username
//Start Quick Administrator User Options and Information MOD
  'Quick_admin_options' => 'Gyors adminisztrátori felhasználó-információ és opciók',
  'Admin_edit_profile' => 'Felhasználói profil szerkesztése',
  'Admin_edit_permissions' => 'Felhasználói jogosultságok szerkesztése',
  'User_active' => '<b>Aktív</b> felhasználó',
  'User_not_active' => '<b>Nem aktív</b> felhasználó',
  'Username_banned' => '<b>Banolt</b> felhasználó',
  'Username_not_banned' => '<b>Nem banolt</b> felhasználó',
  'User_email_banned' => '<b>Banolt</b> email cím [ %s ]',
  'User_email_not_banned' => '<b>Nem banolt</b> email cím [ %s ]',
//End Quick Administrator User Options and Information MOD
  'Preferences' => 'Beállítások',
  'Items_required' => 'A csillaggal megjelölt mezõk kitöltése kötelezõ.',
  'Registration_info' => 'Regisztráció információ',
  'Profile_info' => 'Profil információ',
  'Profile_info_warn' => 'Ezek az információk mindenki számára láthatóak lesznek.',
  'Avatar_panel' => 'Avatar beállítás',
  'Avatar_gallery' => 'Avatar galéria',
  
  'Website' => 'Honlap',
  'Location' => 'Tartózkodási hely',
  'Contact' => 'Kapcsolat: ',
  'Email_address' => 'Email cím',
  'Email' => 'Email',
  'Send_private_message' => 'Privát üzenet küldése',
  'Hidden_email' => '[ Rejtett ]',
  'Search_user_posts' => '%s hozzászólásainak keresése',
  'Interests' => 'Érdeklõdési kör',
  'Occupation' => 'Foglalkozás',
  'Poster_rank' => 'Hozzászóló Rang',
  
  'Total_posts' => 'Összes hozzászólása',
  'User_post_pct_stats' => 'Az összes %.2f%%-ka', // 1.25% of total
  'User_post_day_stats' => 'Naponta %.2f hozzászólás', // 1.5 posts per day
  'Search_user_posts' => '%s minden hozzászólásának megtekintése', // Find all posts by username
  'Search_user_topics_started' => 'Minden %s által indított téma megtekintése', // Find all topics started by username
  
  'No_user_id_specified' => 'A felhasználó nem létezik.',
  'Wrong_Profile' => 'Nem módosíthatod más profilját.',
  
// Invision View Profile - BEGIN
  'Invision_Active_Stats' => 'Aktivitási statisztika',
  'Invision_Communicate' => 'Elérhetõség',
  'Invision_Info' => 'Információ',
  'Invision_Member_Group' => 'Csoporttagság',
  'Invision_Member_Title' => 'Tagsági cím',
  'Invision_Most_Active' => 'Itt van: ',
  'Invision_Most_Active_Posts' => '%s hozzászólás ebben a fórumban',
  'Invision_Details' => 'Hozzászólás részletezés',
  'Invision_PPD_Stats' => 'Hozzászólás naponta',
  'Invision_Signature' => 'Aláírás',
  'Invision_Website' => 'Weboldal',
  'Invision_Total_Posts' => 'Összes hozzászólás',
  'Invision_User_post_pct_stats' => '( összes hozzászólás %.2f%%-a az övé )',
  'Invision_User_post_day_stats' => '%.2f hozzászólás per nap',
  'Invision_Search_user_posts' => 'Tagnak az összes hozzászólásának megkeresése',
  'Invision_Posting_details' => 'Hozzászólás részletezés',
// Invision View Profile - END

  'Only_one_avatar' => 'Csak egy avatart válassz ki.',
  'File_no_data' => 'A megadott webcím nem tartalmaz adatot!',
  'No_connection_URL' => 'A megadott webcímhez nem lehet csatlakozni!',
  'Incomplete_URL' => 'A megadott webcím hiányos.',
  'Wrong_remote_avatar_format' => 'A távoli avatar webcíme nem érvényes.',
  'No_send_account_inactive' => 'A jelszó sajnos nem kérhetõ le, mivel a felhasználónév jelenleg inaktív. Lépj kapcsolatba az Adminisztrátorral.',
  
  'Always_smile' => 'Mindig engedélyezze a emotikonokat',
  'Always_html' => 'Mindig engedélyezze a HTML-t',
  'Always_bbcode' => 'Mindig engedélyezze a BBCode-ot',
  'Always_add_sig' => 'Mindig csatolja az aláírásomat',
  'Always_notify' => 'Mindig értesítsen, ha válasz érkezik',
  'Always_notify_explain' => 'Küld egy emailt, ha hozzászólás érkezik az adott témában. Ez bármikor megváltoztatható, ha egy újabb hozzászólást küldesz.',
  
  'Board_style' => 'Sablon',
  'Board_lang' => 'Nyelv',
  'No_themes' => 'Nincsenek sablonok az adatbázisban.',
  'Timezone' => 'Idõzóna',
  'Date_format' => 'Dátum formátum',
  'Date_format_explain' => 'A PHP <a href=\'http://hu.php.net/manual/hu/function.date.php#AEN22851\' target=\'_other\'>date()</a> függvénye szerint használandó.',
  'Signature' => 'Aláírás',
  'Signature_explain' => 'A hozzászólások végére kerülõ szöveg. Legfeljebb %d karakter lehet.',
  'Public_view_email' => 'Email-cím megjelenítése',
  
  'Current_password' => 'Jelenlegi jelszó',
  'New_password' => 'Új jelszó',
  'Confirm_password' => 'Jelszó megerõsítése',
  'Confirm_password_explain' => 'Ha meg szeretnéd változtatni a jelszavad, vagy az email címed, meg kell adnod a jelenlegi jelszavad.',
  'password_if_changed' => 'Csak akkor kell megadnod a jelszót, ha meg akarod változtatni.',
  'password_confirm_if_changed' => 'A fenti jelszó érvényesítéséhez szükséges.',
  
  'Avatar' => 'Avatar',
  'Avatar_explain' => 'Egy kép, mely a hozzászólásokban a nevednél lesz látható.<br />Az avatar nem lehet szélesebb, mint %d pixel, és nem lehet magasabb, mint %d pixel. A mérete nem lehet nagyobb, mint %d KByte.',
  'Upload_Avatar_file' => 'Avatar feltöltése a számítógéprõl',
  'Upload_Avatar_URL' => 'Avatar feltöltése webcímrõl',
  'Upload_Avatar_URL_explain' => 'Írd be az avatar képének webcímét (a kép át lesz másolva erre az oldalra).',
  'Pick_local_Avatar' => 'Avatar kiválasztása a galériából',
  'Link_remote_Avatar' => 'Avatar képének belinkelése',
  'Link_remote_Avatar_explain' => 'Írd be az Avatar képének webcímét, amelyet be szeretnél linkelni (a kép nem lesz átmásolva erre az oldalra).',
  'Avatar_URL' => 'Avatar képének webcíme',
  'Select_from_gallery' => 'Avatar kiválasztása a galériából',
  'View_avatar_gallery' => 'Galéria megtekintése',
  
  'Select_avatar' => 'Avatar kiválasztása',
  'Return_profile' => 'Mégsem',
  'Select_category' => 'Kategória kiválasztása',
  
  'Delete_Image' => 'Kép törlése',
  'Current_Image' => 'Jelenlegi kép',
  
  'Notify_on_privmsg' => 'Értesítés új privát üzenet érkezésekor',
  'Popup_on_privmsg' => 'Felugró ablak új privát üzenet érkezésekor',
  'Popup_on_privmsg_explain' => 'Néhány sablon új ablakot nyit, ha új üzeneted érkezik.',
  'Hide_user' => 'Online jelenlét elrejtése',
  
  'Profile_updated' => 'A profil megváltozott!',
  'Profile_updated_inactive' => 'A profil megváltozott, de mivel néhány alapvetõ információn változtattál, így a hozzáférésed inaktívra változott. Ellenõrizd az email-címedet, melyben megtalálod az újraaktiváláshoz szükséges információkat, vagy ha ehhez adminisztrátori jóváhagyás szükséges, várj míg õ reaktiválja a hozzáférésedet.',
  
  'Password_mismatch' => 'A beírt jelszavak nem egyeznek meg.',
  'Current_password_mismatch' => 'A jelenlegi jelszó nem egyezik meg az adatbázisban találhatóval.',
  'Password_long' => 'A jelszó nem lehet több mint 32 karakter.',
  'Too_many_registers' => 'Egyszerre túl sok regisztrációval próbálkoztál. Próbáld késõbb.',
  'Username_taken' => 'Ez a felhasználónév már foglalt.',
  'Username_invalid' => 'A felhasználónév olyan érvénytelen karaktert tartalmaz, mint például a \'.',
  'Username_disallowed' => 'Ez a felhasználónév nem engedélyezett.',
  'Email_taken' => 'Ezt az email-címet már regisztrálta egy másik felhasználó.',
  'Email_banned' => 'Ez az email-cím le van tiltva.',
  'Email_invalid' => 'Érvénytelen email-cím.',
  'Signature_too_long' => 'Túl hosszú aláírás.',
  'Fields_empty' => 'A csillaggal jelölt mezõk kitöltése kötelezõ.',
  'Avatar_filetype' => 'Az avatar kép típusa csak JPG, GIF vagy PNG lehet.',
  'Avatar_filesize' => 'Az avatar kép nem lehet nagyobb mint %d KByte.', // The avatar image file size must be less than 6 KB
  'Avatar_imagesize' => 'Az avatar nem lehet nagyobb mint %d pixel széles és %d pixel magas.',
  
  'Welcome_subject' => 'Üdvözlünk a %s fórumban!', // Welcome to my.com forums
  'New_account_subject' => 'Új felhasználó',
  'Account_activated_subject' => 'Felhasználó aktiválva.',
  
  'Account_added' => 'Köszönjük a regisztrációdat, mely sikeresen befejezõdött. Most már bejelentkezhetsz a neveddel, és a hozzá tartozó jelszóval.',
  'Account_inactive' => 'A regisztráció sikeres volt, de a belépés elõtt még aktiválnod kell az azonosítódat.<br />Az ezzel kapcsolatos információkért nézd meg a regisztrációnál megadott email-címet.',
  'Account_inactive_admin' => 'A regisztráció sikeres volt, de a fórum használatához az Adminisztrátor jóváhagyása szükséges.<br />Rövidesen értesít a regisztrációd befejezésérõl, a felhasználóneved aktiválásáról.',
  'Account_active' => 'A felhasználóneved aktiválva lett. Köszönjük a regisztrációt.',
  'Account_active_admin' => 'A felhasználó aktiválva van.',
  'Reactivate' => 'Felhasználónév újraaktiválása!',
  'Already_activated' => 'Már aktiváltad a felhasználónevedet.',
  'COPPA' => 'A felhasználónév elkészült, de bõvebb információért olvasd el az emailt.',
  
  'Registration' => 'Felhasználói szabályzat',
  'Reg_agreement' => 'Noha az Adminisztrátor, és a moderátorok mindent megtesznek, hogy minél hamarabb eltávolítsák a Fórumból az általánosan kifogásolható anyagokat, lehetetlen, hogy minden egyes hozzászólást átnézzenek. Ebbõl adódóan elfogadom, hogy a Fórumon található összes hozzászólás a szerzõ nézeteit tükrözi, és nem az Adminisztrátorok, Moderátorok, vagy a Webmester álláspontját - így õk nem vállalnak felelõsséget a hozzászólások tartalmáért.<br /><br/>Beleegyezek, hogy nem küldök sértegetõ, obszcén, vulgáris, rágalmazó, gyûlöletkeltõ, támadó, vagy bármely más olyan tartalmat, illetve anyagot, mely törvényt sért. Mivel ez egy nyilvános fórum, ezért olyan anyagot sem küldök, mely ellentétes az általános közízléssel. A fentiek megsértése azonnali és végleges törlést von maga után.<br/>Elfogadom, hogy a Fórum webmesterének, az Adminisztrátornak és bármely Moderátornak jogában áll eltávolítani, szerkeszteni a hozzászólásaimat, vagy lezárni az általam nyitott témákat, amennyiben úgy ítélik meg hogy ez szükséges. Mint felhasználó, elfogadom, hogy néhány, általam megadott adat tárolásra kerül a Fórum adatbázisában. Ezek az információk semmilyen módon nem kerülnek ki egy harmadik félhez, de sem az Adminisztrátor sem a Moderátorok nem tudnak felelõsséget vállalni az adatokért egy esetleges "hacker-támadás" esetén.<br /><br />A Fórum "cookie"-kat (sütiket) használ, hogy adatokat tároljon a felhasználó számítógépén, de egyik sem tartalmaz személyes adatokat, melyek a regisztrációnál kerültek megadásra: a cookie-k pusztán technikai szempontból szükségesek.<br />A megadott email-cím csak a regisztráció (és az új jelszó) érvényesítéséhez szükségeltetik, semmilyen más felhasználásra nem kerül, és a hozzátartozó személyes adatok sem.<br /><br />',
  
  'Agreement' => 'Megállapodás',
  'Agree_under_13' => '<b>Elfogadom</b> a feltételeket, és 13 évesnél <i>fiatalabb</i> vagyok.',
  'Agree_over_13' => '<b>Elfogadom</b> a feltételeket.',
  'Agree_not' => '<b>Nem fogadom el</b> a feltételeket.',
  'Agree_checkbox' => 'Tudom és akarom teljesíteni ezeket a feltételeket',
  'Agree_checkbox_Error' => 'Az "ELFOGADOM" rubrikát meg kell jelölni a regisztrációs lap alján!',
  
  'Wrong_activation' => 'Az aktivációs kulcs nem egyezik meg az adatbázisban lévõvel.',
  'Send_password' => 'Új jelszó küldése',
  'Password_updated' => 'Az új jelszó elkészült, ellenõrizd az email-címedet a további információkért.',
  'No_email_match' => 'A megadott email-cím nem tartozik ehhez a felhasználónévhez.',
  'New_password_activation' => 'Új jelszó aktiváció',
  'Password_activated' => 'A hozzáférésedet újraaktiváltuk. A bejelentkezéshez írd be az emailben megadott jelszót.',
  
  'Send_email_msg' => 'Email üzenet küldése',
  'No_user_specified' => 'Nem adtál meg felhasználónevet.',
  'User_prevent_email' => 'A felhasználó nem kíván emaileket fogadni. Próbálj privát üzenetet küldeni.',
  'User_not_exist' => 'Ilyen felhasználó nem létezik.',
  'CC_email' => 'Másolat küldése magadnak',
  'Email_message_desc' => 'Az üzenet sima szövegként lesz elküldve, ezért ne használj HTML-t vagy BBCode tageket. A válaszcím a te email-címed lesz.',
  'Flood_email_limit' => 'Most nem küldhetsz több emailt, próbáld késõbb.',
  'Recipient' => 'Címzett',
  'Email_sent' => 'Email elküldve.',
  'Send_Email' => 'Send e-mail',
  'Empty_sender_email' => 'A feladó címét meg kell adnod.',
  'Empty_subject_email' => 'Kötelezõ a téma megadása.',
  'Empty_message_email' => 'Az üzenet üres. Írj egy üzenetet, mielõtt elküldöd a levelet.',


// Visual confirmation system strings
  'Confirm_code_wrong' => 'Az érvényesítõ kód hibás.',
//  'Too_many_registers' => 'You have exceeded the number of attempts for this session. Please try again later.',
  'Confirm_code_impaired' => 'Ha látási (vagy egyéb) problémák folytán nem tudnád elolvasni a kódot, vedd fel a kapcsolatot az %sAdminisztrátorral%s.',
  'Confirm_code' => 'Érvényesítõ kód',
  'Confirm_code_explain' => 'A kódot úgy kell begépelni, ahogy itt látod. Ügyelj a kis- és nagybetûkre, a 0 egy átlós vonallal van áthúzva.',



// Members list
  'Select_sort_method' => 'Rendezési mód kiválasztása',
  'Sort' => 'Rendezés',
  'Sort_Top_Ten' => 'A legtöbb hozzászólást küldõ 10 felhasználó',
  'Sort_Joined' => 'Regisztráció dátuma',
  'Sort_Username' => 'Felhasználónév',
  'Sort_Location' => 'Tartózkodási hely',
  'Sort_Posts' => 'Összes hozzászólás',
  'Sort_Email' => 'Email',
  'Sort_Website' => 'Honlap',
  'Sort_Ascending' => 'Növekvõ',
  'Sort_Descending' => 'Csökkenõ',
  'Order' => 'Sorrend',


// Group control panel
  'Group_Control_Panel' => 'Csoport vezérlõpult',
  'Group_member_details' => 'Csoporttagság részletek',
  'Group_member_join' => 'Csatlakozás egy csoporthoz',
  
  'Group_Information' => 'Csoport információ',
  'Group_name' => 'A csoport neve',
  'Group_description' => 'A csoport leírása',
  'Group_membership' => 'Csoporttagság',
  'Group_Members' => 'Csoporttagok',
  'Group_Moderator' => 'Csoport moderátor',
  'Pending_members' => 'Kérelmezett tagságok',
  
  'Group_type' => 'A csoport típusa',
  'Group_open' => 'Nyílt csoport',
  'Group_closed' => 'Zárt csoport',
  'Group_hidden' => 'Rejtett csoport',
  
  'Current_memberships' => 'Aktuális tagságok',
  'Non_member_groups' => 'Csoportok',
  'Memberships_pending' => 'Tagsági kérelmek',
  
  'No_groups_exist' => 'Jelenleg még nincsen csoport a Fórumon.',
  'Group_not_exist' => 'A megadott csoport nem létezik.',
  
  'Join_group' => 'Csatlakozás a csoporthoz',
  'No_group_members' => 'A csoportnak nincsenek tagjai.',
  'Group_hidden_members' => 'A csoport rejtett, nem tudod megnézni a tagjait.',
  'No_pending_group_members' => 'A csoportnak nincsenek függõ kérelmezésben lévõ tagjai.',
  'Group_joined' => 'A jelentkezés sikeresen megtörtént!<br />A Csoport moderátora értesíteni fog, ha elfogadta a kérelmedet.',
  'Group_request' => 'A csatlakozási kérelmed elkészült.',
  'Group_approved' => 'Csatlakozási kérelmed elfogadva.',
  'Group_added' => 'Csatlakoztál a csoporthoz.',
  'Already_member_group' => 'Már tagja vagy ennek a csoportnak.',
  'User_is_member_group' => 'A felhasználó már most is tagja ennek a csoportnak.',
  'Group_type_updated' => 'Sikeresen megváltozott a csoport típusa.',
  'Could_not_add_user' => 'A kiválasztott felhasználó nem létezik.',
  'Could_not_anon_user' => 'Nem készíthetsz névtelen csoporttagot.',
  'Confirm_unsub' => 'Biztos le akarod mondani ezt a csoporttagságot?',
  'Confirm_unsub_pending' => 'A jelentkezésed még nincs jóváhagyva ehhez a csoporthoz, biztosan le akarod mondani?',
  'Unsub_success' => 'Sikeresen lemondtad a csoporttagságot.',
  'Approve_selected' => 'Kiválasztottak elfogadása',
  'Deny_selected' => 'Kiválaszottak elutasítása',
  'Not_logged_in' => 'Be kell jelentkezned, hogy csatlakozhass egy csoporthoz.',
  'Remove_selected' => 'Kijelölt tagok törlése',
  'Add_member' => 'Tag hozzáadása',
  'Not_group_moderator' => 'Nem vagy a csoport moderátora, így nem végezheted el ezeket a módosításokat.',
  'Login_to_join' => 'A csatlakozáshoz, vagy a csoporttagságok irányításához elõször be kell jelentkezned.',
  'This_open_group' => 'Nyitott csoport, kattints a tagság kérelmezéséshez.',
  'This_closed_group' => 'Zárt csoport, több felhasználó nem engedélyezett.',
  'This_hidden_group' => 'Ehhez a rejtett csoporthoz nem lehet automatikusan új felhasználókat adni!',
  'Member_this_group' => 'A csoport tagja vagy.',
  'Pending_this_group' => 'A csoport moderátora még nem döntött a felvételedrõl.',
  'Are_group_moderator' => 'A csoport moderátora vagy.',
  'None' => 'Nincs',
  'Subscribe' => 'Jelentkezés',
  'Unsubscribe' => 'Lemondás',
  'View_Information' => 'Információk a csoportról',

// Search
  'Search_query' => 'Keresési feltételek',
  'Search_options' => 'Keresési beállítások',
  
  'Search_keywords' => 'Keresés kulcsszóra',
  'Search_keywords_explain' => 'Használhatod az <u>AND</u> (és) szót, hogy a keresésben megadott összes szó benne legyen a találatban, az <u>OR</u> (vagy) szót mellyel a "benne lehet" szavakat választhatod el, és a <u>NO</u> (nem) szót, mellyel kizárhatsz szavakat.<br />Használj *-ot a részleges szavakhoz.',
  'Search_author' => 'Szerzõ keresése',
  'Search_author_explain' => 'Használj *-ot a részleges szavakhoz.',
  'Search_author_topic_starter' => 'Search only topics started by this author',
  
  'Search_for_any' => 'Keresés bármely kifejezésre',
  'Search_for_all' => 'Keresés az összes kifejezésre',
  'Search_title_msg' => 'Keresés téma címre, és szövegre',
  'Search_title_only' => 'Csak a témacímekben keres',
  'Search_msg_only' => 'Csak szövegben keresse',
  
  'Return_first' => 'A talált témák elsõ', // followed by xxx characters in a select box
  'characters_posts' => 'karakterének megjelenítése.',
  
  'Search_previous' => 'Keresés az elõzõ x idõtartamban', // followed by days, weeks, months, year, all in a select box
  
  'Sort_by' => 'Rendezési feltétel',
  'Sort_Time' => 'Beküldés ideje',
  'Sort_Post_Subject' => 'Téma',
  'Sort_Topic_Title' => 'Téma címe',
  'Sort_Author' => 'Szerzõ',
  'Sort_Forum' => 'Fórum',
  
  'Display_results' => 'Találatok megjelenítése',
  'All_available' => 'Összes találat',
  'No_searchable_forums' => 'Nincs jogod keresni az oldalon lévõ fórumban.',
  
  'No_search_match' => 'A keresési feltételeknek egy fórum, és egy téma sem felelt meg.',
  'Found_search_match' => 'Keresési találat: %d', // eg. Search found 1 match
  'Found_search_matches' => 'Keresési találatok: %d',
  
  'Close_window' => 'Ablak bezárása',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
  'Sorry_auth_announce' => 'Csak a %s küldhetnek közleményt ebbe a fórumba.',
  'Sorry_auth_sticky' => 'Csak a %s küldhetnek kiemelt témát ebbe a fórumba.',
  'Sorry_auth_read' => 'Csak a %s olvashatják a fórum témáit.',
  'Sorry_auth_post' => 'Csak a %s nyithatnek új témát ebben a fórumban.',
  'Sorry_auth_reply' => 'Csak a %s válaszolhatnek egy hozzászólásra ebben a fórumban.',
  'Sorry_auth_edit' => 'Csak a %s szerkeszthetnek hozzászólásokat ebben a fórumban.',
  'Sorry_auth_delete' => 'Csak a %s törölhetnek hozzászólásokat ebben a fórumban.',
  'Sorry_auth_vote' => 'Csak a %s szavazhatnek ebben a fórumban.',

// These replace the %s in the above strings
  'Auth_Anonymous_Users' => '<b>vendégek</b>',
  'Auth_Registered_Users' => '<b>regisztrált felhasználók</b>',
  'Auth_Self_Users' => '<b>a speciális felhasználók</b>',
  'Auth_Users_granted_access' => '<b>privát engedéllyel rendelkezõ felhasználók</b>',
  'Auth_Moderators' => '<b>moderátorok</b>',
  'Auth_Administrators' => '<b>adminisztrátorok</b>',
  
  'Not_Moderator' => 'Nem vagy a moderátor ezen a fórumon.',
  'Not_Authorized' => 'Nem azonosított',
  
  'You_been_banned' => 'Ki lettél tiltva errõl a fórumról!<br />A további tudnivalókért vedd fel a kapcsolatot a Webmesterrel, vagy az Adminisztrátorral.',

// Viewonline
  'Reg_users_zero_online' => '0 regisztrált felhasználó és ', // There are 5 Registered and
  'Reg_users_online' => '%d regisztrált felhasználó és ', // There are 5 Registered and
  'Reg_user_online' => '%d regisztrált felhasználó és ', // There are 1 Registered and
  'Hidden_users_zero_online' => '0 rejtett felhasználó online', // 6 Hidden users online
  'Hidden_users_online' => '%d rejtett felhasználó online', // 6 Hidden users online
  'Hidden_user_online' => '%d rejtett felhasználó online', // 6 Hidden users online
  'Guest_users_online' => '%d vendég online', // There are 10 Guest users online
  'Guest_users_zero_online' => '0 vendég online', // There are 10 Guest users online
  'Guest_user_online' => '%d vendég online', // There are 1 Guest users online
  'No_users_browsing' => 'Jelenleg egy felhasználó sem böngészi a fórum oldalait',
  
  'Online_explain' => 'A fenti adat az elmúlt ' . intval(ONLINE_REFRESH / 60) . ' perc alapján készült.',
  'Online_today' => 'Ez az adat a ma aktív felhasználókat mutatja',
  
  'Forum_Location' => 'Fórum helye',
  'Last_updated' => 'Utolsó frissítés',
  
  'Forum_index' => 'Fórum index',
  'Portal' => 'Home Page',
  'Logging_on' => 'Bejelentkezés',
  'Posting_message' => 'Üzenet küldése',
  'Searching_forums' => 'Fórumok keresése',
  'Viewing_profile' => 'Profil megtekintése',
  'Viewing_HACKSLIST' => 'Készítõk listája',
  'Viewing_online' => 'Jelenlévõ felhasználók megtekintése',
  'Viewing_member_list' => 'Taglista megtekintése',
  'Viewing_priv_msgs' => 'Privát üzenetek megtekintése',
  'Viewing_FAQ' => 'Gy.I.K. megtekintése',
  'Viewing_KB' => 'TB megnézése',
  'Viewing_RSS' => 'RSS Feed',
  
  
// Moderator Control Panel
  'Mod_CP' => 'Moderátor vezérlõpult',
  'Mod_CP_explain' => 'Az alábbi ûrlap segítségével tömeges mûveleteket is végezhetsz a fórumon. Például: egyszerre bármennyi témát lezárhatsz, megnyithatsz, áthelyezhetsz vagy törölhetsz.',
  
  'Select' => 'Kiválaszt',
  'Delete' => 'Töröl',
  'Move' => 'Áthelyez',
  'Copy' => 'Másol',
  'Lock' => 'Lezár',
  'Unlock' => 'Megnyit',
  
  'Topics_Removed' => 'A kiválaszott témák sikeresen törölve lettek az adatbázisból!',
  'Topics_Locked' => 'A kiválaszott témák le lettek zárva!',
  'Topics_Moved' => 'A kiválaszott témák sikeresen átkerültek az új helyre!',
  'Topics_Unlocked' => 'A kiválaszott témák sikeresen meg lettek nyitva!',
  'No_Topics_Moved' => 'Nem lett téma áthelyezve!',
  
  'Confirm_delete_topic' => 'Biztosan el akarod távolítani a kiválaszott témá(ka)t?',
  'Confirm_lock_topic' => 'Biztosan le akarod zárni a kiválasztott témá(ka)t?',
  'Confirm_unlock_topic' => 'Biztosan meg akarod nyitni a kiválasztott témá(ka)t?',
  'Confirm_move_topic' => 'Biztosan át akarod helyezni a kiválasztott témá(ka)t?',
  
  'Move_to_forum' => 'Áthelyezés más fórumba:',
  'Leave_shadow_topic' => 'Maradjon árnyéktéma a régi fórumban.',
  
  'Split_Topic' => 'Téma-szétválasztó',
  'Split_Topic_explain' => 'Az alábbi mezõk használatával egy témát kétféleképpen választhatsz szét: vagy az adott hozzászólások kiemelésével, vagy egy adott hozzászólástól számítva',
  'Split_title' => 'A téma új címe',
  'Split_forum' => 'A téma új fóruma',
  'Split_posts' => 'Megjelölt hozzászólások szétválasztása',
  'Split_after' => 'Szétválasztás a bejelölt hozzászólástól',
  'Topic_split' => 'A téma szétválasztása sikerült!',
  
  'Too_many_error' => 'Túl sok hozzászólást választottál ki. Csak egy hozzászólást válassz ki, az utána következõk is kiemelõdnek!',
  
  'None_selected' => 'A mûvelet végrahajtásához témát is ki kell választani. Lépj vissza, és válassz ki legalább egyet.',
  'New_forum' => 'Új fórum',
  
  'This_posts_IP' => 'A hozzászólás IP-je',
  'Other_IP_this_user' => 'A felhasználóhoz tartozó egyéb IP-címek',
  'Users_this_IP' => 'Az IP-hez tartozó felhasználók',
  'IP_info' => 'IP információ',
  'Lookup_IP' => 'IP keresése',
  
// Errors (not related to a specific failure on a page)
  'Information' => 'Információ',
  'Critical_Information' => 'Kritikus információ',
  
  'General_Error' => 'Általános hiba',
  'Critical_Error' => 'Kritikus hiba',
  'An_error_occured' => 'Hiba adódott',
  'A_critical_error' => 'Kritikus hiba adódott',
  'Admin_reauthenticate' => 'A fórum adminisztrációjához újra azonosítanod kell magad.',
  
  'Topic_description' => 'A témád meghatározása',
// 'Description' => 'Topic Description',

  'Guestbook' => 'Vendégkönyv',
  'Viewing_guestbook' => 'Vendégkönyv elolvasása',
  
  'Click_return_preferences' => 'Kattints %side%s Tulajdonságokhoz való visszatéréshez',
  
  'Warn_new_post' => 'Érkezett egy új válasz ehhez a szálhoz. Kérlek nézd meg a választ, annak fényében fogalmazd át és küld el a válaszod.',
  
  'Today_at' => '<b class="date-today">Ma</b> történt ',
  'Yesterday_at' => '<b class="date-yesterday">Tegnap</b> történt ',
  'TODAY' => '<b class="date-today">Today</b>',
  'YESTERDAY' => '<b class="date-yesterday">Yesterday</b>',

// Birthday - BEGIN
  'Birthday' => 'Születésnap',
  'No_birthday_specify' => 'Nem meghatározott',
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
  'Year' => 'Év',
  'Month' => 'Hónap',
  'Day' => 'Nap',
// Birthday - END

// Start add - Gender MOD
  'Gender' => 'Nem',//used in users profile to display which gender he/she is
  'Male' => 'Férfi',
  'Female' => 'Nõ',
  'No_gender_specify' => 'Nem meghatározott',
  'Gender_require' => 'A nemed meghatározása kötelezõ ezen az oldalon.',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
  'Topic_view_users' => 'A témát meglátogató felhasználók listája',
  'Topic_time' => 'Utoljára látta',
  'Topic_count' => 'Témaszámláló',
  'Topic_view_count' => 'A témát látogatók száma',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
  'Give_G_card' => 'Felhasználó újraaktiválása',
  'Give_Y_card' => 'Felhasználó #%d figyelmeztetése',
  'Give_R_card' => 'Felhasználó azonnali banolása',
  'Ban_update_sucessful' => 'A banlista sikeresen frissítve',
  'Ban_update_green' => 'A felhasználó újraaktiválva',
  'Ban_update_yellow' => 'A felhasználó figyelmeztetve lett. Jelenleg %d figyelmeztetése van a maximális %d-bõl',
  'Ban_update_red' => 'A felhasználó banolva lett',
  'Ban_reactivate' => 'A hozzáférésed újra aktív',
  'Ban_warning' => 'Egy figyelmeztetést kaptál',
  'Ban_blocked' => 'A hozzáférésedet blokkolták',
  'Click_return_viewtopic' => 'Kattints %side%s a témához való visszatéréshez',
/*
  'Rules_ban_can' => 'You <b>can</b> ban other users in this forum',
  'Rules_greencard_can' => 'You <b>can</b> un-ban users in this forum',
  'Rules_bluecard_can' => 'You <b>can</b> report post to moderators in this forum',
*/
  'Rules_ban_can' => '<b>Tudsz</b> banolni más felhasználókat ebben a fórumban',
  'Rules_greencard_can' => 'Vissza <b>tudod</b> vonni egy felhasználó banját',
  'Rules_bluecard_can' => '<b>Tudsz</b> jelentést küldeni egy moderátornak ebben a fórumban',
  'user_no_email' => 'Ez a felhasználó nem engedi meg, hogy levelet küldjél neki, de privát üzenetet küldhetsz neki',
  'user_already_banned' => 'A kijelölt felhasználó már banolva van',
  'Ban_no_admin' => 'Ez a felhasználó egy ADMIN, ezért nem banolhatod, nem figyelmeztetheted',
  'Give_b_card' => 'Jelented ezt a hozzászólást a fórum egyik moderátorának',
  'Clear_b_card' => 'Ennek a hozzászólásnak már van %d kék kártyája. Ha megnyomod ezt a gombot, akkor lenullázódik',
  'No_moderators' => 'Ennek a fórumnak nincsen moderátora, nem tudsz senkinek sem jelenteni!',
  'Post_repported' => 'Ezt a hozzászólást jelentetted %d moderátornak',
  'Post_repported_1' => 'Ezt a hozzászólást jelentetted egy moderátornak',
  'Post_repport' => 'Hozzászólás jelentése', //Subject in email notification
  'Post_reset' => 'A hozzászólás kék kártyáinak a számlálása újra lett indítva',
  'Search_only_bluecards' => 'Keresés csak kék kártyás hozzászólásokban',
  'Send_message' => 'Kattints %side%s, ha írsz egy üzenetet a moderátoroknak, vagy<br />',
  'Send_PM_user' => 'Kattints %side%s, ha írsz egy privát üzenetet a felhasználnak, vagy',
  'Link_to_post' => 'Kattints %side%s a jelentett hozzászóláshoz való visszatéréshez
--------------------------------

',
  'Post_a_report' => 'Jelentés küldése',
  'Report_stored' => 'A jelentésed sikeresen kézbesítve lett',
  'Send_report' => 'Kattints %side%s ide az eredeti üzenethez való visszatéréshez',
  'Red_card_warning' => 'A(z) %s felhasználónak piros lapot akarsz adni. Ezzel banolod a felhasználót az oldalról. Biztos ezt akarod tenni?',
  'Yellow_card_warning' => 'A(z) %s felhasználónak sárga lapot akarsz adni. Ezzel figyelmeztetésben részesíted a felhasználót. Biztos ezt akarod tenni?',
  'Green_card_warning' => 'A(z) %s felhasználónak zöld lapot akarsz adni. Ezzel megszünteted a felhasználó banját. Biztos ezt akarod tenni?',
  'Blue_card_warning' => 'A(z) %s felhasználónak kék lapot akarsz adni. Ezzel felhívod a moderátorok figyelmét erre a hozzászólásra. Biztos, hogy figyelmeztetni akarod a moderátorokat ezen hozzászólás kapcsán?',
  'Clear_blue_card_warning' => 'Ezzel reseteled a hozzászólás kék lap számlálóját. Biztos ezt akarod tenni?',
  'Warnings' => 'Figyelmeztetés: %d', //shown beside users post, if any warnings given to the user
  'Banned' => 'Jelenleg banolva',//shown beside users post, if user are banned

// Last visit - BEGIN
  'Last_logon' => 'Utolsó látogató',
  'Hidde_last_logon' => 'Rejtett',
  'Never_last_logon' => 'Soha',
  'Users_today_zero_total' => 'Összesen <b>0</b> felhasználó látta ezt az oldalt ma: ',
  'Users_today_total' => 'Összesen <b>%d</b> felhasználó látta ezt az oldalt ma: ',
  'User_today_total' => 'Összesen <b>%d</b> felhasználó látta ezt az oldalt ma: ',
  'Users_lasthour_explain' => ', %d of them within the last hour.',
  'Users_lasthour_none_explain' => '', //shown if no one has visited in the last hour, fill if you like
  
  'Years' => 'Év',
  'Year' => 'Év',
  'Weeks' => 'Hét',
  'Week' => 'Hét',
  'Day' => 'Nap',
  'Total_online_time' => 'Összes online idõ',
  'Last_online_time' => 'Utolsó online idõ',
  'Number_of_visit' => 'Látogatások száma',
  'Number_of_pages' => 'Megtekintett lapok száma',
// Last visit - END

  'total_site_hits_key' => '%V% oldalt látott %D% óta.',
  
  'Message_too_short' => 'Az üzenet túl rövid',
  
// Start add - Online/Offline/Hidden Mod
  'Online' => 'Online',
  'Offline' => 'Offline',
  'Hidden' => 'Rejtett',
  
  'Online_status' => 'Státusz',
// End add - Online/Offline/Hidden Mod
  'Download' => 'Letöltés',

//signature editor
  'sig_edit_link' => 'Aláírás',
  'sig_description' => 'Aláírás szerkesztése (<b>Elõnézettel</b>)',
  'sig_edit' => 'Aláírás szerkesztése',
  'sig_current' => 'Jelenlegi aláírás',
  'sig_none' => 'Nincs elérhetõ aláírás',
  'sig_save' => 'Ment',
  'sig_save_message' => 'Az aláírás sikeresen mentve!',
  
  'Statistics' => 'Statisztikák',
  
// Start add - Global announcement MOD
  'Globalannounce' => 'Globális esemény',
  'Globalannounce' => 'Új Globális esemény',
// End add - Global announcement MOD
  'Global_Announcements' => 'Globális események',
  'Announcements' => 'Események',
  'Sticky_Topics' => 'Fontos témák',
  'Announcements_and_Sticky' => 'Események és fontos témák',
// db_update generator
  'Db_update_generator' => 'DB Update Generator',
  'Instructions' => 'Instructions',
  'SQL_instructions' => '<p>This piece of software will create PHP files that will allow you to update your database using your browser. There are a few things you must look after when you insert an SQL in the box below.<br />First of all, make sure that every SQL query is ending with a semicolon (;). If not, the file created will be faulty. Next, ensure that the tables have the "phpbb_" prefix. This will automatically be replaced with a little piece of code that enables you to use the db_update.php file on any forum regardless of what the table prefix is set to.</p>',
  'Enter_SQL' => '<strong>Enter SQL</strong>',
  'Enter_SQL_explain' => '<strong>MySQL</strong> is the world\'s most popular open source database, recognized for its speed and reliability.',
  'Output_SQL' => '<strong>SQL Output</strong>',
  'Output_SQL_explain' => 'Copy and paste the text from the text area on the right into a blank file. Save the file as <u>db_update.php</u> and upload it to your server. Run it once by accessing with your browser.<br /><br />Alternatively, click the download button to download the file directly to your computer <strong>(recommended)</strong>.',
  'Download' => 'Letöltés',

  'TOP_POSTERS' => 'Legtöbbet hozzászólók',
  
// TELL A FRIEND
  'TELL_FRIEND' => 'Email egy barátnak',
  'TELL_FRIEND_SENDER_USER' => 'A neved',
  'TELL_FRIEND_SENDER_EMAIL' => 'Az email címed',
  'TELL_FRIEND_RECEIVER_USER' => 'A barátod neve',
  'TELL_FRIEND_RECEIVER_EMAIL' => 'A barátod email címe',
  'TELL_FRIEND_WRONG_EMAIL' => 'Nem érvényes a megadott email cím.',
  'TELL_FRIEND_MSG' => 'Az üzeneted:',
  'TELL_FRIEND_TITLE' => 'Tell A Friend',
  'TELL_FRIEND_BODY' => 'Szia!\nA {SITENAME} fórumán jártam, és olvastam egy témát, ami szerintem téged érdekelni fog: &raquo;{TOPIC}&laquo;.\n\nTessék a link: {LINK}\n\nMenj, és olvasd el. Ha szeretnél rá válaszolni tudsz regisztrálni egy saját felhasználót pár perc alatt.',

// Begin Thanks Mod
  'thankful' => 'Köszönöm emberek',
  'thanks_to' => 'Köszönöm a témát',
  'thanks_end' => ':',
  'thanks_alt' => 'Nagyon tetszett a téma',
  'thanks_add_rate' => 'Köszönöm a szerzõnek ezt a hasznos témát',
  'thanked_before' => 'Már megköszönted ezt a témát',
  'thanks_add' => 'A köszönetedet átadtuk',
  'thanks_not_logged' => 'Be kell jelentkezned mielõtt megköszönsz egy témát',
  'thanks2' => 'Nagyon szépen köszönöm!<br />',
// End Thanks Mod

//Begin Lo-Fi Mod
  'Lofi' => 'Lo-Fi Verzió',
// 'Full_Version' => 'Teljes verzió',
  'Full_Version' => 'Ez a "Lo-Fi" verziójú tartalom. A teljes minõségû verzió több információt tartalmaz, mert képeket és szembarát formázásokat tartalmaz. Kérlek kattints ide.',
  'quote_lofi' => 'Idézet',
  'edit_lofi' => 'Szerkeszt',
  'ip_lofi' => 'IP',
  'del_lofi' => 'Töröl',
  'profile_lofi' => 'Profil',
  'pm_lofi' => 'PÜ',
  'email_lofi' => 'Email',
  'website_lofi' => 'Weboldal',
  'icq_lofi' => 'ICQ',
  'aim_lofi' => 'AIM',
  'yim_lofi' => 'YIM',
  'msnm_lofi' => 'MSN',
  'quick_lofi' => 'Gyors válasz',
  'new_pm_lofi' => 'Egy PÜ küldése',
//End Lo-Fi Mod

// Retroactive Signature MOD
  'Retro_sig' => 'A régebbi válaszaim alá is tegye oda az aláírásom',
  'Retro_sig_explain' => 'Ha hozzáadsz/lecserélsz egy aláírást, akkor az normális esetben csak az ezek után beküldött hozzászólásaid alatt lesz látható',
  'Retro_sig_checkbox' => 'Jelöld be, ha szeretnéd, hogy a régebbi hozzászólásaid alatt is megjelenjen az aláírásod',
// End Retro Sig MOD

  'legend' => 'Történet',
  'users' => 'Felhasználók',
//added to autogroup mod
  'No_more' => 'nincs több elfogadott felhasználó',
  'No_add_allowed' => 'automatikus felhasználófelvétel nincs engedélyezve',
  'Join_auto' => 'Csatlakozhatsz a csoporthoz, mert a minimális hozzászólásszámot teljesítetted',

// merge topics
  'Merge' => 'Összevon',
  'Merge_topic' => 'Téma összevonása',
  'Topics_Merged' => 'A téma be lett emelve a témába.',
  'No_Topics_Merged' => 'A témák nem beemelhetõek.',
  'Confirm_merge_topic' => 'Tényleg szeretnéd beemelni a kijelölt témát?',
  
  'Downloads' => 'Letöltések',
  
// Start add - Bin Mod
  'Move_bin' => 'Téma szemetesbe helyezése',
  'Topics_Moved_bin' => 'A kijelölt témák a szemetesbe lettek mozgatva.',
  'Bin_disabled' => 'A szemetes le van tiltva',
  'Bin_recycle' => 'Szemetes',
// End add - Bin Mod
  'Recent_topics' => 'Friss témák', // Recent Topics

  'Topics_Title_Edited' => 'A kijelölt téma címe sikeresen szerkesztve.',
  'Edit_title' => 'Cím szerkesztése',
  'PM' => 'PÜ',
  
// Start Advanced IP Tools Pack MOD
  'Moderator_ip_information' => 'Az IP információkat csak moderátorok láthatják',
  'Registered_ip_address' => 'Regisztrált IP cím',
  'Registered_hostname' => 'Regisztrált gépnév',
  'Other_registered_ips' => 'A %s címrõl regisztrált más felhasználók', //%s is the IP address
  'Other_posted_ips' => 'IP címek, ahonnan ez a felhasználó hozzászólt',
  'Search_ip' => 'Hozzászólások errõl az IP címrõl',
  'Search_ip_explain' => 'Az IP cím <u>127.0.0.1</u>-hez hasonló formátumú -- használhatod a *-ot jolly karakternek, hogy egy tartományt lefedjél. Pl.: <u>127.*.*.1</u>',
  'IP' => 'IP',
  'Whois' => 'Whois',
  'Browser' => 'Böngészõ',
  'No_other_registered_ips' => 'Nem regisztrált más felhasználó errõl az IP címrõl.',
  'No_other_posted_ips' => 'Ez a felhasználó még nem szólt hozzá.',
  'Not_recorded' => 'Nem rögzített',
  'Logins' => 'Belépések',
  'No_logins' => 'Ennek a felhasználónak nincsen rögzített belépése.',
// End Advanced IP Tools Pack MOD

  'LIW_click_image' => 'Kattints ide, hogy a képet eredeti méretben megnézd',
  'LIW_click_image_explain' => 'Ide kattintva megnézheted a képet eredeti méretében',
// Mighty Gorgon - Full Album Pack - BEGIN
  'Album' => 'Album',
  'Personal_Gallery' => 'Személyes galéria',
  'Personal_Gallery_Of_User' => '%s személyes galériája',
  'Personal_Gallery_Of_User_Profile' => '%s személyes galériája (%d kép)',
  'Show_All_Pic_View_Mode_Profile' => '%s személyes galérájának összes képének mutatása (alkategóriák nélkül)',
  'Not_allowed_to_view_album' => 'Bocsi, de nem engedélyezett az album megnézése.',
  'Not_allowed_to_upload_album' => 'Bocsi, de nincs jogod új képet feltölteni az albumba. Lépj kapcsolatba egy adminisztrátorral további részletekért.',
  'Album_empty' => 'Nincsenek képek az albumban<br />Kattints az <b>Új kép feltöltése</b> linkre, ha szeretnél egyet feltölteni.',
  'Album_empty2' => 'Eben az albumban nincsenek képek.',
  'Upload_New_Pic' => 'Új kép feltöltése',
  'Pic_Title' => 'Képcím',
  'Pic_Title_Explain' => 'Nagyon fontos, hogy a képeidnek találó címet adjál, mert a többiek ez alapján tudják megtalálni a képet, illetve segít beazonosítani, hogy mit ábrázol a kép.',
  'Pic_Upload' => 'Kép feltöltése',
  'Pic_Upload_Explain' => 'Elfogadott típusok: JPG, GIF és PNG. Maximális fájlméret: %s byte. Maximális képméret: %sx%s pixel.',
  'Album_full' => 'Bocsi, de az album mérete elérte a maximális feltölthetõ képek számát. Lépj kapcsolatba egy adminisztrátorral további részletekért.',
  'Album_upload_successful' => 'Köszönöm. A képedet sikeresen feltöltötted.',
  'Click_return_album' => 'Kattints %side%s az albumhoz való visszatéréshez.',
  'Invalid_upload' => 'Érvénytelen feltöltés<br /><br />A képed túl nagy, vagy nem elfogadott típus.',
  'Image_too_big' => 'Bocsi, de a kép méretei túl nagyok.',
  'Uploaded_by' => 'Feltöltötte:',
  'Category_locked' => 'Bocsi, de ebbe a kategóriába nem tölthetsz fel, mert egy admin zárolta ezt a kategóriát. Lépj kapcsolatba az album adminisztrátorával további információért.',
  'View_Album_Index' => 'Album Index',
  'View_Album_Personal' => 'A felhasználó személyes albumának megnézése',
  'View_Pictures' => 'Az album képinek nézegetése vagy kommentárok olvasása/beküldése',
  'Album_Search' => 'Albumkeresés',
  'Pic_Name' => 'Képnév',
  'Description' => 'Meghatározás',
  'Search_Contents' => ' ami tartalmazza: ',
  'Search_Found' => 'Keresési eredmény: ',
  'Search_Matches' => 'Illeszkedik:',
// Mighty Gorgon - Full Album Pack - END

// News
  'xs_latest_news' => 'Legfrissebb hírek',
  'xs_no_news' => 'Nincsenek hírek megadva.',
  'xs_news_version' => 'XS News Verzió: %s',
  'xs_news_ticker_feed' => 'XML Feed forrása: %s',
  'xs_no_ticker' => 'Nincs megadva Hírjegy. Kérlek menj el az AVP-be, és hozz létre egyet.',
  'xs_news_ticker_title' => 'Szalagcím',
  'xs_news_tickers_title' => 'Szalagcímek',
  'xs_news_item_title' => 'Vegyes hír',
  'xs_news_items_title' => 'Vegyes hírek',
  'hide' => 'Elrejt',
  'show' => 'Mutat',
  'Welcome' => 'Üdvözöllek',
  'birthdays' => 'Születésnapok',

//Battle of the Sexes
  'male_zero_total' => '<b>0</b> férfi tagunk', // # registered male users
  'male_total' => '<b>%d</b> férfi tagunk', // # registered male users
  'male_one_total' => '<b>%d</b> férfi tagunk', // # registered male users
  'female_zero_total' => 'Van <b>0</b> nõi tagunk', // # registered female users
  'female_total' => 'Van <b>%d</b> nõi tagunk', // # registered female users
  'female_one_total' => 'Van <b>%d</b> nõi tag', // # registered female users
  'unknown_total' => '& <b>%d</b> tagról nem tudni milyen nemû',
  'unknown_one_total' => '& <b>%d</b> tagról nem tudni milyen nemû',
  'unknown_zero_total' => '',
  'battle_of_sexes' => 'Nemek harca: ',
  
  'who_viewed' => 'A témát nézik',
  'BoardRules' => 'Szabályok',
  
  'View_post' => 'Hozzászólás megnézése',
  'Post_review' => 'Hozzászólás átnézése',
  'View_next_post' => 'Következõ hozzászólás megnézése',
  'View_previous_post' => 'Elõzõ hozzászólás megnézése',
  'No_newer_posts' => 'Nincs újabb hozzászólás a fórumban',
  'No_older_posts' => 'Nincs régebbi hozzászóláûs a fórumban',
  
  'StaffSite' => 'Staff oldal',
  'Staff_level' => array ('Administrator', 'Moderator'),
  'Staff_forums' => 'Fórumok',
  'Staff_stats' => 'Statisztikák',
  'Staff_user_topic_day_stats' => '%.2f téma per nap', // %.2f = topics per day
  'Staff_period' => '%d napja', // %d = days
  'Staff_contact' => 'Kapcsolat',
  'Staff_messenger' => 'Üzenõ',
// Start Edit Notes MOD
  'Edit_notes' => 'Feljegyzések szerkesztése',
  'Delete_note' => 'Feljegyzés törlése',
  'Edited_by' => 'Szerkesztette:',
  'Confirm_delete_edit_note' => 'Tényleg törölni szeretnéd ezt a feljegyzést?',
  'Edit_note_deleted' => 'A feljegyzés sikeresen törölve.',
// End Edit Notes MOD
//Referrers Mod
  'Referrers' => 'Http hivatkozók',
  'Viewing_Referrers' => 'Idelátogató hivatkozók',
//Referrers Mod End

  'Recent_topics' => 'Legújabb téma',
  'Recent_today' => 'Ma',
  'Recent_yesterday' => 'Tegnap',
  'Recent_last24' => '24 órán belül',
  'Recent_lastweek' => 'Egy héten belül',
  'Recent_lastXdays' => 'Utolsó %s nap',
  'Recent_last' => 'Utolsó',
  'Recent_days' => 'Nap',
  'Recent_first' => '%s-tól',
  'Recent_first_poster' => '%s',
  'Recent_select_mode' => 'Kiválasztás módja:',
  'Recent_showing_posts' => 'Hozzászólások mutatása:',
  'Recent_title_one' => '%s téma %s', // %s = topics; %s = sort method
  'Recent_title_more' => '%s témák %s', // %s = topics; %s = sort method
  'Recent_title_today' => ' mától',
  'Recent_title_yesterday' => ' tegnaptól',
  'Recent_title_last24' => ' az utolsó 24 órától',
  'Recent_title_lastweek' => ' utolsó héttõl',
  'Recent_title_lastXdays' => ' utolsó %s naptól', // %s = days
  'Recent_no_topics' => 'Nem találtam egy témát sem.',
  'Recent_wrong_mode' => 'Rossz módot választottál.',
  'Recent_click_return' => 'Kattints %side%s, hogy visszatérj a legutolsó oldalra.',
  
  'Profile_view_option' => 'Pop up window on Profile View',
  'Profile_viewed' => 'A Profilom látták',

// BEGIN Disable Registration MOD
  'registration_status' => 'Bocsi, de a fórumra jelenleg nem lehet regisztrálni, ez egy zárt közösség. Kérlek nézz vissza máskor.',
// END Disable Registration MOD

  'PostHighlight' => 'Kijelöl',
  'QuickQuote' => 'Gyors idézés',
  'Randomquote' => 'Véletlen idézés',

// Mod User CP Organize
  'Cpl_Navigation' => 'Vezérlõpanel',
// 'Cpl_Settings_Options' => 'Settings And Options',
  'Cpl_Settings_Options' => 'Beállítások',
  'Cpl_Board_Settings' => 'Oldal beállítása',
  'Cpl_NewMSG' => 'Új üzenet küldése',
  'Cpl_Click_Return_Cpl' => 'Vagy kattints %side%s, hogy visszajuss a Vezérlõpanelhez',
  'Cpl_Personal_Profile' => 'Személyes profil',
  'Cpl_More_info' => 'Feliratkozások',
  
  'Forbidden_characters' => 'Felhasználónévben engedélyezet karakterek: a-z, 0-9, -, _ és a szünet.',
  
  'Topics_per_page' => 'Téma per oldal',
  'Posts_per_page' => 'Hozzászólás per oldal',
  'Hot_threshold' => 'Népszerû hozzászólás küszöbe',
  
  'Mod_CP_first_post' => 'Elsõ hozzászólás',
  'Mod_CP_topic_count' => '<b>%s</b> témát találtam.',
  'Mod_CP_topics_count' => '<b>%s</b> témát találtam.',
  'Mod_CP_no_topics' => 'Nincs s kritériumnak megfelelõ téma.',
  'Mod_CP_sticky' => 'Fontos',
  'Mod_CP_announce' => 'Esemény',
  'Mod_CP_global' => 'Globális',
  'Mod_CP_normal' => 'Normális',
  'Display_sticky' => 'Fontos',
  'Display_announce' => 'Esemény',
  'Display_global' => 'Globális esemény',
  'Display_poll' => 'Szavazás',
  'Display_shadow' => 'Átmozgatott',
  'Display_locked' => 'Zárolt',
  'Display_unlocked' => 'Nyitott',
  'Display_unread' => 'Olvasatlan',
  'Display_unanswered' => 'Megválaszolatlan',
  'Display_all' => 'Mind',
  'Mod_CP_confirm_delete_polls' => 'Tényleg törölni szeretnéd a kijelölt szavazásokat?',
  'Mod_CP_poll_removed' => 'A kijelölt szavazás sikeresen el lett távolítva a témából.',
  'Mod_CP_polls_removed' => 'A kijelölt szavazások sikeresen el lett távolítva a témákból.',
  'Mod_CP_topic_removed' => 'A kijelölt téma sikeresen el lett távolítva az adatbázisból.',
  'Mod_CP_topic_moved' => 'A kijelölt téma átmozgatva <b>%s</b>-bõl <b>%s</b>-be.', // %s = old/new forum
  'Mod_CP_topics_moved' => 'A kijelölt téma átmozgatva <b>%s</b>-bõl <b>%s</b>-be.', // %s = old/new forum
  'Mod_CP_topic_locked' => 'A kijelölt téma lezárva.',
  'Mod_CP_topic_unlocked' => 'A kijelölt téma kinyitva.',
  'Mod_CP_topics_sticked' => 'A kijelölt témák fontosaknak megjelölve.',
  'Mod_CP_topic_sticked' => 'A kijelölt téma fontosnak megjelölve.',
  'Mod_CP_topics_announced' => 'A kijelölt témák eseményeknek megjelölve.',
  'Mod_CP_topic_announced' => 'A kijelölt téma eseménynek megjelölve.',
  'Mod_CP_topics_globalized' => 'A kijelölt témák globális eseménynek megjelölve.',
  'Mod_CP_topic_globalized' => 'A kijelölt téma globális eseménynek megjelölve.',
  'Mod_CP_topics_normalized' => 'A kijelölt témák normálisnak megjelölve.',
  'Mod_CP_topic_normalized' => 'A kijelölt téma normálisnak megjelölve.',
  'Mod_CP_click_return_topic' => 'Kattints %side%s ha a régi témához, és %side%s ha az új témához akarsz visszatérni.',
  
  't_starter' => 'Magadnak nem köszönheted meg',
  'Watched_Topics' => 'Figyelt téma',
  'No_Watched_Topics' => 'Nem figyelsz egy témát sem',
  'Watched_Topics_Started' => 'Téma elindítva',
  'Watched_Topics_Stop' => 'Figyelés leállítva',
  
  'Stop_watching_forum' => 'Fórum figyelésének abbahagyása',
  'Start_watching_forum' => 'A fórum a hozzászólásainak figyelése',
  'No_longer_watching_forum' => 'Nem figyeled többé ezt a fórumot.',
  'You_are_watching_forum' => 'Mostantól figyeled ezt a fórumot.',
  
  'UCP_SubscForums' => 'Feliratkozások',
  'UCP_NoSubscForums' => 'Nem vagy feliratkozva egy fórumra sem',
  'UCP_SubscForums_Flag' => 'Zászló',
  'UCP_SubscForums_Forum' => 'Fórum',
  'UCP_SubscForums_Forum_subscribed' => 'Feliratkoztál a fórumra',
  'UCP_SubscForums_Forum_already_subscribed' => 'Már feliratkoztál erre a fórumra',
  'UCP_SubscForums_Click_return_forum' => 'Kattints %side%s, hogy visszatérj a fórumhoz',
  'UCP_SubscForums_Topics' => 'Témák',
  'UCP_SubscForums_Posts' => 'Hozzászólások',
  'UCP_SubscForums_LastPost' => 'Utolsó hozzászólás',
  'UCP_SubscForums_UnSubscribe' => 'Leiratkozás',
  'UCP_SubscForums_NewTopic' => 'Új téma',
  
  'profile_main' => 'Általános információ',
  'profile_explain' => 'Üdvözlünk a Felhasználói Vezérlõpanelben. Itt tudod figyelni, megnézni és frissíteni a profilodat, egyes mûködési tulajdonságokat, felírt fórumokat és témákat. Illetve tudsz más felhasználóknak üzenetet küldeni (ha engedélyezve van).',
  'your_activity' => 'A profilod',
  
  'Gravatar' => 'Gravatar',
  'Gravatar_explain' => 'Ha van egy <a href="http://www.gravatar.com" target="_blank">gravatarod</a>, add meg az ott regisztrált email címedet.',
  
  'private_msg_review_title' => 'Válaszüzenet: ',
  'private_msg_review_error' => 'Hiba a Privát Üzenetek keresése közben!',
  
  'BSH_Viewing_Topic' => 'Téma megtekintése: %t%',
  'BSH_Viewing_Post' => '%sEgy hozzászólás megtekintése%s',
  'BSH_Viewing_Profile' => '%u% profiljának megtekintése',
  'BSH_Viewing_Groups' => '%sCsoportok megnézése%s',
  'BSH_Viewing_Forums' => 'Fórum megtekintése: %f%',
  'BSH_Index' => '%sIndex megtekintése%s',
  'BSH_Searching_Forums' => '%sKeresés a fórumokban%s',
  'BSH_Viewing_Onlinelist' => '%sOnline felhasználók listája%s',
  'BSH_Viewing_Messages' => '%sPrivát Üzenetek megnézése%s',
  'BSH_Viewing_Memberlist' => '%sTaglista megnézése%s',
  'BSH_Login' => '%sBejelentkezés%s',
  'BSH_Logout' => '%sKijelentkezés%s',
  'BSH_Editing_Profile' => '%sProfil szerkesztése%s',
  'BSH_Viewing_ACP' => '%sACP megnézése%s',
  'BSH_Moderating_Forum' => '%sFórumok moderálása%s',
  'BSH_Viewing_FAQ' => '%sGYIK megtekintése%s',
  'BSH_Viewing_Category' => 'Kategória megtekintése: %c%',
  
  'Board_statistic' => 'Oldalstatisztikák',
  'Database_statistic' => 'Adadtbázisstatisztikák',
  'Version_info' => 'Verzióinformáció',
  'Thereof_deactivated_users' => 'Nem aktív tagok száma',
  'Thereof_Moderators' => 'Moderátorok száma',
  'Thereof_Junior_Administrators' => 'Number of Junior Administrators',
  'Thereof_Administrators' => 'Adminisztrátorok száma',
  'Deactivated_Users' => 'Aktiválást igénylõ felhasználók száma',
  'Users_with_Mod_Privileges' => 'Moderátori joggal rendelkezõ tagok',
  'Users_with_Junior_Admin_Privileges' => 'Members with junior administrator privileges',
  'Users_with_Admin_Privileges' => 'Adminisztrátori joggal rendelkezõ tagok',
  'DB_size' => 'Adatbázis mérete',
  'Version_of_ip' => '<a href="http://www.icyphoenix.com/">Icy Phoenix</a> verzió',
  'Version_of_board' => '<a href="http://www.phpbb.com">phpBB</a> verzió',
  'Version_of_PHP' => '<a href="http://www.php.net/">PHP</a> verzió',
  'Version_of_MySQL' => '<a href="http://www.mysql.com/">MySQL</a> verzió',
  'Download_post' => 'Hozzászólás letöltése',
  
  'Download_topic' => 'Téma letöltése',
  'Always_swear' => 'Csúnya szavak elfogadása',
  
  'Shoutbox' => 'Üzenõfal',
  'Shoutbox_date' => ' Y m d h:i:s',
  'Shout_censor' => 'Sor eltávolítva!',
  'Shout_refresh' => 'Frissítés',
  'Shout_text' => 'Szöveg',
  'Viewing_Shoutbox' => 'Üzenõfal megnézése',
  'Censor' => 'Cenzor',
  
  'Edit_post_time' => 'Hozzászólás idejének szerkesztése',
  'Edit_post_time_xs' => 'Szerkeszt',
  'Topic_time_xs' => 'Téma ideje',
  'Post_time' => 'Beküldés ideje',
  'Post_time_successfull_edited' => '<b>Az idõ sikeresen frissítve.</b></span><br /><span class="postdetails">Ez az ablak 3 mp múlva bezáródik.',
  
  'staff_message' => 'Üzenet a Fõnökségtõl',
  
  'Board_Rules' => 'Fórumszabályok',
  'Forum_Rules' => 'Fórumszabályok',
  'Show_avatars' => 'Avatarok megjelenítése a témában',
  'Show_signatures' => 'Aláírások megjelenítése a témában',
  'Acronym' => 'Acronym',
  'Acronyms' => 'Acronyms',
  'User_Number' => 'Felhasználó #',
  'Member_Count' => 'Tagok',
  'Reply_message' => 'Megválaszolt üzenet',
  'Click_read_topic' => 'Kattints %side%s az elolvasáshoz', // %s's here are for uris, do not remove!
  'Create_with_generator' => 'Avatar létrehozása az Avatar Generátorral',
  'View_avatar_generator' => 'Avatar Generátor',
  'Adv_Search' => 'Részletes keresés',
  'Search_Explain' => 'Keresés az oldalon belül',
  'Login_attempts_exceeded' => 'Túllépted a %s engedélyezett belépési kísérletet. A következõ %s percben nem léphetsz be.',
  'Please_remove_install_contrib' => 'Kérjük töröld az install/ és a contrib/ könyvtárat.',
  'Search_Engines' => 'Keresõroboto:',
  'Bots_browsing_forum' => 'Keresõrobotok a fórumban:',
  'Debug_On' => 'Debug Be',
  'Debug_Off' => 'Debug Ki',
  'Page_Generation_Time' => 'Lapgenerálási idõ:',
  'Memory_Usage' => 'Memory',
  'SQL_Queries' => 'SQL lekérések',
  'Search_new2' => 'Új hozzászólások',
  'Search_new_p' => 'Hozzászólások utolsó ittjártad óta',
  'Show_In_Portal' => 'Mutasd a Home oldalon',
  'Not_Auth_View' => 'Nincs jogod ezt az oldalt megnézned.',
  'Site_Hist' => 'Oldaltörténet',
  'Links' => 'Linkek',
  'Print_View' => 'Nyomtatható verzió',
  'Browsing_topic' => 'Felhasználók, akik ezt a témát olvassák:',
  'Sudoku' => 'Sudoku',
  'Bookmarks' => 'Könyvjelzõk',
  'Set_Bookmark' => 'Könyvjelzõ ehhez a témához',
  'Remove_Bookmark' => 'Ennek a témának a könyvjelzõjének eltávolítása',
  'No_Bookmarks' => 'Nem állítottál be egy könyvjelzõt sem',
  'Always_set_bm' => 'Könyvjelzõ beállítása minden hozzászólásodhoz',
  'Found_bookmark' => '%d könyvjelzõt állítottál be.', // eg. Search found 1 match
  'Found_bookmarks' => '%d könyvjelzõt állítottál be.', // eg. Search found 24 matches
  'More_bookmarks' => 'További könyvjelzõk...', // For mozilla navigation bar

//RSS Reader Help
  'RSS' => 'RSS',
  'Rss_news_help' => 'Mi is ez?',
  'Rss_news_help_title' => 'Segítség az RSS hírolvasóhoz',
  'Rss_news_help_header' => 'Mik a feed-ek, és hogyan tudom használni?',
  'Rss_news_help_explain' => 'Egy feed általában folyamatosan frissített információval szolgál egy webtartalomról, és egy linket szolgáltat az idézett tartalom megtekintéséhez. Ha feliratkozol egy weboldal feed-jére egy feed olvasóval, akkor a weboldal tartalmáról értesülni fogsz.<br /><br /><b>Figyelem:</b> Egy weboldal feed-jére való feliratkozáshoz szükséged van egy <a href="http://www.rssowl.org/" target="new">Feed-olvasóra</a>. Egyébként egy RSS vagy Atom linkre való kattintáskor csak egy formázatlan és érthetetlen szöveghalmazt kapnál a böngészõdben.',
  'Rss_news_help_header_2' => '<b>Mi az RSS és az Atom?</b>',
  'Rss_news_help_explain_2' => 'Az RSS és az Atom két különbözõ formátumú feed. A legtöbb feed olvasó támogatja mindkét formátumot. Ez az oldal az Atom 0.3-at és az RSS 2.0-át támogatja.',
  'Rss_news_help_header_3' => '<b>Hogyan használhatok a hírolvasókat?</b>',
  'Rss_news_help_explain_3' => 'Elsõnek kell neked egy feed olvasó. Például ennek a célnak pont megfelel a <a href="http://www.rssowl.org/" target="new">www.rssowl.org</a> programja.<br /><br />Ezeket a lépéseket kell megtenned, hogy használhasd:<br /><br /><b>1.</b> Keress ezen az oldalon RSS linket. (Extra => Kereshetsz a weboldalon is új feed-eket.) <b>or</b><br /><b>2.</b> Add hozzá az egyiket az alábbi linkek közül:',
  'L_url_rss_explain' => 'URL minden fórumtémához.',
  'L_url_rss_news_explain' => 'URL csak a hírek fórumhoz.',
  'L_url_rss_atom_explain' => 'URL egy bizonyos RSS Feed-hez.',
  'Rss_news_help_rights' => 'Kérlek wedd figyelembe, hogy ez a szolgáltatás nem egyenértékû a weboldallal, és használatát bármikor megszüntetheted, illetve nem biztos, hogy minden esetben rendelkezésre áll.',
  'Rss_news_feeds' => 'RSS hírek Feed-ként',
  
  'Quick_Reply' => 'Gyors válasz',
  'Mod_CP_sticky2' => 'Fontos',
  'Mod_CP_announce2' => 'Esemény',
  'Mod_CP_global2' => 'Globális',
  'Mod_CP_normal2' => 'Normális',
  
  'Search_Flood_Error' => 'Két keresés között el kell telnie egy kis idõnek. Kérlek várj egy kicsit és próbálkozz újra.',
  
// Custom Profile Fields MOD
  'custom_field_notice' => 'Ezt a mezõt egy adminisztrátor hozta létre. Megjelölhetõ publikusnak is, meg nem is. A mezõ meg lesz *-gal jelölve, és kötelezõ lesz kitölteni.',
  'and' => ' és ',
// END Custom Profile Fields MOD

  'dsbl' => 'Az IP címed egy <a href="%url%">DNS alapú fekete lyuk listán</a> szerepel. <br />A regisztrációd blokkolva van.',
  'Emails_Only_To_Admins_Error' => 'A levelezõrendszert csak adminisztrátornak címzett levelek küldésére használhatod.',
  'Wordgraph' => 'Szófelhõ',
  'Viewing_wordgraph' => 'Látható szavak',
  'Links_For_Guests' => '<b>A regisztráláshoz muszály megnézni ezt a linket</b>',
  'New' => 'Ú',
  'New_Label' => 'Új',
  'New_Messages_Label' => 'Friss hozzászólások',
  'Show_Personal_Gallery' => 'Felhasználói galéria megnézése',
  'Login_Status' => 'Online Státusz',
  'Login_Hidden' => 'Rejtett',
  'Login_Visible' => 'Látható',
  'Login_Default' => 'Alapértelmezett',
  'Errors_Not_Found' => 'A kért címet nem találja a kiszolgáló',
  'Errors_000' => 'Ismeretlen hiba',
  'Errors_000_Full' => 'A kért cím kiszolgálása ismeretlen hibába ütközött.<br />A hibáról bejegyzés került a naplóba, kérlek abban keress a problémára használhatóbb magyarázatot.',
  'Errors_400' => 'Hiba: 400',
  'Errors_400_Full' => 'A kért cím nem érvényes cím.',
  'Errors_401' => 'Hiba: 401 - Jogosultsági hiba',
  'Errors_401_Full' => 'A kapott üzenet szerint nincs jogod a kért cím megtekintésére.',
  'Errors_403' => 'Hiba: 403',
  'Errors_403_Full' => 'A címhez való hozzáférés vissza lett utasítva.',
  'Errors_404' => 'Hiba: 404 - Fájl nem taláható',
  'Errors_404_Full' => 'A kért cím nem található a szerveren. Lehet, hogy hibás címre hivatkoztál, vagy a idõközben törlésre került.',
  'Errors_500' => 'Hiba: 500 - Hiba a beállításokban',
  'Errors_500_Full' => 'A cím kiszolgálása közben konfigurációs probléma lépett fel..<br />A hibáról bejegyzés került a naplóba, kérlek abban keress a problémára használhatóbb magyarázatot.',
  'Errors_Email_Subject' => 'Hibák: ',
  'Errors_Email_Addrress_Prefix' => 'xs_errors',
  'Errors_Email_Body' => 'Hiba van az oldalon. Kérlek nézz bele a naplófájlokba.',
  'Remote_avatar_no_image' => 'A %s nem létezik',
  'Remote_avatar_error_filesize' => 'A kép mérete túl nagy egy avatarnak (%d Byte)',
  'Remote_avatar_error_dimension' => 'A kép méretei túl nagyok egy avatarnak (%d x %d pixel)',
  'How_Many_Chatters' => 'Jelenleg <b>%d</b> felhasználó tarózkodik a chat-ben',
  'Who_Are_Chatting' => '<b>%s</b>',
  'Click_to_join_chat' => 'Klikk a chat-hez való csatlakozáshoz',
  'ChatBox' => 'ChatBox',
  'log_out_chat' => 'Sikeresen kijelentkeztél a chat-bõl ',
  'Send' => 'Küld',
  'Login_to_join_chat' => 'Bejelentkezés a chat-be',

// Hacks List
/* General */
  'Hacks_List' => 'Készítõk',
  'Page_Desc' => 'Ez a modul hozzáférhetõvé teszi a készítõk listájának a módosítását, így tudsz a listához hozzáadni, a listát szerkeszteni vagy a listából törölni attól függõen, hogy mit módosítottál/variáltál a motoron. Minden változtatás a credits.php lapon látható lesz.',
  'Deleted_Hack' => 'A %s mod készítõje törölve a listáról.<br />',
  'Updated_Hack' => 'A %s mod készítõje frissítve a listán.<br />',
  'Added_Hack' => 'A %s mod infója hozzáadva.<br />',
  'Status' => 'Státusz',
  'No_Website' => 'Nincs elérhetõ weboldal.',
  'No_Hacks' => 'Nincs megjeleníthetõ készítõ.',
  'Add_New_Hack' => 'Egy új készítõ hozzáadása',
  'User_Viewable' => 'Elrejt a felhasználói listán?',
  'Hack_Name' => 'Mod neve',
//  'Description' => 'Description',
  'Required' => 'Kötelezõ',
  'Author_Email' => 'Szerzõ email címe',
  'Version' => 'Verzió',
  'Download_URL' => 'Letöltési hely',

/* Errors */
  'Error_Hacks_List_Table' => 'Hiba a hackerek táblájának letkérése közben.',
  'Required_Field_Missing' => 'Nem adtál meg egy kötelezõen megadandó adatot.',
  'Error_File_Opening' => 'Nem lehet megnyitni a fájlt: %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
  'Newest_pic' => 'Utolsó kép', // Album Addon
  'Random_pic' => 'Véletlen kép', // Album Addon
  'Click_enlarge_pic' => 'Click on image to enlarge it',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
  'Last_Used_IP' => 'Utoljára használt IP',
  'Last_Used_OS' => 'OS',
  'Last_Used_Browser' => 'Böngészõ',
  'Last_Used_Referer' => 'Hivatkozó',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
  'Users_Admins' => 'Adminisztrátorok',
  'Users_Mods' => 'Moderátorok',
  'Users_Global_Mods' => 'Globális Moderátorok',
  'Users_Regs' => 'Felhasználók',
  'Users_Guests' => 'Vendégek',
  'Users_Hidden' => 'Rejtve',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
  'Fast' => 'Gyors',
  'Standard' => 'Általános',
  'Style' => 'Stílus',
  'User_Contacts' => 'Kapcsolat',
  'Memberlist_Users_Display' => 'Felhasználó per oldal:',
  'Sort_LastLogon' => 'Utolsó bejelentkezés',
  'Sort_Birthday' => 'Születésnap',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
  'Staff' => 'Fõnökség',
  'Rank' => 'Rang',
  'Rank_Header' => 'Rangok',
  'Rank_Image' => 'Rangkép',
  'Rank_Posts_Count' => 'Hozzászólástól függõ automatikus rang',
  'Rank_Days_Count' => 'Napoktól függõ automatikus rang',
  'Rank_Min_Des' => 'Minimális hozzászólás/nap',
  'Rank_Min_M' => 'Minimális hozzászólás',
  'Rank_Max_M' => 'Maximális hozzászólás',
  'Rank_Min_D' => 'Minimumális nap',
  'Rank_Max_D' => 'Maximális nap',
  'Rank_Special' => 'Speciális rang',
  'Rank_Special_Guest' => 'Speciális rang vendégeknek',
  'Rank_Special_Banned' => 'Speciális rang banoltaknak',
  'Current_Rank_Image' => 'Jelenlegi rangkép',
  'No_Rank' => 'Nincs hozzárendelt rang',
  'No_Rank_Image' => 'Nincs rangkép',
  'No_Rank_Special' => 'Nincs speciális rang hozzárendelve',
  'Memberlist_Administrator' => 'Adminisztrátor',
  'Memberlist_Moderator' => 'Moderátor',
  'Memberlist_User' => 'Felhasználó',
  'Guest_User' => 'Vendég',
  'Banned_User' => 'Banolt',
  'Rank1_title' => 'Rang 1 cím',
  'Rank2_title' => 'Rang 2 cím',
  'Rank3_title' => 'Rang 3 cím',
  'Rank4_title' => 'Rang 4 cím',
  'Rank5_title' => 'Rang 5 cím',
// Mighty Gorgon - Multiple Ranks - END
// Mighty Gorgon - Nav Links - BEGIN
  'QUICK_LINKS' => 'Menü',
  'MAIN_LINKS' => 'Saját linkek',
  'TOOLS_LINKS' => 'Eszközök',
  'NEWS_LINKS' => 'Hírek',
  'USERS_LINKS' => 'Felhasználók &amp; Csoportok',
  'INFO_LINKS' => 'Infó',
  'SPONSORS_LINKS' => 'Támogatók',
  'HelpDesk' => 'Segítség',
  'AvatarGenerator' => 'Avatar Generátor',
  'DBGenerator' => 'SQL-bõl-PHP Generátor ',
  'NEWS_CAT' => 'Hírkategóriák',
  'NEWS_ARC' => 'Hírarchívum',
// Mighty Gorgon - Nav Links - END
  'Activity' => 'Játékok',
  'Games' => 'Játékok',
  'Trohpy' => 'Játéksziget',
  'quick_links_games' => 'Játékok menü',
  
  'By' => 'By',
  'No_Icon_Image' => 'Nincs ikon',
  'Change_Style' => 'Stílus',
  'Change_Lang' => 'Nyelv',
  'Permissions_List' => 'Jogosultságlista',
  'IP_TEAM' => 'Icy Phoenix Csapat',
  
//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
  'Nav_Separator' => '&nbsp;&raquo;&nbsp;',
  'WeatherForecast' => 'Idõjárás elõrejelzés',
  'ErrorNotFound' => 'Fájl nem található!',
  'MGC_Users_Online' => 'MGC Online felhasználók',
  'MGC_User_Servertime' => 'Dátum',
  'MGC_User_Nickname' => 'Nicknév',
  'MGC_User_Server' => 'Kiszolgáló',
  'MGC_User_IP' => 'IP',
  'MGC_User_ID' => 'ID',
  'MGC_User_Client_Version' => 'MGC Verzió',
  
  'Country_Flag' => 'Ország',
  'Select_Country' => 'Válassz országot',
  'Extra_profile_info' => 'Extra Profil információ',
//  'Extra_profile_info_explain' => 'Itt extra információt adhatsz meg magadról, vagy írhatsz a hobbidról is. Sõt, képeket is hozzáadhatsz. A bbcode-okat ugyanúgy használhatod, mint a hozzászólásoknál, vagy az aláírásodban.',
  'Extra_profile_info_explain' => 'Itt extra információt adhatsz meg magadról, vagy írhatsz a hobbidról is. Sõt, képeket is hozzáadhatsz. A bbcode-okat ugyanúgy használhatod, mint a hozzászólásoknál, vagy az aláírásodban.',
  'Extra_window' => 'Külön ablakban nyitja meg',
  'Extra_too_long' => 'Az extra mezõ túl hosszú (max. <b>%d</b> karakter engedett)',
  'UserLike' => 'Hasonló felhasználók',
  'UserDisLike' => 'Nincs hasonló felhasználó',
  'UserLikeIns' => 'Három dologban egyezik',
  'UserDisLikeIns' => 'Nem egyezik három dologban sem',
  'UserPhone' => 'Telefonszám',
  'UserSport' => 'Sport/Csapat',
  'UserMusic' => 'Zene/Együttes',
  'UserNoInfo' => 'Nincs elérhetõ információ',
  'Last_Seen' => 'Utoljára Online',
// New MG - END

// MG CMS - BEGIN
  'CMS_TITLE' => 'CMS',
  'CMS_MANAGEMENT' => 'CMS Menedzsment',
  'CMS_CONFIG' => 'CMS Beállítás',
  'CMS_ACP' => 'Ennek a lapnak a szerkesztése',
  'CUSTOM_PAGE' => 'Egyéni oldalak',
// MG CMS - END

// Icy Phoenix - BUILD 001
  'SimilarTopics' => 'Hasonló témák',
  'Chat' => 'Chat',
  'Digests' => 'Kivonat',
  
  'CPL_REG_INFO_EXPLAIN' => 'Felhasználónév, email címek és jelszó',
  'CPL_PROFILE_INFO_EXPLAIN' => 'Általános kapcsolati információk, üzenõ lehetõségek, születésnap, érdeklõdési kör és még sok minden',
  'CPL_PROFILE_VIEWED_EXPLAIN' => 'Felhasználók, akik megnézték a profilodat',
  'CPL_AVATAR_PANEL_EXPLAIN' => 'Az avatar egy kicsiny kép, amelyik a te nevedhez van társítva',
  'CPL_SIG_EDIT_EXPLAIN' => 'Az aláírásod: meg tudsz adni bármilyen szöveget, amit csatolunk minden hozzászólásod alatt',
  'CPL_PREFERENCES_EXPLAIN' => 'A hozzászólások olvasásának és írásának általános beállításai',
  'CPL_BOARD_SETTINGS_EXPLAIN' => 'Globális beállítások (idõ, kinézet, nyelv...)',
  'Calendar_settings_EXPLAIN' => 'A naptár beállításai',
  'Hierarchy_setting_EXPLAIN' => 'Alfórumok és témák csoportosításának beállításai',
  'LOGIN_SEC_EXPLAIN' => 'Ha engedélyezed ezt a beállítást, akkor minden ezzel a felhasználónévvel történõ bejelentkezés figyelve lesz',
  'CPL_OWN_POSTS_EXPLAIN' => 'Keresés a hozzászólásaid között',
  'CPL_OWN_PICTURES_EXPLAIN' => 'A személyes galériád megnézése',
  'CPL_INBOX_EXPLAIN' => 'Beérkezõ: a fogadott privát üzeneteket tartalmazza',
  'CPL_SAVEBOX_EXPLAIN' => 'Mentett üzenetek: az elmentett privát üzeneteket tartalmazza',
  'CPL_OUTBOX_EXPLAIN' => 'Kimenõ: az elküldött, de még el nem olvasott privát üzeneteket tartalmazza',
  'CPL_SENTBOX_EXPLAIN' => 'Elküldött: az elküldött, és már elolvasott privát üzeneteket tartalmazza',
  'CPL_BOOKMARKS_EXPLAIN' => 'Minden könyvjelzõvel megjelölt téma',
  'WATCHED_TOPICS_EXPLAIN' => 'Egy lista minden megfigyelt témáról',
  'CPL_SUBSCFORUMS_EXPLAIN' => 'A feliratkozott fórumok új témái',
  'DIGESTS_EXPLAIN' => 'A kivonat egy rendszeres email, ami az általad megjelölt témák új üzeneteinek a tartalmáról értesít',
  'DRAFTS_EXPLAIN' => 'Vázlataid kezelése',

// Ajax Shoutbox - BEGIN
  'Ajax_Shoutbox' => 'Üzenõfal',
  'Ajax_Chat' => 'Chat',
  'Ajax_Archive' => 'Chat archívum',
  'Shoutbox_flooderror' => 'Nem küldhetsz gyorsan egymás után több üzenetet, mert ez a többieket nagyon zavarná. Mire ezt a szöveget végigolvasod nagy eséllyel megint tudsz üzenni. Ha mégsem, akkor megint kapsz olvasnivalót.',
  'Shoutbox_no_auth' => 'Bocsi, de csak regisztrált felhasználók használhatják az üzenõfalat',
  'Shoutbox_loading' => 'Üzenõfal töltése...',
// Errors
  'Shoutbox_unable' => 'Bocsi, de az akció nem tudott véget érni. Kérlek próbáld meg ismét.',
  'Shoutbox_empty' => 'Az adatbázis nem tartalmaz üzenetet',
  'Shoutbox_no_mode' => 'Nem érvényes a meghatározott mód',
// Archive
  'Shouts' => 'Üzenetek',
  'Statistics' => 'Statisztikák',
  'Total_shouts' => 'Összes üzenet',
  'Stored_shouts' => 'Eltárolt üzenetek',
  'My_shouts' => 'Az üzeneteim',
  'Today_shouts' => 'Az utolsó 24 óra üzenetei',
  'Top_Ten_Shouters' => 'A tíz legtöbbet üzenõ',
// Online list
  'Online_total' => 'Összes',
  'Online_registered' => 'Felhasználók',
  'Online_guests' => 'Vendégek',
  'Who_is_Chatting' => 'Chat-elõk:',
  'Shoutbox_online_explain' => 'Ez az adat az utolsó harminc másodperc hozzászólásai alapján készült',
// Ajax Shoutbox - END

  'Contact_us' => 'Kapcsolat',
  'Contact_us_explain' => 'Használd ezt a lapot, ha szeretnél nekünk üzenetet küldeni',
  'Session_invalid' => 'Érvénytelen munkamenet. Kérjük küldd el újra az ûrlapot.',

// Icy Phoenix - BUILD 007
  'Reg_Username_Short' => ' felhasználónév túl rövid',
  'Reg_Username_Long' => ' felhasználónév túl hosszú',
  'Reg_Username_Taken' => ' felhasználónév nem elérhetõ',
  'Reg_Username_Free' => ' felhasználónév elérhetõ',
  'Reg_PWD_Short' => 'Ez a jelszó túl rövid',
  'Reg_PWD_Easy' => 'Ez a jelszó túl könnyû',
  'Reg_PWD_OK' => 'Ez a jelszó elfogadható',
  'Reg_Email_Invalid' => ' email cím nem érvényes, vagy már szerepel az adatbázisban',
  'Reg_Email_OK' => ' email cím helyes',

// Moved here from lang_adv_time.php
  'time_mode' => 'Idõ kezelése',
  'time_mode_text' => 'A tél-nyár különbsége a normál idõ és a nyári idõszámítás közötti különbség. Ez 0 és 120 perc közé esõ érték, általában 60 perc.<br /><br /><strong> * A csilaggal megjelölt opció az alapértelmezett beállítás ezen az oldalon, és az adminisztrátor ajánlata, hogy erre állítsd be. </strong>',
  'time_mode_auto' => 'Automatikus mód...',
  'time_mode_full_pc' => 'A kiszolgáló ideje',
  'time_mode_server_pc' => 'Univerzális kiszolgálóidõ, Idõzóna/Nyári idõszámítás<br /><span STYLE="margin-left: 25">a számítógépedrõl</span>',
  'time_mode_full_server' => 'Kiszolgáló ideje',
  'time_mode_manual' => 'Kézi beállítás...',
  'time_mode_dst' => 'Nyári idõszámítás',
  'time_mode_dst_server' => 'Kiszolgáló szerint',
  'time_mode_dst_time_lag' => 'Tél-nyár különbség',
  'time_mode_dst_mn' => 'perc',
  'time_mode_timezone' => 'Idõzóna',
  
  'dst_time_lag_error' => 'Hiba a tél-nyár különbségben. A megadott számnak 0 és 120 között kell lennie.',
  
  'dst_enabled_mode' => ' [DST engedélyezve]',
  'full_server_mode' => 'Az idõ szinkronizálva a fórum kiszolgáló idejével',
  'server_pc_mode' => 'Az idõ szinkronizálva a kiszolgáló idejével - Idõzóna/DST információk a te számítógépedrõl lettek használva',
  'full_pc_mode' => 'Az idõ szinkronizálva a számítógéped idejével',
  
  'Smileys_Per_Page' => 'Smiley egy oldalon',

/* lang_site_hist.php - BEGIN */
  'Site_history' => 'Oldaltörténet',
  'Month' => 'Hónap',
  'Week_day' => 'Hét napjai',
  'Not_availble' => 'Nem elérhetõ',
  'Total_users' => 'Maximális felhasználó',
  'Reg_users' => 'Regisztrált felhasználó',
  'Hidden_users' => 'Rejtett felhasználók',
  'Guests_users' => 'Vendég felhasználók',
  'New_users' => 'Új felhasználók',
  'New_topics' => 'Új témák',
  'New_posts_reply' => 'Posts/Reply',
  'Most_online' => 'Legtöbb online felhasználó: %s',
  'Most_online_week' => 'Legtöbb online felhasznál az utolsó 7 napban',
  'Last_24' => 'Legtöbb online felhasználó az utolsó %s órában',
  'Top_Posting_Users' => 'Legtöbbet hozzászóló felhasználók',
  'Top_Posting_Users_week' => 'Legtöbbet hozzászóló felhasználók a héten [%s]',
  'Rank' => 'Rang',
  'Percent' => 'Százalék',
  'Graph' => 'Grafikon',
  'Top_Visiting_Users' => 'Legtöbb idõt itt töltõ felhasználók',
/* lang_site_hist.php - END */

/* lang_referrers.php - BEGIN */
  'Referrers_Title' => 'Http hivatkozók kezelése',
  'Referrers_Cleared' => 'Hivatkozók tisztítása',
  'Referrers_Clear' => 'Mindet töröl',
  'Click_Return_Referrers' => 'Kattints %side%s, hogy visszatérj a Hivatkozókra',
  'Referrers' => 'Http hivatkozók',
  'Referrer_host' => 'Hivatkozók gépneve',
  'Referrer_url' => 'Hivatkozók Url-je',
  'Referrer_ip' => 'Hivatkozók IP-je',
  'Referrer_hits' => 'Találat',
  'Referrer_first' => 'Elsõ látogatás',
  'Referrer_last' => 'Utolsó látogatás',
  'Viewing_Referrers' => 'Hivatkozók megtekintése',
/* lang_referrers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
  'X_Days' => '%d napja',
  'X_Weeks' => '%d hete',
  'X_Months' => '%d hónapja',
  'X_Years' => '%d éve',
  
  'Confirm_delete_user' => 'Tényleg törölni akarod ezt a felhasználót?',
  'Prune_no_users' => 'Nincs törölt felhasználó',
  'Prune_users_number' => 'Az alábbi %d felhasználó törölve lett:',
  
  'Prune_user_list' => 'Users who will be deleted',
  'Prune_on_click' => 'You are about to delete %d users. Are you sure?',
  'Prune_Action' => 'Click link below to execute',
  'Prune_users_explain' => 'From this page you can prune users. You can choose one of three links: delete old users who have never posted, delete old users who have never logged in, delete users who have never activated their account.<p/><b>Note:</b> There is no undo function.',
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
  'Avatar_Generator' => 'Avatar Generátor',
  'Available' => 'Elérhetõ avatarok',
  'Random' => 'Véletlen',
  'Avatar_Text' => 'Kérlek adj meg egy szöveget, ami az avatarodhoz köthetünk:',
  'Avatar_Preview' => 'Avatar elõnézet',
  'Your_Avatar' => 'Avatarod',
  'Submit_Avatar' => 'Avatar beküldése',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

  'Upload_Image_Local' => 'Kép feltöltése',
  'Uploaded_Images_Local' => 'Feltöltött képek',
  'Upload_Image_Local_Explain' => 'Kijelölt fájl feltöltése',
  'Uploaded_Image_Success' => 'A kép sikeresen fel lett töltve.',
  'Uploaded_Image_BBC' => 'Ez a BBCode-ot használhatod ehhez a képhez a hozzászólásaidban.',
  'Upload_Image_Empty' => 'Semmit te sem tudsz felküldeni... hiába próbálod!',
  'Upload_File_Too_Big' => 'A feltöltendõ fájl túl nagy! A maximális elfogadott méret:',
  'Upload_File_Type_Allowed' => 'Csak ezeket a fájltípusokat engedjük feltölteni',
  'Upload_Insert_Image' => 'BBCode beszúrása',
  'Upload_Close' => 'Bezár',
  'BBCode' => 'BBCode',
  'HTML' => 'HTML',
  
  'No_News' => 'Nincsenek hírek',
  
  'Email_confirm' => 'Email cím jóváhagyása',
  'Email_mismatch' => 'Az általad megadott email címek nem egyeznek.',
  
  'View_ballot' => 'Szavazatok megnézése',
  'Full_edit' => 'Teljes szerkesztõ módba váltás',
  'Save_changes' => 'Ment',
  'No_subject' => '(Nincs tárgy)',
  'Edit_quick_post' => 'Ennek a hozzászólásnak a gyorsszerkesztése',
  'AJAX_search_results' => 'A gyorskeresõ %s hasonló címû témát talált. Kattints ide a témák megtekintéséhez',
  'AJAX_search_result' => 'A gyorskeresõ egy hasonló címû témát talált. Kattints ide a témák megtekintéséhez',
  'More_matches_username' => 'Több mint egy felhasználónév illeszkedik a keresésre. Kérlek jelölj ki egyet az alábbi dobozból.',
  'No_username' => 'Muszáj megadnod egy felhasználónevet.',
  'AJAX_quick_search_results' => 'A gyorskeresõ %s hasonló témát talált a megadott kulcszavak alapján.<br />Jobb oldalon az elsõ találatot láthatod.<br />Kattints a KERESÉSRE a teljes lista megtekintéséhez.',
  'AJAX_quick_search_result' => 'A gyorskeresõ egy hasonló témát talált a megadott kulcszavak alapján.<br />Jobb oldalon láthatod az eredményt.',
  
  'Icon_Description' => 'Ikon meghatározása',
  
  'Feature_Disabled' => 'Ez a képesség ki van kapcsolva.',
  
// Resend Activation - BEGIN
  'Resend_activation_email' => 'Aktiváló email újraküldése',
  'Invalid_activation' => 'Felhasználó hozzáférést csak adminisztrátorok aktiválhatnak.',
  'No_actkey' => 'A hozzáférésednek nincs aktiváló kulcsa. Kérlek lépj kapcsolatba az oldal adminisztrátoraival további információért.',
  'Send_actmail_flood_error' => 'Nem indíthatsz új kérést, amíg nem ért véget az elõzõ; kérlek késõbb próbálkozz vele ismét.',
  'Resend_activation_email_done' => 'Az aktiváló email el lett küldve. Kérlek ellenõrizd le az emailjeidet további információért.',
// Resend Activation - END

  'Bots_Group' => 'Botok',
  'Bots_Color' => 'Botok színe',
  'Active_Users_Group' => 'Aktív felhasználók',
  'Active_Users_Color' => 'Aktív felhasználók színe',
  'Group_Default_Membership' => 'Alapértelmezett csoport',
  'Group_Default_Membership_Explain' => 'Válassz egy alapértelmezett csoportot a felhaszálónak, hogy hozzá lehessen rendelni e rangot és egy színt.',
  'User_Color' => 'Felhasználó színe',
  'User_Color_Explain' => 'Ha meghatározol egy színt ennek a felhasználónak, akkor az felül fogja bírálni az alapértelmezett csoport által meghatározott színt. Használ hexa kódot a szín meghatározására <b>#</b> nélkül. Például: ff0000 A PIROS kódja.',
  'No_Groups_Membership' => 'Nincs csoporttagsága',
  'No_Default_Group' => 'Nincs alapértelmezett csoport',
  'Group_members_updated' => 'A csoporttagok sikeresen frissítve.',
  'Colorize_All' => 'Minden tag kiszínezése',
  'Colorize_Selected' => 'A kiválasztottak kiszínezése',
  
  'CompanyWho' => 'A Társaság',
  'CompanyWhere' => 'Elérhetõség',
  'CompanyServices' => 'Szolgáltatások',
  'CompanyProducts' => 'Termékek',
  
  'ShareThisTopic' => 'Téma megosztása',
  
  'Remove_cookies' => 'Az oldal összes sütijének eltávolítása',
  'Cookies_deleted' => 'Minden süti le lett törölve. Ki lettél jelentkeztetve.<br />A törlés akkor lesz teljes, ha a böngészõt azonnal bezárod.',
  'Delete_cookies' => 'Sütik törlése',
  'cookies_confirm' => 'Tényleg törölni szeretnéd minden az oldalhoz kapcsolódó sütiket?<br /><br />Ez az akció ki fog jelentkeztetni.',
  
  'CustomIcy' => 'CustomIcy',
  
  'Drafts' => 'Vázlatok',
  'Drafts_Action' => 'Akció',
  'Drafts_Save' => 'Ment',
  'Drafts_Load' => 'Betölt',
  'Drafts_Saved' => 'A vázlat el lett mentve',
  'Drafts_Loaded' => 'Vázlat betöltve',
  'Drafts_No_Drafts' => 'Nincs elmentett vázlat',
  'Drafts_Delete_Sel' => 'Kijelölt törlése',
  'Drafts_Save_Question' => '<br /><br />Tényleg el akarod menteni ezt az üzenetet a vázlatok közé?<br /><br />Kérlek, hogy mindig csak az üzenet törzsét mentsd el.',
  'Drafts_Delete_Question' => '<br /><br />Tényleg törölni szeretnéd a kijelölt vázlatokat?',
  'Drafts_Type' => 'Vázlat típusa',
  'Drafts_Subject' => 'Vázlat tárgya',
  'Drafts_NT' => 'Új téma',
  'Drafts_NM' => 'Válasz',
  'Drafts_NPM' => 'Privát Üzenet',
  
  'CannotEditAdminsPosts' => 'Nem szerkesztheted az adminisztrátor hozzászólásait',
  'Random_Number' => 'Véletlenszám',
  
  'New_download' => 'Az új letöltés fel lett töltve, vagy frissítve lett.<br />Kattints %side%s, hogy megnézd.',
  'Dl_bug_tracker' => 'Hibakezelõ',
  'Downloads_ADV' => 'Letöltések+',
  
  'TopicUseful' => 'Mennyire találtad hasznosnak a témát?',
  'Article' => 'Cikk',
  'Comments' => 'Kommentárok',
  
  'Sitemap' => 'Oldaltérkép',
  
  'Delete_My_Account' => 'Hozzáférés törlése',
  'Delete_My_Account_Explain' => 'A törölni szeretnéd a hozzáférésed errõl az oldalról, akkor küld el a kérésed ezzel az ûrlappal, és letiltjuk amint lehet.<br />Kérünk tárgynak "Hozzáférés törlése" legyen megadva, és (ha akarod) pár szóban írd le, hogy miért kéred ezt.',
  
  'KB_MODE_ON' => 'TB mod engedélyezése',
  'KB_MODE_OFF' => 'TB mod tiltása',
  
  'Go_To_Page_Number' => 'Irány az oldalra',
  
  'Admin_Emails' => 'Adminisztrátorok küldhetnek információt számomra emailben',
  'Allow_PM_IN' => 'Engedem, hogy a felhasználók Privát Üzenetek küldhessenek nekem',
  'Allow_PM_IN_Explain' => 'A rendszer adminisztrátorai, moderátorai és a barátaid ettõl függetlenül küldhetnek neked üzenetet.',
  'Allow_PM_IN_SEND_ERROR' => 'A felhasználó letiltotta a normál felhasználóktól való üzenetek fogadását, így nem kapta meg a te Privát Üzenetedet sem.',

// 'UCP_ZEBRA' => 'Friends &amp; Foes',
  'UCP_ZEBRA' => 'Barátkezelõ',
  'UCP_ZEBRA_FOES' => 'Ellenség kezelése',
  'UCP_ZEBRA_FRIENDS' => 'Barátok kezelése',
  
  'ADD_FOES' => 'Új ellenség hozzáadása',
  'ADD_FOES_EXPLAIN' => 'Több felhasználót is megadhatsz, ha mindet külön sorba írod.',
  'YOUR_FOES' => 'Ellenségeid',
  'YOUR_FOES_EXPLAIN' => 'Válaszd ki az eltávolítandó felhasználóneveket és kattints a küldés gombra.<br />Tipp: a CTRL gombot lenyomva többet is ki tudsz egyszerre jelölni.',
  'FOE_MESSAGE' => 'Üzenet egy ellenségtõl',
  'FOES_EXPLAIN' => 'Az ellenségként megjelölt felhasználókat alapértelmezésben figyelmen kívül hagyod. A Hozzászólásai például számodra nem jelennek meg, személyes üzeneteket tõle nem fogadsz. Kérlek vedd figyelembe, hogy az adminisztrátorokat és a moderátorokat nem tudod így elrejteni.',
  'FOES_UPDATED' => 'Az ellenségeid listája sikeresen frissítve.',
  'FOES_UPDATE_ERROR' => 'Az ellenségeid listája nem lett frissítve.',
  'NO_FOES' => 'Jelenleg nincs ellenséged',
  
  'ADD_FRIENDS' => 'Új barát hozzáadása',
  'ADD_FRIENDS_EXPLAIN' => 'Több felhasználót is megadhatsz, ha mindet külön sorba írod.',
  'YOUR_FRIENDS' => 'Barátaid',
  'YOUR_FRIENDS_EXPLAIN' => 'Válaszd ki az eltávolítandó felhasználóneveket és kattints a küldés gombra.<br />Tipp: a CTRL gombot lenyomva többet is ki tudsz egyszerre jelölni.',
  'FRIEND_MESSAGE' => 'Üzenet egy baráttól',
  'FRIENDS' => 'Barátok',
  'FRIENDS_EXPLAIN' => 'Egy baráttal való kapcsolattartás, illetve kommunikáció sokkal gyorsabb és egyszerûbb. a template támogatja, akár külön ki is lesznek emelve.',
  'FRIENDS_UPDATED' => 'Az barátaid listája sikeresen frissítve.',
  'FRIENDS_UPDATE_ERROR' => 'Az barátaid listája nem lett frissítve.',
  'FRIENDS_ONLINE' => 'Online',
  'FRIENDS_HIDDEN' => 'Rejtett',
  'FRIENDS_OFFLINE' => 'Offline',
  'NO_FRIENDS' => 'Jelenleg nincs barátod',
  'NO_FRIENDS_OFFLINE' => 'Egy barátod sem offline',
  'NO_FRIENDS_ONLINE' => 'Egy barátod sem online',
  
  'Default' => 'Alapértelmezett',
  
  'Reserved_Author' => '[ REJTETT ]',
  'Reserved_Topic' => '[ ELZÁRT TÉMA ]',
  'Reserved_Post' => '[ ELZÁRT HOZZÁSZÓLÁS ]',
  
  'THANKS_RECEIVED' => 'Köszönet érkezett',
  
  'RECENT_USER_ACTIVITY' => 'Legfrissebb felhasználó-aktivitás',
  'USER_TOPICS_STARTED' => 'Elindított témák',
  'USER_POSTS' => 'Beküldött hozzászólások',
  'USER_TOPICS_VIEWS' => 'Megtekintett hozzászólások',
  'RECENT_USER_STARTED_TITLE' => 'indítota: %s',
  'RECENT_USER_STARTED_NAV' => 'A téma indítója: %s',
  'RECENT_USER_POSTS_TITLE' => 'amire %s hozzászólás érkezett',
  'RECENT_USER_POSTS_NAV' => 'Témák, amiket %s indított el',
  'RECENT_USER_VIEWS_TITLE' => 'megtekintették: %s',
  'RECENT_USER_VIEWS_NAV' => '%s által megtekintett témák',
  
  'WARN_NO_BUMP' => 'Te vagy az utolsó hozzászóló ebben a témában: te nem tudsz új hozzászólást beküldeni 24 órán belül, kivéve hogyha valaki más válaszol idõközben.',
  
  'LINK_THIS_TOPIC' => 'Téma linkje',
  'LINK_URL' => 'URL',
  'LINK_BBCODE' => 'BBCode',
  'LINK_HTML' => 'HTML',
  
  'NEWS_POSTED' => 'Keresés az új hozzászólásokban',
  'TOPICS_POSTED' => 'Keresés a témaindításokban',
  'POSTS_POSTED' => 'Keresés minden hozzászólásban',
  
  'ACCOUNT_DELETION_REQUEST' => '%s felhasználó kérte, hogy töröljük a hozzáférését.',
  
  'SORT_TOPICS' => 'Témák rendezése',
  'SORT_TOPICS_NEWEST' => 'Újabbak',
  'SORT_TOPICS_OLDEST' => 'Régebbiek',
  
  'EDIT_POST_DETAILS' => 'Hozzászólás részleteinek szerkesztése',
  'CURRENT_POSTER' => 'Aktuális hozzászóló',
  'NEW_POSTER' => 'Új hozzászóló',
  'DETAILS_CHANGED' => '<b>A hozzászólás részletei sikeresen meg lettek változtatva.</b></span><br /><span class="postdetails">Ez az ablak bezáródik 3 másodperc múlva.',
  
  'Redirect' => 'Átirányítás',
  'Redirect_to' => 'Ha a böngészõd nem támogatja az átirányítást, akkor kattints %side%s, hogy az új oldalra kerülj',
  
  'InProgress' => 'Folyamatban',
  
  'HAPPY_BIRTHDAY' => 'Happy Birthday',
  
  'DOWNLOAD' => 'Letöltés',
  'DOWNLOADED' => 'Letöltve',
  'FILESIZE' => 'Fájlméret',
  'FILENAME' => 'Fájl neve',
  'FILE_NOT_AUTH' => 'Nem vagy azonosítva, nem töltheted le ezt a fájlt',
  'SHOW_POSTS_FROM' => 'Mutasd a hozzászólásokat ettõl',
  'SHOW_POSTS_TO' => 'eddig',
  
  'SEE_MORE_DETAILS' => 'További részletek...',
  'UNKNOWN' => 'Ismeretlen',
  'MASS_PM' => 'Tömeges PM',
  'TEXT_FORMAT' => 'Formátum',
  'SENDER' => 'Küldõ',
  'PM_NOTIFICATION' => 'Helló!<br /><br />Érkezett a nevedre egy új Privát Üzenet a "{SITENAME}" oldalán.<br /><br />Meg tudod nézni az üzenetet, ha az alábbi linkre kattintassz:<br /><br />{U_INBOX}<br /><br />',
  
  'GSEARCH' => 'Google Keresõ',
  'GSEARCH_ENGINE' => 'Használj Google Keresõ Motort',
  'SEARCH_WHAT' => 'Mit keresel',
  'SEARCH_WHERE' => 'Hol keresed',
  'SEARCH_THIS_FORUM' => 'Keresés ebben a fórumban...',
  'SEARCH_THIS_TOPIC' => 'Keresés ebben a témában...',
  'VF_ALL_TOPICS' => 'Minden téma',
  
  'WHITE_LIST_MESSAGE' => 'Ezen az oldalon kötelezõ a felhasználói hozzáférés aktiválása. További információkat az aktiváló emailban találhatsz. Kérlek ellenõrizd le, hogy a levél nincs e a spam-ek között.',
  'CLICK_RETURN_HOME' => 'Kattints %side%s, hogy visszatérj a Home oldalra',
  
  'WEEK_DAY_SUNDAY' => 'Vasárnap',
  'WEEK_DAY_MONDAY' => 'Hétfõ',
  'WEEK_DAY_TUESDAY' => 'Kedd',
  'WEEK_DAY_WEDNESDAY' => 'Szerda',
  'WEEK_DAY_THURSDAY' => 'Csütörtök',
  'WEEK_DAY_FRIDAY' => 'Péntek',
  'WEEK_DAY_SATURDAY' => 'Szombat',
  
  'RATINGS' => 'Értékelések',
  
  'ERROR_TABLE' => 'Nem lehet lekérdezni a %s táblából',
  
  'SMILEYS' => 'Smiley-k',
  'SMILEYS_NO_CATEGORIES' => 'Nincs kategória meghatározva',
  'SMILEYS_CATEGORY' => 'Kategoria',
  'SMILEYS_GALLERY' => 'Smileygaléria',
  'SMILEYS_STANDARD' => 'Alap Smiley-k',
  
  'QUICK_LIST' => 'Teljes lista',
  'NORMAL_LIST' => 'Normál lista',
  
  'RETURN_PAGE' => '%sVissza az elõzõ oldalra%s',
  'FILE_NOT_FOUND' => 'Fájl nem található',
  'FSOCK_DISABLED' => 'FSOCK letiltva',
  
  'MANAGEMENT' => 'Menedzsment',
  'SORT_ORDER' => 'Rendezve',
  'SORT_DIR' => 'Rendezés iránya',
  
  'TIME_YEAR' => 'Év',
  'TIME_MONTH' => 'Hónap',
  'TIME_DAY' => 'Nap',
  'TIME_HOUR' => 'Óra',
  'TIME_MINUTE' => 'Perc',
  'TIME_SECOND' => 'Másodperc',
  
  'CONTACTS' => 'Kapcsolatok',
  
// Event Registration - BEGIN
  'Reg_Title' => 'Rendezvény regisztráció',
  'Post_Registration' => 'Rendezvény regisztráció',
  'Add_registration' => 'Rendezvény regisztráció hozzáadása',
  'Add_reg_explain' => '&nbsp;&bull; Jelöld <i>Aktívnak</i>, ha szeretnél egy regisztrációs ûrlapot megjeleníteni a hozzászólásnál. Illetve ha nem szeretnél, akkor ne jelöld be.<br />&nbsp;&bull; Jelöld be a <i>Resetet</i> ha az aktuális regisztrációkat törölni szeretnéd.<br />&nbsp;&bull; Add meg a regisztrálható <i>Helyek</i> számát, ha korlátozni szeretnéd a jelentkezõk számát. "0" vagy üres = korlátlan.',
  'reg_activate' => 'Aktivál',
  'reg_reset' => 'Reset',
  'Reg_Insert' => 'Regisztráltál a rendezvényre.',
  'Reg_Change' => 'Regisztráció megváltoztatva.',
  'Reg_Confirm' => 'Regisztráció elfogadva.',
  'Reg_Unregister' => 'Regisztráció visszavonva.',
  'Reg_Max_Registrations' => 'Minden regisztrálható hely elkelt. Nem tudunk több regisztrációt elfogadni.',
  'Reg_No_Slots_Left' => 'Nem maradt több regisztrálható hely.',
  'Reg_One_Slot_Left' => 'Egy üres hely van még.',
  'Reg_Slots_Left' => '%s üres hely van még.',
  'Reg_Self_Unregister' => 'Regisztráció visszavonása',
  'Reg_Own_Confirmation' => 'Elfogadás',
  'Reg_Own_Confirmed' => 'elfogadva',
  'Reg_Green_Option' => 'Zöld opció',
  'Reg_Blue_Option' => 'Kék opció',
  'Reg_Red_Option' => 'Piros opció',
  'Reg_Value_Max_Registrations' => 'Helyek',
  'Reg_Do' => 'Jelentkezek',
  'Reg_Maybe' => 'Nem biztos',
  'Reg_Dont' => 'Most nem megyek',
  'Reg_Head_Username' => 'Felhasználó:',
  'Reg_Head_Time' => 'Dátum:',
  'Reg_for' => 'Regisztrációs idõ: ',
  'Reg_for_explain' => '[ Addj meg 0-t vagy hagyd üresen, ha nem akarod, hogy lejárjon a regisztráció ]',
  'Reg_no_options_specified' => 'Megjelölhetsz egy opciót a regisztráláskor.',
  'Reg_event_date' => '<b>A rendezvény idõpontja: </b>',
// Event Registration - END

  'REPLY_PREFIX_OLD' => 'Re: ',
  'REPLY_PREFIX' => 'Re: ',
  
  'READ_ONLY_FORUM' => 'Bocsi, de a fórum <b>CSAK OLVASHATÓ</b> módba van kapcsolva. Nem lehet a fórumba üzenetet beküldeni. Kérlek próbálkozz késõbb.',

// Tickets Submission - BEGIN
  'TICKET_CAT' => 'Categória',
// Tickets Submission - END




/*Special Cases, Do not bother to change for another language */
  'YES' => 'Igen',
  'NO' => 'Nem',
  'HL_File_Error' => $lang['Error_File_Opening'],
  
  'Prune_commands' => 
  array (
// here you can make more entries if needed
    0 => 'Nem-hozzászóló felhasználók tisztítása',
    1 => 'Inaktív felhasználók tisztítása',
    2 => 'Nem-aktivált felhasználók tisztítása',
    3 => 'Hosszú-ideje-csendben-lévõ felhasználók tisztítása',
    4 => 'Szótlanok tisztítása',
  ),
  'Prune_explain' => 
  array (
    0 => 'Azok, akik még sose szóltak hozzá, <b>kivéve</b> az útóbbi %d napban regisztrált új felhasználók',
    1 => 'Akik még sohasem jelentkeztek be, <b>kivéve</b> az útóbbi %d napban regisztrált új felhasználók',
    2 => 'Akik soha sem aktiválták felhasználójukat, <b>kivéve</b> az útóbbi %d napban regisztrált új felhasználók',
    3 => 'Akik 60 napja nem látogatták meg az oldalt, <b>kivéve</b> az útóbbi %d napban regisztrált új felhasználók',
    4 => 'Akik a regisztrációjuktól számított elsõ 10 napban 1-nél kevesebbszer szóltak hozzá, <b>kivéve</b> az útóbbi %d napban regisztrált új felhasználók'),
// Timezones - BEGIN
  'All_times' => 'Minden idõ: %s',
  'tzs' => array (
// Time zones short
    -12 => 'GMT - 12 óra',
    -11 => 'GMT - 11 óra',
    -10 => 'GMT - 10 óra',
    -9 => 'GMT - 9 óra',
    -8 => 'GMT - 8 óra',
    -7 => 'GMT - 7 óra',
    -6 => 'GMT - 6 óra',
    -5 => 'GMT - 5 óra',
    -4 => 'GMT - 4 óra',
    '-3.5' => 'GMT - 3.5 óra',
    -3 => 'GMT - 3 óra',
    -2 => 'GMT - 2 óra',
    -1 => 'GMT - 1 óra',
    0 => 'GMT',
    1 => 'GMT + 1 óra',
    2 => 'GMT + 2 óra',
    3 => 'GMT + 3 óra',
    '3.5' => 'GMT + 3.5 óra',
    4 => 'GMT + 4 óra',
    '4.5' => 'GMT + 4.5 óra',
    5 => 'GMT + 5 óra',
    '5.5' => 'GMT + 5.5 óra',
    6 => 'GMT + 6 óra',
    '6.5' => 'GMT + 6.5 óra',
    7 => 'GMT + 7 óra',
    8 => 'GMT + 8 óra',
    9 => 'GMT + 9 óra',
    '9.5' => 'GMT + 9.5 óra',
    10 => 'GMT + 10 óra',
    11 => 'GMT + 11 óra',
    12 => 'GMT + 12 óra',
    13 => 'GMT + 13 óra',
  ), 'tz' => array (
// These are displayed in the timezone select box
    -12 => '(GMT -12 óra) Eniwetok, Kwajalein',
    -11 => '(GMT -11 óra) Midway-sziget, Szamoa',
    -10 => '(GMT -10 óra) Hawaii',
    -9 => '(GMT -9 óra) Alaszka',
    -8 => '(GMT -8 óra) Csendes-óceáni idõ, Tijuana',
    -7 => '(GMT -7 óra) Arizona, Hegyi idõ',
    -6 => '(GMT -6 óra) Amerikai középidõ, Közép-Amerika, Mexikóváros',
    -5 => '(GMT -5 óra) Bogota, Lima, Quito, Indiana, Keleti idõ',
    -4 => '(GMT -4 óra) Atlanti-óceáni idõ, Caracas, La Paz',
    '-3.5' => '(GMT -3.5 óra) Új-Founland',
    -3 => '(GMT -3 óra) Brazília, Buenos Aires, Georgetown, Grönland',
    -2 => '(GMT -2 óra) Közép-atlanti idõzóna',
    -1 => '(GMT -1 óra) Azori-szigetek, Zöld-foki-szigetek',
    0 => '(GMT 0) Greenwich, London, Dublin, Lisszabon',
    1 => '(GMT +1 óra) Belgrád, Budapest, Ljubljana, Pozsony, Prága',
    2 => '(GMT +2 óra) Budapest nyári isz., Athén, Isztambul, Minszk, Helsinki',
    3 => '(GMT +3 óra) Bagdad, Kuvait, Rijád, Moszkva, Szentpétervár',
    '3.5' => '(GMT +3.5 óra) Teherán',
    4 => '(GMT +4 óra) Baku, Tbiliszi',
    '4.5' => '(GMT +4.5 óra) Kabul',
    5 => '(GMT +5 óra) Iszlámbád, Karacsi, Taskent, Jekatyerinburg',
    '5.5' => '(GMT +5.5 óra) Chennai, Kalkutta, Mumbai, Új-Delhi',
    6 => '(GMT +6 óra) Almaty, Novoszibirszk, Astana, Dhaka',
    '6.5' => '(GMT +6.5 óra) Rangun',
    7 => '(GMT +7 óra) Bangkok, Dzsakarta, Hanoi, Krasznojarszk',
    8 => '(GMT +8 óra) Hongkong, Peking, Irkutszk, Ulánbátor, Perth',
    9 => '(GMT +9 óra) Jakutszk, Oszkara, Szapporo, Tokió, Szöul',
    '9.5' => '(GMT +9.5 óra) Adelaide, Darwin',
    10 => '(GMT +10 óra) Brisbane, Canberra, Melbourne, Sydney, Guam',
    11 => '(GMT +11 óra) Magadán, Salamon-szigetek, Új Kaledónia',
    12 => '(GMT +12 óra) Auckland, Wellington, Fidzsi-szigetek, Kamcsatka',
    13 => '(GMT +13 óra) Nuku\'alofa'
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
    'Mon' => 'Hétf.',
    'Tue' => 'Kedd.',
    'Wed' => 'Szer.',
    'Thu' => 'Csüt.',
    'Fri' => 'Pént.',
    'Sat' => 'Szomb.',
    'January' => 'Január',
    'February' => 'Február',
    'March' => 'Március',
    'April' => 'Április',
    'May' => 'Május',
    'June' => 'Június',
    'July' => 'Július',
    'August' => 'Augusztus',
    'September' => 'Szeptember',
    'October' => 'Október',
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