<?php
/**
*
* @package Icy Phoenix
* @version $Id: $
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
	'9000_GUESTBOOKS' => 'Gästebuch',
	'9110_GUESTBOOKS_CONFIG' => 'Konfiguration',
	'PLUGIN_GUESTBOOKS_GENERAL' => 'Allgemein',
	'ACP_GUESTBOOKS' => 'Gästebücher',
	'ACP_GUESTBOOKS_EXPLAIN' => 'In this page you can configure settings for Guestbooks',
	'GUESTBOOKS_CONFIG_01' => 'Config One',
	'GUESTBOOKS_CONFIG_01_EXPLAIN' => 'Config One Explain',
	'GUESTBOOKS_CONFIG_02' => 'Config Two',
	'GUESTBOOKS_CONFIG_02_EXPLAIN' => 'Config Two Explain',

	'GUESTBOOKS_PAGE' => 'Gästebücher',
	'GUESTBOOK_PAGE' => 'Gästebuch',
	'MUST_ENTER_GUESTBOOK' => 'Du mußt wenigstens einen Titel und eine Nachricht angeben.',
	'GUESTBOOK_ADD' => 'Gästebuch hinzufügen',
	'GUESTBOOK_ADDED' => 'Gästebuch hinzugefügt',
	'GUESTBOOK_UPDATED' => 'Gästebuch aktualisiert',
	'GUESTBOOK_REMOVED' => 'Gästebuch entfernt',
	'GUESTBOOK_POST_ADDED' => 'Message added successfully',
	'GUESTBOOK_POST_UPDATED' => 'Message updated successfully',
	'GUESTBOOK_POST_REMOVED' => 'Message removed successfully',
	'GUESTBOOK_VIEW' => 'View Guestbooks',
	'NO_GUESTBOOK_ID' => 'Wrong or no guestbook id specified, please select a valid guestbook',
	'NO_GUESTBOOK_POST_ID' => 'Wrong or no message id specified',
	'NO_GUESTBOOK_POSTS' => 'No messages have been posted yet',
	'NO_GUESTBOOKS' => 'No Guestbooks',
	'CLICK_RETURN_GUESTBOOKS' => 'Click %sHere%s to return to Guestbooks',
	'CLICK_RETURN_GUESTBOOK' => 'Click %sHere%s to return to the guestbook',
	'CLICK_RETURN_POST' => 'Click %sHere%s to return to the message',

	'GUESTBOOKS_LINK_ALL' => 'All Guestbooks',
	'GUESTBOOKS_LINK_POST_MESSAGE' => 'Post a message',

	'GUESTBOOKS_GUESTBOOK_ID' => 'Guestbook ID',
	'GUESTBOOKS_USER_ID_CREATE' => 'Guestbook Poster',
	'GUESTBOOKS_USER_ID_UPDATE' => 'Guestbook Last Poster',
	'GUESTBOOKS_TIME_CREATION' => 'Submission',
	'GUESTBOOKS_TIME_UPDATE' => 'Last Update',
	'GUESTBOOKS_TITLE' => 'Title',
	'GUESTBOOKS_DESCRIPTION' => 'Description',
	'GUESTBOOKS_REPLY' => 'Reply',
	'GUESTBOOKS_STATUS' => 'Status',
	'GUESTBOOKS_STATUS_DISABLED' => 'Disabled',
	'GUESTBOOKS_STATUS_ENABLED' => 'Enabled',
	'GUESTBOOKS_STATUS_HIDDEN' => 'Hidden',
	'GUESTBOOKS_OWNER' => 'Owner',
	'GUESTBOOKS_NOTIFICATIONS' => 'Email Notifications On New Messages',
	'GUESTBOOKS_AUTH_READ' => 'Read Permission',
	'GUESTBOOKS_AUTH_POST' => 'Post Permission',
	'GUESTBOOKS_AUTH_EDIT' => 'Edit Permission',
	'GUESTBOOKS_AUTH_DELETE' => 'Delete Permission',
	'GUESTBOOKS_AUTH_ALL' => 'All',
	'GUESTBOOKS_AUTH_REG' => 'Registered Users',
	'GUESTBOOKS_AUTH_OWNER' => 'Owner',

	'GUESTBOOKS_POST_POSTER' => 'Author',
	'GUESTBOOKS_POST_TIME' => 'Date',
	'GUESTBOOKS_POST_ID' => 'Post ID',
	'GUESTBOOKS_POST_IP' => 'IP Address',
	'GUESTBOOKS_POST_EMAIL' => 'Email',
	'GUESTBOOKS_POST_USERNAME' => 'Username',
	'GUESTBOOKS_POST_SUBJECT' => 'Subject',
	'GUESTBOOKS_POST_TEXT' => 'Message',
	'GUESTBOOKS_POST_OPTIONS' => 'Options',
	'GUESTBOOKS_POSTED_BY' => 'Posted by %s &bull; %s',
	'GUESTBOOKS_POST_POST' => 'Write a message',
	'GUESTBOOKS_POST_POSTS' => 'Messages',

	'GUESTBOOKS_ERROR_MESSAGE' => 'Please click the back button and fill all requested fields',
	'GUESTBOOKS_ERROR_EMPTY_USERNAME' => 'Username cannot be empty',
	'GUESTBOOKS_ERROR_EMPTY_TITLE' => 'Message title cannot be empty',
	'GUESTBOOKS_ERROR_EMPTY_MESSAGE' => 'Message cannot be empty',

	)
);

?>