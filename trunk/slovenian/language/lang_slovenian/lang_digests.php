<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_digests.php 86 2010-01-30 16:44:23Z TheSteffen $
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
	'digest_introduction' => 'Kot ste zahtevali, tukaj je zadnji izvlecek sporocil, na ' . $board_config['sitename'] . ' forumu. Prosim, pridite in se pridružite razpravi!',
	'digest_from_text_name' => $board_config['sitename'] . ' robot izvleckov',
	'digest_from_email_address' => $board_config['board_email'],
	'digest_subject_line' => $board_config['sitename'] . ' izvlecki',
	'digest_disclaimer_html' => "\n" . 'ta izvlecek je bil poslan registreranemu uporabniku  <a href="' . DIGEST_SITE_URL . '">' . $board_config['sitename'] . '</a> forumu in samo zato, ker ste to izrecno zahtevali. ' . $board_config['sitename'] . ' je popolnoma brez reklam. Vaš e-poštni naslov ni nikoli razkrit tretjim osebam. poglejte našo <a href="' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">FAQ</a> Za vec informacij o naši politiki zasebnosti. Lahko spremenite ali izbrišete narocnino s prijavo v  ' . $board_config['sitename'] . ' iz  <a href="' . DIGEST_SITE_URL . 'digests.' . PHP_EXT . '">starni izvleckov</a>. (You must be logged in to change your digest settings.) ce imate vprašanja ali povratne informacije o obliki tega povzetek prosim pošljite na <a href="mailto:' . $board_config['board_email'] . '">' . $board_config['sitename'] . ' skrbnik spletišca</a>.',
	'digest_disclaimer_text' => "\n" . 'ta izvlecek je bil poslan registreranemu uporabniku ' . $board_config['sitename'] . ' forumu in samo zato, ker ste to izrecno zahtevali. ' . $board_config['sitename'] . ' je popolnoma brez reklam. Vaš e-poštni naslov ni nikoli razkrit tretjim osebam. Oglejte si odgovore na pogosta vprašanja za vec informacij o naši politiki zasebnosti. Lahko spremenite ali izbrišete narocnino s prijavo v ' . $board_config['sitename'] . ' Digest stran. (You must be logged in to change your digest settings.) ce imate vprašanja ali povratne informacije o obliki tega povzetek prosim pošljite na ' . $board_config['board_email'] . '.',
	'digest_forum' => 'Forum: ',
	'digest_topic' => 'Tema: ',
	'digest_link' => 'Povezava',
	'digest_post_time' => 'cas objavljanja',
	'digest_author' => 'Avtor',
	'digest_message_excerpt' => 'strokovnjak sporocil',
	'digest_posted_by' => 'Objavil ',
	'digest_posted_at' => ' na',
	'digest_forums_message_digest' => 'Forum sporocil Digest', // uporabljenih v <head> oznakah
	'digest_salutation' => 'Dragi ',
	'digest_your_digest_options' => 'možnosti digesta:',
	'digest_format' => 'Format:',
	'digest_show_message_text' => 'pokaži besedilo sporocila:',
	'digest_show_my_messages' => 'pokaži moja sporocila:',
	'digest_frequency' => 'Digest Frekvence:',
	'digest_show_only_new_messages' => 'Prikaži samo nova sporocila od zadnjega prijavljenega obiska:',
	'digest_send_if_no_new_messages' => 'pošlji izvlecek ce ni novih sporocil:',
	'digest_period_24_hrs' => '24 ur',
	'digest_period_1_week' => '1 teden',
	'digest_no_new_messages' => 'Ni novih sporocil za forume ki ste jih izbrali.',
	'digest_message_size' => 'Najvec znakov na sporocilo na povzetek:',
	'digest_summary' => 'izvleceni povzetki',
	'digest_a_total_of' => 'skupaj',
	'digest_were_emailed' => 'izvlecek je bil posland.',
	'digest_server_date' => 'datum serverja:',
	'digest_server_hour' => 'ura serverja:',
	'digest_server_time_zone' => 'casovni pas serverja:',
	'digest_or' => 'ali',
	'digest_a_digest_containing' => 'vsebuvan izvlecek',
	'digest_posts_was_sent_to' => 'objave so bile poslane',

// This block goes on the digest settings user interface page (digests.php)
	'digest_page_title' => 'izvlecki',
	'digest_explanation' => 'Vzorci so povzetki email sporocil, ki so tukaj, da so vam poslani redno. Vzorce se lahko pošlje vsak dan ali vsak teden na katerokoli uro dneva, ki jo izberete. Dolocite lahko  posebne forume, za katere želite povzetke sporocil, ali pa se odlocite za prejemanje vseh sporocil za vse forume, za katere imate dovoljen dostop.<br /><br />' . "\n" . 'V skladu z našo politiko zasebnosti vzorci ne vsebujejo "smetenja", ali da je vaš e-poštni naslov povezan na kakršen koli nacin za oglase. Lahko, seveda, preklicete narocnino izvlecka kadar koli preprosto vrnete se na to strani. vecina uporabnikov so našli vzorce za zelo koristne. Priporocamo vam, da ga poskusite!' . "\n",
	'digest_wanted' => '<b>Tip željenega vzorca:</b><br />(Weekly digests are sent on Sunday)',
	'digest_none' => 'Nobeden (Unsubscribe)',
	'digest_daily' => 'Dnevno',
	'digest_weekly' => 'tedensko',
	'digest_format_short' => 'oblika izvlecka:',
	'digest_format' => '<b> Format izvlecka:</b><br />(HTML is highly recommended unless your email program cannot display HTML)',
	'digest_html' => 'HTML',
	'digest_text' => 'besedilo',
	'digest_excerpt' => '<b>prikaži strokovnjaka za sporocila:</b>',
	'digest_yes' => 'DA',
	'digest_no' => 'Ne',
	'digest_l_show_my_messages' => '<b>Prikaži povzetek mojih sporocil:</b>',
	'digest_l_show_new_only' => '<b>pokaži samo nova sporocila:</b><br />(This will filter out any messages posted prior to the date and time you last visited that would otherwise be included in the digest.)',
	'digest_send_if_no_msgs' => '<b>Pošlji izvleck, ce ni bilo objavljenih nobenih novih sporocil:</b>',
	'digest_hour_to_send' => '<b>cas dneva za pošiljanje izvlecka:</b><br />(This is the time based on the time zone you set in your profile. If you change your profile time zone and you want digests to arrive at the same time of day then change this value too.)',
	'digest_hour_to_send_short' => 'cas poslanega izvlecka (based on time zone in your profile):',
	'digest_midnight' => 'polnoc',
	'digest_1am' => '1 zjutraj',
	'digest_2am' => '2 zjutraj',
	'digest_3am' => '3 zjutraj',
	'digest_4am' => '4 zjutraj',
	'digest_5am' => '5 zjutraj',
	'digest_6am' => '6 zjutraj',
	'digest_7am' => '7 zjutraj',
	'digest_8am' => '8 zjutraj',
	'digest_9am' => '9 zjutraj',
	'digest_10am' => '10 zjutraj',
	'digest_11am' => '11 zjutraj',
	'digest_12pm' => 'opoldne',
	'digest_1pm' => '1 Popoldne',
	'digest_2pm' => '2 Popoldne',
	'digest_3pm' => '3 Popoldne',
	'digest_4pm' => '4 Popoldne',
	'digest_5pm' => '5 Popoldne',
	'digest_6pm' => '6 Popoldne',
	'digest_7pm' => '7 Popoldne',
	'digest_8pm' => '8 Popoldne',
	'digest_9pm' => '9 Popoldne',
	'digest_10pm' => '10 Popoldne',
	'digest_11pm' => '11 Popoldne',
	'digest_click_return' => 'klikni %stukaj%s za vrnitev v nastavitve vzorcev', // %s's Tu so za URI, ne odstranjujte!
	'digest_select_forums' => '<b>Pošlji vzorci tem forumom:</b>',
	'digest_create' => 'Vaše nastavitve izvlecka so bila uspešno ustvarjena',
	'digest_modify' => 'Vaše nastavitve izvlecka so bila uspešno posodobljena',
	'digest_unsubscribe' => 'Odjavljeni ste bili in ne boste vec prejemali izvleckov',
	'digest_no_forums_selected' => 'Niste izbrali nobenega foruma, zato boste odjavljeni',
	'digest_all_forums' => 'vsi naroceni forumi',
	'digest_submit_text' => 'naredite spremembe izvleckom',
	'digest_reset_text' => 'ponastavi',
	'digest_size' => '<b>Najvec znakov za prikaz na sporocila:</b><br />(Caution: setting this too high may make for very long digests. A link is provided for each message that will let you see the full content of the message.)',
	'digest_size_50' => '50',
	'digest_size_100' => '100',
	'digest_size_150' => '150',
	'digest_size_300' => '300',
	'digest_size_600' => '600',
	'digest_size_max' => 'Najvec (32000)',
	'digest_version_text' => 'Verzija',

	)
);

?>