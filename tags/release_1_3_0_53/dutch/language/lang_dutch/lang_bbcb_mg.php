<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_bbcb_mg.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
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
	'bbcb_mg_lang' => 'lang_dutch',
	
	'wrote' => 'schreef',
	'Quote' => 'Citaat',
	'Code' => 'Code',
	'Hide' => 'Verbergen',
	'Show' => 'Weergeven',
	'Download' => 'Download',
	'Syntax' => 'Syntax',
	'Select' => 'Selecteer',
	'ReviewPost' => 'Bericht weergeven',
	'OffTopic' => 'Off Topic',
	'OpenNewWindow' => 'Klik op de afbeelding en het wordt geopend in een nieuw venster',
	'C++' => 'C++',
	'PhpCode' => 'PHP',

	'Close_Tags' => 'Tags sluiten',
	'Styles_tip' => 'Tip: stijl kun je snel toepassen op geselecteerde tekst.',

// Smiley Creator
	'bbcode_sc_help' => 'Smiliemaker: [schild=1]tekst[/schild], maak een smilie met jouw tekst',
	'Smiley_creator' => 'Smiliemaker',
	'SC_shieldtext' => 'Smilietekst',
	'SC_fontcolor' => 'Tekstkleur',
	'SC_shadowcolor' => 'Schaduwkleur',
	'SC_shieldshadow' => 'Schildschaduw',
	'SC_shieldshadow_on' => 'Activeer',
	'SC_shieldshadow_off' => 'Deactiveer',
	'SC_smiliechooser' => 'Smilie selecteren',
	'SC_random_smilie' => 'Willekeurige smilie',
	'SC_default_smilie' => 'Standaard smilie',
	'SC_create_smilie' => 'Maken',
	'SC_stop_creating' => 'Annuleren',
	'SC_error' => 'Hier is je schild - je bent tekst vergeten...',
	'SC_another_shield' => 'Wil je nog een andere smilie maken?',
	'SC_notext_error' => 'Je kan geen smilies zonder tekst maken',

	'bbcode_b_help' => 'Dikgedrukte tekst: [b]tekst[/b]  (alt+b)',
	'bbcode_i_help' => 'Schuingedrukte tekst: [i]tekst[/i]  (alt+i)',
	'bbcode_u_help' => 'Onderstreepte tekst: [u]tekst[/u]  (alt+u)',
	'bbcode_q_help' => 'Citaat: [quote]tekst[/quote]  (alt+q)',
	'bbcode_c_help' => 'Codeweergave: [code]code[/code]  (alt+c)',
	'bbcode_l_help' => 'Lijst: [list]tekst[/list] (alt+l)',
	'bbcode_o_help' => 'Georderde lijst: [list=]tekst[/list]  (alt+o)',
	'bbcode_p_help' => 'Afbeelding: [img]http://image_url[/img]  (alt+p)',
	'bbcode_w_help' => 'URL: [url]http://url[/url] of [url=http://url]URL tekst[/url]  (alt+w)',
	'bbcode_a_help' => 'Sluit alle geopende BBCode tags',
	'bbcode_s_help' => 'Letterkleur: [color=red]tekst[/color]  Tip: je kan ook gebruikmaken van color=#FF0000',
	'bbcode_f_help' => 'Lettergrootte: [size=x-small]kleine tekst[/size]',

	'Font_color' => 'Letterkleur',
	'color_default' => 'Standaard',
	'color_dark_red' => 'Donkerrood',
	'color_red' => 'Rood',
	'color_orange' => 'Oranje',
	'color_brown' => 'Bruin',
	'color_yellow' => 'Geel',
	'color_green' => 'Groen',
	'color_olive' => 'Olijf',
	'color_cyan' => 'Cyaan',
	'color_blue' => 'Blauw',
	'color_dark_blue' => 'Donkerblauw',
	'color_indigo' => 'Indigo',
	'color_violet' => 'Violet',
	'color_white' => 'Wit',
	'color_black' => 'Zwart',

	'color_cadet_blue' => 'Kadetblauw',
	'color_coral' => 'Koraal',
	'color_crimson' => 'Karmijn',
	'color_dark_grey' => 'Donkergrijs',
	'color_dark_orchid' => 'Donkerpaars',
	'color_gold' => 'Goud',
	'color_gray' => 'Grijs',
	'color_light_blue' => 'Lichtblauw',
	'color_light_cyan' => 'Lichtcyaan',
	'color_light_green' => 'Lichtgroen',
	'color_light_grey' => 'Lichtgrijs',
	'color_light_orange' => 'Lichtoranje',
	'color_peach' => 'Perzik',
	'color_power_orange' => 'Donkeroranje',
	'color_sea_green' => 'Zeegroen',
	'color_silver' => 'Zilver',
	'color_tomato' => 'Tomaat',
	'color_turquoise' => 'Turkoois',
	'color_chocolate' => 'Chocolade',
	'color_deepskyblue' => 'Diepluchtblauw',
	'color_midnightblue' => 'Middennachtblauw',
	'color_darkgreen' => 'Donkergroen',

	'Font_size' => 'Lettergrootte',
	'font_tiny' => 'Erg klein',
	'font_small' => 'Klein',
	'font_medium' => 'Middel',
	'font_normal' => 'Normaal',
	'font_large' => 'Groot',
	'font_huge' => 'Erg groot',
	'font_xl' => 'XL',

// Font Type
	'Font_Type' => 'Lettertype',
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
	'bbcb_mg_colorpicker' => 'Kleurpallet',
	'bbcb_mg_j' => 'Uitgevuld',
	'bbcb_mg_r' => 'Rechts',
	'bbcb_mg_c' => 'Midden',
	'bbcb_mg_l' => 'Links',
	'bbcb_mg_b' => 'Dikgedrukt',
	'bbcb_mg_i' => 'Schuingedrukt',
	'bbcb_mg_u' => 'Onderstreept',
	'bbcb_mg_s' => 'Doorgestreept',
	'bbcb_mg_f' => 'Fade',
	'bbcb_mg_g' => 'Gradient',
	'bbcb_mg_tab' => 'Tabel',
	'bbcb_mg_td' => 'Cel',
	'bbcb_mg_md' => 'Lichtkrant naar beneden',
	'bbcb_mg_mu' => 'Lichtkrant naar boven',
	'bbcb_mg_ml' => 'Lichtkrant naar links',
	'bbcb_mg_mr' => 'Lichtkrant naar beneden',
	'bbcb_mg_code' => 'Code',
	'bbcb_mg_phpbbmod' => 'phpBB Modtemplate',
	'bbcb_mg_quote' => 'Citaat',
	'bbcb_mg_spoil' => 'Spoiler',
	'bbcb_mg_highlight' => 'Highlight',
	'bbcb_mg_url' => 'URL',
	'bbcb_mg_eml' => 'E-mail',
	'bbcb_mg_img' => 'Afbeelding',
	'bbcb_mg_imgl' => 'Afbeelding links',
	'bbcb_mg_imgr' => 'Afbeelding rechts',
	'bbcb_mg_albumimg' => 'Albumafbeelding',
	'bbcb_mg_flsh' => 'Flash',
	'bbcb_mg_vid' => 'Video',
	'bbcb_mg_gvid' => 'Google Video',
	'bbcb_mg_youtube' => 'YouTube',
	'bbcb_mg_ram' => 'Ram',
	'bbcb_mg_strm' => 'Stream',
	'bbcb_mg_emff' => 'EMFF (MP3)',
	'bbcb_mg_lst' => 'Lijst',
	'bbcb_mg_hr' => 'Horizontale lijn',
	'bbcb_mg_bullet' => 'Lijstpunt',
	'bbcb_mg_sup' => 'Sup',
	'bbcb_mg_sub' => 'Sub',
	'bbcb_mg_lsto' => 'Georderde lijst',
	'bbcb_mg_fade' => 'Transparant',
	'bbcb_mg_spoiler' => 'Spoiler',
	'bbcb_mg_cell' => 'Cel',
	'bbcb_mg_grad' => 'Kleurverloop',
	'bbcb_mg_upload_img' => 'Afbeelding uploaden naar PostImage.org en toevoegen aan het bericht',
	'bbcb_mg_posticyimage' => 'Afbeelding uploaden en toevoegen aan het bericht',
	'bbcb_mg_albumimgl' => 'Albumafbeelding links',
	'bbcb_mg_albumimgr' => 'Albumafbeelding rechts',
	'bbcode_help' => 'BBCode Help',

	'xs_bbc_hide_message' => 'Verborgen bericht',
	'xs_bbc_hide_quote_message' => 'Geciteerde verborgen bericht, wat verborgen blijft.',
	'xs_bbc_hide_message_explain' => 'Je moet geregistreerd zijn en een antwoord hebben geplaatst om dit bericht te bekijken.',

	'bbcode_url' => 'Geef een URL in (bv. http://www.phpbb.com)',
	'bbcode_url_title' => 'Geef een titel van de link in',
	'bbcode_url_empty' => 'Je hebt geen URL ingegeven',
	'bbcode_url_errors' => 'Fout!',
	)
);

// JavaScript Text - BEGIN
// Forms
$js_lang = array();

$js_lang['s_formerrors'] = 'Je moet tekst ingeven om een bericht te kunnen plaatsen';
$js_lang['s_gen_error'] = ':: Fout ::\n\n';
$js_lang['s_url_insert'] = 'URL ingeven (bijv. http://www.icyphoenix.com/)';
$js_lang['s_url_insert_tip'] = 'http://';
$js_lang['s_url_error'] = 'Je hebt geen URL ingegeven';
$js_lang['s_url_title_insert'] = 'Titel van de link ingeven:';
$js_lang['s_url_title_insert_tip'] = 'Link';
$js_lang['s_url_title_error'] = 'Je hebt geen titel ingegeven';
$js_lang['s_email_insert'] = 'E-mailadres ingeven';
$js_lang['s_email_insert_tip'] = 'jouwnaam@jouwdomein.com';
$js_lang['s_email_error'] = 'Je hebt geen e-mailadres ingegeven';
$js_lang['s_img_insert'] = 'Afbeelding URL ingeven';
$js_lang['s_img_error'] = 'Je hebt geen afbeelding URL ingegeven';
$js_lang['s_albumimg_insert'] = 'Albumafbeelding ID ingeven';
$js_lang['s_albumimg_insert_tip'] = 'ID';
$js_lang['s_albumimg_error'] = 'Je hebt geen albumafbeelding ID ingegeven';
$js_lang['s_ram_insert'] = 'Realmediabestand URL ingeven';
$js_lang['s_stream_insert'] = 'Audiobestand URL ingeven';
$js_lang['s_video_insert'] = 'Videobestand URL ingeven';
$js_lang['s_video_w_insert'] = 'Videobreedte ingeven';
$js_lang['s_video_w_error'] = 'Je hebt geen videobreedte ingegeven';
$js_lang['s_video_h_insert'] = 'Videohoogte ingeven';
$js_lang['s_video_h_error'] = 'Je hebt geen videohoogte ingegeven';
$js_lang['s_googlevideo_insert'] = 'Google Videobestand ID ingeven';
$js_lang['s_youtube_insert'] = 'YouTube bestand ID ingeven';
$js_lang['s_emff_insert'] = 'Mp3-bestand URL ingeven';
$js_lang['s_flash_insert'] = 'Flashbestand URL ingeven';
$js_lang['s_flash_w_insert'] = 'Flashbreedte ingeven';
$js_lang['s_flash_w_error'] = 'Je hebt geen flashbreedte ingegeven';
$js_lang['s_flash_h_insert'] = 'Flashhoogte ingeven';
$js_lang['s_flash_h_error'] = 'Je hebt geen flashhoogte ingegeven';
$js_lang['s_id_insert_tip'] = 'ID';
$js_lang['s_id_insert_error'] = 'Je hebt geen ID ingegeven';
$js_lang['s_file_insert_error'] = 'Je hebt geen bestandsurl ingegeven';
$js_lang['s_grad_select'] = 'Selecteer de tekst eerst';
$js_lang['s_grad_error'] = 'Dit functioneert alleen met tekst minder dan 120 tekens';
$js_lang['s_grad_path'] = 'includes/grad.htm';
$js_lang['s_view_more_code'] = 'Meer code ingeven';
$js_lang['s_image_upload'] = 'Afbeelding naar PostImage.org uploaden en toevoegen aan het bericht';
$js_lang['s_posticyimage'] = 'Afbeelding uploaden en toevoegen aan het bericht';

// Helpline messages
$js_lang['s_a_help'] = 'Sluit alle geopende tags';
$js_lang['s_b_help'] = 'Dikgedrukt: [b]tekst[/b]';
$js_lang['s_i_help'] = 'Schuingedrukt: [i]tekst[/i]';
$js_lang['s_u_help'] = 'Onderstreept: [u]tekst[/u]';
$js_lang['s_strike_help'] = 'Doorgestreept: [strike]tekst[/strike]';
$js_lang['s_quote_help'] = 'Citaat: [quote]tekst[/quote]';
$js_lang['s_code_help'] = 'Code: [code]code[/code]';
$js_lang['s_phpbbmod_help'] = 'phpBB Modtemplate';
$js_lang['s_highlight_help'] = 'Highlight: [highlight=#FFFFAA]tekst[/highlight]';
$js_lang['s_img_help'] = 'Afbeelding toevoegen: [img]http://afbeelding_url[/img]';
$js_lang['s_imgl_help'] = 'Afbeelding links uitlijnen: [img align=left]http://afbeelding_url[/img]';
$js_lang['s_imgr_help'] = 'Afbeelding rechts uitlijnen: [img align=right]http://afbeelding_url[/img]';
$js_lang['s_albumimg_help'] = 'Albumafbeelding toevoegen: [albumimg]<ID>[/albumimg]';
$js_lang['s_albumimgl_help'] = 'Links uitgelijnde albumafbeelding toevoegen: [albumimg align=left]<ID>[/albumimg]';
$js_lang['s_albumimgr_help'] = 'Rechts uitgelijnde albumafbeelding toevoegen: [albumimg align=right]<ID>[/albumimg]';
$js_lang['s_url_help'] = 'Link (URL) toevoegen: [url]http://url[/url] of [url=http://url]URL tekst[/url]';
$js_lang['s_fc_help'] = 'Letterkleur: [color=red]tekst[/color] (Tip: je kan ook gebruikmaken van color=#FF0000)';
$js_lang['s_fs_help'] = 'Lettergrootte: [size=9]kleine tekst[/size]';
$js_lang['s_ft_help'] = 'Lettertype: [font=Andalus]tekst[/font]';
$js_lang['s_table_help'] = 'Tabel toevoegen: [table]tekst[/table]';
$js_lang['s_td_help'] = 'Tabelkolom toevoegen: [td]tekst[/td]';
$js_lang['s_mail_help'] = 'E-mail toevoegen: [email]E-mail hier[/email]';
$js_lang['s_grad_help'] = 'Tekst met kleurverloop toevoegen';
$js_lang['s_right_help'] = 'Tekst rechtsuitlijnen: [align=right]tekst[/align]';
$js_lang['s_left_help'] = 'Tekst linksuitlijnen: [align=left]tekst[/align]';
$js_lang['s_center_help'] = 'Tekst centreren: [align=center]tekst[/align]';
$js_lang['s_justify_help'] = 'Tekst uitvullen: [align=justify]tekst[/align]';
$js_lang['s_marqr_help'] = 'Lichtkrant naar rechts: [marquee direction=right]tekst[/marquee]';
$js_lang['s_marql_help'] = 'Lichtkrant naar links: [marquee direction=left]tekst[/marquee]';
$js_lang['s_marqu_help'] = 'Lichtkrant naar boven: [marquee direction=up]tekst[/marquee]';
$js_lang['s_marqd_help'] = 'Lichtkrant naar beneden: [marquee direction=down]tekst[/marquee]';
$js_lang['s_sup_help'] = 'Superscript: [sup]tekst[/sup]';
$js_lang['s_sub_help'] = 'Subscript: [sub]tekst[/sub]';
$js_lang['s_hr_help'] = 'Horizontale lijn toevoegen [hr]';
$js_lang['s_bullet_help'] = 'Lijstpunt toevoegen [*]';
$js_lang['s_video_help'] = 'Videobestand toevoegen: [video width=# height=#]bestand URL[/video]';
$js_lang['s_googlevideo_help'] = 'Google Videobestand toevoegen: [googlevideo]Google Video ID[/googlevideo]';
$js_lang['s_youtube_help'] = 'YouTube videobestand invoegen: [youtube]YouTube ID[/youtube]';
$js_lang['s_quick_help'] = 'Quicktime video: [quick]http://quicktime_video_url/[/quick]';
$js_lang['s_flash_help'] = 'Flashbestand toevoegen: [flash width=# height=#]flash URL[/flash]';
$js_lang['s_ram_help'] = 'Realmediabestand toevoegen: [ram]bestand URL[/ram]';
$js_lang['s_stream_help'] = 'Streambestand toevoegen: [stream]bestand URL[/stream]';
$js_lang['s_emff_help'] = 'Mp3-bestand toevoegen: [emff]Bestand URL[/emff]';
$js_lang['s_fade_help'] = 'Transparant: [opacity]tekst[/opacity] of [opacity][img]http://afbeelding_url/[/img][/opacity]';
$js_lang['s_spoiler_help'] = 'Spoiler: [spoiler]tekst[/spoiler]';
$js_lang['s_cell_help'] = 'Cell: [cell]text[/cell]';
$js_lang['s_list_help'] = 'Lijst: [list]tekst[/list] (Tip: je kan ook gebruikmaken van [*] om een lijstpunt toe te voegen)';
$js_lang['s_listo_help'] = 'Georderde lijst: [list=1|a]tekst[/list] (Tip: je kan ook gebruikmaken van [*] om een lijstpunt toe te voegen)';
$js_lang['s_help_help'] = 'Open BBCode Help';
$js_lang['s_image_upload_help'] = 'Afbeelding naar PostImage.org uploaden en toevoegen aan het bericht';
$js_lang['s_posticyimage_help'] = 'Afbeelding uploaden en toevoegen aan het bericht';
$js_lang['s_smiley_creator'] = 'Smiliemaker: [smiley=1]Tekst[/smiley] een smilie met tekst toe te voegen';

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