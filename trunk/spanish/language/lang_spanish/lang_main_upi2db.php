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
* BigRib (bigrib@gmx.de)
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
	'Search_no_new' => 'No hay nuevos mensajes desde su última visita',
	'Neue_Beitraege' => 'Mensajes no leídos',
	'Editierte_Beitraege' => 'Mensajes editados',
	'Ungelesen_Markiert' => 'Marcado como no leído',
	'Permanent_Gelesen' => 'Siempre leído',
	'Posts' => 'Mensajes',
	'Unreaded_post' => 'Mensaje no leído',
	'New_edited_post' => 'Mensaje editado',
	'New_edited_posts' => 'Mensajes editados',
	'Unreaded_posts' => 'Mensajes sin leer',
	'upi2db_post_edit' => 'Editado',
	'upi2db_post_new' => 'Nuevo',
	'upi2db_post_and' => ' &amp; ',
	'upi2db_always_read' => 'Marcar este tema como leído permanentemente',
	'upi2db_always_read_unset' => 'Desmarcar este tema como leído permanentemente',
	'upi2db_always_read_cant_set' => 'El tema no puede ser marcado como leído permanentemente',
	'upi2db_always_read_no_more' => 'No tiene permitido marcar temas adicionales como leído permanentemente.',
	'upi2db_always_read_is_set' => 'Este tema está marcado como leído permanentemente',
	'upi2db_always_read_is_unset' => 'Este tema no está marcado como leído permanentemente',
	'no_always_read' => 'No hay temas marcados como leídos permanentemente',
	'x_always_read' => 'Ver como temas marcados leídos permanentemente ',
	'upi2db_which_system' => '&iquest;Qué sistema desea utilizar para manejar los mensajes nuevos?',
	'upi2db_which_system_explain' => 'Información detallada acerca de los diferentes sistemas la puede encontrar en las <a href="faq.' . PHP_EXT . '">FAQ\'s</a>.',
	'cookie_system' => 'Sistema cookie',
	'upi2db_system' => 'Sistema UPI2DB',
	'upi2db_mark_post' => 'Marcar este mensaje',
	'upi2db_unmark_post' => 'Desmarcar este mensaje',
	'upi2db_post_cant_mark' => 'Este mensaje no puede ser marcado.',
	'upi2db_post_marked' => 'El mensaje está marcado.',
	'upi2db_post_unmarked' => 'El mensaje ya está marcado.',
	'upi2db_post_cant_mark' => 'No tiene permitido marcar mensajes adicionales.',
	'always_read_icon' => 'Leído permanentemente',
	'upi2db_always_read_forum_short' => 'Marcar leído permanentemente',
	'upi2db_always_read_forum' => 'Marcar este foro como leído permanentemente',
	'upi2db_always_read_forum_unset_short' => 'Desmarcar leído permanentemente',
	'upi2db_always_read_forum_unset' => 'Desmarcar este foro como leído permanentemente',
	'upi2db_forum_is_always_read' => 'Este foro está marcado como leído permanentemente',
	'upi2db_forum_isnt_always_read' => 'Este foro no está marcado como leído permanentemente',
	'upi2db_cat_cant_mark_always_read' => 'Las categorías no se pueden fijar como leído permanentemente ',
	'upi2db_new_word' => '&iquest;Marcas adicionales para los mensajes nuevos?',
	'upi2db_new_word_explain' => 'Si un tema tiene mensajes nuevos, será marcado con "Nuevo:"',
	'upi2db_edit_word' => '&iquest;Marcas adicionales para los mensajes editados?',
	'upi2db_edit_word_explain' => 'Si un tema tiene mensajes editados, será marcado con "Editado:"',
	'upi2db_unread_color' => 'Colorear el titulo del tema si hay mensajes nuevos',
	'upi2db_unread_disp_posts' => 'Mostrar nuevos y/o mensajes editados',
	'Click_return_search' => 'Pulse %saquí%s para volver a la última página',
	'Click_return_portal' => 'Pulse %saquí%s para volver al portal',
	'mark_edit' => 'Marcar mensaje como editado (será coloreado como no leído para otros usuarios)',
	'upi2db_news_is_mark_unread' => 'Nuevos marcados como no leídos',
	'upi2db_news_is_mark_read' => 'Nuevos marcados como leídos',
	'upi2db_mark_news_read' => 'Marcar nuevos como leídos',
	'upi2db_mark_news_unread' => 'Marcar nuevos como no leídos',
	'upi2db_search_mark_read' => 'MTL',
	'upi2db_submit_mark_read' => 'Marcar como leído',
	'upi2db_submit_topic_mark_read' => 'Los temas seleccionados han sido marcados como leídos',

	'upi2db_mark_post_unread' => 'Marcar este mensaje como no leído',
	'upi2db_mark_post_unread_cant' => 'Este mensaje no puede ser marcado como no leído.',
	'upi2db_mark_post_is_unread' => 'Mensaje marcado como no leído.',

	'upi2db_first_use_txt' => 'Ahora puede utilizar el sistema UPI2DB y todas sus características. Encontrará más detalles en la página de Preguntas Frecuentes.',

	'upi2db_u' => 'S',
	'upi2db_m' => 'M',
	'upi2db_p' => 'P',
	'upi2db_unread' => 'Mensajes no leídos',
	'upi2db_marked' => 'Mensajes marcados',
	'upi2db_perm_read' => 'Lectura permanente',
	)
);

?>