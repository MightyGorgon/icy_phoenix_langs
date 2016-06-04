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
	'Link_lock_submit_site' => 'L\'inserimento links &egrave; bloccato',
	'Link_title' => 'Nome sito',
	'Link_desc' => 'Descrizione sito',
	'Link_url' => 'URL del sito',
	'Link_logo_src' => 'Logo (88x31 pixels, Max 10K)',
	'Link_logo_src1' => 'Logo sito (88x31 pixels, dimensione massima  10K):',
	'Links_Preview' => 'Anteprima Logo',
	'Link_category' => 'Categoria',
	'link_hits' => 'Clicks',
	'link_submiter' => 'Segnalato da',
	'Link_us' => 'Link a ',
	'Link_us_explain' => 'Se vuoi inserire un link a <b>%s</b> nel tuo sito, usa il seguente link:',
	'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" alt="%s" /></a>',
	'Link_register' => 'Inserisci link',
	'Link_register_guest_rule' => 'Per inserire un link devi essere registrato.',
	'Link_register_rule' => 'Devi compilare il form seguente, e il tuo sito sar&agrave; aggiunto al nostro database dopo la validazione.',
	'Link_pm_notify_subject' => 'Link inserito',
	'Link_pm_notify_message' => "\n Link %s inserito,\n devi validarlo nel sezione Gestione Link.",
	'Link_update_success' => 'Invio informazioni completato',
	'Link_update_fail' => 'Spiacente, non &egrave; stato possibile inviare le tue informazioni, torna indietro e riprova',
	'Link_incomplete' => 'Spiacente, non hai completato il form, per favore riprova',
	'Link_intval_warning' => 'Spiacente, non puoi inviarci tutti questi siti in cos&igrave; breve tempo. Riprova pi&ugrave; tardi',
	'Click_return_links' => 'Clicca %sQUI%s per tornare all\'Indice dei Links',
	'Please_enter_your' => 'Inserisci il tuo ',
	'No_Logo_img' => '<span class="text_blue">&#8226;</span>', // You can edit color
	'No_Display_Links_Logo' => '<span class="text_red">&#8226;</span>', // Don't display Links logo
	'Links_home' => 'Link Home',
	'Search_site' => 'Cerca sito',
	'Search_site_title' => 'Cerca per nome sito/Descrizione:',
	'Descend_by_hits' => 'Discendente per visite',
	'Descend_by_joindate' => 'Discendente per data',
	'Logo' => 'Logo',
	'Site' => 'Sito',
	'Link_ME' => 'Linkami',
	'Remember_Me' => 'Login Automatico',
	)
);

?>