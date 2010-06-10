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
/**
*
* @Extra credits for this file
* Mark D. Hamill (mhamill@computer.org)
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
// This block goes as default text in the emailed digest (mail_digests.php)
	'digest_introduction' => '��������� �� �������, ��� ��������� ����� ����������, ���������� ��'. $board_config ['sitename']. '������. ���������� ��������� � �������������� � ����������!',
 'digest_from_text_name' => $board_config['sitename'] . ' Digest Robot',
 'digest_from_email_address' => $board_config['board_email'],
 'digest_subject_line' => $board_config['sitename'] . ' Digests',
'digest_disclaimer_html' => "\n" . 'This digest is being sent to registered members of <a href="' . DIGEST_SITE_URL . '">' . $board_config['sitename'] . '</a> forums and only because you explicitly requested it. ' . $board_config['sitename'] . ' is completely commercial free. Your email address is never disclosed to outside parties. See our <a href="' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">FAQ</a> for more information on our privacy policies. You can change or delete your subscription by logging into ' . $board_config['sitename'] . ' from the <a href="' . DIGEST_SITE_URL . 'digests.' . PHP_EXT . '">Digest Page</a>. (You must be logged in to change your digest settings.) If you have questions or feedback on the format of this digest please send it to the <a href="mailto:' . $board_config['board_email'] . '">' . $board_config['sitename'] . ' Webmaster</a>.',
	'digest_disclaimer_text' => "\n" . 'This digest is being sent to registered members of ' . $board_config['sitename'] . ' forums and only because you explicitly requested it. ' . $board_config['sitename'] . ' is completely commercial free. Your email address is never disclosed to outside parties. See our FAQ for more information on our privacy policies. You can change or delete your subscription by logging into ' . $board_config['sitename'] . ' from the Digest Page. (You must be logged in to change your digest settings.) If you have questions or feedback on the format of this digest please send it to the ' . $board_config['board_email'] . '.',
	'digest_forum' => '�����: ',
 'digest_topic' => '����:',
 'digest_link' => '������',
 'digest_post_time' => '�������� �����',
 'digest_author' => '�����',
 'digest_message_excerpt' => '����� ���������',
 'digest_posted_by' => '������������������',
 'digest_posted_at' => '�',
 'digest_forums_message_digest' => '������� ��������� �������',//used in <head> tag
 'digest_salutation' => '�������',
 'digest_your_digest_options' => '���� ����� ������:',
 'digest_format' => '������:',
 'digest_show_message_text' => '����� ��������� ������:',
 'digest_show_my_messages' => '���������� ��� ���������:',
 'digest_frequency' => '������� ������:',
 'digest_show_only_new_messages' => '���������� ������ ����� ��������� � �������� ����, ����� � �����:',
 'digest_send_if_no_new_messages' => '�������� ����� ���� ��� ����� ���������:',
 'digest_period_24_hrs' => '24 ����',
 'digest_period_1_week' => '1 ������',
 'digest_no_new_messages' => '��� ����� ��������� ��� �������, ������� �� �������.',
 'digest_message_size' => '������� Maximum ��� ���������� ��������� � ������:',
 'digest_summary' => '������ ������',
 'digest_a_total_of' => '� ����� ���������',
 'digest_were_emailed' => '��������� ���� ������� �� ����������� �����.',
 'digest_server_date' => '���� �������:',
 'digest_server_hour' => '��� �������:',
 'digest_server_time_zone' => '������� ���� �������:',
 'digest_or' => '���',
 'digest_a_digest_containing' => '�����, ����������',
 'digest_posts_was_sent_to' => '��������� ���������',

// This block goes on the digest settings user interface page (digests.php)
	'digest_page_title' => '������',
 'digest_explanation' => '������ �������� ��������� ������ ����������, ���������� �����, ������� ������������ �������� ���. ������ ����� �������� ���������, ��� ����������� � ����� ��� ��� �� ���������. �� ������ ���������� �� ������������� ������, ��� ������� �� ������ ������ ���������, ��� �� ������ ������� �������� ��� ��������� ��� ���� �������, ��� ������� ��� ��������� ������. <br/> <br/>'." \n". '����������� � ������ �������� ������������������ �� �������� "�����", � ��� ���� ��� ����� ����������� ����� �� ��������� � ����� ������ � ���������� ������������. �� ������, �������, �������� ���� �������� ������ � ����� �����, ������ ����������� � ���� ��������. ����������� ������������� �������, ��� ������ ����� �������. �� �������� ��� ������ ����� �������!'. "\n",
 'digest_wanted' => '<b> ��� ���������� ������: </b> <br/> (������������ ������ �������� � �����������)',
 'digest_none' => '��� �� ������ (���������� ��������)',
 'digest_daily' => '���������',
 'digest_weekly' => '�����������',
 'digest_format_short' => '������ ������:',
 'digest_format' => '<b> ������ ������: </b> <br/> (HTML ������ �������������, ���� ���� �������� ��������� �� ����� ���������� HTML)',
 'digest_html' => 'HTML',
 'digest_text' => '�����',
 'digest_excerpt' => '<b> ������� ������� ���������: </b>',
 'digest_yes' => '��',
 'digest_no' => '���',
 'digest_l_show_my_messages' => '<b> ����� ��� ��������� � ������: </b>',
 'digest_l_show_new_only' => '<b> �������� ����� ��������� ������: </b> <br/> (��� ����������� ����� ����������, ���������� �� ���� � �������, �� ������������� ����������, ������� ��� �� ����� ������� � �����.)',
 'digest_send_if_no_msgs' => '<b> �������� �����, ����  ����� ���������� �� ���� ��������: </b>',
 'digest_hour_to_send' => '<b> ����� ���, ����� ������� �����: </b> <br/> (��� - �����, ���������� �� ������� �����, ������� �� �������������� � ����� ������������. ���� �� ��������� ���� ������� ���� ������������, � �� ������, ����� ������ ������� � �� �� ����� ����� ���, ����� �������� ��� �������� �����.)',
 'digest_hour_to_send_short' => '��������� ����� ������� (���������� �� ������� ����� � ����� ������������):',
 'digest_midnight' => '�������',
	'digest_1am' => '1 AM',
	'digest_2am' => '2 AM',
	'digest_3am' => '3 AM',
	'digest_4am' => '4 AM',
	'digest_5am' => '5 AM',
	'digest_6am' => '6 AM',
	'digest_7am' => '7 AM',
	'digest_8am' => '8 AM',
	'digest_9am' => '9 AM',
	'digest_10am' => '10 AM',
	'digest_11am' => '11 AM',
	'digest_12pm' => '12 PM',
	'digest_1pm' => '1 PM',
	'digest_2pm' => '2 PM',
	'digest_3pm' => '3 PM',
	'digest_4pm' => '4 PM',
	'digest_5pm' => '5 PM',
	'digest_6pm' => '6 PM',
	'digest_7pm' => '7 PM',
	'digest_8pm' => '8 PM',
	'digest_9pm' => '9 PM',
	'digest_10pm' => '10 PM',
	'digest_11pm' => '11 PM',
	'digest_click_return' => '������� %s�����%s, ����� ������������ � ���������� ��������� �������',// %s's here are for uris, do not remove!
 'digest_select_forums' => '<b> �������� ������ �� ����� ��������: </b>',
 'digest_create' => '���� ��������� ��������� ������ ���� ������� �������',
 'digest_modify' => '���� ��������� ��������� ������ ���� ������� ���������',
 'digest_unsubscribe' => '�� ���� ������������ �� �������� � ������ �� ������ �������� �����',
 'digest_no_forums_selected' => '�� �� ������� �������, ����� ������� �� ������ ������������ �� ��������',
 'digest_all_forums' => '��� ����������� ������',
 'digest_submit_text' => '���������� ��������� ������',
 'digest_reset_text' => '�����',
 'digest_size' => '<b> ������� Maximum, ����� ���������� ��� ���������� ���������: </b> <br/> (���������������: ��������� ����� ������� ������ ����� ������� ��� ����� ������� �������. ������ ���������� ��� ������� ���������, ������� �������� ��� ������ ������ �������������� ���������� ���������.)',
 'digest_size_50' => '50',
	'digest_size_100' => '100',
	'digest_size_150' => '150',
	'digest_size_300' => '300',
	'digest_size_600' => '600',
	'digest_size_max' => '�������� (32000)',
	'digest_version_text' => '������',
	)
);

?>