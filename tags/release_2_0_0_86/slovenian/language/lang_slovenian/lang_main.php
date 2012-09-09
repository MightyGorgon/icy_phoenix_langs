<?php
/**
*
* @package Intertrack
* @version $Id$
* @copyright (c) 2008 Intertrack
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Intertrack is based on phpBB
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
	'Home' => 'Domov',
	'Forum' => 'Forum',
	'Category' => 'Kategorija',
	'Topic' => 'Tema',
	'Topics' => 'Teme',
	'Replies' => 'Odgovori',
	'Views' => 'Ogledov',
	'Post' => 'Objava',
	'Posts' => 'Objave',
	'Posted' => 'Objavljeno',
	'Username' => 'Uporabnisko ime',
	'Password' => 'Geslo',
	'Email' => 'Email',
	'Poster' => 'Uporabnik',
	'Author' => 'Avtor',
	'Time' => 'Cas',
	'Hours' => 'Ura',
	'Message' => 'Sporocilo',

	'1_Day' => '1 Dan',
	'7_Days' => '7 Dni',
	'2_Weeks' => '2 Tedna',
	'1_Month' => '1 Mesec',
	'3_Months' => '3 Meseci',
	'6_Months' => '6 Mesecev',
	'1_Year' => '1 Leto',

	'Go' => 'Pojdi',
	'Jump_to' => 'Pojdi na',
	'Submit' => 'Poslji',
	'Reset' => 'Resetiraj',
	'Cancel' => 'Preklici',
	'Preview' => 'Predogled',
	'Confirm' => 'Potrdi',
	'Spellcheck' => 'Crkovalnik',
	'Yes' => 'Da',
	'No' => 'Ne',
	'Enabled' => 'Omogoceno',
	'Disabled' => 'Onemogoceno',
	'Error' => 'Napaka',

	'GO' => 'Pojdi',
	'JUMP_TO' => 'Pojdi na',
	'SUBMIT' => 'Poslji',
	'RESET' => 'Resetiraj',
	'CANCEL' => 'Preklici',
	'PREVIEW' => 'Predogled',
	'CONFIRM' => 'Potrdi',
	'YES' => 'Da',
	'NO' => 'Ne',
	'ENABLED' => 'Omogoceno',
	'DISBALED' => 'Onemogoceno',
	'ERROR' => 'Napaka',

	'Next' => 'Naprej',
	'Previous' => 'Nazaj',
	'Goto_page' => 'Pojdi na stran',
	'Joined' => 'Vclanjen',
	'IP_Address' => 'Naslov IP',

	'Select_forum' => 'Izabri forum',
	'View_latest_post' => 'Preglej zadnje objave',
	'View_newest_post' => 'Preglej nove objave',
	'Page_of' => 'Stran <b>%d</b> od <b>%d</b>', // Replaces with: Page 1 of 2 for example

	'ICQ' => 'Kontakt ICQ',
	'AIM' => 'Naslov AIM',
	'MSNM' => 'MSN Live',
	'YIM' => 'Yahoo Messenger',
	'SKYPE' => 'Skype',
	'Forum_Index' => 'Forum',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Zacni novo temo',
	'Reply_to_topic' => 'Odgovori na temo',
	'Reply_with_quote' => 'Odgovori s citatom',

	'Click_return_topic' => 'Klikni %stukaj%s za vrnitev na temo', // %s's here are for uris, do not remove!
	'Click_return_login' => 'Klikni %stukaj%s za vrnitev',
	'Click_return_forum' => 'Klikni %stukaj%s za vrnitev na forum',
	'Click_view_message' => 'Klikni %stukaj%s za pregledovanje svojega sporocila',
	'Click_return_modcp' => 'Klikni %stukaj%s za vrnitev na nadzorno plosco moderatorjev',
	'Click_return_group' => 'Klikni %stukaj%s za vrnitev na informacijo o skupini',

	'Admin_panel' => 'ACP',

	'Board_disable' => 'Forum je trenutno nedosegljiv. Prosimo, poskusite kasneje',

// Global Header strings
	'Registered_users' => 'Registrirani uporabniki:',
	'Browsing_forum' => 'Uporabniki trenutno na tem forumu:',
	'Online_users_zero_total' => 'Skupno je bilo prijavljenih <b>0</b> uporabnikov: ',
	'Online_users_total' => 'Skupno je bilo prijavljenih <b>%d</b> uporabnikov: ',
	'Online_user_total' => 'Trenutno je prijavljenih <b>%d</b> uporabnikov: ',
	'AC_Online_users_zero_total' => 'Trenutno je v klepetu <b>0</b> uporabnikov: ',
	'AC_Online_users_total' => 'Trenutno je v klepetu <b>%d</b> uporabnikov: ',
	'AC_Online_user_total' => 'Trenutno je v klepetu <b>1</b> uporabnikov: ',
	'Reg_users_zero_total' => '0 Registriranih, ',
	'Reg_users_total' => '%d Registriranih, ',
	'Reg_user_total' => '%d Registriranih, ',
	'Hidden_users_zero_total' => '0 Skritih i ',
	'Hidden_user_total' => '%d Skritih i ',
	'Hidden_users_total' => '%d Skritih i ',
	'Guest_users_zero_total' => '0 Obiskovalcev',
	'Guest_users_total' => '%d Obiskovalcev',
	'Guest_user_total' => '%d Obiskovalcev',
	'Record_online_users' => 'Najvec prisotnih uporabnikov na forumu je bilo <b>%s</b> %s', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sAdministrator%i',
	'Mod_online_color' => '%sModerator%i',

	'You_last_visit' => 'Vas zadnji obisk %s', // %s replaced by date/time
	'Current_time' => 'Datum/Ura %s', // %s replaced by time

	'Search_new' => 'Preisci nove objave',
	'Search_your_posts' => 'Poglej svoje prispevke',
	'Search_unanswered' => 'Poglej neodgovorjena sporocila',

	'Register' => 'Registracija',
	'Profile' => 'Profil',
	'Edit_profile' => 'Uredi svoj Profil',
	'Search' => 'Isci',
	'Memberlist' => 'S-Uporabniki',
	'FAQ' => 'Pogosta vprasanja',
	'KB_title' => 'Baza znanja',
	'BBCode_guide' => 'Navodila za BBCode',
	'Usergroups' => 'Uporabniske skupine',
	'Last_Post' => 'Zadnja objava',
	'Moderator' => 'Moderator',
	'Moderators' => 'Moderatorji',

// Stats block text
	'Posted_articles_zero_total' => 'Uporabniki so objavili <b>0</b> objav', // Number of posts
	'Posted_articles_total' => 'Uporabniki so objavili <b>%d</b> objav', // Number of posts
	'Posted_article_total' => 'Uporabniki so objavili <b>%d</b> objav', // Number of posts
	'Registered_users_zero_total' => 'Imamo <b>0</b> registriranih uporabnikov', // # registered users
	'Registered_users_total' => 'Imamo <b>%d</b> registriranih uporabnikov', // # registered users
	'Registered_user_total' => 'Imamo <b>%d</b> registriranih uporabnikov', // # registered users
	'Newest_user' => 'Najnovejsi registrirani uporabnik je <b>%s%s%s</b>', // a href, username, /a

	'No_new_posts_last_visit' => 'Od vasega zadnjega obiska ni bilo novih objav',

	'No_new_posts_global_announcement' => 'Ni novih [ Splosno obvestilo ]',
	'New_posts_global_announcement' => 'Novo [ Splosno obvestilo ]',
	'No_new_posts_announcement' => 'Ni novih [ Obvestilo ]',
	'New_posts_announcement' => 'Novo [ Obvestilo ]',
	'No_new_posts_sticky' => 'Ni novih [ Lepljiva tema ]',
	'New_posts_sticky' => 'Novi [ Lepljiva tema ]',
	'No_new_posts_locked' => 'Ni novih [Zaklenjena tema ]',
	'New_posts_locked' => 'Nova [ Zaklenjena tema ]',
	'No_new_posts' => 'Ni novih',
	'New_posts' => 'Nove',
	'New_post' => 'Nova',
	'No_new_posts_hot' => 'Ni novih [ Priljubljene ]',
	'New_posts_hot' => 'Nove [ Priljubljene ]',

	'Forum_no_new_posts' => 'Ni novih [Forum]',
	'Forum_new_posts' => 'Nov [Forum]',
	'Cat_no_new_posts' => 'Ni novih [Kategorija]',
	'Cat_new_posts' => 'Nova [Kategorija]',
	'Forum_is_locked' => 'Forum je zaklenjen',

// Login
	'Enter_password' => 'Vnesite uporabnisko ime in geslo.',
	'Login' => 'Prijava',
	'Logout' => 'Odjava',
	'Forgotten_password' => 'Pozabil sem geslo',
	'AUTOLOGIN' => 'Samodejna prijava ob vsakem obisku',
	'Error_login' => 'Vnesli ste napacno uporabnisko ime ali geslo.',

// Index page
	'No_Posts' => 'Ni objav',
	'No_forums' => 'Ta stran ne vsebuje nobenega foruma',

	'Private_Message' => 'Zasebno sporocilo',
	'Private_Messages' => 'Zasebna sporocila',
	'Who_is_Online' => 'Trenutno na forumu',

	'Mark_all_forums' => 'Oznaci vse kot prebrano',
	'Forums_marked_read' => 'Forumi so oznaceni kot prebrani ',

// Viewforum
	'View_forum' => 'Poglej forum',

	'Forum_not_exist' => 'Forum ne obstaja.',
	'Reached_on_error' => 'Prikazana stran vsebuje napako.',

	'Display_topics' => 'Prikaži teme od zadnjic',
	'All_Topics' => 'Vse teme',

	'Topic_News_nb' => 'Novosti',
	'Topic_global_announcement_nb' => 'Splosno obvestilo',
	'Topic_Announcement_nb' => 'Obvestilo',
	'Topic_Sticky_nb' => 'Lepljiva tema',
	'Topic_Moved_nb' => 'Premaknjeno',
	'Topic_Poll_nb' => 'Glasovanje',
	'Topic_Event_nb' => 'Dogodki',
	'Topic_Announcement' => '<b>Obvestilo:</b>',
	'Topic_Sticky' => '<b>Lepljiva tema:</b>',
	'Topic_Moved' => '<b>Premaknjeno:</b>',
	'Topic_Poll' => '<b>Glasovanje:</b>',
	'Topic_Event' => '<b>Dogodki:</b>',
	'Topic_global_announcement' => '<b>Splosno obvestilo:</b>',
	'Post_global_announcement' => 'Splosno obvestilo',


	'Mark_all_topics' => 'Oznaci vse teme kot prebrane',
	'Topics_marked_read' => 'Vse teme so oznacene kot prebrane',

/*
	'Rules_post_can' => ' <b>Lahko</b> ustvarjate nove teme v tem forumu',
	'Rules_post_cannot' => ' <b>Ne morete</b> ustvarjati novih tem na tem forumu',
	'Rules_reply_can' => ' <b>Lahko</b> odgovarjate na teme v tem forumu',
	'Rules_reply_can_own' => 'Ne <b>morete</b> odgovarjati na vase teme v tem forumu',
	'Rules_reply_cannot' => ' <b>Lahko</b> odgovarjate na teme v tem forumu',
	'Rules_edit_can' => ' <b>Lahko</b> urejate teme v tem forumu',
	'Rules_edit_cannot' => ' <b>Ne morete</b> urejati tem v tem forumu',
	'Rules_delete_can' => ' <b>Lahko</b> brisete teme v tem forumu',
	'Rules_delete_cannot' => ' <b>Ne morete</b> brisati tem v tem forumu',
	'Rules_vote_can' => ' <b>Lahko</b> glasujete v tem forumu',
	'Rules_vote_cannot' => ' <b>Ne morete</b> glasovati v tem forumu',
*/
	'Rules_post_can' => ' <b>Lahko</b> ustvarjate nove teme',
	'Rules_post_cannot' => ' <b>Ne morete</b> ustvarjati novih tem',
	'Rules_reply_can' => ' <b>Lahko</b> odgovarjate na teme',
	'Rules_reply_can_own' => ' <b>Lahko</b> odgovarjate na vase teme',
	'Rules_reply_cannot' => ' <b>Ne morete</b> odgovarjati na teme',
	'Rules_edit_can' => ' <b>Lahko</b> urejate teme',
	'Rules_edit_cannot' => ' <b>Ne morete</b> urejati tem',
	'Rules_delete_can' => ' <b>Lahko</b> brisete teme',
	'Rules_delete_cannot' => ' <b>Ne morete</b> brisati tem',
	'Rules_vote_can' => ' <b>Lahko</b> glasujete',
	'Rules_vote_cannot' => ' <b>Ne morete</b> glasovati',
	'Rules_moderate' => ' <b>Lahko</b> moderirate ta forum%s', // %s replaced by a href links, do not remove!

// 'No_topics_post_one' => 'V tem forumu ni tem.<br />Klikni na <b>Nova tema</b> na tej strani za novo objavo.',
	'No_topics_post_one' => 'V tem forumu ni tem.<br />Klikni na <b>Nova tema</b> na tej strani za novo objavo.',

// Viewtopic
	'View_topic' => 'Preglej temo',

	'Guest' => 'Gosti',
	'Post_subject' => 'Naslov',
	'View_next_topic' => 'Preglej naslednjo temo',
	'View_previous_topic' => 'Preglej prejsnjo temo',
	'Submit_vote' => 'Potrdi glasovanje',
	'View_results' => 'Preglej rezultate',

	'No_newer_topics' => 'V tem forumu ni novih tem',
	'No_older_topics' => 'V tem forumu ni starejsih tem',
	'Topic_post_not_exist' => 'Tema, ki jo iscete, ne obstaja',
	'No_posts_topic' => 'V tej temi ni objav',

	'Display_posts' => 'Prikaži objave',
	'All_Posts' => 'Vse objave',
	'Newest_First' => 'Najprej najnovejse',
	'Oldest_First' => 'Najprej najstarejse',

	'Back_to_top' => 'Pojdi na vrh',
	'Back_to_bottom' => 'Pojdi na dno',

	'Read_profile' => 'Preglej uporabnikov profil',
	'Send_email' => 'Poslji e-mail uporabniku',
	'Visit_website' => 'Obisci uporabnikovo spletno stran',
	'ICQ_status' => 'Status ICQ',
	'Edit_delete_post' => 'Uredi/Izbrisi to objavo',
	'View_IP' => 'Preglej naslov IP uporabnika',
	'Delete_post' => 'Izbrisi to objavo',

	'wrote' => 'wrote', // proceeds the username and is followed by the quoted text
	'Quote' => 'Quote', // comes before bbcode quote output.
	'Code' => 'Code', // comes before bbcode code output.

	'Edited_time_total' => 'Nazadnje urejal/a %s %s; skupaj popravljeno %d krat', // Last edited by me on 12 Oct 2001, edited 1 time in total
	'Edited_times_total' => 'Nazadnje urejal/a %s %s; skupaj popravljeno %d krat', // Last edited by me on 12 Oct 2001, edited 2 times in total

	'Lock_topic' => 'Zakleni to temo',
	'Unlock_topic' => 'Odkleni to temo',
	'Move_topic' => 'Premakni to temo',
	'Delete_topic' => 'Izbrisi to temo',
	'Split_topic' => 'Razdeli to temo',

	'Stop_watching_topic' => 'Nehaj spremljati to temo',
	'Start_watching_topic' => 'Zacni spremljati to temo',
	'No_longer_watching' => 'Te teme ne spremljate vec',
	'You_are_watching' => 'Zdaj spremljate to temo',

	'Total_votes' => 'Skupno stevilo glasov',

// Posting/Replying (Not private messaging!)
	'Message_body' => 'Besedilo',
	'Topic_review' => 'Pregled teme',

	'No_post_mode' => 'Niste izbrali nacina objave', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

	'Post_a_new_topic' => 'Ustvari novo temo',
	'Post_a_reply' => 'Odgovori na temo',
	'Post_topic_as' => 'Ustvari temo kot',
	'Edit_Post' => 'Uredi objavo',
	'Options' => 'Možnosti',

	'PM_Read' => 'Prebrana ZS',
	'PM_Unread' => 'Neprebrana ZS',
	'PM_Replied' => 'Odgovorjena ZS',

	'Post_Announcement' => 'Obvestilo',
	'New_post_Announcement' => 'Novo obvestilo',
	'Post_Sticky' => 'Lepljiva tema',
	'New_post_Sticky' => 'Nova lepljiva tema',
	'Post_Normal' => 'Navadno',

	'Confirm_delete' => 'Si preprican, da želis brisati to objavo?',
	'Confirm_delete_poll' => 'Si preprican, da želis brisati to anketo?',

	'Flood_Error' => 'Ne morete ustvarjati nove objave takoj po prejsnji. Poskusite znova kasneje.',
	'Empty_subject' => 'Pri ustvarjanju nove teme morate izbrati naslov teme.',
	'Empty_message' => 'V sporocilo morate vnesti besedilo.',
	'Forum_locked' => 'Ta forum je zaklenjen: ne morete pisati, odgovarjati ali urejati te objave.',
	'Topic_locked' => 'Ta tema je zaklenjena: ne morete urejati ali odgovarati na to temo.',
	'No_post_id' => 'Izberite objavo, ki bi jo radi urejali',
	'No_topic_id' => 'Izberite temo, na katero odgovarjate',
	'No_valid_mode' => 'Lahko samo odgovarjate/urejate/citirate objave.<br />Vrnite se in poskusite znova.',
	'No_such_post' => 'Ta tema ne obstaja.<br />Vrnite se in poskusite znova.',
	'Edit_own_posts' => 'Urejate lahko samo svoje objave.',
	'Delete_own_posts' => 'Brisete lahko samo svoje objave.',
	'Cannot_delete_replied' => 'Ne morete brisati objav, ki so bile odgovorjene.',
	'Cannot_delete_poll' => 'Ne morete brisati aktivne ankete.',
	'Empty_poll_title' => 'Dolocite naslov ankete.',
	'To_few_poll_options' => 'Za anketo morate vnesti vsaj dve možnosti za izbiro.',
	'To_many_poll_options' => 'V anketo ste vnesli prevec možnosti za za izbiro.',
	'Post_has_no_poll' => 'Ta objava ne vsebuje ankete.',
	'Already_voted' => 'V tej anketi ste že sodelovali.',
	'No_vote_option' => 'Morte oznaciti izbiro, za katero glasuejte.',

	'Add_poll' => 'Dodaj anketo',
	'Add_poll_explain' => 'Ce v to temo ne želite dodajati ankete, pustite to polje prazno.',
	'Poll_question' => 'Anketno vprasanje',
	'Poll_option' => 'Možnosti na izbiro',
	'Add_option' => 'Dodaj možnost za izbiro',
	'Update' => 'Posodobi',
	'Delete' => 'Izbrisi',
	'Poll_for' => 'Trajanje ankete',
	'Days' => 'Dni', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Vpisi 0 ali pusti prazno za neomejen cas ankete  ]',
	'Delete_poll' => 'Izbrisi anketo',

	'Disable_HTML_post' => 'Izklopi HTML v tej objavi',
	'Disable_ACRO_AUTO_post' => 'Izklopi Acronyms in Autolinks v tej objavi',
	'Disable_BBCode_post' => 'Izklopi BBCode v tej objavi',
	'Disable_Smilies_post' => 'Izklopi Smeske v tej objavi',

	'HTML_is_ON' => 'HTML je <u>ON</u>',
	'HTML_is_OFF' => 'HTML je <u>OFF</u>',
	'BBCode_is_ON' => '%sBBCode%s je <u>ON</u>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => '%sBBCode%s je <u>OFF</u>',
	'Smilies_are_ON' => 'Smeski so <u>ON</u>',
	'Smilies_are_OFF' => 'Smeski so <u>OFF</u>',

	'Attach_signature' => 'Dodaj podpis (podpis lahko urejate v svojem profilu)',
	'Notify' => 'Obvesti me, ko bo objavljen odgovor na to objavo',
	'Delete_post' => 'Izbrisi to objavo',

	'Stored' => 'Objava je bila uspesno objavljena.',
	'Deleted' => 'Objava je bila uspesno izbrisana.',
	'Poll_delete' => 'Anketa je bila uspesno izbrisana.',
	'Vote_cast' => 'Vas glas je bil uspesno zabeležen.',

	'Topic_reply_notification' => 'Obvestilo o odgovoru na temo ali objavo',

	'Emoticons' => 'Smeski',
	'More_emoticons' => 'Vec smeskov',

// Private Messaging
	'Private_Messaging' => 'Zasebna sporocila',

	'Login_check_pm' => 'Prijavi se za pregled tvojih zasebnih sporocil',
	'New_pms' => 'Imas %d novih zasebnih sporocil', // You have 2 new messages
	'New_pm' => 'Imas %d novo zasebno sporocilo', // You have 1 new message
	'No_new_pm' => 'Nimas novih zasebnih sporocil',
	'Unread_pms' => 'Imas %d neprebranih zasebnih sporocil',
	'Unread_pm' => 'Imas %d neprebrano zasebno sporocilo',
	'No_unread_pm' => 'Ni neprebranih zasebnih sporocil',
	'You_new_pm' => 'Prejel si novo zasebno sporocilo',
	'You_new_pms' => 'Prejel si se eno novo zasebno sporocilo',
	'You_no_new_pm' => 'Nimas vec novih zasebnih sporocil',

	'Unread_message' => 'Neprebrana ZS',
	'Read_message' => 'Preberi ZS',

	'Read_pm' => 'Preberi ZS',
	'Post_new_pm' => 'Poslji novo ZS',
	'Post_reply_pm' => 'Odgovori preko ZS',
	'Post_quote_pm' => 'Citiraj ZS',
	'Edit_pm' => 'Uredi ZS',

	'Inbox' => 'Prejeta sporocila',
	'Outbox' => 'Odhodna sporocila',
	'Savebox' => 'Shranjena sporocila',
	'Sentbox' => 'Poslana sporocila',
	'Flag' => 'Zastavica',
	'Subject' => 'Naslov',
	'From' => 'Od',
	'To' => 'Za',
	'Date' => 'Datum',
	'Mark' => 'Oznaceno',
	'Sent' => 'Poslano',
	'Saved' => 'Shranjeno',
	'Delete_marked' => 'Izbrisi oznaceno',
	'Delete_all' => 'Izbrisi vse',
	'Save_marked' => 'Shrani oznaceno',
	'Download_marked' => 'Dol potegni oznaceno',
	'Mailbox' => 'Postni nabiralnik',
	'Save_message' => 'Shrani sporocilo',
	'Delete_message' => 'Izbrisi sporocilo',
	'Next_privmsg' => 'Naslednje sporocilo',
	'Previous_privmsg' => 'Predhodno ZS',
	'No_newer_pm' => 'Ni novejsih ZS.',
	'No_older_pm' => 'Ni starejsih ZS.',
	'Display_messages' => 'Prikaži prejsnja sporocila', // Followed by number of days/weeks/months
	'All_Messages' => 'Vsa sporocila',

	'No_messages_folder' => 'V tej mapi ni sporocil',

	'PM_disabled' => 'Posiljanje zasebnih sporocil je onemogoceno.',
	'Cannot_send_privmsg' => 'Oprostite, administratorji so onemogocili posiljanje zasebnih sporocil.',
	'No_to_user' => 'Moras dolociti uporabnisko ime osebe, ki bi ji rad/a poslal sporocilo.',
	'No_such_user' => 'Uporabnisko ime ne obstaja.',

	'Disable_HTML_pm' => 'Izklopi HTML v tem sporocilu',
	'Disable_ACRO_AUTO_pm' => 'Izklopi Acronyms in Autolinks v tem sporocilu',
	'Disable_BBCode_pm' => 'Izklopi BBCode v tem sporocilu',
	'Disable_Smilies_pm' => 'Izklopi Smeske v tem sporocilu',

	'Message_sent' => 'Sporocilo je bilo poslano.',

	'Click_return_inbox' => 'Klikni %stukaj%s za vrnitev na prejeta sporocila',
	'Click_return_index' => 'Klikni %stukaj%s za vrnitev na seznam',

	'Send_a_new_message' => 'Poslji novo ZS',
	'Send_a_reply' => 'Odgovori na ZS',
	'Edit_message' => 'Uredi ZS',

	'Notification_subject' => 'Prejel/a si novo ZS!',

	'Find_username' => 'Najdi uporabnika',
	'Find' => 'Najdi',
	'No_match' => 'Ni zadetkov.',

	'No_post_id' => 'ID objave ni izbran',
	'No_such_folder' => 'Ta mapa ne obstaja',
	'No_folder' => 'Mapa ni izbrana',

	'Mark_all' => 'Oznaci vse',
	'Unmark_all' => 'Preklici oznaceno',

	'Confirm_delete_pm' => 'Ste prepricani, da želis brisati to sporocilo?',
	'Confirm_delete_pms' => 'Ste prepricani, da želis brisati ta sporocila?',

	'Inbox_size' => 'Nabiralnik za prejeta sporocila je %d%% poln', // eg. Your Inbox is 50% full
	'Sentbox_size' => 'Nabiralnik za poslana sporocila je %d%% poln',
	'Savebox_size' => 'Nabiralnik za shranjena sporocila je %d%% poln',

	'Click_view_privmsg' => 'Klikni %tukaj%s za pregled nabiralnika;',

// Profiles/Registration
	'Viewing_user_profile' => 'Poglej profil :: %s', // %s is username
	'About_user' => 'Vse o %s', // %s is username
//Start Quick Administrator User Options and Information MOD
	'Quick_admin_options' => 'Hitre informacije in možnosti za Administratorja',
	'Admin_edit_profile' => 'Uredi uporabnikov profil',
	'Admin_edit_permissions' => 'Spremeni dovoljenja uporabnika',
	'User_active' => 'Uporabnik <b>je</b> aktiven',
	'User_not_active' => 'Uporabnik <b>ni</b> aktiven',
	'Username_banned' => 'Uporabnisko ime <b>je</b> onemogoceno',
	'Username_not_banned' => 'Uporabnisko ime <b>ni</b> onemogoceno',
	'User_email_banned' => 'Uporabnikov email [ %s ] <b>je</b> onemogocen',
	'User_email_not_banned' => 'Uporabnikov email <b>ni</b> onemogocen',
//End Quick Administrator User Options and Information MOD
	'Preferences' => 'Nastavitve',
	'Items_required' => '<i>Podatki oznaceni z * so obvezni.</i>.',
	'Registration_info' => 'Osnovni podatki',
	'Profile_info' => 'Ostali podatki',
	'Profile_info_warn' => '<i>Ovi podatki bodo javno dostopni vsem.</i>',
	'Avatar_panel' => 'Nadzorna plosca za uporabnisko sliko',
	'Avatar_gallery' => 'Galerija uporabniskih slik',

	'Website' => 'Internetna stran',
	'Location' => 'Lokacija',
	'Contact' => 'Kontaktiraj',
	'Email_address' => 'E-mail naslov',
	'Email' => 'E-mail',
	'Send_private_message' => 'Poslji zasebno sporocilo',
	'Hidden_email' => '[ Skrit ]',
	'Search_user_posts' => 'Isci objave tega uporabnika',
	'Interests' => 'Zanimanja',
	'Occupation' => 'Poklic/dejavnost',
	'Poster_rank' => 'Status',

	'Total_posts' => 'Skupno objav',
	'User_post_pct_stats' => '%.2f%% od skupaj', // 1.25% of total
	'User_post_day_stats' => '%.2f objav dnevno', // 1.5 posts per day
	'Search_user_posts' => 'Najdi vse objave uporabnika %s', // Find all posts by username
	'Search_user_topics_started' => 'Najdi vse teme uporabnika %s', // Find all topics started by username

	'No_user_id_specified' => 'Uporabnisko ime ne obstaja.',
	'Wrong_Profile' => 'Spreminjate lahko samo svoj profil.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => 'Aktiven status',
	'Invision_Communicate' => 'Objavi',
	'Invision_Info' => 'Informacija',
	'Invision_Member_Group' => 'Uporabniska skupina',
	'Invision_Member_Title' => 'Ime uporabnika',
	'Invision_Most_Active' => 'Najbolj aktiven v',
	'Invision_Most_Active_Posts' => '%s objav v tem forumu',
	'Invision_Details' => 'Podrobnosti objave',
	'Invision_PPD_Stats' => 'Objave dnevno',
	'Invision_Signature' => 'Podpis',
	'Invision_Website' => 'Zacetna stran',
	'Invision_Total_Posts' => 'Sestevek vseh objav',
	'Invision_User_post_pct_stats' => '( %.2f%% od skupaj )',
	'Invision_User_post_day_stats' => '%.2f objav dnevno',
	'Invision_Search_user_posts' => 'Najdi vse objave uporabnika',
	'Invision_Posting_details' => 'Podrobnosti objav',
// Invision View Profile - END

	'Only_one_avatar' => 'Izberete lahko samo eno prikazno sliko',
	'File_no_data' => 'Datoteka na URLju, ki ste ga vnesli, ne vsebuje podatkov',
	'No_connection_URL' => 'Ne morem se povezati z URLjem, ki ste ga vpisali',
	'Incomplete_URL' => 'URL, ki sta ga vpisali, ni popoln',
	'Wrong_remote_avatar_format' => 'Neveljaven URL prikazne slike',
	'No_send_account_inactive' => 'Geslo ne more biti poslano, ker je uporabniski racun neaktiven.<br /> Za dodatne informacije kontaktirajte administratorja foruma.',

	'Always_smile' => 'Vedno dovoli smeske',
	'Always_html' => 'Vedno dovoli HTML',
	'Always_bbcode' => 'Vedno dovoli BBCode',
	'Always_add_sig' => 'Vsakic dodaj moj podpis',
	'Always_notify' => 'Vsakic me obvesti o odgovorih',
	'Always_notify_explain' => '<i>Ko nekdo odgovori na temo, v kateri sodelujete, boste prejeli e-mail.<br />To možnost lahko spremenite ob vsaki objavi.</i>.',

	'Board_style' => 'Videz foruma',
	'Board_lang' => 'Jezik foruma',
	'No_themes' => 'V bazi podatkov ni tem',
	'Timezone' => 'Csovni pas',
	'Date_format' => 'Oblika datuma',
	'Date_format_explain' => '<i>Sintaksa identicna PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> funkciji</i>.',
	'Signature' => 'Podpis',
	'Signature_explain' => '<i>Maksimalno %d znakov.</i>',
	'Public_view_email' => 'Vedno prikaži moj email naslov',

	'Current_password' => 'Trenutno geslo',
	'New_password' => 'Novo geslo',
	'Confirm_password' => 'Potrdi novo geslo',
	'Confirm_password_explain' => '<i>Ce želite spremeniti geslo ali email naslov, morate potrditi trenutno geslo.</i>',
	'password_if_changed' => '<i>Vpisite geslo samo, ce ga želite spremeniti.</i>',
	'password_confirm_if_changed' => '<i>Potrdite geslo samo ce ste ga [ zgoraj ] spreminjali.</i>',

	'Avatar' => 'Prikazna slika',
	'Avatar_explain' => 'Prikaz majhne prikazne slike z vasimi podrobnostmi v objavi.<br />Slika je lahko siroka do %d pikslov, visoka do %d pikslov, velikosti do %d KB.',
	'Upload_Avatar_file' => 'Naloži prikazno sliko z racunalnika',
	'Upload_Avatar_URL' => 'Naloži prikzano sliko z URLja',
	'Upload_Avatar_URL_explain' => '<i>Vpisite URL na katerem se nahaja prikazna slika.</i>',
	'Pick_local_Avatar' => 'Izberi prikazno sliko iz galerije',
	'Link_remote_Avatar' => 'Link na URL prikazne slike',
	'Link_remote_Avatar_explain' => '<i>Vpisi URL na katerem se nahaja prikazna slika.</i>',
	'Avatar_URL' => 'URL prikazne slike',
	'Select_from_gallery' => 'Izberi prikazno sliko iz galerije',
	'View_avatar_gallery' => 'Ogled galerije prikaznih slik',

	'Select_avatar' => 'Izberi prikazno sliko',
	'Return_profile' => 'Razveljavi prikazno sliko',
	'Select_category' => 'Izberi kategorijo',

	'Delete_Image' => 'Izbrisi sliko',
	'Current_Image' => 'Trenutna slika',

	'Notify_on_privmsg' => 'Obvesti me, ko prejmem zasebno sporocilo',
	'Popup_on_privmsg' => 'Obvestilo o novem zasebnem sporocilu prikaži v posebnem oknu',
	'Popup_on_privmsg_explain' => '<i>Nekatere predloge odpirajo posebno okno z obvestrilom o novem zasebnem sporocilu.</i>',
	'Hide_user' => 'Skrij moj online status',

	'Profile_updated' => 'Tvoj profil je posodobljen',
	'Profile_updated_inactive' => 'Tvoj profil je posodobljen, ceprav uporabniski racun se ni aktiven.<br />Preverite svoj email, kjer so navodila, kako ponovno aktivirati svoj uporabniski racun, oziroma, ce je potrebna administratorska aktivacija, pocakajte, da ga administrator ponovno aktivira.',

	'Password_mismatch' => 'Gesli, ki ste jih vpisali, se ne ujemata.',
	'Current_password_mismatch' => 'Trenutno geslo, ki ste ga vpisali, se ne ujema s tistim v bazi podatkov.',
	'Password_long' => 'Geslo lahko vsebuje do 32 znakov.',
	'Too_many_registers' => 'Preveckrat ste se poskusili registrirati. Prosimo, poskusite kasneje.',
	'Username_taken' => 'Uporabnisko ime že obstaja.',
	'Username_invalid' => 'Uporabnisko ime vsebuje nedovoljene znake, kot so \'.',
	'Username_disallowed' => 'Uporabnisko ime ni dovoljeno.',
	'Email_taken' => 'Ta email naslov uporablja že predhodno registriran uporabnik/ca.',
	'Email_banned' => 'Ta email naslov je izklopljen/prepovedan.',
	'Email_invalid' => 'Ta email naslov je nepravilen.',
	'Signature_too_long' => 'Tvoj podpis je predolg.',
	'Fields_empty' => 'Izpolniti morate vsa zahtevana polja.',
	'Avatar_filetype' => 'Koncnica prikazne slike mora biti .jpg/.gif/.png.',
	'Avatar_filesize' => 'Prikazna slika je lahko velikosti do %d KB', // The avatar image file size must be less than 6 KB
	'Avatar_imagesize' => 'Prikazna slika je lahko sirine do %d pikslov in visine do %d pikslov',

	'Welcome_subject' => 'Dobrodosli na %s forum', // Welcome to my.com forums
	'New_account_subject' => 'Nov uporabniski racun',
	'Account_activated_subject' => 'Uporabniski racun je aktiviran',

	'Account_added' => 'Hvala, da ste se registrirali/la.<br />Uporabniski racun je ustvarjen.<br />Zdaj se lahko prijavite z vasim uporabniskim imenom in geslom',
	'Account_inactive' => 'Uporabniski racun je ustvarjen, toda ta forum zahteva aktivacijo uporabniskega racuna.<br />Aktivacijski kljuc vam je bil poslan na email naslov, ki ste ga vpisali pri registraciji',
	'Account_inactive_admin' => 'Uporabniski racun je ustvarjen, toda ta forum zahteva aktivacijo uporabniskega racuna s strani administratorja.<br />Ta je prejel email o tem, vi pa boste o aktivaciji obvesceni preko emaila, ko bo ta izvedena.',
	'Account_active' => 'Uporabniski racun je aktiviran.<br />Hvala za registracijo.',
	'Account_active_admin' => 'Uporabniski racun je aktiviran',
	'Reactivate' => 'Ponovi aktivacijo uporabniskega racuna!',
	'Already_activated' => 'Uporabniski racun ste že aktivirali.',
	'COPPA' => 'Uporabniski racun je ustvarjen, toda mora se biti odobren.<br />Za podrobnosti o tem preverite svoj email naslov.',

	'Registration' => 'Pogoji za registracijo',
	'Reg_agreement' => 'Spostovani, za registracijo se morate strinjati s pogoji, pod katerimi deluje ta forume, ti pa so navedeni v besedilu spodaj.<br /><br />Vse objave in sporocila na tem forumu odražajo mnenja/stalisca/poglede avtorja/ice teh objav. V skladu s tem administratorji, moderatorji in ostale osebe, ki sodelujejo pri vzdrževanju tega foruma [u nadaljnem tekstu: admini] ne morejo biti in ne bodo odgovorni za vsebino teh objav [razen seveda lastnih].<br /><br />Admini bodo v najkrajsem možnem casu izbrisali objave z žaljivo/neprimerno/nedovoljeno vsebino, kljub temu pa je treba upostevati, da je skoraj nemogoce pregledati vsako objavo, kar pomeni, da obstaja možnost, da nekatere objave s tako vsebino ne bodo takoj izbrisane [zato se ne obotavljajte obvestiti adminov o takih objavah ].<br /><br />Objavljanje žaljivih, nesramnih, vulgarnih, obrekujocih, sovražnih, grozilnih, spolno orientiranih vsebin kakor tudi bilo katerih drugih vsebin ki krsijo zakon(e), ni dovoljeno. Objava nedovoljene objave povzroci  trenutno in trajno izkljucitev uporabnika [krsitelja/krsiteljice] s tega foruma kakor tudi obvestilo ponudniku internetnih storitev osebe [krsitelja/krsiteljice] o storjenem. Admini imajo pravico, da kadar koli izbrisejo/uredijo/premestijo/zaprejo teme/objave z nedovoljeno vsebino.<br /><br />Vsi podatki, vpisani pri registraciji, se vpisujejo v bazo podatkov. Niti en podatek ne sme in ne bo dan na vpogled bilo kateri osebi [razen vas, Admina in tistih, ki jim zakon to dovoljuje]. Admini ne morejo in ne bodo odgovorni, ce zaradi hackerskega napada pride to razkritja podatkov.<br /><br />Forum uporablja ti. cookies [piskotke] za shranjevanje podatkov na racunalnik, ki ga uporabljate za pregledovanje foruma. Piskotki ne vsebujejo nikakrsnih osebnih podatkov in so namenjeni samo in izkljucno boljsemu delovanju foruma. Vas email naslov je namenjen samo registraciji in obvestilom, povezanim z vasim uporabniskim racunom.<br /><br />S klikom na "Strinjam se ..." potrjujete; da se strinjate; z vsem zgoraj navedenim, kakor tudi, da se boste tega tudi držali.',

	'Agreement' => 'Strinjam se',
	'Agree_under_13' => 'Strinjam se in imam manj kot 13 let',
	'Agree_over_13' => 'Strinjam se',
	'Agree_not' => 'Ne strinjam se',
	'Agree_checkbox' => 'Strinjam se s temi pogoji',
	'Agree_checkbox_Error' => 'Za registracijo morate klikniti "AGREE" na dnu strani!',

	'Wrong_activation' => 'Aktivacijski kljuc, ki ste ga vnesli, ne odgovarja nobenemu v nasi bazi podatkov.',
	'Send_password' => 'Poslji mi novo geslo',
	'Password_updated' => 'Novo geslo je ustvarjeno.<br />Preverite svoj email naslov glede podrobnosti o aktivaciji novega gesla.',
	'No_email_match' => 'Email naslov, ki ste ga navedli, se ne ujema s tistim, ki je za to uporabnisko ime naveden v nasi bazi podatkov.',
	'New_password_activation' => 'Aktivacija novega gesla',
	'Password_activated' => 'Uporabniski racun je ponovno aktiviran.<br />Za vpis uporabite geslo, navedeno u emailu, ki ste ga prejeli.',

	'Send_email_msg' => 'Poslji email sporocilo',
	'No_user_specified' => 'Nisi vnesel uporabnika',
	'User_prevent_email' => 'Uporabnik ne želi prejemati email sporocil.<br />Poskusite mu poslati zasebno sporocilo.',
	'User_not_exist' => 'Uporabnisko ime ne obstaja',
	'CC_email' => 'Poslji kopijo tega emaila sebi',
	'Email_message_desc' => 'To sporocilo bo poslano kot navaden tekst, zato ne uporabljajte HTML/BBCode.<br />Kot povratni naslov za to sporocilo bo naveden vas email naslov.',
	'Flood_email_limit' => 'Trenutno ne morete poslati se en mail.<br />Ponovno poskusite kasneje.',
	'Recipient' => 'Prejemnik',
	'Email_sent' => 'Email je bil poslan.',
	'Send_Email' => 'Poslji email',
	'Empty_sender_email' => 'Morate vpisati uporabnikov email.',
	'Empty_subject_email' => 'Morate vpisati naslov emaila.',
	'Empty_message_email' => 'Morate vpisati vsebino emaila.',


// Visual confirmation system strings
	'Confirm_code_wrong' => 'Potrditvena koda, ki ste jo vnesli, ni pravilna',
//	'Too_many_registers' => 'Prekoracili ste stevilo poskusov registracije.<br />Poskusite ponovno kasneje.',
	'Confirm_code_impaired' => 'Ce te kode nikakor ne morete prebrati, za pomoc kontaktirajte %sadministratorja%s.',
	'Confirm_code' => 'Potrditvena koda',
	'Confirm_code_explain' => 'Vnesite kodo tocno tako, kot jo vidite.<br /><i>Pazite na velike/male crke, nicla je oznacena z diagonalno crto.</i>.',



// Members list
	'Select_sort_method' => 'Izberi nacin razvrscanja',
	'Sort' => 'Razvrsti',
	'Sort_Top_Ten' => '10 najbolj pridnih',
	'Sort_Joined' => 'Po Datumu registracije',
	'Sort_Username' => 'Po Uporabniskem imenu',
	'Sort_Location' => 'Po kraju',
	'Sort_Posts' => 'Po stevilu prispevkov',
	'Sort_Email' => 'Po E-naslovu',
	'Sort_Website' => 'Po spletni strani',
	'Sort_Ascending' => 'Narascajoce',
	'Sort_Descending' => 'Padajoce',
	'Order' => 'Razporedi',



// Group control panel
	'Group_Control_Panel' => 'Nadzorna plosca za skupine',
	'Group_member_details' => 'Podrobnosti o clanih skupine',
	'Group_member_join' => 'Pridruži se skupini',
	'Group_Information' => 'Informacije o skupini',
	'Group_name' => 'Ime skupine',
	'Group_description' => 'Opis skupine',
	'Group_membership' => 'Clanstvo skupine',
	'Group_Members' => 'Clani in clanice skupine',
	'Group_Moderator' => 'Moderator/ka skupine',
	'Pending_members' => 'Cakajoci clani',
	'Group_type' => 'Tip skupine',
	'Group_open' => 'Odprta skupina',
	'Group_closed' => 'Zaprta skupina',
	'Group_hidden' => 'Skrita skupina',
	'Current_memberships' => 'Trenutno stevilo clanov',
	'Non_member_groups' => 'Skupine brez clanov',
	'Memberships_pending' => 'Neodloceni clani',
	'No_groups_exist' => 'Ni skupin',
	'Group_not_exist' => 'Ta skupina ne obstaja',
	'Join_group' => 'Pridruži se skupini',
	'No_group_members' => 'Ta skupina nima clanov',
	'Group_hidden_members' => 'Ta skupina je skrita; ne mores videti clanstva',
	'No_pending_group_members' => 'Ta skupina nima cakajocih clanov',
	'Group_joined' => 'Uspesno si se pridružil/a tej skupini.<br /> Obvescen/a bos, ko bos sprejet v skupino s strani moderatorja.',
	'Group_request' => 'Zahteva za clanstvo je bila posredovana.',
	'Group_approved' => 'Tvoja zahteva je bila odobrena.',
	'Group_added' => 'Vclanil si se v to skupino.',
	'Already_member_group' => 'Si že clan te skupine',
	'User_is_member_group' => 'Uporabnik je že clan te skupine',
	'Group_type_updated' => 'Tip skupine je bil uspesno spremenjen.',
	'Could_not_add_user' => 'Izbrani uporabnik ne obstaja.',
	'Could_not_anon_user' => 'Ce nisi registriran prej, ne mores postati clan skupine.',
	'Confirm_unsub' => 'Ali se res želis izpisati se iz te skupine?',
	'Confirm_unsub_pending' => 'Tvoja zahteva za clanstvo v tej skupini se ni bila odobrena; se res želis izpisati?',
	'Unsub_success' => 'Iz te skupine si izpisan.',
	'Approve_selected' => 'Potrdi oznacene',
	'Deny_selected' => 'Zavrni oznacene',
	'Not_logged_in' => 'Ce se želis pridružiti tej skupini, se moras prijaviti.',
	'Remove_selected' => 'Odstrani oznacene',
	'Add_member' => 'Dodaj clana',
	'Not_group_moderator' => 'Nisi moderator skupine; to lahko napravi le moderator te skupine.',
	'Login_to_join' => 'Prijavi se, ce se želis pridružiti skupini ali voditi clane.',
	'This_open_group' => 'Ta skupina je odprta: klikni, ce želis postati clan.',
	'This_closed_group' => 'Ta skupina je zaprta: ne sprejemamo novih uporabnikov.',
	'This_hidden_group' => 'Ta skupina je skrita: dodajanje uporabnikov ni omogoceno.',
	'Member_this_group' => 'Si clan te skupine',
	'Pending_this_group' => 'Cakas na clanstvo v tej skupini.',
	'Are_group_moderator' => 'Si moderator skupine',
	'None' => 'Noben',
	'Subscribe' => 'Vpisi se',
	'Unsubscribe' => 'Izpisi se',
	'View_Information' => 'Poglej podatke',

// Search
	'Search_query' => 'Vsebina iskanja',
	'Search_options' => 'Možnosti iskanja',
	'Search_keywords' => 'Isci po kljucnih besedah',
	'Search_keywords_explain' => 'Za napredno iskanje lahko uporabljas <u>AND</u> za besede, ki morajo biti v zadetkih, <u>OR</u> za besede ki so lahko v zadetkih in <u>NOT</u> za besede, ki ne smejo biti v zadetkih iskanja. Uporabi * kot iskalno kartico, s katero isces razlicice dela besede.',
	'Search_author' => 'Isci po avtorju',
	'Search_author_explain' => 'Uporabi * kot iskalno kartico, s katero isces razlicice dela besede',
	'Search_for_any' => 'Isci poljuben izraz ali uporabi vneseno poizvedbo.',
	'Search_for_all' => 'Isci po vseh izrazih',
	'Search_title_msg' => 'Isci v naslovu tem in besedilu sporocil.',
	'Search_msg_only' => 'Isci samo v besedilu sporocil.',
	'Return_first' => 'Prikaži prvih',
	'characters_posts' => 'znakov/crk sporocil',
	'Search_previous' => 'Isci sporocila novejsa kot',
	'Sort_by' => 'Razvrsti po',
	'Sort_Time' => 'casu objave',
	'Sort_Post_Subject' => 'naslovu objave',
	'Sort_Topic_Title' => 'naslovu teme',
	'Sort_Author' => 'avtorju',
	'Sort_Forum' => 'forumu',
	'Display_results' => 'Prikaži zadetke v obliki',
	'All_available' => 'Vse ustrezne',
	'No_searchable_forums' => 'Nimas dovoljenja za iskanje po forumih na tej strani.',
	'No_search_match' => 'Nobena tema ali objava ne ustreza kriterijem iskanja',
	'Found_search_match' => 'Najden %d zadetek',
	'Found_search_matches' => 'Najdeno %d zadetkov',
	'Close_window' => 'Zapri okno',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'Samo %s lahko objavlja/jo obvestila.',
	'Sorry_auth_sticky' => 'Samo %s lahko objavlja/jo Pomembne teme.',
	'Sorry_auth_read' => 'Samo %s lahko bere/jo teme/objave.',
	'Sorry_auth_post' => 'Samo %s lahko objavlja/jo.',
	'Sorry_auth_reply' => 'Samo %s lahko odgovarja/jo na teme/objave.',
	'Sorry_auth_edit' => 'Samo %s lahko ureja/jo objave.',
	'Sorry_auth_delete' => 'Samo %s lahko brise/jo objave.',
	'Sorry_auth_vote' => 'Samo %s lahko glasuje/jo.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>anonimni uporabniki</b>',
	'Auth_Registered_Users' => '<b>registrirani uporabniki</b>',
	'Auth_Self_Users' => '<b>doloceni uporabniki</b>',
	'Auth_Users_granted_access' => '<b>pooblasceni uporabniki</b>',
	'Auth_Moderators' => '<b>moderatorji</b>',
	'Auth_Administrators' => '<b>administratorji</b>',

	'Not_Moderator' => 'Nisi moderator tega foruma.',
	'Not_Authorised' => 'Nisi pooblascen',

	'You_been_banned' => 'Izkljucen si s tega foruma.<br />Kontaktiraj administratorja za dodatne informacije.',

// Viewonline
	'Reg_users_zero_online' => 'Skupaj je 0 registriranih uporabnikov in ', // There are 5 Registered and
	'Reg_users_online' => 'Skupaj je %d registriranih uporabnikov in ', // There are 5 Registered and
	'Reg_user_online' => 'Skupaj je %d registriran uporabnik in ', // There is 1 Registered and
	'Hidden_users_zero_online' => '0 skritih uporabnikov online', // 6 Hidden users online
	'Hidden_users_online' => '%d skritih uporabnikov online', // 6 Hidden users online
	'Hidden_user_online' => '%d skriti uporabnik online', // 6 Hidden users online
	'Guest_users_online' => 'Skupaj je %d gostov online', // There are 10 Guest users online
	'Guest_users_zero_online' => 'Skupaj je 0 gostov online', // There are 10 Guest users online
	'Guest_user_online' => 'Skupaj je %d gost online', // There is 1 Guest user online
	'No_users_browsing' => 'Trenutno ni clanov na tem forumu',

	'Online_explain' => 'Podatki so bazirani na aktivnosti uporabnikov v zadnjih 5 minutah',
	'Online_today' => 'Aktivnost uporabnikov danes',

	'Forum_Location' => 'Lokacija',
	'Last_updated' => 'Posodobljeno',

	'Forum_index' => 'Forum index',
	'Portal' => 'Zacetna stran',
	'Logging_on' => 'Prijava',
	'Posting_message' => 'Objavljanje',
	'Searching_forums' => 'Pregledovanje foruma',
	'Viewing_profile' => 'Gleda profil',
	'Viewing_HACKSLIST' => 'Gleda Hacks sezname',
	'Viewing_online' => 'Gleda, kdo je online',
	'Viewing_member_list' => 'Gleda seznam uporabnikov',
	'Viewing_priv_msgs' => 'Gleda zasebna sporocila',
	'Viewing_FAQ' => 'Gleda FAQ',
	'Viewing_KB' => 'Gleda KB',
	'Viewing_RSS' => 'Gleda RSS Feed',


// Moderator Control Panel
	'Mod_CP' => 'Nadzorna plosca za moderatorje',
	'Mod_CP_explain' => '<i>Z uporabo spodnjega menija lahko izvajate moderatorsko dejavnost na tem forumu.<br />Lahko zaklepate, odklepate, premescate, brisete teme...</i>',

	'Select' => 'Izberi',
	'Delete' => 'Izbrisi',
	'Move' => 'Premesti',
	'Copy' => 'Kopiraj',
	'Lock' => 'Zakleni',
	'Unlock' => 'Odkleni',

	'Topics_Removed' => 'Izbrana/e tema/e je/so uspesno izbrisana/e iz baze podatkov.',
	'Topics_Locked' => 'Izbrana/e tema/e je/so zaklenjena/e.',
	'Topics_Moved' => 'Izbrana/e tema/e je/so premaknjena/e.',
	'Topics_Unlocked' => 'Izbrana/e tema/e je/su odklenjena/e.',
	'No_Topics_Moved' => 'Niti ena tema ni premaknjena.',

	'Confirm_delete_topic' => 'Ste prepricani, da želite izbrisati oznaceno/e temo/e?',
	'Confirm_lock_topic' => 'Ste prepricani, da želite zakleniti oznaceno/e temo/e?',
	'Confirm_unlock_topic' => 'Ste prepricani, da želite odkleniti oznaceno/e temo/e?',
	'Confirm_move_topic' => 'Ste prepricani, da želite premakniti oznaceno/e temo/e?',

	'Move_to_forum' => 'Premakni v forum',
	'Leave_shadow_topic' => 'Naj tema ostane tudi v starem forumu..',

	'Split_Topic' => 'Razdeli temo Nadzorna plosca',
	'Split_Topic_explain' => '<i>Z uporabo spodnjega menija lahko razdelite temo na dve, z oznacevanjem dolocenih objav ali deljenjem oznacene objave...</i>',
	'Split_title' => 'Nov naslov teme',
	'Split_forum' => 'Forum za novo temu',
	'Split_posts' => 'Razdeli oznacene objave',
	'Split_after' => 'Razdeli od oznacene objave',
	'Topic_split' => 'Tema je uspesno razdeljena',

	'Too_many_error' => 'Izbrali ste prevec objav.<br />Lahko izberete samo eno!',

	'None_selected' => 'Niste izbrali niti ene teme/objave za izvajanje te operacije.<br />Vrnite se nazaj in izberite vsaj eno.',
	'New_forum' => 'Nov forum',

	'This_posts_IP' => 'IP naslov te objave',
	'Other_IP_this_user' => 'Ostali IP naslov s katerih je ta uporabnik objavljal',
	'Users_this_IP' => 'Uporabniki, ki objavljajo s tega IP naslova',
	'IP_info' => 'IP info',
	'Lookup_IP' => 'Isci IP naslov',

// Errors (not related to a specific failure on a page)
	'Information' => 'Info',
	'Critical_Information' => 'Kriticne informacije',

	'General_Error' => 'Splosna napaka',
	'Critical_Error' => 'Kriticna napaka',
	'An_error_occured' => 'Prislo je do napake!',
	'A_critical_error' => 'Prislo je do kriticne napake!',
	'Admin_reauthenticate' => 'Za administriranje foruma se morate ponovno prijaviti.',

	'Topic_description' => 'Opis tvoje teme',
//	'Description' => 'Topic Description',

	'Guestbook' => 'Guestbook',
	'Viewing_guestbook' => 'Read the guestbook',

	'Click_return_preferences' => 'Klikni %tukaj%s za vrnitev na Nastavitve',

	'Warn_new_post' => 'V tej temi je objavljena vsaj ena objava. Preglejte nove odgovore in ponovno objavite vaso objavo.',

	'Today_at' => '<b class="date-today">Danes</b> ob ',
	'Yesterday_at' => '<b class="date-yesterday">Vceraj</b> ob ',
	'TODAY' => '<b class="date-today">Danes</b>',
	'YESTERDAY' => '<b class="date-yesterday">Vceraj</b>',

// Birthday - BEGIN
	'Birthday' => 'Rojstni dan',
	'No_birthday_specify' => 'Ni vnesen',
	'Age' => 'Starost',
	'Wrong_birthday_format' => 'Datum rojstva je narobe vnesen.',
	'Birthday_to_high' => 'Ta forum ne sprejema uporabnikov, starejsih od %d let',
	'Birthday_require' => 'za ta forum je treba vnesti datum rojstva',
	'Birthday_to_low' => 'Ta forum ne sprejema uporabnikov mlajsih od %d let',
	'Submit_date_format' => 'd.m.Y', //php date() format - note: ONLY d , m and Y may be used and SHALL ALL be used (different sepperators are accepted)
	'Birthday_greeting_today' =>'Herzlichen Glückwünsch zum Geburtstag! Mit deinen %s Jahren siehst du immer noch so aus wie eh und je: einfach [b]blendend[/b]. Also lass dich heute reich beschenken und feiern und lass dich nicht ärgern.',//%s is substituted with the users age
	'Birthday_greeting_prev' =>'Hui! Wir kommen zu spät zu deinem %s. Geburtstag, der am %s war, stimmt\'s? Wir wünschen dir auch nachträglich noch alles Gute und hoffen, dass du einen schönen Geburtstag hattest.',//%s is substituted with the users age, and birthday
	'Greeting_Messaging' =>'Herzlichen Glückwunsch!',
	'Birthday_today' => 'Geburtstage heute: ',
	'Birthday_week' => 'Geburtstage in den nächsten %d Tagen: ', // %d is substitude with the number of days
	'Nobirthday_week' => 'In den nächsten %d Tagen hat niemand Geburtstag.', // %d is substitude with the number of days
	'Nobirthday_today' => 'Heute hat niemand Geburtstag.',
	'Year' => 'Leto',
	'Month' => 'Mesec',
	'Day' => 'Dan',
// Birthday - END

// Start add - Gender MOD
	'Gender' => 'Spol',//used in users profile to display witch gender he/she is
	'Male' => 'Moski',
	'Female' => 'Ženski',
	'No_gender_specify' => 'Ni dolocen',
	'Gender_require' => 'Izberite spol, ker ga ta forum zahteva.',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
	'Topic_view_users' => 'Seznam uporabnikov, ki so pregledali to temo',
	'Topic_time' => 'Zadnje pregledano',
	'Topic_count' => 'Ogled sestevka',
	'Topic_view_count' => 'Ogled sestevka tem',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
	'Give_G_card' => 'Ponovo aktiviraj uporabnika',
	'Give_Y_card' => 'Opozori uporabnika #%d',
	'Give_R_card' => 'Izkljuci uporabnika',
	'Ban_update_sucessful' => 'Seznam izkljucenih je bila uspesno posodobljena',
	'Ban_update_green' => 'Uporabnik je ponovo aktiviran',
	'Ban_update_yellow' => 'Uporabnik je dobil opozorilo, zdaj ima %d opozoril od maksimalno %d opozoril',
	'Ban_update_red' => 'Uporabnik je zdaj izkljucen',
	'Ban_reactivate' => 'Ponovno ste vkljuceni',
	'Ban_warning' => 'Prejel si opozorilo',
	'Ban_blocked' => 'Vas status na forumu je blokiran',
	'Click_return_viewtopic' => 'Klikni %tukaj%s za vrnitev na temo',
/*
	'Rules_ban_can' => 'Ti <b>lahko</b> izkljucujes druge uporabnike s foruma',
	'Rules_greencard_can' => 'Ti <b>lahko;</b> ponovno vkljucujes uporabnike tega foruma',
	'Rules_bluecard_can' => 'Ti <b>lahko</b> obvescas moderatorje o objavah na forumu',
*/
	'Rules_ban_can' => '<b>Lahko</b> izkljucujes druge uporabnike',
	'user_no_email' => 'Uporabnik nima emaila, zato preko emaila ne bo obvescen. O tem ga boste morali obvestiti preko zasebnega sporocila',
	'user_already_banned' => 'Izbrani uporabnik je izkljucen',
	'Ban_no_admin' => 'Ta uporabnik je ADMIN, zato ga ne mores izkljuciti ali opozoriti',
	'Rules_greencard_can' => '<b>Lahko</b> ponovno vkljucujes uporabnike',
	'Rules_bluecard_can' => '<b>Lahko</b> obvescas moderatorje',
	'Give_b_card' => 'Obvesti moderatorje foruma o objavi ',
	'Clear_b_card' => 'Ta objava je bila %d krat prijavljena. Ce pritisnete ta gumb, boste to izbrisali',
	'No_moderators' => 'Ta  forum nima moderatorja, zato se ta ne more obvestiti!',
	'Post_repported' => 'Ta objava je prijavljena %d moderatorjem',
	'Post_repported_1' => 'Ta objava je prijavljena moderatorju',
	'Post_repport' => 'Prijava objave', //Subject in email notification
	'Post_reset' => 'Obvestilo o tej objavi je zdaj resetirano',
	'Search_only_bluecards' => 'Isci samo prijavljene objave',
	'Send_message' => 'Klikni %tukaj%s za posiljanje sporocila moderatorju ali<br />',
	'Send_PM_user' => 'Klikni %tukaj%s da posiljanje zasebnega sporocila uporabniku ali',
	'Link_to_post' => 'Klikni %tukaj%s za ogled prijavljene objave
--------------------------------

',
	'Post_a_report' => 'Prijavi objavo',
	'Report_stored' => 'Vasa prijava je bila uspesno podana',
	'Send_report' => 'Klikni %tukaj%s za vrnitev na objavo',
	'Red_card_warning' => 'Temu uporabniku podeljujete:%s rdeci karton, to bo izkljucilo uporabnika, ali ste prepricani?',
	'Yellow_card_warning' => 'Temu uporabniku podeljujete:%s rumeni karton, to bo opozorilo uporabnika, ali ste prepricani?',
	'Green_card_warning' => 'Temu uporabniku podeljujete :%s zeleni karton, to bo uporabnika ponovno vkljucilo, ali ste prepricani?',
	'Blue_card_warning' => 'S tem prijavljate to objavo, to bo moderatorje opozorilo na to objavo, ali ste prepricani, da moderatorje želite obvestiti o tej objavi?',
	'Clear_blue_card_warning' => 'S tem boste resetirali prijave te objave, želite nadaljevati?',
	'Warnings' => 'Opozorila: %d', //shown beside users post, if any warnings given to the user
	'Banned' => 'Trenutno izkljucen',//shown beside users post, if user are banned

// Last visit - BEGIN
	'Last_logon' => 'Zadnji obisk',
	'Hidde_last_logon' => 'Skrit',
	'Never_last_logon' => 'Nikoli',
	'Users_today_zero_total' => 'Skupaj je <b>0</b> uporabnikov danes obiskalo ta forum: ',
	'Users_today_total' => 'Skupaj je <b>%d</b> uporabnikov danes obiskalo ta forum: ',
	'User_today_total' => 'Skupaj je <b>%d</b> uporabnik obiskal ta forum: ',
	'Users_lasthour_explain' => ', %d v zadnji uri.',
	'Users_lasthour_none_explain' => 'Nihce', //showen of none have visited the last hour, fill if you like

	'Years' => 'Leta',
	'Year' => 'Leto',
	'Weeks' => 'Tedni',
	'Week' => 'Teden',
	'Day' => 'Dan',
	'Total_online_time' => 'Skupni cas na forumu',
	'Last_online_time' => 'Zadnji cas na forumu',
	'Number_of_visit' => 'Število obiskov',
	'Number_of_pages' => 'Število pregledanih strani',
// Last visit - END

	'total_site_hits_key' => '%V% strani pregledanih od %D%.',

	'Message_too_short' => 'Prekratko sporocilo',

// Start add - Online/Offline/Hidden Mod
	'Online' => 'Online',
	'Offline' => 'Offline',
	'Hidden' => 'Skrit',

	'Online_status' => 'Status',
// End add - Online/Offline/Hidden Mod
	'Download' => 'Potegni dol',

//signature editor
	'sig_edit_link' => 'Podpis',
	'sig_description' => 'Uredi podpis (<b>Pregled vkljucen</b>)',
	'sig_edit' => 'Uredi podpis',
	'sig_current' => 'Trenutni podpis',
	'sig_none' => 'Nedosegljiv podpis',
	'sig_save' => 'Shrani',
	'sig_save_message' => 'Podpis je uspesno shranjen!',

	'Statistics' => 'Statistike',

// Start add - Global announcement MOD
	'Globalannounce' => 'Splosno obvestilo',
	'Globalannounce' => 'Novo splosno obvestilo',
// End add - Global announcement MOD
	'Global_Announcements' => 'Splosna obvestila',
	'Announcements' => 'Obvestila',
	'Sticky_Topics' => 'Lepljiva tema',
	'Announcements_and_Sticky' => 'Obvestila in lepljive teme',
// db_update generator
	'Db_update_generator' => 'Generator obnove DB',
	'Instructions' => 'Navodila',
	'SQL_instructions' => 'Ta programcek bo ustvaril datoteke PHP, ki vam bodo omogocile posodabljanje baze podatkov s pomocjo brskalnika. Pri vstavljanju kode SQL morate biti pozorni na nekaj stvari.<br />Najprej se prepricajte, da se vsak vnos SQL konca z vejico (,). Ce se ne, bo datoteka nedelujoca. Zatem se prepricajte, da tabele imajo koncnico "phpbb_". To bo samodejno nadomesceno s kosckom kode, ki vam bo omogocila uporabiti datoteko db_update.php na vsakem forumu ne glede na to, kaksna je koncnica tabele.',
	'Enter_SQL' => 'Vnesi SQL',
	'Enter_SQL_explain' => 'MySQL je najbolj priljubljena odprtokodna baza podatkov na svetu, znana po svoji hitrosti in zanesljivosti.',
	'Output_SQL' => 'SQL Izhod',
	'Output_SQL_explain' => 'Kopirajte in prilepite besedilo iz polja s tekstom na desni v prazno datoteko. Datoteko shranite kot <u>db_update.php</u> in jo naložite na vas strežnik. Preko brskalnika jo poženite.<br /><br />Namesto tega lahko kliknete na gumb "Potegni dol", da datoteko naravnost potegnete dol na svoj racunalnik (priporoceno).',
	'Download' => 'Potegni dol',

	'TOP_POSTERS' => 'Uporabniki z najvec objavami',

// TELL A FRIEND
	'Tell_Friend' => 'Poslji email prijatelju',
	'Tell_Friend_Sender_User' => 'Vase uporabnisko ime',
	'Tell_Friend_Sender_Email' => 'Vas email naslov',
	'Tell_Friend_Reciever_User' => 'Uporabnisko ime vasega prijatelja',
	'Tell_Friend_Reciever_Email' => 'Email vasega prijatelja',
	'Tell_Friend_Wrong_Email' => 'Vnesli ste napacen email naslov.',
	'Tell_Friend_Msg' => 'Vase sporocilo:',
	'Tell_Friend_Title' => 'Povejte prijatelju',
	'Tell_Friend_Body' => "Pozdravljen,\npravkar sem prebral temo &raquo,{TOPIC}&laquo, na {SITENAME} in se mi je zdelo, da bi te zanimala.\n\nTukaj je link: {LINK}\n\nPreberi si in ce bi rad odgovoril, se lahko prijavis in ustvaris lastni racun, ce nisi že.",

// Begin Thanks Mod
	'thankful' => 'Zahvale od',
	'thanks_to' => 'Hvala za to temo',
	'thanks_end' => ':',
	'thanks_alt' => 'Hvala Post',
	'thanks_add_rate' => 'Zahvala avtorju za to temo',
	'thanked_before' => 'Za to temo ste se že zahvalili',
	'thanks_add' => 'Vasa zahvala je bila dodana',
	'thanks_not_logged' => 'Za zahvalo se morate prej prijaviti',
	'thanks2' => 'Zahvaljujem se <br />',
// End Thanks Mod

//Begin Lo-Fi Mod
	'Lofi' => 'Lo-Fi Verzija',
//	'Full_Version' => 'POlna verzija',
	'Full_Version' => 'To je "Lo-Fi" verzija foruma. Za ogled polne verzije z vec informacij, oblikovanja in slik kliknite tukaj.',
	'quote_lofi' => 'Citiraj',
	'edit_lofi' => 'Uredi',
	'ip_lofi' => 'IP',
	'del_lofi' => 'Izbrisi',
	'profile_lofi' => 'Profil',
	'pm_lofi' => 'PP',
	'email_lofi' => 'Email',
	'website_lofi' => 'Internetna stran',
	'icq_lofi' => 'ICQ',
	'aim_lofi' => 'AIM',
	'yim_lofi' => 'YIM',
	'msnm_lofi' => 'MSN',
	'quick_lofi' => 'Hitri odgovor',
	'new_pm_lofi' => 'Poslji ZS',
//End Lo-Fi Mod

// Retroactive Signature MOD
	'Retro_sig' => 'Dodaj podpis v moje prejsnje objave',
	'Retro_sig_explain' => 'Ce dodajate/urejate svoj podpis, phpBB to doda v nove objave',
	'Retro_sig_checkbox' => 'Oznacite tukaj za prikaz podpisa v prejsnjih objavah',
// End Retro Sig MOD

	'legend' => 'Legenda: ',
	'users' => 'Uporabniki',
//added to autogroup mod
	'No_more' => 'Uporabnikov se ne sprejema vec',
	'No_add_allowed' => 'Samodejno dodajanje s strani uporabnikov ni dovoljeno',
	'Join_auto' => 'Tej skupini se lahko pridružis, ker stevilo objav ustreza zahtevam',

// merge topics
	'Merge' => 'Združi',
	'Merge_topic' => 'Združi s temo',
	'Topics_Merged' => 'Izbrane teme so združene.',
	'No_Topics_Merged' => 'Nobena tema ni združena.',
	'Confirm_merge_topic' => 'Ste prepricani, da želite združiti izbrane teme?',

	'Downloads' => 'Prenosi',

// Start add - Bin Mod
	'Move_bin' => 'Premakni to temo v kos za smeti',
	'Topics_Moved_bin' => 'Izbrana tema je bila premaknjena v kos za smeti.',
	'Bin_disabled' => 'Kos za smeti je onemogocen',
	'Bin_recycle' => 'Kos za smeti',
// End add - Bin Mod
	'Recent_topics' => 'Zadnje teme', // Recent Topics

	'Topics_Title_Edited' => 'Naslovi izbranih tem so bili spremenjeni.',
	'Edit_title' => 'Urejanje naslovov',
	'PM' => 'ZS',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'IP naslov samo za moderatorje',
	'Registered_ip_address' => 'Registrirani IP naslovi',
	'Registered_hostname' => 'Registrirani hostname',
	'Other_registered_ips' => 'Drugi shranjeni uporabniki na %s', //%s is the IP address
	'Other_posted_ips' => 'IP naslovi, s katerih je uporabnik objavljal',
	'Search_ip' => 'Isci objave po IP naslovu',
	'Search_ip_explain' => 'Vnesi IP naslove v obliki npr <u>127.0.0.1</u> -- lahko uporabis tudi znak * kot nadomestek za druge znake,npr <u>127.*.*.1</u>',
	'IP' => 'IP',
	'Whois' => 'Whois',
	'Browser' => 'Brskalnik',
	'No_other_registered_ips' => 'Ni registriranih uporabnikov s tem IP naslovom.',
	'No_other_posted_ips' => 'Ta uporabnik ni objavil niti ene objave.',
	'Not_recorded' => 'Ni zabeleženo',
	'Logins' => 'Vpisi',
	'No_logins' => 'Za tega uporabnika ni zabeležen niti en vpis.',
// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'Klikni za ogled slike v izvirni velikosti',
	'LIW_click_image_explain' => 'Klikni za ogled lsike v izvirni velikosti',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => 'Album',
	'Personal_Gallery' => 'Osebna galerija',
	'Personal_Gallery_Of_User' => 'Osebna galerija uporabnika %s',
	'Personal_Gallery_Of_User_Profile' => 'Osebna galerija uporabnika %s (%d slik)',
	'Show_All_Pic_View_Mode_Profile' => 'Prikaži vse slike iz osebne galerije uporabnika %s (brez podkategorij)',
	'Not_allowed_to_view_album' => 'Oprostite, nimate dovoljenj za ogled tega albuma.',
	'Not_allowed_to_upload_album' => 'Oprostite, nimate dovoljenja za za uvrstitev slik/e v album. Za vec informacij kontaktirajte administratorja.',
	'Album_empty' => 'V albumu ni nobenih slik<br />Klikni na <b>Dodaj novo sliko</b> na tej strani za dodajanje slike.',
	'Album_empty2' => 'V albumu ni slik.',
	'Upload_New_Pic' => 'Dodaj novo sliko.',
	'Pic_Title' => 'Ime slike',
	'Pic_Title_Explain' => 'Pomembno je poimenovati slike, da bi ostali vedeli za kaj gre, ne da bi si jo ogledali.',
	'Pic_Upload' => 'Dodaj sliko',
	'Pic_Upload_Explain' => 'Dovoljeni formati so JPG, GIF in PNG, maksimalna velikost je %s bajtov, maksimalne dimenzije %sx%s pikslov.',
	'Album_full' => 'Oprostite, album je dosegel maksimalno stevilo slik. Kontaktirajte administratorja albuma za vec informacij.',
	'Album_upload_successful' => 'Hvala, vasa slika je uspesno dodana.',
	'Click_return_album' => 'Klikni %tukaj%s za vrnitev na album.',
	'Invalid_upload' => 'Neveljavno nalaganje slike<br /><br />Vasa slika je prevelika ali ni v primernem formatu.',
	'Image_too_big' => 'Oprostite, vasa slika je prevelika.',
	'Uploaded_by' => 'Sliko je naložil',
	'Category_locked' => 'Oprostite, ne morete dodati slike v to kategorijo ker jo je administrator zaklenil. Kontaktirajte administratorja albuma za vec informacij.',
	'View_Album_Index' => 'Seznam albumov',
	'View_Album_Personal' => 'Pregled osebnega albuma uporabnika',
	'View_Pictures' => 'Pregled slik ali objavljanje komentarjev v albumu',
	'Album_Search' => 'Iskanje albuma',
	'Pic_Name' => 'Ime slike',
	'Description' => 'Opis',
	'Search_Contents' => ' ki vsebuje: ',
	'Search_Found' => 'Najdeno ',
	'Search_Matches' => 'Zadetki:',
// Mighty Gorgon - Full Album Pack - END

// News
	'xs_latest_news' => 'Zadnje novice',
	'xs_no_news' => 'Ni novic.',
	'xs_news_version' => 'XS verzija novic: %s',
	'xs_news_ticker_feed' => 'XML Feed Izvor: %s',
	'xs_no_ticker' => 'Ni novic definiranih s tickerjem, pojdite v ACP za ustvarjanje.',
	'xs_news_ticker_title' => 'Ticker novic',
	'xs_news_tickers_title' => 'Tickerji novic',
	'xs_news_item_title' => 'Novica',
	'xs_news_items_title' => 'Novice2',
	'hide' => 'Skrij',
	'show' => 'Prikaži',
	'Welcome' => 'Dobrodosli',
	'birthdays' => 'Rojstni dnevi',

//Battle of the Sexes
	'male_zero_total' => '<b>0</b> moskih uporabnikov', // # registered male users
	'male_total' => '<b>%d</b> moskih uporabnikov', // # registered male users
	'male_one_total' => '<b>%d</b> moski uporabnik', // # registered male users
	'female_zero_total' => '<b>0</b> ženskih uporabnic', // # registered female users
	'female_total' => '<b>%d</b> ženskih uporabnic', // # registered female users
	'female_one_total' => '<b>%d</b> ženska uporabnica', // # registered female users
	'unknown_total' => '& <b>%d</b> Neznan uporabnik',
	'unknown_one_total' => '& <b>%d</b> Neznani uporabniki',
	'unknown_zero_total' => '',
	'battle_of_sexes' => 'Spopad spolov: ',

	'who_viewed' => 'Temo si je ogledal/a',
	'BoardRules' => 'Pravila',

	'View_post' => 'Ogled objave',
	'Post_review' => 'Pregled objave',
	'View_next_post' => 'Ogled naslednje objave',
	'View_previous_post' => 'Ogled prejsnje objave',
	'No_newer_posts' => 'Na forumu ni novih objav',
	'No_older_posts' => 'Na forumu ni starejsih objav',

	'StaffSite' => 'O Ekipi',
	'Staff_level' => array('Administrator', 'Moderator'),
	'Staff_forums' => 'Forumi',
	'Staff_stats' => 'Statistike',
	'Staff_user_topic_day_stats' => '%.2f tem dnevno', // %.2f = topics per day
	'Staff_period' => 'že %d dni', // %d = days
	'Staff_contact' => 'Kontakti',
	'Staff_messenger' => 'Messenger',
// Start Edit Notes MOD
	'Edit_notes' => 'Uredi zabeležko',
	'Delete_note' => 'Izbrisi zabeležko',
	'Edited_by' => 'Urejal:',
	'Confirm_delete_edit_note' => 'Ali ste prepricani, da želite brisati zabeležko?',
	'Edit_note_deleted' => 'Zabeležka je uspesno izbrisana.',
// End Edit Notes MOD
//Referrers Mod
	'Referrers' => 'Http napotitelj',
	'Viewing_Referrers' => 'Ogled napotiteljev',
//Referrers Mod End

	'Recent_topics' => 'Zadnje teme',
	'Recent_today' => 'Danes',
	'Recent_yesterday' => 'Vceraj',
	'Recent_last24' => 'Zadnjih 24 ur',
	'Recent_lastweek' => 'Prejsnji teden',
	'Recent_lastXdays' => 'Zadnjih %s dni',
	'Recent_last' => 'Zadnji',
	'Recent_days' => 'Zadnji dnevi',
	'Recent_first' => 'Zacel %s',
	'Recent_first_poster' => '%s',
	'Recent_select_mode' => 'Tip izbire:',
	'Recent_showing_posts' => 'Prikaz objav:',
	'Recent_title_one' => '%s tema %s', // %s = topics, %s = sort method
	'Recent_title_more' => '%s teme %s', // %s = topics, %s = sort method
	'Recent_title_today' => ' od danes',
	'Recent_title_yesterday' => ' od vceraj',
	'Recent_title_last24' => ' v zadnjih 24 urah',
	'Recent_title_lastweek' => ' iz prejsnjega tedna',
	'Recent_title_lastXdays' => ' v zadnjih %s dneh', // %s = days
	'Recent_no_topics' => 'Ne najdem nobene teme.',
	'Recent_wrong_mode' => 'Izbrali ste napacen tip.',
	'Recent_click_return' => 'Klikni %tukaj%s za vrnitev na prejsnjo stran.',

	'Profile_view_option' => 'Dodatno okno za pregled profila',
	'Profile_viewed' => 'Ogled mojega profila',

// BEGIN Disable Registration MOD
	'registration_status' => 'Oprostite, registracija je trenutno onemogocena. Prosimo, poskusite kasneje.',
// END Disable Registration MOD

	'PostHighlight' => 'Poudari',
	'QuickQuote' => 'Hitro citiranje',
	'Randomquote' => 'Nakljucno citiranje',

// Mod User CP Organize
	'Cpl_Navigation' => 'Nadzorna plosca',
// 'Cpl_Settings_Options' => 'Nastavitve in možnosti',
	'Cpl_Settings_Options' => 'Nastavitve',
	'Cpl_Board_Settings' => 'Nastavitve Portala',
	'Cpl_NewMSG' => 'Poslji novo sporocilo',
	'Cpl_Click_Return_Cpl' => 'ali klikni %tukaj%s za vrnitev na Nadzorno plosco',
	'Cpl_Personal_Profile' => 'Osebni profil',
	'Cpl_More_info' => 'Narocanje',

	'Forbidden_characters' => 'Dovoljene crke in simboli za uporabnisko ime so a-z, 0-9, -, _ in presledek.',

	'Topics_per_page' => 'Teme po straneh',
	'Posts_per_page' => 'Objave po straneh',
	'Hot_threshold' => 'Priljubljene objave',

	'Mod_CP_first_post' => 'Prva objava',
	'Mod_CP_topic_count' => '<b>%s</b> najdena tema.',
	'Mod_CP_topics_count' => '<b>%s</b> najdenih tem.',
	'Mod_CP_no_topics' => 'Ni najdenih tem.',
	'Mod_CP_sticky' => 'Lepljivo',
	'Mod_CP_announce' => 'Obvestilo',
	'Mod_CP_global' => 'Naredi splosno',
	'Mod_CP_normal' => 'Naredi navadno',
	'Display_sticky' => 'Lepljivo',
	'Display_announce' => 'Obvestilo',
	'Display_global' => 'Splosno obvestilo',
	'Display_poll' => 'Anketa',
	'Display_shadow' => 'Premaknjeno',
	'Display_locked' => 'Zaklenjeno',
	'Display_unlocked' => 'Odklenjeno',
	'Display_unread' => 'Neprebrano',
	'Display_unanswered' => 'Neodgovorjeno',
	'Display_all' => 'Vse',
	'Mod_CP_confirm_delete_polls' => 'Ste prepricani, da želite brisati anketo?',
	'Mod_CP_poll_removed' => 'Izbrana anketa je uspesno odstranjena iz teme.',
	'Mod_CP_polls_removed' => 'Izbrane ankete so uspesno odstranjene iz teme.',
	'Mod_CP_topic_removed' => 'Izbrana tema je uspesno izbrisana.',
	'Mod_CP_topic_moved' => 'Izbrana tema je premaknjena iz <b>%s</b> v <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topics_moved' => 'Izbrane teme so premaknjene iz <b>%s</b> v <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topic_locked' => 'Izbrana tema je zaklenjena.',
	'Mod_CP_topic_unlocked' => 'Izbrana tema je odklenjena.',
	'Mod_CP_topics_sticked' => 'Izbrane teme so lepljive.',
	'Mod_CP_topic_sticked' => 'Izbrana tema je lepljiva.',
	'Mod_CP_topics_announced' => 'Izbrane teme so zdaj obvestila.',
	'Mod_CP_topic_announced' => 'Izbrana tema je zdaj obvestilo.',
	'Mod_CP_topics_globalized' => 'Izbrane teme so zdaj splosna obvestila.',
	'Mod_CP_topic_globalized' => 'Izbrana tema je zdaj splosno obvestilo.',
	'Mod_CP_topics_normalized' => 'Izbrane teme so zdaj navadna obvestila.',
	'Mod_CP_topic_normalized' => 'Izbrana tema je zdaj navadno obvestilo.',
	'Mod_CP_click_return_topic' => 'Klikni %tukaj%s za vrnitev na temo ali %tukaj%s za novo temo.',

	't_starter' => 'Ne morete se zahvaliti sami sebi',
	'Watched_Topics' => 'Spremljane teme',
	'No_Watched_Topics' => 'Ne spremljate nobene teme',
	'Watched_Topics_Started' => 'Spremljano temo je zacel',
	'Watched_Topics_Stop' => 'Nehaj spremljati temo',

	'Stop_watching_forum' => 'Nehaj spremljati ta forum',
	'Start_watching_forum' => 'Spremljaj objave v tem forumu',
	'No_longer_watching_forum' => 'Tega foruma ne spremljate vec.',
	'You_are_watching_forum' => 'Zdaj spremljate ta forum.',

	'UCP_SubscForums' => 'Seznam narocnikov na forum',
	'UCP_NoSubscForums' => 'Niste naroceni na forume',
	'UCP_SubscForums_Flag' => 'Zastava',
	'UCP_SubscForums_Forum' => 'Forum',
	'UCP_SubscForums_Forum_subscribed' => 'Narocniki foruma',
	'UCP_SubscForums_Forum_already_subscribed' => 'Na ta forum ste že naroceni',
	'UCP_SubscForums_Click_return_forum' => 'Klikni %tukaj%s za vrnitev na forum',
	'UCP_SubscForums_Topics' => 'Teme',
	'UCP_SubscForums_Posts' => 'Objave',
	'UCP_SubscForums_LastPost' => 'Zadnja objava',
	'UCP_SubscForums_UnSubscribe' => 'Prekini narocanje',
	'UCP_SubscForums_NewTopic' => 'Nova tema',

	'profile_main' => 'Splosne informacije',
	'profile_explain' => 'Dobrodosli na nadzorno plosco uporabnika. Tukaj lahko spremljate, ogledujete ali spreminjate vas profil, možnosti, narocene forume in teme. Drugim uporabnikom lahko posiljate sporocila (ce je to dovoljeno).',
	'your_activity' => 'Vas profil',

	'Gravatar' => 'Gravatar',
	'Gravatar_explain' => 'Ce imate <a href="http://www.gravatar.com" target="_blank">gravatar</a>, vnesite email, s katerim ste se registrirali.',

	'private_msg_review_title' => 'Odgovor na sporocilo',
	'private_msg_review_error' => 'Napaka pri iskanju zasebnega sporocila!',

	'BSH_Viewing_Topic' => 'Ogled teme: %t%',
	'BSH_Viewing_Post' => '%sogleduje objavo%s',
	'BSH_Viewing_Profile' => 'Viewing %u%\'s Profile',
	'BSH_Viewing_Groups' => '%sOgled skupine%s',
	'BSH_Viewing_Forums' => 'Ogled foruma: %f%',
	'BSH_Index' => '%sOgled Indeksa%s',
	'BSH_Searching_Forums' => '%sIskanje po forumih%s',
	'BSH_Viewing_Onlinelist' => '%sOgled prijavljenih uporabnikov%s',
	'BSH_Viewing_Messages' => '%sOgled zasebnih sporocil%s',
	'BSH_Viewing_Memberlist' => '%sOgled seznama uporabnikov%s',
	'BSH_Login' => '%sse vpisuje%s',
	'BSH_Logout' => '%sse odjavlja%s',
	'BSH_Editing_Profile' => '%sureja profil%s',
	'BSH_Viewing_ACP' => '%sOgled ACPja%s',
	'BSH_Moderating_Forum' => '%sureja forume%s',
	'BSH_Viewing_FAQ' => '%sOgled FAQa%s',
	'BSH_Viewing_Category' => 'Ogled kategorije: %c%',

	'Board_statistic' => 'Statistika baze',
	'Database_statistic' => 'Statistika baze podatkov',
	'Version_info' => 'Informacije o verziji',
	'Thereof_deactivated_users' => 'stevilo neaktivnih uporabnikov',
	'Thereof_Moderators' => 'Skupno stevilo moderatorjev',
	'Thereof_Junior_Administrators' => 'Skupno stevilo mlajsih administratorjev',
	'Thereof_Administrators' => 'Skupno stevilo administratorjev',
	'Deactivated_Users' => 'Uporabniki, ki cakajo na aktivacijo',
	'Users_with_Mod_Privileges' => 'Uporabniki z moderatorskimi privilegiji',
	'Users_with_Junior_Admin_Privileges' => 'Uporabniki s privilegiji mlajsih administratorjev',
	'Users_with_Admin_Privileges' => 'Uporabniki privilegiji administratorjev',
	'DB_size' => 'velikost baze podatkov',


	'Download_topic' => 'Prenesi temo',
	'Always_swear' => 'Vedno dovoli kletvice',

	'Shoutbox' => 'Kricalnik',
	'Shoutbox_date' => ' d m l h:i:s',
	'Shout_censor' => 'Besedilo je izbrisano!',
	'Shout_refresh' => 'Osveži',
	'Shout_text' => 'Vase besedilo',
	'Viewing_Shoutbox' => 'Ogledovanje kricalnika',
	'Censor' => 'Cenzor',

	'Edit_post_time' => 'Spremeni cas objave',
	'Edit_post_time_xs' => 'Spremeni',
	'Topic_time_xs' => 'Cas teme',
	'Post_time' => 'Cas objave',
	'Post_time_successfull_edited' => '<b>Cas je uspesno spremenjen.</b></span><br /><span class="postdetails">To okno se bo cez 3 sekunde zaprlo.',

	'staff_message' => 'Sporocilo do ekipe',

	'Board_Rules' => 'Pravila foruma',
	'Forum_Rules' => 'Pravila foruma',
	'Show_avatars' => 'Prikazuj prikazne slike v temi',
	'Show_signatures' => 'Prikazuj podpis v temi',
	'Acronym' => 'Akronim',
	'Acronyms' => 'Akronimi',
	'User_Number' => 'Uporabnik st.',
	'Member_Count' => 'Uporabniki',
	'Reply_message' => 'Odgovorjeno sporocilo',
	'Click_read_topic' => 'Klikni %tukaj%s za branje', // %s's here are for uris, do not remove!
	'Create_with_generator' => 'Izdelaj si sliko z Generatorjem prikaznih slik',
	'View_avatar_generator' => 'Generator prikaznih slik',
	'Adv_Search' => 'Napredno iskanje',
	'Search_Explain' => 'Iskanje znotraj foruma',
	'Login_attempts_exceeded' => 'Maksimalno stevilo %s je doseženo. V naslednjih %s minutah se ne morete prijavljati.',
	'Please_remove_install_contrib' => 'Prosim, preverite, ali ste zagotovo izbrisali install/ in contrib/ mapo ',
	'Search_Engines' => 'Iskalniki (Engine Bots):',
	'Bots_browsing_forum' => 'Iskalniki (Engine Bots), ki gledajo ta forum:',
	'Debug_On' => 'Debug On',
	'Debug_Off' => 'Debug Off',
	'Page_Generation_Time' => 'Cas ustvarjanja strani:',
	'Memory_Usage' => 'Poraba spomina',
	'SQL_Queries' => 'SQL poizvedbe',
	'Search_new2' => 'Nove objave',
	'Search_new_p' => 'Objave od zadnjega obiska',
	'Show_In_Portal' => 'Prikaži na portalu',
	'Not_Auth_View' => 'Nimate dovoljenja za ogled te strani.',
	'Site_Hist' => 'Zgodovina strani',
	'Links' => 'Povezave',
	'Print_View' => 'Verzija za tiskanje',
	'Browsing_topic' => 'Uporabniki, ki gledajo to temo:',
	'Sudoku' => 'Igra Sudoku',
	'Bookmarks' => 'Zaznamki',
	'Set_Bookmark' => 'Postavi zaznamek za to temo',
	'Remove_Bookmark' => 'Odstrani zaznamek s te teme',
	'No_Bookmarks' => 'Niste dolocili nobenih zaznamkov',
	'Always_set_bm' => 'Samodejno postavi zaznamek ob vsaki objavi',
	'Found_bookmark' => 'Postavili ste %d zaznamek.', // eg. Search found 1 match
	'Found_bookmarks' => 'Postavili ste %d zaznamkov.', // eg. Search found 24 matches
	'More_bookmarks' => 'Vec zaznamkov ...', // For mozilla navigation bar

//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => 'Kaj je to?',
	'Rss_news_help_title' => 'Pomoc za bralnik RSS',
	'Rss_news_help_header' => 'Kaj so to feeds in kako jih uporabljam?',
	'Rss_news_help_explain' => 'A feed is a regularly updated summary of certain Web contents, which have links to the complete version of respective contents. If you subscribe the feed of a Website with a feed reader, you will get all new contents of these Website in a summary.<br /><br /><b>Attention:</b> For subscribing Website feeds a <a href="http://www.rssowl.org/" target="new">Feed-Reader</a> must be used. When clicking on a link to a RSS or an ATOM feed otherwise a side with an unformated text confusion appears in the Browser.',
	'Rss_news_help_header_2' => '<b>Kaj je to RSS in Atom?</b>',
	'Rss_news_help_explain_2' => 'RSS and Atom are two formats for feeds. Most feed readers support both formats. At present by us atom 0.3 and RSS 2.0 are supported.',
	'Rss_news_help_header_3' => '<b>Kako uporabljam News feeds?</b>',
	'Rss_news_help_explain_3' => 'At first you need a feed reader, you get that for example by <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />Afterwards you can in the program:<br /><br /><b>1.</b> Search for RSS links on our side. (Extras => Search for new feeds on web page) <b>or</b><br /><b>2.</b> add one of the following feed URL`s:',
	'L_url_rss_explain' => 'URL za vse teme foruma.',
	'L_url_rss_news_explain' => 'URL samo za novice na forumu.',
	'L_url_rss_atom_explain' => 'URL za Atom RSS Feed.',
	'Rss_news_help_rights' => 'We reserve ourselves the right, to terminate the use of feeds at any time after our discretion. Our forum feeds may not be further-driven out.',
	'Rss_news_feeds' => 'RSS News Feeds',

	'Quick_Reply' => 'Hitri odgovor',
	'Mod_CP_sticky2' => 'Lepljiva tema',
	'Mod_CP_announce2' => 'Obvestilo',
	'Mod_CP_global2' => 'Naredi splosno obvestilo',
	'Mod_CP_normal2' => 'Naredi navadno obvestilo',

	'Search_Flood_Error' => 'Ne morete iskati takoj po zadnjem iskanju. Prosimo, da poskusite malo kasneje.',

// Custom Profile Fields MOD
	'custom_field_notice' => 'To polje je ustvaril administrator. Lahko je vidno, a ni nujno da tudi je. Oznaceno z * zahteva izpolnjeno polje.',
	'and' => ' in ',
// END Custom Profile Fields MOD

	'dsbl' => 'Vas IP naslov je na <a href="%url%">crnem seznamu DNSja</a>. <br />Poskus registracije je prepovedan.',
	'Emails_Only_To_Admins_Error' => 'Lahko uporabite možnost emailanja za posiljanje emaila samo administratorjem.',
	'Wordgraph' => 'Wordgraph',
	'Viewing_wordgraph' => 'Ogled Wordgrapha',
	'Links_For_Guests' => '<b>Za ogled tega linka morate biti prijavljeni</b>',
	'New' => 'N',
	'New_Label' => 'Nove teme',
	'New_Messages_Label' => 'Nove teme',
	'Show_Personal_Gallery' => 'Prikaži osebno galerijo uporabnika',
	'Login_Status' => 'Online Status',
	'Login_Hidden' => 'Skrit',
	'Login_Visible' => 'Viden',
	'Login_Default' => 'Privzeti',
	'Errors_Not_Found' => 'Naslov, ki ga iscete, ni na tem strežniku',
	'Errors_000' => 'Neznana napaka',
	'Errors_000_Full' => 'Naslov se vraca kot neznana napaka v kodi.<br />Napaka je zabeležena v dnevniski datoteki in preverili bomo, za kaksno težavo gre.',
	'Errors_400' => 'Napaka 400',
	'Errors_400_Full' => 'Neveljaven naslov.',
	'Errors_401' => 'Napaka 401 - Napaka v pooblastilu',
	'Errors_401_Full' => 'To napako vam javlja zato, ker niste pooblasceni za dostop do tega naslova.',
	'Errors_403' => 'Napaka 403',
	'Errors_403_Full' => 'Dostop do tega naslova je prepovedan.',
	'Errors_404' => 'Napaka 404 - Datoteka ni najdena',
	'Errors_404_Full' => 'Naslov, ki ga iscete, ni dosegljiv na tem strežniku. Morda ste se zmotili v naslovu ali pa je tisto, kar iscete,. bilo izbrisano.',
	'Errors_500' => 'Napaka 500 - Napaka v konfiguraciji',
	'Errors_500_Full' => 'Naslov, ki ste ga iskali, se vraca kot konfiguracijska napaka.<br />Napaka je bila zabeležena v dnevniski datoteki in preverili bomo, za kaksno težavo gre.',
	'Errors_Email_Subject' => 'Napaka: ',

	'Errors_Email_Addrress_Prefix' => 'xs_napaka',
	'Errors_Email_Body' => 'Na vasem forumu se je pojavila napaka. Prosimo, preverite dnevnisko datoteko.',
	'Remote_avatar_no_image' => 'Slika %s ne obstaja',
	'Remote_avatar_error_filesize' => 'Slika je prevelika za uporabo kot prikazno sliko (%d Bytes)',
	'Remote_avatar_error_dimension' => 'Dimenzije prikazne slike so prevelike (%d x %d pikslov)',
	'How_Many_Chatters' => 'Trenutno je v klepetu <b>%d</b> uporabnikov.',
	'Who_Are_Chatting'  => '<b>%s</b>',
	'Click_to_join_chat' => 'Kliknite za vstop v klepet',
	'ChatBox' => 'Klepetalnik',
	'log_out_chat' => 'Uspesno ste se odjavili iz klepeta',
	'Send' => 'Poslji',
	'Login_to_join_chat' => 'Vpisite se za vstop v klepet',

// Hacks List
/* General */
	'Hacks_List' => 'Hitre povezave',
	'Page_Desc' => 'Ta modul vam omogoca dodajati/spreminjati/brisati seznam trenutnih zaslug za hacks/mods, ki so namesceni na vas forum. Zasluge se uporabnikom prikažejo, ko pbiscejo stran credits.php.',
	'Deleted_Hack' => 'Izbrisi zaslug za mod %s s seznama.<br />',
	'Updated_Hack' => 'Posodobljena zasluga za mod %s.<br />',
	'Added_Hack' => 'Dodan info za mod %s.<br />',
	'Status' => 'Status',
	'No_Website' => 'Internetna stran je nedosegljiva.',
	'No_Hacks' => 'Ni zaslug za prikaz.',
	'Add_New_Hack' => 'Dodaj novo zaslugo',
	'User_Viewable' => 'Skrij seznam pred uporabniki?',
	'Hack_Name' => 'Ime moda',
//	'Description' => 'Opis',
	'Required' => 'Obvezno',
	'Author_Email' => 'Email avtorja',
	'Version' => 'Verzija',
	'Download_URL' => 'Lokacija za prenos',

/* Errors */
	'Error_Hacks_List_Table' => 'Error querying the Hacks List Table.',
	'Required_Field_Missing' => 'Niste vnesli vseh potrebnih podatkov.',
	'Error_File_Opening' => 'Datoteke ni mogoce odpreti: %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => 'Najnovejsa slika', // Album Addon
	'Random_pic' => 'Nakljucna slika', // Album Addon
	'Click_enlarge_pic' => 'Klikni na sliko za povecavo',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => 'Zadnji uporabljeni IP',
	'Last_Used_OS' => 'Zadnji uporabljeni operacijski sistem',
	'Last_Used_Browser' => 'Zadnji uporabljeni brskalnik',
	'Last_Used_Referer' => 'Zadnji uporabljeni napotitelj',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
	'Users_Admins' => 'Administratorji',
	'Users_Mods' => 'Moderatorji',
	'Users_Global_Mods' => 'Splosni Moderatorji',
	'Users_Regs' => 'Uporabniki',
	'Users_Guests' => 'Obiskovalci',
	'Users_Hidden' => 'Skriti',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Style' => 'Style',
	'User_Contacts' => 'Contacts',
	'Memberlist_Users_Display' => 'Users per page:',
	'SORT_FAST' => 'Fast',
	'SORT_STANDARD' => 'Standard',
	'SORT_RANK' => 'Rank',
	'SORT_STAFF' => 'Staff',
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
	'Staff' => 'Osebje',
	'Rank' => 'Status',
	'Rank_Header' => 'Statusi',
	'Rank_Image' => 'Slika statusa',
	'Rank_Posts_Count' => 'Avtomatski status po stevilu objav',
	'Rank_Days_Count' => 'Avtomatski status po dneh',
	'Rank_Min_Des' => 'Najmanj objav/dnevno',
	'Rank_Min_M' => 'Najmanj objav',
	'Rank_Max_M' => 'Najvec objav',
	'Rank_Min_D' => 'Najmanj dni',
	'Rank_Max_D' => 'Najvec dni',
	'Rank_Special' => 'Posebni status',
	'Rank_Special_Guest' => 'Posebni status status za obiskovalce',
	'Rank_Special_Banned' => 'Posebni status za izkljucene',
	'Current_Rank_Image' => 'Trenutna slika statusa',
	'No_Rank' => 'Status ni dolocen',
	'No_Rank_Image' => 'Ni slike statusa',
	'No_Rank_Special' => 'Posebni status ni dolocen',
	'Memberlist_Administrator' => 'Administrator',
	'Memberlist_Moderator' => 'Moderator',
	'Memberlist_User' => 'Uporabnik',
	'Guest_User' => 'Obiskovalec',
	'Banned_User' => 'Izkljucen',
	'Rank1_title' => 'Status 1 Naslov',
	'Rank2_title' => 'Status 2 Naslov',
	'Rank3_title' => 'Status 3 Naslov',
	'Rank4_title' => 'Status 4 Naslov',
	'Rank5_title' => 'Status 5 Naslov',
// Mighty Gorgon - Multiple Ranks - END

// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => 'Meni',
	'MAIN_LINKS' => 'Glavne povezave',
	'NEWS_LINKS' => 'Novice',
	'INFO_LINKS' => 'Info',
	'USERS_LINKS' => 'Uporabniki in skupine',
	'SELECT_STYLE' => 'Style',
	'SELECT_LANG' => 'Jezik',
	'RSS_FEEDS' => 'RSS Feeds',
	'SPONSORS_LINKS' => 'Sponzorji',
	'TOOLS_LINKS' => 'Orodja',
	'HelpDesk' => 'Pomoc',
	'AvatarGenerator' => 'Avatar Generator',
	'DBGenerator' => 'SQL to PHP Generator ',

	'LINK_ACP' => 'Admin Panel',
	'LINK_CMS' => 'CMS',
	'LINK_HOME' => 'Domov',
	'LINK_PROFILE' => 'Profil',
	'LINK_FORUM' => 'Forum',
	'LINK_BOARDRULES' => 'Pravila',
	'LINK_FAQ' => 'FAQ',
	'LINK_SEARCH' => 'Iskalnik',
	'LINK_SITEMAP' => 'Sitemap',
	'LINK_ALBUM' => 'Album',
	'LINK_CALENDAR' => 'Koledar',
	'LINK_DOWNLOADS' => 'Downloads',
	'LINK_BOOKMARKS' => 'Zaznamki',
	'LINK_DRAFTS' => 'Drafts',
	'LINK_UPLOADED_IMAGES' => 'Naložene slike',
	'LINK_AJAX_SHOUTBOX' => 'Chat',
	'LINK_LINKS' => 'Povezave',
	'LINK_CONTACT_US' => 'Stik z nami',
	'LINK_SUDOKU' => 'Sudoku',

	'LINK_NEWS_CAT' => 'Kategorije novic',
	'LINK_NEWS_ARC' => 'Arhiv novic',
	'LINK_NEW_MESSAGES' => 'Nove objave',
	'LINK_DISPLAY_UNREAD_S' => 'Neprebrana',
	'LINK_DISPLAY_MARKED_S' => 'Oznaka',
	'LINK_DISPLAY_PERMANENT_S' => 'Stalno',
	'LINK_DIGESTS' => 'Vzorci',

	'LINK_CREDITS' => 'Tocke',
	'LINK_REFERERS' => 'HTTP Referers',
	'LINK_VIEWONLINE' => 'Prisotni uporabniki',
	'LINK_STATISTICS' => 'Statistika',
	'LINK_DELETE_COOKIES' => 'Brisanje piskotkov',

	'LINK_MEMBERLIST' => 'Clani',
	'LINK_USERGROUPS' => 'Skupine uporabnikov',
	'LINK_RANKS' => 'Rangi',
	'LINK_STAFF' => 'Staff',
// Mighty Gorgon - Nav Links - END
	'Activity' => 'Dejavnost',
	'Games' => 'Igre',
	'Trohpy' => 'Igra Trophies',
	'quick_links_games' => 'Meni iger',

	'By' => 'Od',
	'No_Icon_Image' => 'Ni ikone',
	'Change_Style' => 'Videz',
	'Change_Lang' => 'Jezik',
	'Permissions_List' => 'Seznam dovoljenj',


//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
	'Nav_Separator' => '&nbsp,&raquo,&nbsp,',
	'WeatherForecast' => 'Vremenska napoved',
	'ErrorNotFound' => 'Datoteka ni najdena!',
	'MGC_Users_Online' => 'MGC uporabniki online',
	'MGC_User_Servertime' => 'Datum',
	'MGC_User_Nickname' => 'Vzdevek',
	'MGC_User_Server' => 'Strežnik',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'MGC Verzija',

	'Country_Flag' => 'Zastava države',
	'Select_Country' => 'Izberi državo',
	'Extra_profile_info' => 'Dodatne informacije profila',
//	'Extra_profile_info_explain' => 'Vnesete lahko dodatne informacije o sebi ali vasih hobijih. Lahko dodate tudi fotografije. Lahko uporabljate BBcode za objave ali podpis. Omejitev znakov je <b>%d</b> (ce je 0, omejitve ni)',
	'Extra_window' => 'Odpri v posebnem oknu',
	'Extra_too_long' => 'Tvoje dodatno polje je predolgo (Dovoljenih je najvec<b>%d</b> simbolov)',
	'UserLike' => 'VŠec mi je',
	'UserDisLike' => 'Ni mi vsec',
	'UserLikeIns' => 'Tri stvari, ki so mi vsec',
	'UserDisLikeIns' => 'Tri stvari, ki jih ne maram',
	'UserPhone' => 'Telefon',
	'UserSport' => 'Šport/Mostvo',
	'UserMusic' => 'Glasba',
	'UserNoInfo' => 'Ni informacij',
	'Last_Seen' => 'Zadnji obisk',
// New MG - END


// MG CMS - BEGIN
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'CMS upravljanje',
	'CMS_CONFIG' => 'CMS konfiguracija',
	'CMS_ACP' => 'Uredi to stran',
	'CUSTOM_PAGE' => 'Stran po meri',
// MG CMS - END



	'CPL_REG_INFO_EXPLAIN' => 'Uporabnisko ime, email naslov in geslo',
	'CPL_PROFILE_INFO_EXPLAIN' => 'Splosne kontaktne informacije, messenger, rojstni dan, interesi in druge informacije',
	'CPL_PROFILE_VIEWED_EXPLAIN' => 'Uporabniki, ki so si ogledali vas profil',
	'CPL_AVATAR_PANEL_EXPLAIN' => 'Prikazna slika je mala slicica, povezana z vasim imenom',
	'CPL_SIG_EDIT_EXPLAIN' => 'Tvoj podpis: lahko napisete neko besedilo, ki se bo izpisalo pod vasimi objavami',
	'CPL_PREFERENCES_EXPLAIN' => 'Splosne možnosti glede objav (pisanje/branje)',
	'CPL_BOARD_SETTINGS_EXPLAIN' => 'Splosne nastavitve datuma, videza (stila) in jezika',
	'Calendar_settings_EXPLAIN' => 'Možnosti glede koledarja',
	'Hierarchy_setting_EXPLAIN' => 'Možnosti povezane s podforumi in videzom delitev tem',
	'LOGIN_SEC_EXPLAIN' => 'Ce je vklopljeno, vam ta oddelek omogoca nadzor nad vsemi vasimi prijavami',
	'CPL_OWN_POSTS_EXPLAIN' => 'Isci lastne objave',
	'CPL_OWN_PICTURES_EXPLAIN' => 'Obisci svojo osebno galerijo',
	'CPL_INBOX_EXPLAIN' => 'Dohodna sporocila: vsebuje zasebna sporocila, ki ste jih prejeli',
	'CPL_SAVEBOX_EXPLAIN' => 'Shranjena sporocila: vsebuje zasebna sporocila, ki ste jih shranili',
	'CPL_OUTBOX_EXPLAIN' => 'Odhodna sporocila: vsebuje zasebna porocila, ki ste jih poslali, toda niso bila prebrana',
	'CPL_SENTBOX_EXPLAIN' => 'POslana sporocila: vsebuje zasebna sporocila, ki ste jih poslali in so bila prebrana',
	'CPL_BOOKMARKS_EXPLAIN' => 'Svi bookmarks koje ste obilje&#382;ili u temama',
	'WATCHED_TOPICS_EXPLAIN' => 'Seznam vseh tem, ki jih spremljate',
	'CPL_SUBSCFORUMS_EXPLAIN' => 'Forumi, na katere ste prijavljeni, za pregled novih tem',
	'DIGESTS_EXPLAIN' => 'Povzetki so obcasna email sporocila, ki so poslana samodejno in ki vsebujejo povzetek novih sporocil na forumu',
	'DRAFTS_EXPLAIN' => 'Urejanje osnutkov',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Kricalnik',
	'Ajax_Chat' => 'Klepet',
	'Ajax_Archive' => 'Arhiv klepeta',
	'Shoutbox_flooderror' => 'Ne morete pisati takoj po presnji objavi v Kricalniku. Poskusite malo kasneje.',
	'Shoutbox_no_auth' => 'Oprostite, dostop v Chat le registrirani uporabniki',
	'Shoutbox_loading' => 'Nalaganje Kricalnika ...',
// Errors
	'Shoutbox_unable' => 'Oprostite, tega ni mogoce izvesti. Poskusite znova.',
	'Shoutbox_empty' => 'V bazi podaktov ni sporocil',
	'Shoutbox_no_mode' => 'Izbran je neveljaven mod',
// Archive
	'Shouts' => 'Kriki',
	'Statistics' => 'Statistike',
	'Total_shouts' => 'Skupaj krikov',
	'Stored_shouts' => 'Shranjeni kriki',
	'My_shouts' => 'Moji kriki',
	'Today_shouts' => 'Kriki v zadnjih 24 urah',
	'Top_Ten_Shouters' => '10 najboljsih kricacev',
// Online list
	'Online_total' => 'Skupni sestevek',
	'Online_registered' => 'Uporabniki',
	'Online_guests' => 'Obiskovalci',
	'Who_is_Chatting' => 'Kdo klepeta',
	'Shoutbox_online_explain' => 'Podatek temelji na uporabnikih, aktivnih v zadnjih 30 sekundah',
// Ajax Shoutbox - END

	'Contact_us' => 'Kontaktirajte nas',
	'Contact_us_explain' => 'Na tej strani nam lahko posljete email',
	'Session_invalid' => 'Neveljaven vnos. Prosimo, posljite znova.',

	'Reg_Username_Short' => ' uporabnisko ime je prekratko',
	'Reg_Username_Long' => ' uporabnisko ime je predolgo',
	'Reg_Username_Taken' => ' to uporabnisko ime je zasedeno',
	'Reg_Username_Free' => ' to uporabnisko ime je se na voljo',
	'Reg_PWD_Short' => 'Geslo je prekratko',
	'Reg_PWD_Easy' => 'Geslo je prevec enostavno',
	'Reg_PWD_OK' => 'Geslo je v redu',
	'Reg_Email_Invalid' => ' ta email naslov je neveljaven ali pa je že v bazi podatkov',
	'Reg_Email_OK' => ' ta email naslov je v redu',

// Moved here from lang_adv_time.php
	'time_mode' => 'Casovne nastavitve',
	'time_mode_text' => 'DST razlika je razlika med poletnim casom in normalnim casom v vasi državi (od 0 do 120 minut, ponavadi 60).<br /><br />* Oznaka * pomeni privzeti cas na forumu, ki ga je nastavil administrator.',
	'time_mode_auto' => 'Samodejni ...',
	'time_mode_full_pc' => 'Cas na vasem racunalniku',
	'time_mode_server_pc' => 'Univerzalni cas strežnika, Casovni pas/poletni cas<br /><span STYLE="margin-left: 25">z vasega racunalnika</span>',
	'time_mode_full_server' => 'Lokalni cas na strežniku',
	'time_mode_manual' => 'Rocno ...',
	'time_mode_dst' => 'Poletni cas vklopljen',
	'time_mode_dst_server' => 'S strežnika',
	'time_mode_dst_time_lag' => 'DST razlika',
	'time_mode_dst_mn' => 'min',
	'time_mode_timezone' => 'Casovni pas',

	'dst_time_lag_error' => 'Napaka v DST razliki. Morate vnesti minute med 0 i 120.',

	'dst_enabled_mode' => ' [DST vklopljen]',
	'full_server_mode' => 'Cas se usklajuje s casom na forumu in strežniku',
	'server_pc_mode' => 'Sinhronizacija casa s strežnikom - casovni pas/DST z vasim racunalnikom',
	'full_pc_mode' => 'Cas, usklajen z vasim racunalnikom',

	'Smileys_Per_Page' => 'Smeski na stran',

/* lang_site_hist.php - BEGIN */
	'Site_history' => 'Zgodovina foruma',
	'Month' => 'Mesec',
	'Week_day' => 'Dan u tednu',
	'Not_availble' => 'Nedostopno',
	'Total_users' => 'Najvec uporabnikov',
	'Reg_users' => 'Prijavljeni uporabniki',
	'Hidden_users' => 'Skriti uporabniki',
	'Guests_users' => 'Obiskovalci',
	'New_users' => 'Novi uporabniki',
	'New_topics' => 'Nove teme',
	'New_posts_reply' => 'Objave/Odgovori',
	'Most_online' => 'najvec uporabnikov online %s',
	'Most_online_week' => 'Najvec uporabnikov online v zadnjih 7 dneh',
	'Last_24' => 'Najvec uporabnikov online v zadnjih %s urah',
	'Top_Posting_Users' => 'Uporabniki z najvec objavami',
	'Top_Posting_Users_week' => 'Uporabniki z najvec objavami v tem tednu [%s]',
	'Rank' => 'Status',
	'Percent' => 'Odstotek',
	'Graph' => 'Graf',
	'Top_Visiting_Users' => 'Uporabniki z najvec casa na forumu',
/* lang_site_hist.php - END */

/* lang_referrers.php - BEGIN */
	'Referrers_Title' => 'Upravljanje z napotitelji Http',
	'Referrers_Cleared' => 'Napotitelji pocisceni',
	'Referrers_Clear' => 'Izbrisi vse',
	'Click_Return_Referrers' => 'Klikni %tukaj%s za vrnitev na napotitelje',
	'Referrers' => 'Napotitelji',
	'Referrer_host' => 'Gostitelji napotitelja/ev',
	'Referrer_url' => 'Url napotitelja/ev',
	'Referrer_ip' => 'IP napotitelja/ev',
	'Referrer_hits' => 'Zadetki',
	'Referrer_first' =>'Prvi obisk',
	'Referrer_last' => 'Zadnji obisk',
	'Viewing_Referrers' => 'Ogled napotitelja/ev',
/* lang_referrers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_Days' => '%d Dni',
	'X_Weeks' => '%d Tednov',
	'X_Months' => '%d Mesecev',
	'X_Years' => '%d Let',

	'Confirm_delete_user' => 'Ste prepricani, da želite izbrisati tega uporabnika?',
	'Prune_no_users' => 'Noben uporabnik ni izbrisan',
	'Prune_users_number' => 'Uporabnik %d je izbrisan:',

	'Prune_user_list' => 'Uporabniki, ki bodo izbrisani',
	'Prune_on_click' => 'Izbrisali boste uporabnika %d. Ste prepricani?',
	'Prune_Action' => 'Kliknite link za potrditev',
	'Prune_users_explain' => 'Na tej strani lahko brisete uporabnike. Lahko izberete eno od treh možnosti: izbris starih uporabnikov, ki niso nikoli nicesar objavili, izbris starih uporabnikov, ki se nikoli niso prijavili (logirali), izbris uporabnikov, ki se nikoli niso oaktivirali.<p/><b>Pozor:</b> to dejanje je nepovratno.',
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => 'Generator prikaznih slik',
	'Available' => 'Dostopne prikazne slike',
	'Random' => 'Nakljucne prikazne slike',
	'Avatar_Text' => 'Prosimo, vnesite besedilo, ki ga želite na vasi prikazni sliki:',
	'Avatar_Preview' => 'Predogled prikazne slike',
	'Your_Avatar' => 'Vasa prikazna slika',
	'Submit_Avatar' => 'Sprejmi prikazno sliko',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Upload_Image_Local' => 'Naloži sliko',
	'Uploaded_Images_Local' => 'Naložene Fotografije',
	'Upload_Image_Local_Explain' => 'Izberite sliko za nalaganje',
	'Uploaded_Image_Success' => 'Slika je uspesno naložena.',
	'Uploaded_Image_BBC' => 'Za nalaganje slike lahko uporabite ta BBCode.',
	'Upload_Image_Empty' => 'Ne morete naložiti nicesar!',
	'Upload_File_Too_Big' => 'Datoteka, ki jo želite naložiti, je prevelika! Najvecja dovoljena velikost:',
	'Upload_File_Type_Allowed' => 'Nalagate lahko samo te tipe datotek',
	'Upload_Insert_Image' => 'Vstavi BBCode',
	'Upload_Close' => 'Zapri',
	'BBCode' => 'BBCode',
	'HTML' => 'HTML',

	'No_News' => 'Ni novic',

	'Email_confirm' => 'Potrdi svoj email naslov',
	'Email_mismatch' => 'Email naslov, ki ste ga vpisali, ni pravi.',

	'View_ballot' => 'Preglej glasovanje',
	'Full_edit' => 'Prestavi na standardno (full) urejanje',
	'Save_changes' => 'Shrani',
	'No_subject' => '(Brez naslova)',
	'Edit_quick_post' => 'Hitro urejanje te objave',
	'AJAX_search_results' => 'Hitro iskanje je naslo %s tem, ki odgovarjajo naslovu vase teme. Kliknite tukaj za pregled teme',
	'AJAX_search_result' => 'Hitro iskanje je naslo eno temo, ki odgovarja naslovu vase teme. Kliknite tukaj za pregled teme',
	'More_matches_username' => 'Vec kot en uporabnik ustreza vasemu iskanju. Izberite uporabnika v tem polju.',
	'No_username' => 'Morate vnesti uporabnisko ime.',
	'AJAX_quick_search_results' => 'Hitro iskanje je naslo %s ustreznih tem.<br />Na desni strani lahko vidite prve rezultate.<br />Kliknite na POGLEJ za popolni seznam.',
	'AJAX_quick_search_result' => 'Hitro iskanje je naslo eno ustrezno temo.<br />Na desni strani lahko vidite rezultate.',

	'Icon_Description' => 'Opis ikone',

	'Feature_Disabled' => 'Ta možnost je izklopljena.',

// Resend Activation - BEGIN
	'Resend_activation_email' => 'Poslji aktivacijski email',
	'Invalid_activation' => 'Uporabniski racun lahko aktivira samo administrator.',
	'No_actkey' => 'Ni aktivacijskega kljuca za vas racun. Prosimo, kontaktirajte administratorja za vec informacij.',
	'Send_actmail_flood_error' => 'Ne morete poslati te zahteve takoj po prejsnji. Prosimo, poskusite kasneje.',
	'Resend_activation_email_done' => 'Aktivacijski email vam je bil poslan. Preverite vas email za nadaljne informacije.',
// Resend Activation - END

	'Bots_Group' => 'Boti',
	'Bots_Color' => 'Barve botov',
	'Active_Users_Group' => 'Aktivni uporabniki',
	'Active_Users_Color' => 'Barva aktivnega uporabnika',
	'Group_Default_Membership' => 'Privzeta skupina',
	'Group_Default_Membership_Explain' => 'Izberite privzeto skupino za uporabnika za dolocanje statusa in barve.',
	'User_Color' => 'Barva uporabnika',
	'User_Color_Explain' => 'Ce ste dolocili barvo za uporabika, bo ta nadomescena z barvo skupine, ce ste dolocili neko skupino tukaje v polju poleg. Uporabite hex kodo brez <b>#</b> Primer: ff0000 je koda za RDECO.',
	'No_Groups_Membership' => 'Ni clanstva',
	'No_Default_Group' => 'Ni privzete skupine',
	'Group_members_updated' => 'Uporabniska skupine je uspesno posodobljena.',
	'Colorize_All' => 'Pobarvaj vse uporabnike',
	'Colorize_Selected' => 'Pobarvaj izbrane',

	'CompanyWho' => 'Kdo smo',
	'CompanyWhere' => 'Kako do nas',
	'CompanyServices' => 'Storitve',
	'CompanyProducts' => 'Proizvodi',

	'ShareThisTopic' => 'Deli dalje to temo',

	'Remove_cookies' => 'Odstrani piskotke s te strani',
	'Cookies_deleted' => 'Vsi piskotki so bili izbrisani. Zdaj ste odjavljeni.<br />Za dokoncanje brisanja morate zapreti brskalnik.',
	'Delete_cookies' => 'Izbrisi piskotke',
	'cookies_confirm' => 'Ste prepricani, da želite brisati vse piskotke za ta forum?<br /><br />To vas bo prav tako odjavilo.',

	'CustomIcy' => 'CustomIcy',

	'Drafts' => 'Osnutki',
	'Drafts_Action' => 'Dejanje',
	'Drafts_Save' => 'Shrani',
	'Drafts_Load' => 'Naloži',
	'Drafts_Saved' => 'Osnutek je shranjen',
	'Drafts_Loaded' => 'Osnutek je naložen',
	'Drafts_No_Drafts' => 'Ni shranjenih osnutkov',
	'Drafts_Delete_Sel' => 'Izbrisi izbrano',
	'Drafts_Save_Question' => '<br /><br />Ste prepricani, da želite to sporocilo shraniti kot osnutek??<br /><br />Upostevajte to, da bo le telo sporocila shranjeno, ostale možnosti bodo izbrisane.',
	'Drafts_Delete_Question' => '<br /><br />Ste prepricani, da želite brisati izbrane osnutke?',
	'Drafts_Type' => 'Videz osnutka',
	'Drafts_Subject' => 'Naslov osnutka',
	'Drafts_NT' => 'Nova tema',
	'Drafts_NM' => 'Odgovori',
	'Drafts_NPM' => 'Zasebno sporocilo',

	'CannotEditAdminsPosts' => 'Ne morete spreminjati administratorjeve objave',
	'Random_Number' => 'Nakljucno stevilo',

	'New_download' => 'Nov prenos je postavljen ali obnovljen.<br />Klikni %stukaj%s za pregled.',
	'Dl_bug_tracker' => 'Bug Tracker',
	'Downloads_ADV' => 'Prenos ADV',

	'TopicUseful' => 'Ali je ta tema koristna?',
	'Article' => 'Artikel',
	'Comments' => 'Komentar',

	'Sitemap' => 'Zemljevid strani',

	'Delete_My_Account' => 'Izbris mojega racuna',
	'Delete_My_Account_Explain' => 'Ce celite izbrisati svoj racun na tem forumu, prosimo, posljite zahtevo s pomocjo tega obrazca.<br />Prosimo, da v naslov vpisete "Brisanje racuna" in v telo (po želji) v nekaj besedah tudi razlog zanj.',

	'KB_MODE_ON' => 'Vklopi nacin KB',
	'KB_MODE_OFF' => 'Izklopi nacin KB',

	'Go_To_Page_Number' => 'Pojdi na stran',

	'Admin_Emails' => 'Administratorji mi na email lahko posiljajo obvestila',
	'Allow_PM_IN' => 'Uporabnikom dovoli, da mi posiljajo zasebna sporocila',
	'Allow_PM_IN_Explain' => 'Administratorji, moderatorji in prijatelji vam bodo vedno lahko posiljali ZS',
	'Allow_PM_IN_SEND_ERROR' => 'Uprabnik, ki mu želite poslati ZS, ga ne bo prejel, ker se je odlocil, da ne bo prejemal ZS.',

//	'UCP_ZEBRA' => 'Prijatelji &amp, Nasprotniki',
	'UCP_ZEBRA' => 'Upravljanje s prijatelji in nasprotniki',
	'UCP_ZEBRA_FOES' => 'Upravljanje z nasprotniki',
	'UCP_ZEBRA_FRIENDS' => 'Upravljanje s prijatelji',

	'ADD_FOES' => 'Dodaj novega nasprotnika',
	'ADD_FOES_EXPLAIN' => 'Vnesete lahko vec uporabniskih imen, vsakega v novo vrstico.',
	'YOUR_FOES' => 'Vasi nasprotniki',
	'YOUR_FOES_EXPLAIN' => 'Za brisanje uporabniskega imena kliknite na poslji.<br />Namig: Ce držite tipko CTRL, lahko izberete vec imen.',
	'FOE_MESSAGE' => 'Sporocilo od nasprotnika',
	'FOES_EXPLAIN' => 'Nasprotniki so uporabniki, ki bodo privzeto ignorirani. Objave teh uporabnikov ne bodo polno vidne, zasebna sporocila od njih pa so kljub temu dovoljena. Moderatorjev in administratorjev ne morete ignorirati.',
	'FOES_UPDATED' => 'Vas seznam nasprotnikov je bil uspesno posodobljen.',
	'FOES_UPDATE_ERROR' => 'Vas seznam nasprotnikov NI bil posodobljen.',
	'NO_FOES' => 'Trenutno nimate dolocenih nasprotnikov',

	'ADD_FRIENDS' => 'Dodajte novega prijatelja',
	'ADD_FRIENDS_EXPLAIN' => 'Vnesete lahko vec uporabniskih imen, vsakega v novo vrstico.',
	'YOUR_FRIENDS' => 'Vasi prijatelji',
	'YOUR_FRIENDS_EXPLAIN' => 'Za brisanje uporabniskega imena kliknite na poslji.<br />Namig: Ce držite tipko CTRL, lahko izberete vec imen.',
	'FRIEND_MESSAGE' => 'Sporocilo od prijatelja',
	'FRIENDS' => 'Prijatelji',
	'FRIENDS_EXPLAIN' => 'Seznam prijateljev vam omogoca, da hitro dostopate do uporabnikov, s katerimi pogosto komunicirate. Ce je predloga foruma primerno podprta, bodo vse objave vasih prijateljev lahko posebej poudarjene.',
	'FRIENDS_UPDATED' => 'Seznam vasih prijateljev je bil uspesno posodobljen.',
	'FRIENDS_UPDATE_ERROR' => 'Na seznam vasih prijateljev ni bilo NIC novega dodano.',
	'FRIENDS_ONLINE' => 'Online',
	'FRIENDS_HIDDEN' => 'Skrit',
	'FRIENDS_OFFLINE' => 'Offline',
	'NO_FRIENDS' => 'Trenutno ni izbran noben prijatelj',
	'NO_FRIENDS_OFFLINE' => 'Ni prijateljev offline',
	'NO_FRIENDS_ONLINE' => 'Ni prijateljev online',

	'Default' => 'Privzeti',

	'Reserved_Author' => '[ SKRIT ]',
	'Reserved_Topic' => '[ REZERVIRANA TEMA ]',
	'Reserved_Post' => '[ REZERVIRANA OBJAVA ]',

	'THANKS_RECEIVED' => 'Prejel zahval',

	'RECENT_USER_ACTIVITY' => 'Zadnje dejavnosti uporabnika',
	'USER_TOPICS_STARTED' => 'Zacete Teme',
	'USER_POSTS' => 'Napisane objave',
	'USER_TOPICS_VIEWS' => 'Pregledane teme',
	'RECENT_USER_STARTED_TITLE' => 'Zacel %s',
	'RECENT_USER_STARTED_NAV' => 'Teme, ki jih je zacel %s',
	'RECENT_USER_POSTS_TITLE' => 'od katerih so %s objavljene v',
	'RECENT_USER_POSTS_NAV' => 'Teme, od katerih so %s napisane v',
	'RECENT_USER_VIEWS_TITLE' => 'ki jih je pregledal %s',
	'RECENT_USER_VIEWS_NAV' => 'Teme, ki jih je pregledal %s',

	'WARN_NO_BUMP' => 'Vi wte zadnji objavljali v tej temi: ne morete objavljati novih objav v roku 24 ur od vase zadnje objave, razne ce nekdo drugi kaj objavi v tem casu.',

	'LINK_THIS_TOPIC' => 'Poslji to temo',
	'LINK_URL' => 'URL',
	'LINK_BBCODE' => 'BBCode',
	'LINK_HTML' => 'HTML',

	'NEWS_POSTED' => 'Iskanje po novicah',
	'TOPICS_POSTED' => 'Iskanje zacetih tem',
	'POSTS_POSTED' => 'Iskanje vseh uporabnikovih objav',

	'ACCOUNT_DELETION_REQUEST' => 'Uporabnik %s je zahteval, da se mu ukine clanstvo.',

	'SORT_TOPICS' => 'Sortiraj teme',
	'SORT_TOPICS_NEWEST' => 'Najnovejse',
	'SORT_TOPICS_OLDEST' => 'Najstarejse',

	'EDIT_POST_DETAILS' => 'Uredi podrobnosti objave',
	'CURRENT_POSTER' => 'Trenutni avtor objave',
	'NEW_POSTER' => 'Nov avtor objave',
	'DETAILS_CHANGED' => '<b>Podrobnosti opbjave so bile uspesno spremenjene.</b></span><br /><span class="postdetails">To okno se bo cez 3 sekunde zaprlo.',

	'Redirect' => 'Preusmeri',
	'Redirect_to' => 'Ce vas brskalnik ne podpira meta preusmerjanja, prosimo, kliknite %stukaj%s za preusmeritev',

	'InProgress' => 'V toku',

	'HAPPY_BIRTHDAY' => 'Cestitke za rojstni dan',

	'DOWNLOAD' => 'Prenesi',
	'DOWNLOADED' => 'prenos je koncan',
	'FILESIZE' => 'Velikost datoteke',
	'FILENAME' => 'Ime datoteke',
	'FILE_NOT_AUTH' => 'Nimate dovoljenja za preminjanje te datoteke',
	'SHOW_POSTS_FROM' => 'Prikaži objave od',
	'SHOW_POSTS_TO' => 'do',

	'SEE_MORE_DETAILS' => 'Vec podrobnosti ...',
	'UNKNOWN' => 'Neznano',
	'MASS_PM' => 'Množicna zasebna sporocila',
	'TEXT_FORMAT' => 'Format',
	'SENDER' => 'Posiljalec',
	'PM_NOTIFICATION' => 'Pozdravljeni,<br /><br />dobili ste novo zasebno sporocilo na vac racun na "{SITENAME}".<br /><br />Vase novo sporocilo lahko vidite s klikom na link:<br /><br />{U_INBOX}<br /><br />',

	'GSEARCH' => 'Isci na Googlu',
	'GSEARCH_ENGINE' => 'Uporabi Googlov iskalnik',
	'SEARCH_WHAT' => 'Isci kaj',
	'SEARCH_WHERE' => 'Isci kje',
	'SEARCH_THIS_FORUM' => 'Isci na tem forumu ...',
	'SEARCH_THIS_TOPIC' => 'Isci v tej temi ...',
	'VF_ALL_TOPICS' => 'Vse teme',

	'WHITE_LIST_MESSAGE' => 'Ta stran zahteva potrdilo clanstva premo emaila. Prosimo, preverite, ce je ta domena na seznamu dovoljenih v vasem sistemu proti nezaželeni posti, sicer ne boste mogli prejeti aktivacijskega sporocila.',
	'CLICK_RETURN_HOME' => 'Kliknite %sTukaj%s za vrnitev za zacetno stran',

	'WEEK_DAY_SUNDAY' => 'Nedelja',
	'WEEK_DAY_MONDAY' => 'Ponedeljek',
	'WEEK_DAY_TUESDAY' => 'Torek',
	'WEEK_DAY_WEDNESDAY' => 'Sreda',
	'WEEK_DAY_THURSDAY' => 'Cetrtek',
	'WEEK_DAY_FRIDAY' => 'Petek',
	'WEEK_DAY_SATURDAY' => 'Sobota',

	'RATINGS' => 'Ocene',

	'ERROR_TABLE' => 'Could not query %s table',

	'SMILEYS' => 'Smeski',
	'SMILEYS_NO_CATEGORIES' => 'Kategorije niso dolocene',
	'SMILEYS_CATEGORY' => 'Kategorija',
	'SMILEYS_GALLERY' => 'Galerija smeskov',
	'SMILEYS_STANDARD' => 'Standardni smeski',

	'QUICK_LIST' => 'Celoten seznam',
	'NORMAL_LIST' => 'Navadni seznam',

	'RETURN_PAGE' => '%sVrnitev na prejsnjo stran%s',
	'FILE_NOT_FOUND' => 'Datoteka ni najdena',
	'FSOCK_DISABLED' => 'FSOCK izklopljen',

	'MANAGEMENT' => 'upravljanje',
	'SORT_ORDER' => 'Sortiraj po',
	'SORT_DIR' => 'Smer sortiranja',

	'TIME_YEAR' => 'Leto',
	'TIME_MONTH' => 'Mesec',
	'TIME_DAY' => 'Dan',
	'TIME_HOUR' => 'Ura',
	'TIME_MINUTE' => 'Minuta',
	'TIME_SECOND' => 'Sekunda',

	'CONTACTS' => 'Kontakti',

	// Event Registration - BEGIN
	'Reg_Title' => 'Registracija',
	'Post_Registration' => 'Dogodek registracija',
	'Add_registration' => 'Dodaj registracije',
	'Add_reg_explain' => '&nbsp;&bull; Check <i>Activate</i> to show a registration form with this post. Uncheck to hide it.<br />&nbsp;&bull; Check <i>Reset</i> to delete all current registrations for this form.<br />&nbsp;&bull; Enter a number in <i>Slots</i> to limit registrations for an option. "0" or empty = unlimited.',
	'reg_activate' => 'Aktiviraj',
	'reg_reset' => 'Resetiraj',
	'Reg_Insert' => 'Registrirali ste se za dogodek.',
	'Reg_Change' => 'Registracija je spremenjena.',
	'Reg_Confirm' => 'Registracija je potrjena.',
	'Reg_Unregister' => 'Registracija je preklicana.',
	'Reg_Max_Registrations' => 'Doseženo je maksimalno stevilo registracij za to možnost. Nadaljne registracije ne bodo sprejete.',
	'Reg_No_Slots_Left' => 'Ni vec mest za registracijo.',
	'Reg_One_Slot_Left' => 'Na voljo je se eno mesto za registracijo.',
	'Reg_Slots_Left' => 'Na voljo je se %s mest za registracijo.',
	'Reg_Self_Unregister' => 'Odregistracija',
	'Reg_Own_Confirmation' => 'Potrditev',
	'Reg_Own_Confirmed' => 'Potrjeno',
	'Reg_Green_Option' => 'Zelena možnost',
	'Reg_Blue_Option' => 'Modra možnost',
	'Reg_Red_Option' => 'Rdeca možnost',
	'Reg_Value_Max_Registrations' => 'Mesta',
	'Reg_Do' => 'Prijava',
	'Reg_Maybe' => 'Morda',
	'Reg_Dont' => 'Ne tokrat',
	'Reg_Head_Username' => 'Uporabnik:',
	'Reg_Head_Time' => 'Datum:',
	'Reg_for' => 'Zacni registracijo za',
	'Reg_for_explain' => '[Vpisi 0 ali pusti prazno za neomejene registracije ]',
	'Reg_no_options_specified' => 'Morate izbrati vsaj eno možnost za registracijo.',
	'Reg_event_date' => '<b>Datum dogodka: </b>',
	// Event Registration - END

	'REPLY_PREFIX_OLD' => 'Re: ',
	'REPLY_PREFIX' => 'Re: ',

	'READ_ONLY_FORUM' => 'Žal, ampak forum je trenutno v <b>READ ONLY</b> nacinu, kar pomeni, da ne morete objavljati, cetudi imate to dovoljenje. Prosimo, poskusite znova kasneje.',

	// Tickets Submission - BEGIN
	'TICKET_CAT' => 'Kategorija',
	// Tickets Submission - END

	)
);

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

$lang['Prune_commands'] = array();

// here you can make more entries if needed
$lang['Prune_commands'][0] = 'Izkljuci uporabnike, ki ne objavljajo';
$lang['Prune_explain'][0] = 'Ki niso nikoli objavljali, <b>razen</b> novih uporabnikov izpred %d dni';
$lang['Prune_commands'][1] = 'Izkljuci neaktivne uporabnike';
$lang['Prune_explain'][1] = 'Ki niso nikoli objavljali, <b>razen</b> novih uporabnikov izpred %d dni';
$lang['Prune_commands'][2] = 'Izkljuci neaktivne uporabnike';
$lang['Prune_explain'][2] = 'Ki se niso nikoli aktivirali, <b>razen</b> uporabnikov izpred %d dni';
$lang['Prune_commands'][3] = 'izkljuci uporabnike, ki se niso pojavili dlje casa';
$lang['Prune_explain'][3] = 'Ki niso objavaljali v zadnjih 60 dneh, <b>razen</b> uporabnikov izpred %d dni';
$lang['Prune_commands'][4] = 'Izkljuci uporabnike, ki ne objavljajo pogosto';
$lang['Prune_explain'][4] = 'Ki imajo manj kot 1 objavo na 10 dni od registracije, <b>razen</b> uporabnikov izpred %d dni';
$lang['Prune_commands'][5] = 'Izkljuci uporabnike, ki ne objavljajo in sene prijavljajo';
$lang['Prune_explain'][5] = 'Tisti, ki niso nikoli pisali ali objavljali , <b>razen</b> uporabnikov izpred %d dni';


// Timezones - BEGIN
$lang['All_times'] = 'Casovno obmocje %s'; // eg. All times are GMT - 12 Hours (times from next block)

// Time zones short
$lang['tzs']['-12'] = 'GMT - 12 Ur';
$lang['tzs']['-11'] = 'GMT - 11 Ur';
$lang['tzs']['-10'] = 'GMT - 10 Ur';
$lang['tzs']['-9'] = 'GMT - 9 Ur';
$lang['tzs']['-8'] = 'GMT - 8 Ur';
$lang['tzs']['-7'] = 'GMT - 7 Ur';
$lang['tzs']['-6'] = 'GMT - 6 Ur';
$lang['tzs']['-5'] = 'GMT - 5 Ur';
$lang['tzs']['-4'] = 'GMT - 4 Ur';
$lang['tzs']['-3.5'] = 'GMT - 3.5 Ur';
$lang['tzs']['-3'] = 'GMT - 3 Ur';
$lang['tzs']['-2'] = 'GMT - 2 Ur';
$lang['tzs']['-1'] = 'GMT - 1 Sat';
$lang['tzs']['0'] = 'GMT';
$lang['tzs']['1'] = 'GMT + 1 Sat';
$lang['tzs']['2'] = 'GMT + 2 Ur';
$lang['tzs']['3'] = 'GMT + 3 Ur';
$lang['tzs']['3.5'] = 'GMT + 3.5 Ur';
$lang['tzs']['4'] = 'GMT + 4 Ur';
$lang['tzs']['4.5'] = 'GMT + 4.5 Ur';
$lang['tzs']['5'] = 'GMT + 5 Ur';
$lang['tzs']['5.5'] = 'GMT + 5.5 Ur';
$lang['tzs']['6'] = 'GMT + 6 Ur';
$lang['tzs']['6.5'] = 'GMT + 6.5 Ur';
$lang['tzs']['7'] = 'GMT + 7 Ur';
$lang['tzs']['8'] = 'GMT + 8 Ur';
$lang['tzs']['9'] = 'GMT + 9 Ur';
$lang['tzs']['9.5'] = 'GMT + 9.5 Ur';
$lang['tzs']['10'] = 'GMT + 10 Ur';
$lang['tzs']['11'] = 'GMT + 11 Ur';
$lang['tzs']['12'] = 'GMT + 12 Ur';
$lang['tzs']['13'] = 'GMT + 13 Ur';

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
	'1' => '[UTC + 1] Central European Time, West African Time',
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
	'WEEK_DAY_SUNDAY' => 'Nedelja',
	'WEEK_DAY_MONDAY' => 'Pondeljek',
	'WEEK_DAY_TUESDAY' => 'Torek',
	'WEEK_DAY_WEDNESDAY' => 'Sreda',
	'WEEK_DAY_THURSDAY' => 'Cetrtek',
	'WEEK_DAY_FRIDAY' => 'Petek',
	'WEEK_DAY_SATURDAY' => 'Sobota',

	'TIME_YEAR' => 'Leto',
	'TIME_MONTH' => 'Mesec',
	'TIME_DAY' => 'Dan',
	'TIME_HOUR' => 'Ur',
	'TIME_MINUTE' => 'Minut',
	'TIME_SECOND' => 'Sekund',

	// The value is only an example and will get replaced by the current time on view
	'dateformats' => array(
		'd M Y, H:i' => '01 Jan 2007, 13:37',
		'd M Y H:i' => '01 Jan 2007 13:37',
		'M jS, \'y, H:i' => 'Jan 1st, \'07, 13:37',
		'D M d, Y g:i a' => 'Mon Jan 01, 2007 1:37 pm',
		'F jS, Y, g:i a' => 'Januar 1st, 2007, 1:37 pm',
		'|d M Y|, H:i' => 'Danes, 13:37 / 01 Jan 2007, 13:37',
		'|F jS, Y|, g:i a' => 'Danes, 1:37 pm / Januar 1st, 2007, 1:37 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat' => 'D M d, Y g:i a', // Mon Jan 01, 2007 1:37 pm

	)
);

$lang['datetime'] = array(
	'TODAY' => 'Danes',
	'TOMORROW' => 'Jutri',
	'YESTERDAY' => 'Vceraj',
	'AGO' => array(
		0 => 'less than a minute ago',
		1 => '%d minute ago',
		2 => '%d minutes ago',
		60=> '1 hour ago',
	),

	'Sunday' => 'Nedelja',
	'Monday' => 'Pondeljek',
	'Tuesday' => 'Torek',
	'Wednesday' => 'Sreda',
	'Thursday' => 'Cetrtek',
	'Friday' => 'Petek',
	'Saturday' => 'Sobota',

	'Sun' => 'Ned',
	'Mon' => 'Pon',
	'Tue' => 'Tor',
	'Wed' => 'Sre',
	'Thu' => 'Cet',
	'Fri' => 'Pet',
	'Sat' => 'Sob',

	'SUN_S' => 'Ne',
	'MON_S' => 'Po',
	'TUE_S' => 'To',
	'WED_S' => 'Sr',
	'THU_S' => 'Ce',
	'FRI_S' => 'Pe',
	'SAT_S' => 'So',

	'January' => 'Januar',
	'February' => 'Februar',
	'March' => 'Marec',
	'April' => 'April',
	'May' => 'Maj',
	'June' => 'Juni',
	'July' => 'Juli',
	'August' => 'Avgust',
	'September' => 'Sektember',
	'October' => 'Oktober',
	'November' => 'November',
	'December' => 'December',

	'JAN' => 'Jan',
	'FEB' => 'Feb',
	'MAR' => 'Mar',
	'APR' => 'Apr',
	'MAY' => 'Maj',
	'JUN' => 'Jun',
	'JUL' => 'Jul',
	'AUG' => 'Aug',
	'SEP' => 'Sek',
	'OCT' => 'Okt',
	'NOV' => 'Nov',
	'DEC' => 'Dec',

	'Jan_short' => 'Jan',
	'Feb_short' => 'Feb',
	'Mar_short' => 'Mar',
	'Apr_short' => 'Apr',
	'May_short' => 'Maj',
	'Jun_short' => 'Jun',
	'Jul_short' => 'Jul',
	'Aug_short' => 'Aug',
	'Sep_short' => 'Sek',
	'Oct_short' => 'Okt',
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