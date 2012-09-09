<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_bbcb_mg.php 28 2009-04-03 12:40:34Z TheSteffen $
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
	'bbcb_mg_lang' => 'lang_german',

'wrote' => 'Piši',
	'Quote' => 'Citiraj',
	'Code' => 'Izvorna koda',
	'Hide' => 'Skrij',
	'Show' => 'Prikaži',
	'Download' => 'Prenesi',
	'Syntax' => 'Sintaksa',
	'Select' => 'Izberi',
	'ReviewPost' => 'Prikaži objavo',
	'OffTopic' => 'Ostalo',
	'OpenNewWindow' => 'Kliknite da odprete sliko v novem oknu',
	'C++' => 'C++',
	'PhpCode' => 'Php',

	'Close_Tags' => 'Zapri oznake',
	'Styles_tip' => 'Nasvet: Stil lahko hitro uporabite v izbranem tekstu.',

// Smiley Creator
	'bbcode_sc_help' => 'Ustvarjalec smeškotov: [schild=1]Besedilo[/schild] ustvarite smeškota s svojim besedilom',
	'Smiley_creator' => 'Ustvarjalec smeškotov',
	'SC_shieldtext' => 'Smeško',
	'SC_fontcolor' => 'Barva besedila',
	'SC_shadowcolor' => 'Barva sence',
	'SC_shieldshadow' => 'Senca',
	'SC_shieldshadow_on' => 'Aktiviraj',
	'SC_shieldshadow_off' => 'Deaktiviraj',
	'SC_smiliechooser' => 'Izberi smeškota',
	'SC_random_smilie' => 'Nakljucen smeško',
	'SC_default_smilie' => 'Standardni smeško',
	'SC_create_smilie' => 'Ustvari',
	'SC_stop_creating' => 'Preklici',
	'SC_error' => 'Tukaj je vaš Shield - pozabili ste besedilo...',
	'SC_another_shield' => 'Ali želite ustvariti novega smeška?',
	'SC_notext_error' => 'Nemorete ustvariti vec smeškov',

	'bbcode_b_help' => 'Krepko besedilo: [b]besedilo[/b] (alt+b)',
	'bbcode_i_help' => 'Ležece besedilo: [i]besedilo[/i] (alt+i)',
	'bbcode_u_help' => 'Podcrtano besedilo: [u]besedilo[/u] (alt+u)',
	'bbcode_q_help' => 'Citirano besedilo: [quote]besedilo[/quote] (alt+q)',
	'bbcode_c_help' => 'Prikaz kode: [code]koda[/code] (alt+c)',
	'bbcode_l_help' => 'Seznam: [list]besedilo[/list] (alt+l)',
	'bbcode_o_help' => 'Urejen seznam: [list=]besedilo[/list] (alt+o)',
	'bbcode_p_help' => 'Vstavi sliko: [img]http://image_url[/img] (alt+p)',
	'bbcode_w_help' => 'Vstavi povezavo: [url]http://url[/url] or [url=http://url]URL naslov[/url] (alt+w)',
	'bbcode_a_help' => 'Zapri vse odprte oznake BB kode',
	'bbcode_s_help' => 'Barva pisave: [color=red]besedilo[/color] Nasvet: lahko tudi uporabite barve=#FF0000',
	'bbcode_f_help' => 'Velikost pisave: [size=x-small]small besedilo[/size]',

	'Font_color' => 'Barva pisave',
	'color_default' => 'Privzeto',
	'color_dark_red' => 'Temno rdeca',
	'color_red' => 'Rdeca',
	'color_orange' => 'Oranžna',
	'color_brown' => 'Rjava',
	'color_yellow' => 'Rumena',
	'color_green' => 'Zelena',
	'color_olive' => 'Olivno zelena',
	'color_cyan' => 'Svetlo modra',
	'color_blue' => 'Modra',
	'color_dark_blue' => 'Temno modra',
	'color_indigo' => 'Indigo modra',
	'color_violet' => 'Vijolicna',
	'color_white' => 'Bela',
	'color_black' => 'crna',

	'color_cadet_blue' => 'Cadet modra',
	'color_coral' => 'Koralna',
	'color_crimson' => 'Vinsko rdeca',
	'color_dark_grey' => 'Temno siva',
	'color_dark_orchid' => 'Temno vijolicna',
	'color_gold' => 'Zlata',
	'color_gray' => 'Siva',
	'color_light_blue' => 'Svetlo modra',
	'color_light_cyan' => 'Svetla Cyan modra',
	'color_light_green' => 'Svetlo zelena',
	'color_light_grey' => 'Svetlo siva',
	'color_light_orange' => 'Svetlo oranžna',
	'color_peach' => 'Barva breskve',
	'color_power_orange' => 'Intenzivno oranžna',
	'color_sea_green' => 'Morsko zelena',
	'color_silver' => 'Srebrna',
	'color_tomato' => 'Barva paradižnika',
	'color_turquoise' => 'Turkizna',
	'color_chocolate' => 'cokoladno rjava',
	'color_deepskyblue' => 'Nebeško modra',
	'color_midnightblue' => 'Vecerno modra',
	'color_darkgreen' => 'Temno zelena',

	'Font_size' => 'Velikost pisave',
	'font_tiny' => 'Drobna',
	'font_small' => 'Majhna',
	'font_medium' => 'Srednja',
	'font_normal' => 'Obicajna',
	'font_large' => 'Velika',
	'font_huge' => 'Ogromna',
	'font_xl' => 'Zelo velika',

// Font Type
	'Font_Type' => 'Pisava',
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
	'bbcb_mg_colorpicker' => 'Izbiralec barve',
	'bbcb_mg_j' => 'Obojestranska poravnava',
	'bbcb_mg_r' => 'Desna poravnava',
	'bbcb_mg_c' => 'Centralna poravnava',
	'bbcb_mg_l' => 'Leva poravnava',
	'bbcb_mg_b' => 'Krepko',
	'bbcb_mg_i' => 'Ležece',
	'bbcb_mg_u' => 'Podcrtano',
	'bbcb_mg_s' => 'Precrtano',
	'bbcb_mg_f' => 'Pojemanje',
	'bbcb_mg_g' => 'Preliv',
	'bbcb_mg_tab' => 'Tabela',
	'bbcb_mg_td' => 'Celica',
	'bbcb_mg_md' => 'Navigiraj dol',
	'bbcb_mg_mu' => 'Navigiraj gor',
	'bbcb_mg_ml' => 'Navigiraj levo',
	'bbcb_mg_mr' => 'Navigiraj desno',
	'bbcb_mg_code' => 'Koda',
	'bbcb_mg_phpbbmod' => 'phpBB Predloga moderatorja',
	'bbcb_mg_quote' => 'Citat',
	'bbcb_mg_spoil' => 'Spoiler',
	'bbcb_mg_highlight' => 'Oznaci',
	'bbcb_mg_url' => 'Povezava',
	'bbcb_mg_eml' => 'Elektronska pošta',
	'bbcb_mg_img' => 'Slika',
	'bbcb_mg_imgl' => 'Slika levo',
	'bbcb_mg_imgr' => 'Slika desno',
	'bbcb_mg_albumimg' => 'Album slik',
	'bbcb_mg_flsh' => 'Flash datoteka',
	'bbcb_mg_vid' => 'Video',
	'bbcb_mg_gvid' => 'Google Video',
	'bbcb_mg_youtube' => 'YouTube',
	'bbcb_mg_ram' => 'Datoteka',
	'bbcb_mg_strm' => 'Pretok',
	'bbcb_mg_emff' => 'EMFF (MP3)',
	'bbcb_mg_lst' => 'List',
	'bbcb_mg_hr' => 'Vodoravna crta',
	'bbcb_mg_bullet' => 'Alinea',
	'bbcb_mg_sup' => 'Podpisano',
	'bbcb_mg_sub' => 'Nadpisano',
	'bbcb_mg_lsto' => 'Urejen seznam',
	'bbcb_mg_fade' => 'Prosojnost',
	'bbcb_mg_spoiler' => 'Spoiler',
	'bbcb_mg_cell' => 'Celica',
	'bbcb_mg_grad' => 'Preliv',
	'bbcb_mg_upload_img' => 'Naloži sliko na PostImage.org in jo dodaj v sporocilo',
	'bbcb_mg_posticyimage' => 'Naloži sliko in jo dodaj v sporocilo',
	'bbcb_mg_albumimgl' => 'Slika albuma levo',
	'bbcb_mg_albumimgr' => 'Slika albuma desno',
	'bbcode_help' => 'Pomoc BB kode',

	'xs_bbc_hide_message' => 'Skrito sporocilo',
	'xs_bbc_hide_quote_message' => 'Citirano skrito sporocilo, ki je še vedno skrito.',
	'xs_bbc_hide_message_explain' => 'Oprostite, morate se registrirati in tudi objaviti odgovor za prikaz tega sporocila.',

	'bbcode_url' => 'Vpišite povezavo (npr. http://www.phpbb.com)',
	'bbcode_url_title' => 'Vpišite ime povezave',
	'bbcode_url_empty' => 'Niste vpisali povezave',
	'bbcode_url_errors' => 'Napaka!',
	)
);

// JavaScript Text - BEGIN
// Forms
$js_lang = array();

$js_lang['s_formerrors'] = 'Vstaviti morate besedilo da pošljete sporocilo';
$js_lang['s_gen_error'] = ':: Napaka ::\n\n';
$js_lang['s_url_insert'] = 'Vstavite povezavo (npr. http://www.icyphoenix.com/)';
$js_lang['s_url_insert_tip'] = 'http://';
$js_lang['s_url_error'] = 'Niste vstavili povezave';
$js_lang['s_url_title_insert'] = 'Napišite naslov povezave';
$js_lang['s_url_title_insert_tip'] = 'Povezava';
$js_lang['s_url_title_error'] = 'Niste vpisali imena strani';
$js_lang['s_email_insert'] = 'Vpišite elektronska pošta';
$js_lang['s_email_insert_tip'] = 'vaše_ime@domena.com';
$js_lang['s_email_error'] = 'Niste napisali elektronske pošte';
$js_lang['s_img_insert'] = 'Vstavite povezavo do slike';
$js_lang['s_img_error'] = 'Niste vstavili povezave do slike';
$js_lang['s_albumimg_insert'] = 'Vnesite ID albuma slik';
$js_lang['s_albumimg_insert_tip'] = 'ID';
$js_lang['s_albumimg_error'] = 'Niste napisali ID-ja albuma slik';
$js_lang['s_ram_insert'] = 'Prosimo napišite povezavo do datoteke Real Media';
$js_lang['s_stream_insert'] = 'Prosimo napišite povezavo do zvocne datoteke';
$js_lang['s_video_insert'] = 'Prosimo napišite povezavo do video posnetka';
$js_lang['s_video_w_insert'] = 'Prosimo navedite širino video posnetka';
$js_lang['s_video_w_error'] = 'Niste navedli širine video posnetka';
$js_lang['s_video_h_insert'] = 'Prosimo navedite višino video posnetka';
$js_lang['s_video_h_error'] = 'Niste navedli višino video posnetka';
$js_lang['s_googlevideo_insert'] = 'Prosimo napišite ID do posnetka objavljenega na Google Video';
$js_lang['s_youtube_insert'] = 'Prosimo napišite ID posnetka objavljenega na YouTube';
$js_lang['s_emff_insert'] = 'Prosimo napišite povezavo do zvocnega posnetka (MP3)';
$js_lang['s_flash_insert'] = 'Prosimo napišite povezavo do datoteke Flash';
$js_lang['s_flash_w_insert'] = 'Prosimo navedite širino datoteke Flash';
$js_lang['s_flash_w_error'] = 'Niste navedli širine datoteke Flash';
$js_lang['s_flash_h_insert'] = 'Prosimo navedite višino datoteke Flash';
$js_lang['s_flash_h_error'] = 'Niste navedli višine datoteke Flash';
$js_lang['s_id_insert_tip'] = 'Identifikacija';
$js_lang['s_id_insert_error'] = 'Niste navedli identifikacije';
$js_lang['s_file_insert_error'] = 'Niste navedli povezave do datoteke';
$js_lang['s_grad_select'] = 'Prosimo, najprej oznacite besedilo';
$js_lang['s_grad_error'] = 'To deluje le ce je oznacenih manj kot 120 crk';
$js_lang['s_grad_path'] = 'vkljucuje/grad.htm';
$js_lang['s_view_more_code'] = 'Pokaži vec kode';
$js_lang['s_image_upload'] = 'Naloži sliko na PostImage.org in jo dodaj sporocilu';
$js_lang['s_posticyimage'] = 'Naloži sliko in jo dodaj sporocilu';

// Helpline messages
$js_lang['s_a_help'] = 'Zapri vse odprte oznake';
$js_lang['s_b_help'] = 'Krepko besedilo: [b]besedilo[/b]';
$js_lang['s_i_help'] = 'Ležece besedilo: [i]besedilo[/i]';
$js_lang['s_u_help'] = 'Podcrtano besedilo: [u]besedilo[/u]';
$js_lang['s_strike_help'] = 'Precrtano besedilo: [strike]besedilo[/strike]';
$js_lang['s_quote_help'] = 'Citirano besedilo: [quote]besedilo[/quote]';
$js_lang['s_code_help'] = 'Prikaz kode: [code]koda[/code]';
$js_lang['s_phpbbmod_help'] = 'phpBB Predloga moderatorja';
$js_lang['s_highlight_help'] = 'Oznacite: [highlight=#FFFFAA]Besedilo[/highlight]';
$js_lang['s_img_help'] = 'Vstavi sliko: [img]http://povezava_slike[/img]';
$js_lang['s_imgl_help'] = 'Vstavi sliko z levo poravnavo: [img align=left]http://povezava_slike[/img]';
$js_lang['s_imgr_help'] = 'Vstavi sliko z levo poravnavo: [img align=right]http://povezava_slike[/img]';
$js_lang['s_albumimg_help'] = 'Vstavi sliko z albuma: [albumimg]Album Pic ID[/albumimg]';
$js_lang['s_albumimgl_help'] = 'Vstavi sliko z albuma z levo poravnavo: [albumimg align=left]ID slike z albuma[/albumimg]';
$js_lang['s_albumimgr_help'] = 'Vstavi sliko z albuma z desno poravnavo: [albumimg align=right]ID slike z albuma[/albumimg]';
$js_lang['s_url_help'] = 'Vstavite povezavo: [url]http://povezava[/url] ali [url=http://povezava]opis povezave[/url]';
$js_lang['s_fc_help'] = 'Barva besedila: [color=red]besedilo[/color] (Nasvet: lahko tudi uporabite barve=#FF0000)';
$js_lang['s_fs_help'] = 'Velikost besedila: [size=9]majhno besedilo[/size]';
$js_lang['s_ft_help'] = 'Tip pisave: [font=Andalus]besedilo[/font]';
$js_lang['s_table_help'] = 'Vstavi tabelo: [table]besedilo[/table]';
$js_lang['s_td_help'] = 'Vstavi stolpec tabele: [td]Stolpec[/td]';
$js_lang['s_mail_help'] = 'Vstavi elektronsko pošto: [email]Elektronska pošta[/email]';
$js_lang['s_grad_help'] = 'Vstavi prelivajoce se besedilo';
$js_lang['s_right_help'] = 'Nastavi desno poravnavo: [align=right]besedilo[/align]';
$js_lang['s_left_help'] = 'Nastavi levo poravnavo: [align=left]besedilo[/align]';
$js_lang['s_center_help'] = 'Nastavi sredinsko poravnavo: [align=center]besedilo[/align]';
$js_lang['s_justify_help'] = 'Obojestranska poravnava: [align=justify]besedilo[/align]';
$js_lang['s_marqr_help'] = 'Premikanje besedila desno: [marquee direction=right]besedilo[/marquee]';
$js_lang['s_marql_help'] = 'Premikanje besedila levo: [marquee direction=left]besedilo[/marquee]';
$js_lang['s_marqu_help'] = 'Premikanje besedila navzgor: [marquee direction=up]besedilo[/marquee]';
$js_lang['s_marqd_help'] = 'Premikanje besedila navzdol: [marquee direction=down]besedilo[/marquee]';
$js_lang['s_sup_help'] = 'Nadpisano: [sup]besedilo[/sup]';
$js_lang['s_sub_help'] = 'Podpisano: [sub]besedilo[/sub]';
$js_lang['s_hr_help'] = 'Vstavi vodoravno crto [hr]';
$js_lang['s_bullet_help'] = 'Vstavi alineo [*]';
$js_lang['s_video_help'] = 'Vstavi video posnetek: [video width=# height=#]povezava do videa[/video]';
$js_lang['s_googlevideo_help'] = 'Vstavite povezavo do Google Videa: [googlevideo]Google Video ID[/googlevideo]';
$js_lang['s_youtube_help'] = 'Vstavite povezavo do Youtube Videa: [youtube]YouTube ID[/youtube]';
$js_lang['s_quick_help'] = 'Quicktime video: [quick]http://quicktime_video_povezava/[/quick]';
$js_lang['s_flash_help'] = 'Vstavi Flash datoteko: [flash width=# height=#]flash povezava[/flash]';
$js_lang['s_ram_help'] = 'Vstavi datoteko Real Media: [ram]Povezava do datoteke[/ram]';
$js_lang['s_stream_help'] = 'Vstavi pretocno datoteko: [stream]Povezava do datoteke[/stream]';
$js_lang['s_emff_help'] = 'Vstavi zvocno datoteko (MP3): [emff]Povezava do datoteke[/emff]';
$js_lang['s_fade_help'] = 'Bledenje: [opacity]besedilo[/opacity] ali [opacity][img]http://povezava_slike/[/img][/opacity]';
$js_lang['s_spoiler_help'] = 'Spoiler: [spoiler]besedilo[/spoiler]';
$js_lang['s_cell_help'] = 'Celica: [cell]besedilo[/cell]';
$js_lang['s_list_help'] = 'Seznam: [list]besedilo[/list] (Nasvet: lahko uporabite [*] da vstavite novo vrstico)';
$js_lang['s_listo_help'] = 'Urejen seznam: [list=1|a]besedilo[/list] (Nasvet: lahko uporabite [*] da vstavite novo vrstico)';
$js_lang['s_help_help'] = 'Odpri pomoc BBCode';
$js_lang['s_image_upload_help'] = 'Naloži sliko na PostImage.org in jo dodaj sporocilu';
$js_lang['s_posticyimage_help'] = 'Naloži sliko in jo dodaj sporocilu';
$js_lang['s_smiley_creator'] = 'Ustvarjalec smeškotov: [smiley=1]besedilo[/smiley] ustvarite smeškota s svojim besedilom';

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
// JavaScript text - END

?>