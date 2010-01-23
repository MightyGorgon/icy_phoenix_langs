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
  'digest_introduction' => 'Kérésedre elküldtük a ' . $board_config['sitename'] . ' fórum legfrissebb hozzászólásainak aktuális kivonatát. Kérünk gyere és csatlakozz a beszélgetésünkhöz!',
  'digest_from_text_name' => '' . $board_config['sitename'] . ' Kivonatoló Robot',
  'digest_from_email_address' => '' . $board_config['board_email'] . '',
  'digest_subject_line' => '' . $board_config['sitename'] . ' kivonata',
  'digest_disclaimer_html' => '\n'. 'Ezt az üzenetet a <a href="' . DIGEST_SITE_URL . '">' . $board_config['sitename'] . '</a> fórumra regisztrált felhasználónak küldtük a saját és személyes kérésére. A ' . $board_config['sitename'] . ' oldalon vigyázunk arra, hogy az email címed, és más személyes adatod, harmadik személy részére ne legyen hozzáférhetõ, és ezen információk ne jussanak tudomására. Lásd a <a href="' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">GYIK</a>-ot további információért és a személyes adataid védelmérõl szóló nyilatkozatunkért. Megváltoztathatod vagy törölheted ezen levélre történõ feliratkozásod, amennyiben bejelentkezel a ' . $board_config['sitename'] . ' oldalra, és elmész a <a href="' . DIGEST_SITE_URL . 'digests.' . PHP_EXT . '">Kivonat lapjára</a>. (Muszáj bejelentkezned, hogy hozzáférj a beállításaidhoz.) Ha bármilyen kérdésed vagy visszajelzésed lenne a kivonatokkal kapcsolatban, akkor kérjük küldj egy levelet a <a href="mailto:' . $board_config['board_email'] . '">' . $board_config['sitename'] . ' Webmesternek</a>.',
  'digest_disclaimer_text' => '\n' . 'Ezt az üzenetet a ' . $board_config['sitename'] . ' fórumra regisztrált felhasználónak küldtük a saját és személyes kérésére. A ' . $board_config['sitename'] . ' teljesen üzletmentes. Az email címed nem adjuk át harmadik személy részére. Lásd a GYIK-ot további információért és a személyes adataid védelmérõl szóló nyilatkozatunkért. Megváltoztathatod vagy törölheted ezen levélre történõ feliratkozásod, amennyiben bejelentkezel a ' . $board_config['sitename'] . ' oldalra, és elmész a Kivonat lapjára (Muszáj bejelentkezned, hogy hozzáférj a beállításaidhoz.) Ha bármilyen kérdésed vagy visszajelzésed lenne a kivonatokkal kapcsolatban, akkor kérjük küldj egy levelet a ' . $board_config['board_email'] . ' email címre.',
  'digest_forum' => 'Fórum: ',
  'digest_topic' => 'Téma: ',
  'digest_link' => 'Link:',
  'digest_post_time' => 'Beküldés ideje:',
  'digest_author' => 'Szerzõ',
  'digest_message_excerpt' => 'Üzenet kivonata',
  'digest_posted_by' => 'Beküldte ',
  'digest_posted_at' => ' at ',
  'digest_forums_message_digest' => 'Fórumkivonat', // used in <head> tag
  'digest_salutation' => 'Kedves ',
  'digest_your_digest_options' => 'A kivonatod beállításai:',
  'digest_format' => '<b>Kivonat formátuma:</b><br />(A HTML formátum nem ajánlott, ha az email kliensed nem tudja megjeleníteni a HTML-t)',
  'digest_show_message_text' => 'Üzenet szövegének mutatása:',
  'digest_show_my_messages' => 'Üzeneteim mutatása:',
  'digest_frequency' => 'Kivonatok gyakorisága:',
  'digest_show_only_new_messages' => 'Csak azon üzenetek mutatása, amelyek a legutóbbi bejelentkezés után küldtek be:',
  'digest_send_if_no_new_messages' => 'Kivonat küldése, ha nincs új üzenet:',
  'digest_period_24_hrs' => '24 óra',
  'digest_period_1_week' => '1 hét',
  'digest_no_new_messages' => 'Nincs új üzenet a kijelölt fórumokban.',
  'digest_message_size' => 'Az üzenetek maximális karakterhossza a kivonatokban:',
  'digest_summary' => 'Kivonat összegzése',
  'digest_a_total_of' => 'Összesen',
  'digest_were_emailed' => 'kivonat emailben elküldve.',
  'digest_server_date' => 'Kiszolgáló dátuma:',
  'digest_server_hour' => 'Kiszolgáló ideje:',
  'digest_server_time_zone' => 'Kiszolgáló idõzónája:',
  'digest_or' => 'vagy',
  'digest_a_digest_containing' => 'A kivonat összesen',
  'digest_posts_was_sent_to' => 'üzenetet tartalmaz. Elküldve: ',

// This block goes on the digest settings user interface page (digests.php)
  'digest_page_title' => 'Kivonatok',
  'digest_explanation' => 'A kivonat egy olyan email üzenet, ami a beküldött hozzászólásokról tartalmaz egy összesítõt. A kivonatot kérheted napi, heti rendszerességgel vagy egy általad kiválasztott órában. Meghatározhatod azt is, hogy mely fórumokról szeretnél üzenetösszesítõt kapni, de természetesen az összes fórum összes üzenetérõl is kérhetsz kivonatot (persze csak akkor, ha jogod van azokat el is olvasni).<br /><br />A személyes adataid védelmérõl szóló állásfoglalásunkkal összhangban a kivonat nem "spam", és az email címedet nem használjuk fel semmilyen reklámhoz köthetõ célokra. Amennyiben szeretnél a kivonatokról leiratkozni, csak vissza kell ide jönnöd. A legtöbb felhasználó hasznosnak találta a kivonatokat. Javasoljuk tegyél egy próbát!',
  'digest_wanted' => '<b>Kivonat kézbesítésének típusa:</b><br />(A heti kivonatot vasárnap küldjük ki)',
  'digest_none' => 'Nincs (Leiratkozás)',
  'digest_daily' => 'Napi',
  'digest_weekly' => 'Heti',
  'digest_format_short' => 'Kivonat formátuma:',
  'digest_html' => 'HTML',
  'digest_text' => 'Szöveges',
  'digest_excerpt' => '<b>Üzenetek kivonatának megjelenítése:</b>',
  'digest_yes' => 'Igen',
  'digest_no' => 'Nem',
  'digest_l_show_my_messages' => '<b>Az én üzeneteim jelennek meg a kivonatban:</b>',
  'digest_l_show_new_only' => '<b>Csak az új üzenetek mutatása:</b><br />(Ez a szûrõ leszûkíti a megjelenítendõ üzeneteket a legutolsó látogatásod után keletkezett üzenetekre. A régebbi hozzászólásokat nem fogja a kivonat tartalmazni.)',
  'digest_send_if_no_msgs' => '<b>Kivonat küldése, amennyiben nincs új üzenet beküldve:</b>',
  'digest_hour_to_send' => '<b>A kivonat küldésének az ideje:</b><br />(Ez az idõ függ a profilodban beállított idõzónától. Ha megváltoztatod a profilodban az idõzónát, akkor a kivonat kézbesítési ideje is annak megfelelõen fog változni.)',
  'digest_hour_to_send_short' => 'Kivonat küldésének ideje (a profilodban beállított idõzóna alapján):',
  'digest_midnight' => 'Éjfél',
  'digest_1am' => 'Éjjel 1',
  'digest_2am' => 'Éjjel 2',
  'digest_3am' => 'Hajnal 3',
  'digest_4am' => 'Hajnal 4',
  'digest_5am' => 'Hajnal 5',
  'digest_6am' => 'Reggel 6',
  'digest_7am' => 'Reggel 7',
  'digest_8am' => 'Reggel 8',
  'digest_9am' => 'Délelõtt 9',
  'digest_10am' => 'Délelõtt 10',
  'digest_11am' => 'Délelõtt 11',
  'digest_12pm' => 'Délben',
  'digest_1pm' => 'Délután 1',
  'digest_2pm' => 'Délután 2',
  'digest_3pm' => 'Délután 3',
  'digest_4pm' => 'Délután 4',
  'digest_5pm' => 'Délután 5',
  'digest_6pm' => 'Délután 6',
  'digest_7pm' => 'Este 7',
  'digest_8pm' => 'Este 8',
  'digest_9pm' => 'Este 9',
  'digest_10pm' => 'Késõ este 10',
  'digest_11pm' => 'Éjjel 11',
  'digest_click_return' => 'Click %sHere%s to return to Digests settings', // %s's here are for uris, do not remove!
  'digest_select_forums' => '<b>Kivonat küldése ezen fórumokról:</b>',
  'digest_create' => 'A kivonatod beállítása sikeresen létrejött',
  'digest_modify' => 'A kivonatod beállítása sikeresen frissült',
  'digest_unsubscribe' => 'Most leiratkoztál, és nem kapsz többé kivonatot',
  'digest_no_forums_selected' => 'Nincs kijelölve semmilyen fórum, így le lettél iratkozva',
  'digest_all_forums' => 'Minden feliratkozott fórum',
  'digest_submit_text' => 'Kivonatbeállítások megváltoztatása',
  'digest_reset_text' => 'Reset',
  'digest_size' => '<b>Üzenetenkénti maximális karakterszám:</b><br />(Figyelem: ez a beállítás levágja a túl hosszú üzenetek végét a kivonatban. Egy link fog az üzenet végén szerepelni, amely a teljes üzenet tartalmát megmutató weboldalra vezet.)',
  'digest_size_50' => '50',
  'digest_size_100' => '100',
  'digest_size_150' => '150',
  'digest_size_300' => '300',
  'digest_size_600' => '600',
  'digest_size_max' => 'Maximum (32000)',
  'digest_version_text' => 'Verzió',
  )
)

?>