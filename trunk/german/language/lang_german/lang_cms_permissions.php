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
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
* TheSteffen
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	die('Hacking attempt');
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_PERMISSIONS_EXPLAIN' => '
		<p>Permissions are highly granular and grouped into four major sections, which are:</p>

		<h2>Global Permissions</h2>
		<p>These are used to control access on a global level and apply to the entire bulletin board. They are further divided into Users’ Permissions, Groups’ Permissions, Administrators and Global Moderators.</p>

		<h2>Forum Based Permissions</h2>
		<p>These are used to control access on a per forum basis. They are further divided into Forum Permissions, Forum Moderators, Users’ Forum Permissions and Groups’ Forum Permissions.</p>

		<h2>Permission Roles</h2>
		<p>These are used to create different sets of permissions for the different permission types later being able to be assigned on a role-based basis. The default roles should cover the administration of bulletin boards large and small, though within each of the four divisions, you can add/edit/delete roles as you see fit.</p>

		<h2>Permission Masks</h2>
		<p>These are used to view the effective permissions assigned to Users, Moderators (Local and Global), Administrators or Forums.</p>

		<br />

		<p>For further information on setting up and managing permissions on your phpBB3 board, please see <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Chapter 1.5 of our Quick Start Guide</a>.</p>
	',

	'ACL_NEVER' => 'Niemals',
	'ACL_SET' => 'Setting permissions',
	'ACL_SET_EXPLAIN' => 'Permissions are based on a simple <samp>YES</samp>/<samp>NO</samp> system. Setting an option to <samp>NEVER</samp> for a user or usergroup overrides any other value assigned to it. If you do not wish to assign a value for an option for this user or group select <samp>NO</samp>. If values are assigned for this option elsewhere they will be used in preference, else <samp>NEVER</samp> is assumed. All objects marked (with the checkbox in front of them) will copy the permission set you defined.',
	'ACL_SETTING' => 'Setting',

	'ACL_TYPE_A_' => 'Administrative permissions',
	'ACL_TYPE_CMS_' => 'CMS permissions',
	'ACL_TYPE_F_' => 'Forum permissions',
	'ACL_TYPE_M_' => 'Moderative permissions',
	'ACL_TYPE_PL_' => 'Plugins permissions',
	'ACL_TYPE_U_' => 'User permissions',

	'ACL_TYPE_GLOBAL_A_' => 'Administrative permissions',
	'ACL_TYPE_GLOBAL_CMS_' => 'CMS permissions',
	'ACL_TYPE_GLOBAL_M_' => 'Global Moderator permissions',
	'ACL_TYPE_GLOBAL_PL_' => 'Plugins permissions',
	'ACL_TYPE_GLOBAL_U_' => 'User permissions',
	'ACL_TYPE_LOCAL_CMS_' => 'CMS permissions',
	'ACL_TYPE_LOCAL_CMSL_' => 'CMS pages permissions',
	'ACL_TYPE_LOCAL_CMSS_' => 'CMS standard pages permissions',
	'ACL_TYPE_LOCAL_CMSB_' => 'CMS blocks permissions',
	'ACL_TYPE_LOCAL_F_' => 'Forum permissions',
	'ACL_TYPE_LOCAL_M_' => 'Forum Moderator permissions',

	'ACL_NO' => 'No',
	'ACL_VIEW' => 'Viewing permissions',
	'ACL_VIEW_EXPLAIN' => 'Here you can see the effective permissions the user/group is having. A red square indicates that the user/group does not have the permission, a green square indicates that the user/group does have the permission.',
	'ACL_YES' => 'Yes',

	'ACP_ADMIN_ROLES' => 'Admin Roles',
	'ACP_CMS_ROLES' => 'CMS Roles',
	'ACP_FORUM_ROLES' => 'Forum Roles',
	'ACP_MOD_ROLES' => 'Moderator Roles',
	'ACP_PLUGINS_ROLES' => 'Plugins Roles',
	'ACP_USER_ROLES' => 'Global Roles',

	'ACP_ADMINISTRATORS_EXPLAIN' => 'Here you can assign administrator permissions to users or groups. All users with administrator permissions can view the administration control panel.',
	'ACP_FORUM_MODERATORS_EXPLAIN' => 'Here you can assign users and groups as forum moderators. To assign users access to forums, to define global moderative permissions or administrators please use the appropriate page.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN' => 'Here you can alter which users and groups can access which forums. To assign moderators or define administrators please use the appropriate page.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN' => 'Here you can copy forum permissions from one forum to one or more other forums.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN' => 'Here you can assign global moderator permissions to users or groups. These moderators are like ordinary moderators except they have access to every forum on your board.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN' => 'Here you can assign forum permissions to groups.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN' => 'Here you can assign global permissions to groups - user permissions, global moderator permissions and administrator permissions. User permissions include capabilities such as the use of avatars, sending private messages, et cetera; global moderator permissions such as approving posts, manage topics, manage bans, et cetera and lastly administrator permissions such as altering permissions, define custom BBCodes, manage forums, et cetera. Individual users permissions should only be changed in rare occasions, the preferred method is putting users in groups and assigning the group’s permissions.',
	'ACP_ADMIN_ROLES_EXPLAIN' => 'Roles for administrative permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',
	'ACP_CMS_ROLES_EXPLAIN' => 'Roles for CMS permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',
	'ACP_FORUM_ROLES_EXPLAIN' => 'Roles for forum permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',
	'ACP_MOD_ROLES_EXPLAIN' => 'Roles for moderative permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',
	'ACP_PLUGINS_ROLES_EXPLAIN' => 'Roles for Plugins permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',
	'ACP_USER_ROLES_EXPLAIN' => 'Roles for user permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN' => 'Here you can assign forum permissions to users.',
	'ACP_USERS_PERMISSIONS_EXPLAIN' => 'Here you can assign global permissions to users - user permissions, global moderator permissions and administrator permissions. User permissions include capabilities such as the use of avatars, sending private messages, et cetera; global moderator permissions such as approving posts, manage topics, manage bans, et cetera and lastly administrator permissions such as altering permissions, define custom BBCodes, manage forums, et cetera. To alter these settings for large numbers of users the Group permissions system is the preferred method. User’s permissions should only be changed in rare occasions, the preferred method is putting users in groups and assigning the group’s permissions.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN' => 'Here you can view the effective administrative permissions assigned to the selected users/groups.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN' => 'Here you can view the global moderative permissions assigned to the selected users/groups.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN' => 'Here you can view the forum permissions assigned to the selected users/groups and forums.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN' => 'Here you can view the forum moderator permissions assigned to the selected users/groups and forums.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN' => 'Here you can view the effective user permissions assigned to the selected users/groups.',

	'ADD_GROUPS' => 'Benutzergruppen hinzufügen',
	'ADD_PERMISSIONS' => 'Berechtigungen hinzufügen',
	'ADD_USERS' => 'Benutzer hinzufügen',
	'ADVANCED_PERMISSIONS' => 'Advanced Permissions',
	'ALL_GROUPS' => 'Alle Benutzergruppen auswählen',
	'ALL_NEVER' => 'Alle <samp>NIEMALS</samp>',
	'ALL_NO' => 'Alle <samp>NEIN</samp>',
	'ALL_USERS' => 'Alle Benutzer auswählen',
	'ALL_YES' => 'Alle <samp>JA</samp>',
	'APPLY_ALL_PERMISSIONS' => 'Alle Berechtigungen anlegen',
	'APPLY_PERMISSIONS' => 'Berechtigungen anlegen',
	'APPLY_PERMISSIONS_EXPLAIN' => 'The permissions and role defined for this item will only be applied to this item and all checked items.',
	'AUTH_UPDATED' => 'Permissions have been updated.',

	'COPY_PERMISSIONS_CONFIRM' => 'Are you sure you wish to carry out this operation? Please be aware that this will overwrite any existing permissions on the selected targets.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN' => 'The source forum you want to copy permissions from.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN' => 'The destination forums you want the copied permissions applied to.',
	'COPY_PERMISSIONS_FROM' => 'Copy permissions from',
	'COPY_PERMISSIONS_TO' => 'Apply permissions to',

	'CREATE_ROLE' => 'Funktion erstellen',
	'CREATE_ROLE_FROM' => 'Use settings from…',
	'CUSTOM' => 'Custom…',

	'DEFAULT' => 'Default',
	'DELETE_ROLE' => 'Delete role',
	'DELETE_ROLE_CONFIRM' => 'Are you sure you want to remove this role? Items having this role assigned will <strong>not</strong> lose their permission settings.',
	'DISPLAY_ROLE_ITEMS' => 'View items using this role',

	'EDIT_PERMISSIONS' => 'Berechtigungen bearbeiten',
	'EDIT_ROLE' => 'Funktion bearbeiten',

	'GROUPS_NOT_ASSIGNED' => 'Dieser Benutzergruppe wurde keine Funktion zugeteilt.',

	'ITEMS_SELECTED' => 'Ausgewählte Artikel',

	'LOOK_UP_GROUP' => 'Benutzergruppe nachschlagen',
	'LOOK_UP_USER' => 'Benutzer suchen',
	'LOOK_UP_CMS_L' => 'Select page',
	'LOOK_UP_CMS_L_EXPLAIN' => 'Page name is followed by page id between square brackets for reference',
	'LOOK_UP_CMS_S' => 'Select standard page',
	'LOOK_UP_CMS_S_EXPLAIN' => 'Page name is followed by page id between square brackets for reference',
	'LOOK_UP_CMS_B' => 'Select block',
	'LOOK_UP_CMS_B_EXPLAIN' => 'Block name is followed by block id between square brackets for reference',

	'MANAGE_GROUPS' => 'Manage groups',
	'MANAGE_USERS' => 'Manage users',

	'NO_AUTH_SETTING_FOUND' => 'Permission settings not defined.',
	'NO_ROLE_ASSIGNED' => 'Keine Funktion zugeteilt&hellip;',
	'NO_ROLE_ASSIGNED_EXPLAIN' => 'Setting to this role does not change permissions on the right. If you want to unset/remove all permissions you should use the “All <samp>NO</samp>” link.',
	'NO_ROLE_AVAILABLE' => 'Keine Funktion verfügbar',
	'NO_ROLE_NAME_SPECIFIED' => 'Bitte gib der Funktion einen Namen.',
	'NO_ROLE_SELECTED' => 'Funktion konnte nicht gefunden werden.',
	'NO_USER_GROUP_SELECTED' => 'You haven’t selected any user or group.',

	'ONLY_FORUM_DEFINED' => 'You only defined forums in your selection. Please also select at least one user or one group.',

	'PERMISSION_APPLIED_TO_ALL' => 'Permissions and role will also be applied to all checked objects',
	'PLUS_SUBFORUMS' => '+Subforums',

	'REMOVE_PERMISSIONS' => 'Berechtigungen zurücksetzen',
	'REMOVE_ROLE' => 'Funktion zurücksetzen',
	'RESULTING_PERMISSION' => 'Resultierende Berechtigungen',
	'ROLE' => 'Funktion',
	'ROLE_ADD_SUCCESS' => 'Funktion erfolgreich hinzugefügt.',
	'ROLE_ASSIGNED_TO' => 'Benutzer / Benutzergruppe zugeteilt zu %s',
	'ROLE_DELETED' => 'Funktion erfolgreich gelöscht.',
	'ROLE_DESCRIPTION' => 'Funktionsbeschreibung',

	'ROLE_ADMIN_FORUM' => 'Forum Admin',
	'ROLE_ADMIN_FULL' => 'Vollständiger Admin',
	'ROLE_ADMIN_STANDARD' => 'Standard Admin',
	'ROLE_ADMIN_USERGROUP' => 'Benutzer und Gruppen Admin',
	'ROLE_FORUM_BOT' => 'Bot Zugang',
	'ROLE_FORUM_FULL' => 'Vollständiger Zugang',
	'ROLE_FORUM_LIMITED' => 'Begrenzter Zugang',
	'ROLE_FORUM_LIMITED_POLLS' => 'Begrenzter Zugang + Umfragen',
	'ROLE_FORUM_NOACCESS' => 'Kein Zugang',
	'ROLE_FORUM_ONQUEUE' => 'On Moderation Queue',
	'ROLE_FORUM_POLLS' => 'Standard Zugang + Umfragen',
	'ROLE_FORUM_READONLY' => 'Nur lesen Zugang',
	'ROLE_FORUM_STANDARD' => 'Standard Zugang',
	'ROLE_FORUM_NEW_MEMBER' => 'Neulich registrierte Benutzer',
	'ROLE_MOD_FULL' => 'Vollständiger Moderator',
	'ROLE_MOD_QUEUE' => 'Folgender Moderator',
	'ROLE_MOD_SIMPLE' => 'Einfacher Moderator',
	'ROLE_MOD_STANDARD' => 'Standard Moderator',
	'ROLE_USER_FULL' => 'Alle Funktionen',
	'ROLE_USER_LIMITED' => 'Begrenzte Funktionen',
	'ROLE_USER_NOAVATAR' => 'Kein Avatar',
	'ROLE_USER_NOPM' => 'Keine privaten Nachrichten',
	'ROLE_USER_STANDARD' => 'Standard Funktionen',
	'ROLE_USER_NEW_MEMBER' => 'Neulich registrierte Benutzer',


	'ROLE_DESCRIPTION_ADMIN_FORUM' => 'Can access the forum management and forum permission settings.',
	'ROLE_DESCRIPTION_ADMIN_FULL' => 'Has access to all administrative functions of this board.<br />Not recommended.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD' => 'Has access to most administrative features but is not allowed to use server or system related tools.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP' => 'Can manage groups and users: Able to change permissions, settings, manage bans, and manage ranks.',
	'ROLE_DESCRIPTION_FORUM_BOT' => 'This role is recommended for bots and search spiders.',
	'ROLE_DESCRIPTION_FORUM_FULL' => 'Can use all forum features, including posting of announcements and stickies. Can also ignore the flood limit.<br />Not recommended for normal users.',
	'ROLE_DESCRIPTION_FORUM_LIMITED' => 'Can use some forum features, but cannot attach files or use post icons.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS' => 'As per Limited Access but can also create polls.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS' => 'Can neither see nor access the forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE' => 'Can use most forum features including attachments, but posts and topics need to be approved by a moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS' => 'Like Standard Access but can also create polls.',
	'ROLE_DESCRIPTION_FORUM_READONLY' => 'Can read the forum, but cannot create new topics or reply to posts.',
	'ROLE_DESCRIPTION_FORUM_STANDARD' => 'Can use most forum features including attachments and deleting own topics, but cannot lock own topics, and cannot create polls.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER' => 'A role for members of the special newly registered users group; contains <samp>NEVER</samp> permissions to lock features for new users.',
	'ROLE_DESCRIPTION_MOD_FULL' => 'Can use all moderating features, including banning.',
	'ROLE_DESCRIPTION_MOD_QUEUE' => 'Can use the Moderation Queue to validate and edit posts, but nothing else.',
	'ROLE_DESCRIPTION_MOD_SIMPLE' => 'Can only use basic topic actions. Cannot send warnings or use moderation queue.',
	'ROLE_DESCRIPTION_MOD_STANDARD' => 'Can use most moderating tools, but cannot ban users or change the post author.',
	'ROLE_DESCRIPTION_USER_FULL' => 'Can use all available forum features for users, including changing the user name or ignoring the flood limit.<br />Not recommended.',
	'ROLE_DESCRIPTION_USER_LIMITED' => 'Can access some of the user features. Attachments, e-mails, or instant messages are not allowed.',
	'ROLE_DESCRIPTION_USER_NOAVATAR' => 'Has a limited feature set and is not allowed to use the Avatar feature.',
	'ROLE_DESCRIPTION_USER_NOPM' => 'Has a limited feature set, and is not allowed to use Private Messages.',
	'ROLE_DESCRIPTION_USER_STANDARD' => 'Can access most but not all user features. Cannot change user name or ignore the flood limit, for instance.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER' => 'A role for members of the special newly registered users group; contains <samp>NEVER</samp> permissions to lock features for new users.',

	'ROLE_DESCRIPTION_EXPLAIN' => 'You are able to enter a short explanation of what the role is doing or for what it is meant for. The text you enter here will be displayed within the permissions screens too.',
	'ROLE_DESCRIPTION_LONG' => 'The role description is too long, please limit it to 4000 characters.',
	'ROLE_DETAILS' => 'Role details',
	'ROLE_EDIT_SUCCESS' => 'Role successfully edited.',
	'ROLE_NAME' => 'Role name',
	'ROLE_NAME_ALREADY_EXIST' => 'A role named <strong>%s</strong> already exist for the specified permission type.',
	'ROLE_NOT_ASSIGNED' => 'Role has not been assigned yet.',

	'SELECTED_BLOCK_NOT_EXIST' => 'The selected block(s) do not exist.',
	'SELECTED_LAYOUT_NOT_EXIST' => 'The selected CMS page(s) do not exist.',
	'SELECTED_LAYOUT_SPECIAL_NOT_EXIST' => 'The selected standard page(s) do not exist.',

	'SELECTED_FORUM_NOT_EXIST' => 'The selected forum(s) do not exist.',
	'SELECTED_GROUP_NOT_EXIST' => 'The selected group(s) do not exist.',
	'SELECTED_USER_NOT_EXIST' => 'The selected user(s) do not exist.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN' => 'The forum you select here will include all subforums into the selection.',
	'SELECT_ROLE' => 'Select role…',
	'SELECT_TYPE' => 'Select type',
	'SET_PERMISSIONS' => 'Set permissions',
	'SET_ROLE_PERMISSIONS' => 'Set role permissions',
	'SET_USERS_PERMISSIONS' => 'Set users permissions',
	'SET_USERS_FORUM_PERMISSIONS' => 'Set users forum permissions',

	'TRACE_DEFAULT' => 'By default every permission is <samp>NO</samp> (unset). So the permission can be overwritten by other settings.',
	'TRACE_FOR' => 'Trace for',
	'TRACE_GLOBAL_SETTING' => '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER' => 'This group’s permission is set to <samp>NEVER</samp> like the total result so the old result is kept.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL' => 'This group’s permission for this forum is set to <samp>NEVER</samp> like the total result so the old result is kept.',
	'TRACE_GROUP_NEVER_TOTAL_NO' => 'This group’s permission is set to <samp>NEVER</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL' => 'This group’s permission for this forum is set to <samp>NEVER</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES' => 'This group’s permission is set to <samp>NEVER</samp> which overwrites the total <samp>YES</samp> to a <samp>NEVER</samp> for this user.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL' => 'This group’s permission for this forum is set to <samp>NEVER</samp> which overwrites the total <samp>YES</samp> to a <samp>NEVER</samp> for this user.',
	'TRACE_GROUP_NO' => 'The permission is <samp>NO</samp> for this group so the old total value is kept.',
	'TRACE_GROUP_NO_LOCAL' => 'The permission is <samp>NO</samp> for this group within this forum so the old total value is kept.',
	'TRACE_GROUP_YES_TOTAL_NEVER' => 'This group’s permission is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL' => 'This group’s permission for this forum is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_GROUP_YES_TOTAL_NO' => 'This group’s permission is set to <samp>YES</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL' => 'This group’s permission for this forum is set to <samp>YES</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES' => 'This group’s permission is set to <samp>YES</samp> and the total permission is already set to <samp>YES</samp>, so the total result is kept.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL' => 'This group’s permission for this forum is set to <samp>YES</samp> and the total permission is already set to <samp>YES</samp>, so the total result is kept.',
	'TRACE_PERMISSION' => 'Trace permission - %s',
	'TRACE_RESULT' => 'Trace result',
	'TRACE_SETTING' => 'Trace setting',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES' => 'The forum independent user permission evaluates to <samp>YES</samp> but the total permission is already set to <samp>YES</samp>, so the total result is kept. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER' => 'The forum independent user permission evaluates to <samp>YES</samp> which overwrites the current local result <samp>NEVER</samp>. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT' => 'The forum independent user permission evaluates to <samp>NEVER</samp> which doesn’t influence the local permission. %sTrace global permission%s',

	'TRACE_USER_FOUNDER' => 'The user is a founder, therefore admin permissions are always set to <samp>YES</samp>.',
	'TRACE_USER_KEPT' => 'The user’s permission is <samp>NO</samp> so the old total value is kept.',
	'TRACE_USER_KEPT_LOCAL' => 'The user’s permission for this forum is <samp>NO</samp> so the old total value is kept.',
	'TRACE_USER_NEVER_TOTAL_NEVER' => 'The user’s permission is set to <samp>NEVER</samp> and the total value is set to <samp>NEVER</samp>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL' => 'The user’s permission for this forum is set to <samp>NEVER</samp> and the total value is set to <samp>NEVER</samp>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NO' => 'The user’s permission is set to <samp>NEVER</samp> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL' => 'The user’s permission for this forum is set to <samp>NEVER</samp> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_YES' => 'The user’s permission is set to <samp>NEVER</samp> and overwrites the previous <samp>YES</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL' => 'The user’s permission for this forum is set to <samp>NEVER</samp> and overwrites the previous <samp>YES</samp>.',
	'TRACE_USER_NO_TOTAL_NO' => 'The user’s permission is <samp>NO</samp> and the total value was set to NO so it defaults to <samp>NEVER</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL' => 'The user’s permission for this forum is <samp>NO</samp> and the total value was set to NO so it defaults to <samp>NEVER</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER' => 'The user’s permission is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL' => 'The user’s permission for this forum is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_USER_YES_TOTAL_NO' => 'The user’s permission is set to <samp>YES</samp> which becomes the total value because it was set to <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL' => 'The user’s permission for this forum is set to <samp>YES</samp> which becomes the total value because it was set to <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_YES' => 'The user’s permission is set to <samp>YES</samp> and the total value is set to <samp>YES</samp>, so nothing is changed.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL' => 'The user’s permission for this forum is set to <samp>YES</samp> and the total value is set to <samp>YES</samp>, so nothing is changed.',
	'TRACE_WHO' => 'Who',
	'TRACE_TOTAL' => 'Total',

	'USERS_NOT_ASSIGNED' => 'No user assigned to this role',
	'USER_IS_MEMBER_OF_DEFAULT' => 'is a member of the following pre-defined groups',
	'USER_IS_MEMBER_OF_CUSTOM' => 'is a member of the following user defined groups',
	'USERNAMES_EXPLAIN' => 'Setze jeden Benutzernamen in eine separate Zeile.',

	'VIEW_ASSIGNED_ITEMS' => 'View assigned items',
	'VIEW_LOCAL_PERMS' => 'Local permissions',
	'VIEW_GLOBAL_PERMS' => 'Global permissions',
	'VIEW_PERMISSIONS' => 'View permissions',

	'WRONG_PERMISSION_TYPE' => 'Wrong permission type selected.',
	'WRONG_PERMISSION_SETTING_FORMAT' => 'The permission settings are in a wrong format, phpBB is not able to process them correctly.',
	)
);

?>