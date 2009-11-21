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
  'Toplist' => 'Toplista',
  'Select_list' => 'Válassz egy listatípust a megjelenítéshez',
  'Latest_downloads' => 'A legújabb fájlok',
  'Most_downloads' => 'Legnépszerûbb fájlok',
  'Rated_downloads' => 'Legtöbbre értékelt fájlok',
  'Total_new_files' => 'Új letöltések',
  'Show' => 'Mutasd',
  'One_week' => 'Egy hét',
  'Two_week' => 'Két hét',
  '30_days' => '30 nap',
  'New_Files' => 'Az elmúlt %d nap új fájljai',
  'Last_week' => 'Utolsó hét',
  'Last_30_days' => 'Utolsó 30 nap',
  'Show_top' => 'Show Top',
  'Or_top' => 'or Top',
  'Popular_num' => 'Top %d out of %d files in the database',
  'Popular_per' => 'Top %d %% of all %d files in the database',
  'General_Info' => 'Általános információ',
  'Downloads_stats' => 'Felhasználói letöltések statisztikája',
  'Rating_stats' => 'Felhasználói értékelés statisztikája',
  'Os' => 'Operációs rendszer',
  'Browsers' => 'Böngészõk',

// Main
  'Files' => 'Fájlok',
  'Viewall' => 'Minden fájl mutatása',
  'Vainfo' => 'Az adatbázis összes fájljának mutatása',
  'Jump' => 'Minden kategória kijelölése',
  'Sub_category' => 'Alkategória',
  'Last_file' => 'Utolsó fájl',

// Sort
  'Sort' => 'Rendez',
  'Name' => 'Név',
  'Update_time' => 'Utolsó frissítés',

// Category
  'No_files' => 'Nincsenek fájlok',
  'No_files_cat' => 'Ebben a kategóriában nincsenek fájlok.',
  'Cat_not_exist' => 'Az a kategória, amit megjelöltél nem létezik.',
  'File_not_exist' => 'Az a fájl, amit megjelöltél nem létezik.',
  'License_not_exist' => 'Az a licenc, amit megjelöltél nem létezik.',

// File
  'File' => 'Fájl',
  'Desc' => 'Meghatározás',
  'Creator' => 'Létrehozta',
  'Version' => 'Verzió',
  'Scrsht' => 'Képernyõkép',
  'Docs' => 'Weboldal',
  'Lastdl' => 'Utolsó letöltés',
  'Never' => 'Soha',
  'Votes' => ' Szavazás',
  'Date' => 'Dátum',
  'Update_time' => 'Utolsó frissítés',
  'DlRating' => 'Értékelés',
  'Dls' => 'Letöltve',
  'Downloadfile' => 'Letöltött fájl',
  'File_size' => 'Fájlméret',
  'Not_available' => 'Nem elérhetõ!',
  'Bytes' => 'Byte',
  'KB' => 'Kilo Byte',
  'MB' => 'Mega Byte',
  
  'Mirrors' => 'Tükrök',
  'Mirrors_explain' => 'Itt hozzáadni vagy szerkeszteni tudod a fájlhoz tartozó tükröket. Kérlek nézz utána, hogy a megadott információk helyesek legyenek mielõtt a fájlt felküldöd az adatbázisba',
  'Click_here_mirrors' => 'Kattints ide tükör hozzáadásához',
  'Mirror_location' => 'Tükör helye',
  'Add_new_mirror' => 'Új tükör hozzáadása',

//User Upload
  'User_upload' => 'Felhasználói feltöltés',

// License
  'License' => 'Licencszerzõdés',
  'Licensewarn' => 'El kell fogadnod a licencszerzõdést, hogy letölthesd a fájlt',
  'Iagree' => 'Elfogadom',
  'Dontagree' => 'Visszautasítom',

// Search
  'Search' => 'Keres',
  'Search_for' => 'Keresés itt',
  'Results' => 'Eredmény itt',
  'No_matches' => 'Bocsi, de nincsen semmi találat erre:',
  'Matches' => 'matches were found for',
  'All' => 'Minden kategória',
  'Choose_cat' => 'Válassz kategóriát:',
  'Include_comments' => 'Tartalmaz kommentárokat',
  'Submiter' => 'Beküldte: ',

// Statistics
  'Statistics' => 'Statisztikák',
  'Select_chart_type' => 'Select Chart Type',
  'Bars' => 'Bars',
  'Lines' => 'Vonalak',
  'Area' => 'Terület',
  'Linepoints' => 'Line Points',
  'Points' => 'Pontok',
  'Chart_header' => 'Fájlstatisztika - Az elmúlt hónapban hozzáadott fájlok',
  'Chart_legend' => 'Fájlok',
  'X_label' => 'Hónapok',
  'Y_label' => 'Fájlok száma',

// Rate
  'Rate' => 'Fájl értékelése',
  'Rerror' => 'Bocsi, de már értékelted ezt a fájlt.',
  'Rateinfo' => 'You are about to rate the file <i>{filename}</i>.<br />Please select a rating below. 1 is the worst, 10 is the best.',
  'Rconf' => 'You have given <i>{filename}</i> a rating of {rate}.<br />This makes the files new rating {newrating}.',
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
  'Not_rated' => 'Nem értékelt',

// Email
  'Emailfile' => 'Email küldése a fájlról a barátaidnak',
  'Emailinfo' => 'Ha szeretnéd bármelyik barátodat értesíteni errõl a fájlról, akkor csak ki kell töltened egy ûrlapot, és a barátaidnak elküldjük a fájl letöltéséhez szükséges információt!<br />A *-gal megjelölt mezõk kitöltése kötelezõ, különben a levelet nem tudjuk elküldeni',
  'Yname' => 'Neved',
  'Yemail' => 'Email címed',
  'Fname' => 'Barátaid neve',
  'Femail' => 'Barátaid email címe',
  'Esub' => 'Email tárgya',
  'Etext' => 'Email szövege',
  'Defaultmail' => 'Úgy gondolom ez a fájl téged biztos érdekelni fog:',
  'Semail' => 'Email elküldése',
  'Econf' => 'Az email sikeresen elküldve.',

// Comments
  'Comments' => 'Kommentárok',
  'Comments_title' => 'Kommentárok címe',
  'Comment_subject' => 'Kommentár tárgya',
  'Comment' => 'Kommentár',
  'Comment_explain' => 'Használd a szövegdobozt, hogy a gondolataid a fájlhoz fûzzed!',
  'Comment_add' => 'Kommentár hozzáadása',
  'Comment_delete' => 'Töröl',
  'Comment_posted' => 'A kommentárokat sikeresen beküldted',
  'Comment_deleted' => 'A kijelölt kommentár sikeresen törölve lett',
  'Comment_desc' => 'Cím',
  'No_comments' => 'Ide nem küldtek be kommentárt.',
  'Links_are_ON' => 'Linkek: <u>BE</u>',
  'Links_are_OFF' => 'Linkek <u>KI</u>',
  'Images_are_ON' => 'Képek <u>BE</u>',
  'Images_are_OFF' => 'Képek: <u>KI</u>',
  'Check_message_length' => 'Üzenet hosszának ellenõrzése',
  'Msg_length_1' => 'Az üzeneted ',
  'Msg_length_2' => ' karakter hosszú.',
  'Msg_length_3' => 'Összesen ',
  'Msg_length_4' => ' hosszú lehet.',
  'Msg_length_5' => 'Van még ',
  'Msg_length_6' => ' karaktered.',


// Download
  'Directly_linked' => 'Nem tudod ezt a fájlt közvetlenül egy másik oldalról letölteni!',

//Permission
  'Sorry_auth_view' => 'Bocsi, de csak %s fájl és alkategória lehet egy kategórián belül.',
  'Sorry_auth_file_view' => 'Bocsi, de csak %s tekintheti meg ezt a fájlt ebben a kategóriában.',
  'Sorry_auth_upload' => 'Bocsi, de csak %s tud feltölteni ezt a fájlt ebbe a kategóriába.',
  'Sorry_auth_download' => 'Bocsi, de csak %s tudja letölteni ezt a fájlt ebbõl a kategóriából.',
  'Sorry_auth_rate' => 'Bocsi, de csak %s tudja értékelni a fájlokat ebben a kategóriában.',
  'Sorry_auth_view_comments' => 'Bocsi, de csak %s tudja a kommentárokat megnézni ebben a kategóriában.',
  'Sorry_auth_post_comments' => 'Bocsi, de csak %s tud kommentárt  beküldeni ebbe a kategóriába.',
  'Sorry_auth_edit_comments' => 'Bocsi, de csak %s tudja a kommentárokat szerkeszteni ebben a kategóriában.',
  'Sorry_auth_delete_comments' => 'Bocsi, de csak %s tudja a kommentárokat törölni ebben a kategóriában.',
// MX
  'Sorry_auth_edit' => 'Bocsi, de nem szerkesztheted a fájlokat ebben a kategóriában.',
  'Sorry_auth_delete' => 'Bocsi, de nem törölheted a fájlokat ebben a kategóriában.',
  'Sorry_auth_mcp' => 'Bocsi, de nem moderálhatsz ebben a kategóriában.',
  'Sorry_auth_approve' => 'Bocsi, de nem hagyhatsz jóvá fájlokat ebben a kategóriában.',


// General
  'Category' => 'Kategória',
  'Error_no_download' => 'A kiválasztott fájl már nem létezik',
  'Options' => 'Opciók',
  'Click_return' => 'Kattints %side%s az elõzõ oldalra való visszatéréshez',
  'Click_here' => 'Klikk ide',
  'never' => 'Nincs',
  'pafiledb_disable' => 'A letöltési adatbázis tiltva van',
  'jump' => 'Egy kategória kijelölése',
  'viewall_disabled' => 'Az adminisztrátor letiltotta a teljes kilistázást.',
  'New_file' => 'Új fájl',
  'No_new_file' => 'Nincs új fájl',
  'None' => 'Nincs',
  'No_file' => 'Nincsenek fájlok',
  'View_latest_file' => 'A legújabb fájl megnézése',

// Toplists mx blocks
  'Recent_Public_Files' => 'Utolsó letöltés',
  'Random_Public_Files' => 'Véletlen letöltés',
  'Toprated_Public_Files' => 'Legértékesebb letöltés',
  'Most_Public_Files' => 'Most töltik',
  'File_Title' => 'Cím',
  'File_Desc' => 'Meghatározás',
  'Rating' => 'Értékelés',
  'Dls' => 'Letöltve',

// MX Addon
  'Deletefile' => 'Fájl törlése',
  'Editfile' => 'Fájl szerkesztése',
  'pa_MCP' => '[ModerátorVP]',
  'Click_return_not_validated' => 'Kattints %side%s az elõzõ oldalhoz való visszatéréshez',
  )
);

$lang['Stats_text'] = 'Összesen {total_files} fájl {total_categories} kategóriában<br />';
$lang['Stats_text'] = 'Eddig {total_downloads} letöltés történt<br /><br />';
$lang['Stats_text'] = 'A legújabb fájl: <a href={u_newest_file}>{newest_file}</a><br />';
$lang['Stats_text'] = 'A legrégebbi fájl: <a href={u_oldest_file}>{oldest_file}</a><br /><br />';
$lang['Stats_text'] = 'A fájlok átlagos értékelése: {average}/10<br />';
$lang['Stats_text'] = 'A legnépszerûbb fájl a <a href={u_popular}>{popular}</a> , {most}/10-re értékelve<br />';
$lang['Stats_text'] = 'A legkevésbé népszerû fájl a <a href={u_lpopular}>{lpopular}</a>, {least}/10-re értékelve<br /><br />';
$lang['Stats_text'] = 'Egy fájlra jutó letöltési arány: {avg_dls}<br />';
$lang['Stats_text'] = 'A legnépszerûbb fájlletöltés a <a href={u_most_dl}>{most_dl}</a> összesen {most_no} letöltéssel<br />';
$lang['Stats_text'] = 'A legkevésbé népszerû fájlletöltés a <a href={u_least_dl}>{least_dl}</a> összesen {least_no} letöltéssel<br />';

?>