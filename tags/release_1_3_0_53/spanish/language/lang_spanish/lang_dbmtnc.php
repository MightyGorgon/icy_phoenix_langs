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
* Philipp Kordowich
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

// Functions available
// Usage: $mtnc[] = array(internal Name, Name of Function, Description of Function, Warning Message (leave empty to avoid), Number of Check function (Integer))
// Use $mtnc[] = array('--', '', '', '', 0) for a space row (you can us a different check function)
$mtnc[] = array('statistic',
	'Estadísticas',
	'Muestra información acerca del foro y la base de datos.',
	'',
	0);
$mtnc[] = array('config',
	'Configuración',
	'Permite la configuración de mantenimiento de la BD.',
	'',
	5);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_user',
	'Comprobar tablas de usuario y de grupos',
	'Esto comprobará las tablas de usuarios y de grupos para saber si hay errores, y restaurará los grupos de los usuarios que fallan.',
	'Usted perderá todos los grupos sin algún usuario al realizar esta acción. ¿Desea continuar?',
	0);
$mtnc[] = array('check_post',
	'Comprobar tablas de mensajes y de temas',
	'Esto comprobará las tablas de mensajes y de temas para saber si hay errores.',
	'Usted perderá todos los mensajes sin texto. ¿Desea continuar?',
	0);
$mtnc[] = array('check_vote',
	'Comprobar tablas de votos',
	'Esto comprobará las tablas de votos para saber si hay errores.',
	'Usted perderá todos los datos de voto sin un voto correspondiente. ¿Desea continuar?',
	0);
$mtnc[] = array('check_pm',
	'Comprobar tablas de mensajes privados',
	'Esto comprobará las tablas de mensajes privados para saber si hay errores.',
	'Los mensajes sin leer serán eliminados cuando no exista el remitente o el receptor. ¿Desea continuar?',
	0);
$mtnc[] = array('check_config',
	'Comprobar tabla de configuración',
	'Esto comprobará la tabla de configuración para saber si hay entradas que faltan.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_search_wordmatch',
	'Comprobar la tabla de palabras buscadas',
	'Esto comprobará la tabla de palabras buscadas para saber si hay errores. Esta tabla se usa para la función de búsqueda.',
	'',
	0);
$mtnc[] = array('check_search_wordlist',
	'Comprobar la tabla de lista de palabras de búsqueda',
	'Esto removerá todas las palabras innecesarias en la lista de palabras usada para la búsqueda.',
	'Esta función puede llevar un cierto tiempo para ejecutarse. No es necesario realizar esta comprobación, pero hacerla puede reducir un poco el tamaño de la base de datos. ¿Desea continuar?',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('synchronize_post',
	'Sincronizar foros y temas',
	'Esto sincronizará los contadores de mensajes y los datos de los mensajes en los foros y en los temas.',
	'Este comando puede llevar un cierto tiempo para terminar. Si su servidor no permite el uso del comando set_time_limit(), este comando puede ser interrumpido por PHP. Ningún dato se perderá por esto, pero ciertos datos pueden no ser actualizados. ¿Desea continuar?',
	0);
$mtnc[] = array('synchronize_user',
	'Sincronizar contadores de mensajes del usuario',
	'Esto sincronizará los contadores de mensaje para los usuarios.',
	'<b>Atención:</b> Los mensajes borrados por el PRUNE, normalmente no son restados del contador de mensajes. Al hacer correr este comando, los mensajes eliminados por el PRUNE del foro serán restados del contador y no podrán ser restaurados. ¿Desea continuar?',
	6);
$mtnc[] = array('synchronize_mod_state',
	'Sincronizar el estatus de moderador',
	'Esto sincronizará el estatus del moderador en la tabla de usuario.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_date',
	'Actualizar la fecha del último mensaje',
	'Esto actualizará los datos de mensajes para el futuro. Esto solucionará ediciones donde los usuarios obtienen un mensaje diciendo que no les es permitido enviar un mensaje tan pronto después del anterior.',
	'En cualquier momento de un mensajes para el futuro será fijado al tiempo actual. ¿Desea continuar?',
	0);
$mtnc[] = array('reset_sessions',
	'Poner a cero todas las sesiones',
	'Esto pondrá a cero todas las sesiones actuales, vaciando la tabla de sesiones.',
	'Todos los usuarios activos perderán su sesión actual y sus resultados de búsqueda. ¿Desea continuar?',
	0);
$mtnc[] = array('--', '', '', '', 8);
$mtnc[] = array('sync_topics_subjects',
	'Sincronizar títulos de los temas',
	'Esta función sincronizará los títulos de los temas del primer mensaje en todo el tema. En condiciones normales no necesita esta opción.',
	'Esto sincronizará los títulos de los temas del primer mensaje en todo el tema. El foro no estará disponible mientras dure el proceso. ¿Desea proceder?',
	0);
$mtnc[] = array('rebuild_search_index',
	'Reconstruir el índice de búsqueda',
	'Esta función reconstruirá el índice usado para buscar. Usted no necesita esta función en condiciones normales.',
	'Esto suprimirá el índice de búsqueda por completo y lo reconstruirá. Esto puede llevar varias horas hasta completar la tarea. El foro no será accesible durante este período. ¿Desea continuar?',
	7);
$mtnc[] = array('proceed_rebuilding',
	'Recomenzar reconstrucción',
	'Use esta función si la reconstrucción del índice de búsqueda fue interrumpida.',
	'',
	4);
$mtnc[] = array('--', '', '', '', 1);
$mtnc[] = array('check_db',
	'Comprobar base de datos',
	'Comprueba la base de datos para saber si hay errores.',
	'',
	1);
$mtnc[] = array('optimize_db',
	'Optimizar base de datos',
	'Optimiza las tablas. Esto reducirá el tamaño de la base de datos luego de eliminar porciones de registros, etc.',
	'',
	1);
$mtnc[] = array('repair_db',
	'Reparar base de datos',
	'Fija o repara la base de datos cuando se encuentra un error.',
	'Sólo debe realizar esta acción si hay un informe de error en la comprobación de la base de datos. ¿Proceder?',
	1);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_auto_increment',
	'Reajustar valores auto incrementados',
	'Esta función reajusta los valores auto incrementados. Esto debería realizarse sólo si parece haber un problema al insertar nuevos datos en las tablas.',
	'¿Realmente desea reajustar los valores auto incrementados? Ningún dato se perderá, pero esta función sólo debe ser usada si es necesario. ',
	0);
$mtnc[] = array('heap_convert',
	'Convertir tabla de sesiones',
	'Esta función convierte la tabla de sesiones a las tablas del "montón". Esto se hace normalmente durante la instalación, y acelerará el phpBB un poco. Debe utilizar esta función si su tabla de sesión no es del tipo de tablas del "montón".',
	'¿Desea realmente convertir la tabla?',
	2);
$mtnc[] = array('--', '', '', '', 3);
$mtnc[] = array('unlock_db',
	'Reabrir el foro',
	'Use esta función si obtuvo un error durante una operación hecha anteriormente y que todavía mantiene el foro desactivado.',
	'',
	3);

$lang = array_merge($lang, array(
	'DB_Maintenance' => 'Herramientras base de datos',
	'DB_Maintenance_Description' => 'Aquí puede comprobar su base de datos para saber si hay inconsistencias y errores.<br /><b>Atención:</b> Algunos operaciones tardarán mas tiempo en realizarse. Su foro será <b>Cerrado</b> durante esas operaciones.</br /><br /><b>¡Se recomienda siempre hacer una copia de seguridad de su base de datos antes de usar cualquiera de las funciones enumeradas abajo!</b>',
	'Function' => 'Función',
	'Function_Description' => 'Descripción',

	'Incomplete_configuration' => 'El ajuste para <b>%s</b> no fue encontrado en la configuración del foro.  El mantenimiento de la BD no puede funcionar sin este ajuste.<br />Usted se olvidó quizá de ejecutar la consulta SQL según lo descrito en las instrucciones de instalación.',
	'dbtype_not_supported' => 'Perdone, esta función no es soportada por su base de datos',
	'no_function_specified' => 'No se especificó ninguna función',
	'function_unknown' => 'La función especificada es desconocida',
	'Old_MySQL_Version' => 'Perdone, su version de MySQL no soporta esta función. Por favor, use la versión 3.23.17 o posterior.',

	'Back_to_DB_Maintenance' => 'Volver a mantenimiento de base de datos',
	'Processing_time' => 'Mantenimiento de BD tardó %f segundos en hacer las operaciones',

	'Lock_db' => 'Deshabilitar foro',
	'Unlock_db' => 'Habilitar foro',
	'Already_locked' => 'El foro ya está cerrado',
	'Ignore_unlock_command' => 'El foro fue cerrado al comenzar este comando. No se abrirá el foro',
	'Delay_info' => 'Faltan tres segundos para permitir que las acciones de la base de datos acaben...',

	'Affected_row' => 'Una fila afectada',
	'Affected_rows' => '%d filas afectadas',
	'Done' => 'Hecho',
// The following variable is used when nothing hat to be fixed in the database. It needs the complete paragraph-tag.
// If you do not want a message to be displayed in these cases, just leave the variable empty.
	'Nothing_to_do' => '<p class="gen"><i>Nada que hacer :-)</i></p><br />' . "\n",

// Names for new records in several tables
	'New_cat_name' => 'Foros restaurados',
	'New_forum_name' => 'Temas restaurados',
	'New_topic_name' => 'Mensajes restaurados',
	'Restored_topic_name' => 'Tema restaurado',
	'New_poster_name' => 'Mensaje restaurado', // Name for Poster of a restored post

// Function specific vars
// statistic
	'Statistic_title' => 'Estadísticas del foro y de la BD',
	'Database_table_info' => 'Las estadísticas de la base de datos entregarán tres valores: para todas las tablas de la base de datos, para todas las tablas proporcionadas por phpBB por defecto (tablas base), y las comenzadas con el prefijo de las tablas del foro (tablas avanzadas).',
	'Board_statistic' => 'Estadísticas del foro',
	'Database_statistic' => 'Estadísticas de la base de datos',
	'Version_info' => 'Información de versión',
	'Thereof_deactivated_users' => 'de esos usuarios desactivados',
	'Thereof_Moderators' => 'de esos moderadores',
	'Thereof_Administrators' => 'de esos administradores',
	'Users_with_Admin_Privileges' => 'Usuarios con privilegios de administrador',
	'Number_tables' => 'Número de tablas',
	'Number_records' => 'Número de registros',
	'DB_size' => 'Tamaño de la base de datos',
	'Thereof_phpbb_core' => 'de esas tablas phpBB',
	'Thereof_phpbb_advanced' => 'de esas tablas avanzadas de phpBB',
	'Version_of_board' => 'Version del foro',
	'Version_of_mod' => 'Versión de mantenimiento de BD',
	'Version_of_PHP' => 'Versión de PHP',
	'Version_of_MySQL' => 'Versión de MySQL',
// config
	'Config_title' => 'Configuración de mantenimiento de BD',
	'Config_info' => 'Las siguientes opciones le permiten configurar el mantenimiento de la BD. Por favor, tenga en cuenta que el misconfiguration puede conducirle a resultados inesperados.',
	'General_Config' => 'Configuración general',
	'Rebuild_Config' => 'Configuración de la reconstrucción del índice de búsqueda',
	'Current_Rebuild_Config' => 'Configuración de la reconstrucción actual',
	'Rebuild_Settings_Explain' => 'Estos ajustes regulan el comportamiento del mantenimiento de la BD al reconstruir el índice de la búsqueda.',
	'Current_Rebuild_Settings_Explain' => 'Estos ajustes son utilizados por el mantenimiento de la BD para almacenar la posición de la reconstrucción actual. No hay necesidad de adaptar estos ajustes bajo condiciones normales.',
	'Disallow_postcounter' => 'Denegar sincronización del contador de mensajes del usuario',
	'Disallow_postcounter_Explain' => 'Esto inhabilitará la función para sincronizar los contadores de mensajes del usuario. Puede denegar esta función si no desea que los mensajes eliminados por el PRUNE sean restados de los contadores de mensajes de los usuarios.',
	'Disallow_rebuild' => 'Denegar reconstrucción del índice de búsqueda',
	'Disallow_rebuild_Explain' => 'Esto inhabilitará la reconstrucción del índice de la búsqueda. Sin embargo, una reconstrucción interrumpida se puede continuar.',
	'Rebuildcfg_Timelimit' => 'Tiempo máximo de ejecución para reconstruir (en segundos)',
	'Rebuildcfg_Timelimit_Explain' => 'Tiempo máximo usado para el primer paso al reconstruir (por defecto: 240). Este valor limita el tiempo de ejecución incluso si un período más largo fuese posible.',
	'Rebuildcfg_Timeoverwrite' => 'Cantidad fija de tiempo disponible para la ejecución (en segundos)',
	'Rebuildcfg_Timeoverwrite_Explain' => 'Tiempo fijo estimado disponible para la ejecución (por defecto: 0). Con 0 el resultado del cálculo se utiliza como tiempo de ejecución, cualquier otro valor sobrescribe el valor calculado.',
	'Rebuildcfg_Maxmemory' => 'Tamaño máximo del mensaje para reconstruir (en Kbytes)',
	'Rebuildcfg_Maxmemory_Explain' => 'Tamaño máximo de los mensajes indexados en un primer paso (por defecto: 500). Cuando la suma de los tamaños de los mensajes sobrepasan este valor, no se indexa ningún otro mensaje en el paso actual.',
	'Rebuildcfg_Minposts' => 'Mínimos mensajes a indexarse por paso',
	'Rebuildcfg_Minposts_Explain' => 'Número mínimo de mensajes indexados por paso (defecto: 3) define el número de mensajes que al menos son indexados por paso.',
	'Rebuildcfg_PHP3Only' => 'Utilice solamente el método estándar compatible con PHP 3 para la indexación',
	'Rebuildcfg_PHP3Only_Explain' => 'El mantenimiento de la BD utiliza un método avanzado para la indexación cuando están disponibles PHP 4.0.5 o posteriores. Puede apagar el método avanzado, de modo que el mantenimiento de la BD haga uso el método estándar del foro.',
	'Rebuildcfg_PHP4PPS' => 'Mensajes indexados por segundo al usar un método avanzado de indexar',
	'Rebuildcfg_PHP4PPS_Explain' => 'Valor estimado de los mensajes que se pueden indexar por segundo al usar el método avanzado de la indexación (defecto: 8)',
	'Rebuildcfg_PHP3PPS' => 'Mensajes indexados por segundo al usar el método estándar de la indexación',
	'Rebuildcfg_PHP3PPS_Explain' => 'Valor estimado de los mensajes que se pueden indexar por segundo al usar el método estándar de indexación (por defecto: 1)',
	'Rebuild_Pos' => 'Último mensaje indexado',
	'Rebuild_Pos_Explain' => 'ID del último mensaje indexado satisfactoriamente. Es -1 cuando la reconstrucción ha finalizado.',
	'Rebuild_End' => 'Último mensaje a indexar',
	'Rebuild_End_Explain' => 'ID del último mensaje para ser indexado. Es 0 cuando la reconstrucción ha finalizado.',
	'Dbmtnc_config_updated' => 'Configuración actualizada satisfactoriamente',
	'Click_return_dbmtnc_config' => 'Pulse %saquí%s para volver a la configuración',
// check_user
	'Checking_user_tables' => 'Comprobación de las tablas de usuario y de grupo',
	'Checking_missing_anonymous' => 'Comprobación de cuentas anónimas perdidas',
	'Anonymous_recreated' => 'Cuenta anónima reconstruida',
	'Checking_incorrect_pending_information' => 'Comprobación para información incorrecta pendiente',
	'Updating_invalid_pendig_user' => 'Actualizar la información inválida pendiente de un usuario',
	'Updating_invalid_pendig_users' => 'Actualizar la información inválida pendiente de %d usuarios',
	'Updating_pending_information' => 'Actualizar la información pendiente de grupos de usuarios solos',
	'Checking_missing_user_groups' => 'Comprobación para usuarios con múltiples grupos o no pertenecientes a un solo grupo',
	'Found_multiple_SUG' => 'Usuarios con múltiples grupos de usuarios encontrados',
	'Resolving_user_id' => 'Resolución de usuarios a agrupar',
	'Removing_groups' => 'Remover grupos',
	'Removing_user_groups' => 'Removiendo usuario para agrupar la conexión',
	'Recreating_SUG' => 'Reconstrucción de los grupos de sólo un usuario para el usuario',
	'Checking_for_invalid_moderators' => 'Comprobación para saber si hay ajustes inválidos del moderador del grupo',
	'Updating_Moderator' => 'Fija al usuario actual como moderador del grupo',
	'Checking_moderator_membership' => 'Comprobar usuarios asociados al grupo de moderadores',
	'Updating_mod_membership' => 'Actualizar usuarios asociados al grupo de moderadores',
	'Moderator_added' => 'Moderador añadido al grupo',
	'Moderator_changed_pending' => 'Estado pendiente del moderador cambiado',
	'Remove_invalid_user_data' => 'Quitar datos inválidos del usuario en la tabla de usuarios-grupos',
	'Remove_empty_groups' => 'Quitar grupos vacíos',
	'Remove_invalid_group_data' => 'Quitar datos inválidos del grupo en la tabla de usuarios-grupos',
	'Checking_ranks' => 'Comprobar rangos inválidos',
	'Invalid_ranks_found' => 'Usuarios encontrados con rangos inválidos',
	'Removing_invalid_ranks' => 'Quitar rangos inválidos',
	'Checking_themes' => 'Comprobación de ajustes inválidos en los temas',
	'Updating_users_without_style' => 'Actualizados los usuarios sin temas seleccionados',
	'Default_theme_invalid' => '<b>Atención:</b> El estilo por defecto es inválido. Por favor, compruebe la configuración.',
	'Updating_themes' => 'Actualizar los temas inválidos al tema %d',
	'Checking_theme_names' => 'Comprobar datos inválidos en el nombre del tema',
	'Removing_invalid_theme_names' => 'Remover datos inválidos del nombre del tema',
	'Checking_languages' => 'Comprobar ajustes inválidos del lenguaje',
	'Invalid_languages_found' => 'Usuarios encontrados con ajustes inválidos del lenguaje',
	'Default_language_invalid' => '<b>Atención:</b> El lenguaje por defecto es inválido. Por favor, compruebe su configuración.',
	'English_language_invalid' => '<b>Atención:</b> El lenguaje por defecto es inválido y los archivos del lenguaje en inglés no existen. Tiene que restaurar el directorio <b>lang_english</b>.',
	'Changing_language' => 'Cambiar lenguaje \'%s\' a \'%s\'',
	'Remove_invalid_ban_data' => 'Remover datos inválidos de BAN',
	'Remove_invalid_session_keys' => 'Quitar claves de sesión inválidas',
// check_post
	'Checking_post_tables' => 'Comprobar tablas de mensajes y temas',
	'Checking_invalid_forums' => 'Comprobar foros con categorías inválidas',
	'Invalid_forums_found' => 'Foros con categorías inválidas encontrados',
	'Setting_category' => 'Mover foros a la categoría \'%s\'',
	'Checking_posts_wo_text' => 'Comprobar mensajes sin texto',
	'Posts_wo_text_found' => 'Mensajes sin texto encontrados',
	'Deleting_post_wo_text' => '%d (Tema: %s (%d); Usuario: %s (%d))',
	'Deleting_Posts' => 'Eliminar datos del mensaje',
	'Checking_topics_wo_post' => 'Comprobar temas sin un mensaje',
	'Topics_wo_post_found' => 'Temas sin un mensaje encontrados',
	'Deleting_topics' => 'Eliminar datos del tema',
	'Checking_invalid_topics' => 'Comprobar temas con foro inválido',
	'Invalid_topics_found' => 'Temas con foro inválido encontrados',
	'Setting_forum' => 'Mover temas al foro \'%s\'',
	'Checking_invalid_posts' => 'Comprobar mensajes con asuntos inválidos',
	'Invalid_posts_found' => 'Mensajes con asuntos inválidos encontrados',
	'Setting_topic' => 'Mover mensajes %s al tema \'%s\' (%d) en el foro \'%s\'',
	'Checking_invalid_forums_posts' => 'Comprobar mensajes con foro inválido',
	'Invalid_forum_posts_found' => 'Mensajes con foro inválido encontrados',
	'Setting_post_forum' => '%d: mover desde el foro \'%s\' (%d) a \'%s\' (%d)',
	'Checking_texts_wo_post' => 'Comprobar los mensajes sin texto',
	'Invalid_texts_found' => 'mensajes sin texto encontrados',
	'Recreating_post' => 'Reconstruir mensaje %d y moverlo al tema \'%s\' en el foro \'%s\'<br />Extracto: %s',
	'Checking_invalid_topic_posters' => 'Comprobar temas para saber si hay autores inválidos',
	'Invalid_topic_poster_found' => 'Temas con autores inválidos encontrados',
	'Updating_topic' => 'Actualizar tema %d (Autor: %d -&gt; %d)',
	'Checking_invalid_posters' => 'Comprobar mensajes para saber si hay autores inválidos',
	'Invalid_poster_found' => 'Mensajes con autores inválidos encontrados',
	'Updating_posts' => 'Actualizar mensajes',
	'Checking_moved_topics' => 'Comprobar temas movidos',
	'Deleting_invalid_moved_topics' => 'Eliminar temas movidos inválidos',
	'Updating_invalid_moved_topic' => 'Actualizando información inválida movida para temas no movidos',
	'Updating_invalid_moved_topics' => 'Actualizando información inválida movida para %d temas no movidos',
	'Checking_prune_settings' => 'Comprobar datos inválidos del PRUNE',
	'Removing_invalid_prune_settings' => 'Remover ajustes inválidos del PRUNE',
	'Updating_invalid_prune_setting' => 'Actualizar ajustes inválidos del PRUNE de un foro',
	'Updating_invalid_prune_settings' => 'Actualizar ajustes inválidos del PRUNE de %d foros',
	'Checking_topic_watch_data' => 'Comprobar si hay temas observados inválidos',
	'Checking_auth_access_data' => 'Comprobar datos inválidos de la autorización del grupo',
	'Must_synchronize' => 'Tiene que sincronizar los datos del mensaje antes de usar el foro. Pulse para proceder.',
// check_vote
	'Checking_vote_tables' => 'Comprobar tablas de votos',
	'Checking_votes_wo_topic' => 'Comprobar votos sin su tema correspondiente',
	'Votes_wo_topic_found' => 'Votos sin tema encontrados',
	'Invalid_vote' => '%s (%d) - Fecha de inicio: %s - Fecha de término: %s',
	'Deleting_votes' => 'Eliminar votos',
	'Checking_votes_wo_result' => 'Comprobar votos sin ningún resultado',
	'Votes_wo_result_found' => 'Votos sin resultado encontrados',
	'Checking_topics_vote_data' => 'Comprobar datos de voto en tablas de temas',
	'Updating_topics_wo_vote' => 'Actualizar temas marcados como votos sin un voto correspondiente',
	'Updating_topics_w_vote' => 'Actualizar temas sin marcar como votos pero que tienen un voto correspondiente',
	'Checking_results_wo_vote' => 'Comprobación de resultados sin voto correspondiente',
	'Results_wo_vote_found' => 'Resultados sin voto encontrados',
	'Invalid_result' => 'Eliminar resultado: %s (Votos: %d)',
	'Checking_voters_data' => 'Comprobar datos de votación inválidos',
// check_pm
	'Checking_pm_tables' => 'Comprobar tablas de mensajes privados',
	'Checking_pms_wo_text' => 'Comprobar mensajes privados sin texto',
	'Pms_wo_text_found' => 'Mensajes privados sin texto encontrados',
	'Deleting_pn_wo_text' => '%d (Asunto: %s; Remitente: %s (%d); Receptor: %s (%d))',
	'Deleting_Pms' => 'Eliminar datos de mensajes privados',
	'Checking_texts_wo_pm' => 'Comprobar textos de mensajes privados sin mensaje',
	'Deleting_pm_texts' => 'Eliminar textos de los mensajes privados inválidos',
	'Checking_invalid_pm_senders' => 'Comprobar mensajes privados para saber si hay remitentes inválidos',
	'Invalid_pm_senders_found' => 'Mensajes privados con remitentes inválidos encontrados',
	'Updating_pms' => 'Actualizar mensajes privados',
	'Checking_invalid_pm_recipients' => 'Comprobar mensajes privados para saber si hay receptores inválidos',
	'Invalid_pm_recipients_found' => 'Mensajes privados con receptores inválidos encontrados',
	'Checking_pm_deleted_users' => 'Comprobar mensajes privados para saber si hay remitentes o receptores eliminados',
	'Invalid_pm_users_found' => 'Se encontraron mensajes privados con remitentes o receptores eliminados',
	'Deleting_pms' => 'Eliminar mensajes privados',
	'Synchronize_new_pm_data' => 'Sincronizar el contador de mensajes privados',
	'Synchronizing_users' => 'Actualizar usuarios',
	'Synchronizing_user' => 'Actualizar usuario %s (%d)',
	'Synchronize_unread_pm_data' => 'Sincronizar el contador de mensajes privados sin leer',
// check_config
	'Checking_config_table' => 'Comprobar tabla de configuración',
	'Checking_config_entries' => 'Comprobar entradas de la tabla de configuración',
	'Restoring_config' => 'Restaurar entradas',
// check_search_wordmatch
	'Checking_search_wordmatch_tables' => 'Comprobar tabla de word match',
	'Checking_search_data' => 'Comprobar datos de búsqueda inválidos',
// check_search_wordlist
	'Checking_search_wordlist_tables' => 'Comprobar la tabla de word match',
	'Checking_search_words' => 'Comprobar palabras de búsqueda innecesarias',
	'Removing_part_invalid_words' => 'Quitar partes de palabras de búsqueda innecesarias',
	'Removing_invalid_words' => 'Quitar palabras de búsqueda innecesarias',
// synchronize topics subjects
	'Sync_topics_subjects' => 'Sincronizar títulos de temas',
	'Sync_topics_subjects_progress' => 'Sincronización en progreso',
// rebuild_search_index
	'Rebuilding_search_index' => 'Reconstruir el índice de búsqueda',
	'Deleting_search_tables' => 'Vaciar tablas de búsqueda',
	'Reset_search_autoincrement' => 'Actualizar el contador de las tablas de búsqueda',
	'Preparing_config_data' => 'Fijar datos de configuración',
	'Can_start_rebuilding' => 'Puede comenzar ahora con la reconstrucción del índice de búsqueda',
	'Click_once_warning' => '<b>¡Pulse en el enlace sólo una vez!</b> - Esto puede llevar varios minutos hasta que se muestre una página nueva.',
// proceed_rebuilding
	'Preparing_to_proceed' => 'Preparar tablas para permitir el procedimiento',
	'Preparing_search_tables' => 'Preparar tablas de búsqueda para proceder',
// perform_rebuild
	'Click_or_wait_to_proceed' => 'Pulse aquí para proceder o espere 5 segundos',
	'Indexing_progress' => '%d de %d mensajes (%01.1f%%) fueron indexados. Último mensaje indexado: %d',
	'Indexing_finished' => 'La reconstrucción del índice se finalizó satisfactoriamente',
// synchronize_post
	'Synchronize_posts' => 'Sincronizar datos de mensajes',
	'Synchronize_topic_data' => 'Sincronizar temas',
	'Synchronizing_topics' => 'Actualizar temas',
	'Synchronizing_topic' => 'Actualizar tema %d (%s)',
	'Synchronize_moved_topic_data' => 'Sincronizar temas movidos',
	'Inconsistencies_found' => 'Fueron encontradas inconsistencias en su base de datos. Por favor, %scompruebe las tablas de mensajes y temas%s',
	'Synchronizing_moved_topics' => 'Actualizar temas movidos',
	'Synchronizing_moved_topic' => 'Actualizar temas movidos %d -&gt; %d (%s)',
	'Synchronize_forum_topic_data' => 'Sincronizar datos de temas de los foros',
	'Synchronizing_forums' => 'Actualizar foros',
	'Synchronizing_forum' => 'Actualizar foro %d (%s)',
	'Synchronize_forum_data_wo_topic' => 'Sincronizar foros sin ningún tema',
	'Synchronize_forum_post_data' => 'Sincronizar datos de mensajes de los foros',
	'Synchronize_forum_data_wo_post' => 'Sincronizar foros sin ningún mensaje',
// synchronize_user
	'Synchronize_post_counters' => 'Sincronizar contadores de mensajes',
	'Synchronize_user_post_counter' => 'sINX',
	'Synchronizing_user_counter' => 'Actualizar usuario %s (%d): %d -&gt; %d',
// synchronize_mod_state
	'Synchronize_moderators' => 'Sincronizar estado del moderador en la tabla de usuarios',
	'Getting_moderators' => 'Conseguir moderadores',
	'Checking_non_moderators' => 'Comprobación de usuarios con estado de moderador que no moderan ningún foro',
	'Updating_mod_state' => 'Actualizar el estado de moderador de los usuarios',
	'Changing_moderator_status' => 'Cambiar el estatus de moderador de %s (%d)',
	'Checking_moderators' => 'Comprobación de usuarios que no tienen el estado de moderador que moderan foros ',
// reset_date
	'Resetting_future_post_dates' => 'Actualizar los datos de los últimos mensajes para el futuro',
	'Checking_post_dates' => 'Comprobación de las fechas de los mensajes',
	'Checking_pm_dates' => 'Comprobación de las fechas de los mensajes privados',
	'Checking_email_dates' => 'Comprobación de fechas del último e-mail',
// reset_sessions
	'Resetting_sessions' => 'Puesta a cero de sesiones',
	'Deleting_session_tables' => 'Vaciar las tablas de sesión y de búsqueda',
	'Restoring_session' => 'Restaurar sesión de usuario activo',
// check_db
	'Checking_db' => 'Comprobación de base de datos',
	'Checking_tables' => 'Comprobación de tablas',
	'Table_OK' => 'OK',
	'Table_HEAP_info' => 'Comando no disponible para tablas HEAP (del "montón")',
// repair_db
	'Repairing_db' => 'Reparar base de datos',
	'Repairing_tables' => 'Reparar tablas',
// optimize_db
	'Optimizing_db' => 'Optimización de la base de datos',
	'Optimizing_tables' => 'Optimización de tablas',
	'Optimization_statistic' => 'La optimización redujo el tamaño de las tablas de %s a %s. Esa es una reducción de %s o %01.2f%%.',
// reset_auto_increment
	'Reset_ai' => 'Actualizar valores auto-incrementados',
	'Ai_message_update_table' => 'tabla actualizada',
	'Ai_message_no_update' => 'actualización no necesaria',
	'Ai_message_update_table_old_mysql' => 'tabla actualizada', // Used if an old version of MySQL is used which does not allow a table check before updating the table
// heap_convert
	'Converting_heap' => 'Convertir tablas de sesión a las del tipo HEAP (del "montón")',
// unlock_db
	'Unlocking_db' => 'Desbloquear base de datos',

// Emergency Recovery Console
	'Forum_Home' => 'Portal del foro',
	'ERC' => 'Consola de recuperación de emergencia',
	'Submit_text' => 'Enviar',
	'Select_Language' => 'Seleccione un lenguaje',
	'No_selectable_language' => 'No existen lenguajes seleccionables',
	'Select_Option' => 'Seleccionar una opción',
	'Option_Help' => 'Sugerencias para las opciones',
	'Authenticate_methods' => 'Hay dos maneras para autentificarse',
	'Authenticate_methods_help_text' => 'Usted tiene que autentificarse para poder hacer cambios en la configuración del foro. Hay dos modos de hacerlo. Puede autentificarse incorporando el nombre y contraseña de cualquier cuenta activa de administrador del foro (es el mejor método). O puede autentificarse ingresando el nombre y contraseña de la cuenta de la base de datos que el foro utiliza para tener acceso a la base de datos.',
	'Authenticate_user_only' => 'Tiene que autentificarse con una cuenta activa de administrador.',
	'Authenticate_user_only_help_text' => 'Tiene que autentificarse para hacer cualquier cambio en la configuración del foro. Sólo puede autentificarse
	ingresando un nombre y contraseña de cualquier cuenta de administrador activa del foro.',
	'Admin_Account' => 'Cuenta del administrador del foro',
	'Database_Login' => 'Usuario de la base de datos',
	'Username' => 'Nombre',
	'Password' => 'Contraseña',
	'Auth_failed' => 'Autentificación fallida',
	'Return_ERC' => 'Volver a la consola de recuperación de emergencia',
	'cur_setting' => 'Configuración actual',
	'rec_setting' => 'Configuración recomendada',
	'secure' => 'Seguro',
	'secure_yes' => 'sí (https)',
	'secure_no' => 'no (http)',
	'domain' => 'Dominio',
	'port' => 'Puerto',
	'path' => 'Ruta',
	'Cookie_domain' => 'Dominio de cookie',
	'Cookie_name' => 'Nombre de cookie',
	'Cookie_path' => 'Ruta de cookie',
	'select_language' => 'Seleccionar nuevo lenguaje',
	'select_theme' => 'Seleccionar nuevo estilo',
	'reset_thmeme' => 'Reconstruir el tema por defecto',
	'new_admin_user' => 'Usuario para conceder privilegios de administrador',
	'dbms' => 'Tipo de base de datos',
	'DB_Host' => 'Servidor hostname/DNS de la base de datos',
	'DB_Name' => 'Nombre de su base de datos',
	'DB_Username' => 'Nombre de usuario de la BD',
	'DB_Password' => 'Contraseña de la BD',
	'Table_Prefix' => 'Prefijo para las tablas en la base de datos',
	'New_config_php' => 'Este es su nuevo config.' . PHP_EXT,
// Options
	'cls' => 'Limpiar todas las sesiones',
	'ecf' => 'Limpiar directorio caché',
	'rdb' => 'Reparar tablas de la base de datos',
	'cct' => 'Comprobar la tabla de configuración',
	'rpd' => 'Actualizar los datos de la ruta',
	'rcd' => 'Actualizar los datos de la cookie',
	'rld' => 'Actualizar los datos del lenguaje',
	'rtd' => 'Actualizar los datos de la plantilla',
	'dgc' => 'Desactivar la compresión gzip',
	'cbl' => 'Limpiar la lista de BAN',
	'raa' => 'Remover todos los administradores',
	'mua' => 'Otorgar permisos de administrador al usuario',
	'rcp' => 'Reconstruir config.php',
// Info for options
	'cls_info' => 'Cuando proceda, todas las sesiones serán limpiadas.',
	'ecf_info' => 'Cuando se proceda el directorio caché será limpiado.',
	'rdb_info' => 'Cuando proceda, las tablas de la base de datos serán reparadas.',
	'cct_info' => 'Cuando proceda, la tabla de la configuración será comprobada y las entradas que falten serán restauradas.',
	'rpd_info' => 'Cuando proceda, los datos de la configuración serán actualizados si se selecciona el ajuste recomendado.',
	'rcd_info' => 'Cuando proceda, los datos de las cookies serán actualizados. La opción de si hay que poner una cookie segura o no se puede encontrar bajo \'Reset path data\'.',
	'rld_info' => 'Cuando proceda, el lenguaje seleccionado será usado tanto para el foro como para el usuario usado para autentificar.',
	'rtd_info' => 'Cuando proceda, cualquier estilo seleccionado será usado tanto para el foro como para el usuario usado para autentificar, o el tema por defecto (ca_aphrodite) será restaurado y usado para el foro y el usuario.',
	'rtd_info_no_theme' => 'Cuando proceda, el tema por defecto (ca_aphrodite) será reconstruido y utilizado tanto para el foro como para el usuario usado para autentificar.',
	'dgc_info' => 'Cuando proceda, la compresión gzip será desactivada.',
	'cbl_info' => 'Cuando proceda, la lista de BAN y los usuarios excluidos serán limpiados.',
	'raa_info' => 'Cuando proceda, todos los administradores serán fijados como usuarios normales. Si utiliza una cuenta de administrador para autentificarse, la cuenta usada para autentificación mantendrá su nivel de administrador.',
	'mua_info' => 'Cuando proceda, se le concederán al usuario permisos de administrador. El usuario también será activado.',
	'rcp_info' => 'Cuando proceda, un nuevo config.php será creado con la información entregada.',
// Success messages for options
	'cls_success' => 'Todas las sesiones fueron limpiadas.',
	'ecf_success' => 'Caché limpiado correctamente.',
	'rdb_success' => 'Las tablas de la base de datos fueron reparadas.',
	'rpd_success' => 'La configuración del foro fue actualizada.',
	'cct_success' => 'La tabla de configuración fue comprobada.',
	'rcd_success' => 'Los datos de la cookie fueron actualizados.',
	'rld_success' => 'Los datos del lenguaje fueron actualizados.',
	'rld_failed' => 'Los archivos requeridos del lenguaje (lang_main.' . PHP_EXT . ' and lang_admin.' . PHP_EXT . ') no existen.',
	'rtd_restore_success' => 'El estilo por defecto fue restaurado.',
	'rtd_success' => 'Los datos del estilo fueron actualizados.',
	'dgc_success' => 'La compresión gzip fue desactivada.',
	'cbl_success' => 'La lista de BAN y los usuarios excluidos fueron limpiados.',
	'cbl_success_anonymous' => 'La lista de BAN y los usuarios excluidos fueron limpiados. La cuenta anónima se ha restaurado. Puesto que los datos de la cuenta anónima pueden faltar, se recomienda utilizar la función &quot;Comprobar las tablas de usuario y de grupos&quot; en la parte principal del mantenimiento de la BD.',
	'raa_success' => 'Todos los administradores fueron removidos.',
	'mua_success' => 'El usuario seleccionado ahora tiene privilegios de administrador.',
	'mua_failed' => '<b>Error:</b> El usuario seleccionado no existe o ya tiene los permisos de administrador.',
	'rcp_success' => "Copie el texto a un archivo de texto, renómbrelo a <b>config.php</b> y súbalo al directorio raíz de su foro. Por favor, asegúrese de que no haya caracteres (incluyendo los espacios y saltos de línea) antes del <b>&lt;?php</b> y después de <b>?&gt;</b>.<br /> También puede %sdescargar%s el archivo a su ordenador.",
// Text for success messages
	'Removing_admins' => 'Borrando administradores',
// Help Text
	'Option_Help_Text' => '<p>Si se le avisa de que hubo un error al crear una sesión o tal, puede limpiar los datos de la sesión seleccionando <b>Limpiar todas las sesiones</b>. Si tiene problemas con el acceso a las tablas de la base de datos, puede repararlas seleccionando <b>Reparar las tablas de la base de datos</b>. <b>Comprobar tabla de configuración</b> comprobará la tabla de configuración para saber si hay entradas que faltan, lo que 	puede ser provechoso para varios tipos de errores.</p><p>Si no puede loguearse o entrar al panel de administración, puede haber un fallo en la ruta de su cookie. Puede resetearla con <b>Actualizar información de la ruta</b> o <b>Actualizar datos de la cookie</b>. También puede actualizar los ajustes del lenguaje con <b>Actualizar datos del lenguaje</b>, o los datos de la plantilla con <b>Actualizar datos de plantilla</b>.</p><p>Si ocurren problemas tras activar la compresión gzip, puede desactivarla seleccionando <b>Desactivar compresión gzip</b>.</p><p>Si perdió la contraseña de su cuenta, puede conceder privilegios de administración a un usuario seleccionando <b>Conceder a un usuario privilegios de admin</b>. Esto también activará al usuario, así que puede utilizar a un usuario creado justo antes. Si no puede agregar a un nuevo usuario, puede limpiar la lista de baneos con <b>Limpiar lista de BAN</b> (esto también restaurará al usuario anónimo).</p><p>Si su foro fue hackeado, se recomienda que quite todas las cuentas de administrador, seleccionando <b>Remover a todos los administradores</b>. (La cuenta en sí no será eliminada, pero los permisos serán removidos.)</p><p>Si necesita restaurar su config.php, puede hacerlo seleccionando <b>Reconstruir config.php</b>.</p>',

	'dbmntc_Invalid_Option' => 'Opción inválida',
	)
);
?>