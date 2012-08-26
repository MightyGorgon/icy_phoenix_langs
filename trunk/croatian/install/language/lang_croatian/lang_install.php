<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ENCODING' => 'UTF-8',
	'DIRECTION' => 'ltr',
	'HEADER_LANG' => 'hr',
	'HEADER_LANG_XML' => 'hr',
	'LEFT' => 'lijevo',
	'RIGHT' => 'desno',

	'Welcome_install' => 'Instalacija Icy Phoenix-a',
	'Initial_config' => 'Konfiguracija',
	'DB_config' => 'Konfiguracija Baze',
	'Admin_config' => 'Admin Konfiguracija',
	'continue_upgrade' => 'Nakon što ste preuzeli svoju konfiguracijsku datoteku na lokalnom računalu možda \'Nastavak \ ažuriranje \' gumb ispod da se krene naprijed s nadogradnje. Molimo pričekajte učitati konfiguracijsku datoteku sve dok se ne završi postupak nadogradnje.',
	'upgrade_submit' => 'Nastavak ažuriranje',

	'Installer_Error' => 'Došlo je do pogreške tijekom instalacije',
	'Previous_Install' => 'Prethodna instalacija je otkrivena',
	'Install_db_error' => 'Došlo je do pogreške kod pokušaja ažuriranja baze podataka',

	'Re_install' => 'Vaša prethodna instalacija je još uvijek aktivana. <br /> <br /> Ako želite ponovno instalirati Icy Phoenix trebate kliknuti gumb Da u nastavku. Uzmite u obzir da će to uništiti sve postojeće kopije i podataka ne će biti!Administrator korisničko ime i zaporku koje ste koristili za prijavu će se ponovno stvoriti nakon ponovne instalacije i postavke neće biti zadržane. <br /> <br /> Dobro razmislite prije nego što pritisnete Da!',

	'Inst_Step_0' => 'Zahvaljujemo na odabiru Icy Phoenix-a. Ovaj čarobnjak će Vas voditi kroz proces instalacije. <br /> <span Class="text_red"> Imajte na umu da trebate kopirati sve icy Phoenix datoteke na poslužitelj i da baze podataka na koju instalirate treba postojati. </ Span >',

	'Inst_Step_1' => 'Kako bi dovršili ovu instalaciju molimo Vas da ispunite tražene podatke u nastavku. <br /> <span Class="text_red"> Imajte na umu da je baza podataka koju ćete instalirati treba već postojati (Setup postupak ne može je stvoriti). </ span>',

	'Start_Install' => 'Započni Instalaciju',
	'Start_Install_Anyway' => 'Započni Instalaciju Opet',
	'Finish_Install' => 'Završi Instalaciju',
	'Continue_Install' => 'Nastavi Instalaciju',

	'CHMOD_Files' => 'Dozvole Datoteka &amp; Mapa ',
	'CHMOD_OK' => 'Ok',
	'CHMOD_Error' => 'Greška',
	'CHMOD_777' => 'CHMOD 777',
	'CHMOD_666' => 'CHMOD 666',
	'CHMOD_Files_Explain_Error' => 'Neke pogreške tijekom potvrde chmod dozvola. Molimo provjerite je li sve datoteke / mape iz instalacijskog paketa postoje i imaju točane chmod dozvole, inače Icy Phoenix ne može raditi ispravno.',
	'Confirm_Install_anyway' => ' Ako ste sve dobro provjerili možete nastaviti tako da kliknete na "<i>Započni Instalaciju Opet</i>".',
	'CHMOD_Files_Explain_Ok' => 'Sve CHMOD dozvole čine se da su u redu.',
	'Can_Install' => 'Možete nastaviti na sljedeći korak.',
	'CHMOD_File_Exists' => 'Ove datoteke / mape postoje i njezina dopuštenja se primjenjuju ispravno.',
	'CHMOD_File_NotExists' => 'Ova datoteka / mapa ne postoji, molimo Vas da ga uploadate i primijenite ispravane chmod dozvole.',
	'CHMOD_File_Exists_Read_Only' => 'Ove datoteke / mape postoje, ali njihove dozvole ne mogu se mijenjati automatski, molimo Vas da primjenite CHMOD ručno, a zatim kliknite na "<i>Započni Instalaciju Opet</i>".',
	'CHMOD_File_UnknownError' => 'Nepoznata greška prilikom provjere ovih datoteke / mape. Molimo provjerite da sve datoteke / mape postoje na poslužitelju i da imaju ispravne chmod dozvole, a zatim kliknite na "<i>Započni Instalaciju Opet</i>".',
	'CHMOD_Apply' => 'Unesite chmod dozvole Icy Phoenix datotekama i mapama preko PHP-a',
	'CHMOD_Apply_Warn' => 'Imajte na umu da neki poslužitelji ne podržavaju CHMOD putem PHP-a, bit će potrebno ručno postavljanje CHMOD-a!!',

	'Default_lang' => 'Zadni Jezik',
	'Select_lang' => 'Jezik',
	'DB_Host' => 'Database Server Hostname / DSN',
	'DB_Name' => 'Ime vaše baze',
	'DB_Username' => 'Korisničko ime baze (Username)',
	'DB_Password' => 'Lozinka Baze (Pasword)',
	'Database' => 'Vaša Baza',
	'Install_lang' => 'Odaberite jezik za instalaciju',
	'dbms' => 'Vrsta baze podataka',
	'Table_Prefix' => 'Prefiks za tablice u bazi',
	'Admin_Username' => 'Korisničko ime Administratora Username',
	'Admin_Password' => 'Lozinka Administratora',
	'Admin_Password_confirm' => 'Lozinka Administratora [ Potvrdi ]',

	'Inst_Step_2' => 'Vaše admin korisničko ime je stvoreno.<br />U ovom trenutku da biste dovršili postupak instalacije trebate <span class="text_red">ukloniti <u>install</u> mapu</span>. Na kraju trebate kliknuti na <b>Završi Instalaciju </b> , a zatim pristupiti ACP-u (Admin Control Panel) i CMS-u (Content Management System) gdje možete urediti sve Icy Phoenix postavke i preference.<br />U ACP možete podesiti osnovne postavke i postavke za cijeli sajt, (stilovi, jezici, vrijeme, forumi, download, korisnici, album, itd..) dok u CMS-u možete konfigurirati opcije u vezi s web stranice (definirati dozvole, dodavati blokove, stvoriti nove stranice, stvoriti novi izbornik, itd..). Također možete konfigurirati <b>.htaccess</b> i <b>lang_main_settings.php</b> (za svaki instalirani jezik) za fino podešavanje nekih druihe postavka, kao što su izvješćivanje o pogreškama, URL ispravit, ključnim riječima dobrodošlice poruku, charset i tako dalje.<br /><br />Zahvaljujemo vam na odabiru Icy Phoenix-a i zapamtite da povremeno napravite sigurnosnu kopiju vaše baze .<br /><br />',

	'Unwriteable_config' => 'Vaš config datoteku se nemože prepisati.Kopija konfiguracijske datoteke će se skinuti na vaše računalo kada kliknete na gumb ispod. Trebali bi dodati ovu datoteku u isti direktorij gdje je Icy Phoenix. Kada se to učinite trebate izbrisati instalacijski folder i prijavite se pomoću administratorskog ime i lozinku koje ste unijeli na prethodnu obliku i posjetiti (ACP) admin kontrolni centar, (link će se pojaviti na dnu svakog zaslona. Nakon što se prijavite u ACP-u  provjerite opće konfiguracije. Zahvaljujemo na odabiru Icy Phoenix-a.',
	'Download_config' => 'Preuzmi Config',

	'ftp_choose' => 'Odaberite metodu za preuzimanje',
	'ftp_option' => '<br />Budući da su FTP ekstenzije omogućene u ovoj verziji PHP-u također postoji   mogućnost da automatski FTP config datoteku postaviti na mjesto.',
	'ftp_instructs' => 'Odabrali ste FTP datoteku na račun koji sadrži Icy Phoenix postaviti automatski. Molimo unesite podatke u nastavku kako bi se taj proces odvio. Imajte na umu da FTP put bi trebao biti točan put preko FTP-a gdje je vaš Icy Phoenix ako ste ga FTPing-irali koristeći bilo koji normalan klijent.',
	'ftp_info' => 'Unesite Vaše FTP podatke',
	'Attempt_ftp' => 'Pokušaj FTP config datoteku na svoje mjesto',
	'Send_file' => 'Pošalji meni datoteku i ja cu je postaviti ručno putm FTP-a',
	'ftp_path' => 'FTP putanja do Icy Phoenix-a',
	'ftp_username' => 'Vaše FTP Korisničko ime',
	'ftp_password' => 'Vaša FTP Lozinka',
	'Transfer_config' => 'Započni prijenos',
	'NoFTP_config' => 'Pokušaj da se FTP config datoteku postavi na svoje mjesto nije uspijelo. Molimo preuzmite config datoteku i postavite je ručno putm FTP-a.',

	'Install' => 'Instaliraj',
	'Upgrade' => 'Nadogradi',

	'Install_Method' => 'Odaberite svoj ​​način instalacije',
	'Install_No_Ext' => 'PHP konfiguraciju na vašem poslužitelju ne podržava vrstu baze podataka koju ste odabrali',
	'Install_No_PCRE' => 'Icy Phoenix zahtijeva Perl kompatibilan regularni modul za PHP koji vaš PHP konfiguracija se ne pojavljuje kako bi podržao!',

	'Server_name' => 'Ime Domene',
	'Script_path' => 'Putanja Skripte',
	'Server_port' => 'Server Port',
	'Admin_email' => 'Admin Email Adresa',

	'IP_Utilities' => 'Icy Phoenix Opcije',
	'Upgrade_Options' => 'Opcija Nadogradnje',
	'Upgrade_From' => 'Nadogradi na najnoviji Icy Phoenix',
	'Upgrade_From_Version' => 'sa verzije',
	'Upgrade_From_phpBB' => 'sa phpBB ili bilo koja starija verzija phpBB XS',
	'Upgrade_Higher' => 'ili više',

	'IcyPhoenix' => 'Icy Phoenix',
	'phpBB' => 'phpBB',
	'Information' => 'Informacija',
	'VersionInformation' => 'Server i Info o verziji',
	'NotInstalled' => 'Nije Instalirano',
	'Current_IP_Version' => 'Instalirana Icy Phoenix verzija',
	'Current_phpBB_Version' => 'Instalirana phpBB verzija',
	'Latest_Release' => 'Zadnje Izdanje',
	'Version_UpToDate' => 'Aktualna verzija',
	'Version_NotUpdated' => 'Neažurirana verzija',
	'UpdateInProgress' => 'U tijeku je ažuriranje',
	'CleaningInProgress' => 'Čiščenje datoteka u tijeku',
	'UpdateCompleted' => 'Nadogradnja Završena!',
	'UpdateCompleted_phpBB' => 'phpBB ažuriranje završeno, sada možete nadograditi na Icy Phoenix!',
	'UpdateInProgress_Schema' => 'Ažuriranje šema baze podataka',
	'UpdateInProgress_Data' => 'Updating data',
	'Optimizing_Tables' => 'Optimiziranje tablica',
	'Progress' => 'Napredak',
	'Done' => 'Dovršeno',
	'NotDone' => 'Nije Dovršeno ',
	'Result' => 'Rezultat',
	'Error' => 'Greška',
	'Successful' => 'Uspiješno',
	'NoErrors' => 'Nema Grešaka',
	'NoUpdate' => 'Nije potrebno updejtat',
	'phpBB_NotDetected' => 'phpBB nije otkrivena ,skripta ne može nastaviti. Molimo provjerite da li stvarno koristite phpBB.',
	'Update_Errors' => 'Neki upiti nisu uspieli, izjave i pogreške su u popisu u nastavku',

	'DBUpdate_Success' => 'Sljedeći SQL-i su uspješno izvršeni',
	'DBUpdate_Errors' => 'Sljedeći SQL-i su neuspješno izvršeni',

	'FileWriting' => 'Zapisivanje Datoteka',
	'FileCreation_OK' => 'Ćini se da vaš server podržava stvaranje i uređivanje datoteka.',
	'FileCreation_OK_Explain' => 'Skripta će pokušati automatski stvoriti / urediti sve potrebne datoteke.',
	'FileCreation_ERROR' => 'Vaš server ne podržava stvaranje i uređivanje datoteka.',
	'FileCreation_ERROR_Explain' => 'Skripta ne može stvoriti / uređivati ​​datoteke za vas automatski. Nažalost, morat ćete to učiniti sami.',

	'IcyPhoenix_Version_UpToDate' => 'Vaša Icy Phoenix verzija je aktualna',
	'IcyPhoenix_Version_NotUpToDate' => 'Vaša Icy Phoenix verzija nije aktualna',
	'IcyPhoenix_Version_NotInstalled' => 'Icy Phoenix nije instaliran',
	'phpBB_Version_UpToDate' => 'Vaš phpBB verzija je aktualna',
	'phpBB_Version_NotUpToDate' => 'Vaš phpBB verzija nije aktualna',
	'ClickUpdate' => 'Molimo kliknite %ovdje%s za nadogradnju!',
	'ClickReturn' => 'Molimo kliknite %ovdje%s za povratak na menu!',

	'Clean_OldFiles_Explain' => 'Uklonite sve nepotrebne Icy Phoenix (datoteke još uvijek na poslužitelju iz starije verzije)',
	'ActionUndone' => 'Imajte na umu da se ova akcija ne može poništiti. Pobrinite se da imate bekap!!!',
	'ClickToClean' => 'Molimo kliknite na link ispod za nastavak',
	'FileDeletion_OK' => 'Datoteka je uspješno obrisana',
	'FileDeletion_ERROR' => 'Datoteka se ne može izbrisati',
	'FileDeletion_NF' => 'Datoteke se nemogu naći',
	'FilesDeletion_OK' => 'Datoteke izbrisane uspješno',
	'FilesDeletion_NO' => 'Datoteke nisu izbrisane',
	'FilesDeletion_ERROR' => 'Datoteke se nemogu automatski izbrisati',
	'FilesDeletion_NF' => 'Datoteke se nemogu naći',
	'FilesDeletion_None' => 'Nijedan',
	'FileDeletion_Complete' => 'Čiščenje datoteka završeno!',

	'Spoiler' => 'Spoiler',
	'Show' => 'Prikaži',
	'Hide' => 'Sakrij',
	'None' => 'Nijedan',
	'Start' => 'Započni',

	'Upgrade_Steps' => 'Koraci nadogradnje',
	'MakeFullBackup' => 'Napravite puni bekap (datoteke i DB) i držite ga na sigurnom mjestu!',
	'Update_phpBB' => 'Nadogradite phpBB DB (ako je potrebno)',
	'Remove_BBCodeUID' => 'Procesirajte sve postove: uklonie BBCode UID, zamijenite tekst, uklonite stare BBCodes',
	'Merge_PostsTables' => 'Spojite tablice postova',
	'Update_IcyPhoenix' => 'Update Icy Phoenix DB',
	'Upload_NewFiles' => 'Uplodajte sve nove datoteke',
	'Adjust_Config' => 'Ažurirajte konstante u config.php (radi samo ako su datoteke zapisive)',
	'Adjust_CMSPages' => 'Ažurirajte konstante u CMS stranicama (radi samo ako su datoteke zapisive)',
	'MoveImagesAlbum' => 'Premjestite slike albuma (opcija: samo ako želite koristiti objavljene slike u podmapama)',
	'MoveImages' => 'Premjestite postavljene slike (opcija: samo ako želite koristiti objavljene slike u podmapama)',
	'Clean_OldFiles' => 'Očistite stare datoteke',

	'ColorsLegend' => 'Legenda Boja',
	'ColorsLegendRed' => 'Crvena: ova akcija je potrebna i mora biti izvedena ručno',
	'ColorsLegendOrange' => 'Narančasta: ova akcija je potrebna i skripta je može obaviti automatski (ako su ispunjeni uvjeti)',
	'ColorsLegendGray' => 'Siva: ova akcija možda neće biti potrebna, a može se izvoditi automatski',
	'ColorsLegendBlue' => 'Plava: ova akcija je opcionalana i može se izvoditi automatski (iako može zahtijevati promjene na nekim datotekama)',
	'ColorsLegendGreen' => 'Zelena: ova akcija je predložena, a može se izvoditi automatski (ako su ispunjeni uvjeti)',

	'FixBirthdays' => 'Ispravi Rođendane (Nadogradnja sa Icy Phoenix-a 1.2 ili niže)',
	'FixBirthdaysExplain' => 'Ova značajka će vam omogućiti da podesite sve rođendane za kompatibilnost s novim značajkama. Vi ne trebate pokrenuti ovu značajku ako nadogradnju radite iz Icy Phoenix-a 1.3 ili noviji.',
	'FixingBirthdaysInProgress' => 'Ispravljanje rođendana u tijeku',
	'FixingBirthdaysInProgressRedirect' => 'Vi ćete biti automatski preusmjereni na sljedeći korak za tri sekunde',
	'FixingBirthdaysInProgressRedirectClick' => 'Ako niste automatski preusmjereni u roku od tri sekunde možete kliknuti %sOvdje%s',
	'FixingBirthdaysFrom' => 'Izmjena rođendana koracima od %s do %s',
	'FixingBirthdaysTotal' => '%s rođendani u %s izmjenjeni nadalje',
	'FixingBirthdaysModified' => 'Rođendani ispravljeni',
	'FixingBirthdaysComplete' => 'Završeno ispravljanje rođendana',
	'BirthdaysPerStep' => 'Broj rođendana po koracima',

	'FixConstantsInFiles' => 'Ispravi Konstante (Nadogradnja sa Icy Phoenix-a 1.2 ili niže)',
	'FixConstantsInFilesExplain' => 'Popravi sve datoteke s novim Icy Phoenix konstantama. Vi ne trebate pokrenuti ovu značajku ako nadogradnju radite iz Icy Phoenix-a 1.3 ili noviji.',
	'FixingInProgress' => 'Ispravljanje datoteka u tijeku',
	'FixingComplete' => 'Ispravljanje datoteka završeno',
	'ClickToFix' => 'Molimo kliknite na jedan od linka ispod za nastavak',
	'FixAllFiles' => 'Popravi sve datoteke (oba CMS stranice i config.php)',
	'FixCMSPages' => 'Popravi samo CMS stranice',
	'Fixed' => 'Ispravljeno',
	'NotFixed' => 'Nije Ispravljeno',
	'FilesProcessed' => 'Datoteke obrađene',

	'FixForums' => 'Pretvori Forume (Nadogradnja sa Icy Phoenix-a 1.2 ili niže)',
	'FixForumsExplain' => 'Ova značajka će pretvoriti forume i kategorije u novi format. Vi ne trebate pokrenuti ovu značajku ako nadogradnju radite iz Icy Phoenix-a 1.3 ili noviji.',
	'FixingForumsInProgress' => 'Pretvaranje u tijeku...',
	'FixingForumsComplete' => 'Završeno!',

	'FixPosts' => 'Ispravi Postove (Nadogradnja sa Icy Phoenix-a 1.2 ili niže)',
	'FixPosts_Explain' => 'Ova značajka će vam omogućiti da popravite sve postove u vašim forumima. Možete koristiti ovu značajku: pronaći i zamijeniti tekst u postovima, uklonite sve BBCode UID, automatski podesiti adresu objavljenih slika. Vi ne trebate pokrenuti ovu značajku ako nadogradnju radite iz Icy Phoenix-a 1.3 ili noviji.',
	'FixPosts_IP2' => 'Ispravi Postove (Nadogradnja sa Icy Phoenix-a 1.3)',
	'FixPosts_IP2_Explain' => 'Ova značajka će vam omogućiti da podesite put učitanih slika, jer put u Icy Phoenix-u 2.0 se razlikuje od posljednjih verzija Icy Phoenix. Možete koristiti ovu značajku i za pronaći i zamijeniti bilo koji tekst u svojim postovima (ostavljajući polje pretraživanja prazno zamjena neće biti izvedena i samo putanja slika će se prilagoditi).',
	'FixingPostsInProgress' => 'Ispravljanje postova u tijeku',
	'FixingPostsInProgressRedirect' => 'Vi ćete biti automatski preusmjereni na sljedeći korak za tri sekunde',
	'FixingPostsInProgressRedirectClick' => 'Ako niste automatski preusmjereni u roku od tri sekunde možete kliknuti %sOvdje%s',
	'FixingPostsFrom' => 'Izmjena postova koracima od %s do %s',
	'FixingPostsTotal' => '%s postovi od %s izmjenjeni nadalje',
	'FixingPostsModified' => ' Postovi ispravljeni',
	'FixingPostsComplete' => 'Završeno ispravljanje postova',
	'SearchWhat' => 'Traži što',
	'ReplaceWith' => 'Zamjeni sa',
	'PostsPerStep' => 'Broj postova po koracima',
	'StartFrom' => 'Počnite od posta',
	'RemoveBBCodeUID' => 'Uklonite BBCode UID (uzmite od postova u tablici)',
	'RemoveBBCodeUID_Guess' => 'Pokušajte pogoditi i ukloniti BBCode UID',
	'FixPostedImagesPaths' => 'Popravi sve objavljene putanje slikea (podešavanje putanje, da bi se odrazile korisničke podmape)',

	'FixSignatures' => 'Ispravi Potpise (Nadogradnja sa Icy Phoenix-a 1.2 ili niže)',
	'FixSignatures_Explain' => 'Ova značajka će vam omogućiti da popravite sve potpise korisnika. Možete koristiti ovu značajku: pronaći i zamijeniti tekst u potpisima, uklonite sve BBCode UID, automatski podesiti adresu objavljenih slika. Vi ne trebate pokrenuti ovu značajku ako nadogradnju radite iz Icy Phoenix-a 1.3 ili noviji.',
	'FixSignatures_IP2' => 'Ispravi Potpise (Nadogradnja sa Icy Phoenix-a 1.3)',
	'FixSignatures_IP2_Explain' => 'Ova značajka će vam omogućiti da podesite put učitanih slika, jer put u Icy Phoenix-u 2.0 se razlikuje od posljednjih verzija Icy Phoenix. Možete koristiti ovu značajku i za pronaći i zamijeniti bilo koji tekst u potpisima (ostavljajući polje pretraživanja prazno zamjena neće biti izvedena i samo putanja slika će se prilagoditi).',
	'FixingSignaturesInProgress' => 'Ispravljanje potpisa u tijeku',
	'FixingSignaturesFrom' => 'Izmjena potpisa koracima od %s do %s',
	'FixingSignaturesTotal' => '%s potpisi od %s izmjenjeni nadalje',
	'FixingSignaturesModified' => ' potpisi ispravljeni',
	'FixingSignaturesComplete' => 'Završeno ispravljanje potpisa',
	'SignaturesPerStep' => 'Broj potpisa po koracima',
	'StartFromSignature' => 'Počnite od potpisa',

	'FixPics' => 'Ispravi putanju albuma slika (Nadogradnja sa Icy Phoenix-a 1.2 ili niže)',
	'FixPicsExplain' => 'Ova značajka će premjestit sve slike albuma iz glavne mape na korisnike podmape, a također će ažurirati bazu podataka s novim stazama. Vi ne trebate pokrenuti ovu značajku ako nadogradnju radite iz Icy Phoenix-a 1.3 ili noviji.',
	'FixingPicsInProgress' => 'Ispravljanje slika u tijeku',
	'FixingPicsInProgressRedirect' => 'Vi ćete biti automatski preusmjereni na sljedeći korak za tri sekunde',
	'FixingPicsInProgressRedirectClick' => 'Ako niste automatski preusmjereni u roku od tri sekunde možete kliknuti %sOvdje%s',
	'FixingPicsFrom' => 'Izmjena slika koracima od %s do %s',
	'FixingPicsTotal' => '%s slike od %s izmjenjeni nadalje',
	'FixingPicsModified' => ' slike ispravljene',
	'FixingPicsComplete' => 'Završeno ispravljanje slika',
	'PicStartFrom' => 'Počnite od slike',
	'PicsPerStep' => 'Broj slike po koracima',

	'RenMovePics' => 'Preimenuj i premjesti postavljene slike (Nadogradnja sa Icy Phoenix-a 1.2 ili niže)',
	'RenMovePicsExplain' => 'Ova značajka će preimenovati i premjestiti sve postavljene slike iz glavne mape na korisnike podmape: onda ćete morati ažurirati tablicu postova pomoću <i> Popravi postove </ i> funkcijom za podešavanje svih putanja u postovima. Vi ne trebate pokrenuti ovu značajku ako nadogradnju radite iz Icy Phoenix-a 1.3 ili noviji.',

	'AddPostedPicsDB' => 'Dodaj postavljene slike u DB (Nadogradnja sa Icy Phoenix-a 1.3 ili noviji)',
	'AddPostedPicsDBExplain' => 'Ova značajka će uvesti sve poslane slike u DB.',

	'COLLIDING_CLEAN_USERNAME' => '<strong>%s</strong> je čisto korisničko ime za:',
	'COLLIDING_USERNAMES_FOUND' => 'Sudar korisničkih imena su pronađeni na vašem prijašnjem sajtu. Kako biste dovršili pretvorbu izbrišite ili preimenujte imena tih korisnika, tako da postoji samo jedan korisnik na svom prijašnjem sajtu sa čistim imenom.',
	'COLLIDING_USER' => '&raquo; korisnikov id: <strong>%d</strong> korisničko ime: <strong>%s</strong> (%d posts)',

	)
);

$lang['BBC_IP_CREDITS_STATIC'] = '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="./style/icy_phoenix_small.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #dd2222;"><b>Mighty Gorgon</b></span>&nbsp;<i>(Luca Libralato)</i><br />
<b><i>Project Manager And Main Developer</i></b><br />
<br />
<br />
<span style="color: #dd2222;"><b>The Steffen</b></span><br />
<b><i>Site Administrator</i></b><br />
<br />
<br />
<span style="color: #228822;"><b>Joshua203</b></span><br />
<b><i>Staff Leader</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>KasLimon</b></span><br />
<b><i>Junior Developer</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>Informpro</b></span><br />
<b><i>Junior Developer</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>jhl</b></span><br />
<b><i>Junior Developer</i></b><br />
<br />
<br />
<b><i>Valued Contributors</i></b><br />
<span style="color: #dd2222;"><b>Andrea75</b></span><br />
<span style="color: #228822;"><b>Artie</b></span><br />
<span style="color: #ff5500;"><b>Bicet</b></span>&nbsp;<i>(phpBB XS Developer)</i><br />
<span style="color: #880088;"><b>brandsrus</b></span><br />
<span style="color: #dd2222;"><b>buldo</b></span><br />
<span style="color: #880088;"><b>casimedicos</b></span><br />
<span style="color: #880088;"><b>Chaotic</b></span><br />
<span style="color: #ff5500;"><b>CyberAlien</b></span>&nbsp;<i>(Many Contributions)</i><br />
<span style="color: #880088;"><b>difus</b></span><br />
<span style="color: #228822;"><b>DWho</b></span><br />
<span style="color: #880088;"><b>fracs</b></span><br />
<span style="color: #880088;"><b>ganesh</b></span><br />
<span style="color: #880088;"><b>Hans</b></span><br />
<span style="color: #ff5500;"><b>hpl</b></span>&nbsp;<i>(Junior Developer)</i><br />
<span style="color: #880088;"><b>JANU1535</b></span><br />
<span style="color: #880088;"><b>jz</b></span><br />
<span style="color: #aaff00;"><b>KugeLSichA</b></span><br />
<span style="color: #0000bb;"><b>Limun</b></span><br />
<span style="color: #880088;"><b>Lopalong</b></span><br />
<span style="color: #880088;"><b>moreteavicar</b></span><br />
<span style="color: #880088;"><b>mort</b></span><br />
<span style="color: #880088;"><b>novice programmer</b></span><br />
<span style="color: #dd2222;"><b>ThE KuKa</b></span><br />
<span style="color: #880088;"><b>Tom</b></span><br />
<span style="color: #228822;"><b>TopoMotoV3X</b></span><br />
<span style="color: #aaff00;"><b>TuningBEB2008</b></span><br />
<span style="color: #880088;"><b>z3d0</b></span><br />
<span style="color: #880088;"><b>Zuker</b></span><br />
<br />
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

?>