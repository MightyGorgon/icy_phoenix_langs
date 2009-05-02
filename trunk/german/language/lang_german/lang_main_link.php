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
	'Site_links' => 'Links',
	'Link_lock_submit_site' => 'Das Einreichen eigener Links ist nicht m�glich',
	'Link_title' => 'Seitenname',
	'Link_desc' => 'Seitenbeschreibung',
	'Link_url' => 'URL',
	'Link_logo_src' => 'Logo (88x31 Pixel, nicht gr��er als 10K), oder leer lassen:',
	'Link_logo_src1' => 'Logo (88x31 Pixel, nicht gr��er als 10K):',
	'Links_Preview' => 'Logo-Vorschau',
	'Link_category' => 'Kategorie',
	'link_hits' => 'Hits',
	'Link_us' => 'Link zu uns',
	'Link_us_explain' => 'Wenn du zu <b>%s</b> verlinken m�chtest, benutze den folgenden HTML-Code:',
	'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" border="0" alt="%s" /></a>',
	'Link_register' => 'Seite vorschlagen',
	'Link_register_guest_rule' => 'Als registrierter Benutzer musst du dich einloggen, um deine Seite vorschlagen zu k�nnen.',
	'Link_register_rule' => 'F�lle bitte das Formular aus, um eine Seite vorzuschlagen. Nach einer �berpr�fung wird deine Seite zu unserer Datenbank hinzugef�gt.',
	'Link_pm_notify_subject' => 'Neuer Link hinzugef�gt',
	'Link_pm_notify_message' => '\n Link %s hinzugef�gt,\n bitte gehe zum Link-Management, um ihn zu best�tigen.',
	'Link_update_success' => 'Deine Informationen wurden eingereicht',
	'Link_update_fail' => 'Deine Informationen konnten nicht gespeichert werden. Bitte gehe zur�ck und versuche es noch einmal.',
	'Link_incomplete' => 'Du hast das Formular nicht vollst�ndig ausgef�llt. Bitte gehe zur�ck und versuche es noch einmal.',
	'Link_intval_warning' => 'Du kannst nicht meherere Seiten innerhalb einer Minute einreichen. Bitte versuche es sp�ter noch einmal.',
	'Click_return_links' => 'Klicke %shier%s, um zum Links-Index zur�ckzukehren',
	'Please_enter_your' => 'Gib ein deinen ',
	'No_Logo_img' => '<font color=blue>&#8226;</font>', // Du kannst die Farbe bearbeiten
	'No_Display_Links_Logo' => '<font color=brown>&#8226;</font>', // Keine Anzeige des Links Logos
	'Links_home' => 'Links Startseite',
	'Search_site' => 'Suchseite',
	'Search_site_title' => 'Seitenname/-beschreibung suchen:',
	'Descend_by_hits' => 'Absteigend bei Hits',
	'Descend_by_joindate' => 'Absteigend bei Datum',
	'Logo' => 'Logo',
	'Site' => 'Seite',
	'Link_ME' => 'Link zu uns',
	'Remember_Me' => 'Automatische Anmeldung',
	)
);

?>