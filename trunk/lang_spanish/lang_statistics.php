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
// 'Version_info' => '<br />Versión del MOD de estadísticas %s', //%s = number
	'Version_info' => '<br />Estadísticas recodificadas por <a href="http://www.icyphoenix.com/">Mighty Gorgon</a> basado en el MOD de estadísticas, versión %s &copy; 2002 de <a href="http://www.opentools.de/board">Acyd Burn</a>',

// These Language Variables are available for all installed Modules
	'Rank' => 'Rango',
	'Percent' => 'Por ciento',
	'Graph' => 'Gráfico',
	'Uses' => 'Usos',
	'How_many' => 'Cuántos',

// Main Language

// Page Header/Footer
	'Install_info' => 'Instalado el %s', //%s = date
	'Viewed_info' => 'Página de estadísticas cargada %d veces', //%d = number
	'Statistics_title' => 'Estadísticas del foro',

// Admin Language
	'Statistics_management' => 'Módulos de la estadística',
	'Statistics_config' => 'Configuración de las estadísticas',

// Statistics Config
	'Statistics_config_title' => 'Configuración de las estadísticas',

	'Return_limit' => 'Límite de vuelta',
	'Return_limit_desc' => 'El número de objetos a incluir en cada rango. Esto es automático para todos los módulos especificados aquí.',
	'Clear_cache' => 'Limpiar el caché de los módulos',
	'Clear_cache_desc' => 'Borrar todos los archivos de caché actuales de todos los módulos',
	'Modules_directory' => 'Directorio de los módulos',
	'Modules_directory_desc' => 'El directorio relativo al inicio de Icy Phoenix donde están situados los módulos. Fíjese que las barras cómo / o \ no se utilizan!',

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
	'Move_up' => 'Mover arriba',
	'Move_down' => 'Mover abajo',
	'Update_time' => 'Actualizar fecha',
	'Auth_settings_updated' => 'Ajustes de autorización - [Siempre son actualizados]',

// Modules Management
	'Back_to_management' => 'Volver a la pantalla de administración de los módulos',
	'Statistics_modules_title' => 'Módulo de administración de las estadísticas',

	'Module_name' => 'Nombre',
	'Module_file_name' => 'Nombre del módulo',
	'Modules_order_update' => 'Módulos actualizados',
	'Directory_name' => 'Nombre del directorio',
	'Status' => 'Estado',
	'Update_time_minutes' => 'Actualizar tiempo en minutos',
	'Update_time_desc' => 'Intervalo de tiempo (en minutos) de refresco del caché por uno nuevo.',
	'Auto_set_update_time' => 'Determina y fija el tiempo recomendado para cada instalación (y activación) de los módulos. ATENCIÓN: puede ser largo.',
	'Uninstall_module' => 'Módulo de desinstalación',
	'Uninstall_module_desc' => 'Marca el módulo con el estado "No instalado", de modo que puede reinstalarlo con el comando de instalación. Este sistema no suprime el módulo de sus ficheros, por lo que debe suprimir la carpeta del modulo manualmente para quitarlo por completo.',
	'Active_desc' => 'La opción de si el módulo es activo, así se mostrará dependiendo de los permisos del sistema.',
	'Go' => 'Ir',
	'Update_Modules' => 'Actualizar módulos',

	'Not_allowed_to_install' => 'No puede instalar este módulo. Principalmente, la razón es que no ha instalado un MOD necesario para el funcionamiento del módulo. Contacte con el autor de este módulo si tiene preguntas y si esta información no le soluciona el problema.',
	'Wrong_stats_mod_version' => 'No puede instalar este módulo porque la versión del MOD de la estadística no es compatible con la versión requerida por el módulo. Para instalar y arrancar el módulo, necesita por lo menos la versión %s del MOD de la estadística.', // replace %s with Version (2.1.3 for example)
	'Module_install_error' => 'Había un error de algún tipo en la instalación de este módulo. Probablemente, algunos comandos de SQL podrían no haberse ejecutado. Compruébelo para mayor seguridad.',

	'Preview_debug_info' => 'Este módulo ha sido generado en %f segundos: %d consultas se han ejecutado.', // Replace %f with seconds and %d with queries
	'Update_time_recommend' => 'El MOD de estadísticas recomienda (dependiendo de la información) una actualización cada <b>%d</b> minutos.', // Replace %d with Minutes

// Modules

	'module_name__stats_overview_section' => 'Descripción de la estadística',

	'module_name_admin_statistics' => 'Estadísticas administrativas',
	'Statistic' => 'Estadística',
	'Value' => 'Valor',
	'Number_posts' => 'Numero de mensajes',
	'Posts_per_day' => 'Mensajes por día',
	'Number_topics' => 'Numero de temas',
	'Topics_per_day' => 'Temas por día',
	'Number_users' => 'Numero de usuarios',
	'Users_per_day' => 'Usuarios por día',
	'Board_started' => 'Foro iniciado',
	'Avatar_dir_size' => 'Tamaño del directorio de avatares',
	'Database_size' => 'Tamaño de la base de datos',
	'Gzip_compression' => 'Compresión gzip',
	'Not_available' => 'No disponible',
	'Board_Up_Days' => 'Foro funcionando',
	'Latest_Reg_User' => 'Último usuario registrado',
	'Latest_Reg_User_Date' => 'Fecha del último usuario registrado',
	'Most_Ever_Online' => 'La mayoría de usuarios conectados',
	'Most_Ever_Online_Date' => 'Fecha de la mayoría de usuarios conectados',
	'Disk_usage' => 'Disco usado',
	'Title' => 'Media de mensajes por usuario',
	'Average_Posts' => 'Media de mensajes por usuario:',

	'module_name_average_posts_per_user' => 'Media de mensajes por usuario',

	'module_name_age_clusters' => 'Clusters de edad',
	'AGE' => 'Edad',
	'LESS_THAN' => 'Menor de',
	'MORE_THAN' => 'Mayor de',

	'module_name_fastest_users' => 'Usuarios más rápidos',
	'time_on_forum' => 'Días en el foro',
	'posts_day' => 'Mensajes por día',
	'Statistics' => 'Estadísticas',

	'module_name_interesting_topics' => 'Temas más interesantes',
	'Rate' => 'Valoración (lecturas/mensajes)',
	'Topic' => 'Discusión',

	'module_name_latest_topics' => 'Últimos temas',
	'Rank' => 'Rango',
	'Latest_Topics' => 'Últimos temas',
	'Post_time' => 'Fecha del mensaje',

	'module_name_month_stat' => 'Estadísticas mensuales',
	'New_users' => 'Nuevos usuarios',
	'New_replies' => 'Nuevas respuestas',
	'New_topics' => 'Nuevos temas',
	'Avg_Table' => 'Tabla de media',
	'Sum_Table' => 'Tabla de suma',

	'module_name_most_active_topics' => 'Temas más activos',

	'module_name_most_active_topicstarter' => 'Usuarios que más temas han creado',

	'module_name_most_logged_on_users' => 'Usuarios que más se han conectado',
	'Time2' => 'Fecha de conexión',

	'module_name_most_used_languages' => 'Lenguajes usados',
	'Language' => 'Lenguaje',

	'module_name_most_used_styles' => 'Estilos usados',
	'Style' => 'Estilos',

	'module_name_most_viewed_topics' => 'Temas más vistos',
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
	'Year' => 'Año',
	'Month' => 'Mes',
	'Number' => 'Número',

	'module_name_new_posts_by_month' => 'Número de mensajes por mes',
	'Posts_month' => 'Número de nuevos mensajes por mes',

	'module_name_new_topics_by_month' => 'Número de nuevos temas por mes',
	'Topics_month' => 'Número de nuevos temas por mes',

	'module_name_new_users_by_month' => 'Nuevos usuarios por mes',
	'Signup_month' => 'Número de nuevos usuarios por mes',

	'module_name_posting_by_day_of_week' => 'Mensajes por día de la semana',
	'Traffic_posts' => 'Tráfico del día de la semana: mensajes',
	'Dow' => 'Día',

	'module_name_registrations_by_day_of_week' => 'Registros por día de la semana',
	'Traffic_reg' => 'Tráfico del día de la semana: registros',
	'New_users' => 'Nuevos usuarios',

	'module_name_site_hist_daily_stats_current_week' => 'Estadísticas diarias de la semana en curso',

	'module_name_site_hist_hours_stats_current_day' => 'Estadísticas del día en curso',

	'module_name_site_hist_month_top_posters' => 'Usuarios que mas han escrito este mes',
	'Month_Var' => '[%s]', // %s will be replaced by the current Month

	'module_name_site_hist_monthly_stats_current_year' => 'Estadísticas mensuales del año en curso',

	'module_name_site_hist_week_top_posters' => 'Usuarios que mas han escrito esta semana',
	'Week_Var' => '[%s]', // %s will be replaced by the current Week

	'module_name_top_attachments' => 'Adjuntos mas descargados',
	'File_name' => 'Nombre del archivo',
	'File_comment' => 'Comentario del archivo',

	'module_name_top_posters' => 'Los que mas escriben',

	'module_name_top_smilies' => 'Emoticonos mas usados',
	'smiley_url' => 'Imagen',
	'smiley_code' => 'Código',

	'module_name_top_words' => 'Palabras más usadas',
	'Word' => 'Texto',
	'Uses2' => 'Usos',

	'module_name_topics_by_day_of_week' => 'Temas nuevos por día durante la semana ',
	'Traffic_topics' => 'Tráfico del día de la semana: temas',
	'Dow' => 'Día',

	'module_name_users_from_where' => 'De dónde son nuestros usuarios',
	'From_where_title' => 'De dónde son los usuarios',
	'From_where' => 'De dónde',

	'module_name_users_gender' => 'Sexo',
	'Users' => 'Usuarios',

	'module_name_users_ranks' => 'Rangos',
	'Rank_image' => 'Imagen',
	'Rank_range' => 'Mensajes',
	'Rank_special' => 'Rango especial',
	)
);

?>