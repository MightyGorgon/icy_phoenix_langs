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
	'setup_upi2db' => 'Configuraci�n UPI2DB',
	'setup_upi2db_explain' => 'Aqu� puede cambiar los ajustes de Unread Post Information 2 Database Mod.<br />Si el MOD es activado, la informaci�n de los mensajes no le�dos ser� almacenada en la base de datos, as� que esa informaci�n no se perder� despues de que un usuario registrado salga del foro.',
	'upi2db_on' => '�MOD UPI2DB activo?',
	'upi2db_on_explain' => 'Con esta opci�n puede activar/desactivar el MOD UPI2DB o dejar al usuario usarlo.<br />Si lo pone como desactivado, el sistema por defecto de cookies ser� activado.',
	'user_select' => 'Ajustes del usuario',
	'up2db_days' => 'Los mensajes se marcar�n autom�ticamente como le�dos despu�s de &hellip;',
	'up2db_days_tagen' => 'D�as', 
	'up2db_days_explain' => 'N�mero de d�as que los mensajes se guardar�n como no l�idos en la base de datos.<br />Despu�s de esos d�as, todo mensaje antiguo ser� marcado como le�do.<br />�Atenci�n!: Cuantos m�s d�as, m�s se afectar� su base de datos dependiendo del tama�o de sus foros. Por defecto = 30 d�as',

	'edit_as_new' => '�Marcar mensajes editados como nuevos?',
	'edit_as_new_explain' => '�Marcar mensajes despu�s de editarlos como no le�dos?',
	'last_edit_as_new' => '�Marcar �ltimo mensaje del tema despu�s de editarlo como no le�do?',
	'edit_topic_first' => '�Mostrar mensajes editados en la parte superior de la vista del tema?',
	'edit_topic_first_explain' => 'Si lo fija en "No", todos los temas marcados como no le�dos se mostrar�n entre los otros temas (por defecto). Si lo fija en "S�", todos los temas editados como no le�dos se mostrar�n arriba de la lista de temas hasta que sean le�dos.',

	'upi2db_condition_setup' => 'Condiciones UPI2DB',
	'upi2db_condition_min_posts' => 'M�nima cantidad de mensajes',
	'upi2db_condition_min_regdays' => 'M�nima cantidad de d�as registrado',
	'upi2db_unread_color' => 'C�digo de color para el titulo del tema (mensaje sin leer)',
	'upi2db_edit_color' => 'C�digo de color para el titulo del tema (mensaje editado)',
	'upi2db_mark_color' => 'C�digo de color para el titulo del tema (mensaje marcado)',
	'group_allow_upi2db' => '�Permitir al grupo usar UPI2DB?',
	'user_allow_upi2db' => '�Permitir a los usuarios usar UPI2DB?',
	'user_disable_upi2db' => 'Desactivar MOD UPI2DB', 
	'group_user' => 'Usuario',
	'user_without_group' => 'El usuario no pertenece a ning�n grupo de usuarios',

	'max_new_posts' => 'N�mero m�ximo de mensajes nuevos/editados por sincronizaci�n',
	'max_new_posts_explain' => 'Introduzca aqu� el n�mero m�ximo de mensajes que ser�n copiados por sincronizaci�n. Introduzca "0" para fijar que el n�mero de mensajes sea ilimitado.',
	'max_permanent_topics' => 'N�mero m�ximo de temas marcados permanentemente por usuario',
	'max_permanent_topics_explain' => 'Introduzca aqu� el n�mero de temas que cada usuario puede "Marcar como le�do permanentemente". Introduzca "0" para fijar que el n�mero de temas sea ilimitado.',
	'up2db_del_perm' => 'Borrar foros/temas marcados como permanentemente le�dos...',
	'up2db_del_perm_explain' => 'Fijar aqu� el n�mero de d�as tras los que se limpiar� la base de datos de "Foros/Temas marcados como le�dos permanentemente". Esta opci�n reduce el tama�o de la base de datos, casi siempre por los usuarios inactivos.',

	'up2db_del_mark' => 'Borrar mensajes marcados despu�s...',
	'up2db_del_mark_explain' => 'Introduzca aqu� el n�mero de d�as que los "Mensajes marcados" se almacenar�n antes de que se limpien, para evitar que la base de datos sea demasiado pesada.',
	'max_mark_posts' => 'N�mero m�ximo de "Mensajes marcados" por usuario',
	'max_mark_posts_explain' => 'Cu�ntos mensajes puede marcar el usuario como m�ximo.',
	)
);

?>