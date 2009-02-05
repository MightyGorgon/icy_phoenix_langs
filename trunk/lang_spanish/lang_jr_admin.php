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

$lang = array_merge($lang, array(
	'None' => 'Ninguno',
	'Allow_Access' => 'Permitir acceso',

	'Jr_Admin' => 'Administrador junior',
	'Options' => 'Opciones',
	'Example' => 'Ejemplo',
	'Version' => 'Versión',
	'Add_Arrow' => 'Añadir ->',
	'Super_Mod' => 'Súper moderador',
	'Update' => 'Actualizar',
	'Modules' => 'Módulos',
	'Module_Info' => 'Información de módulo',
	'Module_Count' => 'Total de módulos',
	'Modules_Owned' => '(%d módulos)',
	'Updated_Permissions' => 'Actualizar permisos del usuario en el módulo<br />',
	'Color_Group' => 'Color del grupo',
	'Users_with_Access' => 'Usuarios con acceso',
	'Users_without_Access' => 'Usuarios sin acceso',
	'Check_All' => 'Seleccionar/deselecionar todo',
	'Cat_Check_All' => 'Categoría: seleccionar/deseleccionar todo',
	'Edit_Permissions' => 'Editar permisos de usuario',
	'View_Profile' => 'Ver perfil del usuario',
	'Edit_User_Details' => 'Editar detalles del usuario',
	'Notes' => 'Notas',
	'Allow_View' => 'Permitir al usuario ver',
	'Start_Date' => 'Primer permiso concedido',
	'Update_Date' => 'Último permiso concedido',
	'Edit_Modules' => 'Editar módulos',
	'Rank' => 'Rango',
	'Allow_PM' => 'Permitir mensaje privado',
	'Allow_Avatar' => 'Permitir avatar',
	'User_Active' => 'Usuario activo',
	'User_Info' => 'Información del usuario',
	'User_Stats' => 'Estadísticas del usuario',
	'Junior_Admin_Info' => 'Su información de administrador junior',
	'Admin_Notes' => 'Notas del administrador',

//Descriptions
	'Levels_Page_Desc' => 'Esta página le permite definir niveles de usuario. Elija un nombre de usuario o introdúzcalo. ¡Los nombres de usuario se deben separar por una , (coma) en cada lista!',
	'Permissions_Page_Desc' => 'Esta página le permite cambiar ciertos permisos de administración y editar su lista de módulos.',

//Errors
	'Error_Users_Table' => 'Error de búsqueda en la tabla de usuarios.',
	'Error_Module_Table' => 'Error de búsqueda en la tabla de módulo de permisos de administrador junior.',
	'Error_Module_ID' => 'El módulo requerido no existe o usted no es un usuario autorizado.',
	'Disabled_Color_Groups' => 'MOD color de grupos no encontrado, incapaz de asignar un color de grupo.',
	'Admin_Note' => 'Aviso:  Este usuario está clasificado como usuario de nivel administrador. Ninguna restricción puesta aquí tendrá efecto hasta que usted cambie su acceso a usuario en vez de administrador.',
	'No_Special_Ranks' => 'No hay definidos rangos especiales.',

//This is the bookmark ASCII search list!  If you have odd usernames, you should add your own ASCII search numbers.
//It uses a special format.
// Smaller-case letters are ignored also.  Don't bother listing them as everything is converted to upper case for eval.
// It searches and prepares the bookmark heading IN THE ORDER you have it below.  It will not sort lowest to highest.
//
// Item-Item2 will search the code from item to item2 AND give each their own bookmark heading (ex. A-Z)
// Item&Item2 will search the code from item to item2 BUT NOT give each their own heading, they will appear like 1-9
// You can add single entries, ie 67
// Separate entry areas by a ,
//
	'ASCII_Search_Codes' => '48&57, 65-90',

//Images
// Don't change these unless you need to
	'ASC_Image' => 'images/sort_asc.png',
	'DESC_Image' => 'images/sort_desc.png',
	)
);

?>