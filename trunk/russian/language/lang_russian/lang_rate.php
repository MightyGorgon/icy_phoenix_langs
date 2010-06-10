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
* Nivisec.com (support@nivisec.com)
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
	'Already_Rated' => '��� �������: <b>%d</b>', //%d = their rate
	'Rate_Stats' => '<b>%.2f</b>', //%.2f = average, %d = min, %d = max, %d # of ratings
	'Rate' => '�������',
	'Choose_Rating' => '�������� ������� ',
	'Topic_Rated' => '���� ���� �������. ',
	'Anon_Rate_Disabled' => '��������� ������������ �� ����� ������� ',
	'Not_Authorized_To_Rate' => '�� �� ������������, ����� ������� ��� ���� ',
	'Change_Rating' => '��������� ������� ',
	'View_Details' => '<a href="%s" title="View Details">View detailed info</a>', //%s = detailed URL
	'View_Details_2' => '<a href="%s" title="View Details">View detailed info</a>', //%s = detailed URL
	'Username_Gave_Rate_of_Max' => '<b>%s</b> ������� ���� ���� <b>%d</b> of a possible <b>%d</b> on %s.', //%s = username, %d = user rate, %d = max rate, %s = date with create_date()
	'Detailed_Rating' => '��������� ������� ',
	'Details_For_Topic' => '������� ������ &nbsp;&raquo;&nbsp;<b>%s</b>', //%s = topic title
	'Or_Someone_From_IP' => '(ip logged)', // makes it smaller for smaller res screens
	'Disable_Rating_ON' => ' ��������� ������� � ���� ��������� ',
	'Summary' => '������ ������� ',
	'Topic_Rating_Details' => '��������� ���������� ������� ������� ',

	'Anonymous' => '��������� ',
	'All_Forums' => '��� ������ ',

	'Max_Rate' => '���� ������� ',
	'User_Rate' => '������� �������������',
	'Rate_Date' => '���� ������',
	'Rate_Time' => '����� ������',
	'Rate_Order' => '���������� ������',

	'No_Topics_Rated' => '��� ��� ������� ���� ������� ',
	'Top_Topics' => '���  %d ������ ���� ', //%d = number of topics
	'Top_Topics_For_Forum' => '���  %d ������ ���� ��� %s', //%d = number of topics, %s is forum name
	'For_Forum' => '%s ������ ', //%s = forum name
	'Last_Rated' => '��������� ������ ',
	'Number_of_Rates' => '# ��������� ',
	'Rating' => '������� ',
	'Min' => 'Min',
	'Max' => 'Max',
	'Min_Rating' => '��� ������� ',
	'By_Forum' => '������ �� ������ ',
	'Details_For_Topic' => '<b>%s</b>', //%s = topic title

//admin
	'Status' => '������ ',
	'Auth_Description' => '�������� ',
	'NONE' => '������� �������� ��������� ���������������� � �� ������� ��� ����� ������������ ��� ��� ',
	'ALL' => '��� ������������ ����� ��������� � � ������, ������� �������� � ���� ���������� � ������������������� ',
	'REG' => '������ ������������������ ������������ ����� ���������, �� ������ ����� ������������� ��� ',
	'PRIVATE' => '������ ������������������ ������������ ����� ��������� � ������������� ��� ',
	'MOD' => '������ ���������� ������ � �������������� ����� ��������� � ������ ����� ����������� ��� ',
	'ADMIN' => '������ �������������� ����� ��������� � ������ ����� ����������� ��� ',
	'Allow_Poster_To_Disable_Rating' => '��������� ���������� ��������� ����������� ������� ',
	'Allow_Detailed_Ratings_Page' => '��������� ������������� ������������� ��������� ������ Page ',
	'Max_Rating' => '���� ������� (1 to MAX)',
	'Allow_Users_To_ReRate' => '��������� ������������� ������ ���� ������� ',
	'Check_Anon_IP' => '��������� ��������� ������������ IP ��� �����������, ����� �������, ���� ��� �� ��� ������� ',
	'Anon_Rate_ID' => '��������� ��������� ������������ �������  IP.<br />�������� ���, ���� �� ������, ��� �������, � ������������� ����� .<br />��������� ��� �� ������� ��������, ��� ��, ��� ������������� ��� ����� ������ ���� ',
	'Big_Page_Number' => '���������� ���, ������� ������������ �� ��������� �������� ������ (if you choose to use it)',
	'Main_Page_Number' => '���������� ��� ��� ����������� �� �������� ������� ��������  (if you choose to use it)',
	'Header_Page_Number' => '���������� ��� ��� ����������� �� ������� ��������� �������� (if you choose to use it)',
	'Mass_Update' => '�������� ����������',
	'Purge_Old_Ratings' => '������ ������ ������ ',
	'Min_Rates' => '����������� ���������� �������� ������� ����� �� ������ �� ������ ������ ',
	'Purge' => '������ ',
	'Purged' => '��������� ',
	'Purge_Desc' => '������ �������� ������� ����, ������� ����� �� �����-�� ������� �� ���� ������������� ������� � ���� �����. ',
	'Clear' => '���� ',
	'Clear_Desc' => '����  <b>ALL</b> ���� ������ ������� . ������ ������ ���, ���� � ��� �������� �������� ��� ��������� ������  <b>������� ��� </b> ������ ����������� . �������� �� ����, � ����� ���� "��" � ���� ����� � ��� .',
	'Complete' => '������ ',
	'Authorization' => '���������� ',
	'rate_average' => '������� ������ ',
	'rate_minimum' => '����������� ������ ',
	'rate_maximum' => '������������ ������ ',
	'Number_of_Rates' => '���������� ������ ',
	'Rank2' => '#',
	'Rating' => '������� ',

//Error Messages
	'Database_Error' => '������ ���� ������ ',
	'Error_Dbase_Config' => '������ ��� ��������� ��� ���������� ������������ ������ .',
	'Error_Dbase_Ratings' => '������ ��� ��������� ��� ���������� ������ ������ .',
	'Error_Dbase_Auth' => '������ ��� ��������� ��� ���������� ������ ������ ����������� .',
	'No_Topic_ID' => '��� ���� ���� �������, ����� �������� ������ .',
	)
);

?>