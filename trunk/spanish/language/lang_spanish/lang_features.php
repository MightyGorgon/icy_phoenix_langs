<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/*
Example for categories
$lang['cat_YOUR_CAT_NAME'] = 'YOUR_CAT_DESCRIPTION';

Example for items
$lang['item_YOUR_ITEM_NAME'] = 'YOUR_ITEM_DESCRIPTION';
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
	'FEATURES' => 'Características',
	'PHPBB2' => 'phpBB2',
	'ICYPHOENIX' => 'Icy Phoenix',
	'PHPBB3' => 'phpBB3',
	'PHPBB_FEATURES_PAGE' => 'Características de phpBB en la web oficial de phpBB [ <a href="http://www.phpbb.com/about/features/">LINK</a> ]',

/*********/
	'cat_general' => 'General',

	'item_license' => 'Licencia',
	'bb2_license' => 'GPL',
	'ip_license' => 'GPL',
	'bb3_license' => 'GPL',

	'item_price' => 'Precio de la licencia',
	'bb2_price' => 'Gratís',
	'ip_price' => 'Gratís',
	'bb3_price' => 'Gratís',

	'item_programming' => 'Lenguaje de programación',
	'bb2_programming' => 'PHP',
	'ip_programming' => 'PHP',
	'bb3_programming' => 'PHP',

	'item_latest' => 'Versión más reciente',
	'bb2_latest' => '2.0.22',
	'ip_latest' => '1.2.0.27',
	'bb3_latest' => '3.0.2',

	'item_release' => 'Fecha de la versión',
	'bb2_release' => '17/02/2008',
	'ip_release' => '03/03/2008',
	'bb3_release' => '10/07/2008',

/*********/
	'cat_basic_features' => 'Características básicas',

	'item_utf8' => 'Soporta UTF-8',
	'item_user_preferences' => 'Preferencias de usuario',
	'item_mod' => 'Moderación',
	'item_admin' => 'Administración',
	'item_search_engine' => 'Motor de búsqueda tipo araña',
	'item_un_mess_track' => 'Seguimiento de mensajes no leídos',
	'item_pms' => 'Sistema del mensaje privado',
	'item_stat' => 'Estadísticas',

/*********/
	'cat_security' => 'Seguridad',

	'item_perm_ban' => 'Prohibición permanente',
	'item_temp_ban' => 'Prohibición temporal (Suspensión)',
	'item_permission' => 'Permisos',
	'item_paid_sec' => 'Código de seguridad pagado auditoría',
	'item_form_hand' => 'Forma de manipulación',
	'item_t_a_p_h' => 'Parámetros del tipo de manipulación',
	'item_t_a_d_l' => 'Tipo de base de datos',
	'item_p_h' => 'Encriptación de contraseña',

/*********/
	'cat_antispam' => 'Anti-spam',

	'item_c_v_c' => 'CAPTCHA confirmación visual',
	'item_f_c' => 'Control de inundaciones',
	'item_groups' => 'Grupos',
	'item_acls' => 'ACLs',
	'item_b_l' => 'Lista negra',
	'item_banning' => 'Baneando',
	'item_suspension' => 'Suspensiones',
	'item_warn' => 'Advertencias',
	'item_u_l' => 'Registro de usuarios',
	'item_u_p_ip_l' => 'Publicar IP del usuario',
	'item_r_p' => 'Informe de mensajes',
	'item_post_m' => 'Publicar moderación',

/*********/
	'cat_datamanagement' => 'Gestión de datos',

	'item_mysql' => 'MySQL',
	'item_mssql' => 'MSSQL servidor',
	'item_mssql_odbc' => 'MSSQL ODBC',
	'item_postgre' => 'PostgreSQL',
	'item_ms_access' => 'MS Acceso',
	'item_oracle' => 'Oracle',
	'item_firebird' => 'Firebird',
	'item_sql_lite' => 'SQL_Lite',
	'item_db_back' => 'Copias de seguridad (DBMS) Base de datos',
	'item_db_restore' => 'Restaurar (DBMS) Base de datos',
	'item_p_t_pruning' => 'Publicar tema con caducidad',

/*********/
	'cat_registration' => 'Registro',

	'item_coppa' => 'Registros COPPA',
	'item_l_r_a' => 'Límite de intentos de registro',
	'item_username_lenght' => 'Establecer min / max longitud del nombre de usuario',
	'item_pass_lenght' => 'Establecer min / max longitud de la contraseña',
	'item_l_u_c' => 'Nombre de usuario límite de Chars',
	'item_s_p_c_r' => 'Requisitos de complejidad de la contraseña',
	'item_f_p_c' => 'Forzar el Cambio de contraseña',
	'item_e_mail_address_reusage' => 'Permitir/no permitir reutilizar e-mail',

/*********/
	'cat_posting' => 'Escribiendo',

	'item_t_d_m' => 'Tema mostrar método',
	'bb2_t_d_m' => 'Llano',
	'ip_t_d_m' => 'Llano',
	'bb3_t_d_m' => 'Llano',

	'item_bbcode' => 'BBCode',
	'item_bbcode_custom' => 'Botones personalizados BBCode',
	'item_html_in_post' => 'HTML en mensajes',
	'item_emoticon' => 'Smilies / Emoticonos',
	'item_quoting' => 'Citando',
	'item_q_m_p' => 'Citar múltiples mensajes',
	'item_f_t' => 'Formato de la barra de herramientas',
	'item_w_c' => 'Censores de palabras',
	'item_s_h' => 'Resaltar sintaxis',
	'item_attachments' => 'Adjuntos',
	'item_p_d' => 'Publicar borradores',
	'item_polls' => 'Encuestas',
	'item_m_p_o_v' => 'Opción de voto múltiple en encuesta',
	'item_u_b_p_t' => 'Encuesta basada en el seguimiento del usuario',
	'item_all_dis_v_c' => 'Permitir/no permitir cambiar el voto',
	'item_beaten_p_review' => 'Envío en espera de examen',
	'item_p_p' => 'Vista previa del mensaje',
	'item_flood_control' => 'Flood Control',

/*********/
	'cat_attachments' => 'Adjuntos',

	'item_a_i_t' => 'Miniaturas automáticas',
	'item_a_t' => 'Tipos de archivo adjunto',
	'item_m_a' => 'Múltiples adjuntos',
	'item_a_p' => 'Colocación de adjuntos',

/*********/
	'cat_caching' => 'Cache',

	'item_db_q_c' => 'Consulta base de datos de almacenamiento en caché',
	'item_t_c' => 'Cache del template',
	'item_a_d' => 'Datos arbitrarios',
	'item_m_c_r' => 'Manual del refresco de cache',

/*********/
	'cat_profile' => 'Perfil/usuarios',

	'item_c_p_f' => 'Perfil campos personalizados',
	'item_u_p_s' => 'Estadísticas de envío de usuario',
	'item_u_i_m' => 'Usuario de messenger',
	'item_u_p_d' => 'Detalles del perfil del usuario',
	'item_m_list_search' => 'Búsqueda de usuarios',
	'item_u_m_v' => 'No permitir ver usuarios (registrados) a invitados (no registrados)',

/*********/
	'cat_search_system' => 'Sistema de búsqueda',

	'item_ft_n' => 'Fulltext nativo',
	'item_c_t_s' => 'Tema de búsqueda personalizada',
	'item_c_f_s' => 'Foro de Búsqueda personalizada',
	'item_my_sql_text' => 'MySQL fulltext',
	'item_a_s' => 'Buscar autor',
	'item_a_search' => 'Búsqueda avanzada',
	'item_v_a_post' => 'Ver mensajes sin respuesta',
	'item_a_n_t' => 'Activo/nuevos temas',
	'item_p_s_l_v' => 'Mensajes desde la última visita',
	'item_s_f_l' => 'Búsqueda de control de flood',

/*********/
	'cat_forums' => 'Foros',

	'item_categories' => 'Categorias',
	'item_p_p_f' => 'Contraseña de foros',
	'item_f_s_s' => 'Estilo especifico del foro',
	'item_url_l_r_f' => 'URL enlace a foros',
	'item_f_rules' => 'Reglas de los foros',
	'item_subforum' => 'Subforos',
	'item_last_post' => 'Ultimo mensaje',
	'item_forum_pruning' => 'Pruning del foro',
	'item_d_a_t' => 'Mostrar temas activos',
	'item_s_t_forums' => 'Suscribirse a foros',
	'item_s_t_topics' => 'Subscribirese a temas',
	'item_b_t' => 'Temas favoritos',
	'item_t_s' => 'Clasificación del tema',
	'item_p_s' => 'Publicar clasificación',
	'item_t_p_t' => 'Tema de seguimiento de participación',
	'item_print_t' => 'Imprimir temas',
	'item_e_mail_t' => 'E-mail temas',

/*********/
	'cat_ucp' => 'Panel de control',

	'item_u_s' => 'Firmas usuario',
	'item_u_a' => 'Avatar usuario',
	'item_u_ranks' => 'Rangos de usuarios',
	'item_u_o_l' => 'Lista de usuarios en línea',
	'item_user_p' => 'Preferencias del usuario',
	'item_u_p_s' => 'Configuración del perfil de usuario',
	'item_m_s_pm_post_d' => 'Administrar PM guardados/borradores de temas',
	'item_m_book' => 'Administrar marcadores',
	'item_m_attach' => 'Gestión de archivos adjuntos',
	'item_m_s_t' => 'Temas de gestión de suscripciones',
	'item_c_p_f' => 'Perfil campos personalizados',
	'item_friend_foe_list' => 'Amigos/enemigos',

/*********/
	'cat_priv_messaging' => 'Mensajes privados',

	'item_add_pm_folder' => 'Carpetas adicionales de MPs',
	'item_custom_pm_filter' => 'Reglas del filtro personalizable PM',
	'item_send_multiple_reci' => 'Enviar a varios destinatarios',
	'item_send_blind_carbon' => 'Enviar copias de borradores',
	'item_send_to_group' => 'Enviar a grupos',
	'item_f_message' => 'Reenviar mensajes',
	'item_a_book' => 'Libreta de direcciones',
	'item_message_d' => 'Borradores de mensajes',
	'item_exp_mess' => 'Mensajes de exportación',
	'item_attach_message' => 'Archivos adjuntos de mensajes',
	'item_convers_view' => 'Vista de conversación',
	'item_c_m_h_r' => 'Mensaje personalizado de manejo de reglas',

/*********/
	'cat_usergroups' => 'Grupos de usuarios',

	'item_g_t' => 'Tipos de grupo',
	'item_ucp_group_manage' => 'Grupo de gestión de UCP',
	'item_ucp_group_manage_membership' => 'Grupo de gestión de asociaciones RUU',
	'item_m_g_l' => 'Líderes de grupo múltiple',
	'item_c_g_c' => 'Grupo colores personalizados',
	'item_group_ranks' => 'Ranking de grupo',
	'item_group_avatar' => 'Grupo de avatares',
	'item_group_based_memberlist' => 'Grupo de usuarios de pantalla',

/*********/
	'cat_mcp' => 'Moderación del panel de control',

	'item_global_moder' => 'Moderadores globales',
	'item_forum_moder' => 'Moderadores del Foro',
	'item_t_post_m_q' => 'Temas / Moderación de mensajes en espera',
	'item_m_r_t_p' => 'Reportar temas / mensajes',
	'item_t_h' => 'Historia del tema',
	'item_f_t_logs' => 'Foro / tema registros',
	'item_l_m_l' => 'Registros localizados de moderador',
	'item_p_e' => 'Publicar edición',
	'item_p_l' => 'Mensaje bloqueado',
	'item_post_details' => 'Detalles del mensaje',
	'item_c_p_author' => 'Cambiar autor del mensaje',
	'item_quick_mod_tools' => 'Herramientas Quick_Mod',
	'item_moving_t' => 'Mover tema',
	'item_m_m_t' => 'Mover multiples temas',
	'item_merging_t' => 'Fusionar tema',
	'item_merging_p' => 'Fusionar mensajes',
	'item_merging_multiple_t' => 'Fusionar multiples temas',
	'item_split_t' => 'Separar temas',
	'item_locking_t' => 'Bloquear tema',
	'item_deleting_t' => 'Borrar tema',
	'item_copying_t' => 'Copiar tema',
	'item_global_topics' => 'Nota',
	'item_announcement_t' => 'Anuncio',
	'item_s_topics' => 'Unir tema',
	'item_mange_bans' => 'Gestión de las prohibiciones',
	'item_m_u_w' => 'Administrar advertencias',
	'item_banning_by_username' => 'Banear usuario',
	'item_banning_by_email' => 'Banear direccion e-mail',
	'item_banning_by_ip' => 'Banear direccion IP',
	'item_user_notes' => 'Notas de usuario',

/*********/
	'cat_acp' => 'Administración del panel de control',

	'item_f_s_b_c' => 'Aministrador/webmaster',
	'item_l_s' => 'Cargar ajustes',
	'item_p_i_u' => 'Eliminar los usuarios inactivos',
	'item_m_r' => 'Gestion de rangos',
	'item_m_groups' => 'Gestion de grupos',
	'item_m_group_membership' => 'Gestion de usuarios',
	'item_manage_attach_setting' => 'Configuración y gestión de archivos adjuntos',
	'item_manage_user_attachment' => 'Gestión de archivos adjuntos de usuario',
	'item_user_editing' => 'Edición de usuarios',
	'item_list_group_index' => 'Lista de grupos en el indice',
	'item_topic_icons' => 'Icono de tema',
	'item_mass_e_mail' => 'Mass e-mail',
	'item_manage_report_reasons' => 'Informe de gestión de / Motivos de denegación',
	'item_module_manage' => 'Módulo de gestión',
	'item_custom_bbcode' => 'BBCodes personalizados',
	'item_custom_profile_field' => 'Perfil campos personalizados',
	'item_custom_profile_field_placement' => 'Opciones de colocación de los campos personalizados',
	'item_custom_profile_data_types' => 'Opciones de tipo de campos personalizados',
	'item_manage_bans' => 'Gestión de las prohibiciones',
	'item_ban_by_username' => 'Prohibición de usuario',
	'item_ban_by_email' => 'Prohibición de direccion E-mail',
	'item_ban_by_ip' => 'Prohibición de direccion IP',

/*********/
	'cat_styles' => 'Estilos',

	'item_s_style' => 'Seleccionar estilo',
	'item_install_style' => 'Instalar / Administrar estilos personalizados',
	'item_custom_style' => 'Personalizar / Editar templates',
	'item_custom_themes' => 'Personalizar / Editar temas',
	'item_custom_imageset' => 'Personalizar / Editar imagenes',

/*********/
	'cat_permission' => 'Permisos',

	'item_g_b_g_p' => 'Permisos de grupo de moderadores globales',
	'item_g_b_m_p' => 'Permisos de grupo de moderadores',
	'item_g_b_a_p' => 'Permisos de grupo de administradores',
	'item_g_b_f_p' => 'Permisos de grupo de foros',
	'item_u_b_g_p' => 'Permisos de usuarios globales',
	'item_u_b_m_p' => 'Permisos de moderadores',
	'item_u_b_a_p' => 'Permisos de administradores',
	'item_u_b_f_p' => 'Permisos de foros',
	'item_admin_perm_roles' => 'Roles de administradores',
	'item_user_perm_roles' => 'Roles de usarios',
	'item_mod_perm_roles' => 'Roles de moderadores',
	'item_forum_perm_roles' => 'Roles de foros',
	'item_mask_perm_multi' => 'Máscaras de permisos multi-nivel',

/*********/
	'cat_notifications' => 'Notificaciones',

	'item_e_mail_true' => 'E-mail',
	'item_instant_mess' => 'mensaje instantaneo',
	'item_book_m' => 'Marcadores',

/*********/
	'cat_localisations' => 'Localizaciones',

	'item_s_m_l_p' => 'Soporte para múltiples paquetes de idioma',
	'item_language' => 'Lenguages',
	'bb2_language' => '50+',
	'ip_language' => '6',
	'bb3_language' => '61',
	'item_right_t_left' => 'De derecha a izquierda',
	'item_l_p_w_edit' => 'Editor web de lenguaje',

/*********/
	'cat_install' => 'Instalaciones /actualizaciones',

	'item_install_wizard' => 'Instalacion wizard',
	'item_update_wizard' => 'Actualizacion wizard',
	'item_converter_wizard' => 'Convertidor wizard',
	'item_file_merge_diff_engine' => 'Combinar el archivo de actualización del motor de diferencias',

/*********/
	'cat_technical' => 'Características técnicas',

	'item_cms_integra' => 'CMS software Integracion',
	'item_xhtml_compliant' => 'XHTML Compatible',

/*********/
	'cat_plugins' => 'Plugins',

	'item_auth_plug' => 'Adjuntar plugins',
	'item_search_plug' => 'Buscar plugins',
	'item_cache_plug' => 'Cache plugins',
	'item_hooks_sys' => 'Sistema gancho',
	'item_expand_module' => 'Modulos explandibles',

/*********/
	'cat_features' => 'Características adicionales',

	'item_feat_cms' => 'CMS',
	'item_feat_album' => 'Galeria de fotos',
	'item_feat_downloads' => 'Sistema de descargas',
	'item_feat_kb' => 'Biblioteca',
	'item_feat_links' => 'Sistema de enlaces',
	'item_feat_news' => 'Nuevas categorias',
	'item_feat_stats' => 'Módulo de estadísticas',
	'item_feat_contact_us' => 'Formulario de contacto',
	'item_feat_lofi' => 'Ver LoFi',
	'item_feat_ajax_shoutbox' => 'Chat ajax',
	'item_feat_shoutbox' => 'Cuadro de charla estándar',
	'item_feat_calendar' => 'Sistema del calendario de eventos',
	'item_feat_pm_notifications' => 'MP de nuevos registrados y cumpleaños',

/*********/
	'cat_features_acp' => 'Características adicionales ACP',

	'item_feat_info' => 'Informacion del servidor en ACP',
	'item_feat_db_mntnc' => 'Mantenimiento de la base de datos',
	'item_feat_mysqladmin' => 'Admin MySQL',
	'item_feat_editable_f_r' => 'Multilenguage editable de FAQs y normas',
	'item_feat_multiple_ranks' => 'Multiples rangos',

/*********/
	'cat_features_ucp' => 'Características adicionales UCP',

	'item_feat_ajax_checks' => 'AJAX Controles sobre el registro',
	'item_feat_upi2db' => 'Mensajes no leídos en DB',
	'item_feat_custom_avatar' => 'Creación personalizada avatar',
	'item_feat_profile_stats' => 'Estadísticas y perfil de usuarios de información adicional',
	'item_feat_user_self_deactivation' => 'Desactivación de usuario automatico',
	'item_feat_login_archive' => 'Historia login',

/*********/
	'cat_features_bbcodes' => 'Características adicionales BBCodes',

	'item_feat_random_quotes' => 'Citas aleatorias',
	'item_feat_bbcodes' => 'Integrar BBCodes Box',
	'item_feat_acronyms' => 'Acronimos',
	'item_feat_autolinks' => 'Autoenlaces',
	'item_feat_smiley_creator' => 'Creador de emoticones',

/*********/
	'cat_features_seo' => 'Características adicionales SEO',

	'item_feat_url_rewrite' => 'SEO optimizacion y URL rewrite',
	'item_feat_rss' => 'RSS feed',
	'item_feat_referrers' => 'Referidos de rastreo',
	'item_feat_referrers' => 'Robots de rastreo',
	'item_feat_referrers' => 'Navegadores y sistemas operativos de detección',
	'item_feat_banners' => 'Gestión de banners y anuncios',

/*********/
	'cat_features_forum' => 'Características adicionales foro y mensajes',

	'item_feat_bin' => 'Tema papelera',
	'item_feat_forum_icons' => 'Iconos del foro',
	'item_feat_link_this_topic' => 'Enlace a tema',
	'item_feat_edit_notes' => 'Editar',
	'item_feat_topic_prefixes' => 'Prefijo de tema',
	'item_feat_topic_description' => 'Descripcion de tema',
	'item_feat_rating' => 'Valorar tema',
	'item_feat_thanks' => 'Agradecer tema',
	'item_feat_topic_views' => 'Ver tema',
	'item_feat_digests' => 'Informe tema',
	'item_feat_upload_images' => 'Subir imágenes en mensaje',
	'item_feat_quick_reply' => 'Respuesta rapida',
	'item_feat_social_bookmars' => 'Marcadores sociales',
	'item_feat_ftr' => 'Forzar a leer tema',
	'item_feat_detailed_notifications' => 'Detalles de notificaciones del mensaje',

//	'item_feat_' => '',
	)
);

?>