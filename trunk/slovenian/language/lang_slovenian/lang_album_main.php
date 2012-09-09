<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_album_main.php 34 2009-05-07 22:45:10Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Smartor (smartor_xp@hotmail.com)
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
// Album Index
	'Photo_Album' => 'Foto-Galerija',
	'Pics' => 'Slike',
	'Last_Pic' => 'Zadnja slika',
	'Public_Categories' => 'Javne kategorije',
	'No_Pics' => 'Ni slik',
	'Users_Personal_Galleries' => 'Osebne galerije slik uporabnika',
	'Your_Personal_Gallery' => 'Tvoja osebna galerija slik',
	'Recent_Public_Pics' => 'Nove objavljene slike',
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',

// Category View
	'Category_not_exist' => 'Kategorija ne obstaja',
	'Upload_Pic' => 'Nalaganje slike',
	'Upload_Pics' => 'Nalaganje slik',
	'JUpload_Pic' => 'Naloži vec razlicnih slik z Juploadom',
	'Pic_Title' => 'Naziv slike',
	'View' => 'Pogledati',
	'Pic_Poster' => 'Uporabnik',
	'Pic_Image' => 'Slika',
	'Waiting' => ' Slike, ki cakajo na odobritev',

/*
	'Album_upload_can' => 'You <b>can</b> upload new pics in this category',
	'Album_upload_cannot' => 'You <b>cannot</b> upload new pics in this category',
	'Album_rate_can' => 'You <b>can</b> rate pics in this category',
	'Album_rate_cannot' => 'You <b>cannot</b> rate pics in this category',
	'Album_comment_can' => 'You <b>can</b> post comments to pics in this category',
	'Album_comment_cannot' => 'You <b>cannot</b> post comments to pics in this category',
	'Album_edit_can' => 'You <b>can</b> edit your pics and comments in this category',
	'Album_edit_cannot' => 'You <b>cannot</b> edit your pics and comments in this category',
	'Album_delete_can' => 'You <b>can</b> delete your pics and comments in this category',
	'Album_delete_cannot' => 'You <b>cannot</b> delete your pics and comments in this category',
*/
'Album_view_can' => 'Du <b>Slike</b> lahko vidiš.',
	'Album_view_cannot' => 'Slik <b>ne moreš</b> videti.',
	'Album_upload_can' => 'Nove slike <b>Lahko</b> naložiš v to kategorijo.',
	'Album_upload_cannot' => 'V to kategorijo <b>ne moreš</b> naložiti novih slik.',
	'Album_rate_can' => 'Slike <b>lahko</b> ocenjuješ v tej kategoriji',
	'Album_rate_cannot' => 'Slik v tej kategoriji <b>ne moreš</b> ocenjevati',
	'Album_comment_can' => 'V tej kategoriji <b>lahko</b> oddajaš svoje komentarje.',
	'Album_comment_cannot' => 'V tej kategoriji <b>ne moreš</b> oddajati komentarjev.',
	'Album_edit_can' => 'Slike <b>lahko</b> urejaš slike.',
	'Album_edit_cannot' => 'Slik v tej kategoriji <b>ne moreš</b> urejati.',
	'Album_delete_can' => 'Slike v tej kategoriji <b>lahko</b> izbrišeš.',
	'Album_delete_cannot' => 'Slik v tej kategoriji <b>ne moreš</b> izbrisati.',
	'Album_moderate_can' => 'To kategorijo <b>lahko</b> spreminjaš',

	'Edit_pic' => 'Urejanje',
	'Delete_pic' => 'Brisanje',
	'Rating' => 'Ocenjevanje',
	'Comments' => 'Komentarji',
	'Last_Comment' => 'Zadnji komentar',
	'New_Comment' => 'Nov komentar',
	'Not_rated' => '<i>Ni ocenjeno</i>',
	'Random_Pictures' => 'Nakljucne slike',
	'Highest_Rated_Pictures' => 'Visoko ocenjene slike',
	'Most_Viewed_Pictures' => 'Najbolj gledane slike',

	'Avatar_Set' => 'Uporabi kot avatar',
	'BBCode_Copy' => 'Kopiraj BB kodo',

// Upload
	'Pic_Desc' => 'Opis slike',
	'Plain_text_only' => 'Samo enostavno besedilo',
	'Max_length' => 'Najvecja dolžina (byti)',
	'Upload_pic_from_machine' => 'Naloži sliko s svojega trdega diska',
	'Upload_to_Category' => 'Naloži v kategorijo',
	'Upload_thumbnail_from_machine' => 'Naloži predogledno sliko s svojega trdega diska (enaka oblika datoteke kot slika',
	'Upload_thumbnail' => 'Naloži predogledno sliko',
	'Upload_thumbnail_explain' => 'Predogledna slika mora biti v enaki obliki datoteke kot slika!',
	'Thumbnail_size' => 'Velikost predogledne slike (v pikslih)',
	'Filetype_and_thumbtype_do_not_match' => 'Tvoja slika in predogledna slika morata biti v enaki obliki datoteke!',

	'Upload_no_title' => 'Vnesi naziv slike',
	'Upload_no_file' => 'Vnesi pot in imena',
	'Desc_too_long' => 'Opis je predolg',

	'JPG_allowed' => 'Ali je dovoljena oblika JPG?',
	'PNG_allowed' => 'Ali je dovoljena oblika PNG?',
	'GIF_allowed' => 'Ali je dovoljena oblika GIF?',

	'Album_reached_quota' => 'Kategorija je dosegla najvecje število slik. Tukaj lahko naložiš vec slik. Za vec informacij prosim kontaktiraj administratorja!',
	'User_reached_pics_quota' => 'Kategorija je dosegla najvecje število slik. Tukaj lahko naložiš vec slik. Za vec informacij prosim kontaktiraj administratorja!',

	'No_valid_category_selected' => 'Izbrana je bila neveljavna kategorija albumat',
	'No_category_to_upload' => 'Na žalost ne obstaja nobena kategorija v katero bi lahko naložil slike.',
	'Not_allowed_file_type' => 'Oblika datoteke ni dovoljena',
	'Upload_image_size_too_big' => 'Slika je prevelika',
	'Upload_thumbnail_size_too_big' => 'Predogledna slika je prevelika',

	'Missed_pic_title' => 'Vnesti je potrebno naziv slike.',

	'Click_return_category' => 'Klikni %stukaj%s, za vrnitev v kategorijo.',
	'Click_return_album_index' => 'Za obracanje indexa albuma klikni %stukaj%s..',

	'Add_File' => 'Dodaj datoteko',
	'File_thumbnail_count_mismatch' => 'Število naloženih slik se ne ujema s številom predoglenih slik.',
	'No_thumbnail_for_picture_found' => 'Predogledna slika s tem imenom  ne ustreza nobeni naloženi sliki.',
	'No_picture_for_thumbnail_found' => 'Es wurde kein Bild für das hochgeladene Thumbnail namens %s gefunden.',
	'Unknown_file_and_thumbnail_error_mismatch' => 'Pojavila se je neznana napaka pri nalaganju slike in predoglene slike<br />Ime slike %s in ime predogledne slike %s<br />',
	'Picture_exceeded_maximum_size_INI' => 'Ime slike \'%s\' je predolgo in bo izpušceno.<br />',
	'Thumbnail_exceeded_maximum_size_INI' => 'Ime predogledne slike \'%s\' je predolgo in bo izpušceno.<br />',
	'Execution_time_exceeded_skipping' => 'Najvecji dovoljeni cas za izvedbo skripte je bil prekinjen, slike bodo izpušcene:<br />',
	'Skipping_uploaded_picture_file' => '%s<br />',
	'Skipping_uploaded_picture_and_thumbnail_file' => '%s (Thumbnail: %s)<br />',
	'Album_upload_not_successful' => 'Slika ni bila uspešno naložena.<br /><br />',
	'Album_upload_partially_successful' => 'Samo del slike je bil uspešno naložen.<br /><br />',
	'No_pictures_selected_for_upload' => 'Niste izbrali nobene slike ali pa je prišlo do neznane napake.',

// 'Bad_upload_file_size' => 'Naložena datoteka prevelika ali poškodovana',
// 'Album_upload_successful' => 'Tvoja slika je bila uspešno naložena',
// 'Album_upload_need_approval' => 'Tvoja slika je bila usprešno naložena <br /><br />vendar je pa aktivirano preverjanje slike, tako da bo tvoja slika javno objavljena šele ko jo preveri administrator ali moderator',

	'Bad_upload' => 'Nalaganje slik ni uspelo.',
	'Bad_upload_file_size' => 'Naložena datoteka je prevelika ali poškodovana.',
	'Album_upload_successful' => 'Tvoja slika je bila uspešno naložena.',
	'Album_upload_need_approval' => 'Tvoja slika je bila usprešno naložena <br /><br />vendar je pa aktivirano preverjanje slike, tako da bo tvoja slika javno objavljena šele ko jo preveri administrator ali moderator',

	'Rotation' => 'Rotiraj (v smeri urinega kazalca) - stopinj',

	'Max_file_size' => 'Najvecja dovoljena velikost datoteke (v bytih)',
	'Max_width' => 'Najvecja širina slike pred kompresijo (v pikslih)',
	'Max_height' => 'Najvecja višina slike pred kompresijo (v pikslih)',

// Album Nuffload
	'time_elapsed' => 'Preteceni cas',
	'time_remaining' => 'Preostali cas',
	'upload_in_progress' => 'Slika bo naložena…',
	'please_wait' => 'Prosim pocakaj…',
	'uploaded' => 'Naloži %multi_id% od %multi_max% možnih slik',
	'no_file_received' => 'Ni prejetih slik',
	'no_thumbnail_file_received' => 'Ni prejetih predoglednih slik',
		'file_too_big' => 'Presežena velikost slike.',
	'thumbnail_too_big' => 'Thumbnail-Dateigröße überschritten',
	'image_res_too_high' => 'Previsoka locljivost slike',
	'add_field' => 'Dodaj polje za nalaganje',
	'remove_field' => 'Odstrani polje za nalaganje',
	'ZIP_allowed' => 'Dovoli nalaganje ZIP datotek',


// View Pic
	'Pic_ID' => 'ID',
	'Pic_Details' => 'Podrobnosti slike',
	'Pic_Size' => 'Velikost',
	'Pic_Type' => 'Tip slike',
	'Pic_BBCode' => 'BB Koda',
	'Pic_not_exist' => 'Slika ne obstaja',
	'Click_enlarge' => 'Klikni na sliko za povecanje',
	'Prev_Pic' => 'Prikaži prejšnjo sliko',
	'Next_Pic' => 'Zeige nächstes Bild',
	'Slideshow' => 'Diashow',
	'Slideshow' => 'Predvajaj slike',
	'Slideshow_Delay' => 'Zakasnitev predvajanja slik',
	'Slideshow_On' => 'Predvajaj slike',
	'Slideshow_Off' => 'Ustavi predvajanje slik',
	'Pics_Nav' => 'Navigacija slik',
	'Pics_Nav_Next' => 'Naslednja slika',
	'Pics_Nav_Prev' => 'Prejšnja slika',
	'Pics_Counter' => 'Slika %s od %s',



// Edit Pic
	'Edit_Pic_Info' => 'Ostali podatki o sliki',
	'Pics_updated_successfully' => 'Podatki o slikah so uspešno osveženi',

// Delete Pic
	'Album_delete_confirm' => 'Si preprican, da želiš izbrisati sliko(e)?',
	'Pics_deleted_successfully' => 'Slika uspešno izbrisana',

// ModCP
	'Approval' => 'Odobritev',
	'Approve' => 'Odobriti',
	'Unapprove' => 'Razveljavi odobritev',
	'Status' => 'Stanje',
	'Locked' => 'Zaklenjeno',
	'Not_approved' => 'Ni odobreno',
	'Approved' => 'odobreno',
	'Copy' => 'kopirati',
	'Move_to_Category' => 'Razvrsti v kategorijo',
	'Pics_moved_successfully' => 'Slike so bile uspešno razvrpcene',
	'Copy_to_Category' => 'Kopiranje v kategorijo',
	'Pics_copied_successfully' => 'Slike so bile uspešno kopirane',
	'Pics_locked_successfully' => 'Slike so bile uspešno zaklenjene',
	'Pics_unlocked_successfully' => 'Slike so bile uspešno odklenjene',
	'Pics_approved_successfully' => 'Slike so bile uspešno odobrene',
	'Pics_unapproved_successfully' => 'Odobritev slik je bila uspešno razveljavljena',

// Rate
	'Current_Rating' => 'Trenutna ocena',
	'Please_Rate_It' => 'Prosim oceni',
	'Login_To_Vote' => 'Za ocenjevanje se je potrebno priajviti',
	'Already_rated' => 'Ta slika je že bila ocenjena',
	'Own_Pic_Rate' => 'Te slike ni dovoljno ocenjevati.',
	'Album_rate_successfully' => 'Slika je bila uspešno ocenjena.',
	'Click_rate_more' => 'Klikni %shier%s za nadaljno ocenjevanje slik',
	'Hot_Or_Not' => 'Hot Or Not',

// Comment
	'Comment_no_text' => 'Prosim vnesi komentar',
	'Comment_too_long' => 'Tvoj komentar je predolg',
	'Comment_delete_confirm' => 'Si preprican, da želiš izbrisati svoj komentar?',
	'Pic_Locked' => 'Oprosti, ta slika je zaklenjena. Nadaljni komentarji niso možni.',
	'Post_your_comment' => 'Prosim vnesi komentar',

// Personal Gallery
	'Personal_Gallery_Explain' => 'Osebno galerijo slik drugega uporabnika lahko pregledaš šele ko klikneš na povezavo do profila tega ',
	'Personal_gallery_not_created' => 'Osebna galerija slik uporavbika %s je prazna ali pa še ni bila ustvarjena',
	'Not_allowed_to_create_personal_gallery' => 'Oprosti, administrator ti ne dovoli ustvariti osebne galerije',
	'Click_return_personal_gallery' => 'Za vrnitev na osebno galerijo klikni %shier%s.',

// Download Archive
	'Download_pics' => 'Prenos slik (ZIP)',
	'Download_page' => 'Prenos slik s tega spletnega mesta (ZIP)',
	'No_Download_auth' => 'Nimaš dovolj pravica za prenos slik iz te galerije slik',

// Email Notification
	'Email_Notification' => 'Obvešcanje o albumu preko e-pošte',
	'Email_Notification_Explain' => 'Ta nastavitev dovoli prejemati administratorjem obvestilo o naloženi sliki po e-pošti.',
	'Approvation_OK' => 'Odobreno',
	'Approvation_NO' => 'Caka na odobritev',

// Album Hierarchy Index Table
	'Last_Comment' => 'Zadnji komentar',
	'Last_Comments' => 'Zadnji komentarji',
	'No_Comment_Info' => 'Ni komentarjev',
	'No_Pictures_In_Cat' => 'Ni slik v kategoriji',
	'Total_Pics' => 'Skupno število slik',
	'Total_Comments' => 'Skupno število komentarjev',
	'Last_Index_Thumbnail' => 'Zadnja slika',
	'One_Sub_Total_Pics' => '%d slika ',
	'Multiple_Sub_Total_Pics' => '%d slik',
	'Album_sub_categories' => 'Podkategorija',
	'No_Public_Galleries' => 'Ni javno objavljenih galerij slik',
	'One_new_picture' => '%d nova slika',
	'Multiple_new_pictures' => '%d novih slik',

// Personal Album Hierarchy Index Table
	'Personal_Categories' => 'Persönliche Foto-Galerien',
	'Create_Personal_Categories' => 'Persönliche Foto-Galerie erstellen',
	'Personal_Cat_Admin' => 'Kategorije osebnih galerij slik – Administracija',
	'Recent_Personal_Pics' => 'Zadnje slike iz osebne galerije slik od %s',

// Album Moderator Control Panel
	'Modcp_check_all' => 'Oznaci vse',
	'Modcp_uncheck_all' => 'Odstrani vse oznake',
	'Modcp_inverse_selection' => 'Vrni izbor',

	'Show_selected_pic_view_mode' => 'Prikaži samo izbrane kategorije v osebni galeriji slik',
	'Show_all_pic_view_mode' => 'Prikaži vse slike v tej osebni galeriji slik',

// Access language strings
	'Album_Can_Manage_Categories' => 'V tej kategoriji <b>lahko</b> urejaš slike %smanagen%s v osebni galeriji slik ',
	'No_Personal_Category_admin' => 'Ne smeš urejati slik v tej osebni galriji slik',

// The picture list of a member (album_memberlist.php)
	'Pic_Cat' => 'Kategorija',
	'Picture_List_Of_User' => 'Vse slike od %s',
	'Member_Picture_List_Explain' => 'Ce klikneš na povezavo do osebnega profila uporabnika lahko vidiš celotni seznam naloženih slik tega uporabnika.',
	'Comment_List_Of_User' => 'Vsi komentarji %s',
	'Rating_List_Of_User' => 'Vse ocene %s',
	'Show_All_Pictures_Of_user' => 'Prikaži vse slike %s',
	'Show_All_Comments_Of_user' => 'Prikaži vse komentarje %s',
	'Show_All_Ratings_Of_user' => 'Prikaži vse ocene %s',

// The pictures list
	'All_Picture_List_Of_User' => 'Vse slike',
	'All_Comment_List_Of_User' => 'Vsi komentarji',
	'All_Rating_List_Of_User' => 'Vse ocene',
	'All_Show_All_Pictures_Of_user' => 'Prikaži vse slike',
	'All_Show_All_Comments_Of_user' => 'Prikaži vse komentarje',
	'All_Show_All_Ratings_Of_user' => 'Prikaži vse ocene',

	'Not_commented' => '<i>Ni komentarja</i>',

// Nuff's Stuff
	'Nuff_Click' => 'Za uporabo posebnih ucinkov klikni tukaj',
	'Nuff_UnClick' => 'Za normalen prikaz klikni tukaj',
	'Nuff_Title' => 'Posebni ucinki',
	'Nuff_Explain' => 'Na tej strani se lahko uporablja vec posebnih ucinkov.<br />To je <i><b>velika obremenitev CPU strežnika</b></i>, torej prosim, da tega ne zlorabljaš. Doloceni ucinki spremenijo velikost slike samodejno, da razbremeni CPU',
	'Nuff_Normal' => 'Normalna slika',
	'Nuff_Normal_Explain' => 'Ucinki niso uporabljeni',
	'Nuff_BW' => 'Crna / Bela',
	'Nuff_BW_Explain' => 'Posebni ucinek spremeni sliko v crno/belo',
	'Nuff_Sepia' => 'Sepia',
	'Nuff_Sepia_Explain' => 'Posebni ucinek zatemni sliko v Sepia tehniki Sepia (spominja na stare posnetke)',
	'Nuff_Flip' => 'Zasuk',
	'Nuff_Flip_Explain' => 'Funkcija zasuka sliko',
	'Nuff_Mirror' => 'Zrcalno',
	'Nuff_Mirror_Explain' => 'Funkcija prezrcali sliko',
	'Nuff_Flip_H' => 'Vodoravno',
	'Nuff_Flip_V' => 'Navpicno',
	'Nuff_Rotate' => 'Zasuk slike v smeri proti urinemu kazalcu',
	'Nuff_Rotate_Explain' => 'Funkcija zasuka sliko v smeri proti urinemu kazalcu',
	'Nuff_Resize' => 'Sprememba velikosti',
	'Nuff_Resize_Explain' => 'Funkcija spremeni velikost slike',
	'Nuff_Resize_W' => 'Širina',
	'Nuff_Resize_H' => 'Višina',
	'Nuff_Resize_No_Resize' => 'Brez sprememb velikosti',
	'Nuff_Watermark' => 'Vodni znak',
	'Nuff_Watermark_Explain' => 'Funkcija uporabi vodni znak na sliki',
	'Nuff_Recompress' => 'Ponovno stisni',
	'Nuff_Recompress_Explain' => 'Funkcija ponovno stisne sliko',
	'Nuff_Alpha' => 'Alfa',
	'Nuff_Alpha_Explain' => 'Ucinek cez sliko položi alfa kanal',
	'Nuff_Blur' => 'Neostrost',
	'Nuff_Blur_Explain' => 'Ucinek dovoli prikaz neostre slike',
	'Nuff_Pixelate' => 'Spremeni locljivost',
	'Nuff_Pixelate_Explain' => 'Ucinek uporabi filter locljivosti za spremembo locljivosti',
	'Nuff_Scatter' => 'Sipanje',
	'Nuff_Scatter_Explain' => 'Ucinek uporabi filter sipanja na sliki',
	'Nuff_Infrared' => 'Infrardece',
	'Nuff_Infrared_Explain' => 'Ucinek vstavi infrardeci filter cez sliko',
	'Nuff_Tint' => 'Temnenje',
	'Nuff_Tint_Explain' => 'Ucinek vstavi filter rdecega crnila cez sliko',
	'Nuff_Interlace' => 'Prepletanje (vodoravne crte)',
	'Nuff_Interlace_Explain' => 'Ucinek vstavi filter vodravnih crt cez sliko',
	'Nuff_Screen' => 'Zaslon (vodoravne / navpricne crte)',
	'Nuff_Screen_Explain' => 'Ucinek vstavi filter zaslona cez sliko (vodoravne &amp; navpricne crte)',
	'Nuff_Stereogram' => 'Stereogram',
	'Nuff_Stereogram_Explain' => 'Ucinek pretvori sliko v stereogram (potrebno BW 16 bit)',

	'Pic_Gallery' => 'Hitra galerija slik',
	'Select_Pic' => 'Izberi sliko',
	'Select_Category' => 'Izberi kategorijo',
	'Title_Description' => 'Naziv &amp; Opis',

// Pic watch
	'No_longer_watching_comment' => 'Trenutno ne opazuješ vec komentarjev te slike',
	'Watching_comment' => 'Trenutno opazuješ komentarje te slike',
	'Pic_comment_notification' => 'Obvestilo o komentarju galerije slik',
	'Pic_comment_watch_checkbox' => 'Oznaci kvadratek ob komentarjih te slike da bi prejemal obvestila:',
	'Watch_pic' => 'Opazuj to sliko zaradi komentarjev.',
	'Unwatch_pic' => 'Prenehaj z opazovanjem komentarjev te slike',
	'Click_return_pic' => 'Za vrnitev na sliko klikni %stukaj%s.',
	'Pic_RDF' => 'RSS-Feed 1.0',
	'Pic_RSS' => 'RSS-Feed 2.0',
	)
);

?>