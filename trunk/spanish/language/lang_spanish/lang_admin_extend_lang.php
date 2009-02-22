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
* Ptirhiik (admin@rpgnet-fr.com)
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
	'Lang_extend_lang_extend' => 'Extensión para paquetes de lenguaje',
	'Lang_extend__custom' => 'Paquete de lenguaje actual',
	'Lang_extend__phpBB' => 'Paquete de lenguaje de Icy Phoenix',

	'Languages' => 'Lenguajes',
	'Lang_management' => 'Administrar',
	'Lang_extend' => 'Administracón amplia de lenguaje',
	'Lang_extend_explain' => 'Aquí usted puede añadir o modificar las entradas de lenguaje',
	'Lang_extend_pack' => 'Paquete de lenguaje',
//	'Lang_extend_pack_explain' => 'This is the name of the pack, usualy the name of the MOD refering to',
	'Lang_extend_pack_explain' => 'Nombre del paquete de lenguaje',

	'Lang_extend_entry' => 'Entrada de clave de lenguaje',
	'Lang_extend_entries' => 'Entradas de claves de lenguaje',
	'Lang_extend_level_edit' => 'Editar',
	'Lang_extend_level_admin' => 'Administrar',
	'Lang_extend_level_normal' => 'Normal',

	'Lang_extend_add_entry' => 'Añadir una nueva entrada de lenguaje',

	'Lang_extend_key_main' => 'Entrada principal de lenguaje',
	'Lang_extend_key_main_explain' => 'Está es la clave principal de entrada, por lo general la única',
	'Lang_extend_key_sub' => 'Entrada secundaria',
	'Lang_extend_key_sub_explain' => 'Está es la clave de entrada de segundo nivel, y no suele ser utilizado',
	'Lang_extend_level' => 'Nivel para la entrada de lenguaje',
	'Lang_extend_level_explain' => 'Nivel de admin, sólo se puede utilizar en el panel de configuración de administración. Nivel normal, se puede utilizar en todas partes.',

	'Lang_extend_missing_value' => 'Usted tiene que proporcionar al menos el valor Inglés',
	'Lang_extend_key_missing' => 'Clave de entrada principal no se encuentra',
	'Lang_extend_duplicate_entry' => 'Está entrada ya existe (ver paquete %)',

	'Lang_extend_update_done' => 'La entrada ha sido actualizada correctamente.<br /><br />Pulse %saquí%s para volver a la entrada.<br /><br />Pulse %saquí%s para volver a la lista de entradas',
	'Lang_extend_delete_done' => 'La entrada ha sido borrada correctamente.<br />Tenga en cuenta, que sólo se borran las entradas o claves personalizadas, no las entradas basicas si existen.<br /><br />Pulse %saquí%s para volver a la lista de entradas',

	'Lang_extend_search' => 'Buscar en entradas de lenguaje',
	'Lang_extend_search_words' => 'Palabras a encontrar',
	'Lang_extend_search_words_explain' => 'Separar palabras con un espacio',
	'Lang_extend_search_all' => 'Todas las palabras',
	'Lang_extend_search_one' => 'Uno de esos',
	'Lang_extend_search_in' => 'Buscar en',
	'Lang_extend_search_in_explain' => 'Precise su búsqueda',
	'Lang_extend_search_in_key' => 'Claves',
	'Lang_extend_search_in_value' => 'Valores',
	'Lang_extend_search_in_both' => 'Ambos',
	'Lang_extend_search_all_lang' => 'Todos los lenguajes instalados',

	'Lang_extend_search_no_words' => 'No hay palabras que buscar.<br /><br />Pulse %saquí%s para volver a la lista del paquete.',
	'Lang_extend_search_results' => 'Resultados de búsqueda',
	'Lang_extend_value' => 'Valor',
	'Lang_extend_level_leg' => 'Nivel',

	'Lang_extend_added_modified' => '*',
	'Lang_extend_modified' => 'Modificado',
	'Lang_extend_added' => 'Añadido',
	)
);

?>