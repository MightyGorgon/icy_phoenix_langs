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
	'digest_introduction' => 'Som du begärde, här är det senaste sammandraget på meddelande postat på ' . $board_config['sitename'] . ' forum. Vänligen kom och delta i diskussionen!!',
	'digest_from_text_name' => $board_config['sitename'] . ' Sammandrags Robot',
	'digest_from_email_address' => $board_config['board_email'],
	'digest_subject_line' => $board_config['sitename'] . ' Sammandrags',
	'digest_disclaimer_html' => "\n" . 'Detta sammandrag skickas till registrerade medlemmar i <a href="' . DIGEST_SITE_URL . '">' . $board_config['sitename'] . '</a> forum och bara för att du uttryckligen begärt det. ' . $board_config['sitename'] . ' är helt kommersiellt gratis. Din e-postadress lämnas aldrig ut till utomstående parter. Se vår <a href="' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">FAQ</a> för mer information om vår sekretesspolicy. Du kan ändra eller ta bort din prenumeration genom att logga in på ' . $board_config['sitename'] . ' från <a href="' . DIGEST_SITE_URL . 'sammandrag.' . PHP_EXT . '">Sammandrags Sida</a>. (Du måste vara inloggad för att ändra din sammandrags inställning.) Om du har frågor eller synpunkter på utformningen av detta sammandrag skicka det till <a href="mailto:' . $board_config['board_email'] . '">' . $board_config['sitename'] . ' Webmaster</a>.',
	'digest_disclaimer_text' => "\n" . 'Detta sammandrag skickas till registrerade medlemmar i ' . $board_config['sitename'] . ' forum och bara för att du uttryckligen begärt det. ' . $board_config['sitename'] . ' är helt kommersiellt gratis. Din e-postadress lämnas aldrig ut till utomstående parter. Se vår FAQ för mer information om vår sekretesspolicy. Du kan ändra eller ta bort din prenumeration genom att logga in på ' . $board_config['sitename'] . ' från Sammandrags Sidan. (Du måste vara inloggad för att ändra din sammandrags inställning.) Om du har frågor eller synpunkter på utformningen av detta sammandrag skicka det till ' . $board_config['board_email'] . '.',
	'digest_forum' => 'Forum: ',
	'digest_topic' => 'Ämne: ',
	'digest_link' => 'Länk',
	'digest_post_time' => 'Post Tid',
	'digest_author' => 'Författare',
	'digest_message_excerpt' => 'Meddelande Utdrag',
	'digest_posted_by' => 'Postad av ',
	'digest_posted_at' => ' den ',
	'digest_forums_message_digest' => 'Forum Meddelande Sammandrag', // used in <head> tag
	'digest_salutation' => 'Kära ',
	'digest_your_digest_options' => 'Dina sammandrags alternativ:',
	'digest_format' => 'Format:',
	'digest_show_message_text' => 'Visa Meddelande Text:',
	'digest_show_my_messages' => 'Visa Mina Meddelanden:',
	'digest_frequency' => 'Digest Frequency:',
	'digest_show_only_new_messages' => 'Visa endast nya meddelanden sedan förra gången jag loggade in:',
	'digest_send_if_no_new_messages' => 'Skicka sammandrag om inga nya meddelanden:',
	'digest_period_24_hrs' => '24 timmar',
	'digest_period_1_week' => '1 vecka',
	'digest_no_new_messages' => 'Det finns inga nya meddelanden för forumet som du valt.',
	'digest_message_size' => 'Maximalt tecken per meddelande i sammandrag:',
	'digest_summary' => 'Sammandrags Sammanfattning',
	'digest_a_total_of' => 'Totalt',
	'digest_were_emailed' => 'sammandrag var e-postade.',
	'digest_server_date' => 'Server Datum:',
	'digest_server_hour' => 'Server Timme:',
	'digest_server_time_zone' => 'Server Tids Zon:',
	'digest_or' => 'or',
	'digest_a_digest_containing' => 'Ett sammandrag innehållande',
	'digest_posts_was_sent_to' => 'post skickades till',

// This block goes on the digest settings user interface page (digests.php)
	'digest_page_title' => 'Sammandrag',
	'digest_explanation' => 'Sammandrag är e-post sammanfattningar av meddelanden här som skickas till dig med jämna mellanrum. Sammandrag kan skickas varje dag eller varje vecka på en timme från den dag du väljer. Du kan ange särskilda forum som du vill att meddelandet sammanfattar, eller så kan du välja att ta emot alla meddelanden för alla forum som du har tillgång till.<br /><br />' . "\r\n" . 'I linje med vår sekretesspolicy innehåller sammandragen inte "spam", eller din e-postadress används inte i något som helst samband med en annons. Du kan naturligtvis avboka din sammandrags prenumerationen när som helst genom att helt enkelt komma tillbaka till denna sida. De flesta användare tycker sammandrag är mycket användbart. Vi uppmuntrar dig att prova det!' . "\n",
	'digest_wanted' => '<b>Typ av Sammandrag Saknad:</b><br />(Vecko sammandragen sänds på Söndagar)',
	'digest_none' => 'Ingen (Av Prenumeration)',
	'digest_daily' => 'Daglig',
	'digest_weekly' => 'Veckovis',
	'digest_format_short' => 'Format på Sammandraget:',
	'digest_format' => '<b>Sammandrags Format:</b><br />(HTML rekommenderas starkt om inte ditt e-postprogram inte kan visa HTML)',
	'digest_html' => 'HTML',
	'digest_text' => 'Text',
	'digest_excerpt' => '<b>Visa Utdrag av Meddelande:</b>',
	'digest_yes' => 'Ja',
	'digest_no' => 'Nej',
	'digest_l_show_my_messages' => '<b>Visa mina meddelanden i sammandrag:</b>',
	'digest_l_show_new_only' => '<b>Visa bara nya inlägg:</b><br />(TDetta kommer att filtrera ut alla meddelanden som skickas före det datum och klockslag du senast besökte som annars skulle ingå i sammandrag.)',
	'digest_send_if_no_msgs' => '<b>Skicka ett sammandrag om inga nya meddelanden var inlagda:</b>',
	'digest_hour_to_send' => '<b>Tid på dygnet för att skicka sammandrag:</b><br />(Detta är den tid som baseras på den tidszon du anget i din profil. Om du ändrar din profils tidszon och du vill att sammandrag ska komma fram till samma tid på dagen då får du ändra detta värde också.)',
	'digest_hour_to_send_short' => 'Tid då sammandrag skickas (baserat på tidszon i din profil):',
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
	'digest_select_forums' => '<b>Skicka sammandrag för dessa forum:</b>',
	'digest_create' => 'Din sammandrags inställning var successfullt skapad',
	'digest_modify' => 'Din sammandrags inställning var successfullt uppdaterad',
	'digest_unsubscribe' => 'Du har avslutat prenumerationen och kommer inte längre att få ett sammandrag',
	'digest_no_forums_selected' => 'Du har inte valt några forum, så du kommer att bli avtecknad',
	'digest_all_forums' => 'Alla Tecknade Forum',
	'digest_submit_text' => 'Gör Sammandrags Ändringar',
	'digest_reset_text' => 'Återställ',
	'digest_size' => '<b>Högsta antal tecken som ska visas per meddelande:</b><br />(Försiktighet: ställa in den här för högt gör mycket långa sammandrag. En länk ges för varje meddelande så att du kan se hela innehållet i meddelandet.)',
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