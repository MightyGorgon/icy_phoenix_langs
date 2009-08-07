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
	'Search_no_new' => 'Inga nya eller redigerade inl�gg sedan senaste bes�k',
	'Neue_Beitraege' => 'Ol�sta inl�gg',
	'Editierte_Beitraege' => 'Redigerade inl�gg',
	'Ungelesen_Markiert' => 'Markerats som ol�st',
	'Permanent_Gelesen' => 'L�s alltid',
	'Posts' => 'Inl�gg',
	'Unreaded_post' => 'Ol�sta inl�gg',
	'New_edited_post' => 'Redigerade inl�gg',
	'New_edited_posts' => 'Redigerade inl�gg',
	'Unreaded_posts' => 'Ol�sta inl�gg',
	'upi2db_post_edit' => 'Redigerad',
	'upi2db_post_new' => 'Ny',
	'upi2db_post_and' => ' &amp; ',
	'upi2db_always_read' => 'Markera �mne som permanent l�sta',
	'upi2db_always_read_unset' => 'Avmarkera �mne som permanent l�sta',
	'upi2db_always_read_cant_set' => '�mne kan inte vara markerat som permanent l�st',
	'upi2db_always_read_no_more' => 'Du har inte till�telse att markera ytterligare �mnen som st�ndigt l�sta.',
	'upi2db_always_read_is_set' => '�mne markeras som permanent l�st',
	'upi2db_always_read_is_unset' => '�mne �r inte l�ngre markerat som permanent l�st',
	'no_always_read' => 'Inga �mnen �r m�rkta som permanent l�sta',
	'x_always_read' => 'Visa som permanent l�sta markerade �mnen ',
	'upi2db_which_system' => 'Vilket system vill du anv�nda f�r att hantera nya inl�gg?',
	'upi2db_which_system_explain' => 'Detaljerad information om de olika systemen finns i <a href="faq.' . PHP_EXT . '">FAQ\'s</a>.',
	'cookie_system' => 'Cookie System',
	'upi2db_system' => 'UPI2DB System',
	'upi2db_mark_post' => 'Markera det h�r inl�gget',
	'upi2db_unmark_post' => 'Avmarkera det h�r inl�gget',
	'upi2db_post_cant_mark' => 'Denna post kan inte m�rkas.',
	'upi2db_post_marked' => 'Post �r m�rkt.',
	'upi2db_post_unmarked' => 'Post �r inte l�ngre m�rkta.',
	'upi2db_post_cant_mark' => 'Du har inte till�telse att markera ytterligare inl�gg.',
	'always_read_icon' => 'Permanent l�st',
	'upi2db_always_read_forum_short' => 'Markera som permanent l�st',
	'upi2db_always_read_forum' => 'Markera dett forum som permanent l�st',
	'upi2db_always_read_forum_unset_short' => 'Avmarkera som permanent l�st',
	'upi2db_always_read_forum_unset' => 'Avmarkera detta forum som permanent l�st',
	'upi2db_forum_is_always_read' => 'Detta forum �r markerat som permanent l�st',
	'upi2db_forum_isnt_always_read' => 'Detta forum �r inte l�ngre markerat som permanent l�st',
	'upi2db_cat_cant_mark_always_read' => 'Kategorier kan inte vara inst�lld p� permanent l�st',
	'upi2db_new_word' => 'Ytterligare m�rkning f�r nya inl�gg?',
	'upi2db_new_word_explain' => 'Ska ett �mne med nya inl�gg vara m�rkta med "Nytt:" ?',
	'upi2db_edit_word' => 'Ytterligare m�rkning f�r redigerade inl�gg?',
	'upi2db_edit_word_explain' => 'Ska ett �mne med redigerade inl�gg m�rkas med "Redigerat:"',
	'upi2db_unread_color' => 'F�rgl�gg �mnes titeln om det finns nya inl�gg',
	'upi2db_unread_disp_posts' => 'Visa nya och/eller redigerade inl�gg',
	'Click_return_search' => '%sKlicka h�r%s f�r att �terg� till sista sidan',
	'Click_return_portal' => '%sKlicka h�r%s f�r att �terg� till portalen',
	'mark_edit' => 'Markera post som redigerad (kommer att markeras som ol�st f�r andra anv�ndare)',
	'upi2db_news_is_mark_unread' => 'Nyheter markeras som ol�sta',
	'upi2db_news_is_mark_read' => 'Nyheter markeras som l�sta',
	'upi2db_mark_news_read' => 'Markera Nyheter som l�sta',
	'upi2db_mark_news_unread' => 'Markera Nyheter som ol�sta',
	'upi2db_search_mark_read' => 'MSL',
	'upi2db_submit_mark_read' => 'Markera Som L�sta',
	'upi2db_submit_topic_mark_read' => 'Utvalda �mnen har markerats som l�sta',

	'upi2db_mark_post_unread' => 'Markera dessa inl�gg som ol�sta',
	'upi2db_mark_post_unread_cant' => 'Denna post kan inte markeras som ol�st.',
	'upi2db_mark_post_is_unread' => 'Post har markerats som ol�st.',

	'upi2db_first_use_txt' => 'Du kan nu anv�nda UPI2DB systemet och alla dess funktioner. Du hittar mer information i v�rt forums FAQ.',

	'upi2db_u' => 'U',
	'upi2db_m' => 'M',
	'upi2db_p' => 'P',
	'upi2db_unread' => 'Ol�sta inl�gg',
	'upi2db_marked' => 'Markerade Inl�gg',
	'upi2db_perm_read' => 'Permanent L�sta',
	)
);

?>