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
// Auth Related Entries
/*
	'Rules_attach_can' => '<b>Puede</b> adjuntar archivos',
	'Rules_attach_cannot' => '<b>No puede</b> adjuntar archivos',
	'Rules_download_can' => '<b>Puede</b> descargar archivos',
	'Rules_download_cannot' => '<b>No puede</b> descargar archivos',
*/
	'Rules_attach_can' => '<b>Puede</b> adjuntar archivos',
	'Rules_attach_cannot' => '<b>No puede</b> adjuntar archivos',
	'Rules_download_can' => '<b>Puede</b> descargar archivos',
	'Rules_download_cannot' => '<b>No puede</b> descargar archivos',
	'Sorry_auth_view_attach' => 'Lo sentimos, pero no tiene autorización para ver este archivo adjunto',

// Viewtopic -> Display of Attachments
	'Description' => 'Descripción', // used in Administration Panel too...
	'Downloaded' => 'Descargado',
	'Download' => 'Descargar', // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
	'Filesize' => 'Tamaño',
	'Viewed' => 'Visto',
	'Download_number' => '%d veces', // replace %d with count
	'Extension_disabled_after_posting' => 'La extensión \'%s\' no esta habilitada, este adjunto no se mostrará hasta que un administrador habilite la extensión.', // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
	'Attach_posting_cp' => 'Panel de control de publicación de adjuntos',
	'Attach_posting_cp_explain' => 'Si pulsa en agregar un adjunto, verá el cuadro para agregar adjuntos.<br />Si pulsa en adjuntos publicados, verá una lista de archivos adjuntados, y podrá editarlos.<br />Si quiere remplazar (subir una nueva version) un adjunto, tendrá que pulsar dos enlaces: agregue el adjunto como lo haria normalmente; luego, no pulse en agregar adjunto, sino en actualizar versión junto al adjunto que quiere actualizar.',

// Posting/PM -> Posting Attachments
	'Add_attachment' => 'Agregar un adjunto',
	'Add_attachment_title' => 'Agregar un adjunto',
	'Add_attachment_explain' => 'Si no quiere agregar archivos adjuntos a su mensaje, deje en blanco estos campos.',
	'File_name' => 'Nombre del archivo',
	'File_comment' => 'Comentario del archivo',

// Posting/PM -> Posted Attachments
	'Posted_attachments' => 'Adjuntos agregados',
	'Options' => 'Opciones',
	'Update_comment' => 'Actualizar comentario',
	'Delete_attachments' => 'Eliminar adjuntos',
	'Delete_attachment' => 'Eliminar adjunto',
	'Delete_thumbnail' => 'Eliminar imagen preliminar',
	'Upload_new_version' => 'Subir nueva versión',

// Errors -> Posting Attachments
	'Invalid_filename' => '%s no es un nombre válido', // replace %s with given filename
	'Attachment_php_size_na' => 'El adjunto es muy grande.<br />No se pudo determinar cuánto es el maximo soportado por php.<br />El File Attachment mod no pudo determinar el tamaño máximo en el php.ini',
	'Attachment_php_size_overrun' => 'El adjunto es muy grande.<br />El tamaño maximo de subida son %d MB.<br />Este tamalo lo define el php.ini, por lo que el Attachment MOD no pueda pasar ese tamaño', // replace %d with ini_get('upload_max_filesize')
	'FileType_Mismatch' => 'Tipo de archivo mismatch',
	'Disallowed_extension' => 'La extensión %s no está permitida', // replace %s with extension (e.g. .php) 
	'Disallowed_extension_within_forum' => 'No puede publicar mensajes con adjuntos con la extensión %s en este foro', // replace %s with the Extension
	'Attachment_too_big' => 'El adjunto es demasiado grande.<br />El tamaño máximo es %d %s', // replace %d with maximum file size, %s with size var
	'Attach_quota_reached' => 'Lo sentimos, pero el tamaño total de adjuntos está completo. Comuníquese con un administrador para mas información.',
	'Too_many_attachments' => 'No se pueden agregar mas adjuntos porque el máximo de %d ha sido alcanzado.', // replace %d with maximum number of attachments
	'Error_imagesize' => 'La imagen no puede tener mas de %d píxeles de ancho y %d píxeles de largo', 
	'General_upload_error' => 'Error: no se ha podido subir adjunto a %s.', // replace %s with local path

	'Error_empty_add_attachbox' => 'Tiene que escribir algo en el campo \'Agregar un adjunto\'',
	'Error_missing_old_entry' => 'No se ha podido actualizar el adjunto, no se ha podido encontrar la entrada anterior.',

// Errors -> PM Related
	'Attach_quota_sender_pm_reached' => 'Lo sentimos, pero ha alcanzado el límite de mensajes privados en sus carpetas. Por favor, borre algunos adjuntos de su carpeta enviados, por ejemplo.',
	'Attach_quota_receiver_pm_reached' => 'Lo sentimos, pero el destinatario ha alcanzado el límite de mensajes privados en sus carpetas. Avísele de que borre algo para poder enviarle los archivos.',

// Errors -> Download
	'No_attachment_selected' => 'No ha seleccionado un archivo para ver o bajar',
	'Error_no_attachment' => 'El adjunto selccionado no existe',

// Delete Attachments
	'Confirm_delete_attachments' => '¿Está seguro de que desea borrar los archivos adjuntos?',
	'Deleted_attachments' => 'Los adjuntos seleccionados han sido borrados.',
	'Error_deleted_attachments' => 'No se han podido borrar los archivos adjuntos',
	'Confirm_delete_pm_attachments' => '¿Está seguro e que desea borrar todos los archivos adjuntos que hay en este mensaje privado?',

// General Error Messages
	'Attachment_feature_disabled' => 'Los archivos adjuntos están deshabilitados',

	'Directory_does_not_exist' => 'El directorio \'%s\' no existe o no se ha podido acceder a él.', // replace %s with directory
	'Directory_is_not_a_dir' => 'Compruebe si \'%s\' es un directorio.', // replace %s with directory
	'Directory_not_writeable' => 'No se ha podido escribir en \'%s\'. Tiene que poner los permisos del directorio en 777.', // replace %s with directory

	'Ftp_error_connect' => 'No se ha podido conectar con el servidor FTP: \'%s\'. Por favor, compruebe la configuracion FTP',
	'Ftp_error_login' => 'No se ha podido entrar al servidor. El usuario \'%s\' o la contraseña son incorrectos.',
	'Ftp_error_path' => 'No se ha podido acceder al directorio: \'%s\'. Revise las configuraciones FTP',
	'Ftp_error_upload' => 'No se pueden subir archivos al servidor FTP: \'%s\'. Revise las configuraciones FTP.',
	'Ftp_error_delete' => 'No se pueden eliminar archivos: \'%s\'. Revise las configuraciones FTP.<br />Es probable que el adjunto no exista.',
	'Ftp_error_pasv_mode' => 'No se ha podido habilitar o deshabilitar el modo pasivo del FTP',

// Attach Rules Window
	'Rules_page' => 'Reglas de los adjuntos',
	'Attach_rules_title' => 'Extensiones y tamaños permitidos',
	'Group_rule_header' => '%s -> Tamaño máximo de subida: %s', // Replace first %s with Extension Group, second one with the Size STRING
	'Allowed_extensions_and_sizes' => 'Extensiones y tamaños permitidos',
	'Note_user_empty_group_permissions' => 'NOTA:<br />Normalmente, se le permite adjuntar archivos en este foro.<br />Pero si a su grupo no se le permite, <br />usted no podrá adjuntar nada. Si lo intenta<br />recibirá un mensaje de error.<br />',

// Quota Variables
	'Upload_quota' => 'Cuota',
	'Pm_quota' => 'Cuota de mensajes privados',
	'User_upload_quota_reached' => 'Lo sentimos, pero ha alcanzado el límite de su cuota de %d %s', // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
	'User_acp_title' => 'Panel de control de adjuntos del usuario',
	'UACP' => 'Panel de control de adjuntos del usuario',
	'User_uploaded_profile' => 'Subidos: %s',
	'User_quota_profile' => 'Cuota: %s',
	'Upload_percent_profile' => '%d%% del total',

// Common Variables
	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',
	'Attach_search_query' => 'Buscar adjuntos',
	'Test_settings' => 'Probar configuración',
	'Not_assigned' => 'Sin asignar',
	'No_file_comment_available' => 'Sin comentario',
	'Attachbox_limit' => 'Está usando el %d%% de su cuota',
	'No_quota_limit' => 'Sin límite de couta',
	'Unlimited' => 'Ilimitado',
	)
);

?>