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
	'Estad�sticas',
	'Muestra informaci�n acerca del foro y la base de datos.',
	'',
	0);
$mtnc[] = array('config',
	'Configuraci�n',
	'Permite la configuraci�n de mantenimiento de la BD.',
	'',
	5);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_user',
	'Comprobar tablas de usuario y de grupos',
	'Esto comprobar� las tablas de usuarios y de grupos para saber si hay errores, y restaurar� los grupos de los usuarios que fallan.',
	'Usted perder� todos los grupos sin alg�n usuario al realizar esta acci�n. �Desea continuar?',
	0);
$mtnc[] = array('check_post',
	'Comprobar tablas de mensajes y de temas',
	'Esto comprobar� las tablas de mensajes y de temas para saber si hay errores.',
	'Usted perder� todos los mensajes sin texto. �Desea continuar?',
	0);
$mtnc[] = array('check_vote',
	'Comprobar tablas de votos',
	'Esto comprobar� las tablas de votos para saber si hay errores.',
	'Usted perder� todos los datos de voto sin un voto correspondiente. �Desea continuar?',
	0);
$mtnc[] = array('check_pm',
	'Comprobar tablas de mensajes privados',
	'Esto comprobar� las tablas de mensajes privados para saber si hay errores.',
	'Los mensajes sin leer ser�n eliminados cuando no exista el remitente o el receptor. �Desea continuar?',
	0);
$mtnc[] = array('check_config',
	'Comprobar tabla de configuraci�n',
	'Esto comprobar� la tabla de configuraci�n para saber si hay entradas que faltan.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_search_wordmatch',
	'Comprobar la tabla de palabras buscadas',
	'Esto comprobar� la tabla de palabras buscadas para saber si hay errores. Esta tabla se usa para la funci�n de b�squeda.',
	'',
	0);
$mtnc[] = array('check_search_wordlist',
	'Comprobar la tabla de lista de palabras de b�squeda',
	'Esto remover� todas las palabras innecesarias en la lista de palabras usada para la b�squeda.',
	'Esta funci�n puede llevar un cierto tiempo para ejecutarse. No es necesario realizar esta comprobaci�n, pero hacerla puede reducir un poco el tama�o de la base de datos. �Desea continuar?',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('synchronize_post',
	'Sincronizar foros y temas',
	'Esto sincronizar� los contadores de mensajes y los datos de los mensajes en los foros y en los temas.',
	'Este comando puede llevar un cierto tiempo para terminar. Si su servidor no permite el uso del comando set_time_limit(), este comando puede ser interrumpido por PHP. Ning�n dato se perder� por esto, pero ciertos datos pueden no ser actualizados. �Desea continuar?',
	0);
$mtnc[] = array('synchronize_user',
	'Sincronizar contadores de mensajes del usuario',
	'Esto sincronizar� los contadores de mensaje para los usuarios.',
	'<b>Atenci�n:</b> Los mensajes borrados por el PRUNE, normalmente no son restados del contador de mensajes. Al hacer correr este comando, los mensajes eliminados por el PRUNE del foro ser�n restados del contador y no podr�n ser restaurados. �Desea continuar?',
	6);
$mtnc[] = array('synchronize_mod_state',
	'Sincronizar el estatus de moderador',
	'Esto sincronizar� el estatus del moderador en la tabla de usuario.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_date',
	'Actualizar la fecha del �ltimo mensaje',
	'Esto actualizar� los datos de mensajes para el futuro. Esto solucionar� ediciones donde los usuarios obtienen un mensaje diciendo que no les es permitido enviar un mensaje tan pronto despu�s del anterior.',
	'En cualquier momento de un mensajes para el futuro ser� fijado al tiempo actual. �Desea continuar?',
	0);
$mtnc[] = array('reset_sessions',
	'Poner a cero todas las sesiones',
	'Esto pondr� a cero todas las sesiones actuales, vaciando la tabla de sesiones.',
	'Todos los usuarios activos perder�n su sesi�n actual y sus resultados de b�squeda. �Desea continuar?',
	0);
$mtnc[] = array('--', '', '', '', 8);
$mtnc[] = array('sync_topics_subjects',
	'Sincronizar t�tulos de los temas',
	'Esta funci�n sincronizar� los t�tulos de los temas del primer mensaje en todo el tema. En condiciones normales no necesita esta opci�n.',
	'Esto sincronizar� los t�tulos de los temas del primer mensaje en todo el tema. El foro no estar� disponible mientras dure el proceso. �Desea proceder?',
	0);
$mtnc[] = array('rebuild_search_index',
	'Reconstruir el �ndice de b�squeda',
	'Esta funci�n reconstruir� el �ndice usado para buscar. Usted no necesita esta funci�n en condiciones normales.',
	'Esto suprimir� el �ndice de b�squeda por completo y lo reconstruir�. Esto puede llevar varias horas hasta completar la tarea. El foro no ser� accesible durante este per�odo. �Desea continuar?',
	7);
$mtnc[] = array('proceed_rebuilding',
	'Recomenzar reconstrucci�n',
	'Use esta funci�n si la reconstrucci�n del �ndice de b�squeda fue interrumpida.',
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
	'Optimiza las tablas. Esto reducir� el tama�o de la base de datos luego de eliminar porciones de registros, etc.',
	'',
	1);
$mtnc[] = array('repair_db',
	'Reparar base de datos',
	'Fija o repara la base de datos cuando se encuentra un error.',
	'S�lo debe realizar esta acci�n si hay un informe de error en la comprobaci�n de la base de datos. �Proceder?',
	1);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_auto_increment',
	'Reajustar valores auto incrementados',
	'Esta funci�n reajusta los valores auto incrementados. Esto deber�a realizarse s�lo si parece haber un problema al insertar nuevos datos en las tablas.',
	'�Realmente desea reajustar los valores auto incrementados? Ning�n dato se perder�, pero esta funci�n s�lo debe ser usada si es necesario. ',
	0);
$mtnc[] = array('heap_convert',
	'Convertir tabla de sesiones',
	'Esta funci�n convierte la tabla de sesiones a las tablas del "mont�n". Esto se hace normalmente durante la instalaci�n, y acelerar� el phpBB un poco. Debe utilizar esta funci�n si su tabla de sesi�n no es del tipo de tablas del "mont�n".',
	'�Desea realmente convertir la tabla?',
	2);
$mtnc[] = array('--', '', '', '', 3);
$mtnc[] = array('unlock_db',
	'Reabrir el foro',
	'Use esta funci�n si obtuvo un error durante una operaci�n hecha anteriormente y que todav�a mantiene el foro desactivado.',
	'',
	3);

$lang = array_merge($lang, array(
	'DB_Maintenance' => 'Herramientras base de datos',
	'DB_Maintenance_Description' => 'Aqu� puede comprobar su base de datos para saber si hay inconsistencias y errores.<br /><b>Atenci�n:</b> Algunos operaciones tardar�n mas tiempo en realizarse. Su foro ser� <b>Cerrado</b> durante esas operaciones.</br /><br /><b>�Se recomienda siempre hacer una copia de seguridad de su base de datos antes de usar cualquiera de las funciones enumeradas abajo!</b>',
	'Function' => 'Funci�n',
	'Function_Description' => 'Descripci�n',

	'Incomplete_configuration' => 'El ajuste para <b>%s</b> no fue encontrado en la configuraci�n del foro.  El mantenimiento de la BD no puede funcionar sin este ajuste.<br />Usted se olvid� quiz� de ejecutar la consulta SQL seg�n lo descrito en las instrucciones de instalaci�n.',
	'dbtype_not_supported' => 'Perdone, esta funci�n no es soportada por su base de datos',
	'no_function_specified' => 'No se especific� ninguna funci�n',
	'function_unknown' => 'La funci�n especificada es desconocida',
	'Old_MySQL_Version' => 'Perdone, su version de MySQL no soporta esta funci�n. Por favor, use la versi�n 3.23.17 o posterior.',

	'Back_to_DB_Maintenance' => 'Volver a mantenimiento de base de datos',
	'Processing_time' => 'Mantenimiento de BD tard� %f segundos en hacer las operaciones',

	'Lock_db' => 'Deshabilitar foro',
	'Unlock_db' => 'Habilitar foro',
	'Already_locked' => 'El foro ya est� cerrado',
	'Ignore_unlock_command' => 'El foro fue cerrado al comenzar este comando. No se abrir� el foro',
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
	'Statistic_title' => 'Estad�sticas del foro y de la BD',
	'Database_table_info' => 'Las estad�sticas de la base de datos entregar�n tres valores: para todas las tablas de la base de datos, para todas las tablas proporcionadas por phpBB por defecto (tablas base), y las comenzadas con el prefijo de las tablas del foro (tablas avanzadas).',
	'Board_statistic' => 'Estad�sticas del foro',
	'Database_statistic' => 'Estad�sticas de la base de datos',
	'Version_info' => 'Informaci�n de versi�n',
	'Thereof_deactivated_users' => 'de esos usuarios desactivados',
	'Thereof_Moderators' => 'de esos moderadores',
	'Thereof_Administrators' => 'de esos administradores',
	'Users_with_Admin_Privileges' => 'Usuarios con privilegios de administrador',
	'Number_tables' => 'N�mero de tablas',
	'Number_records' => 'N�mero de registros',
	'DB_size' => 'Tama�o de la base de datos',
	'Thereof_phpbb_core' => 'de esas tablas phpBB',
	'Thereof_phpbb_advanced' => 'de esas tablas avanzadas de phpBB',
	'Version_of_board' => 'Version del foro',
	'Version_of_mod' => 'Versi�n de mantenimiento de BD',
	'Version_of_PHP' => 'Versi�n de PHP',
	'Version_of_MySQL' => 'Versi�n de MySQL',
// config
	'Config_title' => 'Configuraci�n de mantenimiento de BD',
	'Config_info' => 'Las siguientes opciones le permiten configurar el mantenimiento de la BD. Por favor, tenga en cuenta que el misconfiguration puede conducirle a resultados inesperados.',
	'General_Config' => 'Configuraci�n general',
	'Rebuild_Config' => 'Configuraci�n de la reconstrucci�n del �ndice de b�squeda',
	'Current_Rebuild_Config' => 'Configuraci�n de la reconstrucci�n actual',
	'Rebuild_Settings_Explain' => 'Estos ajustes regulan el comportamiento del mantenimiento de la BD al reconstruir el �ndice de la b�squeda.',
	'Current_Rebuild_Settings_Explain' => 'Estos ajustes son utilizados por el mantenimiento de la BD para almacenar la posici�n de la reconstrucci�n actual. No hay necesidad de adaptar estos ajustes bajo condiciones normales.',
	'Disallow_postcounter' => 'Denegar sincronizaci�n del contador de mensajes del usuario',
	'Disallow_postcounter_Explain' => 'Esto inhabilitar� la funci�n para sincronizar los contadores de mensajes del usuario. Puede denegar esta funci�n si no desea que los mensajes eliminados por el PRUNE sean restados de los contadores de mensajes de los usuarios.',
	'Disallow_rebuild' => 'Denegar reconstrucci�n del �ndice de b�squeda',
	'Disallow_rebuild_Explain' => 'Esto inhabilitar� la reconstrucci�n del �ndice de la b�squeda. Sin embargo, una reconstrucci�n interrumpida se puede continuar.',
	'Rebuildcfg_Timelimit' => 'Tiempo m�ximo de ejecuci�n para reconstruir (en segundos)',
	'Rebuildcfg_Timelimit_Explain' => 'Tiempo m�ximo usado para el primer paso al reconstruir (por defecto: 240). Este valor limita el tiempo de ejecuci�n incluso si un per�odo m�s largo fuese posible.',
	'Rebuildcfg_Timeoverwrite' => 'Cantidad fija de tiempo disponible para la ejecuci�n (en segundos)',
	'Rebuildcfg_Timeoverwrite_Explain' => 'Tiempo fijo estimado disponible para la ejecuci�n (por defecto: 0). Con 0 el resultado del c�lculo se utiliza como tiempo de ejecuci�n, cualquier otro valor sobrescribe el valor calculado.',
	'Rebuildcfg_Maxmemory' => 'Tama�o m�ximo del mensaje para reconstruir (en Kbytes)',
	'Rebuildcfg_Maxmemory_Explain' => 'Tama�o m�ximo de los mensajes indexados en un primer paso (por defecto: 500). Cuando la suma de los tama�os de los mensajes sobrepasan este valor, no se indexa ning�n otro mensaje en el paso actual.',
	'Rebuildcfg_Minposts' => 'M�nimos mensajes a indexarse por paso',
	'Rebuildcfg_Minposts_Explain' => 'N�mero m�nimo de mensajes indexados por paso (defecto: 3) define el n�mero de mensajes que al menos son indexados por paso.',
	'Rebuildcfg_PHP3Only' => 'Utilice solamente el m�todo est�ndar compatible con PHP 3 para la indexaci�n',
	'Rebuildcfg_PHP3Only_Explain' => 'El mantenimiento de la BD utiliza un m�todo avanzado para la indexaci�n cuando est�n disponibles PHP 4.0.5 o posteriores. Puede apagar el m�todo avanzado, de modo que el mantenimiento de la BD haga uso el m�todo est�ndar del foro.',
	'Rebuildcfg_PHP4PPS' => 'Mensajes indexados por segundo al usar un m�todo avanzado de indexar',
	'Rebuildcfg_PHP4PPS_Explain' => 'Valor estimado de los mensajes que se pueden indexar por segundo al usar el m�todo avanzado de la indexaci�n (defecto: 8)',
	'Rebuildcfg_PHP3PPS' => 'Mensajes indexados por segundo al usar el m�todo est�ndar de la indexaci�n',
	'Rebuildcfg_PHP3PPS_Explain' => 'Valor estimado de los mensajes que se pueden indexar por segundo al usar el m�todo est�ndar de indexaci�n (por defecto: 1)',
	'Rebuild_Pos' => '�ltimo mensaje indexado',
	'Rebuild_Pos_Explain' => 'ID del �ltimo mensaje indexado satisfactoriamente. Es -1 cuando la reconstrucci�n ha finalizado.',
	'Rebuild_End' => '�ltimo mensaje a indexar',
	'Rebuild_End_Explain' => 'ID del �ltimo mensaje para ser indexado. Es 0 cuando la reconstrucci�n ha finalizado.',
	'Dbmtnc_config_updated' => 'Configuraci�n actualizada satisfactoriamente',
	'Click_return_dbmtnc_config' => 'Pulse %saqu�%s para volver a la configuraci�n',
// check_user
	'Checking_user_tables' => 'Comprobaci�n de las tablas de usuario y de grupo',
	'Checking_missing_anonymous' => 'Comprobaci�n de cuentas an�nimas perdidas',
	'Anonymous_recreated' => 'Cuenta an�nima reconstruida',
	'Checking_incorrect_pending_information' => 'Comprobaci�n para informaci�n incorrecta pendiente',
	'Updating_invalid_pendig_user' => 'Actualizar la informaci�n inv�lida pendiente de un usuario',
	'Updating_invalid_pendig_users' => 'Actualizar la informaci�n inv�lida pendiente de %d usuarios',
	'Updating_pending_information' => 'Actualizar la informaci�n pendiente de grupos de usuarios solos',
	'Checking_missing_user_groups' => 'Comprobaci�n para usuarios con m�ltiples grupos o no pertenecientes a un solo grupo',
	'Found_multiple_SUG' => 'Usuarios con m�ltiples grupos de usuarios encontrados',
	'Resolving_user_id' => 'Resoluci�n de usuarios a agrupar',
	'Removing_groups' => 'Remover grupos',
	'Removing_user_groups' => 'Removiendo usuario para agrupar la conexi�n',
	'Recreating_SUG' => 'Reconstrucci�n de los grupos de s�lo un usuario para el usuario',
	'Checking_for_invalid_moderators' => 'Comprobaci�n para saber si hay ajustes inv�lidos del moderador del grupo',
	'Updating_Moderator' => 'Fija al usuario actual como moderador del grupo',
	'Checking_moderator_membership' => 'Comprobar usuarios asociados al grupo de moderadores',
	'Updating_mod_membership' => 'Actualizar usuarios asociados al grupo de moderadores',
	'Moderator_added' => 'Moderador a�adido al grupo',
	'Moderator_changed_pending' => 'Estado pendiente del moderador cambiado',
	'Remove_invalid_user_data' => 'Quitar datos inv�lidos del usuario en la tabla de usuarios-grupos',
	'Remove_empty_groups' => 'Quitar grupos vac�os',
	'Remove_invalid_group_data' => 'Quitar datos inv�lidos del grupo en la tabla de usuarios-grupos',
	'Checking_ranks' => 'Comprobar rangos inv�lidos',
	'Invalid_ranks_found' => 'Usuarios encontrados con rangos inv�lidos',
	'Removing_invalid_ranks' => 'Quitar rangos inv�lidos',
	'Checking_themes' => 'Comprobaci�n de ajustes inv�lidos en los temas',
	'Updating_users_without_style' => 'Actualizados los usuarios sin temas seleccionados',
	'Default_theme_invalid' => '<b>Atenci�n:</b> El estilo por defecto es inv�lido. Por favor, compruebe la configuraci�n.',
	'Updating_themes' => 'Actualizar los temas inv�lidos al tema %d',
	'Checking_theme_names' => 'Comprobar datos inv�lidos en el nombre del tema',
	'Removing_invalid_theme_names' => 'Remover datos inv�lidos del nombre del tema',
	'Checking_languages' => 'Comprobar ajustes inv�lidos del lenguaje',
	'Invalid_languages_found' => 'Usuarios encontrados con ajustes inv�lidos del lenguaje',
	'Default_language_invalid' => '<b>Atenci�n:</b> El lenguaje por defecto es inv�lido. Por favor, compruebe su configuraci�n.',
	'English_language_invalid' => '<b>Atenci�n:</b> El lenguaje por defecto es inv�lido y los archivos del lenguaje en ingl�s no existen. Tiene que restaurar el directorio <b>lang_english</b>.',
	'Changing_language' => 'Cambiar lenguaje \'%s\' a \'%s\'',
	'Remove_invalid_ban_data' => 'Remover datos inv�lidos de BAN',
	'Remove_invalid_session_keys' => 'Quitar claves de sesi�n inv�lidas',
// check_post
	'Checking_post_tables' => 'Comprobar tablas de mensajes y temas',
	'Checking_invalid_forums' => 'Comprobar foros con categor�as inv�lidas',
	'Invalid_forums_found' => 'Foros con categor�as inv�lidas encontrados',
	'Setting_category' => 'Mover foros a la categor�a \'%s\'',
	'Checking_posts_wo_text' => 'Comprobar mensajes sin texto',
	'Posts_wo_text_found' => 'Mensajes sin texto encontrados',
	'Deleting_post_wo_text' => '%d (Tema: %s (%d); Usuario: %s (%d))',
	'Deleting_Posts' => 'Eliminar datos del mensaje',
	'Checking_topics_wo_post' => 'Comprobar temas sin un mensaje',
	'Topics_wo_post_found' => 'Temas sin un mensaje encontrados',
	'Deleting_topics' => 'Eliminar datos del tema',
	'Checking_invalid_topics' => 'Comprobar temas con foro inv�lido',
	'Invalid_topics_found' => 'Temas con foro inv�lido encontrados',
	'Setting_forum' => 'Mover temas al foro \'%s\'',
	'Checking_invalid_posts' => 'Comprobar mensajes con asuntos inv�lidos',
	'Invalid_posts_found' => 'Mensajes con asuntos inv�lidos encontrados',
	'Setting_topic' => 'Mover mensajes %s al tema \'%s\' (%d) en el foro \'%s\'',
	'Checking_invalid_forums_posts' => 'Comprobar mensajes con foro inv�lido',
	'Invalid_forum_posts_found' => 'Mensajes con foro inv�lido encontrados',
	'Setting_post_forum' => '%d: mover desde el foro \'%s\' (%d) a \'%s\' (%d)',
	'Checking_texts_wo_post' => 'Comprobar los mensajes sin texto',
	'Invalid_texts_found' => 'mensajes sin texto encontrados',
	'Recreating_post' => 'Reconstruir mensaje %d y moverlo al tema \'%s\' en el foro \'%s\'<br />Extracto: %s',
	'Checking_invalid_topic_posters' => 'Comprobar temas para saber si hay autores inv�lidos',
	'Invalid_topic_poster_found' => 'Temas con autores inv�lidos encontrados',
	'Updating_topic' => 'Actualizar tema %d (Autor: %d -&gt; %d)',
	'Checking_invalid_posters' => 'Comprobar mensajes para saber si hay autores inv�lidos',
	'Invalid_poster_found' => 'Mensajes con autores inv�lidos encontrados',
	'Updating_posts' => 'Actualizar mensajes',
	'Checking_moved_topics' => 'Comprobar temas movidos',
	'Deleting_invalid_moved_topics' => 'Eliminar temas movidos inv�lidos',
	'Updating_invalid_moved_topic' => 'Actualizando informaci�n inv�lida movida para temas no movidos',
	'Updating_invalid_moved_topics' => 'Actualizando informaci�n inv�lida movida para %d temas no movidos',
	'Checking_prune_settings' => 'Comprobar datos inv�lidos del PRUNE',
	'Removing_invalid_prune_settings' => 'Remover ajustes inv�lidos del PRUNE',
	'Updating_invalid_prune_setting' => 'Actualizar ajustes inv�lidos del PRUNE de un foro',
	'Updating_invalid_prune_settings' => 'Actualizar ajustes inv�lidos del PRUNE de %d foros',
	'Checking_topic_watch_data' => 'Comprobar si hay temas observados inv�lidos',
	'Checking_auth_access_data' => 'Comprobar datos inv�lidos de la autorizaci�n del grupo',
	'Must_synchronize' => 'Tiene que sincronizar los datos del mensaje antes de usar el foro. Pulse para proceder.',
// check_vote
	'Checking_vote_tables' => 'Comprobar tablas de votos',
	'Checking_votes_wo_topic' => 'Comprobar votos sin su tema correspondiente',
	'Votes_wo_topic_found' => 'Votos sin tema encontrados',
	'Invalid_vote' => '%s (%d) - Fecha de inicio: %s - Fecha de t�rmino: %s',
	'Deleting_votes' => 'Eliminar votos',
	'Checking_votes_wo_result' => 'Comprobar votos sin ning�n resultado',
	'Votes_wo_result_found' => 'Votos sin resultado encontrados',
	'Checking_topics_vote_data' => 'Comprobar datos de voto en tablas de temas',
	'Updating_topics_wo_vote' => 'Actualizar temas marcados como votos sin un voto correspondiente',
	'Updating_topics_w_vote' => 'Actualizar temas sin marcar como votos pero que tienen un voto correspondiente',
	'Checking_results_wo_vote' => 'Comprobaci�n de resultados sin voto correspondiente',
	'Results_wo_vote_found' => 'Resultados sin voto encontrados',
	'Invalid_result' => 'Eliminar resultado: %s (Votos: %d)',
	'Checking_voters_data' => 'Comprobar datos de votaci�n inv�lidos',
// check_pm
	'Checking_pm_tables' => 'Comprobar tablas de mensajes privados',
	'Checking_pms_wo_text' => 'Comprobar mensajes privados sin texto',
	'Pms_wo_text_found' => 'Mensajes privados sin texto encontrados',
	'Deleting_pn_wo_text' => '%d (Asunto: %s; Remitente: %s (%d); Receptor: %s (%d))',
	'Deleting_Pms' => 'Eliminar datos de mensajes privados',
	'Checking_texts_wo_pm' => 'Comprobar textos de mensajes privados sin mensaje',
	'Deleting_pm_texts' => 'Eliminar textos de los mensajes privados inv�lidos',
	'Checking_invalid_pm_senders' => 'Comprobar mensajes privados para saber si hay remitentes inv�lidos',
	'Invalid_pm_senders_found' => 'Mensajes privados con remitentes inv�lidos encontrados',
	'Updating_pms' => 'Actualizar mensajes privados',
	'Checking_invalid_pm_recipients' => 'Comprobar mensajes privados para saber si hay receptores inv�lidos',
	'Invalid_pm_recipients_found' => 'Mensajes privados con receptores inv�lidos encontrados',
	'Checking_pm_deleted_users' => 'Comprobar mensajes privados para saber si hay remitentes o receptores eliminados',
	'Invalid_pm_users_found' => 'Se encontraron mensajes privados con remitentes o receptores eliminados',
	'Deleting_pms' => 'Eliminar mensajes privados',
	'Synchronize_new_pm_data' => 'Sincronizar el contador de mensajes privados',
	'Synchronizing_users' => 'Actualizar usuarios',
	'Synchronizing_user' => 'Actualizar usuario %s (%d)',
	'Synchronize_unread_pm_data' => 'Sincronizar el contador de mensajes privados sin leer',
// check_config
	'Checking_config_table' => 'Comprobar tabla de configuraci�n',
	'Checking_config_entries' => 'Comprobar entradas de la tabla de configuraci�n',
	'Restoring_config' => 'Restaurar entradas',
// check_search_wordmatch
	'Checking_search_wordmatch_tables' => 'Comprobar tabla de word match',
	'Checking_search_data' => 'Comprobar datos de b�squeda inv�lidos',
// check_search_wordlist
	'Checking_search_wordlist_tables' => 'Comprobar la tabla de word match',
	'Checking_search_words' => 'Comprobar palabras de b�squeda innecesarias',
	'Removing_part_invalid_words' => 'Quitar partes de palabras de b�squeda innecesarias',
	'Removing_invalid_words' => 'Quitar palabras de b�squeda innecesarias',
// synchronize topics subjects
	'Sync_topics_subjects' => 'Sincronizar t�tulos de temas',
	'Sync_topics_subjects_progress' => 'Sincronizaci�n en progreso',
// rebuild_search_index
	'Rebuilding_search_index' => 'Reconstruir el �ndice de b�squeda',
	'Deleting_search_tables' => 'Vaciar tablas de b�squeda',
	'Reset_search_autoincrement' => 'Actualizar el contador de las tablas de b�squeda',
	'Preparing_config_data' => 'Fijar datos de configuraci�n',
	'Can_start_rebuilding' => 'Puede comenzar ahora con la reconstrucci�n del �ndice de b�squeda',
	'Click_once_warning' => '<b>�Pulse en el enlace s�lo una vez!</b> - Esto puede llevar varios minutos hasta que se muestre una p�gina nueva.',
// proceed_rebuilding
	'Preparing_to_proceed' => 'Preparar tablas para permitir el procedimiento',
	'Preparing_search_tables' => 'Preparar tablas de b�squeda para proceder',
// perform_rebuild
	'Click_or_wait_to_proceed' => 'Pulse aqu� para proceder o espere 5 segundos',
	'Indexing_progress' => '%d de %d mensajes (%01.1f%%) fueron indexados. �ltimo mensaje indexado: %d',
	'Indexing_finished' => 'La reconstrucci�n del �ndice se finaliz� satisfactoriamente',
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
	'Synchronize_forum_data_wo_topic' => 'Sincronizar foros sin ning�n tema',
	'Synchronize_forum_post_data' => 'Sincronizar datos de mensajes de los foros',
	'Synchronize_forum_data_wo_post' => 'Sincronizar foros sin ning�n mensaje',
// synchronize_user
	'Synchronize_post_counters' => 'Sincronizar contadores de mensajes',
	'Synchronize_user_post_counter' => 'sINX',
	'Synchronizing_user_counter' => 'Actualizar usuario %s (%d): %d -&gt; %d',
// synchronize_mod_state
	'Synchronize_moderators' => 'Sincronizar estado del moderador en la tabla de usuarios',
	'Getting_moderators' => 'Conseguir moderadores',
	'Checking_non_moderators' => 'Comprobaci�n de usuarios con estado de moderador que no moderan ning�n foro',
	'Updating_mod_state' => 'Actualizar el estado de moderador de los usuarios',
	'Changing_moderator_status' => 'Cambiar el estatus de moderador de %s (%d)',
	'Checking_moderators' => 'Comprobaci�n de usuarios que no tienen el estado de moderador que moderan foros ',
// reset_date
	'Resetting_future_post_dates' => 'Actualizar los datos de los �ltimos mensajes para el futuro',
	'Checking_post_dates' => 'Comprobaci�n de las fechas de los mensajes',
	'Checking_pm_dates' => 'Comprobaci�n de las fechas de los mensajes privados',
	'Checking_email_dates' => 'Comprobaci�n de fechas del �ltimo e-mail',
// reset_sessions
	'Resetting_sessions' => 'Puesta a cero de sesiones',
	'Deleting_session_tables' => 'Vaciar las tablas de sesi�n y de b�squeda',
	'Restoring_session' => 'Restaurar sesi�n de usuario activo',
// check_db
	'Checking_db' => 'Comprobaci�n de base de datos',
	'Checking_tables' => 'Comprobaci�n de tablas',
	'Table_OK' => 'OK',
	'Table_HEAP_info' => 'Comando no disponible para tablas HEAP (del "mont�n")',
// repair_db
	'Repairing_db' => 'Reparar base de datos',
	'Repairing_tables' => 'Reparar tablas',
// optimize_db
	'Optimizing_db' => 'Optimizaci�n de la base de datos',
	'Optimizing_tables' => 'Optimizaci�n de tablas',
	'Optimization_statistic' => 'La optimizaci�n redujo el tama�o de las tablas de %s a %s. Esa es una reducci�n de %s o %01.2f%%.',
// reset_auto_increment
	'Reset_ai' => 'Actualizar valores auto-incrementados',
	'Ai_message_update_table' => 'tabla actualizada',
	'Ai_message_no_update' => 'actualizaci�n no necesaria',
	'Ai_message_update_table_old_mysql' => 'tabla actualizada', // Used if an old version of MySQL is used which does not allow a table check before updating the table
// heap_convert
	'Converting_heap' => 'Convertir tablas de sesi�n a las del tipo HEAP (del "mont�n")',
// unlock_db
	'Unlocking_db' => 'Desbloquear base de datos',

// Emergency Recovery Console
	'Forum_Home' => 'Portal del foro',
	'ERC' => 'Consola de recuperaci�n de emergencia',
	'Submit_text' => 'Enviar',
	'Select_Language' => 'Seleccione un lenguaje',
	'No_selectable_language' => 'No existen lenguajes seleccionables',
	'Select_Option' => 'Seleccionar una opci�n',
	'Option_Help' => 'Sugerencias para las opciones',
	'Authenticate_methods' => 'Hay dos maneras para autentificarse',
	'Authenticate_methods_help_text' => 'Usted tiene que autentificarse para poder hacer cambios en la configuraci�n del foro. Hay dos modos de hacerlo. Puede autentificarse incorporando el nombre y contrase�a de cualquier cuenta activa de administrador del foro (es el mejor m�todo). O puede autentificarse ingresando el nombre y contrase�a de la cuenta de la base de datos que el foro utiliza para tener acceso a la base de datos.',
	'Authenticate_user_only' => 'Tiene que autentificarse con una cuenta activa de administrador.',
	'Authenticate_user_only_help_text' => 'Tiene que autentificarse para hacer cualquier cambio en la configuraci�n del foro. S�lo puede autentificarse
	ingresando un nombre y contrase�a de cualquier cuenta de administrador activa del foro.',
	'Admin_Account' => 'Cuenta del administrador del foro',
	'Database_Login' => 'Usuario de la base de datos',
	'Username' => 'Nombre',
	'Password' => 'Contrase�a',
	'Auth_failed' => 'Autentificaci�n fallida',
	'Return_ERC' => 'Volver a la consola de recuperaci�n de emergencia',
	'cur_setting' => 'Configuraci�n actual',
	'rec_setting' => 'Configuraci�n recomendada',
	'secure' => 'Seguro',
	'secure_yes' => 's� (https)',
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
	'DB_Password' => 'Contrase�a de la BD',
	'Table_Prefix' => 'Prefijo para las tablas en la base de datos',
	'New_config_php' => 'Este es su nuevo config.' . PHP_EXT,
// Options
	'cls' => 'Limpiar todas las sesiones',
	'ecf' => 'Limpiar directorio cach�',
	'rdb' => 'Reparar tablas de la base de datos',
	'cct' => 'Comprobar la tabla de configuraci�n',
	'rpd' => 'Actualizar los datos de la ruta',
	'rcd' => 'Actualizar los datos de la cookie',
	'rld' => 'Actualizar los datos del lenguaje',
	'rtd' => 'Actualizar los datos de la plantilla',
	'dgc' => 'Desactivar la compresi�n gzip',
	'cbl' => 'Limpiar la lista de BAN',
	'raa' => 'Remover todos los administradores',
	'mua' => 'Otorgar permisos de administrador al usuario',
	'rcp' => 'Reconstruir config.php',
// Info for options
	'cls_info' => 'Cuando proceda, todas las sesiones ser�n limpiadas.',
	'ecf_info' => 'Cuando se proceda el directorio cach� ser� limpiado.',
	'rdb_info' => 'Cuando proceda, las tablas de la base de datos ser�n reparadas.',
	'cct_info' => 'Cuando proceda, la tabla de la configuraci�n ser� comprobada y las entradas que falten ser�n restauradas.',
	'rpd_info' => 'Cuando proceda, los datos de la configuraci�n ser�n actualizados si se selecciona el ajuste recomendado.',
	'rcd_info' => 'Cuando proceda, los datos de las cookies ser�n actualizados. La opci�n de si hay que poner una cookie segura o no se puede encontrar bajo \'Reset path data\'.',
	'rld_info' => 'Cuando proceda, el lenguaje seleccionado ser� usado tanto para el foro como para el usuario usado para autentificar.',
	'rtd_info' => 'Cuando proceda, cualquier estilo seleccionado ser� usado tanto para el foro como para el usuario usado para autentificar, o el tema por defecto (ca_aphrodite) ser� restaurado y usado para el foro y el usuario.',
	'rtd_info_no_theme' => 'Cuando proceda, el tema por defecto (ca_aphrodite) ser� reconstruido y utilizado tanto para el foro como para el usuario usado para autentificar.',
	'dgc_info' => 'Cuando proceda, la compresi�n gzip ser� desactivada.',
	'cbl_info' => 'Cuando proceda, la lista de BAN y los usuarios excluidos ser�n limpiados.',
	'raa_info' => 'Cuando proceda, todos los administradores ser�n fijados como usuarios normales. Si utiliza una cuenta de administrador para autentificarse, la cuenta usada para autentificaci�n mantendr� su nivel de administrador.',
	'mua_info' => 'Cuando proceda, se le conceder�n al usuario permisos de administrador. El usuario tambi�n ser� activado.',
	'rcp_info' => 'Cuando proceda, un nuevo config.php ser� creado con la informaci�n entregada.',
// Success messages for options
	'cls_success' => 'Todas las sesiones fueron limpiadas.',
	'ecf_success' => 'Cach� limpiado correctamente.',
	'rdb_success' => 'Las tablas de la base de datos fueron reparadas.',
	'rpd_success' => 'La configuraci�n del foro fue actualizada.',
	'cct_success' => 'La tabla de configuraci�n fue comprobada.',
	'rcd_success' => 'Los datos de la cookie fueron actualizados.',
	'rld_success' => 'Los datos del lenguaje fueron actualizados.',
	'rld_failed' => 'Los archivos requeridos del lenguaje (lang_main.' . PHP_EXT . ' and lang_admin.' . PHP_EXT . ') no existen.',
	'rtd_restore_success' => 'El estilo por defecto fue restaurado.',
	'rtd_success' => 'Los datos del estilo fueron actualizados.',
	'dgc_success' => 'La compresi�n gzip fue desactivada.',
	'cbl_success' => 'La lista de BAN y los usuarios excluidos fueron limpiados.',
	'cbl_success_anonymous' => 'La lista de BAN y los usuarios excluidos fueron limpiados. La cuenta an�nima se ha restaurado. Puesto que los datos de la cuenta an�nima pueden faltar, se recomienda utilizar la funci�n &quot;Comprobar las tablas de usuario y de grupos&quot; en la parte principal del mantenimiento de la BD.',
	'raa_success' => 'Todos los administradores fueron removidos.',
	'mua_success' => 'El usuario seleccionado ahora tiene privilegios de administrador.',
	'mua_failed' => '<b>Error:</b> El usuario seleccionado no existe o ya tiene los permisos de administrador.',
	'rcp_success' => "Copie el texto a un archivo de texto, ren�mbrelo a <b>config.php</b> y s�balo al directorio ra�z de su foro. Por favor, aseg�rese de que no haya caracteres (incluyendo los espacios y saltos de l�nea) antes del <b>&lt;?php</b> y despu�s de <b>?&gt;</b>.<br /> Tambi�n puede %sdescargar%s el archivo a su ordenador.",
// Text for success messages
	'Removing_admins' => 'Borrando administradores',
// Help Text
	'Option_Help_Text' => '<p>Si se le avisa de que hubo un error al crear una sesi�n o tal, puede limpiar los datos de la sesi�n seleccionando <b>Limpiar todas las sesiones</b>. Si tiene problemas con el acceso a las tablas de la base de datos, puede repararlas seleccionando <b>Reparar las tablas de la base de datos</b>. <b>Comprobar tabla de configuraci�n</b> comprobar� la tabla de configuraci�n para saber si hay entradas que faltan, lo que 	puede ser provechoso para varios tipos de errores.</p><p>Si no puede loguearse o entrar al panel de administraci�n, puede haber un fallo en la ruta de su cookie. Puede resetearla con <b>Actualizar informaci�n de la ruta</b> o <b>Actualizar datos de la cookie</b>. Tambi�n puede actualizar los ajustes del lenguaje con <b>Actualizar datos del lenguaje</b>, o los datos de la plantilla con <b>Actualizar datos de plantilla</b>.</p><p>Si ocurren problemas tras activar la compresi�n gzip, puede desactivarla seleccionando <b>Desactivar compresi�n gzip</b>.</p><p>Si perdi� la contrase�a de su cuenta, puede conceder privilegios de administraci�n a un usuario seleccionando <b>Conceder a un usuario privilegios de admin</b>. Esto tambi�n activar� al usuario, as� que puede utilizar a un usuario creado justo antes. Si no puede agregar a un nuevo usuario, puede limpiar la lista de baneos con <b>Limpiar lista de BAN</b> (esto tambi�n restaurar� al usuario an�nimo).</p><p>Si su foro fue hackeado, se recomienda que quite todas las cuentas de administrador, seleccionando <b>Remover a todos los administradores</b>. (La cuenta en s� no ser� eliminada, pero los permisos ser�n removidos.)</p><p>Si necesita restaurar su config.php, puede hacerlo seleccionando <b>Reconstruir config.php</b>.</p>',

	'dbmntc_Invalid_Option' => 'Opci�n inv�lida',
	)
);
?>