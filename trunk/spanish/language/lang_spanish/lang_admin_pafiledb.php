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
// Categories
	'Cat_manage_title' => 'Administrar categorías',
	'File_manage_title' => 'Administrar archivos',
	'All_files' => 'Todos los archivos',
	'Approved_files' => 'Archivos aprobados',
	'Broken_files' => 'Archivos rotos',
	'File_cat' => 'Archivo en la categoría',
	'Maintenance' => 'Mantenimiento de archivos',
	'Approve' => 'Aprobar',
	'Unapprove' => 'Rechazar',
	'File_mode' => 'Ver',
	'Approve_selected' => 'Aprobar seleccionados',
	'Unapprove_selected' => 'Rechazar seleccionados',
	'Delete_selected' => 'Borrar seleccionados',
	'No_file' => 'No hay archivos',
	'Acat' => 'Category: Agregar',
	'Ecat' => 'Category: Editar',
	'Dcat' => 'Category: Borrar',
	'Rcat' => 'Category: Reordenar',
	'Cat_Permissions' => 'Permisos de las categorías',
	'User_Permissions' => 'Permisos de usuarios',
	'Group_Permissions' => 'Permisos de grupo',
	'User_Global_Permissions' => 'Permisos globales de usuarios',
	'Group_Global_Permissions' => 'Permisos globales de grupos',
	'Acattitle' => 'Agregar categorías',
	'Ecattitle' => 'Editar categorías',
	'Dcattitle' => 'Borrar categorías',
	'Rcattitle' => 'Reordenar categorías',
	'Catexplain' => 'Puede usar la sección de administrar categorías para editar, borrar y reordenar categorías. Si quiere agregar un archivo a su base de datos, debe tener creada por lo menos una categoría. Puede seleccionar uno de los siguientes enlaces para manejar sus categorías.', 
	'Rcatexplain' => 'Puede reordenar sus categorías para cambiar la posición en que se muestran en la página. Para reordenar las categorías, cambie el número para asignar en qué orden se mostrarán. 1 se mostrará primero, 2 segundo, etc.',
	'Catadded' => 'La nueva categoría ha sido agregada correctamente.',
	'Catname' => 'Nombre de la categoría',
	'Catnameinfo' => 'Esto será el nombre de la categoría.',
	'Catdesc' => 'Descripción de la categoría',
	'Catdescinfo' => 'Esta es una descripción de los archivos en la categoría',
	'Catparent' => 'Categoría superior',
	'Catparentinfo' => 'Si quiere que esta categoría se transforme en una sub-categoría, seleccione la categoría que desee que sea parte de.',
	'Allow_file' => 'Permitir agregar archivos',
	'Allow_file_info' => 'Si no desea que se agreguen archivos a esta categoría, ésta será una categoría superior, y podrá agregar una sub-categoría, como en los foros.',
	'None' => 'Ninguno',
	'Catedited' => 'La categoría que seleccionó ha sido editada correctamente',
	'Delfiles' => '¿Qué desea hacer con los archivos en esta categoría?',
	'Do_cat' => '¿Qué desea hacer con la sub-categoría en esta categoría?',
	'Move_to' => 'Mover a',
	'Catsdeleted' => 'Las categorías seleccionadas fueron borradas correctamente',
	'Cdelerror' => 'No seleccionó ninguna categoría a borrar',
	'Rcatdone' => 'Las categorías han sido reordenadas correctamente.',

//Categories Permission
	'View' => 'Ver',
	'Read' => 'Leer',
	'View_file' => 'Ver Archivos',
// MX Addon
	'Delete_file' => 'Borrar archivo',
	'Edit_file' => 'Editar archivo',
// End
	'Upload' => 'Subir archivo',
	'Download_file' => 'Descargar archivo',
	'Rate' => 'Valorar o votar',
	'View_comment' => 'Ver comentarios',
	'Post_comment' => 'Enviar un comentario',
	'Edit_comment' => 'Editar comentario (n/a)',
	'Delete_comment' => 'Borrar comentario',
	'Category_auth_updated' => 'Actualizar los permisos de la categoría',
	'Click_return_catauth' => 'Pulse %saquí%s para volver a los permisos de las categorías',
	'Auth_Control_Category' => 'Controlar los permisos de las categorías',
	'Category_auth_explain' => 'Aquí puede modificar el nivel de permisos de las categorías. Recuerde que el editar el nivel de los permisos de las categorías puede afectar a los usuarios.',
	'Select_a_Category' => 'Seleccione una categoría',
	'Look_up_Category' => 'Ver una categoría',
	'Category' => 'Categoría',
	'Auth_Control_Category' => 'Control de permisos de categoría',

	'Category_ALL' => 'TODOS',
	'Category_REG' => 'REGISTRADO',
	'Category_PRIVATE' => 'PRIVADO',
	'Category_MOD' => 'MODERADOR',
	'Category_ADMIN' => 'ADMINISTRADOR',

// Configuration
	'Settings' => 'Configuración',
	'Settingstitle' => 'Configuración de descarga',
	'Settingsexplain' => 'El siguiente formulario le permitirá administrar todas las descargas.',
	'Dbname' => 'Nombre de su base de datos',
	'Dbnameinfo' => 'Este es el nombre de la base de datos, tal como "Zona de descargas"',
	'Sitename' => 'Nombre del sitio',
	'Sitenameinfo' => 'Este es el nombre de su sitio para el menú de navegación, tal como "Inicio"',
	'Dburl' => 'URL de la base de datos',
	'Dburlinfo' => 'Esta es la URL hacia el directorio donde esto está instalado',
	'Hpurl' => 'URL de la página',
	'Hpurlinfo' => 'Esta es la URL de su portal o página de inicio',
	'Topnum' => 'Numero de los TOP',
	'Topnuminfo' => 'Esto es cuántos archivos se mostrarán en la lista de los archivos mas descargados',
	'Nfdays' => 'Días de los nuevos archivos',
	'Nfdaysinfo' => 'Cuantos días se mostrarán con el icono de "Archivo nuevo". Si lo deja en 5, todos los archivos serán mostrados con el icono de "archivo nuevo" durante 5 días',
	'Showva' => 'Mostrar "Ver todos los archivos"',
	'Showvainfo' => 'Elija si desea o no mostrar el "Ver todos los archivos" exhibido con las otras categorías en la página principal ',
	'Php_template' => 'PHP en plantilla',
	'Php_template_info' => 'Esto permitirá que utilice el PHP directamente en los archivos de la plantilla',
	'Dbdl' => 'Inhabilite las descargas',
	'Dbdlinfo' => 'Esto hará la sección de descarga inaccesible a los usuarios. Es una buena opción a utilizar cuando esté modificando en su base de datos. Sólo los administradores podrán utilizar la base de datos ',
	'Isdisabled' => 'La sección de descargas está temporalmente deshabilitada, inténtelo de nuevo más adelante.',
	'Com_settings' => 'Ajustes de comentarios',
	'Com_allowh' => 'Permitir HTML',
	'Com_allowb' => 'Permitir BBCode',
	'Com_allows' => 'Permitir Emoticonos',
	'Com_allowl' => 'Permitir Enlaces',
	'Com_messagel' => 'Mensaje de enlaces no permitidos',
	'Com_messagel_info' => 'Si los enlaces no están permitidos, este mensaje será el que reemplazará el enlace',
	'Com_allowi' => 'Permitir imágenes',
	'Com_messagei' => 'Mensaje de imágenes no permitidas',
	'Com_messagei_info' => 'Si las imágenes se prohíben, este mensaje será el que reemplazará a las imágenes',
	'Max_char' => 'Número máximo de caracteres',
	'Max_char_info' => 'Si un mensaje excede el numero de caracteres permitidos, aparecerá este mensaje de error (límite el comentario).',
	'Settings_changed' => 'Sus ajustes se han actualizado correctamente',
	'File_per_page' => 'Número de archivos por página',
	'File_per_page_info' => 'Aquí puede fijar el número de archivos por página. Si no pone nada, por defecto es 20.',
	'Hotlink_prevent' => 'Prevención de hotlink',
	'Hotlinl_prevent_info' => 'SFije aquí si no desea permitir hotlinks a los archivos',
	'Hotlink_allowed' => 'Permitir hotlink',
	'Hotlink_allowed_info' => 'Permitidos hotlinks (separado por una coma), por ejemplo: www.phpbb.com, www.forumimages.com',
	'Default_sort_method' => 'Método de sorteo por defecto',
	'Default_sort_order' => 'Orden de sorteo por defecto',
	'Max_filesize' => 'Tamaño máximo de un archivo',
	'Max_filesize_explain' => 'El tamaño máximo para los archivos. Un valor 0 significa ilimitado. Este ajuste queda limitado por la configuración de su servidor. Por ejemplo, si el PHP de su servidor sólo permite un máximo de 2 MB en subidas, esto no puede ser eliminado por el el MOD.',
	'Upload_directory' => 'Directorio de subida',
	'Upload_directory_explain' => 'Escriba la ruta de su Icy Phoenix al directorio de subida. Por ejemplo, escriba pafiledb/uploads/ si su instalación de Icy Phoenix está situada en http://www.yourdomain.com/ip/ y el directorio de las descargas está en http://www.yourdomain.com/ip/pafiledb/uploads/.',
	'Screenshots_directory' => 'Directorio de capturas',
	'Screenshots_directory_explain' => 'Escriba la ruta de su Icy Phoenix al directorio de subida de capturas. Por ejemplo, escriba pafiledb/images/screenshots si su instalación Icy Phoenix está situada en http://www.yourdomain.com/ip/ y el directorio de descargas está en http://www.yourdomain.com/ip/pafiledb/images/screenshots.',
	'Forbidden_extensions' => 'Extensiones prohibidas',
	'Forbidden_extensions_explain' => 'Aquí puede agregar o suprimir las extensiones prohibidas. Separe cada extensión con comas.',
	'Permission_settings' => 'Ajustes del permiso',
	'Auth_search' => 'Permisos de la búsqueda',
	'Auth_search_explain' => 'Permitir la búsqueda para un tipo específico de usuarios',
	'Auth_stats' => 'Permiso de estadísticas',
	'Auth_stats_explain' => 'Permitir estadísticas para un tipo específico de usuarios',
	'Auth_toplist' => 'Permiso de lista TOP',
	'Auth_toplist_explain' => 'Permita la lista TOP para un tipo específico de usuarios',
	'Auth_viewall' => 'Permiso de "ver todos"',
	'Auth_viewall_explain' => 'Permita el "ver todos" para un tipo específico de usuarios',

// Custom Field
	'Afield' => 'Campo actual: Añadir',
	'Efield' => 'Campo actual: Editar',
	'Dfield' => 'Campo actual: Borrar',
	'Mfieldtitle' => 'Campos actuales',
	'Afieldtitle' => 'Añadir',
	'Efieldtitle' => 'Editar',
	'Dfieldtitle' => 'Borrar',
	'Fieldexplain' => 'Puede utilizar la sección de edición de campos para agregar, para corregir, y para suprimir modificar los campos. Puede utilizar edición de campos para agregar más información sobre un archivo. Por ejemplo, si quisiera que un campo de información pusiera el tamaño de los archivos, puede crear el campo de llenado y entonces puede agregar el tamaño del archivo en la página del archivo de agregar/Editar.',
	'Fieldname' => 'Nombre del campo',
	'Fieldnameinfo' => 'Este es el nombre del campo, por ejemplo, "tamaño de archivo"',
	'Fielddesc' => 'Descripción del campo',
	'Fielddescinfo' => 'Esta es una descripción del campo, por ejemplo, "tamaño de archivo en Megabytes"',
	'Fieldadded' => 'El campo de llenado se ha agregado correctamente',
	'Fieldedited' => 'El campo de llenado que seleccionó se ha corregido correctamente',
	'Dfielderror' => 'No seleccionó campos para borrar',
	'Fieldsdel' => 'Los campos que seleccionó han sido borrados con correctamemnte',

	'Field_data' => 'Opciones',
	'Field_data_info' => 'Incorpore las opciones que el usuario podrá elegir. Separe cada opción con una nueva línea (Enter).',
	'Field_regex' => 'Expresión regular',
	'Field_regex_info' => 'Puede requerir el campo para seleccionar una expresión regular %s(PCRE)%s.',
	'Field_order' => 'Orden a mostrar',

// File
	'Afile' => 'Archivo: Agregar',
	'Efile' => 'Archivo: Editar',
	'Dfile' => 'Archivo: Borrar',
	'Afiletitle' => 'Agregar archivo',
	'Efiletitle' => 'Editar archivo',
	'Dfiletitle' => 'Borrar archivo',
	'Fileexplain' => 'Puede utilizar la sección de manejo de archivos para agregar, editar, y borrar archivos.',
	'Upload' => 'Subir archivo',
	'Uploadinfo' => 'Subir este archivo',
	'Uploaderror' => 'Este archivo ya existe. Renombre, por favor, el archivo e inténtelo otra vez.',
	'Uploaddone' => 'El archivo ha sido subido satisfactoriamente. La URL al archivo es',
	'Uploaddone2' => 'Pulse aquí para colocar esta URL en el campo de la URL de descarga.',
	'Upload_do_done' => 'Subido satisfactoriamente',
	'Upload_do_not' => 'No subido',
	'Upload_do_exist' => 'El archivo ya existe',
	'Filename' => 'Nombre del archivo',
	'Filenameinfo' => 'Este es el nombre del archivo que está agregando, por ejemplo "Mis fotos"',
	'Filesd' => 'Descripción breve',
	'Filesdinfo' => 'Esta es una descripción corta del archivo. Irá en la página que muestra todos los archivos en una categoría, así que debe ser breve. ',
	'Fileld' => 'Descripción larga',
	'Fileldinfo' => 'Esta es una descripción larga del archivo. Irá en la página de información de los archivos, por lo que puede ser más extensa. ',
	'Filecreator' => 'Creador/Autor',
	'Filecreatorinfo' => 'Este es el nombre de quien creó el archivo.',
	'Fileversion' => 'Versión del archivo',
	'Fileversioninfo' => 'Esta es la versión del archivo, tal como 3.0 o 1.3 beta',
	'Filess' => 'URL de captura de pantalla',
	'Filessinfo' => 'Esto es una URL a una captura del archivo. Por ejemplo, si está agregando una plantilla del Winamp, esta sería la URL a una imagen de pantalla "screenshot" de esa plantilla. Puede incorporar manualmente una URL, o puede dejarlo en blanco y agregar una URL con el examinar.',
	'Filess_upload' => 'Subir captura',
	'Filessinfo_upload' => 'Puede subir la captura pulsando en examinar',
	'Filess_link' => 'Captura como un enlace',
	'Filess_link_info' => 'Si desea mostrar la captura como un enlace marque "sí".',
	'Filedocs' => 'DURL de la documentación/manual',
	'Filedocsinfo' => 'Esto es una URL a la documentación o a un manual para el archivo',
	'Fileurl' => 'URL del archivo',
	'Fileurlinfo' => 'Esto es una URL al archivo que será descargado. Puede incorporar manualmente una URL o puede usar examinar.',
	'File_upload' => 'Subir archivo',
	'Fileinfo_upload' => 'Puede subir un archivo pulsando en examinar',
	'Uploaded_file' => 'Archivo subido',
	'Filepi' => 'Icono',
	'Filepiinfo' => 'Puede elegir un icono para el archivo. Se mostrará al lado del archivo en la lista de archivos.',
	'Filecat' => 'Categoría',
	'Filecatinfo' => 'Esta es la categoría a la que pertenece el archivo.',
	'Filelicense' => 'Licencia',
	'Filelicenseinfo' => 'Este es el acuerdo de licencia que el usuario debe aceptar antes de descargar el archivo.',
	'Filepin' => 'Archivo destacado',
	'Filepininfo' => 'Elija si desea que el archivo sea destacado o no. Los archivos destacados se mostrarán siempre en la parte superior de la lista de archivos.',
	'Fileadded' => 'El nuevo archivo se ha agregado correctamente',
// MX Addon
	'Filedeleted' => 'El archivo se ha borrado correctamente',
// End
	'Fileedited' => 'El archivo ha sido editado correctamente',
	'Fderror' => 'No seleccionó ningún archivo para suprimir',
	'Filesdeleted' => 'Los archivos que seleccionó se han borrado correctamente',
	'Filetoobig' => 'El archivo es demasiado grande!',
	'Approved' => 'Aprobado',
	'Not_approved' => '(No aprobado)',
	'Approved_info' => 'Use esta opción para hacer que el archivo esté disponible para los usuarios, y también para aprobar un archivo que ha sido subido por los usuarios.',
	'Fchecker' => 'Mantenimiento de archivos',
	'File_checker' => 'Mantenimiento de archivos',
	'File_checker_explain' => 'Aquí puede comprobar si están todos los archivos en la base de datos y el archivo en el directorio de descarga.',
	'File_saftey' => 'El mantenimiento de archivos suprimirá todos los archivos y las capturas que no se necesitan, y borrará todos los registros de archivos que hayan sido eliminados y todas las capturas que no se encuentren.<br /><br />Si los archivos no comienzan con <FONT COLOR="#FF0000">{html_path}</FONT >, entonces no se les tendrán en cuenta por razones de seguridad. <br /><br />Por favor, cerciórese de que el <FONT COLOR="#FF0000">{html_path}</FONT > es la ruta que usted utiliza para sus archivos.<br /><br /><b>Nota:</b> Se recomienda vivamente que haga <b><a href="'. append_sid("admin_db_utilities.php?perform=backup"). '"class="genmed">Copia de su base de datos</a></b>.',
	'File_checker_perform' => 'Verificador de "mantenimiento"',
	'Checker_saved' => 'Espacio total ahorrado',
	'Checker_sp1' => 'Comprobando si hay registros con archivos perdidos...',
	'Checker_sp2' => 'Comprobando si hay registros con capturas perdidas...',
	'Checker_sp3' => 'Borrando archivos sin utilizar...',
	'Filedls' => 'Total de la descarga',
	'Addtional_field' => 'Campo adicional',
	'File_not_found' => 'No se encuentra el archivo que seleccionó',
	'SS_not_found' => 'No se puede encontrar la captura',
// License
	'Alicense' => 'Licencia: Agregar',
	'Elicense' => 'Licencia: Editar',
	'Dlicense' => 'Licencia: Borrar',
	'Alicensetitle' => 'Agregar licencia',
	'Elicensetitle' => 'Editar licencia',
	'Dlicensetitle' => 'Borrar licencia',
	'Licenseexplain' => 'Puede utilizar esta sección para agregar, corregir, y suprimir acuerdos de licencia. Puede seleccionar una licencia para un archivo en la página de editar/agregar archivo. Si un archivo tiene un acuerdo de licencia, el usuario tendrá que aceptarlo antes de descargar el archivo.',
	'Lname' => 'Nombre de la licencia',
	'Ltext' => 'Texto de la licencia',
	'Licenseadded' => 'El nuevo acuerdo de licencia se ha agregado correctamente',
	'Licenseedited' => 'El acuerdo de licencia que seleccionó se ha corregido correctamente',
	'Lderror' => 'No ha seleccionado ninguna licencia para ser borrada',
	'Ldeleted' => 'Los acuerdos de licencia que seleccionó se han borrado correctamente',
// MX
	'License_title' => 'Licencia',
// ENd
	'Click_return' => 'Pulse %saquí%s para volver a la página anterior',
	'Click_return_upload' => 'Pulse %saquí%s para volver a la página de subidas',
	'Click_edit_permissions' => 'Pulse %saquí%s para editar los permisos de esta categoría',

//Java script messages and php errors
	'Cat_name_missing' => 'Por favor, rellene el campo del nombre de la categoría',
	'Cat_conflict' => 'No puede tener una categoría sin archivo dentro de una categoría que no permita archivos',
	'Cat_id_missing' => 'Por favor, seleccione una categoría',
	'Missing_field' => 'Por favor, complete todos los campos',


//Fields Types

	'Input' => 'Sólo una línea de texto',
	'Textarea' => 'Múltiples líneas de texto',
	'Radio' => 'Botones de selección simple',
	'Select' => 'Menú de selección simple',
	'Select_multiple' => 'Menú de selección múltiple',
	'Checkbox' => 'Checkbox de selección múltiple',

// MX Addon
	'Validation_settings' => 'Ajustes de aprobación',
	'Need_validate' => '¿Validar subidas?',
	'Validator' => 'Validador',
	'PM_notify' => 'otificacion por MP a validador(es) (n/a)',
	'Validator_admin_option' => 'Admin',
	'Validator_mod_option' => 'Admin. y moderador de categoría',

	'Allow_comments' => 'Habilitar comentarios',
	'Allow_comments_info' => 'Habilitar/deshabilitar comentarios en esta categoría.',
	'Allow_ratings' => 'Habilitar votaciones',
	'Allow_ratings_info' => 'Habilitar/deshabilitar votaciones en esta categoría.',

	'MCP_title' => 'Panel de control del moderador',
	'MCP_title_explain' => 'Aquí los moderadores pueden aprobar y editar archivos',

	'Fileadded_not_validated' => 'El archivo ha sido añadido correctamente, pero un moderador o administrador necesita validar el archivo antes de aprobarlo y ser visible en la web.',
	)
);

?>