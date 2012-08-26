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
	'setup_upi2db' => 'Configuraci&oacute;n UPI2DB',
	'setup_upi2db_explain' => 'Aqu&iacute; puede cambiar los ajustes de Unread Post Information 2 Database Mod.<br />Si el MOD es activado, la informaci&oacute;n de los mensajes no le&iacute;dos ser&aacute; almacenada en la base de datos, as&iacute; que esa informaci&oacute;n no se perder&aacute; despues de que un usuario registrado salga del foro.',
	'upi2db_on' => '&iquest;MOD UPI2DB activo?',
	'upi2db_on_explain' => 'Con esta opci&oacute;n puede activar/desactivar el MOD UPI2DB o dejar al usuario usarlo.<br />Si lo pone como desactivado, el sistema por defecto de cookies ser&aacute; activado.',
	'user_select' => 'Ajustes del usuario',
	'up2db_days' => 'Los mensajes se marcar&aacute;n autom&aacute;ticamente como le&iacute;dos despu&eacute;s de &hellip;',
	'up2db_days_tagen' => 'D&iacute;as', 
	'up2db_days_explain' => 'N&uacute;mero de d&iacute;as que los mensajes se guardar&aacute;n como no l&eacute;idos en la base de datos.<br />Despu&eacute;s de esos d&iacute;as, todo mensaje antiguo ser&aacute; marcado como le&iacute;do.<br />&iexcl;Atenci&oacute;n!: Cuantos m&aacute;s d&iacute;as, m&aacute;s se afectar&aacute; su base de datos dependiendo del tama&ntilde;o de sus foros. Por defecto = 30 d&iacute;as',

	'edit_as_new' => '&iquest;Marcar mensajes editados como nuevos?',
	'edit_as_new_explain' => '&iquest;Marcar mensajes despu&eacute;s de editarlos como no le&iacute;dos?',
	'last_edit_as_new' => '&iquest;Marcar &uacute;ltimo mensaje del tema despu&eacute;s de editarlo como no le&iacute;do?',
	'edit_topic_first' => '&iquest;Mostrar mensajes editados en la parte superior de la vista del tema?',
	'edit_topic_first_explain' => 'Si lo fija en "No", todos los temas marcados como no le&iacute;dos se mostrar&aacute;n entre los otros temas (por defecto). Si lo fija en "S&iacute;", todos los temas editados como no le&iacute;dos se mostrar&aacute;n arriba de la lista de temas hasta que sean le&iacute;dos.',

	'upi2db_condition_setup' => 'Condiciones UPI2DB',
	'upi2db_condition_min_posts' => 'M&iacute;nima cantidad de mensajes',
	'upi2db_condition_min_regdays' => 'M&iacute;nima cantidad de d&iacute;as registrado',
	'upi2db_unread_color' => 'C&oacute;digo de color para el titulo del tema (mensaje sin leer)',
	'upi2db_edit_color' => 'C&oacute;digo de color para el titulo del tema (mensaje editado)',
	'upi2db_mark_color' => 'C&oacute;digo de color para el titulo del tema (mensaje marcado)',
	'group_allow_upi2db' => '&iquest;Permitir al grupo usar UPI2DB?',
	'user_allow_upi2db' => '&iquest;Permitir a los usuarios usar UPI2DB?',
	'user_disable_upi2db' => 'Desactivar MOD UPI2DB', 
	'group_user' => 'Usuario',
	'user_without_group' => 'El usuario no pertenece a ning&uacute;n grupo de usuarios',

	'max_new_posts' => 'N&uacute;mero m&aacute;ximo de mensajes nuevos/editados por sincronizaci&oacute;n',
	'max_new_posts_explain' => 'Introduzca aqu&iacute; el n&uacute;mero m&aacute;ximo de mensajes que ser&aacute;n copiados por sincronizaci&oacute;n. Introduzca "0" para fijar que el n&uacute;mero de mensajes sea ilimitado.',
	'max_permanent_topics' => 'N&uacute;mero m&aacute;ximo de temas marcados permanentemente por usuario',
	'max_permanent_topics_explain' => 'Introduzca aqu&iacute; el n&uacute;mero de temas que cada usuario puede "Marcar como le&iacute;do permanentemente". Introduzca "0" para fijar que el n&uacute;mero de temas sea ilimitado.',
	'up2db_del_perm' => 'Borrar foros/temas marcados como permanentemente le&iacute;dos...',
	'up2db_del_perm_explain' => 'Fijar aqu&iacute; el n&uacute;mero de d&iacute;as tras los que se limpiar&aacute; la base de datos de "Foros/Temas marcados como le&iacute;dos permanentemente". Esta opci&oacute;n reduce el tama&ntilde;o de la base de datos, casi siempre por los usuarios inactivos.',

	'up2db_del_mark' => 'Borrar mensajes marcados despu&eacute;s...',
	'up2db_del_mark_explain' => 'Introduzca aqu&iacute; el n&uacute;mero de d&iacute;as que los "Mensajes marcados" se almacenar&aacute;n antes de que se limpien, para evitar que la base de datos sea demasiado pesada.',
	'max_mark_posts' => 'N&uacute;mero m&aacute;ximo de "Mensajes marcados" por usuario',
	'max_mark_posts_explain' => 'Cu&aacute;ntos mensajes puede marcar el usuario como m&aacute;ximo.',
	)
);

?>