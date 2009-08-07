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

$lang = array_merge($lang, array(
	'bbcb_mg_lang' => 'lang_swedish',

	'wrote' => 'skrev',
	'Quote' => 'Citera',
	'Code' => 'Kod',
	'Hide' => 'Dold',
	'Show' => 'Visa',
	'Download' => 'Ladda ner',
	'Syntax' => 'Syntax',
	'Select' => 'V�lj',
	'ReviewPost' => 'Visa Post',
	'OffTopic' => 'Utanf�r �mnet',
	'OpenNewWindow' => 'Klicka f�r att �ppna bild i ett nytt f�nster',
	'C++' => 'C++',
	'PhpCode' => 'Php',

	'Close_Tags' => 'St�ng Taggar',
	'Styles_tip' => 'Tips: Stilar kan till�mpas snabbt p� markerad text.',

// Smiley Creator
	'bbcode_sc_help' => 'Smiley Skapare: [schild=1]Text[/schild] Skapa en Smiley med din text',
	'Smiley_creator' => 'Smiley Skapare',
	'SC_shieldtext' => 'Smiley Text',
	'SC_fontcolor' => 'Text F�rg',
	'SC_shadowcolor' => 'Skugg F�rg',
	'SC_shieldshadow' => 'Shield Skugga',
	'SC_shieldshadow_on' => 'Aktivera',
	'SC_shieldshadow_off' => 'Avaktivera',
	'SC_smiliechooser' => 'V�lj Smiley',
	'SC_random_smilie' => 'Slumpm�ssig Smiley',
	'SC_default_smilie' => 'Standard Smiley',
	'SC_create_smilie' => 'Skapa',
	'SC_stop_creating' => 'Avbryt',
	'SC_error' => 'H�r �r din Shield - du har gl�mt Text...',
	'SC_another_shield' => 'Vill du skapa en annan Smiley?',
	'SC_notext_error' => 'Du kan inte skapa Smileys utan Text',

	'bbcode_b_help' => 'Fet text: [b]text[/b] (alt+b)',
	'bbcode_i_help' => 'Kursiv text: [i]text[/i] (alt+i)',
	'bbcode_u_help' => 'Understuken text: [u]text[/u] (alt+u)',
	'bbcode_q_help' => 'Citera text: [quote]text[/quote] (alt+q)',
	'bbcode_c_help' => 'Kod visning: [code]code[/code] (alt+c)',
	'bbcode_l_help' => 'Lista: [list]text[/list] (alt+l)',
	'bbcode_o_help' => 'Osorterad lista: [list=]text[/list] (alt+o)',
	'bbcode_p_help' => 'S�tt in bild: [img]http://image_url[/img] (alt+p)',
	'bbcode_w_help' => 'S�tt in URL: [url]http://url[/url] or [url=http://url]URL text[/url] (alt+w)',
	'bbcode_a_help' => 'St�ng alla �ppna BBKods taggar',
	'bbcode_s_help' => 'Teckensnitts f�rg: [color=red]text[/color] Tips: du kan ocks� anv�nda color=#FF0000',
	'bbcode_f_help' => 'Teckensnitts storlek: [size=x-small]small text[/size]',

	'Font_color' => 'Teckensnitts f�rg',
	'color_default' => 'Standard',
	'color_dark_red' => 'M�rkr�d',
	'color_red' => 'R�d',
	'color_orange' => 'Orange',
	'color_brown' => 'Brun',
	'color_yellow' => 'Gul',
	'color_green' => 'Gr�n',
	'color_olive' => 'Olive',
	'color_cyan' => 'Cyan',
	'color_blue' => 'Bl�',
	'color_dark_blue' => 'M�rkbl�',
	'color_indigo' => 'Indigo',
	'color_violet' => 'Violet',
	'color_white' => 'Vit',
	'color_black' => 'Svart',

	'color_cadet_blue' => 'Cadet Bl�',
	'color_coral' => 'Coral',
	'color_crimson' => 'Crimson',
	'color_dark_grey' => 'M�rkgr�',
	'color_dark_orchid' => 'M�rk Orchid',
	'color_gold' => 'Guld',
	'color_gray' => 'Gr�',
	'color_light_blue' => 'Ljusbl�',
	'color_light_cyan' => 'Ljuscyan',
	'color_light_green' => 'Ljusgr�n',
	'color_light_grey' => 'Ljusgr�',
	'color_light_orange' => 'Ljusorange',
	'color_peach' => 'Persika',
	'color_power_orange' => 'Power Orange',
	'color_sea_green' => 'Sj�Gr�n',
	'color_silver' => 'Silver',
	'color_tomato' => 'Tomat',
	'color_turquoise' => 'Turkos',
	'color_chocolate' => 'Choklad',
	'color_deepskyblue' => 'Deep Sky Blue',
	'color_midnightblue' => 'Midnight Blue',
	'color_darkgreen' => 'M�rkgr�n',

	'Font_size' => 'Teckensnitts Storlek',
	'font_tiny' => 'Pytteliten',
	'font_small' => 'Liten',
	'font_medium' => 'Medium',
	'font_normal' => 'Normal',
	'font_large' => 'Stor',
	'font_huge' => 'Enorm',
	'font_xl' => 'XL',

// Font Type
	'Font_Type' => 'Teckensnitt',
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
	'bbcb_mg_colorpicker' => 'Colour Picker',
	'bbcb_mg_j' => 'Justify',
	'bbcb_mg_r' => 'H�ger',
	'bbcb_mg_c' => 'Center',
	'bbcb_mg_l' => 'V�nster',
	'bbcb_mg_b' => 'Fet',
	'bbcb_mg_i' => 'Kursiv',
	'bbcb_mg_u' => 'Understruken',
	'bbcb_mg_s' => 'Strike',
	'bbcb_mg_f' => 'Bleka',
	'bbcb_mg_g' => 'Stigning',
	'bbcb_mg_tab' => 'Tabell',
	'bbcb_mg_td' => 'Cell',
	'bbcb_mg_md' => 'Marquee ner',
	'bbcb_mg_mu' => 'Marquee upp',
	'bbcb_mg_ml' => 'Marquee v�nster',
	'bbcb_mg_mr' => 'Marquee h�ger',
	'bbcb_mg_code' => 'Kod',
	'bbcb_mg_phpbbmod' => 'phpBB Mod Mall',
	'bbcb_mg_quote' => 'Citera',
	'bbcb_mg_spoil' => 'Spoiler',
	'bbcb_mg_highlight' => 'Highlight',
	'bbcb_mg_url' => 'Url',
	'bbcb_mg_eml' => 'E-post',
	'bbcb_mg_img' => 'Bild',
	'bbcb_mg_imgl' => 'Bild V�nster',
	'bbcb_mg_imgr' => 'Bild H�ger',
	'bbcb_mg_albumimg' => 'Album Bild',
	'bbcb_mg_flsh' => 'Flash',
	'bbcb_mg_vid' => 'Video',
	'bbcb_mg_gvid' => 'Google Video',
	'bbcb_mg_youtube' => 'YouTube',
	'bbcb_mg_ram' => 'Ram',
	'bbcb_mg_strm' => 'Stream',
	'bbcb_mg_emff' => 'EMFF (MP3)',
	'bbcb_mg_lst' => 'Lista',
	'bbcb_mg_hr' => 'Horisontal linje',
	'bbcb_mg_bullet' => 'Bullet punkt',
	'bbcb_mg_sup' => 'Sup',
	'bbcb_mg_sub' => 'Sub',
	'bbcb_mg_lsto' => 'Ordered Lista',
	'bbcb_mg_fade' => 'Transparent',
	'bbcb_mg_spoiler' => 'Spoiler',
	'bbcb_mg_cell' => 'Cell',
	'bbcb_mg_grad' => 'Stigning',
	'bbcb_mg_upload_img' => 'Ladda upp bilden till PostImage.org och l�gg till den i meddelandet',
	'bbcb_mg_posticyimage' => 'Ladda upp bild och l�gga till den i meddelandet',
	'bbcb_mg_albumimgl' => 'Album Bild V�nster',
	'bbcb_mg_albumimgr' => 'Album Bild H�ger',
	'bbcode_help' => 'BBKod Hj�lp',
	
	'xs_bbc_hide_message' => 'Dolda Meddelande',
	'xs_bbc_hide_quote_message' => 'Noterade dolda Meddelande, som fortfarande �r dolda.',
	'xs_bbc_hide_message_explain' => 'Tyv�rr, men du m�ste vara registrerad och �ven skicka ett svar f�r att visa det h�r meddelandet.',

	'bbcode_url' => 'Ange URL:n (eg. http://www.phpbb.com)',
	'bbcode_url_title' => 'Ange titeln p� l�nken',
	'bbcode_url_empty' => 'Du angav inte n�gon url',
	'bbcode_url_errors' => 'Error!',
	)
);

// JavaScript Text - BEGIN
// Forms
$js_lang = array();

$js_lang['s_formerrors'] = 'Du m�ste s�tta in n�gon text f�r att skicka ett meddelande';
$js_lang['s_gen_error'] = ':: Error ::\n\n';
$js_lang['s_url_insert'] = 'Skriv in URL:n (eg. http://www.icyphoenix.com/)';
$js_lang['s_url_insert_tip'] = 'http://';
$js_lang['s_url_error'] = 'Du angav inte n�gon URL';
$js_lang['s_url_title_insert'] = 'Ange titeln p� l�nken';
$js_lang['s_url_title_insert_tip'] = 'L�nk';
$js_lang['s_url_title_error'] = 'Du skrev inte sidana namn';
$js_lang['s_email_insert'] = 'Ange E-post Adress';
$js_lang['s_email_insert_tip'] = 'yourname@yourdomain.com';
$js_lang['s_email_error'] = 'Du skrev inte n�gon E-post Adress';
$js_lang['s_img_insert'] = 'Ange bildens URL';
$js_lang['s_img_error'] = 'Du skrev inte bildens URL';
$js_lang['s_albumimg_insert'] = 'Ange Albumets Bild ID';
$js_lang['s_albumimg_insert_tip'] = 'ID';
$js_lang['s_albumimg_error'] = 'Du skrev inte Album Bildens ID';
$js_lang['s_ram_insert'] = 'V�nligen skriv Real Media filens URL';
$js_lang['s_stream_insert'] = 'V�nligen skriv audio filens URL';
$js_lang['s_video_insert'] = 'V�nligen skriv video filens URL';
$js_lang['s_video_w_insert'] = 'V�nligen specificera video filens bredd';
$js_lang['s_video_w_error'] = 'Du specificerade inte video filens bredd';
$js_lang['s_video_h_insert'] = 'V�nligen specificera video file h�jd';
$js_lang['s_video_h_error'] = 'Du specificerade inte video filens h�jd';
$js_lang['s_googlevideo_insert'] = 'V�nligen skriv Google Video filens ID';
$js_lang['s_youtube_insert'] = 'V�nligen skriv YouTube filens ID';
$js_lang['s_emff_insert'] = 'V�nligen skriv mp3 filens URL';
$js_lang['s_flash_insert'] = 'V�nligen skriv Flash filens URL';
$js_lang['s_flash_w_insert'] = 'V�nligen specificera Flash filens bredd';
$js_lang['s_flash_w_error'] = 'Du specificerade inte Flash filens bredd';
$js_lang['s_flash_h_insert'] = 'V�nligen specificera Flash filens h�jd';
$js_lang['s_flash_h_error'] = 'Du specificerade inte Flash filens h�jd';
$js_lang['s_id_insert_tip'] = 'ID';
$js_lang['s_id_insert_error'] = 'Du specificerade inte n�gon ID';
$js_lang['s_file_insert_error'] = 'Du specificerade inte filens URL';
$js_lang['s_grad_select'] = 'V�nligen v�lj text f�rst';
$js_lang['s_grad_error'] = 'Detta fungerar bara med mindre �n 120 bokst�ver';
$js_lang['s_grad_path'] = 'inkluderar/grad.htm';
$js_lang['s_view_more_code'] = 'Granska mer kod';
$js_lang['s_image_upload'] = 'Ladda upp bild till PostImage.org och l�gg till den i meddelandet';
$js_lang['s_posticyimage'] = 'Ladda upp bild och l�gg till den i meddelandet';

// Helpline messages
$js_lang['s_a_help'] = 'St�ng alla �ppna taggar';
$js_lang['s_b_help'] = 'Fet text: [b]text[/b]';
$js_lang['s_i_help'] = 'Kursiv text: [i]text[/i]';
$js_lang['s_u_help'] = 'Understruken text: [u]text[/u]';
$js_lang['s_strike_help'] = 'T�nd text: [strike]text[/strike]';
$js_lang['s_quote_help'] = 'Citera text: [quote]text[/quote]';
$js_lang['s_code_help'] = 'Kod visning: [code]code[/code]';
$js_lang['s_phpbbmod_help'] = 'phpBB Mod Template';
$js_lang['s_highlight_help'] = 'Highlight: [highlight=#FFFFAA]text[/highlight]';
$js_lang['s_img_help'] = 'S�tt in bild: [img]http://image_url[/img]';
$js_lang['s_imgl_help'] = 'Infoga bild med v�nster anpassningen: [img align=left]http://image_url[/img]';
$js_lang['s_imgr_help'] = 'Infoga bild med h�ger anpassningen: [img align=right]http://image_url[/img]';
$js_lang['s_albumimg_help'] = 'Infoga bild fr�n album: [albumimg]Album Pic ID[/albumimg]';
$js_lang['s_albumimgl_help'] = 'Infoga bild fr�n album med v�nster anpassningen: [albumimg align=left]Album Pic ID[/albumimg]';
$js_lang['s_albumimgr_help'] = 'Infoga bild fr�n album med h�ger anpassningen: [albumimg align=right]Album Pic ID[/albumimg]';
$js_lang['s_url_help'] = 'Infoga URL: [url]http://url[/url] or [url=http://url]URL text[/url]';
$js_lang['s_fc_help'] = 'Teckensnitts f�rg: [color=red]text[/color] (Tip: you can also use color=#FF0000)';
$js_lang['s_fs_help'] = 'Teckensnitts storlek: [size=9]small text[/size]';
$js_lang['s_ft_help'] = 'Teckensnitts typ: [font=Andalus]text[/font]';
$js_lang['s_table_help'] = 'Infoga Tabell: [table]text[/table]';
$js_lang['s_td_help'] = 'Infoga Tabell Kolumn: [td]text[/td]';
$js_lang['s_mail_help'] = 'Infoga E-post: [email]Email Here[/email]';
$js_lang['s_grad_help'] = 'Infoga lutnings text';
$js_lang['s_right_help'] = 'Ange text anpassad till h�ger: [align=right]text[/align]';
$js_lang['s_left_help'] = 'Ange text anpassad till v�nster: [align=left]text[/align]';
$js_lang['s_center_help'] = 'Ange text anpassad till centrum: [align=center]text[/align]';
$js_lang['s_justify_help'] = 'Justify text: [align=justify]text[/align]';
$js_lang['s_marqr_help'] = 'Marque text till H�ger: [marquee direction=right]text[/marquee]';
$js_lang['s_marql_help'] = 'Marque text till V�nster: [marquee direction=left]text[/marquee]';
$js_lang['s_marqu_help'] = 'Marque text till upp: [marquee direction=up]text[/marquee]';
$js_lang['s_marqd_help'] = 'Marque text till ner: [marquee direction=down]text[/marquee]';
$js_lang['s_sup_help'] = 'Superscript: [sup]text[/sup]';
$js_lang['s_sub_help'] = 'Subscript: [sub]text[/sub]';
$js_lang['s_hr_help'] = 'Infoga H-Linje [hr]';
$js_lang['s_bullet_help'] = 'Infoga punkt [*]';
$js_lang['s_video_help'] = 'Infoga video fil: [video width=# height=#]file URL[/video]';
$js_lang['s_googlevideo_help'] = 'Infoga Google Video fil: [googlevideo]Google Video ID[/googlevideo]';
$js_lang['s_youtube_help'] = 'Infoga YouTube video fil: [youtube]YouTube ID[/youtube]';
$js_lang['s_quick_help'] = 'Quicktime video: [quick]http://quicktime_video_url/[/quick]';
$js_lang['s_flash_help'] = 'Infoga flash fil: [flash width=# height=#]flash URL[/flash]';
$js_lang['s_ram_help'] = 'Infoga Real Media fil: [ram]File URL[/ram]';
$js_lang['s_stream_help'] = 'Infoga stream fil: [stream]File URL[/stream]';
$js_lang['s_emff_help'] = 'Infoga mp3 fil: [emff]File URL[/emff]';
$js_lang['s_fade_help'] = 'Bleka: [opacity]text[/opacity] or [opacity][img]http://image_url/[/img][/opacity]';
$js_lang['s_spoiler_help'] = 'Spoiler: [spoiler]text[/spoiler]';
$js_lang['s_cell_help'] = 'Cell: [cell]text[/cell]';
$js_lang['s_list_help'] = 'Lista: [list]text[/list] (Tips: du kan anv�nda [*] f�r att s�tta in punkt)';
$js_lang['s_listo_help'] = 'Ordered lista: [list=1|a]text[/list] (Tips: du kan anv�nda [*] f�r att s�tta in punkt)';
$js_lang['s_help_help'] = '�ppen BBKod Hj�lp';
$js_lang['s_image_upload_help'] = 'Ladda upp bild till PostImage.org och l�gg till den i meddelandet';
$js_lang['s_posticyimage_help'] = 'Ladda upp bild och l�gg till den i meddelandet';
$js_lang['s_smiley_creator'] = 'Smiley Skapare: [smiley=1]Text[/smiley] infoga en smiley med text';

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