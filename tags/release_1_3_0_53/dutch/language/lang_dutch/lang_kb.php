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
	'KB_title' => 'Kennisbank',
	'Article' => 'Artikel',
	'Category' => 'Categorie',
	'Article_description' => 'Omschrijving',
	'Article_type' => 'Type',
	'Article_keywords' => 'Trefwoorden',
	'Articles' => 'Artikelen',
	'Add_article' => 'Voeg artikel toe',
	'Click_cat_to_add' => 'Klik op categorie om een artikel toe te voegen',
	'KB_Home' => 'KB Home',
	'No_articles' => 'Er zijn geen artikelen',
	'Article_title' => 'Artikelnaam',
	'Article_text' => 'Artikeltekst',
	'Add_article' => 'Bevestig artikel',
	'Read_article' => 'Lees artikel',
	'Article_not_exsist' => 'Artikel bestaat niet',
	'Category_not_exsist' => 'Categorie bestaat niet',

	'Edit' => 'Bewerk',
	
	'Article_submitted_Approve' => 'Artikel succesvol toegevoegd.<br />Een beheerder gaat je artikel bekijken voordat iedereen het kan bekijken. Dit om te voorkomen dat er misbruik van gemaakt wordt.',
	'Article_submitted' => 'Artikel succesvol toegevoegd.',
	'Click_return_kb' => 'Klik %shier%s om terug te keren naar de kennisbank',
	'Click_return_article' => 'Klik %shier%s om terug te keren naar het artikel',
	
	'Article_Edited_Approve' => 'Artikel succesvol bewerkt.<br />Het benodigt wederom goedkeuring voordat iedereen het kan bekijken.',
	'Article_Edited' => 'Artikel succesvol bewerkt.',
	'Edit_article' => 'Bewerk artikel',

	'KB_title' => 'Kennisbank',
	'KB_art_description' => 'Goedgekeurde artikelen zodat gebruikers het kunnen bekijken en verwijderen.',
	'Art_man' => 'Artikelbeheer',
	'Cat_man' => 'Categoriebeheer',
	'KB_cat_description' => 'Toevoegen, bewerken en verwijderen van categorieen in de kennisbank.',
	'Art_action' => 'Actie',

//approve
	'Art_edit' => 'Bewerkte artikelen',
	'Art_not_approved' => 'Niet goedgekeurd',
	'Art_approved' => 'Goedgekeurd',
	'Approve' => 'Goedkeuren',
	'Un_approve' => 'Afkeuren',
	'Article_approved' => 'Artikel is nu goedgekeurd.',
	'Article_unapproved' => 'Artikel is nu afgekeurd.',

//delete
	'Delete' => 'Verwijder',
	'Confirm_art_delete' => 'Weet je zeker dat je dit artikel wilt verwijderen?',
	'Confirm_art_delete_yes' => '%sJa, ik wil dit artikel verwijderen%s',
	'Confirm_art_delete_no' => '%sNee, ik wil dit artikel niet verwijderen%s',
	'Article_deleted' => 'Artikel succesvol verwijderd.',
	
	'Click_return_article_manager' => 'Klik %shier%s om terug te keren naar artikelbeheer',

//cat manager
	'Create_cat' => 'Voeg nieuwe categorie toe:',
	'Create' => 'Toevoegen',
	'Cat_settings' => 'Categorie instellingen',
	'Create_description' => 'Verander de naam van de categorie en voeg een omschrijving toe aan de nieuwe categorie.',
	'Cat_created' => 'Categorie succesvol toegevoegd.',
	'Click_return_cat_manager' => 'Klik %shier%s om terug te keren naar categoriebeheer',
	'Edit_description' => 'Bewerk de instellingen van je categorie',
	'Edit_cat' => 'Bewerk categorie',
	'Cat_edited' => 'Categorie succesvol bewerkt.',
	'Parent' => 'Hoofd',

	'Cat_delete_title' => 'Verwijder categorie',
	'Cat_delete_desc' => 'Verwijder een categorie en verplaats alle artikelen naar een nieuwe categorie',
	'Cat_deleted' => 'Categorie succesvol verwijderd.',
	'Delete_all_articles' => 'Verwijder alle artikelen',

//configuration
	'KB_config' => 'KB Configuratie',
	'Art_types' => 'Artikeltypen',
	'KB_config_title' => 'Kennisbank configuratie',
	'KB_config_explain' => 'Verander de configuratie van je kennisbank',
	'New_title' => 'Nieuwe artikelen toestaan',
	'New_explain' => 'Sta gebruikers toe dat ze nieuwe artikelen kunnen toevoegen aan je kennisbank',
	'Edit_name' => 'Bewerken toestaan',
	'Edit_explain' => 'Sta gebruikers toe dat ze de eigen artikelen mogen bewerken na het toevoegen ervan',
	'Notify_name' => 'Informeer mij hierover',
	'Notify_explain' => 'Kies via welke manier je geinformeerd wil worden over nieuwe artikelen die toegevoegd worden aan de kennisbank',
	'PM' => 'PB',
	'Click_return_kb_config' => 'Klik %shier%s om terug te keren naar de kennisbank configuratie',
	'Admin_id_name' => 'Beheerder ID',
	'Admin_id_explain' => 'Dit is de gebruiker id nummer waar de PB naar verzonden wordt.',
	'Approve_new_name' => 'Nieuwe artikelen goedkeuren',
	'Approve_new_explain' => 'Verandert de optie om <b>nieuwe</b> artikelen goedgekeurd moet worden of niet',
	'Approve_edit_name' => 'Bewerkte artikelen goedkeuren',
	'Approve_edit_explain' => 'Verandert de optie om <b>bewerkte</b> artikelen goedgekeurd moet worden of niet',
	'Allow_anon_name' => 'Gasten toestaan om artikelen te kunnen toevoegen',
	'Allow_anon_explain' => 'Verandert de optie om <b>nieuwe</b /> artikelen door gasten toe te laten voegen',
	'Del_topic' => 'Verwijder onderwerp',
	'Del_topic_explain' => 'Wanneer je een artikel verwijderd, wil je dan alle opmerkingen over het artikel ook verwijderen?',

	'Use_comments' => 'Opmerkingen',
	'Use_comments_explain' => 'Schakelt opmerkingen voor artikelen in, deze worden dan in het Icy Phoenix forum geplaatst.',
	'Use_ratings' => 'Beoordeling',
	'Use_ratings_explain' => 'Schakel beoordelingen in voor artikelen',
	
	'Forum_id' => 'Forum ID',
	'Forum_id_explain' => 'Dit is het forum waarin de opmerkingen van artikelen zullen worden geplaatst',


// Permissions
	'KB_Auth_Title' => 'KB permissies',
	'KB_Auth_Explain' => 'Kies welke gebruikersgroep(en) moderators zijn in elk KB categorie of privétoegang hebben tot een categorie',
	'Select_a_Category' => 'Selecteer een categorie',
	'Look_up_Category' => 'Zoek categorie op',
	'KB_Auth_successfully' => 'Authorisatie is succesvol bijgewerkt',
	'Click_return_KB_auth' => 'Klik %shier%s om terug te keren naar KB permissies',

	'Upload' => 'Upload',
	'Rate' => 'Beoordeel',
	'Comment' => 'Opmerking',
	'Approval' => 'Goedkeuring',
	'Approval_edit' => 'Bewerk goedkeuring',
	
	'Allow_rating' => 'Beoordelingen toestaan',
	'Allow_rating_explain' => 'Gebruikers zijn in de gelegenheid om artikelen te beoordelen.',

	'Allow_anonymos_rating' => 'Beoordelingen van gasten toestaan',
	'Allow_anonymos_rating_explain' => 'Als beoordelingen zijn toegestaan, kunnen gasten ook de artikelen in de kennisbank beoordelen',
	
	'KB_config_updated' => 'Kennisbank configuratie is succesvol bijgewerkt.',
	
	'KB_notify_subject_new' => 'Nieuw artikel!',
	'KB_notify_subject_edited' => 'Bewerkte atikel!',
	'KB_notify_subject_approved' => 'Goedgekeurde artikel!',
	'KB_notify_subject_unapproved' => 'Afgekeurde artikel!',
	'KB_notify_body' => 'Een artikel is toegevoegd of bewerkt:

',

	'Category_Permissions' => 'Categoriepermissies',
	'Category_Title' => 'Categorietitel',
	'Category_Desc' => 'Categorieomschrijving',
	'View_level' => 'Bekijk niveau',
	'Upload_level' => 'Upload niveau',
	'Rate_level' => 'Beoordeling niveau',
	'Comment_level' => 'Opmerking niveau',
	'Edit_level' => ' Bewerk niveau',
	'Delete_level' => 'Verwijder niveau',
	'Approval_level' => 'Goedkeuring niveau',
	'Approval_edit_level' => 'Goedkeuring bewerkniveau',

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
	'KB_Rules_post_can' => 'Je <b>mag</b> nieuwe artikelen toevoegen',
	'KB_Rules_post_cannot' => 'Je <b>mag geen</b> nieuwe artikelen toevoegen',
	'KB_Rules_comment_can' => 'Je <b>mag</b> opmerkingen op artikelen plaatsen',
	'KB_Rules_comment_cannot' => 'Je <b>mag geen</b> opmerkingen op artikelen plaatsen',
	'KB_Rules_edit_can' => 'Je <b>mag</b> je eigen artikelen bewerken',
	'KB_Rules_edit_cannot' => 'Je <b>mag niet</b> je eigen artikelen bewerken',
	'KB_Rules_delete_can' => 'Je <b>mag</b> je eigen artikelen verwijderen',
	'KB_Rules_delete_cannot' => 'Je <b>mag niet</b> je eigen artikelen verwijderen',
	'KB_Rules_rate_can' => 'Je <b>mag</b> artikelen beoordelen',
	'KB_Rules_rate_cannot' => 'Je <b>mag geen</b> artikelen beoordelen',
	'KB_Rules_approval_can' => 'Artikelen <b>benodigt geen</b> goedkeuring',
	'KB_Rules_approval_cannot' => 'Artikelen <b>benodigt</b> goedkeuring',
	'KB_Rules_approval_edit_can' => 'Artikelbewerkingen <b>benodigt geen</b> goedkeuring',
	'KB_Rules_approval_edit_cannot' => 'Artikelbewerkingen <b>benodigt</b> goedkeuring',
	'KB_Rules_moderate' => 'Je <b>mag</b> deze categorie %smoderaten%s', // %s replaced by a href links, do not remove!
	'KB_Rules_moderate_can' => 'Je <b>mag</b> deze categorie moderaten', // %s replaced by a href links, do not remove!

	'Comments_show' => 'Artikelopmerkingen weergeven.',
	'Comments_show_explain' => '- ook de opmerkingen op de artikelpagina weergeven',
	'Comments_show_title' => 'Opmerkingen',
	
	'Mod_group' => 'KB Moderatorgroep',
	'Mod_group_explain' => '- met KB beheerderpermissies!',
	
	'Bump_post' => 'Omhooghalen van artikelbericht',
	'Bump_post_explain' => 'Wanneer een artikel is bewerkt, een reactie wordt geplaatst in de artikelonderwerp om gebruikers te informeren over een bijgewerkte artikel.',
	
	'Stats_list' => 'KB statistieken weergeven',
	'Stats_list_explain' => 'KB statistieken weergeven in de header.',
	
	'Header_banner' => 'Hoofdlogo weergeven',
	'Header_banner_explain' => 'KB logo weergeven in de header.',
	
	'Comment_info' => 'Opmerkinginstellingen',
	'Rating_info' => 'Beoordelingsinstellingen',


//types
	'Types_man' => 'Typebeheer',
	'KB_types_description' => 'Toevoegen, verwijderen en bewerken van verschillende artikeltypen',
	'Create_type' => 'Maak nieuwe artikeltype aan:',
	'Type_created' => 'Artikeltype succesvol aangemaakt.',
	'Click_return_type_manager' => 'Klik %shier%s om terug te keren naar typebeheer',
	
	'Edit_type' => 'Bewerk artikeltype',
	'Edit_type_description' => 'Hier kun je de naam van de artikeltype bewerken',
	'Type_edited' => 'Artikeltype succesvol bewerkt.',
	
	'Type_delete_title' => 'Verwijder artikeltype',
	'Type_delete_desc' => 'Verander de artikeltype voor de artikelen welke deze type heeft voordat het verwijderd werd..',
	'Change_type' => 'Verander artikeltype naar',
	'Change_and_Delete' => 'Verander en verwijder',
	'Type_deleted' => 'Artikeltype succesvol verwijderd.',
	
	'Pre_text_name' => 'Instructies voor het toeveogen van artikelen',
	'Pre_text_header' => 'Aanwijzingstitel voor het toevoegen van artikelen',
	'Pre_text_body' => 'Instructies voor het toevoegen van artikelen',
	'Pre_text_explain' => 'Deze instructies worden voor gebruikers boven het artikeltoevoegformulier weergegeven.',
	
	'Show' => 'Toon',
	'Hide' => 'Verberg',
	
	'Empty_fields' => 'Vul alstublieft alle delen van het formulier in.',
	'Empty_fields_return' => 'Klik %shier%s om terug te keren naar het formulier.',
	'Empty_category' => 'Je moet een categorie kiezen',
	'Empty_type' => 'Je moet een artikeltype kiezen',
	'Empty_article_name' => 'Je moet de artikelnaam invullen',
	'Empty_article_desc' => 'Je moet de artikelomschrijving invullen',
	
	'Read_full_article' => '>>Lees volledige artikel',
	'Comments' => 'Opmerkingen',
	
	'No_add' => 'Je mag geen nieuwe artikelen toevoegen',
	'No_edit' => 'Je mag niet dit artikel bewerken!',
	'Post_comments' => 'Plaats je opmerkingen',
	
	'Category_sub' => 'Subcategorieen',
	'Quick_stats' => 'Snelle statistieken',

// added

	'Edited_Article_info' => 'Artikel bijgewerkt door ',
	'No_Articles' => 'Deze categorie is leeg!',
	'Not_authorized' => 'Sorry, maar je bent niet bevoegd!',
	'TOC' => 'Inhoudsopgave',

// Rate
	'Votes_label' => 'Beoordeling ',
	'Votes' => 'stem(men)',
	'No_votes' => 'Er zijn geen stemmen',
	'Rate' => 'Beoordeel artikel',
	'ADD_RATING' => '[Beoordeel artikel]',
	'Rerror' => 'Sorry, maar je hebt dit artikel al beoordeeld.',
	'Rateinfo' => 'Je bent hier om artikel <i>{filename}</i> te beoordelen.<br />Kies een beoordeling uit. 1 is het slechtst, 10 is het beste.',
	'Rconf' => 'Je hebt <i>{filename}</i> een beoordeling van {rate} gegeven.<br />Dit maakt een nieuwe beoordeling van {newrating}/10.',
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
	'Click_return_rate' => 'Klik %shier%s om terug te keren naar het artikel',

// Print version
	'Print_version' => 'Printbare versie',

// Stats
	'Top_toprated' => 'Beste artikelen',
	'Top_most_popular' => 'Populairste artikelen',
	'Top_latest' => 'Nieuwste artikelen',

// Votes check
	'Votes_check_ip' => 'IP-adressen bij het stemmen controleren',
	'Votes_check_ip_explain' => 'Per IP-adres is maar een stem toegestaan.',
	
	'Votes_check_userid' => 'Gebruiker bij het stemmen controleren',
	'Votes_check_userid_explain' => 'Gebruiker mag maar een keer stemmen.',
	
	'Article_pag' => 'Artikelen per pagina',
	'Article_pag_explain' => 'Aantal artikelen per categorie, voordat er een nieuwe pagina bij komt.',
	
	'Comments_pag' => 'Opmerkingen per pagina',
	'Comments_pag_explain' => 'Aantal opmerkingen per artikel, voordat er een nieuwe pagina bijkomt.',
	
	'News_sort' => 'Artikel sorteermethode',
	'News_sort_explain' => 'Legt vast, hoe de artikelen in een categorie worden gesorteerd.',
	
	'News_sort_par' => 'Oplopend of aflopende sorteren',
	'News_sort_par_explain' => 'Legt de sorteervolgorde vast',

// General strings from the news admin panel

	'News_settings' => "KB Blokinstellingen",
	'News_settings_short_explain' => "Configuratieopties voor de startpaginanieuws.",
	'News_settings_explain' => "Hier kan je de configuratie voor de KB Blok bewerken. Stel in, uit welke categorie de artikelen in KB blok op de startpagina wordt weergegeven.",

// Update result messages

	'News_updated_return_settings' => 'KB blokconfiguratie succesvol bijgewerkt.<br /><br />Klik %shier%s om terug te keren naar de hoofdpagina.', // %s's for URI params - DO NOT REMOVE
	'News_update_error' => 'Het is niet mogelijk om de KB blokconfiguratie bij te werken.<br /><br />Deze mod is gescript voor MySQL dus neem contact op met de auteur bij problemen. Als je een vertaling hebt naar van SQL naar andere databaseformaten, zend hem dit zodat het probleem opgelost kan worden:<br />',

// Custom Field
	'Fieldselecttitle' => 'Selecteer wat je wilt doen',
	'Afield' => 'Eigen veld toevoegen',
	'Efield' => 'Eigen veld bewerken',
	'Dfield' => 'Eigen veld verwijderen',
	'Mfieldtitle' => 'Eigen velden',
	'Afieldtitle' => 'Veld toevoegen',
	'Efieldtitle' => 'Veld bewerken',
	'Dfieldtitle' => 'Veld verwijderen',
	'Fieldexplain' => 'Je kan deze pagina gebruiken, om eigen velden toe te voegen, te bewerken en/of te verwijderen. Je kan met eigen velden meer informatie voor een artikel toevoegen.',
	'Fieldname' => 'Veldnaam',
	'Fieldnameinfo' => 'De naam van het veld, b.v. &quot,Bestandsgrootte&quot;',
	'Fielddesc' => 'Veldbeschrijving',
	'Fielddescinfo' => 'Een beschrijving van het veld, b.v. &quot;grootte in MB&quot;',
	'Fieldadded' => 'De eigen veld is succesvol toegevoegd',
	'Fieldedited' => 'De eigen veld is succesvol bewerkt',
	'Dfielderror' => 'Je hebt geen eigen velden geselecteerd om te verwijderen',
	'Fieldsdel' => 'De geselecteerde eigen velden zijn succesvol verwijderd',

	'Field_data' => 'Opties',
	'Field_data_info' => 'Geef de opties in, waaruit de gebruiker kan kiezen. Gebruik voor elke optie een nieuwe regel (enter).',
	'Field_regex' => 'Reguliere expressie',
	'Field_regex_info' => 'Het invulveld moet eventueel met een Perl Compatible Reguliere Expressie (afgekort %sPCRE%s) overeenkomen.',
	'Field_order' => 'Weergavevolgorde',

//Fields Types

	'Field_Input' => 'Eendelige tekstveld',
	'Field_Textarea' => 'Meerdelige tekstveld',
	'Field_Radio' => 'Eenvoudig optiebuttons',
	'Field_Select' => 'Eenvoudig keuzemenu',
	'Field_Select_multiple' => 'Meervoudig keuzemenu',
	'Field_Checkbox' => 'Meervoudig controleveld',

	'Click_return' => 'Klik %shier%s om terug te keren naar de vorige pagina',

// added
	'Cat_all' => 'Alle',
	
	'L_Pages' => 'Pagina\'s',
	'L_Pages_explain' => 'Gebruik \'[pages]\', om de artikel in pagina\'s op te delen',
	'L_Toc' => 'Inhoudsopgave (TOC)',
	'L_Toc_explain' => 'Gebruik \'[toc]\', om in een artikel een inhoudsopgave (Table Of Content - TOC) toe te voegen',
	'L_Abstract' => 'Samenvatting',
	'L_Abstract_explain' => 'Gebruik \'[abstract]...[/abstract]\', om een samenvatting toe te voegen',
	
	'L_Title_Format' => 'Titel',
	'L_Title_Format_explain' => 'Gebruik \'[title]...[/title]\', om een hoofdtitel toe te voegen',
	
	'L_Subtitle_Format' => 'Ondertitel',
	'L_Subtitle_Format_explain' => 'Gebruik \'[subtitle]...[/subtitle]\', om een ondertitel toe te voegen',
	
	'L_Subsubtitle_Format' => 'Subtitel',
	'L_Subsubtitle_Format' => 'Gebruik \'[subsubtitle]...[/subsubtitle]\', om een subtitel toe te voegen',
	
	'L_Options' => 'Opties:',
	'L_Formatting' => 'Uiterlijk:',
	
	'Default_article_id' => 'Standaardartikel voor de artikellezer',

// Added for v. 2.0
	'KB_comment_prefix' => '[KB] ',
	
	'Wysiwyg' => 'Gebruik Wyiswyg bewerker',
	'Wysiwyg_explain' => 'Wanneer het ingeschakeld is, wordt de standaard BBCode/HTML/Smilies invulvelden door een wysiwyg bewerker vervangen.',
	
	'Wysiwyg_path' => 'Pad naar wysiwyg software',
	'Wysiwyg_path_explain' => 'Dit is het pad (vanuit /phpBB root) naar de wysiwyg softwaremap, b.v. \'modules/\', wanneer je tinemce in de map <i>modules/tinymce/</i> geupload hebt.',
	
	'Formatting_fixup' => 'Wijzig uiterlijk',
	'Formatting_fixup_explain' => 'Wanneer het ingeschakeld is, wordt de artikeltekst opnieuw opgesteld: woordafbrekingen, url-afkortingen, afbeeldingsgrootte aanpassingen en sommige BBCode opnieuw opgebouwd.',
	
	'Addtional_field' => 'Meer informatie (optioneel)',
	
	'No_cat_comments_forum_id' => 'Opmerkingen zijn ingeschakeld maar je hebt geen (sub)forum voor opmerkingen gedefinieerd. Open het beheerderspaneel en stel onder &quot;KB - Categorieën&quot; een forum in.',

// Quick Nav
	'Quick_nav' => 'Snelle KB navigatie',
	'Quick_jump' => 'Naar',

	'Categories' => 'Categorieën',
	'Subcategory' => 'Subcategorie',
	)
);

?>