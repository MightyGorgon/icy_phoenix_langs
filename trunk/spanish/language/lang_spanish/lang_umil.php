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
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
* @author Nathan Guse (EXreaction) http://lithiumstudios.org
* @author David Lewis (Highway of Life) highwayoflife@gmail.com
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
	'ACTION' => 'Accion',
	'ADVANCED' => 'Avanzado',
	'AUTH_CACHE_PURGE' => 'Limpiando Cache de Autentificacion',

	'CACHE_PURGE' => 'Limpiando Cache del Foro',
	'CONFIGURE' => 'Configurar',
	'CONFIG_ADD' => 'A&ntilde;adir nueva variable de configuracion: %s',
	'CONFIG_ALREADY_EXISTS' => 'ERROR: La variable %s ya existe.',
	'CONFIG_NOT_EXIST' => 'ERROR: La variable %s no existe.',
	'CONFIG_REMOVE' => 'Borrando variable: %s',
	'CONFIG_UPDATE' => 'Actualizando Variable: %s',

	'DISPLAY_RESULTS' => 'Mostrar Resultados completos',
	'DISPLAY_RESULTS_EXPLAIN' => 'Selecione SI para mostrar todas las acciones y resultados durante la operacion.',

	'ERROR_NOTICE' => 'Surgieron 1 &oacute; mas Errores durante la Operacion.  por favor descarge <a href="%1$s">este Archivo</a> con la Lista de Errores, y pregunte al Creador del Mod por Ayuda.<br /><br />Si tiene problemas descargando el Archivo, puede bajarlo directamente via FTP en esta direccion: %2$s',
	'ERROR_NOTICE_NO_FILE' => 'Surgieron 1 &oacute; mas Errores durante la Operacion. Por favor, cree un archivo completo de todos los Errores, y pregunte al Creador del Mod por Ayuda.',

	'FAIL' => 'Fail',
	'FILE_COULD_NOT_READ' => 'ERROR: no pude abrir el archivo %s para leerlo.',
	'FOUNDERS_ONLY' => 'Tiene que ser Administrador Fundador, para acceder esta pagina.',

	'GROUP_NOT_EXIST' => 'El Grupo no existe',

	'IGNORE' => 'Ignorar',
	'IMAGESET_CACHE_PURGE' => 'lipiado cache %s de imagenes',
	'INSTALL' => 'Instalar',
	'INSTALL_MOD' => 'Instalar %s',
	'INSTALL_MOD_CONFIRM' => 'Esta listo/a para instalar %s?',

	'MODULE_ADD' => 'A&ntilde;adiendo %1$s modulo: %2$s',
	'MODULE_ALREADY_EXIST' => 'ERROR: El modulo ya existe.',
	'MODULE_NOT_EXIST' => 'ERROR: El modulo no existe.',
	'MODULE_REMOVE' => 'Borrando %1$s modulo: %2$s',

	'NONE' => 'Ninguno',
	'NO_TABLE_DATA' => 'ERROR: Ninguna tabla especificada',

	'PARENT_NOT_EXIST' => 'ERROR: La categoria Padre especificada para este modulo, no existe.',
	'PERMISSIONS_WARNING' => 'Nuevos permisos fueron a&ntilde;adidos.  Asegurese, de verificar sus ajustes, y que esten como los quiere.',
	'PERMISSION_ADD' => 'A&ntilde;adiendo nueva opcion de permiso: %s',
	'PERMISSION_ALREADY_EXISTS' => 'ERROR: La opcion de permiso %s ya existe.',
	'PERMISSION_NOT_EXIST' => 'ERROR: La opcion de permiso %s no existe.',
	'PERMISSION_REMOVE' => 'Borrando opcion de permiso: %s',
	'PERMISSION_ROLE_ADD' => 'Creando nuevo Role de permiso: %s',
	'PERMISSION_ROLE_UPDATE' => 'Actualizando Role de permiso: %s',
	'PERMISSION_ROLE_REMOVE' => 'Borrando Role de permiso: %s',
	'PERMISSION_SET_GROUP' => 'Ajustando permisos de %s grupo.',
	'PERMISSION_SET_ROLE' => 'Ajustando permisos de %s role.',
	'PERMISSION_UNSET_GROUP' => 'Borrando permisos de %s grupo.',
	'PERMISSION_UNSET_ROLE' => 'Borrando permisos de %s role.',

	'ROLE_ALREADY_EXISTS' => 'El Role ya existe.',
	'ROLE_NOT_EXIST' => 'El Role no existe',

	'SUCCESS' => 'Satisfecho',

	'TABLE_ADD' => 'A&ntilde;adiendo Tabla a la BD: %s',
	'TABLE_ALREADY_EXISTS' => 'ERROR: La Tabla %s ya existe.',
	'TABLE_COLUMN_ADD' => 'A&ntilde;adiendo una nueva Columna de nombre %2$s a la Tabla %1$s',
	'TABLE_COLUMN_ALREADY_EXISTS' => 'ERROR: La Columna %2$s ya existe en la Tabla %1$s.',
	'TABLE_COLUMN_NOT_EXIST' => 'ERROR: La Columna %2$s no existe en la Tabla %1$s.',
	'TABLE_COLUMN_REMOVE' => 'Borrando la Columna %2$s de la Tabla %1$s',
	'TABLE_COLUMN_UPDATE' => 'Actualizando la Clumna %2$s de la Tabla %1$s',
	'TABLE_KEY_ADD' => 'A&ntilde;adiendo una LLave de nombre %2$s a la tabla %1$s',
	'TABLE_KEY_ALREADY_EXIST' => 'ERROR: El indice %2$s ya existe en la Tabla %1$s.',
	'TABLE_KEY_NOT_EXIST' => 'ERROR: El Indice %2$s no existe en la Tabla %1$s.',
	'TABLE_KEY_REMOVE' => 'Borrando una LLave de nombre %2$s de la Tabla %1$s',
	'TABLE_NOT_EXIST' => 'ERROR: La Tabla %s no existe.',
	'TABLE_REMOVE' => 'Borrando la Tabla: %s',
	'TABLE_ROW_INSERT_DATA' => 'Insertando Datos en la Tabla %s .',
	'TABLE_ROW_REMOVE_DATA' => 'Borrando una linea de la Tabla %s ',
	'TABLE_ROW_UPDATE_DATA' => 'Actualizando una linea de la Tabla %s.',
	'TEMPLATE_CACHE_PURGE' => 'Refrescando la Cache del Template %s',
	'THEME_CACHE_PURGE' => 'Refrescando la Cache del Tema %s',

	'UNINSTALL' => 'Desinstalar',
	'UNINSTALL_MOD' => 'Desinstalar %s',
	'UNINSTALL_MOD_CONFIRM' => 'Esta listo/a para desinstalar %s?  Todos los ajustes del Mod seran borrados!',
	'UNKNOWN' => 'Desconocido',
	'UPDATE_MOD' => 'Actualizar %s',
	'UPDATE_MOD_CONFIRM' => 'Esta listo/a para actualizar %s?',
	'UPDATE_UMIL' => 'Esta version de UMIL es antigua.<br /><br />Por favor, descarge la ultima version de UMIL (Unified MOD Install Library) de: <a href="%1$s" target="_blank">%1$s</a>',

	'VERSIONS' => 'Mod Version: <strong>%1$s</strong><br />Actualmente instalada: <strong>%2$s</strong>',
	'VERSION_SELECT' => 'Selecionar Version',
	'VERSION_SELECT_EXPLAIN' => 'No cambie de “Ignorar” , si no que sabe lo que hace, &oacute; se le pide.',
	)
);

?>