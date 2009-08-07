<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_rate.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Nivisec.com (support@nivisec.com)
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
	'Already_Rated' => 'Din v�rdering: <b>%d</b>', //%d = their rate
	'Rate_Stats' => '<b>%.2f</b>', //%.2f = average, %d = min, %d = max, %d # of ratings
	'Rate' => 'V�rdera',
	'Choose_Rating' => 'V�lj V�rdering',
	'Topic_Rated' => '�mne har blivit v�rderat.',
	'Anon_Rate_Disabled' => 'Anonym anv�ndare har inte till�telse att v�rdera',
	'Not_Authorized_To_Rate' => 'Du har inte beh�righet att v�rdera detta �mne',
	'Change_Rating' => '�ndra V�rdering',
	'View_Details' => '<a href="%s" title="Visa Detaljer">Visa detaljerad info</a>', //%s = detailed URL
	'View_Details_2' => '<a href="%s" title="Visa Detaljer">Visa detaljerad info</a>', //%s = detailed URL
	'Username_Gave_Rate_of_Max' => '<b>%s</b> v�rdera detta �mne <b>%d</b> av ett eventuellt <b>%d</b> den %s.', //%s = username, %d = user rate, %d = max rate, %s = date with create_date()
	'Detailed_Rating' => 'Detaljerad V�rdering',
	'Details_For_Topic' => 'V�rderings Detaljer F�r&nbsp;&raquo;&nbsp;<b>%s</b>', //%s = topic title
	'Or_Someone_From_IP' => '(ip loggad)', // makes it smaller for smaller res screens
	'Disable_Rating_ON' => 'Avaktivera V�rdering i detta inl�gg',
	'Summary' => 'Sammanfatta V�rdering',
	'Topic_Rating_Details' => '�mnes V�rderings Detaljer',

	'Anonymous' => 'Anonyma',
	'All_Forums' => 'Alla Forum',

	'Max_Rate' => 'Max V�rdering',
	'User_Rate' => 'Anv�ndare V�rdering',
	'Rate_Date' => 'V�rderings Datum',
	'Rate_Time' => 'V�rderings Tid',
	'Rate_Order' => 'Antal V�rderingar',

	'No_Topics_Rated' => 'Inga �mnen har blivit v�rderade',
	'Top_Topics' => 'Topp %d V�rderade �mnen', //%d = number of topics
	'Top_Topics_For_Forum' => 'Topp %d V�rderade �mnen f�r %s', //%d = number of topics, %s is forum name
	'For_Forum' => '%s Endast', //%s = forum name
	'Last_Rated' => 'Senaste V�rdering',
	'Number_of_Rates' => '# av V�rderingar',
	'Rating' => 'V�rdering',
	'Min' => 'Min',
	'Max' => 'Max',
	'Min_Rating' => 'Min V�rdering',
	'By_Forum' => 'Lista Genom Forum',
	'Details_For_Topic' => '<b>%s</b>', //%s = topic title

//admin
	'Status' => 'Status',
	'Auth_Description' => 'Beskrivningar',
	'NONE' => 'V�rdering �r helt avaktiverad och ingen v�rderings meny visas ovan �mnen',
	'ALL' => 'Alla anv�ndare kan v�rdera och granska menyn, som omfattar anonyma och registrerade',
	'REG' => 'Endast registrerade anv�ndare kan v�rdera, men alla kan granska menyn',
	'PRIVATE' => 'Endast registrerade anv�ndare kan v�rdera och granska menyn',
	'MOD' => 'Endast forum moderatorer och administrat�rer kan v�rdera och alla kan granska menyn',
	'ADMIN' => 'Endast administrat�rer kan v�rdera och alla kan granska menyn',
	'Allow_Poster_To_Disable_Rating' => 'Till�t Inl�ggaren Att Avaktivera V�rderings F�rm�gan',
	'Allow_Detailed_Ratings_Page' => 'Till�t Anv�ndare Att Visa Detaljerade V�rderingslistor Sidor',
	'Max_Rating' => 'Max V�rderingar Till�tna (1 till MAX)',
	'Allow_Users_To_ReRate' => 'Till�t anv�ndare att �ndra sina v�rderingar',
	'Check_Anon_IP' => 'Kontrollera Anonyma Anv�ndares IP n�r de r�star f�r att se om de redan har gjort sin v�rdering',
	'Anon_Rate_ID' => 'N�sta Anonyma Anv�ndares V�rderings IP.<br />�ndra inte detta om du inte vet vad du g�r och verkligen m�ste.<br />St�lla in den till ett h�gre v�rde �n vad som anges �r en mycket d�lig id�',
	'Big_Page_Number' => 'Antal inl�gg att visa p� separat v�rderings sida (om du v�ljer att anv�nda den)',
	'Main_Page_Number' => 'Antal inl�gg att visa p� huvudsidans display (om du v�ljer att anv�nda den)',
	'Header_Page_Number' => 'Antal inl�gg att visa p� huvudsidans display (om du v�ljer att anv�nda den)',
	'Mass_Update' => 'Mass Uppdatering',
	'Purge_Old_Ratings' => 'Rensa Gamla V�rderingar',
	'Min_Rates' => 'Minsta antal V�rderingar ett �mne M�ste Ha F�re Visning p� Topp V�rderings Listan',
	'Purge' => 'Rensa',
	'Purged' => 'Rensas',
	'Purge_Desc' => 'Rensa v�rderingar fr�n raderade �mnen som kan ha varit ej ursprungligt raderade med �mnet.',
	'Clear' => 'Rensa',
	'Clear_Desc' => 'Rensa <b>ALLA</b> dina v�rderings detaljer.  G�r bara detta om du har ovanligt problem eller vill <b>radera alla</b> era omr�stnings uppgifter.  Klicka i rutan och skriv JA i rutan bredvid.',
	'Complete' => 'Komplett',
	'Authorization' => 'Tillst�nd',
	'rate_average' => 'Medel V�rdering',
	'rate_minimum' => 'Minimal V�rdering',
	'rate_maximum' => 'Maximal V�rdering',
	'Number_of_Rates' => 'Antal V�rderingar',
	'Rank2' => '#',
	'Rating' => 'V�rdering',

//Error Messages
	'Database_Error' => 'Databas Error',
	'Error_Dbase_Config' => 'Fel vid h�mtning eller uppdatering av Konfigurations uppgifter.',
	'Error_Dbase_Ratings' => 'Fel vid h�mtning eller uppdatering av v�rderings uppgifter.',
	'Error_Dbase_Auth' => 'Fel vid h�mtning eller uppdatering av v�rderings uppgifter.',
	'No_Topic_ID' => 'Inget �mne angavs att inh�mta information f�r.',
	)
);

?>