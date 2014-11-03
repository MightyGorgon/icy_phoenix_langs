<?php
/**
*
* @package Icy Phoenix
* @version $Id$
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
	'KB_title' => 'Kunskapsdatabas',
	'Article' => 'Artikel',
	'Category' => 'Kategori',
	'Article_description' => 'Beskrivning',
	'Article_type' => 'Typ',
	'Article_keywords' => 'Nyckelord',
	'Articles' => 'Artiklar',
	'Add_article' => 'Lägg till artikel',
	'Click_cat_to_add' => 'Klicka på kategori för att lägga till artikel',
	'KB_Home' => 'KB Hem',
	'No_articles' => 'Inga artiklar',
	'Article_title' => 'Artikel namn',
	'Article_text' => 'Artikel text',
	'Add_article' => 'Skicka artikel',
	'Read_article' => 'Läser artikel',
	'Article_not_exsist' => 'Artikel existerar inte',
	'Category_not_exsist' => 'Kategori existerar inte',

	'Edit' => 'Edit',

	'Article_submitted_Approve' => 'Artikel skickats framgångsrikt.<br />En administratör kommer att granska din artikel och besluta om att låta användare se den eller inte.',
	'Article_submitted' => 'Artikel skickats framgångsrikt.',
	'Click_return_kb' => 'Klicka %sHär%s för att återgå till Kunskapsdatabas',
	'Click_return_article' => 'Klicka %sHär%s för att återgå till Artikel',

	'Article_Edited_Approve' => 'Artikel redigerad framgångsrikt.<br />Det måste godkännas igen innan användarna kan se den.',
	'Article_Edited' => 'Artikel redigerad framgångsrikt.',
	'Edit_article' => 'Redigera artikel',

	'KB_title' => 'Kunskapsdatabas',
	'KB_art_description' => 'Godkänn artiklar så att användarna kan se dem, eller du kan ta bort artiklar.',
	'Art_man' => 'Artikel hantering',
	'Cat_man' => 'Kategori hantering',
	'KB_cat_description' => 'Lägg till, redigera eller ta bort kategorier i Kunskapsdatabasen',
	'Art_action' => 'Åtgärd',

//approve
	'Art_edit' => 'Redigerade artiklar',
	'Art_not_approved' => 'Ej godkänd',
	'Art_approved' => 'Godkänd',
	'Approve' => 'Godkänn',
	'Un_approve' => 'Ej godkänd',
	'Article_approved' => 'Artikeln är nu godkänd.',
	'Article_unapproved' => 'Artikel är nu icke godkänd.',

//delete
	'Delete' => 'Radera',
	'Confirm_art_delete' => 'Är du säker på att du vill radera den här artikeln?',
	'Confirm_art_delete_yes' => '%sJa, Jag vill ta bort denna artikel%s',
	'Confirm_art_delete_no' => '%sNej, Jag vill inte ta bort denna artikel%s',
	'Article_deleted' => 'Artikel raderats successfullt.',

	'Click_return_article_manager' => 'Klicka %sHär%s för att återgå till artikel hantering',

//cat manager
	'Create_cat' => 'Skapa ny kategori:',
	'Create' => 'Skapa',
	'Cat_settings' => 'Kategori inställningar',
	'Create_description' => 'Ändra namnet på kategorin och lägg till en beskrivning till den nya kategorin.',
	'Cat_created' => 'Kategori skapad successfullt.',
	'Click_return_cat_manager' => 'Klicka %sHär%s för att återgå till kategori hantering',
	'Edit_description' => 'Redigera inställningarna för din kategori',
	'Edit_cat' => 'Redigera kategori',
	'Cat_edited' => 'Kategori redigerad successfullt.',
	'Parent' => 'Förälder',

	'Cat_delete_title' => 'Ta bort kategori',
	'Cat_delete_desc' => 'Ta bort en kategori och flytta alla artiklarna i den till en ny kategori',
	'Cat_deleted' => 'Kategori raderad successfullt.',
	'Delete_all_articles' => 'Radera artiklarna',

//configuration
	'KB_config' => 'KB Konfiguration',
	'Art_types' => 'Artikel typer',
	'KB_config_title' => 'Kunskapsdatabas Konfiguration',
	'KB_config_explain' => 'Ändra konfigurationen på din Kunskapsdatabas',
	'New_title' => 'Tillåt nya artiklar',
	'New_explain' => 'Låt användarna posta nya artiklar i din Kunskapsdatabas',
	'Edit_name' => 'Tillåt redigering',
	'Edit_explain' => 'Tillåt användare att redigera sina artiklar efter att de har postat dem',
	'Notify_name' => 'Meddela mig via',
	'Notify_explain' => 'Välj vilken väg att ta emot meddelanden om att nya artiklar har postats',
	'PM' => 'PM',
	'Click_return_kb_config' => 'Klicka %sHär%s för att återgå till Kunskapsdatabas Konfigurationen',
	'Admin_id_name' => 'Admin ID',
	'Admin_id_explain' => 'Detta är användarens id-nummer som PM anmälningar kommer att skickas till.',
	'Approve_new_name' => 'Godkänn nya artiklar',
	'Approve_new_explain' => 'Ändra huruvida <b />nya</b /> artiklar måste godkännas eller inte',
	'Approve_edit_name' => 'Godkänna redigerade artiklar',
	'Approve_edit_explain' => 'Ändra huruvida <b />redigerade</b /> artiklar måste godkännas eller inte',
	'Allow_anon_name' => 'Tillåt anonym postning av artiklarna',
	'Allow_anon_explain' => 'Ändra huruvida <b />nya</b /> artiklar kan lämnas in anonymt',
	'Del_topic' => 'Radera ämne',
	'Del_topic_explain' => 'När du tar bort en artikel, vill du dess kommentars ämne ska tas bort också?',

	'Use_comments' => 'Kommentarer',
	'Use_comments_explain' => 'Aktivera kommentarer för artiklar som skall införas i icyphoenix forum',
	'Use_ratings' => 'Betyg',
	'Use_ratings_explain' => 'Aktivera betyg för artiklar',

	'Forum_id' => 'Forum ID',
	'Forum_id_explain' => 'Detta är det forum som artiklars kommentarer kommer att behållas i',


// Permissions
	'KB_Auth_Title' => 'KB Behörigheter',
	'KB_Auth_Explain' => 'Välj vilken användargrupp(er) som kan vara moderatorer för varje KB kategori eller bara har privat tillgång',
	'Select_a_Category' => 'Välj en kategori',
	'Look_up_Category' => 'Lås upp kategori',
	'KB_Auth_successfully' => 'Auth har uppdaterats successfullt',
	'Click_return_KB_auth' => 'Klicka %sHär%s för att återgå till KB Behörigheterna',

	'Upload' => 'Ladda upp',
	'Rate' => 'Betyg',
	'Comment' => 'Kommentera',
	'Approval' => 'Godkännande',
	'Approval_edit' => 'Godkännande redigera',

	'Allow_rating' => 'Tillåt betyg',
	'Allow_rating_explain' => 'Användarna får betygsätta artiklar.',

	'Allow_anonymos_rating' => 'Tillåt anonyma betyg',
	'Allow_anonymos_rating_explain' => 'Om betyg är aktiverat, tillåta anonyma användare att lägga till betyg till dina artiklar',

	'KB_config_updated' => 'Kunskapsdatabas Konfiguration Uppdaterad Successfullt.',

	'KB_notify_subject_new' => 'Ny artikel!',
	'KB_notify_subject_edited' => 'Redigerad artikel!',
	'KB_notify_subject_approved' => 'Godkänd artikel!',
	'KB_notify_subject_unapproved' => 'Ej godkänd artikel!',
	'KB_notify_body' => 'En artikel har lämnats in eller ändrats:

',

	'Category_Permissions' => 'Kategori behörigheter',
	'Category_Title' => 'Kategori titel',
	'Category_Desc' => 'Kategori beskrivning',
	'View_level' => 'Visa nivå',
	'Upload_level' => 'Ladda upp nivå',
	'Rate_level' => 'Betygsätt nivå',
	'Comment_level' => 'Kommentera nivå',
	'Edit_level' => ' Redigera nivå',
	'Delete_level' => 'Radera nivå',
	'Approval_level' => 'Godkännande nivå',
	'Approval_edit_level' => 'Godkännande redigerings nivå',

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
	'KB_Rules_post_can' => 'Du <b>kan</b> posta nya artiklar',
	'KB_Rules_post_cannot' => 'Du <b>kan ej</b> posta nya artiklar',
	'KB_Rules_comment_can' => 'Du <b>kan</b> kommentera artiklar',
	'KB_Rules_comment_cannot' => 'Du <b>kan ej</b> kommentera artiklar',
	'KB_Rules_edit_can' => 'Du <b>kan</b> redigera dina artiklar',
	'KB_Rules_edit_cannot' => 'Du <b>kan ej</b> redigera dina artiklar',
	'KB_Rules_delete_can' => 'Du <b>kan</b> radera dina artiklar',
	'KB_Rules_delete_cannot' => 'Du <b>kan ej</b> radera dina artiklar',
	'KB_Rules_rate_can' => 'Du <b>kan</b> betygsätta artiklar',
	'KB_Rules_rate_cannot' => 'Du <b>kan ej</b> betygsätta artiklar',
	'KB_Rules_approval_can' => 'Artilar <b>behöver ej</b> godkännande',
	'KB_Rules_approval_cannot' => 'Artiklar <b>behöver</b> godkännande',
	'KB_Rules_approval_edit_can' => 'Artikel redigering <b>behöver ej</b> godkännande',
	'KB_Rules_approval_edit_cannot' => 'Artikel redigering <b>behöver</b> godkännande',
	'KB_Rules_moderate' => 'Du <b>kan</b> %smoderera denna kategori%s', // %s replaced by a href links, do not remove!
	'KB_Rules_moderate_can' => 'Du <b>kan</b> moderera denna kategori', // %s replaced by a href links, do not remove!

	'Comments_show' => 'Visa artikel kommentarer.',
	'Comments_show_explain' => '- visar också kommentarer på artikelsidan',
	'Comments_show_title' => 'Användarkommentarer',

	'Mod_group' => 'KB Moderator Grupp',
	'Mod_group_explain' => '- med KB Admin behörigheter!',

	'Bump_post' => 'Stöta artikel inlägget',
	'Bump_post_explain' => 'När du redigerar en artikel, är ett svar postat i artikel ämnets anmälan av den uppdaterade artikeln.',

	'Stats_list' => 'Visa KB Statistik',
	'Stats_list_explain' => 'Visa KB statistik i sidhuvudet.',

	'Header_banner' => 'Visa Topp Logotyp',
	'Header_banner_explain' => 'Visa KB logotyp i sidhuvudet.',

	'Comment_info' => 'Kommentars inställningar',
	'Rating_info' => 'Betygsättnings inställningar',


//types
	'Types_man' => 'Typer Hantering',
	'KB_types_description' => 'Lägg till, ta bort och redigera de olika artikel typerna',
	'Create_type' => 'Skapa ny artikel typ:',
	'Type_created' => 'Artikel typ skapad successfullt.',
	'Click_return_type_manager' => 'Klicka %sHär%s för att återgå till typ hanteringen',

	'Edit_type' => 'Redigera Typ',
	'Edit_type_description' => 'Här kan du redigera namnet på typen',
	'Type_edited' => 'Artikel typ redigerad successfullt.',

	'Type_delete_title' => 'Radera Artikel Typ',
	'Type_delete_desc' => 'Ändra vad artikel typen är för de artiklar som har den typ du vill ta bort.',
	'Change_type' => 'Ändra artikelns typ',
	'Change_and_Delete' => 'Ändra och Radera',
	'Type_deleted' => 'Artikel typ raderad successfullt.',

	'Pre_text_name' => 'Artikel inlämnings instruktioner',
	'Pre_text_header' => 'Artikel inlämnings instruktioner Header',
	'Pre_text_body' => 'Artikel inlämnings instruktioner Body',
	'Pre_text_explain' => 'Detta är text instruktioner som visas för användare på toppen av inlämnings forumet.',

	'Show' => 'Visa',
	'Hide' => 'Dölj',

	'Empty_fields' => 'Fyll i alla delar av formuläret.',
	'Empty_fields_return' => 'Klicka %sHär%s för att återgå till formuläret.',
	'Empty_category' => 'Du måste välja en kategori',
	'Empty_type' => 'Du måste välja en typ',
	'Empty_article_name' => 'Du måste fylla i artikelnamnet',
	'Empty_article_desc' => 'Du måste fylla i artikelbeskrivningen',

	'Read_full_article' => '&#8226; Läs hela artikeln',
	'Comments' => 'Kommentarer',

	'No_add' => 'Du kan inte lägga till en ny artikel',
	'No_edit' => 'Du kan inte redigera denna artikel!',
	'Post_comments' => 'Skicka dina kommentarer',

	'Category_sub' => 'Underkategorier',
	'Quick_stats' => 'Snabb Stats',

// added

	'Edited_Article_info' => 'Artikel uppdaterad av ',
	'No_Articles' => 'Denna kategori är tom!',
	'Not_authorized' => 'Tyvärr har du inte behörighet!',
	'TOC' => 'Innehåll',

// Rate
	'Votes_label' => 'Betyg ',
	'Votes' => 'röst(er)',
	'No_votes' => 'Inga röster',
	'Rate' => 'Betygsätt artikel',
	'ADD_RATING' => '[Betygsätt Artikel]',
	'Rerror' => 'Tyvärr, du har redan betygsatt den här artikeln.',
	'Rateinfo' => 'Du håller på att betygsätta artikeln <i>{filename}</i>.<br />Välj ett betyg. 1 är det sämsta, 10 är den bästa.',
	'Rconf' => 'Du har gett <i>{filename}</i> ett betyg på {rate}.<br />Detta gör att filerna får nya betyg {newrating}/10.',
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
	'Click_return_rate' => 'Klicka %sHär%s för att återgå till',

// Print version
	'Print_version' => 'Utskriftsvänlig version',

// Stats
	'Top_toprated' => 'De högst rankade artiklarna',
	'Top_most_popular' => 'Mest populära',
	'Top_latest' => 'Senaste artiklarna',

// Votes check
	'Votes_check_ip' => 'Validera betyg - ip',
	'Votes_check_ip_explain' => 'Endast en röst per IP-adress är tillåten.',

	'Votes_check_userid' => 'Validera betyg - användare',
	'Votes_check_userid_explain' => 'Användare kan bara rösta en gång.',

	'Article_pag' => 'Artikel paginering',
	'Article_pag_explain' => 'Antalet artiklar som visar på en (stats) kategori innan sidnumrering.',

	'Comments_pag' => 'Kommentars paginering',
	'Comments_pag_explain' => 'Antalet kommentarer att visa för artikeln innan sidnumrering.',

	'News_sort' => 'Artikel sorteringssätt',
	'News_sort_explain' => 'Definiera hur artiklarna är sorterade inom sin kategori.',

	'News_sort_par' => 'ASC eller DESC sortering',
	'News_sort_par_explain' => '',

// General strings from the news admin panel

	'News_settings' => 'KB Block Inställningar',
	'News_settings_short_explain' => 'Konfigurera några alternativ för förstasidesnyhet.',
	'News_settings_explain' => 'Redigera konfigurationen för KB Block. Denna panel tillåter dig att extrahera vilka kategorier som ska visas på blocket, det du skapar kommer i under-instanser av modulen.',

// Update result messages

	'News_updated_return_settings' => 'KB block konfiguration uppdaterad successfullt.<br /><br />Klicka %sHäre%s för att återgå till huvud sidan.', // %s's for URI params - DO NOT REMOVE
	'News_update_error' => 'Kunde inte uppdatera KB block konfiguration.<br /><br />Denna mod är utformad för MySQL så vänligen kontakta författaren om du har problem. Om du kan erbjuda en översättning av SQL i andra databasformat, skicka dem till:<br />',

// Custom Field
	'Fieldselecttitle' => 'Välj vad som ska göra',
	'Afield' => 'Anpassat Fält: Lägg till',
	'Efield' => 'Anpassat Fält: Redigera',
	'Dfield' => 'Anpassat Fält: Radera',
	'Mfieldtitle' => 'Anpassat fält',
	'Afieldtitle' => 'Lägg till fält',
	'Efieldtitle' => 'Redigera fält',
	'Dfieldtitle' => 'Radera fält',
	'Fieldexplain' => 'Du kan använda anpassade fält hanteringsavsnittet för att lägga till, redigera och radera anpassade fält. Du kan använda anpassade fält för att lägga till mer information om en artikel.',
	'Fieldname' => 'Fält namn',
	'Fieldnameinfo' => 'Detta är namnet på fältet, till exempel \'Filstorlek\'',
	'Fielddesc' => 'Fält beskrivning',
	'Fielddescinfo' => 'Detta är en beskrivning av fältet, t.ex. \'Filstorlek i Megabytes\'',
	'Fieldadded' => 'Den anpassade fältet har lagts till successfullt',
	'Fieldedited' => 'Den anpassade fältet du har valt har blivit successfullt redigerat',
	'Dfielderror' => 'Du har inte valt några fält att radera',
	'Fieldsdel' => 'Den anpassade fältet du har valt har blivit successfullt raderat',

	'Field_data' => 'Alternativ',
	'Field_data_info' => 'Ange de alternativ som användaren kan välja mellan. Separera varje alternativ med en ny linje (transport retur).',
	'Field_regex' => 'Vanligt uttryck',
	'Field_regex_info' => 'Du kan behöva inmatningsfältet för att matcha ett reguljärt uttryck %s(PCRE)%s.',
	'Field_order' => 'Visningsordning',

//Fields Types

	'Field_Input' => 'Singel-Linje Text Box',
	'Field_Textarea' => 'Flerfaldig-Linje Text Box',
	'Field_Radio' => 'Singel-Urvals Radio Knapp',
	'Field_Select' => 'Singel-Urvals Meny',
	'Field_Select_multiple' => 'Flerfaldig-Urvals Meny',
	'Field_Checkbox' => 'Flerfaldig-Urvals Checkbox',

	'Click_return' => 'Klicka %sHär%s för att återgå till föregående sida',

// added
	'Cat_all' => 'Alla',

	'L_Pages' => 'Sidor',
	'L_Pages_explain' => 'Använd [pages] kommando för att dela upp artikeln i sidor',
	'L_Toc' => 'Innehållsförteckning (TOC)',
	'L_Toc_explain' => 'Använd [toc] kommandot för att lägga till post i TOC',
	'L_Abstract' => 'Abstrakt',
	'L_Abstract_explain' => 'Använd [abstract]...[/abstract] omgivning för att infoga en abstrakt',

	'L_Title_Format' => 'Titel',
	'L_Title_Format_explain' => 'Använd [title]...[/title] omgivning för att infoga en huvudtitel',

	'L_Subtitle_Format' => 'Subtitle',
	'L_Subtitle_Format_explain' => 'Använd [subtitle]...[/subtitle] omgivning för att infoga en undertitel',

	'L_Subsubtitle_Format' => 'Subsubtitle',
	'L_Subsubtitle_Format' => 'Använd [subsubtitle]...[/subsubtitle] omgivning för att sätta in en liten header',

	'L_Options' => 'Alternativ:',
	'L_Formatting' => 'Formatering:',

	'Default_article_id' => 'Ange standardartikel, för artikel visning',

// Added for v. 2.0
	'KB_comment_prefix' => '[KB] ',

	'Wysiwyg' => 'Använd wysiwyg redigeraren',
	'Wysiwyg_explain' => 'Om aktiverad, standard BBCode/html/ smileys ingångs dialog ersätts av en WYSIWYG redigerare.',

	'Wysiwyg_path' => 'Sökväg till wysiwyg mjukvara',
	'Wysiwyg_path_explain' => 'Detta är sökvägen (från mxBB/ip root) till mappen wysiwyg programvara, t.ex. \'modules/\' om du har laddat upp till exempel tinemce i modules/tinymce.',

	'Formatting_fixup' => 'Fixa upp formatering',
	'Formatting_fixup_explain' => 'Om aktiverad, är artikeltexten omformaterad: ord-omslag, url korta, img storleksändring och vissa BBKoder omformaterade etc',

	'Addtional_field' => 'Mer information (valfritt)',

	'No_cat_comments_forum_id' => 'Kommentarer är aktiverad men du har inte angett målet icyphoenix forumets kategori KB ACP - Kategorier',

// Quick Nav
	'Quick_nav' => 'Snabb KB Navigering',
	'Quick_jump' => 'Gå',

	'Categories' => 'Kategorier',
	'Subcategory' => 'Underkategori',
	)
);

?>