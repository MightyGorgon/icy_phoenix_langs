<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_faq.php 28 2009-04-03 12:40:34Z TheSteffen $
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
* TheSteffen, KugeLSichA, Tom
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

//
// Um einen neuen Eintrag zu deinen FAQs hinzuzufügen, trage hier einfach einen neue Zeile in folgendem Format ein:
// $faq[] = array("Frage", "Antwort");
// Wenn du eine Sektion abgrenzen willst füge folgendes hinzu: $faq[] = array("--", "Wenn gewünscht, hier Überschrift eintragen");
// Links werden automatisch erstellt.
//
// Vergesse NICHT das ; am Ende jeder Zeile.
// Füge KEINE doppelten Anführungsstriche (") in deinen Regel-Einträgen hinzu, wenn du es unbedingt brauchst dann trenne sie mit \"irgendetwas\" ab
// Die FAQ-Einträge werden in der Reihenfolge wie sie hier angegeben sind angezeigt

	$faq[] = array(
		0	=> '--',
		1	=> 'Vprasanja v zvezi z registracijo in prijavo',
	
	$faq[] = array(
		0	=> 'Zakaj se ne morem prijaviti?',
		1	=> 'Obstaja kar nekaj razlogov, zakaj se to lahko zgodi. Najprej se prepricajte, ce ste vnesli pravilno uporabnisko ime in geslo. ce ste, potem kontaktirajte administratorja in se prepricajte, da vas niso izkljucili. Mozno je tudi, da se je pojavila napaka v nastavitvah foruma, za kar pa bo moral poskrbeti sam administrator.',
	),
	$faq[] = array(
		0	=> 'Zakaj se pravzaprav moram registrirati?',
		1	=> 'Morda se vam ni potrebno, saj administrator sam doloci, ali je za objavljanje prispevkov na dolocenem forumu potrebna registracija ali ne. Ne glede na to pa vam registracija omogoci dostop do dodatnih moznosti, ki za goste niso dosegljive, npr. avatarji oz. podobe, posiljanje zasebnih sporocil, prejemanje sporocil ostalih uporabnikov, opisi skupin uporabnikov itd. in ker vam bo vzelo le kaksno minuto, je priporocljivo, da se registrirate.',
	),
	$faq[] = array(
		0	=> 'cemu avtomatska odjava?',
		1	=> 'ce ne obkljukate moznosti <em>Samodejna prijava</em> ko se prijavite, boste prijavljeni le zacasno, se pravi ko ste dejansko na forumu. Ta nastavitev preprecuje morebitno zlorabo vasega racuna. ce zelite ostati prijavljeni, med prijavo obkljukajte prej omenjeno moznost, kar pa vam odsvetujemo, ce do foruma dostopate s tujega racunalnika, npr. v knjiznici, internetnem "kaficu", studentski racunalnici itd. ce moznosti ne vidite, jo je administrator odstranil. ',
	),
	$faq[] = array(
		0	=> 'Kako preprecim vidnost svojega uporabniskega imena na listi prijavljenih (online) uporabnikov?',
		1	=> 'Na vasi Uporabniski Nadzorni Plosci boste pod Nastavitvami foruma nasli moznost <em>Skrij moj status prisotnosti</em>. Omogocite to moznost z obkljukanjem <samp>Da</samp> polja in boste vidni samo administratorjem, moderatorjem in seveda vam. steti boste kot eden izmed skritih uporabnikov.',
	),
	$faq[] = array(
		0	=> 'Pozabil sem geslo!',
		1	=> 'Brez skrbi! Vase sedanje geslo sicer ne more biti dobljeno nazaj, je pa lahko brez tezav na novo postavljeno. Obiscite stran za prijavo in kliknite na <em>Pozabil sem geslo</em>. Sledite navodilom in v kratkem se boste zopet lahko prijavili. ',
	),
	$faq[] = array(
		0	=> 'Registriral sem se, vendar se ne morem prijaviti!',
		1	=> 'Najprej preverite uporabnisko ime in geslo. ce sta pravilna, potem obstajata dve mozni tezavi. ce je vkljucena moznost "COPPA support" (COPPA podpora) in ste se med registracijo oznacili za starega pod 13 let, boste morali slediti navodilom, ki ste jih prejeli. Nekateri forumi bodo od vas ali od administratorja celo zahtevali ponovno registracijo, predno se boste lahko prijavili; ta informacija vam je bila podana tudi med registracijo. ce ste prejeli elektronsko sporocilo, sledite navodilom, ce pa ga niste, ste najbrz vnesli napacni e-mail naslov ali pa vam je sporocilo izbrisal filter za "spam" oz. nezazeleno posto. ce ste prepricani, da ste vnesli pravilen e-mail naslov, kontaktirajte administratorja.',
	),
	$faq[] = array(
		0	=> 'ze pred casom sem se registriral, a se naenkrat ne morem vec prijaviti?!',
		1	=> 'Mozno je, da so administratorji onemogocili ali izbrisali Vas racun. Marsikateri forum avtomatsko deaktivira uporabnike, kateri niso dosti casa aktivni. ce se je to zgodilo, se ponovno registrirati in poizkusite biti bolj aktivni na forumu.',
	),
	$faq[] = array(
		0	=> 'Kaj je COPPA?',
		1	=> 'COPPA oz. Child Online Privacy and Protection Act of 1998 (Akt o otroski zasebnosti in zasciti na spletu iz leta 1998) je zakon v Zdruzenih Drzavah, ki od spletnih strani, ki potencialno posedujejo podatke mladostnikov starih pod 13 let, zahteva pisno potrdilo starsev ali kaksen drug pravni dokument z vsebino, da se zakoniti skrbnik mladostnika strinja z oddajo osebnih podatkov svojega oskrbovanca. ce niste prepricani, ali se to tice vas kot nekoga, ki se zeli registrirati, ali spletne strani, na kateri poskusate z registracijo, se za pomoc obrnite na pravni svet. Vedite, da phpBB Group ne more nuditi pravnih nasvetov in ni pravi naslov za kakrsna koli pravna vprasanja, razen tistih, ki so navedena spodaj.',
	),
	$faq[] = array(
		0	=> 'Zakaj se ne morem registrirati?',
		1	=> 'Mozno je, da je administrator blokiral vas IP naslov ali uporabnisko ime, s katerim se skusate registrirati. Mozno je tudi, da je administrator onemogocil registracijo, da bi preprecil vstop novih obiskovalcev. Z vprasanji se obrnite na administratorja foruma.',
	),
	$faq[] = array(
		0	=> 'cemu sluzi moznost "Izbrisi vse piskotke foruma"?',
		1	=> '"Izbrisi vse piskotke foruma" izbrise vse piskotke, ki jih je ustvaril phpBB in ki vam omogocajo verodostojnost in prijavljenost na forumu. Prav tako omogocajo moznosti kot npr. read tracking, ce seveda niso bile prepovedane s strani administratorja. ce imate tezave s prijavljanjem ali odjavljanjem, vam bo brisanje piskotkov morda pomagalo. ',
	),
	$faq[] = array(
		0	=> '--',
		1	=> 'Uporabniske nastavitve',
	),
	$faq[] = array(
		0	=> 'Kako spremenim svoje nastavitve?',
		1	=> 'ce ste registriran uporabnik, so vse vase nastavitve shranjene v forumovi podatkovni bazi. ce jih zelite spremeniti, obiscite stran svoje Uporabniske Nadzorne Plosce (povezavo ponavadi najdete na vrhu strani foruma poleg se nekaterih povezav). Ta sistem vam bo omogocil spremembo vseh vasih nastavitev.',
	),
	$faq[] = array(
		0	=> 'cas ni pravilen!',
		1	=> 'Mozno je, da je prikazan cas iz drugega casovnega pasu in je zato nepravilen. ce je problem v tem, potem obiscite vaso Uporabnisko Nadzorno Plosco in spremenite casovni pas na vam ustreznega, npr. na London, Pariz, New York, Sydney itd. Vedite pa, da je spreminjanje casovnega pasu mozno le za registrirane uporabnike, kakor tudi za vecino ostalih nastavitev. ce torej se niste registrirani, je sedaj dobra priloznost, da se.
',
	),
	$faq[] = array(
		0	=> 'Spremenil sem casovni pas, pa cas se vedno ni pravilen!',
		1	=> 'ce ste prepricani, da ste pravilno nastavili casovni pas in upostevali poletni oz. zimski premik ure, cas pa je se vedno napacen, potem je nepravilno nastavljena ura na strezniku. Prosimo, opozorite administratorja na napako, da bo lahko resil tezavo. ',
	),
	$faq[] = array(
		0	=> 'Mojega jezika ni na seznamu!',
		1	=> 'Obstajata dve moznosti: ali administrator ni nastavil vasega jezika ali pa forum ni preveden v zelen jezik. Obrnite se na administratorja, ce lahko namesti zelen jezikovni paket. ce le-ta ne obstaja, lahko sami ustvarite nov prevod (ce zelite). Vec informacij lahko najdete na spletni strani phpBB (povezava je na dnu strani). ',
	),
	$faq[] = array(
		0	=> 'Kako dodam podobo poleg svojega uporabniskega imena?',
		1	=> 'Dve podobi se lahko pojavita pod uporabniskim imenom med prebiranjem prispevka. Prva podoba je povezana z vasim rangom/stopnjo - ponavadi je v obliki zvezdic, stolpcev ali krogcev, in prikazuje, koliko prispevkov ste objavili ali pa vas status na forumu. Druga podoba je ponavadi vecja in je poznana kot "avatar" - navadno je edinstvena in osebna za vsakega uporabnika. Administrator foruma je tisti, ki avatarje omogoci in doloci, kako in kje jih uporabniki lahko izberejo. ce torej avatarjev ne morete uporabiti, se obrnite na administratorja foruma in se pozanimajte, zakaj je temu tako.',
	),
	$faq[] = array(
		0	=> 'Kaj je moj rang oz. stopnja in kako ga spremenim?',
		1	=> 'Rangi oz. stopnje, ki se pojavijo pod uporabniskim imenom, prikazujejo, koliko prispevkov ste objavili, ali pa identificirajo dolocene uporabnike, npr. moderatorje in administratorje. Na splosno ne morete direktno spremeniti besedisca katerih koli rangov na forumu, saj jih je nastavil administrator. Prosimo, da foruma ne izkoriscate za objavljanje po nepotrebnem, samo da bi zvisali svoj rang. Vecina forumov tega ne tolerira, zato vam lahko moderator ali administrator preprosto omejita stevilo dovoljenih objav.',
	),
	$faq[] = array(
		0	=> 'Zakaj sem ob kliku na e-mail povezavo nekega uporabnika pozvan k prijavi?',
		1	=> 'Samo registrirani uporabniki lahko posiljajo e-maile ostalim uporabnikom in se to samo, ce je administrator to moznost nastavil. Temu je tako, da bi anonimnim uporabnikom preprecili neprimerno uporabo sistema spletne poste.',
	),
	$faq[] = array(
		0	=> '--',
		1	=> 'Poglavje o objavljanju',
	),
	$faq[] = array(
		0	=> 'Kako na forumu objavim temo?',
		1	=> 'Za objavo nove teme kliknite na ustrezen gumb na strani foruma ali pa na strani, kjer je seznam tem. Morda se vam bo pred objavo prispevka potrebno registrirati. Na dnu strani foruma (ali strani objavljenih tem) je na voljo seznam dovoljenih moznosti, npr. Objavite lahko nove teme, Lahko glasujete v anketah itd.',
	),
	$faq[] = array(
		0	=> 'Kako uredim ali izbrisem objavo?',
		1	=> 'Izbrisete ali urejate lahko samo vase prispevke, razen ce ste moderator ali administrator foruma. Prispevek urejate tako, da za ustrezen prispevek kliknete na gumb "uredi", vendar je ta moznost vcasih na voljo le nekaj casa po objavi prispevka. ce je nekdo ze odgovoril na vas prispevek, boste ob vrnitvi na temo pod prispevkom nasli besedilo, ki prikazuje, kolikokrat in kdaj ste ze uredili prispevek. Kot ze receno, se bo besedilo pojavilo le, ce je ze nekdo podal odgovor, ne bo pa se pojavilo, ce sta prispevek uredila moderator ali administrator. V slednjem primeru boste morda nasli le zaznamek, zakaj je bil prispevek prirejen. Vedite pa, da obicajni uporabniki ne morejo vec izbrisati prispevka, potem ko je nekdo ze napisal odgovor.',
	),
	$faq[] = array(
		0	=> 'Kako svoji objavi dodam podpis?',
		1	=> 'ce zelite svojemu prispevku dodati podpis, ga morate najprej ustvariti in sicer na vasi Uporabniski Nadzorni Plosci. Ko to opravite, preprosto kliknite na oz. obkljukajte <em>Dodaj podpis</em> (na obrazcu za objavljanje prispevkov). Podpis lahko dodate tudi kot privzeto, kar storite tako, da v nastavitvah svojega profila obkljukate ustrezno nastavitev. ce se odlocite za to moznost, lahko podpis v posameznih prispevkih se vedno izbrisete - odkljukajte okence "dodaj podpis" pri samem obrazcu za posiljanje.',
	),
	$faq[] = array(
		0	=> 'Kako ustvarim anketo?',
		1	=> 'Kliknite na gumb "Ustvari anketo" pod glavnim obrazcem za posiljanje in sicer ko objavljate novo temo ali urejate prvi prispevek na doloceno temo; ce gumba ne morete videti, potem nimate primernih dovoljenj za ustvaritev ankete. V ustrezna okna vstavite naslov in vsaj dve moznosti ter se prepricajte, da je vsaka moznost v svojem polju. Lahko tudi dolocite, koliko moznosti lahko uporabnik med glasovanjem izbere (pod "Moznosti na uporabnika"), casovno omejitev ankete (0 za nedoloceno trajanje) in moznost, da uporabniki svoj glas popravijo',
	),
	$faq[] = array(
		0	=> 'Zakaj anketi ne morem dodati vec moznosti?',
		1	=> 'Omejitev moznosti pri anketi nastavi administrator. ce se vam zdi, da morate vasi anketi dodati vec moznosti kot je dovoljeno, se obrnite na administratorja foruma.',
	),
	$faq[] = array(
		0	=> 'Kako uredim ali izbrisem anketo?',
		1	=> 'Kakor prispevke lahko ankete urejajo le moderator, administrator ali pa tisti, ki jo je ustvaril. ce zelite urediti anketo, najprej kliknite na ureditev prvega prispevka v temi; to je vedno povezano z anketo. ce ni se nihce oddal svojega glasu, lahko uporabnik anketo uredi ali izbrise, ce pa so clani ze glasovali, jo lahko uredi/izbrise le moderator ali administrator. To preprecuje spremembo ankete nekje na sredi izvajanja.',
	),
	$faq[] = array(
		0	=> 'Zakaj do nekega foruma ne morem dostopati?',
		1	=> 'Nekateri forumi so lahko omejeni na dolocene uporabnike ali skupine. Za branje, objavljanje ali kakrsno koli drugo moznost boste morda potrebovali posebno dovoljenje. Za odobritev vasega vstopa na forum se obrnite na moderatorja ali administratorja foruma. ',
	),
	$faq[] = array(
		0	=> 'Zakaj ne morem dodati priponk?',
		1	=> 'Dovoljenja za priponke so dodeljena glede na forum ali pa glede na uporabnika. Administrator foruma morda ni dovolil dodajanje priponk na forumu, na katerem ste, ali pa je ta moznost dovoljena le doloceni skupini. ce ne veste, zakaj vam ta moznost ni omogocena, se obrnite na administratorja foruma.',
	),
	$faq[] = array(
		0	=> 'Zakaj sem prejel opozorilo?',
		1	=> 'Vsak administrator ima za svoj forum dolocena svoja pravila. ce ste kaksno od teh pravil prekrsili, ste verjetno prejeli opozorilo. Vedite, da je to odlocitev administratorja foruma in da skupina phpBB nima nic z morebitnimi opozorili. Kontaktirajte administratorja foruma, da vam pojasni, zakaj ste prejeli obvestilo.',
	),
	$faq[] = array(
		0	=> 'Kako lahko o objavah porocam moderatorju?',
		1	=> 'ce je administrator to moznost omogocil, bi morali gumb za porocanje o prispevku videti poleg prispevka, ki ga zelite prijaviti. Klik na ta gumb vas bo popeljal skozi potrebne korake, ki jih morate opraviti. ',
	),
	$faq[] = array(
		0	=> 'cemu v objavljanju tem sluzi gumb "Shrani"?',
		1	=> 'To vam omogoca, da nedokoncan prispevek shranite in ga kasneje dopolnite ter predlozite. Za ponovno nalozitev shranjenega prispevka obiscite Uporabnisko Nadzorno Plosco. ',
	),
	$faq[] = array(
		0	=> 'Zakaj mora biti moj prispevek odobren?',
		1	=> 'Administrator se lahko odloci, da je na forumu, kjer objavljate prispevke, potrebno le-te pred objavo pregledati. Mozno je tudi, da vas je administrator uvrstil v skupino uporabnikov, katerih prispevki morajo biti pred objavo pregledani. Za nadaljnje informacije se obrnite na administratorja foruma.',
	),
	$faq[] = array(
		0	=> 'Kako prestavim svojo temo?',
		1	=> 'S klikom na gumb "Premakni temo" lahko temo, ko jo pregledujete, premaknete na vrh foruma na prvi strani. ce te moznosti ne vidite, je morda izkljucena ali pa se ni preteklo dovolj casa od zadnjega premika. Temo je mozno premakniti tudi z odgovarjanjem nanjo, vendar bodite previdni in sledite pravilom foruma, ce se posluzujete te moznosti.',
	),
	$faq[] = array(
		0	=> '--',
		1	=> 'Oblikovanje foruma in vrste tem',
	),
	$faq[] = array(
		0	=> 'Kaj je BBKoda?',
		1	=> 'BBKoda je posebna izboljsava HTML-ja, ki ponuja vecji oblikovni nadzor nad dolocenimi deli prispevka. Uporabo BBKode omogoci administrator, vendar jo lahko tudi onemogocite v obrazcu za posiljanje prispevka. Sama BBKoda je stilno precej podobna HTML-ju, le da so tag-i prilozeni v oglatih oklepajih [ in ] namesto v &lt; in &gt;. Za vec informacij se oglejte vodnik, do katerega lahko dostopate tudi s strani za objavljanje.',
	),
	$faq[] = array(
		0	=> 'Ali lahko uporabljam HTML?',
		1	=> 'Ne, na tem forumu ni mogoce objavljati HTML-ja. Vecino oblikovanja, ki ga omogoca uporaba HTML-ja, je lahko nadomescena z uporabo BBKode. ',
	),
	$faq[] = array(
		0	=> 'Kaj so smeski?',
		1	=> 'Smeski oz. anglesko Smilies so majhne podobe, ki jih lahko uporabljate za izrazanje custev, npr. :) pomeni veselje, medtem ko :( nakazuje zalost. Celoten seznam smeskov lahko vidite na obrazcu za posiljanje. Ne uporabljajte jih prekomerno, saj lahko prispevek tako hitro postane neberljiv, moderator pa bo izbrisal vase smeske ali pa kar celoten prispevek. Administrator foruma je morda celo nastavil stevilcno omejitev uporabe smeskov, ki jih lahko v prispevku uporabite.',
	),
	$faq[] = array(
		0	=> 'Ali lahko objavljam tudi podobe?',
		1	=> 'Da, tudi podobe lahko objavite v prispevku. ce je administrator dovolil uporabo priponk, boste podobo lahko nalozili na forum, drugace pa morate navesti povezavo z javno dostopnim streznikom, na katerem je podoba shranjena, npr. http://www.primer-strani.com/moja-slika.gif. S slikami na vasem racunalniku ne morete ustvariti povezave (razen ce je javno dostopen streznik), prav tako ne s podobami shranjenimi za verodostojnimi mehanizmi, npr. s postnimi nabiralniki hotmail ali yahoo, s stranmi, ki so zascitene z geslom itd. Za nalozitev podobe uporabite tag BBKode [img].',
	),
	$faq[] = array(
		0	=> 'Kaj so globalna obvestila?',
		1	=> 'Globalna obvestila vsebujejo pomembne informacije, zato je priporocljivo, da jih kar se da pogosto prebirate. Pojavijo se na vrhu foruma in znotraj vase Uporabniske Nadzorne Plosce. Dovoljenja za globalna obvestila dodeli administrator foruma. ',
	),
	$faq[] = array(
		0	=> 'Kaj so razglasi?',
		1	=> 'Razglasi pogosto vsebujejo za forum pomembne informacije in tudi za razglase je priporocljivo, da jih berete cim pogosteje. Pojavijo se na vrhu vsake strani foruma, na katerega so poslana. Kakor ze za globalna obvestila tudi za razglase dodeli dovoljenja administrator foruma.',
	),
	$faq[] = array(
		0	=> 'Kaj predstavljajo NE PREZRI (lepljivek) teme?',
		1	=> '"Ne prezrite" oz. "lepljivek" teme se znotraj foruma pojavijo samo na prvi strani in sicer pod razglasi. So precej pomembne, zato jih redno prebirajte. Dovoljenja za "Ne prezrite" ("lepljivek") teme so, kakor za globalna obvestila in za razglase, dodeljena s strani administratorja foruma.',
	),
	$faq[] = array(
		0	=> 'Kaj so zaklenjene teme?',
		1	=> 'Zaklenjene teme so tiste teme, kjer uporabniki ne morejo vec odgovarjati, morebitne ankete, ki jih vsebuje, pa so koncane. Teme so lahko zaklenjene iz vecih razlogov, zaklenita pa jih lahko tako moderator kakor tudi admnistrator foruma. Tudi sami imate morda moznost, da svojo temo zaklenete, kar pa je seveda odvisno od moznosti in dovoljenj, ki vam jih je dodelil administrator foruma.',
	),
	$faq[] = array(
		0	=> 'Kaj so ikone tem?',
		1	=> 'Ikone tem so podobe/slike, ki jih je izbral avtor teme in se navezujejo na vsebino. Ali lahko ikone tem uporabljate ali ne, je odvisno od moznosti oz. dovoljenj, ki vam jih je odobril administrator foruma. ',
	),
	$faq[] = array(
		0	=> '--',
		1	=> 'Uporabniski nivoji in skupine',
	),
	$faq[] = array(
		0	=> 'Kaj so Administratorji?',
		1	=> 'Administratorji so tisti clani, ki imajo najvecjo stopnjo nadzora nad celotnim forumom. Ti clani lahko nadzorujejo vse dele obratovanja foruma, vkljucno z nastavljanjem dovoljenj, izkljucevanjem uporabnikov, ustvarjanjem uporabniskih skupin ali moderatorjev itd., vsa ta njihova dejanja pa so odvisna od tega, kaksna dovoljenja jim je dodelil ustanovitelj foruma. Lahko imajo celo vse moderatorske zmoznosti posameznih forumih, kar pa je zopet odvisno od tega, ali je te nastavitve omogocil ustanovitelj foruma.',
	),
	$faq[] = array(
		0	=> 'Kaj so Moderatorji?',
		1	=> 'Moderatorji so posamezniki (ali skupine posameznikov), ki dnevno skrbijo za forume. Imajo dovoljenje, da prispevke preoblikujejo ali zbrisejo in da zaklenejo, odklenejo, premaknejo, razdelijo ali izbrisejo teme na forumu, ki ga moderirajo. V spolsnem so torej moderatorji tisti, ki preprecujejo, da bi uporabniki skrenili s teme ali da bi objavljali nasilne/zaljive vsebine.',
	),
	$faq[] = array(
		0	=> 'Kaj so uporabniske skupine?',
		1	=> 'Uporabniske skupine so skupine uporabnikov in so namenjene temu, da udelezence foruma razdelijo v obvladljive sekcije, s katerimi administrator lahko upravlja. Vsak uporabnik lahko pripada vecim skupinam, vsaka skupina pa ima svoje moznosti in dovoljenja. Ta nacin omogoca, da administrator vecim uporabnikom naenkrat spremeni dovoljenja, kot npr. spreminjanje dovoljenj moderatorjem ali dovoljenje, da uporabniki dostopajo do zasebnega foruma.',
	),
	$faq[] = array(
		0	=> 'Kje se nahajajo uporabniske skupine in kako se kaksni prikljuciti?',
		1	=> 'Seznam uporabniskih skupin lahko vidite pod povezavo "Uporabniske skupine", ki se nahaja na vasi Uporabniski Nadzorni Plosci. ce bi se kaksni radi pridruzili, kliknite na ustrezen gumb, vendar vedite, da niso vse splosno dostopne. Nekatere za vstop zahtevajo dovoljenje, nekatere so zaprte in nekatere imajo celo skrito clanstvo. ce je torej skupina odprta, se ji lahko pridruzite s klikom na ustrezen gumb. ce skupina zahteva dovoljenje, lahko s klikom na ustrezen gumb zaprosite za clanstvo. Vodja skupine bo clanstvo potrdil (ali ne) in vas prej morda se vprasal, zakaj se skupini zelite pridruziti. Prosimo, da voditelja skupine ne nadlegujete, ce se odloci zavrniti vaso prosnjo za clanstvo; zagotovo ima svoje razloge za to.',
	),
	$faq[] = array(
		0	=> 'Kako postanem vodja uporabniske skupine?',
		1	=> 'Voditelj uporabniske skupine je ponavadi dolocen takrat, ko skupino ustvari administrator foruma. ce se zanimate za ustvaritev nove uporabniske skupine, se najprej obrnite na administratorja (posljite mu zasebno sporocilo). ',
	),
	$faq[] = array(
		0	=> 'Zakaj se nekatere uporabniske skupine pojavljajo v razlicnih barvah?',
		1	=> 'Mozno je, da je administrator clanom uporabniske skupine dolocil barvo, kar pa sluzi temu, da se med seboj lazje prepoznajo. ',
	),
	$faq[] = array(
		0	=> 'Kaj je "Privzeta uporabniska skupina"?',
		1	=> 'ce pripadate vecim uporabniskim skupinam, je vasa privzeta skupina tista, od katere privzamete barvo in rang (oboje je vidno ostalim uporabnikom). Administrator foruma lahko dodeli moznost, da svojo privzeto uporabnisko skupino spremenite, in sicer na vasi Uporabniski Nadzorni plosci. ',
	),
	$faq[] = array(
		0	=> 'Kaj je povezava "Ekipa"?',
		1	=> 'Na tej povezavi najdete seznam osebja foruma, vkljucno z administratorjem foruma in moderatorji, pa tudi ostale podrobnosti, npr. katere forume te osebe moderirajo. ',
	),
	$faq[] = array(
		0	=> '--',
		1	=> 'Posiljanje zasebnih sporocil',
	),
	$faq[] = array(
		0	=> 'Ne morem poslati zasebnega sporocila!',
		1	=> 'Obstajajo trije razlogi, zakaj tega ne morete storiti: 1. niste registrirani in/ali prijavljeni, 2. administrator foruma je za ves forum preprecil posiljanje zasebnih sporocil, 3. administrator foruma vam je preprecil posiljanje sporocil. Za vec informacij se obrnite na administratorja foruma.',
	),
	$faq[] = array(
		0	=> 'Nenehno dobivam nezazelena zasebna sporocila!',
		1	=> 'Dolocenega uporabnika lahko blokirate in mu s tem preprecite posiljanje zasebnih sporocil (to lahko nastavite na vasi Uporabniski Nadzorni Plosci). ce od dolocenega uporabnika prejemate zaljiva sporocila, o tem obvestite administratorja foruma, saj mu le-ta lahko prepreci nadaljno posiljanje zasebnih sporocil.',
	),
	$faq[] = array(
		0	=> 'Od nekoga na forumu sem dobil vsiljeno (spam) oz. zaljivo sporocilo!',
		1	=> 'Zelo nam je zal, da se je to zgodilo. Obrazec za posiljanje elektronske poste vsebuje varnostne tocke, preko katerih poskusamo zaslediti uporabnike, ki izrabljajo to storitev, zato vas naprosamo, da administratorju foruma posljete kopijo celotnega sporocila. Zelo pomembno je, da ta kopija vsebuje tudi t.i. "header" (del, kjer so podrobnosti o posiljatelju), saj bo tako administrator lahko ukrepal.',
	),
	$faq[] = array(
		0	=> '--',
		1	=> 'Prijatelji in Sovrazniki',
	),
	$faq[] = array(
		0	=> 'Kdo so moji Prijatelji in Sovrazniki na seznamu?',
		1	=> 'Te sezname lahko uporabite za organizacijo ostalih clanov foruma. clani z vasega seznama Prijateljev bodo dostopni tudi na Uporabniski Nadzorni Plosci pod hitro povezavo, da boste lahko videli njihov status prisotnosti in da jim boste lahko posiljali zasebna sporocila. ce boste koga dodali pod Sovraznike, bodo vsa njegova sporocila skrita in avtomatsko izbrisana.',
	),
	$faq[] = array(
		0	=> 'Kako lahko uporabnike dodam na oz. odstranim s seznama Prijateljev in Sovraznikov?',
		1	=> 'Uporabnike lahko na seznam dodajate na dva nacina. Znotraj profila vsakega uporabnika je povezava, preko katere ga lahko dodate na seznam Prijateljev ali Sovraznikov. Druga moznost je vasa Uporabniska Nadzorna Plosca, kjer uporabnike dodate neposredno z vnosom njihovega clanskega imena. Z enako metodo lahko uporabnike tudi odstranite s seznama.',
	),
	$faq[] = array(
		0	=> '--',
		1	=> 'Iskanje po forumih',
	),
	$faq[] = array(
		0	=> 'Kako lahko preiscem forum oz. forume?',
		1	=> 'V okno za iskanje (na osnovni strani ali na strani tem) vpisite zeleno besedo. Lahko uporabite tudi napredno iskanje, do katerega pridete, ce na kateri koli strani foruma kliknete na povezavo "Napredno iskanje". Kako dostopate do iskanja je odvisno od stila, ki je na forumu uporabljen.',
	),
	$faq[] = array(
		0	=> 'Zakaj je moje iskanje brez rezultatov?',
		1	=> 'Iskano geslo je bilo verjetno prevec splosno in je posledicno vkljucevalo veliko splosnih pojmov, ki jih phpBB3 nima zabelezenih. Bodite bolj natancni in uporabite moznosti Naprednega iskanja. ',
	),
	$faq[] = array(
		0	=> 'Zakaj je odgovor na moje iskanje zgolj prazna stran!?',
		1	=> 'Rezultat vasega iskanja je prevec zadetkov za zmoznosti spletnega brskalnika. Uporabite "Napredno iskanje" in bolj natancno definirajte iskan pojem in forume, ki naj bodo preiskani. ',
	),
	$faq[] = array(
		0	=> 'Kako poiscem dolocene clane?',
		1	=> 'Obiscite stran "clani" in kliknite na povezavo "Najdi clana".',
	),
	$faq[] = array(
		0	=> 'Kako najdem svoje objave in teme?',
		1	=> 'Vase prispevke lahko najdete tako na vasi Uporabniski Nadzorni Plosci pod povezavo "Poisci uporabnikove prispevke", kot tudi na strani vasega profila. ce zelite poiskati vase teme, uporabite Napredno iskanje in primerno vpisite razlicne moznosti. ',
	),
	$faq[] = array(
		0	=> '--',
		1	=> 'Narocnine na teme in zaznamki',
	),
	$faq[] = array(
		0	=> 'Kaksna je razlika med zaznamki in narocninami na teme?',
		1	=> 'Dolocanje zaznamkov je na phpBB3-ju precej podobno kot na spletnem iskalniku. O morebitnih nadgradnjah niste obvesceni, vendar se lahko kasneje zopet vrnete na temo. ce pa se boste na doloceno temo narocili, boste o nadgradnji teme ali foruma obvesceni.',
	),
	$faq[] = array(
		0	=> 'Kako se na dolocene forume ali teme narocim?',
		1	=> 'Za narocnino na dolocen forumu kliknite na povezavo "Opazuj forum" na strani foruma. Za narocnino na neko temo pa preprosto odgovorite na doslej napisane prispevke s klikom na povezavo "Odgovor", ki se nahaja v temi sami ali kliknite na povezavo "Obvescaj o prispevkih".',
	),
	$faq[] = array(
		0	=> 'Kako svojo narocnino odstranim?',
		1	=> 'Za odstranitev vasih narocnin pojdite na vaso Uporabnisko Nadzorno Plosco in sledite povezavam do vasih narocnin.',
	),
	$faq[] = array(
		0	=> '--',
		1	=> 'Priponke',
	),
	$faq[] = array(
		0	=> 'Katere priponke so dovoljene na tem forumu?',
		1	=> 'Vsak administrator foruma lahko dolocene tipe priponk dovoli ali pa ne. ce ne veste, kaj je dovoljeno naloziti in kaj ne, se obrnite na administratorja foruma. ',
	),
	$faq[] = array(
		0	=> 'Kako najdem svoje priponke?',
		1	=> 'ce zelite najti seznam priponk, ki ste jih nalozili, pojdite na vaso Uporabnisko Nadzorno Plosco in sledite povezavam do dela o priponkah. ',
	),
	$faq[] = array(
		0	=> '--',
		1	=> 'O programu phpBB',
	),
	$faq[] = array(
		0	=> 'Kdo je ustvaril ta forum?',
		1	=> 'Ta program je (v nespremenjeni obliki) avtorsko delo <a href="http://www.phpbb.com/">phpBB Group</a>. Javnosti je na voljo pod pogoji GNU General Public Licence in se lahko prosto posreduje drugim uporabnikom. Za vec informacij obiscite povezavo. ',
	),
	$faq[] = array(
		0	=> 'Zakaj funkcija X ni na voljo?',
		1	=> 'Ta programska oprema je delo skupine phpBB Group, ki ima zanj tudi licenco. ce mislite, da bi bilo treba dodati kaksno dodatno funkcijo, potem obiscite stran phpbb.com in si oglejte, kaj o tem pravi phpBB Group. Prosimo vas, da na forumu na strani phpbb.com ne objavljate prosenj za nove funkcije. phpBB Group za te namene uporablja forume za izmenjavo mnenj (SourceForge). Prosimo, da preberete forume in si ogledate, kaksno je nase mnenje glede posameznih funkcij in potem sledite navodilom, ki jih boste dobili tam.',
	),
	$faq[] = array(
		0	=> 'Koga lahko kontaktiram glede zlorab in pravnih zadev v zvezi s tem forumom?',
		1	=> 'Obrnite se na administratorja tega foruma. ce ne najdete njegovega kontaktnega naslova, se obrnite na enega od moderatorjev in vprasajte koga morate kontaktirati. ce se vedno ne dobite odziva, se obrnite na lastnika domene (do podatkov pridete preko <a href="http://www.google.com/search?q=whois">whois lookup</a>). ce forum gostuje na brezplacnem serverju (npr. yahoo, free.fr, f2s.com, etc.), se obrnite na njihov oddelek za zlorabo storitev. Zavedati se morate, da phpBB Group nima <strong>popolnoma nobenega nadzora</strong> in zato ne more biti odgovorna za to, kdo uporablja njihov forum. Popolnoma nesmiselno je kontaktirati phpBB Group v zvezi s pravnimi zadevami, ki <strong>niso direktno povezane</strong> s stranjo phpbb.com ali z njihovo programsko opremo. ce boste vseeno poslali sporocilo phpBB Group o uporabi njihovega foruma, se zavedajte, da boste v najboljsem primeru dobili le kratek odgovor, v vecini primerov pa sploh ne boste dobili odgovora.',
	),
);

?>