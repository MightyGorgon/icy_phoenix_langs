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
  'Select_list' => 'V�lassz egy listat�pust a megjelen�t�shez',
  'Latest_downloads' => 'A leg�jabb f�jlok',
  'Most_downloads' => 'Legn�pszer�bb f�jlok',
  'Rated_downloads' => 'Legt�bbre �rt�kelt f�jlok',
  'Total_new_files' => '�j let�lt�sek',
  'Show' => 'Mutasd',
  'One_week' => 'Egy h�t',
  'Two_week' => 'K�t h�t',
  '30_days' => '30 nap',
  'New_Files' => 'Az elm�lt %d nap �j f�jljai',
  'Last_week' => 'Utols� h�t',
  'Last_30_days' => 'Utols� 30 nap',
  'Show_top' => 'Show Top',
  'Or_top' => 'or Top',
  'Popular_num' => 'Top %d out of %d files in the database',
  'Popular_per' => 'Top %d %% of all %d files in the database',
  'General_Info' => '�ltal�nos inform�ci�',
  'Downloads_stats' => 'Felhaszn�l�i let�lt�sek statisztik�ja',
  'Rating_stats' => 'Felhaszn�l�i �rt�kel�s statisztik�ja',
  'Os' => 'Oper�ci�s rendszer',
  'Browsers' => 'B�ng�sz�k',

// Main
  'Files' => 'F�jlok',
  'Viewall' => 'Minden f�jl mutat�sa',
  'Vainfo' => 'Az adatb�zis �sszes f�jlj�nak mutat�sa',
  'Jump' => 'Minden kateg�ria kijel�l�se',
  'Sub_category' => 'Alkateg�ria',
  'Last_file' => 'Utols� f�jl',

// Sort
  'Sort' => 'Rendez',
  'Name' => 'N�v',
  'Update_time' => 'Utols� friss�t�s',

// Category
  'No_files' => 'Nincsenek f�jlok',
  'No_files_cat' => 'Ebben a kateg�ri�ban nincsenek f�jlok.',
  'Cat_not_exist' => 'Az a kateg�ria, amit megjel�lt�l nem l�tezik.',
  'File_not_exist' => 'Az a f�jl, amit megjel�lt�l nem l�tezik.',
  'License_not_exist' => 'Az a licenc, amit megjel�lt�l nem l�tezik.',

// File
  'File' => 'F�jl',
  'Desc' => 'Meghat�roz�s',
  'Creator' => 'L�trehozta',
  'Version' => 'Verzi�',
  'Scrsht' => 'K�perny�k�p',
  'Docs' => 'Weboldal',
  'Lastdl' => 'Utols� let�lt�s',
  'Never' => 'Soha',
  'Votes' => ' Szavaz�s',
  'Date' => 'D�tum',
  'Update_time' => 'Utols� friss�t�s',
  'DlRating' => '�rt�kel�s',
  'Dls' => 'Let�ltve',
  'Downloadfile' => 'Let�lt�tt f�jl',
  'File_size' => 'F�jlm�ret',
  'Not_available' => 'Nem el�rhet�!',
  'Bytes' => 'Byte',
  'KB' => 'Kilo Byte',
  'MB' => 'Mega Byte',
  
  'Mirrors' => 'T�kr�k',
  'Mirrors_explain' => 'Itt hozz�adni vagy szerkeszteni tudod a f�jlhoz tartoz� t�kr�ket. K�rlek n�zz ut�na, hogy a megadott inform�ci�k helyesek legyenek miel�tt a f�jlt felk�ld�d az adatb�zisba',
  'Click_here_mirrors' => 'Kattints ide t�k�r hozz�ad�s�hoz',
  'Mirror_location' => 'T�k�r helye',
  'Add_new_mirror' => '�j t�k�r hozz�ad�sa',

//User Upload
  'User_upload' => 'Felhaszn�l�i felt�lt�s',

// License
  'License' => 'Licencszerz�d�s',
  'Licensewarn' => 'El kell fogadnod a licencszerz�d�st, hogy let�lthesd a f�jlt',
  'Iagree' => 'Elfogadom',
  'Dontagree' => 'Visszautas�tom',

// Search
  'Search' => 'Keres',
  'Search_for' => 'Keres�s itt',
  'Results' => 'Eredm�ny itt',
  'No_matches' => 'Bocsi, de nincsen semmi tal�lat erre:',
  'Matches' => 'matches were found for',
  'All' => 'Minden kateg�ria',
  'Choose_cat' => 'V�lassz kateg�ri�t:',
  'Include_comments' => 'Tartalmaz komment�rokat',
  'Submiter' => 'Bek�ldte: ',

// Statistics
  'Statistics' => 'Statisztik�k',
  'Select_chart_type' => 'Select Chart Type',
  'Bars' => 'Bars',
  'Lines' => 'Vonalak',
  'Area' => 'Ter�let',
  'Linepoints' => 'Line Points',
  'Points' => 'Pontok',
  'Chart_header' => 'F�jlstatisztika - Az elm�lt h�napban hozz�adott f�jlok',
  'Chart_legend' => 'F�jlok',
  'X_label' => 'H�napok',
  'Y_label' => 'F�jlok sz�ma',

// Rate
  'Rate' => 'F�jl �rt�kel�se',
  'Rerror' => 'Bocsi, de m�r �rt�kelted ezt a f�jlt.',
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
  'Not_rated' => 'Nem �rt�kelt',

// Email
  'Emailfile' => 'Email k�ld�se a f�jlr�l a bar�taidnak',
  'Emailinfo' => 'Ha szeretn�d b�rmelyik bar�todat �rtes�teni err�l a f�jlr�l, akkor csak ki kell t�ltened egy �rlapot, �s a bar�taidnak elk�ldj�k a f�jl let�lt�s�hez sz�ks�ges inform�ci�t!<br />A *-gal megjel�lt mez�k kit�lt�se k�telez�, k�l�nben a levelet nem tudjuk elk�ldeni',
  'Yname' => 'Neved',
  'Yemail' => 'Email c�med',
  'Fname' => 'Bar�taid neve',
  'Femail' => 'Bar�taid email c�me',
  'Esub' => 'Email t�rgya',
  'Etext' => 'Email sz�vege',
  'Defaultmail' => '�gy gondolom ez a f�jl t�ged biztos �rdekelni fog:',
  'Semail' => 'Email elk�ld�se',
  'Econf' => 'Az email sikeresen elk�ldve.',

// Comments
  'Comments' => 'Komment�rok',
  'Comments_title' => 'Komment�rok c�me',
  'Comment_subject' => 'Komment�r t�rgya',
  'Comment' => 'Komment�r',
  'Comment_explain' => 'Haszn�ld a sz�vegdobozt, hogy a gondolataid a f�jlhoz f�zzed!',
  'Comment_add' => 'Komment�r hozz�ad�sa',
  'Comment_delete' => 'T�r�l',
  'Comment_posted' => 'A komment�rokat sikeresen bek�ldted',
  'Comment_deleted' => 'A kijel�lt komment�r sikeresen t�r�lve lett',
  'Comment_desc' => 'C�m',
  'No_comments' => 'Ide nem k�ldtek be komment�rt.',
  'Links_are_ON' => 'Linkek: <u>BE</u>',
  'Links_are_OFF' => 'Linkek <u>KI</u>',
  'Images_are_ON' => 'K�pek <u>BE</u>',
  'Images_are_OFF' => 'K�pek: <u>KI</u>',
  'Check_message_length' => '�zenet hossz�nak ellen�rz�se',
  'Msg_length_1' => 'Az �zeneted ',
  'Msg_length_2' => ' karakter hossz�.',
  'Msg_length_3' => '�sszesen ',
  'Msg_length_4' => ' hossz� lehet.',
  'Msg_length_5' => 'Van m�g ',
  'Msg_length_6' => ' karaktered.',


// Download
  'Directly_linked' => 'Nem tudod ezt a f�jlt k�zvetlen�l egy m�sik oldalr�l let�lteni!',

//Permission
  'Sorry_auth_view' => 'Bocsi, de csak %s f�jl �s alkateg�ria lehet egy kateg�ri�n bel�l.',
  'Sorry_auth_file_view' => 'Bocsi, de csak %s tekintheti meg ezt a f�jlt ebben a kateg�ri�ban.',
  'Sorry_auth_upload' => 'Bocsi, de csak %s tud felt�lteni ezt a f�jlt ebbe a kateg�ri�ba.',
  'Sorry_auth_download' => 'Bocsi, de csak %s tudja let�lteni ezt a f�jlt ebb�l a kateg�ri�b�l.',
  'Sorry_auth_rate' => 'Bocsi, de csak %s tudja �rt�kelni a f�jlokat ebben a kateg�ri�ban.',
  'Sorry_auth_view_comments' => 'Bocsi, de csak %s tudja a komment�rokat megn�zni ebben a kateg�ri�ban.',
  'Sorry_auth_post_comments' => 'Bocsi, de csak %s tud komment�rt  bek�ldeni ebbe a kateg�ri�ba.',
  'Sorry_auth_edit_comments' => 'Bocsi, de csak %s tudja a komment�rokat szerkeszteni ebben a kateg�ri�ban.',
  'Sorry_auth_delete_comments' => 'Bocsi, de csak %s tudja a komment�rokat t�r�lni ebben a kateg�ri�ban.',
// MX
  'Sorry_auth_edit' => 'Bocsi, de nem szerkesztheted a f�jlokat ebben a kateg�ri�ban.',
  'Sorry_auth_delete' => 'Bocsi, de nem t�r�lheted a f�jlokat ebben a kateg�ri�ban.',
  'Sorry_auth_mcp' => 'Bocsi, de nem moder�lhatsz ebben a kateg�ri�ban.',
  'Sorry_auth_approve' => 'Bocsi, de nem hagyhatsz j�v� f�jlokat ebben a kateg�ri�ban.',


// General
  'Category' => 'Kateg�ria',
  'Error_no_download' => 'A kiv�lasztott f�jl m�r nem l�tezik',
  'Options' => 'Opci�k',
  'Click_return' => 'Kattints %side%s az el�z� oldalra val� visszat�r�shez',
  'Click_here' => 'Klikk ide',
  'never' => 'Nincs',
  'pafiledb_disable' => 'A let�lt�si adatb�zis tiltva van',
  'jump' => 'Egy kateg�ria kijel�l�se',
  'viewall_disabled' => 'Az adminisztr�tor letiltotta a teljes kilist�z�st.',
  'New_file' => '�j f�jl',
  'No_new_file' => 'Nincs �j f�jl',
  'None' => 'Nincs',
  'No_file' => 'Nincsenek f�jlok',
  'View_latest_file' => 'A leg�jabb f�jl megn�z�se',

// Toplists mx blocks
  'Recent_Public_Files' => 'Utols� let�lt�s',
  'Random_Public_Files' => 'V�letlen let�lt�s',
  'Toprated_Public_Files' => 'Leg�rt�kesebb let�lt�s',
  'Most_Public_Files' => 'Most t�ltik',
  'File_Title' => 'C�m',
  'File_Desc' => 'Meghat�roz�s',
  'Rating' => '�rt�kel�s',
  'Dls' => 'Let�ltve',

// MX Addon
  'Deletefile' => 'F�jl t�rl�se',
  'Editfile' => 'F�jl szerkeszt�se',
  'pa_MCP' => '[Moder�torVP]',
  'Click_return_not_validated' => 'Kattints %side%s az el�z� oldalhoz val� visszat�r�shez',
  )
);

$lang['Stats_text'] = '�sszesen {total_files} f�jl {total_categories} kateg�ri�ban<br />';
$lang['Stats_text'] = 'Eddig {total_downloads} let�lt�s t�rt�nt<br /><br />';
$lang['Stats_text'] = 'A leg�jabb f�jl: <a href={u_newest_file}>{newest_file}</a><br />';
$lang['Stats_text'] = 'A legr�gebbi f�jl: <a href={u_oldest_file}>{oldest_file}</a><br /><br />';
$lang['Stats_text'] = 'A f�jlok �tlagos �rt�kel�se: {average}/10<br />';
$lang['Stats_text'] = 'A legn�pszer�bb f�jl a <a href={u_popular}>{popular}</a> , {most}/10-re �rt�kelve<br />';
$lang['Stats_text'] = 'A legkev�sb� n�pszer� f�jl a <a href={u_lpopular}>{lpopular}</a>, {least}/10-re �rt�kelve<br /><br />';
$lang['Stats_text'] = 'Egy f�jlra jut� let�lt�si ar�ny: {avg_dls}<br />';
$lang['Stats_text'] = 'A legn�pszer�bb f�jllet�lt�s a <a href={u_most_dl}>{most_dl}</a> �sszesen {most_no} let�lt�ssel<br />';
$lang['Stats_text'] = 'A legkev�sb� n�pszer� f�jllet�lt�s a <a href={u_least_dl}>{least_dl}</a> �sszesen {least_no} let�lt�ssel<br />';

?>