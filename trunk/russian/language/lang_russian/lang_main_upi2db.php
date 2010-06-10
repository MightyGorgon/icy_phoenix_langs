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
* @Extra credits for this file
* BigRib (bigrib@gmx.de)
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
	'Search_no_new' => '��� ����� ��� ����������������� ��������� � ���������� ���������',
 'Neue_Beitraege' => '������������� ���������',
 'Editierte_Beitraege' => '����������������� ���������',
 'Ungelesen_Markiert' => '���������� ��� �������������',
 'Permanent_Gelesen' => '������ ������',
 'Posts' => '�����',
 'Unreaded_post' => '������������� ���������',
 'New_edited_post' => '����������������� ���������',
 'New_edited_posts' => '����������������� ���������',
 'Unreaded_posts' => '������������� ���������',
 'upi2db_post_edit' => '�����������������',
 'upi2db_post_new' => '�����',
 'upi2db_post_and' => '&amp;',
 'upi2db_always_read' => '���� ����� ��� ���������� ������',
 'upi2db_always_read_unset' => '������� ��������� ���� ��� ����������� ������',
 'upi2db_always_read_cant_set' => '���� ����� \'t ���� ���������� ��� ���������� ������',
 'upi2db_always_read_no_more' => '��� �� ��������� �������� �������������� ���� ��� ������� ����������.',
 'upi2db_always_read_is_set' => '���� ������� ��� ���������� ������',
 'upi2db_always_read_is_unset' => '���� ������ �� ������� ��� ���������� ������',
 'no_always_read' => '������� ����, ���������� ��� ���������� ������',
 'x_always_read' => '������������� ��� ���������� ������ ������� ����',
 'upi2db_which_system' => '����� ������� �� ������ ������������, ����� ���������� ����� �����?',
 'upi2db_which_system_explain' => '��������� ���������� � ��������� �������� ����� ���� ������ � <a href="faq.' . PHP_EXT . '">FAQ\'s</a>.',
 'cookie_system' => '������� ����-�����',
 'upi2db_system' => '������� UPI2DB',
 'upi2db_mark_post' => '�������� ��� ���������',
 'upi2db_unmark_post' => '����� ��������� � ����� ���������',
 'upi2db_post_cant_mark' => '��� ��������� �� ����� ���� ��������.',
 'upi2db_post_marked' => '��������� ��������.',
 'upi2db_post_unmarked' => '��������� ������ �� ��������.',
 'upi2db_post_cant_mark' => '��� �� ��������� �������� �������������� �����.',
 'always_read_icon' => '������� ������',
 'upi2db_always_read_forum_short' => '����� ��� ���������� ������',
 'upi2db_always_read_forum' => '�������� ���� ����� ��� ���������� ������',
 'upi2db_always_read_forum_unset_short' => '������� ��������� ��� ���������� ������',
 'upi2db_always_read_forum_unset' => '������� ��������� ����� ������ ��� ����������� ������',
 'upi2db_forum_is_always_read' => '���� ����� ������� ��� ���������� ������',
 'upi2db_forum_isnt_always_read' => '���� ����� ������ �� ������� ��� ���������� ������',
 'upi2db_cat_cant_mark_always_read' => '��������� ����� \'t ���������� ������� ������',
 'upi2db_new_word' => '�������������� ���������� ��� ����� ������?',
 'upi2db_new_word_explain' => '������ ���� � ������ ������� ���� ���������� � "�����:"?',
 'upi2db_edit_word' => '�������������� ���������� ��� ����������������� ������?',
 'upi2db_edit_word_explain' => '������ ���� � ������������������ ������� ���� ���������� � "�����������������:"',
 'upi2db_unread_color' => '������� ��������� ����, ���� ���� ����� ���������',
 'upi2db_unread_disp_posts' => '���������� ����� �/��� ����������������� ������',
 'Click_return_search' => '%s������� �����%s, ����� ������������ � ��������� ��������',
 'Click_return_portal' => '%s������� �����%s, ����� ������������ � �������',
 'mark_edit' => '���� ����� ��� ��������������� (����� ��������� ��� ������������� ������ �������������)',
 'upi2db_news_is_mark_unread' => '�������, ���������� ��� �������������',
 'upi2db_news_is_mark_read' => '�������, ���������� ��� ����������',
 'upi2db_mark_news_read' => '������� ����� ��� ����������',
 'upi2db_mark_news_unread' => '������� ����� ��� �������������',
 'upi2db_search_mark_read' => '�����',
 'upi2db_submit_mark_read' => '����� ��� ������',
 'upi2db_submit_topic_mark_read' => '��������� ���� ���� �������� ��� ����������',

 'upi2db_mark_post_unread' => '��������, ��� ��������� ��� �������������',
 'upi2db_mark_post_unread_cant' => '���� ���� �� ����� ���� ������� ��� �������������.',
 'upi2db_mark_post_is_unread' => '���� ��� ������� ��� �������������.',

 'upi2db_first_use_txt' => '�� ������ � ��������� ������������ ������� UPI2DB � ��� �� �������. �� ������ ����� ������ ������������ � �������� ����� ���������� ��������.',

 'upi2db_u' => 'U',
 'upi2db_m' => '�.',
 'upi2db_p' => 'P',
 'upi2db_unread' => '������������� ���������',
 'upi2db_marked' => '���������� ���������',
 'upi2db_perm_read' => '���������� ������',
	)
);

?>