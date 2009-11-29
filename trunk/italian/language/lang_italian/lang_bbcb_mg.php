<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'bbcb_mg_lang' => 'lang_italian',

	'wrote' => 'ha scritto',
	'Quote' => 'Citazione',
	'Code' => 'Codice',
	'Hide' => 'Nascondi',
	'Show' => 'Mostra',
	'Download' => 'Scarica',
	'Syntax' => 'Sintassi',
	'Select' => 'Seleziona',
	'ReviewPost' => 'Visualizza Messaggio',
	'OffTopic' => 'Off Topic',
	'OpenNewWindow' => 'Clicca sull\'immagine per aprirla in una nuova finestra',
	'C++' => 'C++',
	'PhpCode' => 'Php',

	'Close_Tags' => 'Chiudi Tags',
	'Styles_tip' => 'Suggerimento: gli stili possono essere applicati anche al testo selezionato',

	// Smiley Creator
	'bbcode_sc_help' => 'Smiley Creator: [schild=1]Testo[/schild] Crea uno Smiley con il tuo testo',
	'Smiley_creator' => 'Smiley Creator',
	'SC_shieldtext' => 'Testo Smiley',
	'SC_fontcolor' => 'Colore Testo',
	'SC_shadowcolor' => 'Colore Ombreggiatura',
	'SC_shieldshadow' => 'Ombreggiatura',
	'SC_shieldshadow_on' => 'Attiva',
	'SC_shieldshadow_off' => 'Disattiva',
	'SC_smiliechooser' => 'Scelta Smiley',
	'SC_random_smilie' => 'Smiley Casuale',
	'SC_default_smilie' => 'Smiley Standard',
	'SC_create_smilie' => 'Crea',
	'SC_stop_creating' => 'Fine creazione',
	'SC_error' => 'Ecco il tuo Smiley - hai dimenticato di inserire il testo...',
	'SC_another_shield' => 'Vuoi creare un altro Smiley?',
	'SC_notext_error' => 'Non si possono creare Smileys senza testo',

	'bbcode_b_help' => 'Grassetto: [b]testo[/b]  (alt+b)',
	'bbcode_i_help' => 'Corsivo: [i]testo[/i]  (alt+i)',
	'bbcode_u_help' => 'Sottolineato: [u]testo[/u]  (alt+u)',
	'bbcode_q_help' => 'Citazione: [quote]testo[/quote]  (alt+q)',
	'bbcode_c_help' => 'Codice: [code]codice[/code]  (alt+c)',
	'bbcode_l_help' => 'Lista: [list]testo[/list]  (alt+l)',
	'bbcode_o_help' => 'Lista ordinata: [list=]testo[/list]  (alt+o)',
	'bbcode_p_help' => 'Inserisci immagine: [img]http://image_url[/img]  (alt+p)',
	'bbcode_w_help' => 'Inserisci URL: [url]http://url[/url] o [url=http://url]testo URL[/url]  (alt+w)',
	'bbcode_a_help' => 'Chiudi tutti i BBCode tags aperti',
	'bbcode_s_help' => 'Colore font: [color=red]testo[/color] oppure [color=#FF0000]testo[/color]',
	'bbcode_f_help' => 'Dimensione font: [size=x-small]testo piccolo[/size]',

	'Font_color' => 'Colore Carattere',

	'color_default' => 'Default',
	'color_dark_red' => 'Rosso Scuro',
	'color_red' => 'Rosso',
	'color_orange' => 'Arancione',
	'color_brown' => 'Marrone',
	'color_yellow' => 'Giallo',
	'color_green' => 'Verde',
	'color_olive' => 'Oliva',
	'color_cyan' => 'Azzurro',
	'color_blue' => 'Blu',
	'color_dark_blue' => 'Blu Scuro',
	'color_indigo' => 'Violetto',
	'color_violet' => 'Viola',
	'color_white' => 'Bianco',
	'color_black' => 'Nero',

	'color_cadet_blue' => 'Blue Cadetto',
	'color_coral' => 'Corallo',
	'color_crimson' => 'Crimson',
	'color_dark_grey' => 'Grigio Scuro',
	'color_dark_orchid' => 'Orchid',
	'color_gold' => 'Oro',
	'color_gray' => 'Grigio',
	'color_light_blue' => 'Blue Chiaro',
	'color_light_cyan' => 'Azzurro Chiaro',
	'color_light_green' => 'Verde Chiaro',
	'color_light_grey' => 'Grigio Chiaro',
	'color_light_orange' => 'Arancione Chiaro',
	'color_peach' => 'Pesca',
	'color_power_orange' => 'Arancione Potente',
	'color_sea_green' => 'Verde Acqua',
	'color_silver' => 'Argento',
	'color_tomato' => 'Pomodoro',
	'color_turquoise' => 'Turchese',
	'color_chocolate' => 'Cioccolato',
	'color_deepskyblue' => 'Blu Cielo Profondo',
	'color_midnightblue' => 'Blu Mezzanotte',
	'color_darkgreen' => 'Verde Scuro',

	'Font_size' => 'Dimensione Font',
	'font_tiny' => 'Minuscolo',
	'font_small' => 'Piccolo',
	'font_medium' => 'Medio',
	'font_normal' => 'Normale',
	'font_large' => 'Grande',
	'font_huge' => 'Enorme',
	'font_xl' => 'Extra Large',

	// Font Type
	'Font_Type' => 'Font',
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
	'bbcb_mg_colorpicker' => 'Mappa Colori',
	'bbcb_mg_j' => 'Giustifica',
	'bbcb_mg_r' => 'Destra',
	'bbcb_mg_c' => 'Centro',
	'bbcb_mg_l' => 'Sinistra',
	'bbcb_mg_b' => 'Grassetto',
	'bbcb_mg_i' => 'Corsivo',
	'bbcb_mg_u' => 'Sottolineatura',
	'bbcb_mg_s' => 'Sbarratura',
	'bbcb_mg_f' => 'Dissolvenza',
	'bbcb_mg_g' => 'Gradiente',
	'bbcb_mg_tab' => 'Tabella',
	'bbcb_mg_td' => 'Cella',
	'bbcb_mg_md' => 'Scorrimento verso il basso',
	'bbcb_mg_mu' => 'Scorrimento verso l\'alto',
	'bbcb_mg_ml' => 'Scorrimento verso sinistra',
	'bbcb_mg_mr' => 'Scorrimento verso destra',
	'bbcb_mg_code' => 'Codice',
	'bbcb_mg_phpbbmod' => 'phpBB Mod Template',
	'bbcb_mg_quote' => 'Citazione',
	'bbcb_mg_spoil' => 'Spoiler',
	'bbcb_mg_highlight' => 'Evidenzia',
	'bbcb_mg_url' => 'Url',
	'bbcb_mg_eml' => 'Email',
	'bbcb_mg_img' => 'Immagine',
	'bbcb_mg_imgl' => 'Immagine SX',
	'bbcb_mg_imgr' => 'Immagine DX',
	'bbcb_mg_albumimg' => 'Immagine Album',
	'bbcb_mg_flsh' => 'Flash',
	'bbcb_mg_vid' => 'Video',
	'bbcb_mg_gvid' => 'Google Video',
	'bbcb_mg_youtube' => 'YouTube',
	'bbcb_mg_ram' => 'Real',
	'bbcb_mg_strm' => 'Stream audio',
	'bbcb_mg_emff' => 'EMFF (MP3)',
	'bbcb_mg_lst' => 'Lista',
	'bbcb_mg_hr' => 'Linea orizzontale',
	'bbcb_mg_bullet' => 'Punto Elenco',
	'bbcb_mg_sup' => 'Apice',
	'bbcb_mg_sub' => 'Pedice',
	'bbcb_mg_lsto' => 'Lista Ordinata',
	'bbcb_mg_fade' => 'Trasparenza',
	'bbcb_mg_spoiler' => 'Spoiler',
	'bbcb_mg_cell' => 'Cella',
	'bbcb_mg_grad' => 'Gradiente',
	'bbcb_mg_upload_img' => 'Carica un\'immagine su PostImage.org e l\'aggiunge al messaggio',
	'bbcb_mg_posticyimage' => 'Carica un\'immagine e l\'aggiunge al messaggio',
	'bbcb_mg_albumimgl' => 'Immagine Album SX',
	'bbcb_mg_albumimgr' => 'Immagine Album DX',
	'bbcode_help' => 'BBCode FAQ',

	'xs_bbc_hide_message' => 'Messaggio Nascosto',
	'xs_bbc_hide_quote_message' => 'Messaggio Nascosto Citato, rimane invisibile.',
	'xs_bbc_hide_message_explain' => 'Spiacenti, ma devi esere registrato e devi rispondere alla discussione per poter vedere questo messaggio.',

	'bbcode_url' => 'Inserisci URL (es. http://www.icyphoenix.com)',
	'bbcode_url_title' => 'Inserisci il titolo del Link',
	'bbcode_url_empty' => 'Non hai inserito l\'URL',
	'bbcode_url_errors' => 'Errore!',
	)
);

// JavaScript Text - BEGIN
// Forms
$js_lang = array();

$js_lang['s_formerrors'] = 'Devi inserire del testo per poter inviare un messaggio';
$js_lang['s_gen_error'] = ':: Errore ::\n\n';
$js_lang['s_url_insert'] = 'Inserisci l\'URL (es. http://www.phpbb.com/)';
$js_lang['s_url_insert_tip'] = 'http://';
$js_lang['s_url_error'] = 'Non hai inserito alcun indirizzo';
$js_lang['s_url_title_insert'] = 'Inserisci un titolo per il link';
$js_lang['s_url_title_insert_tip'] = 'Link';
$js_lang['s_url_title_error'] = 'Non hai inserito alcun nome per la pagina';
$js_lang['s_email_insert'] = 'Inserisci un indirizzo email';
$js_lang['s_email_insert_tip'] = 'yourname@yourdomain.com';
$js_lang['s_email_error'] = 'Non hai inserito alcun indirizzo';
$js_lang['s_img_insert'] = 'Inserisci l\'indirizzo dell\'immagine';
$js_lang['s_img_error'] = 'Non hai inserito l\'indirizzo dell\'immagine';
$js_lang['s_albumimg_insert'] = 'Inserisci l\'ID dell\'immagine';
$js_lang['s_albumimg_insert_tip'] = 'ID';
$js_lang['s_albumimg_error'] = 'Non hai inserito l\'ID dell\'immagine';
$js_lang['s_ram_insert'] = 'Inserisci l\'indirizzo del file Real Media';
$js_lang['s_stream_insert'] = 'Inserisci l\'indirizzo del file audio';
$js_lang['s_video_insert'] = 'Inserisci l\'indirizzo del file video';
$js_lang['s_video_w_insert'] = 'Inserisci la larghezza del file video';
$js_lang['s_video_w_error'] = 'Non hai inserito la larghezza del file video';
$js_lang['s_video_h_insert'] = 'Inserisci l\'altezza del file video';
$js_lang['s_video_h_error'] = 'Non hai inserito l\'altezza del file video';
$js_lang['s_googlevideo_insert'] = 'Inserisci l\'ID del file Google Video';
$js_lang['s_youtube_insert'] = 'Inserisci l\'ID del video YouTube';
$js_lang['s_emff_insert'] = 'Inserisci l\'indirizzo del file mp3';
$js_lang['s_flash_insert'] = 'Inserisci l\'indirizzo del file Flash';
$js_lang['s_flash_w_insert'] = 'Inserisci la larghezza del file Flash';
$js_lang['s_flash_w_error'] = 'Non hai inserito la larghezza del file Flash';
$js_lang['s_flash_h_insert'] = 'Inserisci l\'altezza del file Flash';
$js_lang['s_flash_h_error'] = 'Non hai inserito l\'altezza del file Flash';
$js_lang['s_id_insert_tip'] = 'ID';
$js_lang['s_id_insert_error'] = 'Non hai inserito l\'ID';
$js_lang['s_file_insert_error'] = 'Non hai inserito l\'indirizzo del file';
$js_lang['s_grad_select'] = 'Seleziona il test';
$js_lang['s_grad_error'] = 'Selezionare al massimo 120 caratteri';
$js_lang['s_grad_path'] = 'includes/grad.htm';
$js_lang['s_view_more_code'] = 'Visualizza pi&ugrave codice';
$js_lang['s_image_upload'] = 'Carica un\'immagine su PostImage.org e l\'aggiunge al messaggio';
$js_lang['s_posticyimage'] = 'Carica un\'immagine e l\'aggiunge al messaggio';

// Helpline messages
$js_lang['s_a_help'] = 'Chiudi tutti i tags';
$js_lang['s_b_help'] = 'Grassetto testo: [b]testo[/b]';
$js_lang['s_i_help'] = 'Corsivo testo: [i]testo[/i]';
$js_lang['s_u_help'] = 'Sottolineatura testo: [u]testo[/u]';
$js_lang['s_strike_help'] = 'Sbarratura testo: [strike]testo[/strike]';
$js_lang['s_quote_help'] = 'Citazione testo: [quote]testo[/quote]';
$js_lang['s_code_help'] = 'Codice: [code]codice[/code]';
$js_lang['s_phpbbmod_help'] = 'phpBB Mod Template';
$js_lang['s_highlight_help'] = 'Evidenzia: [highlight=#FFFFAA]testo[/highlight]';
$js_lang['s_img_help'] = 'Inserisci immagine: [img]http://image_url[/img]';
$js_lang['s_imgl_help'] = 'Inserisci immagine allineata a sx: [img align=left]http://image_url[/img]';
$js_lang['s_imgr_help'] = 'Inserisci immagine allineata a dx: [img align=right]http://image_url[/img]';
$js_lang['s_albumimg_help'] = 'Inserisci immagine dall\'album: [albumimg]Album Pic ID[/albumimg]';
$js_lang['s_albumimgl_help'] = 'Inserisci immagine dall\'album allineata a sx: [albumimg align=left]Pic ID[/albumimg]';
$js_lang['s_albumimgr_help'] = 'Inserisci immagine dall\'album allineanta a dx: [albumimg align=right]Pic ID[/albumimg]';
$js_lang['s_url_help'] = 'Inserisci URL: [url]http://url[/url] o [url=http://url]URL testo[/url]';
$js_lang['s_fc_help'] = 'Colore Font: [color=red]testo[/color] (Consiglio: puoi anche usare color=#FF0000)';
$js_lang['s_fs_help'] = 'Dimensione Font: [size=9]testo[/size]';
$js_lang['s_ft_help'] = 'Tipo Font: [font=Andalus]testo[/font]';
$js_lang['s_table_help'] = 'Inserisci tabella: [table]testo[/table]';
$js_lang['s_td_help'] = 'Inserisci colonna in tabella: [td]testo[/td]';
$js_lang['s_mail_help'] = 'Inserisci email: [email]indirizzo email[/email]';
$js_lang['s_grad_help'] = 'Inserisci gradiente testo';
$js_lang['s_right_help'] = 'Allinea il testo a destra: [align=right]testo[/align]';
$js_lang['s_left_help'] = 'Allinea il testo a sinistra: [align=left]testo[/align]';
$js_lang['s_center_help'] = 'Allinea il testo al centro: [align=center]testo[/align]';
$js_lang['s_justify_help'] = 'Giustifica testo: [align=justify]testo[/align]';
$js_lang['s_marqr_help'] = 'Scorrimento testo a destra: [marquee direction=right]testo[/marquee]';
$js_lang['s_marql_help'] = 'Scorrimento testo a sinistra: [marquee direction=left]testo[/marquee]';
$js_lang['s_marqu_help'] = 'Scorrimento testo in alto: [marquee direction=up]testo[/marquee]';
$js_lang['s_marqd_help'] = 'Scorrimento testo in basso: [marquee direction=down]testo[/marquee]';
$js_lang['s_sup_help'] = 'Apice: [sup]testo[/sup]';
$js_lang['s_sub_help'] = 'Pedice: [sub]testo[/sub]';
$js_lang['s_hr_help'] = 'Inserisci linea orizzontale [hr]';
$js_lang['s_bullet_help'] = 'Inserisci punto elenco [*]';
$js_lang['s_video_help'] = 'Inserisci file video: [video width=# height=#]URL File[/video]';
$js_lang['s_googlevideo_help'] = 'Inserisci file Google Video: [googlevideo]Google Video ID[/googlevideo]';
$js_lang['s_youtube_help'] = 'Inserisci file video YouTube: [youtube]YouTube ID[/youtube]';
$js_lang['s_quick_help'] = 'Inserisci file Quicktime video: [quick]http://quicktime_video_url/[/quick]';
$js_lang['s_flash_help'] = 'Inserisci file flash: [flash width=# height=#]Flash URL[/flash]';
$js_lang['s_ram_help'] = 'Inserisci file Real Media : [ram]URL File[/ram]';
$js_lang['s_stream_help'] = 'Inserisci file audio: [stream]URL File[/stream]';
$js_lang['s_emff_help'] = 'Inserisci file mp3: [emff]URL File[/emff]';
$js_lang['s_fade_help'] = 'Sfumatura: [opacity]testo[/opacity] oppure [opacity][img]http://image_url/[/img][/opacity]';
$js_lang['s_spoiler_help'] = 'Spoiler: [spoiler]testo[/spoiler]';
$js_lang['s_cell_help'] = 'Cella: [cell]testo[/cell]';
$js_lang['s_list_help'] = 'Lista ordinata: [list|=1|a]testo[/list] (Consiglio: usa [*] per inserire nuovi elementi)';
$js_lang['s_listo_help'] = 'Lista ordinata: [list=1|a]testo[/list] (Consiglio: usa [*] per inserire nuovi elementi)';
$js_lang['s_help_help'] = 'BBCode FAQ';
$js_lang['s_image_upload_help'] = 'Carica un\'immagine su PostImage.org e l\'aggiunge al messaggio';
$js_lang['s_posticyimage_help'] = 'Carica un\'immagine e l\'aggiunge al messaggio';
$js_lang['s_smiley_creator'] = 'Smiley Creator: [smiley=1]Testo[/smiley] inserisce uno smiley con testo';

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