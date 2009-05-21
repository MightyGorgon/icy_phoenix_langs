<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main.php 101 2009-05-16 16:03:40Z Mighty Gorgon $
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
<span style="color: #FF5500;"><b>Mighty Gorgon</b></span><br />
<i>(Luca Libralato)</i><br />
<b><i>Developer</i></b><br />
Interesse: Heroes Of Might And Magic III, 69, #FF5522<br />
Locatie: Homer\'s Head<br />
<br />
<br />
<span style="color: #DD2222;"><b>hpl</b></span><br />
<i>(Alessandro Drago)</i><br />
<b><i>Developer</i></b><br />
Interesse: CMS, little animals<br />
Locatie: Global Header<br />
<br />
<br />
<span style="color: #DD2222;"><b>Bicet</b></span><br />
<b><i>phpBB XS Ontwikkelaar</i></b><br />
<br />
<br />
<b><i>Overige ontwikkelaars</i></b><br />
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
Interesse: Icy Phoenix<br />
Locatie: <a href="http://www.icyphoenix.com/">http://www.icyphoenix.com</a>
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

$lang = array_merge($lang, array(
	'Home' => 'Home',
	'Forum' => 'Forum',
	'Category' => 'Categorie',
	'Topic' => 'Onderwerp',
	'Topics' => 'Onderwerpen',
	'Replies' => 'Reacties',
	'Views' => 'Bekeken',
	'Post' => 'Bericht',
	'Posts' => 'Berichten',
	'Posted' => 'Geplaatst',
	'Username' => 'Gebruikersnaam',
	'Password' => 'Wachtwoord',
	'Email' => 'E-mail',
	'Poster' => 'Poster',
	'Author' => 'Auteur',
	'Time' => 'Tijd',
	'Hours' => 'Uren',
	'Message' => 'Bericht',

	'1_Day' => '1 dag',
	'7_Days' => '7 dagen',
	'2_Weeks' => '2 weken',
	'1_Month' => '1 maand',
	'3_Months' => '3 maanden',
	'6_Months' => '6 maanden',
	'1_Year' => '1 jaar',

	'Go' => 'Ga',
	'Jump_to' => 'Spring naar',
	'Submit' => 'Bevestigen',
	'Reset' => 'Resetten',
	'Cancel' => 'Annuleren',
	'Preview' => 'Voorbeeld',
	'Confirm' => 'Bevestigen',
	'Spellcheck' => 'Spellingcontrole',
	'Yes' => 'Ja',
	'No' => 'Nee',
	'Enabled' => 'Ingeschakeld',
	'Disabled' => 'Uitgeschakeld',
	'Error' => 'Fout',
	
	'GO' => 'Ga',
	'JUMP_TO' => 'Spring naar',
	'SUBMIT' => 'Bevestigen',
	'RESET' => 'Resetten',
	'CANCEL' => 'Annuleren',
	'PREVIEW' => 'Voorbeeld',
	'CONFIRM' => 'Bevestigen',
	'YES' => 'Ja',
	'NO' => 'Nee',
	'ENABLED' => 'Ingeschakeld',
	'DISABLED' => 'Uitgeschakeld',
	'ERROR' => 'Fout',

	'Next' => 'Volgende',
	'Previous' => 'Vorige',
	'Goto_page' => 'Ga naar pagina',
	'Joined' => 'Aangemeld',
	'IP_Address' => 'IP-adres',

	'Select_forum' => 'Selecteer een forum',
	'View_latest_post' => 'Bekijk laatste bericht',
	'View_newest_post' => 'Bekijk nieuwste bericht',
	'Page_of' => 'Pagina <b>%d</b> van de <b>%d</b>', // Replaces with: Page 1 of 2 for example

	'ICQ' => 'ICQ nummer',
	'AIM' => 'AIM adres',
	'MSNM' => 'MSN Live',
	'YIM' => 'Yahoo Messenger',
	'SKYPE' => 'Skype',
	'Forum_Index' => 'Forum',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Nieuw onderwerp plaatsen',
	'Reply_to_topic' => 'Op onderwerp reageren',
	'Reply_with_quote' => 'Met citaat reageren',

	'Click_return_topic' => 'Klik %shier%s om terug te keren naar het onderwerp', // %s's here are for uris, do not remove!
	'Click_return_login' => 'Klik %shier%s om het nog eens te proberen',
	'Click_return_forum' => 'Klik %shier%s om terug te keren naar het forum',
	'Click_view_message' => 'Klik %shier%s om je bericht te bekijken',
	'Click_return_modcp' => 'Klik %shier%s om terug te keren naar het moderatorpaneel',
	'Click_return_group' => 'Klik %shier%s om terug te keren naar groepsinformatie',

	'Admin_panel' => 'ACP',
	
	'Board_disabled' => 'Sorry, maar deze website is op dit moment niet bereikbaar. Probeer het later nog eens.',

// Global Header strings
	'Registered_users' => 'Geregistreerde gebruikers:',
	'Browsing_forum' => 'Gebruikers die op dit forum zijn:',
	'Online_users_zero_total' => 'In totaal zijn er <b>0</b> gebruikers online: ',
	'Online_users_total' => 'In totaal zijn er <b>%d</b> gebruikers online: ',
	'Online_user_total' => 'In totaal is er <b>%d</b> gebruiker online: ',
	'AC_Online_users_zero_total' => 'In totaal zijn er <b>0</b> gebruikers in de chatbox: ',
	'AC_Online_users_total' => 'In totaal zijn er <b>%d</b> gebruikers in de chatbox: ',
	'AC_Online_user_total' => 'In totaal is er <b>1</b> gebruiker in de chatbox: ',
	'Reg_users_zero_total' => '0 geregistreerd, ',
	'Reg_users_total' => '%d geregistreerd, ',
	'Reg_user_total' => '%d geregistreerd, ',
	'Hidden_users_zero_total' => '0 verborgen en ',
	'Hidden_user_total' => '%d verborgen en ',
	'Hidden_users_total' => '%d verborgen en ',
	'Guest_users_zero_total' => '0 gasten',
	'Guest_users_total' => '%d gasten',
	'Guest_user_total' => '%d gast',
	'Record_online_users' => 'Meeste gebruikers ooit online was <b>%s</b> op %s', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sBeheerders%s',
	'Mod_online_color' => '%sModerators%s',
	
	'You_last_visit' => 'Jouw laatste bezoek was op %s', // %s replaced by date/time
	'Current_time' => 'Het is nu %s', // %s replaced by time
	
	'Search_new' => 'Bekijk berichten sinds je laatste bezoek',
	'Search_your_posts' => 'Bekijk je berichten',
	'Search_unanswered' => 'Bekijk onbeantwoorde berichten',

	'Register' => 'Registreren',
	'Profile' => 'Profiel',
	'Edit_profile' => 'Bewerk je profiel',
	'Search' => 'Zoeken',
	'Memberlist' => 'Gebruikerslijst',
	'FAQ' => 'FAQ',
	'KB_title' => 'Kennisbank',
	'BBCode_guide' => 'BBCode-gids',
	'Usergroups' => 'Gebruikersgroepen',
	'Last_Post' => 'Laatste bericht',
	'Moderator' => 'Moderator',
	'Moderators' => 'Moderators',

// Stats block text
	'Posted_articles_zero_total' => 'Onze gebruikers hebben in totaal <b>0</b> berichten geplaatst', // Number of posts
	'Posted_articles_total' => 'Onze gebruikers hebben in totaal <b>%d</b> berichten geplaatst', // Number of posts
	'Posted_article_total' => 'Onze gebruikers hebben in totaal <b>%d</b> bericht geplaatst', // Number of posts
	'Registered_users_zero_total' => 'We hebben <b>0</b> geregistreerde gebruikers', // # registered users
	'Registered_users_total' => 'We hebben <b>%d</b> geregistreerde gebruikers', // # registered users
	'Registered_user_total' => 'We hebben <b>%d</b> geregistreerde gebruiker', // # registered users
	'Newest_user' => 'De nieuwste geregistreerde gebruiker is <b>%s%s%s</b>', // a href, username, /a

	'No_new_posts_last_visit' => 'Er zijn geen nieuwe berichten sinds je laatste bezoek',
	
	'No_new_posts_global_announcement' => 'Geen nieuwe [ Forummededeling ]',
	'New_posts_global_announcement' => 'Nieuw [ Forummededeling ]',
	'No_new_posts_announcement' => 'Geen nieuwe [ Mededeling ]',
	'New_posts_announcement' => 'Nieuw [ Mededeling ]',
	'No_new_posts_sticky' => 'Geen nieuwe [ Vastgepind ]',
	'New_posts_sticky' => 'Nieuw [ Vastgepind ]',
	'No_new_posts_locked' => 'Geen nieuwe [ Gesloten ]',
	'New_posts_locked' => 'Nieuw [ Gesloten ]',
	'No_new_posts' => 'Geen nieuwe berichten',
	'New_posts' => 'Nieuwe berichten',
	'New_post' => 'Nieuw bericht',
	'No_new_posts_hot' => 'Geen nieuwe [ Populair ]',
	'New_posts_hot' => 'Nieuw [ Populair ]',
	
	'Forum_no_new_posts' => 'Geen nieuwe berichten [Forum]',
	'Forum_new_posts' => 'Nieuwe berichten [Forum]',
	'Cat_no_new_posts' => 'Geen nieuwe berichten [Categorie]',
	'Cat_new_posts' => 'Nieuwe berichten [Categorie]',
	'Forum_is_locked' => 'Forum is gesloten',

// Login
	'Enter_password' => 'Geef hier je gebruikersnaam en wachtwoord in om in te loggen.',
	'Login' => 'Inloggen',
	'Logout' => 'Uitloggen',
	'Forgotten_password' => 'Ik ben mijn wachtwoord vergeten',
	'AUTOLOGIN' => 'Bij elk bezoek mij automatisch inloggen',
	'Error_login' => 'Je hebt of een verkeerde of inactieve gebruikersnaam, of een ongeldig wachtwoord ingegeven.',

// Index page
	'No_Posts' => 'Er zijn geen berichten',
	'No_forums' => 'Dit forum bevat geen forums',
	
	'Private_Message' => 'Privébericht',
	'Private_Messages' => 'Privéberichten',
	'Who_is_Online' => 'Wie is online',
	
	'Mark_all_forums' => 'Alle forums als gelezen markeren',
	'Forums_marked_read' => 'Alle forums zijn als gelezen gemarkeerd',

// Viewforum
	'View_forum' => 'Bekijk forum',
	
	'Forum_not_exist' => 'De geselecteerde forum bestaat niet.',
	'Reached_on_error' => 'Je hebt deze pagina bereikt tijdens een fout.',
	
	'Display_topics' => 'Onderwerpen van de afgelopen',
	'All_Topics' => 'Alle onderwerpen',
	
	'Topic_News_nb' => 'Nieuws',
	'Topic_global_announcement_nb' => 'Forummededeling',
	'Topic_Announcement_nb' => 'Mededeling',
	'Topic_Sticky_nb' => 'Vastgepind',
	'Topic_Moved_nb' => 'Verplaatst',
	'Topic_Poll_nb' => 'Peiling',
	'Topic_Event_nb' => 'Evenement',
	'Topic_Announcement' => '<b>Mededeling:</b>',
	'Topic_Sticky' => '<b>Vastgepind:</b>',
	'Topic_Moved' => '<b>Verplaatst:</b>',
	'Topic_Poll' => '<b>Peiling:</b>',
	'Topic_Event' => '<b>Evenement:</b>',
	'Topic_global_announcement' => '<b>Forummededeling:</b>',
	'Post_global_announcement' => 'Forummededeling',


	'Mark_all_topics' => 'Alle onderwerpen als gelezen markeren',
	'Topics_marked_read' => 'De onderwerpen in dit forum zijn allemaal als gelezen gemarkeerd',

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
	'Rules_post_can' => 'Je <b>mag</b> nieuwe onderwerpen plaatsen',
	'Rules_post_cannot' => 'Je <b>mag geen</b> nieuwe onderwerpen plaatsen',
	'Rules_reply_can' => 'Je <b>mag</b> op onderwerpen reageren',
	'Rules_reply_can_own' => 'Je <b>mag</b> op je eigen onderwerpen reageren',
	'Rules_reply_cannot' => 'Je <b>mag niet</b> op onderwerpen reageren',
	'Rules_edit_can' => 'Je <b>mag</b> je eigen berichten bewerken',
	'Rules_edit_cannot' => 'Je <b>mag niet</b> je eigen berichten bewerken',
	'Rules_delete_can' => 'Je <b>mag</b> je eigen berichten verwijderen',
	'Rules_delete_cannot' => 'Je <b>mag niet</b> je eigen berichten verwijderen',
	'Rules_vote_can' => 'Je <b>mag</b> stemmen op peilingen',
	'Rules_vote_cannot' => 'Je <b>mag niet</b> stemmen op peilingen',
	'Rules_moderate' => 'Je <b>mag</b> %sdit forum moderaten%s', // %s replaced by a href links, do not remove!

// 'No_topics_post_one' => 'Er zijn geen berichten in dit forum.<br />Klik op de <b>Nieuw onderwerp</b> button om een nieuw onderwerp te plaatsen.',
	'No_topics_post_one' => 'Er zijn geen berichten in dit forum, of ze komen niet overeen met de letter die je geselecteerd hebt.<br />Klik op de <b>Nieuw onderwerp</b> button om een nieuw onderwerp te plaatsen of selecteer een andere letter',
	
// Viewtopic
	'View_topic' => 'Bekijk onderwerp',
	
	'Guest' => 'Gast',
	'Post_subject' => 'Onderwerp',
	'View_next_topic' => 'Bekijk volgende onderwerp',
	'View_previous_topic' => 'Bekijk nieuw onderwerp',
	'Submit_vote' => 'Stem uitbrengen',
	'View_results' => 'Bekijk resultaten',

	'No_newer_topics' => 'Er zijn geen nieuwere onderwerpen in dit forum',
	'No_older_topics' => 'Er zijn geen oudere onderwerpen in dit forum',
	'Topic_post_not_exist' => 'Het onderwerp of bericht die je opgevraagd hebt bestaat niet',
	'No_posts_topic' => 'Er bestaan geen berichten voor dit onderwerp',
	
	'Display_posts' => 'Berichten van de afgelopen',
	'All_Posts' => 'Alle berichten',
	'Newest_First' => 'Nieuwe eerst',
	'Oldest_First' => 'Oude eerst',

	'Back_to_top' => 'Terug naar boven',
	'Back_to_bottom' => 'Terug naar beneden',

	'Read_profile' => 'Bekijk gebruikersprofiel',
	'Send_email' => 'Verstuur e-mail naar gebruiker',
	'Visit_website' => 'Bekijk website',
	'ICQ_status' => 'ICQ status',
	'Edit_delete_post' => 'Bewerk/Verwijder dit bericht',
	'View_IP' => 'Bekijk IP-adres van poster',
	'Delete_post' => 'Verwijder dit bericht',

	'wrote' => 'schreef', // proceeds the username and is followed by the quoted text
	'Quote' => 'Citaat', // comes before bbcode quote output.
	'Code' => 'Code', // comes before bbcode code output.

	'Edited_time_total' => 'Laatst bewerkt door %s op %s; in totaal %d keer bewerkt', // Last edited by me on 12 Oct 2001; edited 1 time in total
	'Edited_times_total' => 'Laatst bewerkt door %s op %s; in totaal %d keer bewerkt', // Last edited by me on 12 Oct 2001; edited 2 times in total
	
	'Lock_topic' => 'Sluit dit onderwerp',
	'Unlock_topic' => 'Heropen dit onderwerp',
	'Move_topic' => 'Verplaats dit onderwerp',
	'Delete_topic' => 'Verwijder dit onderwerp',
	'Split_topic' => 'Splits dit onderwerp',
	
	'Stop_watching_topic' => 'Stop het volgen van dit onderwerp',
	'Start_watching_topic' => 'Volg dit onderwerp voor reacties',
	'No_longer_watching' => 'Je volgt dit onderwerp niet meer',
	'You_are_watching' => 'Je volgt dit onderwerp vanaf nu',
	
	'Total_votes' => 'Totaal aantal stemmen',

// Posting/Replying (Not private messaging!)
	'Message_body' => 'Berichtinhoud',
	'Topic_review' => 'Onderwerpvoorbeeld',
	
	'No_post_mode' => 'Er is geen berichtmodus gespecificeerd', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normally)
	
	'Post_a_new_topic' => 'Plaats een nieuw onderwerp',
	'Post_a_reply' => 'Plaats een reactie',
	'Post_topic_as' => 'Plaats onderwerp als',
	'Edit_Post' => 'Bewerk bericht',
	'Options' => 'Opties',
	
	'PM_Read' => 'PB gelezen',
	'PM_Unread' => 'PB ongelezen',
	'PM_Replied' => 'PB gereageerd',
	
	'Post_Announcement' => 'Mededeling',
	'New_post_Announcement' => 'Nieuwe mededeling',
	'Post_Sticky' => 'Vastgepind',
	'New_post_Sticky' => 'Nieuw vastgepind',
	'Post_Normal' => 'Normaal',
	
	'Confirm_delete' => 'Weet je zeker dat je dit bericht wilt verwijderen?',
	'Confirm_delete_poll' => 'Weet je zeker dat je deze peiling wilt verwijderen?',

	'Flood_Error' => 'Je mag geen ander bericht plaatsen zo kort na je vorige bericht; probeer het het zometeen nog eens.',
	'Empty_subject' => 'Je moet een onderwerp ingeven voordat je het kunt plaatsen.',
	'Empty_message' => 'Je moet een bericht ingeven voordat je het kunt plaatsen.',
	'Forum_locked' => 'Dit forum is gesloten: je mag geen onderwerpen bewerken of plaatsen en ook niet erop reageren.',
	'Topic_locked' => 'Dit onderwerp is gesloten: je mag geen berichten bewerken of reageren.',
	'No_post_id' => 'Je moet een bericht selecteren om te bewerken',
	'No_topic_id' => 'Je moet een onderwerp selecteren om op te reageren',
	'No_valid_mode' => 'Je mag alleen plaatsen, reageren, bewerken of citeren van berichten. Ga terug en probeer het opnieuw.',
	'No_such_post' => 'Er is niet zoiets als een bericht. Ga terug en probeer het opnieuw.',
	'Edit_own_posts' => 'Sorry, maar je mag alleen je eigen berichten bewerken.',
	'Delete_own_posts' => 'Sorry, maar je mag alleen je eigen berichten verwijderen.',
	'Cannot_delete_replied' => 'Sorry, maar je mag geen berichten verwijderen waar al op is gereageerd.',
	'Cannot_delete_poll' => 'Sorry, maar je mag geen actieve peilingen verwijderen.',
	'Empty_poll_title' => 'Je moet een titel voor je peiling ingeven.',
	'To_few_poll_options' => 'Je moet tenminste twee peilingopties ingeven.',
	'To_many_poll_options' => 'Je hebt geprobeerd om teveel peilingopties in te geven.',
	'Post_has_no_poll' => 'Dit bericht heeft geen peiling.',
	'Already_voted' => 'Je hebt al gestemd in deze peiling.',
	'No_vote_option' => 'Je moet een optie specificeren om te kunnen stemmen.',

	'Add_poll' => 'Een peiling toevoegen',
	'Add_poll_explain' => 'Als je geen peiling aan je onderwerp wilt toevoegen, laat dan de onderstaande velden leeg.',
	'Poll_question' => 'Peilingvraag',
	'Poll_option' => 'Peilingoptie',
	'Add_option' => 'Voeg optie toe',
	'Update' => 'Bijwerken',
	'Delete' => 'Verwijderen',
	'Poll_for' => 'Peiling laten lopen voor',
	'Days' => 'dagen', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Geef 0 in of laat het leeg voor een oneindig lopende peiling ]',
	'Delete_poll' => 'Verwijder peiling',

	'Disable_HTML_post' => 'HTML in dit bericht uitschakelen',
	'Disable_ACRO_AUTO_post' => 'Afkortingen en autolinks in dit bericht uitschakelen',
	'Disable_BBCode_post' => 'BBCode in dit bericht uitschakelen',
	'Disable_Smilies_post' => 'Smilies in dit bericht uitschakelen',
	
	'HTML_is_ON' => 'HTML is <u>AAN</u>',
	'HTML_is_OFF' => 'HTML is <u>UIT</u>',
	'BBCode_is_ON' => '%sBBCode%s is <u>AAN</u>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => '%sBBCode%s is <u>UIT</u>',
	'Smilies_are_ON' => 'Smilies is <u>AAN</u>',
	'Smilies_are_OFF' => 'Smilies is <u>UIT</u>',
	
	'Attach_signature' => 'Onderschrift toevoegen (onderschriften kunnen veranderd worden in profiel)',
	'Notify' => 'Mij op de hoogte brengen van reacties',
	'Delete_post' => 'Dit bericht verwijderen',
	
	'Stored' => 'Je bericht is succesvol toegevoegd.',
	'Deleted' => 'Je bericht is succesvol verwijderd.',
	'Poll_delete' => 'Je peiling is succesvol verwijderd.',
	'Vote_cast' => 'Jouw stem is succesvol opgeslagen.',
	
	'Topic_reply_notification' => 'Reactie op onderwerp',

	'Emoticons' => 'Smilies',
	'More_emoticons' => 'Bekijk alle smilies',

// Private Messaging
	'Private_Messaging' => 'Privéberichten',
	
	'Login_check_pm' => 'Login om je privéberichten te bekijken',
	'New_pms' => 'Je hebt %d nieuwe berichten', // You have 2 new messages
	'New_pm' => 'Je hebt %d nieuw bericht', // You have 1 new message
	'No_new_pm' => 'Je hebt geen nieuwe berichten',
	'Unread_pms' => 'Je hebt %d ongelezen berichten',
	'Unread_pm' => 'Je hebt %d ongelezen bericht',
	'No_unread_pm' => 'Je hebt geen ongelezen berichten',
	'You_new_pm' => 'Een nieuw privébericht is aanwezig in je postvak',
	'You_new_pms' => 'Meerdere nieuwe privéberichten zijn aanwezig in je postvak',
	'You_no_new_pm' => 'Er zijn geen nieuwe privéberichten aanwezig in je postvak',
	
	'Unread_message' => 'Ongelezen bericht',
	'Read_message' => 'Gelezen bericht',
	
	'Read_pm' => 'Bericht lezen',
	'Post_new_pm' => 'Bericht versturen',
	'Post_reply_pm' => 'Op bericht reageren',
	'Post_quote_pm' => 'Bericht citeren',
	'Edit_pm' => 'Bericht bewerken',

	'Inbox' => 'Postvak In',
	'Outbox' => 'Postvak Uit',
	'Savebox' => 'Opgeslagen Items',
	'Sentbox' => 'Verzonden Items',
	'Flag' => 'Vlag',
	'Subject' => 'Onderwerp',
	'From' => 'Van',
	'To' => 'Naar',
	'Date' => 'Datum',
	'Mark' => 'Markeren',
	'Sent' => 'Verzonden',
	'Saved' => 'Opgeslagen',
	'Delete_marked' => 'Verwijder gemarkeerde',
	'Delete_all' => 'Verwijder alles',
	'Save_marked' => 'Sla gemarkeerde op',
	'Download_marked' => 'Download gemarkeerde',
	'Mailbox' => 'Mailbox',
	'Save_message' => 'Bericht opslaan',
	'Delete_message' => 'Bericht verwijderen',
	'Next_privmsg' => 'Volgende privébericht',
	'Previous_privmsg' => 'Vorige privébericht',
	'No_newer_pm' => 'Er zijn geen nieuwere privéberichten.',
	'No_older_pm' => 'Er zijn geen oudere privéberichten.',
	'Display_messages' => 'Berichten van de afgelopen', // Followed by number of days/weeks/months
	'All_Messages' => 'Alle berichten',

	'No_messages_folder' => 'Je hebt geen berichten in deze map',
	
	'PM_disabled' => 'Privéberichten versturen en ontvangen is uitgeschakeld op dit forum.',
	'Cannot_send_privmsg' => 'Sorry, maar de beheerder heeft het onmogelijk gemaakt dat je privéberichten kunt versturen.',
	'No_to_user' => 'Je moet een gebruikersnaam specificeren naar wie dit bericht verstuurd moet worden.',
	'No_such_user' => 'Sorry, maar de gebruiker bestaat niet.',
	
	'Disable_HTML_pm' => 'HTML in dit bericht uitschakelen',
	'Disable_ACRO_AUTO_pm' => 'Afkortingen en autolinks in dit bericht uitschakelen',
	'Disable_BBCode_pm' => 'BBCode in dit bericht uitschakelen',
	'Disable_Smilies_pm' => 'Smilies in dit bericht uitschakelen',
	
	'Message_sent' => 'Je bericht is verzonden.',

	'Click_return_inbox' => 'Klik %shier%s om terug te keren naar jouw postvak',
	'Click_return_index' => 'Klik %shier%s om terug te keren naar de index',
	
	'Send_a_new_message' => 'Verstuur een nieuw privébericht',
	'Send_a_reply' => 'Reageer op een privébericht',
	'Edit_message' => 'Bewerk het privébericht',

	'Notification_subject' => 'Nieuw privébericht is aangekomen!',
	
	'Find_username' => 'Vind een gebruikersnaam',
	'Find' => 'Vind',
	'No_match' => 'Er zijn geen resultaten gevonden.',
	
	'No_post_id' => 'Er is geen bericht ID gespecificeerd',
	'No_such_folder' => 'Zo\'n soort map bestaat niet',
	'No_folder' => 'Er is geen map gespecificeerd',
	
	'Mark_all' => 'Markeer alles',
	'Unmark_all' => 'Markeer niets',
	
	'Confirm_delete_pm' => 'Weet je zeker dat je dit bericht wilt verwijderen?',
	'Confirm_delete_pms' => 'Weet je zeker dat je deze berichten wilt verwijderen?',
	
	'Inbox_size' => 'Je postvak is voor %d%% gevuld', // eg. Your Inbox is 50% full
	'Sentbox_size' => 'Je verzonden items is voor %d%% gevuld',
	'Savebox_size' => 'Je opgeslagen items is voor %d%% gevuld',
	
	'Click_view_privmsg' => 'Klik %shier%s om je postvak te bekijken',

// Profiles/Registration
	'Viewing_user_profile' => 'Bekijk profiel :: %s', // %s is username
	'About_user' => 'Alles over %s', // %s is username
//Start Quick Administrator User Options and Information MOD
	'Quick_admin_options' => 'Snelle gebruikeropties en informatie',
	'Admin_edit_profile' => 'Bewerk gebruikersprofiel',
	'Admin_edit_permissions' => 'Bewerk gebruikerspermissies',
	'User_active' => 'Gebruiker <b>is</b> actief',
	'User_not_active' => 'Gebruiker <b>is niet</b> actief',
	'Username_banned' => 'Gebruiker <b>is</b> geband',
	'Username_not_banned' => 'Gebruiker <b>is niet</b> geband',
	'User_email_banned' => 'E-mailadres van gebruiker [ %s ] <b>is</b> geband',
	'User_email_not_banned' => 'E-mailadres van gebruiker <b>is niet</b> geband',
//End Quick Administrator User Options and Information MOD
	'Preferences' => 'Voorkeuren',
	'Items_required' => 'Items gemarkeerd met een * zijn verplichte velden tenzij anders aangegeven.',
	'Registration_info' => 'Registratieinformatie',
	'Profile_info' => 'Profielinformatie',
	'Profile_info_warn' => 'Deze informatie is publiekelijk beschikbaar',
	'Avatar_panel' => 'Avatarpaneel',
	'Avatar_gallery' => 'Avatargallerij',

	'Website' => 'Website',
	'Location' => 'Woonplaats',
	'Contact' => 'Contact',
	'Email_address' => 'E-mailadres',
	'Email' => 'E-mail',
	'Send_private_message' => 'Verstuur een privébericht',
	'Hidden_email' => '[ Verborgen ]',
	'Search_user_posts' => 'Zoek naar berichten van deze gebruiker',
	'Interests' => 'Interesses',
	'Occupation' => 'Beroep',
	'Poster_rank' => 'Rang',

	'Total_posts' => 'Totaal aantal berichten',
	'User_post_pct_stats' => '%.2f%% van het totaal', // 1.25% of total
	'User_post_day_stats' => '%.2f berichten per dag', // 1.5 posts per day
	'Search_user_posts' => 'Vind alle berichten van %s', // Find all posts by username
	'Search_user_topics_started' => 'Vind alle onderwerpen gestart door %s', // Find all topics started by username
	
	'No_user_id_specified' => 'Sorry, maar deze gebruiker bestaat niet.',
	'Wrong_Profile' => 'Je mag niet een profiel bewerken die niet van jouw is.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => 'Actieve statistieken',
	'Invision_Communicate' => 'Communicatie',
	'Invision_Info' => 'Informatie',
	'Invision_Member_Group' => 'Gebruikersgroep',
	'Invision_Member_Title' => 'Gebruikerstitel',
	'Invision_Most_Active' => 'Meest actief in',
	'Invision_Most_Active_Posts' => '%s berichten in dit forum',
	'Invision_Details' => 'Postdetails',
	'Invision_PPD_Stats' => 'Berichten per dag',
	'Invision_Signature' => 'Onderschrift',
	'Invision_Website' => 'Website',
	'Invision_Total_Posts' => 'Totaal aantal cumulatieve berichten',
	'Invision_User_post_pct_stats' => '( %.2f%% van het totaal aantal forumberichten )',
	'Invision_User_post_day_stats' => '%.2f berichten per dag',
	'Invision_Search_user_posts' => 'Vind alle berichten van deze gebruiker',
	'Invision_Posting_details' => 'Postdetails',
// Invision View Profile - END

	'Only_one_avatar' => 'Er kan maar één avatar gespecificeerd worden',
	'File_no_data' => 'Het bestand via de URL die je ingegeven hebt bevat geen gegevens',
	'No_connection_URL' => 'De verbinding kan niet gemaakt worden naar de URL die je ingegeven hebt',
	'Incomplete_URL' => 'De URL die je ingegeven hebt is niet compleet',
	'Wrong_remote_avatar_format' => 'De URL van je externe avatar is niet geldig',
	'No_send_account_inactive' => 'Sorry, maar jouw wachtwoord kan niet worden verstuurd aangezien je gebruikersaccount op dit moment inactief is. Neem contact op met de beheerder voor meer informatie.',

	'Always_smile' => 'Altijd smilies inschakelen',
	'Always_html' => 'Altijd HTML toestaan',
	'Always_bbcode' => 'Altijd BBCode toestaan',
	'Always_add_sig' => 'Altijd mijn onderschrift toevoegen',
	'Always_notify' => 'Altijd mij informeren voor reacties',
	'Always_notify_explain' => 'Verstuurt een e-mail als iemand heeft gereageerd op een onderwerp waarin jij gereageerd hebt. Deze optie kan altijd worden gewijzigd wanneer je een nieuw bericht plaatst.',

	'Board_style' => 'Forumstijl',
	'Board_lang' => 'Forumtaal',
	'No_themes' => 'Er zijn geen themes in de database',
	'Timezone' => 'Tijdzone',
	'Date_format' => 'Datumformaat',
	'Date_format_explain' => 'De syntax die gebruikt wordt is het zelfde als in PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> functie.',
	'Signature' => 'Onderschrift',
	'Signature_explain' => 'Dit is een tekstblok dat toegevoegd kan worden aan je berichten die je plaatst. Er is een limiet van %d tekens',
	'Public_view_email' => 'Altijd mijn e-mailadres weergeven',

	'Current_password' => 'Huidige wachtwoord',
	'New_password' => 'Nieuw wachtwoord',
	'Confirm_password' => 'Bevestig wachtwoord',
	'Confirm_password_explain' => 'Je moet je huidige wachtwoord bevestigen als je het wilt veranderen of wanneer je je e-mailadres wilt wijzigen',
	'password_if_changed' => 'Je hoeft enkel een wachtwoord in te geven als je het wilt wijzigen',
	'password_confirm_if_changed' => 'Je hoeft enkel je wachtwoord te bevestigen als je hierboven wat gewijzigd hebt',

	'Avatar' => 'Avatar',
	'Avatar_explain' => 'Een kleine grafische afbeelding wordt weergegeven bij je details in je eigen berichten. Er kan maar één avatar tegelijk worden weergegeven. De afmetingen van de afbeelding zitten aan een limiet vast van maximaal %d pixels breed en %d pixels hoog. Geuploade avatars zitten aan een maximale bestandsgrootte van %d KB, en moet kleiner of gelijk zijn aan de maximale afmetingen. Extern gehoste avatars worden automatisch geschaald naar de maximaal toegestane afmetingen.',
	'Upload_Avatar_file' => 'Upload een avatar van je computer',
	'Upload_Avatar_URL' => 'Upload een avatar van een URL',
	'Upload_Avatar_URL_explain' => 'Geef de URL van de locatie van je avatarafbeelding in, deze avatar wordt dan gekopieerd naar deze website.',
	'Pick_local_Avatar' => 'Selecteer een avatar uit de gallerij',
	'Link_remote_Avatar' => 'Link naar een externe avatar',
	'Link_remote_Avatar_explain' => 'Geef de URL van de locatie van je avatarafbeelding in.',
	'Avatar_URL' => 'URL van de avatarafbeelding',
	'Select_from_gallery' => 'Selecteer een avatar uit de gallerij',
	'View_avatar_gallery' => 'Bekijk gallerij',

	'Select_avatar' => 'Avatar selecteren',
	'Return_profile' => 'Avatar annuleren',
	'Select_category' => 'Categorie selecteren',
	
	'Delete_Image' => 'Verwijder afbeelding',
	'Current_Image' => 'Huidige afbeelding',
	
	'Notify_on_privmsg' => 'Mij informeren naar nieuwe privéberichten',
	'Popup_on_privmsg' => 'Popupvenster bij een nieuw privébericht',
	'Popup_on_privmsg_explain' => 'Sommige templates openen een nieuw venster om je te informeren dat er nieuwe privéberichten aanwezig zijn in je postvak.',
	'Hide_user' => 'Verberg mijn onlinestatus',

	'Profile_updated' => 'Je profiel is bijgewerkt',
	'Profile_updated_inactive' => 'Je profiel is bijgewerkt. Maar, je hebt vitale details gewijzigd waardoor je account inactief is geworden. Controleer je e-mail om uit te vinden hoe je je account weer kunt heractiveren, als er dan een beheerdersactivatie nodig is; wacht dan voordat de beheerder deze actie uitgevoerd heeft.',
	
	'Password_mismatch' => 'De wachtwoorden die je hebt ingegeven komen niet overeen.',
	'Current_password_mismatch' => 'Het huidige wachtwoord die je hebt ingegeven komt niet overeen met welke dat is opgeslagen in de database.',
	'Password_long' => 'Je wachtwoord mag niet langer zijn dan 32 tekens.',
	'Too_many_registers' => 'Je hebt het aantal pogingen wat is toegestaan in deze sessie overschreden. Probeer het later nog eens.',
	'Username_taken' => 'Sorry, maar deze gebruikersnaam is al ingebruik.',
	'Username_invalid' => 'Sorry, maar deze gebruikersnaam bevat ongeldige tekens als \'.',
	'Username_disallowed' => 'Sorry, maar deze gebruikersnaam is niet toegestaan.',
	'Email_taken' => 'Sorry, maar deze e-mailadres is al gebruikt door een gebruiker.',
	'Email_banned' => 'Sorry, maar deze e-mailadres is geband.',
	'Email_invalid' => 'Sorry, maar deze e-mailadres is ongeldig.',
	'Signature_too_long' => 'Je onderschrift is te lang.',
	'Fields_empty' => 'Je moet de verplichte velden invullen.',
	'Avatar_filetype' => 'De toegestane bestandstype zijn .jpg, .gif or .png',
	'Avatar_filesize' => 'De afbeeldingsbestandsgrootte moet kleiner zijn dan %d KB', // The avatar image file size must be less than 6 KB
	'Avatar_imagesize' => 'De avatar moet kleiner zijn dan %d pixels breed en %d pixels hoog',
	
	'Welcome_subject' => 'Welkom op %s ', // Welcome to my.com forums
	'New_account_subject' => 'Nieuwe gebruikersaccount',
	'Account_activated_subject' => 'Account is geactiveerd',

	'Account_added' => 'Bedankt voor je registratie. Je account is aangemaakt. Je kunt nu inloggen met je gebruikersnaam en wachtwoord',
	'Account_inactive' => 'Je account is aangemaakt. Maar dit forum heeft accountactivatie door de gebruiker ingeschakeld. Een activatiesleutel is verzonden naar je e-mailadres die je hebt ingegeven. Controleer je e-mail voor meer informatie',
	'Account_inactive_admin' => 'Je account is aangemaakt. Maar dit forum heeft accountactivatie door de beheerder ingeschakeld. Een e-mail is verzonden naar de beheerder en je wordt geinformeerd wanneer je account is geactiveerd',
	'Account_active' => 'Je account is nu geactiveerd. Bedankt voor je registratie',
	'Account_active_admin' => 'De account is nu geactiveerd',
	'Reactivate' => 'Reactiveer je account!',
	'Already_activated' => 'Je hebt je account al geactiveerd',
	'COPPA' => 'Je account is aangemaakt maar moet nog worden goedgekeurd. Controleer je e-mail voor meer informatie.',

	'Registration' => 'Registratievoorwaarden',
	'Reg_agreement' => 'De beheerders en moderators van dit forum zullen proberen ongewenst materiaal zo snel mogelijk te verwijderen van de site. Het is echter onmogelijk om ieder bericht te controleren. Door in te stemmen met de voorwaarden erken je dat alle berichten op dit forum de meningen en gezichtspunten van de gebruikers zijn en niet van de beheerders, moderators of webmaster (behalve bij de berichten die door deze mensen geplaatst zijn). Het beheer kan niet aansprakelijk gesteld worden voor de inhoud van berichten van gebruikers.<br /><br />Je geeft verder aan dat je geen kwetsende, obscene, vulgaire, lasterlijke, haatdragende, bedreigende, seksueel-geori&euml;nteerde berichten plaatst. Verder dien je je te houden aan de van toepassing zijnde wetten en regels. Als je je niet houdt aan deze voorwaarden of aanwijzingen van het beheer niet volgt, kun je meteen en permanent geband worden en zal eventueel je serviceprovider op de hoogte worden gesteld van je gedrag. Het IP-adres van je computer wordt bij ieder bericht opgeslagen om het beheer van de site te vereenvoudigen. Deze informatie zal niet bekend worden gemaakt aan derden zonder jouw toestemming. Het beheer van de website is niet aansprakelijk voor hackpogingen die het gevolg zijn van het eventueel bekend worden van deze informatie.<br /><br />Dit forumsysteem maakt gebruik van cookies om informatie op te slaan op je computer. Deze cookies bevatten geen informatie die je eerder hebt ingevuld; dit verbetert jouw gebruikerservaring. De e-mailadres die je ingegeven hebt wordt alleen gebruikt om jouw registratiedetails en wachtwoord (en voor het versturen van nieuwe wachtwoorden als je de huidige wachtwoord bent vergeten) te versturen.<br /><br />Bij een klik op Registreren ga je akkoord met de hierboven gestelde voorwaarden.',

	'Agreement' => 'Voorwaarden',
	'Agree_under_13' => 'Ik stem in met deze voorwaarden en mijn leeftijd is <b>jonger</b>dan 13 jaar',
	'Agree_over_13' => 'Ik stem in met deze voorwaarden',
	'Agree_not' => 'Ik stem niet in met deze voorwaarden',
	'Agree_checkbox' => 'Ik stem definitief in met deze voorwaarden',
	'Agree_checkbox_Error' => 'Je moet de controlebox onderaan de pagina invullen om te kunnen registreren!',

	'Wrong_activation' => 'De activatiesleutel die je hebt komt niet overeen met de in de database opgeslagen sleutel.',
	'Send_password' => 'Stuur me een nieuw wachtwoord',
	'Password_updated' => 'Een nieuw wachtwoord is aangemaakt; controleer je e-mail voor meer informatie over hoe je het activeert.',
	'No_email_match' => 'De e-mailadres die je hebt ingegeven komt niet overeen met welke bekend is van deze gebruikersnaam.',
	'New_password_activation' => 'Nieuw wachtwoordactivatie',
	'Password_activated' => 'Je account is geheractiveerd. Om in te loggen gebruik je het wachtwoord wat is verzonden in de e-mail die je ontvangen heb.',

	'Send_email_msg' => 'Verstuur een e-mailbericht',
	'No_user_specified' => 'Er is geen gebruiker gespecificeerd',
	'User_prevent_email' => 'Deze gebruiker stelt het niet op prijs om een e-mail te ontvangen. Probeer naar deze gebruiker een privébericht te sturen.',
	'User_not_exist' => 'Deze gebruiker bestaat niet',
	'CC_email' => 'Verstuur een kopie van deze e-mail naar mijzelf',
	'Email_message_desc' => 'Dit bericht wordt verzonden als platte tekst, dus gebruik van HTML of BBCode is overbodig. De terugzendadres van dit bericht wordt naar jouw e-mailadres gezet.',
	'Flood_email_limit' => 'Je mag geen andere e-mail versturen op dit moment. Probeer het later.',
	'Recipient' => 'Ontvanger',
	'Email_sent' => 'De e-mail is verzonden.',
	'Send_email' => 'Verstuur e-mail',
	'Empty_sender_email' => 'Je moet een e-mailadres specificeren van de ontvanger.',
	'Empty_subject_email' => 'Je moet een onderwerp specificeren voor de e-mail.',
	'Empty_message_email' => 'Je moet een bericht ingeven om te mailen.',


// Visual confirmation system strings
	'Confirm_code_wrong' => 'De bevestigingscode die je hebt ingegeven is niet juist',
//'Too_many_registers' => 'You have exceeded the number of attempts for this session. Please try again later.',
	'Confirm_code_impaired' => 'Indien je de code niet kunt lezen, blind of slechtziend bent, neem dan contact op met de %sbeheerder%s.',
	'Confirm_code' => 'Bevestigingscode',
	'Confirm_code_explain' => 'Geef de code exact in zoals je het ziet. De code is hoofdlettergevoelig en een nul wordt weergegeven als een 0 met een diagonale lijn erdoor.',



// Members list
	'Select_sort_method' => 'Selecteer sorteermethode',
	'Sort' => 'Sorteren',
	'Sort_Top_Ten' => 'Top Tien',
	'Sort_Joined' => 'Aangemeld',
	'Sort_Username' => 'Gebruiker',
	'Sort_Location' => 'Woonplaats',
	'Sort_Posts' => 'Totaal aantal berichten',
	'Sort_Email' => 'E-mail',
	'Sort_Website' => 'Website',
	'Sort_Ascending' => 'Oplopend',
	'Sort_Descending' => 'Aflopend',
	'Order' => 'Volgorde',


// Group control panel
	'Group_Control_Panel' => 'Groepspaneel',
	'Group_member_details' => 'Groeplidmaatschapdetails',
	'Group_member_join' => 'Lid worden van een groep',
	
	'Group_Information' => 'Groepsgegevens',
	'Group_name' => 'Groepsnaam',
	'Group_description' => 'Groepsomschrijving',
	'Group_membership' => 'Groeplidmaatschap',
	'Group_Members' => 'Groepsleden',
	'Group_Moderator' => 'Groepsmoderator',
	'Pending_members' => 'Wachtende leden',
	
	'Group_type' => 'Groepstype',
	'Group_open' => 'Open groep',
	'Group_closed' => 'Gesloten groep',
	'Group_hidden' => 'Verborgen groep',

	'Current_memberships' => 'Huidige lidmaatschappen',
	'Non_member_groups' => 'Geen-leden groepen',
	'Memberships_pending' => 'Wachtende lidmaatschappen',
	
	'No_groups_exist' => 'Er bestaan geen groepen',
	'Group_not_exist' => 'Deze gebruikersgroep bestaat niet',
	
	'Join_group' => 'Lid worden van groep',
	'No_group_members' => 'Deze groep heeft geen leden',
	'Group_hidden_members' => 'Deze groep is verborgen; je kan deze niet bekijken voor lidmaatschap',
	'No_pending_group_members' => 'Deze groep heeft geen wachtende leden',
	'Group_joined' => 'Je bent succesvol aangemeld voor deze groep.<br />Je krijgt vanzelf bericht of je wordt toegelaten tot de groep via e-mail van de groepsmoderator.',
	'Group_request' => 'Een aanmelding om lid te worden van jouw groep is onderweg.',
	'Group_approved' => 'Jouw aanmelding is goedgekeurd.',
	'Group_added' => 'Je bent toegevoegd tot deze gebruikersgroep.',
	'Already_member_group' => 'Je bent al lid van deze groep',
	'User_is_member_group' => 'Gebruiker is al lid van deze groep',
	'Group_type_updated' => 'Groepstype is succesvol bijgewerkt.',
	'Could_not_add_user' => 'De geselecteerde gebruiker bestaat niet.',
	'Could_not_anon_user' => 'Je kan niet een anonieme gebruiker groepslid maken.',
	'Confirm_unsub' => 'Weet je zeker dat je je lidmaatschap wilt opzeggen van deze groep?',
	'Confirm_unsub_pending' => 'Je aanvraag voor deze groep is nog niet gekeurd; weet je zeker dat je je lidmaatschap wilt opzeggen van deze groep?',
	'Unsub_success' => 'Je hebt succesvol je lidmaatschap opgezegd van deze groep.',
	'Approve_selected' => 'Geselecteerde gebruikers toelaten',
	'Deny_selected' => 'Geselecteerde gebruikers afwijzen',
	'Not_logged_in' => 'Je moet ingelogd zijn om lid te worden van een groep.',
	'Remove_selected' => 'Geselecteerde gebruikers verwijderen',
	'Add_member' => 'Lid toevoegen',
	'Not_group_moderator' => 'Je bent niet de groepsmoderator, je kan daarom deze actie ook niet uitvoeren.',
	'Login_to_join' => 'Log in om lid te worden of de groep te beheren',
	'This_open_group' => 'Dit is een open groep: klik om lid te worden',
	'This_closed_group' => 'Dit is een gesloten groep: %s',
	'This_hidden_group' => 'Dit is een verborgen groep: %s',
	'Member_this_group' => 'Je bent een lid van deze groep',
	'Pending_this_group' => 'Jouw lidmaatschap van deze groep is wachtende',
	'Are_group_moderator' => 'Je bent groepsmoderator',
	'None' => 'Geen',
	'Subscribe' => 'Aanmelden',
	'Unsubscribe' => 'Afmelden',
	'View_Information' => 'Bekijk gegevens',

// Search
	'Search_query' => 'Zoekopdracht',
	'Search_options' => 'Zoekopties',
	
	'Search_keywords' => 'Zoek op trefwoorden',
	'Search_keywords_explain' => 'Je kunt <u>AND</u> gebruiken om woorden aan te geven die in het resultaat MOETEN voorkomen, <u>OR</u> om woorden aan te geven die MOGEN voorkomen in het resultaat en <u>NOT</u> om woorden aan te geven die NIET in het resultaat mogen voorkomen. Gebruik * als jokker om te zoeken op een deel van een woord.',
	'Search_author' => 'Zoek op auteur',
	'Search_author_explain' => 'Gebruik * als joker om op een deel van een naam te zoeken',
	'Search_author_topic_starter' => 'Zoek alleen onderwerpen gestart door deze auteur',
	
	'Search_for_any' => 'Zoek op een van de woorden',
	'Search_for_all' => 'Zoek naar alle woorden',
	'Search_title_msg' => 'Zoek in onderwerptitel en berichttekst',
	'Search_title_only' => 'Zoek alleen in onderwerptitel',
	'Search_msg_only' => 'Zoek alleen in berichttekst',

	'Return_first' => 'Bekijk eerste', // followed by xxx characters in a select box
	'characters_posts' => 'tekens van het bericht',
	
	'Search_previous' => 'Zoek in afgelopen', // followed by days, weeks, months, year, all in a select box

	'Sort_by' => 'Sorteer op',
	'Sort_Time' => 'Berichttijd',
	'Sort_Post_Subject' => 'Onderwerp',
	'Sort_Topic_Title' => 'Onderwerptitel',
	'Sort_Author' => 'Auteur',
	'Sort_Forum' => 'Forum',
	
	'Display_results' => 'Resultaat weergeven als',
	'All_available' => 'Alle beschikbare',
	'No_searchable_forums' => 'Je hebt niet de permissie om te zoeken in een forum op deze website.',
	
	'No_search_match' => 'Er zijn geen berichten die overeenkomen met je zoekcriteria',
	'Found_search_match' => 'Er is %d resultaat gevonden', // eg. Search found 1 match
	'Found_search_matches' => 'Er zijn %d resultaten gevonden', // eg. Search found 24 matches
	
	'Close_window' => 'Sluit venster',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'Sorry, maar alleen %s mogen mededelingen plaatsen in dit forum.',
	'Sorry_auth_sticky' => 'Sorry, maar alleen %s mogen vastegepinde berichten plaatsen in dit forum.',
	'Sorry_auth_read' => 'Sorry, maar alleen %s mogen onderwerpen lezen in dit forum.',
	'Sorry_auth_post' => 'Sorry, maar alleen %s mogen onderwerpen plaatsen in dit forum.',
	'Sorry_auth_reply' => 'Sorry, maar alleen %s mogen reageren op onderwerpen in dit forum.',
	'Sorry_auth_edit' => 'Sorry, maar alleen %s mogen berichten wijzigen in dit forum.',
	'Sorry_auth_delete' => 'Sorry, maar alleen %s mogen berichten verwijderen in dit forum.',
	'Sorry_auth_vote' => 'Sorry, maar alleen %s mogen stemmen in peilingen in dit forum.',
	
	// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>anonieme gebruikers</b>',
	'Auth_Registered_Users' => '<b>geregistreerde gebruikers</b>',
	'Auth_Self_Users' => '<b>specifieke gebruikers</b>',
	'Auth_Users_granted_access' => '<b>gebruikers met speciale toegang</b>',
	'Auth_Moderators' => '<b>moderators</b>',
	'Auth_Administrators' => '<b>beheerders</b>',
	
	'Not_Moderator' => 'Je bent niet een moderator van dit forum.',
	'Not_Authorised' => 'Geen toegang',
	
	'You_been_banned' => 'Je bent geband op dit forum.<br />Neem contact op met de webmaster of beheerder voor meer informatie.',

// Viewonline
	'Reg_users_zero_online' => 'Er zijn 0 geregistreerde gebruikers en ', // There are 5 Registered and
	'Reg_users_online' => 'Er zijn %d geregistreerde gebruikers en ', // There are 5 Registered and
	'Reg_user_online' => 'Er is %d geregistreerde gebruiker en ', // There is 1 Registered and
	'Hidden_users_zero_online' => '0 verborgen gebruikers online', // 6 Hidden users online
	'Hidden_users_online' => '%d verborgen gebruikers online', // 6 Hidden users online
	'Hidden_user_online' => '%d verborgen gebruiker online', // 6 Hidden users online
	'Guest_users_online' => 'Er zijn %d gasten online', // There are 10 Guest users online
	'Guest_users_zero_online' => 'Er zijn 0 gasten online', // There are 10 Guest users online
	'Guest_user_online' => 'Er is %d gast online', // There is 1 Guest user online
	'No_users_browsing' => 'Er zijn geen gebruikers online op dit forum',

	'Online_explain' => 'Deze gegevens zijn gebaseerd op gebruikers die online waren in de laatste ' . intval(ONLINE_REFRESH / 60) . ' minuten',
	'Online_today' => 'Deze gegevens zijn gebaseerd op gebruikers die online waren vandaag',
	
	'Forum_Location' => 'Forumlocatie',
	'Last_updated' => 'Laatst bijgewerkt',
	
	'Forum_index' => 'Forumindex',
	'Portal' => 'Startpagina',
	'Logging_on' => 'Inloggen',
	'Posting_message' => 'Bericht plaatsen',
	'Searching_forums' => 'Zoeken in forums',
	'Viewing_profile' => 'Bekijk profiel',
	'Viewing_HACKSLIST' => 'Bekijk credits',
	'Viewing_online' => 'Bekijk wie is online',
	'Viewing_member_list' => 'Bekijk gebruikerslijst',
	'Viewing_priv_msgs' => 'Bekijk privéberichten',
	'Viewing_FAQ' => 'Bekijk FAQ',
	'Viewing_KB' => 'Bekijk KB',
	'Viewing_RSS' => 'Bekijk RSS Feed',


// Moderator Control Panel
	'Mod_CP' => 'Moderatorpaneel',
	'Mod_CP_explain' => 'Het is mogelijk via dit paneel om grote moderatieacties in een keer uit te voeren voor dit forum. Je kan sluiten, heropenen, verplaatsen en verwijderen van een groot aantal onderwerpen tegelijk.',
	
	'Select' => 'Selecteren',
	'Delete' => 'Verwijderen',
	'Move' => 'Verplaatsen',
	'Copy' => 'Kopieren',
	'Lock' => 'Sluiten',
	'Unlock' => 'Heropenen',
	
	'Topics_Removed' => 'De geselecteerde onderwerpen zijn succesvol verwijderd uit de database.',
	'Topics_Locked' => 'De geselecteerde onderwerpen zijn gesloten.',
	'Topics_Moved' => 'De geselecteerde onderwerpen zijn verplaatst.',
	'Topics_Unlocked' => 'De geselecteerde onderwerpen zijn heropend.',
	'No_Topics_Moved' => 'Er zijn geen onderwerpen verplaatst.',
	
	'Confirm_delete_topic' => 'Weet je zeker dat je de geselecteerde onderwerp(en) wilt verwijderen?',
	'Confirm_lock_topic' => 'Weet je zeker dat je de geselecteerde onderwerp(en) wilt sluiten?',
	'Confirm_unlock_topic' => 'Weet je zeker dat je de geselecteerde onderwerp(en) wilt heropenen?',
	'Confirm_move_topic' => 'Weet je zeker dat je de geselecteerde onderwerp(en) wilt verplaatsen?',
	
	'Move_to_forum' => 'Verplaats naar forum',
	'Leave_shadow_topic' => 'Laat schaduwonderwerp achter in oude forum.',

	'Split_Topic' => 'Splits onderwerppaneel',
	'Split_Topic_explain' => 'Splitst een onderwerp naar twee onderwerpen, door berichten individueel te selecteren of door splitsing na een geselecteerde bericht',
	'Split_title' => 'Nieuwe onderwerptitel',
	'Split_forum' => 'Forum voor nieuw onderwerp',
	'Split_posts' => 'Splits geselecteerde berichten',
	'Split_after' => 'Splits vanaf geselecteerde bericht',
	'Topic_split' => 'Het geselecteerde onderwerp is succesvol gesplitst',

	'Too_many_error' => 'Je hebt te veel berichten geselecteerd. Je kunt maar één bericht selecteren om een onderwerp na dit bericht te splitsen!',
	
	'None_selected' => 'Je hebt geen enkel onderwerp geselecteerd om te gebruiken voor deze actie. Ga terug en selecteer minimaal één onderwerp.',
	'New_forum' => 'Nieuw forum',
	
	'This_posts_IP' => 'IP-adres van dit bericht',
	'Other_IP_this_user' => 'Andere IP-adressen die de gebruiker gebruikt heeft',
	'Users_this_IP' => 'Gebruikers met dezelfde IP-adres',
	'IP_info' => 'IP-informatie',
	'Lookup_IP' => 'Zoek op IP-adres',

// Errors (not related to a specific failure on a page)
	'Information' => 'Informatie',
	'Critical_Information' => 'Belangrijke informatie',
	
	'General_Error' => 'Algemene fout',
	'Critical_Error' => 'Belangrijke fout',
	'An_error_occured' => 'Er is een fout opgetreden',
	'A_critical_error' => 'Er is een belangrijke fout opgetreden',
	'Admin_reauthenticate' => 'Om in het beheerderspaneel te komen moet je opnieuw inloggen.',
	
	'Topic_description' => 'Omschrijving van je onderwerp',
//'Description' => 'Topic Description',

	'Guestbook' => 'Gastenboek',
	'Viewing_guestbook' => 'Lezen van gastenboek',
	
	'Click_return_preferences' => 'Klik %shier%s om terug te keren naar voorkeuren',
	
	'Warn_new_post' => 'Er is een nieuwe reactie in dit onderwerp. Bekijk eerst de nieuwe reactie in het onderwerpvoorbeeld voordat je je bericht plaatst.',
	
	'Today_at' => '<b class="date-today">Vandaag</b> om ',
	'Yesterday_at' => '<b class="date-yesterday">Gisteren</b> om ',
	'TODAY' => '<b class="date-today">Vandaag</b>',
	'YESTERDAY' => '<b class="date-yesterday">Gisteren</b>',

// Birthday - BEGIN
	'Birthday' => 'Verjaardag',
	'No_birthday_specify' => 'Niet gespecificeerd',
	'Age' => 'Leeftijd',
	'Wrong_birthday_format' => 'De verjaardaagformaat is niet correct ingevuld.',
	'Birthday_to_high' => 'Sorry, maar deze website accepteert geen gebruikers ouder dan %d jaar',
	'Birthday_require' => 'Je verjaardag is verplicht op deze website',
	'Birthday_to_low' => 'Sorry, maar deze website accepteert geen gebruikers jonger dan %d jaar',
	'Submit_date_format' => 'd-m-Y', //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different separators are accepted)
	'Birthday_greeting_today' => 'We willen je feliciteren met het feit dat je jarig bent vandaag en %s jaar bent geworden vandaag.<br /><br />&nbsp;',//%s is substituted with the users age
	'Birthday_greeting_prev' => 'We willen je feliciteren met het feit dat je jarig bent geweest en %s jaar bent geworden op %s.<br /><br />&nbsp;',//%s is substituted with the users age, and birthday
	'Greeting_Messaging' => 'Gefeliciteerd',
	'Birthday_today' => 'Gebruikers die jarig zijn vandaag:',
	'Birthday_week' => 'Gebruikers die jarig zijn in de komende %d dagen:',
	'Nobirthday_week' => 'Er zijn geen gebruikers die jarig zijn in de komende %d dagen', // %d is substituted with the number of days
	'Nobirthday_today' => 'Er zijn geen gebruikers die jarig zijn vandaag',
	'Year' => 'Jaar',
	'Month' => 'Maand',
	'Day' => 'Dag',
// Birthday - END

// Start add - Gender MOD
	'Gender' => 'Geslacht',//used in users profile to display which gender he/she is
	'Male' => 'Man',
	'Female' => 'Vrouw',
	'No_gender_specify' => 'Niet gespecificeerd',
	'Gender_require' => 'Je geslacht is verplicht op deze website.',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
	'Topic_view_users' => 'Lijst van gebruikers die dit onderwerp bekeken hebben',
	'Topic_time' => 'Laatst bekeken',
	'Topic_count' => 'Bekeken',
	'Topic_view_count' => 'Kijkcijfer',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
	'Give_G_card' => 'Reactiveer gebruiker',
	'Give_Y_card' => 'Geef gebruiker waarschuwing #%d',
	'Give_R_card' => 'Ban deze gebruiker nu',
	'Ban_update_sucessful' => 'De banlijst is succesvol bijgewerkt',
	'Ban_update_green' => 'De gebruiker is geheractiveerd',
	'Ban_update_yellow' => 'De gebruiker heeft een waarschuwing ontvangen en heeft nu een totaal aantal van %d waarschuwingen van het maximale aantal %d waarschuwingen',
	'Ban_update_red' => 'De gebruiker is nu geband',
	'Ban_reactivate' => 'Je account is geheractiveerd',
	'Ban_warning' => 'Je hebt een waarschuwing ontvangen',
	'Ban_blocked' => 'Je account is nu geblokkeerd',
	'Click_return_viewtopic' => 'Klik %shier%s om terug te keren naar het onderwerp',
/*
	'Rules_ban_can' => 'You <b>can</b> ban other users in this forum',
	'Rules_greencard_can' => 'You <b>can</b> un-ban users in this forum',
	'Rules_bluecard_can' => 'You <b>can</b> report post to moderators in this forum',
*/
	'Rules_ban_can' => 'Ja <b>mag</b> andere gebruikers bannen',
	'Rules_greencard_can' => 'Je <b>mag</b> gebruikers unbannen',
	'Rules_bluecard_can' => 'Je <b>mag</b> berichten rapporteren aan moderators',
	'user_no_email' => 'De gebruiker heeft geen e-mail, daarom kan er geen bericht worden verstuurd daarheen. Je zult een privébericht moeten sturen naar diegene',
	'user_already_banned' => 'De geselecteerde gebruiker is al geband',
	'Ban_no_admin' => 'Deze gebruiker is een beheerder en mag niet gewaarschuwd of geband worden',
	'Give_b_card' => 'Rapporteer dit bericht aan de moderators van dit forum',
	'Clear_b_card' => 'Dit bericht heeft %d blauwe kaarten nu. Als je op deze knop drukt wis je deze',
	'No_moderators' => 'Het forum heeft geen moderators. Er kunnen dus geen rapporten worden verzonden!',
	'Post_repported' => 'Dit bericht is gerapporteerd aan %d moderators',
	'Post_repported_1' => 'Dit bericht is gerapporteerd aan de moderator',
	'Post_repport' => 'Berichtrapport', //Subject in email notification
	'Post_reset' => 'De blauwe kaarten van dit bericht zijn allemaal verwijderd',
	'Search_only_bluecards' => 'Zoek alleen naar berichten met blauwe kaarten',
	'Send_message' => 'Klik %shier%s om een bericht aan de moderators te schrijven of <br />',
	'Send_PM_user' => 'Klik %shier%s om een pb aan de gebruiker te schrijven of',
	'Link_to_post' => 'Klik %shier%s om naar het gerapporteerde bericht te gaan
--------------------------------

',
	'Post_a_report' => 'Plaats een rapport',
	'Report_stored' => 'Jouw rapport is succesvol ingevoerd',
	'Send_report' => 'Klik %shier%s terug te keren naar het originele bericht',
	'Red_card_warning' => 'Je bent nu bezig om gebruiker:%s een rode kaart te geven, dit bant de betrokken gebruiker, weet je dat zeker?',
	'Yellow_card_warning' => 'Je bent nu bezig om gebruiker:%s een gele kaart te geven, dit geeft een waarschuwing aan de betrokken gebruiker, weet je dat zeker?',
	'Green_card_warning' => 'Je bent nu bezig om gebruiker:%s een groene kaart te geven, dit unbant de betrokken gebruiker, weet je dat zeker?',
	'Blue_card_warning' => 'Je bent nu bezig om een blauwe kaart te plaatsen, dit betekent dat je een moderator op de hoogte brengt van dit bericht. Weet je zeker dat je de moderators op de hoogte wilt brengen van dit bericht?',
	'Clear_blue_card_warning' => 'Je bent nu bezig om alle blauwe kaarten van dit bericht te verwijderen. Wil je dat zeker deze actie uitvoeren?',
	'Warnings' => 'Waarschuwingen: %d', //shown beside users post, if any warnings given to the user
	'Banned' => 'Op dit moment geband',//shown beside users post, if user are banned

// Start add - Last visit MOD
	'Last_logon' => 'Laatste bezoek',
	'Hidde_last_logon' => 'Verborgen',
	'Never_last_logon' => 'Nooit',
	'Users_today_zero_total' => 'In totaal <b>0</b> gebruikers hebben deze website vandaag bezocht: ',
	'Users_today_total' => 'In totaal <b>%d</b> gebruikers hebben deze website vandaag bezocht: ',
	'User_today_total' => 'In totaal <b>%d</b> gebruiker heeft deze website vandaag bezocht: ',
	'Users_lasthour_explain' => ', waarvan %d gebruikers in het laatste uur.',
	'Users_lasthour_none_explain' => '', //shown if no one has visited in the last hour, fill if you like
	
	'Years' => 'jaren',
	'Year' => 'jaar',
	'Weeks' => 'weken',
	'Week' => 'week',
	'Day' => 'dag',
	'Total_online_time' => 'Totaal onlinetijd',
	'Last_online_time' => 'Laatste onlinetijd',
	'Number_of_visit' => 'Aantal bezoeken',
	'Number_of_pages' => 'Aantal paginahits',
// End add - Last visit MOD

	'total_site_hits_key' => '%V% pagina\'s bekeken sinds %D%.',
	
	'Message_too_short' => 'Bericht is te kort',

// Start add - Online/Offline/Hidden Mod
	'Online' => 'Online',
	'Offline' => 'Offline',
	'Hidden' => 'Verborgen',
	
	'Online_status' => 'Status',
// End add - Online/Offline/Hidden Mod
	'Download' => 'Download',

//signature editor
	'sig_edit_link' => 'Onderschrift',
	'sig_description' => 'Bewerk onderschrift (<b>Voorbeeld inbegrepen</b>)',
	'sig_edit' => 'Bewerk onderschrift',
	'sig_current' => 'Huidig onderschrift',
	'sig_none' => 'Er is geen onderschrift beschikbaar',
	'sig_save' => 'Opslaan',
	'sig_save_message' => 'Onderschrift succesvol opgeslagen!',
	
	'Statistics' => 'Statistieken',

// Start add - Global announcement MOD
	'Globalannounce' => 'Forummededeling',
	'Globalannounce' => 'Nieuwe forummededeling',
// End add - Global announcement MOD
	'Global_Announcements' => 'Forummededeling',
	'Announcements' => 'Mededelingen',
	'Sticky_Topics' => 'Vastgepinde onderwerpen',
	'Announcements_and_Sticky' => 'Mededelingen en vastgepinde onderwerpen',
// db_update generator
	'Db_update_generator' => 'DB Update Generator',
	'Instructions' => 'Instructies',
	'SQL_instructions' => 'Dit software genereert PHP bestanden, welke jouw toestaat, de database met behulp van je browser bij te werken. Er zijn een paar dingen, die je goed moet weten, wanneer je SQL aanwijzingen in de box hieronder invoert.<br />Wees er zeker van, dat alle SQL aanvragen met een puntkomma eindigen. Wanneer dat niet zo is wordt het bestand foutief gegenereerd. Als volgende moet je zeker van zijn, dat de tabellen met een "phpbb_" prefix beginnen. Deze wordt automatisch met een variabele gezet, welke het mogelijk maakt om ook op andere forums, de db_update.php bestand te kunnen gebruiken, als die tabellen ook met dezelfde prefix beginnen.',
	'Enter_SQL' => 'SQL invoer',
	'Enter_SQL_explain' => 'MySQL is de s\'werelds meest populaire open-source database, geroemd om de snelheid en de mogelijkheden.',
	'Output_SQL' => 'SQL uitvoer',
	'Output_SQL_explain' => 'Kopieer de tekst vanuit het tekstgebied rechts en voeg het aan een leeg bestand toe. Sla het bestand op als <u>db_update.php</u> en upload het naar je server. Start hem eenmaal met je browser.<br /><br />Alternatief, klik op de downloadknop en je download het bestand direct naar jouw computer (aanbevolen).',
	'Download' => 'Download',
	
	'TOP_POSTERS' => 'Top Posters',

// TELL A FRIEND
	'Tell_Friend' => 'E-mail naar een vriend',
	'Tell_Friend_Sender_User' => 'Jouw naam',
	'Tell_Friend_Sender_Email' => 'Jouw e-mailadres',
	'Tell_Friend_Reciever_User' => 'Naam van je vriend',
	'Tell_Friend_Reciever_Email' => 'E-mailadres van je vriend',
	'Tell_Friend_Wrong_Email' => 'Je hebt een niet geldig e-mailadres ingevuld.',
	'Tell_Friend_Msg' => 'Jouw bericht:',
	'Tell_Friend_Title' => 'Informeer een vriend',
	'Tell_Friend_Body' => "Hallo,\nIk heb zojuist een onderwerp gelezen met de titel &raquo;{TOPIC}&laquo; op {SITENAME} en misschien is deze ook interessant voor jouw om te lezen.\n\nHier is de link: {LINK}\n\nKlik erop en lees het en als je erop wilt reageren kun je een eigen account registreren als je dat nog niet gedaan hebt.",

// Begin Thanks Mod
	'thankful' => 'Dankbare gebruikers',
	'thanks_to' => 'Bedankt voor deze bruikbare onderwerp',
	'thanks_end' => ':',
	'thanks_alt' => 'Bedanken voor onderwerp',
	'thanks_add_rate' => 'Dank de auteur voor deze bruikbare onderwerp',
	'thanked_before' => 'Je hebt de auteur al bedankt voor dit onderwerp',
	'thanks_add' => 'Je bedankje is gegeven',
	'thanks_not_logged' => 'Je moet ingelogd zijn om iemand te bedanken voor zijn/haar bericht',
	'thanks2' => 'Dank je wel!<br />',
// End Thanks Mod

//Begin Lo-Fi Mod
	'Lofi' => 'Lo-Fi versie',
//'Full_Version' => 'Full Version',
	'Full_Version' => 'Dit is een "Lo-Fi" versie van ons hoofdinhoud. Om de volledige versie met meer informatie en afbeeldingen te bekijken, klik dan hier.',
	'quote_lofi' => 'Citeer',
	'edit_lofi' => 'Bewerk',
	'ip_lofi' => 'IP',
	'del_lofi' => 'Verwijder',
	'profile_lofi' => 'Profiel',
	'pm_lofi' => 'PB',
	'email_lofi' => 'E-mail',
	'website_lofi' => 'Website',
	'icq_lofi' => 'ICQ',
	'aim_lofi' => 'AIM',
	'yim_lofi' => 'YIM',
	'msnm_lofi' => 'MSN',
	'quick_lofi' => 'Snelle reactie',
	'new_pm_lofi' => 'Verstuur een PB',
//End Lo-Fi Mod

// Retroactive Signature MOD
	'Retro_sig' => 'Voeg mijn onderschrift toe bij al mijn vorige berichten',
	'Retro_sig_explain' => 'Als je je onderschrift bewerkt/toevoegt, standaard voegt phpBB dit toe aan je toekomstige berichten',
	'Retro_sig_checkbox' => 'Vink de controlebox aan als je je onderschrift ook aan je vorige berichten wilt toevoegen',
// End Retro Sig MOD

	'legend' => 'Legenda',
	'users' => 'Gebruikers',
//added to autogroup mod
	'No_more' => 'er worden geen gebruikers geaccepteerd',
	'No_add_allowed' => 'automatische gebruikerstoevoeging is niet toegestaan',
	'Join_auto' => 'Je mag lid worden van deze groep, als je berichtaantal overeenkomt met de groepscriteria',

// merge topics
	'Merge' => 'Samenvoegen',
	'Merge_topic' => 'Onderwerpen samenvoegen',
	'Topics_Merged' => 'De geselecteerde onderwerpen zijn samengevoegd.',
	'No_Topics_Merged' => 'Er zijn geen onderwerpen samengevoegd.',
	'Confirm_merge_topic' => 'Weet je zeker dat je de geselecteerde onderwerpen wilt samenvoegen?',
	
	'Downloads' => 'Downloads',

// Start add - Bin Mod
	'Move_bin' => 'Verplaats dit onderwerp naar de prullenbak',
	'Topics_Moved_bin' => 'De geselecteerde onderwerpen zijn verplaatst naar de prullenbak.',
	'Bin_disabled' => 'Prullenbak is uitgeschakeld',
	'Bin_recycle' => 'Recyclen',
// End add - Bin Mod
	'Recent_topics' => 'Recente onderwerpen', // Recent Topics
	
	'Topics_Title_Edited' => 'De titels van de geselecteerde onderwerpen zijn bewerkt.',
	'Edit_title' => 'Titel bewerken',
	'PM' => 'PB',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'IP-adresinformatie alleen voor moderators',
	'Registered_ip_address' => 'Geregistreerde IP-adres',
	'Registered_hostname' => 'Geregistreerde hostnaam',
	'Other_registered_ips' => 'Andere gebruikers geregistreerd van %s', //%s is the IP address
	'Other_posted_ips' => 'IP-adressen welke gebruikt zijn door deze gebruiker',
	'Search_ip' => 'Zoek op berichten vanaf dit IP-adres',
	'Search_ip_explain' => 'Geef een IP-adres in, in het formaat als <u>127.0.0.1</u> -- je mag gebruikmaken van * als joker om te zoeken op delen van een IP-adres zoals <u>127.*.*.1</u>',
	'IP' => 'IP',
	'Whois' => 'Whois',
	'Browser' => 'Browser',
	'No_other_registered_ips' => 'Er zijn geen andere gebruikers die zich hebben geregistreerd met dit IP-adres.',
	'No_other_posted_ips' => 'Deze gebruiker heeft geen berichten geplaatst.',
	'Not_recorded' => 'Niet bekend',
	'Logins' => 'Loginpogingen',
	'No_logins' => 'Er zijn geen loginpogingen bekend van deze gebruiker.',
// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'Klik op de afbeelding om deze te zien in de originele afmetingen',
	'LIW_click_image_explain' => 'Klik op de afbeelding om deze te zien in de originele afmetingen',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => 'Album',
	'Personal_Gallery' => 'Persoonlijke gallerij',
	'Personal_Gallery_Of_User' => 'Persoonlijke gallerij van %s',
	'Personal_Gallery_Of_User_Profile' => 'Persoonlijke gallerij van %s (%d afbeeldingen)',
	'Show_All_Pic_View_Mode_Profile' => 'Bekijk alle afbeeldingen in de persoonlijke gallerij van %s (zonder subcategorieen)',
	'Not_allowed_to_view_album' => 'Sorry, maar je bent niet bevoegd om de album te bekijken.',
	'Not_allowed_to_upload_album' => 'Sorry, maar je bent niet bevoegd om een nieuwe afbeeldingen te uploaden in de album. Neem contact op met de beheerder voor meer informatie.',
	'Album_empty' => 'Er zijn geen afbeeldingen in de album<br />Klik op de <b>Upload nieuwe afbeelding</b> link op deze pagina om een nieuwe afbeelding te uploaden.',
	'Album_empty2' => 'Er zijn geen afbeeldingen in de album.',
	'Upload_New_Pic' => 'Upload nieuwe afbeelding.',
	'Pic_Title' => 'Afbeeldingstitel',
	'Pic_Title_Explain' => 'Het is erg belangrijk om je afbeelding een goede titel mee te geven. Het kan een naam zijn of een onderwerp, het moet zonder de afbeelding te zien duidelijk zijn wat erop te zien is.',
	'Pic_Upload' => 'Afbeeldingsupload',
	'Pic_Upload_Explain' => 'Toegestane types zijn JPG, GIF en PNG. Maximale bestandsgrootte is %s bytes. Maximale afbeeldingsafmetingen zijn %s bij %s pixels.',
	'Album_full' => 'Sorry, maar de album heeft de maximale toegestane aantal geuploade afbeeldingen bereikt. Neem contact op met de beheerder voor meer informatie.',
	'Album_upload_successful' => 'Dank je wel, je afbeelding is succesvol geupload.',
	'Click_return_album' => 'Klik %shier%s om terug te keren naar de album.',
	'Invalid_upload' => 'Ongeldige upload<br /><br />Je afbeelding is te groot of de type is niet toegestaan.',
	'Image_too_big' => 'Sorry, maar de afmetingen van de afbeelding zijn te groot.',
	'Uploaded_by' => 'Geupload door',
	'Category_locked' => 'Sorry, maar je kan niet uploaden in deze categorie omdat deze gesloten is door een beheerder. Neem contact op met de beheerder voor meer informatie.',
	'View_Album_Index' => 'Albumindex',
	'View_Album_Personal' => 'Bekijk persoonlijke album van gebruiker',
	'View_Pictures' => 'Bekijk afbeeldingen of lees/reageer op opmerkingen in de album',
	'Album_Search' => 'Zoek in de album',
	'Pic_Name' => 'Afbeeldingsnaam',
	'Description' => 'Omschrijving',
	'Search_Contents' => ' dat bevat: ',
	'Search_Found' => 'Resultaten gevonden ',
	'Search_Matches' => 'Resultaten:',
// Mighty Gorgon - Full Album Pack - END

// News
	'xs_latest_news' => 'Laatste nieuws',
	'xs_no_news' => 'Er zijn geen nieuwsitems.',
	'xs_news_version' => 'XS-nieuws versie: %s',
	'xs_news_ticker_feed' => 'XML Feedbron: %s',
	'xs_no_ticker' => 'Er zijn geen nieuwstickers gedefinieerd, bezoek de ACP om er een toe te voegen.',
	'xs_news_ticker_title' => 'Nieuwsticker',
	'xs_news_tickers_title' => 'Nieuwstickers',
	'xs_news_item_title' => 'Nieuwsitem',
	'xs_news_items_title' => 'Nieuwsitems',
	'hide' => 'Verberg',
	'show' => 'Toon',
	'Welcome' => 'Welkom',
	'birthdays' => 'Verjaardagen',

//Battle of the Sexes
	'male_zero_total' => '<b>0</b> mannelijke gebruikers', // # registered male users
	'male_total' => '<b>%d</b> mannelijke gebruikers', // # registered male users
	'male_one_total' => '<b>%d</b> mannelijke gebruiker', // # registered male users
	'female_zero_total' => 'We hebben <b>0</b> vrouwelijke gebruikers,', // # registered female users
	'female_total' => 'We hebben <b>%d</b> vrouwelijke gebruikers,', // # registered female users
	'female_one_total' => 'We hebben <b>%d</b> vrouwelijke gebruiker,', // # registered female users
	'unknown_total' => 'en <b>%d</b> gebruikers waarvan we dat niet weten',
	'unknown_one_total' => 'en <b>%d</b> gebruiker waarvan we dat niet weten',
	'unknown_zero_total' => 'en 0 gebruikers waarvan we dat niet weten',
	'battle_of_sexes' => 'Geslachtsstatistieken: ',
	
	'who_viewed' => 'Onderwerp bekeken',
	'BoardRules' => 'Regels',
	
	'View_post' => 'Bekijk bericht',
	'Post_review' => 'Berichtvoorbeeld',
	'View_next_post' => 'Bekijk volgende bericht',
	'View_previous_post' => 'Bekijk vorige bericht',
	'No_newer_posts' => 'Er zijn geen nieuwere berichten in dit forum',
	'No_older_posts' => 'Er zijn geen oudere berichten in dit forum',

	'StaffSite' => 'Teampagina',
	'Staff_level' => array('Beheerder', 'Moderator'),
	'Staff_forums' => 'Forums',
	'Staff_stats' => 'Statistieken',
	'Staff_user_topic_day_stats' => '%.2f onderwerpen per dags', // %.2f = topics per day
	'Staff_period' => 'sinds %d days', // %d = days
	'Staff_contact' => 'Contact',
	'Staff_messenger' => 'Messenger',
// Start Edit Notes MOD
	'Edit_notes' => 'Bewerknotities',
	'Delete_note' => 'Verwijder notitie',
	'Edited_by' => 'Bewerkt door',
	'Confirm_delete_edit_note' => 'Weet je zeker dat je deze bewerknotitie wilt verwijderen?',
	'Edit_note_deleted' => 'De bewerknotitie is succesvol verwijderd.',
// End Edit Notes MOD
//Referrers Mod
	'Referrers' => 'Http Referrers',
	'Viewing_Referrers' => 'Bekijk Referrers',
//Referrers Mod End

	'Recent_topics' => 'Recente onderwerpen',
	'Recent_today' => 'Vandaag',
	'Recent_yesterday' => 'Gisteren',
	'Recent_last24' => 'Laatste 24 uur',
	'Recent_lastweek' => 'Laatste week',
	'Recent_lastXdays' => 'Laatste %s dagen',
	'Recent_last' => 'Laatst',
	'Recent_days' => 'dagen',
	'Recent_first' => 'gestart %s',
	'Recent_first_poster' => '%s',
	'Recent_select_mode' => 'Selecteer modus:',
	'Recent_showing_posts' => 'Bekijk berichten:',
	'Recent_title_one' => '%s onderwerp %s', // %s = topics, %s = sort method
	'Recent_title_more' => '%s onderwerpen %s', // %s = topics, %s = sort method
	'Recent_title_today' => ' van vandaag',
	'Recent_title_yesterday' => ' van gisteren',
	'Recent_title_last24' => ' van de laatste 24 uur',
	'Recent_title_lastweek' => ' van de laatste week',
	'Recent_title_lastXdays' => ' van de laatste %s dagen', // %s = days
	'Recent_no_topics' => 'Er zijn geen onderwerpen gevonden.',
	'Recent_wrong_mode' => 'Je hebt een foute modus geselecteerd.',
	'Recent_click_return' => 'Klik %shier%s om terug te keren naar de recente website.',

	'Profile_view_option' => 'Popup-venster als iemand je profiel bekijkt',
	'Profile_viewed' => 'Mijn profiel is bekeken door',

// BEGIN Disable Registration MOD
	'registration_status' => 'Sorry, maar registraties op dit forum zijn op dit moment uitgeschakeld. Probeer het later nog eens.',
// END Disable Registration MOD

	'PostHighlight' => 'Markeren',
	'QuickQuote' => 'Snelle citaat',
	'Randomquote' => 'Willekeurige citaat',

// Mod User CP Organize
	'Cpl_Navigation' => 'Controlepaneel',
//'Cpl_Settings_Options' => 'Instellingen en opties',
	'Cpl_Settings_Options' => 'Instellingen',
	'Cpl_Board_Settings' => 'Website-instellingen',
	'Cpl_NewMSG' => 'Verstuur een nieuw bericht',
	'Cpl_Click_Return_Cpl' => 'Of klik %shier%s om terug te keren naar je controlepaneel',
	'Cpl_Personal_Profile' => 'Persoonlijk profiel',
	'Cpl_More_info' => 'Abonnementen',
	
	'Forbidden_characters' => 'Toegestane tekens in gebruikersnamen zijn a-z, 0-9, -, _ en spaties.',
	
	'Topics_per_page' => 'Onderwerpen per pagina',
	'Posts_per_page' => 'Berichten per pagina',
	'Hot_threshold' => 'Berichtengrens voor "populaire" onderwerpen',

	'Mod_CP_first_post' => 'Eerste bericht',
	'Mod_CP_topic_count' => '<b>%s</b> onderwerp gevonden.',
	'Mod_CP_topics_count' => '<b>%s</b> onderwerpen gevonden.',
	'Mod_CP_no_topics' => 'Er zijn geen onderwerpen die overeenkomen met de criteria.',
	'Mod_CP_sticky' => 'Vastgepind',
	'Mod_CP_announce' => 'Mededeling',
	'Mod_CP_global' => 'Forummededeling',
	'Mod_CP_normal' => 'Normaal',
	'Display_sticky' => 'Belangrijk',
	'Display_announce' => 'Mededeling',
	'Display_global' => 'Forummededeling',
	'Display_poll' => 'Peiling',
	'Display_shadow' => 'Verplaatst',
	'Display_locked' => 'Gesloten',
	'Display_unlocked' => 'Heropend',
	'Display_unread' => 'Ongelezen',
	'Display_unanswered' => 'Onbeantwoord',
	'Display_all' => 'Alles',
	'Mod_CP_confirm_delete_polls' => 'Weet je zeker dat je deze peilingen wilt verwijderen?',
	'Mod_CP_poll_removed' => 'De geselecteerde peiling is succesvol verwijderd uit het onderwerp.',
	'Mod_CP_polls_removed' => 'De geselecteerde peilingen zijn succesvol verwijderd uit de onderwerpen.',
	'Mod_CP_topic_removed' => 'De geselecteerde onderwerp is succesvol verwijderd uit de database.',
	'Mod_CP_topic_moved' => 'De geselecteerde onderwerp is verplaatst van <b>%s</b> naar <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topics_moved' => 'De geselecteerde onderwerpen zijn verplaatst van <b>%s</b> naar <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topic_locked' => 'De geselecteerde onderwerp is gesloten.',
	'Mod_CP_topic_unlocked' => 'De geselecteerde onderwerp is heropend.',
	'Mod_CP_topics_sticked' => 'De geselecteerde onderwerpen zijn vastgepind.',
	'Mod_CP_topic_sticked' => 'De geselecteerde onderwerp is vastgepind.',
	'Mod_CP_topics_announced' => 'De geselecteerde onderwerpen zijn mededelingen gemaakt.',
	'Mod_CP_topic_announced' => 'De geselecteerde onderwerp is mededeling gemaakt.',
	'Mod_CP_topics_globalized' => 'De geselecteerde onderwerpen zijn forummededelingen gemaakt.',
	'Mod_CP_topic_globalized' => 'De geselecteerde onderwerp is forummededeling gemaakt.',
	'Mod_CP_topics_normalized' => 'De geselecteerde onderwerpen zijn genormaliseerd.',
	'Mod_CP_topic_normalized' => 'De geselecteerde onderwerp is genormaliseerd.',
	'Mod_CP_click_return_topic' => 'Klik %shier%s om terug te keren naar de oude onderwerp of %shier%s om terug te keren naar de nieuwe onderwerp.',

	't_starter' => 'Je kan niet jezelf bedanken',
	'Watched_Topics' => 'Geabonneerde onderwerpen',
	'No_Watched_Topics' => 'Je volgt geen enkele onderwerp',
	'Watched_Topics_Started' => 'Onderwerp gestart',
	'Watched_Topics_Stop' => 'Stop volgen van onderwerp',

	'Stop_watching_forum' => 'Stop volgen van dit forum',
	'Start_watching_forum' => 'Volg dit forum voor berichten',
	'No_longer_watching_forum' => 'Je volgt niet langer dit forum.',
	'You_are_watching_forum' => 'Je volgt vanaf nu dit forum.',

	'UCP_SubscForums' => 'Geabonneerde forumlijst',
	'UCP_NoSubscForums' => 'Je hebt geen geabonneerde forums',
	'UCP_SubscForums_Flag' => 'Vlag',
	'UCP_SubscForums_Forum' => 'Forum',
	'UCP_SubscForums_Forum_subscribed' => 'Forum geabonneerd',
	'UCP_SubscForums_Forum_already_subscribed' => 'Je bent al geabonneerd op dit forum',
	'UCP_SubscForums_Click_return_forum' => 'Klik %shier%s om terug te keren naar het forum',
	'UCP_SubscForums_Topics' => 'Onderwerpen',
	'UCP_SubscForums_Posts' => 'Berichten',
	'UCP_SubscForums_LastPost' => 'Laatste bericht',
	'UCP_SubscForums_UnSubscribe' => 'Abonnement opzeggen',
	'UCP_SubscForums_NewTopic' => 'Nieuwe onderwerp',

	'profile_main' => 'Algemene informatie',
	'profile_explain' => 'Welkom bij de gebruikerscontrolepaneel. Vanaf hier kun je je profiel, voorkeuren bewerken en aanpassen, geabonneerde onderwerpen en forums bekijken en berichten versturen naar andere gebruikers (als dat is toegestaan).',
	'your_activity' => 'Jouw profiel',

	'Gravatar' => 'Gravatar',
	'Gravatar_explain' => 'Als je een <a href="http://www.gravatar.com" target="_blank">gravatar</a> wilt, geef dan je e-mailadres in om er een te registreren.',
	
	'private_msg_review_title' => 'Bericht waarop je wilt reageren',
	'private_msg_review_error' => 'Fout in het vinden van de privébericht!',
	
	'BSH_Viewing_Topic' => 'Bekijk onderwerp: %t%',
	'BSH_Viewing_Post' => '%sBekijk een bericht%s',
	'BSH_Viewing_Profile' => 'Bekijk %u%\'s profiel',
	'BSH_Viewing_Groups' => '%sBekijk groepen%s',
	'BSH_Viewing_Forums' => 'Bekijk forum: %f%',
	'BSH_Index' => '%sBekijk Index%s',
	'BSH_Searching_Forums' => '%sZoek in Forums%s',
	'BSH_Viewing_Onlinelist' => '%sBekijk onlinelijst%s',
	'BSH_Viewing_Messages' => '%sBekijk privéberichten%s',
	'BSH_Viewing_Memberlist' => '%sBekijk gebruikerslijst%s',
	'BSH_Login' => '%sInloggen%s',
	'BSH_Logout' => '%sUitloggen%s',
	'BSH_Editing_Profile' => '%sBewerk profiel%s',
	'BSH_Viewing_ACP' => '%sBekijk ACP%s',
	'BSH_Moderating_Forum' => '%sModerate forums%s',
	'BSH_Viewing_FAQ' => '%sBekijk FAQ%s',
	'BSH_Viewing_Category' => 'Bekijk categorie: %c%',

	'Board_statistic' => 'Forumstatistieken',
	'Database_statistic' => 'Databasestatistieken',
	'Version_info' => 'Versie-informatie',
	'Thereof_deactivated_users' => 'Aantal niet actieve gebruikers',
	'Thereof_Moderators' => 'Aantal moderators',
	'Thereof_Junior_Administrators' => 'Aantal junior-beheerders',
	'Thereof_Administrators' => 'Aantal beheerders',
	'Deactivated_Users' => 'Gebruikers die nog geactiveerd moeten worden',
	'Users_with_Mod_Privileges' => 'Gebruikers met moderatorrechten',
	'Users_with_Junior_Admin_Privileges' => 'Gebruikers met junior-beheerdersrechten',
	'Users_with_Admin_Privileges' => 'Gebruikers met beheerdersrechten',
	'DB_size' => 'Databasegrootte',
	'Version_of_ip' => 'Versie van <a href="http://www.icyphoenix.com/">Icy Phoenix</a>',
	'Version_of_board' => 'Versie van <a href="http://www.phpbb.com">phpBB</a>',
	'Version_of_PHP' => 'Versie van <a href="http://www.php.net/">PHP</a>',
	'Version_of_MySQL' => 'Versie van <a href="http://www.mysql.com/">MySQL</a>',
	'Download_post' => 'Download bericht',

	'Download_topic' => 'Download onderwerp',
	'Always_swear' => 'Krachtuitdrukkingen altijd toestaan',
	
	'Shoutbox' => 'Babbelbox',
	'Shoutbox_date' => ' d m Y h:i:s',
	'Shout_censor' => 'Bericht verwijderd!',
	'Shout_refresh' => 'Vernieuwen',
	'Shout_text' => 'Je tekst',
	'Viewing_Shoutbox' => 'Bekijk babbelbox',
	'Censor' => 'Censuur',

	'Edit_post_time' => 'Bewerk tijd van dit bericht',
	'Edit_post_time_xs' => 'Bewerk',
	'Topic_time_xs' => 'Onderwerptijd',
	'Post_time' => 'Berichttijd',
	'Post_time_successfull_edited' => '<b>Tijd succesvol bijgewerkt.</b></span><br /><span class="postdetails">Dit venster sluit na 3 seconden.',
	
	'staff_message' => 'Bericht van het Team',

	'Board_Rules' => 'Forumregels',
	'Forum_Rules' => 'Forumregels',
	'Show_avatars' => 'Avatars weergeven in onderwerpen',
	'Show_signatures' => 'Onderschriften weergeven in onderwerpen',
	'Acronym' => 'Afkorting',
	'Acronyms' => 'Afkortingen',
	'User_Number' => 'Gebruiker #',
	'Member_Count' => 'Gebruikers',
	'Reply_message' => 'Gereageerde bericht',
	'Click_read_topic' => 'Klik %shier%s om het te lezen', // %s's here are for uris, do not remove!
	'Create_with_generator' => 'Avatar maken met Avatargenerator',
	'View_avatar_generator' => 'Avatargenerator',
	'Adv_Search' => 'Geadvanceerd zoeken',
	'Search_Explain' => 'Zoeken in de website',
	'Login_attempts_exceeded' => 'De maximum aantal van %s inlogpogingen overschreven. Je kan niet inloggen in de komende %s minuten.',
	'Please_remove_install_contrib' => 'Weet zeker dat de install/ en contrib/ mappen zijn verwijderd',
	'Search_Engines' => 'Zoekmachinebots:',
	'Bots_browsing_forum' => 'Zoekmachinebots die op dit forum zijn:',
	'Debug_On' => 'Debug aan',
	'Debug_Off' => 'Debug uit',
	'Page_Generation_Time' => 'Generatietijd',
	'Memory_Usage' => 'Geheugen',
	'SQL_Queries' => 'SQL query\'s',
	'Search_new2' => 'Nieuwe berichten',
	'Search_new_p' => 'Berichten sinds laatste bezoek',
	'Show_In_Portal' => 'Op homepagina weergeven',
	'Not_Auth_View' => 'Je bent niet bevoegd om deze pagina te bekijken.',
	'Site_Hist' => 'Websitegeschiedenis',
	'Links' => 'Links',
	'Print_View' => 'Afdrukbare versie',
	'Browsing_topic' => 'Gebruikers die in dit onderwerp zijn:',
	'Sudoku' => 'Sudoku',
	'Bookmarks' => 'Favorieten',
	'Set_Bookmark' => 'Dit onderwerp als favoriet toevoegen',
	'Remove_Bookmark' => 'Verwijder dit onderwerp als favoriet',
	'No_Bookmarks' => 'Je hebt nog geen favorieten',
	'Always_set_bm' => 'Automatisch dit onderwerp als favoriet toevoegen',
	'Found_bookmark' => 'Je hebt %d favoriet.', // eg. Search found 1 match
	'Found_bookmarks' => 'Je hebt %d favorieten.', // eg. Search found 24 matches
	'More_bookmarks' => 'Meer favorieten...', // For mozilla navigation bar

//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => 'Wat is dit?',
	'Rss_news_help_title' => 'RSS Newsreader Help',
	'Rss_news_help_header' => 'Wat zijn feeds en hoe kan ik ze gebruiken?',
	'Rss_news_help_explain' => 'Een feed is een regulaire bijgewerkte samenvatting van webinhoud, welke links bevatten naar de complete versies. Wanneer je met een feedreader op een feed van deze website abonneert, ontvang je alle nieuwe inhoud van deze website in een samenvatting.<br /><br /><b>Waarschuwing:</b> Voor abonneren op websitefeeds moet een <a href="http://www.rssowl.org/" target="new">feedreader</a> gebruikt worden. Wanneer je op een link naar een RSS of Atom feed klikt, verschijnt er een pagina in de browser met ongeformatteerde tekst.',
	'Rss_news_help_header_2' => '<b>Wat zijn RSS en Atom?</b>',
	'Rss_news_help_explain_2' => 'RSS en Atom zijn twee formaten voor feeds. De meeste feedreaders ondersteunen beide formaten. Op dit moment worden door ons Atom 0.3 en RSS 2.0 ondersteund.',
	'Rss_news_help_header_3' => '<b>Hoe kan ik gebruikmaken van de nieuwsfeeds?</b>',
	'Rss_news_help_explain_3' => 'Als eerste heb je een feedreader nodig, een voorbeeld daarvan is deze <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />Daarna kun je in de programma:<br /><br /><b>1.</b> Naar RSS links zoeken op onze website. (Extra => Zoeken nieuwsfeeds op websites) <b>of</b><br /><b>2.</b> een van de volgende feed URL`s toevoegen:',
	'L_url_rss_explain' => 'URL voor alle forumonderwerpen.',
	'L_url_rss_news_explain' => 'URL alleen voor forumnieuws.',
	'L_url_rss_atom_explain' => 'URL voor Atom RSS Feed.',
	'Rss_news_help_rights' => 'We behouden ons het recht, het gebruik van feeds op elk moment naar ons inzicht te beeindigen. Onze forumfeeds mogen niet verder verspreid worden.',
	'Rss_news_feeds' => 'RSS Nieuwsfeeds',

	'Quick_Reply' => 'Snel reageren',
	'Mod_CP_sticky2' => 'Vastgepind',
	'Mod_CP_announce2' => 'Mededeling',
	'Mod_CP_global2' => 'Forummededeling',
	'Mod_CP_normal2' => 'Normaal',

	'Search_Flood_Error' => 'Je kan niet een nieuwe zoekpoging uitvoeren zo kort na je vorige zoekpoging; probeer het later nog eens.',
	
	// Custom Profile Fields MOD
	'custom_field_notice' => 'Deze items zijn aangemaakt door een beheerder. Ze verschillen in wel of niet publiek zichtbaar zijnde items. Items gemarkeerd met een * zijn verplichte velden.',
	'and' => ' en ',
// END Custom Profile Fields MOD

	'dsbl' => 'Je IP-adres komt voor op de <a href="%url%">DNS-gebaseerde zwarte lijst</a>. <br />Registratiepoging geblokkeerd.',
	'Emails_Only_To_Admins_Error' => 'Je kan gebruikmaken van het e-mailsysteem om een e-mail te versturen naar de beheerders.',
	'Wordgraph' => 'Tags',
	'Viewing_wordgraph' => 'Bekijk Tags',
	'Links_For_Guests' => '<b>Je moet geregistreerd zijn om deze link te bekijken</b>',
	'New' => 'N',
	'New_Label' => 'Nieuw',
	'New_Messages_Label' => 'Nieuwe berichten',
	'Show_Personal_Gallery' => 'Bekijk gebruiker\'s persoonlijke gallerij',
	'Login_Status' => 'Online status',
	'Login_Hidden' => 'Verborgen',
	'Login_Visible' => 'Zichtbaar',
	'Login_Default' => 'Standaard',
	'Errors_Not_Found' => 'De opgevraagde pagina kan niet worden gevonden op deze server',
	'Errors_000' => 'Onbekende fout',
	'Errors_000_Full' => 'De opgevraagde pagina geeft een onbekende foutcode.<br />Fouten zijn geregistreerd in de logbestand en we bekijken dan wat het probleem is.',
	'Errors_400' => 'Fout 400',
	'Errors_400_Full' => 'De opgevraagde pagina is ongeldig.',
	'Errors_401' => 'Fout 401 - authorisatiefout',
	'Errors_401_Full' => 'Je krijgt deze fout omdat je niet bevoegd bent om deze pagina te bekijken.',
	'Errors_403' => 'Fout 403',
	'Errors_403_Full' => 'Toegang tot deze pagina is verboden.',
	'Errors_404' => 'Fout 404 - pagina niet gevonden',
	'Errors_404_Full' => 'De opgevraagde pagina is niet aanwezig op de server. Je kan de pagina foutgespeld hebben, of je bent opzoek naar een pagina die is verwijderd.',
	'Errors_500' => 'Fout 500 - configuratiefout',
	'Errors_500_Full' => 'De opgevraagde pagina geeft een configuratiefout.<br />Fouten zijn geregistreerd in de logbestand en we bekijken dan wat het probleem is.',
	'Errors_Email_Subject' => 'Fouten: ',
	'Errors_Email_Addrress_Prefix' => 'xs_errors',
	'Errors_Email_Body' => 'Een fout is geconstateerd op je website. Controleer je logbestand.',
	'Remote_avatar_no_image' => 'De afbeelding %s bestaat niet',
	'Remote_avatar_error_filesize' => 'De afbeelding voldoet niet aan de limiet voor de bestandsgrootte van de avatars (%d Bytes)',
	'Remote_avatar_error_dimension' => 'De afbeelding voldoet niet aan de afmetingenlimiet voor avatars (%d bij %d pixels)',
	'How_Many_Chatters' => 'Er zijn <b>%d</b> gebruiker(s) in chat op dit moment',
	'Who_Are_Chatting'  => '<b>%s</b>',
	'Click_to_join_chat' => 'Klik om te chatten',
	'ChatBox' => 'Chatbox',
	'log_out_chat' => 'Je bent uitgelogd uit de chat om ',
	'Send' => 'Versturen',
	'Login_to_join_chat' => 'Log in om te kunnen chatten',

// Hacks List
/* General */
	'Hacks_List' => 'Credits',
	'Page_Desc' => 'Deze module staat je toe om huidige credits van geinstalleerde hacks/mods op dit forum toe te voegen, te bewerken of te verwijderen. Deze worden weergegeven aan gebruikers die de credits.php pagina bezoeken.',
	'Deleted_Hack' => 'Verwijderde informatie voor mod %s uit de lijst.<br />',
	'Updated_Hack' => 'Begewerkte informatie voor mod %s.<br />',
	'Added_Hack' => 'Toegevoegde informatie voor mod %s.<br />',
	'Status' => 'Status',
	'No_Website' => 'Er is geen website beschikbaar.',
	'No_Hacks' => 'Er zijn geen credits om weer te geven.',
	'Add_New_Hack' => 'Voeg een nieuwe credit toe',
	'User_Viewable' => 'Verberg uit gebruikerslijst?',
	'Hack_Name' => 'MOD',
//	'Description' => 'Omschrijving',
	'Required' => 'Benodigd',
	'Author_Email' => 'Auteur e-mail',
	'Version' => 'Versie',
	'Download_URL' => 'Downloadlocatie',

/* Errors */
	'Error_Hacks_List_Table' => 'Fout bij het ophalen van de creditlijsttabel.',
	'Required_Field_Missing' => 'Je hebt niet alle verplichte informatie ingegeven.',
	'Error_File_Opening' => 'Onmogelijk om bestand: %s te openen',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => 'Laatste afbeelding', // Album Addon
	'Random_pic' => 'Willekeurige afbeelding', // Album Addon
	'Click_enlarge_pic' => 'Klik op de afbeelding om hem te vergroten',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => 'Laatst gebruikte IP-adres',
	'Last_Used_OS' => 'OS',
	'Last_Used_Browser' => 'Browser',
	'Last_Used_Referer' => 'Referrer',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
	'Users_Admins' => 'Beheerders',
	'Users_Mods' => 'Moderators',
	'Users_Global_Mods' => 'Hoofdmoderators',
	'Users_Regs' => 'Gebruikers',
	'Users_Guests' => 'Gasten',
	'Users_Hidden' => 'Verborgen',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Fast' => 'Snel',
	'Standard' => 'Standaard',
	'Style' => 'Stijl',
	'User_Contacts' => 'Contact',
	'Memberlist_Users_Display' => 'Gebruikers per pagina:',
	'Sort_LastLogon' => 'Laatst ingelogd',
	'Sort_Birthday' => 'Verjaardag',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => 'Team',
	'Rank' => 'Rang',
	'Rank_Header' => 'Rangen',
	'Rank_Image' => 'Rangafbeelding',
	'Rank_Posts_Count' => 'Automatische rang bij berichten',
	'Rank_Days_Count' => 'Automatische rang bij dagen',
	'Rank_Min_Des' => 'Minimum berichten/dagen',
	'Rank_Min_M' => 'Minimum berichten',
	'Rank_Max_M' => 'Max berichten',
	'Rank_Min_D' => 'Minimum dagen',
	'Rank_Max_D' => 'Max dagen',
	'Rank_Special' => 'Speciale rang',
	'Rank_Special_Guest' => 'Speciale rang voor gasten',
	'Rank_Special_Banned' => 'Speciale rang voor gebande gebruikers',
	'Current_Rank_Image' => 'Huidige rangafbeelding',
	'No_Rank' => 'Er is geen rang toegekend',
	'No_Rank_Image' => 'Er is geen rangafbeelding',
	'No_Rank_Special' => 'Er is geen speciale rang toegekend',
	'Memberlist_Administrator' => 'Beheerder',
	'Memberlist_Moderator' => 'Moderator',
	'Memberlist_User' => 'Gebruiker',
	'Guest_User' => 'Gast',
	'Banned_User' => 'Geband',
	'Rank1_title' => 'Rang 1 titel',
	'Rank2_title' => 'Rang 2 titel',
	'Rank3_title' => 'Rang 3 titel',
	'Rank4_title' => 'Rang 4 titel',
	'Rank5_title' => 'Rang 5 titel',
// Mighty Gorgon - Multiple Ranks - END
// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => 'Menu',
	'MAIN_LINKS' => 'Hoofdlinks',
	'TOOLS_LINKS' => 'Gereedschappen',
	'NEWS_LINKS' => 'Nieuws',
	'USERS_LINKS' => 'Gebruikers &amp; groepen',
	'INFO_LINKS' => 'Info',
	'SPONSORS_LINKS' => 'Sponsors',
	'HelpDesk' => 'Helpdesk',
	'AvatarGenerator' => 'Avatargenerator',
	'DBGenerator' => 'SQL naar PHP generator ',
	'NEWS_CAT' => 'Nieuwscategorieen',
	'NEWS_ARC' => 'Nieuwsarchief',
// Mighty Gorgon - Nav Links - END
	'Activity' => 'Games',
	'Games' => 'Games',
	'Trohpy' => 'Game troffeen',
	'quick_links_games' => 'Games Menu',

	'By' => 'door',
	'No_Icon_Image' => 'Er is geen icoon',
	'Change_Style' => 'Stijl',
	'Change_Lang' => 'Taal',
	'Permissions_List' => 'Permissielijst',
	'IP_TEAM' => 'Icy Phoenix Team',

//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',
	'WeatherForecast' => 'Weersvoorspelling',
	'ErrorNotFound' => 'Bestand niet gevonden!',
	'MGC_Users_Online' => 'MGC gebruikers online',
	'MGC_User_Servertime' => 'Datum',
	'MGC_User_Nickname' => 'Gebruikersnaam',
	'MGC_User_Server' => 'Server',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'MGC versie',
	
	'Country_Flag' => 'Landsvlag',
	'Select_Country' => 'Selecteer land',
	'Extra_profile_info' => 'Extra profielinformatie',
//'Extra_profile_info_explain' => 'You can add extra information about yourself or about your hobbies. You can also add photos. You can use some bbcodes as when you post or make your signature. There is a <b>%d</b> character limit (if 0 then no limit)',
	'Extra_profile_info_explain' => 'Je kan hier extra informatie over jezelf toevoegen en over je hobby\'s. Je kan ook foto\'s toevoegen. Ja kan gebruikmaken van sommige BBCodes, vergelijkbaar bij het maken van een onderschrift.',
	'Extra_window' => 'Open in aparte venster',
	'Extra_too_long' => 'Je extra veld is te lang (max. <b>%d</b> tekens zijn toegestaan)',
	'UserLike' => 'Waar hou je van?',
	'UserDisLike' => 'Waar hou je niet van?',
	'UserLikeIns' => 'Drie dingen waar je van houd',
	'UserDisLikeIns' => 'Drie dingen waar je niet van houd',
	'UserPhone' => 'Telefoonnummer',
	'UserSport' => 'Sport/Team',
	'UserMusic' => 'Muziek/Groepen',
	'UserNoInfo' => 'Er is geen informatie beschikbaar',
	'Last_Seen' => 'Laatst Online',
// New MG - END

// MG CMS - BEGIN
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'CMS Beheer',
	'CMS_CONFIG' => 'CMS Configuratie',
	'CMS_ACP' => 'Bewerk deze pagina',
	'CUSTOM_PAGE' => 'Aangepaste pagina',
// MG CMS - END

// Icy Phoenix - BUILD 001
	'SimilarTopics' => 'Verwante onderwerpen',
	'Chat' => 'Chat',
	'Digests' => 'Digests',

	'CPL_REG_INFO_EXPLAIN' => 'Gebruikersnaam, e-mailadres en wachtwoord',
	'CPL_PROFILE_INFO_EXPLAIN' => 'Algemene contactinformatie, messenger, verjaardag, interesses en andere informatie',
	'CPL_PROFILE_VIEWED_EXPLAIN' => 'Gebruikers die je profiel bekeken hebben',
	'CPL_AVATAR_PANEL_EXPLAIN' => 'Avatar is een kleine afbeelding dat linkt naar je naam',
	'CPL_SIG_EDIT_EXPLAIN' => 'Je onderschrift: je kan tekst definieren om te toe voegen aan de onderkant van je berichten',
	'CPL_PREFERENCES_EXPLAIN' => 'Algemene voorkeuren gericht op het plaatsen en lezen van berichten',
	'CPL_BOARD_SETTINGS_EXPLAIN' => 'Algemene instellingen gericht op tijd, template en taal',
	'Calendar_settings_EXPLAIN' => 'Instellingen gericht op de kalender',
	'Hierarchy_setting_EXPLAIN' => 'Instellingen gericht op subforums en splitsen van onderwerptypen',
	'LOGIN_SEC_EXPLAIN' => 'Als deze sectie is ingeschakeld helpt het je te bekijken welke loginpogingen er zijn geweest met je gebruikersnaam',
	'CPL_OWN_POSTS_EXPLAIN' => 'Zoek je eigen berichten',
	'CPL_OWN_PICTURES_EXPLAIN' => 'Bezoek je eigen persoonlijke gallerij',
	'CPL_INBOX_EXPLAIN' => 'Postvak In: bevat privéberichten die je hebt ontvangen',
	'CPL_SAVEBOX_EXPLAIN' => 'Opgeslagen Items: bevat privéberichten die je hebt opgeslagen',
	'CPL_OUTBOX_EXPLAIN' => 'Postvak Uit: bevat privéberichten die je hebt verstuurd, maar nog niet zijn gelezen',
	'CPL_SENTBOX_EXPLAIN' => 'Verzonden Items: bevat privéberichten die je hebt verstuurd en gelezen zijn',
	'CPL_BOOKMARKS_EXPLAIN' => 'Alle onderwerpen die tot je favorieten behoren',
	'WATCHED_TOPICS_EXPLAIN' => 'Een lijst van onderwerpen die je volgt',
	'CPL_SUBSCFORUMS_EXPLAIN' => 'De forums waarop je een abonnement hebt voor informatie over nieuwe onderwerpen',
	'DIGESTS_EXPLAIN' => 'Digests zijn periodieke e-mailberichten welke automatisch worden verzonden en een samenvatting geeft van nieuwe berichten die zijn geplaatst op het forum',
	'DRAFTS_EXPLAIN' => 'Beheer je concepten',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Babbelbox',
	'Ajax_Chat' => 'Chat',
	'Ajax_Archive' => 'Chatarchief',
	'Shoutbox_flooderror' => 'Je kan niet nog een berichten plaatsen zo kort na je vorige bericht. Probeer het zo nog eens.',
	'Shoutbox_no_auth' => 'Sorry, maar alleen geregistreerde gebruikers kunnen deze babbelbox gebruiken',
	'Shoutbox_loading' => 'Babbelbox laden...',
// Errors
	'Shoutbox_unable' => 'Sorry, maar deze actie kan niet uitgevoerd worden. Probeer het nog eens.',
	'Shoutbox_empty' => 'Er zijn geen berichten in de database',
	'Shoutbox_no_mode' => 'Er is geen geldige modus gespecificieerd',
// Archive
	'Shouts' => 'Babbels',
	'Statistics' => 'Statistieken',
	'Total_shouts' => 'Totaal aantal babbels',
	'Stored_shouts' => 'Opgeslagen bebbels',
	'My_shouts' => 'Mijn babbels',
	'Today_shouts' => 'Babbels in de laatste 24 uur',
	'Top_Ten_Shouters' => 'Top 10 babbelaars',
// Online list
	'Online_total' => 'Totaal',
	'Online_registered' => 'Gebruikers',
	'Online_guests' => 'Gasten',
	'Who_is_Chatting' => 'Wie is aan het chatten',
	'Shoutbox_online_explain' => 'Deze gegevens zijn gebaseerd op actieve gebruikers in de laatste dertig seconden',
// Ajax Shoutbox - END

	'Contact_us' => 'Contact ons',
	'Contact_us_explain' => 'Gebruikmakend van deze pagina kun je een e-mail versturen naar ons',
	'Session_invalid' => 'Ongeldige sessie. Probeer het opnieuw dit formulier te bevestigen.',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => ' deze gebruikersnaam is te kort',
	'Reg_Username_Long' => ' deze gebruikersnaam is te lang',
	'Reg_Username_Taken' => ' deze gebruikersnaam is al ingebruik',
	'Reg_Username_Free' => ' deze gebruikersnaam is nog vrij',
	'Reg_PWD_Short' => 'Dit wachtwoord is te kort',
	'Reg_PWD_Easy' => 'Dit wachtwoord is te makkelijk',
	'Reg_PWD_OK' => 'Dit wachtwoord is goed',
	'Reg_Email_Invalid' => ' dit e-mailadres is ongeldig of al aanwezig in de database',
	'Reg_Email_OK' => ' dit e-mailadres is goed',

// Moved here from lang_adv_time.php
	'time_mode' => 'Tijdbeheer',
	'time_mode_text' => 'De zomertijdverschil is het verschil tussen de zomertijd en de wintertijd van je land (van 0 tot 120 minuten, meestal 60).<br /><br /><strong> * De optie gemarkeerd met een sterretje wordt standaard gebruikt op dit forum en is aanbevolen door de beheerder. </strong>',
	'time_mode_auto' => 'Automatische modes...',
	'time_mode_full_pc' => 'Je computertijd',
	'time_mode_server_pc' => 'Server universele tijd, tijdzone<br /><span STYLE="margin-left: 25">van je computer</span>',
	'time_mode_full_server' => 'Server lokale tijd',
	'time_mode_manual' => 'Handmatige modes...',
	'time_mode_dst' => 'Zomertijd ingeschakeld',
	'time_mode_dst_server' => 'Door de server',
	'time_mode_dst_time_lag' => 'Zomertijdverschil',
	'time_mode_dst_mn' => 'min',
	'time_mode_timezone' => 'Tijdzone',

	'dst_time_lag_error' => 'Zomertijdverschilwaarde fout. Je moet een aantal minuten ingeven tussen de 0 en 120.',
	
	'dst_enabled_mode' => ' [Zomertijd ingeschakeld]',
	'full_server_mode' => 'Tijd gesynchroniseerd met de servertijd',
	'server_pc_mode' => 'Tijd gesynchroniseerd met de server - tijdzone met je computer',
	'full_pc_mode' => 'Tijd gesynchroniseerd met je computertijd',
	
	'Smileys_Per_Page' => 'Smilies per pagina',

/* lang_site_hist.php - BEGIN */
	'Site_history' => 'Websitegeschiedenis',
	'Month' => 'Maand',
	'Week_day' => 'Dag van de week',
	'Not_availble' => 'Niet beschikbaar',
	'Total_users' => 'Max gebruikers',
	'Reg_users' => 'Geregistreerde gebruikers',
	'Hidden_users' => 'Verborgen gebruikers',
	'Guests_users' => 'Gastgebruikers',
	'New_users' => 'Nieuwe gebruikers',
	'New_topics' => 'Nieuwe onderwerpen',
	'New_posts_reply' => 'Berichten/reacties',
	'Most_online' => 'Meeste gebruikers online %s',
	'Most_online_week' => 'Meeste gebruikers online in de laatste 7 dagen',
	'Last_24' => 'Meeste gebruikers online in de laatste %s uur',
	'Top_Posting_Users' => 'De actiefste gebruikers',
	'Top_Posting_Users_week' => 'De actiefste gebruikers deze week [%s]',
	'Rank' => 'Rang',
	'Percent' => 'Percent',
	'Graph' => 'Grafiek',
	'Top_Visiting_Users' => 'Meeste tijd online',
/* lang_site_hist.php - END */

/* lang_referrers.php - BEGIN */
	'Referrers_Title' => 'Http Referrersbeheer',
	'Referrers_Cleared' => 'Referrers gewist',
	'Referrers_Clear' => 'Verwijder alles',
	'Click_Return_Referrers' => 'Klik %shier%s om terug te keren naar referrers',
	'Referrers' => 'Http referrers',
	'Referrer_host' => 'Referrer\'s host',
	'Referrer_url' => 'Referrer\'s url',
	'Referrer_ip' => 'Referrer\'s IP-adres',
	'Referrer_hits' => 'Hits',
	'Referrer_first' =>'Eerste bezoek',
	'Referrer_last' => 'Laatste bezoek',
	'Viewing_Referrers' => 'Bekijk referrers',
/* lang_referrers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_Days' => '%d dagen',
	'X_Weeks' => '%d weken',
	'X_Months' => '%d maanden',
	'X_Years' => '%d jaren',
	
	'Confirm_delete_user' => 'Weet je zeker dat je deze gebruiker wilt verwijderen?',
	'Prune_no_users' => 'Er zijn geen gebruikers verwijderd',
	'Prune_users_number' => 'De volgende %d gebruikers zijn verwijderd:',
	
	'Prune_user_list' => 'Gebruikers die worden verwijderd',
	'Prune_on_click' => 'Je wilt %d gebruikers verwijderen. Weet je dat zeker?',
	'Prune_Action' => 'Klik op de link hieronder om het uit te voeren',
	'Prune_users_explain' => 'Van deze pagina kun je inactieve gebruikers verwijderen. Daarbij kun je kiezen tussen verschillende mogelijkheden als: gebruikers verwijderen die nog geen bericht geplaatst hebben, diegene die nog niet ingelogd hebben of diegene die hun account nog niet geactiveerd hebben.<p/><b> !Waarschuwing! </b> Je kan deze actie niet meer ongedaan maken, alle gebruikers in deze lijst worden verwijderd, als je op de link geklikt hebt.', 
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => 'Avatargenerator',
	'Available' => 'Beschikbare avatars',
	'Random' => 'Willekeurig',
	'Avatar_Text' => 'Geef een tekst in die je op de avatar wilt laten zien:',
	'Avatar_Preview' => 'Avatarvoorbeeld',
	'Your_Avatar' => 'Je avatar',
	'Submit_Avatar' => 'Avatar toepassen',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Upload_Image_Local' => 'Upload afbeelding',
	'Uploaded_Images_Local' => 'Geuploade afbeeldingen',
	'Upload_Image_Local_Explain' => 'Selecteer het bestand om te uploaden',
	'Uploaded_Image_Success' => 'De afbeelding is succesvol geupload.',
	'Uploaded_Image_BBC' => 'Je kan gebruikmaken van deze BBCode om deze afbeelding te plaatsen.',
	'Upload_Image_Empty' => 'Je kan geen lucht uploaden... zoals je weet!',
	'Upload_File_Too_Big' => 'Het bestand wat je wilt uploaden is te groot! Max toegestane grootte is',
	'Upload_File_Type_Allowed' => 'Only these file types may be uploaded',
	'Upload_Insert_Image' => 'BBCode',
	'Upload_Close' => 'Sluit',
	'BBCode' => 'BBCode',
	'HTML' => 'HTML',

	'No_News' => 'Er is geen nieuws',
	
	'Email_confirm' => 'Bevestig je e-mailadres',
	'Email_mismatch' => 'E-mailadressen die je hebt ingegeven komen niet overeen.',
	
	'View_ballot' => 'Ballot weergeven',
	'Full_edit' => 'Schakel naar volledige bewerkformulier',
	'Save_changes' => 'Opslaan',
	'No_subject' => '(geen onderwerp)',
	'Edit_quick_post' => 'Snel bewerken van dit bericht',
	'AJAX_search_results' => 'Een snelle zoekactie heeft %s onderwerpen gevonden met de trefwoorden in je onderwerptitel. Klik hier om deze onderwerpen weer te geven',
	'AJAX_search_result' => 'Een snelle zoekactie heeft een onderwerp gevonden met de trefwoorden in je onderwerptitel. Klik hier om dit onderwerp weer te geven',
	'More_matches_username' => 'Meer dan een gebruikersnaam komt overeen met jouw ingeving. Selecteer een gebruiker in de box hierboven.',
	'No_username' => 'Je moet een gebruikersnaam ingeven.',
	'AJAX_quick_search_results' => 'Een snelle zoekactie heeft %s onderwerpen gevonden met de trefwoorden.<br />Aan de rechterkant kun je de eerste resultaten bekijken.<br />Klik op ZOEKEN voor een complete resultatenlijst.',
	'AJAX_quick_search_result' => 'A quick search has found one topic with the keywords.<br />Aan de rechterkant kun je de eerste resultaten bekijken.',

	'Icon_Description' => 'Icoonomschrijving',
	
	'Feature_Disabled' => 'Deze mogelijkheid is uitgeschakeld.',

// Resend Activation - BEGIN
	'Resend_activation_email' => 'Verstuur nogmaals een activatie naar je e-mail',
	'Invalid_activation' => 'Accountactivatie kan alleen door een beheerder uitgevoerd worden.',
	'No_actkey' => 'Er is geen activatiesleutel voor je account. Neem contact op met de beheerder voor meer informatie.',
	'Send_actmail_flood_error' => 'Je mag niet nogmaals een activatiebericht versturen zo kort na je vorige, probeer het zo nog eens.',
	'Resend_activation_email_done' => 'De activatie e-mail is verzonden. Controleer je e-mail voor verdere informatie.',
// Resend Activation - END

	'Bots_Group' => 'Bots',
	'Bots_Color' => 'Botskleur',
	'Active_Users_Group' => 'Actieve gebruikers',
	'Active_Users_Color' => 'Actieve gebruikerskleur',
	'Group_Default_Membership' => 'Standaardgroep',
	'Group_Default_Membership_Explain' => 'Kies de standaardgroep voor de gebruiker, om een kleur en rang toe te kennen.',
	'User_Color' => 'Gebruikerskleur',
	'User_Color_Explain' => 'Als je een specifieke kleur voor deze gebruiker hebt wordt deze overschreven door de standaardgroepskleur als je die specificeert hierboven. Gebruik de hex-code zonder <b>#</b> bijv. ff0000 is de code voor ROOD.',
	'No_Groups_Membership' => 'Geen lidmaatschap',
	'No_Default_Group' => 'Geen standaardgroep',
	'Group_members_updated' => 'Groepsleden zijn succesvol bijgewerkt.',
	'Colorize_All' => 'Kleur alle gebruikers',
	'Colorize_Selected' => 'Kleur geselecteerde',

	'CompanyWho' => 'Het bedrijf',
	'CompanyWhere' => 'Hoe ons te bereiken',
	'CompanyServices' => 'Diensten',
	'CompanyProducts' => 'Producten',

	'ShareThisTopic' => 'Dit onderwerp delen',
	
	'Remove_cookies' => 'Verwijder cookies die zijn ingesteld door deze website',
	'Cookies_deleted' => 'Alle cookies zijn verwijderd. Je bent nu uitgelogd.<br />Om de verwijdering te voltooien moet je de browser nu sluiten.',
	'Delete_cookies' => 'Verwijder cookies',
	'cookies_confirm' => 'Weet je zeker dat je alle cookies wilt verwijderen die zijn ingesteld door deze website?<br /><br />Deze actie logt je uit deze website.',
	
	'CustomIcy' => 'CustomIcy',

	'Drafts' => 'Concepten',
	'Drafts_Action' => 'Actie',
	'Drafts_Save' => 'Opslaan',
	'Drafts_Load' => 'Laden',
	'Drafts_Saved' => 'Deze concept is opgeslagen',
	'Drafts_Loaded' => 'Concept laden',
	'Drafts_No_Drafts' => 'Er zijn geen concepten opgeslagen',
	'Drafts_Delete_Sel' => 'Verwijder geselecteerde',
	'Drafts_Save_Question' => '<br /><br />Weet je zeker dat je dit bericht wilt opslaan als concept?<br /><br />Hou daarbij rekening mee dat je alleen de berichtinhoud kan worden opgeslagen, alle overige instellingen worden niet bewaard.',
	'Drafts_Delete_Question' => '<br /><br />Weet je zeker dat je de geselecteerde concepten wilt verwijderen?',
	'Drafts_Type' => 'Concepttype',
	'Drafts_Subject' => 'Conceptonderwerp',
	'Drafts_NT' => 'Nieuw onderwerp',
	'Drafts_NM' => 'Reactie',
	'Drafts_NPM' => 'Privébericht',

	'CannotEditAdminsPosts' => 'Je kan berichten bewerken van beheerders',
	'Random_Number' => 'Willekeurige aantal',
	
	'New_download' => 'Een nieuwe download is geupload en bijgewerkt.<br />Klik %shier%s om het te bekijken.',
	'Dl_bug_tracker' => 'Bugtracker',
	'Downloads_ADV' => 'Downloads ADV',

	'TopicUseful' => 'Was dit onderwerp zinvol?',
	'Article' => 'Artikel',
	'Comments' => 'Opmerkingen',
	
	'Sitemap' => 'Sitemap',

	'Delete_My_Account' => 'Account verwijderen',
	'Delete_My_Account_Explain' => 'Als je je account wilt verwijderen van deze website, verstuur dan je aanvraag in dit formulier en je aanvraag wordt dan zo spoedig mogelijk behandeld.<br />Specificeer "Account verwijderen" in de onderwerptitel en (als je wilt) schrijf je reden voor deze actie in een aantal woorden.',
	
	'KB_MODE_ON' => 'KB modus inschakelen',
	'KB_MODE_OFF' => 'KB modus uitschakelen',
	
	'Go_To_Page_Number' => 'Ga naar pagina',

	'Admin_Emails' => 'Beheerders kunnen mij informatie e-mailen',
	'Allow_PM_IN' => 'Gebruikers toestaan mij privéberichten toe te sturen',
	'Allow_PM_IN_Explain' => 'NB: beheerders, moderators en vrienden kunnen altijd privéberichten naar je toezenden.',
	'Allow_PM_IN_SEND_ERROR' => 'De gebruiker waar je een PB naar toe wilt zenden ontvangt je bericht niet omdat deze het niet op prijsstelt dat je privéberichten stuurt naar hem/haar.',

//'UCP_ZEBRA' => 'Friends &amp; Foes',
	'UCP_ZEBRA' => 'Vriendenbeheer',
	'UCP_ZEBRA_FOES' => 'Beheer vijanden',
	'UCP_ZEBRA_FRIENDS' => 'Beheer vrienden',
	
	'ADD_FOES' => 'Voeg nieuwe vijanden toe',
	'ADD_FOES_EXPLAIN' => 'Je kunt meerdere gebruikersnamen ingeven, elk op een andere regel.',
	'YOUR_FOES' => 'Je vijanden',
	'YOUR_FOES_EXPLAIN' => 'Om een gebruikersnaam te verwijderen, selecteer hem en klik op bevestigen.<br />Tip: gebruik CTRL om meerdere gebruikersnamen te selecteren/deselecteren.',
	'FOE_MESSAGE' => 'Bericht van vijand',
	'FOES_EXPLAIN' => 'Vijanden zijn gebruikers die standaard worden genegeerd. Berichten door deze gebruikers zijn niet volledig zichtbaar. Privéberichten van deze vijanden zijn wel toegestaan. NB: De moderators en beheerders kunnen niet worden genegeerd.',
	'FOES_UPDATED' => 'Je vijandenlijst is succesvol bijgewerkt.',
	'FOES_UPDATE_ERROR' => 'Je vijandenlijst is NIET bijgewerkt.',
	'NO_FOES' => 'Er zijn geen vijanden opgegeven',

	'ADD_FRIENDS' => 'Voeg nieuwe vrienden toe',
	'ADD_FRIENDS_EXPLAIN' => 'Je kunt meerdere gebruikersnamen ingeven, elk op een andere regel.',
	'YOUR_FRIENDS' => 'Je vrienden',
	'YOUR_FRIENDS_EXPLAIN' => 'Om een gebruikersnaam te verwijderen, selecteer hem en klik op bevestigen.<br />Tip: gebruik CTRL om meerdere gebruikersnamen te selecteren/deselecteren.',
	'FRIEND_MESSAGE' => 'Bericht van vriend',
	'FRIENDS' => 'Vrienden',
	'FRIENDS_EXPLAIN' => 'Vrienden staan je toe om snelle toegang tot deze gebruikers om regelmatig mee te communiceren. Als de template het toelaat wordt elke bericht die gemaakt is door een vriend gemarkeerd.',
	'FRIENDS_UPDATED' => 'Je vriendenlijst is succesvol bijgewerkt.',
	'FRIENDS_UPDATE_ERROR' => 'Je vriendenlijst is NIET bijgewerkt.',
	'FRIENDS_ONLINE' => 'Online',
	'FRIENDS_HIDDEN' => 'Verborgen',
	'FRIENDS_OFFLINE' => 'Offline',
	'NO_FRIENDS' => 'Er zijn geen vrienden opgegeven',
	'NO_FRIENDS_OFFLINE' => 'Er zijn geen vrienden offline',
	'NO_FRIENDS_ONLINE' => 'Er zijn geen vrienden online',

	'Default' => 'Standaard',
	
	'Reserved_Author' => '[ VERBORGEN ]',
	'Reserved_Topic' => '[ GERESERVEERDE ONDERWERP ]',
	'Reserved_Post' => '[ GERESERVEERDE BERICHT ]',
	
	'THANKS_RECEIVED' => 'Dankbericht ontvangen',

	'RECENT_USER_ACTIVITY' => 'Recente gebruikersactiviteit',
	'USER_TOPICS_STARTED' => 'Onderwerpen gestart',
	'USER_POSTS' => 'Berichten geschreven',
	'USER_TOPICS_VIEWS' => 'Onderwerp bekeken',
	'RECENT_USER_STARTED_TITLE' => 'gestart door %s',
	'RECENT_USER_STARTED_NAV' => 'Onderwerpen gestart door %s',
	'RECENT_USER_POSTS_TITLE' => 'welke %s geplaatst in',
	'RECENT_USER_POSTS_NAV' => 'Onderwrpen welke %s geplaatst in',
	'RECENT_USER_VIEWS_TITLE' => 'bekeken door %s',
	'RECENT_USER_VIEWS_NAV' => 'Onderwerpen bekeken door %s',

	'WARN_NO_BUMP' => 'Je bent de auteur van het laatste bericht in dit onderwerp: je kan niet nog een nieuwe bericht plaatsen binnen 24 uur na je laatste bericht zonder dat iemand erop gereageerd heeft.',

	'LINK_THIS_TOPIC' => 'Link dit onderwerp',
	'LINK_URL' => 'URL',
	'LINK_BBCODE' => 'BBCode',
	'LINK_HTML' => 'HTML',
	
	'NEWS_POSTED' => 'Blader door nieuws wat is geplaatst',
	'TOPICS_POSTED' => 'Zoek onderwerp gestart door',
	'POSTS_POSTED' => 'Zoek alle berichten door gebruiker',

	'ACCOUNT_DELETION_REQUEST' => 'Gebruiker %s heeft verzocht om zijn/haar account te verwijderen.',

	'SORT_TOPICS' => 'Sorteer onderwerpen',
	'SORT_TOPICS_NEWEST' => 'Nieuwste',
	'SORT_TOPICS_OLDEST' => 'Oudste',

	'EDIT_POST_DETAILS' => 'Bewerk berichtdetails',
	'CURRENT_POSTER' => 'Huidige auteur',
	'NEW_POSTER' => 'Nieuwe auteur',
	'DETAILS_CHANGED' => '<b>Berichtdetails succesvol aangepast.</b></span><br /><span class="postdetails">Dit venster sluit na 3 seconden.',

	'Redirect' => 'Doorsturen',
	'Redirect_to' => 'Als je browser metaredirectie niet ondersteund, klik %shier%s om doorgestuurd te worden',

	'InProgress' => 'In volle gang',

	'HAPPY_BIRTHDAY' => 'Hartelijk Gefeliciteerd!',

	'DOWNLOAD' => 'Download',
	'DOWNLOADED' => 'Gedownload',
	'FILESIZE' => 'Bestandsgrootte',
	'FILENAME' => 'Bestandsnaam',
	'FILE_NOT_AUTH' => 'Je bent niet bevoegd om deze bestand te downloaden',
	'SHOW_POSTS_FROM' => 'Bekijk berichten van',
	'SHOW_POSTS_TO' => 'naar',

	'SEE_MORE_DETAILS' => 'Bekijk meer details...',
	'UNKNOWN' => 'Onbekend',
	'MASS_PM' => 'Massa PB',
	'TEXT_FORMAT' => 'Formaat',
	'SENDER' => 'Afzender',
	'PM_NOTIFICATION' => 'Hallo,<br /><br />Je hebt een nieuw privébericht ontvangen op je account op "{SITENAME}".<br /><br />Je kan je nieuwe privébericht bekijken door een klik op de volgende link:<br /><br />{U_INBOX}<br /><br />',

	'GSEARCH' => 'Google Zoeken',
	'GSEARCH_ENGINE' => 'Gebruik Google Zoeken',
	'SEARCH_WHAT' => 'Zoek wat',
	'SEARCH_WHERE' => 'Zoek waar',
	'SEARCH_THIS_FORUM' => 'Zoek in dit forum...',
	'SEARCH_THIS_TOPIC' => 'Zoek in dit onderwerp...',
	'VF_ALL_TOPICS' => 'Alle onderwerpen',

	'WHITE_LIST_MESSAGE' => 'Deze website benodigd accountactivatie per e-mail. Controleer of je domein op de witte lijst voor komt van je anti-spamsysteem of je kan nooit een activatiebericht ontvangen.',
	'CLICK_RETURN_HOME' => 'Klik %shier%s om terug te keren naar homepagina',

	'WEEK_DAY_SUNDAY' => 'zondag',
	'WEEK_DAY_MONDAY' => 'maandag',
	'WEEK_DAY_TUESDAY' => 'dinsdag',
	'WEEK_DAY_WEDNESDAY' => 'woensdag',
	'WEEK_DAY_THURSDAY' => 'donderdag',
	'WEEK_DAY_FRIDAY' => 'vrijdag',
	'WEEK_DAY_SATURDAY' => 'zaterdag',

	'RATINGS' => 'Beoordelingen',

	'ERROR_TABLE' => 'Kan %s tabel niet vinden',

	'SMILEYS' => 'Smilies',
	'SMILEYS_NO_CATEGORIES' => 'Er zijn geen categorieën aangemaakt',
	'SMILEYS_CATEGORY' => 'Categorie',
	'SMILEYS_GALLERY' => 'Smiliesgallerij',
	'SMILEYS_STANDARD' => 'Standaard smilies',
	
	'QUICK_LIST' => 'Volledige lijst',
	'NORMAL_LIST' => 'Normale lijst',

	'RETURN_PAGE' => '%sTerug naar vorige pagina%s',
	'FILE_NOT_FOUND' => 'Bestand niet gevonden',
	'FSOCK_DISABLED' => 'FSOCK uitgeschakeld',

	'MANAGEMENT' => 'Team',
	'SORT_ORDER' => 'Sorteer op',
	'SORT_DIR' => 'Sorteervolgorde',
	
	'TIME_YEAR' => 'Jaar',
	'TIME_MONTH' => 'Maand',
	'TIME_DAY' => 'Dag',
	'TIME_HOUR' => 'Uur',
	'TIME_MINUTE' => 'Minuut',
	'TIME_SECOND' => 'Seconde',

	'CONTACTS' => 'Contacten',

	// Event Registration - BEGIN
	'Reg_Title' => 'Evenementregistratie',
	'Post_Registration' => 'Evenementregistratie',
	'Add_registration' => 'Voeg evenementregistratie toe',
	'Add_reg_explain' => '&nbsp;&bull; Vink <i>activeren</i> aan om de registratieformulier weer te geven in dit bericht. Vink het uit om het te verbergen.<br />&nbsp;&bull; Vink <i>resetten</i> aan om alle huidige registraties te verwijderen in dit forumulier.<br />&nbsp;&bull; Geef een aantal <i>plaatsen</i> in om een maximum te stellen aan de aantal registraties per optie.  "0" of leeg = oneindig.',
	'reg_activate' => 'Activeren',
	'reg_reset' => 'Resetten',
	'Reg_Insert' => 'Je hebt je geregistreerd voor de evenement.',
	'Reg_Change' => 'Registratie gewijzigd.',
	'Reg_Confirm' => 'Registratie bevestigd.',
	'Reg_Unregister' => 'Registratie geannuleerd.',
	'Reg_Max_Registrations' => 'De maximum aantal registraties voor deze optie is bereikt. Er worden geen registraties meer geaccepteerd.',
	'Reg_No_Slots_Left' => 'Geen plaatsen over om te registreren.',
	'Reg_One_Slot_Left' => '1 plaats over om te registreren.',
	'Reg_Slots_Left' => '%s plaatsen over.',
	'Reg_Self_Unregister' => 'Ongeregistreerd',
	'Reg_Own_Confirmation' => 'Bevestigen',
	'Reg_Own_Confirmed' => 'bevestigd',
	'Reg_Green_Option' => 'Groene optie',
	'Reg_Blue_Option' => 'Blauwe optie',
	'Reg_Red_Option' => 'Rode optie',
	'Reg_Value_Max_Registrations' => 'Plaats',
	'Reg_Do' => 'Opgeven',
	'Reg_Maybe' => 'Niet zeker',
	'Reg_Dont' => 'Niet deze keer',
	'Reg_Head_Username' => 'Gebruiker:',
	'Reg_Head_Time' => 'Datum:',
	'Reg_for' => 'Registratie loopt tot',
	'Reg_for_explain' => '[ Vul een 0 in of laat het leeg voor een oneindige lopende registratie ]',
	'Reg_no_options_specified' => 'Je moet tenminste een optie specificeren om te registreren voor.',
	'Reg_event_date' => '<b>Evenementdatum: </b>',
	// Event Registration - END

	'REPLY_PREFIX_OLD' => 'Re: ',
	'REPLY_PREFIX' => 'Re: ',
	)
);

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

$lang['Prune_commands'] = array();

// here you can make more entries if needed
$lang['Prune_commands'][0] = 'Ruim gebruikers op die geen berichten geplaatst hebben';
$lang['Prune_explain'][0] = 'Wie heeft nog geen bericht geplaatst, <b>uitgezonderd</b> nieuwe gebruikers van de laatste %d dagen';
$lang['Prune_commands'][1] = 'Ruim inactieve gebruikers op';
$lang['Prune_explain'][1] = 'Wie heeft nooit ingelogd, <b>uitgezonderd</b> nieuwe gebruikers van de laatste %d dagen';
$lang['Prune_commands'][2] = 'Ruim niet geactiveerde gebruikers op';
$lang['Prune_explain'][2] = 'Wie heeft zich nooit geactiveerd, <b>uitgezonderd</b> nieuwe gebruikers van de laatste %d dagen';
$lang['Prune_commands'][3] = 'Ruim lange tijd sinds laatste bezoek gebruikers op';
$lang['Prune_explain'][3] = 'Wie heeft het forum de laatste 60 dagen niet bezocht, <b>uitgezonderd</b> nieuwe gebruikers van de laatste %d dagen';
$lang['Prune_commands'][4] = 'Ruim gebruikers op die niet vaak berichten plaatsen op';
$lang['Prune_explain'][4] = 'Wie heeft minder dan 1 bericht per 10 dagen geplaatst sinds registratie, <b>uitgezonderd</b> nieuwe gebruikers van de laatste %d dagen';
$lang['Prune_commands'][5] = 'Ruim gebruikers op die geen berichten plaatsen en nooit het forum bezoeken';
$lang['Prune_explain'][5] = 'Wie heeft nog geen bericht geplaatst en nog nooit het forum bezocht, <b>uitgezonderd</b> nieuwe gebruikers van de laatste %d dagen';

// Timezones - BEGIN
$lang['All_times'] = 'Alle tijden zijn in %s'; // eg. All times are GMT - 12 Hours (times from next block)

// Do not remove these even if duplicated...
$lang['tzs']['-12'] = 'GMT - 12 uur';
$lang['tzs']['-11'] = 'GMT - 11 uur';
$lang['tzs']['-10'] = 'GMT - 10 uur';
$lang['tzs']['-9'] = 'GMT - 9 uur';
$lang['tzs']['-8'] = 'GMT - 8 uur';
$lang['tzs']['-7'] = 'GMT - 7 uur';
$lang['tzs']['-6'] = 'GMT - 6 uur';
$lang['tzs']['-5'] = 'GMT - 5 uur';
$lang['tzs']['-4'] = 'GMT - 4 uur';
$lang['tzs']['-3.5'] = 'GMT - 3.5 uur';
$lang['tzs']['-3'] = 'GMT - 3 uur';
$lang['tzs']['-2'] = 'GMT - 2 uur';
$lang['tzs']['-1'] = 'GMT - 1 uur';
$lang['tzs']['0'] = 'GMT';
$lang['tzs']['1'] = 'GMT + 1 uur';
$lang['tzs']['2'] = 'GMT + 2 uur';
$lang['tzs']['3'] = 'GMT + 3 uur';
$lang['tzs']['3.5'] = 'GMT + 3.5 uur';
$lang['tzs']['4'] = 'GMT + 4 uur';
$lang['tzs']['4.5'] = 'GMT + 4.5 uur';
$lang['tzs']['5'] = 'GMT + 5 uur';
$lang['tzs']['5.5'] = 'GMT + 5.5 uur';
$lang['tzs']['6'] = 'GMT + 6 uur';
$lang['tzs']['6.5'] = 'GMT + 6.5 uur';
$lang['tzs']['7'] = 'GMT + 7 uur';
$lang['tzs']['8'] = 'GMT + 8 uur';
$lang['tzs']['9'] = 'GMT + 9 uur';
$lang['tzs']['9.5'] = 'GMT + 9.5 uur';
$lang['tzs']['10'] = 'GMT + 10 uur';
$lang['tzs']['11'] = 'GMT + 11 uur';
$lang['tzs']['12'] = 'GMT + 12 uur';
$lang['tzs']['13'] = 'GMT + 13 uur';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12 uur) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11 uur) Midway Island, Samoa';
$lang['tz']['-10'] = '(GMT -10 uur) Hawaii';
$lang['tz']['-9'] = '(GMT -9 uur) Alaska';
$lang['tz']['-8'] = '(GMT -8 uur) Pacific Time (US &amp; Canada)';
$lang['tz']['-7'] = '(GMT -7 uur) Mountain Time (US &amp; Canada)';
$lang['tz']['-6'] = '(GMT -6 uur) Central Time (US &amp; Canada), Mexico City';
$lang['tz']['-5'] = '(GMT -5 uur) Eastern Time (US &amp; Canada), Bogota, Lima, Quito';
$lang['tz']['-4'] = '(GMT -4 uur) Atlantic Time (Canada), Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3.5 uur) Newfoundland';
$lang['tz']['-3'] = '(GMT -3 uur) Brazil, Buenos Aires, Georgetown';
$lang['tz']['-2'] = '(GMT -2 uur) Mid-Atlantic';
$lang['tz']['-1'] = '(GMT -1 uur) Azores, Cape Verde Islands';
$lang['tz']['0'] = '(GMT) Western Europe Time, London, Lisbon, Casablanca, Monrovia';
$lang['tz']['1'] = '(GMT +1 uur) CET(Central Europe Time), Brussels, Madrid, Paris';
$lang['tz']['2'] = '(GMT +2 uur) EET(Eastern Europe Time), Kaliningrad, South Africa';
$lang['tz']['3'] = '(GMT +3 uur) Baghdad, Kuwait, Riyadh, Moscow, St. Petersburg';
$lang['tz']['3.5'] = '(GMT +3.5 uur) Tehran';
$lang['tz']['4'] = '(GMT +4 uur) Abu Dhabi, Muscat, Baku, Tbilisi';
$lang['tz']['4.5'] = '(GMT +4.5 uur) Kabul';
$lang['tz']['5'] = '(GMT +5 uur) Ekaterinburg, Islamabad, Karachi, Tashkent';
$lang['tz']['5.5'] = '(GMT +5.5 uur) Bombay, Calcutta, Madras, New Delhi';
$lang['tz']['5.75'] = '(GMT +5.75 uur) Kathmandu';
$lang['tz']['6'] = '(GMT +6 uur) Almaty, Dhaka, Colombo';
$lang['tz']['6.5'] = '(GMT +6.5 uur)';
$lang['tz']['7'] = '(GMT +7 uur) Bangkok, Hanoi, Jakarta';
$lang['tz']['8'] = '(GMT +8 uur) Beijing, Perth, Singapore, Hong Kong, Urumqi';
$lang['tz']['9'] = '(GMT +9 uur) Tokyo, Seoul, Osaka, Sapporo, Yakutsk';
$lang['tz']['9.5'] = '(GMT +9.5 uur) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10 uur) EAST(East Australian Standard), Guam';
$lang['tz']['11'] = '(GMT +11 uur) Magadan, Solomon Islands, New Caledonia';
$lang['tz']['12'] = '(GMT +12 uur) Auckland, Fiji, Kamchatka, Marshall Island';
$lang['tz']['13'] = '(GMT +13 uur) Nuku\'alofa';
// Timezones - END

$lang['datetime']['Sunday'] = $lang['WEEK_DAY_SUNDAY'];
$lang['datetime']['Monday'] = $lang['WEEK_DAY_MONDAY'];
$lang['datetime']['Tuesday'] = $lang['WEEK_DAY_TUESDAY'];
$lang['datetime']['Wednesday'] = $lang['WEEK_DAY_WEDNESDAY'];
$lang['datetime']['Thursday'] = $lang['WEEK_DAY_THURSDAY'];
$lang['datetime']['Friday'] = $lang['WEEK_DAY_FRIDAY'];
$lang['datetime']['Saturday'] = $lang['WEEK_DAY_SATURDAY'];
$lang['datetime']['Sun'] = 'zon';
$lang['datetime']['Mon'] = 'maa';
$lang['datetime']['Tue'] = 'din';
$lang['datetime']['Wed'] = 'woe';
$lang['datetime']['Thu'] = 'don';
$lang['datetime']['Fri'] = 'vri';
$lang['datetime']['Sat'] = 'zat';
$lang['datetime']['January'] = 'januari';
$lang['datetime']['February'] = 'februari';
$lang['datetime']['March'] = 'maart';
$lang['datetime']['April'] = 'april';
$lang['datetime']['May'] = 'mei';
$lang['datetime']['June'] = 'juni';
$lang['datetime']['July'] = 'juli';
$lang['datetime']['August'] = 'augustus';
$lang['datetime']['September'] = 'september';
$lang['datetime']['October'] = 'oktober';
$lang['datetime']['November'] = 'november';
$lang['datetime']['December'] = 'december';
$lang['datetime']['JAN'] = 'jan';
$lang['datetime']['FEB'] = 'feb';
$lang['datetime']['MAR'] = 'maa';
$lang['datetime']['APR'] = 'apr';
$lang['datetime']['MAY'] = 'mei';
$lang['datetime']['JUN'] = 'jun';
$lang['datetime']['JUL'] = 'jul';
$lang['datetime']['AUG'] = 'aug';
$lang['datetime']['SEP'] = 'sep';
$lang['datetime']['OCT'] = 'okt';
$lang['datetime']['NOV'] = 'nov';
$lang['datetime']['DEC'] = 'dec';

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