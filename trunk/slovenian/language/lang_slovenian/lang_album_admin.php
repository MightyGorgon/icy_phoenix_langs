<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_album_admin.php 34 2009-05-07 22:45:10Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Smartor (smartor_xp@hotmail.com)
* TheSteffen, KugeLSichA, Tom, Carsten
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
	'Album_config_explain' => 'tukaj spremeni nastavitve slikovnega albuma.<br />',
	'Album_config_updated' => 'konfiguracija albuma je bila uspe�no nadgrajena',
	'Click_return_album_config' => 'klikni %tukaj%s za vrnitev na konfiguracijo albuma',
	'Max_pics' => 'maksimalno �tevilo slik na kategorijo (-1 = unlimited)',
	'User_pics_limit' => 'omejitev slik za kategorijo za vsakega uporabnika (-1 = unlimited)',
	'Moderator_pics_limit' => 'omejitev slik zakategorijo na vsakega moderatorja (-1 = unlimited)',
	'Pics_Approval' => 'slika odobrenaPics',
	'Rows_per_page' => '�tevilo vrstic na slici strani',
	'Cols_per_page' => '�tevilo stolpcev na slici strani',
	'Thumbnail_quality' => 'kakovost slicice (1-100)',
	'Thumbnail_cache' => 'predpomnilnik slicice',
	'Manual_thumbnail' => 'rocna slicica',
	'GD_version' => 'optimiziraj za verzijo  GD',
	'Pic_Desc_Max_Length' => 'Opis slike/dol�ina maksimalnega komentarja (bytes)',
	'Hotlink_prevent' => 'preprecevanje vroce povezave',
	'Hotlink_allowed' => 'dovoljeno za domene vroce povezave (separated by a comma)',
	'Personal_gallery' => 'dovoljeno za ustvarjanje osebne galerije uporabnikov',
	'Personal_gallery_limit' => 'omejitev slik za vsako osebno galerijo (-1 = unlimited)',
	'Personal_gallery_view' => 'kdo lahko po privzetem gleda osebne galerije',
	'Rate_system' => 'omogoci ocenjevlani sistem',
	'Rate_Scale' => 'ocenjevalni obseg',
	'Comment_system' => 'omogoci sistem komentiranja',
	'Thumbnail_Settings' => 'nastavitve slicic',
	'Quick_Thumbnails' => 'hitre slicice',
	'Quick_Thumbnails_explain' => 'omogoci mo�nost preverjanja sistema ce je slicica �e bila generirana in jo poskusi poslati naravnost v brskalnik. To bo pospe�ilo generiranje slike pri ogledu.',
	'Extra_Settings' => 'dodatne nastavitve',
	'Default_Sort_Method' => 'privzeta metoda sortiranja',
	'Default_Sort_Order' => 'privzeti red sortiranja',
	'Fullpic_Popup' => 'Poglej si celo sliko kot novo popup okno',
	'Email_Notification' => 'omogoci elektronsko obvestilo za novo sliko v albumu (only to admins)',
	'Show_Download' => 'poka�i gumb prenesi (which enables the downloading of pictures in ZIP format) samo tistim ki imajo dovoljenje nalaganja v album (if you choose ALWAYS the button will be always available even if the users have no UPLOAD permissions)',
	'Show_Slideshow' => 'omogoci funkcijo diaprojekcije',
	'Show_Slideshow_Script' => 'Omogoci efekt prehoda v diaprojekciji',
	'Show_Pic_Size' => 'poka�i velikost slike na slici',
	'Show_IMG_No_GD' => 'poka�i GIF slicice brez uporabe GD knji�nice (full images are loaded and then just shown resized).',
	'Show_GIF_MidThumb' => 'poka�i celo GIF sliko ce je sredinski palec omogocen.',
	'Show_Pics_Nav' => 'prika�i navigacijsko polje slike na strani',
	'Invert_Nav_Arrows' => 'obrni pu�cice povezave na prikazani strani (right arrow = more recent)',
	'Show_Inline_Copyright' => 'poka�i avtorko za�cito v eni vrstici',
	'Enable_Nuffimage' => 'omogoci posebno efektivne  slikovne strani utemeljene na Nuffmon slikovni razred',
	'Enable_Sepia_BW' => 'omogoci Sepia in B&W v posebno efektivnih straneh (disable this function if you want to not load the server\'s CPU)',
	'Show_EXIF_Info' => 'poka�i slikovno EXIF informacijo',
	'Set_Memory' => 'nastavi spominsko omejitev preko PHP (MB)',
	'Set_Memory_Explain' => 'ta funkcija se lahko uporablja za povecanje omejitve spomina v (this setting must be allowed by your hosting IP): lahko poizkusi� povecati spomin ko tvoje slike niso nalo�ene pravilno. v izogib povecanju omejitev spomina mora biti maksimalna vrednost 16MB.',
	'LB_Preview' => 'omogoci predogled svetla �katla',
	'LB_Preview_Explain' => 'ta funkcija ti bo pokazala svetlo �katlo z sliko predogleda ko mi�ko premakne� cez slicico.',
	'Album_config_notice' => 'ce spremeni� trenutno nastavljene nastavitve albuma in potem pritisne� tabulator,bo� spodbujen k shranjevanju sprememb.<br />sistem ne bo <b>shranil</b> sprememb avtomatsko.',
	'Save_sucessfully_confimation' => '%s je bila shranjena uspe�no',
	'Show_Recent_In_Subcats' => 'poka�i podkategorije nedavne slike',
	'Show_Recent_Instead_of_NoPics' => 'poka�i nedavno slika namesto sporocilo brez slike',
	'Show_Last_Comments' => 'prika�i zadnji blok pripomb v seznamu albuma in kategorij',
	'Album_Index_Settings' => 'indeks albuma',
	'Album_Index_Page_Settings' => 'nastavitve seznama albuma strani',
	'Show_Index_Subcats' => 'poka�i podkategorije v indeksu tabele',
	'Show_Index_Thumb' => 'poka�i kategorijo slicice v indeksu tabele',
	'Show_Index_Pics' => 'poka�i �tevilo slik v trenutni kategoriji v indeksu tabele',
	'Show_Index_Comments' => 'poka�i �tevilo komentarjev v trenutni kategoriji v indeksu tabele',
	'Show_Index_Total_Pics' => 'poka�i �tevilo vseh slik v trenutni kategoriji in vseh podkategorij v indeksu tabele',
	'Show_Index_Total_Comments' => 'poka�i �tevilo vseh komentarjev v trenutni kategoriji in vseh podkategorij v indeksu tabele',
	'Show_Index_Last_Comment' => 'poka�i zadnji komentar v trenutni kategoriji in vseh podkategorij v indeksu tabele',
	'Show_Index_Last_Pic' => 'poka�i zadnjo informacijo slike v trenutni kategoriji in vseh podkategorij v indeksu tabele',
	'Line_Break_Subcats' => 'poka�i vsako podkategorijo na novi vrstici',
	'Show_Personal_Gallery_Link' => 'poka�i osebno galerijo in povezavo uporabnik�ke osebne galerije in podkategorije',
	'Album_Personal_Auth_Explain' => 'izberi katera uporabni�ka skupina(s) je lahko moderator za <b>vse</b> osebne albumske kategorije ali imajo samo privat dostop to njih',
	'Album_debug_mode' => 'omogci hierarhijo razhro�cevalskega nacina.<br /><span class="gensmall">To bo ustvarilo veliko dodatnega izhoda na strani in tudi nekaj opozoril v glavi, ki pa so v redu.<br />ta mo�nost naj bi <b>only</b> bila uporabljena ko imate te�ave.</span>',
	'New_Pic_Check_Interval' => 'cas ki se uporabi da se opazi ali je slika nova ali ni.<br /><span class="gensmall"><b>Format</b> : &lt;number&gt;&lt;type&gt; Where type is either h, d, w or m (hour, day, week or month)<br /> e.g. 12H = 12 hours and 12D = 12 days and 12W = 12 weeks and 12M = 12 months<br />ce ni dolocena vrsta bo sistem uporabljal <b>days</b></span>',
	'New_Pic_Check_Interval_Desc' => '<span class="gensmall">H = HOURS, D = DAYS, W = WEEKS, M = MONTHS</span>',
	'New_Pic_Check_Interval_LV' => 'omogocanje mo�nosti �tevec novih slik je odvisen zadnjega obiska uporabnika.',
	'Enable_Show_All_Pics' => 'omogocanje preklapljanja nacina pogleda v osebni galeriji (all pictures or only selected category).<br /> ko je nastavljeno da <b>no</b>, je samo izbrana kategorija prikazana.',
	'Enable_Index_Supercells' => 'omogoci super celico v indeksu tabele. <br /><span class="gensmall">to bo omogocilo preko mi�ke efekt na stolpcih, prav tako znan kot tudi efekt super celice.</span>',
	'Show_OTF_Link' => 'poka�i "Album OTF" povezavo na indeks albuma',
	'Show_AllPics_Link' => 'poka�i "All Pics" povezavo na indeks albuma',
	'Show_PG_Link' => 'poka�i "Personal Galleries" povezavo na indeks albuma',

// 02 - Personal Galleries
	'Personal_Galleries' => 'Osebne galerije',
	'Album_personal_gallery_title' => 'Osebna galerija',
	'Album_personal_gallery_explain' => 'Izberi katera uporabni�ka skupina ima pravico ustvariti in gledati oseben galerije. Ta nastavitve zacnejo veljati ko nastavite "PRIVATE" za "Allowed to create personal gallery for users" ali "Who can view personal galleries" v albumu konfiguracij zaslona',
	'Album_personal_successfully' => 'Nastavljanje je bilo uspe�no nadgrajeno',
	'Click_return_album_personal' => 'klikni %stukaj%s za vrnitev v nastavitve osebne galerije',
	'Allow_Album_Avatars' => 'dovoli uporabnikm uporabo svojih objavljenih slik v albumu kot Avatar',
	'Album_Personal_Settings' => 'osebne galerije',
	'Show_Personal_Sub_Cats' => 'poka�i osebne podkategorije v indeksu tabele',
	'Personal_Gallery_Approval' => 'osebna galerija odobrava sliko',
	'Personal_Gallery_MOD' => 'osebna galerija je lahko moderirana preko lastnika',
	'Personal_Sub_Cat_Limit' => 'maksimalno �tevilo podkategorij (-1 = unlimited)',
	'User_Can_Create_Personal_SubCats' => 'uporabniki lahko ustvarijo podkategorije v svoji osebni galeriji',
	'Click_return_personal_gallery_index' => 'klikni %stukaj%s za vrnitev v osebno galerijo indeksa',
	'Show_Recent_In_Personal_Subcats' => 'poka�i nedavne slike v osebnih podkategorijah',
	'Show_Recent_Instead_of_Personal_NoPics' => 'poka�i nedavne slike namesto sporocila brez slik v osebni galeriji',

// 03 - Categories
	'Categories' => 'kategorije albuma',
	'Album_Categories_Title' => 'kategorije albuma',
	'Album_Categories_Explain' => 'upravljaj svoje kategorije: ustvari, spremeni, izbri�i ali sortiraj, itd.',
	'Category_Permissions' => 'dovoljenja kategorij',
	'Category_Title' => 'naslov kategorij',
	'Category_Desc' => 'Category Description',
	'View_level' => 'poglej raven',
	'Upload_level' => 'nalo�i raven',
	'Rate_level' => 'oceni raven',
	'Comment_level' => 'komentiraj raven',
	'Edit_level' => ' uredi raven',
	'Delete_level' => 'izbri�i raven',
	'New_category_created' => 'nova kategorija je bila ustvarjena uspe�no',
	'Click_return_album_category' => 'klikni %stukaj%s za vrnitev v upravljalca kategorij albuma',
	'Category_updated' => 'ta kategorija je bila nadgrajena uspe�no',
	'Delete_Category' => 'izbri�i kategorijo',
	'Delete_Category_Explain' => 'izbri�i kategorijo in doloci kje hoce� imeti vsebovano sliko',
	'Delete_all_pics' => 'izbri�i vse slike',
	'Category_deleted' => 'kategorija je bila izbrisana uspe�no',
	'Category_changed_order' => 'kategorija je bila po redu  uspe�no spremenjena',
	'Personal_Root_Gallery' => 'osebni galerijski vir kategorij',
	'Parent_Category' => 'star�evska kategorija(for this category)',
	'Child_Category_Moved' => 'izbrane kategorije imajo otro�ke kategorije. Otro�ke kategorije so bile prestavljene v <b>%s</b> kategorije.',
	'No_Self_Refering_Cat' => 'ne more� dolociti kategorije star�evstva na sebi',
	'Can_Not_Change_Main_Parent' => 'ne more� spremeniti star�evstva glavne kategorije za svojo osebno galerijo',
	'Watermark' => 'vodni �ig',
	'Watermark_explain' => 'Dolocite lahko vodni �ig datoteko, ki se uporablja v tej kategoriji. Vstavite pot vodnega �iga datoteke spo�tovanje do va�ega Icy Phoenix root (i.e.: <b>images/album/mark_fap.png</b>). vodni �ig bo bil potrjen  samo ce je funkcija vodni �ig vklopljena.',
	'Cat_Pics_Synchronize' => 'sinhroniziran �tevalnik slik',
	'Cat_Pics_Synchronized' => '�tevec vseh slik je bil sinhroniziran.',

// 04 - Permissions
	'Album_Auth_Title' => 'dovoljenja albuma',
	'Album_Auth_Explain' => 'izberi katera uporabni�ka skupina(s) je lahko moderator za vsako kategorijo albuma ali imajo samo privat dostop',
	'Select_a_Category' => 'izberi kategorijo',
	'Look_up_Category' => 'poi�ci kategorijo',
	'Album_Auth_successfully' => 'dovoljenje je bilo uspe�no posodobljeno',
	'Click_return_album_auth' => 'klikni %stukaj%s za vrnitev v dovoljenja albuma',
	'Upload' => 'nalo�i',
	'Rate' => 'oceni',
	'Comment' => 'komentiraj',

// 05 - Thumbnails
	'Use_Old_Thumbnails' => 'uporabi funkcijo starih slicic',
	'Use_Old_Thumbnails_Explain' => 'ce imate to omogoceno funkcijo, boste lahko uporabljali funkcijo starih za ustvarjanje majhnih ali srednjih slicic in hitro sliko za nalaganje slicice. To funkcijo naj bi uporabljali samo ce imate te�ave z omogocanjem tega.',

// 06 - Sorting
	'Album_Category_Sorting' => 'sortiranje kategorij albuma',
	'Album_Category_Sorting_Id' => 'Identifikacija',
	'Album_Category_Sorting_Name' => 'ime',
	'Album_Category_Sorting_Order' => 'red sortiranja (default)',
	'Album_Category_Sorting_Direction' => 'smer urejanja (only valid for ID and Name sorting)',
	'Album_Category_Sorting_Asc' => 'dviganje',
	'Album_Category_Sorting_Desc' => 'spu�cajoc',

// 07 - Clear Cache
	'Clear_Cache_Tab' => 'predpomnilnik',
	'Clear_Cache' => 'ocisti predpomnilnik',
	'Album_clear_cache_confirm' => 'ce uporablja� funkcijo predpomnilnika slicic mora� ocistiti predpomnilnik slicic po spremembah nastavitev slicic v konfiguracijah albuma da jih ponovno ustvari.<br /><br />ali jih �elite ocistiti zdaj?',
	'Thumbnail_cache_cleared_successfully' => '<br />va� predpomnilnik je bil oci�cen uspe�no<br />&nbsp;',

// ACP - Javascript text
	'acp_ask_save_changes' => '�elite shraniti spremembe ?\n(OK = Yes, Cancel = No)',
	'acp_nothing_to_save' => 'nic za shraniti!',
	'acp_settings_changed_ask_save' => 'spremenili ste nastavitve. jih �elite shraniti?\n(OK = Yes, Cancel = No)',

// GD Info
	'GD_Info' => 'GD Informacija',
	'GD_Title' => 'GD Informacija',
	'GD_Description' => 'nalo�i informacije o trenutno name�ceni GD knji�nici',
	'GD_Version' => 'Verzija:',
	'GD_Freetype_Support' => 'svobodni tip podpora pisave:',
	'GD_Freetype_Linkage' => 'svobodni tip tipa povezav:',
	'GD_T1lib_Support' => 'T1lib podpora:',
	'GD_Gif_Read_Support' => 'Gif branje podpora:',
	'GD_Gif_Create_Support' => 'Gif ustvari podporo:',
	'GD_Jpg_Support' => 'Jpg/Jpeg podpora:',
	'GD_Png_Support' => 'Png podpora:',
	'GD_Wbmp_Support' => 'WBMP podpora:',
	'GD_XBM_Support' => 'XBM podpora:',
	'GD_Jis_Mapped_Support' => 'Japonska podpora pisave:',
	'GD_True' => 'Da',
	'GD_False' => 'NE',

// Multiple Uploads Admin configuration
	'Upload_Settings' => 'Nalo�i',
	'Max_Files_To_Upload' => 'Maksimalno �tevilo datoteka ki jih uporabnik lahko nalo�i v casu',
	'Album_upload_settings' => 'nastavitve nalaganja albuma',
	'Max_pregenerated_fields' => 'maksimalno �tevilo vnaprej ustvarjenih polj',
	'Dynamic_field_generation' => 'omogoci dinamicno dodajanja polj nalaganja',
	'Pre_generate_fields' => 'ustvarjeno za nalaganje datotek',
	'Propercase_pic_title' => 'pravilen primer naslova slike npr. <i>\'this is picture title\'</i><br />Setting it to \'NO\' will result in this <i>\'This is a picture title\'</i>',
	'Pic_Resampling' => 'omogoci mo�nost da bo vsaka slika  spremenila velikost na letenje, ce bo potrebno(to keep image properties respecting the album settings in ACP).',
	'Max_file_size_resampling' => 'najvecja velikost datoteke pred zmanj�evanjem (bytes)',

// CLowN
	'SP_Album_config' => 'kloniran  servisni paket',
	'SP_Album_config_explain' => 'konfiguriraj nekatere mo�nosti za servisni paket albuma',
	'SP_Album_sp_general' => 'glavne konfiguracije',
	'SP_Album_sp_watermark' => 'konfiguracije vodnega �iga',
	'SP_Album_sp_hotornot' => 'vroce ali ni konfigurirano',
	'SP_Rate_type' => 'izberi prikazano oceno slike',
	'SP_Rate_type_0' => 'samo slike',
	'SP_Rate_type_1' => 'samo �tevilke',
	'SP_Rate_type_2' => '�tevilke in slike',
	'SP_Display_latest' => 'prika�i najnovej�e predlagane slike bloka',
	'SP_Display_highest' => 'prika�i najvi�je ocenjene slike bloka',
	'SP_Display_most_viewed' => 'prika�i najbolj gledane slike bloka',
	'SP_Display_random' => 'prika�i nakljucne slike bloka',
	'SP_Pic_row' => '�tevilo vrstic na slicici bloka',
	'SP_Pic_col' => '�tevilo stolpcev na slicici bloka',
	'SP_Midthumb_use' => 'uporabi srednjo slicico',
	'SP_Midthumb_cache' => 'omogoci predpomniljenje srednjih slici',
	'SP_Midthumb_high' => 'vi�ina srednjih slicic (pixel)',
	'SP_Midthumb_width' => '�irina srednjih slicic (pixel)',
	'SP_Watermark' => 'uporabi vodni �ig',
	'SP_Watermark_users' => 'prika�i vodni �ig za vse uporabnike, ce \'No\' je prikazano neregistriranem uporabniku',
	'SP_Watermark_placent' => 'Pozicija lege vodnega �iga na sliki',
	'SP_Hon_already_rated' => 'neomejene ocene na vroci ali ni strani',
	'SP_Hon_sep_rating' => 'shrani vroce ali ne ocenjene v loceni tabeli',
	'SP_Hon_where' => 'prika�i vroce slike ali ne iz katere kategorije? (leave blank to use pictures from all of the categories, if more then one category, separate by commas)',
	'SP_Hon_users' => 'lahko neregistriran uporabnik oceni',

	'SP_Disabled' => 'onemogocen',
	'SP_Enabled' => 'omogocen',
	'SP_Yes' => 'Da',
	'SP_No' => 'Ne',
	'SP_Always' => 'Vedno',
	'SP_Submit' => 'izroci',
	'SP_Reset' => 'Resetiraj',

// Nuffload
	'Nuffload_Config' => 'Nuffload konfiguracija',
	'Enable_Nuffload' => 'omogoci Nuffload',
	'Enable_Nuffload_Explain' => 'Omogocanje  mo�nosti Nuffload se uporablja namesto standardnega obrazca nalo�i.',
	'progress_bar_configuration' => 'Nuffload - konfiguracija napredka vrstice',
	'perl_uploader' => 'omogoci na po�iljatelja',
	'path_to_bin' => 'pot od icyphoenix do korena cgi-bin (i.e. <b>./cgi-bin/</b> if you have icyphoenix in a sub folder)',
	'show_progress_bar' => 'poka�i napredek vrstice nalaganja',
	'close_progress_bar' => 'zaprt napredek vrstice na koncu',
	'activity_timeout' => 'dejavnost timeout (secs)',
	'simple_format' => 'Uporabite enostavno oblikovanje za vrstico napredka',
	'multiple_uploads_configuration' => 'Nuffload - veckratnik dodane konfiguracije',
	'multiple_uploads' => 'omogoci  veckratno nalaganje',
	'max_uploads' => 'najvecje �tevilo nalo�enih polj',
	'zip_uploads' => 'omogoci stisnjena nalaganja',
	'image_resizing_configuration' => 'Nuffload - Image Resizing Configuration',
	'image_resizing' => 'omogoci vecanje ali manj�anje slike',
	'image_width' => '�irina slike',
	'image_height' => 'vi�ina slike',
	'image_quality' => 'kakovost slike',
	)
);
?>