<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main_upi2db.php 101 2009-05-16 16:03:40Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* BigRib (bigrib@gmx.de)
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

$lang = array_merge($lang, array (
  'Search_no_new' => 'Utolsó látogatásod óta keletkezett új vagy szerkesztett hozzászólás',
  'Neue_Beitraege' => 'Olvasatlan hozzászólások',
  'Editierte_Beitraege' => 'Szerkesztett hozzászólások',
  'Ungelesen_Markiert' => 'Jelölt hozzászólások',
  'Permanent_Gelesen' => 'Végleg olvasott',
  'Posts' => 'Hozzászólások',
  'Unreaded_post' => 'Olvasatlan hozzászólás',
  'New_edited_post' => 'Szerkesztett hozzászólás',
  'New_edited_posts' => 'Szerkesztett hozzászólások',
  'Unreaded_posts' => 'Olvasatlan hozzászólások',
  'upi2db_post_edit' => 'Szerkesztett',
  'upi2db_post_new' => 'Új',
  'upi2db_post_and' => ' &amp; ',
  'upi2db_always_read' => 'Téma végleg olvasottként megjelölése',
  'upi2db_always_read_unset' => 'Téma végleg olvasottból kivétele',
  'upi2db_always_read_cant_set' => 'A téma nem jelölhetõ meg végleg olvasottnak',
  'upi2db_always_read_no_more' => 'Nem engedélyezett, hogy egyéb témákat végleg olvasottnak jelölj meg.',
  'upi2db_always_read_is_set' => 'A téma végleg olvasottként megjelölve',
  'upi2db_always_read_is_unset' => 'A téma többet nincs végleg olvasottként megjelölve',
  'no_always_read' => 'Nics végleg olvasottként megjelölt téma',
  'x_always_read' => 'Végleg olvasottként megjelölt témák ',
  'upi2db_which_system' => 'Milyen rendszert használhatok az új hozzászólások kezelésére?',
  'upi2db_which_system_explain' => 'Részletes információkat találsz az elérhetõ rendszerekrõl a <a href="faq.' . PHP_EXT . '">GYIK-ban</a>.',
  'cookie_system' => 'Sütirendszer',
  'upi2db_system' => 'UPI2DB rendszer',
  'upi2db_mark_post' => 'Hozzászólás megjelölése',
  'upi2db_unmark_post' => 'Jelöletlen hozzászólás',
  'upi2db_post_cant_mark' => 'Nem engedélyezett, hogy egyéb hozzászólásokat megjelölj.',
  'upi2db_post_marked' => 'Hozzászólás megjelölve.',
  'upi2db_post_unmarked' => 'A hozzászólás többé nincs megjelölve.',
  'always_read_icon' => 'Végleg olvasott',
  'upi2db_always_read_forum_short' => 'Végleg olvasottként megjelölve',
  'upi2db_always_read_forum' => 'A fórum megjelölése végleg olvasottként',
  'upi2db_always_read_forum_unset_short' => 'Végleg olvasott megjelölés eltávolítása',
  'upi2db_always_read_forum_unset' => 'A fórum végleg olvasott megjelölésének eltávolítása',
  'upi2db_forum_is_always_read' => 'Ez a fórum meg lett jelölve, mint végleg olvasott',
  'upi2db_forum_isnt_always_read' => 'Ez a fórum nincs megjelölve többé, mint végleg olvasott',
  'upi2db_cat_cant_mark_always_read' => 'Kategóriákat nem lehet végleg olvasottnak megjelölni',
  'upi2db_new_word' => 'Egyéb megjelölés az új hozzászólásokra?',
  'upi2db_new_word_explain' => 'A téma új hozzászólásai megjelölve "Új jelzõvel:" ?',
  'upi2db_edit_word' => 'Egyéb megjelölés a szerkesztett hozzászólásokra?',
  'upi2db_edit_word_explain' => 'A téma szerkesztett hozzászólásai megjelölve "Szerkesztett jelzõvel:"',
  'upi2db_unread_color' => 'Színezett témacím, ha van új hozzászólás',
  'upi2db_unread_disp_posts' => 'Mutasd az új/szerkesztett hozzászólásokat',
  'Click_return_search' => '%sKattints ide%s az utolsó oldalhoz való visszatéréshez',
  'Click_return_portal' => '%sKattints ide%s a portálhoz való visszatéréshez',
  'mark_edit' => 'Hozzászólás megjelölése mint szerkesztett (olvasatlanok lesznek más felhasználók számára)',
  'upi2db_news_is_mark_unread' => 'Újak olvasatlanként megjelölve',
  'upi2db_news_is_mark_read' => 'Újak olvasottként megjelölve',
  'upi2db_mark_news_read' => 'Újak megjelölése mint olvasott',
  'upi2db_mark_news_unread' => 'Újak megjelölése mint olvasatlan',
  'upi2db_search_mark_read' => 'OLV',
  'upi2db_submit_mark_read' => 'Olvasottként megjelöl',
  'upi2db_submit_topic_mark_read' => 'Kijelölt témák megjelölése mint olvasott',
  
  'upi2db_mark_post_unread' => 'Ezen hozzászólások megjelölése mint olvasatlan',
  'upi2db_mark_post_unread_cant' => 'Ezeket a hozzászólásokat nem lehet olvasatlannak megjelölni.',
  'upi2db_mark_post_is_unread' => 'Hozzászólás olvasatlanként megjelölve.',
  
  'upi2db_first_use_txt' => 'Az UPI2DB minden funkciója engedélyezve van. A használatáról szóló információkat a GYIK-ban találod.',
  
  'upi2db_u' => 'O',
  'upi2db_m' => 'J',
  'upi2db_p' => 'V',
  'upi2db_unread' => 'Olvasatlan hozzászólások',
  'upi2db_marked' => 'Jelölt hozzászólások',
  'upi2db_perm_read' => 'Végleg olvasott',
  )
);

?>