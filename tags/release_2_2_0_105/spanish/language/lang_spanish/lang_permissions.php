<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

	// ROLES - BEGIN
	'ROLE_CMS_CONTENT_MANAGER' => 'Administrador de Contenido',
	'ROLE_CMS_CONTENT_MANAGER_DESCRIPTION' => 'Todos los permisos en CMS.',
	'ROLE_CMS_REVIEWER' => 'Revisor',
	'ROLE_CMS_REVIEWER_DESCRIPTION' => 'Casi todos los permisos en CMS, aparte de borrar bloques.',
	'ROLE_CMS_PUBLISHER' => 'Publicador',
	'ROLE_CMS_PUBLISHER_DESCRIPTION' => 'Permisos para añadir contenido.',
	'ROLE_CMS_USER' => 'Usuario',
	'ROLE_CMS_USER_DESCRIPTION' => 'Permisos de ver contenido.',
	'ROLE_CMS_GUEST' => 'Visitante',
	'ROLE_CMS_GUEST_DESCRIPTION' => 'No tiene permisos.',
	'ROLE_ADMIN_FULL' => 'Admin principal',
	'ROLE_ADMIN_FULL_DESCRIPTION' => 'Tiene accesso a todas las tareas administrativas.',
	'ROLE_ADMIN_STANDARD' => ' Admin estandar',
	'ROLE_ADMIN_STANDARD_DESCRIPTION' => 'Tiene accesso a casi todas las tareas administrativas, pero no puede usar Tareas relacionadas con Usuarios o Servidor.',
	'ROLE_MOD_FULL' => 'Moderador Full',
	'ROLE_MOD_FULL_DESCRIPTION' => 'Puede usar todas las Herramientas de Moderacion',
	'ROLE_MOD_STANDARD' => 'Moderador estandar',
	'ROLE_MOD_STANDARD_DESCRIPTION' => 'Puede usar casi todas las Herramientas de Moderacion.',
	'ROLE_MOD_SIMPLE' => 'Moderador Simple',
	'ROLE_MOD_SIMPLE_DESCRIPTION' => 'Solo puede usar acciones básicas de temas',
	'ROLE_USER_FULL' => 'Todas las Funciones',
	'ROLE_USER_FULL_DESCRIPTION' => 'Puede usar todas las funciones de Usuarios.',
	'ROLE_USER_STANDARD' => 'Funciones estandar',
	'ROLE_USER_STANDARD_DESCRIPTION' => 'olo puede usar las Funciones estandar de Usuarios.',
	'ROLE_USER_LIMITED' => 'Funciones limitadas',
	'ROLE_USER_LIMITED_DESCRIPTION' => 'Solo puede usar unas pocos funciones de Usuarios.',
	'ROLE_FORUM_FULL' => 'Accesso completo',
	'ROLE_FORUM_FULL_DESCRIPTION' => 'Puede usar todas las funciones del Foro. No recomendado para Usuarios basicos.',
	'ROLE_FORUM_STANDARD' => 'Acceso estandar',
	'ROLE_FORUM_STANDARD_DESCRIPTION' => 'Puede usar la mayoria de las funciones del Foro.',
	'ROLE_FORUM_NOACCESS' => 'Sin Accesso',
	'ROLE_FORUM_NOACCES_DESCRIPTIONS' => 'CNo puede ver ni acceder al Foro.',
	'ROLE_PLUGINS_FULL' => 'Accesso completo',
	'ROLE_PLUGINS_FULL_DESCRIPTION' => 'Puede usar todas las funciones de PLUGINS. No recomendado para Usuarios basicos.',
	'ROLE_PLUGINS_STANDARD' => 'Acceso estandar',
	'ROLE_PLUGINS_STANDARD_DESCRIPTION' => 'Puede usar la mayoria de las funciones de Plugins.',
	'ROLE_PLUGINS_NOACCESS' => 'Sin Accesso',
	'ROLE_PLUGINS_NOACCESS_DESCRIPTION' => 'No puede ver ni acceder a PLUGINS.',
	// ROLES - END

	)
);

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat' => array(
		'actions' => 'Acciones',
		'blocks' => 'Bloques',
		'cms' => 'CMS',
		'content' => 'Contenido',
		'forums' => 'Foros',
		'layouts' => 'Páginas',
		'misc' => 'Miscelanea',
		'permissions' => 'Permisos',
		'plugins_actions' => 'Acciones de Plugins',
		'pm' => 'Mensajes privados',
		'polls' => 'Encuestas',
		'post' => 'Mensaje',
		'post_actions' => 'Acciones de Mensaje',
		'posting' => 'Escribiendo',
		'profile' => 'Perfil',
		'settings' => 'Ajustes',
		'topic_actions' => 'Acciones de tema',
		'user_group' => 'Grupos de usuarios',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type' => array(
		'a_' => 'Permisos de Administrador',
		'cms_' => 'Permisos CMS',
		'cmsl_' => 'Permisos de páginas CMS',
		'cmss_' => 'Permisos paginas estandar CMS',
		'cmsb_' => 'Permisos Bloques CMS',
		'f_' => 'Permisos del foro',
		'm_' => 'Permisos de Moderador',
		'pl_' => 'Permisos de Plugins',
		'u_' => 'Permisos de Usuario',
		'global' => array(
			'm_' => 'Permisos de Moderacion Global',
		),
	),

	)
);

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_user' => array('lang' => 'Puede moderar Usuarios<br /><em>Esto incluye la vista del navegador usado via la lista de conectados.', 'cat' => 'user_group'),
	'acl_a_group' => array('lang' => 'Puede moderar Grupos', 'cat' => 'user_group'),

	'acl_a_modules' => array('lang' => 'Puede moderar Modulos', 'cat' => 'permissions'),
	'acl_a_viewauth' => array('lang' => 'Puede ver las mascaras de Permisos', 'cat' => 'permissions'),
	'acl_a_authgroups' => array('lang' => 'Puede alterar los permisos de grupos individuales', 'cat' => 'permissions'),
	'acl_a_authusers' => array('lang' => 'Puede alterar los permisos de Usuarios Individuales', 'cat' => 'permissions'),
	'acl_a_fauth' => array('lang' => 'Puede alterar las permisos del Foro', 'cat' => 'permissions'),
	'acl_a_mauth' => array('lang' => 'Puede alterar los permisos de Moderacion', 'cat' => 'permissions'),
	'acl_a_aauth' => array('lang' => 'Puede alterar los permisos de Administracion', 'cat' => 'permissions'),
	'acl_a_uauth' => array('lang' => 'Puede alterar los permisos de Usuarios', 'cat' => 'permissions'),
	'acl_a_roles' => array('lang' => 'Puede moderar los Roles', 'cat' => 'permissions'),
	)
);

// CMS Permissions
$lang = array_merge($lang, array(
	'acl_cms_admin' => array('lang' => 'Puede acceder al CMS', 'cat' => 'cms'),
	'acl_cms_settings' => array('lang' => 'Puede alterar los ajustes del CMS', 'cat' => 'cms'),
	'acl_cms_layouts' => array('lang' => 'Puede moderar Paginas CMS', 'cat' => 'cms'),
	'acl_cms_layouts_special' => array('lang' => 'Puede moderar Paginas estandar', 'cat' => 'cms'),
	'acl_cms_blocks' => array('lang' => 'Puede moderar Bloques', 'cat' => 'cms'),
	'acl_cms_blocks_global' => array('lang' => 'Puede moderar Bloques Globales', 'cat' => 'cms'),
	'acl_cms_permissions' => array('lang' => 'Puede moderar Permisos', 'cat' => 'cms'),
	'acl_cms_menu' => array('lang' => 'Puede Moderar el Menu de Navegacion', 'cat' => 'cms'),
	'acl_cms_ads' => array('lang' => 'Puede moderar Publicidad', 'cat' => 'cms'),

	// Only Local
	'acl_cmsl_admin' => array('lang' => 'Puede moderar contenido de pagina', 'cat' => 'layouts'),

	'acl_cmss_admin' => array('lang' => 'Puede moderar contenido de pagina', 'cat' => 'layouts'),

	'acl_cmsb_admin' => array('lang' => 'Puede moderar contenido de Bloques', 'cat' => 'blocks'),
	)
);

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_html' => array('lang' => 'Puede insertar HTML en mensajes', 'cat' => 'post'),

	'acl_f_topicdelete' => array('lang' => 'Puede borrar Temas', 'cat' => 'actions'),
	)
);

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_topicdelete' => array('lang' => 'Puede borrar Temas', 'cat' => 'topic_actions'),
	)
);

// Plugins Permissions
$lang = array_merge($lang, array(
	'acl_pl_admin' => array('lang' => 'Puede moderar contenido en Plugins', 'cat' => 'plugins_actions'),
	'acl_pl_input' => array('lang' => 'Puede insertar contenido en Plugins', 'cat' => 'plugins_actions'),
	'acl_pl_edit' => array('lang' => 'Puede editar contenido en Plugins', 'cat' => 'plugins_actions'),
	'acl_pl_delete' => array('lang' => 'Puede borrar contenido de Plugins', 'cat' => 'plugins_actions'),
	)
);

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_html' => array('lang' => 'Puede insertar HTML en Mensajes', 'cat' => 'post'),
	)
);


?>