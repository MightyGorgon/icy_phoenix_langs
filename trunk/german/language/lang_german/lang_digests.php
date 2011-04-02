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
* TheSteffen, KugeLSichA, Tom, Carsten
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
	'digest_introduction' => 'Wie von dir gewünscht, erhältst du hier die letzten Digests der Mitteilungen die bei ' . $board_config['sitename'] . ' gepostet wurden. Bitte trete der Diskussion bei!',
	'digest_from_text_name' => $config['sitename'] . ' Digest Robot',
	'digest_from_email_address' => $config['board_email'],
	'digest_subject_line' => $config['sitename'] . ' Digests',
	'digest_disclaimer_html' => "\n" . 'Dieser Digest wird an registrierte Mitglieder von <a href="' . DIGEST_SITE_URL . '">' . $board_config['sitename'] . '</a> gesendet und nur weil du es explizit angefordert hast. Deine E-Mail Adresse wird nie an andere Anbieter weitergegeben. Schau in unsere <a href="' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">FAQ</a> für mehr Informationen darüber. Du kannst deine Abonnierung bearbeiten oder löschen, indem du Dich unter ' . $board_config['sitename'] . ' einloggst und die <a href="' . DIGEST_SITE_URL . 'digests.' . PHP_EXT . '">Digest Seite</a> besuchst. (Du musst eingeloggt sein um deine Digest Einstellungen ändern zu können.) Wenn du Fragen oder Hinweise zum Format der Digests hast, sende diese bitte an den <a href="mailto:' . $board_config['board_email'] . '">' . $board_config['sitename'] . ' Webmaster</a>.',
	'digest_disclaimer_text' => "\n" . 'Dieser Digest wird an registrierte Mitglieder von ' . $board_config['sitename'] . ' gesendet und nur weil du es explizit angefordert hast. Deine E-Mail Adresse wird nie an andere Anbieter weitergegeben. Schau in unsere FAQ für mehr Informationen darüber. Du kannst deine Abonnierung bearbeiten oder löschen, indem du Dich unter ' . $board_config['sitename'] . ' einloggst und die Digest Seite besuchst.. (Du musst eingeloggt sein um deine Digest Einstellungen ändern zu können.) Wenn du Fragen oder Hinweise zum Format der Digests hast, sende diese bitte an den ' . $board_config['board_email'] . '.',
	'digest_forum' => 'Forum: ',
	'digest_topic' => 'Thema: ',
	'digest_link' => 'Link',
	'digest_post_time' => 'Beitragszeit', 
	'digest_author' => 'Autor',
	'digest_message_excerpt' => 'Mitteilungs Auszug',
	'digest_posted_by' => 'Erstellt von ',
	'digest_posted_at' => ' um ',
	'digest_forums_message_digest' => 'Foren Mitteilungs Digest', // used in <head> tag
	'digest_salutation' => 'Lieber ',
	'digest_your_digest_options' => 'Deine Digest Optionen:',
	'digest_format' => 'Format:',
	'digest_show_message_text' => 'Zeige Mitteilungs Text:',
	'digest_show_my_messages' => 'Zeige meine Mitteilungen:',
	'digest_frequency' => 'Digest Frequenz:',
	'digest_show_only_new_messages' => 'Zeige nur neue Mitteilungen seit dem letzten Login:',
	'digest_send_if_no_new_messages' => 'Sende Digest wenn keine neuen Mitteilungen:',
	'digest_period_24_hrs' => '24 Stunden',
	'digest_period_1_week' => '1 Woche',
	'digest_no_new_messages' => 'Es gibt keine neuen Mitteilungen für das Forum was du ausgewählt hast.',
	'digest_message_size' => 'Maximale Buchstaben pro Mitteilung in den Digests:',
	'digest_summary' => 'Digest Zusammenfassung',
	'digest_a_total_of' => 'Eine Gesamtmenge von',
	'digest_were_emailed' => 'Digests wurden gemailt',
	'digest_server_date' => 'Server Datum:',
	'digest_server_hour' => 'Server Stunde:',
	'digest_server_time_zone' => 'Server Zeit Zone:',
	'digest_or' => 'oder',
	'digest_a_digest_containing' => 'Ein Digest enthält',
	'digest_posts_was_sent_to' => 'Beiträge wurden gesendet zu',

// This block goes on the digest settings user interface page (digests.php)
	'digest_page_title' => 'Digests',
	'digest_explanation' => 'Digests sind eine E-Mail Zusammenfassung von hier geschriebenen Mitteilungen und werden periodisch an dich gesendet. Digests können täglich oder wöchentlich zu einer von dir bestimmten Zeit gesendet werden. Du kannst jene bestimmten Foren spezifizieren, für die du Mitteilungs Zusammenfassungen wünschst, oder du kannst alle Foren auswählen für die du Zugriff hast.<br /><br />' . "\r\n" . 'In Übereinstimmung mit unseren Datenschutzbestimmungen enhalten unsere Digests keinen Spam, desweiteren wird deine E-Mail für keine Werbung verwendet. Du kannst selbstverständlichn deine Digest Abonnierung jederzeit wieder rückgängig machen, indem du wieder zu dieser Seite zurückkommst. Die meisten Benutzer finden die Digests jedoch sehr nützlich. Wir legen dir nahe es doch mal auszuprobieren!' . "\r\n",
	'digest_wanted' => '<b>Art der gewünschten Digests:</b><br />(Wöchentliche Digests werden Sonntags gesendet)',
	'digest_none' => 'Keine (austragen)',
	'digest_daily' => 'Täglich',
	'digest_weekly' => 'Wöchentlich',
	'digest_format_short' => 'Format der Digests:',
	'digest_format' => '<b>Digest Format:</b><br />(HTML ist sehr empfohlen, es sei denn dein E-Mail Programm kann kein HTML darstellen)',
	'digest_html' => 'HTML',
	'digest_text' => 'Text',
	'digest_excerpt' => '<b>Anzeige der Mitteilungs Excerpt:</b>',
	'digest_yes' => 'Ja',
	'digest_no' => 'Nein',
	'digest_l_show_my_messages' => '<b>Zeige meine Mitteilungen in den Digests:</b>',
	'digest_l_show_new_only' => '<b>Zeige nur neue Mitteilungen:</b><br />(Dies filtert die Mitteilungen vor deinem letzten Besuch aus.)',
	'digest_send_if_no_msgs' => '<b>Sende ein Digest wenn keine neuen Mitteilungen geschrieben wurden:</b>',
	'digest_hour_to_send' => '<b>Zeit des Tages zum Senden der Digests:</b><br />(Dies ist die Zeit basierend auf der Zeitzonen Einstellung in deinem Profil. Wenn du die Zeitzone in deinem Profil geändert hast, und du möchtest das die Digests am gleichen Tag ankommen sollen, solltest du diesen Wert hier auch ändern.)',
	'digest_hour_to_send_short' => 'Digests Sendezeit (basierend auf der Zeitzone in deinem Profil):',
	'digest_midnight' => 'Mitternacht',
	'digest_1am' => '01 Uhr',
	'digest_2am' => '02 Uhr',
	'digest_3am' => '03 Uhr',
	'digest_4am' => '04 Uhr',
	'digest_5am' => '05 Uhr',
	'digest_6am' => '06 Uhr',
	'digest_7am' => '07 Uhr',
	'digest_8am' => '08 Uhr',
	'digest_9am' => '09 Uhr',
	'digest_10am' => '10 Uhr',
	'digest_11am' => '11 Uhr',
	'digest_12pm' => '12 Uhr',
	'digest_1pm' => '13 Uhr',
	'digest_2pm' => '14 Uhr',
	'digest_3pm' => '15 Uhr',
	'digest_4pm' => '16 Uhr',
	'digest_5pm' => '17 Uhr',
	'digest_6pm' => '18 Uhr',
	'digest_7pm' => '19 Uhr',
	'digest_8pm' => '20 Uhr',
	'digest_9pm' => '21 Uhr',
	'digest_10pm' => '22 Uhr',
	'digest_11pm' => '23 Uhr',
'digest_click_return' => 'Klicke %shier%s, um zu den Digest Einstellungen zurückzukehren', // %s's here are for uris, do not remove!
	'digest_select_forums' => '<b>Sende Digests für diese Foren:</b>',
	'digest_create' => 'Deine Digest Einstellungen wurden erfolgreich erstellt',
	'digest_modify' => 'Deine Digest Einstellungen wurden erfolgreich aktualisiert',
	'digest_unsubscribe' => 'Du wurdest ausgetragen und erhältst nun keine Digests mehr',
	'digest_no_forums_selected' => 'Du hast kein Forum ausgewählt, du wirst nun ausgetragen',
	'digest_all_forums' => 'Alle abonnierten Foren',
	'digest_submit_text' => 'Digest-Änderungen vornehmen',
	'digest_reset_text' => 'Zurücksetzen',
	'digest_size' => '<b>Maximale Buchstaben die pro Mitteilung angezeigt werden:</b><br />(Achtung: wenn dieser Wert zu hoch gesetzt wird, können dadurch sehr lange Digests entstehen.)',
	'digest_size_50' => '50',
	'digest_size_100' => '100',
	'digest_size_150' => '150',
	'digest_size_300' => '300',
	'digest_size_600' => '600',
	'digest_size_max' => 'Maximum (32000)',
	'digest_version_text' => 'Version',
	)
);

?>