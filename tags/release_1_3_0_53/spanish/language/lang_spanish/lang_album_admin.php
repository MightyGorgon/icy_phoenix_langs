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
	'Album_config' => 'Configurar �lbum',
	'Album_config_explain' => 'Aqu� puede cambiar la configuraci�n del �lbum de fotos.',
	'Album_config_updated' => 'La configuraci�n del �lbum se ha actualizado.',
	'Click_return_album_config' => 'Pulse %saqu�%s para volver a la configuraci�n del �lbum.',
	'Max_pics' => 'N�mero m�ximo de fotos por categor�a (-1 = ilimitado)',
	'User_pics_limit' => 'L�mite por categor�a y usuario (-1 = ilimitado)',
	'Moderator_pics_limit' => 'L�mite por categor�a y moderador (-1 = ilimitado)',
	'Pics_Approval' => 'Aprobaci�n de fotos',
	'Rows_per_page' => 'N�mero de filas en la p�gina',
	'Cols_per_page' => 'N�mero de columnas en la p�gina',
	'Thumbnail_quality' => 'Calidad de la miniatura (1-100)',
	'Thumbnail_cache' => 'Cach� de la miniatura',
	'Manual_thumbnail' => 'Manual de las miniaturas',
	'GD_version' => 'Optimizar para la versi�n de GD',
	'Pic_Desc_Max_Length' => 'Descripci�n/comentario de foto m�xima longitud (bytes)',
	'Hotlink_prevent' => 'Prevenci�n de hotlink',
	'Hotlink_allowed' => 'Excluir a los siguientes dominios del hotlink (separados por comas)',
	'Personal_gallery' => 'Permitir crear galer�as personales para usuarios',
	'Personal_gallery_limit' => 'L�mite de fotos para cada galer�a personal (-1 = ilimitado)',
	'Personal_gallery_view' => 'Qui�n puede ver las galer�as personales',
	'Rate_system' => 'Habilitar sistema de puntuaci�n',
	'Rate_Scale' => 'Escala de puntuaci�n',
	'Comment_system' => 'Habilitar sistema de comentarios',
	'Thumbnail_Settings' => 'Configuraci�n de las miniaturas',
	'Quick_Thumbnails' => 'Miniaturas r�pidas',
	'Quick_Thumbnails_explain' => 'Activando esta opci�n el sistema revisar� si han sido generadas las miniaturas, e intentar� enviarla directamente al navegador. Esto acelerar� la velocidad de generaci�n de las miniaturas cuando observa categor�as.',
	'Extra_Settings' => 'Configuraci�n extra',
	'Default_Sort_Method' => 'M�todo por defecto de clasificar',
	'Default_Sort_Order' => 'Orden por defecto de clasificar',
	'Fullpic_Popup' => 'Ver foto entera en un popup',
	'Email_Notification' => 'Habilitar notificaci�n por correo para las im�genes nuevas del �lbum (s�lo a los admin.)',
	'Show_Download' => 'Mostrar el bot�n de DESCARGAS (que habilita la descarga de im�genes en formato ZIP) a s�lo aquellos que tienen permisos de SUBIDA en el �lbum (si elige SIEMPRE, el bot�n estar� habilitado siempre, incluso si el usuario no tiene permisos de SUBIDA)',
	'Show_Slideshow' => 'Habilitar la caracter�stica diapositiva',
	'Show_Slideshow_Script' => 'Habilitar los efectos de transici�n para las diapositivas',
	'Show_Pic_Size' => 'Mostrar el tama�o de las miniaturas',
	'Show_IMG_No_GD' => 'Mostrar miniaturas de los GIF sin usar librer�as GD (las im�genes completas son cargadas y luego mostradas con el tama�o modificado).',
	'Show_GIF_MidThumb' => 'Mostrar im�genes GIF completas si las miniaturas medias estan habilitadas.',
	'Show_Pics_Nav' => 'Mostrar la caja de navegaci�n de cuadros en la p�gina de im�genes',
	'Invert_Nav_Arrows' => 'Invertir las flechas en la p�gina (Flecha derecha = m�s reciente)',
	'Show_Inline_Copyright' => 'Mostrar la informaci�n de copyrights en una l�nea simple',
	'Enable_Nuffimage' => 'Habilitar la p�gina de efectos especiales de cuadros basados en la clase de im�genes nuffmon',
	'Enable_Sepia_BW' => 'Habilitar sepia y B&W (blanco y negro) en la p�gina de efectos especiales (deshabilite esta funci�n si no quiere cargar la CPU de su servidor)',
	'Show_EXIF_Info' => 'Mostrar informaci�n EXIF de la imagen',
	'Set_Memory' => 'Fijar un l�mite de la memoria a trav�s del PHP (MB)',
	'Set_Memory_Explain' => 'Esta caracter�stica se puede utilizar para aumentar el l�mite de memoria PHP (esta caracter�stica tiene que estar permitida en su servidor): puede incrementar la memoria cuando sus im�genes no se carguen correctamente. Evite poner l�mites de memoria superiores a 16 MB',
	'LB_Preview' => 'Habilitar previsualizaci�n LightBox',
	'LB_Preview_Explain' => 'Esta caracter�stica mostrar� las im�genes con un efecto LightBox cuando pase el rat�n por encima de la miniatura.',
	'Album_config_notice' => 'Si cambia la configuraci�n del �lbum de fotos actual y despues selecciona otro, se le pedir� guardar los cambios.<br />El sistema <b>no guardar�</b> los cambios autom�ticamente.',
	'Save_sucessfully_confimation' => '%s fue guardado correctamente',
	'Show_Recent_In_Subcats' => 'Mostrar las im�genes recientes en sub categor�as',
	'Show_Recent_Instead_of_NoPics' => 'Mostrar las im�genes recientes en vez del mensaje de no hay im�genes nuevas',
	'Show_Last_Comments' => 'Ver los �ltimos comentarios en el �ndice del �lbum y en las categor�as',
	'Album_Index_Settings' => 'Indice del �lbum',
	'Album_Index_Page_Settings' => 'Configuraciones del �ndice del �lbum',
	'Show_Index_Subcats' => 'Mostrar sub categor�as en la tabla �ndice',
	'Show_Index_Thumb' => 'Mostrar las miniaturas de las categor�as en la tabla �ndice',
	'Show_Index_Pics' => 'Mostrar el n�mero de im�genes de la categor�a actual en la tabla �ndice',
	'Show_Index_Comments' => 'Mostrar el n�mero de comentarios de la categor�a actual en la tabla �ndice',
	'Show_Index_Total_Pics' => 'Mostrar el n�mero total de im�genes en las categor�as actuales y en todas sus sub categor�as en la tabla �ndice',
	'Show_Index_Total_Comments' => 'Mostrar el n�mero total de comentarios en las categor�as actuales y en todas sus sub categor�as en la tabla �ndice',
	'Show_Index_Last_Comment' => 'Mostrar los �ltimos comentarios en las categor�as actuales y en todas sus sub categor�as en la tabla �ndice',
	'Show_Index_Last_Pic' => 'Mostrar las �ltimas im�genes en las categor�as actuales y en todas sus sub categor�as en la tabla �ndice',
	'Line_Break_Subcats' => 'Mostrar cada sub categor�a en una nueva l�nea',
	'Show_Personal_Gallery_Link' => 'Mostrar los enlaces de la galer�a personal y de las galer�as personales de los usuarios en sub categor�as',
	'Album_Personal_Auth_Explain' => 'Aqu� puede elegir qu� grupo de usuarios pueden ser moderadores para <b>todas</b> las categor�as personales del �lbum, o si s�lo tienen acceso privado a ellas',
	'Album_debug_mode' => 'Habilitar el modo debug de jerarqu�as.<br /><span class="gensmall">Esto generar� varias salidas extras en la p�gina y, adem�s, algunas ventanas de advertencia acerca de que est�n todas correctas.<br />Esta opci�n deber�a ser usada <b>solamente</b> cuando se tienen problemas.</span>',
	'New_Pic_Check_Interval' => 'El tiempo para ver si una imagen es nueva no.<br /><span class="gensmall"><b>Formatear</b> : &lt;n�mero&gt;&lt;tipo&gt; donde el tipo es  h, d, s o m (hora, d�a, semana o mes)<br /> e.j. 12H = 12 horas, 12D = 12 d�as, 12S = 12semanas, y 12M = 12 meses.<br />Si no se especifica el tipo, el sistema usar� <b>d�as</b></span>',
	'New_Pic_Check_Interval_Desc' => '<span class="gensmall">H = HORAS, D = D�AS, S = SEMANAS, M = MESES</span>',
	'New_Pic_Check_Interval_LV' => 'Habilitando esta opci�n el conteo de nuevas im�genes se basa en la �ltima visita del usuario.',
	'Enable_Show_All_Pics' => 'Habilitar toggling del modo vista de la galer�a personal (todas las im�genes o s�lo la categor�a seleccionada).<br /> Cuando est� seleccionado <b>no</b>, solo se muestran las categor�as selecionadas.',
	'Enable_Index_Supercells' => 'Habilitar supercelda en la tabla �ndice. <br /><span class="gensmall">Esto habilitar� el efecto mouseover en las columnas, tambi�n conocido como efecto supercelda.</span>',
	'Show_OTF_Link' => 'Mostrar enlace a "�lbum OTF" en el �ndice del �lbum',
	'Show_AllPics_Link' => 'Mostrar enlace a "Todas las im�genes" en el �ndice del �lbum',
	'Show_PG_Link' => 'Mostrar enlace a "Galer�a personal" en el �ndice del �lbum',

// 02 - Personal Galleries
	'Personal_Galleries' => 'Galer�as personales',
	'Album_personal_gallery_title' => 'Galer�a personal',
	'Album_personal_gallery_explain' => 'En esta p�gina puede escoger qu� grupos tienen permisos para crear y ver las galer�as personales. Estas configuraciones s�lo funcionan cuando se selecciona "PRIVADO" en "Permitir crear galer�as personales para usuarios" o "Qui�n puede ver las galer�as personales".',
	'Album_personal_successfully' => 'La configuraci�n se ha actualizado.',
	'Click_return_album_personal' => 'Pulse %saqu�%s para volver a la configuraci�n de las galer�as personales',
	'Allow_Album_Avatars' => 'Permitir a los usuarios usar una imagen enviada al �lbum como avatar',
	'Album_Personal_Settings' => 'Galer�a personal',
	'Show_Personal_Sub_Cats' => 'Mostrar las sub categor�as personales  en la tabla �ndice',
	'Personal_Gallery_Approval' => 'Las muestras de las galer�as personales deben ser aprobadas por los administradores',
	'Personal_Gallery_MOD' => 'La galer�a personal puede ser moderada por el propietario',
	'Personal_Sub_Cat_Limit' => 'N�mero m�ximo de sub categor�as (-1 = ilimitado)',
	'User_Can_Create_Personal_SubCats' => 'Los usuarios pueden crear sub categor�as en sus galer�as personales',
	'Click_return_personal_gallery_index' => 'Pulse %saqu�%s para regresar al inicio de la galer�a personal',
	'Show_Recent_In_Personal_Subcats' => 'Mostrar las im�genes recientes en las sub categor�as personales',
	'Show_Recent_Instead_of_Personal_NoPics' => 'Mostrar las im�genes recientes en vez del mensaje de no hay im�genes nuevas en la galer�a personal',

// 03 - Categories
	'Categories' => 'Categor�as',
	'Album_Categories_Title' => 'Categor�as del �lbum',
	'Album_Categories_Explain' => 'Aqu� podr� gestionar sus categor�as: crear, modificar, borrar...',
	'Category_Permissions' => 'Permisos de las categor�as',
	'Category_Title' => 'T�tulo de la categor�a',
	'Category_Desc' => 'Descripci�n de la categor�a',
	'View_level' => 'Mostrar nivel',
	'Upload_level' => 'Subir nivel',
	'Rate_level' => 'Puntuar nivel',
	'Comment_level' => 'Comentar nivel',
	'Edit_level' => 'Editar nivel',
	'Delete_level' => 'Borrar nivel',
	'New_category_created' => 'La nueva categor�a se ha creado correctamente.',
	'Click_return_album_category' => 'Pulse %saqu�%s para volver a las categor�as del �lbum',
	'Category_updated' => 'La categor�a se ha actualizado.',
	'Delete_Category' => 'Borrar categor�a',
	'Delete_Category_Explain' => 'El formulario siguiente permite borrar una categor�a y decidir d�nde quiere poner las fotos que conten�a.',
	'Delete_all_pics' => 'Borrar todas las fotos',
	'Category_deleted' => 'La categor�a se ha borrado correctamente.',
	'Category_changed_order' => 'Se ha cambiado el orden de la categor�a correctamente.',
	'Personal_Root_Gallery' => 'Categor�a ra�z de la galer�a personal',
	'Parent_Category' => 'Categor�a primaria (para esta categor�a)',
	'Child_Category_Moved' => 'La categor�a seleccionada tiene categor�as secundarias. Las categor�as secundarias han sido movidas a la categor�a <B>%s</B>.',
	'No_Self_Refering_Cat' => 'No puede seleccionar una categor�a como primaria para s� misma',
	'Can_Not_Change_Main_Parent' => 'No puede cambiar a primaria la categor�a principal de su galer�a personal',
	'Watermark' => 'Marca de agua (WaterMark)',
	'Watermark_explain' => 'Usted puede especificar el archivo de marca de agua (watermark file) usando esta categor�a. Inserte la ruta del de su archivo de marca de agua respecto su Icy Phoenix (Ejemplo: <b>album_mod/mark_fap.png</b>). La marca de agua se aplicar� s�lo la caracter�stica marca de agua (Watermark) est� activada.',
	'Cat_Pics_Synchronize' => 'Sincronizar contador de im�genes',
	'Cat_Pics_Synchronized' => 'Todos los contadores de im�genes han sido sincronizados.',

// 04 - Permissions
	'Album_Auth_Title' => 'Permisos del �lbum',
	'Album_Auth_Explain' => 'Aqu� puede elegir qu� grupo/s puede/n moderar cada categor�a del �lbum o si simplemente tienen acceso privado.',
	'Select_a_Category' => 'Seleccionar una categor�a',
	'Look_up_Category' => 'Buscar una categor�a',
	'Album_Auth_successfully' => 'Autorizaciones actualizadas correctamente.',
	'Click_return_album_auth' => 'Pulse %saqu�%s para volver a los permisos del �lbum.',
	'Upload' => 'Subir',
	'Rate' => 'Valorar',
	'Comment' => 'Comentar',

// 05 - Thumbnails
	'Use_Old_Thumbnails' => 'Utilizar las funciones viejas de las miniaturas',
	'Use_Old_Thumbnails_Explain' => 'Si activa esta caracter�stica, utilizar� la funci�n vieja de las miniaturas para generar peque�as y medianas miniaturas, lo que acelera la subida de im�genes. Puede usar esta funci�n solo si tiene problemas cuando esta opci�n no esta activa.',

// 06 - Sorting
	'Album_Category_Sorting' => 'Clase de las categor�as de �lbum',
	'Album_Category_Sorting_Id' => 'ID',
	'Album_Category_Sorting_Name' => 'Nombre',
	'Album_Category_Sorting_Order' => 'Orden de clase (default)',
	'Album_Category_Sorting_Direction' => 'Ordenar por (solo valido por ID y nombre)',
	'Album_Category_Sorting_Asc' => 'Ascendente',
	'Album_Category_Sorting_Desc' => 'Descendente',

// 07 - Clear Cache
	'Clear_Cache_Tab' => 'Cach�',
	'Clear_Cache' => 'Borrar cach�',
	'Album_clear_cache_confirm' => 'Si usa la cach� debe borrarla despu�s de efectuar cambios en la configuraci�n del �lbum.<br /><br /> �Quiere borrarla ahora?',
	'Thumbnail_cache_cleared_successfully' => '<br />Su cach� se ha borrado correctamente.<br />&nbsp;',

// ACP - Javascript text
	'acp_ask_save_changes' => '�Quiere guardar los cambios?\n(OK = Si, Cancel = No)',
	'acp_nothing_to_save' => 'Nada para guardar!',
	'acp_settings_changed_ask_save' => 'Ha cambiado la configuraci�n. �Quiere guardarla?\n(OK = Si, Cancel = No)',

// GD Info
	'GD_Info' => 'Informaci�n GD',
	'GD_Title' => 'Informaci�n GD',
	'GD_Description' => 'Aqu� puede informarse acerca de la librer�a libreria GD que tiene actuialmente instalada',
	'GD_Version' => 'Versi�n:',
	'GD_Freetype_Support' => 'Soporte fuentes freetype:',
	'GD_Freetype_Linkage' => 'Enlace tipo freetype:',
	'GD_T1lib_Support' => 'Soporte t1lib:',
	'GD_Gif_Read_Support' => 'Soporte de lectura gif:',
	'GD_Gif_Create_Support' => 'Soporte de creaci�n gif:',
	'GD_Jpg_Support' => 'Soporte jpg/jpeg:',
	'GD_Png_Support' => 'Soporte png:',
	'GD_Wbmp_Support' => 'Soporte WBMP:',
	'GD_XBM_Support' => 'Soporte XBM:',
	'GD_Jis_Mapped_Support' => 'Soporte fuente japonesa:',
	'GD_True' => 'S�',
	'GD_False' => 'No',

// Multiple Uploads Admin configuration
	'Upload_Settings' => 'Subida',
	'Max_Files_To_Upload' => 'N�mero m�ximo de archivos que puede subir a la vez',
	'Album_upload_settings' => 'Configuraci�n de subida de fotos',
	'Max_pregenerated_fields' => 'N�mero m�ximo de formularios para pregenerar',
	'Dynamic_field_generation' => 'Activar funci�n autom�tica de adici�n de formularios para subir',
	'Pre_generate_fields' => 'Pregenerar el formulario para subir',
	'Propercase_pic_title' => 'Corregir uso de MAY�SCULAS y min�sculas en el t�tulo ej: <i>\'este es un ejemplo\'</i><br />Estableciendo esto en \'NO\' dar� como resultado <i>\'esto es un ejemplo\'.</i>',
	'Pic_Resampling' => 'Habilitando esta opci�n, cada imagen ser� modificada en tama�o durante la navegaci�n si es necesario (para mantener las propiedades de la imagen de acuerdo a la configuraci�n del �lbum en el ACP).',
	'Max_file_size_resampling' => 'Tama�o m�ximo del archivo antes de la modificaci�n de tama�o del mismo (bytes)',

// CLowN
	'SP_Album_config' => 'CLowN SP',
	'SP_Album_config_explain' => 'Aqu� puede configurar algunas opciones para el paquete de servicio del �lbum',
	'SP_Album_sp_general' => 'Configuraci�n general',
	'SP_Album_sp_watermark' => 'Configuraci�n de marca de agua',
	'SP_Album_sp_hotornot' => 'Caliente o no configurado',
	'SP_Rate_type' => 'Selecionar el tipo de valoraci�n para la imagen',
	'SP_Rate_type_0' => 'Im�genes solamente',
	'SP_Rate_type_1' => 'N�meros solamente',
	'SP_Rate_type_2' => 'N�meros e im�genes',
	'SP_Display_latest' => 'Mostrar las �ltimas im�genes publicadas',
	'SP_Display_highest' => 'Mostrar las im�genes mejor valoradas',
	'SP_Display_most_viewed' => 'Mostrar las im�genes m�s vistas',
	'SP_Display_random' => 'Mostrar bloques de im�genes aleatorias',
	'SP_Pic_row' => 'N�mero de filas de im�genes en la vista previa',
	'SP_Pic_col' => 'N�mero de columnas de im�genes en la vista previa',
	'SP_Midthumb_use' => 'Usar miniatura media',
	'SP_Midthumb_cache' => 'Habilitar captura de miniatura media',
	'SP_Midthumb_high' => 'Altura de la miniatura media (p�xeles)',
	'SP_Midthumb_width' => 'Ancho de la miniatura media (p�xeles)',
	'SP_Watermark' => 'Usar marca de agua',
	'SP_Watermark_users' => 'Mostrar marca de agua para todos los usuarios. Si \'No\', s�lo mostrarla a los usuarios no registrados',
	'SP_Watermark_placent' => 'Posici�n de marca de agua en la imagen',
	'SP_Hon_already_rated' => 'Valoraci�n ilimitada en caliente o no en la p�gina',
	'SP_Hon_sep_rating' => 'Guardar el rango de �Caliente? en una tabla separada',
	'SP_Hon_where' => '�Mostrar im�genes �Caliente? de qu� categor�as? (dejar en blanco para usar im�genes de todas las categor�as; si son mas de una, separarlas por comas)',
	'SP_Hon_users' => 'Los usuarios no registrados pueden valorar',

	'SP_Disabled' => 'Deshabilitado',
	'SP_Enabled' => 'Habilitado',
	'SP_Yes' => 'S�',
	'SP_No' => 'No',
	'SP_Always' => 'Siempre',
	'SP_Submit' => 'Enviar',
	'SP_Reset' => 'Actualizar',

// Nuffload
	'Nuffload_Config' => 'Configuraci�n nuffload',
	'Enable_Nuffload' => 'Habilitar nuffload',
	'Enable_Nuffload_Explain' => 'Habilitando esta opci�n, nuffload se usar� en vez de la forma com�n de subida.',
	'progress_bar_configuration' => 'Configuraci�n de barra de progreso nuffload -',
	'perl_uploader' => 'Habilitar subida perl',
	'path_to_bin' => 'Ruta de la ra�z del Icy Phoenix al cgi-bin (p.e., <b>./cgi-bin/</b> si tiene phpBB en un sub-directorio)',
	'show_progress_bar' => 'Mostrar la barra de progreso para las subidas',
	'close_progress_bar' => 'Cerrar la barra de progreso al terminar',
	'activity_timeout' => 'Tiempo fuera de actividad (segs.)',
	'simple_format' => 'Utilice el formato simple para la barra del progreso',
	'multiple_uploads_configuration' => 'Configuraci�n de subida m�ltiple nuffload',
	'multiple_uploads' => 'Habilitar subidas m�ltiples',
	'max_uploads' => 'Campos m�ximos de la subida',
	'zip_uploads' => 'Habilitar subidas ZIP',
	'image_resizing_configuration' => 'Configuraci�n de la modificaci�n de tama�o de im�genes nuffload',
	'image_resizing' => 'Habilitar la modificaci�n de tama�o de las im�genes',
	'image_width' => 'Ancho de la imagen',
	'image_height' => 'Alto de la imagen',
	'image_quality' => 'Calidad de la imagen',
	)
);
?>