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
	'Album_config_explain' => '�ndra Foto Album inst�llningar h�r.<br />',
	'Album_config_updated' => 'Album Konfiguration har uppdaterats successfullt',
	'Click_return_album_config' => 'Klicka %sH�r%s f�r att �terg� till Album Konfiguration',
	'Max_pics' => 'Maximalt antal bilder f�r varje Kategori (-1 = obegr�nsat)',
	'User_pics_limit' => 'Bild begr�nsning per kategori f�r varje anv�ndare (-1 = obegr�nsat)',
	'Moderator_pics_limit' => 'Bild begr�nsning per kategori f�r varje moderator (-1 = obegr�nsat)',
	'Pics_Approval' => 'Bild Godk�nnande',
	'Rows_per_page' => 'Antal rader p� miniatyrbilds sidor',
	'Cols_per_page' => 'Antal kolumner p� miniatyrbilds sidor',
	'Thumbnail_quality' => 'Miniatyrbilds kvalitet (1-100)',
	'Thumbnail_cache' => 'Miniatyrbilds cache',
	'Manual_thumbnail' => 'Manuell miniatyrbild',
	'GD_version' => 'Optimerad f�r version av GD',
	'Pic_Desc_Max_Length' => 'Bild Beskrivning/Kommentar Max L�ngd (bytes)',
	'Hotlink_prevent' => 'Hotlink Prevention',
	'Hotlink_allowed' => 'Till�tna dom�ner f�r hotlink (�tskilda med kommatecken)',
	'Personal_gallery' => 'Till�tet att skapa personliga galleri f�r anv�ndarna',
	'Personal_gallery_limit' => 'Bild begr�nsning f�r varje personliga galleri (-1 = obegr�nsat)',
	'Personal_gallery_view' => 'Vem kan visa personliga gallerier som standard',
	'Rate_system' => 'Aktivera v�rderings system',
	'Rate_Scale' => 'V�rderings Skala',
	'Comment_system' => 'Aktivera kommentar system',
	'Thumbnail_Settings' => 'Miniatyrbilds Inst�llning',
	'Quick_Thumbnails' => 'Snabb Miniatyrbild',
	'Quick_Thumbnails_explain' => 'Aktivera detta alternativ s� kommer systemet att kontrollera om miniatyrbilder redan har tagits fram och f�rs�ker att skicka dem direkt till webbl�saren. Detta kommer att p�skynda miniatyrbilds generation n�r du tittar p� kategorier.',
	'Extra_Settings' => 'Extra Inst�llningar',
	'Default_Sort_Method' => 'Standard Sorterings Metod',
	'Default_Sort_Order' => 'Standard Sorterings Ordning',
	'Fullpic_Popup' => 'Visa fullst�ndig bild som ett popup',
	'Email_Notification' => 'Aktivera meddelande via e-post om nya bilder i albumet (endast f�r administrat�rer)',
	'Show_Download' => 'Visa knappen LADDA NER (som m�jligg�r nedladdning av bilder i zip-format) bara till dem som har LADDA UPP r�ttigheter i albumet (om du alltid v�ljer knappen kommer den alltid att vara tillg�nglig �ven om anv�ndarna inte har n�gra LADDA UPP beh�righeter)',
	'Show_Slideshow' => 'Aktivera Bildspel funktionen',
	'Show_Slideshow_Script' => 'Aktivera �verg�ngs effekter f�r Bildspel',
	'Show_Pic_Size' => 'Visa bild storlek p� miniatyrbilder',
	'Show_IMG_No_GD' => 'Visa GIF miniatyrbilder utan GD bibliotek (full bild l�ses in och visas sedan bara storleks�ndringen).',
	'Show_GIF_MidThumb' => 'Visa fullst�ndig GIF bilder om Mid Miniatyr �r aktiverat.',
	'Show_Pics_Nav' => 'Visa Bild Navigations Box p� Visa Sidan',
	'Invert_Nav_Arrows' => 'Kasta om Pil l�nkar i Showpage (h�gerpil = nyare)',
	'Show_Inline_Copyright' => 'Visa Copyright Info p� en enda rad',
	'Enable_Nuffimage' => 'Aktivera Bildernas Special Effekts sidan som bygger p� Nuffmon Images CLASS',
	'Enable_Sepia_BW' => 'Aktivera Sepia och B & W i Special Effekts sida (avaktivera denna funktion om du inte vill ladda servern\'s CPU)',
	'Show_EXIF_Info' => 'Visa bild EXIF-information',
	'Set_Memory' => 'St�ll in en minnes gr�ns via PHP (MB)',
	'Set_Memory_Explain' => 'Denna funktion kan anv�ndas f�r att �ka minnes gr�nsen i PHP (denna inst�llning m�ste vara till�ten av din v�rd): Du kan prova att �ka minnet n�r bilderna inte l�ses in korrekt. F�r att undvika h�gre minnes begr�nsningar �r max v�rdet tvunget att vara 16MB.',
	'LB_Preview' => 'Aktivera LightBox Preview',
	'LB_Preview_Explain' => 'Denna funktion kommer att visa en LightBox med bild f�rhandsgranskning n�r du flyttar muspekaren �ver en miniatyrbild.',
    'Album_config_notice' => 'Om du �ndrar det aktuella Foto Albumets inst�llningar och sedan v�ljer en annan flik, kommer du att uppmanas att spara dina �ndringar.<br />Systemet kommer <b>inte att spara</b> f�r�ndringarna f�r dig automatiskt.',
	'Save_sucessfully_confimation' => '%s sparades successfullt',
	'Show_Recent_In_Subcats' => 'Visa de senaste bilderna i underkategorierna',
	'Show_Recent_Instead_of_NoPics' => 'Visa de senaste bilderna i st�llet f�r n�got bildmeddelande',
	'Show_Last_Comments' => 'Visa senaste kommentars block p� albumet index och kategorier',
	'Album_Index_Settings' => 'Album Index',
	'Album_Index_Page_Settings' => 'Album Index Sido Inst�llningar',
	'Show_Index_Subcats' => 'Visa underkategorier i index tabellen',
	'Show_Index_Thumb' => 'Visa kategori miniatyrbild i index tabellen',
	'Show_Index_Pics' => 'Visa antalet bilder i nuvarande kategori i index tabellen',
	'Show_Index_Comments' => 'Visa antalet kommentarer i nuvarande kategori i index tabellen',
	'Show_Index_Total_Pics' => 'Visa antalet totala bilder f�r nuvarande kategorierna och alla dess underkategorier i index tabellen',
	'Show_Index_Total_Comments' => 'Visa antalet totala kommentarer f�r nuvarande kategorierna och alla dess underkategorier i index tabellen',
	'Show_Index_Last_Comment' => 'Visa senaste kommentarer f�r nuvarande kategorierna och alla dess underkategorier i index tabellen',
	'Show_Index_Last_Pic' => 'Visa senaste bild informationen f�r nuvarande kategorierna och alla dess underkategorier i index tabellen',
	'Line_Break_Subcats' => 'Visa varje underkategori p� en ny rad',
	'Show_Personal_Gallery_Link' => 'Visa Personligt Galleri och Anv�ndare Personligt Galleri l�nk i Underkategorier',
	'Album_Personal_Auth_Explain' => 'V�lj vilken anv�ndargrupp(er) som kan vara moderatorer f�r <b>alla</b> personliga albums kategorier eller bara har privat tillg�ng till dem',
	'Album_debug_mode' => 'Aktivera hierarkinska fels�kningsl�get.<br /><span class="gensmall">Detta kommer att generera en hel del extra output p� sidan och �ven n�gra huvud varningar, som alla �r ok.<br />Denna m�jlighet b�r <b>endast</b> anv�ndas n�r det �r problem.</span>',
	'New_Pic_Check_Interval' => 'Tid att anv�nda f�r att se om en bild �r ny eller inte.<br /><span class="gensmall"><b>Format</b> : &lt;number&gt;&lt;type&gt; D�r typ �r antingen t, d, v eller m (timme, dag, vecka eller m�nad)<br /> t.ex. 12T = 12 timmar och 12D = 12 dagar och 12V = 12 veckor och 12M = 12 m�nader<br />Om ingen typ anges kommer systemet att anv�nda <b>dagar</b></span>',
	'New_Pic_Check_Interval_Desc' => '<span class="gensmall">T = TIMMAR, D = DAGAR, V = VECKOR, M = M�NADER</span>',
	'New_Pic_Check_Interval_LV' => 'Aktivering av denna m�jlighet r�knas p� de nya bildernas motverkan och bygger �ven p� anv�ndarnas senaste bes�ks tid.',
	'Enable_Show_All_Pics' => 'Aktivera togglande p� personliga galleriers visningsl�ge (alla bilder eller bara valda kategorin).<br /> N�r den �r inst�lld p� <b>nej</b>, visas bara den valda kategorin.',
	'Enable_Index_Supercells' => 'Aktivera super celler i index tabellen. <br /><span class="gensmall">Det g�r det m�jligt f�r mouseover effekter p� kolumner, ocks� k�nt som supercell effekt.</span>',
	'Show_OTF_Link' => 'Visa "Album OTF" l�nk p� Album Index',
	'Show_AllPics_Link' => 'Visa "Alla Bilder" l�nk p� Album Index',
	'Show_PG_Link' => 'Visa "Personligt Gallerier" l�nk p� Album Index',

// 02 - Personal Galleries
	'Personal_Galleries' => 'Personliga Gallerier',
	'Album_personal_gallery_title' => 'Personligt Galleri',
	'Album_personal_gallery_explain' => 'V�lj vilka anv�ndargrupper som har r�tt att skapa och visa personliga gallerier. Dessa inst�llningar p�verkas endast n�r du st�ller "PRIVAT" f�r "Till�tet att skapa personliga gallerier f�r anv�ndarna" eller "Vem kan visa personliga gallerier" i Album Konfiguration sk�rmen',
	'Album_personal_successfully' => 'Inst�llningen har blivit uppdaterad successfullt',
	'Click_return_album_personal' => 'Klicka %sH�r%s f�r att �terg� till Personligt Galleri Inst�llningar',
	'Allow_Album_Avatars' => 'Till�t anv�ndare att anv�nda egna postade bilder i Album som Avatar',
	'Album_Personal_Settings' => 'Personliga Gallerier',
	'Show_Personal_Sub_Cats' => 'Visa personliga underkategorier i index tabellen',
	'Personal_Gallery_Approval' => 'Personligt galleri bilders godk�nnande',
	'Personal_Gallery_MOD' => 'Personliga galleriet kan modereras av �garen',
	'Personal_Sub_Cat_Limit' => 'Maximalt antal underkategorier (-1 = obegr�nsad)',
	'User_Can_Create_Personal_SubCats' => 'Anv�ndare kan skapa underkategorier i sina egna personliga galleri',
	'Click_return_personal_gallery_index' => 'Klicka %sh�r%s f�r att �terg� till personliga galleri index',
	'Show_Recent_In_Personal_Subcats' => 'Visa de senaste bilderna i personliga underkategorier',
	'Show_Recent_Instead_of_Personal_NoPics' => 'Visa de senaste bilderna i st�llet f�r n�got bildmeddelande i personliga galleri',

// 03 - Categories
	'Categories' => 'Album Kategorier',
	'Album_Categories_Title' => 'Album Kategorier',
	'Album_Categories_Explain' => 'Hantera dina kategorier: skapa, �ndra, ta bort, sortera, osv.',
	'Category_Permissions' => 'Kategorier R�ttigheter',
	'Category_Title' => 'Kategorier Titel',
	'Category_Desc' => 'Kategorier Beskrivning',
	'View_level' => 'Visa Niv�',
	'Upload_level' => 'Ladda upp Niv�',
	'Rate_level' => 'V�rdera Niv�',
	'Comment_level' => 'Kommentera Niv�',
	'Edit_level' => ' Redigera Niv�',
	'Delete_level' => 'Radera Niv�',
	'New_category_created' => 'Ny kategori har skapats successfullt',
	'Click_return_album_category' => 'Klicka %sH�r%s f�r att �terg� till Album Kategorier Manager',
	'Category_updated' => 'Denna kategori har uppdaterats successfullt',
	'Delete_Category' => 'Radera Kategori',
	'Delete_Category_Explain' => 'Radera en kategori och best�mma vart du vill s�tta bilder den inneh�ll',
	'Delete_all_pics' => 'Radera alla bilder',
	'Category_deleted' => 'Denna kategori har blivit raderad successfullt',
	'Category_changed_order' => 'Denna kategori har blivit �ndrad i ordning successfullt',
	'Personal_Root_Gallery' => 'Personligt Galleri Root Kategori',
	'Parent_Category' => 'F�r�lder Kategori (f�r denna kategori)',
	'Child_Category_Moved' => 'Vald kategori hade barn kategorier. Barn kategorier har flyttats till <b>%s</b> kategorin.',
	'No_Self_Refering_Cat' => 'Du kan inte ange en f�r�lder kategori till sig sj�lv',
	'Can_Not_Change_Main_Parent' => 'Du kan inte �ndra till f�r�lder p� huvud kategorin i ditt personliga galleri',
	'Watermark' => 'Vattenst�mpel',
	'Watermark_explain' => 'Du kan ange vattenm�rkes filen som skall anv�ndas i denna kategori. S�tt in vattenm�rkets fils�kv�g i f�rh�llande till din Icy Phoenix root (dvs: <b>images/album/mark_fap.png</b>). Vattenm�rket kommer att till�mpas endast om Vattenm�rkes funktionen �r p�.',
	'Cat_Pics_Synchronize' => 'Sync Bild R�knare',
	'Cat_Pics_Synchronized' => 'Alla bilders r�knare har blivit synkroniserade.',

// 04 - Permissions
	'Album_Auth_Title' => 'Album R�ttigheter',
	'Album_Auth_Explain' => 'V�lj vilken anv�ndargrupp(er) som kan vara moderatorer f�r varje album kategori, eller bara har den privata tillg�ngen',
	'Select_a_Category' => 'V�lj en Kategori',
	'Look_up_Category' => 'L�s upp Kategori',
	'Album_Auth_successfully' => 'Auth har uppdaterats successfullt',
	'Click_return_album_auth' => 'Klicka %sH�r%s f�r att �terg� till Album R�ttigheter',
	'Upload' => 'Ladda upp',
	'Rate' => 'V�rdera',
	'Comment' => 'Kommentar',

// 05 - Thumbnails
	'Use_Old_Thumbnails' => 'Anv�nd gamla miniatyrbilds funktioner',
	'Use_Old_Thumbnails_Explain' => 'Om du aktiverar denna funktion kommer du att anv�nda den gamla miniatyrbilds funktionen f�r att skapa sm� och medelstora miniatyrer och en snabb full bild laddning. Du b�r anv�nda denna funktion endast om du har problem utan att aktivera det.',

// 06 - Sorting
	'Album_Category_Sorting' => 'Sortering av albumets kategorier',
	'Album_Category_Sorting_Id' => 'ID',
	'Album_Category_Sorting_Name' => 'Namn',
	'Album_Category_Sorting_Order' => 'Sorterings Ordning (standard)',
	'Album_Category_Sorting_Direction' => 'Sorterings riktning (endast giltigt f�r ID och Namn sortering)',
	'Album_Category_Sorting_Asc' => 'Stigande',
	'Album_Category_Sorting_Desc' => 'Fallande',

// 07 - Clear Cache
	'Clear_Cache_Tab' => 'Cache',
	'Clear_Cache' => 'Rensa Cache',
	'Album_clear_cache_confirm' => 'Om du anv�nder Miniatyrbilds Cache funktionen m�ste du rensa dina miniatyrbilders cache efter att du har �ndrat dina miniatyrbilds inst�llningar i Album Konfiguration f�r att g�ra dem �ter generade.<br /><br /> Vill du rensa dem nu?',
	'Thumbnail_cache_cleared_successfully' => '<br />Din miniatyrbildes cache har blivit rensat successfullt<br />&nbsp;',

// ACP - Javascript text
	'acp_ask_save_changes' => 'Vill du spara �ndringarna ?\n(OK = Ja, Avbryt = Nej)',
	'acp_nothing_to_save' => 'Inget att spara!',
	'acp_settings_changed_ask_save' => 'Du har �ndrat inst�llningarna. Vill du spara dem?\n(OK = Ja, Avbryt = Nej)',

// GD Info
	'GD_Info' => 'GD Info',
	'GD_Title' => 'GD Info',
	'GD_Description' => 'H�mta information om det aktuella installerade GD biblioteket',
	'GD_Version' => 'Version:',
	'GD_Freetype_Support' => 'Freetype Fonts Support:',
	'GD_Freetype_Linkage' => 'Freetype L�nk Typ:',
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
	'Max_Files_To_Upload' => 'Maximalt antal filer som anv�ndare kan ladda upp p� en g�ng',
	'Album_upload_settings' => 'Album Uppladdnings Inst�llningar',
	'Max_pregenerated_fields' => 'Maximalt antal f�lt att �ter generera',
	'Dynamic_field_generation' => 'Aktivera dynamiskt till�ggning av uppladdade f�lt',
	'Pre_generate_fields' => '�ter-generera uppladdnings f�lt',
	'Propercase_pic_title' => 'Proper fall bild titel t.ex. <i>\'Detta �r En Bild Titel\'</i><br />St�ll in den till \'NEJ\' kommer att resultera i <i>\'Detta �r en bild titel\'</i>',
	'Pic_Resampling' => 'Aktivering av denna m�jlighet, medger att varje bild kommer att �ndras i farten vid behov (f�r att bibeh�lla bildens egenskaper respektera albumets inst�llningar i ACP).',
	'Max_file_size_resampling' => 'Maximal filstorlek innan ny provtagning (bytes)',

// CLowN
	'SP_Album_config' => 'CLowN SP',
	'SP_Album_config_explain' => 'Konfigurera vissa alternativ f�r Album Service Pack',
	'SP_Album_sp_general' => 'Allm�nna Config',
	'SP_Album_sp_watermark' => 'Vattenst�mpel Config',
	'SP_Album_sp_hotornot' => 'Het eller Ej Config',
	'SP_Rate_type' => 'V�lj bild v�rderings visning',
	'SP_Rate_type_0' => 'Enbart Bilder',
	'SP_Rate_type_1' => 'Enbart Antal',
	'SP_Rate_type_2' => 'Antal och Bilder',
	'SP_Display_latest' => 'Visa senaste inl�mnade bild block',
	'SP_Display_highest' => 'Visa h�gst v�rderade bild block',
	'SP_Display_most_viewed' => 'Visa mest visade bild block',
	'SP_Display_random' => 'Visa slumpm�ssiga bild block',
	'SP_Pic_row' => 'Antal rader i miniatyrbilds block',
	'SP_Pic_col' => 'Antal kolumner i miniatyrbilds block',
	'SP_Midthumb_use' => 'Anv�nd  mid-miniatyrbild',
	'SP_Midthumb_cache' => 'Aktivera caching av mid-miniatyrbild',
	'SP_Midthumb_high' => 'H�jd p� mid-miniatyrbild (pixlar)',
	'SP_Midthumb_width' => 'Bredd p� mid-miniatyrbild (pixlar)',
	'SP_Watermark' => 'Anv�nd Vattenst�mpel',
	'SP_Watermark_users' => 'Visa Vattenst�mpel f�r alla anv�ndare, om \'Nej\' bara visas f�r oregistrerade anv�ndare',
	'SP_Watermark_placent' => 'Vattenst�mpel position p� bild',
	'SP_Hon_already_rated' => 'Obegr�nsad betyg p� Het eller Ej sida',
	'SP_Hon_sep_rating' => 'Lagra Hot eller Ej betyg i en separat tabell',
	'SP_Hon_where' => 'Visa bilder p� heta eller inte fr�n vilka kategorier? (l�mna tomt f�r att anv�nda bilder fr�n alla kategorier, om mer �n en kategori, separera med kommatecken)',
	'SP_Hon_users' => 'Kan oregistrerade anv�ndare v�rdera',

	'SP_Disabled' => 'Avaktiverat',
	'SP_Enabled' => 'Aktiverat',
	'SP_Yes' => 'Ja',
	'SP_No' => 'Nej',
	'SP_Always' => 'Alltid',
	'SP_Submit' => 'Skicka in',
	'SP_Reset' => '�terst�ll',

// Nuffload
	'Nuffload_Config' => 'Nuffload Konfiguration',
	'Enable_Nuffload' => 'Aktivera Nuffload',
	'Enable_Nuffload_Explain' => 'Aktivera detta alternativ, Nuffload kommer att anv�ndas i st�llet f�r standard uppladdningsformul�ret.',
	'progress_bar_configuration' => 'Nuffload - Progress Bar Konfiguration',
	'perl_uploader' => 'Aktivera Perl uppladdare',
	'path_to_bin' => 'S�kv�g fr�n icyphoenix root till cgi-bin (i.e. <b>./cgi-bin/</b> om du har icyphoenix i en under mapp)',
	'show_progress_bar' => 'Visa f�rloppsindikator vid uppladdning',
	'close_progress_bar' => 'St�ng f�rloppsindikator vid slutf�rt',
	'activity_timeout' => 'Aktivitets timeout (sekunder)',
	'simple_format' => 'Anv�nd enkel formatering f�r F�rloppsindikatorn',
	'multiple_uploads_configuration' => 'Nuffload - Multiple Uploads Configuration',
	'multiple_uploads' => 'Aktivera flera uppladdningar',
	'max_uploads' => 'Maximalt uppladdade f�lt',
	'zip_uploads' => 'Aktivera zip uppladdningar',
	'image_resizing_configuration' => 'Nuffload - Image Resizing Configuration',
	'image_resizing' => 'Aktivera bild storleks�ndring',
	'image_width' => 'Bild bredd',
	'image_height' => 'Bild h�jd',
	'image_quality' => 'Bild kvalitet',
	)
);
?>