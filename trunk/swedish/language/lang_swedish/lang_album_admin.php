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
	'Album_config_explain' => 'Ändra Foto Album inställningar här.<br />',
	'Album_config_updated' => 'Album Konfiguration har uppdaterats successfullt',
	'Click_return_album_config' => 'Klicka %sHär%s för att återgå till Album Konfiguration',
	'Max_pics' => 'Maximalt antal bilder för varje Kategori (-1 = obegränsat)',
	'User_pics_limit' => 'Bild begränsning per kategori för varje användare (-1 = obegränsat)',
	'Moderator_pics_limit' => 'Bild begränsning per kategori för varje moderator (-1 = obegränsat)',
	'Pics_Approval' => 'Bild Godkännande',
	'Rows_per_page' => 'Antal rader på miniatyrbilds sidor',
	'Cols_per_page' => 'Antal kolumner på miniatyrbilds sidor',
	'Thumbnail_quality' => 'Miniatyrbilds kvalitet (1-100)',
	'Thumbnail_cache' => 'Miniatyrbilds cache',
	'Manual_thumbnail' => 'Manuell miniatyrbild',
	'GD_version' => 'Optimerad för version av GD',
	'Pic_Desc_Max_Length' => 'Bild Beskrivning/Kommentar Max Längd (bytes)',
	'Hotlink_prevent' => 'Hotlink Prevention',
	'Hotlink_allowed' => 'Tillåtna domäner för hotlink (åtskilda med kommatecken)',
	'Personal_gallery' => 'Tillåtet att skapa personliga galleri för användarna',
	'Personal_gallery_limit' => 'Bild begränsning för varje personliga galleri (-1 = obegränsat)',
	'Personal_gallery_view' => 'Vem kan visa personliga gallerier som standard',
	'Rate_system' => 'Aktivera värderings system',
	'Rate_Scale' => 'Värderings Skala',
	'Comment_system' => 'Aktivera kommentar system',
	'Thumbnail_Settings' => 'Miniatyrbilds Inställning',
	'Quick_Thumbnails' => 'Snabb Miniatyrbild',
	'Quick_Thumbnails_explain' => 'Aktivera detta alternativ så kommer systemet att kontrollera om miniatyrbilder redan har tagits fram och försöker att skicka dem direkt till webbläsaren. Detta kommer att påskynda miniatyrbilds generation när du tittar på kategorier.',
	'Extra_Settings' => 'Extra Inställningar',
	'Default_Sort_Method' => 'Standard Sorterings Metod',
	'Default_Sort_Order' => 'Standard Sorterings Ordning',
	'Fullpic_Popup' => 'Visa fullständig bild som ett popup',
	'Email_Notification' => 'Aktivera meddelande via e-post om nya bilder i albumet (endast för administratörer)',
	'Show_Download' => 'Visa knappen LADDA NER (som möjliggör nedladdning av bilder i zip-format) bara till dem som har LADDA UPP rättigheter i albumet (om du alltid väljer knappen kommer den alltid att vara tillgänglig även om användarna inte har några LADDA UPP behörigheter)',
	'Show_Slideshow' => 'Aktivera Bildspel funktionen',
	'Show_Slideshow_Script' => 'Aktivera övergångs effekter för Bildspel',
	'Show_Pic_Size' => 'Visa bild storlek på miniatyrbilder',
	'Show_IMG_No_GD' => 'Visa GIF miniatyrbilder utan GD bibliotek (full bild läses in och visas sedan bara storleksändringen).',
	'Show_GIF_MidThumb' => 'Visa fullständig GIF bilder om Mid Miniatyr är aktiverat.',
	'Show_Pics_Nav' => 'Visa Bild Navigations Box på Visa Sidan',
	'Invert_Nav_Arrows' => 'Kasta om Pil länkar i Showpage (högerpil = nyare)',
	'Show_Inline_Copyright' => 'Visa Copyright Info på en enda rad',
	'Enable_Nuffimage' => 'Aktivera Bildernas Special Effekts sidan som bygger på Nuffmon Images CLASS',
	'Enable_Sepia_BW' => 'Aktivera Sepia och B & W i Special Effekts sida (avaktivera denna funktion om du inte vill ladda servern\'s CPU)',
	'Show_EXIF_Info' => 'Visa bild EXIF-information',
	'Set_Memory' => 'Ställ in en minnes gräns via PHP (MB)',
	'Set_Memory_Explain' => 'Denna funktion kan användas för att öka minnes gränsen i PHP (denna inställning måste vara tillåten av din värd): Du kan prova att öka minnet när bilderna inte läses in korrekt. För att undvika högre minnes begränsningar är max värdet tvunget att vara 16MB.',
	'LB_Preview' => 'Aktivera LightBox Preview',
	'LB_Preview_Explain' => 'Denna funktion kommer att visa en LightBox med bild förhandsgranskning när du flyttar muspekaren över en miniatyrbild.',
    'Album_config_notice' => 'Om du ändrar det aktuella Foto Albumets inställningar och sedan väljer en annan flik, kommer du att uppmanas att spara dina ändringar.<br />Systemet kommer <b>inte att spara</b> förändringarna för dig automatiskt.',
	'Save_sucessfully_confimation' => '%s sparades successfullt',
	'Show_Recent_In_Subcats' => 'Visa de senaste bilderna i underkategorierna',
	'Show_Recent_Instead_of_NoPics' => 'Visa de senaste bilderna i stället för något bildmeddelande',
	'Show_Last_Comments' => 'Visa senaste kommentars block på albumet index och kategorier',
	'Album_Index_Settings' => 'Album Index',
	'Album_Index_Page_Settings' => 'Album Index Sido Inställningar',
	'Show_Index_Subcats' => 'Visa underkategorier i index tabellen',
	'Show_Index_Thumb' => 'Visa kategori miniatyrbild i index tabellen',
	'Show_Index_Pics' => 'Visa antalet bilder i nuvarande kategori i index tabellen',
	'Show_Index_Comments' => 'Visa antalet kommentarer i nuvarande kategori i index tabellen',
	'Show_Index_Total_Pics' => 'Visa antalet totala bilder för nuvarande kategorierna och alla dess underkategorier i index tabellen',
	'Show_Index_Total_Comments' => 'Visa antalet totala kommentarer för nuvarande kategorierna och alla dess underkategorier i index tabellen',
	'Show_Index_Last_Comment' => 'Visa senaste kommentarer för nuvarande kategorierna och alla dess underkategorier i index tabellen',
	'Show_Index_Last_Pic' => 'Visa senaste bild informationen för nuvarande kategorierna och alla dess underkategorier i index tabellen',
	'Line_Break_Subcats' => 'Visa varje underkategori på en ny rad',
	'Show_Personal_Gallery_Link' => 'Visa Personligt Galleri och Användare Personligt Galleri länk i Underkategorier',
	'Album_Personal_Auth_Explain' => 'Välj vilken användargrupp(er) som kan vara moderatorer för <b>alla</b> personliga albums kategorier eller bara har privat tillgång till dem',
	'Album_debug_mode' => 'Aktivera hierarkinska felsökningsläget.<br /><span class="gensmall">Detta kommer att generera en hel del extra output på sidan och även några huvud varningar, som alla är ok.<br />Denna möjlighet bör <b>endast</b> användas när det är problem.</span>',
	'New_Pic_Check_Interval' => 'Tid att använda för att se om en bild är ny eller inte.<br /><span class="gensmall"><b>Format</b> : &lt;number&gt;&lt;type&gt; Där typ är antingen t, d, v eller m (timme, dag, vecka eller månad)<br /> t.ex. 12T = 12 timmar och 12D = 12 dagar och 12V = 12 veckor och 12M = 12 månader<br />Om ingen typ anges kommer systemet att använda <b>dagar</b></span>',
	'New_Pic_Check_Interval_Desc' => '<span class="gensmall">T = TIMMAR, D = DAGAR, V = VECKOR, M = MÅNADER</span>',
	'New_Pic_Check_Interval_LV' => 'Aktivering av denna möjlighet räknas på de nya bildernas motverkan och bygger även på användarnas senaste besöks tid.',
	'Enable_Show_All_Pics' => 'Aktivera togglande på personliga galleriers visningsläge (alla bilder eller bara valda kategorin).<br /> När den är inställd på <b>nej</b>, visas bara den valda kategorin.',
	'Enable_Index_Supercells' => 'Aktivera super celler i index tabellen. <br /><span class="gensmall">Det gör det möjligt för mouseover effekter på kolumner, också känt som supercell effekt.</span>',
	'Show_OTF_Link' => 'Visa "Album OTF" länk på Album Index',
	'Show_AllPics_Link' => 'Visa "Alla Bilder" länk på Album Index',
	'Show_PG_Link' => 'Visa "Personligt Gallerier" länk på Album Index',

// 02 - Personal Galleries
	'Personal_Galleries' => 'Personliga Gallerier',
	'Album_personal_gallery_title' => 'Personligt Galleri',
	'Album_personal_gallery_explain' => 'Välj vilka användargrupper som har rätt att skapa och visa personliga gallerier. Dessa inställningar påverkas endast när du ställer "PRIVAT" för "Tillåtet att skapa personliga gallerier för användarna" eller "Vem kan visa personliga gallerier" i Album Konfiguration skärmen',
	'Album_personal_successfully' => 'Inställningen har blivit uppdaterad successfullt',
	'Click_return_album_personal' => 'Klicka %sHär%s för att återgå till Personligt Galleri Inställningar',
	'Allow_Album_Avatars' => 'Tillåt användare att använda egna postade bilder i Album som Avatar',
	'Album_Personal_Settings' => 'Personliga Gallerier',
	'Show_Personal_Sub_Cats' => 'Visa personliga underkategorier i index tabellen',
	'Personal_Gallery_Approval' => 'Personligt galleri bilders godkännande',
	'Personal_Gallery_MOD' => 'Personliga galleriet kan modereras av ägaren',
	'Personal_Sub_Cat_Limit' => 'Maximalt antal underkategorier (-1 = obegränsad)',
	'User_Can_Create_Personal_SubCats' => 'Användare kan skapa underkategorier i sina egna personliga galleri',
	'Click_return_personal_gallery_index' => 'Klicka %shär%s för att återgå till personliga galleri index',
	'Show_Recent_In_Personal_Subcats' => 'Visa de senaste bilderna i personliga underkategorier',
	'Show_Recent_Instead_of_Personal_NoPics' => 'Visa de senaste bilderna i stället för något bildmeddelande i personliga galleri',

// 03 - Categories
	'Categories' => 'Album Kategorier',
	'Album_Categories_Title' => 'Album Kategorier',
	'Album_Categories_Explain' => 'Hantera dina kategorier: skapa, ändra, ta bort, sortera, osv.',
	'Category_Permissions' => 'Kategorier Rättigheter',
	'Category_Title' => 'Kategorier Titel',
	'Category_Desc' => 'Kategorier Beskrivning',
	'View_level' => 'Visa Nivå',
	'Upload_level' => 'Ladda upp Nivå',
	'Rate_level' => 'Värdera Nivå',
	'Comment_level' => 'Kommentera Nivå',
	'Edit_level' => ' Redigera Nivå',
	'Delete_level' => 'Radera Nivå',
	'New_category_created' => 'Ny kategori har skapats successfullt',
	'Click_return_album_category' => 'Klicka %sHär%s för att återgå till Album Kategorier Manager',
	'Category_updated' => 'Denna kategori har uppdaterats successfullt',
	'Delete_Category' => 'Radera Kategori',
	'Delete_Category_Explain' => 'Radera en kategori och bestämma vart du vill sätta bilder den innehöll',
	'Delete_all_pics' => 'Radera alla bilder',
	'Category_deleted' => 'Denna kategori har blivit raderad successfullt',
	'Category_changed_order' => 'Denna kategori har blivit ändrad i ordning successfullt',
	'Personal_Root_Gallery' => 'Personligt Galleri Root Kategori',
	'Parent_Category' => 'Förälder Kategori (för denna kategori)',
	'Child_Category_Moved' => 'Vald kategori hade barn kategorier. Barn kategorier har flyttats till <b>%s</b> kategorin.',
	'No_Self_Refering_Cat' => 'Du kan inte ange en förälder kategori till sig själv',
	'Can_Not_Change_Main_Parent' => 'Du kan inte ändra till förälder på huvud kategorin i ditt personliga galleri',
	'Watermark' => 'Vattenstämpel',
	'Watermark_explain' => 'Du kan ange vattenmärkes filen som skall användas i denna kategori. Sätt in vattenmärkets filsökväg i förhållande till din Icy Phoenix root (dvs: <b>images/album/mark_fap.png</b>). Vattenmärket kommer att tillämpas endast om Vattenmärkes funktionen är på.',
	'Cat_Pics_Synchronize' => 'Sync Bild Räknare',
	'Cat_Pics_Synchronized' => 'Alla bilders räknare har blivit synkroniserade.',

// 04 - Permissions
	'Album_Auth_Title' => 'Album Rättigheter',
	'Album_Auth_Explain' => 'Välj vilken användargrupp(er) som kan vara moderatorer för varje album kategori, eller bara har den privata tillgången',
	'Select_a_Category' => 'Välj en Kategori',
	'Look_up_Category' => 'Lås upp Kategori',
	'Album_Auth_successfully' => 'Auth har uppdaterats successfullt',
	'Click_return_album_auth' => 'Klicka %sHär%s för att återgå till Album Rättigheter',
	'Upload' => 'Ladda upp',
	'Rate' => 'Värdera',
	'Comment' => 'Kommentar',

// 05 - Thumbnails
	'Use_Old_Thumbnails' => 'Använd gamla miniatyrbilds funktioner',
	'Use_Old_Thumbnails_Explain' => 'Om du aktiverar denna funktion kommer du att använda den gamla miniatyrbilds funktionen för att skapa små och medelstora miniatyrer och en snabb full bild laddning. Du bör använda denna funktion endast om du har problem utan att aktivera det.',

// 06 - Sorting
	'Album_Category_Sorting' => 'Sortering av albumets kategorier',
	'Album_Category_Sorting_Id' => 'ID',
	'Album_Category_Sorting_Name' => 'Namn',
	'Album_Category_Sorting_Order' => 'Sorterings Ordning (standard)',
	'Album_Category_Sorting_Direction' => 'Sorterings riktning (endast giltigt för ID och Namn sortering)',
	'Album_Category_Sorting_Asc' => 'Stigande',
	'Album_Category_Sorting_Desc' => 'Fallande',

// 07 - Clear Cache
	'Clear_Cache_Tab' => 'Cache',
	'Clear_Cache' => 'Rensa Cache',
	'Album_clear_cache_confirm' => 'Om du använder Miniatyrbilds Cache funktionen måste du rensa dina miniatyrbilders cache efter att du har ändrat dina miniatyrbilds inställningar i Album Konfiguration för att göra dem åter generade.<br /><br /> Vill du rensa dem nu?',
	'Thumbnail_cache_cleared_successfully' => '<br />Din miniatyrbildes cache har blivit rensat successfullt<br />&nbsp;',

// ACP - Javascript text
	'acp_ask_save_changes' => 'Vill du spara ändringarna ?\n(OK = Ja, Avbryt = Nej)',
	'acp_nothing_to_save' => 'Inget att spara!',
	'acp_settings_changed_ask_save' => 'Du har ändrat inställningarna. Vill du spara dem?\n(OK = Ja, Avbryt = Nej)',

// GD Info
	'GD_Info' => 'GD Info',
	'GD_Title' => 'GD Info',
	'GD_Description' => 'Hämta information om det aktuella installerade GD biblioteket',
	'GD_Version' => 'Version:',
	'GD_Freetype_Support' => 'Freetype Fonts Support:',
	'GD_Freetype_Linkage' => 'Freetype Länk Typ:',
	'GD_T1lib_Support' => 'T1lib Support:',
	'GD_Gif_Read_Support' => 'Gif Read Support:',
	'GD_Gif_Create_Support' => 'Gif Skapa Support:',
	'GD_Jpg_Support' => 'Jpg/Jpeg Support:',
	'GD_Png_Support' => 'Png Support:',
	'GD_Wbmp_Support' => 'WBMP Support:',
	'GD_XBM_Support' => 'XBM Support:',
	'GD_Jis_Mapped_Support' => 'Japanese Font Support:',
	'GD_True' => 'Ja',
	'GD_False' => 'Nej',

// Multiple Uploads Admin configuration
	'Upload_Settings' => 'Ladda upp',
	'Max_Files_To_Upload' => 'Maximalt antal filer som användare kan ladda upp på en gång',
	'Album_upload_settings' => 'Album Uppladdnings Inställningar',
	'Max_pregenerated_fields' => 'Maximalt antal fält att åter generera',
	'Dynamic_field_generation' => 'Aktivera dynamiskt tilläggning av uppladdade fält',
	'Pre_generate_fields' => 'Åter-generera uppladdnings fält',
	'Propercase_pic_title' => 'Proper fall bild titel t.ex. <i>\'Detta Är En Bild Titel\'</i><br />Ställ in den till \'NEJ\' kommer att resultera i <i>\'Detta är en bild titel\'</i>',
	'Pic_Resampling' => 'Aktivering av denna möjlighet, medger att varje bild kommer att ändras i farten vid behov (för att bibehålla bildens egenskaper respektera albumets inställningar i ACP).',
	'Max_file_size_resampling' => 'Maximal filstorlek innan ny provtagning (bytes)',

// CLowN
	'SP_Album_config' => 'CLowN SP',
	'SP_Album_config_explain' => 'Konfigurera vissa alternativ för Album Service Pack',
	'SP_Album_sp_general' => 'Allmänna Config',
	'SP_Album_sp_watermark' => 'Vattenstämpel Config',
	'SP_Album_sp_hotornot' => 'Het eller Ej Config',
	'SP_Rate_type' => 'Välj bild värderings visning',
	'SP_Rate_type_0' => 'Enbart Bilder',
	'SP_Rate_type_1' => 'Enbart Antal',
	'SP_Rate_type_2' => 'Antal och Bilder',
	'SP_Display_latest' => 'Visa senaste inlämnade bild block',
	'SP_Display_highest' => 'Visa högst värderade bild block',
	'SP_Display_most_viewed' => 'Visa mest visade bild block',
	'SP_Display_random' => 'Visa slumpmässiga bild block',
	'SP_Pic_row' => 'Antal rader i miniatyrbilds block',
	'SP_Pic_col' => 'Antal kolumner i miniatyrbilds block',
	'SP_Midthumb_use' => 'Använd  mid-miniatyrbild',
	'SP_Midthumb_cache' => 'Aktivera caching av mid-miniatyrbild',
	'SP_Midthumb_high' => 'Höjd på mid-miniatyrbild (pixlar)',
	'SP_Midthumb_width' => 'Bredd på mid-miniatyrbild (pixlar)',
	'SP_Watermark' => 'Använd Vattenstämpel',
	'SP_Watermark_users' => 'Visa Vattenstämpel för alla användare, om \'Nej\' bara visas för oregistrerade användare',
	'SP_Watermark_placent' => 'Vattenstämpel position på bild',
	'SP_Hon_already_rated' => 'Obegränsad betyg på Het eller Ej sida',
	'SP_Hon_sep_rating' => 'Lagra Hot eller Ej betyg i en separat tabell',
	'SP_Hon_where' => 'Visa bilder på heta eller inte från vilka kategorier? (lämna tomt för att använda bilder från alla kategorier, om mer än en kategori, separera med kommatecken)',
	'SP_Hon_users' => 'Kan oregistrerade användare värdera',

	'SP_Disabled' => 'Avaktiverat',
	'SP_Enabled' => 'Aktiverat',
	'SP_Yes' => 'Ja',
	'SP_No' => 'Nej',
	'SP_Always' => 'Alltid',
	'SP_Submit' => 'Skicka in',
	'SP_Reset' => 'Återställ',

// Nuffload
	'Nuffload_Config' => 'Nuffload Konfiguration',
	'Enable_Nuffload' => 'Aktivera Nuffload',
	'Enable_Nuffload_Explain' => 'Aktivera detta alternativ, Nuffload kommer att användas i stället för standard uppladdningsformuläret.',
	'progress_bar_configuration' => 'Nuffload - Progress Bar Konfiguration',
	'perl_uploader' => 'Aktivera Perl uppladdare',
	'path_to_bin' => 'Sökväg från icyphoenix root till cgi-bin (i.e. <b>./cgi-bin/</b> om du har icyphoenix i en under mapp)',
	'show_progress_bar' => 'Visa förloppsindikator vid uppladdning',
	'close_progress_bar' => 'Stäng förloppsindikator vid slutfört',
	'activity_timeout' => 'Aktivitets timeout (sekunder)',
	'simple_format' => 'Använd enkel formatering för Förloppsindikatorn',
	'multiple_uploads_configuration' => 'Nuffload - Multiple Uploads Configuration',
	'multiple_uploads' => 'Aktivera flera uppladdningar',
	'max_uploads' => 'Maximalt uppladdade fält',
	'zip_uploads' => 'Aktivera zip uppladdningar',
	'image_resizing_configuration' => 'Nuffload - Image Resizing Configuration',
	'image_resizing' => 'Aktivera bild storleksändring',
	'image_width' => 'Bild bredd',
	'image_height' => 'Bild höjd',
	'image_quality' => 'Bild kvalitet',
	)
);
?>