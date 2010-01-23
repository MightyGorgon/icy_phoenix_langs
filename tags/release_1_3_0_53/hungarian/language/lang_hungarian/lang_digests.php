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
  'digest_introduction' => 'K�r�sedre elk�ldt�k a ' . $board_config['sitename'] . ' f�rum legfrissebb hozz�sz�l�sainak aktu�lis kivonat�t. K�r�nk gyere �s csatlakozz a besz�lget�s�nkh�z!',
  'digest_from_text_name' => '' . $board_config['sitename'] . ' Kivonatol� Robot',
  'digest_from_email_address' => '' . $board_config['board_email'] . '',
  'digest_subject_line' => '' . $board_config['sitename'] . ' kivonata',
  'digest_disclaimer_html' => '\n'. 'Ezt az �zenetet a <a href="' . DIGEST_SITE_URL . '">' . $board_config['sitename'] . '</a> f�rumra regisztr�lt felhaszn�l�nak k�ldt�k a saj�t �s szem�lyes k�r�s�re. A ' . $board_config['sitename'] . ' oldalon vigy�zunk arra, hogy az email c�med, �s m�s szem�lyes adatod, harmadik szem�ly r�sz�re ne legyen hozz�f�rhet�, �s ezen inform�ci�k ne jussanak tudom�s�ra. L�sd a <a href="' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">GYIK</a>-ot tov�bbi inform�ci��rt �s a szem�lyes adataid v�delm�r�l sz�l� nyilatkozatunk�rt. Megv�ltoztathatod vagy t�r�lheted ezen lev�lre t�rt�n� feliratkoz�sod, amennyiben bejelentkezel a ' . $board_config['sitename'] . ' oldalra, �s elm�sz a <a href="' . DIGEST_SITE_URL . 'digests.' . PHP_EXT . '">Kivonat lapj�ra</a>. (Musz�j bejelentkezned, hogy hozz�f�rj a be�ll�t�saidhoz.) Ha b�rmilyen k�rd�sed vagy visszajelz�sed lenne a kivonatokkal kapcsolatban, akkor k�rj�k k�ldj egy levelet a <a href="mailto:' . $board_config['board_email'] . '">' . $board_config['sitename'] . ' Webmesternek</a>.',
  'digest_disclaimer_text' => '\n' . 'Ezt az �zenetet a ' . $board_config['sitename'] . ' f�rumra regisztr�lt felhaszn�l�nak k�ldt�k a saj�t �s szem�lyes k�r�s�re. A ' . $board_config['sitename'] . ' teljesen �zletmentes. Az email c�med nem adjuk �t harmadik szem�ly r�sz�re. L�sd a GYIK-ot tov�bbi inform�ci��rt �s a szem�lyes adataid v�delm�r�l sz�l� nyilatkozatunk�rt. Megv�ltoztathatod vagy t�r�lheted ezen lev�lre t�rt�n� feliratkoz�sod, amennyiben bejelentkezel a ' . $board_config['sitename'] . ' oldalra, �s elm�sz a Kivonat lapj�ra (Musz�j bejelentkezned, hogy hozz�f�rj a be�ll�t�saidhoz.) Ha b�rmilyen k�rd�sed vagy visszajelz�sed lenne a kivonatokkal kapcsolatban, akkor k�rj�k k�ldj egy levelet a ' . $board_config['board_email'] . ' email c�mre.',
  'digest_forum' => 'F�rum: ',
  'digest_topic' => 'T�ma: ',
  'digest_link' => 'Link:',
  'digest_post_time' => 'Bek�ld�s ideje:',
  'digest_author' => 'Szerz�',
  'digest_message_excerpt' => '�zenet kivonata',
  'digest_posted_by' => 'Bek�ldte ',
  'digest_posted_at' => ' at ',
  'digest_forums_message_digest' => 'F�rumkivonat', // used in <head> tag
  'digest_salutation' => 'Kedves ',
  'digest_your_digest_options' => 'A kivonatod be�ll�t�sai:',
  'digest_format' => '<b>Kivonat form�tuma:</b><br />(A HTML form�tum nem aj�nlott, ha az email kliensed nem tudja megjelen�teni a HTML-t)',
  'digest_show_message_text' => '�zenet sz�veg�nek mutat�sa:',
  'digest_show_my_messages' => '�zeneteim mutat�sa:',
  'digest_frequency' => 'Kivonatok gyakoris�ga:',
  'digest_show_only_new_messages' => 'Csak azon �zenetek mutat�sa, amelyek a legut�bbi bejelentkez�s ut�n k�ldtek be:',
  'digest_send_if_no_new_messages' => 'Kivonat k�ld�se, ha nincs �j �zenet:',
  'digest_period_24_hrs' => '24 �ra',
  'digest_period_1_week' => '1 h�t',
  'digest_no_new_messages' => 'Nincs �j �zenet a kijel�lt f�rumokban.',
  'digest_message_size' => 'Az �zenetek maxim�lis karakterhossza a kivonatokban:',
  'digest_summary' => 'Kivonat �sszegz�se',
  'digest_a_total_of' => '�sszesen',
  'digest_were_emailed' => 'kivonat emailben elk�ldve.',
  'digest_server_date' => 'Kiszolg�l� d�tuma:',
  'digest_server_hour' => 'Kiszolg�l� ideje:',
  'digest_server_time_zone' => 'Kiszolg�l� id�z�n�ja:',
  'digest_or' => 'vagy',
  'digest_a_digest_containing' => 'A kivonat �sszesen',
  'digest_posts_was_sent_to' => '�zenetet tartalmaz. Elk�ldve: ',

// This block goes on the digest settings user interface page (digests.php)
  'digest_page_title' => 'Kivonatok',
  'digest_explanation' => 'A kivonat egy olyan email �zenet, ami a bek�ld�tt hozz�sz�l�sokr�l tartalmaz egy �sszes�t�t. A kivonatot k�rheted napi, heti rendszeress�ggel vagy egy �ltalad kiv�lasztott �r�ban. Meghat�rozhatod azt is, hogy mely f�rumokr�l szeretn�l �zenet�sszes�t�t kapni, de term�szetesen az �sszes f�rum �sszes �zenet�r�l is k�rhetsz kivonatot (persze csak akkor, ha jogod van azokat el is olvasni).<br /><br />A szem�lyes adataid v�delm�r�l sz�l� �ll�sfoglal�sunkkal �sszhangban a kivonat nem "spam", �s az email c�medet nem haszn�ljuk fel semmilyen rekl�mhoz k�thet� c�lokra. Amennyiben szeretn�l a kivonatokr�l leiratkozni, csak vissza kell ide j�nn�d. A legt�bb felhaszn�l� hasznosnak tal�lta a kivonatokat. Javasoljuk tegy�l egy pr�b�t!',
  'digest_wanted' => '<b>Kivonat k�zbes�t�s�nek t�pusa:</b><br />(A heti kivonatot vas�rnap k�ldj�k ki)',
  'digest_none' => 'Nincs (Leiratkoz�s)',
  'digest_daily' => 'Napi',
  'digest_weekly' => 'Heti',
  'digest_format_short' => 'Kivonat form�tuma:',
  'digest_html' => 'HTML',
  'digest_text' => 'Sz�veges',
  'digest_excerpt' => '<b>�zenetek kivonat�nak megjelen�t�se:</b>',
  'digest_yes' => 'Igen',
  'digest_no' => 'Nem',
  'digest_l_show_my_messages' => '<b>Az �n �zeneteim jelennek meg a kivonatban:</b>',
  'digest_l_show_new_only' => '<b>Csak az �j �zenetek mutat�sa:</b><br />(Ez a sz�r� lesz�k�ti a megjelen�tend� �zeneteket a legutols� l�togat�sod ut�n keletkezett �zenetekre. A r�gebbi hozz�sz�l�sokat nem fogja a kivonat tartalmazni.)',
  'digest_send_if_no_msgs' => '<b>Kivonat k�ld�se, amennyiben nincs �j �zenet bek�ldve:</b>',
  'digest_hour_to_send' => '<b>A kivonat k�ld�s�nek az ideje:</b><br />(Ez az id� f�gg a profilodban be�ll�tott id�z�n�t�l. Ha megv�ltoztatod a profilodban az id�z�n�t, akkor a kivonat k�zbes�t�si ideje is annak megfelel�en fog v�ltozni.)',
  'digest_hour_to_send_short' => 'Kivonat k�ld�s�nek ideje (a profilodban be�ll�tott id�z�na alapj�n):',
  'digest_midnight' => '�jf�l',
  'digest_1am' => '�jjel 1',
  'digest_2am' => '�jjel 2',
  'digest_3am' => 'Hajnal 3',
  'digest_4am' => 'Hajnal 4',
  'digest_5am' => 'Hajnal 5',
  'digest_6am' => 'Reggel 6',
  'digest_7am' => 'Reggel 7',
  'digest_8am' => 'Reggel 8',
  'digest_9am' => 'D�lel�tt 9',
  'digest_10am' => 'D�lel�tt 10',
  'digest_11am' => 'D�lel�tt 11',
  'digest_12pm' => 'D�lben',
  'digest_1pm' => 'D�lut�n 1',
  'digest_2pm' => 'D�lut�n 2',
  'digest_3pm' => 'D�lut�n 3',
  'digest_4pm' => 'D�lut�n 4',
  'digest_5pm' => 'D�lut�n 5',
  'digest_6pm' => 'D�lut�n 6',
  'digest_7pm' => 'Este 7',
  'digest_8pm' => 'Este 8',
  'digest_9pm' => 'Este 9',
  'digest_10pm' => 'K�s� este 10',
  'digest_11pm' => '�jjel 11',
  'digest_click_return' => 'Click %sHere%s to return to Digests settings', // %s's here are for uris, do not remove!
  'digest_select_forums' => '<b>Kivonat k�ld�se ezen f�rumokr�l:</b>',
  'digest_create' => 'A kivonatod be�ll�t�sa sikeresen l�trej�tt',
  'digest_modify' => 'A kivonatod be�ll�t�sa sikeresen friss�lt',
  'digest_unsubscribe' => 'Most leiratkozt�l, �s nem kapsz t�bb� kivonatot',
  'digest_no_forums_selected' => 'Nincs kijel�lve semmilyen f�rum, �gy le lett�l iratkozva',
  'digest_all_forums' => 'Minden feliratkozott f�rum',
  'digest_submit_text' => 'Kivonatbe�ll�t�sok megv�ltoztat�sa',
  'digest_reset_text' => 'Reset',
  'digest_size' => '<b>�zenetenk�nti maxim�lis karaktersz�m:</b><br />(Figyelem: ez a be�ll�t�s lev�gja a t�l hossz� �zenetek v�g�t a kivonatban. Egy link fog az �zenet v�g�n szerepelni, amely a teljes �zenet tartalm�t megmutat� weboldalra vezet.)',
  'digest_size_50' => '50',
  'digest_size_100' => '100',
  'digest_size_150' => '150',
  'digest_size_300' => '300',
  'digest_size_600' => '600',
  'digest_size_max' => 'Maximum (32000)',
  'digest_version_text' => 'Verzi�',
  )
)

?>