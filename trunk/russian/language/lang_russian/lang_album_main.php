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
* Smartor (smartor_xp@hotmail.com)
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
// Album Index
'Photo_Album' => '����������',
'Pics' => '����',
'Last_Pic' => '��������� ����',
'Public_Categories' => '����� ���������',
'No_Pics' => '��� ����',
'Users_Personal_Galleries' => '������ ������� �������������',
'Your_Personal_Gallery' => '���� ������ �������',
'Recent_Public_Pics' => '��������� ����������',
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',

// Category View
	'Category_not_exist' => '��������� �� ����������',
'Upload_Pic' => '��������� ����',
	'Upload_Pics' => '��������� ����������',
	'JUpload_Pic' => '��������� ��������� ���������� � JUpload',
	'Pic_Title' => '��������� ����',
	'View' => '��������',
	'Pic_Poster' => '������',
	'Pic_Image' => '�����������',
	'Waiting' => ' �����������(�) � �������� �������������',

/*
	'Album_upload_can' => 'You <b>can</b> upload new pics in this category',
	'Album_upload_cannot' => 'You <b>cannot</b> upload new pics in this category',
	'Album_rate_can' => 'You <b>can</b> rate pics in this category',
	'Album_rate_cannot' => 'You <b>cannot</b> rate pics in this category',
	'Album_comment_can' => 'You <b>can</b> post comments to pics in this category',
	'Album_comment_cannot' => 'You <b>cannot</b> post comments to pics in this category',
	'Album_edit_can' => 'You <b>can</b> edit your pics and comments in this category',
	'Album_edit_cannot' => 'You <b>cannot</b> edit your pics and comments in this category',
	'Album_delete_can' => 'You <b>can</b> delete your pics and comments in this category',
	'Album_delete_cannot' => 'You <b>cannot</b> delete your pics and comments in this category',
*/
	'Album_view_can' => '�� <b>������</b> ������������� ����',
	'Album_view_cannot' => '�� <b>�� ������</b> ������������� ����',
	'Album_upload_can' => '�� <b>������</b> ���������� ����� ���� � ���� ���������',
'Album_upload_cannot' => '�� <b>�� ������</b> ���������� ����� ���� � ���� ���������',
'Album_rate_can' => '�� <b>������</b> ��������� ���� � ���� ���������',
'Album_rate_cannot' => '�� <b>�� ������</b> ��������� ���� � ���� ���������',
'Album_comment_can' => '�� <b>������</b> ��������� ����������� � ���� ���������',
'Album_comment_cannot' => '�� <b>�� ������</b> ��������� ����������� � ���� ���������',
'Album_edit_can' => '�� <b>������</b> ���� ���� � ����������� � ���� ���������',
'Album_edit_cannot' => '�� <b>�� ������</b> ������������� ���� ���� � ����������� � ���� ���������',
'Album_delete_can' => '�� <b>������</b> ������� ���� ���� � ����������� � ���� ���������',
'Album_delete_cannot' => '�� <b>�� ������</b> ������� ���� ���� � ����������� � ���� ���������',
'Album_moderate_can' => '�� <b>������</b> %s������������%s ��� ���������',

	'Edit_pic' => '�������������',
'Delete_pic' => '�������',
'Rating' => '�������',
'Comments' => '�����������',
'New_Comment' => '����� �����������',

'Not_rated' => '<i>��� ������</i>',
	'Random_Pictures' => '��������� �����������',
	'Highest_Rated_Pictures' => '���������� � ������� ���������',
	'Most_Viewed_Pictures' => '���������� ����������',

	'Avatar_Set' => '������� ������',
	'BBCode_Copy' => '���������� BBCode',

// Upload
	'Pic_Desc' => '�������� ����',
'Plain_text_only' => '������ �����',
'Max_length' => '����.����� (����)',
'Upload_pic_from_machine' => '�������� ���� � ������ ����������',
'Upload_to_Category' => '�������� � ���������',
'Upload_thumbnail_from_machine' => '�������� ������ � ������ ���������� (������ ��������� � ����� ����)',
'Upload_thumbnail' => '�������� �����������',
'Upload_thumbnail_explain' => '��� ����� ������ ���������',
'Thumbnail_size' => '������ ����������� (������)',
'Filetype_and_thumbtype_do_not_match' => '���� ���� � ����������� ������ ���� ������ ����',

	'Upload_no_title' => '�� ������ ������ ���������',
'Upload_no_file' => '�� ������ ������ ��� ����� � ���� � ����',
'Desc_too_long' => '���� �������� ������� �������',

	'JPG_allowed' => '��������� JPG',
'PNG_allowed' => '��������� PNG',
'GIF_allowed' => '��������� GIF',

	'Album_reached_quota' => '��� ��������� ��������� ����� �����������. �� �� ������ ������ ����������. ��������� � ��������������� ��� ������� ����������',
'User_reached_pics_quota' => '�� ��������� ����� ����������. �� �� ������ ������ ����������. ��������� � ��������������� ��� ������� ����������',

	'No_valid_category_selected' => '��� ��������� ��������� �������',
	'No_category_to_upload' => '��������,  ��� ��������� � ������� �� ������� ���������� ��������.',
	'Not_allowed_file_type' => '��� ������ ����� �� ��������������',
	'Upload_image_size_too_big' => '��� ������ ����������� �������� ������� �������',
	'Upload_thumbnail_size_too_big' => '��� ������ ������ �������� ������� �������',

	'Missed_pic_title' => '�� ������ ������ ���������',

	'Click_return_category' => '������� %s�����%s ��� �������� � ���������',
'Click_return_album_index' => '������� %s�����%s ��� �������� � ������� ��������',

	'Add_File' => '�������� ����',
	'File_thumbnail_count_mismatch' => '����������� ����������� �������� � ������� doesn \'t ������������',
 'No_thumbnail_for_picture_found' => '�� ��� ������� �������, ��������� ��� ����������� �������� (���������: %s)',
 'No_picture_for_thumbnail_found' => '�� ��� ������� ������������, ��������� ��� ����������� ������ (���������: %s)',
 'Unknown_file_and_thumbnail_error_mismatch' => '������ Uknown ��� ������, �������� �������� � ����� <br/> ��������� �����������: %s � ����� �������: %s <br/>',
 'Picture_exceeded_maximum_size_INI' => '�����������, ��������� \' % s \', �������� ������� �������. ����������� ���������. <br/>',
 'Thumbnail_exceeded_maximum_size_INI' => '�����, ��������� \' % s \', �������� ������� �������. ����������� � ����� ���������. <br/>',
 'Execution_time_exceeded_skipping' => '������������ ����� ���������� ���� ���������. ��������� ����� �� ���� ���������: <br/>',
 'Skipping_uploaded_picture_file' => '%s <br/>',
 'Skipping_uploaded_picture_and_thumbnail_file' => '%s (�����: %s) <br/>',
 'Album_upload_not_successful' => '�� ���� �� ����� �������� ��  ���������  <br/> <br/>',
 'Album_upload_partially_successful' => '������ ����� ����� ����������� ���� ������� ��������  <br/> <br/>',
 'No_pictures_selected_for_upload' => '��� ��������� ����������� ��� �������� ��� ����������� ������',

// 'Bad_upload_file_size' => 'Your uploaded file is too large or corrupted',
// 'Album_upload_successful' => 'Your pic has been uploaded successfully',
// 'Album_upload_need_approval' => 'Your pic has been uploaded successfully.<br /><br />But the feature Pic Approval has been enabled so your pic must be approved by a administrator or a moderator before posting',

	'Bad_upload' => '������ ��������',
 'Bad_upload_file_size' => '��� ���������� ���� (%s) �������� ������� ������� ��� ������������',
 'Album_upload_successful' => '���� ����������� (�) ���� �������� �������',
 'Album_upload_need_approval' => '���� ����������� (�) ���� �������� �������. <br/> <br/>, �� ��������� ���. ����������� ��� ������� ���, ��� ���. ������ ���� ������� ��������������� ��� ����������� ����� ������������.',
	'Rotation' => '������� (������ ������� �������)',

	'Max_file_size' => '������������ ������ ����� (����):',
	'Max_width' => '������������ ������ ����������� (��������):',
	'Max_height' => '������������ ������ ����������� (��������):',

// Album Nuffload
	'Time_elapsed' => '��������� �����',
'Time_remaining' => '��������� �����',
'Upload_in_progress' => '��������',
'Please_wait' => '����������, ��������� ...',
'uploaded' => '��������� %multi_id% ��  %multi_max% �����������.',
'No_file_received' => '��� ����������� �����������',
'No_thumbnail_file_received' => '��� ���������� ���������',
'File_too_big' => '������� ������� ������ �����������',
'Thumbnail_too_big' => ' ��������� ������� �������� �������',
'Image_res_too_high' => '���������� ����������� ������� �������',
'Add_field' => '�������� ���� ��������',
'Remove_field' => ' ������� �� ���� �������� ������ ',
'ZIP_allowed' => '����������� � �������� ������ ZIP',

// View Pic
	'Pic_ID' => 'ID',
	'Pic_Details' => '���������� � �����������',
	'Pic_Size' => '������',
	'Pic_Type' => '��� �����������',
	'Pic_BBCode' => 'BBCode',
	'Pic_not_exist' => '���� �� ����������',
	'Click_enlarge' => '������� ����� ���������',
	'Prev_Pic' => '���������� �����������',
	'Next_Pic' => '��������� �����������',
	'Slideshow' => '����� ���',
	'Slideshow_Delay' => '�������� ����� ���',
	'Slideshow_On' => '����� ���',
	'Slideshow_Off' => '���������� ����� ���',
	'Pics_Nav' => '������������ �����������',
	'Pics_Nav_Next' => '��������� ����',
	'Pics_Nav_Prev' => '���������� ����',
	'Pics_Counter' => '�������� ���� %s of %s',

// Edit Pic
	'Edit_Pic_Info' => '������������������ ����',
	'Pics_updated_successfully' => '���� ���������� ���� ������� ���������',

// Delete Pic
	'Album_delete_confirm' => '�� ������ ������� ��� ����?',
	'Pics_deleted_successfully' => '���������� �������',

// ModCP
	'Approval' => '��������',
'Approve' => '���������',
'Unapprove' => '���������',
'Status' => '���������',
'Locked' => '�������������',
'Not_approved' => '�� ���������',
'Approved' => '���������',
	'Copy' => '����������',
	'Move_to_Category' => '����������� � ���������',
	'Pics_moved_successfully' => '���� ���� ������� ����������',
	'Copy_to_Category' => '���������� � ���������',
	'Pics_copied_successfully' => '���� ���� ���� ������� ����������� ',
	'Pics_locked_successfully' => '���� ���� ������� �������������',
'Pics_unlocked_successfully' => '���� ���� ������� ��������������',
'Pics_approved_successfully' => '���� ���� ������� ���������',
'Pics_unapproved_successfully' => '���� ���� ������� ���������',

// Rate
	'Current_Rating' => '������',
'Please_Rate_It' => '�������',
	'Login_To_Vote' => '����������, ������� ����� �������������',
	'Already_rated' => '�� ��� ������� ��� ����',
	'Own_Pic_Rate' => '�� �� ������ ������ ����� ��� ����������',
	'Album_rate_successfully' => '���� ������� �������.',
	'Click_rate_more' => '������� %s�����% ����� ������� ������ ����������.',
	'Hot_Or_Not' => '������ ��� ���',

// Comment
	'Comment_no_text' => '�� ������ ������ �����������',
'Comment_too_long' => '��� ����������� ������ �������',
'Comment_delete_confirm' => '������� �����������?',
'Pic_Locked' => '��������, ���� �������������. �� ������ �� ������ ��������� �����������',
	'Post_your_comment' => '���������, ������� ���� �����������!',

// Personal Gallery
	'Personal_Gallery_Explain' => '�� ������ ������������� ������ ������� ������ �������������, ����� �� ������ � �� �������',
'Personal_gallery_not_created' => '������ ������� %s ����� ��� �� ���� �������',
'Not_allowed_to_create_personal_gallery' => '��������, ������ ��������������� ��������� ��������� ������ �������',
'Click_return_personal_gallery' => '������� %s�����%s ��� �������� � ������ �������',

// Download Archive
	'Download_pics' => '��������� ���� (ZIP)',
	'Download_page' => '��������� ���� �� ��� �������� (ZIP)',
	'No_Download_auth' => '� ��� ��� ���� ������������ ���� ������',

// Email Notification
	'Email_Notification' => '����������� ������� �� Email',
 'Email_Notification_Explain' => '��� ��������� ��������� ������������� �������� �����������, ����� ����� ����������� ��������� � ������',
 'Approvation_OK' => '��������',
 'Approvation_NO' => '����� ���� ����������',


// Album Hierarchy Index Table
	'Last_Comment' => '��������� �����������',
	'Last_Comments' => '��������� �����������',
	'No_Comment_Info' => '��� ������������',
	'No_Pictures_In_Cat' => '� ���������� ��� �����������',
	'Total_Pics' => '����� �����������',
	'Total_Comments' => '����� ������������',
	'Last_Index_Thumbnail' => '��������� �����������',
	'One_Sub_Total_Pics' => '%d �����������',
	'Multiple_Sub_Total_Pics' => '%d �����������',
	'Album_sub_categories' => '������������',
	'No_Public_Galleries' => '��� ��������� ���������',
	'One_new_picture' => '%d ����� �����������',
	'Multiple_new_pictures' => '%d ����� �����������',

// Personal Album Hierarchy Index Table
	'Personal_Categories' => '������ ��������',
	'Create_Personal_Categories' => '������� ������ ��������',
	'Personal_Cat_Admin' => '������ �������� ��������������',
	'Recent_Personal_Pics' => '���� �� ������ �������� %s',

// Album Moderator Control Panel
	'Modcp_check_all' => '��������� ���',
	'Modcp_uncheck_all' => '����� ���',
	'Modcp_inverse_selection' => '�������� �����',

	'Show_selected_pic_view_mode' => '���������� ������ ��������� ��������� ������ �������',
	'Show_all_pic_view_mode' => '�������� ��� ���������� � ������ �������',

// Access language strings
	'Album_Can_Manage_Categories' => '�� <b>������</b> %s���������%s ���� ����������',
	'No_Personal_Category_admin' => '�� �� ������ ��������� ������ ����������� ���� �������',

// The picture list of a member (album_memberlist.php)
	'Pic_Cat' => '���������',
	'Picture_List_Of_User' => '��� ����������� %s',
	'Member_Picture_List_Explain' => '�� ������ ����������� ������ ������ ����������, ��������������� ������� ��������������, ������� �� ������ � �� �������',
	'Comment_List_Of_User' => '��� ����������� %s',
	'Rating_List_Of_User' => '��� �������� %s',
	'Show_All_Pictures_Of_user' => '�������� ��� ����������� %s',
	'Show_All_Comments_Of_user' => '�������� ��� ����������� %s',
	'Show_All_Ratings_Of_user' => '�������� ��� �������� %s',

// The pictures list
	'All_Picture_List_Of_User' => '��� �����������',
	'All_Comment_List_Of_User' => '��� �����������',
	'All_Rating_List_Of_User' => '��� ��������',
	'All_Show_All_Pictures_Of_user' => '�������� ��� �����������',
	'All_Show_All_Comments_Of_user' => '�������� ��� �����������',
	'All_Show_All_Ratings_Of_user' => '�������� ��� ��������',

	'Not_commented' => '<i>�� ��������������</i>',

// Nuff's Stuff
	'Nuff_Click' => '�������� �����, ����� ��������� ����������� �������',
 'Nuff_UnClick' => '������� ����� ��� ���������� ������������',
 'Nuff_Title' => '����������� �������',
 'Nuff_Explain' => '��������� ��������� �������� � ������������. <br/> �������, ���  <i> <b> ����� ������� �������� �� ������</b> </i>, ���������� �� ��������� ����� ������������. ��������� ������� ������������� �������� ������� ����������� ������',
 'Nuff_Normal' => '���������� �����������',
 'Nuff_Normal_Explain' => '��� ����������� ��������',
 'Nuff_BW' => '�����-�����',
 'Nuff_BW_Explain' => '������������� ����������� � �����-�����',
 'Nuff_Sepia' => '��� �����',
 'Nuff_Sepia_Explain' => '��������� ��������� ����� � �����������',
 'Nuff_Flip' => '����������������',
 'Nuff_Flip_Explain' => '������� �����������',
 'Nuff_Mirror' => '�������',
 'Nuff_Mirror_Explain' => '������� �����������',
 'Nuff_Flip_H' => '��������������',
 'Nuff_Flip_V' => '������������',
 'Nuff_Rotate' => '�������� �������� (������ ������� �������)',
 'Nuff_Rotate_Explain' => '������� �����������, ������ ������� �������',
 'Nuff_Resize' => '�������� �������',
 'Nuff_Resize_Explain' => '������ �����������',
 'Nuff_Resize_W' => '������',
 'Nuff_Resize_H' => '������',
 'Nuff_Resize_No_Resize' => '��� ��������',
 'Nuff_Watermark' => '������� ����',
 'Nuff_Watermark_Explain' => '��������� ������� ���� � �����������',
 'Nuff_Recompress' => '��������',
 'Nuff_Recompress_Explain' => '�������� ������� �����������',
 'Nuff_Alpha' => '�����',
 'Nuff_Alpha_Explain' => '����������� �����-����� � �����������',
 'Nuff_Blur' => '��������',
 'Nuff_Blur_Explain' => '��������� ������ �������� � �����������',
 'Nuff_Pixelate' => '������������',
 'Nuff_Pixelate_Explain' => '��������� ������ ������������� � �����������',
 'Nuff_Scatter' => '�������',
 'Nuff_Scatter_Explain' => '��������� ������ �������� � �����������',
 'Nuff_Infrared' => '������������',
 'Nuff_Infrared_Explain' => '��������� ������������ ������ � �����������',
 'Nuff_Tint' => '�������',
 'Nuff_Tint_Explain' => '��������� ������� ������� � �����������',
 'Nuff_Interlace' => '���������� (�������������� ������)',
 'Nuff_Interlace_Explain' => '����������� ���������� ����� � �����������',
 'Nuff_Screen' => '����� (������ ������ Hor)',
 'Nuff_Screen_Explain' => '����������� ����� ������ � �����������',
 'Nuff_Stereogram' => 'Stereograph',
 'Nuff_Stereogram_Explain' => '��������������� ����������� � stereograph (�����-����� ��������� 16 �����)',

	'Pic_Gallery' => 'OTF ��������',
	'Select_Pic' => '����� �����������',
	'Select_Category' => '����� ���������',
	'Title_Description' => '�������� &amp; ��������',

// Pic watch
	'No_longer_watching_comment' => '�� ������ �� �������� ���� ���. �� �������������',
 'Watching_comment' => '�� ������ �������� ���� ���. �� �������������',
 'Pic_comment_notification' => '����������� ����������� �������',
 'Pic_comment_watch_checkbox' => '������, ������� ����� ��������������� ������������ ������������ ���.:',
 'Watch_pic' => '������� ���� ���. �� �������������',
 'Unwatch_pic' => '���������� �������� ���� ���. �� �������������',
 'Click_return_pic' => '������� %s�����%s, ����� ������������ � �����������',

	'Pic_RDF' => 'RSS Feed 1.0',
	'Pic_RSS' => 'RSS Feed 2.0',
	)
);

?>