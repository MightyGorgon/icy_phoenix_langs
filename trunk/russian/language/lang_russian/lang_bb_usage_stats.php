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
* Chris Lennert - (calennert@users.sourceforge.net) - (http://lennertmods.sourceforge.net)
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
	'BBUS_Mod_Title' => '���������� ������������� ������',
 'BBUS_Misc' => '������',

	'BBUS_ColHeader_PostRate' => '��������� ������� ���������',
 'BBUS_ColHeader_PctUTP' => '%UTP',
 'BBUS_ColHeader_PctUTUP' => '%UTUP',
 'BBUS_ColHeader_NewTopics' => '����� ����',
 'BBUS_ColHeader_TopicRate' => '����� ����',
 'BBUS_ColHeader_Topics_Watched' => '����������',
 'BBUS_ColHeader_Header' => '���������',
 'BBUS_ColHeader_Description' => '��������',

	'BBUS_ColHeader_Posts_Explain' => '����� ���������� ���������.',
 'BBUS_ColHeader_PostRate_Explain' => '������� ���������� ��������� � ����.',
 'BBUS_ColHeader_PctUTP_Explain' => '������� �� ������������ \������ ���������.',
 'BBUS_ColHeader_PctUTUP_Explain' => '������� �� ������������ \����� ���������� ������������� ���������.',
 'BBUS_ColHeader_NewTopics_Explain' => '����� ���������� ����� ��� ��������������  �������������.',
 'BBUS_ColHeader_TopicRate_Explain' => '������� ���������� ����� ���.',
 'BBUS_ColHeader_Topics_Watched_Explain' => '����� ���������� ��� ��������.',

	'BBUS_Col_Descriptions_Caption' => '�������� �������',

 'BBUS_Msg_NoPosts' => '������������ �� ��������������� �� �� ����� ������.',
 'BBUS_Unpruned_Posts' => '������ ����������� �����',
 'BBUS_Scale_By' => '�������:',

// Admin Configuration page
	'BBUS_Settings_Caption' => '��������� ��������� ���������� ������������� ����������',
 'BBUS_Settings_Explain' => '��� ��������� ��������� ��������� ��� ���������������, ����� ��������� ������ ����� ����������� ���������� ������������� ���������� �� ������������ \�������� ������������ � ��������������� ��������� �����, ��������� � �������, ��������������� �� ��� ��������.',
	
	'BBUS_Setting_ViewLevel_Caption' => '������� �������',
 'BBUS_Setting_ViewLevel_Note' => '<i> ���������� </i>: ��������� ���� ������ ��� ������. <br/> ������������� �������������, ����� �������� ��� ��������.',
	
	'BBUS_Setting_ViewLevel_Explain1' => '��������� ������ ������������� �������� ��������� ������ ������ ��� ����� �������, ������� ��� ������ ����������, ����� �� ������ ������������ ������ ���������� ������������� ����� �� �������� ��������� ������������. <b> ������������� ������ ����, ����� ��������� ��� ��������� ������������ ������������� stats �������������� �������� �������������. </b> <br/> <br/> ������ ������� ������ ������������� ���������� ��������� �������: <br/>',

 'BBUS_Setting_ViewLevel_Explain2' => '<br/> ����� ����� ��������� ��� ������ ���� ����� 24 (16 + 8), ������� ��������� ��������������� � ����������� �������������� ���������� ������������� �����, � �� ����� ��� ���� ������ ������������� ������� ������ �������� �������� ��������� ������������. <br/> <br/> �������������, ����� �� ���������� ������������ ����������, �������� ��� ������� ����, ����� �������� ������� ���������� ������������������, ���������� ����������� stats, �������������� ��� ������ ������������� � �� �� ����� �����.',

 'BBUS_Setting_ViewOptions_Caption' => '������������� �����',
 'BBUS_Setting_ViewOptions_Note' => '<i> ���������� </i>: Textbox ������ ��� ������. <br/> ������������� �������������, ����� �������� ��� ��������.',
 'BBUS_Setting_ViewOptions_Explain1' => '��� ������� �������������, ��������� View Options - ����� �������, ������� ��������� � ��������� ��������� ����������� ���������� ������������� ������. <b> ������������� ������ ����, ����� ��������� ��� ��������� ��� �����������. </b> <br/> <br/> ������ ����� ������������� ���������� ��������� �������: <br/>',
 'BBUS_Setting_ViewOptions_Explain2' =>'',

	'BBUS_Settings_Default_Post_Rate_Scaling_Caption' => '�������� �� ��������� ����������� ��������� ��������������� �����',
 'BBUS_Settings_Default_Post_Rate_Scaling_Explain' => '������������� ����������� ��������������� �������� �� ���������, ��������� � ��������� � ����� ��������� stats �������.',

 'BBUS_Settings_Default_Topic_Rate_Scaling_Caption' => '�������� �� ��������� ����������� ��������������� ����� ����',
 'BBUS_Settings_Default_Topic_Rate_Scaling_Explain' => '������������� ����������� ��������������� �������� �� ���������, ��������� � ��������� � ����� ���� stats �������.',
	'BBUS_ViewLevel_Anonymous_Caption' => '���������',
 'BBUS_ViewLevel_Self_Caption' => '���',
 'BBUS_ViewLevel_Users_Caption' => '������������',
 'BBUS_ViewLevel_Moderators_Caption' => '����������',
 'BBUS_ViewLevel_Admins_Caption' => '�������������',
 'BBUS_ViewLevel_SpecialGrp_Caption' => '����������� ������',

	'BBUS_ViewLevel_Anonymous_Explain' => '��������� ��������� ������������� ������������� ����������.',
 'BBUS_ViewLevel_Self_Explain' => '��������� ������� ������������ ������������� ���/�� ����������� ����������.',
 'BBUS_ViewLevel_Users_Explain' => '��������� ����� ������������� ������������� ������ ������������� \' ����������. ',
 'BBUS_ViewLevel_Moderators_Explain' => '��������� ����������� ������������� ����������.',
 'BBUS_ViewLevel_Admins_Explain' => '��������� ��������������� ������������� ����������. (�������������)',
 'BBUS_ViewLevel_SpecialGrp_Explain' => '��������� ����������� ����������� ������ ������������� ������������� ����������.',

	'BBUS_ViewOption_Show_All_Forums_Caption' => '���������� ��� ������, ���������� �� ������������ \��������� ���������.',
 'BBUS_ViewOption_PCTUTUP_Column_Visible_Caption' => '���������� %UTUP ������� � ������� ����������',
 'BBUS_ViewOption_Misc_Section_Visible_Caption' => '���������� ������ ������ ����������',
 'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Caption' => '������� "������ ������������� �����" � ������� Misc',
 'BBUS_ViewOption_Viewer_Scalable_PR_Caption' => '�������� �������� �������� ���������',
 'BBUS_ViewOption_Viewer_Scalable_TR_Caption' => '�������� �������������� �������� ���',

	'BBUS_ViewOption_Show_All_Forums_Explain' => '',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_Section_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_PR_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_TR_Explain' => '',

	'BBUS_Setting_SpecialGrp_Caption' => '����������� ������ �������',
 'BBUS_Setting_SpecialGrp_Explain' => '��������� ����������� ������, ������� �������� ����������� ���������� ������������� �����. <i> ���������� </i>:��� ��������� ����� ������ ����� ������, ���� \'Special ������ \' ��������� ������ � ������ ������������� ����. ',
	)
);

?>