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
	'bbcb_mg_lang' => 'lang_spanish',

	'wrote' => 'escribió',
	'Quote' => 'Citar',
	'Code' => 'Código',
	'Hide' => 'Ocultar',
	'Show' => 'Mostrar',
	'Download' => 'Descargar',
	'Syntax' => 'Sintaxis',
	'Select' => 'Seleccionar',
	'ReviewPost' => 'Ver Mensaje',
	'OffTopic' => 'Off Topic',
	'OpenNewWindow' => 'Pulse para abrir la imagen en una nueva ventana',
	'C++' => 'C++',
	'PhpCode' => 'Php',

	'Close_Tags' => 'Cerrar etiquetas',
	'Styles_tip' => 'Nota: Se pueden aplicar rápidamente estilos al texto seleccionado.',

// Smiley Creator
	'bbcode_sc_help' => 'Creador de emoticonos: [schild=1]Texto[/schild] Crear un emoticono con su texto',
	'Smiley_creator' => 'Creador emoticonos',
	'SC_shieldtext' => 'Texto de emoticono',
	'SC_fontcolor' => 'Color del texto',
	'SC_shadowcolor' => 'Color de sombra',
	'SC_shieldshadow' => 'Proteger sombra',
	'SC_shieldshadow_on' => 'Activar',
	'SC_shieldshadow_off' => 'Desactivar',
	'SC_smiliechooser' => 'Seleccionar emoticono',
	'SC_random_smilie' => 'Emoticono aleatorio',
	'SC_default_smilie' => 'Emoticono estándar',
	'SC_create_smilie' => 'Crear',
	'SC_stop_creating' => 'Cancelar',
	'SC_error' => 'Aquí esta su protector - Se ha olvidado del texto...',
	'SC_another_shield' => '¿Desea crear otro emoticono?',
	'SC_notext_error' => 'No puede crear emoticonos sin texto',

	'bbcode_b_help' => 'Negrita: [b]texto[/b] (alt+b)',
	'bbcode_i_help' => 'Cursiva: [i]texto[/i] (alt+i)',
	'bbcode_u_help' => 'Subrayado: [u]texto[/u] (alt+u)',
	'bbcode_q_help' => 'Cita: [quote]texto[/quote] (alt+q)',
	'bbcode_c_help' => 'Código: [code]código[/code] (alt+c)',
	'bbcode_l_help' => 'Lista: [list]texto[/list] (alt+l)',
	'bbcode_o_help' => 'Lista ordenada: [list=]texto[/list] (alt+o)',
	'bbcode_p_help' => 'Insertar imagen: [img]http://image_url[/img] (alt+p)',
	'bbcode_w_help' => 'Insertar URL: [url]http://url[/url] or [url=http://url]URL text[/url] (alt+w)',
	'bbcode_a_help' => 'Cerrar todos los marcadores de BBCode abiertos',
	'bbcode_s_help' => 'Color: [color=red]texto[/color]  Nota: también puede usarse color=#FF0000',
	'bbcode_f_help' => 'Tamaño: [size=x-small]texto pequeño[/size]',

	'Font_color' => 'Color de texto',
	'color_default' => 'Predeterminado',
	'color_dark_red' => 'Rojo Oscuro',
	'color_red' => 'Rojo',
	'color_orange' => 'Naranja',
	'color_brown' => 'Marrón',
	'color_yellow' => 'Amarillo',
	'color_green' => 'Verde',
	'color_olive' => 'Oliva',
	'color_cyan' => 'Cyan',
	'color_blue' => 'Azul',
	'color_dark_blue' => 'Azul Oscuro',
	'color_indigo' => 'Indigo',
	'color_violet' => 'Violeta',
	'color_white' => 'Blanco',
	'color_black' => 'Negro',

	'color_cadet_blue' => 'Azul Cadete',
	'color_coral' => 'Coral',
	'color_crimson' => 'Carmesí',
	'color_dark_grey' => 'Gris Oscuro',
	'color_dark_orchid' => 'Orquidia Oscuro',
	'color_gold' => 'Oro',
	'color_gray' => 'Gris',
	'color_light_blue' => 'Azul Claro',
	'color_light_cyan' => 'Cyan Claro',
	'color_light_green' => 'Verde Claro',
	'color_light_grey' => 'Gris Claro',
	'color_light_orange' => 'Naranja Claro',
	'color_peach' => 'Melocotón',
	'color_power_orange' => 'Naranja Fuerte',
	'color_sea_green' => 'Verde Mar',
	'color_silver' => 'Plata',
	'color_tomato' => 'Tomate',
	'color_turquoise' => 'Turquesa',
	'color_chocolate' => 'Chocolate',
	'color_deepskyblue' => 'Azul profundo cielo',
	'color_midnightblue' => 'Azul medianoche',
	'color_darkgreen' => 'Verde oscuro',

	'Font_size' => 'Tamaño de texto',
	'font_tiny' => 'Diminuto',
	'font_small' => 'Pequeño',
	'font_medium' => 'Medio',
	'font_normal' => 'Normal',
	'font_large' => 'Grande',
	'font_huge' => 'Enorme',
	'font_xl' => 'XL',

// Font Type
	'Font_Type' => 'Fuente',
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
	'bbcb_mg_colorpicker' => 'Color Picker',
	'bbcb_mg_j' => 'Justificar',
	'bbcb_mg_r' => 'Derecha',
	'bbcb_mg_c' => 'Centro',
	'bbcb_mg_l' => 'Izquierda',
	'bbcb_mg_b' => 'Negrita',
	'bbcb_mg_i' => 'Cursiva',
	'bbcb_mg_u' => 'Subrayado',
	'bbcb_mg_s' => 'Tachado',
	'bbcb_mg_f' => 'Decolorar (Fade)',
	'bbcb_mg_g' => 'Multicolor',
	'bbcb_mg_tab' => 'Tabla',
	'bbcb_mg_td' => 'Cell',
	'bbcb_mg_md' => 'Marquee abajo',
	'bbcb_mg_mu' => 'Marquee arriba',
	'bbcb_mg_ml' => 'Marquee izquierda',
	'bbcb_mg_mr' => 'Marquee derecha',
	'bbcb_mg_code' => 'Código',
	'bbcb_mg_phpbbmod' => 'phpBB Mod Template',
	'bbcb_mg_quote' => 'Citar',
	'bbcb_mg_spoil' => 'Spoiler',
	'bbcb_mg_highlight' => 'Toque de luz (Highlight)',
	'bbcb_mg_url' => 'Url',
	'bbcb_mg_eml' => 'Correo',
	'bbcb_mg_img' => 'Imagen',
	'bbcb_mg_imgl' => 'Image Izquierda',
	'bbcb_mg_imgr' => 'Image Derecha',
	'bbcb_mg_imgba' => 'Imagen - Antes y Después',
	'bbcb_mg_albumimg' => 'Imagen del álbum',
	'bbcb_mg_flsh' => 'Flash',
	'bbcb_mg_vid' => 'Video',
	'bbcb_mg_gvid' => 'Google Video',
	'bbcb_mg_youtube' => 'YouTube',
	'bbcb_mg_vimeo' => 'Vimeo',
	'bbcb_mg_ram' => 'Ram',
	'bbcb_mg_strm' => 'Stream',
	'bbcb_mg_emff' => 'EMFF (MP3)',
	'bbcb_mg_lst' => 'Lista',
	'bbcb_mg_hr' => 'Línea Horizontal',
	'bbcb_mg_bullet' => 'Punto Bullet',
	'bbcb_mg_sup' => 'Superíndice',
	'bbcb_mg_sub' => 'Subíndice',
	'bbcb_mg_lsto' => 'Lista Ordenada',
	'bbcb_mg_fade' => 'Transparencia',
	'bbcb_mg_spoiler' => 'Spoiler',
	'bbcb_mg_cell' => 'Celda',
	'bbcb_mg_grad' => 'Multicolor',
	'bbcb_mg_upload_img' => 'Subir imagen a PostImage.org y añadir al mensaje',
	'bbcb_mg_posticyimage' => 'Subir imagen y añadirle un mensaje',
	'bbcb_mg_albumimgl' => 'Imagen del álbum a la izquierda',
	'bbcb_mg_albumimgr' => 'Imagen del álbum a la derecha',
	'bbcode_help' => 'Ayuda BBCode',

	'xs_bbc_hide_message' => 'Ocultar Mensaje',
	'xs_bbc_hide_quote_message' => 'Citar mensaje ocultado, si todavía está oculto.',
	'xs_bbc_hide_message_explain' => 'Perdone, pero debe estar registrado y también enviar una respuesta para ver este mensaje.',

	'bbcode_url' => 'Introduzca la URL (ej. http://www.icyphoenix.com)',
	'bbcode_url_title' => 'Introduzca el título del enlace',
	'bbcode_url_empty' => 'No ha introducido una URL!',
	'bbcode_url_errors' => 'Error!',
	)
);

// JavaScript Text - BEGIN
// Forms
$js_lang = array();

$js_lang['s_formerrors'] = 'Debe insertar algún texto para enviar un mensaje';
$js_lang['s_gen_error'] = ':: Error ::\n\n';
$js_lang['s_url_insert'] = 'Inserte la URL (ej. http://www.icyphoenix.com/)';
$js_lang['s_url_insert_tip'] = 'http://';
$js_lang['s_url_error'] = 'No ha introducido ninguna URL';
$js_lang['s_url_title_insert'] = 'Introduzca el título para el enlace';
$js_lang['s_url_title_insert_tip'] = 'Enlace';
$js_lang['s_url_title_error'] = 'No ha escrito el nombre de la página';
$js_lang['s_email_insert'] = 'Introduzca la dirección de correo';
$js_lang['s_email_insert_tip'] = 'sunombre@sudominio.com';
$js_lang['s_email_error'] = 'No ha escrito la dirección de correo';
$js_lang['s_img_insert'] = 'Introduzca la URL de la imagen';
$js_lang['s_img_error'] = 'No ha escrito la URL de la imagen';
$js_lang['s_albumimg_insert'] = 'Introduzca la ID de la imagen del álbum';
$js_lang['s_albumimg_insert_tip'] = 'ID';
$js_lang['s_albumimg_error'] = 'No ha escrito la ID de la imagen del álbum';
$js_lang['s_ram_insert'] = 'Por favor, introduzca la URL del archivo real media';
$js_lang['s_stream_insert'] = 'Por favor, escriba la URL del archivo de audio';
$js_lang['s_video_insert'] = 'Por favor, escriba la URL del archivo de vídeo';
$js_lang['s_video_w_insert'] = 'Por favor, especifique la anchura del archivo de vídeo';
$js_lang['s_video_w_error'] = 'No ha especificado la anchura del archivo de vídeo';
$js_lang['s_video_h_insert'] = 'Por favor, especifique la altura del archivo de vídeo';
$js_lang['s_video_h_error'] = 'No ha especificado la altura del archivo de vídeo';
$js_lang['s_googlevideo_insert'] = 'Por favor, escriba la ID del archivo de Google vídeo';
$js_lang['s_youtube_insert'] = 'Por favor, escriba la ID del archivo de YouTube';
$js_lang['s_vimeo_insert'] = 'Por favor escriba la id del archivo Vimeo';
$js_lang['s_emff_insert'] = 'Por favor, escriba la URL del archivo mp3';
$js_lang['s_flash_insert'] = 'Por favor, escriba la URL del archivo flash';
$js_lang['s_flash_w_insert'] = 'Por favor, especifique la anchura del archivo flash';
$js_lang['s_flash_w_error'] = 'No ha especificado la anchura del archivo flash';
$js_lang['s_flash_h_insert'] = 'Por favor, especifique la altura del archivo flash';
$js_lang['s_flash_h_error'] = 'No ha especificado la altura del archivo flash';
$js_lang['s_id_insert_tip'] = 'ID';
$js_lang['s_id_insert_error'] = 'No ha especificado ninguna ID';
$js_lang['s_file_insert_error'] = 'No ha especificado la URL del archivo';
$js_lang['s_grad_select'] = 'Por favor, seleccione primero el texto';
$js_lang['s_grad_error'] = 'Esta opción sólo trabaja con menos de 120 letras';
$js_lang['s_grad_path'] = 'includes/grad.htm';
$js_lang['s_view_more_code'] = 'Ver más código';
$js_lang['s_image_upload'] = 'Subir una imagen a PostImage.org y añadir al mensaje';
$js_lang['s_posticyimage'] = 'Subir una imagen y añadirla al mensaje';

// Helpline messages
$js_lang['s_a_help'] = 'Cerrar todas la etiquetas abiertas';
$js_lang['s_b_help'] = 'Texto en negrita: [b]texto[/b]';
$js_lang['s_i_help'] = 'Texto en cursiva: [i]texto[/i]';
$js_lang['s_u_help'] = 'Texto subrayado: [u]texto[/u]';
$js_lang['s_strike_help'] = 'Texto tachado: [strike]texto[/strike]';
$js_lang['s_quote_help'] = 'Citar texto: [quote]texto[/quote]';
$js_lang['s_code_help'] = 'Mostrar código: [code]código[/code]';
$js_lang['s_phpbbmod_help'] = 'phpBB Mod Template';
$js_lang['s_highlight_help'] = 'Toque de luz (Highlight): [highlight=#FFFFAA]texto[/highlight]';
$js_lang['s_img_help'] = 'Insertar imagen: [img]http://imagen_url[/img]';
$js_lang['s_imgl_help'] = 'Insertar imagen alineada a la izquierda: [img align=left]http://imagen_url[/img]';
$js_lang['s_imgr_help'] = 'Insertar imagen alineada a la derecha: [img align=right]http://imagen_url[/img]';
$js_lang['s_albumimg_help'] = 'Insertar imagen del álbum: [albumimg]ID imagen álbum[/albumimg]';
$js_lang['s_albumimgl_help'] = 'Insertar imagen desde el álbum alineada a la izquierda: [albumimg align=left]ID imagen del álbum[/albumimg]';
$js_lang['s_albumimgr_help'] = 'Insertar imagen desde el álbum alineada a la derecha: [albumimg align=right]ID imagen del álbum[/albumimg]';
$js_lang['s_url_help'] = 'Insertar URL: [url]http://url[/url] o [url=http://url]Texto URL[/url]';
$js_lang['s_fc_help'] = 'Color de fuente: [color=red]texto[/color] (Nota: puede usar color=#FF0000)';
$js_lang['s_fs_help'] = 'Tamaño de fuente: [size=9]small texto[/size]';
$js_lang['s_ft_help'] = 'Tipo de fuente: [font=Andalus]texto[/font]';
$js_lang['s_table_help'] = 'Insertar tabla: [table]texto[/table]';
$js_lang['s_td_help'] = 'Insertar columna de tabla: [td]texto[/td]';
$js_lang['s_mail_help'] = 'Insertar correo: [email]Correo aquí[/email]';
$js_lang['s_grad_help'] = 'Insertar texto gradient';
$js_lang['s_right_help'] = 'Fijar texto alineado a la derecha: [align=right]texto[/align]';
$js_lang['s_left_help'] = 'SFijar texto alineado a la izquierda: [align=left]texto[/align]';
$js_lang['s_center_help'] = 'Fijar texto alineado al centro: [align=center]texto[/align]';
$js_lang['s_justify_help'] = 'Justificar texto: [align=justify]texto[/align]';
$js_lang['s_marqr_help'] = 'Desplazar texto hacia la derecha: [marquee direction=right]texto[/marquee]';
$js_lang['s_marql_help'] = 'Desplazar texto hacia la izquierda: [marquee direction=left]texto[/marquee]';
$js_lang['s_marqu_help'] = 'Desplazar texto hacia arriba: [marquee direction=up]texto[/marquee]';
$js_lang['s_marqd_help'] = 'Desplazar texto hacia abajo: [marquee direction=down]texto[/marquee]';
$js_lang['s_sup_help'] = 'Superíndice: [sup]text[/sup]';
$js_lang['s_sub_help'] = 'Subíndice: [sub]text[/sub]';
$js_lang['s_hr_help'] = 'Insertar línea-H [hr]';
$js_lang['s_bullet_help'] = 'Insertar punto bullet [*]';
$js_lang['s_video_help'] = 'Insertar archivo de vídeo: [video width=# height=#]URL archivo[/video]';
$js_lang['s_googlevideo_help'] = 'Introduzca el archivo de Google vídeo: [googlevideo]ID Google vídeo[/googlevideo]';
$js_lang['s_youtube_help'] = 'Introduzca el archivo YouTube: [youtube]ID YouTube[/youtube]';
$js_lang['s_quick_help'] = 'QuickTime vídeo: [quick]http://quicktime_video_url/[/quick]';
$js_lang['s_flash_help'] = 'Insertar archivo flash: [flash width=# height=#]URL flash[/flash]';
$js_lang['s_ram_help'] = 'Insertar archivo real media: [ram]URL archivo[/ram]';
$js_lang['s_stream_help'] = 'Introduzca el archivo stream: [stream]URL archivo[/stream]';
$js_lang['s_emff_help'] = 'Introduzca el archivo mp3: [emff]URL archivo[/emff]';
$js_lang['s_fade_help'] = 'Descolorar (Fade): [opacity]texto[/opacity] o [opacity][img]http://image_url/[/img][/opacity]';
$js_lang['s_spoiler_help'] = 'Spoiler: [spoiler]texto[/spoiler]';
$js_lang['s_cell_help'] = 'Celda: [cell]texto[/cell]';
$js_lang['s_list_help'] = 'Lista ordenada: [list|=1|a]texto[/list] (Nota: puede usar [*] para insertar un punto)';
$js_lang['s_listo_help'] = 'Lista ordenada: [list=1|a]texto[/list] (Nota: puede usar [*] para insertar un punto)';
$js_lang['s_help_help'] = 'Abrir ayuda de BBCode';
$js_lang['s_image_upload_help'] = 'Subir imagen a PostImage.org y añadir al mensaje';
$js_lang['s_posticyimage_help'] = 'Subir imagen y añadirla al mensaje';
$js_lang['s_smiley_creator'] = 'Personalizar emoticono: [smiley=1]Texto[/smiley] insertar un emoticono con texto';

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