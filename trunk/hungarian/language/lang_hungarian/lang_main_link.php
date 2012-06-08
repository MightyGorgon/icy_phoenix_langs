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
* OOHOO < webdev@phpbb-tw.net >
* Stefan2k1 and ddonker from www.portedmods.com
* CRLin from http://mail.dhjh.tcc.edu.tw/~gzqbyr/
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
	'Site_links' => 'Linkek',
	'Link_lock_submit_site' => 'Oldal beküldése jelenleg nem lehetséges',
	'Link_title' => 'Oldal neve',
	'Link_desc' => 'Oldal leírása',
	'Link_url' => 'Oldal URL',
	'Link_logo_src' => 'Oldal logó (88x31 pixel; nem nagyobb, mint 10K), vagy hagyd üresen:',
	'Link_logo_src1' => 'Oldal logó (88x31 pixel; méret nem nagyobb, mint 10K):',
	'Links_Preview' => 'Előnézet',
	'Link_category' => 'Oldal kategóriája',
	'link_hits' => 'Találatok',
	'Link_us' => 'Linkelés ',
	'Link_us_explain' => 'Szabadon belinkelheted az <b>%s</b> oldalt az alábbi HTML kód segítségével:',
	'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" alt="%s" /></a>',
	'Link_register' => 'Oldal beküldése',
	'Link_register_guest_rule' => 'Oldal beküldéséhez regisztrálj, vagy jelentkezz be',
	'Link_register_rule' => 'Töltsd ki az alábbi űrlapot, és a megerősítés után az oldal kikerül(het) a linkek közé.',
	'Link_pm_notify_subject' => 'Link hozzáadva',
	'Link_pm_notify_message' => "\nLink %s hozzáadva,\n menj a Link kezelőbe a megerősítéshez.",
	'Link_update_success' => 'Az információ elküldve',
	'Link_update_fail' => 'Elnézést!! Az információ elküldése sikertelen. Próbáld meg újra.',
	'Link_incomplete' => 'Elnézést!! Nem töltötted ki teljesen az űrlapot. Menj vissza, és próbáld meg újra.',
	'Link_intval_warning' => 'Elnézést! Nem küldhetsz mégegy linket ilyen hamar. Próbáld meg később.',
	'Click_return_links' => 'Kattints %side%s, hogy visszatérj a Linkek főoldalra',
	'Please_enter_your' => 'Add meg a(z) ',
	'No_Logo_img' => '<span class="text_blue">&#8226;</span>', // You can edit color
	'No_Display_Links_Logo' => '<span class="text_red">&#8226;</span>', // Don't display Links logo
	'Links_home' => 'Linkek főoldal',
	'Search_site' => 'Oldal keresése',
	'Search_site_title' => 'Oldal név/leírás keresése:',
	'Descend_by_hits' => 'Találatok szerint csökkenő',
	'Descend_by_joindate' => 'Dátum szerint csökkenő',
	'Logo' => 'Logó',
	'Site' => 'Oldal',
	'Link_ME' => 'Linkelj ránk',
	'Remember_Me' => 'Automatikus belépés',
	)
);

?>