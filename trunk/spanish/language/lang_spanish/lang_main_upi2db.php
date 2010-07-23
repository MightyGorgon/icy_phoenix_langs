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
	'Search_no_new' => 'No hay nuevos mensajes desde su &uacute;ltima visita',
	'Neue_Beitraege' => 'Mensajes no le&iacute;dos',
	'Editierte_Beitraege' => 'Mensajes editados',
	'Ungelesen_Markiert' => 'Marcado como no le&iacute;do',
	'Permanent_Gelesen' => 'Siempre le&iacute;do',
	'Posts' => 'Mensajes',
	'Unreaded_post' => 'Mensaje no le&iacute;do',
	'New_edited_post' => 'Mensaje editado',
	'New_edited_posts' => 'Mensajes editados',
	'Unreaded_posts' => 'Mensajes sin leer',
	'upi2db_post_edit' => 'Editado',
	'upi2db_post_new' => 'Nuevo',
	'upi2db_post_and' => ' &amp; ',
	'upi2db_always_read' => 'Marcar este tema como le&iacute;do permanentemente',
	'upi2db_always_read_unset' => 'Desmarcar este tema como le&iacute;do permanentemente',
	'upi2db_always_read_cant_set' => 'El tema no puede ser marcado como le&iacute;do permanentemente',
	'upi2db_always_read_no_more' => 'No tiene permitido marcar temas adicionales como le&iacute;do permanentemente.',
	'upi2db_always_read_is_set' => 'Este tema est&aacute; marcado como le&iacute;do permanentemente',
	'upi2db_always_read_is_unset' => 'Este tema no est&aacute; marcado como le&iacute;do permanentemente',
	'no_always_read' => 'No hay temas marcados como le&iacute;dos permanentemente',
	'x_always_read' => 'Ver como temas marcados le&iacute;dos permanentemente ',
	'upi2db_which_system' => '&iquest;Qu&eacute; sistema desea utilizar para manejar los mensajes nuevos?',
	'upi2db_which_system_explain' => 'Informaci&oacute;n detallada acerca de los diferentes sistemas la puede encontrar en las <a href="faq.' . PHP_EXT . '">FAQ\'s</a>.',
	'cookie_system' => 'Sistema cookie',
	'upi2db_system' => 'Sistema UPI2DB',
	'upi2db_mark_post' => 'Marcar este mensaje',
	'upi2db_unmark_post' => 'Desmarcar este mensaje',
	'upi2db_post_cant_mark' => 'Este mensaje no puede ser marcado.',
	'upi2db_post_marked' => 'El mensaje est&aacute; marcado.',
	'upi2db_post_unmarked' => 'El mensaje ya est&aacute; marcado.',
	'upi2db_post_cant_mark' => 'No tiene permitido marcar mensajes adicionales.',
	'always_read_icon' => 'Le&iacute;do permanentemente',
	'upi2db_always_read_forum_short' => 'Marcar le&iacute;do permanentemente',
	'upi2db_always_read_forum' => 'Marcar este foro como le&iacute;do permanentemente',
	'upi2db_always_read_forum_unset_short' => 'Desmarcar le&iacute;do permanentemente',
	'upi2db_always_read_forum_unset' => 'Desmarcar este foro como le&iacute;do permanentemente',
	'upi2db_forum_is_always_read' => 'Este foro est&aacute; marcado como le&iacute;do permanentemente',
	'upi2db_forum_isnt_always_read' => 'Este foro no est&aacute; marcado como le&iacute;do permanentemente',
	'upi2db_cat_cant_mark_always_read' => 'Las categor&iacute;as no se pueden fijar como le&iacute;do permanentemente ',
	'upi2db_new_word' => '&iquest;Marcas adicionales para los mensajes nuevos?',
	'upi2db_new_word_explain' => 'Si un tema tiene mensajes nuevos, ser&aacute; marcado con "Nuevo:"',
	'upi2db_edit_word' => '&iquest;Marcas adicionales para los mensajes editados?',
	'upi2db_edit_word_explain' => 'Si un tema tiene mensajes editados, ser&aacute; marcado con "Editado:"',
	'upi2db_unread_color' => 'Colorear el titulo del tema si hay mensajes nuevos',
	'upi2db_unread_disp_posts' => 'Mostrar nuevos y/o mensajes editados',
	'Click_return_search' => 'Pulse %saqu&iacute;%s para volver a la &uacute;ltima p&aacute;gina',
	'Click_return_portal' => 'Pulse %saqu&iacute;%s para volver al portal',
	'mark_edit' => 'Marcar mensaje como editado (ser&aacute; coloreado como no le&iacute;do para otros usuarios)',
	'upi2db_news_is_mark_unread' => 'Nuevos marcados como no le&iacute;dos',
	'upi2db_news_is_mark_read' => 'Nuevos marcados como le&iacute;dos',
	'upi2db_mark_news_read' => 'Marcar nuevos como le&iacute;dos',
	'upi2db_mark_news_unread' => 'Marcar nuevos como no le&iacute;dos',
	'upi2db_search_mark_read' => 'MTL',
	'upi2db_submit_mark_read' => 'Marcar como le&iacute;do',
	'upi2db_submit_topic_mark_read' => 'Los temas seleccionados han sido marcados como le&iacute;dos',

	'upi2db_mark_post_unread' => 'Marcar este mensaje como no le&iacute;do',
	'upi2db_mark_post_unread_cant' => 'Este mensaje no puede ser marcado como no le&iacute;do.',
	'upi2db_mark_post_is_unread' => 'Mensaje marcado como no le&iacute;do.',

	'upi2db_first_use_txt' => 'Ahora puede utilizar el sistema UPI2DB y todas sus caracter&iacute;sticas. Encontrar&aacute; m&aacute;s detalles en la p&aacute;gina de Preguntas Frecuentes.',

	'upi2db_u' => 'S',
	'upi2db_m' => 'M',
	'upi2db_p' => 'P',
	'upi2db_unread' => 'Mensajes no le&iacute;dos',
	'upi2db_marked' => 'Mensajes marcados',
	'upi2db_perm_read' => 'Lectura permanente',
	)
);

?>