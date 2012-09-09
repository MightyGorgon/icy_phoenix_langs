<?php
/**
*
* @package 
* @version $Id: lang_pafiledb.php 02 2011-10-09 22:11:356
* @copyright (c) 2011
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
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
'Toplist' => 'Top lista',
	'Select_list' => 'Izberite vrsto lsite za prikaz',
	'Latest_downloads' => 'Najnovej�e datoteke',
	'Most_downloads' => 'Najpopularnej�e datoteke',
	'Rated_downloads' => 'Najbolje ocenjene datoteke',
	'Total_new_files' => 'Skupek novih prenosov',
	'Show' => 'Prika�i',
	'One_week' => 'En teden',
	'Two_week' => 'Dva tedna',
	'30_days' => '30 Dni',
	'New_Files' => 'Skupaj novih datotek zadnjih %d dni',
	'Last_week' => 'Prej�nji teden',
	'Last_30_days' => 'Zadnijh 30 dni',
	'Show_top' => 'Poka�i Najbolj�e',
	'Or_top' => 'ali Najbolj�e',
	'Popular_num' => 'Najbolj�e %d od vseh %d datotek v bazi podatkov',
	'Popular_per' => 'Najbolj�e %d %% od vseh %d datotek v bazi podatkov',
	'General_Info' => 'Splo�ne informacije',
	'Downloads_stats' => 'Statistika prenosov uporanikov',
	'Rating_stats' => 'Ocene uporabnikov',
	'Os' => 'Operacijski sistem',
	'Browsers' => 'Brskalnik',

// Main
	'Files' => 'Datoteke',
	'Viewall' => 'Poka�i vse datoteke',
	'Vainfo' => 'Poka�i vse datoteke v bazi podatkov',
	'Jump' => 'Izberi kategorijo',
	'Sub_category' => 'Podkategorija',
	'Last_file' => 'Zadnja datoteka',

// Sort
	'Sort' => 'Sortiraj',
	'Name' => 'Ime',
	'Update_time' => 'Zadnje posodobljene',

// Category
	'No_files' => 'Nobena datoteka najdena',
	'No_files_cat' => 'V tej kategoriji ni datotek.',
	'Cat_not_exist' => 'Izbrana kategorija ne obstaja.',
	'File_not_exist' => 'Izbrana datoteka ne obstaja.',
	'License_not_exist' => 'Izbrana licenca ne obstaja.',

// File
	'File' => 'Datoteka',
	'Desc' => 'Opis',
	'Creator' => 'Ustvarjalec',
	'Version' => 'Verzija',
	'Scrsht' => 'Posnetek zaslona',
	'Docs' => 'Spletna stran',
	'Lastdl' => 'Zadnji download',
	'Never' => 'Nikoli',
	'Votes' => ' Glasovi',
	'Date' => 'Datum',
	'Update_time' => 'Nazadnje posodobljeno',
	'DlRating' => 'Ocena',
	'Dls' => ' Prenosi',
	'Downloadfile' => 'Prenos datoteke',
	'File_size' => 'Velikost datoteke',
	'Not_available' => 'Ni na voljo!',
	'Bytes' => 'Biti',
	'KB' => 'Kilo Biti',
	'MB' => 'Mega Biti',

	'Mirrors' => 'Okna',
	'Mirrors_explain' => 'Dodajte ali editirajte okna iz datoteke, poskrbite da bodo potrjene vse informacije saj bo datoteka predlo�ena v podatkovno bazo',
	'Click_here_mirrors' => 'Kliknite tukaj ce �elite dodati okna',
	'Mirror_location' => 'Lokacija okna',
	'Add_new_mirror' => 'Dodaj novo okno',

//User Upload
	'User_upload' => 'Uporabnikovo nalaganje',

// License
	'License' => 'Licencna pogodba',
	'Licensewarn' => 'Morate se strinjati z to licencno pogodbo, ce �elite prenesti datoteko',
	'Iagree' => 'Se strinjam',
	'Dontagree' => 'Se ne strinjam',

// Search
	'Search' => 'I�ci',
	'Search_for' => 'I�ci',
	'Results' => 'Rezultati za',
	'No_matches' => 'Oprostite,noben rezultat ni bil najden',
	'Matches' => 'rezultat je bil najden za',
	'All' => 'Vse kategorije',
	'Choose_cat' => 'Izberi kategorijo:',
	'Include_comments' => 'Vkljuci komentarje',
	'Submiter' => 'Objavil',

// Statistics
	'Statistics' => 'Statistika',
	'Select_chart_type' => 'Izberite vrsto grafikona',
	'Bars' => 'Bari',
	'Lines' => 'Linije',
	'Area' => 'Povr�insko',
	'Linepoints' => 'Tockovne linije',
	'Points' => 'Tocke',
	'Chart_header' => 'Statistika datoteke - Datoteke dodane v bazo podatkov vsak mesec',
	'Chart_legend' => 'Datoteke',
	'X_label' => 'Meeci',
	'Y_label' => '�tevilo datotek',

// Rate
	'Rate' => 'Oceni datoteko',
	'Rerror' => 'Oprostite, to datoteko ste �e ocenili.',
	'Rateinfo' => 'Ste na tem, da ocenite datoteko <i>{filename}</i>.<br /Prosimo izberite oceno spodaj. 1 pomeni najslab�e, 10 pomeni najbolj�e.',
	'Rconf' => 'Datoteki <i>{filename}</i> ste dali oceno {rate}.<br />Sedaj je nova ocena datoteke {newrating}.',
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
	'Not_rated' => 'Neocenjeno',

// Email
	'Emailfile' => 'Posredujte datoteke prijatelju po elektronski po�ti',
	'Emailinfo' => 'Ce bi radi da je prijatelj seznanjen z to datoteko, lahko izpolnete tale obrazec, nakar bo datoteka poslana prijatelju po elektronski po�ti!<br />Elementi oznaceni z * so obvezni, razen ce pi�e drugace',
	'Yname' => 'Tvoje ime',
	'Yemail' => 'Tvoj elektronski naslov',
	'Fname' => 'Ime prijatelja',
	'Femail' => 'Elektronski naslov prijatelja',
	'Esub' => 'Tema elektronske po�te',
	'Etext' => 'Tekst elektronske po�te',
	'Defaultmail' => 'Pomislil sem da bi te zanimala ta datoteka za prenos',
	'Semail' => 'Po�lji elektronsko po�to',
	'Econf' => 'Va�a elektronska po�ta je bila uspe�no poslana.',

// Comments
	'Comments' => 'Komentarji',
	'Comments_title' => 'Naslov komentarjev',
	'Comment_subject' => 'Tema konetarja',
	'Comment' => 'Komentar',
	'Comment_explain' => 'Uporabite okno zgoraj za va�e mnenje o tej datoteki!',
	'Comment_add' => 'Dodaj komentar',
	'Comment_delete' => 'Izbri�i',
	'Comment_posted' => 'Va� komentar je bil uspe�no sprejet',
	'Comment_deleted' => 'Izbran komentar je bil izbrisan',
	'Comment_desc' => 'Naslov',
	'No_comments' => 'Noben komentar �e ni bil objavljen.',
	'Links_are_ON' => 'Linki so <u>ON</u>',
	'Links_are_OFF' => 'Linki so <u>OFF</u>',
	'Images_are_ON' => 'Slike so <u>ON</u>',
	'Images_are_OFF' => 'Slike so <u>OFF</u>',
	'Check_message_length' => 'Preveri dol�ino sporocila',
	'Msg_length_1' => 'Va�e sporocilo je ',
	'Msg_length_2' => ' dolgo karakterjev.',
	'Msg_length_3' => 'Imate ',
	'Msg_length_4' => ' karakterjev �e na voljo.',
	'Msg_length_5' => 'Na voljo je ',
	'Msg_length_6' => ' karakterjev za porabo.',


// Download
	'Directly_linked' => 'Datoteke ni mogoce prenesti direknot iz druge strani!',

//Permission
	'Sorry_auth_view' => 'Oprostite ampak samo %s si lahko ogleda datoteke in podkategorije v tej kategoriji.',
	'Sorry_auth_file_view' => 'Oprostite ampak samo %s si lahko ogleda datoteke v tej kategoriji.',
	'Sorry_auth_upload' => 'Oprostite ampak samo %s si lahko nalo�i datoteke v tej kategoriji.',
	'Sorry_auth_download' => 'Oprostite ampak samo %s si lahko prenese datoteke v tej kategoriji.',
	'Sorry_auth_rate' => 'Oprostite ampak samo %s lahko oceni datoteke v tej kategoriji.',
	'Sorry_auth_view_comments' => 'Oprostite ampak samo %s si lahko pogleda komentarje v tej kategoriji.',
	'Sorry_auth_post_comments' => 'Oprostite ampak samo %s lahko objavi komentarje v tej kategoriji.',
	'Sorry_auth_edit_comments' => 'Oprostite ampak samo %s lahko editira komentarje v tej kategoriji.',
	'Sorry_auth_delete_comments' => 'Oprostite ampak samo %s lahkobri�e komentarje v tej kategoriji.',
// MX
	'Sorry_auth_edit' => 'Oprostite, ampak ne morete editirati datotek v tej kategoriji.',
	'Sorry_auth_delete' => 'Oprostite, ampak ne morete brisati datotek v tej kategoriji.',
	'Sorry_auth_mcp' => 'Oprostite, ampak ne morete urejati te kategorije.',
	'Sorry_auth_approve' => 'Oprostite, ampak ne morete odobriti datotek v tej kategoriji.',


// General
	'Category' => 'Kategorija',
	'Error_no_download' => 'Izbrana datoteka neo obstaja vec',
	'Options' => 'Nastavitve',
	'Click_return' => 'Kliknite %sTukaj%s za vrnitev na prej�njo stran',
	'Click_here' => 'Kliknite tukaj',
	'never' => 'Prazno',
	'pafiledb_disable' => 'Prenos baze podatkov je onemogocen',
	'jump' => 'Izberite kategorijo',
	'viewall_disabled' => 'Ta funkcija je onemogocena z strani Administratorja.',
	'New_file' => 'Nova datoteka',
	'No_new_file' => 'Ni nove datoteke',
	'None' => 'Prazno',
	'No_file' => 'Ni datotek',
	'View_latest_file' => 'Prika�i zadnje datoteke',

// Toplists mx blocks
	'Recent_Public_Files' => 'Zadnji prenosi',
	'Random_Public_Files' => 'Nakljucni prenosi',
	'Toprated_Public_Files' => 'Najbolje ocenjeni prenosi',
	'Most_Public_Files' => 'Najveckrat prene�eni',
	'File_Title' => 'Naslov',
	'File_Desc' => 'Opis',
	'Rating' => 'Ocena',
	'Dls' => 'Prene�eno',

// MX Addon
	'Deletefile' => 'Izbri�i datoteko',
	'Editfile' => 'Editiraj datoteko',
	'pa_MCP' => 'ModeratorCP',
	'Click_return_not_validated' => 'Klikni %sTukaj%s za vrnitev na prej�njo stran',
	)
);

$lang['Stats_text'] = "Skupaj {total_files} datotek v {total_categories} kategorij<br />";
$lang['Stats_text'] .= "Skupaj je bilo {total_downloads} vseh prenosov<br /><br />";
$lang['Stats_text'] .= "Najnove�ja datoteka je <a href={u_newest_file}>{newest_file}</a><br />";
$lang['Stats_text'] .= "Najstarej�a datoteka je <a href={u_oldest_file}>{oldest_file}</a><br /><br />";
$lang['Stats_text'] .= "Povprecna ocena datoteke je {average}/10<br />";
$lang['Stats_text'] .= "Najbolj popularna datoteka gleden na ocene je <a href={u_popular}>{popular}</a> with a rating of {most}/10<br />";
$lang['Stats_text'] .= "Najmanj popularna datoteka gleden na ocene je <a href={u_lpopular}>{lpopular}</a> with a rating of {least}/10<br /><br />";
$lang['Stats_text'] .= "Povprecno �tevilo prenosov na datoteko je {avg_dls}<br />";
$lang['Stats_text'] .= "Najbolj popularna datoteka glede na prenose je <a href={u_most_dl}>{most_dl}</a> with {most_no} downloads<br />";
$lang['Stats_text'] .= "Najmanj popularna datoteka glede na prenose je <a href={u_least_dl}>{least_dl}</a> with {least_no} downloads<br />";

?>