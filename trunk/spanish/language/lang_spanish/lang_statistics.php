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
* Nivisec.com (support@nivisec.com)
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

// Original Statistics Mod (c) 2002 Nivisec - http://nivisec.com/mods

$lang = array_merge($lang, array(
// If you want to credit the Author on the Statistics Page, uncomment the second line.
// 'Version_info' => '<br />Versi&oacute;n del MOD de estad&iacute;sticas %s', //%s = number
	'Version_info' => '<br />Estad&iacute;sticas recodificadas por <a href="http://www.icyphoenix.com/">Mighty Gorgon</a> basado en el MOD de estad&iacute;sticas, versi&oacute;n %s &copy; 2002 de <a href="http://www.opentools.de/board">Acyd Burn</a>',

// These Language Variables are available for all installed Modules
	'Rank' => 'Rango',
	'Percent' => 'Por ciento',
	'Graph' => 'Gr&aacute;fico',
	'Uses' => 'Usos',
	'How_many' => 'Cu&aacute;ntos',

// Main Language

// Page Header/Footer
	'Install_info' => 'Instalado el %s', //%s = date
	'Viewed_info' => 'P&aacute;gina de estad&iacute;sticas cargada %d veces', //%d = number
	'Statistics_title' => 'Estad&iacute;sticas del foro',

// Admin Language
	'Statistics_management' => 'M&oacute;dulos de la estad&iacute;stica',
	'Statistics_config' => 'Configuraci&oacute;n de las estad&iacute;sticas',

// Statistics Config
	'Statistics_config_title' => 'Configuraci&oacute;n de las estad&iacute;sticas',

	'Return_limit' => 'L&iacute;mite de vuelta',
	'Return_limit_desc' => 'El n&uacute;mero de objetos a incluir en cada rango. Esto es autom&aacute;tico para todos los m&oacute;dulos especificados aqu&iacute;.',
	'Clear_cache' => 'Limpiar el cach&eacute; de los m&oacute;dulos',
	'Clear_cache_desc' => 'Borrar todos los archivos de cach&eacute; actuales de todos los m&oacute;dulos',
	'Modules_directory' => 'Directorio de los m&oacute;dulos',
	'Modules_directory_desc' => 'El directorio relativo al inicio de Icy Phoenix donde est&aacute;n situados los m&oacute;dulos. F&iacute;jese que las barras c&oacute;mo / o \ no se utilizan!',

// Status Messages
	'Messages' => 'Administrar mensajes',
	'Updated' => 'Actualizado',
	'Active' => 'Activo',
	'Activate' => 'Activar',
	'Activated' => 'Activado',
	'Not_active' => 'No activo',
	'Deactivate' => 'Desactivar',
	'Deactivated' => 'Desactivado',
	'Install' => 'Instalar',
	'Installed' => 'Instalado',
	'Uninstall' => 'Desinstalar',
	'Uninstalled' => 'Desinstalado',
	'Update_time' => 'Actualizar fecha',
	'Auth_settings_updated' => 'Ajustes de autorizaci&oacute;n - [Siempre son actualizados]',

// Modules Management
	'Back_to_management' => 'Volver a la pantalla de administraci&oacute;n de los m&oacute;dulos',
	'Statistics_modules_title' => 'M&oacute;dulo de administraci&oacute;n de las estad&iacute;sticas',

	'Module_name' => 'Nombre',
	'Module_file_name' => 'Nombre del m&oacute;dulo',
	'Modules_order_update' => 'M&oacute;dulos actualizados',
	'Directory_name' => 'Nombre del directorio',
	'Status' => 'Estado',
	'Update_time_minutes' => 'Actualizar tiempo en minutos',
	'Update_time_desc' => 'Intervalo de tiempo (en minutos) de refresco del cach&eacute; por uno nuevo.',
	'AUTO_SET_UPDATE_TIME' => 'Determina y fija el tiempo recomendado para cada instalaci&oacute;n (y activaci&oacute;n) de los m&oacute;dulos. ATENCI&Oacute;N: puede ser largo.',
	'STAT_BLOCKS_SORT' => '<i>Consejo: Puede cambiar las posiciones, arrastrando los bloques.</i>',

	'Uninstall_module' => 'M&oacute;dulo de desinstalaci&oacute;n',
	'Uninstall_module_desc' => 'Marca el m&oacute;dulo con el estado "No instalado", de modo que puede reinstalarlo con el comando de instalaci&oacute;n. Este sistema no suprime el m&oacute;dulo de sus ficheros, por lo que debe suprimir la carpeta del modulo manualmente para quitarlo por completo.',
	'Active_desc' => 'La opci&oacute;n de si el m&oacute;dulo es activo, as&iacute; se mostrar&aacute; dependiendo de los permisos del sistema.',
	'Go' => 'Ir',
	'Update_Modules' => 'Actualizar m&oacute;dulos',

	'Not_allowed_to_install' => 'No puede instalar este m&oacute;dulo. Principalmente, la raz&oacute;n es que no ha instalado un MOD necesario para el funcionamiento del m&oacute;dulo. Contacte con el autor de este m&oacute;dulo si tiene preguntas y si esta informaci&oacute;n no le soluciona el problema.',
	'Wrong_stats_mod_version' => 'No puede instalar este m&oacute;dulo porque la versi&oacute;n del MOD de la estad&iacute;stica no es compatible con la versi&oacute;n requerida por el m&oacute;dulo. Para instalar y arrancar el m&oacute;dulo, necesita por lo menos la versi&oacute;n %s del MOD de la estad&iacute;stica.', // replace %s with Version (2.1.3 for example)
	'Module_install_error' => 'Hab&iacute;a un error de alg&uacute;n tipo en la instalaci&oacute;n de este m&oacute;dulo. Probablemente, algunos comandos de SQL podr&iacute;an no haberse ejecutado. Compru&eacute;belo para mayor seguridad.',

	'Preview_debug_info' => 'Este m&oacute;dulo ha sido generado en %f segundos: %d consultas se han ejecutado.', // Replace %f with seconds and %d with queries
	'Update_time_recommend' => 'El MOD de estad&iacute;sticas recomienda (dependiendo de la informaci&oacute;n) una actualizaci&oacute;n cada <b>%d</b> minutos.', // Replace %d with Minutes

// Modules

	'module_name__stats_overview_section' => 'Descripci&oacute;n de la estad&iacute;stica',

	'module_name_admin_statistics' => 'Estad&iacute;sticas administrativas',
	'Statistic' => 'Estad&iacute;stica',
	'Value' => 'Valor',
	'Number_posts' => 'Numero de mensajes',
	'Posts_per_day' => 'Mensajes por d&iacute;a',
	'Number_topics' => 'Numero de temas',
	'Topics_per_day' => 'Temas por d&iacute;a',
	'Number_users' => 'Numero de usuarios',
	'Users_per_day' => 'Usuarios por d&iacute;a',
	'Board_started' => 'Foro iniciado',
	'Avatar_dir_size' => 'Tama&ntilde;o del directorio de avatares',
	'Database_size' => 'Tama&ntilde;o de la base de datos',
	'Gzip_compression' => 'Compresi&oacute;n gzip',
	'Not_available' => 'No disponible',
	'Board_Up_Days' => 'Foro funcionando',
	'Latest_Reg_User' => '&Uacute;ltimo usuario registrado',
	'Latest_Reg_User_Date' => 'Fecha del &uacute;ltimo usuario registrado',
	'Most_Ever_Online' => 'La mayor&iacute;a de usuarios conectados',
	'Most_Ever_Online_Date' => 'Fecha de la mayor&iacute;a de usuarios conectados',
	'Disk_usage' => 'Disco usado',
	'Title' => 'Media de mensajes por usuario',
	'Average_Posts' => 'Media de mensajes por usuario:',

	'module_name_average_posts_per_user' => 'Media de mensajes por usuario',

	'module_name_age_clusters' => 'Clusters de edad',
	'AGE' => 'Edad',
	'LESS_THAN' => 'Menor de',
	'MORE_THAN' => 'Mayor de',

	'module_name_fastest_users' => 'Usuarios m&aacute;s r&aacute;pidos',
	'time_on_forum' => 'D&iacute;as en el foro',
	'posts_day' => 'Mensajes por d&iacute;a',
	'Statistics' => 'Estad&iacute;sticas',

	'module_name_interesting_topics' => 'Temas m&aacute;s interesantes',
	'Rate' => 'Valoraci&oacute;n (lecturas/mensajes)',
	'Topic' => 'Discusi&oacute;n',

	'module_name_latest_topics' => '&Uacute;ltimos temas',
	'Rank' => 'Rango',
	'Latest_Topics' => '&Uacute;ltimos temas',
	'Post_time' => 'Fecha del mensaje',

	'module_name_month_stat' => 'Estad&iacute;sticas mensuales',
	'New_users' => 'Nuevos usuarios',
	'New_replies' => 'Nuevas respuestas',
	'New_topics' => 'Nuevos temas',
	'Avg_Table' => 'Tabla de media',
	'Sum_Table' => 'Tabla de suma',

	'module_name_most_active_topics' => 'Temas m&aacute;s activos',

	'module_name_most_active_topicstarter' => 'Usuarios que m&aacute;s temas han creado',

	'module_name_most_logged_on_users' => 'Usuarios que m&aacute;s se han conectado',
	'Time2' => 'Fecha de conexi&oacute;n',

	'module_name_most_used_languages' => 'Lenguajes usados',
	'Language' => 'Lenguaje',

	'module_name_most_used_styles' => 'Estilos usados',
	'Style' => 'Estilos',

	'module_name_most_viewed_topics' => 'Temas m&aacute;s vistos',
	'Month_jan' => 'Ene',
	'Month_feb' => 'Feb',
	'Month_mar' => 'Mar',
	'Month_apr' => 'Abr',
	'Month_may' => 'May',
	'Month_jun' => 'Jun',
	'Month_jul' => 'Jul',
	'Month_aug' => 'Ago',
	'Month_sep' => 'Sep',
	'Month_oct' => 'Oct',
	'Month_nov' => 'Nov',
	'Month_dec' => 'Dic',
	'Year' => 'A&ntilde;o',
	'Month' => 'Mes',
	'Number' => 'N&uacute;mero',

	'module_name_new_posts_by_month' => 'N&uacute;mero de mensajes por mes',
	'Posts_month' => 'N&uacute;mero de nuevos mensajes por mes',

	'module_name_new_topics_by_month' => 'N&uacute;mero de nuevos temas por mes',
	'Topics_month' => 'N&uacute;mero de nuevos temas por mes',

	'module_name_new_users_by_month' => 'Nuevos usuarios por mes',
	'Signup_month' => 'N&uacute;mero de nuevos usuarios por mes',

	'module_name_posting_by_day_of_week' => 'Mensajes por d&iacute;a de la semana',
	'Traffic_posts' => 'Tr&aacute;fico del d&iacute;a de la semana: mensajes',
	'Dow' => 'D&iacute;a',

	'module_name_registrations_by_day_of_week' => 'Registros por d&iacute;a de la semana',
	'Traffic_reg' => 'Tr&aacute;fico del d&iacute;a de la semana: registros',
	'New_users' => 'Nuevos usuarios',

	'module_name_site_hist_daily_stats_current_week' => 'Estad&iacute;sticas diarias de la semana en curso',

	'module_name_site_hist_hours_stats_current_day' => 'Estad&iacute;sticas del d&iacute;a en curso',

	'module_name_site_hist_month_top_posters' => 'Usuarios que mas han escrito este mes',
	'Month_Var' => '[%s]', // %s will be replaced by the current Month

	'module_name_site_hist_monthly_stats_current_year' => 'Estad&iacute;sticas mensuales del a&ntilde;o en curso',

	'module_name_site_hist_week_top_posters' => 'Usuarios que mas han escrito esta semana',
	'Week_Var' => '[%s]', // %s will be replaced by the current Week

	'module_name_top_attachments' => 'Adjuntos mas descargados',
	'File_name' => 'Nombre del archivo',
	'File_comment' => 'Comentario del archivo',

	'module_name_top_posters' => 'Los que mas escriben',

	'module_name_top_smilies' => 'Emoticonos mas usados',
	'smiley_url' => 'Imagen',
	'smiley_code' => 'C&oacute;digo',

	'module_name_top_words' => 'Palabras m&aacute;s usadas',
	'Word' => 'Texto',
	'Uses2' => 'Usos',

	'module_name_topics_by_day_of_week' => 'Temas nuevos por d&iacute;a durante la semana ',
	'Traffic_topics' => 'Tr&aacute;fico del d&iacute;a de la semana: temas',
	'Dow' => 'D&iacute;a',

	'module_name_users_from_where' => 'De d&oacute;nde son nuestros usuarios',
	'From_where_title' => 'De d&oacute;nde son los usuarios',
	'From_where' => 'De d&oacute;nde',

	'module_name_users_gender' => 'Sexo',
	'Users' => 'Usuarios',

	'module_name_users_ranks' => 'Rangos',
	'Rank_image' => 'Imagen',
	'Rank_range' => 'Mensajes',
	'Rank_special' => 'Rango especial',
	)
);

?>