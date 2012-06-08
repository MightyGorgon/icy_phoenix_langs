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
	'Toplist' => 'Toplista',
	'Select_list' => 'Válaszd ki a megjelenítendő lista típusát',
	'Latest_downloads' => 'Legújabb fájlok',
	'Most_downloads' => 'Legnépszerűbb fájlok',
	'Rated_downloads' => 'Legjobbra értékelt fájlok',
	'Total_new_files' => 'Összes új letöltés',
	'Show' => 'Megjelenít',
	'One_week' => '1 hét',
	'Two_week' => '2 hét',
	'30_days' => '30 nap',
	'New_Files' => 'Az elmúlt %d napban feltöltött új fájlok',
	'Last_week' => 'múlt hét',
	'Last_30_days' => 'elmúlt 30 nap',
	'Show_top' => 'Show Top',
	'Or_top' => 'or Top',
	'Popular_num' => 'Top %d out of %d files in the database',
	'Popular_per' => 'Top %d %% of all %d files in the database',
	'General_Info' => 'Általános információk',
	'Downloads_stats' => 'Letöltési statisztika',
	'Rating_stats' => 'Értékelési statisztika',
	'Os' => 'Operációs rendszer',
	'Browsers' => 'Böngészők',

// Main
	'Files' => 'Fájlok',
	'Viewall' => 'Összes fájl megtekintése',
	'Vainfo' => 'Az adatbázisban szereplő összes fájl megjelenítése',
	'Jump' => 'Válassz kategóriát',
	'Sub_category' => 'Alkategória',
	'Last_file' => 'Utolsó fájl',

// Sort
	'Sort' => 'Rendezés',
	'Name' => 'Név',
	'Update_time' => 'Utoljára frissítve',

// Category
	'No_files' => 'Nem található fájl',
	'No_files_cat' => 'Nincsenek fájlok ebben a kategóriában',
	'Cat_not_exist' => 'A kiválasztott kategória nem létezik.',
	'File_not_exist' => 'A kiválasztott fájl nem létezik.',
	'License_not_exist' => 'A kiválasztott licensz nem létezik.',
	'No_dl_categories_exists' => 'Nem vagy jogosult a kategóriák megtekintéséhez, vagy nincs kategória létrehozva.',

// File
	'File' => 'Fájl',
	'Desc' => 'Leírás',
	'Creator' => 'Szerző',
	'Version' => 'Verzió',
	'Scrsht' => 'Pillanatkép',
	'Docs' => 'Weboldal',
	'Lastdl' => 'Utoljára letöltve',
	'Never' => 'Soha',
	'Votes' => ' Szavazat',
	'Date' => 'Dátum',
	'Update_time' => 'Utoljára frissítve',
	'DlRating' => 'Értékelés',
	'Dls' => ' Letöltések',
	'Downloadfile' => 'Fájl letöltése',
	'File_size' => 'Fájlméret',
	'Not_available' => 'Nem elérhető!',

	'Mirrors' => 'Tükörszerverek',
	'Mirrors_explain' => 'Adj hozzá, vagy szerkeszd a fájl meglévő tükörszervereit. Győződj meg róla, hogy a megadott adatok helyesek, mert a fájl az adatbázisba kerül',
	'Click_here_mirrors' => 'Kattints ide tükörszerver hozzáadásához',
	'Mirror_location' => 'Tükör helye',
	'Add_new_mirror' => 'Tükör hozzáadása',

//User Upload
	'User_upload' => 'Felhasználói feltöltése',

// License
	'License' => 'Licensz szerződés',
	'Licensewarn' => 'A fájl letöltéshez el kell fogadnod a licensz feltételeit',
	'Iagree' => 'Elfogadom',
	'Dontagree' => 'Nem fogadom el',

// Search
	'Search' => 'Keresés',
	'Search_for' => 'Keresés erre:',
	'Results' => 'Találatok erre:',
	'No_matches' => 'Nincs találat erre:',
	'Matches' => 'találatok erre:',
	'All' => 'Összes kategória',
	'Choose_cat' => 'Válassz kategóriát:',
	'Include_comments' => 'Hozzászólások megjelenítése',
	'Submiter' => 'Beküldő',

// Statistics
	'Statistics' => 'Statisztika',
	'Select_chart_type' => 'Select Chart Type',
	'Bars' => 'Bars',
	'Lines' => 'Lines',
	'Area' => 'Area',
	'Linepoints' => 'Line Points',
	'Points' => 'Points',
	'Chart_header' => 'Files Stats - Files added to the database each month',
	'Chart_legend' => 'Files',
	'X_label' => 'Months',
	'Y_label' => 'Number of Files',

// Rate
	'Rate' => 'Fájl értékelése',
	'Rerror' => 'Már értékelted a fájlt.',
	'Rateinfo' => 'A következő fájlt szeretnéd értékelni: <i>{filename}</i>.<br />Válassz egy értéket. 1 a legrosszabb, és 10 a legjobb.',
	'Rconf' => 'A következő fájlt értékelted: <i>{filename}</i>, ennyire: {rate}.<br />Így a fájl új értékelése: {newrating}.',
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
	'Not_rated' => 'Nincs értékelve',

// Email
	'Emailfile' => 'Barát értesítése e-mailben',
	'Emailinfo' => 'Ha egy barátoddal szeretnéd megosztani ezt a fájlt, elküldheted ezt az űrlapot neki, ami tartalmazza a fájl adatait.<br />A *-gal megjelölt mezők kitöltése kötelező',
	'Yname' => 'Neved',
	'Yemail' => 'E-mail címed',
	'Fname' => 'Barátod neve',
	'Femail' => 'Barátod e-mail címe',
	'Esub' => 'E-mail tárgya',
	'Etext' => 'E-mail szövege',
	'Defaultmail' => 'Gondoltam, téged is érdekelhet a fájl. Link: ',
	'Semail' => 'E-mail elküldése',
	'Econf' => 'Az E-mail sikeresen elküldve.',

// Comments
	'Comments' => 'Hozzászólások',
	'Comments_title' => 'Hozzászólás címe',
	'Comment_subject' => 'Hozzászólás tárgya',
	'Comment' => 'Hozzászólás',
	'Comment_explain' => 'A feljebb látható szövegdobozban leírhatod a fájlról a véleményed',
	'Comment_add' => 'Hozzászólás elküldése',
	'Comment_delete' => 'Törlés',
	'Comment_posted' => 'Hozzászólás sikeresen elküldve',
	'Comment_deleted' => 'A kijelölt hozzászólás sikeresen törölve',
	'Comment_desc' => 'Cím',
	'No_comments' => 'Még nem szóltak hozzá.',
	'Links_are_ON' => 'Linkek <u>bekapcsolva</u>',
	'Links_are_OFF' => 'Linkek <u>kikapcsolva</u>',
	'Images_are_ON' => 'Képek <u>bekapcsolva</u>',
	'Images_are_OFF' => 'Képek <u>kikapcsolva</u>',
	'Check_message_length' => 'Üzenet hosszának ellenőrzése',
	'Msg_length_1' => 'Az üzeneted ',
	'Msg_length_2' => ' karakterből áll.',
	'Msg_length_3' => 'Még ',
	'Msg_length_4' => ' karakter elérhető.',
	'Msg_length_5' => 'Összesen ',
	'Msg_length_6' => ' karaktert írhatsz még.',


// Download
	'Directly_linked' => 'Nem töltheted le a fájlt közvetlenük egy másik oldalról!',

//Permission
	'Sorry_auth_view' => 'Csak a(z) %s tekinthetik meg a kategória fájljait és alkategóriáit.',
	'Sorry_auth_file_view' => 'Csak a(z) %s tekintheti meg a kategória fájljait.',
	'Sorry_auth_upload' => 'Csak a(z) %s tölthetnek fel fájlokat ebbe a kategóriába.',
	'Sorry_auth_download' => 'Csak a(z) %s tölthetnek le fájloat ebben a kategóriában.',
	'Sorry_auth_rate' => 'Csak a(z) %s értékelhetik a kategória fájljait.',
	'Sorry_auth_view_comments' => 'Csak a(z) %s tekinthetik meg a hozzászólásokat ebben a kategóriában.',
	'Sorry_auth_post_comments' => 'Csak a(z) %s küldhetnek hozzászólásokat ebben a kategóriában.',
	'Sorry_auth_edit_comments' => 'Csak a(z) %s szerkeszthetik a hozzászólásokat ebben a kategóriában.',
	'Sorry_auth_delete_comments' => 'Csak a(z) %s törölhetik hozzászólásokat ebben a kategóriában.',
// MX
	'Sorry_auth_edit' => 'Nem szerkesztheted a fájlokat ebben a kategóriában.',
	'Sorry_auth_delete' => 'Nem törölheted a fájlokat ebben a kategóriában.',
	'Sorry_auth_mcp' => 'Nem moderálhatod ezt a kategóriát.',
	'Sorry_auth_approve' => 'Nem hagyhatsz jóvá fájlokat ebben a kategóriában.',


// General
	'Category' => 'Kategória',
	'Error_no_download' => 'A kijelölt fájl nem létezik',
	'Options' => 'Lehetőségek',
	'Click_return' => 'Kattints %side%s, hogy visszatérj az előző oldalra',
	'Click_here' => 'Kattints ide',
	'never' => 'Nincs',
	'pafiledb_disable' => 'A fájladatbázis jelenleg nem elérhető',
	'jump' => 'Válassz egy kategóriát',
	'viewall_disabled' => 'Ezt a funkciót az adminisztrátor kikapcsolta.',
	'New_file' => 'Új fájl',
	'No_new_file' => 'Nincs új fájl',
	'None' => 'Nincs',
	'No_file' => 'Nincsenek fájlok',
	'View_latest_file' => 'Legutólsó fájl megtekintése',

// Toplists mx blocks
	'Recent_Public_Files' => 'Legújabb letöltések',
	'Random_Public_Files' => 'Véletlenszerű letöltések',
	'Toprated_Public_Files' => 'Legjobbra értékelt letöltések',
	'Most_Public_Files' => 'Legtöbbször letöltött',
	'File_Title' => 'Cím',
	'File_Desc' => 'Leírás',
	'Rating' => 'Értékelés',
	'Dls' => 'Letöltve',

// MX Addon
	'Deletefile' => 'Fájl törlése',
	'Editfile' => 'Fájl szerkesztése',
	'pa_MCP' => 'Moderatori vezérlőpult',
	'Click_return_not_validated' => 'Kattints %side%s, hogy visszatérj az előző oldalra',
	)
);

$lang['Stats_text'] = "Összesen {total_files} fájl található {total_categories} kategóriában,<br />";
$lang['Stats_text'] .= "Összesen {total_downloads} alkalommal letöltve<br /><br />";
$lang['Stats_text'] .= "A legújabb fájl: <a href={u_newest_file}>{newest_file}</a><br />";
$lang['Stats_text'] .= "A legrégebbi fájl <a href={u_oldest_file}>{oldest_file}</a><br /><br />";
$lang['Stats_text'] .= "Az átlagos értékelés {average}/10<br />";
$lang['Stats_text'] .= "Az értékelések alapján a legnépszerűbb fájl a(z) <a href={u_popular}>{popular}</a>, {most}/10-es értékeléssel<br />";
$lang['Stats_text'] .= "Az értékelések alapján a legkevésbé népszerű fájl a(z) <a href={u_lpopular}>{lpopular}</a>, {least}/10-es értékeléssel<br /><br />";
$lang['Stats_text'] .= "Átlagos letöltés/fájl {avg_dls}<br />";
$lang['Stats_text'] .= "A legnépszerűbb fájl a letöltések száma alapján a(z) <a href={u_most_dl}>{most_dl}</a>, {most_no} letöltéssel<br />";
$lang['Stats_text'] .= "A legkevésbé népszerű fájl a letöltések száma alapján a(z) <a href={u_least_dl}>{least_dl}</a> with {least_no} letöltéssel<br />";

?>