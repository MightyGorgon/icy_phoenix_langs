<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_bbcode.php 28 2009-04-03 12:40:34Z TheSteffen $
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
* TheSteffen, KugeLSichA, Tom, Carsten
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


$faq[] = array("--","Kaj je BBKoda?");
$faq[] = array("BBKoda je posebna izvedba HTML-ja, ki jo za uporabo omogoca (ali ne) moderator. BBKodo lahko tudi onespodobite na obrazcu za vnos sporocila, s tem da pred objavo odkljuka� ustrezno polje. Sama BBKoda je kot sistem podobna HTML-ju, html tag-i so prilo�eni v oglatih oklepajih [ and ] in ne v &lt; and &gt; in omogocajo vecji nadzor nad tem, kako je dolocena stvar prikazana. Glede na �ablono, ki jo uporabljate, lahko ugotovite, da je dodajanje BBKode va�im prispevkom la�je s klikom na vmesni gumb nad obmocjem sporocila, in sicer na formi po�iljanja. Kljub temu vama bodo sledeca navodila lahko pri�la prav.");


$faq[] = array("--","Oblikovanje teksta");
$faq[] = array("Kako oblikovati odebeljen, po�even in podcrtan teks?", "BBKoda vsebuje tag-e, ki vam omogocajo, da hitro zamenjate osnovni stil va�ega besedila. To lahko dose�ete na naslednje nacine: <ul><li>Ce �elite del besedila odebeliti, ga oznacite z <strong>[b][/b]</strong>, npr. <br /><br /><strong>[b]</strong>�ivjo<strong>[/b]</strong><br /><br />bo postal <strong>�ivjo</strong></li><li>Za podcrtavanje uporabite <strong>[u][/u]</strong>, na primer:br /><br /><strong>[u]</strong>Dobro jutro<strong>[/u]</strong><br /><br />postane br /><br /><strong>[u]</strong>Dobro jutro<strong>[/u]</strong><br /><br />Za po�evno besedilo uporabite <strong>[i][/i]</strong>, npr.<br /><br />To je <strong>[i]</strong>super!<strong>[/i]</strong><br /><br />postane To je <i>super!</i></li></ul>");
$faq[] = array("Kako tekstu spremeniti barvo in velikost?", "");
$faq[] = array("Za spreminjanje velikosti in barve besedila lahko uporabite naslenje tag-e. Ne pozabite, da je izgled pravzaprav odvisen od brskalnika in sistema obiskovalca: <ul><li>Spremembo barve besedila dose�ete tako, da besedilo oznacite z <strong>[color=][/color]</strong>. Dolocite lahko prepoznano ime barve (npr. rdeca, modra, rumena itd.) ali pa alternativo heksadecimalnega trojcka, npr. #FFFFFF, #000000. Ce �elite na primer besedilo obarvati rdece, lahko uporabite:<br /><br /><strong>[color=red]</strong>�ivjo!<strong>[/color]</strong><br /><br />ali<br /><br /><strong>[color=#FF0000]</strong>�ivjo!<strong>[/color]</strong><br /><br />bosta oba postala �ivjo!</span></li><li>Spreminjanje velikosti besedila je dose�eno na podoben nacin, z uporabo <strong>[size=][/size]</strong>. Ta tag je sicer odvisen od �ablone, ki jo izbere uporabnik, vendar je priporocen format �tevilcna vrednost, ki predstavlja velikost besedila v procentih, zacen�i z 20 in do 200 (zelo veliko). Na primer:<br /><br /><strong>[size=30]</strong>MAJHNO<strong>[/size]</strong><br /><br />bo naceloma MAJHNO</span><br /><br />medtem ko bo:<br /><br /><strong>[size=200]</strong>OGROMNO!<strong>[/size]</strong><br /><br /> OGROMNO!</span></li></ul>");


$faq[] = array("--","Ustvarjanje seznamov");
$faq[] = array("BBKoda podpira dva tipa seznamov, neurejenega in urejenega. Le-ti so pravzaprav enaki kot njihove HTML ekvivalente. Na neurejeni seznam je vsak del razvr�cen po vrsti, vsak v svojo vrstico in oznacen s krogcem. Ce �elite ustvariti neurejen seznam, uporabite <strong>[list][/list]</strong> in znotraj seznama oznacite vsak del z uporabo <strong>[*]</strong>. Npr. za razvrstitev va�ih najljub�ih barv lahko uporabite:br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rdeca<br /><strong>[*]</strong>Modra<br /><strong>[*]</strong>Rumena<br /><strong>[/list]</strong><br /><br />To bi ustvarilo sledeci seznam:<ul><li>Rdeca</li><li>Modra</li><li>Rumena</li></ul>");


$faq[] = array("--","Ustvarjanje urejenega seznama");
$faq[] = array("Drugi tip seznama, urejeni seznam, vam omogoca nadzor nad tem, kar je pred vsakim delom seznama. Ce �elite ustvariti urejen seznam, uporabite <strong>[list=1][/list]</strong> za tvorbo o�tevilcenega seznama ali alternativno <strong>[list=a][/list]</strong> za tvorbi abecednega seznama. Kakor pri neurejenem seznamu so posamezni deli oznaceni z <strong>[*]</strong>. Na primer:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Pojdi v trgovino<br /><strong>[*]</strong>Kupi nov racunalnik<br /><strong>[*]</strong>Zmerjaj racunalnik, kadar se sesuje<br /><strong>[/list]</strong><br /><br />bo izgledalo takole:<li>Pojdi v trgovino</li><li>Kupi nov racunalnik</li><li>Zmerjaj racunalnik, kadar se sesuje</li></ol>Za abecedni seznam pa bi uporabili:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Prvi mo�ni odgovor<br /><strong>[*]</strong>Drugi mo�ni odgovor<br /><strong>[*]</strong>Tretji mo�ni odgovor<br /><strong>[/list]</strong><br /><br />in bi nastalo<li>Prvi mo�ni odgovor</li><li>Drugi mo�ni odgovor</li><li>Tretji mo�ni odgovor</li></ol>");


$faq[] = array("--", "Ustvarjanje povezav");
$faq[] = array("Povezovanje z naslednjo stranjo',
phpBB BBKoda podpira vrsto nacinov za ustvarjanje URL-jev oz. Uniform Resource Indicators (torej identifikatorjev va�ih lokacij v internetu, kar ni nic drugega kot celoten interneten naslov).<ul><li>Prvi od teh nacinov uporablja <strong>[url=][/url]</strong> tag; karkoli boste namrec napisali za znakom =, se bo zacelo obna�ati kot URL. Na primer, za povezavo phpBB.com lahko uporabite:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Obi�cite phpBB!<strong>[/url]</strong><br /><br />, kar bi ustvarilo sledeco povezavo Obi�cite phpBB!</a> Vedite, da je to, ali se povezava odpre v istem ali naslednjem oknu, odvisno od mo�nosti in nastavitev brskalnika uporabnika.</li><li>Ce �elite, da je URL prikazan kot povezava, lahko to preprosto storite z uporabo:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />To bo ustvarilo sledeco povezavo, </a></li><li>Dodatno phpBB vsebuje tudi nekaj, kar se imenuje <i>Magic Links</i>; ta mo�nost bo vsak slovnicno pravilen URL spremenila v povezavo, ne da bi vam bilo treba dolociti kakr�en koli tag ali dodati http://. Ce na primer v va�e sporocilo napi�ete www.phpbb.com, se bo to avtomatsko spremenilo v </a> in bo vidno, ko boste sporocilo pogledali.</li><li>Enako se nana�a tudi na e-mail naslove. Naslov lahko izrecno oznacite, na primer:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />, kar bo vidno kot no.one@domain.adr</a>, ali pa samo v sporocilo napi�ete no.one@domain.adr in se bo avtomatsko preobrazil, ko boste sporocilo pogledali.</li></ul>URL-je lahko oznacite in uporabite katerekoli tag-e, kot npr. <strong>[img][/img]</strong> (poglejte naslednji vnos), <strong>[b][/b]</strong>, itd. Kakor z oblikovnimi tagi je tudi to va�a odgovornost, da zagotovite pravilen red odpiranja in zapiranja, na primer:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br /> pravilno, kar lahko vodi v brisanje va�ega prispevka, zato bodite pozorni.");


$faq[] = array("--", "Dodajanje podobe v prispevek");
$faq[] = array("Dodajanje podobe v prispevek", "phpBB BBKoda vsebuje tag za vkljucevanje podob v va�e prispevke. Pri tem sta dve zelo pomembni stvari, ki jih morate vedeti pri uporabi tega tag-a: veliko uporabnikov ne odobrava prekomerne uporabe podob v prispevkih in pa podoba, ki jo uporabite, mora biti dostopna na internetu (ne more npr. obstajati samo na va�em racunalniku, razen ce vodite internetni stre�nik!). Za prikaz podobe morate obkro�iti URL, ki se povezuje s podobo, z <strong>[img][/img]</strong> tag-i. Na primer:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Kakor �e omenjeno v zgornji sekciji o URL-ju, lahko podobo oznacite z <strong>[url][/url]</strong> tag-om, ce tako �elite, npr.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />se poka�e kot:<br /><br />");


$faq[] = array("--", "Druge kode");
$faq[] = array("Ali lahko dodajam svoje tag-e?", "Ce ste moderator na tej moderatorski plo�ci in imate primerna dovoljenja, lahko dodate nadaljnje BBKode skozi sekcijo Obicajne BBKode.");

// This ends the BBCode guide entries

?>