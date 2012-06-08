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

$lang = array_merge($lang, array(
	'Search_no_new' => 'Nincs új vagy szerkesztett hozzászólás az utolsó látogatásod óta',
	'Neue_Beitraege' => 'Olvasatlan hozzászólások',
	'Editierte_Beitraege' => 'Szerkesztett hozzászólások',
	'Ungelesen_Markiert' => 'Megjelölve ölvasatlanként',
	'Permanent_Gelesen' => 'Mindig olvasott',
	'Posts' => 'Hozzászólások',
	'Unreaded_post' => 'Olvasatlan hozzászólás',
	'New_edited_post' => 'Szerkesztett hozzászólás',
	'New_edited_posts' => 'Szerkesztett hozzászólások',
	'Unreaded_posts' => 'Olvasatlan hozzászólások',
	'upi2db_post_edit' => 'Szerkesztve',
	'upi2db_post_new' => 'Új',
	'upi2db_post_and' => ' &amp; ',
	'upi2db_always_read' => 'Téma megjelölése állandóan olvasottként',
	'upi2db_always_read_unset' => 'Állandóan olvasottként jelölés megszüntetése',
	'upi2db_always_read_cant_set' => 'A téma nem jelölhető meg állandóan olvasottként',
	'upi2db_always_read_no_more' => 'Nem jelölhetsz meg témákat állandóan olvasottként.',
	'upi2db_always_read_is_set' => 'Téma megjelölve állandóan olvasottként',
	'upi2db_always_read_is_unset' => 'A téma nincs többé megjelölve állandóan olvasottként',
	'no_always_read' => 'Nincs téma megjelölve állandóan olvasottként',
	'x_always_read' => 'View as permanent read marked topics ',
	'upi2db_which_system' => 'Which system do you want to use to handle new posts?',
	'upi2db_which_system_explain' => 'Detailed information about the different systems can be found in the <a href="faq.' . PHP_EXT . '">FAQ\'s</a>.',
	'cookie_system' => 'Cookie System',
	'upi2db_system' => 'UPI2DB System',
	'upi2db_mark_post' => 'Mark this post',
	'upi2db_unmark_post' => 'Unmark this post',
	'upi2db_post_cant_mark' => 'This post cannot be marked.',
	'upi2db_post_marked' => 'Post is marked.',
	'upi2db_post_unmarked' => 'Post is no longer marked.',
	'upi2db_post_cant_mark' => 'You are not allowed to mark additional posts.',
	'always_read_icon' => 'Permanently read',
	'upi2db_always_read_forum_short' => 'Mark as permanent read',
	'upi2db_always_read_forum' => 'Mark this forum as permanent read',
	'upi2db_always_read_forum_unset_short' => 'Unmark as permanent read',
	'upi2db_always_read_forum_unset' => 'Unmark this forum as permanent read',
	'upi2db_forum_is_always_read' => 'This forum is marked as permanent read',
	'upi2db_forum_isnt_always_read' => 'This forum is no longer marked as permanent read',
	'upi2db_cat_cant_mark_always_read' => 'Categories can\'t be set to permanently read',
	'upi2db_new_word' => 'Additional marking for new posts?',
	'upi2db_new_word_explain' => 'Should a topic with new posts be marked with "New:" ?',
	'upi2db_edit_word' => 'Additional marking for edited posts?',
	'upi2db_edit_word_explain' => 'Should a topic with edited posts be marked with "Edited:"',
	'upi2db_unread_color' => 'Colour topic title if there are new posts',
	'upi2db_unread_disp_posts' => 'Show new and/or edited Posts',
	'Click_return_search' => '%sClick here%s to return to the last page',
	'Click_return_portal' => '%sCLick here%s to return to the portal',
	'mark_edit' => 'Mark post as edited (will be highlighted as unread to other users)',
	'upi2db_news_is_mark_unread' => 'News marked as unread',
	'upi2db_news_is_mark_read' => 'News marked as read',
	'upi2db_mark_news_read' => 'Mark news as read',
	'upi2db_mark_news_unread' => 'Mark News as unread',
	'upi2db_search_mark_read' => 'MAR',
	'upi2db_submit_mark_read' => 'Mark As Read',
	'upi2db_submit_topic_mark_read' => 'Selected topics have been marked as read',

	'upi2db_mark_post_unread' => 'Mark this posts as unread',
	'upi2db_mark_post_unread_cant' => 'This post cannot be marked as unread.',
	'upi2db_mark_post_is_unread' => 'Post has been marked as unread.',

	'upi2db_first_use_txt' => 'You are now able to use the UPI2DB system and all of its functions. You can find more details in FAQ page.',

	'upi2db_u' => 'U',
	'upi2db_m' => 'M',
	'upi2db_p' => 'P',
	'upi2db_unread' => 'Unread Posts',
	'upi2db_marked' => 'Marked Posts',
	'upi2db_perm_read' => 'Permanent Read',
	)
);

?>