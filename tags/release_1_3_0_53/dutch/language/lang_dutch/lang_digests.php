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
	'digest_introduction' => 'Zoals je opgevraagd hebt, hier de laatste digest van de berichten geplaatst op ' . $board_config['sitename'] . '. Kom en neem deel aan de discussies.',
	'digest_from_text_name' => $board_config['sitename'] . ' Digestrobot',
	'digest_from_email_address' => $board_config['board_email'],
	'digest_subject_line' => $board_config['sitename'] . ' Digests',
	'digest_disclaimer_html' => "\r\n" . 'Deze digest is verzonden naar de geregistreerde gebruikers van <a href="' . DIGEST_SITE_URL . '">' . $board_config['sitename'] . '</a> en alleen omdat ze daar explicit om vragen en aangegeven hebben. ' . $board_config['sitename'] . ' is compleet reclamevrij. Jouw e-mailadres wordt niet verspreid of doorgegeven aan derden. Zie daarvoor onze <a href="' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">FAQ</a> voor meer informatie over je privacy. Je kan je aanmelding verwijderen of bewerken door in te loggen op ' . $board_config['sitename'] . ' op de <a href="' . DIGEST_SITE_URL . 'digests.' . PHP_EXT . '">Digestpagina</a>. (Je moet ingelogd zijn om je digestinstellingen te kunnen veranderen). Als je vragen hebt of opmerkingen over het formaat van deze digest, verstuur dan een e-mail naar de <a href="mailto:' . $board_config['board_email'] . '">' . $board_config['sitename'] . ' Webmaster</a>.',
	'digest_disclaimer_text' => "\r\n" . 'Deze digest is verzonden naar de geregistreerde gebruikers van ' . $board_config['sitename'] . ' en alleen omdat ze daar explicit om vragen en aangegeven hebben. ' . $board_config['sitename'] . ' is compleet reclamevrij. Jouw e-mailadres wordt niet verspreid of doorgegeven aan derden. Zie daarvoor onze FAQ voor meer informatie over je privacy. Je kan je aanmelding verwijderen of bewerken door in te loggen op ' . $board_config['sitename'] . ' op de Digestpagina. (Je moet ingelogd zijn om je digestinstellingen te kunnen veranderen). Als je vragen hebt of opmerkingen over het formaat van deze digest, verstuur dan een e-mail naar de ' . $board_config['board_email'] . '.',
	'digest_forum' => 'Forum: ',
	'digest_topic' => 'Onderwerp: ',
	'digest_link' => 'Link',
	'digest_post_time' => 'Berichttijd', 
	'digest_author' => 'Auteur',
	'digest_message_excerpt' => 'Berichtinhoud',
	'digest_posted_by' => 'Geplaatst door ',
	'digest_posted_at' => ' door ',
	'digest_forums_message_digest' => 'Forumbericht Digest', // used in <head> tag
	'digest_salutation' => 'Hallo ',
	'digest_your_digest_options' => 'Jouw digestopties:',
	'digest_format' => 'Formaat:',
	'digest_show_message_text' => 'Geef berichttekst weer:',
	'digest_show_my_messages' => 'Geef mijn eigen berichten weer:',
	'digest_frequency' => 'Digestfrequentie:',
	'digest_show_only_new_messages' => 'Geef alleen nieuwe berichten sinds mijn laatste bezoek weer:',
	'digest_send_if_no_new_messages' => 'Verstuur digest als er geen nieuwe berichten zijn:',
	'digest_period_24_hrs' => '24 uren',
	'digest_period_1_week' => '1 week',
	'digest_no_new_messages' => 'Er zijn geen nieuwe berichten voor de forums de geselecteerd hebt.',
	'digest_message_size' => 'Maximum tekens per bericht in digest:',
	'digest_summary' => 'Digestsamenvatting',
	'digest_a_total_of' => 'Een totaal van',
	'digest_were_emailed' => 'digests zijn er verstuurd',
	'digest_server_date' => 'Serverdatum:',
	'digest_server_hour' => 'Servertijd:',
	'digest_server_time_zone' => 'Servertijdzone:',
	'digest_or' => 'of',
	'digest_a_digest_containing' => 'Een digest bevat',
	'digest_posts_was_sent_to' => 'berichten dat verstuurd zijn naar',

// This block goes on the digest settings user interface page (digests.php)
	'digest_page_title' => 'Digests',
	'digest_explanation' => 'Digests zijn e-mailsamenvattingen van berichten die geplaatst zijn en worden periodiek aan je verzonden. Digests kunnen dagelijks of wekelijks, op een uur van de dag afhankelijk wat je geselecteerd hebt verzonden worden. Je kan forums specificeren van welke je bericht samenvattingen krijgt, of je kan selecteren dat je alle berichten in samenvatting wilt ontvangen waar je toegang voor hebt.<br /><br />' . "\r\n" . 'Samenhangend met onze privacybeleid; digests bevatten geen "spam", en je e-mailadres is niet gekoppeld op geen enkele manier aan een advertentie. Je kan, vanzelfsprekend, de digestinschrijving annuleren op elk moment via deze pagina. De meeste gebruikers vinden digests erg handig en makkelijk. Wij moedigen je aan om het een keer te proberen!' . "\r\n",
	'digest_wanted' => '<b>Digesttype:</b><br />(Wekelijkse digests worden op zondag verstuurd)',
	'digest_none' => 'Geen (uitschrijven)',
	'digest_daily' => 'Dagelijks',
	'digest_weekly' => 'Wekelijks',
	'digest_format_short' => 'Formaat van de digest:',
	'digest_format' => '<b>Digestformaat:</b><br />(HTML is aanbevolen behalve als je e-mailprogramma er niet mee overweg kan)',
	'digest_html' => 'HTML',
	'digest_text' => 'Tekst',
	'digest_excerpt' => '<b>Inhoud van het bericht weergeven:</b>',
	'digest_yes' => 'Ja',
	'digest_no' => 'Nee',
	'digest_l_show_my_messages' => '<b>Mijn eigen berichten in de digest weergeven:</b>',
	'digest_l_show_new_only' => '<b>Alleen nieuwe berichten weergeven:</b><br />(Deze optie filtert elk bericht die is geplaatst voor de tijd dat je het forum nog bezocht hebt. Anders worden ze ook meegenomen met de digest.)',
	'digest_send_if_no_msgs' => '<b>Verstuur een digest als er geen nieuwe berichten zijn geplaatst:</b>',
	'digest_hour_to_send' => '<b>Tijd van de dag wanneer de digest verstuurd wordt:</b><br />(Dit is de tijd gebaseerd op de tijdzone in je profiel. Als je de tijdzone veranderd en je wilt de digests verstuurd hebben op dezelfde tijd als ervoor, dan moet je deze waarde ook veranderen.)',
	'digest_hour_to_send_short' => 'Tijd dat de digest verstuurd wordt (gebaseerd op je tijdzone in je profiel):',
	'digest_midnight' => 'Middennacht',
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
	'digest_click_return' => 'Klik %shier%s om naar de digestsinstellingen terug te keren', // %s's here are for uris, do not remove!
	'digest_select_forums' => '<b>Verstuur digests voor deze forums:</b>',
	'digest_create' => 'Jouw digestinstellingen zijn succesvol aangemaakt',
	'digest_modify' => 'Jouw digestinstellingen zijn succesvol bijgewerkt',
	'digest_unsubscribe' => 'Je hebt jezelf uitgeschreven en je krijgt niet langer meer een digest',
	'digest_no_forums_selected' => 'Je hebt geen forum geselecteerd, dus je wordt niet ingeschreven',
	'digest_all_forums' => 'Alle ingeschreven forums',
	'digest_submit_text' => 'Maak digestsveranderingen',
	'digest_reset_text' => 'Reset',
	'digest_size' => '<b>Maximum aantal tekens per bericht:</b><br />(Waarschuwing: stel je dit te hoog in dan krijg je lange digests. Er wordt een link toegevoegd bij elk bericht om het volledig te kunnen lezen.)',
	'digest_size_50' => '50',
	'digest_size_100' => '100',
	'digest_size_150' => '150',
	'digest_size_300' => '300',
	'digest_size_600' => '600',
	'digest_size_max' => 'Maximum (32000)',
	'digest_version_text' => 'Versie',
	)
);

?>