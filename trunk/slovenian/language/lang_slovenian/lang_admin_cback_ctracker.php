<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin_cback_ctracker.php 33 2009-05-02 16:34:07Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Christian Knerr (cback) - (www.cback.de)
* TheSteffen, KugeLSichA, Tom, Carsten
*
*/

/**
* German Language File for the CBACK Cracker Tracker
*
* @author Christian Knerr (cback)
* @translator Marc Renninger (mc-dragon)
* @package ctracker
* @version 5.0.0
* @since 21.07.2006 - 17:26:28
* @copyright (c) 2006 www.cback.de
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
/*
* Language Strings used for the ACP Menu points
*/
	'ctracker_module_category' => 'CrackerTracker',
	'ctracker_module_1' => 'Prüfsummenscanner',
	'ctracker_module_2' => 'Credits',
	'ctracker_module_3' => 'Dateiscanner',
	'ctracker_module_4' => 'Globale Nachricht',
	'ctracker_module_5' => 'IP&Agent Blocker',
	'ctracker_module_6' => 'Logmanager',
	'ctracker_module_7' => 'Wartung &amp; Tests',
	'ctracker_module_8' => 'Miserable Benutzer',
	'ctracker_module_9' => 'Einstellungen',
	'ctracker_module_10' => 'Wiederherstellen',
	'ctracker_module_11' => 'Footer',


/*
* Language Strings used in ACP Modules itself
*/
	'ctracker_wrong_module' => 'neznana modul številka',
	'ctracker_img_descriptions' => 'Slika',
	'ctracker_set_catname1' => 'IP, Proxy &amp; uporabniški agent zablokiranja',
	'ctracker_set_catname2' => 'iskanje zašcitnega sistema',
	'ctracker_set_catname3' => 'Zašcitni vpisovalni sistem',
	'ctracker_set_catname4' => 'Avtomatski detektor smetenja',
	'ctracker_set_catname5' => 'Registracijski zašcitni sistem',
	'ctracker_set_catname6' => 'preveri kodo',
	'ctracker_set_catname7' => 'Glavne zašcitne funkcije',
	'ctracker_set_catname8' => 'Druge nastavitve',
	'ctracker_settings_head' => 'Nastavitve zidne razpoke',
	'ctracker_settings_expl' => '<b>Prilagodi vse nastavitve sistema zidne razpoke.</b>',
	'ctracker_button_submit' => 'Varne nastavitve',
	'ctracker_button_reset' => 'Obnovi',

	'ctracker_settings_m1' => 'Aktiviraj IP blokiranja',
	'ctracker_settings_e1' => 'Omogoci ali neomogoci IP, Proxy in uporabniškega agenta za blokiranja.',
	'ctracker_settings_m2' => 'IP blokiralec zabeležene velikosti',
	'ctracker_settings_e2' => 'Nastavi število vstopov za beležnemu podatkov na IP blokiranju. ce število vstopov ne ustreza limitu, se bo zabeležen podatek avtomatsko izbrisal po ukazu za varni intenetni prostor.',
	'ctracker_settings_m3' => 'Aktiviraj iskanje zašcite',
	'ctracker_settings_e3' => 'Omogoci ali neomogoci iskanje zašcitnega sisitema.',
	'ctracker_settings_m4' => 'Iskalni cas za uporabnike',
	'ctracker_settings_e4' => 'Æe je iskanje zašcite omogoceno: Nastavi cakalni cas (v sekundah) za registrirane uporabnike dokler ne bodo ponovno iskali. ',
	'ctracker_settings_m5' => 'Številka iskanj za uporabnike',
	'ctracker_settings_e5' => 'Nastavi število iskanj ki ga lahko registrirani uporabniki opravijo v intervalu pokazanem zgoraj.ce je številka prekoracena, se bo nadaljne iskanje zablokiralo za cas ki je prikazan zgoraj za nalaganje serverja.',
	'ctracker_settings_m6' => 'Iskalnik casa za goste',
	'ctracker_settings_e6' => 'Nastavi casovno obdobje (v sekundah) gostje morajo pocakati ce je iskalnik zašcitnega sistema vkljucen.',
	'ctracker_settings_m7' => 'Število iskanj za goste',
	'ctracker_settings_e7' => 'Nastavi koliko iskanj je lahko v dolocenem casovnem obdobju dovoljeno?. ce je številka prekoracena po limitu, se bo nadaljne iskanje zablokiralo za cas ki je prikazan zgoraj za nalaganje serverja.',
	'ctracker_settings_m8' => 'Vklopi vstopno zašcito',
	'ctracker_settings_e8' => 'Omogoci ali neomogoci vstopni zašcitni sistem zidne razpoke.',
	'ctracker_settings_m9' => 'Beležna velikost za napacne vpise',
	'ctracker_settings_e9' => 'nastavi koliko je lahko neuspelih vstopov predno se avtomatsko zbrišejo po ukazu za varni internetni prostor.',
	'ctracker_settings_m10' => 'število vpisov v vizualno potrditev',
	'ctracker_settings_e10' => 'nastavi kako pogosto selahko uporabnik neuspešno zabeleži predno se aktivira okrutno_silni napadalec in vizualna potrditev je zahtevana.',
	'ctracker_settings_m11' => 'Zgodovina vpisa',
	'ctracker_settings_e11' => 'Omogoci ali neomogoci zgodovino vpisovanja za uporabnike.',
	'ctracker_settings_m12' => 'Vstop v vpisovaln zgodovino na uporabnika',
	'ctracker_settings_e12' => 'Nastavi koliko uspelih vpisov je za vsakega uporabnika da se shrani v zgodovino vpisov.Vsak uporabnik ima možnost preveriti cas in Ip naslov njihovih vpisov.',
	'ctracker_settings_m13' => 'Vpiši Ip znacilnosti',
	'ctracker_settings_e13' => '<b>omogoci ali neomogoci vpis IP sistem:</b> IP zašciteni sistem preverja spremembe na IP naslovu to. Vsak uporabnik ima možnost omogociti ali neomogociti sistem za vpisne zašcitene strani. Uporabnik bo obvešcen ce je njihov IP obseg bil kakorkoli spremenjen od zadnje prijave, in ce se je kdo prijavil iz drugacne lokacije.',
	'ctracker_settings_m14' => 'Detektor smetenja',
	'ctracker_settings_e14' => 'Nastavi nacin za avtomatsko zaznavanje smetenja.',
	'ctracker_settings_m15' => 'casovno obdobje smetenja',
	'ctracker_settings_e15' => 'Nastavi casovno obdobje (v sekundah) ko bo uporabnik \' mesto bo prešteto za detekcijo smetenja.',
	'ctracker_settings_m16' => 'številka smetenega mesta',
	'ctracker_settings_e16' => 'Nastavi dovoljene številke mest za casovno obdobje. ce  številka je številka prekoracena bo uporabnik identificiran kot smet.',
	'ctracker_settings_m17' => 'beleženje velikosti smetenja',
	'ctracker_settings_e17' => 'Nastavi velikst beleženja v (kb) katerem bo uporabnik ki je  identificiran kot smet bo bil posnet.',
	'ctracker_settings_m18' => 'Registracijska zašcita',
	'ctracker_settings_e18' => 'Omogoci ali neomogoci registracijsko zašcito.',
	'ctracker_settings_m19' => 'Blokiraj cas registracije',
	'ctracker_settings_e19' => 'Nastavi cas (V sekundah) dovoljen med dvema registracijama.',

	'ctracker_settings_m21' => 'IP opazovalec',
	'ctracker_settings_e21' => 'Z omogocanjem te funkcije, uporabnik Z identicnim IP naslovom selahko registrira samo enkrat medtem ko se je nekdo registriral z drugacnim Ip naslovom.',
	'ctracker_settings_m22' => 'Veljavnost gesla',
	'ctracker_settings_e22' => 'omogoci ali neomogoci preverjanje veljavnosti gesel za vse uporabnike.',
	'ctracker_settings_m23' => 'Dnevna veljavnost gesla',
	'ctracker_settings_e23' => 'Nastavi kako dolgo (dnevno) bo uporabnikovo geslo veljavno predno bo uporabnik obvešcen da naj zamenja geslo.',
	'ctracker_settings_m24' => 'preverjanje zapletenosti gesla',
	'ctracker_settings_e24' => 'Omogoci to funkcijo za preverjanje zapletenosti uporabnikovega gesla.',
	'ctracker_settings_m25' => 'Zapletni nacin gesla',
	'ctracker_settings_e25' => 'Nastavi zahtevane znake v geslo.',
	'ctracker_settings_m26' => 'minimalna dolžina gesla',
	'ctracker_settings_e26' => 'Nastavi minimalno število crk v geslo.',
	'ctracker_settings_m27' => 'preverjanje razveljavitve gesla',
	'ctracker_settings_e27' => 'omogocanje tega ti dovoljuje razveljaviti geslo v dolocenem casovnem obdobju (za uporabnike). To preprecuje napadalcem izkorišcanje funkcije z smetenjem, uporabniki uporabljajo razveljavljeno pošto.',
	'ctracker_settings_m28' => 'Geslo razveljavnjeno v dolocenem casovnem obdobju',
	'ctracker_settings_e28' => 'casovno obdobje (v minutah) uporabnik lahko razveljavi svoje geslo.',
	'ctracker_settings_m29' => 'Spremljanje elektronske pošte',
	'ctracker_settings_e29' => 'omogoci ali neomogoci funkcijo kjer uporabnik lahko uporablja interne krovske poštne funkcije  v dolocenem casovnem obdobju. To preprecuje smetenje.',
	'ctracker_settings_m30' => 'E-poštni casovni razpon',
	'ctracker_settings_e30' => 'casovno obdobje (v minutah) med dvema e-mailoma lahko uporabnik pošle prek interne poštne funkcije.',
	'ctracker_settings_m31' => 'Avtomatsko okrevanje',
	'ctracker_settings_e31' => 'omogoci ali neomogoci funkcijo shranjevanja nastavitev na krov avtomatsko.ce to ne deluje lahko uporabiš zadnjo znano leteco.',
	'ctracker_settings_m32' => 'vizualna potrditev za goste',
	'ctracker_settings_e32' => 'Z omogocanjem te funkcije, mora gost vstaviti vizualno kodo predno se mu vroci novo mesto. To varuje pred avtomatski smetenje.',
	'ctracker_settings_m33' => 'odstranljiva-poštna zašcita',
	'ctracker_settings_e33' => 'cTracker ima notranji list samoimenovanih odstranjevalcev e-pošte. Z omogocanjem te funkcije, uporabnik z takšnim e-poštnim naslovom se ne bo mogel registrerati.',
	'ctracker_settings_m34' => 'identifikacija nepravilnih konfiguracij',
	'ctracker_settings_e34' => 'Z omogocanjem funkcije zidna razpoka preverja glavne veljavne nastavitve tvojega zidu. tako ne moreš poškodovati svoje strani z nekonfiguracijo!',
	'ctracker_settings_m35' => 'Spodbudni detektor smetenja',
	'ctracker_settings_e35' => 'z omogocanjem  funkcije cTracker bo iskal za smetmi in zasmetenimi mesti. Vecina jih bo blokiranih.',
	'ctracker_settings_m36' => 'preverjanje kljucnih besed smetenja',
	'ctracker_settings_e36' => 'Z omogocanjem "Spodbudni detektor smetenja", kljucnimi besedami v profilu  v/ ali mestu bo skenerano za identificiranje smetenja.<br /><b>Prosim natipkaj:</b> Obstaja tudi možnost zaznavanja napacnih informacij novih uporabnikov. Prosim preveri beležnico podatkov za zaznavanje smetenja.',


/*
* Credits page in ACP
*/
	'ctracker_credits_head' => 'Ugodnosti',
	'ctracker_credits_subhead' => 'ugodnosti za CBACK zidna razpoka. tukaj vam bomo dali vec informacij glede zašcite in to je tudi nacin kako reci "Hvala".',
	'ctracker_credits_donate' => 'Darovati',
	'ctracker_credits_donate_expl' => 'ti je všec <b>CBACK profesionalna zidna razpoka</b>? potem bi bilo fajn ce bi darovali v CBACK Projekt z uporabo PayPal Donacije za pomoc za zamnjševanje stroškov serverj. to bi nam pomagalo pri nadaljnem razvoju in nadaljevati neprofitni project; tako da bomo sposobni nuditi zidni razpoko zastonj v prihodnosti.So we. <br /><br />Najlepša hvala za vašo podporo.',
	'ctracker_credits_credits' => 'ugodnosti',
	'ctracker_credits_credits_1' => 'Ideja &amp; Izvedba',
	'ctracker_credits_credits_2' => 'Avtor in  podpora',
	'ctracker_credits_credits_3' => 'Ikone',
	'ctracker_credits_credits_4' => 'Uradna download stran',
	'ctracker_credits_moddownload' => 'Zidna razpoka MOD Download',
	'ctracker_credits_thanks' => 'Hvala za...',
	'ctracker_credits_thanks_text' => 'Rad bi rekel hvala naslednjim osebam:',
	'ctracker_credits_thanks_to' => '<b>Ideja, varni testi in branje dokaznega gradiva</b><br />Tekin Birdüzen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><b>Ideas:</b><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><b>Translator (English)</b><br />Marc Renninger<br /><i>(mc-dragon)</i><br /><br /><br /><br /><b>Corrector (English)</b><br />George <br />Sommerset<br /><i>(<a href="http://www.englisch-hilfen.de" target="_blank">www.englisch-hilfen.de</a>)</i><br /><br /><br /><br /><b>Beta Tester</b><br />hvala vsem udeležence beta-testa<br />in seveda CBACK Premium uporabnikom in seveda <br />našim kolegom  "Mod-Scene" ki so pomagali pri beta testih in brali dokazno gradivo.</i>',
	'ctracker_credits_info' => 'Vec varnosti?',
	'ctracker_credits_info_text' => 'Popolno za zid in zidno razpoko: Za optimalno varnost priporocamo the Mod <b>napredna vizualna potrditev</b> naredil ga je  AmigaLink. Ta MOD razširitev CAPTCHA funkcija phpBB in profesionalna zidna razpoka z zelo kompleksnimi sistemi, ki ne morejo biti prebrani z Bote. Ta MOD lahko pretocite z <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a>.<br /><br /><br /><br />predlagamo da si intergrirate ta MOD na maticno plošco za dodatno varnost.',


/*
* File Hash Check in ACP
*/
	'ctracker_fchk_head' => 'Zidna razpoka preverjanje vsote skeniranje',
	'ctracker_fchk_subhead' => '<b>Ustvari preverjanje vsote za vsak PHP podatek na krovu.</b><br /> Klikna na"Ustvari nadgradnjo preverjanja vsote". Nato imaš možnost \potrditi spremembe\dolociti ali se je datoteka spremenila od zadnjega dejanja preverjanja vsote. ce se je datoteka spremenila brez vaše vednosti je to lahko znak da je nekdo dobil dostop na tvojo forum stran. Nameni pozornost  zadnjemu ogledu preverjanja ce opaziš da je bila nepooblešcena oseba aktivirana v preverjanju vsote skeniranja.!<br /><br /><b>Prosim napiši:</b> vsi serverji ne podpirajo te funkcije. Obcasno  lahko pride do  casovnega izsostanka, ce server porabi prevec casa za narediti zidni list. Ostali serverji ostavijo nadaljevnaje ce se predstavitev prevec intenzivna.<br /><br />&raquo; Zadnja akcija podatka je preverjanje prostora ki ga je zavzel. <b>%s</b>.',
	'ctracker_fchk_funcheader' => 'Funkcije',
	'ctracker_fchk_tableheader' => 'zunanji sistem',
	'ctracker_fchk_option1' => 'ustvari ali nadgradi preverjanje vsote',
	'ctracker_fchk_option2' => 'potrdi spremembe podatka',
	'ctracker_fchk_select_action' => 'Prosim izberi operacijo!',
	'ctracker_fchk_update_action' => 'preverjanje vsote je bilo nadgrajeno!',
	'ctracker_fchk_tablehead1' => 'Pot podatka',
	'ctracker_fchk_tablehead2' => 'stanje',
	'ctracker_file_unchanged' => 'nespremenjen',
	'ctracker_file_changed' => 'spremenjen',
	'ctracker_file_deleted' => 'Izbrisan',


/*
* File Safety Scanner in ACP
*/
	'ctracker_fscan_complete' => 'Skeniranje pdatkov je bilo izpeljano uspešno. Prosim klikni na  "Prikaži rezultat" da lahko vidiš rezultat. Lahko popraviš podatke.<br /><br /><br /><u>Prosim napiši:</u><br /><br />Obcasno se lahko zgodi da zidna razpoka lahko zazna podatke kot nevarno. To se lahko zgodi ko je PHP podatek zelo drugacen, in vcasih hoce razvijalec kodo za vpisovanje od zunaj. V tem primeru - in samo ce si absolutno preprican lahko poveš zidni razpoki da je datoteka varna. Da lahko to narediš, dodaš datoteki takoj na zacetku "Pozneje" ?php - Naslednja koda: <br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br />ce si nepreprican glede tega kaj narediti, lahko tudi obišceš <a href="http://www.community.cback.de" target="_blank">CBACK Community</a> za vec podrobnejših informacij.',
	'ctracker_fscan_unchecked' => 'Ni preverjeno',
	'ctracker_fscan_ok' => 'Varno',
	'ctracker_fscan_prob_1' => 'extension.inc ni /ali vkljuceno prepozno',
	'ctracker_fscan_prob_2' => 'IP_ROOT_PATH may not be initialised correctly',
	'ctracker_fscan_prob_3' => 'common.php / pagestart.php mogoce ni bilo vkljuceno ali pa je bilo vkljuceno prepozno.',
	'ctracker_fscan_prob_4' => 'KOda v datoteki se po možnosti izvaja za  zidom',
	'ctracker_fscan_prob_5' => 'extension.inc manjka in IP_ROOT_PATH ni najdeno',
	'ctracker_fscan_prob_def' => 'Nedefiniran primer se je pojavil med skeniranjem',
	'ctracker_fscan_important' => 'Prosim preberi to!',
	'ctracker_fscan_sel_action' => 'za zacetek preverjanja vseh podatkov prosim klikni na "Zaženi preverjanje datotek". Ko je preverjanje koncano klikni na "Pokaži rezultate" za prikaz rezultatov preverjanja. Ta seznam se lahko vpogleda nazaj kadarkoli z pomocjo ACP dokler ni narejeno novo preverjanje.<br /><br />Za tehnicne razloge ni možno dati <u>unambiguous</u> and <u>unfailing</u> informacije o varovanju  PHP opisa. zato ne bodite prevec prepicani. Lahko se zgodi, da skeniranju klasificira varovane podatke kot nevarne in napako verza. PHP koda je komplicirana - taka da je lahko tudi do sto procentov garantirano da ne bo vec nevarnih opisov. ;-)<br /><br />Ta skener je specializiran da zazna varne luknje v vsebovani datoteki. S tem skenerjem si lahko enostavna najdete ta tveganja in jih popravite.<br /><br />Za vec podrobnejših informacij prosim obišcite  CBACK skupnost!<br /><br />',
	'ctracker_fscan_head' => 'CBACK zidna razpoka varnostni odcitalec',
	'ctracker_fscan_subhead' => 'Varnostni odcitalec preveri vse PHP podatke na vašem forumu in poskuša zaznati varnostne luknje, ki bi lahko bile izkorišcene za crve. Te luknje so lahko dostopne iz zunanjosti zida, ki niso zašcitene preko krovske zašcite, ali zašæite zidne razpoke. To odcitavanje predstavlja možnost popravljanja datoteke.<br /><br /><b>Please note:</b> Algoritem tega odcitavanja  je eden najboljših optimiziranih in vsi serverji  ne podpirajo  te funkcije! Z zelo veliko plošco je lahko proizvedena zelo intenzivna  odcitavanje sistema preko  PHP odstranitve cas in padci.<br /><br /><b><em>prosim premislite o tem ce je narobe..</em></b><br /><br />&raquo; zadne preverjanje  vzame prostor na <b>%s</b>.',
	'ctracker_fscan_option1' => 'zacni preverjanje datotek',
	'ctracker_fscan_option2' => 'pokaži rezultat',


/*
* Global message in ACP
*/
	'ctracker_glob_msg_head' => 'Globalna sporocila',
	'ctracker_glob_msg_subhead' => '<b>Pusti globalna sporocila vzem uporabnikom.</b><br /> to sporocilo bo vidno uporabnikom ko se bodo naslednjic vpisali. imaš možnost ce imate raje vstaviti ali napisti svoje besedilo.<br /><b>Note:</b> tam je nastavljena omejitev besedila (255 crk).',
	'ctracker_glob_msg_entry' => 'nastavi globalno sporocilo ',
	'ctracker_glob_msg_submit' => 'vstavi',
	'ctracker_glob_msg_reset' => 'prekini sporocilo',
	'ctracker_glob_msg_type' => 'tip globalnega sporocila',
	'ctracker_glob_type_1' => 'besedilo',
	'ctracker_glob_type_2' => 'povezava',
	'ctracker_glob_msg_txt' => 'besedilo globalnega sporocila',
	'ctracker_glob_msg_link' => 'povezava lokacije v sporocilu',
	'ctracker_glob_msg_reset' => 'prekini trenutno sporocilo',
	'ctracker_glob_res_txt' => 'KO klikneš na "prekini trenutno sporocilo" bodo vsa trenutna sporocila prekinjena.',
	'ctracker_glob_msg_saved' => 'Globalno sporocilo je bilo uspešno shranjeno.<br /><br />Click <a href="%s">HERE</a> za vrnitev na upravljalca zidne razpoke.',
	'ctracker_glob_msg_reset_ok' => 'Globalno sporocilo je bilo izbrisano z uporabnikove table. vstavljeno sporocilo ne bo vec prikazano.<br /><br />Click <a href="%s">HERE</a> za vrnitev na upravljalca zidne razpoke.',

/*
* IP&Agent Blocker
*/
	'ctracker_ipb_delete' => 'zbriši udeležbo',
	'ctracker_ipb_blocklist' => 'blokiraj seznam udeležb',
	'ctracker_ipb_head' => 'Proxy, IP &amp; uporabniški agent za blokiranje',
	'ctracker_ipb_description' => '<b>upravljaj s seznamom blokiranja za cTracker Proxy, IP in uporabniškega agenta za blokiranje.</b><br /> lahko izbrišeš obstojece udeležbe in dodaš nove. Z novim vstopom imaš možnost uporabljati (*) za vstop kakršne koli kombinacije izhoda iz filtra na seznamu. For example: lwp* locks lwp-1 as well as lwp-simple etc. or 100.*.*.* zaklene vse IP-naslove zacne pri 100. .<br /><br /><b>CAUTION</b> bodi previden saj ne želip zakleniti svojega lastnega uporabniškega agenta ali IP naslova. Drugace si izven svojega foruma!',


/*
* Log Manager
*/
	'ctracker_log_manager_title' => 'upravljalec beležnih podatkov',
	'ctracker_log_manager_subtitle' => 'prikaži ali izbriši vse beležene podatke z zidne razpoke.',
	'ctracker_log_manager_overview' => 'upravljelec beleženja pregleda',
	'ctracker_log_manager_blocked' => 'zidna razpoka je zablokirana <b>%s</b> napadi zaenkrat.',
	'ctracker_log_manager_overview' => 'pregled beleženja podatkov',
	'ctracker_log_manager_head1' => 'beležno ime',
	'ctracker_log_manager_head2' => 'število vstopov',
	'ctracker_log_manager_head3' => 'Funkcije',
	'ctracker_log_manager_name2' => 'crv &amp; izkorišcena varnost',
	'ctracker_log_manager_name3' => 'IP, Proxy &amp; uporabniški agent za blokiranje',
	'ctracker_log_manager_name4' => 'napacni vpisi',
	'ctracker_log_manager_name5' => 'blokirano smetenje',
	'ctracker_log_manager_name6' => 'razhrošcirani vstopi',
	'ctracker_log_manager_view' => 'pogled',
	'ctracker_log_manager_delete' => 'zbriši',
	'ctracker_log_manager_delete_all' => 'zbriši vse beležene podatke',
	'ctracker_log_manager_deleted' => 'beležni podatki so bili izbrisani uspešno!',
	'ctracker_log_manager_all_deleted' => 'vsi beležni podatki so bili uspešno izbrisani!',
	'ctracker_log_manager_showheader1' => 'tam je  <b>one</b> vstopov v to beležno datoteko. klikni <b><a href="%s">HERE</a></b> za vrnitev na pregled beleženih podatkov.',
	'ctracker_log_manager_showheader' => 'Tam je  <b>%s</b> vstop v to beležno datoteko.<br />Click <b><a href="%s">HERE</a></b> za vrnitev na pregled beleženih podatkov.',
	'ctracker_log_manager_showlog' => 'poglej beležne podatke',
	'ctracker_log_manager_cell_1' => 'Datum / cas',
	'ctracker_log_manager_cell_2a' => 'sklic',
	'ctracker_log_manager_cell_2b' => 'uporabniški ime',
	'ctracker_log_manager_cell_3' => 'nanašanje',
	'ctracker_log_manager_cell_4' => 'uporabniški agent',
	'ctracker_log_manager_cell_5' => 'IP naslov',
	'ctracker_log_manager_cell_6' => 'daljni gost',
	'ctracker_log_manager_sysmsg' => 'zadnje cišcenje beleženih podatkov je bilo <b>%s</b>.',

/*
* Footer configuration
*/
	'ctracker_footer_head' => 'Upravljalec Footer',
	'ctracker_footer_subhead' => 'Izberi kateri Footer  naj zidna razpoka prikaže na tvojem forumu. prosimo ne spreminjajte noge in povezave za  www.cback.de!',
	'ctracker_select_footer' => 'Izberi Footer',
	'ctracker_footer_saveit' => 'Sprejmi ureditev Footer',
	'ctracker_footer_done' => 'Spremembe narejene pri Footer so bile uspešno shranjene!',

/*
* Maintenance Module in ACP
*/
	'ctracker_ma_unknown' => '<span class="text_orange">UNKNOWN</span>',
	'ctracker_ma_secure' => '<span class="text_green">SAFE</span>',
	'ctracker_ma_warning' => '<span class="text_red">CAUTION</span>',
	'ctracker_ma_active' => '<span class="text_green">ACTIVE</span>',
	'ctracker_ma_inactive' => '<span class="text_red">INACTIVE</span>',
	'ctracker_ma_ca' => '<span class="text_green">OK</span>',
	'ctracker_ma_ci' => '<span class="text_red">NOT SET</span>',
	'ctracker_ma_head' => 'vsebina in preverjanje sistema',
	'ctracker_ma_subhead' => 'ta sistem  avtomatsko preveri primere cTracker varnostnih modulov in funkcij, in prikaže namige kako optimizirati vaš sistem.',
	'ctracker_ma_systest' => 'avtomatsi sistemski test',
	'ctracker_ma_sectest' => 'Varnostni test',
	'ctracker_ma_maint' => 'servisne funkcije',
	'ctracker_ma_name_1' => 'crvi &amp; izkorišcen varnostni sistem',
	'ctracker_ma_name_2' => 'spremenljiva kontrolna enota',
	'ctracker_ma_name_3' => 'IP, Proxy &amp; uporabniški agent zašcitena enota',
	'ctracker_ma_name_4' => 'crvi hevrisitcna definicija paketa - število definicij: <b>%s</b>',
	'ctracker_ma_syshead_1' => 'varnostni modul',
	'ctracker_ma_syshead_2' => 'Stanje',
	'ctracker_ma_seccheck_1' => 'nadzorna tocka',
	'ctracker_ma_seccheck_2' => 'Verzija / Stanje',
	'ctracker_ma_seccheck_3' => 'Reference',
	'ctracker_ma_seccheck_4' => 'Stanje',
	'ctracker_ma_scheck_1' => 'PHP Verzija (<a href="http://www.php.net" target="_blank">Visit Website</a>)',
	'ctracker_ma_scheck_2' => '&raquo; PHP varni nacin',
	'ctracker_ma_scheck_3' => '&raquo; PHP globalno',
	'ctracker_ma_scheck_4' => 'Verzija (<a href="http://www.intero.si" target="_blank">Visit Website</a>)',
	'ctracker_ma_scheck_4a' => '&raquo; vizualna potrditev',
	'ctracker_ma_scheck_4b' => '&raquo; aktiviranje racuna',
	'ctracker_ma_scheck_5' => 'CBACK zidna razpoka (<a href="http://www.cback.de" target="_blank">Visit Website</a>)',
	'ctracker_ma_chmod' => '<b>CHMOD777 Status:</b> ',
	'ctracker_ma_desc_link' => 'izvedi zdaj',
	'ctracker_ma_desc1' => '<b>ocistiIP, Proxy &amp; tabla uporabniškiga agenta</b><br />izbriši <u>all</u> vstope z IP, Proxy &amp; table uporabniškega agenta.',
	'ctracker_ma_desc2' => '<b>tovarniške nastavitve: IP, Proxy &amp; uporabniški agent za blokiranje </b><br />razveljavi privzeto stanje na IP, Proxy &amp; podatkovna tabla uporabniškega agenta. tvoji filtri so izgubljeni, kokerkoli!',
	'ctracker_ma_desc3' => '<b>izbriši zgodovino vpisa</b><br />izbriši vse vstope iz zgodovine vpisa, brezobzirno pri uporabniku ali prilagodi število shranjevanj na uporabnika.',
	'ctracker_ma_desc4' => '<b>ocisti preverljive razpršene podatke </b><br />izbriši vse shranjene vstope z preverljive razpršene podatke.',
	'ctracker_ma_desc5' => '<b>ocisti tablo varnostnega odcitavanja</b><br />izbriši vse rezultate shranjene med varnostnimi podatki pregeldanih v podatkovni bazi.',
	'ctracker_ma_succ_main' => 'proces izvršen uspešen!',
	'ctracker_ma_err_main' => 'proces izvršen uspešen!',


/*
* Miserable User Module in ACP...
*/
	'ctracker_mu_subhead' => 'uporabnik oznacen kot "žalostni uporabnik" bo imel objave vidne samo zase in administratorju. to bo predpostavilo da se bodo kmalu utrudili ne odzivanju na njihove teme in  objave na zidu in bodo zapustili krov.<br /><br /><b>Note:</b> ta funkcija omogoca da objave izginejo iz teme. uporaba "citat" in "iskanje" bo pokazal te skrite objave"!',

	'ctracker_mu_select' => 'oznaci uporabnika kot nesrecen uporabnik',
	'ctracker_mu_find' => 'poišci uporabniško ime',
	'ctracker_mu_send' => 'vstavi uporabniško ime',
	'ctracker_mu_entr' => 'oznaci uporabniško ime',
	'ctracker_mu_uname' => 'vstavljeno uporabniško ime',
	'ctracker_mu_remove' => 'izbriši vstope',
	'ctracker_mu_no_defined' => 'ni oznacenih uporabnikov kot so "nesrecni uporabnik" do sedaj.',


/*
* Recovery feature in ACP
*/
	'ctracker_rec_head' => 'Obnovitev sistema',
	'ctracker_rec_subhead' => 'rezervna kopija  konfiguracij table na tvojem forumu ali lahko greš na zadnjo izbrano konfiguracijo. ce si aktiviral to funkcijo v glavnih nastavitvah zidne razpoke, potem bo podprto vsakic ko spreminjaš glavne nastavitve. (Pozor! to je <b>NOT</b> rezervna kopija vseh podatkovnih baz!)<br /><br />ko nisi v ACP potem ko si spreminjal nastavitve, lahko potem reaktiviraš zadnjo  uporabljeno konfiguracijo z nujno konzolo v zidni razpoki. prosim preberi komentarje v  <i>ctracker/emergency.php</i> za vec forumskih inštrukcij konfiguracije v nujnosti. prosim vedite, da je mora biti ta datoteka omogocena pred uporabo.<br /><br /><b>Pozor!</b> ta funkcija naj bi se uporabljala samo ce gre za resne težave!',
	'ctracker_rec_last_saved' => 'zadnja podpora konfiguracije tabele: <b>%s</b>',
	'ctracker_rec_never_saved' => 'konfiguracija tabele še ni bila podprta do sedaj.!',
	'ctracker_rec_backup' => '<span class="gen">podpora konfiguracije tabele</span>',
	'ctracker_rec_restore' => '<span class="gen">okrevanje zadnje konfiguracije tabele</span>',
	'ctracker_rec_succ' => '<span class="gen">proces podatkovne baze je bil izvršen uspešno.</span>',
	'ctracker_rec_pab' => '<span class="gen">okrevanje ni možno predno ne narediš uspešnega rezervnega podprtja</span>',
	)
);
?>