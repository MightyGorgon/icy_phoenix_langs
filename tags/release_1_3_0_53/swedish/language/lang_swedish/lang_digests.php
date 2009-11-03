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
* @Extra credits for this file
* Mark D. Hamill (mhamill@computer.org)
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

$lang = array_merge($lang, array(
// This block goes as default text in the emailed digest (mail_digests.php)
	'digest_introduction' => 'Som du beg�rde, h�r �r det senaste sammandraget p� meddelande postat p� ' . $board_config['sitename'] . ' forum. V�nligen kom och delta i diskussionen!!',
	'digest_from_text_name' => $board_config['sitename'] . ' Sammandrags Robot',
	'digest_from_email_address' => $board_config['board_email'],
	'digest_subject_line' => $board_config['sitename'] . ' Sammandrags',
	'digest_disclaimer_html' => "\n" . 'Detta sammandrag skickas till registrerade medlemmar i <a href="' . DIGEST_SITE_URL . '">' . $board_config['sitename'] . '</a> forum och bara f�r att du uttryckligen beg�rt det. ' . $board_config['sitename'] . ' �r helt kommersiellt gratis. Din e-postadress l�mnas aldrig ut till utomst�ende parter. Se v�r <a href="' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">FAQ</a> f�r mer information om v�r sekretesspolicy. Du kan �ndra eller ta bort din prenumeration genom att logga in p� ' . $board_config['sitename'] . ' fr�n <a href="' . DIGEST_SITE_URL . 'sammandrag.' . PHP_EXT . '">Sammandrags Sida</a>. (Du m�ste vara inloggad f�r att �ndra din sammandrags inst�llning.) Om du har fr�gor eller synpunkter p� utformningen av detta sammandrag skicka det till <a href="mailto:' . $board_config['board_email'] . '">' . $board_config['sitename'] . ' Webmaster</a>.',
	'digest_disclaimer_text' => "\n" . 'Detta sammandrag skickas till registrerade medlemmar i ' . $board_config['sitename'] . ' forum och bara f�r att du uttryckligen beg�rt det. ' . $board_config['sitename'] . ' �r helt kommersiellt gratis. Din e-postadress l�mnas aldrig ut till utomst�ende parter. Se v�r FAQ f�r mer information om v�r sekretesspolicy. Du kan �ndra eller ta bort din prenumeration genom att logga in p� ' . $board_config['sitename'] . ' fr�n Sammandrags Sidan. (Du m�ste vara inloggad f�r att �ndra din sammandrags inst�llning.) Om du har fr�gor eller synpunkter p� utformningen av detta sammandrag skicka det till ' . $board_config['board_email'] . '.',
	'digest_forum' => 'Forum: ',
	'digest_topic' => '�mne: ',
	'digest_link' => 'L�nk',
	'digest_post_time' => 'Post Tid',
	'digest_author' => 'F�rfattare',
	'digest_message_excerpt' => 'Meddelande Utdrag',
	'digest_posted_by' => 'Postad av ',
	'digest_posted_at' => ' den ',
	'digest_forums_message_digest' => 'Forum Meddelande Sammandrag', // used in <head> tag
	'digest_salutation' => 'K�ra ',
	'digest_your_digest_options' => 'Dina sammandrags alternativ:',
	'digest_format' => 'Format:',
	'digest_show_message_text' => 'Visa Meddelande Text:',
	'digest_show_my_messages' => 'Visa Mina Meddelanden:',
	'digest_frequency' => 'Digest Frequency:',
	'digest_show_only_new_messages' => 'Visa endast nya meddelanden sedan f�rra g�ngen jag loggade in:',
	'digest_send_if_no_new_messages' => 'Skicka sammandrag om inga nya meddelanden:',
	'digest_period_24_hrs' => '24 timmar',
	'digest_period_1_week' => '1 vecka',
	'digest_no_new_messages' => 'Det finns inga nya meddelanden f�r forumet som du valt.',
	'digest_message_size' => 'Maximalt tecken per meddelande i sammandrag:',
	'digest_summary' => 'Sammandrags Sammanfattning',
	'digest_a_total_of' => 'Totalt',
	'digest_were_emailed' => 'sammandrag var e-postade.',
	'digest_server_date' => 'Server Datum:',
	'digest_server_hour' => 'Server Timme:',
	'digest_server_time_zone' => 'Server Tids Zon:',
	'digest_or' => 'or',
	'digest_a_digest_containing' => 'Ett sammandrag inneh�llande',
	'digest_posts_was_sent_to' => 'post skickades till',

// This block goes on the digest settings user interface page (digests.php)
	'digest_page_title' => 'Sammandrag',
	'digest_explanation' => 'Sammandrag �r e-post sammanfattningar av meddelanden h�r som skickas till dig med j�mna mellanrum. Sammandrag kan skickas varje dag eller varje vecka p� en timme fr�n den dag du v�ljer. Du kan ange s�rskilda forum som du vill att meddelandet sammanfattar, eller s� kan du v�lja att ta emot alla meddelanden f�r alla forum som du har tillg�ng till.<br /><br />' . "\r\n" . 'I linje med v�r sekretesspolicy inneh�ller sammandragen inte "spam", eller din e-postadress anv�nds inte i n�got som helst samband med en annons. Du kan naturligtvis avboka din sammandrags prenumerationen n�r som helst genom att helt enkelt komma tillbaka till denna sida. De flesta anv�ndare tycker sammandrag �r mycket anv�ndbart. Vi uppmuntrar dig att prova det!' . "\n",
	'digest_wanted' => '<b>Typ av Sammandrag Saknad:</b><br />(Vecko sammandragen s�nds p� S�ndagar)',
	'digest_none' => 'Ingen (Av Prenumeration)',
	'digest_daily' => 'Daglig',
	'digest_weekly' => 'Veckovis',
	'digest_format_short' => 'Format p� Sammandraget:',
	'digest_format' => '<b>Sammandrags Format:</b><br />(HTML rekommenderas starkt om inte ditt e-postprogram inte kan visa HTML)',
	'digest_html' => 'HTML',
	'digest_text' => 'Text',
	'digest_excerpt' => '<b>Visa Utdrag av Meddelande:</b>',
	'digest_yes' => 'Ja',
	'digest_no' => 'Nej',
	'digest_l_show_my_messages' => '<b>Visa mina meddelanden i sammandrag:</b>',
	'digest_l_show_new_only' => '<b>Visa bara nya inl�gg:</b><br />(TDetta kommer att filtrera ut alla meddelanden som skickas f�re det datum och klockslag du senast bes�kte som annars skulle ing� i sammandrag.)',
	'digest_send_if_no_msgs' => '<b>Skicka ett sammandrag om inga nya meddelanden var inlagda:</b>',
	'digest_hour_to_send' => '<b>Tid p� dygnet f�r att skicka sammandrag:</b><br />(Detta �r den tid som baseras p� den tidszon du anget i din profil. Om du �ndrar din profils tidszon och du vill att sammandrag ska komma fram till samma tid p� dagen d� f�r du �ndra detta v�rde ocks�.)',
	'digest_hour_to_send_short' => 'Tid d� sammandrag skickas (baserat p� tidszon i din profil):',
	'digest_midnight' => 'Midnatt',
	'digest_1am' => '1 AM',
	'digest_2am' => '2 AM',
	'digest_3am' => '3 AM',
	'digest_4am' => '4 AM',
	'digest_5am' => '5 AM',
	'digest_6am' => '6 AM',
	'digest_7am' => '7 AM',
	'digest_8am' => '8 AM',
	'digest_9am' => '9 AM',
	'digest_10am' => '10 AM',
	'digest_11am' => '11 AM',
	'digest_12pm' => '12 PM',
	'digest_1pm' => '1 PM',
	'digest_2pm' => '2 PM',
	'digest_3pm' => '3 PM',
	'digest_4pm' => '4 PM',
	'digest_5pm' => '5 PM',
	'digest_6pm' => '6 PM',
	'digest_7pm' => '7 PM',
	'digest_8pm' => '8 PM',
	'digest_9pm' => '9 PM',
	'digest_10pm' => '10 PM',
	'digest_11pm' => '11 PM',
	'digest_select_forums' => '<b>Skicka sammandrag f�r dessa forum:</b>',
	'digest_create' => 'Din sammandrags inst�llning var successfullt skapad',
	'digest_modify' => 'Din sammandrags inst�llning var successfullt uppdaterad',
	'digest_unsubscribe' => 'Du har avslutat prenumerationen och kommer inte l�ngre att f� ett sammandrag',
	'digest_no_forums_selected' => 'Du har inte valt n�gra forum, s� du kommer att bli avtecknad',
	'digest_all_forums' => 'Alla Tecknade Forum',
	'digest_submit_text' => 'G�r Sammandrags �ndringar',
	'digest_reset_text' => '�terst�ll',
	'digest_size' => '<b>H�gsta antal tecken som ska visas per meddelande:</b><br />(F�rsiktighet: st�lla in den h�r f�r h�gt g�r mycket l�nga sammandrag. En l�nk ges f�r varje meddelande s� att du kan se hela inneh�llet i meddelandet.)',
	'digest_size_50' => '50',
	'digest_size_100' => '100',
	'digest_size_150' => '150',
	'digest_size_300' => '300',
	'digest_size_600' => '600',
	'digest_size_max' => 'Maximalt (32000)',
	'digest_version_text' => 'Version',
	)
);

?>