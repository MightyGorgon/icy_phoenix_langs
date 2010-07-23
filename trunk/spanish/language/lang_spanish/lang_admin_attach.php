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
	'Attach_settings' => 'Configuraci&oacute;n de los adjuntos',
	'Manage_attachments_explain' => 'Aqu&iacute; podr&aacute; manejar las configuraciones generales del attachment MOD. Si pulsa el bot&oacute;n probar configuraci&oacute;n, ser&aacute;n autom&aacute;ticamente probados los sistemas para ver si el attachment MOD puede funcionar bien en este foro. Si tiene problemas subiendo archivos, haga esta prueba para obtener un mensaje m&aacute;s detallado sobre el error.',
	'Attach_filesize_settings' => 'Configuraci&oacute;n del tama&ntilde;o de los adjuntos',
	'Attach_number_settings' => 'Configuraci&oacute;n de la cantidad de adjuntos',
	'Attach_options_settings' => 'Opciones de los adjuntos',

	'Upload_directory' => 'Directorio para los adjuntos',
	'Upload_directory_explain' => 'Escriba la direcci&oacute;n para guardar los archivos subidos. La direcci&oacute;n es relativa a la de la instalaci&oacute;n del Icy Phoenix. Por ejemplo, escriba \'files\' si la instalaci&oacute;n fue en http://www.sudominio.com/ip/ y su directorio de subida est&aacute; en http://www.sudominio.com/ip/files/.',
	'Attach_img_path' => 'Icono de los adjuntos',
	'Attach_img_path_explain' => 'Esta imagen se muestra al lado de los enlaces de los adjuntos en los mensajes. Deje este campo en blanco si no quiere ninguna imagen. Esta opci&oacute;n es sobrescrita por la que se encuentra en la administraci&oacute;n de grupos de extensiones.',
	'Attach_topic_icon' => 'Icono de adjunto en tema',
	'Attach_topic_icon_explain' => 'Esta imagen se muestra en los foros antes del t&iacute;tulo de aquellos que contienen adjuntos. Deje este di&aacute;logo en blanco si no quiere ning&uacute;n &iacute;cono.',
	'Attach_display_order' => 'Orden de muestra de los adjuntos',
	'Attach_display_order_explain' => 'Aqu&iacute; puede elegir c&oacute;mo mostrar los adjuntos en mensajes/MPs con orden descendente (adjuntos m&aacute;s nuevos primero) u orden ascendente (adjuntos m&aacute;s antiguos primero).',
	'Show_apcp' => 'Mostrar el nuevo sistema de publicaci&oacute;n de adjuntos',
	'Show_apcp_explain' => 'Elija qu&eacute; sistema de publicaci&oacute;n de adjuntos quiere mostrar (s&iacute;) o el m&eacute;todo viejo con dos cuadros para publicar adjuntos y editar adjuntos publicados (no) en la ventana de publicaci&oacute;n. La apariencia es muy dif&iacute;cil de explicar, pero vale la pena probarlo.',

	'Max_filesize_attach' => 'Tama&ntilde;o del archivo',
	'Max_filesize_attach_explain' => 'Tama&ntilde;o m&aacute;ximo de los adjuntos. 0 es ilimitado \'ilimitado\'. Esta opci&oacute;n est&aacute; restringida por el servidor. Por ejemplo, si la configuraci&oacute;n de su PHP no soporta mas de 2MB, el attachment MOD no puede hacer nada para superarla.',
	'Attach_quota' => 'Couta total de adjuntos',
	'Attach_quota_explain' => 'Espacio m&aacute;ximo para guardar todos los adjuntos de su foro. 0 equivale a \'ilimitado\'.',
	'Max_filesize_pm' => 'Tama&ntilde;o m&aacute;ximo en la carpeta de los mensajes privados.',
	'Max_filesize_pm_explain' => 'Tama&ntilde;o m&aacute;ximo de almacenamiento de archivos en los mensajes privados de los usuarios. 0 equivale a \'ilimitado\'.',
	'Default_quota_limit' => 'Cuota predeterminada',
	'Default_quota_limit_explain' => 'Aqu&iacute; puede poner qu&eacute; cuota quiere que tengan los usuarios que se registren a partir de la instalaci&oacute;n del attachment MOD. La opci&oacute;n \'sin l&iacute;mite de cuota\' es por si no usa cuotas. En ese caso, se usar&aacute; la opci&oacute;n definida en la configuraci&oacute;n general.',

	'Max_attachments' => 'Numero m&aacute;ximo de adjuntos.',
	'Max_attachments_explain' => 'Cantidad m&aacute;xima de adjuntos por mensaje.',
	'Max_attachments_pm' => 'Cantidad m&aacute;xima de adjuntos en un mensaje privado.',
	'Max_attachments_pm_explain' => 'Define el n&uacute;mero m&aacute;ximo de adjuntos que puede incluir un usuario en un mensaje privado.',

	'Disable_mod' => 'Deshabilitar attachmente MOD',
	'Disable_mod_explain' => 'Esta opci&oacute;n es b&aacute;sicamente para probar estilos. Deshabilita todo el attachment MOD excepto el panel de control.',
	'PM_Attachments' => 'Permitir adjuntos en mensajes privados',
	'PM_Attachments_explain' => 'Habilita/Deshabilita adjuntos en mensajes privados.',
	'Ftp_upload' => 'Habilitar FTP',
	'Ftp_upload_explain' => 'Habilita o deshabilita el FTP. Si pone s&iacute; deber&aacute; definir los campos de FTP, y entonces no se usar&aacute; el directorio de subida.',
	'Attachment_topic_review' => '&iquest;Mostrar adjuntos en la ventana de revisi&oacute;n del tema?',
	'Attachment_topic_review_explain' => 'Si pone s&iacute; se mostraran los adjuntos en la ventana de revisi&oacute;n al contestar un mensaje.',

	'Ftp_server' => 'Servidor FTP',
	'Ftp_server_explain' => 'Ac&aacute; puede ingresar la IP o el nombre del servidor para subir archivos. Si deja esto en blanco se usar&aacute; el servidor donde est&aacute; el phpBB2. No est&aacute; habilitado ftp:// ni nada parecido, s&oacute;lo la direcci&oacute;n plana, ejemplo ftp.foo.com o la direcci&oacute;n IP (as&iacute; es mucho mas r&aacute;pido).',

	'ftp_username' => 'Su usuario FTP',
	'ftp_password' => 'Su contrase&ntilde;a FTP',

	'Attach_ftp_path' => 'Camino del FTP para el directorio de subida',
	'Attach_ftp_path_explain' => 'El directorio donde ser&aacute;n alojados los archivos subidos por FTP. Este directorio no debe tener los permisos CHMOD cambiados. No escriba ac&aacute; la IP o el nombre del servidor, s&oacute;lo el camino del directorio.<br />Por ejemplo: /home/web/uploads',
	'Ftp_download_path' => 'Link de baja al FTP',
	'Ftp_download_path_explain' => 'Escriba la url de su servidor FTP, donde los archivos est&aacute;n guardados.<br />Si est&aacute; usando un FTP remoto ponga la ruta completa, por ejemplo, http://www.mystorage.com/phpBB2/upload.<br />Si est&aacute; usando un servidor local para los archivos, puede ingresar una ruta relativa, por ejemplo \'upload\'.<br />La barra inicial ser&aacute; removida. Deje este campo en blanco si la ruta no es accesible desde internet. Con este campo en blanco no podr&aacute; habilitar el modo de baja f&iacute;sico.',
	'Ftp_passive_mode' => 'Habilitar FTP pasivo',
	'Ftp_passive_mode_explain' => 'El comando PASV pide al servidor remoto abrir una conexi&oacute;n para los datos y devolver la direcci&oacute;n de este puerto. El servidor remoto se queda escuchando en ese puerto esperando una conexi&oacute;n por parte del cliente.',

	'No_ftp_extensions_installed' => 'No puede usar el FTP para subir archivos porque las extensiones de subida de archivos por FTP no est&aacute;n instaladas en su PHP',

// Attachments -> Shadow Attachments
	'Shadow_attachments_explain' => 'Aqu&iacute; puede suprimir datos de los adjuntos de mensajes cuando el fichero se ha perdido, y suprimir el fichero que ya no tiene adjuntos en ning&uacute;n mensaje. Puede descargar o ver el fichero si pulsa en &eacute;l; si no hay ning&uacute;n enlace presente, el fichero no existe.',
	'Shadow_attachments_file_explain' => 'Suprimir todos los ficheros que existen en el sistema de ficheros y que no est&aacute;n asignados a ning&uacute;n mensaje existente.',
	'Shadow_attachments_row_explain' => 'Suprimir todas las informaciones de los adjuntos en los /files/ que no existen en el sistema de ficheros.',
	'Empty_file_entry' => 'Entrada del archivo vac&iacute;a',

// Attachments -> Sync
	'Sync_thumbnail_recreated' => 'Miniatura creada para el adjunto: %s', // replace %s with physical Filename
	'Sync_thumbnail_resetted' => 'Miniatura previa regenerada para: %s', // replace %s with physical Filename
	'Attach_sync_finished' => 'Sincronizaci&oacute;n de adjuntos terminada.',
	'Sync_topics' => 'Sinc. temas',
	'Sync_posts' => 'Sinc. mensajes',
	'Sync_thumbnails' => 'Sinc. miniaturas',


// Extensions -> Extension Control
	'Manage_extensions' => 'Administrar extensiones',
	'Manage_extensions_explain' => 'Aqu&iacute; puede manejar las extensiones. Si quiere habilitar o deshabilitar una extensi&oacute;n use el administrador de grupos de extensiones.',
	'Explanation' => 'Explicaci&oacute;n',
	'Extension_group' => 'Grupos de extensiones',
	'Invalid_extension' => 'Extensi&oacute;n no valida',
	'Extension_exist' => 'La extensi&oacute;n %s ya existe', // replace %s with the Extension
	'Unable_add_forbidden_extension' => 'La extensi&oacute;n %s est&aacute; prohibida, no est&aacute; usted autorizado para agregar extensiones habilitadas', // replace %s with Extension

// Extensions -> Extension Groups Management
	'Manage_extension_groups' => 'Administrar grupos de extensiones',
	'Manage_extension_groups_explain' => 'Aqu&iacute; puede agregar y modificar sus grupos de extensiones, puede deshabilitar grupos de extensiones, asignarles una categor&iacute;a especial, cambiar el m&eacute;todo de bajada, o poner un icono de subida.',
	'Special_category' => 'Categor&iacute;a especial',
	'Category_images' => 'Im&aacute;genes',
	'Category_stream_files' => 'Streamimg',
	'Category_swf_files' => 'Archivos flash',
	'Allowed' => 'Permitido',
	'Allowed_forums' => 'Foros permitidos',
	'Ext_group_permissions' => 'Grupos de permisos',
	'Download_mode' => 'M&eacute;todo de bajada',
	'Upload_icon' => 'Icono',
	'Max_groups_filesize' => 'Tama&ntilde;o m&aacute;ximo',
	'Extension_group_exist' => 'El grupo de extensiones %s ya existe', // replace %s with the group name
	'Collapse' => '+',
	'Decollapse' => '-',

// Extensions -> Special Categories
	'Manage_categories' => 'Administrar categor&iacute;as especiales',
	'Manage_categories_explain' => 'Aqu&iacute; puede configurar categor&iacute;as especiales. Puede elegir par&aacute;metros especiales y asignaciones para las categor&iacute;as especiales de un grupo de extensiones',
	'Settings_cat_images' => 'Configuraciones para la categor&iacute;a: im&aacute;genes',
	'Settings_cat_streams' => 'Configuraciones para la categor&iacute;a: archivos de audio',
	'Settings_cat_flash' => 'Configuraciones para la categor&iacute;a: archivos en flash',
	'Display_inlined' => 'Mostrar im&aacute;genes en l&iacute;nea',
	'Display_inlined_explain' => 'Seleccione si quiere mostrar las im&aacute;genes directamente en los mensajes (s&iacute;) o mostrar las im&aacute;genes como un enlace.',
	'Max_image_size' => 'Dimensiones m&aacute;ximas de las im&aacute;genes',
	'Max_image_size_explain' => 'Aqu&iacute; puede definir el tama&ntilde;o m&aacute;ximo de las im&aacute;genes a adjuntar (ancho x alto en p&iacute;xeles).<br />Si pone 0x0, esta funci&oacute;n se deshabilita. Con algunas im&aacute;genes esto puede no funcionar debido a limitaciones de PHP.',
	'Image_link_size' => 'Dimensiones para enlazarlas',
	'Image_link_size_explain' => 'Si la imagen alcanza esta medida se mostrar&aacute; un enlace a la imagen en el mensaje,<br />Si la vista en el foro est&aacute; habilitada (anchura y altura en pixels).<br />Si pone esto a 0x0, se deshabilitar&aacute; esta funci&oacute;n. Esta funci&oacute;n puede no funcionar con algunas im&aacute;genes por limitaciones de PHP.',
	'Assigned_group' => 'Grupo asignado',

	'Image_create_thumbnail' => 'Crear imagen previa',
	'Image_create_thumbnail_explain' => 'Siempre crear imagen previa. Esta caracter&iacute;stica elimina casi todos los ajustes en esta categor&iacute;a especial, excepto las dimensiones m&aacute;ximas de la imagen. Con esta caracter&iacute;stica que la miniatura ser&aacute; mostrada dentro del mensaje, el usuario puede hacer clic para abrir la imagen a su tama&ntilde;o real.<br />Observar por favor que esta caracter&iacute;stica requiere que est&eacute; instalado imagick, si no est&aacute; instalado o si permite el modo seguro la extensi&oacute;n GD de PHP ser&aacute; utilizada. Si el tipo de imagen no es soportada por el PHP, esta caracter&iacute;stica no ser&aacute; utilizada.',
	'Image_min_thumb_filesize' => 'Tama&ntilde;o m&iacute;nimo para crear imagen previa',
	'Image_min_thumb_filesize_explain' => 'Si la imagen pesa menos del tama&ntilde;o definido, no se crear&aacute; imagen previa porque la imagen ya es muy chica.',
	'Image_imagick_path' => 'Imagick (Ruta completa)',
	'Image_imagick_path_explain' => 'Introduzca la ruta donde est&aacute; el programa imagick, normalmente /usr/bin/convert (en windows: c:/imagemagick/convert.exe).',
	'Image_search_imagick' => 'Buscar imagick',

	'Use_gd2' => 'Crear usando la extensi&oacute;n GD2',
	'Use_gd2_explain' => 'PHP puede compilar con la extensi&oacute;n GD1 o GD2 para manipular la imagen. Para crear correctamente las miniaturas sin imagemagick, el MOD de adjuntos utiliza dos m&eacute;todos basados en lo que selecciones aqu&iacute;. Si sus miniaturas aparecen con mala calidad o se descuadran para arriba, intente cambiar este ajuste.',
	'Attachment_version' => 'Version de MOD de adjuntos (Attachment MOD) %s', // %s is the version number

// Extensions -> Forbidden Extensions
	'Manage_forbidden_extensions' => 'Administrar extensiones prohibidas',
	'Manage_forbidden_extensions_explain' => 'Aqu&iacute; puede agregar extensiones prohibidas. Las extensiones php, php3 and php4 est&aacute;n prohibidas por seguridad, no puede habilitarlas.',
	'Forbidden_extension_exist' => 'La extensi&oacute;n %s ya est&aacute; prohibida', // replace %s with the extension
	'Extension_exist_forbidden' => 'La extensi&oacute;n %s est&aacute; en las extensiones permitidas. Antes de prohibirla, deshabil&iacute;tela.',  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
	'Group_permissions_title' => 'Permisos de grupos de extensiones -> \'%s\'', // Replace %s with the Groups Name
	'Group_permissions_explain' => 'Aqu&iacute; puede restringir extensiones del foro que quiera (definido en el cuadro de foros permitidos). La opci&oacute;n predeterminada es TODOS los grupos de extensiones en todos los foros (como hac&iacute;a el attachmente MOD desde su primera versi&oacute;n). S&oacute;lo agregue los foros a los grupos permitidos para habilitarlos. La opci&oacute;n predeterminada TODOS desaparecer&aacute; cuando agregue foros a la lista. En todo caso, puede volver a TODOS en cualquier momento. Si agrega un foro nuevo a su sitio y los permisos est&aacute;n en TODOS, nada cambiar&aacute;. Pero si ya hab&iacute;a restringido el uso de las extensiones en los foros, deber&aacute; aplicarlo otra vez a todos los foros nuevos. Es f&aacute;cil hacer eso autom&aacute;ticamente, pero forzar&iacute;a el tener que editar muchos archivos',
	'Note_admin_empty_group_permissions' => 'NOTA:<br />Dentro de los foros, en la parte inferior se permite a sus usuarios adjuntar archivos. Pero puesto que no se permite a ningun grupo de usuarios adjuntar archivos, sus usuarios no pueden adjuntar archivos. Si lo intentan, recibir&aacute;n mensajes de error. Quiz&aacute; quiera fijar los permisos del ADMIN en \'Archivos en mensajes\' de estos foros.<br /><br />',
	'Add_forums' => 'Agregar foros',
	'Add_selected' => 'Agregar seleccionados',
	'Perm_all_forums' => 'TODOS',

// Attachments -> Quota Limits
	'Manage_quotas' => 'Administrar cuotas',
	'Manage_quotas_explain' => 'Aqu&iacute; puede a&ntilde;adir/borrar/cambiar los l&iacute;mites de cuota. Puede asignar estos l&iacute;mites de cuota a los usuarios y a los grupos m&aacute;s adelante. Para asignar un limite de cuota a un usuario, debe ir a Usuarios --> Administraci&oacute;n, seleccionar al usuario y ver las opciones. Para asignar un l&iacute;mite de cuota a un grupo, vaya a Grupos --> Administraci&oacute;n, seleccione el grupo que quiere editar, y podr&aacute; ver las opciones de configuraci&oacute;n. Si desea ver, que tienen asignado los usuarios y grupos de l&iacute;mite de cuota, haga clic en \'Ver\' a la izquierda de la descripci&oacute;n de cuota.',
	'Assigned_users' => 'Usuarios asignados',
	'Assigned_groups' => 'Grupos asignados',
	'Quota_limit_exist' => 'El l&iacute;mite de couta %s ya existe.', // Replace %s with the Quota Description

// Attachments -> Control Panel
	'Control_panel_title' => 'Panel de control de archivos adjuntos',
	'Control_panel_explain' => 'Aqu&iacute; puede ver y administrar archivos adjuntos basados en usuarios, adjuntos, cantidad de veces vistos, etc.',
	'File_comment_cp' => 'Comentario del archivo',

// Control Panel -> Search
	'Search_wildcard_explain' => 'Use * como comod&iacute;n para resultados parciales',
	'Size_smaller_than' => 'Tama&ntilde;o menor que (bytes)',
	'Size_greater_than' => 'Tama&ntilde;o mayor que (bytes)',
	'Count_smaller_than' => 'Contador de bajadas menor a',
	'Count_greater_than' => 'Contador de bajadas mayor a',
	'More_days_old' => 'Que tenga m&aacute;s de esta cantidad de d&iacute;as de antigüedad',
	'No_attach_search_match' => 'No se ha encontrado ning&uacute;n adjunto con las caracter&iacute;sticas que busc&oacute;',

// Control Panel -> Statistics
	'Number_of_attachments' => 'Cantidad de archivos adjuntos',
	'Total_filesize' => 'Espacio total utilizado',
	'Number_posts_attach' => 'N&uacute;mero de mensajes con adjuntos',
	'Number_topics_attach' => 'N&uacute;mero de temas con adjuntos',
	'Number_users_attach' => 'Cantidad de usuarios que han publicado adjuntos',
	'Number_pms_attach' => 'Adjuntos totales en mensajes privados',

// Control Panel -> Attachments
	'Statistics_for_user' => 'Estad&iacute;sticas de %s', // replace %s with username
	'Size_in_kb' => 'Tama&ntilde;o (KB)',
	'Downloads' => 'Descargas',
	'Post_time' => 'Hora del mensaje',
	'Posted_in_topic' => 'Publicado en el tema',
	'Submit_changes' => 'Enviar cambios',

// Sort Types
	'Sort_Attachments' => 'Adjuntos',
	'Sort_Size' => 'Tama&ntilde;o',
	'Sort_Filename' => 'Nombre del archivo',
	'Sort_Comment' => 'Comentario',
	'Sort_Extension' => 'Extensi&oacute;n',
	'Sort_Downloads' => 'Descargas',
	'Sort_Posttime' => 'Hora del mensaje',
	'Sort_Posts' => 'Mensajes',

// View Types
	'View_Statistic' => 'Estad&iacute;sticas',
	'View_Search' => 'Buscar',
	'View_Username' => 'Usuario',
	'View_Attachments' => 'Adjuntos',

// Successfully updated
	'Attach_config_updated' => 'Configuraci&oacute;n de los adjuntos actualizada',
	'Click_return_attach_config' => 'Pulse %saqu&iacute;%s para volver a la configuraci&oacute;n de los adjuntos',
	'Test_settings_successful' => 'Prueba finalizada, todo parece estar bien.',

// Some basic definitions
	'Attachments' => 'Adjuntos',
	'Attachment' => 'Adjunto',
	'Extensions' => 'Extensiones',
	'Extension' => 'Extensi&oacute;n',

// Auth pages
	'Auth_attach' => 'Subir archivos',
	'Auth_download' => 'Descargar',
	)
);

?>