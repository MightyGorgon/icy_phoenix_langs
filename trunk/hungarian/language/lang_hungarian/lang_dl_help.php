<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 110 2009-07-14 08:09:47Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
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

$lang = array_merge($lang, array (
  'Dl_no_help_aviable' => 'There is no help aviable for this option',
  'HELP_TITLE' => 'Download MOD Online Help',
  'HELP_Dl_delay_auto_traffic' => 'Enter here the days after a new user will get the first auto traffic.<br />The delay starts with the registration day.<br />Enter 0 here to disable this delay.',
  'HELP_Dl_delay_post_traffic' => 'Enter here the number of days after which a new user will get the first traffic for posts.<br />The delay starts with the registration day.<br />Enter 0 here to disable this delay.',
  'HELP_DL_edit_time' => 'Enter here the number of days how long an edited download will be marked.<br />Enter 0 to disable this function.',
  'HELP_Dl_guest_stats_show' => 'This option will only include or exclude the statistical data about guests from the public category statistics.<br />The script will still collect all data.<br />The ACP statistics tool always displays the complete statistical datas.',
  'HELP_Dl_method' => 'The "old" method will send the file directly to the web client.<br />This method is compatible to the most web enviroments, but can not display the real filesize while downloading, so the user client can not calculate the remaining download time.<br />The "new" method will display the real filesize, but it can produce errors.<br />Use the "old" method, if you have trouble with the new one.<br />If nothing will work, check the box "direct" to link the download directly to the file on the server if this will be bibber than the PHP memory limit.',
  'HELP_Dl_method_quota' => 'Set the filesize here from which on the chunked file will be read as a big file if you have chosen the "new" download method.<br />Under this quota the file will be fetched by readfile(); and send directly to the web client.',
  'HELP_DL_new_time' => 'Enter here the number of days how long a new download will be marked.<br />Enter 0 to disable this function.',
  'HELP_Download_path' => 'The relative path under your phpBB root folder.<br />On first installation of this package you will find here the value "downloads/".<br />Regard case sensitve names while renaming this folders if you are using Unix/Linux.<br />The slash at the end of the folder name will be important, but do not add a slash at the beginning.<br />This and all included subfolders must be at CHMOD 777, too, to let all functions working faultless.<br />Under this folder you must create one or more subfolders which will contains all physical files.<br />It is recommended to create a subfolder for each logical group of categories.<br />This subfolder must be entered as path in the category with the same syntax as the main folder, but without using the main folder (for more read the help in the category management).<br />You can create more subfolders by using a ftp client or by using the Toolbox (see the link on the top right of this page).',
  'HELP_Dl_thumb_max_size' => 'Enter 0 as filesize to disble thumbnails in all categories.<br />If you allow thumbsnails, then enter usefull image sizes for new thumbnails.<br />If you disable thumbnails you can not see existing thumbnails in the download details, too.',
  'HELP_Dl_use_ext_blacklist' => 'If you enable the blacklist all entered filetypes will be blocked for new uploaded or edited downloads.',
  'HELP_Dl_enable_post_traffic' => 'Set the amount of traffic a user will get for creating new topics, reply or quote like in the next two options.',
  'HELP_Dl_limit_desc_on_index' => 'Cut the descriptions after the entered number of characters.<br />Set 0 here to disable this function.',
  'HELP_Dl_prevent_hotlink' => 'Enable this option, if you wants to prevent each direct download link except from the download details.<br />This option does <b>not</b> build a folder protection!',
  'HELP_Dl_user_traffic_once' => 'Choose, if downloads should only descrease the user traffic only for the first time downloading a file.<br /><b>Regard:</b><br />This option will NOT change the download status itself!',
  'HELP_Dl_edit_own_downloads' => 'If you enable this option, each user can edit their own uploaded files without being an Administrator or Download Moderator.',
  'HELP_Dl_shorten_extern_links' => 'Enter the length of the displayed external download link on the download details.<br />Based on the length of the link it will be cut in the middle or shorten beginning from the right side.<br />Leave this field empty or enter 0 to disable this function.',
  'HELP_Dl_show_footer_legend' => 'This option will turn the legend with the download status icons on the download footer on and off.<br />The icons which you can find beside the downloads will not be changed by this option.',
  'HELP_Dl_show_footer_stat' => 'This option will turn the statistic lines on the download footer on and off.<br />The statistic will still earn data, if you switch it off.',
  'HELP_Dl_show_real_filetime' => 'With this you can display the real last edit time of the download files in the download details.<br />This is the exactest timecode even files will be uploaded with a ftp client or not updated while editing the downloads.',
  'HELP_Dl_visual_confirmation' => 'Enable this option to let the user enter a displayed 5 digits confirmation code to access the download.<br />If the user will not enter the code or the code will be wrong the MOD will just display a message and stop the download.',
  'HELP_Dl_report_broken' => 'Turn the function on or off to report broken downloads.<br />If you will set it to "not for guests", only registered users can report downloads.',
  'HELP_Dl_report_broken_lock' => 'If you enable this option the download will be locked while it is reported as broken.<br />It will hide the download button and no user can download the file until an Administrator or Download Moderator will unlock the download.',
  'HELP_Dl_report_broken_message' => 'If a download was reported as broken a message about this will be displayed.<br />If you enable this option the message will only comes up while the download is locked, too.<br />In this case not under but instead the download button.',
  'HELP_Dl_report_broken_vc' => 'Enables a visual confirmation if a user will report a broken download.<br />Only if the code was correct the report will be saved and Administrators and Download Moderators will be informed with an email.',
  'HELP_Dl_Links_per_page' => 'This option controlls, how many downloads will be displayed on each category page and ACP statistics.<br />In the hacklist and overview list the board setting "topics per page" will be used.',
  'HELP_Number_recent_dl_on_portal' => 'The number of latest downloads the user which see on the portal.<br />The block uses the last edit time for this list, so it can be possible to have an older download on top of this list.',
  'HELP_DL_posts' => 'Each user, even each Administrator and Download Moderator, must have posted at minimum this number of posts to be able to download not free downloads.<br />It is recommended to install an Anti Spam MOD, too,  to avoid spamming poster.<br />Enter 0 to disable this function, recommended for young boards.',
  'HELP_Dl_physical_quota' => 'The overall physical limit the MOD will be able to use to save and manage downloads.<br />If this limit is reached, new downloads can only be added when they will are uploaded with a ftp client and added with the file management on ACP.',
  'HELP_Dl_overall_traffic' => 'The overall limit for all downloads and, if enabled, all uploads, too, which can not be exceeded in the current month.<br />After reaching this limit, each download will similar be marked and locked and, if enabled, uploads will be impossible, too.',
  'HELP_Dl_newtopic_traffic' => 'For each new posted topic the author will get the here entered traffic on top of its traffic amount.',
  'HELP_Dl_reply_traffic' => 'The user will get for each new reply and quote the here entered traffic on top of its traffic amount.',
  'HELP_Dl_stop_uploads' => 'You can enable/disable uploads with this option.<br />If you disable this option, only adminstrators will be able to upload new files.<br />Enable this option to allow users to upload depending on the category and group permissions.',
  'HELP_Dl_upload_traffic_count' => 'If the option is enabled, uploads will lower down the monthly overall traffic, too.<br />After the overall limit will be reached no upload will be possible and new downloads must be uploaded with a ftp client and added in the ACP.',
  'HELP_Dl_thumb_max_dim' => 'This values will limit the possible images size of uploaded thumbnails.<br />Enter 0 here to disable thumbnails (not recommended, if the thumbnail filesize will be set).<br />Existing thumbnails will be displayed until the thumbs filesize was not changed to 0, too.',
  'HELP_Dl_disable_email' => 'With this Option you can enable or completely disable email notifications about new added or edited downloads.<br />While this function is enabled here, it can individually be disabled while add or edit a download.<br />Only user will get an email who have activate the email notifications about new or edited downloads in their download configuration.<br />They can open their configuration from the footer of the downloads.',
  'HELP_Dl_disable_popup' => 'With this Option you can enable or completely disable popup notifications or board message in the forum header about new added or edited downloads.<br />While this function is enabled here, it can individually be disabled while add or edit a download.<br />Only user will get a popup/board message who have activate the popup notifications about new or edited downloads in their download configuration.<br />They can open their configuration from the footer of the downloads.',
  'HELP_Dl_disable_popup_notify' => 'If this option is enabled, you can disable to change the edit time while editing a download.',
  'HELP_Dl_stat_perm' => 'Select here from which userlevel upsides user can view the download statistic page.<br />E. g. if you will enable it for Download Moderators each board administrator and download moderator (NOT forum moderator!) can open and view this page.<br />Note that this page can produce a heavy load, so we recommended to do not open it for the masses if you have a bigger board and/or manage many downloads.',
  'HELP_Dl_hotlink_action' => 'Here you can choose, how the download script should react, while it prevents a direct link to a download (also see the last option).<br />It will display a message (reduces the server load) or it redirects to the download (produces additional traffic).',
  'HELP_Dl_use_hacklist' => 'This option switch the hack list on or off.<br />If it is enabled, you can enter hack informations while add or edit a download to insert the download into the hack list.<br />If you will disable the hacklist, it will completely be hidden for each user like you never have installed it, but you can enable it everytime.<br />Note that each hack information in the downloads will be lost, if you will edit the file after the hack list was disabled.',
  'HELP_Dl_icon_free_for_reg' => 'This option switch the white icon for downloads (free download for registered users) for guests into white, too.<br />If you will disable this option, guests will see the red icon instead the white one.',
  'HELP_Dl_latest_comments' => 'This option displayes the latest X comments at the download details. Enter 0 to disable this block.',
  'HELP_Dl_sort_preform' => 'The option "Preset" will sort all downloads in all categories for all users like they are sorted in the ACP.<br />With the option "User" each user can choose, how downloads will be sorted for him/her and if this sorting will be fix or extended with other sort criteria.',
  'HELP_Dl_approve_comments' => 'If you disable this option, each new comment must be approved by an download moderator or administrator before other user can see them.',
  'HELP_Dl_cat_rules' => 'These rules will be displayed over the sub-categories and downloads while viewing the category.',
  'HELP_Dl_stats_prune' => 'Enter the number of data rows the statistic for this category can reach.<br />Each new row will delete the oldest one.<br />Enter 0 here to disable pruning.',
  'HELP_Dl_cat_traffic' => 'Enter the maximum monthly traffic for this category.<br />This traffic does not increase the overall traffic!<br />Enter 0 here to disable the limit.',
  'HELP_Dl_cat_path' => 'Here you must enter an existing path to your downloads.<br />This value must be the name of a subfolder under the main folder (e. g .downloads/) which you have defined in the main configurations.<br />Enter here the foldername with a slash at the end.<br />For example there exists the folder "downloads/mods/" you must enter as category path just "mods/".<br />If you will send this form, the folder will be checked.<br />Be sure, the entered subfolder will really exists!<br />If the folder is a subfolder of a subfolder, enter the complete hierarchy here.<br />E.g. "downloads/mods/misc/" must be entered as category path "mods/misc/".<br />Be sure that each subfolder will have permissions CHMOD 777 and regard case sensitive foldernames if you uses Unix/Linux.',
  'HELP_Dl_cat_name' => 'This is the name of the category which will shown at every point.<br />Try to avoid special chars to avoid confused entries in the jumpbox.',
  'HELP_Dl_cat_description' => 'A short description for this category.<br />BBCodes are not aviable here.<br />This description will shown on the downloads index and on subcategories.',
  'HELP_Dl_cat_parent' => 'The main level or an other category this category can be joined to.<br />With this dynamic drop down you can build hierarchical structures for your downloads.',
  'HELP_Dl_must_approve' => 'Enable this option to approve each new uploaded download file before it will be displayed in this category.<br />Administrators and Download Moderators will get emails about each new unapproved downloads.',
  'HELP_Dl_mod_desc_allow' => 'Enables the mod information block while add or edit a download.',
  'HELP_Dl_statistics' => 'Enables detailed statistics about the files.<br />Note that this statistics will produces additional database queries and datasets in a seperate table.',
  'HELP_Dl_comments' => 'Activate the comment system for this category.<br />Users which you can enable with the upcomming drop downs can view and/or post comments in this category.<br />Administrators and Download Moderators can edit and delete all comments, the autors can manage their own texts.',
  'HELP_Dl_thumb_cat' => 'This option enable Thumbnails on downloads in this category.<br />The size of these Images will base on the settings in the main configuration of this MOD.',
  'HELP_Dl_bug_tracker_cat' => 'Enables the Bug Tracker for downloads in this category.<br />Bugs can be posted and viewed by every registered user for the related downloads and from other categories, if the bug tracker will be enabled there, too.<br />Only Administrators and Board Moderators can manage the bugs.<br />For each change on the bug messages the author will get an email message, and the team member, who shall work for the bug, will be informed, too.',
  'HELP_Dl_name' => 'This is the name of the downloads, which will shown at the different places.<br />Try to avoid special chars to reduce display errors.',
  'HELP_Dl_choose_category' => 'Choose the category which will include this download.<br />The file must already be saved in the folder you have entered in the category management before you will save this download.<br />Otherwise you will get an error message.',
  'HELP_Dl_file_description' => 'A short description for this download.<br />This will be displayed in the download category, too.<br />BBCodes are off for this text.<br />Please enter only a short text to reduces heavy data loads while open the category.',
  'HELP_Dl_files_url' => 'The filename of this download.<br />Enter this name without a leading file path or slash.<br />The file must exist bevore saving this download otherwise you will get an error message.<br />Note forbidden file extentions: Each file which have a forbidden extention will be blocked.',
  'HELP_Dl_upload_file' => 'The upload file from your computer.<br />Be sure, the filesize will be smaller as shown and the file extention will not included the list you can see under this field.',
  'HELP_Dl_extern' => 'Activate this function for an external files which you will enter in the field above (http://www.example.com/media.mp3).<br />The function "free" becomes insignificant.',
  'HELP_Dl_extern_up' => 'Activate this function for an external files which you will enter in the right field (http://www.example.com/media.mp3).insignificantThe function "free" becomes insignificant.',
  'HELP_Dl_thumb' => 'This field can upload a small image (note the displayed file size and image dimensions under this field) to display it in the download details.<br />If there already exists a thumbsnail, you can upload a new one to replace it.<br />Check the existing thumbnail for "delete" you will just drop it.',
  'HELP_Dl_is_free' => 'Activate this function if the download should be free to download for everybody.<br />The traffic accounts will not be used.<br />Choose free for reg. Users to enable a free download only for registered users.',
  'HELP_Dl_traffic' => 'The maximum of traffic a file will be allowed to produce.<br />A value of 0 deactivates the traffic control',
  'HELP_Dl_approve' => 'This will approve the download immediately if you will send this form.<br />On the other hand this download will be hidden for users.',
  'HELP_Dl_no_change_edit_time' => 'Check this option to suppress to update the latest edit time for this download.<br />This will not affected the email and popup notification/board message.',
  'HELP_Dl_disable_popup_files' => 'Check this option to suppress the popup notification/board message.<br />This will not affected the email notifications or updating the last edit time.',
  'HELP_Dl_disable_email_files' => 'Check this option to suppress the email notification.<br />This will not affected the popup notification/board message or updating the last edit time.',
  'HELP_Dl_hacklist' => 'With this option you can add this download to the hacklist (this must be enabled in the main configuration) if you choose Yes here.<br />No will not insert the download into the hacklist.<br />Showing extra informations will display this block only in the download details.',
  'HELP_Dl_hack_version' => 'The declaration about the download release.<br />This will be alltimes displayes beside the download.<br />You can not search for this.',
  'HELP_Dl_hack_autor' => 'The author of this download file.<br />Leave this empty to hide this value at the download details and overall view.',
  'HELP_Dl_hack_autor_email' => 'The email adress of the author.<br />If you do not enter it here, it will be hidden at the download details and overall view.',
  'HELP_Dl_hack_autor_website' => 'Website of the author.<br />This URL should be the website of the author, not the page for the download (not alltimes the same).<br />Please do not enter links to protectes sites or websites with doubtful contents.',
  'HELP_Dl_hack_dl_url' => 'The page to an alternative download for this file.<br />This can be the website of the author or an other alternative website.<br />Please do not enter links for a direkt download if the author will not allow this.',
  'HELP_Dl_mod_desc' => 'Detailed descriptions about the entered MOD.<br />You can use BBCodes and Smileys in this text.<br />Line feeds will be formatted, too.<br />This text will only be shown in the download details.',
  'HELP_Dl_mod_list' => 'Activate this block in the download details.<br />If you will not enable this option, the complete block will not be displayed.',
  'HELP_Dl_mod_require' => 'Declarations which other MODs a user needs to install or use this Download.<br />This text will only be shown in the download details.',
  'HELP_Dl_mod_test' => 'Declare on which phpBB this MOD was tested successfull.<br />Just enter the release from the test board.<br />The script will display it as phpBB X, so you must only enter X here.<br />This text will only be shown in the download details.',
  'HELP_Dl_mod_todo' => 'Here you can enter the next steps you have planned for this MOD or whose are currently in work.<br />This will create the ToDo list which can be opened from the downloads footer.<br />With this text user can be informed about the latest status of this MOD.<br />Line feeds will be formatted, BBCodes are not aviable here.<br />The ToDo list will still be filled even this block will be disabled.',
  'HELP_Dl_mod_warning' => 'Important advices about this MOD which must be regarded on installation, using or interacton with other MODs.<br />This text will be shown in the download details formatted with an other color (per default the font color is red).<br />Line feeds will be formatted.<br />BBCodes are not aviable here.',
  'HELP_Dl_user_download_limit_flag' => 'This option lets you specify a limit for the number of downloads per month for each user. E.G.: if you enable this and if you set the "Max number of downloads per month" equal to 30, then each user can download only 30 files per month. This limit won\'t be applied to administrators and moderators.',
  'HELP_Dl_user_download_limit' => 'Specify the maximum number of downloads allowed per month for each user. This limit has to be enabled with the switch called "Limit number of downloads per month". This limit doesn\'t apply to administrators and moderators.',
))
?>