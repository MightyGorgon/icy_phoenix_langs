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
$faq[] = array("Vad �r BBKod?", "BBKod �r en s�rskild till�mpning av HTML. Oavsett om du faktiskt kan anv�nda BBKod i dina inl�gg p� forumet best�ms av administrat�ren. Dessutom kan du avaktivera BBKod om en per post basis via postnings formul�ret. BBKod sj�lv �r av liknande typ som HTML: taggar omges av kvadratiska h�ngslen [ and ] snarare �n &lt; och &gt; och det ger st�rre kontroll �ver vad och hur n�gonting visas. Beroende p� mallen du anv�nder kan du finna att l�gga till BBKod i dina inl�gg har gjorts mycket enklare genom ett klickbart gr�nssnitt ovanf�r meddelandet i postnings formul�ret. �ven med detta kan du finna f�ljande guide anv�ndbar.");


$faq[] = array("--","Text Formatering");
$faq[] = array("Hur man skapar fet, kursiv och understruken text", "BBKod inneh�ller taggar s� att du snabbt kan �ndra den grundl�ggande stilen p� texten. Detta uppn�s p� f�ljande s�tt: <ul><li>F�r att g�ra en bit av texten fet bifoga den i <b>[b][/b]</b>, t.ex. <br /><br /><b>[b]</b>Hej<b>[/b]</b><br /><br />kommer att bli <b>Hej</b></li><li>F�r att understryka anv�nd <b>[u][/u]</b>, till exempel:<br /><br /><b>[u]</b>God Morgon<b>[/u]</b><br /><br />kommer att bli <u>God Morgon</u></li><li>F�r kursiv text anv�nd <b>[i][/i]</b>, t.ex.<br /><br />Detta �r <b>[i]</b>Fantastiskt!<b>[/i]</b><br /><br />kommer att bli Detta �r <i>Fantastiskt!</i></li></ul>");
$faq[] = array("Hur kan man �ndra text f�rg eller storlek", "F�r att �ndra f�rgen eller storleken p� din text kan f�ljande taggar anv�ndas. T�nk p� att hur produktionen kommer att visas beror p� tittarnas webbl�sare och system: <ul><li>�ndra f�rgen p� texten uppn�s genom omslag i <b>[color=][/color]</b>. Du kan antingen ange en erk�nd f�rg namn (t.ex. red, blue, yellow, etc.) eller hexadecimala triplett alternativ, till exempel. #FFFFFF, #000000. Till exempel, f�r att skapa r�d text kan du anv�nda:<br /><br /><b>[color=red]</b>Hej!<b>[/color]</b><br /><br />or<br /><br /><b>[color=#FF0000]</b>Hej!<b>[/color]</b><br /><br />kommer b�de att visa <span style=\"color:red\">Hej!</span></li><li>�ndra textstorlek sker p� ett liknande s�tt anv�nd <b>[size=][/size]</b>. Den h�r taggen �r beroende p� mallen som du anv�nder men det rekommenderade formatet �r ett numeriskt v�rde som representerar textstorleken i pixlar, med start vid 1 (s� liten att du inte ser det) upp till 29 (mycket stor). Till exempel:<br /><br /><b>[size=9]</b>LITEN<b>[/size]</b><br /><br />kommer i allm�nhet att vara <span style=\"font-size:9px\">LITEN</span><br /><br />whereas:<br /><br /><b>[size=24]</b>STOR!<b>[/size]</b><br /><br />kommer att vara <span style=\"font-size:24px\">STOR!</span></li></ul>");
$faq[] = array("Kan jag kombinera formaterings taggar?", "Ja, Givetvis kan du det; till exempel f�r att f� n�gons uppm�rksamhet kan du skriva:<br /><br /><b>[size=18][color=red][b]</b>TITTA P� MIG!<b>[/b][/color][/size]</b><br /><br />detta skulle bli <span style=\"color:red;font-size:18px\"><b>TITTA P� MIG!</b></span><br /><br />Vi rekommenderar inte att du utger mycket text som ser ut s� h�r, men! Kom ih�g att det �r upp till dig, den som g�r inl�gg, att se till att taggarna �r st�ngda p� r�tt s�tt. Exempelvis f�ljande �r fel:<br /><br /><b>[b][u]</b>Detta �r fel<b>[/b][/u]</b>");


$faq[] = array("--","Citat och output fast-bredd text");
$faq[] = array("Citerar text i svar", "Det finns tv� s�tt du kan citera text: med en referens eller utan.<ul><li>N�r du utnyttjar Citat funktionen genom att svara p� en post i forumet ska du m�rka att inl�ggs texten �r tillagd i meddelanderutan inneslutet i ett <b>[quote=\"\"][/quote]</b> block. Denna metod l�ter dig citera med h�nvisning till en person eller vad du v�ljer att l�gga till. Till exempel, f�r att citera en text Mr Blobby skrev, ska du ange:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>Texten Mr Blobby skrev skall vara h�r<b>[/quote]</b><br /><br />Resultat output kommer automatiskt att l�gga till: Mr. Blobby skrev: innan den egentliga texten. Kom ih�g att du <b>m�ste</b> inkludera citattecken \"\" runt namnet du citerar -- de �r inte frivilliga.</li><li>Den andra metoden till�ter dig att blint citera n�got. F�r att utnyttja denna bifoga texten i <b>[quote][/quote]</b> taggarna. N�r du visar meddelandet kommer det helt enkelt att visa: Citera: innan sj�lva texten.</li></ul>");
$faq[] = array("Generera kod eller fast bredd data", "Om du vill output en bit kod eller i praktiken n�got som kr�ver en fast bredd med ett Courier-typ teckensnitt ska du bifoga texten i <b>[code][/code]</b> taggarna, t.ex.<br /><br /><b>[code]</b>echo \"Det h�r �r lite kod\";<b>[/code]</b><br /><br />All formatering som anv�nds inom <b>[code][/code]</b> taggar bibeh�lls n�r du senare visar det.");


$faq[] = array("--","Generera listor");
$faq[] = array("Skapa en O-Ordnad lista", "BBKod st�der tv� typer av listor, O-Ordnad och Ordnad. De �r i huvudsak samma som HTML ekvivalenter. En Oordnad lista outputs  varje post i listan sekventiellt efter varandra drar var och en med en bullet karakt�r. F�r att skapa en unordered listan anv�nder du <b>[list][/list]</b> och definierar varje post i listan med <b>[*]</b>. Till exempel, f�r att lista dina favoritf�rger kan du anv�nda:<br /><br /><b>[list]</b><br /><b>[*]</b>R�d<br /><b>[*]</b>Bl�<br /><b>[*]</b>Gul<br /><b>[/list]</b><br /><br />Detta skulle skapa f�ljande lista:<ul><li>R�d</li><li>Bl�</li><li>Gul</li></ul>");
$faq[] = array("Skapa en Ordnad lista", "Den andra typen av lista, en ordnad lista ger dig kontroll �ver vad som �r output f�re varje post. F�r att skapa en ordnad lista anv�nder du <b>[list=1][/list]</b> att skapa en numrerad lista eller alternativt <b>[list=a][/list]</b> for an alphabetical list. As with the unordered list items are specified using <b>[*]</b>. Till exempel:<br /><br /><b>[list=1]</b><br /><b>[*]</b>G� till butikerna<br /><b>[*]</b>K�p en ny dator<br /><b>[*]</b>Sv�r �t datorn n�r den kraschar<br /><b>[/list]</b><br /><br />kommer att generera f�ljande:<ol type=\"1\"><li>G� till butikerna</li><li>K�p en ny dator</li><li>Sv�r �t datorn n�r den kraschar</li></ol>F�r en alfabetisk lista ska du anv�nda:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Det f�rsta m�jliga svaret<br /><b>[*]</b>Det andra m�jliga svaret<br /><b>[*]</b>Det tredje m�jliga svaret<br /><b>[/list]</b><br /><br />giving<ol type=\"a\"><li>Det f�rsta m�jliga svaret</li><li>Det andra m�jliga svaret</li><li>Det tredje m�jliga svaret</li></ol>");


$faq[] = array("--", "Skapa L�nkar");
$faq[] = array("L�nka till en annan webbplats", "phpBB BBKod st�der ett antal olika s�tt att skapa URIs, Uniform Resource Indicators mer k�nd som URLs.<ul><li>Den f�rsta av dessa anv�nder <b>[url=][/url]</b> tagg; oavsett vad du skriver efter = tecknet kommer det att g�ra att inneh�llet av den taggen fungerar som en URL. Till exempel, f�r att l�nka till phpBB.com kan du anv�nda:<br /><br /><b>[url=http://www.phpbb.com/]</b>Bes�k phpBB!<b>[/url]</b><br /><br />Detta skulle skapa f�ljande l�nk, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Bes�k phpBB!</a> Du kommer att m�rka att l�nken �ppnas i ett nytt f�nster s� att anv�ndaren kan forts�tta surfa p� forumet om de s� �nskar.</li><li>Om du vill att URL:n visas som l�nk kan du g�ra detta genom att anv�nda:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Detta skulle skapa f�ljande l�nk: <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Dessutom phpBB funktioner n�got som kallas <i>Magic Links</i>som kommer att v�nda n�gon syntaktiskt r�tt URL till en l�nk utan att du beh�ver ange n�gra taggar eller ens det ledande http://. Till exempel, skriv www.phpbb.com i ditt meddelande kommer detta automatiskt att leda till <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> som matas ut n�r du visar meddelandet .</li><li>Samma sak g�ller �ven f�r e-postadresser; Du kan antingen ange en adress detaljerad, liksom:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />som kommer att output <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> eller s� kan du bara skriva no.one@domain.adr i ditt meddelande och det kommer automatiskt att konverteras n�r du visar det.</li></ul>Som med alla BBKods taggar kan du emballera URL runt n�gon av de andra taggar s�som <b>[img][/img]</b> (se n�sta post), <b>[b][/b]</b>, etc. Med formaterings taggar �r det upp till dig att s�kerst�lla en korrekt �ppning och st�ngnings ordning �r f�ljande. Till exempel:<br /><br /><b>[url=http://www.icyphoenix.com/][img]</b>http://www.icyphoenix.com/images/logo_ip.png<b>[/url][/img]</b><br /><br />�r <u>ej</u> korrekt vilket kan leda till att ditt inl�gg tas bort s� ta det f�rsiktigt.");


$faq[] = array("--", "Visar bilder i inl�gg");
$faq[] = array("Bifoga en bild till en post", "phpBB BBKod inneh�ller en tagg f�r att inkludera bilder i dina inl�gg. Tv� mycket viktiga saker att komma ih�g n�r du anv�nder den h�r taggen �r: m�nga anv�ndare uppskattar inte massor av bilder som visas i poster och det andra, bilden du visar m�ste redan finnas tillg�nglig p� Internet (kan inte bara finns p� datorn, till exempel, om du k�r en webbserver!). Det finns f�r n�rvarande ingen m�jlighet att lagra bilder lokalt med phpBB (alla dessa fr�gor f�rv�ntas att tas upp i n�sta utg�va av phpBB). F�r att visa en bild m�ste du omge URL som pekar p� bilden med <b>[img][/img]</b> taggar. Till exempel:<br /><br /><b>[img]</b>http://www.icyphoenix.com/images/logo_ip.png<b>[/img]</b><br /><br />Som p�pekas i URL avsnittet ovan kan du packa in en bild i en <b>[url][/url]</b> tagg om du vill, t.ex..<br /><br /><b>[url=http://www.icyphoenix.com/][img]</b>http://www.icyphoenix.com/images/logo_ip.png<b>[/img][/url]</b><br /><br />skulle generera:<br /><br /><a href=\"http://www.icyphoenix.com/\" target=\"_blank\"><img src=\"http://www.icyphoenix.com/images/logo_ip.png\" border=\"0\" alt=\"\" /></a><br />");


$faq[] = array("--", "�vriga fr�gor");
$faq[] = array("Kan jag l�gga till mina egna taggar?", "Nej, Jag �r r�dd f�r att du inte kan l�gga dessa direkt i Icy Phoenix. Om du �r s�ker p� PHP kan du f�rs�ka �ndra p� egen hand <b>includes/bbcode.php</b> som �r den fil som ansvarar f�r BBKoder.");

// This ends the BBCode guide entries

?>