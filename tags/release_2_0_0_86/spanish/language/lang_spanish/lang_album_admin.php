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
// 01 - Configuration
	'Album_config' => 'Configurar &aacute;lbum',
	'Album_config_explain' => 'Aqu&iacute; puede cambiar la configuraci&oacute;n del &aacute;lbum de fotos.',
	'Album_config_updated' => 'La configuraci&oacute;n del &aacute;lbum se ha actualizado.',
	'Click_return_album_config' => 'Pulse %saqu&iacute;%s para volver a la configuraci&oacute;n del &aacute;lbum.',
	'Max_pics' => 'N&uacute;mero m&aacute;ximo de fotos por categor&iacute;a (-1 = ilimitado)',
	'User_pics_limit' => 'L&iacute;mite por categor&iacute;a y usuario (-1 = ilimitado)',
	'Moderator_pics_limit' => 'L&iacute;mite por categor&iacute;a y moderador (-1 = ilimitado)',
	'Pics_Approval' => 'Aprobaci&oacute;n de fotos',
	'Rows_per_page' => 'N&uacute;mero de filas en la p&aacute;gina',
	'Cols_per_page' => 'N&uacute;mero de columnas en la p&aacute;gina',
	'Thumbnail_quality' => 'Calidad de la miniatura (1-100)',
	'Thumbnail_cache' => 'Cach&eacute; de la miniatura',
	'Manual_thumbnail' => 'Manual de las miniaturas',
	'GD_version' => 'Optimizar para la versi&oacute;n de GD',
	'Pic_Desc_Max_Length' => 'Descripci&oacute;n/comentario de foto m&aacute;xima longitud (bytes)',
	'Hotlink_prevent' => 'Prevenci&oacute;n de hotlink',
	'Hotlink_allowed' => 'Excluir a los siguientes dominios del hotlink (separados por comas)',
	'Personal_gallery' => 'Permitir crear galer&iacute;as personales para usuarios',
	'Personal_gallery_limit' => 'L&iacute;mite de fotos para cada galer&iacute;a personal (-1 = ilimitado)',
	'Personal_gallery_view' => 'Qui&eacute;n puede ver las galer&iacute;as personales',
	'Rate_system' => 'Habilitar sistema de puntuaci&oacute;n',
	'Rate_Scale' => 'Escala de puntuaci&oacute;n',
	'Comment_system' => 'Habilitar sistema de comentarios',
	'Thumbnail_Settings' => 'Configuraci&oacute;n de las miniaturas',
	'Quick_Thumbnails' => 'Miniaturas r&aacute;pidas',
	'Quick_Thumbnails_explain' => 'Activando esta opci&oacute;n el sistema revisar&aacute; si han sido generadas las miniaturas, e intentar&aacute; enviarla directamente al navegador. Esto acelerar&aacute; la velocidad de generaci&oacute;n de las miniaturas cuando observa categor&iacute;as.',
	'Extra_Settings' => 'Configuraci&oacute;n extra',
	'Default_Sort_Method' => 'M&eacute;todo por defecto de clasificar',
	'Default_Sort_Order' => 'Orden por defecto de clasificar',
	'Fullpic_Popup' => 'Ver foto entera en un popup',
	'Email_Notification' => 'Habilitar notificaci&oacute;n por correo para las im&aacute;genes nuevas del &aacute;lbum (s&oacute;lo a los admin.)',
	'Show_Download' => 'Mostrar el bot&oacute;n de DESCARGAS (que habilita la descarga de im&aacute;genes en formato ZIP) a s&oacute;lo aquellos que tienen permisos de SUBIDA en el &aacute;lbum (si elige SIEMPRE, el bot&oacute;n estar&aacute; habilitado siempre, incluso si el usuario no tiene permisos de SUBIDA)',
	'Show_Slideshow' => 'Habilitar la caracter&iacute;stica diapositiva',
	'Show_Slideshow_Script' => 'Habilitar los efectos de transici&oacute;n para las diapositivas',
	'Show_Pic_Size' => 'Mostrar el tama&ntilde;o de las miniaturas',
	'Show_IMG_No_GD' => 'Mostrar miniaturas de los GIF sin usar librer&iacute;as GD (las im&aacute;genes completas son cargadas y luego mostradas con el tama&ntilde;o modificado).',
	'Show_GIF_MidThumb' => 'Mostrar im&aacute;genes GIF completas si las miniaturas medias estan habilitadas.',
	'Show_Pics_Nav' => 'Mostrar la caja de navegaci&oacute;n de cuadros en la p&aacute;gina de im&aacute;genes',
	'Invert_Nav_Arrows' => 'Invertir las flechas en la p&aacute;gina (Flecha derecha = m&aacute;s reciente)',
	'Show_Inline_Copyright' => 'Mostrar la informaci&oacute;n de copyrights en una l&iacute;nea simple',
	'Enable_Nuffimage' => 'Habilitar la p&aacute;gina de efectos especiales de cuadros basados en la clase de im&aacute;genes nuffmon',
	'Enable_Sepia_BW' => 'Habilitar sepia y B&W (blanco y negro) en la p&aacute;gina de efectos especiales (deshabilite esta funci&oacute;n si no quiere cargar la CPU de su servidor)',
	'Show_EXIF_Info' => 'Mostrar informaci&oacute;n EXIF de la imagen',
	'Set_Memory' => 'Fijar un l&iacute;mite de la memoria a trav&eacute;s del PHP (MB)',
	'Set_Memory_Explain' => 'Esta caracter&iacute;stica se puede utilizar para aumentar el l&iacute;mite de memoria PHP (esta caracter&iacute;stica tiene que estar permitida en su servidor): puede incrementar la memoria cuando sus im&aacute;genes no se carguen correctamente. Evite poner l&iacute;mites de memoria superiores a 16 MB',
	'LB_Preview' => 'Habilitar previsualizaci&oacute;n LightBox',
	'LB_Preview_Explain' => 'Esta caracter&iacute;stica mostrar&aacute; las im&aacute;genes con un efecto LightBox cuando pase el rat&oacute;n por encima de la miniatura.',
	'Album_config_notice' => 'Si cambia la configuraci&oacute;n del &aacute;lbum de fotos actual y despues selecciona otro, se le pedir&aacute; guardar los cambios.<br />El sistema <b>no guardar&aacute;</b> los cambios autom&aacute;ticamente.',
	'Save_sucessfully_confimation' => '%s fue guardado correctamente',
	'Show_Recent_In_Subcats' => 'Mostrar las im&aacute;genes recientes en sub categor&iacute;as',
	'Show_Recent_Instead_of_NoPics' => 'Mostrar las im&aacute;genes recientes en vez del mensaje de no hay im&aacute;genes nuevas',
	'Show_Last_Comments' => 'Ver los &uacute;ltimos comentarios en el &iacute;ndice del &aacute;lbum y en las categor&iacute;as',
	'Album_Index_Settings' => 'Indice del &aacute;lbum',
	'Album_Index_Page_Settings' => 'Configuraciones del &iacute;ndice del &aacute;lbum',
	'Show_Index_Subcats' => 'Mostrar sub categor&iacute;as en la tabla &iacute;ndice',
	'Show_Index_Thumb' => 'Mostrar las miniaturas de las categor&iacute;as en la tabla &iacute;ndice',
	'Show_Index_Pics' => 'Mostrar el n&uacute;mero de im&aacute;genes de la categor&iacute;a actual en la tabla &iacute;ndice',
	'Show_Index_Comments' => 'Mostrar el n&uacute;mero de comentarios de la categor&iacute;a actual en la tabla &iacute;ndice',
	'Show_Index_Total_Pics' => 'Mostrar el n&uacute;mero total de im&aacute;genes en las categor&iacute;as actuales y en todas sus sub categor&iacute;as en la tabla &iacute;ndice',
	'Show_Index_Total_Comments' => 'Mostrar el n&uacute;mero total de comentarios en las categor&iacute;as actuales y en todas sus sub categor&iacute;as en la tabla &iacute;ndice',
	'Show_Index_Last_Comment' => 'Mostrar los &uacute;ltimos comentarios en las categor&iacute;as actuales y en todas sus sub categor&iacute;as en la tabla &iacute;ndice',
	'Show_Index_Last_Pic' => 'Mostrar las &uacute;ltimas im&aacute;genes en las categor&iacute;as actuales y en todas sus sub categor&iacute;as en la tabla &iacute;ndice',
	'Line_Break_Subcats' => 'Mostrar cada sub categor&iacute;a en una nueva l&iacute;nea',
	'Show_Personal_Gallery_Link' => 'Mostrar los enlaces de la galer&iacute;a personal y de las galer&iacute;as personales de los usuarios en sub categor&iacute;as',
	'Album_Personal_Auth_Explain' => 'Aqu&iacute; puede elegir qu&eacute; grupo de usuarios pueden ser moderadores para <b>todas</b> las categor&iacute;as personales del &aacute;lbum, o si s&oacute;lo tienen acceso privado a ellas',
	'Album_debug_mode' => 'Habilitar el modo debug de jerarqu&iacute;as.<br /><span class="gensmall">Esto generar&aacute; varias salidas extras en la p&aacute;gina y, adem&aacute;s, algunas ventanas de advertencia acerca de que est&aacute;n todas correctas.<br />Esta opci&oacute;n deber&iacute;a ser usada <b>solamente</b> cuando se tienen problemas.</span>',
	'New_Pic_Check_Interval' => 'El tiempo para ver si una imagen es nueva no.<br /><span class="gensmall"><b>Formatear</b> : &lt;n&uacute;mero&gt;&lt;tipo&gt; donde el tipo es  h, d, s o m (hora, d&iacute;a, semana o mes)<br /> e.j. 12H = 12 horas, 12D = 12 d&iacute;as, 12S = 12semanas, y 12M = 12 meses.<br />Si no se especifica el tipo, el sistema usar&aacute; <b>d&iacute;as</b></span>',
	'New_Pic_Check_Interval_Desc' => '<span class="gensmall">H = HORAS, D = D&Iacute;AS, S = SEMANAS, M = MESES</span>',
	'New_Pic_Check_Interval_LV' => 'Habilitando esta opci&oacute;n el conteo de nuevas im&aacute;genes se basa en la &uacute;ltima visita del usuario.',
	'Enable_Show_All_Pics' => 'Habilitar toggling del modo vista de la galer&iacute;a personal (todas las im&aacute;genes o s&oacute;lo la categor&iacute;a seleccionada).<br /> Cuando est&aacute; seleccionado <b>no</b>, solo se muestran las categor&iacute;as selecionadas.',
	'Enable_Index_Supercells' => 'Habilitar supercelda en la tabla &iacute;ndice. <br /><span class="gensmall">Esto habilitar&aacute; el efecto mouseover en las columnas, tambi&eacute;n conocido como efecto supercelda.</span>',
	'Show_OTF_Link' => 'Mostrar enlace a "&Aacute;lbum OTF" en el &iacute;ndice del &aacute;lbum',
	'Show_AllPics_Link' => 'Mostrar enlace a "Todas las im&aacute;genes" en el &iacute;ndice del &aacute;lbum',
	'Show_PG_Link' => 'Mostrar enlace a "Galer&iacute;a personal" en el &iacute;ndice del &aacute;lbum',

// 02 - Personal Galleries
	'Personal_Galleries' => 'Galer&iacute;as personales',
	'Album_personal_gallery_title' => 'Galer&iacute;a personal',
	'Album_personal_gallery_explain' => 'En esta p&aacute;gina puede escoger qu&eacute; grupos tienen permisos para crear y ver las galer&iacute;as personales. Estas configuraciones s&oacute;lo funcionan cuando se selecciona "PRIVADO" en "Permitir crear galer&iacute;as personales para usuarios" o "Qui&eacute;n puede ver las galer&iacute;as personales".',
	'Album_personal_successfully' => 'La configuraci&oacute;n se ha actualizado.',
	'Click_return_album_personal' => 'Pulse %saqu&iacute;%s para volver a la configuraci&oacute;n de las galer&iacute;as personales',
	'Allow_Album_Avatars' => 'Permitir a los usuarios usar una imagen enviada al &aacute;lbum como avatar',
	'Album_Personal_Settings' => 'Galer&iacute;a personal',
	'Show_Personal_Sub_Cats' => 'Mostrar las sub categor&iacute;as personales  en la tabla &iacute;ndice',
	'Personal_Gallery_Approval' => 'Las muestras de las galer&iacute;as personales deben ser aprobadas por los administradores',
	'Personal_Gallery_MOD' => 'La galer&iacute;a personal puede ser moderada por el propietario',
	'Personal_Sub_Cat_Limit' => 'N&uacute;mero m&aacute;ximo de sub categor&iacute;as (-1 = ilimitado)',
	'User_Can_Create_Personal_SubCats' => 'Los usuarios pueden crear sub categor&iacute;as en sus galer&iacute;as personales',
	'Click_return_personal_gallery_index' => 'Pulse %saqu&iacute;%s para regresar al inicio de la galer&iacute;a personal',
	'Show_Recent_In_Personal_Subcats' => 'Mostrar las im&aacute;genes recientes en las sub categor&iacute;as personales',
	'Show_Recent_Instead_of_Personal_NoPics' => 'Mostrar las im&aacute;genes recientes en vez del mensaje de no hay im&aacute;genes nuevas en la galer&iacute;a personal',

// 03 - Categories
	'Categories' => 'Categor&iacute;as',
	'Album_Categories_Title' => 'Categor&iacute;as del &aacute;lbum',
	'Album_Categories_Explain' => 'Aqu&iacute; podr&aacute; gestionar sus categor&iacute;as: crear, modificar, borrar...',
	'Category_Permissions' => 'Permisos de las categor&iacute;as',
	'Category_Title' => 'T&iacute;tulo de la categor&iacute;a',
	'Category_Desc' => 'Descripci&oacute;n de la categor&iacute;a',
	'View_level' => 'Mostrar nivel',
	'Upload_level' => 'Subir nivel',
	'Rate_level' => 'Puntuar nivel',
	'Comment_level' => 'Comentar nivel',
	'Edit_level' => 'Editar nivel',
	'Delete_level' => 'Borrar nivel',
	'New_category_created' => 'La nueva categor&iacute;a se ha creado correctamente.',
	'Click_return_album_category' => 'Pulse %saqu&iacute;%s para volver a las categor&iacute;as del &aacute;lbum',
	'Category_updated' => 'La categor&iacute;a se ha actualizado.',
	'Delete_Category' => 'Borrar categor&iacute;a',
	'Delete_Category_Explain' => 'El formulario siguiente permite borrar una categor&iacute;a y decidir d&oacute;nde quiere poner las fotos que conten&iacute;a.',
	'Delete_all_pics' => 'Borrar todas las fotos',
	'Category_deleted' => 'La categor&iacute;a se ha borrado correctamente.',
	'Category_changed_order' => 'Se ha cambiado el orden de la categor&iacute;a correctamente.',
	'Personal_Root_Gallery' => 'Categor&iacute;a ra&iacute;z de la galer&iacute;a personal',
	'Parent_Category' => 'Categor&iacute;a primaria (para esta categor&iacute;a)',
	'Child_Category_Moved' => 'La categor&iacute;a seleccionada tiene categor&iacute;as secundarias. Las categor&iacute;as secundarias han sido movidas a la categor&iacute;a <B>%s</B>.',
	'No_Self_Refering_Cat' => 'No puede seleccionar una categor&iacute;a como primaria para s&iacute; misma',
	'Can_Not_Change_Main_Parent' => 'No puede cambiar a primaria la categor&iacute;a principal de su galer&iacute;a personal',
	'Watermark' => 'Marca de agua (WaterMark)',
	'Watermark_explain' => 'Usted puede especificar el archivo de marca de agua (watermark file) usando esta categor&iacute;a. Inserte la ruta del de su archivo de marca de agua respecto su Icy Phoenix (Ejemplo: <b>album_mod/mark_fap.png</b>). La marca de agua se aplicar&aacute; s&oacute;lo la caracter&iacute;stica marca de agua (Watermark) est&aacute; activada.',
	'Cat_Pics_Synchronize' => 'Sincronizar contador de im&aacute;genes',
	'Cat_Pics_Synchronized' => 'Todos los contadores de im&aacute;genes han sido sincronizados.',

// 04 - Permissions
	'Album_Auth_Title' => 'Permisos del &aacute;lbum',
	'Album_Auth_Explain' => 'Aqu&iacute; puede elegir qu&eacute; grupo/s puede/n moderar cada categor&iacute;a del &aacute;lbum o si simplemente tienen acceso privado.',
	'Select_a_Category' => 'Seleccionar una categor&iacute;a',
	'Look_up_Category' => 'Buscar una categor&iacute;a',
	'Album_Auth_successfully' => 'Autorizaciones actualizadas correctamente.',
	'Click_return_album_auth' => 'Pulse %saqu&iacute;%s para volver a los permisos del &aacute;lbum.',
	'Upload' => 'Subir',
	'Rate' => 'Valorar',
	'Comment' => 'Comentar',

// 05 - Thumbnails
	'Use_Old_Thumbnails' => 'Utilizar las funciones viejas de las miniaturas',
	'Use_Old_Thumbnails_Explain' => 'Si activa esta caracter&iacute;stica, utilizar&aacute; la funci&oacute;n vieja de las miniaturas para generar peque&ntilde;as y medianas miniaturas, lo que acelera la subida de im&aacute;genes. Puede usar esta funci&oacute;n solo si tiene problemas cuando esta opci&oacute;n no esta activa.',

// 06 - Sorting
	'Album_Category_Sorting' => 'Clase de las categor&iacute;as de &aacute;lbum',
	'Album_Category_Sorting_Id' => 'ID',
	'Album_Category_Sorting_Name' => 'Nombre',
	'Album_Category_Sorting_Order' => 'Orden de clase (default)',
	'Album_Category_Sorting_Direction' => 'Ordenar por (solo valido por ID y nombre)',
	'Album_Category_Sorting_Asc' => 'Ascendente',
	'Album_Category_Sorting_Desc' => 'Descendente',

// 07 - Clear Cache
	'Clear_Cache_Tab' => 'Cach&eacute;',
	'Clear_Cache' => 'Borrar cach&eacute;',
	'Album_clear_cache_confirm' => 'Si usa la cach&eacute; debe borrarla despu&eacute;s de efectuar cambios en la configuraci&oacute;n del &aacute;lbum.<br /><br /> &iquest;Quiere borrarla ahora?',
	'Thumbnail_cache_cleared_successfully' => '<br />Su cach&eacute; se ha borrado correctamente.<br />&nbsp;',

// ACP - Javascript text
	'acp_ask_save_changes' => '&iquest;Quiere guardar los cambios?\n(OK = Si, Cancel = No)',
	'acp_nothing_to_save' => 'Nada para guardar!',
	'acp_settings_changed_ask_save' => 'Ha cambiado la configuraci&oacute;n. &iquest;Quiere guardarla?\n(OK = Si, Cancel = No)',

// GD Info
	'GD_Info' => 'Informaci&oacute;n GD',
	'GD_Title' => 'Informaci&oacute;n GD',
	'GD_Description' => 'Aqu&iacute; puede informarse acerca de la librer&iacute;a libreria GD que tiene actuialmente instalada',
	'GD_Version' => 'Versi&oacute;n:',
	'GD_Freetype_Support' => 'Soporte fuentes freetype:',
	'GD_Freetype_Linkage' => 'Enlace tipo freetype:',
	'GD_T1lib_Support' => 'Soporte t1lib:',
	'GD_Gif_Read_Support' => 'Soporte de lectura gif:',
	'GD_Gif_Create_Support' => 'Soporte de creaci&oacute;n gif:',
	'GD_Jpg_Support' => 'Soporte jpg/jpeg:',
	'GD_Png_Support' => 'Soporte png:',
	'GD_Wbmp_Support' => 'Soporte WBMP:',
	'GD_XBM_Support' => 'Soporte XBM:',
	'GD_Jis_Mapped_Support' => 'Soporte fuente japonesa:',
	'GD_True' => 'S&iacute;',
	'GD_False' => 'No',

// Multiple Uploads Admin configuration
	'Upload_Settings' => 'Subida',
	'Max_Files_To_Upload' => 'N&uacute;mero m&aacute;ximo de archivos que puede subir a la vez',
	'Album_upload_settings' => 'Configuraci&oacute;n de subida de fotos',
	'Max_pregenerated_fields' => 'N&uacute;mero m&aacute;ximo de formularios para pregenerar',
	'Dynamic_field_generation' => 'Activar funci&oacute;n autom&aacute;tica de adici&oacute;n de formularios para subir',
	'Pre_generate_fields' => 'Pregenerar el formulario para subir',
	'Propercase_pic_title' => 'Corregir uso de MAY&Uacute;SCULAS y min&uacute;sculas en el t&iacute;tulo ej: <i>\'este es un ejemplo\'</i><br />Estableciendo esto en \'NO\' dar&aacute; como resultado <i>\'esto es un ejemplo\'.</i>',
	'Pic_Resampling' => 'Habilitando esta opci&oacute;n, cada imagen ser&aacute; modificada en tama&ntilde;o durante la navegaci&oacute;n si es necesario (para mantener las propiedades de la imagen de acuerdo a la configuraci&oacute;n del &aacute;lbum en el ACP).',
	'Max_file_size_resampling' => 'Tama&ntilde;o m&aacute;ximo del archivo antes de la modificaci&oacute;n de tama&ntilde;o del mismo (bytes)',

// CLowN
	'SP_Album_config' => 'CLowN SP',
	'SP_Album_config_explain' => 'Aqu&iacute; puede configurar algunas opciones para el paquete de servicio del &aacute;lbum',
	'SP_Album_sp_general' => 'Configuraci&oacute;n general',
	'SP_Album_sp_watermark' => 'Configuraci&oacute;n de marca de agua',
	'SP_Album_sp_hotornot' => 'Caliente o no configurado',
	'SP_Rate_type' => 'Selecionar el tipo de valoraci&oacute;n para la imagen',
	'SP_Rate_type_0' => 'Im&aacute;genes solamente',
	'SP_Rate_type_1' => 'N&uacute;meros solamente',
	'SP_Rate_type_2' => 'N&uacute;meros e im&aacute;genes',
	'SP_Display_latest' => 'Mostrar las &uacute;ltimas im&aacute;genes publicadas',
	'SP_Display_highest' => 'Mostrar las im&aacute;genes mejor valoradas',
	'SP_Display_most_viewed' => 'Mostrar las im&aacute;genes m&aacute;s vistas',
	'SP_Display_random' => 'Mostrar bloques de im&aacute;genes aleatorias',
	'SP_Pic_row' => 'N&uacute;mero de filas de im&aacute;genes en la vista previa',
	'SP_Pic_col' => 'N&uacute;mero de columnas de im&aacute;genes en la vista previa',
	'SP_Midthumb_use' => 'Usar miniatura media',
	'SP_Midthumb_cache' => 'Habilitar captura de miniatura media',
	'SP_Midthumb_high' => 'Altura de la miniatura media (p&iacute;xeles)',
	'SP_Midthumb_width' => 'Ancho de la miniatura media (p&iacute;xeles)',
	'SP_Watermark' => 'Usar marca de agua',
	'SP_Watermark_users' => 'Mostrar marca de agua para todos los usuarios. Si \'No\', s&oacute;lo mostrarla a los usuarios no registrados',
	'SP_Watermark_placent' => 'Posici&oacute;n de marca de agua en la imagen',
	'SP_Hon_already_rated' => 'Valoraci&oacute;n ilimitada en caliente o no en la p&aacute;gina',
	'SP_Hon_sep_rating' => 'Guardar el rango de &iquest;Caliente? en una tabla separada',
	'SP_Hon_where' => '&iquest;Mostrar im&aacute;genes &iquest;Caliente? de qu&eacute; categor&iacute;as? (dejar en blanco para usar im&aacute;genes de todas las categor&iacute;as; si son mas de una, separarlas por comas)',
	'SP_Hon_users' => 'Los usuarios no registrados pueden valorar',

	'SP_Disabled' => 'Deshabilitado',
	'SP_Enabled' => 'Habilitado',
	'SP_Yes' => 'S&iacute;',
	'SP_No' => 'No',
	'SP_Always' => 'Siempre',
	'SP_Submit' => 'Enviar',
	'SP_Reset' => 'Actualizar',

// Nuffload
	'Nuffload_Config' => 'Configuraci&oacute;n nuffload',
	'Enable_Nuffload' => 'Habilitar nuffload',
	'Enable_Nuffload_Explain' => 'Habilitando esta opci&oacute;n, nuffload se usar&aacute; en vez de la forma com&uacute;n de subida.',
	'progress_bar_configuration' => 'Configuraci&oacute;n de barra de progreso nuffload -',
	'perl_uploader' => 'Habilitar subida perl',
	'path_to_bin' => 'Ruta de la ra&iacute;z del Icy Phoenix al cgi-bin (p.e., <b>./cgi-bin/</b> si tiene phpBB en un sub-directorio)',
	'show_progress_bar' => 'Mostrar la barra de progreso para las subidas',
	'close_progress_bar' => 'Cerrar la barra de progreso al terminar',
	'activity_timeout' => 'Tiempo fuera de actividad (segs.)',
	'simple_format' => 'Utilice el formato simple para la barra del progreso',
	'multiple_uploads_configuration' => 'Configuraci&oacute;n de subida m&uacute;ltiple nuffload',
	'multiple_uploads' => 'Habilitar subidas m&uacute;ltiples',
	'max_uploads' => 'Campos m&aacute;ximos de la subida',
	'zip_uploads' => 'Habilitar subidas ZIP',
	'image_resizing_configuration' => 'Configuraci&oacute;n de la modificaci&oacute;n de tama&ntilde;o de im&aacute;genes nuffload',
	'image_resizing' => 'Habilitar la modificaci&oacute;n de tama&ntilde;o de las im&aacute;genes',
	'image_width' => 'Ancho de la imagen',
	'image_height' => 'Alto de la imagen',
	'image_quality' => 'Calidad de la imagen',
	)
);
?>