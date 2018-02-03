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
	'ROLE_CMS_CONTENT_MANAGER' => 'Inhalt Manager',
	'ROLE_CMS_CONTENT_MANAGER_DESCRIPTION' => 'Volle Berechtigungen in CMS.',
	'ROLE_CMS_REVIEWER' => 'Kritiker',
	'ROLE_CMS_REVIEWER_DESCRIPTION' => 'Fast alle Berechtigungen im CMS, abgesehen von dem Entfernen von Blöcken.',
	'ROLE_CMS_PUBLISHER' => 'Herausgeber',
	'ROLE_CMS_PUBLISHER_DESCRIPTION' => 'Berechtigungen zum Hinzufügen von Inhalten.',
	'ROLE_CMS_USER' => 'Benutzer',
	'ROLE_CMS_USER_DESCRIPTION' => 'Berechtigungen zum Anzeigen von Inhalten.',
	'ROLE_CMS_GUEST' => 'Gast',
	'ROLE_CMS_GUEST_DESCRIPTION' => 'Keine Berechtigungen.',
	'ROLE_ADMIN_FULL' => 'Full Admin',
	'ROLE_ADMIN_FULL_DESCRIPTION' => 'Hat Zugriff auf alle administrativen Funktionen dieser Seite.',
	'ROLE_ADMIN_STANDARD' => 'Standard Admin',
	'ROLE_ADMIN_STANDARD_DESCRIPTION' => 'Hat Zugriff auf die meisten administrativen Funktionen, darf aber keine Server oder systembezogene Werkzeuge verwenden.',
	'ROLE_MOD_FULL' => 'Full Moderator',
	'ROLE_MOD_FULL_DESCRIPTION' => 'Kann alle Moderator-Werkzeuge verwenden.',
	'ROLE_MOD_STANDARD' => 'Standard Moderator',
	'ROLE_MOD_STANDARD_DESCRIPTION' => 'Kann die meisten Moderator-Werkzeuge verwenden.',
	'ROLE_MOD_SIMPLE' => 'Einfacher Moderator',
	'ROLE_MOD_SIMPLE_DESCRIPTION' => 'Kann nur grundlegende Themenaktionen verwenden.',
	'ROLE_USER_FULL' => 'Alle Funktionen',
	'ROLE_USER_FULL_DESCRIPTION' => 'Kann alle verfügbaren Funktionen für Benutzer verwenden.',
	'ROLE_USER_STANDARD' => 'Standard Funktionen',
	'ROLE_USER_STANDARD_DESCRIPTION' => 'Kann standardmäßig verfügbare Funktionen für Benutzer verwenden.',
	'ROLE_USER_LIMITED' => 'Limited Funktionen',
	'ROLE_USER_LIMITED_DESCRIPTION' => 'Kann nur einige der zur Verfügung stehenden Funktionen nutzen.',
	'ROLE_FORUM_FULL' => 'Voller Zugriff',
	'ROLE_FORUM_FULL_DESCRIPTION' => 'Kann alle Foren-Funktionen nutzen. Nicht für normale Benutzer empfohlen.',
	'ROLE_FORUM_STANDARD' => 'Standard Zugriff',
	'ROLE_FORUM_STANDARD_DESCRIPTION' => 'Kann die meisten Foren-Funktionen verwenden.',
	'ROLE_FORUM_NOACCESS' => 'Kein Zugriff',
	'ROLE_FORUM_NOACCES_DESCRIPTIONS' => 'Kann das Forum weder sehen, noch darauf zugreifen.',
	'ROLE_PLUGINS_FULL' => 'Voller Zugriff',
	'ROLE_PLUGINS_FULL_DESCRIPTION' => 'Kann alle PLUGINS-Funktionen nutzen. Nicht für normale Benutzer empfohlen.',
	'ROLE_PLUGINS_STANDARD' => 'Standard Zugriff',
	'ROLE_PLUGINS_STANDARD_DESCRIPTION' => 'Kann die meisten PLUGINS-Funktionen nutzen.',
	'ROLE_PLUGINS_NOACCESS' => 'Kein Zugriff',
	'ROLE_PLUGINS_NOACCESS_DESCRIPTION' => 'Kann die PLUGINS weder sehen, noch darauf zugreifen.',
	// ROLES - END

	)
);

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat' => array(
		'actions' => 'Actions',
		'blocks' => 'Blöcke',
		'cms' => 'CMS',
		'content' => 'Inhalt',
		'forums' => 'Foren',
		'layouts' => 'Seiten',
		'misc' => 'Misc',
		'permissions' => 'Berechtigungen',
		'plugins_actions' => 'Plugins Actions',
		'pm' => 'Private Nachrichten',
		'polls' => 'Umfragen',
		'post' => 'Beitrag',
		'post_actions' => 'Post actions',
		'posting' => 'Posting',
		'profile' => 'Profile',
		'settings' => 'Einstellungen',
		'topic_actions' => 'Topic actions',
		'user_group' => 'Benutzer &amp; Gruppen',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type' => array(
		'a_' => 'Admin permissions',
		'cms_' => 'CMS permissions',
		'cmsl_' => 'CMS pages permissions',
		'cmss_' => 'CMS standard pages permissions',
		'cmsb_' => 'CMS blocks permissions',
		'f_' => 'Forum permissions',
		'm_' => 'Moderator permissions',
		'pl_' => 'Plugins permissions',
		'u_' => 'User permissions',
		'global' => array(
			'm_' => 'Global moderator permissions',
		),
	),

	)
);

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_user' => array('lang' => 'Can manage users<br /><em>This also includes seeing the users browser agent within the viewonline list.</em>', 'cat' => 'user_group'),
	'acl_a_group' => array('lang' => 'Can manage groups', 'cat' => 'user_group'),

	'acl_a_modules' => array('lang' => 'Can manage modules', 'cat' => 'permissions'),
	'acl_a_viewauth' => array('lang' => 'Can view permission masks', 'cat' => 'permissions'),
	'acl_a_authgroups' => array('lang' => 'Can alter permissions for individual groups', 'cat' => 'permissions'),
	'acl_a_authusers' => array('lang' => 'Can alter permissions for individual users', 'cat' => 'permissions'),
	'acl_a_fauth' => array('lang' => 'Can alter forum permission class', 'cat' => 'permissions'),
	'acl_a_mauth' => array('lang' => 'Can alter moderator permission class', 'cat' => 'permissions'),
	'acl_a_aauth' => array('lang' => 'Can alter admin permission class', 'cat' => 'permissions'),
	'acl_a_uauth' => array('lang' => 'Can alter user permission class', 'cat' => 'permissions'),
	'acl_a_roles' => array('lang' => 'Can manage roles', 'cat' => 'permissions'),
	)
);

// CMS Permissions
$lang = array_merge($lang, array(
	'acl_cms_admin' => array('lang' => 'Can access CMS Management', 'cat' => 'cms'),
	'acl_cms_settings' => array('lang' => 'Can manage CMS Settings', 'cat' => 'cms'),
	'acl_cms_layouts' => array('lang' => 'Can manage CMS Pages', 'cat' => 'cms'),
	'acl_cms_layouts_special' => array('lang' => 'Can manage Standard Pages', 'cat' => 'cms'),
	'acl_cms_blocks' => array('lang' => 'Can manage Blocks', 'cat' => 'cms'),
	'acl_cms_blocks_global' => array('lang' => 'Can manage Global Blocks', 'cat' => 'cms'),
	'acl_cms_permissions' => array('lang' => 'Can manage Permissions', 'cat' => 'cms'),
	'acl_cms_menu' => array('lang' => 'Can manage Navigation Menu', 'cat' => 'cms'),
	'acl_cms_ads' => array('lang' => 'Kann Werbung verwalten', 'cat' => 'cms'),

	// Only Local
	'acl_cmsl_admin' => array('lang' => 'Kann Seiteninhalt verwalten', 'cat' => 'layouts'),

	'acl_cmss_admin' => array('lang' => 'Kann Seiteninhalt verwalten', 'cat' => 'layouts'),

	'acl_cmsb_admin' => array('lang' => 'Kann Blockinhalt verwalten', 'cat' => 'blocks'),
	)
);

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_html' => array('lang' => 'Kann HTML in Beiträge einfügen', 'cat' => 'post'),

	'acl_f_topicdelete' => array('lang' => 'Kann Themen löschen', 'cat' => 'actions'),
	)
);

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_topicdelete' => array('lang' => 'Kann Themen löschen', 'cat' => 'topic_actions'),
	)
);

// Plugins Permissions
$lang = array_merge($lang, array(
	'acl_pl_admin' => array('lang' => 'Kann Inhalte in Plugins verwalten', 'cat' => 'plugins_actions'),
	'acl_pl_input' => array('lang' => 'Kann Inhalte in Plugins einfügen', 'cat' => 'plugins_actions'),
	'acl_pl_edit' => array('lang' => 'Kann Inhalte in Plugins bearbeiten', 'cat' => 'plugins_actions'),
	'acl_pl_delete' => array('lang' => 'Kann Inhalte in Plugins entfernen', 'cat' => 'plugins_actions'),
	)
);

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_html' => array('lang' => 'Can insert HTML code in posts', 'cat' => 'post'),
	)
);


?>