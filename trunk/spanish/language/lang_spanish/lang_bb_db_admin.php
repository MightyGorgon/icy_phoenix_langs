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
* aUsTiN-Inc - (austin_inc@hotmail.com) - (phpbb-amod.com)
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
	'db_browse' => 'Navegar',
	'db_truncate' => 'Vaciar (Truncate)',
	'db_optimize' => 'Optimizar',
	'db_drop' => 'Eliminar',
	'db_repair' => 'Reparar',
	'db_structure' => 'Estructura',
	'db_explain' => 'Explicar acciones',

	'db_table_name' => 'Nombre de la tabla',
	'db_action' => 'Acci&oacute;n',
	'db_type' => 'Tipo',
	'db_row_format' => 'Formato de fila',
	'db_rows' => 'Filas',
	'db_avg_r_len' => 'Longitud de la fila de avg.',
	'db_data_len' => 'Longitud de datos',
	'db_max_dat_len' => 'Longitud de datos m&aacute;x.',
	'db_index_len' => 'Longitud de &iacute;ndice',
	'db_overhead' => 'De arriba (Overhead)',
	'db_auto_inc' => 'Auto incrementar',
	'db_with_sel' => 'Con las tablas seleccionadas:',
	'db_field' => 'Campo',
	'db_type' => 'Tipo',
	'db_null' => 'Sin informaci&oacute;n (Null)',
	'db_key' => 'Llave (Key)',
	'db_default' => 'Por defecto',
	'db_extra' => 'Extra',

	'db_unauthed' => 'Acceso no autorizado.',
	'db_tru_warning' => '&iquest;Est&aacute; seguro de querer hacer truncate %s?',
	'db_dro_warning' => '&iquest;Est&aacute; seguro de querer hacer drop %s?',
	'db_warning_y' => 'S&iacute;',
	'db_warning_n' => 'No',
	'db_opt_success' => 'Optimizar tabla <b>%s</b> completado correctamente.',
	'db_tru_success' => 'Truncado de tabla <b>%s</b> completado correctamente.',
	'db_dro_success' => 'Eliminar tabla <b>%s</b> completado correctamente.',
	'db_rep_success' => 'Reparar tabla <b>%s</b> completado correctamente.',	
	'db_explained' => 'Optimizar tabla: Vaciar&aacute; cualquier secci&oacute;n de datos que sobren.<br />Vaciar tabla: Vaciar&aacute; una tabla de todo su contenido.<br />Navegar: Le permitir&aacute; ver los datos en una tabla.<br />Drop: quitar&aacute; una tabla de su base de datos.',
	'db_back' => 'Pulse %saqu&iacute;%s para volver a la p&aacute;gina principal.',
	'db_change_exp' => 'Usando esto, podr&aacute; ejecutar, por ejemplo, los SQLs, INSERT INTO, ALTER TABLE, UPDATE, DELETE FROM, DROP TABLE, DESCRIBE, etc. Agregue tantos como usted desee, separando cada comando de SQL con un punto y coma.',
	'db_submit_q' => 'Enviar consulta',
	'db_sql_total' => 'Consulta SQL # %s',
	'db_aff_total' => 'Completado correctamente. Filas afectadas: %s',
	'db_no_query' => 'No a&ntilde;adi&oacute; una consulta',
	'db_sql_field_changed' => 'Nombre del campo cambiado.',
	'db_sql_query_db' => 'Consulta a su base de datos: ',
	'DB_Admin' => 'IP MyAdmin',
	)
);

?>