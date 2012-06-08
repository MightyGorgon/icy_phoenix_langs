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
	'digest_introduction' => 'Kérésedre elküldtük a(z) ' . $config['sitename'] . ' fóruma legfrissebb hozzászólásainak aktuális kivonatát. Gyere és csatlakozz csevegésünkhöz!',
	'digest_from_text_name' => $config['sitename'] . ' Kivonatoló robot',
	'digest_from_email_address' => $config['board_email'],
	'digest_subject_line' => $config['sitename'] . ' kivonata',
	'digest_disclaimer_html' => "\n" . 'Ezt az üzenetet <a href="' . DIGEST_SITE_URL . '">' . $config['sitename'] . '</a> oldalára regisztrált felhasználónak küldtük a saját és személyes kérésére. A ' . $config['sitename'] . ' oldalon vigyázunk arra, hogy az email címed, és más személyes adatod, harmadik személy részére ne legyen hozzáférhető, és ezen információk ne jussanak tudomására. Lásd a <a href="' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">GYIK</a>-ot további információért és a személyes adataid védelméről szóló nyilatkozatunkért. Megváltoztathatod vagy törölheted ezen levélre történő feliratkozásod, amennyiben bejelentkezel a ' . $config['sitename'] . ' oldalra, és elmész a <a href="' . DIGEST_SITE_URL . 'digests.' . PHP_EXT . '">Kivonat lapjára</a>. (Muszáj bejelentkezned, hogy hozzáférj a beállításaidhoz.) Ha bármilyen kérdésed vagy visszajelzésed lenne a kivonatokkal kapcsolatban, küldj egy levelet a <a href="mailto:' . $config['board_email'] . '">' . $config['sitename'] . ' Webmesternek</a>.',
	'digest_disclaimer_text' => "\n" . 'Ezt az üzenetet ' . $config['sitename'] . '  fórumra regisztrált felhasználónak küldtük a saját és személyes kérésére. A ' . $config['sitename'] . ' teljesen üzletmentes. Az email címed nem adjuk át harmadik személy részére. Lásd a GYIK-ot további információért és a személyes adataid védelméről szóló nyilatkozatunkért. Megváltoztathatod vagy törölheted ezen levélre történő feliratkozásod, amennyiben bejelentkezel a ' . $config['sitename'] . ' oldalra, és elmész a Kivonat lapjára (Muszáj bejelentkezned, hogy hozzáférj a beállításaidhoz.) Ha bármilyen kérdésed vagy visszajelzésed lenne a kivonatokkal kapcsolatban, küldj egy levelet a ' . $config['board_email'] . ' email címre .',
	'digest_forum' => 'Fórum: ',
	'digest_topic' => 'Téma: ',
	'digest_link' => 'Link',
	'digest_post_time' => 'Hozzászólás ideje',
	'digest_author' => 'Szerző',
	'digest_message_excerpt' => 'Üzenet kivonata',
	'digest_posted_by' => 'Beküldte ',
	'digest_posted_at' => ' ekkor: ',
	'digest_forums_message_digest' => 'Fórumkivonat', // used in <head> tag
	'digest_salutation' => 'Kedves ',
	'digest_your_digest_options' => 'A kivonatod beállításai:',
	'digest_format' => 'Formátum:',
	'digest_show_message_text' => 'Üzenet szövegének mutatása:',
	'digest_show_my_messages' => 'Üzeneteim mutatása:',
	'digest_frequency' => 'Kivonatok gyakorisága:',
	'digest_show_only_new_messages' => 'Csak azon üzenetek mutatása, amelyek a legutóbbi bejelentkezés után küldtek be:',
	'digest_send_if_no_new_messages' => 'Kivonat küldése, ha nincs új üzenet:',
	'digest_period_24_hrs' => '24 óra',
	'digest_period_1_week' => '1 hét',
	'digest_no_new_messages' => 'Nincs új üzenet a kijelölt fórumban.',
	'digest_message_size' => 'Az üzenetek maximális karakterhossza a kivonatokban:',
	'digest_summary' => 'Kivonat összegzése',
	'digest_a_total_of' => 'Összesen',
	'digest_were_emailed' => 'kivonat elküldve emailben.',
	'digest_server_date' => 'Szerver dátuma:',
	'digest_server_hour' => 'Szerver ideje:',
	'digest_server_time_zone' => 'Szerver időzóna:',
	'digest_or' => 'vagy',
	'digest_a_digest_containing' => 'A kivonat összesen',
	'digest_posts_was_sent_to' => 'üzenetet tartalmaz. Elküldve:',

// This block goes on the digest settings user interface page (digests.php)
	'digest_page_title' => 'Kivonatok',
	'digest_explanation' => 'A kivonat egy olyan email üzenet, ami a beküldött hozzászólásokról tartalmaz egy összesítőt. A kivonatot kérheted napi, heti rendszerességgel vagy egy általad kiválasztott órában. Meghatározhatod azt is, hogy mely fórumokról szeretnél üzenetösszesítőt kapni, de természetesen az összes fórum összes üzenetéről is kérhetsz kivonatot (persze csak akkor, ha jogod van azokat el is olvasni).<br /><br />A személyes adataid védelméről szóló állásfoglalásunkkal összhangban a kivonat nem "spam", és az email címedet nem használjuk fel semmilyen reklámhoz köthető célokra. Amennyiben szeretnél a kivonatokról leiratkozni, csak vissza kell ide jönnöd. A legtöbb felhasználó hasznosnak találta a kivonatokat. Javasoljuk tegyél egy próbát!' . "\n",
	'digest_wanted' => '<b>Type of Digest Wanted:</b><br />(Weekly digests are sent on Sunday)',
	'digest_none' => 'Nincs (leiratkozás)',
	'digest_daily' => 'Napi',
	'digest_weekly' => 'Heti',
	'digest_format_short' => 'Kivonat formátuma:',
	'digest_format' => '<b>Kivonat formátuma:</b><br />(HTML ajánlott, kivéve ha az email szolgáltatód nem támogatja a HTML megjelenítést)',
	'digest_html' => 'HTML',
	'digest_text' => 'Szöveges',
	'digest_excerpt' => '<b>Üzenetek kivonatának megjelenítése:</b>',
	'digest_yes' => 'Igen',
	'digest_no' => 'Nem',
	'digest_l_show_my_messages' => '<b>Saját üzeneteim megjelenítése a kivonatban:</b>',
	'digest_l_show_new_only' => '<b>Csak az új üzenetek mutatása:</b><br />(Ez a szűrő leszűkíti a megjelenítendő üzeneteket a legutolsó látogatásod után keletkezett üzenetekre. A régebbi hozzászólásokat nem fogja a kivonat tartalmazni.)',
	'digest_send_if_no_msgs' => '<b>Kivonat küldése, ha nincs új üzenet beküldve:</b>',
	'digest_hour_to_send' => '<b>A kivonat küldésének az ideje:</b><br />(Ez az idő függ a profilodban beállított időzónától. Ha megváltoztatod a profilodban az időzónát, akkor a kivonat kézbesítési ideje is annak megfelelően fog változni.)',
	'digest_hour_to_send_short' => 'Kivonat küldésének ideje (a profilodban beállított időzóna alapján):',
	'digest_midnight' => 'Éjfél',
	'digest_1am' => '1 de.',
	'digest_2am' => '2 de.',
	'digest_3am' => '3 de.',
	'digest_4am' => '4 de.',
	'digest_5am' => '5 de.',
	'digest_6am' => '6 de.',
	'digest_7am' => '7 de.',
	'digest_8am' => '8 de.',
	'digest_9am' => '9 de.',
	'digest_10am' => '10 de.',
	'digest_11am' => '11 de.',
	'digest_12pm' => '12 de.',
	'digest_1pm' => '1 du.',
	'digest_2pm' => '2 du.',
	'digest_3pm' => '3 du.',
	'digest_4pm' => '4 du.',
	'digest_5pm' => '5 du.',
	'digest_6pm' => '6 du.',
	'digest_7pm' => '7 du.',
	'digest_8pm' => '8 du.',
	'digest_9pm' => '9 du.',
	'digest_10pm' => '10 du.',
	'digest_11pm' => '11 du.',
	'digest_click_return' => 'Kattints %side%s, hogy visszatérj a Kivonat beállításokhoz', // %s's here are for uris, do not remove!
	'digest_select_forums' => '<b>Kivonat küldése ezen fórumokból:</b>',
	'digest_create' => 'Kivonatod beállításai sikeresen létrehozva',
	'digest_modify' => 'Kivonatod beállításai sikeresen frissítve',
	'digest_unsubscribe' => 'Sikeresen leiratkoztál, többé nem kapsz kivonatot',
	'digest_no_forums_selected' => 'Nem választottál ki fórumot, ezért leiratkozásra kerülsz',
	'digest_all_forums' => 'Összes feliratkozott fórum',
	'digest_submit_text' => 'Kivonatbeállítások megváltoztatása',
	'digest_reset_text' => 'Visszaállít',
	'digest_size' => '<b>Üzenetenkénti maximális karakterszám:</b><br />(Figyelem: ez a beállítás levágja a túl hosszú üzenetek végét a kivonatban. Egy link fog az üzenet végén szerepelni, amely a teljes üzenet tartalmát megmutató weboldalra vezet.)',
	'digest_size_50' => '50',
	'digest_size_100' => '100',
	'digest_size_150' => '150',
	'digest_size_300' => '300',
	'digest_size_600' => '600',
	'digest_size_max' => 'Maximum (32000)',
	'digest_version_text' => 'Verzió',
	)
);

?>