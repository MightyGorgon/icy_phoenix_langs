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
	'Site_links' => 'Links',
	'Link_lock_submit_site' => 'Het insturen van eigen links is niet mogelijk',
	'Link_title' => 'Sitenaam',
	'Link_desc' => 'Siteomschrijving',
	'Link_url' => 'URL',
	'Link_logo_src' => 'Logo (88x31 pixels, niet groter als 10K), of laat leeg:',
	'Link_logo_src1' => 'Logo (88x31 pixels, niet groter als 10K):',
	'Links_Preview' => 'Logovoorbeeld',
	'Link_category' => 'Categorie',
	'link_hits' => 'Hits',
	'Link_us' => 'Link naar ',
	'Link_us_explain' => 'Wanneer je naar <b>%s</b> wilt linken, gebruik dan de volgende HTML-code:',
	'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" alt="%s" /></a>',
	'Link_register' => 'Site insturen',
	'Link_register_guest_rule' => 'Als geregistreerde gebruiker moet je zijn ingelogd, om jouw site in te kunnen sturen.',
	'Link_register_rule' => 'Vul alstublieft dat formulier in, om een site in te sturen. Na goedkeuring wordt je site in onze linkdatabase toegevoegd.',
	'Link_pm_notify_subject' => 'Nieuwe link toevoegen',
	'Link_pm_notify_message' => "\n Link %s toegevoegd,\n ga naar linksbeheer, om hem te bevestigen.",
	'Link_update_success' => 'Jouw informatie is bevestigd',
	'Link_update_fail' => 'Jouw informatie kan niet worden opgeslagen. Ga terug en probeer het nog een keer.',
	'Link_incomplete' => 'Je hebt dit formulier niet volledig ingevuld. Ga terug en probeer het nog een keer.',
	'Link_intval_warning' => 'Je kan niet meerdere sites in een minuut insturen. Probeer het later nog een keer.',
	'Click_return_links' => 'Klik %shier%s om terug te keren naar linksindex',
	'Please_enter_your' => 'Geef jouw ',
	'No_Logo_img' => '<span class="text_blue">&#8226;</span>', // You can edit color
	'No_Display_Links_Logo' => '<span class="text_red">&#8226;</span>', // Don't display Links logo
	'Links_home' => 'Links startpagina',
	'Search_site' => 'Zoek site',
	'Search_site_title' => 'Zoek sitenaam/beschrijving:',
	'Descend_by_hits' => 'Oplopend op hits',
	'Descend_by_joindate' => 'Oplopend op datum',
	'Logo' => 'Logo',
	'Site' => 'Site',
	'Link_ME' => 'Link naar ons',
	'Remember_Me' => 'Automatisch inloggen',
	)
);

?>