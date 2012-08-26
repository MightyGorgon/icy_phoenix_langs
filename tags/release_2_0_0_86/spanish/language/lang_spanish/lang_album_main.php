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
* Smartor (smartor_xp@hotmail.com)
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
// Album Index
	'Photo_Album' => '&Aacute;lbum de fotos',
	'Pics' => 'Im&aacute;genes',
	'Last_Pic' => '&Uacute;ltima imagen',
	'Public_Categories' => 'Categor&iacute;as p&uacute;blicas',
	'No_Pics' => '&iexcl;No hay im&aacute;genes en este nivel, mire en las secciones!',
	'Users_Personal_Galleries' => 'Galer&iacute;as personales de usuarios',
	'Your_Personal_Gallery' => 'Su galer&iacute;a personal',
	'Recent_Public_Pics' => 'Im&aacute;genes p&uacute;blicas recientes',
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',

// Category View
	'Category_not_exist' => 'Esta categor&iacute;a no existe',
	'Upload_Pic' => 'Subir imagen',
	'Upload_Pics' => 'Subir im&aacute;genes',
	'JUpload_Pic' => 'Subir m&uacute;ltiples im&aacute;genes con jupload',
	'Pic_Title' => 'T&iacute;tulo de la imagen',
	'View' => 'Ver',
	'Pic_Poster' => 'Autor',
	'Pic_Image' => 'Imagen',
	'Waiting' => ' imagen(es) esperando para ser aprobadas',

/*
	'Album_upload_can' => '<b>Puede</b> subir nuevas im&aacute;genes en esta categor&iacute;a',
	'Album_upload_cannot' => '<b>No puede</b> subir nuevas im&aacute;genes en esta categor&iacute;a',
	'Album_rate_can' => '<b>Puede</b> clasificar im&aacute;genes en esta categor&iacute;a',
	'Album_rate_cannot' => '<b>No puede</b> clasificar im&aacute;genes en esta categor&iacute;a',
	'Album_comment_can' => '<b>Puede</b> poner comentarios a im&aacute;genes en esta categor&iacute;a',
	'Album_comment_cannot' => '<b>No puede</b> poner comentarios a im&aacute;genes en esta categor&iacute;a',
	'Album_edit_can' => '<b>Puede</b> editar im&aacute;genes y comentarios en esta categor&iacute;a',
	'Album_edit_cannot' => '<b>No puede</b> editar im&aacute;genes y comentarios en esta categor&iacute;a',
	'Album_delete_can' => '<b>Puede</b> borrar sus im&aacute;genes y comentarios en esta categor&iacute;a',
	'Album_delete_cannot' => '<b>No puede</b> borrar sus im&aacute;genes y comentarios en esta categor&iacute;a',
*/
	'Album_view_can' => '<b>Puede</b> ver im&aacute;genes',
	'Album_view_cannot' => '<b>No puede</b> ver im&aacute;genes',
	'Album_upload_can' => '<b>Puede</b> subir nuevas im&aacute;genes',
	'Album_upload_cannot' => '<b>No puede</b> subir nuevas im&aacute;genes',
	'Album_rate_can' => '<b>Puede</b> valorar im&aacute;genes',
	'Album_rate_cannot' => '<b>No puede</b> valorar im&aacute;genes',
	'Album_comment_can' => '<b>Puede</b> publicar comentarios sobre las im&aacute;genes',
	'Album_comment_cannot' => '<b>No puede</b> publicar comentarios sobre las im&aacute;genes',
	'Album_edit_can' => '<b>Puede</b> editar sus im&aacute;genes y comentarios',
	'Album_edit_cannot' => '<b>No puede</b> editar sus im&aacute;genes y comentarios',
	'Album_delete_can' => '<b>Puede</b> borrar sus im&aacute;genes y comentarios',
	'Album_delete_cannot' => '<b>No puede</b> borrar sus im&aacute;genes y comentarios',
	'Album_moderate_can' => '<b>Puede</b> %smoderar%s esta categor&iacute;a',

	'Edit_pic' => 'Editar',
	'Delete_pic' => 'Borrar',
	'Rating' => 'Clasificaci&oacute;n',
	'Comments' => 'Comentarios',
	'Last_Comment' => '&Uacute;ltimo comentario',
	'New_Comment' => 'Nuevo comentario',
	'Not_rated' => '<i>No valorado</i>',
	'Random_Pictures' => 'Im&aacute;genes aleatorias',
	'Highest_Rated_Pictures' => 'Im&aacute;genes m&aacute;s valoradas',
	'Most_Viewed_Pictures' => 'Im&aacute;genes m&aacute;s vistas',

	'Avatar_Set' => 'Fijar como avatar',
	'BBCode_Copy' => 'Copiar BBCode',

// Upload
	'Pic_Desc' => 'Descripci&oacute;n de la imagen',
	'Plain_text_only' => 'S&oacute;lo texto plano',
	'Max_length' => 'Tama&ntilde;o m&aacute;ximo (bytes)',
	'Upload_pic_from_machine' => 'Suba una imagen desde su ordenador',
	'Upload_to_Category' => 'Suba a categor&iacute;a',
	'Upload_thumbnail_from_machine' => 'Suba su mosaico desde su ordenador (debe ser del mismo tipo que su imagen)',
	'Upload_thumbnail' => 'Subir un mosaico',
	'Upload_thumbnail_explain' => 'Debe ser del mismo tipo de fichero que su imagen',
	'Thumbnail_size' => 'Tama&ntilde;o del mosaico (p&iacute;xel)',
	'Filetype_and_thumbtype_do_not_match' => 'Su imagen y su mosaico deben ser del mismo tipo',

	'Upload_no_title' => 'Debe introducir un t&iacute;tulo a su imagen',
	'Upload_no_file' => 'Debe introducir la ruta del directorio y el nombre de su fichero',
	'Desc_too_long' => 'Su descripci&oacute;n es demasiado larga',

	'JPG_allowed' => 'Est&aacute; permitido subir ficheros JPG',
	'PNG_allowed' => 'Est&aacute; permitido subir ficheros PNG',
	'GIF_allowed' => 'Est&aacute; permitido subir ficheros GIF',

	'Album_reached_quota' => 'Esta categor&iacute;a ha sobrepasado el l&iacute;mite de la cuota de im&aacute;genes. Ahora no puede subir m&aacute;s im&aacute;genes. Por favor, contacte con los administradores para m&aacute;s informaci&oacute;n',
	'User_reached_pics_quota' => 'Ha sobrepasado su cuota de im&aacute;genes. Ahora no puede subir m&aacute;s im&aacute;genes. Por favor, contacte con los administradores para m&aacute;s informaci&oacute;n',

	'No_valid_category_selected' => 'Categor&iacute;a seleccionada no v&aacute;lida',
	'No_category_to_upload' => 'Desafortunadamente, en este momento no hay categor&iacute;as donde pueda subir im&aacute;genes.',
	'Not_allowed_file_type' => 'Su tipo de imagen no est&aacute; permitido',
	'Upload_image_size_too_big' => 'La dimensi&oacute;n de su imagen es muy grande',
	'Upload_thumbnail_size_too_big' => 'La dimensi&oacute;n de su miniatura es muy grande',

	'Missed_pic_title' => 'Debe introducir un t&iacute;tulo para la imagen',

	'Click_return_category' => 'Pulse %saqu&iacute;%s para volver a la categor&iacute;a',
	'Click_return_album_index' => 'Pulse %saqu&iacute;%s para volver al &iacute;ndice del &aacute;lbum',

	'Add_File' => 'A&ntilde;adir archivo',
	'File_thumbnail_count_mismatch' => 'El n&uacute;mero de im&aacute;genes a subir y las vistas previas no concuerdan.',
	'No_thumbnail_for_picture_found' => 'No se ha encontrado ninguna vista previa para la imagen subida (nombre: %s).',
	'No_picture_for_thumbnail_found' => 'No se ha encontrado ninguna imagen para la vista previa (nombre: %s).',
	'Unknown_file_and_thumbnail_error_mismatch' => 'Error desconocido al intentar subir la imagen y su vista previa.<br />Nombre de la imagen: %s y nombre de la vista previa: %s.<br>',
	'Picture_exceeded_maximum_size_INI' => 'La imagen con nombre \'%s\' es demasiado grande. Su imagen ser&aacute; ignorada.<br />',
	'Thumbnail_exceeded_maximum_size_INI' => 'La vista previa con nombre \'%s\' es demasiado grande. Su imagen ser&aacute; ignorada.<br />',
	'Execution_time_exceeded_skipping' => 'Se ha excedido el tiempo m&aacute;ximo para la escritura de la imagen. Los siguientes archivos han sido ignorados:<br />',
	'Skipping_uploaded_picture_file' => 'Imagen: %s<br/>',
	'Skipping_uploaded_picture_and_thumbnail_file' => 'Imagen: %s | Vista previa: %s<br/>',
	'Album_upload_not_successful' => 'Ninguna de sus im&aacute;genes se ha subido correctamente.<br/><br/>',
	'Album_upload_partially_successful' => 'S&oacute;lo parte de las im&aacute;genes se han subido correctamente.<br/><br/>',
	'No_pictures_selected_for_upload' => 'No se ha seleccionado ninguna imagen o ha habido un error desconocido.',

// 'Bad_upload_file_size' => 'Your uploaded file is too large or corrupted',
// 'Album_upload_successful' => 'Your pic has been uploaded successfully',
// 'Album_upload_need_approval' => 'Your pic has been uploaded successfully.<br /><br />But the feature Pic Approval has been enabled so your pic must be approved by a administrator or a moderator before posting',

	'Bad_upload' => 'Mala subida',
	'Bad_upload_file_size' => 'Su archivo a subir (%s) es muy grande o est&aacute; corrupto',
	'Album_upload_successful' => 'Todas sus fotos se han subido correctamente.',
	'Album_upload_need_approval' => 'Todas sus fotos se han subido correctamente.<br /><br />Pero estas im&aacute;genes deben ser aprobadas por el administrador o moderador para su posterior publicaci&oacute;n.',

	'Rotation' => 'Rotar (a la izquierda) - grados',

	'Max_file_size' => 'Tama&ntilde;o m&aacute;ximo del archivo (bytes)',
	'Max_width' => 'Anchura m&aacute;xima de la imagen antes de la recompresi&oacute;n (p&iacute;xel)',
	'Max_height' => 'Altura m&aacute;xima de la imagen antes de la recompresi&oacute;n (p&iacute;xel)',

// Album Nuffload
	'time_elapsed' => 'Tiempo transcurrido',
	'time_remaining' => 'Tiempo restante',
	'upload_in_progress' => 'Procesando subida',
	'please_wait' => 'Por favor, espere...',
	'uploaded' => 'Subiendo %multi_id% de %multi_max% im&aacute;genes.',
	'no_file_received' => 'No se ha recibido archivo de im&aacute;genes',
	'no_thumbnail_file_received' => 'No se ha recibido archivo de miniatura',
	'file_too_big' => 'Tama&ntilde;o de la imagen demasiado grande',
	'thumbnail_too_big' => 'Archivo en miniatura demasiado grande',
	'image_res_too_high' => 'Resoluci&oacute;n de la imagen demasiado alta',
	'add_field' => 'A&ntilde;ada el archivo en el campo de subida',
	'remove_field' => 'Borre el archivo en el campo de subida',
	'ZIP_allowed' => 'Est&aacute; permitido subir ficheros ZIP',

// View Pic
	'Pic_ID' => 'ID',
	'Pic_Details' => 'Detalles de la imagen',
	'Pic_Size' => 'Tama&ntilde;o',
	'Pic_Type' => 'Tipo de imagen',
	'Pic_BBCode' => 'BBCode',
	'Pic_not_exist' => 'Esta imagen no existe',
	'Click_enlarge' => 'Pulse en la imagen para verla a su tama&ntilde;o',
	'Prev_Pic' => 'Ver imagen anterior',
	'Next_Pic' => 'Ver imagen siguiente',
	'Slideshow' => 'Mostrar diapositiva',
	'Slideshow_Delay' => 'Retardo de muestra de diapositiva',
	'Slideshow_On' => 'Mostrar diapositiva',
	'Slideshow_Off' => 'Parar de mostrar diapositiva',
	'Pics_Nav' => 'Navegaci&oacute;n en im&aacute;genes',
	'Pics_Nav_Next' => 'Imagen siguiente',
	'Pics_Nav_Prev' => 'Imagen anterior',
	'Pics_Counter' => 'Viendo imagen %s de %s',

// Edit Pic
	'Edit_Pic_Info' => 'Editar informaci&oacute;n de la imagen',
	'Pics_updated_successfully' => 'La informaci&oacute;n de su imagen se ha actualizado correctamente',

// Delete Pic
	'Album_delete_confirm' => '&iquest;Est&aacute; seguro de que quiere borrar esta(s) imagen(es)?',
	'Pics_deleted_successfully' => 'Est&aacute; imagen(es) ha(n) sido borrada(s) correctamente',

// ModCP
	'Approval' => 'Aprobaci&oacute;n',
	'Approve' => 'Apruebe',
	'Unapprove' => 'Desapruebe',
	'Status' => 'Estatus',
	'Locked' => 'Bloqueado',
	'Not_approved' => 'No aprobado',
	'Approved' => 'Aprobado',
	'Copy' => 'Copiar',
	'Move_to_Category' => 'Mover a categor&iacute;a',
	'Pics_moved_successfully' => 'Su(s) imagen(es) ha sido movida correctamente',
	'Copy_to_Category' => 'Copiar a la categor&iacute;a',
	'Pics_copied_successfully' => 'Su imagen se ha copiado correctamente',
	'Pics_locked_successfully' => 'Su(s) imagen(es) ha sido bloqueada correctamente',
	'Pics_unlocked_successfully' => 'Su(s) imagen(es) ha sido desbloqueada correctamente',
	'Pics_approved_successfully' => 'Su(s) imagen(es) ha sido aprobada correctamente',
	'Pics_unapproved_successfully' => 'Su(s) imagen(es) ha sido desaprobada correctamente',

// Rate
	'Current_Rating' => 'Valoraci&oacute;n actual',
	'Please_Rate_It' => 'Por favor, haga su valoraci&oacute;n',
	'Login_To_Vote' => 'Identif&iacute;quese para votar',
	'Already_rated' => 'Usted ya ha valorado anteriormente esta imagen',
	'Own_Pic_Rate' => 'Usted no puede valorar sus im&aacute;genes',
	'Album_rate_successfully' => 'Su imagen ha sido valorada correctamente',
	'Click_rate_more' => 'Pulse %saqu&iacute;%s para valorar m&aacute;s im&aacute;genes.',
	'Hot_Or_Not' => 'Hot o not',

// Comment
	'Comment_no_text' => 'Por favor, introduzca su comentario',
	'Comment_too_long' => 'Su comentario es demasiado largo',
	'Comment_delete_confirm' => '&iquest;Est&aacute; seguro de que quiere borrar este comentario?',
	'Pic_Locked' => 'Lo sentimos, esta imagen fue bloqueada, por lo que no puede a&ntilde;adir m&aacute;s comentarios',
	'Post_your_comment' => 'Por favor, introduzca su comentario',

// Personal Gallery
	'Personal_Gallery_Explain' => 'Puede ver las galer&iacute;as personales de otros usuarios pinchando en el enlace de sus perfiles',
	'Personal_gallery_not_created' => 'La galer&iacute;a personal de %s est&aacute; vac&iacute;a o no ha sido creada',
	'Not_allowed_to_create_personal_gallery' => 'Lo sentimos, los administradores de este foro no le permiten crear su galer&iacute;a personal',
	'Click_return_personal_gallery' => 'Pulse %saqu&iacute;%s para volver a su galer&iacute;a personal',

// Download Archive
	'Download_pics' => 'Descargar im&aacute;genes (ZIP)',
	'Download_page' => 'Descargar im&aacute;genes de este p&aacute;gina (ZIP)',
	'No_Download_auth' => 'No esta autorizado para guardar fotos de este &aacute;lbum',

// Email Notification
	'Email_Notification' => 'Notificaci&oacute;n por correo de &aacute;lbum',
	'Email_Notification_Explain' => 'Este ajuste permite a los administradores recibir una notificaci&oacute;n cuando se env&iacute;a una nueva imagen al &aacute;lbum',
	'Approvation_OK' => 'Aprobada',
	'Approvation_NO' => 'No aprobada',

// Album Hierarchy Index Table
	'Last_Comment' => '&Uacute;ltimo comentario',
	'Last_Comments' => '&Uacute;ltimos comentarios',
	'No_Comment_Info' => 'Sin comentarios',
	'No_Pictures_In_Cat' => 'No hay im&aacute;genes en esta categor&iacute;a',
	'Total_Pics' => 'Im&aacute;genes en total',
	'Total_Comments' => 'Comentarios en total',
	'Last_Index_Thumbnail' => '&Uacute;ltima imagen',
	'One_Sub_Total_Pics' => '%d imagen',
	'Multiple_Sub_Total_Pics' => '%d im&aacute;genes',
	'Album_sub_categories' => 'Sub categor&iacute;as',
	'No_Public_Galleries' => 'No hay galer&iacute;as p&uacute;blicas',
	'One_new_picture' => '%d nueva imagen',
	'Multiple_new_pictures' => '%d nuevas im&aacute;genes',

// Personal Album Hierarchy Index Table
	'Personal_Categories' => 'Galer&iacute;a personal',
	'Create_Personal_Categories' => 'Crear galer&iacute;a personal',
	'Personal_Cat_Admin' => 'Administrar la categor&iacute;a de galer&iacute;a personal',
	'Recent_Personal_Pics' => 'Im&aacute;genes recientes en la galer&iacute;a personal de %s',

// Album Moderator Control Panel
	'Modcp_check_all' => 'Marcar todo',
	'Modcp_uncheck_all' => 'Desmarcar todo',
	'Modcp_inverse_selection' => 'Invertir selecci&oacute;n',

	'Show_selected_pic_view_mode' => 'S&oacute;lo mostrar la categor&iacute;a de la galer&iacute;a personal seleccionada',
	'Show_all_pic_view_mode' => 'Mostrar todas las im&aacute;genes en esta galer&iacute;a personal',

// Access language strings
	'Album_Can_Manage_Categories' => '<b>Puede</b> %sAdministrar%s las categor&iacute;as de la galer&iacute;a',
	'No_Personal_Category_admin' => 'No tiene permitido administrar las categor&iacute;as de su galer&iacute;a personal',

// The picture list of a member (album_mod/album_memberlist.php)
	'Pic_Cat' => 'Categor&iacute;a',
	'Picture_List_Of_User' => 'Todas las im&aacute;genes son de %s',
	'Member_Picture_List_Explain' => 'Puede ver la lista completa de las im&aacute;genes de otros usuarios pinchando en el enlace de su perfil',
	'Comment_List_Of_User' => 'Todos los comentarios de %s',
	'Rating_List_Of_User' => 'Todos los votos de %s',
	'Show_All_Pictures_Of_user' => 'Mostrar todas las im&aacute;genes de %s',
	'Show_All_Comments_Of_user' => 'Mostrar todos los comentarios de %s',
	'Show_All_Ratings_Of_user' => 'Mostrar todas las votaciones de %s',

// The pictures list
	'All_Picture_List_Of_User' => 'Todas las im&aacute;genes',
	'All_Comment_List_Of_User' => 'Todos los comentarios',
	'All_Rating_List_Of_User' => 'Todas las valoraciones',
	'All_Show_All_Pictures_Of_user' => 'Todas las im&aacute;genes',
	'All_Show_All_Comments_Of_user' => 'Todos los comentarios',
	'All_Show_All_Ratings_Of_user' => 'Todas las valoraciones',

	'Not_commented' => '<i>No comentada</i>',

// Nuff's Stuff
	'Nuff_Click' => 'Pinche aqu&iacute; para aplicar efectos especiales',
	'Nuff_UnClick' => 'Pinche aqu&iacute; para una visualizaci&oacute;n normal',
	'Nuff_Title' => 'Efectos especiales',
	'Nuff_Explain' =>'Usando esta p&aacute;gina puede aplicar m&uacute;ltiples efectos especiales a las im&aacute;genes.<br />Recuerde que esta es una<i><b>operaci&oacute;n muy pesada para el servidor</b></i>, por lo que no debe abusar de ella. Algunos efectos ser&aacute;n autom&aacute;ticamente ajustados para no sobrecargar demasiado el servidor.',
	'Nuff_Normal' => 'Imagen normal',
	'Nuff_Normal_Explain' => 'Ning&uacute;n efecto se aplic&oacute;',
	'Nuff_BW' => 'Blanco y negro',
	'Nuff_BW_Explain' => 'Este efecto transformar&aacute; la imagen en blanco y negro',
	'Nuff_Sepia' => 'Tono sepia',
	'Nuff_Sepia_Explain' => 'Este efecto aplicar&aacute; un tono sepia a la imagen',
	'Nuff_Flip' => 'Estirar',
	'Nuff_Flip_Explain' => 'Usando esta funci&oacute;n podr&aacute; estirar la imagen',
	'Nuff_Mirror' => 'Espejo',
	'Nuff_Mirror_Explain' => 'Usando esta funci&oacute;n podr&aacute; usar un efecto espejo en la imagen',
	'Nuff_Flip_H' => 'Horizontal',
	'Nuff_Flip_V' => 'Vertical',
	'Nuff_Rotate' => 'Rotar imagen (sentido antihorario)',
	'Nuff_Rotate_Explain' => 'Rotar las im&aacute;genes en sentido antihorario',
	'Nuff_Resize' => 'Restablecer',
	'Nuff_Resize_Explain' => 'Esta funci&oacute;n es para restablecer la imagen',
	'Nuff_Resize_W' => 'Anchura',
	'Nuff_Resize_H' => 'Altura',
	'Nuff_Resize_No_Resize' => 'No reajustar tama&ntilde;o',
	'Nuff_Watermark' => 'Marca de agua',
	'Nuff_Watermark_Explain' => 'Aplicar marca de agua a la imagen',
	'Nuff_Recompress' => 'Recomprimir',
	'Nuff_Recompress_Explain' => 'Esta funci&oacute;n recomprimir&aacute; la imagen',
	'Nuff_Alpha' => 'Alpha',
	'Nuff_Alpha_Explain' => 'Este efecto dotar&aacute; de un canal alpha la imagen',
	'Nuff_Blur' => 'Azul',
	'Nuff_Blur_Explain' => 'Este efecto aplicar&aacute; un filtro azul a la imagen',
	'Nuff_Pixelate' => 'Pixelado',
	'Nuff_Pixelate_Explain' => 'Este efecto aplicar&aacute; un filtro de pixelado en la imagen',
	'Nuff_Scatter' => 'Dispersi&oacute;n',
	'Nuff_Scatter_Explain' => 'Este efecto aplicar&aacute; un filtro de dispersi&oacute;n a la imagen',
	'Nuff_Infrared' => 'Infrarrojo',
	'Nuff_Infrared_Explain' => 'Este efecto aplicar&aacute; un filtro infrarrojo a la imagen',
	'Nuff_Tint' => 'Tinte',
	'Nuff_Tint_Explain' => 'Este efecto aplicar&aacute; un tinte rojo a la imagen',
	'Nuff_Interlace' => 'Entrelazado (L&iacute;neas horizontales)',
	'Nuff_Interlace_Explain' => 'Este efecto recubrir&aacute; de un canal de entrelazado a la imagen',
	'Nuff_Screen' => 'Pantalla (Linea horizontal vertical)',
	'Nuff_Screen_Explain' => 'Este efecto cubrir&aacute; de un canal de pantalla a la imagen',
	'Nuff_Stereogram' => 'Estereograma',
	'Nuff_Stereogram_Explain' => 'Este efecto convertir&aacute; la imagen en un estereograma (se requiere BW 16 bit)',

	'Pic_Gallery' => 'Galer&iacute;a al vuelo',
	'Select_Pic' => 'Seleccionar imagen',
	'Select_Category' => 'Seleccionar categor&iacute;a',
	'Title_Description' => 'T&iacute;tulo &amp; descripci&oacute;n',

// Pic watch
	'No_longer_watching_comment' => 'Usted ha dejado de observar los comentarios de &eacute;sta imagen',
	'Watching_comment' => 'Usted &eacute;sta observando los comentarios de &eacute;sta imagen',
	'Pic_comment_notification' => 'Notificaciones de comentarios del &aacute;lbum',
	'Pic_comment_watch_checkbox' => 'Seleccione la casilla para ser notificado con nuevos comentarios:',
	'Watch_pic' => 'Observar los comentarios de &eacute;sta imagen',
	'Unwatch_pic' => 'Dejar de observar los comentarios de &eacute;sta imagen',
	'Click_return_pic' => 'Pulse %saqu&iacute;%s para volver a la imagen',

	'Pic_RDF' => 'RSS feed 1.0',
	'Pic_RSS' => 'RSS feed 2.0',
	)
);

?>