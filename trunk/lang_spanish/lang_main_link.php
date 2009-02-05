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
	'Link_lock_submit_site' => 'La función enviar enlaces ha sido deshabilitada.',
	'Link_title' => 'Nombre de la web',
	'Link_desc' => 'Descripción de la web',
	'Link_url' => 'URL de la web',
	'Link_logo_src' => 'Logotipo de la web (88x31 píxeles, tamaño no superior a 10Kb), o dejar en blanco:',
	'Link_logo_src1' => 'Logotipo de la web (88x31 píxeles, tamaño no superior a 10Kb):',
	'Links_Preview' => 'Vista previa del logotipo',
	'Link_category' => 'Categoría de la web',
	'link_hits' => 'Veces visitadas',
	'Link_us' => 'Enlaza con ',
	'Link_us_explain' => 'Por favor, siéntase libre de enlazar a <b>%s</b>. Use el siguiente código HTML:',
	'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" alt="%s" /></a>',
	'Link_register' => 'Enviar enlace de su web',
	'Link_register_guest_rule' => 'Sólo los usuarios registrados y logueados pueden enviar el enlace a una web.',
	'Link_register_rule' => 'Tiene que completar el siguiente formulario. Después, su web será almacenada en la base de datos hasta que sea validada y admitida por los administradores.',
	'Link_pm_notify_subject' => 'Enlace añadido',
	'Link_pm_notify_message' => '\nEnlace %s añadido.\nPor favor, vaya a la administración de enlaces y valídelo.',
	'Link_update_success' => 'Su información ha sido enviada.',
	'Link_update_fail' => 'Lo sentimos, su información no ha podido ser enviada. Por favor, vuelva atrás y reinténtelo.',
	'Link_incomplete' => 'Lo sentimos, no ha completado el formulario. Por favor vuelva atrás y reinténtelo.',
	'Link_intval_warning' => 'Lo sentimos, no puede enviar varios enlaces seguidos con tan poco tiempo de margen. Por favor, espere un poco y vuelva a intentarlo.',
	'Click_return_links' => 'Pulse %saquí%s para volver al índice de enlaces',
	'Please_enter_your' => 'Por favor introduzca su',
	'No_Logo_img' => '<span class="text_blue">&#8226;</span>', // You can edit color
	'No_Display_Links_Logo' => '<span class="text_red">&#8226;</span>', // Don't display Links logo
	'Links_home' => 'Índice de enlaces',
	'Search_site' => 'Buscar web',
	'Search_site_title' => 'Buscar por nombre/descripción:',
	'Descend_by_hits' => 'Descendente por accesos',
	'Descend_by_joindate' => 'Descendente por fecha',
	'Logo' => 'Logo',
	'Site' => 'Sitio',
	'Link_ME' => 'Enláceme',
	'Remember_Me' => 'Recordarme',
	)
);

?>