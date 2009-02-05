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
* (c) 2002 Meik Sievertsen (Acyd Burn)
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
// Modules, this replaces the keys used
	'Control_Panel' => 'Panel de control',
	'Shadow_attachments' => 'Adjuntos sombreados',
	'Forbidden_extensions' => 'Extensiones prohibidas',
	'Extension_control' => 'Control de extensiones',
	'Extension_group_manage' => 'Control de grupos de extensiones',
	'Special_categories' => 'Categorias especiales',
	'Sync_attachments' => 'Sincronizar adjuntos',
	'Quota_limits' => 'Cuotas',

// Attachments -> Management
	'Attach_settings' => 'Configuración de los adjuntos',
	'Manage_attachments_explain' => 'Aquí podrá manejar las configuraciones generales del attachment MOD. Si pulsa el botón probar configuración, serán automáticamente probados los sistemas para ver si el attachment MOD puede funcionar bien en este foro. Si tiene problemas subiendo archivos, haga esta prueba para obtener un mensaje más detallado sobre el error.',
	'Attach_filesize_settings' => 'Configuración del tamaño de los adjuntos',
	'Attach_number_settings' => 'Configuración de la cantidad de adjuntos',
	'Attach_options_settings' => 'Opciones de los adjuntos',

	'Upload_directory' => 'Directorio para los adjuntos',
	'Upload_directory_explain' => 'Escriba la dirección para guardar los archivos subidos. La dirección es relativa a la de la instalación del Icy Phoenix. Por ejemplo, escriba \'files\' si la instalación fue en http://www.sudominio.com/ip/ y su directorio de subida está en http://www.sudominio.com/ip/files/.',
	'Attach_img_path' => 'Icono de los adjuntos',
	'Attach_img_path_explain' => 'Esta imagen se muestra al lado de los enlaces de los adjuntos en los mensajes. Deje este campo en blanco si no quiere ningun imagen. Esta opción es sobrescrita por la que se encuentra en la administracion de grupos de extensiones.',
	'Attach_topic_icon' => 'Icono de adjunto en tema',
	'Attach_topic_icon_explain' => 'Esta imagen se muestra en los foros antes del título de aquellos que contienen adjuntos. Deje este diálogo en blanco si no quiere ningun icono.',
	'Attach_display_order' => 'Orden de muestra de los adjuntos',
	'Attach_display_order_explain' => 'Aquí puede elegir cómo mostrar los adjuntos en mensajes/MPs con orden descendente (adjuntos más nuevos primero) u orden ascendente (adjuntos más antiguos primero).',
	'Show_apcp' => 'Mostrar el nuevo sistema de publicación de adjuntos',
	'Show_apcp_explain' => 'Elija qué sistema de publicación de adjuntos quiere mostrar (sí) o el metodo viejo con dos cuadros para publicar adjuntos y editar adjuntos publicados (no) en la ventana de publicación. La apariencia es muy difícil de explicar, pero vale la pena probarlo.',

	'Max_filesize_attach' => 'Tamaño del archivo',
	'Max_filesize_attach_explain' => 'Tamaño máximo de los adjuntos. 0 es ilimitado \'ilimitado\'. Esta opcion está restringida por el servidor. Por ejemplo, si la configuración de su PHP no soporta mas de 2MB, el attachment MOD no puede hacer nada para superarla.',
	'Attach_quota' => 'Couta total de adjuntos',
	'Attach_quota_explain' => 'Espacio máximo para guardar todos los adjuntos de su foro. 0 equivale a \'ilimitado\'.',
	'Max_filesize_pm' => 'Tamaño máximo en la carpeta de los mensajes privados.',
	'Max_filesize_pm_explain' => 'Tamaño máximo de almacenamiento de archivos en los mensajes privados de los usuarios. 0 equivale a \'ilimitado\'.',
	'Default_quota_limit' => 'Cuota predeterminada',
	'Default_quota_limit_explain' => 'Aquí puede poner qué cuota quiere que tengan los usuarios que se registren a partir de la instalación del attachment MOD. La opción \'sin límite de cuota\' es por si no usa cuotas. En ese caso, se usará la opción definida en la configuración general.',

	'Max_attachments' => 'Numero máximo de adjuntos.',
	'Max_attachments_explain' => 'Cantidad máxima de adjuntos por mensaje.',
	'Max_attachments_pm' => 'Cantidad máxima de adjuntos en un mensaje privado.',
	'Max_attachments_pm_explain' => 'Define el número máximo de adjuntos que puede incluir un usuario en un mensaje privado.',

	'Disable_mod' => 'Deshabilitar attachmente MOD',
	'Disable_mod_explain' => 'Esta opción es básicamente para probar estilos. Deshabilita todo el attachment MOD excepto el panel de control.',
	'PM_Attachments' => 'Permitir adjuntos en mensajes privados',
	'PM_Attachments_explain' => 'Habilita/Deshabilita adjuntos en mensajes privados.',
	'Ftp_upload' => 'Habilitar FTP',
	'Ftp_upload_explain' => 'Habilita o deshabilita el FTP. Si pone sí deberá definir los campos de FTP, y entonces no se usará el directorio de subida.',
	'Attachment_topic_review' => '¿Mostrar adjuntos en la ventana de revisión del tema?',
	'Attachment_topic_review_explain' => 'Si pone sí se mostraran los adjuntos en la ventana de revisión al contestar un mensaje.',

	'Ftp_server' => 'Servidor FTP',
	'Ftp_server_explain' => 'Acá puede ingresar la IP o el nombre del servidor para subir archivos. Si deja esto en blanco se usará el servidor donde está el phpBB2. No está habilitado ftp:// ni nada parecido, sólo la dirección plana, ejemplo ftp.foo.com o la dirección IP (así es mucho mas rápido).',

	'ftp_username' => 'Su usuario FTP',
	'ftp_password' => 'Su contraseña FTP',

	'Attach_ftp_path' => 'Camino del FTP para el directorio de subida',
	'Attach_ftp_path_explain' => 'El directorio donde seran alojados los archivos subidos por FTP. Este directorio no debe tener los permisos CHMOD cambiados. No escriba acá la IP o el nombre del servidor, sólo el camino del directorio.<br />Por ejemplo: /home/web/uploads',
	'Ftp_download_path' => 'Link de baja al FTP',
	'Ftp_download_path_explain' => 'Escriba la url de su servidor FTP, donde los archivos están guardados.<br />Si está usando un FTP remoto ponga la ruta completa, por ejemplo, http://www.mystorage.com/phpBB2/upload.<br />Si está usando un servidor local para los archivos, puede ingresar una ruta relativa, por ejemplo \'upload\'.<br />La barra inicial será removida. Deje este campo en blanco si la ruta no es accesible desde internet. Con este campo en blanco no podrá habilitar el modo de baja fisico.',
	'Ftp_passive_mode' => 'Habilitar FTP pasivo',
	'Ftp_passive_mode_explain' => 'El comando PASV pide al servidor remoto abrir una conexión para los datos y devolver la dirección de este puerto. El servidor remoto se queda escuchando en ese puerto esperando una conexión por parte del cliente.',

	'No_ftp_extensions_installed' => 'No puede usar el FTP para subir archivos porque las extensiones de subida de archivos por FTP no están instaladas en su PHP',

// Attachments -> Shadow Attachments
	'Shadow_attachments_explain' => 'Aquí puede suprimir datos de los adjuntos de mensajes cuando el fichero se ha perdido, y suprimir el fichero que ya no tiene adjuntos en ningún mensaje. Puede descargar o ver el fichero si pulsa en él; si no hay ningún enlace presente, el fichero no existe.',
	'Shadow_attachments_file_explain' => 'Suprimir todos los ficheros que existen en el sistema de ficheros y que no están asignados a ningún mensaje existente.',
	'Shadow_attachments_row_explain' => 'Suprimir todas las informaciones de los adjuntos en los /files/ que no existen en el sistema de ficheros.',
	'Empty_file_entry' => 'Entrada del archivo vacía',

// Attachments -> Sync
	'Sync_thumbnail_recreated' => 'Miniatura creada para el adjunto: %s', // replace %s with physical Filename
	'Sync_thumbnail_resetted' => 'Miniatura previa regenerada para: %s', // replace %s with physical Filename
	'Attach_sync_finished' => 'Sincronización de adjuntos terminada.',
	'Sync_topics' => 'Sinc. temas',
	'Sync_posts' => 'Sinc. mensajes',
	'Sync_thumbnails' => 'Sinc. miniaturas',


// Extensions -> Extension Control
	'Manage_extensions' => 'Administrar extensiones',
	'Manage_extensions_explain' => 'Aquí puede manejar las extensiones. Si quiere habilitar o deshabilitar una extensión use el administrador de grupos de extensiones.',
	'Explanation' => 'Explicación',
	'Extension_group' => 'Grupos de extensiones',
	'Invalid_extension' => 'Extensión no valida',
	'Extension_exist' => 'La extensión %s ya existe', // replace %s with the Extension
	'Unable_add_forbidden_extension' => 'La extensión %s está prohibida, no está usted autorizado para agregar extensiones habilitadas', // replace %s with Extension

// Extensions -> Extension Groups Management
	'Manage_extension_groups' => 'Administrar grupos de extensiones',
	'Manage_extension_groups_explain' => 'Aquí puede agregar y modificar sus grupos de extensiones, puede deshabilitar grupos de extensiones, asignarles una categoría especial, cambiar el método de bajada, o poner un icono de subida.',
	'Special_category' => 'Categoría especial',
	'Category_images' => 'Imágenes',
	'Category_stream_files' => 'Streamimg',
	'Category_swf_files' => 'Archivos flash',
	'Allowed' => 'Permitido',
	'Allowed_forums' => 'Foros permitidos',
	'Ext_group_permissions' => 'Grupos de permisos',
	'Download_mode' => 'Método de bajada',
	'Upload_icon' => 'Icono',
	'Max_groups_filesize' => 'Tamaño máximo',
	'Extension_group_exist' => 'El grupo de extensiones %s ya existe', // replace %s with the group name
	'Collapse' => '+',
	'Decollapse' => '-',

// Extensions -> Special Categories
	'Manage_categories' => 'Administrar categorías especiales',
	'Manage_categories_explain' => 'Aquí puede configurar categorías especiales. Puede elegir parámetros especiales y asignaciones para las categorías especiales de un grupo de extensiones',
	'Settings_cat_images' => 'Configuraciones para la categoria: imágenes',
	'Settings_cat_streams' => 'Configuraciones para la categoría: archivos de audio',
	'Settings_cat_flash' => 'Configuraciones para la categoría: archivos en flash',
	'Display_inlined' => 'Mostrar imágenes en línea',
	'Display_inlined_explain' => 'Seleccione si quiere mostrar las imágenes directamente en los mensajes (sí) o mostrar las imágenes como un enlace.',
	'Max_image_size' => 'Dimensiones máximas de las imágenes',
	'Max_image_size_explain' => 'Aquí puede definir el tamaño máximo de las imágenes a adjuntar (ancho x alto en píxeles).<br />Si pone 0x0, esta función se deshabilita. Con algunas imágenes esto puede no funcionar debido a limitaciones de PHP.',
	'Image_link_size' => 'Dimensiones para enlazarlas',
	'Image_link_size_explain' => 'Si la imagen alcanza esta medida se mostrará un enlace a la imagen en el mensaje,<br />Si la vista en el foro está habilitada (anchura y altura en pixels).<br />Si pone esto a 0x0, se deshabilitará esta función. Esta función puede no funcionar con algunas imágenes por limitaciones de PHP.',
	'Assigned_group' => 'Grupo asignado',

	'Image_create_thumbnail' => 'Crear imagen previa',
	'Image_create_thumbnail_explain' => 'Siempre crear imagen previa. Esta característica elimina casi todos los ajustes en esta categoría especial, excepto las dimensiones máximas de la imagen. Con esta característica que la miniatura será mostrada dentro del mensaje, el usuario puede hacer clic para abrir la imagen a su tamaño real.<br />Observar por favor que esta característica requiere que esté instalado imagick, si no está instalado o si permite el modo seguro la extensión GD de PHP será utilizada. Si el tipo de imagen no es soportada por el PHP, esta característica no será utilizada.',
	'Image_min_thumb_filesize' => 'Tamaño mínimo para crear imagen previa',
	'Image_min_thumb_filesize_explain' => 'Si la imagen pesa menos del tamaño definido, no se creará imagen previa porque la imagen ya es muy chica.',
	'Image_imagick_path' => 'Imagick (Ruta completa)',
	'Image_imagick_path_explain' => 'Introduzca la ruta donde está el programa imagick, normalmente /usr/bin/convert (en windows: c:/imagemagick/convert.exe).',
	'Image_search_imagick' => 'Buscar imagick',

	'Use_gd2' => 'Crear usando la extensión GD2',
	'Use_gd2_explain' => 'PHP puede compilar con la extension GD1 o GD2 para manipular la imagen. Para crear correctamente las miniaturas sin imagemagick, el MOD de adjuntos utiliza dos métodos basados en lo que selecciones aquí. Si sus miniaturas aparecen con mala calidad o se descuadran para arriba, intente cambiar este ajuste.',
	'Attachment_version' => 'Version de MOD de adjuntos (Attachment MOD) %s', // %s is the version number

// Extensions -> Forbidden Extensions
	'Manage_forbidden_extensions' => 'Administrar extensiones prohibidas',
	'Manage_forbidden_extensions_explain' => 'Aquí puede agregar extensiones prohibidas. Las extensiones php, php3 and php4 estan prohibidas por seguridad, no puede habilitarlas.',
	'Forbidden_extension_exist' => 'La extensión %s ya está prohibida', // replace %s with the extension
	'Extension_exist_forbidden' => 'La extensión %s está en las extensiones permitidas. Antes de prohibirla, deshabilítela.',  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
	'Group_permissions_title' => 'Permisos de grupos de extensiones -> \'%s\'', // Replace %s with the Groups Name
	'Group_permissions_explain' => 'Aquí puede restringir extensiones del foro que quiera (definido en el cuadro de foros permitidos). La opción predeterminada es TODOS los grupos de extensiones en todos los foros (como hacía el attachmente MOD desde su primera version). Sólo agregue los foros a los grupos permitidos para habilitarlos. La opción predeterminada TODOS desaparecerá cuando agregue foros a la lista. En todo caso, puede volver a TODOS en cualquier momento. Si agrega un foro nuevo a su sitio y los permisos están en TODOS, nada cambiará. Pero si ya había restringido el uso de las extensiones en los foros, deberá aplicarlo otra vez a todos los foros nuevos. Es fácil hacer eso automáticamente, pero forzaría el tener que editar muchos archivos',
	'Note_admin_empty_group_permissions' => 'NOTA:<br />Dentro de los foros, en la parte inferior se permite a sus usuarios adjuntar archivos. Pero puesto que no se permite a ningun grupo de usuarios adjuntar archivos, sus usuarios no pueden adjuntar archivos. Si lo intentan, recibirán mensajes de error. Quizá quiera fijar los permisos del ADMIN en \'Archivos en mensajes\' de estos foros.<br /><br />',
	'Add_forums' => 'Agregar foros',
	'Add_selected' => 'Agregar seleccionados',
	'Perm_all_forums' => 'TODOS',

// Attachments -> Quota Limits
	'Manage_quotas' => 'Administrar cuotas',
	'Manage_quotas_explain' => 'Aquí puede añadir/borrar/cambiar los límites de cuota. Puede asignar estos límites de cuota a los usuarios y a los grupos más adelante. Para asignar un limite de cuota a un usuario, debe ir a Usuarios --> Administración, seleccionar al usuario y ver las opciones. Para asignar un límite de cuota a un grupo, vaya a Grupos --> Administración, seleccione el grupo que quiere editar, y podrá ver las opciones de configuración. Si desea ver, que tienen asignado los usuarios y grupos de límite de cuota, haga clic en \'Ver\' a la izquierda de la descripción de cuota.',
	'Assigned_users' => 'Usuarios asignados',
	'Assigned_groups' => 'Grupos asignados',
	'Quota_limit_exist' => 'El límite de couta %s ya existe.', // Replace %s with the Quota Description

// Attachments -> Control Panel
	'Control_panel_title' => 'Panel de control de archivos adjuntos',
	'Control_panel_explain' => 'Aquí puede ver y administrar archivos adjuntos basados en usuarios, adjuntos, cantidad de veces vistos, etc.',
	'File_comment_cp' => 'Comentario del archivo',

// Control Panel -> Search
	'Search_wildcard_explain' => 'Use * como comodín para resultados parciales',
	'Size_smaller_than' => 'Tamaño menor que (bytes)',
	'Size_greater_than' => 'Tamaño mayor que (bytes)',
	'Count_smaller_than' => 'Contador de bajadas menor a',
	'Count_greater_than' => 'Contador de bajadas mayor a',
	'More_days_old' => 'Que tenga más de esta cantidad de dias de antigüedad',
	'No_attach_search_match' => 'No se ha encontrado ningun adjunto con las características que buscó',

// Control Panel -> Statistics
	'Number_of_attachments' => 'Cantidad de archivos adjuntos',
	'Total_filesize' => 'Espacio total utilizado',
	'Number_posts_attach' => 'Número de mensajes con adjuntos',
	'Number_topics_attach' => 'Número de temas con adjuntos',
	'Number_users_attach' => 'Cantidad de usuarios que han publicado adjuntos',
	'Number_pms_attach' => 'Adjuntos totales en mensajes privados',

// Control Panel -> Attachments
	'Statistics_for_user' => 'Estadísticas de %s', // replace %s with username
	'Size_in_kb' => 'Tamaño (KB)',
	'Downloads' => 'Descargas',
	'Post_time' => 'Hora del mensaje',
	'Posted_in_topic' => 'Publicado en el tema',
	'Submit_changes' => 'Enviar cambios',

// Sort Types
	'Sort_Attachments' => 'Adjuntos',
	'Sort_Size' => 'Tamaño',
	'Sort_Filename' => 'Nombre del archivo',
	'Sort_Comment' => 'Comentario',
	'Sort_Extension' => 'Extensión',
	'Sort_Downloads' => 'Descargas',
	'Sort_Posttime' => 'Hora del mensaje',
	'Sort_Posts' => 'Mensajes',

// View Types
	'View_Statistic' => 'Estadísticas',
	'View_Search' => 'Buscar',
	'View_Username' => 'Usuario',
	'View_Attachments' => 'Adjuntos',

// Successfully updated
	'Attach_config_updated' => 'Configuración de los adjuntos actualizada',
	'Click_return_attach_config' => 'Pulse %saquí%s para volver a la configuración de los adjuntos',
	'Test_settings_successful' => 'Prueba finalizada, todo parece estar bien.',

// Some basic definitions
	'Attachments' => 'Adjuntos',
	'Attachment' => 'Adjunto',
	'Extensions' => 'Extensiones',
	'Extension' => 'Extensión',

// Auth pages
	'Auth_attach' => 'Subir archivos',
	'Auth_download' => 'Descargar',
	)
);

?>