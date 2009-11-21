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


$faq[] = array('--','Bevezet�');
$faq[] = array('Mi az a BBCode?','A BBCode egy speci�lis v�ltozata a HTML nyelvnek. A BBCode haszn�lat�nak enged�lyez�se a F�rum adminisztr�tor�t�l f�gg, de neked is lehet�s�ged van arra, hogy a hozz�sz�l�saidban ki-, vagy bekapcsold a BBCode-ot. A BBCode hasonl� fel�p�t�s�, mint a HTML, kiv�ve hogy a tagek nem kacsacs�r�k k�z�tt (&lt; �s &gt;), hanem sz�gletes z�r�jelben "[" "]" vannak;  amellett  lehet�s�get ny�jt hogy hogyan �s mik�nt lehet a sz�vegeket szebben, jobban, tagoltabban megjelen�teni. A haszn�latban l�v� sablont�l f�gg, hogy pontosan hol tal�lhat� meg a BBCode panel, melyr�l k�nnyed�n �s gyorsan be lehet illeszteni a tageket a sz�vegbe. Fontos, hogy mindig �gyelj�nk a tagek lez�r�s�ra. Az al�bbiakban egy r�vid bemutat� tal�lhat� a BBCode lehet�s�geir�l.<br />');


$faq[] = array('--','Sz�vegform�z�s');
$faq[] = array('Hogyan k�sz�ts�nk f�lk�v�r, d�lt �s al�h�zott sz�veget?','A BBCode tagek lehet�s�get adnak arra, hogy pillanatok alatt megv�ltoztathassuk a sz�veg alapkin�zet�t. Ezt a k�vetkez� m�don �rhetj�k el: <ul><li>F�lk�v�rhez <b>[b][/b]</b> k�z� z�rjuk a sz�veget, p�ld�ul: <b>[b]</b>Hell�<b>[/b]</b><br /><br /> <b>Hell�</b> lesz bel�le<br /><br /></li><li>Al�h�z�shoz haszn�ljuk az <b>[u][/u]</b> taget, p�ld�ul: <b>[u]</b>J� reggelt!<b>[/u]</b><br /><br /><u>J� reggelt!</u> lesz bel�le<br /><br /></li><li>D�lt sz�veghez haszn�ljunk <b>[i][/i]</b> taget, p�ld�ul: Ez <b>[i]</b>nagyszer�!<b>[/i]</b><br /><br />Ez <i>nagyszer�!</i></li></ul>');
$faq[] = array('Hogyan v�ltoztassuk meg a sz�veg sz�n�t �s m�ret�t?','A sz�n �s m�ret megv�ltoztat�s�hoz az al�bbi tageket haszn�lhatjuk. Haszn�lat el�tt vegy�k figyelembe, hogy a megv�ltoztatott sz�n� �s m�ret� sz�veg m�sk�nt jelenhet meg a k�l�nf�le b�ng�sz�k�n �s rendszereken, ez�rt ne vigy�k t�lz�sba (pld. vil�gos h�tt�ren vil�gos bet�sz�n �s/vagy t�l apr� bet�m�ret haszn�lata).<ul><li>A sz�n megv�ltoztat�s�hoz: <b>[color=][/color]</b> tag sz�ks�ges. A sz�n megadhat� a nev�vel (piros, k�k, feh�r, z�ld, stb.;  term�szetesen ezeket angolul, azaz "red", "blue", "white", "green"), vagy hexadecim�lis �rt�kkel (#000000, #FFFFFF, stb.). P�ld�ul egy piros sz�veg k�sz�t�se:<br /><br /><b>[color=red]</b>Hell�!<b>[/color]</b><br /><br />vagy<br /><br /><b>[color=#FF0000]</b>Hell�!<b>[/color]</b><br /><br />ugyanazt eredm�nyezi: <span style="color:red">Hell�!</span><br /><br /></li><li>A sz�veg �tm�retez�se is hasonl� a sz�nez�shez: <b>[size=][/size]</b>. Ennek a tagnek a haszn�lata f�gg a haszn�lt sablont�l, de az aj�nlott haszn�lati forma az, hogy sz�mmal (pixelben) adjuk meg a k�v�nt m�retet; kezdve az 1-t�l (olyan apr�, hogy nem is l�that�) a 29-ig (�ri�si). P�ld�ul:<br /><br />A <b>[size=9]</b>KICSI<b>[/size]</b>-b�l:<br /><br /><span style="font-size:9px">KICSI</span> lesz<br /><br />Ehhez hasonl�an:<br /><br />az <b>[size=24]</b>�RI�SI!<b>[/size]</b>-b�l:<br /><br /><span style="font-size:24px">�RI�SI!</span></li></ul>');
$faq[] = array('Haszn�lhatok egyszerre t�bbf�le form�z�st?','Igen, term�szetesen ezeket lehet kombin�lni; p�ld�ul ha fel akarod h�vni valakinek a figyelm�t a sz�vegre:<br /><br />Az <b>[size=18][color=red][b]</b>OLVASD EL!<b>[/b][/color][/size]</b><br /><br /> kombin�ci� ezt eredm�nyezi: <span style="color:red;font-size:18px"><b>OLVASD EL!</b></span><br /><br />Nem aj�nlatos egyszerre sok ilyet haszn�lni, mert a sz�veg nehezen lesz olvashat�. Eml�keztet��l, mindig figyelj a tagek sorrendj�re. A k�vetkez� p�lda hib�s:<br /><br /><b>[b][u]</b>Ez �gy hib�s<b>[/b][/u]</b><br />');


$faq[] = array('--','Id�zetek');
$faq[] = array('Id�z�s','K�t m�don lehet lehet id�zni: vagy megadva az illet�t, akit�l id�z�nk, vagy an�lk�l.<ul><li>Ha valakinek v�laszolni akarunk, akkor a <b>[quote=""][/quote]</b> taget haszn�ljuk, ahol az id�z�jel k�z� �rjuk az id�zett szem�ly nev�t (vagy b�rmi m�st). Ugyanez t�rt�nik, ha valakinek a hozz�sz�l�s�ban az "Id�z�s"-re kattintunk: ekkor egy �j hozz�sz�l�s k�sz�l, melyben a <b>[quote=""][/quote]</b> tagek k�z� ker�l az illet� hozz�sz�l�sa.<br />Ha p�ld�ul Pac�k �rt�l akarunk id�zni, akkor a k�vetkez�t �rjuk:<br /><br /><b>[quote="Pac�k �r"]</b>Ide a Pac�k �r �ltal �rt sz�veg ker�l<b>[/quote]</b><br /><br />A be�rt sz�veg el� automatikusan odaker�l hogy: Pac�k �r �rta. Fontos, az egyenl�s�gjel ut�n <b>k�telez�</b> id�z�jelbe tenni az id�z� nev�t, ezt nem lehet lehagyni.<br /><br /></li><li>A m�sodik m�dszerrel egyszer�en id�zhet�nk b�rkit�l. Ehhez a a sz�veget egy <b>[quote][/quote]</b> tagbe z�rjuk. Az elk�ld�s ut�n l�tjuk, hogy az id�zet el� csak egy "Id�zet" sz�veg ker�lt.</li></ul>');
$faq[] = array('K�dok megjelen�t�se','Ha valamilyen programk�dot, vagy fix sz�less�get ig�nyl� sz�veget szeretn�l be�rni (pld. Courier bet�t�pussal), akkor a <b>[code][/code]</b> tag k�z� kell tenni. P�ld�ul:<br /><br /><b>[code]</b>echo "Ez valami k�d";<b>[/code]</b><br /><br />A <b>[code][/code]</b> tagen bel�l ne haszn�lj m�s form�z�st, mivel azok �rv�ny�ket vesztik.<br />');


$faq[] = array('--','List�k k�sz�t�se');
$faq[] = array('Rendezetlen lista k�sz�t�se','A BBCode k�tfajta listak�sz�t�st t�mogat, a rendezetlen �s rendezett list�t. A rendezetlen list�ban minden elem elk�l�n�l egym�st�l , �s mindegyik el� egy pont ker�l. A lista k�sz�t�s�hez a <b>[list][/list]</b> taget haszn�ljuk, �s minden elemet egy <b>[*]</b> taggel defini�lunk (a t�bbi taggel ellent�tben ezt nem kell lez�rni). P�ld�ul:<br /><br /><b>[list]</b><br /><b>[*]</b>Piros<br /><b>[*]</b>K�k<br /><b>[*]</b>S�rga<br /><b>[/list]</b><br /><br />Ez a k�vetkez�t eredm�nyezi:<ul><li>Piros</li><li>K�k</li><li>S�rga</li></ul>');
$faq[] = array('Rendezett lista k�sz�t�se','A m�sik t�pus a rendezett lista. A rendezett list�val sorsz�mozhatjuk, sorrendet �ll�thatunk fel az elemek k�z�tt. Ezt a <b>[list=1][/list]</b> taggel tehetj�k meg. K�sz�thet�nk bet� �ltali sorol�st is, a <b>[list=a][/list]</b> taggel. Az egyes elemeket itt is a [*] taggel hat�rozzuk meg. P�lda:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Elmenni a boltba<br /><b>[*]</b>�j sz�m�t�g�p v�s�rl�sa<br /><b>[*]</b>R�csapni a g�pre, ha lefagy<br /><b>[/list]</b><br /><br />eredm�nye a k�vetkez�:<ol type="1"><li>Elmenni a boltba</li><li>�j sz�m�t�g�p v�s�rl�sa</li><li>R�csapni a g�pre, ha lefagy</li></ol>Alfabetikus list�n�l a k�vetkez�k�pp haszn�ljuk:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Els� lehets�ges v�lasz<br /><b>[*]</b>M�sodik lehets�ges v�lasz<br /><b>[*]</b>Harmadik lehets�ges v�lasz<br /><b>[/list]</b><br /><br />eredm�nye:<ol type="a"><li>Els� lehets�ges v�lasz</li><li>M�sodik lehets�ges v�lasz</li><li>Harmadik lehets�ges v�lasz</li></ol>');


$faq[] = array('--','Hivatkoz�sok k�sz�t�se');
$faq[] = array('Hivatkoz�s egy m�sik weboldalra','A phpBB BBCode-ja t�bb lehet�s�get biztos�t a hivatkoz�sok k�sz�t�s�re. A hivatkoz�snak egy URL-re (Universe Resource Locator; ez jelenti mag�t a webc�met) kell mutatnia.<ul><li>Az egyik, az <b>[url=][/url]</b> tag haszn�lata. Az egyenl�s�gjel ut�n �rt sz�vegnek az URL-nek kell lennie. P�ld�ul, egy link a phpBB oldal�ra a k�vetkez�k�ppen n�z ki:<br /><br /><b>[url=http://www.phpbb.com/]</b>A phpBB weboldala!<b>[/url]</b><br /><br />Ez a k�vetkez� linket eredm�nyezi: <a href="http://www.phpbb.com/" target="_blank">A phpBB weboldala!</a> A weboldal egy �j ablakban fog megny�lni, �gy a t�m�t nyugodtan lehet olvasni k�zben.<br /><br /></li><li>Ha csak mag�t az URL-t akarod megjelen�teni, akkor a k�vetkez�t haszn�ld:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Ez a k�vetkez�t eredm�nyezi: <a href="http://www.phpbb.com/" target="_blank">http://www.phpbb.com/</a><br /><br /></li><li>Ezenk�v�l a phpBB egy <i>Link Var�zsl�</i> lehet�s�ggel is rendelkezik: ha szintaktikailag megfelel� a sz�veg, akkor azt automatikusan linkk� alak�tja �t; ha a c�m "www"-vel, vagy "http://"-rel kezd�dik. P�ld�ul a www.phpbb.com-b�l automatikusan <a href="http://www.phpbb.com/" target="_blank">www.phpbb.com</a> lesz.<br /><br /></li><li>Ehhez hasonl�an m�k�dik az emailc�mek kezel�se is, p�ld�ul a <br /><br /><b>[email]</b>nem.letezo@email.cim<b>[/email]</b><br /><br />eredm�nye a <a href="emailto:nem.letezo@email.cim">nem.letezo@email.cim</a>. Vagy egyszer�en csak �rd be az email-c�met, �s az automatikusan �tkonvert�l�dik email hivatkoz�ss�.</li></ul>Hasonl�an a t�bbi BBCode taghez, a webc�meket is k�rbe lehet venni m�s form�z� taggel: <b>[img][/img]</b> (l�sd a k�vetkez� p�ld�t), <b>[b][/b]</b>, stb. Mint a form�z� tagekn�l, itt is �gyelni kell a megfelel� sorrendre, �s a tagek lez�r�s�ra:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http:e//www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />Ez <u>hib�s</u> hivatkoz�s, ami�rt ak�r t�r�lhetik is a hozz�sz�l�st.<br />');


$faq[] = array('--','K�pek megtekint�se');
$faq[] = array('K�pek besz�r�sa a hozz�sz�l�sba','A phpBB BBCode-ja lehet�s�get ny�jt, hogy k�peket illesz�nk be egy hozz�sz�l�sba. H�rom dolgot ne felejts�nk ezzel kapcsolatban: sz�mos felhaszn�l� nem szereti, ha sok k�p van a f�rumban (a sok k�p megn�veli az oldal let�lt�s�nek idej�t), a k�pek ne legyenek t�l nagy felbont�s�ak (egy nagy k�p sz�tt�ri az oldalt), �s hogy a k�pnek el�rhet�nek kell lennie az interneten (nem el�g ha a helyi sz�m�t�g�pen van; kiv�tel ha webszerver fut a g�pen!). Jelenleg nincs lehet�s�g arra, hogy a k�peket itt a F�rumon t�rold. Egy k�p megjelen�t�s�hez a k�vetkez� taget kell haszn�lni: <b>[img][/img]</b>. P�ld�ul:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Mint a hivatkoz�sokn�l, �gy a k�pekn�l is van lehet�s�g a tagek egym�sba �gyaz�s�ra, pld. a k�pet egy  <b>[url][/url]</b> tag k�r� is �rhatod, stb.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />eredm�nye:<br /><br /><a href="http://www.phpbb.com/" target="_blank"><img src="templates/subSilver/images/logo_phpBB_med.gif" border="0" alt="" /></a><br />');


$faq[] = array('--','Egy�b dolgok');
$faq[] = array('Haszn�lhatok saj�t tageket?','A jelenlegi 2.0-�s f�rum nem teszi lehet�v� saj�t tagek haszn�lat�t.');

// This ends the BBCode guide entries

?>