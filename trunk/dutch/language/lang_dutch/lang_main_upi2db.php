<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main_upi2db.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
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
	'Search_no_new' => 'Er zijn geen nieuwe of bewerkte berichten',
	'Neue_Beitraege' => 'Ongelezen berichten',
	'Editierte_Beitraege' => 'Bewerkte berichten',
	'Ungelesen_Markiert' => 'Ongelezen gemarkeerd',
	'Permanent_Gelesen' => 'Permanent gelezen',
	'Posts' => 'Berichten',
	'Unreaded_post' => 'Ongelezen bericht',
	'New_edited_post' => 'Bewerkte bericht',
	'New_edited_posts' => 'Bewerkte berichten',
	'Unreaded_posts' => 'Ongelezen berichten',
	'upi2db_post_edit' => 'Bewerkt',
	'upi2db_post_new' => 'Nieuw',
	'upi2db_post_and' => ' &amp; ',
	'upi2db_always_read' => 'Onderwerp permanent als gelezen markeren',
	'upi2db_always_read_unset' => 'Onderwerp niet meer permanent als gelezen markeren',
	'upi2db_always_read_cant_set' => 'Onderwerp kan niet permanent als gelezen gemarkeerd worden',
	'upi2db_always_read_no_more' => 'Het is door jouw niet toegestaan, verdere onderwerpen permanent als gelezen te markeren.',
	'upi2db_always_read_is_set' => 'Onderwerp is permanent als gelezen gemarkeerd',
	'upi2db_always_read_is_unset' => 'Onderwerp is niet meer permanent als gelezen gemarkeerd',
	'no_always_read' => 'Er zijn geen permanent als gelezen gemarkeerde onderwerpen',
	'x_always_read' => 'Permanent gelezen onderwerpen weergeven ',
	'upi2db_which_system' => 'Welke systeem wil je voor het weergeven van ongelezen berichten gebruiken?',
	'upi2db_which_system_explain' => 'Uitgebreide informatie over de systemen is te vinden in de <a href="faq.' . $phpEx . '">FAQ</a>.',
	'cookie_system' => 'Cookiesysteem',
	'upi2db_system' => 'UPI2DB-systeem',
	'upi2db_mark_post' => 'Bericht markeren',
	'upi2db_unmark_post' => 'Markeren annuleren',
	'upi2db_post_cant_mark' => 'Dit bericht kan niet worden gemarkeerd.',
	'upi2db_post_marked' => 'Bericht wordt gemarkeerd.',
	'upi2db_post_unmarked' => 'Bericht is niet langer gemarkeerd.',
	'upi2db_post_cant_mark' => 'Je kan geen verdere berichten meer markeren.',
	'always_read_icon' => 'Permanent gelezen',
	'upi2db_always_read_forum_short' => 'Markeer als permanent gelezen',
	'upi2db_always_read_forum' => 'Forum permanent als gelezen markeren',
	'upi2db_always_read_forum_unset_short' => 'Markeer niet meer als permanent gelezen',
	'upi2db_always_read_forum_unset' => 'Forum niet meer permanent als gelezen markeren',
	'upi2db_forum_is_always_read' => 'Forum is permanent als gelezen gemarkeerd',
	'upi2db_forum_isnt_always_read' => 'Forum is niet langer permanent als gelezen gemarkeerd',
	'upi2db_cat_cant_mark_always_read' => 'Categorieën kunnen niet permanent als gelezen gemarkeerd worden',
	'upi2db_new_word' => 'Nieuwe berichten markeren?',
	'upi2db_new_word_explain' => 'Zou een onderwerp met een nieuw bericht met "Nieuw:" gemarkeerd moeten worden?',
	'upi2db_edit_word' => 'Bewerkte berichten markeren?',
	'upi2db_edit_word_explain' => 'Zou een onderwerp met bewerkte berichten met "Bewerkt:" gemarkeerd moeten worden?',
	'upi2db_unread_color' => 'Kleur de onderwerptitel als er nieuwe berichten zijn',
	'upi2db_unread_disp_posts' => 'Nieuwe en/of bewerkte berichten markeren',
	'Click_return_search' => 'Klik %shier%s om naar de laatste pagina terug te keren',
	'Click_return_portal' => 'Klik %shier%s om naar het portaal terug te keren',
	'mark_edit' => 'Bericht als bewerkt markeren (wordt bij de andere gebruikers weer als ongelezen gemarkeerd)',
	'upi2db_news_is_mark_unread' => 'Nieuws wordt als ongelezen gemarkeerd',
	'upi2db_news_is_mark_read' => 'Nieuws wordt als gelezen gemarkeerd',
	'upi2db_mark_news_read' => 'Nieuws als gelezen markeren',
	'upi2db_mark_news_unread' => 'Nieuws als ongelezen markeren',
	'upi2db_search_mark_read' => 'AGM',
	'upi2db_submit_mark_read' => 'Als gelezen markeren',
	'upi2db_submit_topic_mark_read' => 'Geselecteerde onderwerpen zijn als gelezen gemarkeerd',

	'upi2db_mark_post_unread' => 'Berichten als ongelezen markeren',
	'upi2db_mark_post_unread_cant' => 'Dit bericht kan niet als ongelezen gemarkeerd worden.',
	'upi2db_mark_post_is_unread' => 'Bericht wordt als ongelezen gemarkeerd.',
	
	'upi2db_first_use_txt' => 'Je bent nu in staat om gebruik te maken van het UPI2DB-systeem en alle functies binnen het systeem. Je kan meer details vinden in onze FAQ.',
	
	'upi2db_u' => 'U',
	'upi2db_m' => 'M',
	'upi2db_p' => 'P',
	'upi2db_unread' => 'Ongelezen berichten',
	'upi2db_marked' => 'Gemarkeerde berichten',
	'upi2db_perm_read' => 'Permanent gelezen',
	)
);

?>