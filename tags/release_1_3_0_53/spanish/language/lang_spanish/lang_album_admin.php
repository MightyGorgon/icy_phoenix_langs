<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_album_admin.php 50 2009-07-22 10:13:03Z Mighty Gorgon $
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
// 01 - Configuration
	'Album_config' => 'Configurar álbum',
	'Album_config_explain' => 'Aquí puede cambiar la configuración del álbum de fotos.',
	'Album_config_updated' => 'La configuración del álbum se ha actualizado.',
	'Click_return_album_config' => 'Pulse %saquí%s para volver a la configuración del álbum.',
	'Max_pics' => 'Número máximo de fotos por categoría (-1 = ilimitado)',
	'User_pics_limit' => 'Límite por categoría y usuario (-1 = ilimitado)',
	'Moderator_pics_limit' => 'Límite por categoría y moderador (-1 = ilimitado)',
	'Pics_Approval' => 'Aprobación de fotos',
	'Rows_per_page' => 'Número de filas en la página',
	'Cols_per_page' => 'Número de columnas en la página',
	'Thumbnail_quality' => 'Calidad de la miniatura (1-100)',
	'Thumbnail_cache' => 'Caché de la miniatura',
	'Manual_thumbnail' => 'Manual de las miniaturas',
	'GD_version' => 'Optimizar para la versión de GD',
	'Pic_Desc_Max_Length' => 'Descripción/comentario de foto máxima longitud (bytes)',
	'Hotlink_prevent' => 'Prevención de hotlink',
	'Hotlink_allowed' => 'Excluir a los siguientes dominios del hotlink (separados por comas)',
	'Personal_gallery' => 'Permitir crear galerías personales para usuarios',
	'Personal_gallery_limit' => 'Límite de fotos para cada galería personal (-1 = ilimitado)',
	'Personal_gallery_view' => 'Quién puede ver las galerías personales',
	'Rate_system' => 'Habilitar sistema de puntuación',
	'Rate_Scale' => 'Escala de puntuación',
	'Comment_system' => 'Habilitar sistema de comentarios',
	'Thumbnail_Settings' => 'Configuración de las miniaturas',
	'Quick_Thumbnails' => 'Miniaturas rápidas',
	'Quick_Thumbnails_explain' => 'Activando esta opción el sistema revisará si han sido generadas las miniaturas, e intentará enviarla directamente al navegador. Esto acelerará la velocidad de generación de las miniaturas cuando observa categorías.',
	'Extra_Settings' => 'Configuración extra',
	'Default_Sort_Method' => 'Método por defecto de clasificar',
	'Default_Sort_Order' => 'Orden por defecto de clasificar',
	'Fullpic_Popup' => 'Ver foto entera en un popup',
	'Email_Notification' => 'Habilitar notificación por correo para las imágenes nuevas del álbum (sólo a los admin.)',
	'Show_Download' => 'Mostrar el botón de DESCARGAS (que habilita la descarga de imágenes en formato ZIP) a sólo aquellos que tienen permisos de SUBIDA en el álbum (si elige SIEMPRE, el botón estará habilitado siempre, incluso si el usuario no tiene permisos de SUBIDA)',
	'Show_Slideshow' => 'Habilitar la característica diapositiva',
	'Show_Slideshow_Script' => 'Habilitar los efectos de transición para las diapositivas',
	'Show_Pic_Size' => 'Mostrar el tamaño de las miniaturas',
	'Show_IMG_No_GD' => 'Mostrar miniaturas de los GIF sin usar librerías GD (las imágenes completas son cargadas y luego mostradas con el tamaño modificado).',
	'Show_GIF_MidThumb' => 'Mostrar imágenes GIF completas si las miniaturas medias estan habilitadas.',
	'Show_Pics_Nav' => 'Mostrar la caja de navegación de cuadros en la página de imágenes',
	'Invert_Nav_Arrows' => 'Invertir las flechas en la página (Flecha derecha = más reciente)',
	'Show_Inline_Copyright' => 'Mostrar la información de copyrights en una línea simple',
	'Enable_Nuffimage' => 'Habilitar la página de efectos especiales de cuadros basados en la clase de imágenes nuffmon',
	'Enable_Sepia_BW' => 'Habilitar sepia y B&W (blanco y negro) en la página de efectos especiales (deshabilite esta función si no quiere cargar la CPU de su servidor)',
	'Show_EXIF_Info' => 'Mostrar información EXIF de la imagen',
	'Set_Memory' => 'Fijar un límite de la memoria a través del PHP (MB)',
	'Set_Memory_Explain' => 'Esta característica se puede utilizar para aumentar el límite de memoria PHP (esta característica tiene que estar permitida en su servidor): puede incrementar la memoria cuando sus imágenes no se carguen correctamente. Evite poner límites de memoria superiores a 16 MB',
	'LB_Preview' => 'Habilitar previsualización LightBox',
	'LB_Preview_Explain' => 'Esta característica mostrará las imágenes con un efecto LightBox cuando pase el ratón por encima de la miniatura.',
	'Album_config_notice' => 'Si cambia la configuración del álbum de fotos actual y despues selecciona otro, se le pedirá guardar los cambios.<br />El sistema <b>no guardará</b> los cambios automáticamente.',
	'Save_sucessfully_confimation' => '%s fue guardado correctamente',
	'Show_Recent_In_Subcats' => 'Mostrar las imágenes recientes en sub categorías',
	'Show_Recent_Instead_of_NoPics' => 'Mostrar las imágenes recientes en vez del mensaje de no hay imágenes nuevas',
	'Show_Last_Comments' => 'Ver los últimos comentarios en el índice del álbum y en las categorías',
	'Album_Index_Settings' => 'Indice del álbum',
	'Album_Index_Page_Settings' => 'Configuraciones del índice del álbum',
	'Show_Index_Subcats' => 'Mostrar sub categorías en la tabla índice',
	'Show_Index_Thumb' => 'Mostrar las miniaturas de las categorías en la tabla índice',
	'Show_Index_Pics' => 'Mostrar el número de imágenes de la categoría actual en la tabla índice',
	'Show_Index_Comments' => 'Mostrar el número de comentarios de la categoría actual en la tabla índice',
	'Show_Index_Total_Pics' => 'Mostrar el número total de imágenes en las categorías actuales y en todas sus sub categorías en la tabla índice',
	'Show_Index_Total_Comments' => 'Mostrar el número total de comentarios en las categorías actuales y en todas sus sub categorías en la tabla índice',
	'Show_Index_Last_Comment' => 'Mostrar los últimos comentarios en las categorías actuales y en todas sus sub categorías en la tabla índice',
	'Show_Index_Last_Pic' => 'Mostrar las últimas imágenes en las categorías actuales y en todas sus sub categorías en la tabla índice',
	'Line_Break_Subcats' => 'Mostrar cada sub categoría en una nueva línea',
	'Show_Personal_Gallery_Link' => 'Mostrar los enlaces de la galería personal y de las galerías personales de los usuarios en sub categorías',
	'Album_Personal_Auth_Explain' => 'Aquí puede elegir qué grupo de usuarios pueden ser moderadores para <b>todas</b> las categorías personales del álbum, o si sólo tienen acceso privado a ellas',
	'Album_debug_mode' => 'Habilitar el modo debug de jerarquías.<br /><span class="gensmall">Esto generará varias salidas extras en la página y, además, algunas ventanas de advertencia acerca de que están todas correctas.<br />Esta opción debería ser usada <b>solamente</b> cuando se tienen problemas.</span>',
	'New_Pic_Check_Interval' => 'El tiempo para ver si una imagen es nueva no.<br /><span class="gensmall"><b>Formatear</b> : &lt;número&gt;&lt;tipo&gt; donde el tipo es  h, d, s o m (hora, día, semana o mes)<br /> e.j. 12H = 12 horas, 12D = 12 días, 12S = 12semanas, y 12M = 12 meses.<br />Si no se especifica el tipo, el sistema usará <b>días</b></span>',
	'New_Pic_Check_Interval_Desc' => '<span class="gensmall">H = HORAS, D = DÍAS, S = SEMANAS, M = MESES</span>',
	'New_Pic_Check_Interval_LV' => 'Habilitando esta opción el conteo de nuevas imágenes se basa en la última visita del usuario.',
	'Enable_Show_All_Pics' => 'Habilitar toggling del modo vista de la galería personal (todas las imágenes o sólo la categoría seleccionada).<br /> Cuando está seleccionado <b>no</b>, solo se muestran las categorías selecionadas.',
	'Enable_Index_Supercells' => 'Habilitar supercelda en la tabla índice. <br /><span class="gensmall">Esto habilitará el efecto mouseover en las columnas, también conocido como efecto supercelda.</span>',
	'Show_OTF_Link' => 'Mostrar enlace a "Álbum OTF" en el índice del álbum',
	'Show_AllPics_Link' => 'Mostrar enlace a "Todas las imágenes" en el índice del álbum',
	'Show_PG_Link' => 'Mostrar enlace a "Galería personal" en el índice del álbum',

// 02 - Personal Galleries
	'Personal_Galleries' => 'Galerías personales',
	'Album_personal_gallery_title' => 'Galería personal',
	'Album_personal_gallery_explain' => 'En esta página puede escoger qué grupos tienen permisos para crear y ver las galerías personales. Estas configuraciones sólo funcionan cuando se selecciona "PRIVADO" en "Permitir crear galerías personales para usuarios" o "Quién puede ver las galerías personales".',
	'Album_personal_successfully' => 'La configuración se ha actualizado.',
	'Click_return_album_personal' => 'Pulse %saquí%s para volver a la configuración de las galerías personales',
	'Allow_Album_Avatars' => 'Permitir a los usuarios usar una imagen enviada al álbum como avatar',
	'Album_Personal_Settings' => 'Galería personal',
	'Show_Personal_Sub_Cats' => 'Mostrar las sub categorías personales  en la tabla índice',
	'Personal_Gallery_Approval' => 'Las muestras de las galerías personales deben ser aprobadas por los administradores',
	'Personal_Gallery_MOD' => 'La galería personal puede ser moderada por el propietario',
	'Personal_Sub_Cat_Limit' => 'Número máximo de sub categorías (-1 = ilimitado)',
	'User_Can_Create_Personal_SubCats' => 'Los usuarios pueden crear sub categorías en sus galerías personales',
	'Click_return_personal_gallery_index' => 'Pulse %saquí%s para regresar al inicio de la galería personal',
	'Show_Recent_In_Personal_Subcats' => 'Mostrar las imágenes recientes en las sub categorías personales',
	'Show_Recent_Instead_of_Personal_NoPics' => 'Mostrar las imágenes recientes en vez del mensaje de no hay imágenes nuevas en la galería personal',

// 03 - Categories
	'Categories' => 'Categorías',
	'Album_Categories_Title' => 'Categorías del álbum',
	'Album_Categories_Explain' => 'Aquí podrá gestionar sus categorías: crear, modificar, borrar...',
	'Category_Permissions' => 'Permisos de las categorías',
	'Category_Title' => 'Título de la categoría',
	'Category_Desc' => 'Descripción de la categoría',
	'View_level' => 'Mostrar nivel',
	'Upload_level' => 'Subir nivel',
	'Rate_level' => 'Puntuar nivel',
	'Comment_level' => 'Comentar nivel',
	'Edit_level' => 'Editar nivel',
	'Delete_level' => 'Borrar nivel',
	'New_category_created' => 'La nueva categoría se ha creado correctamente.',
	'Click_return_album_category' => 'Pulse %saquí%s para volver a las categorías del álbum',
	'Category_updated' => 'La categoría se ha actualizado.',
	'Delete_Category' => 'Borrar categoría',
	'Delete_Category_Explain' => 'El formulario siguiente permite borrar una categoría y decidir dónde quiere poner las fotos que contenía.',
	'Delete_all_pics' => 'Borrar todas las fotos',
	'Category_deleted' => 'La categoría se ha borrado correctamente.',
	'Category_changed_order' => 'Se ha cambiado el orden de la categoría correctamente.',
	'Personal_Root_Gallery' => 'Categoría raíz de la galería personal',
	'Parent_Category' => 'Categoría primaria (para esta categoría)',
	'Child_Category_Moved' => 'La categoría seleccionada tiene categorías secundarias. Las categorías secundarias han sido movidas a la categoría <B>%s</B>.',
	'No_Self_Refering_Cat' => 'No puede seleccionar una categoría como primaria para sí misma',
	'Can_Not_Change_Main_Parent' => 'No puede cambiar a primaria la categoría principal de su galería personal',
	'Watermark' => 'Marca de agua (WaterMark)',
	'Watermark_explain' => 'Usted puede especificar el archivo de marca de agua (watermark file) usando esta categoría. Inserte la ruta del de su archivo de marca de agua respecto su Icy Phoenix (Ejemplo: <b>album_mod/mark_fap.png</b>). La marca de agua se aplicará sólo la característica marca de agua (Watermark) está activada.',
	'Cat_Pics_Synchronize' => 'Sincronizar contador de imágenes',
	'Cat_Pics_Synchronized' => 'Todos los contadores de imágenes han sido sincronizados.',

// 04 - Permissions
	'Album_Auth_Title' => 'Permisos del álbum',
	'Album_Auth_Explain' => 'Aquí puede elegir qué grupo/s puede/n moderar cada categoría del álbum o si simplemente tienen acceso privado.',
	'Select_a_Category' => 'Seleccionar una categoría',
	'Look_up_Category' => 'Buscar una categoría',
	'Album_Auth_successfully' => 'Autorizaciones actualizadas correctamente.',
	'Click_return_album_auth' => 'Pulse %saquí%s para volver a los permisos del álbum.',
	'Upload' => 'Subir',
	'Rate' => 'Valorar',
	'Comment' => 'Comentar',

// 05 - Thumbnails
	'Use_Old_Thumbnails' => 'Utilizar las funciones viejas de las miniaturas',
	'Use_Old_Thumbnails_Explain' => 'Si activa esta característica, utilizará la función vieja de las miniaturas para generar pequeñas y medianas miniaturas, lo que acelera la subida de imágenes. Puede usar esta función solo si tiene problemas cuando esta opción no esta activa.',

// 06 - Sorting
	'Album_Category_Sorting' => 'Clase de las categorías de álbum',
	'Album_Category_Sorting_Id' => 'ID',
	'Album_Category_Sorting_Name' => 'Nombre',
	'Album_Category_Sorting_Order' => 'Orden de clase (default)',
	'Album_Category_Sorting_Direction' => 'Ordenar por (solo valido por ID y nombre)',
	'Album_Category_Sorting_Asc' => 'Ascendente',
	'Album_Category_Sorting_Desc' => 'Descendente',

// 07 - Clear Cache
	'Clear_Cache_Tab' => 'Caché',
	'Clear_Cache' => 'Borrar caché',
	'Album_clear_cache_confirm' => 'Si usa la caché debe borrarla después de efectuar cambios en la configuración del álbum.<br /><br /> ¿Quiere borrarla ahora?',
	'Thumbnail_cache_cleared_successfully' => '<br />Su caché se ha borrado correctamente.<br />&nbsp;',

// ACP - Javascript text
	'acp_ask_save_changes' => '¿Quiere guardar los cambios?\n(OK = Si, Cancel = No)',
	'acp_nothing_to_save' => 'Nada para guardar!',
	'acp_settings_changed_ask_save' => 'Ha cambiado la configuración. ¿Quiere guardarla?\n(OK = Si, Cancel = No)',

// GD Info
	'GD_Info' => 'Información GD',
	'GD_Title' => 'Información GD',
	'GD_Description' => 'Aquí puede informarse acerca de la librería libreria GD que tiene actuialmente instalada',
	'GD_Version' => 'Versión:',
	'GD_Freetype_Support' => 'Soporte fuentes freetype:',
	'GD_Freetype_Linkage' => 'Enlace tipo freetype:',
	'GD_T1lib_Support' => 'Soporte t1lib:',
	'GD_Gif_Read_Support' => 'Soporte de lectura gif:',
	'GD_Gif_Create_Support' => 'Soporte de creación gif:',
	'GD_Jpg_Support' => 'Soporte jpg/jpeg:',
	'GD_Png_Support' => 'Soporte png:',
	'GD_Wbmp_Support' => 'Soporte WBMP:',
	'GD_XBM_Support' => 'Soporte XBM:',
	'GD_Jis_Mapped_Support' => 'Soporte fuente japonesa:',
	'GD_True' => 'Sí',
	'GD_False' => 'No',

// Multiple Uploads Admin configuration
	'Upload_Settings' => 'Subida',
	'Max_Files_To_Upload' => 'Número máximo de archivos que puede subir a la vez',
	'Album_upload_settings' => 'Configuración de subida de fotos',
	'Max_pregenerated_fields' => 'Número máximo de formularios para pregenerar',
	'Dynamic_field_generation' => 'Activar función automática de adición de formularios para subir',
	'Pre_generate_fields' => 'Pregenerar el formulario para subir',
	'Propercase_pic_title' => 'Corregir uso de MAYÚSCULAS y minúsculas en el título ej: <i>\'este es un ejemplo\'</i><br />Estableciendo esto en \'NO\' dará como resultado <i>\'esto es un ejemplo\'.</i>',
	'Pic_Resampling' => 'Habilitando esta opción, cada imagen será modificada en tamaño durante la navegación si es necesario (para mantener las propiedades de la imagen de acuerdo a la configuración del álbum en el ACP).',
	'Max_file_size_resampling' => 'Tamaño máximo del archivo antes de la modificación de tamaño del mismo (bytes)',

// CLowN
	'SP_Album_config' => 'CLowN SP',
	'SP_Album_config_explain' => 'Aquí puede configurar algunas opciones para el paquete de servicio del álbum',
	'SP_Album_sp_general' => 'Configuración general',
	'SP_Album_sp_watermark' => 'Configuración de marca de agua',
	'SP_Album_sp_hotornot' => 'Caliente o no configurado',
	'SP_Rate_type' => 'Selecionar el tipo de valoración para la imagen',
	'SP_Rate_type_0' => 'Imágenes solamente',
	'SP_Rate_type_1' => 'Números solamente',
	'SP_Rate_type_2' => 'Números e imágenes',
	'SP_Display_latest' => 'Mostrar las últimas imágenes publicadas',
	'SP_Display_highest' => 'Mostrar las imágenes mejor valoradas',
	'SP_Display_most_viewed' => 'Mostrar las imágenes más vistas',
	'SP_Display_random' => 'Mostrar bloques de imágenes aleatorias',
	'SP_Pic_row' => 'Número de filas de imágenes en la vista previa',
	'SP_Pic_col' => 'Número de columnas de imágenes en la vista previa',
	'SP_Midthumb_use' => 'Usar miniatura media',
	'SP_Midthumb_cache' => 'Habilitar captura de miniatura media',
	'SP_Midthumb_high' => 'Altura de la miniatura media (píxeles)',
	'SP_Midthumb_width' => 'Ancho de la miniatura media (píxeles)',
	'SP_Watermark' => 'Usar marca de agua',
	'SP_Watermark_users' => 'Mostrar marca de agua para todos los usuarios. Si \'No\', sólo mostrarla a los usuarios no registrados',
	'SP_Watermark_placent' => 'Posición de marca de agua en la imagen',
	'SP_Hon_already_rated' => 'Valoración ilimitada en caliente o no en la página',
	'SP_Hon_sep_rating' => 'Guardar el rango de ¿Caliente? en una tabla separada',
	'SP_Hon_where' => '¿Mostrar imágenes ¿Caliente? de qué categorías? (dejar en blanco para usar imágenes de todas las categorías; si son mas de una, separarlas por comas)',
	'SP_Hon_users' => 'Los usuarios no registrados pueden valorar',

	'SP_Disabled' => 'Deshabilitado',
	'SP_Enabled' => 'Habilitado',
	'SP_Yes' => 'Sí',
	'SP_No' => 'No',
	'SP_Always' => 'Siempre',
	'SP_Submit' => 'Enviar',
	'SP_Reset' => 'Actualizar',

// Nuffload
	'Nuffload_Config' => 'Configuración nuffload',
	'Enable_Nuffload' => 'Habilitar nuffload',
	'Enable_Nuffload_Explain' => 'Habilitando esta opción, nuffload se usará en vez de la forma común de subida.',
	'progress_bar_configuration' => 'Configuración de barra de progreso nuffload -',
	'perl_uploader' => 'Habilitar subida perl',
	'path_to_bin' => 'Ruta de la raíz del Icy Phoenix al cgi-bin (p.e., <b>./cgi-bin/</b> si tiene phpBB en un sub-directorio)',
	'show_progress_bar' => 'Mostrar la barra de progreso para las subidas',
	'close_progress_bar' => 'Cerrar la barra de progreso al terminar',
	'activity_timeout' => 'Tiempo fuera de actividad (segs.)',
	'simple_format' => 'Utilice el formato simple para la barra del progreso',
	'multiple_uploads_configuration' => 'Configuración de subida múltiple nuffload',
	'multiple_uploads' => 'Habilitar subidas múltiples',
	'max_uploads' => 'Campos máximos de la subida',
	'zip_uploads' => 'Habilitar subidas ZIP',
	'image_resizing_configuration' => 'Configuración de la modificación de tamaño de imágenes nuffload',
	'image_resizing' => 'Habilitar la modificación de tamaño de las imágenes',
	'image_width' => 'Ancho de la imagen',
	'image_height' => 'Alto de la imagen',
	'image_quality' => 'Calidad de la imagen',
	)
);
?>