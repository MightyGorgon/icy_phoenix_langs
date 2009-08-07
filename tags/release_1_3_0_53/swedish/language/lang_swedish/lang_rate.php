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
	'Already_Rated' => 'Din värdering: <b>%d</b>', //%d = their rate
	'Rate_Stats' => '<b>%.2f</b>', //%.2f = average, %d = min, %d = max, %d # of ratings
	'Rate' => 'Värdera',
	'Choose_Rating' => 'Välj Värdering',
	'Topic_Rated' => 'Ämne har blivit värderat.',
	'Anon_Rate_Disabled' => 'Anonym användare har inte tillåtelse att värdera',
	'Not_Authorized_To_Rate' => 'Du har inte behörighet att värdera detta ämne',
	'Change_Rating' => 'Ändra Värdering',
	'View_Details' => '<a href="%s" title="Visa Detaljer">Visa detaljerad info</a>', //%s = detailed URL
	'View_Details_2' => '<a href="%s" title="Visa Detaljer">Visa detaljerad info</a>', //%s = detailed URL
	'Username_Gave_Rate_of_Max' => '<b>%s</b> värdera detta ämne <b>%d</b> av ett eventuellt <b>%d</b> den %s.', //%s = username, %d = user rate, %d = max rate, %s = date with create_date()
	'Detailed_Rating' => 'Detaljerad Värdering',
	'Details_For_Topic' => 'Värderings Detaljer För&nbsp;&raquo;&nbsp;<b>%s</b>', //%s = topic title
	'Or_Someone_From_IP' => '(ip loggad)', // makes it smaller for smaller res screens
	'Disable_Rating_ON' => 'Avaktivera Värdering i detta inlägg',
	'Summary' => 'Sammanfatta Värdering',
	'Topic_Rating_Details' => 'Ämnes Värderings Detaljer',

	'Anonymous' => 'Anonyma',
	'All_Forums' => 'Alla Forum',

	'Max_Rate' => 'Max Värdering',
	'User_Rate' => 'Användare Värdering',
	'Rate_Date' => 'Värderings Datum',
	'Rate_Time' => 'Värderings Tid',
	'Rate_Order' => 'Antal Värderingar',

	'No_Topics_Rated' => 'Inga ämnen har blivit värderade',
	'Top_Topics' => 'Topp %d Värderade Ämnen', //%d = number of topics
	'Top_Topics_For_Forum' => 'Topp %d Värderade Ämnen för %s', //%d = number of topics, %s is forum name
	'For_Forum' => '%s Endast', //%s = forum name
	'Last_Rated' => 'Senaste Värdering',
	'Number_of_Rates' => '# av Värderingar',
	'Rating' => 'Värdering',
	'Min' => 'Min',
	'Max' => 'Max',
	'Min_Rating' => 'Min Värdering',
	'By_Forum' => 'Lista Genom Forum',
	'Details_For_Topic' => '<b>%s</b>', //%s = topic title

//admin
	'Status' => 'Status',
	'Auth_Description' => 'Beskrivningar',
	'NONE' => 'Värdering är helt avaktiverad och ingen värderings meny visas ovan ämnen',
	'ALL' => 'Alla användare kan värdera och granska menyn, som omfattar anonyma och registrerade',
	'REG' => 'Endast registrerade användare kan värdera, men alla kan granska menyn',
	'PRIVATE' => 'Endast registrerade användare kan värdera och granska menyn',
	'MOD' => 'Endast forum moderatorer och administratörer kan värdera och alla kan granska menyn',
	'ADMIN' => 'Endast administratörer kan värdera och alla kan granska menyn',
	'Allow_Poster_To_Disable_Rating' => 'Tillåt Inläggaren Att Avaktivera Värderings Förmågan',
	'Allow_Detailed_Ratings_Page' => 'Tillåt Användare Att Visa Detaljerade Värderingslistor Sidor',
	'Max_Rating' => 'Max Värderingar Tillåtna (1 till MAX)',
	'Allow_Users_To_ReRate' => 'Tillåt användare att ändra sina värderingar',
	'Check_Anon_IP' => 'Kontrollera Anonyma Användares IP när de röstar för att se om de redan har gjort sin värdering',
	'Anon_Rate_ID' => 'Nästa Anonyma Användares Värderings IP.<br />Ändra inte detta om du inte vet vad du gör och verkligen måste.<br />Ställa in den till ett högre värde än vad som anges är en mycket dålig idé',
	'Big_Page_Number' => 'Antal inlägg att visa på separat värderings sida (om du väljer att använda den)',
	'Main_Page_Number' => 'Antal inlägg att visa på huvudsidans display (om du väljer att använda den)',
	'Header_Page_Number' => 'Antal inlägg att visa på huvudsidans display (om du väljer att använda den)',
	'Mass_Update' => 'Mass Uppdatering',
	'Purge_Old_Ratings' => 'Rensa Gamla Värderingar',
	'Min_Rates' => 'Minsta antal Värderingar ett Ämne Måste Ha Före Visning på Topp Värderings Listan',
	'Purge' => 'Rensa',
	'Purged' => 'Rensas',
	'Purge_Desc' => 'Rensa värderingar från raderade ämnen som kan ha varit ej ursprungligt raderade med ämnet.',
	'Clear' => 'Rensa',
	'Clear_Desc' => 'Rensa <b>ALLA</b> dina värderings detaljer.  Gör bara detta om du har ovanligt problem eller vill <b>radera alla</b> era omröstnings uppgifter.  Klicka i rutan och skriv JA i rutan bredvid.',
	'Complete' => 'Komplett',
	'Authorization' => 'Tillstånd',
	'rate_average' => 'Medel Värdering',
	'rate_minimum' => 'Minimal Värdering',
	'rate_maximum' => 'Maximal Värdering',
	'Number_of_Rates' => 'Antal Värderingar',
	'Rank2' => '#',
	'Rating' => 'Värdering',

//Error Messages
	'Database_Error' => 'Databas Error',
	'Error_Dbase_Config' => 'Fel vid hämtning eller uppdatering av Konfigurations uppgifter.',
	'Error_Dbase_Ratings' => 'Fel vid hämtning eller uppdatering av värderings uppgifter.',
	'Error_Dbase_Auth' => 'Fel vid hämtning eller uppdatering av värderings uppgifter.',
	'No_Topic_ID' => 'Inget ämne angavs att inhämta information för.',
	)
);

?>