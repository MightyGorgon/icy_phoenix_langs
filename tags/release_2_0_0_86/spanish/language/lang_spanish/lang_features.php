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
	'FEATURES' => 'Caracter&iacute;sticas',
	'PHPBB2' => 'phpBB2',
	'ICYPHOENIX' => 'Icy Phoenix',
	'PHPBB3' => 'phpBB3',
	'PHPBB_FEATURES_PAGE' => 'Caracter&iacute;sticas de phpBB en la web oficial de phpBB [ <a href="http://www.phpbb.com/about/features/">LINK</a> ]',

/*********/
	'cat_general' => 'General',

	'item_license' => 'Licencia',
	'bb2_license' => 'GPL',
	'ip_license' => 'GPL',
	'bb3_license' => 'GPL',

	'item_price' => 'Precio de la licencia',
	'bb2_price' => 'Grat&iacute;s',
	'ip_price' => 'Grat&iacute;s',
	'bb3_price' => 'Grat&iacute;s',

	'item_programming' => 'Lenguaje de programaci&oacute;n',
	'bb2_programming' => 'PHP',
	'ip_programming' => 'PHP',
	'bb3_programming' => 'PHP',

	'item_latest' => 'Versi&oacute;n m&aacute;s reciente',
	'bb2_latest' => '2.0.22',
	'ip_latest' => '1.3.0.53a',
	'bb3_latest' => '3.0.6',

	'item_release' => 'Fecha de la versi&oacute;n',
	'bb2_release' => '17/02/2008',
	'ip_release' => '17/01/2010',
	'bb3_release' => '17/11/2009',

/*********/
	'cat_basic_features' => 'Caracter&iacute;sticas b&aacute;sicas',

	'item_utf8' => 'Soporta UTF-8',
	'item_user_preferences' => 'Preferencias de usuario',
	'item_mod' => 'Moderaci&oacute;n',
	'item_admin' => 'Administraci&oacute;n',
	'item_search_engine' => 'Motor de b&uacute;squeda tipo ara&ntilde;a',
	'item_un_mess_track' => 'Seguimiento de mensajes no le&iacute;dos',
	'item_pms' => 'Sistema del mensaje privado',
	'item_stat' => 'Estad&iacute;sticas',

/*********/
	'cat_security' => 'Seguridad',

	'item_perm_ban' => 'Expulsión permanente',
	'item_temp_ban' => 'Expulsión temporal (Suspensi&oacute;n)',
	'item_permission' => 'Permisos',
	'item_paid_sec' => 'C&oacute;digo de seguridad pagado auditor&iacute;a',
	'item_form_hand' => 'Forma de manipulaci&oacute;n',
	'item_t_a_p_h' => 'Par&aacute;metros del tipo de manipulaci&oacute;n',
	'item_t_a_d_l' => 'Tipo de base de datos',
	'item_p_h' => 'Encriptaci&oacute;n de contrase&ntilde;a',

/*********/
	'cat_antispam' => 'Anti-spam',

	'item_c_v_c' => 'CAPTCHA confirmaci&oacute;n visual',
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
	'item_post_m' => 'Publicar moderaci&oacute;n',

/*********/
	'cat_datamanagement' => 'Gesti&oacute;n de datos',

	'item_mysql' => 'MySQL',
	'item_mssql' => 'Servidor MSSQL',
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
	'item_l_r_a' => 'L&iacute;mite de intentos de registro',
	'item_username_lenght' => 'Establecer min / max longitud del nombre de usuario',
	'item_pass_lenght' => 'Establecer min / max longitud de la contrase&ntilde;a',
	'item_l_u_c' => 'Nombre de usuario l&iacute;mite de Chars',
	'item_s_p_c_r' => 'Requisitos de complejidad de la contrase&ntilde;a',
	'item_f_p_c' => 'Forzar el Cambio de contrase&ntilde;a',
	'item_e_mail_address_reusage' => 'Permitir/no permitir reutilizar e-mail',

/*********/
	'cat_posting' => 'Escribiendo',

	'item_t_d_m' => 'Tema mostrar m&eacute;todo',
	'bb2_t_d_m' => 'Llano',
	'ip_t_d_m' => 'Llano',
	'bb3_t_d_m' => 'Llano',

	'item_bbcode' => 'BBCode',
	'item_bbcode_custom' => 'Botones personalizados BBCode',
	'item_html_in_post' => 'HTML en mensajes',
	'item_emoticon' => 'Smilies / Emoticonos',
	'item_quoting' => 'Citando',
	'item_q_m_p' => 'Citar m&uacute;ltiples mensajes',
	'item_f_t' => 'Formato de la barra de herramientas',
	'item_w_c' => 'Censores de palabras',
	'item_s_h' => 'Resaltar sintaxis',
	'item_attachments' => 'Adjuntos',
	'item_p_d' => 'Publicar borradores',
	'item_polls' => 'Encuestas',
	'item_m_p_o_v' => 'Opci&oacute;n de voto m&uacute;ltiple en encuesta',
	'item_u_b_p_t' => 'Encuesta basada en el seguimiento del usuario',
	'item_all_dis_v_c' => 'Permitir/no permitir cambiar el voto',
	'item_beaten_p_review' => 'Env&iacute;o en espera de examen',
	'item_p_p' => 'Vista previa del mensaje',
	'item_flood_control' => 'Flood Control',

/*********/
	'cat_attachments' => 'Adjuntos',

	'item_a_i_t' => 'Miniaturas autom&aacute;ticas',
	'item_a_t' => 'Tipos de archivo adjunto',
	'item_m_a' => 'M&uacute;ltiples adjuntos',
	'item_a_p' => 'Colocaci&oacute;n de adjuntos',

/*********/
	'cat_caching' => 'Cache',

	'item_db_q_c' => 'Consulta base de datos de almacenamiento en cach&eacute;',
	'item_t_c' => 'Cache del template',
	'item_a_d' => 'Datos arbitrarios',
	'item_m_c_r' => 'Manual del refresco de cache',

/*********/
	'cat_profile' => 'Perfil/usuarios',

	'item_c_p_f' => 'Perfil campos personalizados',
	'item_u_p_s' => 'Estad&iacute;sticas de env&iacute;o de usuario',
	'item_u_i_m' => 'Usuario de messenger',
	'item_u_p_d' => 'Detalles del perfil del usuario',
	'item_m_list_search' => 'B&uacute;squeda de usuarios',
	'item_u_m_v' => 'No permitir ver usuarios (registrados) a invitados (no registrados)',

/*********/
	'cat_search_system' => 'Sistema de b&uacute;squeda',

	'item_ft_n' => 'Fulltext nativo',
	'item_c_t_s' => 'Tema de b&uacute;squeda personalizada',
	'item_c_f_s' => 'Foro de B&uacute;squeda personalizada',
	'item_my_sql_text' => 'MySQL Fulltext',
	'item_a_s' => 'Buscar autor',
	'item_a_search' => 'B&uacute;squeda avanzada',
	'item_v_a_post' => 'Ver mensajes sin respuesta',
	'item_a_n_t' => 'Activo/nuevos temas',
	'item_p_s_l_v' => 'Mensajes desde la &uacute;ltima visita',
	'item_s_f_l' => 'B&uacute;squeda de control de flood',

/*********/
	'cat_forums' => 'Foros',

	'item_categories' => 'Categorias',
	'item_p_p_f' => 'Contrase&ntilde;a de foros',
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
	'item_t_s' => 'Clasificaci&oacute;n del tema',
	'item_p_s' => 'Publicar clasificaci&oacute;n',
	'item_t_p_t' => 'Tema de seguimiento de participaci&oacute;n',
	'item_print_t' => 'Imprimir temas',
	'item_e_mail_t' => 'E-mail temas',

/*********/
	'cat_ucp' => 'Panel de control',

	'item_u_s' => 'Firmas usuario',
	'item_u_a' => 'Avatar usuario',
	'item_u_ranks' => 'Rangos de usuarios',
	'item_u_o_l' => 'Lista de usuarios en l&iacute;nea',
	'item_user_p' => 'Preferencias del usuario',
	'item_u_p_s' => 'Configuraci&oacute;n del perfil de usuario',
	'item_m_s_pm_post_d' => 'Administrar PM guardados/borradores de temas',
	'item_m_book' => 'Administrar marcadores',
	'item_m_attach' => 'Gesti&oacute;n de archivos adjuntos',
	'item_m_s_t' => 'Temas de gesti&oacute;n de suscripciones',
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
	'item_exp_mess' => 'Mensajes de exportaci&oacute;n',
	'item_attach_message' => 'Archivos adjuntos de mensajes',
	'item_convers_view' => 'Vista de conversaci&oacute;n',
	'item_c_m_h_r' => 'Mensaje personalizado de manejo de reglas',

/*********/
	'cat_usergroups' => 'Grupos de usuarios',

	'item_g_t' => 'Tipos de grupo',
	'item_ucp_group_manage' => 'Grupo de gesti&oacute;n de UCP',
	'item_ucp_group_manage_membership' => 'Grupo de gesti&oacute;n de asociaciones RUU',
	'item_m_g_l' => 'L&iacute;deres de grupo m&uacute;ltiple',
	'item_c_g_c' => 'Grupo colores personalizados',
	'item_group_ranks' => 'Ranking de grupo',
	'item_group_avatar' => 'Grupo de avatares',
	'item_group_based_memberlist' => 'Grupo de usuarios de pantalla',

/*********/
	'cat_mcp' => 'Moderaci&oacute;n del panel de control',

	'item_global_moder' => 'Moderadores globales',
	'item_forum_moder' => 'Moderadores del Foro',
	'item_t_post_m_q' => 'Temas / Moderaci&oacute;n de mensajes en espera',
	'item_m_r_t_p' => 'Reportar temas / mensajes',
	'item_t_h' => 'Historia del tema',
	'item_f_t_logs' => 'Foro / tema registros',
	'item_l_m_l' => 'Registros localizados de moderador',
	'item_p_e' => 'Publicar edici&oacute;n',
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
	'item_mange_bans' => 'Gesti&oacute;n de las prohibiciones',
	'item_m_u_w' => 'Administrar advertencias',
	'item_banning_by_username' => 'Banear usuario',
	'item_banning_by_email' => 'Banear direccion e-mail',
	'item_banning_by_ip' => 'Banear direccion IP',
	'item_user_notes' => 'Notas de usuario',

/*********/
	'cat_acp' => 'Administraci&oacute;n del panel de control',

	'item_f_s_b_c' => 'Aministrador/webmaster',
	'item_l_s' => 'Cargar ajustes',
	'item_p_i_u' => 'Eliminar los usuarios inactivos',
	'item_m_r' => 'Gestion de rangos',
	'item_m_groups' => 'Gestion de grupos',
	'item_m_group_membership' => 'Gestion de usuarios',
	'item_manage_attach_setting' => 'Configuraci&oacute;n y gesti&oacute;n de archivos adjuntos',
	'item_manage_user_attachment' => 'Gesti&oacute;n de archivos adjuntos de usuario',
	'item_user_editing' => 'Edici&oacute;n de usuarios',
	'item_list_group_index' => 'Lista de grupos en el &iacute;ndice',
	'item_topic_icons' => 'Icono de tema',
	'item_mass_e_mail' => 'Mass e-mail',
	'item_manage_report_reasons' => 'Informe de gesti&oacute;n de / Motivos de denegaci&oacute;n',
	'item_module_manage' => 'M&oacute;dulo de gesti&oacute;n',
	'item_custom_bbcode' => 'BBCodes personalizados',
	'item_custom_profile_field' => 'Perfil campos personalizados',
	'item_custom_profile_field_placement' => 'Opciones de colocaci&oacute;n de los campos personalizados',
	'item_custom_profile_data_types' => 'Opciones de tipo de campos personalizados',
	'item_manage_bans' => 'Gesti&oacute;n de las prohibiciones',
	'item_ban_by_username' => 'Prohibici&oacute;n de usuario',
	'item_ban_by_email' => 'Prohibici&oacute;n de direcci&oacute;n E-mail',
	'item_ban_by_ip' => 'Prohibici&oacute;n de direcci&oacute;n IP',

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
	'item_user_perm_roles' => 'Roles de usuarios',
	'item_mod_perm_roles' => 'Roles de moderadores',
	'item_forum_perm_roles' => 'Roles de foros',
	'item_mask_perm_multi' => 'M&aacute;scaras de permisos multi-nivel',

/*********/
	'cat_notifications' => 'Notificaciones',

	'item_e_mail_true' => 'E-mail',
	'item_instant_mess' => 'Mensaje Instantáneo',
	'item_book_m' => 'Marcadores',

/*********/
	'cat_localisations' => 'Localizaciones',

	'item_s_m_l_p' => 'Soporte para m&uacute;ltiples paquetes de idioma',
	'item_language' => 'Lenguages',
	'bb2_language' => '50+',
	'ip_language' => '6',
	'bb3_language' => '61',
	'item_right_t_left' => 'De derecha a izquierda',
	'item_l_p_w_edit' => 'Editor web de lenguaje',

/*********/
	'cat_install' => 'Instalaciones / Actualizaciones',

	'item_install_wizard' => 'Asistente de Instalación',
	'item_update_wizard' => 'Asistente de Actualización',
	'item_converter_wizard' => 'Asistente de Conversión',
	'item_file_merge_diff_engine' => 'Combinar el archivo de actualizaci&oacute;n del motor de diferencias',

/*********/
	'cat_technical' => 'Caracter&iacute;sticas t&eacute;cnicas',

	'item_cms_integra' => 'Integración de software CMS',
	'item_xhtml_compliant' => 'Compatible con XHTML',

/*********/
	'cat_plugins' => 'Plugins',

	'item_auth_plug' => 'Plugins de Adjuntos',
	'item_search_plug' => 'Plugins de Búsqueda',
	'item_cache_plug' => 'Plugins de Caché',
	'item_captcha_plug' => 'Plugins de CAPTCHA',
	'item_hooks_sys' => 'Sistema Hook',
	'item_expand_module' => 'Modulos expandibles',

/*********/
	'cat_features' => 'Caracter&iacute;sticas adicionales',

	'item_feat_cms' => 'CMS',
	'item_feat_album' => 'Álbum',
	'item_feat_downloads' => 'Descargas',
	'item_feat_kb' => 'Biblioteca',
	'item_feat_links' => 'Enlaces',
	'item_feat_news' => 'Noticias',
	'item_feat_stats' => 'M&oacute;dulo de estad&iacute;sticas',
	'item_feat_contact_us' => 'Contacto',
	'item_feat_lofi' => 'Versión LoFi',
	'item_feat_ajax_shoutbox' => 'Chat ajax',
	'item_feat_shoutbox' => 'Cuadro de charla est&aacute;ndar',
	'item_feat_calendar' => 'Sistema del calendario de eventos',
	'item_feat_pm_notifications' => 'MP de nuevos registrados y cumplea&ntilde;os',

/*********/
	'cat_features_acp' => 'Caracter&iacute;sticas adicionales ACP',

	'item_feat_info' => 'Informaci&oacute;n del servidor en ACP',
	'item_feat_db_mntnc' => 'Mantenimiento de la base de datos',
	'item_feat_mysqladmin' => 'Administración MySQL',
	'item_feat_editable_f_r' => 'Multilenguage editable de FAQs y Normas',
	'item_feat_multiple_ranks' => 'Múltiples rangos',

/*********/
	'cat_features_ucp' => 'Caracter&iacute;sticas adicionales UCP',

	'item_feat_ajax_checks' => 'AJAX Controles sobre el registro',
	'item_feat_upi2db' => 'Mensajes no le&iacute;dos en BD',
	'item_feat_custom_avatar' => 'Creaci&oacute;n personalizada avatar',
	'item_feat_profile_stats' => 'Estad&iacute;sticas y perfil de usuarios con informaci&oacute;n adicional',
	'item_feat_user_self_deactivation' => 'Desactivaci&oacute;n de usuario automatico',
	'item_feat_login_archive' => 'Historial de conexiones',

/*********/
	'cat_features_bbcodes' => 'Caracter&iacute;sticas adicionales BBCodes',

	'item_feat_random_quotes' => 'Citas aleatorias',
	'item_feat_bbcodes' => 'Caja de BBCodes',
	'item_feat_acronyms' => 'Acrónimos',
	'item_feat_autolinks' => 'Autoenlaces',
	'item_feat_smiley_creator' => 'Creador de emoticones',

/*********/
	'cat_features_seo' => 'Caracter&iacute;sticas adicionales SEO',

	'item_feat_url_rewrite' => 'Optimización SEO y URL rewrite',
	'item_feat_rss' => 'Feeds RSS',
	'item_feat_referrers' => 'Rastreo de Referidos',
	'item_feat_referrers' => 'Rastreo de Robots',
	'item_feat_referrers' => 'Detección de Navegadores y Sistemas Operativos',
	'item_feat_banners' => 'Gesti&oacute;n de banners y anuncios',

/*********/
	'cat_features_forum' => 'Caracter&iacute;sticas adicionales foro y mensajes',

	'item_feat_bin' => 'Tema papelera',
	'item_feat_forum_icons' => 'Iconos de foro',
	'item_feat_link_this_topic' => 'Enlace a tema',
	'item_feat_edit_notes' => 'Editar',
	'item_feat_topic_prefixes' => 'Prefijo de tema',
	'item_feat_topic_description' => 'Descripción de tema',
	'item_feat_rating' => 'Valorar tema',
	'item_feat_thanks' => 'Agradecer tema',
	'item_feat_topic_views' => 'Ver tema',
	'item_feat_digests' => 'Informar de tema',
	'item_feat_upload_images' => 'Subir im&aacute;genes en mensaje',
	'item_feat_quick_reply' => 'Respuesta rápida',
	'item_feat_social_bookmars' => 'Marcadores sociales',
	'item_feat_ftr' => 'Forzar a leer tema',
	'item_feat_detailed_notifications' => 'Detalles de notificaciones del mensaje',

//	'item_feat_' => '',
	)
);

?>