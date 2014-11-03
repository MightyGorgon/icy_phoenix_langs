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


$faq[] = array("--","Introduktion");
$faq[] = array("Vad är BBKod?", "BBKod är en särskild tillämpning av HTML. Oavsett om du faktiskt kan använda BBKod i dina inlägg på forumet bestäms av administratören. Dessutom kan du avaktivera BBKod om en per post basis via postnings formuläret. BBKod själv är av liknande typ som HTML: taggar omges av kvadratiska hängslen [ and ] snarare än &lt; och &gt; och det ger större kontroll över vad och hur någonting visas. Beroende på mallen du använder kan du finna att lägga till BBKod i dina inlägg har gjorts mycket enklare genom ett klickbart gränssnitt ovanför meddelandet i postnings formuläret. Även med detta kan du finna följande guide användbar.");


$faq[] = array("--","Text Formatering");
$faq[] = array("Hur man skapar fet, kursiv och understruken text", "BBKod innehåller taggar så att du snabbt kan ändra den grundläggande stilen på texten. Detta uppnås på följande sätt: <ul><li>För att göra en bit av texten fet bifoga den i <b>[b][/b]</b>, t.ex. <br /><br /><b>[b]</b>Hej<b>[/b]</b><br /><br />kommer att bli <b>Hej</b></li><li>För att understryka använd <b>[u][/u]</b>, till exempel:<br /><br /><b>[u]</b>God Morgon<b>[/u]</b><br /><br />kommer att bli <u>God Morgon</u></li><li>För kursiv text använd <b>[i][/i]</b>, t.ex.<br /><br />Detta är <b>[i]</b>Fantastiskt!<b>[/i]</b><br /><br />kommer att bli Detta är <i>Fantastiskt!</i></li></ul>");
$faq[] = array("Hur kan man ändra text färg eller storlek", "För att ändra färgen eller storleken på din text kan följande taggar användas. Tänk på hur produktionen kommer att visas beror på tittarnas webbläsare och system: <ul><li>Ändra färgen på texten uppnås genom omslag i <b>[color=][/color]</b>. Du kan antingen ange ett erkänt färg namn (t.ex. röd, blå, gul, etc.) eller hexadecimala triplett alternativ, till exempel. #FFFFFF, #000000. Till exempel, för att skapa röd text kan du använda:<br /><br /><b>[color=red]</b>Hej!<b>[/color]</b><br /><br />eller<br /><br /><b>[color=#FF0000]</b>Hej!<b>[/color]</b><br /><br />kommer både att visa <span style=\"color:red\">Hej!</span></li><li>ändra textstorlek sker på ett liknande sätt använd <b>[size=][/size]</b>. Den här taggen är beroende på mallen som du använder men det rekommenderade formatet är ett numeriskt värde som representerar textstorleken i pixlar, med start vid 1 (så liten att du inte ser det) upp till 29 (mycket stor). Till exempel:<br /><br /><b>[size=9]</b>LITEN<b>[/size]</b><br /><br />kommer i allmänhet att vara <span style=\"font-size:9px\">LITEN</span><br /><br />medan:<br /><br /><b>[size=24]</b>STOR!<b>[/size]</b><br /><br />kommer att vara <span style=\"font-size:24px\">STOR!</span></li></ul>");
$faq[] = array("Kan jag kombinera formaterings taggar?", "Ja, Givetvis kan du det; till exempel för att få någons uppmärksamhet kan du skriva:<br /><br /><b>[size=18][color=red][b]</b>TITTA PÅ MIG!<b>[/b][/color][/size]</b><br /><br />detta skulle bli <span style=\"color:red;font-size:18px\"><b>TITTA PÅ MIG!</b></span><br /><br />Vi rekommenderar inte att du utger mycket text som ser ut så här, men! Kom ihåg att det är upp till dig, den som gör inlägg, att se till att taggarna är stängda på rätt sätt. Exempelvis följande är fel:<br /><br /><b>[b][u]</b>Detta är fel<b>[/b][/u]</b>");


$faq[] = array("--","Citat och output fast-bredd text");
$faq[] = array("Citerar text i svar", "Det finns två sätt du kan citera text: med en referens eller utan.<ul><li>När du utnyttjar citat funktionen genom att svara på en post i forumet ska du märka att inläggs texten är tillagd i meddelanderutan inneslutet i ett <b>[quote=\"\"][/quote]</b> block. Denna metod låter dig citera med hänvisning till en person eller vad du väljer att lägga till. Till exempel, för att citera en text Mr Blobby skrev, ska du ange:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>Texten Mr Blobby skrev skall vara här<b>[/quote]</b><br /><br />Resultat output kommer automatiskt att lägga till: Mr. Blobby skrev: innan den egentliga texten. Kom ihåg att du <b>måste</b> inkludera citattecken \"\" runt namnet du citerar -- de är inte frivilliga.</li><li>Den andra metoden tillåter dig att blint citera något. För att utnyttja denna bifoga texten i <b>[quote][/quote]</b> taggarna. När du visar meddelandet kommer det helt enkelt att visa: Citera: innan själva texten.</li></ul>");
$faq[] = array("Generera kod eller fast bredd data", "Om du vill output en bit kod eller i praktiken något som kräver en fast bredd med ett Courier-typ teckensnitt ska du bifoga texten i <b>[code][/code]</b> taggarna, t.ex.<br /><br /><b>[code]</b>echo \"Det här är lite kod\";<b>[/code]</b><br /><br />All formatering som används inom <b>[code][/code]</b> taggar bibehålls när du senare visar det.");


$faq[] = array("--","Generera listor");
$faq[] = array("Skapa en O-Ordnad lista", "BBKod stöder två typer av listor, O-Ordnad och Ordnad. De är i huvudsak samma som HTML ekvivalenter. En Oordnad lista outputs  varje post i listan sekventiellt efter varandra drar var och en med en bullet karaktär. För att skapa en unordered listan använder du <b>[list][/list]</b> och definierar varje post i listan med <b>[*]</b>. Till exempel, för att lista dina favoritfärger kan du använda:<br /><br /><b>[list]</b><br /><b>[*]</b>Röd<br /><b>[*]</b>Blå<br /><b>[*]</b>Gul<br /><b>[/list]</b><br /><br />Detta skulle skapa följande lista:<ul><li>Röd</li><li>Blå</li><li>Gul</li></ul>");
$faq[] = array("Skapa en Ordnad lista", "Den andra typen av lista, en ordnad lista ger dig kontroll över vad som är output före varje post. För att skapa en ordnad lista använder du <b>[list=1][/list]</b> att skapa en numrerad lista eller alternativt <b>[list=a][/list]</b> för en alfabetisk lista. Precis som med den icke ordnade listan specificerar man föremålen med hjälp av <b>[*]</b>. Till exempel:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Gå till butiken<br /><b>[*]</b>Köp en ny dator<br /><b>[*]</b>Svär åt datorn när den kraschar<br /><b>[/list]</b><br /><br />kommer att generera följande:<ol type=\"1\"><li>Gå till butiken</li><li>Köp en ny dator</li><li>Svär åt datorn när den kraschar</li></ol>För en alfabetisk lista ska du använda:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Det första möjliga svaret<br /><b>[*]</b>Det andra möjliga svaret<br /><b>[*]</b>Det tredje möjliga svaret<br /><b>[/list]</b><br /><br />giving<ol type=\"a\"><li>Det första möjliga svaret</li><li>Det andra möjliga svaret</li><li>Det tredje möjliga svaret</li></ol>");


$faq[] = array("--", "Skapa Länkar");
$faq[] = array("Länka till en annan webbplats", "phpBB BBKod stöder ett antal olika sätt att skapa URIs, Uniform Resource Indicators mer känd som URLs.<ul><li>Den första av dessa använder <b>[url=][/url]</b> tagg; oavsett vad du skriver efter = tecknet kommer det att göra att innehållet av den taggen fungerar som en URL. Till exempel, för att länka till phpBB.com kan du använda:<br /><br /><b>[url=http://www.phpbb.com/]</b>Besök phpBB!<b>[/url]</b><br /><br />Detta skulle skapa följande länk, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Besök phpBB!</a> Du kommer att märka att länken öppnas i ett nytt fönster så att användaren kan fortsätta surfa på forumet om de så önskar.</li><li>Om du vill att URL:n visas som länk kan du göra detta genom att använda:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Detta skulle skapa följande länk: <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Dessutom phpBB funktioner något som kallas <i>Magic Links</i>som kommer att vända någon syntaktiskt rätt URL till en länk utan att du behöver ange några taggar eller ens det ledande http://. Till exempel, skriv www.phpbb.com i ditt meddelande kommer detta automatiskt att leda till <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> som matas ut när du visar meddelandet .</li><li>Samma sak gäller även för e-postadresser; Du kan antingen ange en adress detaljerad, liksom:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />som kommer att output <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> eller så kan du bara skriva no.one@domain.adr i ditt meddelande och det kommer automatiskt att konverteras när du visar det.</li></ul>Som med alla BBKods taggar kan du emballera URL runt någon av de andra taggar såsom <b>[img][/img]</b> (se nästa post), <b>[b][/b]</b>, etc. Med formaterings taggar är det upp till dig att säkerställa en korrekt öppning och stängnings ordning är följande. Till exempel:<br /><br /><b>[url=http://www.icyphoenix.com/][img]</b>http://www.icyphoenix.com/images/logo_ip.png<b>[/url][/img]</b><br /><br />är <u>ej</u> korrekt vilket kan leda till att ditt inlägg tas bort så ta det försiktigt.");


$faq[] = array("--", "Visar bilder i inlägg");
$faq[] = array("Bifoga en bild till en post", "phpBB BBKod innehåller en tagg för att inkludera bilder i dina inlägg. Två mycket viktiga saker att komma ihåg när du använder den här taggen är: många användare uppskattar inte massor av bilder som visas i poster och det andra, bilden du visar måste redan finnas tillgänglig på Internet (kan inte bara finns på datorn, till exempel, om du kör en webbserver!). Det finns för närvarande ingen möjlighet att lagra bilder lokalt med phpBB (alla dessa frågor förväntas att tas upp i nästa utgåva av phpBB). För att visa en bild måste du omge URL som pekar på bilden med <b>[img][/img]</b> taggar. Till exempel:<br /><br /><b>[img]</b>http://www.icyphoenix.com/images/logo_ip.png<b>[/img]</b><br /><br />Som påpekas i URL avsnittet ovan kan du packa in en bild i en <b>[url][/url]</b> tagg om du vill, t.ex..<br /><br /><b>[url=http://www.icyphoenix.com/][img]</b>http://www.icyphoenix.com/images/logo_ip.png<b>[/img][/url]</b><br /><br />skulle generera:<br /><br /><a href=\"http://www.icyphoenix.com/\" target=\"_blank\"><img src=\"http://www.icyphoenix.com/images/logo_ip.png\" border=\"0\" alt=\"\" /></a><br />");


$faq[] = array("--", "Övriga frågor");
$faq[] = array("Kan jag lägga till mina egna taggar?", "Nej, Jag är rädd för att du inte kan lägga dessa direkt i Icy Phoenix. Om du är säker på PHP kan du försöka ändra på egen hand <b>includes/bbcode.php</b> som är den fil som ansvarar för BBKoder.");

// This ends the BBCode guide entries

?>