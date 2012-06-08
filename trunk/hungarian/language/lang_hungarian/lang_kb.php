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
* @Extra credits for this file
* MX-System - (jonohlsson@hotmail.com) - (www.mx-system.com)
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
	'KB_title' => 'Tudásbázis',
	'Article' => 'Cikk',
	'Category' => 'Kategória',
	'Article_description' => 'Leírás',
	'Article_type' => 'Tipus',
	'Article_keywords' => 'Kulcsszavak',
	'Articles' => 'Cikkek',
	'Add_article' => 'Cikk hozzáadása',
	'Click_cat_to_add' => 'Kattints egy kategóriára cikk hozzáadásához',
	'KB_Home' => 'TB főoldal',
	'No_articles' => 'Nincsenek cikkek',
	'Article_title' => 'Cikk neve',
	'Article_text' => 'Cikk szövege',
	'Add_article' => 'Cikk beküldése',
	'Read_article' => 'Cikket olvas',
	'Article_not_exsist' => 'Nem létezik ilyen kategória',
	'Category_not_exsist' => 'Nem létezik ilyen kategória',

	'Edit' => 'Szerkesztés',

	'Article_submitted_Approve' => 'Cikk sikeresen beküldve.<br />Egy adminisztrátor majd átolvassa a cikket, és eldönti, hogy publikus legyen-e vagy sem.',
	'Article_submitted' => 'Cikk sikeresen beküldve.',
	'Click_return_kb' => 'Kattints %side%s, hogy visszatérj a Tudásbázisba',
	'Click_return_article' => 'Kattints %side%s, hogy visszatérj a cikkhez',

	'Article_Edited_Approve' => 'Cikk sikeresen szerkesztve.<br />A cikket újra jóvá kell hagyni, mielőtt a többi felhasználó számára is láthatóvá válna.',
	'Article_Edited' => 'Cikk sikeresen szerkesztve.',
	'Edit_article' => 'Cikk szerkesztése',

	'KB_title' => 'Tudásbázis',
	'KB_art_description' => 'Engedélyezheted a cikkeket, hogy a felhasználók is láthassák, vagy törölheted őket.',
	'Art_man' => 'Cikk kezelő',
	'Cat_man' => 'Kategória kezelő',
	'KB_cat_description' => 'Kategóriák hozzadása, szerkesztése vagy törlése a Tudásbázisban',
	'Art_action' => 'Művelet',

//approve
	'Art_edit' => 'Szerkesztett cikkek',
	'Art_not_approved' => 'Nincs jóváhagyva',
	'Art_approved' => 'Jóváhagyva',
	'Approve' => 'Jóváhagy',
	'Un_approve' => 'Jóváhagyás visszavonása',
	'Article_approved' => 'Cikk engedélyezve.',
	'Article_unapproved' => 'A cikk nincs jóváhagyva.',

//delete
	'Delete' => 'Törlés',
	'Confirm_art_delete' => 'Biztosan törölni szeretnéd a cikket?',
	'Confirm_art_delete_yes' => '%sIgen, törölni szeretném a cikket%s',
	'Confirm_art_delete_no' => '%sNem, nem szeretném törölni a cikket%s',
	'Article_deleted' => 'Cikk sikeresen törölve.',

	'Click_return_article_manager' => 'Kattints %side%s, hogy visszatérj a Cikk kezelőbe',

//cat manager
	'Create_cat' => 'Új kategória létrehozása:',
	'Create' => 'Létrehozás',
	'Cat_settings' => 'Kategória beállítások',
	'Create_description' => 'Megváltoztathatod a kategória nevét, és új leírást adhatsz neki.',
	'Cat_created' => 'Kategória sikeresen létrehozva.',
	'Click_return_cat_manager' => 'Kattints %side%s, hogy visszatérj a Kategória kezelőbe',
	'Edit_description' => 'Kategória beállításainak szerkesztése',
	'Edit_cat' => 'Kategória szerkesztése',
	'Cat_edited' => 'Kategória sikeresen szerkesztve.',
	'Parent' => 'Szülő',

	'Cat_delete_title' => 'Kategória törlése',
	'Cat_delete_desc' => 'Kategória törlése és a cikkek áthelyezése másik kategóriába',
	'Cat_deleted' => 'Kategória sikeresen törölve.',
	'Delete_all_articles' => 'Cikkek törlése',

//configuration
	'KB_config' => 'TB Beállítások',
	'Art_types' => 'Cikk típusok',
	'KB_config_title' => 'Tudásbázis beállítások',
	'KB_config_explain' => 'Tudásbázis beállításainak módosítása',
	'New_title' => 'Új cikkek engedélyezése',
	'New_explain' => 'A felhasználók küldhetnek be új cikkeket',
	'Edit_name' => 'Szerkesztés engedélyezése',
	'Edit_explain' => 'A felhasználók szerkeszthetik a saját cikkeiket',
	'Notify_name' => 'Értesítés',
	'Notify_explain' => 'Milyen úton értesítsen téged új cikk beküldéséről',
	'PM' => 'PÜ',
	'Click_return_kb_config' => 'Kattints %side%s, hogy visszatérj a Tudásbázis beállításaihoz',
	'Admin_id_name' => 'Admin ID',
	'Admin_id_explain' => 'Akinek a PÜ értesítések mennek majd.',
	'Approve_new_name' => 'Új cikkek jóváhagyása',
	'Approve_new_explain' => 'Szükség legyen-e <b />új</b /> cikkekhez az admin jóváhagyáshoz publikálás előtt',
	'Approve_edit_name' => 'Szerkesztett cikkek jóváhagyása',
	'Approve_edit_explain' => 'Szükség legyen-e <b />szerkesztett</b /> articles need to be approved or not',
	'Allow_anon_name' => 'Névtelen felhasználó cikke beküldésének engedélyezése',
	'Allow_anon_explain' => 'Névtelen felhasználók küldhetnek-e be <b />új</b /> cikkeket',
	'Del_topic' => 'Téma törlése',
	'Del_topic_explain' => 'Cikk törlésekor törlődjön-e a hozzászólásait tartalmazó téma is?',

	'Use_comments' => 'Hozzászólások',
	'Use_comments_explain' => 'A cikkekhez beküldött hozzászólásokat a fórumon helyezi el',
	'Use_ratings' => 'Értékelések',
	'Use_ratings_explain' => 'Cikkek értékelésének engedélyezése',

	'Forum_id' => 'Fórum ID',
	'Forum_id_explain' => 'Ebbe a fórumba kerülnek a cikkek hozzászólásai',


// Permissions
	'KB_Auth_Title' => 'TB jogosultságok',
	'KB_Auth_Explain' => 'Válaszd ki, mely csoportok moderálhatják az egyes TB kategóriákat, vagy rendelkezzenek privát hozzáféréssel azokhoz',
	'Select_a_Category' => 'Válassz kategóriát',
	'Look_up_Category' => 'Kategória keresése',
	'KB_Auth_successfully' => 'Jogosultságok sikeresen frissítve',
	'Click_return_KB_auth' => 'Kattints %side%s, hogy visszatérj a Tudásbázis jogosultságaihoz',

	'Upload' => 'Feltöltés',
	'Rate' => 'Értékelés',
	'Comment' => 'Hozzászólás',
	'Approval' => 'Jóváhagyás',
	'Approval_edit' => 'Jóváhagyás módosítása',

	'Allow_rating' => 'Értékelés engedélyezése',
	'Allow_rating_explain' => 'A felhasználók értékelhetik a cikkeket.',

	'Allow_anonymos_rating' => 'Névtelen értékelés engedélyezése',
	'Allow_anonymos_rating_explain' => 'Ha engedélyezve van az értékelés, névtelen felhasználók is értékelhetik a cikkeket.',

	'KB_config_updated' => 'Tudásbázis beállítások sikeresen frissítve.',

	'KB_notify_subject_new' => 'Új cikk!',
	'KB_notify_subject_edited' => 'Szerkesztett cikk!',
	'KB_notify_subject_approved' => 'Jóváhagyott cikk!',
	'KB_notify_subject_unapproved' => 'Jóváhagyásból elutasított cikk!',
	'KB_notify_body' => 'Új cikk lett beküldve vagy módosítva:

',

	'Category_Permissions' => 'Kategória jogosultságok',
	'Category_Title' => 'Kategória címe',
	'Category_Desc' => 'Kategória leíása',
	'View_level' => 'Megtekintés',
	'Upload_level' => 'Feltöltés',
	'Rate_level' => 'Értékelés',
	'Comment_level' => 'Hozzászólás',
	'Edit_level' => ' Szerkesztés',
	'Delete_level' => 'Törlés',
	'Approval_level' => 'Jóváhagyás',
	'Approval_edit_level' => 'Jóváhagyás módosítása',

/*
	'KB_Rules_post_can' => '<b>Küldhetsz</b> be új cikket ebbe a kategóriába',
	'KB_Rules_post_cannot' => '<b>Nem</b> küldhetsz be új cikket ebbe a kategóriába',
	'KB_Rules_comment_can' => '<b>Hozzászólhatsz</b> a cikkekhez ebben a kategóriában',
	'KB_Rules_comment_cannot' => '<b>Nem</b> szólhatsz hozzá a cikkekhez ebben a kategóriában',
	'KB_Rules_edit_can' => '<b>Szerkesztheted</b> a cikkeidet ebben a kategóriában',
	'KB_Rules_edit_cannot' => '<b>Nem</b> szerkesztheted a cikkeidet ebben a kategóriában',
	'KB_Rules_delete_can' => '<b>Törölheted</b> a cikkeidet ebben a kategóriában',
	'KB_Rules_delete_cannot' => '<b>Nem</b> törölheted a cikkeidet ebben a kategóriában',
	'KB_Rules_rate_can' => '<b>Értékelheted</b> a cikkeket ebben a kategóriában',
	'KB_Rules_rate_cannot' => '<b>Nem</b> értékelheted a cikkeket ebben a kategóriában',
	'KB_Rules_approval_can' => '<b>Nem kell</b> jóváhagyni a cikkeket ebben a kategóriában',
	'KB_Rules_approval_cannot' => '<b>Jóvá kell hagyni</b> a cikkeket ebben a kategóriában',
	'KB_Rules_approval_edit_can' => '<b>Nem kell</b> jóváhagyni a szerkesztett cikkeket ebben a kategóriában',
	'KB_Rules_approval_edit_cannot' => '<b>Jóvá kell hagyni</b> a szerkesztett cikkeket ebben a kategóriában',
*/
	'KB_Rules_post_can' => '<b>Küldhetsz</b> be új cikket ebbe a kategóriába',
	'KB_Rules_post_cannot' => '<b>Nem</b> küldhetsz be új cikket ebbe a kategóriába',
	'KB_Rules_comment_can' => '<b>Hozzászólhatsz</b> a cikkekhez ebben a kategóriában',
	'KB_Rules_comment_cannot' => '<b>Nem</b> szólhatsz hozzá a cikkekhez ebben a kategóriában',
	'KB_Rules_edit_can' => '<b>Szerkesztheted</b> a cikkeidet ebben a kategóriában',
	'KB_Rules_edit_cannot' => '<b>Nem</b> szerkesztheted a cikkeidet ebben a kategóriában',
	'KB_Rules_delete_can' => '<b>Törölheted</b> a cikkeidet ebben a kategóriában',
	'KB_Rules_delete_cannot' => '<b>Nem</b> törölheted a cikkeidet ebben a kategóriában',
	'KB_Rules_rate_can' => '<b>Értékelheted</b> a cikkeket ebben a kategóriában',
	'KB_Rules_rate_cannot' => '<b>Nem</b> értékelheted a cikkeket ebben a kategóriában',
	'KB_Rules_approval_can' => '<b>Nem kell</b> jóváhagyni a cikkeket ebben a kategóriában',
	'KB_Rules_approval_cannot' => '<b>Jóvá kell hagyni</b> a cikkeket ebben a kategóriában',
	'KB_Rules_approval_edit_can' => '<b>Nem kell</b> jóváhagyni a szerkesztett cikkeket ebben a kategóriában',
	'KB_Rules_approval_edit_cannot' => '<b>Jóvá kell hagyni</b> a szerkesztett cikkeket ebben a kategóriában',
	'KB_Rules_moderate' => '%s<b>Moderálhatod</b>%s ezt a kategóriát', // %s replaced by a href links, do not remove!
	'KB_Rules_moderate_can' => '<b>Moderálhatod</b> ezt a kategóriát', // %s replaced by a href links, do not remove!

	'Comments_show' => 'Cikk hozzászólásainak megjelenítése.',
	'Comments_show_explain' => '- hozzászólások megjelenítése a cikkek oldalon is',
	'Comments_show_title' => 'Hozzászólások',

	'Mod_group' => 'TB Moderátor csoport',
	'Mod_group_explain' => '- TB admin jogosultságokkal!',

	'Bump_post' => 'Új cikk hozzászólás',
	'Bump_post_explain' => 'Cikk szerkesztésekor válasz írása a cikk témájába, így értesítve az új cikkről.',

	'Stats_list' => 'TB statisztika megjelenítése',
	'Stats_list_explain' => 'TB statisztika megjelenítése a fejlécben.',

	'Header_banner' => 'Logó megjelenítése',
	'Header_banner_explain' => 'TB logójának megjelenítése a fejlécben.',

	'Comment_info' => 'Hozzászólás beállítások',
	'Rating_info' => 'Értékelés beállítások',


//types
	'Types_man' => 'Típuskezelő',
	'KB_types_description' => 'Cikktípusok hozzáadása, szerkesztése és törlése',
	'Create_type' => 'Új cikktípus létrehozása:',
	'Type_created' => 'Cikktípus sikeresen létrehozva',
	'Click_return_type_manager' => 'Kattints %side%s, hogy visszatérj a Típuskezelőbe',

	'Edit_type' => 'Típus szerkesztése',
	'Edit_type_description' => 'Itt módosíthatod a típus nevét',
	'Type_edited' => 'Cikktípus sikeresen frissítve.',

	'Type_delete_title' => 'Cikktípus törlése',
	'Type_delete_desc' => 'Válaszd ki, milyen típusuak legyenek a cikkek a most törölt típusú helyett.',
	'Change_type' => 'Cikk típusának módosítása',
	'Change_and_Delete' => 'Módosít és töröl',
	'Type_deleted' => 'Cikktípus sikeresen törölve.',

	'Pre_text_name' => 'Cikk beküldési útmutató',
	'Pre_text_header' => 'Cikk beküldési útmutató fejléc',
	'Pre_text_body' => 'Cikk beküldési útmutató szövegtörzs',
	'Pre_text_explain' => 'Ez a szöveg jelenik meg a felhasználóknak a beküldési fórum tetején.',

	'Show' => 'Megjelenít',
	'Hide' => 'Elrejt',

	'Empty_fields' => 'Kérjük, töltsd az űrlap összes mezőjét.',
	'Empty_fields_return' => 'Kattints %side%s, hogy visszatérj az űrlaphoz.',
	'Empty_category' => 'Választanod kell egy kategóriát',
	'Empty_type' => 'Választanod kell egy cikktípust',
	'Empty_article_name' => 'Meg kell adnod a cikk nevét',
	'Empty_article_desc' => 'Meg kell adnod a cikk leírását',

	'Read_full_article' => '&#8226; Teljes cikk elolvasása',
	'Comments' => 'Hozzászólások',

	'No_add' => 'Nem adhatsz hozzá új cikket',
	'No_edit' => 'Nem szerkesztheted a cikket!',
	'Post_comments' => 'Szólj hozzá',

	'Category_sub' => 'Alkategóriák',
	'Quick_stats' => 'Gyors statisztika',

// added

	'Edited_Article_info' => 'Cikk frissítve általa: ',
	'No_Articles' => 'Ez a kategória üres!',
	'Not_authorized' => 'Nem vagy azonosítva!',
	'TOC' => 'Tartalom',

// Rate
	'Votes_label' => 'Értékelés ',
	'Votes' => 'szavazat',
	'No_votes' => 'Nincs szavazat',
	'Rate' => 'Cikk értékelése',
	'ADD_RATING' => '[Értékel]',
	'Rerror' => 'Már értékelted a cikket.',
	'Rateinfo' => 'A következő cikket szeretnéd értékelni: <i>{filename}</i>.<br />Válassz egy értéket. 1 a legrosszabb, 10 a legjobb.',
	'Rconf' => 'A következő cikket értékelted: <i>{filename}</i>, ennyire: {rate}.<br />Így a fájl új értékelése: {newrating}.',
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
	'Click_return_rate' => 'Kattints %side%s, hogy visszatérj a cikkhez',

// Print version
	'Print_version' => 'Nyomtatható változat',

// Stats
	'Top_toprated' => 'Legjobbra értékelt',
	'Top_most_popular' => 'Legnépszerűbb',
	'Top_latest' => 'Legújabb',

// Votes check
	'Votes_check_ip' => 'Értékelés ellenőrzése - ip',
	'Votes_check_ip_explain' => 'Egy ip-címről csak egy értékelés küldhető be.',

	'Votes_check_userid' => 'Értékelés ellenőrzése - felhasználó',
	'Votes_check_userid_explain' => 'Egy felhasználó csak egyszer szavazhat.',

	'Article_pag' => 'Cikk/oldal',
	'Article_pag_explain' => 'Hány cikk jelenjen meg egy kategóriában egy oldalon.',

	'Comments_pag' => 'Hozzászólás/oldal',
	'Comments_pag_explain' => 'Hány hozzászólás jelenlen meg a cikk alatt egy oldalon.',

	'News_sort' => 'Cikkek rendezése',
	'News_sort_explain' => 'Milyen szempont alapján legyenek rendezve a cikkek a kategórián belül.',

	'News_sort_par' => 'Csökkenő vagy növekvő rendezés',
	'News_sort_par_explain' => '',

// General strings from the news admin panel

	'News_settings' => 'TB blokk beállítások',
	'News_settings_short_explain' => 'TB blokk beállítása.',
	'News_settings_explain' => 'TB blokk konfigurálása. Ezen az oldalon beállíthatod, mely kategóriákat jelenítse meg a blokk.',

// Update result messages

	'News_updated_return_settings' => 'KB blokk konfigurációja sikeresen frissítve.<br /><br />Kattints %side%s, hogy visszatérj a főoldalra.', // %s's for URI params - DO NOT REMOVE
	'News_update_error' => 'Nem sikerült a TB blokk konfigurációjának frissítése.<br /><br />Ez a mod MySQL alapokon készült, ezért kérjük, értesítsd a készítőjét, ha továbbra is problémáid lennének. Amennyiben át tudod konvertálni az SQL adatbázis más adatbázis-típusra, kérjük, küldd el ide:<br />',

// Custom Field
	'Fieldselecttitle' => 'Válaszd ki a műveletet',
	'Afield' => 'Egyedi mező: Hozzáadás',
	'Efield' => 'Egyedi mező: Szerkesztés',
	'Dfield' => 'Egyedi mező: Törlés',
	'Mfieldtitle' => 'Egyedi mezők',
	'Afieldtitle' => 'Mező hozzáadása',
	'Efieldtitle' => 'Mező szerkesztése',
	'Dfieldtitle' => 'Mező törlése',
	'Fieldexplain' => 'Ezen az oldalon hozzáadhatsz egyedi mezőket, illetve szerkesztheted vagy törölheted a már meglévőket. Az egyedi mezőkkel több információt adhatsz meg a cikkekről.',
	'Fieldname' => 'Mező neve',
	'Fieldnameinfo' => 'Ez a mező neve, például \'Fájméret\'',
	'Fielddesc' => 'Mező leírása',
	'Fielddescinfo' => 'Ez legyen a mező leírása, például \'Fájl mérete Megabájtban\'',
	'Fieldadded' => 'Egyedi profilmező sikeresen hozzáadva',
	'Fieldedited' => 'Egyedi profilmező sikeresen frissítve',
	'Dfielderror' => 'Nem választottál ki mezőt a törléshez',
	'Fieldsdel' => 'A kijelölt mező(k) sikeresen törölve',

	'Field_data' => 'Választási lehetőségek',
	'Field_data_info' => 'Írd be a lehetőségeket, amelyek közül a felhasználók választhatnak. Minden egyes lehetőséget írj új sorba.',
	'Field_regex' => 'Regular Expression',
	'Field_regex_info' => 'You may require the input field to match a regular expression %s(PCRE)%s.',
	'Field_order' => 'Megjelenítési sorrend',

//Fields Types

	'Field_Input' => 'Egysoros szövegdoboz',
	'Field_Textarea' => 'Többsoros szövegdoboz',
	'Field_Radio' => 'Egyválasztós rádiógombok',
	'Field_Select' => 'Egyválasztós menü',
	'Field_Select_multiple' => 'Többválasztós menü',
	'Field_Checkbox' => 'Többválasztós jelölőnégyzet',

	'Click_return' => 'Kattints %side%s, hogy visszatérj az előző oldalra',

// added
	'Cat_all' => 'Összes',

	'L_Pages' => 'Oldalak',
	'L_Pages_explain' => 'Használd a(z) [pages] parancsot, hogy a cikket több oldalra válassza szét',
	'L_Toc' => 'Tartalomjegyzék (TOC)',
	'L_Toc_explain' => 'Használd a(z) [toc] parancsot, hogy új bejegyzést adj a tartalomjegyzékhez',
	'L_Abstract' => 'Absztrakt',
	'L_Abstract_explain' => 'Használd a(z) [abstract]...[/abstract] kódot absztrakt beillesztéséhez',

	'L_Title_Format' => 'Cím',
	'L_Title_Format_explain' => 'Használd a(z) [title]...[/title] kódot főcím megadásához',

	'L_Subtitle_Format' => 'Alcím',
	'L_Subtitle_Format_explain' => 'Használd a(z) [subtitle]...[/subtitle] kódot alcím beszúrásához',

	'L_Subsubtitle_Format' => 'Al-alcím',
	'L_Subsubtitle_Format' => 'Használd a(z) [subsubtitle]...[/subsubtitle] kódot kis fejléc beillesztéséhez',

	'L_Options' => 'Lehetőségek:',
	'L_Formatting' => 'Formázás:',

	'Default_article_id' => 'Set default article, for the article viewer',

// Added for v. 2.0
	'KB_comment_prefix' => '[TB] ',

	'Wysiwyg' => 'wysiwyg szerkesztő',
	'Wysiwyg_explain' => 'Ha engedélyezve van, akkor az alapértelmezett bbcode/html/hangulatjeles bevitel helyett egy wysiwyg-szerkesztő jelenik meg.',

	'Wysiwyg_path' => 'Útvonal a wysiwyg szerkesztőhöz',
	'Wysiwyg_path_explain' => 'Az útvonal (az icy phoenix gyökérkönyvtárától) a wysiwyg szoftver mappájához, pl. \'modules/\' hogyha például a tinymce-t a modules/tinymce mappába töltötted fel.',

	'Formatting_fixup' => 'Fix up formatting',
	'Formatting_fixup_explain' => 'If enabled, the article text is reformatted: word-wrapping, url truncates, img resizing and some bbcode reformatting etc',

	'Addtional_field' => 'Még több információ (nem kötelező)',

	'No_cat_comments_forum_id' => 'A hozzászólások engedélyezve vannak, azonban nem adtál meg fórumot a TB AVP - Kategóriák résznél',

// Quick Nav
	'Quick_nav' => 'Gyors TB navigáció',
	'Quick_jump' => 'Ugrás',

	'Categories' => 'Kategóriák',
	'Subcategory' => 'Alkategória',
	)
);

?>