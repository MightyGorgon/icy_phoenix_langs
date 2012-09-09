<?php
/**
*
* @package Intero
* @version $Id: lang_main_upi2db.php 23 2011-07-9 19:35:255 
* @copyright (c) 2011
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
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
	'Search_no_new' => 'Od zadnjega obiska ni bilo nic novih ali editiranih datotek',
	'Neue_Beitraege' => 'Neprebrane objave',
	'Editierte_Beitraege' => 'Editirane objave',
	'Ungelesen_Markiert' => 'Oznaceno kot neprebrano',
	'Permanent_Gelesen' => 'Vedno prebrano',
	'Posts' => 'Objave',
	'Unreaded_post' => 'Neprebrana objava',
	'New_edited_post' => 'Editirana objava',
	'New_edited_posts' => 'Editirane objave',
	'Unreaded_posts' => 'Neprebrane objave',
	'upi2db_post_edit' => 'Editirano',
	'upi2db_post_new' => 'Novo',
	'upi2db_post_and' => ' &amp; ',
	'upi2db_always_read' => 'Oznaci temo kot za stalno prebrano',
	'upi2db_always_read_unset' => 'Odznaci temo kot za stalno prebrano',
	'upi2db_always_read_cant_set' => 'Tema ne more biti oznacena kot za stalno prebrana',
	'upi2db_always_read_no_more' => 'Nimate dovoljenja oznaciti dodatnih tem kot za stalno prebrane.',
	'upi2db_always_read_is_set' => 'Tema je bila oznacena kot za vselej prebrana',
	'upi2db_always_read_is_unset' => 'Tema ni vec oznacena kot za vselej prebrana',
	'no_always_read' => 'Nobena tema ni bila oznacena kot za vselej prebrana',
	'x_always_read' => 'Prikaži kot za vselej prebrane teme ',
	'upi2db_which_system' => 'Kateri sistem želite uporabljati za upravljanje z novimi objavami?',
	'upi2db_which_system_explain' => 'Podrobne informacije o razlicnih sistemih je mogoce najti v <a href="faq.' . PHP_EXT . '">FAQ\'s</a>.',
	'cookie_system' => 'Piškotek sistem',
	'upi2db_system' => 'UPI2DB Sistem',
	'upi2db_mark_post' => 'Oznaci to objavo',
	'upi2db_unmark_post' => 'Odznaci to objavo',
	'upi2db_post_cant_mark' => 'Te objave ni mogoce oznaciti.',
	'upi2db_post_marked' => 'Objava je oznacena.',
	'upi2db_post_unmarked' => 'Objava ni vec oznacena.',
	'upi2db_post_cant_mark' => 'Nimate dovoljenja za oznacevanje dodatnih objav.',
	'always_read_icon' => 'Za vselej prebrano',
	'upi2db_always_read_forum_short' => 'Oznaci temo kot za stalno prebrano',
	'upi2db_always_read_forum' => 'Oznaci forum kot za stalno prebrano',
	'upi2db_always_read_forum_unset_short' => 'Odznaci kot za stalno prebrano',
	'upi2db_always_read_forum_unset' => 'Odznaci forum kot za stalno prebrano',
	'upi2db_forum_is_always_read' => 'Forum je bil oznacena kot za vselej prebran',
	'upi2db_forum_isnt_always_read' => 'Forum ni vec oznacen kot za vselej prebran',
	'upi2db_cat_cant_mark_always_read' => 'Kategorije ne morejo biti oznacena kot za stalno prebrane',
	'upi2db_new_word' => 'Dodatne oznake za nove objave?',
	'upi2db_new_word_explain' => 'Ali naj bo tema z novimi objavami oznacena z "Novo:" ?',
	'upi2db_edit_word' => 'Dodatne oznake za editirane objave?',
	'upi2db_edit_word_explain' => 'Ali naj bo tema z editiranimi objavami oznacena z "Editirano:"',
	'upi2db_unread_color' => 'Obarvaj naslov teme, ce so notri nove objave',
	'upi2db_unread_disp_posts' => 'Pokaži nove in/ali editirane Objave',
	'Click_return_search' => '%sKlikni Tukaj%s za vrnitev na prejšnjo stran',
	'Click_return_portal' => '%sKlikni Tukaj%s za vrnitev na portal',
	'mark_edit' => 'Oznaci objavo kot editirano (bo oznacena kot neprebrana za druge uporabnike)',
	'upi2db_news_is_mark_unread' => 'Novice oznacene kot neprebrane',
	'upi2db_news_is_mark_read' => 'Novice oznacene kot prebrane',
	'upi2db_mark_news_read' => 'Oznaci novice kot prebrane',
	'upi2db_mark_news_unread' => 'Oznaci novice kot neprebrane',
	'upi2db_search_mark_read' => 'OKP',
	'upi2db_submit_mark_read' => 'Oznaci kot prebrane',
	'upi2db_submit_topic_mark_read' => 'Izbrane teme so bile oznacene kot prebrane',

	'upi2db_mark_post_unread' => 'Oznaci to objavo kot neprebrano',
	'upi2db_mark_post_unread_cant' => 'Ta objava ne more biti oznacena kot neprebrana.',
	'upi2db_mark_post_is_unread' => 'Objava je bila oznacena kot neprebrana.',

	'upi2db_first_use_txt' => 'Sedaj imate možnost uporabiti UPI2DB sistem in vse njegove funkcije. Vec informacij lahko dobite na FAQ strani.',

	'upi2db_u' => 'N',
	'upi2db_m' => 'O',
	'upi2db_p' => 'Z',
	'upi2db_unread' => 'Neprebrane objave',
	'upi2db_marked' => 'Oznacene objave',
	'upi2db_perm_read' => 'Za vselej prebrano',

	)
);

?>