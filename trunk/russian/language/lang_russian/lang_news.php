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
// Main Stuff.
	'Regular_Post' => '��������� ���������(�� ���������� ��� �������)',
 'Current_Selection' => '������� �����',
 'Select_News_Category' => '��������� ��������� ��������',
 'News' => '�������',
 'News_Cmx' => '<b> �������: </b> &nbsp;',
 'Auth_News' => '�������',
 'View_Comments' => '�������� �����������',
 'Read_More' => '����������� ������',
 'News_Categories' => '��������� ��������',

// Admin Stuff

// News Config
 'Add_news_categories' => '�������� ��������� ��������',
 'News_Configuration' => '������������ ��������',
 'News_Add_Description' => '�������� ����� ��������� ��������',
 'image' => '����������� ��� ��������',
 'Add_new_category' => '�������� ����� ��������� ��������',

 'Click_return_newsadmin' => '�������  %s�����%s, ����� ������������ � ����������������� ��������',
 'Category_Deleted' => '��������� ��������, ������� ��������',
 'Category_Updated' => '��������� ��������, ������� ����������',
 'Category_Added' => '��������� �������� ������� ���������',

 'News_Editing_Utility' => '�������������� ��������� ��������',
 'News_Config' => '������������ ��������� ��������',
 'News_Explain' => '�������, ������� � �������������� ��������� ��������.',

 'Enable_News' => '<strong> ��������� ����������� �������� </strong>',
 'News_Path' => '<strong> ���� ����������� ��� �������� </strong>',
 'News_Path_Explain' => '���� ��� ����� icyphoenix �������� ���������, ��������, �����������/�������',

 'News_explain' => '��������� ��� �������� Slashdot CMX.',
 'News_settings' => '��������� ��������� ��������',

 'News_trim' => '<strong> ������������ ���������� �������� </strong>',
 'News_trim_explain' => '������������ ���������� �������� � ������������� ������� (0 = �� �������).',

 'News_topic_trim' => '<strong> ������������ ���������� �������� � �������� ���� </strong>',
 'News_topic_trim_explain' => '������������ ���������� �������� � �������� �������. (0 = �� �������).',

 'News_item_num' => '<strong> ���������� ��������, ������������ � ����� �������� (�� ������� ��������) </strong>',
 'News_item_num_explain' => '���������� �������� ������� ����� �������� � news_viewnews.php.',

 'RSS_Configuration' => '��������� �������� RSS',
 'Enable_RSS' => '<strong> ��������� ����������� � ��������� RSS </strong>',
 'Enable_RSS_explain' => 'RSS ��������� ������ ��������� �������� ������ � ����� �������� � ���������� �� �� ������',

 'Feed_Description' => '<strong> �������� ������ </strong>',
 'Feed_Description_Explain' => '����� ��� �����������, ����������� ������.',

 'Feed_Language' => '<strong> ���� ������ </strong>',
 'Feed_Language_Explain' => '�� ������ ������������ ���������, ������������ W3C.',

 'Feed_TTL' => '<strong> ������ TTL </strong>',
 'Feed_TTL_Explain' => 'TTL �������� ������ � �������, ��������, ��� ����� ����� ����� ������������ ��� ����� ������, ��� �������� �� ���������.',

 'Feed_Category' => '<strong> ��������� ������ </strong>',

 'Feed_Image' => '<strong> ����������� ������ </strong>',
 'Feed_Image_Explain' => '�����������, ������� ����� ������� � ����� ������� ��������. (����� ������ ���� ��������� ����������� ������� ������)',

 'Feed_Image_Desc' => '<strong> �������� ����������� ������ </strong>',

// New
 'Articles' => '������',
 'Archives' => '�����',
 'Categories' => '���������',

 'News_base_url' => '<strong> ������� ��������������� ��������� ��������������� �������  �������� </strong>',
 'News_base_url_explain' => '�������������� ������ ����� ������� ��������. <br/> �� ����. http://mydomain.com/, ��� ���� ������� �������� ���������� �����.',
 'Show_RSS_abstract' => '<strong> ������ ������ � ����� RSS. </strong>',

 'News_index_file' => '<strong> ���� ������� �������� </strong>',
 'News_index_file_explain' => '�������� ����� ������� ��������. �� ���� news_index.php.',

	)
);

?>