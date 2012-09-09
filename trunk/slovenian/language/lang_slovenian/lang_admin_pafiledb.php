<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin_pafiledb.php 34 2009-05-07 22:45:10Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(

// Categories

	'Cat_manage_title' => 'Upravljanje kategorij',
	'File_manage_title' => 'Upravljanje datotek',
	'All_files' => 'Vse datoteke',
	'Approved_files' => 'Neodobrene datoteke',
	'Broken_files' => 'Pokvarjene datoteke',
	'File_cat' => 'Datoteke v kategoriji',
	'Maintenance' => 'Vzdr�evanje datotek',
	'Approve' => 'Odobreno',
	'Unapprove' => 'Neodobreno',
	'File_mode' => 'Ogled',
	'Approve_selected' => 'Odobri izbrano',
	'Unapprove_selected' => 'Neodobri izbrano',
	'Delete_selected' => 'Izbri�i izbrano',
	'No_file' => 'TUkaj ni datotek',
	'Acat' => 'Kategorija: Dodaj',
	'Ecat' => 'Kategorija: Uredi',
	'Dcat' => 'Kategorija: Izbri�i',
	'Rcat' => 'Kategorija: preuredi',
	'Cat_Permissions' => 'Kategorija dovoljenj',
	'User_Permissions' => 'Uporabni�ka dovoljenja',
	'Group_Permissions' => 'Skupinska dovoljenja',
	'User_Global_Permissions' => 'Uporabni�ka splo�na dovoljenja',
	'Group_Global_Permissions' => 'Skupinska splo�na dovoljenja',
	'Acattitle' => 'Dodaj kategorijo',
	'Ecattitle' => 'Uredi kategorijo',
	'Dcattitle' => 'Izbri�i kategorijo',
	'Rcattitle' => 'Preuredi kategorijo',
	'Catexplain' => 'Lahko uporabite Uprabitelja kategorija za dodajanje, urejanje, izbris ali preurejanje kategorijr. V primeru dodajanja podatkov v zbirko podatkov, morate Ustvariti najmanj eno kategorijo. You can select a link below to manage your categories.',
	'Rcatexplain' => 'Lahko preuredite kategorije da zamenjate polo�aj kje so prikazane na glavni strani. Da preuredite kategorije, spremenite �tevila po katerem vrstnem redu naj bodo prikazane. 1 bo prikazana najprej, 2 bo prikazana druga, itd. To ne vpliva na podkategorije.',
	'Catadded' => 'Nova kategorija je bila uspe�no dodana',
	'Catname' => 'Ime kategorije',
	'Catnameinfo' => 'To bo postalo ime kategorije.',
	'Catdesc' => 'Opis kategorije',
	'Catdescinfo' => 'To je opis datotek v kategoriji',
	'Catparent' => 'Mati�na kategorija',
	'Catparentinfo' => '�e �elite, da je ta kategorija podkategorija, izberite kategorijo katero �elite da bo podkategorija.',
	'Allow_file' => 'Dovoli dodajanje datotek',
	'Allow_file_info' => '�e ne dovolite dodajati datotek tej kategoriji bo ta kategorija na vi�ji ravni, zaznana kot podkategorija, tako kot na tem forumu.',
	'None' => 'Ni�',
	'Catedited' => 'Izbrana kategorija je bila uspe�no spremenjena',
	'Delfiles' => 'Kaj �elite storiti z datotekami v tej kategoriji?',
	'Do_cat' => 'Kaj �elite narediti s podkategorijo?',
	'Move_to' => 'Premakni v',
	'Catsdeleted' => 'Izbrane kategorije so bile uspe�no izbrisane',
	'Cdelerror' => 'Niste izbrali kategorij za izbris',
	'Rcatdone' => 'Kategorije so bile uspe�no preurejene',

//Categories Permission
	'View' => 'Ogled',
	'Read' => 'Beri',
	'View_file' => 'Ogled datoteke',
// MX Addon
	'Delete_file' => 'Izbris datoteke',
	'Edit_file' => 'Urejanje datoteke',
// End
	'Upload' => 'Nalo�i datoteko',
	'Download_file' => 'Prenesi datoteko',
	'Rate' => 'Ocena',
	'View_comment' => 'Ogled komentarjev',
	'Post_comment' => 'Objava komentarjev',
	'Edit_comment' => 'Urejanje komentarjev (n/a)',
	'Delete_comment' => 'Izbris komentarjev',
	'Category_auth_updated' => 'Dovoljenja v kategoriji so bila posodobljena',
	'Click_return_catauth' => 'Klikni %sTukaj%s Za vrnitev na dovoljenja kategorije',
	'Auth_Control_Category' => 'Kategorija nadzora dovoljenj',
	'Category_auth_explain' => 'Spremeni ravni odobritve vsake kategorije. Ne pozabite, da spreminjanje nivoja dovoljenj kategorije, ki bo vplivala na katerih lahko uporabniki izvajajo razli�ne funkcije znotraj nje.',
	'Select_a_Category' => 'Izberi kategorijo',
	'Look_up_Category' => 'Ogled kategorije',
	'Category' => 'Kategorija',
	'Auth_Control_Category' => 'Kategorija nadzora dovoljenj',

	'Category_ALL' => 'ALL',
	'Category_REG' => 'REG',
	'Category_PRIVATE' => 'PRIVATE',
	'Category_MOD' => 'MOD',
	'Category_ADMIN' => 'ADMIN',

// Configuration
	'Settings' => 'Konfiguracija',
	'Settingstitle' => 'Prenos konfiguracije',
	'Settingsexplain' => 'Priredite vse splo�ne nastavitve prenosa.',
	'Dbname' => 'Ime baze podatkov',
	'Dbnameinfo' => 'To je ime baze podatkov, kot naprimer \'Download Index\'',
	'Sitename' => 'Ime spletne strani',
	'Sitenameinfo' => 'To je ime spletne strani za navigacijski meni, kot naprimer \'Home\'',
	'Dburl' => 'Povezava do baze podatkov',
	'Dburlinfo' => 'To je povezava do mape kjer je baza podatkov name��ena',
	'Hpurl' => 'Povezava do doma�e strani',
	'Hpurlinfo' => 'To je povezava do portala ali doma�e strani',
	'Topnum' => 'Najvi�ja �tevilka',
	'Topnuminfo' => 'To je koliko datotek bo prikazanih na vrhu X seznama prenosov',
	'Nfdays' => '�tevilo dni novega prenosa',
	'Nfdaysinfo' => 'Koliko dni bo nova datoteka prikazana z oznako \'New file\' . �e je to nastavljeno na 5, potem bodo vse datoteke nalo�ene zadnjih 5 dni imele oznako \'New File\' ',
	'Showva' => 'Poka�i \'View All Files\'',
	'Showvainfo' => 'Izberite, ali �elite imeti \'View All Files\' kategorijo prikazana z drugimi kategorijami na glavni strani',
	'Php_template' => 'PHP v predlogi',
	'Php_template_info' => 'To bo omogo�ilo, da uporabljate PHP neposredno v predlogi datoteke',
	'Dbdl' => 'Onemogo�i prenose',
	'Dbdlinfo' => 'To bo onemogo�ilo prena�anje datotek uporabnikom. To je dobra izbira za uporabo pri pripravi sprememb v zbirki podatkov. Samo Skrbniki bodo lahko videli zbirko podatkov',
	'Isdisabled' => 'Prenos trenutno ni na voljo, poskusite znova pozneje.',
	'Com_settings' => 'Komentar nastavitve',
	'Com_allowh' => 'Dovoli HTML',
	'Com_allowb' => 'Dovoli BBCode',
	'Com_allows' => 'Dovoli Smileys',
	'Com_allowl' => 'Dovoli Links',
	'Com_messagel' => 'Privzeto \'No Links\' Sporo�ilo',
	'Com_messagel_info' => '�e so povezave niso dovoljene, bo prikazano kot besedilo',
	'Com_allowi' => 'Dovoli slike',
	'Com_messagei' => 'Privzeto \'No Images\' Sporo�ilo',
	'Com_messagei_info' => '�e so slike niso dovoljene, bo prikazano kot besedilo',
	'Max_char' => 'Najve�je �tevilo znakov',
	'Max_char_info' => '�e nekdo komentira in objava presega dovoljeno �tevilo znakov, se prika�e poro�ilo o napaki (Omejiti komentar).',
	'Settings_changed' => 'Va�e nastavitve so bile uspe�no posodobljene',
	'File_per_page' => '�tevilo datotek na stran',
	'File_per_page_info' => 'Nastavi �tevilo datotek na stran, �e pustite prazno bo �tevilo datotek na stran 20.',
	'Hotlink_prevent' => 'Prepre�evanje vro�ih povezav',
	'Hotlinl_prevent_info' => 'Nastavite na Yes �e ne �elite vro�ih povezav na datoteke',
	'Hotlink_allowed' => 'Dovoljeni domene za hotlink',
	'Hotlink_allowed_info' => 'Dovoljeni domene za hotlink (lo�ena z vejico), na primer, www.phpbb.com, www.icyphoenix.com',
	'Default_sort_method' => 'Privzeti na�in razvr��anja',
	'Default_sort_order' => 'Privzeti vrstni red',
	'Max_filesize' => 'Najve�ja velikost datoteke',
	'Max_filesize_explain' => 'Najve�ja Velikost datoteke. Vrednost 0 pomeni \'neomejeno\'. Ta nastavitev je omejena s va�imi nastavitvami serverja. Na primer, �e va�a PHP konfiguracija omogo�a samo najve� of 2 MB nalo�enih datotek, to ne more biti prepisana z Mod-om.',
	'Upload_directory' => 'Mapa za nalo�ene datoteke',
	'Upload_directory_explain' => 'Vnesite relativno pot iz va�ega icyphoenix installation v datoteke za nalaganje map. Naprimer, vnesite \'downloads/\' je �e va� icyphoenix Installation lociran na http://www.yourdomain.com/icyphoenix in je priloga nalo�ena mapa ki se nahaja na http://www.yourdomain.com/icyphoenix/downloads.',
	'Screenshots_directory' => 'Mapa z zaslonskimi slikami',
	'Screenshots_directory_explain' => 'Vnesite relativno pot iz va�ega icyphoenix installation v mapo kjer so zaslonske slike . Naprimer, vnesite \'files/screenshots/\' �e je va� icyphoenix Installation lociran na http://www.yourdomain.com/icyphoenix in je priloga nalo�ena mapa ki se nahaja na http://www.yourdomain.com/icyphoenix/files/screenshots.',
	'Forbidden_extensions' => 'Prepovedane raz�iritve',
	'Forbidden_extensions_explain' => 'Dodaj ali izbri�i prepovedane raz�iritve. Lo�ite raz�iritve z vejico.',
	'Permission_settings' => 'Nastavitve dovoljenj',
	'Auth_search' => 'I��i dovoljenja',
	'Auth_search_explain' => 'Omogo�i iskanje posebne skupine uporabnikov',
	'Auth_stats' => 'Statistika dovoljenj',
	'Auth_stats_explain' => 'Dovoli statistiko za posebne skupine uporabinikov',
	'Auth_toplist' => 'Dovoljenje Toplist',
	'Auth_toplist_explain' => 'Dovoli toplist za posebne skupine uporabnikov',
	'Auth_viewall' => 'Poglej vsa dovoljenja',
	'Auth_viewall_explain' => 'Dovoli pogled vseh dovoljenj za posebne skupine uporabnikov',
	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',


// Custom Field
	'Afield' => 'Polje po meri: Dodaj',
	'Efield' => 'Polje po meri: Uredi',
	'Dfield' => 'Polje po meri: Izbri�i',
	'Mfieldtitle' => 'Polje po meri',
	'Afieldtitle' => 'Dodaj polje',
	'Efieldtitle' => 'Uredi polje',
	'Dfieldtitle' => 'Izbri�i polje',
	'Fieldexplain' => 'Lahko uporabite polja po meri za upravljanje poglavja za dodajanje, urejanje, in izbris polja po meri. Lahko uporabite polja po meri za vnos ve�ih informacij o datoteki. Naprimer, �e �elite v informacijsko polje vstaviti datoteke, lahko ustvarite polje po meri, nato pa lahko dodate velikost datoteke v meniju Dodaj/Uredi.',
	'Fieldname' => 'Ime polja',
	'Fieldnameinfo' => 'To je ime polja, naprimer \'File Size\'',
	'Fielddesc' => 'Opis polja',
	'Fielddescinfo' => 'To je opis polja, naprimer \'File Size in Megabytes\'',
	'Fieldadded' => 'Polje po meri je bilo uspe�no dodano',
	'Fieldedited' => 'Izbrana polja po meri so bila uspe�no urejena',
	'Dfielderror' => 'Niste izbrali polj za izbris',
	'Fieldsdel' => 'Polja po meri ki ste jih izbrali so bila uspe�no izbrisana',

	'Field_data' => 'Mo�nosti',
	'Field_data_info' => 'Vnesite mo�nosti, med katerimi lahko uporabnik izbira. Opcije lo�ijte s prazno vrstico (enter).',
	'Field_regex' => 'Obi�ajni izraz',
	'Field_regex_info' => 'Morda boste potrebovali vnosno polje, da se ujema z obi�ajnim izrazom %s(PCRE)%s.',
	'Field_order' => 'Vrstni red prikaza',

// File
	'Afile' => 'Datoteka: Dodaj',
	'Efile' => 'Datoteka: Uredi',
	'Dfile' => 'Datoteka: Izbri�i',
	'Afiletitle' => 'Dodaj datoteko',
	'Efiletitle' => 'Uredi datoteko',
	'Dfiletitle' => 'Izbri�i datoteko',
	'Fileexplain' => 'Lahko uporabite plo��o za upravljanje datotek za dodajanje, urejanje, in izbris.',
	'Upload' => 'Nalo�i datoteko',
	'Uploadinfo' => 'Nalo�i to datoteko',
	'Uploaderror' => 'Datoteka ki jo �elite nalo�iti �e obstaja. Prosimo preimenuje in poizkusite ponovno.',
	'Uploaddone' => 'This file has been successfully uploaded. The URL to the file is',
	'Uploaddone2' => 'Kliknite tukaj, da se da vstavimo povezavo v polje za prenos.',
	'Upload_do_done' => 'Uspe�no nalo�eno',
	'Upload_do_not' => 'Neuspe�no nalo�eno',
	'Upload_do_exist' => 'Datoteka obstaja',
	'Filename' => 'Ime datoteke',
	'Filenameinfo' => 'To je ime datoteke, ki jo dodajate, kot naprimer \'My Picture.\'',
	'Filesd' => 'Kratek opis',
	'Filesdinfo' => 'To je kratek opis datoteke. To bo �lo na stran, ki navaja vse datoteke v kategoriji, zato mora biti ta opis kratek',
	'Fileld' => 'Dolg opis',
	'Fileldinfo' => 'To je dalj�i opis datoteke. Opis bo �el na glavno stran datoteke,zato je opis lahko dalj�i',
	'Filecreator' => 'Ustvarjalec / Avtor',
	'Filecreatorinfo' => 'To je ime tistega ki je ustvaril datoteko.',
	'Fileversion' => 'Verzija datoteke',
	'Fileversioninfo' => 'To je verzija datoteke, kot naprimer 3.0 or 1.3 Beta',
	'Filess' => 'Povezava do zaslonske slike',
	'Filessinfo' => 'To je povezava do zaslonske slike. Naprimer �e dodajate preobleko za Winamp, To bi bila povezava do slike Winampa s preobleko. Lahko ro�no vnesete naslov URL ali pa pustite prazno in nalo�ite sliko s pomo�jo gumba prebrskaj.',
	'Filess_upload' => 'Nalo�i zaslonsko sliko',
	'Filessinfo_upload' => 'Lahko nalo�ite zaslonsko sliko s pomo�jo gumba prebrskaj',
	'Filess_link' => 'Zaslonska slika kot povezava',
	'Filess_link_info' => '�e �elite zaslonsko sliko prikazati kot povezavo pritisnite YES.',
	'Filedocs' => 'Dokumentacija/navodila povezava',
	'Filedocsinfo' => 'To je povezava do dokumentacije ali navodil za datoteke',
	'Fileurl' => 'Povezava do datoteke',
	'Fileurlinfo' => 'To je povezava do datoteke ki jo bomo prenesli. Lahko vpi�emo ro�no ali pritisnemo gumb prebrskaj in izberemo datoteko.',
	'File_upload' => 'Nalaganje datoteke',
	'Fileinfo_upload' => 'Lahko nalo�i� datoteko s klikom na gumb prebrskaj',
	'Uploaded_file' => 'Datoteka je nalo�ena',
	'Filepi' => 'Ikona',
	'Filepiinfo' => 'Lahko izberete ikono za datoteko. Ta ikona bo prikazana ob datoteki ali seznamu datotek.',
	'Filecat' => 'Kategorija',
	'Filecatinfo' => 'Datoteka spada v to kategorijo.',
	'Filelicense' => 'Licenca',
	'Filelicenseinfo' => 'To je licen�na pogodba uporabnik zavezuje, da jo sprejme pred prenosom datoteke.',
	'Filepin' => 'Priponka datoteke',
	'Filepininfo' => 'Izberite ali �elite datoteko pripeto ali ne. Pripete datoteke bodo vedno prikazane na vrhu seznama.',
	'Fileadded' => 'Nova datoteka je bila uspe�no dodana',
// MX Addon
	'Filedeleted' => 'Datoteka je bila uspe�no izbrisana',
// End
	'Fileedited' => 'Izbrana datoteka je bila uspe�no urejena',
	'Fderror' => 'Niste izbrali nobene datoteke za brisanje',
	'Filesdeleted' => 'Datoteke, ki ste jih izbrali so bile uspe�no izbrisane',
	'Filetoobig' => 'Ta datoteka je prevelika!',
	'Approved' => 'Odobreno',
	'Not_approved' => '(Ni odobreno)',
	'Approved_info' => 'Uporabi to mo�nost, da je datoteka na voljo za uporabnike, in tudi za odobritev datotek, ki so nalo�ene s strani uporabnikov.',
	'Fchecker' => 'Vzdr�evanje datoteke',
	'File_checker' => 'Vzdr�evanje datoteke',
	'File_checker_explain' => 'Preveritevse datoteke v zbirki podatkov, in datoteke v mapi s prenosi.',
	'File_saftey' => 'Z vzdr�evanjem datotek bomo poizku�ali izbrisati vse datoteke in zaslonske slike katere trenutno niso potrebne in bomo odstranilivsak posnetek s kje je bila datoteka izbrisana, in zbrisali vse zaslonske slike kateri niso najdeni.<br /><br />�e se datoteke ne za�nejo z <span class="text_red">{html_path}</span> moramo datoteke presko�iti z varnostnih razlogov.<br /><br />Prosimo prepri�ajte se da je <span class="text_red">{html_path}</span> v povezavi ki jo uporabljate za va�e datoteke.<br /><br /><b>Nasvet:</b> Zelo priporo�ljivo je, da <b><a href="' . append_sid('admin_db_utilities.' . PHP_EXT . '?perform=backup') . '" class="genmed">varnostno kopirate zbirke podatkov</a></b>.',
	'File_checker_perform' => 'Preverjanje orpavljanja',
	'Checker_saved' => 'Skupno prihranjenega prostora',
	'Checker_sp1' => 'Preverjanje evidenc z manjkajo�imi datotekami...',
	'Checker_sp2' => 'Preverjanje evidenc z manjkajo�imi zaslonskimi slikami...',
	'Checker_sp3' => 'Brisanje neuporabljene datoteke...',
	'Filedls' => 'Skupni prenos',
	'Addtional_field' => 'Dodatno polje',
	'File_not_found' => 'Datoteke, ki ste jo dolo�ili dolo�ena, ni mogo�e najti',
	'SS_not_found' => 'Zaslonska slika, ki ste jo dolo�ili dolo�ena, ni mogo�e najti',
// License
	'Alicense' => 'Licenca: Dodaj',
	'Elicense' => 'Licenca: Uredi',
	'Dlicense' => 'Licenca: Izbri�i',
	'Alicensetitle' => 'Dodaj licenco',
	'Elicensetitle' => 'Uredi licenco',
	'Dlicensetitle' => 'Izbri�i licenco',
	'Licenseexplain' => 'Lahko uporabite oddelek za upravljanje licenc za dodajanje, urejanje, in izbris licen�ne pogodbe. Izberete lahko dovoljenje za datoteko v meniju dodaj ali uredi. �e ima datoteka licen�no pogodbo, se bo moral uporabnik strinjati z njim pred prenosom datoteke.',
	'Lname' => 'Ime licence',
	'Ltext' => 'Licenca',
	'Licenseadded' => 'Nova licen�na pogodba je bila uspe�no dodana',
	'Licenseedited' => 'Licen�na pogodba ste jo izbrali je bila uspe�no urejena',
	'Lderror' => 'Niste izbrali licence za izbris',
	'Ldeleted' => 'Licen�ne pogodbe ste jih izbrali so bile uspe�no izbrisane',
// MX
	'License_title' => 'Licenca',
// ENd
	'Click_return' => 'Klikni %sTukaj%s za vrnitev na prej�njo stran',
	'Click_return_upload' => 'Klikni %sTukaj%s za vrnitev na nalo�eno sliko',
	'Click_edit_permissions' => 'Klikni %sTukaj%s za urejanje dovolenj',

//Java script messages and php errors
	'Cat_name_missing' => 'Prosimo izpolnite polje za ime kategorije',
	'Cat_conflict' => 'Nemorete imeti kategotije brez datoteke',
	'Cat_id_missing' => 'Prosimo izberite kategorijo',
	'Missing_field' => 'Prosimo izpolnite vsa zahtevana polja',


//Fields Types

	'Input' => 'Eno-linijsko tekstovno okno',
	'Textarea' => 'Ve�-linijsko tekstovno okno',
 	'Radio' => 'Radio Enoizbirni Radio gumbi ',
 	'Select' => 'Enoizbirni meni',
 	'Select_multiple' => 'Ve�izbirni meni',
 	'Checkbox' => 'Ve�izbirno tekstovno okno',

// MX Addon
	'Validation_settings' => 'Potrjevanje nalo�enih datotek ',
 	'Need_validate' => 'Potrdi nalo�ene datoteke?',
 	'Validator' => 'Potrjevalec',
 	'PM_notify' => 'Obvestilo potrjevalcem preko ZS (n/a)',
 	'Validator_admin_option' => 'Administrator',
 	'Validator_mod_option' => 'Administrator in cat moderator',

	'Allow_comments' => 'Omogo�i komentarje (n/a)',
 	'Allow_comments_info' => 'Omogo�i/Onemogo�i komentarje v tej kategoriji.',
 	'Allow_ratings' => 'Omogo�i ocenjevanje(n/a)',
 	'Allow_ratings_info' => 'Omogo�i/Onemogo�i ocenjevanje v tej kategoriji.',

	'MCP_title' => 'Nadzorna plo��a moderatorjev',
 	'MCP_title_explain' => 'Odobri in obdeluj datoteke',

	'Fileadded_not_validated' => 'Nova datoteka je bila uspe�no dodaja, ampak jo mora moderator (administrator) potrditi preden jo odobri.',

	)
);

?>