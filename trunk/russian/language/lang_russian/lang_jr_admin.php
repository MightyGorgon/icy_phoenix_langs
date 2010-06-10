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
	'None' => 'None',
	'Allow_Access' => '������ ������',

	'Jr_Admin' => '������� �����',
	'Options' => '�����',
	'Example' => '������',
	'Version' => '������',
	'Add_Arrow' => '�������� ->',
	'Super_Mod' => '��������������',
	'Update' => '��������',
	'Modules' => '������',
	'Module_Info' => '�������������� ������',
	'Module_Count' => '������� ������',
	'Modules_Owned' => '(%d �������)',
	'Updated_Permissions' => '�������� ����� ������� ������������ � �������<br>',
	'Color_Group' => '���� ������',
	'Users_with_Access' => '������������ � ��������',
	'Users_without_Access' => '������������ ��� �������',
	'Check_All' => '�������/�������� ����� ����',
	'Cat_Check_All' => '���������: �������, �������� ����� ����',
	'Edit_Permissions' => '������������� ����� ������� ������������',
	'View_Profile' => '����������� ������� ������������',
	'Edit_User_Details' => '������������� ������ ������������',
	'Notes' => '�������',
	'Allow_View' => '��������� ������������ ��������',
	'Start_Date' => '�������� ���������� ��������������� �����',
	'Update_Date' => '�������� ��������� ��������������� �����',
	'Edit_Modules' => '������������� ������',
	'Rank' => '����',
	'Allow_PM' => '��������� ��',
	'Allow_Avatar' => '��������� �������',
	'User_Active' => '������������ �����������',
	'User_Info' => '���������� � ������������',
	'User_Stats' => '������ ������������',
	'Junior_Admin_Info' => '���������������� ����������',
	'Admin_Notes' => '������� ������',

//Descriptions
	'Levels_Page_Desc' => '��� �������� ��������� ��� ���������� ���������������� ������. �������� ��� ������������ � ������ ��� ������� �������. ����� ������������� ������ ���� ����������� ����� , (�������) � ������ ������!',
    'Permissions_Page_Desc' => '��� �������� ��������� ��� ��������  ��������� ����� �������������, � ����� ������������� �� ������ �������.<br>�� ����� ������ �� ��������� �������, ����� ������������ ���������� ��� �� ����������.',

//Errors
	'Error_Users_Table' => '������ ������� ������� �������������.',
'Error_Module_Table' => '������ ������� ������� ���������� ������� ������.',
'Error_Module_ID' => '��������� ������ �� ����������, ��� �� - �������������������� ������������.',
'Disabled_Color_Groups' => ' ��� ������ ����� �� ������. ��� ����������� ��������� ���� ������.',
'Admin_Note' => '��������: ���� ������������ - �������������. ����� �����������, ��������������� ����� ��������, ���� �� �� �������� ��� ����� ������� �� ������������ ������ ��������������.',
'No_Special_Ranks' => '������������ ����������� �����.',

//This is the bookmark ASCII search list!  If you have odd usernames, you should add your own ASCII search numbers.
//It uses a special format.
// Smaller-case letters are ignored also.  Don't bother listing them as everything is converted to upper case for eval.
// It searches and prepares the bookmark heading IN THE ORDER you have it below.  It will not sort lowest to highest.
//
// Item-Item2 will search the code from item to item2 AND give each their own bookmark heading (ex. A-Z)
// Item&Item2 will search the code from item to item2 BUT NOT give each their own heading, they will appear like 1-9
// You can add single entries, ie 67
// Separate entry areas by a ,
//
	'ASCII_Search_Codes' => '48&57, 65-90',

//Images
// Don't change these unless you need to
	'ASC_Image' => 'images/sort_asc.png',
	'DESC_Image' => 'images/sort_desc.png',
	)
);

?>