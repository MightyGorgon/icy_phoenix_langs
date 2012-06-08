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
	'ROLE_CMS_CONTENT_MANAGER' => 'Tartalomkezelő',
	'ROLE_CMS_CONTENT_MANAGER_DESCRIPTION' => 'Teljes hozzáférés a CMS-ben',
	'ROLE_CMS_REVIEWER' => 'Áttekintő',
	'ROLE_CMS_REVIEWER_DESCRIPTION' => 'Majdnem teljes hozzáférés a CMS-ben, kivéve a blokkok eltávolítása.',
	'ROLE_CMS_PUBLISHER' => 'Közzétevő',
	'ROLE_CMS_PUBLISHER_DESCRIPTION' => 'Hozzáférés új tartalom hozzáadásához.',
	'ROLE_CMS_USER' => 'Felhasználó',
	'ROLE_CMS_USER_DESCRIPTION' => 'Hozzáférés a tartalmak megtekintéséhez.',
	'ROLE_CMS_GUEST' => 'Vendég',
	'ROLE_CMS_GUEST_DESCRIPTION' => 'Nincs jogosultság.',
	'ROLE_ADMIN_FULL' => 'Full Admin',
	'ROLE_ADMIN_FULL_DESCRIPTION' => 'Teljes hozzáférés az oldal adminisztratív területeihez.',
	'ROLE_ADMIN_STANDARD' => 'Általános Admin',
	'ROLE_ADMIN_STANDARD_DESCRIPTION' => 'Hozzáférés a legtöbb adinisztrátori területhez, de nem jogosult a rendszer és a szerver beállításainak változtásához.',
	'ROLE_MOD_FULL' => 'Full Moderátor',
	'ROLE_MOD_FULL_DESCRIPTION' => 'Hozzáférés az összes moderátori eszközhöz.',
	'ROLE_MOD_STANDARD' => 'Általános Moderátor',
	'ROLE_MOD_STANDARD_DESCRIPTION' => 'Hozzáférés a legtöbb moderátori eszközhöz.',
	'ROLE_MOD_SIMPLE' => 'Egyszerű Moderátor',
	'ROLE_MOD_SIMPLE_DESCRIPTION' => 'Hozzáférés általános témaműveletekhez.',
	'ROLE_USER_FULL' => 'Összes lehetőség',
	'ROLE_USER_FULL_DESCRIPTION' => 'Összes felhasználói területekhez hozzáférés.',
	'ROLE_USER_STANDARD' => 'Általános lehetőségek',
	'ROLE_USER_STANDARD_DESCRIPTION' => 'Általános felhasználói területekhez hozzáférés.',
	'ROLE_USER_LIMITED' => 'Korlátozott lehetőségek',
	'ROLE_USER_LIMITED_DESCRIPTION' => 'Csak néhány felhasználói területhez hozzáférés.',
	'ROLE_FORUM_FULL' => 'Teljes hozzáférés',
	'ROLE_FORUM_FULL_DESCRIPTION' => 'Összes fórum-területhez hozzáférés. Normál felhasználóknak nem ajánlott.',
	'ROLE_FORUM_STANDARD' => 'Általános hozzáférés',
	'ROLE_FORUM_STANDARD_DESCRIPTION' => 'Legtöbb fórum-területhez hozzáférés.',
	'ROLE_FORUM_NOACCESS' => 'Semmi hozzáférés',
	'ROLE_FORUM_NOACCES_DESCRIPTIONS' => 'Nem láthatja és nem is férhet hozzá a fórumhoz.',
	'ROLE_PLUGINS_FULL' => 'Teljes hozzáférés',
	'ROLE_PLUGINS_FULL_DESCRIPTION' => 'Hozzáférés az összes PLUGIN területhez. Normál felhasználóknak nem ajánlott.',
	'ROLE_PLUGINS_STANDARD' => 'Általános hozzáférés',
	'ROLE_PLUGINS_STANDARD_DESCRIPTION' => 'Hozzáférés a legtöbb PLUGIN területhez.',
	'ROLE_PLUGINS_NOACCESS' => 'Semmi hozzáférés',
	'ROLE_PLUGINS_NOACCES_DESCRIPTIONS' => 'Nem láthatja és nem is férhet hozzá a PLUGIN területhez.',
	// ROLES - END

	)
);

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat' => array(
		'actions' => 'Műveletek',
		'blocks' => 'Blokkok',
		'cms' => 'CMS',
		'content' => 'Tartalom',
		'forums' => 'Fórumok',
		'layouts' => 'Oldalak',
		'misc' => 'Egyéb',
		'permissions' => 'Jogosultságok',
		'plugins_actions' => 'Plugin műveletek',
		'pm' => 'Privát üzenetek',
		'polls' => 'Szavazások',
		'post' => 'Hozzászólás',
		'post_actions' => 'Hozzászólás műveletek',
		'posting' => 'Hozzászólás',
		'profile' => 'Profil',
		'settings' => 'Beállítások',
		'topic_actions' => 'Témaműveletek',
		'user_group' => 'Tagok &amp; Csoportok',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type' => array(
		'a_' => 'Admin jogosultságok',
		'cms_' => 'CMS jogosultságok',
		'cmsl_' => 'CMS oldal jogosultságok',
		'cmss_' => 'CMS rendszeroldal jogosultságok',
		'cmsb_' => 'CMS blokk jogosultságok',
		'f_' => 'Fórum jogosultságok',
		'm_' => 'Moderátori jogosultságok',
		'pl_' => 'Plugin jogosultságok',
		'u_' => 'Felhasználói jogosultságok',
		'global' => array(
			'm_' => 'Globális moderátori jogosultságok',
		),
	),

	)
);

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_user' => array('lang' => 'Kezelheti a felhasználókat<br /><em>Ebbe beletartoznak azok a felhasználók is, akik a Ki van itt? listában nem látszanak.</em>', 'cat' => 'user_group'),
	'acl_a_group' => array('lang' => 'Kezelheti a csoportokat', 'cat' => 'user_group'),

	'acl_a_modules' => array('lang' => 'Kezelheti a modulokat', 'cat' => 'permissions'),
	'acl_a_viewauth' => array('lang' => 'Jogosultsági szerepek megtekintése', 'cat' => 'permissions'),
	'acl_a_authgroups' => array('lang' => 'Megváltoztathatja egyénileg a csoportok jogosultságát', 'cat' => 'permissions'),
	'acl_a_authusers' => array('lang' => 'Megváltoztathatja egyénileg a felhasználók jogosultságát', 'cat' => 'permissions'),
	'acl_a_fauth' => array('lang' => 'Megváltoztathatja a fórum jogosultságokat', 'cat' => 'permissions'),
	'acl_a_mauth' => array('lang' => 'Megváltoztathatja a moderátori jogosultságokat', 'cat' => 'permissions'),
	'acl_a_aauth' => array('lang' => 'Megváltoztathatja az adminisztrátori jogosultságokat', 'cat' => 'permissions'),
	'acl_a_uauth' => array('lang' => 'Megváltoztathatja a felhasználói jogosultságokat', 'cat' => 'permissions'),
	'acl_a_roles' => array('lang' => 'Kezelheti a szerepeket', 'cat' => 'permissions'),
	)
);

// CMS Permissions
$lang = array_merge($lang, array(
	'acl_cms_admin' => array('lang' => 'Kezelheti a CMS kezelőt', 'cat' => 'cms'),
	'acl_cms_settings' => array('lang' => 'Kezelheti a CMS beállításokat', 'cat' => 'cms'),
	'acl_cms_layouts' => array('lang' => 'Kezelheti a CMS oldalakat', 'cat' => 'cms'),
	'acl_cms_layouts_special' => array('lang' => 'Kezelheti a rendszeroldalakat', 'cat' => 'cms'),
	'acl_cms_blocks' => array('lang' => 'Kezelheti a blokkokat', 'cat' => 'cms'),
	'acl_cms_blocks_global' => array('lang' => 'Kezelheti a globális blokkokat', 'cat' => 'cms'),
	'acl_cms_permissions' => array('lang' => 'Kezelheti a jogosultságokat', 'cat' => 'cms'),
	'acl_cms_menu' => array('lang' => 'Kezelheti a navigációs menüt', 'cat' => 'cms'),
	'acl_cms_ads' => array('lang' => 'Kezelheti a hirdetéseket', 'cat' => 'cms'),

	// Only Local
	'acl_cmsl_admin' => array('lang' => 'Kezelheti az oldalak tartalmait', 'cat' => 'layouts'),

	'acl_cmss_admin' => array('lang' => 'Kezelheti az oldalak tartalmait', 'cat' => 'layouts'),

	'acl_cmsb_admin' => array('lang' => 'Kezelheti a blokkok tartalait', 'cat' => 'blocks'),
	)
);

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_html' => array('lang' => 'Használhat HTML kódokat a hozzászólásaiban', 'cat' => 'post'),

	'acl_f_topicdelete' => array('lang' => 'Törölhet témákat', 'cat' => 'actions'),
	)
);

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_topicdelete' => array('lang' => 'Törölhet témákat', 'cat' => 'topic_actions'),
	)
);

// Plugins Permissions
$lang = array_merge($lang, array(
	'acl_pl_admin' => array('lang' => 'Kezelheti a Plugin-ek tartalmait', 'cat' => 'plugins_actions'),
	'acl_pl_input' => array('lang' => 'Beilleszthet tartalmat a Plugin-ekbe', 'cat' => 'plugins_actions'),
	'acl_pl_edit' => array('lang' => 'Szerkesztheti a Plugin-ek tartalmait', 'cat' => 'plugins_actions'),
	'acl_pl_delete' => array('lang' => 'Eltávolíthatja a Plugin-ek tartalmait', 'cat' => 'plugins_actions'),
	)
);

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_html' => array('lang' => 'Használhat HTML kódokat a hozzászólásaiban', 'cat' => 'post'),
	)
);


?>