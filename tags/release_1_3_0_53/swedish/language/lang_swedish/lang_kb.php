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
	'Add_article' => 'Lägg Till Artikel',
	'Click_cat_to_add' => 'Klicka på Kategori för att lägga till Artikel',
	'KB_Home' => 'KB Hem',
	'No_articles' => 'Inga Artiklar',
	'Article_title' => 'Artikel Namn',
	'Article_text' => 'Artikel text',
	'Add_article' => 'Skicka Artikel',
	'Read_article' => 'Läser Artikel',
	'Article_not_exsist' => 'Artikel finns inte',
	'Category_not_exsist' => 'Kategori finns intet',

	'Edit' => 'Redigera',

	'Article_submitted_Approve' => 'Artikel Inskickad Successfullt.<br />En administratör kommer att granska din artikel och besluta om att låta användarna se den eller inte.',
	'Article_submitted' => 'Artikel Inskickad Successfullt.',
	'Click_return_kb' => 'Klicka %sHär%s för att återgå till Kunskaps Basen',
	'Click_return_article' => 'Klicka %sHär%s för att återgå till Artikeln',

	'Article_Edited_Approve' => 'Artikel Redigerad Successfullt.<br />Den måste godkännas på nytt innan användaren kan granska den.',
	'Article_Edited' => 'Artikel Redigerad Successfullt.',
	'Edit_article' => 'Redigera Artikel',

	'KB_title' => 'Kunskaps Bas',
	'KB_art_description' => 'Godkänn artiklar så att användarna kan titta på dem eller så kan du radera artiklar.',
	'Art_man' => 'Artikel Manager',
	'Cat_man' => 'Kategori Manager',
	'KB_cat_description' => 'Lägg till, redigera eller ta bort kategorier i Kunskaps Basen',
	'Art_action' => 'Åtgärd',

//approve
	'Art_edit' => 'Redigerade Artiklar',
	'Art_not_approved' => 'Ej Godkända',
	'Art_approved' => 'Ej Godkända',
	'Approve' => 'Godkänn',
	'Un_approve' => 'Godkänn Ej',
	'Article_approved' => 'Artikeln är nu Godkänd.',
	'Article_unapproved' => 'Artikeln är nu Inte Godkänd.',

//delete
	'Delete' => 'Radera',
	'Confirm_art_delete' => 'Vill du verkligen ta bort den här artikeln?',
	'Confirm_art_delete_yes' => '%sJa, Jag vill ta bort den här artikeln%s',
	'Confirm_art_delete_no' => '%sNej, Jag vill inte ta bort den här artikeln%s',
	'Article_deleted' => 'Artikel Raderad Successfullt.',

	'Click_return_article_manager' => 'Klicka %sHär%s för att återgå till Artikel Manager',

//cat manager
	'Create_cat' => 'Skapa Ny Kategori:',
	'Create' => 'Skapa',
	'Cat_settings' => 'Kategori Inställningar',
	'Create_description' => 'Ändra namnet på kategorin och lägga till en beskrivning för den nya kategorin.',
	'Cat_created' => 'Kategori Skapad Successfullt.',
	'Click_return_cat_manager' => 'Klicka %sHär%s för att återgå till Kategori Manager',
	'Edit_description' => 'Ändra inställningarna på din kategori',
	'Edit_cat' => 'Redigera Kategori',
	'Cat_edited' => 'Kategori Redigerad Successfullt.',
	'Parent' => 'Förälder',

	'Cat_delete_title' => 'Radera Kategori',
	'Cat_delete_desc' => 'Radera en kategori och flytta alla artiklarna i den till en ny kategori',
	'Cat_deleted' => 'Kategori Raderad Successfullt.',
	'Delete_all_articles' => 'Radera Artiklar',

//configuration
	'KB_config' => 'KB Konfiguration',
	'Art_types' => 'Artikel Typer',
	'KB_config_title' => 'Kunskaps Bas Konfiguration',
	'KB_config_explain' => 'Ändra konfigurationen på din Kunskaps Bas',
	'New_title' => 'Tillåt Nya Artiklar',
	'New_explain' => 'Låt användarna lägga upp nya artiklar i din Kunskaps Bas',
	'Edit_name' => 'Tillåt Redigering',
	'Edit_explain' => 'Tillåt användare att ändra sina artiklar efter utstationeringen av dem',
	'Notify_name' => 'Meddela mig om',
	'Notify_explain' => 'Välj vilket sätt att ta emot meddelanden på om att nya artiklar har lagts upp',
	'PM' => 'PM',
	'Click_return_kb_config' => 'Klicka %sHär%s för att återgå till Kunskaps Bas Konfigurationen',
	'Admin_id_name' => 'Admin ID',
	'Admin_id_explain' => 'Detta är det användar-ID nummer som PM anmälningar kommer att skickas till.',
	'Approve_new_name' => 'Godkänn nya Artiklar',
	'Approve_new_explain' => 'Ändra om <b />nya</b /> artiklar måste godkännas eller inte',
	'Approve_edit_name' => 'Godkänn Redigerada Artiklar',
	'Approve_edit_explain' => 'Ändra om <b />redigerada</b /> artiklar måste godkännas eller inte',
	'Allow_anon_name' => 'Tillåt anonyma postningar av artiklarna',
	'Allow_anon_explain' => 'Ändra om <b />nya</b /> artiklar kan lämnas in anonymt',
	'Del_topic' => 'Radera Ämne',
	'Del_topic_explain' => 'När du tar bort en artikel, vill du även att dess kommentars ämne ska tas bort också?',

	'Use_comments' => 'Kommentarer',
	'Use_comments_explain' => 'Aktivera kommentarer på artiklar, som skall införas i icyphoenix forum',
	'Use_ratings' => 'Värderingar',
	'Use_ratings_explain' => 'Aktivera värdering för artiklar',

	'Forum_id' => 'Forum ID',
	'Forum_id_explain' => 'Detta är det forum som artikel kommentarerna kommer att hållas i',


// Permissions
	'KB_Auth_Title' => 'KB Rättigheterna',
	'KB_Auth_Explain' => 'Välj vilken användargrupp (er) som kan vara moderatorer för varje KB kategori eller bara ha privat tillgång',
	'Select_a_Category' => 'Välj en Kategori',
	'Look_up_Category' => 'Lås upp Kategori',
	'KB_Auth_successfully' => 'Auth har uppdaterats successfullt',
	'Click_return_KB_auth' => 'Klicka %sHär%s för att återgå till KB Rättigheterna',

	'Upload' => 'Ladda Upp',
	'Rate' => 'Betygsätt',
	'Comment' => 'Kommentar',
	'Approval' => 'Godkännande',
	'Approval_edit' => 'Godkännande Redigera',

	'Allow_rating' => 'Tillåt betygsättning',
	'Allow_rating_explain' => 'Användarna är tillåtna att betygsätta artiklar.',

	'Allow_anonymos_rating' => 'Tillåt anonyma betygsättningar',
	'Allow_anonymos_rating_explain' => 'Om betygsättning är aktiverad, tillåta anonyma användare att lägga till betyg till dina artiklar',

	'KB_config_updated' => 'Kunskaps Bas Konfiguration Uppdaterad Successfullt.',

	'KB_notify_subject_new' => 'Ny Artikel!',
	'KB_notify_subject_edited' => 'Redigerad Artikel!',
	'KB_notify_subject_approved' => 'Godkänd Artikel!',
	'KB_notify_subject_unapproved' => 'Icke Godkänd Artikel!',
	'KB_notify_body' => 'En artikel har lämnats in eller ändrats:

',

	'Category_Permissions' => 'Kategori Behörigheter',
	'Category_Title' => 'Kategori Titel',
	'Category_Desc' => 'Kategori Beskrivning',
	'View_level' => 'Visa Nivå',
	'Upload_level' => 'Ladda Upp Nivå',
	'Rate_level' => 'Betygsätt Nivå',
	'Comment_level' => 'Kommentar Nivå',
	'Edit_level' => ' Redigera Nivå',
	'Delete_level' => 'Radera Nivå',
	'Approval_level' => 'Godkännande Nivå',
	'Approval_edit_level' => 'Godkännande Redigera Nivå',

/*
	'KB_Rules_post_can' => 'Du <b>kan</b> posta nya artiklar i denna kategori',
	'KB_Rules_post_cannot' => 'Du <b>kan ej</b> posta nya artiklar i denna kategori',
	'KB_Rules_comment_can' => 'Du <b>kan</b> kommentera artiklar i denna kategori',
	'KB_Rules_comment_cannot' => 'Du <b>kan ej</b> kommentera artiklar i denna kategori',
	'KB_Rules_edit_can' => 'Du <b>kan</b> redigera dina artiklar i denna kategori',
	'KB_Rules_edit_cannot' => 'Du <b>kan ej</b> redigera dina artiklar i denna kategori',
	'KB_Rules_delete_can' => 'Du <b>kan</b> radera dina artiklar i denna kategori',
	'KB_Rules_delete_cannot' => 'Du <b>kan ej</b> radera dina artiklar i denna kategori',
	'KB_Rules_rate_can' => 'Du <b>kan</b> värdera artiklar i denna kategori',
	'KB_Rules_rate_cannot' => 'Du <b>kan ej</b> värdera artiklar i denna kategori',
	'KB_Rules_approval_can' => 'Artiklar <b>behöver inte</b> godkännas i denna kategori',
	'KB_Rules_approval_cannot' => 'Artiklar <b>behöver</b> godkännas i denna kategori',
	'KB_Rules_approval_edit_can' => 'Artikel redigering <b>behöver ej</b> godkännas i denna kategori',
	'KB_Rules_approval_edit_cannot' => 'Artikel redigering <b>behöver</b> godkännas i denna kategori',
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
	'KB_Rules_approval_can' => 'Artiklar <b>behöver inte</b> godkännas',
	'KB_Rules_approval_cannot' => 'Artiklar <b>behöver</b> godkännas',
	'KB_Rules_approval_edit_can' => 'Artikel redigering <b>behöver inte</b> godkännas',
	'KB_Rules_approval_edit_cannot' => 'Artikel redigering <b>behöver</b> godkännas',
	'KB_Rules_moderate' => 'Du <b>kan</b> %smoderera denna kategori%s', // %s replaced by a href links, do not remove!
	'KB_Rules_moderate_can' => 'Du <b>kan</b> moderera denna kategori', // %s replaced by a href links, do not remove!

	'Comments_show' => 'Visa artikel kommentarer.',
	'Comments_show_explain' => '- visar även kommentarer på artikel sidan',
	'Comments_show_title' => 'Användare kommentarer',

	'Mod_group' => 'KB Moderator Grupp',
	'Mod_group_explain' => '- med KB Admin rättigheter!',

	'Bump_post' => 'Skumpande artikel post',
	'Bump_post_explain' => 'När du redigerar en artikel, redovisas ett svar i artikel ämnet meddelas den uppdaterade artikeln.',

	'Stats_list' => 'Visa KB Statistik',
	'Stats_list_explain' => 'Visa KB statistik i sidhuvudet.',

	'Header_banner' => 'Visa Topp Logotyp',
	'Header_banner_explain' => 'Visa KB logotyp i sidhuvudet.',

	'Comment_info' => 'Kommentarer inställningar',
	'Rating_info' => 'Betygs inställningar',


//types
	'Types_man' => 'Typer Manager',
	'KB_types_description' => 'Lägg till, ta bort och redigera de olika typer av artiklar',
	'Create_type' => 'Skapa ny Artikel Typ:',
	'Type_created' => 'Artikel Typ Skapad Successfullt.',
	'Click_return_type_manager' => 'Klicka %sHär%s för att återgå till Typer Manager',

	'Edit_type' => 'Redigera Typ',
	'Edit_type_description' => 'Här kan du redigera namnet på typen',
	'Type_edited' => 'Artikel Typ Redigerad Successfullt.',

	'Type_delete_title' => 'Radera Artikel Typ',
	'Type_delete_desc' => 'Här kan du ändra typen på de artiklar som har den typ du tar bort.',
	'Change_type' => 'Ändra artikelns typ till',
	'Change_and_Delete' => 'Ändra och Radera',
	'Type_deleted' => 'Artikel Typ Raderad Successfullt.',

	'Pre_text_name' => 'Artikel Inlämnings Instruktioner',
	'Pre_text_header' => 'Artikel Inlämnings Instruktions Huvud',
	'Pre_text_body' => 'Artikel Inlämnings Instruktions Body',
	'Pre_text_explain' => 'Detta är texten anvisningar som visas för användare på toppen av inlämnande forum.',

	'Show' => 'Visa',
	'Hide' => 'Göm',

	'Empty_fields' => 'Vänligen fyll i alla delar av formuläret.',
	'Empty_fields_return' => 'Klicka %sHär%s för att återgå till formuläret.',
	'Empty_category' => 'Du måste välja en kategori',
	'Empty_type' => 'Du måste välja en typ',
	'Empty_article_name' => 'Du måste fylla i artikelns namn',
	'Empty_article_desc' => 'Du måste fylla i artikelns beskrivning',

	'Read_full_article' => '>>Läs hela artikeln',
	'Comments' => 'Kommentarer',

	'No_add' => 'Du kan inte lägga till en ny artikel',
	'No_edit' => 'Du kan inte redigera artikeln!',
	'Post_comments' => 'Posta din kommentar',

	'Category_sub' => 'Underkategorier',
	'Quick_stats' => 'Snabb Statistik',

// added

	'Edited_Article_info' => 'Artikel uppdaterad av ',
	'No_Articles' => 'Denna kategori är tom!',
	'Not_authorized' => 'Tyvärr, Du har inte behörighet!',
	'TOC' => 'Innehåll',

// Rate
	'Votes_label' => 'Betygsätt ',
	'Votes' => 'röst(er)',
	'No_votes' => 'Inga röster',
	'Rate' => 'Betygsätt Artikel',
	'ADD_RATING' => '[Betygsätt Artikel]',
	'Rerror' => 'Tyvärr, du har redan betygsatt denna artikel.',
	'Rateinfo' => 'Du håller på att betygsätta artikeln <i>{filename}</i>.<br />Vänligen välj ett betyg. 1 är det värsta, 10 är det bästa.',
	'Rconf' => 'Du har gett <i>{filename}</i> ett betyg av {rate}.<br />Detta gör att filens nya betyg är {newrating}/10.',
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
	'Click_return_rate' => 'Klicka %sHär%s för att återgå till artikeln',

// Print version
	'Print_version' => 'Utskriftsbar version',

// Stats
	'Top_toprated' => 'Topp-Rankade Artiklar',
	'Top_most_popular' => 'Mest Populär',
	'Top_latest' => 'Senaste Artiklar',

// Votes check
	'Votes_check_ip' => 'Bekräfta betyg - ip',
	'Votes_check_ip_explain' => 'Endast en röst per IP-adress är tillåten.',

	'Votes_check_userid' => 'Bekräfta betyg - användare',
	'Votes_check_userid_explain' => 'Användare får enbart rösta en gång.',

	'Article_pag' => 'Artikel sidnumrering',
	'Article_pag_explain' => 'Antalet artiklar som visas i en (stats) kategori innan sidnumrering.',

	'Comments_pag' => 'Kommentarer sidnumrering',
	'Comments_pag_explain' => 'Antalet kommentarer att visa för artikeln innan sidnumrering.',

	'News_sort' => 'Artikel sorterings metod',
	'News_sort_explain' => 'Definiera hur artiklar ska sorteras inom sin kategori.',

	'News_sort_par' => 'ASC eller DESC sortering',
	'News_sort_par_explain' => '',

// General strings from the news admin panel

	'News_settings' => 'KB Block Inställningar',
	'News_settings_short_explain' => 'Konfigurera en del alternativ för den främre sidans nyheter.',
	'News_settings_explain' => 'Ändra konfigurationen för KB Block. Denna panel låter dig extrahera vad kategori blocket kommer att visa, så du kan skapa delsektions instanser av modulen.',

// Update result messages

	'News_updated_return_settings' => 'KB block konfigurationen uppdaterad successfullt.<br /><br />Klicka %shär%s för att återgå till huvud sidan.', // %s's for URI params - DO NOT REMOVE
	'News_update_error' => 'Kunde inte uppdatera KB block konfigurationen.<br /><br />Denna modell är avsedd för MySQL så vänligen kontakta författaren om du har problem. Om du kan erbjuda en översättning av SQL i andra databas-format, vänligen skicka dem till:<br />',

// Custom Field
	'Fieldselecttitle' => 'Välj vad du ska göra',
	'Afield' => 'Anpassat Fält: Lägg Till',
	'Efield' => 'Anpassat Fält: Redigera',
	'Dfield' => 'Anpassat Fält: Radera',
	'Mfieldtitle' => 'Anpassat Fält',
	'Afieldtitle' => 'Lägg Till Fält',
	'Efieldtitle' => 'Redigera Fält',
	'Dfieldtitle' => 'Radera Fält',
	'Fieldexplain' => 'Du kan använda de anpassade fältens management för att lägga till, redigera och ta bort anpassade fält. Du kan använda anpassade fält för att lägga till mer information om en artikel.',
	'Fieldname' => 'Fält Namn',
	'Fieldnameinfo' => 'Detta är namnet på fältet, till exempel \'Fil Storlek\'',
	'Fielddesc' => 'Fält Beskrivning',
	'Fielddescinfo' => 'Detta är en beskrivning av fältet, till exempel \'Fil Storlek i Megabytes\'',
	'Fieldadded' => 'Det anpassade fältet har blivit successfullt tillagt',
	'Fieldedited' => 'Det anpassade fältet du valde har blivit successfullt redigerat',
	'Dfielderror' => 'Du valde inte något fält att radera',
	'Fieldsdel' => 'De anpassade fälten du valde har blivit successfullt raderade',

	'Field_data' => 'Alternativ',
	'Field_data_info' => 'Ange alternativ som användaren kan välja mellan. Separera varje alternativ med en ny-linje (transport retur).',
	'Field_regex' => 'Vanligt Uttryck',
	'Field_regex_info' => 'Du kan kräva att inmatningsfältet ska matcha ett vanligt uttryck %s(PCRE)%s.',
	'Field_order' => 'Visa Order',

//Fields Types

	'Field_Input' => 'Singel-Linje Text Box',
	'Field_Textarea' => 'Flera-Linjer Text Box',
	'Field_Radio' => 'Singel-Urvals Knappar',
	'Field_Select' => 'Singel-Urvals Meny',
	'Field_Select_multiple' => 'Flera-Urvals Meny',
	'Field_Checkbox' => 'Flera-Urvals Checkbox',

	'Click_return' => 'Klicka %sHär%s för att återgå till föregående sida',

// added
	'Cat_all' => 'Alla',

	'L_Pages' => 'Sidor',
	'L_Pages_explain' => 'Använd [pages] kommandot för att dela upp artikeln i sidor',
	'L_Toc' => 'Table of contents (TOC)',
	'L_Toc_explain' => 'Använd [toc] kommandot för att lägga post i TOC',
	'L_Abstract' => 'Abstrakt',
	'L_Abstract_explain' => 'Använd [abstract]...[/abstract] villkoret för att infoga ett abstrakt',

	'L_Title_Format' => 'Titel',
	'L_Title_Format_explain' => 'Använd [title]...[/title] villkoret för att infoga en huvudtitel',

	'L_Subtitle_Format' => 'Underrubrik',
	'L_Subtitle_Format_explain' => 'Använd [subtitle]...[/subtitle] villkoret för att infoga en underrubrik',

	'L_Subsubtitle_Format' => 'Underunderrubrik',
	'L_Subsubtitle_Format' => 'Använd [subsubtitle]...[/subsubtitle] villkoret för att infoga en liten rubrik',

	'L_Options' => 'Alternativ:',
	'L_Formatting' => 'Formatering:',

	'Default_article_id' => 'Ställ in standard artikel för artikel tittaren',

// Added for v. 2.0
	'KB_comment_prefix' => '[KB] ',

	'Wysiwyg' => 'Använd wysiwyg editor',
	'Wysiwyg_explain' => 'Om aktiverad, standarden för BBKod/html/smileys ingående dialog skall ersättas med en wysiwyg editor.',

	'Wysiwyg_path' => 'Sökväg till wysiwyg software',
	'Wysiwyg_path_explain' => 'Detta är sökvägen (från mxBB/phpBB root) till wysiwyg software mappen, t.ex. \'modules/\' om du har laddat upp till exempel tinemce i modules/tinymce.',

	'Formatting_fixup' => 'Fixa upp formatering',
	'Formatting_fixup_explain' => 'Om aktiverad, artikelns text omformaterad: ord-omslagning, url trunkerar, bild storleksändring, vissa BBKoder omformaterade etc',

	'Addtional_field' => 'Mer information (valfria)',

	'No_cat_comments_forum_id' => 'Kommentarer är aktiverad, men du har inte angivit målet icyphoenix forum kategori i KB ACP - Kategorier',

// Quick Nav
	'Quick_nav' => 'Snabb KB Navigering',
	'Quick_jump' => 'Gå',

	'Categories' => 'Kategorier',
	'Subcategory' => 'Underkategorier',
	)
);

?>