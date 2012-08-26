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
	'05_Server_Settings' => 'Servidor',
	'10_Site_Settings' => 'Configuraci&oacute;n del sitio',
	'15_Various_Settings' => 'Configuraci&oacute;n varia',
	'20_SQL_Charge' => 'Optimizaci&oacute;n SQL',
	'25_Users' => 'Usuarios',
	'30_Posting' => 'Escribiendo y mensajes',
	'40_IMG_Posting' => 'Im&aacute;genes en mensajes',
	'50_Hierarchy_setting' => 'Foro',
	'60_Calendar_settings' => 'Calendario',
	'70_SEO' => 'SEO',
	'80_Security' => 'Logs y seguridad',
	'90_Cron' => 'Cron',
	)
);

// admin part
if ($lang_extend_admin)
{
	$lang = array_merge($lang, array(
		'Lang_extend_icy_phoenix' => 'Icy Phoenix',
// TAB - SERVER
		'SITE_META_KEYWORDS' => 'Meta Claves',
		'SITE_META_KEYWORDS_SWITCH' => 'Habilitar Claves Meta desde DB',
		'SITE_META_KEYWORDS_SWITCH_EXPLAIN' => 'Si habilita los Claves Meta desde DB, entonces se usaran los Meta especificados arriba en paginas HTML, en vez de los especificados en <i>lang_main_settings.php</i>.',
		'SITE_META_DESCRIPTION' => 'Meta Descripc&iacute;on',
		'SITE_META_DESCRIPTION_SWITCH' => 'Habilitar descripc&iacute;on desde DB',
		'SITE_META_DESCRIPTION_SWITCH_EXPLAIN' => 'Si habilita los Claves Meta desde db, entonces se usaran los Descripc&iacute;ones especificados arriba en paginas HTML, en vez de los especificados en <i>lang_main_settings.php</i>.',
		'SITE_META_AUTHOR' => 'Meta Autor',
		'SITE_META_AUTHOR_SWITCH' => 'Habilitar Autor Meta desde DB',
		'SITE_META_AUTHOR_SWITCH_EXPLAIN' => 'Si habilita los Autores desde db, entonces se usaran los Autores especificados arriba en paginas HTML, en vez de los especificados en <i>lang_main_settings.php</i>.',
		'SITE_META_COPYRIGHT' => 'Meta Copyright',
		'SITE_META_COPYRIGHT_SWITCH' => 'Habilitar el Meta Copyright desde DB',
		'SITE_META_COPYRIGHT_SWITCH_EXPLAIN' => 'Si habilita el Meta Copyright desde db, entonces se usaran los Meta Copyrights especificados arriba en paginas HTML, en vez de los especificados en <i>lang_main_settings.php</i>.',

// TAB - SITE
		'IP_mobile_style_disable' => 'Deshabilitar la detecc&iacute;on de Moviles',
		'IP_mobile_style_disable_explain' => 'Normalmente, cuando un Movil conecta al sitio, el estilo <b>Movil</b> es automaticamente habilitado (cualquier Usuario puede deshabilitarlo manualmente). Si quiere deshabilitar la detecc&iacute;on automatica, solo selecione esta opcion.',

// TAB - Icy Phoenix
		'IP_enable_xs_version_check' => 'Activar comprobaci&oacute;n de versi&oacute;n Icy Phoenix',
		'IP_enable_xs_version_check_explain' => 'Activando esta opci&oacute;n cada vez que acceda a la ACP se comprobar&aacute; si posee la &uacute;ltima versi&oacute;n disponible de Icy Phoenix para descargar. Desactivando esta opci&oacute;n puede accelerar un poco la carga de la ACP. No obstante, la comprobaci&oacute;n se har&aacute; una vez al d&iacute;a y luego permanecer&aacute; en el cache.',

		'IP_disable_email_error' => 'Deshabilitar errores al enviar correos',

		'IP_html_email' => 'Correo HTML',
		'IP_html_email_explain' => 'Activando esta opci&oacute;n podr&aacute; utilizar el formato HTML, de lo contrario, ser&aacute; texto simple plano.',

		
		'IP_emails_only_to_admins' => 'Correos solo para administradores',
		'IP_emails_only_to_admins_explain' => 'Permite enviar utilizar el sistema de env&iacute;o de correos solo para administradores',

		'IP_ajax_features' => 'Habilitar caracter&iacute;sticas ajax',
		'IP_ajax_features_explain' => 'Algunas caracter&iacute;sticas ajax ser&aacute;n integradas en su foro',

		'IP_ajax_checks_register' => 'Comprobaci&oacute;n ajax en el registro',
		'IP_ajax_checks_register_explain' => 'Activando esta opci&oacute;n, se revisar&aacute; en tiempo real que los campos del formulario de registro se completen de forma correcta (atenci&oacute;n: esta opci&oacute;n puede ralentizar la p&aacute;gina de registro).',

		'IP_inactive_users_memberlists' => 'Ver usuarios inactivos en la lista de usuarios y el bloque de cumplea&ntilde;os',
		'IP_inactive_users_memberlists_explain' => 'Activando esta opci&oacute;n los usuarios inactivos se ver&aacute;n en la lista de usuarios y el bloque de cumplea&ntilde;os.',

		'IP_page_gen' => 'Mostrar tiempo de generaci&oacute;n de la p&aacute;gina en el inferior',

		'IP_switch_header_dropdown' => 'Activar men&uacute; desplegable en la cabecera',
		'IP_switch_header_dropdown_explain' => 'Esto activar&aacute; un men&uacute; desplegable en la cabecera del foro para la b&uacute;squeda y los mensajes',

		'IP_show_alpha_bar' => 'Mostrar barra de orden alfab&eacute;tico en la vista de foros (Configuraci&oacute;n global)',
		'IP_show_alpha_bar_explain' => 'Esta caracter&iacute;stica mostrar&aacute; una barra de orden alfab&eacute;tico de los t&iacute;tulos de los temas al inicio de la p&aacute;gina de vista de foros. Necesitar&aacute;s tambi&eacute;n activar esto en cada foro en particular, en la secci&oacute;n de administraci&oacute;n de foros.',

		'IP_show_rss_forum_icon' => 'Iconos del &iacute;ndice del foro',
		'IP_show_rss_forum_icon_explain' => 'Esta opci&oacute;n mostrar&aacute; iconos a la derecha de cada t&iacute;tulo de foro (en el &iacute;ndice del foro): RSS, tema nuevo...',

		'IP_allow_mods_view_self' => 'Permitir a TODOS los moderadores ver temas con AUTORIZACI&Oacute;N LIBRE',
		'IP_allow_mods_view_self_explain' => 'Si un foro se ha establecido con AUTORIZACI&Oacute;N LIBRE de acceso s&oacute;lo a los administradores y moderadores del foro, pueden acceder a estos temas a trav&eacute;s de viewforum y viewtopic. Sin embargo, hay muchas caracter&iacute;sticas que pueden mostrar el contenido de este tipo de puestos, aunque no est&eacute;n autorizados: temas recientes, buscar, bloques de mensajes recientes, bloques de temas aleatorios, etc. Para evitar esto, se ha codificado una caracter&iacute;stica, que no permite el acceso a la gente a estos temas a trav&eacute;s de v&iacute;as secundarias. De cualquier modo se puede permitir que TODOS los moderadores (no s&oacute;lo los administradores) puedan ver estos mensajes a trav&eacute;s de estas v&iacute;as secundarias. Si lo establece como SI, a TODOS los moderadores se les permitir&aacute; ver el contenido de estos mensajes a trav&eacute;s de: recientes, buscar, temas relacionados con los bloques... Lamentablemente si lo establece en OFF, ni los moderadores AUTORIZADOS podr&aacute;n tener AUTORIZACI&Oacute;N LIBRE a estos temas a trav&eacute;s de formas secundarias. La caracter&iacute;stica se ha codificado de esta manera para guardar la carga extra de SQL. Si no utiliza foros con AUTORIZACI&Oacute;N LIBRE, no necesitara esta funci&oacute;n.',

		'IP_xmas_fx' => 'Nieve navide&ntilde;a',
		'IP_xmas_fx_explain' => 'Esta opci&oacute;n habilitar&aacute; los efectos de nieve (por favor tenga en cuenta que s&oacute;lo algunos estilos soportan esta caracter&iacute;stica).',

		'IP_xmas_gfx' => 'Im&aacute;genes navide&ntilde;as',
		'IP_xmas_gfx_explain' => 'Esta opci&oacute;n aplicar&aacute; im&aacute;genes de navidad al foro.',

		'IP_select_theme' => 'Cambiar estilo',
		'IP_select_theme_explain' => 'Habilitando esta opci&oacute;n, se a&ntilde;adir&aacute; una caja de selecci&oacute;n con todos los estilos disponibles para un r&aacute;pido cambio de estilo.',

		'IP_select_lang' => 'Cambiar idioma',
		'IP_select_lang_explain' => 'Habilitando esta opci&oacute;n, se a&ntilde;adir&aacute; un enlace con todos los idiomas disponibles para un r&aacute;pido cambio de idioma.',

		'IP_cms_dock' => 'Mostrar barra al estilo de Apple en el CMS',

		'IP_cms_style' => 'Activar AJAX en el CMS',
		'IP_cms_style_explain' => 'Al activar esta opci&oacute;n se activar&aacute;n las funciones AJAX por defecto',

		'IP_split_ga_ann_sticky' => 'Separar temas por tipo',
		'IP_split_ga_ann_sticky_explain' => 'Desde aqu&iacute; puede seleccionar como desea separar los tipos de temas dentro de un foro',
		'IP_split_topic_0' => '<b>Todos los tipos de temas (sin separar)</b>',
		'IP_split_topic_1' => '<b>Los anuncios globales, anuncios y notas estar&aacute;n juntos, y los temas normales separados</b>',
		'IP_split_topic_2' => '<b>Los anuncios globales estar&aacute;n separados, los anuncios y notas estar&aacute;n juntos, y los temas normales separados</b>',
		'IP_split_topic_3' => '<b>Todos los tipos de temas separados</b>',

// TAB - SQL Charge
		'IP_fast_n_furious' => 'R&aacute;pido y furioso',
		'IP_fast_n_furious_explain' => 'Habilitando esta opci&oacute;n algunas funciones SQL pesadas ser&aacute;n desactivadas. Esperamos que su web vaya mucho mas r&aacute;pido!',

		'IP_db_cron' => 'Optimizar base de datos',
		'IP_db_cron_explain' => 'Habilitando esta opci&oacute;n se activar&aacute; la optimizaci&oacute;n de la base de datos',

		'IP_site_history' => 'Estad&iacute;sticas del sitio',
		'IP_site_history_explain' => 'Habilitando esta opci&oacute;n se activar&aacute; las estad&iacute;sticas del sitio',

        'IP_active_sessions' => 'Limite en numeros de sessiones activas',
		'IP_active_sessions_explain' => '<b>Tenga quidado</b> con este valor: este numero es el numero maximo de sessiones permitidas, si se alcanza el limite, la pagina no sera accessible. Si no sabe, como configurar este Limite, dejalo en 0 (CERO).',

		'IP_global_disable_upi2db' => 'Desactivar UPI2DB globalmente',
		'IP_global_disable_upi2db_explain' => 'Esta opci&oacute;n te permite desactivar UPI2DB globalmente para ahorrar memoria extra.',

		'IP_enable_own_icons' => '&iacute;conos de mensajes propios',
		'IP_enable_own_icons_explain' => 'Habilitando esta opci&oacute;n, los &iacute;conos de temas que contengan mensajes propios ser&aacute;n marcados.',

		'IP_show_forums_online_users' => 'Mostrar usuarios en l&iacute;nea en Foros',
		'IP_show_forums_online_users_explain' => 'Esta caracter&iacute;stica activa el contador de usuarios en l&iacute;nea para cada foro en el &iacute;ndice.',

		'IP_google_bot_detector' => 'Habilitar detector de robots de Google',

		'IP_gsearch_guests' => 'Forzar la b&uacute;squeda de Google para invitados',

		'IP_visit_counter_switch' => 'Habilitar contador de visitas',

		'IP_enable_new_messages_number' => 'Mostrar n&uacute;mero de nuevos mensajes desde la &uacute;ltima visita',

		'IP_disable_thanks_topics' => 'Deshabilitar bot&oacute;n de gracias viendo temas (Interruptor Global)',

		'IP_show_thanks_profile' => 'Mostrar las Gracias recibidas al ver perfil',

		'IP_show_thanks_viewtopic' => 'Mostrar las Gracias recibidas al leer temas',

		'IP_disable_likes_posts' => 'Desactivar &quot;Me gusta&quot; para mensajes (Interruptor Global)',
		'IP_disable_likes_posts_explain' => 'Esta opci&oacute;n te permite desactivar globalmente la opci&oacute;n &quot;Me gusta&quot;',

		'IP_disable_topic_view' => 'Deshabilitar "Qui&eacute;n ha le&iacute;do este tema" (Interruptor Global)',
		'IP_disable_topic_view_explain' => 'Esta opci&oacute;n permite deshabilitar la caracter&iacute;stica "Qui&eacute;n ha le&iacute;do este tema" (esto ahorrar&aacute; espacio SQL).',

		'IP_disable_referers' => 'Deshabilitar referidos',
		'IP_disable_referers_explain' => 'Esta opci&oacute;n permite deshabilitar la caracter&iacute;stica de referidos (esto ahorrar&aacute; espacio SQL).',

		'IP_disable_logins' => 'Desactivar la grabaci&oacute;n de identificaciones',
		'IP_disable_logins_explain' => 'Habilitando esta opci&oacute;n, las identificaciones del usuario no se guardar&aacute;n m&aacute;s',

		'IP_last_logins_n' => 'N&uacute;mero de identificaciones que se guardar&aacute;n',

		'IP_index_top_posters' => 'Los que mas escriben :: &Iacute;ndice de foros',
		'IP_index_top_posters_explain' => 'Habilitando esta opci&oacute;n se mostrar&aacute;n los que mas escriben en el <b>&Iacute;ndice de foros</b>.',

		'IP_index_last_msgs' => '&Uacute;ltimos mensajes :: &Iacute;ndice de foros',
		'IP_index_last_msgs_explain' => 'Habilitando esta opci&oacute;n se mostrar&aacute;n los &uacute;ltimos mensajes en el <b>&Iacute;ndice de foros</b>.',

		'IP_online_last_msgs' => '&Uacute;ltimos mensajes :: Qui&eacute;n est&aacute; en conectado',
		'IP_online_last_msgs_explain' => 'Habilitando esta opci&oacute;n se mostrar&aacute;n los &uacute;ltimos mensajes en <b>Qui&eacute;n est&aacute; conectado</b>.',

		'IP_last_msgs_n' => 'N&uacute;mero de &uacute;ltimos mensajes a mostrar.',

		'IP_last_msgs_x' => 'Excluir foros',
		'IP_last_msgs_x_explain' => 'Por favor, introduzca los IDs de los foros que desea excluir de los marcos de &uacute;ltimos mensajes (debe separar cada ID por comas).',

		'IP_show_chat_online' => 'Conectados en el chat ajax :: &Iacute;ndice de foros',
		'IP_show_chat_online_explain' => 'Habilitando esta opci&oacute;n se mostrar&aacute; en el <b>&Iacute;ndice de foros</b> los usuarios conectados en el chat ajax.',

		'IP_index_shoutbox' => 'Cuadro de charla :: &Iacute;ndice de foros',
		'IP_index_shoutbox_explain' => 'Habilitando esta opci&oacute;n activar&aacute; un cuadro de charla en el <b>&Iacute;ndice de foros</b>.',

		'IP_online_shoutbox' => 'Cuadro de charla :: Qui&eacute;n est&aacute; conectado',
		'IP_online_shoutbox_explain' => 'Habilitando esta opci&oacute;n activar&aacute; el cuadro de charla en <b>Qui&eacute;n est&aacute; conectado</b>.',

		'IP_img_shoutbox' => 'Deshabilitar BBCode [img][/img] en el cuadro de charla',
		'IP_img_shoutbox_explain' => 'Habilitando esta opci&oacute;n se desactivar&aacute; el BBCode [img][/img] en el cuadro de charla.',

		'IP_index_links' => 'Enlaces :: &Iacute;ndice de foros',
		'IP_index_links_explain' => 'Habilitando esta opci&oacute;n se mostrar&aacute;n los enlaces en el <b>&Iacute;ndice de foros</b>.',

		'IP_index_birthday' => 'Cumplea&ntilde;os :: &Iacute;ndice de foros',
		'IP_index_birthday_explain' => 'Habilitando esta opci&oacute;n se mostrar&aacute;n los cumplea&ntilde;os en el <b>&Iacute;ndice de foros</b>.',

		'IP_show_random_quote' => 'Citas aleatorias :: &Iacute;ndice de foros',
		'IP_show_random_quote_explain' => 'Habilitando esta opci&oacute;n se mostrar&aacute;n citas aleatorias en el <b>&Iacute;ndice de foros</b>',

// Spam Section
		'IP_spam_measures_header' => 'Proteccion SPAM',

		'IP_spam_posts_number' => 'SPAM - Numero minimo de POsts, para evadir la Proteccion SPAM',
		'IP_spam_posts_number_explain' => 'Hasta que un Usuario llege al Limite de POsts fijado, la Proteccion SPAM se mantendra activa (los que tienen el prefijo SPAM debajo de esta linea)',
		'IP_spam_p_0' => 'Deshabilitado',
		'IP_spam_p_3' => '3',
		'IP_spam_p_5' => '5',
		'IP_spam_p_10' => '10',
		'IP_spam_p_20' => '20',

		'IP_spam_disable_url' => 'SPAM - Deshabilitar URL en posts',
		'IP_spam_disable_url_explain' => 'Esta Funcion removera todos los links en Posts, y los reemplazara con H**P, se mantendra activa, hasta alcanzar el numero de posts especificado arriba. Administradores veran los Posts de todos modos.',

		'IP_spam_hide_signature' => 'SPAM - Deshabilitar la firma y Sitio Web en Posts',
		'IP_spam_hide_signature_explain' => 'Esta funcion mantendra la Firma y la Pagina Web Personal oculta para todos los Usuarios, que no han alcanzado el limite fijado. Administradores veran la firma de todos modos.',

		'IP_spam_post_edit_interval' => 'SPAM - Deshabilitar la Edicion de Posts',
		'IP_spam_post_edit_interval_explain' => 'Habilitando esta funcion, todos los Usuarios, que no han alcanzado el limite de Posts fijado, NO podran editar sus Posts despues del tiempo fijado',
		'IP_time_15m' => '15 Minutos',
		'IP_time_30m' => '30 Minutos',
		'IP_time_1h' => '1 Hora',
		'IP_time_2h' => '2 Horas',
		'IP_time_6h' => '6 Horas',
		'IP_time_12h' => '12 Horas',
		'IP_time_24h' => '24 Horas',

// TAB - Posting
		'IP_posts_precompiled' => 'Deshabilitar mensajes precompilados',
		'IP_posts_precompiled_explain' => 'Habilitando esta opci&oacute;n en la vista de temas, siempre se compilar&aacute;n los mensajes de texto, sin utilizar los mensajes de texto precompilados (	esto es m&aacute;s lento, pero puede ser &uacute;til en algunos casos).',

		'IP_read_only_forum' => 'Deshabilitar env&iacute;o de mensajes en todos los foros (solo lectura)',
		'IP_read_only_forum_explain' => 'Permite bloquear el envi&oacute; de mensajes en todos los foros sin cambiar sus permisos. Es &uacute;til para periodos de tiempo limitados y que el administrador no tenga que cerrar el foro para modificar los permisos. Los administradores si podr&aacute;n enviar mensajes.',

		'IP_allow_drafts' => 'Permitir borradores',
		'IP_allow_drafts_explain' => 'Permite a los usuarios guardar sus mensajes como borradores',

		'IP_allow_mods_edit_admin_posts' => 'Permitir a los moderadores editar los mensajes de administradores',
		'IP_allow_mods_edit_admin_posts_explain' => 'Permite a los moderadores editar los mensajes de los administradores',

		'IP_forum_limit_edit_time_interval' => 'Limitar intervalo de tiempo para edici&oacute;n (Minutos)',
		'IP_forum_limit_edit_time_interval_explain' => 'Esto establece el intervalo de tiempo en el que los usuarios podr&aacute;n editrar sus mensajes. Escriba cero para que no haya l&iacute;mite (la funci&oacute;n debe ser activada en cada foro en la Administraci&oacute;n de Foro)',

		'IP_force_large_caps_mods' => 'Asunto apropiado para los temas',
		'IP_force_large_caps_mods_explain' => 'Los asuntos de los temas ser&aacute;n convertidos por un asunto correcto (o apropiado) para todos los usuarios, menos los administradores',

		'IP_show_new_reply_posting' => 'Avisos para nuevas respuestas',
		'IP_show_new_reply_posting_explain' => 'Si habilita esto, se mostrar&aacute; un aviso cuando hay una nueva respuesta mientras est&aacute; contestando un tema',

		'IP_no_bump' => 'Prohibir bumping (doble posteo) dentro de 24 horas',
		'IP_no_bump_explain' => 'Habilitando esta opci&oacute;n, el &uacute;ltimo usuario en escribir en un tema, no podr&aacute; escribir dentro de 24 horas desde su &uacute;ltimo mensaje, hasta que otro usuario deje una respuesta (no se aplica a los admins)',
		'MODS_ALLOWED' => 'Moderadores pueden escribir',

        'IP_robots_index_topics_no_replies' => 'Habilitar indexac&iacute;on de topicos sin respuesta para Robots, de otro modo, topicos sin respuestas, no seran idexados',
		'IP_robots_index_topics_no_replies_explain' => 'Habilitando la indexac&iacute;on de topicos sin respuesta para Robots, de otro modo, topicos sin respuestas, no seran idexados',

		'IP_display_tags_box' => 'Etiquetas :: Mostrar Etiquetas de Temas',
		'IP_display_tags_box_explain' => 'Activando esta opci&oacute;n se activar&aacute;n las etiquetas de los temas (las etiquetas podr&iacute;an ser usadas para indexaci&oacute;n): las etiquetas pueden ser introducidas o editadas s&oacute;lo por administradores (o moderadores si activa la siguiente opci&oacute;n) para evitar spam',

		'IP_allow_moderators_edit_tags' => 'Etiquetas :: Permitir a los moderadores editar etiquetas',
		'IP_allow_moderators_edit_tags_explain' => 'Activando esta opci&oacute;n los moderadores podr&aacute;n editar las etiquetas de los temas',

		'IP_show_topic_description' => 'Habilitar Descripci&oacute;n de temas',
		'IP_show_topic_description_explain' => 'Habilitando esta opci&oacute;n se activar&aacute; la Descripci&oacute;n del tema, mientras se postea y se navega en los foros',

		'IP_edit_notes' => 'Habilitar notas de edici&oacute;n',
		'IP_edit_notes_explain' => 'Habilitando esta opci&oacute;n se activar&aacute;n las notas de edici&oacute;n',

		'IP_edit_notes_n' => 'Notas de edici&oacute;n m&aacute;ximas',

		'IP_always_show_edit_by' => 'Mostrar siempre avisos de edici&oacute;n',
		'IP_always_show_edit_by_explain' => 'Si habilita esta opci&oacute;n se mostrar&aacute; siempre "&Uacute;ltima edici&oacute;n por..." en la parte inferior de cada mensaje cuando se edite. Con las ediciones de los administradores no se mostrar&aacute;',

		'IP_show_social_bookmarks' => 'Marcadores sociales',
		'IP_show_social_bookmarks_explain' => 'Mostrar secci&oacute;n de marcadores sociales cuando se miran temas',

		'IP_link_this_topic' => 'Enlazar este tema',
		'IP_link_this_topic_explain' => 'Muestra el bloque de "Enlazar este tema" cuando se leen temas',

		'IP_smilies_topic_title' => 'Emoticonos para t&iacute;tulos de temas y descripciones',
		'IP_smilies_topic_title_explain' => 'Habilitando esta opci&oacute;n se permitir&aacute; poner emoticonos en los t&iacute;tulos de temas y descripciones de temas',

		'IP_enable_colorpicker' => 'Habilitar selector de color en la p&aacute;gina de escribir mensajes',

		'IP_quote_iterations' => 'N&uacute;mero m&aacute;ximo de citas anidadas',

		'IP_ftr_disable' => 'Deshabilitar la lectura obligada de tema',
		'IP_ftr_disable_explain' => 'Habilitando esta opci&oacute;n se desactivar&aacute; completamente la lectura obligada de tema',

		'IP_disable_html_guests' => 'Deshabilitar enlaces HTLM para invitados',

		'IP_birthday_viewtopic' => 'Mostrar edad de los usuarios en los temas',

		'IP_switch_poster_info_topic' => 'Mostrar informaci&oacute;n de los usuarios en los temas (lenguaje, estilo, etc.)',

		'IP_enable_quick_quote' => 'Habilitar cita r&aacute;pida',
		'IP_enable_quick_quote_explain' => 'La cita r&aacute;pida permite a los usuarios citar cualquier mensaje en un tema con un simple clic. Esta caracter&iacute;stica utiliza JavaScript.',

		'IP_allow_html_only_for_admins' => 'Activar HTML s&oacute;lo para administradores',
		'IP_allow_html_only_for_admins_explain' => 'Activando esta opci&oacute;n los administradores podr&aacute;n usar HTML en etiquetas y mensaje. Por favor tenga en cuenta que esta funcionalidad puede dar problemas de seguridad o fallos en el dise&ntilde;o si se usa de manera incorrrecta.',

		'IP_enable_custom_bbcodes' => 'Activar BBCodes Personalizados',
		'IP_enable_custom_bbcodes_explain' => 'Esta opci&oacute;n activar&aacute; BBCodes creados a trav&eacute;s del ACP.',

		'IP_allow_all_bbcode' => 'Habilitar todos los BBCodes',
		'IP_allow_all_bbcode_explain' => 'Habilitando esta opci&oacute;n todos los BBCodes ser&aacute;n activados en las firmas y otros sitios donde normalmente no est&aacute;n activados. Los BBCodes que por lo general son desactivados en la firma son IMG, ALBUMIMG y algunos mas que consumen recursos excesivos. Si habilita esta opci&oacute;n, algunas firmas pueden ocupar mucho espacio y consumir bastantes recursos del servidor.',

		'IP_switch_bbcb_active_content' => 'Permitir BBCode para contenidos activos en los mensajes',
		'IP_switch_bbcb_active_content_explain' => 'Activar&aacute; BBCodes para flash, v&iacute;deo, audio streams, real media y quicktime.',

// TAB - Images In Posts
		'IP_auth_view_pic_upload' => 'Permisos de subida de im&aacute;genes (Im&aacute;genes Icy)',

		'IP_enable_postimage_org' => 'Habilitar bot&oacute;n subir im&aacute;genes en el formulario de mensajes',

		'IP_gd_version' => 'Versi&oacute;n GD:',
		'GD_0' => 'No GD',
		'GD_1' => 'GD1',
		'GD_2' => 'GD2',

		'IP_show_img_no_gd' => 'Mostrar miniaturas GIF sin usar las librerias GD (las im&aacute;genes grandes se cargan y luego se mostrar&aacute; el tama&ntilde;o).',

		'IP_thumbnail_posts' => 'Miniaturas en mensajes',
		'IP_thumbnail_posts_explain' => 'Con esta opci&oacute;n las miniaturas se mostrar&aacute;n en lugar de las im&aacute;genes completas cuando una imagen es publicada utilizando el BBCode IMG',

		'IP_show_pic_size_on_thumb' => 'Mostrar el tama&ntilde;o de la imagen de la miniatura',

		'IP_thumbnail_highslide' => 'Utilizar HighSlide si las miniaturas de las  est&aacute;n activadas',
		'IP_thumbnail_highslide_explain' => 'Abre la imagen delante de la p&aacute;gina actual en lugar de abrirlo en una nueva ventana. Mas acerca de <a href="http://www.highslide.com/" target="_blank">HighSlide JS...</a><br />Aseg&uacute;rese de vaciar los mensajes precompilados despu&eacute;s de cambiar esta opci&oacute;n!',

		'IP_thumbnail_cache' => 'Cach&eacute; de miniaturas',

		'IP_thumbnail_quality' => 'Calidad de miniaturas (1-100)',

		'IP_thumbnail_size' => 'Tama&ntilde;o de miniaturas (en p&iacute;xels)',

// TAB - Forum
		'Lang_extend_categories_hierarchy' => 'Jerarqu&iacute;a de categor&iacute;as',

		'Category_attachment' => 'Adjunto a',
		'Category_desc' => 'Descripci&oacute;n',
		'Category_config_error_fixed' => 'Se ha reparado un error en la configuraci&oacute;n de categor&iacute;as',
		'Attach_forum_wrong' => 'No puede adjuntar un foro a otro foro',
		'Attach_root_wrong' => 'No puede adjuntar un foro a la p&aacute;gina principal de un foro',
		'Forum_name_missing' => 'No puede crear un foro sin nombre',
		'Category_name_missing' => 'No puede crear una categor&iacute;a sin nombre',
		'Only_forum_for_topics' => 'Los temas s&oacute;lo pueden estar ubicados en foros',
		'Delete_forum_with_attachment_denied' => 'No puede borrar foros que contengan sub-niveles',

		'Category_delete' => 'Borrar categor&iacute;a',
		'Category_delete_explain' => 'El siguiente formulario le permitir&aacute; borrar una categor&iacute;a y decidir d&oacute;nde quiere ubicar los foros y categorias que contenga.',

// forum links type
		'Forum_link_url' => 'Enlace URL',
		'Forum_link_url_explain' => 'Aqu&iacute; puede establecer un enlace a un programa phpBB o a un servidor externo',
		'Forum_link_internal' => 'Programa phpBB',
		'Forum_link_internal_explain' => 'Elija "s&iacute;" si desea invocar un programa que se encuentre dentro de los directorios phpBB',
		'Forum_link_hit_count' => 'Contador de clicks',
		'Forum_link_hit_count_explain' => 'Elija "s&iacute;" si desea que el foro muestre y cuente el n&uacute;mero de clics de este enlace',
		'Forum_link_with_attachment_deny' => 'No puede establecer un foro como un enlace si ya tiene sub niveles',
		'Forum_link_with_topics_deny' => 'No puede establecer un foro como un enlace si ya hay temas en &eacute;l',
		'Forum_attached_to_link_denied' => 'No puede adjuntar un foro o categor&iacute;a a un enlace de un foro',

		'Manage_extend' => 'Configuraci&oacute;n avanzada',
		'No_subforums' => 'Sin subforos',
		'Forum_type' => 'Elija el tipo de foro que desea',
		'Presets' => 'Preselecciones',
		'Refresh' => 'Refrescar',
		'Position_after' => 'Posicionar este foro despu&eacute;s de',
		'Link_missing' => 'Enlace perdido',
		'Category_with_topics_deny' => 'El tema permanece en este foro. No puede cambiarlo a una categor&iacute;a.',
		'Recursive_attachment' => 'No puede adjuntar un foro al nivel m&aacute;s bajo de su propia rama (recursive attachment)',
		'Forum_with_attachment_denied' => 'No puede cambiar una categor&iacute;a con foros adjuntos a un foro',
		'icon' => 'Icono',
		'icon_explain' => 'Este icono se mostrar&aacute; en el t&iacute;tulo del foro. Puede establecer aqu&iacute; un enlace URL o una entrada $image[] (see <i>your_template</i>/<i>your_template</i>.cfg).',

// TAB - Calendar
		'Lang_extend_topic_calendar' => 'Calendario en tema',

// TAB - SEO
		'IP_url_rw' => 'URL rewrite',
		'IP_url_rw_explain' => 'Habilitando esta opci&oacute;n el URL rewrite se activar&aacute; (se utilizar&aacute;n enlaces HTML en lugar de PHP, para una mejor indexaci&oacute;n de los motores de b&uacute;squeda) para todos.',

		'IP_url_rw_guests' => 'URL rewrite para invitados',
		'IP_url_rw_guests_explain' => 'Habilitando esta opci&oacute;n el URL rewrite se activar&aacute; solo para invitados y robots de b&uacute;squeda.',

		'IP_bots_reg_auth' => 'Nivel de permisos REG para Bots',
		'IP_bots_reg_auth_explain' => 'Habilitando esta opci&oacute;n los Bots tendr&aacute;n el mismo nivel de acceso que los usuarios registrados.',

		'IP_lofi_bots' => 'LoFi para buscadores',
		'IP_lofi_bots_explain' => 'Habilitando esta opci&oacute;n el sistema LoFi se activar&aacute; para robots de b&uacute;squeda.',

        'IP_seo_cyrillic' => 'Conversacion deCaracteres cirílicos',
		'IP_seo_cyrillic_explain' => 'Al activar esta opci&oacute;n algunos caracteres cir&iacute;licos se convertir&aacute;n en caracteres latinos (no en los mensajes, pero en palabras clave, etiquetas y donde se usan cadenas).',

		'IP_adsense_code' => 'C&oacute;digo Google AdSense',
		'IP_adsense_code_explain' => 'Introduzca aqu&iacute; su c&oacute;digo de Google AdSense y se insertar&aacute; en las p&aacute;ginas de Google Search. Sino desea usarlo, solo debe dejar este campo en blanco.',

		'IP_google_analytics' => 'C&oacute;digo Google Analytics',
		'IP_google_analytics_explain' => 'Introduzca aqu&iacute; su c&oacute;digo de Google Analytics (el Javascript proporcionado por la web de Google) y ser&aacute; insertado autom&aacute;ticamente en el inferior de todas las p&aacute;ginas.',

//Sitemap
		'Sitemap_settings' => 'Configuracion del sitemap',

		'IP_sitemap_topic_limit' => 'Google sitemap :: L&iacute;mite de temas',
		'IP_sitemap_topic_limit_explain' => 'N&uacute;mero m&aacute;ximo de temas para ir a buscar con una sola consulta a la base de datos',

		'IP_sitemap_announce_priority' => 'Google sitemap :: Prioridad para anuncios',
		'IP_sitemap_announce_priority_explain' => 'Prioridad para los temas fijados como anuncios (debe ser un n&uacute;mero entre 0.0 &amp; 1.0 incluidos)',

		'IP_sitemap_sticky_priority' => 'Google sitemap :: Prioridad para notas',
		'IP_sitemap_sticky_priority_explain' => 'Prioridad para los temas fijados como notas (debe ser un n&uacute;mero entre 0.0 y 1.0 incluidos)',

		'IP_sitemap_default_priority' => 'Google sitemap :: Prioridad por defecto',
		'IP_sitemap_default_priority_explain' => 'Prioridad para temas normales (debe ser un n&uacute;mero entre 0.0 y 1.0 incluidos)',

		'IP_sitemap_sort' => 'Google sitemap :: Ordenaci&oacute;n',
		'IP_sitemap_new_first' => 'Mensajes nuevos primero',
		'IP_sitemap_old_first' => 'Mensajes viejos primero',

// TAGS
		'IP_word_graph_max_words' => 'Etiquetas :: M&aacute;ximo de palabras',
		'IP_word_graph_max_words_explain' => 'Seleccione el n&uacute;mero m&aacute;ximo de palabras a mostrar. Un n&uacute;mero muy elevado afectar&aacute; a la carga del servidor. Lo recomendado es 250.',

		'IP_word_graph_word_counts' => 'Etiquetas :: Habilitar contador de palabras',
		'IP_word_graph_word_counts_explain' => 'Mostrar&aacute; al lado de cada palabra el n&uacute;mero de veces que sale en el foro. Por ejemplo <b>Icy Phoenix (365)</b>?',

		'IP_forum_wordgraph' => 'Etiquetas :: Tags en foros',
		'IP_forum_wordgraph_explain' => 'Esta caracter&iacute;stica activar&aacute; una tabla con las palabras mas usadas en el inferior de cada foro',

		'IP_forum_tags_type' => 'Etiquetas :: Tipo de Etiquetas de Foro',
		'IP_forum_tags_type_explain' => 'Puede escoger mostrar una nuve de palabras (tomadas de la tabla de b&uacute;squeda) o Etiquetas (tomadas de las etiruqtas especificadas en los temas)',
		'IP_forum_tags_type_tags' => 'Etiquetas',
		'IP_forum_tags_type_wordgraph' => 'Nube de Palabras',

		'Similar_topics' => 'Temas similares',
		'Similar_topics_explain' => 'En esta p&aacute;gina puede configurar la b&uacute;squeda para temas similares.',

		'IP_similar_topics' => 'Temas similares :: Habilitar temas similares',
		'IP_similar_topics_explain' => 'Esta es la configuraci&oacute;n global para los temas similares. Se deseas activar esta caracter&iacute;stica necesitar&aacute;s tambien activarla en cada foro en la secci&oacute;n de administraci&oacute;n de foros.',

		'IP_similar_topics_desc' => 'Temas similares :: Tener en cuenta la descripci&oacute;n de los temas',

		'IP_similar_stopwords' => 'Temas similares :: Excluir stop-words',

		'IP_similar_max_topics' => 'Temas similares :: N&uacute;mero m&aacute;ximo de temas similares a mostrar',

		'IP_similar_sort_type' => 'Temas similares :: Ordenado por',
		'IP_similar_sort_type_explain' => 'Seleccione el m&eacute;todo de ordenaci&oacute;n para los temas similares',
		'IP_similar_sort_type_time' => 'Hora de publicaci&oacute;n',
		'IP_similar_sort_type_relev' => 'Relevancia',

		'IP_similar_ignore_forums_ids' => 'Temas similares :: Foros ignorados',
		'IP_similar_ignore_forums_ids_explain' => 'Introduzca los IDs de los foros, en el que los temas similares ser&aacute;n ignoradas (por ejemplo: foro de pruebas, foro de charla, etc.). Un ID por l&iacute;nea.',

// TAB - Logging And Security
		'IP_admin_protect' => 'Proteger cuenta del administrador principal',
		'IP_admin_protect_explain' => 'Habilitando esta opci&oacute;n se a&ntilde;adir&aacute; mayor seguridad a la cuenta del administrador principal, otros administradores o usuarios no podr&aacute;n quitarle su rango o calidad de administrador.',

		'IP_ip_admins_only' => 'Mostrar IP a Administradores solo',
        'IP_ip_admins_only_explain' => 'Habiliatndo esta Opcion, solo Adminitradores podran ver los IP en los Foros y Perfiles (deshabilitando esta opcion permitira tambien a los Moderadores ver los IP).',
        
        'IP_db_log_actions' => 'Habilitar log de acciones de la BD',
		'IP_db_log_actions_explain' => 'Habilitando esta opci&oacute;n, cualquier acci&oacute;n que modifique la BD ser&aacute; almacenada en un log en la BD. Si esta opci&oacute;n ha sido marcada como true en el archivo constants.php, entonces no se podr&aacute; deshabilitar esta opci&oacute;n desde el ACP. Si se selecciona obtener reportes, entonces se guardaran archivos extra con todos los errores registrados.',

		'IP_mg_log_actions' => 'Habilitar log de acciones TXT',
		'IP_mg_log_actions_explain' => 'Habilitando esta opci&oacute;n, cualquier acci&oacute;n que modifique la BD ser&aacute; almacenada en el servidor en un archivo de texto (el archivo ser&aacute; almacenado en la carpeta de LOGS). Este archivo no es f&aacute;cil de leer, pero puede ser &uacute;til bajo ciertas condiciones. Act&iacute;valo solo si sabes lo que estas haciendo (el sitio puede ir mas lento si activas esta opci&oacute;n).',

		'IP_write_errors_log' => 'Habilitar log de errores del sitio',
		'IP_write_errors_log_explain' => 'Habilitando esta opci&oacute;n, todos los errores del sitio (por ejemplo errores 404 de archivos no existentes, peticiones err&oacute;neas, etc) ser&aacute;n guardadas en un archivo TXT diario. Recuerda que necesitas habilitar la redirecci&oacute;n de los errores hacia errors.php en el .htaccess para usar esta caracter&iacute;stica (un ejemplo de ello esta incluido en el .htaccess, tan solo inserta tu dominio y qu&iacute;tale los caracteres que dejan estas l&iacute;neas comentadas).',

		'IP_write_digests_log' => 'Habilitar log de res&uacute;menes',
		'IP_write_digests_log_explain' => 'Habilitando esta opci&oacute;n todos los res&uacute;menes enviados ser&aacute;n almacenados en un archivo TXT diario.',

		'IP_logs_path' => 'Ruta para los logs (recuerda dar permisos CHMOD 0755 o 0777 a esta carpeta)',
		'IP_logs_path_explain' => 'Ingresa la ruta para los logs de errores y otros, recuerda que la ruta es relativa a la ra&iacute;z e ingresala sin el slash o linea oblicua final. Ejemplo: <b>logs</b>.',

// TAB - Cron
		'IP_cron_global_switch' => 'Activar cron PHP [Configuraci&oacute;n global]',
		'IP_cron_global_switch_explain' => 'Habilitando esta opci&oacute;n el Cron PHP ser&aacute; activado : algunas operaciones autom&aacute;ticas ser&aacute;n ejecutadas a intervalos de tiempo determinados. El rango de tiempo &oacute;ptimo para cada caracter&iacute;stica cron, depende del tr&aacute;fico de tu sitio y otras preferencias: si no sabes qu&eacute; impacto pueden tener estos ajustes, por favor deja desactivada esta opci&oacute;n, pues probablemente no la necesites.',

		'IP_cron_files_interval' => 'Ejecuciones de archivos con intervalo cron',
		'IP_cron_files_interval_explain' => 'Este tipo de cron puede ser usado para ejecutar ciertos archivos de forma autom&aacute;tica cada cierto intervalo que tu decidas. Los archivos a ser ejecutados deben ser a&ntilde;adidos en <b>constants.php</b> &raquo; <b>define(\'CRON_FILES\', \'\');</b>. Si indicas mas de un archivo, deben ser separados por comas.<br /><br /><b>&Uacute;ltima ejecuci&oacute;n: ' . (($config['cron_files_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($config['cron_files_last_run']), $config['board_timezone'])) . '</b>',
        'IP_cron_digests_interval' => 'PHP Cron Resumenes',
		'IP_cron_digests_interval_explain' => 'Esta característica permitirá que una emulación de PHP de la CRON trate de enviar resumenes por mensaje de correo electrónico una vez por hora, pero ya que se basa en una emulación de PHP no puede ser ejecutado de forma correcta cada vez. Esto significa que a veces los correos electrónicos no pueden ser enviados. Si usted puede activar el cron en el servidor, por favor seleccione <b> Cron SERVER </ b> y asegúrese de activar manualmente el archivo para permitir que los resumenes se ejecuten a través del servidor.<br /><br /><b>Ult&iacute;ma ejecuc&iacute;on: ' . (($config['cron_digests_last_run'] == 0) ? 'NUNCA' : create_date('d M Y  - H.i.s', ($config['cron_digests_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_birthdays_interval' => 'PHP Cron Cumplea&ntilde;os',
		'IP_cron_birthdays_interval_explain' => 'Esta característica permitirá que una emulación de PHP de la CRON trate de enviar e-mails de felicitación de cumpleaños, pero ya que se basa en una emulación de PHP puede no ser ejecutado de forma correcta cada vez. Esto significa que a veces los correos electrónicos no pueden ser enviados.<br /><br /><b>Ultima Ejecuc&iacute;on: ' . (($config['cron_birthdays_last_run'] == 0) ? 'NUNCA' : create_date('d M Y  - H.i.s', ($config['cron_birthdays_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_database_interval' => 'Optimizaci&oacute;n de la BD con intervalo cron',
		'IP_cron_database_interval_explain' => 'Esta caracter&iacute;stica optimizar&aacute; la base de datos del sitio en cada intervalo dado.<br /><br /><b>&Uacute;ltima ejecuci&oacute;n: ' . (($config['cron_database_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($config['cron_database_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_cache_interval' => 'Ordenar el cach&eacute; de plantillas con intervalo cron',
		'IP_cron_cache_interval_explain' => 'El cach&eacute; de plantillas ser&aacute; limpiado en cada intervalo dado.<br /><br /><b>&Uacute;ltima ejecuci&oacute;n: ' . (($config['cron_cache_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($config['cron_cache_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_sql_interval' => 'Ordenar el cach&eacute; SQL con intervalo cron',
		'IP_cron_sql_interval_explain' => 'El cach&eacute; SQL ser&aacute; limpiado en cada intervalo dado.<br /><br /><b>&Uacute;ltima ejecuci&oacute;n: ' . (($config['cron_sql_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($config['cron_sql_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_users_interval' => 'Ordenar el cach&eacute; de usuarios con intervalo cron',
		'IP_cron_users_interval_explain' => 'El cach&eacute; de usuarios ser&aacute; limpiado en cada intervalo dado.<br /><br /><b>&Uacute;ltima ejecuci&oacute;n: ' . (($config['cron_users_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($config['cron_users_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_topics_interval' => 'Ordenar el cache de temas con Intervalo Cron',
		'IP_cron_topics_interval_explain' => 'El cache de temas ser&aacute; limpiado en cada intervalo dado.<br /><br /><b>&Uacute;ltima ejecuci&oacute;n: ' . (($config['cron_topics_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($config['cron_topics_last_run']), $config['board_timezone'])) . '</b>',

        'IP_cron_sessions_interval' => 'Limpiar Sessiones via CRON',
		'IP_cron_sessions_interval_explain' => 'Las Tablas de Sessiones seran limpiadas cada intervalo.<br /><br /><b>&Uacute;ltima ejecuci&oacute;n: ' . (($config['cron_sessions_last_run'] == 0) ? 'NUNCA' : create_date('d M Y  - H.i.s', ($config['cron_sessions_last_run']), $config['board_timezone'])) . '</b>',

		'Cron_Disabled' => 'Deshabilitado',
		'15M' => '15 minutos',
		'30M' => '30 minutos',
		'1H' => '1 hora',
		'2H' => '2 horas',
		'3H' => '3 horas',
		'6H' => '6 horas',
		'12H' => '12 horas',
		'1D' => '1 d&iacute;a',
		'3D' => '3 d&iacute;as',
		'7D' => '1 semana',
		'14D' => '2 semanas',
		'30D' => '1 mes',


// lang_extend_settings.php
		'Lang_extend_settings' => 'Idioma de configuraci&oacute;n de MODs',
		'Configuration_extend' => 'Configuraci&oacute;n avanzada',
		'Override_user_choices' => 'Sobrescribir opciones del usuario',
		)
	);
}

$lang = array_merge($lang, array(
	'CFG_NONE' => 'NADIE',
	'CFG_ALL' => 'TODOS',
	'CFG_REG' => 'REG',
	'CFG_SELF' => 'UNO MISMO',
	'CFG_PRIVATE' => 'PRIVADO',
	'CFG_MOD' => 'MOD',
	'CFG_ADMIN' => 'ADMIN',

// lang_extend_categories_hierarchy.php - BEGIN
	'Hierarchy_setting' => 'Subforos',
	'Forum_link' => 'Redirecci&oacute;n del enlace',
	'Forum_link_visited' => 'Este enlace ha sido visitado %d veces',

	'Use_sub_forum' => 'Compresi&oacute;n principal',
	'Index_packing_explain' => 'Elija el nivel de compresi&oacute;n que desea para la p&aacute;gina principal',
	'Medium' => 'Medio',
	'Full' => 'Completo',
	'Split_categories' => 'Separar categor&iacute;as en la p&aacute;gina principal',
	'Use_last_topic_title' => 'Mostrar t&iacute;tulos de los &uacute;ltimos temas en la p&aacute;gina principal',
	'Last_topic_title_length' => 'Longitud de los t&iacute;tulos',
	'Sub_level_links' => 'Sub nivel de enlaces en la p&aacute;gina principal',
	'Sub_level_links_explain' => 'A&ntilde;adir enlaces a los sub niveles del foro o categor&iacute;a',
	'With_pics' => 'Con iconos',
	'Display_viewonline' => 'Mostrar la informaci&oacute;n "qui&eacute;n est&aacute; conectado" en la p&aacute;gina principal',
	'Never' => 'Nunca',
	'Root_index_only' => 'S&oacute;lo en la p&aacute;gina principal',
	'Always' => 'Siempre',
	'Subforums' => 'Subforos',
// lang_extend_categories_hierarchy.php - END

// lang_extend_topic_calendar.php - BEGIN
	'Calendar_settings' => 'Calendario',
	'Calendar' => 'Calendario',
	'Calendar_scheduler' => 'Planificador',
	'Calendar_event' => 'Evento en el calendario',
	'Calendar_from_to' => 'Desde %s a %s (incluido)',
	'Calendar_time' => '%s',
	'Calendar_duration' => 'Duraci&oacute;n',

	'Calendar_week_start' => 'Primer d&iacute;a de la semana',
	'Calendar_header_cells' => 'N&uacute;mero de columnas a mostrar en la cabecera (0 para no mostrar ninguna)',
	'Calendar_title_length' => 'Longitud del t&iacute;tulo mostrado en las celdas',
	'Calendar_text_length' => 'Longitud del texto mostrado en la ventana',
	'Calendar_block_display' => 'Mostrar el cuadro del calendario en el encabezado del foro',
	'Calendar_display_open' => 'Mostrar la columna del calendario al entrar en el principal',
	'Calendar_nb_row' => 'N&uacute;mero de columnas por d&iacute;a',
	'Calendar_birthday' => 'Mostrar cumplea&ntilde;os en el calendario',
	'Calendar_forum' => 'Mostrar el nombre del foro debajo del t&iacute;tulo de tema en el calendario',

	'Sorry_auth_cal' => 'Lo siento, pero s&oacute;lo %s puede poner eventos de calendario en este foro.',
	'Date_error' => 'd&iacute;a %d, mes %d, a&ntilde;o %d no es una fecha v&aacute;lida',

	'Event_time' => 'Evento',
	'Minutes' => 'Minutos',
	'Today' => 'Hoy',
	'Yesterday' => 'Ayer',
	'All_events' => 'Todos los eventos',

/*
	'Rules_calendar_can' => '<b>Puede</b> enviar eventos al Calendario',
	'Rules_calendar_cannot' => '<b>No Puede</b> enviar eventos al Calendario',
*/
	'Rules_calendar_can' => '<b>Puede</b> publicar eventos en el calendario',
	'Rules_calendar_cannot' => '<b>No puede</b> publicar eventos en el calendario',

	'birthday_header' => '&iexcl;Feliz cumplea&ntilde;os!',
	'birthday' => '&iexcl;<b>%s</b> cumple a&ntilde;os hoy!',
// lang_extend_topic_calendar.php - END

	'DB_LOG_ALL' => 'Si, con reportes de errores',
	)
);

?>