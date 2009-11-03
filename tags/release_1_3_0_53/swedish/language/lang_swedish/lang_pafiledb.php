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
// Toplist
	'Toplist' => 'Topplista',
	'Select_list' => 'V�lj den typ av lista som ska visas',
	'Latest_downloads' => 'De Nyaste Filerna',
	'Most_downloads' => 'Mest Popul�ra Filerna',
	'Rated_downloads' => 'Topp Rankade Filerna',
	'Total_new_files' => 'Totalt Nya Nedladdningar',
	'Show' => 'Visa',
	'One_week' => 'En Vecka',
	'Two_week' => 'Tv� Veckor',
	'30_days' => '30 Dagar',
	'New_Files' => 'Totalt nya filer f�r de sista %d dagarna',
	'Last_week' => 'Senaste Veckan',
	'Last_30_days' => 'Senaste 30 Dagarna',
	'Show_top' => 'Visa Topp',
	'Or_top' => 'eller Topp',
	'Popular_num' => 'Topp %d utav %d filer i databasen',
	'Popular_per' => 'Topp %d %% av alla %d filer i databasen',
	'General_Info' => 'Allm�nn Information',
	'Downloads_stats' => 'Anv�ndares Nedladdnings Statisik',
	'Rating_stats' => 'Anv�ndares V�rderings Statistik',
	'Os' => 'Operativ System',
	'Browsers' => 'Webbl�sare',

// Main
	'Files' => 'Filer',
	'Viewall' => 'Visa Alla Filer',
	'Vainfo' => 'Visa alla filerna i databasen',
	'Jump' => 'V�lj en kategori',
	'Sub_category' => 'Underkategori',
	'Last_file' => 'Senaste Fil',

// Sort
	'Sort' => 'Sortera',
	'Name' => 'Namn',
	'Update_time' => 'Senast Uppdaterad',

// Category
	'No_files' => 'Inga filer hittades',
	'No_files_cat' => 'Det finns inga filer i denna kategori.',
	'Cat_not_exist' => 'Den kategori du valt finns inte.',
	'File_not_exist' => 'Filen du valt finns inte.',
	'License_not_exist' => 'Licensen du valt finns inte.',

// File
	'File' => 'Fil',
	'Desc' => 'Beskrivning',
	'Creator' => 'Skapare',
	'Version' => 'Version',
	'Scrsht' => 'Sk�rmdump',
	'Docs' => 'Webbsida',
	'Lastdl' => 'Senaste Nedladdning',
	'Never' => 'Aldrig',
	'Votes' => ' R�ster',
	'Date' => 'Datum',
	'Update_time' => 'Senaste Uppdaterad',
	'DlRating' => 'V�rdering',
	'Dls' => ' Nedladdningar',
	'Downloadfile' => 'Ladda Ner Fil',
	'File_size' => 'Fil Storlek',
	'Not_available' => 'Inte tillg�nglig!',
	'Bytes' => 'Bytes',
	'KB' => 'Kilo Byte',
	'MB' => 'Mega Byte',

	'Mirrors' => 'Speglar',
	'Mirrors_explain' => 'L�gg till eller redigera speglar f�r denna fil, se till att kontrollera alla uppgifter eftersom �rendet kommer att l�mnas in till databasen',
	'Click_here_mirrors' => 'Klicka h�r f�r att l�gga till speglar',
	'Mirror_location' => 'Spegel Plats',
	'Add_new_mirror' => 'L�gg till ny spegel',

//User Upload
	'User_upload' => 'Anv�ndar Uppladdning',

// License
	'License' => 'Licensavtal',
	'Licensewarn' => 'Du m�ste godk�nna detta licensavtal f�r att kunna ladda ner',
	'Iagree' => 'Jag accepterar',
	'Dontagree' => 'Jag accepterar inte',

// Search
	'Search' => 'S�k',
	'Search_for' => 'S�k efter',
	'Results' => 'Resultat f�r',
	'No_matches' => 'Tyv�rr, ingen matchning hittades f�r',
	'Matches' => 'matchning hittades f�r',
	'All' => 'Alla Kategorier',
	'Choose_cat' => 'V�lj Kategori:',
	'Include_comments' => 'Inkludera kommentarer',
	'Submiter' => 'Inlagd av',

// Statistics
	'Statistics' => 'Statistik',
	'Select_chart_type' => 'V�lj Diagramtyp',
	'Bars' => 'Bars',
	'Lines' => 'Linjer',
	'Area' => 'Area',
	'Linepoints' => 'Linje Punkter',
	'Points' => 'Punkter',
	'Chart_header' => 'Fil Statistik - Filer som l�ggs in i databasen varje m�nad',
	'Chart_legend' => 'Filer',
	'X_label' => 'M�nader',
	'Y_label' => 'Antal Filer',

// Rate
	'Rate' => 'V�rdera Fil',
	'Rerror' => 'Tyv�rr, du har redan v�rderat denna fil.',
	'Rateinfo' => 'Du h�ller p� att v�rdera filen <i>{filename}</i>.<br />V�lj ett betyg nedan. 1 �r det s�msta, 10 �r den b�sta.',
	'Rconf' => 'Du har gett <i>{filename}</i> en v�rdering p� {rate}.<br />Detta g�r att filernas nya v�rdering �r {newrating}.',
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
	'Not_rated' => 'Ej V�rderad',

// Email
	'Emailfile' => 'E-posta fil till en V�n',
	'Emailinfo' => 'Om du vill att en v�n ska veta om den h�r filen, du kan fylla i och skicka detta formul�r och en e-post som inneh�ller fil informationen och som kommer att e-postas till din v�n!<br />Poster markerade med en * �r obligatoriska om inte annat anges',
	'Yname' => 'Ditt Namn',
	'Yemail' => 'Din E-post Adress',
	'Fname' => 'V�nns Namn',
	'Femail' => 'V�nns E-post Adress',
	'Esub' => 'E-post �mne',
	'Etext' => 'E-post Text',
	'Defaultmail' => 'Jag trodde du skulle vara intresserad av att ladda ner filen som finns p�',
	'Semail' => 'Skicka E-post',
	'Econf' => 'Din e-post har skickats successfullt.',

// Comments
	'Comments' => 'Kommentarer',
	'Comments_title' => 'Kommentar Titel',
	'Comment_subject' => 'Kommentar �mne',
	'Comment' => 'Kommentar',
	'Comment_explain' => 'Anv�nd textrutan ovan f�r att ge din �sikt om denna fil!',
	'Comment_add' => 'L�gg till Kommentar',
	'Comment_delete' => 'Radera',
	'Comment_posted' => 'Din kommentar har inf�rts successfullt',
	'Comment_deleted' => 'Kommentaren du valt har blivit raderad successfullt',
	'Comment_desc' => 'Titel',
	'No_comments' => 'Inga kommentarer har postats �nnu.',
	'Links_are_ON' => 'L�nkar �r <u>P�</u>',
	'Links_are_OFF' => 'L�nkar �r <u>AV</u>',
	'Images_are_ON' => 'Bilder �r <u>P�</u>',
	'Images_are_OFF' => 'Bilder �r <u>AV</u>',
	'Check_message_length' => 'Kontrollera Meddelandets L�ngd',
	'Msg_length_1' => 'Ditt meddelande �r ',
	'Msg_length_2' => ' tecken l�ngt.',
	'Msg_length_3' => 'Du har ',
	'Msg_length_4' => ' tecken tillg�ngliga.',
	'Msg_length_5' => 'Det finns ',
	'Msg_length_6' => ' tecken kvar att anv�nda.',


// Download
	'Directly_linked' => 'Du kan inte ladda ner denna fil direkt fr�n en annan webbplats!',

//Permission
	'Sorry_auth_view' => 'Tyv�rr, men endast %s kan visa filer och underkategorier i denna kategori.',
	'Sorry_auth_file_view' => 'Tyv�rr, men endast %s kan visa den h�r filen i denna kategori.',
	'Sorry_auth_upload' => 'Tyv�rr, men endast %s kan ladda upp filer i denna kategori.',
	'Sorry_auth_download' => 'Tyv�rr, men endast %s kan ladda ner filer i denna kategori.',
	'Sorry_auth_rate' => 'Tyv�rr, men endast %s kan v�rdera filer i denna kategori.',
	'Sorry_auth_view_comments' => 'Tyv�rr, men endast %s kan visa kommentarer i denna kategori.',
	'Sorry_auth_post_comments' => 'Tyv�rr, men endast %s kan skriva kommentarer i den h�r kategorin.',
	'Sorry_auth_edit_comments' => 'Tyv�rr, men endast %s kan redigera kommentarer i denna kategori.',
	'Sorry_auth_delete_comments' => 'Tyv�rr, men endast %s kan ta bort kommentarer i denna kategori.',
// MX
	'Sorry_auth_edit' => 'Tyv�rr, men du kan inte redigera filer i denna kategori.',
	'Sorry_auth_delete' => 'Tyv�rr, men du kan inte ta bort filer i denna kategori.',
	'Sorry_auth_mcp' => 'Tyv�rr, men du kan inte moderera denna kategori.',
	'Sorry_auth_approve' => 'Tyv�rr, men du kan inte godk�nna filer i denna kategori.',


// General
	'Category' => 'Kategori',
	'Error_no_download' => 'Den valda filen finns inte l�ngre',
	'Options' => 'Alternativ',
	'Click_return' => 'Klicka %sH�r%s f�r att �terg� till f�reg�ende sida',
	'Click_here' => 'Klicka H�r',
	'never' => 'Ingen',
	'pafiledb_disable' => 'Nerladdning av Databasen har inaktiverats',
	'jump' => 'V�lj en kategori',
	'viewall_disabled' => 'Den h�r funktionen �r inaktiverad av admin.',
	'New_file' => 'Ny fil',
	'No_new_file' => 'Ingen ny fil',
	'None' => 'Ingen',
	'No_file' => 'Inga Filer',
	'View_latest_file' => 'Visa Senaste Fil',

// Toplists mx blocks
	'Recent_Public_Files' => 'Senaste nerladdningar',
	'Random_Public_Files' => 'Slumpm�ssiga nerladdningar',
	'Toprated_Public_Files' => 'Topp-v�rderade nerladdningar',
	'Most_Public_Files' => 'Mest nerladdad',
	'File_Title' => 'Titel',
	'File_Desc' => 'Beskrivning',
	'Rating' => 'V�rdering',
	'Dls' => 'Nedladdade',

// MX Addon
	'Deletefile' => 'Radera fil',
	'Editfile' => 'Redigera fil',
	'pa_MCP' => 'ModeratorCP',
	'Click_return_not_validated' => 'Klicka %sH�r%s f�r att �terg� till f�reg�ende sida',
	)
);

$lang['Stats_text'] = "Det finns {total_files} filer i {total_categories} kategorier<br />";
$lang['Stats_text'] .= "Det har varit {total_downloads} totala nerladdningar<br /><br />";
$lang['Stats_text'] .= "Den nyaste filen �r <a href={u_newest_file}>{newest_file}</a><br />";
$lang['Stats_text'] .= "Den �ldsta filen �r <a href={u_oldest_file}>{oldest_file}</a><br /><br />";
$lang['Stats_text'] .= "Den genomsnittliga fil v�rderingen �r {average}/10<br />";
$lang['Stats_text'] .= "Den mest popul�ra filen baserat p� v�rderingar �r <a href={u_popular}>{popular}</a> med en v�rdering p� {most}/10<br />";
$lang['Stats_text'] .= "Den minst popul�ra filen baserat p� v�rderingar �r <a href={u_lpopular}>{lpopular}</a> med en v�rdering p� {least}/10<br /><br />";
$lang['Stats_text'] .= "Den genomsnittliga m�ngden nedladdningar varje fil har �r {avg_dls}<br />";
$lang['Stats_text'] .= "Den mest popul�ra filen baserat p� nedladdningar �r <a href={u_most_dl}>{most_dl}</a> med {most_no} nerladdningar<br />";
$lang['Stats_text'] .= "Den minst popul�ra filen baserat p� nedladdningar �r <a href={u_least_dl}>{least_dl}</a> med {least_no} nerladdningar<br />";

?>