<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_bbcode.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
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

//
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\"
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//


$faq[] = array("--","Introductie");
$faq[] = array("Wat is BBCode?", "BBCode is een speciale bewerking van HTML. Of je al dan niet BBCode in je berichten op het forum kan gebruiken is bepaald door de beheerder. Je kan BBCode al dan niet aanzetten in een nieuw berichtformulier. BBCode is gelijk aan HTML, maar tags zijn ingesloten in rechte haken [ en ] in plaats van &lt; en &gt; en het geeft meer controle over wat gebruikt is. Alles hangt af van de template die je gebruikt waar je BBCode in je bericht kan gebruiken via een klikbare interface boven het berichtvak op je berichtformulier. Zelfs daarmee is deze gids nog bruikbaar.");


$faq[] = array("--","Tekstopmaak");
$faq[] = array("Hoe vetgedrukte, schuingedrukte en onderstreepte tekst maken", "BBCode heeft ook tags die je toelaten om snel de basisopmaak van je tekst aan te passen. Dit kan op de volgende manier: <ul><li>Om een deel van de tekst in het vet weer te geven plaats je die tussen <b>[b][/b]</b>, bijvoorbeeld: <br /><br /><b>[b]</b>Hallo<b>[/b]</b><br /><br />wordt dan <b>Hallo</b></li><li>Voor onderstreepte tekst gebruik je <b>[u][/u]</b>, bijvoorbeeld:<br /><br /><b>[u]</b>Goede morgen<b>[/u]</b><br /><br />wordt <u>Goede morgen</u></li><li>Voor schuingedruikte tekst gebruik je <b>[i][/i]</b>, bijvoorbeeld:<br /><br />Dit is <b>[i]</b>Geweldig!<b>[/i]</b><br /><br />wordt: <i>Geweldig!</i></li></ul>");
$faq[] = array("Hoe tekstkleur of grootte aanpassen", "Om de grootte en kleur van een tekst te wijzigen gebruik je volgende tags. Vergeet niet dat de lezer van uw bericht niet hetzelfde browser of systeem heeft en er dus zichtbare verschillen kunnen zijn: <ul><li>Tekstkleuren kan je toepassen door de tekst tussen volgende tags te plaatsen <b>[color=][/color]</b>. Je kan een bepaalde kleur gebruiken (bijvoorbeeld. red, blue, yellow, enz.) of de hexidecimale code (#FFFFFF, #000000). Bijvoorbeeld, om een tekst rood te maken gebruik je:<br /><br /><b>[color=red]</b>Hallo!<b>[/color]</b><br /><br />of<br /><br /><b>[color=#FF0000]</b>Hallo!<b>[/color]</b><br /><br />geeft beide als resultaat <span style=\"color:red\">Hallo!</span></li><li>De grootte van een tekst aanpassen gebeurt ongeveer op dezelfde manier <b>[size=][/size]</b>. Deze tag kan verschillen volgens de template die je gebruikt maar het aanbevolen formaat is een numerieke waarde die de tekstgroote weergeeft in pixels, beginnend bij 1 (zo klein dat je het zelfs niet ziet) tot 29 (zeer groot). Bijvoorbeeld:<br /><br /><b>[size=9]</b>KLEIN<b>[/size]</b><br /><br />wordt <span style=\"font-size:9px\">KLEIN</span><br /><br />en:<br /><br /><b>[size=24]</b>GROOT!<b>[/size]</b><br /><br />wordt <span style=\"font-size:24px\">GROOT!</span></li></ul>");
$faq[] = array("Kan ik verschillende tags samen gebruiken?", "Natuurlijk kan dat, bijvoorbeeld om iemands aandacht te trekken kan je schrijven:<br /><br /><b>[size=18][color=red][b]</b>ZIE JE ME!<b>[/b][/color][/size]</b><br /><br />dit geeft als resultaat <span style=\"color:red;font-size:18px\"><b>ZIE JE ME!</b></span><br /><br />We raden je aan deze tekstwijze niet te vaak te gebruiken! Vergeet niet dat je het bericht nakijkt dat alle tags gesloten zijn, en in de goede volgorde. Bijvoorbeeld de volgende is niet juist:<br /><br /><b>[b][u]</b>Dit is verkeerd<b>[/b][/u]</b>");


$faq[] = array("--","Citeren en vaste-afmeting tekst");
$faq[] = array("Tekst citeren in antwoorden", "Er zijn twee manieren om een tekst te citeren, met of zonder een verwijzing.<ul><li>Wanneer je de citaat (aanhaling) functie gebruikt om op een bericht te antwoorden zal je zien dat de tekst van het bericht is toegevoegd in het venster van nieuw bericht in een <b>[quote=\"\"][/quote]</b> blok. Deze methode laat je toe een citaat te maken naar een persoon of wat anders! Om bijvoorbeeld een stuk tekst van Mr. Blobby te citeren:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>Hier komt Mr. Blobby zijn tekst<b>[/quote]</b><br /><br />Het resultaat plaatst automatisch wat Mr. Blobby schreef erbij: voor je tekst. Onthoudt dat je \"\" tekens <b>moet</b> plaatsen rond de naam die je citeert!</li><li>De tweede methode laat je toe om blindelings iets te citeren. Dit kan door de tekst tussen <b>[quote][/quote]</b> tags te plaatsen. Wanneer je de tekst bekijkt zie je, Citaat: voor de tekst zelf.</li></ul>");
$faq[] = array("Code voor vaste-afmeting tekst", "Als je voor een deel van een code of andere teksten vaste-afmeting nodig hebt, bijvoorbeeld het Courier font moet je de tekst tussen <b>[code][/code]</b> tags plaatsen, bijvoorbeeld<br /><br /><b>[code]</b>echo \"Dit is een code\";<b>[/code]</b><br /><br />Alle gebruikte formaten binnen de <b>[code][/code]</b> tags zijn onthouden wanneer je de tekst later bekijkt.");


$faq[] = array("--","Lijsten toevoegen aan bericht");
$faq[] = array("Een niet geordende lijst maken", "BBCode ondersteund twee soorten lijsten, ongeordend en geordend. Deze zijn hoofdzakelijk dezelfde als hun HTML equivalenten. Een ongeordende lijst plaatst elk item in jouw lijst het een na het andere met een bolletje. Om een niet geordende lijst te maken gebruik je <b>[list][/list]</b> en om elk item aan te duiden <b>[*]</b>. Om bijvoorbeeld je favoriete kleuren aan te duiden gebruik je:<br /><br /><b>[list]</b><br /><b>[*]</b>Rood<br /><b>[*]</b>Blauw<br /><b>[*]</b>Geel<br /><b>[/list]</b><br /><br />Dit maakt de volgende lijst:<ul style=\"list-style-type: disc; padding: 15px;\"><li>Rood</li><li>Blauw</li><li>Geel</li></ul>");
$faq[] = array("Een geordende lijst maken", "De tweede soort lijst, een geordende lijst geeft je controle over wat er staat voor elk item. Om een geordende lijst te maken gebruik je: <b>[list=1][/list]</b> om een genummerde lijst te maken en <b>[list=a][/list]</b> voor een alfabetische. Zoals met een niet geordende lijst duidt je de items aan met <b>[*]</b>. Bijvoorbeeld:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Ga naar de winkel<br /><b>[*]</b>Koop een nieuwe computer<br /><b>[*]</b>Misschien ook een printer<br /><b>[/list]</b><br /><br />maakt het volgende:<ol type=\"1\"><li>Ga naar de winkel</li><li>Koop een nieuwe computer</li><li>Misschien ook een printer</li></ol>Voor een alfabetische lijst gebruik je:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Het eerste antwoord<br /><b>[*]</b>Het tweede antwoord<br /><b>[*]</b>Het derde antwoord<br /><b>[/list]</b><br /><br />wordt<ol type=\"a\"><li>Het eerste antwoord</li><li>Het tweede antwoord</li><li>Het derde antwoord</li></ol>");


$faq[] = array("--", "Links toevoegen aan bericht");
$faq[] = array("Link naar een andere site", "BBCode ondersteunt een aantal manieren om URIs, (Uniform Resource Indicators) te maken beter bekend als URLs.<ul><li>De eerste die je kan gebruiken is de <b>[url=][/url]</b> tag, wat je ook typt na het = teken zal zich voordoen als een URL. Als voorbeeld een link naar phpBB.com, kan je dit gebruiken:<br /><br /><b>[url=http://www.phpbb.com/]</b>Bezoek phpBB!<b>[/url]</b><br /><br />Dit maakt de volgende link: <a href=\"http://www.phpbb.com/\" target=\"_blank\">Bezoek phpBB!</a> Je zal zien dat deze link in een nieuw venster opent zodat de gebruiker in het forum kan blijven als hij dat wenst.</li><li>Als je wil dat de URL zichzelf weergeeft als een link kan je dit doen door volgende tag:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Dit maakt volgende link, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Nu heeft phpBB ook iets genaamd <i>Magische Links</i>, dit maakt van elke juiste URL een link zonder dat je een tag moet plaatsen of het begin http://. Als je bijvoorbeeld www.phpbb.com in een bericht typt krijg je automatisch <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> als je je bericht bekijkt.</li><li>Hetzelfde geldt ook voor een e-mailadres, je kan ofwel een e-mailadres specificeren:<br /><br /><b>[email]</b>nie.mand@domein.adr<b>[/email]</b><br /><br />wat het volgende weergeeft: <a href=\"emailto:nie.mand@domein.adr\">nie.mand@domein.adr</a> of je kan gewoon nie.mand@domein.adr in je bericht typen en het wordt onmiddelijk naar een e-maillink gebracht wanneer je het bericht bekijkt.</li></ul>Zoals met alle BBCode tags kan je allerlei tags gebruiken voor een URL zoals <b>[img][/img]</b> (zie volgend onderwerp), <b>[b][/b]</b>, enz. Het is aan jullie erop te letten dat je de juiste open of gesloten tag gebruikt, bijvoorbeeld:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />is <u>niet</u> juist wat kan leiden tot het verwijderen van je bericht, dus opgepast.");


$faq[] = array("--", "Afbeeldingen weergeven in berichten");
$faq[] = array("Een afbeelding toevoegen aan een bericht", "BBCode bevat een tag om afbeeldingen toe te voegen aan je berichten. Twee dingen zijn belangrijk om te onthouden bij gebruik van deze tag: ten eerste, veel gebruikers vinden het niet fijn als er veel afbeeldingen worden toegevoegd aan je bericht en ten tweede, de afbeelding die je toevoegt moet beschikbaar zijn op internet (het kan niet alleen bestaan op jouw computer, bijvoorbeeld,  bij een webserver!). Er zijn op dit moment geen manieren om afbeeldingen bij phpBB op te slaan (alle deze mogelijkheden zijn voorzien voor een volgende release van phpBB). Om een afbeelding weer te geven, zet je om een URL waar de afbeelding beschikbaar is de <b>[img][/img]</b> tags. Bijvoorbeeld:<br /><br /><b>[img]</b>http://www.icyphoenix.com/images/logo_ip.png<b>[/img]</b><br /><br />As noted in the URL section above you can wrap an image in a <b>[url][/url]</b> tag if you wish, eg.<br /><br /><b>[url=http://www.icyphoenix.com/][img]</b>http://www.icyphoenix.com/images/logo_ip.png<b>[/img][/url]</b><br /><br />would generate:<br /><br /><a href=\"http://www.icyphoenix.com/\" target=\"_blank\"><img src=\"http://www.icyphoenix.com/images/logo_ip.png\" border=\"0\" alt=\"\" /></a><br />");


$faq[] = array("--", "Andere dingen");
$faq[] = array("Kan ik mijn eigen tags toevoegen?", "Nee, het is op dit moment niet mogelijk met Icy Phoenix. Als je PHP goed kunt kun je proberen om je eigen toevoegen in <b>includes/bbcode.php</b> welke de BBCode bevat.");

// This ends the BBCode guide entries

?>