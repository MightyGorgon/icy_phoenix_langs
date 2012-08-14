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
	'Home' => 'Home',
	'Forum' => 'Forum',
	'Category' => 'Kategorija',
	'Topic' => 'Tema',
	'Topics' => 'Teme',
	'Replies' => 'Odgovori',
	'Views' => 'Pogledano',
	'Post' => 'Post',
	'Posts' => 'Postovi',
	'Posted' => 'Postavljeno',
	'Username' => 'Korisni&#269;ko ime',
	'Password' => 'Lozinka',
	'Email' => 'Email',
	'Poster' => 'Poster',
	'Author' => 'Autor',
	'Time' => 'Vrijeme',
	'Hours' => 'Sati',
	'Message' => 'Poruka',

	'1_Day' => '1 Dan',
	'7_Days' => '7 Dani',
	'2_Weeks' => '2 Sedmice',
	'1_Month' => '1 Mjesec',
	'3_Months' => '3 Mjeseca',
	'6_Months' => '6 Mjeseca',
	'1_Year' => '1 Godina',

	'Go' => 'Idi',
	'Jump_to' => 'Idi na',
	'Submit' => 'Po&#353;alji',
	'Reset' => 'Resetiraj',
	'Cancel' => 'Poni&#353;ti',
	'Preview' => 'Pregledaj',
	'Confirm' => 'Potvrdi',
	'Spellcheck' => 'Gramatika',
	'Yes' => 'Da',
	'No' => 'Ne',
	'Enabled' => 'Uklju&#269;eno',
	'Disabled' => 'Isklju&#269;eno',
	'Error' => 'Gre&#353;ka',

	'GO' => 'Idi',
	'JUMP_TO' => 'Idi na',
	'SUBMIT' => 'Po&#353;alji',
	'RESET' => 'Resetiraj',
	'CANCEL' => 'Poni&#353;ti',
	'PREVIEW' => 'Pregledaj',
	'CONFIRM' => 'Potvrdi',
	'YES' => 'Da',
	'NO' => 'Ne',
	'ENABLED' => 'Uklju&#269;eno',
	'DISBALED' => 'Isklju&#269;eno',
	'ERROR' => 'Gre&#353;ka',

	'Next' => 'Naprijed',
	'Previous' => 'Nazad',
	'Goto_page' => 'Idi na stranu',
	'Joined' => 'U&#269;lanjen',
	'IP_Address' => 'IP Adrese',

	'Select_forum' => 'Izaberi forum',
	'View_latest_post' => 'Pogledaj zadnje postove',
	'View_newest_post' => 'Pogledaj nove postove',
	'Page_of' => 'Strana <b>%d</b> of <b>%d</b>', // Replaces with: Page 1 of 2 for example

	'ICQ' => 'ICQ Broj',
	'AIM' => 'AIM Adresa',
	'JABBER' => 'Jabber',
	'MSNM' => 'MSN Live',
	'SKYPE' => 'Skype',
	'YIM' => 'Yahoo Messenger',

	'Forum_Index' => 'Forum',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Zapo&#269;ni novu temu',
	'Reply_to_topic' => 'Odgovori na temu',
	'Reply_with_quote' => 'Odgovori sa quote',

	'Click_return_login' => 'Klikni %sOvdje%s za ponovo',
	'Click_return_index' => 'Klikni %sOvdje%s za povratak na Index',
	'Click_return_forum' => 'Klikni %sOvdje%s za povratak na forum',
	'Click_return_topic' => 'Klikni %sOvdje%s za povratak ne temu', // %s's here are for uris, do not remove!
        'Click_return_viewtopic' => 'Klikni %sOvdje%s za povratak na temu',
	'Click_return_modcp' => 'Klikni %sOvdje%s za povratak na Moderator kontrol panel',
	'Click_return_profile' => 'Click %sHere%s to return to User Profile',
	'Click_return_preferences' => 'Click %sHere%s to return to Preferences',
	'Click_return_group' => 'Klikni %sOvdje%s za povratak na info o grupi',
	'Click_return_drafts' => 'Click %sHere%s to return to Drafts',
	'Click_return_inbox' => 'Click %sHere%s to return to your Inbox',
	'Click_view_message' => 'Klikni %sOvdje%s da pogleda&#353; svoje poruke',
	'Click_view_privmsg' => 'Click %sHere%s to visit your Inbox',

	'Admin_panel' => 'ACP',

	'Board_disable' => 'Forum je trenutno nedostupan.  molimo poku&#353;ajte kasnije.',

// Global Header strings
	'Registered_users' => 'Registrirani Korisnici:',
	'Browsing_forum' => 'korisnici koji gledaju ovaj forum:',
	'Online_users_zero_total' => 'Sveukupno je bilo <b>0</b> korisnika online: ',
	'Online_users_total' => 'Sveukupno je bilo <b>%d</b> korisnika online: ',
	'Online_user_total' => 'Trenutno je <b>%d</b> korisnika online: ',
	'AC_Online_users_zero_total' => 'Trenutno je <b>0</b> korisnika na chatu: ',
	'AC_Online_users_total' => 'Trenutno je <b>%d</b> korisnika na chatu: ',
	'AC_Online_user_total' => 'Trenutno je <b>1</b> korisnik na chatu: ',
	'Reg_users_zero_total' => '0 Registriranih, ',
	'Reg_users_total' => '%d Registriranih, ',
	'Reg_user_total' => '%d Registriranih, ',
	'Hidden_users_zero_total' => '0 Sakrivenih i ',
	'Hidden_user_total' => '%d Sakrivenih i ',
	'Hidden_users_total' => '%d Sakrivenih i ',
	'Guest_users_zero_total' => '0 Posjetitelja',
	'Guest_users_total' => '%d Posjetitelja',
	'Guest_user_total' => '%d Posjetitelja',
	'Record_online_users' => 'Najvi&#353;e korisnika/ca istovremeno online bilo je <b>%s</b> %s', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sAdministrator%i',
	'Mod_online_color' => '%sModerator%i',

	'You_last_visit' => 'Va&#353;a zadnja posjeta %s', // %s replaced by date/time
	'Current_time' => 'Danas je %s', // %s replaced by time

	'Search_new' => 'Pogledaj nove postove',
	'Search_your_posts' => 'Pogledaj svoje postove',
	'Search_unanswered' => 'Pogledaj neodgovorene',

	'Register' => 'Registracija',
	'Profile' => 'Profil',
	'Edit_profile' => 'Uredi svoj Profil',
	'Search' => 'Tra&#382;i',
	'Memberlist' => 'Lista korisnika',
	'FAQ' => 'FAQ',
	'KB_title' => 'Baza Znanja',
	'BBCode_guide' => 'Uputstva za BBCode',
	'Usergroups' => 'Korisni&#269;ke grupe',
	'Last_Post' => 'Zadnji post',
	'Moderator' => 'Moderator',
	'Moderators' => 'Moderatori',

// Stats block text
	'Posted_articles_zero_total' => 'Na&#353;i korisnici postavili su <b>0</b> tema', // Number of posts
	'Posted_articles_total' => 'Na&#353;i korisnici postavili su <b>%d</b> tema', // Number of posts
	'Posted_article_total' => 'Na&#353;i korisnici postavili su <b>%d</b> tema', // Number of posts
	'Registered_users_zero_total' => 'Imamo <b>0</b> registriranih korisnika', // # registered users
	'Registered_users_total' => 'Imamo <b>%d</b> registriranih korisnika', // # registered users
	'Registered_user_total' => 'Imamo <b>%d</b> registriranih korisnika', // # registered users
	'Newest_user' => 'Najnoviji registrirani korisnik je <b>%s%s%s</b>', // a href, username, /a

	'No_new_posts_last_visit' => 'Nema novih postova od va&#353;e zadnje posjete',

	'No_new_posts_global_announcement' => 'Nema novih [ Gl. Obavjest ]',
	'New_posts_global_announcement' => 'Novi [ Gl. Obavjest ]',
	'No_new_posts_announcement' => 'Nema novih [ Obavjest ]',
	'New_posts_announcement' => 'Novi [ Obavjest ]',
	'No_new_posts_sticky' => 'Nema novih [ Ljepljivi ]',
	'New_posts_sticky' => 'Novi [ Ljepljivi ]',
	'No_new_posts_locked' => 'Nema novih [Zaklju&#269;ani ]',
	'New_posts_locked' => 'Novii [ Zaklju&#269;ani ]',
	'No_new_posts' => 'Nema novih',
	'New_posts' => 'Novi',
	'New_post' => 'Novi',
	'No_new_posts_hot' => 'Nema novih [ Popularni ]',
	'New_posts_hot' => 'Novi [ Popularni ]',

	'Forum_no_new_posts' => 'Nema novih [Forum]',
	'Forum_new_posts' => 'Novi [Forum]',
	'Cat_no_new_posts' => 'Nema novih [Kategorija]',
	'Cat_new_posts' => 'Novi [Kategorija]',
	'Forum_is_locked' => 'Forum je zaklju&#269;an',

// Login
	'Enter_password' => 'Molimo unesite korisni&#269;ko ime i lozinku.',
	'Login' => 'Pristupi',
	'Logout' => 'Odjavi se',
	'Forgotten_password' => 'Zaboravio sam lozinku',
	'AUTOLOGIN' => 'Pristupi automatski pri svakom posjetu',
	'Error_login' => 'Krivo ste upisali korisni&#269;ko ime, ili ste unjeli krivu lozinku.',

// Index page
	'No_Posts' => 'Nema postova',
	'No_forums' => 'Ova stranica nema foruma',

	'Private_Message' => 'Privatna poruka',
	'Private_Messages' => 'Privatne poruke',
	'Who_is_Online' => 'Trenutno na forumu',

	'Mark_all_forums' => 'Ozna&#269;i sve pro&#269;itanim',
	'Forums_marked_read' => 'Forumi su ozna&#269;eni ',

// Viewforum
	'View_forum' => 'Pogledaj forum',

	'Reached_on_error' => 'Prikazana stranica ima gre&#353;ku.',

	'Display_topics' => 'Display topics from previous',
	'All_Topics' => 'Sve teme',

	'Topic_News_nb' => 'Novosti',
	'Topic_global_announcement_nb' => 'Glavna obavjest',
	'Topic_Announcement_nb' => 'Obavjet',
	'Topic_Sticky_nb' => 'Ljepljivo',
	'Topic_Moved_nb' => 'Premje&#353;teno',
	'Topic_Poll_nb' => 'Glasanja',
	'Topic_Event_nb' => 'Dogaðaj',
	'Topic_Announcement' => '<b>Obavjest:</b>',
	'Topic_Sticky' => '<b>Ljepljivo:</b>',
	'Topic_Moved' => '<b>Premje&#353;teno:</b>',
	'Topic_Poll' => '<b>Glasanja:</b>',
	'Topic_Event' => '<b>Dogaðaj:</b>',
	'Topic_global_announcement' => '<b>Glavna obavjest:</b>',
	'Post_global_announcement' => 'Glavna obavjest',


	'Mark_all_topics' => 'Ozna&#269;i kao pro&#269;itano',
	'Topics_marked_read' => 'Teme su ozna&#269;ene kao pro&#269;itane',

/*
	'Rules_post_can' => ' <b>Mo&#382;ete</b> pisati teme u ovom forumu',
	'Rules_post_cannot' => ' <b>Nemo&#382;ete</b> pisati teme u ovom forumu',
	'Rules_reply_can' => ' <b>Mo&#382;ete</b> odgovarati na teme u ovom forumu',
	'Rules_reply_can_own' => 'Vi <b>mo&#382;ete</b> odgovarati na va&#353;e teme u ovom forumu',
	'Rules_reply_cannot' => ' <b>Nemo&#382;ete</b> odgovarati na teme u ovom forumu',
	'Rules_edit_can' => ' <b>Mo&#382;ete</b> ure&#273;ivati teme u ovom forumu',
	'Rules_edit_cannot' => ' <b>Nemo&#382;ete</b> ure&#273;ivati teme u ovom forumu',
	'Rules_delete_can' => ' <b>Mo&#382;ete</b> brisati teme u ovom forumu',
	'Rules_delete_cannot' => ' <b>Nemo&#382;ete</b> brisati teme u ovom forumu',
	'Rules_vote_can' => ' <b>Mo&#382;ete</b> glasati u ovom forumu',
	'Rules_vote_cannot' => ' <b>Nemo&#382;ete</b> glasati u ovom forumu',
*/
	'Rules_post_can' => ' <b>Mo&#382;ete</b> pisati teme',
	'Rules_post_cannot' => ' <b>Nemo&#382;ete</b> pisati teme',
	'Rules_reply_can' => ' <b>Mo&#382;ete</b> odgovarati na teme',
	'Rules_reply_can_own' => 'Vi <b>mo&#382;ete</b> odgovarati na va&#353;e',
	'Rules_reply_cannot' => ' <b>Nemo&#382;ete</b> odgovarati na teme',
	'Rules_edit_can' => ' <b>Mo&#382;ete</b> ure&#273;ivati teme',
	'Rules_edit_cannot' => ' <b>Nemo&#382;ete</b> ure&#273;ivati',
	'Rules_delete_can' => ' <b>Mo&#382;ete</b> brisati teme',
	'Rules_delete_cannot' => ' <b>Nemo&#382;ete</b> brisati',
	'Rules_vote_can' => ' <b>Mo&#382;ete</b> glasati',
	'Rules_vote_cannot' => ' <b>Nemo&#382;ete</b> glasati',
	'Rules_moderate' => ' <b>Mo&#382;ete</b> %sure&#273;ivati ovaj forum%s', // %s replaced by a href links, do not remove!

// 'No_topics_post_one' => 'Nema tema u ovom forumu.<br />Klikni na <b>Nova tema</b> na ovoj strani za novi post.',
	'No_topics_post_one' => 'Nema tema u ovom forumu.<br />Klikni na <b>Nova tema</b> na ovoj strani za novi post.',

// Viewtopic
	'View_topic' => 'Pogledaj temu',

	'Guest' => 'Gosti',
	'Post_subject' => 'Naslov',
	'View_next_topic' => 'Pogledaj sljede&#263;u temu',
	'View_previous_topic' => 'Pogledaj predhodnu temu',
	'Submit_vote' => 'Potvrdi glasanje',
	'View_results' => 'Pogledaj rezultate',

	'No_newer_topics' => 'Nema novih tema u ovom forumu',
	'No_older_topics' => 'Nema starijih tema u ovom forumu',
	'No_posts_topic' => 'Nema postova za ovu temu',

	'Display_posts' => 'Prika&#382;i postove u poslednjih',
	'All_Posts' => 'Svi postovi',
	'Newest_First' => 'Od najnovije',
	'Oldest_First' => 'Od najstarije',

	'Back_to_top' => 'Idi na vrh',
	'Back_to_bottom' => 'Idi na dno',

	'Read_profile' => 'Pogledaj korisnikov\e Profil',
	'Send_email' => 'Po&#353;alji e-mail korisniku',
	'Visit_website' => 'Posjeti korisnikovu stranicu',
	'ICQ_status' => 'ICQ Status',
	'Edit_delete_post' => 'Izmjeni/Obri&#353;i ovaj post',
	'View_IP' => 'Pogledaj IP adresu korisnika',
	'Delete_post' => 'Obri&#353;i ovaj post',

	'wrote' => 'wrote', // proceeds the username and is followed by the quoted text
	'Quote' => 'Quote', // comes before bbcode quote output.
	'Code' => 'Code', // comes before bbcode code output.

	'Edited_time_total' => 'Last edited by %s on %s, edited %d time in total', // Last edited by me on 12 Oct 2001, edited 1 time in total
	'Edited_times_total' => 'Last edited by %s on %s, edited %d times in total', // Last edited by me on 12 Oct 2001, edited 2 times in total

	'Lock_topic' => 'Zaklju&#269;aj ovu temu',
	'Unlock_topic' => 'Otklju&#269;aj ovu temu',
	'Move_topic' => 'Premjesti ovu temu',
	'Delete_topic' => 'Obri&#353;i ovu temu',
	'Split_topic' => 'Podijeli ovu temu',

	'Stop_watching_topic' => 'Prekini nadgledanje ove teme',
	'Start_watching_topic' => 'Nadgledaj ovu temu novim odgovorima',
	'No_longer_watching' => 'Vi&#353;e ne nadgledate ovu temu',
	'You_are_watching' => 'Sada nadgledate ovu temu',

	'Total_votes' => 'Ukupno glasova',

// Posting/Replying (Not private messaging!)
	'Message_body' => 'Tijelo poruke',
	'Topic_review' => 'Pregled teme',

	'No_post_mode' => 'Niste odabrali post mode', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

	'Post_a_new_topic' => 'Napi&#353;i novu temu',
	'Post_a_reply' => 'Odgovori na temu',
	'Post_topic_as' => 'Postavi temu kao',
	'Edit_Post' => 'Uredi post',
	'Options' => 'Opcije',

	'PM_Read' => 'Pro&#269;itane PP',
	'PM_Unread' => 'Nepro&#269;itane PP',
	'PM_Replied' => 'Odrovorene PP',

	'Post_Announcement' => 'Obavijest',
	'New_post_Announcement' => 'Nova obavijest',
	'Post_Sticky' => 'Ljepljiva',
	'New_post_Sticky' => 'Nova ljepljiva',
	'Post_Normal' => 'Normalna',

	'Confirm_delete' => 'Jesi li siguran da &#382;eli&#353; obrisat ovaj post?',
	'Confirm_delete_poll' => 'Jesi li siguran da &#382;eli&#353; obrisat ovo glasanje?',

	'Flood_Error' => 'Nemo&#382;ete poslati post odmah nakon va&#353;eg posljednjeg, molimo vas probajte ponovo malo kasnije.',
	'Empty_subject' => 'Morate odrediti naslov kada postavljate novu temu.',
	'Empty_message' => 'Morate unjeti tekst u poruku.',
	'Forum_locked' => 'Ovaj forum je zaklju&#269;an: nemo&#382;ete pisati, odgovoriti, niti ure&#273;ivati post.',
	'Topic_locked' => 'Ova tema je zaklju&#269;ana: nemo&#382;ete ure&#273;ivati niti odgovarati.',
	'No_post_id' => 'Morate izabrati post koji &#382;elite ure&#273;ivati',
	'No_topic_id' => 'Mora&#353; izabrati temu/post na koju/i odgovara&#353;',
	'No_valid_mode' => 'Mo&#382;e&#353; samo slati/odgovarati/ure&#273;ivati/citirati postove.<br />Vrati se i poku&#353;aj ponovo.',
	'No_such_post' => 'Ne postoji takav post.<br />Vrati se i poku&#353;aj ponovo.',
	'Edit_own_posts' => 'Mo&#382;e&#353; ure&#273;ivati samo svoje postove.',
	'Delete_own_posts' => 'Mo&#382;e&#353; izbrisati samo svoje postove.',
	'Cannot_delete_replied' => 'Ne mo&#382;e&#353; izbrisati postove na koje je odgovoreno.',
	'Cannot_delete_poll' => 'Ne mo&#382;e&#353; izbrisati aktivno glasanje.',
	'Empty_poll_title' => 'Mora&#353; specificirati naslov glasanja.',
	'To_few_poll_options' => 'Mora&#353; unijeti barem dvije opcije za glasovanje.',
	'To_many_poll_options' => 'Unio/la si previ&#353;e opcija za glasanje.',
	'Post_has_no_poll' => 'vaj post ne sadr&#382;i glasanje.',
	'Already_voted' => 'Ve&#263; si glasovao/la u ovom glasanju.',
	'No_vote_option' => 'Mora&#353; ozna&#269;iti opciju za koju glasa&#353;.',

	'Add_poll' => 'Dodaj glasanje',
	'Add_poll_explain' => 'Ukoliko ne &#382;elite dodati glasanje u va&#353;u temu,ostavite ovo prazno.',
	'Poll_question' => 'Glasa&#269;ko pitanje',
	'Poll_option' => 'Glasa&#269;ke opcije',
	'Add_option' => 'Dodaj opciju',
	'Update' => 'Nadogradi',
	'Delete' => 'Izbri&#353;i',
	'Poll_for' => 'Trajanje glasanja',
	'Days' => 'Dani', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Upi&#353;i 0 ili ostavi prazno pa glasanje beskona&#269;no  ]',
	'Delete_poll' => 'Obri&#353;i glasanje',

	'POST_ENABLE_BBCODE' => 'Enable BBCode in this post',
	'POST_ENABLE_SMILEYS' => 'Enable Smileys in this post',
	'POST_ENABLE_HTML' => 'Enable HTML in this post',
	'POST_ENABLE_ACRO_AUTO' => 'Enable Acronyms and Autolinks in this post',
	'Disable_HTML_post' => 'Isklju&#269;i HTML u ovom postu',
	'Disable_ACRO_AUTO_post' => 'Isklju&#269;i Acronyms i Autolinks u ovom postu',
	'Disable_BBCode_post' => 'Isklju&#269;i BBCode u ovom postu',
	'Disable_Smilies_post' => 'Isklju&#269;i Smilies u ovom postu',

	'HTML_is_ON' => 'HTML je <u>ON</u>',
	'HTML_is_OFF' => 'HTML je <u>OFF</u>',
	'BBCode_is_ON' => '%sBBCode%s je <u>ON</u>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => '%sBBCode%s je <u>OFF</u>',
	'Smilies_are_ON' => 'Smajlovi su <u>ON</u>',
	'Smilies_are_OFF' => 'Smajlovi su <u>OFF</u>',

	'Attach_signature' => 'Dodaj potpis (potpis mo&#382;e bit izmjenjen u profilu)',
	'Notify' => 'Obavijesti me kad odgovor bude postan',
	'Delete_post' => 'Obri&#353;i ovaj post',

	'Stored' => 'Post je uspje&#353;no poslan.',
	'Deleted' => 'Post je uspje&#353;no izbrisan.',
	'Poll_delete' => 'Glasanje je uspje&#353;no izbrisano.',
	'Vote_cast' => 'Va&#353; glas je zabilje&#382;en.',

	'Topic_reply_notification' => 'Obavijest o odgovoru na temu/post',

	'Emoticons' => 'Smajli&#263;i',
	'More_emoticons' => 'Jo&#353; smajlova',

// Private Messaging
	'Private_Messaging' => 'Privatne poruke',

	'Login_check_pm' => 'Prijavi se da pogleda&#353; svoje poruke',
	'New_pms' => 'Ima&#353; %d novu poruku', // You have 2 new messages
	'New_pm' => 'Ima&#353; %d novu poruku', // You have 1 new message
	'No_new_pm' => 'Nema&#353; novih PP',
	'Unread_pms' => 'Ima&#353; %d nepro&#269;itanih poruka',
	'Unread_pm' => 'Ima&#353; %d nepro&#269;itanih poruka',
	'No_unread_pm' => 'Neam&#353; nepro&#269;itanih poruka',
	'You_new_pm' => 'Stigla ti je nova privatna poruka',
	'You_new_pms' => 'Nova privatna poruka u dolaznim porukama',
	'You_no_new_pm' => 'Nema&#353; novih poruka',

	'Unread_message' => 'Nepro&#269;itana PP',
	'Read_message' => 'Pro&#269;itaj PP',

	'Read_pm' => 'Pro&#269;itaj PP',
	'Post_new_pm' => 'Po&#353;alji novu PP',
	'Post_reply_pm' => 'Odgovori na PP',
	'Post_quote_pm' => 'Citiraj PP',
	'Edit_pm' => 'Uredi PP',

	'Inbox' => 'Primljeno',
	'Outbox' => 'Odlazno',
	'Savebox' => 'Spremljeno',
	'Sentbox' => 'Poslano',
	'Flag' => 'Zastavica',
	'Subject' => 'Naslov',
	'From' => 'Od',
	'To' => 'Za',
	'Date' => 'Datum',
	'Mark' => 'Ozna&#269;eno',
	'Sent' => 'Poslano',
	'Saved' => 'Spremljeno',
	'Delete_marked' => 'Izbri&#353;i ozna&#269;eno',
	'Delete_all' => 'Izbri&#353;i sve',
	'Save_marked' => 'Spremi ozna&#269;eno',
	'Download_marked' => 'Pohrani ozna&#269;eno',
	'Mailbox' => 'Mailbox',
	'Save_message' => 'Spremi poruku',
	'Delete_message' => 'Izbri&#353;i poruku',
	'Next_privmsg' => 'Sljede&#263;a PP',
	'Previous_privmsg' => 'Predhodna PP',
	'No_newer_pm' => 'Nema novijih PP.',
	'No_older_pm' => 'Nema starijih PP.',
	'Display_messages' => 'Prika&#382;i prethodne poruke', // Followed by number of days/weeks/months
	'All_Messages' => 'Sve poruke',

	'No_messages_folder' => 'Nema poruka u ovoj mapi',

	'PM_disabled' => 'Slanje privatnih poruka je onemogu&#263;eno.',
	'Cannot_send_privmsg' => '&#381;ao nam je,ali administratori su isklju&#269;ili slanje privatnih poruka.',
	'No_to_user' => 'Mora&#353; specificirati korisni&#269;ko ime osobe kojoj &#382;eli&#353; poslati poruku.',

	'Disable_HTML_pm' => 'Isklju&#269;i HTML u ovoj poruci',
	'Disable_ACRO_AUTO_pm' => 'Isklju&#269;i Acronyms and Autolinks u ovoj poruci',
	'Disable_BBCode_pm' => 'Isklju&#269;i BBCode u ovoj poruci',
	'Disable_Smilies_pm' => 'Isklju&#269;i Smilies u ovoj poruci',

	'Message_sent' => 'Poruka je poslana.',

	'Send_a_new_message' => 'Po&#353;alji novu PP',
	'Send_a_reply' => 'Odgovori na PP',
	'Edit_message' => 'Uredi PP',

	'Notification_subject' => 'Stigla ti je nova PP!',

	'Find_username' => 'Prona&#273;i korisni&#269;ko ime',
	'Find' => 'Prona&#273;i',
	'No_match' => 'Ni&#353;ta nije na&#273;eno.',

	'No_post_id' => 'Nije specificiran ID posta',
	'No_such_folder' => 'Ne postoji takva mapa',
	'No_folder' => 'Nije specificirana mapa',

	'Mark_all' => 'Ozna&#269;i sve',
	'Unmark_all' => 'Makni ozna&#269;eno',

	'Confirm_delete_pm' => 'Jesi li siguran/na da &#382;eli&#353; izbrisati ovu poruku?',
	'Confirm_delete_pms' => 'Jesi li siguran/na da &#382;eli&#353; izbrisati ove poruke?',

	'Inbox_size' => 'Sandu&#269;i&#263; DOLAZNO je %d%% popunjen', // eg. Your Inbox is 50% full
	'Sentbox_size' => 'Sandu&#269;i&#263; POSLANO je %d%% popunjen',
	'Savebox_size' => 'Sandu&#269;i&#263; SPREMLJENO je %d%% popunjen',

// Profiles/Registration
	'Viewing_user_profile' => 'Pogledaj profil :: %s', // %s is username
	'About_user' => 'Sve o %s', // %s is username
//Start Quick Administrator User Options and Information MOD
	'Quick_admin_options' => 'Brzi info i opcije Administratora',
	'Admin_edit_profile' => 'Izmjeni korisnikov profil',
	'Admin_edit_permissions' => 'Promjeni korisnikove dozvole',
	'User_active' => 'Korisnik <b>je</b> aktivan',
	'User_not_active' => 'Korisnik <b>nije</b> aktivan',
	'Username_banned' => 'Korisni&#269;ko ime <b>je</b> isklju&#269;eno',
	'Username_not_banned' => 'Korisni&#269;ko ime <b>nije</b> isklju&#269;eno',
	'USER_BAN' => 'Isklju&#269;en',
	'USER_UNBAN' => 'Uklju&#269;en',
	'User_email_banned' => 'Korisnikov email [ %s ] <b>je</b> isklju&#269;en',
	'User_email_not_banned' => 'Korisnikov email <b>nije</b> isklju&#269;en',
//End Quick Administrator User Options and Information MOD
	'Preferences' => 'Postavke',
	'Items_required' => '<i>Podatci ozna&#269;eni sa * su obvezni.</i>.',
	'Registration_info' => 'Osnovni podatci',
	'Profile_info' => 'Ostali podatci',
	'Profile_info_warn' => '<i>Ovi podatci &#263;e biti javno dostupni svima.</i>',
	'Avatar_panel' => 'Avatar Control Panel',
	'Avatar_gallery' => 'Galerija avatara',

	'Website' => 'Web stranice',
	'Location' => 'Lokacija',
	'Contact' => 'Kontaktiraj',
	'Email_address' => 'E-mail adresa',
	'Email' => 'E-mail',
	'Send_private_message' => 'Po&#353;alji privatnu poruku',
	'Hidden_email' => '[ Skriven ]',
	'Search_user_posts' => 'Potra&#382;i postove ovog korisnika/ce',
	'Interests' => 'Interesi',
	'Occupation' => 'Zvanje/zanimanje',
	'Poster_rank' => 'Status',

	'Total_posts' => 'Ukupno postova',
	'User_post_pct_stats' => '%.2f%% od ukupno', // 1.25% of total
	'User_post_day_stats' => '%.2f postova na dan', // 1.5 posts per day
	'Search_user_posts' => 'Prona&#273;i sve postove korisnika/ce %s', // Find all posts by username
	'Search_user_topics_started' => 'Prona&#273;i sve teme korisnika/ce %s', // Find all topics started by username

	'Wrong_Profile' => 'Mo&#382;e&#353; mijenjati samo svoj profil.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => 'Aktivan status',
	'Invision_Communicate' => 'Objavi',
	'Invision_Info' => 'Informacija',
	'Invision_Member_Group' => 'Korisni&#269;ka grupa',
	'Invision_Member_Title' => 'Ime korisnika',
	'Invision_Most_Active' => 'Najvi&#353;e aktivan u',
	'Invision_Most_Active_Posts' => '%s postovi u ovom forumu',
	'Invision_Details' => 'Detalji posta',
	'Invision_PPD_Stats' => 'Postovi po danu',
	'Invision_Signature' => 'Potpis',
	'Invision_Website' => 'Po&#269;etna strana',
	'Invision_Total_Posts' => 'Zbroj svih postova',
	'Invision_User_post_pct_stats' => '( %.2f%% od ukupno )',
	'Invision_User_post_day_stats' => '%.2f postova na dan',
	'Invision_Search_user_posts' => 'Prona&#273;i sve postove korisnika/ce',
	'Invision_Posting_details' => 'Detalji postova',
// Invision View Profile - END

	'Only_one_avatar' => 'Samo jedna vrsta Avatara mo&#382;e biti izabrana',
	'File_no_data' => 'Datoteka na URL-u koji si upisao/la ne sadr&#382;i podatke',
	'No_connection_URL' => 'Nije mogu&#263;e uspostaviti vezu s URL-om koji si upisao/la',
	'Incomplete_URL' => 'URL kojeg si upisao/la nije kompletan',
	'Wrong_remote_avatar_format' => 'URL Avatara nije valjan',
	'No_send_account_inactive' => 'Lozinka ti ne mo&#382;e biti poslana jer ti je korisni&#269;ki ra&#269;un neaktivan.<br /> Kontaktiraj administratora/icu foruma za dodatne informacije.',

	'Always_smile' => 'Uvijek dozvoli Smajli&#263;e',
	'Always_html' => 'Uvijek dozvoli HTML',
	'Always_bbcode' => 'Uvijek dozvoli BBCode',
	'Always_add_sig' => 'Uvijek dodaj moj potpis',
	'Always_notify' => 'Uvijek me obavijesti o odgovorima',
	'Always_notify_explain' => '<i>Kada netko odgovori na temu u kojoj (i) ti sudjeluje&#353;, sti&#263;i &#263;e ti e-mail.<br />Ovu opciju mo&#382;e&#353; promijeniti svaki put kad posta&#353;.</i>.',

	'Board_style' => 'Izgled foruma',
	'Board_lang' => 'jezik foruma',
	'No_themes' => 'Nema tema u bazi podataka',
	'Timezone' => 'Vremenska zona',
	'Date_format' => 'Oblik datuma',
	'Date_format_explain' => '<i>Sintaksa identi&#269;na PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> funkciji</i>.',
	'Signature' => 'Potpi',
	'Signature_explain' => '<i>Maksimalno %d znakova.</i>',
	'Public_view_email' => 'Uvijek prika&#382;i moju e-mail adresu',

	'Current_password' => 'Trenutna lozinka',
	'New_password' => 'Nova lozinka',
	'Confirm_password' => 'Potvrdi novu lozinku',
	'Confirm_password_explain' => '<i>Ukoliko &#382;eli&#353; promijeniti zaporku/e-mail adresu mora&#353; potvrditi trenutnu lozinku.</i>',
	'password_if_changed' => '<i>Upi&#353;i lozinku samo ako ju &#382;eli&#353; promijeniti.</i>',
	'password_confirm_if_changed' => '<i>Potvrdi zaporku samo ako si ju [iznad] promijenio/la.</i>',

	'Avatar' => 'Avatar',
	'Avatar_explain' => 'Prikazuje malu sliku s tvojim detaljima u postu.<br />Slika mo&#382;e biti &#353;irine do %d piksela, visine do %d piksela, veli&#269;ine do %d KB.',
	'Upload_Avatar_file' => 'Uploadaj Avatar s ra&#269;unala',
	'Upload_Avatar_URL' => 'Uploadaj Avatar s URL-a',
	'Upload_Avatar_URL_explain' => '<i>Upi&#353;i URL na kojem se nalazi Avatar.</i>',
	'Pick_local_Avatar' => 'Izaberi Avatar iz galerije',
	'Link_remote_Avatar' => 'Link na URL Avatara',
	'Link_remote_Avatar_explain' => '<i>Upi&#353;i URL na kojem se nalazi Avatar.</i>',
	'Avatar_URL' => 'URL slike Avatara',
	'Select_from_gallery' => 'Izaberi Avatar iz galerije',
	'View_avatar_gallery' => 'Poka&#382;i galeriju',

	'Select_avatar' => 'Izaberi avatar',
	'Return_profile' => 'Poni&#353;ti avatar',
	'Select_category' => 'Izaberi kategoriju',

	'Delete_Image' => 'Izbri&#353;i sliku',
	'Current_Image' => 'Trenutna slika',

	'Notify_on_privmsg' => 'Obavijesti me kada dobijem privatnu poruku',
	'Popup_on_privmsg' => 'Obavijest o novoj privatnoj poruci prika&#382;i u zasebnom prozoru',
	'Popup_on_privmsg_explain' => '<i>Neki predlo&#353;ci otvaraju zaseban prozor s obavije&#353;&#263;u o novoj privatnoj poruci.</i>',
	'Hide_user' => 'Sakrij moj online status',

	'Profile_updated' => 'Tvoj profil je a&#382;uriran',
	'Profile_updated_inactive' => 'Tvoj profil je a&#382;uriran iako ti je korisni&#269;ki ra&#269;un neaktivan.<br />Provjeri e-mail da vidi&#353; kako reaktivirati korisni&#269;ki ra&#269;un odnosno, ako je potrebna administratorska aktivacija, pri&#269;ekaj da ga administrator/ica reaktivira.',

	'Password_mismatch' => 'Lozinke koje si upisao/la nisu identi&#269;ne.',
	'Current_password_mismatch' => 'Trenutna lozinka koju si upisao/la ne odgovara onoj u bazi podataka.',
	'Password_long' => 'Lozinka mo&#382;e imati do 32 znaka.',
	'Username_taken' => 'Korisni&#269;ko ime je ve&#263; postoji.',
	'Username_invalid' => 'Korisni&#269;ko ime sadr&#382;i nedozvoljeni/e znak/ove poput \'.',
	'Username_disallowed' => 'Korisni&#269;ko ime nije dozvoljeno.',
	'Email_taken' => 'Ovu e-mail adresu koristi odprije registriran/a korisnik/ca.',
	'Email_banned' => 'Ova e-mail adresa je isklju&#269;ena/onemogu&#263;ena.',
	'Email_invalid' => 'Ova e-mail adresa je nepravilna.',
	'Signature_too_long' => 'Tvoj potpis je preduga&#269;ak.',
	'Fields_empty' => 'Mora&#353; popuniti sva obvezna polja.',
	'Avatar_filetype' => 'Ekstenzija Avatara mora biti .jpg/.gif/.png.',
	'Avatar_filesize' => 'Avatar mo&#382;e biti veli&#269;ine do %d KB', // The avatar image file size must be less than 6 KB
	'Avatar_imagesize' => 'Avatar mo&#382;e biti &#353;irine do %d piksela i visine do %d piksela',

	'Welcome_subject' => 'Dobrodo&#353;li na %s forum', // Welcome to my.com forums
	'New_account_subject' => 'Novi korisni&#269;ki ra&#269;un',
	'Account_activated_subject' => 'Korisni&#269;ki ra&#269;un aktiviran',

	'Account_added' => 'Hvala ti &#353;to si se registrirao/la.<br />Korisni&#269;ki ra&#269;un je kreiran.<br />Mo&#382;e&#353; se logirati koriste&#263;i svoje korisni&#269;ko ime i lozinku',
	'Account_inactive' => 'Korisni&#269;ki ra&#269;un je kreiran, ali ovaj forum zahtijeva aktivaciju korisni&#269;kog ra&#269;una.<br />Aktivacijski klju&#269; ti je poslan na e-mail adresu koju si upisao/la prilikom registracije',
	'Account_inactive_admin' => 'Korisni&#269;ki ra&#269;un je kreiran,ali ovaj forum zahtijeva aktivaciju korisni&#269;kog ra&#269;una od strane administratora/ice.<br />Poslan mu/joj je e-mail, a ti &#263;e&#353; biti obavije&#353;ten/a e-mailom kada ti korisni&#269;ki ra&#269;un bude aktiviran',
	'Account_active' => 'Korisni&#269;ki ra&#269;un je aktiviran.<br />Hvala ti &#353;to si se registrirao/la.',
	'Account_active_admin' => 'Korisni&#269;ki ra&#269;un je aktiviran',
	'Reactivate' => 'Ponovi aktiviranje korisni&#269;kog ra&#269;una!',
	'Already_activated' => 'Ve&#263; si aktivirao/la korisni&#269;ki ra&#269;un.',
	'COPPA' => 'Korisni&#269;ki ra&#269;un je kreiran, ali mora biti odobren.<br />Provjeri e-mail za detalje.',

	'Registration' => 'Uvjeti registracije',
	'Reg_agreement' => 'Po&#353;tovanje, da bi se mogao/la registrirati, mora&#353; se slagati s uvjetima pod kojima radi/funkcionira ovaj forum, a koji su navedeni u tekstu ispod.<br /><br />Svi postovi [poruke] na ovom forumu izra&#382;avaju mi&#353;ljenja/stavove/poglede autora/ica tih postova, sukladno &#269;emu administratori/ce, moderatori/ce i ostale osobe koje sudjeluju u odr&#382;avanju ovog foruma [u daljnjem tekstu: Admini/ce] ne mogu i ne&#263;e odgovarati za sadr&#382;aj tih postova [naravno, osim vlastitih].<br /><br />Admini/ce &#263;e u najkra&#263;em mogu&#263;em roku izbrisati postove uvredljivog/nepo&#263;udnog/nedopu&#353;tenog sadr&#382;aja, no, treba imati na umu da je gotovo nemogu&#263;e pogledati svaki post &#353;to &#263;e re&#263;i da postoji mogu&#263;nost da neki od postova takvog sadr&#382;aja ne bude izbrisan [stoga se ne ustru&#269;avaj obavijestiti Admine/ice o postojanju istog/ih].<br /><br />Postanje uvredljivih, bestidnih, vulgarnih, klevetni&#269;kih, punih mr&#382;nje, prijete&#263;ih, seksualno orijentiranih sadr&#382;aja kao i bilo kojih drugih sadr&#382;aja koji kr&#353;e zakon(e) nije dozvoljeno. &#268;injenje nedozvoljenog uzrokuje trenutno i trajno isklju&#269;ivanje osobe [&#269;initelja/ice] s ovog foruma kao i obavijest provideru osobe [&#269;initelja/ice] o u&#269;injenom. Admini/ce imaju pravo, u bilo koje doba, izbrisati/urediti/premjestiti/zatvoriti teme/postove s nedozvoljenim sadr&#382;ajem.<br /><br />Svi podatci, upisani prilikom Registracije, upisuju se u bazu podataka. Niti jedan podatak ne smije i ne&#263;e biti dan na uvid ikojoj osobi [osim tebi, Admina/ica i onih-ako/&#353;to/kako podlije&#382;e zakonu]. Admini/ce ne mogu i ne&#263;e biti odgovorni/e ukoliko uslijed hakerskog napada do&#273;e do uvida u/otkrivanja podataka.<br /><br />Forum koristi tzv. cookies [kola&#269;i&#263;e] za spremanje podataka na ra&#269;unalo kojim pregledava&#353; sadr&#382;aj foruma. Kola&#269;i&#263;i ne sadr&#382;e nikakve osobne podatke i slu&#382;e samo i isklju&#269;ivo za bolji rad foruma. Tvoja e-mail adresa slu&#382;i samo za Registraciju, te obavijesti vezane uz tvoj korisni&#269;ki ra&#269;un.<br /><br />Klikom na "Sla&#382;em se..." potvr&#273;uje&#353; da se sla&#382;e&#353; sa svim gore navedenim kao i da &#263;e&#353; se istog pridr&#382;avati.',

	'Agreement' => 'Sla&#382;em se',
	'Agree_under_13' => 'Sla&#382;em se i imam manje od 13 godina',
	'Agree_over_13' => 'Sla&#382;em se',
	'Agree_not' => 'Ne sla&#382;em se',
	'Agree_checkbox' => 'Sla&#382;em se sa ovim uvjetima',
	'Agree_checkbox_Error' => 'Mora&#353; ozna&#269;iti "AGREE" na dnu strane da bi se registrirao!',

	'Wrong_activation' => 'Aktivacijski klju&#269; koji si unio/la ne odgovara niti jednom u na&#353;oj bazi podataka.',
	'Send_password' => 'Po&#353;alji mi novu lozinku',
	'Password_updated' => 'Nova zaporka je kreirana.<br />Provjeri e-mail za detalje o aktivaciji nove zaporke.',
	'No_email_match' => 'E-mail adresa koju si naveo/la ne odgovara onoj koja je za (to) korisni&#269;ko ime upisana u na&#353;oj bazi podataka.',
	'New_password_activation' => 'Aktivacija nove lozinke',
	'Password_activated' => 'Korisni&#269;ki ra&#269;un je reaktiviran.<br />Za loginiranje koristi zaporku navedenu u e-mailu koji si primio/la.',

	'Send_email_msg' => 'Po&#353;alji e-mail poruku',
	'No_user_specified' => 'Nisi specificirao/la korisnika/cu',
	'User_prevent_email' => 'Korisnik/ca ne &#382;eli primiti e-mail poruku.<br />Poku&#353;aj mu/joj poslati privatnu poruku.',
	'User_not_exist' => 'Korisni&#269;ko ime ne postoji',
	'CC_email' => 'Po&#353;alji kopiju ovog e-maila sebi',
	'Email_message_desc' => 'Ova poruka &#263;e biti poslana kao obi&#269;an tekst, stoga nemoj koristiti HTML/BBCode.<br />Kao povratna adresa za ovu poruku biti &#263;e navedena tvoja e-mail adresa.',
	'Flood_email_limit' => 'Trenutno ne mo&#382;e&#353; poslati jo&#353; koji e-mail.<br />Poku&#353;aj ponovo kasnije.',
	'Recipient' => 'Primatelj/ica',
	'Email_sent' => 'E-mail je poslan.',
	'Send_Email' => 'Po&#353;alji e-mail',
	'Empty_sender_email' => 'Mora&#353; upisati korisnikov e-mail.',
	'Empty_subject_email' => 'Mora&#353; upisati naslov e-maila.',
	'Empty_message_email' => 'Mora&#353; upisati sadr&#382;aj e-maila.',

// Visual confirmation system strings
	'Confirm_code_wrong' => 'Potvrdni kod kojeg si unio/la je neto&#269;an',
	'TOO_MANY_ATTEMPTS' => 'Prekora&#269;io/la si broj poku&#353;aja registriranja.<br />Poku&#353;aj ponovo kasnije.',
	'Confirm_code_impaired' => 'Ako nikako ne mo&#382;e&#353; pro&#269;itati ovaj kod kontaktiraj %sadministratora/icu%s za pomo&#263;.',
	'Confirm_code' => 'Potvrdni kod',
	'Confirm_code_explain' => 'Unesi kod to&#269;no onako kako ga vidi&#353;.<br /><i>Pazi na velika/mala slova, nula je ozna&#269;ena dijagonalnom crtom.</i>.',

// Members list
	'Select_sort_method' => 'Sortiranje',
	'Sort' => 'Poslo&#382;i',
	'Sort_Top_Ten' => 'Naj 10 postera',
	'Sort_Joined' => 'Datum registracije',
	'Sort_Username' => 'Korisni&#269;ko ime',
	'Sort_Location' => 'Lokacija',
	'Sort_Posts' => 'Ukupno postova',
	'Sort_Email' => 'Email',
	'Sort_Website' => 'Sortiranje',
	'Sort_Ascending' => 'A-Z',
	'Sort_Descending' => 'Z-A',
	'Order' => 'Niz',

// Group control panel
	'Group_Control_Panel' => 'Kontrolna plo&#269;a grupe',
	'Group_member_details' => 'Detalji o &#269;lanstvu grupe',
	'Group_member_join' => 'Pridru&#382;i se grupi',

	'Group_Information' => 'Info o grupi',
	'Group_name' => 'Ime grupe',
	'Group_description' => 'Opis grupe',
	'Group_membership' => '&#268;lanstvo u grupi',
	'Group_Members' => '&#268;lanstvo grupe',
	'Group_Moderator' => 'Moderator/ica grupe',
	'Pending_members' => 'Lista &#269;ekanja za &#269;lanstvo u grupi',

	'Group_type' => 'Tip grupe',
	'Group_open' => 'Otvorena grupa',
	'Group_closed' => 'Zatvorena grupa',
	'Group_hidden' => 'Skrivena grupa',

	'Current_memberships' => '&#268;lan/ica',
	'Non_member_groups' => 'Nije &#268;lan/ica',
	'Memberships_pending' => 'Na Listi &#269;ekanja',

	'No_groups_exist' => 'Ne postoji niti jedna grupa',
	'Group_not_exist' => 'Grupa ne postoji',

	'Join_group' => 'Pridru&#382;i se grupi',
	'No_group_members' => 'Ova grupa nema &#269;lanova/ica',
	'Group_hidden_members' => 'Ova grupa je skrivena, ne mo&#382;e&#353; vidjeti &#269;lanstvo',
	'No_pending_group_members' => 'Ova grupa nema osoba na listi &#269;ekanja za &#269;lanstvo u grupi',
	'Group_joined' => 'Uspje&#353;no si se prijavio/la na ovu grupu.<br />Biti &#263;e&#353; obavije&#353;ten/a kada moderator/ica odobri tvoju prijavu.',
	'Group_request' => 'Korisnik/ca je zatra&#382;io/la da se pridru&#382;i grupi koju moderira&#353;.',
	'Group_approved' => 'Tvoj zahtjev je odobren.',
	'Group_added' => 'Tvoje korisni&#269;ko ime pridodano je ovoj grupi.',
	'Already_member_group' => 'Ve&#263; jesi &#269;lan/ica ove grupe',
	'User_is_member_group' => 'Korisnik/ca ve&#263; je &#269;lan/ica ove grupe',
	'Group_type_updated' => 'Tip grupe je uspje&#353;no a&#382;uriran.',
	'Could_not_add_user' => 'Korisni&#269;ko ime koje si izabrao/la ne postoji.',
	'Could_not_anon_user' => 'Anonimne osobe ne mogu biti primljene u &#269;lanstvo.',
	'Confirm_unsub' => 'Jesi li siguran/na da se &#382;eli&#353; ispisati iz ove grupe?',
	'Confirm_unsub_pending' => 'Tvoja prijava za upis u ovu grupu jo&#353; nije odobrena, jesi li siguran/na da se &#382;eli&#353; ispisati?',
	'Unsub_success' => 'Ispisan/a si iz ove grupe.',
	'Approve_selected' => 'Odobri ozna&#269;eno',
	'Deny_selected' => 'Ne odobri ozna&#269;eno',
	'Not_logged_in' => 'Mora&#353; biti loginiran/a da bi se pridru&#382;io/la grupi.',
	'Remove_selected' => 'Izbri&#353;i ozna&#269;eno',
	'Add_member' => 'Dodaj &#269;lana/icu',
	'Not_group_moderator' => 'Nisi moderator/ica ove grupe pa ne mo&#382;et&#353; izvesti tu radnju.',
	'Login_to_join' => 'Logiraj se da bi se pridru&#382;io/la grupi odnosno moderirao/la grupu',
	'This_open_group' => 'Ovo je otvorena grupa: klikni da bi se prijavio/la za &#269;lanstvo u grupi',
	'This_closed_group' => 'Ovo je zatvorena grupa: %s',
	'This_hidden_group' => 'Ovo je skrivena grupa: %s',
	'Member_this_group' => 'Ti si &#269;lan/ica ove grupe',
	'Pending_this_group' => 'Na Listi &#269;ekanja si za &#268;lanstvo u ovoj grupi',
	'Are_group_moderator' => 'Ti si moderator/ica ove grupe',
	'None' => 'Nema',
	'Subscribe' => 'Upi&#353;i se',
	'Unsubscribe' => 'Ispi&#353;i se',
	'View_Information' => 'Info',

// Search
	'Search_query' => 'Pretra&#382;nik',
	'Search_options' => 'Opcije pretra&#382;ivanja',

	'Search_keywords' => 'Tra&#382;i klju&#269;ne rije&#269;i',
	'Search_keywords_explain' => '<i>Mo&#382;e&#353; koristiti <u>AND</u> da definira&#353; rije&#269;i koje moraju biti u rezultatima, <u>OR</u> da definira&#353; rije&#269;i koje mogu biti u rezultatima, te <u>NOT</u> da definira&#353; rije&#269;i koje ne smiju biti u rezultatima.<br />Mo&#382;e&#353; koristiti * kao zamjenski znak.<br />Za po&#269;etak pretrage klikni na gumb Pretra&#382;nik.</i>',
	'Search_author' => 'Tra&#382;i autora/icu',
	'Search_author_explain' => '<i>Mo&#382;e&#353; koristiti * kao zamjenski znak.<br />Za po&#269;etak pretrage klikni na gumb Pretra&#382;nik.</i>',
	'Search_author_topic_starter' => 'Tra&#382;i teme samo od ovog korisnika',

	'Search_for_any' => 'Tra&#382;i bilo koju rije&#269;',
	'Search_for_all' => 'Tra&#382;i sve rije&#269;i',
	'Search_title_msg' => 'Pretra&#382;i i naslove i tekst',
	'Search_title_only' => 'Pretra&#382;i samo naslove',
	'Search_msg_only' => 'Pretra&#382;i samo tekst',

	'Return_first' => 'Prika&#382;i prvih', // followed by xxx characters in a select box
	'characters_posts' => 'znakova posta',

	'Search_previous' => 'Pretra&#382;i', // followed by days, weeks, months, year, all in a select box

	'Sort_by' => 'Sortiranje',
	'Sort_Time' => 'Datum postanja',
	'Sort_Post_Subject' => 'Naslov posta',
	'Sort_Topic_Title' => 'Naslov teme',
	'Sort_Author' => 'Autor/ica',
	'Sort_Forum' => 'Forum',

	'Display_results' => 'Prika&#382;i rezultate kao',
	'All_available' => 'Sve',
	'No_searchable_forums' => 'Nema&#353; dozvolu za pretra&#382;ivat forume.',

	'No_search_match' => 'Ni&#353;ta nije prona&#273;eno',
	'Found_search_match' => 'Prona&#273;eno %d koja odgovaraj', // eg. Search found 1 match
	'Found_search_matches' => 'Prona&#273;eno %d koje odgovaraju', // eg. Search found 24 matches

	'Close_window' => 'Zatvori prozor',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'Samo %s mo&#382;e/gu postaviti Obavijesti.',
	'Sorry_auth_sticky' => 'Samo %s mo&#382;e/gu postaviti Va&#382;ne teme.',
	'Sorry_auth_read' => 'Samo %s mo&#382;e/gu &#269;itati teme/postove.',
	'Sorry_auth_post' => 'Samo %s mo&#382;e/gu postati.',
	'Sorry_auth_reply' => 'Samo %s mo&#382;e/gu odgovarati na teme/postove.',
	'Sorry_auth_edit' => 'Samo %s mo&#382;e/gu ure&#273;ivati postove.',
	'Sorry_auth_delete' => 'Samo %s mo&#382;e/gu izbrisati postove.',
	'Sorry_auth_vote' => 'Samo %s mo&#382;e/gu glasati.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>anonimni korisnici</b>',
	'Auth_Registered_Users' => '<b>registrirani/e korisnici/e</b>',
	'Auth_Self_Users' => '<b>Specificirani korisnici</b>',
	'Auth_Users_granted_access' => '<b>privilegirani/e korisnici/e</b>',
	'Auth_Moderators' => '<b>moderatori</b>',
	'Auth_Administrators' => '<b>administratori</b>',

	'Not_Moderator' => 'Nisi moderator/ica ovog foruma.',
	'Not_Authorised' => 'Nisi ovla&#353;ten/a',

	'You_been_banned' => 'Isklju&#269;en/a si s ovog foruma.<br />Kontaktiraj administratora/icu za dodatne informacije.',

// Viewonline
	'Reg_users_zero_online' => 'Ukupno je 0 registrirani/h korisnika/ca i ', // There are 5 Registered and
	'Reg_users_online' => 'Ukupno je %d registriranih korisnika/ca i ', // There are 5 Registered and
	'Reg_user_online' => 'Ukupno je %d registrirani korisnik i ', // There is 1 Registered and
	'Hidden_users_zero_online' => '0 skrivenih korisnika/ca online', // 6 Hidden users online
	'Hidden_users_online' => '%d skrivenih korisnika/ca online', // 6 Hidden users online
	'Hidden_user_online' => '%d skriveni korisnik/ca online', // 6 Hidden users online
	'Guest_users_online' => 'Ukupno je %d gostiju online', // There are 10 Guest users online
	'Guest_users_zero_online' => 'Ukupno je 0 gostiju online', // There are 10 Guest users online
	'Guest_user_online' => 'Ukupno je %d gostiju online', // There is 1 Guest user online
	'No_users_browsing' => 'Trenutno nema &#269;lanova/ica na ovom forumu',

	'Online_explain' => 'Podaci su bazirani na aktivnosti korisnika/ca u protelkih 5 minuta',
	'Online_today' => 'Aktivnost korisnika danas',

	'Forum_Location' => 'Lokacija',
	'Last_updated' => 'A&#382;urirano',

	'Forum_index' => 'Forum index',
	'Portal' => 'Po&#269;etna strana',
	'Logging_on' => 'Loginiranje',
	'Posting_message' => 'Postanje',
	'Searching_forums' => 'Pregledavanje foruma',
	'Viewing_profile' => 'Gleda profil',
	'Viewing_HACKSLIST' => 'Gleda Hacks Liste',
	'Viewing_online' => 'Gleda ko je online',
	'Viewing_member_list' => 'Gleda listu korisnika',
	'Viewing_priv_msgs' => 'Gleda privatne poruke',
	'Viewing_FAQ' => 'Gleda FAQ',
	'Viewing_KB' => 'Gleda KB',
	'Viewing_RSS' => 'Gleda RSS Feed',


// Moderator Control Panel
	'Mod_CP' => 'Moderator Control Panel',
	'Mod_CP_explain' => '<i>Kori&#353;tenjem donje forme mo&#382;e&#353; izvoditi moderatorske operacije na ovom forumu.<br />Mo&#382;e&#353; zaklju&#269;avati, otklju&#269;avati, premje&#353;tati, izbrisati teme...</i>',

	'Select' => 'Izaberi',
	'Delete' => 'Izbri&#353;i',
	'Move' => 'Premjesti',
	'Copy' => 'Kopiraj',
	'Lock' => 'Zaklju&#269;aj',
	'Unlock' => 'Otklju&#269;aj',

	'Topics_Removed' => 'Izabrana/e tema/e je/su uspje&#353;no izbrisana/e iz baze podataka.',
	'Topics_Locked' => 'Izabrana/e tema/e je/su zaklju&#269;ana/e.',
	'Topics_Moved' => 'Izabrana/e tema/e je/su premje&#353;tena/e.',
	'Topics_Unlocked' => 'Izabrana/e tema/e je/su otklju&#269;ana/e.',
	'No_Topics_Moved' => 'Niti jedna tema nije premje&#353;tena.',

	'Confirm_delete_topic' => 'Jesi li siguran/na da &#382;eli&#353; izbrisati ozna&#269;enu/e temu/e?',
	'Confirm_lock_topic' => 'Jesi li siguran/na da &#382;eli&#353; zaklju&#269;ati ozna&#269;enu/e temu/e?',
	'Confirm_unlock_topic' => 'Jesi li siguran/na da &#382;eli&#353; otklju&#269;ati ozna&#269;enu/e temu/e?',
	'Confirm_move_topic' => 'Jesi li siguran/na da &#382;eli&#353; premjestiti ozna&#269;enu/e temu/e?',

	'Move_to_forum' => 'Premjesti u forum',
	'Leave_shadow_topic' => 'Nek\' tema/e ostane/u i u starom forumu..',

	'Split_Topic' => 'Podijeli temu Control Panel',
	'Split_Topic_explain' => '<i>Kori&#353;tenjem donje forme mo&#382;e&#353; podijeliti temu na dvije, ozna&#269;avanjem odre&#273;enih postova ili dijeljenjem od ozna&#269;enog posta...</i>',
	'Split_title' => 'Novi naslov teme',
	'Split_forum' => 'Forum za novu temu',
	'Split_posts' => 'Podijeli ozna&#269;ene postove',
	'Split_after' => 'Podijeli od ozna&#269;enog posta',
	'Topic_split' => 'Tema je uspje&#353;no podijeljena',

	'Too_many_error' => 'Odabrao/la si previ&#353;e postova.<br />Mo&#382;e&#353; izabrati samo jednog!',

	'None_selected' => 'Nisi odabrao/la niti jednu temu/post za izvo&#273;enje ove operacije.<br />Vrati se nazad i odaberi barem jednu/og.',
	'New_forum' => 'Novi forum',

	'This_posts_IP' => 'IP adresa ovog posta',
	'Other_IP_this_user' => 'Ostale IP adrese s kojih je ovaj/ova korisnik/ica postao/la',
	'Users_this_IP' => 'Korisnici/e koji/e postaju s ove IP adrese',
	'IP_info' => 'IP info',
	'Lookup_IP' => 'Tra&#382;i IP adresu',

// Errors (not related to a specific failure on a page)
	'Information' => 'Info',
	'Critical_Information' => 'Kriti&#269;ne informacije',

	'General_Error' => 'Generalna gre&#353;ka',
	'Critical_Error' => 'Kriti&#269;na gre&#353;ka',
	'An_error_occured' => 'Do&#353;lo je do gre&#353;ke!',
	'A_critical_error' => 'Do&#353;lo je do kriti&#269;ne gre&#353;ke!',
	'Admin_reauthenticate' => 'Za administriranje foruma mora&#353; se re-loginirati.',

	'Topic_description' => 'Opis tvoje teme',
//	'Description' => 'Topic Description',

	'Guestbook' => 'Guestbook',
	'Viewing_guestbook' => 'Read the guestbook',

	'Warn_new_post' => 'Najmanje je jedan post napisan u ovoj temi. Pregledajte nove odgovore pa ponovo po&#353;aljite va&#353; post.',

	'Today_at' => '<b class="date-today">Danas</b> na ',
	'Yesterday_at' => '<b class="date-yesterday">Ju&#269;er</b> na ',
	'TODAY' => '<b class="date-today">Danas</b>',
	'YESTERDAY' => '<b class="date-yesterday">Ju&#269;er</b>',

// Birthday - BEGIN
	'Birthday' => 'Ro&#273;endan',
	'No_birthday_specify' => 'Ni&#353;ta odre&#273;eno',
	'Age' => 'Starost',
	'Wrong_birthday_format' => 'Datum ro&#273;enja unesen je krivo.',
	'Birthday_to_high' => 'Ovaj forum ne prihva&#263;a korisnike starije od %d godina/e',
	'Birthday_require' => 'Datum ro&#273;enja potreban je za ovaj forum',
	'Birthday_to_low' => 'Ovaj forum ne prihva&#263;a korisnike mla&#273;e od %d godina/e',
	'Submit_date_format' => 'd-m-G', //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different seperators are accepted)
	'Birthday_greeting_today' => '&#381;elimo vam sretan %s ro&#273;endan.<br /><br /> Mana&#273;ment',//%s is substituted with the users age
	'Birthday_greeting_prev' => 'We would like to give you a belated congratulatons for becoming %s years old on the %s.<br /><br /> Mana&#273;ment',//%s is substituted with the users age, and birthday
	'Greeting_Messaging' => '&#268;estitamo',
	'Birthday_today' => 'Korisnici koji danas imaju ro&#273;endan:',
	'Birthday_week' => 'Korisnici koji &#263;e imat ro&#273;endan u sljede&#263;ih %d dana:',
	'Nobirthday_week' => 'Nema korisnika koji &#263;e imat ro&#273;endan u sljede&#263;ih %d dana', // %d is substitude with the number of days
	'Nobirthday_today' => 'Danas nitko nema ro&#273;endan',
	'Year' => 'Godina',
	'Month' => 'Mjesec',
	'Day' => 'Dan',
// Birthday - END

// Start add - Gender MOD
	'Gender' => 'Spol',//used in users profile to display witch gender he/she is
	'Male' => 'Mu&#353;ko',
	'Female' => '&#381;ensko',
	'No_gender_specify' => 'Nije odre&#273;eno',
	'Gender_require' => 'Odaberite spol jer je na ovom forumu potreban.',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
	'Topic_view_users' => 'Lista korisnika koji su pogledali ovu temu',
	'Topic_time' => 'Posljednje pogledano',
	'Topic_count' => 'Vidi zbroj',
	'Topic_view_count' => 'Vidi zbroj tema',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
	'Give_G_card' => 'Ponovo aktiviraj korisnika',
	'Give_Y_card' => 'Upozori korisnika #%d',
	'Give_R_card' => 'Isklju&#269;i korisnika sad',
	'Ban_update_sucessful' => 'Lista isklju&#269;enja uspje&#353;no je a&#382;urirana',
	'Ban_update_green' => 'Korisnik je ponovo aktiviran',
	'Ban_update_yellow' => 'Korisnik je dobio upozorenje, i sad ima %d upozorenja od maksimalnih %d upozorenja',
	'Ban_update_red' => 'Korisnik je sad isklju&#269;en',
	'Ban_reactivate' => 'Uklju&#269;eni ste ponovo',
	'Ban_warning' => 'Dobio/la si upozorenje',
	'Ban_blocked' => 'Va&#353; status na forumu je blokiran',
/*
	'Rules_ban_can' => 'Ti <b>mo&#382;e&#353;</b> isklju&#269;iti druge korisnike sa foruma',
	'Rules_greencard_can' => 'Ti <b>mo&#382;e&#353;</b> ponovo uklju&#269;it korisnike ovog foruma',
	'Rules_bluecard_can' => 'Ti <b>mo&#382;r&#353;</b> obavjestit moderatore o postovima na forumu',
*/
	'Rules_ban_can' => '<b>Mo&#382;e&#353;</b> isklju&#269;iti druge korisnike',
	'user_no_email' => 'Korisnik nema e-mail, zato mu ne&#263;e sti&#263;i na e-mail. Trebao bi ga obavjestit o ovom preko privatne poruke',
	'user_already_banned' => 'Odabrani korisnik je isklju&#269;en',
	'Ban_no_admin' => 'Ovaj korisnik je ADMIN zato ga nemo&#382;e&#353; upozorit niti isklju&#269;it',
	'Rules_greencard_can' => '<b>Mo&#382;e&#353;</b> ponovo uklju&#269;it korisnike',
	'Rules_bluecard_can' => '<b>Mo&#382;e&#353;</b> obavjestit moderatore',
	'Give_b_card' => 'Obavjesti moderatore foruma o postu ',
	'Clear_b_card' => 'Ovaj post je %d puta prijavljen. Ako stisne&#353; ovo dugme,izbrisat &#263;e&#353; ovo',
	'No_moderators' => 'Ovaj forum nema moderatora, zato se nemo&#382;e obavjestit !',
	'Post_repported' => 'Ovaj post je obavje&#353;ten %d moderatorima',
	'Post_repported_1' => 'Ovaj post je obavje&#353;ten moderatoru',
	'Post_repport' => 'Report o postu', //Subject in email notification
	'Post_reset' => 'Obavjest o ovom postu je sad resetirana',
	'Search_only_bluecards' => 'Potra&#382;i samo obavje&#353;tene postove',
	'Send_message' => 'Klikni %ovdje%s da po&#353;alje&#353; poruku moderatoru ili<br />',
	'Send_PM_user' => 'Klikni %ovdje%s da po&#353;alje&#353; PP korisniku ili',
	'Link_to_post' => 'Klikni %ovdje%s za odlazak ne obavje&#353;teni post
--------------------------------

',
	'Post_a_report' => 'Obavjesti o postu',
	'Report_stored' => 'Va&#353;a obavjest unjeta je uspije&#353;no',
	'Send_report' => 'Klikni %ovdje%s za povratak na poruku',
	'Red_card_warning' => 'Ovom korisniku davate:%s crveni karton, to &#263;e isklju&#269;iti korisnika, jeste li sigurni?',
	'Yellow_card_warning' => 'Ovom korisniku davate:%s &#382;uti karton, to &#263;e upozoriti korisnika, jeste li sigurni?',
	'Green_card_warning' => 'Ovom korisniku davate:%s zeleni karton, to &#263;e ponovo uklju&#269;iti korisnika, jeste li sigurni?',
	'Blue_card_warning' => 'Ovim &#263;ete obavjestit o ovom postu, to &#263;e upozoriti moderatore na ovaj post, Jeste li sigurni da &#382;elite obavjestit moderatore o ovom postu?',
	'Clear_blue_card_warning' => 'ovim &#269;ete resetirat obavjest o ovom postu, &#381;elite li nastaviti?',
	'Warnings' => 'Upozorenja: %d', //shown beside users post, if any warnings given to the user
	'Banned' => 'Trenutno isklju&#269;en',//shown beside users post, if user are banned

// Last visit - BEGIN
	'Last_logon' => 'Posljednji posjet',
	'Hidde_last_logon' => 'Sakriven',
	'Never_last_logon' => 'Nikad',
	'Users_today_zero_total' => 'Sveukupno je <b>0</b> korisnika posijetilo forum danas: ',
	'Users_today_total' => 'Sveukupno je <b>%d</b> korisnika posijetilo forum danas: ',
	'User_today_total' => 'Sveukupno je <b>%d</b> korisnika posijetilo forum danas: ',
	'Users_lasthour_explain' => ', %d u zadnjih sat vremena.',
	'Users_lasthour_none_explain' => 'Nema', //showen of none have visited the last hour, fill if you like

	'Years' => 'Godine',
	'Year' => 'Godina',
	'Weeks' => 'Tjedni',
	'Week' => 'Tjedan',
	'Day' => 'Dan',
	'Total_online_time' => 'Sveukupno proveo/la na forumu',
	'Last_online_time' => 'Zadnje provedeno na forumu',
	'Number_of_visit' => 'Broj posjeta',
	'Number_of_pages' => 'Broj pogledanih strana',
// Last visit - END

	'total_site_hits_key' => '%V% Strana pogledanih od %D%.',

	'Message_too_short' => 'Prekratka poruka',

// Start add - Online/Offline/Hidden Mod
	'Online' => 'Online',
	'Offline' => 'Offline',
	'Hidden' => 'Sakriven',

	'Online_status' => 'Status',
// End add - Online/Offline/Hidden Mod
	'Download' => 'Spremi',

//signature editor
	'sig_edit_link' => 'Potpis',
	'sig_description' => 'Uredi potpis (<b>Pregled uklju&#269;en</b>)',
	'sig_edit' => 'Uredi potpis',
	'sig_current' => 'Trenutni potpis',
	'sig_none' => 'Nedostupan potpis',
	'sig_save' => 'Spremi',
	'sig_save_message' => 'Potpis uspje&#353;no spremljen!',

	'Statistics' => 'Statistike',

// Start add - Global announcement MOD
	'Globalannounce' => 'Glavne obavjest',
	'Globalannounce' => 'Nova glavna obavjest',
// End add - Global announcement MOD
	'Global_Announcements' => 'Glavne obavjesti',
	'Announcements' => 'Obavjesti',
	'Sticky_Topics' => 'Ljepljiva tema',
	'Announcements_and_Sticky' => 'Obavjesti i ljepljive teme',
// db_update generator
	'Db_update_generator' => 'generator obnove DB',
	'Instructions' => 'Instrukcije',
	'SQL_instructions' => 'This piece of software will create PHP files that will allow you to update your database using your browser. There are a few things you must look after when you insert an SQL in the box below.<br />First of all, make sure that every SQL query is ending with a semicolon (,). If not, the file created will be faulty. Next, ensure that the tables have the "phpbb_" prefix. This will automatically be replaced with a little piece of code that enabled you to use the db_update.php file on any forum regardless of what the table prefix is set to.',
	'Enter_SQL' => 'Unesi SQL',
	'Enter_SQL_explain' => 'MySQL is the world\'s most popular open source database, recognized for its speed and reliability.',
	'Output_SQL' => 'SQL Izlaz',
	'Output_SQL_explain' => 'Copy and paste the text from the textarea on the right into a blank file. Save the file as <u>db_update.php</u> and upload it to your server. Run it once by accessing with your browser.<br /><br />Alternatively, Klikni the download button to download the file directly to your computer (recommended).',
	'Download' => 'Spremi',

	'TOP_POSTERS' => 'Korisnici s najvi&#353;e postova',

// TELL A FRIEND
	'Tell_Friend' => 'Po&#353;alji e-mail prijatelju',
	'Tell_Friend_Sender_User' => 'Va&#353;e korisni&#269;ko ime',
	'Tell_Friend_Sender_Email' => 'Va&#353;a e-mail adresa',
	'Tell_Friend_Reciever_User' => 'Korisni&#269;ko ime va&#353;eg prijatelja',
	'Tell_Friend_Reciever_Email' => 'E-mail va&#353;eg prijatelja',
	'Tell_Friend_Wrong_Email' => 'Unjeli ste krivi e-mail.',
	'Tell_Friend_Msg' => 'va&#353;a poruka:',
	'Tell_Friend_Title' => 'Recite prijatelju',
	'Tell_Friend_Body' => "Hi,\nI just read the topic &raquo,{TOPIC}&laquo, at {SITENAME} and thought you might be interested.\n\nHere is the link: {LINK}\n\nGo and read it and if you want to reply you can register for your own account if you have not done so already.",

// Begin Thanks Mod
	'thankful' => 'Zahvale od',
	'thanks_to' => 'Hvala na ovoj temi',
	'thanks_end' => ':',
	'thanks_alt' => 'Hvala Post',
	'thanks_add_rate' => 'Hvala autoru na ovoj temi',
	'thanked_before' => 'Vec ste se zahvalili ovoj temi',
	'thanks_add' => 'Dodana je va&#353;a zahvala',
	'thanks_not_logged' => 'Morate se ulogirati da bi ste se zahvalili',
	'thanks2' => 'Zahvaljujem se <br />',
// End Thanks Mod

//Begin Lo-Fi Mod
	'Lofi' => 'Lo-Fi Verzija',
//	'Full_Version' => 'Full Version',
	'Full_Version' => 'Ovo je "Lo-Fi" pregleda foruma. Da bi vidjeli ful verziju sa vi&#353;e informacija, formacija i slika, molimo kliknite ovdje.',
	'quote_lofi' => 'Citiraj',
	'edit_lofi' => 'Uredi',
	'ip_lofi' => 'IP',
	'del_lofi' => 'Izbri&#353;i',
	'profile_lofi' => 'Profil',
	'pm_lofi' => 'PP',
	'email_lofi' => 'E-mail',
	'website_lofi' => 'Web-sranica',
	'icq_lofi' => 'ICQ',
	'aim_lofi' => 'AIM',
	'yim_lofi' => 'YIM',
	'msnm_lofi' => 'MSN',
	'quick_lofi' => 'Brzi odgovor',
	'new_pm_lofi' => 'Po&#353;alji PP',
//End Lo-Fi Mod

// Retroactive Signature MOD
	'Retro_sig' => 'Dodaj potpis u moje prvenstvene postove',
	'Retro_sig_explain' => 'Ako dodaje&#353;/ure&#273;uje&#353; svoj potpis, phpBB dodaje to u nove postove',
	'Retro_sig_checkbox' => 'Ozna&#269;i ovdje da prika&#269;i&#353; potis u svoje predhodne postove',
// End Retro Sig MOD

	'legend' => 'Legenda: ',
	'users' => 'Korisnici',
//added to autogroup mod
	'No_more' => 'no more users accepted',
	'No_add_allowed' => 'automatski korisni&#269;ki addition nije dozvoljeno',
	'Join_auto' => 'Mo&#382;e&#353; se pridru&#382;it ovoj grupi, jer broj postova odgovara zahtjevima',

// merge topics
	'Merge' => 'Dodaj',
	'Merge_topic' => 'Dodaj temi',
	'Topics_Merged' => 'Odabrane teme su dodane.',
	'No_Topics_Merged' => 'Nijedna tema nije dodana.',
	'Confirm_merge_topic' => 'jesi li siguran da &#382;eli&#353; dodat odabranu/e temu/e?',

	'Downloads' => 'Spremanja',

// Start add - Bin Mod
	'Move_bin' => 'Premjesti ovu temu u sme&#269;e',
	'Topics_Moved_bin' => 'Odabrana tema je premje&#353;tena u sme&#269;e.',
	'Bin_disabled' => 'Sme&#269;e je isklju&#269;eno',
	'Bin_recycle' => 'Sme&#269;e',
// End add - Bin Mod
	'Recent_topics' => 'Zadnje teme', // Recent Topics

	'Topics_Title_Edited' => 'Naslovi selektiranih tema su izmjenjene.',
	'Edit_title' => 'Ure&#273;ivanje naslova',
	'PM' => 'PM',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'IP adresa samo za moderatore',
	'Registered_ip_address' => 'Zapam&#269;ene IP adrese',
	'Registered_hostname' => 'Zapam&#269;en hostname',
	'Other_registered_ips' => 'Ostali korisnici zapam&#269;eni od %s', //%s is the IP address
	'Other_posted_ips' => 'IP adrese sa kojih je korisnik postao',
	'Search_ip' => 'Tra&#382;i postove po IP adresi',
	'Search_ip_explain' => 'Unesi IP adrese u stilu kao npr <u>127.0.0.1</u> -- mo&#382;e&#353; upotrijebit * kao oznaku sli&#269;nih znakova,npr <u>127.*.*.1</u>',
	'IP' => 'IP',
	'Whois' => 'Whois',
	'Browser' => 'Pretra&#382;iva&#269;',
	'No_other_registered_ips' => 'Nema registriranih korisnika sa ovom IP adresom.',
	'No_other_posted_ips' => 'Ovaj korisnik nije napisao niti jedan post.',
	'Not_recorded' => 'Nije zabilje&#382;eno',
	'Logins' => 'Ulazi',
	'No_logins' => 'Nijedan ulaz nije zabilje&#382;en za ovog korisnika.',
// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'Klikni da pogleda&#353; sliku u originalnoj veli&#269;ini',
	'LIW_click_image_explain' => 'Klikni da pogleda&#353; sliku u originalnoj veli&#269;ini',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => 'Album',
	'Personal_Gallery' => 'Osobna galerija',
	'Personal_Gallery_Of_User' => 'Osobna galerija od %s',
	'Personal_Gallery_Of_User_Profile' => 'Osobne galerija od %s (%d Pictures)',
	'Show_All_Pic_View_Mode_Profile' => 'Prika&#382;i sve slike iz osobne galerije od %s (bez podkategorija)',
	'Not_allowed_to_view_album' => 'Izvini ,nije ti dozvoljeno pogledat album.',
	'Not_allowed_to_upload_album' => 'Izvini, nije ti dozvoljeno postavit sliku u album. Kontaktiraj administratora za informaciju.',
	'Album_empty' => 'Nema slika u albumu<br />Klikni na <b>Dodaj novu sliku</b> na ovoj strani za dodat sliku.',
	'Album_empty2' => 'Nema slika u albumu.',
	'Upload_New_Pic' => 'Dodaj novu sliku.',
	'Pic_Title' => 'Naziv slike',
	'Pic_Title_Explain' => 'Va&#382;no je da stavi&#353; naslov slike. Mo&#382;e biti ime, da ostali znaju o &#269;emu je rije&#269; bez da je pogledaju.',
	'Pic_Upload' => 'Dodaj sliku',
	'Pic_Upload_Explain' => 'Dozvoljeni formati su JPG, GIF i PNG. Maksimalne veli&#269;ine %s bajta. Maksimalne dimenzije %sx%s piksela.',
	'Album_full' => 'Izvini, album je dosegao maksimalni broj slika. Kontaktiraj administratora albuma za informaciju.',
	'Album_upload_successful' => 'Hvala, va&#353;a slika je uspje&#353;no dodana.',
	'Click_return_album' => 'Klikni %ovdje%s za povratak na album.',
	'Invalid_upload' => 'Neva&#382;e&#263;i upload<br /><br />Va&#353;a slika je prevelika ili je nije dopu&#353;tenog formata.',
	'Image_too_big' => 'Izvini, va&#353;a slika je prevelika.',
	'Uploaded_by' => 'Postavljena od',
	'Category_locked' => 'Izvini, nemo&#382;e&#353; dodat sliku u ovu kategoriju jer je zaklju&#269;ana od administratora. Kontaktiraj administratora albuma za informaciju.',
	'View_Album_Index' => 'Album Indeks',
	'View_Album_Personal' => 'prgledava osobni album od korisnika',
	'View_Pictures' => 'Gleda slike ili postuje/&#269;ita komentare u albumu',
	'Album_Search' => 'Pretra&#382;uje album',
	'Pic_Name' => 'Naziv slike',
	'Description' => 'Opis',
	'Search_Contents' => ' koji sadr&#382;i: ',
	'Search_Found' => 'Prona&#273;eno ',
	'Search_Matches' => 'Koji odgovaraju:',
// Mighty Gorgon - Full Album Pack - END

// News
	'xs_latest_news' => 'Najnovije novosti',
	'xs_no_news' => 'Nema novosti.',
	'xs_news_version' => 'XS verzija novosti: %s',
	'xs_news_ticker_feed' => 'XML Feed Izvor: %s',
	'xs_no_ticker' => 'Nema Novosti Tickers definiranih, idite u ACP za napraviti.',
	'xs_news_ticker_title' => 'News Ticker',
	'xs_news_tickers_title' => 'News Tickers',
	'xs_news_item_title' => 'News Item',
	'xs_news_items_title' => 'News Items',
	'hide' => 'Sakrij',
	'show' => 'Poka&#382;i',
	'Welcome' => 'Dobrodo&#353;ao',
	'birthdays' => 'Ro&#273;endani',

//Battle of the Sexes
	'male_zero_total' => '<b>0</b> Mu&#353;ki korisnik', // # registered male users
	'male_total' => '<b>%d</b> Mu&#353;kih korisnika', // # registered male users
	'male_one_total' => '<b>%d</b> Mu&#353;ki korisnik', // # registered male users
	'female_zero_total' => 'We have <b>0</b> &#381;enska korisnica', // # registered female users
	'female_total' => 'We have <b>%d</b> &#381;enske korisnice', // # registered female users
	'female_one_total' => 'We have <b>%d</b> &#381;enska korisnica', // # registered female users
	'unknown_total' => '& <b>%d</b> Nepoznat korisnik',
	'unknown_one_total' => '& <b>%d</b> Nepoznati korisnici',
	'unknown_zero_total' => '',
	'battle_of_sexes' => 'Battle of the Sexes: ',

	'who_viewed' => 'Temu pogledao',
	'BoardRules' => 'Pravila',

	'View_post' => 'Pogledaj post',
	'Post_review' => 'Pregled posta',
	'View_next_post' => 'Pogledaj sljede&#263;i post',
	'View_previous_post' => 'Pogledaj prija&#353;nji post',
	'No_newer_posts' => 'Nema novih postova na forumu',
	'No_older_posts' => 'Nema starijih postova na forumu',

	'StaffSite' => 'O Ekipi',
	'Staff_level' => array('Administrator', 'Moderator'),
	'Staff_forums' => 'Forumi',
	'Staff_stats' => 'Statistike',
	'Staff_user_topic_day_stats' => '%.2f tema na dan', // %.2f = topics per day
	'Staff_period' => 'od %d dana', // %d = days
	'Staff_contact' => 'Kontakti',
	'Staff_messenger' => 'Messenger',
// Start Edit Notes MOD
	'Edit_notes' => 'Uredi bilje&#353;ku',
	'Delete_note' => 'Obri&#353;i bilje&#353;ku',
	'Edited_by' => 'Ure&#273;eno od',
	'Confirm_delete_edit_note' => 'Jesi li siguran da &#382;eli&#353; obrisat bilje&#353;ku?',
	'Edit_note_deleted' => 'Bilje&#353;ka je uspje&#353;no obrisana.',
// End Edit Notes MOD

	'Recent_topics' => 'Posljednje teme',
	'Recent_today' => 'Danas',
	'Recent_yesterday' => 'Ju&#269;er',
	'Recent_last24' => 'Posljdnjih 24 sata',
	'Recent_lastweek' => 'Pro&#353;li tjedan',
	'Recent_lastXdays' => 'Posljdnjih %s dana',
	'Recent_last' => 'Zadnji',
	'Recent_days' => 'Dani',
	'Recent_first' => 'zapo&#269;eo %s',
	'Recent_first_poster' => '%s',
	'Recent_select_mode' => 'Tip selekcije:',
	'Recent_showing_posts' => 'Prikaz postova:',
	'Recent_title_one' => '%s tema %s', // %s = topics, %s = sort method
	'Recent_title_more' => '%s teme %s', // %s = topics, %s = sort method
	'Recent_title_today' => ' od danas',
	'Recent_title_yesterday' => ' od ju&#269;er',
	'Recent_title_last24' => ' u posljednjih 24 sata',
	'Recent_title_lastweek' => ' od pro&#353;log tjedna',
	'Recent_title_lastXdays' => ' u posljednjih %s dana', // %s = days
	'Recent_no_topics' => 'Nijedna tema nije prona&#273;ena.',
	'Recent_wrong_mode' => 'Izabrali ste pogre&#353;an tip.',
	'Recent_click_return' => 'Klikni %ovdje%s za povratak na prija&#353;nju stranu.',

	'Profile_view_option' => 'Dodatni prozor&#269;i&#263; na pregled profila',
	'Profile_viewed' => 'Pogledali moj profil',

// BEGIN Disable Registration MOD
	'registration_status' => 'Izvinite, registracija je trenutno isklju&#269;ena. Molimo probajte kasnije.',
// END Disable Registration MOD

	'PostHighlight' => 'Osvjetli',
	'QuickQuote' => 'Brzo citiranje',
	'Randomquote' => 'Nasumi&#269;no citiranje',

// Mod User CP Organize
	'Cpl_Navigation' => 'Upravlja&#269;ka plo&#269;a',
// 'Cpl_Settings_Options' => 'Postavke i opcije',
	'Cpl_Settings_Options' => 'Postavke',
	'Cpl_Board_Settings' => 'Opcije foruma',
	'Cpl_NewMSG' => 'Po&#353;alji novu poruku',
	'Cpl_Click_Return_Cpl' => 'ili klikni %ovdje%s za povratak na upravlja&#269;ku plo&#269;u',
	'Cpl_Personal_Profile' => 'Osobni profil',
	'Cpl_More_info' => 'Pretplate',

	'Forbidden_characters' => 'Dozvoljena slova i simboli za korisni&#269;ko ime su a-z, 0-9, -, _ i razmak.',

	'Topics_per_page' => 'Tema po strani',
	'Posts_per_page' => 'Postova po strani',
	'Hot_threshold' => 'Popularni postovi',

	'Mod_CP_first_post' => 'Prvi post',
	'Mod_CP_topic_count' => '<b>%s</b> prona&#273;ena tema .',
	'Mod_CP_topics_count' => '<b>%s</b> prona&#273;enih tema.',
	'Mod_CP_no_topics' => 'Nema prona&#273;enih tema.',
	'Mod_CP_sticky' => 'Ljepljivo',
	'Mod_CP_announce' => 'Obavjest',
	'Mod_CP_global' => 'Globaliziraj',
	'Mod_CP_normal' => 'Normaliziraj',
	'Display_sticky' => 'Ljepljivo',
	'Display_announce' => 'Obavjest',
	'Display_global' => 'Glavna obavjest',
	'Display_poll' => 'Glasanje',
	'Display_shadow' => 'Premje&#353;teno',
	'Display_locked' => 'Zaklju&#269;ano',
	'Display_unlocked' => 'Otklju&#269;ano',
	'Display_unread' => 'Nepro&#269;itano',
	'Display_unanswered' => 'Neodgovoreno',
	'Display_all' => 'Sve',
	'Mod_CP_confirm_delete_polls' => 'Jesili siguran da &#382;eli&#353; obrisat glasanje?',
	'Mod_CP_poll_removed' => 'Izabrano glasanje je uspje&#353;no maknuto sa teme.',
	'Mod_CP_polls_removed' => 'Izabrana glasanja su uspje&#353;no maknuta sa teme.',
	'Mod_CP_topic_removed' => 'Izabrana tema je uspje&#353;no izbrisana.',
	'Mod_CP_topic_moved' => 'Izabrana tema je premje&#353;tena je iz<b>%s</b> u <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topics_moved' => 'Izabrane teme su premje&#353;tene je iz<b>%s</b> u <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topic_locked' => 'Izabrana tema je zaklju&#269;ana.',
	'Mod_CP_topic_unlocked' => 'Izabrana tema je otklju&#269;ana.',
	'Mod_CP_topics_sticked' => 'Izabrane teme su ljepljive.',
	'Mod_CP_topic_sticked' => 'Izabrana tema je ljepljiva.',
	'Mod_CP_topics_announced' => 'Izabrane teme su sad kao obavjesti.',
	'Mod_CP_topic_announced' => 'Izabrana tema je sad kao obavjest.',
	'Mod_CP_topics_globalized' => 'Izabrane teme su sad globalizirane.',
	'Mod_CP_topic_globalized' => 'Izabrana tema je sad kao globalizirana.',
	'Mod_CP_topics_normalized' => 'Izabrane teme su sad normalne.',
	'Mod_CP_topic_normalized' => 'Izabrana tema je sad kao normalna.',
	'Mod_CP_click_return_topic' => 'Klikni %ovdje%s za povratak u temu ili %ovdje%s za novu temu.',

	't_starter' => 'Nemo&#382;e&#353; se sam sebi zahvaliz',
	'Watched_Topics' => 'Teme za nadgledanje',
	'No_Watched_Topics' => 'Ne nadgleda&#353; ni jednu temu',
	'Watched_Topics_Started' => 'Temu zapo&#269;eo',
	'Watched_Topics_Stop' => 'Prekini nadgledanje',

	'Stop_watching_forum' => 'Prekini nadgledat ovaj forum',
	'Start_watching_forum' => 'Nadgledaj postove u ovom forumu',
	'No_longer_watching_forum' => 'Vi&#353;e ne nadgleda&#353; ovaj forum.',
	'You_are_watching_forum' => 'Sada nadgleda&#353; ovaj forum.',

	'UCP_SubscForums' => 'Lista pretplatnika foruma',
	'UCP_NoSubscForums' => 'Nisi predpla&#269;en na forume',
	'UCP_SubscForums_Flag' => 'Zastava',
	'UCP_SubscForums_Forum' => 'Forum',
	'UCP_SubscForums_Forum_subscribed' => 'Predplatnici foruma',
	'UCP_SubscForums_Forum_already_subscribed' => 'Ve&#263; si predpla&#263;en na forum',
	'UCP_SubscForums_Click_return_forum' => 'Klikni %ovdje%s za povratak na forum',
	'UCP_SubscForums_Topics' => 'Teme',
	'UCP_SubscForums_Posts' => 'Postovi',
	'UCP_SubscForums_LastPost' => 'Zadnji post',
	'UCP_SubscForums_UnSubscribe' => 'Prekini predplatu',
	'UCP_SubscForums_NewTopic' => 'Nova tema',

	'profile_main' => 'Generalni info',
	'profile_explain' => 'Dobrodo&#353;li na korisni&#269;ku upravlja&#269;ku plo&#269;u.Odavdje mo&#382;ete nadgledat, gledati promjenit va&#353; profil, opcije, predpla&#269;ene forume i teme. Mo&#382;ete slati poruke drugim korisnicima (ako je dozvoljeno).',
	'your_activity' => 'Va&#353; profil',

	'Gravatar' => 'Gravatar',
	'Gravatar_explain' => 'Ako imate <a href="http://www.gravatar.com" target="_blank">gravatar</a>, unesite e-mail s kojim ste se registrirali.',

	'private_msg_review_title' => 'Odgovarate na poruku',
	'private_msg_review_error' => 'Gre&#353;ka u potrazi privatne poruke!',

	'BSH_Viewing_Topic' => 'Gleda temu: %t%',
	'BSH_Viewing_Post' => '%sGleda post%s',
	'BSH_Viewing_Profile' => 'Gleda %u%\'s Profil',
	'BSH_Viewing_Groups' => '%sGleda grupe%s',
	'BSH_Viewing_Forums' => 'Gleda forum: %f%',
	'BSH_Index' => '%sGleda Indeks%s',
	'BSH_Searching_Forums' => '%sPretra&#382;uje forume%s',
	'BSH_Viewing_Onlinelist' => '%sGleda tko je na online%s',
	'BSH_Viewing_Messages' => '%sGleda privatne poruke%s',
	'BSH_Viewing_Memberlist' => '%sGleda listu korisnika%s',
	'BSH_Login' => '%sPrijavljuje se%s',
	'BSH_Logout' => '%sOdjavljuje se%s',
	'BSH_Editing_Profile' => '%sUre&#273;uje profil%s',
	'BSH_Viewing_ACP' => '%sGleda ACP%s',
	'BSH_Moderating_Forum' => '%sUre&#273;uje forume%s',
	'BSH_Viewing_FAQ' => '%sGleda FAQ%s',
	'BSH_Viewing_Category' => 'Gleda kategoriju: %c%',

	'Board_statistic' => 'Statisika baze',
	'Database_statistic' => 'Statistika baze datoteka',
	'Version_info' => 'Info o verziji',
	'Thereof_deactivated_users' => 'Broj neaktivnih korisnika',
	'Thereof_Moderators' => 'Ukupno moderatora',
	'Thereof_Junior_Administrators' => 'Ukupno Junior Administratora',
	'Thereof_Administrators' => 'Ukupno administratora',
	'Deactivated_Users' => 'Korisnici koji &#269;ekaju aktiviranje',
	'Users_with_Mod_Privileges' => 'Korisnici sa moderatorskim privilegijama',
	'Users_with_Junior_Admin_Privileges' => 'Korisnici sa junior administrator privilegijama',
	'Users_with_Admin_Privileges' => 'Korisnici sa administrativnim privilegijama',
	'DB_size' => 'Veli&#269;ina baze',
	'Version_of_ip' => 'Verzija <a href="http://www.icyphoenix.com/">Icy Phoenix</a>',
	'Version_of_board' => 'Verzija <a href="http://www.phpbb.com">phpbb</a>',
	'Version_of_PHP' => 'Verzija <a href="http://www.php.net/">PHP</a>',
	'Version_of_MySQL' => 'Verzija <a href="http://www.mysql.com/">MySQL</a>',
	'Download_post' => 'Spremi post',

	'Download_topic' => 'Spremi temu',
	'Always_swear' => 'Always allow swear words',

	'Shoutbox' => 'Shoutbox',
	'Shoutbox_date' => ' d m Y h:i:s',
	'Shout_censor' => 'Tekst izbrisan!',
	'Shout_refresh' => 'Osvje&#382;i',
	'Shout_text' => 'Va&#353; tekst',
	'Viewing_Shoutbox' => 'Gleda shoutbox',
	'Censor' => 'Cenzor',

	'Edit_post_time' => 'Promjeni vrijeme ovog posta',
	'Edit_post_time_xs' => 'Izmjeni',
	'Topic_time_xs' => 'Vrijeme teme',
	'Post_time' => 'Vrijeme posta',
	'Post_time_successfull_edited' => '<b>Vrijeme izmjenjeno uspije&#353;no.</b></span><br /><span class="postdetails">Ovaj prozor &#263;e se zatvorit za 3 sekunde.',

	'staff_message' => 'Poruka od stuff',

	'Board_Rules' => 'Pravila foruma',
	'Forum_Rules' => 'Pravila foruma',
	'Show_avatars' => 'Prika&#382;i avatare u temi',
	'Show_signatures' => 'Prika&#382;i potpis u temi',
	'Acronym' => 'Acronym',
	'Acronyms' => 'Acronyms',
	'User_Number' => 'Korisnik #',
	'Member_Count' => 'Korisnici',
	'Reply_message' => 'Odgovorena poruka',
	'Click_read_topic' => 'Klikni %ovdje%s za pro&#269;itat', // %s's here are for uris, do not remove!
	'Create_with_generator' => 'Izradi Avatar sa Avatar Generatorom',
	'View_avatar_generator' => 'Avatar Generator',
	'Adv_Search' => 'Napredno pretra&#382;ivanje',
	'Search_Explain' => 'Tra&#382;i unutar foruma',
	'Please_remove_install_contrib' => 'Molim provjerite dali ste sigurno pobrisali install/ i contrib/ mapu ',
	'Search_Engines' => 'Pretra&#382;iva&#269;i (Engine Bots):',
	'Bots_browsing_forum' => 'Pretra&#382;iva&#269;i (Engine Bots) gledaju ovaj forum:',
	'Debug_On' => 'Debug On',
	'Debug_Off' => 'Debug Off',
	'Page_Generation_Time' => 'Page Generation Time:',
	'Memory_Usage' => 'Memorija',
	'SQL_Queries' => 'SQL queries',
	'Search_new2' => 'Noci postovi',
	'Search_new_p' => 'Postovi od zadnje posjete',
	'Show_In_Portal' => 'Prika&#382;i na portalu',
	'Not_Auth_View' => 'Niste autorizirani za pogledat ovu starnu.',
	'Site_Hist' => 'Povijest sajta',
	'Links' => 'Linkovi',
	'Print_View' => 'Verzija za ispis',
	'Browsing_topic' => 'Korisnici koji gledaju temu:',
	'Sudoku' => 'Sudoku',
	'Bookmarks' => 'Bookmarks',
	'Set_Bookmark' => 'Set a bookmark for this topic',
	'Remove_Bookmark' => 'Remove the bookmark for this topic',
	'No_Bookmarks' => 'You do not have set a bookmark',
	'Always_set_bm' => 'Set bookmark automatically when posting',
	'Found_bookmark' => 'You have set %d bookmark.', // eg. Search found 1 match
	'Found_bookmarks' => 'You have set %d bookmarks.', // eg. Search found 24 matches
	'More_bookmarks' => 'More bookmarks...', // For mozilla navigation bar

//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => '&#352;to je ovo?',
	'Rss_news_help_title' => 'RSS Newsreader Pomo&#263;',
	'Rss_news_help_header' => '&#352;to su feeds i kako da ih koristim?',
	'Rss_news_help_explain' => 'A feed is a regularly updated summary of certain Web contents, which have links to the complete version of respective contents. If you subscribe the feed of a Website with a feed reader, you will get all new contents of these Website in a summary.<br /><br /><b>Attention:</b> For subscribing Website feeds a <a href="http://www.rssowl.org/" target="new">Feed-Reader</a> must be used. When clicking on a link to a RSS or an ATOM feed otherwise a side with an unformated text confusion appears in the Browser.',
	'Rss_news_help_header_2' => '<b>&#352;to je RSS i Atom?</b>',
	'Rss_news_help_explain_2' => 'RSS and Atom are two formats for feeds. Most feed readers support both formats. At present by us atom 0.3 and RSS 2.0 are supported.',
	'Rss_news_help_header_3' => '<b>kako da koristim News feeds?</b>',
	'Rss_news_help_explain_3' => 'At first you need a feed reader, you get that for example by <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />Afterwards you can in the program:<br /><br /><b>1.</b> Search for RSS links on our side. (Extras => Search for new feeds on web page) <b>or</b><br /><b>2.</b> add one of the following feed URL`s:',
	'L_url_rss_explain' => 'URL za sve teme foruma.',
	'L_url_rss_news_explain' => 'URL samo za novosti foruma.',
	'L_url_rss_atom_explain' => 'URL za Atom RSS Feed.',
	'Rss_news_help_rights' => 'We reserve ourselves the right, to terminate the use of feeds at any time after our discretion. Our forum feeds may not be further-driven out.',
	'Rss_news_feeds' => 'RSS News Feeds',

	'Quick_Reply' => 'Brzi odgovor',
	'Mod_CP_sticky2' => 'Ljepljivo',
	'Mod_CP_announce2' => 'Obavjest',
	'Mod_CP_global2' => 'Globaliziraj',
	'Mod_CP_normal2' => 'Normaliziraj',

	'Search_Flood_Error' => 'Nemo&#382;ete pretra&#382;ivati odmah nakon va&#353;eg posljednjeg tra&#382;enja, molimo vas probajte ponovo malo kasnije.',

// Custom Profile Fields MOD
	'custom_field_notice' => 'Ovo je stvorio administrator. Mogu a i nemoraju biti vidljive. Ozna&#269;eno sa * zahtjeva fields.',
	'and' => ' i ',
// END Custom Profile Fields MOD

	'dsbl' => 'Va&#353;a IP adresa je na <a href="%url%">DNS-Crnoj listi</a>. <br />Poku&#353;aj registracije zabranjen.',
	'Emails_Only_To_Admins_Error' => 'Mo&#382;e&#353; koristiti sustav e-maila da po&#353;alje&#353; e-mail samo administratorima.',
	'Wordgraph' => 'Wordgraph',
	'Viewing_wordgraph' => 'Gleda Wordgraph',
	'Links_For_Guests' => '<b>Mora&#353; biti prijavljen da mo&#382;e&#353; pogledat ovaj link</b>',
	'New' => 'N',
	'New_Label' => 'Novi',
	'New_Messages_Label' => 'Nova poruka',
	'Show_Personal_Gallery' => 'Poka&#382;i korisni&#269;ku osobnu galeriju',
	'Login_Status' => 'Online Status',
	'Login_Hidden' => 'Sakriven',
	'Login_Visible' => 'Vidljiv',
	'Login_Default' => 'Zadani',
	'Errors_Not_Found' => 'Adresa koju tra&#382;ite nije na ovom serveru',
	'Errors_000' => 'Nepoznata gre&#353;ka',
	'Errors_000_Full' => 'Adresa se vra&#269;a kao nepoznata gre&#353;ka u kodu.<br />Gre&#353;ka je zabilje&#382;ena u log file i mi &#263;emo provjerit u &#269;emu je problem.',
	'Errors_400' => 'Gre&#353;ka 400',
	'Errors_400_Full' => 'Adresa nije va&#382;e&#263;a.',
	'Errors_401' => 'Gre&#353;ka 401 - Gre&#353;ka ovlasti',
	'Errors_401_Full' => 'Dobivate ovu poruku jer niste ovla&#353;teni za pristup toj adresi.',
	'Errors_403' => 'Gre&#353;ka 403',
	'Errors_403_Full' => 'Pristup ovoj adresi je zabranjen.',
	'Errors_404' => 'Gre&#353;ka 404 - Datoteka nije prona&#273;ena',
	'Errors_404_Full' => 'Adresa koju tra&#382;ize nije dostupna na ovom serveru. Mo&#382;da ste pobrkali adresu ili ono &#353;to tra&#382;ite je obrisano.',
	'Errors_500' => 'Gre&#353;ka 500 - Gre&#353;ka u konfiguraciji',
	'Errors_500_Full' => 'Adresa koju ste tra&#382;ili vra&#269;a se kao konfiguracijska gre&#353;ka.<br />Gre&#353;ka je zabilje&#382;ena u log file i mi &#263;emo provjerit u &#269;emu je problem.',
	'Errors_Email_Subject' => 'Gre&#353;ke: ',
	'Errors_Email_Addrress_Prefix' => 'xs_gre&#353;ka',
	'Errors_Email_Body' => 'Nastala je gre&#353;ka na va&#353;em forumu. Molimo provjerite log file.',
	'Remote_avatar_no_image' => 'Slika %s ne postoji',
	'Remote_avatar_error_filesize' => 'Slika je prevelika za avatar (%d Bytes)',
	'Remote_avatar_error_dimension' => 'Dimenzije slike su prevelike za avatar (%d x %d piksela)',
	'How_Many_Chatters' => 'Trenutno je <b>%d</b> korisnika/ce na chatu.',
	'Who_Are_Chatting'  => '<b>%s</b>',
	'Click_to_join_chat' => 'Klikni za ulazak u chat',
	'ChatBox' => 'ChatBox',
	'log_out_chat' => 'Uspe&#353;no ste se odjavili iz chata ',
	'Send' => 'Po&#353;alji',
	'Login_to_join_chat' => 'Pristupi da bi u&#353;ao u chat',

// Hacks List
/* General */
	'Hacks_List' => 'Zasluge',
	'Page_Desc' => 'Ovaj modul dozvoljava vam da dodate/izmjenite/izbri&#353;ete the listu trenutnih zasluga za hacks/mods instaliran na va&#353; forum. One se prika&#382;u korisnicima kada posjete credits.php stranicu.',
	'Deleted_Hack' => 'Izbri&#353;i zasluge za mod %s sa liste.<br />',
	'Updated_Hack' => 'Osvje&#382;ena zasluga za mod %s.<br />',
	'Added_Hack' => 'Dodan info za mod %s.<br />',
	'Status' => 'Status',
	'No_Website' => 'Web-site je nedostupan.',
	'No_Hacks' => 'Nema zasluga za prikazat.',
	'Add_New_Hack' => 'Dodaj novu zaslugu',
	'User_Viewable' => 'Sakrij listu za korisnike?',
	'Hack_Name' => 'Ime moda',
//	'Description' => 'Opis',
	'Required' => 'Obavezno',
	'Author_Email' => 'E-mail autora',
	'Version' => 'Verzija',
	'Download_URL' => 'Lokacija za pohranu',

/* Errors */
	'Error_Hacks_List_Table' => 'Error querying the Hacks List Table.',
	'Required_Field_Missing' => 'Niste unijeli sve potrebne podatke.',
	'Error_File_Opening' => 'Datoteku nije mogu&#269;e otvorit: %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => 'Najnovija slika', // Album Addon
	'Random_pic' => 'Slika na blef', // Album Addon
	'Click_enlarge_pic' => 'Klikni na sliku da bi je pove&#269;ao',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => 'Zadnji kori&#353;teni IP',
	'Last_Used_OS' => 'OS',
	'Last_Used_Browser' => 'Pretra&#382;iva&#263;',
	'Last_Used_Referer' => 'Referer',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
	'Users_Admins' => 'Administratori',
	'Users_Mods' => 'Moderatori',
	'Users_Global_Mods' => 'Globalni Moderatori',
	'Users_Regs' => 'Korisnici',
	'Users_Guests' => 'Gosti',
	'Users_Hidden' => 'Sakriveni',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Fast' => 'Brzo',
	'Standard' => 'Standardno',
	'Style' => 'Izgled',
	'User_Contacts' => 'Kontakti',
	'Memberlist_Users_Display' => 'Korisnici po strani:',
	'Sort_LastLogon' => 'Zadnji pristup',
	'Sort_Birthday' => 'Ro&#273;endan',
	'SORT_STYLE' => 'Style',
	'SORT_LASTLOGON' => 'Last Logon',
	'SORT_BIRTHDAY' => 'Birthday',
	'SORT_ONLINE' => 'Online',
	'ASCENDING' => 'Ascending',
	'DESCENDING' => 'Descending',
	'LESS_THAN' => 'Less than',
	'EQUAL_TO' => 'Equal to',
	'MORE_THAN' => 'More than',
	'BEFORE' => 'Before',
	'AFTER' => 'After',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => 'Staff',
	'Rank' => 'Status',
	'Rank_Header' => 'Statusi',
	'Rank_Image' => 'Slika statusa',
	'Rank_Posts_Count' => 'Automatski status po postovima',
	'Rank_Days_Count' => 'Automatski status po danima',
	'Rank_Min_Des' => 'Najmanje postova/dnevno',
	'Rank_Min_M' => 'Najmanje postova',
	'Rank_Max_M' => 'Najvi&#353;e postova',
	'Rank_Min_D' => 'Najmanje dana',
	'Rank_Max_D' => 'Najvi&#353;e dana',
	'Rank_Special' => 'Specijalni status',
	'Rank_Special_Guest' => 'Specijalni status za posjetitelje',
	'Rank_Special_Banned' => 'Specijalni status za isklju&#269;ene',
	'Current_Rank_Image' => 'Trenutna slika statusa',
	'No_Rank' => 'Status nije dodjeljen',
	'No_Rank_Image' => 'Nema slike statusa',
	'No_Rank_Special' => 'Specijalni status nije dodjeljen',
	'Memberlist_Administrator' => 'Administrator',
	'Memberlist_Moderator' => 'Moderator',
	'Memberlist_User' => 'Korisnik',
	'Guest_User' => 'Posjetitelj',
	'Banned_User' => 'Isklju&#269;en',
	'Rank1_title' => 'Status 1 Naslov',
	'Rank2_title' => 'Status 2 Naslov',
	'Rank3_title' => 'Status 3 Naslov',
	'Rank4_title' => 'Status 4 Naslov',
	'Rank5_title' => 'Status 5 Naslov',
// Mighty Gorgon - Multiple Ranks - END

// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => 'Izbornik',
	'MAIN_LINKS' => 'Sadr&#382;aj',
	'NEWS_LINKS' => 'Novosti',
	'INFO_LINKS' => 'Info',
	'USERS_LINKS' => 'Korisnici &amp; Grupe',
	'SELECT_STYLE' => 'Style',
	'SELECT_LANG' => 'Language',
	'RSS_FEEDS' => 'RSS Feeds',
	'SPONSORS_LINKS' => 'Sponzori',
        'TOOLS_LINKS' => 'Alati',
	'HelpDesk' => 'Pomo&#263;',
	'AvatarGenerator' => 'Avatar Generator',
	'DBGenerator' => 'SQL na PHP Generator ',

	'LINK_ACP' => 'ACP',
	'LINK_CMS' => 'CMS',
	'LINK_HOME' => 'Home',
	'LINK_PROFILE' => 'Profile',
	'LINK_FORUM' => 'Forum',
	'LINK_BOARDRULES' => 'Rules',
	'LINK_FAQ' => 'FAQ',
	'LINK_SEARCH' => 'Search',
	'LINK_SITEMAP' => 'Sitemap',
	'LINK_ALBUM' => 'Album',
	'LINK_CALENDAR' => 'Calendar',
	'LINK_DOWNLOADS' => 'Downloads',
	'LINK_BOOKMARKS' => 'Bookmarks',
	'LINK_DRAFTS' => 'Drafts',
	'LINK_UPLOADED_IMAGES' => 'Personal Images',
	'LINK_AJAX_SHOUTBOX' => 'Chat',
	'LINK_LINKS' => 'Links',
	'LINK_CONTACT_US' => 'Contact Us',
	'LINK_SUDOKU' => 'Sudoku',

	'LINK_NEWS_CAT' => 'News Categories',
	'LINK_NEWS_ARC' => 'News Archive',
	'LINK_NEW_MESSAGES' => 'New Posts',
	'LINK_DISPLAY_UNREAD_S' => 'Unread',
	'LINK_DISPLAY_MARKED_S' => 'Marked',
	'LINK_DISPLAY_PERMANENT_S' => 'Permanent',
	'LINK_DIGESTS' => 'Digests',

	'LINK_CREDITS' => 'Credits',
	'LINK_REFERERS' => 'HTTP Referers',
	'LINK_VIEWONLINE' => 'Online Users',
	'LINK_STATISTICS' => 'Statistics',
	'LINK_DELETE_COOKIES' => 'Delete Cookies',

	'LINK_MEMBERLIST' => 'Memberlist',
	'LINK_USERGROUPS' => 'Usergroups',
	'LINK_RANKS' => 'Ranks',
	'LINK_STAFF' => 'Staff',
// Mighty Gorgon - Nav Links - END

	'Activity' => 'Igre',
	'Games' => 'Igre',
	'Trohpy' => 'Igra Trophies',
	'quick_links_games' => 'Menu igara',

	'By' => 'Od',
	'No_Icon_Image' => 'Nema ikone',
	'Change_Style' => 'Izgled',
	'Change_Lang' => 'Jezik',
	'Permissions_List' => 'Lista dozvola',
	'IP_Team' => 'Icy Phoenix Tim',

//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
	'Nav_Separator' => '&nbsp,&raquo,&nbsp,',
	'WeatherForecast' => 'Weather Forecast',
	'ErrorNotFound' => 'Datoteka nije prona&#273;ena!',
	'MGC_Users_Online' => 'MGC korisnici online',
	'MGC_User_Servertime' => 'Datum',
	'MGC_User_Nickname' => 'Nadimak',
	'MGC_User_Server' => 'Server',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'MGC Verzija',

	'Country_Flag' => 'Zastava dr&#382;ave',
	'Select_Country' => 'Izaberi dr&#382;avu',
	'Extra_profile_info' => 'Dodatne informacije profila',
//	'Extra_profile_info_explain' => 'You can add extra information about yourself or about your hobbies. You can also add photos. You can use some bbcodes as when you post or make your signature. There is a <b>%d</b> character limit (if 0 then no limit)',
	'Extra_profile_info_explain' => 'Mo&#382;e&#353; dodat dodatne informacije o sebi ili hobiju. Mo&#382;e&#353; dodat i slike. Mo&#382;e&#353; koristit neke bbkodove kad postuje&#353; ili kad izra&#273;uje&#353; potpis.',
	'Extra_window' => 'Otvori u zasebnom prozoru',
	'Extra_too_long' => 'Tvoj extra field je preduga&#269;ak (Dozvoljeno je najvi&#353;e <b>%d</b> simbola)',
	'UserLike' => 'Korisnik voli',
	'UserDisLike' => 'Korisnik ne voli',
	'UserLikeIns' => 'Tri stvari koje voli&#353;',
	'UserDisLikeIns' => 'Tri stvari koje ne voli&#353;',
	'UserPhone' => 'Telefon',
	'UserSport' => 'Sport/Team',
	'UserMusic' => 'Muzika/Grupe',
	'UserNoInfo' => 'Nije dostupna informacija',
	'Last_Seen' => 'Zadnji posjet',
// New MG - END

// MG CMS - BEGIN
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'CMS Mana&#273;ment',
	'CMS_CONFIG' => 'CMS Konfiguracija',
	'CMS_SETTINGS' => 'Settings',
	'CMS_ACP' => 'Uredi ovu stranu',
	'CUSTOM_PAGE' => 'Poslo&#382;i stranu',
// MG CMS - END

// Icy Phoenix - BUILD 001
	'SimilarTopics' => 'Sli&#269;ne teme',
	'Chat' => 'Chat',
	'Digests' => 'Digests',

	'CPL_REG_INFO_EXPLAIN' => 'Korisni&#269;ko ime, e-mail adresa i lozinka',
	'CPL_PROFILE_INFO_EXPLAIN' => 'Generalne kontakt informacije, messenger, ro&#273;endan, zanimanja i druge informacije',
	'CPL_PROFILE_VIEWED_EXPLAIN' => 'Korisnici koji su pogledali tvoj profil',
	'CPL_AVATAR_PANEL_EXPLAIN' => 'Avatar je mala sli&#269;ica vezana uz tvoje ime',
	'CPL_SIG_EDIT_EXPLAIN' => 'Tvoj potpis: mo&#382;e&#353; odredit neki tekst da se prika&#382;e na dnu tvog posta',
	'CPL_PREFERENCES_EXPLAIN' => 'Generalne opcije vezane uz postove (pisanje/&#269;itanje)',
	'CPL_BOARD_SETTINGS_EXPLAIN' => 'Generalne opcije vezane uz datum, izgled (stil) i jezik',
	'Calendar_settings_EXPLAIN' => 'Opcije vezane uz kalendar',
	'Hierarchy_setting_EXPLAIN' => 'Opcije vezane uz podforume i izgled podjela tema',
	'LOGIN_SEC_EXPLAIN' => 'Ako je uklju&#269;eno ova sekcija uklju&#269;uje vam kontrolu na svim va&#353;im prijavama',
	'CPL_OWN_POSTS_EXPLAIN' => 'Tra&#382;i vlastite postove',
	'CPL_OWN_PICTURES_EXPLAIN' => 'Posjeti svoju osobnu galeriju',
	'CPL_INBOX_EXPLAIN' => 'Ulazne: sadr&#382;i privatne poruke koje ste dobili',
	'CPL_SAVEBOX_EXPLAIN' => 'Spremljene poruke: sadr&#382;i privatne poruke koje ste spremili',
	'CPL_OUTBOX_EXPLAIN' => 'Izlazne: sadr&#382;i privatne poruke koje ste sadr&#382;i privatne poruke koje ste a nisu pro&#269;itane',
	'CPL_SENTBOX_EXPLAIN' => 'Poslane: sadr&#382;i privatne poruke koje ste poslali a pro&#269;itane su',
	'CPL_BOOKMARKS_EXPLAIN' => 'Svi bookmarks koje ste obilje&#382;ili u temama',
	'WATCHED_TOPICS_EXPLAIN' => 'Lista svih tema koje nadgledate',
	'CPL_SUBSCFORUMS_EXPLAIN' => 'Forum na koji ste prijavljeni za nadgledat nove teme',
	'DIGESTS_EXPLAIN' => 'Digests are periodical email which are sent automatically with an excerpt of the new messages posted in the forum',
	'DRAFTS_EXPLAIN' => 'Manage your Drafts',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Shoutbox',
	'Ajax_Chat' => 'Chat',
	'Ajax_Archive' => 'Chat Archiva',
	'Shoutbox_flooderror' => 'Nemo&#382;ete odmah pisati nakon predhodnog. Poku&#353;ajte malo kasnije.',
	'Shoutbox_no_auth' => 'Izvinite, samo prijavljeni korisnici mogu koristit shoutbox',
	'Shoutbox_loading' => 'U&#269;itavanje Shoutboxa...',
// Errors
	'Shoutbox_unable' => 'Izvinite, nemo&#382;e se izvr&#353;it. Poku&#353;ajte ponovo.',
	'Shoutbox_timeout' => 'Sorry, the server is not responding. Please try again.',
	'Shoutbox_empty' => 'Nema poruke u Database',
	'Shoutbox_no_mode' => 'Neva&#382;e&#263;i mod izabran',
// Archive
	'Shouts' => 'Shouts',
	'Statistics' => 'Statistike',
	'Total_shouts' => 'Ukupno Shouts',
	'Stored_shouts' => 'Spremljeni Shouts',
	'My_shouts' => 'Moji Shouts',
	'Today_shouts' => 'Shouts u posljednja 24 sata',
	'Top_Ten_Shouters' => '10 najboljih Shouters',
// Online list
	'Online_total' => 'Sveukupno',
	'Online_registered' => 'Korisnici',
	'Online_guests' => 'Posjetitelji',
	'Who_is_Chatting' => 'Tko &#269;atuje',
	'Shoutbox_online_explain' => 'Podatak se bazira na korisnicima aktivnim u posljednjih 30 sekunti',
	'Start_Private_Chat' => 'Click on the name to start a private chat',
// Chat rooms
	'Shout_rooms' => 'Rooms',
	'Admin_rooms' => 'All rooms',
	'Public_room' => 'Public room',
	'Private_room' => 'Private room',
	'My_id' => 'Me',
// Ajax Shoutbox - END

	'Contact_us' => 'Kontaktirajte nas',
	'Contact_us_explain' => 'Na ovoj strani mo&#382;ete nam poslati e-mail',
	'Session_invalid' => 'Nevaljala stavka. Molimo po&#353;aljite ponovo.',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => ' korisni&#269;ko ime je prekratko',
	'Reg_Username_Long' => ' korisni&#269;ko ime je preduga&#269;ko',
	'Reg_Username_Taken' => ' ovo korisni&#269;ko ime je zauzeto',
	'Reg_Username_Free' => ' ovo korisni&#269;ko ime je dostupno',
	'Reg_PWD_Short' => 'Lozinka je prekratka',
	'Reg_PWD_Easy' => 'Lozinka je prejednostavna',
	'Reg_PWD_OK' => 'Lozinka je uredu',
	'Reg_Email_Invalid' => ' ova e-mail adresa je neva&#382;e&#269;a ili je ve&#263; u db',
	'Reg_Email_OK' => ' ova e-mail adresa je uredu',

// Moved here from lang_adv_time.php
	'time_mode' => 'Postavke vremena',
	'time_mode_text' => 'DST razlika je razlika izme&#273;u Daylight Saving Time i normalnog vremena u va&#353;oj zemlji (od 0 do 120 minuta, naj&#269;e&#353;&#263;e 60).<br /><br />* Ozna&#269;eno sa * je zadano vrijeme foruma a postavljeno je od administratora.',
	'time_mode_auto' => 'Automatski...',
	'time_mode_full_pc' => 'Vrijeme s va&#353;eg ra&#269;unala',
	'time_mode_server_pc' => 'Univerzalno vrijeme servera, Vremenska zona/DST<br /><span STYLE="margin-left: 25">iz va&#353;eg ra&#269;unala</span>',
	'time_mode_full_server' => 'Lokalno vrijeme servera',
	'time_mode_manual' => 'Ru&#269;no...',
	'time_mode_dst' => 'DST uklju&#269;en',
	'time_mode_dst_server' => 'Sa servera',
	'time_mode_dst_time_lag' => 'DST razlika',
	'time_mode_dst_mn' => 'min',
	'time_mode_dst_mn_explain' => 'Time expressed in minutes',
	'time_mode_timezone' => 'Vremenska zona',

	'dst_time_lag_error' => 'DST gre&#353;ka u razliki. Morate upisati minute izme&#273;u 0 i 120.',

	'dst_enabled_mode' => ' [DST uklju&#269;en]',
	'full_server_mode' => 'Vrijeme sinhronizirano sa vremenaom na forumu i serveru',
	'server_pc_mode' => 'Sinhronizacija vremena. sa serverom - Vremenska zona/DST s va&#353;im ra&#269;unalom',
	'full_pc_mode' => 'Vrijeme sinhronizirano s va&#353;im ra&#269;unalom',

	'Smileys_Per_Page' => 'Smajlovi po strani',

/* lang_site_hist.php - BEGIN */
	'Site_history' => 'Povijest foruma',
	'Month' => 'Mjesec',
	'Week_day' => 'Dan u tjednu',
	'Not_availble' => 'Nedostupno',
	'Total_users' => 'Najvi&#353;e korisnika',
	'Reg_users' => 'Prijavljeni korisnici',
	'Hidden_users' => 'Sakriveni korisnici',
	'Guests_users' => 'Posjetitelji',
	'New_users' => 'Novi korisnici',
	'New_topics' => 'Nove teme',
	'New_posts_reply' => 'Postovi/Odgovori',
	'Most_online' => 'Najvi&#353;e korisnika online %s',
	'Most_online_week' => 'Najvi&#353;e korisnika online u proteklih 7 dana',
	'Last_24' => 'Najvi&#353;e korisnika online u proteklih %s sati',
	'Top_Posting_Users' => 'Korisnici s najvi&#353;e postova',
	'Top_Posting_Users_week' => 'Korisnici s najvi&#353;e postova postova u ovom tjednu [%s]',
	'Rank' => 'Status',
	'Percent' => 'Postotak',
	'Graph' => 'Grafikon',
	'Top_Visiting_Users' => 'Korisnici s najvi&#353;e provedenog vremena',
/* lang_site_hist.php - END */

/* lang_referrers.php - BEGIN */
	'REFERERS' => 'Http Referers',
	'Viewing_Referers' => 'Pogledaj Referers',
	'Referers_Title' => 'Http Referrers Managememnt',
	'Referers_Cleared' => 'Referrers Cleared',
	'Referers_Clear' => 'Obri&#353;i sve',
	'Click_Return_Referers' => 'Klikni %ovdje%s za povratak na Referrers',
	'Referer_host' => 'Referrer\'s Host',
	'Referer_url' => 'Referrer\'s Url',
	'REFERER_T_URL' => 'Visited URL',
	'Referer_ip' => 'Referrer\'s IP',
	'Referer_hits' => 'Hits',
	'Referer_first' =>'Prva posjeta',
	'Referer_last' => 'Zadnja posjeta',
	'REFERER_DELETE' => 'Delete',
	'REFERER_KILL' => 'Remove from DB (use * for wildcard)',
	'REFERER_GROUP_BY' => 'Group By',
/* lang_referers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_Days' => '%d Dani',
	'X_Weeks' => '%d Tjedni',
	'X_Months' => '%d Mjeseci',
	'X_Years' => '%d Godine',

	'Confirm_delete_user' => 'Jeste li stvarno sigurni da &#382;elite obrisat ovog korisnika?',
	'Prune_no_users' => 'Nijedan korisnik nije obrisan',
	'Prune_users_number' => 'Korisnik %d je obrisan:',

	'Prune_user_list' => 'Korisnici koji &#263;e biti obrisani',
	'Prune_on_click' => 'Obrisat &#263;ete %d korisnika. Jeste li sigurni?',
	'Prune_Action' => 'Klikni link da potvrdi&#353;',
	'Prune_users_explain' => 'Na ovoj strani mo&#382;e&#353; obrisat korisnike. Mo&#382;e&#353; izabrat jednu od tri opcije: obri&#353;i stare korisnike koji nikad nisu ni&#353;ta napisali(postovali), obri&#353;i stare korisnike koji se nikad nisu prijavili (ulogirali), obri&#353;i korisnike koji se nikad nisu aktivirali.<p/><b>Pazi:</b> ovom nema povratka.',
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => 'Avatar Generator',
	'Available' => 'Dostupni Avatari',
	'Random' => 'Slu&#269;ajni Avatari',
	'Avatar_Text' => 'Molimo unesite tekst koji &#382;elite na va&#353;emr avataru:',
	'Avatar_Preview' => 'Pogledaj Avatar',
	'Your_Avatar' => 'Va&#353; Avatar',
	'Submit_Avatar' => 'Prihvati avatar',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Uploading' => 'Uploading...',
	'Upload_Image_Local' => 'Postavi sliku',
	'Uploaded_Images_Local' => 'Postavljene slike',
	'Upload_Image_Local_Explain' => 'Izaberite sliku za postavljanje',
	'Uploaded_Image_Success' => 'Slika je uspje&#353;no postavljena.',
	'Uploaded_Image_BBC' => 'Mo&#382;ete upotrijebit ovaj BBCode da postavite sliku.',
	'Upload_Image_Empty' => 'Nemo&#382;ete postaviti zrak... tj ni&#353;ta!',
	'Upload_File_Too_Big' => 'Datoteku koju &#382;elite postavi je prevelika! Najve&#269;a dopu&#353;tena veli&#269;ina:',
	'Upload_File_Error' => 'Nepoznata Gre&#353;ka',
	'Upload_File_Error_Size' => 'File size not allowed!',
	'Upload_File_Error_Type' => 'File type not allowed!',
	'Upload_File_Type_Allowed' => 'Mo&#382;ete postaviti samo ove vrste datoteka',
	'Upload_File_Max_Size' => 'The maximum single file size allowed is',
	'Upload_Insert_Image' => 'Ubaci BBCode',
	'Upload_Close' => 'Zatvori',
	'BBCode' => 'BBCode',
	'HTML' => 'HTML',

	'No_News' => 'Nema novosti',

	'Email_confirm' => 'Potvrdi svoju e-mail adresu',
	'Email_mismatch' => 'E-mail adresa koju ste upisali ne odgovara.',

	'View_ballot' => 'Pogledaj Ballot',
	'Full_edit' => 'Prebaci na standardno (full) ure&#273;ivanje',
	'Save_changes' => 'Spremi',
	'No_subject' => '(Bez naslova)',
	'Edit_quick_post' => 'Brzo ure&#273;ivanje ovog posta',
	'AJAX_search_results' => 'Brza pretraga je prona&#353;la %s tema koje odgovaraju naslovu va&#353;e teme. Klikni ovdje za pogledat teme',
	'AJAX_search_result' => 'Brza pretraga je prona&#353;la jednu temu koja odgovara naslovu va&#353;e teme. Klikni ovdje za pogledat temu',
	'More_matches_username' => 'Vi&#353;e od jednog korisnika odgovara va&#353;oj pretragi. Izaberite korisnika ovdje u boksu.',
	'No_username' => 'Morate unjeti korisni&#269;ko ime.',
	'AJAX_quick_search_results' => 'Brza pretraga je prona&#353;la %s tema koje odgovaraju.<br />Na desnoj strani mo&#382;ete vidjeti prve rezultate.<br />Klikni na TRA&#381;I za potpunu listu.',
	'AJAX_quick_search_result' => 'Brza pretraga je prona&#353;la jednu temu koja odgovara.<br />Na desnoj strani mo&#382;ete vidjeti rezultate.',

	'Icon_Description' => 'Opis ikone',

	'Feature_Disabled' => 'Ova opcija je isklju&#269;ena.',

// Resend Activation - BEGIN
	'Resend_activation_email' => 'Po&#353;alji aktivacijski email',
	'Invalid_activation' => 'Korisnikov akount mo&#382;e biti aktiviran samo od strane administratora.',
	'No_actkey' => 'Nema aktivacijskog klju&#263;a za va&#353; akount. Molimo kontaktirajte administratora za vi&#353;e informacija.',
	'Send_actmail_flood_error' => 'Nemo&#382;ete podnjeti zahtjev odmah nakon va&#353;eg predhodnog, molimo probajte malo kasnije.',
	'Resend_activation_email_done' => 'Aktivacijski e-mail vam je poslan. Provjerite va&#353; mail za daljnje informacije.',
// Resend Activation - END

	'Bots_Group' => 'Bots',
	'Bots_Color' => 'Bots boje',
	'Active_Users_Group' => 'Aktivni korisnici',
	'Active_Users_Color' => 'Boja aktivnog korisnika',
	'Group_Default_Membership' => 'Zadana grupa',
	'Group_Default_Membership_Explain' => 'Izaberi zadanu grupu za korisnika, da bi dodao status i boju.',
	'User_Color' => 'Boja korisnika',
	'User_Color_Explain' => 'Ako si odredio boju za ovog korisnika,to &#263;e biti zamjenjeno bojom grupe ako si odredio neku grupu ovdje u boksu pored. Upotrijebi hex kod bez <b>#</b> primjer: ff0000 je kod za CRVENU.',
	'No_Groups_Membership' => 'No Membership',
	'No_Default_Group' => 'No Default Group',
	'Group_members_updated' => 'Korisni&#269;ka grupa uspje&#353;no a&#382;urirana.',
	'Colorize_All' => 'Oboji sve korisnike',
	'Colorize_Selected' => 'Oboji odabrane',

	'CompanyWho' => 'Kompanija',
	'CompanyWhere' => 'Kako do nas',
	'CompanyServices' => 'Servisi',
	'CompanyProducts' => 'Proizvodi',

	'ShareThisTopic' => 'Share this topic',

	'Remove_cookies' => 'Isprazni kola&#269;i&#263;e s ovog sajta',
	'Cookies_deleted' => 'Svi kola&#269;i&#263;i su obrisani.Sada ste odlogirani.<br />Za finalizirat brisanje, morate ugasit pretra&#382;iva&#263;.',
	'Delete_cookies' => 'Obri&#353;i kola&#269;i&#263;e',
	'cookies_confirm' => 'Jeste li sigurni da &#382;elite obrisat sve kola&#269;i&#263;e za ovaj forum?<br /><br />Ovo &#263;e vas isto odlogirat.',

	'CustomIcy' => 'CustomIcy',

	'Drafts' => 'Drafts',
	'Drafts_Action' => 'Akcija',
	'Drafts_Save' => 'Spremi',
	'Drafts_Load' => 'Otvori',
	'Drafts_Saved' => 'Ovaj Draft je spremnjen',
	'Drafts_Loaded' => 'Draft otvoren',
	'Drafts_No_Drafts' => 'Nijedan drafts spremljen',
	'Drafts_Delete_Sel' => 'Obri&#353;i odabrano',
	'Drafts_Save_Question' => '<br /><br />Jesi li siguran da ovu poruku &#382;eli&#353; spremit kao draft?<br /><br />Imajte na umu da &#263;e jedino body poruke biti spremljen,ostale opcije ce biti ispra&#382;njene.',
	'Drafts_Delete_Question' => '<br /><br />Jeste li sigurni da &#382;elite obrisati odabrane drafts?',
	'Drafts_Type' => 'Draft izgled',
	'Drafts_Subject' => 'Draft naslov',
	'Drafts_NT' => 'Nova tema',
	'Drafts_NM' => 'Odgovori',
	'Drafts_NPM' => 'Privatna poruka',

	'CannotEditAdminsPosts' => 'Nemo&#382;ete ljenjat administratorov post',
	'Random_Number' => 'Slu&#269;ajni broj',

	'New_download' => 'Novi download je postavljen ili obnovljen.<br />Klikni %shere%s za pogledat.',
	'Dl_bug_tracker' => 'Bug Tracker',
	'Downloads_ADV' => 'Spremi ADV',

	'TopicUseful' => 'Jeli ova tema korisna?',
	'Article' => 'Artikal',
	'Comments' => 'Komentar',

	'Sitemap' => 'Site mapa',

	'Delete_My_Account' => 'Obri&#353;i &#268;lanstvo',
	'Delete_My_Account_Explain' => 'Ako &#382;elite obrisati &#269;lanstvo sa foruma, molimo po&#353;aljite zahtjev koriste&#269;i ovu formu.<br />Molimo Vas upi&#353;ite "Account Deletion" u naslovu i (ako &#382;elite) napi&#353;ite razlog u par rije&#263;i.',

	'KB_MODE_ON' => 'Uklju&#263;i KB mode',
	'KB_MODE_OFF' => 'Isklju&#263;i KB mode',

	'Go_To_Page_Number' => 'Idi na stranu',

	'Admin_Emails' => 'Asministratori mi mogu poslati informaciju na email',
	'Allow_PM_IN' => 'Dopusti korisnicima da mi &#353;alju privatne poruke',
	'Allow_PM_IN_Explain' => 'Administratori,moderatori i prijatelji &#263;e uvijek biti u mogu&#263;nosti da vam po&#353;alju PP',
	'Allow_PM_IN_SEND_ERROR' => 'Korisniku kojemu &#382;elite poslati PP ne&#263;e je primiti jer je odlu&#269;io/la da ne prima PP.',

//	'UCP_ZEBRA' => 'Friends &amp, Foes',
	'UCP_ZEBRA' => 'Prijatelji Mana&#273;ement',
	'UCP_ZEBRA_FOES' => 'Mana&#273;ement Foes',
	'UCP_ZEBRA_FRIENDS' => 'Mana&#273;ement prijatelja',

	'ADD_FOES' => 'Dodaj novi foes',
	'ADD_FOES_EXPLAIN' => 'Mo&#382;e&#353; unjeti vi&#353;e korisni&#269;kih imena,svaki u novu liniju.',
	'YOUR_FOES' => 'Va&#353; foes',
	'YOUR_FOES_EXPLAIN' => 'Za pobrisat korisni&#269;ko ime klikni na po&#353;alji.<br />Tip: Ako dr&#382;i&#353; CTRL mo&#382;e&#353; selektirat/deselektirat vi&#353;e imena.',
	'FOE_MESSAGE' => 'Poruka od foe',
	'FOES_EXPLAIN' => 'Foes are users which will be ignored by default. Posts by these users will not be fully visible. Personal messages from foes are still permitted. Please note that you cannot ignore moderators or administrators.',
	'FOES_UPDATED' => 'Your foes list has been updated successfully.',
	'FOES_UPDATE_ERROR' => 'Your foes list has NOT been updated.',
	'NO_FOES' => 'No foes currently defined',

	'ADD_FRIENDS' => 'Dodaj novog prijatelja',
	'ADD_FRIENDS_EXPLAIN' => 'Mo&#382;e&#353; unjeti vi&#353;e korisni&#269;kih imena,svaki u novu liniju.',
	'YOUR_FRIENDS' => 'Va&#353;i prijatelji',
	'YOUR_FRIENDS_EXPLAIN' => 'Za pobrisat korisni&#269;ko ime klikni na po&#353;alji.<br />Tip: Ako dr&#382;i&#353; CTRL mo&#382;e&#353; selektirat/deselektirat vi&#353;e imena.',
	'FRIEND_MESSAGE' => 'Poruka od prijatelja',
	'FRIENDS' => 'Prijatelji',
	'FRIENDS_EXPLAIN' => 'Friends enable you quick access to members you communicate with frequently. If the template has relevant support any posts made by a friend may be highlighted.',
	'FRIENDS_UPDATED' => 'Lista va&#353;ih prijatelja je uspje&#353;no osvje&#382;ena.',
	'FRIENDS_UPDATE_ERROR' => 'U listu va&#353;ih prijatelja NIJE ni&#353;ta novo dodano.',
	'FRIENDS_ONLINE' => 'Online',
	'FRIENDS_HIDDEN' => 'Sakriven',
	'FRIENDS_OFFLINE' => 'Offline',
	'NO_FRIENDS' => 'Nijedan prijatelj trenutno odabran',
	'NO_FRIENDS_OFFLINE' => 'Nijedan prijatelj offline',
	'NO_FRIENDS_ONLINE' => 'Nijedan prijatelj online',

	'Default' => 'Zadani',

	'Reserved_Author' => '[ SAKRIVEN ]',
	'Reserved_Topic' => '[ REZERVIRANA TEMA ]',
	'Reserved_Post' => '[ REZERVIRANI POST ]',

	'THANKS_RECEIVED' => 'Zahvaljeno puta',

	'RECENT_USER_ACTIVITY' => 'Posljednje aktivnosti korisnika',
	'USER_TOPICS_STARTED' => 'Zapo&#269;ete Teme',
	'USER_POSTS' => 'Napisano postova',
	'USER_TOPICS_VIEWS' => 'Pogledane Teme',
	'RECENT_USER_STARTED_TITLE' => 'zapo&#269;ete od %s',
	'RECENT_USER_STARTED_NAV' => 'Teme zapo&#269;ete od %s',
	'RECENT_USER_POSTS_TITLE' => 'od kojih %s napisane u',
	'RECENT_USER_POSTS_NAV' => 'Teme od kojih %s napisane u',
	'RECENT_USER_VIEWS_TITLE' => 'pogledane od %s',
	'RECENT_USER_VIEWS_NAV' => 'Teme pogledane od %s',

	'WARN_NO_BUMP' => 'You are the last poster in this topic: you cannot write new posts within 24 hours from your last post unless someone else answers in the meantime.',

	'LINK_THIS_TOPIC' => 'Po&#353;alji ovu temu',
	'LINK_URL' => 'URL',
	'LINK_BBCODE' => 'BBCode',
	'LINK_HTML' => 'HTML',

	'NEWS_POSTED' => 'Pretra&#382;i novosti',
	'TOPICS_POSTED' => 'Tra&#382;i zapo&#269;ete teme',
	'POSTS_POSTED' => 'Tra&#382;i sve korisnikove postove',

	'ACCOUNT_DELETION_REQUEST' => 'Korisnik %s je zatra&#382;io da mu se obri&#353;e &#269;lanstvo.',

	'SORT_TOPICS' => 'Poslo&#382;i Teme',
	'SORT_TOPICS_NEWEST' => 'Najnoviji',
	'SORT_TOPICS_OLDEST' => 'Najstariji',

	'EDIT_POST_DETAILS' => 'Edit Post Details',
	'CURRENT_POSTER' => 'Current Poster',
	'NEW_POSTER' => 'New Poster',
	'DETAILS_CHANGED' => '<b>Post details successfully changed.</b></span><br /><span class="postdetails">This window will be closed after 3 seconds.',

	'Redirect' => 'Preusmjeri',
	'Redirect_to' => 'If your browser does not support meta redirection please click %sHere%s to be redirected',

	'InProgress' => 'U tijeku',

	'HAPPY_BIRTHDAY' => 'Sretan Ro&#273;endan',

	'DOWNLOAD' => 'Spremi',
	'DOWNLOADED' => 'Download Zavr&#353;en',
	'FILESIZE' => 'Veli&#269;ina datoteke',
	'FILENAME' => 'Ime datoteke',
	'FILE_NOT_AUTH' => 'Nemate dozvolu za spremiti ovu datoteku',
	'SHOW_POSTS_FROM' => 'Prika&#382;i postove od',
	'SHOW_POSTS_TO' => 'do',

	'SEE_MORE_DETAILS' => 'Vi&#353;e detalja...',
	'UNKNOWN' => 'Nepoznato',
	'MASS_PM' => 'Masovna PP',
	'TEXT_FORMAT' => 'Format',
	'SENDER' => 'Po&#353;iljaoc',
	'PM_NOTIFICATION' => 'Hello,<br /><br />Dobili ste novu privatnu poruku na va&#353; ra&#269;un na "{SITENAME}".<br /><br />Va&#353;u novu poruku mo&#382;ete pogledati klikom na link:<br /><br />{U_INBOX}<br /><br />',

	'GSEARCH' => 'Tra&#382;i na Google',
	'GSEARCH_ENGINE' => 'Upotrijebi Google Tra&#382;ilicu',
	'SEARCH_WHAT' => 'Tra&#382;i &#353;to',
	'SEARCH_WHERE' => 'Tra&#382;i gdje',
	'SEARCH_THIS_FORUM' => 'Pretra&#382;i ovaj forum...',
	'SEARCH_THIS_TOPIC' => 'Pretra&#382;i ovu temu...',
	'VF_ALL_TOPICS' => 'Sve teme',

	'WHITE_LIST_MESSAGE' => 'Ovaj sajt zahtjeva potvrdu &#269;lanstva putem e-maila. Please check that this domains in the white-list of your antispam system or you could never receive the activation message.',
	'CLICK_RETURN_HOME' => 'Klikni %sOvdje%s za povratak na po&#269;etnu stranicu',

	'RATINGS' => 'Rejting',

	'ERROR_TABLE' => 'Could not query %s table',

	'SMILEYS' => 'Smajlovi',
	'SMILEYS_NO_CATEGORIES' => 'Nisu definirane kategorije',
	'SMILEYS_CATEGORY' => 'Kategorija',
	'SMILEYS_GALLERY' => 'Galerija smajlova',
	'SMILEYS_STANDARD' => 'Standardni smajlovi',

	'QUICK_LIST' => 'Cijela Lista',
	'NORMAL_LIST' => 'Normalna Lista',

	'RETURN_PAGE' => '%sPovratak na predhodnu stranu%s',
	'FILE_NOT_FOUND' => 'Datoteka nije prona&#273;ena',
	'FSOCK_DISABLED' => 'FSOCK Isklju&#269;en',

	'MANAGEMENT' => 'Mana&#273;ment',
	'SORT_ORDER' => 'Sortiraj po',
	'SORT_DIR' => 'Smjer sortiranja',

	'CONTACTS' => 'Kontakti',

	// Event Registration - BEGIN
	'Reg_Title' => 'Event Registracija',
	'Post_Registration' => 'Event Registracija',
	'Add_registration' => 'Dodaj Event Registraciju',
	'Add_reg_explain' => '&nbsp;&bull; Check <i>Activate</i> to show a registration form with this post. Uncheck to hide it.<br />&nbsp;&bull; Check <i>Reset</i> to delete all current registrations for this form.<br />&nbsp;&bull; Enter a number in <i>Slots</i> to limit registrations for an option. "0" or empty = unlimited.',
	'reg_activate' => 'Aktiviraj',
	'reg_reset' => 'Resetiraj',
	'Reg_Insert' => 'You registered for the event.',
	'Reg_Change' => 'Registration changed.',
	'Reg_Confirm' => 'Registration confirmed.',
	'Reg_Unregister' => 'Registration cancelled.',
	'Reg_Max_Registrations' => 'The maximum of registrations for this option is reached. No more registrations will be accepted.',
	'Reg_No_Slots_Left' => 'No slots left to register.',
	'Reg_One_Slot_Left' => 'One slot left to register.',
	'Reg_Slots_Left' => '%s slots left to register.',
	'Reg_Self_Unregister' => 'Unregister',
	'Reg_Own_Confirmation' => 'Confirmation',
	'Reg_Own_Confirmed' => 'confirmed',
	'Reg_Green_Option' => 'Green Option',
	'Reg_Blue_Option' => 'Blue Option',
	'Reg_Red_Option' => 'Red Option',
	'Reg_Value_Max_Registrations' => 'Slots',
	'Reg_Do' => 'Sign Up',
	'Reg_Maybe' => 'Not Sure',
	'Reg_Dont' => 'Not This Time',
	'Reg_Head_Username' => 'Korisnik:',
	'Reg_Head_Time' => 'Datum:',
	'Reg_for' => 'Pokreni registraciju za',
	'Reg_for_explain' => '[ Upiši 0 ili ostavi prazno za beskonaène registracije ]',
	'Reg_no_options_specified' => 'Morate odabrati bar jednu opciju za registriranje.',
	'Reg_event_date' => '<b>Event datum: </b>',
	// Event Registration - END

	'REPLY_PREFIX_OLD' => 'Re: ',
	'REPLY_PREFIX' => 'Re: ',

	'READ_ONLY_FORUM' => 'Žao nam je, ali trenutno forum je postavljen u <b>READ ONLY</b> naèin što znaèi da ne možete postavljati èak i ako imate pravo. Molimo pokušajte ponovno kasnije.',

	// Tickets Submission - BEGIN
	'TICKET_CAT' => 'Kategorija',
	// Tickets Submission - END

	'LIMIT_EDIT_TIME_WARN' => 'We are sorry, but you are only allowed to edit posts within the first <b>%d</b> minute(s) after submission.',
	'CLEAN_NAME' => 'Clean Name',
	'CLEAN_NAME_EXPLAIN' => 'Only alpha-numeric chars and dashes allowed',
	'TOPIC_TAGS' => 'Tags And Keywords',
	'TOPIC_TAGS_EXPLAIN' => 'Separate each tag using comma',
	'TOPIC_TAGS_CLOUDS' => 'Tags And Keywords Cloud',
	'TOPIC_TAGS_LIST' => 'Tags And Keywords List',
	'TAG_COUNT' => 'Counter',
	'TAG_TEXT' => 'Tag',
	'TAGS_TEXT' => 'Tags',
	'TAG_RESULTS' => 'Selected tag: <b>%s</b>',
	'TAGS_SEARCH' => 'Search a tag...',
	'TAGS_SEARCH_NO_RESULTS' => 'No tags found!',
	'TAGS_NO_TAGS' => 'No tags have been defined',
	'TAGS_NO_TAG' => 'Specified tag doesn\'t exist',

	'SQL_ERROR_OCCURRED' => 'An SQL error occurred while fetching this page. Please contact the Site Administrator if this problem persists.',

	'PLUGIN_DISABLED' => 'This plugin is currently disabled.',

	'AJAX_SHOUTBOX' => 'Chat',
	'AJAX_SHOUTBOX_PVT' => 'Private Chat',
	'AJAX_SHOUTBOX_PVT_LINK' => 'Direct chat with this user',
	'AJAX_SHOUTBOX_PVT_ALERT' => 'You have a chat request',

	// COMMON DB - BEGIN
	'SELECT_SORT_METHOD' => 'Sort by',
	'ORDER' => 'Sort method',
	'SUBMIT' => 'Submit',
	'DATE' => 'Date',
	'USERID' => 'User ID',
	'USERNAME' => 'Username',
	'EMAIL' => 'Email',
	'WEBSITE' => 'Website',
	'EDIT' => 'Edit',
	'DELETE' => 'Delete',
	'YES' => 'Yes',
	'NO' => 'No',

	'DB_ITEM_VIEW' => 'View Item',
	'DB_ITEM_UPDATED' => 'Item updated successfully',
	'DB_ITEM_ADD' => 'Add Item',
	'DB_ITEM_ADDED' => 'Item added successfully',
	'DB_ITEM_REMOVED' => 'Item removed successfully',
	'DB_ITEM_NO_ITEMS' => 'No Items',
	'DB_ITEM_CLICK_VIEW_ITEM' => 'Click %sHere%s to view added data',
	'DB_ITEM_CLICK_RETURN_ITEMS' => 'Click %sHere%s to return to list page',
	// COMMON DB - END

	'LOGIN_ATTEMPTS_EXCEEDED' => 'The maximum number of %s login attempts has been exceeded. You are not allowed to login for the next %s minutes.',
	'LOGIN_CONFIRM_EXPLAIN' => 'To prevent brute forcing accounts the board requires you to enter a confirmation code after a maximum amount of failed logins. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sAdministrator%s.',
	'LOGIN_ERROR_ATTEMPTS' => 'You exceeded the maximum allowed number of login attempts. In addition to your username and password you now also have to enter the confirm code from the image you see below.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE' => 'You have not been authenticated by Apache.',
	'LOGIN_ERROR_PASSWORD' => 'You have specified an incorrect password. Please check your password and try again. If you continue to have problems please contact the %sAdministrator%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT' => 'It was not possible to convert your password when updating this website\'s software. Please %srequest a new password%s. If you continue to have problems please contact the %sAdministrator%s.',
	'LOGIN_ERROR_USERNAME' => 'You have specified an incorrect username. Please check your username and try again. If you continue to have problems please contact the %sAdministrator%s.',
	'NO_PASSWORD_SUPPLIED' => 'You cannot login without a password.',
	'ACTIVE_ERROR' => 'The specified username is currently inactive. If you have problems activating your account, please contact the %sAdministrator%s.',

	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',
	'GB' => 'GB',

	'NO_EVENTS' => 'No planned events',
	'EVENT_START_DATE' => 'Start Date',
	'EVENT_START_TIME' => 'Start Time',
	'EVENT_END_DATE' => 'End Date',
	'EVENT_END_TIME' => 'End Time',
	'EVENT_TITLE' => 'Event',
	'EVENT_FORUM' => 'Category',

	'MAX_OPTIONS_SELECT' => 'You may select up to <strong>%d</strong> options',
	'MAX_OPTION_SELECT' => 'You may select <strong>1</strong> option',
	'NO_POLLS' => 'No Polls',
	'NO_VOTE_OPTION' => 'You must specify an option when voting.',
	'NO_VOTES' => 'No votes',
	'POLL_ENDED_AT' => 'Poll ended at %s',
	'POLL_MAX_OPTIONS' => 'Max options',
	'POLL_MAX_OPTIONS_EXPLAIN' => 'Maximum number of options selectable by users',
	'POLL_NO_GUESTS' => 'Sorry, but Guests are not allowed to vote',
	'POLL_RUN_TILL' => 'Poll runs until %s',
	'POLL_VOTE_CHANGE' => 'Allow vote change',
	'POLL_VOTED_OPTION' => 'You voted for this option',
	'TOO_MANY_VOTE_OPTIONS' => 'You have tried to vote for too many options.',
	'VIEW_POLL' => 'View Poll',
	'VOTE_SUBMITTED' => 'Your vote has been cast.',
	'VOTE_CONVERTED' => 'Changing votes is not supported for converted polls.',

	'FORM_INVALID' => 'The submitted form was invalid. Try submitting again.',

	'NO_USERS_FOUND' => 'No users found',
	'POST_IP' => 'IP Address',
	'FIND_USERNAME' => 'Find a member',
	'FIND_USERNAME_HIDE' => 'Hide &quot;Find a member&quot; form',
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
	'LIKE' => 'Like',
	'UNLIKE' => 'Unlike',
	'LIKE_POST' => 'Like this post',
	'UNLIKE_POST' => 'Unlike this post',
	'LIKE_TIME' => 'Date',
	'LIKE_RECAP' => 'Users who like this post',
	'LIKE_COUNTER_YOU' => 'You like this post',
	'LIKE_COUNTER_YOU_OTHERS_SINGLE' => 'You and %s user like this post',
	'LIKE_COUNTER_YOU_OTHERS' => 'You and %s users like this post',
	'LIKE_COUNTER_OTHERS' => '%s users like this post',
	'LIKE_COUNTER_OTHERS_SINGLE' => '%s user likes this post',

	'FRIENDSHIP_STATUS' => 'Friendship status',
	'FRIEND_ADD' => 'Add as a friend',
	'FRIEND_REMOVE' => 'Remove as a friend',
	'FOE_ADD' => 'Add as a foe',
	'FOE_REMOVE' => 'Remove as a foe',

	'SOCIAL_NETWORKS' => 'Social Networks',
	'USER_FIRST_NAME' => 'First Name',
	'USER_LAST_NAME' => 'Last Name',
	'FACEBOOK' => 'Facebook',
	'TWITTER' => 'Twitter',

	'INACTIVE_USER' => 'Inactive User',
	'SEARCH_MIN_CHARS' => 'You need to input at least %s chars to perform the search.',

	'EXTRA_STATS_SHOW' => 'Show Extra Statistics',
	'EXTRA_STATS_HIDE' => 'Hide Extra Statistics',
	'RESERVED' => 'Reserved',

	'VIEW_TOPICS_DAYS' => 'Display topics from previous days',
	'VIEW_TOPICS_DIR' => 'Display topic order direction',
	'VIEW_TOPICS_KEY' => 'Display topics ordering by',
	'VIEW_POSTS_DAYS' => 'Display posts from previous days',
	'VIEW_POSTS_DIR' => 'Display post order direction',
	'VIEW_POSTS_KEY' => 'Display posts ordering by',

	'AUTHOR' => 'Author',
	'POST_TIME' => 'Time',
	'REPLIES' => 'Replies',
	'SUBJECT' => 'Subject',
	'VIEWS' => 'Views',

	'INVALID' => 'Invalid data.',
	'TOO_LARGE' => 'The value you entered is too large.',
	'TOO_LONG' => 'The value you entered is too long.',
	'TOO_SHORT' => 'The value you entered is too short.',
	'TOO_SMALL' => 'The value you entered is too small.',
	'WRONG_DATA' => 'Invalid data.',

	'ATTACHMENTS' => 'Attachments',
	'ERROR_NO_ATTACHMENT' => 'The file you are trying to download does not exist.',
	'NO_FORUM' => 'The forum you selected does not exist.',
	'NO_TOPIC' => 'The topic or post you requested does not exist.',
	'NO_USER' => 'Sorry, but that user does not exist.',

	'AJAX_SEARCH' => 'Search...',

	'FLICKR' => 'Flickr',
	'GOOGLEPLUS' => 'Google Plus',
	'LINKEDIN' => 'LinkedIn',
	'YOUTUBE' => 'YouTube',

	'MOBILE_STYLE_ENABLE' => 'Enable Mobile Friendly Style',
	'MOBILE_STYLE_DISABLE' => 'Disable Mobile Friendly Style',

	'INVALID_SESSION' => 'Invalid session. If the problem persist, please contact an administrator.',

	'BACK_TO_TOP' => 'Top',
	'BACK_TO_PREV' => 'Back to previous page',

	'CMS_EDIT_PARENT_BLOCK' => 'Edit Parent Block',

	'UPI2DB_DISABLED' => 'UPI2DB Disabled',
	'UPI2DB_LINK_U' => 'UPI2DB Unread',
	'UPI2DB_LINK_M' => 'UPI2DB Marked',
	'UPI2DB_LINK_P' => 'UPI2DB Permanent Read',
	'UPI2DB_LINK_FULL' => 'UPI2DB Full Info',
	'NEW_POSTS_LINK' => 'New Posts',
	'LOGIN_LOGOUT_LINK' => 'Login/Logout',
	'MENU_EMPTY_LINK' => 'Empty Link',

	'IP_BLACKLISTED' => 'Your IP %s has been blocked because it is blacklisted. For details please see <a href="%s">%s</a>.',

	'PRINTABLE_VERSION' => 'Printable Version',
	'CHANGE_FONT_SIZE' => 'Change Font Size',

	'FULL_EDITOR' => 'Switch to full Editor',

	)
);

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

$lang['Prune_commands'] = array();
// here you can make more entries if needed
$lang['Prune_commands'][0] = 'Izbaci korisnike koji ne pi&#353;u';
$lang['Prune_explain'][0] = 'Koji nikad nisu pisali, <b>izuzev</b> novih korisnika u proteklih %d dana';
$lang['Prune_commands'][1] = 'Izbaci neaktivne korisnike';
$lang['Prune_explain'][1] = 'Koji nikad nisu posjetili, <b>izuzev</b> novih korisnika u proteklih %d dana';
$lang['Prune_commands'][2] = 'Izbaci neaktivne korisnike';
$lang['Prune_explain'][2] = 'Koji se nikad nisu aktivirali, <b>izuzev</b> novih korisnika u proteklih %d dana';
$lang['Prune_commands'][3] = 'Izbaci korisnike koji sz davno bili';
$lang['Prune_explain'][3] = 'Koji nisu posjetili 60 dana, <b>izuzev</b> novih korisnika u protekliht %d dana';
$lang['Prune_commands'][4] = 'Izbaci korisnike koji ne pi&#353;u &#269;esto';
$lang['Prune_explain'][4] = 'Koji imaju manje od 1 post u 10 dana odkad su registrirani, <b>izuzev</b> novih korisnika u protekliht %d dana';
$lang['Prune_commands'][5] = 'Izbaci korisnike koji ne pi&#353;u i ne dolaze';
$lang['Prune_explain'][5] = 'Onaj tko nije nikad pisao i dolazio , <b>izuzev</b> novih korisnika u proteklih %d dana';

// Timezones - BEGIN
$lang['All_times'] = 'Sve vremenske zone su %s'; // eg. All times are GMT - 12 Hours (times from next block)

// Time zones short
$lang['tz'] = array(
	'-12' => 'UTC - 12 Sati',
	'-11' => 'UTC - 11 Sati',
	'-10' => 'UTC - 10 Sati',
	'-9.5' => 'UTC - 9:30 Sati',
	'-9' => 'UTC - 9 Sati',
	'-8' => 'UTC - 8 Sati',
	'-7' => 'UTC - 7 Sati',
	'-6' => 'UTC - 6 Sati',
	'-5' => 'UTC - 5 Sati',
	'-4.5' => 'UTC - 4:30 Sati',
	'-4' => 'UTC - 4 Sati',
	'-3.5' => 'UTC - 3:30 Sati',
	'-3' => 'UTC - 3 Sati',
	'-2' => 'UTC - 2 Sati',
	'-1' => 'UTC - 1 Hour',
	'0' => 'UTC',
	'1' => 'UTC + 1 Sat',
	'2' => 'UTC + 2 Sata',
	'3' => 'UTC + 3 Sata',
	'3.5' => 'UTC + 3:30 Sata',
	'4' => 'UTC + 4 Sata',
	'4.5' => 'UTC + 4:30 Sati',
	'5' => 'UTC + 5 Sati',
	'5.5' => 'UTC + 5:30 Sati',
	'5.75' => 'UTC + 5:45 Sati',
	'6' => 'UTC + 6 Sati',
	'6.5' => 'UTC + 6:30 Sati',
	'7' => 'UTC + 7 Sati',
	'8' => 'UTC + 8 Sati',
	'8.75' => 'UTC + 8:45 Sati',
	'9' => 'UTC + 9 Sati',
	'9.5' => 'UTC + 9:30 Sati',
	'10' => 'UTC + 10 Sati',
	'10.5' => 'UTC + 10:30 Sati',
	'11' => 'UTC + 11 Sati',
	'11.5' => 'UTC + 11:30 Sati',
	'12' => 'UTC + 12 Sati',
	'12.75' => 'UTC + 12:45 Sati',
	'13' => 'UTC + 13 Sati',
	'14' => 'UTC + 14 Sati',
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
	'1' => '[UTC + 1] Central European Time, West African Time, Rijeka',
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
	'WEEK_DAY_SUNDAY' => 'Nedjelja',
	'WEEK_DAY_MONDAY' => 'Ponedjeljak',
	'WEEK_DAY_TUESDAY' => 'Utorak',
	'WEEK_DAY_WEDNESDAY' => 'Srijeda',
	'WEEK_DAY_THURSDAY' => '&#268;etvrtak',
	'WEEK_DAY_FRIDAY' => 'Petak',
	'WEEK_DAY_SATURDAY' => 'Subota',

	'TIME_YEAR' => 'Godina',
	'TIME_MONTH' => 'Mjesec',
	'TIME_DAY' => 'Dan',
	'TIME_HOUR' => 'Sat',
	'TIME_MINUTE' => 'Minut',
	'TIME_SECOND' => 'Sekunda',

	// The value is only an example and will get replaced by the current time on view
	'dateformats' => array(
		'd M Y, H:i' => '01 Sij 2007, 13:37',
		'd M Y H:i' => '01 Sij 2007 13:37',
		'M jS, \'y, H:i' => 'Sij 1., \'07, 13:37',
		'D M d, Y g:i a' => 'Pon Sij 01, 2007 1:37 pm',
		'F jS, Y, g:i a' => 'Sije&#269;anj 1st, 2007, 1:37 pm',
		'|d M Y|, H:i' => 'Danas, 13:37 / 01 Sij 2007, 13:37',
		'|F jS, Y|, g:i a' => 'Danas, 1:37 pm / Sije&#269;anj 1st, 2007, 1:37 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat' => 'D M d, Y g:i a', // Mon Jan 01, 2007 1:37 pm

	)
);

$lang['datetime'] = array(
	'TODAY' => 'Today',
	'TOMORROW' => 'Sutra',
	'YESTERDAY' => 'Ju&#269;er',
	'AGO' => array(
		0 => 'manje od jedne minute',
		1 => '%d minuta prije',
		2 => '%d minuta prije',
		60=> 'Prije 1 sat',
	),

	'Sunday' => 'Nedjelja',
	'Monday' => 'Ponedjeljak',
	'Tuesday' => 'Utorak',
	'Wednesday' => 'Srijeda',
	'Thursday' => '&#268;etvrtak',
	'Friday' => 'Petak',
	'Saturday' => 'Subota',

	'Sun' => 'Ned',
	'Mon' => 'Pon',
	'Tue' => 'Uto',
	'Wed' => 'Sri',
	'Thu' => '&#269;et',
	'Fri' => 'Pet',
	'Sat' => 'Sub',

	'SUN_S' => 'Ne',
	'MON_S' => 'Po',
	'TUE_S' => 'Ut',
	'WED_S' => 'Sr',
	'THU_S' => '&#269;e',
	'FRI_S' => 'Pe',
	'SAT_S' => 'Su',

	'January' => 'Sije&#269;anj',
	'February' => 'Velja&#269;a',
	'March' => 'O&#382;ujak',
	'April' => 'Travanj',
	'May' => 'Svibanj',
	'June' => 'Lipanj',
	'July' => 'Srpanj',
	'August' => 'Kolovoz',
	'September' => 'Rujan',
	'October' => 'Listopad',
	'November' => 'Studeni',
	'December' => 'Prosinac',

	'JAN' => 'Jan',
	'FEB' => 'Feb',
	'MAR' => 'Mar',
	'APR' => 'Apr',
	'MAY' => 'May',
	'JUN' => 'Jun',
	'JUL' => 'Jul',
	'AUG' => 'Aug',
	'SEP' => 'Sep',
	'OCT' => 'Oct',
	'NOV' => 'Nov',
	'DEC' => 'Dec',

	'Jan_short' => 'Jan',
	'Feb_short' => 'Feb',
	'Mar_short' => 'Mar',
	'Apr_short' => 'Apr',
	'May_short' => 'May',
	'Jun_short' => 'Jun',
	'Jul_short' => 'Jul',
	'Aug_short' => 'Aug',
	'Sep_short' => 'Sep',
	'Oct_short' => 'Oct',
	'Nov_short' => 'Nov',
	'Dec_short' => 'Dec',
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