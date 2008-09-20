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
* TheSteffen, KugeLSichA, Tom
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	die('Hacking attempt');
}

// This block goes as default text in the emailed digest (mail_digests.php)
$lang['digest_introduction'] = 'Wie von dir gewünscht, erhälst du hier die letzten Digests der Mitteilungen die bei ' . $board_config['sitename'] . ' gepostet wurden. Bitte trete der Diskussion bei!';
$lang['digest_from_text_name'] = $board_config['sitename'] . ' Digest Robot';
$lang['digest_from_email_address'] = $board_config['board_email'];
$lang['digest_subject_line'] = $board_config['sitename'] . ' Digests';
$lang['digest_disclaimer_html'] = "\r\n" . 'Dieser Digest wird an registrierte Mitglieder von <a href="' . DIGEST_SITE_URL . '">' . $board_config['sitename'] . '</a> gesendet und nur weil du es explizit angefordert hast. Deine E-Mail Adresse wird nie an andere Anbieter weitergegeben. Schau in unsere <a href="' . DIGEST_SITE_URL . 'faq.' . $phpEx . '">FAQ</a> für mehr Informationen darüber. Du kannst deine Abonnierung bearbeiten oder löschen, indem du Dich unter ' . $board_config['sitename'] . ' einloggst und die <a href="' . DIGEST_SITE_URL . 'digests.' . $phpEx . '">Digest Seite</a> besuchst. (Du musst eingeloggt sein um deine Digest Einstellungen ändern zu können.) Wenn du Fragen oder Hinweise zum Format der Digests hast, sende diese bitte an den <a href="mailto:' . $board_config['board_email'] . '">' . $board_config['sitename'] . ' Webmaster</a>.';
$lang['digest_disclaimer_text'] = "\r\n" . 'Dieser Digest wird an registrierte Mitglieder von ' . $board_config['sitename'] . ' gesendet und nur weil du es explizit angefordert hast. Deine E-Mail Adresse wird nie an andere Anbieter weitergegeben. Schau in unsere FAQ für mehr Informationen darüber. Du kannst deine Abonnierung bearbeiten oder löschen, indem du Dich unter ' . $board_config['sitename'] . ' einloggst und die Digest Seite besuchst.. (Du musst eingeloggt sein um deine Digest Einstellungen ändern zu können.) Wenn du Fragen oder Hinweise zum Format der Digests hast, sende diese bitte an den ' . $board_config['board_email'] . '.';
$lang['digest_forum'] = 'Forum: ';
$lang['digest_topic'] = 'Thema: ';
$lang['digest_link'] = 'Link';
$lang['digest_post_time'] = 'Beitragszeit'; 
$lang['digest_author'] = 'Autor';
$lang['digest_message_excerpt'] = 'Mitteilungs Auszug';
$lang['digest_posted_by'] = 'Erstellt von ';
$lang['digest_posted_at'] = ' um ';
$lang['digest_forums_message_digest'] = 'Foren Mitteilungs Digest'; // used in <head> tag
$lang['digest_salutation'] = 'Lieber ';
$lang['digest_your_digest_options'] = 'Deine Digest Optionen:';
$lang['digest_format'] = 'Format:';
$lang['digest_show_message_text'] = 'Zeige Mitteilungs Text:';
$lang['digest_show_my_messages'] = 'Zeige meine Mitteilungen:';
$lang['digest_frequency'] = 'Digest Frequenz:';
$lang['digest_show_only_new_messages'] = 'Zeige nur neue Mitteilungen seit dem letzten Login:';
$lang['digest_send_if_no_new_messages'] = 'Sende Digest wenn keine neuen Mitteilungen:';
$lang['digest_period_24_hrs'] = '24 Stunden';
$lang['digest_period_1_week'] = '1 Woche';
$lang['digest_no_new_messages'] = 'Es gibt keine neuen Mitteilungen für das Forum was du ausgewählt hast.';
$lang['digest_message_size'] = 'Maximale Buchstaben pro Mitteilung in den Digests:';
$lang['digest_summary'] = 'Digest Zusammenfassung';
$lang['digest_a_total_of'] = 'Eine Gesamtmenge von';
$lang['digest_were_emailed'] = 'Digests wurden gemailt';
$lang['digest_server_date'] = 'Server Datum:';
$lang['digest_server_hour'] = 'Server Stunde:';
$lang['digest_server_time_zone'] = 'Server Zeit Zone:';
$lang['digest_or'] = 'oder';
$lang['digest_a_digest_containing'] = 'Ein Digest enthält';
$lang['digest_posts_was_sent_to'] = 'Beiträge wurden gesendet zu';

// This block goes on the digest settings user interface page (digests.php)
$lang['digest_page_title'] = 'Digests';
$lang['digest_explanation'] = 'Digests sind eine E-Mail Zusammenfassung von hier geschriebenen Mitteilungen und werden periodisch an dich gesendet. Digests können täglich oder wöchentlich zu einer von dir bestimmten Zeit gesendet werden. Du kannst jene bestimmten Foren spezifizieren, für die du Mitteilungs Zusammenfassungen wünschst, oder du kannst alle Foren auswählen für die du Zugriff hast.<br /><br />' . "\r\n" . 'In Übereinstimmung mit unseren Datenschutzbestimmungen enhalten unsere Digests keinen Spam, desweiteren wird deine E-Mail für keine Werbung verwendet. Du kannst selbstverständlichn deine Digest Abonnierung jederzeit wieder rückgängig machen, indem du wieder zu dieser Seite zurückkommst. Die meisten Benutzer finden die Digests jedoch sehr nützlich. Wir legen dir nahe es doch mal auszuprobieren!' . "\r\n";
$lang['digest_wanted'] = '<b>Art der gewünschten Digests:</b><br />(Wöchentliche Digests werden Sonntags gesendet)';
$lang['digest_none'] = 'Keine (austragen)';
$lang['digest_daily'] = 'Täglich';
$lang['digest_weekly'] = 'Wöchentlich';
$lang['digest_format_short'] = 'Format der Digests:';
$lang['digest_format'] = '<b>Digest Format:</b><br />(HTML ist sehr empfohlen, es sei denn dein E-Mail Programm kann kein HTML darstellen)';
$lang['digest_html'] = 'HTML';
$lang['digest_text'] = 'Text';
$lang['digest_excerpt'] = '<b>Anzeige der Mitteilungs Excerpt:</b>';
$lang['digest_yes'] = 'Ja';
$lang['digest_no'] = 'Nein';
$lang['digest_l_show_my_messages'] = '<b>Zeige meine Mitteilungen in den Digests:</b>';
$lang['digest_l_show_new_only'] = '<b>Zeige nur neue Mitteilungen:</b><br />(Dies filtert die Mitteilungen vor deinem letzten Besuch aus.)';
$lang['digest_send_if_no_msgs'] = '<b>Sende ein Digest wenn keine neuen Mitteilungen geschrieben wurden:</b>';
$lang['digest_hour_to_send'] = '<b>Zeit des Tages zum Senden der Digests:</b><br />(Dies ist die Zeit basierend auf der Zeitzonen Einstellung in deinem Profil. Wenn du die Zeitzone in deinem Profil geändert hast, und du möchtest das die Digests am gleichen Tag ankommen sollen, solltest du diesen Wert hier auch ändern.)';
$lang['digest_hour_to_send_short'] = 'Digests Sendezeit (basierend auf der Zeitzone in deinem Profil):';
$lang['digest_midnight'] = 'Mitternacht';
$lang['digest_1am'] = '01 Uhr';
$lang['digest_2am'] = '02 Uhr';
$lang['digest_3am'] = '03 Uhr';
$lang['digest_4am'] = '04 Uhr';
$lang['digest_5am'] = '05 Uhr';
$lang['digest_6am'] = '06 Uhr';
$lang['digest_7am'] = '07 Uhr';
$lang['digest_8am'] = '08 Uhr';
$lang['digest_9am'] = '09 Uhr';
$lang['digest_10am'] = '10 Uhr';
$lang['digest_11am'] = '11 Uhr';
$lang['digest_12pm'] = '12 Uhr';
$lang['digest_1pm'] = '13 Uhr';
$lang['digest_2pm'] = '14 Uhr';
$lang['digest_3pm'] = '15 Uhr';
$lang['digest_4pm'] = '16 Uhr';
$lang['digest_5pm'] = '17 Uhr';
$lang['digest_6pm'] = '18 Uhr';
$lang['digest_7pm'] = '19 Uhr';
$lang['digest_8pm'] = '20 Uhr';
$lang['digest_9pm'] = '21 Uhr';
$lang['digest_10pm'] = '22 Uhr';
$lang['digest_11pm'] = '23 Uhr';
$lang['digest_select_forums'] = '<b>Sende Digests für diese Foren:</b>';
$lang['digest_create'] = 'Deine Digest Einstellungen wurden erfolgreich erstellt';
$lang['digest_modify'] = 'Deine Digest Einstellungen wurden erfolgreich aktualisiert';
$lang['digest_unsubscribe'] = 'Du wurdest ausgetragen und erhälst nun keine Digests mehr';
$lang['digest_no_forums_selected'] = 'Du hast kein Forum ausgewählt, du wirst nun ausgetragen';
$lang['digest_all_forums'] = 'Alle abonnierten Foren';
$lang['digest_submit_text'] = 'Mache Digest Änderungen';
$lang['digest_reset_text'] = 'Zurücksetzen';
$lang['digest_size'] = '<b>Maximale Buchstaben die pro Mitteilung angezeigt werden:</b><br />(Achtung: wenn dieser Wert zu hoch gesetzt wird, können dadurch sehr lange Digests entstehen.)';
$lang['digest_size_50'] = '50';
$lang['digest_size_100'] = '100';
$lang['digest_size_150'] = '150';
$lang['digest_size_300'] = '300';
$lang['digest_size_600'] = '600';
$lang['digest_size_max'] = 'Maximum (32000)';
$lang['digest_version_text'] = 'Version';

?>