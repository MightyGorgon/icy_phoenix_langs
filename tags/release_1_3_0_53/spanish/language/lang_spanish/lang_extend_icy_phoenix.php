<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_extend_icy_phoenix.php 50 2009-07-22 10:13:03Z Mighty Gorgon $
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
	'10_Main_Settings_Icy_Phoenix' => 'Icy Phoenix',
	'20_SQL_Charge' => 'Optimizaci�n SQL',
	'30_Posting' => 'Escribiendo y mensajes',
	'40_IMG_Posting' => 'Im�genes en mensajes',
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

// TAB - Icy Phoenix
		'IP_enable_xs_version_check' => 'Activar comprobaci�n de versi�n Icy Phoenix',
		'IP_enable_xs_version_check_explain' => 'Activando esta opci�n cada vez que acceda a la ACP se comprobar� si posee la �ltima versi�n disponible de Icy Phoenix para descargar. Desactivando esta opci�n puede accelerar un poco la carga de la ACP. No obstante, la comprobaci�n se har� una vez al d�a y luego permanecer� en el cache.',

		'IP_disable_email_error' => 'Deshabilitar errores al enviar correos',

		'IP_html_email' => 'Correo HTML',
		'IP_html_email_explain' => 'Activando esta opci�n podr� utilizar el formato HTML, de lo contrario, ser� texto simple plano.',

		'IP_enable_digests' => 'Habilitar res�menes',

		'IP_digests_php_cron' => 'Habilitar res�menes PHP cron',
		'IP_digests_php_cron_explain' => 'Esta caracter�stica habilitar� una emulaci�n del cron de PHP intentando enviar los correos una vez por hora, no obstante, como se basa en una emulaci�n de PHP no podr� ser ejecutado correctamente cada vez. Esto significa que a veces los mensajes pueden no ser enviados. Si se puede activar cron en su servidor, use el CRON en vez de esta caracter�stica.',

		'IP_emails_only_to_admins' => 'Correos solo para administradores',
		'IP_emails_only_to_admins_explain' => 'Permite enviar utilizar el sistema de env�o de correos solo para administradores',

		'IP_ajax_features' => 'Habilitar caracter�sticas ajax',
		'IP_ajax_features_explain' => 'Algunas caracter�sticas ajax ser�n integradas en su foro',

		'IP_ajax_checks_register' => 'Comprobaci�n ajax en el registro',
		'IP_ajax_checks_register_explain' => 'Activando esta opci�n, se revisar� en tiempo real que los campos del formulario de registro se completen de forma correcta (atenci�n: esta opci�n puede ralentizar la p�gina de registro).',

		'IP_inactive_users_memberlists' => 'Ver usuarios inactivos en la lista de usuarios y el bloque de cumplea�os',
		'IP_inactive_users_memberlists_explain' => 'Activando esta opci�n los usuarios inactivos se ver�n en la lista de usuarios y el bloque de cumplea�os.',

		'IP_page_gen' => 'Mostrar tiempo de generaci�n de la p�gina en el inferior',

		'IP_switch_header_dropdown' => 'Activar men� desplegable en la cabecera',
		'IP_switch_header_dropdown_explain' => 'Esto activar� un men� desplegable en la cabecera del foro para la b�squeda y los mensajes',

		'IP_show_alpha_bar' => 'Mostrar barra de orden alfab�tico en la vista de foros (Configuraci�n global)',
		'IP_show_alpha_bar_explain' => 'Esta caracter�stica mostrar� una barra de orden alfab�tico de los t�tulos de los temas al inicio de la p�gina de vista de foros. Necesitar�s tambi�n activar esto en cada foro en particular, en la secci�n de administraci�n de foros.',

		'IP_show_rss_forum_icon' => 'Iconos del �ndice del foro',
		'IP_show_rss_forum_icon_explain' => 'Esta opci�n mostrar� iconos a la derecha de cada t�tulo de foro (en el �ndice del foro): RSS, tema nuevo...',

		'IP_allow_mods_view_self' => 'Permitir a TODOS los moderadores ver temas con AUTORIZACI�N LIBRE',
		'IP_allow_mods_view_self_explain' => 'Si un foro se ha establecido con AUTORIZACI�N LIBRE de acceso s�lo a los administradores y moderadores del foro, pueden acceder a estos temas a trav�s de viewforum y viewtopic. Sin embargo, hay muchas caracter�sticas que pueden mostrar el contenido de este tipo de puestos, aunque no est�n autorizados: temas recientes, buscar, bloques de mensajes recientes, bloques de temas aleatorios, etc. Para evitar esto, se ha codificado una caracter�stica, que no permite el acceso a la gente a estos temas a trav�s de v�as secundarias. De cualquier modo se puede permitir que TODOS los moderadores (no s�lo los administradores) puedan ver estos mensajes a trav�s de estas v�as secundarias. Si lo establece como SI, a TODOS los moderadores se les permitir� ver el contenido de estos mensajes a trav�s de: recientes, buscar, temas relacionados con los bloques... Lamentablemente si lo establece en OFF, ni los moderadores AUTORIZADOS podr�n tener AUTORIZACI�N LIBRE a estos temas a trav�s de formas secundarias. La caracter�stica se ha codificado de esta manera para guardar la carga extra de SQL. Si no utiliza foros con AUTORIZACI�N LIBRE, no necesitara esta funci�n.',

		'IP_xmas_fx' => 'Nieve navide�a',
		'IP_xmas_fx_explain' => 'Esta opci�n habilitar� los efectos de nieve.',

		'IP_xmas_gfx' => 'Im�genes navide�as',
		'IP_xmas_gfx_explain' => 'Esta opci�n aplicar� im�genes de navidad al foro.',

		'IP_select_theme' => 'Cambiar estilo',
		'IP_select_theme_explain' => 'Habilitando esta opci�n, se a�adir� una caja de selecci�n con todos los estilos disponibles para un r�pido cambio de estilo.',

		'IP_select_lang' => 'Cambiar idioma',
		'IP_select_lang_explain' => 'Habilitando esta opci�n, se a�adir� un enlace con todos los idiomas disponibles para un r�pido cambio de idioma.',

		'IP_cms_dock' => 'Mostrar barra al estilo de Apple en el CMS',

		'IP_cms_style' => 'Estilo moderno del CMS',
		'IP_cms_style_explain' => 'El Estilo moderno para el CMS consiste en un dise�o moderno con un men� transparente en la cabecera, mientras que el estilo cl�sico tiene un men� lateral',

		'IP_split_ga_ann_sticky' => 'Separar temas por tipo',
		'IP_split_ga_ann_sticky_explain' => 'Desde aqu� puede seleccionar como desea separar los tipos de temas dentro de un foro',
		'IP_split_topic_0' => 'Todos los tipos de temas (sin separar)',
		'IP_split_topic_1' => 'Los anuncios globales, anuncios y notas estar�n juntos, y los temas normales separados',
		'IP_split_topic_2' => 'Los anuncios globales estar�n separados, los anuncios y notas estar�n juntos, y los temas normales separados',
		'IP_split_topic_3' => 'Todos los tipos de temas separados',

// TAB - SQL Charge
		'IP_fast_n_furious' => 'R�pido y furioso',
		'IP_fast_n_furious_explain' => 'Habilitando esta opci�n algunas funciones SQL pesadas ser�n desactivadas. Esperamos que su web vaya mucho mas r�pido!',

		/*
		'IP_db_cron' => 'Optimizar base de datos',
		'IP_db_cron_explain' => 'Habilitando esta opci�n se activar� la optimizaci�n de la base de datos',
		*/

		'IP_site_history' => 'Historial web',
		'IP_site_history_explain' => 'Habilitando esta opci�n se activar� un historial de la web',

		'IP_global_disable_upi2db' => 'Desactivar UPI2DB globalmente',
		'IP_global_disable_upi2db_explain' => 'Esta opci�n te permite desactivar UPI2DB globalmente para ahorrar memoria extra.',

		'IP_enable_own_icons' => '�conos de mensajes propios',
		'IP_enable_own_icons_explain' => 'Habilitando esta opci�n, los �conos de temas que contengan mensajes propios ser�n marcados.',

		'IP_show_forums_online_users' => 'Mostrar usuarios en l�nea en Foros',
		'IP_show_forums_online_users_explain' => 'Esta caracter�stica activa el contador de usuarios en l�nea para cada foro en el �ndice.',

		'IP_google_bot_detector' => 'Habilitar detector de robots de Google',

		'IP_gsearch_guests' => 'Forzar la b�squeda de Google para invitados',

		'IP_visit_counter_switch' => 'Habilitar contador de visitas',

		'IP_enable_new_messages_number' => 'Mostrar n�mero de nuevos mensajes desde la �ltima visita',

		'IP_disable_thanks_topics' => 'Deshabilitar bot�n de gracias viendo temas',

		'IP_show_thanks_profile' => 'Mostrar las Gracias recibidas al ver perfil',

		'IP_show_thanks_viewtopic' => 'Mostrar las Gracias recibidas al leer temas',

		'IP_disable_topic_view' => 'Deshabilitar "Qui�n ha le�do este tema"',
		'IP_disable_topic_view_explain' => 'Esta opci�n permite deshabilitar la caracter�stica "Qui�n ha le�do este tema" (esto ahorrar� espacio SQL).',

		'IP_disable_referrers' => 'Deshabilitar referidos',
		'IP_disable_referrers_explain' => 'Esta opci�n permite deshabilitar la caracter�stica de referidos (esto ahorrar� espacio SQL).',

		'IP_disable_logins' => 'Desactivar la grabaci�n de identificaciones',
		'IP_disable_logins_explain' => 'Habilitando esta opci�n, las identificaciones del usuario no se guardar�n m�s',

		'IP_last_logins_n' => 'N�mero de identificaciones que se guardar�n',

		'IP_index_top_posters' => 'Los que mas escriben :: �ndice de foros',
		'IP_index_top_posters_explain' => 'Habilitando esta opci�n se mostrar�n los que mas escriben en el <b>�ndice de foros</b>.',

		'IP_index_last_msgs' => '�ltimos mensajes :: �ndice de foros',
		'IP_index_last_msgs_explain' => 'Habilitando esta opci�n se mostrar�n los �ltimos mensajes en el <b>�ndice de foros</b>.',

		'IP_online_last_msgs' => '�ltimos mensajes :: Qui�n est� en conectado',
		'IP_online_last_msgs_explain' => 'Habilitando esta opci�n se mostrar�n los �ltimos mensajes en <b>Qui�n est� conectado</b>.',

		'IP_last_msgs_n' => 'N�mero de �ltimos mensajes a mostrar.',

		'IP_last_msgs_x' => 'Excluir foros',
		'IP_last_msgs_x_explain' => 'Por favor, introduzca los IDs de los foros que desea excluir de los marcos de �ltimos mensajes (debe separar cada ID por comas).',

		'IP_show_chat_online' => 'Conectados en el chat ajax :: �ndice de foros',
		'IP_show_chat_online_explain' => 'Habilitando esta opci�n se mostrar� en el <b>�ndice de foros</b> los usuarios conectados en el chat ajax.',

		'IP_index_shoutbox' => 'Cuadro de charla :: �ndice de foros',
		'IP_index_shoutbox_explain' => 'Habilitando esta opci�n activar� un cuadro de charla en el <b>�ndice de foros</b>.',

		'IP_online_shoutbox' => 'Cuadro de charla :: Qui�n est� conectado',
		'IP_online_shoutbox_explain' => 'Habilitando esta opci�n activar� el cuadro de charla en <b>Qui�n est� conectado</b>.',

		'IP_img_shoutbox' => 'Deshabilitar BBCode [img][/img] en el cuadro de charla',
		'IP_img_shoutbox_explain' => 'Habilitando esta opci�n se desactivar� el BBCode [img][/img] en el cuadro de charla.',

		'IP_index_links' => 'Enlaces :: �ndice de foros',
		'IP_index_links_explain' => 'Habilitando esta opci�n se mostrar�n los enlaces en el <b>�ndice de foros</b>.',

		'IP_index_birthday' => 'Cumplea�os :: �ndice de foros',
		'IP_index_birthday_explain' => 'Habilitando esta opci�n se mostrar�n los cumplea�os en el <b>�ndice de foros</b>.',

		'IP_show_random_quote' => 'Citas aleatorias :: �ndice de foros',
		'IP_show_random_quote_explain' => 'Habilitando esta opci�n se mostrar�n citas aleatorias en el <b>�ndice de foros</b>',

// TAB - Posting
		'IP_posts_precompiled' => 'Deshabilitar mensajes precompilados',
		'IP_posts_precompiled_explain' => 'Habilitando esta opci�n en la vista de temas, siempre se compilar�n los mensajes de texto, sin utilizar los mensajes de texto precompilados (	esto es m�s lento, pero puede ser �til en algunos casos).',

		'IP_read_only_forum' => 'Deshabilitar env�o de mensajes en todos los foros (solo lectura)',
		'IP_read_only_forum_explain' => 'Permite bloquear el envi� de mensajes en todos los foros sin cambiar sus permisos. Es �til para periodos de tiempo limitados y que el administrador no tenga que cerrar el foro para modificar los permisos. Los administradores si podr�n enviar mensajes.',

		'IP_allow_drafts' => 'Permitir borradores',
		'IP_allow_drafts_explain' => 'Permite a los usuarios guardar sus mensajes como borradores',

		'IP_allow_mods_edit_admin_posts' => 'Permitir a los moderadores editar los mensajes de administradores',
		'IP_allow_mods_edit_admin_posts_explain' => 'Permite a los moderadores editar los mensajes de los administradores',

		'IP_force_large_caps_mods' => 'Asunto apropiado para los temas',
		'IP_force_large_caps_mods_explain' => 'Los asuntos de los temas ser�n convertidos por un asunto correcto (o apropiado) para todos los usuarios, menos los administradores',

		'IP_show_new_reply_posting' => 'Avisos para nuevas respuestas',
		'IP_show_new_reply_posting_explain' => 'Si habilita esto, se mostrar� un aviso cuando hay una nueva respuesta mientras est� contestando un tema',

		'IP_no_bump' => 'Prohibir bumping (doble posteo) dentro de 24 horas',
		'IP_no_bump_explain' => 'Habilitando esta opci�n, el �ltimo usuario en escribir en un tema, no podr� escribir dentro de 24 horas desde su �ltimo mensaje, hasta que otro usuario deje una respuesta (no se aplica a los admins)',
		'MODS_ALLOWED' => 'Moderadores pueden escribir',

		'IP_show_topic_description' => 'Habilitar Descripci�n de temas',
		'IP_show_topic_description_explain' => 'Habilitando esta opci�n se activar� la Descripci�n del tema, mientras se postea y se navega en los foros',

		'IP_edit_notes' => 'Habilitar notas de edici�n',
		'IP_edit_notes_explain' => 'Habilitando esta opci�n se activar�n las notas de edici�n',

		'IP_edit_notes_n' => 'Notas de edici�n m�ximas',

		'IP_always_show_edit_by' => 'Mostrar siempre avisos de edici�n',
		'IP_always_show_edit_by_explain' => 'Si habilita esta opci�n se mostrar� siempre "�ltima edici�n por..." en la parte inferior de cada mensaje cuando se edite. Con las ediciones de los administradores no se mostrar�',

		'IP_show_social_bookmarks' => 'Marcadores sociales',
		'IP_show_social_bookmarks_explain' => 'Mostrar secci�n de marcadores sociales cuando se miran temas',

		'IP_link_this_topic' => 'Enlazar este tema',
		'IP_link_this_topic_explain' => 'Muestra el bloque de "Enlazar este tema" cuando se leen temas',

		'IP_smilies_topic_title' => 'Emoticonos para t�tulos de temas y descripciones',
		'IP_smilies_topic_title_explain' => 'Habilitando esta opci�n se permitir� poner emoticonos en los t�tulos de temas y descripciones de temas',

		'IP_enable_colorpicker' => 'Habilitar selector de color en la p�gina de escribir mensajes',

		'IP_quote_iterations' => 'N�mero m�ximo de citas anidadas',

		'IP_disable_ftr' => 'Deshabilitar completamente la lectura obligada de tema',
		'IP_disable_ftr_explain' => 'Habilitando esta opci�n se desactivar� completamente la lectura obligada de tema',

		'IP_disable_html_guests' => 'Deshabilitar enlaces HTLM para invitados',

		'IP_birthday_viewtopic' => 'Mostrar edad de los usuarios en los temas',

		'IP_switch_poster_info_topic' => 'Mostrar informaci�n de los usuarios en los temas (lenguaje, estilo, etc.)',

		'IP_enable_quick_quote' => 'Habilitar cita r�pida',
		'IP_enable_quick_quote_explain' => 'La cita r�pida permite a los usuarios citar cualquier mensaje en un tema con un simple clic. Esta caracter�stica utiliza JavaScript.',

		'IP_allow_all_bbcode' => 'Habilitar todos los BBCodes',
		'IP_allow_all_bbcode_explain' => 'Habilitando esta opci�n todos los BBCodes ser�n activados en las firmas y otros sitios donde normalmente no est�n activados. Los BBCodes que por lo general son desactivados en la firma son IMG, ALBUMIMG y algunos mas que consumen recursos excesivos. Si habilita esta opci�n, algunas firmas pueden ocupar mucho espacio y consumir bastantes recursos del servidor.',

		'IP_switch_bbcb_active_content' => 'Permitir BBCode para contenidos activos en los mensajes',
		'IP_switch_bbcb_active_content_explain' => 'Activar� BBCodes para flash, v�deo, audio streams, real media y quicktime.',

// TAB - Images In Posts
		'IP_auth_view_pic_upload' => 'Permisos de subida de im�genes (Im�genes Icy)',

		'IP_enable_postimage_org' => 'Habilitar bot�n subir im�genes en el formulario de mensajes',

		'IP_gd_version' => 'Versi�n GD:',
		'GD_0' => 'No GD',
		'GD_1' => 'GD1',
		'GD_2' => 'GD2',

		'IP_show_img_no_gd' => 'Mostrar miniaturas GIF sin usar las librerias GD (las im�genes grandes se cargan y luego se mostrar� el tama�o).',

		'IP_thumbnail_posts' => 'Miniaturas en mensajes',
		'IP_thumbnail_posts_explain' => 'Con esta opci�n las miniaturas se mostrar�n en lugar de las im�genes completas cuando una imagen es publicada utilizando el BBCode IMG',

		'IP_show_pic_size_on_thumb' => 'Mostrar el tama�o de la imagen de la miniatura',

		'IP_thumbnail_highslide' => 'Utilizar HighSlide si las miniaturas de las  est�n activadas',
		'IP_thumbnail_highslide_explain' => 'Abre la imagen delante de la p�gina actual en lugar de abrirlo en una nueva ventana. Mas acerca de <a href="http://www.highslide.com/" target="_blank">HighSlide JS...</a><br />Aseg�rese de vaciar los mensajes precompilados despu�s de cambiar esta opci�n!',

		'IP_thumbnail_lightbox' => 'Usar efecto Lightbox si las miniaturas est�n activadas',
		'IP_thumbnail_lightbox_explain' => 'Abre la imagen delante de la p�gina actual en lugar de abrirlo en una nueva ventana. Mas acerca de <a href="http://www.huddletogether.com/projects/lightbox/" target="_blank">Lightbox</a><br />Aseg�rese de vaciar los mensajes precompilados despu�s de cambiar esta opci�n!',

		'IP_thumbnail_cache' => 'Cach� de miniaturas',

		'IP_thumbnail_quality' => 'Calidad de miniaturas (1-100)',

		'IP_thumbnail_size' => 'Tama�o de miniaturas (en p�xels)',

// TAB - Forum
		'Lang_extend_categories_hierarchy' => 'Jerarqu�a de categor�as',

		'Category_attachment' => 'Adjunto a',
		'Category_desc' => 'Descripci�n',
		'Category_config_error_fixed' => 'Se ha reparado un error en la configuraci�n de categor�as',
		'Attach_forum_wrong' => 'No puede adjuntar un foro a otro foro',
		'Attach_root_wrong' => 'No puede adjuntar un foro a la p�gina principal de un foro',
		'Forum_name_missing' => 'No puede crear un foro sin nombre',
		'Category_name_missing' => 'No puede crear una categor�a sin nombre',
		'Only_forum_for_topics' => 'Los temas s�lo pueden estar ubicados en foros',
		'Delete_forum_with_attachment_denied' => 'No puede borrar foros que contengan sub-niveles',

		'Category_delete' => 'Borrar categor�a',
		'Category_delete_explain' => 'El siguiente formulario le permitir� borrar una categor�a y decidir d�nde quiere ubicar los foros y categorias que contenga.',

// forum links type
		'Forum_link_url' => 'Enlace URL',
		'Forum_link_url_explain' => 'Aqu� puede establecer un enlace a un programa phpBB o a un servidor externo',
		'Forum_link_internal' => 'Programa phpBB',
		'Forum_link_internal_explain' => 'Elija "s�" si desea invocar un programa que se encuentre dentro de los directorios phpBB',
		'Forum_link_hit_count' => 'Contador de clicks',
		'Forum_link_hit_count_explain' => 'Elija "s�" si desea que el foro muestre y cuente el n�mero de clics de este enlace',
		'Forum_link_with_attachment_deny' => 'No puede establecer un foro como un enlace si ya tiene sub niveles',
		'Forum_link_with_topics_deny' => 'No puede establecer un foro como un enlace si ya hay temas en �l',
		'Forum_attached_to_link_denied' => 'No puede adjuntar un foro o categor�a a un enlace de un foro',

		'Manage_extend' => 'Configuraci�n avanzada',
		'No_subforums' => 'Sin subforos',
		'Forum_type' => 'Elija el tipo de foro que desea',
		'Presets' => 'Preselecciones',
		'Refresh' => 'Refrescar',
		'Position_after' => 'Posicionar este foro despu�s de',
		'Link_missing' => 'Enlace perdido',
		'Category_with_topics_deny' => 'El tema permanece en este foro. No puede cambiarlo a una categor�a.',
		'Recursive_attachment' => 'No puede adjuntar un foro al nivel m�s bajo de su propia rama (recursive attachment)',
		'Forum_with_attachment_denied' => 'No puede cambiar una categor�a con foros adjuntos a un foro',
		'icon' => 'Icono',
		'icon_explain' => 'Este icono se mostrar� en el t�tulo del foro. Puede establecer aqu� un enlace URL o una entrada $image[] (see <i>your_template</i>/<i>your_template</i>.cfg).',

// TAB - Calendar
		'Lang_extend_topic_calendar' => 'Calendario en tema',

// TAB - SEO
		'IP_url_rw' => 'URL rewrite',
		'IP_url_rw_explain' => 'Habilitando esta opci�n el URL rewrite se activar� (se utilizar�n enlaces HTML en lugar de PHP, para una mejor indexaci�n de los motores de b�squeda) para todos.',

		'IP_url_rw_guests' => 'URL rewrite para invitados',
		'IP_url_rw_guests_explain' => 'Habilitando esta opci�n el URL rewrite se activar� solo para invitados y robots de b�squeda.',

		'IP_bots_reg_auth' => 'Nivel de permisos REG para Bots',
		'IP_bots_reg_auth_explain' => 'Habilitando esta opci�n los Bots tendr�n el mismo nivel de acceso que los usuarios registrados.',

		'IP_lofi_bots' => 'LoFi para buscadores',
		'IP_lofi_bots_explain' => 'Habilitando esta opci�n el sistema LoFi se activar� para robots de b�squeda.',

		'IP_adsense_code' => 'C�digo Google AdSense',
		'IP_adsense_code_explain' => 'Introduzca aqu� su c�digo de Google AdSense y se insertar� en las p�ginas de Google Search. Sino desea usarlo, solo debe dejar este campo en blanco.',

		'IP_google_analytics' => 'C�digo Google Analytics',
		'IP_google_analytics_explain' => 'Introduzca aqu� su c�digo de Google Analytics (el Javascript proporcionado por la web de Google) y ser� insertado autom�ticamente en el inferior de todas las p�ginas.',

//Sitemap
		'Sitemap_settings' => 'Configuracion del sitemap',

		'IP_sitemap_topic_limit' => 'Google sitemap :: L�mite de temas',
		'IP_sitemap_topic_limit_explain' => 'N�mero m�ximo de temas para ir a buscar con una sola consulta a la base de datos',

		'IP_sitemap_announce_priority' => 'Google sitemap :: Prioridad para anuncios',
		'IP_sitemap_announce_priority_explain' => 'Prioridad para los temas fijados como anuncios (debe ser un n�mero entre 0.0 &amp; 1.0 incluidos)',

		'IP_sitemap_sticky_priority' => 'Google sitemap :: Prioridad para notas',
		'IP_sitemap_sticky_priority_explain' => 'Prioridad para los temas fijados como notas (debe ser un n�mero entre 0.0 y 1.0 incluidos)',

		'IP_sitemap_default_priority' => 'Google sitemap :: Prioridad por defecto',
		'IP_sitemap_default_priority_explain' => 'Prioridad para temas normales (debe ser un n�mero entre 0.0 y 1.0 incluidos)',

		'IP_sitemap_sort' => 'Google sitemap :: Ordenaci�n',
		'IP_sitemap_new_first' => 'Mensajes nuevos primero',
		'IP_sitemap_old_first' => 'Mensajes viejos primero',

		'Word_graph' => 'TAGS',

		'IP_word_graph_max_words' => 'TAGS :: M�ximo de palabras',
		'IP_word_graph_max_words_explain' => 'Seleccione el n�mero m�ximo de palabras a mostrar. Un n�mero muy elevado afectar� a la carga del servidor. Lo recomendado es 250.',

		'IP_word_graph_word_counts' => 'TAGS :: Habilitar contador de palabras',
		'IP_word_graph_word_counts_explain' => 'Mostrar� al lado de cada palabra el n�mero de veces que sale en el foro. Por ejemplo <b>Icy Phoenix (365)</b>?',

		'IP_forum_wordgraph' => 'TAGS :: Tags en foros',
		'IP_forum_wordgraph_explain' => 'Esta caracter�stica activar� una tabla con las palabras mas usadas en el inferior de cada foro',

		'Similar_topics' => 'Temas parecidos',
		'Similar_topics_explain' => 'En esta p�gina puede configurar la b�squeda para temas parecidos.',

		'IP_similar_topics' => 'Temas parecidos :: Habilitar temas parecidos',
		'IP_similar_topics_explain' => 'Esta es la configuraci�n global para los temas similares. Se deseas activar esta caracter�stica necesitar�s tambien activarla en cada foro en la secci�n de administraci�n de foros.',

		'IP_similar_topics_desc' => 'Temas parecidos :: Tener en cuenta la descripci�n de los temas',

		'IP_similar_stopwords' => 'Temas parecidos :: Excluir stop-words',

		'IP_similar_max_topics' => 'Temas parecidos :: N�mero m�ximo de temas parecidos a mostrar',

		'IP_similar_sort_type' => 'Temas parecidos :: Ordenado por',
		'IP_similar_sort_type_explain' => 'Seleccione el m�todo de ordenaci�n para los temas parecidos',
		'IP_similar_sort_type_time' => 'Hora de publicaci�n',
		'IP_similar_sort_type_relev' => 'Relevancia',

		'IP_similar_ignore_forums_ids' => 'Temas parecidos :: Foros ignorados',
		'IP_similar_ignore_forums_ids_explain' => 'Introduzca los IDs de los foros, en el que los temas parecidos ser�n ignoradas (por ejemplo: foro de pruebas, foro de charla, etc.). Un ID por l�nea.',

// TAB - Logging And Security
		'IP_admin_protect' => 'Proteger cuenta del administrador principal',
		'IP_admin_protect_explain' => 'Habilitando esta opci�n se a�adir� mayor seguridad a la cuenta del administrador principal, otros administradores o usuarios no podr�n quitarle su rango o calidad de administrador.',

		'IP_db_log_actions' => 'Habilitar log de acciones de la BD',
		'IP_db_log_actions_explain' => 'Habilitando esta opci�n, cualquier acci�n que modifique la BD ser� almacenada en un log en la BD. Si esta opci�n ha sido marcada como true en el archivo constants.php, entonces no se podr� deshabilitar esta opci�n desde el ACP. Si se selecciona obtener reportes, entonces se guardaran archivos extra con todos los errores registrados.',

		'IP_mg_log_actions' => 'Habilitar log de acciones TXT',
		'IP_mg_log_actions_explain' => 'Habilitando esta opci�n, cualquier acci�n que modifique la BD ser� almacenada en el servidor en un archivo de texto (el archivo ser� almacenado en la carpeta de LOGS). Este archivo no es f�cil de leer, pero puede ser �til bajo ciertas condiciones. Act�valo solo si sabes lo que estas haciendo (el sitio puede ir mas lento si activas esta opci�n).',

		'IP_write_errors_log' => 'Habilitar log de errores del sitio',
		'IP_write_errors_log_explain' => 'Habilitando esta opci�n, todos los errores del sitio (por ejemplo errores 404 de archivos no existentes, peticiones err�neas, etc) ser�n guardadas en un archivo TXT diario. Recuerda que necesitas habilitar la redirecci�n de los errores hacia errors.php en el .htaccess para usar esta caracter�stica (un ejemplo de ello esta incluido en el .htaccess, tan solo inserta tu dominio y qu�tale los caracteres que dejan estas l�neas comentadas).',

		'IP_write_digests_log' => 'Habilitar log de res�menes',
		'IP_write_digests_log_explain' => 'Habilitando esta opci�n todos los res�menes enviados ser�n almacenados en un archivo TXT diario.',

		'IP_logs_path' => 'Ruta para los logs (recuerda dar permisos CHMOD 0755 o 0777 a esta carpeta)',
		'IP_logs_path_explain' => 'Ingresa la ruta para los logs de errores y otros, recuerda que la ruta es relativa a la ra�z e ingresala sin el slash o linea oblicua final. Ejemplo: <b>logs</b>.',

// TAB - Cron
		'IP_cron_global_switch' => 'Activar cron PHP [Configuraci�n global]',
		'IP_cron_global_switch_explain' => 'Habilitando esta opci�n el Cron PHP ser� activado : algunas operaciones autom�ticas ser�n ejecutadas a intervalos de tiempo determinados. El rango de tiempo �ptimo para cada caracter�stica cron, depende del tr�fico de tu sitio y otras preferencias: si no sabes qu� impacto pueden tener estos ajustes, por favor deja desactivada esta opci�n, pues probablemente no la necesites.',

		'IP_cron_files_interval' => 'Ejecuciones de archivos con intervalo cron',
		'IP_cron_files_interval_explain' => 'Este tipo de cron puede ser usado para ejecutar ciertos archivos de forma autom�tica cada cierto intervalo que tu decidas. Los archivos a ser ejecutados deben ser a�adidos en <b>constants.php</b> &raquo; <b>define(\'CRON_FILES\', \'\');</b>. Si indicas mas de un archivo, deben ser separados por comas.<br /><br /><b>�ltima ejecuci�n: ' . (($board_config['cron_files_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($board_config['cron_files_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_database_interval' => 'Optimizaci�n de la BD con intervalo cron',
		'IP_cron_database_interval_explain' => 'Esta caracter�stica optimizar� la base de datos del sitio en cada intervalo dado.<br /><br /><b>�ltima ejecuci�n: ' . (($board_config['cron_database_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($board_config['cron_database_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_cache_interval' => 'Ordenar el cach� de plantillas con intervalo cron',
		'IP_cron_cache_interval_explain' => 'El cach� de plantillas ser� limpiado en cada intervalo dado.<br /><br /><b>�ltima ejecuci�n: ' . (($board_config['cron_cache_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($board_config['cron_cache_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_sql_interval' => 'Ordenar el cach� SQL con intervalo cron',
		'IP_cron_sql_interval_explain' => 'El cach� SQL ser� limpiado en cada intervalo dado.<br /><br /><b>�ltima ejecuci�n: ' . (($board_config['cron_sql_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($board_config['cron_sql_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_users_interval' => 'Ordenar el cach� de usuarios con intervalo cron',
		'IP_cron_users_interval_explain' => 'El cach� de usuarios ser� limpiado en cada intervalo dado.<br /><br /><b>�ltima ejecuci�n: ' . (($board_config['cron_users_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($board_config['cron_users_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_topics_interval' => 'Ordenar el cache de temas con Intervalo Cron',
		'IP_cron_topics_interval_explain' => 'El cache de temas ser� limpiado en cada intervalo dado.<br /><br /><b>�ltima ejecuci�n: ' . (($board_config['cron_topics_last_run'] == 0) ? 'NUNCA' : create_date('d M Y H:i:s', ($board_config['cron_topics_last_run']), $board_config['board_timezone'])) . '</b>',

		'Cron_Disabled' => 'Deshabilitado',
		'15M' => '15 minutos',
		'30M' => '30 minutos',
		'1H' => '1 hora',
		'2H' => '2 horas',
		'3H' => '3 horas',
		'6H' => '6 horas',
		'12H' => '12 horas',
		'1D' => '1 d�a',
		'3D' => '3 d�as',
		'7D' => '1 semana',
		'14D' => '2 semanas',
		'30D' => '1 mes',


// lang_extend_mods_settings.php
		'Lang_extend_mods_settings' => 'Idioma de configuraci�n de MODs',
		'Configuration_extend' => 'Configuraci�n avanzada',
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
	'Forum_link' => 'Redirecci�n del enlace',
	'Forum_link_visited' => 'Este enlace ha sido visitado %d veces',

	'Use_sub_forum' => 'Compresi�n principal',
	'Index_packing_explain' => 'Elija el nivel de compresi�n que desea para la p�gina principal',
	'Medium' => 'Medio',
	'Full' => 'Completo',
	'Split_categories' => 'Separar categor�as en la p�gina principal',
	'Use_last_topic_title' => 'Mostrar t�tulos de los �ltimos temas en la p�gina principal',
	'Last_topic_title_length' => 'Longitud de los t�tulos',
	'Sub_level_links' => 'Sub nivel de enlaces en la p�gina principal',
	'Sub_level_links_explain' => 'A�adir enlaces a los sub niveles del foro o categor�a',
	'With_pics' => 'Con iconos',
	'Display_viewonline' => 'Mostrar la informaci�n "qui�n est� conectado" en la p�gina principal',
	'Never' => 'Nunca',
	'Root_index_only' => 'S�lo en la p�gina principal',
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
	'Calendar_duration' => 'Duraci�n',

	'Calendar_week_start' => 'Primer d�a de la semana',
	'Calendar_header_cells' => 'N�mero de columnas a mostrar en la cabecera (0 para no mostrar ninguna)',
	'Calendar_title_length' => 'Longitud del t�tulo mostrado en las celdas',
	'Calendar_text_length' => 'Longitud del texto mostrado en la ventana',
	'Calendar_block_display' => 'Mostrar el cuadro del calendario en el encabezado del foro',
	'Calendar_display_open' => 'Mostrar la columna del calendario al entrar en el principal',
	'Calendar_nb_row' => 'N�mero de columnas por d�a',
	'Calendar_birthday' => 'Mostrar cumplea�os en el calendario',
	'Calendar_forum' => 'Mostrar el nombre del foro debajo del t�tulo de tema en el calendario',

	'Sorry_auth_cal' => 'Lo siento, pero s�lo %s puede poner eventos de calendario en este foro.',
	'Date_error' => 'd�a %d, mes %d, a�o %d no es una fecha v�lida',

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

	'birthday_header' => '�Feliz cumplea�os!',
	'birthday' => '�<b>%s</b> cumple a�os hoy!',
// lang_extend_topic_calendar.php - END

	'DB_LOG_ALL' => 'Si, con reportes de errores',
	)
);

?>