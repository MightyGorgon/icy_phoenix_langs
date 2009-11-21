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


$faq[] = array('--','Bevezetõ');
$faq[] = array('Mi az a BBCode?','A BBCode egy speciális változata a HTML nyelvnek. A BBCode használatának engedélyezése a Fórum adminisztrátorától függ, de neked is lehetõséged van arra, hogy a hozzászólásaidban ki-, vagy bekapcsold a BBCode-ot. A BBCode hasonló felépítésû, mint a HTML, kivéve hogy a tagek nem kacsacsõrök között (&lt; és &gt;), hanem szögletes zárójelben "[" "]" vannak;  amellett  lehetõséget nyújt hogy hogyan és miként lehet a szövegeket szebben, jobban, tagoltabban megjeleníteni. A használatban lévõ sablontól függ, hogy pontosan hol található meg a BBCode panel, melyrõl könnyedén és gyorsan be lehet illeszteni a tageket a szövegbe. Fontos, hogy mindig ügyeljünk a tagek lezárására. Az alábbiakban egy rövid bemutató található a BBCode lehetõségeirõl.<br />');


$faq[] = array('--','Szövegformázás');
$faq[] = array('Hogyan készítsünk félkövér, dõlt és aláhúzott szöveget?','A BBCode tagek lehetõséget adnak arra, hogy pillanatok alatt megváltoztathassuk a szöveg alapkinézetét. Ezt a következõ módon érhetjük el: <ul><li>Félkövérhez <b>[b][/b]</b> közé zárjuk a szöveget, például: <b>[b]</b>Helló<b>[/b]</b><br /><br /> <b>Helló</b> lesz belõle<br /><br /></li><li>Aláhúzáshoz használjuk az <b>[u][/u]</b> taget, például: <b>[u]</b>Jó reggelt!<b>[/u]</b><br /><br /><u>Jó reggelt!</u> lesz belõle<br /><br /></li><li>Dõlt szöveghez használjunk <b>[i][/i]</b> taget, például: Ez <b>[i]</b>nagyszerû!<b>[/i]</b><br /><br />Ez <i>nagyszerû!</i></li></ul>');
$faq[] = array('Hogyan változtassuk meg a szöveg színét és méretét?','A szín és méret megváltoztatásához az alábbi tageket használhatjuk. Használat elõtt vegyük figyelembe, hogy a megváltoztatott színû és méretû szöveg másként jelenhet meg a különféle böngészõkön és rendszereken, ezért ne vigyük túlzásba (pld. világos háttéren világos betûszín és/vagy túl apró betûméret használata).<ul><li>A szín megváltoztatásához: <b>[color=][/color]</b> tag szükséges. A szín megadható a nevével (piros, kék, fehér, zöld, stb.;  természetesen ezeket angolul, azaz "red", "blue", "white", "green"), vagy hexadecimális értékkel (#000000, #FFFFFF, stb.). Például egy piros szöveg készítése:<br /><br /><b>[color=red]</b>Helló!<b>[/color]</b><br /><br />vagy<br /><br /><b>[color=#FF0000]</b>Helló!<b>[/color]</b><br /><br />ugyanazt eredményezi: <span style="color:red">Helló!</span><br /><br /></li><li>A szöveg átméretezése is hasonló a színezéshez: <b>[size=][/size]</b>. Ennek a tagnek a használata függ a használt sablontól, de az ajánlott használati forma az, hogy számmal (pixelben) adjuk meg a kívánt méretet; kezdve az 1-tõl (olyan apró, hogy nem is látható) a 29-ig (óriási). Például:<br /><br />A <b>[size=9]</b>KICSI<b>[/size]</b>-bõl:<br /><br /><span style="font-size:9px">KICSI</span> lesz<br /><br />Ehhez hasonlóan:<br /><br />az <b>[size=24]</b>ÓRIÁSI!<b>[/size]</b>-ból:<br /><br /><span style="font-size:24px">ÓRIÁSI!</span></li></ul>');
$faq[] = array('Használhatok egyszerre többféle formázást?','Igen, természetesen ezeket lehet kombinálni; például ha fel akarod hívni valakinek a figyelmét a szövegre:<br /><br />Az <b>[size=18][color=red][b]</b>OLVASD EL!<b>[/b][/color][/size]</b><br /><br /> kombináció ezt eredményezi: <span style="color:red;font-size:18px"><b>OLVASD EL!</b></span><br /><br />Nem ajánlatos egyszerre sok ilyet használni, mert a szöveg nehezen lesz olvasható. Emlékeztetõül, mindig figyelj a tagek sorrendjére. A következõ példa hibás:<br /><br /><b>[b][u]</b>Ez így hibás<b>[/b][/u]</b><br />');


$faq[] = array('--','Idézetek');
$faq[] = array('Idézés','Két módon lehet lehet idézni: vagy megadva az illetõt, akitõl idézünk, vagy anélkül.<ul><li>Ha valakinek válaszolni akarunk, akkor a <b>[quote=""][/quote]</b> taget használjuk, ahol az idézõjel közé írjuk az idézett személy nevét (vagy bármi mást). Ugyanez történik, ha valakinek a hozzászólásában az "Idézés"-re kattintunk: ekkor egy új hozzászólás készül, melyben a <b>[quote=""][/quote]</b> tagek közé kerül az illetõ hozzászólása.<br />Ha például Pacák úrtól akarunk idézni, akkor a következõt írjuk:<br /><br /><b>[quote="Pacák úr"]</b>Ide a Pacák úr által írt szöveg kerül<b>[/quote]</b><br /><br />A beírt szöveg elé automatikusan odakerül hogy: Pacák úr írta. Fontos, az egyenlõségjel után <b>kötelezõ</b> idézõjelbe tenni az idézõ nevét, ezt nem lehet lehagyni.<br /><br /></li><li>A második módszerrel egyszerûen idézhetünk bárkitõl. Ehhez a a szöveget egy <b>[quote][/quote]</b> tagbe zárjuk. Az elküldés után látjuk, hogy az idézet elé csak egy "Idézet" szöveg került.</li></ul>');
$faq[] = array('Kódok megjelenítése','Ha valamilyen programkódot, vagy fix szélességet igénylõ szöveget szeretnél beírni (pld. Courier betûtípussal), akkor a <b>[code][/code]</b> tag közé kell tenni. Például:<br /><br /><b>[code]</b>echo "Ez valami kód";<b>[/code]</b><br /><br />A <b>[code][/code]</b> tagen belül ne használj más formázást, mivel azok érvényüket vesztik.<br />');


$faq[] = array('--','Listák készítése');
$faq[] = array('Rendezetlen lista készítése','A BBCode kétfajta listakészítést támogat, a rendezetlen és rendezett listát. A rendezetlen listában minden elem elkülönül egymástól , és mindegyik elé egy pont kerül. A lista készítéséhez a <b>[list][/list]</b> taget használjuk, és minden elemet egy <b>[*]</b> taggel definiálunk (a többi taggel ellentétben ezt nem kell lezárni). Például:<br /><br /><b>[list]</b><br /><b>[*]</b>Piros<br /><b>[*]</b>Kék<br /><b>[*]</b>Sárga<br /><b>[/list]</b><br /><br />Ez a következõt eredményezi:<ul><li>Piros</li><li>Kék</li><li>Sárga</li></ul>');
$faq[] = array('Rendezett lista készítése','A másik típus a rendezett lista. A rendezett listával sorszámozhatjuk, sorrendet állíthatunk fel az elemek között. Ezt a <b>[list=1][/list]</b> taggel tehetjük meg. Készíthetünk betû általi sorolást is, a <b>[list=a][/list]</b> taggel. Az egyes elemeket itt is a [*] taggel határozzuk meg. Példa:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Elmenni a boltba<br /><b>[*]</b>Új számítógép vásárlása<br /><b>[*]</b>Rácsapni a gépre, ha lefagy<br /><b>[/list]</b><br /><br />eredménye a következõ:<ol type="1"><li>Elmenni a boltba</li><li>Új számítógép vásárlása</li><li>Rácsapni a gépre, ha lefagy</li></ol>Alfabetikus listánál a következõképp használjuk:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Elsõ lehetséges válasz<br /><b>[*]</b>Második lehetséges válasz<br /><b>[*]</b>Harmadik lehetséges válasz<br /><b>[/list]</b><br /><br />eredménye:<ol type="a"><li>Elsõ lehetséges válasz</li><li>Második lehetséges válasz</li><li>Harmadik lehetséges válasz</li></ol>');


$faq[] = array('--','Hivatkozások készítése');
$faq[] = array('Hivatkozás egy másik weboldalra','A phpBB BBCode-ja több lehetõséget biztosít a hivatkozások készítésére. A hivatkozásnak egy URL-re (Universe Resource Locator; ez jelenti magát a webcímet) kell mutatnia.<ul><li>Az egyik, az <b>[url=][/url]</b> tag használata. Az egyenlõségjel után írt szövegnek az URL-nek kell lennie. Például, egy link a phpBB oldalára a következõképpen néz ki:<br /><br /><b>[url=http://www.phpbb.com/]</b>A phpBB weboldala!<b>[/url]</b><br /><br />Ez a következõ linket eredményezi: <a href="http://www.phpbb.com/" target="_blank">A phpBB weboldala!</a> A weboldal egy új ablakban fog megnyílni, így a témát nyugodtan lehet olvasni közben.<br /><br /></li><li>Ha csak magát az URL-t akarod megjeleníteni, akkor a következõt használd:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Ez a következõt eredményezi: <a href="http://www.phpbb.com/" target="_blank">http://www.phpbb.com/</a><br /><br /></li><li>Ezenkívül a phpBB egy <i>Link Varázsló</i> lehetõséggel is rendelkezik: ha szintaktikailag megfelelõ a szöveg, akkor azt automatikusan linkké alakítja át; ha a cím "www"-vel, vagy "http://"-rel kezdõdik. Például a www.phpbb.com-ból automatikusan <a href="http://www.phpbb.com/" target="_blank">www.phpbb.com</a> lesz.<br /><br /></li><li>Ehhez hasonlóan mûködik az emailcímek kezelése is, például a <br /><br /><b>[email]</b>nem.letezo@email.cim<b>[/email]</b><br /><br />eredménye a <a href="emailto:nem.letezo@email.cim">nem.letezo@email.cim</a>. Vagy egyszerûen csak írd be az email-címet, és az automatikusan átkonvertálódik email hivatkozássá.</li></ul>Hasonlóan a többi BBCode taghez, a webcímeket is körbe lehet venni más formázó taggel: <b>[img][/img]</b> (lásd a következõ példát), <b>[b][/b]</b>, stb. Mint a formázó tageknél, itt is ügyelni kell a megfelelõ sorrendre, és a tagek lezárására:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http:e//www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />Ez <u>hibás</u> hivatkozás, amiért akár törölhetik is a hozzászólást.<br />');


$faq[] = array('--','Képek megtekintése');
$faq[] = array('Képek beszúrása a hozzászólásba','A phpBB BBCode-ja lehetõséget nyújt, hogy képeket illeszünk be egy hozzászólásba. Három dolgot ne felejtsünk ezzel kapcsolatban: számos felhasználó nem szereti, ha sok kép van a fórumban (a sok kép megnöveli az oldal letöltésének idejét), a képek ne legyenek túl nagy felbontásúak (egy nagy kép széttöri az oldalt), és hogy a képnek elérhetõnek kell lennie az interneten (nem elég ha a helyi számítógépen van; kivétel ha webszerver fut a gépen!). Jelenleg nincs lehetõség arra, hogy a képeket itt a Fórumon tárold. Egy kép megjelenítéséhez a következõ taget kell használni: <b>[img][/img]</b>. Például:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Mint a hivatkozásoknál, úgy a képeknél is van lehetõség a tagek egymásba ágyazására, pld. a képet egy  <b>[url][/url]</b> tag köré is írhatod, stb.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />eredménye:<br /><br /><a href="http://www.phpbb.com/" target="_blank"><img src="templates/subSilver/images/logo_phpBB_med.gif" border="0" alt="" /></a><br />');


$faq[] = array('--','Egyéb dolgok');
$faq[] = array('Használhatok saját tageket?','A jelenlegi 2.0-ás fórum nem teszi lehetõvé saját tagek használatát.');

// This ends the BBCode guide entries

?>