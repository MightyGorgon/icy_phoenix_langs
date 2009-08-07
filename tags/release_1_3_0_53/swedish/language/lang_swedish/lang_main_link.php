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
	'Site_links' => 'L�nkar',
	'Link_lock_submit_site' => 'Skickad webbplats var l�st',
	'Link_title' => 'Webbplats Namn',
	'Link_desc' => 'Webbplats Beskrivning',
	'Link_url' => 'Webbplats URL',
	'Link_logo_src' => 'Webbplats Logo (88x31 pixlar, storlek ej mer �n 10K), eller l�mna blank:',
	'Link_logo_src1' => 'Webbplats Logo (88x31 pixlar, storlek ej mer �n 10K):',
	'Links_Preview' => 'F�rhandsgranska',
	'Link_category' => 'Webbplats Kategori',
	'link_hits' => 'Tr�ffar',
	'Link_us' => 'L�nka till ',
	'Link_us_explain' => 'Du f�r g�rna l�nka till <b>%s</b>. Anv�nd f�ljande HTML:',
	'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" alt="%s" /></a>',
	'Link_register' => 'Skicka en webbplats',
	'Link_register_guest_rule' => 'Logga in som en registrerad anv�ndare s� kan de skicka en webbplats.',
	'Link_register_rule' => 'Du m�ste fylla i formul�ret nedan, och din webbplats l�ggs i v�r databas efter validering.',
	'Link_pm_notify_subject' => 'L�nk tillagd',
	'Link_pm_notify_message' => "\nL�nk %s tillagd,v�nligen g� till L�nk Management och validera den.",
	'Link_update_success' => 'Dina uppgifter l�mnades',
	'Link_update_fail' => 'Tyv�rr!! Din information var om�jlig att skicka in, v�nligen g� tillbaka och f�rs�k igen',
	'Link_incomplete' => 'Tyv�rr!! Du har inte fyllt i formul�ret komplett, v�nligen g� tillbaka och f�rs�k igen',
	'Link_intval_warning' => 'Tyv�rr!! Du kan inte skicka in flera webbplatser i rad, v�nligen f�rs�k igen senare',
	'Click_return_links' => 'Klicka %sH�r%s f�r att �terg� till L�nk Index',
	'Please_enter_your' => 'V�nligen Ange din ',
	'No_Logo_img' => '<span class="text_blue">&#8226;</span>', // You can edit color
	'No_Display_Links_Logo' => '<span class="text_red">&#8226;</span>', // Don't display Links logo
	'Links_home' => 'L�nkars Hem',
	'Search_site' => 'S�k Webbplats',
	'Search_site_title' => 'S�k Webbplats Namn/Beskrivning:',
	'Descend_by_hits' => 'Stiga ned�t genom Tr�ffar',
	'Descend_by_joindate' => 'Stiga ned�t genom datum',
	'Logo' => 'Logotype',
	'Site' => 'Webbplats',
	'Link_ME' => 'L�nk till oss',
	'Remember_Me' => 'Automatisk Inloggning',
	)
);

?>