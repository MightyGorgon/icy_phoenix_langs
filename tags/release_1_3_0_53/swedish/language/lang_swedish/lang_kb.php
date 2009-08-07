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

$lang = array_merge($lang, array(
	'KB_title' => 'Kunskaps Bas',
	'Article' => 'Artikel',
	'Category' => 'Kategori',
	'Article_description' => 'Beskrivning',
	'Article_type' => 'Typ',
	'Article_keywords' => 'Nyckelord',
	'Articles' => 'Artiklar',
	'Add_article' => 'L�gg Till Artikel',
	'Click_cat_to_add' => 'Klicka p� Kategori f�r att l�gga till Artikel',
	'KB_Home' => 'KB Hem',
	'No_articles' => 'Inga Artiklar',
	'Article_title' => 'Artikel Namn',
	'Article_text' => 'Artikel text',
	'Add_article' => 'Skicka Artikel',
	'Read_article' => 'L�ser Artikel',
	'Article_not_exsist' => 'Artikel finns inte',
	'Category_not_exsist' => 'Kategori finns intet',

	'Edit' => 'Redigera',

	'Article_submitted_Approve' => 'Artikel Inskickad Successfullt.<br />En administrat�r kommer att granska din artikel och besluta om att l�ta anv�ndarna se den eller inte.',
	'Article_submitted' => 'Artikel Inskickad Successfullt.',
	'Click_return_kb' => 'Klicka %sH�r%s f�r att �terg� till Kunskaps Basen',
	'Click_return_article' => 'Klicka %sH�r%s f�r att �terg� till Artikeln',

	'Article_Edited_Approve' => 'Artikel Redigerad Successfullt.<br />Den m�ste godk�nnas p� nytt innan anv�ndaren kan granska den.',
	'Article_Edited' => 'Artikel Redigerad Successfullt.',
	'Edit_article' => 'Redigera Artikel',

	'KB_title' => 'Kunskaps Bas',
	'KB_art_description' => 'Godk�nn artiklar s� att anv�ndarna kan titta p� dem eller s� kan du radera artiklar.',
	'Art_man' => 'Artikel Manager',
	'Cat_man' => 'Kategori Manager',
	'KB_cat_description' => 'L�gg till, redigera eller ta bort kategorier i Kunskaps Basen',
	'Art_action' => '�tg�rd',

//approve
	'Art_edit' => 'Redigerade Artiklar',
	'Art_not_approved' => 'Ej Godk�nda',
	'Art_approved' => 'Ej Godk�nda',
	'Approve' => 'Godk�nn',
	'Un_approve' => 'Godk�nn Ej',
	'Article_approved' => 'Artikeln �r nu Godk�nd.',
	'Article_unapproved' => 'Artikeln �r nu Inte Godk�nd.',

//delete
	'Delete' => 'Radera',
	'Confirm_art_delete' => 'Vill du verkligen ta bort den h�r artikeln?',
	'Confirm_art_delete_yes' => '%sJa, Jag vill ta bort den h�r artikeln%s',
	'Confirm_art_delete_no' => '%sNej, Jag vill inte ta bort den h�r artikeln%s',
	'Article_deleted' => 'Artikel Raderad Successfullt.',

	'Click_return_article_manager' => 'Klicka %sH�r%s f�r att �terg� till Artikel Manager',

//cat manager
	'Create_cat' => 'Skapa Ny Kategori:',
	'Create' => 'Skapa',
	'Cat_settings' => 'Kategori Inst�llningar',
	'Create_description' => '�ndra namnet p� kategorin och l�gga till en beskrivning f�r den nya kategorin.',
	'Cat_created' => 'Kategori Skapad Successfullt.',
	'Click_return_cat_manager' => 'Klicka %sH�r%s f�r att �terg� till Kategori Manager',
	'Edit_description' => '�ndra inst�llningarna p� din kategori',
	'Edit_cat' => 'Redigera Kategori',
	'Cat_edited' => 'Kategori Redigerad Successfullt.',
	'Parent' => 'F�r�lder',

	'Cat_delete_title' => 'Radera Kategori',
	'Cat_delete_desc' => 'Radera en kategori och flytta alla artiklarna i den till en ny kategori',
	'Cat_deleted' => 'Kategori Raderad Successfullt.',
	'Delete_all_articles' => 'Radera Artiklar',

//configuration
	'KB_config' => 'KB Konfiguration',
	'Art_types' => 'Artikel Typer',
	'KB_config_title' => 'Kunskaps Bas Konfiguration',
	'KB_config_explain' => '�ndra konfigurationen p� din Kunskaps Bas',
	'New_title' => 'Till�t Nya Artiklar',
	'New_explain' => 'L�t anv�ndarna l�gga upp nya artiklar i din Kunskaps Bas',
	'Edit_name' => 'Till�t Redigering',
	'Edit_explain' => 'Till�t anv�ndare att �ndra sina artiklar efter utstationeringen av dem',
	'Notify_name' => 'Meddela mig om',
	'Notify_explain' => 'V�lj vilket s�tt att ta emot meddelanden p� om att nya artiklar har lagts upp',
	'PM' => 'PM',
	'Click_return_kb_config' => 'Klicka %sH�r%s f�r att �terg� till Kunskaps Bas Konfigurationen',
	'Admin_id_name' => 'Admin ID',
	'Admin_id_explain' => 'Detta �r det anv�ndar-ID nummer som PM anm�lningar kommer att skickas till.',
	'Approve_new_name' => 'Godk�nn nya Artiklar',
	'Approve_new_explain' => '�ndra om <b />nya</b /> artiklar m�ste godk�nnas eller inte',
	'Approve_edit_name' => 'Godk�nn Redigerada Artiklar',
	'Approve_edit_explain' => '�ndra om <b />redigerada</b /> artiklar m�ste godk�nnas eller inte',
	'Allow_anon_name' => 'Till�t anonyma postningar av artiklarna',
	'Allow_anon_explain' => '�ndra om <b />nya</b /> artiklar kan l�mnas in anonymt',
	'Del_topic' => 'Radera �mne',
	'Del_topic_explain' => 'N�r du tar bort en artikel, vill du �ven att dess kommentars �mne ska tas bort ocks�?',

	'Use_comments' => 'Kommentarer',
	'Use_comments_explain' => 'Aktivera kommentarer p� artiklar, som skall inf�ras i icyphoenix forum',
	'Use_ratings' => 'V�rderingar',
	'Use_ratings_explain' => 'Aktivera v�rdering f�r artiklar',

	'Forum_id' => 'Forum ID',
	'Forum_id_explain' => 'Detta �r det forum som artikel kommentarerna kommer att h�llas i',


// Permissions
	'KB_Auth_Title' => 'KB R�ttigheterna',
	'KB_Auth_Explain' => 'V�lj vilken anv�ndargrupp (er) som kan vara moderatorer f�r varje KB kategori eller bara ha privat tillg�ng',
	'Select_a_Category' => 'V�lj en Kategori',
	'Look_up_Category' => 'L�s upp Kategori',
	'KB_Auth_successfully' => 'Auth har uppdaterats successfullt',
	'Click_return_KB_auth' => 'Klicka %sH�r%s f�r att �terg� till KB R�ttigheterna',

	'Upload' => 'Ladda Upp',
	'Rate' => 'Betygs�tt',
	'Comment' => 'Kommentar',
	'Approval' => 'Godk�nnande',
	'Approval_edit' => 'Godk�nnande Redigera',

	'Allow_rating' => 'Till�t betygs�ttning',
	'Allow_rating_explain' => 'Anv�ndarna �r till�tna att betygs�tta artiklar.',

	'Allow_anonymos_rating' => 'Till�t anonyma betygs�ttningar',
	'Allow_anonymos_rating_explain' => 'Om betygs�ttning �r aktiverad, till�ta anonyma anv�ndare att l�gga till betyg till dina artiklar',

	'KB_config_updated' => 'Kunskaps Bas Konfiguration Uppdaterad Successfullt.',

	'KB_notify_subject_new' => 'Ny Artikel!',
	'KB_notify_subject_edited' => 'Redigerad Artikel!',
	'KB_notify_subject_approved' => 'Godk�nd Artikel!',
	'KB_notify_subject_unapproved' => 'Icke Godk�nd Artikel!',
	'KB_notify_body' => 'En artikel har l�mnats in eller �ndrats:

',

	'Category_Permissions' => 'Kategori Beh�righeter',
	'Category_Title' => 'Kategori Titel',
	'Category_Desc' => 'Kategori Beskrivning',
	'View_level' => 'Visa Niv�',
	'Upload_level' => 'Ladda Upp Niv�',
	'Rate_level' => 'Betygs�tt Niv�',
	'Comment_level' => 'Kommentar Niv�',
	'Edit_level' => ' Redigera Niv�',
	'Delete_level' => 'Radera Niv�',
	'Approval_level' => 'Godk�nnande Niv�',
	'Approval_edit_level' => 'Godk�nnande Redigera Niv�',

/*
	'KB_Rules_post_can' => 'Du <b>kan</b> posta nya artiklar i denna kategori',
	'KB_Rules_post_cannot' => 'Du <b>kan ej</b> posta nya artiklar i denna kategori',
	'KB_Rules_comment_can' => 'Du <b>kan</b> kommentera artiklar i denna kategori',
	'KB_Rules_comment_cannot' => 'Du <b>kan ej</b> kommentera artiklar i denna kategori',
	'KB_Rules_edit_can' => 'Du <b>kan</b> redigera dina artiklar i denna kategori',
	'KB_Rules_edit_cannot' => 'Du <b>kan ej</b> redigera dina artiklar i denna kategori',
	'KB_Rules_delete_can' => 'Du <b>kan</b> radera dina artiklar i denna kategori',
	'KB_Rules_delete_cannot' => 'Du <b>kan ej</b> radera dina artiklar i denna kategori',
	'KB_Rules_rate_can' => 'Du <b>kan</b> v�rdera artiklar i denna kategori',
	'KB_Rules_rate_cannot' => 'Du <b>kan ej</b> v�rdera artiklar i denna kategori',
	'KB_Rules_approval_can' => 'Artiklar <b>beh�ver inte</b> godk�nnas i denna kategori',
	'KB_Rules_approval_cannot' => 'Artiklar <b>beh�ver</b> godk�nnas i denna kategori',
	'KB_Rules_approval_edit_can' => 'Artikel redigering <b>beh�ver ej</b> godk�nnas i denna kategori',
	'KB_Rules_approval_edit_cannot' => 'Artikel redigering <b>beh�ver</b> godk�nnas i denna kategori',
*/
	'KB_Rules_post_can' => 'Du <b>kan</b> posta nya artiklar',
	'KB_Rules_post_cannot' => 'Du <b>kan ej</b> posta nya artiklar',
	'KB_Rules_comment_can' => 'Du <b>kan</b> kommentera artiklar',
	'KB_Rules_comment_cannot' => 'Du <b>kan ej</b> kommentera artiklar',
	'KB_Rules_edit_can' => 'Du <b>kan</b> redigera dina artiklar',
	'KB_Rules_edit_cannot' => 'Du <b>kan ej</b> redigera dina artiklar',
	'KB_Rules_delete_can' => 'Du <b>kan</b> radera dina artiklar',
	'KB_Rules_delete_cannot' => 'Du <b>kan ej</b> radera dina artiklar',
	'KB_Rules_rate_can' => 'Du <b>kan</b> betygs�tta artiklar',
	'KB_Rules_rate_cannot' => 'Du <b>kan ej</b> betygs�tta artiklar',
	'KB_Rules_approval_can' => 'Artiklar <b>beh�ver inte</b> godk�nnas',
	'KB_Rules_approval_cannot' => 'Artiklar <b>beh�ver</b> godk�nnas',
	'KB_Rules_approval_edit_can' => 'Artikel redigering <b>beh�ver inte</b> godk�nnas',
	'KB_Rules_approval_edit_cannot' => 'Artikel redigering <b>beh�ver</b> godk�nnas',
	'KB_Rules_moderate' => 'Du <b>kan</b> %smoderera denna kategori%s', // %s replaced by a href links, do not remove!
	'KB_Rules_moderate_can' => 'Du <b>kan</b> moderera denna kategori', // %s replaced by a href links, do not remove!

	'Comments_show' => 'Visa artikel kommentarer.',
	'Comments_show_explain' => '- visar �ven kommentarer p� artikel sidan',
	'Comments_show_title' => 'Anv�ndare kommentarer',

	'Mod_group' => 'KB Moderator Grupp',
	'Mod_group_explain' => '- med KB Admin r�ttigheter!',

	'Bump_post' => 'Skumpande artikel post',
	'Bump_post_explain' => 'N�r du redigerar en artikel, redovisas ett svar i artikel �mnet meddelas den uppdaterade artikeln.',

	'Stats_list' => 'Visa KB Statistik',
	'Stats_list_explain' => 'Visa KB statistik i sidhuvudet.',

	'Header_banner' => 'Visa Topp Logotyp',
	'Header_banner_explain' => 'Visa KB logotyp i sidhuvudet.',

	'Comment_info' => 'Kommentarer inst�llningar',
	'Rating_info' => 'Betygs inst�llningar',


//types
	'Types_man' => 'Typer Manager',
	'KB_types_description' => 'L�gg till, ta bort och redigera de olika typer av artiklar',
	'Create_type' => 'Skapa ny Artikel Typ:',
	'Type_created' => 'Artikel Typ Skapad Successfullt.',
	'Click_return_type_manager' => 'Klicka %sH�r%s f�r att �terg� till Typer Manager',

	'Edit_type' => 'Redigera Typ',
	'Edit_type_description' => 'H�r kan du redigera namnet p� typen',
	'Type_edited' => 'Artikel Typ Redigerad Successfullt.',

	'Type_delete_title' => 'Radera Artikel Typ',
	'Type_delete_desc' => 'H�r kan du �ndra typen p� de artiklar som har den typ du tar bort.',
	'Change_type' => '�ndra artikelns typ till',
	'Change_and_Delete' => '�ndra och Radera',
	'Type_deleted' => 'Artikel Typ Raderad Successfullt.',

	'Pre_text_name' => 'Artikel Inl�mnings Instruktioner',
	'Pre_text_header' => 'Artikel Inl�mnings Instruktions Huvud',
	'Pre_text_body' => 'Artikel Inl�mnings Instruktions Body',
	'Pre_text_explain' => 'Detta �r texten anvisningar som visas f�r anv�ndare p� toppen av inl�mnande forum.',

	'Show' => 'Visa',
	'Hide' => 'G�m',

	'Empty_fields' => 'V�nligen fyll i alla delar av formul�ret.',
	'Empty_fields_return' => 'Klicka %sH�r%s f�r att �terg� till formul�ret.',
	'Empty_category' => 'Du m�ste v�lja en kategori',
	'Empty_type' => 'Du m�ste v�lja en typ',
	'Empty_article_name' => 'Du m�ste fylla i artikelns namn',
	'Empty_article_desc' => 'Du m�ste fylla i artikelns beskrivning',

	'Read_full_article' => '>>L�s hela artikeln',
	'Comments' => 'Kommentarer',

	'No_add' => 'Du kan inte l�gga till en ny artikel',
	'No_edit' => 'Du kan inte redigera artikeln!',
	'Post_comments' => 'Posta din kommentar',

	'Category_sub' => 'Underkategorier',
	'Quick_stats' => 'Snabb Statistik',

// added

	'Edited_Article_info' => 'Artikel uppdaterad av ',
	'No_Articles' => 'Denna kategori �r tom!',
	'Not_authorized' => 'Tyv�rr, Du har inte beh�righet!',
	'TOC' => 'Inneh�ll',

// Rate
	'Votes_label' => 'Betygs�tt ',
	'Votes' => 'r�st(er)',
	'No_votes' => 'Inga r�ster',
	'Rate' => 'Betygs�tt Artikel',
	'ADD_RATING' => '[Betygs�tt Artikel]',
	'Rerror' => 'Tyv�rr, du har redan betygsatt denna artikel.',
	'Rateinfo' => 'Du h�ller p� att betygs�tta artikeln <i>{filename}</i>.<br />V�nligen v�lj ett betyg. 1 �r det v�rsta, 10 �r det b�sta.',
	'Rconf' => 'Du har gett <i>{filename}</i> ett betyg av {rate}.<br />Detta g�r att filens nya betyg �r {newrating}/10.',
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
	'Click_return_rate' => 'Klicka %sH�r%s f�r att �terg� till artikeln',

// Print version
	'Print_version' => 'Utskriftsbar version',

// Stats
	'Top_toprated' => 'Topp-Rankade Artiklar',
	'Top_most_popular' => 'Mest Popul�r',
	'Top_latest' => 'Senaste Artiklar',

// Votes check
	'Votes_check_ip' => 'Bekr�fta betyg - ip',
	'Votes_check_ip_explain' => 'Endast en r�st per IP-adress �r till�ten.',

	'Votes_check_userid' => 'Bekr�fta betyg - anv�ndare',
	'Votes_check_userid_explain' => 'Anv�ndare f�r enbart r�sta en g�ng.',

	'Article_pag' => 'Artikel sidnumrering',
	'Article_pag_explain' => 'Antalet artiklar som visas i en (stats) kategori innan sidnumrering.',

	'Comments_pag' => 'Kommentarer sidnumrering',
	'Comments_pag_explain' => 'Antalet kommentarer att visa f�r artikeln innan sidnumrering.',

	'News_sort' => 'Artikel sorterings metod',
	'News_sort_explain' => 'Definiera hur artiklar ska sorteras inom sin kategori.',

	'News_sort_par' => 'ASC eller DESC sortering',
	'News_sort_par_explain' => '',

// General strings from the news admin panel

	'News_settings' => 'KB Block Inst�llningar',
	'News_settings_short_explain' => 'Konfigurera en del alternativ f�r den fr�mre sidans nyheter.',
	'News_settings_explain' => '�ndra konfigurationen f�r KB Block. Denna panel l�ter dig extrahera vad kategori blocket kommer att visa, s� du kan skapa delsektions instanser av modulen.',

// Update result messages

	'News_updated_return_settings' => 'KB block konfigurationen uppdaterad successfullt.<br /><br />Klicka %sh�r%s f�r att �terg� till huvud sidan.', // %s's for URI params - DO NOT REMOVE
	'News_update_error' => 'Kunde inte uppdatera KB block konfigurationen.<br /><br />Denna modell �r avsedd f�r MySQL s� v�nligen kontakta f�rfattaren om du har problem. Om du kan erbjuda en �vers�ttning av SQL i andra databas-format, v�nligen skicka dem till:<br />',

// Custom Field
	'Fieldselecttitle' => 'V�lj vad du ska g�ra',
	'Afield' => 'Anpassat F�lt: L�gg Till',
	'Efield' => 'Anpassat F�lt: Redigera',
	'Dfield' => 'Anpassat F�lt: Radera',
	'Mfieldtitle' => 'Anpassat F�lt',
	'Afieldtitle' => 'L�gg Till F�lt',
	'Efieldtitle' => 'Redigera F�lt',
	'Dfieldtitle' => 'Radera F�lt',
	'Fieldexplain' => 'Du kan anv�nda de anpassade f�ltens management f�r att l�gga till, redigera och ta bort anpassade f�lt. Du kan anv�nda anpassade f�lt f�r att l�gga till mer information om en artikel.',
	'Fieldname' => 'F�lt Namn',
	'Fieldnameinfo' => 'Detta �r namnet p� f�ltet, till exempel \'Fil Storlek\'',
	'Fielddesc' => 'F�lt Beskrivning',
	'Fielddescinfo' => 'Detta �r en beskrivning av f�ltet, till exempel \'Fil Storlek i Megabytes\'',
	'Fieldadded' => 'Det anpassade f�ltet har blivit successfullt tillagt',
	'Fieldedited' => 'Det anpassade f�ltet du valde har blivit successfullt redigerat',
	'Dfielderror' => 'Du valde inte n�got f�lt att radera',
	'Fieldsdel' => 'De anpassade f�lten du valde har blivit successfullt raderade',

	'Field_data' => 'Alternativ',
	'Field_data_info' => 'Ange alternativ som anv�ndaren kan v�lja mellan. Separera varje alternativ med en ny-linje (transport retur).',
	'Field_regex' => 'Vanligt Uttryck',
	'Field_regex_info' => 'Du kan kr�va att inmatningsf�ltet ska matcha ett vanligt uttryck %s(PCRE)%s.',
	'Field_order' => 'Visa Order',

//Fields Types

	'Field_Input' => 'Singel-Linje Text Box',
	'Field_Textarea' => 'Flera-Linjer Text Box',
	'Field_Radio' => 'Singel-Urvals Knappar',
	'Field_Select' => 'Singel-Urvals Meny',
	'Field_Select_multiple' => 'Flera-Urvals Meny',
	'Field_Checkbox' => 'Flera-Urvals Checkbox',

	'Click_return' => 'Klicka %sH�r%s f�r att �terg� till f�reg�ende sida',

// added
	'Cat_all' => 'Alla',

	'L_Pages' => 'Sidor',
	'L_Pages_explain' => 'Anv�nd [pages] kommandot f�r att dela upp artikeln i sidor',
	'L_Toc' => 'Table of contents (TOC)',
	'L_Toc_explain' => 'Anv�nd [toc] kommandot f�r att l�gga post i TOC',
	'L_Abstract' => 'Abstrakt',
	'L_Abstract_explain' => 'Anv�nd [abstract]...[/abstract] villkoret f�r att infoga ett abstrakt',

	'L_Title_Format' => 'Titel',
	'L_Title_Format_explain' => 'Anv�nd [title]...[/title] villkoret f�r att infoga en huvudtitel',

	'L_Subtitle_Format' => 'Underrubrik',
	'L_Subtitle_Format_explain' => 'Anv�nd [subtitle]...[/subtitle] villkoret f�r att infoga en underrubrik',

	'L_Subsubtitle_Format' => 'Underunderrubrik',
	'L_Subsubtitle_Format' => 'Anv�nd [subsubtitle]...[/subsubtitle] villkoret f�r att infoga en liten rubrik',

	'L_Options' => 'Alternativ:',
	'L_Formatting' => 'Formatering:',

	'Default_article_id' => 'St�ll in standard artikel f�r artikel tittaren',

// Added for v. 2.0
	'KB_comment_prefix' => '[KB] ',

	'Wysiwyg' => 'Anv�nd wysiwyg editor',
	'Wysiwyg_explain' => 'Om aktiverad, standarden f�r BBKod/html/smileys ing�ende dialog skall ers�ttas med en wysiwyg editor.',

	'Wysiwyg_path' => 'S�kv�g till wysiwyg software',
	'Wysiwyg_path_explain' => 'Detta �r s�kv�gen (fr�n mxBB/phpBB root) till wysiwyg software mappen, t.ex. \'modules/\' om du har laddat upp till exempel tinemce i modules/tinymce.',

	'Formatting_fixup' => 'Fixa upp formatering',
	'Formatting_fixup_explain' => 'Om aktiverad, artikelns text omformaterad: ord-omslagning, url trunkerar, bild storleks�ndring, vissa BBKoder omformaterade etc',

	'Addtional_field' => 'Mer information (valfria)',

	'No_cat_comments_forum_id' => 'Kommentarer �r aktiverad, men du har inte angivit m�let icyphoenix forum kategori i KB ACP - Kategorier',

// Quick Nav
	'Quick_nav' => 'Snabb KB Navigering',
	'Quick_jump' => 'G�',

	'Categories' => 'Kategorier',
	'Subcategory' => 'Underkategorier',
	)
);

?>