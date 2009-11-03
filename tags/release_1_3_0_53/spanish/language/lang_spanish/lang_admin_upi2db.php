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
	'setup_upi2db' => 'Configuración UPI2DB',
	'setup_upi2db_explain' => 'Aquí puede cambiar los ajustes de Unread Post Information 2 Database Mod.<br />Si el MOD es activado, la información de los mensajes no leídos será almacenada en la base de datos, así que esa información no se perderá despues de que un usuario registrado salga del foro.',
	'upi2db_on' => '¿MOD UPI2DB activo?',
	'upi2db_on_explain' => 'Con esta opción puede activar/desactivar el MOD UPI2DB o dejar al usuario usarlo.<br />Si lo pone como desactivado, el sistema por defecto de cookies será activado.',
	'user_select' => 'Ajustes del usuario',
	'up2db_days' => 'Los mensajes se marcarán automáticamente como leídos después de &hellip;',
	'up2db_days_tagen' => 'Días', 
	'up2db_days_explain' => 'Número de días que los mensajes se guardarán como no léidos en la base de datos.<br />Después de esos días, todo mensaje antiguo será marcado como leído.<br />¡Atención!: Cuantos más días, más se afectará su base de datos dependiendo del tamaño de sus foros. Por defecto = 30 días',

	'edit_as_new' => '¿Marcar mensajes editados como nuevos?',
	'edit_as_new_explain' => '¿Marcar mensajes después de editarlos como no leídos?',
	'last_edit_as_new' => '¿Marcar último mensaje del tema después de editarlo como no leído?',
	'edit_topic_first' => '¿Mostrar mensajes editados en la parte superior de la vista del tema?',
	'edit_topic_first_explain' => 'Si lo fija en "No", todos los temas marcados como no leídos se mostrarán entre los otros temas (por defecto). Si lo fija en "Sí", todos los temas editados como no leídos se mostrarán arriba de la lista de temas hasta que sean leídos.',

	'upi2db_condition_setup' => 'Condiciones UPI2DB',
	'upi2db_condition_min_posts' => 'Mínima cantidad de mensajes',
	'upi2db_condition_min_regdays' => 'Mínima cantidad de días registrado',
	'upi2db_unread_color' => 'Código de color para el titulo del tema (mensaje sin leer)',
	'upi2db_edit_color' => 'Código de color para el titulo del tema (mensaje editado)',
	'upi2db_mark_color' => 'Código de color para el titulo del tema (mensaje marcado)',
	'group_allow_upi2db' => '¿Permitir al grupo usar UPI2DB?',
	'user_allow_upi2db' => '¿Permitir a los usuarios usar UPI2DB?',
	'user_disable_upi2db' => 'Desactivar MOD UPI2DB', 
	'group_user' => 'Usuario',
	'user_without_group' => 'El usuario no pertenece a ningún grupo de usuarios',

	'max_new_posts' => 'Número máximo de mensajes nuevos/editados por sincronización',
	'max_new_posts_explain' => 'Introduzca aquí el número máximo de mensajes que serán copiados por sincronización. Introduzca "0" para fijar que el número de mensajes sea ilimitado.',
	'max_permanent_topics' => 'Número máximo de temas marcados permanentemente por usuario',
	'max_permanent_topics_explain' => 'Introduzca aquí el número de temas que cada usuario puede "Marcar como leído permanentemente". Introduzca "0" para fijar que el número de temas sea ilimitado.',
	'up2db_del_perm' => 'Borrar foros/temas marcados como permanentemente leídos...',
	'up2db_del_perm_explain' => 'Fijar aquí el número de días tras los que se limpiará la base de datos de "Foros/Temas marcados como leídos permanentemente". Esta opción reduce el tamaño de la base de datos, casi siempre por los usuarios inactivos.',

	'up2db_del_mark' => 'Borrar mensajes marcados después...',
	'up2db_del_mark_explain' => 'Introduzca aquí el número de días que los "Mensajes marcados" se almacenarán antes de que se limpien, para evitar que la base de datos sea demasiado pesada.',
	'max_mark_posts' => 'Número máximo de "Mensajes marcados" por usuario',
	'max_mark_posts_explain' => 'Cuántos mensajes puede marcar el usuario como máximo.',
	)
);

?>