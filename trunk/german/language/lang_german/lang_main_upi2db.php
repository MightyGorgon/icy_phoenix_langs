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
* TheSteffen, KugeLSichA, Tom
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
	'Search_no_new' => 'Keine neuen oder editierten Beiträge',
	'Neue_Beitraege' => 'Ungelesene Beiträge',
	'Editierte_Beitraege' => 'Bearbeitete Beiträge',
	'Ungelesen_Markiert' => 'Ungelesen Markiert',
	'Permanent_Gelesen' => 'Permanent Gelesen',
	'Posts' => 'Beiträge',
	'Unreaded_post' => 'Ungelesener Beitrag',
	'New_edited_post' => 'Geänderter Beitrag',
	'New_edited_posts' => 'Geänderte Beiträge',
	'Unreaded_posts' => 'Ungelesene Beiträge',
	'upi2db_post_edit' => 'Editiert',
	'upi2db_post_new' => 'Neu',
	'upi2db_post_and' => ' &amp; ',
	'upi2db_always_read' => 'Thema permanent als gelesen markieren',
	'upi2db_always_read_unset' => 'Thema nicht mehr permanent als gelesen markieren',
	'upi2db_always_read_cant_set' => 'Thema kann nicht permanent als gelesen markiert werden',
	'upi2db_always_read_no_more' => 'Es ist Dir nicht erlaubt, weitere Themen permanent als gelesen zu markieren.',
	'upi2db_always_read_is_set' => 'Thema wurde permanent als gelesen markiert',
	'upi2db_always_read_is_unset' => 'Thema ist nicht mehr permanent als gelesen markiert',
	'no_always_read' => 'Keine permanent als gelesen markierte Themen',
	'x_always_read' => 'Permanent gelesene Themen anzeigen ',
	'upi2db_which_system' => 'Welches System möchtest du zum Anzeigen ungelesener Beiträge verwenden?',
	'upi2db_which_system_explain' => 'Detailierte Informationen zu den Systemen findest du in den <a href="faq.' . PHP_EXT . '">FAQ\'s</a>.',
	'cookie_system' => 'Cookie System',
	'upi2db_system' => 'UPI2DB System',
	'upi2db_mark_post' => 'Beitrag markieren',
	'upi2db_unmark_post' => 'Markierung aufheben',
	'upi2db_post_cant_mark' => 'Dieser Beitrag kann nicht markiert werden.',
	'upi2db_post_marked' => 'Beitrag wurde markiert.',
	'upi2db_post_unmarked' => 'Beitrag ist nicht weiter markiert',
	'upi2db_post_cant_mark' => 'Du kannst keine weitere Beiträge mehr markieren.',
	'always_read_icon' => 'Permanent gelesen',
	'upi2db_always_read_forum_short' => 'Als permanent gelesen markieren',
	'upi2db_always_read_forum' => 'Forum als permanent gelesen markieren',
	'upi2db_always_read_forum_unset_short' => 'Nicht mehr als permanent gelesen markieren',
	'upi2db_always_read_forum_unset' => 'Forum nicht mehr als permanent gelesen markieren',
	'upi2db_forum_is_always_read' => 'Forum ist als permanent gelesen markiert',
	'upi2db_forum_isnt_always_read' => 'Forum ist nicht mehr als permanent gelesen markiert',
	'upi2db_cat_cant_mark_always_read' => 'Kategorien können nicht als permanent gelesen markiert werden',
	'upi2db_new_word' => 'Neue Beiträge speziell kennzeichnen',
	'upi2db_new_word_explain' => 'Soll ein Thema mit einem neuen Beitrag zusätzlich mit "Neu:" gekennzeichnet werden?',
	'upi2db_edit_word' => 'Bearbeitete Beiträge anders kennzeichnen',
	'upi2db_edit_word_explain' => 'Soll ein Thema mit einem editierten Beitrag zusätzlich mit "Editiert:" gekennzeichnet werden?',
	'upi2db_unread_color' => 'Thementitel bei neuem Beitrag farbig hinterlegen',
	'upi2db_unread_disp_posts' => 'Neue und/oder bearbeitete Beiträge anzeigen',
	'Click_return_search' => 'Klicke %shier%s, um zur letzten Seite zurückzukehren.',
	'Click_return_portal' => 'Klicke %shier%s, um zum Portal zurückzukehren.',
	'mark_edit' => 'Beitrag als editiert markieren (wird anderen Nutzern wieder als ungelesen angezeigt)',
	'upi2db_news_is_mark_unread' => 'News wurde als ungelesen markiert',
	'upi2db_news_is_mark_read' => 'News wurde als gelesen markiert',
	'upi2db_mark_news_read' => 'News als gelesen markieren',
	'upi2db_mark_news_unread' => 'News als ungelesen markieren',
	'upi2db_search_mark_read' => 'AGM',
	'upi2db_submit_mark_read' => 'Als gelesen markieren',
	'upi2db_submit_topic_mark_read' => 'Ausgewählte Themen wurden als gelesen markiert.',

	'upi2db_mark_post_unread' => 'Beitrag als ungelesen markieren',
	'upi2db_mark_post_unread_cant' => 'Dieser Beitrag kann nicht als ungelesen markiert werden.',
	'upi2db_mark_post_is_unread' => 'Beitrag wurde als ungelesen markiert.',

	'upi2db_first_use_txt' => 'Das Forum erlaubt Dir nun, die Funktionen des UPI2DB zu nutzen. Weitere Details hierzu findest du in den FAQ.',

	'upi2db_u' => 'U',
	'upi2db_m' => 'M',
	'upi2db_p' => 'P',
	'upi2db_unread' => 'Ungelesene Beiträge',
	'upi2db_marked' => 'Markierte Beiträge',
	'upi2db_perm_read' => 'Permanent gelesen',
	)
);

?>