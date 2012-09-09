<?php
/**
*
* @package Intero
* @version $Id: lang_kb.php 61 2008-10-30 09:25:26Z $
* @copyright (c) 2008 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'KB_title' => 'Baza podatkov',
	'Article' => 'Clanek',
	'Category' => 'Kategorija',
	'Article_description' => 'Opis',
	'Article_type' => 'Vrsta',
	'Article_keywords' => 'Kljucne besede',
	'Articles' => 'Clanki',
	'Add_article' => 'Dodaj clanek',
	'Click_cat_to_add' => 'Kliknite na kategorijo, ce želite dodati Clanek',
	'KB_Home' => 'KB Domov',
	'No_articles' => 'Ni clankov',
	'Article_title' => 'Ime Clanka',
	'Article_text' => 'Tekst clanka',
	'Add_article' => 'Potrdi clanek',
	'Read_article' => 'Clanki v branju',
	'Article_not_exsist' => 'Clanek ne obstaja',
	'Category_not_exsist' => 'Kategorija ne obstaja',

	'Edit' => 'Editiraj',

	'Article_submitted_Approve' => 'Clanek je bil uspešno sprejet.<br />Administrator bo pregledal vaš clanek in se odlocil ce je primern za uporabnike.',
	'Article_submitted' => 'Clanek je bil uspešno sprejet.',
	'Click_return_kb' => 'Kliknite %sTukaj%s za vrnitev Na bazo podatkov',
	'Click_return_article' => 'Kliknite %sTukaj%s za vritev nazaj na Clanke',

	'Article_Edited_Approve' => 'Clanek je bil uspeško editiran.<br />Clanek mora biti ponovno pregledan, ce je primeren za uporabnike.',
	'Article_Edited' => 'Clanek je bil uspeško editiran.',
	'Edit_article' => 'Editiraj Clanek',

	'KB_title' => 'Baza podatkov',
	'KB_art_description' => 'Odobrite clanke, da jih lahko ostali uporabniki vidijo, lahko pa jih zbrišete.',
	'Art_man' => 'Upraljalec artiklov',
	'Cat_man' => 'Upravljalec kategorij',
	'KB_cat_description' => 'Dodaj, editiraj ali izbriši kategorije v Bazi podatkov',
	'Art_action' => 'Zakljuci',

//approve
	'Art_edit' => 'Editirani Clanki',
	'Art_not_approved' => 'Clanki, ki niso odobreni',
	'Art_approved' => 'Odobreni clanki',
	'Approve' => 'Odobri',
	'Un_approve' => 'Zavrni',
	'Article_approved' => 'Odobreni clanki.',
	'Article_unapproved' => 'Zavrneji clanki.',

//delete
	'Delete' => 'Izbriši',
	'Confirm_art_delete' => 'Ste prepicani da želite izbrisati ta clanek?',
	'Confirm_art_delete_yes' => '%sDA, želi izbrisati ta clanek%s',
	'Confirm_art_delete_no' => '%sNE, nocem izbrisati clanka%s',
	'Article_deleted' => 'Clanek uspešno izbrisan.',

	'Click_return_article_manager' => 'Klikni %sTukaj%s za vrnitev na upravljalca Clankov',

//cat manager
	'Create_cat' => 'Ustvari novo kategorijo:',
	'Create' => 'Ustvari',
	'Cat_settings' => 'Nastavitve kategorije',
	'Create_description' => 'Spremeni ime kategorije in dodaj opis h novi kategoriji.',
	'Cat_created' => 'Kategorija uspešno ustvarjena.',
	'Click_return_cat_manager' => 'Kliki %sTukaj%s za vrnitev na upravljalca kategorij',
	'Edit_description' => 'Editiraj Nastavitve kategorije',
	'Edit_cat' => 'Editiraj kategorijo',
	'Cat_edited' => 'Kategorija editirana uspešno.',
	'Parent' => 'Zakljuci',

	'Cat_delete_title' => 'Izbriši Kategorijo',
	'Cat_delete_desc' => 'Izbriši kategorijo in prenesi vse clanke v novo kategorijo',
	'Cat_deleted' => 'Kategorija uspešno izbrisana.',
	'Delete_all_articles' => 'Izbriši Clanke',

//configuration
	'KB_config' => 'KB Konfiguracija',
	'Art_types' => 'Vrste clankov',
	'KB_config_title' => 'Konfiguracija baze podatkov',
	'KB_config_explain' => 'Spremeni konfiguracijo baze podatkov',
	'New_title' => 'Dovoli nove clanke',
	'New_explain' => 'Dovoli uporabnikom objavo calnkov v tvoji poratkovni bazi',
	'Edit_name' => 'Dovoli editiranje',
	'Edit_explain' => 'Dovoli uporabnikom editiranje clankov po objavi',
	'Notify_name' => 'Obvesti me po',
	'Notify_explain' => 'Izberite kako želite biti obvešceni o novih objavah clankov',
	'PM' => 'ZS',
	'Click_return_kb_config' => 'Klikni %sTukaj%s za vrnitev na Bazo Podatkov',
	'Admin_id_name' => 'ID Administratorja',
	'Admin_id_explain' => 'To je ID uporabnika kateremu bodo poslana obvestila po ZS.',
	'Approve_new_name' => 'Odobri nove clanke',
	'Approve_new_explain' => 'Spremeni ali morajo <b />Novi</b /> clanki biti odobreni ali ne',
	'Approve_edit_name' => 'Odobri editirane clanke',
	'Approve_edit_explain' => 'Spremeni ali morajo <b />editirani</b /> clanki odobreni ali ne',
	'Allow_anon_name' => 'Dovoli anonimno objavljanje clankov',
	'Allow_anon_explain' => 'Spremeni ali so lahko <b />novi</b /> clanki objavljeni anonimno',
	'Del_topic' => 'Izbriši temo',
	'Del_topic_explain' => 'Ko izbrišete clanek, želite izbrisati tudi komentarje?',

	'Use_comments' => 'Komentarji',
	'Use_comments_explain' => 'Omogoci vstavljanje komentarjev na clanke v Intero forumu',
	'Use_ratings' => 'Ocenjevanje',
	'Use_ratings_explain' => 'Omogoci ocenjevanje za clanke',

	'Forum_id' => 'ID foruma',
	'Forum_id_explain' => 'To je forum kjer bodo komentarji clankov spravljeni',


// Permissions
	'KB_Auth_Title' => 'KB Dovoljenja',
	'KB_Auth_Explain' => 'Izberite katere skupine uporabnikov so lahko moderatorji za KB kategorije ali samo za privaten dostop',
	'Select_a_Category' => 'Izberite Kategorijo',
	'Look_up_Category' => 'Najdite kategorijo',
	'KB_Auth_successfully' => 'Autorizacija je bila uspešno posodobljena',
	'Click_return_KB_auth' => 'Kliki %sTukaj%s za vrnitev v KB dovoljenja',

	'Upload' => 'Naloži',
	'Rate' => 'Oceni',
	'Comment' => 'Komentiraj',
	'Approval' => 'Odobri',
	'Approval_edit' => 'Odobrite editiranje',

	'Allow_rating' => 'Dovoli ocenjevanje',
	'Allow_rating_explain' => 'Uporabniki imajo dovoljenje za ocenjevanje clankov.',

	'Allow_anonymos_rating' => 'Dovoli anonimno ocenjevanje',
	'Allow_anonymos_rating_explain' => 'Ce je ocenjevanje dovoljeno, dovolite anonimno ocenenjevanje vašega clanka',

	'KB_config_updated' => 'Konfiguracija Baze podatkov je posodobljena uspešno.',

	'KB_notify_subject_new' => 'Nov clanek!',
	'KB_notify_subject_edited' => 'editiran Clanek!',
	'KB_notify_subject_approved' => 'Odobren Clanek!',
	'KB_notify_subject_unapproved' => 'Zavrnjen Clanek!',
	'KB_notify_body' => 'Clanek je bil odobren ali modificiran:

',

	'Category_Permissions' => 'Kategorija Dovoljenj',
	'Category_Title' => 'Kategorija Naslovov',
	'Category_Desc' => 'Kategorija Opisov',
	'View_level' => 'Raven Ogledov',
	'Upload_level' => 'Raven Nalaganja',
	'Rate_level' => 'Raven Ocenjevanja',
	'Comment_level' => 'Raven Komentiranja',
	'Edit_level' => 'Raven Editiranja',
	'Delete_level' => 'Raven Brisanja',
	'Approval_level' => 'Raven Odobravanja',
	'Approval_edit_level' => 'Raven Odobrenega Editiranja',

/*
	'KB_Rules_post_can' => 'V tej kategoriji <b>lahko</b> objavljate nove clanke',
	'KB_Rules_post_cannot' => 'V tej kategoriji <b>ne morete</b> objaviti novih clankov',
	'KB_Rules_comment_can' => 'V tej kategoriji <b>lahko</b> komentirate clanke',
	'KB_Rules_comment_cannot' => 'V tej kategoriji <b>ne morete</b> komentirati clankov',
	'KB_Rules_edit_can' => 'V tej kategoriji <b>lahko</b> editirate vaše clanke',
	'KB_Rules_edit_cannot' => 'V tej kategoriji <b>ne morete</b> editirati vaših clankov',
	'KB_Rules_delete_can' => 'V tej kategoriji <b>lahko</b> izbrišete vaše clanke',
	'KB_Rules_delete_cannot' => 'V tej kategoriji <b>ne morete</b> izbrisati vaših clankov',
	'KB_Rules_rate_can' => 'V tej kategoriji <b>lahko</b>ocenjujete vaše clanke',
	'KB_Rules_rate_cannot' => 'V tej kategoriji <b>ne morete</b> ocenjevati clankov',
	'KB_Rules_approval_can' => 'Clanki v tej kategoriji <b>ne potrebujejo</b> odobritve',
	'KB_Rules_approval_cannot' => 'Clanki v tej kategoriji <b>morajo biti</b> odobreni',
	'KB_Rules_approval_edit_can' => 'Editiranje clankov v tej kategoriji <b>ni potrebno</b> odobriti',
	'KB_Rules_approval_edit_cannot' => 'Editirani clanki v tej kategoriji <b>morajo</b> biti odobreni',
*/
	'KB_Rules_post_can' => 'Tukaj <b>lahko</b> objavite nove clanke',
	'KB_Rules_post_cannot' => 'Tukaj <b>ne morete</b> objavljati novih clankov',
	'KB_Rules_comment_can' => 'Tukaj <b>lahko</b> komentirate clanke',
	'KB_Rules_comment_cannot' => 'Tukaj <b>ne morete</b> komentirati clankov',
	'KB_Rules_edit_can' => 'Tukaj <b>lahko</b> editirate svoje clanke',
	'KB_Rules_edit_cannot' => 'Tukaj <b>ne morete</b> editirati svojih clankov',
	'KB_Rules_delete_can' => 'Tukaj <b>lahko</b> rišete svoje clanke',
	'KB_Rules_delete_cannot' => 'Tukaj <b>ne moretet</b> brisati svojih clankov',
	'KB_Rules_rate_can' => 'Tukaj <b>lahko</b> ocenjujete clanke',
	'KB_Rules_rate_cannot' => 'Tukaj <b>ne morete</b> ocenjevati clankov',
	'KB_Rules_approval_can' => 'Clanki <b>Ne rabijo</b> odobritve',
	'KB_Rules_approval_cannot' => 'Clanki <b>potrebujejo</b> odobritev',
	'KB_Rules_approval_edit_can' => 'Editiranje clankov <b>ni potrebno</b> odobriti',
	'KB_Rules_approval_edit_cannot' => 'Editiranje clankov <b>je potrebno</b> odobriti',
	'KB_Rules_moderate' => 'Tukaj <b>lahko</b> %smoderirate to kategorijo%s', // %s zamenjano z href linki, ne dstranjuj!
	'KB_Rules_moderate_can' => 'Tukaj <b>lahko</b> moderirate to kategorijo', // %s zamenjano z href linki, ne dstranjuj!



	'Comments_show' => 'Prikaži komentarje clankov.',
	'Comments_show_explain' => '- prikaži tudi komentarje na strani clanka',
	'Comments_show_title' => 'Komentarji Uporabnikov',

	'Mod_group' => 'KB Skupina moderatorjev',
	'Mod_group_explain' => '- z dovoljenji KB Administratorjev!',

	'Bump_post' => 'Prioritiziranje objav clankov',
	'Bump_post_explain' => 'Ob editiranju clanka, je objavljen odgovor v temi clanka, ki obvešca o posodobitvi clanka',

	'Stats_list' => 'Pokaži statistiko KB',
	'Stats_list_explain' => 'Pokaži statistiko KB v glavi.',

	'Header_banner' => 'Pokaži Glavni Logo',
	'Header_banner_explain' => 'Pokaži KB logo v glavi.',

	'Comment_info' => 'Nastavitve komentarjev',
	'Rating_info' => 'Nastavitve ocenjevanja',


//types
	'Types_man' => 'Vrste upravljalca',
	'KB_types_description' => 'Dodaj, Izbriši in editiraj razlicne tipe clankov',
	'Create_type' => 'Ustvari nov Tip Clanka:',
	'Type_created' => 'Novi Tip Clanka uspešno ustvarjen.',
	'Click_return_type_manager' => 'Kliki %sTukaj%s za vrnitev to the Vrste upravljalca',

	'Edit_type' => 'Editiraj vrsto',
	'Edit_type_description' => 'Tukaj lahko editiraš ime vrste',
	'Type_edited' => 'Vrsta clanka editirana uspešno.',

	'Type_delete_title' => 'Izbriši Vrsto clanka',
	'Type_delete_desc' => 'Spremeni pomen vrste clanka za clanke, ki imajo tisto vrsto katero imate namen izbrisati.',
	'Change_type' => 'Zamenjaj vrsto Clanka v',
	'Change_and_Delete' => 'Spremeni in Izbriši',
	'Type_deleted' => 'Vrsta Clanka uspešno izbrisana.',

	'Pre_text_name' => 'Navodila za oddajo clanka',
	'Pre_text_header' => 'Glava navodil za oddajo clanka',
	'Pre_text_body' => 'Telo navodil za oddajo clanka',
	'Pre_text_explain' => 'To so tekstovna navodila prikazana uporabnikom na vrhu foruma za odajo.',

	'Show' => 'Prikaži',
	'Hide' => 'Skrij',

	'Empty_fields' => 'Prosimo izpolnite vse dele obrazca.',
	'Empty_fields_return' => 'Kliki %sTukaj%s za vrnitev na obrazec.',
	'Empty_category' => 'Morate izbrati kategorijo',
	'Empty_type' => 'Morate izbrati vrsto',
	'Empty_article_name' => 'Morate izpolniti ime clanka',
	'Empty_article_desc' => 'Morate izpolniti opis clanka',

	'Read_full_article' => '>>Preberi celoten clanek',
	'Comments' => 'Komentarji',

	'No_add' => 'Ni mogoce dodati novega clanka',
	'No_edit' => 'Ni mogoce editirati tega clanka!',
	'Post_comments' => 'Objavi komentarje',

	'Category_sub' => 'Podkategorije',
	'Quick_stats' => 'Hitra statistika',

// added

	'Edited_Article_info' => 'Clanek je naložil',
	'No_Articles' => 'Ta kategorija je prazna!',
	'Not_authorized' => 'Oprostite, nimate autorizacije!',
	'TOC' => 'Vsebine',

// Rate
	'Votes_label' => 'Ocenjevanje ',
	'Votes' => 'glasovi',
	'No_votes' => 'ni glasov',
	'Rate' => 'Oceni Clanek',
	'ADD_RATING' => '[Oceni Clanek]',
	'Rerror' => 'Oprostite, ta clanek ste že ocenili.',
	'Rateinfo' => 'Ravnokar boste ocenili clanek <i>{filename}</i>.<br />Prosimo izberite oceno. 1 pomeni najslabše, 10 pomeni najboljše.',
	'Rconf' => 'Oddali ste <i>{filename}</i> oceno {rate}.<br />Datoteka ima sedaj novo oceno {newrating}/10.',
	'R1' => '1',
	'R2' => '2',
	'R3' => '3',
	'R4' => '4',
	'R5' => '5',
	'R6' => '6',
	'R7' => '7',
	'R8' => '8',
	'R9' => '9',
	'R10' => '10',
	'Kliki_return_rate' => 'Kliki %sTukaj%s za vrnitev na clanek',

// Print version
	'Print_version' => 'Verzija za printanje',

// Stats
	'Top_toprated' => 'Najbolje ocenjeni Clanki',
	'Top_most_popular' => 'Najbolj Popularni clanki',
	'Top_latest' => 'Najnovejši Clanki',

// Votes check
	'Votes_check_ip' => 'Pregled ocenjevanja - ip',
	'Votes_check_ip_explain' => 'Dovoljena je samo ena ocena na en IP-naslov.',

	'Votes_check_userid' => 'Pregled ocenjevanja - uporabnik',
	'Votes_check_userid_explain' => 'Dovoljena samo ena ocena na enega uporabnika.',

	'Article_pag' => 'Številcenje Clankov',
	'Article_pag_explain' => 'Število clankov prikazanih v (statistiki) pred številcenjem.',

	'Comments_pag' => 'Številcenje Komentarjev',
	'Comments_pag_explain' => 'Število komentarjev prikazanih v (statistiki) pred številcenjem.',

	'News_sort' => 'Metoda sortiranja clankov',
	'News_sort_explain' => 'Definirajte kako so clanki sortirani znotraj kategorije.',

	'News_sort_par' => 'Narašcajoce ali padajoce sortiranje',
	'News_sort_par_explain' => '',

// General strings from the news admin panel

	'News_settings' => 'KB Blok Nastavitve',
	'News_settings_short_explain' => 'Konfiguriraj nekatere nastavitve za novice na prvi strani.',
	'News_settings_explain' => 'Editiran konfiguracijo za KB Blok. Ta plošca vam dovoli ekstrahiranje katero kategorijo bo blok prikazal, potemtakem boš ustvaril pod-primer modula',

// Update result messages

	'News_updated_return_settings' => 'Konfiguracija KB bloka je bila posodobljena uspešno.<br /><br />Kliki %sTukaj%s za vrnitev na glavno stran.', // %s's za URI parametre - NE ODSTRANJUJ
	'News_update_error' => 'Konfiguracija KB bloka ni bila mogoca.<br /><br />Ta mod je bil narejen za MySQL zato vas naprošamo da kontaktirate avtorja ce imate kakršnokoli težavo. Ce lahko naredite prevod iz SQL v drugi podatkovno-bazni format, prosimo da jih pošljene na:<br />',

// Custom Field
	'Fieldselecttitle' => 'Izberite kaj želite narediti',
	'Afield' => 'Polje po meri: Dodaj',
	'Efield' => 'Polje po meri: Editiraj',
	'Dfield' => 'Polje po meri: Izbriši',
	'Mfieldtitle' => 'Polja po meri',
	'Afieldtitle' => 'Dodaj Polje',
	'Efieldtitle' => 'Editiraj Polje',
	'Dfieldtitle' => 'Izbriši Polje',
	'Fieldexplain' => 'Za dodajanja, editiranje ali izbris polja po meri, lahko uporabite upravljalca poljev po meri. Polje po meri lahko uporabite tudi za dodajanje informacij o clanku.',
	'Fieldname' => 'Ime polja',
	'Fieldnameinfo' => 'Primer imena polja \'File Size\'',
	'Fielddesc' => 'Opis polja',
	'Fielddescinfo' => 'Primer opisa polja \'File Size in Megabytes\'',
	'Fieldadded' => 'Polje po meri je bilo uspešno dodano',
	'Fieldedited' => 'Polje po meri je bilo uspešno editirano',
	'Dfielderror' => 'Niste izbrali nobenega polja za izbris',
	'Fieldsdel' => 'Izbrana polja so bila uspešno izbrisana',

	'Field_data' => 'Nastavitve',
	'Field_data_info' => 'Vnesi nastavitve med katerimi si lahko uporabniki izbirajo. Vsako Nastavitev postavi v svojo vrsto (povratek).',
	'Field_regex' => 'Obicajni izraz',
	'Field_regex_info' => 'Mogoce bo od vas zahtevano da se bo vneseno polje ujemalo z povratkom %s(PCRE)%s.',
	'Field_order' => 'Prikaži vrstni red',

//Fields Types

	'Field_Input' => 'Eno-vrsticno okno',
	'Field_Textarea' => 'Vec-vrsticno okno',
	'Field_Radio' => 'Radio Gumbi z eno opcijo',
	'Field_Select' => 'Meni z eno samo izbiro',
	'Field_Select_multiple' => 'Mani z vec izbirami',
	'Field_Checkbox' => 'Checkbox z vec izbirami',

	'Click_return' => 'Kliki %sTukaj%s za vrnitev na prejšnjo stran',

// added
	'Cat_all' => 'Vse',

	'L_Pages' => 'Strani',
	'L_Pages_explain' => 'Uporabi komande na [strani] za razdelitev clanka na vec strani',
	'L_Toc' => 'Tabela vsebine (TOC)',
	'L_Toc_explain' => 'Uporabi [toc] komando za dodajanje vpisov v TOC ',
	'L_Abstract' => 'Povzetek',
	'L_Abstract_explain' => 'Uporabi [povzetek]...[/abstract] za vstavljanje povzetkov',

	'L_Title_Format' => 'Naslov',
	'L_Title_Format_explain' => 'Uporabi [naslov]...[/title] za vstavljanje glavnega naslova',

	'L_Subtitle_Format' => 'Podnapis',
	'L_Subtitle_Format_explain' => 'Uporabi [podnapis]...[/subtitle] za vstavljanje podnapisov',

	'L_Subsubtitle_Format' => 'Podpodnapis',
	'L_Subsubtitle_Format' => 'Uporabi [podpodnapis]...[/subsubtitle] za vnos manjše glave',

	'L_Options' => 'Nastavitve:',
	'L_Formatting' => 'Oblika:',

	'Default_article_id' => 'Nastavi privzeti clanek za bralca clankov',

// Added for v. 2.0
	'KB_comment_prefix' => '[KB] ',

	'Wysiwyg' => 'Uporabi wysiwyg editor',
	'Wysiwyg_explain' => 'Ce je omogcen, bo standardna bbcode/html/smileys input dialogue zamenjana z wysiwyg editorjem.',

	'Wysiwyg_path' => 'Pot do wysiwyg programske opreme',
	'Wysiwyg_path_explain' => 'To je pot (from mxBB/ip root) ki vodi do wysiwyg programske datoteke, eg \'modules/\' ce ste naprimer naložili tinemce v modules/tinymce.',

	'Formatting_fixup' => 'Popravi obliko',
	'Formatting_fixup_explain' => 'Ce je omogocen, bo tekst clanka bil spremenjen: word-wrapping, url truncates, img resizing and some bbcode reformatting etc',

	'Addtional_field' => 'Vec informacij (po izbiri)',

	'No_cat_comments_forum_id' => 'Komentarji so omogoceni ampak niste dolocili cilja Intero kategorije foruma v KB ACP - Kategorije',


// Quick Nav
	'Quick_nav' => 'Quick KB Navigation',
	'Quick_jump' => 'Idi',

	'Categories' => 'Kategrije',
	'Subcategory' => 'Subcategory',
	)
);

?>