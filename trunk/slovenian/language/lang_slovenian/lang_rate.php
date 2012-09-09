<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_rate.php 33 2009-05-02 16:34:07Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Nivisec.com (support@nivisec.com)
* TheSteffen, KugeLSichA, Tom, Carsten
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
	'Already_Rated' => 'Ocenili ste: <b>%d</b>', //%d = njihova ocena
	'Rate_Stats' => '<b>%.2f</b>', //%.2f = povprečno, %d = min, %d = max, %d # od glasov
	'Rate' => 'Ocena',
	'Choose_Rating' => 'Izberi oceno',
	'Topic_Rated' => 'Tema je bila ocenjena.',
	'Anon_Rate_Disabled' => 'Anonimni uporabniki ne morejo dati ocene',
	'Not_Authorized_To_Rate' => 'Nimate dovoljenja, da ocenite to temo',
	'Change_Rating' => 'Spremeni oceno',
	'View_Details' => '<a href="%s" title="View Details">Ogled podrobnosti</a>', //%s = podroben URL
	'View_Details_2' => '<a href="%s" title="View Details">Ogled podrobnosti</a>', //%s = podroben URL
	'Username_Gave_Rate_of_Max' => '<b>%s</b> ocena te teme <b>%d</b> od možnih <b>%d</b> v %s.', //%s = uporabniško ime, %d = uporabniška ocena, %d = največja ocena, %s = datum z create_date()
	'Detailed_Rating' => 'Podrobna ocena',
	'Details_For_Topic' => 'Podrobnosti ocene za&nbsp;&raquo;&nbsp;<b>%s</b>', //%s = ime teme
	'Or_Someone_From_IP' => '(ip logged)', // postane manjši manjše zaslone 
	'Disable_Rating_ON' => 'Onemogoči oceno te objave',
	'Summary' => 'Povzetek ocene',
	'Topic_Rating_Details' => 'Podrobnosti ocene teme',

	'Anonymous' => 'Anonimni',
	'All_Forums' => 'Vsi forumi',

	'Max_Rate' => 'Max ocena',
	'User_Rate' => 'Uporbnikova ocena',
	'Rate_Date' => 'Datum ocene',
	'Rate_Time' => 'čas ocene',
	'Rate_Order' => 'Seznam ocen',

	'No_Topics_Rated' => 'Nobena tema ni bila ocenjena',
	'Top_Topics' => 'Najbolje %d ocenjena tema', //%d = število tem
	'Top_Topics_For_Forum' => 'Najbolje %d ocenjena tema za %s', //%d = število tem, %s je ime foruma
	'For_Forum' => '%s samo', //%s = ime foruma
	'Last_Rated' => 'Nazadnje ocenjeno',
	'Number_of_Rates' => '# ocen',
	'Rating' => 'Ocena',
	'Min' => 'Min',
	'Max' => 'Max',
	'Min_Rating' => 'Min ocena',
	'By_Forum' => 'Seznam forumov',
	'Details_For_Topic' => '<b>%s</b>', //%s = ime teme

//admin
	'Status' => 'Status',
	'Auth_Description' => 'Opisi',
	'NONE' => 'Ocene so bile onemogočene in brez ocen, vrstica z ocenami nebo prikazana,',
	'ALL' => 'Vsi uporabniki lahko ocenijo in si ogledajo vrstico, vključno z anonimnimi in registriranimi',
	'REG' => 'Samo registrirani uporabniki lahko ocenijo, toda vsakdo lahko ogleda vrstico',
	'PRIVATE' => 'Samo registrirani uporabniki lahko ocenijo in vidijo vrstico',
	'MOD' => 'Samo skrbniki in moderatorji lahko ocenijo, toda vsakdo lahko ogleda vrstico',
	'ADMIN' => 'Samo skrbniki lahko ocenijo, toda vsakdo lahko ogleda vrstico',
	'Allow_Poster_To_Disable_Rating' => 'Dovoli moderatorju da onemogoči ocenjevanje',
	'Allow_Detailed_Ratings_Page' => 'Dovoli uporabnikom da vidijo podrobnosti ocene',
	'Max_Rating' => 'Največje število dovoljenih ocen (1 do MAX)',
	'Allow_Users_To_ReRate' => 'Dovoli uporabnikom da spremenijo oceno',
	'Check_Anon_IP' => 'Preveri IP anonimnih uporabnikov ko ocenjujejo da vidiš ali so že ocenili',
	'Anon_Rate_ID' => 'Naslednja ocena anonimnega uporabnika.<br />Ne spremeni tega v primeru da neveš kaj delaš.<br />Nastavitve na višjo vrednost kolikor je napisana je zelo slaba ideja',
	'Big_Page_Number' => 'Število tem za prikaz na ločeni strani za ocene (če izberete da jo uporabite)',
	'Main_Page_Number' => 'Število tem za prikaz na glacni strani (če izberete da jo uporabite)',
	'Header_Page_Number' => 'Število tem za prikaz v glavi prikaza (če izberete da jo uporabite)',
	'Mass_Update' => 'Količinska posodobitev',
	'Purge_Old_Ratings' => 'Očistite stare ocene',
	'Min_Rates' => 'Najmanjše število ocenjevalcev na temo preden se prikaže na listi Najbolje ocenjenih',
	'Purge' => 'očistiti',
	'Purged' => 'očiščeno',
	'Purge_Desc' => 'Očistiti ocene z zbrisane teme lahko nekako niso bile zbrisane s temo.',
	'Clear' => 'Izbriši',
	'Clear_Desc' => 'Izbriši <b>VSE</b> podrobnosti ocene.  To naredi samo če imaš neobičajne probleme z <b>izbrisom vseh</b> glasov.  Klikni in tudi napiši YES v polje za vpis.',
	'Complete' => 'Končano',
	'Authorization' => 'Dovoljenje',
	'rate_average' => 'Povprečna stopnja',
	'rate_minimum' => 'Minimalna stopnja',
	'rate_maximum' => 'Maximalna stopnja',
	'Number_of_Rates' => 'Število stopenj',
	'Rank2' => '#',
	'Rating' => 'Stopnjevanje',

//Error Messages
	'Database_Error' => 'Napaka zbirke podatkov',
	'Error_Dbase_Config' => 'Napaka pridobivanja ali posodabljanja podatkov konfiguracije.',
	'Error_Dbase_Ratings' => 'Napaka pridobivanja ali posodabljanja podatkov ocen.',
	'Error_Dbase_Auth' => 'Napaka pridobivanja ali posodabljanja podatkov potrjevanja ocen.',
	'No_Topic_ID' => 'Tema ni bila določena, da pridobi podatke za.',
	)
);

?>