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

$lang = array_merge($lang, array(
	'Search_no_new' => 'Inga nya eller redigerade inlägg sedan senaste besök',
	'Neue_Beitraege' => 'Olästa inlägg',
	'Editierte_Beitraege' => 'Redigerade inlägg',
	'Ungelesen_Markiert' => 'Markerats som oläst',
	'Permanent_Gelesen' => 'Läs alltid',
	'Posts' => 'Inlägg',
	'Unreaded_post' => 'Olästa inlägg',
	'New_edited_post' => 'Redigerade inlägg',
	'New_edited_posts' => 'Redigerade inlägg',
	'Unreaded_posts' => 'Olästa inlägg',
	'upi2db_post_edit' => 'Redigerad',
	'upi2db_post_new' => 'Ny',
	'upi2db_post_and' => ' &amp; ',
	'upi2db_always_read' => 'Markera ämne som permanent lästa',
	'upi2db_always_read_unset' => 'Avmarkera ämne som permanent lästa',
	'upi2db_always_read_cant_set' => 'Ämne kan inte vara markerat som permanent läst',
	'upi2db_always_read_no_more' => 'Du har inte tillåtelse att markera ytterligare ämnen som ständigt lästa.',
	'upi2db_always_read_is_set' => 'Ämne markeras som permanent läst',
	'upi2db_always_read_is_unset' => 'Ämne är inte längre markerat som permanent läst',
	'no_always_read' => 'Inga ämnen är märkta som permanent lästa',
	'x_always_read' => 'Visa som permanent lästa markerade ämnen ',
	'upi2db_which_system' => 'Vilket system vill du använda för att hantera nya inlägg?',
	'upi2db_which_system_explain' => 'Detaljerad information om de olika systemen finns i <a href="faq.' . PHP_EXT . '">FAQ\'s</a>.',
	'cookie_system' => 'Cookie System',
	'upi2db_system' => 'UPI2DB System',
	'upi2db_mark_post' => 'Markera det här inlägget',
	'upi2db_unmark_post' => 'Avmarkera det här inlägget',
	'upi2db_post_cant_mark' => 'Denna post kan inte märkas.',
	'upi2db_post_marked' => 'Post är märkt.',
	'upi2db_post_unmarked' => 'Post är inte längre märkta.',
	'upi2db_post_cant_mark' => 'Du har inte tillåtelse att markera ytterligare inlägg.',
	'always_read_icon' => 'Permanent läst',
	'upi2db_always_read_forum_short' => 'Markera som permanent läst',
	'upi2db_always_read_forum' => 'Markera dett forum som permanent läst',
	'upi2db_always_read_forum_unset_short' => 'Avmarkera som permanent läst',
	'upi2db_always_read_forum_unset' => 'Avmarkera detta forum som permanent läst',
	'upi2db_forum_is_always_read' => 'Detta forum är markerat som permanent läst',
	'upi2db_forum_isnt_always_read' => 'Detta forum är inte längre markerat som permanent läst',
	'upi2db_cat_cant_mark_always_read' => 'Kategorier kan inte vara inställd på permanent läst',
	'upi2db_new_word' => 'Ytterligare märkning för nya inlägg?',
	'upi2db_new_word_explain' => 'Ska ett ämne med nya inlägg vara märkta med "Nytt:" ?',
	'upi2db_edit_word' => 'Ytterligare märkning för redigerade inlägg?',
	'upi2db_edit_word_explain' => 'Ska ett ämne med redigerade inlägg märkas med "Redigerat:"',
	'upi2db_unread_color' => 'Färglägg ämnes titeln om det finns nya inlägg',
	'upi2db_unread_disp_posts' => 'Visa nya och/eller redigerade inlägg',
	'Click_return_search' => '%sKlicka här%s för att återgå till sista sidan',
	'Click_return_portal' => '%sKlicka här%s för att återgå till portalen',
	'mark_edit' => 'Markera post som redigerad (kommer att markeras som oläst för andra användare)',
	'upi2db_news_is_mark_unread' => 'Nyheter markeras som olästa',
	'upi2db_news_is_mark_read' => 'Nyheter markeras som lästa',
	'upi2db_mark_news_read' => 'Markera nyheter som lästa',
	'upi2db_mark_news_unread' => 'Markera nyheter som olästa',
	'upi2db_search_mark_read' => 'MSL',
	'upi2db_submit_mark_read' => 'Markera som lästa',
	'upi2db_submit_topic_mark_read' => 'Utvalda ämnen har markerats som lästa',

	'upi2db_mark_post_unread' => 'Markera dessa inlägg som olästa',
	'upi2db_mark_post_unread_cant' => 'Denna post kan inte markeras som oläst.',
	'upi2db_mark_post_is_unread' => 'Post har markerats som oläst.',

	'upi2db_first_use_txt' => 'Du kan nu använda UPI2DB systemet och alla dess funktioner. Du hittar mer information i vårt forums FAQ.',

	'upi2db_u' => 'U',
	'upi2db_m' => 'M',
	'upi2db_p' => 'P',
	'upi2db_unread' => 'Olästa inlägg',
	'upi2db_marked' => 'Markerade inlägg',
	'upi2db_perm_read' => 'Permanent lästa',
	)
);

?>