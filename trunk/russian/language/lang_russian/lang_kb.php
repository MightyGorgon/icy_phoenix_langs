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
* MX-System - (jonohlsson@hotmail.com) - (www.mx-system.com)
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
	'KB_title' => '������',
'Article' => '������',
'Category' => '���������',
'Article_description' => '��������',
'Article_type' => '���',
'Article_keywords' => '�������� �����',
'Articles' => '������',
'Add_article' => '�������� ������',
'Click_cat_to_add' => '������� �� ��������� ��� ���������� ������',
'KB_Home' => '�������� ��',
'No_articles' => '��� ������',
'Article_title' => '��� ������',
'Article_text' => '����� ������',
'Add_article' => '������������ ������',
'Read_article' => '��������� ������',
'Article_not_exsist' => '������ �� ����������',
'Category_not_exsist' => '��������� �� ����������',

	'Edit' => '�������������',

'Article_submitted_Approve' => '������ ������� ���������.<br />�������� ������������� ����� ������ ���������������.',
'Article_submitted' => '������ ������� ���������.',
'Click_return_kb' => '������� %s�����%s ��� �������� � ���� ������',
	'Click_return_article' => '�������%s�����%s, ����� ��������� � ������',

	'Article_Edited_Approve' => '������ ������� ���������������.<br />�������� ������������� ����� ��������� ���������������.',
'Article_Edited' => '������ ������� ���������������.',
'Edit_article' => '������������� ������',

	'KB_title' => '������',
'KB_art_description' => '����� �� ������ �������� ��� ������� ������.',
'Art_man' => '������������� ������',
'Cat_man' => '������������� ���������',
'KB_cat_description' => '����� �� ������ ���������, ������������� � ������� ��������� � ���� ������',
'Art_action' => '��������',

//approve
	'Art_edit' => '������������� ������',
'Art_not_approved' => '�� ��������',
'Art_approved' => '��������',
'Approve' => '��������',
'Un_approve' => '��������',
'Article_approved' => '������ ��������.',
'Article_unapproved' => '������ �� ��������.',

//delete
	'Delete' => '�������',
'Confirm_art_delete' => '�� �������, ��� ������ ������� ��� ������?',
'Confirm_art_delete_yes' => '%s��, � ���� ������� ��� ������%s',
'Confirm_art_delete_no' => '%s���, � �� ���� ������� ��� ������%s',
'Article_deleted' => '������ ������� �������.',

	'Click_return_article_manager' => '������� %s�����%s t��� �������� � ������������� ������',

//cat manager
	'Create_cat' => '������� ����� ���������:',
'Create' => '�������',
'Cat_settings' => '��������� ���������',
'Create_description' => '����� �� ������ ������ ��� ����� ��������� � �������� �������� � ���.',
'Cat_created' =>'��������� ������� �������.',
'Click_return_cat_manager' => '������� %s�����%s ��� �������� � ������������� ���������',
'Edit_description' => '����� �� ������ �������� ��������� ���������',
'Edit_cat' => '������������� ���������',
'Cat_edited' => '��������� ������� ���������������.',
'Parent' => '������������',

	'Cat_delete_title' => '������� ���������',
'Cat_delete_desc' => '����� �� ������ ������� ��������� � ����������� ��� ������ � ������ ���������',
'Cat_deleted' => '��������� ������� �������.',
'Delete_all_articles' => '������� ������',

//configuration
	'KB_config' => '��������� ��',
'Art_types' => '���� ������',
'KB_config_title' => '��������� ���� ������',
'KB_config_explain' => '��������� �������� ���� ������',
'New_title' => '��������� ����� ������',
'New_explain' => '��������� ������������� ��������� ����� ������ � ���� ������',
'Edit_name' => '��������� ��������������',
'Edit_explain' => '��������� ������������� ������������� ������ ����� ���������� �� � ���� ������',
'Notify_name' => '��������� ��',
'Notify_explain' => '��������, ��� �� �� ������ �������� ����������� � ���������� ����� ������ � ���� ������',
'PM' =>'��',
'Click_return_kb_config' => '������� %s�����%s ��� �������� � ��������� ���� ������',
'Admin_id_name' => 'ID ������',
'Admin_id_explain' => '��� ID ������������, �������� ����� ���������� ����������� �� ��.',
'Approve_new_name' => '������������ ����� ������',
'Approve_new_explain' => '�������, ���������� �� ������������ <b>�����</b> ������ ��� ���',
'Approve_edit_name' => '������������ �������������� ������',
'Approve_edit_explain' => '�������, ���������� �� ������������ <b>�����������������</b> ������ ��� ���',
'Allow_anon_name' => '��������� ������ ����������� ������',
'Allow_anon_explain' => '��������, ����� �� ����� ��������� <b>�����</b> ������',
'Del_topic' => '������� ���������',
'Del_topic_explain' => '����� �� �������� ���������, ������ �� �� �������� �� ���� � ������?',
'Allow_comments' => '��������� �����������',
'Allow_comments_explain' => '��������� ������������� ��������� ����������� � ������',
	'Del_topic' => '������� ����',
	'Del_topic_explain' => '�������� ������, �� ������ ����� ��� ����������� ���� ���� ���� �������?',

	'Use_comments' => '�����������',
	'Use_comments_explain' => '�������� ����������� ��� ������, ������� ����� �������� � icyphoenix �����',
	'Use_ratings' => '�������',
	'Use_ratings_explain' => '�������� ������� ��� ������',

	'Forum_id' => 'ID ������',
	'Forum_id_explain' => '��� ���� ������ ����� ������������� ����������� � �������',


// Permissions
	'KB_Auth_Title' => '���������� ��',
 'KB_Auth_Explain' => '��������, ����� ������ ������������� ����� ���� ����������� ��� ������ ��������� �� ��� ��������� ������ ������ ������ ������',
 'Select_a_Category' => '�������� ���������',
 'Look_up_Category' => '��������� ���������',
 'KB_Auth_successfully' => '����� ���  ������� ��������',
 'Click_return_KB_auth' => '������� %s�����%s, ����� ������������ � ����������� ��',

	'Upload' => '��������',
	'Rate' => '�������',
	'Comment' => '�����������',
	'Approval' => '��������',
	'Approval_edit' => '������������� ���������',

	'Allow_rating' => '��������� ������',
 'Allow_rating_explain' => '��������� ������������� ��������� ������.',

	'Allow_anonymos_rating' => '��������� ��������� ������',
'Allow_anonymos_rating_explain' => '���� ������ ����� ������������, ��������� ��������� ������������� ��������� �������� �� ���� ������',

'KB_config_updated'  => '�� ������������ ������� ���������.',
	
	'KB_notify_subject_new' => '����� ������!',
 'KB_notify_subject_edited' => '����������������� ������!',
 'KB_notify_subject_approved' => '���������� ������!',
 'KB_notify_subject_unapproved' => '�������������� ������!',
 'KB_notify_body' => '������ �������� ��� ��������:',

	'Category_Permissions' => '���������� ���������',
 'Category_Title' => '��������� ���������',
 'Category_Desc' => '�������� ���������',
 'View_level' => '������� �������������',
 'Upload_level' => '������� ��������',
 'Rate_level' => '������� �����',
 'Comment_level' => '������� �����������',
 'Edit_level' => '������� ��������������',
 'Delete_level' => '������� �������',
 'Approval_level' => '������� ���������',
 'Approval_edit_level' => '������� �������������� ���������',

/*
	'KB_Rules_post_can' => 'You <b>can</b> post new articles in this category',
	'KB_Rules_post_cannot' => 'You <b>cannot</b> post new articles in this category',
	'KB_Rules_comment_can' => 'You <b>can</b> comment articles in this category',
	'KB_Rules_comment_cannot' => 'You <b>cannot</b> comment articles in this category',
	'KB_Rules_edit_can' => 'You <b>can</b> edit your articles in this category',
	'KB_Rules_edit_cannot' => 'You <b>cannot</b> edit your articles in this category',
	'KB_Rules_delete_can' => 'You <b>can</b> delete your articles in this category',
	'KB_Rules_delete_cannot' => 'You <b>cannot</b> delete your articles in this category',
	'KB_Rules_rate_can' => 'You <b>can</b> rate articles in this category',
	'KB_Rules_rate_cannot' => 'You <b>cannot</b> rate articles in this category',
	'KB_Rules_approval_can' => 'Articles <b>need no</b> approval in this category',
	'KB_Rules_approval_cannot' => 'Articles <b>need</b> approval in this category',
	'KB_Rules_approval_edit_can' => 'Article edits <b>need no</b> approval in this category',
	'KB_Rules_approval_edit_cannot' => 'Article edits <b>need</b> approval in this category',
*/
	'KB_Rules_post_can' => '�� <b> ������ </b>, ���������� ����� ������',
 'KB_Rules_post_cannot' => '�� <b> �� ������ </b>, ���������� ����� ������',
 'KB_Rules_comment_can' => '�� <b> ������ </b> �������� �����������',
 'KB_Rules_comment_cannot' => '�� <b> �� ������ </b> ��������� �����������',
 'KB_Rules_edit_can' => '�� <b> ������ </b>, ������������� ���� ������',
 'KB_Rules_edit_cannot' => '�� <b> �� ������ </b>, ������������� ���� ������',
 'KB_Rules_delete_can' => '�� <b> ������ </b>, ������� ���� ������',
 'KB_Rules_delete_cannot' => '�� <b> �� ������ </b>, ������� ���� ������',
 'KB_Rules_rate_can' => '�� <b> ������ </b>, ��������� ������',
 'KB_Rules_rate_cannot' => '�� <b> �� ������ </b>, ��������� ������',
 'KB_Rules_approval_can' => '������ <b> �� ��������� </b> � �������������',
 'KB_Rules_approval_cannot' => '������ <b> ��������� </b> � �������������',
 'KB_Rules_approval_edit_can' => '������ <b>�� ���������  </b> � �������������',
 'KB_Rules_approval_edit_cannot' => '������ <b> ����������� </b> � �������������',
 'KB_Rules_moderate' => '�� <b> ������ </b> %������������ ��� ���������%s',// %s replaced by a href links, do not remove!
 'KB_Rules_moderate_can' => '�� <b> ������ </b>, ������������ ��� ���������',// %s replaced by a href links, do not remove!
	'Comments_show' => '�������� ����������� ������.',
'Comments_show_explain' => '���������� ����������� �� ��������',
'Comments_show_title' => '����������� �������������',

	'Mod_group' => 'KB ��������� �����',
	'Mod_group_explain' => '- � ���������� �������������� KB!',

	'Bump_post' => '������������ ������ ���������',
'Bump_post_explain' => '��� �������������� ������, �������� ������������ � ������ ���� ����������� �� ����������� ������.',

'Stats_list' => '���������� KB ����������',
'Stats_list_explain' => '���������� KB ���������� � ���������.',

'Header_banner' => '�������� ��� Logo',
'Header_banner_explain' => '�������� KB ������� � ���������.',

'Comment_info' => '��������� ����������� ',
'Rating_info' => '��������� ������ ',

//types
	'Types_man' => '���������� ������',
'KB_types_description' => '����� �� ������ ���������, ������� � ������������� ���� ������',
'Create_type' => '������� ����� ��� ������:',
'Type_created' => '����� ��� ����� ������� ������.',
'Click_return_type_manager' => '������� %s�����%s ��� �������� � ���������� ������',

'Edit_type' => '������������� ���',
'Edit_type_description' => '����� �� ������ �������� ��� ���� ������',
'Type_edited' => '��� ������ ������� �������.',

	'Type_delete_title' => '������� ��� ������',
'Type_delete_desc' => '����� �� ������ ������� ��� ������ ��� ������� ���.',
'Change_type' => '�������� ��� ������ ��',
'Change_and_Delete' => '�������� � �������',
'Type_deleted' => '��� ������ ������� ������.',

'Pre_text_name' => '���������� �� ���������� ������',
'Pre_text_header' => '��������� ���������� �� ���������� ������',
'Pre_text_body' => '���� ���������� �� ���������� ������',
'Pre_text_explain' => '���� ����� ���������� ����� ������������, ����� ������������ ����� ������� �� �������������� �����.',

'Show' => '��������',
'Hide' => '������',

	'Empty_fields' => '����������, ��������� ��� ����� �����.',
	'Empty_fields_return' => '������� %s�����%s ����� ��������� � �����.',
	'Empty_category' => '�� ������ ������� ���������',
'Empty_type'=> '�� ������ ������� ���',
'Empty_article_name' => '�� ������ ������ �������� ������',
'Empty_article_desc' => '�� ������ ������ �������� ������',

	'Read_full_article' => '>>��������� ��� ������',
'Comments' => '���������� �����������',

	'No_add' => '�� �� ������ ��������� ����� ������',
'No_edit' => '�� �� ������ ��������������� ��� ������!',
'Post_comments' => '������������ �����������',

	'Category_sub' => '������������',
'Quick_stats' => '������� ������',

// added

	'Edited_Article_info' => '������ ���������...',
'No_Articles' => '��� ��������� ������!',
'Not_authorized' => '�� �� �������������� �����...',
'TOC' => '����������',

// Rate
	'Votes_label' => '������� ',
'Votes' => '�����(��)',
'Rate' => '������ ������',
'ADD_RATING' => '[������ ������]',
'Rerror' => '��������, �� �� ��� ��������� ��� ������.',
'Rateinfo' => '�� ������ ������� ������ <i>{filename}</i>.<br />����������, �������� ������. 1 - �������������, 10 - ���������.',
'Rconf' => '�� ��������� <i>{filename}</i> ������ {rate}.<br />������ ������� ���� {newrating}/10.',
'R1' => '1',
'R2' => '2',
'R3' => '3',
'R4' => '4',
'R5' => '5',
'R6' => '6',
'R7' => '7',
'R8' => '8',
'R9' => '9',
'R10' => '10',
'Click_return_rate' => '������� %s�����%s ��� �������� � ������',

// Print version
	'Print_version' => '[������ ��� ������]',

// Stats
	'Top_toprated' => '������ ������',
'Top_most_popular' => '����� ����������',
'Top_latest' => '��������� ������',

// Votes check
	'Votes_check_ip' => '������ ������ - IP-�����',
'Votes_check_ip_explain' => '����������� ������ ���� ������ � ������ IP-������.',


	'Votes_check_userid' => '������ ������ - ������������',
'Votes_check_userid_explain' => '������������ ����� ������ ���� ��� ��������� ������ ������.',


	'Article_pag' => '��������� ������',
'Article_pag_explain' => '����� ������ ������������ � (stats) ��������� ����� ������� ��������.',

'Comments_pag' => '��������� ������������',
'Comments_pag_explain' => '����� ����������� ������������ ����� ������� ��������.',

	'News_sort' => '����� ���������� ������',
'News_sort_explain' => '�������� ������ ���������� ������ � ����������.',

'News_sort_par' =>'ASC ��� DESC ����������',
'News_sort_par_explain' => 'ASC - �� ����������, DESC - �� ��������',

// General strings from the news admin panel

'News_settings' => '��������� ����� ��',
'News_settings_short_explain' => '��������� ����������� ������ �� ������� ��������.',
'News_settings_explain' => '����� �� ������ �������� ��������� ��� ����� ��. ��� ������ ��������� ��� �������, ����� ��������� ����� ������������ � ���� ���������.',

// Update result messages

	'News_updated_return_settings' => '��������� ����� �� ������� ��������.<br /><br />������� %s�����%s ��� �������� � ������� ��������.', // %s's for URI params - DO NOT REMOVE
'News_update_error' => '���������� �������� ��������� ����� ��.<br /><br />���� ��� ���������� ��� MySQL, ��������� � ������� ��� ������������� ������ ������. ���� �� ������ ���������� ������� SQL � ������ ������� ��� ������, ����������, �������� ��:<br />',


// Custom Field
	'Fieldselecttitle' => '��������, ��� ������',
'Afield' => '������ �������: ��������',
'Efield' => '���������������� �������: ��������',
'Dfield' => '���������������� �������: �������',
'Mfieldtitle' => '�������������� ����',
'Afieldtitle'=> '�������� ����',
'Efieldtitle' => '�������� ����',
'Dfieldtitle' => '������� ���� ',
'Fieldexplain' => '�� ������ ������������ ���������������� ���� ��� ���������� � ������� ����� ���������, ������������� � ������� ����. �� ������ ������������ ������������� ����, ����� �������� �������������� ���������� � ������.',
'Fieldname' => '��� ����',
 'Fieldnameinfo' => '��� - �������� ����, �������� \'File ������ \'',
 'Fielddesc' => '�������� ����',
 'Fielddescinfo' => '��� - �������� ����, �������� \'File ������ � ���������� \'',
'Fieldadded' => '���������������� ���� ��� ������� ���������',
'Fieldedited' => '��������� ���������������� ����  ������� ���������������',
'Dfielderror' => '�� ��� �� ������� ����, ��� ��������',
'Fieldsdel' => '���������������� ����, ������� �� �������, ���� ������� �������',

'Field_data' => '�����',
'Field_data_info' => '������� ���������, ������� ������������ ����� ��������. �� ����������� � ����� ������.',
'Field_regex' => '���������� ��������� ',
'Field_regex_info' => '�� ������ ����������� ����� ���� ��� ������������ ����������� ��������� %s(PCRE)%s.',
'Field_order' => '�������� ������� ',

//Fields Types

	'Field_Input' => '��������� ���� ��������� �����',
 'Field_Textarea' => '������������� ��������� ����',
 'Field_Radio' => '������ � ��������� ��������� ������������� ������',
 'Field_Select' => '���� ������������� ������',
 'Field_Select_multiple' => '���� �������������� ������',
 'Field_Checkbox' => '������������� �������������� ������',

 'Click_return' => '�������� %s�����%s, ����� ������������ � ���������� ��������',


// added
	'Cat_all' => '���',

	'L_Pages' => 'Pages',
	'L_Pages_explain' => '������������ [pages] ����� ������� ������ �� ��������',
	'L_Toc' => '���������� (TOC)',
	'L_Toc_explain' => '������������ [toc] �������� ����� �������� ���� � TOC',
	'L_Abstract' => '������',
	'L_Abstract_explain' => '������������ [abstract]...[/abstract] ����� �������� ������',

	'L_Title_Format' => '���������',
	'L_Title_Format_explain' => '������������ [title]...[/title] ����� �������� ���������',

	'L_Subtitle_Format' => '������������',
	'L_Subtitle_Format_explain' => '����������� [subtitle]...[/subtitle] ����� �������� ������������',

	'L_Subsubtitle_Format' => '���������������',
	'L_Subsubtitle_Format' => '����������� [subsubtitle]...[/subsubtitle] ����� �������� ��������� ��������� ',

	'L_Options' => '�����:',
	'L_Formatting' => '��������������:',

	'Default_article_id' => '����� �������� ������  �� ��������� , ���  ��������� ������',

// Added for v. 2.0
	'KB_comment_prefix' => '[KB] ',

	'Wysiwyg' => '������������ WYSIWYG-��������',
'Wysiwyg_explain' => '���� ��������, ����������� BBCode / HTML / �������� ������ ����� ���������� WYSIWYG-��������.',

'Wysiwyg_path' => '���� � WYSIWYG ������������ �����������',
'Wysiwyg_path_explain' => '��� ���� (�� mxBB / IP ������) � ������ WYSIWYG ����� ���������, ��������, \'modules/\', ���� �� ���������, �������� tinemce  / TinyMCE.',

'Formatting_fixup' => 'Fix �� ��������������',
'Formatting_fixup_explain' => '���� �������� �����, ����� ������ ����� ����������������: ������� �����, URL ��������, IMG � ��������� ��������� ������� BBCode ������������������ � �.�.',

'Addtional_field' => ' ���������(�� �������)',

'No_cat_comments_forum_id' => '����������� ��������, �� �� �� ������� ���� ������ icyphoenix ��������� � �� ACP - ���������',
// Quick Nav
	'Quick_nav' => '������� ��������� ��',
	'Quick_jump' => '������',

	'Categories' => '���������',
	'Subcategory' => '������������',
	)
);

?>