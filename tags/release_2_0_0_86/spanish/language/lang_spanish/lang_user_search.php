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
* Adam Alkins (phpbb at rasadam dot com)
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
	'Search_invalid_username' => 'El nombre de usuario introducido no es válido para la búsqueda',
	'Search_invalid_email' => 'La dirección de correo introducida no es válida para la búsqueda',
	'Search_invalid_ip' => 'La dirección IP introducida no es válida para la búsqueda',
	'Search_invalid_group' => 'El grupo introducido no es válido para la búsqueda',
	'Search_invalid_date' => 'La fecha introducida no es válida para la búsqueda',
	'Search_invalid_postcount' => 'La cantidad de mensajes introducida no es válida para la búsqueda',
	'Search_invalid_userfield' => 'Los datos de campo de usuario introducidos no son válidos para la búsqueda',
	'Search_invalid_lastvisited' => 'Los datos introducidos no son válidos para buscar en última visita',
	'Search_invalid_language' => 'El lenguaje seleccionado es inválido',
	'Search_invalid_style' => 'El estilo seleccionado es inválido',
	'Search_invalid_timezone' => 'La zona horaria seleccionada es inválida',
	'Search_invalid_moderators' => 'El foro seleccionado es inválido',
	'Search_invalid' => 'Búsqueda inválida',
	'Search_invalid_day' => 'El día que ha introducido es inválido',
	'Search_invalid_month' => 'El mes que ha introducido es inválido',
	'Search_invalid_year' => 'El año que ha introducido es inválido',
	'Search_no_regexp' => 'Su base de datos no soporta la búsqueda de expresión regular.',
	'Search_for_username' => 'Buscando nombre de usuario %s',
	'Search_for_email' => 'Buscando dirección de correo %s',
	'Search_for_ip' => 'Buscando dirección IP %s',
	'Search_for_date' => 'Buscando usuarios que se conectaron el %s %d/%d/%d',
	'Search_for_group' => 'Buscando usuarios del grupo %s',
	'Search_for_banned' => 'Buscando usuarios excluidos',
	'Search_for_admins' => 'Buscando administradores',
	'Search_for_mods' => 'Buscando moderadores',
	'Search_for_disabled' => 'Buscando usuarios deshabilitados',
	'Search_for_disabled_pms' => 'Buscando usuarios con mensajes privados deshabilitados',
	'Search_for_postcount_greater' => 'Buscando usuarios con cantidad de mensajes mayor que %d',
	'Search_for_postcount_lesser' => 'Buscando usuarios con cantidad de mensajes menor que %d',
	'Search_for_postcount_range' => 'Buscando usuarios con cantidad de mensajes entre %d y %d',
	'Search_for_postcount_equals' => 'Buscando usuarios con %d mensajes',
	'Search_for_userfield_icq' => 'Buscando usuarios con dirección ICQ %s',
	'Search_for_userfield_yahoo' => 'Buscando usuarios con dirección Yahoo IM %s',
	'Search_for_userfield_aim' => 'Buscando usuarios con dirección AIM %s',
	'Search_for_userfield_msn' => 'Buscando usuarios con dirección MSN Messenger %s',
	'Search_for_userfield_website' => 'Buscando usuarios con sitio web %s',
	'Search_for_userfield_location' => 'Buscando usuarios con ubicación %s',
	'Search_for_userfield_interests' => 'Buscando usuarios con su campo de intereses %s',
	'Search_for_userfield_occupation' => 'Buscando usuarios con su campo de ocupación %s',
	'Search_for_lastvisited_inthelast' => 'Buscando usuarios que nos visitaron en la última %s %s',
	'Search_for_lastvisited_afterthelast' => 'Buscando usuarios que nos visitaron  después de la última %s %s',
	'Search_for_language' => 'Buscando usuarios que tienen fijado %s como su lenguaje',
	'Search_for_timezone' => 'Buscando usuarios que tienen fijado GMT %s como zona horaria',
	'Search_for_style' => 'Buscando usuarios que tienen fijado %s como estilo',
	'Search_for_moderators' => 'Buscar moderadores del foro -> %s',
	'Search_users_advanced' => 'Búsqueda avanzada de usuario',
	'Search_users_explain' => 'Este módulo le permite realizar una búsqueda avanzada de usuarios con distintos criterios. Por favor, lea las descripciones bajo cada campo para entender completamente cada opción de la búsqueda.',
	'Search_username_explain' => 'Aquí puede realizar una búsqueda intensiva por nombres de usuario. Si prefiere usar una parte del nombre de usuario, use * (un asterisco) como comodín. La comprobación de la caja de expresiones regulares le permitirá la búsqueda basada en su patrón.<br /><strong>Nota:</strong> Expresiones regulares sólo funcionan en MySQL, PostgreSQL y Oracle 10g+.',
	'Search_email_explain' => 'Introducir una expresión a encontrar de una dirección de correo. Si quiere buscar una parte, use * (un asterisco) como comodín. La comprobación de la caja de expresiones regulares le permitirá la búsqueda basada en su patrón.<br /><strong>Nota:</strong> Expresiones regulares sólo funcionan en MySQL, PostgreSQL y Oracle 10g+.',
	'Search_ip_explain' => 'Buscar a usuarios que hicieron los mensajes con una dirección IP especifica (xxx.xxx.xxx.xxx), comodín (xxx.xxx.xxx.*) o rango (xxx.xxx.xxx.xxx-yyy.yyy.yyy.yyy). Nota: el último cuadrante .255 es considerado el rango de todas la IPs en ese cuadrante. Si introduce 10.0.0.255, es lo mismo que introducir 10.0.0.* (No se asigna IP a .255 en esa ocasión, se reserva). Donde usted puede encontrar esto en rangos, 10.0.0.5-10.0.0.255 es igual que "10.0.0.*" . Debe introducir realmente 10.0.0.5-10.0.0.254 .',
	'Search_users_joined' => 'Usuarios que se conectaron',
	'Search_users_lastvisited' => 'Usuarios que nos han visitado',
	'in_the_last' => 'en la última',
	'after_the_last' => 'después de la última',
	'Before' => 'Antes',
	'After' => 'Despues',
	'Search_users_joined_explain' => 'Buscar a usuarios que se conectaron antes o después (y en) una fecha específica. El formato de la fecha es YYYY/MM/DD.',
	'Search_users_groups_explain' => 'Ver todos lo usuarios del grupo seleccionado.',
	'Administrators' => 'Administradores',
	'Banned_users' => 'Usuarios excluidos',
	'Disabled_users' => 'Usuarios deshabilitados',
	'Users_disabled_pms' => 'Usuarios con MPs deshabilitados',
	'Search_users_misc_explain' => 'Administradores - Todos los usuarios con privilegios de administrador; Moderadores - Todos los moderadores del foro; Usuarios excluidos - Todas las cuentas que han sido excluidas del foro; Usuarios deshabilitados - Todos los usuarios con cuentas deshabilitadas (deshabilitado manualmente o que nunca la verificó con su dirección de correo); Usuarios con MPs deshabilitados - Selección de usuarios que tienen los privilegios de mensajes privados borrado (Hecho desde administración de usuarios)',
	'Postcount' => 'Cantidad de mensajes',
	'Equals' => 'Iguales',
	'Greater_than' => 'Mayor que',
	'Less_than' => 'Menor que',
	'Search_users_postcount_explain' => 'Puede buscar usuarios basándose en su cantidad de mensajes. Puede buscar una cantidad concreta, mayor que, menor que, un valor o entre dos valores. Para marcar el rango de búsqueda, seleccione "iguales" y ponga los valores del principio y del final del rango separados por un (-), por ejemplo 10-15',
	'Userfield' => 'Campo de usuario',
	'Search_users_userfield_explain' => 'Buscar a usuarios basándose en varios campos del perfil. Se admiten los comodines usando un asterisco (*). La comprobación de la caja de expresiones regulares le permitirá la búsqueda basada en su patrón.<br /><strong>Nota:</strong> Expresiones regulares sólo funcionan en MySQL, PostgreSQL y Oracle 10g+.',
	'Search_users_lastvisited_explain' => 'Puede buscar a usuarios basándose en la ultima fecha de conexión (logueándose) usando esta opción de búsqueda',
	'Search_users_language_explain' => 'Esto mostrará los usuarios que han seleccionado un lenguaje específico en el perfil',
	'Search_users_timezone_explain' => 'Usuarios que han seleccionado una zona horaria específica en este perfil',
	'Search_users_style_explain' => 'Mostrar usuarios que han seleccionado el estilo especificado.',
	'Moderators_of' => 'Moderadores de',
	'Search_users_moderators_explain' => 'Buscar usuarios con permisos de moderador en el foro específico. Los permisos de moderador constan en permisos de usuario o en grupos y sus permisos de grupos.',
	'Regular_expression' => '&iquest;Expresión regular?',

	'Manage' => 'Administrar',
	'Search_users_new' => '%s rendido %d resultado(s). Realizar <a href="%s">otra búsqueda</a>.',
	'Banned' => 'Excluido',
	'Not_banned' => 'No excluido',
	'Search_no_results' => 'No se encontraron usuarios con el criterio seleccionado. Por favor, intente otra búsqueda. Si está buscando los campos de nombre de usuario o de dirección de correo, para las búsquedas parciales debe usar el comodin * (un asterisco).',
	'Account_status' => 'Estado de cuenta',
	'Sort_options' => 'Clase de opciones:',
	'Last_visit' => 'última visita',
	'Day' => 'Día',
	)
);

?>