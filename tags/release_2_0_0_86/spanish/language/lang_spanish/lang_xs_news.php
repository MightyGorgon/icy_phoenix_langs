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
* UseLess
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
	'n_title' => 'Administraci&oacute;n de noticias Icy Phoenix',

	'n_main_title' => 'Art&iacute;culos de noticias Icy Phoenix.',
	'n_main_title_explain' => 'Desde este formulario puede crear o editar noticias.<br /><br />Si quiere cambiar el estado a mostrar de alguna en particular, deber editarla.',

// Config
	'n_config_title' => 'Configuraci&oacute;n de noticias Icy Phoenix',
	'n_config_title_explain' => 'Desde aqu&iacute; puede cambiar los ajustes de noticias Icy Phoenix.',
	'n_config_updated' => 'Configuraci&oacute;n de noticias actualizada.',

// Add menu item
	'n_add_page_title' => 'A&ntilde;adir noticia',
	'n_add_page_title_explain' => 'Use este formulario para crear una nueva noticia.',
	'n_add_header' => 'A&ntilde;adir nueva noticia',
	'n_news_item_added' => 'Noticia a&ntilde;adida.',

// edit menu item
	'n_edit_page_title' => 'Editar noticia',
	'n_edit_page_title_explain' => 'Usando este formulario puede editar la noticia.',
	'n_edit_header' => 'Editar noticia existente',

// Delete
	'n_news_delete' => 'Borrar noticia.',
	'n_news_delete_explain' => 'Usando este formulario puede borrar una noticia.',
	'n_confirm_delete_news' => '&iquest;Esta usted seguro de querer borrar esta noticia?',

// General Settings used by Add/Edit Menu item
	'n_news_item' => 'Noticias',
	'n_news_item_display' => '&iquest;Mostrar este art&iacute;culo?',

	'n_news_date' => 'Fecha de noticia',

	'n_create_item' => 'Crear noticia',
	'n_create_item_null' => 'No puede crear una noticia sin el texto de la noticia.',

	'n_news_smilies' => '&iquest;Habilitar emoticonos en este mensaje?',
	'n_smilies_button' => 'Emoticonos',

	'xs_no_news' => 'No hay noticias.',
	'xs_news_invalid_date' => 'Usted ha incorporado una fecha invlida, el formato es: dd/mm/yyyy.',
	'n_news_updated' => 'Las noticias han sido actualizadas',
	'n_click_return_newslist' => 'Pulse %saqu&iacute;%s para volver a la lista de noticias',

// News XML Settings
	'n_xml_title' => 'Administraci&oacute;n de entrada de noticias Icy Phoenix',
	'n_xml_title_explain' => 'Desde aqu&iacute; puede administrar la entrada de noticias.',
	'n_xml_title_explain_0' => 'Si el interruptor principal de la entrada de noticias (su estado se muestra arriba) se fija en \'Off\', no sirve para nada cambiar el estado de una entrada de noticias concreta: el ajuste del interruptor principal prevalece sobre los ajustes mostrados abajo.<br /><br />Pero si el interruptor principal est \'On\' s&iacute; puede cambiar el estado de mostrar una u otra entrada de noticias.',
	'n_xml_sub_title' => 'Entrada de noticias Icy Phoenix.',
	'n_xml_master_switch' => 'El interruptor principal de la entrada de noticias est <b>%s</b>, lo que significa que <b>%s</b> que se muestren entradas de noticias.',
	'n_xml_ms_will' => 'Quiero',
	'n_xml_ms_not' => 'No quiero',

	'xs_news_ticker_settings' => 'Ajustes para esta entrada de noticia',
	'xs_news_ticker_title' => 'T&iacute;tulo para esta entrada de noticia:',
	'xs_news_ticker_title_explain' => 'Usado en la lista de sindicaci&oacute;n de noticias XML para identificar cada noticia.',
	'xs_news_ticker_show' => '&iquest;Mostrar esta entrada de noticia?',
	'xs_news_ticker_feed' => 'Sindicaci&oacute;n de noticias XML',
	'xs_news_ticker_feed_explain' => 'La URL de donde la entrada debe conseguir las noticias para desplazar, o el texto que usted desea desplazar.',
	'xs_news_ticker_is_feed' => '&iquest;Esto es una entrada de noticia XML?',
	'xs_news_ticker_is_feed_explain' => 'Si lo fija como \'S&iacute;\' deber introducir una URL vlida para sindicar. Si lo fija como \'No\' cualquier texto introducido en el rea de texto ser desplazado (como si fuera una entrada de noticia).',
	'xs_news_ticker_wh' => 'El alto x ancho de la entrada de noticia.',
	'xs_news_ticker_wh_explain' => 'Usted puede especificar la altura x anchura de la entrada de noticia. Por defecto es 98% x 20: la altura est basada en el porcentaje de la altura de la tabla, mientras que la anchura est en pixels.',
	'xs_news_ticker_fontsize' => 'Tama&ntilde;o de fuente para esta entrada de noticia.',
	'xs_news_ticker_fontsize_explain' => 'Usted puede sobrescribir el tama&ntilde;o de fuente que especific&oacute; en la hoja de estilo, el ajuste de 0 (cero) desactiva esta caracter&iacute;stica.',
	'xs_news_ticker_ss' => 'Velocidad de desplazamiento',
	'xs_news_ticker_ss_explain' => 'Cuanto ms alto es el valor, mas rpido es el desplazamiento',
	'xs_news_ticker_sd' => 'Direcci&oacute;n del desplazamiento',
	'xs_news_left' => 'Izquierda',
	'xs_news_right' => 'Derecha',

// Add menu item
	'n_xml_add_page_title' => 'A&ntilde;adir noticias XML sindicadas (desde otra web o foro)',
	'n_xml_add_page_title_explain' => 'Use el formulario para crear una noticia XML sindicada.',
	'n_xml_add_header' => 'A&ntilde;adir sindicaci&oacute;n de noticia XML',
	'n_xml_news_item_added' => 'Sindicaci&oacute;n de noticias a&ntilde;adida.',

// edit menu item
	'n_xml_edit_page_title' => 'Editar sindicaci&oacute;n de noticias XML',
	'n_xml_edit_page_title_explain' => 'Usando este formulario puede editar las noticias XML sindicadas de otros sitios.',
	'n_xml_edit_header' => 'Editar sindicaci&oacute;n de noticia XML existente',

// Delete
	'n_xml_news_delete' => 'Borrar sindicaci&oacute;n de noticias XML.',
	'n_xml_news_delete_explain' => 'Usando este formulario puede borrar sindicaciones de noticias XML.',
	'n_xml_confirm_delete_news' => '&iquest;Esta seguro de querer borrar esta sindicaci&oacute;n de noticias?',

// General Settings used by Add/Edit Menu item
	'n_xml_news_item' => 'Nuevo art&iacute;culo',
	'n_xml_news_item_display' => '&iquest;Mostrar este art&iacute;culo?',

	'n_xml_create_item' => 'Crear un art&iacute;culo de noticia',
	'n_xml_create_item_null' => 'No puede crear una entrada de noticia sin una URL de sindicaci&oacute;n XML o texto a desplazar.',

	'n_xml_no_feeds' => 'No hay sindicados de noticias XML.',
	'n_xml_news_updated' => 'La entrada ha sido actualizada',
	'n_xml_click_return_newslist' => 'Pulse %saqu&iacute;%s para volver a la lista de noticias de entrada',

	'n_xml_show' => 'Mostrar',
	'n_xml_title' => 'T&iacute;tulo del XML',
	)
);

?>