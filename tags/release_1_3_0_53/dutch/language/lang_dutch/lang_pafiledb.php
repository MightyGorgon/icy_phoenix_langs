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
	'Toplist' => 'Toplijst',
	'Select_list' => 'Selecteer de lijsttype om te bekijken',
	'Latest_downloads' => 'De nieuwste bestanden',
	'Most_downloads' => 'Meest populaire bestanden',
	'Rated_downloads' => 'Best beoordeelde bestanden',
	'Total_new_files' => 'Totaal aantal nieuwe downloads',
	'Show' => 'Bekijken',
	'One_week' => 'Een week',
	'Two_week' => 'Twee weken',
	'30_days' => '30 dagen',
	'New_Files' => 'Totaal aantal nieuwe bestanden in de laatste %d dagen',
	'Last_week' =>'Laatste week',
	'Last_30_days' => 'Laatste 30 dagen',
	'Show_top' => 'Bekijk top',
	'Or_top' => 'of top',
	'Popular_num' => 'Top %d van de %d bestanden in de database',
	'Popular_per' => 'Top %d %% van alle %d bestanden in de database',
	'General_Info' => 'Algemene informatie',
	'Downloads_stats' => 'Gebruikers downloadstatistieken',
	'Rating_stats' => 'Gebruikers beoordelingstatistieken',
	'Os' => 'Besturingssysteem',
	'Browsers' => 'Browsers',

// Main
	'Files' => 'Bestanden',
	'Viewall' => 'Bekijk alle bestanden',
	'Vainfo' => 'Bekijk alle bestanden in de database',
	'Jump' => 'Selecteer een categorie',
	'Sub_category' => 'Subcategorie',
	'Last_file' => 'Laatste bestand',

// Sort
	'Sort' => 'Sorteer',
	'Name' => 'Naam',
	'Update_time' => 'Laatst bijgewerkt',

// Category
	'No_files' => 'Er zijn geen bestanden gevonden',
	'No_files_cat' => 'Er zijn geen bestanden in deze categorie.',
	'Cat_not_exist' => 'De categorie die je geselecteerd hebt bestaat niet.',
	'File_not_exist' => 'Het bestand die je geselecteerd hebt bestaat niet.',
	'License_not_exist' => 'De licentie die je geselecteerd hebt bestaat niet.',

// File
	'File' => 'Bestand',
	'Desc' => 'Omschrijving',
	'Creator' => 'Auteur',
	'Version' => 'Versie',
	'Scrsht' => 'Screenshot',
	'Docs' => 'Website',
	'Lastdl' => 'Laatst gedownload',
	'Never' => 'Nooit',
	'Votes' => ' stemmen',
	'Date' => 'Datum',
	'Update_time' => 'Laatst bijgewerkt',
	'DlRating' => 'Beoordeling',
	'Dls' => ' Downloads',
	'Downloadfile' => 'Download bestand',
	'File_size' => 'Bestandsgrootte',
	'Not_available' => 'Niet beschikbaar!',
	'Bytes' => 'Bytes',
	'KB' => 'Kilobyte',
	'MB' => 'Megabyte',

	'Mirrors' => 'Alternatieven',
	'Mirrors_explain' => 'Voeg of bewerk alternatieven voor dit bestand, zorg er wel voor dat je alle informatie controleert voordat je het toevoegt aan de database',
	'Click_here_mirrors' => 'Klik hier om een nieuwe alternatief toe te voegen',
	'Mirror_location' => 'Alternatieve locatie',
	'Add_new_mirror' => 'Voeg nieuwe alternatief',

//User Upload
	'User_upload' => 'Gebruikerupload',

// License
	'License' => 'Licentievoorwaarden',
	'Licensewarn' => 'Je moet akkoord gaan met de licentievoorwaarden om te kunnen downloaden',
	'Iagree' => 'Ik ga akkoord',
	'Dontagree' => 'Ik ga niet akkoord',

// Search
	'Search' => 'Zoeken',
	'Search_for' => 'Zoeken naar',
	'Results' => 'Resultaten voor',
	'No_matches' => 'Sorry, maar er zijn geen resultaten gevonden voor',
	'Matches' => 'resultaten gevonden voor',
	'All' => 'Alle Categorieen',
	'Choose_cat' => 'Kies categorie:',
	'Include_comments' => 'Inclusief opmerkingen',
	'Submiter' => 'Toegevoegd door',

// Statistics
	'Statistics' => 'Statistieken',
	'Select_chart_type' => 'Selecteer grafiektype',
	'Bars' => 'Balken',
	'Lines' => 'Lijnen',
	'Area' => 'Gebied',
	'Linepoints' => 'Lijnpunten',
	'Points' => 'Punten',
	'Chart_header' => 'Bestandenstatistieken - Bestanden toegevoegd in de database elke maand',
	'Chart_legend' => 'Bestanden',
	'X_label' => 'Maanden',
	'Y_label' => 'Aantal bestanden',

// Rate
	'Rate' => 'Beoordeel bestand',
	'Rerror' => 'Sorry, maar je hebt dit bestand al beoordeeld.',
	'Rateinfo' => 'Je wilt graag bestand <i>{filename}</i> beoordelen.<br />Selecteer een beoordeling hieronder. 1 is het slechtst, 10 is het best.',
	'Rconf' => 'Je hebt <i>{filename}</i> beoordeeld met een beoordeling van {rate}.<br />Dat maakt een gemiddelde beoordeling van {newrating}.',
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
	'Not_rated' => 'Niet beoordeeld',

// Email
	'Emailfile' => 'E-mail bestand naar een vriend',
	'Emailinfo' => 'Als je een vriend op de hoogte wilt stellen van dit bestand, kun je dit formulier invullen en verzenden. Een e-mail met bestandsinformatie zal dan worden gestuurd naar je vriend!<br />Velden gemarkeerd met een * zijn verplicht tenzij het anders staat vermeld',
	'Yname' => 'Jouw naam',
	'Yemail' => 'Jouw e-mailadres',
	'Fname' => 'Naam van een vriend',
	'Femail' => 'E-mailadres van een vriend',
	'Esub' => 'E-mailonderwerp',
	'Etext' => 'E-mailtekst',
	'Defaultmail' => 'Ik denk dat je geinteresseerd bent in het downloaden van een bestand wat is geplaatst op',
	'Semail' => 'Verstuur e-mail',
	'Econf' => 'Jouw e-mail is succesvol verzonden.',

// Comments
	'Comments' => 'Opmerkingen',
	'Comments_title' => 'Opmerkingstitel',
	'Comment_subject' => 'Opmerkingsonderwerp',
	'Comment' => 'Opmerking',
	'Comment_explain' => 'Gebruik de tekstvak hierboven om je mening te geven over dit bestand!',
	'Comment_add' => 'Voeg opmerking toe',
	'Comment_delete' => 'Verwijder',
	'Comment_posted' => 'Jouw opmerking is succesvol toegevoegd',
	'Comment_deleted' => 'The comment you selected has been deleted successfully',
	'Comment_desc' => 'Titel',
	'No_comments' => 'Er zijn op dit mooment geen opmerkingen geplaatst.',
	'Links_are_ON' => 'Links zijn <u>AAN</u>',
	'Links_are_OFF' => 'Links zijn <u>UIT</u>',
	'Images_are_ON' => 'Afbeeldingen zijn <u>AAN</u>',
	'Images_are_OFF' => 'Afbeeldingen zijn <u>UIT</u>',
	'Check_message_length' => 'Controleer berichtlengte',
	'Msg_length_1' => 'Je bericht is ',
	'Msg_length_2' => ' tekens lang.',
	'Msg_length_3' => 'Je hebt ',
	'Msg_length_4' => ' tekens over.',
	'Msg_length_5' => 'Er zijn ',
	'Msg_length_6' => ' tekens over om te gebruiken.',


// Download
	'Directly_linked' => 'Je kan dit bestand niet direct downloaden van een andere website!',

//Permission
	'Sorry_auth_view' => 'Sorry, maar alleen %s kunnen bestanden en subcategorieen bekijken in deze categorie.',
	'Sorry_auth_file_view' => 'Sorry, maar alleen %s kunnen dit bestand bekijken in deze categorie.',
	'Sorry_auth_upload' => 'Sorry, maar alleen %s kunnen bestanden uploaden in deze categorie.',
	'Sorry_auth_download' => 'Sorry, maar alleen %s kunnen bestanden downloaden in deze categorie.',
	'Sorry_auth_rate' => 'Sorry, maar alleen %s kunnen bestanden beoordelen in deze categorie.',
	'Sorry_auth_view_comments' => 'Sorry, maar alleen %s kunnen opmerkingen bekijken in deze categorie.',
	'Sorry_auth_post_comments' => 'Sorry, maar alleen %s kunnen opmerkingen plaatsen in deze categorie.',
	'Sorry_auth_edit_comments' => 'Sorry, maar alleen %s kunnen opmerkingen bewerken in deze categorie.',
	'Sorry_auth_delete_comments' => 'Sorry, maar alleen %s kunnen opmerkingen verwijderen in deze categorie.',
// MX
	'Sorry_auth_edit' => 'Sorry, maar je kunt geen bestanden bewerken in deze categorie.',
	'Sorry_auth_delete' => 'Sorry, maar je kunt geen bestanden verwijderen in deze categorie.',
	'Sorry_auth_mcp' => 'Sorry, maar je kunt niet moderaten in deze categorie.',
	'Sorry_auth_approve' => 'Sorry, maar je kunt geen bestanden goedkeuren in deze categorie.',


// General
	'Category' => 'Categorie',
	'Error_no_download' => 'De geselecteerde bestand bestaat niet',
	'Options' => 'Opties',
	'Click_return' => 'Klik %shier%s om terug te keren naar de vorige pagina',
	'Click_here' => 'Klik hier',
	'never' => 'Geen',
	'pafiledb_disable' => 'Downloaddatabase is uitgeschakeld',
	'jump' => 'Selecteer een categorie',
	'viewall_disabled' => 'Deze functie is uitgeschakeld door de beheerder.',
	'New_file' => 'Nieuw bestand',
	'No_new_file' => 'Er is geen nieuw bestand',
	'None' => 'Geen',
	'No_file' => 'Geen bestanden',
	'View_latest_file' => 'Bekijk laatste bestand',

// Toplists mx blocks
	'Recent_Public_Files' => 'Laatste downloads',
	'Random_Public_Files' => 'Willekeurige downloads',
	'Toprated_Public_Files' => 'Hoogst gewaardeerde downloads',
	'Most_Public_Files' => 'Meest gedownload',
	'File_Title' => 'Titel',
	'File_Desc' => 'Omschrijving',
	'Rating' => 'Beoordeling',
	'Dls' => 'Gedownload',

// MX Addon
	'Deletefile' => 'Verwijder bestand',
	'Editfile' => 'Bewerk bestand',
	'pa_MCP' => 'Moderatorpaneel',
	'Click_return_not_validated' => 'Klik %shier%s om terug te keren naar de vorige pagina',
	)
);

$lang['Stats_text'] = "Er zijn in totaal {total_files} bestanden in {total_categories} categorieen<br />";
$lang['Stats_text'] .= "Er zijn in totaal {total_downloads} downloads<br /><br />";
$lang['Stats_text'] .= "Het nieuwste bestand is <a href={u_newest_file}>{newest_file}</a><br />";
$lang['Stats_text'] .= "Het oudste bestand is <a href={u_oldest_file}>{oldest_file}</a><br /><br />";
$lang['Stats_text'] .= "De gemiddelde beoordeling is {average}/10<br />";
$lang['Stats_text'] .= "De meest populaire bestand gebaseerd op beoordelingen is <a href={u_popular}>{popular}</a> met een beoordeling van {most}/10<br />";
$lang['Stats_text'] .= "De minst populaire bestand gebaseerd op beoordelingen is <a href={u_lpopular}>{lpopular}</a> met een beoordeling van {least}/10<br /><br />";
$lang['Stats_text'] .= "De gemiddelde aantal keer gedownload voor elk bestand is {avg_dls}<br />";
$lang['Stats_text'] .= "De meest populaire bestand gebaseerd op aantal downloads is <a href={u_most_dl}>{most_dl}</a> met {most_no} keer gedownload<br />";
$lang['Stats_text'] .= "De minst populaire bestand gebaseerd op aantal downloads is <a href={u_least_dl}>{least_dl}</a> met {least_no} keer gedownload<br />";

?>