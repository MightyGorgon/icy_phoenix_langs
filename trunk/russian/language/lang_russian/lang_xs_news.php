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
* UseLess
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
'n_title' => 'XS-News ����������',

'n_main_title' => 'XS-News �������.',
'n_main_title_explain' => '����� �� ������ ������������� �������.<br /><br />���� �� ������ ��������� ��������� ����������� �������, �� ��� ���������� ��������������� ��.',

// Config
'n_config_title' => 'XS-News ������������',
'n_config_title_explain' => '����� �� ������ ��������� XS-News.',
'n_config_updated' => 'XS-News ������������ ���������.',

// Add menu item
	'n_add_page_title' => '�������� �������',
'n_add_page_title_explain' => '����������� ��� ����� ��� �������� ����� �������.',
'n_add_header' => '�������� ����� �������.',
'n_news_item_added' => '������� ���������.',

// edit menu item
'n_edit_page_title' => '������������� �������',
'n_edit_page_title_explain' => '����������� ��� ����� ��� �������������� �������.',
'n_edit_header' => '������������� ��� �������',

// Delete
'n_news_delete' => '������� �������.',
'n_news_delete_explain' => '����������� ��� ����� ��� �������� �������.',
'n_confirm_delete_news' => '�� �������, ��� ������ ������� ��� �������?',

// General Settings used by Add/Edit Menu item
	'n_news_item' => '�������',
'n_news_item_display' => '����������?',

'n_news_date' => '���� �������',

'n_create_item' => '������� ����� ���������',
'n_create_item_null' => '������ ������� �������, �� ������ �� �����.',

'n_news_smilies' => '�������� ������ � ������?',
'n_smilies_button' => '������',

'xs_no_news' => '��� ��������.',
'xs_news_invalid_date' => '������ � ����, ������ �����: ��/��/����',
'n_news_updated' => '������� ������� ���������',
'n_click_return_newslist' => '������� %s�����%s ��� �������� � ������ ��������',

// News XML Settings
	'n_xml_title' => '���������� XS-News �������',
'n_xml_title_explain' => '����� �� ������ ��������� ���������� �������.',
'n_xml_title_explain_0' => '���� ������ ����� �������� (���������� ����) ���������� � \'Off\', �� ��������� ������� ������ ����� ����� ������������, ��������� ����������� �� ���������� �� ��� ������ �������, ����������� ����.<br /><br />��, ���� ���� ������ � ��������� � \'On\' � �� ������ �������� ������ ������ ����� �����, �� ��� ���������� ��������������� ��.',
'n_xml_sub_title' => 'XS-News �����.',
'n_xml_master_switch' => '������ ����� ��������: <b>%s</b> � ������, ��� ����� �������� <b>%s</b> ������������.',
'n_xml_ms_will' => '�����',
'n_xml_ms_not' => '�� �����',

'xs_news_ticker_settings' => '��������� ����� ��������',
'xs_news_ticker_title' => '�������� ����� ��������:',
'xs_news_ticker_title_explain' => '������������ � XML News Feed ������, ��� ������������� ������ �������.',
'xs_news_ticker_show' => '���������� ��� ����� ��������?',
'xs_news_ticker_feed' => 'XML News Feed',
'xs_news_ticker_feed_explain' => '������ URL ��� �������� ����� �������� ��� �������� ������ ��������',
'xs_news_ticker_is_feed' => '��� - XML News Feed?',
'xs_news_ticker_is_feed_explain' => '���� ���������� \'��\', �� �� URL ����� ������������� ������� ������� ������ ��������, ���� ���������� \'No\', �� ����� �������������� ����� �����, ������������ �� ���������� URL.',
'xs_news_ticker_wh' => '������ x ������ ����� ��������.',
'xs_news_ticker_wh_explain' =>'�� ������ ���������� ������ � ������ ����� ��������, �� ��������� - 98 % x 20, ������ ���������� �� �������� �� ������ �������, � �� ����� ��� ������ ����������� � ��������.',
'xs_news_ticker_fontsize' => '������ ������, ������������ � ����� ��������',
'xs_news_ticker_fontsize_explain' => '�� ������ ���� ������� ������ ������ ��� ����������� ��������. �������� 0 ��������� ��� �������.',
'xs_news_ticker_ss' => '�������� ���������',
'xs_news_ticker_ss_explain' => '��� ������ ��������, ��� ������ ��������',
'xs_news_ticker_sd' => '����������� ���������',
'xs_news_left' => '�����',
'xs_news_right' =>'������',

// Add menu item
'n_xml_add_page_title' => '���������� XML News Feed',
'n_xml_add_page_title_explain' => '����������� ��� ����� ��� ���������� XML News Feed.',
'n_xml_add_header' => '�������� ����� XML News Feed',
'n_xml_news_item_added' => 'XML News Feed ���������.',

// edit menu item
'n_xml_edit_page_title' => '�������������� XML News Feed',
'n_xml_edit_page_title_explain' => '����������� ��� ����� ��� �������������� XML News Feed.',
'n_xml_edit_header' => '������������� XML News Feed',

// Delete
	'n_xml_news_delete' => '�������� XML News Feed.',
'n_xml_news_delete_explain' => '����������� ��� ����� ��� �������� XML News Feed.',
'n_xml_confirm_delete_news' => '�� �������, ��� ������ ������� ��������� XML News Feed?',

// General Settings used by Add/Edit Menu item
	'n_xml_news_item' => '�������',
'n_xml_news_item_display' => '����������?',

'n_xml_create_item' => '������� ����� �����',
'n_xml_create_item_null' => '�� �������� ������� ����� �������� ��� �������� XML Feed URL ��� ������ ��� ���������.',

'n_xml_no_feeds' => '��� XML News Feeds.',
'n_xml_news_updated' => '����� ���� ���������',
'n_xml_click_return_newslist' => '������� %s�����%s ��� �������� � ������ ��������� ����',

'n_xml_show' =>'��������',
'n_xml_title' => '�������� �����',

	)
);

?>