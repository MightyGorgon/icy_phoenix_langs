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
	'Site_links' => 'Enlaces',
	'Link_lock_submit_site' => 'La funci�n enviar enlaces ha sido deshabilitada.',
	'Link_title' => 'Nombre de la web',
	'Link_desc' => 'Descripci�n de la web',
	'Link_url' => 'URL de la web',
	'Link_logo_src' => 'Logotipo de la web (88x31 p�xeles, tama�o no superior a 10Kb), o dejar en blanco:',
	'Link_logo_src1' => 'Logotipo de la web (88x31 p�xeles, tama�o no superior a 10Kb):',
	'Links_Preview' => 'Vista previa del logotipo',
	'Link_category' => 'Categor�a de la web',
	'link_hits' => 'Veces visitadas',
	'Link_us' => 'Enlaza con ',
	'Link_us_explain' => 'Por favor, si�ntase libre de enlazar a <b>%s</b>. Use el siguiente c�digo HTML:',
	'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" alt="%s" /></a>',
	'Link_register' => 'Enviar enlace de su web',
	'Link_register_guest_rule' => 'S�lo los usuarios registrados y logueados pueden enviar el enlace a una web.',
	'Link_register_rule' => 'Tiene que completar el siguiente formulario. Despu�s, su web ser� almacenada en la base de datos hasta que sea validada y admitida por los administradores.',
	'Link_pm_notify_subject' => 'Enlace a�adido',
	'Link_pm_notify_message' => '\nEnlace %s a�adido.\nPor favor, vaya a la administraci�n de enlaces y val�delo.',
	'Link_update_success' => 'Su informaci�n ha sido enviada.',
	'Link_update_fail' => 'Lo sentimos, su informaci�n no ha podido ser enviada. Por favor, vuelva atr�s y reint�ntelo.',
	'Link_incomplete' => 'Lo sentimos, no ha completado el formulario. Por favor vuelva atr�s y reint�ntelo.',
	'Link_intval_warning' => 'Lo sentimos, no puede enviar varios enlaces seguidos con tan poco tiempo de margen. Por favor, espere un poco y vuelva a intentarlo.',
	'Click_return_links' => 'Pulse %saqu�%s para volver al �ndice de enlaces',
	'Please_enter_your' => 'Por favor introduzca su',
	'No_Logo_img' => '<span class="text_blue">&#8226;</span>', // You can edit color
	'No_Display_Links_Logo' => '<span class="text_red">&#8226;</span>', // Don't display Links logo
	'Links_home' => '�ndice de enlaces',
	'Search_site' => 'Buscar web',
	'Search_site_title' => 'Buscar por nombre/descripci�n:',
	'Descend_by_hits' => 'Descendente por accesos',
	'Descend_by_joindate' => 'Descendente por fecha',
	'Logo' => 'Logo',
	'Site' => 'Sitio',
	'Link_ME' => 'Enl�ceme',
	'Remember_Me' => 'Recordarme',
	)
);

?>