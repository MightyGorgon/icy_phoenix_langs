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
* OOHOO < webdev@phpbb-tw.net >
* Stefan2k1 and ddonker from www.portedmods.com
* CRLin from http://mail.dhjh.tcc.edu.tw/~gzqbyr/
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
	'Site_links' => '���������',
'Link_lock_submit_site' => '�������������, ��� ���� ����������',
'Link_title' => '������������ �����',
'Link_desc' => '��������',
'Link_url' => 'URL �����',
'Link_logo_src' => '������� ����� (88x31 ��������, �� ����� 10K), ��� �������� ������:',
'Link_logo_src1' => '������� ����� (88x31 ��������, �� ����� 10K):',
'Links_Preview' => '���������� ��������',
'Link_category' => '��������� �����',
'link_hits' => '������',
'link_submiter' => '���������',
'Link_us' => '������ �� ���� ',
'Link_us_explain' => '�� ������ ���������� � ���� ������ �� ������� �� ��� ���� <b>%s</b>.<br>����������� ��������� HTML ���:',
'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" border="0" alt="%s" /></a>',
'Link_register' => '�������� ��� ����',
'Link_register_guest_rule' => '������������ ������������������� ������������, ��� ������������� ������ �����.',
'Link_register_rule' => '���������� ��������� ����� ���� � ��� ���� ����� ������� ����� �������� � ���� ���� ������.',
'Link_pm_notify_subject' => '������ ���������',
'Link_pm_notify_message' => '\n ������� %s ������,\'n ������ ����� � ���������� �������� � ��� �����������.',
'Link_update_success' => '���� ���������� ��������',
'Link_update_fail' => '��������, ���� ���������� �� ���� ��������, ���������� �����',
'Link_incomplete' => '��������, ����� �� ��������� ���������, ���������� �����',
'Link_intval_warning' => '��������!! �� �� ������ ���������� ��������� ������ ����� ������, ���������� �������� ����� �����',
'Click_return_links' => '������ %s�����%s ����� �������� � ������� ������',
'Please_enter_your' => '����������, ������� ��� ',
'No_Logo_img' => '<font color=blue>&#8226;</font>', // �� ������ �������� ����
'No_Display_Links_Logo' => '<font color=brown>&#8226;</font>', // �� ���������� �������.
'Links_home' => '���������',
'Search_site' => '�����',
'Search_site_title' => '��������/�������� ��������� ������:',
'Descend_by_hits' => '�� �������� �������',
'Descend_by_joindate' => '�� �������� ����',
	'Logo' => '����',
	'Site' => '����',
	'Link_ME' => '��������� � ������������� ',
	'Remember_Me' => '�������������� ���� � �������',
	)
);

?>