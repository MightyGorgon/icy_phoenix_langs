<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_album_admin.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
// 01 - Configuration
	'Album_config' => 'Album',
	'Album_config_explain' => 'Je kunt hier de fotoalbuminstellingen veranderen.<br />',
	'Album_config_updated' => 'Albumconfiguratie is succesvol bijgewerkt',
	'Click_return_album_config' => 'Klik %shier%s om terug te keren naar albumconfiguratie',
	'Max_pics' => 'Maximum aantal afbeeldingen in elke categorie (-1 = oneindig)',
	'User_pics_limit' => 'Afbeeldingslimiet per categorie voor elke gebruiker (-1 = oneindig)',
	'Moderator_pics_limit' => 'Afbeeldingslimiet per categorie voor elke moderators (-1 = oneindig)',
	'Pics_Approval' => 'Afbeeldingsgoedkeuring',
	'Rows_per_page' => 'Aantal regels op thumbnailspagina',
	'Cols_per_page' => 'Aantal kolommen op thumbnailspagina',
	'Thumbnail_quality' => 'Thumbnailkwaliteit (1-100)',
	'Thumbnail_cache' => 'Thumbnailcache',
	'Manual_thumbnail' => 'Handmatige thumbnail',
	'GD_version' => 'Voor versie van GD optimaliseren',
	'Pic_Desc_Max_Length' => 'Afbeeldingsomschrijving/opmerking max. lengte (bytes)',
	'Hotlink_prevent' => 'Deeplinkpreventie',
	'Hotlink_allowed' => 'Toegestane domeinen voor deeplinken (gescheiden door een komma)',
	'Personal_gallery' => 'Het maken van een persoonlijke album voor de gebruikers toestaan',
	'Personal_gallery_limit' => 'Afbeeldingslimiet voor elke persoonlijke album (-1 = oneindig)',
	'Personal_gallery_view' => 'Wie kan standaard de persoonlijke albums bekijken',
	'Rate_system' => 'Beoordelingssysteem inschakelen',
	'Rate_Scale' =>'Beoordelingsschaal',
	'Comment_system' => 'Opmerkingensysteem inschakelen',
	'Thumbnail_Settings' => 'Thumbnailinstellingen',
	'Quick_Thumbnails' => 'Snelle thumbnails',
	'Quick_Thumbnails_explain' => 'Als deze optie is ingeschakeld, het systeem controleert of de thumbnail al eens is gegenereerd en probeert deze direct naar je browser te versturen. Dit versnelt het thumbnailgeneratieproces wanneer je de categorieën bekijkt.',
	'Extra_Settings' => 'Extra instellingen',
	'Default_Sort_Method' => 'Standaard sorteermethode',
	'Default_Sort_Order' => 'Standaard sorteervolgorde',
	'Fullpic_Popup' => 'Originele afbeelding bekijken in een popupvenster',
	'Email_Notification' => 'Beheerders op hoogte houden wanneer er nieuwe afbeeldingen worden geupload in een album (alleen voor beheerders)',
	'Show_Download' => 'DOWNLOAD knop weergeven (wat inhoud dat je afbeeldingen kunt downloaden in ZIP-formaat) alleen voor diegene die bevoegd zijn om te UPLOADEN in de album (als je hebt gekozen voor ALTIJD, de knop is altijd beschikbaar ook voor gebruikers zonder UPLOAD permissies)', 
	'Show_Slideshow' => 'Slideshowfunctie inschakelen',
	'Show_Slideshow_Script' => 'Overgangseffecten inschakelen voor de slideshow',
	'Show_Pic_Size' => 'Afbeeldingsgrootte op de thumbnail weergeven',
	'Show_IMG_No_GD' => 'GIF thumbnails weergeven zonder gebruik te maken van de GD bibliotheek (originele afbeeldingen worden geladen en dan verkleind weergeven).',
	'Show_GIF_MidThumb' => 'Volledige GIF afbeelding weergeven als midthumb is ingeschakeld.',
	'Show_Pics_Nav' => 'Afbeeldingsnavigatiebox weergeven op weergavepagina',
	'Invert_Nav_Arrows' => 'Inverteer de arrows op showpagina (rechter arrow = meest recent)',
	'Show_Inline_Copyright' => 'Copyrightinformatie op een enkele regel weergeven',
	'Enable_Nuffimage' => 'Speciale effectenpagina gebaseerd op Nuffmon afbeeldingen class inschakelen',
	'Enable_Sepia_BW' => 'Ssepia en b&w op de speciale effectenpagina inschakelen (schakel deze functie uit als je je server niet wilt belasten met intensieve opdrachten)',
	'Show_EXIF_Info' => 'Afbeelding EXIF informatie weergeven',
	'Set_Memory' => 'Een geheugenlimiet via PHP (MB) instellen',
	'Set_Memory_Explain' => 'Deze functie kan gebruikt worden om de geheugenlimiet in PHP te verhogen (deze instelling moet wel worden toegestaan bij je hosting): je kan ook je geheugenlimiet verlagen maar dan worden de afbeeldingen niet correct geladen. De maximum limiet is verplicht tot een waarde van 16 MB, hoger is niet mogelijk.',
	'LB_Preview' => 'Lightboxvoorbeeld weergeven',
	'LB_Preview_Explain' => 'Deze functie geeft de Lightbox met een afbeeldingsvoorbeeld weer wanneer je er met de muis over de thumbnail beweegt.',
	'Album_config_notice' => 'Als je de huidige albuminstellingen veranderd en je selecteert een andere tab, moet je van te voren de veranderingen opslaan.<br>Het systeem <b>slaat geen</b> veranderingen automatisch op.', 
	'Save_sucessfully_confimation' => '%s is succesvol opgeslagen',
	'Show_Recent_In_Subcats' => 'Nieuwste afbeeldingen in subcategorieën weergeven',
	'Show_Recent_Instead_of_NoPics' => 'Nieuwste afbeeldingen in plaats van geen afbeeldingenbericht weergeven',
	'Show_Last_Comments' => 'Laatste opmerkingenblok op albumindex en categorieën weergeven',
	'Album_Index_Settings' => 'Albumindex',
	'Album_Index_Page_Settings' => 'Albumindexpagina instellingen',
	'Show_Index_Subcats' => 'Subcategorieën in de indextabel weergeven',
	'Show_Index_Thumb' => 'Categoriethumbnails in de indextabel weergeven',
	'Show_Index_Pics' => 'Aantal afbeeldingen in de huidige categorie in de indextabel weergeven',
	'Show_Index_Comments' => 'Aantal opmerkingen in de huidige categorie in de indextabel weergeven',
	'Show_Index_Total_Pics' => 'Afbeeldingentotaal in de huidige categorieën en alle subcategorieën in de indextabel weergeven',
	'Show_Index_Total_Comments' => 'Opmerkingentotaal in de huidige categorieën en alle subcategorieën in de indextabel weergeven',
	'Show_Index_Last_Comment' => 'Nieuwste opmerkingen in de huidige categorieën en alle subcategorieën in de indextabel weergeven',
	'Show_Index_Last_Pic' => 'Nieuwste afbeeldinginformatie in de huidige categorieën en alle subcategorieën in de indextabel weergeven',
	'Line_Break_Subcats' => 'Elke subcategorie op een nieuwe regel weergeven',
	'Show_Personal_Gallery_Link' => 'Persoonlijke album van gebruikers link in subcategorieën weergeven',
	'Album_Personal_Auth_Explain' => 'Hier kun je kiezen welke gebruikersgroep(en), moderators zijn voor <b>alle</b> persoonlijke albumcategorieën en welke speciaal voor hen toegankelijk zijn.',
	'Album_debug_mode' => 'De hierarchie debugmode inschakelen.<br><span class="gensmall">Dit genereert een extra uitvoer op de pagina en soms headerwaarschuwingen, wat er allemaal goed is.<br>Deze optie <b>alleen</b> gebruiken als je problemen ondervindt met je fotoalbum.</span>', 
	'New_Pic_Check_Interval' => 'De tijd om te gebruiken of een afbeelding is nieuw of niet.<br /><span class="gensmall"><b>Formaat</b> : &lt;number&gt;&lt;type&gt; Als type is h, d, w or m (uur, dag, week of maand)<br /> e.g. 12H = 12 uur en 12D = 12 dagen en 12W = 12 weken en 12M = 12 maanden<br />Als er geen type is gespecificeerd, het systeem gebruikt dan <b>dagen</b></span>',
	'New_Pic_Check_Interval_Desc' => '<span class="gensmall">H = uur, D = dagen, W = weken, M = maanden</span>',
	'New_Pic_Check_Interval_LV' => 'De nieuwe afbeeldingsaantal gebaseerd op de laatste bezoektijd van de gebruiker wordt bij het inschakelen van deze optie gebruikt.', 
	'Enable_Show_All_Pics' => 'Schakel schakelaar in van persoonlijke albumweergavemodus (alle afbeeldingen of alleen de geselecteerde categorie).<br> Wanneer het gezet is naar <b>nee</b>, alleen de geselecteerde categorie wordt dan weergegeven.', 
	'Enable_Index_Supercells' => 'Schakel supercellen in op de indextabel. <br><span class="gensmall">Dit schakelt de muisovereffecten in de kolommen in, staat bekend als superceleffect.</span>', 
	'Show_OTF_Link' => '"Album OTF" link op de albumindex weergeven',
	'Show_AllPics_Link' => '"Alle afbeeldingen" link op de albumindex weergeven',
	'Show_PG_Link' => '"Persoonlijke albums" link op de albumindex weergeven',

// 02 - Personal Galleries
	'Personal_Galleries' => 'Persoonlijke albums',
	'Album_personal_gallery_title' => 'Persoonlijke album',
	'Album_personal_gallery_explain' => 'Op deze pagina, kun je kiezen welke gebruikersgroepen recht hebben op het maken en bekijken van persoonlijke albums. Deze instellingen hebben alleen effect als je "PRIVE" voor "Het maken van een persoonlijke album voor de gebruikers toestaan" of "Wie kan standaard de persoonlijke albums bekijken" in albumconfiguratievenster hebt gezet', 
	'Album_personal_successfully' => 'De instelling is succesvol bijgewerkt',
	'Click_return_album_personal' => 'Klik %shier%s om terug te keren naar persoonlijke albuminstellingen',
	'Allow_Album_Avatars' => 'Gebruikers toestaan dat ze hun eigen geplaatste afbeeldigen in de album kunnen gebruiken als avatar',
	'Album_Personal_Settings' => 'Persoonlijk albums',
	'Show_Personal_Sub_Cats' => 'Persoonlijke subcategorieën in de indextabel weergeven',
	'Personal_Gallery_Approval' => 'Persoonlijke albumafbeeldingen goedkeuring',
	'Personal_Gallery_MOD' => 'Persoonlijke album kan worden gemodereerd door de eigenaar',
	'Personal_Sub_Cat_Limit' => 'Maximum aantal subcategorieën (-1 = oneindig)',
	'User_Can_Create_Personal_SubCats' => 'Gebruikers kunnen subcategorieën maken in hun eigen persoonlijke album',
	'Click_return_personal_gallery_index' => 'Klik %shier%s om terug te keren naar persoonlijke albumindex',
	'Show_Recent_In_Personal_Subcats' => 'Laatste afbeeldingen in persoonlijke subcategorieën weergeven',
	'Show_Recent_Instead_of_Personal_NoPics' => 'Laatste afbeeldingen in plaats van de geen afbeeldingsbericht in persoonlijke album weergeven',

// 03 - Categories
	'Categories' => 'Albumcategorieën',
	'Album_Categories_Title' => 'Albumcategorieën',
	'Album_Categories_Explain' => 'In dit venster kun je de categorieën beheren: maken, bewerken, verwijderen, sorteren, etc.',
	'Category_Permissions' => 'Categoriepermissies',
	'Category_Title' => 'Categorietitel',
	'Category_Desc' => 'Categorieomschrijving',
	'View_level' => 'Bekijk niveau',
	'Upload_level' => 'Upload niveau',
	'Rate_level' => 'Beoordelingsniveau',
	'Comment_level' => 'Opmerking niveau',
	'Edit_level' => ' Bewerk niveau',
	'Delete_level' => 'Verwijder niveau',
	'New_category_created' => 'Nieuwe categorie is succesvol aangemaakt',
	'Click_return_album_category' => 'Klik %shier%s om terug te keren naar albumcategorieënbeheer',
	'Category_updated' => 'Deze categorie is succesvol bijgewerkt',
	'Delete_Category' => 'Categorie verwijderen',
	'Delete_Category_Explain' => 'Het formulier hieronder geeft je de mogelijkheid om een categorie te verwijderen en de bijbehorende afbeeldingen te verplaatsen of ook te verwijderen.',
	'Delete_all_pics' => 'Alle afbeeldingen verwijderen',
	'Category_deleted' => 'Deze categorie is succesvol verwijderd',
	'Category_changed_order' => 'Deze categorie is succesvol van volgorde veranderd',
	'Personal_Root_Gallery' => 'Persoonlijke album hoofdcategorie',
	'Parent_Category' => 'Hoofdcategorie (voor deze categorie)',
	'Child_Category_Moved' => 'Geselecteerde categorieën bevat subcategorieën. De subcategorieën worden verplaatst naar de <B>%s</B> categorie.',
	'No_Self_Refering_Cat' => 'Je kan niet een categorie als hoofd van zichzelf zetten',
	'Can_Not_Change_Main_Parent' => 'Je kan niet de categorie van de hoofdcategorie veranderen in je persoonlijke album',
	'Watermark' => 'Watermerk',
	'Watermark_explain' => 'Je kan een watermerkbestand specifieren die door de categorie gebruikt gaat worden. Zet de watermerkbestand in je bestandspad van je phpBB root (b.v.: <b>album_mod/mark_fap.png</b>). Het watermerk wordt alleen toegepast als de watermerkfunctie is ingeschakeld.', 
	'Cat_Pics_Synchronize' => 'Synchroniseer afbeeldingsaantallen',
	'Cat_Pics_Synchronized' => 'Alle afbeeldingsaantallen zijn gesynchroniseerd.',

// 04 - Permissions
	'Album_Auth_Title' => 'Albumpermissies',
	'Album_Auth_Explain' => 'Hier kan je kiezen welke gebruikersgroep(en) moderators zijn van elk album of hebben privétoegang tot de albumcategorie', 
	'Select_a_Category' => 'Een categorie selecteren',
	'Look_up_Category' => 'Categorie opzoeken',
	'Album_Auth_successfully' => 'Permissie is succesvol bijgewerkt',
	'Click_return_album_auth' => 'Klik %shier%s terug te keren naar albumpermissies',
	'Upload' => 'Upload',
	'Rate' => 'Waarderen',
	'Comment' => 'Opmerking',

// 05 - Thumbnails
	'Use_Old_Thumbnails' => 'De oude thumbnailsfuncties gebruiken',
	'Use_Old_Thumbnails_Explain' => 'Als je deze functie ingeschakeld, maak je gebruik van de oude thumbnailsfuncties om kleinere thumbnails te genereren en voor een snelle volledige afbeelding uploaden. Je moet alleen van deze functie gebruikmaken als je problemen hebt met de standaard ingeschakelde thumbnailgeneratiefunctie.',

// 06 - Sorting
	'Album_Category_Sorting' => 'Albumcategorieën sorteren',
	'Album_Category_Sorting_Id' => 'ID',
	'Album_Category_Sorting_Name' => 'Naam',
	'Album_Category_Sorting_Order' => 'Sorteervolgorde (standaard)',
	'Album_Category_Sorting_Direction' => 'Sorteerrichting (alleen geldig bij het sorteren op ID en naam)',
	'Album_Category_Sorting_Asc' => 'Oplopend',
	'Album_Category_Sorting_Desc' => 'Aflopend',

// 07 - Clear Cache
	'Clear_Cache_Tab' => 'Cache',
	'Clear_Cache' => 'Cache wissen',
	'Album_clear_cache_confirm' => 'Als je gebruikmaakt van de thumbnailcachefunctie, dan moet je de thumbnailcache wissen na verandering van je thumbnailinstellingen in albumconfiguratie om ze opnieuw te genereren.<br><br> Weet je zeker dat je de cache wilt wissen?', 
	'Thumbnail_cache_cleared_successfully' => '<br />Je thumbnailcache is succesvol verwijderd<br />&nbsp;',

// ACP - Javascript text
	'acp_ask_save_changes' => 'Weet je zeker dat je deze instellingen wilt opslaan?\n(OK = Ja, Annuleren = Nee)',
	'acp_nothing_to_save' => 'Niets om op te slaan!',
	'acp_settings_changed_ask_save' => 'Je hebt de instellingen veranderd. Wil je dat ook opslaan?\n(OK = ja, Annuleren = Nee)',

// GD Info
	'GD_Info' => 'GD Info', 
	'GD_Title' => 'GD Info', 
	'GD_Description' => 'Hier kan je informatie vinden over je huidige geïnstalleerde GD bibliotheek', 
	'GD_Version' => 'Versie:', 
	'GD_Freetype_Support' => 'Freetype lettertypeondersteuning:', 
	'GD_Freetype_Linkage' => 'Freetype linktype:', 
	'GD_T1lib_Support' => 'T1lib ondersteuning:', 
	'GD_Gif_Read_Support' => 'GIF Leesondersteuning:', 
	'GD_Gif_Create_Support' => 'GIF Aanmaakondersteuning:', 
	'GD_Jpg_Support' => 'JPG/JPEG ondersteuning:', 
	'GD_Png_Support' => 'PNG ondersteuning:', 
	'GD_Wbmp_Support' => 'WBMP ondersteuning:', 
	'GD_XBM_Support' => 'XBM ondersteuning:', 
	'GD_Jis_Mapped_Support' => 'Japanse lettersondersteuning:', 
	'GD_True' => 'Ja', 
	'GD_False' => 'Nee', 

// Multiple Uploads Admin configuration
	'Upload_Settings' => 'Upload', 
	'Max_Files_To_Upload' => 'Maximaal aantal bestanden dat een gebruiker per keer uploaden kan', 
	'Album_upload_settings' => 'Albumuploadinstellingen', 
	'Max_pregenerated_fields' => 'Maximum aantal velden om opnieuw te genereren', 
	'Dynamic_field_generation' => 'Dynamisch invoegen van uploadvelden inschakelen', 
	'Pre_generate_fields' => 'De uploadvelden opnieuw genereren', 
	'Propercase_pic_title' => 'Hoofdletters in afbeeldingstitel b.v. <i>\'Dit Is Een Afbeeldingstitel\'</i><br>Stel in op \'Nee\' geeft als resultaat <i>\'Dit is een afbeeldingstitel\'</i>', 
	'Pic_Resampling' => 'Deze optie inschakelen, betekent dat elke afbeelding on the fly worden verkleind als het nodig is (het behoud de afbeeldingseigenschappen met betrekking tot de albuminstellingen in beheerderspaneel).', 
	'Max_file_size_resampling' => 'Maximale bestandsgrootte voor het beproeven (bytes)', 

// CLowN
	'SP_Album_config' => 'Albumpakket', 
	'SP_Album_config_explain' => 'Hier kun je verschillende opties configureren voor de albumpakket', 
	'SP_Album_sp_general' => 'Algemene configuratie', 
	'SP_Album_sp_watermark' => 'Watermerkconfiguratie', 
	'SP_Album_sp_hotornot' => 'Hot of not configuratie', 
	'SP_Rate_type' => 'Selecteer afbeeldingswaarderingsvenster', 
	'SP_Rate_type_0' => 'Alleen afbeeldingen', 
	'SP_Rate_type_1' => 'Alleen nummers', 
	'SP_Rate_type_2' => 'Nummers en afbeeldingen', 
	'SP_Display_latest' => 'Laatst toegevoegde afbeeldingenblok weergeven', 
	'SP_Display_highest' => 'Hoogst beoordeelde afbeeldingenblok weergeven', 
	'SP_Display_most_viewed' => 'Meest bekeken afbeeldingenblok weergeven', 
	'SP_Display_random' => 'Willekeurige afbeeldingenblok weergeven', 
	'SP_Pic_row' => 'Aantal rijen in thumbnailblok', 
	'SP_Pic_col' => 'Aantal kolommen in thumbnailblok', 
	'SP_Midthumb_use' => 'Mid-thumbnail gebruiken', 
	'SP_Midthumb_cache' => 'Cachen van mid-thumbnail inschakelen', 
	'SP_Midthumb_high' => 'Hoogte van mid-thumbnail (pixel)', 
	'SP_Midthumb_width' => 'Breedte van mid-thumbnail (pixel)', 
	'SP_Watermark' => 'Watermerk gebruiken', 
	'SP_Watermark_users' => 'Watermerk voor alle gebruikers weergeven, als \'Nee\' dan wordt het alleen weergegeven voor gasten', 
	'SP_Watermark_placent' => 'Watermerkpositie op de afbeelding', 
	'SP_Hon_already_rated' => 'Oneindige waardering op hot of not pagina', 
	'SP_Hon_sep_rating' => 'Hot of not beoordeling in een aparte tabel opslaan', 
	'SP_Hon_where' => 'Geef afbeeldingen weer van hot of not van welke categorieën? (laat het leeg als je afbeeldingen wilt gebruiken uit alle categorieën, als het meer is dan een categorie, scheidt de getallen dan met een komma)', 
	'SP_Hon_users' => 'Kunnen gasten beoordelen?', 

	'SP_Disabled' => 'Uitgeschakeld',
	'SP_Enabled' => 'Ingeschakeld',
	'SP_Yes' => 'Ja',
	'SP_No' => 'Nee',
	'SP_Always' => 'Altijd',
	'SP_Submit' => 'Bevestigen',
	'SP_Reset' => 'Reset',

// Nuffload
	'Nuffload_Config' => 'Nuffloadconfiguratie', 
	'Enable_Nuffload' => 'Nuffload inschakelen', 
	'Enable_Nuffload_Explain' => 'Deze optie inschakelen, betekent dat Nuffload wordt gebruikt als standaard uploadmethode.', 
	'progress_bar_configuration' => 'Nuffload - voortgangsbalkconfiguratie', 
	'perl_uploader' => 'Schakel Perluploader in', 
	'path_to_bin' => 'Pad van je phpBB map naar cgi-bin (bijv. <b>./cgi-bin/</b> als je phpBB heb in een submap)', 
	'show_progress_bar' => 'Vvoortgangsbalk bij upload weergeven', 
	'close_progress_bar' => 'Voortgangsbalk na het afronden sluiten', 
	'activity_timeout' => 'Activiteitstimeout (secs)', 
	'simple_format' => 'Simpele formaat voor de voortgangsbalk gebruiken', 
	'multiple_uploads_configuration' => 'Nuffload - Verschillende uploadconfiguratie', 
	'multiple_uploads' => 'Meerdere uploads inschakelen', 
	'max_uploads' => 'Maximum aantal uploadvelden', 
	'zip_uploads' => 'ZIP-uploads inschakelen', 
	'image_resizing_configuration' => 'Nuffload - Afbeeldingsverkleiningconfiguratie', 
	'image_resizing' => 'Afbeeldingsverkleining inschakelen', 
	'image_width' => 'Afbeeldingsbreedte', 
	'image_height' => 'Afbeeldingshoogte', 
	'image_quality' => 'Afbeeldingskwaliteit',
	)
);
?>