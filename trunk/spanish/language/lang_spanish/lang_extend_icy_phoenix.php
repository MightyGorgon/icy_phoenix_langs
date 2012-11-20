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
	'10_Site_Settings' => 'Configuración del sitio',
	'15_Various_Settings' => 'Configuración varia',
	'20_SQL_Charge' => 'Optimización SQL',
	'25_Users' => 'Usuarios',
	'30_Posting' => 'Escribiendo y mensajes',
	'40_IMG_Posting' => 'Imágenes en mensajes',
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
		'SITE_META_DESCRIPTION' => 'Meta Descripcíon',
		'SITE_META_DESCRIPTION_SWITCH' => 'Habilitar descripcíon desde DB',
		'SITE_META_DESCRIPTION_SWITCH_EXPLAIN' => 'Si habilita los Claves Meta desde db, entonces se usaran los Descripcíones especificados arriba en paginas HTML, en vez de los especificados en <i>lang_main_settings.php</i>.',
		'SITE_META_AUTHOR' => 'Meta Autor',
		'SITE_META_AUTHOR_SWITCH' => 'Habilitar Autor Meta desde DB',
		'SITE_META_AUTHOR_SWITCH_EXPLAIN' => 'Si habilita los Autores desde db, entonces se usaran los Autores especificados arriba en paginas HTML, en vez de los especificados en <i>lang_main_settings.php</i>.',
		'SITE_META_COPYRIGHT' => 'Meta Copyright',
		'SITE_META_COPYRIGHT_SWITCH' => 'Habilitar el Meta Copyright desde DB',
		'SITE_META_COPYRIGHT_SWITCH_EXPLAIN' => 'Si habilita el Meta Copyright desde db, entonces se usaran los Meta Copyrights especificados arriba en paginas HTML, en vez de los especificados en <i>lang_main_settings.php</i>.',

// TAB - SITE
		'IP_mobile_style_disable' => 'Deshabilitar la deteccíon de Moviles',
		'IP_mobile_style_disable_explain' => 'Normalmente, cuando un Movil conecta al sitio, el estilo <b>Movil</b> es automaticamente habilitado (cualquier Usuario puede deshabilitarlo manualmente). Si quiere deshabilitar la deteccíon automatica, solo selecione esta opcion.',

// TAB - Icy Phoenix
		'IP_enable_xs_version_check' => 'Activar comprobación de versión Icy Phoenix',
		'IP_enable_xs_version_check_explain' => 'Activando esta opción cada vez que acceda a la ACP se comprobará si posee la última versión disponible de Icy Phoenix para descargar. Desactivando esta opción puede accelerar un poco la carga de la ACP. No obstante, la comprobación se hará una vez al día y luego permanecerá en el cache.',

		'IP_disable_email_error' => 'Deshabilitar errores al enviar correos',

		'IP_html_email' => 'Correo HTML',
		'IP_html_email_explain' => 'Activando esta opción podrá utilizar el formato HTML, de lo contrario, será texto simple plano.',

		
		'IP_emails_only_to_admins' => 'Correos solo para administradores',
		'IP_emails_only_to_admins_explain' => 'Permite enviar utilizar el sistema de envío de correos solo para administradores',

		'IP_ajax_features' => 'Habilitar características ajax',
		'IP_ajax_features_explain' => 'Algunas características ajax serán integradas en su foro',

		'IP_ajax_checks_register' => 'Comprobación ajax en el registro',
		'IP_ajax_checks_register_explain' => 'Activando esta opción, se revisará en tiempo real que los campos del formulario de registro se completen de forma correcta (atención: esta opción puede ralentizar la página de registro).',

		'IP_inactive_users_memberlists' => 'Ver usuarios inactivos en la lista de usuarios y el bloque de cumpleaños',
		'IP_inactive_users_memberlists_explain' => 'Activando esta opción los usuarios inactivos se verán en la lista de usuarios y el bloque de cumpleaños.',

		'IP_page_gen' => 'Mostrar tiempo de generación de la página en el inferior',

		'IP_switch_header_dropdown' => 'Activar menú desplegable en la cabecera',
		'IP_switch_header_dropdown_explain' => 'Esto activará un menú desplegable en la cabecera del foro para la búsqueda y los mensajes',

		'IP_show_alpha_bar' => 'Mostrar barra de orden alfabético en la vista de foros (Configuración global)',
		'IP_show_alpha_bar_explain' => 'Esta característica mostrará una barra de orden alfabético de los títulos de los temas al inicio de la página de vista de foros. Necesitarás también activar esto en cada foro en particular, en la sección de administración de foros.',

		'IP_show_rss_forum_icon' => 'Iconos del índice del foro',
		'IP_show_rss_forum_icon_explain' => 'Esta opción mostrará iconos a la derecha de cada título de foro (en el índice del foro): RSS, tema nuevo...',

		'IP_allow_mods_view_self' => 'Permitir a TODOS los moderadores ver temas con AUTORIZACIóN LIBRE',
		'IP_allow_mods_view_self_explain' => 'Si un foro se ha establecido con AUTORIZACIóN LIBRE de acceso sólo a los administradores y moderadores del foro, pueden acceder a estos temas a través de viewforum y viewtopic. Sin embargo, hay muchas características que pueden mostrar el contenido de este tipo de puestos, aunque no estén autorizados: temas recientes, buscar, bloques de mensajes recientes, bloques de temas aleatorios, etc. Para evitar esto, se ha codificado una característica, que no permite el acceso a la gente a estos temas a través de vías secundarias. De cualquier modo se puede permitir que TODOS los moderadores (no sólo los administradores) puedan ver estos mensajes a través de estas vías secundarias. Si lo establece como SI, a TODOS los moderadores se les permitirá ver el contenido de estos mensajes a través de: recientes, buscar, temas relacionados con los bloques... Lamentablemente si lo establece en OFF, ni los moderadores AUTORIZADOS podrán tener AUTORIZACIóN LIBRE a estos temas a través de formas secundarias. La característica se ha codificado de esta manera para guardar la carga extra de SQL. Si no utiliza foros con AUTORIZACIóN LIBRE, no necesitara esta función.',

		'IP_xmas_fx' => 'Nieve navideña',
		'IP_xmas_fx_explain' => 'Esta opción habilitará los efectos de nieve (por favor tenga en cuenta que sólo algunos estilos soportan esta característica).',

		'IP_xmas_gfx' => 'Imágenes navideñas',
		'IP_xmas_gfx_explain' => 'Esta opción aplicará imágenes de navidad al foro.',

		'IP_select_theme' => 'Cambiar estilo',
		'IP_select_theme_explain' => 'Habilitando esta opción, se añadirá una caja de selección con todos los estilos disponibles para un rápido cambio de estilo.',

		'IP_select_lang' => 'Cambiar idioma',
		'IP_select_lang_explain' => 'Habilitando esta opción, se añadirá un enlace con todos los idiomas disponibles para un rápido cambio de idioma.',

		'IP_cms_dock' => 'Mostrar barra al estilo de Apple en el CMS',

		'IP_cms_style' => 'Activar AJAX en el CMS',
		'IP_cms_style_explain' => 'Al activar esta opción se activarán las funciones AJAX por defecto',

		'IP_split_ga_ann_sticky' => 'Separar temas por tipo',
		'IP_split_ga_ann_sticky_explain' => 'Desde aquí puede seleccionar como desea separar los tipos de temas dentro de un foro',
		'IP_split_topic_0' => '<b>Todos los tipos de temas (sin separar)</b>',
		'IP_split_topic_1' => '<b>Los anuncios globales, anuncios y notas estarán juntos, y los temas normales separados</b>',
		'IP_split_topic_2' => '<b>Los anuncios globales estarán separados, los anuncios y notas estarán juntos, y los temas normales separados</b>',
		'IP_split_topic_3' => '<b>Todos los tipos de temas separados</b>',

// TAB - SQL Charge
		'IP_fast_n_furious' => 'Rápido y furioso',
		'IP_fast_n_furious_explain' => 'Habilitando esta opción algunas funciones SQL pesadas serán desactivadas. Esperamos que su web vaya mucho mas rápido!',

		'IP_db_cron' => 'Optimizar base de datos',
		'IP_db_cron_explain' => 'Habilitando esta opción se activará la optimización de la base de datos',

		'IP_site_history' => 'Estadísticas del sitio',
		'IP_site_history_explain' => 'Habilitando esta opción se activará las estadísticas del sitio',

        'IP_active_sessions' => 'Limite en numeros de sessiones activas',
		'IP_active_sessions_explain' => '<b>Tenga quidado</b> con este valor: este numero es el numero maximo de sessiones permitidas, si se alcanza el limite, la pagina no sera accessible. Si no sabe, como configurar este Limite, dejalo en 0 (CERO).',

		'IP_global_disable_upi2db' => 'Desactivar UPI2DB globalmente',
		'IP_global_disable_upi2db_explain' => 'Esta opción te permite desactivar UPI2DB globalmente para ahorrar memoria extra.',

		'IP_enable_own_icons' => 'íconos de mensajes propios',
		'IP_enable_own_icons_explain' => 'Habilitando esta opción, los íconos de temas que contengan mensajes propios serán marcados.',

		'IP_show_forums_online_users' => 'Mostrar usuarios en línea en Foros',
		'IP_show_forums_online_users_explain' => 'Esta característica activa el contador de usuarios en línea para cada foro en el índice.',

		'IP_google_bot_detector' => 'Habilitar detector de robots de Google',

		'IP_gsearch_guests' => 'Forzar la búsqueda de Google para invitados',

		'IP_visit_counter_switch' => 'Habilitar contador de visitas',

		'IP_enable_new_messages_number' => 'Mostrar número de nuevos mensajes desde la última visita',

		'IP_disable_thanks_topics' => 'Deshabilitar botón de gracias viendo temas (Interruptor Global)',

		'IP_show_thanks_profile' => 'Mostrar las Gracias recibidas al ver perfil',

		'IP_show_thanks_viewtopic' => 'Mostrar las Gracias recibidas al leer temas',

		'IP_disable_likes_posts' => 'Desactivar &quot;Me gusta&quot; para mensajes (Interruptor Global)',
		'IP_disable_likes_posts_explain' => 'Esta opción te permite desactivar globalmente la opción &quot;Me gusta&quot;',

		'IP_disable_topic_view' => 'Deshabilitar "Quién ha leído este tema" (Interruptor Global)',
		'IP_disable_topic_view_explain' => 'Esta opción permite deshabilitar la característica "Quién ha leído este tema" (esto ahorrará espacio SQL).',

		'IP_disable_referers' => 'Deshabilitar referidos',
		'IP_disable_referers_explain' => 'Esta opción permite deshabilitar la característica de referidos (esto ahorrará espacio SQL).',

		'IP_disable_logins' => 'Desactivar la grabación de identificaciones',
		'IP_disable_logins_explain' => 'Habilitando esta opción, las identificaciones del usuario no se guardarán más',

		'IP_last_logins_n' => 'Número de identificaciones que se guardarán',

		'IP_index_top_posters' => 'Los que mas escriben :: índice de foros',
		'IP_index_top_posters_explain' => 'Habilitando esta opción se mostrarán los que mas escriben en el <b>índice de foros</b>.',

		'IP_index_last_msgs' => 'últimos mensajes :: índice de foros',
		'IP_index_last_msgs_explain' => 'Habilitando esta opción se mostrarán los últimos mensajes en el <b>índice de foros</b>.',

		'IP_online_last_msgs' => 'últimos mensajes :: Quién está en conectado',
		'IP_online_last_msgs_explain' => 'Habilitando esta opción se mostrarán los últimos mensajes en <b>Quién está conectado</b>.',

		'IP_last_msgs_n' => 'Número de últimos mensajes a mostrar.',

		'IP_last_msgs_x' => 'Excluir foros',
		'IP_last_msgs_x_explain' => 'Por favor, introduzca los IDs de los foros que desea excluir de los marcos de últimos mensajes (debe separar cada ID por comas).',

		'IP_show_chat_online' => 'Conectados en el chat ajax :: índice de foros',
		'IP_show_chat_online_explain' => 'Habilitando esta opción se mostrará en el <b>índice de foros</b> los usuarios conectados en el chat ajax.',

		'IP_index_shoutbox' => 'Cuadro de charla :: índice de foros',
		'IP_index_shoutbox_explain' => 'Habilitando esta opción activará un cuadro de charla en el <b>índice de foros</b>.',

		'IP_online_shoutbox' => 'Cuadro de charla :: Quién está conectado',
		'IP_online_shoutbox_explain' => 'Habilitando esta opción activará el cuadro de charla en <b>Quién está conectado</b>.',

		'IP_img_shoutbox' => 'Deshabilitar BBCode [img][/img] en el cuadro de charla',
		'IP_img_shoutbox_explain' => 'Habilitando esta opción se desactivará el BBCode [img][/img] en el cuadro de charla.',

		'IP_index_links' => 'Enlaces :: índice de foros',
		'IP_index_links_explain' => 'Habilitando esta opción se mostrarán los enlaces en el <b>índice de foros</b>.',

		'IP_index_birthday' => 'Cumpleaños :: índice de foros',
		'IP_index_birthday_explain' => 'Habilitando esta opción se mostrarán los cumpleaños en el <b>índice de foros</b>.',

		'IP_show_random_quote' => 'Citas aleatorias :: índice de foros',
		'IP_show_random_quote_explain' => 'Habilitando esta opción se mostrarán citas aleatorias en el <b>índice de foros</b>',

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
		'IP_posts_precompiled_explain' => 'Habilitando esta opción en la vista de temas, siempre se compilarán los mensajes de texto, sin utilizar los mensajes de texto precompilados (	esto es más lento, pero puede ser útil en algunos casos).',

		'IP_read_only_forum' => 'Deshabilitar envío de mensajes en todos los foros (solo lectura)',
		'IP_read_only_forum_explain' => 'Permite bloquear el envió de mensajes en todos los foros sin cambiar sus permisos. Es útil para periodos de tiempo limitados y que el administrador no tenga que cerrar el foro para modificar los permisos. Los administradores si podrán enviar mensajes.',

		'IP_allow_drafts' => 'Permitir borradores',
		'IP_allow_drafts_explain' => 'Permite a los usuarios guardar sus mensajes como borradores',

		'IP_allow_mods_edit_admin_posts' => 'Permitir a los moderadores editar los mensajes de administradores',
		'IP_allow_mods_edit_admin_posts_explain' => 'Permite a los moderadores editar los mensajes de los administradores',

		'IP_forum_limit_edit_time_interval' => 'Limitar intervalo de tiempo para edición (Minutos)',
		'IP_forum_limit_edit_time_interval_explain' => 'Esto establece el intervalo de tiempo en el que los usuarios podrán editrar sus mensajes. Escriba cero para que no haya límite (la función debe ser activada en cada foro en la Administración de Foro)',

		'IP_force_large_caps_mods' => 'Asunto apropiado para los temas',
		'IP_force_large_caps_mods_explain' => 'Los asuntos de los temas serán convertidos por un asunto correcto (o apropiado) para todos los usuarios, menos los administradores',

		'IP_show_new_reply_posting' => 'Avisos para nuevas respuestas',
		'IP_show_new_reply_posting_explain' => 'Si habilita esto, se mostrará un aviso cuando hay una nueva respuesta mientras está contestando un tema',

		'IP_no_bump' => 'Prohibir bumping (doble posteo) dentro de 24 horas',
		'IP_no_bump_explain' => 'Habilitando esta opción, el último usuario en escribir en un tema, no podrá escribir dentro de 24 horas desde su último mensaje, hasta que otro usuario deje una respuesta (no se aplica a los admins)',
		'MODS_ALLOWED' => 'Moderadores pueden escribir',

        'IP_robots_index_topics_no_replies' => 'Habilitar indexacíon de topicos sin respuesta para Robots, de otro modo, topicos sin respuestas, no seran idexados',
		'IP_robots_index_topics_no_replies_explain' => 'Habilitando la indexacíon de topicos sin respuesta para Robots, de otro modo, topicos sin respuestas, no seran idexados',

		'IP_display_tags_box' => 'Etiquetas :: Mostrar Etiquetas de Temas',
		'IP_display_tags_box_explain' => 'Activando esta opción se activarán las etiquetas de los temas (las etiquetas podrían ser usadas para indexación): las etiquetas pueden ser introducidas o editadas sólo por administradores (o moderadores si activa la siguiente opción) para evitar spam',

		'IP_allow_moderators_edit_tags' => 'Etiquetas :: Permitir a los moderadores editar etiquetas',
		'IP_allow_moderators_edit_tags_explain' => 'Activando esta opción los moderadores podrán editar las etiquetas de los temas',

		'IP_show_topic_description' => 'Habilitar Descripción de temas',
		'IP_show_topic_description_explain' => 'Habilitando esta opción se activará la Descripción del tema, mientras se postea y se navega en los foros',

		'IP_edit_notes' => 'Habilitar notas de edición',
		'IP_edit_notes_explain' => 'Habilitando esta opción se activarán las notas de edición',

		'IP_edit_notes_n' => 'Notas de edición máximas',

		'IP_always_show_edit_by' => 'Mostrar siempre avisos de edición',
		'IP_always_show_edit_by_explain' => 'Si habilita esta opción se mostrará siempre "última edición por..." en la parte inferior de cada mensaje cuando se edite. Con las ediciones de los administradores no se mostrará',

		'IP_show_social_bookmarks' => 'Marcadores sociales',
		'IP_show_social_bookmarks_explain' => 'Mostrar sección de marcadores sociales cuando se miran temas',

		'IP_link_this_topic' => 'Enlazar este tema',
		'IP_link_this_topic_explain' => 'Muestra el bloque de "Enlazar este tema" cuando se leen temas',

		'IP_smilies_topic_title' => 'Emoticonos para títulos de temas y descripciones',
		'IP_smilies_topic_title_explain' => 'Habilitando esta opción se permitirá poner emoticonos en los títulos de temas y descripciones de temas',

		'IP_enable_colorpicker' => 'Habilitar selector de color en la página de escribir mensajes',

		'IP_quote_iterations' => 'Número máximo de citas anidadas',

		'IP_ftr_disable' => 'Deshabilitar la lectura obligada de tema',
		'IP_ftr_disable_explain' => 'Habilitando esta opción se desactivará completamente la lectura obligada de tema',

		'IP_disable_html_guests' => 'Deshabilitar enlaces HTLM para invitados',

		'IP_birthday_viewtopic' => 'Mostrar edad de los usuarios en los temas',

		'IP_switch_poster_info_topic' => 'Mostrar información de los usuarios en los temas (lenguaje, estilo, etc.)',

		'IP_enable_quick_quote' => 'Habilitar cita rápida',
		'IP_enable_quick_quote_explain' => 'La cita rápida permite a los usuarios citar cualquier mensaje en un tema con un simple clic. Esta característica utiliza JavaScript.',

		'IP_allow_html_only_for_admins' => 'Activar HTML sólo para administradores',
		'IP_allow_html_only_for_admins_explain' => 'Activando esta opción los administradores podrán usar HTML en etiquetas y mensaje. Por favor tenga en cuenta que esta funcionalidad puede dar problemas de seguridad o fallos en el diseño si se usa de manera incorrrecta.',

		'IP_enable_custom_bbcodes' => 'Activar BBCodes Personalizados',
		'IP_enable_custom_bbcodes_explain' => 'Esta opción activará BBCodes creados a través del ACP.',

		'IP_allow_all_bbcode' => 'Habilitar todos los BBCodes',
		'IP_allow_all_bbcode_explain' => 'Habilitando esta opción todos los BBCodes serán activados en las firmas y otros sitios donde normalmente no están activados. Los BBCodes que por lo general son desactivados en la firma son IMG, ALBUMIMG y algunos mas que consumen recursos excesivos. Si habilita esta opción, algunas firmas pueden ocupar mucho espacio y consumir bastantes recursos del servidor.',

		'IP_switch_bbcb_active_content' => 'Permitir BBCode para contenidos activos en los mensajes',
		'IP_switch_bbcb_active_content_explain' => 'Activará BBCodes para flash, vídeo, audio streams, real media y quicktime.',

// TAB - Images In Posts
		'IP_auth_view_pic_upload' => 'Permisos de subida de imágenes (Imágenes Icy)',

		'IP_enable_postimage_org' => 'Habilitar botón subir imágenes en el formulario de mensajes',

		'IP_gd_version' => 'Versión GD:',
		'GD_0' => 'No GD',
		'GD_1' => 'GD1',
		'GD_2' => 'GD2',

		'IP_show_img_no_gd' => 'Mostrar miniaturas GIF sin usar las librerias GD (las imágenes grandes se cargan y luego se mostrará el tamaño).',

		'IP_thumbnail_posts' => 'Miniaturas en mensajes',
		'IP_thumbnail_posts_explain' => 'Con esta opción las miniaturas se mostrarán en lugar de las imágenes completas cuando una imagen es publicada utilizando el BBCode IMG',

		'IP_show_pic_size_on_thumb' => 'Mostrar el tamaño de la imagen de la miniatura',

		'IP_thumbnail_highslide' => 'Utilizar HighSlide si las miniaturas de las  están activadas',
		'IP_thumbnail_highslide_explain' => 'Abre la imagen delante de la página actual en lugar de abrirlo en una nueva ventana. Mas acerca de <a href="http://www.highslide.com/" target="_blank">HighSlide JS...</a><br />Asegúrese de vaciar los mensajes precompilados después de cambiar esta opción!',

		'IP_thumbnail_cache' => 'Caché de miniaturas',

		'IP_thumbnail_quality' => 'Calidad de miniaturas (1-100)',

		'IP_thumbnail_size' => 'Tamaño de miniaturas (en píxels)',

// TAB - Forum
		'Lang_extend_categories_hierarchy' => 'Jerarquía de categorías',

		'Category_attachment' => 'Adjunto a',
		'Category_desc' => 'Descripción',
		'Category_config_error_fixed' => 'Se ha reparado un error en la configuración de categorías',
		'Attach_forum_wrong' => 'No puede adjuntar un foro a otro foro',
		'Attach_root_wrong' => 'No puede adjuntar un foro a la página principal de un foro',
		'Forum_name_missing' => 'No puede crear un foro sin nombre',
		'Category_name_missing' => 'No puede crear una categoría sin nombre',
		'Only_forum_for_topics' => 'Los temas sólo pueden estar ubicados en foros',
		'Delete_forum_with_attachment_denied' => 'No puede borrar foros que contengan sub-niveles',

		'Category_delete' => 'Borrar categoría',
		'Category_delete_explain' => 'El siguiente formulario le permitirá borrar una categoría y decidir dónde quiere ubicar los foros y categorias que contenga.',

// forum links type
		'Forum_link_url' => 'Enlace URL',
		'Forum_link_url_explain' => 'Aquí puede establecer un enlace a un programa phpBB o a un servidor externo',
		'Forum_link_internal' => 'Programa phpBB',
		'Forum_link_internal_explain' => 'Elija "sí" si desea invocar un programa que se encuentre dentro de los directorios phpBB',
		'Forum_link_hit_count' => 'Contador de clicks',
		'Forum_link_hit_count_explain' => 'Elija "sí" si desea que el foro muestre y cuente el número de clics de este enlace',
		'Forum_link_with_attachment_deny' => 'No puede establecer un foro como un enlace si ya tiene sub niveles',
		'Forum_link_with_topics_deny' => 'No puede establecer un foro como un enlace si ya hay temas en él',
		'Forum_attached_to_link_denied' => 'No puede adjuntar un foro o categoría a un enlace de un foro',

		'Manage_extend' => 'Configuración avanzada',
		'No_subforums' => 'Sin subforos',
		'Forum_type' => 'Elija el tipo de foro que desea',
		'Presets' => 'Preselecciones',
		'Refresh' => 'Refrescar',
		'Position_after' => 'Posicionar este foro después de',
		'Link_missing' => 'Enlace perdido',
		'Category_with_topics_deny' => 'El tema permanece en este foro. No puede cambiarlo a una categoría.',
		'Recursive_attachment' => 'No puede adjuntar un foro al nivel más bajo de su propia rama (recursive attachment)',
		'Forum_with_attachment_denied' => 'No puede cambiar una categoría con foros adjuntos a un foro',
		'icon' => 'Icono',
		'icon_explain' => 'Este icono se mostrará en el título del foro. Puede establecer aquí un enlace URL o una entrada $image[] (see <i>your_template</i>/<i>your_template</i>.cfg).',

// TAB - Calendar
		'Lang_extend_topic_calendar' => 'Calendario en tema',

// TAB - SEO
		'IP_url_rw' => 'URL rewrite',
		'IP_url_rw_explain' => 'Habilitando esta opción el URL rewrite se activará (se utilizarán enlaces HTML en lugar de PHP, para una mejor indexación de los motores de búsqueda) para todos.',

		'IP_url_rw_guests' => 'URL rewrite para invitados',
		'IP_url_rw_guests_explain' => 'Habilitando esta opción el URL rewrite se activará solo para invitados y robots de búsqueda.',

		'IP_bots_reg_auth' => 'Nivel de permisos REG para Bots',
		'IP_bots_reg_auth_explain' => 'Habilitando esta opción los Bots tendrán el mismo nivel de acceso que los usuarios registrados.',

		'IP_lofi_bots' => 'LoFi para buscadores',
		'IP_lofi_bots_explain' => 'Habilitando esta opción el sistema LoFi se activará para robots de búsqueda.',

        'IP_seo_cyrillic' => 'Conversacion deCaracteres cirílicos',
		'IP_seo_cyrillic_explain' => 'Al activar esta opción algunos caracteres cirílicos se convertirán en caracteres latinos (no en los mensajes, pero en palabras clave, etiquetas y donde se usan cadenas).',

		'IP_adsense_code' => 'Código Google AdSense',
		'IP_adsense_code_explain' => 'Introduzca aquí su código de Google AdSense y se insertará en las páginas de Google Search. Sino desea usarlo, solo debe dejar este campo en blanco.',

		'IP_google_analytics' => 'Código Google Analytics',
		'IP_google_analytics_explain' => 'Introduzca aquí su código de Google Analytics (el Javascript proporcionado por la web de Google) y será insertado automáticamente en el inferior de todas las páginas.',

//Sitemap
		'Sitemap_settings' => 'Configuracion del sitemap',

		'IP_sitemap_topic_limit' => 'Google sitemap :: Límite de temas',
		'IP_sitemap_topic_limit_explain' => 'Número máximo de temas para ir a buscar con una sola consulta a la base de datos',

		'IP_sitemap_announce_priority' => 'Google sitemap :: Prioridad para anuncios',
		'IP_sitemap_announce_priority_explain' => 'Prioridad para los temas fijados como anuncios (debe ser un número entre 0.0 &amp; 1.0 incluidos)',

		'IP_sitemap_sticky_priority' => 'Google sitemap :: Prioridad para notas',
		'IP_sitemap_sticky_priority_explain' => 'Prioridad para los temas fijados como notas (debe ser un número entre 0.0 y 1.0 incluidos)',

		'IP_sitemap_default_priority' => 'Google sitemap :: Prioridad por defecto',
		'IP_sitemap_default_priority_explain' => 'Prioridad para temas normales (debe ser un número entre 0.0 y 1.0 incluidos)',

		'IP_sitemap_sort' => 'Google sitemap :: Ordenación',
		'IP_sitemap_new_first' => 'Mensajes nuevos primero',
		'IP_sitemap_old_first' => 'Mensajes viejos primero',

// TAGS
		'IP_word_graph_max_words' => 'Etiquetas :: Máximo de palabras',
		'IP_word_graph_max_words_explain' => 'Seleccione el número máximo de palabras a mostrar. Un número muy elevado afectará a la carga del servidor. Lo recomendado es 250.',

		'IP_word_graph_word_counts' => 'Etiquetas :: Habilitar contador de palabras',
		'IP_word_graph_word_counts_explain' => 'Mostrará al lado de cada palabra el número de veces que sale en el foro. Por ejemplo <b>Icy Phoenix (365)</b>?',

		'IP_forum_wordgraph' => 'Etiquetas :: Tags en foros',
		'IP_forum_wordgraph_explain' => 'Esta característica activará una tabla con las palabras mas usadas en el inferior de cada foro',

		'IP_forum_tags_type' => 'Etiquetas :: Tipo de Etiquetas de Foro',
		'IP_forum_tags_type_explain' => 'Puede escoger mostrar una nuve de palabras (tomadas de la tabla de búsqueda) o Etiquetas (tomadas de las etiruqtas especificadas en los temas)',
		'IP_forum_tags_type_tags' => 'Etiquetas',
		'IP_forum_tags_type_wordgraph' => 'Nube de Palabras',

		'Similar_topics' => 'Temas similares',
		'Similar_topics_explain' => 'En esta página puede configurar la búsqueda para temas similares.',

		'IP_similar_topics' => 'Temas similares :: Habilitar temas similares',
		'IP_similar_topics_explain' => 'Esta es la configuración global para los temas similares. Se deseas activar esta característica necesitarás tambien activarla en cada foro en la sección de administración de foros.',

		'IP_similar_topics_desc' => 'Temas similares :: Tener en cuenta la descripción de los temas',

		'IP_similar_stopwords' => 'Temas similares :: Excluir stop-words',

		'IP_similar_max_topics' => 'Temas similares :: Número máximo de temas similares a mostrar',

		'IP_similar_sort_type' => 'Temas similares :: Ordenado por',
		'IP_similar_sort_type_explain' => 'Seleccione el método de ordenación para los temas similares',
		'IP_similar_sort_type_time' => 'Hora de publicación',
		'IP_similar_sort_type_relev' => 'Relevancia',

		'IP_similar_ignore_forums_ids' => 'Temas similares :: Foros ignorados',
		'IP_similar_ignore_forums_ids_explain' => 'Introduzca los IDs de los foros, en el que los temas similares serán ignoradas (por ejemplo: foro de pruebas, foro de charla, etc.). Un ID por línea.',

// TAB - Logging And Security
		'IP_admin_protect' => 'Proteger cuenta del administrador principal',
		'IP_admin_protect_explain' => 'Habilitando esta opción se añadirá mayor seguridad a la cuenta del administrador principal, otros administradores o usuarios no podrán quitarle su rango o calidad de administrador.',

		'IP_ip_admins_only' => 'Mostrar IP a Administradores solo',
        'IP_ip_admins_only_explain' => 'Habiliatndo esta Opcion, solo Adminitradores podran ver los IP en los Foros y Perfiles (deshabilitando esta opcion permitira tambien a los Moderadores ver los IP).',
        
        'IP_db_log_actions' => 'Habilitar log de acciones de la BD',
		'IP_db_log_actions_explain' => 'Habilitando esta opción, cualquier acción que modifique la BD será almacenada en un log en la BD. Si esta opción ha sido marcada como true en el archivo constants.php, entonces no se podrá deshabilitar esta opción desde el ACP. Si se selecciona obtener reportes, entonces se guardaran archivos extra con todos los errores registrados.',

		'IP_mg_log_actions' => 'Habilitar log de acciones TXT',
		'IP_mg_log_actions_explain' => 'Habilitando esta opción, cualquier acción que modifique la BD será almacenada en el servidor en un archivo de texto (el archivo será almacenado en la carpeta de LOGS). Este archivo no es fácil de leer, pero puede ser útil bajo ciertas condiciones. Actívalo solo si sabes lo que estas haciendo (el sitio puede ir mas lento si activas esta opción).',

		'IP_write_errors_log' => 'Habilitar log de errores del sitio',
		'IP_write_errors_log_explain' => 'Habilitando esta opción, todos los errores del sitio (por ejemplo errores 404 de archivos no existentes, peticiones erróneas, etc) serán guardadas en un archivo TXT diario. Recuerda que necesitas habilitar la redirección de los errores hacia errors.php en el .htaccess para usar esta característica (un ejemplo de ello esta incluido en el .htaccess, tan solo inserta tu dominio y quítale los caracteres que dejan estas líneas comentadas).',

		'IP_write_digests_log' => 'Habilitar log de resúmenes',
		'IP_write_digests_log_explain' => 'Habilitando esta opción todos los resúmenes enviados serán almacenados en un archivo TXT diario.',

		'IP_logs_path' => 'Ruta para los logs (recuerda dar permisos CHMOD 0755 o 0777 a esta carpeta)',
		'IP_logs_path_explain' => 'Ingresa la ruta para los logs de errores y otros, recuerda que la ruta es relativa a la raíz e ingresala sin el slash o linea oblicua final. Ejemplo: <b>logs</b>.',

// TAB - Cron
		'IP_cron_global_switch' => 'Activar cron PHP [Configuración global]',
		'IP_cron_global_switch_explain' => 'Habilitando esta opción el Cron PHP será activado : algunas operaciones automáticas serán ejecutadas a intervalos de tiempo determinados. El rango de tiempo óptimo para cada característica cron, depende del tráfico de tu sitio y otras preferencias: si no sabes qué impacto pueden tener estos ajustes, por favor deja desactivada esta opción, pues probablemente no la necesites.',

		'IP_cron_files_interval' => 'Ejecuciones de archivos con intervalo cron',
		'IP_cron_files_interval_explain' => 'Este tipo de cron puede ser usado para ejecutar ciertos archivos de forma automática cada cierto intervalo que tu decidas. Los archivos a ser ejecutados deben ser añadidos en <b>constants.php</b> &raquo; <b>define(\'CRON_FILES\', \'\');</b>. Si indicas mas de un archivo, deben ser separados por comas.<br /><br /><b>última ejecución: ' . (($config['cron_files_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($config['cron_files_last_run']), $config['board_timezone'])) . '</b>',
        'IP_cron_digests_interval' => 'PHP Cron Resumenes',
		'IP_cron_digests_interval_explain' => 'Esta característica permitirá que una emulación de PHP de la CRON trate de enviar resumenes por mensaje de correo electrónico una vez por hora, pero ya que se basa en una emulación de PHP no puede ser ejecutado de forma correcta cada vez. Esto significa que a veces los correos electrónicos no pueden ser enviados. Si usted puede activar el cron en el servidor, por favor seleccione <b> Cron SERVER </ b> y asegúrese de activar manualmente el archivo para permitir que los resumenes se ejecuten a través del servidor.<br /><br /><b>Ultíma ejecucíon: ' . (($config['cron_digests_last_run'] == 0) ? 'NUNCA' : create_date('d M Y  - H.i.s', ($config['cron_digests_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_birthdays_interval' => 'PHP Cron Cumpleaños',
		'IP_cron_birthdays_interval_explain' => 'Esta característica permitirá que una emulación de PHP de la CRON trate de enviar e-mails de felicitación de cumpleaños, pero ya que se basa en una emulación de PHP puede no ser ejecutado de forma correcta cada vez. Esto significa que a veces los correos electrónicos no pueden ser enviados.<br /><br /><b>Ultima Ejecucíon: ' . (($config['cron_birthdays_last_run'] == 0) ? 'NUNCA' : create_date('d M Y  - H.i.s', ($config['cron_birthdays_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_database_interval' => 'Optimización de la BD con intervalo cron',
		'IP_cron_database_interval_explain' => 'Esta característica optimizará la base de datos del sitio en cada intervalo dado.<br /><br /><b>última ejecución: ' . (($config['cron_database_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($config['cron_database_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_cache_interval' => 'Ordenar el caché de plantillas con intervalo cron',
		'IP_cron_cache_interval_explain' => 'El caché de plantillas será limpiado en cada intervalo dado.<br /><br /><b>última ejecución: ' . (($config['cron_cache_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($config['cron_cache_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_sql_interval' => 'Ordenar el caché SQL con intervalo cron',
		'IP_cron_sql_interval_explain' => 'El caché SQL será limpiado en cada intervalo dado.<br /><br /><b>última ejecución: ' . (($config['cron_sql_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($config['cron_sql_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_users_interval' => 'Ordenar el caché de usuarios con intervalo cron',
		'IP_cron_users_interval_explain' => 'El caché de usuarios será limpiado en cada intervalo dado.<br /><br /><b>última ejecución: ' . (($config['cron_users_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($config['cron_users_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_topics_interval' => 'Ordenar el cache de temas con Intervalo Cron',
		'IP_cron_topics_interval_explain' => 'El cache de temas será limpiado en cada intervalo dado.<br /><br /><b>última ejecución: ' . (($config['cron_topics_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($config['cron_topics_last_run']), $config['board_timezone'])) . '</b>',

        'IP_cron_sessions_interval' => 'Limpiar Sessiones via CRON',
		'IP_cron_sessions_interval_explain' => 'Las Tablas de Sessiones seran limpiadas cada intervalo.<br /><br /><b>última ejecución: ' . (($config['cron_sessions_last_run'] == 0) ? 'NUNCA' : create_date('d M Y  - H.i.s', ($config['cron_sessions_last_run']), $config['board_timezone'])) . '</b>',

		'Cron_Disabled' => 'Deshabilitado',
		'15M' => '15 minutos',
		'30M' => '30 minutos',
		'1H' => '1 hora',
		'2H' => '2 horas',
		'3H' => '3 horas',
		'6H' => '6 horas',
		'12H' => '12 horas',
		'1D' => '1 día',
		'3D' => '3 días',
		'7D' => '1 semana',
		'14D' => '2 semanas',
		'30D' => '1 mes',


// lang_extend_settings.php
		'Lang_extend_settings' => 'Idioma de configuración de MODs',
		'Configuration_extend' => 'Configuración avanzada',
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
	'Forum_link' => 'Redirección del enlace',
	'Forum_link_visited' => 'Este enlace ha sido visitado %d veces',

	'Use_sub_forum' => 'Compresión principal',
	'Index_packing_explain' => 'Elija el nivel de compresión que desea para la página principal',
	'Medium' => 'Medio',
	'Full' => 'Completo',
	'Split_categories' => 'Separar categorías en la página principal',
	'Use_last_topic_title' => 'Mostrar títulos de los últimos temas en la página principal',
	'Last_topic_title_length' => 'Longitud de los títulos',
	'Sub_level_links' => 'Sub nivel de enlaces en la página principal',
	'Sub_level_links_explain' => 'Añadir enlaces a los sub niveles del foro o categoría',
	'With_pics' => 'Con iconos',
	'Display_viewonline' => 'Mostrar la información "quién está conectado" en la página principal',
	'Never' => 'Nunca',
	'Root_index_only' => 'Sólo en la página principal',
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
	'Calendar_duration' => 'Duración',

	'Calendar_week_start' => 'Primer día de la semana',
	'Calendar_header_cells' => 'Número de columnas a mostrar en la cabecera (0 para no mostrar ninguna)',
	'Calendar_title_length' => 'Longitud del título mostrado en las celdas',
	'Calendar_text_length' => 'Longitud del texto mostrado en la ventana',
	'Calendar_block_display' => 'Mostrar el cuadro del calendario en el encabezado del foro',
	'Calendar_display_open' => 'Mostrar la columna del calendario al entrar en el principal',
	'Calendar_nb_row' => 'Número de columnas por día',
	'Calendar_birthday' => 'Mostrar cumpleaños en el calendario',
	'Calendar_forum' => 'Mostrar el nombre del foro debajo del título de tema en el calendario',

	'Sorry_auth_cal' => 'Lo siento, pero sólo %s puede poner eventos de calendario en este foro.',
	'Date_error' => 'día %d, mes %d, año %d no es una fecha válida',

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

	'birthday_header' => '¿Feliz cumpleaños!',
	'birthday' => '¿<b>%s</b> cumple años hoy!',
// lang_extend_topic_calendar.php - END

	'DB_LOG_ALL' => 'Si, con reportes de errores',
	)
);

?>