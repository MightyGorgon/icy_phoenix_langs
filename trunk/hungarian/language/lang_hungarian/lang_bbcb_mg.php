<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_bbcb_mg.php 92 2009-04-01 13:58:18Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
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

$lang = array_merge($lang, array (
  'bbcb_mg_lang' => 'lang_hungarian',
  
  'wrote' => 'írta',
  'Quote' => 'Idézet',
  'Code' => 'Kód',
  'Hide' => 'Rejt',
  'Show' => 'Mutat',
  'Download' => 'Letöltés',
  'Syntax' => 'Szintaxis',
  'Select' => 'Kiválaszt',
  'ReviewPost' => 'Hozzászóláshoz ugrás',
  'OffTopic' => 'Témán kívüli',
  'OpenNewWindow' => 'Klikk: új ablakban megnézed a képet',
  'C++' => 'C++',
  'PhpCode' => 'Php',
  
  'Close_Tags' => 'Tagok bezárása',
  'Styles_tip' => 'Tipp: a stílusokkal gyorsan kinézetet adhatsz egy kijelölt szövegnek.',

// Smiley Creator
  'bbcode_sc_help' => 'Smiley-gyár: [schild=1]szöveg[/schild] Egy szöveges táblát tartó Smiley készítése',
  'Smiley_creator' => 'Smiley-gyár',
  'SC_shieldtext' => 'Smiley szövege',
  'SC_fontcolor' => 'Szövegszín',
  'SC_shadowcolor' => 'Árnyék színe',
  'SC_shieldshadow' => 'Árnyékolt tábla',
  'SC_shieldshadow_on' => 'Aktiválva',
  'SC_shieldshadow_off' => 'Deaktiválva',
  'SC_smiliechooser' => 'Smiley kiválasztása',
  'SC_random_smilie' => 'Valamelyik Smiley',
  'SC_default_smilie' => 'Alap Smiley',
  'SC_create_smilie' => 'Létrehoz',
  'SC_stop_creating' => 'Mégsem',
  'SC_error' => 'Emeld fel a pajzsod - nesze a szöveged...',
  'SC_another_shield' => 'Akarsz egy másik Smiley-t készíteni?',
  'SC_notext_error' => 'Szöveg nélkül nem tudsz Smiley-t készíteni',
  
  'bbcode_b_help' => 'Kövér szöveg: [b][/b] (alt+b)',
  'bbcode_i_help' => 'Dõlt szöveg: [i]szöveg[/i] (alt+i)',
  'bbcode_u_help' => 'Aláhúzott szöveg: [u]szöveg[/u] (alt+u)',
  'bbcode_q_help' => 'Idézett szöveg: [quote]szöveg[/quote] (alt+q)',
  'bbcode_c_help' => 'Kód megjelenítése: [code]kód[/code] (alt+c)',
  'bbcode_l_help' => 'Lista: [list]szöveg[/list] (alt+l)',
  'bbcode_o_help' => 'Számozott lista: [list=1]szöveg[/list] (alt+o)',
  'bbcode_p_help' => 'Kép beszúrása: [img]http://kép_url[/img] (alt+p)',
  'bbcode_w_help' => 'URL beszúrása: [url]http://url[/url] vagy [url=http://url]URL szövege[/url] (alt+w)',
  'bbcode_a_help' => 'Minden nyitott BBCode bezárása',
  'bbcode_s_help' => 'Betû színe: [color=red]szöveg[/color] Tipp: változtathatod a színt a color=#FF0000 változtatásával',
  'bbcode_f_help' => 'Betûméret: [size=x-small]kicsi szöveg[/size]',
  
  'Font_color' => 'Betû színe',
  'color_default' => 'Alapértelmezett',
  'color_dark_red' => 'Sötétvörös',
  'color_red' => 'Vörös',
  'color_orange' => 'Narancs',
  'color_brown' => 'Barna',
  'color_yellow' => 'Sárga',
  'color_green' => 'Zöld',
  'color_olive' => 'Olíva',
  'color_cyan' => 'Cián',
  'color_blue' => 'Kék',
  'color_dark_blue' => 'Sötétkék',
  'color_indigo' => 'Indigó',
  'color_violet' => 'Viola',
  'color_white' => 'Fehér',
  'color_black' => 'Fekete',
  
  'color_cadet_blue' => 'Kadétkék',
  'color_coral' => 'Korál',
  'color_crimson' => 'Karmazsin',
  'color_dark_grey' => 'Sötétszürke',
  'color_dark_orchid' => 'Sötét orchidea',
  'color_gold' => 'Arany',
  'color_gray' => 'Szürke',
  'color_light_blue' => 'Világoskék',
  'color_light_cyan' => 'Világoscián',
  'color_light_green' => 'Világoszöld',
  'color_light_grey' => 'Világosszürke',
  'color_light_orange' => 'Világos narancs',
  'color_peach' => 'Barack',
  'color_power_orange' => 'Erõs narancs',
  'color_sea_green' => 'Tengerzöld',
  'color_silver' => 'Ezüst',
  'color_tomato' => 'Paradicsom',
  'color_turquoise' => 'Türkiz',
  'color_chocolate' => 'Csokoládé',
  'color_deepskyblue' => 'Égkék',
  'color_midnightblue' => 'Középkék',
  'color_darkgreen' => 'Sötétzöld',
  
  'Font_size' => 'Betûméret',
  'font_tiny' => 'Apró',
  'font_small' => 'Kicsi',
  'font_medium' => 'Közepes',
  'font_normal' => 'Normál',
  'font_large' => 'Nagy',
  'font_huge' => 'Óriás',
  'font_xl' => 'XL',

// Font Type
  'Font_Type' => 'Betû',
  'Font_Arial' => 'Arial',
  'Font_Arial_black' => 'Arial Black',
  'Font_Comic_sans_ms' => 'Comic Sans MS',
  'Font_Courier_new' => 'Courier New',
  'Font_Impact' => 'Impact',
  'Font_Lucida_console' => 'Lucida Console',
  'Font_Lucida_sans_unicode' => 'Lucida Sans Unicode',
  'Font_Microsoft_sans_serif' => 'Microsoft Sans Serif',
  'Font_Symbol' => 'Symbol',
  'Font_Tahoma' => 'Tahoma',
  'Font_Times_new_roman' => 'Times New Roman',
  'Font_Traditional_arabic' => 'Traditional Arabic',
  'Font_Trebuchet_ms' => 'Trebuchet MS',
  'Font_Verdana' => 'Verdana',
  'Font_Webdings' => 'Webdings',
  'Font_Wingdings' => 'Wingdings',

// Alt Buttons
  'bbcb_mg_colorpicker' => 'Színpipetta',
  'bbcb_mg_j' => 'Sorkizárt',
  'bbcb_mg_r' => 'Jobbra',
  'bbcb_mg_c' => 'Középre',
  'bbcb_mg_l' => 'Balra',
  'bbcb_mg_b' => 'Félkövér',
  'bbcb_mg_i' => 'Dõlt',
  'bbcb_mg_u' => 'Aláhúzott',
  'bbcb_mg_s' => 'Áthúzott',
  'bbcb_mg_f' => 'Árnyék',
  'bbcb_mg_g' => 'Szivárvány',
  'bbcb_mg_tab' => 'Tábla',
  'bbcb_mg_td' => 'Cella',
  'bbcb_mg_md' => 'Legördülõ',
  'bbcb_mg_mu' => 'Felgördülõ',
  'bbcb_mg_ml' => 'Balra futó',
  'bbcb_mg_mr' => 'Jobbra futó',
  'bbcb_mg_code' => 'Kód',
  'bbcb_mg_phpbbmod' => 'phpBB Mod Template',
  'bbcb_mg_quote' => 'Idézet',
  'bbcb_mg_spoil' => 'Keret',
  'bbcb_mg_highlight' => 'Kiemelés',
  'bbcb_mg_url' => 'Url',
  'bbcb_mg_eml' => 'Email',
  'bbcb_mg_img' => 'Kép',
  'bbcb_mg_imgl' => 'Kép balra',
  'bbcb_mg_imgr' => 'Kép jobbra',
  'bbcb_mg_albumimg' => 'Kép albumból',
  'bbcb_mg_flsh' => 'Flash',
  'bbcb_mg_vid' => 'Videó',
  'bbcb_mg_gvid' => 'Google Video',
  'bbcb_mg_youtube' => 'YouTube',
  'bbcb_mg_ram' => 'Ram',
  'bbcb_mg_strm' => 'Stream',
  'bbcb_mg_emff' => 'EMFF (MP3)',
  'bbcb_mg_lst' => 'Lista',
  'bbcb_mg_hr' => 'Vízszintes vonal',
  'bbcb_mg_bullet' => 'Elválasztó pont',
  'bbcb_mg_sup' => 'Fel',
  'bbcb_mg_sub' => 'Le',
  'bbcb_mg_lsto' => 'Számozott lista',
  'bbcb_mg_fade' => 'Átlátszó',
  'bbcb_mg_spoiler' => 'Keret',
  'bbcb_mg_cell' => 'Cella',
  'bbcb_mg_grad' => 'Szivárvány',
  'bbcb_mg_upload_img' => 'Kép feltöltése a PostImage.org-ra, és ezen szöveg hozzáadása',
  'bbcb_mg_posticyimage' => 'Kép feltöltése, és ezen szöveg hozzáadása',
  'bbcb_mg_albumimgl' => 'Kép albumból balra',
  'bbcb_mg_albumimgr' => 'Kép albumból jobbra',
  'bbcode_help' => 'BBCode súgó',
  
  'xs_bbc_hide_message' => 'Rejtett üzenet',
  'xs_bbc_hide_quote_message' => 'Rejtett üzenet idézése is rejtve történik.',
  'xs_bbc_hide_message_explain' => 'Bocsi, de mielõtt válaszolsz egy hozzászólásra regisztrálnod kell magadat.',
  
  'bbcode_url' => 'Enter the URL (eg. http://www.phpbb.com)',
  'bbcode_url_title' => 'Enter the title of the link',
  'bbcode_url_empty' => 'You didn\'t enter a url',
  'bbcode_url_errors' => 'Error!',
	)
);

// JavaScript Text - BEGIN
// Forms
$js_lang = array();
$js_lang = array_merge($js_lang, array (
  's_formerrors' => 'Be kell írnod valamilyen szöveget, mielõtt beküldöd az üzenetet',
  's_gen_error' => ':: Hiba ::\\n\\n',
  's_url_insert' => 'URL beszúrása (pl. http://www.icyphoenix.com/)',
  's_url_insert_tip' => 'http://',
  's_url_error' => 'Nem adtál meg semmilyen URL-t',
  's_url_title_insert' => 'Add meg a link címét',
  's_url_title_insert_tip' => 'Link',
  's_url_title_error' => 'Nem adtál meg semmit sem lapcímnek',
  's_email_insert' => 'Add meg az email címet',
  's_email_insert_tip' => 'neved@valami.hu',
  's_email_error' => 'Nem adtál meg semmilyen email címet',
  's_img_insert' => 'Add meg a kép URL-jét',
  's_img_error' => 'Nem adtál meg semmilyen kép URL-t',
  's_albumimg_insert' => 'Add meg az albumkép ID-jét',
  's_albumimg_insert_tip' => 'ID',
  's_albumimg_error' => 'Nem adtál meg semmit sem albumkép ID-nek',
  's_ram_insert' => 'Add meg a Real Media fájl URL-jét',
  's_stream_insert' => 'Add meg az audió fájl URL-jét',
  's_video_insert' => 'Add meg a  videó fájl URL-jét',
  's_video_w_insert' => 'Add meg a videó szélességét',
  's_video_w_error' => 'Nem adtál meg semmit sem videószélességnek',
  's_video_h_insert' => 'Add meg a vidó magasságát',
  's_video_h_error' => 'Nem adtál meg semmit sem videómagasságnak',
  's_googlevideo_insert' => 'Please write Google Video file ID',
  's_youtube_insert' => 'Please write YouTube file ID',
  's_emff_insert' => 'Please write mp3 file URL',
  's_flash_insert' => 'Add meg a Flash fájl URL-jét',
  's_flash_w_insert' => 'Add meg a Flash szélességét',
  's_flash_w_error' => 'Nem adtál meg semmit sem Flash szélességnek',
  's_flash_h_insert' => 'Add meg a Flash magasságát',
  's_flash_h_error' => 'Nem adtál meg semmit sem Flash magasságnak',
  's_id_insert_tip' => 'ID',
  's_id_insert_error' => 'Nem adtál meg semmilyen ID-t',
  's_file_insert_error' => 'Nem adtál meg semmit sem fájl URL-nek',
  's_grad_select' => 'Elõsször válaszd ki a szöveget',
  's_grad_error' => 'Csak kevesemm, mint 120 levéllel mûködik',
  's_grad_path' => 'includes/grad.htm',
  's_view_more_code' => 'További kód megnézése',
  's_image_upload' => 'Töltsd fel a képet a PostImage.org-ra, és add meg itt az üzenetedben',
  's_posticyimage' => 'Töltsd fel a képed, és add meg itt az üzenetedben',

// Helpline messages
  's_a_help' => 'Zárd be az összes nyitott tagot',
  's_b_help' => 'Félkövér szöveg: [b]szöveg[/b]',
  's_i_help' => 'Dõlt szöveg: [i]szöveg[/i]',
  's_u_help' => 'Aláhúzott szöveg: [u]szöveg[/u]',
  's_strike_help' => 'Áthúzott szöveg: [strike]szöveg[/strike]',
  's_quote_help' => 'Idézett szöveg: [quote]szöveg[/quote]',
  's_code_help' => 'Kód megjelenítése: [code]szöveg[/code]',
  's_phpbbmod_help' => 'phpBB Mod Template',
  's_highlight_help' => 'Kiemelés: [highlight=#FFFFAA]szöveg[/highlight]',
  's_img_help' => 'Kép beszúrása: [img]http://kép_url[/img]',
  's_imgl_help' => 'Kép beszúrása balra igazítással: [img align=left]http://kép_url[/img]',
  's_imgr_help' => 'Kép beszúrása jobbra igazítással: [img align=right]http://kép_url[/img]',
  's_albumimg_help' => 'Kép beszúrása az albumból: [albumimg]Albumkép ID[/albumimg]',
  's_albumimgl_help' => 'Kép beszúrása az albumból balra igazítással: [albumimg align=left]Albumkép ID[/albumimg]',
  's_albumimgr_help' => 'Kép beszúrása az abumból jobbra igazítással: [albumimg align=right]Albumkép ID[/albumimg]',
  's_url_help' => 'URL beszúrása: [url]http://url[/url] vagy [url=http://url]URL szövege[/url]',
  's_fc_help' => 'Betûszín: [color=red]szöveg[/color] (Tipp: használd a szín megváltoztatásához color=#FF0000)',
  's_fs_help' => 'Betûméret: [size=9]kicsi szöveg[/size]',
  's_ft_help' => 'Betûtípus: [font=Andalus]szöveg[/font]',
  's_table_help' => 'Tábla beszúrása: [table]szöveg[/table]',
  's_td_help' => 'Táblaoszlop beszúrása: [td]szöveg[/td]',
  's_mail_help' => 'Email beszúrása: [email]E-mail ide[/email]',
  's_grad_help' => 'Szivárványos szöveg beszúrása',
  's_right_help' => 'Szöveg jobbra igazítása: [align=right]szöveg[/align]',
  's_left_help' => 'Szöveg balra igazítása: [align=left]szöveg[/align]',
  's_center_help' => 'Szöveg középre igazítása: [align=center]szöveg[/align]',
  's_justify_help' => 'Sorkizárt szöveg: [align=justify]szöveg[/align]',
  's_marqr_help' => 'Jobbra futó szöveg: [marq=right]szöveg[/marq]',
  's_marql_help' => 'Balra futó szöveg: [marq=left]szöveg[/marq]',
  's_marqu_help' => 'Felfelé gördülõ szöveg: [marq=up]szöveg[/marq]',
  's_marqd_help' => 'Lefelé gördülõ szöveg: [marq=down]szöveg[/marq]',
  's_sup_help' => 'Emelt szöveg: [sup]szöveg[/sup]',
  's_sub_help' => 'Süllyesztett: [sub]szöveg[/sub]',
  's_hr_help' => 'Elválasztó vonal [hr]',
  's_bullet_help' => 'Listaelválasztó pont [*]',
  's_video_help' => 'Videó fájl beillesztése: [video width=# height=#]file URL[/video]',
  's_googlevideo_help' => 'Google Video fájl beillesztése: [googlevideo]Google Video ID[/googlevideo]',
  's_youtube_help' => 'YouTube fájl beillesztése: [youtube]YouTube ID[/youtube]',
  's_quick_help' => 'Quicktime videó beillesztése: [quick]http://quicktime_video_url/[/quick]',
  's_flash_help' => 'Flash fájl beillesztése: [flash width=# height=#]flash URL[/flash]',
  's_ram_help' => 'Real Media fájl beillesztése: [ram]File URL[/ram]',
  's_stream_help' => 'Stream fájl beillesztése: [stream]File URL[/stream]',
  's_emff_help' => 'MP3 fájl beillesztése: [emff]File URL[/emff]',
  's_fade_help' => 'Árnyékolás: [fade]szöveg[/fade] vagy [fade][img]http://image_url/[/img][/fade]',
  's_spoiler_help' => 'Keret: [spoiler]szöveg[/spoiler]',
  's_cell_help' => 'Cella: [cell]szöveg[/cell]',
  's_list_help' => 'Számozott lista: [list|=1|a]szöveg[/list] (Tipp: a használj listaelválaszót [*] a lista elemei között)',
  's_listo_help' => 'Rendezett lista: [list=1|a]szöveg[/list] (Tipp: a használj listaelválaszót [*] a lista elemei között)',
  's_help_help' => 'BBCode segítség megnyitása',
  's_image_upload_help' => 'Kép feltöltése a PostImage.org-ra, és ezen szöveg hozzáadása',
  's_posticyimage_help' => 'Kép feltöltése, és ezen szöveg hozzáadása',
  's_smiley_creator' => 'Smiley-gyár: [smiley=1]szöveg[/smiley] Egy szöveges táblát tartó Smiley készítése',
));
// Please do not remove this!!!
foreach ($js_lang as $k => $v)
{
	$lang[$k] = $v;
}

$javascript_lang_vars = '';
foreach ($js_lang as $k => $v)
{
	$javascript_lang_vars .= 'var ' . $k . ' = \'' . str_replace("'", "\'", $v) . '\';' . "\n";
}

$lang['JAVASCRIPT_LANG_VARS'] = $javascript_lang_vars;
unset($js_lang);
// JavaScript Text - END

?>
