<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 110 2009-07-14 08:09:47Z Mighty Gorgon $
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

$lang = array_merge($lang, array (
  'menu_item' => 
  array (
    'quick_links' => NULL,
    'main_links' => NULL,
    'tools_links' => NULL,
    'news_links' => NULL,
    'users_links' => NULL,
    'info_links' => NULL,
    'sponsors_links' => NULL,
    'acp' => NULL,
    'activity' => NULL,
    'ajax_chat' => NULL,
    'album' => NULL,
    'calendar' => NULL,
    'chat' => NULL,
    'cms' => NULL,
    'cms_config' => NULL,
    'cms_pages_permissions' => NULL,
    'contact_us' => NULL,
    'credits' => NULL,
    'digests' => NULL,
    'downloads' => NULL,
    'faq' => NULL,
    'forum' => NULL,
    'games' => NULL,
    'guestbook' => NULL,
    'home' => NULL,
    'kb' => NULL,
    'links' => NULL,
    'login' => NULL,
    'memberlist' => NULL,
    'news' => NULL,
    'news_cat' => NULL,
    'news_arc' => NULL,
    'private_messages' => NULL,
    'profile' => NULL,
    'ranks' => NULL,
    'recent_topics' => NULL,
    'referrers' => NULL,
    'register' => NULL,
    'rss' => NULL,
    'rules' => NULL,
    'search' => NULL,
    'shoutbox' => NULL,
    'site_hist' => NULL,
    'staff' => NULL,
    'statistics' => NULL,
    'sudoku' => NULL,
    'unread' => NULL,
    'usergroups' => NULL,
    'viewonline' => NULL,
  ),
  'cat_item' => 
  array (
    'quick_links' => NULL,
    'main_links' => NULL,
    'tools_links' => NULL,
    'news_links' => NULL,
    'users_links' => NULL,
    'info_links' => NULL,
    'sponsors_links' => NULL,
  ),
))
?>