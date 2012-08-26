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
	'ROLE_CMS_PUBLISHER_DESCRIPTION' => 'Permisos para a&ntilde;adir contenido.',
	'ROLE_CMS_USER' => 'Usuario',
	'ROLE_CMS_USER_DESCRIPTION' => 'Permisos de ver contenido.',
	'ROLE_CMS_GUEST' => 'Visitante',
	'ROLE_CMS_GUEST_DESCRIPTION' => 'No tiene permisos.',
	'ROLE_ADMIN_FULL' => 'Admin principal',
	'ROLE_ADMIN_FULL_DESCRIPTION' => 'Tiene accesso a todas las tareas administrativas.',
	'ROLE_ADMIN_STANDARD' => 'Standard Admin',
	'ROLE_ADMIN_STANDARD_DESCRIPTION' => 'Tiene accesso a casi todas las tareas administrativas, pero no puede usar Tareas relacionadas con Usuarios o Servidor.',
	'ROLE_MOD_FULL' => 'Full Moderator',
	'ROLE_MOD_FULL_DESCRIPTION' => 'Puede usar todos los Herramientas de Moderacion',
	'ROLE_MOD_STANDARD' => 'Standard Moderator',
	'ROLE_MOD_STANDARD_DESCRIPTION' => 'Puede usar casi todos los Herramientas de Moderacion.',
	'ROLE_MOD_SIMPLE' => 'Moderator Simple',
	'ROLE_MOD_SIMPLE_DESCRIPTION' => 'Solo puede usar Herramientas basicas.',
	'ROLE_USER_FULL' => 'Todas las Funciones',
	'ROLE_USER_FULL_DESCRIPTION' => 'Puede usar todas las funciones de Usuarios.',
	'ROLE_USER_STANDARD' => 'Funciones estandart',
	'ROLE_USER_STANDARD_DESCRIPTION' => 'Solo puede usar las Funciones estandart de Usuarios.',
	'ROLE_USER_LIMITED' => 'Funciones limitadas',
	'ROLE_USER_LIMITED_DESCRIPTION' => 'Solo puede usar unas pocos funciones de Usuarios.',
	'ROLE_FORUM_FULL' => 'Accesso completo',
	'ROLE_FORUM_FULL_DESCRIPTION' => 'Puede usar todas las funciones del Foro. No recomendado para Usuarios basicos.',
	'ROLE_FORUM_STANDARD' => 'Acceso estandart',
	'ROLE_FORUM_STANDARD_DESCRIPTION' => 'Puede usar la mayoria de las funciones del Foro.',
	'ROLE_FORUM_NOACCESS' => 'Sin accesso',
	'ROLE_FORUM_NOACCES_DESCRIPTIONS' => 'No puede ver ni acceder al Foro.',
	'ROLE_PLUGINS_FULL' => 'Accesso completo',
	'ROLE_PLUGINS_FULL_DESCRIPTION' => 'Puede usar todas las funciones de PLugins. No recomendado para Usuarios basicos.',
	'ROLE_PLUGINS_STANDARD' => 'Acceso estandart',
	'ROLE_PLUGINS_STANDARD_DESCRIPTION' => 'Puede usar la mayoria de las funciones de Plugins.',
	'ROLE_PLUGINS_NOACCESS' => 'Sin Accesso',
	'ROLE_PLUGINS_NOACCES_DESCRIPTIONS' => 'No puede ver ni acceder a PLUGINS.',
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
		'layouts' => 'Paginas',
		'misc' => 'Misclanea',
		'permissions' => 'Permisos',
		'plugins_actions' => 'Acciones Plugins',
		'pm' => 'Mensajes privados',
		'polls' => 'Encuestas',
		'post' => 'Post',
		'post_actions' => 'Acciones de Posteo',
		'posting' => 'Postear',
		'profile' => 'Perfil',
		'settings' => 'Ajustes',
		'topic_actions' => 'Acciones de Tema',
		'user_group' => 'Grupos &amp; del Usuario',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type' => array(
		'a_' => 'Permisos de Admin',
		'cms_' => 'Permisos CMS',
		'cmsl_' => 'Permisos paginas CMS',
		'cmss_' => 'Permisos paginas estandart CM',
		'cmsb_' => 'Permisos Bloques CMS',
		'f_' => 'Permisos Foro',
		'm_' => 'Permisos Moderador',
		'pl_' => 'Permisos Plugins',
		'u_' => 'Permisos Usuarios',
		'global' => array(
			'm_' => 'Permisos de Moderacion Global',
		),
	),

	)
);

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_user' => array('lang' => 'Puede moderar Usuarios<br /><em>Esto incluye la vista del navegador usado via la lista de conectados.</em>', 'cat' => 'user_group'),
	'acl_a_group' => array('lang' => 'Puede moderar Grupos', 'cat' => 'user_group'),

	'acl_a_modules' => array('lang' => 'Puede moderar Modulos', 'cat' => 'permissions'),
	'acl_a_viewauth' => array('lang' => 'Puede ver las mascaras de Permisos', 'cat' => 'permissions'),
	'acl_a_authgroups' => array('lang' => 'Puede alterar las mascaras de permisos', 'cat' => 'permissions'),
	'acl_a_authusers' => array('lang' => 'Puede alterar las permisos de Usuarios Individuales', 'cat' => 'permissions'),
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
	'acl_cms_layouts_special' => array('lang' => 'Puede moderar Paginas estandart CMS', 'cat' => 'cms'),
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
	'acl_f_html' => array('lang' => 'Puede insertar HTML en Posts', 'cat' => 'post'),

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
	'acl_u_html' => array('lang' => 'Puede insertar HTML en Posts', 'cat' => 'post'),
	)
);


?>