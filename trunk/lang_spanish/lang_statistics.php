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
// 'Version_info' => '<br />Versi�n del MOD de estad�sticas %s', //%s = number
	'Version_info' => '<br />Estad�sticas recodificadas por <a href="http://www.icyphoenix.com/">Mighty Gorgon</a> basado en el MOD de estad�sticas, versi�n %s &copy; 2002 de <a href="http://www.opentools.de/board">Acyd Burn</a>',

// These Language Variables are available for all installed Modules
	'Rank' => 'Rango',
	'Percent' => 'Por ciento',
	'Graph' => 'Gr�fico',
	'Uses' => 'Usos',
	'How_many' => 'Cu�ntos',

// Main Language

// Page Header/Footer
	'Install_info' => 'Instalado el %s', //%s = date
	'Viewed_info' => 'P�gina de estad�sticas cargada %d veces', //%d = number
	'Statistics_title' => 'Estad�sticas del foro',

// Admin Language
	'Statistics_management' => 'M�dulos de la estad�stica',
	'Statistics_config' => 'Configuraci�n de las estad�sticas',

// Statistics Config
	'Statistics_config_title' => 'Configuraci�n de las estad�sticas',

	'Return_limit' => 'L�mite de vuelta',
	'Return_limit_desc' => 'El n�mero de objetos a incluir en cada rango. Esto es autom�tico para todos los m�dulos especificados aqu�.',
	'Clear_cache' => 'Limpiar el cach� de los m�dulos',
	'Clear_cache_desc' => 'Borrar todos los archivos de cach� actuales de todos los m�dulos',
	'Modules_directory' => 'Directorio de los m�dulos',
	'Modules_directory_desc' => 'El directorio relativo al inicio de Icy Phoenix donde est�n situados los m�dulos. F�jese que las barras c�mo / o \ no se utilizan!',

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
	'Auth_settings_updated' => 'Ajustes de autorizaci�n - [Siempre son actualizados]',

// Modules Management
	'Back_to_management' => 'Volver a la pantalla de administraci�n de los m�dulos',
	'Statistics_modules_title' => 'M�dulo de administraci�n de las estad�sticas',

	'Module_name' => 'Nombre',
	'Module_file_name' => 'Nombre del m�dulo',
	'Modules_order_update' => 'M�dulos actualizados',
	'Directory_name' => 'Nombre del directorio',
	'Status' => 'Estado',
	'Update_time_minutes' => 'Actualizar tiempo en minutos',
	'Update_time_desc' => 'Intervalo de tiempo (en minutos) de refresco del cach� por uno nuevo.',
	'Auto_set_update_time' => 'Determina y fija el tiempo recomendado para cada instalaci�n (y activaci�n) de los m�dulos. ATENCI�N: puede ser largo.',
	'Uninstall_module' => 'M�dulo de desinstalaci�n',
	'Uninstall_module_desc' => 'Marca el m�dulo con el estado "No instalado", de modo que puede reinstalarlo con el comando de instalaci�n. Este sistema no suprime el m�dulo de sus ficheros, por lo que debe suprimir la carpeta del modulo manualmente para quitarlo por completo.',
	'Active_desc' => 'La opci�n de si el m�dulo es activo, as� se mostrar� dependiendo de los permisos del sistema.',
	'Go' => 'Ir',
	'Update_Modules' => 'Actualizar m�dulos',

	'Not_allowed_to_install' => 'No puede instalar este m�dulo. Principalmente, la raz�n es que no ha instalado un MOD necesario para el funcionamiento del m�dulo. Contacte con el autor de este m�dulo si tiene preguntas y si esta informaci�n no le soluciona el problema.',
	'Wrong_stats_mod_version' => 'No puede instalar este m�dulo porque la versi�n del MOD de la estad�stica no es compatible con la versi�n requerida por el m�dulo. Para instalar y arrancar el m�dulo, necesita por lo menos la versi�n %s del MOD de la estad�stica.', // replace %s with Version (2.1.3 for example)
	'Module_install_error' => 'Hab�a un error de alg�n tipo en la instalaci�n de este m�dulo. Probablemente, algunos comandos de SQL podr�an no haberse ejecutado. Compru�belo para mayor seguridad.',

	'Preview_debug_info' => 'Este m�dulo ha sido generado en %f segundos: %d consultas se han ejecutado.', // Replace %f with seconds and %d with queries
	'Update_time_recommend' => 'El MOD de estad�sticas recomienda (dependiendo de la informaci�n) una actualizaci�n cada <b>%d</b> minutos.', // Replace %d with Minutes

// Modules

	'module_name__stats_overview_section' => 'Descripci�n de la estad�stica',

	'module_name_admin_statistics' => 'Estad�sticas administrativas',
	'Statistic' => 'Estad�stica',
	'Value' => 'Valor',
	'Number_posts' => 'Numero de mensajes',
	'Posts_per_day' => 'Mensajes por d�a',
	'Number_topics' => 'Numero de temas',
	'Topics_per_day' => 'Temas por d�a',
	'Number_users' => 'Numero de usuarios',
	'Users_per_day' => 'Usuarios por d�a',
	'Board_started' => 'Foro iniciado',
	'Avatar_dir_size' => 'Tama�o del directorio de avatares',
	'Database_size' => 'Tama�o de la base de datos',
	'Gzip_compression' => 'Compresi�n gzip',
	'Not_available' => 'No disponible',
	'Board_Up_Days' => 'Foro funcionando',
	'Latest_Reg_User' => '�ltimo usuario registrado',
	'Latest_Reg_User_Date' => 'Fecha del �ltimo usuario registrado',
	'Most_Ever_Online' => 'La mayor�a de usuarios conectados',
	'Most_Ever_Online_Date' => 'Fecha de la mayor�a de usuarios conectados',
	'Disk_usage' => 'Disco usado',
	'Title' => 'Media de mensajes por usuario',
	'Average_Posts' => 'Media de mensajes por usuario:',

	'module_name_average_posts_per_user' => 'Media de mensajes por usuario',

	'module_name_age_clusters' => 'Clusters de edad',
	'AGE' => 'Edad',
	'LESS_THAN' => 'Menor de',
	'MORE_THAN' => 'Mayor de',

	'module_name_fastest_users' => 'Usuarios m�s r�pidos',
	'time_on_forum' => 'D�as en el foro',
	'posts_day' => 'Mensajes por d�a',
	'Statistics' => 'Estad�sticas',

	'module_name_interesting_topics' => 'Temas m�s interesantes',
	'Rate' => 'Valoraci�n (lecturas/mensajes)',
	'Topic' => 'Discusi�n',

	'module_name_latest_topics' => '�ltimos temas',
	'Rank' => 'Rango',
	'Latest_Topics' => '�ltimos temas',
	'Post_time' => 'Fecha del mensaje',

	'module_name_month_stat' => 'Estad�sticas mensuales',
	'New_users' => 'Nuevos usuarios',
	'New_replies' => 'Nuevas respuestas',
	'New_topics' => 'Nuevos temas',
	'Avg_Table' => 'Tabla de media',
	'Sum_Table' => 'Tabla de suma',

	'module_name_most_active_topics' => 'Temas m�s activos',

	'module_name_most_active_topicstarter' => 'Usuarios que m�s temas han creado',

	'module_name_most_logged_on_users' => 'Usuarios que m�s se han conectado',
	'Time2' => 'Fecha de conexi�n',

	'module_name_most_used_languages' => 'Lenguajes usados',
	'Language' => 'Lenguaje',

	'module_name_most_used_styles' => 'Estilos usados',
	'Style' => 'Estilos',

	'module_name_most_viewed_topics' => 'Temas m�s vistos',
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
	'Year' => 'A�o',
	'Month' => 'Mes',
	'Number' => 'N�mero',

	'module_name_new_posts_by_month' => 'N�mero de mensajes por mes',
	'Posts_month' => 'N�mero de nuevos mensajes por mes',

	'module_name_new_topics_by_month' => 'N�mero de nuevos temas por mes',
	'Topics_month' => 'N�mero de nuevos temas por mes',

	'module_name_new_users_by_month' => 'Nuevos usuarios por mes',
	'Signup_month' => 'N�mero de nuevos usuarios por mes',

	'module_name_posting_by_day_of_week' => 'Mensajes por d�a de la semana',
	'Traffic_posts' => 'Tr�fico del d�a de la semana: mensajes',
	'Dow' => 'D�a',

	'module_name_registrations_by_day_of_week' => 'Registros por d�a de la semana',
	'Traffic_reg' => 'Tr�fico del d�a de la semana: registros',
	'New_users' => 'Nuevos usuarios',

	'module_name_site_hist_daily_stats_current_week' => 'Estad�sticas diarias de la semana en curso',

	'module_name_site_hist_hours_stats_current_day' => 'Estad�sticas del d�a en curso',

	'module_name_site_hist_month_top_posters' => 'Usuarios que mas han escrito este mes',
	'Month_Var' => '[%s]', // %s will be replaced by the current Month

	'module_name_site_hist_monthly_stats_current_year' => 'Estad�sticas mensuales del a�o en curso',

	'module_name_site_hist_week_top_posters' => 'Usuarios que mas han escrito esta semana',
	'Week_Var' => '[%s]', // %s will be replaced by the current Week

	'module_name_top_attachments' => 'Adjuntos mas descargados',
	'File_name' => 'Nombre del archivo',
	'File_comment' => 'Comentario del archivo',

	'module_name_top_posters' => 'Los que mas escriben',

	'module_name_top_smilies' => 'Emoticonos mas usados',
	'smiley_url' => 'Imagen',
	'smiley_code' => 'C�digo',

	'module_name_top_words' => 'Palabras m�s usadas',
	'Word' => 'Texto',
	'Uses2' => 'Usos',

	'module_name_topics_by_day_of_week' => 'Temas nuevos por d�a durante la semana ',
	'Traffic_topics' => 'Tr�fico del d�a de la semana: temas',
	'Dow' => 'D�a',

	'module_name_users_from_where' => 'De d�nde son nuestros usuarios',
	'From_where_title' => 'De d�nde son los usuarios',
	'From_where' => 'De d�nde',

	'module_name_users_gender' => 'Sexo',
	'Users' => 'Usuarios',

	'module_name_users_ranks' => 'Rangos',
	'Rank_image' => 'Imagen',
	'Rank_range' => 'Mensajes',
	'Rank_special' => 'Rango especial',
	)
);

?>