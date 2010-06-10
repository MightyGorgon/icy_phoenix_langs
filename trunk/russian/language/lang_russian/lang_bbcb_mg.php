<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/* translation
                           
   ���������� �� �������: ��������� �������(zver) zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
It is translated into Russian: Mel'nikov Nikolay(zver)   zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
                    
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
	'bbcb_mg_lang' => 'lang_english',

	'wrote' => '�������',
	'Quote' => '������',
	'Code' => '���',
	'Hide' => '������',
	'Show' => '��������',
	'Download' => '��������',
	'Syntax' => '���������',
	'Select' => '�����',
	'ReviewPost' => '�������� ���������',
	'OffTopic' => '��������',
	'OpenNewWindow' => '������� ����� ������� ����������� � ����� ����',
	'C++' => 'C++',
	'PhpCode' => 'Php',

	'Close_Tags' => '������� ����',
 'Styles_tip' => '�����: ����� ����� ���� ��������� ������ � ���������� ������.',

// Smiley Creator
	'bbcode_sc_help' => '��������� ��������: [schild=1] ����� [/schild] ������� �������  � ����� �������',
 'Smiley_creator' => '��������� ���������',
 'SC_shieldtext' => '����� ��������',
 'SC_fontcolor' => '��������� ����',
 'SC_shadowcolor' => '������� ����',
 'SC_shieldshadow' => '��������� ����',
 'SC_shieldshadow_on' => '������������',
 'SC_shieldshadow_off' => '�������������',
 'SC_smiliechooser' => '����� ��������',
 'SC_random_smilie' => '��������� ������� ',
 'SC_default_smilie' => '����������� �������',
 'SC_create_smilie' => '�������',
 'SC_stop_creating' => '������',
 'SC_error' => '��� �������� ��� ����� - �� ������ �����...',
 'SC_another_shield' => '�� ������ ������� ������ �������?',
 'SC_notext_error' => '�� �� ������ ������� ������� ��� ������',

	'bbcode_b_help' => '������ �����: [b]text[/b] (alt+b)',
	'bbcode_i_help' => '������: [i]text[/i] (alt+i)',
	'bbcode_u_help' => '������������: [u]text[/u] (alt+u)',
	'bbcode_q_help' => '������: [quote]text[/quote] (alt+q)',
	'bbcode_c_help' => '��� �������: [code]code[/code] (alt+c)',
	'bbcode_l_help' => '������: [list]text[/list] (alt+l)',
	'bbcode_o_help' => '������������ ������: [list=]text[/list] (alt+o)',
	'bbcode_p_help' => '�������� �����������: [img]http://image_url[/img] (alt+p)',
	'bbcode_w_help' => '�������� URL: [url]http://url[/url] or [url=http://url]URL text[/url] (alt+w)',
	'bbcode_a_help' => '������� ��� BBCode ����',
	'bbcode_s_help' => '���� ������: [color=red]text[/color] Tip: you can also use color=#FF0000',
	'bbcode_f_help' => '������ ������: [size=x-small]small text[/size]',

	'Font_color' => '���� ������',
 'color_default' => '�������� �� ���������',
 'color_dark_red' => '�����-�������',
 'color_red' => '�������',
 'color_orange' => '��������',
 'color_brown' => '�����',
 'color_yellow' => '������',
 'color_green' => '�������',
 'color_olive' => '�������',
 'color_cyan' => '�������',
 'color_blue' => '�����',
 'color_dark_blue' => '�����-�����',
 'color_indigo' => '������',
 'color_violet' => '������',
 'color_white' => '�����',
 'color_black' => '������',

	'color_cadet_blue' => '�����, �����',
 'color_coral' => '�������������� ���� ����������������',
 'color_crimson' => '�����-�������',
 'color_dark_grey' => '������ �����',
 'color_dark_orchid' => '������ �������',
 'color_gold' => '������',
 'color_gray' => '�������',
 'color_light_blue' => '������-�������',
 'color_light_cyan' => '�������� �������',
 'color_light_green' => '������-�������',
 'color_light_grey' => '�������� �����',
 'color_light_orange' => '������-���������',
 'color_peach' => '������',
 'color_power_orange' => '��������',
 'color_sea_green' => '����, �������',
 'color_silver' => '�������',
 'color_tomato' => '�������',
 'color_turquoise' => '���������',
 'color_chocolate' => '�������',
 'color_deepskyblue' => '�������� ����� ����',
 'color_midnightblue' => '�������, �����',
 'color_darkgreen' => '�������',

	'Font_size' => '������ ������',
 'font_tiny' => '���������',
 'font_small' => '���������',
 'font_medium' => '���������� �����',
 'font_normal' => '����������',
 'font_large' => '�������',
 'font_huge' => '��������',
 'font_xl' => 'XL',

// Font Type
	'Font_Type' => '�����',
 'Font_Arial' => 'Arial',
 'Font_Arial_black' => 'Arial, ������',
 'Font_Comic_sans_ms' => 'MS ������ �����',
 'Font_Courier_new' => '������, �����',
 'Font_Impact' => '�����������',
 'Font_Lucida_console' => '����� Lucida',
 'Font_Lucida_sans_unicode' => '������ ���� �������',
 'Font_Microsoft_sans_serif' => '����������� ����� Microsoft',
 'Font_Symbol' => '������',
 'Font_Tahoma' => 'Tahoma',
 'Font_Times_new_roman' => '������� ����� ��������',
 'Font_Traditional_arabic' => '������������ �������� ����',
 'Font_Trebuchet_ms' => 'MS Trebuchet',
 'Font_Verdana' => 'Verdana',
 'Font_Webdings' => 'Webdings',
 'Font_Wingdings' => 'Wingdings',

// Alt Buttons
	'bbcb_mg_colorpicker' => '������� ���������� ������',
 'bbcb_mg_j' => '�����������',
 'bbcb_mg_r' => '�����',
 'bbcb_mg_c' => '�����',
 'bbcb_mg_l' => '�����',
 'bbcb_mg_b' => '����������',
 'bbcb_mg_i' => '������',
 'bbcb_mg_u' => '�������������',
 'bbcb_mg_s' => '����',
 'bbcb_mg_f' => '����������� ���������',
 'bbcb_mg_g' => '��������',
 'bbcb_mg_tab' => '�������',
 'bbcb_mg_td' => '������',
 'bbcb_mg_md' => '����� ����',
 'bbcb_mg_mu' => '�����',
 'bbcb_mg_ml' => '�����, �����������',
 'bbcb_mg_mr' => '����� �����',
 'bbcb_mg_code' => '���',
 'bbcb_mg_phpbbmod' => 'phpBB ����������������� ������',
 'bbcb_mg_quote' => '������',
 'bbcb_mg_spoil' => '������',
 'bbcb_mg_highlight' => '���������',
 'bbcb_mg_url' => 'Url',
 'bbcb_mg_eml' => '����������� �����',
 'bbcb_mg_img' => '�����������',
 'bbcb_mg_imgl' => '�����������, �����������',
 'bbcb_mg_imgr' => '����� �����������',
 'bbcb_mg_albumimg' => '����������� �������',
 'bbcb_mg_flsh' => '�������������������',
 'bbcb_mg_vid' => '�����',
 'bbcb_mg_gvid' => '����� Google',
 'bbcb_mg_youtube' => 'YouTube',
 'bbcb_mg_ram' => '���',
 'bbcb_mg_strm' => '�����',
 'bbcb_mg_emff' => 'EMFF (MP3)',
 'bbcb_mg_lst' => '������',
 'bbcb_mg_hr' => '�������������� ������',
 'bbcb_mg_bullet' => '����� �������������� ������',
 'bbcb_mg_sup' => 'Sup',
 'bbcb_mg_sub' => 'Sub',
 'bbcb_mg_lsto' => '���������� ������',
 'bbcb_mg_fade' => '������������',
 'bbcb_mg_spoiler' => '������',
 'bbcb_mg_cell' => '������',
 'bbcb_mg_grad' => '��������',
 'bbcb_mg_upload_img' => '����������� �������� � PostImage.org � ��������� ��� � ���������',
 'bbcb_mg_posticyimage' => '����������� �������� � ��������� ��� � ���������',
 'bbcb_mg_albumimgl' => '����������� ����������� �������',
 'bbcb_mg_albumimgr' => '����� ����������� �������',
 'bbcode_help' => '������ BBCode',

 'xs_bbc_hide_message' => '������� ���������',
 'xs_bbc_hide_quote_message' => '������������ ������� ���������, ������� ��� ��� ������.',
 'xs_bbc_hide_message_explain' => '����, �� �� ������ ���� �������������� � ����� ��������� �����, ����� ����������� ��� ���������.',

 'bbcode_url' => '������� URL (�������� http://www.icyphoenix.ru)',
 'bbcode_url_title' => '��tlbnt ��������� ������',
 'bbcode_url_empty' => '�� didn \'t ����� url',
 'bbcode_url_errors' => '������!',
	)
);

// JavaScript Text - BEGIN
// Forms
$js_lang = array();

$js_lang ['s_formerrors'] = '�� ������ �������� �����-������ �����, ����� ��������� ���������';
$js_lang ['s_gen_error'] = ':: ������::\n\n';
$js_lang ['s_url_insert'] = '�������� URL (�������� http://www.icyphoenix.ru/)';
$js_lang ['s_url_insert_tip'] = 'http://';
$js_lang ['s_url_error'] = '�� didn \'t ����� ����� URL';
$js_lang ['s_url_title_insert'] = '������ ��������� ������';
$js_lang ['s_url_title_insert_tip'] = '������';
$js_lang ['s_url_title_error'] = '�� didn \'t �������� ��� ��������';
$js_lang ['s_email_insert'] = '������ �������� �����';
$js_lang ['s_email_insert_tip'] = 'yourname@yourdomain.com';
$js_lang ['s_email_error'] = '�� didn \'t ����� �������� �����';
$js_lang ['s_img_insert'] = '������ URL �����������';
$js_lang ['s_img_error'] = '�� didn \'t ����� URL �����������';
$js_lang ['s_albumimg_insert'] = '������ ������������� ����������� �������';
$js_lang ['s_albumimg_insert_tip'] = '�������������';
$js_lang ['s_albumimg_error'] = '�� didn \'t ����� ������������� ����������� �������';
$js_lang ['s_ram_insert'] = '���������� �������� �������� URL ����� ���������';
$js_lang ['s_stream_insert'] = '���������� �������� �������� URL �����';
$js_lang ['s_video_insert'] = '���������� �������� ����� URL �����';
$js_lang ['s_video_w_insert'] = '���������� ���������� ����� ������ �����';
$js_lang ['s_video_w_error'] = '�� didn \'t ���������� ����� ������ �����';
$js_lang ['s_video_h_insert'] = '���������� ���������� ����� ������ �����';
$js_lang ['s_video_h_error'] = '�� didn \'t ���������� ����� ������ �����';
$js_lang ['s_googlevideo_insert'] = '���������� �������� ������������� ����� ����� Google';
$js_lang ['s_youtube_insert'] = '���������� �������� ������������� ����� YouTube';
$js_lang ['s_emff_insert'] = '���������� �������� mp3 URL �����';
$js_lang ['s_flash_insert'] = '���������� �������� ������������������� URL �����';
$js_lang ['s_flash_w_insert'] = '���������� ���������� flash ������ �����';
$js_lang ['s_flash_w_error'] = '�� didn \'t ���������� flash ������ �����';
$js_lang ['s_flash_h_insert'] = '���������� ���������� flash ������ �����';
$js_lang ['s_flash_h_error'] = '�� didn \'t ���������� flash ������ �����';
$js_lang ['s_id_insert_tip'] = '�������������';
$js_lang ['s_id_insert_error'] = '�� didn \'t ���������� �������������';
$js_lang ['s_file_insert_error'] = '�� didn \'t ���������� URL �����';
$js_lang ['s_grad_select'] = '���������� �������� ����� �������';
$js_lang ['s_grad_error'] = '��� ������ �������� ��� ������ ��� 120 ��������';
$js_lang ['s_grad_path'] = 'includes/grad.htm';
$js_lang ['s_view_more_code'] = '������������� ������ ����';
$js_lang ['s_image_upload'] = '����������� �������� � PostImage.org � ��������� ��� � ���������';
$js_lang ['s_posticyimage'] = '����������� �������� � ��������� ��� � ���������';

// Helpline messages
$js_lang ['s_a_help'] = '������� ��� �������� ����';
$js_lang ['s_b_help'] = '����� Bold: [b] ����� [/b]';
$js_lang ['s_i_help'] = '����� Italic: [i] ����� [/i]';
$js_lang ['s_u_help'] = '����� Underline: [u] ����� [/u]';
$js_lang ['s_strike_help'] = '����� Strike: [Strike] ����� [/Strike]';
$js_lang ['s_quote_help'] = '����� ������: [Quote] ����� [/Quote]';
$js_lang ['s_code_help'] = '������� ����: [code] ��� [/code]';
$js_lang ['s_phpbbmod_help'] = 'phpBB ������������� ��������';
$js_lang ['s_highlight_help'] = '���������: [highlight = # FFFFAA] ����� [/highlight]';
$js_lang ['s_img_help'] = '����������� �������: [img] http://image_url [/img]';
$js_lang ['s_imgl_help'] = '����������� ������� � ������������� �� ������ ����: [img align=left] http://image_url [/img]';
$js_lang ['s_imgr_help'] = '����������� ������� � ������������� �� ������� ����: [img align=right] http://image_url [/img]';
$js_lang ['s_albumimg_help'] = '����������� ������� �� �������: [albumimg] ������������� ���. ������� [/albumimg]';
$js_lang ['s_albumimgl_help'] = '����������� ������� �� ������� � ������������� �� ������ ����: [albumimg align=left] ������������� ���. ������� [/albumimg]';
$js_lang ['s_albumimgr_help'] = '����������� ������� �� ������� � ������������� �� ������� ����: [albumimg align=right] ������������� ���. ������� [/albumimg]';
$js_lang ['s_url_help'] = 'URL �������: [URL] http://url [/URL] ��� [url=http://url] ����� URL [/URL]';
$js_lang ['s_fc_help'] = '���� ������: [color=red] ����� [/color] (�����: �� ������ ����� ������������ ���� = # FF0000)';
$js_lang ['s_fs_help'] = '������ ������: [size=9] ��������� ����� [/size]';
$js_lang ['s_ft_help'] = '��� ������: [font=Andalus] ����� [/font]';
$js_lang ['s_table_help'] = '������� �������: [table] ����� [/table]';
$js_lang ['s_td_help'] = '������� ������� �������: [td] ����� [/td]';
$js_lang ['s_mail_help'] = '����������� ����� �������: [email] ����������� ����� ����� [/email]';
$js_lang ['s_grad_help'] = '����� ��������� �������';
$js_lang ['s_right_help'] = '����� Set ������������� � �����: [align=right] ����� [/align]';
$js_lang ['s_left_help'] = '����� Set ������������� � ������: [align=left] ����� [/align]';
$js_lang ['s_center_help'] = '����� Set �������������, ����� ��������������: [align=center] ����� [/align]';
$js_lang ['s_justify_help'] = '����� Justify: [align=justify] ����� [/align]';
$js_lang ['s_marqr_help'] = '����� Marque � �����: [marquee direction=right] ����� [/marquee]';
$js_lang ['s_marql_help'] = '����� Marque � ������: [marquee direction=left] ����� [/marquee]';
$js_lang ['s_marqu_help'] = '����� Marque �: [marquee direction=up] ����� [/marquee]';
$js_lang ['s_marqd_help'] = '����� Marque � ����: [marquee direction=down] ����� [/marquee]';
$js_lang ['s_sup_help'] = '������� ������: [sup] ����� [/sup]';
$js_lang ['s_sub_help'] = '������ ������: [sub] ����� [/sub]';
$js_lang ['s_hr_help'] = 'H-������ ������� [���]';
$js_lang ['s_bullet_help'] = '����� �������������� ������ ������� [*]';
$js_lang ['s_video_help'] = '��������� ����� ����: [video ������ = # ������ = #] URL ����� [/video]';
$js_lang ['s_googlevideo_help'] = '��������� ���� ����� Google: [googlevideo] ������������� ����� Google [/googlevideo]';
$js_lang ['s_youtube_help'] = '��������� ����� ���� YouTube: [youtube] YouTube ������������� [/youtube]';
$js_lang ['s_quick_help'] = '����� Quicktime: [quick] http://quicktime_video_url/ [/quick]';
$js_lang ['s_flash_help'] = '��������� flash ����: [flash = # ������ = #] ������������������� URL [/flash]';
$js_lang ['s_ram_help'] = '��������� �������� ���� ���������: [ram] URL ����� [/ram]';
$js_lang ['s_stream_help'] = '��������� ��������� ����: [stream] URL ����� [/stream]';
$js_lang ['s_emff_help'] = '��������� mp3 ����: [emff] URL ����� [/emff]';
$js_lang ['s_fade_help'] = '����������� ���������: [opacity] ����� [/opacity] ��� [opacity] [img] http://image_url/ [/img] [/opacity]';
$js_lang ['s_spoiler_help'] = '������: [spoiler] ����� [/spoiler]';
$js_lang ['s_cell_help'] = '������: [cell] ����� [/cell]';
$js_lang ['s_list_help'] = '������: [list] ����� [/list] (�����: �� ������ ������������ [*], ����� �������� ������)';
$js_lang ['s_listo_help'] = '������ Ordered: [list=1|a] ����� [/list] (�����: �� ������ ������������ [*], ����� �������� ������)';
$js_lang ['s_help_help'] = '��������� ������ BBCode';
$js_lang ['s_image_upload_help'] = '����������� �������� � PostImage.org � ��������� ��� � ���������';
$js_lang ['s_posticyimage_help'] = '����������� �������� � ��������� ��� � ���������';
$js_lang ['s_smiley_creator'] = '��������� ���������: [smiley=1] ����� [/smiley] ��������� �������� � �������';

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