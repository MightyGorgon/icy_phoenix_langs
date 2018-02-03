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
* aUsTiN-Inc - (austin_inc@hotmail.com) - (phpbb-amod.com)
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
// Commonly Used
	'Ftr_msg_error' => 'Error',
	'Ftr_msg_success' => 'Acción realizada correctamente',

// Buttons
	'Ftr_select_button' => ' Seleccionar ',
	'Ftr_change_button' => ' Cambiar ',
	'Ftr_delete_button' => ' Borrar ',
	'Ftr_save_button' => ' Guardar ',

// Admin Panel
	'Ftr_admin_users' => 'Usuarios que han visto el tema: obligar a la lectura de un tema',
	'Ftr_total_user_error' => 'Error obteniendo el total de usuarios.',
	'Ftr_username' => '<strong>Nombre del usuario</strong>',
	'Ftr_post_date_time' => '<strong>Fecha de lectura del mensaje &amp; hora</strong>',
	'Ftr_admin_user_delete' => 'Borrado completo de usuarios: obligar a la lectura de un tema',
	'Ftr_user_del_success' => 'Todos los usuarios borrados.',
	'Ftr_save_config' => 'Guardar configuración: obligar a la lectura de un tema',
	'Ftr_save_config_success' => 'Su nueva configuración se ha guardado.',
	'Ftr_select_forum' => 'eleccionar foro: obligar a la lectura de un tema',
	'Ftr_forum_choose' => '<strong>Elegir el foro:</strong>',
	'Ftr_set_config' => 'Fijar configuración: obligar a la lectura de un tema',
	'Ftr_topic_choose' => 'Elegir el tema para obligar a leer:',
	'Ftr_message' => 'Escriba el mensaje, el usuario recibirá un aviso para leer este tema.',
	'Ftr_config' => 'Configuración: obligar a la lectura de un tema',
	'Ftr_post_changed' => '<strong>Borrar indicacores: olibgar a la lectura de un tema :</strong><br /> Esto forzará a \'todos\' los miembros a releer el mensaje.',
	'Ftr_current_topic' => '<strong>Tema usado actualmente:</strong>',
	'Ftr_current_message' => '<strong>Mensaje actual:</strong>',
	'Ftr_default' => 'Elegir un foro',
	'Ftr_default2' => 'Ekegir un tema',

// Added in 1.0.2
	'Ftr_user_deleted' => 'Usuario borrado!',
	'Ftr_deactivate' => '<strong>¿Desactivar la lectura obligada de tema?</strong><br /><span class="gensmall"><b>Si</b> para desactivarlo.</span>',
	'Ftr_whos_effected' => '<strong>¿Quién esta obligado a leerlo?</strong><br /><span class="gensmall">\'Nuevos usuarios\' solamente obligados los que ingresen tras la instalación del MOD.</span>',
	'Ftr_whos_effected_a' => 'Todos los usuarios',
	'Ftr_whos_effected_n' => 'Nuevos Usuarios',
	'Ftr_deactivate_y' => 'Si',
	'Ftr_deactivate_n' => 'No',
	'Ftr_effected_1' => 'OSolamente los nuevos usuarios están obligados a leerlo.',
	'Ftr_effected_2' => 'Todos los usuarios están obligados a leer el mensaje.',
	'Ftr_active_1' => 'Ha desactivado la lectura obligada de tema. Nadie está obligado a leer ningún mensaje.',
	'Ftr_active_2' => 'Ha activado la lectura obligada de tema!',
	)
);

?>