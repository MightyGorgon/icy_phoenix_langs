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
	'Search_no_new' => 'No hay nuevos mensajes desde su �ltima visita',
	'Neue_Beitraege' => 'Mensajes no le�dos',
	'Editierte_Beitraege' => 'Mensajes editados',
	'Ungelesen_Markiert' => 'Marcado como no le�do',
	'Permanent_Gelesen' => 'Siempre le�do',
	'Posts' => 'Mensajes',
	'Unreaded_post' => 'Mensaje no le�do',
	'New_edited_post' => 'Mensaje editado',
	'New_edited_posts' => 'Mensajes editados',
	'Unreaded_posts' => 'Mensajes sin leer',
	'upi2db_post_edit' => 'Editado',
	'upi2db_post_new' => 'Nuevo',
	'upi2db_post_and' => ' &amp; ',
	'upi2db_always_read' => 'Marcar este tema como le�do permanentemente',
	'upi2db_always_read_unset' => 'Desmarcar este tema como le�do permanentemente',
	'upi2db_always_read_cant_set' => 'El tema no puede ser marcado como le�do permanentemente',
	'upi2db_always_read_no_more' => 'No tiene permitido marcar temas adicionales como le�do permanentemente.',
	'upi2db_always_read_is_set' => 'Este tema est� marcado como le�do permanentemente',
	'upi2db_always_read_is_unset' => 'Este tema no est� marcado como le�do permanentemente',
	'no_always_read' => 'No hay temas marcados como leidos permanentemente',
	'x_always_read' => 'Ver como temas marcados le�dos permanentemente ',
	'upi2db_which_system' => '�Qu� sistema desea utilizar para manejar los mensajes nuevos?',
	'upi2db_which_system_explain' => 'Informaci�n detallada acerca de los diferentes sistemas la puede encontrar en las <a href="faq.' . PHP_EXT . '">FAQ\'s</a>.',
	'cookie_system' => 'Sistema cookie',
	'upi2db_system' => 'Sistema UPI2DB',
	'upi2db_mark_post' => 'Marcar este mensaje',
	'upi2db_unmark_post' => 'Desmarcar este mensaje',
	'upi2db_post_cant_mark' => 'Este mensaje no puede ser marcado.',
	'upi2db_post_marked' => 'El mensaje est� marcado.',
	'upi2db_post_unmarked' => 'El mensaje ya est� marcado.',
	'upi2db_post_cant_mark' => 'No tiene permitido marcar mensajes adicionales.',
	'always_read_icon' => 'Le�do permanentemente',
	'upi2db_always_read_forum_short' => 'Marcar le�do permanentemente',
	'upi2db_always_read_forum' => 'Marcar este foro como le�do permanentemente',
	'upi2db_always_read_forum_unset_short' => 'Desmarcar le�do permanentemente',
	'upi2db_always_read_forum_unset' => 'Desmarcar este foro como le�do permanentemente',
	'upi2db_forum_is_always_read' => 'Este foro est� marcado como le�do permanentemente',
	'upi2db_forum_isnt_always_read' => 'Este foro no est� marcado como le�do permanentemente',
	'upi2db_cat_cant_mark_always_read' => 'Las categor�as no se pueden fijar como le�do permanentemente ',
	'upi2db_new_word' => '�Marcas adicionales para los mensajes nuevos?',
	'upi2db_new_word_explain' => 'Si un tema tiene mensajes nuevos, ser� marcado con "Nuevo:"',
	'upi2db_edit_word' => '�Marcas adicionales para los mensajes editados?',
	'upi2db_edit_word_explain' => 'Si un tema tiene mensajes editados, ser� marcado con "Editado:"',
	'upi2db_unread_color' => 'Colorear el titulo del tema si hay mensajes nuevos',
	'upi2db_unread_disp_posts' => 'Mostrar nuevos y/o mensajes editados',
	'Click_return_search' => 'Pulse %saqu�%s para volver a la �ltima p�gina',
	'Click_return_portal' => 'Pulse %saqu�%s para volver al portal',
	'mark_edit' => 'Marcar mensaje como editado (ser� coloreado como no le�do para otros usuarios)',
	'upi2db_news_is_mark_unread' => 'Nuevos marcados como no le�dos',
	'upi2db_news_is_mark_read' => 'Nuevos marcados como le�dos',
	'upi2db_mark_news_read' => 'Marcar nuevos como le�dos',
	'upi2db_mark_news_unread' => 'Marcar nuevos como no le�dos',
	'upi2db_search_mark_read' => 'MTL',
	'upi2db_submit_mark_read' => 'Marcar como le�do',
	'upi2db_submit_topic_mark_read' => 'Los temas seleccionados han sido marcados como le�dos',

	'upi2db_mark_post_unread' => 'Marcar este mensaje como no le�do',
	'upi2db_mark_post_unread_cant' => 'Este mensaje no puede ser marcado como no le�do.',
	'upi2db_mark_post_is_unread' => 'Mensaje marcado como no le�do.',

	'upi2db_first_use_txt' => 'Ahora puede utilizar el sistema UPI2DB y todas sus caracter�sticas. Encontrar� m�s detalles en las FAQ de nuestro foro.',

	'upi2db_u' => 'U',
	'upi2db_m' => 'M',
	'upi2db_p' => 'P',
	'upi2db_unread' => 'Mensajes no le�dos',
	'upi2db_marked' => 'Mensajes marcados',
	'upi2db_perm_read' => 'Lectura permanente',
	)
);

?>