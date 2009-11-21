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
  'Search_no_new' => 'Utols� l�togat�sod �ta keletkezett �j vagy szerkesztett hozz�sz�l�s',
  'Neue_Beitraege' => 'Olvasatlan hozz�sz�l�sok',
  'Editierte_Beitraege' => 'Szerkesztett hozz�sz�l�sok',
  'Ungelesen_Markiert' => 'Jel�lt hozz�sz�l�sok',
  'Permanent_Gelesen' => 'V�gleg olvasott',
  'Posts' => 'Hozz�sz�l�sok',
  'Unreaded_post' => 'Olvasatlan hozz�sz�l�s',
  'New_edited_post' => 'Szerkesztett hozz�sz�l�s',
  'New_edited_posts' => 'Szerkesztett hozz�sz�l�sok',
  'Unreaded_posts' => 'Olvasatlan hozz�sz�l�sok',
  'upi2db_post_edit' => 'Szerkesztett',
  'upi2db_post_new' => '�j',
  'upi2db_post_and' => ' &amp; ',
  'upi2db_always_read' => 'T�ma v�gleg olvasottk�nt megjel�l�se',
  'upi2db_always_read_unset' => 'T�ma v�gleg olvasottb�l kiv�tele',
  'upi2db_always_read_cant_set' => 'A t�ma nem jel�lhet� meg v�gleg olvasottnak',
  'upi2db_always_read_no_more' => 'Nem enged�lyezett, hogy egy�b t�m�kat v�gleg olvasottnak jel�lj meg.',
  'upi2db_always_read_is_set' => 'A t�ma v�gleg olvasottk�nt megjel�lve',
  'upi2db_always_read_is_unset' => 'A t�ma t�bbet nincs v�gleg olvasottk�nt megjel�lve',
  'no_always_read' => 'Nics v�gleg olvasottk�nt megjel�lt t�ma',
  'x_always_read' => 'V�gleg olvasottk�nt megjel�lt t�m�k ',
  'upi2db_which_system' => 'Milyen rendszert haszn�lhatok az �j hozz�sz�l�sok kezel�s�re?',
  'upi2db_which_system_explain' => 'R�szletes inform�ci�kat tal�lsz az el�rhet� rendszerekr�l a <a href="faq.' . PHP_EXT . '">GYIK-ban</a>.',
  'cookie_system' => 'S�tirendszer',
  'upi2db_system' => 'UPI2DB rendszer',
  'upi2db_mark_post' => 'Hozz�sz�l�s megjel�l�se',
  'upi2db_unmark_post' => 'Jel�letlen hozz�sz�l�s',
  'upi2db_post_cant_mark' => 'Nem enged�lyezett, hogy egy�b hozz�sz�l�sokat megjel�lj.',
  'upi2db_post_marked' => 'Hozz�sz�l�s megjel�lve.',
  'upi2db_post_unmarked' => 'A hozz�sz�l�s t�bb� nincs megjel�lve.',
  'always_read_icon' => 'V�gleg olvasott',
  'upi2db_always_read_forum_short' => 'V�gleg olvasottk�nt megjel�lve',
  'upi2db_always_read_forum' => 'A f�rum megjel�l�se v�gleg olvasottk�nt',
  'upi2db_always_read_forum_unset_short' => 'V�gleg olvasott megjel�l�s elt�vol�t�sa',
  'upi2db_always_read_forum_unset' => 'A f�rum v�gleg olvasott megjel�l�s�nek elt�vol�t�sa',
  'upi2db_forum_is_always_read' => 'Ez a f�rum meg lett jel�lve, mint v�gleg olvasott',
  'upi2db_forum_isnt_always_read' => 'Ez a f�rum nincs megjel�lve t�bb�, mint v�gleg olvasott',
  'upi2db_cat_cant_mark_always_read' => 'Kateg�ri�kat nem lehet v�gleg olvasottnak megjel�lni',
  'upi2db_new_word' => 'Egy�b megjel�l�s az �j hozz�sz�l�sokra?',
  'upi2db_new_word_explain' => 'A t�ma �j hozz�sz�l�sai megjel�lve "�j jelz�vel:" ?',
  'upi2db_edit_word' => 'Egy�b megjel�l�s a szerkesztett hozz�sz�l�sokra?',
  'upi2db_edit_word_explain' => 'A t�ma szerkesztett hozz�sz�l�sai megjel�lve "Szerkesztett jelz�vel:"',
  'upi2db_unread_color' => 'Sz�nezett t�mac�m, ha van �j hozz�sz�l�s',
  'upi2db_unread_disp_posts' => 'Mutasd az �j/szerkesztett hozz�sz�l�sokat',
  'Click_return_search' => '%sKattints ide%s az utols� oldalhoz val� visszat�r�shez',
  'Click_return_portal' => '%sKattints ide%s a port�lhoz val� visszat�r�shez',
  'mark_edit' => 'Hozz�sz�l�s megjel�l�se mint szerkesztett (olvasatlanok lesznek m�s felhaszn�l�k sz�m�ra)',
  'upi2db_news_is_mark_unread' => '�jak olvasatlank�nt megjel�lve',
  'upi2db_news_is_mark_read' => '�jak olvasottk�nt megjel�lve',
  'upi2db_mark_news_read' => '�jak megjel�l�se mint olvasott',
  'upi2db_mark_news_unread' => '�jak megjel�l�se mint olvasatlan',
  'upi2db_search_mark_read' => 'OLV',
  'upi2db_submit_mark_read' => 'Olvasottk�nt megjel�l',
  'upi2db_submit_topic_mark_read' => 'Kijel�lt t�m�k megjel�l�se mint olvasott',
  
  'upi2db_mark_post_unread' => 'Ezen hozz�sz�l�sok megjel�l�se mint olvasatlan',
  'upi2db_mark_post_unread_cant' => 'Ezeket a hozz�sz�l�sokat nem lehet olvasatlannak megjel�lni.',
  'upi2db_mark_post_is_unread' => 'Hozz�sz�l�s olvasatlank�nt megjel�lve.',
  
  'upi2db_first_use_txt' => 'Az UPI2DB minden funkci�ja enged�lyezve van. A haszn�lat�r�l sz�l� inform�ci�kat a GYIK-ban tal�lod.',
  
  'upi2db_u' => 'O',
  'upi2db_m' => 'J',
  'upi2db_p' => 'V',
  'upi2db_unread' => 'Olvasatlan hozz�sz�l�sok',
  'upi2db_marked' => 'Jel�lt hozz�sz�l�sok',
  'upi2db_perm_read' => 'V�gleg olvasott',
  )
);

?>