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
	'cms_page_name_blogs' => 'Blogs',

	'9000_BLOGS' => 'Blogs',
	'9110_BLOGS_CONFIG' => 'Configuration',
	'PLUGIN_BLOGS_GENERAL' => 'General',
	'PLUGIN_BLOGS_VARIOUS' => 'Various',
	'ACP_BLOGS' => 'Blogs',
	'ACP_BLOGS_EXPLAIN' => 'In this page you can configure settings for Blogs',
	'BLOGS_CONFIG_01' => 'Config One',
	'BLOGS_CONFIG_01_EXPLAIN' => 'Config One Explain',
	'BLOGS_CONFIG_02' => 'Config Two',
	'BLOGS_CONFIG_02_EXPLAIN' => 'Config Two Explain',

	'BLOGS_PAGE' => 'Blogs',
	'MUST_ENTER_BLOG' => 'You have to fill at least title and description.',
	'BLOG_ADD' => 'Add Blog',
	'BLOG_ADDED' => 'Blog Added',
	'BLOG_UPDATED' => 'Blog Updated',
	'BLOG_REMOVED' => 'Blog Removed',
	'BLOG_ARTICLE_ADDED' => 'Article added successfully',
	'BLOG_ARTICLE_UPDATED' => 'Article updated successfully',
	'BLOG_ARTICLE_REMOVED' => 'Article removed successfully',
	'BLOG_COMMENT_ADDED' => 'Comment added successfully',
	'BLOG_COMMENT_UPDATED' => 'Comment updated successfully',
	'BLOG_COMMENT_REMOVED' => 'Comment removed successfully',
	'BLOG_VIEW' => 'View Blogs',
	'BLOG_ARTICLE_VIEW' => 'View Article',
	'BLOGS_RESYNC' => 'Resync',
	'BLOGS_RESYNCHED' => 'Blogs resynched successfully',
	'NO_BLOG_ID' => 'Wrong or no blog id specified, please select a valid blog',
	'NO_BLOG_TOPIC_ID' => 'Wrong or no article id specified',
	'NO_BLOG_POST_ID' => 'Wrong or no comment id specified',
	'NO_BLOG_ARTICLES' => 'No articles have been posted yet',
	'NO_BLOG_COMMENTS' => 'No comments have been posted yet',
	'NO_BLOGS' => 'No Blogs',
	'CLICK_RETURN_BLOGS' => 'Click %sHere%s to return to Blogs',
	'CLICK_RETURN_BLOG' => 'Click %sHere%s to return to the blog',
	'CLICK_RETURN_ARTICLE' => 'Click %sHere%s to return to the article',

	'BLOG_LINK_ALL_ARTICLES' => 'All Articles',
	'BLOG_LINK_POST_ARTICLE' => 'Post new article',
	'BLOGS_LINK_ALL' => 'All Blogs',

	'BLOGS_BLOG_ID' => 'Blog ID',
	'BLOGS_USER_ID_CREATE' => 'Blogs Poster',
	'BLOGS_USER_ID_UPDATE' => 'Blogs Last Poster',
	'BLOGS_TIME_CREATION' => 'Submission',
	'BLOGS_TIME_UPDATE' => 'Last Update',
	'BLOGS_TITLE' => 'Title',
	'BLOGS_DESCRIPTION' => 'Description',
	'BLOGS_REPLY' => 'Reply',
	'BLOGS_STATUS' => 'Status',
	'BLOGS_STATUS_DISABLED' => 'Disabled',
	'BLOGS_STATUS_ENABLED' => 'Enabled',
	'BLOGS_STATUS_HIDDEN' => 'Hidden',
	'BLOGS_OWNER' => 'Owner',
	'BLOGS_NOTIFICATIONS' => 'Email Notifications On New Comments',
	'BLOGS_AUTH_READ' => 'Read Permission',
	'BLOGS_AUTH_POST' => 'Post Permission',
	'BLOGS_AUTH_REPLY' => 'Reply Permission',
	'BLOGS_AUTH_EDIT' => 'Edit Permission',
	'BLOGS_AUTH_DELETE' => 'Delete Permission',
	'BLOGS_AUTH_ALL' => 'All',
	'BLOGS_AUTH_REG' => 'Registered Users',
	'BLOGS_AUTH_OWNER' => 'Owner',

	'BLOGS_TOPIC_ID' => 'Article ID',
	'BLOGS_TOPIC_TITLE' => 'Article Title',
	'BLOGS_TOPIC_TIME' => 'Date',
	'BLOGS_TOPIC_POSTER' => 'Author',
	'BLOGS_TOPIC_APPROVED' => 'Approved',

	'BLOGS_POST_ID' => 'Comment ID',
	'BLOGS_POST_IP' => 'IP Address',
	'BLOGS_POST_EMAIL' => 'Email',
	'BLOGS_POST_USERNAME' => 'Username',
	'BLOGS_POST_SUBJECT' => 'Subject',
	'BLOGS_POST_TEXT' => 'Message',
	'BLOGS_POST_OPTIONS' => 'Options',
	'BLOGS_POSTED_BY' => 'Posted by %s &bull; %s',
	'BLOGS_POST_COMMENT' => 'Write a comment',
	'BLOGS_POST_COMMENTS' => 'Comments',

	'BLOGS_ERROR_MESSAGE' => 'Please click the back button and fill all requested fields',
	'BLOGS_ERROR_EMPTY_USERNAME' => 'Username cannot be empty',
	'BLOGS_ERROR_EMPTY_TITLE' => 'Message title cannot be empty',
	'BLOGS_ERROR_EMPTY_MESSAGE' => 'Message cannot be empty',

	)
);

?>