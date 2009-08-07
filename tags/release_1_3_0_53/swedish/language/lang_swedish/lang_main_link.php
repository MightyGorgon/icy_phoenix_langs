<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main_link.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
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
	'Site_links' => 'Länkar',
	'Link_lock_submit_site' => 'Skickad webbplats var låst',
	'Link_title' => 'Webbplats Namn',
	'Link_desc' => 'Webbplats Beskrivning',
	'Link_url' => 'Webbplats URL',
	'Link_logo_src' => 'Webbplats Logo (88x31 pixlar, storlek ej mer än 10K), eller lämna blank:',
	'Link_logo_src1' => 'Webbplats Logo (88x31 pixlar, storlek ej mer än 10K):',
	'Links_Preview' => 'Förhandsgranska',
	'Link_category' => 'Webbplats Kategori',
	'link_hits' => 'Träffar',
	'Link_us' => 'Länka till ',
	'Link_us_explain' => 'Du får gärna länka till <b>%s</b>. Använd följande HTML:',
	'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" alt="%s" /></a>',
	'Link_register' => 'Skicka en webbplats',
	'Link_register_guest_rule' => 'Logga in som en registrerad användare så kan de skicka en webbplats.',
	'Link_register_rule' => 'Du måste fylla i formuläret nedan, och din webbplats läggs i vår databas efter validering.',
	'Link_pm_notify_subject' => 'Länk tillagd',
	'Link_pm_notify_message' => "\nLänk %s tillagd,vänligen gå till Länk Management och validera den.",
	'Link_update_success' => 'Dina uppgifter lämnades',
	'Link_update_fail' => 'Tyvärr!! Din information var omöjlig att skicka in, vänligen gå tillbaka och försök igen',
	'Link_incomplete' => 'Tyvärr!! Du har inte fyllt i formuläret komplett, vänligen gå tillbaka och försök igen',
	'Link_intval_warning' => 'Tyvärr!! Du kan inte skicka in flera webbplatser i rad, vänligen försök igen senare',
	'Click_return_links' => 'Klicka %sHär%s för att återgå till Länk Index',
	'Please_enter_your' => 'Vänligen Ange din ',
	'No_Logo_img' => '<span class="text_blue">&#8226;</span>', // You can edit color
	'No_Display_Links_Logo' => '<span class="text_red">&#8226;</span>', // Don't display Links logo
	'Links_home' => 'Länkars Hem',
	'Search_site' => 'Sök Webbplats',
	'Search_site_title' => 'Sök Webbplats Namn/Beskrivning:',
	'Descend_by_hits' => 'Stiga nedåt genom Träffar',
	'Descend_by_joindate' => 'Stiga nedåt genom datum',
	'Logo' => 'Logotype',
	'Site' => 'Webbplats',
	'Link_ME' => 'Länk till oss',
	'Remember_Me' => 'Automatisk Inloggning',
	)
);

?>