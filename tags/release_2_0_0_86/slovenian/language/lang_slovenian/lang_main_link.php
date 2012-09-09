<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main_link.php 34 2009-05-07 22:45:10Z TheSteffen $
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
* TheSteffen, KugeLSichA, Tom, Carsten
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
	'Site_links' => 'Povezave',
	'Link_lock_submit_site' => 'Oddajo svoje povezave ni mogoce',
	'Link_title' => 'Ime strani',
	'Link_desc' => 'Opis strani',
	'Link_url' => 'URL',
	'Link_logo_src' => 'Logo (88x31 Pixel, ne vecji kot 10K), ali pustite prazno:',
	'Link_logo_src1' => 'Logo (88x31 Pixel, ne vecji kot 10K):',
	'Links_Preview' => 'Logo-Predogled',
	'Link_category' => 'Kategorija strani',
	'link_hits' => 'Zadetki',
	'Link_us' => 'Povezava do ',
	'Link_us_explain' => 'Prosim, po želji vstavite povezavo <b>%s</b>. uporabite sledeco kodo HTML:',
	'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" alt="%s" /></a>',
	'Link_register' => 'Pošlji spletno stran',
	'Link_register_guest_rule' => 'Vpiši se kot registriran uporabnik, nato lahko pošlješ spletno stran.',
	'Link_register_rule' => 'Morali boste ispolniti sledec obrazec, in vaša spletna stran se bo shranila v našo bazo podatkov po potdritvi.',
	'Link_pm_notify_subject' => 'Povezava dodana',
	'Link_pm_notify_message' => "\n povezava %s dodana,\n Prosimo pojdite do plošce za upravljanje povezav in jo potrdite.",
	'Link_update_success' => 'Vaše informacije so bile vpisane',
	'Link_update_fail' => 'Oprostite!! Vaših informacij nismo mogli vpisati, prosimo pojdite nazaj in poizkusite ponovno',
	'Link_incomplete' => 'Oprostite!! Niste popolno izpolnili obrazca, prosimo pojdite nazaj in poizkusite ponovno',
	'Link_intval_warning' => 'Sorry!! Nemorete predložiti vec strani zaporedno, prosimo pojdite nazaj in poizkusite ponovno',
	'Click_return_links' => 'Klikni %stukaj%s za vrnitev na Links Index',
	'Please_enter_your' => 'Prosimo vstavite vaš ',
	'No_Logo_img' => '<span class="text_blue">&#8226;</span>', // You can edit color
	'No_Display_Links_Logo' => '<span class="text_red">&#8226;</span>', // Ne prikaži povezave
	'Links_home' => 'Domace povezave',
	'Search_site' => 'Išci po strani',
	'Search_site_title' => 'Išci po strani Ime/Opis:',
	'Descend_by_hits' => 'Padajoce po zadetkih',
	'Descend_by_joindate' => 'Padajoce po datumu',
	'Logo' => 'Logo',
	'Site' => 'Stran',
	'Link_ME' => 'Povezava do na',
	'Remember_Me' => 'Avtomaticna prijava',

	)
);

?>