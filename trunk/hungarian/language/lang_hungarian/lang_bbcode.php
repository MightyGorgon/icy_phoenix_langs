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


$faq[] = array("--","Bevezető");
$faq[] = array("Mi az a BBCode?", "A BBCode a HTML nyelv egy speciális változata. A BBCode használatának engedélyezése az adminisztrátortól függ, de neked is lehetőséged van ki- vagy bekapcsolni a hozzászólásaidnál. A BBCode hasonló felépítésű, mint a HTML, kivéve hogy a címkék nem kacsacsőrök között („<” , ill. „>”), hanem szögletes zárójelben („[”, ill. „]”) vannak; és nagyobb teret enged a szöveg megformázásához. Hozzászólás küldésekor az üzenet mező fölött található BBCode panel nagyban megkönnyítheti a BBCode-ok használatát. Ezzel együtt az alábbi útmutatót valószínűleg hasznosnak fogod találni.");


$faq[] = array("--","Szövegfotmázás");
$faq[] = array("Félkövér, dőlt, illetve aláhúzott szöveg készítése", "A BBCode címkék segítségével könnyedén megváltoztathatod egy szöveg kinézetét. Ezt a következőképpen érheted el: <ul><li>Egy szövegrészlet félkövérré tételéhez zárd körül <strong>[b][/b]</strong> címkékkel. Például:<br /><br /><strong>[b]</strong>Helló!<strong>[/b]</strong> <br /><br />eredménye: <strong>Helló!</strong></li><li>Aláhúzáshoz használd az <strong>[u][/u]</strong> címkét. Például:<br /><br /><strong>[u]</strong>Jó reggelt!<strong>[/u]</strong><br /><br />így fog megjelenni: <span style=\"text-decoration: underline\">Jó reggelt!</span></li><li>Egy szöveg dőlt betűssé tételéhez használd az <strong>[i][/i]</strong> címkét. Például:<br /><br /><strong>[i]</strong>Ez nagyszerű!<strong>[/i]</strong><br /><br />ezt eredményezi: <i>Ez nagyszerű!</i></li></ul>");
$faq[] = array("Szöveg színének vagy méretének megváltoztatása", "Egy szövegrészlet színének vagy méretének megváltoztatásához a következő címkék használhatók. Vedd figyelembe, hogy a szöveg pontos megjelenése a látogató böngészőjétől és rendszerétől is függeni fog (például túl kis betűmérettel írt szöveg nem látszódhat).<ul><li>Egy szövegrészlet színét a <strong>[color=][/color]</strong> címkék használatával változtathatod meg. A színt megadhatod az angol nevével (pl. „red”, „blue”, „yellow”) vagy a hexadecimális kódjával, például: #FFFFFF, #000000. Piros szöveget például így tud készíteni: <br /><br /><strong>[color=red]</strong>Helló!<strong>[/color]</strong><br /><br />és<br /><br /><strong>[color=#FF0000]</strong>Helló!<strong>[/color]</strong><br /><br />eredménye is ez lesz: <span style=\"color:red\">Helló!</span></li><li>A betűméretet is hasonlóan lehet megváltoztatni: a <strong>[size=][/size]</strong> címke segítségével. A szöveg méretét százalékban kell megadni: ez egy 20 és 200 közötti szám lehet, de az aktuális méret a megjelenéstől függ. Például <br /><br /><strong>[size=30]</strong>KICSI<strong>[/size]</strong><br /><br />általánosan <span style=\"font-size:30%;\">KICSI</span> lesz,<br /><br />ehhez hasonlóan:<br /><br /><strong>[size=200]</strong>ÓRIÁSI!<strong>[/size]</strong><br /><br /><span style=\"font-size:200%;\">ÓRIÁSI!</span> lesz.</li></li></ul>");
$faq[] = array("Használhatok egyszerre többféle formázást?", "Igen, természetesen kombinálhatod a címkéket. Például, ha fel akarod hívni valakinek a figyelmét:<br /><br /><strong>[size=18][color=red][b]</strong>OLVASS EL!<strong>[/b][/color][/size]</strong><br /><br />ezt eredményezi: <span style=\"color:red;font-size:18px;\"><strong>OLVASS EL!</strong></span><br /><br />Ennek ellenére nem ajánlott, hogy egyszerre sok formázási eszközt használj, mivel ennek következtében a szöveg nehezen lesz olvasható. Kérünk, ügyelj a címkék lezárásának sorrendjére. A következő példa hibás:<br /><br /><strong>[b][u]</strong>Ez így hibás!<strong>[/b][/u]</strong>");


$faq[] = array("--","Idézés és kódok");
$faq[] = array("Idézés", "Két módon lehet idézni: megadva az idézet forrását, vagy nem.<ul><li>Ha egy hozzászólás mellett lévő „Idézés” gombra kattintva válaszolsz, akkor a hozzászólás szövege automatikusan hozzáadódik az üzenethez <strong>[quote=\"\"][/quote]</strong> címkékbe zárva. Ezen módot használva megjelölheted az idézés forrását: egy felhasználót, egy webcímet vagy bármi mást. Ha például Pacák úrtól szeretnél idézni, a következőt írd:<br /><br /><strong>[quote=\"Pacák úr\"]</strong>Ide jön a Pacák úr által írt szöveg.<strong>[/quote]</strong><br /><br />A beírt szöveg elé automatikusan odakerül, hogy „Pacák úr írta”. Ne felejtsd el, hogy <strong>kötelező</strong> idézőjelbe tenni a forrás megnevezését, ez nem tetszőleges.</li><li>A másik móddal csak simán idézni lehet egy szöveget, a forrás megadása nélkül. Ehhez foglald be a szöveget <strong>[quote][/quote]</strong> címkékbe. Az üzenet megtekintésénél láthatjuk, hogy csak egy sima „Idézet” felirat került a szöveg elé.</li></ul>");
$faq[] = array("Kódok és fix szélességet igénylő szövegek", "Ha egy kódrészletet vagy bármilyen fix szélességet igénylő szöveget szeretnél beilleszteni (például Courier betűtípussal), zárd körül a szöveget <strong>[code][/code]</strong> címkékkel. Például:<br /><br /><strong>[code]</strong>echo &quot;Ez valami kód.&quot;;<strong>[/code]</strong><br /><br /><strong>[code][/code]</strong> címkén belül nem használható más formázás, mivel ezeken belül szereplő más címkék nem kerülnek értelmezésre. Ha PHP kódot illesztesz be, használd a <strong>[code=php][/code]</strong> címkét a szintaxiskiemeléshez, hogy a kód könnyebben olvasható legyen.");


$faq[] = array("--","Listák készítése");
$faq[] = array("Rendezetlen lista készítése", "A BBCode két fajta listatípust támogat: rendezetlent és rendezettet. Lényegében ugyanazok, mint a HTML megfelelőjük. A rendezetlen listában az elemek sorrendben követik egymást, és mindegyik előtt egy pötty jelenik meg. Rendezetlen lista készítéséhez a <strong>[list][/list]</strong> címke használható, és minden elemet egy <strong>[*]</strong> címkével kell definiálni. Például így tudod felsorolni a kedvenc színeidet:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>piros<br /><strong>[*]</strong>kék<br /><strong>[*]</strong>sárga<br /><strong>[/list]</strong><br /><br />mely a következőképpen néz ki:<ul><li>piros</li><li>kék</li><li>sárga</li></ul>");
$faq[] = array("A második típusú listánál, a rendezett listánál már azt is meghatározhatod, hogy mi kerüljön minden elem elé. Rendezett lista készítéséhez a <strong>[list=1][/list]</strong> címke használható – ez számozott lesz, de más paraméter megadásával betűkkel jelölt listát is készíthetsz (<strong>[list=a][/list]</strong>). A rendezetlen listához hasonlóan, az egyes elemeket itt is a <strong>[*]</strong> címke használatával kell definiálni. Például:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>elmenni a boltba<br /><strong>[*]</strong>új számítógépet vásárolni<br /><strong>[*]</strong>rácsapni a gépre, ha lefagy<br /><strong>[/list]</strong><br /><br />eredménye a következő:<ol style=\"list-style-type: decimal;\"><li>elmenni a boltba</li><li>új számítógépet vásárolni</li><li>rácsapni a gépre, ha lefagy</li></ol>Így néz ki egy betűkkel jelölt lista:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>az első lehetséges válasz<br /><strong>[*]</strong>a második lehetséges válasz<br /><strong>[*]</strong>a harmadik lehetséges válasz<br /><strong>[/list]</strong><br /><br />megjelenítve:<ol style=\"list-style-type: lower-alpha\"><li>az első lehetséges válasz</li><li>a második lehetséges válasz</li><li>a harmadik lehetséges válasz</li></ol>");


$faq[] = array("--", "Hivatkozások készítése");
$faq[] = array("Hivatkozás más oldalakra", "Az Icy Phoenix BBCode-ja több módot is biztosít hivatkozások készítésére. A hivatkozások egy URL-re („Universe Resource Locator” azaz webcímre) mutatnak.<ul><li>Az első mód az <strong>[url=][/url]</strong> címkék használata. Az URL-t az első címkében, az egyenlőségjel és a záró szögletes zárójel között kell megadni. Például a phpBB.com-ra így tudsz linkelni:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Látogasd meg a phpBB weboldalát!<strong>[/url]</strong><br /><br />a következő linket eredményezi: <a href=\"http://www.icyphoenix.com/\">Látogasd meg az Icy Phoenix weboldalát!</a> A link a böngésző felhasználói beállításaitól függően nyílik meg ugyanabban vagy egy új ablakban.</li><li>Ha magát az URL-t szeretnéd, hogy megjelenjen linkként, használd a következő, nagyon egyszerű formát:<br /><br /><strong>[url]</strong>http://www.icyphoenix.com/<strong>[/url]</strong><br /><br />Ez a következő linket eredményezi: <a href=\"http://www.icyphoenix.com/\">http://www.icyphoenix.com/</a></li><li>Mindemellett az Icy Phoenix rendelkezik egy olyan funkcióval is, mely automatikusan átalakítja a szintatikailag helyes URL-eket hivatkozásokká, anélkül hogy bármilyen BBCode-ot használnál, vagy egyáltalán odaírnád az URL elejére a kezdő http:// részt. Ha például az üzeneted tartalmazza, hogy www.icyphoenix, az <a href=\"http://www.icyphoenix.com/\">www.icyphoenix.com</a>-ként fog megjelenni.</li><li>Ehhez hasonlóan történik az e-mail címek kezelése is; konkrétan megadhatsz egy címet, például:<br /><br /><strong>[email]</strong>nem.letezo@email.cim<strong>[/email]</strong><br /><br />mely <a href=\"mailto:nem.letezo@email.cim\">nem.letezo@email.cim</a>-ként fog megjelenni, vagy csak egyszerűen beírhatod az üzenetedbe a nem.letezo@email.cim e-mail címet, és az automatikusan átkonvertálásra kerül.</li></ul>Hasonlóan a többi BBCode címkéhez, linkekkel is körülvehetsz más címkéket, például <strong>[img][/img]</strong> címkét (lásd a következő pontot), <strong>[b][/b]</strong>-t stb. Mint a formázó címkéknél, itt is ügyelni kell a címkék lezárásának helyes sorrendjére, például:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />ez <span style=\"text-decoration: underline\">hibás</span>, amiért akár törölhetik a hozzászólásod.");


$faq[] = array("--", "Képek a hozzászólásokban");
$faq[] = array("Kép beszúrása a hozzászólásba", "A phpBB BBCode-ja lehetőséget nyújt képek beszúrására hozzászólásokba. Ezzel kapcsolatban két fontos dolgot nem szabad elfelejteni: számos felhasználó nem szereti, ha egy hozzászólás túl sok képet tartalmaz, illetve ügyelni kell arra, hogy a beszúrandó kép elérhető legyen az interneten (nem elég ha a te számítógépeden van, hacsak nem fut egy webszerver a gépen!). Képet úgy lehet beszúrni, hogy a rá mutató URL-t <strong>[img][/img]</strong> címkékkel veszed körül. Például:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Mint ahogy az a hivatkozások készítése részben szerepel, egy képet belefoglalhatsz egy <strong>[url][/url]</strong> címkébe is, például:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />ezt eredményezi:<br /><br /><a href=\"http://www.google.com/\" target=\"_blank\"><img src=\"http://www.google.com/intl/en_ALL/images/logo.gif\" alt=\"\" /></a>");


$faq[] = array("--", "Egyéb kérdések");
$faq[] = array("Készíthetek saját címkéket?", "Ha adminisztrátor vagy a fórumon, és megvan a megfelelő jogosultságod, az adminisztrátori vezérlőpult „Egyéni BBCode”-ok részén tudsz felvenni saját BBCode-okat.");

// This ends the BBCode guide entries

?>