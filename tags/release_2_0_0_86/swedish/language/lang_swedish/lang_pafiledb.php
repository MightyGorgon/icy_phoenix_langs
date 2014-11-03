<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_pafiledb.php 64 2008-12-01 21:14:17Z Mighty Gorgon $
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
	'Select_list' => 'Välj den typ av lista som ska visas',
	'Latest_downloads' => 'De nyaste filerna',
	'Most_downloads' => 'Mest populära filerna',
	'Rated_downloads' => 'Topp rankade filerna',
	'Total_new_files' => 'Totalt nya nedladdningar',
	'Show' => 'Visa',
	'One_week' => 'En Vecka',
	'Two_week' => 'Två Veckor',
	'30_days' => '30 Dagar',
	'New_Files' => 'Totalt nya filer för de sista %d dagarna',
	'Last_week' => 'Senaste veckan',
	'Last_30_days' => 'Senaste 30 dagarna',
	'Show_top' => 'Visa Topp',
	'Or_top' => 'eller Topp',
	'Popular_num' => 'Topp %d utav %d filer i databasen',
	'Popular_per' => 'Topp %d %% av alla %d filer i databasen',
	'General_Info' => 'Allmän information',
	'Downloads_stats' => 'Användares nedladdnings statisik',
	'Rating_stats' => 'Användares värderings statistik',
	'Os' => 'Operativ System',
	'Browsers' => 'Webbläsare',

// Main
	'Files' => 'Filer',
	'Viewall' => 'Visa alla filer',
	'Vainfo' => 'Visa alla filerna i databasen',
	'Jump' => 'Välj en kategori',
	'Sub_category' => 'Underkategori',
	'Last_file' => 'Senaste fil',

// Sort
	'Sort' => 'Sortera',
	'Name' => 'Namn',
	'Update_time' => 'Senast uppdaterad',

// Category
	'No_files' => 'Inga filer hittades',
	'No_files_cat' => 'Det finns inga filer i denna kategori.',
	'Cat_not_exist' => 'Den kategori du valt finns inte.',
	'File_not_exist' => 'Filen du valt finns inte.',
	'License_not_exist' => 'Licensen du valt finns inte.',
	'No_dl_categories_exists' => 'Antingen får du inte se någon kategori eller finns det inte någon kategori i databasen.',

// File
	'File' => 'Fil',
	'Desc' => 'Beskrivning',
	'Creator' => 'Skapare',
	'Version' => 'Version',
	'Scrsht' => 'Skärmdump',
	'Docs' => 'Webbsida',
	'Lastdl' => 'Senaste nedladdning',
	'Never' => 'Aldrig',
	'Votes' => ' Röster',
	'Date' => 'Datum',
	'Update_time' => 'Senaste uppdaterad',
	'DlRating' => 'Värdering',
	'Dls' => ' Nedladdningar',
	'Downloadfile' => 'Ladda ner fil',
	'File_size' => 'Fil storlek',
	'Not_available' => 'Inte tillgänglig!',

	'Mirrors' => 'Speglar',
	'Mirrors_explain' => 'Lägg till eller redigera speglar för denna fil, se till att kontrollera alla uppgifter eftersom ärendet kommer att lämnas in till databasen',
	'Click_here_mirrors' => 'Klicka här för att lägga till speglar',
	'Mirror_location' => 'Spegel plats',
	'Add_new_mirror' => 'Lägg till ny spegel',

//User Upload
	'User_upload' => 'Användar uppladdning',

// License
	'License' => 'Licensavtal',
	'Licensewarn' => 'Du måste godkänna detta licensavtal för att kunna ladda ner',
	'Iagree' => 'Jag accepterar',
	'Dontagree' => 'Jag accepterar inte',

// Search
	'Search' => 'Sök',
	'Search_for' => 'Sök efter',
	'Results' => 'Resultat för',
	'No_matches' => 'Tyvärr, ingen matchning hittades för',
	'Matches' => 'matchning hittades för',
	'All' => 'Alla kategorier',
	'Choose_cat' => 'Välj kategori:',
	'Include_comments' => 'Inkludera kommentarer',
	'Submiter' => 'Inlagd av',

// Statistics
	'Statistics' => 'Statistik',
	'Select_chart_type' => 'Välj diagramtyp',
	'Bars' => 'Bars',
	'Lines' => 'Linjer',
	'Area' => 'Area',
	'Linepoints' => 'Linje punkter',
	'Points' => 'Punkter',
	'Chart_header' => 'Fil statistik - Filer som läggs in i databasen varje månad',
	'Chart_legend' => 'Filer',
	'X_label' => 'Månader',
	'Y_label' => 'Antal filer',

// Rate
	'Rate' => 'Värdera fil',
	'Rerror' => 'Tyvärr, du har redan värderat denna fil.',
	'Rateinfo' => 'Du håller på att värdera filen <i>{filename}</i>.<br />Välj ett betyg nedan. 1 är det sämsta, 10 är det bästa.',
	'Rconf' => 'Du har gett <i>{filename}</i> en värdering på {rate}.<br />Detta gör att filernas nya värdering är {newrating}.',
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
	'Not_rated' => 'Ej värderad',

// Email
	'Emailfile' => 'E-posta fil till en vän',
	'Emailinfo' => 'Om du vill att en vän ska veta om den här filen, kan du fylla i och skicka detta formulär och en e-post som innehåller fil informationen och som kommer att e-postas till din vän!<br />Poster markerade med en * är obligatoriska om inte annat anges',
	'Yname' => 'Ditt namn',
	'Yemail' => 'Din e-postadress',
	'Fname' => 'Vänns namn',
	'Femail' => 'Vänns e-postadress',
	'Esub' => 'E-post ämne',
	'Etext' => 'E-post text',
	'Defaultmail' => 'Jag trodde du skulle vara intresserad av att ladda ner filen som finns på',
	'Semail' => 'Skicka E-post',
	'Econf' => 'Din e-post har skickats successfullt.',

// Comments
	'Comments' => 'Kommentarer',
	'Comments_title' => 'Kommentar titel',
	'Comment_subject' => 'Kommentar ämne',
	'Comment' => 'Kommentar',
	'Comment_explain' => 'Använd textrutan ovan för att ge din åsikt om denna fil!',
	'Comment_add' => 'Lägg till kommentar',
	'Comment_delete' => 'Radera',
	'Comment_posted' => 'Din kommentar har införts successfullt',
	'Comment_deleted' => 'Kommentaren du valt har blivit raderad successfullt',
	'Comment_desc' => 'Titel',
	'No_comments' => 'Inga kommentarer har postats ännu.',
	'Links_are_ON' => 'Länkar är <u>PÅ</u>',
	'Links_are_OFF' => 'Länkar är <u>AV</u>',
	'Images_are_ON' => 'Bilder är <u>PÅ</u>',
	'Images_are_OFF' => 'Bilder är <u>AV</u>',
	'Check_message_length' => 'Kontrollera meddelandets längd',
	'Msg_length_1' => 'Ditt meddelande är ',
	'Msg_length_2' => ' tecken långt.',
	'Msg_length_3' => 'Du har ',
	'Msg_length_4' => ' tecken tillgängliga.',
	'Msg_length_5' => 'Det finns ',
	'Msg_length_6' => ' tecken kvar att använda.',


// Download
	'Directly_linked' => 'Du kan inte ladda ner denna fil direkt från en annan webbplats!',

//Permission
	'Sorry_auth_view' => 'Tyvärr, men endast %s kan visa filer och underkategorier i denna kategori.',
	'Sorry_auth_file_view' => 'Tyvärr, men endast %s kan visa den här filen i denna kategori.',
	'Sorry_auth_upload' => 'Tyvärr, men endast %s kan ladda upp filer i denna kategori.',
	'Sorry_auth_download' => 'Tyvärr, men endast %s kan ladda ner filer i denna kategori.',
	'Sorry_auth_rate' => 'Tyvärr, men endast %s kan värdera filer i denna kategori.',
	'Sorry_auth_view_comments' => 'Tyvärr, men endast %s kan visa kommentarer i denna kategori.',
	'Sorry_auth_post_comments' => 'Tyvärr, men endast %s kan skriva kommentarer i den här kategorin.',
	'Sorry_auth_edit_comments' => 'Tyvärr, men endast %s kan redigera kommentarer i denna kategori.',
	'Sorry_auth_delete_comments' => 'Tyvärr, men endast %s kan ta bort kommentarer i denna kategori.',
// MX
	'Sorry_auth_edit' => 'Tyvärr, men du kan inte redigera filer i denna kategori.',
	'Sorry_auth_delete' => 'Tyvärr, men du kan inte ta bort filer i denna kategori.',
	'Sorry_auth_mcp' => 'Tyvärr, men du kan inte moderera denna kategori.',
	'Sorry_auth_approve' => 'Tyvärr, men du kan inte godkänna filer i denna kategori.',


// General
	'Category' => 'Kategori',
	'Error_no_download' => 'Den valda filen finns inte längre',
	'Options' => 'Alternativ',
	'Click_return' => 'Klicka %sHär%s för att återgå till föregående sida',
	'Click_here' => 'Klicka här',
	'never' => 'Ingen',
	'pafiledb_disable' => 'Nerladdning av Databasen har inaktiverats',
	'jump' => 'Välj en kategori',
	'viewall_disabled' => 'Den här funktionen är inaktiverad av admin.',
	'New_file' => 'Ny fil',
	'No_new_file' => 'Ingen ny fil',
	'None' => 'Ingen',
	'No_file' => 'Inga filer',
	'View_latest_file' => 'Visa senaste fil',

// Toplists mx blocks
	'Recent_Public_Files' => 'Senaste nerladdningar',
	'Random_Public_Files' => 'Slumpmässiga nerladdningar',
	'Toprated_Public_Files' => 'Topp-värderade nerladdningar',
	'Most_Public_Files' => 'Mest nerladdad',
	'File_Title' => 'Titel',
	'File_Desc' => 'Beskrivning',
	'Rating' => 'Värdering',
	'Dls' => 'Nedladdade',

// MX Addon
	'Deletefile' => 'Radera fil',
	'Editfile' => 'Redigera fil',
	'pa_MCP' => 'ModeratorCP',
	'Click_return_not_validated' => 'Klicka %sHär%s för att återgå till föregående sida',
	)
);

$lang['Stats_text'] = "Det finns {total_files} filer i {total_categories} kategorier<br />";
$lang['Stats_text'] .= "Det har varit {total_downloads} totala nerladdningar<br /><br />";
$lang['Stats_text'] .= "Den nyaste filen är <a href={u_newest_file}>{newest_file}</a><br />";
$lang['Stats_text'] .= "Den äldsta filen är <a href={u_oldest_file}>{oldest_file}</a><br /><br />";
$lang['Stats_text'] .= "Den genomsnittliga fil värderingen är {average}/10<br />";
$lang['Stats_text'] .= "Den mest populära filen baserat på värderingar är <a href={u_popular}>{popular}</a> med en värdering på {most}/10<br />";
$lang['Stats_text'] .= "Den minst populära filen baserat på värderingar är <a href={u_lpopular}>{lpopular}</a> med en värdering på {least}/10<br /><br />";
$lang['Stats_text'] .= "Den genomsnittliga mängden nedladdningar varje fil har är {avg_dls}<br />";
$lang['Stats_text'] .= "Den mest populära filen baserat på nedladdningar är <a href={u_most_dl}>{most_dl}</a> med {most_no} nerladdningar<br />";
$lang['Stats_text'] .= "Den minst populära filen baserat på nedladdningar är <a href={u_least_dl}>{least_dl}</a> med {least_no} nerladdningar<br />";

?>