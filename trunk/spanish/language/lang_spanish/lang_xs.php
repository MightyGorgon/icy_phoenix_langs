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
* Vjacheslav Trushkin (http://www.stsoftware.biz)
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
	'Extreme_Styles' => 'eXtreme Styles',
	'xs_title' => 'eXtreme Styles MOD',

	'xs_file' => 'Archivo',
	'xs_template' => 'Plantilla',
	'xs_id' => 'Identificación',
	'xs_style' => 'Estilo',
	'xs_styles' => 'Estilos',
	'xs_users' => 'Usuarios',
	'xs_options' => 'Opciones',
	'xs_comment' => 'Comentario',
	'xs_upload_time' => 'Fecha de subida',
	'xs_select' => 'Seleccionar',

	'xs_continue' => 'Continuar',	// button

	'xs_click_here_lc' => 'Pulse aquí',
	'xs_edit_lc' => 'Editar',

/*
* navigation
*/
	'xs_config_shownav' => array(
		'Configuración',
		'Instalar estilos',
		'Desinstalar estilos',
		'Estilo por defecto',
		'Administrar caché',
		'Importar estilos',
		'Exportar estilos',
		'Clonar estilos',
		'Descargar estilos',
		'Editar plantillas',
		'Editar estilos',
		'Exportar base de datos',
		'Comprobar actualizaciónes',
	),

/*
* frame_top.tpl
*/
	'xs_menu_lc' => 'Menú de eXtreme styles MOD',
	'xs_support_forum_lc' => 'Foro de soporte',
	'xs_download_styles_lc' => 'Descargar estilos',
	'xs_install_styles_lc' => 'Instalar estilos',

/*
* index.tpl
*/

	'xs_main_comment1' => 'Este es el menú principal del MOD eXtreme Styles. Hay bastantes funciones dentro de esta interfaz, así que esta página es una guía. Hay una explicación corta de cada función debajo de su nombre.<br /><br />Nota: Este MOD sustituye el manejo de estilos de phpBB. Encontrará las funciones de phpBB por defecto en esta lista, pero ahora estas funciones se optimizan y tienen características adicionales.<br /><br />Si tiene alguna duda visite el <a href="http://www.phpbbstyles.com" target="_blank">Foro de soporte</a>, donde podrá encontrar ayuda sobre este MOD.',
	'xs_main_comment2' => 'El MOD eXtreme Styles permite a un administrador almacenar estilos enteros en archivos .style. Los estilos se almacenan en un archivo comprimido pequeño, con el que se ahorra el problema de descargar/subir muchos archivos: al comprimirse los archivos del estilo, la descarga/subida es mucho más eficiente.',
	'xs_main_comment3' => 'Todas las funciones del manejo de los estilos de phpBB se substituyen por el MOD eXtreme Styles.<br /><br /><a href="{URL}">Pulse aquí</a> para ver el menú.',
	'xs_main_title' => 'Menú de navegación del eXtreme Styles',
	'xs_menu' => 'Menú del eXtreme Styles',

	'xs_manage_styles' => 'Administrar estilos',
	'xs_import_export_styles' => 'Importar/Exportar estilos',
	'xs_install_uninstall_styles' => 'Instalar/Desinstalar estilos',
	'xs_edit_templates' => 'Editar plantillas',
	'xs_other_functions' => 'Otras funciones',

	'xs_configuration' => 'Configuración',
	'xs_configuration_explain' => 'Le permite cambiar la configuración de eXtreme Styles.',
	'xs_default_style' => 'Estilo por defecto',
	'xs_default_style_explain' => 'Le permite cambiar el estilo por defecto del foro y cambiar usuarios de un estilo a otro.',
	'xs_manage_cache' => 'Manejar el caché',
	'xs_manage_cache_explain' => 'Le permite manejar archivos caché.',
	'xs_import_styles' => 'Importar estilos',
	'xs_import_styles_explain' => 'Le permite descargar e instalar archivos de estilo.',
	'xs_export_styles' => 'Exportar estilos',
	'xs_export_styles_explain' => 'Le permite guardar un estilo de su foro como archivo .style: después podrá transferirlo fácilmente a otro foro o página web.',
	'xs_clone_styles' => 'Clonar estilos',
	'xs_clone_styles_explain' => 'Le permite copiar rápidamente estilos o una plantilla entera.',
	'xs_download_styles' => 'Descargar estilos',
	'xs_download_styles_explain' => 'Le permite descargar e instalar rápidamente estilos desde páginas web. Usted mismo puede configurar una lista de páginas web.',
	'xs_install_styles' => 'Instalar estilos',
	'xs_install_styles_explain' => 'Le permite instalar los estilos que han sido subidos a su foro.',
	'xs_uninstall_styles' => 'Desinstalar estilos',
	'xs_uninstall_styles_explain' => 'Le permite quitar estilos de su foro.',
	'xs_edit_templates_explain' => 'Le permite editar archivos .tpl en línea.',
	'xs_edit_styles_data' => 'Editar datos del estilo',
	'xs_edit_styles_data_explain' => 'Le permite editar variables del estilo. Es utilizada por algunos estilos, pero la mayoría no lo usan y utilizan un archivo del css',
	'xs_export_styles_data' => 'Exportar datos del estilo',
	'xs_export_styles_data_explain' => 'Le permite guardar variables del estilo al archivo theme_info.cfg.',
	'xs_check_for_updates' => 'Comprobar actualizaciones',
	'xs_check_for_updates_explain' => 'Permite comprobar si hay versiones actualizadas de los estilos y de los MODs instalados en su foro.',

	'xs_set_configuration_lc' => 'Fijar la configuración',
	'xs_set_default_style_lc' => 'Fijar el estilo por defecto',
	'xs_manage_cache_lc' => 'Administrar caché',
	'xs_import_styles_lc' => 'Importar estilos',
	'xs_export_styles_lc' => 'Exportar estilos',
	'xs_clone_styles_lc' => 'Clonar estilos',
	'xs_uninstall_styles_lc' => 'Desinstalar estilos',
	'xs_edit_templates_lc' => 'Editar plantillas',
	'xs_edit_styles_data_lc' => 'Editar datos del estilo',
	'xs_export_styles_data_lc' => 'Exportar datos del estilo',
	'xs_check_for_updates_lc' => 'Comprobar actualizaciones',

/*
* ftp.tpl, ftp functions
*/

	'xs_ftp_comment1' => 'Para utilizar esta característica, debe seleccionar el método para subir el archivo. Si selecciona FTP, la contraseña no será almacenada y eXtreme Styles le pedirá la contraseña cada vez que seleccione funciones que requieran el acceso al FTP. Si selecciona el sistema de ficheros local, debe asegurarse de que todos los directorios requeridos pueden ser escritos.',
	'xs_ftp_comment2' => 'Para utilizar esta característica, debe fijar los ajustes del FTP. La contraseña no será almacenada y eXtreme Styles le pedirá la contraseña cada vez que seleccione funciones que requieran el acceso al FTP.',
	'xs_ftp_comment3' => 'Advertencia:  Las funciones del FTP están desactivadas en este servidor. No podrá utilizar las funciones de eXtreme Styles que requieran el acceso al FTP.',

	'xs_ftp_title' => 'Configuración FTP',

	'xs_ftp_explain' => 'El FTP se utiliza para subir nuevos estilos. Si desea importar, debe configurar los ajustes del FTP. eXtreme Styles intentará auto detectar los ajustes si es posible.',

	'xs_ftp_error_fatal' => 'Las funciones del FTP están desactivadas en este servidor. No puede continuar.',
	'xs_ftp_error_connect' => 'Error FTP: No se puede conectar con el { HOST }',
	'xs_ftp_error_login' => 'Error FTP: No se pudo conectar',
	'xs_ftp_error_chdir' => 'Error FTP: No puede cambiar el directorio a { DIR }',
	'xs_ftp_error_nonphpbbdir' => 'Error FTP: Tiene marcada una carpeta inválida. No hay archivos phpBB en esta carpeta',
	'xs_ftp_error_noconnect' => 'No puede conectar con el servidor FTP ',
	'xs_ftp_error_login2' => 'Conexión o contraseña inválida del FTP',

	'xs_ftp_log_disabled' => 'Las funciones FTP están desactivadas en este servidor. No se puede continuar.',
	'xs_ftp_log_connecting' => 'Conectando con { HOST }',
	'xs_ftp_log_noconnect' => 'No se pudo conectar con {HOST}',
	'xs_ftp_log_connected' => 'Conectado. Identificándose en...',
	'xs_ftp_log_nologin' => 'No se pudo conectar como {USER}',
	'xs_ftp_log_loggedin' => 'Identificado',
	'xs_ftp_log_end' => 'Ejecución de la escritura finalizada',
	'xs_ftp_log_nopwd' => 'Error:  No se puede recuperar el directorio actual',
	'xs_ftp_log_nomkdir' => 'Error: No se puede crear el directorio {DIR}',
	'xs_ftp_log_mkdir' => 'Directorio {DIR} creado',
	'xs_ftp_log_nochdir' => 'Error: No se pudo cambiar el directorio a {DIR}',
	'xs_ftp_log_normdir' => 'Error: No se pudo eliminar el directorio {DIR}',
	'xs_ftp_log_rmdir' => 'Directorio {DIR} eliminado',
	'xs_ftp_log_chdir' => 'Directorio cambiado a {DIR}',
	'xs_ftp_log_noupload' => 'Error: No se pudo subir el archivo {FILE}',
	'xs_ftp_log_upload' => 'Archivo {FILE} subido ',
	'xs_ftp_log_nochmod' => 'Advertencia:  No se permite cambiar el CHMOD del archivo {FILE}',
	'xs_ftp_log_chmod' => 'CHMOD del archivo {FILE} a {MODE}',
	'xs_ftp_log_invalidcommand' => 'Error. Comando desconocido: {COMMAND}',
	'xs_ftp_log_chdir2' => 'Cambiando directorio actual a {DIR}',
	'xs_ftp_log_nochdir2' => 'No se pudo cambiar el directorio a {DIR}',

	'xs_ftp_config' => 'Configuración FTP',
	'xs_ftp_select_method' => 'Seleccionar método de subida',
	'xs_ftp_select_local' => 'Utilice el sistema de ficheros local (no se requiere ninguna configuración)',
	'xs_ftp_select_ftp' => 'Usar FTP (fije los ajustes de FTP abajo)',

	'xs_ftp_settings' => 'Ajustes de FTP',
	'xs_ftp_host' => 'Servidor FTP ',
	'xs_ftp_login' => 'Usuario FTP',
	'xs_ftp_path' => 'Ruta de phpBB en FTP',
	'xs_ftp_pass' => 'Contraseña FTP',
	'xs_ftp_remotedir' => 'Directorio remoto',

	'xs_ftp_host_guess' => ' (Probablemente "{HOST}" [<a href="javascript: void()" onclick="{CLICK}">Fijar servidor</a>])',
	'xs_ftp_login_guess' => ' (Probablemente  "{LOGIN}" [<a href="javascript: void()" onclick="{CLICK}">Fijar usuario</a>])',
	'xs_ftp_path_guess' => ' (Probablemente  "{PATH}" [<a href="javascript: void()" onclick="{CLICK}">Fijar ruta</a>])',


/*
* config.tpl
*/
	'xs_config_updated' => 'Configuración actualizada.',
	'xs_config_updated_explain' => 'Debe actualizar esta página para que la nueva configuración tenga efecto. <a href="{URL}">Pulse aquí</a > para actualizar la página.',
	'xs_config_warning' => 'Advertencia:  el caché no pudo ser escrito.',
	'xs_config_warning_explain' => 'No se puede escribir en el directorio caché.  eXtreme Styles puede intentar arreglar este problema.<br/> <a href="{URL}">Pulse aquí</a > para intentar cambiar el modo de acceso al directorio caché .<br/> <br/> Si el caché no funciona en su servidor, no se preocupe - eXtreme Styles<br /> muchas veces aumenta la velocidad del foro, incluso sin caché.',

	'xs_config_maintitle' => 'Configuración de eXtreme Styles MOD',
	'xs_config_subtitle' => 'Esta es la configuración para eXtreme Styles. Si no entiende lo que hacen ciertas variables, no las cambie.',
	'xs_config_title' => 'Ajustes de eXtreme Styles MOD v{VERSION}',
	'xs_config_cache' => 'Configuración del caché',

	'xs_config_navbar' => 'Mostrar en el marco izquierdo:',
	'xs_config_navbar_explain' => 'Puede seleccionar objetos para mostrar en el marco de la izquierda del panel de administración',

	'xs_config_def_template' => 'Directorio de la plantilla por defecto',
	'xs_config_def_template_explain' => 'Si un archivo TPL requerido no se encuentra en el directorio de la plantilla (lo que pudo suceder si programó phpBB incorrectamente), entonces el sistema de la plantilla buscará el mismo archivo en un directorio relacionado (si la plantilla actual es "myPlantilla" y la escritura requiere el archivo "myPlantilla/myarchivo.tpl" y este archivo no esta allí, el sistema de la plantilla buscará ese archivo como "subSilver/myarchivo.tpl").  Marque esto para inhabilitar esta característica.',

	'xs_config_check_switches' => 'Compruebe los interruptores mientras se compila',
	'xs_config_check_switches_explain' => 'Esta característica comprueba si hay errores en las plantillas. Apagándola acelerará la compilación, pero el recompilador se podría saltar algunos errores en plantillas (si los había).<br /><br />El análisis complejo comprobará las plantillas para saber si hay errores y fijará automáticamente todos los errores habidos (hay pocos tipos sabidos en los diversos modos). Los trabajos serán algo mas lentos que una simple comprobación.<br /><br /> Pero, a veces, las plantillas parecen apropiadas sólo cuando la comprobación del error está desactivada; esto sucede debido a la mala codificación del HTML - contacte con quien escribió el archivo TPL si desea fijar los errores.<br /><br />Si la característica de caché esta desactivada, entonces no use esta opción, para una compilación más rápida.',
	'xs_config_check_switches_0' => 'Apagado',
	'xs_config_check_switches_1' => 'Chequeo complejo',
	'xs_config_check_switches_2' => 'Chequeo simple',

	'xs_config_show_errors' => 'Mostrar errores cuando los archivos se incluyen incorrectamente en archivos TPL',
	'xs_config_show_error_explain' => 'Activa/desactiva errores en los archivos TPL que el usuario utilizó incorrectamente &lt;!-- INCLUDE filename --&gt;',

	'xs_config_tpl_comments' => 'Agregue los nombres de fichero TPL en el HTML',
	'xs_config_tpl_comments_explain' => 'Agrega comentarios al código HTML que permiten que los diseñadores del estilo detecten qué archivo TPL se está mostrando.',

	'xs_config_use_cache' => 'Usar caché',
	'xs_config_use_cache_explain' => 'El caché se guarda en el disco y acelera el sistema de plantillas al no haber necesidad de compilar la plantilla cada vez que se muestra .',

	'xs_config_auto_compile' => 'Guardar caché automáticamente',
	'xs_config_auto_compile_explain' => 'Esto compilará automáticamente las plantillas que no se depositen y no se guarden en el directorio caché.',

	'xs_config_auto_recompile' => 'Recompilación automática de caché',
	'xs_config_auto_recompile_explain' => 'Esto recompilará automáticamente las plantillas si una plantilla fue cambiada.',

	'xs_config_php' => 'Extensión de los nombres de archivo del caché',
	'xs_config_php_explain' => 'Esta es la extensión de archivos depositados.  Los archivos se almacenan en formato PHP, así que la extensión por defecto es "php". ',

	'xs_config_back' => '<a href="{URL}">Pulse aquí</a> para volver a la configuración.',
	'xs_config_sql_error' => 'No pudo actualizar la configuración general para {VAR}',

// Debug info
	'xs_debug_header' => 'Elimine errores de información',
	'xs_debug_explain' => 'Elimina los errores de información. Utilizado para encontrar/examinar problemas al configurar el caché.',
	'xs_debug_vars' => 'Variables de las plantillas',
	'xs_debug_tpl_name' => 'Nombres de archivo de las plantillas:',
	'xs_debug_cache_filename' => 'Nombres de archivo del caché:',
	'xs_debug_data' => 'Elimine errores de los datos:',

	'xs_check_hdr' => 'Comprobando caché para %s',
	'xs_check_filename' => 'Error: nombre de archivo no válido',
	'xs_check_openfile1' => 'Error: no se pudo abrir el archivo "%s". Intentará crear directorios...',
	'xs_check_openfile2' => 'Error: no se pudo abrir el archivo "%s" por segunda vez. Dando para arriba...',
	'xs_check_nodir' => 'Comprobando "%s" - ningún directorio como tal.',
	'xs_check_nodir2' => 'Error: no se pudo crear el directorio "%s" - puede ser que deba comprobar permisos.',
	'xs_check_createddir' => 'Creado directorio "%s"',
	'xs_check_dir' => 'Comprobando "%s" - el directorio existe.',
	'xs_check_ok' => 'Archivo "%s" abierto para escribir. Todo parece estar correcto.',
	'xs_error_demo_edit' => 'No puede editar archivos en modo demo',
	'xs_error_not_installed' => 'eXtreme Styles MOD no instalado. Suba el archivo includes/template.php',

/*
* chmod
*/
	'xs_chmod' => 'CHMOD',
	'xs_chmod_return' => '<br /><br /><a href="{URL}">Pulse aquí</a> para volver a la configuración.',
	'xs_chmod_message1' => 'Configuración cambiada.',
	'xs_chmod_error1' => 'No se puede cambiar modo de acceso al directorio del caché',


/*
* default style
*/
	'xs_def_title' => 'Fijar estilo por defecto',
	'xs_def_explain' => 'Permite que usted cambie rápidamente el estilo del foro por defecto y también que cambie usuarios de un estilo a otro.',

	'xs_styles_set_default' => 'Estilo por defecto determinado',
	'xs_styles_no_override' => 'No elimine los ajustes del usuario',
	'xs_styles_do_override' => 'Invalidar ajustes del usuario ',
	'xs_styles_switch_all' => 'Cambiar a todos los usuarios a este estilo',
	'xs_styles_switch_all2' => 'Cambiar a todos los usuarios a:',
	'xs_styles_defstyle' => 'Estilo por defecto',
	'xs_styles_available' => 'Estilos disponibles',
	'xs_styles_make_public' => 'Hacer público el estilo',
	'xs_styles_make_admin' => 'Hacer el estilo para el administrador únicamente',
	'xs_styles_users' => 'Lista de usuarios',


/*
* cache management
*/
	'xs_manage_cache_explain2' => 'Esta característica permite que usted compile o quite los archivos depositados para los estilos.',
	'xs_clear_all_lc' => 'Borrar todo',
	'xs_compile_all_lc' => 'Compilar todo',
	'xs_clear_cache_lc' => 'Borrar caché',
	'xs_compile_cache_lc' => 'Compilar caché',
	'xs_cache_confirm' => 'El tener muchos estilos puede suponer una gran carga al servidor. ¿Está seguro de que quiere continuar?',

	'xs_cache_nowrite' => 'Error: no puede tener acceso al directorio del caché',
	'xs_cache_log_deleted' => 'Borrado {FILE}',
	'xs_cache_log_nodelete' => 'Error: No se pudo borrar el archivo {FILE}',
	'xs_cache_log_nothing' => 'Nada para suprimir en la plantilla {TPL}',
	'xs_cache_log_nothing2' => 'Nada para suprimir en el directorio caché',
	'xs_cache_log_count' => 'Borrado con éxito {NUM} archivos',
	'xs_cache_log_count2' => 'Error al borrar {NUM} archivos',
	'xs_cache_log_compiled' => 'Compilado: {NUM} archivos',
	'xs_cache_log_errors' => 'Errores: {NUM}',
	'xs_cache_log_noaccess' => 'Error: No se pudo acceder al directorio {DIR}',
	'xs_cache_log_compiled2' => 'Compilado: {FILE}',
	'xs_cache_log_nocompile' => 'Error al compilar: {FILE}',

/*
* export/import/download/clone
*/
	'xs_import_explain' => 'Le permite importar estilos. Puede también instalar y poner al día automáticamente los estilos.<br /><br />Nota: Si ha agregado cualquier MOD (además de eXtreme Styles MOD) a este foro, debe tener cuidado al importar estilos, porque los estilos quizá no sean compatibles con su foro. Puede instalar solamente los estilos que tienen las mismas modificaciones que los otros estilos que ha configurado en sus foros.',

	'xs_import_lc' => 'Importar',
	'xs_list_files_lc' => 'Lista de archivos',
	'xs_delete_file_lc' => 'Borrar archivos',
	'xs_export_style_lc' => 'Exportar estilo',

	'xs_import_no_cached' => 'No hay estilos depositados (caché) a importar',
	'xs_add_styles' => 'Agregar estilos',
	'xs_add_styles_web' => 'Descargar desde web',
	'xs_add_styles_web_get' => 'Consígalo',
	'xs_add_styles_copy' => 'Copiar de un archivo local',
	'xs_add_styles_copy_get' => 'Copiar',
	'xs_add_styles_upload' => 'Subir desde su ordenador',
	'xs_add_styles_upload_get' => 'Subir',

	'xs_export_style' => 'Exportar estilo',
	'xs_export_style_explain' => 'Le permite exportar un estilo como un solo archivo. Este archivo es muy pequeño, más pequeño que un archivo .zip (porque está compromido con gzip, que trabaja mejor que zip), y todos los estilos de su interior son un solo archivo. Así, es muy fácil transferir estilos de un foro a otro.<br /><br />Esta característica también le permite subir estilos exportados usando el FTP a un servidor. Este sistema permite transferir un estilo a otro foro rápidamente sin copiarlo manualmente.',

	'xs_export_style_title' => 'Exportar plantilla "{TPL}"',
	'xs_export_tpl_name' => 'Exportar como (nombre de plantilla)',
	'xs_export_style_names' => 'Seleccionar estilo para exportar',
	'xs_export_style_name' => 'Estilo a exportar (nombre de estilo)',
	'xs_export_style_comment' => 'Comentar',
	'xs_export_where' => 'Dónde exportar',
	'xs_export_where_download' => 'Descargar como archivo',
	'xs_export_where_store' => 'Almacenar como archivo en el servidor',
	'xs_export_where_store_dir' => 'Directorio',
	'xs_export_where_ftp' => 'Subir vía FTP',
	'xs_export_filename' => 'Exportar nombre de archivo',

	'xs_download_explain2' => 'Le permite descargar e instalar rápidamente estilos directamente de diversas páginas web. Pulse en el enlace cerca del nombre de la web y le volverán a dirigir a una página de las transferencias directas del estilo.<br /><br />También puede manejar la lista de sitios web.',

	'xs_download_locations' => 'Localizaciones de descarga directa',
	'xs_edit_link' => 'Editar enlace',
	'xs_add_link' => 'Agregar enlace',
	'xs_link_title' => 'Título del enlace',
	'xs_link_url' => 'URL del enlace',
	'xs_delete' => 'Borrar',

	'xs_style_header_error_file' => 'No se puede abrir el archivo local',
	'xs_style_header_error_server' => 'Error en el servidor: ',
	'xs_style_header_error_invalid' => 'Cabecera del fichero inválida',
	'xs_style_header_error_reason' => 'Error al leer la cabecera del fichero: ',
	'xs_style_header_error_incomplete' => 'El archivo está incompleto',
	'xs_style_header_error_incomplete2' => 'Tamaño de archivo no válido. Probablemente el archivo esté incompleto.',
	'xs_style_header_error_invalid2' => 'Archivo no válido. Presumiblemente, el archivo no sea compatible con eXtreme Styles o es de una versión inválida.',
	'xs_error_cannot_open' => 'No se pudo abrir el archivo.',
	'xs_error_decompress_style' => 'Error al descomprimir el archivo. Probablemente el archivo está corrupto.',
	'xs_error_cannot_create_file' => 'No se puede crear el archivo "{FILE}"',
	'xs_error_cannot_create_tmp' => 'No se puede crear temporalmente el archivo "{FILE}"',
	'xs_import_invalid_file' => 'Archivo no válido',
	'xs_import_incomplete_file' => 'Archivo incompleto',
	'xs_import_uploaded' => 'Estilo subido.',
	'xs_import_installed' => 'Estilo subido e instalado.',
	'xs_import_notinstall' => 'Estilo subido, pero error al instalar (Error SQL).',
	'xs_import_notinstall2' => 'Estilo subido, pero error al instalar: no se encontraron estilos en theme_info.cfg',
	'xs_import_notinstall3' => 'Estilo subido, pero error al instalar: ninguna entrada encontrada para "{STYLE}" en theme_info.cfg',
	'xs_import_notinstall4' => 'Estilo subido, pero error al instalar: no se pudo obtener la información en themes_id',
	'xs_import_notinstall5' => 'Estilo subido, pero error al instalar: no se pudo actualizar la tabla de estilos',
	'xs_import_nodownload' => 'No se pudo descargar el estilo de {URL}',
	'xs_import_nodownload2' => 'No se pudo copiar el estilo de {URL}',
	'xs_import_nodownload3' => 'Archivo no subido.',
	'xs_import_uploaded2' => 'Estilo descargado. Puede importarlo ahora.<br /><br /><a href="{URL}">Pulse aquí</a> para importar estilo.',
	'xs_import_uploaded3' => 'Estilo copiado. Puede importarlo ahora.<br /><br /><a href="{URL}">Pulse aquí</a> para importar estilo.',
	'xs_import_uploaded4' => 'Estilo subido. Puede importarlo ahora.<br /><br /><a href="{URL}">Pulse aquí</a> para importar estilo.',
	'xs_export_no_open_dir' => 'No se pudo abrir el directorio {DIR}',
	'xs_export_no_open_file' => 'No se pudo abrir el archivo {FILE}',
	'xs_export_no_read_file' => 'Error al leer el archivo {FILE}',
	'xs_no_theme_data' => 'No se pudieron conseguir los datos del estilo para la plantilla seleccionada',
	'xs_no_style_info' => 'No se pudo conseguir información sobre el estilo',
	'xs_export_noselect_themes' => 'Debe seleccionar por lo menos un estilo',
	'xs_export_error' => 'No se pudo exportar la plantilla "{TPL}": ',
	'xs_export_error2' => 'No se pudo exportar la plantilla "{TPL}": El estilo esta vacío',
	'xs_export_saved' => 'El estilo se guardó como "{FILE}"',
	'xs_export_error_uploading' => 'Error al subir archivo',
	'xs_export_uploaded' => 'Archivo subido.',
	'xs_clone_taken' => 'El nombre de este estilo ya está usado.',
	'xs_error_new_row' => 'No se pudo insertar una nueva fila en la tabla.',
	'xs_theme_cloned' => 'Estilo copiado.',
	'xs_invalid_style_name' => 'Nombre de estilo no válido.',
	'xs_clone_style_exists' => 'Esta plantilla ya existe',
	'xs_clone_no_select' => 'Debe seleccionar por lo menos un estilo para copiarlo.',
	'xs_no_themes' => 'Estilo no encontrado en la base de datos.',

	'xs_import_back' => '<a href="{URL}">Pulse aquí</a> para volver a la página de importación de estilos.',
	'xs_import_back_download' => '<a href="{URL}" target="main">Pulse aquí</a> para volver a las descargas.',
	'xs_export_back' => '<a href="{URL}">Pulse aquí</a> para volver a la página de exportación de estilos.',
	'xs_clone_back' => '<a href="{URL}">Pulse aquí</a> para volver a la página de copiado de estilos.',
	'xs_download_back' => '<a href="{URL}">Pulse aquí</a> para volver a la página de descargas.',

	'xs_import_tpl' => 'Importar plantilla "{TPL}"',
	'xs_import_tpl_comment' => 'Esta característica subirá la plantilla a su foro. Si la plantilla con este nombre existe ya, se sobrescribirán automáticamente los archivos anteriores, así que puede también ser utilizada para actualizar estilos.<br /><br />Esta característica puede también instalar automáticamente estilos. Si desea instalar el estilo después de importarlo, seleccione uno o más estilos abajo.',
	'xs_import_tpl_filename' => 'Nombre de archivo:',
	'xs_import_tpl_tplname' => 'Nombre de plantilla:',
	'xs_import_tpl_comment2' => 'Comentar:',
	'xs_import_select_styles' => 'Seleccionar estilo a instalar:',
	'xs_import_install_def_lc' => 'Hacer que sea el estilo por defecto del foro',
	'xs_import_install_style' => 'Instalar estilo:',
	'xs_import' => 'Importar',

	'xs_import_list_contents' => 'Contenido del archivo: ',
	'xs_import_list_filename' => 'Nombre de archivo: ',
	'xs_import_list_template' => 'Plantilla: ',
	'xs_import_list_comment' => 'Comentar: ',
	'xs_import_list_styles' => 'Estilos: ',
	'xs_import_list_files' => 'Archivos ({NUM}):',
	'xs_import_download_lc' => 'Descargar archivos',
	'xs_import_view_lc' => 'Ver archivo',
	'xs_import_file_size' => '({NUM} bytes)',

	'xs_import_nogzip' => 'Esta función requiere la compresión del gz, y eso no es posible, al parecer, en este servidor.',
	'xs_import_nowrite_cache' => 'No se pudo escribir en el caché. Esta función requiere que el caché pueda ser escrito. Compruebe la configuración del MOD.<br /><br /><a href="{URL1}">Pulse aquí</a> para hacer que se pueda escribir en el directorio caché.<br /><br /><a href="{URL2}">Pulse aquí</a> para volver a la página de importación.',

	'xs_import_download_warning' => 'Esto le llevará a un sitio web externo donde puede descargar rápidamente estilos con solo algunos clics, usando la característica de la importación de eXtreme Styles.',

	'xs_clone_style' => 'Clonar estilo',
	'xs_clone_style_explain' => 'Le permite reproducir rápidamente un estilo o plantilla entera.<br /><br />Advertencia: Si está copiando la plantilla, cerciórese de que el autor de la plantilla original lo permite (a menos que sea subSilver - puede hacer lo que desee con subSilver). Los autores permiten, generalmente, modificar sus estilos, pero el estilo modificado no debe ser distribuido.',
	'xs_clone_style_explain2' => 'Le permite crear un nuevo estilo para una plantilla. No se copiará ningún archivo: agregará la entrada en la base de datos para su nuevo estilo. El viejo y el nuevo estilo compartirán las mismas plantillas.',
	'xs_clone_style_explain3' => 'Incorpore el nombre para el nuevo estilo que va a crear y pulse en "Clonar/copiar.',
	'xs_clone_style_explain4' => 'Le permite reproducir la plantilla. También puede copiar todos los estilos asociados a esa plantilla. Puede corregir más adelante los archivos TPL para la plantilla nueva, y la vieja plantilla no será afectada.',

	'xs_clone_style_lc' => 'Copiar estilo',
	'xs_clone_style2' => 'Copiar estilo "{STYLE}":',
	'xs_clone_style3' => 'Copiar plantilla "{STYLE}"',
	'xs_clone_newdir_name' => 'Nueva plantilla (directorio) nombre:',
	'xs_clone_select' => 'Seleccionar estilos a copiar:',
	'xs_clone_select_explain' => 'Debe seleccionar al menos un estilo para copiar.',
	'xs_clone_newname' => 'Nuevo nombre de estilo:',


/*
* install/uninstall
*/
	'xs_install_styles_explain2' => 'Esta es una lista de los estilos subidos en su foro, pero que no están instalados. Pulse en "Instalar" en el estilo que desee, o seleccione varios estilos y pulse en el botón.',
	'xs_uninstall_styles_explain2' => 'Esta es una lista de los estilos que están instalados en su foro. Pulse en "Desinstalar" para quitar alguno. La desinstalación es segura: todos los usuarios que emplean el estilo que se desinstale serán cambiados al estilo del foro por defecto. Además, la desinstalación suprimirá automáticamente el caché para ese estilo.',

	'xs_install' => 'Instalar',
	'xs_install_lc' => 'Instalar',
	'xs_uninstall' => 'Desinstalar',
	'xs_remove_files' => 'Borrar archivos',
	'xs_style_removed' => 'Estilo borrado.',
	'xs_uninstall_lc' => 'Desinstalar',
	'xs_uninstall2_lc' => 'Desinstalar y borrar archivos',

	'xs_install_back' => '<a href="{URL}">Pulse aquí</a> para volver a la instalación de los estilos.',
	'xs_uninstall_back' => '<a href="{URL}">Pulse aquí</a> para volver a la desinstalación de los estilos.',
	'xs_goto_default' => '<a href="{URL}">Pulse aquí</a> para cambiar el estilo actual.',

	'xs_install_installed' => 'Estilo instalado.',
	'xs_install_error' => 'Error al instalar estilo.',
	'xs_install_none' => 'No hay nuevos estilos para instalar. Todos los estilos disponibles están instalados ya.',

	'xs_uninstall_default' => 'No puede borrar el estilo actual. Para cambiar el estilo actual <a href="{URL}">pulse aquí</a>.',

/*
* export theme_info.cfg
*/
	'xs_export_styles_data_explain2' => 'Esta característica guarda los datos del estilo en el archivo theme_info.cfg. Puede usarse para guardar la información de la base de datos antes de transferir estilos de un foro a otro.<br /><br />Nota: Si está utilizando esta característica para mover un estilo a otro foro, no necesita guardar theme_info.cfg; se hace automáticamente.',
	'xs_export_styles_data_explain3' => 'Seleccione los estilos que quiere exportar.',

	'xs_export_data_back' => '<a href="{URL}">Pulse aquí</a> para volver a la página de los datos de la exportación del estilo.',
	'xs_export_style_data_lc' => 'Exportar los datos del estilo',

	'xs_export_data_saved' => 'Datos exportados.',

/*
* edit templates (file manager)
*/
	'xs_edit_template_comment1' => 'Le permite editar plantillas. Sólo se mostrarán los archivos que pueden ser editados.',
	'xs_edit_template_comment2' => 'Le permite editar plantillas.',
	'xs_edit_file_saved' => 'El archivo se ha guardado.',
	'xs_edit_not_found' => 'Archivo no encontrado.',
	'xs_edittpl_back_dir' => '<a href="{URL}">Pulse aquí</a> para volver al encargado del archivo.',

	'xs_fileman_browser' => 'Editor de archivo',
	'xs_fileman_directory' => 'Directorio:',
	'xs_fileman_dircount' => 'Directorios ({COUNT}):',
	'xs_fileman_filter' => 'Filtro',
	'xs_fileman_filter_ext' => 'Muestre sólo los archivos con la extensión:',
	'xs_fileman_filter_content' => 'Muestre sólo los archivos que contengan:',
	'xs_fileman_filter_clear' => 'Limpiar filtro',
	'xs_fileman_filename' => 'Nombre de archivo',
	'xs_fileman_filesize' => 'Tamaño',
	'xs_fileman_filetime' => 'Modificación',
	'xs_fileman_options' => 'Opciones',
	'xs_fileman_time_today' => '(Hoy)',
	'xs_fileman_edit_lc' => 'Editar',

	'xs_fileedit_search_nomatch' => 'Entrada no encontrada',
	'xs_fileedit_search_match1' => 'Sustituida una entrada',
	'xs_fileedit_search_matches' => "Sustituida ' + cuenta + ' entradas",
	'xs_fileedit_noundo' => 'No hay nada que deshacer',
	'xs_fileedit_undo_complete' => 'Restaurado el contenido antiguo',
	'xs_fileedit_edit_name' => 'Editar archivo:',
	'xs_fileedit_location' => 'Localización:',
	'xs_fileedit_reload_lc' => 'Recargar archivo',
	'xs_fileedit_download_lc' => 'Descargar archivo',
	'xs_fileedit_trim' => 'Ajuste automáticamente los espacios del comienzo y el extremo del archivo.',
	'xs_fileedit_functions' => 'Editar funciones',
	'xs_fileedit_replace1' => 'Sustituir ',
	'xs_fileedit_replace2' => ' con ',
	'xs_fileedit_replace_first_lc' => 'Sustituir la primera entrada',
	'xs_fileedit_replace_all_lc' => 'Sustituir todas las entradas',
	'xs_fileedit_replace_undo_lc' => 'Deshaga la sustitución',
	'xs_fileedit_backups' => 'Backups',
	'xs_fileedit_backups_save_lc' => 'Guardar backup',
	'xs_fileedit_backups_show_lc' => 'Mostrar contenidos',
	'xs_fileedit_backups_restore_lc' => 'Restaurar',
	'xs_fileedit_backups_download_lc' => 'Descargar',
	'xs_fileedit_backups_delete_lc' => 'Borrar',
	'xs_fileedit_upload' => 'Subir',
	'xs_fileedit_upload_file' => 'Archivo subido:',

/*
* edit styles data (theme_info)
*/
	'xs_data_head_stylesheet' => 'CSS stylesheet',
	'xs_data_body_background' => 'Imagen de fondo ',
	'xs_data_body_bgcolor' => 'Color de fondo ',
	'xs_data_style_name' => 'Nombre de estilo',
	'xs_data_body_link' => 'Color del enlace',
	'xs_data_body_text' => 'Color del texto',
	'xs_data_body_vlink' => 'Color del enlace visitado',
	'xs_data_body_alink' => 'Color del enlace activo',
	'xs_data_body_hlink' => 'Color del enlace resaltado',
	'xs_data_tr_color' => 'Color de la fila de la tabla %s',
	'xs_data_tr_class' => 'Clase de la fila de la tabla %s',
	'xs_data_th_color' => 'Color del encabezado de la tabla %s',
	'xs_data_th_class' => 'Clase del encabezado de la tabla %s',
	'xs_data_td_color' => 'Color de la celda de la tabla %s',
	'xs_data_td_class' => 'Clase de la celda de la tabla %s',
	'xs_data_fontface' => 'Tipo de la fuente %s',
	'xs_data_fontsize' => 'Tamaño de la fuente %s',
	'xs_data_fontcolor' => 'Color de la fuente %s',
	'xs_data_span_class' => 'Tipo de span_class %s',
	'xs_data_img_size_poll' => 'Tamaño de la imagen de la interrogación [px]',
	'xs_data_img_size_privmsg' => 'Tamaño del mensaje del estado privado [px]',
	'xs_data_theme_public' => 'Estilo público (1 o 0)',
	'xs_data_unknown' => 'La descripción no está disponible (%s)',

	'xs_edittpl_error_updating' => 'Error al actualizar el estilo.',
	'xs_edittpl_style_updated' => 'Estilo actualizado.',
	'xs_invalid_style_id' => 'Identidad de estilo inválida.',

	'xs_edittpl_back_edit' => '<a href="{URL}">Pulse aquí</a> para volver a editar.',
	'xs_edittpl_back_list' => '<a href="{URL}">Pulse aquí</a> para volver a la lista de estilos.',

	'xs_editdata_explain' => 'Le permite editar la base de datos para los estilos instalados. Algunos estilos no hacen caso a los valores de la base de datos y utilizan archivos del CSS; otros estilos utilizan algunos valores de la base de datos.',
	'xs_editdata_var' => 'Variable',
	'xs_editdata_value' => 'Valor',
	'xs_editdata_comment' => 'Comentario',

/*
* updates
*/

	'xs_updates' => 'Actualizaciones',
	'xs_updates_comment' => 'Comprueba si hay actualizaciones de algunos estilos y modos. Trabaja solamente con los artículos que tienen información relevante de la actualización.',
	'xs_updates_comment2' => 'Este es resultado del chequeo de la versión.',
	'xs_update_total1' => 'Total: {NUM} artículos',
	'xs_update_info1' => 'Se comprobará si hay actualizaciones disponibles de phpBB, de ciertos MODs, y de algunos estilos instalados en su foro. Cuando encuentra actualizaciones disponibles le muestra el enlace donde puede descargar el archivo actualizado.<br /><br />Esta función requiere unas características para que sea permitida. La mayoría de los alojamientos gratuitos de la web no tienen esta característica. Si este foro está en un alojamiento gratuito, no podrá utilizar esta característica de la actualización; pero sí si está en un servidor que tenga esa función.<br /><br />Cuando pulse en "continúa", se comprobará todo el software instalado en foro, lo que puede llevar cierto tiempo. Sea paciente y espere a que acabe el proceso. Si se supera el tiempo permitido (por PHP o tiempo de ejecución), aumente el valor del time out.',
	'xs_update_name' => 'Nombre',
	'xs_update_type' => 'Tipo',
	'xs_update_current_version' => 'Su versión',
	'xs_update_latest_version' => 'La ultima versión',
	'xs_update_downloadinfo' => 'URL de descarga',
	'xs_update_timeout' => 'Cuenta atrás de la actualización de escritura (segundos):',
	'xs_update_continue' => 'Continuar',


	'xs_update_total2' => 'Errores: {NUM}',
	'xs_update_total3' => 'Actualizaciones disponibles: {NUM} artículos',
	'xs_update_select1' => 'Seleccione los artículos a actualizar',
	'xs_update_types' => array(
		0 => 'Desconocido',
		1 => 'Estilo',
		2 => 'MOD',
		3 => 'phpBB',
		4 => 'Icy Phoenix'
	),
	'xs_update_fileinfo' => 'Más información',
	'xs_update_nothing' => 'No hay nada para actualizar.',
	'xs_update_noupdate' => 'Está usando la ultima versión.',

	'xs_update_error_url' => 'Error: no se puede recuperar el URL %s',
	'xs_update_error_noitem' => 'Error: no hay información disponible sobre la actualizacion',
	'xs_update_error_noconnect' => 'Error: no se puede conectar al servidor de actualizaciones',

	'xs_update_download' => 'Descargar',
	'xs_update_downloadinfo2' => 'Descargar/información',
	'xs_update_info' => 'Sitio web',

	'xs_permission_denied' => 'Permiso denegado',

	'xs_download_lc' => 'Descargar',
	'xs_info_lc' => 'Información',

/*
* style configuration
*/
	'Template_Config' => 'Config plantilla',
	'xs_style_configuration' => 'Configuración de plantilla',
	)
);

?>