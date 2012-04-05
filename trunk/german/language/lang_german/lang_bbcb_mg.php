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

	'wrote' => 'hat folgendes geschrieben',
	'Quote' => 'Zitat',
	'Code' => 'Code',
	'Hide' => 'Ausblenden',
	'Show' => 'Anzeigen',
	'Download' => 'Download',
	'Syntax' => 'Syntax',
	'Select' => 'Auswählen',
	'ReviewPost' => 'Beitrag anzeigen',
	'OffTopic' => 'Off Topic',
	'OpenNewWindow' => 'Klicke hier um das Bild in einem neuen Fenster zu öffnen',
	'C++' => 'C++',
	'PhpCode' => 'Php',

	'Close_Tags' => 'Tags schließen',
	'Styles_tip' => 'Tipp: Styles können schnell zum markierten Text hinzugefügt werden.',

// Smiley Creator
	'bbcode_sc_help' => 'Smiley Generator: [schild=1]Text[/schild] Erstellt einen Smiley mit Schild',
	'Smiley_creator' => 'Smiley Generator',
	'SC_shieldtext' => 'Smiley Text',
	'SC_fontcolor' => 'Textfarbe',
	'SC_shadowcolor' => 'Schattenfarbe',
	'SC_shieldshadow' => 'Schildschatten',
	'SC_shieldshadow_on' => 'Aktivieren',
	'SC_shieldshadow_off' => 'Deaktivieren',
	'SC_smiliechooser' => 'Smiley auswählen',
	'SC_random_smilie' => 'Zufälliger Smiley',
	'SC_default_smilie' => 'Standard Smiley',
	'SC_create_smilie' => 'Erstellen',
	'SC_stop_creating' => 'Abbrechen',
	'SC_error' => 'Hier ist dein Schild - du hast den Text vergessen&hellip;',
	'SC_another_shield' => 'Möchtest du noch einen Smiley erstellen?',
	'SC_notext_error' => 'Du kannst keine Smilies ohne Text erstellen!',

	'bbcode_b_help' => 'Text in fett: [b]Text[/b] (alt+b)',
	'bbcode_i_help' => 'Text in kursiv: [i]Text[/i] (alt+i)',
	'bbcode_u_help' => 'Unterstrichener Text: [u]Text[/u] (alt+u)',
	'bbcode_q_help' => 'Zitat: [quote]Text[/quote] (alt+q)',
	'bbcode_c_help' => 'Code anzeigen: [code]Code[/code] (alt+c)',
	'bbcode_l_help' => 'Liste: [list]Text[/list] (alt+l)',
	'bbcode_o_help' => 'Geordnete Liste: [list=]Text[/list] (alt+o)',
	'bbcode_p_help' => 'Bild einfügen: [img]http://URL_des_Bildes[/img] (alt+p)',
	'bbcode_w_help' => 'URL einfügen: [url]http://URL[/url] oder [url=http://url]URL Text[/url] (alt+w)',
	'bbcode_a_help' => 'Alle offenen BBCodes schließen',
	'bbcode_s_help' => 'Schriftfarbe: [color=red]Text[/color] Tipp: Du kannst ebenfalls color=#FF0000 benutzen',
	'bbcode_f_help' => 'Schriftgröße: [size=x-small]Kleiner Text[/size]',

	'Font_color' => 'Schriftfarbe',
	'color_default' => 'Standard',
	'color_dark_red' => 'Dunkelrot',
	'color_red' => 'Rot',
	'color_orange' => 'Orange',
	'color_brown' => 'Braun',
	'color_yellow' => 'Gelb',
	'color_green' => 'Grün',
	'color_olive' => 'Oliv',
	'color_cyan' => 'Cyan',
	'color_blue' => 'Blau',
	'color_dark_blue' => 'Dunkelblau',
	'color_indigo' => 'Indigo',
	'color_violet' => 'Violett',
	'color_white' => 'Weiß',
	'color_black' => 'Schwarz',

	'color_cadet_blue' => 'Cadet Blau',
	'color_coral' => 'Coral',
	'color_crimson' => 'Purpurrot',
	'color_dark_grey' => 'Dunkelgrau',
	'color_dark_orchid' => 'Dunkel-Orchidee',
	'color_gold' => 'Gold',
	'color_gray' => 'Grau',
	'color_light_blue' => 'Hellblau',
	'color_light_cyan' => 'Hellzyan',
	'color_light_green' => 'Hellgrün',
	'color_light_grey' => 'Hellgrau',
	'color_light_orange' => 'Hellorange',
	'color_peach' => 'Gelb-Orange',
	'color_power_orange' => 'Power Orange',
	'color_sea_green' => 'Seegrün',
	'color_silver' => 'Silber',
	'color_tomato' => 'Tomatenrot',
	'color_turquoise' => 'Türkis',
	'color_chocolate' => 'Schokolade',
	'color_deepskyblue' => 'Dunkel-Himmelblau',
	'color_midnightblue' => 'Mitternachtsblau',
	'color_darkgreen' => 'Dunkelgrün',

	'Font_size' => 'Schriftgröße',
	'font_tiny' => 'Winzig',
	'font_small' => 'Klein',
	'font_medium' => 'Mittel',
	'font_normal' => 'Normal',
	'font_large' => 'etwas Größer',
	'font_huge' => 'Groß',
	'font_xl' => 'Riesig',

// Font Type
	'Font_Type' => 'Schriftart',
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
	'bbcb_mg_colorpicker' => 'Farbauswahl',
	'bbcb_mg_j' => 'Blocksatz',
	'bbcb_mg_r' => 'Rechts',
	'bbcb_mg_c' => 'Zentriert',
	'bbcb_mg_l' => 'Links',
	'bbcb_mg_b' => 'Fett',
	'bbcb_mg_i' => 'Kursiv',
	'bbcb_mg_u' => 'Unterstrichen',
	'bbcb_mg_s' => 'Durchgestrichen',
	'bbcb_mg_f' => 'Verblassen (Fade)',
	'bbcb_mg_g' => 'Gradient',
	'bbcb_mg_tab' => 'Tabelle',
	'bbcb_mg_td' => 'Zelle',
	'bbcb_mg_md' => 'Laufschrift nach unten',
	'bbcb_mg_mu' => 'Laufschrift nach oben',
	'bbcb_mg_ml' => 'Laufschrift nach links',
	'bbcb_mg_mr' => 'Laufschrift nach rechts',
	'bbcb_mg_code' => 'Code',
	'bbcb_mg_phpbbmod' => 'phpBB Mod Template',
	'bbcb_mg_quote' => 'Zitat',
	'bbcb_mg_spoil' => 'Spoiler',
	'bbcb_mg_highlight' => 'Hervorheben',
	'bbcb_mg_url' => 'URL',
	'bbcb_mg_eml' => 'E-Mail',
	'bbcb_mg_img' => 'Bild',
	'bbcb_mg_imgl' => 'Bild links',
	'bbcb_mg_imgr' => 'Bild rechts',
	'bbcb_mg_albumimg' => 'Foto-Galeriebild',
	'bbcb_mg_flsh' => 'Flash',
	'bbcb_mg_vid' => 'Video',
	'bbcb_mg_gvid' => 'Google Video',
	'bbcb_mg_youtube' => 'YouTube',
	'bbcb_mg_ram' => 'Ram',
	'bbcb_mg_strm' => 'Stream',
	'bbcb_mg_emff' => 'EMFF (MP3)',
	'bbcb_mg_lst' => 'Liste',
	'bbcb_mg_hr' => 'Horizontale Linie',
	'bbcb_mg_bullet' => 'Listenpunkt',
	'bbcb_mg_sup' => 'Hochgestellt',
	'bbcb_mg_sub' => 'Tiefgestellt',
	'bbcb_mg_lsto' => 'Geordnete List',
	'bbcb_mg_fade' => 'Transparenz',
	'bbcb_mg_spoiler' => 'Spoiler',
	'bbcb_mg_cell' => 'Zelle',
	'bbcb_mg_grad' => 'Farbverlauf',
	'bbcb_mg_upload_img' => 'Bild zu PostImage.org hochladen und zum Beitrag hinzufügen',
	'bbcb_mg_posticyimage' => 'Bild Hochladen und zum Text hinzufügen',
	'bbcb_mg_albumimgl' => 'Foto-Galeriebild links',
	'bbcb_mg_albumimgr' => 'Foto-Galeriebild rechts',
	'bbcode_help' => 'BBCode Hilfe',

	'xs_bbc_hide_message' => 'Versteckte Nachricht',
	'xs_bbc_hide_quote_message' => 'Zitierte versteckte Nachricht ist noch verdeckt.',
	'xs_bbc_hide_message_explain' => 'Um diese Nachricht lesen zu können, musst du registriert sein und eine Antwort geschrieben haben.',

	'bbcode_url' => 'URL eingeben (z.B. http://www.icyphoenix.de)',
	'bbcode_url_title' => 'Titel des Links eingeben',
	'bbcode_url_empty' => 'Du hast keine URL eingegeben.',
	'bbcode_url_errors' => 'Fehler!',
	)
);

// JavaScript Text - BEGIN
// Forms
$js_lang = array();

$js_lang['s_formerrors'] = 'Du musst etwas Text eingeben, bevor du den Beitrag absenden kannst.';
$js_lang['s_gen_error'] = ':: Fehler ::\n\n';
$js_lang['s_url_insert'] = 'URL einfügen (z.B. http://www.icyphoenix.de/)';
$js_lang['s_url_insert_tip'] = 'http://';
$js_lang['s_url_error'] = 'Du hast keine URL eingegeben';
$js_lang['s_url_title_insert'] = 'Titel des Links eingeben (was im Beitrag anzuklicken ist)';
$js_lang['s_url_title_insert_tip'] = 'Link';
$js_lang['s_url_title_error'] = 'Du hast keinen Titel angegeben';
$js_lang['s_email_insert'] = 'E-Mail Adresse eingeben';
$js_lang['s_email_insert_tip'] = 'yourname@yourdomain.com';
$js_lang['s_email_error'] = 'Du hast keine E-Mail Adresse eingegeben';
$js_lang['s_img_insert'] = 'Gib die Bild-URL ein';
$js_lang['s_img_error'] = 'Du hast keine Bild-URL eingegeben';
$js_lang['s_albumimg_insert'] = 'Gib die ID des Foto-Galeriebildes ein';
$js_lang['s_albumimg_insert_tip'] = 'ID';
$js_lang['s_albumimg_error'] = 'Du hast keine ID eines Foto-Galeriebildes eingegeben';
$js_lang['s_ram_insert'] = 'Gib die Real Media Datei URL ein';
$js_lang['s_stream_insert'] = 'Gib die Audiodatei URL ein';
$js_lang['s_video_insert'] = 'Gib die Videodatei URL ein';
$js_lang['s_video_w_insert'] = 'Bitte gib die Videobreite ein';
$js_lang['s_video_w_error'] = 'Du hast keine Videobreite eingegeben.';
$js_lang['s_video_h_insert'] = 'Bitte gib die Videohöhe ein';
$js_lang['s_video_h_error'] = 'Du hast keine Videohöhe eingegeben.';
$js_lang['s_googlevideo_insert'] = 'Bitte Google Video Datei ID eingeben';
$js_lang['s_youtube_insert'] = 'Bitte YouTube Datei ID eingeben';
$js_lang['s_emff_insert'] = 'Bitte mp3 Datei URL eingeben';
$js_lang['s_flash_insert'] = 'Gib die Flash-Datei URL ein';
$js_lang['s_flash_w_insert'] = 'Bitte gib die Flashbreite ein';
$js_lang['s_flash_w_error'] = 'Du hast keine Flashbreite eingegeben.';
$js_lang['s_flash_h_insert'] = 'Bitte gib die Flashhöhe ein';
$js_lang['s_flash_h_error'] = 'Du hast keine Flashhöhe eingegeben.';
$js_lang['s_id_insert_tip'] = 'ID';
$js_lang['s_id_insert_error'] = 'Du hast keine ID angegeben';
$js_lang['s_file_insert_error'] = 'Du hast keine Datei-URL eingegeben.';
$js_lang['s_grad_select'] = 'Wähle zuerst den Text aus';
$js_lang['s_grad_error'] = 'Funktioniert nur mit weniger als 120 Zeichen';
$js_lang['s_grad_path'] = 'includes/grad.htm';
$js_lang['s_view_more_code'] = 'Zeige mehr Code';
$js_lang['s_image_upload'] = 'Bild zu PostImage.org hochladen und zur Nachricht hinzufügen';
$js_lang['s_posticyimage'] = 'Bild hochladen und zur Nachricht hinzufügen';

// Helpline messages
$js_lang['s_a_help'] = 'Alle offenen BBCodes schließen';
$js_lang['s_b_help'] = 'Text in fett: [b]Text[/b]';
$js_lang['s_i_help'] = 'Text in kursiv: [i]Text[/i]';
$js_lang['s_u_help'] = 'Unterstrichener Text: [u]Text[/u]';
$js_lang['s_strike_help'] = 'Durchgestrichener Text: [strike]Text[/strike]';
$js_lang['s_quote_help'] = 'Zitat: [quote]Text[/quote]';
$js_lang['s_code_help'] = 'Code anzeigen: [code]Code[/code]';
$js_lang['s_phpbbmod_help'] = 'phpBB Mod Template';
$js_lang['s_highlight_help'] = 'Hervorheben: [highlight=#FFFFAA]Text[/highlight]';
$js_lang['s_img_help'] = 'Bild einfügen: [img]http://URL_des_Bildes[/img]';
$js_lang['s_imgl_help'] = 'Links ausgerichtetes Bild einfügen: [img align=left]http://image_url[/img]';
$js_lang['s_imgr_help'] = 'Rechts ausgerichtetes Bild einfügen: [img align=right]http://image_url[/img]';
$js_lang['s_albumimg_help'] = 'Foto-Galeriebild einfügen: [albumimg]Foto-Galerie Bild ID[/albumimg]';
$js_lang['s_albumimgl_help'] = 'Foto-Galerie Bild links einfügen: [albumimg align=left]Foto-Galerie Bild ID[/albumimg]';
$js_lang['s_albumimgr_help'] = 'Foto-Galerie Bild rechts einfügen: [albumimg align=right]Foto-Galerie Bild ID[/albumimg]';
$js_lang['s_url_help'] = 'URL einfügen: [url]http://URL[/url] oder [url=http://url]URL Text[/url]';
$js_lang['s_fc_help'] = 'Schriftfarbe: [color=red]Text[/color] (Du kannst ebenfalls color=#FF0000 benutzen)';
$js_lang['s_fs_help'] = 'Schriftgröße: [size=x-small]Kleiner Text[/size]';
$js_lang['s_ft_help'] = 'Schriftart: [font=Andalus]Text[/font]';
$js_lang['s_table_help'] = 'Tabelle einfügen: [table]Text[/table]';
$js_lang['s_td_help'] = 'Tabellenspalte einfügen: [td]Text[/td]';
$js_lang['s_mail_help'] = 'E-Mail einfügen: [email]E-Mail hier[/email]';
$js_lang['s_grad_help'] = 'Gradient-Text einfügen';
$js_lang['s_right_help'] = 'Text rechts ausrichten: [align=right]Text[/align]';
$js_lang['s_left_help'] = 'Text links ausrichten: [align=left]Text[/align]';
$js_lang['s_center_help'] = 'Text zentriert ausrichten: [align=center]Text[/align]';
$js_lang['s_justify_help'] = 'Text als Blocksatz ausrichten: [align=justify]Text[/align]';
$js_lang['s_marqr_help'] = 'Laufschrift nach rechts: [marq=right]Text[/marq]';
$js_lang['s_marql_help'] = 'Laufschrift nach links: [marq=left]Text[/marq]';
$js_lang['s_marqu_help'] = 'Laufschrift nach oben: [marq=up]Text[/marq]';
$js_lang['s_marqd_help'] = 'Laufschrift nach unten: [marq=down]Text[/marq]';
$js_lang['s_sup_help'] = 'Hochgestellt: [sup]Text[/sup]';
$js_lang['s_sub_help'] = 'Tiefgestellt: [sub]Text[/sub]';
$js_lang['s_hr_help'] = 'Horizontale Linie einfügen [hr]';
$js_lang['s_bullet_help'] = 'Listenpunkt einfügen [*]';
$js_lang['s_video_help'] = 'Videodatei einfügen: [video width=# height=#]file URL[/video]';
$js_lang['s_googlevideo_help'] = 'Google Video-Datei einfügen: [googlevideo]Google Video ID[/googlevideo]';
$js_lang['s_youtube_help'] = 'YouTube Datei einfügen: [youtube]YouTube ID[/youtube]';
$js_lang['s_quick_help'] = 'Quicktime Video-Datei einfügen: [quick]http://quicktime_video_url/[/quick]';
$js_lang['s_flash_help'] = 'Flash_Datei einfügen: [flash width=# height=#]flash URL[/flash]';
$js_lang['s_ram_help'] = 'Real Media Datei einfügen: [ram]File URL[/ram]';
$js_lang['s_stream_help'] = 'Streamdatei einfügen: [stream]File URL[/stream]';
$js_lang['s_emff_help'] = 'mp3 Datei einfügen: [emff]File URL[/emff]';
$js_lang['s_fade_help'] = 'Fade: [fade]Text[/fade] oder [fade][img]http://bild_url/[/img][/fade]';
$js_lang['s_spoiler_help'] = 'Spoiler: [spoiler]Text[/spoiler]';
$js_lang['s_cell_help'] = 'Zelle: [cell]Text[/cell]';
$js_lang['s_list_help'] = 'Sortierte Liste: [list|=1|a]Text[/list] (Verwende [*] um einen Listenpunkt einzufügen)';
$js_lang['s_listo_help'] = 'Nummerierte Liste: [list=1|a]Text[/list] (Tipp: Du kannst [*] verwenden, um einen Listenpunkt hinzuzufügen)';
$js_lang['s_help_help'] = 'BBCode Hilfe aufrufen';
$js_lang['s_image_upload_help'] = 'Bild zu PostImage.org hochladen und zur Nachricht hinzufügen';
$js_lang['s_posticyimage_help'] = 'Bild hochladen und zur Nachricht hinzufügen';
$js_lang['s_smiley_creator'] = 'Smiley Creator: [smiley=1]Text[/smiley] neuen Smiley mit Schild hinzufügen';

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