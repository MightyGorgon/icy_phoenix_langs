<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/* translation
                           
   ���������� �� �������: ��������� �������(zver) zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
It is translated into Russian: Mel'nikov Nikolay(zver)   zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
                    
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

$lang['BBC_IP_CREDITS_STATIC'] = '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="http://www.icyphoenix.com/images/logo_ip.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #ff5500;"><b>Mighty Gorgon</b></span><br />
<i>(Luca Libralato)</i><br />
<b><i>Developer</i></b><br />
Interests: Heroes Of Might And Magic III, 69, #FF5522<br />
Location: Homer\'s Head<br />
<br />
<br />
<span style="color: #dd2222;"><b>Bicet</b></span><br />
<b><i>phpBB XS Developer</i></b><br />
<br />
<br />
<span style="color: #dd2222;"><b>hpl</b></span><br />
<b><i>Some Special Contributions</i></b><br />
<br />
<br />
<b><i>Valued Contributors</i></b><br />
<span style="color: #228822;"><b>Andrea75</b></span><br />
<span style="color: #dd2222;"><b>Artie</b></span><br />
<span style="color: #0000bb;"><b>brandsrus</b></span><br />
<span style="color: #228822;"><b>buldo</b></span><br />
<span style="color: #228822;"><b>casimedicos</b></span><br />
<span style="color: #228822;"><b>Chaotic</b></span><br />
<span style="color: #dd2222;"><b>CyberAlien</b></span><br />
<span style="color: #228822;"><b>difus</b></span><br />
<span style="color: #228822;"><b>DWho</b></span><br />
<span style="color: #228822;"><b>fracs</b></span><br />
<span style="color: #880088;"><b>ganesh</b></span><br />
<span style="color: #228822;"><b>JANU1535</b></span><br />
<span style="color: #880088;"><b>jz</b></span><br />
<span style="color: #228822;"><b>KasLimon</b></span><br />
<span style="color: #aaff00;"><b>KugeLSichA</b></span><br />
<span style="color: #0000bb;"><b>Limun</b></span><br />
<span style="color: #880088;"><b>Lopalong</b></span><br />
<span style="color: #228822;"><b>moreteavicar</b></span><br />
<span style="color: #228822;"><b>novice programmer</b></span><br />
<span style="color: #228822;"><b>ThE KuKa</b></span><br />
<span style="color: #ff7700;"><b>TheSteffen</b></span><br />
<span style="color: #0000bb;"><b>Tom</b></span><br />
<span style="color: #228822;"><b>z3d0</b></span><br />
<span style="color: #228822;"><b>Zuker</b></span><br />
<br />
Interests: Icy Phoenix<br />
Location: <a href="http://www.icyphoenix.com/">http://www.icyphoenix.com</a>
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

$lang = array_merge($lang, array(
	'Home' => '������',
	'Forum' => '�����',
	'Category' => '���������',
	'Topic' => '����',
	'Topics' => '����',
	'Replies' => '�������',
	'Views' => '����������',
	'Post' => '���������',
	'Posts' => '���������',
	'Posted' => '���������',
	'Username' => '���',
	'Password' => '������',
	'Email' => '�����',
	'Poster' => '�����',
	'Author' => '�����',
	'Time' => '�����',
	'Hours' => '����',
	'Message' => '���������',

	'1_Day' => '�� ��������� ����',
	'7_Days' => '�� ��������� 7 ����',
	'2_Weeks' => '�� ��������� 2 ������',
	'1_Month' => '�� ��������� �����',
	'3_Months' => '�� ��������� 3 ������',
	'6_Months' => '�� ��������� 6 �������',
	'1_Year' => '�� ��������� ���',

	'Go' => '�������',
	'Jump_to' => '�������',
	'Submit' => '���������',
	'Reset' => '�������',
	'Cancel' => '������',
	'Preview' => '������������',
	'Confirm' => '�����������',
	'Spellcheck' => '�����������',
	'Yes' => '��',
	'No' => '���',
	'Enabled' => '��������',
	'Disabled' => '���������',
	'Error' => '������',

	'GO' => 'Go',
	'JUMP_TO' => '�������',
	'SUBMIT' => '���������',
	'RESET' => '�������',
	'CANCEL' => '������',
	'PREVIEW' => '������������',
	'CONFIRM' => '�����������',
	'YES' => '��',
	'NO' => '���',
	'ENABLED' => '��������',
	'DISABLED' => '���������',
	'ERROR' => '������',

	'Next' => '����.',
	'Previous' => '����.',
	'Goto_page' => '�� ��������',
	'Joined' => '���������������',
	'IP_Address' => '����� IP',

	'Select_forum' => '�������� �����',
	'View_latest_post' => '���������� ��������� ���������',
	'View_newest_post' => '����� ����� ���������',
	'Page_of' => '�������� <b>%d</b> �� <b>%d</b>', // Replaces with: Page 1 of 2 for example

	'ICQ' => 'ICQ',
	'AIM' => 'AIM ',
	'MSNM' => 'MSN Live',
	'YIM' => 'Yahoo Messenger',
	'SKYPE' => 'Skype',
	'Forum_Index' => '�����',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => '������ ����� ����',
	'Reply_to_topic' => '�������� �� ����',
	'Reply_with_quote' => '�������� � �������',

	'Click_return_topic' => '%s��������� � ����%s', // %s's here are for uris, do not remove!
	'Click_return_login' => '%s����������� ��� ���%s',
	'Click_return_forum' => '%s����������� ��� ���%s',
	'Click_view_message' => '%s����������� ���� ���������%s',
	'Click_return_modcp' => '%s��������� � ������ ���������%s',
	'Click_return_group' => '%s��������� � ���������� � �������%s',

	'Admin_panel' => 'ACP',

	'Board_disabled' => '��������, ������� �������� ����������. ���������� ����� �������. Sorry, but this site is currently unavailable. Please try again later.',

// Global Header strings
	'Registered_users' => '������������������ ������������:',
	'Browsing_forum' => '������ ���� ������ �������������:',
	'Online_users_zero_total' => '������ ����������� �� ������: <b>0</b>, �� ���  ',
	'Online_users_total' => '������ ����������� �� �������: <b>%d</b>, �� ��� ',
	'Online_user_total' => '������ ����������� �� �������: <b>%d</b>, �� ��� ',
	'AC_Online_users_zero_total' => '������ ����������� � ���� <b>0</b> �� ���: ',
	'AC_Online_users_total' => '������ ����������� � ���� <b>0</b> �� ���: ',
	'AC_Online_user_total' => '����� � ���� <b>1</b> : ',
	'Reg_users_zero_total' => '������������������: �������, ',
	'Reg_users_total' => '����������������: %d, ',
	'Reg_user_total' => '����������������: %d, ',
	'Hidden_users_zero_total' => '�������: 0 � ',
	'Hidden_user_total' => '�������: %d � ',
	'Hidden_users_total' => '�������: %d � ',
	'Guest_users_zero_total' => '������: 0',
	'Guest_users_total' => '������: %d',
	'Guest_user_total' => '������: %d',
	'Record_online_users' => '������ ����� ����������� (<b>%s</b>) ����� ���� %s', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%s�������������%s',
	'Mod_online_color' => '%s���������%s',

	'You_last_visit' => '�� ��������� ��� �������� %s', // %s replaced by date/time
	'Current_time' => '������� ����� %s', // %s replaced by time

	'Search_new' => '����� ��������� � ������ ���������� ���������',
	'Search_your_posts' => '����� ���� ���������',
	'Search_unanswered' => '����� ��������� ��� �������',

	'Register' => '�����������',
	'Profile' => '�������',
	'Edit_profile' => '������������� ��� �������',
	'Search' => '�����',
	'Memberlist' => '������������',
	'FAQ' => 'FAQ',
	'KB_title' => '������',
	'BBCode_guide' => '����������� �� BBCode',
	'Usergroups' => '������',
	'Last_Post' => '��������� ���������',
	'Moderator' => '���������',
	'Moderators' => '����������',

// Stats block text
	'Posted_articles_zero_total' => '���� ������������ �� ����� ������', // Number of posts
	'Posted_articles_total' => '���� ������������ �������� ���������: <b>%d</b>', // Number of posts
	'Posted_article_total' => '���� ������������ �������� ���������: <b>%d</b>', // Number of posts
	'Registered_users_zero_total' => '� ��� ��� ������������������ �������������', // # registered users
	'Registered_users_total' => '����� ������������������ �������������: <b>%d</b>', // # registered users
	'Registered_user_total' => '����� ������������������ �������������: <b>%d</b>', // # registered users
	'Newest_user' => '��������� ������������������ ������������: <b>%s%s%s</b>', // a href, username, /a

	'No_new_posts_last_visit' => '��� ����� ��������� � ���������� ���������',

	'No_new_posts_global_announcement' => '��� ����� ��������� [ ������. ������. ]',
	'New_posts_global_announcement' => '����� ��������� [ ������. ������. ]',
	'No_new_posts_announcement' => '��� ����� ��������� [ ������. ]',
	'New_posts_announcement' => '����� ��������� [ ������. ]',
	'No_new_posts_sticky' => '��� ����� ��������� [ ����. ���� ]',
	'New_posts_sticky' => '����� ��������� [ ����. ���� ]',
	'No_new_posts_locked' => '��� ����� ��������� [ ���� ������� ]',
	'New_posts_locked' => '����� ��������� [ ���� ������� ]',
	'No_new_posts' => '��� ����� ���������',
	'New_posts' => '����� ���������',
	'New_post' => '����� ���������',
	'No_new_posts_hot' => '��� ����� ��������� [ ���������� ���� ]',
	'New_posts_hot' => '����� ��������� [ ���������� ���� ]',

	'Forum_no_new_posts' => '��� ����� ��������� [ ����� ]',
	'Forum_new_posts' => '����� ��������� [ ����� ]',
	'Cat_no_new_posts' => '��� ����� ��������� [ ��������� ]',
	'Cat_new_posts' => '����� ��������� [ ��������� ]',
	'Forum_is_locked' => '����� ������',

// Login
	'Enter_password' => '������� ���� ��� � ������ ��� ����� �� �����.',
	'Login' => '�����',
	'Logout' => '�����',
	'Forgotten_password' => '� ����� ������',
	'AUTOLOGIN' => '������������� ������� ��� ������ ���������',
	'Error_login' => '�� ����� ��������/���������� ��� ������������ ��� �������� ������.',

// Index page
	'No_Posts' => '��� ���������',
	'No_forums' => '����� ��� �������',

	'Private_Message' => '������ ���������',
	'Private_Messages' => '������ ���������',
	'Who_is_Online' => '��� ������ �� ������',

	'Mark_all_forums' => '�������� ��� ������ ����������',
	'Forums_marked_read' => '��� ������ ���� �������� ��� ���������',

// Viewforum
	'View_forum' => '�������� ������',

	'Forum_not_exist' => '������, ������� �� �������, �� ����������.',
	'Reached_on_error' => '�� ������ �� ��� �������� ��-�� ������.',

	'Display_topics' => '�������� ����',
	'All_Topics' => '��� ����',

	'Topic_News_nb' => '<b>����������:</b>',
	'Topic_global_announcement_nb' => '������.������.',
	'Topic_Announcement_nb' => 'Announcement',
	'Topic_Sticky_nb' => '������ ����',
	'Topic_Moved_nb' => '����������',
	'Topic_Poll_nb' => '�����������',
	'Topic_Event_nb' => '�������',
	'Topic_Announcement' => '<b>����������:</b>',
	'Topic_Sticky' => '<b>������ ����:</b>',
	'Topic_Moved' => '<b>����������:</b>',
	'Topic_Poll' => '<b>�����������:</b>',
	'Topic_Event' => '<b>�������:</b>',
	'Topic_global_announcement' => '<b>������.������.:</b>',
	'Post_global_announcement' => '������.������.',


	'Mark_all_topics' => '�������� ��� ���� ����������',
	'Topics_marked_read' => '��� ���� � ���� ������ ���� �������� ��� ���������',

/*
	'Rules_post_can' => 'You <b>can</b> post new topics in this forum',
	'Rules_post_cannot' => 'You <b>cannot</b> post new topics in this forum',
	'Rules_reply_can' => 'You <b>can</b> reply to topics in this forum',
	'Rules_reply_can_own' => 'You <b>can</b> reply to your topics in this forum',
	'Rules_reply_cannot' => 'You <b>cannot</b> reply to topics in this forum',
	'Rules_edit_can' => 'You <b>can</b> edit your posts in this forum',
	'Rules_edit_cannot' => 'You <b>cannot</b> edit your posts in this forum',
	'Rules_delete_can' => 'You <b>can</b> delete your posts in this forum',
	'Rules_delete_cannot' => 'You <b>cannot</b> delete your posts in this forum',
	'Rules_vote_can' => 'You <b>can</b> vote in polls in this forum',
	'Rules_vote_cannot' => 'You <b>cannot</b> vote in polls in this forum',
*/
	'Rules_post_can' => '�� <b>������</b> �������� ����',
	'Rules_post_cannot' => '�� <b>�� ������</b> �������� ����',
	'Rules_reply_can' => '�� <b>������</b> �������� �� ���������',
	'Rules_reply_can_own' => '�� <b>������</b> �������� �� ���� ���������',
	'Rules_reply_cannot' => '�� <b>�� ������</b> �������� �� ���������',
	'Rules_edit_can' => '�� <b>������</b> ������������� ���� ���������',
	'Rules_edit_cannot' => '�� <b>�� ������</b> ������������� ���� ���������',
	'Rules_delete_can' => '�� <b>������</b> ������� ���� ���������',
	'Rules_delete_cannot' => '�� <b>�� ������</b> ������� ���� ���������',
	'Rules_vote_can' => '�� <b>������</b> ���������� � �������',
	'Rules_vote_cannot' => '�� <b>�� ������</b> ���������� � �������',
	'Rules_moderate' => '�� <b>������</b> %s������������ ���� �����%s', // %s replaced by a href links, do not remove!

// 'No_topics_post_one' => 'There are no posts in this forum.<br />Click on the <b>Post New Topic</b> link on this page to post one.',
	'No_topics_post_one' => '� ���� ������ ���� ��� ���������<br />ٸ������ <b>������ ����� ����</b>, � ���� ��������� ������ ������.',

// Viewtopic
	'View_topic' => '�������� ����',

	'Guest' => '�����',
	'Post_subject' => '��������� ���������',
	'View_next_topic' => '��������� ����',
	'View_previous_topic' => '���������� ����',
	'Submit_vote' => '�������������',
	'View_results' => '����������',

	'No_newer_topics' => '� ���� ������ ��� ����� ����� ���',
	'No_older_topics' => '� ���� ������ ��� ����� ������ ���',
	'Topic_post_not_exist' => '����, ������� �� ���������, �� ����������.',
	'No_posts_topic' => '� ���� ���� ��� ���������',

	'Display_posts' => '�������� ���������',
	'All_Posts' => '��� ���������',
	'Newest_First' => '������� � �����',
	'Oldest_First' => '������� �� ������',

	'Back_to_top' => '��������� � ������',
	'Back_to_bottom' => '���� ��������',

	'Read_profile' => '���������� �������',
	'Send_email' => '������� ������ �����',
	'Visit_website' => '�������� ���� ������',
	'ICQ_status' => '������ ICQ',
	'Edit_delete_post' => '��������/������� ��� ���������',
	'View_IP' => '�������� IP ����� ������',
	'Delete_post' => '������� ���������',

	'wrote' => '�����(�)', // proceeds the username and is followed by the quoted text
	'Quote' => '������', // comes before bbcode quote output.
	'Code' => '���', // comes before bbcode code output.

	'Edited_time_total' => '��������� ��� ���������������: %s (%s), ����� ��������������� %d ���', // Last edited by me on 12 Oct 2001; edited 1 time in total
	'Edited_times_total' => '��������� ��� ���������������: %s (%s), ����� ��������������� %d ���(�)', // Last edited by me on 12 Oct 2001; edited 2 times in total

	'Lock_topic' => '������� ����',
	'Unlock_topic' => '����� ������� ����',
	'Move_topic' => '��������� ����',
	'Delete_topic' => '������� ����',
	'Split_topic' => '��������� ����',

	'Stop_watching_topic' => '��������� ������� �� ��������',
	'Start_watching_topic' => '������� �� �������� � ����',
	'No_longer_watching' => '�� ������ �� ������� �� �������� � ���� ����',
	'You_are_watching' => '������ �� ������� �� �������� � ���� ����',

	'Total_votes' => '����� �������',

// Posting/Replying (Not private messaging!)
	'Message_body' => '���������',
	'Topic_review' => '����� ����',

	'No_post_mode' => '�� ������ ����� ���������', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normally)

	'Post_a_new_topic' => '������ ����� ����',
	'Post_a_reply' => '��������',
	'Post_topic_as' => '������ ����������� ����',
	'Edit_Post' => '������������� ���������',
	'Options' => '���������',

	'PM_Read' => '�� ����������',
	'PM_Unread' => '�� �����������',
	'PM_Replied' => '�� ��������',

	'Post_Announcement' => '����������',
	'New_post_Announcement' => '����� ����������',
	'Post_Sticky' => '������ ����',
	'New_post_Sticky' => '����� ������ ����',
	'Post_Normal' => '�������',

	'Confirm_delete' => '�� �������, ��� ������ ������� ��� ���������?',
	'Confirm_delete_poll' => '�� �������, ��� ������ ������� ���� �����?',

	'Flood_Error' => '�� �� ������ ��������� ��������� ��������� ����� ����� �����������. ����������, ���������� ���� �����.',
	'Empty_subject' => '�� ������ ������� ��������� ���������, ����� ��������� ����� ����.',
	'Empty_message' => '�� ������ ������ ����� ���������.',
	'Forum_locked' => '���� ����� ������, �� �� ������ ������ ����� ��������� � ������������� ������.',
	'Topic_locked' => '��� ���� �������, �� �� ������ ������ ������ � ������������� ���������.',
	'No_post_id' => '�� ������ ������� ��������� ��� ��������������',
	'No_topic_id' => '�� ������ ������� ���� ��� ������',
	'No_valid_mode' => '�� ������ ������ ��������� ����, �������� � ������������� ���������. ��������� � ���������� ��� ���.',
	'No_such_post' => '��������� �����������. ��������� � ���������� ��� ���.',
	'Edit_own_posts' => '��������, �� ������ ������������� ������ ���� ����������� ���������.',
	'Delete_own_posts' => '��������, �� ������ ������� ������ ���� ����������� ���������.',
	'Cannot_delete_replied' => '��������, �� �� ������ ������� ���������, �� ������� ���� �������� ������.',
	'Cannot_delete_poll' => '��������, �� �� ������ ������� �������� �����.',
	'Empty_poll_title' => '�� ������ ������ ��������� ��� ������.',
	'To_few_poll_options' => '�� ������ ������ �� ����� ���� ��������� ������.',
	'To_many_poll_options' => '�� ���������� ������ ������� ����� ��������� ������.',
	'Post_has_no_poll' => '� ���� ��������� ��� ������.',
	'Already_voted' => '�� ��� ���������� � ���� ������.',
	'No_vote_option' => '�� ������ ������� ������� ������ ��� �����������.',

	'Add_poll' => '�������� �����',
	'Add_poll_explain' => '���� �� �� ������ ��������� ����� � ������ ���������, �������� ���� �������.',
	'Poll_question' => '������',
	'Poll_option' => '������� ������',
	'Add_option' => '�������� �������',
	'Update' => '��������',
	'Delete' => '�������',
	'Poll_for' => '����� ������ ����',
	'Days' => '����', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ ������� 0 ��� �������� ���� ������, ����� ����� �� �������� ]',
	'Delete_poll' => '������� �����',

	'Disable_HTML_post' => '��������� � ���� ��������� HTML',
	'Disable_ACRO_AUTO_post' => '��������� � ���� ��������� �������� � ���������',
	'Disable_BBCode_post' => '��������� � ���� ��������� BBCode',
	'Disable_Smilies_post' => '��������� � ���� ��������� ��������',

	'HTML_is_ON' => 'HTML <u>�������</u>',
	'HTML_is_OFF' => 'HTML <u>��������</u>',
	'BBCode_is_ON' => '%sBBCode%s <u>�������</u>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => '%sBBCode%s <u>��������</u>',
	'Smilies_are_ON' => '�������� <u>��������</u>',
	'Smilies_are_OFF' => '�������� <u>���������</u>',

	'Attach_signature' => '������������ ������� (������� ����� �������� � �������)',
	'Notify' => '�������� ��� � ��������� ������',
	'Delete_post' => '������� ��� ���������',

	'Stored' => '���� ��������� ���� ������� ���������.',
	'Deleted' => '���� ��������� ���� ������� �������.',
	'Poll_delete' => '��� ����� ��� ������� �����.',
	'Vote_cast' => '��� ����� ��� ����.',

	'Topic_reply_notification' => '����������� �� ������ � ����',

	'Emoticons' => '��������',
	'More_emoticons' => '�������������� ��������',

// Private Messaging
	'Private_Messaging' => '������ ���������',

	'Login_check_pm' => '����� � ��������� ������ ���������',
	'New_pms' => '����� ���������: %d', // You have 2 new messages
	'New_pm' => '����� ���������: %d', // You have 1 new message
	'No_new_pm' => '����� ��������� ���',
	'Unread_pms' => '������������� ���������: %d',
	'Unread_pm' => '������������� ���������: %d',
	'No_unread_pm' => '��� ������������� ���������',
	'You_new_pm' => '��� ������ ����� ������ ���������',
	'You_new_pms' => '��� ������ ����� ������ ���������',
	'You_no_new_pm' => '� ��� ��� ����� ������ ���������',

	'Unread_message' => '������������� ���������',
	'Read_message' => '����������� ���������',

	'Read_pm' => '��������� ���������',
	'Post_new_pm' => '�������� ����� ���������',
	'Post_reply_pm' => '�������� �� ���������',
	'Post_quote_pm' => '�������� � �������',
	'Edit_pm' => '������������� ���������',

	'Inbox' => '��������',
	'Outbox' => '���������',
	'Savebox' => '�����������',
	'Sentbox' => '������������',
	'Flag' => '����',
	'Subject' => '����',
	'From' => '��',
	'To' => '����',
	'Date' => '����',
	'Mark' => '�������',
	'Sent' => '����������',
	'Saved' => '���������',
	'Delete_marked' => '������� ����������',
	'Delete_all' => '������� ���',
	'Save_marked' => '��������� ����������',
	'Download_marked' => '��������� ����������',
	'Mailbox' => '�������� ����',
	'Save_message' => '��������� ���������',
	'Delete_message' => '������� ���������',
	'Next_privmsg' => '��������� ���������',
	'Previous_privmsg' => '���������� ���������',
	'No_newer_pm' => '��������� ����� ���.',
	'No_older_pm' => '��������� ������ ���.',
	'Display_messages' => '�������� ���������', // Followed by number of days/weeks/months
	'All_Messages' => '��� ���������',

	'No_messages_folder' => '� ���� ����� ��� ���������',

	'PM_disabled' => '����������� �������� ������ ��������� �� ���� ������� ���� ���������.',
	'Cannot_send_privmsg' => '��������, ��� �� ��������� ���������� ������ ���������.',
	'No_to_user' => '�� ������ ������� ��� ���������� ����� ���������.',
	'No_such_user' => '��������, �� ������ ������������ �� ����������.',

	'Disable_HTML_pm' => '��������� � ���� ��������� HTML',
	'Disable_ACRO_AUTO_pm' => '��������� � ���� ��������� �������� � ���������',
	'Disable_BBCode_pm' => '��������� � ���� ��������� BBCode',
	'Disable_Smilies_pm' => '��������� � ���� ��������� ��������',

	'Message_sent' => '���� ��������� ���� ����������.',

	'Click_return_inbox' => '%s��������� � ����� &laquo;��������&raquo;%s',
	'Click_return_index' => '%s��������� � ������ �������%s',

	'Send_a_new_message' => '��������� ������ ���������',
	'Send_a_reply' => '�������� �� ������ ���������',
	'Edit_message' => '������������� ������ ���������',

	'Notification_subject' => '��� ������ ����� ������ ���������!',

	'Find_username' => '����� ������������',
	'Find' => '�����',
	'No_match' => '�� �������.',

	'No_post_id' => '�� ������ ID',
	'No_such_folder' => '����� ����� ���',
	'No_folder' => '�� ������� �����',

	'Mark_all' => '�������� ���',
	'Unmark_all' => '����� ���������',

	'Confirm_delete_pm' => '�� �������, ��� ������ ������� ��� ���������?',
	'Confirm_delete_pms' => '�� �������, ��� ������ ������� ��� ���������?',

	'Inbox_size' => '���� ����� &laquo;��������&raquo; ��������� �� %d%%', // eg. Your Inbox is 50% full
	'Sentbox_size' => '���� ����� &laquo;������������&raquo; ��������� �� %d%%',
	'Savebox_size' => '���� ����� &laquo;�����������&raquo; ��������� �� %d%%',

	'Click_view_privmsg' => '%s������� � ����� &laquo;��������&raquo;%s',

// Profiles/Registration
	'Viewing_user_profile' => '������� ������������ %s', // %s is username
	'About_user' => '� ������������ %s', // %s is username
//Start Quick Administrator User Options and Information MOD
	'Quick_admin_options' => '������� ����������� � ���������� � ������ ������������',
	'Admin_edit_profile' => '������������� �������',
	'Admin_edit_permissions' => '������������� ����� �������',
	'User_active' => '���� <b>������</b>',
	'User_not_active' => '���� <b>�������</b>',
	'Username_banned' => '���� <b>�������</b>',
	'Username_not_banned' => '���� <b>��</b> �������',
	'User_email_banned' => '����� ����� [ %s ] <b>�������/b>',
	'User_email_not_banned' => '����� ����� <b>��</b>�������',
//End Quick Administrator User Options and Information MOD
	'Preferences' => '������ ���������',
	'Items_required' => '���� ���������� * ����������� � ����������, ���� �� ������� ��������.',
	'Registration_info' => '��������������� ����������',
	'Profile_info' => '�������',
	'Profile_info_warn' => '��� ���������� ����� � �������� �������',
	'Avatar_panel' => '���������� ��������',
	'Avatar_gallery' => '������� ������',

	'Website' => '�������',
	'Location' => '������',
	'Contact' => '�����',
	'Email_address' => '����� E-mail',
	'Email' => 'E-mail',
	'Send_private_message' => '������� ������ ���������',
	'Hidden_email' => '[ ����� ]',
	'Search_user_posts' => '����� ��������� ������������',
	'Interests' => '��������',
	'Occupation' => '��� ������������',
	'Poster_rank' => '������',

	'Total_posts' => '����� ���������',
	'User_post_pct_stats' => '%.2f%% ���� ���������', // 1.25% of total
	'User_post_day_stats' => '%.2f ��������� � ����', // 1.5 posts per day
	'Search_user_posts' => '����� ��������� ������������ %s', // Find all posts by username
	'Search_user_topics_started' => '����� ���� ������� ������������� %s', // Find all topics started by username

	'No_user_id_specified' => '��������, ������ ������������ �� ����������',
	'Wrong_Profile' => '�� �� ������ ������������� �� ���� �������.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => '����������',
	'Invision_Communicate' => '�����',
	'Invision_Info' => '����������',
	'Invision_Member_Group' => '�������� � �������',
	'Invision_Member_Title' => '�������� ������',
	'Invision_Most_Active' => '�������� �������',
	'Invision_Most_Active_Posts' => '%s ��������� � ������',
	'Invision_Details' => '������',
	'Invision_PPD_Stats' => '��������� � ����',
	'Invision_Signature' => '�������',
	'Invision_Website' => '�������� ��������',
	'Invision_Total_Posts' => '����� ���������',
	'Invision_User_post_pct_stats' => '( %.2f%% ���� ��������� ������ )',
	'Invision_User_post_day_stats' => '%.2f ��������� � ����',
	'Invision_Search_user_posts' => '����� ��� ��������� ������������',
	'Invision_Posting_details' => '������',
// Invision View Profile - END

	'Only_one_avatar' => '����� ���� ������ ������ ���� ��� �������',
	'File_no_data' => '���� � URL �� �������� ������',
	'No_connection_URL' => '���������� �� ������ ������ �� ����� ���� �����������',
	'Incomplete_URL' => '��������� URL �������',
	'Wrong_remote_avatar_format' => '����� ��������� ������� ��������������',
	'No_send_account_inactive' => '��������, �� ��� ������ �� ����� ���� ������������, ��������� ���� ������� ������ � ��������� ����� ���������. ����������, ���������� � �������������� ������ �� �������������� �����������.',

	'Always_smile' => '�������� ������ ��������',
	'Always_html' => 'HTML ������ �������',
	'Always_bbcode' => 'BBCode ������ �������',
	'Always_add_sig' => '������ ������������ ��� �������',
	'Always_notify' => '������ �������� ��� �� �������',
	'Always_notify_explain' => '����� ���-������ ������� �� ����, � ������� �� ������, ��� ���������� e-mail. ��� ����� ����� ��������� ��� ���������� ���������.',

	'Board_style' => '������� ��� ������',
	'Board_lang' => '����',
	'No_themes' => '� ���� ��� �������� ����',
	'Timezone' => '������� ����',
	'Date_format' => '������ ����',
	'Date_format_explain' => '��������� ��������� ������� <a href="http://www.php.net/date" target="_other">date()</a> ����� PHP',
	'Signature' => '�������',
	'Signature_explain' => '��� �����, ������� ����� ��������� � ����������� ���� ����������. ����� ��� ���������� %d ���������.',
	'Public_view_email' => '������ ���������� ��� ����� e-mail',

	'Current_password' => '������� ������',
	'New_password' => '����� ������',
	'Confirm_password' => '����������� ������',
	'Confirm_password_explain' => '�� ������ ������� ��� ������� ������, ���� ������ �������� ��� ��� �������� ���� ����� e-mail.',
	'password_if_changed' => '���������� ������ ������ ���� �� ������ ��� ��������',
	'password_confirm_if_changed' => '������������ ������ ����� � ��� ������, ���� �� �������� ��� ����.',

	'Avatar' => '�������',
	'Avatar_explain' => '���������� ��������� ����������� ��� ����������� � ��� � ����������. ����� ���� �������� ������ ���� �����������, ������� �� ����� %d ��������, ������� �� ����� %d �������� � ������� �� ����� %d ��. ��������� ������� ����� ������������� ��������� ��� ������.',
	'Upload_Avatar_file' => '��������� ������� � ������ ����������',
	'Upload_Avatar_URL' => '��������� ������ � URL',
	'Upload_Avatar_URL_explain' => '������� URL �� �������� ��������� ���� � ������������, �� ����� ���������� �� ���� ����.',
	'Pick_local_Avatar' => '������� ������ �� �������',
	'Link_remote_Avatar' => '���������� ������ � ������� �������',
	'Link_remote_Avatar' => '���������� ������ � ������� �������',
'Link_remote_Avatar_explain' => '������� URL �����������, �� ������� �� ������ ���������.',
'Avatar_URL' => 'URL ����������� �������',
'Select_from_gallery' => '������� ������ �� �������',
'View_avatar_gallery' => '�������� �������',


	'Select_avatar' => '�������� ������',
'Return_profile' => '��������� � �������',
'Select_category' => '�������� ���������',

'Delete_Image' => '������� �����������',
'Current_Image' => '������� �����������',

	 'Notify_on_privmsg' => '���������� � ����� ������ ����������',
'Popup_on_privmsg' => '��������� ����� ���� ��� ����� ������ ���������',
'Popup_on_privmsg_explain' => '� ��������� �������� ����� ����������� ����� ���� �������� � ������������ � ������� ������ ������� ���������.',
'Hide_user' => '�������� ���� ���������� �� ������',

'Profile_updated' => '��� ������� ��� �������',
'Profile_updated_inactive' => '��� ������� ��� �������, �� �� �������� ������ ������, ��� ��� ������ ���� ������� ������ ���������. ��������� ��� �������� ����, ����� ������ ��� ����� �������������� ������� ������ ���, ���� ��������� ��������� ��������������, ��������� ���� ��� ������� �������������.',

'Password_mismatch' => '��������� ������ �� ���������.',
'Current_password_mismatch' => '�������� ���� ������ �� ��������� � ������� �� ����.',
'Password_long' => '��� ������ ������ ���� �� ������� 32 ��������.',
'Too_many_registers' => '�� ������� ������� ����� ������� ������������������. ����������, ��������� ������� �����.',
'Username_taken' => '��������, ������������ � ����� ������ ��� ����������.',
'Username_invalid' => '��������, �� ��� ��� �������� ������������ ������� (�������� \').',
'Username_disallowed' =>'��������, �� ��� ��� ���� ��������� � �������������.',
'Email_taken' => '��������, ���� ����� e-mail ��� ����� ������ �������������.',
'Email_banned' => '��������, ���� ����� e-mail ��������� � ������ ������.',
'Email_invalid' => '��������, ���� ����� e-mail ����������.',
'Signature_too_long' => '������� ������� �������.',
'Fields_empty' => '�� ������ ��������� ������������ ����.',
'Avatar_filetype' => '���� ������� ������ ���� .jpg, .gif ��� .png',
'Avatar_filesize' => '����� ����� ������� ������ ���� �� ����� %d KB', // The avatar image file size must be less than 6 KB
'Avatar_imagesize' => '������ ������ ���� �� ������ %d �������� � ������ � %d �������� � ������',


	'Welcome_subject' => '����� ���������� �� ������ %s', // Welcome to my.com forums
'New_account_subject' => '����� ������������',
'Account_activated_subject' => '������� ������ ��������������',

'Account_added' => '������� �� �����������, ������� ������ ���� �������. �� ������ ����� � �������, ��������� ���� ��� � ������.',
'Account_inactive' => '������� ������ ���� �������. �� ���� ������ ��������� ����������� ������� ������, ���� ��� ����������� ��� ������ �� �������� ���� �����. ��������� ���� ����� ��� ����� ��������� ����������.',
'Account_inactive_admin' => '������� ������ ���� �������. �� ���� ������ ��������� ����������� ����� ������� ������ ����������������. �� ��� ��������� e-mail, �, ��� ������ ��� ������������ ���� ������� ������, �� �������� �����������.',
'Account_active' => '���� ������� ������ ���� ��������������. ������� �� �����������.',
'Account_active_admin' => '���� ������� ������ ���� ��������������.',
'Reactivate' => '����� �������������� ������� ������.',
'Already_activated' => '�� ��� �������������� ���� ������� ������.',
'COPPA' => '���� ������� ������ ���� �������, �� ������ ��� ������ ���� ��������, ����� ��������� ���������� ���� ������� ��� �� e-mail.',

'Registration' => '������� �����������',
'Reg_agreement' => '���� �������������� � ���������� ����� ������ ��������� ������� ��� ������������� ������������ ��������� ��� ����� �������, ��� ��������� ����������� ����������. ����� ������� �� ��������,  ��� ��������� �� ���� ������� �������� ����� ������ �� �������, � �� ������������� ������� (����� ���������, ����������� � ���������������) � ������������� �� ����� ���� ������������ �� �� ����������.<br /><br /> �� ������������ �� ��������� ��������������, ����������, �������������� ���������, ���������������� ���������, �������� � ������������ ����� � ������ ���������, ������� �������� ��������������� ������. ������� ���������� ����� ��������� ����� �������� � ������ ������������ ���������� �� ������� (��� ���� ��� ��������� ����� ��������� � �����������). IP ������ ���� ��������� ����������� ��� ����������� ���������� ����� ��������. �� ������������ � ���, ��� �������������� ������ ����� ����� �������, ���������������, ��������� ��� ������� ����� ���� � ����� ����� �� ������ ����������. ��� ������������ �� �������� � ���, ��� �������� ���� ���������� ����� ��������� � ���� ������. ���� ��� ���������� �� ����� ������� ������� ����� ��� ������ ����������, ������������� ������� �� ����� ���� ������������ �� �������� �������, ������� ����� �������� � �������������������� ������� � ���.<br /><br /> ��� ������ ���������� cookies ��� �������� ���������� �� ����� ����������. ��� cookie �� �������� ������� ���������� �� �������� ���� � ������ ���� ��� ��������� �������� ������ �������. ��� e-mail ����� ������������ ���� ��� ������������� ����� ����������� � ������ (� ��� ������� ������ ������ ���� �� �������� �������).<br /><br />�������� �� ������ ����������� �� ������������� ��� �������� � ����� ���������',
'Agree_under_13' => '� �������� � ����� ��������� � ��� <b>������</b> 13 ���',
'Agree_over_13' => '� �������� � ����� ��������� � ��� 13 ��� ��� <b>������</b>',
'Agree_not' => '� �� �������� � ����� ���������',

'Wrong_activation' => '�������� ���� ���� ����������� �� ��������� � ���������� � ����.',
'Send_password' => '�������� ����� ������',
'Password_updated' => '����� ������ ��� ������, ��������� �������� ����, ����� ������ ��� ��� ��������������.',
'No_email_match' => '��������� ���� ����� e-mail �� ��������� � ���������� �� ����� ������������.',
'New_password_activation' => '����������� ������ ������',
'Password_activated' => '���� ������� ������ ���� ����� ��������������. ��� ����� � ������� ����������� ������ �� ����������� ��� ������.',
'Send_email_msg' => '��������� e-mail',
'No_user_specified' => '������������ �� ��� ������',
'User_prevent_email' => '������������ �� ������ �������� e-mail. ���������� ������� ���/�� ������ ���������.',
'User_not_exist' => '������������ �� ����������',
'CC_email' => '��������� ����� ��������� ������ ����',
'Email_message_desc' => '��������� ����� ���������� � ���� �������� ������, �� ��������� � ���� HTML ��� BBCode. � �������� ��������� ������ ����� ������������ ��� ����� e-mail.',
'Flood_email_limit' => '�� �� ������ ��������� ��� ���� e-mail ����� ����� �����������, ���������� ������� ��� �������.',
'Recipient' => '����������',
'Email_sent' => '��������� ���� ����������.',
'Send_email' => '��������� e-mail',
'Empty_subject_email' => '�� ������ ������� ���� ���������.',
'Empty_message_email' => '�� ������ ������� ����� ��������� ��� ��������.',

// Visual confirmation system strings
	'Confirm_code_wrong' => '��������� ���� ��� ������������� ��� ������������',
// 'Too_many_registers' => '�� ��������� ���������� ������� ����������� �� ���� �����. ����������, ��������� ������� �����.',
'Confirm_code_impaired' => '���� �� �� �����-���� �������� �� ������ ��������� ���� ���, ��������� � %s���������������%s ��� ��������� ������.',
'Confirm_code' => '��� �������������',
'Confirm_code_explain' => '������� ��� ����� ��� ��, ��� �� ��� ������ �� ������. �� ����������� �������.',


// Members list
'Select_sort_method' => '����������� ��',
'Sort' => '�����������',
'Sort_Top_Ten' => '������ ����� �������� ����������',
'Sort_Joined' => '���� �����������',
'Sort_Username' => '����� ������������',
'Sort_Location' => '���������������',
'Sort_Posts' => '���������� ���������',
'Sort_Email' => '������ E-mail',
'Sort_Website' => '������ �����',
'Sort_Ascending' => '�� �����������',
'Sort_Descending' => '�� ��������',
'Order' => '',



// Group control panel
	'Group_Control_Panel' => '������ ���������� ��������',
'Group_member_details' => '���������� � �������� � �������',
'Group_member_join' => '�������� � ������',

'Group_Information' => '���������� � ������',
'Group_name' => '�������� ������',
'Group_description' => '�������� ������',
'Group_membership' => '�������� � ������',
'Group_Members' => '����� � ������',
'Group_Moderator' => '��������� ������',
'Pending_members' => '��������� � ����� ������',

'Group_type' => '��� ������',
'Group_open' => '������ � �������� ���������',
'Group_closed' => '������ � �������� ���������',
'Group_hidden' => '������� ������',

'Current_memberships' => '��������� ������ �����',
'Non_member_groups' => '�� ��������� ������ �����',
'Memberships_pending' => '�������� � ����� �����',

'No_groups_exist' => '��� �� ����� ������',
'Group_not_exist' => '����� ������ �� ����������',

'Join_group' => '�������� � ������',
'No_group_members' => '� ���� ������ ��� �� ������ �����',
'Group_hidden_members' => '��� ������ ������, �� �� ������ ����������� � ������',
'No_pending_group_members' => '� ���� ������ ��� ���������� � �����',
'Group_joined' => '�� ��������� � ���������� � ������.<br />����� ���� ������� ������� ��������� ������, ��� ����� �������� �����������.',
'Group_request' => '���� ������ ������� � ���������� � ������.',
'Group_approved' => '���� ������� ���� �������������.',
'Group_added' => '�� ���� �������� � ������.',
'Already_member_group' => '�� ��� ��������� ������ ���� ������',
'User_is_member_group' => '������������ ��� �������� ������ ���� ������',
'Group_type_updated' => '��� ������ ������� �������.',

'Could_not_add_user' => '���������� ������������ �� ����������.',
'Could_not_anon_user' => '�� �� ������ ������� ���������� ������������ ������ ������.',

'Confirm_unsub' => '�� �������, ��� ������ ����� �� ���� ������?',
'Confirm_unsub_pending' => '�� �������, ��� ������ ���������� �� ������� � ���� ������? ���� ������� � ���������� �� ���� �� �������������, �� ���������!',

'Unsub_success' => '�� ������� �������� ��� ������.',

'Approve_selected' => '�������� ����������',
'Deny_selected' => '��������� ����������',
'Not_logged_in' => '�� ������ ����� � �������, ������ ��� �������� � ������.',
'Remove_selected' => '������� ����������',
'Add_member' => '�������� ����� ������',
'Not_group_moderator' => '�� �� ��������� ����������� ������ � �� ������ ��������� ������ ��������.',

'Login_to_join' => '������� � �������, ����� ������ ���� �������� � �������',
'This_open_group' => '��� ������ � �������� ���������, �� ������ ������ ������� � ����������',
'This_closed_group' => '��� ������ � �������� ���������, ����� ������������ �� �����������',
'This_hidden_group' => '��� ������� ������, �������������� ���������� ������������� �� �����������',
'Member_this_group' => '�� ���� ���� ������',
'Pending_this_group' => '�� �������� � ����� ���� ������',
'Are_group_moderator' => '�� ��������� ���� ������',
'None' => '���',

'Subscribe' => '�����������',
'Unsubscribe' => '����������',
'View_Information' => '����������� ����������',

// Search
	'Search_query' => '������',
'Search_options' => '��������� �������',

'Search_keywords' => '�������� �����',
'Search_keywords_explain' => '�� ������ ������������ <u>AND</u> ����� ���������� �����, ������� ������ ���� � �����������, <u>OR</u> ��� ����, ������� ����� ���� � �����������, � <u>NOT</u> ��� ����, ������� � ����������� ���� �� ������. ����������� * � �������� ������� ��� ���������� ����������.',
'Search_author' => '����� �� ������',
'Search_author_explain' => '����������� * � �������� �������',

'Search_for_any' => '������ ����� �����/����� � ������ ��������',
'Search_for_all' => '������ ��� �����',
'Search_title_msg' => '������ � ��������� ��� � ������� ���������',
'Search_msg_only' => '������ ������ � ������� ���������',

'Return_first' => '���������� ������', // followed by xxx characters in a select box
'characters_posts' => '�������� ���������',

'Search_previous' => '����� ����������', // followed by days, weeks, months, year, all in a select box

'Sort_by' => '����������� ��',
'Sort_Time' => '������� ����������',
'Sort_Post_Subject' => '��������� ���������',
'Sort_Topic_Title' => '����',
'Sort_Author' => '������',
'Sort_Forum' => '������',

'Display_results' => '���������� ���������� ���',
'All_available' => '��� ���������',
'No_searchable_forums' => '� ��� ��� ������� � ������ �� � ����� �� ������� �� �����.',

'No_search_match' => '���������� ��� ��� ��������� �� �������',
'Found_search_match' => '����������� ������: %d', // eg. Search found 1 match
'Found_search_matches' => '����������� ������: %d', // eg. Search found 24 matches

'Close_window' => '������� ����',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => '��������, ������ %s ����� ��������� ���������� �� ���� ������.',
'Sorry_auth_sticky' => '��������, ������ %s ����� ��������� ������������ ���� �� ���� ������.',
'Sorry_auth_read' => '��������, ������ %s ����� ������ ��������� �� ���� ������.',
'Sorry_auth_post' => '��������, ������ %s ����� �������� ���� �� ���� ������.',
'Sorry_auth_reply' => '��������, ������ %s ����� �������� �� ��������� �� ���� ������.',
'Sorry_auth_edit' => '��������, ������ %s ����� ������������� ��������� �� ���� ������.',
'Sorry_auth_delete' => '��������, ������ %s ����� ������� ��������� �� ���� ������.',
'Sorry_auth_vote' => '��������, ������ %s ����� ���������� � ������� ����� ������.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>�����</b>',
'Auth_Registered_Users' => '<b>������������������ ������������</b>',
'Auth_Users_granted_access' => '<b>������������ �� ������������ ������� �������</b>',
'Auth_Moderators' => '<b>����������</b>',
'Auth_Administrators' => '<b>��������������</b>',

'Not_Moderator' => '�� �� ��������� ����������� ����� ������.',
'Not_Authorised' => '��� �������',

'You_been_banned' => '��� ��� ������ ������ � ������.<br />���������� � ���������� ��� �������������� ������� �� �������������� �����������.',

// Viewonline
	'Reg_users_zero_online' => '������ �� ������ ������������������ �������������: 0 � ', // There are 5 Registered and
'Reg_users_online' => '������ �� ������ ������������������ �������������:  %d � ', // There are 5 Registered and
'Reg_user_online' => '������ �� ������ ������������������ �������������: %d � ', // There is 1 Registered and
'Hidden_users_zero_online' => '������� �������������: 0', // 6 Hidden users online
'Hidden_users_online' => '������� �������������: %d', // 6 Hidden users online
'Hidden_user_online' => '������� �������������: %d', // 6 Hidden users online
'Guest_users_online' => '������ �� ������ ������: %d', // There are 10 Guest users online
'Guest_users_zero_online' => '������ �� ������ ������: 0', // There are 10 Guest users online
'Guest_user_online' => '������ �� ������ ������: %d', // There is 1 Guest user online
'No_users_browsing' => '���� ����� ������ ����� �� �������������',

'Online_explain' => '��� ������ �������� �� ���������� ������������� �� ��������� ���� �����',

'Forum_Location' => '����� �� ������',
'Last_updated' => '��������� ���������',

'Forum_index' => '������ �������',
'Logging_on' => '���� � �������',
'Posting_message' => '���������� ���������',
'Searching_forums' => '����� �� ������',
'Viewing_profile' => '�������� �������',
'Viewing_online' => '�������� &laquo;��� ������ �� ������&raquo;',
'Viewing_member_list' => '�������� ������ �������������',
'Viewing_priv_msgs' => '�������� ������ ���������',
'Viewing_FAQ' => '�������� FAQ',
'Viewing_RSS' => '�������� RSS',         // RSS Feed Mod 


// Moderator Control Panel
	'Mod_CP' => '������ ���������',
'Mod_CP_explain' => '����� �� ������ ��������� �������� ��������� ����� ������. �� ������ ���������, ���������, ���������� ��� ������� ����� ���������� ���.',

'Select' => '�������',
'Delete' => '�������',
'Move' => '�����������',
'Lock' => '�������',
'Unlock' => '�������',

'Topics_Removed' => '��������� ���� ���� ������� ������� �� ���� ������.',
'Topics_Locked' => '��������� ���� ���� �������.',
'Topics_Moved' =>'��������� ���� ���� ����������.',
'Topics_Unlocked' => '��������� ���� ���� �������.',
'No_Topics_Moved' =>'�� ���� ���������� �� ����� ����.',

'Confirm_delete_topic' => '�� ������������� ������ ������� ��������� ����?',
'Confirm_lock_topic' => '�� ������������� ������ ������� ��������� ����?',
'Confirm_unlock_topic' => '�� ������������� ������ ������� ��������� ����?',
'Confirm_move_topic' =>'�� ������������� ������ ����������� ��������� ����?',

'Move_to_forum' => '����������� � �����',
'Leave_shadow_topic' => '�������� ������ � ������ ������.',

'Split_Topic' => '���������� ����',
'Split_Topic_explain' => '� �������������� ���� ����� �� ������ ��������� ���� �� ��� ���� ������� ��������� �� ������, ���� ������ �� ���������� ���������',
'Split_title' => '��������� ����� ����',
'Split_forum' => '����� ��� ����� ����',
'Split_posts' => '�������� ��������� ���������',
'Split_after' => '�������� ��� ��������� ����� ����������',
'Topic_split' => '��������� ���� ���� ������� ��������',

'Too_many_error' => '�� ������� ������� ����� ���������. �� ������ ������� ������ ���� ���������, ����� �������� ��� ��������� ����� ����.',

'None_selected' => '�� �� ������� �� ����� ���� ��� ���������� ���� ��������. ��������� ����� � ��������.',
'New_forum' => '����� �����',

'This_posts_IP' => 'IP ����� ��� ����� ���������',
'Other_IP_this_user' => '������ IP ������ � ������� ����� ���� ������������',
'Users_this_IP' => '������������, �������� � ����� IP',
'IP_info' => '���������� �� IP ������',
'Lookup_IP' => '���������� ���� ��� IP',


// Errors (not related to a specific failure on a page)
	'Information' => '����������',
'Critical_Information' => '����������� ����������',

'General_Error' => '����� ������',
'Critical_Error' => '����������� ������',
'An_error_occured' => '��������� ������',
'A_critical_error' => '��������� ����������� ������',

	'Admin_reauthenticate' => '����� ��������� ������, �� ������ �������� ����������� ����.',

	'Topic_description' => '�������� ����� ����',
// 'Description' => 'Topic Description',

	'Guestbook' => '�������� �����',
	'Viewing_guestbook' => '����������� �������� �����',

	'Click_return_preferences' => '�������� %s�����%s, ����� ������������ � ������������ ����������',

	'Warn_new_post' => '���� ���� ����� �����. ���������� ���������� ����� ������ � ���� � �������� ���� ���������.',

	'Today_at' => '<b class="date-today">�������</b> at ',
	'Yesterday_at' => '<b class="date-yesterday">�����</b> at ',
	'TODAY' => '<b class="date-today">�������</b>',
	'YESTERDAY' => '<b class="date-yesterday">�����</b>',

// Birthday - BEGIN
	'Birthday' => '���� ��������',
 'No_birthday_specify' => '��� ���������',
 'Age' => '�������',
 'Wrong_birthday_format' => '������ ��� �������� ��� ������ �����������.',
 'Birthday_to_high' => '����, ���� ����, �� ��������� �������������, ������� ��� %d ����',
 'Birthday_require' => '��� ���� �������� ��������� �� ���� �����',
 'Birthday_to_low' => '����, ���� ����, �� ��������� �������������, ������ ��� %d ����',
 'Submit_date_format' => 'd-m-Y',//php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different separators are accepted)
 'Birthday_greeting_today' => '�� ������ �� �������� ����� ������ ��������� ��� ���������� %s ���� �������.', //%s is substituted with the users age
 'Birthday_greeting_prev' => '����������� ��� � ���� �������� %s ������ �� %s.', //%s is substituted with the users age, and birthday
 'Greeting_Messaging' => '������������',
 'Birthday_today' => '������������� � ���� �������� �������:',
 'Birthday_week' => '������������� � ���� �������� � ������� ��������� %d ����:',
 'Nobirthday_week' => '��� ������������� � ����������� ���� ��������  %d ���',//%d �������� � ������ ����
 'Nobirthday_today' => '��� ������������� � ����������� ���� �������� �������',
 'Year' => '���',
 'Month' => '�����',
 'Day' => '����',


// Birthday - END

// Start add - Gender MOD
	'Gender' => '���', //used in users profile to display witch gender he/she is
'Male' => '�������',
'Female'=> '�������',
'No_gender_specify' => '�� ������',
	'Gender_require' => '��������� ������� ��� ��� �� ���� �����',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
	'Topic_view_users' => '������ �������������, ������������� ����',
'Topic_time' => '��������� ��������',
'Topic_count' => '�������� �����',
'Topic_view_count' => '����� ���������� ���',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
	'Give_G_card'=>'������ ������������ ������������',
'Give_Y_card'=> '������� �������������� #%d',
'Give_R_card'=> '�������� ������������ ������',
'Ban_update_sucessful' => '������ ����� ������� ��������',
'Ban_update_green' => '������������ ������ �����������',
'Ban_update_yellow' => '������������ ������� ��������������, ������ � ���� %d �������������� �� ������������ %d',
'Ban_update_red' => '������������ �������',
'Ban_reactivate' => '������� ������ �����������',
'Ban_warning' => '�� �������� ��������������',
'Ban_blocked' => '��� ������� ������������',
'Click_return_viewtopic' => '������� %s�����%s ��� �������� � ����',
/*
	'Rules_ban_can' => 'You <b>can</b> ban other users in this forum',
	'Rules_greencard_can' => 'You <b>can</b> un-ban users in this forum',
	'Rules_bluecard_can' => 'You <b>can</b> report post to moderators in this forum',
*/
'Rules_ban_can' => '�� <b>������</b> �������� ������ ������������� � ���� ������',
'user_no_email' => '� ������������ ��� email, ������� ��������� �� ����� ���� ����������. �� ������ ��������� �� ������������.',
'user_already_banned' => '��������� ������������ ��� �������',
'Ban_no_admin' => '���� ������������ - �������������, ������� �� �� ����� ���� ������������ ��� �������',
'Rules_greencard_can' => '�� <b>������</b> ��������� ������������� � ���� ������',
'Rules_bluecard_can' => '�� <b>������</b> ��������� ����� ����������� � ���� ������',
'Give_b_card' => '��������� ����� � ��������� ����������� ����� ������',
'Clear_b_card' => '� ��������� %d ����� ����. ����� �� ������ �� �� �������.',
'No_moderators' => '� ������ ������ ��� �����������, ����� �� ����� ���� ���������!',
'Post_repported' => '����� ��� ��������� %d �����������',
'Post_repported_1' => '����� ��� ��������� ����������',
'Post_repport' => '����� � ���������', //Subject in email notification
'Post_reset' => '����� ����� ��� ����� ��������� �������',
'Search_only_bluecards' => '������ ������ ��������� � ������ �������',
'Send_message' => '������� %s�����%s ��� �������� ��������� ����������� ��� <br />',
'Send_PM_user' => '������� %s�����%s ��� �������� �� ������������ ���',
'Link_to_post' => '������� %s�����%s ��� �������� � ��������� 
--------------------------------

',
	'Post_a_report' => '��������� �����',
'Report_stored' => '��� ����� ������� ������',
'Send_report' => '������� %s�����%s ��� �������� � ������������� ���������',
'Red_card_warning' => '�� ����������� ���� ������������ %s ������� �����, ��� �������� ������� ������������, �� �������?',
'Yellow_card_warning' => '�� ����������� ���� ������������ %s ������ �����, ��� �������� �������� ������������ ��������������, �� �������?',
'Green_card_warning' => '�� ����������� ���� ������������ %s ������� �����, ��� �������� �������� ������������, �� �������?',
'Blue_card_warning' => '�� ����������� ���� ��������� ����� �����, ��� �������� �������� ����������� �����������, �� ������������� ����� ������?',
'Clear_blue_card_warning' => '�� ����������� ������� ����� ����� � ����� ���������, �� �������?',
'Warnings' => '��������������: %d', //shown beside users post, if any warnings given to the user
'Banned' => '��������',//shown beside users post, if user are banned

// Last visit - BEGIN
	'Last_logon' => '��������� ���������',
 'Hidde_last_logon' => '�������',
 'Never_last_logon' => '�������',
 'Users_today_zero_total' => '����� <b> 0 </b> ������������ �������� ���� ����:',
 'Users_today_total' => '����� <b> %d </b> ������������ �������� ���� ����:',
 'User_today_total' => '����� <b> %d </b> ������������ ������� ���� ����:',
 'Users_lasthour_explain' => ', %d � ������� �������� ����.',

	'Users_lasthour_none_explain' => '', //shown if no one has visited in the last hour, fill if you like

	'Years' => '����',
	'Year' => '���',
	'Weeks' => '������',
	'Week' => '������',
	'Day' => '����',
	'Total_online_time' => '���������� � ������',
 'Last_online_time' => '���������� � ������',
 'Number_of_visit' => '����������� ���������',
 'Number_of_pages' => '����������� ����� ��������',

// Last visit - END

	'total_site_hits_key' => '%V% �������� ������� � ��� ��� %D%.',

	'Message_too_short' => '�������� ���������',

// Start add - Online/Offline/Hidden Mod
	'Online' => '� ����',
	'Offline' => '�� �����',
	'Hidden' => '���������',

	'Online_status' => '������',
// End add - Online/Offline/Hidden Mod
	'Download' => '��������',

//signature editor
	'sig_edit_link' => '�������',
	'sig_description' => '������������� ������� (<b>������������ �������</b>)',
'sig_edit' => '������������� �������',
'sig_current' => '������� ������',
'sig_none' => '������� ����������',
'sig_save' => '���������',
'sig_save_message' => '������� ������� ���������!',

	'Statistics' => '����������',

// Start add - Global announcement MOD
	'Globalannounce' => '������� ����������',
	'Globalannounce' => '����� ������� ����������',
// End add - Global announcement MOD
	'Global_Announcements' => '���������� ����������',
 '����������' => '����������',
 'Sticky_Topics' => '������������� ����',
 'Announcements_and_Sticky' => '���������� � ������������� ����',
// db_update generator
	'Db_update_generator' => '��������� ���������� ��',
 'Instructions' => '����������',
 'SQL_instructions' => '<p> ��� ����� ������������ ����������� ������� ����� PHP, ������� �������� ��� �������� ���� ���� ������, ��������� ��� �������. ���� ��������� �����, � ������� �� ������ ������������, ����� �� �������� SQL � ���� ����. <br/> ������ �����, ��������������, ��� ������ ������ SQL ������������� ������ � ������� ;) (. � ��������� ������ ��������� ���� ����� ���������. �����, ������������, ��� ������� �����" phpbb _ "�������. ��� ����� ������������� �������� ��������� �������� ����, ������� ���� ����������� ��� ������������ db_update.php ���� �� ����� ������ ���������� �� ����, �� ��� ���������� ������� �������. </p>',
 'Enter_SQL' => '<strong> ������ SQL </strong>',
 'Enter_SQL_explain' => '<strong> MySQL </strong> �������� ����� \'s ����� ���������� �������� �������� ���� ������, ������������ �� �� �������� � ����������.',
 'Output_SQL' => '<strong> ����� SQL </strong>',
 'Output_SQL_explain' => '�������� � ��������� ����� �� ��������� ������� ������ � ������ ����. ��������� ���� ��� <u> db_update.php </u> � ��������� ��� �� ���� ������. ��������� ��������� ��� �������. <br/> <br/> �������������, ������� ������ ��������, ����� ��������� ���� ��������������� �� ��� ��������� <strong> (�������������) </strong>.',
 'Download' => '��������',

 'TOP_POSTERS' => '������ ���������',

// TELL A FRIEND
	'Tell_Friend' => 'Email �����.',
'Tell_Friend_Sender_User' => '���� ���:',
'Tell_Friend_Sender_Email' => '��� Email:',
'Tell_Friend_Reciever_User' => '��� �����:',
'Tell_Friend_Reciever_Email' => 'Email �����:',
'Tell_Friend_Msg' => '���������:',
'Tell_Friend_Title' => '����������',
'Tell_Friend_Body' => '������,\n� �������� ���� >>{TOPIC}<< �� {SITENAME} � �������, ��� �� ������ ���������������� ����. ����� ������: {LINK}\n\n��������! ����� ��������������� � ������, ��� �� ������� �� ����� ������.',

// Begin Thanks Mod
	'thankful' => '������������ ��������� �������',
	'thanks_to' => '������� ������� �� �������� ����',
	'thanks_end' => ':',
	'thanks_alt' => '������������� �� ����',
	'thanks_add_rate' => '������� ������� ������ �� �������� ����',
	'thanked_before' => '�� ��� ������� �������',
	'thanks_add' => '���� ������� �������',
	'thanks_not_logged' => '�� ������ ����� ���� ������� ������� �� ���������',
	'thanks2' => '������� �������!<br />',
// End Thanks Mod

//Begin Lo-Fi Mod
	'Lofi' => 'Lo-Fi ������',
// 'Full_Version' => 'Full Version',
	'Full_Version' => '��� "Lo-Fi" ������ ������ ��������� �����������. ��� ��������� ������ ������, ����������, ������� �����.',
	'quote_lofi' => '������',
	'edit_lofi' => '�������������',
	'ip_lofi' => 'IP',
	'del_lofi' => '�������',
	'profile_lofi' => '�������',
	'pm_lofi' => 'PM',
	'email_lofi' => 'E-mail',
	'website_lofi' => '�������',
	'icq_lofi' => 'ICQ',
	'aim_lofi' => 'AIM',
	'yim_lofi' => 'YIM',
	'msnm_lofi' => 'MSN',
	'quick_lofi' => '������� �����',
	'new_pm_lofi' => '��������� �� PM',
//End Lo-Fi Mod

// Retroactive Signature MOD
	'Retro_sig' => '���������� ��� ������� � ���� ����������',
 'Retro_sig_explain' => '����������/�������������� ����� �������, IcyPhoenix ������ ��������� ��� ������ � ����� ����������',
 'Retro_sig_checkbox' => '���������, ����� ���������� ���� ������� � ����� ����� ��������� ����������',
// End Retro Sig MOD

	'legend' => '�������',
	'users' => '������������',
//added to autogroup mod
	'No_more' => '������ ������������� ������',
 'No_add_allowed' => '�������������� ���������������� ������������ �� ��������',
 'Join_auto' => '�� ������ �������������� � ���� ������, ��� ��� ��� �������� ���� ������������� ��������� ������',

 // merge topics
	'Merge' => '����������',
 'Merge_topic' => '���������� � �����',
 'Topics_Merged' => '��������� ���� ���� ����������.',
 'No_Topics_Merged' => '��� ��� ��� �����������.',
 'Confirm_merge_topic' => '������������� �� �� �������, ��� �� ������ ���������� ��������� ����/����?',

	'Downloads' => '��������',

// Start add - Bin Mod
	'Move_bin' => '����������� ��� ���� � �����',
 'Topics_Moved_bin' => '��������� ���� ���� ���������� � �����.',
 'Bin_disabled' => '����� ��� ������������',
 'Bin_recycle' => '������',

// End add - Bin Mod
	'Recent_topics' => '�������� ����', //Recent Topics

 'Topics_Title_Edited' => '�������� ��������� ��� ���� ���������������.',
 'Edit_title' => '������������� ��������',
	'PM' => 'PM',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => '���������� �� IP ������ ��� �����������',
 'Registered_ip_address' => '������������������ IP �����',
 'Registered_hostname' => '������������������ hostname',
 'Other_registered_ips' => '������ ������������, ���������������� �� %s',//%s, �������� IP �������
 'Other_posted_ips' => '������ IP ���� ������������ �������� ��',
 'Search_ip' => '����� ���������� IP �������',
 'Search_ip_explain' => '������ � IP ����� � ������ ��� <u> 127.0.0.1 </u> - �� ������ ������������ * ��� ��������� ������  <u> 127.*.*.1 </u>',
 'IP' => 'IP',
 'Whois' => 'Whois',
 'Browser' => '�������',
 'No_other_registered_ips' => '������� ������ ������������ ������������������ ��� ���� IP �������.',
 'No_other_posted_ips' => '���� ������������ �� ����� ���������.',
 'Not_recorded' => '�� ������������������',
 'Logins' => '������',
 'No_logins' => '��� ������� ����������������� ��� ����� ������������.',


// End Advanced IP Tools Pack MOD

	'LIW_click_image' => '�������, ����� ����������� ����������� � ������������ �������',
 'LIW_click_image_explain' => '�������� �� �����������, ����� ����������� ��� � ������������ �������',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => '������',
	'Personal_Gallery' => '������ ��������',
	'Personal_Gallery_Of_User' => '������ �������� ��� %s',
	'Personal_Gallery_Of_User_Profile' => '������ �������� ��� %s (%d �����������)',
	'Show_All_Pic_View_Mode_Profile' => '���������� ��� ����������� � ������ ������� %s (��� sub �����)',
 'Not_allowed_to_view_album' => '��������, ��� �� ��������� �������������� ������.',
 'Not_allowed_to_upload_album' => '��������, ��� �� ��������� ���������� ����� ���. � �������. ���������� ���������� � ��������� ������� ��� ��������� �������������� ����������.',
 'Album_empty' => '��� ����������� � ������� <br/>, ������� <b> �������� ����� ���. </b> ������ �� ���� ��������, ����� �������.',
 'Album_empty2' => '��� ����������� � �������.',
 'Upload_New_Pic' => '��������� ����� �����������',
 'Pic_Title' => '��������� �����������',
 'Pic_Title_Explain' => '����� ����� ���� ������ ����������� ��������.',
 'Pic_Upload' => '�������� �����������',
 'Pic_Upload_Explain' => '��������� ��������� JPG � PNG ������. ������������ ������ ����� - %s �����. ������������ ���������� ����������� - %sx%s �������.',
 'Album_full' => '��������, ������ ������ ������������� ����������� �����������. ���������� ���������� � ���������  ������� ��� ��������� �������������� ����������.',
 'Album_upload_successful' => '�������, ���� ����������� ������� ���������',
 'Click_return_album' => '������� %s�����%s, ����� ������������ � �������.',
 'Invalid_upload' => '������������ �������� <br/> <br/> ���� ����������� �������� ������� �������, ��� �� ����������� �������.',
 'Image_too_big' => '��������, ��� ������ ����������� �������� ������� �������.',
 'Uploaded_by' => '���������',
 'Category_locked' => '��������, �� �� ������ ���������, ������ ��� ��� ��������� ���� ����������� ��������������. ���������� ���������� �  ��������� ������� ������� ��� ��������� �������������� ����������.',
 'View_Album_Index' => '������ �������',
 'View_Album_Personal' => '�������� ������� ������� ������������',
 'View_Pictures' => '��������������� ����������� ��� �������� �����������/������ ������������ � �������',
 'Album_Search' => '����� � �������',
 'Pic_Name' => '�������� ��������',
 '��������' => '��������',
 'Search_Contents' => '������� ��������:',
 'Search_Found' => '�����, ���������',
 'Search_Matches' => '����:',

// Mighty Gorgon - Full Album Pack - END

// News
	'xs_latest_news' => '��������� �������',
 'xs_no_news' => '��� ������.',
 'xs_news_version' => '������ �������� XS: %s',
 'xs_news_ticker_feed' => '�������� ������ XML: %s',
 'xs_no_ticker' => '��� ������� ������������ ������ ��������, ���������� �������� ��������������� ����������� ���������, ����� ������� ���.',
 'xs_news_ticker_title' => '������ ��������',
 'xs_news_tickers_title' => '������ ��������',
 'xs_news_item_title' => '������',
 'xs_news_items_title' => '������',
 'hide' => '������',
 'show' => '�����',
 'Welcome' => '����� ����������',
 'birthdays' => '��� ��������',


//Battle of the Sexes
	'male_zero_total' => '<b> 0 </b> ���������� �������� ����', // # registered male users
 'male_total' => '<b> %d </b> ��������� �������� ����', // # registered male users
 'male_one_total' => '<b> %d </b> �������� �������� ����', // # registered male users
 'female_zero_total' => '� ��� ���� <b> 0 </b> ��������', // # registered female users
 'female_total' => '� ��� ���� <b> %d </b> ��������', // # registered female users
 'female_one_total' => '� ��� ���� <b> %d </b> ���������', // # registered female users
 'unknown_total' => '& <b> %d </b> ���������, ������� ������ ��� \'t �����',
 'unknown_one_total' => '& <b> %d </b> ��������, �������� ������ Doesn \'t �����',
 'unknown_zero_total' =>'',
 'battle_of_sexes' => '�������� �����:',

 'who_viewed' => '���� \�������������',
 'BoardRules' => '�������',

 'View_post' => '����� �������������',
 'Post_review' => '�������� �����',
 'View_next_post' => '���������� ��������� �����',
 'View_previous_post' => '���������� ���������� �����',
 'No_newer_posts' => '��� ������� ����� ����� ���������� �� ���� ������',
 'No_older_posts' => '��� ������� ������� ���������� �� ���� ������',

 'StaffSite' => '������������� �����',
 'Staff_level' => array ('�������������', '���������'),
 'Staff_forums' => '������',
 'Staff_stats' => '����������',
 'Staff_user_topic_day_stats' => '%.2f ��� � ����', // %.2f = topics per day
 'Staff_period' => '� ��� ��� %d ���', // %d = days
 'Staff_contact' => '��������',
 'Staff_messenger' => '������� �����',


// Start Edit Notes MOD
	'Edit_notes' => '������������� ����������',
 'Delete_note' => '������� ����������',
 'Edited_by' => '�����������������',
 'Confirm_delete_edit_note' => '�� ������� ��� ������ ������� ����������?',
 'Edit_note_deleted' => '���������� �������������� ��� ������� ������.',

// End Edit Notes MOD
//Referrers Mod
'Referrers' => 'Http ��������',
 'Viewing_Referrers' => '�������� ���������',
//Referrers Mod End

	'Recent_topics' => '�������� ����',
 'Recent_today' => '�������',
 'Recent_yesterday' => '�����',
 'Recent_last24' => '������� 24 ����',
 'Recent_lastweek' => '������� ������',
 'Recent_lastXdays' => '������� %s ���',
 'Recent_last' => '���������',
 'Recent_days' => '���',
 'Recent_first' => '�������� %s',
 'Recent_first_poster' => '%s',
 'Recent_select_mode' => '����� Select:',
 'Recent_showing_posts' => '������������ ���������:',
 'Recent_title_one' => '%s ���� %s', // %s = topics; %s = sort method
 'Recent_title_more' => '%s ���� %s', // %s = topics; %s = sort method
 'Recent_title_today' => '�������',
 'Recent_title_yesterday' => '�����',
 'Recent_title_last24' => '� ������� 24 �����',
 'Recent_title_lastweek' => '� ������� ������',
 'Recent_title_lastXdays' => '� ������� %s ����', // %s = days
 'Recent_no_topics' => '���� �� ���� �������.',
 'Recent_wrong_mode' => '�� ������� ������������ �����.',
 'Recent_click_return' => '������� %s�����%s, ����� ������������ �� ����.',

 'Profile_view_option' => '���� Pop up �� ������������� ������������',
 'Profile_viewed' => '�������� ����� �������',


// BEGIN Disable Registration MOD
	'registration_status' => '��������, �� �����������  � ��������� ����� �������. ���������� ����������� ������������������ �����.',

// END Disable Registration MOD

	'PostHighlight' => '���������',
	'QuickQuote' => '������� ������',
	'Randomquote' => '��������� ������',

// Mod User CP Organize
	'Cpl_Navigation' => '����������� ������',
// 'Cpl_Settings_Options' => 'Settings And Options',
	'Cpl_Settings_Options' => '��������� ���������',
	'Cpl_Board_Settings' => '��������� ��������� �����',
	'Cpl_NewMSG' => '��������� ����� ���������',
	'Cpl_Click_Return_Cpl' => '������� %s�����%s ����� ��������� � ������ ����������',
	'Cpl_Personal_Profile' => '������ �������',
	'Cpl_More_info' => '�������',

	'Forbidden_characters' => '�������  ��� ���� ������������ �������� a-z, 0-9.',

 'Topics_per_page' => '��� �� ��������',
 'Posts_per_page' => '��������� �� ��������',
 'Hot_threshold' => '���������� ����� ���������',

	'Mod_CP_first_post' => '������ ���������',
	'Mod_CP_topic_count' => '<b> %s </b> ���� �������.',
 'Mod_CP_topics_count' => '<b> %s </b> ���� �������.',
 'Mod_CP_no_topics' => '��� ��� �� ������ �������.',
 'Mod_CP_sticky' => '�������������',
 'Mod_CP_announce' => '����������',
 'Mod_CP_global' => '������������',
 'Mod_CP_normal' => '�����������',
 'Display_sticky' => '�������������',
 'Display_announce' => '����������',
 'Display_global' => '���������� ����������',
 'Display_poll' => '�����',
 'Display_shadow' => '������������',
 'Display_locked' => '���������������',
 'Display_unlocked' => '�����������',
 'Display_unread' => '�������������',
 'Display_unanswered' => '���������� ��� ������',
 'Display_all' => '���',
 'Mod_CP_confirm_delete_polls' => '�� �������, ��� ������ ������� ������?',
 'Mod_CP_poll_removed' => '��������� ����� ��� ������� ������ �� ����.',
 'Mod_CP_polls_removed' => '��������� ������ ���� ������� ������� �� ���.',
 'Mod_CP_topic_removed' => '��������� ���� ��� ������� ������� �� ���� ������.',
 'Mod_CP_topic_moved' => '��������� ���� ���� ���������� �� <b> %s </b> � <b> %s </b>.', // %s = old/new forum
 'Mod_CP_topics_moved' => '��������� ���� ���� ���������� �� <b> %s </b> � <b> %s </b>.', // %s = old/new forum
 'Mod_CP_topic_locked' => '��������� ���� ���� �������������.',
 'Mod_CP_topic_unlocked' => '��������� ���� ���� ��������������.',
 'Mod_CP_topics_sticked' => '��������� ���� ���� sticked.',
 'Mod_CP_topic_sticked' => '��������� ���� ��� sticked.',
 'Mod_CP_topics_announced' => '��������� ���� ��������.',
 'Mod_CP_topic_announced' => '��������� ���� ��������.',
 'Mod_CP_topics_globalized' => '��������� ���� ���� ����������.',
 'Mod_CP_topic_globalized' => '��������� ���� ��� ����������.',
 'Mod_CP_topics_normalized' => '��������� ���� ���� �������������.',
 'Mod_CP_topic_normalized' => '��������� ���� ��� �������������.',
 'Mod_CP_click_return_topic' => '������� %s�����%s, ����� ������������ � ������ ���� ��� %s�����%s, ����� ������������ � �����.',


	't_starter' => '�� �� ������ ����������� ����',
 'Watched_Topics' => '��������������� ����',
 'No_Watched_Topics' => '�� �� ������ ������������� ���� ���',
 'Watched_Topics_Started' => '������ ����',
 'Watched_Topics_Stop' => '���������� �������������',

 'Stop_watching_forum' => '���������� �������������  �����',
 'Start_watching_forum' => '��� ������������� ���� �����',
 'No_longer_watching_forum' => '�� ������ �� �������������� ���� �����.',
 'You_are_watching_forum' => '�� ��������������  ���� �����.',

 'UCP_SubscForums' => '����������� ������ �������',
 'UCP_NoSubscForums' => '� ��� ��� ����������� �������',
 'UCP_SubscForums_Flag' => '����',
 'UCP_SubscForums_Forum' => '�����',
 'UCP_SubscForums_Forum_subscribed' => '�����, �����������',
 'UCP_SubscForums_Forum_already_subscribed' => '�� ��� ��������� �� ���� �����',
 'UCP_SubscForums_Click_return_forum' => '������� %s�����%s, ����� ������������ � ������',
 'UCP_SubscForums_Topics' => '����',
 'UCP_SubscForums_Posts' => '���������',
 'UCP_SubscForums_LastPost' => '������ �����',
 'UCP_SubscForums_UnSubscribe' => '���������������',
 'UCP_SubscForums_NewTopic' => '����� ����',

 'profile_main' => '����� ����������',
 'profile_explain' => '����� ���������� � ������ �������� �� ������� �������������. ������ �� ������ ��������������, ����������� � �������� ���� �������. �� ������ ����� ������� ��������� ������ ������������� (���� ���������).',
 'your_activity' => '���� �������',

 'Gravatar' => '�� ������',
 'Gravatar_explain' => '���� � ��� ���� ������� �� <a href="http://www.gravatar.com" target="_blank">�� ������</a>, ������� � ���� ������� � � ��������� ���� ������ �� �����.',

 'private_msg_review_title' => '��������� �� \'re, ���������� ��',
 'private_msg_review_error' => '������, ������ ������� ���������!',

 'BSH_Viewing_Topic' => '�������� ����: % %t',
 'BSH_Viewing_Post' => '%s������� ���������%s',
 'BSH_Viewing_Profile' => '��������������� %u % \�������',
 'BSH_Viewing_Groups' => '%s�������� �����%s',
 'BSH_Viewing_Forums' => '�������� ������: % %f',
 'BSH_Index' => '%s�������� ������� ��������%s',
 'BSH_Searching_Forums' => '%s����� �������%s',
 'BSH_Viewing_Onlinelist' => '%s�������� ��� ������%s',
 'BSH_Viewing_Messages' => '%s������� ������ ���������%s',
 'BSH_Viewing_Memberlist' => '%s������� ���� �������������%s',
 'BSH_Login' => '%s����%s',
 'BSH_Logout' => '%s�����%s',
 'BSH_Editing_Profile' => '%s������������� �������%s',
 'BSH_Viewing_ACP' => '%s������� ACP%s',
 'BSH_Moderating_Forum' => '%s������������� ������%s',
 'BSH_Viewing_FAQ' => '%s����������� FAQ%s',
 'BSH_Viewing_Category' => '�������� ���������: % %c',

 'Board_statistic' => '����������',
 'Database_statistic' => '���������� ��',
 'Version_info' => '���������� ������',
 'Thereof_deactivated_users' => '����������� ���������� �������������',
 'Thereof_Moderators' => '����������� �����������',
 'Thereof_Junior_Administrators' => '����������� ������� ���������������',
 'Thereof_Administrators' => '����������� ���������������',
 'Deactivated_Users' => '������������ ������ ���������',
 'Users_with_Mod_Privileges' => '������������ � ������� ����������',
 'Users_with_Junior_Admin_Privileges' => '������������  ������������ �������� ��������������',
 'Users_with_Admin_Privileges' => '������������ � ������������ ��������������',
 'DB_size' => '������ ���� ������',
 'Version_of_ip' => '������ <href = "http://www.icyphoenix.ru/"> ������� ������ </a>',
 'Version_of_board' => '������ <href = "http://www.phpbb.com"> phpBB </a>',
 'Version_of_PHP' => '������ <href = "http://www.php.net/"> PHP </a>',
 'Version_of_MySQL' => '������ <href = "http://www.mysql.com/"> MySQL </a>',
 'Download_post' => '��������� ���������',

 'Download_topic' => '���� ��������',
 'Always_swear' => '������ ���������',

 'Shoutbox' => '���� ���',
 'Shoutbox_date' => 'd �. Y h:i:s',
 'Shout_censor' => '<b> ����� ������! </b>',
 'Shout_refresh' => '���������',
 'Shout_text' => '��� �����',
 'Viewing_Shoutbox' => '�������� ����',
 'Censor' => '������',

 'Edit_post_time' => '������������� ����� ���������',
 'Edit_post_time_xs' => '�������������',
 'Topic_time_xs' => '����� ����',
 'Post_time' => '����� ���������',
 'Post_time_successfull_edited' => '<b> ����� ������� ���������. ����� 3 ������ ����� ������� </b></span><br /><span class="postdetails"> ����.',

	'staff_message' => '��������� �� �������������',

 'Board_Rules' => '������� ������',
 'Forum_Rules' => '������� ������',
 'Show_avatars' => '���������� ������ � ����',
 'Show_signatures' => '���������� ������� � ����',
 'Acronym' => '�������',
 'Acronyms' => '��������',
 'User_Number' => '������������ #',
 'Member_Count' => '���������',
 'Reply_message' => '������� �� ���������',
 'Click_read_topic' => '������� %s�����%s, ����� ���������', // %s's here are for uris, do not remove!
 'Create_with_generator' => '������� ������, ��������� ��������� �������',
 'View_avatar_generator' => '��������� �������',
 'Adv_Search' => '����������� ������',
 'Search_Explain' => '����� �� �����',
 'Login_attempts_exceeded' => '������������ ����������� ������� ����� � ������� %s ��� ��������. �� �� ������� ����� � ������� ��������� %s �����.',
 'Please_remove_install_contrib' => '���������� ������������ � ��������� / � �������� contrib/, �������',
 'Search_Engines' => '��������� ����:',
 'Bots_browsing_forum' => '��������� ����, ��������������� ���� �����:',
 'Debug_On' => '������� ���.',
 'Debug_Off' => '������� ����.',
 'Page_Generation_Time' => '�������� �������������',
 'Memory_Usage' => '������',
 'SQL_Queries' => '������� SQL',
 'Search_new2' => '����� ���������',
 'Search_new_p' => '��������� ������� � ���������� ���������',
 'Show_In_Portal' => '����� �� ������ ��������',
 'Not_Auth_View' => '� ��� ��� ���� ������������� ��� ��������.',
 'Site_Hist' => '������� �����',
 'Links' => '������',
 'Print_View' => '������ ��� ������',
 'Browsing_topic' => '������������, ��������������� ��� ����:',
 'Sudoku' => '������',
 'Bookmarks' => '��������',
 'Set_Bookmark' => '����� �������� ��� ���� ����',
 'Remove_Bookmark' => '������� �������� ��� ���� ����',
 'No_Bookmarks' => '� ��� ��� ��������',
 'Always_set_bm' => '�������� ������ �������������, ��������',
 'Found_bookmark' => '�� ���������� �������� %d.',// eg. Search found 1 match
 'Found_bookmarks' => '�� ���������� �������� %d.',// eg. Search found 24 matches
 'More_bookmarks' => '������ ��������...',// For mozilla navigation bar




//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => '��� ���?',
	'Rss_news_help_title' => 'RSS ������',
	'Rss_news_help_header' => '��� ����� ������ � ��� ��� ������������??',
	'Rss_news_help_explain' => 'RSS ����� - ��� ��������� ����������� ������ ����������� ����� �� ������������ �������� �� �������� �� ������ ������ ����� �����������.������� �������� ��� ������ RSS �������� ����������:FeedReader - ������������ ����� ������, ������� ������� � Abilon - ������������� � ����� ���������� (600��) RSS-�����. <br /><br /><b>Attention:</b> For subscribing to Website feeds a <a href="http://www.feedreader.com/" target="new">Feed-Reader</a>',
	'Rss_news_help_header_2' => '<b>����� RSS � Atom?</b>',
	'Rss_news_help_explain_2' => 'RSS � Atom �������� ��� ������� �������. ����������� �������� ��� ������ ������� ������������ ��� �������. � ��������� ����� ����� 0,3 � 2,0 RSS ������������ ���.',
	'Rss_news_help_header_3' => '<b>��� � ���� ������������ �������?</b>',
	'Rss_news_help_explain_3' => '��� ������ ����������� ��������� <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />Afterwards you can in the program:<br /><br /><b>1.</b> Search for RSS links on our side. (Extras => Search for new feeds on web page) <b>or</b><br /><b>2.</b> add one of the following feed URL`s:',
	'L_url_rss_explain' => 'URL ��� ��� � ������.',
	'L_url_rss_news_explain' => 'URL ��� �������� � ������.',
	'L_url_rss_atom_explain' => 'URL ��� Atom RSS Feed.',
	'Rss_news_help_rights' => '�� ����� ����� ������� ����� RSS �������� ��� �������.',
	'Rss_news_feeds' => 'RSS News Feeds',

	'Quick_Reply' => '������� �����',
	'Mod_CP_sticky2' => '����������',
	'Mod_CP_announce2' => '��������',
	'Mod_CP_global2' => '����������',
	'Mod_CP_normal2' => '���������',

	'Search_Flood_Error' => '�� �� ������ ��������������� �������, ���������� ���������� ��������������� ������ ����� ��������� �����.',

// Custom Profile Fields MOD
	'custom_field_notice' => '��� ������ ���� ������� ���������������. ��� ����� ��� ��������, �� �������� �������� ��������. ������, ���������� � *, �������� �������������.',
	'and' => ' � ',
// END Custom Profile Fields MOD

'dsbl' => '��� ����� IP <href =" % url % "> ������ � ������ ������ </a>. <br/> ����������� �������������.',
 'Emails_Only_To_Admins_Error' => '�� ������ ������������ �������� �������, ����� ������� ����������� ����� ������ �������������.',
 'Wordgraph' => '����',
 'Viewing_wordgraph' => '�������� �����',
 'Links_For_Guests' => '<b> �� ������ ���� ����������������, �����  ������� ��� ������ </b>',
 '�����' => 'N',
 'New_Label' => '�����',
 'New_Messages_Label' => '����� ���������',
 'Show_Personal_Gallery' => '����������� ������������ \������ �������',
 'Login_Status' => '���������',
 'Login_Hidden' => '�������',
 'Login_Visible' => '�������',
 'Login_Default' => '�������� �� ���������',
 'Errors_Not_Found' => '��������� ����� �� ����� ���� ������ �� ���� �������',
 'Errors_000' => '����������� ������',
 'Errors_000_Full' => '��������� ����� ���������� ����������� ��� ������. <br/> ������ ���� �������������� � ������� �����������, � �� ��������, ��� �� ��������.',
 'Errors_400' => '������ 400',
 'Errors_400_Full' => '��������� ����� �� �������� ���������� �������.',
 'Errors_401' => '������ 401 - ������ ����������',
 'Errors_401_Full' => '�� ��������� ��� ���������, ������ ��� � ��� ��� ���� ��� ��������� � ����� ������.',
 'Errors_403' => '������ 403',
 'Errors_403_Full' => '���������� � ����� ������, ��������.',
 'Errors_404' => '������ 404 - ����, �� ���������',
 'Errors_404_Full' => '�����, ������� �� �������, �� �������� �� ���� �������. ��, ��������, �������� ����� c ���������������� ��������, ��� ��� �� �����, ��������, ���� �������.',
 'Errors_500' => '������ 500 - ������ ������������',
 'Errors_500_Full' => '����� �� ������� ����������� ������ ������������. <br/> ������ ���� �������������� � ������� �����������, � �� �������� �������� ��� ����� ������.',
 'Errors_Email_Subject' => '������:',
 'Errors_Email_Addrress_Prefix' => 'xs_errors',
 'Errors_Email_Body' => '������ ��������� �� ����� �����. ���������� ��������� ������ �����������.',
 'Remote_avatar_no_image' => '����������� %s �� ����������',
 'Remote_avatar_error_filesize' => '����������� �� ������� ������� ��� �������� (%d �����)',
 'Remote_avatar_error_dimension' => '����������� �� ������� ����������� ��� �������� (%d x %d �������)',
 'How_Many_Chatters' => '���� <b> %d </b> ������������ (�) � ���� ������',
 'Who_Are_Chatting' => '<b> %s </b>',
 'Click_to_join_chat' => '�������, ����� �������������� � ����',
 'ChatBox' => '���',
 'log_out_chat' => '�� ����� �� ����',
 'Send' => '��������',
 'Login_to_join_chat' => '���� � �������, ����� �������������� � ����',


// Hacks List
/* General */
	'Hacks_List' => '�������',
 'Page_Desc' => '���� ������ ��������� ��� ���������/�������������/������� ������ ������� ��������  ������/���, ������������� �� ����� �����. ��� ���������� ��� �������������, ����� ��� �������� credits.php ��������.',
 'Deleted_Hack' => '��������� ������ �� ����������������� %s �� ������. <br/>',
 'Updated_Hack' => '����������� ���������� ������� ��� ������������������ %s. <br/>',
 'Added_Hack' => '����������� ���������� ��� ������������������ %s. <br/>',
 'Status' => '������',
 'No_Website' => '��� ��������� ������.',
 'No_Hacks' => '��� ��������, ����� ����������.',
 'Add_New_Hack' => '�������� ����� ������',
 'User_Viewable' => '���������� �� ����������������� ������?',
 'Hack_Name' => '�������� ����',
//'Description' => '��������',
 'Required' => '�����������',
 'Author_Email' => 'Email ������',
 'Version' => '������',
 'Download_URL' => '����� ��������',

/* Errors */
 'Error_Hacks_List_Table' => '������, ���������� ������� ������ �����.',
 'Required_Field_Missing' => '�� �� ������ ������� ��� ����������� ����������.',
 'Error_File_Opening' => '�� �� ������ ������� ����: %s',


//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => '��������� �����������', // Album Addon
	'Random_pic' => '��������� �����������', // Album Addon
	'Click_enlarge_pic' => '������� �� ����������� ����� ���������',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => '��������� ������������ IP',
	'Last_Used_OS' => 'OS',
	'Last_Used_Browser' => '�������',
	'Last_Used_Referer' => '�������',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
	'Users_Admins' => '��������������',
	'Users_Mods' => '����������',
	'Users_Global_Mods' => '������� ����������',
	'Users_Regs' => '������������',
	'Users_Guests' => '�����',
	'Users_Hidden' => '�������',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Fast' => '������',
	'Standard' => '��������',
	'Style' => '�����',
	'User_Contacts' => '��������',
	'Memberlist_Users_Display' => '������������� �� ��������:',
	'Sort_LastLogon' => '��������� ���������',
	'Sort_Birthday' => '���� ��������',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => '����',
	'Rank' => '������',
	'Rank_Header' => '������',
	'Rank_Image' => '����������� ������',
	'Rank_Posts_Count' => '�������������� ������ � ����������',
	'Rank_Days_Count' => '�������������� ������ � ����',
	'Rank_Min_Des' => '����������� ���������/���',
	'Rank_Min_M' => '������� ���������',
	'Rank_Max_M' => '�������� ���������',
	'Rank_Min_D' => '������� ����',
	'Rank_Max_D' => '�������� ����',
	'Rank_Special' => '������������� ������',
	'Rank_Special_Guest' => '�������������� ��� ������',
	'Rank_Special_Banned' => '�������������� ������ ��� ����������',
	'Current_Rank_Image' => 'Current ������ �����������',
	'No_Rank' => '��� ����������� ������',
	'No_Rank_Image' => '��� ����������� ��� ������',
	'No_Rank_Special' => '��� ��������������� ������������ ������',
	'Memberlist_Administrator' => '�������������',
	'Memberlist_Moderator' => '���������',
	'Memberlist_User' => '������������',
	'Guest_User' => '�����',
	'Banned_User' => '����������',
	'Rank1_title' => '������ 1 Title',
	'Rank2_title' => '������ 2 Title',
	'Rank3_title' => '������ 3 Title',
	'Rank4_title' => '������ 4 Title',
	'Rank5_title' => '������ 5 Title',
// Mighty Gorgon - Multiple Ranks - END
// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => '����',
	'MAIN_LINKS' => '�������� ������',
 'TOOLS_LINKS' => '���������������� ��������',
 'NEWS_LINKS' => '�������',
 'USERS_LINKS' => '������������ &amp; ������',
 'INFO_LINKS' => '����������',
 'SPONSORS_LINKS' => '��������',
 'HelpDesk' => '����� ������',
 'AvatarGenerator' => '��������� �������',
 'DBGenerator' => 'SQL �� ��������� PHP',
 'NEWS_CAT' => '��������� ��������',
 'NEWS_ARC' => '����� ��������',

// Mighty Gorgon - Nav Links - END
	'Activity' => '����',
	'Games' => '����',
	'Trohpy' => '������ ����',
	'quick_links_games' => '���� ����',

	'By' => 'By',
	'No_Icon_Image' => '��� ������',
	'Change_Style' => '�����',
	'Change_Lang' => '����',
	'Permissions_List' => '����������� ������',
	'IP_TEAM' => '������� Icy Phoenix',

//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',
	'WeatherForecast' => '������� ������',
	'ErrorNotFound' => '���� �� ������!',
	'MGC_Users_Online' => 'MGC ������������ ������',
	'MGC_User_Servertime' => '����',
	'MGC_User_Nickname' => '��� ������������',
	'MGC_User_Server' => '������',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'MGC ������',

	'Country_Flag' => '���� ������',
	'Select_Country' => '������� ������',
	'Extra_profile_info' => '�������������� ���������� �������',
// 'Extra_profile_info_explain' => 'You can add extra information about yourself or about your hobbies. You can also add photos. You can use some bbcodes as when you post or make your signature. There is a <b>%d</b> character limit (if 0 then no limit)',
	'Extra_profile_info_explain' => '�� ������ �������� �������������� ���������� � ����  ��� � ����� �����. �� ������ ����� �������� ����������. �� ������ ������������ ��������� bb ����, ����� �� ����������� ��� ������� ���� �������.',
 'Extra_window' => '������� � ��������� ����',
 'Extra_too_long' => '���� �������������� ������� �������� ������� ������� (������������ <b> %d </b>, ��������)',
 'UserLike' => '������������ likes',
 'UserDisLike' => '������������ �� ��������',
 'UserLikeIns' => '��� ���� ������� ��� ��������',
 'UserDisLikeIns' => '��� ���� ������� ��� �� ��������',
 'UserPhone' => '���������� �����',
 'UserSport' => '�����/�������',
 'UserMusic' => '������/������',
 'UserNoInfo' => '��� ��������� ����������',
 'Last_Seen' => '��������� ������',


// New MG - END

// MG CMS - BEGIN
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'CMS ����������',
	'CMS_CONFIG' => 'CMS ������������',
	'CMS_ACP' => '������������� ��� ��������',
	'CUSTOM_PAGE' => '��������� ��������',
// MG CMS - END

// Icy Phoenix - BUILD 001
	'SimilarTopics' => '�������� ����',
	'Chat' => '���',
	'Digests' => '���������',

	 'CPL_REG_INFO_EXPLAIN' => '��� ������������, ����� ����������� ����� � ������',
 'CPL_PROFILE_INFO_EXPLAIN' => '����� ���������� ���������, ����������, ���� ��������, �������� � ������ ����������',
 'CPL_PROFILE_VIEWED_EXPLAIN' => '������������, ������� ������������� ���� ������������',
 'CPL_AVATAR_PANEL_EXPLAIN' => '������ �������� ��������� ������������, ������� �� ������ ������� �� ����� ������',
 'CPL_SIG_EDIT_EXPLAIN' => '���� �������: �� ������ ��������� �����, ������� ����� ���������� �����',
 'CPL_PREFERENCES_EXPLAIN' => '����� ������������ ��������� ��� ��������� ����������� � ������ ���������',
 'CPL_BOARD_SETTINGS_EXPLAIN' => '���������� ��������� ��������� ������������ �������, ������� � �����',
 'Calendar_settings_EXPLAIN' => '��������� ��������� ������������ ������������ �����',
 'Hierarchy_setting_EXPLAIN' => '��������� ��������� ������������ ��������� ���� ���������� � ���',
 'LOGIN_SEC_EXPLAIN' => '���� �������� ���� ������ ���� ����������� ��� �������������� ��� ����� � ������� ������ ����� ������������',
 'CPL_OWN_POSTS_EXPLAIN' => '���� � ����� ���������� �� ������',
 'CPL_OWN_PICTURES_EXPLAIN' => '�������� ���� ������ �������',
 'CPL_INBOX_EXPLAIN' => '���� ��� ������ ���������: �������� ������ ���������, ������� �� ��������',
 'CPL_SAVEBOX_EXPLAIN' => '����������� ���������: �������� ������ ���������, ������� �� ���������',
 'CPL_OUTBOX_EXPLAIN' => '���� ��� ������� ���������: �������� ������ ���������, ������� �� �������, �� ������� ��� �� ���� ���������',
 'CPL_SENTBOX_EXPLAIN' => 'Sentbox: �������� ������� ���������, ������� �� ������� � ������� ���� ���������',
 'CPL_BOOKMARKS_EXPLAIN' => '�� ��������� ��� �������� ��� ���',
 'WATCHED_TOPICS_EXPLAIN' => '�������� ������ ���� ���',
 'CPL_SUBSCFORUMS_EXPLAIN' => '������ �� ������� �� �����������',
 'DIGESTS_EXPLAIN' => '�������� ����������� �����, ������� �������� ������������� � �������� ����� ����������, ���������� �� ������',
 'DRAFTS_EXPLAIN' => '���������� ������ ���������',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => '���� ���',
	'Ajax_Chat' => '���',
	'Ajax_Archive' => '����� ����',
	'Shoutbox_flooderror' => '�� �� ������ ������ ���������. ���������� ����������� ����� � ������� ���������� ������.',
 'Shoutbox_no_auth' => '��������, ������ ���������������� ������������ ����� ������������ ���� ���',
 'Shoutbox_loading' => '���� �������� ���� ����...',
// Errors
	'Shoutbox_unable' => '��������, �������� couldn \'t ��� ���������. ���������� ���������� �����.',
 'Shoutbox_empty' => '��� ��������� � ��',
 'Shoutbox_no_mode' => '�� ��������� ��������� �����',
// Archive
	'Shouts' => '�����',
 '����������' => '����������',
 'Total_shouts' => '������ ������',
 'Stored_shouts' => '����������� ������',
 'My_shouts' => '��� ������',
 'Today_shouts' => '������ �� ������� 24 ����',
 'Top_Ten_Shouters' => '������ ������ �������� �����������',
// Online list
	'Online_total' => '�����',
	'Online_registered' => '������������',
	'Online_guests' => '�����',
	'Who_is_Chatting' => '��� � ����',
	'Shoutbox_online_explain' => '��� ������ �������� �� ���������� ������������� �� ��������� 30 ������',
// Ajax Shoutbox - END

	'Contact_us' => '�������� �����',
	'Contact_us_explain' => '� ���� �������� �� ������ ��������� ��� ������ �� email',
	'Session_invalid' => '������. ���������� ��������� ����� �����.',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => '��� ��� ������������ ������� ��������',
'Reg_Username_Long' => '��� ��� ������������ ������� �������',
'Reg_Username_Taken' => '��� ��� ������������ �� ��������',
'Reg_Username_Free' => '��� ��� ������������ ���������',
'Reg_PWD_Short' => '���� ������ ������� ��������',
'Reg_PWD_Easy' => '���� ������ ������� �������',
'Reg_PWD_OK' => '���� ������ OK',
'Reg_Email_Invalid' => '���� ����� ����������� ����� �������� ���������������� ��� ��� ���� � ��',
'Reg_Email_OK' => '���� ����� ����������� ����� � �������',

// Moved here from lang_adv_time.php
	'time_mode' => '���������� ��������',
	'time_mode_text' => '������� ����� ������ ���������� � ������� �������� ��� ����� ������ (�� 0 �� 120 �����, ��� �������, 60). <br /> <br /> <strong> * ����� ��������������� ��������� ������������ �� ��������� �� ���� ������, � ������������ ��� ���������������. </ STRONG>',
	'time_mode_auto' => '�������������� �����...',
	'time_mode_full_pc' => '���� ����� �� ����������',
	'time_mode_server_pc' => '���������� �������, ������� ���� / ������ /> <br <span STYLE="margin-left: 25"> � ���������� </ span>',
	'time_mode_full_server' => '������� ����� �������',
	'time_mode_manual' => '������ �����...',
	'time_mode_dst' => 'DST ��������',
	'time_mode_dst_server' => '��������',
	'time_mode_dst_time_lag' => 'DST ������� �� �������',
	'time_mode_dst_mn' => '�����',
	'time_mode_timezone' => '������� ����',

	'dst_time_lag_error' => '������ �� �������. �� ������ ������� ����� ����� ����� 0 � 120. ',

	'dst_enabled_mode' => ' [������ ����� ��������]',
	'full_server_mode' => '������������� ������� ������� � ������',
	'server_pc_mode' => '����� ���������������� � �������� - ������� ����/������ ����� � ����� �����������',
	'full_pc_mode' => '����� ����������������� � �������� ������ ����������',

	'Smileys_Per_Page' => '�������� �� ��������',

/* lang_site_hist.php - BEGIN */
	'Site_history' => '������� �����',
	'Month' => '�����',
	'Week_day' => '���� ������',
	'Not_availble' => '�� ��������',
	'Total_users' => '�������� �������������',
	'Reg_users' => '������������������ ������������',
	'Hidden_users' => '������� ������������',
	'Guests_users' => '�����',
	'New_users' => '����� ������������',
	'New_topics' => '����� ����',
	'New_posts_reply' => '���������/������',
	'Most_online' => '����������� ������������� ������ %s',
	'Most_online_week' => '����������� ������������� ����� � ������� ��������� 7 ����',
	'Last_24' => '����������� ������������� ������ � ������� ��������� %s �����',
	'Top_Posting_Users' => '������ ��������� �������������',
	'Top_Posting_Users_week' => '������ ��������� ������������� ���� ������ [%s]',
	'Rank' => '������',
	'Percent' => '�������',
	'Graph' => '������',
	'Top_Visiting_Users' => '����� ���������� �� �����',
/* lang_site_hist.php - END */

/* lang_referrers.php - BEGIN */
	'Referrers_Title' => 'Http ���������� ����������',
	'Referrers_Cleared' => '�������� ����������',
	'Referrers_Clear' => '������� ���',
	'Click_Return_Referrers' => '������� %s�����%s ����� ������� � ���������',
	'Referrers' => 'Http �������',
	'Referrer_host' => '�������\'s Host',
	'Referrer_url' => '�������\'s Url',
	'Referrer_ip' => '�������\'s IP',
	'Referrer_hits' => 'Hits',
	'Referrer_first' => '������ �����',
	'Referrer_last' => '��������� �����',
	'Viewing_Referrers' => '�������� ���������',
/* lang_referrers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_Days' => '%d ����',
	'X_Weeks' => '%d ������',
	'X_Months' => '%d �������',
	'X_Years' => '%d ���',

	'Confirm_delete_user' => '�� ������������� �������, ��� ������ ������� ����� ������������?',
 'Prune_no_users' => '��� ������������� ��� ��������',
 'Prune_users_number' => '��������� %d ������������ ����� �������:',

 'Prune_user_list' => '������������, ������� ����� �������',
 'Prune_on_click' => '�� ����������� ������� %d �������������. ������������� �� �� ������ ��������� ��� ��������?',
 'Prune_Action' => '������� ������ ���� ����� ��������� ��������',
 'Prune_users_explain' => '���������� �������������!. �� ������ ������� ���� �� ���� ������: ������� ������ �������������, ������� �� ����������������, ������� ������ �������������, �������  �� �����, ������� �������������, �������  �� �������������� ���� ������� ������. <p/> <b> ����������: </b> ���  ������� ������.',

/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => '������ ���������',
	'Available' => '��������� �������',
	'Random' => '���������',
	'Avatar_Text' => '����������, ������� �����, ������� �� ������ �� ������ �� ����� ������:',
'Avatar_Preview' => '��������������� ������',
'Your_Avatar' => '��� ������',
'Submit_Avatar' => '��������� ������',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Upload_Image_Local' => '��������� ����������� ',
'Uploaded_Images_Local' => '����������� �����������',
 'Upload_Image_Local_Explain' => '�������� ����, ������� ����� ��������',
 'Uploaded_Image_Success' => '����������� ���� ��������� �������.',
 'Uploaded_Image_BBC' => '�� ������ ������������ ���� BBCode, ����� ��������� ��� �����������.',
 'Upload_Image_Empty' => '�� ������ ������������ �������� \'t..., �� ������!',
 'Upload_File_Too_Big' => '����, ������� �� ��������� ���������, �������� ������� �������! ������������ ����������� ������:',
 'Upload_File_Type_Allowed' => '������ ��� ���� ����� ����� ���� ���������',
 'Upload_Insert_Image' => '�������� BBCode',
 'Upload_Close' => '�������',
 'BBCode' => 'BBCode',
 'HTML' => 'HTML',


	'No_News' => '��� �������� ',

	'Email_confirm' => '������������� ������ Email',
 'Email_mismatch' => '������ ����������� �����, ������� �� �����, �� �������������.',

 'View_ballot' => '������������� ��������� �������������',
 'Full_edit' => '����������� �� ������ ����� ��������������',
 'Save_changes' => '���������',
 'No_subject' => '(��� ���)',
 'Edit_quick_post' => '������� �������������� ����� ���������',
 'AJAX_search_results' => '������� ����� ����� %s ��� � ��������� ������� �� ������ �������. ������� �����, ����� ���������� ��� ����',
 'AJAX_search_result' => '������� ����� ����� ���� ���� � ��������� ������� �� ������ �������. ������� �����, ����� ���������� ��� ����',
 'More_matches_username' => '���� ��� ������������ ��������������� ������ �������. ���������� �������� ������������ �� ����� ����.',
 'No_username' => '�� ������ ������ ��� ������������.',
 'AJAX_quick_search_results' => '������� ����� ����� %s ��� � ��������� �������. <br/> �� ������ ������� �� ������ ������ ������ ����������. <br/> �������� �� ����� ����� �������� ������ ������ ����������.',
 'AJAX_quick_search_result' => '������� ����� ����� ���� ���� � ��������� �������. <br/> �� ������ ������� �� ������ ������ ���������.',

 'Icon_Description' => '�������� ������',

 'Feature_Disabled' => '��� ����������� ������������.',

// Resend Activation - BEGIN
	'Resend_activation_email' => '������� ������ � ����� ���������',
'Invalid_activation' => '��������� ������� ������ ������������  ����� ���� ��������� ������ ���������������.',
'No_actkey' => '�� ������������ ���� ��������� ��� ����� ������� ������. ����������, ��������� � ��������������� ����������� ��� ��������� �������������� ����������. ',
'Send_actmail_flood_error' => '�� �� ������ ������� ��� ���� ������, ����������, ��������� ������� ����� ��������� �����.',
'Resend_activation_email_done' => '��������� �� ����������� ����� ���� ����������. ����������, ��������� ���� ����������� ����� ��� ��������� �������������� ����������. ',
	// Resend Activation - END

	'Bots_Group' => '����',
'Bots_Color' => '���� ����',
'Active_Users_Group' => '�������� ������������',
'Active_Users_Color' => '���� ��� ��������  �������������',
'Group_Default_Membership' => '������ �� ��������� ',
'Group_Default_Membership_Explain' => '�������� ������ �� ��������� ��� �������������, ����� ��������� ������ � ����.',
'User_Color' => '���� ������������ ',
'User_Color_Explain' => '���� �� ���������� ���� ��� ������� ������������ �� ����� �������� ��������� ����� �� ���������, ���� �� ������� 1 ������ � ������ ����. ����������� ����������������� ��� ��� <b> # </ B> ������: ff0000 ��� ��� RED. ',
'No_Groups_Membership' => '��� �����',
'No_Default_Group' => '��� ����� �� ���������',
'Group_members_updated' => '���������� ������ ����� ������ �������.',
'Colorize_All' => '���������� ���� ����������',
'Colorize_Selected' => '���������� ���������',

	'CompanyWho' => '��������',
	'CompanyWhere' => '��� � ���� ���������',
	'CompanyServices' => '������',
	'CompanyProducts' => '�������',

	'ShareThisTopic' => '������� ���� ����',

	'Remove_cookies' => '������� Cookies ����� �� ������ �����',
'Cookies_deleted' => '��� ������� ���� �������. ������ �� ����� �� �������. <br /> ����� ��������� ��������, ���������� ������� �������.',
'Delete_cookies' => '������� Cookies',
'Cookies_confirm' => '�� �������, ��� ������ ������� ��� ����, ������������� ���� ������? <br /> <br /> ��� �������� ����� ����� �������� ����� �� �������.',
	
	'CustomIcy' => 'CustomIcy',

	'Drafts' => '�������',
	 'Drafts_Action' => '��������',
 'Drafts_Save' => '���������',
 'Drafts_Load' => '���������',
 'Drafts_Saved' => '���� ������ ��� ��������',
 'Drafts_Loaded' => '������ ��������',
 'Drafts_No_Drafts' => '��� ����������� ��������',
 'Drafts_Delete_Sel' => '������� ���������',
 'Drafts_Save_Question' => '<br/> <br/> ������������� �� �� �������, ��� ������ ��������� ��� ��������� ��� ������? <br/> <br/> ���������� ��������,������  ��������� ����� ���������, � �� ����� ��� �� ���� ������ ���������� ��������� ���������.',
 'Drafts_Delete_Question' => '<br/> <br/> ������������� �� �� �������, ��� �� ������ ������� ��������� �������?',
 'Drafts_Type' => '�������� ���',
 'Drafts_Subject' => '�������� ����',
 'Drafts_NT' => '����� ����',
 'Drafts_NM' => '�����',
 'Drafts_NPM' => '������ ���������',

	'CannotEditAdminsPosts' => '�� �� ������ ������������� ��������� ��������������',
 'Random_Number' => '��������� �����',

 'New_download' => '����� �������� ���� �������� ��� ���������. <br/> ������� %s�����%s, ����� ����������.',
 'Dl_bug_tracker' => ' Bug ������',
 'Downloads_ADV' => '��������� �������',

 'TopicUseful' => '������������� �� ��� ���� ���� ���������?',
 'Article' => '������',
 'Comments' => '�����������',

 'Sitemap' => '����� �����',

 'Delete_My_Account' => '������� ������� ������',
 'Delete_My_Account_Explain' => '���� �� ������ ������� ���� ������� ������ �� ���� �����, ���������� ������� ������, ��������� ��� �����, � ���� ������� ������ ����� ������������� ��� ����� ������. <br/> ���������� ���������� "�������� ������� ������" �� ���� � (���� �� �������), �������� ������� � ���������� ������.',

 'KB_MODE_ON' => '�������� ����� ������',
 'KB_MODE_OFF' => '��������� ����� ������',

 'Go_To_Page_Number' => '������, ����� ������������� ��������',

 'Admin_Emails' => '�������������� ����� ������� �� ����������� ����� ���� ����������',
 'Allow_PM_IN' => '��������� ������������� �������� ��� ������� ���������',
 'Allow_PM_IN_Explain' => '��������, ��� ��������� ��������������, ���������� � ������ ������ ����� � ��������� ������� ��� ���������.',
 'Allow_PM_IN_SEND_ERROR' => '������������, �������� �� ��������� ������� ���������, �� ���� ��������, ������ ��� �� ��� ��� ������������� ������ ��� ������ ���������.',

// 'UCP_ZEBRA' => 'Friends &amp; Foes',
	'UCP_ZEBRA' => '���������� ��������',
	'UCP_ZEBRA_FOES' => '���������� ����������� ��������������',
 'UCP_ZEBRA_FRIENDS' => '���������� ��������',

 'ADD_FOES' => '�������� ����� ���������� �������������',
 'ADD_FOES_EXPLAIN' => '�� ������ ������ ��������� ���� ������������ ������� � ����� ������.',
 'YOUR_FOES' => '���� �����',
 'YOUR_FOES_EXPLAIN' => '����� ������� ����� ������������ �������� ��, � ������� ��� ������. <br/> �����: ����������� CTRL, ����� �������/����� ���������� ���������.',
 'FOE_MESSAGE' => '��������� �� ����������� ������������',
 'FOES_EXPLAIN' => '���������� �������� ��������������, ������� ����� ��������������� �� ���������. ��������� ���� �������������  ����� ��������� �� ������. ������ ��������� �� ���������� ������������� ��� ��� ���������. ���������� ��������, ����� �� �� ������ ������������ ����������� ��� ���������������.',
 'FOES_UPDATED' => '��� ������ ���������� ������������� ��� �������� �������.',
 'FOES_UPDATE_ERROR' => '��� ������ ���������� ������������� �� ��� ��������.',
 'NO_FOES' => '��� ���������� ������������� � ��������� �����',


	'ADD_FRIENDS' => '�������� �����',
 'ADD_FRIENDS_EXPLAIN' => '�� ������ ������ ��������� ���� ������������, ������ � ��������� ������.',
 'YOUR_FRIENDS' => '���� ������',
 'YOUR_FRIENDS_EXPLAIN' => '����� ������� ����� ������������ �������� ��, � ������� ��� ������. <br/> �����: ����������� CTRL, ����� �������/����� ��������� ������.',
 'FRIEND_MESSAGE' => '��������� �� �����',
 'FRIENDS' => '������',
 'FRIENDS_EXPLAIN' => '�������� ��� ������� ������ � ������ � �������� �� ��������� ����. ���� ������ ����� ��������������� ��������� �����-���� ���������, ��������� �� �����, ����� ��������.',
 'FRIENDS_UPDATED' => '��� ������ ������ ��� �������� �������.',
 'FRIENDS_UPDATE_ERROR' => '��� ������ ������ �� ��� ��������.',
 'FRIENDS_ONLINE' => '������ ������',
 'FRIENDS_HIDDEN' => '������ �������',
 'FRIENDS_OFFLINE' => '������ ������',
 'NO_FRIENDS' => '��� ������ � ��������� �����',
 'NO_FRIENDS_OFFLINE' => '��� ������ ������',
 'NO_FRIENDS_ONLINE' => '��� ������ ������',

 'Default' => '�������� �� ���������',

 'Reserved_Author' => '[�������]',
 'Reserved_Topic' => '[����������������� ����]',
 'Reserved_Post' => '[����������������� ����]',

 'THANKS_RECEIVED' => '�������, ����������',

 'RECENT_USER_ACTIVITY' => '��������� �������� ������������',
 'USER_TOPICS_STARTED' => '����, �������',
 'USER_POSTS' => '��������� ����������',
 'USER_TOPICS_VIEWS' => '����, ����������������',
 'RECENT_USER_STARTED_TITLE' => '������� %s',
 'RECENT_USER_STARTED_NAV' => '����, ������� %s',
 'RECENT_USER_POSTS_TITLE' => '������� %s ��������������� �',
 'RECENT_USER_POSTS_NAV' => '����, ������� %s ��������������� �',
 'RECENT_USER_VIEWS_TITLE' => '��������������� %s',
 'RECENT_USER_VIEWS_NAV' => '����, ��������������� %s',

 'WARN_NO_BUMP' => '�� - ��������� ������� � ���� ����: �� �� ������ �������� ����� ��������� � ������� 24 �����.',

 'LINK_THIS_TOPIC' => '������� ��� ����',
 'LINK_URL' => 'URL',
 'LINK_BBCODE' => 'BBCode',
 'LINK_HTML' => 'HTML',

 'NEWS_POSTED' => '�������� ��������',
 'TOPICS_POSTED' => '����� ����  �������',
 'POSTS_POSTED' => '���� �� ���� ���������������� ����������',

 'ACCOUNT_DELETION_REQUEST' => '������������ %s ������ ������� ������� ������.',

 'SORT_TOPICS' => '��� ���� ',
 'SORT_TOPICS_NEWEST' => '����� �����',
 'SORT_TOPICS_OLDEST' => '����� ������',

 'EDIT_POST_DETAILS' => '����������� �������������� ����������� ',
 'CURRENT_POSTER' => '������� �����������',
 'NEW_POSTER' => '����� �����������',
 'DETAILS_CHANGED' => '<b> ������� ��������. </b></span><br /><span class="����������� ���������"> ��� ���� ����� ������� ����� 3 �������.',

 '�������������' => '����������������',
 'Redirect_to' => '���� ��� ������� �� ������������  ��������������� ����������, ������� %s�����%s, ��� �������������',

 'InProgress' => '� �����������',

 'HAPPY_BIRTHDAY' => '� ���� ��������',

 '���������' => '��������',
 '�����������' => '�����������',
 '������ �����' => '������ �����',
 '��� �����' => '��� �����',
 'FILE_NOT_AUTH' => '� ��� ��� ���� ��������� ���� ����',
 'SHOW_POSTS_FROM' => '����� ��������� ��',
 'SHOW_POSTS_TO' => '�',

 'SEE_MORE_DETAILS' => '����� ������ ������������...',
 '�����������' => '�����������',
 'MASS_PM' => '����� ���������',
 'TEXT_FORMAT' => '������',
 '�����������' => '�����������',
 'PM_NOTIFICATION' => '������, <br/> <br/> �� �������� ����� ������ ��������� � ����� ������� ������ �� ("SITENAME"). <br/> <br/> �� ������ ����������� ���� ����� ���������, ����� �� ��������� ������: <br/> <br/> {U_INBOX} <br/> <br/>',

 'GSEARCH' => '����� Google',
 'GSEARCH_ENGINE' => '������������ ��������� �������� Google',
 'SEARCH_WHAT' => '�����, ���',
 'SEARCH_WHERE' => '�����, ���',
 'SEARCH_THIS_FORUM' => '������ �� ���� ������...',
 'SEARCH_THIS_TOPIC' => '������ � ���� ����...',
 'VF_ALL_TOPICS' => '��� ����',

 'WHITE_LIST_MESSAGE' => '���� ���� ������� ������������� ������� ������ ����� ����������� �����. ����������, �������� ��� �������� ���� ��� ����� ���� ���� ����� ������ ��� ���������',
 'CLICK_RETURN_HOME' => '������� %s�����%s, ����� ��������� � ������ ��������',

 'WEEK_DAY_SUNDAY' => '�����������',
 'WEEK_DAY_MONDAY' => ' �����������',
 'WEEK_DAY_TUESDAY' => ' �������',
 'WEEK_DAY_WEDNESDAY' => ' �����',
 'WEEK_DAY_THURSDAY' => ' �������',
 'WEEK_DAY_FRIDAY' => ' �������',
 'WEEK_DAY_SATURDAY' => ' �������',

 'RATINGS' => '������',

 'ERROR_TABLE' => '�� �������� ��������� ������ %s �������',

 'SMILEYS' => '��������',
 'SMILEYS_NO_CATEGORIES' => '��� ������������ ���������',
 'SMILEYS_CATEGORY' => '���������',
 'SMILEYS_GALLERY' => '������� �������',
 'SMILEYS_STANDARD' => '����������� ������',

 'QUICK_LIST' => '������ ������',
 'NORMAL_LIST' => '���������� ������',

 'RETURN_PAGE' => '%s������� � ���������� ��������%s',
 'FILE_NOT_FOUND' => '����, �� ������',
 'FSOCK_DISABLED' => 'FSOCK, ������������',

 'MANAGEMENT' => '����������',
 'SORT_ORDER' => '���',
 'SORT_DIR' => '����������� ����',

 'TIME_YEAR' => '���',
 'TIME_MONTH' => '�����',
 'TIME_DAY' => '����',
 'TIME_HOUR' => '���',
 'TIME_MINUTE' => '������',
 'TIME_SECOND' => '�������',

 'CONTACTS' => '��������',


	// Event Registration - BEGIN
	'Reg_Title' => '��������� ����������� ',
 'Post_Registration' => '��������� ����������� ',
 'Add_registration' => '�������� �����������',
 'Add_reg_explain' => '&nbsp; &bull; ��������� <i>, ������������ </i>, ����� �������� ��������������� ����� ��� ����� ���������. �����������, ����� ������ ���. <br/> &nbsp; &bull; ��������� <i> ����� </i>, ����� ������� ��� ������� ����������� ��� ���� �����. <br/> &nbsp; &bull; ������� ����� � <i> ����� </i>, ����� ���������� ����������� ��� �����. "0" ��� ������ = ��������������.',
 'reg_activate' => '���������',
 'reg_reset' => '�����',
 'Reg_Insert' => '�� ��������������.',
 'Reg_Change' => '����������� ��������.',
 'Reg_Confirm' => '����������� ������������.',
 'Reg_Unregister' => '����������� ��������.',
 'Reg_Max_Registrations' => '�������� ����������� ��� ���� ����� ����������. ����������� �� ��������.',
 'Reg_No_Slots_Left' => '��� ������ ��� �����������.',
 'Reg_One_Slot_Left' => '���� ����, ��� �����������.',
 'Reg_Slots_Left' => '%s �����, �����������, ����� ����������������.',
 'Reg_Self_Unregister' => '������',
 'Reg_Own_Confirmation' => '�������������',
 'Reg_Own_Confirmed' => '��������������',
 'Reg_Green_Option' => '�������',
 'Reg_Blue_Option' => '�����',
 'Reg_Red_Option' => '�������',
 'Reg_Value_Max_Registrations' => '�����',
 'Reg_Do' => '������������������',
 'Reg_Maybe' => '�� ������',
 'Reg_Dont' => '�� ������',
 'Reg_Head_Username' => '������������:',
 'Reg_Head_Time' => '����:',
 'Reg_for' => '���������� ��� ����������� ',
 'Reg_for_explain' => '������� 0 ��� ���� ������ ��� ����������� �����������',
 'Reg_no_options_specified' => '�� ������ ���������� �� ������� ���� ���� �����, ����� ��� ����������� .',
 'Reg_event_date' => '<b>������ ����: </b>',
	// Event Registration - END

	'REPLY_PREFIX_OLD' => 'Re:',
'REPLY_PREFIX' => 'Re:',

'READ_ONLY_FORUM' => '��������, �� � ��������� ����� ����� ���������� � <b> READ ONLY </ �����> �, ������� ��������, ��� �� �� ������ ���������� ���������, ���� ���� � ��� ���� �����. ����������, ��������� ������� �����. ',
	// Tickets Submission - BEGIN
	'TICKET_CAT' => '���������',
	// Tickets Submission - END

	)
);

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['yes'];
$lang['NO'] = $lang['no'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

$lang['Prune_commands'] = array();

// here you can make more entries if needed
$lang['Prune_commands'][0] = 'Prune non-posting users';
$lang['Prune_explain'][0] = 'Who have never posted, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][1] = 'Prune inactive users';
$lang['Prune_explain'][1] = 'Who have never logged in, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][2] = 'Prune non-activated users';
$lang['Prune_explain'][2] = 'Who have never been activated, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][3] = 'Prune long-time-since users';
$lang['Prune_explain'][3] = 'Who have not visited for 60 days, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][4] = 'Prune not posting so often users';
$lang['Prune_explain'][4] = 'Who have less than an average of 1 post for every 10 days while registered, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][5] = 'Prune non-posting and non-visiting users';
$lang['Prune_explain'][5] = 'Who have never posted and not visited recently, <b>excluding</b> new users from the past %d days';
// Timezones - BEGIN
$lang['All_times'] = '������� ����: % S '; // eg. All times are GMT - 12 Hours (times from next block)

// Time zones short
$lang['tzs']['-12'] = 'GMT - 12 �����';
$lang['tzs']['-11'] = 'GMT - 11 �����';
$lang['tzs']['-10'] = 'GMT - 10 �����';
$lang['tzs']['-9'] = 'GMT - 9 �����';
$lang['tzs']['-8'] = 'GMT - 8 �����';
$lang['tzs']['-7'] = 'GMT - 7 �����';
$lang['tzs']['-6'] = 'GMT - 6 �����';
$lang['tzs']['-5'] = 'GMT - 5 �����';
$lang['tzs']['-4'] = 'GMT - 4 �����';
$lang['tzs']['-3.5'] = 'GMT - 3.5 �����';
$lang['tzs']['-3'] = 'GMT - 3 �����';
$lang['tzs']['-2'] = 'GMT - 2 �����';
$lang['tzs']['-1'] = 'GMT - 1 �����';
$lang['tzs']['0'] = 'GMT';
$lang['tzs']['1'] = 'GMT + 1 �����';
$lang['tzs']['2'] = 'GMT + 2 �����';
$lang['tzs']['3'] = 'GMT + 3 �����';
$lang['tzs']['3.5'] = 'GMT + 3.5 �����';
$lang['tzs']['4'] = 'GMT + 4 �����';
$lang['tzs']['4.5'] = 'GMT + 4.5 �����';
$lang['tzs']['5'] = 'GMT + 5 �����';
$lang['tzs']['5.5'] = 'GMT + 5.5 �����';
$lang['tzs']['6'] = 'GMT + 6 �����';
$lang['tzs']['6.5'] = 'GMT + 6.5 �����';
$lang['tzs']['7'] = 'GMT + 7 �����';
$lang['tzs']['8'] = 'GMT + 8 �����';
$lang['tzs']['9'] = 'GMT + 9 �����';
$lang['tzs']['9.5'] = 'GMT + 9.5 �����';
$lang['tzs']['10'] = 'GMT + 10 �����';
$lang['tzs']['11'] = 'GMT + 11 �����';
$lang['tzs']['12'] = 'GMT + 12 �����';
$lang['tzs']['13'] = 'GMT + 13 �����';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12 Hours) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11 Hours) Midway Island, Samoa';
$lang['tz']['-10'] = '(GMT -10 Hours) Hawaii';
$lang['tz']['-9'] = '(GMT -9 Hours) Alaska';
$lang['tz']['-8'] = '(GMT -8 Hours) Pacific Time (US &amp; Canada)';
$lang['tz']['-7'] = '(GMT -7 Hours) Mountain Time (US &amp; Canada)';
$lang['tz']['-6'] = '(GMT -6 Hours) Central Time (US &amp; Canada), Mexico City';
$lang['tz']['-5'] = '(GMT -5 Hours) Eastern Time (US &amp; Canada), Bogota, Lima, Quito';
$lang['tz']['-4'] = '(GMT -4 Hours) Atlantic Time (Canada), Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3.5 Hours) Newfoundland';
$lang['tz']['-3'] = '(GMT -3 Hours) Brazil, Buenos Aires, Georgetown';
$lang['tz']['-2'] = '(GMT -2 Hours) Mid-Atlantic';
$lang['tz']['-1'] = '(GMT -1 Hour) Azores, Cape Verde Islands';
$lang['tz']['0'] = '(GMT) Western Europe Time, London, Lisbon, Casablanca, Monrovia';
$lang['tz']['1'] = '(GMT +1 Hour) CET(Central Europe Time), Brussels, Madrid, Paris';
$lang['tz']['2'] = '(GMT +2 Hours) EET(Eastern Europe Time), Kaliningrad, South Africa';
$lang['tz']['3'] = '(GMT +3 Hours) Baghdad, Kuwait, Riyadh, Moscow, St. Petersburg';
$lang['tz']['3.5'] = '(GMT +3.5 Hours) Tehran';
$lang['tz']['4'] = '(GMT +4 Hours) Abu Dhabi, Muscat, Baku, Tbilisi';
$lang['tz']['4.5'] = '(GMT +4.5 Hours) Kabul';
$lang['tz']['5'] = '(GMT +5 Hours) Ekaterinburg, Islamabad, Karachi, Tashkent';
$lang['tz']['5.5'] = '(GMT +5.5 Hours) Bombay, Calcutta, Madras, New Delhi';
$lang['tz']['5.75'] = '(GMT +5.75 Hours) Kathmandu';
$lang['tz']['6'] = '(GMT +6 Hours) Almaty, Dhaka, Colombo';
$lang['tz']['6.5'] = '(GMT +6.5 Hours)';
$lang['tz']['7'] = '(GMT +7 Hours) Bangkok, Hanoi, Jakarta';
$lang['tz']['8'] = '(GMT +8 Hours) Beijing, Perth, Singapore, Hong Kong, Urumqi';
$lang['tz']['9'] = '(GMT +9 Hours) Tokyo, Seoul, Osaka, Sapporo, Yakutsk';
$lang['tz']['9.5'] = '(GMT +9.5 Hours) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10 Hours) EAST(East Australian Standard), Guam';
$lang['tz']['11'] = '(GMT +11 Hours) Magadan, Solomon Islands, New Caledonia';
$lang['tz']['12'] = '(GMT +12 Hours) Auckland, Fiji, Kamchatka, Marshall Island';
$lang['tz']['13'] = '(GMT +13 Hours) Nuku\'alofa';
// Timezones - END

$lang['datetime']['Sunday'] = $lang['WEEK_DAY_SUNDAY'];
$lang['datetime']['Monday'] = $lang['WEEK_DAY_MONDAY'];
$lang['datetime']['Tuesday'] = $lang['WEEK_DAY_TUESDAY'];
$lang['datetime']['Wednesday'] = $lang['WEEK_DAY_WEDNESDAY'];
$lang['datetime']['Thursday'] = $lang['WEEK_DAY_THURSDAY'];
$lang['datetime']['Friday'] = $lang['WEEK_DAY_FRIDAY'];
$lang['datetime']['Saturday'] = $lang['WEEK_DAY_SATURDAY'];
$lang['datetime']['Sun'] = '��';
$lang['datetime']['Mon'] = '��';
$lang['datetime']['Tue'] = '��';
$lang['datetime']['Wed'] = '��';
$lang['datetime']['Thu'] = '��';
$lang['datetime']['Fri'] = '��';
$lang['datetime']['Sat'] = '��';
$lang['datetime']['January'] = '������';
$lang['datetime']['February'] = '�������';
$lang['datetime']['March'] = '����';
$lang['datetime']['April'] = '������';
$lang['datetime']['May'] = '���';
$lang['datetime']['June'] = '����';
$lang['datetime']['July'] = '�����';
$lang['datetime']['August'] = '������';
$lang['datetime']['September'] = '��������';
$lang['datetime']['October'] = '�������';
$lang['datetime']['November'] = '������';
$lang['datetime']['December'] = '�������';
$lang['datetime']['Jan'] = '���';
$lang['datetime']['Feb'] = '���';
$lang['datetime']['Mar'] = '���';
$lang['datetime']['Apr'] = '���';
$lang['datetime']['May'] = '���';
$lang['datetime']['Jun'] = '���';
$lang['datetime']['Jul'] = '���';
$lang['datetime']['Aug'] = '���';
$lang['datetime']['Sep'] = '���';
$lang['datetime']['Oct'] = '���';
$lang['datetime']['Nov'] = '���';
$lang['datetime']['Dec'] = '���';
$lang['datetime']['Jan'] = $lang['datetime']['JAN'];
$lang['datetime']['Feb'] = $lang['datetime']['FEB'];
$lang['datetime']['Mar'] = $lang['datetime']['MAR'];
$lang['datetime']['Apr'] = $lang['datetime']['APR'];
$lang['datetime']['May'] = $lang['datetime']['MAY'];
$lang['datetime']['Jun'] = $lang['datetime']['JUN'];
$lang['datetime']['Jul'] = $lang['datetime']['JUL'];
$lang['datetime']['Aug'] = $lang['datetime']['AUG'];
$lang['datetime']['Sep'] = $lang['datetime']['SEP'];
$lang['datetime']['Oct'] = $lang['datetime']['OCT'];
$lang['datetime']['Nov'] = $lang['datetime']['NOV'];
$lang['datetime']['Dec'] = $lang['datetime']['DEC'];

// NOTE: Please do not translate the following 4 lines!
// They are automatically translated into your language
$lang['day_short'] = array($lang['datetime']['Sun'], $lang['datetime']['Mon'], $lang['datetime']['Tue'], $lang['datetime']['Wed'], $lang['datetime']['Thu'], $lang['datetime']['Fri'], $lang['datetime']['Sat']);
$lang['day_long'] = array($lang['datetime']['Sunday'], $lang['datetime']['Monday'], $lang['datetime']['Tuesday'], $lang['datetime']['Wednesday'], $lang['datetime']['Thursday'], $lang['datetime']['Friday'], $lang['datetime']['Saturday']);
$lang['month_short'] = array($lang['datetime']['JAN'], $lang['datetime']['FEB'], $lang['datetime']['MAR'], $lang['datetime']['APR'], $lang['datetime']['MAY'], $lang['datetime']['JUN'], $lang['datetime']['JUL'], $lang['datetime']['AUG'], $lang['datetime']['SEP'], $lang['datetime']['OCT'], $lang['datetime']['NOV'], $lang['datetime']['DEC']);
$lang['month_long'] = array($lang['datetime']['January'], $lang['datetime']['February'], $lang['datetime']['March'], $lang['datetime']['April'], $lang['datetime']['May'], $lang['datetime']['June'], $lang['datetime']['July'], $lang['datetime']['August'], $lang['datetime']['September'], $lang['datetime']['October'], $lang['datetime']['November'], $lang['datetime']['December']);

//$lang[''] = '';

//====================================================
// Do not insert anything below this line
//====================================================

?>