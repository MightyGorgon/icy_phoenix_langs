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
* (c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* (c) hotschi / demolition fabi / oxpus
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
/*
* mod version string
*/
	'Dl_mod_version' => 'Download MOD v%s&nbsp;&copy;(c) 2002 - 2007 by Hotschi, Demolition Fabi, OXPUS',

/*
* general messages after successfull data managements
*/
	'Click_return_categoryadmin' => 'Pulse %saquí%s para volver a la administración de categorías',
	'Click_return_dl_config' => 'Pulse %saquí%s para volver a la configuración de descargas',
	'Click_return_downloadadmin' => 'Pulse %saquí%s para volver a la administración de descargas',
	'Click_return_downloads' => 'Pulse %saquí%s para volver a las categorías de descargas',
	'Click_return_download_details' => 'Pulse %saquí%s para volver a la descarga',
	'Click_return_file_management' => 'Pulse %saquí%s para volver a la administración del archivo',
	'Click_return_modcp_approve' => 'Pulse %saquí%s para volver a las descargas sin aprobar',
	'Click_return_modcp_manage' => 'Pulse %saquí%s para volver al panel de moderación',
	'Click_return_user_traffic_admin' => 'Pulse %saquí%s para modificar el tráfico de otro usuario',
	'Click_return_usergroup_traffic_admin' => 'Pulse %saquí%s para modificar el tráfico de otro grupo de usuarios',

/*
* message strings
*/
	'Dl_category_added' => 'Categoría añadida',
	'Dl_category_updated' => 'Categoría actualizada',
	'Dl_category_removed' => 'Categoría borrada',
	'DL_upload_error' => 'Error al subir este fichero. Por favor, vuelva atrás y vuelva a intentarlo.<br />Póngase en contacto con el administrador, si el problema todavía existe.',
	'Dl_approve_overview' => 'Hay %s descargas no aprobadas. Pulse aquí para mostrarlas.',
	'Dl_approve_overview_one' => 'Hay %s descarga no aprobada. Pulse aquí para mostrarla.',
	'Dl_config_updated' => 'Configuración de la descarga guardada',
	'Dl_confirm_cat_delete' => '¿Está seguro de que desea borrar la categoría <b>%s</b>?',
	'Dl_confirm_delete_multiple_files' => '¿Está seguro de que desea borrar estas <b>%d descargas</b>?',
	'Dl_confirm_delete_single_file' => '¿Está seguro de que desea borrar la descarga <b>%s</b>?',
	'Dl_delete_cat_and_files' => 'Borrar esta categoría y todos los archivos de su interior',
	'Dl_delete_cat_confirm' => 'Elija una categoría a la que cada descarga será movida, o use otra acción',
	'Dl_delete_cat_only' => 'Borrar solamente esta categoría',
	'Dl_delete_file_confirm' => 'También se eliminará el archivo(s)',
	'Dl_empty_category' => 'Esta categoría no contiene ninguna descarga',
	'Dl_no_access' => '¡Acceso denegado!<br /><br />Usted no tiene permiso para descargar este archivo.',
	'Dl_no_category' => 'No hay categorías. Añadir una nueva categoría antes de fijar ningún permiso.',
	'Dl_no_category_index' => 'Esta sección de descargas no tiene categorías',
	'Dl_no_external_url' => 'Tiene que introducir una URL válida si desea enviar una descarga externa',
	'Dl_no_filename_entered' => 'Tiene que seleccionar un archivo si quiere subirlo',
	'Dl_no_groups_for_traffic' => 'No se encontro el grupo de usuarios<br /><br />Añadir un grupo de usuarios antes de fijar el trafico de la descarga',
	'Dl_no_more_remain_traffic' => 'El trafico para descargas de %s esta completamente agotado para este mes. Espere hasta el próximo mes o contacte con un administrador.',
	'Dl_no_permission' => '¡Acceso denegado!<br /><br />Usted no tiene permiso para hacer esto.',
	'Dl_no_upload_traffic' => 'Perdón, pero no hay trafico de subida. Por favor, contacte con un administrador si quiere subir este archivo',
	'Dl_path_not_exist' => 'La ruta de la categoría <b>%s</b> no existe.<br />Volver atras e introducir otra ruta<br />o crear esta carpeta con el administrador de archivos.',
	'Dl_permission_updated' => 'Permisos de descargas guardados',
	'Dl_user_config_saved' => 'Configuración de usuario para descargas actualizado<br /><br />Pulse %saquí%s para volver a las descargas',
	'Download_added' => 'La descarga a sido añadida',
	'Download_removed' => 'La descarga a sido borrada',
	'Download_updated' => 'La información a sido actualizada',
	'New_download' => 'Una nueva descarga a sido subida o a sido actualizada.<br />Pulse %saquí%s para ir directamente a la descarga.',
	'Dl_confirm_cat_stats_delete' => '¿Está seguro de querer borrar los datos estadísticos de la categoría <b>%s</b>?',
	'Dl_confirm_all_stats_delete' => '¿Está seguro de querer borrar todos los datos estadísticos?',
	'Dl_confirm_cat_comments_delete' => '¿Está seguro de querer borrar los comentarios de la categoría <b>%s</b>?',
	'Dl_confirm_all_comments_delete' => '¿Está seguro de querer borrar todos los comentarios?',
	'Dl_file_not_found' => '<b>El archivo %s no a sido encontrado</b><br /><br />Asegúrese de que este archivo existe en esta carpeta %s',
	'Dl_no_change_edit_time' => 'No registrar esta actualización',
	'Dl_thumb_upload' => 'Miniatura subida',
	'Dl_thumb_del' => 'Miniatura borrada',
	'Dl_thumb_to_big' => 'La miniatura es demasiado grande<br />Por favor, use un archivo mas pequeño, o una imagen con dimensiones mas pequeña.<br />Use el botón de atras de su navegador para volver a subirlo.',
	'Dl_hotlink_permission' => 'Usted no tiene permiso para descargar este archivo directamente con un enlace',
	'Dl_vc_permission' => 'El código de confirmación para esta descarga es erroneo. Por favor, vuelva atrás y vuelva a intentarlo.',
	'Dl_report_broken_vc_mismatch' => 'El código de confirmación para este aviso es erroneo. Por favor, vuelva atrás y vuelva a intentarlo.',
	'Dl_vc_not_found' => 'El código de confirmación no pudo ser encontrado. Por favor, vuelva atrás y vuelva a intentarlo.',

/*
* page descriptions
*/
	'Dl_page_dl_hackslist' => 'Lista de hacks',
	'Dl_page_downloads' => 'Descargas',

/*
* commands
*/
	'Add_new_download' => 'Añadir una nueva descarga',
	'Dl_add' => 'Añadir',
	'Dl_add_category' =>'Añadir una categoría',
	'Dl_approve' => 'Aprovar',
	'Dl_check_file_sizes' => 'Comprobar tamaño de archivos',
	'Dl_check_thumbnails' => 'Comprobar miniaturas',
	'Dl_delete' => 'Borrar',
	'Dl_down' => 'Bajar',
	'Dl_edit' => 'Editar',
	'Dl_go' => 'Ir',
	'Dl_klick_to_rate' => 'Valorar',
	'Dl_lock' => 'Cerrar',
	'Dl_mark_all' => 'Marcar todo',
	'Dl_move' => 'Mover a',
	'Dl_set' => 'Fijar',
	'Dl_unmark' => 'Desmarcar todo',
	'Dl_up' => 'Subir',
	'Dl_delete_cat' => 'Borrar categoría',
	'Dl_stats_delete' => 'Borrar estadísticas',
	'Dl_stats_delete_all' => 'Borrar todas las estadísticas',
	'Dl_comments_delete' => 'Borrar comentarios',
	'Dl_comments_delete_all' => 'Borrar todos los comentarios',
	'Dl_sub_sort_asc' => 'Ordenar todas las entradas de esta categoría en ascendente',
	'Dl_sub_sort_asc_zero' => 'Ordenar categorías principales en ascendente',

/*
* categories related
*/
	'Dl_cat_description' => 'Descripción',
	'Dl_cat_files' => 'Archivos',
	'Dl_cat_index' =>'Nivel más alto',
	'Dl_cat_name' => 'Categoría',
	'Dl_cat_parent' => 'Categoría padre',
	'Dl_cat_path' =>'Ruta',
	'Dl_cat_title' => 'Descargas - categorías',
	'Dl_choose_category' => 'Elegir categoría',
	'Dl_mod_desc_allow' => 'Permitir descripciones del MOD',
	'Dl_must_approve' => 'Las subidas en esta categoría deben ser aprobados',
	'Dl_statistics' => 'Activar estadísticas detalladas',
	'Dl_stats_prune' => 'Limpiar datos estadisticos',
	'Dl_stats_delete' => 'Borrar estadísticas',
	'Dl_stats_delete_all' => 'Borrar todas las estadísticas',
	'Dl_comments_delete' => 'Borrar comentarios',
	'Dl_comments_delete_all' => 'Borrar todos los comentarios',
	'Dl_cat_traffic' => 'Cuota de trafico (disponible actualmente: %s)',
	'Dl_cat_traffic_off' => 'Cuota de trafico (actualmente apagado)',
	'Dl_cat_traffic_main' => 'Por ahora %s de tráfico se ha dejado en esta categoría',
	'Dl_thumb_cat' => 'Permitir miniaturas',
	'Dl_approve_comments' => 'Aprobar automáticamente cada nuevo comentario',
	'Dl_cat_rules' => 'Normas',

/*
* traffic related
*/
	'Dl_auto_traffic' => 'Descarga automática de tráfico',
	'Dl_enable_post_traffic' => 'Activar suma de tráfico por escribir',
	'Dl_group_auto_traffic' => 'Tráfico para grupos de usuarios',
	'Dl_newtopic_traffic' => 'Descarga de tráfico por cada nuevo tema creado',
	'Dl_overall_traffic' => 'Tráfico para todos los archivos por mes',
	'Dl_remain_overall_traffic' => 'Resto general de tráfico para este mes: ',
	'Dl_reply_traffic' => 'Descarga de tráfico por cada mensaje, respuesta o cita',
	'Dl_traffic' => 'Tráfico máximo',
	'Dl_user_auto_traffic' => 'Tráfico para usuarios',
	'Single_user_traffic_title' => 'Tráfico para usuario simple',
	'Traffic' => 'Trafico',
	'Traffic_now' => 'Actualmente cuenta',
	'Usergroup_traffic_title' => 'Tráfico para usuarios de un grupo de usuarios',
	'Users_traffic_title' => 'Tráfico para todos los usuarios',
	'Dl_user_traffic_once' => 'Disminución de tráfico de los usuarios, sólo una vez por cada descarga',
	'Dl_can_download_traffic' => 'Ya ha descargado este archivo.<br />El administrador permite de nuevo la descarga, sin pagar tráfico por ello.',
	'Dl_can_download_traffic_footer' => '<b>El administrador actualmente permite que cargue los archivos ya descargados, sin pagar tráfico por ellos.</b><br /><br />',
	'Traffic_all_users_admin_explain' => 'Añadir o fijar el tráfico para todos los usuarios.',
	'Traffic_single_user_admin_explain' => 'Añadir o fijar el tráfico para un usuario simple.',
	'Traffic_usergroup_admin_explain' => 'Añadir o fijar el tráfico para todos los usuarios de un grupo de usuarios.',
	'Dl_auto_traffic_explain' => 'En esta tabla, se puede establecer el tráfico de todos los usuarios, o todos los usuarios de un grupo de usuarios recibirá cada mes para las descargas.',

/*
* auth values
*/
	'Dl_permissions_all' => 'Fijar los permisos para todos los usuarios',
	'Dl_auth_dl' => 'Descargar',
	'Dl_auth_mod' => 'Moderar',
	'Dl_auth_up' => 'Subir',
	'Dl_auth_view' => 'Ver',
	'Dl_permissions' => 'Permisos para los usuarios de los siguientes grupos de usuarios',
	'Dl_stop_uploads' =>'Desactivar subidas',
	'Dl_stat_perm' => 'Permisos para la página de estadística de nivel de usuario',
	'Dl_stat_perm_all' => 'Todo el mundo',
	'Dl_stat_perm_user' => 'Usuarios registrados',
	'Dl_stat_perm_mod' => 'Moderadores de descargas',
	'Dl_stat_perm_admin' => 'Administradores del foro',
	'Dl_auth_cread' => 'Leer comentarios',
	'Dl_auth_cpost' => 'Escribir comentarios',
	'Dl_perm_all' => 'Todo el mundo',
	'Dl_perm_reg' => 'Usuarios registrados',
	'Dl_perm_grg' => 'Grupos de usuarios',

/*
* hacks and mods related
*/
	'Dl_hack_autor' => 'Autor',
	'Dl_hack_autor_email' => 'Email del autor',
	'Dl_hack_autor_website' => 'Sitio web del autor',
	'Dl_hack_dl_url' => 'Descarga alternativa',
	'Dl_hack_version' => 'Version del MOD',
	'Dl_hacklist' => 'Lista en lista de hack',
	'Dl_hacks_list' => 'Lista de hack',
	'Dl_mod_desc' => 'Como funciona este MOD',
	'Dl_mod_list' => 'Mostrar información adicional',
	'Dl_mod_require' => 'Requiere',
	'Dl_mod_test' => 'MOD probado en/con',
	'Dl_mod_todo' => 'Todo',
	'Dl_mod_warning' => 'Advertencias',

/*
* moderator panel
*/
	'Dl_modcp_approve' => 'Panel del moderador - Aprobar descargas',
	'Dl_modcp_edit' => 'Panel del moderador - Editar descargas',
	'Dl_modcp_manage' => 'Panel del moderador - Administrar descargas',
	'Dl_modcp_mod_auth' => 'Usted <b>puede</b> %smoderar esta categoría%s',

/*
* ACP file management
*/
	'Dl_check_filesizes_result' => 'Todos los archivos están al día, y no se encontró ningún error',
	'Dl_check_filesizes_result_error' => 'Los siguientes archivos no han sido comprobados:',
	'Dl_manage' => 'Herramientas de archivo',
	'Dl_manage_content_count' => '%s entradas',
	'Dl_manage_create_dir' => 'Crear esta carpeta',
	'Dl_manage_empty_folder' => 'Está carpeta esta vacía...',
	'Dl_manage_explain' => 'Desde aquí usted puede administrar los archivos de descargas. Usted puede usar las siguientes funciones:<br /><br />- Borrar o mover archivos sin asignar<br />- Unir archivos asignados sin categoría existente, a una existente<br />- Navegar por los archivos (<i>Por defecto, después de abrir la administración</i>)<br />- Crear una nueva carpeta<br />- Borrar carpetas vacías<br />- Comprobar el tamaño del archivo para cada descarga no externa<br /><br /><b>Atención:</b><br />¡Esta herramienta no reemplaza un cliente FTP!<br />¡Funciones como subir, mover cada uno de los archivos y reemplazar archivos no son posibles con esta herramienta!',
	'Dl_physical_quota' => 'Cuota física de todos los archivos',
	'Dl_unassigned_files' => 'Comprobar si hay descargas sin asignar',

/*
* statistics
*/
	'Dl_latest_downloads' => 'Ultimas descargas',
	'Dl_latest_uploads' => 'Ultimos subidos',
	'Dl_downloads_cur_month' => 'Descargas del mes actual',
	'Dl_downloads_overall' => 'Descargas en general',
	'Dl_downloads_count' => 'Descargas',
	'Dl_downloads_traffic' => 'Tráfico general de descarga',
	'Dl_uploads_count' => 'Subidos',
	'Dl_uploads_traffic' => 'Tráfico general de subida',
	'Dl_pos' => 'Pos.',
	'Dl_time' => 'Fecha',
	'Dl_stats' => 'Estadísticas de descarga',
	'Dl_direction' => 'Acción',
	'Dl_browser' => 'Navegador',
	'Dl_ip' => 'Dirección IP',
	'Dl_traffic_cur_month' => 'Tráfico de este mes',
	'Dl_traffic_overall' => 'Tráfico general',
	'Dl_guest_stat_delete' => 'Borrar todos los datos de invitados',
	'Dl_no_filter' => '- Ningún filtro -',
	'Dl_total_entries' => 'Entradas encontradas',
	'Dl_filter' => 'Filtro',
	'Dl_filter_string' => 'Use * o % como marcador de posición',
	'Dl_guest_stats_admin' => 'Mostrar datos de invitados también',
	'Dl_stat_edit' => 'Editado',

/*
* comments
*/
	'Dl_comment' => 'Comentario',
	'Dl_comments' => 'Comentarios',
	'Dl_last_comment' => 'Ultimo comentario',
	'Dl_post_comment' => 'Escribir',
	'Dl_view_comments' => 'Mostrar',
	'Dl_comment_edited' => 'Ultima edición del comentario el %s',
	'Dl_comment_write' => 'Escribir un comentario',
	'Dl_comment_show' => 'Mostrar todos los comentarios para esta descarga',
	'Dl_comment_delete' => 'Borrar',
	'Dl_comment_edit' => 'Editar',
	'Dl_comment_added' => 'Comentario añadido',
	'Dl_comment_updated' => 'Comentario actualizado',
	'Dl_must_be_approve_comment' => '¡Este comentario debe ser aprobado por un moderador o administrador!',
	'Dl_approve_overview_one_comment' => 'Hay un comentario no aprobado. Pulse en el texto para comprobarlo.',
	'Dl_approve_overview_comments' => 'Hay %s comentarios no aprobados. Pulse en el texto para comprobarlos.',

/*
* ACP management main page
*/
	'Dl_acp_traffic_management' => 'Administrar cuotas de trafico y preajustes automáticos',
	'Dl_acp_categories_management' => 'Administrar categorías y sus permisos',
	'Dl_acp_config_management' => 'Fijar las configuraciones generales',
	'Dl_acp_files_management' => 'Administrar las descargas',
	'Dl_acp_stats_management' => 'Ver y comprobar estadísticas',
	'Dl_acp_managemant_page' => 'Administración del MOD de descargas',
	'Dl_acp_managemant_page_explain' => 'Aquí se puede llegar a todas las opciones y funciones del MOD de descargas, y que son necesarios para administralo.<br />Elija una de las funciones que se indican a continuación para cambiar la configuración.',

/*
* global strings
*/
	'Dl_account' => 'Usted tiene <b>%s</b> de tráfico este mes.',
	'Dl_add_user' => 'Esta descarga a sido añadida el <b>%s</b> por <b>%s</b>',
	'Dl_all' => 'Todo',
	'Dl_Bytes' => 'B',
	'Dl_Bytes_long' => 'Bytes',
	'Dl_change_user' => ' y la ultima edición fue el <b>%s</b> por <b>%s</b>',
	'Dl_config' => 'Configuración de descargas',
	'Dl_days' => 'Dias',
	'Dl_default_sort' => 'Orden por defecto',
	'Dl_delay_auto_traffic' => 'Retrasar el tráfico automatico, para nuevos usuarios',
	'Dl_delay_post_traffic' => 'Retrasar el tráfico para mensajes, para nuevos usuarios',
	'Dl_direct_download' => 'Directo',
	'Dl_detail' => 'Detalles',
	'Dl_disable_email' => 'Desactivar notificación por email',
	'Dl_disable_popup' => 'Desactivar notificación por popup/mensaje en el foro',
	'Dl_disable_email_files' => 'Desactivar notificación por email',
	'Dl_disable_popup_files' => 'Desactivar notificación por popup/mensaje en el foro',
	'Dl_download' => 'Descarga',
	'DL_edit' => 'Descarga actualizada',
	'DL_edit_time' => 'Número de días que una descarga editada será marcada',
	'Dl_extern' => 'Externa',
	'Dl_extern_up' => 'Externa',
	'Dl_file_description' => 'Descripción',
	'Dl_file_name' => 'Archivo',
	'Dl_file_size' => 'Tamaño',
	'Dl_files_title' => 'Archivos',
	'Dl_files_url' => 'URL',
	'Dl_free' => 'Descarga gratuita',
	'Dl_function' => 'Función',
	'Dl_GB' => 'GB',
	'Dl_group_name' => 'Nombres de grupo',
	'Dl_guest_stats_show' => 'Mostrar invitados en la categoría de estadísticas detalladas',
	'Dl_hotlink_action' => 'Enlace de acción para los enlaces de descarga directa',
	'Dl_hotlink_action_one' => 'Redireccionar para detalles',
	'Dl_hotlink_action_two' => 'Mostrar mensaje',
	'Dl_info' => 'Información',
	'Dl_is_free' => 'Descarga gratuita',
	'Dl_is_free_reg' => 'Gratuita para usuarios registrados',
	'Dl_KB' => 'KB',
	'Dl_klicks' => 'Clicks por mes',
	'Dl_last_time' => 'Ultima descarga el <b>%s</b>',
	'Dl_last_time_extern' => 'Ultima descarga desde URL externa el <b>%s</b>',
	'Dl_limit_desc_on_index' => 'Límite de las descripciones de descarga en el indice',
	'Dl_Links_per_page' => 'Descargas por pagina',
	'Dl_MB' => 'MB',
	'Dl_method' => 'Método de descarga',
	'Dl_method_new' => 'Nuevo',
	'Dl_method_old' => 'Antiguo',
	'Dl_method_quota' => 'Cuota para método de lectura del archivo fragmentado',
	'Dl_modcp_capprove' => 'Aprobar comentarios',
	'Dl_must_be_approved' => 'Esta descarga debe ser aprobada por un administrador o moderador de esta categoría.',
	'Dl_name' => 'Nombre',
	'DL_new' => 'Nueva descarga',
	'DL_new_time' => 'Numero de dias que una nueva descarga sera marcada',
	'Dl_no' => 'No',
	'Dl_no_config' => 'Configuración de usuario cerrada',
	'Dl_no_last_time' => 'No se contarón descargas hasta ahora...',
	'Dl_no_mod_todo' => 'No hay MODs por ahora',
	'Dl_not_availible' => 'No disponible',
	'Dl_order' => 'Orden',
	'Dl_overall_klicks' => 'Clicks en general',
	'Dl_klicks_total' => 'Clicks mes/total',
	'Dl_overview' => 'Ver la lista completa de todas las descargas',
	'DL_posts' => 'Numero de mensajes que un usuario necesita para acceder a la descarga',
	'Dl_prevent_hotlink' => 'Prevenir enlaces para descargas directas',
	'Dl_rating' => 'Valoración',
	'Dl_real_filetime' => 'Modificación del ultimo archivo',
	'Dl_search_author' => 'Para los usuarios que han subido o cambiado descargas',
	'Dl_show_footer_legend' => 'Mostrar leyenda en el pie de pagina de descargas',
	'Dl_show_footer_stat' => 'Mostrar estadísticas en el pie de pagina de descargas',
	'Dl_show_real_filetime' => 'Mostrar la fecha de la ultima modificación del archivo en los detalles de la descarga',
	'Dl_sort_preform' => 'Preajustar orden',
	'Dl_sort_acp' => 'Preajustar',
	'Dl_sort_user' => 'Usuario',
	'Dl_sort_user_opt' => 'Ordenar descargas por',
	'Dl_sort_user_ext' => 'Por otro criterio',
	'Dl_thumb' => 'Miniatura',
	'Dl_thumb_dim_size' => 'La miniatura puede tener una dimensión máxima de %s por %s píxeles y el tamaño del archivo debe ser menor que %s.',
	'Dl_thumb_max_dim' => 'Dimensión maxima en píxeles X * Y',
	'Dl_thumb_max_size' => 'Tamaño maximo de miniatura',
	'Dl_total_stat' => 'En general hay %s descargas con un tamaño de %s / %s incluyendo %s descargas externas.',
	'Dl_unapproved' => '<br /><span class="gensmall">[ No aprobado ]</span>',
	'Dl_upload' => 'Subir un archivo',
	'Dl_upload_file' => 'Subir',
	'Dl_upload_max_filesize' => 'Tamaño maximo del archivo que esta permitido para subidas: %s',
	'Dl_upload_traffic' => 'El tamaño del archivo de subida, se reducirá del tráfico general. ¡Recuerde esto, para la elección del tamaño del archivo!',
	'Dl_upload_traffic_count' => 'También disminuir el tráfico de subida general',
	'Dl_use_hacklist' => 'Activar la lista de hacks',
	'Dl_users_without_group' => 'Usuarios sin ser usuarios de un grupo de usuarios',
	'Dl_white_explain' => 'Descarga gratuita sin contar tráfico, para usuarios registrados',
	'Dl_yes' => 'Si',
	'Dl_yes_reg' => 'Si para<br />Usuario reg.',
	'Download_path' => 'Ruta para sus descargas, por ejemplo <b>descargas/</b>',
	'Downloads' => 'Descargas',
	'Must_select_download' => 'Elija una descarga.',
	'Number_recent_dl_on_portal' => 'Numero de descargas recientes que serán mostradas en el portal',
	'Recent_downloads' => 'Descargas recientes',
	'User_allow_fav_download_email' => 'Activar emails por cambios en descargas favoritas',
	'User_allow_fav_download_popup' => 'Activar mensaje en el foro por cambios en descargas favoritas',
	'User_allow_new_download_email' => 'Activar emails para nuevas descargas',
	'User_allow_new_download_popup' => 'Activar mensaje en el foro para nuevas descargas',
	'User_download_email' => 'Email<br />Notificación',
	'User_download_popup' => 'Foro<br />Mensaje',
	'User_download_notify_type' => 'Tipo de mensaje en el foro',
	'User_download_notify_type_popup' => 'Popup',
	'User_download_notify_type_message' => 'Mensaje en el encabezado del foro',
	'Dl_edit_own_downloads' => 'El usuario puede editar sus archivos',
	'Dl_report_confirm_code' => 'Por favor, introduzca el código de confirmación aquí, para reportar que esta descarga esta rota:',
	'Dl_shorten_extern_links' => 'Acortar los enlaces de descarga externos mostrados',
	'Dl_physical_quota_explain' => 'Si la cuota (actualmente %s en uso) se alcanza, no se permitiran mas subidas',
	'Dl_blue_explain' => '¡No hay mas tráfico en general para este mes!',
	'Dl_blue_explain_file' => '¡No hay mas tráfico de archivos para este mes!',
	'Dl_blue_explain_foot' => '¡No mas tráfico en general, archivos, y/o tráfico de categoría para este mes!',
	'Dl_green_explain' => '¡Descargar! Sin deducciones para la cuenta de usuario.',
	'Dl_grey_explain' => '¡Descargar! Fuente externa. Sin deducciones para la cuenta de usuario.',
	'Dl_red_explain' => 'No hay suficiente tráfico o mensajes<br />(%s mensajes son requeridos). ¡No haga SPAM! ¡Los spammers se bloqueará automáticamente!',
	'Dl_red_explain_alt' => 'No hay suficiente tráfico o mensajes (%s mensajes son requeridos). ¡No haga SPAM! ¡Los spammers se bloqueará automáticamente!',
	'Dl_red_explain_perm' => '¡No tiene permiso para descargar!',
	'Dl_yellow_explain' => '¡Descargar! El tráfico se deducirá en la cuenta de usuario.',
	'Dl_config_explain' => 'Desde aquí usted puede activar, o desactivar varias funciones de el MOD de descargas, y cambiar algunos ajustes.',
	'Dl_cat_edit_explain' =>'Aquí usted puede administrar las categorias del MOD de descargas.',

/*
* build in add on cash to traffic
*/
	'Dl_cash_to_traffic' => 'Intercambio de efectivo por tráfico',
	'Dl_cash_to_traffic_explain' => 'Aquí usted puede fijar el intercambio entre efectivo de moneda y tráfico de descarga. El intercambio va a cambiar todo un valor de la moneda, a la cantidad entera de tráfico.',
	'Dl_cash_currency' => 'Efectivo en moneda',
	'Dl_cash_exchange' => 'Intercambiar: 1 %s en %s de tráfico',
	'Dl_cash_current_amount' => 'Usted tiene %s %s',

/*
* new on Download MOD 5.0.10: Blacklist for filetypes
*/
	'Dl_ext_blacklist' => 'Lista negra de tipos de archivo',
	'Dl_use_ext_blacklist' => 'Activar la lista negra de tipos de archivo',
	'Dl_extention' => 'Nueva extensión de archivo prohibido',
	'Dl_extentions' => 'Extensiones de archivos prohibidos',
	'Dl_add_extention' => 'Añadir una nueva extensión de archivo',
	'Dl_confirm_delete_extention' => '¿Está usted seguro de quitar la extensión <b>%s</b>?',
	'Dl_confirm_delete_extentions' => '¿Está usted seguro de quitar las extensiones <b>%s</b>?',
	'Dl_delete_extention_confirm' => 'Quitar extensión de archivo de la lista negra',
	'Dl_delete_extentions_confirm' => 'Quitar extensiones de archivo de la lista negra',
	'Extention_removed' => 'Extensión de archivo quitada de la lista negra.',
	'Extentions_removed' => 'Extensiones de archivo quitadas de la lista negra',
	'Click_return_extblacklistadmin' => 'Pulse %saquí%s para volver a la lista negra de tipos de archivo',
	'Dl_forbidden_extention' => '¡Esta extensión de archivo no esta permitida actualmente!<br />Por favor, vuelva atrás y use otro tipo de extensión.',
	'Dl_forbidden_ext_explain' => 'Extensiones de archivo prohibidas: %s',
	'Dl_ext_blacklist_explain' => 'Todas las extensiones introducidas aquí, están desactivadas para subir con este MOD.<br />En el panel de administración, también se utilizarán estas extensiones.<br />Esto no se refiere a las descargas existentes.',

/*
* new on Download MOD 5.0.12: Disable time edit informations
*/
	'Dl_disable_popup_notify' => 'Permitir que se desactive la fecha de información editada, al editar una descarga',

/*
* new on Download MOD 5.0.15: Banlist and report broken downloads
*/
	'Dl_acp_banlist' => 'Lista de baneados',
	'Dl_user_id' => 'ID usuario',
	'Dl_confirm_delete_ban_values' => '¿Está seguro de querer borrar estas entradas de la lista de baneados?',
	'Dl_banlist_updated' => 'Lista de baneados actualizada',
	'Dl_banned' => '¡Está usted baneado y desactivado para descargar ningun archivo!',
	'Click_return_banlistadmin' => 'Pulse %saquí%s para volver a la lista de baneados',
	'Dl_broken' => 'Reportar descarga rota',
	'Dl_broken_mod' => 'Restablecer estado de descarga rota',
	'Dl_broken_cur' => 'Esta descarga esta actualmente reportada como rota',
	'Dl_report_broken' => 'Permitir reportar descargas rotas',
	'Dl_a_guest' => 'Un invitado',
	'Dl_favorite_add' => 'Notificarme acerca de cambios en esta descarga',
	'Dl_favorite_drop' => 'Quitar notificaciones acerca de esta descarga',
	'Dl_favorite' => 'Descargas favoritas',
	'Dl_acp_banlist_explain' => 'Desde aquí usted puede introducir diferentes valores para banear el acceso a las descargas.<br />Cada valor será utilizado simultáneamente, ya sea si son introducidos como un dato.',

/*
* new on Download MOD 5.1.0
*/
	'Dl_report_broken_lock' => 'Desactivar la descarga mientras este reportado como roto',
	'Dl_report_broken_message' => 'Mostrar una nota acerca de que la descarga, esta solamente desactivada',
	'Dl_report_broken_vc' => 'Activar confirmacion visual para reportar una descarga rota',
	'Dl_visual_confirmation' => 'Activar confirmacion visual para el archivo de descarga',
	'Dl_off_guests' => 'No para invitados',

/*
* new on Download MOD 5.1.1
*/
	'Dl_icon_free_for_reg' => 'Mostrar el icono blanco de descarga para invitados',

/*
* new on Download MOD 5.1.3
*/
	'Dl_latest_comments' => 'Mostrar los ultimos X comentarios en los detalles de la descarga',

/*
* new on Download MOD 5.2.0 - The Bug Tracker !!!!!!!!!!!! -------------  * :-(((((
*/
	'Dl_bug_tracker' => 'Bug tracker',
	'Dl_bug_tracker_file' => 'Para esta descarga',
	'Dl_bug_tracker_cat' => 'Activar bug tracker',

	'Confirm_delete_bug_report' => '¿Está seguro de querer borrar este aviso de bug?',
	'Dl_bug_report_id' => 'ID de aviso',
	'Dl_bug_report_title' => 'Titulo de aviso',
	'Dl_bug_report_title_details' => 'Reportar',
	'Dl_bug_report_text' => 'Descripción',
	'Dl_bug_report_date' => 'Reportado el',
	'Dl_bug_report_php' => 'PHP',
	'Dl_bug_report_db' => 'DB',
	'Dl_bug_report_forum' => 'Foro',
	'Dl_bug_report_file' => 'Descarga',
	'Dl_bug_report_author' => 'Reportado por',
	'Dl_bug_report_assigned' => 'Asignado a',
	'Dl_bug_report_assign_date' => 'Asignado el',
	'Dl_bug_report_status' => 'Estado',
	'Dl_bug_report_status_date' => 'Estado de la última fecha',
	'Dl_bug_report_detail' => 'Detalles',
	'Dl_bug_report_history' => 'Historia',
	'Dl_bug_report_reassign' => 'Reasignado',
	'Dl_bug_report_assign' => 'Asignado',
	'Dl_bug_report_unassigned' => 'No asignado',
	'Dl_no_bug_tracker' => 'No se han encontrado avisos',
	'Dl_bug_report_no_title' => '¡No a introducido un titulo para este aviso de bug!',
	'Dl_bug_report_no_text' => '¡No a introducido una descripción para este aviso de bug!',
	'Dl_bug_report_added' => 'Aviso de bug añadido',
	'Click_return_bug_tracker' => 'Pulse %saquí%s para volver al bug tracker.',
	'Dl_bug_report_status_text' => 'Algo de texto para el nuevo estado (se enviará por email al autor de este aviso de bug)',
	'Dl_bug_report_status_update' => 'Estado actualizado',
	'Dl_filter_bt_own' => 'Mostrar mis avisos',
	'Dl_filter_bt_assign' => 'Mostrar mis asignaciones',

	'Dl_user_download_limit_flag' => 'Número límite de descargas por mes',
	'Dl_user_download_limit' => 'Número máximo de descargas por mes',
	)
);

$lang['Dl_report_status'][0] = 'nuevo';
$lang['Dl_report_status'][1] = 'visto';
$lang['Dl_report_status'][2] = 'en proceso';
$lang['Dl_report_status'][3] = 'pendiente';
$lang['Dl_report_status'][4] = 'finalizado';
$lang['Dl_report_status'][5] = 'quitado';
$lang['Dl_bug_report_email_status'] = 'Este mensaje le muestra el nuevo estado:
--------------------
%s
--------------------';

?>