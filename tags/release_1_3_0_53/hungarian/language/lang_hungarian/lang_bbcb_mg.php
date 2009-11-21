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
  
  'wrote' => '�rta',
  'Quote' => 'Id�zet',
  'Code' => 'K�d',
  'Hide' => 'Rejt',
  'Show' => 'Mutat',
  'Download' => 'Let�lt�s',
  'Syntax' => 'Szintaxis',
  'Select' => 'Kiv�laszt',
  'ReviewPost' => 'Hozz�sz�l�shoz ugr�s',
  'OffTopic' => 'T�m�n k�v�li',
  'OpenNewWindow' => 'Klikk: �j ablakban megn�zed a k�pet',
  'C++' => 'C++',
  'PhpCode' => 'Php',
  
  'Close_Tags' => 'Tagok bez�r�sa',
  'Styles_tip' => 'Tipp: a st�lusokkal gyorsan kin�zetet adhatsz egy kijel�lt sz�vegnek.',

// Smiley Creator
  'bbcode_sc_help' => 'Smiley-gy�r: [schild=1]sz�veg[/schild] Egy sz�veges t�bl�t tart� Smiley k�sz�t�se',
  'Smiley_creator' => 'Smiley-gy�r',
  'SC_shieldtext' => 'Smiley sz�vege',
  'SC_fontcolor' => 'Sz�vegsz�n',
  'SC_shadowcolor' => '�rny�k sz�ne',
  'SC_shieldshadow' => '�rny�kolt t�bla',
  'SC_shieldshadow_on' => 'Aktiv�lva',
  'SC_shieldshadow_off' => 'Deaktiv�lva',
  'SC_smiliechooser' => 'Smiley kiv�laszt�sa',
  'SC_random_smilie' => 'Valamelyik Smiley',
  'SC_default_smilie' => 'Alap Smiley',
  'SC_create_smilie' => 'L�trehoz',
  'SC_stop_creating' => 'M�gsem',
  'SC_error' => 'Emeld fel a pajzsod - nesze a sz�veged...',
  'SC_another_shield' => 'Akarsz egy m�sik Smiley-t k�sz�teni?',
  'SC_notext_error' => 'Sz�veg n�lk�l nem tudsz Smiley-t k�sz�teni',
  
  'bbcode_b_help' => 'K�v�r sz�veg: [b][/b] (alt+b)',
  'bbcode_i_help' => 'D�lt sz�veg: [i]sz�veg[/i] (alt+i)',
  'bbcode_u_help' => 'Al�h�zott sz�veg: [u]sz�veg[/u] (alt+u)',
  'bbcode_q_help' => 'Id�zett sz�veg: [quote]sz�veg[/quote] (alt+q)',
  'bbcode_c_help' => 'K�d megjelen�t�se: [code]k�d[/code] (alt+c)',
  'bbcode_l_help' => 'Lista: [list]sz�veg[/list] (alt+l)',
  'bbcode_o_help' => 'Sz�mozott lista: [list=1]sz�veg[/list] (alt+o)',
  'bbcode_p_help' => 'K�p besz�r�sa: [img]http://k�p_url[/img] (alt+p)',
  'bbcode_w_help' => 'URL besz�r�sa: [url]http://url[/url] vagy [url=http://url]URL sz�vege[/url] (alt+w)',
  'bbcode_a_help' => 'Minden nyitott BBCode bez�r�sa',
  'bbcode_s_help' => 'Bet� sz�ne: [color=red]sz�veg[/color] Tipp: v�ltoztathatod a sz�nt a color=#FF0000 v�ltoztat�s�val',
  'bbcode_f_help' => 'Bet�m�ret: [size=x-small]kicsi sz�veg[/size]',
  
  'Font_color' => 'Bet� sz�ne',
  'color_default' => 'Alap�rtelmezett',
  'color_dark_red' => 'S�t�tv�r�s',
  'color_red' => 'V�r�s',
  'color_orange' => 'Narancs',
  'color_brown' => 'Barna',
  'color_yellow' => 'S�rga',
  'color_green' => 'Z�ld',
  'color_olive' => 'Ol�va',
  'color_cyan' => 'Ci�n',
  'color_blue' => 'K�k',
  'color_dark_blue' => 'S�t�tk�k',
  'color_indigo' => 'Indig�',
  'color_violet' => 'Viola',
  'color_white' => 'Feh�r',
  'color_black' => 'Fekete',
  
  'color_cadet_blue' => 'Kad�tk�k',
  'color_coral' => 'Kor�l',
  'color_crimson' => 'Karmazsin',
  'color_dark_grey' => 'S�t�tsz�rke',
  'color_dark_orchid' => 'S�t�t orchidea',
  'color_gold' => 'Arany',
  'color_gray' => 'Sz�rke',
  'color_light_blue' => 'Vil�gosk�k',
  'color_light_cyan' => 'Vil�gosci�n',
  'color_light_green' => 'Vil�gosz�ld',
  'color_light_grey' => 'Vil�gossz�rke',
  'color_light_orange' => 'Vil�gos narancs',
  'color_peach' => 'Barack',
  'color_power_orange' => 'Er�s narancs',
  'color_sea_green' => 'Tengerz�ld',
  'color_silver' => 'Ez�st',
  'color_tomato' => 'Paradicsom',
  'color_turquoise' => 'T�rkiz',
  'color_chocolate' => 'Csokol�d�',
  'color_deepskyblue' => '�gk�k',
  'color_midnightblue' => 'K�z�pk�k',
  'color_darkgreen' => 'S�t�tz�ld',
  
  'Font_size' => 'Bet�m�ret',
  'font_tiny' => 'Apr�',
  'font_small' => 'Kicsi',
  'font_medium' => 'K�zepes',
  'font_normal' => 'Norm�l',
  'font_large' => 'Nagy',
  'font_huge' => '�ri�s',
  'font_xl' => 'XL',

// Font Type
  'Font_Type' => 'Bet�',
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
  'bbcb_mg_colorpicker' => 'Sz�npipetta',
  'bbcb_mg_j' => 'Sorkiz�rt',
  'bbcb_mg_r' => 'Jobbra',
  'bbcb_mg_c' => 'K�z�pre',
  'bbcb_mg_l' => 'Balra',
  'bbcb_mg_b' => 'F�lk�v�r',
  'bbcb_mg_i' => 'D�lt',
  'bbcb_mg_u' => 'Al�h�zott',
  'bbcb_mg_s' => '�th�zott',
  'bbcb_mg_f' => '�rny�k',
  'bbcb_mg_g' => 'Sziv�rv�ny',
  'bbcb_mg_tab' => 'T�bla',
  'bbcb_mg_td' => 'Cella',
  'bbcb_mg_md' => 'Leg�rd�l�',
  'bbcb_mg_mu' => 'Felg�rd�l�',
  'bbcb_mg_ml' => 'Balra fut�',
  'bbcb_mg_mr' => 'Jobbra fut�',
  'bbcb_mg_code' => 'K�d',
  'bbcb_mg_phpbbmod' => 'phpBB Mod Template',
  'bbcb_mg_quote' => 'Id�zet',
  'bbcb_mg_spoil' => 'Keret',
  'bbcb_mg_highlight' => 'Kiemel�s',
  'bbcb_mg_url' => 'Url',
  'bbcb_mg_eml' => 'Email',
  'bbcb_mg_img' => 'K�p',
  'bbcb_mg_imgl' => 'K�p balra',
  'bbcb_mg_imgr' => 'K�p jobbra',
  'bbcb_mg_albumimg' => 'K�p albumb�l',
  'bbcb_mg_flsh' => 'Flash',
  'bbcb_mg_vid' => 'Vide�',
  'bbcb_mg_gvid' => 'Google Video',
  'bbcb_mg_youtube' => 'YouTube',
  'bbcb_mg_ram' => 'Ram',
  'bbcb_mg_strm' => 'Stream',
  'bbcb_mg_emff' => 'EMFF (MP3)',
  'bbcb_mg_lst' => 'Lista',
  'bbcb_mg_hr' => 'V�zszintes vonal',
  'bbcb_mg_bullet' => 'Elv�laszt� pont',
  'bbcb_mg_sup' => 'Fel',
  'bbcb_mg_sub' => 'Le',
  'bbcb_mg_lsto' => 'Sz�mozott lista',
  'bbcb_mg_fade' => '�tl�tsz�',
  'bbcb_mg_spoiler' => 'Keret',
  'bbcb_mg_cell' => 'Cella',
  'bbcb_mg_grad' => 'Sziv�rv�ny',
  'bbcb_mg_upload_img' => 'K�p felt�lt�se a PostImage.org-ra, �s ezen sz�veg hozz�ad�sa',
  'bbcb_mg_posticyimage' => 'K�p felt�lt�se, �s ezen sz�veg hozz�ad�sa',
  'bbcb_mg_albumimgl' => 'K�p albumb�l balra',
  'bbcb_mg_albumimgr' => 'K�p albumb�l jobbra',
  'bbcode_help' => 'BBCode s�g�',
  
  'xs_bbc_hide_message' => 'Rejtett �zenet',
  'xs_bbc_hide_quote_message' => 'Rejtett �zenet id�z�se is rejtve t�rt�nik.',
  'xs_bbc_hide_message_explain' => 'Bocsi, de miel�tt v�laszolsz egy hozz�sz�l�sra regisztr�lnod kell magadat.',
  
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
  's_formerrors' => 'Be kell �rnod valamilyen sz�veget, miel�tt bek�ld�d az �zenetet',
  's_gen_error' => ':: Hiba ::\\n\\n',
  's_url_insert' => 'URL besz�r�sa (pl. http://www.icyphoenix.com/)',
  's_url_insert_tip' => 'http://',
  's_url_error' => 'Nem adt�l meg semmilyen URL-t',
  's_url_title_insert' => 'Add meg a link c�m�t',
  's_url_title_insert_tip' => 'Link',
  's_url_title_error' => 'Nem adt�l meg semmit sem lapc�mnek',
  's_email_insert' => 'Add meg az email c�met',
  's_email_insert_tip' => 'neved@valami.hu',
  's_email_error' => 'Nem adt�l meg semmilyen email c�met',
  's_img_insert' => 'Add meg a k�p URL-j�t',
  's_img_error' => 'Nem adt�l meg semmilyen k�p URL-t',
  's_albumimg_insert' => 'Add meg az albumk�p ID-j�t',
  's_albumimg_insert_tip' => 'ID',
  's_albumimg_error' => 'Nem adt�l meg semmit sem albumk�p ID-nek',
  's_ram_insert' => 'Add meg a Real Media f�jl URL-j�t',
  's_stream_insert' => 'Add meg az audi� f�jl URL-j�t',
  's_video_insert' => 'Add meg a  vide� f�jl URL-j�t',
  's_video_w_insert' => 'Add meg a vide� sz�less�g�t',
  's_video_w_error' => 'Nem adt�l meg semmit sem vide�sz�less�gnek',
  's_video_h_insert' => 'Add meg a vid� magass�g�t',
  's_video_h_error' => 'Nem adt�l meg semmit sem vide�magass�gnak',
  's_googlevideo_insert' => 'Please write Google Video file ID',
  's_youtube_insert' => 'Please write YouTube file ID',
  's_emff_insert' => 'Please write mp3 file URL',
  's_flash_insert' => 'Add meg a Flash f�jl URL-j�t',
  's_flash_w_insert' => 'Add meg a Flash sz�less�g�t',
  's_flash_w_error' => 'Nem adt�l meg semmit sem Flash sz�less�gnek',
  's_flash_h_insert' => 'Add meg a Flash magass�g�t',
  's_flash_h_error' => 'Nem adt�l meg semmit sem Flash magass�gnak',
  's_id_insert_tip' => 'ID',
  's_id_insert_error' => 'Nem adt�l meg semmilyen ID-t',
  's_file_insert_error' => 'Nem adt�l meg semmit sem f�jl URL-nek',
  's_grad_select' => 'El�ssz�r v�laszd ki a sz�veget',
  's_grad_error' => 'Csak kevesemm, mint 120 lev�llel m�k�dik',
  's_grad_path' => 'includes/grad.htm',
  's_view_more_code' => 'Tov�bbi k�d megn�z�se',
  's_image_upload' => 'T�ltsd fel a k�pet a PostImage.org-ra, �s add meg itt az �zenetedben',
  's_posticyimage' => 'T�ltsd fel a k�ped, �s add meg itt az �zenetedben',

// Helpline messages
  's_a_help' => 'Z�rd be az �sszes nyitott tagot',
  's_b_help' => 'F�lk�v�r sz�veg: [b]sz�veg[/b]',
  's_i_help' => 'D�lt sz�veg: [i]sz�veg[/i]',
  's_u_help' => 'Al�h�zott sz�veg: [u]sz�veg[/u]',
  's_strike_help' => '�th�zott sz�veg: [strike]sz�veg[/strike]',
  's_quote_help' => 'Id�zett sz�veg: [quote]sz�veg[/quote]',
  's_code_help' => 'K�d megjelen�t�se: [code]sz�veg[/code]',
  's_phpbbmod_help' => 'phpBB Mod Template',
  's_highlight_help' => 'Kiemel�s: [highlight=#FFFFAA]sz�veg[/highlight]',
  's_img_help' => 'K�p besz�r�sa: [img]http://k�p_url[/img]',
  's_imgl_help' => 'K�p besz�r�sa balra igaz�t�ssal: [img align=left]http://k�p_url[/img]',
  's_imgr_help' => 'K�p besz�r�sa jobbra igaz�t�ssal: [img align=right]http://k�p_url[/img]',
  's_albumimg_help' => 'K�p besz�r�sa az albumb�l: [albumimg]Albumk�p ID[/albumimg]',
  's_albumimgl_help' => 'K�p besz�r�sa az albumb�l balra igaz�t�ssal: [albumimg align=left]Albumk�p ID[/albumimg]',
  's_albumimgr_help' => 'K�p besz�r�sa az abumb�l jobbra igaz�t�ssal: [albumimg align=right]Albumk�p ID[/albumimg]',
  's_url_help' => 'URL besz�r�sa: [url]http://url[/url] vagy [url=http://url]URL sz�vege[/url]',
  's_fc_help' => 'Bet�sz�n: [color=red]sz�veg[/color] (Tipp: haszn�ld a sz�n megv�ltoztat�s�hoz color=#FF0000)',
  's_fs_help' => 'Bet�m�ret: [size=9]kicsi sz�veg[/size]',
  's_ft_help' => 'Bet�t�pus: [font=Andalus]sz�veg[/font]',
  's_table_help' => 'T�bla besz�r�sa: [table]sz�veg[/table]',
  's_td_help' => 'T�blaoszlop besz�r�sa: [td]sz�veg[/td]',
  's_mail_help' => 'Email besz�r�sa: [email]E-mail ide[/email]',
  's_grad_help' => 'Sziv�rv�nyos sz�veg besz�r�sa',
  's_right_help' => 'Sz�veg jobbra igaz�t�sa: [align=right]sz�veg[/align]',
  's_left_help' => 'Sz�veg balra igaz�t�sa: [align=left]sz�veg[/align]',
  's_center_help' => 'Sz�veg k�z�pre igaz�t�sa: [align=center]sz�veg[/align]',
  's_justify_help' => 'Sorkiz�rt sz�veg: [align=justify]sz�veg[/align]',
  's_marqr_help' => 'Jobbra fut� sz�veg: [marq=right]sz�veg[/marq]',
  's_marql_help' => 'Balra fut� sz�veg: [marq=left]sz�veg[/marq]',
  's_marqu_help' => 'Felfel� g�rd�l� sz�veg: [marq=up]sz�veg[/marq]',
  's_marqd_help' => 'Lefel� g�rd�l� sz�veg: [marq=down]sz�veg[/marq]',
  's_sup_help' => 'Emelt sz�veg: [sup]sz�veg[/sup]',
  's_sub_help' => 'S�llyesztett: [sub]sz�veg[/sub]',
  's_hr_help' => 'Elv�laszt� vonal [hr]',
  's_bullet_help' => 'Listaelv�laszt� pont [*]',
  's_video_help' => 'Vide� f�jl beilleszt�se: [video width=# height=#]file URL[/video]',
  's_googlevideo_help' => 'Google Video f�jl beilleszt�se: [googlevideo]Google Video ID[/googlevideo]',
  's_youtube_help' => 'YouTube f�jl beilleszt�se: [youtube]YouTube ID[/youtube]',
  's_quick_help' => 'Quicktime vide� beilleszt�se: [quick]http://quicktime_video_url/[/quick]',
  's_flash_help' => 'Flash f�jl beilleszt�se: [flash width=# height=#]flash URL[/flash]',
  's_ram_help' => 'Real Media f�jl beilleszt�se: [ram]File URL[/ram]',
  's_stream_help' => 'Stream f�jl beilleszt�se: [stream]File URL[/stream]',
  's_emff_help' => 'MP3 f�jl beilleszt�se: [emff]File URL[/emff]',
  's_fade_help' => '�rny�kol�s: [fade]sz�veg[/fade] vagy [fade][img]http://image_url/[/img][/fade]',
  's_spoiler_help' => 'Keret: [spoiler]sz�veg[/spoiler]',
  's_cell_help' => 'Cella: [cell]sz�veg[/cell]',
  's_list_help' => 'Sz�mozott lista: [list|=1|a]sz�veg[/list] (Tipp: a haszn�lj listaelv�lasz�t [*] a lista elemei k�z�tt)',
  's_listo_help' => 'Rendezett lista: [list=1|a]sz�veg[/list] (Tipp: a haszn�lj listaelv�lasz�t [*] a lista elemei k�z�tt)',
  's_help_help' => 'BBCode seg�ts�g megnyit�sa',
  's_image_upload_help' => 'K�p felt�lt�se a PostImage.org-ra, �s ezen sz�veg hozz�ad�sa',
  's_posticyimage_help' => 'K�p felt�lt�se, �s ezen sz�veg hozz�ad�sa',
  's_smiley_creator' => 'Smiley-gy�r: [smiley=1]sz�veg[/smiley] Egy sz�veges t�bl�t tart� Smiley k�sz�t�se',
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
