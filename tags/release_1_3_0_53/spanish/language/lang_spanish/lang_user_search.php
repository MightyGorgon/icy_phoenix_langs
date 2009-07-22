<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_user_search.php 50 2009-07-22 10:13:03Z Mighty Gorgon $
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
	'Search_invalid_username' => 'El nombre de usuario introducido no es v�lido para la b�squeda',
	'Search_invalid_email' => 'La direcci�n de correo introducida no es v�lida para la b�squeda',
	'Search_invalid_ip' => 'La direcci�n IP introducida no es v�lida para la b�squeda',
	'Search_invalid_group' => 'El grupo introducido no es v�lido para la b�squeda',
	'Search_invalid_date' => 'La fecha introducida no es v�lida para la b�squeda',
	'Search_invalid_postcount' => 'La cantidad de mensajes introducida no es v�lida para la b�squeda',
	'Search_invalid_userfield' => 'Los datos de campo de usuario introducidos no son v�lidos para la b�squeda',
	'Search_invalid_lastvisited' => 'Los datos introducidos no son v�lidos para buscar en �ltima visita',
	'Search_invalid_language' => 'El lenguaje seleccionado es inv�lido',
	'Search_invalid_style' => 'El estilo seleccionado es inv�lido',
	'Search_invalid_timezone' => 'La zona horaria seleccionada es inv�lida',
	'Search_invalid_moderators' => 'El foro seleccionado es inv�lido',
	'Search_invalid' => 'B�squeda inv�lida',
	'Search_invalid_day' => 'El d�a que ha introducido es inv�lido',
	'Search_invalid_month' => 'El mes que ha introducido es inv�lido',
	'Search_invalid_year' => 'El a�o que ha introducido es inv�lido',
	'Search_no_regexp' => 'Su base de datos no soporta la b�squeda de expresi�n regular.',
	'Search_for_username' => 'Buscando nombre de usuario %s',
	'Search_for_email' => 'Buscando direcci�n de correo %s',
	'Search_for_ip' => 'Buscando direcci�n IP %s',
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
	'Search_for_userfield_icq' => 'Buscando usuarios con direcci�n ICQ %s',
	'Search_for_userfield_yahoo' => 'Buscando usuarios con direcci�n Yahoo IM %s',
	'Search_for_userfield_aim' => 'Buscando usuarios con direcci�n AIM %s',
	'Search_for_userfield_msn' => 'Buscando usuarios con direcci�n MSN Messenger %s',
	'Search_for_userfield_website' => 'Buscando usuarios con sitio web %s',
	'Search_for_userfield_location' => 'Buscando usuarios con ubicaci�n %s',
	'Search_for_userfield_interests' => 'Buscando usuarios con su campo de intereses %s',
	'Search_for_userfield_occupation' => 'Buscando usuarios con su campo de ocupaci�n %s',
	'Search_for_lastvisited_inthelast' => 'Buscando usuarios que nos visitaron en la �ltima %s %s',
	'Search_for_lastvisited_afterthelast' => 'Buscando usuarios que nos visitaron  despu�s de la �ltima %s %s',
	'Search_for_language' => 'Buscando usuarios que tienen fijado %s como su lenguaje',
	'Search_for_timezone' => 'Buscando usuarios que tienen fijado GMT %s como zona horaria',
	'Search_for_style' => 'Buscando usuarios que tienen fijado %s como estilo',
	'Search_for_moderators' => 'Buscar moderadores del foro -> %s',
	'Search_users_advanced' => 'B�squeda avanzada de usuario',
	'Search_users_explain' => 'Este m�dulo le permite realizar una b�squeda avanzada de usuarios con distintos criterios. Por favor, lea las descripciones bajo cada campo para entender completamente cada opci�n de la b�squeda.',
	'Search_username_explain' => 'Aqu� puede realizar una b�squeda intensiva por nombres de usuario. Si prefiere usar una parte del nombre de usuario, use * (un asterisco) como comod�n. La comprobaci�n de la caja de expresiones regulares le permitir� la b�squeda basada en su patr�n.<br /><strong>Nota:</strong> Expresiones regulares s�lo funcionan en MySQL, PostgreSQL y Oracle 10g+.',
	'Search_email_explain' => 'Introducir una expresi�n a encontrar de una direcci�n de correo. Si quiere buscar una parte, use * (un asterisco) como comod�n. La comprobaci�n de la caja de expresiones regulares le permitir� la b�squeda basada en su patr�n.<br /><strong>Nota:</strong> Expresiones regulares s�lo funcionan en MySQL, PostgreSQL y Oracle 10g+.',
	'Search_ip_explain' => 'Buscar a usuarios que hicieron los mensajes con una direcci�n IP especifica (xxx.xxx.xxx.xxx), comod�n (xxx.xxx.xxx.*) o rango (xxx.xxx.xxx.xxx-yyy.yyy.yyy.yyy). Nota: el �ltimo cuadrante .255 es considerado el rango de todas la IPs en ese cuadrante. Si introduce 10.0.0.255, es lo mismo que introducir 10.0.0.* (No se asigna IP a .255 en esa ocasi�n, se reserva). Donde usted puede encontrar esto en rangos, 10.0.0.5-10.0.0.255 es igual que "10.0.0.*" . Debe introducir realmente 10.0.0.5-10.0.0.254 .',
	'Search_users_joined' => 'Usuarios que se conectaron',
	'Search_users_lastvisited' => 'Usuarios que nos han visitado',
	'in_the_last' => 'en la �ltima',
	'after_the_last' => 'despu�s de la �ltima',
	'Before' => 'Antes',
	'After' => 'Despues',
	'Search_users_joined_explain' => 'Buscar a usuarios que se conectaron antes o despu�s (y en) una fecha espec�fica. El formato de la fecha es YYYY/MM/DD.',
	'Search_users_groups_explain' => 'Ver todos lo usuarios del grupo seleccionado.',
	'Administrators' => 'Administradores',
	'Banned_users' => 'Usuarios excluidos',
	'Disabled_users' => 'Usuarios deshabilitados',
	'Users_disabled_pms' => 'Usuarios con MPs deshabilitados',
	'Search_users_misc_explain' => 'Administradores - Todos los usuarios con privilegios de administrador; Moderadores - Todos los moderadores del foro; Usuarios excluidos - Todas las cuentas que han sido excluidas del foro; Usuarios deshabilitados - Todos los usuarios con cuentas deshabilitadas (deshabilitado manualmente o que nunca la verific� con su direcci�n de correo); Usuarios con MPs deshabilitados - Selecci�n de usuarios que tienen los privilegios de mensajes privados borrado (Hecho desde administraci�n de usuarios)',
	'Postcount' => 'Cantidad de mensajes',
	'Equals' => 'Iguales',
	'Greater_than' => 'Mayor que',
	'Less_than' => 'Menor que',
	'Search_users_postcount_explain' => 'Puede buscar usuarios bas�ndose en su cantidad de mensajes. Puede buscar una cantidad concreta, mayor que, menor que, un valor o entre dos valores. Para marcar el rango de b�squeda, seleccione "iguales" y ponga los valores del principio y del final del rango separados por un (-), por ejemplo 10-15',
	'Userfield' => 'Campo de usuario',
	'Search_users_userfield_explain' => 'Buscar a usuarios bas�ndose en varios campos del perfil. Se admiten los comodines usando un asterisco (*). La comprobaci�n de la caja de expresiones regulares le permitir� la b�squeda basada en su patr�n.<br /><strong>Nota:</strong> Expresiones regulares s�lo funcionan en MySQL, PostgreSQL y Oracle 10g+.',
	'Search_users_lastvisited_explain' => 'Puede buscar a usuarios bas�ndose en la ultima fecha de conexi�n (logue�ndose) usando esta opci�n de b�squeda',
	'Search_users_language_explain' => 'Esto mostrar� los usuarios que han seleccionado un lenguaje espec�fico en el perfil',
	'Search_users_timezone_explain' => 'Usuarios que han seleccionado una zona horaria espec�fica en este perfil',
	'Search_users_style_explain' => 'Mostrar usuarios que han seleccionado el estilo especificado.',
	'Moderators_of' => 'Moderadores de',
	'Search_users_moderators_explain' => 'Buscar usuarios con permisos de moderador en el foro espec�fico. Los permisos de moderador constan en permisos de usuario o en grupos y sus permisos de grupos.',
	'Regular_expression' => '�Expresi�n regular?',

	'Manage' => 'Administrar',
	'Search_users_new' => '%s rendido %d resultado(s). Realizar <a href="%s">otra b�squeda</a>.',
	'Banned' => 'Excluido',
	'Not_banned' => 'No excluido',
	'Search_no_results' => 'No se encontraron usuarios con el criterio seleccionado. Por favor, intente otra b�squeda. Si est� buscando los campos de nombre de usuario o de direcci�n de correo, para las b�squedas parciales debe usar el comodin * (un asterisco).',
	'Account_status' => 'Estado de cuenta',
	'Sort_options' => 'Clase de opciones:',
	'Last_visit' => '�ltima visita',
	'Day' => 'D�a',
	)
);

?>