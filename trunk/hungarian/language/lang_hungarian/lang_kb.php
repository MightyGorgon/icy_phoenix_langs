<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_kb.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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

$lang = array_merge($lang, array (
  'KB_title' => 'Tud�sb�zis',
  'Article' => 'Cikk',
  'Category' => 'Kateg�ria',
  'Article_description' => 'Meghat�roz�s',
  'Article_type' => 'T�pus',
  'Article_keywords' => 'Kulcsszavak',
  'Articles' => 'Cikkek',
  'Add_article' => 'Cikk bek�ld�se',
  'Click_cat_to_add' => 'Kattints egy kateg�ri�ra egy cikk hozz�ad�s�hoz',
  'KB_Home' => 'TB home',
  'No_articles' => 'Nincs cikk',
  'Article_title' => 'Cikk neve',
  'Article_text' => 'Cikk sz�vege',
  'Add_article' => 'Cikk bek�ld�se',
  'Read_article' => 'Cikk olvas�sa',
  'Article_not_exsist' => 'A cikk nem l�tezik',
  'Category_not_exsist' => 'A kateg�ria nem l�tezik',
  
  'Edit' => 'Szerkeszt',
  
  'Article_submitted_Approve' => 'Cikk sikeresen elk�ldve.<br />Egy adminisztr�tor �t fogja n�zni a cikkedet, �s az � javaslata alapj�n lesz azut�n k�zz�t�ve.',
  'Article_submitted' => 'Cikk sikeresen elk�ldve.',
  'Click_return_kb' => 'Kattints %side%s, hogy visszat�rj a Tud�sb�zisba',
  'Click_return_article' => 'Kattints %side%s, hogy visszat�rj a Cikkhez',
  
  'Article_Edited_Approve' => 'A cikk sikeresen szerkesztve.<br />El kell m�g fogadtatni a v�ltoz�sokat.',
  'Article_Edited' => 'A cikk sikeresen szerkesztve.',
  'Edit_article' => 'Cikk szerkeszt�se',
  
  'KB_title' => 'Tud�sb�zis',
  'KB_art_description' => 'El tudod fogadni a felhaszn�l�k �ltal bek�ld�tt cikkeket, illetve t�r�lheted is azokat.',
  'Art_man' => 'Cikkezel�',
  'Cat_man' => 'Kateg�riakezel�',
  'KB_cat_description' => 'L�tre tudsz hozni �j kateg�ri�kat, illetve tudod szerkeszteni �s t�r�lni a Tud�sb�zis kateg�ri�it',
  'Art_action' => 'Akci�',

//approve
  'Art_edit' => 'Szerkesztett cikkek',
  'Art_not_approved' => 'Nem elfogadott',
  'Art_approved' => 'Elfogadva',
  'Approve' => 'Elfogad',
  'Un_approve' => 'Elutas�t',
  'Article_approved' => 'A cikk elfogadva.',
  'Article_unapproved' => 'A cikk nincs elfogadva.',

//delete
  'Delete' => 'T�r�l',
  'Confirm_art_delete' => 'T�nyleg t�r�lni akarod ezt a cikket?',
  'Confirm_art_delete_yes' => '%sIgen, �n ezt a cikket t�r�lni akarom%s',
  'Confirm_art_delete_no' => '%sNem, �n nem akarom ezt a cikket t�r�lni%s',
  'Article_deleted' => 'Cikk sikeresen t�r�lve.',
  
  'Click_return_article_manager' => 'Kattints %side%s, hogy visszat�rj a Cikkezel�k�z',

//cat manager
  'Create_cat' => '�j kateg�ria l�trehoz�sa:',
  'Create' => 'L�trehoz',
  'Cat_settings' => 'Kateg�ria be�ll�t�sai',
  'Create_description' => 'Here you can change the name of the category and add a description to the new category.',
  'Cat_created' => 'Category Created Successfully.',
  'Click_return_cat_manager' => 'Kattints %side%s to return to the Kateg�riakezel�',
  'Edit_description' => 'Here you can edit the settings of your category',
  'Edit_cat' => 'Edit Category',
  'Cat_edited' => 'Category Edited Successfully.',
  'Parent' => 'Parent',
  
  'Cat_delete_title' => 'Delete Category',
  'Cat_delete_desc' => 'Here you can delete a category and move all of the articles in it to a new category',
  'Cat_deleted' => 'Category Deleted Successfully.',
  'Delete_all_articles' => 'Delete Articles',

//configuration
  'KB_config' => 'KB Configuration',
  'Art_types' => 'Article Types',
  'KB_config_title' => 'Knowledge Base Configuration',
  'KB_config_explain' => 'Change the configuration of your Knowledge Base',
  'New_title' => 'Allow New Articles',
  'New_explain' => 'Let users post new articles on in your Knowledge Base',
  'Edit_name' => 'Allow Editing',
  'Edit_explain' => 'Allow users to edit their articles after posting them',
  'Notify_name' => 'Notify me by',
  'Notify_explain' => 'Choose which way to receive notices that new articles have been posted',
  'PM' => 'PM',
  'Click_return_kb_config' => 'Kattints %side%s to return to Knowledge Base Configuration',
  'Admin_id_name' => 'Admin ID',
  'Admin_id_explain' => 'This is the user id number that PM notifications will be sent to.',
  'Approve_new_name' => 'Approve new Articles',
  'Approve_new_explain' => 'Change whether <b />new</b /> articles need to be approved or not',
  'Approve_edit_name' => 'Approve Edited Articles',
  'Approve_edit_explain' => 'Change whether <b />edited</b /> articles need to be approved or not',
  'Allow_anon_name' => 'Allow anonymous posting of Articles',
  'Allow_anon_explain' => 'Change whether <b />new</b /> articles can be submitted anonymously',
  'Del_topic' => 'Delete Topic',
  'Del_topic_explain' => 'When you delete an article, do you want its comments topic to be deleted also?',
  
  'Use_comments' => 'Comments',
  'Use_comments_explain' => 'Enable comments for articles, to be inserted in the phpbb forum',
  'Use_ratings' => 'Ratings',
  'Use_ratings_explain' => 'Enable ratings for articles',
  
  'Forum_id' => 'Forum ID',
  'Forum_id_explain' => 'This is the forum that the article\'s comments will be kept',


// Permissions
  'KB_Auth_Title' => 'KB Permissions',
  'KB_Auth_Explain' => 'Here you can choose which usergroup(s) can be the moderators for each kb category or just has the private access',
  'Select_a_Category' => 'Select a Category',
  'Look_up_Category' => 'Look up Category',
  'KB_Auth_successfully' => 'Auth has been updated successfully',
  'Click_return_KB_auth' => 'Kattints %side%s to return to the KB Permissions',
  
  'Upload' => 'Upload',
  'Rate' => 'Cikk �rt�kel�se',
  'Comment' => 'Comment',
  'Approval' => 'Approval',
  'Approval_edit' => 'Approval Edit',
  
  'Allow_rating' => 'Allow ratings',
  'Allow_rating_explain' => 'Users are allowed to rate articles.',
  
  'Allow_anonymos_rating' => 'Allow anonymous ratings',
  'Allow_anonymos_rating_explain' => 'If ratings is activated, allow anonymous users to add ratings to your articles',
  
  'KB_config_updated' => 'Knowledge Base Configuration Updated Successfully.',
  
  'KB_notify_subject_new' => 'New Article!',
  'KB_notify_subject_edited' => 'Edited Article!',
  'KB_notify_subject_approved' => 'Approved Article!',
  'KB_notify_subject_unapproved' => 'Unapproved Article!',
  'KB_notify_body' => 'An article has been submitted or modified:

',

  'Category_Permissions' => 'Category Permissions',
  'Category_Title' => 'Category Title',
  'Category_Desc' => 'Category Description',
  'View_level' => 'View Level',
  'Upload_level' => 'Upload Level',
  'Rate_level' => 'Rate Level',
  'Comment_level' => 'Comment Level',
  'Edit_level' => ' Edit Level',
  'Delete_level' => 'Delete Level',
  'Approval_level' => 'Approval Level',
  'Approval_edit_level' => 'Approval Edit Level',

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
  'KB_Rules_post_can' => 'You <b>can</b> post new articles',
  'KB_Rules_post_cannot' => 'You <b>cannot</b> post new articles',
  'KB_Rules_comment_can' => 'You <b>can</b> comment articles',
  'KB_Rules_comment_cannot' => 'You <b>cannot</b> comment articles',
  'KB_Rules_edit_can' => 'You <b>can</b> edit your articles',
  'KB_Rules_edit_cannot' => 'You <b>cannot</b> edit your articles',
  'KB_Rules_delete_can' => 'You <b>can</b> delete your articles',
  'KB_Rules_delete_cannot' => 'You <b>cannot</b> delete your articles',
  'KB_Rules_rate_can' => 'You <b>can</b> rate articles',
  'KB_Rules_rate_cannot' => 'You <b>cannot</b> rate articles',
  'KB_Rules_approval_can' => 'Articles <b>need no</b> approval',
  'KB_Rules_approval_cannot' => 'Articles <b>need</b> approval',
  'KB_Rules_approval_edit_can' => 'Article edits <b>need no</b> approval',
  'KB_Rules_approval_edit_cannot' => 'Article edits <b>need</b> approval',
  'KB_Rules_moderate' => '<b>Tudod</b> %smoder�lni ezt a kateg�ri�t%s', // %s replaced by a href links, do not remove!
  'KB_Rules_moderate_can' => '<b>Tudod</b> moder�lni ezt a kateg�ri�t', // %s replaced by a href links, do not remove!
  
  'Comments_show' => 'Display article comments.',
  'Comments_show_explain' => '- also displays comments in the article page',
  'Comments_show_title' => 'User comments',
  
  'Mod_group' => 'KB Moderator Group',
  'Mod_group_explain' => '- with KB Admin permissions!',
  
  'Bump_post' => 'Bumping article post',
  'Bump_post_explain' => 'When editing an article, a reply is posted in the article topic notifying of the updated article.',
  
  'Stats_list' => 'Show KB Stats',
  'Stats_list_explain' => 'Show KB stats in the header.',
  
  'Header_banner' => 'Show Top Logo',
  'Header_banner_explain' => 'Show KB logo in the header.',
  
  'Comment_info' => 'Comments settings',
  'Rating_info' => 'Ratings settings',


//types
  'Types_man' => 'Types Manager',
  'KB_types_description' => 'Here you can add delete and edit the different article types',
  'Create_type' => 'Create new Article Type:',
  'Type_created' => 'Article Type Created Successfully.',
  'Click_return_type_manager' => 'Kattints %side%s to return to the Types Manager',
  
  'Edit_type' => 'Edit Type',
  'Edit_type_description' => 'Here you can edit the name of the type',
  'Type_edited' => 'Article Type Edited Successfully.',
  
  'Type_delete_title' => 'Delete Article Type',
  'Type_delete_desc' => 'Here you can change what the article type is of the articles that have the type you are deleting.',
  'Change_type' => 'Change article\'s type to',
  'Change_and_Delete' => 'Change and Delete',
  'Type_deleted' => 'Article Type Deleted Successfully.',
  
  'Pre_text_name' => 'Article Submission Instructions',
  'Pre_text_header' => 'Article Submission Instructions Header',
  'Pre_text_body' => 'Article Submission Instructions Body',
  'Pre_text_explain' => 'This is text instructions displayed to users at the top of the submission forum.',
  
  'Show' => 'Mutat',
  'Hide' => 'Elrejt',
  
  'Empty_fields' => 'K�rlek az �rlap minden r�sz�t t�ltsd ki.',
  'Empty_fields_return' => 'Kattints %side%s, hogy visszat�rj az �rlaphoz.',
  'Empty_category' => 'Ki kell v�lsztani egy kateg�ri�t',
  'Empty_type' => 'Ki kell v�lasztani a t�pust',
  'Empty_article_name' => 'A cikknek nevet kell adni',
  'Empty_article_desc' => 'Egy r�vid meghat�roz�st kell adni a cikknek',
  
  'Read_full_article' => '>>Teljes cikk elolvas�sa',
  'Comments' => 'Kommentek',
  
  'No_add' => 'Nem tudsz �j cikket bek�ldeni',
  'No_edit' => 'Nem tudod szerkeszteni ezt a cikket!',
  'Post_comments' => 'Komment�ld!',
  
  'Category_sub' => 'Alkateg�ri�k',
  'Quick_stats' => 'Gyorsstatisztika',

// added

  'Edited_Article_info' => 'Cikket bek�ldte ',
  'No_Articles' => 'Ez a kateg�ria �res!',
  'Not_authorized' => 'Bocsi, de nincs hozz�f�r�sed!',
  'TOC' => 'Tartalom',

// Rate
  'Votes_label' => '�rt�kel�s ',
  'Votes' => 'szavazat(ok)',
  'No_votes' => 'Nincs szavazat',
  'Rate' => 'Cikk �rt�kel�se',
  'ADD_RATING' => '[Cikk �rt�kel�se]',
  'Rerror' => 'Bocsi, de m�r �rt�kelted ezt a cikket.',
  'Rateinfo' => 'You are about to rate the article <i>{filename}</i>.<br />Please select a rating. 1 is the worst, 10 is the best.',
  'Rconf' => 'You have given <i>{filename}</i> a rating of {rate}.<br />This makes the files new rating {newrating}/10.',
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
  'Click_return_rate' => 'Kattints %side%s, hogy visszat�rj a cikkhez',

// Print version
  'Print_version' => 'Nyomtat�bar�t verzi�',

// Stats
  'Top_toprated' => 'Legt�bbre �rt�kelt cikk',
  'Top_most_popular' => 'Legn�pszer�bb',
  'Top_latest' => 'Leg�jabb cikkek',

// Votes check
  'Votes_check_ip' => '�rt�kel�s �rv�nyes�t�se - ip',
  'Votes_check_ip_explain' => 'Minden IP-r�l egy-egy szavazat van csak elfogadva.',
  
  'Votes_check_userid' => '�rt�kel�s �rv�nyes�t�se - felhaszn�l�',
  'Votes_check_userid_explain' => 'Minden felhaszn�l� csak egyszer �rt�kelhet.',
  
  'Article_pag' => 'Article pagination',
  'Article_pag_explain' => 'The number of articles to show in a (stats) category before pagination.',
  
  'Comments_pag' => 'Comments pagination',
  'Comments_pag_explain' => 'The number of comments to show for the article before pagination.',
  
  'News_sort' => 'Cikkek rendez�si m�dja',
  'News_sort_explain' => 'Define how articles are sorted within its category.',
  
  'News_sort_par' => 'ASC or DESC sorting',
  'News_sort_par_explain' => '',

// General strings from the news admin panel

  'News_settings' => 'TB blokk-be�ll�t�sok',
  'News_settings_short_explain' => 'Configure some options for the front-page news.',
  'News_settings_explain' => 'Here you can edit the configuration for the KB Block. This panel lets you extract what categories the block will display, thus you\'ll create sub-instances of the module.',

// Update result messages

  'News_updated_return_settings' => 'KB block configuration updated successfully.<br /><br />Kattints %side%s to return to main page.', // %s's for URI params - DO NOT REMOVE
  'News_update_error' => 'Couldn\'t update KB block configuration.<br /><br />This mod is designed for MySQL so please contact the author if you have troubles. If you can offer a translation of the SQL into other database formats, please send them to:<br />',

// Custom Field
  'Fieldselecttitle' => 'Select what to do',
  'Afield' => 'Custom Field: Add',
  'Efield' => 'Custom Field: Edit',
  'Dfield' => 'Custom Field: Delete',
  'Mfieldtitle' => 'Custom Fields',
  'Afieldtitle' => 'Add Field',
  'Efieldtitle' => 'Edit Field',
  'Dfieldtitle' => 'Delete Field',
  'Fieldexplain' => 'You can use the custom fields management section to add, edit, and delete custom fields. You can use custom fields to add more information about an article.',
  'Fieldname' => 'Field Name',
  'Fieldnameinfo' => 'This is the name of the field, for example \'File Size\'',
  'Fielddesc' => 'Field Description',
  'Fielddescinfo' => 'This is a description of the field, for example \'File Size in Megabytes\'',
  'Fieldadded' => 'The custom field has been successfully added',
  'Fieldedited' => 'The custom field you selected has been successfully edited',
  'Dfielderror' => 'You didn\'t select any fields to delete',
  'Fieldsdel' => 'The custom fields you selected have been successfully deleted',
  
  'Field_data' => 'Options',
  'Field_data_info' => 'Enter the options that the user can choose from. Separate each option with a new-line (carriage return).',
  'Field_regex' => 'Regular Expression',
  'Field_regex_info' => 'You may require the input field to match a regular expression %s(PCRE)%s.',
  'Field_order' => 'Display Order',

//Fields Types

  'Field_Input' => 'Single-Line Text Box',
  'Field_Textarea' => 'Multiple-Line Text Box',
  'Field_Radio' => 'Single-Selection Radio Buttons',
  'Field_Select' => 'Single-Selection Menu',
  'Field_Select_multiple' => 'Multiple-Selection Menu',
  'Field_Checkbox' => 'Multiple-Selection Checkbox',
  
  'Click_return' => 'Kattints %side%s, hogy visszat�rj az el�z� oldalra',

// added
  'Cat_all' => 'Mind',
  
  'L_Pages' => 'Lapok',
  'L_Pages_explain' => 'Use the [pages] command to split the article into pages',
  'L_Toc' => 'Table of contents (TOC)',
  'L_Toc_explain' => 'Use the [toc] command to add entry in the TOC',
  'L_Abstract' => 'Abstract',
  'L_Abstract_explain' => 'Use the [abstract]...[/abstract] environment to insert an abstract',
  
  'L_Title_Format' => 'Title',
  'L_Title_Format_explain' => 'Use the [title]...[/title] environment to insert a main title',
  
  'L_Subtitle_Format' => 'Subtitle',
  'L_Subtitle_Format_explain' => 'Use the [subtitle]...[/subtitle] environment to insert a subtitle',
  
  'L_Subsubtitle_Format' => 'Use the [subsubtitle]...[/subsubtitle] environment to insert a small header',
  'L_Subsubtitle_Format_explain' => 'Use the [subsubtitle]...[/subsubtitle] environment to insert a small header',
  
  'L_Options' => 'Options:',
  'L_Formatting' => 'Formatting:',
  
  'Default_article_id' => 'Set default article, for the article viewer',

// Added for v. 2.0
  'KB_comment_prefix' => '[TB] ',
  
  'Wysiwyg' => 'Wysiwyg szerkeszt� haszn�lata',
  'Wysiwyg_explain' => 'If enabled, the standard bbcode/html/smileys input dialogue is replaced by a wysiwyg editor.',
  
  'Wysiwyg_path' => 'Path to wysiwyg software',
  'Wysiwyg_path_explain' => 'This is the path (from mxBB/ip root) to the wysiwyg software folder, eg \'modules/\' if you have uploaded for example tinemce in modules/tinymce.',
   
  'Formatting_fixup' => 'Fix up formatting',
  'Formatting_fixup_explain' => 'If enabled, the article text is reformatted: word-wrapping, url truncates, img resizing, some bbcode reformatting etc',
  
  'Addtional_field' => 'More information (optional)',
  
  'No_cat_comments_forum_id' => 'Comments are enabled but you have not specified the target phpBB forum category in KB ACP - Categories',

// Quick Nav
  'Quick_nav' => 'Gyors TB navig�ci�',
  'Quick_jump' => 'Ugr�s',
  
  'Categories' => 'Kateg�ri�k',
  'Subcategory' => 'Alkateg�ri�k',
  )
);

?>