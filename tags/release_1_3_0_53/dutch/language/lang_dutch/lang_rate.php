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
	'Already_Rated' => 'Je beoordeling: <b>%d</b>', //%d = their rate
	'Rate_Stats' => '<b>%.2f</b>', //%.2f = average, %d = min, %d = max, %d # of ratings
	'Rate' => 'Beoordelen',
	'Choose_Rating' => 'Kies beoordeling',
	'Topic_Rated' => 'Onderwerp is beoordeeld.',
	'Anon_Rate_Disabled' => 'Anonieme gebruikers kunnen deze functie niet gebruiken',
	'Not_Authorized_To_Rate' => 'Je bent niet bevoegd om dit onderwerp te beoordelen',
	'Change_Rating' => 'Wijzig beoordeling',
	'View_Details' => '<a href="%s" title="Bekijk details">Bekijk gedetailleerde info</a>', //%s = detailed URL
	'View_Details_2' => '<a href="%s" title="Bekijk details">Bekijk gedetailleerde info</a>', //%s = detailed URL
	'Username_Gave_Rate_of_Max' => '<b>%s</b> beoordelingen voor dit onderwerp <b>%d</b> van de maximum aantal <b>%d</b> van %s.', //%s = username, %d = user rate, %d = max rate, %s = date with create_date()
	'Detailed_Rating' => 'Gedetailleerde beoordeling',
	'Details_For_Topic' => 'Beoordelingsdetails voor&nbsp;&raquo;&nbsp;<b>%s</b>', //%s = topic title
	'Or_Someone_From_IP' => '(IP gelogd)', // makes it smaller for smaller res screens
	'Disable_Rating_ON' => 'Beoordeling voor dit bericht uitschakelen',
	'Summary' => 'Beoordelingssamenvatting',
	'Topic_Rating_Details' => 'Onderwerpbeoordelingsdetails',

	'Anonymous' => 'Anoniem',
	'All_Forums' => 'Alle Forums',
	
	'Max_Rate' => 'Maximum beoordeling',
	'User_Rate' => 'Gebruikerbeoordeling',
	'Rate_Date' => 'Datum van beoordeling',
	'Rate_Time' => 'Tijd van beoordeling',
	'Rate_Order' => 'Beoordelingsnummer',
	
	'No_Topics_Rated' => 'Er zijn geen onderwerpen beoordeeld',
	'Top_Topics' => 'Top %d bestbeoordeelde onderwerpen', //%d = number of topics
	'Top_Topics_For_Forum' => 'Top %d bestbeoordeelde onderwerp van %s', //%d = number of topics, %s is forum name
	'For_Forum' => '%s alleen', //%s = forum name
	'Last_Rated' => 'Laatst beoordeeld',
	'Number_of_Rates' => '# van de beoordelingen',
	'Rating' => 'Beoordeling',
	'Min' => 'Min',
	'Max' => 'Max',
	'Min_Rating' => 'Min beoordeling',
	'By_Forum' => 'Lijst van Forum',
	'Details_For_Topic' => '<b>%s</b>', //%s = topic title

//admin
	'Status' => 'Status',
	'Auth_Description' => 'Omschrijvingen',
	'NONE' => 'Beoordeling is totaal uitgeschakeld en beoordelingsmogelijkheid wordt niet weergeven in de onderwerpen',
	'ALL' => 'Alle gebruikers mogen beoordelen en de resultaten daarvan bekijken, ook de gasten en geregistreerde gebruikers',
	'REG' => 'Alleen geregistreerde gebruikers kunnen beoordelen, maar iedereen mag de resultaten daarvan bekijken',
	'PRIVATE' => 'Alleen geregistreerde gebruikers kunnen beoordelen en de resultaten daarvan bekijken',
	'MOD' => 'Alleen moderators en beheerders kunnen beoordelen, maar iedereen mag de resultaten daarvan bekijken',
	'ADMIN' => 'Alleen beheerders kunnen beoordelen, maar iedereen mag de resultaten daarvan bekijken',
	'Allow_Poster_To_Disable_Rating' => 'Auteur van het onderwerp toestaan om niet zijn/haar eigen onderwerp te beoordelen',
	'Allow_Detailed_Ratings_Page' => 'Gebruikers toestaan om de gedetailleerde beoordelingspagina te bekijken',
	'Max_Rating' => 'Maximale beoordeling toestaan (1 naar MAX)',
	'Allow_Users_To_ReRate' => 'Gebruikers toestaan om hun beoordeling te wijzigen',
	'Check_Anon_IP' => 'Controleer de IP-adressen van gasten wanneer ze al beoordeeld hebben zodat ze het niet nogmaals kunnen doen',
	'Anon_Rate_ID' => 'Volgende gast beoordeling IP-adres.<br />Verander het niet als je niet weet wat je doet en als het niet nodig is.<br />Instellen naar een hogere waarde dan dit is een heel slecht idee',
	'Big_Page_Number' => 'Aantal onderwerpen om weer te geven op de aparte beoordelingspagina (als je ervoor kiest om deze te gebruiken)',
	'Main_Page_Number' => 'Aantal onderwerpen om weer te geven op de hoofpagina (als je ervoor kiest om deze te gebruiken)',
	'Header_Page_Number' => 'Aantal onderwerpen om weer te geven op de headerpagina (als je ervoor kiest om deze te gebruiken)',
	'Mass_Update' => 'Alles bijwerken',
	'Purge_Old_Ratings' => 'Ruim oude beoordelingen op',
	'Min_Rates' => 'Minimum aantal beoordelingen voordat het wordt weergegeven in de best beoordeelde onderwerplijst',
	'Purge' => 'Opruimen',
	'Purged' => 'Opgeruimd',
	'Purge_Desc' => 'Ruim beoordelingen van verwijderde onderwerpen op, deze worden niet verwijderd als je het onderwerp zelf verwijderd.',
	'Clear' => 'Wissen',
	'Clear_Desc' => 'Wis <b>AL</b> jouw beoordelingsdetails.  Alleen deze functie gebruiken als je problemen hebt of als je <b>alle</b> beoordelingsgegeens wilt verwijderen.  Klik op de button en YES ingeven in het veld ernaast om het uit te voeren.',
	'Complete' => 'Afgerond',
	'Authorization' => 'Authorisatie',
	'rate_average' => 'Gemiddelde beoordeling',
	'rate_minimum' => 'Minimum beoordeling',
	'rate_maximum' => 'Maximum beoordeling',
	'Number_of_Rates' => 'Aantal beoordelingen',
	'Rank2' => '#',
	'Rating' => 'Beoordeling',

//Error Messages
	'Database_Error' => 'Databasefout',
	'Error_Dbase_Config' => 'Fout bij het opvragen of bijwerken van de configuratiegegevens.',
	'Error_Dbase_Ratings' => 'Fout bij het opvragen of bijwerken van de beoordelingsgegevens.',
	'Error_Dbase_Auth' => 'Fout bij het opvragen of bijwerken van de beoordelingsauthorisatiegegevens.',
	'No_Topic_ID' => 'Er zijn geen onderwerpen gespecificeerd die voldoen aan de details van.',
	)
);

?>